<?php 
namespace Google\Service\YouTube;
class ChannelConversionPings extends \Google\Collection
{
  protected $pingsType = 'Google\Service\YouTube\ChannelConversionPing';
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
