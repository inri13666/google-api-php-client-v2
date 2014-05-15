<?php 
namespace Google\Service\YouTube;
class ActivityContentDetailsPlaylistItem extends \Google\Model
{
  public $playlistId;
  public $playlistItemId;
  protected $resourceIdType = 'Google\Service\YouTube\ResourceId';
  protected $resourceIdDataType = '';

  public function setPlaylistId($playlistId)
  {
    $this->playlistId = $playlistId;
  }

  public function getPlaylistId()
  {
    return $this->playlistId;
  }

  public function setPlaylistItemId($playlistItemId)
  {
    $this->playlistItemId = $playlistItemId;
  }

  public function getPlaylistItemId()
  {
    return $this->playlistItemId;
  }

  public function setResourceId(\Google\Service\YouTube\ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }

  public function getResourceId()
  {
    return $this->resourceId;
  }
}
