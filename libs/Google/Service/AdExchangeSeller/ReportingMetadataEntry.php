<?php 
namespace Google\Service\AdExchangeSeller;
class ReportingMetadataEntry extends \Google\Collection
{
  public $compatibleDimensions;
  public $compatibleMetrics;
  public $id;
  public $kind;
  public $requiredDimensions;
  public $requiredMetrics;
  public $supportedProducts;

  public function setCompatibleDimensions($compatibleDimensions)
  {
    $this->compatibleDimensions = $compatibleDimensions;
  }

  public function getCompatibleDimensions()
  {
    return $this->compatibleDimensions;
  }

  public function setCompatibleMetrics($compatibleMetrics)
  {
    $this->compatibleMetrics = $compatibleMetrics;
  }

  public function getCompatibleMetrics()
  {
    return $this->compatibleMetrics;
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

  public function setRequiredDimensions($requiredDimensions)
  {
    $this->requiredDimensions = $requiredDimensions;
  }

  public function getRequiredDimensions()
  {
    return $this->requiredDimensions;
  }

  public function setRequiredMetrics($requiredMetrics)
  {
    $this->requiredMetrics = $requiredMetrics;
  }

  public function getRequiredMetrics()
  {
    return $this->requiredMetrics;
  }

  public function setSupportedProducts($supportedProducts)
  {
    $this->supportedProducts = $supportedProducts;
  }

  public function getSupportedProducts()
  {
    return $this->supportedProducts;
  }
}
