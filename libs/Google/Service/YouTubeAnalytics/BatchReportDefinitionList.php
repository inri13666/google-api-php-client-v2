<?php 
namespace Google\Service\YouTubeAnalytics;
class BatchReportDefinitionList extends \Google\Collection
{
  protected $itemsType = 'Google\Service\YouTubeAnalytics\BatchReportDefinitionTemplate';
  protected $itemsDataType = 'array';
  public $kind;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
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
