<?php 
namespace Google\Service\Games\Resource;
class Pushtokens extends \Google\Resource\Service
{

  /**
   * Removes a push token for the current user and application. Removing a non-
   * existent push token will report success. (pushtokens.remove)
   *
   * @param Google_PushTokenId $postBody
   * @param array $optParams Optional parameters.
   */
  public function remove(\Google\Service\Games\PushTokenId $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('remove', array($params));
  }
  /**
   * Registers a push token for the current user and application.
   * (pushtokens.update)
   *
   * @param Google_PushToken $postBody
   * @param array $optParams Optional parameters.
   */
  public function update(\Google\Service\Games\PushToken $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params));
  }
}
