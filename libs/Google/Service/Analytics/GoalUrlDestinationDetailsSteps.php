<?php 
namespace Google\Service\Analytics;
class GoalUrlDestinationDetailsSteps extends \Google\Model
{
  public $name;
  public $number;
  public $url;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
}
