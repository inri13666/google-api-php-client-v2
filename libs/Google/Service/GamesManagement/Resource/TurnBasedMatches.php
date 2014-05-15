<?php 
namespace Google\Service\GamesManagement\Resource;
class TurnBasedMatches extends \Google\Resource\Service
{

  /**
   * Reset all turn-based match data for a user. This method is only accessible to
   * whitelisted tester accounts for your application. (turnBasedMatches.reset)
   *
   * @param array $optParams Optional parameters.
   */
  public function reset($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('reset', array($params));
  }
}
