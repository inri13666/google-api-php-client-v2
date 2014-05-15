<?php 
namespace Google\Service\Datastore;
class Property extends \Google\Collection
{
  public $blobKeyValue;
  public $blobValue;
  public $booleanValue;
  public $dateTimeValue;
  public $doubleValue;
  protected $entityValueType = 'Google\Service\Datastore\Entity';
  protected $entityValueDataType = '';
  public $indexed;
  public $integerValue;
  protected $keyValueType = 'Google\Service\Datastore\Key';
  protected $keyValueDataType = '';
  protected $listValueType = 'Google\Service\Datastore\Value';
  protected $listValueDataType = 'array';
  public $meaning;
  public $stringValue;

  public function setBlobKeyValue($blobKeyValue)
  {
    $this->blobKeyValue = $blobKeyValue;
  }

  public function getBlobKeyValue()
  {
    return $this->blobKeyValue;
  }

  public function setBlobValue($blobValue)
  {
    $this->blobValue = $blobValue;
  }

  public function getBlobValue()
  {
    return $this->blobValue;
  }

  public function setBooleanValue($booleanValue)
  {
    $this->booleanValue = $booleanValue;
  }

  public function getBooleanValue()
  {
    return $this->booleanValue;
  }

  public function setDateTimeValue($dateTimeValue)
  {
    $this->dateTimeValue = $dateTimeValue;
  }

  public function getDateTimeValue()
  {
    return $this->dateTimeValue;
  }

  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }

  public function getDoubleValue()
  {
    return $this->doubleValue;
  }

  public function setEntityValue(\Google\Service\Datastore\Entity $entityValue)
  {
    $this->entityValue = $entityValue;
  }

  public function getEntityValue()
  {
    return $this->entityValue;
  }

  public function setIndexed($indexed)
  {
    $this->indexed = $indexed;
  }

  public function getIndexed()
  {
    return $this->indexed;
  }

  public function setIntegerValue($integerValue)
  {
    $this->integerValue = $integerValue;
  }

  public function getIntegerValue()
  {
    return $this->integerValue;
  }

  public function setKeyValue(\Google\Service\Datastore\Key $keyValue)
  {
    $this->keyValue = $keyValue;
  }

  public function getKeyValue()
  {
    return $this->keyValue;
  }

  public function setListValue($listValue)
  {
    $this->listValue = $listValue;
  }

  public function getListValue()
  {
    return $this->listValue;
  }

  public function setMeaning($meaning)
  {
    $this->meaning = $meaning;
  }

  public function getMeaning()
  {
    return $this->meaning;
  }

  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }

  public function getStringValue()
  {
    return $this->stringValue;
  }
}
