<?php 
namespace Google\Service\PlusDomains;
class CommentActor extends \Google\Model
{
  public $displayName;
  public $id;
  protected $imageType = 'Google\Service\PlusDomains\CommentActorImage';
  protected $imageDataType = '';
  public $url;

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

  public function setImage(\Google\Service\PlusDomains\CommentActorImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
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