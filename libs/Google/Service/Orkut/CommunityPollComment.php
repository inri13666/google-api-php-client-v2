<?php 
namespace Google\Service\Orkut;
class CommunityPollComment extends \Google\Model
{
  public $addedDate;
  protected $authorType = 'Google\Service\Orkut\OrkutAuthorResource';
  protected $authorDataType = '';
  public $body;
  public $id;
  public $kind;

  public function setAddedDate($addedDate)
  {
    $this->addedDate = $addedDate;
  }

  public function getAddedDate()
  {
    return $this->addedDate;
  }

  public function setAuthor(\Google\Service\Orkut\OrkutAuthorResource $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
