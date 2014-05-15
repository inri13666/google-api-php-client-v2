<?php 
namespace Google\Service\Fusiontables;
class StyleFunction extends \Google\Collection
{
  protected $bucketsType = 'Google\Service\Fusiontables\Bucket';
  protected $bucketsDataType = 'array';
  public $columnName;
  protected $gradientType = 'Google\Service\Fusiontables\StyleFunctionGradient';
  protected $gradientDataType = '';
  public $kind;

  public function setBuckets($buckets)
  {
    $this->buckets = $buckets;
  }

  public function getBuckets()
  {
    return $this->buckets;
  }

  public function setColumnName($columnName)
  {
    $this->columnName = $columnName;
  }

  public function getColumnName()
  {
    return $this->columnName;
  }

  public function setGradient(\Google\Service\Fusiontables\StyleFunctionGradient $gradient)
  {
    $this->gradient = $gradient;
  }

  public function getGradient()
  {
    return $this->gradient;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
