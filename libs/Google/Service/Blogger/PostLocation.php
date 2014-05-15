<?php 
namespace Google\Service\Blogger;
class PostLocation extends \Google\Model
{
  public $lat;
  public $lng;
  public $name;
  public $span;

  public function setLat($lat)
  {
    $this->lat = $lat;
  }

  public function getLat()
  {
    return $this->lat;
  }

  public function setLng($lng)
  {
    $this->lng = $lng;
  }

  public function getLng()
  {
    return $this->lng;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setSpan($span)
  {
    $this->span = $span;
  }

  public function getSpan()
  {
    return $this->span;
  }
}
