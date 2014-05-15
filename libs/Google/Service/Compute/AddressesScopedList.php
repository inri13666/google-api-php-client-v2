<?php 
namespace Google\Service\Compute;
class AddressesScopedList extends \Google\Collection
{
  protected $addressesType = 'Google\Service\Compute\Address';
  protected $addressesDataType = 'array';
  protected $warningType = 'Google\Service\Compute\AddressesScopedListWarning';
  protected $warningDataType = '';

  public function setAddresses($addresses)
  {
    $this->addresses = $addresses;
  }

  public function getAddresses()
  {
    return $this->addresses;
  }

  public function setWarning(\Google\Service\Compute\AddressesScopedListWarning $warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
