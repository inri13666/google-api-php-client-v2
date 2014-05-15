<?php 
namespace Google\Service\Games\Resource;
class Leaderboards extends \Google\Resource\Service
{

  /**
   * Retrieves the metadata of the leaderboard with the given ID.
   * (leaderboards.get)
   *
   * @param string $leaderboardId
   * The ID of the leaderboard.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\Leaderboard
   */
  public function get($leaderboardId, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Games\Leaderboard');
  }
  /**
   * Lists all the leaderboard metadata for your application.
   * (leaderboards.listLeaderboards)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of leaderboards to return in the response. For any response, the actual
    * number of leaderboards returned may be less than the specified maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\LeaderboardListResponse
   */
  public function listLeaderboards($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Games\LeaderboardListResponse');
  }
}
