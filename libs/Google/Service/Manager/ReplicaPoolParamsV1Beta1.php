<?php 
namespace Google\Service\Manager;
class ReplicaPoolParamsV1Beta1 extends \Google\Collection
{
  public $autoRestart;
  public $baseInstanceName;
  public $canIpForward;
  public $description;
  protected $disksToAttachType = 'Google\Service\Manager\ExistingDisk';
  protected $disksToAttachDataType = 'array';
  protected $disksToCreateType = 'Google\Service\Manager\NewDisk';
  protected $disksToCreateDataType = 'array';
  public $initAction;
  public $machineType;
  protected $metadataType = 'Google\Service\Manager\Metadata';
  protected $metadataDataType = '';
  protected $networkInterfacesType = 'Google\Service\Manager\NetworkInterface';
  protected $networkInterfacesDataType = 'array';
  public $onHostMaintenance;
  protected $serviceAccountsType = 'Google\Service\Manager\ServiceAccount';
  protected $serviceAccountsDataType = 'array';
  protected $tagsType = 'Google\Service\Manager\Tag';
  protected $tagsDataType = '';
  public $zone;

  public function setAutoRestart($autoRestart)
  {
    $this->autoRestart = $autoRestart;
  }

  public function getAutoRestart()
  {
    return $this->autoRestart;
  }

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

  public function setInitAction($initAction)
  {
    $this->initAction = $initAction;
  }

  public function getInitAction()
  {
    return $this->initAction;
  }

  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }

  public function getMachineType()
  {
    return $this->machineType;
  }

  public function setMetadata(\Google\Service\Manager\Metadata $metadata)
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

  public function setTags(\Google\Service\Manager\Tag $tags)
  {
    $this->tags = $tags;
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function setZone($zone)
  {
    $this->zone = $zone;
  }

  public function getZone()
  {
    return $this->zone;
  }
}
