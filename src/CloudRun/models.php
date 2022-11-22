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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2BinaryAuthorization extends \Google\Model
{
  /** @var string */
  public $breakglassJustification;
  /** @var bool */
  public $useDefault;

  /** @param string */
  public function setBreakglassJustification($breakglassJustification)
  {
    $this->breakglassJustification = $breakglassJustification;
  }
  /** @return string */
  public function getBreakglassJustification()
  {
    return $this->breakglassJustification;
  }
  /** @param bool */
  public function setUseDefault($useDefault)
  {
    $this->useDefault = $useDefault;
  }
  /** @return bool */
  public function getUseDefault()
  {
    return $this->useDefault;
  }
}

class GoogleCloudRunV2CloudSqlInstance extends \Google\Collection
{
  /** @var string[] */
  public $instances;
  protected $collection_key = 'instances';
  /** @param string[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return string[] */
  public function getInstances()
  {
    return $this->instances;
  }
}

class GoogleCloudRunV2Condition extends \Google\Model
{
  /** @var string */
  public $executionReason;
  /** @var string */
  public $lastTransitionTime;
  /** @var string */
  public $message;
  /** @var string */
  public $reason;
  /** @var string */
  public $revisionReason;
  /** @var string */
  public $severity;
  /** @var string */
  public $state;
  /** @var string */
  public $type;

  /** @param string */
  public function setExecutionReason($executionReason)
  {
    $this->executionReason = $executionReason;
  }
  /** @return string */
  public function getExecutionReason()
  {
    return $this->executionReason;
  }
  /** @param string */
  public function setLastTransitionTime($lastTransitionTime)
  {
    $this->lastTransitionTime = $lastTransitionTime;
  }
  /** @return string */
  public function getLastTransitionTime()
  {
    return $this->lastTransitionTime;
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
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
  }
  /** @param string */
  public function setRevisionReason($revisionReason)
  {
    $this->revisionReason = $revisionReason;
  }
  /** @return string */
  public function getRevisionReason()
  {
    return $this->revisionReason;
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

class GoogleCloudRunV2Container extends \Google\Collection
{
  /** @var string[] */
  public $args;
  /** @var string[] */
  public $command;
  /** @var GoogleCloudRunV2EnvVar[] */
  public $env;
  /** @var string */
  public $image;
  /** @var GoogleCloudRunV2Probe */
  public $livenessProbe;
  /** @var string */
  public $name;
  /** @var GoogleCloudRunV2ContainerPort[] */
  public $ports;
  /** @var GoogleCloudRunV2ResourceRequirements */
  public $resources;
  /** @var GoogleCloudRunV2Probe */
  public $startupProbe;
  /** @var GoogleCloudRunV2VolumeMount[] */
  public $volumeMounts;
  /** @var string */
  public $workingDir;
  protected $collection_key = 'volumeMounts';
  protected $envType = GoogleCloudRunV2EnvVar::class;
  protected $envDataType = 'array';
  protected $livenessProbeType = GoogleCloudRunV2Probe::class;
  protected $livenessProbeDataType = '';
  protected $portsType = GoogleCloudRunV2ContainerPort::class;
  protected $portsDataType = 'array';
  protected $resourcesType = GoogleCloudRunV2ResourceRequirements::class;
  protected $resourcesDataType = '';
  protected $startupProbeType = GoogleCloudRunV2Probe::class;
  protected $startupProbeDataType = '';
  protected $volumeMountsType = GoogleCloudRunV2VolumeMount::class;
  protected $volumeMountsDataType = 'array';
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
  public function setCommand($command)
  {
    $this->command = $command;
  }
  /** @return string[] */
  public function getCommand()
  {
    return $this->command;
  }
  /** @param GoogleCloudRunV2EnvVar[] */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /** @return GoogleCloudRunV2EnvVar[] */
  public function getEnv()
  {
    return $this->env;
  }
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
  /** @param GoogleCloudRunV2Probe */
  public function setLivenessProbe(GoogleCloudRunV2Probe $livenessProbe)
  {
    $this->livenessProbe = $livenessProbe;
  }
  /** @return GoogleCloudRunV2Probe */
  public function getLivenessProbe()
  {
    return $this->livenessProbe;
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
  /** @param GoogleCloudRunV2ContainerPort[] */
  public function setPorts($ports)
  {
    $this->ports = $ports;
  }
  /** @return GoogleCloudRunV2ContainerPort[] */
  public function getPorts()
  {
    return $this->ports;
  }
  /** @param GoogleCloudRunV2ResourceRequirements */
  public function setResources(GoogleCloudRunV2ResourceRequirements $resources)
  {
    $this->resources = $resources;
  }
  /** @return GoogleCloudRunV2ResourceRequirements */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param GoogleCloudRunV2Probe */
  public function setStartupProbe(GoogleCloudRunV2Probe $startupProbe)
  {
    $this->startupProbe = $startupProbe;
  }
  /** @return GoogleCloudRunV2Probe */
  public function getStartupProbe()
  {
    return $this->startupProbe;
  }
  /** @param GoogleCloudRunV2VolumeMount[] */
  public function setVolumeMounts($volumeMounts)
  {
    $this->volumeMounts = $volumeMounts;
  }
  /** @return GoogleCloudRunV2VolumeMount[] */
  public function getVolumeMounts()
  {
    return $this->volumeMounts;
  }
  /** @param string */
  public function setWorkingDir($workingDir)
  {
    $this->workingDir = $workingDir;
  }
  /** @return string */
  public function getWorkingDir()
  {
    return $this->workingDir;
  }
}

class GoogleCloudRunV2ContainerPort extends \Google\Model
{
  /** @var int */
  public $containerPort;
  /** @var string */
  public $name;

  /** @param int */
  public function setContainerPort($containerPort)
  {
    $this->containerPort = $containerPort;
  }
  /** @return int */
  public function getContainerPort()
  {
    return $this->containerPort;
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

class GoogleCloudRunV2EnvVar extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $value;
  /** @var GoogleCloudRunV2EnvVarSource */
  public $valueSource;
  protected $valueSourceType = GoogleCloudRunV2EnvVarSource::class;
  protected $valueSourceDataType = '';
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
  /** @param GoogleCloudRunV2EnvVarSource */
  public function setValueSource(GoogleCloudRunV2EnvVarSource $valueSource)
  {
    $this->valueSource = $valueSource;
  }
  /** @return GoogleCloudRunV2EnvVarSource */
  public function getValueSource()
  {
    return $this->valueSource;
  }
}

class GoogleCloudRunV2EnvVarSource extends \Google\Model
{
  /** @var GoogleCloudRunV2SecretKeySelector */
  public $secretKeyRef;
  protected $secretKeyRefType = GoogleCloudRunV2SecretKeySelector::class;
  protected $secretKeyRefDataType = '';
  /** @param GoogleCloudRunV2SecretKeySelector */
  public function setSecretKeyRef(GoogleCloudRunV2SecretKeySelector $secretKeyRef)
  {
    $this->secretKeyRef = $secretKeyRef;
  }
  /** @return GoogleCloudRunV2SecretKeySelector */
  public function getSecretKeyRef()
  {
    return $this->secretKeyRef;
  }
}

class GoogleCloudRunV2Execution extends \Google\Collection
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $completionTime;
  /** @var GoogleCloudRunV2Condition[] */
  public $conditions;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $etag;
  /** @var string */
  public $expireTime;
  /** @var int */
  public $failedCount;
  /** @var string */
  public $generation;
  /** @var string */
  public $job;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $launchStage;
  /** @var string */
  public $name;
  /** @var string */
  public $observedGeneration;
  /** @var int */
  public $parallelism;
  /** @var bool */
  public $reconciling;
  /** @var int */
  public $runningCount;
  /** @var string */
  public $startTime;
  /** @var int */
  public $succeededCount;
  /** @var int */
  public $taskCount;
  /** @var GoogleCloudRunV2TaskTemplate */
  public $template;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'conditions';
  protected $conditionsType = GoogleCloudRunV2Condition::class;
  protected $conditionsDataType = 'array';
  protected $templateType = GoogleCloudRunV2TaskTemplate::class;
  protected $templateDataType = '';
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
  public function setCompletionTime($completionTime)
  {
    $this->completionTime = $completionTime;
  }
  /** @return string */
  public function getCompletionTime()
  {
    return $this->completionTime;
  }
  /** @param GoogleCloudRunV2Condition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return GoogleCloudRunV2Condition[] */
  public function getConditions()
  {
    return $this->conditions;
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
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
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
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /** @param int */
  public function setFailedCount($failedCount)
  {
    $this->failedCount = $failedCount;
  }
  /** @return int */
  public function getFailedCount()
  {
    return $this->failedCount;
  }
  /** @param string */
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /** @return string */
  public function getGeneration()
  {
    return $this->generation;
  }
  /** @param string */
  public function setJob($job)
  {
    $this->job = $job;
  }
  /** @return string */
  public function getJob()
  {
    return $this->job;
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
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
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
  public function setObservedGeneration($observedGeneration)
  {
    $this->observedGeneration = $observedGeneration;
  }
  /** @return string */
  public function getObservedGeneration()
  {
    return $this->observedGeneration;
  }
  /** @param int */
  public function setParallelism($parallelism)
  {
    $this->parallelism = $parallelism;
  }
  /** @return int */
  public function getParallelism()
  {
    return $this->parallelism;
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
  /** @param int */
  public function setRunningCount($runningCount)
  {
    $this->runningCount = $runningCount;
  }
  /** @return int */
  public function getRunningCount()
  {
    return $this->runningCount;
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
  public function setSucceededCount($succeededCount)
  {
    $this->succeededCount = $succeededCount;
  }
  /** @return int */
  public function getSucceededCount()
  {
    return $this->succeededCount;
  }
  /** @param int */
  public function setTaskCount($taskCount)
  {
    $this->taskCount = $taskCount;
  }
  /** @return int */
  public function getTaskCount()
  {
    return $this->taskCount;
  }
  /** @param GoogleCloudRunV2TaskTemplate */
  public function setTemplate(GoogleCloudRunV2TaskTemplate $template)
  {
    $this->template = $template;
  }
  /** @return GoogleCloudRunV2TaskTemplate */
  public function getTemplate()
  {
    return $this->template;
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

class GoogleCloudRunV2ExecutionReference extends \Google\Model
{
  /** @var string */
  public $completionTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;

  /** @param string */
  public function setCompletionTime($completionTime)
  {
    $this->completionTime = $completionTime;
  }
  /** @return string */
  public function getCompletionTime()
  {
    return $this->completionTime;
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

class GoogleCloudRunV2ExecutionTemplate extends \Google\Model
{
  /** @var string[] */
  public $annotations;
  /** @var string[] */
  public $labels;
  /** @var int */
  public $parallelism;
  /** @var int */
  public $taskCount;
  /** @var GoogleCloudRunV2TaskTemplate */
  public $template;
  protected $templateType = GoogleCloudRunV2TaskTemplate::class;
  protected $templateDataType = '';
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
  /** @param int */
  public function setParallelism($parallelism)
  {
    $this->parallelism = $parallelism;
  }
  /** @return int */
  public function getParallelism()
  {
    return $this->parallelism;
  }
  /** @param int */
  public function setTaskCount($taskCount)
  {
    $this->taskCount = $taskCount;
  }
  /** @return int */
  public function getTaskCount()
  {
    return $this->taskCount;
  }
  /** @param GoogleCloudRunV2TaskTemplate */
  public function setTemplate(GoogleCloudRunV2TaskTemplate $template)
  {
    $this->template = $template;
  }
  /** @return GoogleCloudRunV2TaskTemplate */
  public function getTemplate()
  {
    return $this->template;
  }
}

class GoogleCloudRunV2GRPCAction extends \Google\Model
{
  /** @var int */
  public $port;
  /** @var string */
  public $service;

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

class GoogleCloudRunV2HTTPGetAction extends \Google\Collection
{
  /** @var GoogleCloudRunV2HTTPHeader[] */
  public $httpHeaders;
  /** @var string */
  public $path;
  protected $collection_key = 'httpHeaders';
  protected $httpHeadersType = GoogleCloudRunV2HTTPHeader::class;
  protected $httpHeadersDataType = 'array';
  /** @param GoogleCloudRunV2HTTPHeader[] */
  public function setHttpHeaders($httpHeaders)
  {
    $this->httpHeaders = $httpHeaders;
  }
  /** @return GoogleCloudRunV2HTTPHeader[] */
  public function getHttpHeaders()
  {
    return $this->httpHeaders;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
}

class GoogleCloudRunV2HTTPHeader extends \Google\Model
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

class GoogleCloudRunV2Job extends \Google\Collection
{
  /** @var string[] */
  public $annotations;
  /** @var GoogleCloudRunV2BinaryAuthorization */
  public $binaryAuthorization;
  /** @var string */
  public $client;
  /** @var string */
  public $clientVersion;
  /** @var GoogleCloudRunV2Condition[] */
  public $conditions;
  /** @var string */
  public $createTime;
  /** @var string */
  public $creator;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $etag;
  /** @var int */
  public $executionCount;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $generation;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lastModifier;
  /** @var GoogleCloudRunV2ExecutionReference */
  public $latestCreatedExecution;
  /** @var string */
  public $launchStage;
  /** @var string */
  public $name;
  /** @var string */
  public $observedGeneration;
  /** @var bool */
  public $reconciling;
  /** @var GoogleCloudRunV2ExecutionTemplate */
  public $template;
  /** @var GoogleCloudRunV2Condition */
  public $terminalCondition;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'conditions';
  protected $binaryAuthorizationType = GoogleCloudRunV2BinaryAuthorization::class;
  protected $binaryAuthorizationDataType = '';
  protected $conditionsType = GoogleCloudRunV2Condition::class;
  protected $conditionsDataType = 'array';
  protected $latestCreatedExecutionType = GoogleCloudRunV2ExecutionReference::class;
  protected $latestCreatedExecutionDataType = '';
  protected $templateType = GoogleCloudRunV2ExecutionTemplate::class;
  protected $templateDataType = '';
  protected $terminalConditionType = GoogleCloudRunV2Condition::class;
  protected $terminalConditionDataType = '';
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
  /** @param GoogleCloudRunV2BinaryAuthorization */
  public function setBinaryAuthorization(GoogleCloudRunV2BinaryAuthorization $binaryAuthorization)
  {
    $this->binaryAuthorization = $binaryAuthorization;
  }
  /** @return GoogleCloudRunV2BinaryAuthorization */
  public function getBinaryAuthorization()
  {
    return $this->binaryAuthorization;
  }
  /** @param string */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /** @return string */
  public function getClient()
  {
    return $this->client;
  }
  /** @param string */
  public function setClientVersion($clientVersion)
  {
    $this->clientVersion = $clientVersion;
  }
  /** @return string */
  public function getClientVersion()
  {
    return $this->clientVersion;
  }
  /** @param GoogleCloudRunV2Condition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return GoogleCloudRunV2Condition[] */
  public function getConditions()
  {
    return $this->conditions;
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
  public function setCreator($creator)
  {
    $this->creator = $creator;
  }
  /** @return string */
  public function getCreator()
  {
    return $this->creator;
  }
  /** @param string */
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
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
  public function setExecutionCount($executionCount)
  {
    $this->executionCount = $executionCount;
  }
  /** @return int */
  public function getExecutionCount()
  {
    return $this->executionCount;
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
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /** @return string */
  public function getGeneration()
  {
    return $this->generation;
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
  public function setLastModifier($lastModifier)
  {
    $this->lastModifier = $lastModifier;
  }
  /** @return string */
  public function getLastModifier()
  {
    return $this->lastModifier;
  }
  /** @param GoogleCloudRunV2ExecutionReference */
  public function setLatestCreatedExecution(GoogleCloudRunV2ExecutionReference $latestCreatedExecution)
  {
    $this->latestCreatedExecution = $latestCreatedExecution;
  }
  /** @return GoogleCloudRunV2ExecutionReference */
  public function getLatestCreatedExecution()
  {
    return $this->latestCreatedExecution;
  }
  /** @param string */
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
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
  public function setObservedGeneration($observedGeneration)
  {
    $this->observedGeneration = $observedGeneration;
  }
  /** @return string */
  public function getObservedGeneration()
  {
    return $this->observedGeneration;
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
  /** @param GoogleCloudRunV2ExecutionTemplate */
  public function setTemplate(GoogleCloudRunV2ExecutionTemplate $template)
  {
    $this->template = $template;
  }
  /** @return GoogleCloudRunV2ExecutionTemplate */
  public function getTemplate()
  {
    return $this->template;
  }
  /** @param GoogleCloudRunV2Condition */
  public function setTerminalCondition(GoogleCloudRunV2Condition $terminalCondition)
  {
    $this->terminalCondition = $terminalCondition;
  }
  /** @return GoogleCloudRunV2Condition */
  public function getTerminalCondition()
  {
    return $this->terminalCondition;
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

class GoogleCloudRunV2ListExecutionsResponse extends \Google\Collection
{
  /** @var GoogleCloudRunV2Execution[] */
  public $executions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'executions';
  protected $executionsType = GoogleCloudRunV2Execution::class;
  protected $executionsDataType = 'array';
  /** @param GoogleCloudRunV2Execution[] */
  public function setExecutions($executions)
  {
    $this->executions = $executions;
  }
  /** @return GoogleCloudRunV2Execution[] */
  public function getExecutions()
  {
    return $this->executions;
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

class GoogleCloudRunV2ListJobsResponse extends \Google\Collection
{
  /** @var GoogleCloudRunV2Job[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
  protected $jobsType = GoogleCloudRunV2Job::class;
  protected $jobsDataType = 'array';
  /** @param GoogleCloudRunV2Job[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return GoogleCloudRunV2Job[] */
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

class GoogleCloudRunV2ListRevisionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRunV2Revision[] */
  public $revisions;
  protected $collection_key = 'revisions';
  protected $revisionsType = GoogleCloudRunV2Revision::class;
  protected $revisionsDataType = 'array';
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
  /** @param GoogleCloudRunV2Revision[] */
  public function setRevisions($revisions)
  {
    $this->revisions = $revisions;
  }
  /** @return GoogleCloudRunV2Revision[] */
  public function getRevisions()
  {
    return $this->revisions;
  }
}

class GoogleCloudRunV2ListServicesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRunV2Service[] */
  public $services;
  protected $collection_key = 'services';
  protected $servicesType = GoogleCloudRunV2Service::class;
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
  /** @param GoogleCloudRunV2Service[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return GoogleCloudRunV2Service[] */
  public function getServices()
  {
    return $this->services;
  }
}

class GoogleCloudRunV2ListTasksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRunV2Task[] */
  public $tasks;
  protected $collection_key = 'tasks';
  protected $tasksType = GoogleCloudRunV2Task::class;
  protected $tasksDataType = 'array';
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
  /** @param GoogleCloudRunV2Task[] */
  public function setTasks($tasks)
  {
    $this->tasks = $tasks;
  }
  /** @return GoogleCloudRunV2Task[] */
  public function getTasks()
  {
    return $this->tasks;
  }
}

class GoogleCloudRunV2Probe extends \Google\Model
{
  /** @var int */
  public $failureThreshold;
  /** @var GoogleCloudRunV2GRPCAction */
  public $grpc;
  /** @var GoogleCloudRunV2HTTPGetAction */
  public $httpGet;
  /** @var int */
  public $initialDelaySeconds;
  /** @var int */
  public $periodSeconds;
  /** @var GoogleCloudRunV2TCPSocketAction */
  public $tcpSocket;
  /** @var int */
  public $timeoutSeconds;
  protected $grpcType = GoogleCloudRunV2GRPCAction::class;
  protected $grpcDataType = '';
  protected $httpGetType = GoogleCloudRunV2HTTPGetAction::class;
  protected $httpGetDataType = '';
  protected $tcpSocketType = GoogleCloudRunV2TCPSocketAction::class;
  protected $tcpSocketDataType = '';
  /** @param int */
  public function setFailureThreshold($failureThreshold)
  {
    $this->failureThreshold = $failureThreshold;
  }
  /** @return int */
  public function getFailureThreshold()
  {
    return $this->failureThreshold;
  }
  /** @param GoogleCloudRunV2GRPCAction */
  public function setGrpc(GoogleCloudRunV2GRPCAction $grpc)
  {
    $this->grpc = $grpc;
  }
  /** @return GoogleCloudRunV2GRPCAction */
  public function getGrpc()
  {
    return $this->grpc;
  }
  /** @param GoogleCloudRunV2HTTPGetAction */
  public function setHttpGet(GoogleCloudRunV2HTTPGetAction $httpGet)
  {
    $this->httpGet = $httpGet;
  }
  /** @return GoogleCloudRunV2HTTPGetAction */
  public function getHttpGet()
  {
    return $this->httpGet;
  }
  /** @param int */
  public function setInitialDelaySeconds($initialDelaySeconds)
  {
    $this->initialDelaySeconds = $initialDelaySeconds;
  }
  /** @return int */
  public function getInitialDelaySeconds()
  {
    return $this->initialDelaySeconds;
  }
  /** @param int */
  public function setPeriodSeconds($periodSeconds)
  {
    $this->periodSeconds = $periodSeconds;
  }
  /** @return int */
  public function getPeriodSeconds()
  {
    return $this->periodSeconds;
  }
  /** @param GoogleCloudRunV2TCPSocketAction */
  public function setTcpSocket(GoogleCloudRunV2TCPSocketAction $tcpSocket)
  {
    $this->tcpSocket = $tcpSocket;
  }
  /** @return GoogleCloudRunV2TCPSocketAction */
  public function getTcpSocket()
  {
    return $this->tcpSocket;
  }
  /** @param int */
  public function setTimeoutSeconds($timeoutSeconds)
  {
    $this->timeoutSeconds = $timeoutSeconds;
  }
  /** @return int */
  public function getTimeoutSeconds()
  {
    return $this->timeoutSeconds;
  }
}

class GoogleCloudRunV2ResourceRequirements extends \Google\Model
{
  /** @var bool */
  public $cpuIdle;
  /** @var string[] */
  public $limits;

  /** @param bool */
  public function setCpuIdle($cpuIdle)
  {
    $this->cpuIdle = $cpuIdle;
  }
  /** @return bool */
  public function getCpuIdle()
  {
    return $this->cpuIdle;
  }
  /** @param string[] */
  public function setLimits($limits)
  {
    $this->limits = $limits;
  }
  /** @return string[] */
  public function getLimits()
  {
    return $this->limits;
  }
}

class GoogleCloudRunV2Revision extends \Google\Collection
{
  /** @var string[] */
  public $annotations;
  /** @var GoogleCloudRunV2Condition[] */
  public $conditions;
  /** @var GoogleCloudRunV2Container[] */
  public $containers;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $encryptionKey;
  /** @var string */
  public $etag;
  /** @var string */
  public $executionEnvironment;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $generation;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $launchStage;
  /** @var string */
  public $logUri;
  /** @var int */
  public $maxInstanceRequestConcurrency;
  /** @var string */
  public $name;
  /** @var string */
  public $observedGeneration;
  /** @var bool */
  public $reconciling;
  /** @var GoogleCloudRunV2RevisionScaling */
  public $scaling;
  /** @var string */
  public $service;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $timeout;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  /** @var GoogleCloudRunV2Volume[] */
  public $volumes;
  /** @var GoogleCloudRunV2VpcAccess */
  public $vpcAccess;
  protected $collection_key = 'volumes';
  protected $conditionsType = GoogleCloudRunV2Condition::class;
  protected $conditionsDataType = 'array';
  protected $containersType = GoogleCloudRunV2Container::class;
  protected $containersDataType = 'array';
  protected $scalingType = GoogleCloudRunV2RevisionScaling::class;
  protected $scalingDataType = '';
  protected $volumesType = GoogleCloudRunV2Volume::class;
  protected $volumesDataType = 'array';
  protected $vpcAccessType = GoogleCloudRunV2VpcAccess::class;
  protected $vpcAccessDataType = '';
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
  /** @param GoogleCloudRunV2Condition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return GoogleCloudRunV2Condition[] */
  public function getConditions()
  {
    return $this->conditions;
  }
  /** @param GoogleCloudRunV2Container[] */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /** @return GoogleCloudRunV2Container[] */
  public function getContainers()
  {
    return $this->containers;
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
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
  }
  /** @param string */
  public function setEncryptionKey($encryptionKey)
  {
    $this->encryptionKey = $encryptionKey;
  }
  /** @return string */
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
  /** @param string */
  public function setExecutionEnvironment($executionEnvironment)
  {
    $this->executionEnvironment = $executionEnvironment;
  }
  /** @return string */
  public function getExecutionEnvironment()
  {
    return $this->executionEnvironment;
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
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /** @return string */
  public function getGeneration()
  {
    return $this->generation;
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
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
  }
  /** @param string */
  public function setLogUri($logUri)
  {
    $this->logUri = $logUri;
  }
  /** @return string */
  public function getLogUri()
  {
    return $this->logUri;
  }
  /** @param int */
  public function setMaxInstanceRequestConcurrency($maxInstanceRequestConcurrency)
  {
    $this->maxInstanceRequestConcurrency = $maxInstanceRequestConcurrency;
  }
  /** @return int */
  public function getMaxInstanceRequestConcurrency()
  {
    return $this->maxInstanceRequestConcurrency;
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
  public function setObservedGeneration($observedGeneration)
  {
    $this->observedGeneration = $observedGeneration;
  }
  /** @return string */
  public function getObservedGeneration()
  {
    return $this->observedGeneration;
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
  /** @param GoogleCloudRunV2RevisionScaling */
  public function setScaling(GoogleCloudRunV2RevisionScaling $scaling)
  {
    $this->scaling = $scaling;
  }
  /** @return GoogleCloudRunV2RevisionScaling */
  public function getScaling()
  {
    return $this->scaling;
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
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
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
  /** @param GoogleCloudRunV2Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return GoogleCloudRunV2Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
  /** @param GoogleCloudRunV2VpcAccess */
  public function setVpcAccess(GoogleCloudRunV2VpcAccess $vpcAccess)
  {
    $this->vpcAccess = $vpcAccess;
  }
  /** @return GoogleCloudRunV2VpcAccess */
  public function getVpcAccess()
  {
    return $this->vpcAccess;
  }
}

class GoogleCloudRunV2RevisionScaling extends \Google\Model
{
  /** @var int */
  public $maxInstanceCount;
  /** @var int */
  public $minInstanceCount;

  /** @param int */
  public function setMaxInstanceCount($maxInstanceCount)
  {
    $this->maxInstanceCount = $maxInstanceCount;
  }
  /** @return int */
  public function getMaxInstanceCount()
  {
    return $this->maxInstanceCount;
  }
  /** @param int */
  public function setMinInstanceCount($minInstanceCount)
  {
    $this->minInstanceCount = $minInstanceCount;
  }
  /** @return int */
  public function getMinInstanceCount()
  {
    return $this->minInstanceCount;
  }
}

class GoogleCloudRunV2RevisionTemplate extends \Google\Collection
{
  /** @var string[] */
  public $annotations;
  /** @var GoogleCloudRunV2Container[] */
  public $containers;
  /** @var string */
  public $encryptionKey;
  /** @var string */
  public $executionEnvironment;
  /** @var string[] */
  public $labels;
  /** @var int */
  public $maxInstanceRequestConcurrency;
  /** @var string */
  public $revision;
  /** @var GoogleCloudRunV2RevisionScaling */
  public $scaling;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $timeout;
  /** @var GoogleCloudRunV2Volume[] */
  public $volumes;
  /** @var GoogleCloudRunV2VpcAccess */
  public $vpcAccess;
  protected $collection_key = 'volumes';
  protected $containersType = GoogleCloudRunV2Container::class;
  protected $containersDataType = 'array';
  protected $scalingType = GoogleCloudRunV2RevisionScaling::class;
  protected $scalingDataType = '';
  protected $volumesType = GoogleCloudRunV2Volume::class;
  protected $volumesDataType = 'array';
  protected $vpcAccessType = GoogleCloudRunV2VpcAccess::class;
  protected $vpcAccessDataType = '';
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
  /** @param GoogleCloudRunV2Container[] */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /** @return GoogleCloudRunV2Container[] */
  public function getContainers()
  {
    return $this->containers;
  }
  /** @param string */
  public function setEncryptionKey($encryptionKey)
  {
    $this->encryptionKey = $encryptionKey;
  }
  /** @return string */
  public function getEncryptionKey()
  {
    return $this->encryptionKey;
  }
  /** @param string */
  public function setExecutionEnvironment($executionEnvironment)
  {
    $this->executionEnvironment = $executionEnvironment;
  }
  /** @return string */
  public function getExecutionEnvironment()
  {
    return $this->executionEnvironment;
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
  /** @param int */
  public function setMaxInstanceRequestConcurrency($maxInstanceRequestConcurrency)
  {
    $this->maxInstanceRequestConcurrency = $maxInstanceRequestConcurrency;
  }
  /** @return int */
  public function getMaxInstanceRequestConcurrency()
  {
    return $this->maxInstanceRequestConcurrency;
  }
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
  /** @param GoogleCloudRunV2RevisionScaling */
  public function setScaling(GoogleCloudRunV2RevisionScaling $scaling)
  {
    $this->scaling = $scaling;
  }
  /** @return GoogleCloudRunV2RevisionScaling */
  public function getScaling()
  {
    return $this->scaling;
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
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
  }
  /** @param GoogleCloudRunV2Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return GoogleCloudRunV2Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
  /** @param GoogleCloudRunV2VpcAccess */
  public function setVpcAccess(GoogleCloudRunV2VpcAccess $vpcAccess)
  {
    $this->vpcAccess = $vpcAccess;
  }
  /** @return GoogleCloudRunV2VpcAccess */
  public function getVpcAccess()
  {
    return $this->vpcAccess;
  }
}

class GoogleCloudRunV2RunJobRequest extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var bool */
  public $validateOnly;

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

class GoogleCloudRunV2SecretKeySelector extends \Google\Model
{
  /** @var string */
  public $secret;
  /** @var string */
  public $version;

  /** @param string */
  public function setSecret($secret)
  {
    $this->secret = $secret;
  }
  /** @return string */
  public function getSecret()
  {
    return $this->secret;
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

class GoogleCloudRunV2SecretVolumeSource extends \Google\Collection
{
  /** @var int */
  public $defaultMode;
  /** @var GoogleCloudRunV2VersionToPath[] */
  public $items;
  /** @var string */
  public $secret;
  protected $collection_key = 'items';
  protected $itemsType = GoogleCloudRunV2VersionToPath::class;
  protected $itemsDataType = 'array';
  /** @param int */
  public function setDefaultMode($defaultMode)
  {
    $this->defaultMode = $defaultMode;
  }
  /** @return int */
  public function getDefaultMode()
  {
    return $this->defaultMode;
  }
  /** @param GoogleCloudRunV2VersionToPath[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GoogleCloudRunV2VersionToPath[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setSecret($secret)
  {
    $this->secret = $secret;
  }
  /** @return string */
  public function getSecret()
  {
    return $this->secret;
  }
}

class GoogleCloudRunV2Service extends \Google\Collection
{
  /** @var string[] */
  public $annotations;
  /** @var GoogleCloudRunV2BinaryAuthorization */
  public $binaryAuthorization;
  /** @var string */
  public $client;
  /** @var string */
  public $clientVersion;
  /** @var GoogleCloudRunV2Condition[] */
  public $conditions;
  /** @var string */
  public $createTime;
  /** @var string */
  public $creator;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $generation;
  /** @var string */
  public $ingress;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lastModifier;
  /** @var string */
  public $latestCreatedRevision;
  /** @var string */
  public $latestReadyRevision;
  /** @var string */
  public $launchStage;
  /** @var string */
  public $name;
  /** @var string */
  public $observedGeneration;
  /** @var bool */
  public $reconciling;
  /** @var GoogleCloudRunV2RevisionTemplate */
  public $template;
  /** @var GoogleCloudRunV2Condition */
  public $terminalCondition;
  /** @var GoogleCloudRunV2TrafficTarget[] */
  public $traffic;
  /** @var GoogleCloudRunV2TrafficTargetStatus[] */
  public $trafficStatuses;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $uri;
  protected $collection_key = 'trafficStatuses';
  protected $binaryAuthorizationType = GoogleCloudRunV2BinaryAuthorization::class;
  protected $binaryAuthorizationDataType = '';
  protected $conditionsType = GoogleCloudRunV2Condition::class;
  protected $conditionsDataType = 'array';
  protected $templateType = GoogleCloudRunV2RevisionTemplate::class;
  protected $templateDataType = '';
  protected $terminalConditionType = GoogleCloudRunV2Condition::class;
  protected $terminalConditionDataType = '';
  protected $trafficType = GoogleCloudRunV2TrafficTarget::class;
  protected $trafficDataType = 'array';
  protected $trafficStatusesType = GoogleCloudRunV2TrafficTargetStatus::class;
  protected $trafficStatusesDataType = 'array';
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
  /** @param GoogleCloudRunV2BinaryAuthorization */
  public function setBinaryAuthorization(GoogleCloudRunV2BinaryAuthorization $binaryAuthorization)
  {
    $this->binaryAuthorization = $binaryAuthorization;
  }
  /** @return GoogleCloudRunV2BinaryAuthorization */
  public function getBinaryAuthorization()
  {
    return $this->binaryAuthorization;
  }
  /** @param string */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /** @return string */
  public function getClient()
  {
    return $this->client;
  }
  /** @param string */
  public function setClientVersion($clientVersion)
  {
    $this->clientVersion = $clientVersion;
  }
  /** @return string */
  public function getClientVersion()
  {
    return $this->clientVersion;
  }
  /** @param GoogleCloudRunV2Condition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return GoogleCloudRunV2Condition[] */
  public function getConditions()
  {
    return $this->conditions;
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
  public function setCreator($creator)
  {
    $this->creator = $creator;
  }
  /** @return string */
  public function getCreator()
  {
    return $this->creator;
  }
  /** @param string */
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
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
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /** @return string */
  public function getGeneration()
  {
    return $this->generation;
  }
  /** @param string */
  public function setIngress($ingress)
  {
    $this->ingress = $ingress;
  }
  /** @return string */
  public function getIngress()
  {
    return $this->ingress;
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
  public function setLastModifier($lastModifier)
  {
    $this->lastModifier = $lastModifier;
  }
  /** @return string */
  public function getLastModifier()
  {
    return $this->lastModifier;
  }
  /** @param string */
  public function setLatestCreatedRevision($latestCreatedRevision)
  {
    $this->latestCreatedRevision = $latestCreatedRevision;
  }
  /** @return string */
  public function getLatestCreatedRevision()
  {
    return $this->latestCreatedRevision;
  }
  /** @param string */
  public function setLatestReadyRevision($latestReadyRevision)
  {
    $this->latestReadyRevision = $latestReadyRevision;
  }
  /** @return string */
  public function getLatestReadyRevision()
  {
    return $this->latestReadyRevision;
  }
  /** @param string */
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
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
  public function setObservedGeneration($observedGeneration)
  {
    $this->observedGeneration = $observedGeneration;
  }
  /** @return string */
  public function getObservedGeneration()
  {
    return $this->observedGeneration;
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
  /** @param GoogleCloudRunV2RevisionTemplate */
  public function setTemplate(GoogleCloudRunV2RevisionTemplate $template)
  {
    $this->template = $template;
  }
  /** @return GoogleCloudRunV2RevisionTemplate */
  public function getTemplate()
  {
    return $this->template;
  }
  /** @param GoogleCloudRunV2Condition */
  public function setTerminalCondition(GoogleCloudRunV2Condition $terminalCondition)
  {
    $this->terminalCondition = $terminalCondition;
  }
  /** @return GoogleCloudRunV2Condition */
  public function getTerminalCondition()
  {
    return $this->terminalCondition;
  }
  /** @param GoogleCloudRunV2TrafficTarget[] */
  public function setTraffic($traffic)
  {
    $this->traffic = $traffic;
  }
  /** @return GoogleCloudRunV2TrafficTarget[] */
  public function getTraffic()
  {
    return $this->traffic;
  }
  /** @param GoogleCloudRunV2TrafficTargetStatus[] */
  public function setTrafficStatuses($trafficStatuses)
  {
    $this->trafficStatuses = $trafficStatuses;
  }
  /** @return GoogleCloudRunV2TrafficTargetStatus[] */
  public function getTrafficStatuses()
  {
    return $this->trafficStatuses;
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

class GoogleCloudRunV2TCPSocketAction extends \Google\Model
{
  /** @var int */
  public $port;

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
}

class GoogleCloudRunV2Task extends \Google\Collection
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $completionTime;
  /** @var GoogleCloudRunV2Condition[] */
  public $conditions;
  /** @var GoogleCloudRunV2Container[] */
  public $containers;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $encryptionKey;
  /** @var string */
  public $etag;
  /** @var string */
  public $execution;
  /** @var string */
  public $executionEnvironment;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $generation;
  /** @var int */
  public $index;
  /** @var string */
  public $job;
  /** @var string[] */
  public $labels;
  /** @var GoogleCloudRunV2TaskAttemptResult */
  public $lastAttemptResult;
  /** @var int */
  public $maxRetries;
  /** @var string */
  public $name;
  /** @var string */
  public $observedGeneration;
  /** @var bool */
  public $reconciling;
  /** @var int */
  public $retried;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $startTime;
  /** @var string */
  public $timeout;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  /** @var GoogleCloudRunV2Volume[] */
  public $volumes;
  /** @var GoogleCloudRunV2VpcAccess */
  public $vpcAccess;
  protected $collection_key = 'volumes';
  protected $conditionsType = GoogleCloudRunV2Condition::class;
  protected $conditionsDataType = 'array';
  protected $containersType = GoogleCloudRunV2Container::class;
  protected $containersDataType = 'array';
  protected $lastAttemptResultType = GoogleCloudRunV2TaskAttemptResult::class;
  protected $lastAttemptResultDataType = '';
  protected $volumesType = GoogleCloudRunV2Volume::class;
  protected $volumesDataType = 'array';
  protected $vpcAccessType = GoogleCloudRunV2VpcAccess::class;
  protected $vpcAccessDataType = '';
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
  public function setCompletionTime($completionTime)
  {
    $this->completionTime = $completionTime;
  }
  /** @return string */
  public function getCompletionTime()
  {
    return $this->completionTime;
  }
  /** @param GoogleCloudRunV2Condition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return GoogleCloudRunV2Condition[] */
  public function getConditions()
  {
    return $this->conditions;
  }
  /** @param GoogleCloudRunV2Container[] */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /** @return GoogleCloudRunV2Container[] */
  public function getContainers()
  {
    return $this->containers;
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
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
  }
  /** @param string */
  public function setEncryptionKey($encryptionKey)
  {
    $this->encryptionKey = $encryptionKey;
  }
  /** @return string */
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
  /** @param string */
  public function setExecution($execution)
  {
    $this->execution = $execution;
  }
  /** @return string */
  public function getExecution()
  {
    return $this->execution;
  }
  /** @param string */
  public function setExecutionEnvironment($executionEnvironment)
  {
    $this->executionEnvironment = $executionEnvironment;
  }
  /** @return string */
  public function getExecutionEnvironment()
  {
    return $this->executionEnvironment;
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
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /** @return string */
  public function getGeneration()
  {
    return $this->generation;
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
  public function setJob($job)
  {
    $this->job = $job;
  }
  /** @return string */
  public function getJob()
  {
    return $this->job;
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
  /** @param GoogleCloudRunV2TaskAttemptResult */
  public function setLastAttemptResult(GoogleCloudRunV2TaskAttemptResult $lastAttemptResult)
  {
    $this->lastAttemptResult = $lastAttemptResult;
  }
  /** @return GoogleCloudRunV2TaskAttemptResult */
  public function getLastAttemptResult()
  {
    return $this->lastAttemptResult;
  }
  /** @param int */
  public function setMaxRetries($maxRetries)
  {
    $this->maxRetries = $maxRetries;
  }
  /** @return int */
  public function getMaxRetries()
  {
    return $this->maxRetries;
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
  public function setObservedGeneration($observedGeneration)
  {
    $this->observedGeneration = $observedGeneration;
  }
  /** @return string */
  public function getObservedGeneration()
  {
    return $this->observedGeneration;
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
  /** @param int */
  public function setRetried($retried)
  {
    $this->retried = $retried;
  }
  /** @return int */
  public function getRetried()
  {
    return $this->retried;
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
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
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
  /** @param GoogleCloudRunV2Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return GoogleCloudRunV2Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
  /** @param GoogleCloudRunV2VpcAccess */
  public function setVpcAccess(GoogleCloudRunV2VpcAccess $vpcAccess)
  {
    $this->vpcAccess = $vpcAccess;
  }
  /** @return GoogleCloudRunV2VpcAccess */
  public function getVpcAccess()
  {
    return $this->vpcAccess;
  }
}

class GoogleCloudRunV2TaskAttemptResult extends \Google\Model
{
  /** @var int */
  public $exitCode;
  /** @var GoogleRpcStatus */
  public $status;
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param int */
  public function setExitCode($exitCode)
  {
    $this->exitCode = $exitCode;
  }
  /** @return int */
  public function getExitCode()
  {
    return $this->exitCode;
  }
  /** @param GoogleRpcStatus */
  public function setStatus(GoogleRpcStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleRpcStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class GoogleCloudRunV2TaskTemplate extends \Google\Collection
{
  /** @var GoogleCloudRunV2Container[] */
  public $containers;
  /** @var string */
  public $encryptionKey;
  /** @var string */
  public $executionEnvironment;
  /** @var int */
  public $maxRetries;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $timeout;
  /** @var GoogleCloudRunV2Volume[] */
  public $volumes;
  /** @var GoogleCloudRunV2VpcAccess */
  public $vpcAccess;
  protected $collection_key = 'volumes';
  protected $containersType = GoogleCloudRunV2Container::class;
  protected $containersDataType = 'array';
  protected $volumesType = GoogleCloudRunV2Volume::class;
  protected $volumesDataType = 'array';
  protected $vpcAccessType = GoogleCloudRunV2VpcAccess::class;
  protected $vpcAccessDataType = '';
  /** @param GoogleCloudRunV2Container[] */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /** @return GoogleCloudRunV2Container[] */
  public function getContainers()
  {
    return $this->containers;
  }
  /** @param string */
  public function setEncryptionKey($encryptionKey)
  {
    $this->encryptionKey = $encryptionKey;
  }
  /** @return string */
  public function getEncryptionKey()
  {
    return $this->encryptionKey;
  }
  /** @param string */
  public function setExecutionEnvironment($executionEnvironment)
  {
    $this->executionEnvironment = $executionEnvironment;
  }
  /** @return string */
  public function getExecutionEnvironment()
  {
    return $this->executionEnvironment;
  }
  /** @param int */
  public function setMaxRetries($maxRetries)
  {
    $this->maxRetries = $maxRetries;
  }
  /** @return int */
  public function getMaxRetries()
  {
    return $this->maxRetries;
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
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
  }
  /** @param GoogleCloudRunV2Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return GoogleCloudRunV2Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
  /** @param GoogleCloudRunV2VpcAccess */
  public function setVpcAccess(GoogleCloudRunV2VpcAccess $vpcAccess)
  {
    $this->vpcAccess = $vpcAccess;
  }
  /** @return GoogleCloudRunV2VpcAccess */
  public function getVpcAccess()
  {
    return $this->vpcAccess;
  }
}

class GoogleCloudRunV2TrafficTarget extends \Google\Model
{
  /** @var int */
  public $percent;
  /** @var string */
  public $revision;
  /** @var string */
  public $tag;
  /** @var string */
  public $type;

  /** @param int */
  public function setPercent($percent)
  {
    $this->percent = $percent;
  }
  /** @return int */
  public function getPercent()
  {
    return $this->percent;
  }
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
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return string */
  public function getTag()
  {
    return $this->tag;
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

class GoogleCloudRunV2TrafficTargetStatus extends \Google\Model
{
  /** @var int */
  public $percent;
  /** @var string */
  public $revision;
  /** @var string */
  public $tag;
  /** @var string */
  public $type;
  /** @var string */
  public $uri;

  /** @param int */
  public function setPercent($percent)
  {
    $this->percent = $percent;
  }
  /** @return int */
  public function getPercent()
  {
    return $this->percent;
  }
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
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return string */
  public function getTag()
  {
    return $this->tag;
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

class GoogleCloudRunV2VersionToPath extends \Google\Model
{
  /** @var int */
  public $mode;
  /** @var string */
  public $path;
  /** @var string */
  public $version;

  /** @param int */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return int */
  public function getMode()
  {
    return $this->mode;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
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

class GoogleCloudRunV2Volume extends \Google\Model
{
  /** @var GoogleCloudRunV2CloudSqlInstance */
  public $cloudSqlInstance;
  /** @var string */
  public $name;
  /** @var GoogleCloudRunV2SecretVolumeSource */
  public $secret;
  protected $cloudSqlInstanceType = GoogleCloudRunV2CloudSqlInstance::class;
  protected $cloudSqlInstanceDataType = '';
  protected $secretType = GoogleCloudRunV2SecretVolumeSource::class;
  protected $secretDataType = '';
  /** @param GoogleCloudRunV2CloudSqlInstance */
  public function setCloudSqlInstance(GoogleCloudRunV2CloudSqlInstance $cloudSqlInstance)
  {
    $this->cloudSqlInstance = $cloudSqlInstance;
  }
  /** @return GoogleCloudRunV2CloudSqlInstance */
  public function getCloudSqlInstance()
  {
    return $this->cloudSqlInstance;
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
  /** @param GoogleCloudRunV2SecretVolumeSource */
  public function setSecret(GoogleCloudRunV2SecretVolumeSource $secret)
  {
    $this->secret = $secret;
  }
  /** @return GoogleCloudRunV2SecretVolumeSource */
  public function getSecret()
  {
    return $this->secret;
  }
}

class GoogleCloudRunV2VolumeMount extends \Google\Model
{
  /** @var string */
  public $mountPath;
  /** @var string */
  public $name;

  /** @param string */
  public function setMountPath($mountPath)
  {
    $this->mountPath = $mountPath;
  }
  /** @return string */
  public function getMountPath()
  {
    return $this->mountPath;
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

class GoogleCloudRunV2VpcAccess extends \Google\Model
{
  /** @var string */
  public $connector;
  /** @var string */
  public $egress;

  /** @param string */
  public function setConnector($connector)
  {
    $this->connector = $connector;
  }
  /** @return string */
  public function getConnector()
  {
    return $this->connector;
  }
  /** @param string */
  public function setEgress($egress)
  {
    $this->egress = $egress;
  }
  /** @return string */
  public function getEgress()
  {
    return $this->egress;
  }
}

class GoogleIamV1AuditConfig extends \Google\Collection
{
  /** @var GoogleIamV1AuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = GoogleIamV1AuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param GoogleIamV1AuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return GoogleIamV1AuditLogConfig[] */
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

class GoogleIamV1AuditLogConfig extends \Google\Collection
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

class GoogleIamV1Binding extends \Google\Collection
{
  /** @var GoogleTypeExpr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = GoogleTypeExpr::class;
  protected $conditionDataType = '';
  /** @param GoogleTypeExpr */
  public function setCondition(GoogleTypeExpr $condition)
  {
    $this->condition = $condition;
  }
  /** @return GoogleTypeExpr */
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

class GoogleIamV1Policy extends \Google\Collection
{
  /** @var GoogleIamV1AuditConfig[] */
  public $auditConfigs;
  /** @var GoogleIamV1Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = GoogleIamV1AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = GoogleIamV1Binding::class;
  protected $bindingsDataType = 'array';
  /** @param GoogleIamV1AuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return GoogleIamV1AuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
  /** @param GoogleIamV1Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return GoogleIamV1Binding[] */
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

class GoogleIamV1SetIamPolicyRequest extends \Google\Model
{
  /** @var GoogleIamV1Policy */
  public $policy;
  /** @var string */
  public $updateMask;
  protected $policyType = GoogleIamV1Policy::class;
  protected $policyDataType = '';
  /** @param GoogleIamV1Policy */
  public function setPolicy(GoogleIamV1Policy $policy)
  {
    $this->policy = $policy;
  }
  /** @return GoogleIamV1Policy */
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

class GoogleIamV1TestIamPermissionsRequest extends \Google\Collection
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

class GoogleIamV1TestIamPermissionsResponse extends \Google\Collection
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

class GoogleProtobufEmpty extends \Google\Model
{
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

class GoogleTypeExpr extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2BinaryAuthorization::class, 'Google_Service_CloudRun_GoogleCloudRunV2BinaryAuthorization');
class_alias(GoogleCloudRunV2CloudSqlInstance::class, 'Google_Service_CloudRun_GoogleCloudRunV2CloudSqlInstance');
class_alias(GoogleCloudRunV2Condition::class, 'Google_Service_CloudRun_GoogleCloudRunV2Condition');
class_alias(GoogleCloudRunV2Container::class, 'Google_Service_CloudRun_GoogleCloudRunV2Container');
class_alias(GoogleCloudRunV2ContainerPort::class, 'Google_Service_CloudRun_GoogleCloudRunV2ContainerPort');
class_alias(GoogleCloudRunV2EnvVar::class, 'Google_Service_CloudRun_GoogleCloudRunV2EnvVar');
class_alias(GoogleCloudRunV2EnvVarSource::class, 'Google_Service_CloudRun_GoogleCloudRunV2EnvVarSource');
class_alias(GoogleCloudRunV2Execution::class, 'Google_Service_CloudRun_GoogleCloudRunV2Execution');
class_alias(GoogleCloudRunV2ExecutionReference::class, 'Google_Service_CloudRun_GoogleCloudRunV2ExecutionReference');
class_alias(GoogleCloudRunV2ExecutionTemplate::class, 'Google_Service_CloudRun_GoogleCloudRunV2ExecutionTemplate');
class_alias(GoogleCloudRunV2GRPCAction::class, 'Google_Service_CloudRun_GoogleCloudRunV2GRPCAction');
class_alias(GoogleCloudRunV2HTTPGetAction::class, 'Google_Service_CloudRun_GoogleCloudRunV2HTTPGetAction');
class_alias(GoogleCloudRunV2HTTPHeader::class, 'Google_Service_CloudRun_GoogleCloudRunV2HTTPHeader');
class_alias(GoogleCloudRunV2Job::class, 'Google_Service_CloudRun_GoogleCloudRunV2Job');
class_alias(GoogleCloudRunV2ListExecutionsResponse::class, 'Google_Service_CloudRun_GoogleCloudRunV2ListExecutionsResponse');
class_alias(GoogleCloudRunV2ListJobsResponse::class, 'Google_Service_CloudRun_GoogleCloudRunV2ListJobsResponse');
class_alias(GoogleCloudRunV2ListRevisionsResponse::class, 'Google_Service_CloudRun_GoogleCloudRunV2ListRevisionsResponse');
class_alias(GoogleCloudRunV2ListServicesResponse::class, 'Google_Service_CloudRun_GoogleCloudRunV2ListServicesResponse');
class_alias(GoogleCloudRunV2ListTasksResponse::class, 'Google_Service_CloudRun_GoogleCloudRunV2ListTasksResponse');
class_alias(GoogleCloudRunV2Probe::class, 'Google_Service_CloudRun_GoogleCloudRunV2Probe');
class_alias(GoogleCloudRunV2ResourceRequirements::class, 'Google_Service_CloudRun_GoogleCloudRunV2ResourceRequirements');
class_alias(GoogleCloudRunV2Revision::class, 'Google_Service_CloudRun_GoogleCloudRunV2Revision');
class_alias(GoogleCloudRunV2RevisionScaling::class, 'Google_Service_CloudRun_GoogleCloudRunV2RevisionScaling');
class_alias(GoogleCloudRunV2RevisionTemplate::class, 'Google_Service_CloudRun_GoogleCloudRunV2RevisionTemplate');
class_alias(GoogleCloudRunV2RunJobRequest::class, 'Google_Service_CloudRun_GoogleCloudRunV2RunJobRequest');
class_alias(GoogleCloudRunV2SecretKeySelector::class, 'Google_Service_CloudRun_GoogleCloudRunV2SecretKeySelector');
class_alias(GoogleCloudRunV2SecretVolumeSource::class, 'Google_Service_CloudRun_GoogleCloudRunV2SecretVolumeSource');
class_alias(GoogleCloudRunV2Service::class, 'Google_Service_CloudRun_GoogleCloudRunV2Service');
class_alias(GoogleCloudRunV2TCPSocketAction::class, 'Google_Service_CloudRun_GoogleCloudRunV2TCPSocketAction');
class_alias(GoogleCloudRunV2Task::class, 'Google_Service_CloudRun_GoogleCloudRunV2Task');
class_alias(GoogleCloudRunV2TaskAttemptResult::class, 'Google_Service_CloudRun_GoogleCloudRunV2TaskAttemptResult');
class_alias(GoogleCloudRunV2TaskTemplate::class, 'Google_Service_CloudRun_GoogleCloudRunV2TaskTemplate');
class_alias(GoogleCloudRunV2TrafficTarget::class, 'Google_Service_CloudRun_GoogleCloudRunV2TrafficTarget');
class_alias(GoogleCloudRunV2TrafficTargetStatus::class, 'Google_Service_CloudRun_GoogleCloudRunV2TrafficTargetStatus');
class_alias(GoogleCloudRunV2VersionToPath::class, 'Google_Service_CloudRun_GoogleCloudRunV2VersionToPath');
class_alias(GoogleCloudRunV2Volume::class, 'Google_Service_CloudRun_GoogleCloudRunV2Volume');
class_alias(GoogleCloudRunV2VolumeMount::class, 'Google_Service_CloudRun_GoogleCloudRunV2VolumeMount');
class_alias(GoogleCloudRunV2VpcAccess::class, 'Google_Service_CloudRun_GoogleCloudRunV2VpcAccess');
class_alias(GoogleIamV1AuditConfig::class, 'Google_Service_CloudRun_GoogleIamV1AuditConfig');
class_alias(GoogleIamV1AuditLogConfig::class, 'Google_Service_CloudRun_GoogleIamV1AuditLogConfig');
class_alias(GoogleIamV1Binding::class, 'Google_Service_CloudRun_GoogleIamV1Binding');
class_alias(GoogleIamV1Policy::class, 'Google_Service_CloudRun_GoogleIamV1Policy');
class_alias(GoogleIamV1SetIamPolicyRequest::class, 'Google_Service_CloudRun_GoogleIamV1SetIamPolicyRequest');
class_alias(GoogleIamV1TestIamPermissionsRequest::class, 'Google_Service_CloudRun_GoogleIamV1TestIamPermissionsRequest');
class_alias(GoogleIamV1TestIamPermissionsResponse::class, 'Google_Service_CloudRun_GoogleIamV1TestIamPermissionsResponse');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_CloudRun_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_CloudRun_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_CloudRun_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_CloudRun_GoogleRpcStatus');
class_alias(GoogleTypeExpr::class, 'Google_Service_CloudRun_GoogleTypeExpr');
