<?php 
namespace Google\Service\Orkut;
class CommunityPollVote extends \Google\Collection
{
  public $isVotevisible;
  public $kind;
  public $optionIds;

  public function setIsVotevisible($isVotevisible)
  {
    $this->isVotevisible = $isVotevisible;
  }

  public function getIsVotevisible()
  {
    return $this->isVotevisible;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setOptionIds($optionIds)
  {
    $this->optionIds = $optionIds;
  }

  public function getOptionIds()
  {
    return $this->optionIds;
  }
}
