<?php 
namespace Google\Service\PlusDomains;
class Comment extends \Google\Collection
{
  protected $actorType = 'Google\Service\PlusDomains\CommentActor';
  protected $actorDataType = '';
  public $etag;
  public $id;
  protected $inReplyToType = 'Google\Service\PlusDomains\CommentInReplyTo';
  protected $inReplyToDataType = 'array';
  public $kind;
  protected $objectType = 'Google\Service\PlusDomains\CommentObject';
  protected $objectDataType = '';
  protected $plusonersType = 'Google\Service\PlusDomains\CommentPlusoners';
  protected $plusonersDataType = '';
  public $published;
  public $selfLink;
  public $updated;
  public $verb;

  public function setActor(\Google\Service\PlusDomains\CommentActor $actor)
  {
    $this->actor = $actor;
  }

  public function getActor()
  {
    return $this->actor;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInReplyTo($inReplyTo)
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

  public function setObject(\Google\Service\PlusDomains\CommentObject $object)
  {
    $this->object = $object;
  }

  public function getObject()
  {
    return $this->object;
  }

  public function setPlusoners(\Google\Service\PlusDomains\CommentPlusoners $plusoners)
  {
    $this->plusoners = $plusoners;
  }

  public function getPlusoners()
  {
    return $this->plusoners;
  }

  public function setPublished($published)
  {
    $this->published = $published;
  }

  public function getPublished()
  {
    return $this->published;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
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
