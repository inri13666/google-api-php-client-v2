<?php 
namespace Google\Service\Books;
class BooksVolumesRecommendedRateResponse extends \Google\Model
{
  public $consistencyToken;

  public function setConsistencyToken($consistencyToken)
  {
    $this->consistencyToken = $consistencyToken;
  }

  public function getConsistencyToken()
  {
    return $this->consistencyToken;
  }
}
