<?php 
namespace Google\Service\Spectrum;
class DeviceDescriptor extends \Google\Collection
{
  public $etsiEnDeviceCategory;
  public $etsiEnDeviceEmissionsClass;
  public $etsiEnDeviceType;
  public $etsiEnTechnologyId;
  public $fccId;
  public $fccTvbdDeviceType;
  public $manufacturerId;
  public $modelId;
  public $rulesetIds;
  public $serialNumber;

  public function setEtsiEnDeviceCategory($etsiEnDeviceCategory)
  {
    $this->etsiEnDeviceCategory = $etsiEnDeviceCategory;
  }

  public function getEtsiEnDeviceCategory()
  {
    return $this->etsiEnDeviceCategory;
  }

  public function setEtsiEnDeviceEmissionsClass($etsiEnDeviceEmissionsClass)
  {
    $this->etsiEnDeviceEmissionsClass = $etsiEnDeviceEmissionsClass;
  }

  public function getEtsiEnDeviceEmissionsClass()
  {
    return $this->etsiEnDeviceEmissionsClass;
  }

  public function setEtsiEnDeviceType($etsiEnDeviceType)
  {
    $this->etsiEnDeviceType = $etsiEnDeviceType;
  }

  public function getEtsiEnDeviceType()
  {
    return $this->etsiEnDeviceType;
  }

  public function setEtsiEnTechnologyId($etsiEnTechnologyId)
  {
    $this->etsiEnTechnologyId = $etsiEnTechnologyId;
  }

  public function getEtsiEnTechnologyId()
  {
    return $this->etsiEnTechnologyId;
  }

  public function setFccId($fccId)
  {
    $this->fccId = $fccId;
  }

  public function getFccId()
  {
    return $this->fccId;
  }

  public function setFccTvbdDeviceType($fccTvbdDeviceType)
  {
    $this->fccTvbdDeviceType = $fccTvbdDeviceType;
  }

  public function getFccTvbdDeviceType()
  {
    return $this->fccTvbdDeviceType;
  }

  public function setManufacturerId($manufacturerId)
  {
    $this->manufacturerId = $manufacturerId;
  }

  public function getManufacturerId()
  {
    return $this->manufacturerId;
  }

  public function setModelId($modelId)
  {
    $this->modelId = $modelId;
  }

  public function getModelId()
  {
    return $this->modelId;
  }

  public function setRulesetIds($rulesetIds)
  {
    $this->rulesetIds = $rulesetIds;
  }

  public function getRulesetIds()
  {
    return $this->rulesetIds;
  }

  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }

  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
}
