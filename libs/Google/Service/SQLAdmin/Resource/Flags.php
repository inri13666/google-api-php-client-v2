<?php 
namespace Google\Service\SQLAdmin\Resource;
class Flags extends \Google\Resource\Service
{

  /**
   * List all available database flags for Google Cloud SQL instances.
   * (flags.listFlags)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\FlagsListResponse
   */
  public function listFlags($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\SQLAdmin\FlagsListResponse');
  }
}
