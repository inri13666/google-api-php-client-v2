<?php 
namespace Google\Service\Blogger;
class PostUserInfo extends \Google\Model
{
  public $kind;
  protected $postType = 'Google\Service\Blogger\Post';
  protected $postDataType = '';
  protected $postUserInfoType = 'Google\Service\Blogger\PostPerUserInfo';
  protected $postUserInfoDataType = '';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPost(\Google\Service\Blogger\Post $post)
  {
    $this->post = $post;
  }

  public function getPost()
  {
    return $this->post;
  }

  public function setPostUserInfo(\Google\Service\Blogger\PostPerUserInfo $postUserInfo)
  {
    $this->postUserInfo = $postUserInfo;
  }

  public function getPostUserInfo()
  {
    return $this->postUserInfo;
  }
}
