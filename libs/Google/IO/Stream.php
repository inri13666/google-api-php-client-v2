<?php 
namespace Google\IO;
class Stream extends \Google\IO\AbstractIO
{
  const TIMEOUT = "timeout";
  const ZLIB = "compress.zlib://";
  private $options = array();

  private static $DEFAULT_HTTP_CONTEXT = array(
    "follow_location" => 0,
    "ignore_errors" => 1,
  );

  private static $DEFAULT_SSL_CONTEXT = array(
    "verify_peer" => true,
  );

  /**
   * Execute an HTTP Request
   *
   * @param Google_HttpRequest $request the http request to be executed
   * @return Google_HttpRequest http request with the response http code,
   * response headers and response body filled in
   * @throws \Google\IO\Exception on curl or IO error
   */
  public function executeRequest(\Google\Http\Request $request)
  {
    $default_options = stream_context_get_options(stream_context_get_default());

    $requestHttpContext = array_key_exists('http', $default_options) ?
        $default_options['http'] : array();

    if ($request->getPostBody()) {
      $requestHttpContext["content"] = $request->getPostBody();
    }

    $requestHeaders = $request->getRequestHeaders();
    if ($requestHeaders && is_array($requestHeaders)) {
      $headers = "";
      foreach ($requestHeaders as $k => $v) {
        $headers .= "$k: $v\r\n";
      }
      $requestHttpContext["header"] = $headers;
    }

    $requestHttpContext["method"] = $request->getRequestMethod();
    $requestHttpContext["user_agent"] = $request->getUserAgent();

    $requestSslContext = array_key_exists('ssl', $default_options) ?
        $default_options['ssl'] : array();

    if (!array_key_exists("cafile", $requestSslContext)) {
      if (defined('CA_FILE_PATH')) { $requestSslContext["cafile"] = CA_FILE_PATH; } else { $requestSslContext["cafile"] = dirname(__FILE__) . '/cacerts.pem'; }
    }

    $options = array(
        "http" => array_merge(
            self::$DEFAULT_HTTP_CONTEXT,
            $requestHttpContext
        ),
        "ssl" => array_merge(
            self::$DEFAULT_SSL_CONTEXT,
            $requestSslContext
        )
    );

    $context = stream_context_create($options);

    $url = $request->getUrl();

    if ($request->canGzip()) {
      $url = self::ZLIB . $url;
    }

    // Not entirely happy about this, but supressing the warning from the
    // fopen seems like the best situation here - we can't do anything
    // useful with it, and failure to connect is a legitimate run
    // time situation.
    @$fh = fopen($url, 'r', false, $context);

    $response_data = false;
    $respHttpCode = self::UNKNOWN_CODE;
    if ($fh) {
      if (isset($this->options[self::TIMEOUT])) {
        stream_set_timeout($fh, $this->options[self::TIMEOUT]);
      }

      $response_data = stream_get_contents($fh);
      fclose($fh);

      $respHttpCode = $this->getHttpResponseCode($http_response_header);
    }

    if (false === $response_data) {
      throw new \Google\IO\Exception(
          sprintf(
              "HTTP Error: Unable to connect: '%s'",
              $respHttpCode
          ),
          $respHttpCode
      );
    }

    $responseHeaders = $this->getHttpResponseHeaders($http_response_header);

    return array($response_data, $responseHeaders, $respHttpCode);
  }

  /**
   * Set options that update the transport implementation's behavior.
   * @param $options
   */
  public function setOptions($options)
  {
    $this->options = $options + $this->options;
  }

  /**
   * Set the maximum request time in seconds.
   * @param $timeout in seconds
   */
  public function setTimeout($timeout)
  {
    $this->options[self::TIMEOUT] = $timeout;
  }

  /**
   * Get the maximum request time in seconds.
   * @return timeout in seconds
   */
  public function getTimeout()
  {
    return $this->options[self::TIMEOUT];
  }

  /**
   * Test for the presence of a cURL header processing bug
   *
   * {@inheritDoc}
   *
   * @return boolean
   */
  protected function needsQuirk()
  {
    return false;
  }

  protected function getHttpResponseCode($response_headers)
  {
    $header_count = count($response_headers);

    for ($i = 0; $i < $header_count; $i++) {
      $header = $response_headers[$i];
      if (strncasecmp("HTTP", $header, strlen("HTTP")) == 0) {
        $response = explode(' ', $header);
        return $response[1];
      }
    }
    return self::UNKNOWN_CODE;
  }
}
