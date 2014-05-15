<?php 
namespace Google\Service\Plus;
class Place extends \Google\Model
{
  protected $addressType = 'Google\Service\Plus\PlaceAddress';
  protected $addressDataType = '';
  public $displayName;
  public $kind;
  protected $positionType = 'Google\Service\Plus\PlacePosition';
  protected $positionDataType = '';

  public function setAddress(\Google\Service\Plus\PlaceAddress $address)
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

  public function setPosition(\Google\Service\Plus\PlacePosition $position)
  {
    $this->position = $position;
  }

  public function getPosition()
  {
    return $this->position;
  }
}
