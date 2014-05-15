<?php 
namespace Google\Service\Taskqueue\Resource;
class Taskqueues extends \Google\Resource\Service
{

  /**
   * Get detailed information about a TaskQueue. (taskqueues.get)
   *
   * @param string $project
   * The project under which the queue lies.
   * @param string $taskqueue
   * The id of the taskqueue to get the properties of.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool getStats
   * Whether to get stats. Optional.
   * @return \Google\Service\Taskqueue\TaskQueue
   */
  public function get($project, $taskqueue, $optParams = array())
  {
    $params = array('project' => $project, 'taskqueue' => $taskqueue);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Taskqueue\TaskQueue');
  }
}
