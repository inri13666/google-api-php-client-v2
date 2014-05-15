<?php 
namespace Google\Service\AdExchangeBuyer;
class Account extends \Google\Collection
{
  protected $bidderLocationType = 'Google\Service\AdExchangeBuyer\AccountBidderLocation';
  protected $bidderLocationDataType = 'array';
  public $cookieMatchingNid;
  public $cookieMatchingUrl;
  public $id;
  public $kind;
  public $maximumTotalQps;

  public function setBidderLocation($bidderLocation)
  {
    $this->bidderLocation = $bidderLocation;
  }

  public function getBidderLocation()
  {
    return $this->bidderLocation;
  }

  public function setCookieMatchingNid($cookieMatchingNid)
  {
    $this->cookieMatchingNid = $cookieMatchingNid;
  }

  public function getCookieMatchingNid()
  {
    return $this->cookieMatchingNid;
  }

  public function setCookieMatchingUrl($cookieMatchingUrl)
  {
    $this->cookieMatchingUrl = $cookieMatchingUrl;
  }

  public function getCookieMatchingUrl()
  {
    return $this->cookieMatchingUrl;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaximumTotalQps($maximumTotalQps)
  {
    $this->maximumTotalQps = $maximumTotalQps;
  }

  public function getMaximumTotalQps()
  {
    return $this->maximumTotalQps;
  }
}
