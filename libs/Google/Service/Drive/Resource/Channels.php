<?php 
namespace Google\Service\Drive\Resource;
class Channels extends \Google\Resource\Service
{

  /**
   * Stop watching resources through this channel (channels.stop)
   *
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   */
  public function stop(\Google\Service\Drive\Channel $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('stop', array($params));
  }
}
