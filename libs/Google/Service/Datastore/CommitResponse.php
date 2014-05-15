<?php 
namespace Google\Service\Datastore;
class CommitResponse extends \Google\Model
{
  protected $headerType = 'Google\Service\Datastore\ResponseHeader';
  protected $headerDataType = '';
  protected $mutationResultType = 'Google\Service\Datastore\MutationResult';
  protected $mutationResultDataType = '';

  public function setHeader(\Google\Service\Datastore\ResponseHeader $header)
  {
    $this->header = $header;
  }

  public function getHeader()
  {
    return $this->header;
  }

  public function setMutationResult(\Google\Service\Datastore\MutationResult $mutationResult)
  {
    $this->mutationResult = $mutationResult;
  }

  public function getMutationResult()
  {
    return $this->mutationResult;
  }
}
