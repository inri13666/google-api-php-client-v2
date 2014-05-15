<?php 
namespace Google\Service\IdentityToolkit;
class GetOobConfirmationCodeResponse extends \Google\Model
{
  public $kind;
  public $oobCode;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }

  public function getOobCode()
  {
    return $this->oobCode;
  }
}
