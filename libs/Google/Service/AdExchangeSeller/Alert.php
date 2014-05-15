<?php 
namespace Google\Service\AdExchangeSeller;
class Alert extends \Google\Model
{
  public $id;
  public $kind;
  public $message;
  public $severity;
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

  public function setMessage($message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }

  public function getSeverity()
  {
    return $this->severity;
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
