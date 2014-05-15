<?php 
namespace Google\Service\YouTube;
class ActivityContentDetailsSocial extends \Google\Model
{
  public $author;
  public $imageUrl;
  public $referenceUrl;
  protected $resourceIdType = 'Google\Service\YouTube\ResourceId';
  protected $resourceIdDataType = '';
  public $type;

  public function setAuthor($author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }

  public function getImageUrl()
  {
    return $this->imageUrl;
  }

  public function setReferenceUrl($referenceUrl)
  {
    $this->referenceUrl = $referenceUrl;
  }

  public function getReferenceUrl()
  {
    return $this->referenceUrl;
  }

  public function setResourceId(\Google\Service\YouTube\ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }

  public function getResourceId()
  {
    return $this->resourceId;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
