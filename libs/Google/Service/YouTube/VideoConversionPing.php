<?php 
namespace Google\Service\YouTube;
class VideoConversionPing extends \Google\Model
{
  public $context;
  public $conversionUrl;

  public function setContext($context)
  {
    $this->context = $context;
  }

  public function getContext()
  {
    return $this->context;
  }

  public function setConversionUrl($conversionUrl)
  {
    $this->conversionUrl = $conversionUrl;
  }

  public function getConversionUrl()
  {
    return $this->conversionUrl;
  }
}
