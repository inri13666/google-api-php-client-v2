<?php 
namespace Google\Service\PlusDomains;
class ActivityActor extends \Google\Model
{
  public $displayName;
  public $id;
  protected $imageType = 'Google\Service\PlusDomains\ActivityActorImage';
  protected $imageDataType = '';
  protected $nameType = 'Google\Service\PlusDomains\ActivityActorName';
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

  public function setImage(\Google\Service\PlusDomains\ActivityActorImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setName(\Google\Service\PlusDomains\ActivityActorName $name)
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
