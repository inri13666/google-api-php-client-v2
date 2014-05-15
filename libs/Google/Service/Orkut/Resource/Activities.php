<?php 
namespace Google\Service\Orkut\Resource;
class Activities extends \Google\Resource\Service
{

  /**
   * Deletes an existing activity, if the access controls allow it.
   * (activities.delete)
   *
   * @param string $activityId
   * ID of the activity to remove.
   * @param array $optParams Optional parameters.
   */
  public function delete($activityId, $optParams = array())
  {
    $params = array('activityId' => $activityId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves a list of activities. (activities.listActivities)
   *
   * @param string $userId
   * The ID of the user whose activities will be listed. Can be me to refer to the viewer (i.e. the
    * authenticated user).
   * @param string $collection
   * The collection of activities to list.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token that allows pagination.
   * @opt_param string maxResults
   * The maximum number of activities to include in the response.
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\ActivityList
   */
  public function listActivities($userId, $collection, $optParams = array())
  {
    $params = array('userId' => $userId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Orkut\ActivityList');
  }
}
