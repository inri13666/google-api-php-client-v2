<?php 
namespace Google\Service\Games;
class PushTokenIdIos extends \Google\Model
{
  public $apnsDeviceToken;
  public $apnsEnvironment;

  public function setApnsDeviceToken($apnsDeviceToken)
  {
    $this->apnsDeviceToken = $apnsDeviceToken;
  }

  public function getApnsDeviceToken()
  {
    return $this->apnsDeviceToken;
  }

  public function setApnsEnvironment($apnsEnvironment)
  {
    $this->apnsEnvironment = $apnsEnvironment;
  }

  public function getApnsEnvironment()
  {
    return $this->apnsEnvironment;
  }
}
