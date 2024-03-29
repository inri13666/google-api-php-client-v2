<?php 
namespace Google\Service\Analytics\Resource;
class ManagementProfiles extends \Google\Resource\Service
{

  /**
   * Deletes a view (profile). (profiles.delete)
   *
   * @param string $accountId
   * Account ID to delete the view (profile) for.
   * @param string $webPropertyId
   * Web property ID to delete the view (profile) for.
   * @param string $profileId
   * ID of the view (profile) to be deleted.
   * @param array $optParams Optional parameters.
   */
  public function delete($accountId, $webPropertyId, $profileId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a view (profile) to which the user has access. (profiles.get)
   *
   * @param string $accountId
   * Account ID to retrieve the goal for.
   * @param string $webPropertyId
   * Web property ID to retrieve the goal for.
   * @param string $profileId
   * View (Profile) ID to retrieve the goal for.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\Profile
   */
  public function get($accountId, $webPropertyId, $profileId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Analytics\Profile');
  }
  /**
   * Create a new view (profile). (profiles.insert)
   *
   * @param string $accountId
   * Account ID to create the view (profile) for.
   * @param string $webPropertyId
   * Web property ID to create the view (profile) for.
   * @param Google_Profile $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\Profile
   */
  public function insert($accountId, $webPropertyId, \Google\Service\Analytics\Profile $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Analytics\Profile');
  }
  /**
   * Lists views (profiles) to which the user has access.
   * (profiles.listManagementProfiles)
   *
   * @param string $accountId
   * Account ID for the view (profiles) to retrieve. Can either be a specific account ID or '~all',
    * which refers to all the accounts to which the user has access.
   * @param string $webPropertyId
   * Web property ID for the views (profiles) to retrieve. Can either be a specific web property ID
    * or '~all', which refers to all the web properties to which the user has access.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results
   * The maximum number of views (profiles) to include in this response.
   * @opt_param int start-index
   * An index of the first entity to retrieve. Use this parameter as a pagination mechanism along
    * with the max-results parameter.
   * @return \Google\Service\Analytics\Profiles
   */
  public function listManagementProfiles($accountId, $webPropertyId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Analytics\Profiles');
  }
  /**
   * Updates an existing view (profile). This method supports patch semantics.
   * (profiles.patch)
   *
   * @param string $accountId
   * Account ID to which the view (profile) belongs
   * @param string $webPropertyId
   * Web property ID to which the view (profile) belongs
   * @param string $profileId
   * ID of the view (profile) to be updated.
   * @param Google_Profile $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\Profile
   */
  public function patch($accountId, $webPropertyId, $profileId, \Google\Service\Analytics\Profile $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Analytics\Profile');
  }
  /**
   * Updates an existing view (profile). (profiles.update)
   *
   * @param string $accountId
   * Account ID to which the view (profile) belongs
   * @param string $webPropertyId
   * Web property ID to which the view (profile) belongs
   * @param string $profileId
   * ID of the view (profile) to be updated.
   * @param Google_Profile $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\Profile
   */
  public function update($accountId, $webPropertyId, $profileId, \Google\Service\Analytics\Profile $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Analytics\Profile');
  }
}
