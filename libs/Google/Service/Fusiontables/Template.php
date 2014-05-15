<?php 
namespace Google\Service\Fusiontables;
class Template extends \Google\Collection
{
  public $automaticColumnNames;
  public $body;
  public $kind;
  public $name;
  public $tableId;
  public $templateId;

  public function setAutomaticColumnNames($automaticColumnNames)
  {
    $this->automaticColumnNames = $automaticColumnNames;
  }

  public function getAutomaticColumnNames()
  {
    return $this->automaticColumnNames;
  }

  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getBody()
  {
    return $this->body;
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

  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }

  public function getTableId()
  {
    return $this->tableId;
  }

  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }

  public function getTemplateId()
  {
    return $this->templateId;
  }
}
