<?php 
namespace Google\Service\YouTube;
class PlaylistItem extends \Google\Model
{
  protected $contentDetailsType = 'Google\Service\YouTube\PlaylistItemContentDetails';
  protected $contentDetailsDataType = '';
  public $etag;
  public $id;
  public $kind;
  protected $snippetType = 'Google\Service\YouTube\PlaylistItemSnippet';
  protected $snippetDataType = '';
  protected $statusType = 'Google\Service\YouTube\PlaylistItemStatus';
  protected $statusDataType = '';

  public function setContentDetails(\Google\Service\YouTube\PlaylistItemContentDetails $contentDetails)
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

  public function setSnippet(\Google\Service\YouTube\PlaylistItemSnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }

  public function setStatus(\Google\Service\YouTube\PlaylistItemStatus $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
