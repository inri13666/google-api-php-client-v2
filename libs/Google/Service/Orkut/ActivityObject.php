<?php 
namespace Google\Service\Orkut;
class ActivityObject extends \Google\Collection
{
  public $content;
  protected $itemsType = 'Google\Service\Orkut\OrkutActivityobjectsResource';
  protected $itemsDataType = 'array';
  public $objectType;
  protected $repliesType = 'Google\Service\Orkut\ActivityObjectReplies';
  protected $repliesDataType = '';

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }

  public function setReplies(\Google\Service\Orkut\ActivityObjectReplies $replies)
  {
    $this->replies = $replies;
  }

  public function getReplies()
  {
    return $this->replies;
  }
}
