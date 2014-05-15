<?php 
namespace Google\Service\Manager;
class Template extends \Google\Model
{
  protected $actionsType = 'Google\Service\Manager\Action';
  protected $actionsDataType = 'map';
  public $description;
  protected $modulesType = 'Google\Service\Manager\Module';
  protected $modulesDataType = 'map';
  public $name;

  public function setActions($actions)
  {
    $this->actions = $actions;
  }

  public function getActions()
  {
    return $this->actions;
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
}
