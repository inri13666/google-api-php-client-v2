<?php 
namespace Google\Service\GamesManagement\Resource;
class Players extends \Google\Resource\Service
{

  /**
   * Hide the given player's leaderboard scores from the given application. This
   * method is only available to user accounts for your developer console.
   * (players.hide)
   *
   * @param string $applicationId
   * The application being requested.
   * @param string $playerId
   * A player ID. A value of me may be used in place of the authenticated player's ID.
   * @param array $optParams Optional parameters.
   */
  public function hide($applicationId, $playerId, $optParams = array())
  {
    $params = array('applicationId' => $applicationId, 'playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('hide', array($params));
  }
  /**
   * Unhide the given player's leaderboard scores from the given application. This
   * method is only available to user accounts for your developer console.
   * (players.unhide)
   *
   * @param string $applicationId
   * The application being requested.
   * @param string $playerId
   * A player ID. A value of me may be used in place of the authenticated player's ID.
   * @param array $optParams Optional parameters.
   */
  public function unhide($applicationId, $playerId, $optParams = array())
  {
    $params = array('applicationId' => $applicationId, 'playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('unhide', array($params));
  }
}
