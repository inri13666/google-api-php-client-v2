<?php 
namespace Google\Service\Customsearch;
class ContextFacets extends \Google\Model
{
  public $anchor;
  public $label;
  public $labelWithOp;

  public function setAnchor($anchor)
  {
    $this->anchor = $anchor;
  }

  public function getAnchor()
  {
    return $this->anchor;
  }

  public function setLabel($label)
  {
    $this->label = $label;
  }

  public function getLabel()
  {
    return $this->label;
  }

  public function setLabelWithOp($labelWithOp)
  {
    $this->labelWithOp = $labelWithOp;
  }

  public function getLabelWithOp()
  {
    return $this->labelWithOp;
  }
}
