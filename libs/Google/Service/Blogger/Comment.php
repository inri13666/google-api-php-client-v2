<?php 
namespace Google\Service\Blogger;
class Comment extends \Google\Model
{
  protected $authorType = 'Google\Service\Blogger\CommentAuthor';
  protected $authorDataType = '';
  protected $blogType = 'Google\Service\Blogger\CommentBlog';
  protected $blogDataType = '';
  public $content;
  public $id;
  protected $inReplyToType = 'Google\Service\Blogger\CommentInReplyTo';
  protected $inReplyToDataType = '';
  public $kind;
  protected $postType = 'Google\Service\Blogger\CommentPost';
  protected $postDataType = '';
  public $published;
  public $selfLink;
  public $status;
  public $updated;

  public function setAuthor(\Google\Service\Blogger\CommentAuthor $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setBlog(\Google\Service\Blogger\CommentBlog $blog)
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

  public function setInReplyTo(\Google\Service\Blogger\CommentInReplyTo $inReplyTo)
  {
    $this->inReplyTo = $inReplyTo;
  }

  public function getInReplyTo()
  {
    return $this->inReplyTo;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPost(\Google\Service\Blogger\CommentPost $post)
  {
    $this->post = $post;
  }

  public function getPost()
  {
    return $this->post;
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

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }
}
