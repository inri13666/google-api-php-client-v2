<?php 
namespace Google\Service\SQLAdmin;
class InstanceSetRootPasswordRequest extends \Google\Model
{
  protected $setRootPasswordContextType = 'Google\Service\SQLAdmin\SetRootPasswordContext';
  protected $setRootPasswordContextDataType = '';

  public function setSetRootPasswordContext(\Google\Service\SQLAdmin\SetRootPasswordContext $setRootPasswordContext)
  {
    $this->setRootPasswordContext = $setRootPasswordContext;
  }

  public function getSetRootPasswordContext()
  {
    return $this->setRootPasswordContext;
  }
}
