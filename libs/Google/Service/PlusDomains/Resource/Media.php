<?php 
namespace Google\Service\PlusDomains\Resource;
class Media extends \Google\Resource\Service
{

  /**
   * Add a new media item to an album. The current upload size limitations are
   * 36MB for a photo and 1GB for a video. Uploads do not count against quota if
   * photos are less than 2048 pixels on their longest side or videos are less
   * than 15 minutes in length. (media.insert)
   *
   * @param string $userId
   * The ID of the user to create the activity on behalf of.
   * @param string $collection
   *
   * @param Google_Media $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\PlusDomains\Media
   */
  public function insert($userId, $collection, \Google\Service\PlusDomains\Media $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'collection' => $collection, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\PlusDomains\Media');
  }
}
