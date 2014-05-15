<?php 
namespace Google\Service\Spectrum;
class RulesetInfo extends \Google\Collection
{
  public $authority;
  public $maxLocationChange;
  public $maxPollingSecs;
  public $rulesetIds;

  public function setAuthority($authority)
  {
    $this->authority = $authority;
  }

  public function getAuthority()
  {
    return $this->authority;
  }

  public function setMaxLocationChange($maxLocationChange)
  {
    $this->maxLocationChange = $maxLocationChange;
  }

  public function getMaxLocationChange()
  {
    return $this->maxLocationChange;
  }

  public function setMaxPollingSecs($maxPollingSecs)
  {
    $this->maxPollingSecs = $maxPollingSecs;
  }

  public function getMaxPollingSecs()
  {
    return $this->maxPollingSecs;
  }

  public function setRulesetIds($rulesetIds)
  {
    $this->rulesetIds = $rulesetIds;
  }

  public function getRulesetIds()
  {
    return $this->rulesetIds;
  }
}
