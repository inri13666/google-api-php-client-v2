<?php 
namespace Google\Service\Directory;
class Aliases extends \Google\Collection
{
  protected $aliasesType = 'Google\Service\Directory\Alias';
  protected $aliasesDataType = 'array';
  public $etag;
  public $kind;

  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }

  public function getAliases()
  {
    return $this->aliases;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
