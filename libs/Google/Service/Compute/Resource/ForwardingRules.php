<?php 
namespace Google\Service\Compute\Resource;
class ForwardingRules extends \Google\Resource\Service
{

  /**
   * Retrieves the list of forwarding rules grouped by scope.
   * (forwardingRules.aggregatedList)
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
   * @return \Google\Service\Compute\ForwardingRuleAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), 'Google\Service\Compute\ForwardingRuleAggregatedList');
  }
  /**
   * Deletes the specified ForwardingRule resource. (forwardingRules.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param string $forwardingRule
   * Name of the ForwardingRule resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $region, $forwardingRule, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified ForwardingRule resource. (forwardingRules.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param string $forwardingRule
   * Name of the ForwardingRule resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\ForwardingRule
   */
  public function get($project, $region, $forwardingRule, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\ForwardingRule');
  }
  /**
   * Creates a ForwardingRule resource in the specified project and region using
   * the data included in the request. (forwardingRules.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param Google_ForwardingRule $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, $region, \Google\Service\Compute\ForwardingRule $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of ForwardingRule resources available to the specified
   * project and region. (forwardingRules.listForwardingRules)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
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
   * @return \Google\Service\Compute\ForwardingRuleList
   */
  public function listForwardingRules($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\ForwardingRuleList');
  }
  /**
   * Changes target url for forwarding rule. (forwardingRules.setTarget)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param string $forwardingRule
   * Name of the ForwardingRule resource in which target is to be set.
   * @param Google_TargetReference $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function setTarget($project, $region, $forwardingRule, \Google\Service\Compute\TargetReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setTarget', array($params), 'Google\Service\Compute\Operation');
  }
}
