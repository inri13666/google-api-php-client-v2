<?php 
namespace Google\Service\DoubleClickBidManager;
class ListReportsResponse extends \Google\Collection
{
  public $kind;
  protected $reportsType = 'Google\Service\DoubleClickBidManager\Report';
  protected $reportsDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setReports($reports)
  {
    $this->reports = $reports;
  }

  public function getReports()
  {
    return $this->reports;
  }
}
