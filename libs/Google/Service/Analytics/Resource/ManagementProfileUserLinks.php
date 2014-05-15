<?php 
namespace Google\Service\Analytics\Resource;
class ManagementProfileUserLinks extends \Google\Resource\Service
{

  /**
   * Removes a user from the given view (profile). (profileUserLinks.delete)
   *
   * @param string $accountId
   * Account ID to delete the user link for.
   * @param string $webPropertyId
   * Web Property ID to delete the user link for.
   * @param string $profileId
   * View (Profile) ID to delete the user link for.
   * @param string $linkId
   * Link ID to delete the user link for.
   * @param array $optParams Optional parameters.
   */
  public function delete($accountId, $webPropertyId, $profileId, $linkId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'linkId' => $linkId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Adds a new user to the given view (profile). (profileUserLinks.insert)
   *
   * @param string $accountId
   * Account ID to create the user link for.
   * @param string $webPropertyId
   * Web Property ID to create the user link for.
   * @param string $profileId
   * View (Profile) ID to create the user link for.
   * @param Google_EntityUserLink $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\EntityUserLink
   */
  public function insert($accountId, $webPropertyId, $profileId, \Google\Service\Analytics\EntityUserLink $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Analytics\EntityUserLink');
  }
  /**
   * Lists profile-user links for a given view (profile).
   * (profileUserLinks.listManagementProfileUserLinks)
   *
   * @param string $accountId
   * Account ID which the given view (profile) belongs to.
   * @param string $webPropertyId
   * Web Property ID which the given view (profile) belongs to.
   * @param string $profileId
   * View (Profile) ID to retrieve the profile-user links for
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results
   * The maximum number of profile-user links to include in this response.
   * @opt_param int start-index
   * An index of the first profile-user link to retrieve. Use this parameter as a pagination
    * mechanism along with the max-results parameter.
   * @return \Google\Service\Analytics\EntityUserLinks
   */
  public function listManagementProfileUserLinks($accountId, $webPropertyId, $profileId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Analytics\EntityUserLinks');
  }
  /**
   * Updates permissions for an existing user on the given view (profile).
   * (profileUserLinks.update)
   *
   * @param string $accountId
   * Account ID to update the user link for.
   * @param string $webPropertyId
   * Web Property ID to update the user link for.
   * @param string $profileId
   * View (Profile ID) to update the user link for.
   * @param string $linkId
   * Link ID to update the user link for.
   * @param Google_EntityUserLink $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\EntityUserLink
   */
  public function update($accountId, $webPropertyId, $profileId, $linkId, \Google\Service\Analytics\EntityUserLink $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'linkId' => $linkId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Analytics\EntityUserLink');
  }
}
