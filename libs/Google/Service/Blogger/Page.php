<?php 
namespace Google\Service\Blogger;
class Page extends \Google\Model
{
  protected $authorType = 'Google\Service\Blogger\PageAuthor';
  protected $authorDataType = '';
  protected $blogType = 'Google\Service\Blogger\PageBlog';
  protected $blogDataType = '';
  public $content;
  public $id;
  public $kind;
  public $published;
  public $selfLink;
  public $status;
  public $title;
  public $updated;
  public $url;

  public function setAuthor(\Google\Service\Blogger\PageAuthor $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setBlog(\Google\Service\Blogger\PageBlog $blog)
  {
    $this->blog = $blog;
  }

  public function getBlog()
  {
    return $this->blog;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
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

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
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
