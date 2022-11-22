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

namespace Google\Service\SQLAdmin;

class AclEntry extends \Google\Model
{
  /** @var string */
  public $expirationTime;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $value;

  /** @param string */
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class ApiWarning extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $message;
  /** @var string */
  public $region;

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
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
}

class BackupConfiguration extends \Google\Model
{
  /** @var BackupRetentionSettings */
  public $backupRetentionSettings;
  /** @var bool */
  public $binaryLogEnabled;
  /** @var bool */
  public $enabled;
  /** @var string */
  public $kind;
  /** @var string */
  public $location;
  /** @var bool */
  public $pointInTimeRecoveryEnabled;
  /** @var bool */
  public $replicationLogArchivingEnabled;
  /** @var string */
  public $startTime;
  /** @var int */
  public $transactionLogRetentionDays;
  protected $backupRetentionSettingsType = BackupRetentionSettings::class;
  protected $backupRetentionSettingsDataType = '';
  /** @param BackupRetentionSettings */
  public function setBackupRetentionSettings(BackupRetentionSettings $backupRetentionSettings)
  {
    $this->backupRetentionSettings = $backupRetentionSettings;
  }
  /** @return BackupRetentionSettings */
  public function getBackupRetentionSettings()
  {
    return $this->backupRetentionSettings;
  }
  /** @param bool */
  public function setBinaryLogEnabled($binaryLogEnabled)
  {
    $this->binaryLogEnabled = $binaryLogEnabled;
  }
  /** @return bool */
  public function getBinaryLogEnabled()
  {
    return $this->binaryLogEnabled;
  }
  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param bool */
  public function setPointInTimeRecoveryEnabled($pointInTimeRecoveryEnabled)
  {
    $this->pointInTimeRecoveryEnabled = $pointInTimeRecoveryEnabled;
  }
  /** @return bool */
  public function getPointInTimeRecoveryEnabled()
  {
    return $this->pointInTimeRecoveryEnabled;
  }
  /** @param bool */
  public function setReplicationLogArchivingEnabled($replicationLogArchivingEnabled)
  {
    $this->replicationLogArchivingEnabled = $replicationLogArchivingEnabled;
  }
  /** @return bool */
  public function getReplicationLogArchivingEnabled()
  {
    return $this->replicationLogArchivingEnabled;
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
  /** @param int */
  public function setTransactionLogRetentionDays($transactionLogRetentionDays)
  {
    $this->transactionLogRetentionDays = $transactionLogRetentionDays;
  }
  /** @return int */
  public function getTransactionLogRetentionDays()
  {
    return $this->transactionLogRetentionDays;
  }
}

class BackupContext extends \Google\Model
{
  /** @var string */
  public $backupId;
  /** @var string */
  public $kind;

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
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class BackupRetentionSettings extends \Google\Model
{
  /** @var int */
  public $retainedBackups;
  /** @var string */
  public $retentionUnit;

  /** @param int */
  public function setRetainedBackups($retainedBackups)
  {
    $this->retainedBackups = $retainedBackups;
  }
  /** @return int */
  public function getRetainedBackups()
  {
    return $this->retainedBackups;
  }
  /** @param string */
  public function setRetentionUnit($retentionUnit)
  {
    $this->retentionUnit = $retentionUnit;
  }
  /** @return string */
  public function getRetentionUnit()
  {
    return $this->retentionUnit;
  }
}

class BackupRun extends \Google\Model
{
  /** @var string */
  public $backupKind;
  /** @var string */
  public $description;
  /** @var DiskEncryptionConfiguration */
  public $diskEncryptionConfiguration;
  /** @var DiskEncryptionStatus */
  public $diskEncryptionStatus;
  /** @var string */
  public $endTime;
  /** @var string */
  public $enqueuedTime;
  /** @var OperationError */
  public $error;
  /** @var string */
  public $id;
  /** @var string */
  public $instance;
  /** @var string */
  public $kind;
  /** @var string */
  public $location;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $startTime;
  /** @var string */
  public $status;
  /** @var string */
  public $timeZone;
  /** @var string */
  public $type;
  /** @var string */
  public $windowStartTime;
  protected $diskEncryptionConfigurationType = DiskEncryptionConfiguration::class;
  protected $diskEncryptionConfigurationDataType = '';
  protected $diskEncryptionStatusType = DiskEncryptionStatus::class;
  protected $diskEncryptionStatusDataType = '';
  protected $errorType = OperationError::class;
  protected $errorDataType = '';
  /** @param string */
  public function setBackupKind($backupKind)
  {
    $this->backupKind = $backupKind;
  }
  /** @return string */
  public function getBackupKind()
  {
    return $this->backupKind;
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
  /** @param DiskEncryptionConfiguration */
  public function setDiskEncryptionConfiguration(DiskEncryptionConfiguration $diskEncryptionConfiguration)
  {
    $this->diskEncryptionConfiguration = $diskEncryptionConfiguration;
  }
  /** @return DiskEncryptionConfiguration */
  public function getDiskEncryptionConfiguration()
  {
    return $this->diskEncryptionConfiguration;
  }
  /** @param DiskEncryptionStatus */
  public function setDiskEncryptionStatus(DiskEncryptionStatus $diskEncryptionStatus)
  {
    $this->diskEncryptionStatus = $diskEncryptionStatus;
  }
  /** @return DiskEncryptionStatus */
  public function getDiskEncryptionStatus()
  {
    return $this->diskEncryptionStatus;
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
  public function setEnqueuedTime($enqueuedTime)
  {
    $this->enqueuedTime = $enqueuedTime;
  }
  /** @return string */
  public function getEnqueuedTime()
  {
    return $this->enqueuedTime;
  }
  /** @param OperationError */
  public function setError(OperationError $error)
  {
    $this->error = $error;
  }
  /** @return OperationError */
  public function getError()
  {
    return $this->error;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
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
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return string */
  public function getTimeZone()
  {
    return $this->timeZone;
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
  public function setWindowStartTime($windowStartTime)
  {
    $this->windowStartTime = $windowStartTime;
  }
  /** @return string */
  public function getWindowStartTime()
  {
    return $this->windowStartTime;
  }
}

class BackupRunsListResponse extends \Google\Collection
{
  /** @var BackupRun[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = BackupRun::class;
  protected $itemsDataType = 'array';
  /** @param BackupRun[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return BackupRun[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class BinLogCoordinates extends \Google\Model
{
  /** @var string */
  public $binLogFileName;
  /** @var string */
  public $binLogPosition;
  /** @var string */
  public $kind;

  /** @param string */
  public function setBinLogFileName($binLogFileName)
  {
    $this->binLogFileName = $binLogFileName;
  }
  /** @return string */
  public function getBinLogFileName()
  {
    return $this->binLogFileName;
  }
  /** @param string */
  public function setBinLogPosition($binLogPosition)
  {
    $this->binLogPosition = $binLogPosition;
  }
  /** @return string */
  public function getBinLogPosition()
  {
    return $this->binLogPosition;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class CloneContext extends \Google\Collection
{
  /** @var string */
  public $allocatedIpRange;
  /** @var BinLogCoordinates */
  public $binLogCoordinates;
  /** @var string[] */
  public $databaseNames;
  /** @var string */
  public $destinationInstanceName;
  /** @var string */
  public $kind;
  /** @var string */
  public $pitrTimestampMs;
  /** @var string */
  public $pointInTime;
  protected $collection_key = 'databaseNames';
  protected $binLogCoordinatesType = BinLogCoordinates::class;
  protected $binLogCoordinatesDataType = '';
  /** @param string */
  public function setAllocatedIpRange($allocatedIpRange)
  {
    $this->allocatedIpRange = $allocatedIpRange;
  }
  /** @return string */
  public function getAllocatedIpRange()
  {
    return $this->allocatedIpRange;
  }
  /** @param BinLogCoordinates */
  public function setBinLogCoordinates(BinLogCoordinates $binLogCoordinates)
  {
    $this->binLogCoordinates = $binLogCoordinates;
  }
  /** @return BinLogCoordinates */
  public function getBinLogCoordinates()
  {
    return $this->binLogCoordinates;
  }
  /** @param string[] */
  public function setDatabaseNames($databaseNames)
  {
    $this->databaseNames = $databaseNames;
  }
  /** @return string[] */
  public function getDatabaseNames()
  {
    return $this->databaseNames;
  }
  /** @param string */
  public function setDestinationInstanceName($destinationInstanceName)
  {
    $this->destinationInstanceName = $destinationInstanceName;
  }
  /** @return string */
  public function getDestinationInstanceName()
  {
    return $this->destinationInstanceName;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setPitrTimestampMs($pitrTimestampMs)
  {
    $this->pitrTimestampMs = $pitrTimestampMs;
  }
  /** @return string */
  public function getPitrTimestampMs()
  {
    return $this->pitrTimestampMs;
  }
  /** @param string */
  public function setPointInTime($pointInTime)
  {
    $this->pointInTime = $pointInTime;
  }
  /** @return string */
  public function getPointInTime()
  {
    return $this->pointInTime;
  }
}

class ConnectSettings extends \Google\Collection
{
  /** @var string */
  public $backendType;
  /** @var string */
  public $databaseVersion;
  /** @var IpMapping[] */
  public $ipAddresses;
  /** @var string */
  public $kind;
  /** @var string */
  public $region;
  /** @var SslCert */
  public $serverCaCert;
  protected $collection_key = 'ipAddresses';
  protected $ipAddressesType = IpMapping::class;
  protected $ipAddressesDataType = 'array';
  protected $serverCaCertType = SslCert::class;
  protected $serverCaCertDataType = '';
  /** @param string */
  public function setBackendType($backendType)
  {
    $this->backendType = $backendType;
  }
  /** @return string */
  public function getBackendType()
  {
    return $this->backendType;
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
  /** @param IpMapping[] */
  public function setIpAddresses($ipAddresses)
  {
    $this->ipAddresses = $ipAddresses;
  }
  /** @return IpMapping[] */
  public function getIpAddresses()
  {
    return $this->ipAddresses;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
  /** @param SslCert */
  public function setServerCaCert(SslCert $serverCaCert)
  {
    $this->serverCaCert = $serverCaCert;
  }
  /** @return SslCert */
  public function getServerCaCert()
  {
    return $this->serverCaCert;
  }
}

class Database extends \Google\Model
{
  /** @var string */
  public $charset;
  /** @var string */
  public $collation;
  /** @var string */
  public $etag;
  /** @var string */
  public $instance;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $project;
  /** @var string */
  public $selfLink;
  /** @var SqlServerDatabaseDetails */
  public $sqlserverDatabaseDetails;
  protected $sqlserverDatabaseDetailsType = SqlServerDatabaseDetails::class;
  protected $sqlserverDatabaseDetailsDataType = '';
  /** @param string */
  public function setCharset($charset)
  {
    $this->charset = $charset;
  }
  /** @return string */
  public function getCharset()
  {
    return $this->charset;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param SqlServerDatabaseDetails */
  public function setSqlserverDatabaseDetails(SqlServerDatabaseDetails $sqlserverDatabaseDetails)
  {
    $this->sqlserverDatabaseDetails = $sqlserverDatabaseDetails;
  }
  /** @return SqlServerDatabaseDetails */
  public function getSqlserverDatabaseDetails()
  {
    return $this->sqlserverDatabaseDetails;
  }
}

class DatabaseFlags extends \Google\Model
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

class DatabaseInstance extends \Google\Collection
{
  /** @var string[] */
  public $availableMaintenanceVersions;
  /** @var string */
  public $backendType;
  /** @var string */
  public $connectionName;
  /** @var string */
  public $createTime;
  /** @var string */
  public $currentDiskSize;
  /** @var string */
  public $databaseInstalledVersion;
  /** @var string */
  public $databaseVersion;
  /** @var DiskEncryptionConfiguration */
  public $diskEncryptionConfiguration;
  /** @var DiskEncryptionStatus */
  public $diskEncryptionStatus;
  /** @var string */
  public $etag;
  /** @var DatabaseInstanceFailoverReplica */
  public $failoverReplica;
  /** @var string */
  public $gceZone;
  /** @var string */
  public $instanceType;
  /** @var IpMapping[] */
  public $ipAddresses;
  /** @var string */
  public $ipv6Address;
  /** @var string */
  public $kind;
  /** @var string */
  public $maintenanceVersion;
  /** @var string */
  public $masterInstanceName;
  /** @var string */
  public $maxDiskSize;
  /** @var string */
  public $name;
  /** @var OnPremisesConfiguration */
  public $onPremisesConfiguration;
  /** @var SqlOutOfDiskReport */
  public $outOfDiskReport;
  /** @var string */
  public $project;
  /** @var string */
  public $region;
  /** @var ReplicaConfiguration */
  public $replicaConfiguration;
  /** @var string[] */
  public $replicaNames;
  /** @var string */
  public $rootPassword;
  /** @var bool */
  public $satisfiesPzs;
  /** @var SqlScheduledMaintenance */
  public $scheduledMaintenance;
  /** @var string */
  public $secondaryGceZone;
  /** @var string */
  public $selfLink;
  /** @var SslCert */
  public $serverCaCert;
  /** @var string */
  public $serviceAccountEmailAddress;
  /** @var Settings */
  public $settings;
  /** @var string */
  public $state;
  /** @var string[] */
  public $suspensionReason;
  protected $collection_key = 'suspensionReason';
  protected $diskEncryptionConfigurationType = DiskEncryptionConfiguration::class;
  protected $diskEncryptionConfigurationDataType = '';
  protected $diskEncryptionStatusType = DiskEncryptionStatus::class;
  protected $diskEncryptionStatusDataType = '';
  protected $failoverReplicaType = DatabaseInstanceFailoverReplica::class;
  protected $failoverReplicaDataType = '';
  protected $ipAddressesType = IpMapping::class;
  protected $ipAddressesDataType = 'array';
  protected $onPremisesConfigurationType = OnPremisesConfiguration::class;
  protected $onPremisesConfigurationDataType = '';
  protected $outOfDiskReportType = SqlOutOfDiskReport::class;
  protected $outOfDiskReportDataType = '';
  protected $replicaConfigurationType = ReplicaConfiguration::class;
  protected $replicaConfigurationDataType = '';
  protected $scheduledMaintenanceType = SqlScheduledMaintenance::class;
  protected $scheduledMaintenanceDataType = '';
  protected $serverCaCertType = SslCert::class;
  protected $serverCaCertDataType = '';
  protected $settingsType = Settings::class;
  protected $settingsDataType = '';
  /** @param string[] */
  public function setAvailableMaintenanceVersions($availableMaintenanceVersions)
  {
    $this->availableMaintenanceVersions = $availableMaintenanceVersions;
  }
  /** @return string[] */
  public function getAvailableMaintenanceVersions()
  {
    return $this->availableMaintenanceVersions;
  }
  /** @param string */
  public function setBackendType($backendType)
  {
    $this->backendType = $backendType;
  }
  /** @return string */
  public function getBackendType()
  {
    return $this->backendType;
  }
  /** @param string */
  public function setConnectionName($connectionName)
  {
    $this->connectionName = $connectionName;
  }
  /** @return string */
  public function getConnectionName()
  {
    return $this->connectionName;
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
  public function setCurrentDiskSize($currentDiskSize)
  {
    $this->currentDiskSize = $currentDiskSize;
  }
  /** @return string */
  public function getCurrentDiskSize()
  {
    return $this->currentDiskSize;
  }
  /** @param string */
  public function setDatabaseInstalledVersion($databaseInstalledVersion)
  {
    $this->databaseInstalledVersion = $databaseInstalledVersion;
  }
  /** @return string */
  public function getDatabaseInstalledVersion()
  {
    return $this->databaseInstalledVersion;
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
  /** @param DiskEncryptionConfiguration */
  public function setDiskEncryptionConfiguration(DiskEncryptionConfiguration $diskEncryptionConfiguration)
  {
    $this->diskEncryptionConfiguration = $diskEncryptionConfiguration;
  }
  /** @return DiskEncryptionConfiguration */
  public function getDiskEncryptionConfiguration()
  {
    return $this->diskEncryptionConfiguration;
  }
  /** @param DiskEncryptionStatus */
  public function setDiskEncryptionStatus(DiskEncryptionStatus $diskEncryptionStatus)
  {
    $this->diskEncryptionStatus = $diskEncryptionStatus;
  }
  /** @return DiskEncryptionStatus */
  public function getDiskEncryptionStatus()
  {
    return $this->diskEncryptionStatus;
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
  /** @param DatabaseInstanceFailoverReplica */
  public function setFailoverReplica(DatabaseInstanceFailoverReplica $failoverReplica)
  {
    $this->failoverReplica = $failoverReplica;
  }
  /** @return DatabaseInstanceFailoverReplica */
  public function getFailoverReplica()
  {
    return $this->failoverReplica;
  }
  /** @param string */
  public function setGceZone($gceZone)
  {
    $this->gceZone = $gceZone;
  }
  /** @return string */
  public function getGceZone()
  {
    return $this->gceZone;
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
  /** @param IpMapping[] */
  public function setIpAddresses($ipAddresses)
  {
    $this->ipAddresses = $ipAddresses;
  }
  /** @return IpMapping[] */
  public function getIpAddresses()
  {
    return $this->ipAddresses;
  }
  /** @param string */
  public function setIpv6Address($ipv6Address)
  {
    $this->ipv6Address = $ipv6Address;
  }
  /** @return string */
  public function getIpv6Address()
  {
    return $this->ipv6Address;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setMaintenanceVersion($maintenanceVersion)
  {
    $this->maintenanceVersion = $maintenanceVersion;
  }
  /** @return string */
  public function getMaintenanceVersion()
  {
    return $this->maintenanceVersion;
  }
  /** @param string */
  public function setMasterInstanceName($masterInstanceName)
  {
    $this->masterInstanceName = $masterInstanceName;
  }
  /** @return string */
  public function getMasterInstanceName()
  {
    return $this->masterInstanceName;
  }
  /** @param string */
  public function setMaxDiskSize($maxDiskSize)
  {
    $this->maxDiskSize = $maxDiskSize;
  }
  /** @return string */
  public function getMaxDiskSize()
  {
    return $this->maxDiskSize;
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
  /** @param OnPremisesConfiguration */
  public function setOnPremisesConfiguration(OnPremisesConfiguration $onPremisesConfiguration)
  {
    $this->onPremisesConfiguration = $onPremisesConfiguration;
  }
  /** @return OnPremisesConfiguration */
  public function getOnPremisesConfiguration()
  {
    return $this->onPremisesConfiguration;
  }
  /** @param SqlOutOfDiskReport */
  public function setOutOfDiskReport(SqlOutOfDiskReport $outOfDiskReport)
  {
    $this->outOfDiskReport = $outOfDiskReport;
  }
  /** @return SqlOutOfDiskReport */
  public function getOutOfDiskReport()
  {
    return $this->outOfDiskReport;
  }
  /** @param string */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
  /** @param ReplicaConfiguration */
  public function setReplicaConfiguration(ReplicaConfiguration $replicaConfiguration)
  {
    $this->replicaConfiguration = $replicaConfiguration;
  }
  /** @return ReplicaConfiguration */
  public function getReplicaConfiguration()
  {
    return $this->replicaConfiguration;
  }
  /** @param string[] */
  public function setReplicaNames($replicaNames)
  {
    $this->replicaNames = $replicaNames;
  }
  /** @return string[] */
  public function getReplicaNames()
  {
    return $this->replicaNames;
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
  public function setSatisfiesPzs($satisfiesPzs)
  {
    $this->satisfiesPzs = $satisfiesPzs;
  }
  /** @return bool */
  public function getSatisfiesPzs()
  {
    return $this->satisfiesPzs;
  }
  /** @param SqlScheduledMaintenance */
  public function setScheduledMaintenance(SqlScheduledMaintenance $scheduledMaintenance)
  {
    $this->scheduledMaintenance = $scheduledMaintenance;
  }
  /** @return SqlScheduledMaintenance */
  public function getScheduledMaintenance()
  {
    return $this->scheduledMaintenance;
  }
  /** @param string */
  public function setSecondaryGceZone($secondaryGceZone)
  {
    $this->secondaryGceZone = $secondaryGceZone;
  }
  /** @return string */
  public function getSecondaryGceZone()
  {
    return $this->secondaryGceZone;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param SslCert */
  public function setServerCaCert(SslCert $serverCaCert)
  {
    $this->serverCaCert = $serverCaCert;
  }
  /** @return SslCert */
  public function getServerCaCert()
  {
    return $this->serverCaCert;
  }
  /** @param string */
  public function setServiceAccountEmailAddress($serviceAccountEmailAddress)
  {
    $this->serviceAccountEmailAddress = $serviceAccountEmailAddress;
  }
  /** @return string */
  public function getServiceAccountEmailAddress()
  {
    return $this->serviceAccountEmailAddress;
  }
  /** @param Settings */
  public function setSettings(Settings $settings)
  {
    $this->settings = $settings;
  }
  /** @return Settings */
  public function getSettings()
  {
    return $this->settings;
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
  /** @param string[] */
  public function setSuspensionReason($suspensionReason)
  {
    $this->suspensionReason = $suspensionReason;
  }
  /** @return string[] */
  public function getSuspensionReason()
  {
    return $this->suspensionReason;
  }
}

class DatabaseInstanceFailoverReplica extends \Google\Model
{
  /** @var bool */
  public $available;
  /** @var string */
  public $name;

  /** @param bool */
  public function setAvailable($available)
  {
    $this->available = $available;
  }
  /** @return bool */
  public function getAvailable()
  {
    return $this->available;
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

class DatabasesListResponse extends \Google\Collection
{
  /** @var Database[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = Database::class;
  protected $itemsDataType = 'array';
  /** @param Database[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Database[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class DemoteMasterConfiguration extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var DemoteMasterMySqlReplicaConfiguration */
  public $mysqlReplicaConfiguration;
  protected $mysqlReplicaConfigurationType = DemoteMasterMySqlReplicaConfiguration::class;
  protected $mysqlReplicaConfigurationDataType = '';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param DemoteMasterMySqlReplicaConfiguration */
  public function setMysqlReplicaConfiguration(DemoteMasterMySqlReplicaConfiguration $mysqlReplicaConfiguration)
  {
    $this->mysqlReplicaConfiguration = $mysqlReplicaConfiguration;
  }
  /** @return DemoteMasterMySqlReplicaConfiguration */
  public function getMysqlReplicaConfiguration()
  {
    return $this->mysqlReplicaConfiguration;
  }
}

class DemoteMasterContext extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $masterInstanceName;
  /** @var DemoteMasterConfiguration */
  public $replicaConfiguration;
  /** @var bool */
  public $skipReplicationSetup;
  /** @var bool */
  public $verifyGtidConsistency;
  protected $replicaConfigurationType = DemoteMasterConfiguration::class;
  protected $replicaConfigurationDataType = '';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setMasterInstanceName($masterInstanceName)
  {
    $this->masterInstanceName = $masterInstanceName;
  }
  /** @return string */
  public function getMasterInstanceName()
  {
    return $this->masterInstanceName;
  }
  /** @param DemoteMasterConfiguration */
  public function setReplicaConfiguration(DemoteMasterConfiguration $replicaConfiguration)
  {
    $this->replicaConfiguration = $replicaConfiguration;
  }
  /** @return DemoteMasterConfiguration */
  public function getReplicaConfiguration()
  {
    return $this->replicaConfiguration;
  }
  /** @param bool */
  public function setSkipReplicationSetup($skipReplicationSetup)
  {
    $this->skipReplicationSetup = $skipReplicationSetup;
  }
  /** @return bool */
  public function getSkipReplicationSetup()
  {
    return $this->skipReplicationSetup;
  }
  /** @param bool */
  public function setVerifyGtidConsistency($verifyGtidConsistency)
  {
    $this->verifyGtidConsistency = $verifyGtidConsistency;
  }
  /** @return bool */
  public function getVerifyGtidConsistency()
  {
    return $this->verifyGtidConsistency;
  }
}

class DemoteMasterMySqlReplicaConfiguration extends \Google\Model
{
  /** @var string */
  public $caCertificate;
  /** @var string */
  public $clientCertificate;
  /** @var string */
  public $clientKey;
  /** @var string */
  public $kind;
  /** @var string */
  public $password;
  /** @var string */
  public $username;

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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class DenyMaintenancePeriod extends \Google\Model
{
  /** @var string */
  public $endDate;
  /** @var string */
  public $startDate;
  /** @var string */
  public $time;

  /** @param string */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return string */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param string */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return string */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
  }
}

class DiskEncryptionConfiguration extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $kmsKeyName;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
}

class DiskEncryptionStatus extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $kmsKeyVersionName;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setKmsKeyVersionName($kmsKeyVersionName)
  {
    $this->kmsKeyVersionName = $kmsKeyVersionName;
  }
  /** @return string */
  public function getKmsKeyVersionName()
  {
    return $this->kmsKeyVersionName;
  }
}

class ExportContext extends \Google\Collection
{
  /** @var ExportContextBakExportOptions */
  public $bakExportOptions;
  /** @var ExportContextCsvExportOptions */
  public $csvExportOptions;
  /** @var string[] */
  public $databases;
  /** @var string */
  public $fileType;
  /** @var string */
  public $kind;
  /** @var bool */
  public $offload;
  /** @var ExportContextSqlExportOptions */
  public $sqlExportOptions;
  /** @var string */
  public $uri;
  protected $collection_key = 'databases';
  protected $bakExportOptionsType = ExportContextBakExportOptions::class;
  protected $bakExportOptionsDataType = '';
  protected $csvExportOptionsType = ExportContextCsvExportOptions::class;
  protected $csvExportOptionsDataType = '';
  protected $sqlExportOptionsType = ExportContextSqlExportOptions::class;
  protected $sqlExportOptionsDataType = '';
  /** @param ExportContextBakExportOptions */
  public function setBakExportOptions(ExportContextBakExportOptions $bakExportOptions)
  {
    $this->bakExportOptions = $bakExportOptions;
  }
  /** @return ExportContextBakExportOptions */
  public function getBakExportOptions()
  {
    return $this->bakExportOptions;
  }
  /** @param ExportContextCsvExportOptions */
  public function setCsvExportOptions(ExportContextCsvExportOptions $csvExportOptions)
  {
    $this->csvExportOptions = $csvExportOptions;
  }
  /** @return ExportContextCsvExportOptions */
  public function getCsvExportOptions()
  {
    return $this->csvExportOptions;
  }
  /** @param string[] */
  public function setDatabases($databases)
  {
    $this->databases = $databases;
  }
  /** @return string[] */
  public function getDatabases()
  {
    return $this->databases;
  }
  /** @param string */
  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }
  /** @return string */
  public function getFileType()
  {
    return $this->fileType;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param bool */
  public function setOffload($offload)
  {
    $this->offload = $offload;
  }
  /** @return bool */
  public function getOffload()
  {
    return $this->offload;
  }
  /** @param ExportContextSqlExportOptions */
  public function setSqlExportOptions(ExportContextSqlExportOptions $sqlExportOptions)
  {
    $this->sqlExportOptions = $sqlExportOptions;
  }
  /** @return ExportContextSqlExportOptions */
  public function getSqlExportOptions()
  {
    return $this->sqlExportOptions;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class ExportContextBakExportOptions extends \Google\Model
{
  /** @var int */
  public $stripeCount;
  /** @var bool */
  public $striped;

  /** @param int */
  public function setStripeCount($stripeCount)
  {
    $this->stripeCount = $stripeCount;
  }
  /** @return int */
  public function getStripeCount()
  {
    return $this->stripeCount;
  }
  /** @param bool */
  public function setStriped($striped)
  {
    $this->striped = $striped;
  }
  /** @return bool */
  public function getStriped()
  {
    return $this->striped;
  }
}

class ExportContextCsvExportOptions extends \Google\Model
{
  /** @var string */
  public $escapeCharacter;
  /** @var string */
  public $fieldsTerminatedBy;
  /** @var string */
  public $linesTerminatedBy;
  /** @var string */
  public $quoteCharacter;
  /** @var string */
  public $selectQuery;

  /** @param string */
  public function setEscapeCharacter($escapeCharacter)
  {
    $this->escapeCharacter = $escapeCharacter;
  }
  /** @return string */
  public function getEscapeCharacter()
  {
    return $this->escapeCharacter;
  }
  /** @param string */
  public function setFieldsTerminatedBy($fieldsTerminatedBy)
  {
    $this->fieldsTerminatedBy = $fieldsTerminatedBy;
  }
  /** @return string */
  public function getFieldsTerminatedBy()
  {
    return $this->fieldsTerminatedBy;
  }
  /** @param string */
  public function setLinesTerminatedBy($linesTerminatedBy)
  {
    $this->linesTerminatedBy = $linesTerminatedBy;
  }
  /** @return string */
  public function getLinesTerminatedBy()
  {
    return $this->linesTerminatedBy;
  }
  /** @param string */
  public function setQuoteCharacter($quoteCharacter)
  {
    $this->quoteCharacter = $quoteCharacter;
  }
  /** @return string */
  public function getQuoteCharacter()
  {
    return $this->quoteCharacter;
  }
  /** @param string */
  public function setSelectQuery($selectQuery)
  {
    $this->selectQuery = $selectQuery;
  }
  /** @return string */
  public function getSelectQuery()
  {
    return $this->selectQuery;
  }
}

class ExportContextSqlExportOptions extends \Google\Collection
{
  /** @var ExportContextSqlExportOptionsMysqlExportOptions */
  public $mysqlExportOptions;
  /** @var bool */
  public $schemaOnly;
  /** @var string[] */
  public $tables;
  protected $collection_key = 'tables';
  protected $mysqlExportOptionsType = ExportContextSqlExportOptionsMysqlExportOptions::class;
  protected $mysqlExportOptionsDataType = '';
  /** @param ExportContextSqlExportOptionsMysqlExportOptions */
  public function setMysqlExportOptions(ExportContextSqlExportOptionsMysqlExportOptions $mysqlExportOptions)
  {
    $this->mysqlExportOptions = $mysqlExportOptions;
  }
  /** @return ExportContextSqlExportOptionsMysqlExportOptions */
  public function getMysqlExportOptions()
  {
    return $this->mysqlExportOptions;
  }
  /** @param bool */
  public function setSchemaOnly($schemaOnly)
  {
    $this->schemaOnly = $schemaOnly;
  }
  /** @return bool */
  public function getSchemaOnly()
  {
    return $this->schemaOnly;
  }
  /** @param string[] */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /** @return string[] */
  public function getTables()
  {
    return $this->tables;
  }
}

class ExportContextSqlExportOptionsMysqlExportOptions extends \Google\Model
{
  /** @var int */
  public $masterData;

  /** @param int */
  public function setMasterData($masterData)
  {
    $this->masterData = $masterData;
  }
  /** @return int */
  public function getMasterData()
  {
    return $this->masterData;
  }
}

class FailoverContext extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $settingsVersion;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setSettingsVersion($settingsVersion)
  {
    $this->settingsVersion = $settingsVersion;
  }
  /** @return string */
  public function getSettingsVersion()
  {
    return $this->settingsVersion;
  }
}

class Flag extends \Google\Collection
{
  /** @var string[] */
  public $allowedIntValues;
  /** @var string[] */
  public $allowedStringValues;
  /** @var string[] */
  public $appliesTo;
  /** @var bool */
  public $inBeta;
  /** @var string */
  public $kind;
  /** @var string */
  public $maxValue;
  /** @var string */
  public $minValue;
  /** @var string */
  public $name;
  /** @var bool */
  public $requiresRestart;
  /** @var string */
  public $type;
  protected $collection_key = 'appliesTo';
  /** @param string[] */
  public function setAllowedIntValues($allowedIntValues)
  {
    $this->allowedIntValues = $allowedIntValues;
  }
  /** @return string[] */
  public function getAllowedIntValues()
  {
    return $this->allowedIntValues;
  }
  /** @param string[] */
  public function setAllowedStringValues($allowedStringValues)
  {
    $this->allowedStringValues = $allowedStringValues;
  }
  /** @return string[] */
  public function getAllowedStringValues()
  {
    return $this->allowedStringValues;
  }
  /** @param string[] */
  public function setAppliesTo($appliesTo)
  {
    $this->appliesTo = $appliesTo;
  }
  /** @return string[] */
  public function getAppliesTo()
  {
    return $this->appliesTo;
  }
  /** @param bool */
  public function setInBeta($inBeta)
  {
    $this->inBeta = $inBeta;
  }
  /** @return bool */
  public function getInBeta()
  {
    return $this->inBeta;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /** @return string */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /** @param string */
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  /** @return string */
  public function getMinValue()
  {
    return $this->minValue;
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
  public function setRequiresRestart($requiresRestart)
  {
    $this->requiresRestart = $requiresRestart;
  }
  /** @return bool */
  public function getRequiresRestart()
  {
    return $this->requiresRestart;
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

class FlagsListResponse extends \Google\Collection
{
  /** @var Flag[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = Flag::class;
  protected $itemsDataType = 'array';
  /** @param Flag[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Flag[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class GenerateEphemeralCertRequest extends \Google\Model
{
  /** @var string */
  public $accessToken;
  /** @var string */
  public $publicKey;
  /** @var string */
  public $readTime;
  /** @var string */
  public $validDuration;
  protected $internal_gapi_mappings = [
        "accessToken" => "access_token",
        "publicKey" => "public_key",
  ];
  /** @param string */
  public function setAccessToken($accessToken)
  {
    $this->accessToken = $accessToken;
  }
  /** @return string */
  public function getAccessToken()
  {
    return $this->accessToken;
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
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
  /** @param string */
  public function setValidDuration($validDuration)
  {
    $this->validDuration = $validDuration;
  }
  /** @return string */
  public function getValidDuration()
  {
    return $this->validDuration;
  }
}

class GenerateEphemeralCertResponse extends \Google\Model
{
  /** @var SslCert */
  public $ephemeralCert;
  protected $ephemeralCertType = SslCert::class;
  protected $ephemeralCertDataType = '';
  /** @param SslCert */
  public function setEphemeralCert(SslCert $ephemeralCert)
  {
    $this->ephemeralCert = $ephemeralCert;
  }
  /** @return SslCert */
  public function getEphemeralCert()
  {
    return $this->ephemeralCert;
  }
}

class ImportContext extends \Google\Model
{
  /** @var ImportContextBakImportOptions */
  public $bakImportOptions;
  /** @var ImportContextCsvImportOptions */
  public $csvImportOptions;
  /** @var string */
  public $database;
  /** @var string */
  public $fileType;
  /** @var string */
  public $importUser;
  /** @var string */
  public $kind;
  /** @var string */
  public $uri;
  protected $bakImportOptionsType = ImportContextBakImportOptions::class;
  protected $bakImportOptionsDataType = '';
  protected $csvImportOptionsType = ImportContextCsvImportOptions::class;
  protected $csvImportOptionsDataType = '';
  /** @param ImportContextBakImportOptions */
  public function setBakImportOptions(ImportContextBakImportOptions $bakImportOptions)
  {
    $this->bakImportOptions = $bakImportOptions;
  }
  /** @return ImportContextBakImportOptions */
  public function getBakImportOptions()
  {
    return $this->bakImportOptions;
  }
  /** @param ImportContextCsvImportOptions */
  public function setCsvImportOptions(ImportContextCsvImportOptions $csvImportOptions)
  {
    $this->csvImportOptions = $csvImportOptions;
  }
  /** @return ImportContextCsvImportOptions */
  public function getCsvImportOptions()
  {
    return $this->csvImportOptions;
  }
  /** @param string */
  public function setDatabase($database)
  {
    $this->database = $database;
  }
  /** @return string */
  public function getDatabase()
  {
    return $this->database;
  }
  /** @param string */
  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }
  /** @return string */
  public function getFileType()
  {
    return $this->fileType;
  }
  /** @param string */
  public function setImportUser($importUser)
  {
    $this->importUser = $importUser;
  }
  /** @return string */
  public function getImportUser()
  {
    return $this->importUser;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class ImportContextBakImportOptions extends \Google\Model
{
  /** @var ImportContextBakImportOptionsEncryptionOptions */
  public $encryptionOptions;
  /** @var bool */
  public $striped;
  protected $encryptionOptionsType = ImportContextBakImportOptionsEncryptionOptions::class;
  protected $encryptionOptionsDataType = '';
  /** @param ImportContextBakImportOptionsEncryptionOptions */
  public function setEncryptionOptions(ImportContextBakImportOptionsEncryptionOptions $encryptionOptions)
  {
    $this->encryptionOptions = $encryptionOptions;
  }
  /** @return ImportContextBakImportOptionsEncryptionOptions */
  public function getEncryptionOptions()
  {
    return $this->encryptionOptions;
  }
  /** @param bool */
  public function setStriped($striped)
  {
    $this->striped = $striped;
  }
  /** @return bool */
  public function getStriped()
  {
    return $this->striped;
  }
}

class ImportContextBakImportOptionsEncryptionOptions extends \Google\Model
{
  /** @var string */
  public $certPath;
  /** @var string */
  public $pvkPassword;
  /** @var string */
  public $pvkPath;

  /** @param string */
  public function setCertPath($certPath)
  {
    $this->certPath = $certPath;
  }
  /** @return string */
  public function getCertPath()
  {
    return $this->certPath;
  }
  /** @param string */
  public function setPvkPassword($pvkPassword)
  {
    $this->pvkPassword = $pvkPassword;
  }
  /** @return string */
  public function getPvkPassword()
  {
    return $this->pvkPassword;
  }
  /** @param string */
  public function setPvkPath($pvkPath)
  {
    $this->pvkPath = $pvkPath;
  }
  /** @return string */
  public function getPvkPath()
  {
    return $this->pvkPath;
  }
}

class ImportContextCsvImportOptions extends \Google\Collection
{
  /** @var string[] */
  public $columns;
  /** @var string */
  public $escapeCharacter;
  /** @var string */
  public $fieldsTerminatedBy;
  /** @var string */
  public $linesTerminatedBy;
  /** @var string */
  public $quoteCharacter;
  /** @var string */
  public $table;
  protected $collection_key = 'columns';
  /** @param string[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return string[] */
  public function getColumns()
  {
    return $this->columns;
  }
  /** @param string */
  public function setEscapeCharacter($escapeCharacter)
  {
    $this->escapeCharacter = $escapeCharacter;
  }
  /** @return string */
  public function getEscapeCharacter()
  {
    return $this->escapeCharacter;
  }
  /** @param string */
  public function setFieldsTerminatedBy($fieldsTerminatedBy)
  {
    $this->fieldsTerminatedBy = $fieldsTerminatedBy;
  }
  /** @return string */
  public function getFieldsTerminatedBy()
  {
    return $this->fieldsTerminatedBy;
  }
  /** @param string */
  public function setLinesTerminatedBy($linesTerminatedBy)
  {
    $this->linesTerminatedBy = $linesTerminatedBy;
  }
  /** @return string */
  public function getLinesTerminatedBy()
  {
    return $this->linesTerminatedBy;
  }
  /** @param string */
  public function setQuoteCharacter($quoteCharacter)
  {
    $this->quoteCharacter = $quoteCharacter;
  }
  /** @return string */
  public function getQuoteCharacter()
  {
    return $this->quoteCharacter;
  }
  /** @param string */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
}

class InsightsConfig extends \Google\Model
{
  /** @var bool */
  public $queryInsightsEnabled;
  /** @var int */
  public $queryPlansPerMinute;
  /** @var int */
  public $queryStringLength;
  /** @var bool */
  public $recordApplicationTags;
  /** @var bool */
  public $recordClientAddress;

  /** @param bool */
  public function setQueryInsightsEnabled($queryInsightsEnabled)
  {
    $this->queryInsightsEnabled = $queryInsightsEnabled;
  }
  /** @return bool */
  public function getQueryInsightsEnabled()
  {
    return $this->queryInsightsEnabled;
  }
  /** @param int */
  public function setQueryPlansPerMinute($queryPlansPerMinute)
  {
    $this->queryPlansPerMinute = $queryPlansPerMinute;
  }
  /** @return int */
  public function getQueryPlansPerMinute()
  {
    return $this->queryPlansPerMinute;
  }
  /** @param int */
  public function setQueryStringLength($queryStringLength)
  {
    $this->queryStringLength = $queryStringLength;
  }
  /** @return int */
  public function getQueryStringLength()
  {
    return $this->queryStringLength;
  }
  /** @param bool */
  public function setRecordApplicationTags($recordApplicationTags)
  {
    $this->recordApplicationTags = $recordApplicationTags;
  }
  /** @return bool */
  public function getRecordApplicationTags()
  {
    return $this->recordApplicationTags;
  }
  /** @param bool */
  public function setRecordClientAddress($recordClientAddress)
  {
    $this->recordClientAddress = $recordClientAddress;
  }
  /** @return bool */
  public function getRecordClientAddress()
  {
    return $this->recordClientAddress;
  }
}

class InstanceReference extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $project;
  /** @var string */
  public $region;

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
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
}

class InstancesCloneRequest extends \Google\Model
{
  /** @var CloneContext */
  public $cloneContext;
  protected $cloneContextType = CloneContext::class;
  protected $cloneContextDataType = '';
  /** @param CloneContext */
  public function setCloneContext(CloneContext $cloneContext)
  {
    $this->cloneContext = $cloneContext;
  }
  /** @return CloneContext */
  public function getCloneContext()
  {
    return $this->cloneContext;
  }
}

class InstancesDemoteMasterRequest extends \Google\Model
{
  /** @var DemoteMasterContext */
  public $demoteMasterContext;
  protected $demoteMasterContextType = DemoteMasterContext::class;
  protected $demoteMasterContextDataType = '';
  /** @param DemoteMasterContext */
  public function setDemoteMasterContext(DemoteMasterContext $demoteMasterContext)
  {
    $this->demoteMasterContext = $demoteMasterContext;
  }
  /** @return DemoteMasterContext */
  public function getDemoteMasterContext()
  {
    return $this->demoteMasterContext;
  }
}

class InstancesExportRequest extends \Google\Model
{
  /** @var ExportContext */
  public $exportContext;
  protected $exportContextType = ExportContext::class;
  protected $exportContextDataType = '';
  /** @param ExportContext */
  public function setExportContext(ExportContext $exportContext)
  {
    $this->exportContext = $exportContext;
  }
  /** @return ExportContext */
  public function getExportContext()
  {
    return $this->exportContext;
  }
}

class InstancesFailoverRequest extends \Google\Model
{
  /** @var FailoverContext */
  public $failoverContext;
  protected $failoverContextType = FailoverContext::class;
  protected $failoverContextDataType = '';
  /** @param FailoverContext */
  public function setFailoverContext(FailoverContext $failoverContext)
  {
    $this->failoverContext = $failoverContext;
  }
  /** @return FailoverContext */
  public function getFailoverContext()
  {
    return $this->failoverContext;
  }
}

class InstancesImportRequest extends \Google\Model
{
  /** @var ImportContext */
  public $importContext;
  protected $importContextType = ImportContext::class;
  protected $importContextDataType = '';
  /** @param ImportContext */
  public function setImportContext(ImportContext $importContext)
  {
    $this->importContext = $importContext;
  }
  /** @return ImportContext */
  public function getImportContext()
  {
    return $this->importContext;
  }
}

class InstancesListResponse extends \Google\Collection
{
  /** @var DatabaseInstance[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var ApiWarning[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $itemsType = DatabaseInstance::class;
  protected $itemsDataType = 'array';
  protected $warningsType = ApiWarning::class;
  protected $warningsDataType = 'array';
  /** @param DatabaseInstance[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return DatabaseInstance[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param ApiWarning[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return ApiWarning[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class InstancesListServerCasResponse extends \Google\Collection
{
  /** @var string */
  public $activeVersion;
  /** @var SslCert[] */
  public $certs;
  /** @var string */
  public $kind;
  protected $collection_key = 'certs';
  protected $certsType = SslCert::class;
  protected $certsDataType = 'array';
  /** @param string */
  public function setActiveVersion($activeVersion)
  {
    $this->activeVersion = $activeVersion;
  }
  /** @return string */
  public function getActiveVersion()
  {
    return $this->activeVersion;
  }
  /** @param SslCert[] */
  public function setCerts($certs)
  {
    $this->certs = $certs;
  }
  /** @return SslCert[] */
  public function getCerts()
  {
    return $this->certs;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class InstancesRestoreBackupRequest extends \Google\Model
{
  /** @var RestoreBackupContext */
  public $restoreBackupContext;
  protected $restoreBackupContextType = RestoreBackupContext::class;
  protected $restoreBackupContextDataType = '';
  /** @param RestoreBackupContext */
  public function setRestoreBackupContext(RestoreBackupContext $restoreBackupContext)
  {
    $this->restoreBackupContext = $restoreBackupContext;
  }
  /** @return RestoreBackupContext */
  public function getRestoreBackupContext()
  {
    return $this->restoreBackupContext;
  }
}

class InstancesRotateServerCaRequest extends \Google\Model
{
  /** @var RotateServerCaContext */
  public $rotateServerCaContext;
  protected $rotateServerCaContextType = RotateServerCaContext::class;
  protected $rotateServerCaContextDataType = '';
  /** @param RotateServerCaContext */
  public function setRotateServerCaContext(RotateServerCaContext $rotateServerCaContext)
  {
    $this->rotateServerCaContext = $rotateServerCaContext;
  }
  /** @return RotateServerCaContext */
  public function getRotateServerCaContext()
  {
    return $this->rotateServerCaContext;
  }
}

class InstancesTruncateLogRequest extends \Google\Model
{
  /** @var TruncateLogContext */
  public $truncateLogContext;
  protected $truncateLogContextType = TruncateLogContext::class;
  protected $truncateLogContextDataType = '';
  /** @param TruncateLogContext */
  public function setTruncateLogContext(TruncateLogContext $truncateLogContext)
  {
    $this->truncateLogContext = $truncateLogContext;
  }
  /** @return TruncateLogContext */
  public function getTruncateLogContext()
  {
    return $this->truncateLogContext;
  }
}

class IpConfiguration extends \Google\Collection
{
  /** @var string */
  public $allocatedIpRange;
  /** @var AclEntry[] */
  public $authorizedNetworks;
  /** @var bool */
  public $enablePrivatePathForGoogleCloudServices;
  /** @var bool */
  public $ipv4Enabled;
  /** @var string */
  public $privateNetwork;
  /** @var bool */
  public $requireSsl;
  protected $collection_key = 'authorizedNetworks';
  protected $authorizedNetworksType = AclEntry::class;
  protected $authorizedNetworksDataType = 'array';
  /** @param string */
  public function setAllocatedIpRange($allocatedIpRange)
  {
    $this->allocatedIpRange = $allocatedIpRange;
  }
  /** @return string */
  public function getAllocatedIpRange()
  {
    return $this->allocatedIpRange;
  }
  /** @param AclEntry[] */
  public function setAuthorizedNetworks($authorizedNetworks)
  {
    $this->authorizedNetworks = $authorizedNetworks;
  }
  /** @return AclEntry[] */
  public function getAuthorizedNetworks()
  {
    return $this->authorizedNetworks;
  }
  /** @param bool */
  public function setEnablePrivatePathForGoogleCloudServices($enablePrivatePathForGoogleCloudServices)
  {
    $this->enablePrivatePathForGoogleCloudServices = $enablePrivatePathForGoogleCloudServices;
  }
  /** @return bool */
  public function getEnablePrivatePathForGoogleCloudServices()
  {
    return $this->enablePrivatePathForGoogleCloudServices;
  }
  /** @param bool */
  public function setIpv4Enabled($ipv4Enabled)
  {
    $this->ipv4Enabled = $ipv4Enabled;
  }
  /** @return bool */
  public function getIpv4Enabled()
  {
    return $this->ipv4Enabled;
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

class IpMapping extends \Google\Model
{
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $timeToRetire;
  /** @var string */
  public $type;

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
  public function setTimeToRetire($timeToRetire)
  {
    $this->timeToRetire = $timeToRetire;
  }
  /** @return string */
  public function getTimeToRetire()
  {
    return $this->timeToRetire;
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

class LocationPreference extends \Google\Model
{
  /** @var string */
  public $followGaeApplication;
  /** @var string */
  public $kind;
  /** @var string */
  public $secondaryZone;
  /** @var string */
  public $zone;

  /** @param string */
  public function setFollowGaeApplication($followGaeApplication)
  {
    $this->followGaeApplication = $followGaeApplication;
  }
  /** @return string */
  public function getFollowGaeApplication()
  {
    return $this->followGaeApplication;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class MaintenanceWindow extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $hour;
  /** @var string */
  public $kind;
  /** @var string */
  public $updateTrack;

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
  public function setHour($hour)
  {
    $this->hour = $hour;
  }
  /** @return int */
  public function getHour()
  {
    return $this->hour;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setUpdateTrack($updateTrack)
  {
    $this->updateTrack = $updateTrack;
  }
  /** @return string */
  public function getUpdateTrack()
  {
    return $this->updateTrack;
  }
}

class MySqlReplicaConfiguration extends \Google\Model
{
  /** @var string */
  public $caCertificate;
  /** @var string */
  public $clientCertificate;
  /** @var string */
  public $clientKey;
  /** @var int */
  public $connectRetryInterval;
  /** @var string */
  public $dumpFilePath;
  /** @var string */
  public $kind;
  /** @var string */
  public $masterHeartbeatPeriod;
  /** @var string */
  public $password;
  /** @var string */
  public $sslCipher;
  /** @var string */
  public $username;
  /** @var bool */
  public $verifyServerCertificate;

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
  /** @param int */
  public function setConnectRetryInterval($connectRetryInterval)
  {
    $this->connectRetryInterval = $connectRetryInterval;
  }
  /** @return int */
  public function getConnectRetryInterval()
  {
    return $this->connectRetryInterval;
  }
  /** @param string */
  public function setDumpFilePath($dumpFilePath)
  {
    $this->dumpFilePath = $dumpFilePath;
  }
  /** @return string */
  public function getDumpFilePath()
  {
    return $this->dumpFilePath;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setMasterHeartbeatPeriod($masterHeartbeatPeriod)
  {
    $this->masterHeartbeatPeriod = $masterHeartbeatPeriod;
  }
  /** @return string */
  public function getMasterHeartbeatPeriod()
  {
    return $this->masterHeartbeatPeriod;
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
  /** @param string */
  public function setSslCipher($sslCipher)
  {
    $this->sslCipher = $sslCipher;
  }
  /** @return string */
  public function getSslCipher()
  {
    return $this->sslCipher;
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
  /** @param bool */
  public function setVerifyServerCertificate($verifyServerCertificate)
  {
    $this->verifyServerCertificate = $verifyServerCertificate;
  }
  /** @return bool */
  public function getVerifyServerCertificate()
  {
    return $this->verifyServerCertificate;
  }
}

class MySqlSyncConfig extends \Google\Collection
{
  /** @var SyncFlags[] */
  public $initialSyncFlags;
  protected $collection_key = 'initialSyncFlags';
  protected $initialSyncFlagsType = SyncFlags::class;
  protected $initialSyncFlagsDataType = 'array';
  /** @param SyncFlags[] */
  public function setInitialSyncFlags($initialSyncFlags)
  {
    $this->initialSyncFlags = $initialSyncFlags;
  }
  /** @return SyncFlags[] */
  public function getInitialSyncFlags()
  {
    return $this->initialSyncFlags;
  }
}

class OnPremisesConfiguration extends \Google\Model
{
  /** @var string */
  public $caCertificate;
  /** @var string */
  public $clientCertificate;
  /** @var string */
  public $clientKey;
  /** @var string */
  public $dumpFilePath;
  /** @var string */
  public $hostPort;
  /** @var string */
  public $kind;
  /** @var string */
  public $password;
  /** @var InstanceReference */
  public $sourceInstance;
  /** @var string */
  public $username;
  protected $sourceInstanceType = InstanceReference::class;
  protected $sourceInstanceDataType = '';
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
  public function setDumpFilePath($dumpFilePath)
  {
    $this->dumpFilePath = $dumpFilePath;
  }
  /** @return string */
  public function getDumpFilePath()
  {
    return $this->dumpFilePath;
  }
  /** @param string */
  public function setHostPort($hostPort)
  {
    $this->hostPort = $hostPort;
  }
  /** @return string */
  public function getHostPort()
  {
    return $this->hostPort;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param InstanceReference */
  public function setSourceInstance(InstanceReference $sourceInstance)
  {
    $this->sourceInstance = $sourceInstance;
  }
  /** @return InstanceReference */
  public function getSourceInstance()
  {
    return $this->sourceInstance;
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
  /** @var BackupContext */
  public $backupContext;
  /** @var string */
  public $endTime;
  /** @var OperationErrors */
  public $error;
  /** @var ExportContext */
  public $exportContext;
  /** @var ImportContext */
  public $importContext;
  /** @var string */
  public $insertTime;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $operationType;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $startTime;
  /** @var string */
  public $status;
  /** @var string */
  public $targetId;
  /** @var string */
  public $targetLink;
  /** @var string */
  public $targetProject;
  /** @var string */
  public $user;
  protected $backupContextType = BackupContext::class;
  protected $backupContextDataType = '';
  protected $errorType = OperationErrors::class;
  protected $errorDataType = '';
  protected $exportContextType = ExportContext::class;
  protected $exportContextDataType = '';
  protected $importContextType = ImportContext::class;
  protected $importContextDataType = '';
  /** @param BackupContext */
  public function setBackupContext(BackupContext $backupContext)
  {
    $this->backupContext = $backupContext;
  }
  /** @return BackupContext */
  public function getBackupContext()
  {
    return $this->backupContext;
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
  /** @param OperationErrors */
  public function setError(OperationErrors $error)
  {
    $this->error = $error;
  }
  /** @return OperationErrors */
  public function getError()
  {
    return $this->error;
  }
  /** @param ExportContext */
  public function setExportContext(ExportContext $exportContext)
  {
    $this->exportContext = $exportContext;
  }
  /** @return ExportContext */
  public function getExportContext()
  {
    return $this->exportContext;
  }
  /** @param ImportContext */
  public function setImportContext(ImportContext $importContext)
  {
    $this->importContext = $importContext;
  }
  /** @return ImportContext */
  public function getImportContext()
  {
    return $this->importContext;
  }
  /** @param string */
  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
  }
  /** @return string */
  public function getInsertTime()
  {
    return $this->insertTime;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
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
  public function setTargetId($targetId)
  {
    $this->targetId = $targetId;
  }
  /** @return string */
  public function getTargetId()
  {
    return $this->targetId;
  }
  /** @param string */
  public function setTargetLink($targetLink)
  {
    $this->targetLink = $targetLink;
  }
  /** @return string */
  public function getTargetLink()
  {
    return $this->targetLink;
  }
  /** @param string */
  public function setTargetProject($targetProject)
  {
    $this->targetProject = $targetProject;
  }
  /** @return string */
  public function getTargetProject()
  {
    return $this->targetProject;
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

class OperationError extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $kind;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class OperationErrors extends \Google\Collection
{
  /** @var OperationError[] */
  public $errors;
  /** @var string */
  public $kind;
  protected $collection_key = 'errors';
  protected $errorsType = OperationError::class;
  protected $errorsDataType = 'array';
  /** @param OperationError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return OperationError[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class OperationsListResponse extends \Google\Collection
{
  /** @var Operation[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Operation::class;
  protected $itemsDataType = 'array';
  /** @param Operation[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Operation[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class PasswordStatus extends \Google\Model
{
  /** @var bool */
  public $locked;
  /** @var string */
  public $passwordExpirationTime;

  /** @param bool */
  public function setLocked($locked)
  {
    $this->locked = $locked;
  }
  /** @return bool */
  public function getLocked()
  {
    return $this->locked;
  }
  /** @param string */
  public function setPasswordExpirationTime($passwordExpirationTime)
  {
    $this->passwordExpirationTime = $passwordExpirationTime;
  }
  /** @return string */
  public function getPasswordExpirationTime()
  {
    return $this->passwordExpirationTime;
  }
}

class PasswordValidationPolicy extends \Google\Model
{
  /** @var string */
  public $complexity;
  /** @var bool */
  public $disallowUsernameSubstring;
  /** @var bool */
  public $enablePasswordPolicy;
  /** @var int */
  public $minLength;
  /** @var string */
  public $passwordChangeInterval;
  /** @var int */
  public $reuseInterval;

  /** @param string */
  public function setComplexity($complexity)
  {
    $this->complexity = $complexity;
  }
  /** @return string */
  public function getComplexity()
  {
    return $this->complexity;
  }
  /** @param bool */
  public function setDisallowUsernameSubstring($disallowUsernameSubstring)
  {
    $this->disallowUsernameSubstring = $disallowUsernameSubstring;
  }
  /** @return bool */
  public function getDisallowUsernameSubstring()
  {
    return $this->disallowUsernameSubstring;
  }
  /** @param bool */
  public function setEnablePasswordPolicy($enablePasswordPolicy)
  {
    $this->enablePasswordPolicy = $enablePasswordPolicy;
  }
  /** @return bool */
  public function getEnablePasswordPolicy()
  {
    return $this->enablePasswordPolicy;
  }
  /** @param int */
  public function setMinLength($minLength)
  {
    $this->minLength = $minLength;
  }
  /** @return int */
  public function getMinLength()
  {
    return $this->minLength;
  }
  /** @param string */
  public function setPasswordChangeInterval($passwordChangeInterval)
  {
    $this->passwordChangeInterval = $passwordChangeInterval;
  }
  /** @return string */
  public function getPasswordChangeInterval()
  {
    return $this->passwordChangeInterval;
  }
  /** @param int */
  public function setReuseInterval($reuseInterval)
  {
    $this->reuseInterval = $reuseInterval;
  }
  /** @return int */
  public function getReuseInterval()
  {
    return $this->reuseInterval;
  }
}

class ReplicaConfiguration extends \Google\Model
{
  /** @var bool */
  public $failoverTarget;
  /** @var string */
  public $kind;
  /** @var MySqlReplicaConfiguration */
  public $mysqlReplicaConfiguration;
  protected $mysqlReplicaConfigurationType = MySqlReplicaConfiguration::class;
  protected $mysqlReplicaConfigurationDataType = '';
  /** @param bool */
  public function setFailoverTarget($failoverTarget)
  {
    $this->failoverTarget = $failoverTarget;
  }
  /** @return bool */
  public function getFailoverTarget()
  {
    return $this->failoverTarget;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param MySqlReplicaConfiguration */
  public function setMysqlReplicaConfiguration(MySqlReplicaConfiguration $mysqlReplicaConfiguration)
  {
    $this->mysqlReplicaConfiguration = $mysqlReplicaConfiguration;
  }
  /** @return MySqlReplicaConfiguration */
  public function getMysqlReplicaConfiguration()
  {
    return $this->mysqlReplicaConfiguration;
  }
}

class Reschedule extends \Google\Model
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

class RestoreBackupContext extends \Google\Model
{
  /** @var string */
  public $backupRunId;
  /** @var string */
  public $instanceId;
  /** @var string */
  public $kind;
  /** @var string */
  public $project;

  /** @param string */
  public function setBackupRunId($backupRunId)
  {
    $this->backupRunId = $backupRunId;
  }
  /** @return string */
  public function getBackupRunId()
  {
    return $this->backupRunId;
  }
  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
}

class RotateServerCaContext extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextVersion;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setNextVersion($nextVersion)
  {
    $this->nextVersion = $nextVersion;
  }
  /** @return string */
  public function getNextVersion()
  {
    return $this->nextVersion;
  }
}

class Settings extends \Google\Collection
{
  /** @var string */
  public $activationPolicy;
  /** @var SqlActiveDirectoryConfig */
  public $activeDirectoryConfig;
  /** @var string[] */
  public $authorizedGaeApplications;
  /** @var string */
  public $availabilityType;
  /** @var BackupConfiguration */
  public $backupConfiguration;
  /** @var string */
  public $collation;
  /** @var string */
  public $connectorEnforcement;
  /** @var bool */
  public $crashSafeReplicationEnabled;
  /** @var string */
  public $dataDiskSizeGb;
  /** @var string */
  public $dataDiskType;
  /** @var DatabaseFlags[] */
  public $databaseFlags;
  /** @var bool */
  public $databaseReplicationEnabled;
  /** @var bool */
  public $deletionProtectionEnabled;
  /** @var DenyMaintenancePeriod[] */
  public $denyMaintenancePeriods;
  /** @var InsightsConfig */
  public $insightsConfig;
  /** @var IpConfiguration */
  public $ipConfiguration;
  /** @var string */
  public $kind;
  /** @var LocationPreference */
  public $locationPreference;
  /** @var MaintenanceWindow */
  public $maintenanceWindow;
  /** @var PasswordValidationPolicy */
  public $passwordValidationPolicy;
  /** @var string */
  public $pricingPlan;
  /** @var string */
  public $replicationType;
  /** @var string */
  public $settingsVersion;
  /** @var SqlServerAuditConfig */
  public $sqlServerAuditConfig;
  /** @var bool */
  public $storageAutoResize;
  /** @var string */
  public $storageAutoResizeLimit;
  /** @var string */
  public $tier;
  /** @var string */
  public $timeZone;
  /** @var string[] */
  public $userLabels;
  protected $collection_key = 'denyMaintenancePeriods';
  protected $activeDirectoryConfigType = SqlActiveDirectoryConfig::class;
  protected $activeDirectoryConfigDataType = '';
  protected $backupConfigurationType = BackupConfiguration::class;
  protected $backupConfigurationDataType = '';
  protected $databaseFlagsType = DatabaseFlags::class;
  protected $databaseFlagsDataType = 'array';
  protected $denyMaintenancePeriodsType = DenyMaintenancePeriod::class;
  protected $denyMaintenancePeriodsDataType = 'array';
  protected $insightsConfigType = InsightsConfig::class;
  protected $insightsConfigDataType = '';
  protected $ipConfigurationType = IpConfiguration::class;
  protected $ipConfigurationDataType = '';
  protected $locationPreferenceType = LocationPreference::class;
  protected $locationPreferenceDataType = '';
  protected $maintenanceWindowType = MaintenanceWindow::class;
  protected $maintenanceWindowDataType = '';
  protected $passwordValidationPolicyType = PasswordValidationPolicy::class;
  protected $passwordValidationPolicyDataType = '';
  protected $sqlServerAuditConfigType = SqlServerAuditConfig::class;
  protected $sqlServerAuditConfigDataType = '';
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
  /** @param SqlActiveDirectoryConfig */
  public function setActiveDirectoryConfig(SqlActiveDirectoryConfig $activeDirectoryConfig)
  {
    $this->activeDirectoryConfig = $activeDirectoryConfig;
  }
  /** @return SqlActiveDirectoryConfig */
  public function getActiveDirectoryConfig()
  {
    return $this->activeDirectoryConfig;
  }
  /** @param string[] */
  public function setAuthorizedGaeApplications($authorizedGaeApplications)
  {
    $this->authorizedGaeApplications = $authorizedGaeApplications;
  }
  /** @return string[] */
  public function getAuthorizedGaeApplications()
  {
    return $this->authorizedGaeApplications;
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
  /** @param BackupConfiguration */
  public function setBackupConfiguration(BackupConfiguration $backupConfiguration)
  {
    $this->backupConfiguration = $backupConfiguration;
  }
  /** @return BackupConfiguration */
  public function getBackupConfiguration()
  {
    return $this->backupConfiguration;
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
  public function setConnectorEnforcement($connectorEnforcement)
  {
    $this->connectorEnforcement = $connectorEnforcement;
  }
  /** @return string */
  public function getConnectorEnforcement()
  {
    return $this->connectorEnforcement;
  }
  /** @param bool */
  public function setCrashSafeReplicationEnabled($crashSafeReplicationEnabled)
  {
    $this->crashSafeReplicationEnabled = $crashSafeReplicationEnabled;
  }
  /** @return bool */
  public function getCrashSafeReplicationEnabled()
  {
    return $this->crashSafeReplicationEnabled;
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
  /** @param DatabaseFlags[] */
  public function setDatabaseFlags($databaseFlags)
  {
    $this->databaseFlags = $databaseFlags;
  }
  /** @return DatabaseFlags[] */
  public function getDatabaseFlags()
  {
    return $this->databaseFlags;
  }
  /** @param bool */
  public function setDatabaseReplicationEnabled($databaseReplicationEnabled)
  {
    $this->databaseReplicationEnabled = $databaseReplicationEnabled;
  }
  /** @return bool */
  public function getDatabaseReplicationEnabled()
  {
    return $this->databaseReplicationEnabled;
  }
  /** @param bool */
  public function setDeletionProtectionEnabled($deletionProtectionEnabled)
  {
    $this->deletionProtectionEnabled = $deletionProtectionEnabled;
  }
  /** @return bool */
  public function getDeletionProtectionEnabled()
  {
    return $this->deletionProtectionEnabled;
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
  /** @param InsightsConfig */
  public function setInsightsConfig(InsightsConfig $insightsConfig)
  {
    $this->insightsConfig = $insightsConfig;
  }
  /** @return InsightsConfig */
  public function getInsightsConfig()
  {
    return $this->insightsConfig;
  }
  /** @param IpConfiguration */
  public function setIpConfiguration(IpConfiguration $ipConfiguration)
  {
    $this->ipConfiguration = $ipConfiguration;
  }
  /** @return IpConfiguration */
  public function getIpConfiguration()
  {
    return $this->ipConfiguration;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param LocationPreference */
  public function setLocationPreference(LocationPreference $locationPreference)
  {
    $this->locationPreference = $locationPreference;
  }
  /** @return LocationPreference */
  public function getLocationPreference()
  {
    return $this->locationPreference;
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
  /** @param PasswordValidationPolicy */
  public function setPasswordValidationPolicy(PasswordValidationPolicy $passwordValidationPolicy)
  {
    $this->passwordValidationPolicy = $passwordValidationPolicy;
  }
  /** @return PasswordValidationPolicy */
  public function getPasswordValidationPolicy()
  {
    return $this->passwordValidationPolicy;
  }
  /** @param string */
  public function setPricingPlan($pricingPlan)
  {
    $this->pricingPlan = $pricingPlan;
  }
  /** @return string */
  public function getPricingPlan()
  {
    return $this->pricingPlan;
  }
  /** @param string */
  public function setReplicationType($replicationType)
  {
    $this->replicationType = $replicationType;
  }
  /** @return string */
  public function getReplicationType()
  {
    return $this->replicationType;
  }
  /** @param string */
  public function setSettingsVersion($settingsVersion)
  {
    $this->settingsVersion = $settingsVersion;
  }
  /** @return string */
  public function getSettingsVersion()
  {
    return $this->settingsVersion;
  }
  /** @param SqlServerAuditConfig */
  public function setSqlServerAuditConfig(SqlServerAuditConfig $sqlServerAuditConfig)
  {
    $this->sqlServerAuditConfig = $sqlServerAuditConfig;
  }
  /** @return SqlServerAuditConfig */
  public function getSqlServerAuditConfig()
  {
    return $this->sqlServerAuditConfig;
  }
  /** @param bool */
  public function setStorageAutoResize($storageAutoResize)
  {
    $this->storageAutoResize = $storageAutoResize;
  }
  /** @return bool */
  public function getStorageAutoResize()
  {
    return $this->storageAutoResize;
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
  /** @param string */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return string */
  public function getTimeZone()
  {
    return $this->timeZone;
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
}

class SqlActiveDirectoryConfig extends \Google\Model
{
  /** @var string */
  public $domain;
  /** @var string */
  public $kind;

  /** @param string */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /** @return string */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class SqlExternalSyncSettingError extends \Google\Model
{
  /** @var string */
  public $detail;
  /** @var string */
  public $kind;
  /** @var string */
  public $type;

  /** @param string */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /** @return string */
  public function getDetail()
  {
    return $this->detail;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class SqlInstancesRescheduleMaintenanceRequestBody extends \Google\Model
{
  /** @var Reschedule */
  public $reschedule;
  protected $rescheduleType = Reschedule::class;
  protected $rescheduleDataType = '';
  /** @param Reschedule */
  public function setReschedule(Reschedule $reschedule)
  {
    $this->reschedule = $reschedule;
  }
  /** @return Reschedule */
  public function getReschedule()
  {
    return $this->reschedule;
  }
}

class SqlInstancesStartExternalSyncRequest extends \Google\Model
{
  /** @var MySqlSyncConfig */
  public $mysqlSyncConfig;
  /** @var bool */
  public $skipVerification;
  /** @var string */
  public $syncMode;
  protected $mysqlSyncConfigType = MySqlSyncConfig::class;
  protected $mysqlSyncConfigDataType = '';
  /** @param MySqlSyncConfig */
  public function setMysqlSyncConfig(MySqlSyncConfig $mysqlSyncConfig)
  {
    $this->mysqlSyncConfig = $mysqlSyncConfig;
  }
  /** @return MySqlSyncConfig */
  public function getMysqlSyncConfig()
  {
    return $this->mysqlSyncConfig;
  }
  /** @param bool */
  public function setSkipVerification($skipVerification)
  {
    $this->skipVerification = $skipVerification;
  }
  /** @return bool */
  public function getSkipVerification()
  {
    return $this->skipVerification;
  }
  /** @param string */
  public function setSyncMode($syncMode)
  {
    $this->syncMode = $syncMode;
  }
  /** @return string */
  public function getSyncMode()
  {
    return $this->syncMode;
  }
}

class SqlInstancesVerifyExternalSyncSettingsRequest extends \Google\Model
{
  /** @var MySqlSyncConfig */
  public $mysqlSyncConfig;
  /** @var string */
  public $syncMode;
  /** @var bool */
  public $verifyConnectionOnly;
  /** @var bool */
  public $verifyReplicationOnly;
  protected $mysqlSyncConfigType = MySqlSyncConfig::class;
  protected $mysqlSyncConfigDataType = '';
  /** @param MySqlSyncConfig */
  public function setMysqlSyncConfig(MySqlSyncConfig $mysqlSyncConfig)
  {
    $this->mysqlSyncConfig = $mysqlSyncConfig;
  }
  /** @return MySqlSyncConfig */
  public function getMysqlSyncConfig()
  {
    return $this->mysqlSyncConfig;
  }
  /** @param string */
  public function setSyncMode($syncMode)
  {
    $this->syncMode = $syncMode;
  }
  /** @return string */
  public function getSyncMode()
  {
    return $this->syncMode;
  }
  /** @param bool */
  public function setVerifyConnectionOnly($verifyConnectionOnly)
  {
    $this->verifyConnectionOnly = $verifyConnectionOnly;
  }
  /** @return bool */
  public function getVerifyConnectionOnly()
  {
    return $this->verifyConnectionOnly;
  }
  /** @param bool */
  public function setVerifyReplicationOnly($verifyReplicationOnly)
  {
    $this->verifyReplicationOnly = $verifyReplicationOnly;
  }
  /** @return bool */
  public function getVerifyReplicationOnly()
  {
    return $this->verifyReplicationOnly;
  }
}

class SqlInstancesVerifyExternalSyncSettingsResponse extends \Google\Collection
{
  /** @var SqlExternalSyncSettingError[] */
  public $errors;
  /** @var string */
  public $kind;
  /** @var SqlExternalSyncSettingError[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $errorsType = SqlExternalSyncSettingError::class;
  protected $errorsDataType = 'array';
  protected $warningsType = SqlExternalSyncSettingError::class;
  protected $warningsDataType = 'array';
  /** @param SqlExternalSyncSettingError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return SqlExternalSyncSettingError[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param SqlExternalSyncSettingError[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return SqlExternalSyncSettingError[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class SqlOutOfDiskReport extends \Google\Model
{
  /** @var int */
  public $sqlMinRecommendedIncreaseSizeGb;
  /** @var string */
  public $sqlOutOfDiskState;

  /** @param int */
  public function setSqlMinRecommendedIncreaseSizeGb($sqlMinRecommendedIncreaseSizeGb)
  {
    $this->sqlMinRecommendedIncreaseSizeGb = $sqlMinRecommendedIncreaseSizeGb;
  }
  /** @return int */
  public function getSqlMinRecommendedIncreaseSizeGb()
  {
    return $this->sqlMinRecommendedIncreaseSizeGb;
  }
  /** @param string */
  public function setSqlOutOfDiskState($sqlOutOfDiskState)
  {
    $this->sqlOutOfDiskState = $sqlOutOfDiskState;
  }
  /** @return string */
  public function getSqlOutOfDiskState()
  {
    return $this->sqlOutOfDiskState;
  }
}

class SqlScheduledMaintenance extends \Google\Model
{
  /** @var bool */
  public $canDefer;
  /** @var bool */
  public $canReschedule;
  /** @var string */
  public $scheduleDeadlineTime;
  /** @var string */
  public $startTime;

  /** @param bool */
  public function setCanDefer($canDefer)
  {
    $this->canDefer = $canDefer;
  }
  /** @return bool */
  public function getCanDefer()
  {
    return $this->canDefer;
  }
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

class SqlServerAuditConfig extends \Google\Model
{
  /** @var string */
  public $bucket;
  /** @var string */
  public $kind;
  /** @var string */
  public $retentionInterval;
  /** @var string */
  public $uploadInterval;

  /** @param string */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /** @return string */
  public function getBucket()
  {
    return $this->bucket;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setRetentionInterval($retentionInterval)
  {
    $this->retentionInterval = $retentionInterval;
  }
  /** @return string */
  public function getRetentionInterval()
  {
    return $this->retentionInterval;
  }
  /** @param string */
  public function setUploadInterval($uploadInterval)
  {
    $this->uploadInterval = $uploadInterval;
  }
  /** @return string */
  public function getUploadInterval()
  {
    return $this->uploadInterval;
  }
}

class SqlServerDatabaseDetails extends \Google\Model
{
  /** @var int */
  public $compatibilityLevel;
  /** @var string */
  public $recoveryModel;

  /** @param int */
  public function setCompatibilityLevel($compatibilityLevel)
  {
    $this->compatibilityLevel = $compatibilityLevel;
  }
  /** @return int */
  public function getCompatibilityLevel()
  {
    return $this->compatibilityLevel;
  }
  /** @param string */
  public function setRecoveryModel($recoveryModel)
  {
    $this->recoveryModel = $recoveryModel;
  }
  /** @return string */
  public function getRecoveryModel()
  {
    return $this->recoveryModel;
  }
}

class SqlServerUserDetails extends \Google\Collection
{
  /** @var bool */
  public $disabled;
  /** @var string[] */
  public $serverRoles;
  protected $collection_key = 'serverRoles';
  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /** @param string[] */
  public function setServerRoles($serverRoles)
  {
    $this->serverRoles = $serverRoles;
  }
  /** @return string[] */
  public function getServerRoles()
  {
    return $this->serverRoles;
  }
}

class SslCert extends \Google\Model
{
  /** @var string */
  public $cert;
  /** @var string */
  public $certSerialNumber;
  /** @var string */
  public $commonName;
  /** @var string */
  public $createTime;
  /** @var string */
  public $expirationTime;
  /** @var string */
  public $instance;
  /** @var string */
  public $kind;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $sha1Fingerprint;

  /** @param string */
  public function setCert($cert)
  {
    $this->cert = $cert;
  }
  /** @return string */
  public function getCert()
  {
    return $this->cert;
  }
  /** @param string */
  public function setCertSerialNumber($certSerialNumber)
  {
    $this->certSerialNumber = $certSerialNumber;
  }
  /** @return string */
  public function getCertSerialNumber()
  {
    return $this->certSerialNumber;
  }
  /** @param string */
  public function setCommonName($commonName)
  {
    $this->commonName = $commonName;
  }
  /** @return string */
  public function getCommonName()
  {
    return $this->commonName;
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
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param string */
  public function setSha1Fingerprint($sha1Fingerprint)
  {
    $this->sha1Fingerprint = $sha1Fingerprint;
  }
  /** @return string */
  public function getSha1Fingerprint()
  {
    return $this->sha1Fingerprint;
  }
}

class SslCertDetail extends \Google\Model
{
  /** @var SslCert */
  public $certInfo;
  /** @var string */
  public $certPrivateKey;
  protected $certInfoType = SslCert::class;
  protected $certInfoDataType = '';
  /** @param SslCert */
  public function setCertInfo(SslCert $certInfo)
  {
    $this->certInfo = $certInfo;
  }
  /** @return SslCert */
  public function getCertInfo()
  {
    return $this->certInfo;
  }
  /** @param string */
  public function setCertPrivateKey($certPrivateKey)
  {
    $this->certPrivateKey = $certPrivateKey;
  }
  /** @return string */
  public function getCertPrivateKey()
  {
    return $this->certPrivateKey;
  }
}

class SslCertsCreateEphemeralRequest extends \Google\Model
{
  /** @var string */
  public $accessToken;
  /** @var string */
  public $publicKey;
  protected $internal_gapi_mappings = [
        "accessToken" => "access_token",
        "publicKey" => "public_key",
  ];
  /** @param string */
  public function setAccessToken($accessToken)
  {
    $this->accessToken = $accessToken;
  }
  /** @return string */
  public function getAccessToken()
  {
    return $this->accessToken;
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

class SslCertsInsertRequest extends \Google\Model
{
  /** @var string */
  public $commonName;

  /** @param string */
  public function setCommonName($commonName)
  {
    $this->commonName = $commonName;
  }
  /** @return string */
  public function getCommonName()
  {
    return $this->commonName;
  }
}

class SslCertsInsertResponse extends \Google\Model
{
  /** @var SslCertDetail */
  public $clientCert;
  /** @var string */
  public $kind;
  /** @var Operation */
  public $operation;
  /** @var SslCert */
  public $serverCaCert;
  protected $clientCertType = SslCertDetail::class;
  protected $clientCertDataType = '';
  protected $operationType = Operation::class;
  protected $operationDataType = '';
  protected $serverCaCertType = SslCert::class;
  protected $serverCaCertDataType = '';
  /** @param SslCertDetail */
  public function setClientCert(SslCertDetail $clientCert)
  {
    $this->clientCert = $clientCert;
  }
  /** @return SslCertDetail */
  public function getClientCert()
  {
    return $this->clientCert;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param Operation */
  public function setOperation(Operation $operation)
  {
    $this->operation = $operation;
  }
  /** @return Operation */
  public function getOperation()
  {
    return $this->operation;
  }
  /** @param SslCert */
  public function setServerCaCert(SslCert $serverCaCert)
  {
    $this->serverCaCert = $serverCaCert;
  }
  /** @return SslCert */
  public function getServerCaCert()
  {
    return $this->serverCaCert;
  }
}

class SslCertsListResponse extends \Google\Collection
{
  /** @var SslCert[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = SslCert::class;
  protected $itemsDataType = 'array';
  /** @param SslCert[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return SslCert[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class SyncFlags extends \Google\Model
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

class Tier extends \Google\Collection
{
  /** @var string */
  public $diskQuota;
  /** @var string */
  public $rAM;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $region;
  /** @var string */
  public $tier;
  protected $collection_key = 'region';
  protected $internal_gapi_mappings = [
        "diskQuota" => "DiskQuota",
        "rAM" => "RAM",
  ];
  /** @param string */
  public function setDiskQuota($diskQuota)
  {
    $this->diskQuota = $diskQuota;
  }
  /** @return string */
  public function getDiskQuota()
  {
    return $this->diskQuota;
  }
  /** @param string */
  public function setRAM($rAM)
  {
    $this->rAM = $rAM;
  }
  /** @return string */
  public function getRAM()
  {
    return $this->rAM;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string[] */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string[] */
  public function getRegion()
  {
    return $this->region;
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

class TiersListResponse extends \Google\Collection
{
  /** @var Tier[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = Tier::class;
  protected $itemsDataType = 'array';
  /** @param Tier[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Tier[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class TruncateLogContext extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $logType;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class User extends \Google\Model
{
  /** @var string */
  public $dualPasswordType;
  /** @var string */
  public $etag;
  /** @var string */
  public $host;
  /** @var string */
  public $instance;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $password;
  /** @var UserPasswordValidationPolicy */
  public $passwordPolicy;
  /** @var string */
  public $project;
  /** @var SqlServerUserDetails */
  public $sqlserverUserDetails;
  /** @var string */
  public $type;
  protected $passwordPolicyType = UserPasswordValidationPolicy::class;
  protected $passwordPolicyDataType = '';
  protected $sqlserverUserDetailsType = SqlServerUserDetails::class;
  protected $sqlserverUserDetailsDataType = '';
  /** @param string */
  public function setDualPasswordType($dualPasswordType)
  {
    $this->dualPasswordType = $dualPasswordType;
  }
  /** @return string */
  public function getDualPasswordType()
  {
    return $this->dualPasswordType;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /** @return string */
  public function getPassword()
  {
    return $this->password;
  }
  /** @param UserPasswordValidationPolicy */
  public function setPasswordPolicy(UserPasswordValidationPolicy $passwordPolicy)
  {
    $this->passwordPolicy = $passwordPolicy;
  }
  /** @return UserPasswordValidationPolicy */
  public function getPasswordPolicy()
  {
    return $this->passwordPolicy;
  }
  /** @param string */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
  /** @param SqlServerUserDetails */
  public function setSqlserverUserDetails(SqlServerUserDetails $sqlserverUserDetails)
  {
    $this->sqlserverUserDetails = $sqlserverUserDetails;
  }
  /** @return SqlServerUserDetails */
  public function getSqlserverUserDetails()
  {
    return $this->sqlserverUserDetails;
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

class UserPasswordValidationPolicy extends \Google\Model
{
  /** @var int */
  public $allowedFailedAttempts;
  /** @var bool */
  public $enableFailedAttemptsCheck;
  /** @var bool */
  public $enablePasswordVerification;
  /** @var string */
  public $passwordExpirationDuration;
  /** @var PasswordStatus */
  public $status;
  protected $statusType = PasswordStatus::class;
  protected $statusDataType = '';
  /** @param int */
  public function setAllowedFailedAttempts($allowedFailedAttempts)
  {
    $this->allowedFailedAttempts = $allowedFailedAttempts;
  }
  /** @return int */
  public function getAllowedFailedAttempts()
  {
    return $this->allowedFailedAttempts;
  }
  /** @param bool */
  public function setEnableFailedAttemptsCheck($enableFailedAttemptsCheck)
  {
    $this->enableFailedAttemptsCheck = $enableFailedAttemptsCheck;
  }
  /** @return bool */
  public function getEnableFailedAttemptsCheck()
  {
    return $this->enableFailedAttemptsCheck;
  }
  /** @param bool */
  public function setEnablePasswordVerification($enablePasswordVerification)
  {
    $this->enablePasswordVerification = $enablePasswordVerification;
  }
  /** @return bool */
  public function getEnablePasswordVerification()
  {
    return $this->enablePasswordVerification;
  }
  /** @param string */
  public function setPasswordExpirationDuration($passwordExpirationDuration)
  {
    $this->passwordExpirationDuration = $passwordExpirationDuration;
  }
  /** @return string */
  public function getPasswordExpirationDuration()
  {
    return $this->passwordExpirationDuration;
  }
  /** @param PasswordStatus */
  public function setStatus(PasswordStatus $status)
  {
    $this->status = $status;
  }
  /** @return PasswordStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class UsersListResponse extends \Google\Collection
{
  /** @var User[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = User::class;
  protected $itemsDataType = 'array';
  /** @param User[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return User[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AclEntry::class, 'Google_Service_SQLAdmin_AclEntry');
class_alias(ApiWarning::class, 'Google_Service_SQLAdmin_ApiWarning');
class_alias(BackupConfiguration::class, 'Google_Service_SQLAdmin_BackupConfiguration');
class_alias(BackupContext::class, 'Google_Service_SQLAdmin_BackupContext');
class_alias(BackupRetentionSettings::class, 'Google_Service_SQLAdmin_BackupRetentionSettings');
class_alias(BackupRun::class, 'Google_Service_SQLAdmin_BackupRun');
class_alias(BackupRunsListResponse::class, 'Google_Service_SQLAdmin_BackupRunsListResponse');
class_alias(BinLogCoordinates::class, 'Google_Service_SQLAdmin_BinLogCoordinates');
class_alias(CloneContext::class, 'Google_Service_SQLAdmin_CloneContext');
class_alias(ConnectSettings::class, 'Google_Service_SQLAdmin_ConnectSettings');
class_alias(Database::class, 'Google_Service_SQLAdmin_Database');
class_alias(DatabaseFlags::class, 'Google_Service_SQLAdmin_DatabaseFlags');
class_alias(DatabaseInstance::class, 'Google_Service_SQLAdmin_DatabaseInstance');
class_alias(DatabaseInstanceFailoverReplica::class, 'Google_Service_SQLAdmin_DatabaseInstanceFailoverReplica');
class_alias(DatabasesListResponse::class, 'Google_Service_SQLAdmin_DatabasesListResponse');
class_alias(DemoteMasterConfiguration::class, 'Google_Service_SQLAdmin_DemoteMasterConfiguration');
class_alias(DemoteMasterContext::class, 'Google_Service_SQLAdmin_DemoteMasterContext');
class_alias(DemoteMasterMySqlReplicaConfiguration::class, 'Google_Service_SQLAdmin_DemoteMasterMySqlReplicaConfiguration');
class_alias(DenyMaintenancePeriod::class, 'Google_Service_SQLAdmin_DenyMaintenancePeriod');
class_alias(DiskEncryptionConfiguration::class, 'Google_Service_SQLAdmin_DiskEncryptionConfiguration');
class_alias(DiskEncryptionStatus::class, 'Google_Service_SQLAdmin_DiskEncryptionStatus');
class_alias(ExportContext::class, 'Google_Service_SQLAdmin_ExportContext');
class_alias(ExportContextBakExportOptions::class, 'Google_Service_SQLAdmin_ExportContextBakExportOptions');
class_alias(ExportContextCsvExportOptions::class, 'Google_Service_SQLAdmin_ExportContextCsvExportOptions');
class_alias(ExportContextSqlExportOptions::class, 'Google_Service_SQLAdmin_ExportContextSqlExportOptions');
class_alias(ExportContextSqlExportOptionsMysqlExportOptions::class, 'Google_Service_SQLAdmin_ExportContextSqlExportOptionsMysqlExportOptions');
class_alias(FailoverContext::class, 'Google_Service_SQLAdmin_FailoverContext');
class_alias(Flag::class, 'Google_Service_SQLAdmin_Flag');
class_alias(FlagsListResponse::class, 'Google_Service_SQLAdmin_FlagsListResponse');
class_alias(GenerateEphemeralCertRequest::class, 'Google_Service_SQLAdmin_GenerateEphemeralCertRequest');
class_alias(GenerateEphemeralCertResponse::class, 'Google_Service_SQLAdmin_GenerateEphemeralCertResponse');
class_alias(ImportContext::class, 'Google_Service_SQLAdmin_ImportContext');
class_alias(ImportContextBakImportOptions::class, 'Google_Service_SQLAdmin_ImportContextBakImportOptions');
class_alias(ImportContextBakImportOptionsEncryptionOptions::class, 'Google_Service_SQLAdmin_ImportContextBakImportOptionsEncryptionOptions');
class_alias(ImportContextCsvImportOptions::class, 'Google_Service_SQLAdmin_ImportContextCsvImportOptions');
class_alias(InsightsConfig::class, 'Google_Service_SQLAdmin_InsightsConfig');
class_alias(InstanceReference::class, 'Google_Service_SQLAdmin_InstanceReference');
class_alias(InstancesCloneRequest::class, 'Google_Service_SQLAdmin_InstancesCloneRequest');
class_alias(InstancesDemoteMasterRequest::class, 'Google_Service_SQLAdmin_InstancesDemoteMasterRequest');
class_alias(InstancesExportRequest::class, 'Google_Service_SQLAdmin_InstancesExportRequest');
class_alias(InstancesFailoverRequest::class, 'Google_Service_SQLAdmin_InstancesFailoverRequest');
class_alias(InstancesImportRequest::class, 'Google_Service_SQLAdmin_InstancesImportRequest');
class_alias(InstancesListResponse::class, 'Google_Service_SQLAdmin_InstancesListResponse');
class_alias(InstancesListServerCasResponse::class, 'Google_Service_SQLAdmin_InstancesListServerCasResponse');
class_alias(InstancesRestoreBackupRequest::class, 'Google_Service_SQLAdmin_InstancesRestoreBackupRequest');
class_alias(InstancesRotateServerCaRequest::class, 'Google_Service_SQLAdmin_InstancesRotateServerCaRequest');
class_alias(InstancesTruncateLogRequest::class, 'Google_Service_SQLAdmin_InstancesTruncateLogRequest');
class_alias(IpConfiguration::class, 'Google_Service_SQLAdmin_IpConfiguration');
class_alias(IpMapping::class, 'Google_Service_SQLAdmin_IpMapping');
class_alias(LocationPreference::class, 'Google_Service_SQLAdmin_LocationPreference');
class_alias(MaintenanceWindow::class, 'Google_Service_SQLAdmin_MaintenanceWindow');
class_alias(MySqlReplicaConfiguration::class, 'Google_Service_SQLAdmin_MySqlReplicaConfiguration');
class_alias(MySqlSyncConfig::class, 'Google_Service_SQLAdmin_MySqlSyncConfig');
class_alias(OnPremisesConfiguration::class, 'Google_Service_SQLAdmin_OnPremisesConfiguration');
class_alias(Operation::class, 'Google_Service_SQLAdmin_Operation');
class_alias(OperationError::class, 'Google_Service_SQLAdmin_OperationError');
class_alias(OperationErrors::class, 'Google_Service_SQLAdmin_OperationErrors');
class_alias(OperationsListResponse::class, 'Google_Service_SQLAdmin_OperationsListResponse');
class_alias(PasswordStatus::class, 'Google_Service_SQLAdmin_PasswordStatus');
class_alias(PasswordValidationPolicy::class, 'Google_Service_SQLAdmin_PasswordValidationPolicy');
class_alias(ReplicaConfiguration::class, 'Google_Service_SQLAdmin_ReplicaConfiguration');
class_alias(Reschedule::class, 'Google_Service_SQLAdmin_Reschedule');
class_alias(RestoreBackupContext::class, 'Google_Service_SQLAdmin_RestoreBackupContext');
class_alias(RotateServerCaContext::class, 'Google_Service_SQLAdmin_RotateServerCaContext');
class_alias(Settings::class, 'Google_Service_SQLAdmin_Settings');
class_alias(SqlActiveDirectoryConfig::class, 'Google_Service_SQLAdmin_SqlActiveDirectoryConfig');
class_alias(SqlExternalSyncSettingError::class, 'Google_Service_SQLAdmin_SqlExternalSyncSettingError');
class_alias(SqlInstancesRescheduleMaintenanceRequestBody::class, 'Google_Service_SQLAdmin_SqlInstancesRescheduleMaintenanceRequestBody');
class_alias(SqlInstancesStartExternalSyncRequest::class, 'Google_Service_SQLAdmin_SqlInstancesStartExternalSyncRequest');
class_alias(SqlInstancesVerifyExternalSyncSettingsRequest::class, 'Google_Service_SQLAdmin_SqlInstancesVerifyExternalSyncSettingsRequest');
class_alias(SqlInstancesVerifyExternalSyncSettingsResponse::class, 'Google_Service_SQLAdmin_SqlInstancesVerifyExternalSyncSettingsResponse');
class_alias(SqlOutOfDiskReport::class, 'Google_Service_SQLAdmin_SqlOutOfDiskReport');
class_alias(SqlScheduledMaintenance::class, 'Google_Service_SQLAdmin_SqlScheduledMaintenance');
class_alias(SqlServerAuditConfig::class, 'Google_Service_SQLAdmin_SqlServerAuditConfig');
class_alias(SqlServerDatabaseDetails::class, 'Google_Service_SQLAdmin_SqlServerDatabaseDetails');
class_alias(SqlServerUserDetails::class, 'Google_Service_SQLAdmin_SqlServerUserDetails');
class_alias(SslCert::class, 'Google_Service_SQLAdmin_SslCert');
class_alias(SslCertDetail::class, 'Google_Service_SQLAdmin_SslCertDetail');
class_alias(SslCertsCreateEphemeralRequest::class, 'Google_Service_SQLAdmin_SslCertsCreateEphemeralRequest');
class_alias(SslCertsInsertRequest::class, 'Google_Service_SQLAdmin_SslCertsInsertRequest');
class_alias(SslCertsInsertResponse::class, 'Google_Service_SQLAdmin_SslCertsInsertResponse');
class_alias(SslCertsListResponse::class, 'Google_Service_SQLAdmin_SslCertsListResponse');
class_alias(SyncFlags::class, 'Google_Service_SQLAdmin_SyncFlags');
class_alias(Tier::class, 'Google_Service_SQLAdmin_Tier');
class_alias(TiersListResponse::class, 'Google_Service_SQLAdmin_TiersListResponse');
class_alias(TruncateLogContext::class, 'Google_Service_SQLAdmin_TruncateLogContext');
class_alias(User::class, 'Google_Service_SQLAdmin_User');
class_alias(UserPasswordValidationPolicy::class, 'Google_Service_SQLAdmin_UserPasswordValidationPolicy');
class_alias(UsersListResponse::class, 'Google_Service_SQLAdmin_UsersListResponse');
