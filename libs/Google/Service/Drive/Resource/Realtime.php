<?php 
namespace Google\Service\Drive\Resource;
class Realtime extends \Google\Resource\Service
{

  /**
   * Exports the contents of the Realtime API data model associated with this file
   * as JSON. (realtime.get)
   *
   * @param string $fileId
   * The ID of the file that the Realtime API data model is associated with.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int revision
   * The revision of the Realtime API data model to export. Revisions start at 1 (the initial empty
    * data model) and are incremented with each change. If this parameter is excluded, the most recent
    * data model will be returned.
   */
  public function get($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params));
  }
  /**
   * Overwrites the Realtime API data model associated with this file with the
   * provided JSON data model. (realtime.update)
   *
   * @param string $fileId
   * The ID of the file that the Realtime API data model is associated with.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string baseRevision
   * The revision of the model to diff the uploaded model against. If set, the uploaded model is
    * diffed against the provided revision and those differences are merged with any changes made to
    * the model after the provided revision. If not set, the uploaded model replaces the current model
    * on the server.
   */
  public function update($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params));
  }
}
