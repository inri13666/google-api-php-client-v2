<?php 
namespace Google\Service\Books\Resource;
class LayersVolumeAnnotations extends \Google\Resource\Service
{

  /**
   * Gets the volume annotation. (volumeAnnotations.get)
   *
   * @param string $volumeId
   * The volume to retrieve annotations for.
   * @param string $layerId
   * The ID for the layer to get the annotations.
   * @param string $annotationId
   * The ID of the volume annotation to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex:
    * 'en_US'.
   * @opt_param string source
   * String to identify the originator of this request.
   * @return \Google\Service\Books\Volumeannotation
   */
  public function get($volumeId, $layerId, $annotationId, $optParams = array())
  {
    $params = array('volumeId' => $volumeId, 'layerId' => $layerId, 'annotationId' => $annotationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Books\Volumeannotation');
  }
  /**
   * Gets the volume annotations for a volume and layer.
   * (volumeAnnotations.listLayersVolumeAnnotations)
   *
   * @param string $volumeId
   * The volume to retrieve annotations for.
   * @param string $layerId
   * The ID for the layer to get the annotations.
   * @param string $contentVersion
   * The content version for the requested volume.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool showDeleted
   * Set to true to return deleted annotations. updatedMin must be in the request to use this.
    * Defaults to false.
   * @opt_param string volumeAnnotationsVersion
   * The version of the volume annotations that you are requesting.
   * @opt_param string endPosition
   * The end position to end retrieving data from.
   * @opt_param string endOffset
   * The end offset to end retrieving data from.
   * @opt_param string locale
   * The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex:
    * 'en_US'.
   * @opt_param string updatedMin
   * RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).
   * @opt_param string updatedMax
   * RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param string pageToken
   * The value of the nextToken from the previous page.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string startOffset
   * The start offset to start retrieving data from.
   * @opt_param string startPosition
   * The start position to start retrieving data from.
   * @return \Google\Service\Books\Volumeannotations
   */
  public function listLayersVolumeAnnotations($volumeId, $layerId, $contentVersion, $optParams = array())
  {
    $params = array('volumeId' => $volumeId, 'layerId' => $layerId, 'contentVersion' => $contentVersion);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Volumeannotations');
  }
}
