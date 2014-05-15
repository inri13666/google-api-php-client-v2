<?php 
namespace Google\Service\QPXExpress;
class TripOptionsResponse extends \Google\Collection
{
  protected $dataType = 'Google\Service\QPXExpress\Data';
  protected $dataDataType = '';
  public $kind;
  public $requestId;
  protected $tripOptionType = 'Google\Service\QPXExpress\TripOption';
  protected $tripOptionDataType = 'array';

  public function setData(\Google\Service\QPXExpress\Data $data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setTripOption($tripOption)
  {
    $this->tripOption = $tripOption;
  }

  public function getTripOption()
  {
    return $this->tripOption;
  }
}
