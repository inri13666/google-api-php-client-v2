<?php 
namespace Google\Service\Books;
class VolumeSaleInfoOffers extends \Google\Model
{
  public $finskyOfferType;
  protected $listPriceType = 'Google\Service\Books\VolumeSaleInfoOffersListPrice';
  protected $listPriceDataType = '';
  protected $rentalDurationType = 'Google\Service\Books\VolumeSaleInfoOffersRentalDuration';
  protected $rentalDurationDataType = '';
  protected $retailPriceType = 'Google\Service\Books\VolumeSaleInfoOffersRetailPrice';
  protected $retailPriceDataType = '';

  public function setFinskyOfferType($finskyOfferType)
  {
    $this->finskyOfferType = $finskyOfferType;
  }

  public function getFinskyOfferType()
  {
    return $this->finskyOfferType;
  }

  public function setListPrice(\Google\Service\Books\VolumeSaleInfoOffersListPrice $listPrice)
  {
    $this->listPrice = $listPrice;
  }

  public function getListPrice()
  {
    return $this->listPrice;
  }

  public function setRentalDuration(\Google\Service\Books\VolumeSaleInfoOffersRentalDuration $rentalDuration)
  {
    $this->rentalDuration = $rentalDuration;
  }

  public function getRentalDuration()
  {
    return $this->rentalDuration;
  }

  public function setRetailPrice(\Google\Service\Books\VolumeSaleInfoOffersRetailPrice $retailPrice)
  {
    $this->retailPrice = $retailPrice;
  }

  public function getRetailPrice()
  {
    return $this->retailPrice;
  }
}
