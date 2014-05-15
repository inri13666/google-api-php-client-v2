<?php 
namespace Google\Service\Books;
class VolumeLayerInfo extends \Google\Collection
{
  protected $layersType = 'Google\Service\Books\VolumeLayerInfoLayers';
  protected $layersDataType = 'array';

  public function setLayers($layers)
  {
    $this->layers = $layers;
  }

  public function getLayers()
  {
    return $this->layers;
  }
}
