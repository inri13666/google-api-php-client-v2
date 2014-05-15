<?php 
namespace Google\Service\Directory;
class MobileDevices extends \Google\Collection
{
  public $etag;
  public $kind;
  protected $mobiledevicesType = 'Google\Service\Directory\MobileDevice';
  protected $mobiledevicesDataType = 'array';
  public $nextPageToken;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMobiledevices($mobiledevices)
  {
    $this->mobiledevices = $mobiledevices;
  }

  public function getMobiledevices()
  {
    return $this->mobiledevices;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
