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

namespace Google\Service\BigtableAdmin;

class AppProfile extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var MultiClusterRoutingUseAny */
  public $multiClusterRoutingUseAny;
  /** @var string */
  public $name;
  /** @var SingleClusterRouting */
  public $singleClusterRouting;
  protected $multiClusterRoutingUseAnyType = MultiClusterRoutingUseAny::class;
  protected $multiClusterRoutingUseAnyDataType = '';
  protected $singleClusterRoutingType = SingleClusterRouting::class;
  protected $singleClusterRoutingDataType = '';
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
  /** @param MultiClusterRoutingUseAny */
  public function setMultiClusterRoutingUseAny(MultiClusterRoutingUseAny $multiClusterRoutingUseAny)
  {
    $this->multiClusterRoutingUseAny = $multiClusterRoutingUseAny;
  }
  /** @return MultiClusterRoutingUseAny */
  public function getMultiClusterRoutingUseAny()
  {
    return $this->multiClusterRoutingUseAny;
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
  /** @param SingleClusterRouting */
  public function setSingleClusterRouting(SingleClusterRouting $singleClusterRouting)
  {
    $this->singleClusterRouting = $singleClusterRouting;
  }
  /** @return SingleClusterRouting */
  public function getSingleClusterRouting()
  {
    return $this->singleClusterRouting;
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

class AutoscalingLimits extends \Google\Model
{
  /** @var int */
  public $maxServeNodes;
  /** @var int */
  public $minServeNodes;

  /** @param int */
  public function setMaxServeNodes($maxServeNodes)
  {
    $this->maxServeNodes = $maxServeNodes;
  }
  /** @return int */
  public function getMaxServeNodes()
  {
    return $this->maxServeNodes;
  }
  /** @param int */
  public function setMinServeNodes($minServeNodes)
  {
    $this->minServeNodes = $minServeNodes;
  }
  /** @return int */
  public function getMinServeNodes()
  {
    return $this->minServeNodes;
  }
}

class AutoscalingTargets extends \Google\Model
{
  /** @var int */
  public $cpuUtilizationPercent;
  /** @var int */
  public $storageUtilizationGibPerNode;

  /** @param int */
  public function setCpuUtilizationPercent($cpuUtilizationPercent)
  {
    $this->cpuUtilizationPercent = $cpuUtilizationPercent;
  }
  /** @return int */
  public function getCpuUtilizationPercent()
  {
    return $this->cpuUtilizationPercent;
  }
  /** @param int */
  public function setStorageUtilizationGibPerNode($storageUtilizationGibPerNode)
  {
    $this->storageUtilizationGibPerNode = $storageUtilizationGibPerNode;
  }
  /** @return int */
  public function getStorageUtilizationGibPerNode()
  {
    return $this->storageUtilizationGibPerNode;
  }
}

class Backup extends \Google\Model
{
  /** @var EncryptionInfo */
  public $encryptionInfo;
  /** @var string */
  public $endTime;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $name;
  /** @var string */
  public $sizeBytes;
  /** @var string */
  public $sourceBackup;
  /** @var string */
  public $sourceTable;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  protected $encryptionInfoType = EncryptionInfo::class;
  protected $encryptionInfoDataType = '';
  /** @param EncryptionInfo */
  public function setEncryptionInfo(EncryptionInfo $encryptionInfo)
  {
    $this->encryptionInfo = $encryptionInfo;
  }
  /** @return EncryptionInfo */
  public function getEncryptionInfo()
  {
    return $this->encryptionInfo;
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
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /** @return string */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
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
  /** @param string */
  public function setSourceTable($sourceTable)
  {
    $this->sourceTable = $sourceTable;
  }
  /** @return string */
  public function getSourceTable()
  {
    return $this->sourceTable;
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

class BackupInfo extends \Google\Model
{
  /** @var string */
  public $backup;
  /** @var string */
  public $endTime;
  /** @var string */
  public $sourceBackup;
  /** @var string */
  public $sourceTable;
  /** @var string */
  public $startTime;

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
  public function setSourceBackup($sourceBackup)
  {
    $this->sourceBackup = $sourceBackup;
  }
  /** @return string */
  public function getSourceBackup()
  {
    return $this->sourceBackup;
  }
  /** @param string */
  public function setSourceTable($sourceTable)
  {
    $this->sourceTable = $sourceTable;
  }
  /** @return string */
  public function getSourceTable()
  {
    return $this->sourceTable;
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

class BigtableadminEmpty extends \Google\Model
{
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

class CheckConsistencyRequest extends \Google\Model
{
  /** @var string */
  public $consistencyToken;

  /** @param string */
  public function setConsistencyToken($consistencyToken)
  {
    $this->consistencyToken = $consistencyToken;
  }
  /** @return string */
  public function getConsistencyToken()
  {
    return $this->consistencyToken;
  }
}

class CheckConsistencyResponse extends \Google\Model
{
  /** @var bool */
  public $consistent;

  /** @param bool */
  public function setConsistent($consistent)
  {
    $this->consistent = $consistent;
  }
  /** @return bool */
  public function getConsistent()
  {
    return $this->consistent;
  }
}

class Cluster extends \Google\Model
{
  /** @var ClusterConfig */
  public $clusterConfig;
  /** @var string */
  public $defaultStorageType;
  /** @var EncryptionConfig */
  public $encryptionConfig;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var int */
  public $serveNodes;
  /** @var string */
  public $state;
  protected $clusterConfigType = ClusterConfig::class;
  protected $clusterConfigDataType = '';
  protected $encryptionConfigType = EncryptionConfig::class;
  protected $encryptionConfigDataType = '';
  /** @param ClusterConfig */
  public function setClusterConfig(ClusterConfig $clusterConfig)
  {
    $this->clusterConfig = $clusterConfig;
  }
  /** @return ClusterConfig */
  public function getClusterConfig()
  {
    return $this->clusterConfig;
  }
  /** @param string */
  public function setDefaultStorageType($defaultStorageType)
  {
    $this->defaultStorageType = $defaultStorageType;
  }
  /** @return string */
  public function getDefaultStorageType()
  {
    return $this->defaultStorageType;
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
  /** @param int */
  public function setServeNodes($serveNodes)
  {
    $this->serveNodes = $serveNodes;
  }
  /** @return int */
  public function getServeNodes()
  {
    return $this->serveNodes;
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

class ClusterAutoscalingConfig extends \Google\Model
{
  /** @var AutoscalingLimits */
  public $autoscalingLimits;
  /** @var AutoscalingTargets */
  public $autoscalingTargets;
  protected $autoscalingLimitsType = AutoscalingLimits::class;
  protected $autoscalingLimitsDataType = '';
  protected $autoscalingTargetsType = AutoscalingTargets::class;
  protected $autoscalingTargetsDataType = '';
  /** @param AutoscalingLimits */
  public function setAutoscalingLimits(AutoscalingLimits $autoscalingLimits)
  {
    $this->autoscalingLimits = $autoscalingLimits;
  }
  /** @return AutoscalingLimits */
  public function getAutoscalingLimits()
  {
    return $this->autoscalingLimits;
  }
  /** @param AutoscalingTargets */
  public function setAutoscalingTargets(AutoscalingTargets $autoscalingTargets)
  {
    $this->autoscalingTargets = $autoscalingTargets;
  }
  /** @return AutoscalingTargets */
  public function getAutoscalingTargets()
  {
    return $this->autoscalingTargets;
  }
}

class ClusterConfig extends \Google\Model
{
  /** @var ClusterAutoscalingConfig */
  public $clusterAutoscalingConfig;
  protected $clusterAutoscalingConfigType = ClusterAutoscalingConfig::class;
  protected $clusterAutoscalingConfigDataType = '';
  /** @param ClusterAutoscalingConfig */
  public function setClusterAutoscalingConfig(ClusterAutoscalingConfig $clusterAutoscalingConfig)
  {
    $this->clusterAutoscalingConfig = $clusterAutoscalingConfig;
  }
  /** @return ClusterAutoscalingConfig */
  public function getClusterAutoscalingConfig()
  {
    return $this->clusterAutoscalingConfig;
  }
}

class ClusterState extends \Google\Collection
{
  /** @var EncryptionInfo[] */
  public $encryptionInfo;
  /** @var string */
  public $replicationState;
  protected $collection_key = 'encryptionInfo';
  protected $encryptionInfoType = EncryptionInfo::class;
  protected $encryptionInfoDataType = 'array';
  /** @param EncryptionInfo[] */
  public function setEncryptionInfo($encryptionInfo)
  {
    $this->encryptionInfo = $encryptionInfo;
  }
  /** @return EncryptionInfo[] */
  public function getEncryptionInfo()
  {
    return $this->encryptionInfo;
  }
  /** @param string */
  public function setReplicationState($replicationState)
  {
    $this->replicationState = $replicationState;
  }
  /** @return string */
  public function getReplicationState()
  {
    return $this->replicationState;
  }
}

class ColumnFamily extends \Google\Model
{
  /** @var GcRule */
  public $gcRule;
  /** @var ColumnFamilyStats */
  public $stats;
  protected $gcRuleType = GcRule::class;
  protected $gcRuleDataType = '';
  protected $statsType = ColumnFamilyStats::class;
  protected $statsDataType = '';
  /** @param GcRule */
  public function setGcRule(GcRule $gcRule)
  {
    $this->gcRule = $gcRule;
  }
  /** @return GcRule */
  public function getGcRule()
  {
    return $this->gcRule;
  }
  /** @param ColumnFamilyStats */
  public function setStats(ColumnFamilyStats $stats)
  {
    $this->stats = $stats;
  }
  /** @return ColumnFamilyStats */
  public function getStats()
  {
    return $this->stats;
  }
}

class ColumnFamilyStats extends \Google\Model
{
  public $averageCellsPerColumn;
  public $averageColumnsPerRow;
  /** @var string */
  public $logicalDataBytes;

  public function setAverageCellsPerColumn($averageCellsPerColumn)
  {
    $this->averageCellsPerColumn = $averageCellsPerColumn;
  }
  public function getAverageCellsPerColumn()
  {
    return $this->averageCellsPerColumn;
  }
  public function setAverageColumnsPerRow($averageColumnsPerRow)
  {
    $this->averageColumnsPerRow = $averageColumnsPerRow;
  }
  public function getAverageColumnsPerRow()
  {
    return $this->averageColumnsPerRow;
  }
  /** @param string */
  public function setLogicalDataBytes($logicalDataBytes)
  {
    $this->logicalDataBytes = $logicalDataBytes;
  }
  /** @return string */
  public function getLogicalDataBytes()
  {
    return $this->logicalDataBytes;
  }
}

class CopyBackupMetadata extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var OperationProgress */
  public $progress;
  /** @var BackupInfo */
  public $sourceBackupInfo;
  protected $progressType = OperationProgress::class;
  protected $progressDataType = '';
  protected $sourceBackupInfoType = BackupInfo::class;
  protected $sourceBackupInfoDataType = '';
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
  /** @param OperationProgress */
  public function setProgress(OperationProgress $progress)
  {
    $this->progress = $progress;
  }
  /** @return OperationProgress */
  public function getProgress()
  {
    return $this->progress;
  }
  /** @param BackupInfo */
  public function setSourceBackupInfo(BackupInfo $sourceBackupInfo)
  {
    $this->sourceBackupInfo = $sourceBackupInfo;
  }
  /** @return BackupInfo */
  public function getSourceBackupInfo()
  {
    return $this->sourceBackupInfo;
  }
}

class CopyBackupRequest extends \Google\Model
{
  /** @var string */
  public $backupId;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $sourceBackup;

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

class CreateBackupMetadata extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $name;
  /** @var string */
  public $sourceTable;
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
  public function setSourceTable($sourceTable)
  {
    $this->sourceTable = $sourceTable;
  }
  /** @return string */
  public function getSourceTable()
  {
    return $this->sourceTable;
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

class CreateClusterMetadata extends \Google\Model
{
  /** @var string */
  public $finishTime;
  /** @var CreateClusterRequest */
  public $originalRequest;
  /** @var string */
  public $requestTime;
  /** @var TableProgress[] */
  public $tables;
  protected $originalRequestType = CreateClusterRequest::class;
  protected $originalRequestDataType = '';
  protected $tablesType = TableProgress::class;
  protected $tablesDataType = 'map';
  /** @param string */
  public function setFinishTime($finishTime)
  {
    $this->finishTime = $finishTime;
  }
  /** @return string */
  public function getFinishTime()
  {
    return $this->finishTime;
  }
  /** @param CreateClusterRequest */
  public function setOriginalRequest(CreateClusterRequest $originalRequest)
  {
    $this->originalRequest = $originalRequest;
  }
  /** @return CreateClusterRequest */
  public function getOriginalRequest()
  {
    return $this->originalRequest;
  }
  /** @param string */
  public function setRequestTime($requestTime)
  {
    $this->requestTime = $requestTime;
  }
  /** @return string */
  public function getRequestTime()
  {
    return $this->requestTime;
  }
  /** @param TableProgress[] */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /** @return TableProgress[] */
  public function getTables()
  {
    return $this->tables;
  }
}

class CreateClusterRequest extends \Google\Model
{
  /** @var Cluster */
  public $cluster;
  /** @var string */
  public $clusterId;
  /** @var string */
  public $parent;
  protected $clusterType = Cluster::class;
  protected $clusterDataType = '';
  /** @param Cluster */
  public function setCluster(Cluster $cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return Cluster */
  public function getCluster()
  {
    return $this->cluster;
  }
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
}

class CreateInstanceMetadata extends \Google\Model
{
  /** @var string */
  public $finishTime;
  /** @var CreateInstanceRequest */
  public $originalRequest;
  /** @var string */
  public $requestTime;
  protected $originalRequestType = CreateInstanceRequest::class;
  protected $originalRequestDataType = '';
  /** @param string */
  public function setFinishTime($finishTime)
  {
    $this->finishTime = $finishTime;
  }
  /** @return string */
  public function getFinishTime()
  {
    return $this->finishTime;
  }
  /** @param CreateInstanceRequest */
  public function setOriginalRequest(CreateInstanceRequest $originalRequest)
  {
    $this->originalRequest = $originalRequest;
  }
  /** @return CreateInstanceRequest */
  public function getOriginalRequest()
  {
    return $this->originalRequest;
  }
  /** @param string */
  public function setRequestTime($requestTime)
  {
    $this->requestTime = $requestTime;
  }
  /** @return string */
  public function getRequestTime()
  {
    return $this->requestTime;
  }
}

class CreateInstanceRequest extends \Google\Model
{
  /** @var Cluster[] */
  public $clusters;
  /** @var Instance */
  public $instance;
  /** @var string */
  public $instanceId;
  /** @var string */
  public $parent;
  protected $clustersType = Cluster::class;
  protected $clustersDataType = 'map';
  protected $instanceType = Instance::class;
  protected $instanceDataType = '';
  /** @param Cluster[] */
  public function setClusters($clusters)
  {
    $this->clusters = $clusters;
  }
  /** @return Cluster[] */
  public function getClusters()
  {
    return $this->clusters;
  }
  /** @param Instance */
  public function setInstance(Instance $instance)
  {
    $this->instance = $instance;
  }
  /** @return Instance */
  public function getInstance()
  {
    return $this->instance;
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
}

class CreateTableRequest extends \Google\Collection
{
  /** @var Split[] */
  public $initialSplits;
  /** @var Table */
  public $table;
  /** @var string */
  public $tableId;
  protected $collection_key = 'initialSplits';
  protected $initialSplitsType = Split::class;
  protected $initialSplitsDataType = 'array';
  protected $tableType = Table::class;
  protected $tableDataType = '';
  /** @param Split[] */
  public function setInitialSplits($initialSplits)
  {
    $this->initialSplits = $initialSplits;
  }
  /** @return Split[] */
  public function getInitialSplits()
  {
    return $this->initialSplits;
  }
  /** @param Table */
  public function setTable(Table $table)
  {
    $this->table = $table;
  }
  /** @return Table */
  public function getTable()
  {
    return $this->table;
  }
  /** @param string */
  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }
  /** @return string */
  public function getTableId()
  {
    return $this->tableId;
  }
}

class DropRowRangeRequest extends \Google\Model
{
  /** @var bool */
  public $deleteAllDataFromTable;
  /** @var string */
  public $rowKeyPrefix;

  /** @param bool */
  public function setDeleteAllDataFromTable($deleteAllDataFromTable)
  {
    $this->deleteAllDataFromTable = $deleteAllDataFromTable;
  }
  /** @return bool */
  public function getDeleteAllDataFromTable()
  {
    return $this->deleteAllDataFromTable;
  }
  /** @param string */
  public function setRowKeyPrefix($rowKeyPrefix)
  {
    $this->rowKeyPrefix = $rowKeyPrefix;
  }
  /** @return string */
  public function getRowKeyPrefix()
  {
    return $this->rowKeyPrefix;
  }
}

class EncryptionConfig extends \Google\Model
{
  /** @var string */
  public $kmsKeyName;

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

class EncryptionInfo extends \Google\Model
{
  /** @var Status */
  public $encryptionStatus;
  /** @var string */
  public $encryptionType;
  /** @var string */
  public $kmsKeyVersion;
  protected $encryptionStatusType = Status::class;
  protected $encryptionStatusDataType = '';
  /** @param Status */
  public function setEncryptionStatus(Status $encryptionStatus)
  {
    $this->encryptionStatus = $encryptionStatus;
  }
  /** @return Status */
  public function getEncryptionStatus()
  {
    return $this->encryptionStatus;
  }
  /** @param string */
  public function setEncryptionType($encryptionType)
  {
    $this->encryptionType = $encryptionType;
  }
  /** @return string */
  public function getEncryptionType()
  {
    return $this->encryptionType;
  }
  /** @param string */
  public function setKmsKeyVersion($kmsKeyVersion)
  {
    $this->kmsKeyVersion = $kmsKeyVersion;
  }
  /** @return string */
  public function getKmsKeyVersion()
  {
    return $this->kmsKeyVersion;
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

class GcRule extends \Google\Model
{
  /** @var Intersection */
  public $intersection;
  /** @var string */
  public $maxAge;
  /** @var int */
  public $maxNumVersions;
  /** @var Union */
  public $union;
  protected $intersectionType = Intersection::class;
  protected $intersectionDataType = '';
  protected $unionType = Union::class;
  protected $unionDataType = '';
  /** @param Intersection */
  public function setIntersection(Intersection $intersection)
  {
    $this->intersection = $intersection;
  }
  /** @return Intersection */
  public function getIntersection()
  {
    return $this->intersection;
  }
  /** @param string */
  public function setMaxAge($maxAge)
  {
    $this->maxAge = $maxAge;
  }
  /** @return string */
  public function getMaxAge()
  {
    return $this->maxAge;
  }
  /** @param int */
  public function setMaxNumVersions($maxNumVersions)
  {
    $this->maxNumVersions = $maxNumVersions;
  }
  /** @return int */
  public function getMaxNumVersions()
  {
    return $this->maxNumVersions;
  }
  /** @param Union */
  public function setUnion(Union $union)
  {
    $this->union = $union;
  }
  /** @return Union */
  public function getUnion()
  {
    return $this->union;
  }
}

class GenerateConsistencyTokenRequest extends \Google\Model
{
}

class GenerateConsistencyTokenResponse extends \Google\Model
{
  /** @var string */
  public $consistencyToken;

  /** @param string */
  public function setConsistencyToken($consistencyToken)
  {
    $this->consistencyToken = $consistencyToken;
  }
  /** @return string */
  public function getConsistencyToken()
  {
    return $this->consistencyToken;
  }
}

class GetIamPolicyRequest extends \Google\Model
{
  /** @var GetPolicyOptions */
  public $options;
  protected $optionsType = GetPolicyOptions::class;
  protected $optionsDataType = '';
  /** @param GetPolicyOptions */
  public function setOptions(GetPolicyOptions $options)
  {
    $this->options = $options;
  }
  /** @return GetPolicyOptions */
  public function getOptions()
  {
    return $this->options;
  }
}

class GetPolicyOptions extends \Google\Model
{
  /** @var int */
  public $requestedPolicyVersion;

  /** @param int */
  public function setRequestedPolicyVersion($requestedPolicyVersion)
  {
    $this->requestedPolicyVersion = $requestedPolicyVersion;
  }
  /** @return int */
  public function getRequestedPolicyVersion()
  {
    return $this->requestedPolicyVersion;
  }
}

class HotTablet extends \Google\Model
{
  /** @var string */
  public $endKey;
  /** @var string */
  public $endTime;
  /** @var string */
  public $name;
  /** @var float */
  public $nodeCpuUsagePercent;
  /** @var string */
  public $startKey;
  /** @var string */
  public $startTime;
  /** @var string */
  public $tableName;

  /** @param string */
  public function setEndKey($endKey)
  {
    $this->endKey = $endKey;
  }
  /** @return string */
  public function getEndKey()
  {
    return $this->endKey;
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
  /** @param float */
  public function setNodeCpuUsagePercent($nodeCpuUsagePercent)
  {
    $this->nodeCpuUsagePercent = $nodeCpuUsagePercent;
  }
  /** @return float */
  public function getNodeCpuUsagePercent()
  {
    return $this->nodeCpuUsagePercent;
  }
  /** @param string */
  public function setStartKey($startKey)
  {
    $this->startKey = $startKey;
  }
  /** @return string */
  public function getStartKey()
  {
    return $this->startKey;
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
  public function setTableName($tableName)
  {
    $this->tableName = $tableName;
  }
  /** @return string */
  public function getTableName()
  {
    return $this->tableName;
  }
}

class Instance extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var bool */
  public $satisfiesPzs;
  /** @var string */
  public $state;
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

class Intersection extends \Google\Collection
{
  /** @var GcRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = GcRule::class;
  protected $rulesDataType = 'array';
  /** @param GcRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return GcRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class ListAppProfilesResponse extends \Google\Collection
{
  /** @var AppProfile[] */
  public $appProfiles;
  /** @var string[] */
  public $failedLocations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'failedLocations';
  protected $appProfilesType = AppProfile::class;
  protected $appProfilesDataType = 'array';
  /** @param AppProfile[] */
  public function setAppProfiles($appProfiles)
  {
    $this->appProfiles = $appProfiles;
  }
  /** @return AppProfile[] */
  public function getAppProfiles()
  {
    return $this->appProfiles;
  }
  /** @param string[] */
  public function setFailedLocations($failedLocations)
  {
    $this->failedLocations = $failedLocations;
  }
  /** @return string[] */
  public function getFailedLocations()
  {
    return $this->failedLocations;
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

class ListBackupsResponse extends \Google\Collection
{
  /** @var Backup[] */
  public $backups;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'backups';
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
}

class ListClustersResponse extends \Google\Collection
{
  /** @var Cluster[] */
  public $clusters;
  /** @var string[] */
  public $failedLocations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'failedLocations';
  protected $clustersType = Cluster::class;
  protected $clustersDataType = 'array';
  /** @param Cluster[] */
  public function setClusters($clusters)
  {
    $this->clusters = $clusters;
  }
  /** @return Cluster[] */
  public function getClusters()
  {
    return $this->clusters;
  }
  /** @param string[] */
  public function setFailedLocations($failedLocations)
  {
    $this->failedLocations = $failedLocations;
  }
  /** @return string[] */
  public function getFailedLocations()
  {
    return $this->failedLocations;
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

class ListHotTabletsResponse extends \Google\Collection
{
  /** @var HotTablet[] */
  public $hotTablets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'hotTablets';
  protected $hotTabletsType = HotTablet::class;
  protected $hotTabletsDataType = 'array';
  /** @param HotTablet[] */
  public function setHotTablets($hotTablets)
  {
    $this->hotTablets = $hotTablets;
  }
  /** @return HotTablet[] */
  public function getHotTablets()
  {
    return $this->hotTablets;
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

class ListInstancesResponse extends \Google\Collection
{
  /** @var string[] */
  public $failedLocations;
  /** @var Instance[] */
  public $instances;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'instances';
  protected $instancesType = Instance::class;
  protected $instancesDataType = 'array';
  /** @param string[] */
  public function setFailedLocations($failedLocations)
  {
    $this->failedLocations = $failedLocations;
  }
  /** @return string[] */
  public function getFailedLocations()
  {
    return $this->failedLocations;
  }
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

class ListTablesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Table[] */
  public $tables;
  protected $collection_key = 'tables';
  protected $tablesType = Table::class;
  protected $tablesDataType = 'array';
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
  /** @param Table[] */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /** @return Table[] */
  public function getTables()
  {
    return $this->tables;
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

class Modification extends \Google\Model
{
  /** @var ColumnFamily */
  public $create;
  /** @var bool */
  public $drop;
  /** @var string */
  public $id;
  /** @var ColumnFamily */
  public $update;
  protected $createType = ColumnFamily::class;
  protected $createDataType = '';
  protected $updateType = ColumnFamily::class;
  protected $updateDataType = '';
  /** @param ColumnFamily */
  public function setCreate(ColumnFamily $create)
  {
    $this->create = $create;
  }
  /** @return ColumnFamily */
  public function getCreate()
  {
    return $this->create;
  }
  /** @param bool */
  public function setDrop($drop)
  {
    $this->drop = $drop;
  }
  /** @return bool */
  public function getDrop()
  {
    return $this->drop;
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
  /** @param ColumnFamily */
  public function setUpdate(ColumnFamily $update)
  {
    $this->update = $update;
  }
  /** @return ColumnFamily */
  public function getUpdate()
  {
    return $this->update;
  }
}

class ModifyColumnFamiliesRequest extends \Google\Collection
{
  /** @var Modification[] */
  public $modifications;
  protected $collection_key = 'modifications';
  protected $modificationsType = Modification::class;
  protected $modificationsDataType = 'array';
  /** @param Modification[] */
  public function setModifications($modifications)
  {
    $this->modifications = $modifications;
  }
  /** @return Modification[] */
  public function getModifications()
  {
    return $this->modifications;
  }
}

class MultiClusterRoutingUseAny extends \Google\Collection
{
  /** @var string[] */
  public $clusterIds;
  protected $collection_key = 'clusterIds';
  /** @param string[] */
  public function setClusterIds($clusterIds)
  {
    $this->clusterIds = $clusterIds;
  }
  /** @return string[] */
  public function getClusterIds()
  {
    return $this->clusterIds;
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

class OperationProgress extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var int */
  public $progressPercent;
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
  /** @param int */
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /** @return int */
  public function getProgressPercent()
  {
    return $this->progressPercent;
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

class OptimizeRestoredTableMetadata extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var OperationProgress */
  public $progress;
  protected $progressType = OperationProgress::class;
  protected $progressDataType = '';
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
  /** @param OperationProgress */
  public function setProgress(OperationProgress $progress)
  {
    $this->progress = $progress;
  }
  /** @return OperationProgress */
  public function getProgress()
  {
    return $this->progress;
  }
}

class PartialUpdateClusterMetadata extends \Google\Model
{
  /** @var string */
  public $finishTime;
  /** @var PartialUpdateClusterRequest */
  public $originalRequest;
  /** @var string */
  public $requestTime;
  protected $originalRequestType = PartialUpdateClusterRequest::class;
  protected $originalRequestDataType = '';
  /** @param string */
  public function setFinishTime($finishTime)
  {
    $this->finishTime = $finishTime;
  }
  /** @return string */
  public function getFinishTime()
  {
    return $this->finishTime;
  }
  /** @param PartialUpdateClusterRequest */
  public function setOriginalRequest(PartialUpdateClusterRequest $originalRequest)
  {
    $this->originalRequest = $originalRequest;
  }
  /** @return PartialUpdateClusterRequest */
  public function getOriginalRequest()
  {
    return $this->originalRequest;
  }
  /** @param string */
  public function setRequestTime($requestTime)
  {
    $this->requestTime = $requestTime;
  }
  /** @return string */
  public function getRequestTime()
  {
    return $this->requestTime;
  }
}

class PartialUpdateClusterRequest extends \Google\Model
{
  /** @var Cluster */
  public $cluster;
  /** @var string */
  public $updateMask;
  protected $clusterType = Cluster::class;
  protected $clusterDataType = '';
  /** @param Cluster */
  public function setCluster(Cluster $cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return Cluster */
  public function getCluster()
  {
    return $this->cluster;
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

class PartialUpdateInstanceRequest extends \Google\Model
{
  /** @var Instance */
  public $instance;
  /** @var string */
  public $updateMask;
  protected $instanceType = Instance::class;
  protected $instanceDataType = '';
  /** @param Instance */
  public function setInstance(Instance $instance)
  {
    $this->instance = $instance;
  }
  /** @return Instance */
  public function getInstance()
  {
    return $this->instance;
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

class RestoreInfo extends \Google\Model
{
  /** @var BackupInfo */
  public $backupInfo;
  /** @var string */
  public $sourceType;
  protected $backupInfoType = BackupInfo::class;
  protected $backupInfoDataType = '';
  /** @param BackupInfo */
  public function setBackupInfo(BackupInfo $backupInfo)
  {
    $this->backupInfo = $backupInfo;
  }
  /** @return BackupInfo */
  public function getBackupInfo()
  {
    return $this->backupInfo;
  }
  /** @param string */
  public function setSourceType($sourceType)
  {
    $this->sourceType = $sourceType;
  }
  /** @return string */
  public function getSourceType()
  {
    return $this->sourceType;
  }
}

class RestoreTableMetadata extends \Google\Model
{
  /** @var BackupInfo */
  public $backupInfo;
  /** @var string */
  public $name;
  /** @var string */
  public $optimizeTableOperationName;
  /** @var OperationProgress */
  public $progress;
  /** @var string */
  public $sourceType;
  protected $backupInfoType = BackupInfo::class;
  protected $backupInfoDataType = '';
  protected $progressType = OperationProgress::class;
  protected $progressDataType = '';
  /** @param BackupInfo */
  public function setBackupInfo(BackupInfo $backupInfo)
  {
    $this->backupInfo = $backupInfo;
  }
  /** @return BackupInfo */
  public function getBackupInfo()
  {
    return $this->backupInfo;
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
  public function setOptimizeTableOperationName($optimizeTableOperationName)
  {
    $this->optimizeTableOperationName = $optimizeTableOperationName;
  }
  /** @return string */
  public function getOptimizeTableOperationName()
  {
    return $this->optimizeTableOperationName;
  }
  /** @param OperationProgress */
  public function setProgress(OperationProgress $progress)
  {
    $this->progress = $progress;
  }
  /** @return OperationProgress */
  public function getProgress()
  {
    return $this->progress;
  }
  /** @param string */
  public function setSourceType($sourceType)
  {
    $this->sourceType = $sourceType;
  }
  /** @return string */
  public function getSourceType()
  {
    return $this->sourceType;
  }
}

class RestoreTableRequest extends \Google\Model
{
  /** @var string */
  public $backup;
  /** @var string */
  public $tableId;

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
  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }
  /** @return string */
  public function getTableId()
  {
    return $this->tableId;
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

class SingleClusterRouting extends \Google\Model
{
  /** @var bool */
  public $allowTransactionalWrites;
  /** @var string */
  public $clusterId;

  /** @param bool */
  public function setAllowTransactionalWrites($allowTransactionalWrites)
  {
    $this->allowTransactionalWrites = $allowTransactionalWrites;
  }
  /** @return bool */
  public function getAllowTransactionalWrites()
  {
    return $this->allowTransactionalWrites;
  }
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
}

class Split extends \Google\Model
{
  /** @var string */
  public $key;

  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
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

class Table extends \Google\Model
{
  /** @var ClusterState[] */
  public $clusterStates;
  /** @var ColumnFamily[] */
  public $columnFamilies;
  /** @var bool */
  public $deletionProtection;
  /** @var string */
  public $granularity;
  /** @var string */
  public $name;
  /** @var RestoreInfo */
  public $restoreInfo;
  /** @var TableStats */
  public $stats;
  protected $clusterStatesType = ClusterState::class;
  protected $clusterStatesDataType = 'map';
  protected $columnFamiliesType = ColumnFamily::class;
  protected $columnFamiliesDataType = 'map';
  protected $restoreInfoType = RestoreInfo::class;
  protected $restoreInfoDataType = '';
  protected $statsType = TableStats::class;
  protected $statsDataType = '';
  /** @param ClusterState[] */
  public function setClusterStates($clusterStates)
  {
    $this->clusterStates = $clusterStates;
  }
  /** @return ClusterState[] */
  public function getClusterStates()
  {
    return $this->clusterStates;
  }
  /** @param ColumnFamily[] */
  public function setColumnFamilies($columnFamilies)
  {
    $this->columnFamilies = $columnFamilies;
  }
  /** @return ColumnFamily[] */
  public function getColumnFamilies()
  {
    return $this->columnFamilies;
  }
  /** @param bool */
  public function setDeletionProtection($deletionProtection)
  {
    $this->deletionProtection = $deletionProtection;
  }
  /** @return bool */
  public function getDeletionProtection()
  {
    return $this->deletionProtection;
  }
  /** @param string */
  public function setGranularity($granularity)
  {
    $this->granularity = $granularity;
  }
  /** @return string */
  public function getGranularity()
  {
    return $this->granularity;
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
  /** @param RestoreInfo */
  public function setRestoreInfo(RestoreInfo $restoreInfo)
  {
    $this->restoreInfo = $restoreInfo;
  }
  /** @return RestoreInfo */
  public function getRestoreInfo()
  {
    return $this->restoreInfo;
  }
  /** @param TableStats */
  public function setStats(TableStats $stats)
  {
    $this->stats = $stats;
  }
  /** @return TableStats */
  public function getStats()
  {
    return $this->stats;
  }
}

class TableProgress extends \Google\Model
{
  /** @var string */
  public $estimatedCopiedBytes;
  /** @var string */
  public $estimatedSizeBytes;
  /** @var string */
  public $state;

  /** @param string */
  public function setEstimatedCopiedBytes($estimatedCopiedBytes)
  {
    $this->estimatedCopiedBytes = $estimatedCopiedBytes;
  }
  /** @return string */
  public function getEstimatedCopiedBytes()
  {
    return $this->estimatedCopiedBytes;
  }
  /** @param string */
  public function setEstimatedSizeBytes($estimatedSizeBytes)
  {
    $this->estimatedSizeBytes = $estimatedSizeBytes;
  }
  /** @return string */
  public function getEstimatedSizeBytes()
  {
    return $this->estimatedSizeBytes;
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

class TableStats extends \Google\Model
{
  public $averageCellsPerColumn;
  public $averageColumnsPerRow;
  /** @var string */
  public $logicalDataBytes;
  /** @var string */
  public $rowCount;

  public function setAverageCellsPerColumn($averageCellsPerColumn)
  {
    $this->averageCellsPerColumn = $averageCellsPerColumn;
  }
  public function getAverageCellsPerColumn()
  {
    return $this->averageCellsPerColumn;
  }
  public function setAverageColumnsPerRow($averageColumnsPerRow)
  {
    $this->averageColumnsPerRow = $averageColumnsPerRow;
  }
  public function getAverageColumnsPerRow()
  {
    return $this->averageColumnsPerRow;
  }
  /** @param string */
  public function setLogicalDataBytes($logicalDataBytes)
  {
    $this->logicalDataBytes = $logicalDataBytes;
  }
  /** @return string */
  public function getLogicalDataBytes()
  {
    return $this->logicalDataBytes;
  }
  /** @param string */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return string */
  public function getRowCount()
  {
    return $this->rowCount;
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

class UndeleteTableMetadata extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $name;
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

class UndeleteTableRequest extends \Google\Model
{
}

class Union extends \Google\Collection
{
  /** @var GcRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = GcRule::class;
  protected $rulesDataType = 'array';
  /** @param GcRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return GcRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class UpdateAppProfileMetadata extends \Google\Model
{
}

class UpdateClusterMetadata extends \Google\Model
{
  /** @var string */
  public $finishTime;
  /** @var Cluster */
  public $originalRequest;
  /** @var string */
  public $requestTime;
  protected $originalRequestType = Cluster::class;
  protected $originalRequestDataType = '';
  /** @param string */
  public function setFinishTime($finishTime)
  {
    $this->finishTime = $finishTime;
  }
  /** @return string */
  public function getFinishTime()
  {
    return $this->finishTime;
  }
  /** @param Cluster */
  public function setOriginalRequest(Cluster $originalRequest)
  {
    $this->originalRequest = $originalRequest;
  }
  /** @return Cluster */
  public function getOriginalRequest()
  {
    return $this->originalRequest;
  }
  /** @param string */
  public function setRequestTime($requestTime)
  {
    $this->requestTime = $requestTime;
  }
  /** @return string */
  public function getRequestTime()
  {
    return $this->requestTime;
  }
}

class UpdateInstanceMetadata extends \Google\Model
{
  /** @var string */
  public $finishTime;
  /** @var PartialUpdateInstanceRequest */
  public $originalRequest;
  /** @var string */
  public $requestTime;
  protected $originalRequestType = PartialUpdateInstanceRequest::class;
  protected $originalRequestDataType = '';
  /** @param string */
  public function setFinishTime($finishTime)
  {
    $this->finishTime = $finishTime;
  }
  /** @return string */
  public function getFinishTime()
  {
    return $this->finishTime;
  }
  /** @param PartialUpdateInstanceRequest */
  public function setOriginalRequest(PartialUpdateInstanceRequest $originalRequest)
  {
    $this->originalRequest = $originalRequest;
  }
  /** @return PartialUpdateInstanceRequest */
  public function getOriginalRequest()
  {
    return $this->originalRequest;
  }
  /** @param string */
  public function setRequestTime($requestTime)
  {
    $this->requestTime = $requestTime;
  }
  /** @return string */
  public function getRequestTime()
  {
    return $this->requestTime;
  }
}

class UpdateTableMetadata extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $name;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppProfile::class, 'Google_Service_BigtableAdmin_AppProfile');
class_alias(AuditConfig::class, 'Google_Service_BigtableAdmin_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_BigtableAdmin_AuditLogConfig');
class_alias(AutoscalingLimits::class, 'Google_Service_BigtableAdmin_AutoscalingLimits');
class_alias(AutoscalingTargets::class, 'Google_Service_BigtableAdmin_AutoscalingTargets');
class_alias(Backup::class, 'Google_Service_BigtableAdmin_Backup');
class_alias(BackupInfo::class, 'Google_Service_BigtableAdmin_BackupInfo');
class_alias(BigtableadminEmpty::class, 'Google_Service_BigtableAdmin_BigtableadminEmpty');
class_alias(Binding::class, 'Google_Service_BigtableAdmin_Binding');
class_alias(CheckConsistencyRequest::class, 'Google_Service_BigtableAdmin_CheckConsistencyRequest');
class_alias(CheckConsistencyResponse::class, 'Google_Service_BigtableAdmin_CheckConsistencyResponse');
class_alias(Cluster::class, 'Google_Service_BigtableAdmin_Cluster');
class_alias(ClusterAutoscalingConfig::class, 'Google_Service_BigtableAdmin_ClusterAutoscalingConfig');
class_alias(ClusterConfig::class, 'Google_Service_BigtableAdmin_ClusterConfig');
class_alias(ClusterState::class, 'Google_Service_BigtableAdmin_ClusterState');
class_alias(ColumnFamily::class, 'Google_Service_BigtableAdmin_ColumnFamily');
class_alias(ColumnFamilyStats::class, 'Google_Service_BigtableAdmin_ColumnFamilyStats');
class_alias(CopyBackupMetadata::class, 'Google_Service_BigtableAdmin_CopyBackupMetadata');
class_alias(CopyBackupRequest::class, 'Google_Service_BigtableAdmin_CopyBackupRequest');
class_alias(CreateBackupMetadata::class, 'Google_Service_BigtableAdmin_CreateBackupMetadata');
class_alias(CreateClusterMetadata::class, 'Google_Service_BigtableAdmin_CreateClusterMetadata');
class_alias(CreateClusterRequest::class, 'Google_Service_BigtableAdmin_CreateClusterRequest');
class_alias(CreateInstanceMetadata::class, 'Google_Service_BigtableAdmin_CreateInstanceMetadata');
class_alias(CreateInstanceRequest::class, 'Google_Service_BigtableAdmin_CreateInstanceRequest');
class_alias(CreateTableRequest::class, 'Google_Service_BigtableAdmin_CreateTableRequest');
class_alias(DropRowRangeRequest::class, 'Google_Service_BigtableAdmin_DropRowRangeRequest');
class_alias(EncryptionConfig::class, 'Google_Service_BigtableAdmin_EncryptionConfig');
class_alias(EncryptionInfo::class, 'Google_Service_BigtableAdmin_EncryptionInfo');
class_alias(Expr::class, 'Google_Service_BigtableAdmin_Expr');
class_alias(GcRule::class, 'Google_Service_BigtableAdmin_GcRule');
class_alias(GenerateConsistencyTokenRequest::class, 'Google_Service_BigtableAdmin_GenerateConsistencyTokenRequest');
class_alias(GenerateConsistencyTokenResponse::class, 'Google_Service_BigtableAdmin_GenerateConsistencyTokenResponse');
class_alias(GetIamPolicyRequest::class, 'Google_Service_BigtableAdmin_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_BigtableAdmin_GetPolicyOptions');
class_alias(HotTablet::class, 'Google_Service_BigtableAdmin_HotTablet');
class_alias(Instance::class, 'Google_Service_BigtableAdmin_Instance');
class_alias(Intersection::class, 'Google_Service_BigtableAdmin_Intersection');
class_alias(ListAppProfilesResponse::class, 'Google_Service_BigtableAdmin_ListAppProfilesResponse');
class_alias(ListBackupsResponse::class, 'Google_Service_BigtableAdmin_ListBackupsResponse');
class_alias(ListClustersResponse::class, 'Google_Service_BigtableAdmin_ListClustersResponse');
class_alias(ListHotTabletsResponse::class, 'Google_Service_BigtableAdmin_ListHotTabletsResponse');
class_alias(ListInstancesResponse::class, 'Google_Service_BigtableAdmin_ListInstancesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_BigtableAdmin_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_BigtableAdmin_ListOperationsResponse');
class_alias(ListTablesResponse::class, 'Google_Service_BigtableAdmin_ListTablesResponse');
class_alias(Location::class, 'Google_Service_BigtableAdmin_Location');
class_alias(Modification::class, 'Google_Service_BigtableAdmin_Modification');
class_alias(ModifyColumnFamiliesRequest::class, 'Google_Service_BigtableAdmin_ModifyColumnFamiliesRequest');
class_alias(MultiClusterRoutingUseAny::class, 'Google_Service_BigtableAdmin_MultiClusterRoutingUseAny');
class_alias(Operation::class, 'Google_Service_BigtableAdmin_Operation');
class_alias(OperationProgress::class, 'Google_Service_BigtableAdmin_OperationProgress');
class_alias(OptimizeRestoredTableMetadata::class, 'Google_Service_BigtableAdmin_OptimizeRestoredTableMetadata');
class_alias(PartialUpdateClusterMetadata::class, 'Google_Service_BigtableAdmin_PartialUpdateClusterMetadata');
class_alias(PartialUpdateClusterRequest::class, 'Google_Service_BigtableAdmin_PartialUpdateClusterRequest');
class_alias(PartialUpdateInstanceRequest::class, 'Google_Service_BigtableAdmin_PartialUpdateInstanceRequest');
class_alias(Policy::class, 'Google_Service_BigtableAdmin_Policy');
class_alias(RestoreInfo::class, 'Google_Service_BigtableAdmin_RestoreInfo');
class_alias(RestoreTableMetadata::class, 'Google_Service_BigtableAdmin_RestoreTableMetadata');
class_alias(RestoreTableRequest::class, 'Google_Service_BigtableAdmin_RestoreTableRequest');
class_alias(SetIamPolicyRequest::class, 'Google_Service_BigtableAdmin_SetIamPolicyRequest');
class_alias(SingleClusterRouting::class, 'Google_Service_BigtableAdmin_SingleClusterRouting');
class_alias(Split::class, 'Google_Service_BigtableAdmin_Split');
class_alias(Status::class, 'Google_Service_BigtableAdmin_Status');
class_alias(Table::class, 'Google_Service_BigtableAdmin_Table');
class_alias(TableProgress::class, 'Google_Service_BigtableAdmin_TableProgress');
class_alias(TableStats::class, 'Google_Service_BigtableAdmin_TableStats');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_BigtableAdmin_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_BigtableAdmin_TestIamPermissionsResponse');
class_alias(UndeleteTableMetadata::class, 'Google_Service_BigtableAdmin_UndeleteTableMetadata');
class_alias(UndeleteTableRequest::class, 'Google_Service_BigtableAdmin_UndeleteTableRequest');
class_alias(Union::class, 'Google_Service_BigtableAdmin_Union');
class_alias(UpdateAppProfileMetadata::class, 'Google_Service_BigtableAdmin_UpdateAppProfileMetadata');
class_alias(UpdateClusterMetadata::class, 'Google_Service_BigtableAdmin_UpdateClusterMetadata');
class_alias(UpdateInstanceMetadata::class, 'Google_Service_BigtableAdmin_UpdateInstanceMetadata');
class_alias(UpdateTableMetadata::class, 'Google_Service_BigtableAdmin_UpdateTableMetadata');
