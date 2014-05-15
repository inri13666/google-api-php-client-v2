<?php 
namespace Google\Service\Spectrum;
class PawsInitResponse extends \Google\Model
{
  protected $databaseChangeType = 'Google\Service\Spectrum\DbUpdateSpec';
  protected $databaseChangeDataType = '';
  public $kind;
  protected $rulesetInfoType = 'Google\Service\Spectrum\RulesetInfo';
  protected $rulesetInfoDataType = '';
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

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRulesetInfo(\Google\Service\Spectrum\RulesetInfo $rulesetInfo)
  {
    $this->rulesetInfo = $rulesetInfo;
  }

  public function getRulesetInfo()
  {
    return $this->rulesetInfo;
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
