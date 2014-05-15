<?php 
namespace Google\Service\Directory\Resource;
class Channels extends \Google\Resource\Service
{

  /**
   * Stop watching resources through this channel (channels.stop)
   *
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   */
  public function stop(\Google\Service\Directory\Channel $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('stop', array($params));
  }
}
