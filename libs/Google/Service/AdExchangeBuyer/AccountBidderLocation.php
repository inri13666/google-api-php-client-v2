<?php 
namespace Google\Service\AdExchangeBuyer;
class AccountBidderLocation extends \Google\Model
{
  public $maximumQps;
  public $region;
  public $url;

  public function setMaximumQps($maximumQps)
  {
    $this->maximumQps = $maximumQps;
  }

  public function getMaximumQps()
  {
    return $this->maximumQps;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
}
