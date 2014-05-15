<?php 
namespace Google\Service\Dns;
class Change extends \Google\Collection
{
  protected $additionsType = 'Google\Service\Dns\ResourceRecordSet';
  protected $additionsDataType = 'array';
  protected $deletionsType = 'Google\Service\Dns\ResourceRecordSet';
  protected $deletionsDataType = 'array';
  public $id;
  public $kind;
  public $startTime;
  public $status;

  public function setAdditions($additions)
  {
    $this->additions = $additions;
  }

  public function getAdditions()
  {
    return $this->additions;
  }

  public function setDeletions($deletions)
  {
    $this->deletions = $deletions;
  }

  public function getDeletions()
  {
    return $this->deletions;
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

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
