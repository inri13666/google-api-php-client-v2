<?php 
namespace Google\Service\Replicapool;
class DiskAttachment extends \Google\Model
{
  public $deviceName;
  public $index;

  public function setDeviceName($deviceName)
  {
    $this->deviceName = $deviceName;
  }

  public function getDeviceName()
  {
    return $this->deviceName;
  }

  public function setIndex($index)
  {
    $this->index = $index;
  }

  public function getIndex()
  {
    return $this->index;
  }
}
