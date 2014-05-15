<?php 
namespace Google\Service\QPXExpress;
class TripsSearchRequest extends \Google\Model
{
  protected $requestType = 'Google\Service\QPXExpress\TripOptionsRequest';
  protected $requestDataType = '';

  public function setRequest(\Google\Service\QPXExpress\TripOptionsRequest $request)
  {
    $this->request = $request;
  }

  public function getRequest()
  {
    return $this->request;
  }
}
