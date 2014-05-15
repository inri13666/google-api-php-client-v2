<?php 
namespace Google\Service\CivicInfo;
class Office extends \Google\Collection
{
  public $level;
  public $name;
  public $officialIds;
  protected $sourcesType = 'Google\Service\CivicInfo\Source';
  protected $sourcesDataType = 'array';

  public function setLevel($level)
  {
    $this->level = $level;
  }

  public function getLevel()
  {
    return $this->level;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOfficialIds($officialIds)
  {
    $this->officialIds = $officialIds;
  }

  public function getOfficialIds()
  {
    return $this->officialIds;
  }

  public function setSources($sources)
  {
    $this->sources = $sources;
  }

  public function getSources()
  {
    return $this->sources;
  }
}
