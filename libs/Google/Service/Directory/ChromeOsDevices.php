<?php 
namespace Google\Service\Directory;
class ChromeOsDevices extends \Google\Collection
{
  protected $chromeosdevicesType = 'Google\Service\Directory\ChromeOsDevice';
  protected $chromeosdevicesDataType = 'array';
  public $etag;
  public $kind;
  public $nextPageToken;

  public function setChromeosdevices($chromeosdevices)
  {
    $this->chromeosdevices = $chromeosdevices;
  }

  public function getChromeosdevices()
  {
    return $this->chromeosdevices;
  }

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

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
