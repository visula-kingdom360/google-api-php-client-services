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

namespace Google\Service\DatabaseMigrationService;

class AlloyDbConnectionProfile extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var AlloyDbSettings */
  public $settings;
  protected $settingsType = AlloyDbSettings::class;
  protected $settingsDataType = '';
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param AlloyDbSettings */
  public function setSettings(AlloyDbSettings $settings)
  {
    $this->settings = $settings;
  }
  /** @return AlloyDbSettings */
  public function getSettings()
  {
    return $this->settings;
  }
}

class AlloyDbSettings extends \Google\Model
{
  /** @var UserPassword */
  public $initialUser;
  /** @var string[] */
  public $labels;
  /** @var PrimaryInstanceSettings */
  public $primaryInstanceSettings;
  /** @var string */
  public $vpcNetwork;
  protected $initialUserType = UserPassword::class;
  protected $initialUserDataType = '';
  protected $primaryInstanceSettingsType = PrimaryInstanceSettings::class;
  protected $primaryInstanceSettingsDataType = '';
  /** @param UserPassword */
  public function setInitialUser(UserPassword $initialUser)
  {
    $this->initialUser = $initialUser;
  }
  /** @return UserPassword */
  public function getInitialUser()
  {
    return $this->initialUser;
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
  /** @param PrimaryInstanceSettings */
  public function setPrimaryInstanceSettings(PrimaryInstanceSettings $primaryInstanceSettings)
  {
    $this->primaryInstanceSettings = $primaryInstanceSettings;
  }
  /** @return PrimaryInstanceSettings */
  public function getPrimaryInstanceSettings()
  {
    return $this->primaryInstanceSettings;
  }
  /** @param string */
  public function setVpcNetwork($vpcNetwork)
  {
    $this->vpcNetwork = $vpcNetwork;
  }
  /** @return string */
  public function getVpcNetwork()
  {
    return $this->vpcNetwork;
  }
}

class AuditConfig extends \Google\Collection
{
  /** @var AuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = AuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param AuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return AuditLogConfig[] */
  public function getAuditLogConfigs()
  {
    return $this->auditLogConfigs;
  }
  /** @param string */
  public function setService($service)
  {
    $this->service = $service;
  }
  /** @return string */
  public function getService()
  {
    return $this->service;
  }
}

class AuditLogConfig extends \Google\Collection
{
  /** @var string[] */
  public $exemptedMembers;
  /** @var string */
  public $logType;
  protected $collection_key = 'exemptedMembers';
  /** @param string[] */
  public function setExemptedMembers($exemptedMembers)
  {
    $this->exemptedMembers = $exemptedMembers;
  }
  /** @return string[] */
  public function getExemptedMembers()
  {
    return $this->exemptedMembers;
  }
  /** @param string */
  public function setLogType($logType)
  {
    $this->logType = $logType;
  }
  /** @return string */
  public function getLogType()
  {
    return $this->logType;
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

class CloudSqlConnectionProfile extends \Google\Model
{
  /** @var string */
  public $additionalPublicIp;
  /** @var string */
  public $cloudSqlId;
  /** @var string */
  public $privateIp;
  /** @var string */
  public $publicIp;
  /** @var CloudSqlSettings */
  public $settings;
  protected $settingsType = CloudSqlSettings::class;
  protected $settingsDataType = '';
  /** @param string */
  public function setAdditionalPublicIp($additionalPublicIp)
  {
    $this->additionalPublicIp = $additionalPublicIp;
  }
  /** @return string */
  public function getAdditionalPublicIp()
  {
    return $this->additionalPublicIp;
  }
  /** @param string */
  public function setCloudSqlId($cloudSqlId)
  {
    $this->cloudSqlId = $cloudSqlId;
  }
  /** @return string */
  public function getCloudSqlId()
  {
    return $this->cloudSqlId;
  }
  /** @param string */
  public function setPrivateIp($privateIp)
  {
    $this->privateIp = $privateIp;
  }
  /** @return string */
  public function getPrivateIp()
  {
    return $this->privateIp;
  }
  /** @param string */
  public function setPublicIp($publicIp)
  {
    $this->publicIp = $publicIp;
  }
  /** @return string */
  public function getPublicIp()
  {
    return $this->publicIp;
  }
  /** @param CloudSqlSettings */
  public function setSettings(CloudSqlSettings $settings)
  {
    $this->settings = $settings;
  }
  /** @return CloudSqlSettings */
  public function getSettings()
  {
    return $this->settings;
  }
}

class CloudSqlSettings extends \Google\Model
{
  /** @var string */
  public $activationPolicy;
  /** @var bool */
  public $autoStorageIncrease;
  /** @var string */
  public $availabilityType;
  /** @var string */
  public $cmekKeyName;
  /** @var string */
  public $collation;
  /** @var string */
  public $dataDiskSizeGb;
  /** @var string */
  public $dataDiskType;
  /** @var string[] */
  public $databaseFlags;
  /** @var string */
  public $databaseVersion;
  /** @var SqlIpConfig */
  public $ipConfig;
  /** @var string */
  public $rootPassword;
  /** @var bool */
  public $rootPasswordSet;
  /** @var string */
  public $secondaryZone;
  /** @var string */
  public $sourceId;
  /** @var string */
  public $storageAutoResizeLimit;
  /** @var string */
  public $tier;
  /** @var string[] */
  public $userLabels;
  /** @var string */
  public $zone;
  protected $ipConfigType = SqlIpConfig::class;
  protected $ipConfigDataType = '';
  /** @param string */
  public function setActivationPolicy($activationPolicy)
  {
    $this->activationPolicy = $activationPolicy;
  }
  /** @return string */
  public function getActivationPolicy()
  {
    return $this->activationPolicy;
  }
  /** @param bool */
  public function setAutoStorageIncrease($autoStorageIncrease)
  {
    $this->autoStorageIncrease = $autoStorageIncrease;
  }
  /** @return bool */
  public function getAutoStorageIncrease()
  {
    return $this->autoStorageIncrease;
  }
  /** @param string */
  public function setAvailabilityType($availabilityType)
  {
    $this->availabilityType = $availabilityType;
  }
  /** @return string */
  public function getAvailabilityType()
  {
    return $this->availabilityType;
  }
  /** @param string */
  public function setCmekKeyName($cmekKeyName)
  {
    $this->cmekKeyName = $cmekKeyName;
  }
  /** @return string */
  public function getCmekKeyName()
  {
    return $this->cmekKeyName;
  }
  /** @param string */
  public function setCollation($collation)
  {
    $this->collation = $collation;
  }
  /** @return string */
  public function getCollation()
  {
    return $this->collation;
  }
  /** @param string */
  public function setDataDiskSizeGb($dataDiskSizeGb)
  {
    $this->dataDiskSizeGb = $dataDiskSizeGb;
  }
  /** @return string */
  public function getDataDiskSizeGb()
  {
    return $this->dataDiskSizeGb;
  }
  /** @param string */
  public function setDataDiskType($dataDiskType)
  {
    $this->dataDiskType = $dataDiskType;
  }
  /** @return string */
  public function getDataDiskType()
  {
    return $this->dataDiskType;
  }
  /** @param string[] */
  public function setDatabaseFlags($databaseFlags)
  {
    $this->databaseFlags = $databaseFlags;
  }
  /** @return string[] */
  public function getDatabaseFlags()
  {
    return $this->databaseFlags;
  }
  /** @param string */
  public function setDatabaseVersion($databaseVersion)
  {
    $this->databaseVersion = $databaseVersion;
  }
  /** @return string */
  public function getDatabaseVersion()
  {
    return $this->databaseVersion;
  }
  /** @param SqlIpConfig */
  public function setIpConfig(SqlIpConfig $ipConfig)
  {
    $this->ipConfig = $ipConfig;
  }
  /** @return SqlIpConfig */
  public function getIpConfig()
  {
    return $this->ipConfig;
  }
  /** @param string */
  public function setRootPassword($rootPassword)
  {
    $this->rootPassword = $rootPassword;
  }
  /** @return string */
  public function getRootPassword()
  {
    return $this->rootPassword;
  }
  /** @param bool */
  public function setRootPasswordSet($rootPasswordSet)
  {
    $this->rootPasswordSet = $rootPasswordSet;
  }
  /** @return bool */
  public function getRootPasswordSet()
  {
    return $this->rootPasswordSet;
  }
  /** @param string */
  public function setSecondaryZone($secondaryZone)
  {
    $this->secondaryZone = $secondaryZone;
  }
  /** @return string */
  public function getSecondaryZone()
  {
    return $this->secondaryZone;
  }
  /** @param string */
  public function setSourceId($sourceId)
  {
    $this->sourceId = $sourceId;
  }
  /** @return string */
  public function getSourceId()
  {
    return $this->sourceId;
  }
  /** @param string */
  public function setStorageAutoResizeLimit($storageAutoResizeLimit)
  {
    $this->storageAutoResizeLimit = $storageAutoResizeLimit;
  }
  /** @return string */
  public function getStorageAutoResizeLimit()
  {
    return $this->storageAutoResizeLimit;
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
  /** @param string[] */
  public function setUserLabels($userLabels)
  {
    $this->userLabels = $userLabels;
  }
  /** @return string[] */
  public function getUserLabels()
  {
    return $this->userLabels;
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

class ConnectionProfile extends \Google\Model
{
  /** @var AlloyDbConnectionProfile */
  public $alloydb;
  /** @var CloudSqlConnectionProfile */
  public $cloudsql;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var Status */
  public $error;
  /** @var string[] */
  public $labels;
  /** @var MySqlConnectionProfile */
  public $mysql;
  /** @var string */
  public $name;
  /** @var PostgreSqlConnectionProfile */
  public $postgresql;
  /** @var string */
  public $provider;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $alloydbType = AlloyDbConnectionProfile::class;
  protected $alloydbDataType = '';
  protected $cloudsqlType = CloudSqlConnectionProfile::class;
  protected $cloudsqlDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $mysqlType = MySqlConnectionProfile::class;
  protected $mysqlDataType = '';
  protected $postgresqlType = PostgreSqlConnectionProfile::class;
  protected $postgresqlDataType = '';
  /** @param AlloyDbConnectionProfile */
  public function setAlloydb(AlloyDbConnectionProfile $alloydb)
  {
    $this->alloydb = $alloydb;
  }
  /** @return AlloyDbConnectionProfile */
  public function getAlloydb()
  {
    return $this->alloydb;
  }
  /** @param CloudSqlConnectionProfile */
  public function setCloudsql(CloudSqlConnectionProfile $cloudsql)
  {
    $this->cloudsql = $cloudsql;
  }
  /** @return CloudSqlConnectionProfile */
  public function getCloudsql()
  {
    return $this->cloudsql;
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
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
  /** @param MySqlConnectionProfile */
  public function setMysql(MySqlConnectionProfile $mysql)
  {
    $this->mysql = $mysql;
  }
  /** @return MySqlConnectionProfile */
  public function getMysql()
  {
    return $this->mysql;
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
  /** @param PostgreSqlConnectionProfile */
  public function setPostgresql(PostgreSqlConnectionProfile $postgresql)
  {
    $this->postgresql = $postgresql;
  }
  /** @return PostgreSqlConnectionProfile */
  public function getPostgresql()
  {
    return $this->postgresql;
  }
  /** @param string */
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  /** @return string */
  public function getProvider()
  {
    return $this->provider;
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

class DatabaseType extends \Google\Model
{
  /** @var string */
  public $engine;
  /** @var string */
  public $provider;

  /** @param string */
  public function setEngine($engine)
  {
    $this->engine = $engine;
  }
  /** @return string */
  public function getEngine()
  {
    return $this->engine;
  }
  /** @param string */
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  /** @return string */
  public function getProvider()
  {
    return $this->provider;
  }
}

class DatamigrationEmpty extends \Google\Model
{
}

class DumpFlag extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class DumpFlags extends \Google\Collection
{
  /** @var DumpFlag[] */
  public $dumpFlags;
  protected $collection_key = 'dumpFlags';
  protected $dumpFlagsType = DumpFlag::class;
  protected $dumpFlagsDataType = 'array';
  /** @param DumpFlag[] */
  public function setDumpFlags($dumpFlags)
  {
    $this->dumpFlags = $dumpFlags;
  }
  /** @return DumpFlag[] */
  public function getDumpFlags()
  {
    return $this->dumpFlags;
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

class GenerateSshScriptRequest extends \Google\Model
{
  /** @var string */
  public $vm;
  /** @var VmCreationConfig */
  public $vmCreationConfig;
  /** @var int */
  public $vmPort;
  /** @var VmSelectionConfig */
  public $vmSelectionConfig;
  protected $vmCreationConfigType = VmCreationConfig::class;
  protected $vmCreationConfigDataType = '';
  protected $vmSelectionConfigType = VmSelectionConfig::class;
  protected $vmSelectionConfigDataType = '';
  /** @param string */
  public function setVm($vm)
  {
    $this->vm = $vm;
  }
  /** @return string */
  public function getVm()
  {
    return $this->vm;
  }
  /** @param VmCreationConfig */
  public function setVmCreationConfig(VmCreationConfig $vmCreationConfig)
  {
    $this->vmCreationConfig = $vmCreationConfig;
  }
  /** @return VmCreationConfig */
  public function getVmCreationConfig()
  {
    return $this->vmCreationConfig;
  }
  /** @param int */
  public function setVmPort($vmPort)
  {
    $this->vmPort = $vmPort;
  }
  /** @return int */
  public function getVmPort()
  {
    return $this->vmPort;
  }
  /** @param VmSelectionConfig */
  public function setVmSelectionConfig(VmSelectionConfig $vmSelectionConfig)
  {
    $this->vmSelectionConfig = $vmSelectionConfig;
  }
  /** @return VmSelectionConfig */
  public function getVmSelectionConfig()
  {
    return $this->vmSelectionConfig;
  }
}

class GoogleCloudClouddmsV1OperationMetadata extends \Google\Model
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

class ListConnectionProfilesResponse extends \Google\Collection
{
  /** @var ConnectionProfile[] */
  public $connectionProfiles;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $connectionProfilesType = ConnectionProfile::class;
  protected $connectionProfilesDataType = 'array';
  /** @param ConnectionProfile[] */
  public function setConnectionProfiles($connectionProfiles)
  {
    $this->connectionProfiles = $connectionProfiles;
  }
  /** @return ConnectionProfile[] */
  public function getConnectionProfiles()
  {
    return $this->connectionProfiles;
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

class ListMigrationJobsResponse extends \Google\Collection
{
  /** @var MigrationJob[] */
  public $migrationJobs;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $migrationJobsType = MigrationJob::class;
  protected $migrationJobsDataType = 'array';
  /** @param MigrationJob[] */
  public function setMigrationJobs($migrationJobs)
  {
    $this->migrationJobs = $migrationJobs;
  }
  /** @return MigrationJob[] */
  public function getMigrationJobs()
  {
    return $this->migrationJobs;
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

class MachineConfig extends \Google\Model
{
  /** @var int */
  public $cpuCount;

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
}

class MigrationJob extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $destination;
  /** @var DatabaseType */
  public $destinationDatabase;
  /** @var string */
  public $displayName;
  /** @var DumpFlags */
  public $dumpFlags;
  /** @var string */
  public $dumpPath;
  /** @var string */
  public $duration;
  /** @var string */
  public $endTime;
  /** @var Status */
  public $error;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $phase;
  /** @var ReverseSshConnectivity */
  public $reverseSshConnectivity;
  /** @var string */
  public $source;
  /** @var DatabaseType */
  public $sourceDatabase;
  /** @var string */
  public $state;
  /** @var StaticIpConnectivity */
  public $staticIpConnectivity;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  /** @var VpcPeeringConnectivity */
  public $vpcPeeringConnectivity;
  protected $destinationDatabaseType = DatabaseType::class;
  protected $destinationDatabaseDataType = '';
  protected $dumpFlagsType = DumpFlags::class;
  protected $dumpFlagsDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $reverseSshConnectivityType = ReverseSshConnectivity::class;
  protected $reverseSshConnectivityDataType = '';
  protected $sourceDatabaseType = DatabaseType::class;
  protected $sourceDatabaseDataType = '';
  protected $staticIpConnectivityType = StaticIpConnectivity::class;
  protected $staticIpConnectivityDataType = '';
  protected $vpcPeeringConnectivityType = VpcPeeringConnectivity::class;
  protected $vpcPeeringConnectivityDataType = '';
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
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param DatabaseType */
  public function setDestinationDatabase(DatabaseType $destinationDatabase)
  {
    $this->destinationDatabase = $destinationDatabase;
  }
  /** @return DatabaseType */
  public function getDestinationDatabase()
  {
    return $this->destinationDatabase;
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
  /** @param DumpFlags */
  public function setDumpFlags(DumpFlags $dumpFlags)
  {
    $this->dumpFlags = $dumpFlags;
  }
  /** @return DumpFlags */
  public function getDumpFlags()
  {
    return $this->dumpFlags;
  }
  /** @param string */
  public function setDumpPath($dumpPath)
  {
    $this->dumpPath = $dumpPath;
  }
  /** @return string */
  public function getDumpPath()
  {
    return $this->dumpPath;
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
  public function setPhase($phase)
  {
    $this->phase = $phase;
  }
  /** @return string */
  public function getPhase()
  {
    return $this->phase;
  }
  /** @param ReverseSshConnectivity */
  public function setReverseSshConnectivity(ReverseSshConnectivity $reverseSshConnectivity)
  {
    $this->reverseSshConnectivity = $reverseSshConnectivity;
  }
  /** @return ReverseSshConnectivity */
  public function getReverseSshConnectivity()
  {
    return $this->reverseSshConnectivity;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
  /** @param DatabaseType */
  public function setSourceDatabase(DatabaseType $sourceDatabase)
  {
    $this->sourceDatabase = $sourceDatabase;
  }
  /** @return DatabaseType */
  public function getSourceDatabase()
  {
    return $this->sourceDatabase;
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
  /** @param StaticIpConnectivity */
  public function setStaticIpConnectivity(StaticIpConnectivity $staticIpConnectivity)
  {
    $this->staticIpConnectivity = $staticIpConnectivity;
  }
  /** @return StaticIpConnectivity */
  public function getStaticIpConnectivity()
  {
    return $this->staticIpConnectivity;
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
  /** @param VpcPeeringConnectivity */
  public function setVpcPeeringConnectivity(VpcPeeringConnectivity $vpcPeeringConnectivity)
  {
    $this->vpcPeeringConnectivity = $vpcPeeringConnectivity;
  }
  /** @return VpcPeeringConnectivity */
  public function getVpcPeeringConnectivity()
  {
    return $this->vpcPeeringConnectivity;
  }
}

class MigrationJobVerificationError extends \Google\Model
{
  /** @var string */
  public $errorCode;
  /** @var string */
  public $errorDetailMessage;
  /** @var string */
  public $errorMessage;

  /** @param string */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return string */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param string */
  public function setErrorDetailMessage($errorDetailMessage)
  {
    $this->errorDetailMessage = $errorDetailMessage;
  }
  /** @return string */
  public function getErrorDetailMessage()
  {
    return $this->errorDetailMessage;
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
}

class MySqlConnectionProfile extends \Google\Model
{
  /** @var string */
  public $cloudSqlId;
  /** @var string */
  public $host;
  /** @var string */
  public $password;
  /** @var bool */
  public $passwordSet;
  /** @var int */
  public $port;
  /** @var SslConfig */
  public $ssl;
  /** @var string */
  public $username;
  protected $sslType = SslConfig::class;
  protected $sslDataType = '';
  /** @param string */
  public function setCloudSqlId($cloudSqlId)
  {
    $this->cloudSqlId = $cloudSqlId;
  }
  /** @return string */
  public function getCloudSqlId()
  {
    return $this->cloudSqlId;
  }
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
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /** @return string */
  public function getPassword()
  {
    return $this->password;
  }
  /** @param bool */
  public function setPasswordSet($passwordSet)
  {
    $this->passwordSet = $passwordSet;
  }
  /** @return bool */
  public function getPasswordSet()
  {
    return $this->passwordSet;
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
  /** @param SslConfig */
  public function setSsl(SslConfig $ssl)
  {
    $this->ssl = $ssl;
  }
  /** @return SslConfig */
  public function getSsl()
  {
    return $this->ssl;
  }
  /** @param string */
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /** @return string */
  public function getUsername()
  {
    return $this->username;
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

class Policy extends \Google\Collection
{
  /** @var AuditConfig[] */
  public $auditConfigs;
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  /** @param AuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return AuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
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

class PostgreSqlConnectionProfile extends \Google\Model
{
  /** @var string */
  public $cloudSqlId;
  /** @var string */
  public $host;
  /** @var string */
  public $networkArchitecture;
  /** @var string */
  public $password;
  /** @var bool */
  public $passwordSet;
  /** @var int */
  public $port;
  /** @var SslConfig */
  public $ssl;
  /** @var string */
  public $username;
  protected $sslType = SslConfig::class;
  protected $sslDataType = '';
  /** @param string */
  public function setCloudSqlId($cloudSqlId)
  {
    $this->cloudSqlId = $cloudSqlId;
  }
  /** @return string */
  public function getCloudSqlId()
  {
    return $this->cloudSqlId;
  }
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
  public function setNetworkArchitecture($networkArchitecture)
  {
    $this->networkArchitecture = $networkArchitecture;
  }
  /** @return string */
  public function getNetworkArchitecture()
  {
    return $this->networkArchitecture;
  }
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
  /** @param bool */
  public function setPasswordSet($passwordSet)
  {
    $this->passwordSet = $passwordSet;
  }
  /** @return bool */
  public function getPasswordSet()
  {
    return $this->passwordSet;
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
  /** @param SslConfig */
  public function setSsl(SslConfig $ssl)
  {
    $this->ssl = $ssl;
  }
  /** @return SslConfig */
  public function getSsl()
  {
    return $this->ssl;
  }
  /** @param string */
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /** @return string */
  public function getUsername()
  {
    return $this->username;
  }
}

class PrimaryInstanceSettings extends \Google\Model
{
  /** @var string[] */
  public $databaseFlags;
  /** @var string */
  public $id;
  /** @var string[] */
  public $labels;
  /** @var MachineConfig */
  public $machineConfig;
  /** @var string */
  public $privateIp;
  protected $machineConfigType = MachineConfig::class;
  protected $machineConfigDataType = '';
  /** @param string[] */
  public function setDatabaseFlags($databaseFlags)
  {
    $this->databaseFlags = $databaseFlags;
  }
  /** @return string[] */
  public function getDatabaseFlags()
  {
    return $this->databaseFlags;
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
  /** @param MachineConfig */
  public function setMachineConfig(MachineConfig $machineConfig)
  {
    $this->machineConfig = $machineConfig;
  }
  /** @return MachineConfig */
  public function getMachineConfig()
  {
    return $this->machineConfig;
  }
  /** @param string */
  public function setPrivateIp($privateIp)
  {
    $this->privateIp = $privateIp;
  }
  /** @return string */
  public function getPrivateIp()
  {
    return $this->privateIp;
  }
}

class PromoteMigrationJobRequest extends \Google\Model
{
}

class RestartMigrationJobRequest extends \Google\Model
{
}

class ResumeMigrationJobRequest extends \Google\Model
{
}

class ReverseSshConnectivity extends \Google\Model
{
  /** @var string */
  public $vm;
  /** @var string */
  public $vmIp;
  /** @var int */
  public $vmPort;
  /** @var string */
  public $vpc;

  /** @param string */
  public function setVm($vm)
  {
    $this->vm = $vm;
  }
  /** @return string */
  public function getVm()
  {
    return $this->vm;
  }
  /** @param string */
  public function setVmIp($vmIp)
  {
    $this->vmIp = $vmIp;
  }
  /** @return string */
  public function getVmIp()
  {
    return $this->vmIp;
  }
  /** @param int */
  public function setVmPort($vmPort)
  {
    $this->vmPort = $vmPort;
  }
  /** @return int */
  public function getVmPort()
  {
    return $this->vmPort;
  }
  /** @param string */
  public function setVpc($vpc)
  {
    $this->vpc = $vpc;
  }
  /** @return string */
  public function getVpc()
  {
    return $this->vpc;
  }
}

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
  /** @var string */
  public $updateMask;
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

class SqlAclEntry extends \Google\Model
{
  /** @var string */
  public $expireTime;
  /** @var string */
  public $label;
  /** @var string */
  public $ttl;
  /** @var string */
  public $value;

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
  /** @param string */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
  }
  /** @param string */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class SqlIpConfig extends \Google\Collection
{
  /** @var SqlAclEntry[] */
  public $authorizedNetworks;
  /** @var bool */
  public $enableIpv4;
  /** @var string */
  public $privateNetwork;
  /** @var bool */
  public $requireSsl;
  protected $collection_key = 'authorizedNetworks';
  protected $authorizedNetworksType = SqlAclEntry::class;
  protected $authorizedNetworksDataType = 'array';
  /** @param SqlAclEntry[] */
  public function setAuthorizedNetworks($authorizedNetworks)
  {
    $this->authorizedNetworks = $authorizedNetworks;
  }
  /** @return SqlAclEntry[] */
  public function getAuthorizedNetworks()
  {
    return $this->authorizedNetworks;
  }
  /** @param bool */
  public function setEnableIpv4($enableIpv4)
  {
    $this->enableIpv4 = $enableIpv4;
  }
  /** @return bool */
  public function getEnableIpv4()
  {
    return $this->enableIpv4;
  }
  /** @param string */
  public function setPrivateNetwork($privateNetwork)
  {
    $this->privateNetwork = $privateNetwork;
  }
  /** @return string */
  public function getPrivateNetwork()
  {
    return $this->privateNetwork;
  }
  /** @param bool */
  public function setRequireSsl($requireSsl)
  {
    $this->requireSsl = $requireSsl;
  }
  /** @return bool */
  public function getRequireSsl()
  {
    return $this->requireSsl;
  }
}

class SshScript extends \Google\Model
{
  /** @var string */
  public $script;

  /** @param string */
  public function setScript($script)
  {
    $this->script = $script;
  }
  /** @return string */
  public function getScript()
  {
    return $this->script;
  }
}

class SslConfig extends \Google\Model
{
  /** @var string */
  public $caCertificate;
  /** @var string */
  public $clientCertificate;
  /** @var string */
  public $clientKey;
  /** @var string */
  public $type;

  /** @param string */
  public function setCaCertificate($caCertificate)
  {
    $this->caCertificate = $caCertificate;
  }
  /** @return string */
  public function getCaCertificate()
  {
    return $this->caCertificate;
  }
  /** @param string */
  public function setClientCertificate($clientCertificate)
  {
    $this->clientCertificate = $clientCertificate;
  }
  /** @return string */
  public function getClientCertificate()
  {
    return $this->clientCertificate;
  }
  /** @param string */
  public function setClientKey($clientKey)
  {
    $this->clientKey = $clientKey;
  }
  /** @return string */
  public function getClientKey()
  {
    return $this->clientKey;
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

class StartMigrationJobRequest extends \Google\Model
{
}

class StaticIpConnectivity extends \Google\Model
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

class StopMigrationJobRequest extends \Google\Model
{
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

class UserPassword extends \Google\Model
{
  /** @var string */
  public $password;
  /** @var bool */
  public $passwordSet;
  /** @var string */
  public $user;

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
  /** @param bool */
  public function setPasswordSet($passwordSet)
  {
    $this->passwordSet = $passwordSet;
  }
  /** @return bool */
  public function getPasswordSet()
  {
    return $this->passwordSet;
  }
  /** @param string */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return string */
  public function getUser()
  {
    return $this->user;
  }
}

class VerifyMigrationJobRequest extends \Google\Model
{
}

class VmCreationConfig extends \Google\Model
{
  /** @var string */
  public $subnet;
  /** @var string */
  public $vmMachineType;
  /** @var string */
  public $vmZone;

  /** @param string */
  public function setSubnet($subnet)
  {
    $this->subnet = $subnet;
  }
  /** @return string */
  public function getSubnet()
  {
    return $this->subnet;
  }
  /** @param string */
  public function setVmMachineType($vmMachineType)
  {
    $this->vmMachineType = $vmMachineType;
  }
  /** @return string */
  public function getVmMachineType()
  {
    return $this->vmMachineType;
  }
  /** @param string */
  public function setVmZone($vmZone)
  {
    $this->vmZone = $vmZone;
  }
  /** @return string */
  public function getVmZone()
  {
    return $this->vmZone;
  }
}

class VmSelectionConfig extends \Google\Model
{
  /** @var string */
  public $vmZone;

  /** @param string */
  public function setVmZone($vmZone)
  {
    $this->vmZone = $vmZone;
  }
  /** @return string */
  public function getVmZone()
  {
    return $this->vmZone;
  }
}

class VpcPeeringConnectivity extends \Google\Model
{
  /** @var string */
  public $vpc;

  /** @param string */
  public function setVpc($vpc)
  {
    $this->vpc = $vpc;
  }
  /** @return string */
  public function getVpc()
  {
    return $this->vpc;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AlloyDbConnectionProfile::class, 'Google_Service_DatabaseMigrationService_AlloyDbConnectionProfile');
class_alias(AlloyDbSettings::class, 'Google_Service_DatabaseMigrationService_AlloyDbSettings');
class_alias(AuditConfig::class, 'Google_Service_DatabaseMigrationService_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_DatabaseMigrationService_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_DatabaseMigrationService_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_DatabaseMigrationService_CancelOperationRequest');
class_alias(CloudSqlConnectionProfile::class, 'Google_Service_DatabaseMigrationService_CloudSqlConnectionProfile');
class_alias(CloudSqlSettings::class, 'Google_Service_DatabaseMigrationService_CloudSqlSettings');
class_alias(ConnectionProfile::class, 'Google_Service_DatabaseMigrationService_ConnectionProfile');
class_alias(DatabaseType::class, 'Google_Service_DatabaseMigrationService_DatabaseType');
class_alias(DatamigrationEmpty::class, 'Google_Service_DatabaseMigrationService_DatamigrationEmpty');
class_alias(DumpFlag::class, 'Google_Service_DatabaseMigrationService_DumpFlag');
class_alias(DumpFlags::class, 'Google_Service_DatabaseMigrationService_DumpFlags');
class_alias(Expr::class, 'Google_Service_DatabaseMigrationService_Expr');
class_alias(GenerateSshScriptRequest::class, 'Google_Service_DatabaseMigrationService_GenerateSshScriptRequest');
class_alias(GoogleCloudClouddmsV1OperationMetadata::class, 'Google_Service_DatabaseMigrationService_GoogleCloudClouddmsV1OperationMetadata');
class_alias(ListConnectionProfilesResponse::class, 'Google_Service_DatabaseMigrationService_ListConnectionProfilesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_DatabaseMigrationService_ListLocationsResponse');
class_alias(ListMigrationJobsResponse::class, 'Google_Service_DatabaseMigrationService_ListMigrationJobsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_DatabaseMigrationService_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_DatabaseMigrationService_Location');
class_alias(MachineConfig::class, 'Google_Service_DatabaseMigrationService_MachineConfig');
class_alias(MigrationJob::class, 'Google_Service_DatabaseMigrationService_MigrationJob');
class_alias(MigrationJobVerificationError::class, 'Google_Service_DatabaseMigrationService_MigrationJobVerificationError');
class_alias(MySqlConnectionProfile::class, 'Google_Service_DatabaseMigrationService_MySqlConnectionProfile');
class_alias(Operation::class, 'Google_Service_DatabaseMigrationService_Operation');
class_alias(Policy::class, 'Google_Service_DatabaseMigrationService_Policy');
class_alias(PostgreSqlConnectionProfile::class, 'Google_Service_DatabaseMigrationService_PostgreSqlConnectionProfile');
class_alias(PrimaryInstanceSettings::class, 'Google_Service_DatabaseMigrationService_PrimaryInstanceSettings');
class_alias(PromoteMigrationJobRequest::class, 'Google_Service_DatabaseMigrationService_PromoteMigrationJobRequest');
class_alias(RestartMigrationJobRequest::class, 'Google_Service_DatabaseMigrationService_RestartMigrationJobRequest');
class_alias(ResumeMigrationJobRequest::class, 'Google_Service_DatabaseMigrationService_ResumeMigrationJobRequest');
class_alias(ReverseSshConnectivity::class, 'Google_Service_DatabaseMigrationService_ReverseSshConnectivity');
class_alias(SetIamPolicyRequest::class, 'Google_Service_DatabaseMigrationService_SetIamPolicyRequest');
class_alias(SqlAclEntry::class, 'Google_Service_DatabaseMigrationService_SqlAclEntry');
class_alias(SqlIpConfig::class, 'Google_Service_DatabaseMigrationService_SqlIpConfig');
class_alias(SshScript::class, 'Google_Service_DatabaseMigrationService_SshScript');
class_alias(SslConfig::class, 'Google_Service_DatabaseMigrationService_SslConfig');
class_alias(StartMigrationJobRequest::class, 'Google_Service_DatabaseMigrationService_StartMigrationJobRequest');
class_alias(StaticIpConnectivity::class, 'Google_Service_DatabaseMigrationService_StaticIpConnectivity');
class_alias(Status::class, 'Google_Service_DatabaseMigrationService_Status');
class_alias(StopMigrationJobRequest::class, 'Google_Service_DatabaseMigrationService_StopMigrationJobRequest');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_DatabaseMigrationService_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_DatabaseMigrationService_TestIamPermissionsResponse');
class_alias(UserPassword::class, 'Google_Service_DatabaseMigrationService_UserPassword');
class_alias(VerifyMigrationJobRequest::class, 'Google_Service_DatabaseMigrationService_VerifyMigrationJobRequest');
class_alias(VmCreationConfig::class, 'Google_Service_DatabaseMigrationService_VmCreationConfig');
class_alias(VmSelectionConfig::class, 'Google_Service_DatabaseMigrationService_VmSelectionConfig');
class_alias(VpcPeeringConnectivity::class, 'Google_Service_DatabaseMigrationService_VpcPeeringConnectivity');
