<?php 
namespace Google\Service\Games;
class RoomClientAddress extends \Google\Model
{
  public $kind;
  public $xmppAddress;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setXmppAddress($xmppAddress)
  {
    $this->xmppAddress = $xmppAddress;
  }

  public function getXmppAddress()
  {
    return $this->xmppAddress;
  }
}
