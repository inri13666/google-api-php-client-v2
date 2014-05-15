<?php 
namespace Google\Service\Bigquery;
class JobConfiguration extends \Google\Model
{
  protected $copyType = 'Google\Service\Bigquery\JobConfigurationTableCopy';
  protected $copyDataType = '';
  public $dryRun;
  protected $extractType = 'Google\Service\Bigquery\JobConfigurationExtract';
  protected $extractDataType = '';
  protected $linkType = 'Google\Service\Bigquery\JobConfigurationLink';
  protected $linkDataType = '';
  protected $loadType = 'Google\Service\Bigquery\JobConfigurationLoad';
  protected $loadDataType = '';
  protected $queryType = 'Google\Service\Bigquery\JobConfigurationQuery';
  protected $queryDataType = '';

  public function setCopy(\Google\Service\Bigquery\JobConfigurationTableCopy $copy)
  {
    $this->copy = $copy;
  }

  public function getCopy()
  {
    return $this->copy;
  }

  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }

  public function getDryRun()
  {
    return $this->dryRun;
  }

  public function setExtract(\Google\Service\Bigquery\JobConfigurationExtract $extract)
  {
    $this->extract = $extract;
  }

  public function getExtract()
  {
    return $this->extract;
  }

  public function setLink(\Google\Service\Bigquery\JobConfigurationLink $link)
  {
    $this->link = $link;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setLoad(\Google\Service\Bigquery\JobConfigurationLoad $load)
  {
    $this->load = $load;
  }

  public function getLoad()
  {
    return $this->load;
  }

  public function setQuery(\Google\Service\Bigquery\JobConfigurationQuery $query)
  {
    $this->query = $query;
  }

  public function getQuery()
  {
    return $this->query;
  }
}
