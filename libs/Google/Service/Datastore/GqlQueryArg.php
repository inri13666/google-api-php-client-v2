<?php 
namespace Google\Service\Datastore;
class GqlQueryArg extends \Google\Model
{
  public $cursor;
  public $name;
  protected $valueType = 'Google\Service\Datastore\Value';
  protected $valueDataType = '';

  public function setCursor($cursor)
  {
    $this->cursor = $cursor;
  }

  public function getCursor()
  {
    return $this->cursor;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setValue(\Google\Service\Datastore\Value $value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }
}
