<?php 
namespace Google\Service\Games;
class AggregateStats extends \Google\Model
{
  public $count;
  public $kind;
  public $max;
  public $min;
  public $sum;

  public function setCount($count)
  {
    $this->count = $count;
  }

  public function getCount()
  {
    return $this->count;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMax($max)
  {
    $this->max = $max;
  }

  public function getMax()
  {
    return $this->max;
  }

  public function setMin($min)
  {
    $this->min = $min;
  }

  public function getMin()
  {
    return $this->min;
  }

  public function setSum($sum)
  {
    $this->sum = $sum;
  }

  public function getSum()
  {
    return $this->sum;
  }
}
