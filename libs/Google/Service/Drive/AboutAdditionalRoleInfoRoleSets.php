<?php 
namespace Google\Service\Drive;
class AboutAdditionalRoleInfoRoleSets extends \Google\Collection
{
  public $additionalRoles;
  public $primaryRole;

  public function setAdditionalRoles($additionalRoles)
  {
    $this->additionalRoles = $additionalRoles;
  }

  public function getAdditionalRoles()
  {
    return $this->additionalRoles;
  }

  public function setPrimaryRole($primaryRole)
  {
    $this->primaryRole = $primaryRole;
  }

  public function getPrimaryRole()
  {
    return $this->primaryRole;
  }
}
