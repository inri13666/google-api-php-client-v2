<?php 
namespace Google\Service\Reseller;
class RenewalSettings extends \Google\Model
{
  public $kind;
  public $renewalType;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRenewalType($renewalType)
  {
    $this->renewalType = $renewalType;
  }

  public function getRenewalType()
  {
    return $this->renewalType;
  }
}
