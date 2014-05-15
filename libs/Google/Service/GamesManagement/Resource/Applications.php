<?php 
namespace Google\Service\GamesManagement\Resource;
class Applications extends \Google\Resource\Service
{

  /**
   * Get the list of players hidden from the given application. This method is
   * only available to user accounts for your developer console.
   * (applications.listHidden)
   *
   * @param string $applicationId
   * The application being requested.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of player resources to return in the response, used for paging. For any
    * response, the actual number of player resources returned may be less than the specified
    * maxResults.
   * @return \Google\Service\GamesManagement\HiddenPlayerList
   */
  public function listHidden($applicationId, $optParams = array())
  {
    $params = array('applicationId' => $applicationId);
    $params = array_merge($params, $optParams);
    return $this->call('listHidden', array($params), 'Google\Service\GamesManagement\HiddenPlayerList');
  }
}
