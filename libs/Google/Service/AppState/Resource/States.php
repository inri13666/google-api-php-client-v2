<?php 
namespace Google\Service\AppState\Resource;
class States extends \Google\Resource\Service
{

  /**
   * Clears (sets to empty) the data for the passed key if and only if the passed
   * version matches the currently stored version. This method results in a
   * conflict error on version mismatch. (states.clear)
   *
   * @param int $stateKey
   * The key for the data to be retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string currentDataVersion
   * The version of the data to be cleared. Version strings are returned by the server.
   * @return \Google\Service\AppState\WriteResult
   */
  public function clear($stateKey, $optParams = array())
  {
    $params = array('stateKey' => $stateKey);
    $params = array_merge($params, $optParams);
    return $this->call('clear', array($params), 'Google\Service\AppState\WriteResult');
  }
  /**
   * Deletes a key and the data associated with it. The key is removed and no
   * longer counts against the key quota. Note that since this method is not safe
   * in the face of concurrent modifications, it should only be used for
   * development and testing purposes. Invoking this method in shipping code can
   * result in data loss and data corruption. (states.delete)
   *
   * @param int $stateKey
   * The key for the data to be retrieved.
   * @param array $optParams Optional parameters.
   */
  public function delete($stateKey, $optParams = array())
  {
    $params = array('stateKey' => $stateKey);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves the data corresponding to the passed key. If the key does not exist
   * on the server, an HTTP 404 will be returned. (states.get)
   *
   * @param int $stateKey
   * The key for the data to be retrieved.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AppState\GetResponse
   */
  public function get($stateKey, $optParams = array())
  {
    $params = array('stateKey' => $stateKey);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AppState\GetResponse');
  }
  /**
   * Lists all the states keys, and optionally the state data. (states.listStates)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeData
   * Whether to include the full data in addition to the version number
   * @return \Google\Service\AppState\ListResponse
   */
  public function listStates($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AppState\ListResponse');
  }
  /**
   * Update the data associated with the input key if and only if the passed
   * version matches the currently stored version. This method is safe in the face
   * of concurrent writes. Maximum per-key size is 128KB. (states.update)
   *
   * @param int $stateKey
   * The key for the data to be retrieved.
   * @param Google_UpdateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string currentStateVersion
   * The version of the app state your application is attempting to update. If this does not match
    * the current version, this method will return a conflict error. If there is no data stored on the
    * server for this key, the update will succeed irrespective of the value of this parameter.
   * @return \Google\Service\AppState\WriteResult
   */
  public function update($stateKey, \Google\Service\AppState\UpdateRequest $postBody, $optParams = array())
  {
    $params = array('stateKey' => $stateKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\AppState\WriteResult');
  }
}
