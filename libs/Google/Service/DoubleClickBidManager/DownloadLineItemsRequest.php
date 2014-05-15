<?php 
namespace Google\Service\DoubleClickBidManager;
class DownloadLineItemsRequest extends \Google\Collection
{
  public $filterIds;
  public $filterType;
  public $format;

  public function setFilterIds($filterIds)
  {
    $this->filterIds = $filterIds;
  }

  public function getFilterIds()
  {
    return $this->filterIds;
  }

  public function setFilterType($filterType)
  {
    $this->filterType = $filterType;
  }

  public function getFilterType()
  {
    return $this->filterType;
  }

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getFormat()
  {
    return $this->format;
  }
}
