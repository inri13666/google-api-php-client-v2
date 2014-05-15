<?php 
namespace Google\Service\Bigquery;
class ProjectListProjects extends \Google\Model
{
  public $friendlyName;
  public $id;
  public $kind;
  public $numericId;
  protected $projectReferenceType = 'Google\Service\Bigquery\ProjectReference';
  protected $projectReferenceDataType = '';

  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }

  public function getFriendlyName()
  {
    return $this->friendlyName;
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

  public function setNumericId($numericId)
  {
    $this->numericId = $numericId;
  }

  public function getNumericId()
  {
    return $this->numericId;
  }

  public function setProjectReference(\Google\Service\Bigquery\ProjectReference $projectReference)
  {
    $this->projectReference = $projectReference;
  }

  public function getProjectReference()
  {
    return $this->projectReference;
  }
}
