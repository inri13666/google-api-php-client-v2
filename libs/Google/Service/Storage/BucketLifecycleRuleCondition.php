<?php 
namespace Google\Service\Storage;
class BucketLifecycleRuleCondition extends \Google\Model
{
  public $age;
  public $createdBefore;
  public $isLive;
  public $numNewerVersions;

  public function setAge($age)
  {
    $this->age = $age;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setCreatedBefore($createdBefore)
  {
    $this->createdBefore = $createdBefore;
  }

  public function getCreatedBefore()
  {
    return $this->createdBefore;
  }

  public function setIsLive($isLive)
  {
    $this->isLive = $isLive;
  }

  public function getIsLive()
  {
    return $this->isLive;
  }

  public function setNumNewerVersions($numNewerVersions)
  {
    $this->numNewerVersions = $numNewerVersions;
  }

  public function getNumNewerVersions()
  {
    return $this->numNewerVersions;
  }
}
