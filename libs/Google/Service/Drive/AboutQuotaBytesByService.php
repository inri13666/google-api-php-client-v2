<?php 
namespace Google\Service\Drive;
class AboutQuotaBytesByService extends \Google\Model
{
  public $bytesUsed;
  public $serviceName;

  public function setBytesUsed($bytesUsed)
  {
    $this->bytesUsed = $bytesUsed;
  }

  public function getBytesUsed()
  {
    return $this->bytesUsed;
  }

  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }

  public function getServiceName()
  {
    return $this->serviceName;
  }
}
