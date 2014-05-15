<?php 
namespace Google\Service\Customsearch;
class ResultLabels extends \Google\Model
{
  public $displayName;
  public $labelWithOp;
  public $name;

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setLabelWithOp($labelWithOp)
  {
    $this->labelWithOp = $labelWithOp;
  }

  public function getLabelWithOp()
  {
    return $this->labelWithOp;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}
