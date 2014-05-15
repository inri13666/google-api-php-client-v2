<?php 
namespace Google\Service\QPXExpress;
class FareInfo extends \Google\Model
{
  public $basisCode;
  public $carrier;
  public $destination;
  public $id;
  public $kind;
  public $origin;
  public $private;

  public function setBasisCode($basisCode)
  {
    $this->basisCode = $basisCode;
  }

  public function getBasisCode()
  {
    return $this->basisCode;
  }

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setDestination($destination)
  {
    $this->destination = $destination;
  }

  public function getDestination()
  {
    return $this->destination;
  }

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

  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }

  public function getOrigin()
  {
    return $this->origin;
  }

  public function setPrivate($private)
  {
    $this->private = $private;
  }

  public function getPrivate()
  {
    return $this->private;
  }
}
