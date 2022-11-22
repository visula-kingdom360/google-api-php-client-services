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

namespace Google\Service\DataFusion;

class Accelerator extends \Google\Model
{
  /** @var string */
  public $acceleratorType;
  /** @var string */
  public $state;

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

class CancelOperationRequest extends \Google\Model
{
}

class CryptoKeyConfig extends \Google\Model
{
  /** @var string */
  public $keyReference;

  /** @param string */
  public function setKeyReference($keyReference)
  {
    $this->keyReference = $keyReference;
  }
  /** @return string */
  public function getKeyReference()
  {
    return $this->keyReference;
  }
}

class DatafusionEmpty extends \Google\Model
{
}

class DnsPeering extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $domain;
  /** @var string */
  public $name;
  /** @var string */
  public $targetNetwork;
  /** @var string */
  public $targetProject;

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
  public function setTargetNetwork($targetNetwork)
  {
    $this->targetNetwork = $targetNetwork;
  }
  /** @return string */
  public function getTargetNetwork()
  {
    return $this->targetNetwork;
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
}

class EventPublishConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $topic;

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
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /** @return string */
  public function getTopic()
  {
    return $this->topic;
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

class Instance extends \Google\Collection
{
  /** @var Accelerator[] */
  public $accelerators;
  /** @var string */
  public $apiEndpoint;
  /** @var Version[] */
  public $availableVersion;
  /** @var string */
  public $createTime;
  /** @var CryptoKeyConfig */
  public $cryptoKeyConfig;
  /** @var string */
  public $dataprocServiceAccount;
  /** @var string */
  public $description;
  /** @var string[] */
  public $disabledReason;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $enableRbac;
  /** @var bool */
  public $enableStackdriverLogging;
  /** @var bool */
  public $enableStackdriverMonitoring;
  /** @var EventPublishConfig */
  public $eventPublishConfig;
  /** @var string */
  public $gcsBucket;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var NetworkConfig */
  public $networkConfig;
  /** @var string[] */
  public $options;
  /** @var string */
  public $p4ServiceAccount;
  /** @var bool */
  public $privateInstance;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $serviceEndpoint;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $tenantProjectId;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $version;
  /** @var string */
  public $zone;
  protected $collection_key = 'disabledReason';
  protected $acceleratorsType = Accelerator::class;
  protected $acceleratorsDataType = 'array';
  protected $availableVersionType = Version::class;
  protected $availableVersionDataType = 'array';
  protected $cryptoKeyConfigType = CryptoKeyConfig::class;
  protected $cryptoKeyConfigDataType = '';
  protected $eventPublishConfigType = EventPublishConfig::class;
  protected $eventPublishConfigDataType = '';
  protected $networkConfigType = NetworkConfig::class;
  protected $networkConfigDataType = '';
  /** @param Accelerator[] */
  public function setAccelerators($accelerators)
  {
    $this->accelerators = $accelerators;
  }
  /** @return Accelerator[] */
  public function getAccelerators()
  {
    return $this->accelerators;
  }
  /** @param string */
  public function setApiEndpoint($apiEndpoint)
  {
    $this->apiEndpoint = $apiEndpoint;
  }
  /** @return string */
  public function getApiEndpoint()
  {
    return $this->apiEndpoint;
  }
  /** @param Version[] */
  public function setAvailableVersion($availableVersion)
  {
    $this->availableVersion = $availableVersion;
  }
  /** @return Version[] */
  public function getAvailableVersion()
  {
    return $this->availableVersion;
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
  /** @param CryptoKeyConfig */
  public function setCryptoKeyConfig(CryptoKeyConfig $cryptoKeyConfig)
  {
    $this->cryptoKeyConfig = $cryptoKeyConfig;
  }
  /** @return CryptoKeyConfig */
  public function getCryptoKeyConfig()
  {
    return $this->cryptoKeyConfig;
  }
  /** @param string */
  public function setDataprocServiceAccount($dataprocServiceAccount)
  {
    $this->dataprocServiceAccount = $dataprocServiceAccount;
  }
  /** @return string */
  public function getDataprocServiceAccount()
  {
    return $this->dataprocServiceAccount;
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
  public function setDisabledReason($disabledReason)
  {
    $this->disabledReason = $disabledReason;
  }
  /** @return string[] */
  public function getDisabledReason()
  {
    return $this->disabledReason;
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
  /** @param bool */
  public function setEnableRbac($enableRbac)
  {
    $this->enableRbac = $enableRbac;
  }
  /** @return bool */
  public function getEnableRbac()
  {
    return $this->enableRbac;
  }
  /** @param bool */
  public function setEnableStackdriverLogging($enableStackdriverLogging)
  {
    $this->enableStackdriverLogging = $enableStackdriverLogging;
  }
  /** @return bool */
  public function getEnableStackdriverLogging()
  {
    return $this->enableStackdriverLogging;
  }
  /** @param bool */
  public function setEnableStackdriverMonitoring($enableStackdriverMonitoring)
  {
    $this->enableStackdriverMonitoring = $enableStackdriverMonitoring;
  }
  /** @return bool */
  public function getEnableStackdriverMonitoring()
  {
    return $this->enableStackdriverMonitoring;
  }
  /** @param EventPublishConfig */
  public function setEventPublishConfig(EventPublishConfig $eventPublishConfig)
  {
    $this->eventPublishConfig = $eventPublishConfig;
  }
  /** @return EventPublishConfig */
  public function getEventPublishConfig()
  {
    return $this->eventPublishConfig;
  }
  /** @param string */
  public function setGcsBucket($gcsBucket)
  {
    $this->gcsBucket = $gcsBucket;
  }
  /** @return string */
  public function getGcsBucket()
  {
    return $this->gcsBucket;
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
  /** @param string[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return string[] */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param string */
  public function setP4ServiceAccount($p4ServiceAccount)
  {
    $this->p4ServiceAccount = $p4ServiceAccount;
  }
  /** @return string */
  public function getP4ServiceAccount()
  {
    return $this->p4ServiceAccount;
  }
  /** @param bool */
  public function setPrivateInstance($privateInstance)
  {
    $this->privateInstance = $privateInstance;
  }
  /** @return bool */
  public function getPrivateInstance()
  {
    return $this->privateInstance;
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
  public function setServiceEndpoint($serviceEndpoint)
  {
    $this->serviceEndpoint = $serviceEndpoint;
  }
  /** @return string */
  public function getServiceEndpoint()
  {
    return $this->serviceEndpoint;
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
  public function setTenantProjectId($tenantProjectId)
  {
    $this->tenantProjectId = $tenantProjectId;
  }
  /** @return string */
  public function getTenantProjectId()
  {
    return $this->tenantProjectId;
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
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
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

class ListAvailableVersionsResponse extends \Google\Collection
{
  /** @var Version[] */
  public $availableVersions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'availableVersions';
  protected $availableVersionsType = Version::class;
  protected $availableVersionsDataType = 'array';
  /** @param Version[] */
  public function setAvailableVersions($availableVersions)
  {
    $this->availableVersions = $availableVersions;
  }
  /** @return Version[] */
  public function getAvailableVersions()
  {
    return $this->availableVersions;
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

class ListDnsPeeringsResponse extends \Google\Collection
{
  /** @var DnsPeering[] */
  public $dnsPeerings;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dnsPeerings';
  protected $dnsPeeringsType = DnsPeering::class;
  protected $dnsPeeringsDataType = 'array';
  /** @param DnsPeering[] */
  public function setDnsPeerings($dnsPeerings)
  {
    $this->dnsPeerings = $dnsPeerings;
  }
  /** @return DnsPeering[] */
  public function getDnsPeerings()
  {
    return $this->dnsPeerings;
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

class NetworkConfig extends \Google\Model
{
  /** @var string */
  public $ipAllocation;
  /** @var string */
  public $network;

  /** @param string */
  public function setIpAllocation($ipAllocation)
  {
    $this->ipAllocation = $ipAllocation;
  }
  /** @return string */
  public function getIpAllocation()
  {
    return $this->ipAllocation;
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
  /** @var string[] */
  public $additionalStatus;
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusDetail;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string[] */
  public function setAdditionalStatus($additionalStatus)
  {
    $this->additionalStatus = $additionalStatus;
  }
  /** @return string[] */
  public function getAdditionalStatus()
  {
    return $this->additionalStatus;
  }
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

class RestartInstanceRequest extends \Google\Model
{
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

class Version extends \Google\Collection
{
  /** @var string[] */
  public $availableFeatures;
  /** @var bool */
  public $defaultVersion;
  /** @var string */
  public $type;
  /** @var string */
  public $versionNumber;
  protected $collection_key = 'availableFeatures';
  /** @param string[] */
  public function setAvailableFeatures($availableFeatures)
  {
    $this->availableFeatures = $availableFeatures;
  }
  /** @return string[] */
  public function getAvailableFeatures()
  {
    return $this->availableFeatures;
  }
  /** @param bool */
  public function setDefaultVersion($defaultVersion)
  {
    $this->defaultVersion = $defaultVersion;
  }
  /** @return bool */
  public function getDefaultVersion()
  {
    return $this->defaultVersion;
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
  public function setVersionNumber($versionNumber)
  {
    $this->versionNumber = $versionNumber;
  }
  /** @return string */
  public function getVersionNumber()
  {
    return $this->versionNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Accelerator::class, 'Google_Service_DataFusion_Accelerator');
class_alias(AuditConfig::class, 'Google_Service_DataFusion_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_DataFusion_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_DataFusion_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_DataFusion_CancelOperationRequest');
class_alias(CryptoKeyConfig::class, 'Google_Service_DataFusion_CryptoKeyConfig');
class_alias(DatafusionEmpty::class, 'Google_Service_DataFusion_DatafusionEmpty');
class_alias(DnsPeering::class, 'Google_Service_DataFusion_DnsPeering');
class_alias(EventPublishConfig::class, 'Google_Service_DataFusion_EventPublishConfig');
class_alias(Expr::class, 'Google_Service_DataFusion_Expr');
class_alias(Instance::class, 'Google_Service_DataFusion_Instance');
class_alias(ListAvailableVersionsResponse::class, 'Google_Service_DataFusion_ListAvailableVersionsResponse');
class_alias(ListDnsPeeringsResponse::class, 'Google_Service_DataFusion_ListDnsPeeringsResponse');
class_alias(ListInstancesResponse::class, 'Google_Service_DataFusion_ListInstancesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_DataFusion_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_DataFusion_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_DataFusion_Location');
class_alias(NetworkConfig::class, 'Google_Service_DataFusion_NetworkConfig');
class_alias(Operation::class, 'Google_Service_DataFusion_Operation');
class_alias(OperationMetadata::class, 'Google_Service_DataFusion_OperationMetadata');
class_alias(Policy::class, 'Google_Service_DataFusion_Policy');
class_alias(RestartInstanceRequest::class, 'Google_Service_DataFusion_RestartInstanceRequest');
class_alias(SetIamPolicyRequest::class, 'Google_Service_DataFusion_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_DataFusion_Status');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_DataFusion_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_DataFusion_TestIamPermissionsResponse');
class_alias(Version::class, 'Google_Service_DataFusion_Version');
