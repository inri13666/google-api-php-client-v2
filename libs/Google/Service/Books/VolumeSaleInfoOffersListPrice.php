<?php 
namespace Google\Service\Books;
class VolumeSaleInfoOffersListPrice extends \Google\Model
{
  public $amountInMicros;
  public $currencyCode;

  public function setAmountInMicros($amountInMicros)
  {
    $this->amountInMicros = $amountInMicros;
  }

  public function getAmountInMicros()
  {
    return $this->amountInMicros;
  }

  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }

  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
}
