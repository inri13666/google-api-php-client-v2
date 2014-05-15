<?php 
namespace Google\Service\Mirror;
class Notification extends \Google\Collection
{
  public $collection;
  public $itemId;
  public $operation;
  protected $userActionsType = 'Google\Service\Mirror\UserAction';
  protected $userActionsDataType = 'array';
  public $userToken;
  public $verifyToken;

  public function setCollection($collection)
  {
    $this->collection = $collection;
  }

  public function getCollection()
  {
    return $this->collection;
  }

  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }

  public function getItemId()
  {
    return $this->itemId;
  }

  public function setOperation($operation)
  {
    $this->operation = $operation;
  }

  public function getOperation()
  {
    return $this->operation;
  }

  public function setUserActions($userActions)
  {
    $this->userActions = $userActions;
  }

  public function getUserActions()
  {
    return $this->userActions;
  }

  public function setUserToken($userToken)
  {
    $this->userToken = $userToken;
  }

  public function getUserToken()
  {
    return $this->userToken;
  }

  public function setVerifyToken($verifyToken)
  {
    $this->verifyToken = $verifyToken;
  }

  public function getVerifyToken()
  {
    return $this->verifyToken;
  }
}
