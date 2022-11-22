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

namespace Google\Service\Eventarc;

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

class Channel extends \Google\Model
{
  /** @var string */
  public $activationToken;
  /** @var string */
  public $createTime;
  /** @var string */
  public $cryptoKeyName;
  /** @var string */
  public $name;
  /** @var string */
  public $provider;
  /** @var string */
  public $pubsubTopic;
  /** @var string */
  public $state;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setActivationToken($activationToken)
  {
    $this->activationToken = $activationToken;
  }
  /** @return string */
  public function getActivationToken()
  {
    return $this->activationToken;
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
  public function setCryptoKeyName($cryptoKeyName)
  {
    $this->cryptoKeyName = $cryptoKeyName;
  }
  /** @return string */
  public function getCryptoKeyName()
  {
    return $this->cryptoKeyName;
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
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  /** @return string */
  public function getProvider()
  {
    return $this->provider;
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

class ChannelConnection extends \Google\Model
{
  /** @var string */
  public $activationToken;
  /** @var string */
  public $channel;
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setActivationToken($activationToken)
  {
    $this->activationToken = $activationToken;
  }
  /** @return string */
  public function getActivationToken()
  {
    return $this->activationToken;
  }
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

class CloudRun extends \Google\Model
{
  /** @var string */
  public $path;
  /** @var string */
  public $region;
  /** @var string */
  public $service;

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

class Destination extends \Google\Model
{
  /** @var string */
  public $cloudFunction;
  /** @var CloudRun */
  public $cloudRun;
  /** @var GKE */
  public $gke;
  /** @var string */
  public $workflow;
  protected $cloudRunType = CloudRun::class;
  protected $cloudRunDataType = '';
  protected $gkeType = GKE::class;
  protected $gkeDataType = '';
  /** @param string */
  public function setCloudFunction($cloudFunction)
  {
    $this->cloudFunction = $cloudFunction;
  }
  /** @return string */
  public function getCloudFunction()
  {
    return $this->cloudFunction;
  }
  /** @param CloudRun */
  public function setCloudRun(CloudRun $cloudRun)
  {
    $this->cloudRun = $cloudRun;
  }
  /** @return CloudRun */
  public function getCloudRun()
  {
    return $this->cloudRun;
  }
  /** @param GKE */
  public function setGke(GKE $gke)
  {
    $this->gke = $gke;
  }
  /** @return GKE */
  public function getGke()
  {
    return $this->gke;
  }
  /** @param string */
  public function setWorkflow($workflow)
  {
    $this->workflow = $workflow;
  }
  /** @return string */
  public function getWorkflow()
  {
    return $this->workflow;
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

class EventType extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $eventSchemaUri;
  /** @var FilteringAttribute[] */
  public $filteringAttributes;
  /** @var string */
  public $type;
  protected $collection_key = 'filteringAttributes';
  protected $filteringAttributesType = FilteringAttribute::class;
  protected $filteringAttributesDataType = 'array';
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
  public function setEventSchemaUri($eventSchemaUri)
  {
    $this->eventSchemaUri = $eventSchemaUri;
  }
  /** @return string */
  public function getEventSchemaUri()
  {
    return $this->eventSchemaUri;
  }
  /** @param FilteringAttribute[] */
  public function setFilteringAttributes($filteringAttributes)
  {
    $this->filteringAttributes = $filteringAttributes;
  }
  /** @return FilteringAttribute[] */
  public function getFilteringAttributes()
  {
    return $this->filteringAttributes;
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

class EventarcEmpty extends \Google\Model
{
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

class FilteringAttribute extends \Google\Model
{
  /** @var string */
  public $attribute;
  /** @var string */
  public $description;
  /** @var bool */
  public $pathPatternSupported;
  /** @var bool */
  public $required;

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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param bool */
  public function setPathPatternSupported($pathPatternSupported)
  {
    $this->pathPatternSupported = $pathPatternSupported;
  }
  /** @return bool */
  public function getPathPatternSupported()
  {
    return $this->pathPatternSupported;
  }
  /** @param bool */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /** @return bool */
  public function getRequired()
  {
    return $this->required;
  }
}

class GKE extends \Google\Model
{
  /** @var string */
  public $cluster;
  /** @var string */
  public $location;
  /** @var string */
  public $namespace;
  /** @var string */
  public $path;
  /** @var string */
  public $service;

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
  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }
  /** @return string */
  public function getNamespace()
  {
    return $this->namespace;
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

class GoogleChannelConfig extends \Google\Model
{
  /** @var string */
  public $cryptoKeyName;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setCryptoKeyName($cryptoKeyName)
  {
    $this->cryptoKeyName = $cryptoKeyName;
  }
  /** @return string */
  public function getCryptoKeyName()
  {
    return $this->cryptoKeyName;
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

class ListChannelConnectionsResponse extends \Google\Collection
{
  /** @var ChannelConnection[] */
  public $channelConnections;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $channelConnectionsType = ChannelConnection::class;
  protected $channelConnectionsDataType = 'array';
  /** @param ChannelConnection[] */
  public function setChannelConnections($channelConnections)
  {
    $this->channelConnections = $channelConnections;
  }
  /** @return ChannelConnection[] */
  public function getChannelConnections()
  {
    return $this->channelConnections;
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

class ListChannelsResponse extends \Google\Collection
{
  /** @var Channel[] */
  public $channels;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $channelsType = Channel::class;
  protected $channelsDataType = 'array';
  /** @param Channel[] */
  public function setChannels($channels)
  {
    $this->channels = $channels;
  }
  /** @return Channel[] */
  public function getChannels()
  {
    return $this->channels;
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

class ListProvidersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Provider[] */
  public $providers;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $providersType = Provider::class;
  protected $providersDataType = 'array';
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
  /** @param Provider[] */
  public function setProviders($providers)
  {
    $this->providers = $providers;
  }
  /** @return Provider[] */
  public function getProviders()
  {
    return $this->providers;
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

class ListTriggersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Trigger[] */
  public $triggers;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $triggersType = Trigger::class;
  protected $triggersDataType = 'array';
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
  /** @param Trigger[] */
  public function setTriggers($triggers)
  {
    $this->triggers = $triggers;
  }
  /** @return Trigger[] */
  public function getTriggers()
  {
    return $this->triggers;
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

class Provider extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var EventType[] */
  public $eventTypes;
  /** @var string */
  public $name;
  protected $collection_key = 'eventTypes';
  protected $eventTypesType = EventType::class;
  protected $eventTypesDataType = 'array';
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
  /** @param EventType[] */
  public function setEventTypes($eventTypes)
  {
    $this->eventTypes = $eventTypes;
  }
  /** @return EventType[] */
  public function getEventTypes()
  {
    return $this->eventTypes;
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

class Pubsub extends \Google\Model
{
  /** @var string */
  public $subscription;
  /** @var string */
  public $topic;

  /** @param string */
  public function setSubscription($subscription)
  {
    $this->subscription = $subscription;
  }
  /** @return string */
  public function getSubscription()
  {
    return $this->subscription;
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

class StateCondition extends \Google\Model
{
  /** @var string */
  public $code;
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

class Transport extends \Google\Model
{
  /** @var Pubsub */
  public $pubsub;
  protected $pubsubType = Pubsub::class;
  protected $pubsubDataType = '';
  /** @param Pubsub */
  public function setPubsub(Pubsub $pubsub)
  {
    $this->pubsub = $pubsub;
  }
  /** @return Pubsub */
  public function getPubsub()
  {
    return $this->pubsub;
  }
}

class Trigger extends \Google\Collection
{
  /** @var string */
  public $channel;
  /** @var StateCondition[] */
  public $conditions;
  /** @var string */
  public $createTime;
  /** @var Destination */
  public $destination;
  /** @var string */
  public $etag;
  /** @var EventFilter[] */
  public $eventFilters;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $serviceAccount;
  /** @var Transport */
  public $transport;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'eventFilters';
  protected $conditionsType = StateCondition::class;
  protected $conditionsDataType = 'map';
  protected $destinationType = Destination::class;
  protected $destinationDataType = '';
  protected $eventFiltersType = EventFilter::class;
  protected $eventFiltersDataType = 'array';
  protected $transportType = Transport::class;
  protected $transportDataType = '';
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
  /** @param StateCondition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return StateCondition[] */
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
  /** @param Destination */
  public function setDestination(Destination $destination)
  {
    $this->destination = $destination;
  }
  /** @return Destination */
  public function getDestination()
  {
    return $this->destination;
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
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /** @param Transport */
  public function setTransport(Transport $transport)
  {
    $this->transport = $transport;
  }
  /** @return Transport */
  public function getTransport()
  {
    return $this->transport;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditConfig::class, 'Google_Service_Eventarc_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_Eventarc_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_Eventarc_Binding');
class_alias(Channel::class, 'Google_Service_Eventarc_Channel');
class_alias(ChannelConnection::class, 'Google_Service_Eventarc_ChannelConnection');
class_alias(CloudRun::class, 'Google_Service_Eventarc_CloudRun');
class_alias(Destination::class, 'Google_Service_Eventarc_Destination');
class_alias(EventFilter::class, 'Google_Service_Eventarc_EventFilter');
class_alias(EventType::class, 'Google_Service_Eventarc_EventType');
class_alias(EventarcEmpty::class, 'Google_Service_Eventarc_EventarcEmpty');
class_alias(Expr::class, 'Google_Service_Eventarc_Expr');
class_alias(FilteringAttribute::class, 'Google_Service_Eventarc_FilteringAttribute');
class_alias(GKE::class, 'Google_Service_Eventarc_GKE');
class_alias(GoogleChannelConfig::class, 'Google_Service_Eventarc_GoogleChannelConfig');
class_alias(GoogleLongrunningCancelOperationRequest::class, 'Google_Service_Eventarc_GoogleLongrunningCancelOperationRequest');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_Eventarc_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_Eventarc_GoogleLongrunningOperation');
class_alias(GoogleRpcStatus::class, 'Google_Service_Eventarc_GoogleRpcStatus');
class_alias(ListChannelConnectionsResponse::class, 'Google_Service_Eventarc_ListChannelConnectionsResponse');
class_alias(ListChannelsResponse::class, 'Google_Service_Eventarc_ListChannelsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_Eventarc_ListLocationsResponse');
class_alias(ListProvidersResponse::class, 'Google_Service_Eventarc_ListProvidersResponse');
class_alias(ListTriggersResponse::class, 'Google_Service_Eventarc_ListTriggersResponse');
class_alias(Location::class, 'Google_Service_Eventarc_Location');
class_alias(OperationMetadata::class, 'Google_Service_Eventarc_OperationMetadata');
class_alias(Policy::class, 'Google_Service_Eventarc_Policy');
class_alias(Provider::class, 'Google_Service_Eventarc_Provider');
class_alias(Pubsub::class, 'Google_Service_Eventarc_Pubsub');
class_alias(SetIamPolicyRequest::class, 'Google_Service_Eventarc_SetIamPolicyRequest');
class_alias(StateCondition::class, 'Google_Service_Eventarc_StateCondition');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_Eventarc_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_Eventarc_TestIamPermissionsResponse');
class_alias(Transport::class, 'Google_Service_Eventarc_Transport');
class_alias(Trigger::class, 'Google_Service_Eventarc_Trigger');
