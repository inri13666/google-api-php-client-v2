<?php 
namespace Google\Service\Manager;
class DeployState extends \Google\Model
{
  public $details;
  public $status;

  public function setDetails($details)
  {
    $this->details = $details;
  }

  public function getDetails()
  {
    return $this->details;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
