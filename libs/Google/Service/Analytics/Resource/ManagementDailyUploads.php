<?php 
namespace Google\Service\Analytics\Resource;
class ManagementDailyUploads extends \Google\Resource\Service
{

  /**
   * Delete uploaded data for the given date. (dailyUploads.delete)
   *
   * @param string $accountId
   * Account Id associated with daily upload delete.
   * @param string $webPropertyId
   * Web property Id associated with daily upload delete.
   * @param string $customDataSourceId
   * Custom data source Id associated with daily upload delete.
   * @param string $date
   * Date for which data is to be deleted. Date should be formatted as YYYY-MM-DD.
   * @param string $type
   * Type of data for this delete.
   * @param array $optParams Optional parameters.
   */
  public function delete($accountId, $webPropertyId, $customDataSourceId, $date, $type, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'date' => $date, 'type' => $type);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * List daily uploads to which the user has access.
   * (dailyUploads.listManagementDailyUploads)
   *
   * @param string $accountId
   * Account Id for the daily uploads to retrieve.
   * @param string $webPropertyId
   * Web property Id for the daily uploads to retrieve.
   * @param string $customDataSourceId
   * Custom data source Id for daily uploads to retrieve.
   * @param string $startDate
   * Start date of the form YYYY-MM-DD.
   * @param string $endDate
   * End date of the form YYYY-MM-DD.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results
   * The maximum number of custom data sources to include in this response.
   * @opt_param int start-index
   * A 1-based index of the first daily upload to retrieve. Use this parameter as a pagination
    * mechanism along with the max-results parameter.
   * @return \Google\Service\Analytics\DailyUploads
   */
  public function listManagementDailyUploads($accountId, $webPropertyId, $customDataSourceId, $startDate, $endDate, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'start-date' => $startDate, 'end-date' => $endDate);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Analytics\DailyUploads');
  }
  /**
   * Update/Overwrite data for a custom data source. (dailyUploads.upload)
   *
   * @param string $accountId
   * Account Id associated with daily upload.
   * @param string $webPropertyId
   * Web property Id associated with daily upload.
   * @param string $customDataSourceId
   * Custom data source Id to which the data being uploaded belongs.
   * @param string $date
   * Date for which data is uploaded. Date should be formatted as YYYY-MM-DD.
   * @param int $appendNumber
   * Append number for this upload indexed from 1.
   * @param string $type
   * Type of data for this upload.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool reset
   * Reset/Overwrite all previous appends for this date and start over with this file as the first
    * upload.
   * @return \Google\Service\Analytics\DailyUploadAppend
   */
  public function upload($accountId, $webPropertyId, $customDataSourceId, $date, $appendNumber, $type, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'date' => $date, 'appendNumber' => $appendNumber, 'type' => $type);
    $params = array_merge($params, $optParams);
    return $this->call('upload', array($params), 'Google\Service\Analytics\DailyUploadAppend');
  }
}
