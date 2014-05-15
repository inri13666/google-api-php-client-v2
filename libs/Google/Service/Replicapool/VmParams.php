<?php 
namespace Google\Service\Replicapool;
class VmParams extends \Google\Collection
{
  public $baseInstanceName;
  public $canIpForward;
  public $description;
  protected $disksToAttachType = 'Google\Service\Replicapool\ExistingDisk';
  protected $disksToAttachDataType = 'array';
  protected $disksToCreateType = 'Google\Service\Replicapool\NewDisk';
  protected $disksToCreateDataType = 'array';
  public $machineType;
  protected $metadataType = 'Google\Service\Replicapool\Metadata';
  protected $metadataDataType = '';
  protected $networkInterfacesType = 'Google\Service\Replicapool\NetworkInterface';
  protected $networkInterfacesDataType = 'array';
  public $onHostMaintenance;
  protected $serviceAccountsType = 'Google\Service\Replicapool\ServiceAccount';
  protected $serviceAccountsDataType = 'array';
  protected $tagsType = 'Google\Service\Replicapool\Tag';
  protected $tagsDataType = '';

  public function setBaseInstanceName($baseInstanceName)
  {
    $this->baseInstanceName = $baseInstanceName;
  }

  public function getBaseInstanceName()
  {
    return $this->baseInstanceName;
  }

  public function setCanIpForward($canIpForward)
  {
    $this->canIpForward = $canIpForward;
  }

  public function getCanIpForward()
  {
    return $this->canIpForward;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDisksToAttach($disksToAttach)
  {
    $this->disksToAttach = $disksToAttach;
  }

  public function getDisksToAttach()
  {
    return $this->disksToAttach;
  }

  public function setDisksToCreate($disksToCreate)
  {
    $this->disksToCreate = $disksToCreate;
  }

  public function getDisksToCreate()
  {
    return $this->disksToCreate;
  }

  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }

  public function getMachineType()
  {
    return $this->machineType;
  }

  public function setMetadata(\Google\Service\Replicapool\Metadata $metadata)
  {
    $this->metadata = $metadata;
  }

  public function getMetadata()
  {
    return $this->metadata;
  }

  public function setNetworkInterfaces($networkInterfaces)
  {
    $this->networkInterfaces = $networkInterfaces;
  }

  public function getNetworkInterfaces()
  {
    return $this->networkInterfaces;
  }

  public function setOnHostMaintenance($onHostMaintenance)
  {
    $this->onHostMaintenance = $onHostMaintenance;
  }

  public function getOnHostMaintenance()
  {
    return $this->onHostMaintenance;
  }

  public function setServiceAccounts($serviceAccounts)
  {
    $this->serviceAccounts = $serviceAccounts;
  }

  public function getServiceAccounts()
  {
    return $this->serviceAccounts;
  }

  public function setTags(\Google\Service\Replicapool\Tag $tags)
  {
    $this->tags = $tags;
  }

  public function getTags()
  {
    return $this->tags;
  }
}
