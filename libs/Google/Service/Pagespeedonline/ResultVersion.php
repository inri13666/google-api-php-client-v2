<?php 
namespace Google\Service\Pagespeedonline;
class ResultVersion extends \Google\Model
{
  public $major;
  public $minor;

  public function setMajor($major)
  {
    $this->major = $major;
  }

  public function getMajor()
  {
    return $this->major;
  }

  public function setMinor($minor)
  {
    $this->minor = $minor;
  }

  public function getMinor()
  {
    return $this->minor;
  }
}
