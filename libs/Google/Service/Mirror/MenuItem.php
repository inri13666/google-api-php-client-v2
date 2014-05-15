<?php 
namespace Google\Service\Mirror;
class MenuItem extends \Google\Collection
{
  public $action;
  public $id;
  public $payload;
  public $removeWhenSelected;
  protected $valuesType = 'Google\Service\Mirror\MenuValue';
  protected $valuesDataType = 'array';

  public function setAction($action)
  {
    $this->action = $action;
  }

  public function getAction()
  {
    return $this->action;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setPayload($payload)
  {
    $this->payload = $payload;
  }

  public function getPayload()
  {
    return $this->payload;
  }

  public function setRemoveWhenSelected($removeWhenSelected)
  {
    $this->removeWhenSelected = $removeWhenSelected;
  }

  public function getRemoveWhenSelected()
  {
    return $this->removeWhenSelected;
  }

  public function setValues($values)
  {
    $this->values = $values;
  }

  public function getValues()
  {
    return $this->values;
  }
}
