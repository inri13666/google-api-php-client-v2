<?php 
namespace Google\Service\Spectrum;
class PawsGetSpectrumResponse extends \Google\Collection
{
  protected $databaseChangeType = 'Google\Service\Spectrum\DbUpdateSpec';
  protected $databaseChangeDataType = '';
  protected $deviceDescType = 'Google\Service\Spectrum\DeviceDescriptor';
  protected $deviceDescDataType = '';
  public $kind;
  public $maxContiguousBwHz;
  public $maxTotalBwHz;
  public $needsSpectrumReport;
  protected $rulesetInfoType = 'Google\Service\Spectrum\RulesetInfo';
  protected $rulesetInfoDataType = '';
  protected $spectrumSchedulesType = 'Google\Service\Spectrum\SpectrumSchedule';
  protected $spectrumSchedulesDataType = 'array';
  public $timestamp;
  public $type;
  public $version;

  public function setDatabaseChange(\Google\Service\Spectrum\DbUpdateSpec $databaseChange)
  {
    $this->databaseChange = $databaseChange;
  }

  public function getDatabaseChange()
  {
    return $this->databaseChange;
  }

  public function setDeviceDesc(\Google\Service\Spectrum\DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }

  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaxContiguousBwHz($maxContiguousBwHz)
  {
    $this->maxContiguousBwHz = $maxContiguousBwHz;
  }

  public function getMaxContiguousBwHz()
  {
    return $this->maxContiguousBwHz;
  }

  public function setMaxTotalBwHz($maxTotalBwHz)
  {
    $this->maxTotalBwHz = $maxTotalBwHz;
  }

  public function getMaxTotalBwHz()
  {
    return $this->maxTotalBwHz;
  }

  public function setNeedsSpectrumReport($needsSpectrumReport)
  {
    $this->needsSpectrumReport = $needsSpectrumReport;
  }

  public function getNeedsSpectrumReport()
  {
    return $this->needsSpectrumReport;
  }

  public function setRulesetInfo(\Google\Service\Spectrum\RulesetInfo $rulesetInfo)
  {
    $this->rulesetInfo = $rulesetInfo;
  }

  public function getRulesetInfo()
  {
    return $this->rulesetInfo;
  }

  public function setSpectrumSchedules($spectrumSchedules)
  {
    $this->spectrumSchedules = $spectrumSchedules;
  }

  public function getSpectrumSchedules()
  {
    return $this->spectrumSchedules;
  }

  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }

  public function getTimestamp()
  {
    return $this->timestamp;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}
