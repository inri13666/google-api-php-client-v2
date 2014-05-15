<?php 
namespace Google\Service\Replicapool;
class Replica extends \Google\Model
{
  public $name;
  public $selfLink;
  protected $statusType = 'Google\Service\Replicapool\ReplicaStatus';
  protected $statusDataType = '';

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setStatus(\Google\Service\Replicapool\ReplicaStatus $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
