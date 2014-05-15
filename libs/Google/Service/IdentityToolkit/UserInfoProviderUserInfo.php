<?php 
namespace Google\Service\IdentityToolkit;
class UserInfoProviderUserInfo extends \Google\Model
{
  public $displayName;
  public $federatedId;
  public $photoUrl;
  public $providerId;

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setFederatedId($federatedId)
  {
    $this->federatedId = $federatedId;
  }

  public function getFederatedId()
  {
    return $this->federatedId;
  }

  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }

  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }

  public function getProviderId()
  {
    return $this->providerId;
  }
}
