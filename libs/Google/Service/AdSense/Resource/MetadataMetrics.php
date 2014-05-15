<?php 
namespace Google\Service\AdSense\Resource;
class MetadataMetrics extends \Google\Resource\Service
{

  /**
   * List the metadata for the metrics available to this AdSense account.
   * (metrics.listMetadataMetrics)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSense\Metadata
   */
  public function listMetadataMetrics($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\Metadata');
  }
}
