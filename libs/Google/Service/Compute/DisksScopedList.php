<?php 
namespace Google\Service\Compute;
class DisksScopedList extends \Google\Collection
{
  protected $disksType = 'Google\Service\Compute\Disk';
  protected $disksDataType = 'array';
  protected $warningType = 'Google\Service\Compute\DisksScopedListWarning';
  protected $warningDataType = '';

  public function setDisks($disks)
  {
    $this->disks = $disks;
  }

  public function getDisks()
  {
    return $this->disks;
  }

  public function setWarning(\Google\Service\Compute\DisksScopedListWarning $warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
