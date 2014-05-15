<?php 
namespace Google\Service;
class Taskqueue extends \Google\Service
{
  /** Manage your Tasks and Taskqueues. */
  const TASKQUEUE = "https://www.googleapis.com/auth/taskqueue";
  /** Consume Tasks from your Taskqueues. */
  const TASKQUEUE_CONSUMER = "https://www.googleapis.com/auth/taskqueue.consumer";

  public $taskqueues;
  public $tasks;
  

  /**
   * Constructs the internal representation of the Taskqueue service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'taskqueue/v1beta2/projects/';
    $this->version = 'v1beta2';
    $this->serviceName = 'taskqueue';

    $this->taskqueues = new \Google\Service\Taskqueue\Resource\Taskqueues(
        $this,
        $this->serviceName,
        'taskqueues',
        array(
          'methods' => array(
            'get' => array(
              'path' => '{project}/taskqueues/{taskqueue}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'taskqueue' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'getStats' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->tasks = new \Google\Service\Taskqueue\Resource\Tasks(
        $this,
        $this->serviceName,
        'tasks',
        array(
          'methods' => array(
            'delete' => array(
              'path' => '{project}/taskqueues/{taskqueue}/tasks/{task}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'taskqueue' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'task' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{project}/taskqueues/{taskqueue}/tasks/{task}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'taskqueue' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'task' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{project}/taskqueues/{taskqueue}/tasks',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'taskqueue' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'lease' => array(
              'path' => '{project}/taskqueues/{taskqueue}/tasks/lease',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'taskqueue' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'numTasks' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'leaseSecs' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'groupByTag' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'tag' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => '{project}/taskqueues/{taskqueue}/tasks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'taskqueue' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => '{project}/taskqueues/{taskqueue}/tasks/{task}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'taskqueue' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'task' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'newLeaseSeconds' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => '{project}/taskqueues/{taskqueue}/tasks/{task}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'taskqueue' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'task' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'newLeaseSeconds' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}
