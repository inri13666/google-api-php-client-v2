<?php 
namespace Google\Service\YouTubeAnalytics\Resource;
class BatchReports extends \Google\Resource\Service
{

  /**
   * Retrieves a list of processed batch reports. (batchReports.listBatchReports)
   *
   * @param string $batchReportDefinitionId
   * The batchReportDefinitionId parameter specifies the ID of the batch reportort definition for
    * which you are retrieving reports.
   * @param string $onBehalfOfContentOwner
   * The onBehalfOfContentOwner parameter identifies the content owner that the user is acting on
    * behalf of.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\YouTubeAnalytics\BatchReportList
   */
  public function listBatchReports($batchReportDefinitionId, $onBehalfOfContentOwner, $optParams = array())
  {
    $params = array('batchReportDefinitionId' => $batchReportDefinitionId, 'onBehalfOfContentOwner' => $onBehalfOfContentOwner);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\YouTubeAnalytics\BatchReportList');
  }
}
