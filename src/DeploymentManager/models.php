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

namespace Google\Service\DeploymentManager;

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

class ConfigFile extends \Google\Model
{
  /** @var string */
  public $content;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
}

class Deployment extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $id;
  /** @var string */
  public $insertTime;
  /** @var DeploymentLabelEntry[] */
  public $labels;
  /** @var string */
  public $manifest;
  /** @var string */
  public $name;
  /** @var Operation */
  public $operation;
  /** @var string */
  public $selfLink;
  /** @var TargetConfiguration */
  public $target;
  /** @var DeploymentUpdate */
  public $update;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'labels';
  protected $labelsType = DeploymentLabelEntry::class;
  protected $labelsDataType = 'array';
  protected $operationType = Operation::class;
  protected $operationDataType = '';
  protected $targetType = TargetConfiguration::class;
  protected $targetDataType = '';
  protected $updateType = DeploymentUpdate::class;
  protected $updateDataType = '';
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
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
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
  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
  }
  /** @return string */
  public function getInsertTime()
  {
    return $this->insertTime;
  }
  /** @param DeploymentLabelEntry[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return DeploymentLabelEntry[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setManifest($manifest)
  {
    $this->manifest = $manifest;
  }
  /** @return string */
  public function getManifest()
  {
    return $this->manifest;
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
  /** @param TargetConfiguration */
  public function setTarget(TargetConfiguration $target)
  {
    $this->target = $target;
  }
  /** @return TargetConfiguration */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param DeploymentUpdate */
  public function setUpdate(DeploymentUpdate $update)
  {
    $this->update = $update;
  }
  /** @return DeploymentUpdate */
  public function getUpdate()
  {
    return $this->update;
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

class DeploymentLabelEntry extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class DeploymentUpdate extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var DeploymentUpdateLabelEntry[] */
  public $labels;
  /** @var string */
  public $manifest;
  protected $collection_key = 'labels';
  protected $labelsType = DeploymentUpdateLabelEntry::class;
  protected $labelsDataType = 'array';
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
  /** @param DeploymentUpdateLabelEntry[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return DeploymentUpdateLabelEntry[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setManifest($manifest)
  {
    $this->manifest = $manifest;
  }
  /** @return string */
  public function getManifest()
  {
    return $this->manifest;
  }
}

class DeploymentUpdateLabelEntry extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class DeploymentmanagerResource extends \Google\Collection
{
  /** @var ResourceAccessControl */
  public $accessControl;
  /** @var string */
  public $finalProperties;
  /** @var string */
  public $id;
  /** @var string */
  public $insertTime;
  /** @var string */
  public $manifest;
  /** @var string */
  public $name;
  /** @var string */
  public $properties;
  /** @var string */
  public $type;
  /** @var ResourceUpdate */
  public $update;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $url;
  /** @var DeploymentmanagerResourceWarnings[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $accessControlType = ResourceAccessControl::class;
  protected $accessControlDataType = '';
  protected $updateType = ResourceUpdate::class;
  protected $updateDataType = '';
  protected $warningsType = DeploymentmanagerResourceWarnings::class;
  protected $warningsDataType = 'array';
  /** @param ResourceAccessControl */
  public function setAccessControl(ResourceAccessControl $accessControl)
  {
    $this->accessControl = $accessControl;
  }
  /** @return ResourceAccessControl */
  public function getAccessControl()
  {
    return $this->accessControl;
  }
  /** @param string */
  public function setFinalProperties($finalProperties)
  {
    $this->finalProperties = $finalProperties;
  }
  /** @return string */
  public function getFinalProperties()
  {
    return $this->finalProperties;
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
  public function setManifest($manifest)
  {
    $this->manifest = $manifest;
  }
  /** @return string */
  public function getManifest()
  {
    return $this->manifest;
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
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string */
  public function getProperties()
  {
    return $this->properties;
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
  /** @param ResourceUpdate */
  public function setUpdate(ResourceUpdate $update)
  {
    $this->update = $update;
  }
  /** @return ResourceUpdate */
  public function getUpdate()
  {
    return $this->update;
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
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
  /** @param DeploymentmanagerResourceWarnings[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return DeploymentmanagerResourceWarnings[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class DeploymentmanagerResourceWarnings extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var DeploymentmanagerResourceWarningsData[] */
  public $data;
  /** @var string */
  public $message;
  protected $collection_key = 'data';
  protected $dataType = DeploymentmanagerResourceWarningsData::class;
  protected $dataDataType = 'array';
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
  /** @param DeploymentmanagerResourceWarningsData[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return DeploymentmanagerResourceWarningsData[] */
  public function getData()
  {
    return $this->data;
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

class DeploymentmanagerResourceWarningsData extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class DeploymentsCancelPreviewRequest extends \Google\Model
{
  /** @var string */
  public $fingerprint;

  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
}

class DeploymentsListResponse extends \Google\Collection
{
  /** @var Deployment[] */
  public $deployments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'deployments';
  protected $deploymentsType = Deployment::class;
  protected $deploymentsDataType = 'array';
  /** @param Deployment[] */
  public function setDeployments($deployments)
  {
    $this->deployments = $deployments;
  }
  /** @return Deployment[] */
  public function getDeployments()
  {
    return $this->deployments;
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

class DeploymentsStopRequest extends \Google\Model
{
  /** @var string */
  public $fingerprint;

  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
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

class GlobalSetPolicyRequest extends \Google\Collection
{
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var Policy */
  public $policy;
  protected $collection_key = 'bindings';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  protected $policyType = Policy::class;
  protected $policyDataType = '';
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

class ImportFile extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $name;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
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

class Manifest extends \Google\Collection
{
  /** @var ConfigFile */
  public $config;
  /** @var string */
  public $expandedConfig;
  /** @var string */
  public $id;
  /** @var ImportFile[] */
  public $imports;
  /** @var string */
  public $insertTime;
  /** @var string */
  public $layout;
  /** @var string */
  public $manifestSizeBytes;
  /** @var string */
  public $manifestSizeLimitBytes;
  /** @var string */
  public $name;
  /** @var string */
  public $selfLink;
  protected $collection_key = 'imports';
  protected $configType = ConfigFile::class;
  protected $configDataType = '';
  protected $importsType = ImportFile::class;
  protected $importsDataType = 'array';
  /** @param ConfigFile */
  public function setConfig(ConfigFile $config)
  {
    $this->config = $config;
  }
  /** @return ConfigFile */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param string */
  public function setExpandedConfig($expandedConfig)
  {
    $this->expandedConfig = $expandedConfig;
  }
  /** @return string */
  public function getExpandedConfig()
  {
    return $this->expandedConfig;
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
  /** @param ImportFile[] */
  public function setImports($imports)
  {
    $this->imports = $imports;
  }
  /** @return ImportFile[] */
  public function getImports()
  {
    return $this->imports;
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
  public function setLayout($layout)
  {
    $this->layout = $layout;
  }
  /** @return string */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param string */
  public function setManifestSizeBytes($manifestSizeBytes)
  {
    $this->manifestSizeBytes = $manifestSizeBytes;
  }
  /** @return string */
  public function getManifestSizeBytes()
  {
    return $this->manifestSizeBytes;
  }
  /** @param string */
  public function setManifestSizeLimitBytes($manifestSizeLimitBytes)
  {
    $this->manifestSizeLimitBytes = $manifestSizeLimitBytes;
  }
  /** @return string */
  public function getManifestSizeLimitBytes()
  {
    return $this->manifestSizeLimitBytes;
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
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
}

class ManifestsListResponse extends \Google\Collection
{
  /** @var Manifest[] */
  public $manifests;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'manifests';
  protected $manifestsType = Manifest::class;
  protected $manifestsDataType = 'array';
  /** @param Manifest[] */
  public function setManifests($manifests)
  {
    $this->manifests = $manifests;
  }
  /** @return Manifest[] */
  public function getManifests()
  {
    return $this->manifests;
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

class Operation extends \Google\Collection
{
  /** @var string */
  public $clientOperationId;
  /** @var string */
  public $creationTimestamp;
  /** @var string */
  public $description;
  /** @var string */
  public $endTime;
  /** @var OperationError */
  public $error;
  /** @var string */
  public $httpErrorMessage;
  /** @var int */
  public $httpErrorStatusCode;
  /** @var string */
  public $id;
  /** @var string */
  public $insertTime;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $operationGroupId;
  /** @var string */
  public $operationType;
  /** @var int */
  public $progress;
  /** @var string */
  public $region;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $startTime;
  /** @var string */
  public $status;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $targetId;
  /** @var string */
  public $targetLink;
  /** @var string */
  public $user;
  /** @var OperationWarnings[] */
  public $warnings;
  /** @var string */
  public $zone;
  protected $collection_key = 'warnings';
  protected $errorType = OperationError::class;
  protected $errorDataType = '';
  protected $warningsType = OperationWarnings::class;
  protected $warningsDataType = 'array';
  /** @param string */
  public function setClientOperationId($clientOperationId)
  {
    $this->clientOperationId = $clientOperationId;
  }
  /** @return string */
  public function getClientOperationId()
  {
    return $this->clientOperationId;
  }
  /** @param string */
  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  /** @return string */
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
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
  public function setHttpErrorMessage($httpErrorMessage)
  {
    $this->httpErrorMessage = $httpErrorMessage;
  }
  /** @return string */
  public function getHttpErrorMessage()
  {
    return $this->httpErrorMessage;
  }
  /** @param int */
  public function setHttpErrorStatusCode($httpErrorStatusCode)
  {
    $this->httpErrorStatusCode = $httpErrorStatusCode;
  }
  /** @return int */
  public function getHttpErrorStatusCode()
  {
    return $this->httpErrorStatusCode;
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
  public function setOperationGroupId($operationGroupId)
  {
    $this->operationGroupId = $operationGroupId;
  }
  /** @return string */
  public function getOperationGroupId()
  {
    return $this->operationGroupId;
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
  /** @param int */
  public function setProgress($progress)
  {
    $this->progress = $progress;
  }
  /** @return int */
  public function getProgress()
  {
    return $this->progress;
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
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return string */
  public function getUser()
  {
    return $this->user;
  }
  /** @param OperationWarnings[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return OperationWarnings[] */
  public function getWarnings()
  {
    return $this->warnings;
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

class OperationError extends \Google\Collection
{
  /** @var OperationErrorErrors[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $errorsType = OperationErrorErrors::class;
  protected $errorsDataType = 'array';
  /** @param OperationErrorErrors[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return OperationErrorErrors[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class OperationErrorErrors extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $location;
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

class OperationWarnings extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var OperationWarningsData[] */
  public $data;
  /** @var string */
  public $message;
  protected $collection_key = 'data';
  protected $dataType = OperationWarningsData::class;
  protected $dataDataType = 'array';
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
  /** @param OperationWarningsData[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return OperationWarningsData[] */
  public function getData()
  {
    return $this->data;
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

class OperationWarningsData extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class OperationsListResponse extends \Google\Collection
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

class ResourceAccessControl extends \Google\Model
{
  /** @var string */
  public $gcpIamPolicy;

  /** @param string */
  public function setGcpIamPolicy($gcpIamPolicy)
  {
    $this->gcpIamPolicy = $gcpIamPolicy;
  }
  /** @return string */
  public function getGcpIamPolicy()
  {
    return $this->gcpIamPolicy;
  }
}

class ResourceUpdate extends \Google\Collection
{
  /** @var ResourceAccessControl */
  public $accessControl;
  /** @var ResourceUpdateError */
  public $error;
  /** @var string */
  public $finalProperties;
  /** @var string */
  public $intent;
  /** @var string */
  public $manifest;
  /** @var string */
  public $properties;
  /** @var string */
  public $state;
  /** @var ResourceUpdateWarnings[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $accessControlType = ResourceAccessControl::class;
  protected $accessControlDataType = '';
  protected $errorType = ResourceUpdateError::class;
  protected $errorDataType = '';
  protected $warningsType = ResourceUpdateWarnings::class;
  protected $warningsDataType = 'array';
  /** @param ResourceAccessControl */
  public function setAccessControl(ResourceAccessControl $accessControl)
  {
    $this->accessControl = $accessControl;
  }
  /** @return ResourceAccessControl */
  public function getAccessControl()
  {
    return $this->accessControl;
  }
  /** @param ResourceUpdateError */
  public function setError(ResourceUpdateError $error)
  {
    $this->error = $error;
  }
  /** @return ResourceUpdateError */
  public function getError()
  {
    return $this->error;
  }
  /** @param string */
  public function setFinalProperties($finalProperties)
  {
    $this->finalProperties = $finalProperties;
  }
  /** @return string */
  public function getFinalProperties()
  {
    return $this->finalProperties;
  }
  /** @param string */
  public function setIntent($intent)
  {
    $this->intent = $intent;
  }
  /** @return string */
  public function getIntent()
  {
    return $this->intent;
  }
  /** @param string */
  public function setManifest($manifest)
  {
    $this->manifest = $manifest;
  }
  /** @return string */
  public function getManifest()
  {
    return $this->manifest;
  }
  /** @param string */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string */
  public function getProperties()
  {
    return $this->properties;
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
  /** @param ResourceUpdateWarnings[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return ResourceUpdateWarnings[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class ResourceUpdateError extends \Google\Collection
{
  /** @var ResourceUpdateErrorErrors[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $errorsType = ResourceUpdateErrorErrors::class;
  protected $errorsDataType = 'array';
  /** @param ResourceUpdateErrorErrors[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ResourceUpdateErrorErrors[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class ResourceUpdateErrorErrors extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $location;
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

class ResourceUpdateWarnings extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var ResourceUpdateWarningsData[] */
  public $data;
  /** @var string */
  public $message;
  protected $collection_key = 'data';
  protected $dataType = ResourceUpdateWarningsData::class;
  protected $dataDataType = 'array';
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
  /** @param ResourceUpdateWarningsData[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return ResourceUpdateWarningsData[] */
  public function getData()
  {
    return $this->data;
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

class ResourceUpdateWarningsData extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class ResourcesListResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var DeploymentmanagerResource[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = DeploymentmanagerResource::class;
  protected $resourcesDataType = 'array';
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
  /** @param DeploymentmanagerResource[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return DeploymentmanagerResource[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class TargetConfiguration extends \Google\Collection
{
  /** @var ConfigFile */
  public $config;
  /** @var ImportFile[] */
  public $imports;
  protected $collection_key = 'imports';
  protected $configType = ConfigFile::class;
  protected $configDataType = '';
  protected $importsType = ImportFile::class;
  protected $importsDataType = 'array';
  /** @param ConfigFile */
  public function setConfig(ConfigFile $config)
  {
    $this->config = $config;
  }
  /** @return ConfigFile */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param ImportFile[] */
  public function setImports($imports)
  {
    $this->imports = $imports;
  }
  /** @return ImportFile[] */
  public function getImports()
  {
    return $this->imports;
  }
}

class TestPermissionsRequest extends \Google\Collection
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

class TestPermissionsResponse extends \Google\Collection
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

class Type extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $insertTime;
  /** @var string */
  public $name;
  /** @var Operation */
  public $operation;
  /** @var string */
  public $selfLink;
  protected $operationType = Operation::class;
  protected $operationDataType = '';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
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
}

class TypesListResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Type[] */
  public $types;
  protected $collection_key = 'types';
  protected $typesType = Type::class;
  protected $typesDataType = 'array';
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
  /** @param Type[] */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /** @return Type[] */
  public function getTypes()
  {
    return $this->types;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditConfig::class, 'Google_Service_DeploymentManager_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_DeploymentManager_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_DeploymentManager_Binding');
class_alias(ConfigFile::class, 'Google_Service_DeploymentManager_ConfigFile');
class_alias(Deployment::class, 'Google_Service_DeploymentManager_Deployment');
class_alias(DeploymentLabelEntry::class, 'Google_Service_DeploymentManager_DeploymentLabelEntry');
class_alias(DeploymentUpdate::class, 'Google_Service_DeploymentManager_DeploymentUpdate');
class_alias(DeploymentUpdateLabelEntry::class, 'Google_Service_DeploymentManager_DeploymentUpdateLabelEntry');
class_alias(DeploymentmanagerResource::class, 'Google_Service_DeploymentManager_DeploymentmanagerResource');
class_alias(DeploymentmanagerResourceWarnings::class, 'Google_Service_DeploymentManager_DeploymentmanagerResourceWarnings');
class_alias(DeploymentmanagerResourceWarningsData::class, 'Google_Service_DeploymentManager_DeploymentmanagerResourceWarningsData');
class_alias(DeploymentsCancelPreviewRequest::class, 'Google_Service_DeploymentManager_DeploymentsCancelPreviewRequest');
class_alias(DeploymentsListResponse::class, 'Google_Service_DeploymentManager_DeploymentsListResponse');
class_alias(DeploymentsStopRequest::class, 'Google_Service_DeploymentManager_DeploymentsStopRequest');
class_alias(Expr::class, 'Google_Service_DeploymentManager_Expr');
class_alias(GlobalSetPolicyRequest::class, 'Google_Service_DeploymentManager_GlobalSetPolicyRequest');
class_alias(ImportFile::class, 'Google_Service_DeploymentManager_ImportFile');
class_alias(Manifest::class, 'Google_Service_DeploymentManager_Manifest');
class_alias(ManifestsListResponse::class, 'Google_Service_DeploymentManager_ManifestsListResponse');
class_alias(Operation::class, 'Google_Service_DeploymentManager_Operation');
class_alias(OperationError::class, 'Google_Service_DeploymentManager_OperationError');
class_alias(OperationErrorErrors::class, 'Google_Service_DeploymentManager_OperationErrorErrors');
class_alias(OperationWarnings::class, 'Google_Service_DeploymentManager_OperationWarnings');
class_alias(OperationWarningsData::class, 'Google_Service_DeploymentManager_OperationWarningsData');
class_alias(OperationsListResponse::class, 'Google_Service_DeploymentManager_OperationsListResponse');
class_alias(Policy::class, 'Google_Service_DeploymentManager_Policy');
class_alias(ResourceAccessControl::class, 'Google_Service_DeploymentManager_ResourceAccessControl');
class_alias(ResourceUpdate::class, 'Google_Service_DeploymentManager_ResourceUpdate');
class_alias(ResourceUpdateError::class, 'Google_Service_DeploymentManager_ResourceUpdateError');
class_alias(ResourceUpdateErrorErrors::class, 'Google_Service_DeploymentManager_ResourceUpdateErrorErrors');
class_alias(ResourceUpdateWarnings::class, 'Google_Service_DeploymentManager_ResourceUpdateWarnings');
class_alias(ResourceUpdateWarningsData::class, 'Google_Service_DeploymentManager_ResourceUpdateWarningsData');
class_alias(ResourcesListResponse::class, 'Google_Service_DeploymentManager_ResourcesListResponse');
class_alias(TargetConfiguration::class, 'Google_Service_DeploymentManager_TargetConfiguration');
class_alias(TestPermissionsRequest::class, 'Google_Service_DeploymentManager_TestPermissionsRequest');
class_alias(TestPermissionsResponse::class, 'Google_Service_DeploymentManager_TestPermissionsResponse');
class_alias(Type::class, 'Google_Service_DeploymentManager_Type');
class_alias(TypesListResponse::class, 'Google_Service_DeploymentManager_TypesListResponse');
