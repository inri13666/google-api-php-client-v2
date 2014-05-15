<?php 
namespace Google\Service\Plus;
class ActivityActor extends \Google\Model
{
  public $displayName;
  public $id;
  protected $imageType = 'Google\Service\Plus\ActivityActorImage';
  protected $imageDataType = '';
  protected $nameType = 'Google\Service\Plus\ActivityActorName';
  protected $nameDataType = '';
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

  public function setImage(\Google\Service\Plus\ActivityActorImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setName(\Google\Service\Plus\ActivityActorName $name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
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
