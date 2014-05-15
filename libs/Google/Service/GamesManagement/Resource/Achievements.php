<?php 
namespace Google\Service\GamesManagement\Resource;
class Achievements extends \Google\Resource\Service
{

  /**
   * Resets the achievement with the given ID for the currently authenticated
   * player. This method is only accessible to whitelisted tester accounts for
   * your application. (achievements.reset)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\GamesManagement\AchievementResetResponse
   */
  public function reset($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('reset', array($params), 'Google\Service\GamesManagement\AchievementResetResponse');
  }
  /**
   * Resets all achievements for the currently authenticated player for your
   * application. This method is only accessible to whitelisted tester accounts
   * for your application. (achievements.resetAll)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\GamesManagement\AchievementResetAllResponse
   */
  public function resetAll($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('resetAll', array($params), 'Google\Service\GamesManagement\AchievementResetAllResponse');
  }
  /**
   * Resets the achievement with the given ID for the all players. This method is
   * only available to user accounts for your developer console. Only draft
   * achievements can be reset. (achievements.resetForAllPlayers)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   */
  public function resetForAllPlayers($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('resetForAllPlayers', array($params));
  }
}
