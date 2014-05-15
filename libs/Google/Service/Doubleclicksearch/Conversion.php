<?php 
namespace Google\Service\Doubleclicksearch;
class Conversion extends \Google\Collection
{
  public $adGroupId;
  public $adId;
  public $advertiserId;
  public $agencyId;
  public $campaignId;
  public $clickId;
  public $conversionId;
  public $conversionModifiedTimestamp;
  public $conversionTimestamp;
  public $criterionId;
  public $currencyCode;
  protected $customDimensionType = 'Google\Service\Doubleclicksearch\CustomDimension';
  protected $customDimensionDataType = 'array';
  protected $customMetricType = 'Google\Service\Doubleclicksearch\CustomMetric';
  protected $customMetricDataType = 'array';
  public $dsConversionId;
  public $engineAccountId;
  public $floodlightOrderId;
  public $quantityMillis;
  public $revenueMicros;
  public $segmentationId;
  public $segmentationName;
  public $segmentationType;
  public $state;
  public $type;

  public function setAdGroupId($adGroupId)
  {
    $this->adGroupId = $adGroupId;
  }

  public function getAdGroupId()
  {
    return $this->adGroupId;
  }

  public function setAdId($adId)
  {
    $this->adId = $adId;
  }

  public function getAdId()
  {
    return $this->adId;
  }

  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }

  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }

  public function setAgencyId($agencyId)
  {
    $this->agencyId = $agencyId;
  }

  public function getAgencyId()
  {
    return $this->agencyId;
  }

  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function setClickId($clickId)
  {
    $this->clickId = $clickId;
  }

  public function getClickId()
  {
    return $this->clickId;
  }

  public function setConversionId($conversionId)
  {
    $this->conversionId = $conversionId;
  }

  public function getConversionId()
  {
    return $this->conversionId;
  }

  public function setConversionModifiedTimestamp($conversionModifiedTimestamp)
  {
    $this->conversionModifiedTimestamp = $conversionModifiedTimestamp;
  }

  public function getConversionModifiedTimestamp()
  {
    return $this->conversionModifiedTimestamp;
  }

  public function setConversionTimestamp($conversionTimestamp)
  {
    $this->conversionTimestamp = $conversionTimestamp;
  }

  public function getConversionTimestamp()
  {
    return $this->conversionTimestamp;
  }

  public function setCriterionId($criterionId)
  {
    $this->criterionId = $criterionId;
  }

  public function getCriterionId()
  {
    return $this->criterionId;
  }

  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }

  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }

  public function setCustomDimension($customDimension)
  {
    $this->customDimension = $customDimension;
  }

  public function getCustomDimension()
  {
    return $this->customDimension;
  }

  public function setCustomMetric($customMetric)
  {
    $this->customMetric = $customMetric;
  }

  public function getCustomMetric()
  {
    return $this->customMetric;
  }

  public function setDsConversionId($dsConversionId)
  {
    $this->dsConversionId = $dsConversionId;
  }

  public function getDsConversionId()
  {
    return $this->dsConversionId;
  }

  public function setEngineAccountId($engineAccountId)
  {
    $this->engineAccountId = $engineAccountId;
  }

  public function getEngineAccountId()
  {
    return $this->engineAccountId;
  }

  public function setFloodlightOrderId($floodlightOrderId)
  {
    $this->floodlightOrderId = $floodlightOrderId;
  }

  public function getFloodlightOrderId()
  {
    return $this->floodlightOrderId;
  }

  public function setQuantityMillis($quantityMillis)
  {
    $this->quantityMillis = $quantityMillis;
  }

  public function getQuantityMillis()
  {
    return $this->quantityMillis;
  }

  public function setRevenueMicros($revenueMicros)
  {
    $this->revenueMicros = $revenueMicros;
  }

  public function getRevenueMicros()
  {
    return $this->revenueMicros;
  }

  public function setSegmentationId($segmentationId)
  {
    $this->segmentationId = $segmentationId;
  }

  public function getSegmentationId()
  {
    return $this->segmentationId;
  }

  public function setSegmentationName($segmentationName)
  {
    $this->segmentationName = $segmentationName;
  }

  public function getSegmentationName()
  {
    return $this->segmentationName;
  }

  public function setSegmentationType($segmentationType)
  {
    $this->segmentationType = $segmentationType;
  }

  public function getSegmentationType()
  {
    return $this->segmentationType;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
