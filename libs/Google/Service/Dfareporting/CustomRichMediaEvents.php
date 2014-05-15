<?php 
namespace Google\Service\Dfareporting;
class CustomRichMediaEvents extends \Google\Collection
{
  protected $filteredEventIdsType = 'Google\Service\Dfareporting\DimensionValue';
  protected $filteredEventIdsDataType = 'array';
  public $kind;

  public function setFilteredEventIds($filteredEventIds)
  {
    $this->filteredEventIds = $filteredEventIds;
  }

  public function getFilteredEventIds()
  {
    return $this->filteredEventIds;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
