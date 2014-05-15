<?php 
namespace Google\Service\Datastore;
class GqlQuery extends \Google\Collection
{
  public $allowLiteral;
  protected $nameArgsType = 'Google\Service\Datastore\GqlQueryArg';
  protected $nameArgsDataType = 'array';
  protected $numberArgsType = 'Google\Service\Datastore\GqlQueryArg';
  protected $numberArgsDataType = 'array';
  public $queryString;

  public function setAllowLiteral($allowLiteral)
  {
    $this->allowLiteral = $allowLiteral;
  }

  public function getAllowLiteral()
  {
    return $this->allowLiteral;
  }

  public function setNameArgs($nameArgs)
  {
    $this->nameArgs = $nameArgs;
  }

  public function getNameArgs()
  {
    return $this->nameArgs;
  }

  public function setNumberArgs($numberArgs)
  {
    $this->numberArgs = $numberArgs;
  }

  public function getNumberArgs()
  {
    return $this->numberArgs;
  }

  public function setQueryString($queryString)
  {
    $this->queryString = $queryString;
  }

  public function getQueryString()
  {
    return $this->queryString;
  }
}
