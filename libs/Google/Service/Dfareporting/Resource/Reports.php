<?php 
namespace Google\Service\Dfareporting\Resource;
class Reports extends \Google\Resource\Service
{

  /**
   * Deletes a report by its ID. (reports.delete)
   *
   * @param string $profileId
   * The DFA user profile ID.
   * @param string $reportId
   * The ID of the report.
   * @param array $optParams Optional parameters.
   */
  public function delete($profileId, $reportId, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'reportId' => $reportId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves a report by its ID. (reports.get)
   *
   * @param string $profileId
   * The DFA user profile ID.
   * @param string $reportId
   * The ID of the report.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dfareporting\Report
   */
  public function get($profileId, $reportId, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'reportId' => $reportId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Dfareporting\Report');
  }
  /**
   * Creates a report. (reports.insert)
   *
   * @param string $profileId
   * The DFA user profile ID.
   * @param Google_Report $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dfareporting\Report
   */
  public function insert($profileId, \Google\Service\Dfareporting\Report $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Dfareporting\Report');
  }
  /**
   * Retrieves list of reports. (reports.listReports)
   *
   * @param string $profileId
   * The DFA user profile ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string sortField
   * The field by which to sort the list.
   * @opt_param int maxResults
   * Maximum number of results to return.
   * @opt_param string pageToken
   * The value of the nextToken from the previous result page.
   * @opt_param string sortOrder
   * Order of sorted results, default is 'DESCENDING'.
   * @opt_param string scope
   * The scope that defines which results are returned, default is 'MINE'.
   * @return \Google\Service\Dfareporting\ReportList
   */
  public function listReports($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Dfareporting\ReportList');
  }
  /**
   * Updates a report. This method supports patch semantics. (reports.patch)
   *
   * @param string $profileId
   * The DFA user profile ID.
   * @param string $reportId
   * The ID of the report.
   * @param Google_Report $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dfareporting\Report
   */
  public function patch($profileId, $reportId, \Google\Service\Dfareporting\Report $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'reportId' => $reportId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Dfareporting\Report');
  }
  /**
   * Runs a report. (reports.run)
   *
   * @param string $profileId
   * The DFA profile ID.
   * @param string $reportId
   * The ID of the report.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool synchronous
   * If set and true, tries to run the report synchronously.
   * @return \Google\Service\Dfareporting\DfareportingFile
   */
  public function run($profileId, $reportId, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'reportId' => $reportId);
    $params = array_merge($params, $optParams);
    return $this->call('run', array($params), 'Google\Service\Dfareporting\DfareportingFile');
  }
  /**
   * Updates a report. (reports.update)
   *
   * @param string $profileId
   * The DFA user profile ID.
   * @param string $reportId
   * The ID of the report.
   * @param Google_Report $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dfareporting\Report
   */
  public function update($profileId, $reportId, \Google\Service\Dfareporting\Report $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'reportId' => $reportId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Dfareporting\Report');
  }
}
