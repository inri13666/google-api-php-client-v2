<?php 
namespace Google\Service\SQLAdmin;
class BackupConfiguration extends \Google\Model
{
  public $binaryLogEnabled;
  public $enabled;
  public $id;
  public $kind;
  public $startTime;

  public function setBinaryLogEnabled($binaryLogEnabled)
  {
    $this->binaryLogEnabled = $binaryLogEnabled;
  }

  public function getBinaryLogEnabled()
  {
    return $this->binaryLogEnabled;
  }

  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }

  public function getEnabled()
  {
    return $this->enabled;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }
}
