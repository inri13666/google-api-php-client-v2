<?php 
namespace Google\Service\Orkut\Resource;
class ActivityVisibility extends \Google\Resource\Service
{

  /**
   * Gets the visibility of an existing activity. (activityVisibility.get)
   *
   * @param string $activityId
   * ID of the activity to get the visibility.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Visibility
   */
  public function get($activityId, $optParams = array())
  {
    $params = array('activityId' => $activityId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Orkut\Visibility');
  }
  /**
   * Updates the visibility of an existing activity. This method supports patch
   * semantics. (activityVisibility.patch)
   *
   * @param string $activityId
   * ID of the activity.
   * @param Google_Visibility $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Visibility
   */
  public function patch($activityId, \Google\Service\Orkut\Visibility $postBody, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Orkut\Visibility');
  }
  /**
   * Updates the visibility of an existing activity. (activityVisibility.update)
   *
   * @param string $activityId
   * ID of the activity.
   * @param Google_Visibility $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Visibility
   */
  public function update($activityId, \Google\Service\Orkut\Visibility $postBody, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Orkut\Visibility');
  }
}
