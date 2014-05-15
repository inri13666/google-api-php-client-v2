<?php 
namespace Google\Service\Customsearch;
class SearchSearchInformation extends \Google\Model
{
  public $formattedSearchTime;
  public $formattedTotalResults;
  public $searchTime;
  public $totalResults;

  public function setFormattedSearchTime($formattedSearchTime)
  {
    $this->formattedSearchTime = $formattedSearchTime;
  }

  public function getFormattedSearchTime()
  {
    return $this->formattedSearchTime;
  }

  public function setFormattedTotalResults($formattedTotalResults)
  {
    $this->formattedTotalResults = $formattedTotalResults;
  }

  public function getFormattedTotalResults()
  {
    return $this->formattedTotalResults;
  }

  public function setSearchTime($searchTime)
  {
    $this->searchTime = $searchTime;
  }

  public function getSearchTime()
  {
    return $this->searchTime;
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
