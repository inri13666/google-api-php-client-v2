<?php 
namespace Google\Service\IdentityToolkit;
class IdentitytoolkitRelyingpartyUploadAccountRequest extends \Google\Collection
{
  public $hashAlgorithm;
  public $memoryCost;
  public $rounds;
  public $saltSeparator;
  public $signerKey;
  protected $usersType = 'Google\Service\IdentityToolkit\UserInfo';
  protected $usersDataType = 'array';

  public function setHashAlgorithm($hashAlgorithm)
  {
    $this->hashAlgorithm = $hashAlgorithm;
  }

  public function getHashAlgorithm()
  {
    return $this->hashAlgorithm;
  }

  public function setMemoryCost($memoryCost)
  {
    $this->memoryCost = $memoryCost;
  }

  public function getMemoryCost()
  {
    return $this->memoryCost;
  }

  public function setRounds($rounds)
  {
    $this->rounds = $rounds;
  }

  public function getRounds()
  {
    return $this->rounds;
  }

  public function setSaltSeparator($saltSeparator)
  {
    $this->saltSeparator = $saltSeparator;
  }

  public function getSaltSeparator()
  {
    return $this->saltSeparator;
  }

  public function setSignerKey($signerKey)
  {
    $this->signerKey = $signerKey;
  }

  public function getSignerKey()
  {
    return $this->signerKey;
  }

  public function setUsers($users)
  {
    $this->users = $users;
  }

  public function getUsers()
  {
    return $this->users;
  }
}
