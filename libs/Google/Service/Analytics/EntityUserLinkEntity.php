<?php 
namespace Google\Service\Analytics;
class EntityUserLinkEntity extends \Google\Model
{
  protected $accountRefType = 'Google\Service\Analytics\AccountRef';
  protected $accountRefDataType = '';
  protected $profileRefType = 'Google\Service\Analytics\ProfileRef';
  protected $profileRefDataType = '';
  protected $webPropertyRefType = 'Google\Service\Analytics\WebPropertyRef';
  protected $webPropertyRefDataType = '';

  public function setAccountRef(\Google\Service\Analytics\AccountRef $accountRef)
  {
    $this->accountRef = $accountRef;
  }

  public function getAccountRef()
  {
    return $this->accountRef;
  }

  public function setProfileRef(\Google\Service\Analytics\ProfileRef $profileRef)
  {
    $this->profileRef = $profileRef;
  }

  public function getProfileRef()
  {
    return $this->profileRef;
  }

  public function setWebPropertyRef(\Google\Service\Analytics\WebPropertyRef $webPropertyRef)
  {
    $this->webPropertyRef = $webPropertyRef;
  }

  public function getWebPropertyRef()
  {
    return $this->webPropertyRef;
  }
}
