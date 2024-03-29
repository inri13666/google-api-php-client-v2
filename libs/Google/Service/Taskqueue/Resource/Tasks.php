<?php 
namespace Google\Service\Taskqueue\Resource;
class Tasks extends \Google\Resource\Service
{

  /**
   * Delete a task from a TaskQueue. (tasks.delete)
   *
   * @param string $project
   * The project under which the queue lies.
   * @param string $taskqueue
   * The taskqueue to delete a task from.
   * @param string $task
   * The id of the task to delete.
   * @param array $optParams Optional parameters.
   */
  public function delete($project, $taskqueue, $task, $optParams = array())
  {
    $params = array('project' => $project, 'taskqueue' => $taskqueue, 'task' => $task);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Get a particular task from a TaskQueue. (tasks.get)
   *
   * @param string $project
   * The project under which the queue lies.
   * @param string $taskqueue
   * The taskqueue in which the task belongs.
   * @param string $task
   * The task to get properties of.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Taskqueue\Task
   */
  public function get($project, $taskqueue, $task, $optParams = array())
  {
    $params = array('project' => $project, 'taskqueue' => $taskqueue, 'task' => $task);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Taskqueue\Task');
  }
  /**
   * Insert a new task in a TaskQueue (tasks.insert)
   *
   * @param string $project
   * The project under which the queue lies
   * @param string $taskqueue
   * The taskqueue to insert the task into
   * @param Google_Task $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Taskqueue\Task
   */
  public function insert($project, $taskqueue, \Google\Service\Taskqueue\Task $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'taskqueue' => $taskqueue, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Taskqueue\Task');
  }
  /**
   * Lease 1 or more tasks from a TaskQueue. (tasks.lease)
   *
   * @param string $project
   * The project under which the queue lies.
   * @param string $taskqueue
   * The taskqueue to lease a task from.
   * @param int $numTasks
   * The number of tasks to lease.
   * @param int $leaseSecs
   * The lease in seconds.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool groupByTag
   * When true, all returned tasks will have the same tag
   * @opt_param string tag
   * The tag allowed for tasks in the response. Must only be specified if group_by_tag is true. If
    * group_by_tag is true and tag is not specified the tag will be that of the oldest task by eta,
    * i.e. the first available tag
   * @return \Google\Service\Taskqueue\Tasks
   */
  public function lease($project, $taskqueue, $numTasks, $leaseSecs, $optParams = array())
  {
    $params = array('project' => $project, 'taskqueue' => $taskqueue, 'numTasks' => $numTasks, 'leaseSecs' => $leaseSecs);
    $params = array_merge($params, $optParams);
    return $this->call('lease', array($params), 'Google\Service\Taskqueue\Tasks');
  }
  /**
   * List Tasks in a TaskQueue (tasks.listTasks)
   *
   * @param string $project
   * The project under which the queue lies.
   * @param string $taskqueue
   * The id of the taskqueue to list tasks from.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Taskqueue\Tasks2
   */
  public function listTasks($project, $taskqueue, $optParams = array())
  {
    $params = array('project' => $project, 'taskqueue' => $taskqueue);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Taskqueue\Tasks2');
  }
  /**
   * Update tasks that are leased out of a TaskQueue. This method supports patch
   * semantics. (tasks.patch)
   *
   * @param string $project
   * The project under which the queue lies.
   * @param string $taskqueue
   *
   * @param string $task
   *
   * @param int $newLeaseSeconds
   * The new lease in seconds.
   * @param Google_Task $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Taskqueue\Task
   */
  public function patch($project, $taskqueue, $task, $newLeaseSeconds, \Google\Service\Taskqueue\Task $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'taskqueue' => $taskqueue, 'task' => $task, 'newLeaseSeconds' => $newLeaseSeconds, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Taskqueue\Task');
  }
  /**
   * Update tasks that are leased out of a TaskQueue. (tasks.update)
   *
   * @param string $project
   * The project under which the queue lies.
   * @param string $taskqueue
   *
   * @param string $task
   *
   * @param int $newLeaseSeconds
   * The new lease in seconds.
   * @param Google_Task $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Taskqueue\Task
   */
  public function update($project, $taskqueue, $task, $newLeaseSeconds, \Google\Service\Taskqueue\Task $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'taskqueue' => $taskqueue, 'task' => $task, 'newLeaseSeconds' => $newLeaseSeconds, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Taskqueue\Task');
  }
}
