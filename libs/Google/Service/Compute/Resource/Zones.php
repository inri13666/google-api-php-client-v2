<?php 
namespace Google\Service\Compute\Resource;
class Zones extends \Google\Resource\Service
{

  /**
   * Returns the specified zone resource. (zones.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Zone
   */
  public function get($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Zone');
  }
  /**
   * Retrieves the list of zone resources available to the specified project.
   * (zones.listZones)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * Optional. Filter expression for filtering listed resources.
   * @opt_param string pageToken
   * Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a
    * previous list request.
   * @opt_param string maxResults
   * Optional. Maximum count of results to be returned. Maximum value is 500 and default value is
    * 500.
   * @return \Google\Service\Compute\ZoneList
   */
  public function listZones($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\ZoneList');
  }
}
