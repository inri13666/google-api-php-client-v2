<?php 
namespace Google\Service\Orkut\Resource;
class Badges extends \Google\Resource\Service
{

  /**
   * Retrieves a badge from a user. (badges.get)
   *
   * @param string $userId
   * The ID of the user whose badges will be listed. Can be me to refer to caller.
   * @param string $badgeId
   * The ID of the badge that will be retrieved.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Badge
   */
  public function get($userId, $badgeId, $optParams = array())
  {
    $params = array('userId' => $userId, 'badgeId' => $badgeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Orkut\Badge');
  }
  /**
   * Retrieves the list of visible badges of a user. (badges.listBadges)
   *
   * @param string $userId
   * The id of the user whose badges will be listed. Can be me to refer to caller.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\BadgeList
   */
  public function listBadges($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Orkut\BadgeList');
  }
}
