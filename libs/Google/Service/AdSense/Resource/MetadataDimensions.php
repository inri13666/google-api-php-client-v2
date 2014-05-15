<?php 
namespace Google\Service\AdSense\Resource;
class MetadataDimensions extends \Google\Resource\Service
{

  /**
   * List the metadata for the dimensions available to this AdSense account.
   * (dimensions.listMetadataDimensions)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSense\Metadata
   */
  public function listMetadataDimensions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\Metadata');
  }
}
