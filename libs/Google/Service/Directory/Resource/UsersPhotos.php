<?php 
namespace Google\Service\Directory\Resource;
class UsersPhotos extends \Google\Resource\Service
{

  /**
   * Remove photos for the user (photos.delete)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param array $optParams Optional parameters.
   */
  public function delete($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieve photo of a user (photos.get)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\UserPhoto
   */
  public function get($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Directory\UserPhoto');
  }
  /**
   * Add a photo for the user. This method supports patch semantics.
   * (photos.patch)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param Google_UserPhoto $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\UserPhoto
   */
  public function patch($userKey, \Google\Service\Directory\UserPhoto $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Directory\UserPhoto');
  }
  /**
   * Add a photo for the user (photos.update)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param Google_UserPhoto $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\UserPhoto
   */
  public function update($userKey, \Google\Service\Directory\UserPhoto $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Directory\UserPhoto');
  }
}
