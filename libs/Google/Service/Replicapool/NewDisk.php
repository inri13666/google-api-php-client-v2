<?php 
namespace Google\Service\Replicapool;
class NewDisk extends \Google\Model
{
  protected $attachmentType = 'Google\Service\Replicapool\DiskAttachment';
  protected $attachmentDataType = '';
  public $autoDelete;
  public $boot;
  protected $initializeParamsType = 'Google\Service\Replicapool\NewDiskInitializeParams';
  protected $initializeParamsDataType = '';

  public function setAttachment(\Google\Service\Replicapool\DiskAttachment $attachment)
  {
    $this->attachment = $attachment;
  }

  public function getAttachment()
  {
    return $this->attachment;
  }

  public function setAutoDelete($autoDelete)
  {
    $this->autoDelete = $autoDelete;
  }

  public function getAutoDelete()
  {
    return $this->autoDelete;
  }

  public function setBoot($boot)
  {
    $this->boot = $boot;
  }

  public function getBoot()
  {
    return $this->boot;
  }

  public function setInitializeParams(\Google\Service\Replicapool\NewDiskInitializeParams $initializeParams)
  {
    $this->initializeParams = $initializeParams;
  }

  public function getInitializeParams()
  {
    return $this->initializeParams;
  }
}
