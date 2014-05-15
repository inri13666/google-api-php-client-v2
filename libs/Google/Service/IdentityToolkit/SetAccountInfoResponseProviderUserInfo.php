<?php 
namespace Google\Service\IdentityToolkit;
class SetAccountInfoResponseProviderUserInfo extends \Google\Model
{
  public $displayName;
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
