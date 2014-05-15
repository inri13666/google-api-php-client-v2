<?php 
namespace Google\Service\Blogger;
class BlogUserInfo extends \Google\Model
{
  protected $blogType = 'Google\Service\Blogger\Blog';
  protected $blogDataType = '';
  protected $blogUserInfoType = 'Google\Service\Blogger\BlogPerUserInfo';
  protected $blogUserInfoDataType = '';
  public $kind;

  public function setBlog(\Google\Service\Blogger\Blog $blog)
  {
    $this->blog = $blog;
  }

  public function getBlog()
  {
    return $this->blog;
  }

  public function setBlogUserInfo(\Google\Service\Blogger\BlogPerUserInfo $blogUserInfo)
  {
    $this->blogUserInfo = $blogUserInfo;
  }

  public function getBlogUserInfo()
  {
    return $this->blogUserInfo;
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
