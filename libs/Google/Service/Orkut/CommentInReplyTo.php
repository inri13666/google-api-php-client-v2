<?php 
namespace Google\Service\Orkut;
class CommentInReplyTo extends \Google\Model
{
  public $href;
  public $ref;
  public $rel;
  public $type;

  public function setHref($href)
  {
    $this->href = $href;
  }

  public function getHref()
  {
    return $this->href;
  }

  public function setRef($ref)
  {
    $this->ref = $ref;
  }

  public function getRef()
  {
    return $this->ref;
  }

  public function setRel($rel)
  {
    $this->rel = $rel;
  }

  public function getRel()
  {
    return $this->rel;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
