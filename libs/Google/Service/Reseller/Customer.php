<?php 
namespace Google\Service\Reseller;
class Customer extends \Google\Model
{
  public $alternateEmail;
  public $customerDomain;
  public $customerId;
  public $kind;
  public $phoneNumber;
  protected $postalAddressType = 'Google\Service\Reseller\Address';
  protected $postalAddressDataType = '';
  public $resourceUiUrl;

  public function setAlternateEmail($alternateEmail)
  {
    $this->alternateEmail = $alternateEmail;
  }

  public function getAlternateEmail()
  {
    return $this->alternateEmail;
  }

  public function setCustomerDomain($customerDomain)
  {
    $this->customerDomain = $customerDomain;
  }

  public function getCustomerDomain()
  {
    return $this->customerDomain;
  }

  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }

  public function getCustomerId()
  {
    return $this->customerId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  public function setPostalAddress(\Google\Service\Reseller\Address $postalAddress)
  {
    $this->postalAddress = $postalAddress;
  }

  public function getPostalAddress()
  {
    return $this->postalAddress;
  }

  public function setResourceUiUrl($resourceUiUrl)
  {
    $this->resourceUiUrl = $resourceUiUrl;
  }

  public function getResourceUiUrl()
  {
    return $this->resourceUiUrl;
  }
}
