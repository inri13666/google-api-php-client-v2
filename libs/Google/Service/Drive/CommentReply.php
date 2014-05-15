<?php 
namespace Google\Service\Drive;
class CommentReply extends \Google\Model
{
  protected $authorType = 'Google\Service\Drive\User';
  protected $authorDataType = '';
  public $content;
  public $createdDate;
  public $deleted;
  public $htmlContent;
  public $kind;
  public $modifiedDate;
  public $replyId;
  public $verb;

  public function setAuthor(\Google\Service\Drive\User $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setCreatedDate($createdDate)
  {
    $this->createdDate = $createdDate;
  }

  public function getCreatedDate()
  {
    return $this->createdDate;
  }

  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }

  public function getDeleted()
  {
    return $this->deleted;
  }

  public function setHtmlContent($htmlContent)
  {
    $this->htmlContent = $htmlContent;
  }

  public function getHtmlContent()
  {
    return $this->htmlContent;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setModifiedDate($modifiedDate)
  {
    $this->modifiedDate = $modifiedDate;
  }

  public function getModifiedDate()
  {
    return $this->modifiedDate;
  }

  public function setReplyId($replyId)
  {
    $this->replyId = $replyId;
  }

  public function getReplyId()
  {
    return $this->replyId;
  }

  public function setVerb($verb)
  {
    $this->verb = $verb;
  }

  public function getVerb()
  {
    return $this->verb;
  }
}
