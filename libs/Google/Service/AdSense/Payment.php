<?php 
namespace Google\Service\AdSense;
class Payment extends \Google\Model
{
  public $id;
  public $kind;
  public $paymentAmount;
  public $paymentAmountCurrencyCode;
  public $paymentDate;

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

  public function setPaymentAmount($paymentAmount)
  {
    $this->paymentAmount = $paymentAmount;
  }

  public function getPaymentAmount()
  {
    return $this->paymentAmount;
  }

  public function setPaymentAmountCurrencyCode($paymentAmountCurrencyCode)
  {
    $this->paymentAmountCurrencyCode = $paymentAmountCurrencyCode;
  }

  public function getPaymentAmountCurrencyCode()
  {
    return $this->paymentAmountCurrencyCode;
  }

  public function setPaymentDate($paymentDate)
  {
    $this->paymentDate = $paymentDate;
  }

  public function getPaymentDate()
  {
    return $this->paymentDate;
  }
}
