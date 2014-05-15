<?php 
namespace Google\Service\Dfareporting\Resource;
class Files extends \Google\Resource\Service
{

  /**
   * Retrieves a report file by its report ID and file ID. (files.get)
   *
   * @param string $reportId
   * The ID of the report.
   * @param string $fileId
   * The ID of the report file.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dfareporting\DfareportingFile
   */
  public function get($reportId, $fileId, $optParams = array())
  {
    $params = array('reportId' => $reportId, 'fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Dfareporting\DfareportingFile');
  }
  /**
   * Lists files for a user profile. (files.listFiles)
   *
   * @param string $profileId
   * The DFA profile ID.
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
   * @return \Google\Service\Dfareporting\FileList
   */
  public function listFiles($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Dfareporting\FileList');
  }
}
