<?php 
namespace Google\Service\Books;
class Dictlayerdata extends \Google\Model
{
  protected $commonType = 'Google\Service\Books\DictlayerdataCommon';
  protected $commonDataType = '';
  protected $dictType = 'Google\Service\Books\DictlayerdataDict';
  protected $dictDataType = '';
  public $kind;

  public function setCommon(\Google\Service\Books\DictlayerdataCommon $common)
  {
    $this->common = $common;
  }

  public function getCommon()
  {
    return $this->common;
  }

  public function setDict(\Google\Service\Books\DictlayerdataDict $dict)
  {
    $this->dict = $dict;
  }

  public function getDict()
  {
    return $this->dict;
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
