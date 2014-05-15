<?php 
namespace Google\Service\Bigquery;
class ProjectList extends \Google\Collection
{
  public $etag;
  public $kind;
  public $nextPageToken;
  protected $projectsType = 'Google\Service\Bigquery\ProjectListProjects';
  protected $projectsDataType = 'array';
  public $totalItems;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setProjects($projects)
  {
    $this->projects = $projects;
  }

  public function getProjects()
  {
    return $this->projects;
  }

  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }

  public function getTotalItems()
  {
    return $this->totalItems;
  }
}
