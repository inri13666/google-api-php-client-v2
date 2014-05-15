<?php 
namespace Google\Service\Customsearch;
class Search extends \Google\Collection
{
  protected $contextType = 'Google\Service\Customsearch\Context';
  protected $contextDataType = '';
  protected $itemsType = 'Google\Service\Customsearch\Result';
  protected $itemsDataType = 'array';
  public $kind;
  protected $promotionsType = 'Google\Service\Customsearch\Promotion';
  protected $promotionsDataType = 'array';
  protected $queriesType = 'Google\Service\Customsearch\Query';
  protected $queriesDataType = 'map';
  protected $searchInformationType = 'Google\Service\Customsearch\SearchSearchInformation';
  protected $searchInformationDataType = '';
  protected $spellingType = 'Google\Service\Customsearch\SearchSpelling';
  protected $spellingDataType = '';
  protected $urlType = 'Google\Service\Customsearch\SearchUrl';
  protected $urlDataType = '';

  public function setContext(\Google\Service\Customsearch\Context $context)
  {
    $this->context = $context;
  }

  public function getContext()
  {
    return $this->context;
  }

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

  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }

  public function getPromotions()
  {
    return $this->promotions;
  }

  public function setQueries($queries)
  {
    $this->queries = $queries;
  }

  public function getQueries()
  {
    return $this->queries;
  }

  public function setSearchInformation(\Google\Service\Customsearch\SearchSearchInformation $searchInformation)
  {
    $this->searchInformation = $searchInformation;
  }

  public function getSearchInformation()
  {
    return $this->searchInformation;
  }

  public function setSpelling(\Google\Service\Customsearch\SearchSpelling $spelling)
  {
    $this->spelling = $spelling;
  }

  public function getSpelling()
  {
    return $this->spelling;
  }

  public function setUrl(\Google\Service\Customsearch\SearchUrl $url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
}
