<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Baremetalsolution;

class AllowedClient extends \Google\Model
{
  /** @var bool */
  public $allowDev;
  /** @var bool */
  public $allowSuid;
  /** @var string */
  public $allowedClientsCidr;
  /** @var string */
  public $mountPermissions;
  /** @var string */
  public $network;
  /** @var string */
  public $nfsPath;
  /** @var bool */
  public $noRootSquash;
  /** @var string */
  public $shareIp;

  /** @param bool */
  public function setAllowDev($allowDev)
  {
    $this->allowDev = $allowDev;
  }
  /** @return bool */
  public function getAllowDev()
  {
    return $this->allowDev;
  }
  /** @param bool */
  public function setAllowSuid($allowSuid)
  {
    $this->allowSuid = $allowSuid;
  }
  /** @return bool */
  public function getAllowSuid()
  {
    return $this->allowSuid;
  }
  /** @param string */
  public function setAllowedClientsCidr($allowedClientsCidr)
  {
    $this->allowedClientsCidr = $allowedClientsCidr;
  }
  /** @return string */
  public function getAllowedClientsCidr()
  {
    return $this->allowedClientsCidr;
  }
  /** @param string */
  public function setMountPermissions($mountPermissions)
  {
    $this->mountPermissions = $mountPermissions;
  }
  /** @return string */
  public function getMountPermissions()
  {
    return $this->mountPermissions;
  }
  /** @param string */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param string */
  public function setNfsPath($nfsPath)
  {
    $this->nfsPath = $nfsPath;
  }
  /** @return string */
  public function getNfsPath()
  {
    return $this->nfsPath;
  }
  /** @param bool */
  public function setNoRootSquash($noRootSquash)
  {
    $this->noRootSquash = $noRootSquash;
  }
  /** @return bool */
  public function getNoRootSquash()
  {
    return $this->noRootSquash;
  }
  /** @param string */
  public function setShareIp($shareIp)
  {
    $this->shareIp = $shareIp;
  }
  /** @return string */
  public function getShareIp()
  {
    return $this->shareIp;
  }
}

class BaremetalsolutionEmpty extends \Google\Model
{
}

class DetachLunRequest extends \Google\Model
{
  /** @var string */
  public $lun;
  /** @var bool */
  public $skipReboot;

  /** @param string */
  public function setLun($lun)
  {
    $this->lun = $lun;
  }
  /** @return string */
  public function getLun()
  {
    return $this->lun;
  }
  /** @param bool */
  public function setSkipReboot($skipReboot)
  {
    $this->skipReboot = $skipReboot;
  }
  /** @return bool */
  public function getSkipReboot()
  {
    return $this->skipReboot;
  }
}

class DisableInteractiveSerialConsoleRequest extends \Google\Model
{
}

class EnableInteractiveSerialConsoleRequest extends \Google\Model
{
}

class FetchInstanceProvisioningSettingsResponse extends \Google\Collection
{
  /** @var OSImage[] */
  public $images;
  protected $collection_key = 'images';
  protected $imagesType = OSImage::class;
  protected $imagesDataType = 'array';
  /** @param OSImage[] */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /** @return OSImage[] */
  public function getImages()
  {
    return $this->images;
  }
}

class GoogleCloudBaremetalsolutionV2LogicalInterface extends \Google\Collection
{
  /** @var int */
  public $interfaceIndex;
  /** @var LogicalNetworkInterface[] */
  public $logicalNetworkInterfaces;
  /** @var string */
  public $name;
  protected $collection_key = 'logicalNetworkInterfaces';
  protected $logicalNetworkInterfacesType = LogicalNetworkInterface::class;
  protected $logicalNetworkInterfacesDataType = 'array';
  /** @param int */
  public function setInterfaceIndex($interfaceIndex)
  {
    $this->interfaceIndex = $interfaceIndex;
  }
  /** @return int */
  public function getInterfaceIndex()
  {
    return $this->interfaceIndex;
  }
  /** @param LogicalNetworkInterface[] */
  public function setLogicalNetworkInterfaces($logicalNetworkInterfaces)
  {
    $this->logicalNetworkInterfaces = $logicalNetworkInterfaces;
  }
  /** @return LogicalNetworkInterface[] */
  public function getLogicalNetworkInterfaces()
  {
    return $this->logicalNetworkInterfaces;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
}

class GoogleCloudBaremetalsolutionV2ServerNetworkTemplateLogicalInterface extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var bool */
  public $required;
  /** @var string */
  public $type;

  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param bool */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /** @return bool */
  public function getRequired()
  {
    return $this->required;
  }
  /** @param string */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
}

class Instance extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var bool */
  public $hyperthreadingEnabled;
  /** @var string */
  public $id;
  /** @var bool */
  public $interactiveSerialConsoleEnabled;
  /** @var string[] */
  public $labels;
  /** @var GoogleCloudBaremetalsolutionV2LogicalInterface[] */
  public $logicalInterfaces;
  /** @var string */
  public $loginInfo;
  /** @var Lun[] */
  public $luns;
  /** @var string */
  public $machineType;
  /** @var string */
  public $name;
  /** @var string */
  public $networkTemplate;
  /** @var Network[] */
  public $networks;
  /** @var string */
  public $osImage;
  /** @var string */
  public $pod;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  /** @var Volume[] */
  public $volumes;
  protected $collection_key = 'volumes';
  protected $logicalInterfacesType = GoogleCloudBaremetalsolutionV2LogicalInterface::class;
  protected $logicalInterfacesDataType = 'array';
  protected $lunsType = Lun::class;
  protected $lunsDataType = 'array';
  protected $networksType = Network::class;
  protected $networksDataType = 'array';
  protected $volumesType = Volume::class;
  protected $volumesDataType = 'array';
  /** @param string */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /** @return string */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /** @param bool */
  public function setHyperthreadingEnabled($hyperthreadingEnabled)
  {
    $this->hyperthreadingEnabled = $hyperthreadingEnabled;
  }
  /** @return bool */
  public function getHyperthreadingEnabled()
  {
    return $this->hyperthreadingEnabled;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param bool */
  public function setInteractiveSerialConsoleEnabled($interactiveSerialConsoleEnabled)
  {
    $this->interactiveSerialConsoleEnabled = $interactiveSerialConsoleEnabled;
  }
  /** @return bool */
  public function getInteractiveSerialConsoleEnabled()
  {
    return $this->interactiveSerialConsoleEnabled;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param GoogleCloudBaremetalsolutionV2LogicalInterface[] */
  public function setLogicalInterfaces($logicalInterfaces)
  {
    $this->logicalInterfaces = $logicalInterfaces;
  }
  /** @return GoogleCloudBaremetalsolutionV2LogicalInterface[] */
  public function getLogicalInterfaces()
  {
    return $this->logicalInterfaces;
  }
  /** @param string */
  public function setLoginInfo($loginInfo)
  {
    $this->loginInfo = $loginInfo;
  }
  /** @return string */
  public function getLoginInfo()
  {
    return $this->loginInfo;
  }
  /** @param Lun[] */
  public function setLuns($luns)
  {
    $this->luns = $luns;
  }
  /** @return Lun[] */
  public function getLuns()
  {
    return $this->luns;
  }
  /** @param string */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setNetworkTemplate($networkTemplate)
  {
    $this->networkTemplate = $networkTemplate;
  }
  /** @return string */
  public function getNetworkTemplate()
  {
    return $this->networkTemplate;
  }
  /** @param Network[] */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /** @return Network[] */
  public function getNetworks()
  {
    return $this->networks;
  }
  /** @param string */
  public function setOsImage($osImage)
  {
    $this->osImage = $osImage;
  }
  /** @return string */
  public function getOsImage()
  {
    return $this->osImage;
  }
  /** @param string */
  public function setPod($pod)
  {
    $this->pod = $pod;
  }
  /** @return string */
  public function getPod()
  {
    return $this->pod;
  }
  /** @param string */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param string */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /** @param Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
}

class InstanceConfig extends \Google\Collection
{
  /** @var bool */
  public $accountNetworksEnabled;
  /** @var NetworkAddress */
  public $clientNetwork;
  /** @var bool */
  public $hyperthreading;
  /** @var string */
  public $id;
  /** @var string */
  public $instanceType;
  /** @var GoogleCloudBaremetalsolutionV2LogicalInterface[] */
  public $logicalInterfaces;
  /** @var string */
  public $name;
  /** @var string */
  public $networkConfig;
  /** @var string */
  public $networkTemplate;
  /** @var string */
  public $osImage;
  /** @var NetworkAddress */
  public $privateNetwork;
  /** @var string */
  public $userNote;
  protected $collection_key = 'logicalInterfaces';
  protected $clientNetworkType = NetworkAddress::class;
  protected $clientNetworkDataType = '';
  protected $logicalInterfacesType = GoogleCloudBaremetalsolutionV2LogicalInterface::class;
  protected $logicalInterfacesDataType = 'array';
  protected $privateNetworkType = NetworkAddress::class;
  protected $privateNetworkDataType = '';
  /** @param bool */
  public function setAccountNetworksEnabled($accountNetworksEnabled)
  {
    $this->accountNetworksEnabled = $accountNetworksEnabled;
  }
  /** @return bool */
  public function getAccountNetworksEnabled()
  {
    return $this->accountNetworksEnabled;
  }
  /** @param NetworkAddress */
  public function setClientNetwork(NetworkAddress $clientNetwork)
  {
    $this->clientNetwork = $clientNetwork;
  }
  /** @return NetworkAddress */
  public function getClientNetwork()
  {
    return $this->clientNetwork;
  }
  /** @param bool */
  public function setHyperthreading($hyperthreading)
  {
    $this->hyperthreading = $hyperthreading;
  }
  /** @return bool */
  public function getHyperthreading()
  {
    return $this->hyperthreading;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param string */
  public function setInstanceType($instanceType)
  {
    $this->instanceType = $instanceType;
  }
  /** @return string */
  public function getInstanceType()
  {
    return $this->instanceType;
  }
  /** @param GoogleCloudBaremetalsolutionV2LogicalInterface[] */
  public function setLogicalInterfaces($logicalInterfaces)
  {
    $this->logicalInterfaces = $logicalInterfaces;
  }
  /** @return GoogleCloudBaremetalsolutionV2LogicalInterface[] */
  public function getLogicalInterfaces()
  {
    return $this->logicalInterfaces;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setNetworkConfig($networkConfig)
  {
    $this->networkConfig = $networkConfig;
  }
  /** @return string */
  public function getNetworkConfig()
  {
    return $this->networkConfig;
  }
  /** @param string */
  public function setNetworkTemplate($networkTemplate)
  {
    $this->networkTemplate = $networkTemplate;
  }
  /** @return string */
  public function getNetworkTemplate()
  {
    return $this->networkTemplate;
  }
  /** @param string */
  public function setOsImage($osImage)
  {
    $this->osImage = $osImage;
  }
  /** @return string */
  public function getOsImage()
  {
    return $this->osImage;
  }
  /** @param NetworkAddress */
  public function setPrivateNetwork(NetworkAddress $privateNetwork)
  {
    $this->privateNetwork = $privateNetwork;
  }
  /** @return NetworkAddress */
  public function getPrivateNetwork()
  {
    return $this->privateNetwork;
  }
  /** @param string */
  public function setUserNote($userNote)
  {
    $this->userNote = $userNote;
  }
  /** @return string */
  public function getUserNote()
  {
    return $this->userNote;
  }
}

class InstanceQuota extends \Google\Model
{
  /** @var int */
  public $availableMachineCount;
  /** @var string */
  public $gcpService;
  /** @var string */
  public $instanceType;
  /** @var string */
  public $location;
  /** @var string */
  public $name;

  /** @param int */
  public function setAvailableMachineCount($availableMachineCount)
  {
    $this->availableMachineCount = $availableMachineCount;
  }
  /** @return int */
  public function getAvailableMachineCount()
  {
    return $this->availableMachineCount;
  }
  /** @param string */
  public function setGcpService($gcpService)
  {
    $this->gcpService = $gcpService;
  }
  /** @return string */
  public function getGcpService()
  {
    return $this->gcpService;
  }
  /** @param string */
  public function setInstanceType($instanceType)
  {
    $this->instanceType = $instanceType;
  }
  /** @return string */
  public function getInstanceType()
  {
    return $this->instanceType;
  }
  /** @param string */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
}

class IntakeVlanAttachment extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $pairingKey;

  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param string */
  public function setPairingKey($pairingKey)
  {
    $this->pairingKey = $pairingKey;
  }
  /** @return string */
  public function getPairingKey()
  {
    return $this->pairingKey;
  }
}

class ListInstancesResponse extends \Google\Collection
{
  /** @var Instance[] */
  public $instances;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $instancesType = Instance::class;
  protected $instancesDataType = 'array';
  /** @param Instance[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return Instance[] */
  public function getInstances()
  {
    return $this->instances;
  }
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListLocationsResponse extends \Google\Collection
{
  /** @var Location[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = Location::class;
  protected $locationsDataType = 'array';
  /** @param Location[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return Location[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class ListLunsResponse extends \Google\Collection
{
  /** @var Lun[] */
  public $luns;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $lunsType = Lun::class;
  protected $lunsDataType = 'array';
  /** @param Lun[] */
  public function setLuns($luns)
  {
    $this->luns = $luns;
  }
  /** @return Lun[] */
  public function getLuns()
  {
    return $this->luns;
  }
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListNetworkUsageResponse extends \Google\Collection
{
  /** @var NetworkUsage[] */
  public $networks;
  protected $collection_key = 'networks';
  protected $networksType = NetworkUsage::class;
  protected $networksDataType = 'array';
  /** @param NetworkUsage[] */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /** @return NetworkUsage[] */
  public function getNetworks()
  {
    return $this->networks;
  }
}

class ListNetworksResponse extends \Google\Collection
{
  /** @var Network[] */
  public $networks;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $networksType = Network::class;
  protected $networksDataType = 'array';
  /** @param Network[] */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /** @return Network[] */
  public function getNetworks()
  {
    return $this->networks;
  }
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListNfsSharesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var NfsShare[] */
  public $nfsShares;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $nfsSharesType = NfsShare::class;
  protected $nfsSharesDataType = 'array';
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param NfsShare[] */
  public function setNfsShares($nfsShares)
  {
    $this->nfsShares = $nfsShares;
  }
  /** @return NfsShare[] */
  public function getNfsShares()
  {
    return $this->nfsShares;
  }
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

class ListProvisioningQuotasResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ProvisioningQuota[] */
  public $provisioningQuotas;
  protected $collection_key = 'provisioningQuotas';
  protected $provisioningQuotasType = ProvisioningQuota::class;
  protected $provisioningQuotasDataType = 'array';
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param ProvisioningQuota[] */
  public function setProvisioningQuotas($provisioningQuotas)
  {
    $this->provisioningQuotas = $provisioningQuotas;
  }
  /** @return ProvisioningQuota[] */
  public function getProvisioningQuotas()
  {
    return $this->provisioningQuotas;
  }
}

class ListSSHKeysResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var SSHKey[] */
  public $sshKeys;
  protected $collection_key = 'sshKeys';
  protected $sshKeysType = SSHKey::class;
  protected $sshKeysDataType = 'array';
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param SSHKey[] */
  public function setSshKeys($sshKeys)
  {
    $this->sshKeys = $sshKeys;
  }
  /** @return SSHKey[] */
  public function getSshKeys()
  {
    return $this->sshKeys;
  }
}

class ListVolumeSnapshotsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  /** @var VolumeSnapshot[] */
  public $volumeSnapshots;
  protected $collection_key = 'volumeSnapshots';
  protected $volumeSnapshotsType = VolumeSnapshot::class;
  protected $volumeSnapshotsDataType = 'array';
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
  /** @param VolumeSnapshot[] */
  public function setVolumeSnapshots($volumeSnapshots)
  {
    $this->volumeSnapshots = $volumeSnapshots;
  }
  /** @return VolumeSnapshot[] */
  public function getVolumeSnapshots()
  {
    return $this->volumeSnapshots;
  }
}

class ListVolumesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  /** @var Volume[] */
  public $volumes;
  protected $collection_key = 'volumes';
  protected $volumesType = Volume::class;
  protected $volumesDataType = 'array';
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
  /** @param Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
}

class Location extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $locationId;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;

  /** @param string */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
  /** @param array[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return array[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
}

class LogicalNetworkInterface extends \Google\Model
{
  /** @var bool */
  public $defaultGateway;
  /** @var string */
  public $id;
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $network;
  /** @var string */
  public $networkType;

  /** @param bool */
  public function setDefaultGateway($defaultGateway)
  {
    $this->defaultGateway = $defaultGateway;
  }
  /** @return bool */
  public function getDefaultGateway()
  {
    return $this->defaultGateway;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param string */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /** @return string */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /** @param string */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param string */
  public function setNetworkType($networkType)
  {
    $this->networkType = $networkType;
  }
  /** @return string */
  public function getNetworkType()
  {
    return $this->networkType;
  }
}

class Lun extends \Google\Model
{
  /** @var bool */
  public $bootLun;
  /** @var string */
  public $id;
  /** @var string */
  public $multiprotocolType;
  /** @var string */
  public $name;
  /** @var bool */
  public $shareable;
  /** @var string */
  public $sizeGb;
  /** @var string */
  public $state;
  /** @var string */
  public $storageType;
  /** @var string */
  public $storageVolume;
  /** @var string */
  public $wwid;

  /** @param bool */
  public function setBootLun($bootLun)
  {
    $this->bootLun = $bootLun;
  }
  /** @return bool */
  public function getBootLun()
  {
    return $this->bootLun;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param string */
  public function setMultiprotocolType($multiprotocolType)
  {
    $this->multiprotocolType = $multiprotocolType;
  }
  /** @return string */
  public function getMultiprotocolType()
  {
    return $this->multiprotocolType;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param bool */
  public function setShareable($shareable)
  {
    $this->shareable = $shareable;
  }
  /** @return bool */
  public function getShareable()
  {
    return $this->shareable;
  }
  /** @param string */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /** @return string */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
  /** @param string */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param string */
  public function setStorageType($storageType)
  {
    $this->storageType = $storageType;
  }
  /** @return string */
  public function getStorageType()
  {
    return $this->storageType;
  }
  /** @param string */
  public function setStorageVolume($storageVolume)
  {
    $this->storageVolume = $storageVolume;
  }
  /** @return string */
  public function getStorageVolume()
  {
    return $this->storageVolume;
  }
  /** @param string */
  public function setWwid($wwid)
  {
    $this->wwid = $wwid;
  }
  /** @return string */
  public function getWwid()
  {
    return $this->wwid;
  }
}

class LunRange extends \Google\Model
{
  /** @var int */
  public $quantity;
  /** @var int */
  public $sizeGb;

  /** @param int */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return int */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /** @param int */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /** @return int */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
}

class Network extends \Google\Collection
{
  /** @var string */
  public $cidr;
  /** @var string */
  public $gatewayIp;
  /** @var string */
  public $id;
  /** @var string */
  public $ipAddress;
  /** @var bool */
  public $jumboFramesEnabled;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $macAddress;
  /** @var NetworkMountPoint[] */
  public $mountPoints;
  /** @var string */
  public $name;
  /** @var string */
  public $pod;
  /** @var NetworkAddressReservation[] */
  public $reservations;
  /** @var string */
  public $servicesCidr;
  /** @var string */
  public $state;
  /** @var string */
  public $type;
  /** @var string */
  public $vlanId;
  /** @var VRF */
  public $vrf;
  protected $collection_key = 'reservations';
  protected $mountPointsType = NetworkMountPoint::class;
  protected $mountPointsDataType = 'array';
  protected $reservationsType = NetworkAddressReservation::class;
  protected $reservationsDataType = 'array';
  protected $vrfType = VRF::class;
  protected $vrfDataType = '';
  /** @param string */
  public function setCidr($cidr)
  {
    $this->cidr = $cidr;
  }
  /** @return string */
  public function getCidr()
  {
    return $this->cidr;
  }
  /** @param string */
  public function setGatewayIp($gatewayIp)
  {
    $this->gatewayIp = $gatewayIp;
  }
  /** @return string */
  public function getGatewayIp()
  {
    return $this->gatewayIp;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param string */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /** @return string */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /** @param bool */
  public function setJumboFramesEnabled($jumboFramesEnabled)
  {
    $this->jumboFramesEnabled = $jumboFramesEnabled;
  }
  /** @return bool */
  public function getJumboFramesEnabled()
  {
    return $this->jumboFramesEnabled;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string[] */
  public function setMacAddress($macAddress)
  {
    $this->macAddress = $macAddress;
  }
  /** @return string[] */
  public function getMacAddress()
  {
    return $this->macAddress;
  }
  /** @param NetworkMountPoint[] */
  public function setMountPoints($mountPoints)
  {
    $this->mountPoints = $mountPoints;
  }
  /** @return NetworkMountPoint[] */
  public function getMountPoints()
  {
    return $this->mountPoints;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setPod($pod)
  {
    $this->pod = $pod;
  }
  /** @return string */
  public function getPod()
  {
    return $this->pod;
  }
  /** @param NetworkAddressReservation[] */
  public function setReservations($reservations)
  {
    $this->reservations = $reservations;
  }
  /** @return NetworkAddressReservation[] */
  public function getReservations()
  {
    return $this->reservations;
  }
  /** @param string */
  public function setServicesCidr($servicesCidr)
  {
    $this->servicesCidr = $servicesCidr;
  }
  /** @return string */
  public function getServicesCidr()
  {
    return $this->servicesCidr;
  }
  /** @param string */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param string */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
  /** @param string */
  public function setVlanId($vlanId)
  {
    $this->vlanId = $vlanId;
  }
  /** @return string */
  public function getVlanId()
  {
    return $this->vlanId;
  }
  /** @param VRF */
  public function setVrf(VRF $vrf)
  {
    $this->vrf = $vrf;
  }
  /** @return VRF */
  public function getVrf()
  {
    return $this->vrf;
  }
}

class NetworkAddress extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string */
  public $existingNetworkId;
  /** @var string */
  public $networkId;

  /** @param string */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /** @return string */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param string */
  public function setExistingNetworkId($existingNetworkId)
  {
    $this->existingNetworkId = $existingNetworkId;
  }
  /** @return string */
  public function getExistingNetworkId()
  {
    return $this->existingNetworkId;
  }
  /** @param string */
  public function setNetworkId($networkId)
  {
    $this->networkId = $networkId;
  }
  /** @return string */
  public function getNetworkId()
  {
    return $this->networkId;
  }
}

class NetworkAddressReservation extends \Google\Model
{
  /** @var string */
  public $endAddress;
  /** @var string */
  public $note;
  /** @var string */
  public $startAddress;

  /** @param string */
  public function setEndAddress($endAddress)
  {
    $this->endAddress = $endAddress;
  }
  /** @return string */
  public function getEndAddress()
  {
    return $this->endAddress;
  }
  /** @param string */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /** @return string */
  public function getNote()
  {
    return $this->note;
  }
  /** @param string */
  public function setStartAddress($startAddress)
  {
    $this->startAddress = $startAddress;
  }
  /** @return string */
  public function getStartAddress()
  {
    return $this->startAddress;
  }
}

class NetworkConfig extends \Google\Collection
{
  /** @var string */
  public $bandwidth;
  /** @var string */
  public $cidr;
  /** @var string */
  public $gcpService;
  /** @var string */
  public $id;
  /** @var bool */
  public $jumboFramesEnabled;
  /** @var string */
  public $name;
  /** @var string */
  public $serviceCidr;
  /** @var string */
  public $type;
  /** @var string */
  public $userNote;
  /** @var IntakeVlanAttachment[] */
  public $vlanAttachments;
  /** @var bool */
  public $vlanSameProject;
  protected $collection_key = 'vlanAttachments';
  protected $vlanAttachmentsType = IntakeVlanAttachment::class;
  protected $vlanAttachmentsDataType = 'array';
  /** @param string */
  public function setBandwidth($bandwidth)
  {
    $this->bandwidth = $bandwidth;
  }
  /** @return string */
  public function getBandwidth()
  {
    return $this->bandwidth;
  }
  /** @param string */
  public function setCidr($cidr)
  {
    $this->cidr = $cidr;
  }
  /** @return string */
  public function getCidr()
  {
    return $this->cidr;
  }
  /** @param string */
  public function setGcpService($gcpService)
  {
    $this->gcpService = $gcpService;
  }
  /** @return string */
  public function getGcpService()
  {
    return $this->gcpService;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param bool */
  public function setJumboFramesEnabled($jumboFramesEnabled)
  {
    $this->jumboFramesEnabled = $jumboFramesEnabled;
  }
  /** @return bool */
  public function getJumboFramesEnabled()
  {
    return $this->jumboFramesEnabled;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setServiceCidr($serviceCidr)
  {
    $this->serviceCidr = $serviceCidr;
  }
  /** @return string */
  public function getServiceCidr()
  {
    return $this->serviceCidr;
  }
  /** @param string */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
  /** @param string */
  public function setUserNote($userNote)
  {
    $this->userNote = $userNote;
  }
  /** @return string */
  public function getUserNote()
  {
    return $this->userNote;
  }
  /** @param IntakeVlanAttachment[] */
  public function setVlanAttachments($vlanAttachments)
  {
    $this->vlanAttachments = $vlanAttachments;
  }
  /** @return IntakeVlanAttachment[] */
  public function getVlanAttachments()
  {
    return $this->vlanAttachments;
  }
  /** @param bool */
  public function setVlanSameProject($vlanSameProject)
  {
    $this->vlanSameProject = $vlanSameProject;
  }
  /** @return bool */
  public function getVlanSameProject()
  {
    return $this->vlanSameProject;
  }
}

class NetworkMountPoint extends \Google\Model
{
  /** @var bool */
  public $defaultGateway;
  /** @var string */
  public $instance;
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $logicalInterface;

  /** @param bool */
  public function setDefaultGateway($defaultGateway)
  {
    $this->defaultGateway = $defaultGateway;
  }
  /** @return bool */
  public function getDefaultGateway()
  {
    return $this->defaultGateway;
  }
  /** @param string */
  public function setInstance($instance)
  {
    $this->instance = $instance;
  }
  /** @return string */
  public function getInstance()
  {
    return $this->instance;
  }
  /** @param string */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /** @return string */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /** @param string */
  public function setLogicalInterface($logicalInterface)
  {
    $this->logicalInterface = $logicalInterface;
  }
  /** @return string */
  public function getLogicalInterface()
  {
    return $this->logicalInterface;
  }
}

class NetworkUsage extends \Google\Collection
{
  /** @var Network */
  public $network;
  /** @var string[] */
  public $usedIps;
  protected $collection_key = 'usedIps';
  protected $networkType = Network::class;
  protected $networkDataType = '';
  /** @param Network */
  public function setNetwork(Network $network)
  {
    $this->network = $network;
  }
  /** @return Network */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param string[] */
  public function setUsedIps($usedIps)
  {
    $this->usedIps = $usedIps;
  }
  /** @return string[] */
  public function getUsedIps()
  {
    return $this->usedIps;
  }
}

class NfsExport extends \Google\Model
{
  /** @var bool */
  public $allowDev;
  /** @var bool */
  public $allowSuid;
  /** @var string */
  public $cidr;
  /** @var string */
  public $machineId;
  /** @var string */
  public $networkId;
  /** @var bool */
  public $noRootSquash;
  /** @var string */
  public $permissions;

  /** @param bool */
  public function setAllowDev($allowDev)
  {
    $this->allowDev = $allowDev;
  }
  /** @return bool */
  public function getAllowDev()
  {
    return $this->allowDev;
  }
  /** @param bool */
  public function setAllowSuid($allowSuid)
  {
    $this->allowSuid = $allowSuid;
  }
  /** @return bool */
  public function getAllowSuid()
  {
    return $this->allowSuid;
  }
  /** @param string */
  public function setCidr($cidr)
  {
    $this->cidr = $cidr;
  }
  /** @return string */
  public function getCidr()
  {
    return $this->cidr;
  }
  /** @param string */
  public function setMachineId($machineId)
  {
    $this->machineId = $machineId;
  }
  /** @return string */
  public function getMachineId()
  {
    return $this->machineId;
  }
  /** @param string */
  public function setNetworkId($networkId)
  {
    $this->networkId = $networkId;
  }
  /** @return string */
  public function getNetworkId()
  {
    return $this->networkId;
  }
  /** @param bool */
  public function setNoRootSquash($noRootSquash)
  {
    $this->noRootSquash = $noRootSquash;
  }
  /** @return bool */
  public function getNoRootSquash()
  {
    return $this->noRootSquash;
  }
  /** @param string */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class NfsShare extends \Google\Collection
{
  /** @var AllowedClient[] */
  public $allowedClients;
  /** @var string */
  public $id;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $nfsShareId;
  /** @var string */
  public $requestedSizeGib;
  /** @var string */
  public $state;
  /** @var string */
  public $storageType;
  /** @var string */
  public $volume;
  protected $collection_key = 'allowedClients';
  protected $allowedClientsType = AllowedClient::class;
  protected $allowedClientsDataType = 'array';
  /** @param AllowedClient[] */
  public function setAllowedClients($allowedClients)
  {
    $this->allowedClients = $allowedClients;
  }
  /** @return AllowedClient[] */
  public function getAllowedClients()
  {
    return $this->allowedClients;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setNfsShareId($nfsShareId)
  {
    $this->nfsShareId = $nfsShareId;
  }
  /** @return string */
  public function getNfsShareId()
  {
    return $this->nfsShareId;
  }
  /** @param string */
  public function setRequestedSizeGib($requestedSizeGib)
  {
    $this->requestedSizeGib = $requestedSizeGib;
  }
  /** @return string */
  public function getRequestedSizeGib()
  {
    return $this->requestedSizeGib;
  }
  /** @param string */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param string */
  public function setStorageType($storageType)
  {
    $this->storageType = $storageType;
  }
  /** @return string */
  public function getStorageType()
  {
    return $this->storageType;
  }
  /** @param string */
  public function setVolume($volume)
  {
    $this->volume = $volume;
  }
  /** @return string */
  public function getVolume()
  {
    return $this->volume;
  }
}

class OSImage extends \Google\Collection
{
  /** @var string[] */
  public $applicableInstanceTypes;
  /** @var string */
  public $code;
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var ServerNetworkTemplate[] */
  public $supportedNetworkTemplates;
  protected $collection_key = 'supportedNetworkTemplates';
  protected $supportedNetworkTemplatesType = ServerNetworkTemplate::class;
  protected $supportedNetworkTemplatesDataType = 'array';
  /** @param string[] */
  public function setApplicableInstanceTypes($applicableInstanceTypes)
  {
    $this->applicableInstanceTypes = $applicableInstanceTypes;
  }
  /** @return string[] */
  public function getApplicableInstanceTypes()
  {
    return $this->applicableInstanceTypes;
  }
  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
  /** @param string */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param ServerNetworkTemplate[] */
  public function setSupportedNetworkTemplates($supportedNetworkTemplates)
  {
    $this->supportedNetworkTemplates = $supportedNetworkTemplates;
  }
  /** @return ServerNetworkTemplate[] */
  public function getSupportedNetworkTemplates()
  {
    return $this->supportedNetworkTemplates;
  }
}

class Operation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var Status */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /** @param bool */
  public function setDone($done)
  {
    $this->done = $done;
  }
  /** @return bool */
  public function getDone()
  {
    return $this->done;
  }
  /** @param Status */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /** @return Status */
  public function getError()
  {
    return $this->error;
  }
  /** @param array[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return array[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param array[] */
  public function setResponse($response)
  {
    $this->response = $response;
  }
  /** @return array[] */
  public function getResponse()
  {
    return $this->response;
  }
}

class OperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
  }
  /** @param string */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /** @return string */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /** @param string */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class ProvisioningConfig extends \Google\Collection
{
  /** @var string */
  public $cloudConsoleUri;
  /** @var string */
  public $customId;
  /** @var string */
  public $email;
  /** @var string */
  public $handoverServiceAccount;
  /** @var InstanceConfig[] */
  public $instances;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var NetworkConfig[] */
  public $networks;
  /** @var string */
  public $state;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $ticketId;
  /** @var string */
  public $updateTime;
  /** @var VolumeConfig[] */
  public $volumes;
  /** @var bool */
  public $vpcScEnabled;
  protected $collection_key = 'volumes';
  protected $instancesType = InstanceConfig::class;
  protected $instancesDataType = 'array';
  protected $networksType = NetworkConfig::class;
  protected $networksDataType = 'array';
  protected $volumesType = VolumeConfig::class;
  protected $volumesDataType = 'array';
  /** @param string */
  public function setCloudConsoleUri($cloudConsoleUri)
  {
    $this->cloudConsoleUri = $cloudConsoleUri;
  }
  /** @return string */
  public function getCloudConsoleUri()
  {
    return $this->cloudConsoleUri;
  }
  /** @param string */
  public function setCustomId($customId)
  {
    $this->customId = $customId;
  }
  /** @return string */
  public function getCustomId()
  {
    return $this->customId;
  }
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setHandoverServiceAccount($handoverServiceAccount)
  {
    $this->handoverServiceAccount = $handoverServiceAccount;
  }
  /** @return string */
  public function getHandoverServiceAccount()
  {
    return $this->handoverServiceAccount;
  }
  /** @param InstanceConfig[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return InstanceConfig[] */
  public function getInstances()
  {
    return $this->instances;
  }
  /** @param string */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param NetworkConfig[] */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /** @return NetworkConfig[] */
  public function getNetworks()
  {
    return $this->networks;
  }
  /** @param string */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTicketId($ticketId)
  {
    $this->ticketId = $ticketId;
  }
  /** @return string */
  public function getTicketId()
  {
    return $this->ticketId;
  }
  /** @param string */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /** @param VolumeConfig[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return VolumeConfig[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
  /** @param bool */
  public function setVpcScEnabled($vpcScEnabled)
  {
    $this->vpcScEnabled = $vpcScEnabled;
  }
  /** @return bool */
  public function getVpcScEnabled()
  {
    return $this->vpcScEnabled;
  }
}

class ProvisioningQuota extends \Google\Model
{
  /** @var string */
  public $assetType;
  /** @var int */
  public $availableCount;
  /** @var string */
  public $gcpService;
  /** @var InstanceQuota */
  public $instanceQuota;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $networkBandwidth;
  /** @var string */
  public $serverCount;
  /** @var string */
  public $storageGib;
  protected $instanceQuotaType = InstanceQuota::class;
  protected $instanceQuotaDataType = '';
  /** @param string */
  public function setAssetType($assetType)
  {
    $this->assetType = $assetType;
  }
  /** @return string */
  public function getAssetType()
  {
    return $this->assetType;
  }
  /** @param int */
  public function setAvailableCount($availableCount)
  {
    $this->availableCount = $availableCount;
  }
  /** @return int */
  public function getAvailableCount()
  {
    return $this->availableCount;
  }
  /** @param string */
  public function setGcpService($gcpService)
  {
    $this->gcpService = $gcpService;
  }
  /** @return string */
  public function getGcpService()
  {
    return $this->gcpService;
  }
  /** @param InstanceQuota */
  public function setInstanceQuota(InstanceQuota $instanceQuota)
  {
    $this->instanceQuota = $instanceQuota;
  }
  /** @return InstanceQuota */
  public function getInstanceQuota()
  {
    return $this->instanceQuota;
  }
  /** @param string */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setNetworkBandwidth($networkBandwidth)
  {
    $this->networkBandwidth = $networkBandwidth;
  }
  /** @return string */
  public function getNetworkBandwidth()
  {
    return $this->networkBandwidth;
  }
  /** @param string */
  public function setServerCount($serverCount)
  {
    $this->serverCount = $serverCount;
  }
  /** @return string */
  public function getServerCount()
  {
    return $this->serverCount;
  }
  /** @param string */
  public function setStorageGib($storageGib)
  {
    $this->storageGib = $storageGib;
  }
  /** @return string */
  public function getStorageGib()
  {
    return $this->storageGib;
  }
}

class QosPolicy extends \Google\Model
{
  public $bandwidthGbps;

  public function setBandwidthGbps($bandwidthGbps)
  {
    $this->bandwidthGbps = $bandwidthGbps;
  }
  public function getBandwidthGbps()
  {
    return $this->bandwidthGbps;
  }
}

class ResetInstanceRequest extends \Google\Model
{
}

class ResizeVolumeRequest extends \Google\Model
{
  /** @var string */
  public $sizeGib;

  /** @param string */
  public function setSizeGib($sizeGib)
  {
    $this->sizeGib = $sizeGib;
  }
  /** @return string */
  public function getSizeGib()
  {
    return $this->sizeGib;
  }
}

class RestoreVolumeSnapshotRequest extends \Google\Model
{
}

class SSHKey extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $publicKey;

  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setPublicKey($publicKey)
  {
    $this->publicKey = $publicKey;
  }
  /** @return string */
  public function getPublicKey()
  {
    return $this->publicKey;
  }
}

class ServerNetworkTemplate extends \Google\Collection
{
  /** @var string[] */
  public $applicableInstanceTypes;
  /** @var GoogleCloudBaremetalsolutionV2ServerNetworkTemplateLogicalInterface[] */
  public $logicalInterfaces;
  /** @var string */
  public $name;
  protected $collection_key = 'logicalInterfaces';
  protected $logicalInterfacesType = GoogleCloudBaremetalsolutionV2ServerNetworkTemplateLogicalInterface::class;
  protected $logicalInterfacesDataType = 'array';
  /** @param string[] */
  public function setApplicableInstanceTypes($applicableInstanceTypes)
  {
    $this->applicableInstanceTypes = $applicableInstanceTypes;
  }
  /** @return string[] */
  public function getApplicableInstanceTypes()
  {
    return $this->applicableInstanceTypes;
  }
  /** @param GoogleCloudBaremetalsolutionV2ServerNetworkTemplateLogicalInterface[] */
  public function setLogicalInterfaces($logicalInterfaces)
  {
    $this->logicalInterfaces = $logicalInterfaces;
  }
  /** @return GoogleCloudBaremetalsolutionV2ServerNetworkTemplateLogicalInterface[] */
  public function getLogicalInterfaces()
  {
    return $this->logicalInterfaces;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
}

class SnapshotReservationDetail extends \Google\Model
{
  /** @var string */
  public $reservedSpaceGib;
  /** @var int */
  public $reservedSpacePercent;
  /** @var string */
  public $reservedSpaceRemainingGib;
  /** @var int */
  public $reservedSpaceUsedPercent;

  /** @param string */
  public function setReservedSpaceGib($reservedSpaceGib)
  {
    $this->reservedSpaceGib = $reservedSpaceGib;
  }
  /** @return string */
  public function getReservedSpaceGib()
  {
    return $this->reservedSpaceGib;
  }
  /** @param int */
  public function setReservedSpacePercent($reservedSpacePercent)
  {
    $this->reservedSpacePercent = $reservedSpacePercent;
  }
  /** @return int */
  public function getReservedSpacePercent()
  {
    return $this->reservedSpacePercent;
  }
  /** @param string */
  public function setReservedSpaceRemainingGib($reservedSpaceRemainingGib)
  {
    $this->reservedSpaceRemainingGib = $reservedSpaceRemainingGib;
  }
  /** @return string */
  public function getReservedSpaceRemainingGib()
  {
    return $this->reservedSpaceRemainingGib;
  }
  /** @param int */
  public function setReservedSpaceUsedPercent($reservedSpaceUsedPercent)
  {
    $this->reservedSpaceUsedPercent = $reservedSpaceUsedPercent;
  }
  /** @return int */
  public function getReservedSpaceUsedPercent()
  {
    return $this->reservedSpaceUsedPercent;
  }
}

class StartInstanceRequest extends \Google\Model
{
}

class Status extends \Google\Collection
{
  /** @var int */
  public $code;
  /** @var array[] */
  public $details;
  /** @var string */
  public $message;
  protected $collection_key = 'details';
  /** @param int */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return int */
  public function getCode()
  {
    return $this->code;
  }
  /** @param array[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return array[] */
  public function getDetails()
  {
    return $this->details;
  }
  /** @param string */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /** @return string */
  public function getMessage()
  {
    return $this->message;
  }
}

class StopInstanceRequest extends \Google\Model
{
}

class SubmitProvisioningConfigRequest extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var ProvisioningConfig */
  public $provisioningConfig;
  protected $provisioningConfigType = ProvisioningConfig::class;
  protected $provisioningConfigDataType = '';
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param ProvisioningConfig */
  public function setProvisioningConfig(ProvisioningConfig $provisioningConfig)
  {
    $this->provisioningConfig = $provisioningConfig;
  }
  /** @return ProvisioningConfig */
  public function getProvisioningConfig()
  {
    return $this->provisioningConfig;
  }
}

class SubmitProvisioningConfigResponse extends \Google\Model
{
  /** @var ProvisioningConfig */
  public $provisioningConfig;
  protected $provisioningConfigType = ProvisioningConfig::class;
  protected $provisioningConfigDataType = '';
  /** @param ProvisioningConfig */
  public function setProvisioningConfig(ProvisioningConfig $provisioningConfig)
  {
    $this->provisioningConfig = $provisioningConfig;
  }
  /** @return ProvisioningConfig */
  public function getProvisioningConfig()
  {
    return $this->provisioningConfig;
  }
}

class VRF extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var QosPolicy */
  public $qosPolicy;
  /** @var string */
  public $state;
  /** @var VlanAttachment[] */
  public $vlanAttachments;
  protected $collection_key = 'vlanAttachments';
  protected $qosPolicyType = QosPolicy::class;
  protected $qosPolicyDataType = '';
  protected $vlanAttachmentsType = VlanAttachment::class;
  protected $vlanAttachmentsDataType = 'array';
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param QosPolicy */
  public function setQosPolicy(QosPolicy $qosPolicy)
  {
    $this->qosPolicy = $qosPolicy;
  }
  /** @return QosPolicy */
  public function getQosPolicy()
  {
    return $this->qosPolicy;
  }
  /** @param string */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param VlanAttachment[] */
  public function setVlanAttachments($vlanAttachments)
  {
    $this->vlanAttachments = $vlanAttachments;
  }
  /** @return VlanAttachment[] */
  public function getVlanAttachments()
  {
    return $this->vlanAttachments;
  }
}

class VlanAttachment extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $pairingKey;
  /** @var string */
  public $peerIp;
  /** @var string */
  public $peerVlanId;
  /** @var QosPolicy */
  public $qosPolicy;
  /** @var string */
  public $routerIp;
  protected $qosPolicyType = QosPolicy::class;
  protected $qosPolicyDataType = '';
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param string */
  public function setPairingKey($pairingKey)
  {
    $this->pairingKey = $pairingKey;
  }
  /** @return string */
  public function getPairingKey()
  {
    return $this->pairingKey;
  }
  /** @param string */
  public function setPeerIp($peerIp)
  {
    $this->peerIp = $peerIp;
  }
  /** @return string */
  public function getPeerIp()
  {
    return $this->peerIp;
  }
  /** @param string */
  public function setPeerVlanId($peerVlanId)
  {
    $this->peerVlanId = $peerVlanId;
  }
  /** @return string */
  public function getPeerVlanId()
  {
    return $this->peerVlanId;
  }
  /** @param QosPolicy */
  public function setQosPolicy(QosPolicy $qosPolicy)
  {
    $this->qosPolicy = $qosPolicy;
  }
  /** @return QosPolicy */
  public function getQosPolicy()
  {
    return $this->qosPolicy;
  }
  /** @param string */
  public function setRouterIp($routerIp)
  {
    $this->routerIp = $routerIp;
  }
  /** @return string */
  public function getRouterIp()
  {
    return $this->routerIp;
  }
}

class Volume extends \Google\Model
{
  /** @var string */
  public $autoGrownSizeGib;
  /** @var bool */
  public $bootVolume;
  /** @var string */
  public $currentSizeGib;
  /** @var string */
  public $emergencySizeGib;
  /** @var string */
  public $id;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $maxSizeGib;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var string */
  public $originallyRequestedSizeGib;
  /** @var string */
  public $performanceTier;
  /** @var string */
  public $pod;
  /** @var string */
  public $protocol;
  /** @var string */
  public $remainingSpaceGib;
  /** @var string */
  public $requestedSizeGib;
  /** @var string */
  public $snapshotAutoDeleteBehavior;
  /** @var bool */
  public $snapshotEnabled;
  /** @var SnapshotReservationDetail */
  public $snapshotReservationDetail;
  /** @var string */
  public $snapshotSchedulePolicy;
  /** @var string */
  public $state;
  /** @var string */
  public $storageType;
  protected $snapshotReservationDetailType = SnapshotReservationDetail::class;
  protected $snapshotReservationDetailDataType = '';
  /** @param string */
  public function setAutoGrownSizeGib($autoGrownSizeGib)
  {
    $this->autoGrownSizeGib = $autoGrownSizeGib;
  }
  /** @return string */
  public function getAutoGrownSizeGib()
  {
    return $this->autoGrownSizeGib;
  }
  /** @param bool */
  public function setBootVolume($bootVolume)
  {
    $this->bootVolume = $bootVolume;
  }
  /** @return bool */
  public function getBootVolume()
  {
    return $this->bootVolume;
  }
  /** @param string */
  public function setCurrentSizeGib($currentSizeGib)
  {
    $this->currentSizeGib = $currentSizeGib;
  }
  /** @return string */
  public function getCurrentSizeGib()
  {
    return $this->currentSizeGib;
  }
  /** @param string */
  public function setEmergencySizeGib($emergencySizeGib)
  {
    $this->emergencySizeGib = $emergencySizeGib;
  }
  /** @return string */
  public function getEmergencySizeGib()
  {
    return $this->emergencySizeGib;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setMaxSizeGib($maxSizeGib)
  {
    $this->maxSizeGib = $maxSizeGib;
  }
  /** @return string */
  public function getMaxSizeGib()
  {
    return $this->maxSizeGib;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param string */
  public function setOriginallyRequestedSizeGib($originallyRequestedSizeGib)
  {
    $this->originallyRequestedSizeGib = $originallyRequestedSizeGib;
  }
  /** @return string */
  public function getOriginallyRequestedSizeGib()
  {
    return $this->originallyRequestedSizeGib;
  }
  /** @param string */
  public function setPerformanceTier($performanceTier)
  {
    $this->performanceTier = $performanceTier;
  }
  /** @return string */
  public function getPerformanceTier()
  {
    return $this->performanceTier;
  }
  /** @param string */
  public function setPod($pod)
  {
    $this->pod = $pod;
  }
  /** @return string */
  public function getPod()
  {
    return $this->pod;
  }
  /** @param string */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /** @return string */
  public function getProtocol()
  {
    return $this->protocol;
  }
  /** @param string */
  public function setRemainingSpaceGib($remainingSpaceGib)
  {
    $this->remainingSpaceGib = $remainingSpaceGib;
  }
  /** @return string */
  public function getRemainingSpaceGib()
  {
    return $this->remainingSpaceGib;
  }
  /** @param string */
  public function setRequestedSizeGib($requestedSizeGib)
  {
    $this->requestedSizeGib = $requestedSizeGib;
  }
  /** @return string */
  public function getRequestedSizeGib()
  {
    return $this->requestedSizeGib;
  }
  /** @param string */
  public function setSnapshotAutoDeleteBehavior($snapshotAutoDeleteBehavior)
  {
    $this->snapshotAutoDeleteBehavior = $snapshotAutoDeleteBehavior;
  }
  /** @return string */
  public function getSnapshotAutoDeleteBehavior()
  {
    return $this->snapshotAutoDeleteBehavior;
  }
  /** @param bool */
  public function setSnapshotEnabled($snapshotEnabled)
  {
    $this->snapshotEnabled = $snapshotEnabled;
  }
  /** @return bool */
  public function getSnapshotEnabled()
  {
    return $this->snapshotEnabled;
  }
  /** @param SnapshotReservationDetail */
  public function setSnapshotReservationDetail(SnapshotReservationDetail $snapshotReservationDetail)
  {
    $this->snapshotReservationDetail = $snapshotReservationDetail;
  }
  /** @return SnapshotReservationDetail */
  public function getSnapshotReservationDetail()
  {
    return $this->snapshotReservationDetail;
  }
  /** @param string */
  public function setSnapshotSchedulePolicy($snapshotSchedulePolicy)
  {
    $this->snapshotSchedulePolicy = $snapshotSchedulePolicy;
  }
  /** @return string */
  public function getSnapshotSchedulePolicy()
  {
    return $this->snapshotSchedulePolicy;
  }
  /** @param string */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param string */
  public function setStorageType($storageType)
  {
    $this->storageType = $storageType;
  }
  /** @return string */
  public function getStorageType()
  {
    return $this->storageType;
  }
}

class VolumeConfig extends \Google\Collection
{
  /** @var string */
  public $gcpService;
  /** @var string */
  public $id;
  /** @var LunRange[] */
  public $lunRanges;
  /** @var string[] */
  public $machineIds;
  /** @var string */
  public $name;
  /** @var NfsExport[] */
  public $nfsExports;
  /** @var string */
  public $performanceTier;
  /** @var string */
  public $protocol;
  /** @var int */
  public $sizeGb;
  /** @var bool */
  public $snapshotsEnabled;
  /** @var string */
  public $type;
  /** @var string */
  public $userNote;
  protected $collection_key = 'nfsExports';
  protected $lunRangesType = LunRange::class;
  protected $lunRangesDataType = 'array';
  protected $nfsExportsType = NfsExport::class;
  protected $nfsExportsDataType = 'array';
  /** @param string */
  public function setGcpService($gcpService)
  {
    $this->gcpService = $gcpService;
  }
  /** @return string */
  public function getGcpService()
  {
    return $this->gcpService;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param LunRange[] */
  public function setLunRanges($lunRanges)
  {
    $this->lunRanges = $lunRanges;
  }
  /** @return LunRange[] */
  public function getLunRanges()
  {
    return $this->lunRanges;
  }
  /** @param string[] */
  public function setMachineIds($machineIds)
  {
    $this->machineIds = $machineIds;
  }
  /** @return string[] */
  public function getMachineIds()
  {
    return $this->machineIds;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param NfsExport[] */
  public function setNfsExports($nfsExports)
  {
    $this->nfsExports = $nfsExports;
  }
  /** @return NfsExport[] */
  public function getNfsExports()
  {
    return $this->nfsExports;
  }
  /** @param string */
  public function setPerformanceTier($performanceTier)
  {
    $this->performanceTier = $performanceTier;
  }
  /** @return string */
  public function getPerformanceTier()
  {
    return $this->performanceTier;
  }
  /** @param string */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /** @return string */
  public function getProtocol()
  {
    return $this->protocol;
  }
  /** @param int */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /** @return int */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
  /** @param bool */
  public function setSnapshotsEnabled($snapshotsEnabled)
  {
    $this->snapshotsEnabled = $snapshotsEnabled;
  }
  /** @return bool */
  public function getSnapshotsEnabled()
  {
    return $this->snapshotsEnabled;
  }
  /** @param string */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
  /** @param string */
  public function setUserNote($userNote)
  {
    $this->userNote = $userNote;
  }
  /** @return string */
  public function getUserNote()
  {
    return $this->userNote;
  }
}

class VolumeSnapshot extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $storageVolume;
  /** @var string */
  public $type;

  /** @param string */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /** @return string */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /** @param string */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setStorageVolume($storageVolume)
  {
    $this->storageVolume = $storageVolume;
  }
  /** @return string */
  public function getStorageVolume()
  {
    return $this->storageVolume;
  }
  /** @param string */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AllowedClient::class, 'Google_Service_Baremetalsolution_AllowedClient');
class_alias(BaremetalsolutionEmpty::class, 'Google_Service_Baremetalsolution_BaremetalsolutionEmpty');
class_alias(DetachLunRequest::class, 'Google_Service_Baremetalsolution_DetachLunRequest');
class_alias(DisableInteractiveSerialConsoleRequest::class, 'Google_Service_Baremetalsolution_DisableInteractiveSerialConsoleRequest');
class_alias(EnableInteractiveSerialConsoleRequest::class, 'Google_Service_Baremetalsolution_EnableInteractiveSerialConsoleRequest');
class_alias(FetchInstanceProvisioningSettingsResponse::class, 'Google_Service_Baremetalsolution_FetchInstanceProvisioningSettingsResponse');
class_alias(GoogleCloudBaremetalsolutionV2LogicalInterface::class, 'Google_Service_Baremetalsolution_GoogleCloudBaremetalsolutionV2LogicalInterface');
class_alias(GoogleCloudBaremetalsolutionV2ServerNetworkTemplateLogicalInterface::class, 'Google_Service_Baremetalsolution_GoogleCloudBaremetalsolutionV2ServerNetworkTemplateLogicalInterface');
class_alias(Instance::class, 'Google_Service_Baremetalsolution_Instance');
class_alias(InstanceConfig::class, 'Google_Service_Baremetalsolution_InstanceConfig');
class_alias(InstanceQuota::class, 'Google_Service_Baremetalsolution_InstanceQuota');
class_alias(IntakeVlanAttachment::class, 'Google_Service_Baremetalsolution_IntakeVlanAttachment');
class_alias(ListInstancesResponse::class, 'Google_Service_Baremetalsolution_ListInstancesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_Baremetalsolution_ListLocationsResponse');
class_alias(ListLunsResponse::class, 'Google_Service_Baremetalsolution_ListLunsResponse');
class_alias(ListNetworkUsageResponse::class, 'Google_Service_Baremetalsolution_ListNetworkUsageResponse');
class_alias(ListNetworksResponse::class, 'Google_Service_Baremetalsolution_ListNetworksResponse');
class_alias(ListNfsSharesResponse::class, 'Google_Service_Baremetalsolution_ListNfsSharesResponse');
class_alias(ListProvisioningQuotasResponse::class, 'Google_Service_Baremetalsolution_ListProvisioningQuotasResponse');
class_alias(ListSSHKeysResponse::class, 'Google_Service_Baremetalsolution_ListSSHKeysResponse');
class_alias(ListVolumeSnapshotsResponse::class, 'Google_Service_Baremetalsolution_ListVolumeSnapshotsResponse');
class_alias(ListVolumesResponse::class, 'Google_Service_Baremetalsolution_ListVolumesResponse');
class_alias(Location::class, 'Google_Service_Baremetalsolution_Location');
class_alias(LogicalNetworkInterface::class, 'Google_Service_Baremetalsolution_LogicalNetworkInterface');
class_alias(Lun::class, 'Google_Service_Baremetalsolution_Lun');
class_alias(LunRange::class, 'Google_Service_Baremetalsolution_LunRange');
class_alias(Network::class, 'Google_Service_Baremetalsolution_Network');
class_alias(NetworkAddress::class, 'Google_Service_Baremetalsolution_NetworkAddress');
class_alias(NetworkAddressReservation::class, 'Google_Service_Baremetalsolution_NetworkAddressReservation');
class_alias(NetworkConfig::class, 'Google_Service_Baremetalsolution_NetworkConfig');
class_alias(NetworkMountPoint::class, 'Google_Service_Baremetalsolution_NetworkMountPoint');
class_alias(NetworkUsage::class, 'Google_Service_Baremetalsolution_NetworkUsage');
class_alias(NfsExport::class, 'Google_Service_Baremetalsolution_NfsExport');
class_alias(NfsShare::class, 'Google_Service_Baremetalsolution_NfsShare');
class_alias(OSImage::class, 'Google_Service_Baremetalsolution_OSImage');
class_alias(Operation::class, 'Google_Service_Baremetalsolution_Operation');
class_alias(OperationMetadata::class, 'Google_Service_Baremetalsolution_OperationMetadata');
class_alias(ProvisioningConfig::class, 'Google_Service_Baremetalsolution_ProvisioningConfig');
class_alias(ProvisioningQuota::class, 'Google_Service_Baremetalsolution_ProvisioningQuota');
class_alias(QosPolicy::class, 'Google_Service_Baremetalsolution_QosPolicy');
class_alias(ResetInstanceRequest::class, 'Google_Service_Baremetalsolution_ResetInstanceRequest');
class_alias(ResizeVolumeRequest::class, 'Google_Service_Baremetalsolution_ResizeVolumeRequest');
class_alias(RestoreVolumeSnapshotRequest::class, 'Google_Service_Baremetalsolution_RestoreVolumeSnapshotRequest');
class_alias(SSHKey::class, 'Google_Service_Baremetalsolution_SSHKey');
class_alias(ServerNetworkTemplate::class, 'Google_Service_Baremetalsolution_ServerNetworkTemplate');
class_alias(SnapshotReservationDetail::class, 'Google_Service_Baremetalsolution_SnapshotReservationDetail');
class_alias(StartInstanceRequest::class, 'Google_Service_Baremetalsolution_StartInstanceRequest');
class_alias(Status::class, 'Google_Service_Baremetalsolution_Status');
class_alias(StopInstanceRequest::class, 'Google_Service_Baremetalsolution_StopInstanceRequest');
class_alias(SubmitProvisioningConfigRequest::class, 'Google_Service_Baremetalsolution_SubmitProvisioningConfigRequest');
class_alias(SubmitProvisioningConfigResponse::class, 'Google_Service_Baremetalsolution_SubmitProvisioningConfigResponse');
class_alias(VRF::class, 'Google_Service_Baremetalsolution_VRF');
class_alias(VlanAttachment::class, 'Google_Service_Baremetalsolution_VlanAttachment');
class_alias(Volume::class, 'Google_Service_Baremetalsolution_Volume');
class_alias(VolumeConfig::class, 'Google_Service_Baremetalsolution_VolumeConfig');
class_alias(VolumeSnapshot::class, 'Google_Service_Baremetalsolution_VolumeSnapshot');
