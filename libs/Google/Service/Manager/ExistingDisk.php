<?php 
namespace Google\Service\Manager;
class ExistingDisk extends \Google\Model
{
  protected $attachmentType = 'Google\Service\Manager\DiskAttachment';
  protected $attachmentDataType = '';
  public $source;

  public function setAttachment(\Google\Service\Manager\DiskAttachment $attachment)
  {
    $this->attachment = $attachment;
  }

  public function getAttachment()
  {
    return $this->attachment;
  }

  public function setSource($source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }
}
