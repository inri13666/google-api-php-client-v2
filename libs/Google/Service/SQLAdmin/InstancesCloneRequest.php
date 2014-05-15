<?php 
namespace Google\Service\SQLAdmin;
class InstancesCloneRequest extends \Google\Model
{
  protected $cloneContextType = 'Google\Service\SQLAdmin\CloneContext';
  protected $cloneContextDataType = '';

  public function setCloneContext(\Google\Service\SQLAdmin\CloneContext $cloneContext)
  {
    $this->cloneContext = $cloneContext;
  }

  public function getCloneContext()
  {
    return $this->cloneContext;
  }
}
