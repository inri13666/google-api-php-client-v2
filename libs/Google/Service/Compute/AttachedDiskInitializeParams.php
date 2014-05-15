<?php 
namespace Google\Service\Compute;
class AttachedDiskInitializeParams extends \Google\Model
{
  public $diskName;
  public $diskSizeGb;
  public $sourceImage;

  public function setDiskName($diskName)
  {
    $this->diskName = $diskName;
  }

  public function getDiskName()
  {
    return $this->diskName;
  }

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
