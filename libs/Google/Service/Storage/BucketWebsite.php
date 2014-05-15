<?php 
namespace Google\Service\Storage;
class BucketWebsite extends \Google\Model
{
  public $mainPageSuffix;
  public $notFoundPage;

  public function setMainPageSuffix($mainPageSuffix)
  {
    $this->mainPageSuffix = $mainPageSuffix;
  }

  public function getMainPageSuffix()
  {
    return $this->mainPageSuffix;
  }

  public function setNotFoundPage($notFoundPage)
  {
    $this->notFoundPage = $notFoundPage;
  }

  public function getNotFoundPage()
  {
    return $this->notFoundPage;
  }
}
