<?php 
namespace Google\Service\Games;
class Instance extends \Google\Model
{
  public $acquisitionUri;
  protected $androidInstanceType = 'Google\Service\Games\InstanceAndroidDetails';
  protected $androidInstanceDataType = '';
  protected $iosInstanceType = 'Google\Service\Games\InstanceIosDetails';
  protected $iosInstanceDataType = '';
  public $kind;
  public $name;
  public $platformType;
  public $realtimePlay;
  public $turnBasedPlay;
  protected $webInstanceType = 'Google\Service\Games\InstanceWebDetails';
  protected $webInstanceDataType = '';

  public function setAcquisitionUri($acquisitionUri)
  {
    $this->acquisitionUri = $acquisitionUri;
  }

  public function getAcquisitionUri()
  {
    return $this->acquisitionUri;
  }

  public function setAndroidInstance(\Google\Service\Games\InstanceAndroidDetails $androidInstance)
  {
    $this->androidInstance = $androidInstance;
  }

  public function getAndroidInstance()
  {
    return $this->androidInstance;
  }

  public function setIosInstance(\Google\Service\Games\InstanceIosDetails $iosInstance)
  {
    $this->iosInstance = $iosInstance;
  }

  public function getIosInstance()
  {
    return $this->iosInstance;
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

  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }

  public function getPlatformType()
  {
    return $this->platformType;
  }

  public function setRealtimePlay($realtimePlay)
  {
    $this->realtimePlay = $realtimePlay;
  }

  public function getRealtimePlay()
  {
    return $this->realtimePlay;
  }

  public function setTurnBasedPlay($turnBasedPlay)
  {
    $this->turnBasedPlay = $turnBasedPlay;
  }

  public function getTurnBasedPlay()
  {
    return $this->turnBasedPlay;
  }

  public function setWebInstance(\Google\Service\Games\InstanceWebDetails $webInstance)
  {
    $this->webInstance = $webInstance;
  }

  public function getWebInstance()
  {
    return $this->webInstance;
  }
}
