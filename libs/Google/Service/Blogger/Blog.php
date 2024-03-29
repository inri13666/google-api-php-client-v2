<?php 
namespace Google\Service\Blogger;
class Blog extends \Google\Model
{
  public $customMetaData;
  public $description;
  public $id;
  public $kind;
  protected $localeType = 'Google\Service\Blogger\BlogLocale';
  protected $localeDataType = '';
  public $name;
  protected $pagesType = 'Google\Service\Blogger\BlogPages';
  protected $pagesDataType = '';
  protected $postsType = 'Google\Service\Blogger\BlogPosts';
  protected $postsDataType = '';
  public $published;
  public $selfLink;
  public $updated;
  public $url;

  public function setCustomMetaData($customMetaData)
  {
    $this->customMetaData = $customMetaData;
  }

  public function getCustomMetaData()
  {
    return $this->customMetaData;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLocale(\Google\Service\Blogger\BlogLocale $locale)
  {
    $this->locale = $locale;
  }

  public function getLocale()
  {
    return $this->locale;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPages(\Google\Service\Blogger\BlogPages $pages)
  {
    $this->pages = $pages;
  }

  public function getPages()
  {
    return $this->pages;
  }

  public function setPosts(\Google\Service\Blogger\BlogPosts $posts)
  {
    $this->posts = $posts;
  }

  public function getPosts()
  {
    return $this->posts;
  }

  public function setPublished($published)
  {
    $this->published = $published;
  }

  public function getPublished()
  {
    return $this->published;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
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
