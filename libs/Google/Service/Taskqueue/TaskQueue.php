<?php 
namespace Google\Service\Taskqueue;
class TaskQueue extends \Google\Model
{
  protected $aclType = 'Google\Service\Taskqueue\TaskQueueAcl';
  protected $aclDataType = '';
  public $id;
  public $kind;
  public $maxLeases;
  protected $statsType = 'Google\Service\Taskqueue\TaskQueueStats';
  protected $statsDataType = '';

  public function setAcl(\Google\Service\Taskqueue\TaskQueueAcl $acl)
  {
    $this->acl = $acl;
  }

  public function getAcl()
  {
    return $this->acl;
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

  public function setMaxLeases($maxLeases)
  {
    $this->maxLeases = $maxLeases;
  }

  public function getMaxLeases()
  {
    return $this->maxLeases;
  }

  public function setStats(\Google\Service\Taskqueue\TaskQueueStats $stats)
  {
    $this->stats = $stats;
  }

  public function getStats()
  {
    return $this->stats;
  }
}
