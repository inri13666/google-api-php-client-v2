<?php 
namespace Google\Service\Manager\Resource;
class Templates extends \Google\Resource\Service
{

  /**
   * (templates.delete)
   *
   * @param string $projectId
   *
   * @param string $templateName
   *
   * @param array $optParams Optional parameters.
   */
  public function delete($projectId, $templateName, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'templateName' => $templateName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * (templates.get)
   *
   * @param string $projectId
   *
   * @param string $templateName
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Manager\Template
   */
  public function get($projectId, $templateName, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'templateName' => $templateName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Manager\Template');
  }
  /**
   * (templates.insert)
   *
   * @param string $projectId
   *
   * @param Google_Template $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Manager\Template
   */
  public function insert($projectId, \Google\Service\Manager\Template $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Manager\Template');
  }
  /**
   * (templates.listTemplates)
   *
   * @param string $projectId
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Specifies a nextPageToken returned by a previous list request. This token can be used to request
    * the next page of results from a previous list request.
   * @opt_param int maxResults
   * Maximum count of results to be returned. Acceptable values are 0 to 100, inclusive. (Default:
    * 50)
   * @return \Google\Service\Manager\TemplatesListResponse
   */
  public function listTemplates($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Manager\TemplatesListResponse');
  }
}
