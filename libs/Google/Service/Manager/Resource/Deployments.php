<?php 
namespace Google\Service\Manager\Resource;
class Deployments extends \Google\Resource\Service
{

  /**
   * (deployments.delete)
   *
   * @param string $projectId
   *
   * @param string $region
   *
   * @param string $deploymentName
   *
   * @param array $optParams Optional parameters.
   */
  public function delete($projectId, $region, $deploymentName, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'deploymentName' => $deploymentName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * (deployments.get)
   *
   * @param string $projectId
   *
   * @param string $region
   *
   * @param string $deploymentName
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Manager\Deployment
   */
  public function get($projectId, $region, $deploymentName, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'deploymentName' => $deploymentName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Manager\Deployment');
  }
  /**
   * (deployments.insert)
   *
   * @param string $projectId
   *
   * @param string $region
   *
   * @param Google_Deployment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Manager\Deployment
   */
  public function insert($projectId, $region, \Google\Service\Manager\Deployment $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Manager\Deployment');
  }
  /**
   * (deployments.listDeployments)
   *
   * @param string $projectId
   *
   * @param string $region
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Specifies a nextPageToken returned by a previous list request. This token can be used to request
    * the next page of results from a previous list request.
   * @opt_param int maxResults
   * Maximum count of results to be returned. Acceptable values are 0 to 100, inclusive. (Default:
    * 50)
   * @return \Google\Service\Manager\DeploymentsListResponse
   */
  public function listDeployments($projectId, $region, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Manager\DeploymentsListResponse');
  }
}
