<?php 
namespace Google\Service\Books;
class VolumeSaleInfoRetailPrice extends \Google\Model
{
  public $amount;
  public $currencyCode;

  public function setAmount($amount)
  {
    $this->amount = $amount;
  }

  public function getAmount()
  {
    return $this->amount;
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
