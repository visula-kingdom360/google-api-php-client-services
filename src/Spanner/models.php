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

namespace Google\Service\Spanner;

class Backup extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $database;
  /** @var string */
  public $databaseDialect;
  /** @var EncryptionInfo */
  public $encryptionInfo;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $maxExpireTime;
  /** @var string */
  public $name;
  /** @var string[] */
  public $referencingBackups;
  /** @var string[] */
  public $referencingDatabases;
  /** @var string */
  public $sizeBytes;
  /** @var string */
  public $state;
  /** @var string */
  public $versionTime;
  protected $collection_key = 'referencingDatabases';
  protected $encryptionInfoType = EncryptionInfo::class;
  protected $encryptionInfoDataType = '';
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
  public function setDatabaseDialect($databaseDialect)
  {
    $this->databaseDialect = $databaseDialect;
  }
  /** @return string */
  public function getDatabaseDialect()
  {
    return $this->databaseDialect;
  }
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
  public function setMaxExpireTime($maxExpireTime)
  {
    $this->maxExpireTime = $maxExpireTime;
  }
  /** @return string */
  public function getMaxExpireTime()
  {
    return $this->maxExpireTime;
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
  public function setReferencingBackups($referencingBackups)
  {
    $this->referencingBackups = $referencingBackups;
  }
  /** @return string[] */
  public function getReferencingBackups()
  {
    return $this->referencingBackups;
  }
  /** @param string[] */
  public function setReferencingDatabases($referencingDatabases)
  {
    $this->referencingDatabases = $referencingDatabases;
  }
  /** @return string[] */
  public function getReferencingDatabases()
  {
    return $this->referencingDatabases;
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
  public function setVersionTime($versionTime)
  {
    $this->versionTime = $versionTime;
  }
  /** @return string */
  public function getVersionTime()
  {
    return $this->versionTime;
  }
}

class BackupInfo extends \Google\Model
{
  /** @var string */
  public $backup;
  /** @var string */
  public $createTime;
  /** @var string */
  public $sourceDatabase;
  /** @var string */
  public $versionTime;

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
  public function setVersionTime($versionTime)
  {
    $this->versionTime = $versionTime;
  }
  /** @return string */
  public function getVersionTime()
  {
    return $this->versionTime;
  }
}

class BatchCreateSessionsRequest extends \Google\Model
{
  /** @var int */
  public $sessionCount;
  /** @var Session */
  public $sessionTemplate;
  protected $sessionTemplateType = Session::class;
  protected $sessionTemplateDataType = '';
  /** @param int */
  public function setSessionCount($sessionCount)
  {
    $this->sessionCount = $sessionCount;
  }
  /** @return int */
  public function getSessionCount()
  {
    return $this->sessionCount;
  }
  /** @param Session */
  public function setSessionTemplate(Session $sessionTemplate)
  {
    $this->sessionTemplate = $sessionTemplate;
  }
  /** @return Session */
  public function getSessionTemplate()
  {
    return $this->sessionTemplate;
  }
}

class BatchCreateSessionsResponse extends \Google\Collection
{
  /** @var Session[] */
  public $session;
  protected $collection_key = 'session';
  protected $sessionType = Session::class;
  protected $sessionDataType = 'array';
  /** @param Session[] */
  public function setSession($session)
  {
    $this->session = $session;
  }
  /** @return Session[] */
  public function getSession()
  {
    return $this->session;
  }
}

class BeginTransactionRequest extends \Google\Model
{
  /** @var TransactionOptions */
  public $options;
  /** @var RequestOptions */
  public $requestOptions;
  protected $optionsType = TransactionOptions::class;
  protected $optionsDataType = '';
  protected $requestOptionsType = RequestOptions::class;
  protected $requestOptionsDataType = '';
  /** @param TransactionOptions */
  public function setOptions(TransactionOptions $options)
  {
    $this->options = $options;
  }
  /** @return TransactionOptions */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param RequestOptions */
  public function setRequestOptions(RequestOptions $requestOptions)
  {
    $this->requestOptions = $requestOptions;
  }
  /** @return RequestOptions */
  public function getRequestOptions()
  {
    return $this->requestOptions;
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

class ChildLink extends \Google\Model
{
  /** @var int */
  public $childIndex;
  /** @var string */
  public $type;
  /** @var string */
  public $variable;

  /** @param int */
  public function setChildIndex($childIndex)
  {
    $this->childIndex = $childIndex;
  }
  /** @return int */
  public function getChildIndex()
  {
    return $this->childIndex;
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
  public function setVariable($variable)
  {
    $this->variable = $variable;
  }
  /** @return string */
  public function getVariable()
  {
    return $this->variable;
  }
}

class CommitRequest extends \Google\Collection
{
  /** @var Mutation[] */
  public $mutations;
  /** @var RequestOptions */
  public $requestOptions;
  /** @var bool */
  public $returnCommitStats;
  /** @var TransactionOptions */
  public $singleUseTransaction;
  /** @var string */
  public $transactionId;
  protected $collection_key = 'mutations';
  protected $mutationsType = Mutation::class;
  protected $mutationsDataType = 'array';
  protected $requestOptionsType = RequestOptions::class;
  protected $requestOptionsDataType = '';
  protected $singleUseTransactionType = TransactionOptions::class;
  protected $singleUseTransactionDataType = '';
  /** @param Mutation[] */
  public function setMutations($mutations)
  {
    $this->mutations = $mutations;
  }
  /** @return Mutation[] */
  public function getMutations()
  {
    return $this->mutations;
  }
  /** @param RequestOptions */
  public function setRequestOptions(RequestOptions $requestOptions)
  {
    $this->requestOptions = $requestOptions;
  }
  /** @return RequestOptions */
  public function getRequestOptions()
  {
    return $this->requestOptions;
  }
  /** @param bool */
  public function setReturnCommitStats($returnCommitStats)
  {
    $this->returnCommitStats = $returnCommitStats;
  }
  /** @return bool */
  public function getReturnCommitStats()
  {
    return $this->returnCommitStats;
  }
  /** @param TransactionOptions */
  public function setSingleUseTransaction(TransactionOptions $singleUseTransaction)
  {
    $this->singleUseTransaction = $singleUseTransaction;
  }
  /** @return TransactionOptions */
  public function getSingleUseTransaction()
  {
    return $this->singleUseTransaction;
  }
  /** @param string */
  public function setTransactionId($transactionId)
  {
    $this->transactionId = $transactionId;
  }
  /** @return string */
  public function getTransactionId()
  {
    return $this->transactionId;
  }
}

class CommitResponse extends \Google\Model
{
  /** @var CommitStats */
  public $commitStats;
  /** @var string */
  public $commitTimestamp;
  protected $commitStatsType = CommitStats::class;
  protected $commitStatsDataType = '';
  /** @param CommitStats */
  public function setCommitStats(CommitStats $commitStats)
  {
    $this->commitStats = $commitStats;
  }
  /** @return CommitStats */
  public function getCommitStats()
  {
    return $this->commitStats;
  }
  /** @param string */
  public function setCommitTimestamp($commitTimestamp)
  {
    $this->commitTimestamp = $commitTimestamp;
  }
  /** @return string */
  public function getCommitTimestamp()
  {
    return $this->commitTimestamp;
  }
}

class CommitStats extends \Google\Model
{
  /** @var string */
  public $mutationCount;

  /** @param string */
  public function setMutationCount($mutationCount)
  {
    $this->mutationCount = $mutationCount;
  }
  /** @return string */
  public function getMutationCount()
  {
    return $this->mutationCount;
  }
}

class ContextValue extends \Google\Model
{
  /** @var LocalizedString */
  public $label;
  /** @var string */
  public $severity;
  /** @var string */
  public $unit;
  /** @var float */
  public $value;
  protected $labelType = LocalizedString::class;
  protected $labelDataType = '';
  /** @param LocalizedString */
  public function setLabel(LocalizedString $label)
  {
    $this->label = $label;
  }
  /** @return LocalizedString */
  public function getLabel()
  {
    return $this->label;
  }
  /** @param string */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
  /** @param float */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return float */
  public function getValue()
  {
    return $this->value;
  }
}

class CopyBackupEncryptionConfig extends \Google\Model
{
  /** @var string */
  public $encryptionType;
  /** @var string */
  public $kmsKeyName;

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

class CopyBackupMetadata extends \Google\Model
{
  /** @var string */
  public $cancelTime;
  /** @var string */
  public $name;
  /** @var OperationProgress */
  public $progress;
  /** @var string */
  public $sourceBackup;
  protected $progressType = OperationProgress::class;
  protected $progressDataType = '';
  /** @param string */
  public function setCancelTime($cancelTime)
  {
    $this->cancelTime = $cancelTime;
  }
  /** @return string */
  public function getCancelTime()
  {
    return $this->cancelTime;
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

class CopyBackupRequest extends \Google\Model
{
  /** @var string */
  public $backupId;
  /** @var CopyBackupEncryptionConfig */
  public $encryptionConfig;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $sourceBackup;
  protected $encryptionConfigType = CopyBackupEncryptionConfig::class;
  protected $encryptionConfigDataType = '';
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
  /** @param CopyBackupEncryptionConfig */
  public function setEncryptionConfig(CopyBackupEncryptionConfig $encryptionConfig)
  {
    $this->encryptionConfig = $encryptionConfig;
  }
  /** @return CopyBackupEncryptionConfig */
  public function getEncryptionConfig()
  {
    return $this->encryptionConfig;
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
  public $cancelTime;
  /** @var string */
  public $database;
  /** @var string */
  public $name;
  /** @var OperationProgress */
  public $progress;
  protected $progressType = OperationProgress::class;
  protected $progressDataType = '';
  /** @param string */
  public function setCancelTime($cancelTime)
  {
    $this->cancelTime = $cancelTime;
  }
  /** @return string */
  public function getCancelTime()
  {
    return $this->cancelTime;
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

class CreateDatabaseMetadata extends \Google\Model
{
  /** @var string */
  public $database;

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
}

class CreateDatabaseRequest extends \Google\Collection
{
  /** @var string */
  public $createStatement;
  /** @var string */
  public $databaseDialect;
  /** @var EncryptionConfig */
  public $encryptionConfig;
  /** @var string[] */
  public $extraStatements;
  protected $collection_key = 'extraStatements';
  protected $encryptionConfigType = EncryptionConfig::class;
  protected $encryptionConfigDataType = '';
  /** @param string */
  public function setCreateStatement($createStatement)
  {
    $this->createStatement = $createStatement;
  }
  /** @return string */
  public function getCreateStatement()
  {
    return $this->createStatement;
  }
  /** @param string */
  public function setDatabaseDialect($databaseDialect)
  {
    $this->databaseDialect = $databaseDialect;
  }
  /** @return string */
  public function getDatabaseDialect()
  {
    return $this->databaseDialect;
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
  /** @param string[] */
  public function setExtraStatements($extraStatements)
  {
    $this->extraStatements = $extraStatements;
  }
  /** @return string[] */
  public function getExtraStatements()
  {
    return $this->extraStatements;
  }
}

class CreateInstanceConfigMetadata extends \Google\Model
{
  /** @var string */
  public $cancelTime;
  /** @var InstanceConfig */
  public $instanceConfig;
  /** @var InstanceOperationProgress */
  public $progress;
  protected $instanceConfigType = InstanceConfig::class;
  protected $instanceConfigDataType = '';
  protected $progressType = InstanceOperationProgress::class;
  protected $progressDataType = '';
  /** @param string */
  public function setCancelTime($cancelTime)
  {
    $this->cancelTime = $cancelTime;
  }
  /** @return string */
  public function getCancelTime()
  {
    return $this->cancelTime;
  }
  /** @param InstanceConfig */
  public function setInstanceConfig(InstanceConfig $instanceConfig)
  {
    $this->instanceConfig = $instanceConfig;
  }
  /** @return InstanceConfig */
  public function getInstanceConfig()
  {
    return $this->instanceConfig;
  }
  /** @param InstanceOperationProgress */
  public function setProgress(InstanceOperationProgress $progress)
  {
    $this->progress = $progress;
  }
  /** @return InstanceOperationProgress */
  public function getProgress()
  {
    return $this->progress;
  }
}

class CreateInstanceConfigRequest extends \Google\Model
{
  /** @var InstanceConfig */
  public $instanceConfig;
  /** @var string */
  public $instanceConfigId;
  /** @var bool */
  public $validateOnly;
  protected $instanceConfigType = InstanceConfig::class;
  protected $instanceConfigDataType = '';
  /** @param InstanceConfig */
  public function setInstanceConfig(InstanceConfig $instanceConfig)
  {
    $this->instanceConfig = $instanceConfig;
  }
  /** @return InstanceConfig */
  public function getInstanceConfig()
  {
    return $this->instanceConfig;
  }
  /** @param string */
  public function setInstanceConfigId($instanceConfigId)
  {
    $this->instanceConfigId = $instanceConfigId;
  }
  /** @return string */
  public function getInstanceConfigId()
  {
    return $this->instanceConfigId;
  }
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

class CreateInstanceMetadata extends \Google\Model
{
  /** @var string */
  public $cancelTime;
  /** @var string */
  public $endTime;
  /** @var Instance */
  public $instance;
  /** @var string */
  public $startTime;
  protected $instanceType = Instance::class;
  protected $instanceDataType = '';
  /** @param string */
  public function setCancelTime($cancelTime)
  {
    $this->cancelTime = $cancelTime;
  }
  /** @return string */
  public function getCancelTime()
  {
    return $this->cancelTime;
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

class CreateInstanceRequest extends \Google\Model
{
  /** @var Instance */
  public $instance;
  /** @var string */
  public $instanceId;
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
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
}

class CreateSessionRequest extends \Google\Model
{
  /** @var Session */
  public $session;
  protected $sessionType = Session::class;
  protected $sessionDataType = '';
  /** @param Session */
  public function setSession(Session $session)
  {
    $this->session = $session;
  }
  /** @return Session */
  public function getSession()
  {
    return $this->session;
  }
}

class Database extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $databaseDialect;
  /** @var string */
  public $defaultLeader;
  /** @var string */
  public $earliestVersionTime;
  /** @var EncryptionConfig */
  public $encryptionConfig;
  /** @var EncryptionInfo[] */
  public $encryptionInfo;
  /** @var string */
  public $name;
  /** @var RestoreInfo */
  public $restoreInfo;
  /** @var string */
  public $state;
  /** @var string */
  public $versionRetentionPeriod;
  protected $collection_key = 'encryptionInfo';
  protected $encryptionConfigType = EncryptionConfig::class;
  protected $encryptionConfigDataType = '';
  protected $encryptionInfoType = EncryptionInfo::class;
  protected $encryptionInfoDataType = 'array';
  protected $restoreInfoType = RestoreInfo::class;
  protected $restoreInfoDataType = '';
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
  public function setDatabaseDialect($databaseDialect)
  {
    $this->databaseDialect = $databaseDialect;
  }
  /** @return string */
  public function getDatabaseDialect()
  {
    return $this->databaseDialect;
  }
  /** @param string */
  public function setDefaultLeader($defaultLeader)
  {
    $this->defaultLeader = $defaultLeader;
  }
  /** @return string */
  public function getDefaultLeader()
  {
    return $this->defaultLeader;
  }
  /** @param string */
  public function setEarliestVersionTime($earliestVersionTime)
  {
    $this->earliestVersionTime = $earliestVersionTime;
  }
  /** @return string */
  public function getEarliestVersionTime()
  {
    return $this->earliestVersionTime;
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
  public function setVersionRetentionPeriod($versionRetentionPeriod)
  {
    $this->versionRetentionPeriod = $versionRetentionPeriod;
  }
  /** @return string */
  public function getVersionRetentionPeriod()
  {
    return $this->versionRetentionPeriod;
  }
}

class DatabaseRole extends \Google\Model
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

class Delete extends \Google\Model
{
  /** @var KeySet */
  public $keySet;
  /** @var string */
  public $table;
  protected $keySetType = KeySet::class;
  protected $keySetDataType = '';
  /** @param KeySet */
  public function setKeySet(KeySet $keySet)
  {
    $this->keySet = $keySet;
  }
  /** @return KeySet */
  public function getKeySet()
  {
    return $this->keySet;
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

class DerivedMetric extends \Google\Model
{
  /** @var LocalizedString */
  public $denominator;
  /** @var LocalizedString */
  public $numerator;
  protected $denominatorType = LocalizedString::class;
  protected $denominatorDataType = '';
  protected $numeratorType = LocalizedString::class;
  protected $numeratorDataType = '';
  /** @param LocalizedString */
  public function setDenominator(LocalizedString $denominator)
  {
    $this->denominator = $denominator;
  }
  /** @return LocalizedString */
  public function getDenominator()
  {
    return $this->denominator;
  }
  /** @param LocalizedString */
  public function setNumerator(LocalizedString $numerator)
  {
    $this->numerator = $numerator;
  }
  /** @return LocalizedString */
  public function getNumerator()
  {
    return $this->numerator;
  }
}

class DiagnosticMessage extends \Google\Model
{
  /** @var LocalizedString */
  public $info;
  /** @var LocalizedString */
  public $metric;
  /** @var bool */
  public $metricSpecific;
  /** @var string */
  public $severity;
  /** @var LocalizedString */
  public $shortMessage;
  protected $infoType = LocalizedString::class;
  protected $infoDataType = '';
  protected $metricType = LocalizedString::class;
  protected $metricDataType = '';
  protected $shortMessageType = LocalizedString::class;
  protected $shortMessageDataType = '';
  /** @param LocalizedString */
  public function setInfo(LocalizedString $info)
  {
    $this->info = $info;
  }
  /** @return LocalizedString */
  public function getInfo()
  {
    return $this->info;
  }
  /** @param LocalizedString */
  public function setMetric(LocalizedString $metric)
  {
    $this->metric = $metric;
  }
  /** @return LocalizedString */
  public function getMetric()
  {
    return $this->metric;
  }
  /** @param bool */
  public function setMetricSpecific($metricSpecific)
  {
    $this->metricSpecific = $metricSpecific;
  }
  /** @return bool */
  public function getMetricSpecific()
  {
    return $this->metricSpecific;
  }
  /** @param string */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
  /** @param LocalizedString */
  public function setShortMessage(LocalizedString $shortMessage)
  {
    $this->shortMessage = $shortMessage;
  }
  /** @return LocalizedString */
  public function getShortMessage()
  {
    return $this->shortMessage;
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

class ExecuteBatchDmlRequest extends \Google\Collection
{
  /** @var RequestOptions */
  public $requestOptions;
  /** @var string */
  public $seqno;
  /** @var Statement[] */
  public $statements;
  /** @var TransactionSelector */
  public $transaction;
  protected $collection_key = 'statements';
  protected $requestOptionsType = RequestOptions::class;
  protected $requestOptionsDataType = '';
  protected $statementsType = Statement::class;
  protected $statementsDataType = 'array';
  protected $transactionType = TransactionSelector::class;
  protected $transactionDataType = '';
  /** @param RequestOptions */
  public function setRequestOptions(RequestOptions $requestOptions)
  {
    $this->requestOptions = $requestOptions;
  }
  /** @return RequestOptions */
  public function getRequestOptions()
  {
    return $this->requestOptions;
  }
  /** @param string */
  public function setSeqno($seqno)
  {
    $this->seqno = $seqno;
  }
  /** @return string */
  public function getSeqno()
  {
    return $this->seqno;
  }
  /** @param Statement[] */
  public function setStatements($statements)
  {
    $this->statements = $statements;
  }
  /** @return Statement[] */
  public function getStatements()
  {
    return $this->statements;
  }
  /** @param TransactionSelector */
  public function setTransaction(TransactionSelector $transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return TransactionSelector */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class ExecuteBatchDmlResponse extends \Google\Collection
{
  /** @var ResultSet[] */
  public $resultSets;
  /** @var Status */
  public $status;
  protected $collection_key = 'resultSets';
  protected $resultSetsType = ResultSet::class;
  protected $resultSetsDataType = 'array';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param ResultSet[] */
  public function setResultSets($resultSets)
  {
    $this->resultSets = $resultSets;
  }
  /** @return ResultSet[] */
  public function getResultSets()
  {
    return $this->resultSets;
  }
  /** @param Status */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /** @return Status */
  public function getStatus()
  {
    return $this->status;
  }
}

class ExecuteSqlRequest extends \Google\Model
{
  /** @var Type[] */
  public $paramTypes;
  /** @var array[] */
  public $params;
  /** @var string */
  public $partitionToken;
  /** @var string */
  public $queryMode;
  /** @var QueryOptions */
  public $queryOptions;
  /** @var RequestOptions */
  public $requestOptions;
  /** @var string */
  public $resumeToken;
  /** @var string */
  public $seqno;
  /** @var string */
  public $sql;
  /** @var TransactionSelector */
  public $transaction;
  protected $paramTypesType = Type::class;
  protected $paramTypesDataType = 'map';
  protected $queryOptionsType = QueryOptions::class;
  protected $queryOptionsDataType = '';
  protected $requestOptionsType = RequestOptions::class;
  protected $requestOptionsDataType = '';
  protected $transactionType = TransactionSelector::class;
  protected $transactionDataType = '';
  /** @param Type[] */
  public function setParamTypes($paramTypes)
  {
    $this->paramTypes = $paramTypes;
  }
  /** @return Type[] */
  public function getParamTypes()
  {
    return $this->paramTypes;
  }
  /** @param array[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return array[] */
  public function getParams()
  {
    return $this->params;
  }
  /** @param string */
  public function setPartitionToken($partitionToken)
  {
    $this->partitionToken = $partitionToken;
  }
  /** @return string */
  public function getPartitionToken()
  {
    return $this->partitionToken;
  }
  /** @param string */
  public function setQueryMode($queryMode)
  {
    $this->queryMode = $queryMode;
  }
  /** @return string */
  public function getQueryMode()
  {
    return $this->queryMode;
  }
  /** @param QueryOptions */
  public function setQueryOptions(QueryOptions $queryOptions)
  {
    $this->queryOptions = $queryOptions;
  }
  /** @return QueryOptions */
  public function getQueryOptions()
  {
    return $this->queryOptions;
  }
  /** @param RequestOptions */
  public function setRequestOptions(RequestOptions $requestOptions)
  {
    $this->requestOptions = $requestOptions;
  }
  /** @return RequestOptions */
  public function getRequestOptions()
  {
    return $this->requestOptions;
  }
  /** @param string */
  public function setResumeToken($resumeToken)
  {
    $this->resumeToken = $resumeToken;
  }
  /** @return string */
  public function getResumeToken()
  {
    return $this->resumeToken;
  }
  /** @param string */
  public function setSeqno($seqno)
  {
    $this->seqno = $seqno;
  }
  /** @return string */
  public function getSeqno()
  {
    return $this->seqno;
  }
  /** @param string */
  public function setSql($sql)
  {
    $this->sql = $sql;
  }
  /** @return string */
  public function getSql()
  {
    return $this->sql;
  }
  /** @param TransactionSelector */
  public function setTransaction(TransactionSelector $transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return TransactionSelector */
  public function getTransaction()
  {
    return $this->transaction;
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

class Field extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var Type */
  public $type;
  protected $typeType = Type::class;
  protected $typeDataType = '';
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
  /** @param Type */
  public function setType(Type $type)
  {
    $this->type = $type;
  }
  /** @return Type */
  public function getType()
  {
    return $this->type;
  }
}

class FreeInstanceMetadata extends \Google\Model
{
  /** @var string */
  public $expireBehavior;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $upgradeTime;

  /** @param string */
  public function setExpireBehavior($expireBehavior)
  {
    $this->expireBehavior = $expireBehavior;
  }
  /** @return string */
  public function getExpireBehavior()
  {
    return $this->expireBehavior;
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
  public function setUpgradeTime($upgradeTime)
  {
    $this->upgradeTime = $upgradeTime;
  }
  /** @return string */
  public function getUpgradeTime()
  {
    return $this->upgradeTime;
  }
}

class GetDatabaseDdlResponse extends \Google\Collection
{
  /** @var string[] */
  public $statements;
  protected $collection_key = 'statements';
  /** @param string[] */
  public function setStatements($statements)
  {
    $this->statements = $statements;
  }
  /** @return string[] */
  public function getStatements()
  {
    return $this->statements;
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

class IndexedHotKey extends \Google\Model
{
  /** @var int[] */
  public $sparseHotKeys;

  /** @param int[] */
  public function setSparseHotKeys($sparseHotKeys)
  {
    $this->sparseHotKeys = $sparseHotKeys;
  }
  /** @return int[] */
  public function getSparseHotKeys()
  {
    return $this->sparseHotKeys;
  }
}

class IndexedKeyRangeInfos extends \Google\Model
{
  /** @var KeyRangeInfos[] */
  public $keyRangeInfos;
  protected $keyRangeInfosType = KeyRangeInfos::class;
  protected $keyRangeInfosDataType = 'map';
  /** @param KeyRangeInfos[] */
  public function setKeyRangeInfos($keyRangeInfos)
  {
    $this->keyRangeInfos = $keyRangeInfos;
  }
  /** @return KeyRangeInfos[] */
  public function getKeyRangeInfos()
  {
    return $this->keyRangeInfos;
  }
}

class Instance extends \Google\Collection
{
  /** @var string */
  public $config;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $endpointUris;
  /** @var FreeInstanceMetadata */
  public $freeInstanceMetadata;
  /** @var string */
  public $instanceType;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var int */
  public $nodeCount;
  /** @var int */
  public $processingUnits;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'endpointUris';
  protected $freeInstanceMetadataType = FreeInstanceMetadata::class;
  protected $freeInstanceMetadataDataType = '';
  /** @param string */
  public function setConfig($config)
  {
    $this->config = $config;
  }
  /** @return string */
  public function getConfig()
  {
    return $this->config;
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
  /** @param string[] */
  public function setEndpointUris($endpointUris)
  {
    $this->endpointUris = $endpointUris;
  }
  /** @return string[] */
  public function getEndpointUris()
  {
    return $this->endpointUris;
  }
  /** @param FreeInstanceMetadata */
  public function setFreeInstanceMetadata(FreeInstanceMetadata $freeInstanceMetadata)
  {
    $this->freeInstanceMetadata = $freeInstanceMetadata;
  }
  /** @return FreeInstanceMetadata */
  public function getFreeInstanceMetadata()
  {
    return $this->freeInstanceMetadata;
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
  public function setNodeCount($nodeCount)
  {
    $this->nodeCount = $nodeCount;
  }
  /** @return int */
  public function getNodeCount()
  {
    return $this->nodeCount;
  }
  /** @param int */
  public function setProcessingUnits($processingUnits)
  {
    $this->processingUnits = $processingUnits;
  }
  /** @return int */
  public function getProcessingUnits()
  {
    return $this->processingUnits;
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

class InstanceConfig extends \Google\Collection
{
  /** @var string */
  public $baseConfig;
  /** @var string */
  public $configType;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var string */
  public $freeInstanceAvailability;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $leaderOptions;
  /** @var string */
  public $name;
  /** @var ReplicaInfo[] */
  public $optionalReplicas;
  /** @var bool */
  public $reconciling;
  /** @var ReplicaInfo[] */
  public $replicas;
  /** @var string */
  public $state;
  protected $collection_key = 'replicas';
  protected $optionalReplicasType = ReplicaInfo::class;
  protected $optionalReplicasDataType = 'array';
  protected $replicasType = ReplicaInfo::class;
  protected $replicasDataType = 'array';
  /** @param string */
  public function setBaseConfig($baseConfig)
  {
    $this->baseConfig = $baseConfig;
  }
  /** @return string */
  public function getBaseConfig()
  {
    return $this->baseConfig;
  }
  /** @param string */
  public function setConfigType($configType)
  {
    $this->configType = $configType;
  }
  /** @return string */
  public function getConfigType()
  {
    return $this->configType;
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
  public function setFreeInstanceAvailability($freeInstanceAvailability)
  {
    $this->freeInstanceAvailability = $freeInstanceAvailability;
  }
  /** @return string */
  public function getFreeInstanceAvailability()
  {
    return $this->freeInstanceAvailability;
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
  public function setLeaderOptions($leaderOptions)
  {
    $this->leaderOptions = $leaderOptions;
  }
  /** @return string[] */
  public function getLeaderOptions()
  {
    return $this->leaderOptions;
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
  /** @param ReplicaInfo[] */
  public function setOptionalReplicas($optionalReplicas)
  {
    $this->optionalReplicas = $optionalReplicas;
  }
  /** @return ReplicaInfo[] */
  public function getOptionalReplicas()
  {
    return $this->optionalReplicas;
  }
  /** @param bool */
  public function setReconciling($reconciling)
  {
    $this->reconciling = $reconciling;
  }
  /** @return bool */
  public function getReconciling()
  {
    return $this->reconciling;
  }
  /** @param ReplicaInfo[] */
  public function setReplicas($replicas)
  {
    $this->replicas = $replicas;
  }
  /** @return ReplicaInfo[] */
  public function getReplicas()
  {
    return $this->replicas;
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

class InstanceOperationProgress extends \Google\Model
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

class KeyRange extends \Google\Collection
{
  /** @var array[] */
  public $endClosed;
  /** @var array[] */
  public $endOpen;
  /** @var array[] */
  public $startClosed;
  /** @var array[] */
  public $startOpen;
  protected $collection_key = 'startOpen';
  /** @param array[] */
  public function setEndClosed($endClosed)
  {
    $this->endClosed = $endClosed;
  }
  /** @return array[] */
  public function getEndClosed()
  {
    return $this->endClosed;
  }
  /** @param array[] */
  public function setEndOpen($endOpen)
  {
    $this->endOpen = $endOpen;
  }
  /** @return array[] */
  public function getEndOpen()
  {
    return $this->endOpen;
  }
  /** @param array[] */
  public function setStartClosed($startClosed)
  {
    $this->startClosed = $startClosed;
  }
  /** @return array[] */
  public function getStartClosed()
  {
    return $this->startClosed;
  }
  /** @param array[] */
  public function setStartOpen($startOpen)
  {
    $this->startOpen = $startOpen;
  }
  /** @return array[] */
  public function getStartOpen()
  {
    return $this->startOpen;
  }
}

class KeyRangeInfo extends \Google\Collection
{
  /** @var ContextValue[] */
  public $contextValues;
  /** @var int */
  public $endKeyIndex;
  /** @var LocalizedString */
  public $info;
  /** @var string */
  public $keysCount;
  /** @var LocalizedString */
  public $metric;
  /** @var int */
  public $startKeyIndex;
  /** @var string */
  public $timeOffset;
  /** @var LocalizedString */
  public $unit;
  /** @var float */
  public $value;
  protected $collection_key = 'contextValues';
  protected $contextValuesType = ContextValue::class;
  protected $contextValuesDataType = 'array';
  protected $infoType = LocalizedString::class;
  protected $infoDataType = '';
  protected $metricType = LocalizedString::class;
  protected $metricDataType = '';
  protected $unitType = LocalizedString::class;
  protected $unitDataType = '';
  /** @param ContextValue[] */
  public function setContextValues($contextValues)
  {
    $this->contextValues = $contextValues;
  }
  /** @return ContextValue[] */
  public function getContextValues()
  {
    return $this->contextValues;
  }
  /** @param int */
  public function setEndKeyIndex($endKeyIndex)
  {
    $this->endKeyIndex = $endKeyIndex;
  }
  /** @return int */
  public function getEndKeyIndex()
  {
    return $this->endKeyIndex;
  }
  /** @param LocalizedString */
  public function setInfo(LocalizedString $info)
  {
    $this->info = $info;
  }
  /** @return LocalizedString */
  public function getInfo()
  {
    return $this->info;
  }
  /** @param string */
  public function setKeysCount($keysCount)
  {
    $this->keysCount = $keysCount;
  }
  /** @return string */
  public function getKeysCount()
  {
    return $this->keysCount;
  }
  /** @param LocalizedString */
  public function setMetric(LocalizedString $metric)
  {
    $this->metric = $metric;
  }
  /** @return LocalizedString */
  public function getMetric()
  {
    return $this->metric;
  }
  /** @param int */
  public function setStartKeyIndex($startKeyIndex)
  {
    $this->startKeyIndex = $startKeyIndex;
  }
  /** @return int */
  public function getStartKeyIndex()
  {
    return $this->startKeyIndex;
  }
  /** @param string */
  public function setTimeOffset($timeOffset)
  {
    $this->timeOffset = $timeOffset;
  }
  /** @return string */
  public function getTimeOffset()
  {
    return $this->timeOffset;
  }
  /** @param LocalizedString */
  public function setUnit(LocalizedString $unit)
  {
    $this->unit = $unit;
  }
  /** @return LocalizedString */
  public function getUnit()
  {
    return $this->unit;
  }
  /** @param float */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return float */
  public function getValue()
  {
    return $this->value;
  }
}

class KeyRangeInfos extends \Google\Collection
{
  /** @var KeyRangeInfo[] */
  public $infos;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'infos';
  protected $infosType = KeyRangeInfo::class;
  protected $infosDataType = 'array';
  /** @param KeyRangeInfo[] */
  public function setInfos($infos)
  {
    $this->infos = $infos;
  }
  /** @return KeyRangeInfo[] */
  public function getInfos()
  {
    return $this->infos;
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

class KeySet extends \Google\Collection
{
  /** @var bool */
  public $all;
  /** @var array[] */
  public $keys;
  /** @var KeyRange[] */
  public $ranges;
  protected $collection_key = 'ranges';
  protected $rangesType = KeyRange::class;
  protected $rangesDataType = 'array';
  /** @param bool */
  public function setAll($all)
  {
    $this->all = $all;
  }
  /** @return bool */
  public function getAll()
  {
    return $this->all;
  }
  /** @param array[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return array[] */
  public function getKeys()
  {
    return $this->keys;
  }
  /** @param KeyRange[] */
  public function setRanges($ranges)
  {
    $this->ranges = $ranges;
  }
  /** @return KeyRange[] */
  public function getRanges()
  {
    return $this->ranges;
  }
}

class ListBackupOperationsResponse extends \Google\Collection
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

class ListDatabaseOperationsResponse extends \Google\Collection
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

class ListDatabaseRolesResponse extends \Google\Collection
{
  /** @var DatabaseRole[] */
  public $databaseRoles;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'databaseRoles';
  protected $databaseRolesType = DatabaseRole::class;
  protected $databaseRolesDataType = 'array';
  /** @param DatabaseRole[] */
  public function setDatabaseRoles($databaseRoles)
  {
    $this->databaseRoles = $databaseRoles;
  }
  /** @return DatabaseRole[] */
  public function getDatabaseRoles()
  {
    return $this->databaseRoles;
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

class ListDatabasesResponse extends \Google\Collection
{
  /** @var Database[] */
  public $databases;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'databases';
  protected $databasesType = Database::class;
  protected $databasesDataType = 'array';
  /** @param Database[] */
  public function setDatabases($databases)
  {
    $this->databases = $databases;
  }
  /** @return Database[] */
  public function getDatabases()
  {
    return $this->databases;
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

class ListInstanceConfigOperationsResponse extends \Google\Collection
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

class ListInstanceConfigsResponse extends \Google\Collection
{
  /** @var InstanceConfig[] */
  public $instanceConfigs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'instanceConfigs';
  protected $instanceConfigsType = InstanceConfig::class;
  protected $instanceConfigsDataType = 'array';
  /** @param InstanceConfig[] */
  public function setInstanceConfigs($instanceConfigs)
  {
    $this->instanceConfigs = $instanceConfigs;
  }
  /** @return InstanceConfig[] */
  public function getInstanceConfigs()
  {
    return $this->instanceConfigs;
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

class ListScansResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Scan[] */
  public $scans;
  protected $collection_key = 'scans';
  protected $scansType = Scan::class;
  protected $scansDataType = 'array';
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
  /** @param Scan[] */
  public function setScans($scans)
  {
    $this->scans = $scans;
  }
  /** @return Scan[] */
  public function getScans()
  {
    return $this->scans;
  }
}

class ListSessionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Session[] */
  public $sessions;
  protected $collection_key = 'sessions';
  protected $sessionsType = Session::class;
  protected $sessionsDataType = 'array';
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
  /** @param Session[] */
  public function setSessions($sessions)
  {
    $this->sessions = $sessions;
  }
  /** @return Session[] */
  public function getSessions()
  {
    return $this->sessions;
  }
}

class LocalizedString extends \Google\Model
{
  /** @var string[] */
  public $args;
  /** @var string */
  public $message;
  /** @var string */
  public $token;

  /** @param string[] */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /** @return string[] */
  public function getArgs()
  {
    return $this->args;
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
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
  }
}

class Metric extends \Google\Model
{
  /** @var string */
  public $aggregation;
  /** @var LocalizedString */
  public $category;
  /** @var DerivedMetric */
  public $derived;
  /** @var LocalizedString */
  public $displayLabel;
  /** @var bool */
  public $hasNonzeroData;
  /** @var float */
  public $hotValue;
  /** @var IndexedHotKey[] */
  public $indexedHotKeys;
  /** @var IndexedKeyRangeInfos[] */
  public $indexedKeyRangeInfos;
  /** @var LocalizedString */
  public $info;
  /** @var MetricMatrix */
  public $matrix;
  /** @var LocalizedString */
  public $unit;
  /** @var bool */
  public $visible;
  protected $categoryType = LocalizedString::class;
  protected $categoryDataType = '';
  protected $derivedType = DerivedMetric::class;
  protected $derivedDataType = '';
  protected $displayLabelType = LocalizedString::class;
  protected $displayLabelDataType = '';
  protected $indexedHotKeysType = IndexedHotKey::class;
  protected $indexedHotKeysDataType = 'map';
  protected $indexedKeyRangeInfosType = IndexedKeyRangeInfos::class;
  protected $indexedKeyRangeInfosDataType = 'map';
  protected $infoType = LocalizedString::class;
  protected $infoDataType = '';
  protected $matrixType = MetricMatrix::class;
  protected $matrixDataType = '';
  protected $unitType = LocalizedString::class;
  protected $unitDataType = '';
  /** @param string */
  public function setAggregation($aggregation)
  {
    $this->aggregation = $aggregation;
  }
  /** @return string */
  public function getAggregation()
  {
    return $this->aggregation;
  }
  /** @param LocalizedString */
  public function setCategory(LocalizedString $category)
  {
    $this->category = $category;
  }
  /** @return LocalizedString */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param DerivedMetric */
  public function setDerived(DerivedMetric $derived)
  {
    $this->derived = $derived;
  }
  /** @return DerivedMetric */
  public function getDerived()
  {
    return $this->derived;
  }
  /** @param LocalizedString */
  public function setDisplayLabel(LocalizedString $displayLabel)
  {
    $this->displayLabel = $displayLabel;
  }
  /** @return LocalizedString */
  public function getDisplayLabel()
  {
    return $this->displayLabel;
  }
  /** @param bool */
  public function setHasNonzeroData($hasNonzeroData)
  {
    $this->hasNonzeroData = $hasNonzeroData;
  }
  /** @return bool */
  public function getHasNonzeroData()
  {
    return $this->hasNonzeroData;
  }
  /** @param float */
  public function setHotValue($hotValue)
  {
    $this->hotValue = $hotValue;
  }
  /** @return float */
  public function getHotValue()
  {
    return $this->hotValue;
  }
  /** @param IndexedHotKey[] */
  public function setIndexedHotKeys($indexedHotKeys)
  {
    $this->indexedHotKeys = $indexedHotKeys;
  }
  /** @return IndexedHotKey[] */
  public function getIndexedHotKeys()
  {
    return $this->indexedHotKeys;
  }
  /** @param IndexedKeyRangeInfos[] */
  public function setIndexedKeyRangeInfos($indexedKeyRangeInfos)
  {
    $this->indexedKeyRangeInfos = $indexedKeyRangeInfos;
  }
  /** @return IndexedKeyRangeInfos[] */
  public function getIndexedKeyRangeInfos()
  {
    return $this->indexedKeyRangeInfos;
  }
  /** @param LocalizedString */
  public function setInfo(LocalizedString $info)
  {
    $this->info = $info;
  }
  /** @return LocalizedString */
  public function getInfo()
  {
    return $this->info;
  }
  /** @param MetricMatrix */
  public function setMatrix(MetricMatrix $matrix)
  {
    $this->matrix = $matrix;
  }
  /** @return MetricMatrix */
  public function getMatrix()
  {
    return $this->matrix;
  }
  /** @param LocalizedString */
  public function setUnit(LocalizedString $unit)
  {
    $this->unit = $unit;
  }
  /** @return LocalizedString */
  public function getUnit()
  {
    return $this->unit;
  }
  /** @param bool */
  public function setVisible($visible)
  {
    $this->visible = $visible;
  }
  /** @return bool */
  public function getVisible()
  {
    return $this->visible;
  }
}

class MetricMatrix extends \Google\Collection
{
  /** @var MetricMatrixRow[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = MetricMatrixRow::class;
  protected $rowsDataType = 'array';
  /** @param MetricMatrixRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return MetricMatrixRow[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class MetricMatrixRow extends \Google\Collection
{
  /** @var float[] */
  public $cols;
  protected $collection_key = 'cols';
  /** @param float[] */
  public function setCols($cols)
  {
    $this->cols = $cols;
  }
  /** @return float[] */
  public function getCols()
  {
    return $this->cols;
  }
}

class Mutation extends \Google\Model
{
  /** @var Delete */
  public $delete;
  /** @var Write */
  public $insert;
  /** @var Write */
  public $insertOrUpdate;
  /** @var Write */
  public $replace;
  /** @var Write */
  public $update;
  protected $deleteType = Delete::class;
  protected $deleteDataType = '';
  protected $insertType = Write::class;
  protected $insertDataType = '';
  protected $insertOrUpdateType = Write::class;
  protected $insertOrUpdateDataType = '';
  protected $replaceType = Write::class;
  protected $replaceDataType = '';
  protected $updateType = Write::class;
  protected $updateDataType = '';
  /** @param Delete */
  public function setDelete(Delete $delete)
  {
    $this->delete = $delete;
  }
  /** @return Delete */
  public function getDelete()
  {
    return $this->delete;
  }
  /** @param Write */
  public function setInsert(Write $insert)
  {
    $this->insert = $insert;
  }
  /** @return Write */
  public function getInsert()
  {
    return $this->insert;
  }
  /** @param Write */
  public function setInsertOrUpdate(Write $insertOrUpdate)
  {
    $this->insertOrUpdate = $insertOrUpdate;
  }
  /** @return Write */
  public function getInsertOrUpdate()
  {
    return $this->insertOrUpdate;
  }
  /** @param Write */
  public function setReplace(Write $replace)
  {
    $this->replace = $replace;
  }
  /** @return Write */
  public function getReplace()
  {
    return $this->replace;
  }
  /** @param Write */
  public function setUpdate(Write $update)
  {
    $this->update = $update;
  }
  /** @return Write */
  public function getUpdate()
  {
    return $this->update;
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

class OptimizeRestoredDatabaseMetadata extends \Google\Model
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

class PartialResultSet extends \Google\Collection
{
  /** @var bool */
  public $chunkedValue;
  /** @var ResultSetMetadata */
  public $metadata;
  /** @var string */
  public $resumeToken;
  /** @var ResultSetStats */
  public $stats;
  /** @var array[] */
  public $values;
  protected $collection_key = 'values';
  protected $metadataType = ResultSetMetadata::class;
  protected $metadataDataType = '';
  protected $statsType = ResultSetStats::class;
  protected $statsDataType = '';
  /** @param bool */
  public function setChunkedValue($chunkedValue)
  {
    $this->chunkedValue = $chunkedValue;
  }
  /** @return bool */
  public function getChunkedValue()
  {
    return $this->chunkedValue;
  }
  /** @param ResultSetMetadata */
  public function setMetadata(ResultSetMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ResultSetMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setResumeToken($resumeToken)
  {
    $this->resumeToken = $resumeToken;
  }
  /** @return string */
  public function getResumeToken()
  {
    return $this->resumeToken;
  }
  /** @param ResultSetStats */
  public function setStats(ResultSetStats $stats)
  {
    $this->stats = $stats;
  }
  /** @return ResultSetStats */
  public function getStats()
  {
    return $this->stats;
  }
  /** @param array[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return array[] */
  public function getValues()
  {
    return $this->values;
  }
}

class Partition extends \Google\Model
{
  /** @var string */
  public $partitionToken;

  /** @param string */
  public function setPartitionToken($partitionToken)
  {
    $this->partitionToken = $partitionToken;
  }
  /** @return string */
  public function getPartitionToken()
  {
    return $this->partitionToken;
  }
}

class PartitionOptions extends \Google\Model
{
  /** @var string */
  public $maxPartitions;
  /** @var string */
  public $partitionSizeBytes;

  /** @param string */
  public function setMaxPartitions($maxPartitions)
  {
    $this->maxPartitions = $maxPartitions;
  }
  /** @return string */
  public function getMaxPartitions()
  {
    return $this->maxPartitions;
  }
  /** @param string */
  public function setPartitionSizeBytes($partitionSizeBytes)
  {
    $this->partitionSizeBytes = $partitionSizeBytes;
  }
  /** @return string */
  public function getPartitionSizeBytes()
  {
    return $this->partitionSizeBytes;
  }
}

class PartitionQueryRequest extends \Google\Model
{
  /** @var Type[] */
  public $paramTypes;
  /** @var array[] */
  public $params;
  /** @var PartitionOptions */
  public $partitionOptions;
  /** @var string */
  public $sql;
  /** @var TransactionSelector */
  public $transaction;
  protected $paramTypesType = Type::class;
  protected $paramTypesDataType = 'map';
  protected $partitionOptionsType = PartitionOptions::class;
  protected $partitionOptionsDataType = '';
  protected $transactionType = TransactionSelector::class;
  protected $transactionDataType = '';
  /** @param Type[] */
  public function setParamTypes($paramTypes)
  {
    $this->paramTypes = $paramTypes;
  }
  /** @return Type[] */
  public function getParamTypes()
  {
    return $this->paramTypes;
  }
  /** @param array[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return array[] */
  public function getParams()
  {
    return $this->params;
  }
  /** @param PartitionOptions */
  public function setPartitionOptions(PartitionOptions $partitionOptions)
  {
    $this->partitionOptions = $partitionOptions;
  }
  /** @return PartitionOptions */
  public function getPartitionOptions()
  {
    return $this->partitionOptions;
  }
  /** @param string */
  public function setSql($sql)
  {
    $this->sql = $sql;
  }
  /** @return string */
  public function getSql()
  {
    return $this->sql;
  }
  /** @param TransactionSelector */
  public function setTransaction(TransactionSelector $transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return TransactionSelector */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class PartitionReadRequest extends \Google\Collection
{
  /** @var string[] */
  public $columns;
  /** @var string */
  public $index;
  /** @var KeySet */
  public $keySet;
  /** @var PartitionOptions */
  public $partitionOptions;
  /** @var string */
  public $table;
  /** @var TransactionSelector */
  public $transaction;
  protected $collection_key = 'columns';
  protected $keySetType = KeySet::class;
  protected $keySetDataType = '';
  protected $partitionOptionsType = PartitionOptions::class;
  protected $partitionOptionsDataType = '';
  protected $transactionType = TransactionSelector::class;
  protected $transactionDataType = '';
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
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return string */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param KeySet */
  public function setKeySet(KeySet $keySet)
  {
    $this->keySet = $keySet;
  }
  /** @return KeySet */
  public function getKeySet()
  {
    return $this->keySet;
  }
  /** @param PartitionOptions */
  public function setPartitionOptions(PartitionOptions $partitionOptions)
  {
    $this->partitionOptions = $partitionOptions;
  }
  /** @return PartitionOptions */
  public function getPartitionOptions()
  {
    return $this->partitionOptions;
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
  /** @param TransactionSelector */
  public function setTransaction(TransactionSelector $transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return TransactionSelector */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class PartitionResponse extends \Google\Collection
{
  /** @var Partition[] */
  public $partitions;
  /** @var Transaction */
  public $transaction;
  protected $collection_key = 'partitions';
  protected $partitionsType = Partition::class;
  protected $partitionsDataType = 'array';
  protected $transactionType = Transaction::class;
  protected $transactionDataType = '';
  /** @param Partition[] */
  public function setPartitions($partitions)
  {
    $this->partitions = $partitions;
  }
  /** @return Partition[] */
  public function getPartitions()
  {
    return $this->partitions;
  }
  /** @param Transaction */
  public function setTransaction(Transaction $transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return Transaction */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class PartitionedDml extends \Google\Model
{
}

class PlanNode extends \Google\Collection
{
  /** @var ChildLink[] */
  public $childLinks;
  /** @var string */
  public $displayName;
  /** @var array[] */
  public $executionStats;
  /** @var int */
  public $index;
  /** @var string */
  public $kind;
  /** @var array[] */
  public $metadata;
  /** @var ShortRepresentation */
  public $shortRepresentation;
  protected $collection_key = 'childLinks';
  protected $childLinksType = ChildLink::class;
  protected $childLinksDataType = 'array';
  protected $shortRepresentationType = ShortRepresentation::class;
  protected $shortRepresentationDataType = '';
  /** @param ChildLink[] */
  public function setChildLinks($childLinks)
  {
    $this->childLinks = $childLinks;
  }
  /** @return ChildLink[] */
  public function getChildLinks()
  {
    return $this->childLinks;
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
  /** @param array[] */
  public function setExecutionStats($executionStats)
  {
    $this->executionStats = $executionStats;
  }
  /** @return array[] */
  public function getExecutionStats()
  {
    return $this->executionStats;
  }
  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
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
  /** @param ShortRepresentation */
  public function setShortRepresentation(ShortRepresentation $shortRepresentation)
  {
    $this->shortRepresentation = $shortRepresentation;
  }
  /** @return ShortRepresentation */
  public function getShortRepresentation()
  {
    return $this->shortRepresentation;
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

class PrefixNode extends \Google\Model
{
  /** @var bool */
  public $dataSourceNode;
  /** @var int */
  public $depth;
  /** @var int */
  public $endIndex;
  /** @var int */
  public $startIndex;
  /** @var string */
  public $word;

  /** @param bool */
  public function setDataSourceNode($dataSourceNode)
  {
    $this->dataSourceNode = $dataSourceNode;
  }
  /** @return bool */
  public function getDataSourceNode()
  {
    return $this->dataSourceNode;
  }
  /** @param int */
  public function setDepth($depth)
  {
    $this->depth = $depth;
  }
  /** @return int */
  public function getDepth()
  {
    return $this->depth;
  }
  /** @param int */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return int */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param string */
  public function setWord($word)
  {
    $this->word = $word;
  }
  /** @return string */
  public function getWord()
  {
    return $this->word;
  }
}

class QueryOptions extends \Google\Model
{
  /** @var string */
  public $optimizerStatisticsPackage;
  /** @var string */
  public $optimizerVersion;

  /** @param string */
  public function setOptimizerStatisticsPackage($optimizerStatisticsPackage)
  {
    $this->optimizerStatisticsPackage = $optimizerStatisticsPackage;
  }
  /** @return string */
  public function getOptimizerStatisticsPackage()
  {
    return $this->optimizerStatisticsPackage;
  }
  /** @param string */
  public function setOptimizerVersion($optimizerVersion)
  {
    $this->optimizerVersion = $optimizerVersion;
  }
  /** @return string */
  public function getOptimizerVersion()
  {
    return $this->optimizerVersion;
  }
}

class QueryPlan extends \Google\Collection
{
  /** @var PlanNode[] */
  public $planNodes;
  protected $collection_key = 'planNodes';
  protected $planNodesType = PlanNode::class;
  protected $planNodesDataType = 'array';
  /** @param PlanNode[] */
  public function setPlanNodes($planNodes)
  {
    $this->planNodes = $planNodes;
  }
  /** @return PlanNode[] */
  public function getPlanNodes()
  {
    return $this->planNodes;
  }
}

class ReadRequest extends \Google\Collection
{
  /** @var string[] */
  public $columns;
  /** @var string */
  public $index;
  /** @var KeySet */
  public $keySet;
  /** @var string */
  public $limit;
  /** @var string */
  public $partitionToken;
  /** @var RequestOptions */
  public $requestOptions;
  /** @var string */
  public $resumeToken;
  /** @var string */
  public $table;
  /** @var TransactionSelector */
  public $transaction;
  protected $collection_key = 'columns';
  protected $keySetType = KeySet::class;
  protected $keySetDataType = '';
  protected $requestOptionsType = RequestOptions::class;
  protected $requestOptionsDataType = '';
  protected $transactionType = TransactionSelector::class;
  protected $transactionDataType = '';
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
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return string */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param KeySet */
  public function setKeySet(KeySet $keySet)
  {
    $this->keySet = $keySet;
  }
  /** @return KeySet */
  public function getKeySet()
  {
    return $this->keySet;
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
  public function setPartitionToken($partitionToken)
  {
    $this->partitionToken = $partitionToken;
  }
  /** @return string */
  public function getPartitionToken()
  {
    return $this->partitionToken;
  }
  /** @param RequestOptions */
  public function setRequestOptions(RequestOptions $requestOptions)
  {
    $this->requestOptions = $requestOptions;
  }
  /** @return RequestOptions */
  public function getRequestOptions()
  {
    return $this->requestOptions;
  }
  /** @param string */
  public function setResumeToken($resumeToken)
  {
    $this->resumeToken = $resumeToken;
  }
  /** @return string */
  public function getResumeToken()
  {
    return $this->resumeToken;
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
  /** @param TransactionSelector */
  public function setTransaction(TransactionSelector $transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return TransactionSelector */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class ReadWrite extends \Google\Model
{
  /** @var string */
  public $readLockMode;

  /** @param string */
  public function setReadLockMode($readLockMode)
  {
    $this->readLockMode = $readLockMode;
  }
  /** @return string */
  public function getReadLockMode()
  {
    return $this->readLockMode;
  }
}

class ReplicaInfo extends \Google\Model
{
  /** @var bool */
  public $defaultLeaderLocation;
  /** @var string */
  public $location;
  /** @var string */
  public $type;

  /** @param bool */
  public function setDefaultLeaderLocation($defaultLeaderLocation)
  {
    $this->defaultLeaderLocation = $defaultLeaderLocation;
  }
  /** @return bool */
  public function getDefaultLeaderLocation()
  {
    return $this->defaultLeaderLocation;
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

class RequestOptions extends \Google\Model
{
  /** @var string */
  public $priority;
  /** @var string */
  public $requestTag;
  /** @var string */
  public $transactionTag;

  /** @param string */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return string */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string */
  public function setRequestTag($requestTag)
  {
    $this->requestTag = $requestTag;
  }
  /** @return string */
  public function getRequestTag()
  {
    return $this->requestTag;
  }
  /** @param string */
  public function setTransactionTag($transactionTag)
  {
    $this->transactionTag = $transactionTag;
  }
  /** @return string */
  public function getTransactionTag()
  {
    return $this->transactionTag;
  }
}

class RestoreDatabaseEncryptionConfig extends \Google\Model
{
  /** @var string */
  public $encryptionType;
  /** @var string */
  public $kmsKeyName;

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

class RestoreDatabaseMetadata extends \Google\Model
{
  /** @var BackupInfo */
  public $backupInfo;
  /** @var string */
  public $cancelTime;
  /** @var string */
  public $name;
  /** @var string */
  public $optimizeDatabaseOperationName;
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
  public function setCancelTime($cancelTime)
  {
    $this->cancelTime = $cancelTime;
  }
  /** @return string */
  public function getCancelTime()
  {
    return $this->cancelTime;
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
  public function setOptimizeDatabaseOperationName($optimizeDatabaseOperationName)
  {
    $this->optimizeDatabaseOperationName = $optimizeDatabaseOperationName;
  }
  /** @return string */
  public function getOptimizeDatabaseOperationName()
  {
    return $this->optimizeDatabaseOperationName;
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

class RestoreDatabaseRequest extends \Google\Model
{
  /** @var string */
  public $backup;
  /** @var string */
  public $databaseId;
  /** @var RestoreDatabaseEncryptionConfig */
  public $encryptionConfig;
  protected $encryptionConfigType = RestoreDatabaseEncryptionConfig::class;
  protected $encryptionConfigDataType = '';
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
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /** @param RestoreDatabaseEncryptionConfig */
  public function setEncryptionConfig(RestoreDatabaseEncryptionConfig $encryptionConfig)
  {
    $this->encryptionConfig = $encryptionConfig;
  }
  /** @return RestoreDatabaseEncryptionConfig */
  public function getEncryptionConfig()
  {
    return $this->encryptionConfig;
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

class ResultSet extends \Google\Collection
{
  /** @var ResultSetMetadata */
  public $metadata;
  /** @var array[] */
  public $rows;
  /** @var ResultSetStats */
  public $stats;
  protected $collection_key = 'rows';
  protected $metadataType = ResultSetMetadata::class;
  protected $metadataDataType = '';
  protected $statsType = ResultSetStats::class;
  protected $statsDataType = '';
  /** @param ResultSetMetadata */
  public function setMetadata(ResultSetMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ResultSetMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param array[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return array[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param ResultSetStats */
  public function setStats(ResultSetStats $stats)
  {
    $this->stats = $stats;
  }
  /** @return ResultSetStats */
  public function getStats()
  {
    return $this->stats;
  }
}

class ResultSetMetadata extends \Google\Model
{
  /** @var StructType */
  public $rowType;
  /** @var Transaction */
  public $transaction;
  /** @var StructType */
  public $undeclaredParameters;
  protected $rowTypeType = StructType::class;
  protected $rowTypeDataType = '';
  protected $transactionType = Transaction::class;
  protected $transactionDataType = '';
  protected $undeclaredParametersType = StructType::class;
  protected $undeclaredParametersDataType = '';
  /** @param StructType */
  public function setRowType(StructType $rowType)
  {
    $this->rowType = $rowType;
  }
  /** @return StructType */
  public function getRowType()
  {
    return $this->rowType;
  }
  /** @param Transaction */
  public function setTransaction(Transaction $transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return Transaction */
  public function getTransaction()
  {
    return $this->transaction;
  }
  /** @param StructType */
  public function setUndeclaredParameters(StructType $undeclaredParameters)
  {
    $this->undeclaredParameters = $undeclaredParameters;
  }
  /** @return StructType */
  public function getUndeclaredParameters()
  {
    return $this->undeclaredParameters;
  }
}

class ResultSetStats extends \Google\Model
{
  /** @var QueryPlan */
  public $queryPlan;
  /** @var array[] */
  public $queryStats;
  /** @var string */
  public $rowCountExact;
  /** @var string */
  public $rowCountLowerBound;
  protected $queryPlanType = QueryPlan::class;
  protected $queryPlanDataType = '';
  /** @param QueryPlan */
  public function setQueryPlan(QueryPlan $queryPlan)
  {
    $this->queryPlan = $queryPlan;
  }
  /** @return QueryPlan */
  public function getQueryPlan()
  {
    return $this->queryPlan;
  }
  /** @param array[] */
  public function setQueryStats($queryStats)
  {
    $this->queryStats = $queryStats;
  }
  /** @return array[] */
  public function getQueryStats()
  {
    return $this->queryStats;
  }
  /** @param string */
  public function setRowCountExact($rowCountExact)
  {
    $this->rowCountExact = $rowCountExact;
  }
  /** @return string */
  public function getRowCountExact()
  {
    return $this->rowCountExact;
  }
  /** @param string */
  public function setRowCountLowerBound($rowCountLowerBound)
  {
    $this->rowCountLowerBound = $rowCountLowerBound;
  }
  /** @return string */
  public function getRowCountLowerBound()
  {
    return $this->rowCountLowerBound;
  }
}

class RollbackRequest extends \Google\Model
{
  /** @var string */
  public $transactionId;

  /** @param string */
  public function setTransactionId($transactionId)
  {
    $this->transactionId = $transactionId;
  }
  /** @return string */
  public function getTransactionId()
  {
    return $this->transactionId;
  }
}

class Scan extends \Google\Model
{
  /** @var array[] */
  public $details;
  /** @var string */
  public $endTime;
  /** @var string */
  public $name;
  /** @var ScanData */
  public $scanData;
  /** @var string */
  public $startTime;
  protected $scanDataType = ScanData::class;
  protected $scanDataDataType = '';
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
  /** @param ScanData */
  public function setScanData(ScanData $scanData)
  {
    $this->scanData = $scanData;
  }
  /** @return ScanData */
  public function getScanData()
  {
    return $this->scanData;
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

class ScanData extends \Google\Model
{
  /** @var VisualizationData */
  public $data;
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;
  protected $dataType = VisualizationData::class;
  protected $dataDataType = '';
  /** @param VisualizationData */
  public function setData(VisualizationData $data)
  {
    $this->data = $data;
  }
  /** @return VisualizationData */
  public function getData()
  {
    return $this->data;
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
}

class Session extends \Google\Model
{
  /** @var string */
  public $approximateLastUseTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $creatorRole;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;

  /** @param string */
  public function setApproximateLastUseTime($approximateLastUseTime)
  {
    $this->approximateLastUseTime = $approximateLastUseTime;
  }
  /** @return string */
  public function getApproximateLastUseTime()
  {
    return $this->approximateLastUseTime;
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
  public function setCreatorRole($creatorRole)
  {
    $this->creatorRole = $creatorRole;
  }
  /** @return string */
  public function getCreatorRole()
  {
    return $this->creatorRole;
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

class ShortRepresentation extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var int[] */
  public $subqueries;

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
  /** @param int[] */
  public function setSubqueries($subqueries)
  {
    $this->subqueries = $subqueries;
  }
  /** @return int[] */
  public function getSubqueries()
  {
    return $this->subqueries;
  }
}

class SpannerEmpty extends \Google\Model
{
}

class SpannerReadOnly extends \Google\Model
{
  /** @var string */
  public $exactStaleness;
  /** @var string */
  public $maxStaleness;
  /** @var string */
  public $minReadTimestamp;
  /** @var string */
  public $readTimestamp;
  /** @var bool */
  public $returnReadTimestamp;
  /** @var bool */
  public $strong;

  /** @param string */
  public function setExactStaleness($exactStaleness)
  {
    $this->exactStaleness = $exactStaleness;
  }
  /** @return string */
  public function getExactStaleness()
  {
    return $this->exactStaleness;
  }
  /** @param string */
  public function setMaxStaleness($maxStaleness)
  {
    $this->maxStaleness = $maxStaleness;
  }
  /** @return string */
  public function getMaxStaleness()
  {
    return $this->maxStaleness;
  }
  /** @param string */
  public function setMinReadTimestamp($minReadTimestamp)
  {
    $this->minReadTimestamp = $minReadTimestamp;
  }
  /** @return string */
  public function getMinReadTimestamp()
  {
    return $this->minReadTimestamp;
  }
  /** @param string */
  public function setReadTimestamp($readTimestamp)
  {
    $this->readTimestamp = $readTimestamp;
  }
  /** @return string */
  public function getReadTimestamp()
  {
    return $this->readTimestamp;
  }
  /** @param bool */
  public function setReturnReadTimestamp($returnReadTimestamp)
  {
    $this->returnReadTimestamp = $returnReadTimestamp;
  }
  /** @return bool */
  public function getReturnReadTimestamp()
  {
    return $this->returnReadTimestamp;
  }
  /** @param bool */
  public function setStrong($strong)
  {
    $this->strong = $strong;
  }
  /** @return bool */
  public function getStrong()
  {
    return $this->strong;
  }
}

class Statement extends \Google\Model
{
  /** @var Type[] */
  public $paramTypes;
  /** @var array[] */
  public $params;
  /** @var string */
  public $sql;
  protected $paramTypesType = Type::class;
  protected $paramTypesDataType = 'map';
  /** @param Type[] */
  public function setParamTypes($paramTypes)
  {
    $this->paramTypes = $paramTypes;
  }
  /** @return Type[] */
  public function getParamTypes()
  {
    return $this->paramTypes;
  }
  /** @param array[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return array[] */
  public function getParams()
  {
    return $this->params;
  }
  /** @param string */
  public function setSql($sql)
  {
    $this->sql = $sql;
  }
  /** @return string */
  public function getSql()
  {
    return $this->sql;
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

class StructType extends \Google\Collection
{
  /** @var Field[] */
  public $fields;
  protected $collection_key = 'fields';
  protected $fieldsType = Field::class;
  protected $fieldsDataType = 'array';
  /** @param Field[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return Field[] */
  public function getFields()
  {
    return $this->fields;
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

class Transaction extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $readTimestamp;

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
  public function setReadTimestamp($readTimestamp)
  {
    $this->readTimestamp = $readTimestamp;
  }
  /** @return string */
  public function getReadTimestamp()
  {
    return $this->readTimestamp;
  }
}

class TransactionOptions extends \Google\Model
{
  /** @var PartitionedDml */
  public $partitionedDml;
  /** @var SpannerReadOnly */
  public $readOnly;
  /** @var ReadWrite */
  public $readWrite;
  protected $partitionedDmlType = PartitionedDml::class;
  protected $partitionedDmlDataType = '';
  protected $readOnlyType = SpannerReadOnly::class;
  protected $readOnlyDataType = '';
  protected $readWriteType = ReadWrite::class;
  protected $readWriteDataType = '';
  /** @param PartitionedDml */
  public function setPartitionedDml(PartitionedDml $partitionedDml)
  {
    $this->partitionedDml = $partitionedDml;
  }
  /** @return PartitionedDml */
  public function getPartitionedDml()
  {
    return $this->partitionedDml;
  }
  /** @param SpannerReadOnly */
  public function setReadOnly(SpannerReadOnly $readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /** @return SpannerReadOnly */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
  /** @param ReadWrite */
  public function setReadWrite(ReadWrite $readWrite)
  {
    $this->readWrite = $readWrite;
  }
  /** @return ReadWrite */
  public function getReadWrite()
  {
    return $this->readWrite;
  }
}

class TransactionSelector extends \Google\Model
{
  /** @var TransactionOptions */
  public $begin;
  /** @var string */
  public $id;
  /** @var TransactionOptions */
  public $singleUse;
  protected $beginType = TransactionOptions::class;
  protected $beginDataType = '';
  protected $singleUseType = TransactionOptions::class;
  protected $singleUseDataType = '';
  /** @param TransactionOptions */
  public function setBegin(TransactionOptions $begin)
  {
    $this->begin = $begin;
  }
  /** @return TransactionOptions */
  public function getBegin()
  {
    return $this->begin;
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
  /** @param TransactionOptions */
  public function setSingleUse(TransactionOptions $singleUse)
  {
    $this->singleUse = $singleUse;
  }
  /** @return TransactionOptions */
  public function getSingleUse()
  {
    return $this->singleUse;
  }
}

class Type extends \Google\Model
{
  /** @var Type */
  public $arrayElementType;
  /** @var string */
  public $code;
  /** @var StructType */
  public $structType;
  /** @var string */
  public $typeAnnotation;
  protected $arrayElementTypeType = Type::class;
  protected $arrayElementTypeDataType = '';
  protected $structTypeType = StructType::class;
  protected $structTypeDataType = '';
  /** @param Type */
  public function setArrayElementType(Type $arrayElementType)
  {
    $this->arrayElementType = $arrayElementType;
  }
  /** @return Type */
  public function getArrayElementType()
  {
    return $this->arrayElementType;
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
  /** @param StructType */
  public function setStructType(StructType $structType)
  {
    $this->structType = $structType;
  }
  /** @return StructType */
  public function getStructType()
  {
    return $this->structType;
  }
  /** @param string */
  public function setTypeAnnotation($typeAnnotation)
  {
    $this->typeAnnotation = $typeAnnotation;
  }
  /** @return string */
  public function getTypeAnnotation()
  {
    return $this->typeAnnotation;
  }
}

class UpdateDatabaseDdlMetadata extends \Google\Collection
{
  /** @var string[] */
  public $commitTimestamps;
  /** @var string */
  public $database;
  /** @var OperationProgress[] */
  public $progress;
  /** @var string[] */
  public $statements;
  /** @var bool */
  public $throttled;
  protected $collection_key = 'statements';
  protected $progressType = OperationProgress::class;
  protected $progressDataType = 'array';
  /** @param string[] */
  public function setCommitTimestamps($commitTimestamps)
  {
    $this->commitTimestamps = $commitTimestamps;
  }
  /** @return string[] */
  public function getCommitTimestamps()
  {
    return $this->commitTimestamps;
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
  /** @param OperationProgress[] */
  public function setProgress($progress)
  {
    $this->progress = $progress;
  }
  /** @return OperationProgress[] */
  public function getProgress()
  {
    return $this->progress;
  }
  /** @param string[] */
  public function setStatements($statements)
  {
    $this->statements = $statements;
  }
  /** @return string[] */
  public function getStatements()
  {
    return $this->statements;
  }
  /** @param bool */
  public function setThrottled($throttled)
  {
    $this->throttled = $throttled;
  }
  /** @return bool */
  public function getThrottled()
  {
    return $this->throttled;
  }
}

class UpdateDatabaseDdlRequest extends \Google\Collection
{
  /** @var string */
  public $operationId;
  /** @var string[] */
  public $statements;
  protected $collection_key = 'statements';
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /** @param string[] */
  public function setStatements($statements)
  {
    $this->statements = $statements;
  }
  /** @return string[] */
  public function getStatements()
  {
    return $this->statements;
  }
}

class UpdateInstanceConfigMetadata extends \Google\Model
{
  /** @var string */
  public $cancelTime;
  /** @var InstanceConfig */
  public $instanceConfig;
  /** @var InstanceOperationProgress */
  public $progress;
  protected $instanceConfigType = InstanceConfig::class;
  protected $instanceConfigDataType = '';
  protected $progressType = InstanceOperationProgress::class;
  protected $progressDataType = '';
  /** @param string */
  public function setCancelTime($cancelTime)
  {
    $this->cancelTime = $cancelTime;
  }
  /** @return string */
  public function getCancelTime()
  {
    return $this->cancelTime;
  }
  /** @param InstanceConfig */
  public function setInstanceConfig(InstanceConfig $instanceConfig)
  {
    $this->instanceConfig = $instanceConfig;
  }
  /** @return InstanceConfig */
  public function getInstanceConfig()
  {
    return $this->instanceConfig;
  }
  /** @param InstanceOperationProgress */
  public function setProgress(InstanceOperationProgress $progress)
  {
    $this->progress = $progress;
  }
  /** @return InstanceOperationProgress */
  public function getProgress()
  {
    return $this->progress;
  }
}

class UpdateInstanceConfigRequest extends \Google\Model
{
  /** @var InstanceConfig */
  public $instanceConfig;
  /** @var string */
  public $updateMask;
  /** @var bool */
  public $validateOnly;
  protected $instanceConfigType = InstanceConfig::class;
  protected $instanceConfigDataType = '';
  /** @param InstanceConfig */
  public function setInstanceConfig(InstanceConfig $instanceConfig)
  {
    $this->instanceConfig = $instanceConfig;
  }
  /** @return InstanceConfig */
  public function getInstanceConfig()
  {
    return $this->instanceConfig;
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
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

class UpdateInstanceMetadata extends \Google\Model
{
  /** @var string */
  public $cancelTime;
  /** @var string */
  public $endTime;
  /** @var Instance */
  public $instance;
  /** @var string */
  public $startTime;
  protected $instanceType = Instance::class;
  protected $instanceDataType = '';
  /** @param string */
  public function setCancelTime($cancelTime)
  {
    $this->cancelTime = $cancelTime;
  }
  /** @return string */
  public function getCancelTime()
  {
    return $this->cancelTime;
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

class UpdateInstanceRequest extends \Google\Model
{
  /** @var string */
  public $fieldMask;
  /** @var Instance */
  public $instance;
  protected $instanceType = Instance::class;
  protected $instanceDataType = '';
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
}

class VisualizationData extends \Google\Collection
{
  /** @var string */
  public $dataSourceEndToken;
  /** @var string */
  public $dataSourceSeparatorToken;
  /** @var DiagnosticMessage[] */
  public $diagnosticMessages;
  /** @var string[] */
  public $endKeyStrings;
  /** @var bool */
  public $hasPii;
  /** @var string[] */
  public $indexedKeys;
  /** @var string */
  public $keySeparator;
  /** @var string */
  public $keyUnit;
  /** @var Metric[] */
  public $metrics;
  /** @var PrefixNode[] */
  public $prefixNodes;
  protected $collection_key = 'prefixNodes';
  protected $diagnosticMessagesType = DiagnosticMessage::class;
  protected $diagnosticMessagesDataType = 'array';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $prefixNodesType = PrefixNode::class;
  protected $prefixNodesDataType = 'array';
  /** @param string */
  public function setDataSourceEndToken($dataSourceEndToken)
  {
    $this->dataSourceEndToken = $dataSourceEndToken;
  }
  /** @return string */
  public function getDataSourceEndToken()
  {
    return $this->dataSourceEndToken;
  }
  /** @param string */
  public function setDataSourceSeparatorToken($dataSourceSeparatorToken)
  {
    $this->dataSourceSeparatorToken = $dataSourceSeparatorToken;
  }
  /** @return string */
  public function getDataSourceSeparatorToken()
  {
    return $this->dataSourceSeparatorToken;
  }
  /** @param DiagnosticMessage[] */
  public function setDiagnosticMessages($diagnosticMessages)
  {
    $this->diagnosticMessages = $diagnosticMessages;
  }
  /** @return DiagnosticMessage[] */
  public function getDiagnosticMessages()
  {
    return $this->diagnosticMessages;
  }
  /** @param string[] */
  public function setEndKeyStrings($endKeyStrings)
  {
    $this->endKeyStrings = $endKeyStrings;
  }
  /** @return string[] */
  public function getEndKeyStrings()
  {
    return $this->endKeyStrings;
  }
  /** @param bool */
  public function setHasPii($hasPii)
  {
    $this->hasPii = $hasPii;
  }
  /** @return bool */
  public function getHasPii()
  {
    return $this->hasPii;
  }
  /** @param string[] */
  public function setIndexedKeys($indexedKeys)
  {
    $this->indexedKeys = $indexedKeys;
  }
  /** @return string[] */
  public function getIndexedKeys()
  {
    return $this->indexedKeys;
  }
  /** @param string */
  public function setKeySeparator($keySeparator)
  {
    $this->keySeparator = $keySeparator;
  }
  /** @return string */
  public function getKeySeparator()
  {
    return $this->keySeparator;
  }
  /** @param string */
  public function setKeyUnit($keyUnit)
  {
    $this->keyUnit = $keyUnit;
  }
  /** @return string */
  public function getKeyUnit()
  {
    return $this->keyUnit;
  }
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param PrefixNode[] */
  public function setPrefixNodes($prefixNodes)
  {
    $this->prefixNodes = $prefixNodes;
  }
  /** @return PrefixNode[] */
  public function getPrefixNodes()
  {
    return $this->prefixNodes;
  }
}

class Write extends \Google\Collection
{
  /** @var string[] */
  public $columns;
  /** @var string */
  public $table;
  /** @var array[] */
  public $values;
  protected $collection_key = 'values';
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
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
  /** @param array[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return array[] */
  public function getValues()
  {
    return $this->values;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Backup::class, 'Google_Service_Spanner_Backup');
class_alias(BackupInfo::class, 'Google_Service_Spanner_BackupInfo');
class_alias(BatchCreateSessionsRequest::class, 'Google_Service_Spanner_BatchCreateSessionsRequest');
class_alias(BatchCreateSessionsResponse::class, 'Google_Service_Spanner_BatchCreateSessionsResponse');
class_alias(BeginTransactionRequest::class, 'Google_Service_Spanner_BeginTransactionRequest');
class_alias(Binding::class, 'Google_Service_Spanner_Binding');
class_alias(ChildLink::class, 'Google_Service_Spanner_ChildLink');
class_alias(CommitRequest::class, 'Google_Service_Spanner_CommitRequest');
class_alias(CommitResponse::class, 'Google_Service_Spanner_CommitResponse');
class_alias(CommitStats::class, 'Google_Service_Spanner_CommitStats');
class_alias(ContextValue::class, 'Google_Service_Spanner_ContextValue');
class_alias(CopyBackupEncryptionConfig::class, 'Google_Service_Spanner_CopyBackupEncryptionConfig');
class_alias(CopyBackupMetadata::class, 'Google_Service_Spanner_CopyBackupMetadata');
class_alias(CopyBackupRequest::class, 'Google_Service_Spanner_CopyBackupRequest');
class_alias(CreateBackupMetadata::class, 'Google_Service_Spanner_CreateBackupMetadata');
class_alias(CreateDatabaseMetadata::class, 'Google_Service_Spanner_CreateDatabaseMetadata');
class_alias(CreateDatabaseRequest::class, 'Google_Service_Spanner_CreateDatabaseRequest');
class_alias(CreateInstanceConfigMetadata::class, 'Google_Service_Spanner_CreateInstanceConfigMetadata');
class_alias(CreateInstanceConfigRequest::class, 'Google_Service_Spanner_CreateInstanceConfigRequest');
class_alias(CreateInstanceMetadata::class, 'Google_Service_Spanner_CreateInstanceMetadata');
class_alias(CreateInstanceRequest::class, 'Google_Service_Spanner_CreateInstanceRequest');
class_alias(CreateSessionRequest::class, 'Google_Service_Spanner_CreateSessionRequest');
class_alias(Database::class, 'Google_Service_Spanner_Database');
class_alias(DatabaseRole::class, 'Google_Service_Spanner_DatabaseRole');
class_alias(Delete::class, 'Google_Service_Spanner_Delete');
class_alias(DerivedMetric::class, 'Google_Service_Spanner_DerivedMetric');
class_alias(DiagnosticMessage::class, 'Google_Service_Spanner_DiagnosticMessage');
class_alias(EncryptionConfig::class, 'Google_Service_Spanner_EncryptionConfig');
class_alias(EncryptionInfo::class, 'Google_Service_Spanner_EncryptionInfo');
class_alias(ExecuteBatchDmlRequest::class, 'Google_Service_Spanner_ExecuteBatchDmlRequest');
class_alias(ExecuteBatchDmlResponse::class, 'Google_Service_Spanner_ExecuteBatchDmlResponse');
class_alias(ExecuteSqlRequest::class, 'Google_Service_Spanner_ExecuteSqlRequest');
class_alias(Expr::class, 'Google_Service_Spanner_Expr');
class_alias(Field::class, 'Google_Service_Spanner_Field');
class_alias(FreeInstanceMetadata::class, 'Google_Service_Spanner_FreeInstanceMetadata');
class_alias(GetDatabaseDdlResponse::class, 'Google_Service_Spanner_GetDatabaseDdlResponse');
class_alias(GetIamPolicyRequest::class, 'Google_Service_Spanner_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_Spanner_GetPolicyOptions');
class_alias(IndexedHotKey::class, 'Google_Service_Spanner_IndexedHotKey');
class_alias(IndexedKeyRangeInfos::class, 'Google_Service_Spanner_IndexedKeyRangeInfos');
class_alias(Instance::class, 'Google_Service_Spanner_Instance');
class_alias(InstanceConfig::class, 'Google_Service_Spanner_InstanceConfig');
class_alias(InstanceOperationProgress::class, 'Google_Service_Spanner_InstanceOperationProgress');
class_alias(KeyRange::class, 'Google_Service_Spanner_KeyRange');
class_alias(KeyRangeInfo::class, 'Google_Service_Spanner_KeyRangeInfo');
class_alias(KeyRangeInfos::class, 'Google_Service_Spanner_KeyRangeInfos');
class_alias(KeySet::class, 'Google_Service_Spanner_KeySet');
class_alias(ListBackupOperationsResponse::class, 'Google_Service_Spanner_ListBackupOperationsResponse');
class_alias(ListBackupsResponse::class, 'Google_Service_Spanner_ListBackupsResponse');
class_alias(ListDatabaseOperationsResponse::class, 'Google_Service_Spanner_ListDatabaseOperationsResponse');
class_alias(ListDatabaseRolesResponse::class, 'Google_Service_Spanner_ListDatabaseRolesResponse');
class_alias(ListDatabasesResponse::class, 'Google_Service_Spanner_ListDatabasesResponse');
class_alias(ListInstanceConfigOperationsResponse::class, 'Google_Service_Spanner_ListInstanceConfigOperationsResponse');
class_alias(ListInstanceConfigsResponse::class, 'Google_Service_Spanner_ListInstanceConfigsResponse');
class_alias(ListInstancesResponse::class, 'Google_Service_Spanner_ListInstancesResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Spanner_ListOperationsResponse');
class_alias(ListScansResponse::class, 'Google_Service_Spanner_ListScansResponse');
class_alias(ListSessionsResponse::class, 'Google_Service_Spanner_ListSessionsResponse');
class_alias(LocalizedString::class, 'Google_Service_Spanner_LocalizedString');
class_alias(Metric::class, 'Google_Service_Spanner_Metric');
class_alias(MetricMatrix::class, 'Google_Service_Spanner_MetricMatrix');
class_alias(MetricMatrixRow::class, 'Google_Service_Spanner_MetricMatrixRow');
class_alias(Mutation::class, 'Google_Service_Spanner_Mutation');
class_alias(Operation::class, 'Google_Service_Spanner_Operation');
class_alias(OperationProgress::class, 'Google_Service_Spanner_OperationProgress');
class_alias(OptimizeRestoredDatabaseMetadata::class, 'Google_Service_Spanner_OptimizeRestoredDatabaseMetadata');
class_alias(PartialResultSet::class, 'Google_Service_Spanner_PartialResultSet');
class_alias(Partition::class, 'Google_Service_Spanner_Partition');
class_alias(PartitionOptions::class, 'Google_Service_Spanner_PartitionOptions');
class_alias(PartitionQueryRequest::class, 'Google_Service_Spanner_PartitionQueryRequest');
class_alias(PartitionReadRequest::class, 'Google_Service_Spanner_PartitionReadRequest');
class_alias(PartitionResponse::class, 'Google_Service_Spanner_PartitionResponse');
class_alias(PartitionedDml::class, 'Google_Service_Spanner_PartitionedDml');
class_alias(PlanNode::class, 'Google_Service_Spanner_PlanNode');
class_alias(Policy::class, 'Google_Service_Spanner_Policy');
class_alias(PrefixNode::class, 'Google_Service_Spanner_PrefixNode');
class_alias(QueryOptions::class, 'Google_Service_Spanner_QueryOptions');
class_alias(QueryPlan::class, 'Google_Service_Spanner_QueryPlan');
class_alias(ReadRequest::class, 'Google_Service_Spanner_ReadRequest');
class_alias(ReadWrite::class, 'Google_Service_Spanner_ReadWrite');
class_alias(ReplicaInfo::class, 'Google_Service_Spanner_ReplicaInfo');
class_alias(RequestOptions::class, 'Google_Service_Spanner_RequestOptions');
class_alias(RestoreDatabaseEncryptionConfig::class, 'Google_Service_Spanner_RestoreDatabaseEncryptionConfig');
class_alias(RestoreDatabaseMetadata::class, 'Google_Service_Spanner_RestoreDatabaseMetadata');
class_alias(RestoreDatabaseRequest::class, 'Google_Service_Spanner_RestoreDatabaseRequest');
class_alias(RestoreInfo::class, 'Google_Service_Spanner_RestoreInfo');
class_alias(ResultSet::class, 'Google_Service_Spanner_ResultSet');
class_alias(ResultSetMetadata::class, 'Google_Service_Spanner_ResultSetMetadata');
class_alias(ResultSetStats::class, 'Google_Service_Spanner_ResultSetStats');
class_alias(RollbackRequest::class, 'Google_Service_Spanner_RollbackRequest');
class_alias(Scan::class, 'Google_Service_Spanner_Scan');
class_alias(ScanData::class, 'Google_Service_Spanner_ScanData');
class_alias(Session::class, 'Google_Service_Spanner_Session');
class_alias(SetIamPolicyRequest::class, 'Google_Service_Spanner_SetIamPolicyRequest');
class_alias(ShortRepresentation::class, 'Google_Service_Spanner_ShortRepresentation');
class_alias(SpannerEmpty::class, 'Google_Service_Spanner_SpannerEmpty');
class_alias(SpannerReadOnly::class, 'Google_Service_Spanner_SpannerReadOnly');
class_alias(Statement::class, 'Google_Service_Spanner_Statement');
class_alias(Status::class, 'Google_Service_Spanner_Status');
class_alias(StructType::class, 'Google_Service_Spanner_StructType');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_Spanner_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_Spanner_TestIamPermissionsResponse');
class_alias(Transaction::class, 'Google_Service_Spanner_Transaction');
class_alias(TransactionOptions::class, 'Google_Service_Spanner_TransactionOptions');
class_alias(TransactionSelector::class, 'Google_Service_Spanner_TransactionSelector');
class_alias(Type::class, 'Google_Service_Spanner_Type');
class_alias(UpdateDatabaseDdlMetadata::class, 'Google_Service_Spanner_UpdateDatabaseDdlMetadata');
class_alias(UpdateDatabaseDdlRequest::class, 'Google_Service_Spanner_UpdateDatabaseDdlRequest');
class_alias(UpdateInstanceConfigMetadata::class, 'Google_Service_Spanner_UpdateInstanceConfigMetadata');
class_alias(UpdateInstanceConfigRequest::class, 'Google_Service_Spanner_UpdateInstanceConfigRequest');
class_alias(UpdateInstanceMetadata::class, 'Google_Service_Spanner_UpdateInstanceMetadata');
class_alias(UpdateInstanceRequest::class, 'Google_Service_Spanner_UpdateInstanceRequest');
class_alias(VisualizationData::class, 'Google_Service_Spanner_VisualizationData');
class_alias(Write::class, 'Google_Service_Spanner_Write');
