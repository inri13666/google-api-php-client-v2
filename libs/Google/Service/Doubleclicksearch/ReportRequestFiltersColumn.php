<?php 
namespace Google\Service\Doubleclicksearch;
class ReportRequestFiltersColumn extends \Google\Model
{
  public $columnName;
  public $savedColumnName;

  public function setColumnName($columnName)
  {
    $this->columnName = $columnName;
  }

  public function getColumnName()
  {
    return $this->columnName;
  }

  public function setSavedColumnName($savedColumnName)
  {
    $this->savedColumnName = $savedColumnName;
  }

  public function getSavedColumnName()
  {
    return $this->savedColumnName;
  }
}
