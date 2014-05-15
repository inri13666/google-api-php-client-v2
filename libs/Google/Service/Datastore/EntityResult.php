<?php 
namespace Google\Service\Datastore;
class EntityResult extends \Google\Model
{
  protected $entityType = 'Google\Service\Datastore\Entity';
  protected $entityDataType = '';

  public function setEntity(\Google\Service\Datastore\Entity $entity)
  {
    $this->entity = $entity;
  }

  public function getEntity()
  {
    return $this->entity;
  }
}
