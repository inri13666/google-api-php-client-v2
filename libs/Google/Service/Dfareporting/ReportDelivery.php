<?php 
namespace Google\Service\Dfareporting;
class ReportDelivery extends \Google\Collection
{
  public $emailOwner;
  public $emailOwnerDeliveryType;
  public $message;
  protected $recipientsType = 'Google\Service\Dfareporting\Recipient';
  protected $recipientsDataType = 'array';

  public function setEmailOwner($emailOwner)
  {
    $this->emailOwner = $emailOwner;
  }

  public function getEmailOwner()
  {
    return $this->emailOwner;
  }

  public function setEmailOwnerDeliveryType($emailOwnerDeliveryType)
  {
    $this->emailOwnerDeliveryType = $emailOwnerDeliveryType;
  }

  public function getEmailOwnerDeliveryType()
  {
    return $this->emailOwnerDeliveryType;
  }

  public function setMessage($message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }

  public function getRecipients()
  {
    return $this->recipients;
  }
}
