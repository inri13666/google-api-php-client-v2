<?php 
namespace Google\Service\Drive;
class AppIcons extends \Google\Model
{
  public $category;
  public $iconUrl;
  public $size;

  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }

  public function getIconUrl()
  {
    return $this->iconUrl;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }

  public function getSize()
  {
    return $this->size;
  }
}
