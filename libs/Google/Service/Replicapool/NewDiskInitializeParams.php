<?php 
namespace Google\Service\Replicapool;
class NewDiskInitializeParams extends \Google\Model
{
  public $diskSizeGb;
  public $sourceImage;

  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }

  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }

  public function setSourceImage($sourceImage)
  {
    $this->sourceImage = $sourceImage;
  }

  public function getSourceImage()
  {
    return $this->sourceImage;
  }
}
