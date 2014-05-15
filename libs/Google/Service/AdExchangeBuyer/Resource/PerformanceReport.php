<?php 
namespace Google\Service\AdExchangeBuyer\Resource;
class PerformanceReport extends \Google\Resource\Service
{

  /**
   * Retrieves the authenticated user's list of performance metrics.
   * (performanceReport.listPerformanceReport)
   *
   * @param string $accountId
   * The account id to get the reports.
   * @param string $endDateTime
   * The end time of the report in ISO 8601 timestamp format using UTC.
   * @param string $startDateTime
   * The start time of the report in ISO 8601 timestamp format using UTC.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through performance reports. To retrieve the next page, set
    * this parameter to the value of "nextPageToken" from the previous response. Optional.
   * @opt_param string maxResults
   * Maximum number of entries returned on one result page. If not set, the default is 100. Optional.
   * @return \Google\Service\AdExchangeBuyer\PerformanceReportList
   */
  public function listPerformanceReport($accountId, $endDateTime, $startDateTime, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'endDateTime' => $endDateTime, 'startDateTime' => $startDateTime);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeBuyer\PerformanceReportList');
  }
}
