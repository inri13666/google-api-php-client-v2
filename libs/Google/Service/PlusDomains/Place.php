<?php 
namespace Google\Service\PlusDomains;
class Place extends \Google\Model
{
  protected $addressType = 'Google\Service\PlusDomains\PlaceAddress';
  protected $addressDataType = '';
  public $displayName;
  public $kind;
  protected $positionType = 'Google\Service\PlusDomains\PlacePosition';
  protected $positionDataType = '';

  public function setAddress(\Google\Service\PlusDomains\PlaceAddress $address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPosition(\Google\Service\PlusDomains\PlacePosition $position)
  {
    $this->position = $position;
  }

  public function getPosition()
  {
    return $this->position;
  }
}
