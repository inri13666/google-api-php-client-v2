<?php 
namespace Google\Service\Doubleclicksearch\Resource;
class Reports extends \Google\Resource\Service
{

  /**
   * Generates and returns a report immediately. (reports.generate)
   *
   * @param Google_ReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\Report
   */
  public function generate(\Google\Service\Doubleclicksearch\ReportRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generate', array($params), 'Google\Service\Doubleclicksearch\Report');
  }
  /**
   * Polls for the status of a report request. (reports.get)
   *
   * @param string $reportId
   * ID of the report request being polled.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\Report
   */
  public function get($reportId, $optParams = array())
  {
    $params = array('reportId' => $reportId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Doubleclicksearch\Report');
  }
  /**
   * Downloads a report file. (reports.getFile)
   *
   * @param string $reportId
   * ID of the report.
   * @param int $reportFragment
   * The index of the report fragment to download.
   * @param array $optParams Optional parameters.
   */
  public function getFile($reportId, $reportFragment, $optParams = array())
  {
    $params = array('reportId' => $reportId, 'reportFragment' => $reportFragment);
    $params = array_merge($params, $optParams);
    return $this->call('getFile', array($params));
  }
  /**
   * Inserts a report request into the reporting system. (reports.request)
   *
   * @param Google_ReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\Report
   */
  public function request(\Google\Service\Doubleclicksearch\ReportRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('request', array($params), 'Google\Service\Doubleclicksearch\Report');
  }
}
