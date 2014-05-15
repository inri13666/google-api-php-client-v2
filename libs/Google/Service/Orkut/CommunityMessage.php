<?php 
namespace Google\Service\Orkut;
class CommunityMessage extends \Google\Collection
{
  public $addedDate;
  protected $authorType = 'Google\Service\Orkut\OrkutAuthorResource';
  protected $authorDataType = '';
  public $body;
  public $id;
  public $isSpam;
  public $kind;
  protected $linksType = 'Google\Service\Orkut\OrkutLinkResource';
  protected $linksDataType = 'array';
  public $subject;

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

  public function setIsSpam($isSpam)
  {
    $this->isSpam = $isSpam;
  }

  public function getIsSpam()
  {
    return $this->isSpam;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLinks($links)
  {
    $this->links = $links;
  }

  public function getLinks()
  {
    return $this->links;
  }

  public function setSubject($subject)
  {
    $this->subject = $subject;
  }

  public function getSubject()
  {
    return $this->subject;
  }
}
