<?php 
namespace Google\Service\Orkut\Resource;
class Acl extends \Google\Resource\Service
{

  /**
   * Excludes an element from the ACL of the activity. (acl.delete)
   *
   * @param string $activityId
   * ID of the activity.
   * @param string $userId
   * ID of the user to be removed from the activity.
   * @param array $optParams Optional parameters.
   */
  public function delete($activityId, $userId, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
}
