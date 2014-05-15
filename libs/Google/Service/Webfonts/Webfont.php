<?php 
namespace Google\Service\Webfonts;
class Webfont extends \Google\Collection
{
  public $category;
  public $family;
  public $files;
  public $kind;
  public $lastModified;
  public $subsets;
  public $variants;
  public $version;

  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function setFamily($family)
  {
    $this->family = $family;
  }

  public function getFamily()
  {
    return $this->family;
  }

  public function setFiles($files)
  {
    $this->files = $files;
  }

  public function getFiles()
  {
    return $this->files;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastModified($lastModified)
  {
    $this->lastModified = $lastModified;
  }

  public function getLastModified()
  {
    return $this->lastModified;
  }

  public function setSubsets($subsets)
  {
    $this->subsets = $subsets;
  }

  public function getSubsets()
  {
    return $this->subsets;
  }

  public function setVariants($variants)
  {
    $this->variants = $variants;
  }

  public function getVariants()
  {
    return $this->variants;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}
