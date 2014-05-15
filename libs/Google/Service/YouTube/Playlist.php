<?php 
namespace Google\Service\YouTube;
class Playlist extends \Google\Model
{
  protected $contentDetailsType = 'Google\Service\YouTube\PlaylistContentDetails';
  protected $contentDetailsDataType = '';
  public $etag;
  public $id;
  public $kind;
  protected $playerType = 'Google\Service\YouTube\PlaylistPlayer';
  protected $playerDataType = '';
  protected $snippetType = 'Google\Service\YouTube\PlaylistSnippet';
  protected $snippetDataType = '';
  protected $statusType = 'Google\Service\YouTube\PlaylistStatus';
  protected $statusDataType = '';

  public function setContentDetails(\Google\Service\YouTube\PlaylistContentDetails $contentDetails)
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

  public function setPlayer(\Google\Service\YouTube\PlaylistPlayer $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }

  public function setSnippet(\Google\Service\YouTube\PlaylistSnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }

  public function setStatus(\Google\Service\YouTube\PlaylistStatus $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
