<?php 
namespace Google\Service\Orkut;
class Comment extends \Google\Collection
{
  protected $actorType = 'Google\Service\Orkut\OrkutAuthorResource';
  protected $actorDataType = '';
  public $content;
  public $id;
  protected $inReplyToType = 'Google\Service\Orkut\CommentInReplyTo';
  protected $inReplyToDataType = '';
  public $kind;
  protected $linksType = 'Google\Service\Orkut\OrkutLinkResource';
  protected $linksDataType = 'array';
  public $published;

  public function setActor(\Google\Service\Orkut\OrkutAuthorResource $actor)
  {
    $this->actor = $actor;
  }

  public function getActor()
  {
    return $this->actor;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInReplyTo(\Google\Service\Orkut\CommentInReplyTo $inReplyTo)
  {
    $this->inReplyTo = $inReplyTo;
  }

  public function getInReplyTo()
  {
    return $this->inReplyTo;
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

  public function setPublished($published)
  {
    $this->published = $published;
  }

  public function getPublished()
  {
    return $this->published;
  }
}
