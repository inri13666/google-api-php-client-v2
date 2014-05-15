<?php 
namespace Google\Service\DoubleClickBidManager;
class ReportStatus extends \Google\Model
{
  protected $failureType = 'Google\Service\DoubleClickBidManager\ReportFailure';
  protected $failureDataType = '';
  public $finishTimeMs;
  public $format;
  public $state;

  public function setFailure(\Google\Service\DoubleClickBidManager\ReportFailure $failure)
  {
    $this->failure = $failure;
  }

  public function getFailure()
  {
    return $this->failure;
  }

  public function setFinishTimeMs($finishTimeMs)
  {
    $this->finishTimeMs = $finishTimeMs;
  }

  public function getFinishTimeMs()
  {
    return $this->finishTimeMs;
  }

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getFormat()
  {
    return $this->format;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }
}
