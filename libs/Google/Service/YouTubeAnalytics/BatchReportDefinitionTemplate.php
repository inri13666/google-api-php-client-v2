<?php 
namespace Google\Service\YouTubeAnalytics;
class BatchReportDefinitionTemplate extends \Google\Collection
{
  protected $defaultOutputType = 'Google\Service\YouTubeAnalytics\BatchReportDefinitionTemplateDefaultOutput';
  protected $defaultOutputDataType = 'array';
  public $id;
  public $name;
  public $status;
  public $type;

  public function setDefaultOutput($defaultOutput)
  {
    $this->defaultOutput = $defaultOutput;
  }

  public function getDefaultOutput()
  {
    return $this->defaultOutput;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
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
