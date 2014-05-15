<?php 
namespace Google\Service\Orkut;
class Acl extends \Google\Collection
{
  public $description;
  protected $itemsType = 'Google\Service\Orkut\AclItems';
  protected $itemsDataType = 'array';
  public $kind;
  public $totalParticipants;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setTotalParticipants($totalParticipants)
  {
    $this->totalParticipants = $totalParticipants;
  }

  public function getTotalParticipants()
  {
    return $this->totalParticipants;
  }
}
