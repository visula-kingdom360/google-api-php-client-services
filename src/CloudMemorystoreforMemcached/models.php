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

namespace Google\Service\CloudMemorystoreforMemcached;

class ApplyParametersRequest extends \Google\Collection
{
  /** @var bool */
  public $applyAll;
  /** @var string[] */
  public $nodeIds;
  protected $collection_key = 'nodeIds';
  /** @param bool */
  public function setApplyAll($applyAll)
  {
    $this->applyAll = $applyAll;
  }
  /** @return bool */
  public function getApplyAll()
  {
    return $this->applyAll;
  }
  /** @param string[] */
  public function setNodeIds($nodeIds)
  {
    $this->nodeIds = $nodeIds;
  }
  /** @return string[] */
  public function getNodeIds()
  {
    return $this->nodeIds;
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

class GoogleCloudMemcacheV1LocationMetadata extends \Google\Model
{
  /** @var GoogleCloudMemcacheV1ZoneMetadata[] */
  public $availableZones;
  protected $availableZonesType = GoogleCloudMemcacheV1ZoneMetadata::class;
  protected $availableZonesDataType = 'map';
  /** @param GoogleCloudMemcacheV1ZoneMetadata[] */
  public function setAvailableZones($availableZones)
  {
    $this->availableZones = $availableZones;
  }
  /** @return GoogleCloudMemcacheV1ZoneMetadata[] */
  public function getAvailableZones()
  {
    return $this->availableZones;
  }
}

class GoogleCloudMemcacheV1MaintenancePolicy extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $updateTime;
  /** @var WeeklyMaintenanceWindow[] */
  public $weeklyMaintenanceWindow;
  protected $collection_key = 'weeklyMaintenanceWindow';
  protected $weeklyMaintenanceWindowType = WeeklyMaintenanceWindow::class;
  protected $weeklyMaintenanceWindowDataType = 'array';
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /** @param WeeklyMaintenanceWindow[] */
  public function setWeeklyMaintenanceWindow($weeklyMaintenanceWindow)
  {
    $this->weeklyMaintenanceWindow = $weeklyMaintenanceWindow;
  }
  /** @return WeeklyMaintenanceWindow[] */
  public function getWeeklyMaintenanceWindow()
  {
    return $this->weeklyMaintenanceWindow;
  }
}

class GoogleCloudMemcacheV1OperationMetadata extends \Google\Model
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

class GoogleCloudMemcacheV1ZoneMetadata extends \Google\Model
{
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
  public $authorizedNetwork;
  /** @var string */
  public $createTime;
  /** @var string */
  public $discoveryEndpoint;
  /** @var string */
  public $displayName;
  /** @var InstanceMessage[] */
  public $instanceMessages;
  /** @var string[] */
  public $labels;
  /** @var GoogleCloudMemcacheV1MaintenancePolicy */
  public $maintenancePolicy;
  /** @var MaintenanceSchedule */
  public $maintenanceSchedule;
  /** @var string */
  public $memcacheFullVersion;
  /** @var Node[] */
  public $memcacheNodes;
  /** @var string */
  public $memcacheVersion;
  /** @var string */
  public $name;
  /** @var NodeConfig */
  public $nodeConfig;
  /** @var int */
  public $nodeCount;
  /** @var MemcacheParameters */
  public $parameters;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  /** @var string[] */
  public $zones;
  protected $collection_key = 'zones';
  protected $instanceMessagesType = InstanceMessage::class;
  protected $instanceMessagesDataType = 'array';
  protected $maintenancePolicyType = GoogleCloudMemcacheV1MaintenancePolicy::class;
  protected $maintenancePolicyDataType = '';
  protected $maintenanceScheduleType = MaintenanceSchedule::class;
  protected $maintenanceScheduleDataType = '';
  protected $memcacheNodesType = Node::class;
  protected $memcacheNodesDataType = 'array';
  protected $nodeConfigType = NodeConfig::class;
  protected $nodeConfigDataType = '';
  protected $parametersType = MemcacheParameters::class;
  protected $parametersDataType = '';
  /** @param string */
  public function setAuthorizedNetwork($authorizedNetwork)
  {
    $this->authorizedNetwork = $authorizedNetwork;
  }
  /** @return string */
  public function getAuthorizedNetwork()
  {
    return $this->authorizedNetwork;
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
  public function setDiscoveryEndpoint($discoveryEndpoint)
  {
    $this->discoveryEndpoint = $discoveryEndpoint;
  }
  /** @return string */
  public function getDiscoveryEndpoint()
  {
    return $this->discoveryEndpoint;
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
  /** @param InstanceMessage[] */
  public function setInstanceMessages($instanceMessages)
  {
    $this->instanceMessages = $instanceMessages;
  }
  /** @return InstanceMessage[] */
  public function getInstanceMessages()
  {
    return $this->instanceMessages;
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
  /** @param GoogleCloudMemcacheV1MaintenancePolicy */
  public function setMaintenancePolicy(GoogleCloudMemcacheV1MaintenancePolicy $maintenancePolicy)
  {
    $this->maintenancePolicy = $maintenancePolicy;
  }
  /** @return GoogleCloudMemcacheV1MaintenancePolicy */
  public function getMaintenancePolicy()
  {
    return $this->maintenancePolicy;
  }
  /** @param MaintenanceSchedule */
  public function setMaintenanceSchedule(MaintenanceSchedule $maintenanceSchedule)
  {
    $this->maintenanceSchedule = $maintenanceSchedule;
  }
  /** @return MaintenanceSchedule */
  public function getMaintenanceSchedule()
  {
    return $this->maintenanceSchedule;
  }
  /** @param string */
  public function setMemcacheFullVersion($memcacheFullVersion)
  {
    $this->memcacheFullVersion = $memcacheFullVersion;
  }
  /** @return string */
  public function getMemcacheFullVersion()
  {
    return $this->memcacheFullVersion;
  }
  /** @param Node[] */
  public function setMemcacheNodes($memcacheNodes)
  {
    $this->memcacheNodes = $memcacheNodes;
  }
  /** @return Node[] */
  public function getMemcacheNodes()
  {
    return $this->memcacheNodes;
  }
  /** @param string */
  public function setMemcacheVersion($memcacheVersion)
  {
    $this->memcacheVersion = $memcacheVersion;
  }
  /** @return string */
  public function getMemcacheVersion()
  {
    return $this->memcacheVersion;
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
  /** @param NodeConfig */
  public function setNodeConfig(NodeConfig $nodeConfig)
  {
    $this->nodeConfig = $nodeConfig;
  }
  /** @return NodeConfig */
  public function getNodeConfig()
  {
    return $this->nodeConfig;
  }
  /** @param int */
  public function setNodeCount($nodeCount)
  {
    $this->nodeCount = $nodeCount;
  }
  /** @return int */
  public function getNodeCount()
  {
    return $this->nodeCount;
  }
  /** @param MemcacheParameters */
  public function setParameters(MemcacheParameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return MemcacheParameters */
  public function getParameters()
  {
    return $this->parameters;
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
  /** @param string[] */
  public function setZones($zones)
  {
    $this->zones = $zones;
  }
  /** @return string[] */
  public function getZones()
  {
    return $this->zones;
  }
}

class InstanceMessage extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $message;

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

class LocationMetadata extends \Google\Model
{
  /** @var ZoneMetadata[] */
  public $availableZones;
  protected $availableZonesType = ZoneMetadata::class;
  protected $availableZonesDataType = 'map';
  /** @param ZoneMetadata[] */
  public function setAvailableZones($availableZones)
  {
    $this->availableZones = $availableZones;
  }
  /** @return ZoneMetadata[] */
  public function getAvailableZones()
  {
    return $this->availableZones;
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

class MaintenanceSchedule extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $scheduleDeadlineTime;
  /** @var string */
  public $startTime;

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

class MemcacheEmpty extends \Google\Model
{
}

class MemcacheParameters extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string[] */
  public $params;

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
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return string[] */
  public function getParams()
  {
    return $this->params;
  }
}

class Node extends \Google\Model
{
  /** @var string */
  public $host;
  /** @var string */
  public $nodeId;
  /** @var MemcacheParameters */
  public $parameters;
  /** @var int */
  public $port;
  /** @var string */
  public $state;
  /** @var string */
  public $zone;
  protected $parametersType = MemcacheParameters::class;
  protected $parametersDataType = '';
  /** @param string */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /** @return string */
  public function getHost()
  {
    return $this->host;
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
  /** @param MemcacheParameters */
  public function setParameters(MemcacheParameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return MemcacheParameters */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param int */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
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
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /** @return string */
  public function getZone()
  {
    return $this->zone;
  }
}

class NodeConfig extends \Google\Model
{
  /** @var int */
  public $cpuCount;
  /** @var int */
  public $memorySizeMb;

  /** @param int */
  public function setCpuCount($cpuCount)
  {
    $this->cpuCount = $cpuCount;
  }
  /** @return int */
  public function getCpuCount()
  {
    return $this->cpuCount;
  }
  /** @param int */
  public function setMemorySizeMb($memorySizeMb)
  {
    $this->memorySizeMb = $memorySizeMb;
  }
  /** @return int */
  public function getMemorySizeMb()
  {
    return $this->memorySizeMb;
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

class RescheduleMaintenanceRequest extends \Google\Model
{
  /** @var string */
  public $rescheduleType;
  /** @var string */
  public $scheduleTime;

  /** @param string */
  public function setRescheduleType($rescheduleType)
  {
    $this->rescheduleType = $rescheduleType;
  }
  /** @return string */
  public function getRescheduleType()
  {
    return $this->rescheduleType;
  }
  /** @param string */
  public function setScheduleTime($scheduleTime)
  {
    $this->scheduleTime = $scheduleTime;
  }
  /** @return string */
  public function getScheduleTime()
  {
    return $this->scheduleTime;
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

class UpdateParametersRequest extends \Google\Model
{
  /** @var MemcacheParameters */
  public $parameters;
  /** @var string */
  public $updateMask;
  protected $parametersType = MemcacheParameters::class;
  protected $parametersDataType = '';
  /** @param MemcacheParameters */
  public function setParameters(MemcacheParameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return MemcacheParameters */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
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

class WeeklyMaintenanceWindow extends \Google\Model
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

class ZoneMetadata extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApplyParametersRequest::class, 'Google_Service_CloudMemorystoreforMemcached_ApplyParametersRequest');
class_alias(CancelOperationRequest::class, 'Google_Service_CloudMemorystoreforMemcached_CancelOperationRequest');
class_alias(DailyCycle::class, 'Google_Service_CloudMemorystoreforMemcached_DailyCycle');
class_alias(Date::class, 'Google_Service_CloudMemorystoreforMemcached_Date');
class_alias(DenyMaintenancePeriod::class, 'Google_Service_CloudMemorystoreforMemcached_DenyMaintenancePeriod');
class_alias(GoogleCloudMemcacheV1LocationMetadata::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudMemcacheV1LocationMetadata');
class_alias(GoogleCloudMemcacheV1MaintenancePolicy::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudMemcacheV1MaintenancePolicy');
class_alias(GoogleCloudMemcacheV1OperationMetadata::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudMemcacheV1OperationMetadata');
class_alias(GoogleCloudMemcacheV1ZoneMetadata::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudMemcacheV1ZoneMetadata');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1Instance::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1Instance');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata::class, 'Google_Service_CloudMemorystoreforMemcached_GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata');
class_alias(Instance::class, 'Google_Service_CloudMemorystoreforMemcached_Instance');
class_alias(InstanceMessage::class, 'Google_Service_CloudMemorystoreforMemcached_InstanceMessage');
class_alias(ListInstancesResponse::class, 'Google_Service_CloudMemorystoreforMemcached_ListInstancesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudMemorystoreforMemcached_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudMemorystoreforMemcached_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_CloudMemorystoreforMemcached_Location');
class_alias(LocationMetadata::class, 'Google_Service_CloudMemorystoreforMemcached_LocationMetadata');
class_alias(MaintenancePolicy::class, 'Google_Service_CloudMemorystoreforMemcached_MaintenancePolicy');
class_alias(MaintenanceSchedule::class, 'Google_Service_CloudMemorystoreforMemcached_MaintenanceSchedule');
class_alias(MaintenanceWindow::class, 'Google_Service_CloudMemorystoreforMemcached_MaintenanceWindow');
class_alias(MemcacheEmpty::class, 'Google_Service_CloudMemorystoreforMemcached_MemcacheEmpty');
class_alias(MemcacheParameters::class, 'Google_Service_CloudMemorystoreforMemcached_MemcacheParameters');
class_alias(Node::class, 'Google_Service_CloudMemorystoreforMemcached_Node');
class_alias(NodeConfig::class, 'Google_Service_CloudMemorystoreforMemcached_NodeConfig');
class_alias(Operation::class, 'Google_Service_CloudMemorystoreforMemcached_Operation');
class_alias(OperationMetadata::class, 'Google_Service_CloudMemorystoreforMemcached_OperationMetadata');
class_alias(RescheduleMaintenanceRequest::class, 'Google_Service_CloudMemorystoreforMemcached_RescheduleMaintenanceRequest');
class_alias(Schedule::class, 'Google_Service_CloudMemorystoreforMemcached_Schedule');
class_alias(Status::class, 'Google_Service_CloudMemorystoreforMemcached_Status');
class_alias(TimeOfDay::class, 'Google_Service_CloudMemorystoreforMemcached_TimeOfDay');
class_alias(UpdateParametersRequest::class, 'Google_Service_CloudMemorystoreforMemcached_UpdateParametersRequest');
class_alias(UpdatePolicy::class, 'Google_Service_CloudMemorystoreforMemcached_UpdatePolicy');
class_alias(WeeklyCycle::class, 'Google_Service_CloudMemorystoreforMemcached_WeeklyCycle');
class_alias(WeeklyMaintenanceWindow::class, 'Google_Service_CloudMemorystoreforMemcached_WeeklyMaintenanceWindow');
class_alias(ZoneMetadata::class, 'Google_Service_CloudMemorystoreforMemcached_ZoneMetadata');
