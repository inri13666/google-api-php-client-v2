<?php 
namespace Google\Service\Books;
class VolumeUserInfoCopy extends \Google\Model
{
  public $allowedCharacterCount;
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
