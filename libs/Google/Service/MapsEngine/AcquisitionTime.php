<?php 
namespace Google\Service\MapsEngine;
class AcquisitionTime extends \Google\Model
{
  public $end;
  public $precision;
  public $start;

  public function setEnd($end)
  {
    $this->end = $end;
  }

  public function getEnd()
  {
    return $this->end;
  }

  public function setPrecision($precision)
  {
    $this->precision = $precision;
  }

  public function getPrecision()
  {
    return $this->precision;
  }

  public function setStart($start)
  {
    $this->start = $start;
  }

  public function getStart()
  {
    return $this->start;
  }
}
