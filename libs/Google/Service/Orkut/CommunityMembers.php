<?php 
namespace Google\Service\Orkut;
class CommunityMembers extends \Google\Model
{
  protected $communityMembershipStatusType = 'Google\Service\Orkut\CommunityMembershipStatus';
  protected $communityMembershipStatusDataType = '';
  public $kind;
  protected $personType = 'Google\Service\Orkut\OrkutActivitypersonResource';
  protected $personDataType = '';

  public function setCommunityMembershipStatus(\Google\Service\Orkut\CommunityMembershipStatus $communityMembershipStatus)
  {
    $this->communityMembershipStatus = $communityMembershipStatus;
  }

  public function getCommunityMembershipStatus()
  {
    return $this->communityMembershipStatus;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPerson(\Google\Service\Orkut\OrkutActivitypersonResource $person)
  {
    $this->person = $person;
  }

  public function getPerson()
  {
    return $this->person;
  }
}
