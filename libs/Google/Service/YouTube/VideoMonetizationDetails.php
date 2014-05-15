<?php 
namespace Google\Service\YouTube;
class VideoMonetizationDetails extends \Google\Model
{
  protected $accessType = 'Google\Service\YouTube\AccessPolicy';
  protected $accessDataType = '';

  public function setAccess(\Google\Service\YouTube\AccessPolicy $access)
  {
    $this->access = $access;
  }

  public function getAccess()
  {
    return $this->access;
  }
}
