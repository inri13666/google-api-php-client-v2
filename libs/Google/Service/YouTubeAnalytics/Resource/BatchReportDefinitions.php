<?php 
namespace Google\Service\YouTubeAnalytics\Resource;
class BatchReportDefinitions extends \Google\Resource\Service
{

  /**
   * Retrieves a list of available batch report definitions.
   * (batchReportDefinitions.listBatchReportDefinitions)
   *
   * @param string $onBehalfOfContentOwner
   * The onBehalfOfContentOwner parameter identifies the content owner that the user is acting on
    * behalf of.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\YouTubeAnalytics\BatchReportDefinitionList
   */
  public function listBatchReportDefinitions($onBehalfOfContentOwner, $optParams = array())
  {
    $params = array('onBehalfOfContentOwner' => $onBehalfOfContentOwner);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\YouTubeAnalytics\BatchReportDefinitionList');
  }
}
