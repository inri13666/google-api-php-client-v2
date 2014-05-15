<?php 
namespace Google\Service\Compute;
class ImageRawDisk extends \Google\Model
{
  public $containerType;
  public $sha1Checksum;
  public $source;

  public function setContainerType($containerType)
  {
    $this->containerType = $containerType;
  }

  public function getContainerType()
  {
    return $this->containerType;
  }

  public function setSha1Checksum($sha1Checksum)
  {
    $this->sha1Checksum = $sha1Checksum;
  }

  public function getSha1Checksum()
  {
    return $this->sha1Checksum;
  }

  public function setSource($source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }
}
