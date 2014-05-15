<?php 
namespace Google\Service\Manager;
class NewDisk extends \Google\Model
{
  protected $attachmentType = 'Google\Service\Manager\DiskAttachment';
  protected $attachmentDataType = '';
  public $autoDelete;
  public $boot;
  protected $initializeParamsType = 'Google\Service\Manager\NewDiskInitializeParams';
  protected $initializeParamsDataType = '';

  public function setAttachment(\Google\Service\Manager\DiskAttachment $attachment)
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

  public function setInitializeParams(\Google\Service\Manager\NewDiskInitializeParams $initializeParams)
  {
    $this->initializeParams = $initializeParams;
  }

  public function getInitializeParams()
  {
    return $this->initializeParams;
  }
}
