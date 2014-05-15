<?php 
namespace Google\Service\Plus;
class Moment extends \Google\Model
{
  public $id;
  public $kind;
  protected $resultType = 'Google\Service\Plus\ItemScope';
  protected $resultDataType = '';
  public $startDate;
  protected $targetType = 'Google\Service\Plus\ItemScope';
  protected $targetDataType = '';
  public $type;

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

  public function setResult(\Google\Service\Plus\ItemScope $result)
  {
    $this->result = $result;
  }

  public function getResult()
  {
    return $this->result;
  }

  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function setTarget(\Google\Service\Plus\ItemScope $target)
  {
    $this->target = $target;
  }

  public function getTarget()
  {
    return $this->target;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
