<?php 
namespace Google\Service\CivicInfo;
class ElectionsQueryResponse extends \Google\Collection
{
  protected $electionsType = 'Google\Service\CivicInfo\Election';
  protected $electionsDataType = 'array';
  public $kind;

  public function setElections($elections)
  {
    $this->elections = $elections;
  }

  public function getElections()
  {
    return $this->elections;
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
