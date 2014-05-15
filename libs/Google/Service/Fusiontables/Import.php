<?php 
namespace Google\Service\Fusiontables;
class Import extends \Google\Model
{
  public $kind;
  public $numRowsReceived;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNumRowsReceived($numRowsReceived)
  {
    $this->numRowsReceived = $numRowsReceived;
  }

  public function getNumRowsReceived()
  {
    return $this->numRowsReceived;
  }
}
