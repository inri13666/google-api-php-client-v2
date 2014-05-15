<?php 
namespace Google\Service\Customsearch;
class SearchUrl extends \Google\Model
{
  public $template;
  public $type;

  public function setTemplate($template)
  {
    $this->template = $template;
  }

  public function getTemplate()
  {
    return $this->template;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
