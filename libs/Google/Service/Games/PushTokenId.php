<?php 
namespace Google\Service\Games;
class PushTokenId extends \Google\Model
{
  protected $iosType = 'Google\Service\Games\PushTokenIdIos';
  protected $iosDataType = '';
  public $kind;

  public function setIos(\Google\Service\Games\PushTokenIdIos $ios)
  {
    $this->ios = $ios;
  }

  public function getIos()
  {
    return $this->ios;
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
