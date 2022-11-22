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

namespace Google\Service\DataprocMetastore;

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

class BackendMetastore extends \Google\Model
{
  /** @var string */
  public $metastoreType;
  /** @var string */
  public $name;

  /** @param string */
  public function setMetastoreType($metastoreType)
  {
    $this->metastoreType = $metastoreType;
  }
  /** @return string */
  public function getMetastoreType()
  {
    return $this->metastoreType;
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

class Backup extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $endTime;
  /** @var string */
  public $name;
  /** @var string[] */
  public $restoringServices;
  /** @var Service */
  public $serviceRevision;
  /** @var string */
  public $state;
  protected $collection_key = 'restoringServices';
  protected $serviceRevisionType = Service::class;
  protected $serviceRevisionDataType = '';
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
  public function setRestoringServices($restoringServices)
  {
    $this->restoringServices = $restoringServices;
  }
  /** @return string[] */
  public function getRestoringServices()
  {
    return $this->restoringServices;
  }
  /** @param Service */
  public function setServiceRevision(Service $serviceRevision)
  {
    $this->serviceRevision = $serviceRevision;
  }
  /** @return Service */
  public function getServiceRevision()
  {
    return $this->serviceRevision;
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

class Consumer extends \Google\Model
{
  /** @var string */
  public $endpointUri;
  /** @var string */
  public $subnetwork;

  /** @param string */
  public function setEndpointUri($endpointUri)
  {
    $this->endpointUri = $endpointUri;
  }
  /** @return string */
  public function getEndpointUri()
  {
    return $this->endpointUri;
  }
  /** @param string */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /** @return string */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
}

class DatabaseDump extends \Google\Model
{
  /** @var string */
  public $databaseType;
  /** @var string */
  public $gcsUri;
  /** @var string */
  public $sourceDatabase;
  /** @var string */
  public $type;

  /** @param string */
  public function setDatabaseType($databaseType)
  {
    $this->databaseType = $databaseType;
  }
  /** @return string */
  public function getDatabaseType()
  {
    return $this->databaseType;
  }
  /** @param string */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /** @param string */
  public function setSourceDatabase($sourceDatabase)
  {
    $this->sourceDatabase = $sourceDatabase;
  }
  /** @return string */
  public function getSourceDatabase()
  {
    return $this->sourceDatabase;
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

class EncryptionConfig extends \Google\Model
{
  /** @var string */
  public $kmsKey;

  /** @param string */
  public function setKmsKey($kmsKey)
  {
    $this->kmsKey = $kmsKey;
  }
  /** @return string */
  public function getKmsKey()
  {
    return $this->kmsKey;
  }
}

class ExportMetadataRequest extends \Google\Model
{
  /** @var string */
  public $databaseDumpType;
  /** @var string */
  public $destinationGcsFolder;
  /** @var string */
  public $requestId;

  /** @param string */
  public function setDatabaseDumpType($databaseDumpType)
  {
    $this->databaseDumpType = $databaseDumpType;
  }
  /** @return string */
  public function getDatabaseDumpType()
  {
    return $this->databaseDumpType;
  }
  /** @param string */
  public function setDestinationGcsFolder($destinationGcsFolder)
  {
    $this->destinationGcsFolder = $destinationGcsFolder;
  }
  /** @return string */
  public function getDestinationGcsFolder()
  {
    return $this->destinationGcsFolder;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
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

class Federation extends \Google\Model
{
  /** @var BackendMetastore[] */
  public $backendMetastores;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endpointUri;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $version;
  protected $backendMetastoresType = BackendMetastore::class;
  protected $backendMetastoresDataType = 'map';
  /** @param BackendMetastore[] */
  public function setBackendMetastores($backendMetastores)
  {
    $this->backendMetastores = $backendMetastores;
  }
  /** @return BackendMetastore[] */
  public function getBackendMetastores()
  {
    return $this->backendMetastores;
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
  public function setEndpointUri($endpointUri)
  {
    $this->endpointUri = $endpointUri;
  }
  /** @return string */
  public function getEndpointUri()
  {
    return $this->endpointUri;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
  /** @param string */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
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
  /** @param string */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

class HiveMetastoreConfig extends \Google\Model
{
  /** @var string[] */
  public $configOverrides;
  /** @var KerberosConfig */
  public $kerberosConfig;
  /** @var string */
  public $version;
  protected $kerberosConfigType = KerberosConfig::class;
  protected $kerberosConfigDataType = '';
  /** @param string[] */
  public function setConfigOverrides($configOverrides)
  {
    $this->configOverrides = $configOverrides;
  }
  /** @return string[] */
  public function getConfigOverrides()
  {
    return $this->configOverrides;
  }
  /** @param KerberosConfig */
  public function setKerberosConfig(KerberosConfig $kerberosConfig)
  {
    $this->kerberosConfig = $kerberosConfig;
  }
  /** @return KerberosConfig */
  public function getKerberosConfig()
  {
    return $this->kerberosConfig;
  }
  /** @param string */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

class HiveMetastoreVersion extends \Google\Model
{
  /** @var bool */
  public $isDefault;
  /** @var string */
  public $version;

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
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

class KerberosConfig extends \Google\Model
{
  /** @var Secret */
  public $keytab;
  /** @var string */
  public $krb5ConfigGcsUri;
  /** @var string */
  public $principal;
  protected $keytabType = Secret::class;
  protected $keytabDataType = '';
  /** @param Secret */
  public function setKeytab(Secret $keytab)
  {
    $this->keytab = $keytab;
  }
  /** @return Secret */
  public function getKeytab()
  {
    return $this->keytab;
  }
  /** @param string */
  public function setKrb5ConfigGcsUri($krb5ConfigGcsUri)
  {
    $this->krb5ConfigGcsUri = $krb5ConfigGcsUri;
  }
  /** @return string */
  public function getKrb5ConfigGcsUri()
  {
    return $this->krb5ConfigGcsUri;
  }
  /** @param string */
  public function setPrincipal($principal)
  {
    $this->principal = $principal;
  }
  /** @return string */
  public function getPrincipal()
  {
    return $this->principal;
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

class ListFederationsResponse extends \Google\Collection
{
  /** @var Federation[] */
  public $federations;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $federationsType = Federation::class;
  protected $federationsDataType = 'array';
  /** @param Federation[] */
  public function setFederations($federations)
  {
    $this->federations = $federations;
  }
  /** @return Federation[] */
  public function getFederations()
  {
    return $this->federations;
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

class ListMetadataImportsResponse extends \Google\Collection
{
  /** @var MetadataImport[] */
  public $metadataImports;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $metadataImportsType = MetadataImport::class;
  protected $metadataImportsDataType = 'array';
  /** @param MetadataImport[] */
  public function setMetadataImports($metadataImports)
  {
    $this->metadataImports = $metadataImports;
  }
  /** @return MetadataImport[] */
  public function getMetadataImports()
  {
    return $this->metadataImports;
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

class ListServicesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Service[] */
  public $services;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $servicesType = Service::class;
  protected $servicesDataType = 'array';
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
  /** @param Service[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return Service[] */
  public function getServices()
  {
    return $this->services;
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

class LocationMetadata extends \Google\Collection
{
  /** @var HiveMetastoreVersion[] */
  public $supportedHiveMetastoreVersions;
  protected $collection_key = 'supportedHiveMetastoreVersions';
  protected $supportedHiveMetastoreVersionsType = HiveMetastoreVersion::class;
  protected $supportedHiveMetastoreVersionsDataType = 'array';
  /** @param HiveMetastoreVersion[] */
  public function setSupportedHiveMetastoreVersions($supportedHiveMetastoreVersions)
  {
    $this->supportedHiveMetastoreVersions = $supportedHiveMetastoreVersions;
  }
  /** @return HiveMetastoreVersion[] */
  public function getSupportedHiveMetastoreVersions()
  {
    return $this->supportedHiveMetastoreVersions;
  }
}

class MaintenanceWindow extends \Google\Model
{
  /** @var string */
  public $dayOfWeek;
  /** @var int */
  public $hourOfDay;

  /** @param string */
  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  /** @return string */
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
  /** @param int */
  public function setHourOfDay($hourOfDay)
  {
    $this->hourOfDay = $hourOfDay;
  }
  /** @return int */
  public function getHourOfDay()
  {
    return $this->hourOfDay;
  }
}

class MetadataExport extends \Google\Model
{
  /** @var string */
  public $databaseDumpType;
  /** @var string */
  public $destinationGcsUri;
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;

  /** @param string */
  public function setDatabaseDumpType($databaseDumpType)
  {
    $this->databaseDumpType = $databaseDumpType;
  }
  /** @return string */
  public function getDatabaseDumpType()
  {
    return $this->databaseDumpType;
  }
  /** @param string */
  public function setDestinationGcsUri($destinationGcsUri)
  {
    $this->destinationGcsUri = $destinationGcsUri;
  }
  /** @return string */
  public function getDestinationGcsUri()
  {
    return $this->destinationGcsUri;
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
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
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

class MetadataImport extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var DatabaseDump */
  public $databaseDump;
  /** @var string */
  public $description;
  /** @var string */
  public $endTime;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $databaseDumpType = DatabaseDump::class;
  protected $databaseDumpDataType = '';
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
  /** @param DatabaseDump */
  public function setDatabaseDump(DatabaseDump $databaseDump)
  {
    $this->databaseDump = $databaseDump;
  }
  /** @return DatabaseDump */
  public function getDatabaseDump()
  {
    return $this->databaseDump;
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

class MetadataManagementActivity extends \Google\Collection
{
  /** @var MetadataExport[] */
  public $metadataExports;
  /** @var Restore[] */
  public $restores;
  protected $collection_key = 'restores';
  protected $metadataExportsType = MetadataExport::class;
  protected $metadataExportsDataType = 'array';
  protected $restoresType = Restore::class;
  protected $restoresDataType = 'array';
  /** @param MetadataExport[] */
  public function setMetadataExports($metadataExports)
  {
    $this->metadataExports = $metadataExports;
  }
  /** @return MetadataExport[] */
  public function getMetadataExports()
  {
    return $this->metadataExports;
  }
  /** @param Restore[] */
  public function setRestores($restores)
  {
    $this->restores = $restores;
  }
  /** @return Restore[] */
  public function getRestores()
  {
    return $this->restores;
  }
}

class MetastoreEmpty extends \Google\Model
{
}

class NetworkConfig extends \Google\Collection
{
  /** @var Consumer[] */
  public $consumers;
  protected $collection_key = 'consumers';
  protected $consumersType = Consumer::class;
  protected $consumersDataType = 'array';
  /** @param Consumer[] */
  public function setConsumers($consumers)
  {
    $this->consumers = $consumers;
  }
  /** @return Consumer[] */
  public function getConsumers()
  {
    return $this->consumers;
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

class Restore extends \Google\Model
{
  /** @var string */
  public $backup;
  /** @var string */
  public $details;
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $type;

  /** @param string */
  public function setBackup($backup)
  {
    $this->backup = $backup;
  }
  /** @return string */
  public function getBackup()
  {
    return $this->backup;
  }
  /** @param string */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string */
  public function getDetails()
  {
    return $this->details;
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
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
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
}

class RestoreServiceRequest extends \Google\Model
{
  /** @var string */
  public $backup;
  /** @var string */
  public $requestId;
  /** @var string */
  public $restoreType;

  /** @param string */
  public function setBackup($backup)
  {
    $this->backup = $backup;
  }
  /** @return string */
  public function getBackup()
  {
    return $this->backup;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param string */
  public function setRestoreType($restoreType)
  {
    $this->restoreType = $restoreType;
  }
  /** @return string */
  public function getRestoreType()
  {
    return $this->restoreType;
  }
}

class Secret extends \Google\Model
{
  /** @var string */
  public $cloudSecret;

  /** @param string */
  public function setCloudSecret($cloudSecret)
  {
    $this->cloudSecret = $cloudSecret;
  }
  /** @return string */
  public function getCloudSecret()
  {
    return $this->cloudSecret;
  }
}

class Service extends \Google\Model
{
  /** @var string */
  public $artifactGcsUri;
  /** @var string */
  public $createTime;
  /** @var string */
  public $databaseType;
  /** @var EncryptionConfig */
  public $encryptionConfig;
  /** @var string */
  public $endpointUri;
  /** @var HiveMetastoreConfig */
  public $hiveMetastoreConfig;
  /** @var string[] */
  public $labels;
  /** @var MaintenanceWindow */
  public $maintenanceWindow;
  /** @var MetadataManagementActivity */
  public $metadataManagementActivity;
  /** @var string */
  public $name;
  /** @var string */
  public $network;
  /** @var NetworkConfig */
  public $networkConfig;
  /** @var int */
  public $port;
  /** @var string */
  public $releaseChannel;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var TelemetryConfig */
  public $telemetryConfig;
  /** @var string */
  public $tier;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $encryptionConfigType = EncryptionConfig::class;
  protected $encryptionConfigDataType = '';
  protected $hiveMetastoreConfigType = HiveMetastoreConfig::class;
  protected $hiveMetastoreConfigDataType = '';
  protected $maintenanceWindowType = MaintenanceWindow::class;
  protected $maintenanceWindowDataType = '';
  protected $metadataManagementActivityType = MetadataManagementActivity::class;
  protected $metadataManagementActivityDataType = '';
  protected $networkConfigType = NetworkConfig::class;
  protected $networkConfigDataType = '';
  protected $telemetryConfigType = TelemetryConfig::class;
  protected $telemetryConfigDataType = '';
  /** @param string */
  public function setArtifactGcsUri($artifactGcsUri)
  {
    $this->artifactGcsUri = $artifactGcsUri;
  }
  /** @return string */
  public function getArtifactGcsUri()
  {
    return $this->artifactGcsUri;
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
  public function setDatabaseType($databaseType)
  {
    $this->databaseType = $databaseType;
  }
  /** @return string */
  public function getDatabaseType()
  {
    return $this->databaseType;
  }
  /** @param EncryptionConfig */
  public function setEncryptionConfig(EncryptionConfig $encryptionConfig)
  {
    $this->encryptionConfig = $encryptionConfig;
  }
  /** @return EncryptionConfig */
  public function getEncryptionConfig()
  {
    return $this->encryptionConfig;
  }
  /** @param string */
  public function setEndpointUri($endpointUri)
  {
    $this->endpointUri = $endpointUri;
  }
  /** @return string */
  public function getEndpointUri()
  {
    return $this->endpointUri;
  }
  /** @param HiveMetastoreConfig */
  public function setHiveMetastoreConfig(HiveMetastoreConfig $hiveMetastoreConfig)
  {
    $this->hiveMetastoreConfig = $hiveMetastoreConfig;
  }
  /** @return HiveMetastoreConfig */
  public function getHiveMetastoreConfig()
  {
    return $this->hiveMetastoreConfig;
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
  /** @param MaintenanceWindow */
  public function setMaintenanceWindow(MaintenanceWindow $maintenanceWindow)
  {
    $this->maintenanceWindow = $maintenanceWindow;
  }
  /** @return MaintenanceWindow */
  public function getMaintenanceWindow()
  {
    return $this->maintenanceWindow;
  }
  /** @param MetadataManagementActivity */
  public function setMetadataManagementActivity(MetadataManagementActivity $metadataManagementActivity)
  {
    $this->metadataManagementActivity = $metadataManagementActivity;
  }
  /** @return MetadataManagementActivity */
  public function getMetadataManagementActivity()
  {
    return $this->metadataManagementActivity;
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
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param NetworkConfig */
  public function setNetworkConfig(NetworkConfig $networkConfig)
  {
    $this->networkConfig = $networkConfig;
  }
  /** @return NetworkConfig */
  public function getNetworkConfig()
  {
    return $this->networkConfig;
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
  public function setReleaseChannel($releaseChannel)
  {
    $this->releaseChannel = $releaseChannel;
  }
  /** @return string */
  public function getReleaseChannel()
  {
    return $this->releaseChannel;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
  /** @param TelemetryConfig */
  public function setTelemetryConfig(TelemetryConfig $telemetryConfig)
  {
    $this->telemetryConfig = $telemetryConfig;
  }
  /** @return TelemetryConfig */
  public function getTelemetryConfig()
  {
    return $this->telemetryConfig;
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
  /** @param string */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
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

class TelemetryConfig extends \Google\Model
{
  /** @var string */
  public $logFormat;

  /** @param string */
  public function setLogFormat($logFormat)
  {
    $this->logFormat = $logFormat;
  }
  /** @return string */
  public function getLogFormat()
  {
    return $this->logFormat;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditConfig::class, 'Google_Service_DataprocMetastore_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_DataprocMetastore_AuditLogConfig');
class_alias(BackendMetastore::class, 'Google_Service_DataprocMetastore_BackendMetastore');
class_alias(Backup::class, 'Google_Service_DataprocMetastore_Backup');
class_alias(Binding::class, 'Google_Service_DataprocMetastore_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_DataprocMetastore_CancelOperationRequest');
class_alias(Consumer::class, 'Google_Service_DataprocMetastore_Consumer');
class_alias(DatabaseDump::class, 'Google_Service_DataprocMetastore_DatabaseDump');
class_alias(EncryptionConfig::class, 'Google_Service_DataprocMetastore_EncryptionConfig');
class_alias(ExportMetadataRequest::class, 'Google_Service_DataprocMetastore_ExportMetadataRequest');
class_alias(Expr::class, 'Google_Service_DataprocMetastore_Expr');
class_alias(Federation::class, 'Google_Service_DataprocMetastore_Federation');
class_alias(HiveMetastoreConfig::class, 'Google_Service_DataprocMetastore_HiveMetastoreConfig');
class_alias(HiveMetastoreVersion::class, 'Google_Service_DataprocMetastore_HiveMetastoreVersion');
class_alias(KerberosConfig::class, 'Google_Service_DataprocMetastore_KerberosConfig');
class_alias(ListBackupsResponse::class, 'Google_Service_DataprocMetastore_ListBackupsResponse');
class_alias(ListFederationsResponse::class, 'Google_Service_DataprocMetastore_ListFederationsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_DataprocMetastore_ListLocationsResponse');
class_alias(ListMetadataImportsResponse::class, 'Google_Service_DataprocMetastore_ListMetadataImportsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_DataprocMetastore_ListOperationsResponse');
class_alias(ListServicesResponse::class, 'Google_Service_DataprocMetastore_ListServicesResponse');
class_alias(Location::class, 'Google_Service_DataprocMetastore_Location');
class_alias(LocationMetadata::class, 'Google_Service_DataprocMetastore_LocationMetadata');
class_alias(MaintenanceWindow::class, 'Google_Service_DataprocMetastore_MaintenanceWindow');
class_alias(MetadataExport::class, 'Google_Service_DataprocMetastore_MetadataExport');
class_alias(MetadataImport::class, 'Google_Service_DataprocMetastore_MetadataImport');
class_alias(MetadataManagementActivity::class, 'Google_Service_DataprocMetastore_MetadataManagementActivity');
class_alias(MetastoreEmpty::class, 'Google_Service_DataprocMetastore_MetastoreEmpty');
class_alias(NetworkConfig::class, 'Google_Service_DataprocMetastore_NetworkConfig');
class_alias(Operation::class, 'Google_Service_DataprocMetastore_Operation');
class_alias(OperationMetadata::class, 'Google_Service_DataprocMetastore_OperationMetadata');
class_alias(Policy::class, 'Google_Service_DataprocMetastore_Policy');
class_alias(Restore::class, 'Google_Service_DataprocMetastore_Restore');
class_alias(RestoreServiceRequest::class, 'Google_Service_DataprocMetastore_RestoreServiceRequest');
class_alias(Secret::class, 'Google_Service_DataprocMetastore_Secret');
class_alias(Service::class, 'Google_Service_DataprocMetastore_Service');
class_alias(SetIamPolicyRequest::class, 'Google_Service_DataprocMetastore_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_DataprocMetastore_Status');
class_alias(TelemetryConfig::class, 'Google_Service_DataprocMetastore_TelemetryConfig');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_DataprocMetastore_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_DataprocMetastore_TestIamPermissionsResponse');
