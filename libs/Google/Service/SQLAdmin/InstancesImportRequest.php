<?php 
namespace Google\Service\SQLAdmin;
class InstancesImportRequest extends \Google\Model
{
  protected $importContextType = 'Google\Service\SQLAdmin\ImportContext';
  protected $importContextDataType = '';

  public function setImportContext(\Google\Service\SQLAdmin\ImportContext $importContext)
  {
    $this->importContext = $importContext;
  }

  public function getImportContext()
  {
    return $this->importContext;
  }
}
