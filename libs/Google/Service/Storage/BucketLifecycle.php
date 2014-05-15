<?php 
namespace Google\Service\Storage;
class BucketLifecycle extends \Google\Collection
{
  protected $ruleType = 'Google\Service\Storage\BucketLifecycleRule';
  protected $ruleDataType = 'array';

  public function setRule($rule)
  {
    $this->rule = $rule;
  }

  public function getRule()
  {
    return $this->rule;
  }
}
