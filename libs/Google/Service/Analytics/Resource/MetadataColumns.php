<?php 
namespace Google\Service\Analytics\Resource;
class MetadataColumns extends \Google\Resource\Service
{

  /**
   * Lists all columns for a report type (columns.listMetadataColumns)
   *
   * @param string $reportType
   * Report type. Allowed Values: 'ga'. Where 'ga' corresponds to the Core Reporting API
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\Columns
   */
  public function listMetadataColumns($reportType, $optParams = array())
  {
    $params = array('reportType' => $reportType);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Analytics\Columns');
  }
}
