<?php 
namespace Google\Service\Blogger;
class BlogList extends \Google\Collection
{
  protected $blogUserInfosType = 'Google\Service\Blogger\BlogUserInfo';
  protected $blogUserInfosDataType = 'array';
  protected $itemsType = 'Google\Service\Blogger\Blog';
  protected $itemsDataType = 'array';
  public $kind;

  public function setBlogUserInfos($blogUserInfos)
  {
    $this->blogUserInfos = $blogUserInfos;
  }

  public function getBlogUserInfos()
  {
    return $this->blogUserInfos;
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
}
