<?php 
namespace Google\Service\YouTube;
class VideoTopicDetails extends \Google\Collection
{
  public $relevantTopicIds;
  public $topicIds;

  public function setRelevantTopicIds($relevantTopicIds)
  {
    $this->relevantTopicIds = $relevantTopicIds;
  }

  public function getRelevantTopicIds()
  {
    return $this->relevantTopicIds;
  }

  public function setTopicIds($topicIds)
  {
    $this->topicIds = $topicIds;
  }

  public function getTopicIds()
  {
    return $this->topicIds;
  }
}
