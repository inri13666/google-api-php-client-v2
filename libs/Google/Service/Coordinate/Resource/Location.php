<?php 
namespace Google\Service\Coordinate\Resource;
class Location extends \Google\Resource\Service
{

  /**
   * Retrieves a list of locations for a worker. (location.listLocation)
   *
   * @param string $teamId
   * Team ID
   * @param string $workerEmail
   * Worker email address.
   * @param string $startTimestampMs
   * Start timestamp in milliseconds since the epoch.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Continuation token
   * @opt_param string maxResults
   * Maximum number of results to return in one page.
   * @return \Google\Service\Coordinate\LocationListResponse
   */
  public function listLocation($teamId, $workerEmail, $startTimestampMs, $optParams = array())
  {
    $params = array('teamId' => $teamId, 'workerEmail' => $workerEmail, 'startTimestampMs' => $startTimestampMs);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Coordinate\LocationListResponse');
  }
}
