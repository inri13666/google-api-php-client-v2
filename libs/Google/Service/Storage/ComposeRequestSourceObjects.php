<?php 
namespace Google\Service\Storage;
class ComposeRequestSourceObjects extends \Google\Model
{
  public $generation;
  public $name;
  protected $objectPreconditionsType = 'Google\Service\Storage\ComposeRequestSourceObjectsObjectPreconditions';
  protected $objectPreconditionsDataType = '';

  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }

  public function getGeneration()
  {
    return $this->generation;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setObjectPreconditions(\Google\Service\Storage\ComposeRequestSourceObjectsObjectPreconditions $objectPreconditions)
  {
    $this->objectPreconditions = $objectPreconditions;
  }

  public function getObjectPreconditions()
  {
    return $this->objectPreconditions;
  }
}
