<?php 
namespace Google\Service\Manager;
class ParamOverride extends \Google\Model
{
  public $path;
  public $value;

  public function setPath($path)
  {
    $this->path = $path;
  }

  public function getPath()
  {
    return $this->path;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }
}
