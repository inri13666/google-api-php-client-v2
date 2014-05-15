<?php 
namespace Google\Service\Dfareporting;
class Recipient extends \Google\Model
{
  public $deliveryType;
  public $email;
  public $kind;

  public function setDeliveryType($deliveryType)
  {
    $this->deliveryType = $deliveryType;
  }

  public function getDeliveryType()
  {
    return $this->deliveryType;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
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
