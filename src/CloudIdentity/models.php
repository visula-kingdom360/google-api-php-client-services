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

namespace Google\Service\CloudIdentity;

class CancelUserInvitationRequest extends \Google\Model
{
}

class CheckTransitiveMembershipResponse extends \Google\Model
{
  /** @var bool */
  public $hasMembership;

  /** @param bool */
  public function setHasMembership($hasMembership)
  {
    $this->hasMembership = $hasMembership;
  }
  /** @return bool */
  public function getHasMembership()
  {
    return $this->hasMembership;
  }
}

class CreateGroupMetadata extends \Google\Model
{
}

class CreateMembershipMetadata extends \Google\Model
{
}

class DeleteGroupMetadata extends \Google\Model
{
}

class DeleteMembershipMetadata extends \Google\Model
{
}

class DynamicGroupMetadata extends \Google\Collection
{
  /** @var DynamicGroupQuery[] */
  public $queries;
  /** @var DynamicGroupStatus */
  public $status;
  protected $collection_key = 'queries';
  protected $queriesType = DynamicGroupQuery::class;
  protected $queriesDataType = 'array';
  protected $statusType = DynamicGroupStatus::class;
  protected $statusDataType = '';
  /** @param DynamicGroupQuery[] */
  public function setQueries($queries)
  {
    $this->queries = $queries;
  }
  /** @return DynamicGroupQuery[] */
  public function getQueries()
  {
    return $this->queries;
  }
  /** @param DynamicGroupStatus */
  public function setStatus(DynamicGroupStatus $status)
  {
    $this->status = $status;
  }
  /** @return DynamicGroupStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class DynamicGroupQuery extends \Google\Model
{
  /** @var string */
  public $query;
  /** @var string */
  public $resourceType;

  /** @param string */
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

class DynamicGroupStatus extends \Google\Model
{
  /** @var string */
  public $status;
  /** @var string */
  public $statusTime;

  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setStatusTime($statusTime)
  {
    $this->statusTime = $statusTime;
  }
  /** @return string */
  public function getStatusTime()
  {
    return $this->statusTime;
  }
}

class EntityKey extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $namespace;

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
  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }
  /** @return string */
  public function getNamespace()
  {
    return $this->namespace;
  }
}

class ExpiryDetail extends \Google\Model
{
  /** @var string */
  public $expireTime;

  /** @param string */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
}

class GetMembershipGraphMetadata extends \Google\Model
{
}

class GetMembershipGraphResponse extends \Google\Collection
{
  /** @var MembershipAdjacencyList[] */
  public $adjacencyList;
  /** @var Group[] */
  public $groups;
  protected $collection_key = 'groups';
  protected $adjacencyListType = MembershipAdjacencyList::class;
  protected $adjacencyListDataType = 'array';
  protected $groupsType = Group::class;
  protected $groupsDataType = 'array';
  /** @param MembershipAdjacencyList[] */
  public function setAdjacencyList($adjacencyList)
  {
    $this->adjacencyList = $adjacencyList;
  }
  /** @return MembershipAdjacencyList[] */
  public function getAdjacencyList()
  {
    return $this->adjacencyList;
  }
  /** @param Group[] */
  public function setGroups($groups)
  {
    $this->groups = $groups;
  }
  /** @return Group[] */
  public function getGroups()
  {
    return $this->groups;
  }
}

class GoogleAppsCloudidentityDevicesV1AndroidAttributes extends \Google\Model
{
  /** @var bool */
  public $enabledUnknownSources;
  /** @var bool */
  public $ownerProfileAccount;
  /** @var string */
  public $ownershipPrivilege;
  /** @var bool */
  public $supportsWorkProfile;

  /** @param bool */
  public function setEnabledUnknownSources($enabledUnknownSources)
  {
    $this->enabledUnknownSources = $enabledUnknownSources;
  }
  /** @return bool */
  public function getEnabledUnknownSources()
  {
    return $this->enabledUnknownSources;
  }
  /** @param bool */
  public function setOwnerProfileAccount($ownerProfileAccount)
  {
    $this->ownerProfileAccount = $ownerProfileAccount;
  }
  /** @return bool */
  public function getOwnerProfileAccount()
  {
    return $this->ownerProfileAccount;
  }
  /** @param string */
  public function setOwnershipPrivilege($ownershipPrivilege)
  {
    $this->ownershipPrivilege = $ownershipPrivilege;
  }
  /** @return string */
  public function getOwnershipPrivilege()
  {
    return $this->ownershipPrivilege;
  }
  /** @param bool */
  public function setSupportsWorkProfile($supportsWorkProfile)
  {
    $this->supportsWorkProfile = $supportsWorkProfile;
  }
  /** @return bool */
  public function getSupportsWorkProfile()
  {
    return $this->supportsWorkProfile;
  }
}

class GoogleAppsCloudidentityDevicesV1ApproveDeviceUserMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1ApproveDeviceUserRequest extends \Google\Model
{
  /** @var string */
  public $customer;

  /** @param string */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /** @return string */
  public function getCustomer()
  {
    return $this->customer;
  }
}

class GoogleAppsCloudidentityDevicesV1ApproveDeviceUserResponse extends \Google\Model
{
  /** @var GoogleAppsCloudidentityDevicesV1DeviceUser */
  public $deviceUser;
  protected $deviceUserType = GoogleAppsCloudidentityDevicesV1DeviceUser::class;
  protected $deviceUserDataType = '';
  /** @param GoogleAppsCloudidentityDevicesV1DeviceUser */
  public function setDeviceUser(GoogleAppsCloudidentityDevicesV1DeviceUser $deviceUser)
  {
    $this->deviceUser = $deviceUser;
  }
  /** @return GoogleAppsCloudidentityDevicesV1DeviceUser */
  public function getDeviceUser()
  {
    return $this->deviceUser;
  }
}

class GoogleAppsCloudidentityDevicesV1BlockDeviceUserMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1BlockDeviceUserRequest extends \Google\Model
{
  /** @var string */
  public $customer;

  /** @param string */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /** @return string */
  public function getCustomer()
  {
    return $this->customer;
  }
}

class GoogleAppsCloudidentityDevicesV1BlockDeviceUserResponse extends \Google\Model
{
  /** @var GoogleAppsCloudidentityDevicesV1DeviceUser */
  public $deviceUser;
  protected $deviceUserType = GoogleAppsCloudidentityDevicesV1DeviceUser::class;
  protected $deviceUserDataType = '';
  /** @param GoogleAppsCloudidentityDevicesV1DeviceUser */
  public function setDeviceUser(GoogleAppsCloudidentityDevicesV1DeviceUser $deviceUser)
  {
    $this->deviceUser = $deviceUser;
  }
  /** @return GoogleAppsCloudidentityDevicesV1DeviceUser */
  public function getDeviceUser()
  {
    return $this->deviceUser;
  }
}

class GoogleAppsCloudidentityDevicesV1CancelWipeDeviceMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1CancelWipeDeviceRequest extends \Google\Model
{
  /** @var string */
  public $customer;

  /** @param string */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /** @return string */
  public function getCustomer()
  {
    return $this->customer;
  }
}

class GoogleAppsCloudidentityDevicesV1CancelWipeDeviceResponse extends \Google\Model
{
  /** @var GoogleAppsCloudidentityDevicesV1Device */
  public $device;
  protected $deviceType = GoogleAppsCloudidentityDevicesV1Device::class;
  protected $deviceDataType = '';
  /** @param GoogleAppsCloudidentityDevicesV1Device */
  public function setDevice(GoogleAppsCloudidentityDevicesV1Device $device)
  {
    $this->device = $device;
  }
  /** @return GoogleAppsCloudidentityDevicesV1Device */
  public function getDevice()
  {
    return $this->device;
  }
}

class GoogleAppsCloudidentityDevicesV1CancelWipeDeviceUserMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1CancelWipeDeviceUserRequest extends \Google\Model
{
  /** @var string */
  public $customer;

  /** @param string */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /** @return string */
  public function getCustomer()
  {
    return $this->customer;
  }
}

class GoogleAppsCloudidentityDevicesV1CancelWipeDeviceUserResponse extends \Google\Model
{
  /** @var GoogleAppsCloudidentityDevicesV1DeviceUser */
  public $deviceUser;
  protected $deviceUserType = GoogleAppsCloudidentityDevicesV1DeviceUser::class;
  protected $deviceUserDataType = '';
  /** @param GoogleAppsCloudidentityDevicesV1DeviceUser */
  public function setDeviceUser(GoogleAppsCloudidentityDevicesV1DeviceUser $deviceUser)
  {
    $this->deviceUser = $deviceUser;
  }
  /** @return GoogleAppsCloudidentityDevicesV1DeviceUser */
  public function getDeviceUser()
  {
    return $this->deviceUser;
  }
}

class GoogleAppsCloudidentityDevicesV1ClientState extends \Google\Collection
{
  /** @var string[] */
  public $assetTags;
  /** @var string */
  public $complianceState;
  /** @var string */
  public $createTime;
  /** @var string */
  public $customId;
  /** @var string */
  public $etag;
  /** @var string */
  public $healthScore;
  /** @var GoogleAppsCloudidentityDevicesV1CustomAttributeValue[] */
  public $keyValuePairs;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $managed;
  /** @var string */
  public $name;
  /** @var string */
  public $ownerType;
  /** @var string */
  public $scoreReason;
  protected $collection_key = 'assetTags';
  protected $keyValuePairsType = GoogleAppsCloudidentityDevicesV1CustomAttributeValue::class;
  protected $keyValuePairsDataType = 'map';
  /** @param string[] */
  public function setAssetTags($assetTags)
  {
    $this->assetTags = $assetTags;
  }
  /** @return string[] */
  public function getAssetTags()
  {
    return $this->assetTags;
  }
  /** @param string */
  public function setComplianceState($complianceState)
  {
    $this->complianceState = $complianceState;
  }
  /** @return string */
  public function getComplianceState()
  {
    return $this->complianceState;
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string */
  public function setHealthScore($healthScore)
  {
    $this->healthScore = $healthScore;
  }
  /** @return string */
  public function getHealthScore()
  {
    return $this->healthScore;
  }
  /** @param GoogleAppsCloudidentityDevicesV1CustomAttributeValue[] */
  public function setKeyValuePairs($keyValuePairs)
  {
    $this->keyValuePairs = $keyValuePairs;
  }
  /** @return GoogleAppsCloudidentityDevicesV1CustomAttributeValue[] */
  public function getKeyValuePairs()
  {
    return $this->keyValuePairs;
  }
  /** @param string */
  public function setLastUpdateTime($lastUpdateTime)
  {
    $this->lastUpdateTime = $lastUpdateTime;
  }
  /** @return string */
  public function getLastUpdateTime()
  {
    return $this->lastUpdateTime;
  }
  /** @param string */
  public function setManaged($managed)
  {
    $this->managed = $managed;
  }
  /** @return string */
  public function getManaged()
  {
    return $this->managed;
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
  public function setOwnerType($ownerType)
  {
    $this->ownerType = $ownerType;
  }
  /** @return string */
  public function getOwnerType()
  {
    return $this->ownerType;
  }
  /** @param string */
  public function setScoreReason($scoreReason)
  {
    $this->scoreReason = $scoreReason;
  }
  /** @return string */
  public function getScoreReason()
  {
    return $this->scoreReason;
  }
}

class GoogleAppsCloudidentityDevicesV1CreateDeviceMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1CustomAttributeValue extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  public $numberValue;
  /** @var string */
  public $stringValue;

  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  public function setNumberValue($numberValue)
  {
    $this->numberValue = $numberValue;
  }
  public function getNumberValue()
  {
    return $this->numberValue;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class GoogleAppsCloudidentityDevicesV1DeleteDeviceMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1DeleteDeviceUserMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1Device extends \Google\Collection
{
  /** @var GoogleAppsCloudidentityDevicesV1AndroidAttributes */
  public $androidSpecificAttributes;
  /** @var string */
  public $assetTag;
  /** @var string */
  public $basebandVersion;
  /** @var string */
  public $bootloaderVersion;
  /** @var string */
  public $brand;
  /** @var string */
  public $buildNumber;
  /** @var string */
  public $compromisedState;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deviceId;
  /** @var string */
  public $deviceType;
  /** @var bool */
  public $enabledDeveloperOptions;
  /** @var bool */
  public $enabledUsbDebugging;
  /** @var string */
  public $encryptionState;
  /** @var string */
  public $imei;
  /** @var string */
  public $kernelVersion;
  /** @var string */
  public $lastSyncTime;
  /** @var string */
  public $managementState;
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $meid;
  /** @var string */
  public $model;
  /** @var string */
  public $name;
  /** @var string */
  public $networkOperator;
  /** @var string */
  public $osVersion;
  /** @var string[] */
  public $otherAccounts;
  /** @var string */
  public $ownerType;
  /** @var string */
  public $releaseVersion;
  /** @var string */
  public $securityPatchTime;
  /** @var string */
  public $serialNumber;
  /** @var string[] */
  public $wifiMacAddresses;
  protected $collection_key = 'wifiMacAddresses';
  protected $androidSpecificAttributesType = GoogleAppsCloudidentityDevicesV1AndroidAttributes::class;
  protected $androidSpecificAttributesDataType = '';
  /** @param GoogleAppsCloudidentityDevicesV1AndroidAttributes */
  public function setAndroidSpecificAttributes(GoogleAppsCloudidentityDevicesV1AndroidAttributes $androidSpecificAttributes)
  {
    $this->androidSpecificAttributes = $androidSpecificAttributes;
  }
  /** @return GoogleAppsCloudidentityDevicesV1AndroidAttributes */
  public function getAndroidSpecificAttributes()
  {
    return $this->androidSpecificAttributes;
  }
  /** @param string */
  public function setAssetTag($assetTag)
  {
    $this->assetTag = $assetTag;
  }
  /** @return string */
  public function getAssetTag()
  {
    return $this->assetTag;
  }
  /** @param string */
  public function setBasebandVersion($basebandVersion)
  {
    $this->basebandVersion = $basebandVersion;
  }
  /** @return string */
  public function getBasebandVersion()
  {
    return $this->basebandVersion;
  }
  /** @param string */
  public function setBootloaderVersion($bootloaderVersion)
  {
    $this->bootloaderVersion = $bootloaderVersion;
  }
  /** @return string */
  public function getBootloaderVersion()
  {
    return $this->bootloaderVersion;
  }
  /** @param string */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param string */
  public function setBuildNumber($buildNumber)
  {
    $this->buildNumber = $buildNumber;
  }
  /** @return string */
  public function getBuildNumber()
  {
    return $this->buildNumber;
  }
  /** @param string */
  public function setCompromisedState($compromisedState)
  {
    $this->compromisedState = $compromisedState;
  }
  /** @return string */
  public function getCompromisedState()
  {
    return $this->compromisedState;
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
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param string */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /** @return string */
  public function getDeviceType()
  {
    return $this->deviceType;
  }
  /** @param bool */
  public function setEnabledDeveloperOptions($enabledDeveloperOptions)
  {
    $this->enabledDeveloperOptions = $enabledDeveloperOptions;
  }
  /** @return bool */
  public function getEnabledDeveloperOptions()
  {
    return $this->enabledDeveloperOptions;
  }
  /** @param bool */
  public function setEnabledUsbDebugging($enabledUsbDebugging)
  {
    $this->enabledUsbDebugging = $enabledUsbDebugging;
  }
  /** @return bool */
  public function getEnabledUsbDebugging()
  {
    return $this->enabledUsbDebugging;
  }
  /** @param string */
  public function setEncryptionState($encryptionState)
  {
    $this->encryptionState = $encryptionState;
  }
  /** @return string */
  public function getEncryptionState()
  {
    return $this->encryptionState;
  }
  /** @param string */
  public function setImei($imei)
  {
    $this->imei = $imei;
  }
  /** @return string */
  public function getImei()
  {
    return $this->imei;
  }
  /** @param string */
  public function setKernelVersion($kernelVersion)
  {
    $this->kernelVersion = $kernelVersion;
  }
  /** @return string */
  public function getKernelVersion()
  {
    return $this->kernelVersion;
  }
  /** @param string */
  public function setLastSyncTime($lastSyncTime)
  {
    $this->lastSyncTime = $lastSyncTime;
  }
  /** @return string */
  public function getLastSyncTime()
  {
    return $this->lastSyncTime;
  }
  /** @param string */
  public function setManagementState($managementState)
  {
    $this->managementState = $managementState;
  }
  /** @return string */
  public function getManagementState()
  {
    return $this->managementState;
  }
  /** @param string */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /** @return string */
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
  /** @param string */
  public function setMeid($meid)
  {
    $this->meid = $meid;
  }
  /** @return string */
  public function getMeid()
  {
    return $this->meid;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
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
  public function setNetworkOperator($networkOperator)
  {
    $this->networkOperator = $networkOperator;
  }
  /** @return string */
  public function getNetworkOperator()
  {
    return $this->networkOperator;
  }
  /** @param string */
  public function setOsVersion($osVersion)
  {
    $this->osVersion = $osVersion;
  }
  /** @return string */
  public function getOsVersion()
  {
    return $this->osVersion;
  }
  /** @param string[] */
  public function setOtherAccounts($otherAccounts)
  {
    $this->otherAccounts = $otherAccounts;
  }
  /** @return string[] */
  public function getOtherAccounts()
  {
    return $this->otherAccounts;
  }
  /** @param string */
  public function setOwnerType($ownerType)
  {
    $this->ownerType = $ownerType;
  }
  /** @return string */
  public function getOwnerType()
  {
    return $this->ownerType;
  }
  /** @param string */
  public function setReleaseVersion($releaseVersion)
  {
    $this->releaseVersion = $releaseVersion;
  }
  /** @return string */
  public function getReleaseVersion()
  {
    return $this->releaseVersion;
  }
  /** @param string */
  public function setSecurityPatchTime($securityPatchTime)
  {
    $this->securityPatchTime = $securityPatchTime;
  }
  /** @return string */
  public function getSecurityPatchTime()
  {
    return $this->securityPatchTime;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /** @param string[] */
  public function setWifiMacAddresses($wifiMacAddresses)
  {
    $this->wifiMacAddresses = $wifiMacAddresses;
  }
  /** @return string[] */
  public function getWifiMacAddresses()
  {
    return $this->wifiMacAddresses;
  }
}

class GoogleAppsCloudidentityDevicesV1DeviceUser extends \Google\Model
{
  /** @var string */
  public $compromisedState;
  /** @var string */
  public $createTime;
  /** @var string */
  public $firstSyncTime;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $lastSyncTime;
  /** @var string */
  public $managementState;
  /** @var string */
  public $name;
  /** @var string */
  public $passwordState;
  /** @var string */
  public $userAgent;
  /** @var string */
  public $userEmail;

  /** @param string */
  public function setCompromisedState($compromisedState)
  {
    $this->compromisedState = $compromisedState;
  }
  /** @return string */
  public function getCompromisedState()
  {
    return $this->compromisedState;
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
  public function setFirstSyncTime($firstSyncTime)
  {
    $this->firstSyncTime = $firstSyncTime;
  }
  /** @return string */
  public function getFirstSyncTime()
  {
    return $this->firstSyncTime;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param string */
  public function setLastSyncTime($lastSyncTime)
  {
    $this->lastSyncTime = $lastSyncTime;
  }
  /** @return string */
  public function getLastSyncTime()
  {
    return $this->lastSyncTime;
  }
  /** @param string */
  public function setManagementState($managementState)
  {
    $this->managementState = $managementState;
  }
  /** @return string */
  public function getManagementState()
  {
    return $this->managementState;
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
  public function setPasswordState($passwordState)
  {
    $this->passwordState = $passwordState;
  }
  /** @return string */
  public function getPasswordState()
  {
    return $this->passwordState;
  }
  /** @param string */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /** @return string */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
  /** @param string */
  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }
  /** @return string */
  public function getUserEmail()
  {
    return $this->userEmail;
  }
}

class GoogleAppsCloudidentityDevicesV1ListClientStatesResponse extends \Google\Collection
{
  /** @var GoogleAppsCloudidentityDevicesV1ClientState[] */
  public $clientStates;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'clientStates';
  protected $clientStatesType = GoogleAppsCloudidentityDevicesV1ClientState::class;
  protected $clientStatesDataType = 'array';
  /** @param GoogleAppsCloudidentityDevicesV1ClientState[] */
  public function setClientStates($clientStates)
  {
    $this->clientStates = $clientStates;
  }
  /** @return GoogleAppsCloudidentityDevicesV1ClientState[] */
  public function getClientStates()
  {
    return $this->clientStates;
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

class GoogleAppsCloudidentityDevicesV1ListDeviceUsersResponse extends \Google\Collection
{
  /** @var GoogleAppsCloudidentityDevicesV1DeviceUser[] */
  public $deviceUsers;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'deviceUsers';
  protected $deviceUsersType = GoogleAppsCloudidentityDevicesV1DeviceUser::class;
  protected $deviceUsersDataType = 'array';
  /** @param GoogleAppsCloudidentityDevicesV1DeviceUser[] */
  public function setDeviceUsers($deviceUsers)
  {
    $this->deviceUsers = $deviceUsers;
  }
  /** @return GoogleAppsCloudidentityDevicesV1DeviceUser[] */
  public function getDeviceUsers()
  {
    return $this->deviceUsers;
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

class GoogleAppsCloudidentityDevicesV1ListDevicesResponse extends \Google\Collection
{
  /** @var GoogleAppsCloudidentityDevicesV1Device[] */
  public $devices;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'devices';
  protected $devicesType = GoogleAppsCloudidentityDevicesV1Device::class;
  protected $devicesDataType = 'array';
  /** @param GoogleAppsCloudidentityDevicesV1Device[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return GoogleAppsCloudidentityDevicesV1Device[] */
  public function getDevices()
  {
    return $this->devices;
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

class GoogleAppsCloudidentityDevicesV1ListEndpointAppsMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1LookupSelfDeviceUsersResponse extends \Google\Collection
{
  /** @var string */
  public $customer;
  /** @var string[] */
  public $names;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'names';
  /** @param string */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /** @return string */
  public function getCustomer()
  {
    return $this->customer;
  }
  /** @param string[] */
  public function setNames($names)
  {
    $this->names = $names;
  }
  /** @return string[] */
  public function getNames()
  {
    return $this->names;
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

class GoogleAppsCloudidentityDevicesV1SignoutDeviceUserMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1UpdateClientStateMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1UpdateDeviceMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1WipeDeviceMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1WipeDeviceRequest extends \Google\Model
{
  /** @var string */
  public $customer;
  /** @var bool */
  public $removeResetLock;

  /** @param string */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /** @return string */
  public function getCustomer()
  {
    return $this->customer;
  }
  /** @param bool */
  public function setRemoveResetLock($removeResetLock)
  {
    $this->removeResetLock = $removeResetLock;
  }
  /** @return bool */
  public function getRemoveResetLock()
  {
    return $this->removeResetLock;
  }
}

class GoogleAppsCloudidentityDevicesV1WipeDeviceResponse extends \Google\Model
{
  /** @var GoogleAppsCloudidentityDevicesV1Device */
  public $device;
  protected $deviceType = GoogleAppsCloudidentityDevicesV1Device::class;
  protected $deviceDataType = '';
  /** @param GoogleAppsCloudidentityDevicesV1Device */
  public function setDevice(GoogleAppsCloudidentityDevicesV1Device $device)
  {
    $this->device = $device;
  }
  /** @return GoogleAppsCloudidentityDevicesV1Device */
  public function getDevice()
  {
    return $this->device;
  }
}

class GoogleAppsCloudidentityDevicesV1WipeDeviceUserMetadata extends \Google\Model
{
}

class GoogleAppsCloudidentityDevicesV1WipeDeviceUserRequest extends \Google\Model
{
  /** @var string */
  public $customer;

  /** @param string */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /** @return string */
  public function getCustomer()
  {
    return $this->customer;
  }
}

class GoogleAppsCloudidentityDevicesV1WipeDeviceUserResponse extends \Google\Model
{
  /** @var GoogleAppsCloudidentityDevicesV1DeviceUser */
  public $deviceUser;
  protected $deviceUserType = GoogleAppsCloudidentityDevicesV1DeviceUser::class;
  protected $deviceUserDataType = '';
  /** @param GoogleAppsCloudidentityDevicesV1DeviceUser */
  public function setDeviceUser(GoogleAppsCloudidentityDevicesV1DeviceUser $deviceUser)
  {
    $this->deviceUser = $deviceUser;
  }
  /** @return GoogleAppsCloudidentityDevicesV1DeviceUser */
  public function getDeviceUser()
  {
    return $this->deviceUser;
  }
}

class Group extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var DynamicGroupMetadata */
  public $dynamicGroupMetadata;
  /** @var EntityKey */
  public $groupKey;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string */
  public $updateTime;
  protected $dynamicGroupMetadataType = DynamicGroupMetadata::class;
  protected $dynamicGroupMetadataDataType = '';
  protected $groupKeyType = EntityKey::class;
  protected $groupKeyDataType = '';
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param DynamicGroupMetadata */
  public function setDynamicGroupMetadata(DynamicGroupMetadata $dynamicGroupMetadata)
  {
    $this->dynamicGroupMetadata = $dynamicGroupMetadata;
  }
  /** @return DynamicGroupMetadata */
  public function getDynamicGroupMetadata()
  {
    return $this->dynamicGroupMetadata;
  }
  /** @param EntityKey */
  public function setGroupKey(EntityKey $groupKey)
  {
    $this->groupKey = $groupKey;
  }
  /** @return EntityKey */
  public function getGroupKey()
  {
    return $this->groupKey;
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
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
}

class GroupRelation extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $group;
  /** @var EntityKey */
  public $groupKey;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $relationType;
  /** @var TransitiveMembershipRole[] */
  public $roles;
  protected $collection_key = 'roles';
  protected $groupKeyType = EntityKey::class;
  protected $groupKeyDataType = '';
  protected $rolesType = TransitiveMembershipRole::class;
  protected $rolesDataType = 'array';
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
  /** @param string */
  public function setGroup($group)
  {
    $this->group = $group;
  }
  /** @return string */
  public function getGroup()
  {
    return $this->group;
  }
  /** @param EntityKey */
  public function setGroupKey(EntityKey $groupKey)
  {
    $this->groupKey = $groupKey;
  }
  /** @return EntityKey */
  public function getGroupKey()
  {
    return $this->groupKey;
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
  public function setRelationType($relationType)
  {
    $this->relationType = $relationType;
  }
  /** @return string */
  public function getRelationType()
  {
    return $this->relationType;
  }
  /** @param TransitiveMembershipRole[] */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /** @return TransitiveMembershipRole[] */
  public function getRoles()
  {
    return $this->roles;
  }
}

class IsInvitableUserResponse extends \Google\Model
{
  /** @var bool */
  public $isInvitableUser;

  /** @param bool */
  public function setIsInvitableUser($isInvitableUser)
  {
    $this->isInvitableUser = $isInvitableUser;
  }
  /** @return bool */
  public function getIsInvitableUser()
  {
    return $this->isInvitableUser;
  }
}

class ListGroupsResponse extends \Google\Collection
{
  /** @var Group[] */
  public $groups;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'groups';
  protected $groupsType = Group::class;
  protected $groupsDataType = 'array';
  /** @param Group[] */
  public function setGroups($groups)
  {
    $this->groups = $groups;
  }
  /** @return Group[] */
  public function getGroups()
  {
    return $this->groups;
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

class ListMembershipsResponse extends \Google\Collection
{
  /** @var Membership[] */
  public $memberships;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'memberships';
  protected $membershipsType = Membership::class;
  protected $membershipsDataType = 'array';
  /** @param Membership[] */
  public function setMemberships($memberships)
  {
    $this->memberships = $memberships;
  }
  /** @return Membership[] */
  public function getMemberships()
  {
    return $this->memberships;
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

class ListUserInvitationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var UserInvitation[] */
  public $userInvitations;
  protected $collection_key = 'userInvitations';
  protected $userInvitationsType = UserInvitation::class;
  protected $userInvitationsDataType = 'array';
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
  /** @param UserInvitation[] */
  public function setUserInvitations($userInvitations)
  {
    $this->userInvitations = $userInvitations;
  }
  /** @return UserInvitation[] */
  public function getUserInvitations()
  {
    return $this->userInvitations;
  }
}

class LookupGroupNameResponse extends \Google\Model
{
  /** @var string */
  public $name;

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

class LookupMembershipNameResponse extends \Google\Model
{
  /** @var string */
  public $name;

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

class MemberRelation extends \Google\Collection
{
  /** @var string */
  public $member;
  /** @var EntityKey[] */
  public $preferredMemberKey;
  /** @var string */
  public $relationType;
  /** @var TransitiveMembershipRole[] */
  public $roles;
  protected $collection_key = 'roles';
  protected $preferredMemberKeyType = EntityKey::class;
  protected $preferredMemberKeyDataType = 'array';
  protected $rolesType = TransitiveMembershipRole::class;
  protected $rolesDataType = 'array';
  /** @param string */
  public function setMember($member)
  {
    $this->member = $member;
  }
  /** @return string */
  public function getMember()
  {
    return $this->member;
  }
  /** @param EntityKey[] */
  public function setPreferredMemberKey($preferredMemberKey)
  {
    $this->preferredMemberKey = $preferredMemberKey;
  }
  /** @return EntityKey[] */
  public function getPreferredMemberKey()
  {
    return $this->preferredMemberKey;
  }
  /** @param string */
  public function setRelationType($relationType)
  {
    $this->relationType = $relationType;
  }
  /** @return string */
  public function getRelationType()
  {
    return $this->relationType;
  }
  /** @param TransitiveMembershipRole[] */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /** @return TransitiveMembershipRole[] */
  public function getRoles()
  {
    return $this->roles;
  }
}

class MemberRestriction extends \Google\Model
{
  /** @var RestrictionEvaluation */
  public $evaluation;
  /** @var string */
  public $query;
  protected $evaluationType = RestrictionEvaluation::class;
  protected $evaluationDataType = '';
  /** @param RestrictionEvaluation */
  public function setEvaluation(RestrictionEvaluation $evaluation)
  {
    $this->evaluation = $evaluation;
  }
  /** @return RestrictionEvaluation */
  public function getEvaluation()
  {
    return $this->evaluation;
  }
  /** @param string */
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
}

class Membership extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var EntityKey */
  public $preferredMemberKey;
  /** @var MembershipRole[] */
  public $roles;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'roles';
  protected $preferredMemberKeyType = EntityKey::class;
  protected $preferredMemberKeyDataType = '';
  protected $rolesType = MembershipRole::class;
  protected $rolesDataType = 'array';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param EntityKey */
  public function setPreferredMemberKey(EntityKey $preferredMemberKey)
  {
    $this->preferredMemberKey = $preferredMemberKey;
  }
  /** @return EntityKey */
  public function getPreferredMemberKey()
  {
    return $this->preferredMemberKey;
  }
  /** @param MembershipRole[] */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /** @return MembershipRole[] */
  public function getRoles()
  {
    return $this->roles;
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class MembershipAdjacencyList extends \Google\Collection
{
  /** @var Membership[] */
  public $edges;
  /** @var string */
  public $group;
  protected $collection_key = 'edges';
  protected $edgesType = Membership::class;
  protected $edgesDataType = 'array';
  /** @param Membership[] */
  public function setEdges($edges)
  {
    $this->edges = $edges;
  }
  /** @return Membership[] */
  public function getEdges()
  {
    return $this->edges;
  }
  /** @param string */
  public function setGroup($group)
  {
    $this->group = $group;
  }
  /** @return string */
  public function getGroup()
  {
    return $this->group;
  }
}

class MembershipRole extends \Google\Model
{
  /** @var ExpiryDetail */
  public $expiryDetail;
  /** @var string */
  public $name;
  /** @var RestrictionEvaluations */
  public $restrictionEvaluations;
  protected $expiryDetailType = ExpiryDetail::class;
  protected $expiryDetailDataType = '';
  protected $restrictionEvaluationsType = RestrictionEvaluations::class;
  protected $restrictionEvaluationsDataType = '';
  /** @param ExpiryDetail */
  public function setExpiryDetail(ExpiryDetail $expiryDetail)
  {
    $this->expiryDetail = $expiryDetail;
  }
  /** @return ExpiryDetail */
  public function getExpiryDetail()
  {
    return $this->expiryDetail;
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
  /** @param RestrictionEvaluations */
  public function setRestrictionEvaluations(RestrictionEvaluations $restrictionEvaluations)
  {
    $this->restrictionEvaluations = $restrictionEvaluations;
  }
  /** @return RestrictionEvaluations */
  public function getRestrictionEvaluations()
  {
    return $this->restrictionEvaluations;
  }
}

class MembershipRoleRestrictionEvaluation extends \Google\Model
{
  /** @var string */
  public $state;

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
}

class ModifyMembershipRolesRequest extends \Google\Collection
{
  /** @var MembershipRole[] */
  public $addRoles;
  /** @var string[] */
  public $removeRoles;
  /** @var UpdateMembershipRolesParams[] */
  public $updateRolesParams;
  protected $collection_key = 'updateRolesParams';
  protected $addRolesType = MembershipRole::class;
  protected $addRolesDataType = 'array';
  protected $updateRolesParamsType = UpdateMembershipRolesParams::class;
  protected $updateRolesParamsDataType = 'array';
  /** @param MembershipRole[] */
  public function setAddRoles($addRoles)
  {
    $this->addRoles = $addRoles;
  }
  /** @return MembershipRole[] */
  public function getAddRoles()
  {
    return $this->addRoles;
  }
  /** @param string[] */
  public function setRemoveRoles($removeRoles)
  {
    $this->removeRoles = $removeRoles;
  }
  /** @return string[] */
  public function getRemoveRoles()
  {
    return $this->removeRoles;
  }
  /** @param UpdateMembershipRolesParams[] */
  public function setUpdateRolesParams($updateRolesParams)
  {
    $this->updateRolesParams = $updateRolesParams;
  }
  /** @return UpdateMembershipRolesParams[] */
  public function getUpdateRolesParams()
  {
    return $this->updateRolesParams;
  }
}

class ModifyMembershipRolesResponse extends \Google\Model
{
  /** @var Membership */
  public $membership;
  protected $membershipType = Membership::class;
  protected $membershipDataType = '';
  /** @param Membership */
  public function setMembership(Membership $membership)
  {
    $this->membership = $membership;
  }
  /** @return Membership */
  public function getMembership()
  {
    return $this->membership;
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

class RestrictionEvaluation extends \Google\Model
{
  /** @var string */
  public $state;

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
}

class RestrictionEvaluations extends \Google\Model
{
  /** @var MembershipRoleRestrictionEvaluation */
  public $memberRestrictionEvaluation;
  protected $memberRestrictionEvaluationType = MembershipRoleRestrictionEvaluation::class;
  protected $memberRestrictionEvaluationDataType = '';
  /** @param MembershipRoleRestrictionEvaluation */
  public function setMemberRestrictionEvaluation(MembershipRoleRestrictionEvaluation $memberRestrictionEvaluation)
  {
    $this->memberRestrictionEvaluation = $memberRestrictionEvaluation;
  }
  /** @return MembershipRoleRestrictionEvaluation */
  public function getMemberRestrictionEvaluation()
  {
    return $this->memberRestrictionEvaluation;
  }
}

class SearchGroupsResponse extends \Google\Collection
{
  /** @var Group[] */
  public $groups;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'groups';
  protected $groupsType = Group::class;
  protected $groupsDataType = 'array';
  /** @param Group[] */
  public function setGroups($groups)
  {
    $this->groups = $groups;
  }
  /** @return Group[] */
  public function getGroups()
  {
    return $this->groups;
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

class SearchTransitiveGroupsResponse extends \Google\Collection
{
  /** @var GroupRelation[] */
  public $memberships;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'memberships';
  protected $membershipsType = GroupRelation::class;
  protected $membershipsDataType = 'array';
  /** @param GroupRelation[] */
  public function setMemberships($memberships)
  {
    $this->memberships = $memberships;
  }
  /** @return GroupRelation[] */
  public function getMemberships()
  {
    return $this->memberships;
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

class SearchTransitiveMembershipsResponse extends \Google\Collection
{
  /** @var MemberRelation[] */
  public $memberships;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'memberships';
  protected $membershipsType = MemberRelation::class;
  protected $membershipsDataType = 'array';
  /** @param MemberRelation[] */
  public function setMemberships($memberships)
  {
    $this->memberships = $memberships;
  }
  /** @return MemberRelation[] */
  public function getMemberships()
  {
    return $this->memberships;
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

class SecuritySettings extends \Google\Model
{
  /** @var MemberRestriction */
  public $memberRestriction;
  /** @var string */
  public $name;
  protected $memberRestrictionType = MemberRestriction::class;
  protected $memberRestrictionDataType = '';
  /** @param MemberRestriction */
  public function setMemberRestriction(MemberRestriction $memberRestriction)
  {
    $this->memberRestriction = $memberRestriction;
  }
  /** @return MemberRestriction */
  public function getMemberRestriction()
  {
    return $this->memberRestriction;
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

class SendUserInvitationRequest extends \Google\Model
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

class TransitiveMembershipRole extends \Google\Model
{
  /** @var string */
  public $role;

  /** @param string */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /** @return string */
  public function getRole()
  {
    return $this->role;
  }
}

class UpdateGroupMetadata extends \Google\Model
{
}

class UpdateMembershipMetadata extends \Google\Model
{
}

class UpdateMembershipRolesParams extends \Google\Model
{
  /** @var string */
  public $fieldMask;
  /** @var MembershipRole */
  public $membershipRole;
  protected $membershipRoleType = MembershipRole::class;
  protected $membershipRoleDataType = '';
  /** @param string */
  public function setFieldMask($fieldMask)
  {
    $this->fieldMask = $fieldMask;
  }
  /** @return string */
  public function getFieldMask()
  {
    return $this->fieldMask;
  }
  /** @param MembershipRole */
  public function setMembershipRole(MembershipRole $membershipRole)
  {
    $this->membershipRole = $membershipRole;
  }
  /** @return MembershipRole */
  public function getMembershipRole()
  {
    return $this->membershipRole;
  }
}

class UserInvitation extends \Google\Model
{
  /** @var string */
  public $mailsSentCount;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setMailsSentCount($mailsSentCount)
  {
    $this->mailsSentCount = $mailsSentCount;
  }
  /** @return string */
  public function getMailsSentCount()
  {
    return $this->mailsSentCount;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CancelUserInvitationRequest::class, 'Google_Service_CloudIdentity_CancelUserInvitationRequest');
class_alias(CheckTransitiveMembershipResponse::class, 'Google_Service_CloudIdentity_CheckTransitiveMembershipResponse');
class_alias(CreateGroupMetadata::class, 'Google_Service_CloudIdentity_CreateGroupMetadata');
class_alias(CreateMembershipMetadata::class, 'Google_Service_CloudIdentity_CreateMembershipMetadata');
class_alias(DeleteGroupMetadata::class, 'Google_Service_CloudIdentity_DeleteGroupMetadata');
class_alias(DeleteMembershipMetadata::class, 'Google_Service_CloudIdentity_DeleteMembershipMetadata');
class_alias(DynamicGroupMetadata::class, 'Google_Service_CloudIdentity_DynamicGroupMetadata');
class_alias(DynamicGroupQuery::class, 'Google_Service_CloudIdentity_DynamicGroupQuery');
class_alias(DynamicGroupStatus::class, 'Google_Service_CloudIdentity_DynamicGroupStatus');
class_alias(EntityKey::class, 'Google_Service_CloudIdentity_EntityKey');
class_alias(ExpiryDetail::class, 'Google_Service_CloudIdentity_ExpiryDetail');
class_alias(GetMembershipGraphMetadata::class, 'Google_Service_CloudIdentity_GetMembershipGraphMetadata');
class_alias(GetMembershipGraphResponse::class, 'Google_Service_CloudIdentity_GetMembershipGraphResponse');
class_alias(GoogleAppsCloudidentityDevicesV1AndroidAttributes::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1AndroidAttributes');
class_alias(GoogleAppsCloudidentityDevicesV1ApproveDeviceUserMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1ApproveDeviceUserMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1ApproveDeviceUserRequest::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1ApproveDeviceUserRequest');
class_alias(GoogleAppsCloudidentityDevicesV1ApproveDeviceUserResponse::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1ApproveDeviceUserResponse');
class_alias(GoogleAppsCloudidentityDevicesV1BlockDeviceUserMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1BlockDeviceUserMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1BlockDeviceUserRequest::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1BlockDeviceUserRequest');
class_alias(GoogleAppsCloudidentityDevicesV1BlockDeviceUserResponse::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1BlockDeviceUserResponse');
class_alias(GoogleAppsCloudidentityDevicesV1CancelWipeDeviceMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1CancelWipeDeviceMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1CancelWipeDeviceRequest::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1CancelWipeDeviceRequest');
class_alias(GoogleAppsCloudidentityDevicesV1CancelWipeDeviceResponse::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1CancelWipeDeviceResponse');
class_alias(GoogleAppsCloudidentityDevicesV1CancelWipeDeviceUserMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1CancelWipeDeviceUserMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1CancelWipeDeviceUserRequest::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1CancelWipeDeviceUserRequest');
class_alias(GoogleAppsCloudidentityDevicesV1CancelWipeDeviceUserResponse::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1CancelWipeDeviceUserResponse');
class_alias(GoogleAppsCloudidentityDevicesV1ClientState::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1ClientState');
class_alias(GoogleAppsCloudidentityDevicesV1CreateDeviceMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1CreateDeviceMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1CustomAttributeValue::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1CustomAttributeValue');
class_alias(GoogleAppsCloudidentityDevicesV1DeleteDeviceMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1DeleteDeviceMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1DeleteDeviceUserMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1DeleteDeviceUserMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1Device::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1Device');
class_alias(GoogleAppsCloudidentityDevicesV1DeviceUser::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1DeviceUser');
class_alias(GoogleAppsCloudidentityDevicesV1ListClientStatesResponse::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1ListClientStatesResponse');
class_alias(GoogleAppsCloudidentityDevicesV1ListDeviceUsersResponse::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1ListDeviceUsersResponse');
class_alias(GoogleAppsCloudidentityDevicesV1ListDevicesResponse::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1ListDevicesResponse');
class_alias(GoogleAppsCloudidentityDevicesV1ListEndpointAppsMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1ListEndpointAppsMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1LookupSelfDeviceUsersResponse::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1LookupSelfDeviceUsersResponse');
class_alias(GoogleAppsCloudidentityDevicesV1SignoutDeviceUserMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1SignoutDeviceUserMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1UpdateClientStateMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1UpdateClientStateMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1UpdateDeviceMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1UpdateDeviceMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1WipeDeviceMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1WipeDeviceMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1WipeDeviceRequest::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1WipeDeviceRequest');
class_alias(GoogleAppsCloudidentityDevicesV1WipeDeviceResponse::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1WipeDeviceResponse');
class_alias(GoogleAppsCloudidentityDevicesV1WipeDeviceUserMetadata::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1WipeDeviceUserMetadata');
class_alias(GoogleAppsCloudidentityDevicesV1WipeDeviceUserRequest::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1WipeDeviceUserRequest');
class_alias(GoogleAppsCloudidentityDevicesV1WipeDeviceUserResponse::class, 'Google_Service_CloudIdentity_GoogleAppsCloudidentityDevicesV1WipeDeviceUserResponse');
class_alias(Group::class, 'Google_Service_CloudIdentity_Group');
class_alias(GroupRelation::class, 'Google_Service_CloudIdentity_GroupRelation');
class_alias(IsInvitableUserResponse::class, 'Google_Service_CloudIdentity_IsInvitableUserResponse');
class_alias(ListGroupsResponse::class, 'Google_Service_CloudIdentity_ListGroupsResponse');
class_alias(ListMembershipsResponse::class, 'Google_Service_CloudIdentity_ListMembershipsResponse');
class_alias(ListUserInvitationsResponse::class, 'Google_Service_CloudIdentity_ListUserInvitationsResponse');
class_alias(LookupGroupNameResponse::class, 'Google_Service_CloudIdentity_LookupGroupNameResponse');
class_alias(LookupMembershipNameResponse::class, 'Google_Service_CloudIdentity_LookupMembershipNameResponse');
class_alias(MemberRelation::class, 'Google_Service_CloudIdentity_MemberRelation');
class_alias(MemberRestriction::class, 'Google_Service_CloudIdentity_MemberRestriction');
class_alias(Membership::class, 'Google_Service_CloudIdentity_Membership');
class_alias(MembershipAdjacencyList::class, 'Google_Service_CloudIdentity_MembershipAdjacencyList');
class_alias(MembershipRole::class, 'Google_Service_CloudIdentity_MembershipRole');
class_alias(MembershipRoleRestrictionEvaluation::class, 'Google_Service_CloudIdentity_MembershipRoleRestrictionEvaluation');
class_alias(ModifyMembershipRolesRequest::class, 'Google_Service_CloudIdentity_ModifyMembershipRolesRequest');
class_alias(ModifyMembershipRolesResponse::class, 'Google_Service_CloudIdentity_ModifyMembershipRolesResponse');
class_alias(Operation::class, 'Google_Service_CloudIdentity_Operation');
class_alias(RestrictionEvaluation::class, 'Google_Service_CloudIdentity_RestrictionEvaluation');
class_alias(RestrictionEvaluations::class, 'Google_Service_CloudIdentity_RestrictionEvaluations');
class_alias(SearchGroupsResponse::class, 'Google_Service_CloudIdentity_SearchGroupsResponse');
class_alias(SearchTransitiveGroupsResponse::class, 'Google_Service_CloudIdentity_SearchTransitiveGroupsResponse');
class_alias(SearchTransitiveMembershipsResponse::class, 'Google_Service_CloudIdentity_SearchTransitiveMembershipsResponse');
class_alias(SecuritySettings::class, 'Google_Service_CloudIdentity_SecuritySettings');
class_alias(SendUserInvitationRequest::class, 'Google_Service_CloudIdentity_SendUserInvitationRequest');
class_alias(Status::class, 'Google_Service_CloudIdentity_Status');
class_alias(TransitiveMembershipRole::class, 'Google_Service_CloudIdentity_TransitiveMembershipRole');
class_alias(UpdateGroupMetadata::class, 'Google_Service_CloudIdentity_UpdateGroupMetadata');
class_alias(UpdateMembershipMetadata::class, 'Google_Service_CloudIdentity_UpdateMembershipMetadata');
class_alias(UpdateMembershipRolesParams::class, 'Google_Service_CloudIdentity_UpdateMembershipRolesParams');
class_alias(UserInvitation::class, 'Google_Service_CloudIdentity_UserInvitation');
