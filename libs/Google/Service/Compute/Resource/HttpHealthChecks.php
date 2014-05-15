<?php 
namespace Google\Service\Compute\Resource;
class HttpHealthChecks extends \Google\Resource\Service
{

  /**
   * Deletes the specified HttpHealthCheck resource. (httpHealthChecks.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $httpHealthCheck
   * Name of the HttpHealthCheck resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $httpHealthCheck, $optParams = array())
  {
    $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified HttpHealthCheck resource. (httpHealthChecks.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $httpHealthCheck
   * Name of the HttpHealthCheck resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\HttpHealthCheck
   */
  public function get($project, $httpHealthCheck, $optParams = array())
  {
    $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\HttpHealthCheck');
  }
  /**
   * Creates a HttpHealthCheck resource in the specified project using the data
   * included in the request. (httpHealthChecks.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param Google_HttpHealthCheck $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, \Google\Service\Compute\HttpHealthCheck $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of HttpHealthCheck resources available to the specified
   * project. (httpHealthChecks.listHttpHealthChecks)
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
   * @return \Google\Service\Compute\HttpHealthCheckList
   */
  public function listHttpHealthChecks($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\HttpHealthCheckList');
  }
  /**
   * Updates a HttpHealthCheck resource in the specified project using the data
   * included in the request. This method supports patch semantics.
   * (httpHealthChecks.patch)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $httpHealthCheck
   * Name of the HttpHealthCheck resource to update.
   * @param Google_HttpHealthCheck $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function patch($project, $httpHealthCheck, \Google\Service\Compute\HttpHealthCheck $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Updates a HttpHealthCheck resource in the specified project using the data
   * included in the request. (httpHealthChecks.update)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $httpHealthCheck
   * Name of the HttpHealthCheck resource to update.
   * @param Google_HttpHealthCheck $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function update($project, $httpHealthCheck, \Google\Service\Compute\HttpHealthCheck $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Compute\Operation');
  }
}
