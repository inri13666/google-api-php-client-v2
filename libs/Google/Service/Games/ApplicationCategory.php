<?php 
namespace Google\Service\Games;
class ApplicationCategory extends \Google\Model
{
  public $kind;
  public $primary;
  public $secondary;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }

  public function getPrimary()
  {
    return $this->primary;
  }

  public function setSecondary($secondary)
  {
    $this->secondary = $secondary;
  }

  public function getSecondary()
  {
    return $this->secondary;
  }
}
