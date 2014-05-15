<?php 
namespace Google\Service\Storage;
class ComposeRequestSourceObjectsObjectPreconditions extends \Google\Model
{
  public $ifGenerationMatch;

  public function setIfGenerationMatch($ifGenerationMatch)
  {
    $this->ifGenerationMatch = $ifGenerationMatch;
  }

  public function getIfGenerationMatch()
  {
    return $this->ifGenerationMatch;
  }
}
