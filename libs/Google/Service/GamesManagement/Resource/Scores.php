<?php 
namespace Google\Service\GamesManagement\Resource;
class Scores extends \Google\Resource\Service
{

  /**
   * Reset scores for the specified leaderboard for the currently authenticated
   * player. This method is only accessible to whitelisted tester accounts for
   * your application. (scores.reset)
   *
   * @param string $leaderboardId
   * The ID of the leaderboard.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\GamesManagement\PlayerScoreResetResponse
   */
  public function reset($leaderboardId, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId);
    $params = array_merge($params, $optParams);
    return $this->call('reset', array($params), 'Google\Service\GamesManagement\PlayerScoreResetResponse');
  }
  /**
   * Reset scores for the specified leaderboard for all players. This method is
   * only available to user accounts for your developer console. Only draft
   * leaderboards can be reset. (scores.resetForAllPlayers)
   *
   * @param string $leaderboardId
   * The ID of the leaderboard.
   * @param array $optParams Optional parameters.
   */
  public function resetForAllPlayers($leaderboardId, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId);
    $params = array_merge($params, $optParams);
    return $this->call('resetForAllPlayers', array($params));
  }
}
