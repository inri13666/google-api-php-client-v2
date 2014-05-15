<?php 
namespace Google\Service\Orkut;
class OrkutCommunitypolloptionResource extends \Google\Model
{
  public $description;
  protected $imageType = 'Google\Service\Orkut\OrkutCommunitypolloptionResourceImage';
  protected $imageDataType = '';
  public $numberOfVotes;
  public $optionId;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setImage(\Google\Service\Orkut\OrkutCommunitypolloptionResourceImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setNumberOfVotes($numberOfVotes)
  {
    $this->numberOfVotes = $numberOfVotes;
  }

  public function getNumberOfVotes()
  {
    return $this->numberOfVotes;
  }

  public function setOptionId($optionId)
  {
    $this->optionId = $optionId;
  }

  public function getOptionId()
  {
    return $this->optionId;
  }
}
