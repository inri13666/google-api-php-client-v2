<?php 
namespace Google\Service\Books;
class BooksCloudloadingResource extends \Google\Model
{
  public $author;
  public $processingState;
  public $title;
  public $volumeId;

  public function setAuthor($author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setProcessingState($processingState)
  {
    $this->processingState = $processingState;
  }

  public function getProcessingState()
  {
    return $this->processingState;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }

  public function getVolumeId()
  {
    return $this->volumeId;
  }
}
