<?php 
namespace Google\Service\AdExchangeSeller\Resource;
class ReportsSaved extends \Google\Resource\Service
{

  /**
   * Generate an Ad Exchange report based on the saved report ID sent in the query
   * parameters. (saved.generate)
   *
   * @param string $savedReportId
   * The saved report to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * Optional locale to use for translating report output to a local language. Defaults to "en_US" if
    * not specified.
   * @opt_param int startIndex
   * Index of the first row of report data to return.
   * @opt_param int maxResults
   * The maximum number of rows of report data to return.
   * @return \Google\Service\AdExchangeSeller\Report
   */
  public function generate($savedReportId, $optParams = array())
  {
    $params = array('savedReportId' => $savedReportId);
    $params = array_merge($params, $optParams);
    return $this->call('generate', array($params), 'Google\Service\AdExchangeSeller\Report');
  }
  /**
   * List all saved reports in this Ad Exchange account. (saved.listReportsSaved)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through saved reports. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param int maxResults
   * The maximum number of saved reports to include in the response, used for paging.
   * @return \Google\Service\AdExchangeSeller\SavedReports
   */
  public function listReportsSaved($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeSeller\SavedReports');
  }
}
