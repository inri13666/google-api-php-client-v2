<?php 
namespace Google\Service\Spectrum;
class DeviceOwner extends \Google\Model
{
  protected $operatorType = 'Google\Service\Spectrum\Vcard';
  protected $operatorDataType = '';
  protected $ownerType = 'Google\Service\Spectrum\Vcard';
  protected $ownerDataType = '';

  public function setOperator(\Google\Service\Spectrum\Vcard $operator)
  {
    $this->operator = $operator;
  }

  public function getOperator()
  {
    return $this->operator;
  }

  public function setOwner(\Google\Service\Spectrum\Vcard $owner)
  {
    $this->owner = $owner;
  }

  public function getOwner()
  {
    return $this->owner;
  }
}
