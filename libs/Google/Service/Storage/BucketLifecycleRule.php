<?php 
namespace Google\Service\Storage;
class BucketLifecycleRule extends \Google\Model
{
  protected $actionType = 'Google\Service\Storage\BucketLifecycleRuleAction';
  protected $actionDataType = '';
  protected $conditionType = 'Google\Service\Storage\BucketLifecycleRuleCondition';
  protected $conditionDataType = '';

  public function setAction(\Google\Service\Storage\BucketLifecycleRuleAction $action)
  {
    $this->action = $action;
  }

  public function getAction()
  {
    return $this->action;
  }

  public function setCondition(\Google\Service\Storage\BucketLifecycleRuleCondition $condition)
  {
    $this->condition = $condition;
  }

  public function getCondition()
  {
    return $this->condition;
  }
}
