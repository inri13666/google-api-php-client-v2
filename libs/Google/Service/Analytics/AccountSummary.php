<?php 
namespace Google\Service\Analytics;
class AccountSummary extends \Google\Collection
{
  public $id;
  public $kind;
  public $name;
  protected $webPropertiesType = 'Google\Service\Analytics\WebPropertySummary';
  protected $webPropertiesDataType = 'array';

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

  public function setWebProperties($webProperties)
  {
    $this->webProperties = $webProperties;
  }

  public function getWebProperties()
  {
    return $this->webProperties;
  }
}
