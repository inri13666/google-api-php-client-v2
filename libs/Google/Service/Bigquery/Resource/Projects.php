<?php 
namespace Google\Service\Bigquery\Resource;
class Projects extends \Google\Resource\Service
{

  /**
   * Lists the projects to which you have at least read access.
   * (projects.listProjects)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Page token, returned by a previous call, to request the next page of results
   * @opt_param string maxResults
   * Maximum number of results to return
   * @return \Google\Service\Bigquery\ProjectList
   */
  public function listProjects($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Bigquery\ProjectList');
  }
}
