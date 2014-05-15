<?php 
namespace Google\Service\Reports;
class UsageReport extends \Google\Collection
{
  public $date;
  protected $entityType = 'Google\Service\Reports\UsageReportEntity';
  protected $entityDataType = '';
  public $etag;
  public $kind;
  protected $parametersType = 'Google\Service\Reports\UsageReportParameters';
  protected $parametersDataType = 'array';

  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setEntity(\Google\Service\Reports\UsageReportEntity $entity)
  {
    $this->entity = $entity;
  }

  public function getEntity()
  {
    return $this->entity;
  }

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

  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }

  public function getParameters()
  {
    return $this->parameters;
  }
}
