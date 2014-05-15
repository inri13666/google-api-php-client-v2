<?php 
namespace Google\Service\Compute\Resource;
class Routes extends \Google\Resource\Service
{

  /**
   * Deletes the specified route resource. (routes.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $route
   * Name of the route resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $route, $optParams = array())
  {
    $params = array('project' => $project, 'route' => $route);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified route resource. (routes.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $route
   * Name of the route resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Route
   */
  public function get($project, $route, $optParams = array())
  {
    $params = array('project' => $project, 'route' => $route);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Route');
  }
  /**
   * Creates a route resource in the specified project using the data included in
   * the request. (routes.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param Google_Route $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, \Google\Service\Compute\Route $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of route resources available to the specified project.
   * (routes.listRoutes)
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
   * @return \Google\Service\Compute\RouteList
   */
  public function listRoutes($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\RouteList');
  }
}
