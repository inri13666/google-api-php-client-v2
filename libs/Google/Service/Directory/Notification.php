<?php 
namespace Google\Service\Directory;
class Notification extends \Google\Model
{
  public $body;
  public $etag;
  public $fromAddress;
  public $isUnread;
  public $kind;
  public $notificationId;
  public $sendTime;
  public $subject;

  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setFromAddress($fromAddress)
  {
    $this->fromAddress = $fromAddress;
  }

  public function getFromAddress()
  {
    return $this->fromAddress;
  }

  public function setIsUnread($isUnread)
  {
    $this->isUnread = $isUnread;
  }

  public function getIsUnread()
  {
    return $this->isUnread;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNotificationId($notificationId)
  {
    $this->notificationId = $notificationId;
  }

  public function getNotificationId()
  {
    return $this->notificationId;
  }

  public function setSendTime($sendTime)
  {
    $this->sendTime = $sendTime;
  }

  public function getSendTime()
  {
    return $this->sendTime;
  }

  public function setSubject($subject)
  {
    $this->subject = $subject;
  }

  public function getSubject()
  {
    return $this->subject;
  }
}
