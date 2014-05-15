<?php 
namespace Google\Service\Calendar\Resource;
class Settings extends \Google\Resource\Service
{

  /**
   * Returns a single user setting. (settings.get)
   *
   * @param string $setting
   * The id of the user setting.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Setting
   */
  public function get($setting, $optParams = array())
  {
    $params = array('setting' => $setting);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Calendar\Setting');
  }
  /**
   * Returns all user settings for the authenticated user. (settings.listSettings)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Token specifying which result page to return. Optional.
   * @opt_param int maxResults
   * Maximum number of entries returned on one result page. Optional.
   * @opt_param string syncToken
   * Token obtained from the 'nextSyncToken' field returned on the last result page of the previous
    * method's call. It makes the result of this call contain only entries that have changed since the
    * last call. Optional. The default is to return all entries.
   * @return \Google\Service\Calendar\Settings
   */
  public function listSettings($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Calendar\Settings');
  }
  /**
   * Watch for changes to Settings resources. (settings.watch)
   *
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Token specifying which result page to return. Optional.
   * @opt_param int maxResults
   * Maximum number of entries returned on one result page. Optional.
   * @opt_param string syncToken
   * Token obtained from the 'nextSyncToken' field returned on the last result page of the previous
    * method's call. It makes the result of this call contain only entries that have changed since the
    * last call. Optional. The default is to return all entries.
   * @return \Google\Service\Calendar\Channel
   */
  public function watch(\Google\Service\Calendar\Channel $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), 'Google\Service\Calendar\Channel');
  }
}
