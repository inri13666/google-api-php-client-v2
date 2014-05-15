<?php 
namespace Google\Service\Reseller;
class ChangePlanRequest extends \Google\Model
{
  public $kind;
  public $planName;
  public $purchaseOrderId;
  protected $seatsType = 'Google\Service\Reseller\Seats';
  protected $seatsDataType = '';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPlanName($planName)
  {
    $this->planName = $planName;
  }

  public function getPlanName()
  {
    return $this->planName;
  }

  public function setPurchaseOrderId($purchaseOrderId)
  {
    $this->purchaseOrderId = $purchaseOrderId;
  }

  public function getPurchaseOrderId()
  {
    return $this->purchaseOrderId;
  }

  public function setSeats(\Google\Service\Reseller\Seats $seats)
  {
    $this->seats = $seats;
  }

  public function getSeats()
  {
    return $this->seats;
  }
}
