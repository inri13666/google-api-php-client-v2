<?php 
namespace Google\Service\Dns\Resource;
class ManagedZones extends \Google\Resource\Service
{

  /**
   * Create a new ManagedZone. (managedZones.create)
   *
   * @param string $project
   * Identifies the project addressed by this request.
   * @param Google_ManagedZone $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dns\ManagedZone
   */
  public function create($project, \Google\Service\Dns\ManagedZone $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), 'Google\Service\Dns\ManagedZone');
  }
  /**
   * Delete a previously created ManagedZone. (managedZones.delete)
   *
   * @param string $project
   * Identifies the project addressed by this request.
   * @param string $managedZone
   * Identifies the managed zone addressed by this request. Can be the managed zone name or id.
   * @param array $optParams Optional parameters.
   */
  public function delete($project, $managedZone, $optParams = array())
  {
    $params = array('project' => $project, 'managedZone' => $managedZone);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Fetch the representation of an existing ManagedZone. (managedZones.get)
   *
   * @param string $project
   * Identifies the project addressed by this request.
   * @param string $managedZone
   * Identifies the managed zone addressed by this request. Can be the managed zone name or id.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dns\ManagedZone
   */
  public function get($project, $managedZone, $optParams = array())
  {
    $params = array('project' => $project, 'managedZone' => $managedZone);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Dns\ManagedZone');
  }
  /**
   * Enumerate ManagedZones that have been created but not yet deleted.
   * (managedZones.listManagedZones)
   *
   * @param string $project
   * Identifies the project addressed by this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Optional. A tag returned by a previous list request that was truncated. Use this parameter to
    * continue a previous list request.
   * @opt_param int maxResults
   * Optional. Maximum number of results to be returned. If unspecified, the server will decide how
    * many results to return.
   * @return \Google\Service\Dns\ManagedZonesListResponse
   */
  public function listManagedZones($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Dns\ManagedZonesListResponse');
  }
}
