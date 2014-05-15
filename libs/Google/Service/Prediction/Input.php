<?php 
namespace Google\Service\Prediction;
class Input extends \Google\Model
{
  protected $inputType = 'Google\Service\Prediction\InputInput';
  protected $inputDataType = '';

  public function setInput(\Google\Service\Prediction\InputInput $input)
  {
    $this->input = $input;
  }

  public function getInput()
  {
    return $this->input;
  }
}
