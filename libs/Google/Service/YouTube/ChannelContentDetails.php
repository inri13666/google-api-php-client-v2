<?php 
namespace Google\Service\YouTube;
class ChannelContentDetails extends \Google\Model
{
  public $googlePlusUserId;
  protected $relatedPlaylistsType = 'Google\Service\YouTube\ChannelContentDetailsRelatedPlaylists';
  protected $relatedPlaylistsDataType = '';

  public function setGooglePlusUserId($googlePlusUserId)
  {
    $this->googlePlusUserId = $googlePlusUserId;
  }

  public function getGooglePlusUserId()
  {
    return $this->googlePlusUserId;
  }

  public function setRelatedPlaylists(\Google\Service\YouTube\ChannelContentDetailsRelatedPlaylists $relatedPlaylists)
  {
    $this->relatedPlaylists = $relatedPlaylists;
  }

  public function getRelatedPlaylists()
  {
    return $this->relatedPlaylists;
  }
}
