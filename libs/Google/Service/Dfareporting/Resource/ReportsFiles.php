<?php 
namespace Google\Service\Dfareporting\Resource;
class ReportsFiles extends \Google\Resource\Service
{

  /**
   * Retrieves a report file. (files.get)
   *
   * @param string $profileId
   * The DFA profile ID.
   * @param string $reportId
   * The ID of the report.
   * @param string $fileId
   * The ID of the report file.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dfareporting\DfareportingFile
   */
  public function get($profileId, $reportId, $fileId, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'reportId' => $reportId, 'fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Dfareporting\DfareportingFile');
  }
  /**
   * Lists files for a report. (files.listReportsFiles)
   *
   * @param string $profileId
   * The DFA profile ID.
   * @param string $reportId
   * The ID of the parent report.
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
   * @return \Google\Service\Dfareporting\FileList
   */
  public function listReportsFiles($profileId, $reportId, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'reportId' => $reportId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Dfareporting\FileList');
  }
}
