<?php 
namespace Google\Service\Compute\Resource;
class Instances extends \Google\Resource\Service
{

  /**
   * Adds an access config to an instance's network interface.
   * (instances.addAccessConfig)
   *
   * @param string $project
   * Project name.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Instance name.
   * @param string $networkInterface
   * Network interface name.
   * @param Google_AccessConfig $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function addAccessConfig($project, $zone, $instance, $networkInterface, \Google\Service\Compute\AccessConfig $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'networkInterface' => $networkInterface, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addAccessConfig', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * (instances.aggregatedList)
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
   * @return \Google\Service\Compute\InstanceAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), 'Google\Service\Compute\InstanceAggregatedList');
  }
  /**
   * Attaches a disk resource to an instance. (instances.attachDisk)
   *
   * @param string $project
   * Project name.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Instance name.
   * @param Google_AttachedDisk $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function attachDisk($project, $zone, $instance, \Google\Service\Compute\AttachedDisk $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('attachDisk', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Deletes the specified instance resource. (instances.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Name of the instance resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Deletes an access config from an instance's network interface.
   * (instances.deleteAccessConfig)
   *
   * @param string $project
   * Project name.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Instance name.
   * @param string $accessConfig
   * Access config name.
   * @param string $networkInterface
   * Network interface name.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function deleteAccessConfig($project, $zone, $instance, $accessConfig, $networkInterface, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'accessConfig' => $accessConfig, 'networkInterface' => $networkInterface);
    $params = array_merge($params, $optParams);
    return $this->call('deleteAccessConfig', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Detaches a disk from an instance. (instances.detachDisk)
   *
   * @param string $project
   * Project name.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Instance name.
   * @param string $deviceName
   * Disk device name to detach.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function detachDisk($project, $zone, $instance, $deviceName, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'deviceName' => $deviceName);
    $params = array_merge($params, $optParams);
    return $this->call('detachDisk', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified instance resource. (instances.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Name of the instance resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Instance
   */
  public function get($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Instance');
  }
  /**
   * Returns the specified instance's serial port output.
   * (instances.getSerialPortOutput)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Name of the instance scoping this request.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\SerialPortOutput
   */
  public function getSerialPortOutput($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('getSerialPortOutput', array($params), 'Google\Service\Compute\SerialPortOutput');
  }
  /**
   * Creates an instance resource in the specified project using the data included
   * in the request. (instances.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param Google_Instance $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, $zone, \Google\Service\Compute\Instance $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of instance resources contained within the specified zone.
   * (instances.listInstances)
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
   * @return \Google\Service\Compute\InstanceList
   */
  public function listInstances($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\InstanceList');
  }
  /**
   * Performs a hard reset on the instance. (instances.reset)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Name of the instance scoping this request.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function reset($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('reset', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Sets the auto-delete flag for a disk attached to an instance
   * (instances.setDiskAutoDelete)
   *
   * @param string $project
   * Project name.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Instance name.
   * @param bool $autoDelete
   * Whether to auto-delete the disk when the instance is deleted.
   * @param string $deviceName
   * Disk device name to modify.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function setDiskAutoDelete($project, $zone, $instance, $autoDelete, $deviceName, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'autoDelete' => $autoDelete, 'deviceName' => $deviceName);
    $params = array_merge($params, $optParams);
    return $this->call('setDiskAutoDelete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Sets metadata for the specified instance to the data included in the request.
   * (instances.setMetadata)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Name of the instance scoping this request.
   * @param Google_Metadata $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function setMetadata($project, $zone, $instance, \Google\Service\Compute\Metadata $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setMetadata', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Sets an instance's scheduling options. (instances.setScheduling)
   *
   * @param string $project
   * Project name.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Instance name.
   * @param Google_Scheduling $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function setScheduling($project, $zone, $instance, \Google\Service\Compute\Scheduling $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setScheduling', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Sets tags for the specified instance to the data included in the request.
   * (instances.setTags)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $instance
   * Name of the instance scoping this request.
   * @param Google_Tags $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function setTags($project, $zone, $instance, \Google\Service\Compute\Tags $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setTags', array($params), 'Google\Service\Compute\Operation');
  }
}
