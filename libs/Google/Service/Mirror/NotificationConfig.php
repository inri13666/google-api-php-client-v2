<?php 
namespace Google\Service\Mirror;
class NotificationConfig extends \Google\Model
{
  public $deliveryTime;
  public $level;

  public function setDeliveryTime($deliveryTime)
  {
    $this->deliveryTime = $deliveryTime;
  }

  public function getDeliveryTime()
  {
    return $this->deliveryTime;
  }

  public function setLevel($level)
  {
    $this->level = $level;
  }

  public function getLevel()
  {
    return $this->level;
  }
}
