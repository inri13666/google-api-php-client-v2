<?php 
namespace Google\Service\AdExchangeBuyer;
class Creative extends \Google\Collection
{
  public $hTMLSnippet;
  public $accountId;
  public $advertiserId;
  public $advertiserName;
  public $agencyId;
  public $attribute;
  public $buyerCreativeId;
  public $clickThroughUrl;
  protected $correctionsType = 'Google\Service\AdExchangeBuyer\CreativeCorrections';
  protected $correctionsDataType = 'array';
  protected $disapprovalReasonsType = 'Google\Service\AdExchangeBuyer\CreativeDisapprovalReasons';
  protected $disapprovalReasonsDataType = 'array';
  protected $filteringReasonsType = 'Google\Service\AdExchangeBuyer\CreativeFilteringReasons';
  protected $filteringReasonsDataType = '';
  public $height;
  public $kind;
  public $productCategories;
  public $restrictedCategories;
  public $sensitiveCategories;
  public $status;
  public $vendorType;
  public $videoURL;
  public $width;

  public function setHTMLSnippet($hTMLSnippet)
  {
    $this->hTMLSnippet = $hTMLSnippet;
  }

  public function getHTMLSnippet()
  {
    return $this->hTMLSnippet;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }

  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }

  public function setAdvertiserName($advertiserName)
  {
    $this->advertiserName = $advertiserName;
  }

  public function getAdvertiserName()
  {
    return $this->advertiserName;
  }

  public function setAgencyId($agencyId)
  {
    $this->agencyId = $agencyId;
  }

  public function getAgencyId()
  {
    return $this->agencyId;
  }

  public function setAttribute($attribute)
  {
    $this->attribute = $attribute;
  }

  public function getAttribute()
  {
    return $this->attribute;
  }

  public function setBuyerCreativeId($buyerCreativeId)
  {
    $this->buyerCreativeId = $buyerCreativeId;
  }

  public function getBuyerCreativeId()
  {
    return $this->buyerCreativeId;
  }

  public function setClickThroughUrl($clickThroughUrl)
  {
    $this->clickThroughUrl = $clickThroughUrl;
  }

  public function getClickThroughUrl()
  {
    return $this->clickThroughUrl;
  }

  public function setCorrections($corrections)
  {
    $this->corrections = $corrections;
  }

  public function getCorrections()
  {
    return $this->corrections;
  }

  public function setDisapprovalReasons($disapprovalReasons)
  {
    $this->disapprovalReasons = $disapprovalReasons;
  }

  public function getDisapprovalReasons()
  {
    return $this->disapprovalReasons;
  }

  public function setFilteringReasons(\Google\Service\AdExchangeBuyer\CreativeFilteringReasons $filteringReasons)
  {
    $this->filteringReasons = $filteringReasons;
  }

  public function getFilteringReasons()
  {
    return $this->filteringReasons;
  }

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setProductCategories($productCategories)
  {
    $this->productCategories = $productCategories;
  }

  public function getProductCategories()
  {
    return $this->productCategories;
  }

  public function setRestrictedCategories($restrictedCategories)
  {
    $this->restrictedCategories = $restrictedCategories;
  }

  public function getRestrictedCategories()
  {
    return $this->restrictedCategories;
  }

  public function setSensitiveCategories($sensitiveCategories)
  {
    $this->sensitiveCategories = $sensitiveCategories;
  }

  public function getSensitiveCategories()
  {
    return $this->sensitiveCategories;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setVendorType($vendorType)
  {
    $this->vendorType = $vendorType;
  }

  public function getVendorType()
  {
    return $this->vendorType;
  }

  public function setVideoURL($videoURL)
  {
    $this->videoURL = $videoURL;
  }

  public function getVideoURL()
  {
    return $this->videoURL;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }

  public function getWidth()
  {
    return $this->width;
  }
}
