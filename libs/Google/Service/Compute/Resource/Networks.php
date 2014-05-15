<?php 
namespace Google\Service\Compute\Resource;
class Networks extends \Google\Resource\Service
{

  /**
   * Deletes the specified network resource. (networks.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $network
   * Name of the network resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $network, $optParams = array())
  {
    $params = array('project' => $project, 'network' => $network);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified network resource. (networks.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $network
   * Name of the network resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Network
   */
  public function get($project, $network, $optParams = array())
  {
    $params = array('project' => $project, 'network' => $network);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Network');
  }
  /**
   * Creates a network resource in the specified project using the data included
   * in the request. (networks.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param Google_Network $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, \Google\Service\Compute\Network $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of network resources available to the specified project.
   * (networks.listNetworks)
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
   * @return \Google\Service\Compute\NetworkList
   */
  public function listNetworks($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\NetworkList');
  }
}
