<?php 
namespace Google\Service\AdExchangeSeller;
class CustomChannel extends \Google\Model
{
  public $code;
  public $id;
  public $kind;
  public $name;
  protected $targetingInfoType = 'Google\Service\AdExchangeSeller\CustomChannelTargetingInfo';
  protected $targetingInfoDataType = '';

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function getCode()
  {
    return $this->code;
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

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setTargetingInfo(\Google\Service\AdExchangeSeller\CustomChannelTargetingInfo $targetingInfo)
  {
    $this->targetingInfo = $targetingInfo;
  }

  public function getTargetingInfo()
  {
    return $this->targetingInfo;
  }
}
