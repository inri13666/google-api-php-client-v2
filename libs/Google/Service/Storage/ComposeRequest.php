<?php 
namespace Google\Service\Storage;
class ComposeRequest extends \Google\Collection
{
  protected $destinationType = 'Google\Service\Storage\StorageObject';
  protected $destinationDataType = '';
  public $kind;
  protected $sourceObjectsType = 'Google\Service\Storage\ComposeRequestSourceObjects';
  protected $sourceObjectsDataType = 'array';

  public function setDestination(\Google\Service\Storage\StorageObject $destination)
  {
    $this->destination = $destination;
  }

  public function getDestination()
  {
    return $this->destination;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSourceObjects($sourceObjects)
  {
    $this->sourceObjects = $sourceObjects;
  }

  public function getSourceObjects()
  {
    return $this->sourceObjects;
  }
}
