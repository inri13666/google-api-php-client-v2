<?php 
namespace Google\Service\PlusDomains;
class Acl extends \Google\Collection
{
  public $description;
  public $domainRestricted;
  protected $itemsType = 'Google\Service\PlusDomains\PlusDomainsAclentryResource';
  protected $itemsDataType = 'array';
  public $kind;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDomainRestricted($domainRestricted)
  {
    $this->domainRestricted = $domainRestricted;
  }

  public function getDomainRestricted()
  {
    return $this->domainRestricted;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
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
