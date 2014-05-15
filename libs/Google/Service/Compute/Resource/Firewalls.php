<?php 
namespace Google\Service\Compute\Resource;
class Firewalls extends \Google\Resource\Service
{

  /**
   * Deletes the specified firewall resource. (firewalls.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $firewall
   * Name of the firewall resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $firewall, $optParams = array())
  {
    $params = array('project' => $project, 'firewall' => $firewall);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified firewall resource. (firewalls.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $firewall
   * Name of the firewall resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Firewall
   */
  public function get($project, $firewall, $optParams = array())
  {
    $params = array('project' => $project, 'firewall' => $firewall);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Firewall');
  }
  /**
   * Creates a firewall resource in the specified project using the data included
   * in the request. (firewalls.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param Google_Firewall $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, \Google\Service\Compute\Firewall $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of firewall resources available to the specified project.
   * (firewalls.listFirewalls)
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
   * @return \Google\Service\Compute\FirewallList
   */
  public function listFirewalls($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\FirewallList');
  }
  /**
   * Updates the specified firewall resource with the data included in the
   * request. This method supports patch semantics. (firewalls.patch)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $firewall
   * Name of the firewall resource to update.
   * @param Google_Firewall $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function patch($project, $firewall, \Google\Service\Compute\Firewall $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Updates the specified firewall resource with the data included in the
   * request. (firewalls.update)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $firewall
   * Name of the firewall resource to update.
   * @param Google_Firewall $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function update($project, $firewall, \Google\Service\Compute\Firewall $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Compute\Operation');
  }
}
