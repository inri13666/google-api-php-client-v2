<?php 
namespace Google\Service\Storage;
class StorageObjectOwner extends \Google\Model
{
  public $entity;
  public $entityId;

  public function setEntity($entity)
  {
    $this->entity = $entity;
  }

  public function getEntity()
  {
    return $this->entity;
  }

  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }

  public function getEntityId()
  {
    return $this->entityId;
  }
}
