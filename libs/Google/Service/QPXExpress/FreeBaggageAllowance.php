<?php 
namespace Google\Service\QPXExpress;
class FreeBaggageAllowance extends \Google\Collection
{
  protected $bagDescriptorType = 'Google\Service\QPXExpress\BagDescriptor';
  protected $bagDescriptorDataType = 'array';
  public $kilos;
  public $kilosPerPiece;
  public $kind;
  public $pieces;
  public $pounds;

  public function setBagDescriptor($bagDescriptor)
  {
    $this->bagDescriptor = $bagDescriptor;
  }

  public function getBagDescriptor()
  {
    return $this->bagDescriptor;
  }

  public function setKilos($kilos)
  {
    $this->kilos = $kilos;
  }

  public function getKilos()
  {
    return $this->kilos;
  }

  public function setKilosPerPiece($kilosPerPiece)
  {
    $this->kilosPerPiece = $kilosPerPiece;
  }

  public function getKilosPerPiece()
  {
    return $this->kilosPerPiece;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPieces($pieces)
  {
    $this->pieces = $pieces;
  }

  public function getPieces()
  {
    return $this->pieces;
  }

  public function setPounds($pounds)
  {
    $this->pounds = $pounds;
  }

  public function getPounds()
  {
    return $this->pounds;
  }
}
