<?php 
namespace Google\Service\SQLAdmin;
class InstancesExportRequest extends \Google\Model
{
  protected $exportContextType = 'Google\Service\SQLAdmin\ExportContext';
  protected $exportContextDataType = '';

  public function setExportContext(\Google\Service\SQLAdmin\ExportContext $exportContext)
  {
    $this->exportContext = $exportContext;
  }

  public function getExportContext()
  {
    return $this->exportContext;
  }
}
