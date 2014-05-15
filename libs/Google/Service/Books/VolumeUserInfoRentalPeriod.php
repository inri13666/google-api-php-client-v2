<?php 
namespace Google\Service\Books;
class VolumeUserInfoRentalPeriod extends \Google\Model
{
  public $endUtcSec;
  public $startUtcSec;

  public function setEndUtcSec($endUtcSec)
  {
    $this->endUtcSec = $endUtcSec;
  }

  public function getEndUtcSec()
  {
    return $this->endUtcSec;
  }

  public function setStartUtcSec($startUtcSec)
  {
    $this->startUtcSec = $startUtcSec;
  }

  public function getStartUtcSec()
  {
    return $this->startUtcSec;
  }
}
