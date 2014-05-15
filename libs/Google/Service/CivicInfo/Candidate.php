<?php 
namespace Google\Service\CivicInfo;
class Candidate extends \Google\Collection
{
  public $candidateUrl;
  protected $channelsType = 'Google\Service\CivicInfo\Channel';
  protected $channelsDataType = 'array';
  public $email;
  public $name;
  public $orderOnBallot;
  public $party;
  public $phone;
  public $photoUrl;

  public function setCandidateUrl($candidateUrl)
  {
    $this->candidateUrl = $candidateUrl;
  }

  public function getCandidateUrl()
  {
    return $this->candidateUrl;
  }

  public function setChannels($channels)
  {
    $this->channels = $channels;
  }

  public function getChannels()
  {
    return $this->channels;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOrderOnBallot($orderOnBallot)
  {
    $this->orderOnBallot = $orderOnBallot;
  }

  public function getOrderOnBallot()
  {
    return $this->orderOnBallot;
  }

  public function setParty($party)
  {
    $this->party = $party;
  }

  public function getParty()
  {
    return $this->party;
  }

  public function setPhone($phone)
  {
    $this->phone = $phone;
  }

  public function getPhone()
  {
    return $this->phone;
  }

  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
}
