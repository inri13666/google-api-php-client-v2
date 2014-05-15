<?php 
namespace Google\Service\Groupssettings\Resource;
class Groups extends \Google\Resource\Service
{

  /**
   * Gets one resource by id. (groups.get)
   *
   * @param string $groupUniqueId
   * The resource ID
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Groupssettings\Groups
   */
  public function get($groupUniqueId, $optParams = array())
  {
    $params = array('groupUniqueId' => $groupUniqueId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Groupssettings\Groups');
  }
  /**
   * Updates an existing resource. This method supports patch semantics.
   * (groups.patch)
   *
   * @param string $groupUniqueId
   * The resource ID
   * @param Google_Groups $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Groupssettings\Groups
   */
  public function patch($groupUniqueId, \Google\Service\Groupssettings\Groups $postBody, $optParams = array())
  {
    $params = array('groupUniqueId' => $groupUniqueId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Groupssettings\Groups');
  }
  /**
   * Updates an existing resource. (groups.update)
   *
   * @param string $groupUniqueId
   * The resource ID
   * @param Google_Groups $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Groupssettings\Groups
   */
  public function update($groupUniqueId, \Google\Service\Groupssettings\Groups $postBody, $optParams = array())
  {
    $params = array('groupUniqueId' => $groupUniqueId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Groupssettings\Groups');
  }
}
