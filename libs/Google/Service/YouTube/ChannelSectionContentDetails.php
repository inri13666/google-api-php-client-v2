<?php 
namespace Google\Service\YouTube;
class ChannelSectionContentDetails extends \Google\Collection
{
  public $channels;
  public $playlists;

  public function setChannels($channels)
  {
    $this->channels = $channels;
  }

  public function getChannels()
  {
    return $this->channels;
  }

  public function setPlaylists($playlists)
  {
    $this->playlists = $playlists;
  }

  public function getPlaylists()
  {
    return $this->playlists;
  }
}
