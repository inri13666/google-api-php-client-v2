<?php 
namespace Google\Service\Drive\Resource;
class Revisions extends \Google\Resource\Service
{

  /**
   * Removes a revision. (revisions.delete)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $revisionId
   * The ID of the revision.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $revisionId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a specific revision. (revisions.get)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $revisionId
   * The ID of the revision.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Revision
   */
  public function get($fileId, $revisionId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Drive\Revision');
  }
  /**
   * Lists a file's revisions. (revisions.listRevisions)
   *
   * @param string $fileId
   * The ID of the file.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\RevisionList
   */
  public function listRevisions($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Drive\RevisionList');
  }
  /**
   * Updates a revision. This method supports patch semantics. (revisions.patch)
   *
   * @param string $fileId
   * The ID for the file.
   * @param string $revisionId
   * The ID for the revision.
   * @param Google_Revision $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Revision
   */
  public function patch($fileId, $revisionId, \Google\Service\Drive\Revision $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Drive\Revision');
  }
  /**
   * Updates a revision. (revisions.update)
   *
   * @param string $fileId
   * The ID for the file.
   * @param string $revisionId
   * The ID for the revision.
   * @param Google_Revision $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Revision
   */
  public function update($fileId, $revisionId, \Google\Service\Drive\Revision $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Drive\Revision');
  }
}
