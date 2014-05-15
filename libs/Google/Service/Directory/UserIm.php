<?php 
namespace Google\Service\Directory;
class UserIm extends \Google\Model
{
  public $customProtocol;
  public $customType;
  public $im;
  public $primary;
  public $protocol;
  public $type;

  public function setCustomProtocol($customProtocol)
  {
    $this->customProtocol = $customProtocol;
  }

  public function getCustomProtocol()
  {
    return $this->customProtocol;
  }

  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }

  public function getCustomType()
  {
    return $this->customType;
  }

  public function setIm($im)
  {
    $this->im = $im;
  }

  public function getIm()
  {
    return $this->im;
  }

  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }

  public function getPrimary()
  {
    return $this->primary;
  }

  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }

  public function getProtocol()
  {
    return $this->protocol;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
