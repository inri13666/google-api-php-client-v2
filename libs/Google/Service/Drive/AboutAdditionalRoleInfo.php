<?php 
namespace Google\Service\Drive;
class AboutAdditionalRoleInfo extends \Google\Collection
{
  protected $roleSetsType = 'Google\Service\Drive\AboutAdditionalRoleInfoRoleSets';
  protected $roleSetsDataType = 'array';
  public $type;

  public function setRoleSets($roleSets)
  {
    $this->roleSets = $roleSets;
  }

  public function getRoleSets()
  {
    return $this->roleSets;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
