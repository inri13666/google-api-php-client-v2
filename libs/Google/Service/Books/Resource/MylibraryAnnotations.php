<?php 
namespace Google\Service\Books\Resource;
class MylibraryAnnotations extends \Google\Resource\Service
{

  /**
   * Deletes an annotation. (annotations.delete)
   *
   * @param string $annotationId
   * The ID for the annotation to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source
   * String to identify the originator of this request.
   */
  public function delete($annotationId, $optParams = array())
  {
    $params = array('annotationId' => $annotationId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets an annotation by its ID. (annotations.get)
   *
   * @param string $annotationId
   * The ID for the annotation to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source
   * String to identify the originator of this request.
   * @return \Google\Service\Books\Annotation
   */
  public function get($annotationId, $optParams = array())
  {
    $params = array('annotationId' => $annotationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Books\Annotation');
  }
  /**
   * Inserts a new annotation. (annotations.insert)
   *
   * @param Google_Annotation $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param bool showOnlySummaryInResponse
   * Requests that only the summary of the specified layer be provided in the response.
   * @return \Google\Service\Books\Annotation
   */
  public function insert(\Google\Service\Books\Annotation $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Books\Annotation');
  }
  /**
   * Retrieves a list of annotations, possibly filtered.
   * (annotations.listMylibraryAnnotations)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool showDeleted
   * Set to true to return deleted annotations. updatedMin must be in the request to use this.
    * Defaults to false.
   * @opt_param string updatedMin
   * RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).
   * @opt_param string layerIds
   * The layer ID(s) to limit annotation by.
   * @opt_param string volumeId
   * The volume to restrict annotations to.
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param string pageToken
   * The value of the nextToken from the previous page.
   * @opt_param string pageIds
   * The page ID(s) for the volume that is being queried.
   * @opt_param string contentVersion
   * The content version for the requested volume.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string layerId
   * The layer ID to limit annotation by.
   * @opt_param string updatedMax
   * RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).
   * @return \Google\Service\Books\Annotations
   */
  public function listMylibraryAnnotations($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Annotations');
  }
  /**
   * Gets the summary of specified layers. (annotations.summary)
   *
   * @param string $layerIds
   * Array of layer IDs to get the summary for.
   * @param string $volumeId
   * Volume id to get the summary for.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Books\AnnotationsSummary
   */
  public function summary($layerIds, $volumeId, $optParams = array())
  {
    $params = array('layerIds' => $layerIds, 'volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('summary', array($params), 'Google\Service\Books\AnnotationsSummary');
  }
  /**
   * Updates an existing annotation. (annotations.update)
   *
   * @param string $annotationId
   * The ID for the annotation to update.
   * @param Google_Annotation $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source
   * String to identify the originator of this request.
   * @return \Google\Service\Books\Annotation
   */
  public function update($annotationId, \Google\Service\Books\Annotation $postBody, $optParams = array())
  {
    $params = array('annotationId' => $annotationId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Books\Annotation');
  }
}
