<?php 
namespace Google\IO;
class Curl extends \Google\IO\AbstractIO
{
  // cURL hex representation of version 7.30.0
  const NO_QUIRK_VERSION = 0x071E00;

  private $options = array();
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
    $curl = curl_init();

    if ($request->getPostBody()) {
      curl_setopt($curl, CURLOPT_POSTFIELDS, $request->getPostBody());
    }

    $requestHeaders = $request->getRequestHeaders();
    if ($requestHeaders && is_array($requestHeaders)) {
      $curlHeaders = array();
      foreach ($requestHeaders as $k => $v) {
        $curlHeaders[] = "$k: $v";
      }
      curl_setopt($curl, CURLOPT_HTTPHEADER, $curlHeaders);
    }

    curl_setopt($curl, CURLOPT_URL, $request->getUrl());
    
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $request->getRequestMethod());
    curl_setopt($curl, CURLOPT_USERAGENT, $request->getUserAgent());

    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, true);

    if ($request->canGzip()) {
      curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
    }

    foreach ($this->options as $key => $var) {
      curl_setopt($curl, $key, $var);
    }

    if (!isset($this->options[CURLOPT_CAINFO])) {
      if (defined('CA_FILE_PATH')) { curl_setopt($curl, CURLOPT_CAINFO, CA_FILE_PATH); } else { curl_setopt($curl, CURLOPT_CAINFO, dirname(__FILE__) . '/cacerts.pem'); }
    }

    $response = curl_exec($curl);
    if ($response === false) {
      throw new \Google\IO\Exception(curl_error($curl));
    }
    $headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);

    list($responseHeaders, $responseBody) = $this->parseHttpResponse($response, $headerSize);

    $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    return array($responseBody, $responseHeaders, $responseCode);
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
    // Since this timeout is really for putting a bound on the time
    // we'll set them both to the same. If you need to specify a longer
    // CURLOPT_TIMEOUT, or a tigher CONNECTTIMEOUT, the best thing to
    // do is use the setOptions method for the values individually.
    $this->options[CURLOPT_CONNECTTIMEOUT] = $timeout;
    $this->options[CURLOPT_TIMEOUT] = $timeout;
  }

  /**
   * Get the maximum request time in seconds.
   * @return timeout in seconds
   */
  public function getTimeout()
  {
    return $this->options[CURLOPT_TIMEOUT];
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
    $ver = curl_version();
    $versionNum = $ver['version_number'];
    return $versionNum < \Google\IO\Curl::NO_QUIRK_VERSION;
  }
}
