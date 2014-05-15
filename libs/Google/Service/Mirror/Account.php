<?php 
namespace Google\Service\Mirror;
class Account extends \Google\Collection
{
  protected $authTokensType = 'Google\Service\Mirror\AuthToken';
  protected $authTokensDataType = 'array';
  public $features;
  public $password;
  protected $userDataType = 'Google\Service\Mirror\UserData';
  protected $userDataDataType = 'array';

  public function setAuthTokens($authTokens)
  {
    $this->authTokens = $authTokens;
  }

  public function getAuthTokens()
  {
    return $this->authTokens;
  }

  public function setFeatures($features)
  {
    $this->features = $features;
  }

  public function getFeatures()
  {
    return $this->features;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setUserData($userData)
  {
    $this->userData = $userData;
  }

  public function getUserData()
  {
    return $this->userData;
  }
}
