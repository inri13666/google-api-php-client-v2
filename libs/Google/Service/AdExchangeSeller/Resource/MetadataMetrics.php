<?php 
namespace Google\Service\AdExchangeSeller\Resource;
class MetadataMetrics extends \Google\Resource\Service
{

  /**
   * List the metadata for the metrics available to this AdExchange account.
   * (metrics.listMetadataMetrics)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeSeller\Metadata
   */
  public function listMetadataMetrics($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeSeller\Metadata');
  }
}
