<?php 
namespace Google\Service\MapsEngine\Resource;
class RastersFiles extends \Google\Resource\Service
{

  /**
   * Upload a file to a raster asset. (files.insert)
   *
   * @param string $id
   * The ID of the raster asset.
   * @param string $filename
   * The file name of this uploaded file.
   * @param array $optParams Optional parameters.
   */
  public function insert($id, $filename, $optParams = array())
  {
    $params = array('id' => $id, 'filename' => $filename);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params));
  }
}
