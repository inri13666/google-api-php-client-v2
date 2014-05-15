<?php 
namespace Google\Service\Coordinate\Resource;
class Schedule extends \Google\Resource\Service
{

  /**
   * Retrieves the schedule for a job. (schedule.get)
   *
   * @param string $teamId
   * Team ID
   * @param string $jobId
   * Job number
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Coordinate\Schedule
   */
  public function get($teamId, $jobId, $optParams = array())
  {
    $params = array('teamId' => $teamId, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Coordinate\Schedule');
  }
  /**
   * Replaces the schedule of a job with the provided schedule. This method
   * supports patch semantics. (schedule.patch)
   *
   * @param string $teamId
   * Team ID
   * @param string $jobId
   * Job number
   * @param Google_Schedule $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allDay
   * Whether the job is scheduled for the whole day. Time of day in start/end times is ignored if
    * this is true.
   * @opt_param string startTime
   * Scheduled start time in milliseconds since epoch.
   * @opt_param string duration
   * Job duration in milliseconds.
   * @opt_param string endTime
   * Scheduled end time in milliseconds since epoch.
   * @return \Google\Service\Coordinate\Schedule
   */
  public function patch($teamId, $jobId, \Google\Service\Coordinate\Schedule $postBody, $optParams = array())
  {
    $params = array('teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Coordinate\Schedule');
  }
  /**
   * Replaces the schedule of a job with the provided schedule. (schedule.update)
   *
   * @param string $teamId
   * Team ID
   * @param string $jobId
   * Job number
   * @param Google_Schedule $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allDay
   * Whether the job is scheduled for the whole day. Time of day in start/end times is ignored if
    * this is true.
   * @opt_param string startTime
   * Scheduled start time in milliseconds since epoch.
   * @opt_param string duration
   * Job duration in milliseconds.
   * @opt_param string endTime
   * Scheduled end time in milliseconds since epoch.
   * @return \Google\Service\Coordinate\Schedule
   */
  public function update($teamId, $jobId, \Google\Service\Coordinate\Schedule $postBody, $optParams = array())
  {
    $params = array('teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Coordinate\Schedule');
  }
}
