<?php 
namespace Google\Service\Freebase;
class ReconcileCandidate extends \Google\Model
{
  public $confidence;
  public $lang;
  public $mid;
  public $name;
  protected $notableType = 'Google\Service\Freebase\ReconcileCandidateNotable';
  protected $notableDataType = '';

  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }

  public function getConfidence()
  {
    return $this->confidence;
  }

  public function setLang($lang)
  {
    $this->lang = $lang;
  }

  public function getLang()
  {
    return $this->lang;
  }

  public function setMid($mid)
  {
    $this->mid = $mid;
  }

  public function getMid()
  {
    return $this->mid;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNotable(\Google\Service\Freebase\ReconcileCandidateNotable $notable)
  {
    $this->notable = $notable;
  }

  public function getNotable()
  {
    return $this->notable;
  }
}
