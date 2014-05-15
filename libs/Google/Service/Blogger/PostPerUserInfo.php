<?php 
namespace Google\Service\Blogger;
class PostPerUserInfo extends \Google\Model
{
  public $blogId;
  public $hasEditAccess;
  public $kind;
  public $postId;
  public $userId;

  public function setBlogId($blogId)
  {
    $this->blogId = $blogId;
  }

  public function getBlogId()
  {
    return $this->blogId;
  }

  public function setHasEditAccess($hasEditAccess)
  {
    $this->hasEditAccess = $hasEditAccess;
  }

  public function getHasEditAccess()
  {
    return $this->hasEditAccess;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPostId($postId)
  {
    $this->postId = $postId;
  }

  public function getPostId()
  {
    return $this->postId;
  }

  public function setUserId($userId)
  {
    $this->userId = $userId;
  }

  public function getUserId()
  {
    return $this->userId;
  }
}
