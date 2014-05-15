<?php 
namespace Google\Service\MapsEngine;
class MapLayer extends \Google\Collection
{
  public $defaultViewport;
  public $id;
  public $key;
  public $name;
  public $visibility;

  public function setDefaultViewport($defaultViewport)
  {
    $this->defaultViewport = $defaultViewport;
  }

  public function getDefaultViewport()
  {
    return $this->defaultViewport;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKey($key)
  {
    $this->key = $key;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
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
