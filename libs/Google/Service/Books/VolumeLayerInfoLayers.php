<?php 
namespace Google\Service\Books;
class VolumeLayerInfoLayers extends \Google\Model
{
  public $layerId;
  public $volumeAnnotationsVersion;

  public function setLayerId($layerId)
  {
    $this->layerId = $layerId;
  }

  public function getLayerId()
  {
    return $this->layerId;
  }

  public function setVolumeAnnotationsVersion($volumeAnnotationsVersion)
  {
    $this->volumeAnnotationsVersion = $volumeAnnotationsVersion;
  }

  public function getVolumeAnnotationsVersion()
  {
    return $this->volumeAnnotationsVersion;
  }
}
