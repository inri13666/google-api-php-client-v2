<?php 
namespace Google\Service\Compute;
class HttpHealthCheck extends \Google\Model
{
  public $checkIntervalSec;
  public $creationTimestamp;
  public $description;
  public $healthyThreshold;
  public $host;
  public $id;
  public $kind;
  public $name;
  public $port;
  public $requestPath;
  public $selfLink;
  public $timeoutSec;
  public $unhealthyThreshold;

  public function setCheckIntervalSec($checkIntervalSec)
  {
    $this->checkIntervalSec = $checkIntervalSec;
  }

  public function getCheckIntervalSec()
  {
    return $this->checkIntervalSec;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setHealthyThreshold($healthyThreshold)
  {
    $this->healthyThreshold = $healthyThreshold;
  }

  public function getHealthyThreshold()
  {
    return $this->healthyThreshold;
  }

  public function setHost($host)
  {
    $this->host = $host;
  }

  public function getHost()
  {
    return $this->host;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPort($port)
  {
    $this->port = $port;
  }

  public function getPort()
  {
    return $this->port;
  }

  public function setRequestPath($requestPath)
  {
    $this->requestPath = $requestPath;
  }

  public function getRequestPath()
  {
    return $this->requestPath;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setTimeoutSec($timeoutSec)
  {
    $this->timeoutSec = $timeoutSec;
  }

  public function getTimeoutSec()
  {
    return $this->timeoutSec;
  }

  public function setUnhealthyThreshold($unhealthyThreshold)
  {
    $this->unhealthyThreshold = $unhealthyThreshold;
  }

  public function getUnhealthyThreshold()
  {
    return $this->unhealthyThreshold;
  }
}
