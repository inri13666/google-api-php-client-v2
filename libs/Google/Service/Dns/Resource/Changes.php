<?php 
namespace Google\Service\Dns\Resource;
class Changes extends \Google\Resource\Service
{

  /**
   * Atomically update the ResourceRecordSet collection. (changes.create)
   *
   * @param string $project
   * Identifies the project addressed by this request.
   * @param string $managedZone
   * Identifies the managed zone addressed by this request. Can be the managed zone name or id.
   * @param Google_Change $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dns\Change
   */
  public function create($project, $managedZone, \Google\Service\Dns\Change $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'managedZone' => $managedZone, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), 'Google\Service\Dns\Change');
  }
  /**
   * Fetch the representation of an existing Change. (changes.get)
   *
   * @param string $project
   * Identifies the project addressed by this request.
   * @param string $managedZone
   * Identifies the managed zone addressed by this request. Can be the managed zone name or id.
   * @param string $changeId
   * The identifier of the requested change, from a previous ResourceRecordSetsChangeResponse.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dns\Change
   */
  public function get($project, $managedZone, $changeId, $optParams = array())
  {
    $params = array('project' => $project, 'managedZone' => $managedZone, 'changeId' => $changeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Dns\Change');
  }
  /**
   * Enumerate Changes to a ResourceRecordSet collection. (changes.listChanges)
   *
   * @param string $project
   * Identifies the project addressed by this request.
   * @param string $managedZone
   * Identifies the managed zone addressed by this request. Can be the managed zone name or id.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults
   * Optional. Maximum number of results to be returned. If unspecified, the server will decide how
    * many results to return.
   * @opt_param string pageToken
   * Optional. A tag returned by a previous list request that was truncated. Use this parameter to
    * continue a previous list request.
   * @opt_param string sortBy
   * Sorting criterion. The only supported value is change sequence.
   * @opt_param string sortOrder
   * Sorting order direction: 'ascending' or 'descending'.
   * @return \Google\Service\Dns\ChangesListResponse
   */
  public function listChanges($project, $managedZone, $optParams = array())
  {
    $params = array('project' => $project, 'managedZone' => $managedZone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Dns\ChangesListResponse');
  }
}
