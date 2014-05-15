<?php 
namespace Google\Service\Mirror;
class Subscription extends \Google\Collection
{
  public $callbackUrl;
  public $collection;
  public $id;
  public $kind;
  protected $notificationType = 'Google\Service\Mirror\Notification';
  protected $notificationDataType = '';
  public $operation;
  public $updated;
  public $userToken;
  public $verifyToken;

  public function setCallbackUrl($callbackUrl)
  {
    $this->callbackUrl = $callbackUrl;
  }

  public function getCallbackUrl()
  {
    return $this->callbackUrl;
  }

  public function setCollection($collection)
  {
    $this->collection = $collection;
  }

  public function getCollection()
  {
    return $this->collection;
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

  public function setNotification(\Google\Service\Mirror\Notification $notification)
  {
    $this->notification = $notification;
  }

  public function getNotification()
  {
    return $this->notification;
  }

  public function setOperation($operation)
  {
    $this->operation = $operation;
  }

  public function getOperation()
  {
    return $this->operation;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
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
