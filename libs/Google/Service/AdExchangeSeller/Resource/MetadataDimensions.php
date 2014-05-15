<?php 
namespace Google\Service\AdExchangeSeller\Resource;
class MetadataDimensions extends \Google\Resource\Service
{

  /**
   * List the metadata for the dimensions available to this AdExchange account.
   * (dimensions.listMetadataDimensions)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeSeller\Metadata
   */
  public function listMetadataDimensions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeSeller\Metadata');
  }
}
