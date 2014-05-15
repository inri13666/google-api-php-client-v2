<?php 
namespace Google\Service\Customsearch;
class Context extends \Google\Collection
{
  protected $facetsType = 'Google\Service\Customsearch\ContextFacets';
  protected $facetsDataType = 'array';
  public $title;

  public function setFacets($facets)
  {
    $this->facets = $facets;
  }

  public function getFacets()
  {
    return $this->facets;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}
