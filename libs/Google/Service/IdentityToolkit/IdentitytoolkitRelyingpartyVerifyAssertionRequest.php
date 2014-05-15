<?php 
namespace Google\Service\IdentityToolkit;
class IdentitytoolkitRelyingpartyVerifyAssertionRequest extends \Google\Model
{
  public $pendingIdToken;
  public $postBody;
  public $requestUri;

  public function setPendingIdToken($pendingIdToken)
  {
    $this->pendingIdToken = $pendingIdToken;
  }

  public function getPendingIdToken()
  {
    return $this->pendingIdToken;
  }

  public function setPostBody($postBody)
  {
    $this->postBody = $postBody;
  }

  public function getPostBody()
  {
    return $this->postBody;
  }

  public function setRequestUri($requestUri)
  {
    $this->requestUri = $requestUri;
  }

  public function getRequestUri()
  {
    return $this->requestUri;
  }
}
