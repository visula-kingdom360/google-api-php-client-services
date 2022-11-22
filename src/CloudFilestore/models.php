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

namespace Google\Service\CloudFilestore;

class Backup extends \Google\Model
{
  /** @var string */
  public $capacityGb;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $downloadBytes;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var bool */
  public $satisfiesPzs;
  /** @var string */
  public $sourceFileShare;
  /** @var string */
  public $sourceInstance;
  /** @var string */
  public $sourceInstanceTier;
  /** @var string */
  public $state;
  /** @var string */
  public $storageBytes;

  /** @param string */
  public function setCapacityGb($capacityGb)
  {
    $this->capacityGb = $capacityGb;
  }
  /** @return string */
  public function getCapacityGb()
  {
    return $this->capacityGb;
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
  public function setDownloadBytes($downloadBytes)
  {
    $this->downloadBytes = $downloadBytes;
  }
  /** @return string */
  public function getDownloadBytes()
  {
    return $this->downloadBytes;
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
  /** @param bool */
  public function setSatisfiesPzs($satisfiesPzs)
  {
    $this->satisfiesPzs = $satisfiesPzs;
  }
  /** @return bool */
  public function getSatisfiesPzs()
  {
    return $this->satisfiesPzs;
  }
  /** @param string */
  public function setSourceFileShare($sourceFileShare)
  {
    $this->sourceFileShare = $sourceFileShare;
  }
  /** @return string */
  public function getSourceFileShare()
  {
    return $this->sourceFileShare;
  }
  /** @param string */
  public function setSourceInstance($sourceInstance)
  {
    $this->sourceInstance = $sourceInstance;
  }
  /** @return string */
  public function getSourceInstance()
  {
    return $this->sourceInstance;
  }
  /** @param string */
  public function setSourceInstanceTier($sourceInstanceTier)
  {
    $this->sourceInstanceTier = $sourceInstanceTier;
  }
  /** @return string */
  public function getSourceInstanceTier()
  {
    return $this->sourceInstanceTier;
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
  public function setStorageBytes($storageBytes)
  {
    $this->storageBytes = $storageBytes;
  }
  /** @return string */
  public function getStorageBytes()
  {
    return $this->storageBytes;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class DailyCycle extends \Google\Model
{
  /** @var string */
  public $duration;
  /** @var TimeOfDay */
  public $startTime;
  protected $startTimeType = TimeOfDay::class;
  protected $startTimeDataType = '';
  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param TimeOfDay */
  public function setStartTime(TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return TimeOfDay */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class Date extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $month;
  /** @var int */
  public $year;

  /** @param int */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return int */
  public function getDay()
  {
    return $this->day;
  }
  /** @param int */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /** @return int */
  public function getMonth()
  {
    return $this->month;
  }
  /** @param int */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /** @return int */
  public function getYear()
  {
    return $this->year;
  }
}

class DenyMaintenancePeriod extends \Google\Model
{
  /** @var Date */
  public $endDate;
  /** @var Date */
  public $startDate;
  /** @var TimeOfDay */
  public $time;
  protected $endDateType = Date::class;
  protected $endDateDataType = '';
  protected $startDateType = Date::class;
  protected $startDateDataType = '';
  protected $timeType = TimeOfDay::class;
  protected $timeDataType = '';
  /** @param Date */
  public function setEndDate(Date $endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return Date */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param Date */
  public function setStartDate(Date $startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return Date */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /** @param TimeOfDay */
  public function setTime(TimeOfDay $time)
  {
    $this->time = $time;
  }
  /** @return TimeOfDay */
  public function getTime()
  {
    return $this->time;
  }
}

class FileEmpty extends \Google\Model
{
}

class FileShareConfig extends \Google\Collection
{
  /** @var string */
  public $capacityGb;
  /** @var string */
  public $name;
  /** @var NfsExportOptions[] */
  public $nfsExportOptions;
  /** @var string */
  public $sourceBackup;
  protected $collection_key = 'nfsExportOptions';
  protected $nfsExportOptionsType = NfsExportOptions::class;
  protected $nfsExportOptionsDataType = 'array';
  /** @param string */
  public function setCapacityGb($capacityGb)
  {
    $this->capacityGb = $capacityGb;
  }
  /** @return string */
  public function getCapacityGb()
  {
    return $this->capacityGb;
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
  /** @param NfsExportOptions[] */
  public function setNfsExportOptions($nfsExportOptions)
  {
    $this->nfsExportOptions = $nfsExportOptions;
  }
  /** @return NfsExportOptions[] */
  public function getNfsExportOptions()
  {
    return $this->nfsExportOptions;
  }
  /** @param string */
  public function setSourceBackup($sourceBackup)
  {
    $this->sourceBackup = $sourceBackup;
  }
  /** @return string */
  public function getSourceBackup()
  {
    return $this->sourceBackup;
  }
}

class GoogleCloudSaasacceleratorManagementProvidersV1Instance extends \Google\Collection
{
  /** @var string */
  public $consumerDefinedName;
  /** @var string */
  public $createTime;
  /** @var string */
  public $instanceType;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $maintenancePolicyNames;
  /** @var GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule[] */
  public $maintenanceSchedules;
  /** @var GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings */
  public $maintenanceSettings;
  /** @var string */
  public $name;
  /** @var GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter[] */
  public $notificationParameters;
  /** @var string[] */
  public $producerMetadata;
  /** @var GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource[] */
  public $provisionedResources;
  /** @var string */
  public $slmInstanceTemplate;
  /** @var GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata */
  public $sloMetadata;
  /** @var string[] */
  public $softwareVersions;
  /** @var string */
  public $state;
  /** @var string */
  public $tenantProjectId;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'provisionedResources';
  protected $maintenanceSchedulesType = GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule::class;
  protected $maintenanceSchedulesDataType = 'map';
  protected $maintenanceSettingsType = GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings::class;
  protected $maintenanceSettingsDataType = '';
  protected $notificationParametersType = GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter::class;
  protected $notificationParametersDataType = 'map';
  protected $provisionedResourcesType = GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource::class;
  protected $provisionedResourcesDataType = 'array';
  protected $sloMetadataType = GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata::class;
  protected $sloMetadataDataType = '';
  /** @param string */
  public function setConsumerDefinedName($consumerDefinedName)
  {
    $this->consumerDefinedName = $consumerDefinedName;
  }
  /** @return string */
  public function getConsumerDefinedName()
  {
    return $this->consumerDefinedName;
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
  public function setInstanceType($instanceType)
  {
    $this->instanceType = $instanceType;
  }
  /** @return string */
  public function getInstanceType()
  {
    return $this->instanceType;
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
  public function setMaintenancePolicyNames($maintenancePolicyNames)
  {
    $this->maintenancePolicyNames = $maintenancePolicyNames;
  }
  /** @return string[] */
  public function getMaintenancePolicyNames()
  {
    return $this->maintenancePolicyNames;
  }
  /** @param GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule[] */
  public function setMaintenanceSchedules($maintenanceSchedules)
  {
    $this->maintenanceSchedules = $maintenanceSchedules;
  }
  /** @return GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule[] */
  public function getMaintenanceSchedules()
  {
    return $this->maintenanceSchedules;
  }
  /** @param GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings */
  public function setMaintenanceSettings(GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings $maintenanceSettings)
  {
    $this->maintenanceSettings = $maintenanceSettings;
  }
  /** @return GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings */
  public function getMaintenanceSettings()
  {
    return $this->maintenanceSettings;
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
  /** @param GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter[] */
  public function setNotificationParameters($notificationParameters)
  {
    $this->notificationParameters = $notificationParameters;
  }
  /** @return GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter[] */
  public function getNotificationParameters()
  {
    return $this->notificationParameters;
  }
  /** @param string[] */
  public function setProducerMetadata($producerMetadata)
  {
    $this->producerMetadata = $producerMetadata;
  }
  /** @return string[] */
  public function getProducerMetadata()
  {
    return $this->producerMetadata;
  }
  /** @param GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource[] */
  public function setProvisionedResources($provisionedResources)
  {
    $this->provisionedResources = $provisionedResources;
  }
  /** @return GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource[] */
  public function getProvisionedResources()
  {
    return $this->provisionedResources;
  }
  /** @param string */
  public function setSlmInstanceTemplate($slmInstanceTemplate)
  {
    $this->slmInstanceTemplate = $slmInstanceTemplate;
  }
  /** @return string */
  public function getSlmInstanceTemplate()
  {
    return $this->slmInstanceTemplate;
  }
  /** @param GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata */
  public function setSloMetadata(GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata $sloMetadata)
  {
    $this->sloMetadata = $sloMetadata;
  }
  /** @return GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata */
  public function getSloMetadata()
  {
    return $this->sloMetadata;
  }
  /** @param string[] */
  public function setSoftwareVersions($softwareVersions)
  {
    $this->softwareVersions = $softwareVersions;
  }
  /** @return string[] */
  public function getSoftwareVersions()
  {
    return $this->softwareVersions;
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
  public function setTenantProjectId($tenantProjectId)
  {
    $this->tenantProjectId = $tenantProjectId;
  }
  /** @return string */
  public function getTenantProjectId()
  {
    return $this->tenantProjectId;
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

class GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule extends \Google\Model
{
  /** @var bool */
  public $canReschedule;
  /** @var string */
  public $endTime;
  /** @var string */
  public $rolloutManagementPolicy;
  /** @var string */
  public $scheduleDeadlineTime;
  /** @var string */
  public $startTime;

  /** @param bool */
  public function setCanReschedule($canReschedule)
  {
    $this->canReschedule = $canReschedule;
  }
  /** @return bool */
  public function getCanReschedule()
  {
    return $this->canReschedule;
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
  /** @param string */
  public function setRolloutManagementPolicy($rolloutManagementPolicy)
  {
    $this->rolloutManagementPolicy = $rolloutManagementPolicy;
  }
  /** @return string */
  public function getRolloutManagementPolicy()
  {
    return $this->rolloutManagementPolicy;
  }
  /** @param string */
  public function setScheduleDeadlineTime($scheduleDeadlineTime)
  {
    $this->scheduleDeadlineTime = $scheduleDeadlineTime;
  }
  /** @return string */
  public function getScheduleDeadlineTime()
  {
    return $this->scheduleDeadlineTime;
  }
  /** @param string */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings extends \Google\Model
{
  /** @var bool */
  public $exclude;
  /** @var bool */
  public $isRollback;
  /** @var MaintenancePolicy[] */
  public $maintenancePolicies;
  protected $maintenancePoliciesType = MaintenancePolicy::class;
  protected $maintenancePoliciesDataType = 'map';
  /** @param bool */
  public function setExclude($exclude)
  {
    $this->exclude = $exclude;
  }
  /** @return bool */
  public function getExclude()
  {
    return $this->exclude;
  }
  /** @param bool */
  public function setIsRollback($isRollback)
  {
    $this->isRollback = $isRollback;
  }
  /** @return bool */
  public function getIsRollback()
  {
    return $this->isRollback;
  }
  /** @param MaintenancePolicy[] */
  public function setMaintenancePolicies($maintenancePolicies)
  {
    $this->maintenancePolicies = $maintenancePolicies;
  }
  /** @return MaintenancePolicy[] */
  public function getMaintenancePolicies()
  {
    return $this->maintenancePolicies;
  }
}

class GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata extends \Google\Model
{
  /** @var string */
  public $location;
  /** @var string */
  public $nodeId;
  /** @var GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility */
  public $perSliEligibility;
  protected $perSliEligibilityType = GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility::class;
  protected $perSliEligibilityDataType = '';
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
  public function setNodeId($nodeId)
  {
    $this->nodeId = $nodeId;
  }
  /** @return string */
  public function getNodeId()
  {
    return $this->nodeId;
  }
  /** @param GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility */
  public function setPerSliEligibility(GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility $perSliEligibility)
  {
    $this->perSliEligibility = $perSliEligibility;
  }
  /** @return GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility */
  public function getPerSliEligibility()
  {
    return $this->perSliEligibility;
  }
}

class GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility extends \Google\Model
{
  /** @var GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility[] */
  public $eligibilities;
  protected $eligibilitiesType = GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility::class;
  protected $eligibilitiesDataType = 'map';
  /** @param GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility[] */
  public function setEligibilities($eligibilities)
  {
    $this->eligibilities = $eligibilities;
  }
  /** @return GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility[] */
  public function getEligibilities()
  {
    return $this->eligibilities;
  }
}

class GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource extends \Google\Model
{
  /** @var string */
  public $resourceType;
  /** @var string */
  public $resourceUrl;

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
  /** @param string */
  public function setResourceUrl($resourceUrl)
  {
    $this->resourceUrl = $resourceUrl;
  }
  /** @return string */
  public function getResourceUrl()
  {
    return $this->resourceUrl;
  }
}

class GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility extends \Google\Model
{
  /** @var bool */
  public $eligible;
  /** @var string */
  public $reason;

  /** @param bool */
  public function setEligible($eligible)
  {
    $this->eligible = $eligible;
  }
  /** @return bool */
  public function getEligible()
  {
    return $this->eligible;
  }
  /** @param string */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
  }
}

class GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata extends \Google\Collection
{
  /** @var GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata[] */
  public $nodes;
  /** @var GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility */
  public $perSliEligibility;
  /** @var string */
  public $tier;
  protected $collection_key = 'nodes';
  protected $nodesType = GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata::class;
  protected $nodesDataType = 'array';
  protected $perSliEligibilityType = GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility::class;
  protected $perSliEligibilityDataType = '';
  /** @param GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata[] */
  public function setNodes($nodes)
  {
    $this->nodes = $nodes;
  }
  /** @return GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata[] */
  public function getNodes()
  {
    return $this->nodes;
  }
  /** @param GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility */
  public function setPerSliEligibility(GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility $perSliEligibility)
  {
    $this->perSliEligibility = $perSliEligibility;
  }
  /** @return GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility */
  public function getPerSliEligibility()
  {
    return $this->perSliEligibility;
  }
  /** @param string */
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  /** @return string */
  public function getTier()
  {
    return $this->tier;
  }
}

class Instance extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var FileShareConfig[] */
  public $fileShares;
  /** @var string */
  public $kmsKeyName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var NetworkConfig[] */
  public $networks;
  /** @var bool */
  public $satisfiesPzs;
  /** @var string */
  public $state;
  /** @var string */
  public $statusMessage;
  /** @var string[] */
  public $suspensionReasons;
  /** @var string */
  public $tier;
  protected $collection_key = 'suspensionReasons';
  protected $fileSharesType = FileShareConfig::class;
  protected $fileSharesDataType = 'array';
  protected $networksType = NetworkConfig::class;
  protected $networksDataType = 'array';
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param FileShareConfig[] */
  public function setFileShares($fileShares)
  {
    $this->fileShares = $fileShares;
  }
  /** @return FileShareConfig[] */
  public function getFileShares()
  {
    return $this->fileShares;
  }
  /** @param string */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /** @return string */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
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
  /** @param bool */
  public function setSatisfiesPzs($satisfiesPzs)
  {
    $this->satisfiesPzs = $satisfiesPzs;
  }
  /** @return bool */
  public function getSatisfiesPzs()
  {
    return $this->satisfiesPzs;
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
  /** @param string[] */
  public function setSuspensionReasons($suspensionReasons)
  {
    $this->suspensionReasons = $suspensionReasons;
  }
  /** @return string[] */
  public function getSuspensionReasons()
  {
    return $this->suspensionReasons;
  }
  /** @param string */
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  /** @return string */
  public function getTier()
  {
    return $this->tier;
  }
}

class ListBackupsResponse extends \Google\Collection
{
  /** @var Backup[] */
  public $backups;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $backupsType = Backup::class;
  protected $backupsDataType = 'array';
  /** @param Backup[] */
  public function setBackups($backups)
  {
    $this->backups = $backups;
  }
  /** @return Backup[] */
  public function getBackups()
  {
    return $this->backups;
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

class ListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Operation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = Operation::class;
  protected $operationsDataType = 'array';
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
  /** @param Operation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return Operation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class ListSnapshotsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Snapshot[] */
  public $snapshots;
  protected $collection_key = 'snapshots';
  protected $snapshotsType = Snapshot::class;
  protected $snapshotsDataType = 'array';
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
  /** @param Snapshot[] */
  public function setSnapshots($snapshots)
  {
    $this->snapshots = $snapshots;
  }
  /** @return Snapshot[] */
  public function getSnapshots()
  {
    return $this->snapshots;
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

class MaintenancePolicy extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var UpdatePolicy */
  public $updatePolicy;
  /** @var string */
  public $updateTime;
  protected $updatePolicyType = UpdatePolicy::class;
  protected $updatePolicyDataType = '';
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param UpdatePolicy */
  public function setUpdatePolicy(UpdatePolicy $updatePolicy)
  {
    $this->updatePolicy = $updatePolicy;
  }
  /** @return UpdatePolicy */
  public function getUpdatePolicy()
  {
    return $this->updatePolicy;
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

class MaintenanceWindow extends \Google\Model
{
  /** @var DailyCycle */
  public $dailyCycle;
  /** @var WeeklyCycle */
  public $weeklyCycle;
  protected $dailyCycleType = DailyCycle::class;
  protected $dailyCycleDataType = '';
  protected $weeklyCycleType = WeeklyCycle::class;
  protected $weeklyCycleDataType = '';
  /** @param DailyCycle */
  public function setDailyCycle(DailyCycle $dailyCycle)
  {
    $this->dailyCycle = $dailyCycle;
  }
  /** @return DailyCycle */
  public function getDailyCycle()
  {
    return $this->dailyCycle;
  }
  /** @param WeeklyCycle */
  public function setWeeklyCycle(WeeklyCycle $weeklyCycle)
  {
    $this->weeklyCycle = $weeklyCycle;
  }
  /** @return WeeklyCycle */
  public function getWeeklyCycle()
  {
    return $this->weeklyCycle;
  }
}

class NetworkConfig extends \Google\Collection
{
  /** @var string */
  public $connectMode;
  /** @var string[] */
  public $ipAddresses;
  /** @var string[] */
  public $modes;
  /** @var string */
  public $network;
  /** @var string */
  public $reservedIpRange;
  protected $collection_key = 'modes';
  /** @param string */
  public function setConnectMode($connectMode)
  {
    $this->connectMode = $connectMode;
  }
  /** @return string */
  public function getConnectMode()
  {
    return $this->connectMode;
  }
  /** @param string[] */
  public function setIpAddresses($ipAddresses)
  {
    $this->ipAddresses = $ipAddresses;
  }
  /** @return string[] */
  public function getIpAddresses()
  {
    return $this->ipAddresses;
  }
  /** @param string[] */
  public function setModes($modes)
  {
    $this->modes = $modes;
  }
  /** @return string[] */
  public function getModes()
  {
    return $this->modes;
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
  public function setReservedIpRange($reservedIpRange)
  {
    $this->reservedIpRange = $reservedIpRange;
  }
  /** @return string */
  public function getReservedIpRange()
  {
    return $this->reservedIpRange;
  }
}

class NfsExportOptions extends \Google\Collection
{
  /** @var string */
  public $accessMode;
  /** @var string */
  public $anonGid;
  /** @var string */
  public $anonUid;
  /** @var string[] */
  public $ipRanges;
  /** @var string */
  public $squashMode;
  protected $collection_key = 'ipRanges';
  /** @param string */
  public function setAccessMode($accessMode)
  {
    $this->accessMode = $accessMode;
  }
  /** @return string */
  public function getAccessMode()
  {
    return $this->accessMode;
  }
  /** @param string */
  public function setAnonGid($anonGid)
  {
    $this->anonGid = $anonGid;
  }
  /** @return string */
  public function getAnonGid()
  {
    return $this->anonGid;
  }
  /** @param string */
  public function setAnonUid($anonUid)
  {
    $this->anonUid = $anonUid;
  }
  /** @return string */
  public function getAnonUid()
  {
    return $this->anonUid;
  }
  /** @param string[] */
  public function setIpRanges($ipRanges)
  {
    $this->ipRanges = $ipRanges;
  }
  /** @return string[] */
  public function getIpRanges()
  {
    return $this->ipRanges;
  }
  /** @param string */
  public function setSquashMode($squashMode)
  {
    $this->squashMode = $squashMode;
  }
  /** @return string */
  public function getSquashMode()
  {
    return $this->squashMode;
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
  /** @var bool */
  public $cancelRequested;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $statusDetail;
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
  /** @param bool */
  public function setCancelRequested($cancelRequested)
  {
    $this->cancelRequested = $cancelRequested;
  }
  /** @return bool */
  public function getCancelRequested()
  {
    return $this->cancelRequested;
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
  /** @param string */
  public function setStatusDetail($statusDetail)
  {
    $this->statusDetail = $statusDetail;
  }
  /** @return string */
  public function getStatusDetail()
  {
    return $this->statusDetail;
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

class RestoreInstanceRequest extends \Google\Model
{
  /** @var string */
  public $fileShare;
  /** @var string */
  public $sourceBackup;

  /** @param string */
  public function setFileShare($fileShare)
  {
    $this->fileShare = $fileShare;
  }
  /** @return string */
  public function getFileShare()
  {
    return $this->fileShare;
  }
  /** @param string */
  public function setSourceBackup($sourceBackup)
  {
    $this->sourceBackup = $sourceBackup;
  }
  /** @return string */
  public function getSourceBackup()
  {
    return $this->sourceBackup;
  }
}

class Schedule extends \Google\Model
{
  /** @var string */
  public $day;
  /** @var string */
  public $duration;
  /** @var TimeOfDay */
  public $startTime;
  protected $startTimeType = TimeOfDay::class;
  protected $startTimeDataType = '';
  /** @param string */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return string */
  public function getDay()
  {
    return $this->day;
  }
  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param TimeOfDay */
  public function setStartTime(TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return TimeOfDay */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class Snapshot extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $filesystemUsedBytes;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;

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
  public function setFilesystemUsedBytes($filesystemUsedBytes)
  {
    $this->filesystemUsedBytes = $filesystemUsedBytes;
  }
  /** @return string */
  public function getFilesystemUsedBytes()
  {
    return $this->filesystemUsedBytes;
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

class TimeOfDay extends \Google\Model
{
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;

  /** @param int */
  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  /** @return int */
  public function getHours()
  {
    return $this->hours;
  }
  /** @param int */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  /** @return int */
  public function getMinutes()
  {
    return $this->minutes;
  }
  /** @param int */
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  /** @return int */
  public function getNanos()
  {
    return $this->nanos;
  }
  /** @param int */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return int */
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class UpdatePolicy extends \Google\Collection
{
  /** @var string */
  public $channel;
  /** @var DenyMaintenancePeriod[] */
  public $denyMaintenancePeriods;
  /** @var MaintenanceWindow */
  public $window;
  protected $collection_key = 'denyMaintenancePeriods';
  protected $denyMaintenancePeriodsType = DenyMaintenancePeriod::class;
  protected $denyMaintenancePeriodsDataType = 'array';
  protected $windowType = MaintenanceWindow::class;
  protected $windowDataType = '';
  /** @param string */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /** @return string */
  public function getChannel()
  {
    return $this->channel;
  }
  /** @param DenyMaintenancePeriod[] */
  public function setDenyMaintenancePeriods($denyMaintenancePeriods)
  {
    $this->denyMaintenancePeriods = $denyMaintenancePeriods;
  }
  /** @return DenyMaintenancePeriod[] */
  public function getDenyMaintenancePeriods()
  {
    return $this->denyMaintenancePeriods;
  }
  /** @param MaintenanceWindow */
  public function setWindow(MaintenanceWindow $window)
  {
    $this->window = $window;
  }
  /** @return MaintenanceWindow */
  public function getWindow()
  {
    return $this->window;
  }
}

class WeeklyCycle extends \Google\Collection
{
  /** @var Schedule[] */
  public $schedule;
  protected $collection_key = 'schedule';
  protected $scheduleType = Schedule::class;
  protected $scheduleDataType = 'array';
  /** @param Schedule[] */
  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return Schedule[] */
  public function getSchedule()
  {
    return $this->schedule;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Backup::class, 'Google_Service_CloudFilestore_Backup');
class_alias(CancelOperationRequest::class, 'Google_Service_CloudFilestore_CancelOperationRequest');
class_alias(DailyCycle::class, 'Google_Service_CloudFilestore_DailyCycle');
class_alias(Date::class, 'Google_Service_CloudFilestore_Date');
class_alias(DenyMaintenancePeriod::class, 'Google_Service_CloudFilestore_DenyMaintenancePeriod');
class_alias(FileEmpty::class, 'Google_Service_CloudFilestore_FileEmpty');
class_alias(FileShareConfig::class, 'Google_Service_CloudFilestore_FileShareConfig');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1Instance::class, 'Google_Service_CloudFilestore_GoogleCloudSaasacceleratorManagementProvidersV1Instance');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule::class, 'Google_Service_CloudFilestore_GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings::class, 'Google_Service_CloudFilestore_GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata::class, 'Google_Service_CloudFilestore_GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter::class, 'Google_Service_CloudFilestore_GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility::class, 'Google_Service_CloudFilestore_GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource::class, 'Google_Service_CloudFilestore_GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility::class, 'Google_Service_CloudFilestore_GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata::class, 'Google_Service_CloudFilestore_GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata');
class_alias(Instance::class, 'Google_Service_CloudFilestore_Instance');
class_alias(ListBackupsResponse::class, 'Google_Service_CloudFilestore_ListBackupsResponse');
class_alias(ListInstancesResponse::class, 'Google_Service_CloudFilestore_ListInstancesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudFilestore_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudFilestore_ListOperationsResponse');
class_alias(ListSnapshotsResponse::class, 'Google_Service_CloudFilestore_ListSnapshotsResponse');
class_alias(Location::class, 'Google_Service_CloudFilestore_Location');
class_alias(MaintenancePolicy::class, 'Google_Service_CloudFilestore_MaintenancePolicy');
class_alias(MaintenanceWindow::class, 'Google_Service_CloudFilestore_MaintenanceWindow');
class_alias(NetworkConfig::class, 'Google_Service_CloudFilestore_NetworkConfig');
class_alias(NfsExportOptions::class, 'Google_Service_CloudFilestore_NfsExportOptions');
class_alias(Operation::class, 'Google_Service_CloudFilestore_Operation');
class_alias(OperationMetadata::class, 'Google_Service_CloudFilestore_OperationMetadata');
class_alias(RestoreInstanceRequest::class, 'Google_Service_CloudFilestore_RestoreInstanceRequest');
class_alias(Schedule::class, 'Google_Service_CloudFilestore_Schedule');
class_alias(Snapshot::class, 'Google_Service_CloudFilestore_Snapshot');
class_alias(Status::class, 'Google_Service_CloudFilestore_Status');
class_alias(TimeOfDay::class, 'Google_Service_CloudFilestore_TimeOfDay');
class_alias(UpdatePolicy::class, 'Google_Service_CloudFilestore_UpdatePolicy');
class_alias(WeeklyCycle::class, 'Google_Service_CloudFilestore_WeeklyCycle');
