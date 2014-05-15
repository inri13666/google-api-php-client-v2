<?php 
namespace Google\Service\Bigquery;
class ErrorProto extends \Google\Model
{
  public $debugInfo;
  public $location;
  public $message;
  public $reason;

  public function setDebugInfo($debugInfo)
  {
    $this->debugInfo = $debugInfo;
  }

  public function getDebugInfo()
  {
    return $this->debugInfo;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setMessage($message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReason()
  {
    return $this->reason;
  }
}
