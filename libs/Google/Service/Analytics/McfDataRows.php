<?php 
namespace Google\Service\Analytics;
class McfDataRows extends \Google\Collection
{
  protected $conversionPathValueType = 'Google\Service\Analytics\McfDataRowsConversionPathValue';
  protected $conversionPathValueDataType = 'array';
  public $primitiveValue;

  public function setConversionPathValue($conversionPathValue)
  {
    $this->conversionPathValue = $conversionPathValue;
  }

  public function getConversionPathValue()
  {
    return $this->conversionPathValue;
  }

  public function setPrimitiveValue($primitiveValue)
  {
    $this->primitiveValue = $primitiveValue;
  }

  public function getPrimitiveValue()
  {
    return $this->primitiveValue;
  }
}
