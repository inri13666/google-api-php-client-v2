<?php 
namespace Google\Service\Spectrum;
class PawsNotifySpectrumUseResponse extends \Google\Model
{
  public $kind;
  public $type;
  public $version;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}
