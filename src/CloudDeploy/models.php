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

namespace Google\Service\CloudDeploy;

class AbandonReleaseRequest extends \Google\Model
{
}

class AbandonReleaseResponse extends \Google\Model
{
}

class AnthosCluster extends \Google\Model
{
  /** @var string */
  public $membership;

  /** @param string */
  public function setMembership($membership)
  {
    $this->membership = $membership;
  }
  /** @return string */
  public function getMembership()
  {
    return $this->membership;
  }
}

class ApproveRolloutRequest extends \Google\Model
{
  /** @var bool */
  public $approved;

  /** @param bool */
  public function setApproved($approved)
  {
    $this->approved = $approved;
  }
  /** @return bool */
  public function getApproved()
  {
    return $this->approved;
  }
}

class ApproveRolloutResponse extends \Google\Model
{
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

class BuildArtifact extends \Google\Model
{
  /** @var string */
  public $image;
  /** @var string */
  public $tag;

  /** @param string */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return string */
  public function getImage()
  {
    return $this->image;
  }
  /** @param string */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return string */
  public function getTag()
  {
    return $this->tag;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class CloudRunLocation extends \Google\Model
{
  /** @var string */
  public $location;

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
}

class CloudRunMetadata extends \Google\Collection
{
  /** @var string */
  public $revision;
  /** @var string */
  public $service;
  /** @var string[] */
  public $serviceUrls;
  protected $collection_key = 'serviceUrls';
  /** @param string */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string */
  public function getRevision()
  {
    return $this->revision;
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
  /** @param string[] */
  public function setServiceUrls($serviceUrls)
  {
    $this->serviceUrls = $serviceUrls;
  }
  /** @return string[] */
  public function getServiceUrls()
  {
    return $this->serviceUrls;
  }
}

class ClouddeployEmpty extends \Google\Model
{
}

class Config extends \Google\Collection
{
  /** @var string */
  public $defaultSkaffoldVersion;
  /** @var string */
  public $name;
  /** @var SkaffoldVersion[] */
  public $supportedVersions;
  protected $collection_key = 'supportedVersions';
  protected $supportedVersionsType = SkaffoldVersion::class;
  protected $supportedVersionsDataType = 'array';
  /** @param string */
  public function setDefaultSkaffoldVersion($defaultSkaffoldVersion)
  {
    $this->defaultSkaffoldVersion = $defaultSkaffoldVersion;
  }
  /** @return string */
  public function getDefaultSkaffoldVersion()
  {
    return $this->defaultSkaffoldVersion;
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
  /** @param SkaffoldVersion[] */
  public function setSupportedVersions($supportedVersions)
  {
    $this->supportedVersions = $supportedVersions;
  }
  /** @return SkaffoldVersion[] */
  public function getSupportedVersions()
  {
    return $this->supportedVersions;
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

class DefaultPool extends \Google\Model
{
  /** @var string */
  public $artifactStorage;
  /** @var string */
  public $serviceAccount;

  /** @param string */
  public function setArtifactStorage($artifactStorage)
  {
    $this->artifactStorage = $artifactStorage;
  }
  /** @return string */
  public function getArtifactStorage()
  {
    return $this->artifactStorage;
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
}

class DeliveryPipeline extends \Google\Model
{
  /** @var string[] */
  public $annotations;
  /** @var PipelineCondition */
  public $condition;
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
  /** @var SerialPipeline */
  public $serialPipeline;
  /** @var bool */
  public $suspended;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $conditionType = PipelineCondition::class;
  protected $conditionDataType = '';
  protected $serialPipelineType = SerialPipeline::class;
  protected $serialPipelineDataType = '';
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param PipelineCondition */
  public function setCondition(PipelineCondition $condition)
  {
    $this->condition = $condition;
  }
  /** @return PipelineCondition */
  public function getCondition()
  {
    return $this->condition;
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
  /** @param SerialPipeline */
  public function setSerialPipeline(SerialPipeline $serialPipeline)
  {
    $this->serialPipeline = $serialPipeline;
  }
  /** @return SerialPipeline */
  public function getSerialPipeline()
  {
    return $this->serialPipeline;
  }
  /** @param bool */
  public function setSuspended($suspended)
  {
    $this->suspended = $suspended;
  }
  /** @return bool */
  public function getSuspended()
  {
    return $this->suspended;
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

class DeliveryPipelineNotificationEvent extends \Google\Model
{
  /** @var string */
  public $deliveryPipeline;
  /** @var string */
  public $message;
  /** @var string */
  public $type;

  /** @param string */
  public function setDeliveryPipeline($deliveryPipeline)
  {
    $this->deliveryPipeline = $deliveryPipeline;
  }
  /** @return string */
  public function getDeliveryPipeline()
  {
    return $this->deliveryPipeline;
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

class DeployJob extends \Google\Model
{
}

class DeployJobRun extends \Google\Model
{
  /** @var string */
  public $build;
  /** @var string */
  public $failureCause;
  /** @var string */
  public $failureMessage;
  /** @var DeployJobRunMetadata */
  public $metadata;
  protected $metadataType = DeployJobRunMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setBuild($build)
  {
    $this->build = $build;
  }
  /** @return string */
  public function getBuild()
  {
    return $this->build;
  }
  /** @param string */
  public function setFailureCause($failureCause)
  {
    $this->failureCause = $failureCause;
  }
  /** @return string */
  public function getFailureCause()
  {
    return $this->failureCause;
  }
  /** @param string */
  public function setFailureMessage($failureMessage)
  {
    $this->failureMessage = $failureMessage;
  }
  /** @return string */
  public function getFailureMessage()
  {
    return $this->failureMessage;
  }
  /** @param DeployJobRunMetadata */
  public function setMetadata(DeployJobRunMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return DeployJobRunMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

class DeployJobRunMetadata extends \Google\Model
{
  /** @var CloudRunMetadata */
  public $cloudRun;
  protected $cloudRunType = CloudRunMetadata::class;
  protected $cloudRunDataType = '';
  /** @param CloudRunMetadata */
  public function setCloudRun(CloudRunMetadata $cloudRun)
  {
    $this->cloudRun = $cloudRun;
  }
  /** @return CloudRunMetadata */
  public function getCloudRun()
  {
    return $this->cloudRun;
  }
}

class DeploymentJobs extends \Google\Model
{
  /** @var Job */
  public $deployJob;
  /** @var Job */
  public $verifyJob;
  protected $deployJobType = Job::class;
  protected $deployJobDataType = '';
  protected $verifyJobType = Job::class;
  protected $verifyJobDataType = '';
  /** @param Job */
  public function setDeployJob(Job $deployJob)
  {
    $this->deployJob = $deployJob;
  }
  /** @return Job */
  public function getDeployJob()
  {
    return $this->deployJob;
  }
  /** @param Job */
  public function setVerifyJob(Job $verifyJob)
  {
    $this->verifyJob = $verifyJob;
  }
  /** @return Job */
  public function getVerifyJob()
  {
    return $this->verifyJob;
  }
}

class ExecutionConfig extends \Google\Collection
{
  /** @var string */
  public $artifactStorage;
  /** @var DefaultPool */
  public $defaultPool;
  /** @var string */
  public $executionTimeout;
  /** @var PrivatePool */
  public $privatePool;
  /** @var string */
  public $serviceAccount;
  /** @var string[] */
  public $usages;
  /** @var string */
  public $workerPool;
  protected $collection_key = 'usages';
  protected $defaultPoolType = DefaultPool::class;
  protected $defaultPoolDataType = '';
  protected $privatePoolType = PrivatePool::class;
  protected $privatePoolDataType = '';
  /** @param string */
  public function setArtifactStorage($artifactStorage)
  {
    $this->artifactStorage = $artifactStorage;
  }
  /** @return string */
  public function getArtifactStorage()
  {
    return $this->artifactStorage;
  }
  /** @param DefaultPool */
  public function setDefaultPool(DefaultPool $defaultPool)
  {
    $this->defaultPool = $defaultPool;
  }
  /** @return DefaultPool */
  public function getDefaultPool()
  {
    return $this->defaultPool;
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
  /** @param PrivatePool */
  public function setPrivatePool(PrivatePool $privatePool)
  {
    $this->privatePool = $privatePool;
  }
  /** @return PrivatePool */
  public function getPrivatePool()
  {
    return $this->privatePool;
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
  public function setUsages($usages)
  {
    $this->usages = $usages;
  }
  /** @return string[] */
  public function getUsages()
  {
    return $this->usages;
  }
  /** @param string */
  public function setWorkerPool($workerPool)
  {
    $this->workerPool = $workerPool;
  }
  /** @return string */
  public function getWorkerPool()
  {
    return $this->workerPool;
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

class GkeCluster extends \Google\Model
{
  /** @var string */
  public $cluster;
  /** @var bool */
  public $internalIp;

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
  /** @param bool */
  public function setInternalIp($internalIp)
  {
    $this->internalIp = $internalIp;
  }
  /** @return bool */
  public function getInternalIp()
  {
    return $this->internalIp;
  }
}

class Job extends \Google\Model
{
  /** @var DeployJob */
  public $deployJob;
  /** @var string */
  public $id;
  /** @var string */
  public $jobRun;
  /** @var string */
  public $state;
  /** @var VerifyJob */
  public $verifyJob;
  protected $deployJobType = DeployJob::class;
  protected $deployJobDataType = '';
  protected $verifyJobType = VerifyJob::class;
  protected $verifyJobDataType = '';
  /** @param DeployJob */
  public function setDeployJob(DeployJob $deployJob)
  {
    $this->deployJob = $deployJob;
  }
  /** @return DeployJob */
  public function getDeployJob()
  {
    return $this->deployJob;
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
  public function setJobRun($jobRun)
  {
    $this->jobRun = $jobRun;
  }
  /** @return string */
  public function getJobRun()
  {
    return $this->jobRun;
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
  /** @param VerifyJob */
  public function setVerifyJob(VerifyJob $verifyJob)
  {
    $this->verifyJob = $verifyJob;
  }
  /** @return VerifyJob */
  public function getVerifyJob()
  {
    return $this->verifyJob;
  }
}

class JobRun extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var DeployJobRun */
  public $deployJobRun;
  /** @var string */
  public $endTime;
  /** @var string */
  public $etag;
  /** @var string */
  public $jobId;
  /** @var string */
  public $name;
  /** @var string */
  public $phaseId;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $uid;
  /** @var VerifyJobRun */
  public $verifyJobRun;
  protected $deployJobRunType = DeployJobRun::class;
  protected $deployJobRunDataType = '';
  protected $verifyJobRunType = VerifyJobRun::class;
  protected $verifyJobRunDataType = '';
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
  /** @param DeployJobRun */
  public function setDeployJobRun(DeployJobRun $deployJobRun)
  {
    $this->deployJobRun = $deployJobRun;
  }
  /** @return DeployJobRun */
  public function getDeployJobRun()
  {
    return $this->deployJobRun;
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
  public function setPhaseId($phaseId)
  {
    $this->phaseId = $phaseId;
  }
  /** @return string */
  public function getPhaseId()
  {
    return $this->phaseId;
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
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
  }
  /** @param VerifyJobRun */
  public function setVerifyJobRun(VerifyJobRun $verifyJobRun)
  {
    $this->verifyJobRun = $verifyJobRun;
  }
  /** @return VerifyJobRun */
  public function getVerifyJobRun()
  {
    return $this->verifyJobRun;
  }
}

class JobRunNotificationEvent extends \Google\Model
{
  /** @var string */
  public $jobRun;
  /** @var string */
  public $message;
  /** @var string */
  public $pipelineUid;
  /** @var string */
  public $releaseUid;
  /** @var string */
  public $rolloutUid;
  /** @var string */
  public $targetId;
  /** @var string */
  public $type;

  /** @param string */
  public function setJobRun($jobRun)
  {
    $this->jobRun = $jobRun;
  }
  /** @return string */
  public function getJobRun()
  {
    return $this->jobRun;
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
  public function setPipelineUid($pipelineUid)
  {
    $this->pipelineUid = $pipelineUid;
  }
  /** @return string */
  public function getPipelineUid()
  {
    return $this->pipelineUid;
  }
  /** @param string */
  public function setReleaseUid($releaseUid)
  {
    $this->releaseUid = $releaseUid;
  }
  /** @return string */
  public function getReleaseUid()
  {
    return $this->releaseUid;
  }
  /** @param string */
  public function setRolloutUid($rolloutUid)
  {
    $this->rolloutUid = $rolloutUid;
  }
  /** @return string */
  public function getRolloutUid()
  {
    return $this->rolloutUid;
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

class ListDeliveryPipelinesResponse extends \Google\Collection
{
  /** @var DeliveryPipeline[] */
  public $deliveryPipelines;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $deliveryPipelinesType = DeliveryPipeline::class;
  protected $deliveryPipelinesDataType = 'array';
  /** @param DeliveryPipeline[] */
  public function setDeliveryPipelines($deliveryPipelines)
  {
    $this->deliveryPipelines = $deliveryPipelines;
  }
  /** @return DeliveryPipeline[] */
  public function getDeliveryPipelines()
  {
    return $this->deliveryPipelines;
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

class ListJobRunsResponse extends \Google\Collection
{
  /** @var JobRun[] */
  public $jobRuns;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $jobRunsType = JobRun::class;
  protected $jobRunsDataType = 'array';
  /** @param JobRun[] */
  public function setJobRuns($jobRuns)
  {
    $this->jobRuns = $jobRuns;
  }
  /** @return JobRun[] */
  public function getJobRuns()
  {
    return $this->jobRuns;
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

class ListReleasesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Release[] */
  public $releases;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $releasesType = Release::class;
  protected $releasesDataType = 'array';
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
  /** @param Release[] */
  public function setReleases($releases)
  {
    $this->releases = $releases;
  }
  /** @return Release[] */
  public function getReleases()
  {
    return $this->releases;
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

class ListRolloutsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Rollout[] */
  public $rollouts;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $rolloutsType = Rollout::class;
  protected $rolloutsDataType = 'array';
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
  /** @param Rollout[] */
  public function setRollouts($rollouts)
  {
    $this->rollouts = $rollouts;
  }
  /** @return Rollout[] */
  public function getRollouts()
  {
    return $this->rollouts;
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

class ListTargetsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Target[] */
  public $targets;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $targetsType = Target::class;
  protected $targetsDataType = 'array';
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
  /** @param Target[] */
  public function setTargets($targets)
  {
    $this->targets = $targets;
  }
  /** @return Target[] */
  public function getTargets()
  {
    return $this->targets;
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

class Metadata extends \Google\Model
{
  /** @var CloudRunMetadata */
  public $cloudRun;
  protected $cloudRunType = CloudRunMetadata::class;
  protected $cloudRunDataType = '';
  /** @param CloudRunMetadata */
  public function setCloudRun(CloudRunMetadata $cloudRun)
  {
    $this->cloudRun = $cloudRun;
  }
  /** @return CloudRunMetadata */
  public function getCloudRun()
  {
    return $this->cloudRun;
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

class Phase extends \Google\Model
{
  /** @var DeploymentJobs */
  public $deploymentJobs;
  /** @var string */
  public $id;
  /** @var string */
  public $state;
  protected $deploymentJobsType = DeploymentJobs::class;
  protected $deploymentJobsDataType = '';
  /** @param DeploymentJobs */
  public function setDeploymentJobs(DeploymentJobs $deploymentJobs)
  {
    $this->deploymentJobs = $deploymentJobs;
  }
  /** @return DeploymentJobs */
  public function getDeploymentJobs()
  {
    return $this->deploymentJobs;
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

class PipelineCondition extends \Google\Model
{
  /** @var PipelineReadyCondition */
  public $pipelineReadyCondition;
  /** @var TargetsPresentCondition */
  public $targetsPresentCondition;
  protected $pipelineReadyConditionType = PipelineReadyCondition::class;
  protected $pipelineReadyConditionDataType = '';
  protected $targetsPresentConditionType = TargetsPresentCondition::class;
  protected $targetsPresentConditionDataType = '';
  /** @param PipelineReadyCondition */
  public function setPipelineReadyCondition(PipelineReadyCondition $pipelineReadyCondition)
  {
    $this->pipelineReadyCondition = $pipelineReadyCondition;
  }
  /** @return PipelineReadyCondition */
  public function getPipelineReadyCondition()
  {
    return $this->pipelineReadyCondition;
  }
  /** @param TargetsPresentCondition */
  public function setTargetsPresentCondition(TargetsPresentCondition $targetsPresentCondition)
  {
    $this->targetsPresentCondition = $targetsPresentCondition;
  }
  /** @return TargetsPresentCondition */
  public function getTargetsPresentCondition()
  {
    return $this->targetsPresentCondition;
  }
}

class PipelineReadyCondition extends \Google\Model
{
  /** @var bool */
  public $status;
  /** @var string */
  public $updateTime;

  /** @param bool */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return bool */
  public function getStatus()
  {
    return $this->status;
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

class PrivatePool extends \Google\Model
{
  /** @var string */
  public $artifactStorage;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $workerPool;

  /** @param string */
  public function setArtifactStorage($artifactStorage)
  {
    $this->artifactStorage = $artifactStorage;
  }
  /** @return string */
  public function getArtifactStorage()
  {
    return $this->artifactStorage;
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
  public function setWorkerPool($workerPool)
  {
    $this->workerPool = $workerPool;
  }
  /** @return string */
  public function getWorkerPool()
  {
    return $this->workerPool;
  }
}

class Release extends \Google\Collection
{
  /** @var bool */
  public $abandoned;
  /** @var string[] */
  public $annotations;
  /** @var BuildArtifact[] */
  public $buildArtifacts;
  /** @var string */
  public $createTime;
  /** @var DeliveryPipeline */
  public $deliveryPipelineSnapshot;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $renderEndTime;
  /** @var string */
  public $renderStartTime;
  /** @var string */
  public $renderState;
  /** @var string */
  public $skaffoldConfigPath;
  /** @var string */
  public $skaffoldConfigUri;
  /** @var string */
  public $skaffoldVersion;
  /** @var TargetArtifact[] */
  public $targetArtifacts;
  /** @var TargetRender[] */
  public $targetRenders;
  /** @var Target[] */
  public $targetSnapshots;
  /** @var string */
  public $uid;
  protected $collection_key = 'targetSnapshots';
  protected $buildArtifactsType = BuildArtifact::class;
  protected $buildArtifactsDataType = 'array';
  protected $deliveryPipelineSnapshotType = DeliveryPipeline::class;
  protected $deliveryPipelineSnapshotDataType = '';
  protected $targetArtifactsType = TargetArtifact::class;
  protected $targetArtifactsDataType = 'map';
  protected $targetRendersType = TargetRender::class;
  protected $targetRendersDataType = 'map';
  protected $targetSnapshotsType = Target::class;
  protected $targetSnapshotsDataType = 'array';
  /** @param bool */
  public function setAbandoned($abandoned)
  {
    $this->abandoned = $abandoned;
  }
  /** @return bool */
  public function getAbandoned()
  {
    return $this->abandoned;
  }
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param BuildArtifact[] */
  public function setBuildArtifacts($buildArtifacts)
  {
    $this->buildArtifacts = $buildArtifacts;
  }
  /** @return BuildArtifact[] */
  public function getBuildArtifacts()
  {
    return $this->buildArtifacts;
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
  /** @param DeliveryPipeline */
  public function setDeliveryPipelineSnapshot(DeliveryPipeline $deliveryPipelineSnapshot)
  {
    $this->deliveryPipelineSnapshot = $deliveryPipelineSnapshot;
  }
  /** @return DeliveryPipeline */
  public function getDeliveryPipelineSnapshot()
  {
    return $this->deliveryPipelineSnapshot;
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
  /** @param string */
  public function setRenderEndTime($renderEndTime)
  {
    $this->renderEndTime = $renderEndTime;
  }
  /** @return string */
  public function getRenderEndTime()
  {
    return $this->renderEndTime;
  }
  /** @param string */
  public function setRenderStartTime($renderStartTime)
  {
    $this->renderStartTime = $renderStartTime;
  }
  /** @return string */
  public function getRenderStartTime()
  {
    return $this->renderStartTime;
  }
  /** @param string */
  public function setRenderState($renderState)
  {
    $this->renderState = $renderState;
  }
  /** @return string */
  public function getRenderState()
  {
    return $this->renderState;
  }
  /** @param string */
  public function setSkaffoldConfigPath($skaffoldConfigPath)
  {
    $this->skaffoldConfigPath = $skaffoldConfigPath;
  }
  /** @return string */
  public function getSkaffoldConfigPath()
  {
    return $this->skaffoldConfigPath;
  }
  /** @param string */
  public function setSkaffoldConfigUri($skaffoldConfigUri)
  {
    $this->skaffoldConfigUri = $skaffoldConfigUri;
  }
  /** @return string */
  public function getSkaffoldConfigUri()
  {
    return $this->skaffoldConfigUri;
  }
  /** @param string */
  public function setSkaffoldVersion($skaffoldVersion)
  {
    $this->skaffoldVersion = $skaffoldVersion;
  }
  /** @return string */
  public function getSkaffoldVersion()
  {
    return $this->skaffoldVersion;
  }
  /** @param TargetArtifact[] */
  public function setTargetArtifacts($targetArtifacts)
  {
    $this->targetArtifacts = $targetArtifacts;
  }
  /** @return TargetArtifact[] */
  public function getTargetArtifacts()
  {
    return $this->targetArtifacts;
  }
  /** @param TargetRender[] */
  public function setTargetRenders($targetRenders)
  {
    $this->targetRenders = $targetRenders;
  }
  /** @return TargetRender[] */
  public function getTargetRenders()
  {
    return $this->targetRenders;
  }
  /** @param Target[] */
  public function setTargetSnapshots($targetSnapshots)
  {
    $this->targetSnapshots = $targetSnapshots;
  }
  /** @return Target[] */
  public function getTargetSnapshots()
  {
    return $this->targetSnapshots;
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
}

class ReleaseNotificationEvent extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $release;
  /** @var string */
  public $type;

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
  public function setRelease($release)
  {
    $this->release = $release;
  }
  /** @return string */
  public function getRelease()
  {
    return $this->release;
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

class ReleaseRenderEvent extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $release;

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
  public function setRelease($release)
  {
    $this->release = $release;
  }
  /** @return string */
  public function getRelease()
  {
    return $this->release;
  }
}

class RetryJobRequest extends \Google\Model
{
  /** @var string */
  public $jobId;
  /** @var string */
  public $phaseId;

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
  public function setPhaseId($phaseId)
  {
    $this->phaseId = $phaseId;
  }
  /** @return string */
  public function getPhaseId()
  {
    return $this->phaseId;
  }
}

class RetryJobResponse extends \Google\Model
{
}

class Rollout extends \Google\Collection
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $approvalState;
  /** @var string */
  public $approveTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deployEndTime;
  /** @var string */
  public $deployFailureCause;
  /** @var string */
  public $deployStartTime;
  /** @var string */
  public $deployingBuild;
  /** @var string */
  public $description;
  /** @var string */
  public $enqueueTime;
  /** @var string */
  public $etag;
  /** @var string */
  public $failureReason;
  /** @var string[] */
  public $labels;
  /** @var Metadata */
  public $metadata;
  /** @var string */
  public $name;
  /** @var Phase[] */
  public $phases;
  /** @var string */
  public $state;
  /** @var string */
  public $targetId;
  /** @var string */
  public $uid;
  protected $collection_key = 'phases';
  protected $metadataType = Metadata::class;
  protected $metadataDataType = '';
  protected $phasesType = Phase::class;
  protected $phasesDataType = 'array';
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param string */
  public function setApprovalState($approvalState)
  {
    $this->approvalState = $approvalState;
  }
  /** @return string */
  public function getApprovalState()
  {
    return $this->approvalState;
  }
  /** @param string */
  public function setApproveTime($approveTime)
  {
    $this->approveTime = $approveTime;
  }
  /** @return string */
  public function getApproveTime()
  {
    return $this->approveTime;
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
  public function setDeployEndTime($deployEndTime)
  {
    $this->deployEndTime = $deployEndTime;
  }
  /** @return string */
  public function getDeployEndTime()
  {
    return $this->deployEndTime;
  }
  /** @param string */
  public function setDeployFailureCause($deployFailureCause)
  {
    $this->deployFailureCause = $deployFailureCause;
  }
  /** @return string */
  public function getDeployFailureCause()
  {
    return $this->deployFailureCause;
  }
  /** @param string */
  public function setDeployStartTime($deployStartTime)
  {
    $this->deployStartTime = $deployStartTime;
  }
  /** @return string */
  public function getDeployStartTime()
  {
    return $this->deployStartTime;
  }
  /** @param string */
  public function setDeployingBuild($deployingBuild)
  {
    $this->deployingBuild = $deployingBuild;
  }
  /** @return string */
  public function getDeployingBuild()
  {
    return $this->deployingBuild;
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
  public function setEnqueueTime($enqueueTime)
  {
    $this->enqueueTime = $enqueueTime;
  }
  /** @return string */
  public function getEnqueueTime()
  {
    return $this->enqueueTime;
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
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /** @return string */
  public function getFailureReason()
  {
    return $this->failureReason;
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
  /** @param Metadata */
  public function setMetadata(Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return Metadata */
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
  /** @param Phase[] */
  public function setPhases($phases)
  {
    $this->phases = $phases;
  }
  /** @return Phase[] */
  public function getPhases()
  {
    return $this->phases;
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
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
  }
}

class RolloutNotificationEvent extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $pipelineUid;
  /** @var string */
  public $releaseUid;
  /** @var string */
  public $rollout;
  /** @var string */
  public $targetId;
  /** @var string */
  public $type;

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
  public function setPipelineUid($pipelineUid)
  {
    $this->pipelineUid = $pipelineUid;
  }
  /** @return string */
  public function getPipelineUid()
  {
    return $this->pipelineUid;
  }
  /** @param string */
  public function setReleaseUid($releaseUid)
  {
    $this->releaseUid = $releaseUid;
  }
  /** @return string */
  public function getReleaseUid()
  {
    return $this->releaseUid;
  }
  /** @param string */
  public function setRollout($rollout)
  {
    $this->rollout = $rollout;
  }
  /** @return string */
  public function getRollout()
  {
    return $this->rollout;
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

class SerialPipeline extends \Google\Collection
{
  /** @var Stage[] */
  public $stages;
  protected $collection_key = 'stages';
  protected $stagesType = Stage::class;
  protected $stagesDataType = 'array';
  /** @param Stage[] */
  public function setStages($stages)
  {
    $this->stages = $stages;
  }
  /** @return Stage[] */
  public function getStages()
  {
    return $this->stages;
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

class SkaffoldVersion extends \Google\Model
{
  /** @var Date */
  public $supportEndDate;
  /** @var string */
  public $version;
  protected $supportEndDateType = Date::class;
  protected $supportEndDateDataType = '';
  /** @param Date */
  public function setSupportEndDate(Date $supportEndDate)
  {
    $this->supportEndDate = $supportEndDate;
  }
  /** @return Date */
  public function getSupportEndDate()
  {
    return $this->supportEndDate;
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

class Stage extends \Google\Collection
{
  /** @var string[] */
  public $profiles;
  /** @var Strategy */
  public $strategy;
  /** @var string */
  public $targetId;
  protected $collection_key = 'profiles';
  protected $strategyType = Strategy::class;
  protected $strategyDataType = '';
  /** @param string[] */
  public function setProfiles($profiles)
  {
    $this->profiles = $profiles;
  }
  /** @return string[] */
  public function getProfiles()
  {
    return $this->profiles;
  }
  /** @param Strategy */
  public function setStrategy(Strategy $strategy)
  {
    $this->strategy = $strategy;
  }
  /** @return Strategy */
  public function getStrategy()
  {
    return $this->strategy;
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
}

class Standard extends \Google\Model
{
  /** @var bool */
  public $verify;

  /** @param bool */
  public function setVerify($verify)
  {
    $this->verify = $verify;
  }
  /** @return bool */
  public function getVerify()
  {
    return $this->verify;
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

class Strategy extends \Google\Model
{
  /** @var Standard */
  public $standard;
  protected $standardType = Standard::class;
  protected $standardDataType = '';
  /** @param Standard */
  public function setStandard(Standard $standard)
  {
    $this->standard = $standard;
  }
  /** @return Standard */
  public function getStandard()
  {
    return $this->standard;
  }
}

class Target extends \Google\Collection
{
  /** @var string[] */
  public $annotations;
  /** @var AnthosCluster */
  public $anthosCluster;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var ExecutionConfig[] */
  public $executionConfigs;
  /** @var GkeCluster */
  public $gke;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var bool */
  public $requireApproval;
  /** @var CloudRunLocation */
  public $run;
  /** @var string */
  public $targetId;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'executionConfigs';
  protected $anthosClusterType = AnthosCluster::class;
  protected $anthosClusterDataType = '';
  protected $executionConfigsType = ExecutionConfig::class;
  protected $executionConfigsDataType = 'array';
  protected $gkeType = GkeCluster::class;
  protected $gkeDataType = '';
  protected $runType = CloudRunLocation::class;
  protected $runDataType = '';
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param AnthosCluster */
  public function setAnthosCluster(AnthosCluster $anthosCluster)
  {
    $this->anthosCluster = $anthosCluster;
  }
  /** @return AnthosCluster */
  public function getAnthosCluster()
  {
    return $this->anthosCluster;
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
  /** @param ExecutionConfig[] */
  public function setExecutionConfigs($executionConfigs)
  {
    $this->executionConfigs = $executionConfigs;
  }
  /** @return ExecutionConfig[] */
  public function getExecutionConfigs()
  {
    return $this->executionConfigs;
  }
  /** @param GkeCluster */
  public function setGke(GkeCluster $gke)
  {
    $this->gke = $gke;
  }
  /** @return GkeCluster */
  public function getGke()
  {
    return $this->gke;
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
  public function setRequireApproval($requireApproval)
  {
    $this->requireApproval = $requireApproval;
  }
  /** @return bool */
  public function getRequireApproval()
  {
    return $this->requireApproval;
  }
  /** @param CloudRunLocation */
  public function setRun(CloudRunLocation $run)
  {
    $this->run = $run;
  }
  /** @return CloudRunLocation */
  public function getRun()
  {
    return $this->run;
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

class TargetArtifact extends \Google\Model
{
  /** @var string */
  public $artifactUri;
  /** @var string */
  public $manifestPath;
  /** @var string */
  public $skaffoldConfigPath;

  /** @param string */
  public function setArtifactUri($artifactUri)
  {
    $this->artifactUri = $artifactUri;
  }
  /** @return string */
  public function getArtifactUri()
  {
    return $this->artifactUri;
  }
  /** @param string */
  public function setManifestPath($manifestPath)
  {
    $this->manifestPath = $manifestPath;
  }
  /** @return string */
  public function getManifestPath()
  {
    return $this->manifestPath;
  }
  /** @param string */
  public function setSkaffoldConfigPath($skaffoldConfigPath)
  {
    $this->skaffoldConfigPath = $skaffoldConfigPath;
  }
  /** @return string */
  public function getSkaffoldConfigPath()
  {
    return $this->skaffoldConfigPath;
  }
}

class TargetNotificationEvent extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $target;
  /** @var string */
  public $type;

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

class TargetRender extends \Google\Model
{
  /** @var string */
  public $failureCause;
  /** @var string */
  public $failureMessage;
  /** @var string */
  public $renderingBuild;
  /** @var string */
  public $renderingState;

  /** @param string */
  public function setFailureCause($failureCause)
  {
    $this->failureCause = $failureCause;
  }
  /** @return string */
  public function getFailureCause()
  {
    return $this->failureCause;
  }
  /** @param string */
  public function setFailureMessage($failureMessage)
  {
    $this->failureMessage = $failureMessage;
  }
  /** @return string */
  public function getFailureMessage()
  {
    return $this->failureMessage;
  }
  /** @param string */
  public function setRenderingBuild($renderingBuild)
  {
    $this->renderingBuild = $renderingBuild;
  }
  /** @return string */
  public function getRenderingBuild()
  {
    return $this->renderingBuild;
  }
  /** @param string */
  public function setRenderingState($renderingState)
  {
    $this->renderingState = $renderingState;
  }
  /** @return string */
  public function getRenderingState()
  {
    return $this->renderingState;
  }
}

class TargetsPresentCondition extends \Google\Collection
{
  /** @var string[] */
  public $missingTargets;
  /** @var bool */
  public $status;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'missingTargets';
  /** @param string[] */
  public function setMissingTargets($missingTargets)
  {
    $this->missingTargets = $missingTargets;
  }
  /** @return string[] */
  public function getMissingTargets()
  {
    return $this->missingTargets;
  }
  /** @param bool */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return bool */
  public function getStatus()
  {
    return $this->status;
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

class VerifyJob extends \Google\Model
{
}

class VerifyJobRun extends \Google\Model
{
  /** @var string */
  public $artifactUri;
  /** @var string */
  public $build;
  /** @var string */
  public $eventLogPath;
  /** @var string */
  public $failureCause;
  /** @var string */
  public $failureMessage;

  /** @param string */
  public function setArtifactUri($artifactUri)
  {
    $this->artifactUri = $artifactUri;
  }
  /** @return string */
  public function getArtifactUri()
  {
    return $this->artifactUri;
  }
  /** @param string */
  public function setBuild($build)
  {
    $this->build = $build;
  }
  /** @return string */
  public function getBuild()
  {
    return $this->build;
  }
  /** @param string */
  public function setEventLogPath($eventLogPath)
  {
    $this->eventLogPath = $eventLogPath;
  }
  /** @return string */
  public function getEventLogPath()
  {
    return $this->eventLogPath;
  }
  /** @param string */
  public function setFailureCause($failureCause)
  {
    $this->failureCause = $failureCause;
  }
  /** @return string */
  public function getFailureCause()
  {
    return $this->failureCause;
  }
  /** @param string */
  public function setFailureMessage($failureMessage)
  {
    $this->failureMessage = $failureMessage;
  }
  /** @return string */
  public function getFailureMessage()
  {
    return $this->failureMessage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AbandonReleaseRequest::class, 'Google_Service_CloudDeploy_AbandonReleaseRequest');
class_alias(AbandonReleaseResponse::class, 'Google_Service_CloudDeploy_AbandonReleaseResponse');
class_alias(AnthosCluster::class, 'Google_Service_CloudDeploy_AnthosCluster');
class_alias(ApproveRolloutRequest::class, 'Google_Service_CloudDeploy_ApproveRolloutRequest');
class_alias(ApproveRolloutResponse::class, 'Google_Service_CloudDeploy_ApproveRolloutResponse');
class_alias(AuditConfig::class, 'Google_Service_CloudDeploy_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_CloudDeploy_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_CloudDeploy_Binding');
class_alias(BuildArtifact::class, 'Google_Service_CloudDeploy_BuildArtifact');
class_alias(CancelOperationRequest::class, 'Google_Service_CloudDeploy_CancelOperationRequest');
class_alias(CloudRunLocation::class, 'Google_Service_CloudDeploy_CloudRunLocation');
class_alias(CloudRunMetadata::class, 'Google_Service_CloudDeploy_CloudRunMetadata');
class_alias(ClouddeployEmpty::class, 'Google_Service_CloudDeploy_ClouddeployEmpty');
class_alias(Config::class, 'Google_Service_CloudDeploy_Config');
class_alias(Date::class, 'Google_Service_CloudDeploy_Date');
class_alias(DefaultPool::class, 'Google_Service_CloudDeploy_DefaultPool');
class_alias(DeliveryPipeline::class, 'Google_Service_CloudDeploy_DeliveryPipeline');
class_alias(DeliveryPipelineNotificationEvent::class, 'Google_Service_CloudDeploy_DeliveryPipelineNotificationEvent');
class_alias(DeployJob::class, 'Google_Service_CloudDeploy_DeployJob');
class_alias(DeployJobRun::class, 'Google_Service_CloudDeploy_DeployJobRun');
class_alias(DeployJobRunMetadata::class, 'Google_Service_CloudDeploy_DeployJobRunMetadata');
class_alias(DeploymentJobs::class, 'Google_Service_CloudDeploy_DeploymentJobs');
class_alias(ExecutionConfig::class, 'Google_Service_CloudDeploy_ExecutionConfig');
class_alias(Expr::class, 'Google_Service_CloudDeploy_Expr');
class_alias(GkeCluster::class, 'Google_Service_CloudDeploy_GkeCluster');
class_alias(Job::class, 'Google_Service_CloudDeploy_Job');
class_alias(JobRun::class, 'Google_Service_CloudDeploy_JobRun');
class_alias(JobRunNotificationEvent::class, 'Google_Service_CloudDeploy_JobRunNotificationEvent');
class_alias(ListDeliveryPipelinesResponse::class, 'Google_Service_CloudDeploy_ListDeliveryPipelinesResponse');
class_alias(ListJobRunsResponse::class, 'Google_Service_CloudDeploy_ListJobRunsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudDeploy_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudDeploy_ListOperationsResponse');
class_alias(ListReleasesResponse::class, 'Google_Service_CloudDeploy_ListReleasesResponse');
class_alias(ListRolloutsResponse::class, 'Google_Service_CloudDeploy_ListRolloutsResponse');
class_alias(ListTargetsResponse::class, 'Google_Service_CloudDeploy_ListTargetsResponse');
class_alias(Location::class, 'Google_Service_CloudDeploy_Location');
class_alias(Metadata::class, 'Google_Service_CloudDeploy_Metadata');
class_alias(Operation::class, 'Google_Service_CloudDeploy_Operation');
class_alias(OperationMetadata::class, 'Google_Service_CloudDeploy_OperationMetadata');
class_alias(Phase::class, 'Google_Service_CloudDeploy_Phase');
class_alias(PipelineCondition::class, 'Google_Service_CloudDeploy_PipelineCondition');
class_alias(PipelineReadyCondition::class, 'Google_Service_CloudDeploy_PipelineReadyCondition');
class_alias(Policy::class, 'Google_Service_CloudDeploy_Policy');
class_alias(PrivatePool::class, 'Google_Service_CloudDeploy_PrivatePool');
class_alias(Release::class, 'Google_Service_CloudDeploy_Release');
class_alias(ReleaseNotificationEvent::class, 'Google_Service_CloudDeploy_ReleaseNotificationEvent');
class_alias(ReleaseRenderEvent::class, 'Google_Service_CloudDeploy_ReleaseRenderEvent');
class_alias(RetryJobRequest::class, 'Google_Service_CloudDeploy_RetryJobRequest');
class_alias(RetryJobResponse::class, 'Google_Service_CloudDeploy_RetryJobResponse');
class_alias(Rollout::class, 'Google_Service_CloudDeploy_Rollout');
class_alias(RolloutNotificationEvent::class, 'Google_Service_CloudDeploy_RolloutNotificationEvent');
class_alias(SerialPipeline::class, 'Google_Service_CloudDeploy_SerialPipeline');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CloudDeploy_SetIamPolicyRequest');
class_alias(SkaffoldVersion::class, 'Google_Service_CloudDeploy_SkaffoldVersion');
class_alias(Stage::class, 'Google_Service_CloudDeploy_Stage');
class_alias(Standard::class, 'Google_Service_CloudDeploy_Standard');
class_alias(Status::class, 'Google_Service_CloudDeploy_Status');
class_alias(Strategy::class, 'Google_Service_CloudDeploy_Strategy');
class_alias(Target::class, 'Google_Service_CloudDeploy_Target');
class_alias(TargetArtifact::class, 'Google_Service_CloudDeploy_TargetArtifact');
class_alias(TargetNotificationEvent::class, 'Google_Service_CloudDeploy_TargetNotificationEvent');
class_alias(TargetRender::class, 'Google_Service_CloudDeploy_TargetRender');
class_alias(TargetsPresentCondition::class, 'Google_Service_CloudDeploy_TargetsPresentCondition');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CloudDeploy_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CloudDeploy_TestIamPermissionsResponse');
class_alias(VerifyJob::class, 'Google_Service_CloudDeploy_VerifyJob');
class_alias(VerifyJobRun::class, 'Google_Service_CloudDeploy_VerifyJobRun');
