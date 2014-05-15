<?php 
namespace Google\Service\YouTube;
class PageInfo extends \Google\Model
{
  public $resultsPerPage;
  public $totalResults;

  public function setResultsPerPage($resultsPerPage)
  {
    $this->resultsPerPage = $resultsPerPage;
  }

  public function getResultsPerPage()
  {
    return $this->resultsPerPage;
  }

  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }

  public function getTotalResults()
  {
    return $this->totalResults;
  }
}
