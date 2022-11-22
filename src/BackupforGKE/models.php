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

namespace Google\Service\BackupforGKE;

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

class Backup extends \Google\Model
{
  /** @var bool */
  public $allNamespaces;
  /** @var ClusterMetadata */
  public $clusterMetadata;
  /** @var string */
  public $completeTime;
  /** @var string */
  public $configBackupSizeBytes;
  /** @var bool */
  public $containsSecrets;
  /** @var bool */
  public $containsVolumeData;
  /** @var string */
  public $createTime;
  /** @var int */
  public $deleteLockDays;
  /** @var string */
  public $deleteLockExpireTime;
  /** @var string */
  public $description;
  /** @var EncryptionKey */
  public $encryptionKey;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $labels;
  /** @var bool */
  public $manual;
  /** @var string */
  public $name;
  /** @var int */
  public $podCount;
  /** @var int */
  public $resourceCount;
  /** @var int */
  public $retainDays;
  /** @var string */
  public $retainExpireTime;
  /** @var NamespacedNames */
  public $selectedApplications;
  /** @var Namespaces */
  public $selectedNamespaces;
  /** @var string */
  public $sizeBytes;
  /** @var string */
  public $state;
  /** @var string */
  public $stateReason;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  /** @var int */
  public $volumeCount;
  protected $clusterMetadataType = ClusterMetadata::class;
  protected $clusterMetadataDataType = '';
  protected $encryptionKeyType = EncryptionKey::class;
  protected $encryptionKeyDataType = '';
  protected $selectedApplicationsType = NamespacedNames::class;
  protected $selectedApplicationsDataType = '';
  protected $selectedNamespacesType = Namespaces::class;
  protected $selectedNamespacesDataType = '';
  /** @param bool */
  public function setAllNamespaces($allNamespaces)
  {
    $this->allNamespaces = $allNamespaces;
  }
  /** @return bool */
  public function getAllNamespaces()
  {
    return $this->allNamespaces;
  }
  /** @param ClusterMetadata */
  public function setClusterMetadata(ClusterMetadata $clusterMetadata)
  {
    $this->clusterMetadata = $clusterMetadata;
  }
  /** @return ClusterMetadata */
  public function getClusterMetadata()
  {
    return $this->clusterMetadata;
  }
  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
  }
  /** @param string */
  public function setConfigBackupSizeBytes($configBackupSizeBytes)
  {
    $this->configBackupSizeBytes = $configBackupSizeBytes;
  }
  /** @return string */
  public function getConfigBackupSizeBytes()
  {
    return $this->configBackupSizeBytes;
  }
  /** @param bool */
  public function setContainsSecrets($containsSecrets)
  {
    $this->containsSecrets = $containsSecrets;
  }
  /** @return bool */
  public function getContainsSecrets()
  {
    return $this->containsSecrets;
  }
  /** @param bool */
  public function setContainsVolumeData($containsVolumeData)
  {
    $this->containsVolumeData = $containsVolumeData;
  }
  /** @return bool */
  public function getContainsVolumeData()
  {
    return $this->containsVolumeData;
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
  /** @param int */
  public function setDeleteLockDays($deleteLockDays)
  {
    $this->deleteLockDays = $deleteLockDays;
  }
  /** @return int */
  public function getDeleteLockDays()
  {
    return $this->deleteLockDays;
  }
  /** @param string */
  public function setDeleteLockExpireTime($deleteLockExpireTime)
  {
    $this->deleteLockExpireTime = $deleteLockExpireTime;
  }
  /** @return string */
  public function getDeleteLockExpireTime()
  {
    return $this->deleteLockExpireTime;
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
  /** @param EncryptionKey */
  public function setEncryptionKey(EncryptionKey $encryptionKey)
  {
    $this->encryptionKey = $encryptionKey;
  }
  /** @return EncryptionKey */
  public function getEncryptionKey()
  {
    return $this->encryptionKey;
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
  /** @param bool */
  public function setManual($manual)
  {
    $this->manual = $manual;
  }
  /** @return bool */
  public function getManual()
  {
    return $this->manual;
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
  public function setPodCount($podCount)
  {
    $this->podCount = $podCount;
  }
  /** @return int */
  public function getPodCount()
  {
    return $this->podCount;
  }
  /** @param int */
  public function setResourceCount($resourceCount)
  {
    $this->resourceCount = $resourceCount;
  }
  /** @return int */
  public function getResourceCount()
  {
    return $this->resourceCount;
  }
  /** @param int */
  public function setRetainDays($retainDays)
  {
    $this->retainDays = $retainDays;
  }
  /** @return int */
  public function getRetainDays()
  {
    return $this->retainDays;
  }
  /** @param string */
  public function setRetainExpireTime($retainExpireTime)
  {
    $this->retainExpireTime = $retainExpireTime;
  }
  /** @return string */
  public function getRetainExpireTime()
  {
    return $this->retainExpireTime;
  }
  /** @param NamespacedNames */
  public function setSelectedApplications(NamespacedNames $selectedApplications)
  {
    $this->selectedApplications = $selectedApplications;
  }
  /** @return NamespacedNames */
  public function getSelectedApplications()
  {
    return $this->selectedApplications;
  }
  /** @param Namespaces */
  public function setSelectedNamespaces(Namespaces $selectedNamespaces)
  {
    $this->selectedNamespaces = $selectedNamespaces;
  }
  /** @return Namespaces */
  public function getSelectedNamespaces()
  {
    return $this->selectedNamespaces;
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
  public function setStateReason($stateReason)
  {
    $this->stateReason = $stateReason;
  }
  /** @return string */
  public function getStateReason()
  {
    return $this->stateReason;
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
  /** @param int */
  public function setVolumeCount($volumeCount)
  {
    $this->volumeCount = $volumeCount;
  }
  /** @return int */
  public function getVolumeCount()
  {
    return $this->volumeCount;
  }
}

class BackupConfig extends \Google\Model
{
  /** @var bool */
  public $allNamespaces;
  /** @var EncryptionKey */
  public $encryptionKey;
  /** @var bool */
  public $includeSecrets;
  /** @var bool */
  public $includeVolumeData;
  /** @var NamespacedNames */
  public $selectedApplications;
  /** @var Namespaces */
  public $selectedNamespaces;
  protected $encryptionKeyType = EncryptionKey::class;
  protected $encryptionKeyDataType = '';
  protected $selectedApplicationsType = NamespacedNames::class;
  protected $selectedApplicationsDataType = '';
  protected $selectedNamespacesType = Namespaces::class;
  protected $selectedNamespacesDataType = '';
  /** @param bool */
  public function setAllNamespaces($allNamespaces)
  {
    $this->allNamespaces = $allNamespaces;
  }
  /** @return bool */
  public function getAllNamespaces()
  {
    return $this->allNamespaces;
  }
  /** @param EncryptionKey */
  public function setEncryptionKey(EncryptionKey $encryptionKey)
  {
    $this->encryptionKey = $encryptionKey;
  }
  /** @return EncryptionKey */
  public function getEncryptionKey()
  {
    return $this->encryptionKey;
  }
  /** @param bool */
  public function setIncludeSecrets($includeSecrets)
  {
    $this->includeSecrets = $includeSecrets;
  }
  /** @return bool */
  public function getIncludeSecrets()
  {
    return $this->includeSecrets;
  }
  /** @param bool */
  public function setIncludeVolumeData($includeVolumeData)
  {
    $this->includeVolumeData = $includeVolumeData;
  }
  /** @return bool */
  public function getIncludeVolumeData()
  {
    return $this->includeVolumeData;
  }
  /** @param NamespacedNames */
  public function setSelectedApplications(NamespacedNames $selectedApplications)
  {
    $this->selectedApplications = $selectedApplications;
  }
  /** @return NamespacedNames */
  public function getSelectedApplications()
  {
    return $this->selectedApplications;
  }
  /** @param Namespaces */
  public function setSelectedNamespaces(Namespaces $selectedNamespaces)
  {
    $this->selectedNamespaces = $selectedNamespaces;
  }
  /** @return Namespaces */
  public function getSelectedNamespaces()
  {
    return $this->selectedNamespaces;
  }
}

class BackupPlan extends \Google\Model
{
  /** @var BackupConfig */
  public $backupConfig;
  /** @var Schedule */
  public $backupSchedule;
  /** @var string */
  public $cluster;
  /** @var string */
  public $createTime;
  /** @var bool */
  public $deactivated;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var int */
  public $protectedPodCount;
  /** @var RetentionPolicy */
  public $retentionPolicy;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $backupConfigType = BackupConfig::class;
  protected $backupConfigDataType = '';
  protected $backupScheduleType = Schedule::class;
  protected $backupScheduleDataType = '';
  protected $retentionPolicyType = RetentionPolicy::class;
  protected $retentionPolicyDataType = '';
  /** @param BackupConfig */
  public function setBackupConfig(BackupConfig $backupConfig)
  {
    $this->backupConfig = $backupConfig;
  }
  /** @return BackupConfig */
  public function getBackupConfig()
  {
    return $this->backupConfig;
  }
  /** @param Schedule */
  public function setBackupSchedule(Schedule $backupSchedule)
  {
    $this->backupSchedule = $backupSchedule;
  }
  /** @return Schedule */
  public function getBackupSchedule()
  {
    return $this->backupSchedule;
  }
  /** @param string */
  public function setCluster($cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return string */
  public function getCluster()
  {
    return $this->cluster;
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
  /** @param bool */
  public function setDeactivated($deactivated)
  {
    $this->deactivated = $deactivated;
  }
  /** @return bool */
  public function getDeactivated()
  {
    return $this->deactivated;
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
  public function setProtectedPodCount($protectedPodCount)
  {
    $this->protectedPodCount = $protectedPodCount;
  }
  /** @return int */
  public function getProtectedPodCount()
  {
    return $this->protectedPodCount;
  }
  /** @param RetentionPolicy */
  public function setRetentionPolicy(RetentionPolicy $retentionPolicy)
  {
    $this->retentionPolicy = $retentionPolicy;
  }
  /** @return RetentionPolicy */
  public function getRetentionPolicy()
  {
    return $this->retentionPolicy;
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

class ClusterMetadata extends \Google\Model
{
  /** @var string */
  public $anthosVersion;
  /** @var string[] */
  public $backupCrdVersions;
  /** @var string */
  public $cluster;
  /** @var string */
  public $gkeVersion;
  /** @var string */
  public $k8sVersion;

  /** @param string */
  public function setAnthosVersion($anthosVersion)
  {
    $this->anthosVersion = $anthosVersion;
  }
  /** @return string */
  public function getAnthosVersion()
  {
    return $this->anthosVersion;
  }
  /** @param string[] */
  public function setBackupCrdVersions($backupCrdVersions)
  {
    $this->backupCrdVersions = $backupCrdVersions;
  }
  /** @return string[] */
  public function getBackupCrdVersions()
  {
    return $this->backupCrdVersions;
  }
  /** @param string */
  public function setCluster($cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return string */
  public function getCluster()
  {
    return $this->cluster;
  }
  /** @param string */
  public function setGkeVersion($gkeVersion)
  {
    $this->gkeVersion = $gkeVersion;
  }
  /** @return string */
  public function getGkeVersion()
  {
    return $this->gkeVersion;
  }
  /** @param string */
  public function setK8sVersion($k8sVersion)
  {
    $this->k8sVersion = $k8sVersion;
  }
  /** @return string */
  public function getK8sVersion()
  {
    return $this->k8sVersion;
  }
}

class ClusterResourceRestoreScope extends \Google\Collection
{
  /** @var GroupKind[] */
  public $selectedGroupKinds;
  protected $collection_key = 'selectedGroupKinds';
  protected $selectedGroupKindsType = GroupKind::class;
  protected $selectedGroupKindsDataType = 'array';
  /** @param GroupKind[] */
  public function setSelectedGroupKinds($selectedGroupKinds)
  {
    $this->selectedGroupKinds = $selectedGroupKinds;
  }
  /** @return GroupKind[] */
  public function getSelectedGroupKinds()
  {
    return $this->selectedGroupKinds;
  }
}

class EncryptionKey extends \Google\Model
{
  /** @var string */
  public $gcpKmsEncryptionKey;

  /** @param string */
  public function setGcpKmsEncryptionKey($gcpKmsEncryptionKey)
  {
    $this->gcpKmsEncryptionKey = $gcpKmsEncryptionKey;
  }
  /** @return string */
  public function getGcpKmsEncryptionKey()
  {
    return $this->gcpKmsEncryptionKey;
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

class GkebackupEmpty extends \Google\Model
{
}

class GoogleLongrunningCancelOperationRequest extends \Google\Model
{
}

class GoogleLongrunningListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleLongrunningOperation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = GoogleLongrunningOperation::class;
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
  /** @param GoogleLongrunningOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleLongrunningOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class GoogleLongrunningOperation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = GoogleRpcStatus::class;
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
  /** @param GoogleRpcStatus */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /** @return GoogleRpcStatus */
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

class GoogleRpcStatus extends \Google\Collection
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

class GroupKind extends \Google\Model
{
  /** @var string */
  public $resourceGroup;
  /** @var string */
  public $resourceKind;

  /** @param string */
  public function setResourceGroup($resourceGroup)
  {
    $this->resourceGroup = $resourceGroup;
  }
  /** @return string */
  public function getResourceGroup()
  {
    return $this->resourceGroup;
  }
  /** @param string */
  public function setResourceKind($resourceKind)
  {
    $this->resourceKind = $resourceKind;
  }
  /** @return string */
  public function getResourceKind()
  {
    return $this->resourceKind;
  }
}

class ListBackupPlansResponse extends \Google\Collection
{
  /** @var BackupPlan[] */
  public $backupPlans;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $backupPlansType = BackupPlan::class;
  protected $backupPlansDataType = 'array';
  /** @param BackupPlan[] */
  public function setBackupPlans($backupPlans)
  {
    $this->backupPlans = $backupPlans;
  }
  /** @return BackupPlan[] */
  public function getBackupPlans()
  {
    return $this->backupPlans;
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

class ListRestorePlansResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var RestorePlan[] */
  public $restorePlans;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $restorePlansType = RestorePlan::class;
  protected $restorePlansDataType = 'array';
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
  /** @param RestorePlan[] */
  public function setRestorePlans($restorePlans)
  {
    $this->restorePlans = $restorePlans;
  }
  /** @return RestorePlan[] */
  public function getRestorePlans()
  {
    return $this->restorePlans;
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

class ListRestoresResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Restore[] */
  public $restores;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $restoresType = Restore::class;
  protected $restoresDataType = 'array';
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

class ListVolumeBackupsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var VolumeBackup[] */
  public $volumeBackups;
  protected $collection_key = 'volumeBackups';
  protected $volumeBackupsType = VolumeBackup::class;
  protected $volumeBackupsDataType = 'array';
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
  /** @param VolumeBackup[] */
  public function setVolumeBackups($volumeBackups)
  {
    $this->volumeBackups = $volumeBackups;
  }
  /** @return VolumeBackup[] */
  public function getVolumeBackups()
  {
    return $this->volumeBackups;
  }
}

class ListVolumeRestoresResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var VolumeRestore[] */
  public $volumeRestores;
  protected $collection_key = 'volumeRestores';
  protected $volumeRestoresType = VolumeRestore::class;
  protected $volumeRestoresDataType = 'array';
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
  /** @param VolumeRestore[] */
  public function setVolumeRestores($volumeRestores)
  {
    $this->volumeRestores = $volumeRestores;
  }
  /** @return VolumeRestore[] */
  public function getVolumeRestores()
  {
    return $this->volumeRestores;
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

class NamespacedName extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $namespace;

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

class NamespacedNames extends \Google\Collection
{
  /** @var NamespacedName[] */
  public $namespacedNames;
  protected $collection_key = 'namespacedNames';
  protected $namespacedNamesType = NamespacedName::class;
  protected $namespacedNamesDataType = 'array';
  /** @param NamespacedName[] */
  public function setNamespacedNames($namespacedNames)
  {
    $this->namespacedNames = $namespacedNames;
  }
  /** @return NamespacedName[] */
  public function getNamespacedNames()
  {
    return $this->namespacedNames;
  }
}

class Namespaces extends \Google\Collection
{
  /** @var string[] */
  public $namespaces;
  protected $collection_key = 'namespaces';
  /** @param string[] */
  public function setNamespaces($namespaces)
  {
    $this->namespaces = $namespaces;
  }
  /** @return string[] */
  public function getNamespaces()
  {
    return $this->namespaces;
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
  public $cluster;
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var int */
  public $resourcesExcludedCount;
  /** @var int */
  public $resourcesFailedCount;
  /** @var int */
  public $resourcesRestoredCount;
  /** @var RestoreConfig */
  public $restoreConfig;
  /** @var string */
  public $state;
  /** @var string */
  public $stateReason;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  /** @var int */
  public $volumesRestoredCount;
  protected $restoreConfigType = RestoreConfig::class;
  protected $restoreConfigDataType = '';
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
  public function setCluster($cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return string */
  public function getCluster()
  {
    return $this->cluster;
  }
  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
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
  public function setResourcesExcludedCount($resourcesExcludedCount)
  {
    $this->resourcesExcludedCount = $resourcesExcludedCount;
  }
  /** @return int */
  public function getResourcesExcludedCount()
  {
    return $this->resourcesExcludedCount;
  }
  /** @param int */
  public function setResourcesFailedCount($resourcesFailedCount)
  {
    $this->resourcesFailedCount = $resourcesFailedCount;
  }
  /** @return int */
  public function getResourcesFailedCount()
  {
    return $this->resourcesFailedCount;
  }
  /** @param int */
  public function setResourcesRestoredCount($resourcesRestoredCount)
  {
    $this->resourcesRestoredCount = $resourcesRestoredCount;
  }
  /** @return int */
  public function getResourcesRestoredCount()
  {
    return $this->resourcesRestoredCount;
  }
  /** @param RestoreConfig */
  public function setRestoreConfig(RestoreConfig $restoreConfig)
  {
    $this->restoreConfig = $restoreConfig;
  }
  /** @return RestoreConfig */
  public function getRestoreConfig()
  {
    return $this->restoreConfig;
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
  public function setStateReason($stateReason)
  {
    $this->stateReason = $stateReason;
  }
  /** @return string */
  public function getStateReason()
  {
    return $this->stateReason;
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
  /** @param int */
  public function setVolumesRestoredCount($volumesRestoredCount)
  {
    $this->volumesRestoredCount = $volumesRestoredCount;
  }
  /** @return int */
  public function getVolumesRestoredCount()
  {
    return $this->volumesRestoredCount;
  }
}

class RestoreConfig extends \Google\Collection
{
  /** @var bool */
  public $allNamespaces;
  /** @var string */
  public $clusterResourceConflictPolicy;
  /** @var ClusterResourceRestoreScope */
  public $clusterResourceRestoreScope;
  /** @var string */
  public $namespacedResourceRestoreMode;
  /** @var NamespacedNames */
  public $selectedApplications;
  /** @var Namespaces */
  public $selectedNamespaces;
  /** @var SubstitutionRule[] */
  public $substitutionRules;
  /** @var string */
  public $volumeDataRestorePolicy;
  protected $collection_key = 'substitutionRules';
  protected $clusterResourceRestoreScopeType = ClusterResourceRestoreScope::class;
  protected $clusterResourceRestoreScopeDataType = '';
  protected $selectedApplicationsType = NamespacedNames::class;
  protected $selectedApplicationsDataType = '';
  protected $selectedNamespacesType = Namespaces::class;
  protected $selectedNamespacesDataType = '';
  protected $substitutionRulesType = SubstitutionRule::class;
  protected $substitutionRulesDataType = 'array';
  /** @param bool */
  public function setAllNamespaces($allNamespaces)
  {
    $this->allNamespaces = $allNamespaces;
  }
  /** @return bool */
  public function getAllNamespaces()
  {
    return $this->allNamespaces;
  }
  /** @param string */
  public function setClusterResourceConflictPolicy($clusterResourceConflictPolicy)
  {
    $this->clusterResourceConflictPolicy = $clusterResourceConflictPolicy;
  }
  /** @return string */
  public function getClusterResourceConflictPolicy()
  {
    return $this->clusterResourceConflictPolicy;
  }
  /** @param ClusterResourceRestoreScope */
  public function setClusterResourceRestoreScope(ClusterResourceRestoreScope $clusterResourceRestoreScope)
  {
    $this->clusterResourceRestoreScope = $clusterResourceRestoreScope;
  }
  /** @return ClusterResourceRestoreScope */
  public function getClusterResourceRestoreScope()
  {
    return $this->clusterResourceRestoreScope;
  }
  /** @param string */
  public function setNamespacedResourceRestoreMode($namespacedResourceRestoreMode)
  {
    $this->namespacedResourceRestoreMode = $namespacedResourceRestoreMode;
  }
  /** @return string */
  public function getNamespacedResourceRestoreMode()
  {
    return $this->namespacedResourceRestoreMode;
  }
  /** @param NamespacedNames */
  public function setSelectedApplications(NamespacedNames $selectedApplications)
  {
    $this->selectedApplications = $selectedApplications;
  }
  /** @return NamespacedNames */
  public function getSelectedApplications()
  {
    return $this->selectedApplications;
  }
  /** @param Namespaces */
  public function setSelectedNamespaces(Namespaces $selectedNamespaces)
  {
    $this->selectedNamespaces = $selectedNamespaces;
  }
  /** @return Namespaces */
  public function getSelectedNamespaces()
  {
    return $this->selectedNamespaces;
  }
  /** @param SubstitutionRule[] */
  public function setSubstitutionRules($substitutionRules)
  {
    $this->substitutionRules = $substitutionRules;
  }
  /** @return SubstitutionRule[] */
  public function getSubstitutionRules()
  {
    return $this->substitutionRules;
  }
  /** @param string */
  public function setVolumeDataRestorePolicy($volumeDataRestorePolicy)
  {
    $this->volumeDataRestorePolicy = $volumeDataRestorePolicy;
  }
  /** @return string */
  public function getVolumeDataRestorePolicy()
  {
    return $this->volumeDataRestorePolicy;
  }
}

class RestorePlan extends \Google\Model
{
  /** @var string */
  public $backupPlan;
  /** @var string */
  public $cluster;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var RestoreConfig */
  public $restoreConfig;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $restoreConfigType = RestoreConfig::class;
  protected $restoreConfigDataType = '';
  /** @param string */
  public function setBackupPlan($backupPlan)
  {
    $this->backupPlan = $backupPlan;
  }
  /** @return string */
  public function getBackupPlan()
  {
    return $this->backupPlan;
  }
  /** @param string */
  public function setCluster($cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return string */
  public function getCluster()
  {
    return $this->cluster;
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
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
  /** @param RestoreConfig */
  public function setRestoreConfig(RestoreConfig $restoreConfig)
  {
    $this->restoreConfig = $restoreConfig;
  }
  /** @return RestoreConfig */
  public function getRestoreConfig()
  {
    return $this->restoreConfig;
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

class RetentionPolicy extends \Google\Model
{
  /** @var int */
  public $backupDeleteLockDays;
  /** @var int */
  public $backupRetainDays;
  /** @var bool */
  public $locked;

  /** @param int */
  public function setBackupDeleteLockDays($backupDeleteLockDays)
  {
    $this->backupDeleteLockDays = $backupDeleteLockDays;
  }
  /** @return int */
  public function getBackupDeleteLockDays()
  {
    return $this->backupDeleteLockDays;
  }
  /** @param int */
  public function setBackupRetainDays($backupRetainDays)
  {
    $this->backupRetainDays = $backupRetainDays;
  }
  /** @return int */
  public function getBackupRetainDays()
  {
    return $this->backupRetainDays;
  }
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
}

class Schedule extends \Google\Model
{
  /** @var string */
  public $cronSchedule;
  /** @var bool */
  public $paused;

  /** @param string */
  public function setCronSchedule($cronSchedule)
  {
    $this->cronSchedule = $cronSchedule;
  }
  /** @return string */
  public function getCronSchedule()
  {
    return $this->cronSchedule;
  }
  /** @param bool */
  public function setPaused($paused)
  {
    $this->paused = $paused;
  }
  /** @return bool */
  public function getPaused()
  {
    return $this->paused;
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

class SubstitutionRule extends \Google\Collection
{
  /** @var string */
  public $newValue;
  /** @var string */
  public $originalValuePattern;
  /** @var GroupKind[] */
  public $targetGroupKinds;
  /** @var string */
  public $targetJsonPath;
  /** @var string[] */
  public $targetNamespaces;
  protected $collection_key = 'targetNamespaces';
  protected $targetGroupKindsType = GroupKind::class;
  protected $targetGroupKindsDataType = 'array';
  /** @param string */
  public function setNewValue($newValue)
  {
    $this->newValue = $newValue;
  }
  /** @return string */
  public function getNewValue()
  {
    return $this->newValue;
  }
  /** @param string */
  public function setOriginalValuePattern($originalValuePattern)
  {
    $this->originalValuePattern = $originalValuePattern;
  }
  /** @return string */
  public function getOriginalValuePattern()
  {
    return $this->originalValuePattern;
  }
  /** @param GroupKind[] */
  public function setTargetGroupKinds($targetGroupKinds)
  {
    $this->targetGroupKinds = $targetGroupKinds;
  }
  /** @return GroupKind[] */
  public function getTargetGroupKinds()
  {
    return $this->targetGroupKinds;
  }
  /** @param string */
  public function setTargetJsonPath($targetJsonPath)
  {
    $this->targetJsonPath = $targetJsonPath;
  }
  /** @return string */
  public function getTargetJsonPath()
  {
    return $this->targetJsonPath;
  }
  /** @param string[] */
  public function setTargetNamespaces($targetNamespaces)
  {
    $this->targetNamespaces = $targetNamespaces;
  }
  /** @return string[] */
  public function getTargetNamespaces()
  {
    return $this->targetNamespaces;
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

class VolumeBackup extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $diskSizeBytes;
  /** @var string */
  public $etag;
  /** @var string */
  public $format;
  /** @var string */
  public $name;
  /** @var NamespacedName */
  public $sourcePvc;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $storageBytes;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $volumeBackupHandle;
  protected $sourcePvcType = NamespacedName::class;
  protected $sourcePvcDataType = '';
  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setDiskSizeBytes($diskSizeBytes)
  {
    $this->diskSizeBytes = $diskSizeBytes;
  }
  /** @return string */
  public function getDiskSizeBytes()
  {
    return $this->diskSizeBytes;
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
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
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
  /** @param NamespacedName */
  public function setSourcePvc(NamespacedName $sourcePvc)
  {
    $this->sourcePvc = $sourcePvc;
  }
  /** @return NamespacedName */
  public function getSourcePvc()
  {
    return $this->sourcePvc;
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
  public function setStorageBytes($storageBytes)
  {
    $this->storageBytes = $storageBytes;
  }
  /** @return string */
  public function getStorageBytes()
  {
    return $this->storageBytes;
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
  public function setVolumeBackupHandle($volumeBackupHandle)
  {
    $this->volumeBackupHandle = $volumeBackupHandle;
  }
  /** @return string */
  public function getVolumeBackupHandle()
  {
    return $this->volumeBackupHandle;
  }
}

class VolumeRestore extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var NamespacedName */
  public $targetPvc;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $volumeBackup;
  /** @var string */
  public $volumeHandle;
  /** @var string */
  public $volumeType;
  protected $targetPvcType = NamespacedName::class;
  protected $targetPvcDataType = '';
  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  /** @param NamespacedName */
  public function setTargetPvc(NamespacedName $targetPvc)
  {
    $this->targetPvc = $targetPvc;
  }
  /** @return NamespacedName */
  public function getTargetPvc()
  {
    return $this->targetPvc;
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
  public function setVolumeBackup($volumeBackup)
  {
    $this->volumeBackup = $volumeBackup;
  }
  /** @return string */
  public function getVolumeBackup()
  {
    return $this->volumeBackup;
  }
  /** @param string */
  public function setVolumeHandle($volumeHandle)
  {
    $this->volumeHandle = $volumeHandle;
  }
  /** @return string */
  public function getVolumeHandle()
  {
    return $this->volumeHandle;
  }
  /** @param string */
  public function setVolumeType($volumeType)
  {
    $this->volumeType = $volumeType;
  }
  /** @return string */
  public function getVolumeType()
  {
    return $this->volumeType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditConfig::class, 'Google_Service_BackupforGKE_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_BackupforGKE_AuditLogConfig');
class_alias(Backup::class, 'Google_Service_BackupforGKE_Backup');
class_alias(BackupConfig::class, 'Google_Service_BackupforGKE_BackupConfig');
class_alias(BackupPlan::class, 'Google_Service_BackupforGKE_BackupPlan');
class_alias(Binding::class, 'Google_Service_BackupforGKE_Binding');
class_alias(ClusterMetadata::class, 'Google_Service_BackupforGKE_ClusterMetadata');
class_alias(ClusterResourceRestoreScope::class, 'Google_Service_BackupforGKE_ClusterResourceRestoreScope');
class_alias(EncryptionKey::class, 'Google_Service_BackupforGKE_EncryptionKey');
class_alias(Expr::class, 'Google_Service_BackupforGKE_Expr');
class_alias(GkebackupEmpty::class, 'Google_Service_BackupforGKE_GkebackupEmpty');
class_alias(GoogleLongrunningCancelOperationRequest::class, 'Google_Service_BackupforGKE_GoogleLongrunningCancelOperationRequest');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_BackupforGKE_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_BackupforGKE_GoogleLongrunningOperation');
class_alias(GoogleRpcStatus::class, 'Google_Service_BackupforGKE_GoogleRpcStatus');
class_alias(GroupKind::class, 'Google_Service_BackupforGKE_GroupKind');
class_alias(ListBackupPlansResponse::class, 'Google_Service_BackupforGKE_ListBackupPlansResponse');
class_alias(ListBackupsResponse::class, 'Google_Service_BackupforGKE_ListBackupsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_BackupforGKE_ListLocationsResponse');
class_alias(ListRestorePlansResponse::class, 'Google_Service_BackupforGKE_ListRestorePlansResponse');
class_alias(ListRestoresResponse::class, 'Google_Service_BackupforGKE_ListRestoresResponse');
class_alias(ListVolumeBackupsResponse::class, 'Google_Service_BackupforGKE_ListVolumeBackupsResponse');
class_alias(ListVolumeRestoresResponse::class, 'Google_Service_BackupforGKE_ListVolumeRestoresResponse');
class_alias(Location::class, 'Google_Service_BackupforGKE_Location');
class_alias(NamespacedName::class, 'Google_Service_BackupforGKE_NamespacedName');
class_alias(NamespacedNames::class, 'Google_Service_BackupforGKE_NamespacedNames');
class_alias(Namespaces::class, 'Google_Service_BackupforGKE_Namespaces');
class_alias(OperationMetadata::class, 'Google_Service_BackupforGKE_OperationMetadata');
class_alias(Policy::class, 'Google_Service_BackupforGKE_Policy');
class_alias(Restore::class, 'Google_Service_BackupforGKE_Restore');
class_alias(RestoreConfig::class, 'Google_Service_BackupforGKE_RestoreConfig');
class_alias(RestorePlan::class, 'Google_Service_BackupforGKE_RestorePlan');
class_alias(RetentionPolicy::class, 'Google_Service_BackupforGKE_RetentionPolicy');
class_alias(Schedule::class, 'Google_Service_BackupforGKE_Schedule');
class_alias(SetIamPolicyRequest::class, 'Google_Service_BackupforGKE_SetIamPolicyRequest');
class_alias(SubstitutionRule::class, 'Google_Service_BackupforGKE_SubstitutionRule');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_BackupforGKE_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_BackupforGKE_TestIamPermissionsResponse');
class_alias(VolumeBackup::class, 'Google_Service_BackupforGKE_VolumeBackup');
class_alias(VolumeRestore::class, 'Google_Service_BackupforGKE_VolumeRestore');
