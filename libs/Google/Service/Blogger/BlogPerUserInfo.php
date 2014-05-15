<?php 
namespace Google\Service\Blogger;
class BlogPerUserInfo extends \Google\Model
{
  public $blogId;
  public $hasAdminAccess;
  public $kind;
  public $photosAlbumKey;
  public $role;
  public $userId;

  public function setBlogId($blogId)
  {
    $this->blogId = $blogId;
  }

  public function getBlogId()
  {
    return $this->blogId;
  }

  public function setHasAdminAccess($hasAdminAccess)
  {
    $this->hasAdminAccess = $hasAdminAccess;
  }

  public function getHasAdminAccess()
  {
    return $this->hasAdminAccess;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPhotosAlbumKey($photosAlbumKey)
  {
    $this->photosAlbumKey = $photosAlbumKey;
  }

  public function getPhotosAlbumKey()
  {
    return $this->photosAlbumKey;
  }

  public function setRole($role)
  {
    $this->role = $role;
  }

  public function getRole()
  {
    return $this->role;
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
