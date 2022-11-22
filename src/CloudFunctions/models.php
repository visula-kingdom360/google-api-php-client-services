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

namespace Google\Service\CloudFunctions;

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

class BuildConfig extends \Google\Model
{
  /** @var string */
  public $build;
  /** @var string */
  public $buildpackStack;
  /** @var string */
  public $dockerRegistry;
  /** @var string */
  public $dockerRepository;
  /** @var string */
  public $entryPoint;
  /** @var string[] */
  public $environmentVariables;
  /** @var string */
  public $runtime;
  /** @var Source */
  public $source;
  /** @var SourceProvenance */
  public $sourceProvenance;
  /** @var string */
  public $workerPool;
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  protected $sourceProvenanceType = SourceProvenance::class;
  protected $sourceProvenanceDataType = '';
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
  public function setBuildpackStack($buildpackStack)
  {
    $this->buildpackStack = $buildpackStack;
  }
  /** @return string */
  public function getBuildpackStack()
  {
    return $this->buildpackStack;
  }
  /** @param string */
  public function setDockerRegistry($dockerRegistry)
  {
    $this->dockerRegistry = $dockerRegistry;
  }
  /** @return string */
  public function getDockerRegistry()
  {
    return $this->dockerRegistry;
  }
  /** @param string */
  public function setDockerRepository($dockerRepository)
  {
    $this->dockerRepository = $dockerRepository;
  }
  /** @return string */
  public function getDockerRepository()
  {
    return $this->dockerRepository;
  }
  /** @param string */
  public function setEntryPoint($entryPoint)
  {
    $this->entryPoint = $entryPoint;
  }
  /** @return string */
  public function getEntryPoint()
  {
    return $this->entryPoint;
  }
  /** @param string[] */
  public function setEnvironmentVariables($environmentVariables)
  {
    $this->environmentVariables = $environmentVariables;
  }
  /** @return string[] */
  public function getEnvironmentVariables()
  {
    return $this->environmentVariables;
  }
  /** @param string */
  public function setRuntime($runtime)
  {
    $this->runtime = $runtime;
  }
  /** @return string */
  public function getRuntime()
  {
    return $this->runtime;
  }
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
  /** @param SourceProvenance */
  public function setSourceProvenance(SourceProvenance $sourceProvenance)
  {
    $this->sourceProvenance = $sourceProvenance;
  }
  /** @return SourceProvenance */
  public function getSourceProvenance()
  {
    return $this->sourceProvenance;
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

class CloudfunctionsFunction extends \Google\Collection
{
  /** @var BuildConfig */
  public $buildConfig;
  /** @var string */
  public $description;
  /** @var string */
  public $environment;
  /** @var EventTrigger */
  public $eventTrigger;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var ServiceConfig */
  public $serviceConfig;
  /** @var string */
  public $state;
  /** @var GoogleCloudFunctionsV2StateMessage[] */
  public $stateMessages;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'stateMessages';
  protected $buildConfigType = BuildConfig::class;
  protected $buildConfigDataType = '';
  protected $eventTriggerType = EventTrigger::class;
  protected $eventTriggerDataType = '';
  protected $serviceConfigType = ServiceConfig::class;
  protected $serviceConfigDataType = '';
  protected $stateMessagesType = GoogleCloudFunctionsV2StateMessage::class;
  protected $stateMessagesDataType = 'array';
  /** @param BuildConfig */
  public function setBuildConfig(BuildConfig $buildConfig)
  {
    $this->buildConfig = $buildConfig;
  }
  /** @return BuildConfig */
  public function getBuildConfig()
  {
    return $this->buildConfig;
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
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return string */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param EventTrigger */
  public function setEventTrigger(EventTrigger $eventTrigger)
  {
    $this->eventTrigger = $eventTrigger;
  }
  /** @return EventTrigger */
  public function getEventTrigger()
  {
    return $this->eventTrigger;
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
  /** @param ServiceConfig */
  public function setServiceConfig(ServiceConfig $serviceConfig)
  {
    $this->serviceConfig = $serviceConfig;
  }
  /** @return ServiceConfig */
  public function getServiceConfig()
  {
    return $this->serviceConfig;
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
  /** @param GoogleCloudFunctionsV2StateMessage[] */
  public function setStateMessages($stateMessages)
  {
    $this->stateMessages = $stateMessages;
  }
  /** @return GoogleCloudFunctionsV2StateMessage[] */
  public function getStateMessages()
  {
    return $this->stateMessages;
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

class EventFilter extends \Google\Model
{
  /** @var string */
  public $attribute;
  /** @var string */
  public $operator;
  /** @var string */
  public $value;

  /** @param string */
  public function setAttribute($attribute)
  {
    $this->attribute = $attribute;
  }
  /** @return string */
  public function getAttribute()
  {
    return $this->attribute;
  }
  /** @param string */
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /** @return string */
  public function getOperator()
  {
    return $this->operator;
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

class EventTrigger extends \Google\Collection
{
  /** @var string */
  public $channel;
  /** @var EventFilter[] */
  public $eventFilters;
  /** @var string */
  public $eventType;
  /** @var string */
  public $pubsubTopic;
  /** @var string */
  public $retryPolicy;
  /** @var string */
  public $serviceAccountEmail;
  /** @var string */
  public $trigger;
  /** @var string */
  public $triggerRegion;
  protected $collection_key = 'eventFilters';
  protected $eventFiltersType = EventFilter::class;
  protected $eventFiltersDataType = 'array';
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
  /** @param EventFilter[] */
  public function setEventFilters($eventFilters)
  {
    $this->eventFilters = $eventFilters;
  }
  /** @return EventFilter[] */
  public function getEventFilters()
  {
    return $this->eventFilters;
  }
  /** @param string */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string */
  public function getEventType()
  {
    return $this->eventType;
  }
  /** @param string */
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /** @return string */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
  /** @param string */
  public function setRetryPolicy($retryPolicy)
  {
    $this->retryPolicy = $retryPolicy;
  }
  /** @return string */
  public function getRetryPolicy()
  {
    return $this->retryPolicy;
  }
  /** @param string */
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  /** @return string */
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
  }
  /** @param string */
  public function setTrigger($trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return string */
  public function getTrigger()
  {
    return $this->trigger;
  }
  /** @param string */
  public function setTriggerRegion($triggerRegion)
  {
    $this->triggerRegion = $triggerRegion;
  }
  /** @return string */
  public function getTriggerRegion()
  {
    return $this->triggerRegion;
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

class GenerateDownloadUrlRequest extends \Google\Model
{
}

class GenerateDownloadUrlResponse extends \Google\Model
{
  /** @var string */
  public $downloadUrl;

  /** @param string */
  public function setDownloadUrl($downloadUrl)
  {
    $this->downloadUrl = $downloadUrl;
  }
  /** @return string */
  public function getDownloadUrl()
  {
    return $this->downloadUrl;
  }
}

class GenerateUploadUrlRequest extends \Google\Model
{
}

class GenerateUploadUrlResponse extends \Google\Model
{
  /** @var StorageSource */
  public $storageSource;
  /** @var string */
  public $uploadUrl;
  protected $storageSourceType = StorageSource::class;
  protected $storageSourceDataType = '';
  /** @param StorageSource */
  public function setStorageSource(StorageSource $storageSource)
  {
    $this->storageSource = $storageSource;
  }
  /** @return StorageSource */
  public function getStorageSource()
  {
    return $this->storageSource;
  }
  /** @param string */
  public function setUploadUrl($uploadUrl)
  {
    $this->uploadUrl = $uploadUrl;
  }
  /** @return string */
  public function getUploadUrl()
  {
    return $this->uploadUrl;
  }
}

class GoogleCloudFunctionsV2OperationMetadata extends \Google\Collection
{
  /** @var string */
  public $apiVersion;
  /** @var bool */
  public $cancelRequested;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var array[] */
  public $requestResource;
  /** @var GoogleCloudFunctionsV2Stage[] */
  public $stages;
  /** @var string */
  public $statusDetail;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;
  protected $collection_key = 'stages';
  protected $stagesType = GoogleCloudFunctionsV2Stage::class;
  protected $stagesDataType = 'array';
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
  /** @param array[] */
  public function setRequestResource($requestResource)
  {
    $this->requestResource = $requestResource;
  }
  /** @return array[] */
  public function getRequestResource()
  {
    return $this->requestResource;
  }
  /** @param GoogleCloudFunctionsV2Stage[] */
  public function setStages($stages)
  {
    $this->stages = $stages;
  }
  /** @return GoogleCloudFunctionsV2Stage[] */
  public function getStages()
  {
    return $this->stages;
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

class GoogleCloudFunctionsV2Stage extends \Google\Collection
{
  /** @var string */
  public $message;
  /** @var string */
  public $name;
  /** @var string */
  public $resource;
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $state;
  /** @var GoogleCloudFunctionsV2StateMessage[] */
  public $stateMessages;
  protected $collection_key = 'stateMessages';
  protected $stateMessagesType = GoogleCloudFunctionsV2StateMessage::class;
  protected $stateMessagesDataType = 'array';
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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /** @return string */
  public function getResourceUri()
  {
    return $this->resourceUri;
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
  /** @param GoogleCloudFunctionsV2StateMessage[] */
  public function setStateMessages($stateMessages)
  {
    $this->stateMessages = $stateMessages;
  }
  /** @return GoogleCloudFunctionsV2StateMessage[] */
  public function getStateMessages()
  {
    return $this->stateMessages;
  }
}

class GoogleCloudFunctionsV2StateMessage extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $severity;
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

class GoogleCloudFunctionsV2alphaOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $apiVersion;
  /** @var bool */
  public $cancelRequested;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var array[] */
  public $requestResource;
  /** @var GoogleCloudFunctionsV2alphaStage[] */
  public $stages;
  /** @var string */
  public $statusDetail;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;
  protected $collection_key = 'stages';
  protected $stagesType = GoogleCloudFunctionsV2alphaStage::class;
  protected $stagesDataType = 'array';
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
  /** @param array[] */
  public function setRequestResource($requestResource)
  {
    $this->requestResource = $requestResource;
  }
  /** @return array[] */
  public function getRequestResource()
  {
    return $this->requestResource;
  }
  /** @param GoogleCloudFunctionsV2alphaStage[] */
  public function setStages($stages)
  {
    $this->stages = $stages;
  }
  /** @return GoogleCloudFunctionsV2alphaStage[] */
  public function getStages()
  {
    return $this->stages;
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

class GoogleCloudFunctionsV2alphaStage extends \Google\Collection
{
  /** @var string */
  public $message;
  /** @var string */
  public $name;
  /** @var string */
  public $resource;
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $state;
  /** @var GoogleCloudFunctionsV2alphaStateMessage[] */
  public $stateMessages;
  protected $collection_key = 'stateMessages';
  protected $stateMessagesType = GoogleCloudFunctionsV2alphaStateMessage::class;
  protected $stateMessagesDataType = 'array';
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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /** @return string */
  public function getResourceUri()
  {
    return $this->resourceUri;
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
  /** @param GoogleCloudFunctionsV2alphaStateMessage[] */
  public function setStateMessages($stateMessages)
  {
    $this->stateMessages = $stateMessages;
  }
  /** @return GoogleCloudFunctionsV2alphaStateMessage[] */
  public function getStateMessages()
  {
    return $this->stateMessages;
  }
}

class GoogleCloudFunctionsV2alphaStateMessage extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $severity;
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

class GoogleCloudFunctionsV2betaOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $apiVersion;
  /** @var bool */
  public $cancelRequested;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var array[] */
  public $requestResource;
  /** @var GoogleCloudFunctionsV2betaStage[] */
  public $stages;
  /** @var string */
  public $statusDetail;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;
  protected $collection_key = 'stages';
  protected $stagesType = GoogleCloudFunctionsV2betaStage::class;
  protected $stagesDataType = 'array';
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
  /** @param array[] */
  public function setRequestResource($requestResource)
  {
    $this->requestResource = $requestResource;
  }
  /** @return array[] */
  public function getRequestResource()
  {
    return $this->requestResource;
  }
  /** @param GoogleCloudFunctionsV2betaStage[] */
  public function setStages($stages)
  {
    $this->stages = $stages;
  }
  /** @return GoogleCloudFunctionsV2betaStage[] */
  public function getStages()
  {
    return $this->stages;
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

class GoogleCloudFunctionsV2betaStage extends \Google\Collection
{
  /** @var string */
  public $message;
  /** @var string */
  public $name;
  /** @var string */
  public $resource;
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $state;
  /** @var GoogleCloudFunctionsV2betaStateMessage[] */
  public $stateMessages;
  protected $collection_key = 'stateMessages';
  protected $stateMessagesType = GoogleCloudFunctionsV2betaStateMessage::class;
  protected $stateMessagesDataType = 'array';
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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /** @return string */
  public function getResourceUri()
  {
    return $this->resourceUri;
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
  /** @param GoogleCloudFunctionsV2betaStateMessage[] */
  public function setStateMessages($stateMessages)
  {
    $this->stateMessages = $stateMessages;
  }
  /** @return GoogleCloudFunctionsV2betaStateMessage[] */
  public function getStateMessages()
  {
    return $this->stateMessages;
  }
}

class GoogleCloudFunctionsV2betaStateMessage extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $severity;
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

class ListFunctionsResponse extends \Google\Collection
{
  /** @var CloudfunctionsFunction[] */
  public $functions;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $functionsType = CloudfunctionsFunction::class;
  protected $functionsDataType = 'array';
  /** @param CloudfunctionsFunction[] */
  public function setFunctions($functions)
  {
    $this->functions = $functions;
  }
  /** @return CloudfunctionsFunction[] */
  public function getFunctions()
  {
    return $this->functions;
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

class ListRuntimesResponse extends \Google\Collection
{
  /** @var Runtime[] */
  public $runtimes;
  protected $collection_key = 'runtimes';
  protected $runtimesType = Runtime::class;
  protected $runtimesDataType = 'array';
  /** @param Runtime[] */
  public function setRuntimes($runtimes)
  {
    $this->runtimes = $runtimes;
  }
  /** @return Runtime[] */
  public function getRuntimes()
  {
    return $this->runtimes;
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

class OperationMetadataV1 extends \Google\Model
{
  /** @var string */
  public $buildId;
  /** @var string */
  public $buildName;
  /** @var array[] */
  public $request;
  /** @var string */
  public $sourceToken;
  /** @var string */
  public $target;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $versionId;

  /** @param string */
  public function setBuildId($buildId)
  {
    $this->buildId = $buildId;
  }
  /** @return string */
  public function getBuildId()
  {
    return $this->buildId;
  }
  /** @param string */
  public function setBuildName($buildName)
  {
    $this->buildName = $buildName;
  }
  /** @return string */
  public function getBuildName()
  {
    return $this->buildName;
  }
  /** @param array[] */
  public function setRequest($request)
  {
    $this->request = $request;
  }
  /** @return array[] */
  public function getRequest()
  {
    return $this->request;
  }
  /** @param string */
  public function setSourceToken($sourceToken)
  {
    $this->sourceToken = $sourceToken;
  }
  /** @return string */
  public function getSourceToken()
  {
    return $this->sourceToken;
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
  public function setVersionId($versionId)
  {
    $this->versionId = $versionId;
  }
  /** @return string */
  public function getVersionId()
  {
    return $this->versionId;
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

class RepoSource extends \Google\Model
{
  /** @var string */
  public $branchName;
  /** @var string */
  public $commitSha;
  /** @var string */
  public $dir;
  /** @var bool */
  public $invertRegex;
  /** @var string */
  public $projectId;
  /** @var string */
  public $repoName;
  /** @var string */
  public $tagName;

  /** @param string */
  public function setBranchName($branchName)
  {
    $this->branchName = $branchName;
  }
  /** @return string */
  public function getBranchName()
  {
    return $this->branchName;
  }
  /** @param string */
  public function setCommitSha($commitSha)
  {
    $this->commitSha = $commitSha;
  }
  /** @return string */
  public function getCommitSha()
  {
    return $this->commitSha;
  }
  /** @param string */
  public function setDir($dir)
  {
    $this->dir = $dir;
  }
  /** @return string */
  public function getDir()
  {
    return $this->dir;
  }
  /** @param bool */
  public function setInvertRegex($invertRegex)
  {
    $this->invertRegex = $invertRegex;
  }
  /** @return bool */
  public function getInvertRegex()
  {
    return $this->invertRegex;
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
  /** @param string */
  public function setRepoName($repoName)
  {
    $this->repoName = $repoName;
  }
  /** @return string */
  public function getRepoName()
  {
    return $this->repoName;
  }
  /** @param string */
  public function setTagName($tagName)
  {
    $this->tagName = $tagName;
  }
  /** @return string */
  public function getTagName()
  {
    return $this->tagName;
  }
}

class Runtime extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $environment;
  /** @var string */
  public $name;
  /** @var string */
  public $stage;
  /** @var string[] */
  public $warnings;
  protected $collection_key = 'warnings';
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
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return string */
  public function getEnvironment()
  {
    return $this->environment;
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
  public function setStage($stage)
  {
    $this->stage = $stage;
  }
  /** @return string */
  public function getStage()
  {
    return $this->stage;
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

class SecretEnvVar extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $projectId;
  /** @var string */
  public $secret;
  /** @var string */
  public $version;

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

class SecretVersion extends \Google\Model
{
  /** @var string */
  public $path;
  /** @var string */
  public $version;

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

class SecretVolume extends \Google\Collection
{
  /** @var string */
  public $mountPath;
  /** @var string */
  public $projectId;
  /** @var string */
  public $secret;
  /** @var SecretVersion[] */
  public $versions;
  protected $collection_key = 'versions';
  protected $versionsType = SecretVersion::class;
  protected $versionsDataType = 'array';
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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
  /** @param SecretVersion[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return SecretVersion[] */
  public function getVersions()
  {
    return $this->versions;
  }
}

class ServiceConfig extends \Google\Collection
{
  /** @var bool */
  public $allTrafficOnLatestRevision;
  /** @var string */
  public $availableMemory;
  /** @var string[] */
  public $environmentVariables;
  /** @var string */
  public $ingressSettings;
  /** @var int */
  public $maxInstanceCount;
  /** @var int */
  public $minInstanceCount;
  /** @var string */
  public $revision;
  /** @var SecretEnvVar[] */
  public $secretEnvironmentVariables;
  /** @var SecretVolume[] */
  public $secretVolumes;
  /** @var string */
  public $securityLevel;
  /** @var string */
  public $service;
  /** @var string */
  public $serviceAccountEmail;
  /** @var int */
  public $timeoutSeconds;
  /** @var string */
  public $uri;
  /** @var string */
  public $vpcConnector;
  /** @var string */
  public $vpcConnectorEgressSettings;
  protected $collection_key = 'secretVolumes';
  protected $secretEnvironmentVariablesType = SecretEnvVar::class;
  protected $secretEnvironmentVariablesDataType = 'array';
  protected $secretVolumesType = SecretVolume::class;
  protected $secretVolumesDataType = 'array';
  /** @param bool */
  public function setAllTrafficOnLatestRevision($allTrafficOnLatestRevision)
  {
    $this->allTrafficOnLatestRevision = $allTrafficOnLatestRevision;
  }
  /** @return bool */
  public function getAllTrafficOnLatestRevision()
  {
    return $this->allTrafficOnLatestRevision;
  }
  /** @param string */
  public function setAvailableMemory($availableMemory)
  {
    $this->availableMemory = $availableMemory;
  }
  /** @return string */
  public function getAvailableMemory()
  {
    return $this->availableMemory;
  }
  /** @param string[] */
  public function setEnvironmentVariables($environmentVariables)
  {
    $this->environmentVariables = $environmentVariables;
  }
  /** @return string[] */
  public function getEnvironmentVariables()
  {
    return $this->environmentVariables;
  }
  /** @param string */
  public function setIngressSettings($ingressSettings)
  {
    $this->ingressSettings = $ingressSettings;
  }
  /** @return string */
  public function getIngressSettings()
  {
    return $this->ingressSettings;
  }
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
  /** @param SecretEnvVar[] */
  public function setSecretEnvironmentVariables($secretEnvironmentVariables)
  {
    $this->secretEnvironmentVariables = $secretEnvironmentVariables;
  }
  /** @return SecretEnvVar[] */
  public function getSecretEnvironmentVariables()
  {
    return $this->secretEnvironmentVariables;
  }
  /** @param SecretVolume[] */
  public function setSecretVolumes($secretVolumes)
  {
    $this->secretVolumes = $secretVolumes;
  }
  /** @return SecretVolume[] */
  public function getSecretVolumes()
  {
    return $this->secretVolumes;
  }
  /** @param string */
  public function setSecurityLevel($securityLevel)
  {
    $this->securityLevel = $securityLevel;
  }
  /** @return string */
  public function getSecurityLevel()
  {
    return $this->securityLevel;
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
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  /** @return string */
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
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
  /** @param string */
  public function setVpcConnector($vpcConnector)
  {
    $this->vpcConnector = $vpcConnector;
  }
  /** @return string */
  public function getVpcConnector()
  {
    return $this->vpcConnector;
  }
  /** @param string */
  public function setVpcConnectorEgressSettings($vpcConnectorEgressSettings)
  {
    $this->vpcConnectorEgressSettings = $vpcConnectorEgressSettings;
  }
  /** @return string */
  public function getVpcConnectorEgressSettings()
  {
    return $this->vpcConnectorEgressSettings;
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

class Source extends \Google\Model
{
  /** @var RepoSource */
  public $repoSource;
  /** @var StorageSource */
  public $storageSource;
  protected $repoSourceType = RepoSource::class;
  protected $repoSourceDataType = '';
  protected $storageSourceType = StorageSource::class;
  protected $storageSourceDataType = '';
  /** @param RepoSource */
  public function setRepoSource(RepoSource $repoSource)
  {
    $this->repoSource = $repoSource;
  }
  /** @return RepoSource */
  public function getRepoSource()
  {
    return $this->repoSource;
  }
  /** @param StorageSource */
  public function setStorageSource(StorageSource $storageSource)
  {
    $this->storageSource = $storageSource;
  }
  /** @return StorageSource */
  public function getStorageSource()
  {
    return $this->storageSource;
  }
}

class SourceProvenance extends \Google\Model
{
  /** @var RepoSource */
  public $resolvedRepoSource;
  /** @var StorageSource */
  public $resolvedStorageSource;
  protected $resolvedRepoSourceType = RepoSource::class;
  protected $resolvedRepoSourceDataType = '';
  protected $resolvedStorageSourceType = StorageSource::class;
  protected $resolvedStorageSourceDataType = '';
  /** @param RepoSource */
  public function setResolvedRepoSource(RepoSource $resolvedRepoSource)
  {
    $this->resolvedRepoSource = $resolvedRepoSource;
  }
  /** @return RepoSource */
  public function getResolvedRepoSource()
  {
    return $this->resolvedRepoSource;
  }
  /** @param StorageSource */
  public function setResolvedStorageSource(StorageSource $resolvedStorageSource)
  {
    $this->resolvedStorageSource = $resolvedStorageSource;
  }
  /** @return StorageSource */
  public function getResolvedStorageSource()
  {
    return $this->resolvedStorageSource;
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

class StorageSource extends \Google\Model
{
  /** @var string */
  public $bucket;
  /** @var string */
  public $generation;
  /** @var string */
  public $object;

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
  public function setObject($object)
  {
    $this->object = $object;
  }
  /** @return string */
  public function getObject()
  {
    return $this->object;
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
class_alias(AuditConfig::class, 'Google_Service_CloudFunctions_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_CloudFunctions_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_CloudFunctions_Binding');
class_alias(BuildConfig::class, 'Google_Service_CloudFunctions_BuildConfig');
class_alias(CloudfunctionsFunction::class, 'Google_Service_CloudFunctions_CloudfunctionsFunction');
class_alias(EventFilter::class, 'Google_Service_CloudFunctions_EventFilter');
class_alias(EventTrigger::class, 'Google_Service_CloudFunctions_EventTrigger');
class_alias(Expr::class, 'Google_Service_CloudFunctions_Expr');
class_alias(GenerateDownloadUrlRequest::class, 'Google_Service_CloudFunctions_GenerateDownloadUrlRequest');
class_alias(GenerateDownloadUrlResponse::class, 'Google_Service_CloudFunctions_GenerateDownloadUrlResponse');
class_alias(GenerateUploadUrlRequest::class, 'Google_Service_CloudFunctions_GenerateUploadUrlRequest');
class_alias(GenerateUploadUrlResponse::class, 'Google_Service_CloudFunctions_GenerateUploadUrlResponse');
class_alias(GoogleCloudFunctionsV2OperationMetadata::class, 'Google_Service_CloudFunctions_GoogleCloudFunctionsV2OperationMetadata');
class_alias(GoogleCloudFunctionsV2Stage::class, 'Google_Service_CloudFunctions_GoogleCloudFunctionsV2Stage');
class_alias(GoogleCloudFunctionsV2StateMessage::class, 'Google_Service_CloudFunctions_GoogleCloudFunctionsV2StateMessage');
class_alias(GoogleCloudFunctionsV2alphaOperationMetadata::class, 'Google_Service_CloudFunctions_GoogleCloudFunctionsV2alphaOperationMetadata');
class_alias(GoogleCloudFunctionsV2alphaStage::class, 'Google_Service_CloudFunctions_GoogleCloudFunctionsV2alphaStage');
class_alias(GoogleCloudFunctionsV2alphaStateMessage::class, 'Google_Service_CloudFunctions_GoogleCloudFunctionsV2alphaStateMessage');
class_alias(GoogleCloudFunctionsV2betaOperationMetadata::class, 'Google_Service_CloudFunctions_GoogleCloudFunctionsV2betaOperationMetadata');
class_alias(GoogleCloudFunctionsV2betaStage::class, 'Google_Service_CloudFunctions_GoogleCloudFunctionsV2betaStage');
class_alias(GoogleCloudFunctionsV2betaStateMessage::class, 'Google_Service_CloudFunctions_GoogleCloudFunctionsV2betaStateMessage');
class_alias(ListFunctionsResponse::class, 'Google_Service_CloudFunctions_ListFunctionsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudFunctions_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudFunctions_ListOperationsResponse');
class_alias(ListRuntimesResponse::class, 'Google_Service_CloudFunctions_ListRuntimesResponse');
class_alias(Location::class, 'Google_Service_CloudFunctions_Location');
class_alias(Operation::class, 'Google_Service_CloudFunctions_Operation');
class_alias(OperationMetadataV1::class, 'Google_Service_CloudFunctions_OperationMetadataV1');
class_alias(Policy::class, 'Google_Service_CloudFunctions_Policy');
class_alias(RepoSource::class, 'Google_Service_CloudFunctions_RepoSource');
class_alias(Runtime::class, 'Google_Service_CloudFunctions_Runtime');
class_alias(SecretEnvVar::class, 'Google_Service_CloudFunctions_SecretEnvVar');
class_alias(SecretVersion::class, 'Google_Service_CloudFunctions_SecretVersion');
class_alias(SecretVolume::class, 'Google_Service_CloudFunctions_SecretVolume');
class_alias(ServiceConfig::class, 'Google_Service_CloudFunctions_ServiceConfig');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CloudFunctions_SetIamPolicyRequest');
class_alias(Source::class, 'Google_Service_CloudFunctions_Source');
class_alias(SourceProvenance::class, 'Google_Service_CloudFunctions_SourceProvenance');
class_alias(Status::class, 'Google_Service_CloudFunctions_Status');
class_alias(StorageSource::class, 'Google_Service_CloudFunctions_StorageSource');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CloudFunctions_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CloudFunctions_TestIamPermissionsResponse');
