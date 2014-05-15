<?php 
namespace Google\Service\Dfareporting\Resource;
class UserProfiles extends \Google\Resource\Service
{

  /**
   * Gets one user profile by ID. (userProfiles.get)
   *
   * @param string $profileId
   * The user profile ID.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dfareporting\UserProfile
   */
  public function get($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Dfareporting\UserProfile');
  }
  /**
   * Retrieves list of user profiles for a user. (userProfiles.listUserProfiles)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dfareporting\UserProfileList
   */
  public function listUserProfiles($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Dfareporting\UserProfileList');
  }
}
