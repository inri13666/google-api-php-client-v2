<?php 
namespace Google\Service\YouTube;
class LiveBroadcast extends \Google\Model
{
  protected $contentDetailsType = 'Google\Service\YouTube\LiveBroadcastContentDetails';
  protected $contentDetailsDataType = '';
  public $etag;
  public $id;
  public $kind;
  protected $snippetType = 'Google\Service\YouTube\LiveBroadcastSnippet';
  protected $snippetDataType = '';
  protected $statusType = 'Google\Service\YouTube\LiveBroadcastStatus';
  protected $statusDataType = '';

  public function setContentDetails(\Google\Service\YouTube\LiveBroadcastContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }

  public function getContentDetails()
  {
    return $this->contentDetails;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
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

  public function setSnippet(\Google\Service\YouTube\LiveBroadcastSnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }

  public function setStatus(\Google\Service\YouTube\LiveBroadcastStatus $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
