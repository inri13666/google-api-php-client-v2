<?php 
namespace Google\Service\Urlshortener\Resource;
class Url extends \Google\Resource\Service
{

  /**
   * Expands a short URL or gets creation time and analytics. (url.get)
   *
   * @param string $shortUrl
   * The short URL, including the protocol.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projection
   * Additional information to return.
   * @return \Google\Service\Urlshortener\Url
   */
  public function get($shortUrl, $optParams = array())
  {
    $params = array('shortUrl' => $shortUrl);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Urlshortener\Url');
  }
  /**
   * Creates a new short URL. (url.insert)
   *
   * @param Google_Url $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Urlshortener\Url
   */
  public function insert(\Google\Service\Urlshortener\Url $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Urlshortener\Url');
  }
  /**
   * Retrieves a list of URLs shortened by a user. (url.listUrl)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string start-token
   * Token for requesting successive pages of results.
   * @opt_param string projection
   * Additional information to return.
   * @return \Google\Service\Urlshortener\UrlHistory
   */
  public function listUrl($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Urlshortener\UrlHistory');
  }
}
