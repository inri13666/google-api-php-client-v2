<?php 
namespace Google\IO;
abstract class AbstractIO
{
  const UNKNOWN_CODE = 0;
  const FORM_URLENCODED = 'application/x-www-form-urlencoded';
  const CONNECTION_ESTABLISHED = "HTTP/1.0 200 Connection established\r\n\r\n";
  private static $ENTITY_HTTP_METHODS = array("POST" => null, "PUT" => null);

  /** @var \Google\Client */
  protected $client;

  public function __construct(\Google\Client $client)
  {
    $this->client = $client;
    $timeout = $client->getClassConfig('Google\IO\AbstractIO', 'request_timeout_seconds');
    if ($timeout > 0) {
      $this->setTimeout($timeout);
    }
  }

  /**
   * Executes a \Google\Http\Request and returns the resulting populated \Google\Http\Request
   * @param \Google\Http\Request $request
   * @return \Google\Http\Request $request
   */
  abstract public function executeRequest(\Google\Http\Request $request);

  /**
   * Set options that update the transport implementation's behavior.
   * @param $options
   */
  abstract public function setOptions($options);
  
  /**
   * Set the maximum request time in seconds.
   * @param $timeout in seconds
   */
  abstract public function setTimeout($timeout);
  
  /**
   * Get the maximum request time in seconds.
   * @return timeout in seconds
   */
  abstract public function getTimeout();

  /**
   * Test for the presence of a cURL header processing bug
   *
   * The cURL bug was present in versions prior to 7.30.0 and caused the header
   * length to be miscalculated when a "Connection established" header added by
   * some proxies was present.
   *
   * @return boolean
   */
  abstract protected function needsQuirk();

  /**
   * @visible for testing.
   * Cache the response to an HTTP request if it is cacheable.
   * @param \Google\Http\Request $request
   * @return bool Returns true if the insertion was successful.
   * Otherwise, return false.
   */
  public function setCachedRequest(\Google\Http\Request $request)
  {
    // Determine if the request is cacheable.
    if (\Google\Http\CacheParser::isResponseCacheable($request)) {
      $this->client->getCache()->set($request->getCacheKey(), $request);
      return true;
    }

    return false;
  }
  
  /**
   * Execute an HTTP Request
   *
   * @param Google_HttpRequest $request the http request to be executed
   * @return Google_HttpRequest http request with the response http code,
   * response headers and response body filled in
   * @throws \Google\IO\Exception on curl or IO error
   */
  public function makeRequest(\Google\Http\Request $request)
  {
    // First, check to see if we have a valid cached version.
    $cached = $this->getCachedRequest($request);
    if ($cached !== false && $cached instanceof \Google\Http\Request) {
      if (!$this->checkMustRevalidateCachedRequest($cached, $request)) {
        return $cached;
      }
    }

    if (array_key_exists($request->getRequestMethod(), self::$ENTITY_HTTP_METHODS)) {
      $request = $this->processEntityRequest($request);
    }

    list($responseData, $responseHeaders, $respHttpCode) = $this->executeRequest($request);

    if ($respHttpCode == 304 && $cached) {
      // If the server responded NOT_MODIFIED, return the cached request.
      $this->updateCachedRequest($cached, $responseHeaders);
      return $cached;
    }

    if (!isset($responseHeaders['Date']) && !isset($responseHeaders['date'])) {
      $responseHeaders['Date'] = date("r");
    }

    $request->setResponseHttpCode($respHttpCode);
    $request->setResponseHeaders($responseHeaders);
    $request->setResponseBody($responseData);
    // Store the request in cache (the function checks to see if the request
    // can actually be cached)
    $this->setCachedRequest($request);
    return $request;
  }

  /**
   * @visible for testing.
   * @param \Google\Http\Request $request
   * @return \Google\Http\Request|bool Returns the cached object or
   * false if the operation was unsuccessful.
   */
  public function getCachedRequest(\Google\Http\Request $request)
  {
    if (false === \Google\Http\CacheParser::isRequestCacheable($request)) {
      return false;
    }

    return $this->client->getCache()->get($request->getCacheKey());
  }

  /**
   * @visible for testing
   * Process an http request that contains an enclosed entity.
   * @param \Google\Http\Request $request
   * @return \Google\Http\Request Processed request with the enclosed entity.
   */
  public function processEntityRequest(\Google\Http\Request $request)
  {
    $postBody = $request->getPostBody();
    $contentType = $request->getRequestHeader("content-type");

    // Set the default content-type as application/x-www-form-urlencoded.
    if (false == $contentType) {
      $contentType = self::FORM_URLENCODED;
      $request->setRequestHeaders(array('content-type' => $contentType));
    }

    // Force the payload to match the content-type asserted in the header.
    if ($contentType == self::FORM_URLENCODED && is_array($postBody)) {
      $postBody = http_build_query($postBody, '', '&');
      $request->setPostBody($postBody);
    }

    // Make sure the content-length header is set.
    if (!$postBody || is_string($postBody)) {
      $postsLength = strlen($postBody);
      $request->setRequestHeaders(array('content-length' => $postsLength));
    }

    return $request;
  }

  /**
   * Check if an already cached request must be revalidated, and if so update
   * the request with the correct ETag headers.
   * @param \Google\Http\Request $cached A previously cached response.
   * @param \Google\Http\Request $request The outbound request.
   * return bool If the cached object needs to be revalidated, false if it is
   * still current and can be re-used.
   */
  protected function checkMustRevalidateCachedRequest($cached, $request)
  {
    if (\Google\Http\CacheParser::mustRevalidate($cached)) {
      $addHeaders = array();
      if ($cached->getResponseHeader('etag')) {
        // [13.3.4] If an entity tag has been provided by the origin server,
        // we must use that entity tag in any cache-conditional request.
        $addHeaders['If-None-Match'] = $cached->getResponseHeader('etag');
      } elseif ($cached->getResponseHeader('date')) {
        $addHeaders['If-Modified-Since'] = $cached->getResponseHeader('date');
      }

      $request->setRequestHeaders($addHeaders);
      return true;
    } else {
      return false;
    }
  }

  /**
   * Update a cached request, using the headers from the last response.
   * @param Google_HttpRequest $cached A previously cached response.
   * @param mixed Associative array of response headers from the last request.
   */
  protected function updateCachedRequest($cached, $responseHeaders)
  {
    if (isset($responseHeaders['connection'])) {
      $hopByHop = array_merge(
          self::$HOP_BY_HOP,
          explode(
              ',',
              $responseHeaders['connection']
          )
      );

      $endToEnd = array();
      foreach ($hopByHop as $key) {
        if (isset($responseHeaders[$key])) {
          $endToEnd[$key] = $responseHeaders[$key];
        }
      }
      $cached->setResponseHeaders($endToEnd);
    }
  }

  /**
   * Used by the IO lib and also the batch processing.
   *
   * @param $respData
   * @param $headerSize
   * @return array
   */
  public function parseHttpResponse($respData, $headerSize)
  {
    if (stripos($respData, self::CONNECTION_ESTABLISHED) !== false) {
      $respData = str_ireplace(self::CONNECTION_ESTABLISHED, '', $respData);

      // Subtract the proxy header size unless the cURL bug prior to 7.30.0
      // is present which prevented the proxy header size from being taken into
      // account.
      if (!$this->needsQuirk()) {
        $headerSize -= strlen(self::CONNECTION_ESTABLISHED);
      }
    }

    if ($headerSize) {
      $responseBody = substr($respData, $headerSize);
      $responseHeaders = substr($respData, 0, $headerSize);
    } else {
      list($responseHeaders, $responseBody) = explode("\r\n\r\n", $respData, 2);
    }

    $responseHeaders = $this->getHttpResponseHeaders($responseHeaders);
    return array($responseHeaders, $responseBody);
  }

  /**
   * Parse out headers from raw headers
   * @param rawHeaders array or string
   * @return array
   */
  public function getHttpResponseHeaders($rawHeaders)
  {
    if (is_array($rawHeaders)) {
      return $this->parseArrayHeaders($rawHeaders);
    } else {
      return $this->parseStringHeaders($rawHeaders);
    }
  }

  private function parseStringHeaders($rawHeaders)
  {
    $headers = array();
    $responseHeaderLines = explode("\r\n", $rawHeaders);
    foreach ($responseHeaderLines as $headerLine) {
      if ($headerLine && strpos($headerLine, ':') !== false) {
        list($header, $value) = explode(': ', $headerLine, 2);
        $header = strtolower($header);
        if (isset($responseHeaders[$header])) {
          $headers[$header] .= "\n" . $value;
        } else {
          $headers[$header] = $value;
        }
      }
    }
    return $headers;
  }

  private function parseArrayHeaders($rawHeaders)
  {
    $header_count = count($rawHeaders);
    $headers = array();

    for ($i = 0; $i < $header_count; $i++) {
      $header = $rawHeaders[$i];
      // Times will have colons in - so we just want the first match.
      $header_parts = explode(': ', $header, 2);
      if (count($header_parts) == 2) {
        $headers[$header_parts[0]] = $header_parts[1];
      }
    }

    return $headers;
  }
}
