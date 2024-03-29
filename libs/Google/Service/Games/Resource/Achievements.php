<?php 
namespace Google\Service\Games\Resource;
class Achievements extends \Google\Resource\Service
{

  /**
   * Increments the steps of the achievement with the given ID for the currently
   * authenticated player. (achievements.increment)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param int $stepsToIncrement
   * The number of steps to increment.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId
   * A randomly generated numeric ID for each request specified by the caller. This number is used at
    * the server to ensure that the request is handled correctly across retries.
   * @return \Google\Service\Games\AchievementIncrementResponse
   */
  public function increment($achievementId, $stepsToIncrement, $optParams = array())
  {
    $params = array('achievementId' => $achievementId, 'stepsToIncrement' => $stepsToIncrement);
    $params = array_merge($params, $optParams);
    return $this->call('increment', array($params), 'Google\Service\Games\AchievementIncrementResponse');
  }
  /**
   * Lists the progress for all your application's achievements for the currently
   * authenticated player. (achievements.listAchievements)
   *
   * @param string $playerId
   * A player ID. A value of me may be used in place of the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param string state
   * Tells the server to return only achievements with the specified state. If this parameter isn't
    * specified, all achievements are returned.
   * @opt_param int maxResults
   * The maximum number of achievement resources to return in the response, used for paging. For any
    * response, the actual number of achievement resources returned may be less than the specified
    * maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\PlayerAchievementListResponse
   */
  public function listAchievements($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Games\PlayerAchievementListResponse');
  }
  /**
   * Sets the state of the achievement with the given ID to REVEALED for the
   * currently authenticated player. (achievements.reveal)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Games\AchievementRevealResponse
   */
  public function reveal($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('reveal', array($params), 'Google\Service\Games\AchievementRevealResponse');
  }
  /**
   * Sets the steps for the currently authenticated player towards unlocking an
   * achievement. If the steps parameter is less than the current number of steps
   * that the player already gained for the achievement, the achievement is not
   * modified. (achievements.setStepsAtLeast)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param int $steps
   * The minimum value to set the steps to.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Games\AchievementSetStepsAtLeastResponse
   */
  public function setStepsAtLeast($achievementId, $steps, $optParams = array())
  {
    $params = array('achievementId' => $achievementId, 'steps' => $steps);
    $params = array_merge($params, $optParams);
    return $this->call('setStepsAtLeast', array($params), 'Google\Service\Games\AchievementSetStepsAtLeastResponse');
  }
  /**
   * Unlocks this achievement for the currently authenticated player.
   * (achievements.unlock)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Games\AchievementUnlockResponse
   */
  public function unlock($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('unlock', array($params), 'Google\Service\Games\AchievementUnlockResponse');
  }
  /**
   * Updates multiple achievements for the currently authenticated player.
   * (achievements.updateMultiple)
   *
   * @param Google_AchievementUpdateMultipleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Games\AchievementUpdateMultipleResponse
   */
  public function updateMultiple(\Google\Service\Games\AchievementUpdateMultipleRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateMultiple', array($params), 'Google\Service\Games\AchievementUpdateMultipleResponse');
  }
}
