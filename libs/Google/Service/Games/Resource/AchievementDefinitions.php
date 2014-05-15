<?php 
namespace Google\Service\Games\Resource;
class AchievementDefinitions extends \Google\Resource\Service
{

  /**
   * Lists all the achievement definitions for your application.
   * (achievementDefinitions.listAchievementDefinitions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of achievement resources to return in the response, used for paging. For any
    * response, the actual number of achievement resources returned may be less than the specified
    * maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\AchievementDefinitionsListResponse
   */
  public function listAchievementDefinitions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Games\AchievementDefinitionsListResponse');
  }
}
