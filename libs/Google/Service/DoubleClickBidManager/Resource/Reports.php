<?php 
namespace Google\Service\DoubleClickBidManager\Resource;
class Reports extends \Google\Resource\Service
{

  /**
   * Retrieves stored reports. (reports.listreports)
   *
   * @param string $queryId
   * Query ID with which the reports are associated.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\DoubleClickBidManager\ListReportsResponse
   */
  public function listreports($queryId, $optParams = array())
  {
    $params = array('queryId' => $queryId);
    $params = array_merge($params, $optParams);
    return $this->call('listreports', array($params), 'Google\Service\DoubleClickBidManager\ListReportsResponse');
  }
}
