<?php 
namespace Google\Service\Prediction;
class OutputOutputMulti extends \Google\Model
{
  public $label;
  public $score;

  public function setLabel($label)
  {
    $this->label = $label;
  }

  public function getLabel()
  {
    return $this->label;
  }

  public function setScore($score)
  {
    $this->score = $score;
  }

  public function getScore()
  {
    return $this->score;
  }
}
