<?php 
namespace Google\Service\Drive;
class Comment extends \Google\Collection
{
  public $anchor;
  protected $authorType = 'Google\Service\Drive\User';
  protected $authorDataType = '';
  public $commentId;
  public $content;
  protected $contextType = 'Google\Service\Drive\CommentContext';
  protected $contextDataType = '';
  public $createdDate;
  public $deleted;
  public $fileId;
  public $fileTitle;
  public $htmlContent;
  public $kind;
  public $modifiedDate;
  protected $repliesType = 'Google\Service\Drive\CommentReply';
  protected $repliesDataType = 'array';
  public $selfLink;
  public $status;

  public function setAnchor($anchor)
  {
    $this->anchor = $anchor;
  }

  public function getAnchor()
  {
    return $this->anchor;
  }

  public function setAuthor(\Google\Service\Drive\User $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setCommentId($commentId)
  {
    $this->commentId = $commentId;
  }

  public function getCommentId()
  {
    return $this->commentId;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setContext(\Google\Service\Drive\CommentContext $context)
  {
    $this->context = $context;
  }

  public function getContext()
  {
    return $this->context;
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

  public function setFileId($fileId)
  {
    $this->fileId = $fileId;
  }

  public function getFileId()
  {
    return $this->fileId;
  }

  public function setFileTitle($fileTitle)
  {
    $this->fileTitle = $fileTitle;
  }

  public function getFileTitle()
  {
    return $this->fileTitle;
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

  public function setReplies($replies)
  {
    $this->replies = $replies;
  }

  public function getReplies()
  {
    return $this->replies;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
