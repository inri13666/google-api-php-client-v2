<?php 
namespace Google\Service\Books;
class AnnotationsSummaryLayers extends \Google\Model
{
  public $allowedCharacterCount;
  public $layerId;
  public $limitType;
  public $remainingCharacterCount;
  public $updated;

  public function setAllowedCharacterCount($allowedCharacterCount)
  {
    $this->allowedCharacterCount = $allowedCharacterCount;
  }

  public function getAllowedCharacterCount()
  {
    return $this->allowedCharacterCount;
  }

  public function setLayerId($layerId)
  {
    $this->layerId = $layerId;
  }

  public function getLayerId()
  {
    return $this->layerId;
  }

  public function setLimitType($limitType)
  {
    $this->limitType = $limitType;
  }

  public function getLimitType()
  {
    return $this->limitType;
  }

  public function setRemainingCharacterCount($remainingCharacterCount)
  {
    $this->remainingCharacterCount = $remainingCharacterCount;
  }

  public function getRemainingCharacterCount()
  {
    return $this->remainingCharacterCount;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }
}
