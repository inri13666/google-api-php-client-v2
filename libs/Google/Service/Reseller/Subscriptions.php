<?php 
namespace Google\Service\Reseller;
class Subscriptions extends \Google\Collection
{
  public $kind;
  public $nextPageToken;
  protected $subscriptionsType = 'Google\Service\Reseller\Subscription';
  protected $subscriptionsDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setSubscriptions($subscriptions)
  {
    $this->subscriptions = $subscriptions;
  }

  public function getSubscriptions()
  {
    return $this->subscriptions;
  }
}
