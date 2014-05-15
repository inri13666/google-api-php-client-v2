<?php 
namespace Google\Service\Doubleclicksearch;
class ConversionList extends \Google\Collection
{
  protected $conversionType = 'Google\Service\Doubleclicksearch\Conversion';
  protected $conversionDataType = 'array';
  public $kind;

  public function setConversion($conversion)
  {
    $this->conversion = $conversion;
  }

  public function getConversion()
  {
    return $this->conversion;
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
