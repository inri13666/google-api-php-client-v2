<?php 
namespace Google\Service\Coordinate;
class JobState extends \Google\Collection
{
  public $assignee;
  protected $customFieldsType = 'Google\Service\Coordinate\CustomFields';
  protected $customFieldsDataType = '';
  public $customerName;
  public $customerPhoneNumber;
  public $kind;
  protected $locationType = 'Google\Service\Coordinate\Location';
  protected $locationDataType = '';
  public $note;
  public $progress;
  public $title;

  public function setAssignee($assignee)
  {
    $this->assignee = $assignee;
  }

  public function getAssignee()
  {
    return $this->assignee;
  }

  public function setCustomFields(\Google\Service\Coordinate\CustomFields $customFields)
  {
    $this->customFields = $customFields;
  }

  public function getCustomFields()
  {
    return $this->customFields;
  }

  public function setCustomerName($customerName)
  {
    $this->customerName = $customerName;
  }

  public function getCustomerName()
  {
    return $this->customerName;
  }

  public function setCustomerPhoneNumber($customerPhoneNumber)
  {
    $this->customerPhoneNumber = $customerPhoneNumber;
  }

  public function getCustomerPhoneNumber()
  {
    return $this->customerPhoneNumber;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLocation(\Google\Service\Coordinate\Location $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setNote($note)
  {
    $this->note = $note;
  }

  public function getNote()
  {
    return $this->note;
  }

  public function setProgress($progress)
  {
    $this->progress = $progress;
  }

  public function getProgress()
  {
    return $this->progress;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}
