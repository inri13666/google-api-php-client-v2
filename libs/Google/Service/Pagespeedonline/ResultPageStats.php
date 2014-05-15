<?php 
namespace Google\Service\Pagespeedonline;
class ResultPageStats extends \Google\Model
{
  public $cssResponseBytes;
  public $flashResponseBytes;
  public $htmlResponseBytes;
  public $imageResponseBytes;
  public $javascriptResponseBytes;
  public $numberCssResources;
  public $numberHosts;
  public $numberJsResources;
  public $numberResources;
  public $numberStaticResources;
  public $otherResponseBytes;
  public $textResponseBytes;
  public $totalRequestBytes;

  public function setCssResponseBytes($cssResponseBytes)
  {
    $this->cssResponseBytes = $cssResponseBytes;
  }

  public function getCssResponseBytes()
  {
    return $this->cssResponseBytes;
  }

  public function setFlashResponseBytes($flashResponseBytes)
  {
    $this->flashResponseBytes = $flashResponseBytes;
  }

  public function getFlashResponseBytes()
  {
    return $this->flashResponseBytes;
  }

  public function setHtmlResponseBytes($htmlResponseBytes)
  {
    $this->htmlResponseBytes = $htmlResponseBytes;
  }

  public function getHtmlResponseBytes()
  {
    return $this->htmlResponseBytes;
  }

  public function setImageResponseBytes($imageResponseBytes)
  {
    $this->imageResponseBytes = $imageResponseBytes;
  }

  public function getImageResponseBytes()
  {
    return $this->imageResponseBytes;
  }

  public function setJavascriptResponseBytes($javascriptResponseBytes)
  {
    $this->javascriptResponseBytes = $javascriptResponseBytes;
  }

  public function getJavascriptResponseBytes()
  {
    return $this->javascriptResponseBytes;
  }

  public function setNumberCssResources($numberCssResources)
  {
    $this->numberCssResources = $numberCssResources;
  }

  public function getNumberCssResources()
  {
    return $this->numberCssResources;
  }

  public function setNumberHosts($numberHosts)
  {
    $this->numberHosts = $numberHosts;
  }

  public function getNumberHosts()
  {
    return $this->numberHosts;
  }

  public function setNumberJsResources($numberJsResources)
  {
    $this->numberJsResources = $numberJsResources;
  }

  public function getNumberJsResources()
  {
    return $this->numberJsResources;
  }

  public function setNumberResources($numberResources)
  {
    $this->numberResources = $numberResources;
  }

  public function getNumberResources()
  {
    return $this->numberResources;
  }

  public function setNumberStaticResources($numberStaticResources)
  {
    $this->numberStaticResources = $numberStaticResources;
  }

  public function getNumberStaticResources()
  {
    return $this->numberStaticResources;
  }

  public function setOtherResponseBytes($otherResponseBytes)
  {
    $this->otherResponseBytes = $otherResponseBytes;
  }

  public function getOtherResponseBytes()
  {
    return $this->otherResponseBytes;
  }

  public function setTextResponseBytes($textResponseBytes)
  {
    $this->textResponseBytes = $textResponseBytes;
  }

  public function getTextResponseBytes()
  {
    return $this->textResponseBytes;
  }

  public function setTotalRequestBytes($totalRequestBytes)
  {
    $this->totalRequestBytes = $totalRequestBytes;
  }

  public function getTotalRequestBytes()
  {
    return $this->totalRequestBytes;
  }
}
