<?php 
namespace Google\Service\Mirror;
class Attachment extends \Google\Model
{
  public $contentType;
  public $contentUrl;
  public $id;
  public $isProcessingContent;

  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }

  public function getContentType()
  {
    return $this->contentType;
  }

  public function setContentUrl($contentUrl)
  {
    $this->contentUrl = $contentUrl;
  }

  public function getContentUrl()
  {
    return $this->contentUrl;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setIsProcessingContent($isProcessingContent)
  {
    $this->isProcessingContent = $isProcessingContent;
  }

  public function getIsProcessingContent()
  {
    return $this->isProcessingContent;
  }
}
