<?php 
namespace Google\Service\Dns\Resource;
class ResourceRecordSets extends \Google\Resource\Service
{

  /**
   * Enumerate ResourceRecordSets that have been created but not yet deleted.
   * (resourceRecordSets.listResourceRecordSets)
   *
   * @param string $project
   * Identifies the project addressed by this request.
   * @param string $managedZone
   * Identifies the managed zone addressed by this request. Can be the managed zone name or id.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string name
   * Restricts the list to return only records with this fully qualified domain name.
   * @opt_param int maxResults
   * Optional. Maximum number of results to be returned. If unspecified, the server will decide how
    * many results to return.
   * @opt_param string pageToken
   * Optional. A tag returned by a previous list request that was truncated. Use this parameter to
    * continue a previous list request.
   * @opt_param string type
   * Restricts the list to return only records of this type. If present, the "name" parameter must
    * also be present.
   * @return \Google\Service\Dns\ResourceRecordSetsListResponse
   */
  public function listResourceRecordSets($project, $managedZone, $optParams = array())
  {
    $params = array('project' => $project, 'managedZone' => $managedZone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Dns\ResourceRecordSetsListResponse');
  }
}
