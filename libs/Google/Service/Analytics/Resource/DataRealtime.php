<?php 
namespace Google\Service\Analytics\Resource;
class DataRealtime extends \Google\Resource\Service
{

  /**
   * Returns real time data for a view (profile). (realtime.get)
   *
   * @param string $ids
   * Unique table ID for retrieving real time data. Table ID is of the form ga:XXXX, where XXXX is
    * the Analytics view (profile) ID.
   * @param string $metrics
   * A comma-separated list of real time metrics. E.g., 'rt:activeUsers'. At least one metric must be
    * specified.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results
   * The maximum number of entries to include in this feed.
   * @opt_param string sort
   * A comma-separated list of dimensions or metrics that determine the sort order for real time
    * data.
   * @opt_param string dimensions
   * A comma-separated list of real time dimensions. E.g., 'rt:medium,rt:city'.
   * @opt_param string filters
   * A comma-separated list of dimension or metric filters to be applied to real time data.
   * @return \Google\Service\Analytics\RealtimeData
   */
  public function get($ids, $metrics, $optParams = array())
  {
    $params = array('ids' => $ids, 'metrics' => $metrics);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Analytics\RealtimeData');
  }
}
