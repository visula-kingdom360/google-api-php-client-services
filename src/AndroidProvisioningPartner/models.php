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

namespace Google\Service\AndroidProvisioningPartner;

class AndroiddeviceprovisioningEmpty extends \Google\Model
{
}

class ClaimDeviceRequest extends \Google\Model
{
  /** @var string */
  public $customerId;
  /** @var DeviceIdentifier */
  public $deviceIdentifier;
  /** @var DeviceMetadata */
  public $deviceMetadata;
  /** @var string */
  public $googleWorkspaceCustomerId;
  /** @var string */
  public $preProvisioningToken;
  /** @var string */
  public $sectionType;
  /** @var string */
  public $simlockProfileId;
  protected $deviceIdentifierType = DeviceIdentifier::class;
  protected $deviceIdentifierDataType = '';
  protected $deviceMetadataType = DeviceMetadata::class;
  protected $deviceMetadataDataType = '';
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param DeviceIdentifier */
  public function setDeviceIdentifier(DeviceIdentifier $deviceIdentifier)
  {
    $this->deviceIdentifier = $deviceIdentifier;
  }
  /** @return DeviceIdentifier */
  public function getDeviceIdentifier()
  {
    return $this->deviceIdentifier;
  }
  /** @param DeviceMetadata */
  public function setDeviceMetadata(DeviceMetadata $deviceMetadata)
  {
    $this->deviceMetadata = $deviceMetadata;
  }
  /** @return DeviceMetadata */
  public function getDeviceMetadata()
  {
    return $this->deviceMetadata;
  }
  /** @param string */
  public function setGoogleWorkspaceCustomerId($googleWorkspaceCustomerId)
  {
    $this->googleWorkspaceCustomerId = $googleWorkspaceCustomerId;
  }
  /** @return string */
  public function getGoogleWorkspaceCustomerId()
  {
    return $this->googleWorkspaceCustomerId;
  }
  /** @param string */
  public function setPreProvisioningToken($preProvisioningToken)
  {
    $this->preProvisioningToken = $preProvisioningToken;
  }
  /** @return string */
  public function getPreProvisioningToken()
  {
    return $this->preProvisioningToken;
  }
  /** @param string */
  public function setSectionType($sectionType)
  {
    $this->sectionType = $sectionType;
  }
  /** @return string */
  public function getSectionType()
  {
    return $this->sectionType;
  }
  /** @param string */
  public function setSimlockProfileId($simlockProfileId)
  {
    $this->simlockProfileId = $simlockProfileId;
  }
  /** @return string */
  public function getSimlockProfileId()
  {
    return $this->simlockProfileId;
  }
}

class ClaimDeviceResponse extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var string */
  public $deviceName;

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
  public function setDeviceName($deviceName)
  {
    $this->deviceName = $deviceName;
  }
  /** @return string */
  public function getDeviceName()
  {
    return $this->deviceName;
  }
}

class ClaimDevicesRequest extends \Google\Collection
{
  /** @var PartnerClaim[] */
  public $claims;
  protected $collection_key = 'claims';
  protected $claimsType = PartnerClaim::class;
  protected $claimsDataType = 'array';
  /** @param PartnerClaim[] */
  public function setClaims($claims)
  {
    $this->claims = $claims;
  }
  /** @return PartnerClaim[] */
  public function getClaims()
  {
    return $this->claims;
  }
}

class Company extends \Google\Collection
{
  /** @var string[] */
  public $adminEmails;
  /** @var string */
  public $companyId;
  /** @var string */
  public $companyName;
  /** @var GoogleWorkspaceAccount */
  public $googleWorkspaceAccount;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $name;
  /** @var string[] */
  public $ownerEmails;
  /** @var bool */
  public $skipWelcomeEmail;
  /** @var string */
  public $termsStatus;
  protected $collection_key = 'ownerEmails';
  protected $googleWorkspaceAccountType = GoogleWorkspaceAccount::class;
  protected $googleWorkspaceAccountDataType = '';
  /** @param string[] */
  public function setAdminEmails($adminEmails)
  {
    $this->adminEmails = $adminEmails;
  }
  /** @return string[] */
  public function getAdminEmails()
  {
    return $this->adminEmails;
  }
  /** @param string */
  public function setCompanyId($companyId)
  {
    $this->companyId = $companyId;
  }
  /** @return string */
  public function getCompanyId()
  {
    return $this->companyId;
  }
  /** @param string */
  public function setCompanyName($companyName)
  {
    $this->companyName = $companyName;
  }
  /** @return string */
  public function getCompanyName()
  {
    return $this->companyName;
  }
  /** @param GoogleWorkspaceAccount */
  public function setGoogleWorkspaceAccount(GoogleWorkspaceAccount $googleWorkspaceAccount)
  {
    $this->googleWorkspaceAccount = $googleWorkspaceAccount;
  }
  /** @return GoogleWorkspaceAccount */
  public function getGoogleWorkspaceAccount()
  {
    return $this->googleWorkspaceAccount;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string[] */
  public function setOwnerEmails($ownerEmails)
  {
    $this->ownerEmails = $ownerEmails;
  }
  /** @return string[] */
  public function getOwnerEmails()
  {
    return $this->ownerEmails;
  }
  /** @param bool */
  public function setSkipWelcomeEmail($skipWelcomeEmail)
  {
    $this->skipWelcomeEmail = $skipWelcomeEmail;
  }
  /** @return bool */
  public function getSkipWelcomeEmail()
  {
    return $this->skipWelcomeEmail;
  }
  /** @param string */
  public function setTermsStatus($termsStatus)
  {
    $this->termsStatus = $termsStatus;
  }
  /** @return string */
  public function getTermsStatus()
  {
    return $this->termsStatus;
  }
}

class Configuration extends \Google\Model
{
  /** @var string */
  public $companyName;
  /** @var string */
  public $configurationId;
  /** @var string */
  public $configurationName;
  /** @var string */
  public $contactEmail;
  /** @var string */
  public $contactPhone;
  /** @var string */
  public $customMessage;
  /** @var string */
  public $dpcExtras;
  /** @var string */
  public $dpcResourcePath;
  /** @var bool */
  public $isDefault;
  /** @var string */
  public $name;

  /** @param string */
  public function setCompanyName($companyName)
  {
    $this->companyName = $companyName;
  }
  /** @return string */
  public function getCompanyName()
  {
    return $this->companyName;
  }
  /** @param string */
  public function setConfigurationId($configurationId)
  {
    $this->configurationId = $configurationId;
  }
  /** @return string */
  public function getConfigurationId()
  {
    return $this->configurationId;
  }
  /** @param string */
  public function setConfigurationName($configurationName)
  {
    $this->configurationName = $configurationName;
  }
  /** @return string */
  public function getConfigurationName()
  {
    return $this->configurationName;
  }
  /** @param string */
  public function setContactEmail($contactEmail)
  {
    $this->contactEmail = $contactEmail;
  }
  /** @return string */
  public function getContactEmail()
  {
    return $this->contactEmail;
  }
  /** @param string */
  public function setContactPhone($contactPhone)
  {
    $this->contactPhone = $contactPhone;
  }
  /** @return string */
  public function getContactPhone()
  {
    return $this->contactPhone;
  }
  /** @param string */
  public function setCustomMessage($customMessage)
  {
    $this->customMessage = $customMessage;
  }
  /** @return string */
  public function getCustomMessage()
  {
    return $this->customMessage;
  }
  /** @param string */
  public function setDpcExtras($dpcExtras)
  {
    $this->dpcExtras = $dpcExtras;
  }
  /** @return string */
  public function getDpcExtras()
  {
    return $this->dpcExtras;
  }
  /** @param string */
  public function setDpcResourcePath($dpcResourcePath)
  {
    $this->dpcResourcePath = $dpcResourcePath;
  }
  /** @return string */
  public function getDpcResourcePath()
  {
    return $this->dpcResourcePath;
  }
  /** @param bool */
  public function setIsDefault($isDefault)
  {
    $this->isDefault = $isDefault;
  }
  /** @return bool */
  public function getIsDefault()
  {
    return $this->isDefault;
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

class CreateCustomerRequest extends \Google\Model
{
  /** @var Company */
  public $customer;
  protected $customerType = Company::class;
  protected $customerDataType = '';
  /** @param Company */
  public function setCustomer(Company $customer)
  {
    $this->customer = $customer;
  }
  /** @return Company */
  public function getCustomer()
  {
    return $this->customer;
  }
}

class CustomerApplyConfigurationRequest extends \Google\Model
{
  /** @var string */
  public $configuration;
  /** @var DeviceReference */
  public $device;
  protected $deviceType = DeviceReference::class;
  protected $deviceDataType = '';
  /** @param string */
  public function setConfiguration($configuration)
  {
    $this->configuration = $configuration;
  }
  /** @return string */
  public function getConfiguration()
  {
    return $this->configuration;
  }
  /** @param DeviceReference */
  public function setDevice(DeviceReference $device)
  {
    $this->device = $device;
  }
  /** @return DeviceReference */
  public function getDevice()
  {
    return $this->device;
  }
}

class CustomerListConfigurationsResponse extends \Google\Collection
{
  /** @var Configuration[] */
  public $configurations;
  protected $collection_key = 'configurations';
  protected $configurationsType = Configuration::class;
  protected $configurationsDataType = 'array';
  /** @param Configuration[] */
  public function setConfigurations($configurations)
  {
    $this->configurations = $configurations;
  }
  /** @return Configuration[] */
  public function getConfigurations()
  {
    return $this->configurations;
  }
}

class CustomerListCustomersResponse extends \Google\Collection
{
  /** @var Company[] */
  public $customers;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customers';
  protected $customersType = Company::class;
  protected $customersDataType = 'array';
  /** @param Company[] */
  public function setCustomers($customers)
  {
    $this->customers = $customers;
  }
  /** @return Company[] */
  public function getCustomers()
  {
    return $this->customers;
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

class CustomerListDevicesResponse extends \Google\Collection
{
  /** @var Device[] */
  public $devices;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'devices';
  protected $devicesType = Device::class;
  protected $devicesDataType = 'array';
  /** @param Device[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return Device[] */
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

class CustomerListDpcsResponse extends \Google\Collection
{
  /** @var Dpc[] */
  public $dpcs;
  protected $collection_key = 'dpcs';
  protected $dpcsType = Dpc::class;
  protected $dpcsDataType = 'array';
  /** @param Dpc[] */
  public function setDpcs($dpcs)
  {
    $this->dpcs = $dpcs;
  }
  /** @return Dpc[] */
  public function getDpcs()
  {
    return $this->dpcs;
  }
}

class CustomerRemoveConfigurationRequest extends \Google\Model
{
  /** @var DeviceReference */
  public $device;
  protected $deviceType = DeviceReference::class;
  protected $deviceDataType = '';
  /** @param DeviceReference */
  public function setDevice(DeviceReference $device)
  {
    $this->device = $device;
  }
  /** @return DeviceReference */
  public function getDevice()
  {
    return $this->device;
  }
}

class CustomerUnclaimDeviceRequest extends \Google\Model
{
  /** @var DeviceReference */
  public $device;
  protected $deviceType = DeviceReference::class;
  protected $deviceDataType = '';
  /** @param DeviceReference */
  public function setDevice(DeviceReference $device)
  {
    $this->device = $device;
  }
  /** @return DeviceReference */
  public function getDevice()
  {
    return $this->device;
  }
}

class Device extends \Google\Collection
{
  /** @var DeviceClaim[] */
  public $claims;
  /** @var string */
  public $configuration;
  /** @var string */
  public $deviceId;
  /** @var DeviceIdentifier */
  public $deviceIdentifier;
  /** @var DeviceMetadata */
  public $deviceMetadata;
  /** @var string */
  public $name;
  protected $collection_key = 'claims';
  protected $claimsType = DeviceClaim::class;
  protected $claimsDataType = 'array';
  protected $deviceIdentifierType = DeviceIdentifier::class;
  protected $deviceIdentifierDataType = '';
  protected $deviceMetadataType = DeviceMetadata::class;
  protected $deviceMetadataDataType = '';
  /** @param DeviceClaim[] */
  public function setClaims($claims)
  {
    $this->claims = $claims;
  }
  /** @return DeviceClaim[] */
  public function getClaims()
  {
    return $this->claims;
  }
  /** @param string */
  public function setConfiguration($configuration)
  {
    $this->configuration = $configuration;
  }
  /** @return string */
  public function getConfiguration()
  {
    return $this->configuration;
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
  /** @param DeviceIdentifier */
  public function setDeviceIdentifier(DeviceIdentifier $deviceIdentifier)
  {
    $this->deviceIdentifier = $deviceIdentifier;
  }
  /** @return DeviceIdentifier */
  public function getDeviceIdentifier()
  {
    return $this->deviceIdentifier;
  }
  /** @param DeviceMetadata */
  public function setDeviceMetadata(DeviceMetadata $deviceMetadata)
  {
    $this->deviceMetadata = $deviceMetadata;
  }
  /** @return DeviceMetadata */
  public function getDeviceMetadata()
  {
    return $this->deviceMetadata;
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

class DeviceClaim extends \Google\Model
{
  /** @var string */
  public $additionalService;
  /** @var string */
  public $googleWorkspaceCustomerId;
  /** @var string */
  public $ownerCompanyId;
  /** @var string */
  public $resellerId;
  /** @var string */
  public $sectionType;
  /** @var string */
  public $vacationModeExpireTime;
  /** @var string */
  public $vacationModeStartTime;

  /** @param string */
  public function setAdditionalService($additionalService)
  {
    $this->additionalService = $additionalService;
  }
  /** @return string */
  public function getAdditionalService()
  {
    return $this->additionalService;
  }
  /** @param string */
  public function setGoogleWorkspaceCustomerId($googleWorkspaceCustomerId)
  {
    $this->googleWorkspaceCustomerId = $googleWorkspaceCustomerId;
  }
  /** @return string */
  public function getGoogleWorkspaceCustomerId()
  {
    return $this->googleWorkspaceCustomerId;
  }
  /** @param string */
  public function setOwnerCompanyId($ownerCompanyId)
  {
    $this->ownerCompanyId = $ownerCompanyId;
  }
  /** @return string */
  public function getOwnerCompanyId()
  {
    return $this->ownerCompanyId;
  }
  /** @param string */
  public function setResellerId($resellerId)
  {
    $this->resellerId = $resellerId;
  }
  /** @return string */
  public function getResellerId()
  {
    return $this->resellerId;
  }
  /** @param string */
  public function setSectionType($sectionType)
  {
    $this->sectionType = $sectionType;
  }
  /** @return string */
  public function getSectionType()
  {
    return $this->sectionType;
  }
  /** @param string */
  public function setVacationModeExpireTime($vacationModeExpireTime)
  {
    $this->vacationModeExpireTime = $vacationModeExpireTime;
  }
  /** @return string */
  public function getVacationModeExpireTime()
  {
    return $this->vacationModeExpireTime;
  }
  /** @param string */
  public function setVacationModeStartTime($vacationModeStartTime)
  {
    $this->vacationModeStartTime = $vacationModeStartTime;
  }
  /** @return string */
  public function getVacationModeStartTime()
  {
    return $this->vacationModeStartTime;
  }
}

class DeviceIdentifier extends \Google\Model
{
  /** @var string */
  public $chromeOsAttestedDeviceId;
  /** @var string */
  public $deviceType;
  /** @var string */
  public $imei;
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $meid;
  /** @var string */
  public $model;
  /** @var string */
  public $serialNumber;

  /** @param string */
  public function setChromeOsAttestedDeviceId($chromeOsAttestedDeviceId)
  {
    $this->chromeOsAttestedDeviceId = $chromeOsAttestedDeviceId;
  }
  /** @return string */
  public function getChromeOsAttestedDeviceId()
  {
    return $this->chromeOsAttestedDeviceId;
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
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
}

class DeviceMetadata extends \Google\Model
{
  /** @var string[] */
  public $entries;

  /** @param string[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return string[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class DeviceReference extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var DeviceIdentifier */
  public $deviceIdentifier;
  protected $deviceIdentifierType = DeviceIdentifier::class;
  protected $deviceIdentifierDataType = '';
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
  /** @param DeviceIdentifier */
  public function setDeviceIdentifier(DeviceIdentifier $deviceIdentifier)
  {
    $this->deviceIdentifier = $deviceIdentifier;
  }
  /** @return DeviceIdentifier */
  public function getDeviceIdentifier()
  {
    return $this->deviceIdentifier;
  }
}

class DevicesLongRunningOperationMetadata extends \Google\Model
{
  /** @var int */
  public $devicesCount;
  /** @var string */
  public $processingStatus;
  /** @var int */
  public $progress;

  /** @param int */
  public function setDevicesCount($devicesCount)
  {
    $this->devicesCount = $devicesCount;
  }
  /** @return int */
  public function getDevicesCount()
  {
    return $this->devicesCount;
  }
  /** @param string */
  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }
  /** @return string */
  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }
  /** @param int */
  public function setProgress($progress)
  {
    $this->progress = $progress;
  }
  /** @return int */
  public function getProgress()
  {
    return $this->progress;
  }
}

class DevicesLongRunningOperationResponse extends \Google\Collection
{
  /** @var OperationPerDevice[] */
  public $perDeviceStatus;
  /** @var int */
  public $successCount;
  protected $collection_key = 'perDeviceStatus';
  protected $perDeviceStatusType = OperationPerDevice::class;
  protected $perDeviceStatusDataType = 'array';
  /** @param OperationPerDevice[] */
  public function setPerDeviceStatus($perDeviceStatus)
  {
    $this->perDeviceStatus = $perDeviceStatus;
  }
  /** @return OperationPerDevice[] */
  public function getPerDeviceStatus()
  {
    return $this->perDeviceStatus;
  }
  /** @param int */
  public function setSuccessCount($successCount)
  {
    $this->successCount = $successCount;
  }
  /** @return int */
  public function getSuccessCount()
  {
    return $this->successCount;
  }
}

class Dpc extends \Google\Model
{
  /** @var string */
  public $dpcName;
  /** @var string */
  public $name;
  /** @var string */
  public $packageName;

  /** @param string */
  public function setDpcName($dpcName)
  {
    $this->dpcName = $dpcName;
  }
  /** @return string */
  public function getDpcName()
  {
    return $this->dpcName;
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
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
}

class FindDevicesByDeviceIdentifierRequest extends \Google\Model
{
  /** @var DeviceIdentifier */
  public $deviceIdentifier;
  /** @var string */
  public $limit;
  /** @var string */
  public $pageToken;
  protected $deviceIdentifierType = DeviceIdentifier::class;
  protected $deviceIdentifierDataType = '';
  /** @param DeviceIdentifier */
  public function setDeviceIdentifier(DeviceIdentifier $deviceIdentifier)
  {
    $this->deviceIdentifier = $deviceIdentifier;
  }
  /** @return DeviceIdentifier */
  public function getDeviceIdentifier()
  {
    return $this->deviceIdentifier;
  }
  /** @param string */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  /** @return string */
  public function getLimit()
  {
    return $this->limit;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
}

class FindDevicesByDeviceIdentifierResponse extends \Google\Collection
{
  /** @var Device[] */
  public $devices;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'devices';
  protected $devicesType = Device::class;
  protected $devicesDataType = 'array';
  /** @param Device[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return Device[] */
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class FindDevicesByOwnerRequest extends \Google\Collection
{
  /** @var string[] */
  public $customerId;
  /** @var string[] */
  public $googleWorkspaceCustomerId;
  /** @var string */
  public $limit;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $sectionType;
  protected $collection_key = 'googleWorkspaceCustomerId';
  /** @param string[] */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string[] */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param string[] */
  public function setGoogleWorkspaceCustomerId($googleWorkspaceCustomerId)
  {
    $this->googleWorkspaceCustomerId = $googleWorkspaceCustomerId;
  }
  /** @return string[] */
  public function getGoogleWorkspaceCustomerId()
  {
    return $this->googleWorkspaceCustomerId;
  }
  /** @param string */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  /** @return string */
  public function getLimit()
  {
    return $this->limit;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param string */
  public function setSectionType($sectionType)
  {
    $this->sectionType = $sectionType;
  }
  /** @return string */
  public function getSectionType()
  {
    return $this->sectionType;
  }
}

class FindDevicesByOwnerResponse extends \Google\Collection
{
  /** @var Device[] */
  public $devices;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'devices';
  protected $devicesType = Device::class;
  protected $devicesDataType = 'array';
  /** @param Device[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return Device[] */
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class GoogleWorkspaceAccount extends \Google\Collection
{
  /** @var string */
  public $customerId;
  /** @var string[] */
  public $preProvisioningTokens;
  protected $collection_key = 'preProvisioningTokens';
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param string[] */
  public function setPreProvisioningTokens($preProvisioningTokens)
  {
    $this->preProvisioningTokens = $preProvisioningTokens;
  }
  /** @return string[] */
  public function getPreProvisioningTokens()
  {
    return $this->preProvisioningTokens;
  }
}

class ListCustomersResponse extends \Google\Collection
{
  /** @var Company[] */
  public $customers;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'customers';
  protected $customersType = Company::class;
  protected $customersDataType = 'array';
  /** @param Company[] */
  public function setCustomers($customers)
  {
    $this->customers = $customers;
  }
  /** @return Company[] */
  public function getCustomers()
  {
    return $this->customers;
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class ListVendorCustomersResponse extends \Google\Collection
{
  /** @var Company[] */
  public $customers;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'customers';
  protected $customersType = Company::class;
  protected $customersDataType = 'array';
  /** @param Company[] */
  public function setCustomers($customers)
  {
    $this->customers = $customers;
  }
  /** @return Company[] */
  public function getCustomers()
  {
    return $this->customers;
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class ListVendorsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  /** @var Company[] */
  public $vendors;
  protected $collection_key = 'vendors';
  protected $vendorsType = Company::class;
  protected $vendorsDataType = 'array';
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
  /** @param Company[] */
  public function setVendors($vendors)
  {
    $this->vendors = $vendors;
  }
  /** @return Company[] */
  public function getVendors()
  {
    return $this->vendors;
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

class OperationPerDevice extends \Google\Model
{
  /** @var PartnerClaim */
  public $claim;
  /** @var PerDeviceStatusInBatch */
  public $result;
  /** @var PartnerUnclaim */
  public $unclaim;
  /** @var UpdateMetadataArguments */
  public $updateMetadata;
  protected $claimType = PartnerClaim::class;
  protected $claimDataType = '';
  protected $resultType = PerDeviceStatusInBatch::class;
  protected $resultDataType = '';
  protected $unclaimType = PartnerUnclaim::class;
  protected $unclaimDataType = '';
  protected $updateMetadataType = UpdateMetadataArguments::class;
  protected $updateMetadataDataType = '';
  /** @param PartnerClaim */
  public function setClaim(PartnerClaim $claim)
  {
    $this->claim = $claim;
  }
  /** @return PartnerClaim */
  public function getClaim()
  {
    return $this->claim;
  }
  /** @param PerDeviceStatusInBatch */
  public function setResult(PerDeviceStatusInBatch $result)
  {
    $this->result = $result;
  }
  /** @return PerDeviceStatusInBatch */
  public function getResult()
  {
    return $this->result;
  }
  /** @param PartnerUnclaim */
  public function setUnclaim(PartnerUnclaim $unclaim)
  {
    $this->unclaim = $unclaim;
  }
  /** @return PartnerUnclaim */
  public function getUnclaim()
  {
    return $this->unclaim;
  }
  /** @param UpdateMetadataArguments */
  public function setUpdateMetadata(UpdateMetadataArguments $updateMetadata)
  {
    $this->updateMetadata = $updateMetadata;
  }
  /** @return UpdateMetadataArguments */
  public function getUpdateMetadata()
  {
    return $this->updateMetadata;
  }
}

class PartnerClaim extends \Google\Model
{
  /** @var string */
  public $customerId;
  /** @var DeviceIdentifier */
  public $deviceIdentifier;
  /** @var DeviceMetadata */
  public $deviceMetadata;
  /** @var string */
  public $googleWorkspaceCustomerId;
  /** @var string */
  public $preProvisioningToken;
  /** @var string */
  public $sectionType;
  protected $deviceIdentifierType = DeviceIdentifier::class;
  protected $deviceIdentifierDataType = '';
  protected $deviceMetadataType = DeviceMetadata::class;
  protected $deviceMetadataDataType = '';
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param DeviceIdentifier */
  public function setDeviceIdentifier(DeviceIdentifier $deviceIdentifier)
  {
    $this->deviceIdentifier = $deviceIdentifier;
  }
  /** @return DeviceIdentifier */
  public function getDeviceIdentifier()
  {
    return $this->deviceIdentifier;
  }
  /** @param DeviceMetadata */
  public function setDeviceMetadata(DeviceMetadata $deviceMetadata)
  {
    $this->deviceMetadata = $deviceMetadata;
  }
  /** @return DeviceMetadata */
  public function getDeviceMetadata()
  {
    return $this->deviceMetadata;
  }
  /** @param string */
  public function setGoogleWorkspaceCustomerId($googleWorkspaceCustomerId)
  {
    $this->googleWorkspaceCustomerId = $googleWorkspaceCustomerId;
  }
  /** @return string */
  public function getGoogleWorkspaceCustomerId()
  {
    return $this->googleWorkspaceCustomerId;
  }
  /** @param string */
  public function setPreProvisioningToken($preProvisioningToken)
  {
    $this->preProvisioningToken = $preProvisioningToken;
  }
  /** @return string */
  public function getPreProvisioningToken()
  {
    return $this->preProvisioningToken;
  }
  /** @param string */
  public function setSectionType($sectionType)
  {
    $this->sectionType = $sectionType;
  }
  /** @return string */
  public function getSectionType()
  {
    return $this->sectionType;
  }
}

class PartnerUnclaim extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var DeviceIdentifier */
  public $deviceIdentifier;
  /** @var string */
  public $sectionType;
  /** @var int */
  public $vacationModeDays;
  /** @var string */
  public $vacationModeExpireTime;
  protected $deviceIdentifierType = DeviceIdentifier::class;
  protected $deviceIdentifierDataType = '';
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
  /** @param DeviceIdentifier */
  public function setDeviceIdentifier(DeviceIdentifier $deviceIdentifier)
  {
    $this->deviceIdentifier = $deviceIdentifier;
  }
  /** @return DeviceIdentifier */
  public function getDeviceIdentifier()
  {
    return $this->deviceIdentifier;
  }
  /** @param string */
  public function setSectionType($sectionType)
  {
    $this->sectionType = $sectionType;
  }
  /** @return string */
  public function getSectionType()
  {
    return $this->sectionType;
  }
  /** @param int */
  public function setVacationModeDays($vacationModeDays)
  {
    $this->vacationModeDays = $vacationModeDays;
  }
  /** @return int */
  public function getVacationModeDays()
  {
    return $this->vacationModeDays;
  }
  /** @param string */
  public function setVacationModeExpireTime($vacationModeExpireTime)
  {
    $this->vacationModeExpireTime = $vacationModeExpireTime;
  }
  /** @return string */
  public function getVacationModeExpireTime()
  {
    return $this->vacationModeExpireTime;
  }
}

class PerDeviceStatusInBatch extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var string */
  public $errorIdentifier;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $status;

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
  public function setErrorIdentifier($errorIdentifier)
  {
    $this->errorIdentifier = $errorIdentifier;
  }
  /** @return string */
  public function getErrorIdentifier()
  {
    return $this->errorIdentifier;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
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

class UnclaimDeviceRequest extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var DeviceIdentifier */
  public $deviceIdentifier;
  /** @var string */
  public $sectionType;
  /** @var int */
  public $vacationModeDays;
  /** @var string */
  public $vacationModeExpireTime;
  protected $deviceIdentifierType = DeviceIdentifier::class;
  protected $deviceIdentifierDataType = '';
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
  /** @param DeviceIdentifier */
  public function setDeviceIdentifier(DeviceIdentifier $deviceIdentifier)
  {
    $this->deviceIdentifier = $deviceIdentifier;
  }
  /** @return DeviceIdentifier */
  public function getDeviceIdentifier()
  {
    return $this->deviceIdentifier;
  }
  /** @param string */
  public function setSectionType($sectionType)
  {
    $this->sectionType = $sectionType;
  }
  /** @return string */
  public function getSectionType()
  {
    return $this->sectionType;
  }
  /** @param int */
  public function setVacationModeDays($vacationModeDays)
  {
    $this->vacationModeDays = $vacationModeDays;
  }
  /** @return int */
  public function getVacationModeDays()
  {
    return $this->vacationModeDays;
  }
  /** @param string */
  public function setVacationModeExpireTime($vacationModeExpireTime)
  {
    $this->vacationModeExpireTime = $vacationModeExpireTime;
  }
  /** @return string */
  public function getVacationModeExpireTime()
  {
    return $this->vacationModeExpireTime;
  }
}

class UnclaimDevicesRequest extends \Google\Collection
{
  /** @var PartnerUnclaim[] */
  public $unclaims;
  protected $collection_key = 'unclaims';
  protected $unclaimsType = PartnerUnclaim::class;
  protected $unclaimsDataType = 'array';
  /** @param PartnerUnclaim[] */
  public function setUnclaims($unclaims)
  {
    $this->unclaims = $unclaims;
  }
  /** @return PartnerUnclaim[] */
  public function getUnclaims()
  {
    return $this->unclaims;
  }
}

class UpdateDeviceMetadataInBatchRequest extends \Google\Collection
{
  /** @var UpdateMetadataArguments[] */
  public $updates;
  protected $collection_key = 'updates';
  protected $updatesType = UpdateMetadataArguments::class;
  protected $updatesDataType = 'array';
  /** @param UpdateMetadataArguments[] */
  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }
  /** @return UpdateMetadataArguments[] */
  public function getUpdates()
  {
    return $this->updates;
  }
}

class UpdateDeviceMetadataRequest extends \Google\Model
{
  /** @var DeviceMetadata */
  public $deviceMetadata;
  protected $deviceMetadataType = DeviceMetadata::class;
  protected $deviceMetadataDataType = '';
  /** @param DeviceMetadata */
  public function setDeviceMetadata(DeviceMetadata $deviceMetadata)
  {
    $this->deviceMetadata = $deviceMetadata;
  }
  /** @return DeviceMetadata */
  public function getDeviceMetadata()
  {
    return $this->deviceMetadata;
  }
}

class UpdateMetadataArguments extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var DeviceIdentifier */
  public $deviceIdentifier;
  /** @var DeviceMetadata */
  public $deviceMetadata;
  protected $deviceIdentifierType = DeviceIdentifier::class;
  protected $deviceIdentifierDataType = '';
  protected $deviceMetadataType = DeviceMetadata::class;
  protected $deviceMetadataDataType = '';
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
  /** @param DeviceIdentifier */
  public function setDeviceIdentifier(DeviceIdentifier $deviceIdentifier)
  {
    $this->deviceIdentifier = $deviceIdentifier;
  }
  /** @return DeviceIdentifier */
  public function getDeviceIdentifier()
  {
    return $this->deviceIdentifier;
  }
  /** @param DeviceMetadata */
  public function setDeviceMetadata(DeviceMetadata $deviceMetadata)
  {
    $this->deviceMetadata = $deviceMetadata;
  }
  /** @return DeviceMetadata */
  public function getDeviceMetadata()
  {
    return $this->deviceMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroiddeviceprovisioningEmpty::class, 'Google_Service_AndroidProvisioningPartner_AndroiddeviceprovisioningEmpty');
class_alias(ClaimDeviceRequest::class, 'Google_Service_AndroidProvisioningPartner_ClaimDeviceRequest');
class_alias(ClaimDeviceResponse::class, 'Google_Service_AndroidProvisioningPartner_ClaimDeviceResponse');
class_alias(ClaimDevicesRequest::class, 'Google_Service_AndroidProvisioningPartner_ClaimDevicesRequest');
class_alias(Company::class, 'Google_Service_AndroidProvisioningPartner_Company');
class_alias(Configuration::class, 'Google_Service_AndroidProvisioningPartner_Configuration');
class_alias(CreateCustomerRequest::class, 'Google_Service_AndroidProvisioningPartner_CreateCustomerRequest');
class_alias(CustomerApplyConfigurationRequest::class, 'Google_Service_AndroidProvisioningPartner_CustomerApplyConfigurationRequest');
class_alias(CustomerListConfigurationsResponse::class, 'Google_Service_AndroidProvisioningPartner_CustomerListConfigurationsResponse');
class_alias(CustomerListCustomersResponse::class, 'Google_Service_AndroidProvisioningPartner_CustomerListCustomersResponse');
class_alias(CustomerListDevicesResponse::class, 'Google_Service_AndroidProvisioningPartner_CustomerListDevicesResponse');
class_alias(CustomerListDpcsResponse::class, 'Google_Service_AndroidProvisioningPartner_CustomerListDpcsResponse');
class_alias(CustomerRemoveConfigurationRequest::class, 'Google_Service_AndroidProvisioningPartner_CustomerRemoveConfigurationRequest');
class_alias(CustomerUnclaimDeviceRequest::class, 'Google_Service_AndroidProvisioningPartner_CustomerUnclaimDeviceRequest');
class_alias(Device::class, 'Google_Service_AndroidProvisioningPartner_Device');
class_alias(DeviceClaim::class, 'Google_Service_AndroidProvisioningPartner_DeviceClaim');
class_alias(DeviceIdentifier::class, 'Google_Service_AndroidProvisioningPartner_DeviceIdentifier');
class_alias(DeviceMetadata::class, 'Google_Service_AndroidProvisioningPartner_DeviceMetadata');
class_alias(DeviceReference::class, 'Google_Service_AndroidProvisioningPartner_DeviceReference');
class_alias(DevicesLongRunningOperationMetadata::class, 'Google_Service_AndroidProvisioningPartner_DevicesLongRunningOperationMetadata');
class_alias(DevicesLongRunningOperationResponse::class, 'Google_Service_AndroidProvisioningPartner_DevicesLongRunningOperationResponse');
class_alias(Dpc::class, 'Google_Service_AndroidProvisioningPartner_Dpc');
class_alias(FindDevicesByDeviceIdentifierRequest::class, 'Google_Service_AndroidProvisioningPartner_FindDevicesByDeviceIdentifierRequest');
class_alias(FindDevicesByDeviceIdentifierResponse::class, 'Google_Service_AndroidProvisioningPartner_FindDevicesByDeviceIdentifierResponse');
class_alias(FindDevicesByOwnerRequest::class, 'Google_Service_AndroidProvisioningPartner_FindDevicesByOwnerRequest');
class_alias(FindDevicesByOwnerResponse::class, 'Google_Service_AndroidProvisioningPartner_FindDevicesByOwnerResponse');
class_alias(GoogleWorkspaceAccount::class, 'Google_Service_AndroidProvisioningPartner_GoogleWorkspaceAccount');
class_alias(ListCustomersResponse::class, 'Google_Service_AndroidProvisioningPartner_ListCustomersResponse');
class_alias(ListVendorCustomersResponse::class, 'Google_Service_AndroidProvisioningPartner_ListVendorCustomersResponse');
class_alias(ListVendorsResponse::class, 'Google_Service_AndroidProvisioningPartner_ListVendorsResponse');
class_alias(Operation::class, 'Google_Service_AndroidProvisioningPartner_Operation');
class_alias(OperationPerDevice::class, 'Google_Service_AndroidProvisioningPartner_OperationPerDevice');
class_alias(PartnerClaim::class, 'Google_Service_AndroidProvisioningPartner_PartnerClaim');
class_alias(PartnerUnclaim::class, 'Google_Service_AndroidProvisioningPartner_PartnerUnclaim');
class_alias(PerDeviceStatusInBatch::class, 'Google_Service_AndroidProvisioningPartner_PerDeviceStatusInBatch');
class_alias(Status::class, 'Google_Service_AndroidProvisioningPartner_Status');
class_alias(UnclaimDeviceRequest::class, 'Google_Service_AndroidProvisioningPartner_UnclaimDeviceRequest');
class_alias(UnclaimDevicesRequest::class, 'Google_Service_AndroidProvisioningPartner_UnclaimDevicesRequest');
class_alias(UpdateDeviceMetadataInBatchRequest::class, 'Google_Service_AndroidProvisioningPartner_UpdateDeviceMetadataInBatchRequest');
class_alias(UpdateDeviceMetadataRequest::class, 'Google_Service_AndroidProvisioningPartner_UpdateDeviceMetadataRequest');
class_alias(UpdateMetadataArguments::class, 'Google_Service_AndroidProvisioningPartner_UpdateMetadataArguments');
