<?php 
namespace Google\Service\Dns;
class Project extends \Google\Model
{
  public $id;
  public $kind;
  public $number;
  protected $quotaType = 'Google\Service\Dns\Quota';
  protected $quotaDataType = '';

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

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function setQuota(\Google\Service\Dns\Quota $quota)
  {
    $this->quota = $quota;
  }

  public function getQuota()
  {
    return $this->quota;
  }
}
