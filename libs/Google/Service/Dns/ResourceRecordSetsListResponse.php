<?php 
namespace Google\Service\Dns;
class ResourceRecordSetsListResponse extends \Google\Collection
{
  public $kind;
  public $nextPageToken;
  protected $rrsetsType = 'Google\Service\Dns\ResourceRecordSet';
  protected $rrsetsDataType = 'array';

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

  public function setRrsets($rrsets)
  {
    $this->rrsets = $rrsets;
  }

  public function getRrsets()
  {
    return $this->rrsets;
  }
}
