<?php 
namespace Google\Service\Analytics;
class McfDataRowsConversionPathValue extends \Google\Model
{
  public $interactionType;
  public $nodeValue;

  public function setInteractionType($interactionType)
  {
    $this->interactionType = $interactionType;
  }

  public function getInteractionType()
  {
    return $this->interactionType;
  }

  public function setNodeValue($nodeValue)
  {
    $this->nodeValue = $nodeValue;
  }

  public function getNodeValue()
  {
    return $this->nodeValue;
  }
}
