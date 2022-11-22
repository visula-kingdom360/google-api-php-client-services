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

namespace Google\Service\ManagedServiceforMicrosoftActiveDirectoryConsumerAPI;

class AttachTrustRequest extends \Google\Model
{
  /** @var Trust */
  public $trust;
  protected $trustType = Trust::class;
  protected $trustDataType = '';
  /** @param Trust */
  public function setTrust(Trust $trust)
  {
    $this->trust = $trust;
  }
  /** @return Trust */
  public function getTrust()
  {
    return $this->trust;
  }
}

class Backup extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;

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

class Binding extends \Google\Collection
{
  /** @var Expr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = Expr::class;
  protected $conditionDataType = '';
  /** @param Expr */
  public function setCondition(Expr $condition)
  {
    $this->condition = $condition;
  }
  /** @return Expr */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string[] */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /** @return string[] */
  public function getMembers()
  {
    return $this->members;
  }
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

class CancelOperationRequest extends \Google\Model
{
}

class Certificate extends \Google\Collection
{
  /** @var string */
  public $expireTime;
  /** @var Certificate */
  public $issuingCertificate;
  /** @var string */
  public $subject;
  /** @var string[] */
  public $subjectAlternativeName;
  /** @var string */
  public $thumbprint;
  protected $collection_key = 'subjectAlternativeName';
  protected $issuingCertificateType = Certificate::class;
  protected $issuingCertificateDataType = '';
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
  /** @param Certificate */
  public function setIssuingCertificate(Certificate $issuingCertificate)
  {
    $this->issuingCertificate = $issuingCertificate;
  }
  /** @return Certificate */
  public function getIssuingCertificate()
  {
    return $this->issuingCertificate;
  }
  /** @param string */
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /** @return string */
  public function getSubject()
  {
    return $this->subject;
  }
  /** @param string[] */
  public function setSubjectAlternativeName($subjectAlternativeName)
  {
    $this->subjectAlternativeName = $subjectAlternativeName;
  }
  /** @return string[] */
  public function getSubjectAlternativeName()
  {
    return $this->subjectAlternativeName;
  }
  /** @param string */
  public function setThumbprint($thumbprint)
  {
    $this->thumbprint = $thumbprint;
  }
  /** @return string */
  public function getThumbprint()
  {
    return $this->thumbprint;
  }
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

class DetachTrustRequest extends \Google\Model
{
  /** @var Trust */
  public $trust;
  protected $trustType = Trust::class;
  protected $trustDataType = '';
  /** @param Trust */
  public function setTrust(Trust $trust)
  {
    $this->trust = $trust;
  }
  /** @return Trust */
  public function getTrust()
  {
    return $this->trust;
  }
}

class Domain extends \Google\Collection
{
  /** @var string */
  public $admin;
  /** @var bool */
  public $auditLogsEnabled;
  /** @var string[] */
  public $authorizedNetworks;
  /** @var string */
  public $createTime;
  /** @var string */
  public $fqdn;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $locations;
  /** @var string */
  public $name;
  /** @var string */
  public $reservedIpRange;
  /** @var string */
  public $state;
  /** @var string */
  public $statusMessage;
  /** @var Trust[] */
  public $trusts;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'trusts';
  protected $trustsType = Trust::class;
  protected $trustsDataType = 'array';
  /** @param string */
  public function setAdmin($admin)
  {
    $this->admin = $admin;
  }
  /** @return string */
  public function getAdmin()
  {
    return $this->admin;
  }
  /** @param bool */
  public function setAuditLogsEnabled($auditLogsEnabled)
  {
    $this->auditLogsEnabled = $auditLogsEnabled;
  }
  /** @return bool */
  public function getAuditLogsEnabled()
  {
    return $this->auditLogsEnabled;
  }
  /** @param string[] */
  public function setAuthorizedNetworks($authorizedNetworks)
  {
    $this->authorizedNetworks = $authorizedNetworks;
  }
  /** @return string[] */
  public function getAuthorizedNetworks()
  {
    return $this->authorizedNetworks;
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
  public function setFqdn($fqdn)
  {
    $this->fqdn = $fqdn;
  }
  /** @return string */
  public function getFqdn()
  {
    return $this->fqdn;
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
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return string[] */
  public function getLocations()
  {
    return $this->locations;
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
  public function setReservedIpRange($reservedIpRange)
  {
    $this->reservedIpRange = $reservedIpRange;
  }
  /** @return string */
  public function getReservedIpRange()
  {
    return $this->reservedIpRange;
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
  /** @param Trust[] */
  public function setTrusts($trusts)
  {
    $this->trusts = $trusts;
  }
  /** @return Trust[] */
  public function getTrusts()
  {
    return $this->trusts;
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

class Expr extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $expression;
  /** @var string */
  public $location;
  /** @var string */
  public $title;

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
  public function setExpression($expression)
  {
    $this->expression = $expression;
  }
  /** @return string */
  public function getExpression()
  {
    return $this->expression;
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
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /** @return string */
  public function getTitle()
  {
    return $this->title;
  }
}

class ExtendSchemaRequest extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $fileContents;
  /** @var string */
  public $gcsPath;

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
  public function setFileContents($fileContents)
  {
    $this->fileContents = $fileContents;
  }
  /** @return string */
  public function getFileContents()
  {
    return $this->fileContents;
  }
  /** @param string */
  public function setGcsPath($gcsPath)
  {
    $this->gcsPath = $gcsPath;
  }
  /** @return string */
  public function getGcsPath()
  {
    return $this->gcsPath;
  }
}

class GoogleCloudManagedidentitiesV1OpMetadata extends \Google\Model
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

class GoogleCloudManagedidentitiesV1alpha1OpMetadata extends \Google\Model
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

class GoogleCloudManagedidentitiesV1beta1OpMetadata extends \Google\Model
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

class LDAPSSettings extends \Google\Model
{
  /** @var Certificate */
  public $certificate;
  /** @var string */
  public $certificatePassword;
  /** @var string */
  public $certificatePfx;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $certificateType = Certificate::class;
  protected $certificateDataType = '';
  /** @param Certificate */
  public function setCertificate(Certificate $certificate)
  {
    $this->certificate = $certificate;
  }
  /** @return Certificate */
  public function getCertificate()
  {
    return $this->certificate;
  }
  /** @param string */
  public function setCertificatePassword($certificatePassword)
  {
    $this->certificatePassword = $certificatePassword;
  }
  /** @return string */
  public function getCertificatePassword()
  {
    return $this->certificatePassword;
  }
  /** @param string */
  public function setCertificatePfx($certificatePfx)
  {
    $this->certificatePfx = $certificatePfx;
  }
  /** @return string */
  public function getCertificatePfx()
  {
    return $this->certificatePfx;
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

class ListDomainsResponse extends \Google\Collection
{
  /** @var Domain[] */
  public $domains;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $domainsType = Domain::class;
  protected $domainsDataType = 'array';
  /** @param Domain[] */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /** @return Domain[] */
  public function getDomains()
  {
    return $this->domains;
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

class ListPeeringsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Peering[] */
  public $peerings;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $peeringsType = Peering::class;
  protected $peeringsDataType = 'array';
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
  /** @param Peering[] */
  public function setPeerings($peerings)
  {
    $this->peerings = $peerings;
  }
  /** @return Peering[] */
  public function getPeerings()
  {
    return $this->peerings;
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

class ListSqlIntegrationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var SqlIntegration[] */
  public $sqlIntegrations;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $sqlIntegrationsType = SqlIntegration::class;
  protected $sqlIntegrationsDataType = 'array';
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
  /** @param SqlIntegration[] */
  public function setSqlIntegrations($sqlIntegrations)
  {
    $this->sqlIntegrations = $sqlIntegrations;
  }
  /** @return SqlIntegration[] */
  public function getSqlIntegrations()
  {
    return $this->sqlIntegrations;
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

class ManagedidentitiesEmpty extends \Google\Model
{
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

class Peering extends \Google\Model
{
  /** @var string */
  public $authorizedNetwork;
  /** @var string */
  public $createTime;
  /** @var string */
  public $domainResource;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $updateTime;

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
  public function setDomainResource($domainResource)
  {
    $this->domainResource = $domainResource;
  }
  /** @return string */
  public function getDomainResource()
  {
    return $this->domainResource;
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

class Policy extends \Google\Collection
{
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  /** @param Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return Binding[] */
  public function getBindings()
  {
    return $this->bindings;
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
  /** @param int */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return int */
  public function getVersion()
  {
    return $this->version;
  }
}

class ReconfigureTrustRequest extends \Google\Collection
{
  /** @var string[] */
  public $targetDnsIpAddresses;
  /** @var string */
  public $targetDomainName;
  protected $collection_key = 'targetDnsIpAddresses';
  /** @param string[] */
  public function setTargetDnsIpAddresses($targetDnsIpAddresses)
  {
    $this->targetDnsIpAddresses = $targetDnsIpAddresses;
  }
  /** @return string[] */
  public function getTargetDnsIpAddresses()
  {
    return $this->targetDnsIpAddresses;
  }
  /** @param string */
  public function setTargetDomainName($targetDomainName)
  {
    $this->targetDomainName = $targetDomainName;
  }
  /** @return string */
  public function getTargetDomainName()
  {
    return $this->targetDomainName;
  }
}

class ResetAdminPasswordRequest extends \Google\Model
{
}

class ResetAdminPasswordResponse extends \Google\Model
{
  /** @var string */
  public $password;

  /** @param string */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /** @return string */
  public function getPassword()
  {
    return $this->password;
  }
}

class RestoreDomainRequest extends \Google\Model
{
  /** @var string */
  public $backupId;

  /** @param string */
  public function setBackupId($backupId)
  {
    $this->backupId = $backupId;
  }
  /** @return string */
  public function getBackupId()
  {
    return $this->backupId;
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

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param Policy */
  public function setPolicy(Policy $policy)
  {
    $this->policy = $policy;
  }
  /** @return Policy */
  public function getPolicy()
  {
    return $this->policy;
  }
}

class SqlIntegration extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $sqlInstance;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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
  /** @param string */
  public function setSqlInstance($sqlInstance)
  {
    $this->sqlInstance = $sqlInstance;
  }
  /** @return string */
  public function getSqlInstance()
  {
    return $this->sqlInstance;
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

class TestIamPermissionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class TestIamPermissionsResponse extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
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

class Trust extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $lastTrustHeartbeatTime;
  /** @var bool */
  public $selectiveAuthentication;
  /** @var string */
  public $state;
  /** @var string */
  public $stateDescription;
  /** @var string[] */
  public $targetDnsIpAddresses;
  /** @var string */
  public $targetDomainName;
  /** @var string */
  public $trustDirection;
  /** @var string */
  public $trustHandshakeSecret;
  /** @var string */
  public $trustType;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'targetDnsIpAddresses';
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
  public function setLastTrustHeartbeatTime($lastTrustHeartbeatTime)
  {
    $this->lastTrustHeartbeatTime = $lastTrustHeartbeatTime;
  }
  /** @return string */
  public function getLastTrustHeartbeatTime()
  {
    return $this->lastTrustHeartbeatTime;
  }
  /** @param bool */
  public function setSelectiveAuthentication($selectiveAuthentication)
  {
    $this->selectiveAuthentication = $selectiveAuthentication;
  }
  /** @return bool */
  public function getSelectiveAuthentication()
  {
    return $this->selectiveAuthentication;
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
  public function setStateDescription($stateDescription)
  {
    $this->stateDescription = $stateDescription;
  }
  /** @return string */
  public function getStateDescription()
  {
    return $this->stateDescription;
  }
  /** @param string[] */
  public function setTargetDnsIpAddresses($targetDnsIpAddresses)
  {
    $this->targetDnsIpAddresses = $targetDnsIpAddresses;
  }
  /** @return string[] */
  public function getTargetDnsIpAddresses()
  {
    return $this->targetDnsIpAddresses;
  }
  /** @param string */
  public function setTargetDomainName($targetDomainName)
  {
    $this->targetDomainName = $targetDomainName;
  }
  /** @return string */
  public function getTargetDomainName()
  {
    return $this->targetDomainName;
  }
  /** @param string */
  public function setTrustDirection($trustDirection)
  {
    $this->trustDirection = $trustDirection;
  }
  /** @return string */
  public function getTrustDirection()
  {
    return $this->trustDirection;
  }
  /** @param string */
  public function setTrustHandshakeSecret($trustHandshakeSecret)
  {
    $this->trustHandshakeSecret = $trustHandshakeSecret;
  }
  /** @return string */
  public function getTrustHandshakeSecret()
  {
    return $this->trustHandshakeSecret;
  }
  /** @param string */
  public function setTrustType($trustType)
  {
    $this->trustType = $trustType;
  }
  /** @return string */
  public function getTrustType()
  {
    return $this->trustType;
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

class ValidateTrustRequest extends \Google\Model
{
  /** @var Trust */
  public $trust;
  protected $trustType = Trust::class;
  protected $trustDataType = '';
  /** @param Trust */
  public function setTrust(Trust $trust)
  {
    $this->trust = $trust;
  }
  /** @return Trust */
  public function getTrust()
  {
    return $this->trust;
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
class_alias(AttachTrustRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_AttachTrustRequest');
class_alias(Backup::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Backup');
class_alias(Binding::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_CancelOperationRequest');
class_alias(Certificate::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Certificate');
class_alias(DailyCycle::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_DailyCycle');
class_alias(Date::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Date');
class_alias(DenyMaintenancePeriod::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_DenyMaintenancePeriod');
class_alias(DetachTrustRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_DetachTrustRequest');
class_alias(Domain::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Domain');
class_alias(Expr::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Expr');
class_alias(ExtendSchemaRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ExtendSchemaRequest');
class_alias(GoogleCloudManagedidentitiesV1OpMetadata::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudManagedidentitiesV1OpMetadata');
class_alias(GoogleCloudManagedidentitiesV1alpha1OpMetadata::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudManagedidentitiesV1alpha1OpMetadata');
class_alias(GoogleCloudManagedidentitiesV1beta1OpMetadata::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudManagedidentitiesV1beta1OpMetadata');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1Instance::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudSaasacceleratorManagementProvidersV1Instance');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSchedule');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudSaasacceleratorManagementProvidersV1MaintenanceSettings');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudSaasacceleratorManagementProvidersV1NodeSloMetadata');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudSaasacceleratorManagementProvidersV1NotificationParameter');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudSaasacceleratorManagementProvidersV1PerSliSloEligibility');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudSaasacceleratorManagementProvidersV1ProvisionedResource');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudSaasacceleratorManagementProvidersV1SloEligibility');
class_alias(GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_GoogleCloudSaasacceleratorManagementProvidersV1SloMetadata');
class_alias(LDAPSSettings::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_LDAPSSettings');
class_alias(ListBackupsResponse::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ListBackupsResponse');
class_alias(ListDomainsResponse::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ListDomainsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ListOperationsResponse');
class_alias(ListPeeringsResponse::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ListPeeringsResponse');
class_alias(ListSqlIntegrationsResponse::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ListSqlIntegrationsResponse');
class_alias(Location::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Location');
class_alias(MaintenancePolicy::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_MaintenancePolicy');
class_alias(MaintenanceWindow::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_MaintenanceWindow');
class_alias(ManagedidentitiesEmpty::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ManagedidentitiesEmpty');
class_alias(Operation::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Operation');
class_alias(OperationMetadata::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_OperationMetadata');
class_alias(Peering::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Peering');
class_alias(Policy::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Policy');
class_alias(ReconfigureTrustRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ReconfigureTrustRequest');
class_alias(ResetAdminPasswordRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ResetAdminPasswordRequest');
class_alias(ResetAdminPasswordResponse::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ResetAdminPasswordResponse');
class_alias(RestoreDomainRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_RestoreDomainRequest');
class_alias(Schedule::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Schedule');
class_alias(SetIamPolicyRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_SetIamPolicyRequest');
class_alias(SqlIntegration::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_SqlIntegration');
class_alias(Status::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Status');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_TestIamPermissionsResponse');
class_alias(TimeOfDay::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_TimeOfDay');
class_alias(Trust::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_Trust');
class_alias(UpdatePolicy::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_UpdatePolicy');
class_alias(ValidateTrustRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ValidateTrustRequest');
class_alias(WeeklyCycle::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_WeeklyCycle');
