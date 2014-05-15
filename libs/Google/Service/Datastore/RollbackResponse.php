<?php 
namespace Google\Service\Datastore;
class RollbackResponse extends \Google\Model
{
  protected $headerType = 'Google\Service\Datastore\ResponseHeader';
  protected $headerDataType = '';

  public function setHeader(\Google\Service\Datastore\ResponseHeader $header)
  {
    $this->header = $header;
  }

  public function getHeader()
  {
    return $this->header;
  }
}
