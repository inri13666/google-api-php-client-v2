<?php 
namespace Google\Service\Drive;
class AboutImportFormats extends \Google\Collection
{
  public $source;
  public $targets;

  public function setSource($source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setTargets($targets)
  {
    $this->targets = $targets;
  }

  public function getTargets()
  {
    return $this->targets;
  }
}
