<?php 
namespace Google\Service\Orkut;
class OrkutLinkResource extends \Google\Model
{
  public $href;
  public $rel;
  public $title;
  public $type;

  public function setHref($href)
  {
    $this->href = $href;
  }

  public function getHref()
  {
    return $this->href;
  }

  public function setRel($rel)
  {
    $this->rel = $rel;
  }

  public function getRel()
  {
    return $this->rel;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
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
