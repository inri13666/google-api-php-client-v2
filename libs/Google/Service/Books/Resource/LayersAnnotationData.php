<?php 
namespace Google\Service\Books\Resource;
class LayersAnnotationData extends \Google\Resource\Service
{

  /**
   * Gets the annotation data. (annotationData.get)
   *
   * @param string $volumeId
   * The volume to retrieve annotations for.
   * @param string $layerId
   * The ID for the layer to get the annotations.
   * @param string $annotationDataId
   * The ID of the annotation data to retrieve.
   * @param string $contentVersion
   * The content version for the volume you are trying to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int scale
   * The requested scale for the image.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param bool allowWebDefinitions
   * For the dictionary layer. Whether or not to allow web definitions.
   * @opt_param int h
   * The requested pixel height for any images. If height is provided width must also be provided.
   * @opt_param string locale
   * The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex:
    * 'en_US'.
   * @opt_param int w
   * The requested pixel width for any images. If width is provided height must also be provided.
   * @return \Google\Service\Books\Annotationdata
   */
  public function get($volumeId, $layerId, $annotationDataId, $contentVersion, $optParams = array())
  {
    $params = array('volumeId' => $volumeId, 'layerId' => $layerId, 'annotationDataId' => $annotationDataId, 'contentVersion' => $contentVersion);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Books\Annotationdata');
  }
  /**
   * Gets the annotation data for a volume and layer.
   * (annotationData.listLayersAnnotationData)
   *
   * @param string $volumeId
   * The volume to retrieve annotation data for.
   * @param string $layerId
   * The ID for the layer to get the annotation data.
   * @param string $contentVersion
   * The content version for the requested volume.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int scale
   * The requested scale for the image.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string locale
   * The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex:
    * 'en_US'.
   * @opt_param int h
   * The requested pixel height for any images. If height is provided width must also be provided.
   * @opt_param string updatedMax
   * RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param string annotationDataId
   * The list of Annotation Data Ids to retrieve. Pagination is ignored if this is set.
   * @opt_param string pageToken
   * The value of the nextToken from the previous page.
   * @opt_param int w
   * The requested pixel width for any images. If width is provided height must also be provided.
   * @opt_param string updatedMin
   * RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).
   * @return \Google\Service\Books\Annotationsdata
   */
  public function listLayersAnnotationData($volumeId, $layerId, $contentVersion, $optParams = array())
  {
    $params = array('volumeId' => $volumeId, 'layerId' => $layerId, 'contentVersion' => $contentVersion);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Annotationsdata');
  }
}
