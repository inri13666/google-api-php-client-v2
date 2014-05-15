<?php 
namespace Google\Service\Dfareporting;
class DimensionValue extends \Google\Model
{
  public $dimensionName;
  public $etag;
  public $id;
  public $kind;
  public $matchType;
  public $value;

  public function setDimensionName($dimensionName)
  {
    $this->dimensionName = $dimensionName;
  }

  public function getDimensionName()
  {
    return $this->dimensionName;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }

  public function getMatchType()
  {
    return $this->matchType;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }
}
