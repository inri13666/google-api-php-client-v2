<?php 
namespace Google\Service\Dns;
class ManagedZone extends \Google\Collection
{
  public $creationTime;
  public $description;
  public $dnsName;
  public $id;
  public $kind;
  public $name;
  public $nameServers;

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDnsName($dnsName)
  {
    $this->dnsName = $dnsName;
  }

  public function getDnsName()
  {
    return $this->dnsName;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNameServers($nameServers)
  {
    $this->nameServers = $nameServers;
  }

  public function getNameServers()
  {
    return $this->nameServers;
  }
}
