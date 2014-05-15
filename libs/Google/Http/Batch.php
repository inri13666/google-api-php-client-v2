<?php 
namespace Google\Http;
class Batch
{
  /** @var string Multipart Boundary. */
  private $boundary;

  /** @var array service requests to be executed. */
  private $requests = array();

  /** @var \Google\Client */
  private $client;

  private $expected_classes = array();

  private $base_path;

  public function __construct(\Google\Client $client, $boundary = false)
  {
    $this->client = $client;
    $this->base_path = $this->client->getBasePath();
    $this->expected_classes = array();
    $boundary = (false == $boundary) ? mt_rand() : $boundary;
    $this->boundary = str_replace('"', '', $boundary);
  }

  public function add(\Google\Http\Request $request, $key = false)
  {
    if (false == $key) {
      $key = mt_rand();
    }

    $this->requests[$key] = $request;
  }

  public function execute()
  {
    $body = '';

    /** @var \Google\Http\Request $req */
    foreach ($this->requests as $key => $req) {
      $body .= "--{$this->boundary}\n";
      $body .= $req->toBatchString($key) . "\n";
      $this->expected_classes["response-" . $key] = $req->getExpectedClass();
    }

    $body = rtrim($body);
    $body .= "\n--{$this->boundary}--";

    $url = $this->base_path . '/batch';
    $httpRequest = new \Google\Http\Request($url, 'POST');
    $httpRequest->setRequestHeaders(
        array('Content-Type' => 'multipart/mixed; boundary=' . $this->boundary)
    );

    $httpRequest->setPostBody($body);
    $response = $this->client->getIo()->makeRequest($httpRequest);

    return $this->parseResponse($response);
  }

  public function parseResponse(\Google\Http\Request $response)
  {
    $contentType = $response->getResponseHeader('content-type');
    $contentType = explode(';', $contentType);
    $boundary = false;
    foreach ($contentType as $part) {
      $part = (explode('=', $part, 2));
      if (isset($part[0]) && 'boundary' == trim($part[0])) {
        $boundary = $part[1];
      }
    }

    $body = $response->getResponseBody();
    if ($body) {
      $body = str_replace("--$boundary--", "--$boundary", $body);
      $parts = explode("--$boundary", $body);
      $responses = array();

      foreach ($parts as $part) {
        $part = trim($part);
        if (!empty($part)) {
          list($metaHeaders, $part) = explode("\r\n\r\n", $part, 2);
          $metaHeaders = $this->client->getIo()->getHttpResponseHeaders($metaHeaders);

          $status = substr($part, 0, strpos($part, "\n"));
          $status = explode(" ", $status);
          $status = $status[1];

          list($partHeaders, $partBody) = $this->client->getIo()->ParseHttpResponse($part, false);
          $response = new \Google\Http\Request("");
          $response->setResponseHttpCode($status);
          $response->setResponseHeaders($partHeaders);
          $response->setResponseBody($partBody);

          // Need content id.
          $key = $metaHeaders['content-id'];

          if (isset($this->expected_classes[$key]) &&
              strlen($this->expected_classes[$key]) > 0) {
            $class = $this->expected_classes[$key];
            $response->setExpectedClass($class);
          }

          try {
            $response = \Google\Http\REST::decodeHttpResponse($response);
            $responses[$key] = $response;
          } catch (\Google\Service\Exception $e) {
            // Store the exception as the response, so succesful responses
            // can be processed.
            $responses[$key] = $e;
          }
        }
      }

      return $responses;
    }

    return null;
  }
}
