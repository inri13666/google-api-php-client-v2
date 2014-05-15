<?php 
namespace Google\Service\Replicapool;
class ExistingDisk extends \Google\Model
{
  protected $attachmentType = 'Google\Service\Replicapool\DiskAttachment';
  protected $attachmentDataType = '';
  public $source;

  public function setAttachment(\Google\Service\Replicapool\DiskAttachment $attachment)
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
