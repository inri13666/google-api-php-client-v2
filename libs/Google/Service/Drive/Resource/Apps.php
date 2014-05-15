<?php 
namespace Google\Service\Drive\Resource;
class Apps extends \Google\Resource\Service
{

  /**
   * Gets a specific app. (apps.get)
   *
   * @param string $appId
   * The ID of the app.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\App
   */
  public function get($appId, $optParams = array())
  {
    $params = array('appId' => $appId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Drive\App');
  }
  /**
   * Lists a user's installed apps. (apps.listApps)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode
   * A language or locale code, as defined by BCP 47, with some extensions from Unicode's LDML format
    * (http://www.unicode.org/reports/tr35/).
   * @opt_param string appFilterExtensions
   * A comma-separated list of file extensions for open with filtering. All apps within the given app
    * query scope which can open any of the given file extensions will be included in the response. If
    * appFilterMimeTypes are provided as well, the result is a union of the two resulting app lists.
   * @opt_param string appFilterMimeTypes
   * A comma-separated list of MIME types for open with filtering. All apps within the given app
    * query scope which can open any of the given MIME types will be included in the response. If
    * appFilterExtensions are provided as well, the result is a union of the two resulting app lists.
   * @return \Google\Service\Drive\AppList
   */
  public function listApps($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Drive\AppList');
  }
}
