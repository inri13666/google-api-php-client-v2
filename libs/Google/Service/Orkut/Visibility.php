<?php 
namespace Google\Service\Orkut;
class Visibility extends \Google\Collection
{
  public $kind;
  protected $linksType = 'Google\Service\Orkut\OrkutLinkResource';
  protected $linksDataType = 'array';
  public $visibility;

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

  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }

  public function getVisibility()
  {
    return $this->visibility;
  }
}
