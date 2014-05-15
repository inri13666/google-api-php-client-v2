<?php 
namespace Google\Service\Licensing;
class LicenseAssignment extends \Google\Model
{
  public $etags;
  public $kind;
  public $productId;
  public $selfLink;
  public $skuId;
  public $userId;

  public function setEtags($etags)
  {
    $this->etags = $etags;
  }

  public function getEtags()
  {
    return $this->etags;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSkuId($skuId)
  {
    $this->skuId = $skuId;
  }

  public function getSkuId()
  {
    return $this->skuId;
  }

  public function setUserId($userId)
  {
    $this->userId = $userId;
  }

  public function getUserId()
  {
    return $this->userId;
  }
}
