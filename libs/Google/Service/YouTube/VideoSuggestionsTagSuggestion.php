<?php 
namespace Google\Service\YouTube;
class VideoSuggestionsTagSuggestion extends \Google\Collection
{
  public $categoryRestricts;
  public $tag;

  public function setCategoryRestricts($categoryRestricts)
  {
    $this->categoryRestricts = $categoryRestricts;
  }

  public function getCategoryRestricts()
  {
    return $this->categoryRestricts;
  }

  public function setTag($tag)
  {
    $this->tag = $tag;
  }

  public function getTag()
  {
    return $this->tag;
  }
}
