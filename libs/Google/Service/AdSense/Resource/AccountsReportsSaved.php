<?php 
namespace Google\Service\AdSense\Resource;
class AccountsReportsSaved extends \Google\Resource\Service
{

  /**
   * Generate an AdSense report based on the saved report ID sent in the query
   * parameters. (saved.generate)
   *
   * @param string $accountId
   * Account to which the saved reports belong.
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
   * @return \Google\Service\AdSense\AdsenseReportsGenerateResponse
   */
  public function generate($accountId, $savedReportId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'savedReportId' => $savedReportId);
    $params = array_merge($params, $optParams);
    return $this->call('generate', array($params), 'Google\Service\AdSense\AdsenseReportsGenerateResponse');
  }
  /**
   * List all saved reports in the specified AdSense account.
   * (saved.listAccountsReportsSaved)
   *
   * @param string $accountId
   * Account to which the saved reports belong.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through saved reports. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param int maxResults
   * The maximum number of saved reports to include in the response, used for paging.
   * @return \Google\Service\AdSense\SavedReports
   */
  public function listAccountsReportsSaved($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\SavedReports');
  }
}
