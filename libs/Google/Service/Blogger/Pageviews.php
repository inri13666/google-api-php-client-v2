<?php 
namespace Google\Service\Blogger;
class Pageviews extends \Google\Collection
{
  public $blogId;
  protected $countsType = 'Google\Service\Blogger\PageviewsCounts';
  protected $countsDataType = 'array';
  public $kind;

  public function setBlogId($blogId)
  {
    $this->blogId = $blogId;
  }

  public function getBlogId()
  {
    return $this->blogId;
  }

  public function setCounts($counts)
  {
    $this->counts = $counts;
  }

  public function getCounts()
  {
    return $this->counts;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
