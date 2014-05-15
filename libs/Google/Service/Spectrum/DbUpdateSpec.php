<?php 
namespace Google\Service\Spectrum;
class DbUpdateSpec extends \Google\Collection
{
  protected $databasesType = 'Google\Service\Spectrum\DatabaseSpec';
  protected $databasesDataType = 'array';

  public function setDatabases($databases)
  {
    $this->databases = $databases;
  }

  public function getDatabases()
  {
    return $this->databases;
  }
}
