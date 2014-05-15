<?php 
namespace Google\Service\Manager;
class Deployment extends \Google\Collection
{
  public $creationDate;
  public $description;
  protected $modulesType = 'Google\Service\Manager\ModuleStatus';
  protected $modulesDataType = 'map';
  public $name;
  protected $overridesType = 'Google\Service\Manager\ParamOverride';
  protected $overridesDataType = 'array';
  protected $stateType = 'Google\Service\Manager\DeployState';
  protected $stateDataType = '';
  public $templateName;

  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }

  public function getCreationDate()
  {
    return $this->creationDate;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setModules($modules)
  {
    $this->modules = $modules;
  }

  public function getModules()
  {
    return $this->modules;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOverrides($overrides)
  {
    $this->overrides = $overrides;
  }

  public function getOverrides()
  {
    return $this->overrides;
  }

  public function setState(\Google\Service\Manager\DeployState $state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setTemplateName($templateName)
  {
    $this->templateName = $templateName;
  }

  public function getTemplateName()
  {
    return $this->templateName;
  }
}
