<?php 
namespace Google\Service\Books;
class VolumeSaleInfo extends \Google\Collection
{
  public $buyLink;
  public $country;
  public $isEbook;
  protected $listPriceType = 'Google\Service\Books\VolumeSaleInfoListPrice';
  protected $listPriceDataType = '';
  protected $offersType = 'Google\Service\Books\VolumeSaleInfoOffers';
  protected $offersDataType = 'array';
  public $onSaleDate;
  protected $retailPriceType = 'Google\Service\Books\VolumeSaleInfoRetailPrice';
  protected $retailPriceDataType = '';
  public $saleability;

  public function setBuyLink($buyLink)
  {
    $this->buyLink = $buyLink;
  }

  public function getBuyLink()
  {
    return $this->buyLink;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getCountry()
  {
    return $this->country;
  }

  public function setIsEbook($isEbook)
  {
    $this->isEbook = $isEbook;
  }

  public function getIsEbook()
  {
    return $this->isEbook;
  }

  public function setListPrice(\Google\Service\Books\VolumeSaleInfoListPrice $listPrice)
  {
    $this->listPrice = $listPrice;
  }

  public function getListPrice()
  {
    return $this->listPrice;
  }

  public function setOffers($offers)
  {
    $this->offers = $offers;
  }

  public function getOffers()
  {
    return $this->offers;
  }

  public function setOnSaleDate($onSaleDate)
  {
    $this->onSaleDate = $onSaleDate;
  }

  public function getOnSaleDate()
  {
    return $this->onSaleDate;
  }

  public function setRetailPrice(\Google\Service\Books\VolumeSaleInfoRetailPrice $retailPrice)
  {
    $this->retailPrice = $retailPrice;
  }

  public function getRetailPrice()
  {
    return $this->retailPrice;
  }

  public function setSaleability($saleability)
  {
    $this->saleability = $saleability;
  }

  public function getSaleability()
  {
    return $this->saleability;
  }
}
