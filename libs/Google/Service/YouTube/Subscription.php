<?php 
namespace Google\Service\YouTube;
class Subscription extends \Google\Model
{
  protected $contentDetailsType = 'Google\Service\YouTube\SubscriptionContentDetails';
  protected $contentDetailsDataType = '';
  public $etag;
  public $id;
  public $kind;
  protected $snippetType = 'Google\Service\YouTube\SubscriptionSnippet';
  protected $snippetDataType = '';
  protected $subscriberSnippetType = 'Google\Service\YouTube\SubscriptionSubscriberSnippet';
  protected $subscriberSnippetDataType = '';

  public function setContentDetails(\Google\Service\YouTube\SubscriptionContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }

  public function getContentDetails()
  {
    return $this->contentDetails;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSnippet(\Google\Service\YouTube\SubscriptionSnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }

  public function setSubscriberSnippet(\Google\Service\YouTube\SubscriptionSubscriberSnippet $subscriberSnippet)
  {
    $this->subscriberSnippet = $subscriberSnippet;
  }

  public function getSubscriberSnippet()
  {
    return $this->subscriberSnippet;
  }
}
