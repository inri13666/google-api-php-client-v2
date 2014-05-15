<?php 
namespace Google\Service\Datastore;
class Mutation extends \Google\Collection
{
  protected $deleteType = 'Google\Service\Datastore\Key';
  protected $deleteDataType = 'array';
  public $force;
  protected $insertType = 'Google\Service\Datastore\Entity';
  protected $insertDataType = 'array';
  protected $insertAutoIdType = 'Google\Service\Datastore\Entity';
  protected $insertAutoIdDataType = 'array';
  protected $updateType = 'Google\Service\Datastore\Entity';
  protected $updateDataType = 'array';
  protected $upsertType = 'Google\Service\Datastore\Entity';
  protected $upsertDataType = 'array';

  public function setDelete($delete)
  {
    $this->delete = $delete;
  }

  public function getDelete()
  {
    return $this->delete;
  }

  public function setForce($force)
  {
    $this->force = $force;
  }

  public function getForce()
  {
    return $this->force;
  }

  public function setInsert($insert)
  {
    $this->insert = $insert;
  }

  public function getInsert()
  {
    return $this->insert;
  }

  public function setInsertAutoId($insertAutoId)
  {
    $this->insertAutoId = $insertAutoId;
  }

  public function getInsertAutoId()
  {
    return $this->insertAutoId;
  }

  public function setUpdate($update)
  {
    $this->update = $update;
  }

  public function getUpdate()
  {
    return $this->update;
  }

  public function setUpsert($upsert)
  {
    $this->upsert = $upsert;
  }

  public function getUpsert()
  {
    return $this->upsert;
  }
}
