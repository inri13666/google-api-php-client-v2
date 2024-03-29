<?php 
namespace Google\Service\PlusDomains;
class CommentObject extends \Google\Model
{
  public $content;
  public $objectType;
  public $originalContent;

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }

  public function setOriginalContent($originalContent)
  {
    $this->originalContent = $originalContent;
  }

  public function getOriginalContent()
  {
    return $this->originalContent;
  }
}
