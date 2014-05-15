<?php 
namespace Google\Service\Replicapool;
class ReplicaStatus extends \Google\Model
{
  public $details;
  public $state;
  public $templateVersion;
  public $vmLink;
  public $vmStartTime;

  public function setDetails($details)
  {
    $this->details = $details;
  }

  public function getDetails()
  {
    return $this->details;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setTemplateVersion($templateVersion)
  {
    $this->templateVersion = $templateVersion;
  }

  public function getTemplateVersion()
  {
    return $this->templateVersion;
  }

  public function setVmLink($vmLink)
  {
    $this->vmLink = $vmLink;
  }

  public function getVmLink()
  {
    return $this->vmLink;
  }

  public function setVmStartTime($vmStartTime)
  {
    $this->vmStartTime = $vmStartTime;
  }

  public function getVmStartTime()
  {
    return $this->vmStartTime;
  }
}
