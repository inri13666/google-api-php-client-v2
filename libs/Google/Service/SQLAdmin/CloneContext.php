<?php 
namespace Google\Service\SQLAdmin;
class CloneContext extends \Google\Model
{
  protected $binLogCoordinatesType = 'Google\Service\SQLAdmin\BinLogCoordinates';
  protected $binLogCoordinatesDataType = '';
  public $destinationInstanceName;
  public $kind;
  public $sourceInstanceName;

  public function setBinLogCoordinates(\Google\Service\SQLAdmin\BinLogCoordinates $binLogCoordinates)
  {
    $this->binLogCoordinates = $binLogCoordinates;
  }

  public function getBinLogCoordinates()
  {
    return $this->binLogCoordinates;
  }

  public function setDestinationInstanceName($destinationInstanceName)
  {
    $this->destinationInstanceName = $destinationInstanceName;
  }

  public function getDestinationInstanceName()
  {
    return $this->destinationInstanceName;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSourceInstanceName($sourceInstanceName)
  {
    $this->sourceInstanceName = $sourceInstanceName;
  }

  public function getSourceInstanceName()
  {
    return $this->sourceInstanceName;
  }
}
