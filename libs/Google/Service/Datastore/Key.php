<?php 
namespace Google\Service\Datastore;
class Key extends \Google\Collection
{
  protected $partitionIdType = 'Google\Service\Datastore\PartitionId';
  protected $partitionIdDataType = '';
  protected $pathType = 'Google\Service\Datastore\KeyPathElement';
  protected $pathDataType = 'array';

  public function setPartitionId(\Google\Service\Datastore\PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }

  public function getPartitionId()
  {
    return $this->partitionId;
  }

  public function setPath($path)
  {
    $this->path = $path;
  }

  public function getPath()
  {
    return $this->path;
  }
}
