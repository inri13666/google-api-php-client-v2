<?php 
namespace Google\Service\Compute\Resource;
class Disks extends \Google\Resource\Service
{

  /**
   * Retrieves the list of disks grouped by scope. (disks.aggregatedList)
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
   * @return \Google\Service\Compute\DiskAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), 'Google\Service\Compute\DiskAggregatedList');
  }
  /**
   * (disks.createSnapshot)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $disk
   * Name of the persistent disk resource to snapshot.
   * @param Google_Snapshot $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function createSnapshot($project, $zone, $disk, \Google\Service\Compute\Snapshot $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createSnapshot', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Deletes the specified persistent disk resource. (disks.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $disk
   * Name of the persistent disk resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $zone, $disk, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified persistent disk resource. (disks.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $disk
   * Name of the persistent disk resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Disk
   */
  public function get($project, $zone, $disk, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Disk');
  }
  /**
   * Creates a persistent disk resource in the specified project using the data
   * included in the request. (disks.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param Google_Disk $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string sourceImage
   * Optional. Source image to restore onto a disk.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, $zone, \Google\Service\Compute\Disk $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of persistent disk resources contained within the
   * specified zone. (disks.listDisks)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
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
   * @return \Google\Service\Compute\DiskList
   */
  public function listDisks($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\DiskList');
  }
}
