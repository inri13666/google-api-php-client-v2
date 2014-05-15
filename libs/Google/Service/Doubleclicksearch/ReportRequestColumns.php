<?php 
namespace Google\Service\Doubleclicksearch;
class ReportRequestColumns extends \Google\Model
{
  public $columnName;
  public $endDate;
  public $groupByColumn;
  public $headerText;
  public $savedColumnName;
  public $startDate;

  public function setColumnName($columnName)
  {
    $this->columnName = $columnName;
  }

  public function getColumnName()
  {
    return $this->columnName;
  }

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function setGroupByColumn($groupByColumn)
  {
    $this->groupByColumn = $groupByColumn;
  }

  public function getGroupByColumn()
  {
    return $this->groupByColumn;
  }

  public function setHeaderText($headerText)
  {
    $this->headerText = $headerText;
  }

  public function getHeaderText()
  {
    return $this->headerText;
  }

  public function setSavedColumnName($savedColumnName)
  {
    $this->savedColumnName = $savedColumnName;
  }

  public function getSavedColumnName()
  {
    return $this->savedColumnName;
  }

  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }
}
