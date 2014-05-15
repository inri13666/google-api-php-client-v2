<?php 
namespace Google\Service\CivicInfo;
class Official extends \Google\Collection
{
  protected $addressType = 'Google\Service\CivicInfo\SimpleAddressType';
  protected $addressDataType = 'array';
  protected $channelsType = 'Google\Service\CivicInfo\Channel';
  protected $channelsDataType = 'array';
  public $emails;
  public $name;
  public $party;
  public $phones;
  public $photoUrl;
  public $urls;

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setChannels($channels)
  {
    $this->channels = $channels;
  }

  public function getChannels()
  {
    return $this->channels;
  }

  public function setEmails($emails)
  {
    $this->emails = $emails;
  }

  public function getEmails()
  {
    return $this->emails;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setParty($party)
  {
    $this->party = $party;
  }

  public function getParty()
  {
    return $this->party;
  }

  public function setPhones($phones)
  {
    $this->phones = $phones;
  }

  public function getPhones()
  {
    return $this->phones;
  }

  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }

  public function setUrls($urls)
  {
    $this->urls = $urls;
  }

  public function getUrls()
  {
    return $this->urls;
  }
}
