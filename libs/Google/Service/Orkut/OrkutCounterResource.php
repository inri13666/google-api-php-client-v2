<?php 
namespace Google\Service\Orkut;
class OrkutCounterResource extends \Google\Model
{
  protected $linkType = 'Google\Service\Orkut\OrkutLinkResource';
  protected $linkDataType = '';
  public $name;
  public $total;

  public function setLink(\Google\Service\Orkut\OrkutLinkResource $link)
  {
    $this->link = $link;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setTotal($total)
  {
    $this->total = $total;
  }

  public function getTotal()
  {
    return $this->total;
  }
}
