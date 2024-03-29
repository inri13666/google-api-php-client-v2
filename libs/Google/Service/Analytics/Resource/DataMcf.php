<?php 
namespace Google\Service\Analytics\Resource;
class DataMcf extends \Google\Resource\Service
{

  /**
   * Returns Analytics Multi-Channel Funnels data for a view (profile). (mcf.get)
   *
   * @param string $ids
   * Unique table ID for retrieving Analytics data. Table ID is of the form ga:XXXX, where XXXX is
    * the Analytics view (profile) ID.
   * @param string $startDate
   * Start date for fetching Analytics data. Requests can specify a start date formatted as YYYY-MM-
    * DD, or as a relative date (e.g., today, yesterday, or 7daysAgo). The default value is 7daysAgo.
   * @param string $endDate
   * End date for fetching Analytics data. Requests can specify a start date formatted as YYYY-MM-DD,
    * or as a relative date (e.g., today, yesterday, or 7daysAgo). The default value is 7daysAgo.
   * @param string $metrics
   * A comma-separated list of Multi-Channel Funnels metrics. E.g.,
    * 'mcf:totalConversions,mcf:totalConversionValue'. At least one metric must be specified.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results
   * The maximum number of entries to include in this feed.
   * @opt_param string sort
   * A comma-separated list of dimensions or metrics that determine the sort order for the Analytics
    * data.
   * @opt_param string dimensions
   * A comma-separated list of Multi-Channel Funnels dimensions. E.g., 'mcf:source,mcf:medium'.
   * @opt_param int start-index
   * An index of the first entity to retrieve. Use this parameter as a pagination mechanism along
    * with the max-results parameter.
   * @opt_param string samplingLevel
   * The desired sampling level.
   * @opt_param string filters
   * A comma-separated list of dimension or metric filters to be applied to the Analytics data.
   * @return \Google\Service\Analytics\McfData
   */
  public function get($ids, $startDate, $endDate, $metrics, $optParams = array())
  {
    $params = array('ids' => $ids, 'start-date' => $startDate, 'end-date' => $endDate, 'metrics' => $metrics);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Analytics\McfData');
  }
}
