<?php 
namespace Google\Service\Calendar;
class AclRule extends \Google\Model
{
  public $etag;
  public $id;
  public $kind;
  public $role;
  protected $scopeType = 'Google\Service\Calendar\AclRuleScope';
  protected $scopeDataType = '';

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
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

  public function setRole($role)
  {
    $this->role = $role;
  }

  public function getRole()
  {
    return $this->role;
  }

  public function setScope(\Google\Service\Calendar\AclRuleScope $scope)
  {
    $this->scope = $scope;
  }

  public function getScope()
  {
    return $this->scope;
  }
}
