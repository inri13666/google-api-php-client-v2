<?php 
namespace Google\Service\Blogger;
class User extends \Google\Model
{
  public $about;
  protected $blogsType = 'Google\Service\Blogger\UserBlogs';
  protected $blogsDataType = '';
  public $created;
  public $displayName;
  public $id;
  public $kind;
  protected $localeType = 'Google\Service\Blogger\UserLocale';
  protected $localeDataType = '';
  public $selfLink;
  public $url;

  public function setAbout($about)
  {
    $this->about = $about;
  }

  public function getAbout()
  {
    return $this->about;
  }

  public function setBlogs(\Google\Service\Blogger\UserBlogs $blogs)
  {
    $this->blogs = $blogs;
  }

  public function getBlogs()
  {
    return $this->blogs;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
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

  public function setLocale(\Google\Service\Blogger\UserLocale $locale)
  {
    $this->locale = $locale;
  }

  public function getLocale()
  {
    return $this->locale;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
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
