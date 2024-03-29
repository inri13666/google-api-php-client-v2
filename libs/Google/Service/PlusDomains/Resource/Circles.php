<?php 
namespace Google\Service\PlusDomains\Resource;
class Circles extends \Google\Resource\Service
{

  /**
   * Add a person to a circle. Google+ limits certain circle operations, including
   * the number of circle adds. Learn More. (circles.addPeople)
   *
   * @param string $circleId
   * The ID of the circle to add the person to.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string userId
   * IDs of the people to add to the circle. Optional, can be repeated.
   * @opt_param string email
   * Email of the people to add to the circle. Optional, can be repeated.
   * @return \Google\Service\PlusDomains\Circle
   */
  public function addPeople($circleId, $optParams = array())
  {
    $params = array('circleId' => $circleId);
    $params = array_merge($params, $optParams);
    return $this->call('addPeople', array($params), 'Google\Service\PlusDomains\Circle');
  }
  /**
   * Get a circle. (circles.get)
   *
   * @param string $circleId
   * The ID of the circle to get.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\PlusDomains\Circle
   */
  public function get($circleId, $optParams = array())
  {
    $params = array('circleId' => $circleId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\PlusDomains\Circle');
  }
  /**
   * Create a new circle for the authenticated user. (circles.insert)
   *
   * @param string $userId
   * The ID of the user to create the circle on behalf of. The value "me" can be used to indicate the
    * authenticated user.
   * @param Google_Circle $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\PlusDomains\Circle
   */
  public function insert($userId, \Google\Service\PlusDomains\Circle $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\PlusDomains\Circle');
  }
  /**
   * List all of the circles for a user. (circles.listCircles)
   *
   * @param string $userId
   * The ID of the user to get circles for. The special value "me" can be used to indicate the
    * authenticated user.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The continuation token, which is used to page through large result sets. To get the next page of
    * results, set this parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of circles to include in the response, which is used for paging. For any
    * response, the actual number returned might be less than the specified maxResults.
   * @return \Google\Service\PlusDomains\CircleFeed
   */
  public function listCircles($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\PlusDomains\CircleFeed');
  }
  /**
   * Update a circle's description. This method supports patch semantics.
   * (circles.patch)
   *
   * @param string $circleId
   * The ID of the circle to update.
   * @param Google_Circle $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\PlusDomains\Circle
   */
  public function patch($circleId, \Google\Service\PlusDomains\Circle $postBody, $optParams = array())
  {
    $params = array('circleId' => $circleId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\PlusDomains\Circle');
  }
  /**
   * Delete a circle. (circles.remove)
   *
   * @param string $circleId
   * The ID of the circle to delete.
   * @param array $optParams Optional parameters.
   */
  public function remove($circleId, $optParams = array())
  {
    $params = array('circleId' => $circleId);
    $params = array_merge($params, $optParams);
    return $this->call('remove', array($params));
  }
  /**
   * Remove a person from a circle. (circles.removePeople)
   *
   * @param string $circleId
   * The ID of the circle to remove the person from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string userId
   * IDs of the people to remove from the circle. Optional, can be repeated.
   * @opt_param string email
   * Email of the people to add to the circle. Optional, can be repeated.
   */
  public function removePeople($circleId, $optParams = array())
  {
    $params = array('circleId' => $circleId);
    $params = array_merge($params, $optParams);
    return $this->call('removePeople', array($params));
  }
  /**
   * Update a circle's description. (circles.update)
   *
   * @param string $circleId
   * The ID of the circle to update.
   * @param Google_Circle $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\PlusDomains\Circle
   */
  public function update($circleId, \Google\Service\PlusDomains\Circle $postBody, $optParams = array())
  {
    $params = array('circleId' => $circleId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\PlusDomains\Circle');
  }
}
