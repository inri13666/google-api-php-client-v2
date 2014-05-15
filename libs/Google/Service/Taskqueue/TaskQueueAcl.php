<?php 
namespace Google\Service\Taskqueue;
class TaskQueueAcl extends \Google\Collection
{
  public $adminEmails;
  public $consumerEmails;
  public $producerEmails;

  public function setAdminEmails($adminEmails)
  {
    $this->adminEmails = $adminEmails;
  }

  public function getAdminEmails()
  {
    return $this->adminEmails;
  }

  public function setConsumerEmails($consumerEmails)
  {
    $this->consumerEmails = $consumerEmails;
  }

  public function getConsumerEmails()
  {
    return $this->consumerEmails;
  }

  public function setProducerEmails($producerEmails)
  {
    $this->producerEmails = $producerEmails;
  }

  public function getProducerEmails()
  {
    return $this->producerEmails;
  }
}
