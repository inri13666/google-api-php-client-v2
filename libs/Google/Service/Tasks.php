<?php 
namespace Google\Service;
class Tasks extends \Google\Service
{
  /** Manage your tasks. */
  const TASKS = "https://www.googleapis.com/auth/tasks";
  /** View your tasks. */
  const TASKS_READONLY = "https://www.googleapis.com/auth/tasks.readonly";

  public $tasklists;
  public $tasks;
  

  /**
   * Constructs the internal representation of the Tasks service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'tasks/v1/';
    $this->version = 'v1';
    $this->serviceName = 'tasks';

    $this->tasklists = new \Google\Service\Tasks\Resource\Tasklists(
        $this,
        $this->serviceName,
        'tasklists',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'users/@me/lists/{tasklist}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'tasklist' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'users/@me/lists/{tasklist}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tasklist' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'users/@me/lists',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'users/@me/lists',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'users/@me/lists/{tasklist}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'tasklist' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'users/@me/lists/{tasklist}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'tasklist' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->tasks = new \Google\Service\Tasks\Resource\Tasks(
        $this,
        $this->serviceName,
        'tasks',
        array(
          'methods' => array(
            'clear' => array(
              'path' => 'lists/{tasklist}/clear',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tasklist' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'lists/{tasklist}/tasks/{task}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'tasklist' => array(
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
              'path' => 'lists/{tasklist}/tasks/{task}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tasklist' => array(
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
              'path' => 'lists/{tasklist}/tasks',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tasklist' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'parent' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'previous' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'lists/{tasklist}/tasks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tasklist' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dueMax' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'showDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'updatedMin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'completedMin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'showCompleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'completedMax' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'showHidden' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'dueMin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'move' => array(
              'path' => 'lists/{tasklist}/tasks/{task}/move',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tasklist' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'task' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'parent' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'previous' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'lists/{tasklist}/tasks/{task}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'tasklist' => array(
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
            ),'update' => array(
              'path' => 'lists/{tasklist}/tasks/{task}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'tasklist' => array(
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
            ),
          )
        )
    );
  }
}
