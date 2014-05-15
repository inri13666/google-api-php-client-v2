<?php 
namespace Google\Service\Analytics;
class GoalUrlDestinationDetails extends \Google\Collection
{
  public $caseSensitive;
  public $firstStepRequired;
  public $matchType;
  protected $stepsType = 'Google\Service\Analytics\GoalUrlDestinationDetailsSteps';
  protected $stepsDataType = 'array';
  public $url;

  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }

  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }

  public function setFirstStepRequired($firstStepRequired)
  {
    $this->firstStepRequired = $firstStepRequired;
  }

  public function getFirstStepRequired()
  {
    return $this->firstStepRequired;
  }

  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }

  public function getMatchType()
  {
    return $this->matchType;
  }

  public function setSteps($steps)
  {
    $this->steps = $steps;
  }

  public function getSteps()
  {
    return $this->steps;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
}
