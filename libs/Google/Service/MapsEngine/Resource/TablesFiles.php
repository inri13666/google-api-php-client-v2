<?php 
namespace Google\Service\MapsEngine\Resource;
class TablesFiles extends \Google\Resource\Service
{

  /**
   * Upload a file to a placeholder table asset. See Table Upload in the
   * Developer's Guide for more information. Supported file types are listed in
   * the Supported data formats and limits article of the Google Maps Engine help
   * center. (files.insert)
   *
   * @param string $id
   * The ID of the table asset.
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
