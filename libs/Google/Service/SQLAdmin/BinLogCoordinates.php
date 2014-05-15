<?php 
namespace Google\Service\SQLAdmin;
class BinLogCoordinates extends \Google\Model
{
  public $binLogFileName;
  public $binLogPosition;
  public $kind;

  public function setBinLogFileName($binLogFileName)
  {
    $this->binLogFileName = $binLogFileName;
  }

  public function getBinLogFileName()
  {
    return $this->binLogFileName;
  }

  public function setBinLogPosition($binLogPosition)
  {
    $this->binLogPosition = $binLogPosition;
  }

  public function getBinLogPosition()
  {
    return $this->binLogPosition;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
