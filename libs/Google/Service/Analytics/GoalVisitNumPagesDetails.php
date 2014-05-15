<?php 
namespace Google\Service\Analytics;
class GoalVisitNumPagesDetails extends \Google\Model
{
  public $comparisonType;
  public $comparisonValue;

  public function setComparisonType($comparisonType)
  {
    $this->comparisonType = $comparisonType;
  }

  public function getComparisonType()
  {
    return $this->comparisonType;
  }

  public function setComparisonValue($comparisonValue)
  {
    $this->comparisonValue = $comparisonValue;
  }

  public function getComparisonValue()
  {
    return $this->comparisonValue;
  }
}
