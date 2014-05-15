<?php 
namespace Google\Service\IdentityToolkit;
class IdentitytoolkitRelyingpartyDownloadAccountRequest extends \Google\Model
{
  public $maxResults;
  public $nextPageToken;

  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }

  public function getMaxResults()
  {
    return $this->maxResults;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
