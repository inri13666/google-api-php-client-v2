<?php 
namespace Google\Service\AdSenseHost\Resource;
class Reports extends \Google\Resource\Service
{

  /**
   * Generate an AdSense report based on the report request sent in the query
   * parameters. Returns the result as JSON; to retrieve output in CSV format
   * specify "alt=csv" as a query parameter. (reports.generate)
   *
   * @param string $startDate
   * Start of the date range to report on in "YYYY-MM-DD" format, inclusive.
   * @param string $endDate
   * End of the date range to report on in "YYYY-MM-DD" format, inclusive.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string sort
   * The name of a dimension or metric to sort the resulting report on, optionally prefixed with "+"
    * to sort ascending or "-" to sort descending. If no prefix is specified, the column is sorted
    * ascending.
   * @opt_param string locale
   * Optional locale to use for translating report output to a local language. Defaults to "en_US" if
    * not specified.
   * @opt_param string metric
   * Numeric columns to include in the report.
   * @opt_param string maxResults
   * The maximum number of rows of report data to return.
   * @opt_param string filter
   * Filters to be run on the report.
   * @opt_param string startIndex
   * Index of the first row of report data to return.
   * @opt_param string dimension
   * Dimensions to base the report on.
   * @return \Google\Service\AdSenseHost\Report
   */
  public function generate($startDate, $endDate, $optParams = array())
  {
    $params = array('startDate' => $startDate, 'endDate' => $endDate);
    $params = array_merge($params, $optParams);
    return $this->call('generate', array($params), 'Google\Service\AdSenseHost\Report');
  }
}
