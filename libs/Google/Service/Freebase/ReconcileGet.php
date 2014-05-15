<?php 
namespace Google\Service\Freebase;
class ReconcileGet extends \Google\Collection
{
  protected $candidateType = 'Google\Service\Freebase\ReconcileCandidate';
  protected $candidateDataType = 'array';
  protected $costsType = 'Google\Service\Freebase\ReconcileGetCosts';
  protected $costsDataType = '';
  protected $matchType = 'Google\Service\Freebase\ReconcileCandidate';
  protected $matchDataType = '';
  protected $warningType = 'Google\Service\Freebase\ReconcileGetWarning';
  protected $warningDataType = 'array';

  public function setCandidate($candidate)
  {
    $this->candidate = $candidate;
  }

  public function getCandidate()
  {
    return $this->candidate;
  }

  public function setCosts(\Google\Service\Freebase\ReconcileGetCosts $costs)
  {
    $this->costs = $costs;
  }

  public function getCosts()
  {
    return $this->costs;
  }

  public function setMatch(\Google\Service\Freebase\ReconcileCandidate $match)
  {
    $this->match = $match;
  }

  public function getMatch()
  {
    return $this->match;
  }

  public function setWarning($warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
