<?php 
namespace Google\Service\Tasks\Resource;
class Tasklists extends \Google\Resource\Service
{

  /**
   * Deletes the authenticated user's specified task list. (tasklists.delete)
   *
   * @param string $tasklist
   * Task list identifier.
   * @param array $optParams Optional parameters.
   */
  public function delete($tasklist, $optParams = array())
  {
    $params = array('tasklist' => $tasklist);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns the authenticated user's specified task list. (tasklists.get)
   *
   * @param string $tasklist
   * Task list identifier.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Tasks\TaskList
   */
  public function get($tasklist, $optParams = array())
  {
    $params = array('tasklist' => $tasklist);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Tasks\TaskList');
  }
  /**
   * Creates a new task list and adds it to the authenticated user's task lists.
   * (tasklists.insert)
   *
   * @param Google_TaskList $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Tasks\TaskList
   */
  public function insert(\Google\Service\Tasks\TaskList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Tasks\TaskList');
  }
  /**
   * Returns all the authenticated user's task lists. (tasklists.listTasklists)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Token specifying the result page to return. Optional.
   * @opt_param string maxResults
   * Maximum number of task lists returned on one page. Optional. The default is 100.
   * @return \Google\Service\Tasks\TaskLists
   */
  public function listTasklists($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Tasks\TaskLists');
  }
  /**
   * Updates the authenticated user's specified task list. This method supports
   * patch semantics. (tasklists.patch)
   *
   * @param string $tasklist
   * Task list identifier.
   * @param Google_TaskList $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Tasks\TaskList
   */
  public function patch($tasklist, \Google\Service\Tasks\TaskList $postBody, $optParams = array())
  {
    $params = array('tasklist' => $tasklist, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Tasks\TaskList');
  }
  /**
   * Updates the authenticated user's specified task list. (tasklists.update)
   *
   * @param string $tasklist
   * Task list identifier.
   * @param Google_TaskList $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Tasks\TaskList
   */
  public function update($tasklist, \Google\Service\Tasks\TaskList $postBody, $optParams = array())
  {
    $params = array('tasklist' => $tasklist, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Tasks\TaskList');
  }
}
