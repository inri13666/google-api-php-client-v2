<?php 
namespace Google\Service\Games\Resource;
class Players extends \Google\Resource\Service
{

  /**
   * Retrieves the Player resource with the given ID. To retrieve the player for
   * the currently authenticated user, set playerId to me. (players.get)
   *
   * @param string $playerId
   * A player ID. A value of me may be used in place of the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\Player
   */
  public function get($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Games\Player');
  }
  /**
   * Get the collection of players for the currently authenticated user.
   * (players.listPlayers)
   *
   * @param string $collection
   * Collection of players being retrieved
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of player resources to return in the response, used for paging. For any
    * response, the actual number of player resources returned may be less than the specified
    * maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\PlayerListResponse
   */
  public function listPlayers($collection, $optParams = array())
  {
    $params = array('collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Games\PlayerListResponse');
  }
}
