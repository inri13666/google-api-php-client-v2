<?php 
namespace Google\Service\MapsEngine;
class MapKmlLink extends \Google\Collection
{
  public $defaultViewport;
  public $kmlUrl;
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

  public function setKmlUrl($kmlUrl)
  {
    $this->kmlUrl = $kmlUrl;
  }

  public function getKmlUrl()
  {
    return $this->kmlUrl;
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
