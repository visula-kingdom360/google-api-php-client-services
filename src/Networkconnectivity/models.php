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

namespace Google\Service\Networkconnectivity;

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

class Hub extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var RoutingVPC[] */
  public $routingVpcs;
  /** @var string */
  public $state;
  /** @var string */
  public $uniqueId;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'routingVpcs';
  protected $routingVpcsType = RoutingVPC::class;
  protected $routingVpcsDataType = 'array';
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
  /** @param RoutingVPC[] */
  public function setRoutingVpcs($routingVpcs)
  {
    $this->routingVpcs = $routingVpcs;
  }
  /** @return RoutingVPC[] */
  public function getRoutingVpcs()
  {
    return $this->routingVpcs;
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
  public function setUniqueId($uniqueId)
  {
    $this->uniqueId = $uniqueId;
  }
  /** @return string */
  public function getUniqueId()
  {
    return $this->uniqueId;
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

class InternalRange extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $ipCidrRange;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $network;
  /** @var string[] */
  public $overlaps;
  /** @var string */
  public $peering;
  /** @var int */
  public $prefixLength;
  /** @var string[] */
  public $targetCidrRange;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $usage;
  /** @var string[] */
  public $users;
  protected $collection_key = 'users';
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
  public function setIpCidrRange($ipCidrRange)
  {
    $this->ipCidrRange = $ipCidrRange;
  }
  /** @return string */
  public function getIpCidrRange()
  {
    return $this->ipCidrRange;
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
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param string[] */
  public function setOverlaps($overlaps)
  {
    $this->overlaps = $overlaps;
  }
  /** @return string[] */
  public function getOverlaps()
  {
    return $this->overlaps;
  }
  /** @param string */
  public function setPeering($peering)
  {
    $this->peering = $peering;
  }
  /** @return string */
  public function getPeering()
  {
    return $this->peering;
  }
  /** @param int */
  public function setPrefixLength($prefixLength)
  {
    $this->prefixLength = $prefixLength;
  }
  /** @return int */
  public function getPrefixLength()
  {
    return $this->prefixLength;
  }
  /** @param string[] */
  public function setTargetCidrRange($targetCidrRange)
  {
    $this->targetCidrRange = $targetCidrRange;
  }
  /** @return string[] */
  public function getTargetCidrRange()
  {
    return $this->targetCidrRange;
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
  public function setUsage($usage)
  {
    $this->usage = $usage;
  }
  /** @return string */
  public function getUsage()
  {
    return $this->usage;
  }
  /** @param string[] */
  public function setUsers($users)
  {
    $this->users = $users;
  }
  /** @return string[] */
  public function getUsers()
  {
    return $this->users;
  }
}

class LinkedInterconnectAttachments extends \Google\Collection
{
  /** @var bool */
  public $siteToSiteDataTransfer;
  /** @var string[] */
  public $uris;
  /** @var string */
  public $vpcNetwork;
  protected $collection_key = 'uris';
  /** @param bool */
  public function setSiteToSiteDataTransfer($siteToSiteDataTransfer)
  {
    $this->siteToSiteDataTransfer = $siteToSiteDataTransfer;
  }
  /** @return bool */
  public function getSiteToSiteDataTransfer()
  {
    return $this->siteToSiteDataTransfer;
  }
  /** @param string[] */
  public function setUris($uris)
  {
    $this->uris = $uris;
  }
  /** @return string[] */
  public function getUris()
  {
    return $this->uris;
  }
  /** @param string */
  public function setVpcNetwork($vpcNetwork)
  {
    $this->vpcNetwork = $vpcNetwork;
  }
  /** @return string */
  public function getVpcNetwork()
  {
    return $this->vpcNetwork;
  }
}

class LinkedRouterApplianceInstances extends \Google\Collection
{
  /** @var RouterApplianceInstance[] */
  public $instances;
  /** @var bool */
  public $siteToSiteDataTransfer;
  /** @var string */
  public $vpcNetwork;
  protected $collection_key = 'instances';
  protected $instancesType = RouterApplianceInstance::class;
  protected $instancesDataType = 'array';
  /** @param RouterApplianceInstance[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return RouterApplianceInstance[] */
  public function getInstances()
  {
    return $this->instances;
  }
  /** @param bool */
  public function setSiteToSiteDataTransfer($siteToSiteDataTransfer)
  {
    $this->siteToSiteDataTransfer = $siteToSiteDataTransfer;
  }
  /** @return bool */
  public function getSiteToSiteDataTransfer()
  {
    return $this->siteToSiteDataTransfer;
  }
  /** @param string */
  public function setVpcNetwork($vpcNetwork)
  {
    $this->vpcNetwork = $vpcNetwork;
  }
  /** @return string */
  public function getVpcNetwork()
  {
    return $this->vpcNetwork;
  }
}

class LinkedVpnTunnels extends \Google\Collection
{
  /** @var bool */
  public $siteToSiteDataTransfer;
  /** @var string[] */
  public $uris;
  /** @var string */
  public $vpcNetwork;
  protected $collection_key = 'uris';
  /** @param bool */
  public function setSiteToSiteDataTransfer($siteToSiteDataTransfer)
  {
    $this->siteToSiteDataTransfer = $siteToSiteDataTransfer;
  }
  /** @return bool */
  public function getSiteToSiteDataTransfer()
  {
    return $this->siteToSiteDataTransfer;
  }
  /** @param string[] */
  public function setUris($uris)
  {
    $this->uris = $uris;
  }
  /** @return string[] */
  public function getUris()
  {
    return $this->uris;
  }
  /** @param string */
  public function setVpcNetwork($vpcNetwork)
  {
    $this->vpcNetwork = $vpcNetwork;
  }
  /** @return string */
  public function getVpcNetwork()
  {
    return $this->vpcNetwork;
  }
}

class ListHubsResponse extends \Google\Collection
{
  /** @var Hub[] */
  public $hubs;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $hubsType = Hub::class;
  protected $hubsDataType = 'array';
  /** @param Hub[] */
  public function setHubs($hubs)
  {
    $this->hubs = $hubs;
  }
  /** @return Hub[] */
  public function getHubs()
  {
    return $this->hubs;
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

class ListInternalRangesResponse extends \Google\Collection
{
  /** @var InternalRange[] */
  public $internalRanges;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $internalRangesType = InternalRange::class;
  protected $internalRangesDataType = 'array';
  /** @param InternalRange[] */
  public function setInternalRanges($internalRanges)
  {
    $this->internalRanges = $internalRanges;
  }
  /** @return InternalRange[] */
  public function getInternalRanges()
  {
    return $this->internalRanges;
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

class ListSpokesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Spoke[] */
  public $spokes;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $spokesType = Spoke::class;
  protected $spokesDataType = 'array';
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
  /** @param Spoke[] */
  public function setSpokes($spokes)
  {
    $this->spokes = $spokes;
  }
  /** @return Spoke[] */
  public function getSpokes()
  {
    return $this->spokes;
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

class LocationMetadata extends \Google\Collection
{
  /** @var string[] */
  public $locationFeatures;
  protected $collection_key = 'locationFeatures';
  /** @param string[] */
  public function setLocationFeatures($locationFeatures)
  {
    $this->locationFeatures = $locationFeatures;
  }
  /** @return string[] */
  public function getLocationFeatures()
  {
    return $this->locationFeatures;
  }
}

class NetworkconnectivityEmpty extends \Google\Model
{
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

class RouterApplianceInstance extends \Google\Model
{
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $virtualMachine;

  /** @param string */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /** @return string */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /** @param string */
  public function setVirtualMachine($virtualMachine)
  {
    $this->virtualMachine = $virtualMachine;
  }
  /** @return string */
  public function getVirtualMachine()
  {
    return $this->virtualMachine;
  }
}

class RoutingVPC extends \Google\Model
{
  /** @var bool */
  public $requiredForNewSiteToSiteDataTransferSpokes;
  /** @var string */
  public $uri;

  /** @param bool */
  public function setRequiredForNewSiteToSiteDataTransferSpokes($requiredForNewSiteToSiteDataTransferSpokes)
  {
    $this->requiredForNewSiteToSiteDataTransferSpokes = $requiredForNewSiteToSiteDataTransferSpokes;
  }
  /** @return bool */
  public function getRequiredForNewSiteToSiteDataTransferSpokes()
  {
    return $this->requiredForNewSiteToSiteDataTransferSpokes;
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

class Spoke extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $hub;
  /** @var string[] */
  public $labels;
  /** @var LinkedInterconnectAttachments */
  public $linkedInterconnectAttachments;
  /** @var LinkedRouterApplianceInstances */
  public $linkedRouterApplianceInstances;
  /** @var LinkedVpnTunnels */
  public $linkedVpnTunnels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $uniqueId;
  /** @var string */
  public $updateTime;
  protected $linkedInterconnectAttachmentsType = LinkedInterconnectAttachments::class;
  protected $linkedInterconnectAttachmentsDataType = '';
  protected $linkedRouterApplianceInstancesType = LinkedRouterApplianceInstances::class;
  protected $linkedRouterApplianceInstancesDataType = '';
  protected $linkedVpnTunnelsType = LinkedVpnTunnels::class;
  protected $linkedVpnTunnelsDataType = '';
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
  public function setHub($hub)
  {
    $this->hub = $hub;
  }
  /** @return string */
  public function getHub()
  {
    return $this->hub;
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
  /** @param LinkedInterconnectAttachments */
  public function setLinkedInterconnectAttachments(LinkedInterconnectAttachments $linkedInterconnectAttachments)
  {
    $this->linkedInterconnectAttachments = $linkedInterconnectAttachments;
  }
  /** @return LinkedInterconnectAttachments */
  public function getLinkedInterconnectAttachments()
  {
    return $this->linkedInterconnectAttachments;
  }
  /** @param LinkedRouterApplianceInstances */
  public function setLinkedRouterApplianceInstances(LinkedRouterApplianceInstances $linkedRouterApplianceInstances)
  {
    $this->linkedRouterApplianceInstances = $linkedRouterApplianceInstances;
  }
  /** @return LinkedRouterApplianceInstances */
  public function getLinkedRouterApplianceInstances()
  {
    return $this->linkedRouterApplianceInstances;
  }
  /** @param LinkedVpnTunnels */
  public function setLinkedVpnTunnels(LinkedVpnTunnels $linkedVpnTunnels)
  {
    $this->linkedVpnTunnels = $linkedVpnTunnels;
  }
  /** @return LinkedVpnTunnels */
  public function getLinkedVpnTunnels()
  {
    return $this->linkedVpnTunnels;
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
  public function setUniqueId($uniqueId)
  {
    $this->uniqueId = $uniqueId;
  }
  /** @return string */
  public function getUniqueId()
  {
    return $this->uniqueId;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditConfig::class, 'Google_Service_Networkconnectivity_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_Networkconnectivity_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_Networkconnectivity_Binding');
class_alias(Expr::class, 'Google_Service_Networkconnectivity_Expr');
class_alias(GoogleLongrunningCancelOperationRequest::class, 'Google_Service_Networkconnectivity_GoogleLongrunningCancelOperationRequest');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_Networkconnectivity_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_Networkconnectivity_GoogleLongrunningOperation');
class_alias(GoogleRpcStatus::class, 'Google_Service_Networkconnectivity_GoogleRpcStatus');
class_alias(Hub::class, 'Google_Service_Networkconnectivity_Hub');
class_alias(InternalRange::class, 'Google_Service_Networkconnectivity_InternalRange');
class_alias(LinkedInterconnectAttachments::class, 'Google_Service_Networkconnectivity_LinkedInterconnectAttachments');
class_alias(LinkedRouterApplianceInstances::class, 'Google_Service_Networkconnectivity_LinkedRouterApplianceInstances');
class_alias(LinkedVpnTunnels::class, 'Google_Service_Networkconnectivity_LinkedVpnTunnels');
class_alias(ListHubsResponse::class, 'Google_Service_Networkconnectivity_ListHubsResponse');
class_alias(ListInternalRangesResponse::class, 'Google_Service_Networkconnectivity_ListInternalRangesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_Networkconnectivity_ListLocationsResponse');
class_alias(ListSpokesResponse::class, 'Google_Service_Networkconnectivity_ListSpokesResponse');
class_alias(Location::class, 'Google_Service_Networkconnectivity_Location');
class_alias(LocationMetadata::class, 'Google_Service_Networkconnectivity_LocationMetadata');
class_alias(NetworkconnectivityEmpty::class, 'Google_Service_Networkconnectivity_NetworkconnectivityEmpty');
class_alias(OperationMetadata::class, 'Google_Service_Networkconnectivity_OperationMetadata');
class_alias(Policy::class, 'Google_Service_Networkconnectivity_Policy');
class_alias(RouterApplianceInstance::class, 'Google_Service_Networkconnectivity_RouterApplianceInstance');
class_alias(RoutingVPC::class, 'Google_Service_Networkconnectivity_RoutingVPC');
class_alias(SetIamPolicyRequest::class, 'Google_Service_Networkconnectivity_SetIamPolicyRequest');
class_alias(Spoke::class, 'Google_Service_Networkconnectivity_Spoke');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_Networkconnectivity_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_Networkconnectivity_TestIamPermissionsResponse');
