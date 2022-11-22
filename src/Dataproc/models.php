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

namespace Google\Service\Dataproc;

class AcceleratorConfig extends \Google\Model
{
  /** @var int */
  public $acceleratorCount;
  /** @var string */
  public $acceleratorTypeUri;

  /** @param int */
  public function setAcceleratorCount($acceleratorCount)
  {
    $this->acceleratorCount = $acceleratorCount;
  }
  /** @return int */
  public function getAcceleratorCount()
  {
    return $this->acceleratorCount;
  }
  /** @param string */
  public function setAcceleratorTypeUri($acceleratorTypeUri)
  {
    $this->acceleratorTypeUri = $acceleratorTypeUri;
  }
  /** @return string */
  public function getAcceleratorTypeUri()
  {
    return $this->acceleratorTypeUri;
  }
}

class AutoscalingConfig extends \Google\Model
{
  /** @var string */
  public $policyUri;

  /** @param string */
  public function setPolicyUri($policyUri)
  {
    $this->policyUri = $policyUri;
  }
  /** @return string */
  public function getPolicyUri()
  {
    return $this->policyUri;
  }
}

class AutoscalingPolicy extends \Google\Model
{
  /** @var BasicAutoscalingAlgorithm */
  public $basicAlgorithm;
  /** @var string */
  public $id;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var InstanceGroupAutoscalingPolicyConfig */
  public $secondaryWorkerConfig;
  /** @var InstanceGroupAutoscalingPolicyConfig */
  public $workerConfig;
  protected $basicAlgorithmType = BasicAutoscalingAlgorithm::class;
  protected $basicAlgorithmDataType = '';
  protected $secondaryWorkerConfigType = InstanceGroupAutoscalingPolicyConfig::class;
  protected $secondaryWorkerConfigDataType = '';
  protected $workerConfigType = InstanceGroupAutoscalingPolicyConfig::class;
  protected $workerConfigDataType = '';
  /** @param BasicAutoscalingAlgorithm */
  public function setBasicAlgorithm(BasicAutoscalingAlgorithm $basicAlgorithm)
  {
    $this->basicAlgorithm = $basicAlgorithm;
  }
  /** @return BasicAutoscalingAlgorithm */
  public function getBasicAlgorithm()
  {
    return $this->basicAlgorithm;
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
  /** @param InstanceGroupAutoscalingPolicyConfig */
  public function setSecondaryWorkerConfig(InstanceGroupAutoscalingPolicyConfig $secondaryWorkerConfig)
  {
    $this->secondaryWorkerConfig = $secondaryWorkerConfig;
  }
  /** @return InstanceGroupAutoscalingPolicyConfig */
  public function getSecondaryWorkerConfig()
  {
    return $this->secondaryWorkerConfig;
  }
  /** @param InstanceGroupAutoscalingPolicyConfig */
  public function setWorkerConfig(InstanceGroupAutoscalingPolicyConfig $workerConfig)
  {
    $this->workerConfig = $workerConfig;
  }
  /** @return InstanceGroupAutoscalingPolicyConfig */
  public function getWorkerConfig()
  {
    return $this->workerConfig;
  }
}

class AuxiliaryServicesConfig extends \Google\Model
{
  /** @var MetastoreConfig */
  public $metastoreConfig;
  /** @var SparkHistoryServerConfig */
  public $sparkHistoryServerConfig;
  protected $metastoreConfigType = MetastoreConfig::class;
  protected $metastoreConfigDataType = '';
  protected $sparkHistoryServerConfigType = SparkHistoryServerConfig::class;
  protected $sparkHistoryServerConfigDataType = '';
  /** @param MetastoreConfig */
  public function setMetastoreConfig(MetastoreConfig $metastoreConfig)
  {
    $this->metastoreConfig = $metastoreConfig;
  }
  /** @return MetastoreConfig */
  public function getMetastoreConfig()
  {
    return $this->metastoreConfig;
  }
  /** @param SparkHistoryServerConfig */
  public function setSparkHistoryServerConfig(SparkHistoryServerConfig $sparkHistoryServerConfig)
  {
    $this->sparkHistoryServerConfig = $sparkHistoryServerConfig;
  }
  /** @return SparkHistoryServerConfig */
  public function getSparkHistoryServerConfig()
  {
    return $this->sparkHistoryServerConfig;
  }
}

class BasicAutoscalingAlgorithm extends \Google\Model
{
  /** @var string */
  public $cooldownPeriod;
  /** @var SparkStandaloneAutoscalingConfig */
  public $sparkStandaloneConfig;
  /** @var BasicYarnAutoscalingConfig */
  public $yarnConfig;
  protected $sparkStandaloneConfigType = SparkStandaloneAutoscalingConfig::class;
  protected $sparkStandaloneConfigDataType = '';
  protected $yarnConfigType = BasicYarnAutoscalingConfig::class;
  protected $yarnConfigDataType = '';
  /** @param string */
  public function setCooldownPeriod($cooldownPeriod)
  {
    $this->cooldownPeriod = $cooldownPeriod;
  }
  /** @return string */
  public function getCooldownPeriod()
  {
    return $this->cooldownPeriod;
  }
  /** @param SparkStandaloneAutoscalingConfig */
  public function setSparkStandaloneConfig(SparkStandaloneAutoscalingConfig $sparkStandaloneConfig)
  {
    $this->sparkStandaloneConfig = $sparkStandaloneConfig;
  }
  /** @return SparkStandaloneAutoscalingConfig */
  public function getSparkStandaloneConfig()
  {
    return $this->sparkStandaloneConfig;
  }
  /** @param BasicYarnAutoscalingConfig */
  public function setYarnConfig(BasicYarnAutoscalingConfig $yarnConfig)
  {
    $this->yarnConfig = $yarnConfig;
  }
  /** @return BasicYarnAutoscalingConfig */
  public function getYarnConfig()
  {
    return $this->yarnConfig;
  }
}

class BasicYarnAutoscalingConfig extends \Google\Model
{
  /** @var string */
  public $gracefulDecommissionTimeout;
  public $scaleDownFactor;
  public $scaleDownMinWorkerFraction;
  public $scaleUpFactor;
  public $scaleUpMinWorkerFraction;

  /** @param string */
  public function setGracefulDecommissionTimeout($gracefulDecommissionTimeout)
  {
    $this->gracefulDecommissionTimeout = $gracefulDecommissionTimeout;
  }
  /** @return string */
  public function getGracefulDecommissionTimeout()
  {
    return $this->gracefulDecommissionTimeout;
  }
  public function setScaleDownFactor($scaleDownFactor)
  {
    $this->scaleDownFactor = $scaleDownFactor;
  }
  public function getScaleDownFactor()
  {
    return $this->scaleDownFactor;
  }
  public function setScaleDownMinWorkerFraction($scaleDownMinWorkerFraction)
  {
    $this->scaleDownMinWorkerFraction = $scaleDownMinWorkerFraction;
  }
  public function getScaleDownMinWorkerFraction()
  {
    return $this->scaleDownMinWorkerFraction;
  }
  public function setScaleUpFactor($scaleUpFactor)
  {
    $this->scaleUpFactor = $scaleUpFactor;
  }
  public function getScaleUpFactor()
  {
    return $this->scaleUpFactor;
  }
  public function setScaleUpMinWorkerFraction($scaleUpMinWorkerFraction)
  {
    $this->scaleUpMinWorkerFraction = $scaleUpMinWorkerFraction;
  }
  public function getScaleUpMinWorkerFraction()
  {
    return $this->scaleUpMinWorkerFraction;
  }
}

class Batch extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $creator;
  /** @var EnvironmentConfig */
  public $environmentConfig;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $operation;
  /** @var PySparkBatch */
  public $pysparkBatch;
  /** @var RuntimeConfig */
  public $runtimeConfig;
  /** @var RuntimeInfo */
  public $runtimeInfo;
  /** @var SparkBatch */
  public $sparkBatch;
  /** @var SparkRBatch */
  public $sparkRBatch;
  /** @var SparkSqlBatch */
  public $sparkSqlBatch;
  /** @var string */
  public $state;
  /** @var StateHistory[] */
  public $stateHistory;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $stateTime;
  /** @var string */
  public $uuid;
  protected $collection_key = 'stateHistory';
  protected $environmentConfigType = EnvironmentConfig::class;
  protected $environmentConfigDataType = '';
  protected $pysparkBatchType = PySparkBatch::class;
  protected $pysparkBatchDataType = '';
  protected $runtimeConfigType = RuntimeConfig::class;
  protected $runtimeConfigDataType = '';
  protected $runtimeInfoType = RuntimeInfo::class;
  protected $runtimeInfoDataType = '';
  protected $sparkBatchType = SparkBatch::class;
  protected $sparkBatchDataType = '';
  protected $sparkRBatchType = SparkRBatch::class;
  protected $sparkRBatchDataType = '';
  protected $sparkSqlBatchType = SparkSqlBatch::class;
  protected $sparkSqlBatchDataType = '';
  protected $stateHistoryType = StateHistory::class;
  protected $stateHistoryDataType = 'array';
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
  public function setCreator($creator)
  {
    $this->creator = $creator;
  }
  /** @return string */
  public function getCreator()
  {
    return $this->creator;
  }
  /** @param EnvironmentConfig */
  public function setEnvironmentConfig(EnvironmentConfig $environmentConfig)
  {
    $this->environmentConfig = $environmentConfig;
  }
  /** @return EnvironmentConfig */
  public function getEnvironmentConfig()
  {
    return $this->environmentConfig;
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
  public function setOperation($operation)
  {
    $this->operation = $operation;
  }
  /** @return string */
  public function getOperation()
  {
    return $this->operation;
  }
  /** @param PySparkBatch */
  public function setPysparkBatch(PySparkBatch $pysparkBatch)
  {
    $this->pysparkBatch = $pysparkBatch;
  }
  /** @return PySparkBatch */
  public function getPysparkBatch()
  {
    return $this->pysparkBatch;
  }
  /** @param RuntimeConfig */
  public function setRuntimeConfig(RuntimeConfig $runtimeConfig)
  {
    $this->runtimeConfig = $runtimeConfig;
  }
  /** @return RuntimeConfig */
  public function getRuntimeConfig()
  {
    return $this->runtimeConfig;
  }
  /** @param RuntimeInfo */
  public function setRuntimeInfo(RuntimeInfo $runtimeInfo)
  {
    $this->runtimeInfo = $runtimeInfo;
  }
  /** @return RuntimeInfo */
  public function getRuntimeInfo()
  {
    return $this->runtimeInfo;
  }
  /** @param SparkBatch */
  public function setSparkBatch(SparkBatch $sparkBatch)
  {
    $this->sparkBatch = $sparkBatch;
  }
  /** @return SparkBatch */
  public function getSparkBatch()
  {
    return $this->sparkBatch;
  }
  /** @param SparkRBatch */
  public function setSparkRBatch(SparkRBatch $sparkRBatch)
  {
    $this->sparkRBatch = $sparkRBatch;
  }
  /** @return SparkRBatch */
  public function getSparkRBatch()
  {
    return $this->sparkRBatch;
  }
  /** @param SparkSqlBatch */
  public function setSparkSqlBatch(SparkSqlBatch $sparkSqlBatch)
  {
    $this->sparkSqlBatch = $sparkSqlBatch;
  }
  /** @return SparkSqlBatch */
  public function getSparkSqlBatch()
  {
    return $this->sparkSqlBatch;
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
  /** @param StateHistory[] */
  public function setStateHistory($stateHistory)
  {
    $this->stateHistory = $stateHistory;
  }
  /** @return StateHistory[] */
  public function getStateHistory()
  {
    return $this->stateHistory;
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
  public function setStateTime($stateTime)
  {
    $this->stateTime = $stateTime;
  }
  /** @return string */
  public function getStateTime()
  {
    return $this->stateTime;
  }
  /** @param string */
  public function setUuid($uuid)
  {
    $this->uuid = $uuid;
  }
  /** @return string */
  public function getUuid()
  {
    return $this->uuid;
  }
}

class BatchOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $batch;
  /** @var string */
  public $batchUuid;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $doneTime;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $operationType;
  /** @var string[] */
  public $warnings;
  protected $collection_key = 'warnings';
  /** @param string */
  public function setBatch($batch)
  {
    $this->batch = $batch;
  }
  /** @return string */
  public function getBatch()
  {
    return $this->batch;
  }
  /** @param string */
  public function setBatchUuid($batchUuid)
  {
    $this->batchUuid = $batchUuid;
  }
  /** @return string */
  public function getBatchUuid()
  {
    return $this->batchUuid;
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
  public function setDoneTime($doneTime)
  {
    $this->doneTime = $doneTime;
  }
  /** @return string */
  public function getDoneTime()
  {
    return $this->doneTime;
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
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /** @param string[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return string[] */
  public function getWarnings()
  {
    return $this->warnings;
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

class CancelJobRequest extends \Google\Model
{
}

class Cluster extends \Google\Collection
{
  /** @var string */
  public $clusterName;
  /** @var string */
  public $clusterUuid;
  /** @var ClusterConfig */
  public $config;
  /** @var string[] */
  public $labels;
  /** @var ClusterMetrics */
  public $metrics;
  /** @var string */
  public $projectId;
  /** @var ClusterStatus */
  public $status;
  /** @var ClusterStatus[] */
  public $statusHistory;
  /** @var VirtualClusterConfig */
  public $virtualClusterConfig;
  protected $collection_key = 'statusHistory';
  protected $configType = ClusterConfig::class;
  protected $configDataType = '';
  protected $metricsType = ClusterMetrics::class;
  protected $metricsDataType = '';
  protected $statusType = ClusterStatus::class;
  protected $statusDataType = '';
  protected $statusHistoryType = ClusterStatus::class;
  protected $statusHistoryDataType = 'array';
  protected $virtualClusterConfigType = VirtualClusterConfig::class;
  protected $virtualClusterConfigDataType = '';
  /** @param string */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /** @return string */
  public function getClusterName()
  {
    return $this->clusterName;
  }
  /** @param string */
  public function setClusterUuid($clusterUuid)
  {
    $this->clusterUuid = $clusterUuid;
  }
  /** @return string */
  public function getClusterUuid()
  {
    return $this->clusterUuid;
  }
  /** @param ClusterConfig */
  public function setConfig(ClusterConfig $config)
  {
    $this->config = $config;
  }
  /** @return ClusterConfig */
  public function getConfig()
  {
    return $this->config;
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
  /** @param ClusterMetrics */
  public function setMetrics(ClusterMetrics $metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return ClusterMetrics */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param ClusterStatus */
  public function setStatus(ClusterStatus $status)
  {
    $this->status = $status;
  }
  /** @return ClusterStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param ClusterStatus[] */
  public function setStatusHistory($statusHistory)
  {
    $this->statusHistory = $statusHistory;
  }
  /** @return ClusterStatus[] */
  public function getStatusHistory()
  {
    return $this->statusHistory;
  }
  /** @param VirtualClusterConfig */
  public function setVirtualClusterConfig(VirtualClusterConfig $virtualClusterConfig)
  {
    $this->virtualClusterConfig = $virtualClusterConfig;
  }
  /** @return VirtualClusterConfig */
  public function getVirtualClusterConfig()
  {
    return $this->virtualClusterConfig;
  }
}

class ClusterConfig extends \Google\Collection
{
  /** @var AutoscalingConfig */
  public $autoscalingConfig;
  /** @var string */
  public $configBucket;
  /** @var DataprocMetricConfig */
  public $dataprocMetricConfig;
  /** @var EncryptionConfig */
  public $encryptionConfig;
  /** @var EndpointConfig */
  public $endpointConfig;
  /** @var GceClusterConfig */
  public $gceClusterConfig;
  /** @var GkeClusterConfig */
  public $gkeClusterConfig;
  /** @var NodeInitializationAction[] */
  public $initializationActions;
  /** @var LifecycleConfig */
  public $lifecycleConfig;
  /** @var InstanceGroupConfig */
  public $masterConfig;
  /** @var MetastoreConfig */
  public $metastoreConfig;
  /** @var InstanceGroupConfig */
  public $secondaryWorkerConfig;
  /** @var SecurityConfig */
  public $securityConfig;
  /** @var SoftwareConfig */
  public $softwareConfig;
  /** @var string */
  public $tempBucket;
  /** @var InstanceGroupConfig */
  public $workerConfig;
  protected $collection_key = 'initializationActions';
  protected $autoscalingConfigType = AutoscalingConfig::class;
  protected $autoscalingConfigDataType = '';
  protected $dataprocMetricConfigType = DataprocMetricConfig::class;
  protected $dataprocMetricConfigDataType = '';
  protected $encryptionConfigType = EncryptionConfig::class;
  protected $encryptionConfigDataType = '';
  protected $endpointConfigType = EndpointConfig::class;
  protected $endpointConfigDataType = '';
  protected $gceClusterConfigType = GceClusterConfig::class;
  protected $gceClusterConfigDataType = '';
  protected $gkeClusterConfigType = GkeClusterConfig::class;
  protected $gkeClusterConfigDataType = '';
  protected $initializationActionsType = NodeInitializationAction::class;
  protected $initializationActionsDataType = 'array';
  protected $lifecycleConfigType = LifecycleConfig::class;
  protected $lifecycleConfigDataType = '';
  protected $masterConfigType = InstanceGroupConfig::class;
  protected $masterConfigDataType = '';
  protected $metastoreConfigType = MetastoreConfig::class;
  protected $metastoreConfigDataType = '';
  protected $secondaryWorkerConfigType = InstanceGroupConfig::class;
  protected $secondaryWorkerConfigDataType = '';
  protected $securityConfigType = SecurityConfig::class;
  protected $securityConfigDataType = '';
  protected $softwareConfigType = SoftwareConfig::class;
  protected $softwareConfigDataType = '';
  protected $workerConfigType = InstanceGroupConfig::class;
  protected $workerConfigDataType = '';
  /** @param AutoscalingConfig */
  public function setAutoscalingConfig(AutoscalingConfig $autoscalingConfig)
  {
    $this->autoscalingConfig = $autoscalingConfig;
  }
  /** @return AutoscalingConfig */
  public function getAutoscalingConfig()
  {
    return $this->autoscalingConfig;
  }
  /** @param string */
  public function setConfigBucket($configBucket)
  {
    $this->configBucket = $configBucket;
  }
  /** @return string */
  public function getConfigBucket()
  {
    return $this->configBucket;
  }
  /** @param DataprocMetricConfig */
  public function setDataprocMetricConfig(DataprocMetricConfig $dataprocMetricConfig)
  {
    $this->dataprocMetricConfig = $dataprocMetricConfig;
  }
  /** @return DataprocMetricConfig */
  public function getDataprocMetricConfig()
  {
    return $this->dataprocMetricConfig;
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
  /** @param EndpointConfig */
  public function setEndpointConfig(EndpointConfig $endpointConfig)
  {
    $this->endpointConfig = $endpointConfig;
  }
  /** @return EndpointConfig */
  public function getEndpointConfig()
  {
    return $this->endpointConfig;
  }
  /** @param GceClusterConfig */
  public function setGceClusterConfig(GceClusterConfig $gceClusterConfig)
  {
    $this->gceClusterConfig = $gceClusterConfig;
  }
  /** @return GceClusterConfig */
  public function getGceClusterConfig()
  {
    return $this->gceClusterConfig;
  }
  /** @param GkeClusterConfig */
  public function setGkeClusterConfig(GkeClusterConfig $gkeClusterConfig)
  {
    $this->gkeClusterConfig = $gkeClusterConfig;
  }
  /** @return GkeClusterConfig */
  public function getGkeClusterConfig()
  {
    return $this->gkeClusterConfig;
  }
  /** @param NodeInitializationAction[] */
  public function setInitializationActions($initializationActions)
  {
    $this->initializationActions = $initializationActions;
  }
  /** @return NodeInitializationAction[] */
  public function getInitializationActions()
  {
    return $this->initializationActions;
  }
  /** @param LifecycleConfig */
  public function setLifecycleConfig(LifecycleConfig $lifecycleConfig)
  {
    $this->lifecycleConfig = $lifecycleConfig;
  }
  /** @return LifecycleConfig */
  public function getLifecycleConfig()
  {
    return $this->lifecycleConfig;
  }
  /** @param InstanceGroupConfig */
  public function setMasterConfig(InstanceGroupConfig $masterConfig)
  {
    $this->masterConfig = $masterConfig;
  }
  /** @return InstanceGroupConfig */
  public function getMasterConfig()
  {
    return $this->masterConfig;
  }
  /** @param MetastoreConfig */
  public function setMetastoreConfig(MetastoreConfig $metastoreConfig)
  {
    $this->metastoreConfig = $metastoreConfig;
  }
  /** @return MetastoreConfig */
  public function getMetastoreConfig()
  {
    return $this->metastoreConfig;
  }
  /** @param InstanceGroupConfig */
  public function setSecondaryWorkerConfig(InstanceGroupConfig $secondaryWorkerConfig)
  {
    $this->secondaryWorkerConfig = $secondaryWorkerConfig;
  }
  /** @return InstanceGroupConfig */
  public function getSecondaryWorkerConfig()
  {
    return $this->secondaryWorkerConfig;
  }
  /** @param SecurityConfig */
  public function setSecurityConfig(SecurityConfig $securityConfig)
  {
    $this->securityConfig = $securityConfig;
  }
  /** @return SecurityConfig */
  public function getSecurityConfig()
  {
    return $this->securityConfig;
  }
  /** @param SoftwareConfig */
  public function setSoftwareConfig(SoftwareConfig $softwareConfig)
  {
    $this->softwareConfig = $softwareConfig;
  }
  /** @return SoftwareConfig */
  public function getSoftwareConfig()
  {
    return $this->softwareConfig;
  }
  /** @param string */
  public function setTempBucket($tempBucket)
  {
    $this->tempBucket = $tempBucket;
  }
  /** @return string */
  public function getTempBucket()
  {
    return $this->tempBucket;
  }
  /** @param InstanceGroupConfig */
  public function setWorkerConfig(InstanceGroupConfig $workerConfig)
  {
    $this->workerConfig = $workerConfig;
  }
  /** @return InstanceGroupConfig */
  public function getWorkerConfig()
  {
    return $this->workerConfig;
  }
}

class ClusterMetrics extends \Google\Model
{
  /** @var string[] */
  public $hdfsMetrics;
  /** @var string[] */
  public $yarnMetrics;

  /** @param string[] */
  public function setHdfsMetrics($hdfsMetrics)
  {
    $this->hdfsMetrics = $hdfsMetrics;
  }
  /** @return string[] */
  public function getHdfsMetrics()
  {
    return $this->hdfsMetrics;
  }
  /** @param string[] */
  public function setYarnMetrics($yarnMetrics)
  {
    $this->yarnMetrics = $yarnMetrics;
  }
  /** @return string[] */
  public function getYarnMetrics()
  {
    return $this->yarnMetrics;
  }
}

class ClusterOperation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var string */
  public $error;
  /** @var string */
  public $operationId;

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
  /** @param string */
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return string */
  public function getError()
  {
    return $this->error;
  }
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
}

class ClusterOperationMetadata extends \Google\Collection
{
  /** @var string[] */
  public $childOperationIds;
  /** @var string */
  public $clusterName;
  /** @var string */
  public $clusterUuid;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $operationType;
  /** @var ClusterOperationStatus */
  public $status;
  /** @var ClusterOperationStatus[] */
  public $statusHistory;
  /** @var string[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $statusType = ClusterOperationStatus::class;
  protected $statusDataType = '';
  protected $statusHistoryType = ClusterOperationStatus::class;
  protected $statusHistoryDataType = 'array';
  /** @param string[] */
  public function setChildOperationIds($childOperationIds)
  {
    $this->childOperationIds = $childOperationIds;
  }
  /** @return string[] */
  public function getChildOperationIds()
  {
    return $this->childOperationIds;
  }
  /** @param string */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /** @return string */
  public function getClusterName()
  {
    return $this->clusterName;
  }
  /** @param string */
  public function setClusterUuid($clusterUuid)
  {
    $this->clusterUuid = $clusterUuid;
  }
  /** @return string */
  public function getClusterUuid()
  {
    return $this->clusterUuid;
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
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /** @param ClusterOperationStatus */
  public function setStatus(ClusterOperationStatus $status)
  {
    $this->status = $status;
  }
  /** @return ClusterOperationStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param ClusterOperationStatus[] */
  public function setStatusHistory($statusHistory)
  {
    $this->statusHistory = $statusHistory;
  }
  /** @return ClusterOperationStatus[] */
  public function getStatusHistory()
  {
    return $this->statusHistory;
  }
  /** @param string[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return string[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class ClusterOperationStatus extends \Google\Model
{
  /** @var string */
  public $details;
  /** @var string */
  public $innerState;
  /** @var string */
  public $state;
  /** @var string */
  public $stateStartTime;

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
  public function setInnerState($innerState)
  {
    $this->innerState = $innerState;
  }
  /** @return string */
  public function getInnerState()
  {
    return $this->innerState;
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
  public function setStateStartTime($stateStartTime)
  {
    $this->stateStartTime = $stateStartTime;
  }
  /** @return string */
  public function getStateStartTime()
  {
    return $this->stateStartTime;
  }
}

class ClusterSelector extends \Google\Model
{
  /** @var string[] */
  public $clusterLabels;
  /** @var string */
  public $zone;

  /** @param string[] */
  public function setClusterLabels($clusterLabels)
  {
    $this->clusterLabels = $clusterLabels;
  }
  /** @return string[] */
  public function getClusterLabels()
  {
    return $this->clusterLabels;
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

class ClusterStatus extends \Google\Model
{
  /** @var string */
  public $detail;
  /** @var string */
  public $state;
  /** @var string */
  public $stateStartTime;
  /** @var string */
  public $substate;

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
  public function setStateStartTime($stateStartTime)
  {
    $this->stateStartTime = $stateStartTime;
  }
  /** @return string */
  public function getStateStartTime()
  {
    return $this->stateStartTime;
  }
  /** @param string */
  public function setSubstate($substate)
  {
    $this->substate = $substate;
  }
  /** @return string */
  public function getSubstate()
  {
    return $this->substate;
  }
}

class ConfidentialInstanceConfig extends \Google\Model
{
  /** @var bool */
  public $enableConfidentialCompute;

  /** @param bool */
  public function setEnableConfidentialCompute($enableConfidentialCompute)
  {
    $this->enableConfidentialCompute = $enableConfidentialCompute;
  }
  /** @return bool */
  public function getEnableConfidentialCompute()
  {
    return $this->enableConfidentialCompute;
  }
}

class DataprocEmpty extends \Google\Model
{
}

class DataprocMetricConfig extends \Google\Collection
{
  /** @var Metric[] */
  public $metrics;
  protected $collection_key = 'metrics';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
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
}

class DiagnoseClusterRequest extends \Google\Model
{
}

class DiagnoseClusterResults extends \Google\Model
{
  /** @var string */
  public $outputUri;

  /** @param string */
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /** @return string */
  public function getOutputUri()
  {
    return $this->outputUri;
  }
}

class DiskConfig extends \Google\Model
{
  /** @var int */
  public $bootDiskSizeGb;
  /** @var string */
  public $bootDiskType;
  /** @var string */
  public $localSsdInterface;
  /** @var int */
  public $numLocalSsds;

  /** @param int */
  public function setBootDiskSizeGb($bootDiskSizeGb)
  {
    $this->bootDiskSizeGb = $bootDiskSizeGb;
  }
  /** @return int */
  public function getBootDiskSizeGb()
  {
    return $this->bootDiskSizeGb;
  }
  /** @param string */
  public function setBootDiskType($bootDiskType)
  {
    $this->bootDiskType = $bootDiskType;
  }
  /** @return string */
  public function getBootDiskType()
  {
    return $this->bootDiskType;
  }
  /** @param string */
  public function setLocalSsdInterface($localSsdInterface)
  {
    $this->localSsdInterface = $localSsdInterface;
  }
  /** @return string */
  public function getLocalSsdInterface()
  {
    return $this->localSsdInterface;
  }
  /** @param int */
  public function setNumLocalSsds($numLocalSsds)
  {
    $this->numLocalSsds = $numLocalSsds;
  }
  /** @return int */
  public function getNumLocalSsds()
  {
    return $this->numLocalSsds;
  }
}

class EncryptionConfig extends \Google\Model
{
  /** @var string */
  public $gcePdKmsKeyName;

  /** @param string */
  public function setGcePdKmsKeyName($gcePdKmsKeyName)
  {
    $this->gcePdKmsKeyName = $gcePdKmsKeyName;
  }
  /** @return string */
  public function getGcePdKmsKeyName()
  {
    return $this->gcePdKmsKeyName;
  }
}

class EndpointConfig extends \Google\Model
{
  /** @var bool */
  public $enableHttpPortAccess;
  /** @var string[] */
  public $httpPorts;

  /** @param bool */
  public function setEnableHttpPortAccess($enableHttpPortAccess)
  {
    $this->enableHttpPortAccess = $enableHttpPortAccess;
  }
  /** @return bool */
  public function getEnableHttpPortAccess()
  {
    return $this->enableHttpPortAccess;
  }
  /** @param string[] */
  public function setHttpPorts($httpPorts)
  {
    $this->httpPorts = $httpPorts;
  }
  /** @return string[] */
  public function getHttpPorts()
  {
    return $this->httpPorts;
  }
}

class EnvironmentConfig extends \Google\Model
{
  /** @var ExecutionConfig */
  public $executionConfig;
  /** @var PeripheralsConfig */
  public $peripheralsConfig;
  protected $executionConfigType = ExecutionConfig::class;
  protected $executionConfigDataType = '';
  protected $peripheralsConfigType = PeripheralsConfig::class;
  protected $peripheralsConfigDataType = '';
  /** @param ExecutionConfig */
  public function setExecutionConfig(ExecutionConfig $executionConfig)
  {
    $this->executionConfig = $executionConfig;
  }
  /** @return ExecutionConfig */
  public function getExecutionConfig()
  {
    return $this->executionConfig;
  }
  /** @param PeripheralsConfig */
  public function setPeripheralsConfig(PeripheralsConfig $peripheralsConfig)
  {
    $this->peripheralsConfig = $peripheralsConfig;
  }
  /** @return PeripheralsConfig */
  public function getPeripheralsConfig()
  {
    return $this->peripheralsConfig;
  }
}

class ExecutionConfig extends \Google\Collection
{
  /** @var string */
  public $idleTtl;
  /** @var string */
  public $kmsKey;
  /** @var string[] */
  public $networkTags;
  /** @var string */
  public $networkUri;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $subnetworkUri;
  protected $collection_key = 'networkTags';
  /** @param string */
  public function setIdleTtl($idleTtl)
  {
    $this->idleTtl = $idleTtl;
  }
  /** @return string */
  public function getIdleTtl()
  {
    return $this->idleTtl;
  }
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
  /** @param string[] */
  public function setNetworkTags($networkTags)
  {
    $this->networkTags = $networkTags;
  }
  /** @return string[] */
  public function getNetworkTags()
  {
    return $this->networkTags;
  }
  /** @param string */
  public function setNetworkUri($networkUri)
  {
    $this->networkUri = $networkUri;
  }
  /** @return string */
  public function getNetworkUri()
  {
    return $this->networkUri;
  }
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /** @param string */
  public function setSubnetworkUri($subnetworkUri)
  {
    $this->subnetworkUri = $subnetworkUri;
  }
  /** @return string */
  public function getSubnetworkUri()
  {
    return $this->subnetworkUri;
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

class GceClusterConfig extends \Google\Collection
{
  /** @var ConfidentialInstanceConfig */
  public $confidentialInstanceConfig;
  /** @var bool */
  public $internalIpOnly;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $networkUri;
  /** @var NodeGroupAffinity */
  public $nodeGroupAffinity;
  /** @var string */
  public $privateIpv6GoogleAccess;
  /** @var ReservationAffinity */
  public $reservationAffinity;
  /** @var string */
  public $serviceAccount;
  /** @var string[] */
  public $serviceAccountScopes;
  /** @var ShieldedInstanceConfig */
  public $shieldedInstanceConfig;
  /** @var string */
  public $subnetworkUri;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $zoneUri;
  protected $collection_key = 'tags';
  protected $confidentialInstanceConfigType = ConfidentialInstanceConfig::class;
  protected $confidentialInstanceConfigDataType = '';
  protected $nodeGroupAffinityType = NodeGroupAffinity::class;
  protected $nodeGroupAffinityDataType = '';
  protected $reservationAffinityType = ReservationAffinity::class;
  protected $reservationAffinityDataType = '';
  protected $shieldedInstanceConfigType = ShieldedInstanceConfig::class;
  protected $shieldedInstanceConfigDataType = '';
  /** @param ConfidentialInstanceConfig */
  public function setConfidentialInstanceConfig(ConfidentialInstanceConfig $confidentialInstanceConfig)
  {
    $this->confidentialInstanceConfig = $confidentialInstanceConfig;
  }
  /** @return ConfidentialInstanceConfig */
  public function getConfidentialInstanceConfig()
  {
    return $this->confidentialInstanceConfig;
  }
  /** @param bool */
  public function setInternalIpOnly($internalIpOnly)
  {
    $this->internalIpOnly = $internalIpOnly;
  }
  /** @return bool */
  public function getInternalIpOnly()
  {
    return $this->internalIpOnly;
  }
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setNetworkUri($networkUri)
  {
    $this->networkUri = $networkUri;
  }
  /** @return string */
  public function getNetworkUri()
  {
    return $this->networkUri;
  }
  /** @param NodeGroupAffinity */
  public function setNodeGroupAffinity(NodeGroupAffinity $nodeGroupAffinity)
  {
    $this->nodeGroupAffinity = $nodeGroupAffinity;
  }
  /** @return NodeGroupAffinity */
  public function getNodeGroupAffinity()
  {
    return $this->nodeGroupAffinity;
  }
  /** @param string */
  public function setPrivateIpv6GoogleAccess($privateIpv6GoogleAccess)
  {
    $this->privateIpv6GoogleAccess = $privateIpv6GoogleAccess;
  }
  /** @return string */
  public function getPrivateIpv6GoogleAccess()
  {
    return $this->privateIpv6GoogleAccess;
  }
  /** @param ReservationAffinity */
  public function setReservationAffinity(ReservationAffinity $reservationAffinity)
  {
    $this->reservationAffinity = $reservationAffinity;
  }
  /** @return ReservationAffinity */
  public function getReservationAffinity()
  {
    return $this->reservationAffinity;
  }
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /** @param string[] */
  public function setServiceAccountScopes($serviceAccountScopes)
  {
    $this->serviceAccountScopes = $serviceAccountScopes;
  }
  /** @return string[] */
  public function getServiceAccountScopes()
  {
    return $this->serviceAccountScopes;
  }
  /** @param ShieldedInstanceConfig */
  public function setShieldedInstanceConfig(ShieldedInstanceConfig $shieldedInstanceConfig)
  {
    $this->shieldedInstanceConfig = $shieldedInstanceConfig;
  }
  /** @return ShieldedInstanceConfig */
  public function getShieldedInstanceConfig()
  {
    return $this->shieldedInstanceConfig;
  }
  /** @param string */
  public function setSubnetworkUri($subnetworkUri)
  {
    $this->subnetworkUri = $subnetworkUri;
  }
  /** @return string */
  public function getSubnetworkUri()
  {
    return $this->subnetworkUri;
  }
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
  /** @param string */
  public function setZoneUri($zoneUri)
  {
    $this->zoneUri = $zoneUri;
  }
  /** @return string */
  public function getZoneUri()
  {
    return $this->zoneUri;
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

class GkeClusterConfig extends \Google\Collection
{
  /** @var string */
  public $gkeClusterTarget;
  /** @var NamespacedGkeDeploymentTarget */
  public $namespacedGkeDeploymentTarget;
  /** @var GkeNodePoolTarget[] */
  public $nodePoolTarget;
  protected $collection_key = 'nodePoolTarget';
  protected $namespacedGkeDeploymentTargetType = NamespacedGkeDeploymentTarget::class;
  protected $namespacedGkeDeploymentTargetDataType = '';
  protected $nodePoolTargetType = GkeNodePoolTarget::class;
  protected $nodePoolTargetDataType = 'array';
  /** @param string */
  public function setGkeClusterTarget($gkeClusterTarget)
  {
    $this->gkeClusterTarget = $gkeClusterTarget;
  }
  /** @return string */
  public function getGkeClusterTarget()
  {
    return $this->gkeClusterTarget;
  }
  /** @param NamespacedGkeDeploymentTarget */
  public function setNamespacedGkeDeploymentTarget(NamespacedGkeDeploymentTarget $namespacedGkeDeploymentTarget)
  {
    $this->namespacedGkeDeploymentTarget = $namespacedGkeDeploymentTarget;
  }
  /** @return NamespacedGkeDeploymentTarget */
  public function getNamespacedGkeDeploymentTarget()
  {
    return $this->namespacedGkeDeploymentTarget;
  }
  /** @param GkeNodePoolTarget[] */
  public function setNodePoolTarget($nodePoolTarget)
  {
    $this->nodePoolTarget = $nodePoolTarget;
  }
  /** @return GkeNodePoolTarget[] */
  public function getNodePoolTarget()
  {
    return $this->nodePoolTarget;
  }
}

class GkeNodeConfig extends \Google\Collection
{
  /** @var GkeNodePoolAcceleratorConfig[] */
  public $accelerators;
  /** @var string */
  public $bootDiskKmsKey;
  /** @var int */
  public $localSsdCount;
  /** @var string */
  public $machineType;
  /** @var string */
  public $minCpuPlatform;
  /** @var bool */
  public $preemptible;
  /** @var bool */
  public $spot;
  protected $collection_key = 'accelerators';
  protected $acceleratorsType = GkeNodePoolAcceleratorConfig::class;
  protected $acceleratorsDataType = 'array';
  /** @param GkeNodePoolAcceleratorConfig[] */
  public function setAccelerators($accelerators)
  {
    $this->accelerators = $accelerators;
  }
  /** @return GkeNodePoolAcceleratorConfig[] */
  public function getAccelerators()
  {
    return $this->accelerators;
  }
  /** @param string */
  public function setBootDiskKmsKey($bootDiskKmsKey)
  {
    $this->bootDiskKmsKey = $bootDiskKmsKey;
  }
  /** @return string */
  public function getBootDiskKmsKey()
  {
    return $this->bootDiskKmsKey;
  }
  /** @param int */
  public function setLocalSsdCount($localSsdCount)
  {
    $this->localSsdCount = $localSsdCount;
  }
  /** @return int */
  public function getLocalSsdCount()
  {
    return $this->localSsdCount;
  }
  /** @param string */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /** @param string */
  public function setMinCpuPlatform($minCpuPlatform)
  {
    $this->minCpuPlatform = $minCpuPlatform;
  }
  /** @return string */
  public function getMinCpuPlatform()
  {
    return $this->minCpuPlatform;
  }
  /** @param bool */
  public function setPreemptible($preemptible)
  {
    $this->preemptible = $preemptible;
  }
  /** @return bool */
  public function getPreemptible()
  {
    return $this->preemptible;
  }
  /** @param bool */
  public function setSpot($spot)
  {
    $this->spot = $spot;
  }
  /** @return bool */
  public function getSpot()
  {
    return $this->spot;
  }
}

class GkeNodePoolAcceleratorConfig extends \Google\Model
{
  /** @var string */
  public $acceleratorCount;
  /** @var string */
  public $acceleratorType;
  /** @var string */
  public $gpuPartitionSize;

  /** @param string */
  public function setAcceleratorCount($acceleratorCount)
  {
    $this->acceleratorCount = $acceleratorCount;
  }
  /** @return string */
  public function getAcceleratorCount()
  {
    return $this->acceleratorCount;
  }
  /** @param string */
  public function setAcceleratorType($acceleratorType)
  {
    $this->acceleratorType = $acceleratorType;
  }
  /** @return string */
  public function getAcceleratorType()
  {
    return $this->acceleratorType;
  }
  /** @param string */
  public function setGpuPartitionSize($gpuPartitionSize)
  {
    $this->gpuPartitionSize = $gpuPartitionSize;
  }
  /** @return string */
  public function getGpuPartitionSize()
  {
    return $this->gpuPartitionSize;
  }
}

class GkeNodePoolAutoscalingConfig extends \Google\Model
{
  /** @var int */
  public $maxNodeCount;
  /** @var int */
  public $minNodeCount;

  /** @param int */
  public function setMaxNodeCount($maxNodeCount)
  {
    $this->maxNodeCount = $maxNodeCount;
  }
  /** @return int */
  public function getMaxNodeCount()
  {
    return $this->maxNodeCount;
  }
  /** @param int */
  public function setMinNodeCount($minNodeCount)
  {
    $this->minNodeCount = $minNodeCount;
  }
  /** @return int */
  public function getMinNodeCount()
  {
    return $this->minNodeCount;
  }
}

class GkeNodePoolConfig extends \Google\Collection
{
  /** @var GkeNodePoolAutoscalingConfig */
  public $autoscaling;
  /** @var GkeNodeConfig */
  public $config;
  /** @var string[] */
  public $locations;
  protected $collection_key = 'locations';
  protected $autoscalingType = GkeNodePoolAutoscalingConfig::class;
  protected $autoscalingDataType = '';
  protected $configType = GkeNodeConfig::class;
  protected $configDataType = '';
  /** @param GkeNodePoolAutoscalingConfig */
  public function setAutoscaling(GkeNodePoolAutoscalingConfig $autoscaling)
  {
    $this->autoscaling = $autoscaling;
  }
  /** @return GkeNodePoolAutoscalingConfig */
  public function getAutoscaling()
  {
    return $this->autoscaling;
  }
  /** @param GkeNodeConfig */
  public function setConfig(GkeNodeConfig $config)
  {
    $this->config = $config;
  }
  /** @return GkeNodeConfig */
  public function getConfig()
  {
    return $this->config;
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
}

class GkeNodePoolTarget extends \Google\Collection
{
  /** @var string */
  public $nodePool;
  /** @var GkeNodePoolConfig */
  public $nodePoolConfig;
  /** @var string[] */
  public $roles;
  protected $collection_key = 'roles';
  protected $nodePoolConfigType = GkeNodePoolConfig::class;
  protected $nodePoolConfigDataType = '';
  /** @param string */
  public function setNodePool($nodePool)
  {
    $this->nodePool = $nodePool;
  }
  /** @return string */
  public function getNodePool()
  {
    return $this->nodePool;
  }
  /** @param GkeNodePoolConfig */
  public function setNodePoolConfig(GkeNodePoolConfig $nodePoolConfig)
  {
    $this->nodePoolConfig = $nodePoolConfig;
  }
  /** @return GkeNodePoolConfig */
  public function getNodePoolConfig()
  {
    return $this->nodePoolConfig;
  }
  /** @param string[] */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /** @return string[] */
  public function getRoles()
  {
    return $this->roles;
  }
}

class HadoopJob extends \Google\Collection
{
  /** @var string[] */
  public $archiveUris;
  /** @var string[] */
  public $args;
  /** @var string[] */
  public $fileUris;
  /** @var string[] */
  public $jarFileUris;
  /** @var LoggingConfig */
  public $loggingConfig;
  /** @var string */
  public $mainClass;
  /** @var string */
  public $mainJarFileUri;
  /** @var string[] */
  public $properties;
  protected $collection_key = 'jarFileUris';
  protected $loggingConfigType = LoggingConfig::class;
  protected $loggingConfigDataType = '';
  /** @param string[] */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /** @return string[] */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
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
  /** @param string[] */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /** @return string[] */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /** @param string[] */
  public function setJarFileUris($jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }
  /** @return string[] */
  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }
  /** @param LoggingConfig */
  public function setLoggingConfig(LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return LoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
  /** @param string */
  public function setMainClass($mainClass)
  {
    $this->mainClass = $mainClass;
  }
  /** @return string */
  public function getMainClass()
  {
    return $this->mainClass;
  }
  /** @param string */
  public function setMainJarFileUri($mainJarFileUri)
  {
    $this->mainJarFileUri = $mainJarFileUri;
  }
  /** @return string */
  public function getMainJarFileUri()
  {
    return $this->mainJarFileUri;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class HiveJob extends \Google\Collection
{
  /** @var bool */
  public $continueOnFailure;
  /** @var string[] */
  public $jarFileUris;
  /** @var string[] */
  public $properties;
  /** @var string */
  public $queryFileUri;
  /** @var QueryList */
  public $queryList;
  /** @var string[] */
  public $scriptVariables;
  protected $collection_key = 'jarFileUris';
  protected $queryListType = QueryList::class;
  protected $queryListDataType = '';
  /** @param bool */
  public function setContinueOnFailure($continueOnFailure)
  {
    $this->continueOnFailure = $continueOnFailure;
  }
  /** @return bool */
  public function getContinueOnFailure()
  {
    return $this->continueOnFailure;
  }
  /** @param string[] */
  public function setJarFileUris($jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }
  /** @return string[] */
  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setQueryFileUri($queryFileUri)
  {
    $this->queryFileUri = $queryFileUri;
  }
  /** @return string */
  public function getQueryFileUri()
  {
    return $this->queryFileUri;
  }
  /** @param QueryList */
  public function setQueryList(QueryList $queryList)
  {
    $this->queryList = $queryList;
  }
  /** @return QueryList */
  public function getQueryList()
  {
    return $this->queryList;
  }
  /** @param string[] */
  public function setScriptVariables($scriptVariables)
  {
    $this->scriptVariables = $scriptVariables;
  }
  /** @return string[] */
  public function getScriptVariables()
  {
    return $this->scriptVariables;
  }
}

class IdentityConfig extends \Google\Model
{
  /** @var string[] */
  public $userServiceAccountMapping;

  /** @param string[] */
  public function setUserServiceAccountMapping($userServiceAccountMapping)
  {
    $this->userServiceAccountMapping = $userServiceAccountMapping;
  }
  /** @return string[] */
  public function getUserServiceAccountMapping()
  {
    return $this->userServiceAccountMapping;
  }
}

class InjectCredentialsRequest extends \Google\Model
{
  /** @var string */
  public $clusterUuid;
  /** @var string */
  public $credentialsCiphertext;

  /** @param string */
  public function setClusterUuid($clusterUuid)
  {
    $this->clusterUuid = $clusterUuid;
  }
  /** @return string */
  public function getClusterUuid()
  {
    return $this->clusterUuid;
  }
  /** @param string */
  public function setCredentialsCiphertext($credentialsCiphertext)
  {
    $this->credentialsCiphertext = $credentialsCiphertext;
  }
  /** @return string */
  public function getCredentialsCiphertext()
  {
    return $this->credentialsCiphertext;
  }
}

class InstanceGroupAutoscalingPolicyConfig extends \Google\Model
{
  /** @var int */
  public $maxInstances;
  /** @var int */
  public $minInstances;
  /** @var int */
  public $weight;

  /** @param int */
  public function setMaxInstances($maxInstances)
  {
    $this->maxInstances = $maxInstances;
  }
  /** @return int */
  public function getMaxInstances()
  {
    return $this->maxInstances;
  }
  /** @param int */
  public function setMinInstances($minInstances)
  {
    $this->minInstances = $minInstances;
  }
  /** @return int */
  public function getMinInstances()
  {
    return $this->minInstances;
  }
  /** @param int */
  public function setWeight($weight)
  {
    $this->weight = $weight;
  }
  /** @return int */
  public function getWeight()
  {
    return $this->weight;
  }
}

class InstanceGroupConfig extends \Google\Collection
{
  /** @var AcceleratorConfig[] */
  public $accelerators;
  /** @var DiskConfig */
  public $diskConfig;
  /** @var string */
  public $imageUri;
  /** @var string[] */
  public $instanceNames;
  /** @var InstanceReference[] */
  public $instanceReferences;
  /** @var bool */
  public $isPreemptible;
  /** @var string */
  public $machineTypeUri;
  /** @var ManagedGroupConfig */
  public $managedGroupConfig;
  /** @var string */
  public $minCpuPlatform;
  /** @var int */
  public $numInstances;
  /** @var string */
  public $preemptibility;
  protected $collection_key = 'instanceReferences';
  protected $acceleratorsType = AcceleratorConfig::class;
  protected $acceleratorsDataType = 'array';
  protected $diskConfigType = DiskConfig::class;
  protected $diskConfigDataType = '';
  protected $instanceReferencesType = InstanceReference::class;
  protected $instanceReferencesDataType = 'array';
  protected $managedGroupConfigType = ManagedGroupConfig::class;
  protected $managedGroupConfigDataType = '';
  /** @param AcceleratorConfig[] */
  public function setAccelerators($accelerators)
  {
    $this->accelerators = $accelerators;
  }
  /** @return AcceleratorConfig[] */
  public function getAccelerators()
  {
    return $this->accelerators;
  }
  /** @param DiskConfig */
  public function setDiskConfig(DiskConfig $diskConfig)
  {
    $this->diskConfig = $diskConfig;
  }
  /** @return DiskConfig */
  public function getDiskConfig()
  {
    return $this->diskConfig;
  }
  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
  }
  /** @param string[] */
  public function setInstanceNames($instanceNames)
  {
    $this->instanceNames = $instanceNames;
  }
  /** @return string[] */
  public function getInstanceNames()
  {
    return $this->instanceNames;
  }
  /** @param InstanceReference[] */
  public function setInstanceReferences($instanceReferences)
  {
    $this->instanceReferences = $instanceReferences;
  }
  /** @return InstanceReference[] */
  public function getInstanceReferences()
  {
    return $this->instanceReferences;
  }
  /** @param bool */
  public function setIsPreemptible($isPreemptible)
  {
    $this->isPreemptible = $isPreemptible;
  }
  /** @return bool */
  public function getIsPreemptible()
  {
    return $this->isPreemptible;
  }
  /** @param string */
  public function setMachineTypeUri($machineTypeUri)
  {
    $this->machineTypeUri = $machineTypeUri;
  }
  /** @return string */
  public function getMachineTypeUri()
  {
    return $this->machineTypeUri;
  }
  /** @param ManagedGroupConfig */
  public function setManagedGroupConfig(ManagedGroupConfig $managedGroupConfig)
  {
    $this->managedGroupConfig = $managedGroupConfig;
  }
  /** @return ManagedGroupConfig */
  public function getManagedGroupConfig()
  {
    return $this->managedGroupConfig;
  }
  /** @param string */
  public function setMinCpuPlatform($minCpuPlatform)
  {
    $this->minCpuPlatform = $minCpuPlatform;
  }
  /** @return string */
  public function getMinCpuPlatform()
  {
    return $this->minCpuPlatform;
  }
  /** @param int */
  public function setNumInstances($numInstances)
  {
    $this->numInstances = $numInstances;
  }
  /** @return int */
  public function getNumInstances()
  {
    return $this->numInstances;
  }
  /** @param string */
  public function setPreemptibility($preemptibility)
  {
    $this->preemptibility = $preemptibility;
  }
  /** @return string */
  public function getPreemptibility()
  {
    return $this->preemptibility;
  }
}

class InstanceReference extends \Google\Model
{
  /** @var string */
  public $instanceId;
  /** @var string */
  public $instanceName;
  /** @var string */
  public $publicEciesKey;
  /** @var string */
  public $publicKey;

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
  public function setInstanceName($instanceName)
  {
    $this->instanceName = $instanceName;
  }
  /** @return string */
  public function getInstanceName()
  {
    return $this->instanceName;
  }
  /** @param string */
  public function setPublicEciesKey($publicEciesKey)
  {
    $this->publicEciesKey = $publicEciesKey;
  }
  /** @return string */
  public function getPublicEciesKey()
  {
    return $this->publicEciesKey;
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

class InstantiateWorkflowTemplateRequest extends \Google\Model
{
  /** @var string[] */
  public $parameters;
  /** @var string */
  public $requestId;
  /** @var int */
  public $version;

  /** @param string[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return string[] */
  public function getParameters()
  {
    return $this->parameters;
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

class Job extends \Google\Collection
{
  /** @var bool */
  public $done;
  /** @var string */
  public $driverControlFilesUri;
  /** @var string */
  public $driverOutputResourceUri;
  /** @var HadoopJob */
  public $hadoopJob;
  /** @var HiveJob */
  public $hiveJob;
  /** @var string */
  public $jobUuid;
  /** @var string[] */
  public $labels;
  /** @var PigJob */
  public $pigJob;
  /** @var JobPlacement */
  public $placement;
  /** @var PrestoJob */
  public $prestoJob;
  /** @var PySparkJob */
  public $pysparkJob;
  /** @var JobReference */
  public $reference;
  /** @var JobScheduling */
  public $scheduling;
  /** @var SparkJob */
  public $sparkJob;
  /** @var SparkRJob */
  public $sparkRJob;
  /** @var SparkSqlJob */
  public $sparkSqlJob;
  /** @var JobStatus */
  public $status;
  /** @var JobStatus[] */
  public $statusHistory;
  /** @var TrinoJob */
  public $trinoJob;
  /** @var YarnApplication[] */
  public $yarnApplications;
  protected $collection_key = 'yarnApplications';
  protected $hadoopJobType = HadoopJob::class;
  protected $hadoopJobDataType = '';
  protected $hiveJobType = HiveJob::class;
  protected $hiveJobDataType = '';
  protected $pigJobType = PigJob::class;
  protected $pigJobDataType = '';
  protected $placementType = JobPlacement::class;
  protected $placementDataType = '';
  protected $prestoJobType = PrestoJob::class;
  protected $prestoJobDataType = '';
  protected $pysparkJobType = PySparkJob::class;
  protected $pysparkJobDataType = '';
  protected $referenceType = JobReference::class;
  protected $referenceDataType = '';
  protected $schedulingType = JobScheduling::class;
  protected $schedulingDataType = '';
  protected $sparkJobType = SparkJob::class;
  protected $sparkJobDataType = '';
  protected $sparkRJobType = SparkRJob::class;
  protected $sparkRJobDataType = '';
  protected $sparkSqlJobType = SparkSqlJob::class;
  protected $sparkSqlJobDataType = '';
  protected $statusType = JobStatus::class;
  protected $statusDataType = '';
  protected $statusHistoryType = JobStatus::class;
  protected $statusHistoryDataType = 'array';
  protected $trinoJobType = TrinoJob::class;
  protected $trinoJobDataType = '';
  protected $yarnApplicationsType = YarnApplication::class;
  protected $yarnApplicationsDataType = 'array';
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
  /** @param string */
  public function setDriverControlFilesUri($driverControlFilesUri)
  {
    $this->driverControlFilesUri = $driverControlFilesUri;
  }
  /** @return string */
  public function getDriverControlFilesUri()
  {
    return $this->driverControlFilesUri;
  }
  /** @param string */
  public function setDriverOutputResourceUri($driverOutputResourceUri)
  {
    $this->driverOutputResourceUri = $driverOutputResourceUri;
  }
  /** @return string */
  public function getDriverOutputResourceUri()
  {
    return $this->driverOutputResourceUri;
  }
  /** @param HadoopJob */
  public function setHadoopJob(HadoopJob $hadoopJob)
  {
    $this->hadoopJob = $hadoopJob;
  }
  /** @return HadoopJob */
  public function getHadoopJob()
  {
    return $this->hadoopJob;
  }
  /** @param HiveJob */
  public function setHiveJob(HiveJob $hiveJob)
  {
    $this->hiveJob = $hiveJob;
  }
  /** @return HiveJob */
  public function getHiveJob()
  {
    return $this->hiveJob;
  }
  /** @param string */
  public function setJobUuid($jobUuid)
  {
    $this->jobUuid = $jobUuid;
  }
  /** @return string */
  public function getJobUuid()
  {
    return $this->jobUuid;
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
  /** @param PigJob */
  public function setPigJob(PigJob $pigJob)
  {
    $this->pigJob = $pigJob;
  }
  /** @return PigJob */
  public function getPigJob()
  {
    return $this->pigJob;
  }
  /** @param JobPlacement */
  public function setPlacement(JobPlacement $placement)
  {
    $this->placement = $placement;
  }
  /** @return JobPlacement */
  public function getPlacement()
  {
    return $this->placement;
  }
  /** @param PrestoJob */
  public function setPrestoJob(PrestoJob $prestoJob)
  {
    $this->prestoJob = $prestoJob;
  }
  /** @return PrestoJob */
  public function getPrestoJob()
  {
    return $this->prestoJob;
  }
  /** @param PySparkJob */
  public function setPysparkJob(PySparkJob $pysparkJob)
  {
    $this->pysparkJob = $pysparkJob;
  }
  /** @return PySparkJob */
  public function getPysparkJob()
  {
    return $this->pysparkJob;
  }
  /** @param JobReference */
  public function setReference(JobReference $reference)
  {
    $this->reference = $reference;
  }
  /** @return JobReference */
  public function getReference()
  {
    return $this->reference;
  }
  /** @param JobScheduling */
  public function setScheduling(JobScheduling $scheduling)
  {
    $this->scheduling = $scheduling;
  }
  /** @return JobScheduling */
  public function getScheduling()
  {
    return $this->scheduling;
  }
  /** @param SparkJob */
  public function setSparkJob(SparkJob $sparkJob)
  {
    $this->sparkJob = $sparkJob;
  }
  /** @return SparkJob */
  public function getSparkJob()
  {
    return $this->sparkJob;
  }
  /** @param SparkRJob */
  public function setSparkRJob(SparkRJob $sparkRJob)
  {
    $this->sparkRJob = $sparkRJob;
  }
  /** @return SparkRJob */
  public function getSparkRJob()
  {
    return $this->sparkRJob;
  }
  /** @param SparkSqlJob */
  public function setSparkSqlJob(SparkSqlJob $sparkSqlJob)
  {
    $this->sparkSqlJob = $sparkSqlJob;
  }
  /** @return SparkSqlJob */
  public function getSparkSqlJob()
  {
    return $this->sparkSqlJob;
  }
  /** @param JobStatus */
  public function setStatus(JobStatus $status)
  {
    $this->status = $status;
  }
  /** @return JobStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param JobStatus[] */
  public function setStatusHistory($statusHistory)
  {
    $this->statusHistory = $statusHistory;
  }
  /** @return JobStatus[] */
  public function getStatusHistory()
  {
    return $this->statusHistory;
  }
  /** @param TrinoJob */
  public function setTrinoJob(TrinoJob $trinoJob)
  {
    $this->trinoJob = $trinoJob;
  }
  /** @return TrinoJob */
  public function getTrinoJob()
  {
    return $this->trinoJob;
  }
  /** @param YarnApplication[] */
  public function setYarnApplications($yarnApplications)
  {
    $this->yarnApplications = $yarnApplications;
  }
  /** @return YarnApplication[] */
  public function getYarnApplications()
  {
    return $this->yarnApplications;
  }
}

class JobMetadata extends \Google\Model
{
  /** @var string */
  public $jobId;
  /** @var string */
  public $operationType;
  /** @var string */
  public $startTime;
  /** @var JobStatus */
  public $status;
  protected $statusType = JobStatus::class;
  protected $statusDataType = '';
  /** @param string */
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /** @return string */
  public function getJobId()
  {
    return $this->jobId;
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
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /** @param JobStatus */
  public function setStatus(JobStatus $status)
  {
    $this->status = $status;
  }
  /** @return JobStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class JobPlacement extends \Google\Model
{
  /** @var string[] */
  public $clusterLabels;
  /** @var string */
  public $clusterName;
  /** @var string */
  public $clusterUuid;

  /** @param string[] */
  public function setClusterLabels($clusterLabels)
  {
    $this->clusterLabels = $clusterLabels;
  }
  /** @return string[] */
  public function getClusterLabels()
  {
    return $this->clusterLabels;
  }
  /** @param string */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /** @return string */
  public function getClusterName()
  {
    return $this->clusterName;
  }
  /** @param string */
  public function setClusterUuid($clusterUuid)
  {
    $this->clusterUuid = $clusterUuid;
  }
  /** @return string */
  public function getClusterUuid()
  {
    return $this->clusterUuid;
  }
}

class JobReference extends \Google\Model
{
  /** @var string */
  public $jobId;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /** @return string */
  public function getJobId()
  {
    return $this->jobId;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
}

class JobScheduling extends \Google\Model
{
  /** @var int */
  public $maxFailuresPerHour;
  /** @var int */
  public $maxFailuresTotal;

  /** @param int */
  public function setMaxFailuresPerHour($maxFailuresPerHour)
  {
    $this->maxFailuresPerHour = $maxFailuresPerHour;
  }
  /** @return int */
  public function getMaxFailuresPerHour()
  {
    return $this->maxFailuresPerHour;
  }
  /** @param int */
  public function setMaxFailuresTotal($maxFailuresTotal)
  {
    $this->maxFailuresTotal = $maxFailuresTotal;
  }
  /** @return int */
  public function getMaxFailuresTotal()
  {
    return $this->maxFailuresTotal;
  }
}

class JobStatus extends \Google\Model
{
  /** @var string */
  public $details;
  /** @var string */
  public $state;
  /** @var string */
  public $stateStartTime;
  /** @var string */
  public $substate;

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
  public function setStateStartTime($stateStartTime)
  {
    $this->stateStartTime = $stateStartTime;
  }
  /** @return string */
  public function getStateStartTime()
  {
    return $this->stateStartTime;
  }
  /** @param string */
  public function setSubstate($substate)
  {
    $this->substate = $substate;
  }
  /** @return string */
  public function getSubstate()
  {
    return $this->substate;
  }
}

class KerberosConfig extends \Google\Model
{
  /** @var string */
  public $crossRealmTrustAdminServer;
  /** @var string */
  public $crossRealmTrustKdc;
  /** @var string */
  public $crossRealmTrustRealm;
  /** @var string */
  public $crossRealmTrustSharedPasswordUri;
  /** @var bool */
  public $enableKerberos;
  /** @var string */
  public $kdcDbKeyUri;
  /** @var string */
  public $keyPasswordUri;
  /** @var string */
  public $keystorePasswordUri;
  /** @var string */
  public $keystoreUri;
  /** @var string */
  public $kmsKeyUri;
  /** @var string */
  public $realm;
  /** @var string */
  public $rootPrincipalPasswordUri;
  /** @var int */
  public $tgtLifetimeHours;
  /** @var string */
  public $truststorePasswordUri;
  /** @var string */
  public $truststoreUri;

  /** @param string */
  public function setCrossRealmTrustAdminServer($crossRealmTrustAdminServer)
  {
    $this->crossRealmTrustAdminServer = $crossRealmTrustAdminServer;
  }
  /** @return string */
  public function getCrossRealmTrustAdminServer()
  {
    return $this->crossRealmTrustAdminServer;
  }
  /** @param string */
  public function setCrossRealmTrustKdc($crossRealmTrustKdc)
  {
    $this->crossRealmTrustKdc = $crossRealmTrustKdc;
  }
  /** @return string */
  public function getCrossRealmTrustKdc()
  {
    return $this->crossRealmTrustKdc;
  }
  /** @param string */
  public function setCrossRealmTrustRealm($crossRealmTrustRealm)
  {
    $this->crossRealmTrustRealm = $crossRealmTrustRealm;
  }
  /** @return string */
  public function getCrossRealmTrustRealm()
  {
    return $this->crossRealmTrustRealm;
  }
  /** @param string */
  public function setCrossRealmTrustSharedPasswordUri($crossRealmTrustSharedPasswordUri)
  {
    $this->crossRealmTrustSharedPasswordUri = $crossRealmTrustSharedPasswordUri;
  }
  /** @return string */
  public function getCrossRealmTrustSharedPasswordUri()
  {
    return $this->crossRealmTrustSharedPasswordUri;
  }
  /** @param bool */
  public function setEnableKerberos($enableKerberos)
  {
    $this->enableKerberos = $enableKerberos;
  }
  /** @return bool */
  public function getEnableKerberos()
  {
    return $this->enableKerberos;
  }
  /** @param string */
  public function setKdcDbKeyUri($kdcDbKeyUri)
  {
    $this->kdcDbKeyUri = $kdcDbKeyUri;
  }
  /** @return string */
  public function getKdcDbKeyUri()
  {
    return $this->kdcDbKeyUri;
  }
  /** @param string */
  public function setKeyPasswordUri($keyPasswordUri)
  {
    $this->keyPasswordUri = $keyPasswordUri;
  }
  /** @return string */
  public function getKeyPasswordUri()
  {
    return $this->keyPasswordUri;
  }
  /** @param string */
  public function setKeystorePasswordUri($keystorePasswordUri)
  {
    $this->keystorePasswordUri = $keystorePasswordUri;
  }
  /** @return string */
  public function getKeystorePasswordUri()
  {
    return $this->keystorePasswordUri;
  }
  /** @param string */
  public function setKeystoreUri($keystoreUri)
  {
    $this->keystoreUri = $keystoreUri;
  }
  /** @return string */
  public function getKeystoreUri()
  {
    return $this->keystoreUri;
  }
  /** @param string */
  public function setKmsKeyUri($kmsKeyUri)
  {
    $this->kmsKeyUri = $kmsKeyUri;
  }
  /** @return string */
  public function getKmsKeyUri()
  {
    return $this->kmsKeyUri;
  }
  /** @param string */
  public function setRealm($realm)
  {
    $this->realm = $realm;
  }
  /** @return string */
  public function getRealm()
  {
    return $this->realm;
  }
  /** @param string */
  public function setRootPrincipalPasswordUri($rootPrincipalPasswordUri)
  {
    $this->rootPrincipalPasswordUri = $rootPrincipalPasswordUri;
  }
  /** @return string */
  public function getRootPrincipalPasswordUri()
  {
    return $this->rootPrincipalPasswordUri;
  }
  /** @param int */
  public function setTgtLifetimeHours($tgtLifetimeHours)
  {
    $this->tgtLifetimeHours = $tgtLifetimeHours;
  }
  /** @return int */
  public function getTgtLifetimeHours()
  {
    return $this->tgtLifetimeHours;
  }
  /** @param string */
  public function setTruststorePasswordUri($truststorePasswordUri)
  {
    $this->truststorePasswordUri = $truststorePasswordUri;
  }
  /** @return string */
  public function getTruststorePasswordUri()
  {
    return $this->truststorePasswordUri;
  }
  /** @param string */
  public function setTruststoreUri($truststoreUri)
  {
    $this->truststoreUri = $truststoreUri;
  }
  /** @return string */
  public function getTruststoreUri()
  {
    return $this->truststoreUri;
  }
}

class KubernetesClusterConfig extends \Google\Model
{
  /** @var GkeClusterConfig */
  public $gkeClusterConfig;
  /** @var string */
  public $kubernetesNamespace;
  /** @var KubernetesSoftwareConfig */
  public $kubernetesSoftwareConfig;
  protected $gkeClusterConfigType = GkeClusterConfig::class;
  protected $gkeClusterConfigDataType = '';
  protected $kubernetesSoftwareConfigType = KubernetesSoftwareConfig::class;
  protected $kubernetesSoftwareConfigDataType = '';
  /** @param GkeClusterConfig */
  public function setGkeClusterConfig(GkeClusterConfig $gkeClusterConfig)
  {
    $this->gkeClusterConfig = $gkeClusterConfig;
  }
  /** @return GkeClusterConfig */
  public function getGkeClusterConfig()
  {
    return $this->gkeClusterConfig;
  }
  /** @param string */
  public function setKubernetesNamespace($kubernetesNamespace)
  {
    $this->kubernetesNamespace = $kubernetesNamespace;
  }
  /** @return string */
  public function getKubernetesNamespace()
  {
    return $this->kubernetesNamespace;
  }
  /** @param KubernetesSoftwareConfig */
  public function setKubernetesSoftwareConfig(KubernetesSoftwareConfig $kubernetesSoftwareConfig)
  {
    $this->kubernetesSoftwareConfig = $kubernetesSoftwareConfig;
  }
  /** @return KubernetesSoftwareConfig */
  public function getKubernetesSoftwareConfig()
  {
    return $this->kubernetesSoftwareConfig;
  }
}

class KubernetesSoftwareConfig extends \Google\Model
{
  /** @var string[] */
  public $componentVersion;
  /** @var string[] */
  public $properties;

  /** @param string[] */
  public function setComponentVersion($componentVersion)
  {
    $this->componentVersion = $componentVersion;
  }
  /** @return string[] */
  public function getComponentVersion()
  {
    return $this->componentVersion;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class LifecycleConfig extends \Google\Model
{
  /** @var string */
  public $autoDeleteTime;
  /** @var string */
  public $autoDeleteTtl;
  /** @var string */
  public $idleDeleteTtl;
  /** @var string */
  public $idleStartTime;

  /** @param string */
  public function setAutoDeleteTime($autoDeleteTime)
  {
    $this->autoDeleteTime = $autoDeleteTime;
  }
  /** @return string */
  public function getAutoDeleteTime()
  {
    return $this->autoDeleteTime;
  }
  /** @param string */
  public function setAutoDeleteTtl($autoDeleteTtl)
  {
    $this->autoDeleteTtl = $autoDeleteTtl;
  }
  /** @return string */
  public function getAutoDeleteTtl()
  {
    return $this->autoDeleteTtl;
  }
  /** @param string */
  public function setIdleDeleteTtl($idleDeleteTtl)
  {
    $this->idleDeleteTtl = $idleDeleteTtl;
  }
  /** @return string */
  public function getIdleDeleteTtl()
  {
    return $this->idleDeleteTtl;
  }
  /** @param string */
  public function setIdleStartTime($idleStartTime)
  {
    $this->idleStartTime = $idleStartTime;
  }
  /** @return string */
  public function getIdleStartTime()
  {
    return $this->idleStartTime;
  }
}

class ListAutoscalingPoliciesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var AutoscalingPolicy[] */
  public $policies;
  protected $collection_key = 'policies';
  protected $policiesType = AutoscalingPolicy::class;
  protected $policiesDataType = 'array';
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
  /** @param AutoscalingPolicy[] */
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /** @return AutoscalingPolicy[] */
  public function getPolicies()
  {
    return $this->policies;
  }
}

class ListBatchesResponse extends \Google\Collection
{
  /** @var Batch[] */
  public $batches;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'batches';
  protected $batchesType = Batch::class;
  protected $batchesDataType = 'array';
  /** @param Batch[] */
  public function setBatches($batches)
  {
    $this->batches = $batches;
  }
  /** @return Batch[] */
  public function getBatches()
  {
    return $this->batches;
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
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'clusters';
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

class ListJobsResponse extends \Google\Collection
{
  /** @var Job[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
  protected $jobsType = Job::class;
  protected $jobsDataType = 'array';
  /** @param Job[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return Job[] */
  public function getJobs()
  {
    return $this->jobs;
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

class ListWorkflowTemplatesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var WorkflowTemplate[] */
  public $templates;
  protected $collection_key = 'templates';
  protected $templatesType = WorkflowTemplate::class;
  protected $templatesDataType = 'array';
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
  /** @param WorkflowTemplate[] */
  public function setTemplates($templates)
  {
    $this->templates = $templates;
  }
  /** @return WorkflowTemplate[] */
  public function getTemplates()
  {
    return $this->templates;
  }
}

class LoggingConfig extends \Google\Model
{
  /** @var string[] */
  public $driverLogLevels;

  /** @param string[] */
  public function setDriverLogLevels($driverLogLevels)
  {
    $this->driverLogLevels = $driverLogLevels;
  }
  /** @return string[] */
  public function getDriverLogLevels()
  {
    return $this->driverLogLevels;
  }
}

class ManagedCluster extends \Google\Model
{
  /** @var string */
  public $clusterName;
  /** @var ClusterConfig */
  public $config;
  /** @var string[] */
  public $labels;
  protected $configType = ClusterConfig::class;
  protected $configDataType = '';
  /** @param string */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /** @return string */
  public function getClusterName()
  {
    return $this->clusterName;
  }
  /** @param ClusterConfig */
  public function setConfig(ClusterConfig $config)
  {
    $this->config = $config;
  }
  /** @return ClusterConfig */
  public function getConfig()
  {
    return $this->config;
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
}

class ManagedGroupConfig extends \Google\Model
{
  /** @var string */
  public $instanceGroupManagerName;
  /** @var string */
  public $instanceTemplateName;

  /** @param string */
  public function setInstanceGroupManagerName($instanceGroupManagerName)
  {
    $this->instanceGroupManagerName = $instanceGroupManagerName;
  }
  /** @return string */
  public function getInstanceGroupManagerName()
  {
    return $this->instanceGroupManagerName;
  }
  /** @param string */
  public function setInstanceTemplateName($instanceTemplateName)
  {
    $this->instanceTemplateName = $instanceTemplateName;
  }
  /** @return string */
  public function getInstanceTemplateName()
  {
    return $this->instanceTemplateName;
  }
}

class MetastoreConfig extends \Google\Model
{
  /** @var string */
  public $dataprocMetastoreService;

  /** @param string */
  public function setDataprocMetastoreService($dataprocMetastoreService)
  {
    $this->dataprocMetastoreService = $dataprocMetastoreService;
  }
  /** @return string */
  public function getDataprocMetastoreService()
  {
    return $this->dataprocMetastoreService;
  }
}

class Metric extends \Google\Collection
{
  /** @var string[] */
  public $metricOverrides;
  /** @var string */
  public $metricSource;
  protected $collection_key = 'metricOverrides';
  /** @param string[] */
  public function setMetricOverrides($metricOverrides)
  {
    $this->metricOverrides = $metricOverrides;
  }
  /** @return string[] */
  public function getMetricOverrides()
  {
    return $this->metricOverrides;
  }
  /** @param string */
  public function setMetricSource($metricSource)
  {
    $this->metricSource = $metricSource;
  }
  /** @return string */
  public function getMetricSource()
  {
    return $this->metricSource;
  }
}

class NamespacedGkeDeploymentTarget extends \Google\Model
{
  /** @var string */
  public $clusterNamespace;
  /** @var string */
  public $targetGkeCluster;

  /** @param string */
  public function setClusterNamespace($clusterNamespace)
  {
    $this->clusterNamespace = $clusterNamespace;
  }
  /** @return string */
  public function getClusterNamespace()
  {
    return $this->clusterNamespace;
  }
  /** @param string */
  public function setTargetGkeCluster($targetGkeCluster)
  {
    $this->targetGkeCluster = $targetGkeCluster;
  }
  /** @return string */
  public function getTargetGkeCluster()
  {
    return $this->targetGkeCluster;
  }
}

class NodeGroupAffinity extends \Google\Model
{
  /** @var string */
  public $nodeGroupUri;

  /** @param string */
  public function setNodeGroupUri($nodeGroupUri)
  {
    $this->nodeGroupUri = $nodeGroupUri;
  }
  /** @return string */
  public function getNodeGroupUri()
  {
    return $this->nodeGroupUri;
  }
}

class NodeGroupOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $clusterUuid;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $nodeGroupId;
  /** @var string */
  public $operationType;
  /** @var ClusterOperationStatus */
  public $status;
  /** @var ClusterOperationStatus[] */
  public $statusHistory;
  /** @var string[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $statusType = ClusterOperationStatus::class;
  protected $statusDataType = '';
  protected $statusHistoryType = ClusterOperationStatus::class;
  protected $statusHistoryDataType = 'array';
  /** @param string */
  public function setClusterUuid($clusterUuid)
  {
    $this->clusterUuid = $clusterUuid;
  }
  /** @return string */
  public function getClusterUuid()
  {
    return $this->clusterUuid;
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
  public function setNodeGroupId($nodeGroupId)
  {
    $this->nodeGroupId = $nodeGroupId;
  }
  /** @return string */
  public function getNodeGroupId()
  {
    return $this->nodeGroupId;
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
  /** @param ClusterOperationStatus */
  public function setStatus(ClusterOperationStatus $status)
  {
    $this->status = $status;
  }
  /** @return ClusterOperationStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param ClusterOperationStatus[] */
  public function setStatusHistory($statusHistory)
  {
    $this->statusHistory = $statusHistory;
  }
  /** @return ClusterOperationStatus[] */
  public function getStatusHistory()
  {
    return $this->statusHistory;
  }
  /** @param string[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return string[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class NodeInitializationAction extends \Google\Model
{
  /** @var string */
  public $executableFile;
  /** @var string */
  public $executionTimeout;

  /** @param string */
  public function setExecutableFile($executableFile)
  {
    $this->executableFile = $executableFile;
  }
  /** @return string */
  public function getExecutableFile()
  {
    return $this->executableFile;
  }
  /** @param string */
  public function setExecutionTimeout($executionTimeout)
  {
    $this->executionTimeout = $executionTimeout;
  }
  /** @return string */
  public function getExecutionTimeout()
  {
    return $this->executionTimeout;
  }
}

class NodePool extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var string[] */
  public $instanceNames;
  /** @var string */
  public $repairAction;
  protected $collection_key = 'instanceNames';
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
  public function setInstanceNames($instanceNames)
  {
    $this->instanceNames = $instanceNames;
  }
  /** @return string[] */
  public function getInstanceNames()
  {
    return $this->instanceNames;
  }
  /** @param string */
  public function setRepairAction($repairAction)
  {
    $this->repairAction = $repairAction;
  }
  /** @return string */
  public function getRepairAction()
  {
    return $this->repairAction;
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

class OrderedJob extends \Google\Collection
{
  /** @var HadoopJob */
  public $hadoopJob;
  /** @var HiveJob */
  public $hiveJob;
  /** @var string[] */
  public $labels;
  /** @var PigJob */
  public $pigJob;
  /** @var string[] */
  public $prerequisiteStepIds;
  /** @var PrestoJob */
  public $prestoJob;
  /** @var PySparkJob */
  public $pysparkJob;
  /** @var JobScheduling */
  public $scheduling;
  /** @var SparkJob */
  public $sparkJob;
  /** @var SparkRJob */
  public $sparkRJob;
  /** @var SparkSqlJob */
  public $sparkSqlJob;
  /** @var string */
  public $stepId;
  /** @var TrinoJob */
  public $trinoJob;
  protected $collection_key = 'prerequisiteStepIds';
  protected $hadoopJobType = HadoopJob::class;
  protected $hadoopJobDataType = '';
  protected $hiveJobType = HiveJob::class;
  protected $hiveJobDataType = '';
  protected $pigJobType = PigJob::class;
  protected $pigJobDataType = '';
  protected $prestoJobType = PrestoJob::class;
  protected $prestoJobDataType = '';
  protected $pysparkJobType = PySparkJob::class;
  protected $pysparkJobDataType = '';
  protected $schedulingType = JobScheduling::class;
  protected $schedulingDataType = '';
  protected $sparkJobType = SparkJob::class;
  protected $sparkJobDataType = '';
  protected $sparkRJobType = SparkRJob::class;
  protected $sparkRJobDataType = '';
  protected $sparkSqlJobType = SparkSqlJob::class;
  protected $sparkSqlJobDataType = '';
  protected $trinoJobType = TrinoJob::class;
  protected $trinoJobDataType = '';
  /** @param HadoopJob */
  public function setHadoopJob(HadoopJob $hadoopJob)
  {
    $this->hadoopJob = $hadoopJob;
  }
  /** @return HadoopJob */
  public function getHadoopJob()
  {
    return $this->hadoopJob;
  }
  /** @param HiveJob */
  public function setHiveJob(HiveJob $hiveJob)
  {
    $this->hiveJob = $hiveJob;
  }
  /** @return HiveJob */
  public function getHiveJob()
  {
    return $this->hiveJob;
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
  /** @param PigJob */
  public function setPigJob(PigJob $pigJob)
  {
    $this->pigJob = $pigJob;
  }
  /** @return PigJob */
  public function getPigJob()
  {
    return $this->pigJob;
  }
  /** @param string[] */
  public function setPrerequisiteStepIds($prerequisiteStepIds)
  {
    $this->prerequisiteStepIds = $prerequisiteStepIds;
  }
  /** @return string[] */
  public function getPrerequisiteStepIds()
  {
    return $this->prerequisiteStepIds;
  }
  /** @param PrestoJob */
  public function setPrestoJob(PrestoJob $prestoJob)
  {
    $this->prestoJob = $prestoJob;
  }
  /** @return PrestoJob */
  public function getPrestoJob()
  {
    return $this->prestoJob;
  }
  /** @param PySparkJob */
  public function setPysparkJob(PySparkJob $pysparkJob)
  {
    $this->pysparkJob = $pysparkJob;
  }
  /** @return PySparkJob */
  public function getPysparkJob()
  {
    return $this->pysparkJob;
  }
  /** @param JobScheduling */
  public function setScheduling(JobScheduling $scheduling)
  {
    $this->scheduling = $scheduling;
  }
  /** @return JobScheduling */
  public function getScheduling()
  {
    return $this->scheduling;
  }
  /** @param SparkJob */
  public function setSparkJob(SparkJob $sparkJob)
  {
    $this->sparkJob = $sparkJob;
  }
  /** @return SparkJob */
  public function getSparkJob()
  {
    return $this->sparkJob;
  }
  /** @param SparkRJob */
  public function setSparkRJob(SparkRJob $sparkRJob)
  {
    $this->sparkRJob = $sparkRJob;
  }
  /** @return SparkRJob */
  public function getSparkRJob()
  {
    return $this->sparkRJob;
  }
  /** @param SparkSqlJob */
  public function setSparkSqlJob(SparkSqlJob $sparkSqlJob)
  {
    $this->sparkSqlJob = $sparkSqlJob;
  }
  /** @return SparkSqlJob */
  public function getSparkSqlJob()
  {
    return $this->sparkSqlJob;
  }
  /** @param string */
  public function setStepId($stepId)
  {
    $this->stepId = $stepId;
  }
  /** @return string */
  public function getStepId()
  {
    return $this->stepId;
  }
  /** @param TrinoJob */
  public function setTrinoJob(TrinoJob $trinoJob)
  {
    $this->trinoJob = $trinoJob;
  }
  /** @return TrinoJob */
  public function getTrinoJob()
  {
    return $this->trinoJob;
  }
}

class ParameterValidation extends \Google\Model
{
  /** @var RegexValidation */
  public $regex;
  /** @var ValueValidation */
  public $values;
  protected $regexType = RegexValidation::class;
  protected $regexDataType = '';
  protected $valuesType = ValueValidation::class;
  protected $valuesDataType = '';
  /** @param RegexValidation */
  public function setRegex(RegexValidation $regex)
  {
    $this->regex = $regex;
  }
  /** @return RegexValidation */
  public function getRegex()
  {
    return $this->regex;
  }
  /** @param ValueValidation */
  public function setValues(ValueValidation $values)
  {
    $this->values = $values;
  }
  /** @return ValueValidation */
  public function getValues()
  {
    return $this->values;
  }
}

class PeripheralsConfig extends \Google\Model
{
  /** @var string */
  public $metastoreService;
  /** @var SparkHistoryServerConfig */
  public $sparkHistoryServerConfig;
  protected $sparkHistoryServerConfigType = SparkHistoryServerConfig::class;
  protected $sparkHistoryServerConfigDataType = '';
  /** @param string */
  public function setMetastoreService($metastoreService)
  {
    $this->metastoreService = $metastoreService;
  }
  /** @return string */
  public function getMetastoreService()
  {
    return $this->metastoreService;
  }
  /** @param SparkHistoryServerConfig */
  public function setSparkHistoryServerConfig(SparkHistoryServerConfig $sparkHistoryServerConfig)
  {
    $this->sparkHistoryServerConfig = $sparkHistoryServerConfig;
  }
  /** @return SparkHistoryServerConfig */
  public function getSparkHistoryServerConfig()
  {
    return $this->sparkHistoryServerConfig;
  }
}

class PigJob extends \Google\Collection
{
  /** @var bool */
  public $continueOnFailure;
  /** @var string[] */
  public $jarFileUris;
  /** @var LoggingConfig */
  public $loggingConfig;
  /** @var string[] */
  public $properties;
  /** @var string */
  public $queryFileUri;
  /** @var QueryList */
  public $queryList;
  /** @var string[] */
  public $scriptVariables;
  protected $collection_key = 'jarFileUris';
  protected $loggingConfigType = LoggingConfig::class;
  protected $loggingConfigDataType = '';
  protected $queryListType = QueryList::class;
  protected $queryListDataType = '';
  /** @param bool */
  public function setContinueOnFailure($continueOnFailure)
  {
    $this->continueOnFailure = $continueOnFailure;
  }
  /** @return bool */
  public function getContinueOnFailure()
  {
    return $this->continueOnFailure;
  }
  /** @param string[] */
  public function setJarFileUris($jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }
  /** @return string[] */
  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }
  /** @param LoggingConfig */
  public function setLoggingConfig(LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return LoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setQueryFileUri($queryFileUri)
  {
    $this->queryFileUri = $queryFileUri;
  }
  /** @return string */
  public function getQueryFileUri()
  {
    return $this->queryFileUri;
  }
  /** @param QueryList */
  public function setQueryList(QueryList $queryList)
  {
    $this->queryList = $queryList;
  }
  /** @return QueryList */
  public function getQueryList()
  {
    return $this->queryList;
  }
  /** @param string[] */
  public function setScriptVariables($scriptVariables)
  {
    $this->scriptVariables = $scriptVariables;
  }
  /** @return string[] */
  public function getScriptVariables()
  {
    return $this->scriptVariables;
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

class PrestoJob extends \Google\Collection
{
  /** @var string[] */
  public $clientTags;
  /** @var bool */
  public $continueOnFailure;
  /** @var LoggingConfig */
  public $loggingConfig;
  /** @var string */
  public $outputFormat;
  /** @var string[] */
  public $properties;
  /** @var string */
  public $queryFileUri;
  /** @var QueryList */
  public $queryList;
  protected $collection_key = 'clientTags';
  protected $loggingConfigType = LoggingConfig::class;
  protected $loggingConfigDataType = '';
  protected $queryListType = QueryList::class;
  protected $queryListDataType = '';
  /** @param string[] */
  public function setClientTags($clientTags)
  {
    $this->clientTags = $clientTags;
  }
  /** @return string[] */
  public function getClientTags()
  {
    return $this->clientTags;
  }
  /** @param bool */
  public function setContinueOnFailure($continueOnFailure)
  {
    $this->continueOnFailure = $continueOnFailure;
  }
  /** @return bool */
  public function getContinueOnFailure()
  {
    return $this->continueOnFailure;
  }
  /** @param LoggingConfig */
  public function setLoggingConfig(LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return LoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
  /** @param string */
  public function setOutputFormat($outputFormat)
  {
    $this->outputFormat = $outputFormat;
  }
  /** @return string */
  public function getOutputFormat()
  {
    return $this->outputFormat;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setQueryFileUri($queryFileUri)
  {
    $this->queryFileUri = $queryFileUri;
  }
  /** @return string */
  public function getQueryFileUri()
  {
    return $this->queryFileUri;
  }
  /** @param QueryList */
  public function setQueryList(QueryList $queryList)
  {
    $this->queryList = $queryList;
  }
  /** @return QueryList */
  public function getQueryList()
  {
    return $this->queryList;
  }
}

class PySparkBatch extends \Google\Collection
{
  /** @var string[] */
  public $archiveUris;
  /** @var string[] */
  public $args;
  /** @var string[] */
  public $fileUris;
  /** @var string[] */
  public $jarFileUris;
  /** @var string */
  public $mainPythonFileUri;
  /** @var string[] */
  public $pythonFileUris;
  protected $collection_key = 'pythonFileUris';
  /** @param string[] */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /** @return string[] */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
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
  /** @param string[] */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /** @return string[] */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /** @param string[] */
  public function setJarFileUris($jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }
  /** @return string[] */
  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }
  /** @param string */
  public function setMainPythonFileUri($mainPythonFileUri)
  {
    $this->mainPythonFileUri = $mainPythonFileUri;
  }
  /** @return string */
  public function getMainPythonFileUri()
  {
    return $this->mainPythonFileUri;
  }
  /** @param string[] */
  public function setPythonFileUris($pythonFileUris)
  {
    $this->pythonFileUris = $pythonFileUris;
  }
  /** @return string[] */
  public function getPythonFileUris()
  {
    return $this->pythonFileUris;
  }
}

class PySparkJob extends \Google\Collection
{
  /** @var string[] */
  public $archiveUris;
  /** @var string[] */
  public $args;
  /** @var string[] */
  public $fileUris;
  /** @var string[] */
  public $jarFileUris;
  /** @var LoggingConfig */
  public $loggingConfig;
  /** @var string */
  public $mainPythonFileUri;
  /** @var string[] */
  public $properties;
  /** @var string[] */
  public $pythonFileUris;
  protected $collection_key = 'pythonFileUris';
  protected $loggingConfigType = LoggingConfig::class;
  protected $loggingConfigDataType = '';
  /** @param string[] */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /** @return string[] */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
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
  /** @param string[] */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /** @return string[] */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /** @param string[] */
  public function setJarFileUris($jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }
  /** @return string[] */
  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }
  /** @param LoggingConfig */
  public function setLoggingConfig(LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return LoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
  /** @param string */
  public function setMainPythonFileUri($mainPythonFileUri)
  {
    $this->mainPythonFileUri = $mainPythonFileUri;
  }
  /** @return string */
  public function getMainPythonFileUri()
  {
    return $this->mainPythonFileUri;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string[] */
  public function setPythonFileUris($pythonFileUris)
  {
    $this->pythonFileUris = $pythonFileUris;
  }
  /** @return string[] */
  public function getPythonFileUris()
  {
    return $this->pythonFileUris;
  }
}

class QueryList extends \Google\Collection
{
  /** @var string[] */
  public $queries;
  protected $collection_key = 'queries';
  /** @param string[] */
  public function setQueries($queries)
  {
    $this->queries = $queries;
  }
  /** @return string[] */
  public function getQueries()
  {
    return $this->queries;
  }
}

class RegexValidation extends \Google\Collection
{
  /** @var string[] */
  public $regexes;
  protected $collection_key = 'regexes';
  /** @param string[] */
  public function setRegexes($regexes)
  {
    $this->regexes = $regexes;
  }
  /** @return string[] */
  public function getRegexes()
  {
    return $this->regexes;
  }
}

class RepairClusterRequest extends \Google\Collection
{
  /** @var string */
  public $clusterUuid;
  /** @var string */
  public $gracefulDecommissionTimeout;
  /** @var NodePool[] */
  public $nodePools;
  /** @var string */
  public $parentOperationId;
  /** @var string */
  public $requestId;
  protected $collection_key = 'nodePools';
  protected $nodePoolsType = NodePool::class;
  protected $nodePoolsDataType = 'array';
  /** @param string */
  public function setClusterUuid($clusterUuid)
  {
    $this->clusterUuid = $clusterUuid;
  }
  /** @return string */
  public function getClusterUuid()
  {
    return $this->clusterUuid;
  }
  /** @param string */
  public function setGracefulDecommissionTimeout($gracefulDecommissionTimeout)
  {
    $this->gracefulDecommissionTimeout = $gracefulDecommissionTimeout;
  }
  /** @return string */
  public function getGracefulDecommissionTimeout()
  {
    return $this->gracefulDecommissionTimeout;
  }
  /** @param NodePool[] */
  public function setNodePools($nodePools)
  {
    $this->nodePools = $nodePools;
  }
  /** @return NodePool[] */
  public function getNodePools()
  {
    return $this->nodePools;
  }
  /** @param string */
  public function setParentOperationId($parentOperationId)
  {
    $this->parentOperationId = $parentOperationId;
  }
  /** @return string */
  public function getParentOperationId()
  {
    return $this->parentOperationId;
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

class ReservationAffinity extends \Google\Collection
{
  /** @var string */
  public $consumeReservationType;
  /** @var string */
  public $key;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string */
  public function setConsumeReservationType($consumeReservationType)
  {
    $this->consumeReservationType = $consumeReservationType;
  }
  /** @return string */
  public function getConsumeReservationType()
  {
    return $this->consumeReservationType;
  }
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

class RuntimeConfig extends \Google\Model
{
  /** @var string */
  public $containerImage;
  /** @var string[] */
  public $properties;
  /** @var string */
  public $version;

  /** @param string */
  public function setContainerImage($containerImage)
  {
    $this->containerImage = $containerImage;
  }
  /** @return string */
  public function getContainerImage()
  {
    return $this->containerImage;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
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

class RuntimeInfo extends \Google\Model
{
  /** @var UsageMetrics */
  public $approximateUsage;
  /** @var string */
  public $diagnosticOutputUri;
  /** @var string[] */
  public $endpoints;
  /** @var string */
  public $outputUri;
  protected $approximateUsageType = UsageMetrics::class;
  protected $approximateUsageDataType = '';
  /** @param UsageMetrics */
  public function setApproximateUsage(UsageMetrics $approximateUsage)
  {
    $this->approximateUsage = $approximateUsage;
  }
  /** @return UsageMetrics */
  public function getApproximateUsage()
  {
    return $this->approximateUsage;
  }
  /** @param string */
  public function setDiagnosticOutputUri($diagnosticOutputUri)
  {
    $this->diagnosticOutputUri = $diagnosticOutputUri;
  }
  /** @return string */
  public function getDiagnosticOutputUri()
  {
    return $this->diagnosticOutputUri;
  }
  /** @param string[] */
  public function setEndpoints($endpoints)
  {
    $this->endpoints = $endpoints;
  }
  /** @return string[] */
  public function getEndpoints()
  {
    return $this->endpoints;
  }
  /** @param string */
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /** @return string */
  public function getOutputUri()
  {
    return $this->outputUri;
  }
}

class SecurityConfig extends \Google\Model
{
  /** @var IdentityConfig */
  public $identityConfig;
  /** @var KerberosConfig */
  public $kerberosConfig;
  protected $identityConfigType = IdentityConfig::class;
  protected $identityConfigDataType = '';
  protected $kerberosConfigType = KerberosConfig::class;
  protected $kerberosConfigDataType = '';
  /** @param IdentityConfig */
  public function setIdentityConfig(IdentityConfig $identityConfig)
  {
    $this->identityConfig = $identityConfig;
  }
  /** @return IdentityConfig */
  public function getIdentityConfig()
  {
    return $this->identityConfig;
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
}

class SessionOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $doneTime;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $operationType;
  /** @var string */
  public $session;
  /** @var string */
  public $sessionUuid;
  /** @var string[] */
  public $warnings;
  protected $collection_key = 'warnings';
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
  public function setDoneTime($doneTime)
  {
    $this->doneTime = $doneTime;
  }
  /** @return string */
  public function getDoneTime()
  {
    return $this->doneTime;
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
  public function setSession($session)
  {
    $this->session = $session;
  }
  /** @return string */
  public function getSession()
  {
    return $this->session;
  }
  /** @param string */
  public function setSessionUuid($sessionUuid)
  {
    $this->sessionUuid = $sessionUuid;
  }
  /** @return string */
  public function getSessionUuid()
  {
    return $this->sessionUuid;
  }
  /** @param string[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return string[] */
  public function getWarnings()
  {
    return $this->warnings;
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

class ShieldedInstanceConfig extends \Google\Model
{
  /** @var bool */
  public $enableIntegrityMonitoring;
  /** @var bool */
  public $enableSecureBoot;
  /** @var bool */
  public $enableVtpm;

  /** @param bool */
  public function setEnableIntegrityMonitoring($enableIntegrityMonitoring)
  {
    $this->enableIntegrityMonitoring = $enableIntegrityMonitoring;
  }
  /** @return bool */
  public function getEnableIntegrityMonitoring()
  {
    return $this->enableIntegrityMonitoring;
  }
  /** @param bool */
  public function setEnableSecureBoot($enableSecureBoot)
  {
    $this->enableSecureBoot = $enableSecureBoot;
  }
  /** @return bool */
  public function getEnableSecureBoot()
  {
    return $this->enableSecureBoot;
  }
  /** @param bool */
  public function setEnableVtpm($enableVtpm)
  {
    $this->enableVtpm = $enableVtpm;
  }
  /** @return bool */
  public function getEnableVtpm()
  {
    return $this->enableVtpm;
  }
}

class SoftwareConfig extends \Google\Collection
{
  /** @var string */
  public $imageVersion;
  /** @var string[] */
  public $optionalComponents;
  /** @var string[] */
  public $properties;
  protected $collection_key = 'optionalComponents';
  /** @param string */
  public function setImageVersion($imageVersion)
  {
    $this->imageVersion = $imageVersion;
  }
  /** @return string */
  public function getImageVersion()
  {
    return $this->imageVersion;
  }
  /** @param string[] */
  public function setOptionalComponents($optionalComponents)
  {
    $this->optionalComponents = $optionalComponents;
  }
  /** @return string[] */
  public function getOptionalComponents()
  {
    return $this->optionalComponents;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class SparkBatch extends \Google\Collection
{
  /** @var string[] */
  public $archiveUris;
  /** @var string[] */
  public $args;
  /** @var string[] */
  public $fileUris;
  /** @var string[] */
  public $jarFileUris;
  /** @var string */
  public $mainClass;
  /** @var string */
  public $mainJarFileUri;
  protected $collection_key = 'jarFileUris';
  /** @param string[] */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /** @return string[] */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
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
  /** @param string[] */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /** @return string[] */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /** @param string[] */
  public function setJarFileUris($jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }
  /** @return string[] */
  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }
  /** @param string */
  public function setMainClass($mainClass)
  {
    $this->mainClass = $mainClass;
  }
  /** @return string */
  public function getMainClass()
  {
    return $this->mainClass;
  }
  /** @param string */
  public function setMainJarFileUri($mainJarFileUri)
  {
    $this->mainJarFileUri = $mainJarFileUri;
  }
  /** @return string */
  public function getMainJarFileUri()
  {
    return $this->mainJarFileUri;
  }
}

class SparkHistoryServerConfig extends \Google\Model
{
  /** @var string */
  public $dataprocCluster;

  /** @param string */
  public function setDataprocCluster($dataprocCluster)
  {
    $this->dataprocCluster = $dataprocCluster;
  }
  /** @return string */
  public function getDataprocCluster()
  {
    return $this->dataprocCluster;
  }
}

class SparkJob extends \Google\Collection
{
  /** @var string[] */
  public $archiveUris;
  /** @var string[] */
  public $args;
  /** @var string[] */
  public $fileUris;
  /** @var string[] */
  public $jarFileUris;
  /** @var LoggingConfig */
  public $loggingConfig;
  /** @var string */
  public $mainClass;
  /** @var string */
  public $mainJarFileUri;
  /** @var string[] */
  public $properties;
  protected $collection_key = 'jarFileUris';
  protected $loggingConfigType = LoggingConfig::class;
  protected $loggingConfigDataType = '';
  /** @param string[] */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /** @return string[] */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
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
  /** @param string[] */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /** @return string[] */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /** @param string[] */
  public function setJarFileUris($jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }
  /** @return string[] */
  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }
  /** @param LoggingConfig */
  public function setLoggingConfig(LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return LoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
  /** @param string */
  public function setMainClass($mainClass)
  {
    $this->mainClass = $mainClass;
  }
  /** @return string */
  public function getMainClass()
  {
    return $this->mainClass;
  }
  /** @param string */
  public function setMainJarFileUri($mainJarFileUri)
  {
    $this->mainJarFileUri = $mainJarFileUri;
  }
  /** @return string */
  public function getMainJarFileUri()
  {
    return $this->mainJarFileUri;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class SparkRBatch extends \Google\Collection
{
  /** @var string[] */
  public $archiveUris;
  /** @var string[] */
  public $args;
  /** @var string[] */
  public $fileUris;
  /** @var string */
  public $mainRFileUri;
  protected $collection_key = 'fileUris';
  /** @param string[] */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /** @return string[] */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
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
  /** @param string[] */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /** @return string[] */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /** @param string */
  public function setMainRFileUri($mainRFileUri)
  {
    $this->mainRFileUri = $mainRFileUri;
  }
  /** @return string */
  public function getMainRFileUri()
  {
    return $this->mainRFileUri;
  }
}

class SparkRJob extends \Google\Collection
{
  /** @var string[] */
  public $archiveUris;
  /** @var string[] */
  public $args;
  /** @var string[] */
  public $fileUris;
  /** @var LoggingConfig */
  public $loggingConfig;
  /** @var string */
  public $mainRFileUri;
  /** @var string[] */
  public $properties;
  protected $collection_key = 'fileUris';
  protected $loggingConfigType = LoggingConfig::class;
  protected $loggingConfigDataType = '';
  /** @param string[] */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /** @return string[] */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
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
  /** @param string[] */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /** @return string[] */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /** @param LoggingConfig */
  public function setLoggingConfig(LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return LoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
  /** @param string */
  public function setMainRFileUri($mainRFileUri)
  {
    $this->mainRFileUri = $mainRFileUri;
  }
  /** @return string */
  public function getMainRFileUri()
  {
    return $this->mainRFileUri;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class SparkSqlBatch extends \Google\Collection
{
  /** @var string[] */
  public $jarFileUris;
  /** @var string */
  public $queryFileUri;
  /** @var string[] */
  public $queryVariables;
  protected $collection_key = 'jarFileUris';
  /** @param string[] */
  public function setJarFileUris($jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }
  /** @return string[] */
  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }
  /** @param string */
  public function setQueryFileUri($queryFileUri)
  {
    $this->queryFileUri = $queryFileUri;
  }
  /** @return string */
  public function getQueryFileUri()
  {
    return $this->queryFileUri;
  }
  /** @param string[] */
  public function setQueryVariables($queryVariables)
  {
    $this->queryVariables = $queryVariables;
  }
  /** @return string[] */
  public function getQueryVariables()
  {
    return $this->queryVariables;
  }
}

class SparkSqlJob extends \Google\Collection
{
  /** @var string[] */
  public $jarFileUris;
  /** @var LoggingConfig */
  public $loggingConfig;
  /** @var string[] */
  public $properties;
  /** @var string */
  public $queryFileUri;
  /** @var QueryList */
  public $queryList;
  /** @var string[] */
  public $scriptVariables;
  protected $collection_key = 'jarFileUris';
  protected $loggingConfigType = LoggingConfig::class;
  protected $loggingConfigDataType = '';
  protected $queryListType = QueryList::class;
  protected $queryListDataType = '';
  /** @param string[] */
  public function setJarFileUris($jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }
  /** @return string[] */
  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }
  /** @param LoggingConfig */
  public function setLoggingConfig(LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return LoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setQueryFileUri($queryFileUri)
  {
    $this->queryFileUri = $queryFileUri;
  }
  /** @return string */
  public function getQueryFileUri()
  {
    return $this->queryFileUri;
  }
  /** @param QueryList */
  public function setQueryList(QueryList $queryList)
  {
    $this->queryList = $queryList;
  }
  /** @return QueryList */
  public function getQueryList()
  {
    return $this->queryList;
  }
  /** @param string[] */
  public function setScriptVariables($scriptVariables)
  {
    $this->scriptVariables = $scriptVariables;
  }
  /** @return string[] */
  public function getScriptVariables()
  {
    return $this->scriptVariables;
  }
}

class SparkStandaloneAutoscalingConfig extends \Google\Model
{
  /** @var string */
  public $gracefulDecommissionTimeout;
  public $scaleDownFactor;
  public $scaleDownMinWorkerFraction;
  public $scaleUpFactor;
  public $scaleUpMinWorkerFraction;

  /** @param string */
  public function setGracefulDecommissionTimeout($gracefulDecommissionTimeout)
  {
    $this->gracefulDecommissionTimeout = $gracefulDecommissionTimeout;
  }
  /** @return string */
  public function getGracefulDecommissionTimeout()
  {
    return $this->gracefulDecommissionTimeout;
  }
  public function setScaleDownFactor($scaleDownFactor)
  {
    $this->scaleDownFactor = $scaleDownFactor;
  }
  public function getScaleDownFactor()
  {
    return $this->scaleDownFactor;
  }
  public function setScaleDownMinWorkerFraction($scaleDownMinWorkerFraction)
  {
    $this->scaleDownMinWorkerFraction = $scaleDownMinWorkerFraction;
  }
  public function getScaleDownMinWorkerFraction()
  {
    return $this->scaleDownMinWorkerFraction;
  }
  public function setScaleUpFactor($scaleUpFactor)
  {
    $this->scaleUpFactor = $scaleUpFactor;
  }
  public function getScaleUpFactor()
  {
    return $this->scaleUpFactor;
  }
  public function setScaleUpMinWorkerFraction($scaleUpMinWorkerFraction)
  {
    $this->scaleUpMinWorkerFraction = $scaleUpMinWorkerFraction;
  }
  public function getScaleUpMinWorkerFraction()
  {
    return $this->scaleUpMinWorkerFraction;
  }
}

class StartClusterRequest extends \Google\Model
{
  /** @var string */
  public $clusterUuid;
  /** @var string */
  public $requestId;

  /** @param string */
  public function setClusterUuid($clusterUuid)
  {
    $this->clusterUuid = $clusterUuid;
  }
  /** @return string */
  public function getClusterUuid()
  {
    return $this->clusterUuid;
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

class StateHistory extends \Google\Model
{
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $stateStartTime;

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
  public function setStateStartTime($stateStartTime)
  {
    $this->stateStartTime = $stateStartTime;
  }
  /** @return string */
  public function getStateStartTime()
  {
    return $this->stateStartTime;
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

class StopClusterRequest extends \Google\Model
{
  /** @var string */
  public $clusterUuid;
  /** @var string */
  public $requestId;

  /** @param string */
  public function setClusterUuid($clusterUuid)
  {
    $this->clusterUuid = $clusterUuid;
  }
  /** @return string */
  public function getClusterUuid()
  {
    return $this->clusterUuid;
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

class SubmitJobRequest extends \Google\Model
{
  /** @var Job */
  public $job;
  /** @var string */
  public $requestId;
  protected $jobType = Job::class;
  protected $jobDataType = '';
  /** @param Job */
  public function setJob(Job $job)
  {
    $this->job = $job;
  }
  /** @return Job */
  public function getJob()
  {
    return $this->job;
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

class TemplateParameter extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string[] */
  public $fields;
  /** @var string */
  public $name;
  /** @var ParameterValidation */
  public $validation;
  protected $collection_key = 'fields';
  protected $validationType = ParameterValidation::class;
  protected $validationDataType = '';
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
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string[] */
  public function getFields()
  {
    return $this->fields;
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
  /** @param ParameterValidation */
  public function setValidation(ParameterValidation $validation)
  {
    $this->validation = $validation;
  }
  /** @return ParameterValidation */
  public function getValidation()
  {
    return $this->validation;
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

class TrinoJob extends \Google\Collection
{
  /** @var string[] */
  public $clientTags;
  /** @var bool */
  public $continueOnFailure;
  /** @var LoggingConfig */
  public $loggingConfig;
  /** @var string */
  public $outputFormat;
  /** @var string[] */
  public $properties;
  /** @var string */
  public $queryFileUri;
  /** @var QueryList */
  public $queryList;
  protected $collection_key = 'clientTags';
  protected $loggingConfigType = LoggingConfig::class;
  protected $loggingConfigDataType = '';
  protected $queryListType = QueryList::class;
  protected $queryListDataType = '';
  /** @param string[] */
  public function setClientTags($clientTags)
  {
    $this->clientTags = $clientTags;
  }
  /** @return string[] */
  public function getClientTags()
  {
    return $this->clientTags;
  }
  /** @param bool */
  public function setContinueOnFailure($continueOnFailure)
  {
    $this->continueOnFailure = $continueOnFailure;
  }
  /** @return bool */
  public function getContinueOnFailure()
  {
    return $this->continueOnFailure;
  }
  /** @param LoggingConfig */
  public function setLoggingConfig(LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return LoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
  /** @param string */
  public function setOutputFormat($outputFormat)
  {
    $this->outputFormat = $outputFormat;
  }
  /** @return string */
  public function getOutputFormat()
  {
    return $this->outputFormat;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setQueryFileUri($queryFileUri)
  {
    $this->queryFileUri = $queryFileUri;
  }
  /** @return string */
  public function getQueryFileUri()
  {
    return $this->queryFileUri;
  }
  /** @param QueryList */
  public function setQueryList(QueryList $queryList)
  {
    $this->queryList = $queryList;
  }
  /** @return QueryList */
  public function getQueryList()
  {
    return $this->queryList;
  }
}

class UsageMetrics extends \Google\Model
{
  /** @var string */
  public $milliDcuSeconds;
  /** @var string */
  public $shuffleStorageGbSeconds;

  /** @param string */
  public function setMilliDcuSeconds($milliDcuSeconds)
  {
    $this->milliDcuSeconds = $milliDcuSeconds;
  }
  /** @return string */
  public function getMilliDcuSeconds()
  {
    return $this->milliDcuSeconds;
  }
  /** @param string */
  public function setShuffleStorageGbSeconds($shuffleStorageGbSeconds)
  {
    $this->shuffleStorageGbSeconds = $shuffleStorageGbSeconds;
  }
  /** @return string */
  public function getShuffleStorageGbSeconds()
  {
    return $this->shuffleStorageGbSeconds;
  }
}

class ValueValidation extends \Google\Collection
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

class VirtualClusterConfig extends \Google\Model
{
  /** @var AuxiliaryServicesConfig */
  public $auxiliaryServicesConfig;
  /** @var KubernetesClusterConfig */
  public $kubernetesClusterConfig;
  /** @var string */
  public $stagingBucket;
  protected $auxiliaryServicesConfigType = AuxiliaryServicesConfig::class;
  protected $auxiliaryServicesConfigDataType = '';
  protected $kubernetesClusterConfigType = KubernetesClusterConfig::class;
  protected $kubernetesClusterConfigDataType = '';
  /** @param AuxiliaryServicesConfig */
  public function setAuxiliaryServicesConfig(AuxiliaryServicesConfig $auxiliaryServicesConfig)
  {
    $this->auxiliaryServicesConfig = $auxiliaryServicesConfig;
  }
  /** @return AuxiliaryServicesConfig */
  public function getAuxiliaryServicesConfig()
  {
    return $this->auxiliaryServicesConfig;
  }
  /** @param KubernetesClusterConfig */
  public function setKubernetesClusterConfig(KubernetesClusterConfig $kubernetesClusterConfig)
  {
    $this->kubernetesClusterConfig = $kubernetesClusterConfig;
  }
  /** @return KubernetesClusterConfig */
  public function getKubernetesClusterConfig()
  {
    return $this->kubernetesClusterConfig;
  }
  /** @param string */
  public function setStagingBucket($stagingBucket)
  {
    $this->stagingBucket = $stagingBucket;
  }
  /** @return string */
  public function getStagingBucket()
  {
    return $this->stagingBucket;
  }
}

class WorkflowGraph extends \Google\Collection
{
  /** @var WorkflowNode[] */
  public $nodes;
  protected $collection_key = 'nodes';
  protected $nodesType = WorkflowNode::class;
  protected $nodesDataType = 'array';
  /** @param WorkflowNode[] */
  public function setNodes($nodes)
  {
    $this->nodes = $nodes;
  }
  /** @return WorkflowNode[] */
  public function getNodes()
  {
    return $this->nodes;
  }
}

class WorkflowMetadata extends \Google\Model
{
  /** @var string */
  public $clusterName;
  /** @var string */
  public $clusterUuid;
  /** @var ClusterOperation */
  public $createCluster;
  /** @var string */
  public $dagEndTime;
  /** @var string */
  public $dagStartTime;
  /** @var string */
  public $dagTimeout;
  /** @var ClusterOperation */
  public $deleteCluster;
  /** @var string */
  public $endTime;
  /** @var WorkflowGraph */
  public $graph;
  /** @var string[] */
  public $parameters;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $template;
  /** @var int */
  public $version;
  protected $createClusterType = ClusterOperation::class;
  protected $createClusterDataType = '';
  protected $deleteClusterType = ClusterOperation::class;
  protected $deleteClusterDataType = '';
  protected $graphType = WorkflowGraph::class;
  protected $graphDataType = '';
  /** @param string */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /** @return string */
  public function getClusterName()
  {
    return $this->clusterName;
  }
  /** @param string */
  public function setClusterUuid($clusterUuid)
  {
    $this->clusterUuid = $clusterUuid;
  }
  /** @return string */
  public function getClusterUuid()
  {
    return $this->clusterUuid;
  }
  /** @param ClusterOperation */
  public function setCreateCluster(ClusterOperation $createCluster)
  {
    $this->createCluster = $createCluster;
  }
  /** @return ClusterOperation */
  public function getCreateCluster()
  {
    return $this->createCluster;
  }
  /** @param string */
  public function setDagEndTime($dagEndTime)
  {
    $this->dagEndTime = $dagEndTime;
  }
  /** @return string */
  public function getDagEndTime()
  {
    return $this->dagEndTime;
  }
  /** @param string */
  public function setDagStartTime($dagStartTime)
  {
    $this->dagStartTime = $dagStartTime;
  }
  /** @return string */
  public function getDagStartTime()
  {
    return $this->dagStartTime;
  }
  /** @param string */
  public function setDagTimeout($dagTimeout)
  {
    $this->dagTimeout = $dagTimeout;
  }
  /** @return string */
  public function getDagTimeout()
  {
    return $this->dagTimeout;
  }
  /** @param ClusterOperation */
  public function setDeleteCluster(ClusterOperation $deleteCluster)
  {
    $this->deleteCluster = $deleteCluster;
  }
  /** @return ClusterOperation */
  public function getDeleteCluster()
  {
    return $this->deleteCluster;
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
  /** @param WorkflowGraph */
  public function setGraph(WorkflowGraph $graph)
  {
    $this->graph = $graph;
  }
  /** @return WorkflowGraph */
  public function getGraph()
  {
    return $this->graph;
  }
  /** @param string[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return string[] */
  public function getParameters()
  {
    return $this->parameters;
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
  public function setTemplate($template)
  {
    $this->template = $template;
  }
  /** @return string */
  public function getTemplate()
  {
    return $this->template;
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

class WorkflowNode extends \Google\Collection
{
  /** @var string */
  public $error;
  /** @var string */
  public $jobId;
  /** @var string[] */
  public $prerequisiteStepIds;
  /** @var string */
  public $state;
  /** @var string */
  public $stepId;
  protected $collection_key = 'prerequisiteStepIds';
  /** @param string */
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return string */
  public function getError()
  {
    return $this->error;
  }
  /** @param string */
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /** @return string */
  public function getJobId()
  {
    return $this->jobId;
  }
  /** @param string[] */
  public function setPrerequisiteStepIds($prerequisiteStepIds)
  {
    $this->prerequisiteStepIds = $prerequisiteStepIds;
  }
  /** @return string[] */
  public function getPrerequisiteStepIds()
  {
    return $this->prerequisiteStepIds;
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
  public function setStepId($stepId)
  {
    $this->stepId = $stepId;
  }
  /** @return string */
  public function getStepId()
  {
    return $this->stepId;
  }
}

class WorkflowTemplate extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $dagTimeout;
  /** @var string */
  public $id;
  /** @var OrderedJob[] */
  public $jobs;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var TemplateParameter[] */
  public $parameters;
  /** @var WorkflowTemplatePlacement */
  public $placement;
  /** @var string */
  public $updateTime;
  /** @var int */
  public $version;
  protected $collection_key = 'parameters';
  protected $jobsType = OrderedJob::class;
  protected $jobsDataType = 'array';
  protected $parametersType = TemplateParameter::class;
  protected $parametersDataType = 'array';
  protected $placementType = WorkflowTemplatePlacement::class;
  protected $placementDataType = '';
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
  public function setDagTimeout($dagTimeout)
  {
    $this->dagTimeout = $dagTimeout;
  }
  /** @return string */
  public function getDagTimeout()
  {
    return $this->dagTimeout;
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
  /** @param OrderedJob[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return OrderedJob[] */
  public function getJobs()
  {
    return $this->jobs;
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
  /** @param TemplateParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return TemplateParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param WorkflowTemplatePlacement */
  public function setPlacement(WorkflowTemplatePlacement $placement)
  {
    $this->placement = $placement;
  }
  /** @return WorkflowTemplatePlacement */
  public function getPlacement()
  {
    return $this->placement;
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

class WorkflowTemplatePlacement extends \Google\Model
{
  /** @var ClusterSelector */
  public $clusterSelector;
  /** @var ManagedCluster */
  public $managedCluster;
  protected $clusterSelectorType = ClusterSelector::class;
  protected $clusterSelectorDataType = '';
  protected $managedClusterType = ManagedCluster::class;
  protected $managedClusterDataType = '';
  /** @param ClusterSelector */
  public function setClusterSelector(ClusterSelector $clusterSelector)
  {
    $this->clusterSelector = $clusterSelector;
  }
  /** @return ClusterSelector */
  public function getClusterSelector()
  {
    return $this->clusterSelector;
  }
  /** @param ManagedCluster */
  public function setManagedCluster(ManagedCluster $managedCluster)
  {
    $this->managedCluster = $managedCluster;
  }
  /** @return ManagedCluster */
  public function getManagedCluster()
  {
    return $this->managedCluster;
  }
}

class YarnApplication extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var float */
  public $progress;
  /** @var string */
  public $state;
  /** @var string */
  public $trackingUrl;

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
  public function setProgress($progress)
  {
    $this->progress = $progress;
  }
  /** @return float */
  public function getProgress()
  {
    return $this->progress;
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
  public function setTrackingUrl($trackingUrl)
  {
    $this->trackingUrl = $trackingUrl;
  }
  /** @return string */
  public function getTrackingUrl()
  {
    return $this->trackingUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AcceleratorConfig::class, 'Google_Service_Dataproc_AcceleratorConfig');
class_alias(AutoscalingConfig::class, 'Google_Service_Dataproc_AutoscalingConfig');
class_alias(AutoscalingPolicy::class, 'Google_Service_Dataproc_AutoscalingPolicy');
class_alias(AuxiliaryServicesConfig::class, 'Google_Service_Dataproc_AuxiliaryServicesConfig');
class_alias(BasicAutoscalingAlgorithm::class, 'Google_Service_Dataproc_BasicAutoscalingAlgorithm');
class_alias(BasicYarnAutoscalingConfig::class, 'Google_Service_Dataproc_BasicYarnAutoscalingConfig');
class_alias(Batch::class, 'Google_Service_Dataproc_Batch');
class_alias(BatchOperationMetadata::class, 'Google_Service_Dataproc_BatchOperationMetadata');
class_alias(Binding::class, 'Google_Service_Dataproc_Binding');
class_alias(CancelJobRequest::class, 'Google_Service_Dataproc_CancelJobRequest');
class_alias(Cluster::class, 'Google_Service_Dataproc_Cluster');
class_alias(ClusterConfig::class, 'Google_Service_Dataproc_ClusterConfig');
class_alias(ClusterMetrics::class, 'Google_Service_Dataproc_ClusterMetrics');
class_alias(ClusterOperation::class, 'Google_Service_Dataproc_ClusterOperation');
class_alias(ClusterOperationMetadata::class, 'Google_Service_Dataproc_ClusterOperationMetadata');
class_alias(ClusterOperationStatus::class, 'Google_Service_Dataproc_ClusterOperationStatus');
class_alias(ClusterSelector::class, 'Google_Service_Dataproc_ClusterSelector');
class_alias(ClusterStatus::class, 'Google_Service_Dataproc_ClusterStatus');
class_alias(ConfidentialInstanceConfig::class, 'Google_Service_Dataproc_ConfidentialInstanceConfig');
class_alias(DataprocEmpty::class, 'Google_Service_Dataproc_DataprocEmpty');
class_alias(DataprocMetricConfig::class, 'Google_Service_Dataproc_DataprocMetricConfig');
class_alias(DiagnoseClusterRequest::class, 'Google_Service_Dataproc_DiagnoseClusterRequest');
class_alias(DiagnoseClusterResults::class, 'Google_Service_Dataproc_DiagnoseClusterResults');
class_alias(DiskConfig::class, 'Google_Service_Dataproc_DiskConfig');
class_alias(EncryptionConfig::class, 'Google_Service_Dataproc_EncryptionConfig');
class_alias(EndpointConfig::class, 'Google_Service_Dataproc_EndpointConfig');
class_alias(EnvironmentConfig::class, 'Google_Service_Dataproc_EnvironmentConfig');
class_alias(ExecutionConfig::class, 'Google_Service_Dataproc_ExecutionConfig');
class_alias(Expr::class, 'Google_Service_Dataproc_Expr');
class_alias(GceClusterConfig::class, 'Google_Service_Dataproc_GceClusterConfig');
class_alias(GetIamPolicyRequest::class, 'Google_Service_Dataproc_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_Dataproc_GetPolicyOptions');
class_alias(GkeClusterConfig::class, 'Google_Service_Dataproc_GkeClusterConfig');
class_alias(GkeNodeConfig::class, 'Google_Service_Dataproc_GkeNodeConfig');
class_alias(GkeNodePoolAcceleratorConfig::class, 'Google_Service_Dataproc_GkeNodePoolAcceleratorConfig');
class_alias(GkeNodePoolAutoscalingConfig::class, 'Google_Service_Dataproc_GkeNodePoolAutoscalingConfig');
class_alias(GkeNodePoolConfig::class, 'Google_Service_Dataproc_GkeNodePoolConfig');
class_alias(GkeNodePoolTarget::class, 'Google_Service_Dataproc_GkeNodePoolTarget');
class_alias(HadoopJob::class, 'Google_Service_Dataproc_HadoopJob');
class_alias(HiveJob::class, 'Google_Service_Dataproc_HiveJob');
class_alias(IdentityConfig::class, 'Google_Service_Dataproc_IdentityConfig');
class_alias(InjectCredentialsRequest::class, 'Google_Service_Dataproc_InjectCredentialsRequest');
class_alias(InstanceGroupAutoscalingPolicyConfig::class, 'Google_Service_Dataproc_InstanceGroupAutoscalingPolicyConfig');
class_alias(InstanceGroupConfig::class, 'Google_Service_Dataproc_InstanceGroupConfig');
class_alias(InstanceReference::class, 'Google_Service_Dataproc_InstanceReference');
class_alias(InstantiateWorkflowTemplateRequest::class, 'Google_Service_Dataproc_InstantiateWorkflowTemplateRequest');
class_alias(Job::class, 'Google_Service_Dataproc_Job');
class_alias(JobMetadata::class, 'Google_Service_Dataproc_JobMetadata');
class_alias(JobPlacement::class, 'Google_Service_Dataproc_JobPlacement');
class_alias(JobReference::class, 'Google_Service_Dataproc_JobReference');
class_alias(JobScheduling::class, 'Google_Service_Dataproc_JobScheduling');
class_alias(JobStatus::class, 'Google_Service_Dataproc_JobStatus');
class_alias(KerberosConfig::class, 'Google_Service_Dataproc_KerberosConfig');
class_alias(KubernetesClusterConfig::class, 'Google_Service_Dataproc_KubernetesClusterConfig');
class_alias(KubernetesSoftwareConfig::class, 'Google_Service_Dataproc_KubernetesSoftwareConfig');
class_alias(LifecycleConfig::class, 'Google_Service_Dataproc_LifecycleConfig');
class_alias(ListAutoscalingPoliciesResponse::class, 'Google_Service_Dataproc_ListAutoscalingPoliciesResponse');
class_alias(ListBatchesResponse::class, 'Google_Service_Dataproc_ListBatchesResponse');
class_alias(ListClustersResponse::class, 'Google_Service_Dataproc_ListClustersResponse');
class_alias(ListJobsResponse::class, 'Google_Service_Dataproc_ListJobsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Dataproc_ListOperationsResponse');
class_alias(ListWorkflowTemplatesResponse::class, 'Google_Service_Dataproc_ListWorkflowTemplatesResponse');
class_alias(LoggingConfig::class, 'Google_Service_Dataproc_LoggingConfig');
class_alias(ManagedCluster::class, 'Google_Service_Dataproc_ManagedCluster');
class_alias(ManagedGroupConfig::class, 'Google_Service_Dataproc_ManagedGroupConfig');
class_alias(MetastoreConfig::class, 'Google_Service_Dataproc_MetastoreConfig');
class_alias(Metric::class, 'Google_Service_Dataproc_Metric');
class_alias(NamespacedGkeDeploymentTarget::class, 'Google_Service_Dataproc_NamespacedGkeDeploymentTarget');
class_alias(NodeGroupAffinity::class, 'Google_Service_Dataproc_NodeGroupAffinity');
class_alias(NodeGroupOperationMetadata::class, 'Google_Service_Dataproc_NodeGroupOperationMetadata');
class_alias(NodeInitializationAction::class, 'Google_Service_Dataproc_NodeInitializationAction');
class_alias(NodePool::class, 'Google_Service_Dataproc_NodePool');
class_alias(Operation::class, 'Google_Service_Dataproc_Operation');
class_alias(OrderedJob::class, 'Google_Service_Dataproc_OrderedJob');
class_alias(ParameterValidation::class, 'Google_Service_Dataproc_ParameterValidation');
class_alias(PeripheralsConfig::class, 'Google_Service_Dataproc_PeripheralsConfig');
class_alias(PigJob::class, 'Google_Service_Dataproc_PigJob');
class_alias(Policy::class, 'Google_Service_Dataproc_Policy');
class_alias(PrestoJob::class, 'Google_Service_Dataproc_PrestoJob');
class_alias(PySparkBatch::class, 'Google_Service_Dataproc_PySparkBatch');
class_alias(PySparkJob::class, 'Google_Service_Dataproc_PySparkJob');
class_alias(QueryList::class, 'Google_Service_Dataproc_QueryList');
class_alias(RegexValidation::class, 'Google_Service_Dataproc_RegexValidation');
class_alias(RepairClusterRequest::class, 'Google_Service_Dataproc_RepairClusterRequest');
class_alias(ReservationAffinity::class, 'Google_Service_Dataproc_ReservationAffinity');
class_alias(RuntimeConfig::class, 'Google_Service_Dataproc_RuntimeConfig');
class_alias(RuntimeInfo::class, 'Google_Service_Dataproc_RuntimeInfo');
class_alias(SecurityConfig::class, 'Google_Service_Dataproc_SecurityConfig');
class_alias(SessionOperationMetadata::class, 'Google_Service_Dataproc_SessionOperationMetadata');
class_alias(SetIamPolicyRequest::class, 'Google_Service_Dataproc_SetIamPolicyRequest');
class_alias(ShieldedInstanceConfig::class, 'Google_Service_Dataproc_ShieldedInstanceConfig');
class_alias(SoftwareConfig::class, 'Google_Service_Dataproc_SoftwareConfig');
class_alias(SparkBatch::class, 'Google_Service_Dataproc_SparkBatch');
class_alias(SparkHistoryServerConfig::class, 'Google_Service_Dataproc_SparkHistoryServerConfig');
class_alias(SparkJob::class, 'Google_Service_Dataproc_SparkJob');
class_alias(SparkRBatch::class, 'Google_Service_Dataproc_SparkRBatch');
class_alias(SparkRJob::class, 'Google_Service_Dataproc_SparkRJob');
class_alias(SparkSqlBatch::class, 'Google_Service_Dataproc_SparkSqlBatch');
class_alias(SparkSqlJob::class, 'Google_Service_Dataproc_SparkSqlJob');
class_alias(SparkStandaloneAutoscalingConfig::class, 'Google_Service_Dataproc_SparkStandaloneAutoscalingConfig');
class_alias(StartClusterRequest::class, 'Google_Service_Dataproc_StartClusterRequest');
class_alias(StateHistory::class, 'Google_Service_Dataproc_StateHistory');
class_alias(Status::class, 'Google_Service_Dataproc_Status');
class_alias(StopClusterRequest::class, 'Google_Service_Dataproc_StopClusterRequest');
class_alias(SubmitJobRequest::class, 'Google_Service_Dataproc_SubmitJobRequest');
class_alias(TemplateParameter::class, 'Google_Service_Dataproc_TemplateParameter');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_Dataproc_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_Dataproc_TestIamPermissionsResponse');
class_alias(TrinoJob::class, 'Google_Service_Dataproc_TrinoJob');
class_alias(UsageMetrics::class, 'Google_Service_Dataproc_UsageMetrics');
class_alias(ValueValidation::class, 'Google_Service_Dataproc_ValueValidation');
class_alias(VirtualClusterConfig::class, 'Google_Service_Dataproc_VirtualClusterConfig');
class_alias(WorkflowGraph::class, 'Google_Service_Dataproc_WorkflowGraph');
class_alias(WorkflowMetadata::class, 'Google_Service_Dataproc_WorkflowMetadata');
class_alias(WorkflowNode::class, 'Google_Service_Dataproc_WorkflowNode');
class_alias(WorkflowTemplate::class, 'Google_Service_Dataproc_WorkflowTemplate');
class_alias(WorkflowTemplatePlacement::class, 'Google_Service_Dataproc_WorkflowTemplatePlacement');
class_alias(YarnApplication::class, 'Google_Service_Dataproc_YarnApplication');
