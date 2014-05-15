<?php 
namespace Google\Service\Orkut\Resource;
class CommunityFollow extends \Google\Resource\Service
{

  /**
   * Removes a user from the followers of a community. (communityFollow.delete)
   *
   * @param int $communityId
   * ID of the community.
   * @param string $userId
   * ID of the user.
   * @param array $optParams Optional parameters.
   */
  public function delete($communityId, $userId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Adds a user as a follower of a community. (communityFollow.insert)
   *
   * @param int $communityId
   * ID of the community.
   * @param string $userId
   * ID of the user.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\CommunityMembers
   */
  public function insert($communityId, $userId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Orkut\CommunityMembers');
  }
}
