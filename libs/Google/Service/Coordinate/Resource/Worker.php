<?php 
namespace Google\Service\Coordinate\Resource;
class Worker extends \Google\Resource\Service
{

  /**
   * Retrieves a list of workers in a team. (worker.listWorker)
   *
   * @param string $teamId
   * Team ID
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Coordinate\WorkerListResponse
   */
  public function listWorker($teamId, $optParams = array())
  {
    $params = array('teamId' => $teamId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Coordinate\WorkerListResponse');
  }
}
