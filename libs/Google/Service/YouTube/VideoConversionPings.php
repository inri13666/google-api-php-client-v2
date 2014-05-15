<?php 
namespace Google\Service\YouTube;
class VideoConversionPings extends \Google\Collection
{
  protected $pingsType = 'Google\Service\YouTube\VideoConversionPing';
  protected $pingsDataType = 'array';

  public function setPings($pings)
  {
    $this->pings = $pings;
  }

  public function getPings()
  {
    return $this->pings;
  }
}
