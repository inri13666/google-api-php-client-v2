<?php 
namespace Google\Service\Manager;
class EnvVariable extends \Google\Model
{
  public $hidden;
  public $value;

  public function setHidden($hidden)
  {
    $this->hidden = $hidden;
  }

  public function getHidden()
  {
    return $this->hidden;
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
