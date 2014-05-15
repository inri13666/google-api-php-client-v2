<?php 
namespace Google\Service\MapsEngine\Resource;
class Rasters extends \Google\Resource\Service
{

  /**
   * Return metadata for a single raster. (rasters.get)
   *
   * @param string $id
   * The ID of the raster.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\MapsEngine\Image
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\MapsEngine\Image');
  }
  /**
   * Create a skeleton raster asset for upload. (rasters.upload)
   *
   * @param Google_Image $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\MapsEngine\Image
   */
  public function upload(\Google\Service\MapsEngine\Image $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('upload', array($params), 'Google\Service\MapsEngine\Image');
  }
}
