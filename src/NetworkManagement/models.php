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

namespace Google\Service\NetworkManagement;

class AbortInfo extends \Google\Collection
{
  /** @var string */
  public $cause;
  /** @var string[] */
  public $projectsMissingPermission;
  /** @var string */
  public $resourceUri;
  protected $collection_key = 'projectsMissingPermission';
  /** @param string */
  public function setCause($cause)
  {
    $this->cause = $cause;
  }
  /** @return string */
  public function getCause()
  {
    return $this->cause;
  }
  /** @param string[] */
  public function setProjectsMissingPermission($projectsMissingPermission)
  {
    $this->projectsMissingPermission = $projectsMissingPermission;
  }
  /** @return string[] */
  public function getProjectsMissingPermission()
  {
    return $this->projectsMissingPermission;
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

class CloudFunctionEndpoint extends \Google\Model
{
  /** @var string */
  public $uri;

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

class CloudFunctionInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $location;
  /** @var string */
  public $uri;
  /** @var string */
  public $versionId;

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

class CloudSQLInstanceInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $externalIp;
  /** @var string */
  public $internalIp;
  /** @var string */
  public $networkUri;
  /** @var string */
  public $region;
  /** @var string */
  public $uri;

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
  public function setExternalIp($externalIp)
  {
    $this->externalIp = $externalIp;
  }
  /** @return string */
  public function getExternalIp()
  {
    return $this->externalIp;
  }
  /** @param string */
  public function setInternalIp($internalIp)
  {
    $this->internalIp = $internalIp;
  }
  /** @return string */
  public function getInternalIp()
  {
    return $this->internalIp;
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

class ConnectivityTest extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var Endpoint */
  public $destination;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $protocol;
  /** @var ReachabilityDetails */
  public $reachabilityDetails;
  /** @var string[] */
  public $relatedProjects;
  /** @var Endpoint */
  public $source;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'relatedProjects';
  protected $destinationType = Endpoint::class;
  protected $destinationDataType = '';
  protected $reachabilityDetailsType = ReachabilityDetails::class;
  protected $reachabilityDetailsDataType = '';
  protected $sourceType = Endpoint::class;
  protected $sourceDataType = '';
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
  /** @param Endpoint */
  public function setDestination(Endpoint $destination)
  {
    $this->destination = $destination;
  }
  /** @return Endpoint */
  public function getDestination()
  {
    return $this->destination;
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
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /** @return string */
  public function getProtocol()
  {
    return $this->protocol;
  }
  /** @param ReachabilityDetails */
  public function setReachabilityDetails(ReachabilityDetails $reachabilityDetails)
  {
    $this->reachabilityDetails = $reachabilityDetails;
  }
  /** @return ReachabilityDetails */
  public function getReachabilityDetails()
  {
    return $this->reachabilityDetails;
  }
  /** @param string[] */
  public function setRelatedProjects($relatedProjects)
  {
    $this->relatedProjects = $relatedProjects;
  }
  /** @return string[] */
  public function getRelatedProjects()
  {
    return $this->relatedProjects;
  }
  /** @param Endpoint */
  public function setSource(Endpoint $source)
  {
    $this->source = $source;
  }
  /** @return Endpoint */
  public function getSource()
  {
    return $this->source;
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

class DeliverInfo extends \Google\Model
{
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $target;

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
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
}

class DropInfo extends \Google\Model
{
  /** @var string */
  public $cause;
  /** @var string */
  public $resourceUri;

  /** @param string */
  public function setCause($cause)
  {
    $this->cause = $cause;
  }
  /** @return string */
  public function getCause()
  {
    return $this->cause;
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
}

class Endpoint extends \Google\Model
{
  /** @var CloudFunctionEndpoint */
  public $cloudFunction;
  /** @var string */
  public $cloudSqlInstance;
  /** @var string */
  public $gkeMasterCluster;
  /** @var string */
  public $instance;
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $network;
  /** @var string */
  public $networkType;
  /** @var int */
  public $port;
  /** @var string */
  public $projectId;
  protected $cloudFunctionType = CloudFunctionEndpoint::class;
  protected $cloudFunctionDataType = '';
  /** @param CloudFunctionEndpoint */
  public function setCloudFunction(CloudFunctionEndpoint $cloudFunction)
  {
    $this->cloudFunction = $cloudFunction;
  }
  /** @return CloudFunctionEndpoint */
  public function getCloudFunction()
  {
    return $this->cloudFunction;
  }
  /** @param string */
  public function setCloudSqlInstance($cloudSqlInstance)
  {
    $this->cloudSqlInstance = $cloudSqlInstance;
  }
  /** @return string */
  public function getCloudSqlInstance()
  {
    return $this->cloudSqlInstance;
  }
  /** @param string */
  public function setGkeMasterCluster($gkeMasterCluster)
  {
    $this->gkeMasterCluster = $gkeMasterCluster;
  }
  /** @return string */
  public function getGkeMasterCluster()
  {
    return $this->gkeMasterCluster;
  }
  /** @param string */
  public function setInstance($instance)
  {
    $this->instance = $instance;
  }
  /** @return string */
  public function getInstance()
  {
    return $this->instance;
  }
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
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param string */
  public function setNetworkType($networkType)
  {
    $this->networkType = $networkType;
  }
  /** @return string */
  public function getNetworkType()
  {
    return $this->networkType;
  }
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

class EndpointInfo extends \Google\Model
{
  /** @var string */
  public $destinationIp;
  /** @var string */
  public $destinationNetworkUri;
  /** @var int */
  public $destinationPort;
  /** @var string */
  public $protocol;
  /** @var string */
  public $sourceIp;
  /** @var string */
  public $sourceNetworkUri;
  /** @var int */
  public $sourcePort;

  /** @param string */
  public function setDestinationIp($destinationIp)
  {
    $this->destinationIp = $destinationIp;
  }
  /** @return string */
  public function getDestinationIp()
  {
    return $this->destinationIp;
  }
  /** @param string */
  public function setDestinationNetworkUri($destinationNetworkUri)
  {
    $this->destinationNetworkUri = $destinationNetworkUri;
  }
  /** @return string */
  public function getDestinationNetworkUri()
  {
    return $this->destinationNetworkUri;
  }
  /** @param int */
  public function setDestinationPort($destinationPort)
  {
    $this->destinationPort = $destinationPort;
  }
  /** @return int */
  public function getDestinationPort()
  {
    return $this->destinationPort;
  }
  /** @param string */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /** @return string */
  public function getProtocol()
  {
    return $this->protocol;
  }
  /** @param string */
  public function setSourceIp($sourceIp)
  {
    $this->sourceIp = $sourceIp;
  }
  /** @return string */
  public function getSourceIp()
  {
    return $this->sourceIp;
  }
  /** @param string */
  public function setSourceNetworkUri($sourceNetworkUri)
  {
    $this->sourceNetworkUri = $sourceNetworkUri;
  }
  /** @return string */
  public function getSourceNetworkUri()
  {
    return $this->sourceNetworkUri;
  }
  /** @param int */
  public function setSourcePort($sourcePort)
  {
    $this->sourcePort = $sourcePort;
  }
  /** @return int */
  public function getSourcePort()
  {
    return $this->sourcePort;
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

class FirewallInfo extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var string */
  public $direction;
  /** @var string */
  public $displayName;
  /** @var string */
  public $firewallRuleType;
  /** @var string */
  public $networkUri;
  /** @var string */
  public $policy;
  /** @var int */
  public $priority;
  /** @var string[] */
  public $targetServiceAccounts;
  /** @var string[] */
  public $targetTags;
  /** @var string */
  public $uri;
  protected $collection_key = 'targetTags';
  /** @param string */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /** @return string */
  public function getAction()
  {
    return $this->action;
  }
  /** @param string */
  public function setDirection($direction)
  {
    $this->direction = $direction;
  }
  /** @return string */
  public function getDirection()
  {
    return $this->direction;
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
  public function setFirewallRuleType($firewallRuleType)
  {
    $this->firewallRuleType = $firewallRuleType;
  }
  /** @return string */
  public function getFirewallRuleType()
  {
    return $this->firewallRuleType;
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
  public function setPolicy($policy)
  {
    $this->policy = $policy;
  }
  /** @return string */
  public function getPolicy()
  {
    return $this->policy;
  }
  /** @param int */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return int */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string[] */
  public function setTargetServiceAccounts($targetServiceAccounts)
  {
    $this->targetServiceAccounts = $targetServiceAccounts;
  }
  /** @return string[] */
  public function getTargetServiceAccounts()
  {
    return $this->targetServiceAccounts;
  }
  /** @param string[] */
  public function setTargetTags($targetTags)
  {
    $this->targetTags = $targetTags;
  }
  /** @return string[] */
  public function getTargetTags()
  {
    return $this->targetTags;
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

class ForwardInfo extends \Google\Model
{
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $target;

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
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
}

class ForwardingRuleInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $matchedPortRange;
  /** @var string */
  public $matchedProtocol;
  /** @var string */
  public $networkUri;
  /** @var string */
  public $target;
  /** @var string */
  public $uri;
  /** @var string */
  public $vip;

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
  public function setMatchedPortRange($matchedPortRange)
  {
    $this->matchedPortRange = $matchedPortRange;
  }
  /** @return string */
  public function getMatchedPortRange()
  {
    return $this->matchedPortRange;
  }
  /** @param string */
  public function setMatchedProtocol($matchedProtocol)
  {
    $this->matchedProtocol = $matchedProtocol;
  }
  /** @return string */
  public function getMatchedProtocol()
  {
    return $this->matchedProtocol;
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
  public function setVip($vip)
  {
    $this->vip = $vip;
  }
  /** @return string */
  public function getVip()
  {
    return $this->vip;
  }
}

class GKEMasterInfo extends \Google\Model
{
  /** @var string */
  public $clusterNetworkUri;
  /** @var string */
  public $clusterUri;
  /** @var string */
  public $externalIp;
  /** @var string */
  public $internalIp;

  /** @param string */
  public function setClusterNetworkUri($clusterNetworkUri)
  {
    $this->clusterNetworkUri = $clusterNetworkUri;
  }
  /** @return string */
  public function getClusterNetworkUri()
  {
    return $this->clusterNetworkUri;
  }
  /** @param string */
  public function setClusterUri($clusterUri)
  {
    $this->clusterUri = $clusterUri;
  }
  /** @return string */
  public function getClusterUri()
  {
    return $this->clusterUri;
  }
  /** @param string */
  public function setExternalIp($externalIp)
  {
    $this->externalIp = $externalIp;
  }
  /** @return string */
  public function getExternalIp()
  {
    return $this->externalIp;
  }
  /** @param string */
  public function setInternalIp($internalIp)
  {
    $this->internalIp = $internalIp;
  }
  /** @return string */
  public function getInternalIp()
  {
    return $this->internalIp;
  }
}

class InstanceInfo extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $externalIp;
  /** @var string */
  public $interface;
  /** @var string */
  public $internalIp;
  /** @var string[] */
  public $networkTags;
  /** @var string */
  public $networkUri;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $uri;
  protected $collection_key = 'networkTags';
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
  public function setExternalIp($externalIp)
  {
    $this->externalIp = $externalIp;
  }
  /** @return string */
  public function getExternalIp()
  {
    return $this->externalIp;
  }
  /** @param string */
  public function setInterface($interface)
  {
    $this->interface = $interface;
  }
  /** @return string */
  public function getInterface()
  {
    return $this->interface;
  }
  /** @param string */
  public function setInternalIp($internalIp)
  {
    $this->internalIp = $internalIp;
  }
  /** @return string */
  public function getInternalIp()
  {
    return $this->internalIp;
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

class ListConnectivityTestsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ConnectivityTest[] */
  public $resources;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $resourcesType = ConnectivityTest::class;
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
  /** @param ConnectivityTest[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return ConnectivityTest[] */
  public function getResources()
  {
    return $this->resources;
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

class LoadBalancerBackend extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $healthCheckAllowingFirewallRules;
  /** @var string[] */
  public $healthCheckBlockingFirewallRules;
  /** @var string */
  public $healthCheckFirewallState;
  /** @var string */
  public $uri;
  protected $collection_key = 'healthCheckBlockingFirewallRules';
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
  public function setHealthCheckAllowingFirewallRules($healthCheckAllowingFirewallRules)
  {
    $this->healthCheckAllowingFirewallRules = $healthCheckAllowingFirewallRules;
  }
  /** @return string[] */
  public function getHealthCheckAllowingFirewallRules()
  {
    return $this->healthCheckAllowingFirewallRules;
  }
  /** @param string[] */
  public function setHealthCheckBlockingFirewallRules($healthCheckBlockingFirewallRules)
  {
    $this->healthCheckBlockingFirewallRules = $healthCheckBlockingFirewallRules;
  }
  /** @return string[] */
  public function getHealthCheckBlockingFirewallRules()
  {
    return $this->healthCheckBlockingFirewallRules;
  }
  /** @param string */
  public function setHealthCheckFirewallState($healthCheckFirewallState)
  {
    $this->healthCheckFirewallState = $healthCheckFirewallState;
  }
  /** @return string */
  public function getHealthCheckFirewallState()
  {
    return $this->healthCheckFirewallState;
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

class LoadBalancerInfo extends \Google\Collection
{
  /** @var string */
  public $backendType;
  /** @var string */
  public $backendUri;
  /** @var LoadBalancerBackend[] */
  public $backends;
  /** @var string */
  public $healthCheckUri;
  /** @var string */
  public $loadBalancerType;
  protected $collection_key = 'backends';
  protected $backendsType = LoadBalancerBackend::class;
  protected $backendsDataType = 'array';
  /** @param string */
  public function setBackendType($backendType)
  {
    $this->backendType = $backendType;
  }
  /** @return string */
  public function getBackendType()
  {
    return $this->backendType;
  }
  /** @param string */
  public function setBackendUri($backendUri)
  {
    $this->backendUri = $backendUri;
  }
  /** @return string */
  public function getBackendUri()
  {
    return $this->backendUri;
  }
  /** @param LoadBalancerBackend[] */
  public function setBackends($backends)
  {
    $this->backends = $backends;
  }
  /** @return LoadBalancerBackend[] */
  public function getBackends()
  {
    return $this->backends;
  }
  /** @param string */
  public function setHealthCheckUri($healthCheckUri)
  {
    $this->healthCheckUri = $healthCheckUri;
  }
  /** @return string */
  public function getHealthCheckUri()
  {
    return $this->healthCheckUri;
  }
  /** @param string */
  public function setLoadBalancerType($loadBalancerType)
  {
    $this->loadBalancerType = $loadBalancerType;
  }
  /** @return string */
  public function getLoadBalancerType()
  {
    return $this->loadBalancerType;
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

class NetworkInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $matchedIpRange;
  /** @var string */
  public $uri;

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
  public function setMatchedIpRange($matchedIpRange)
  {
    $this->matchedIpRange = $matchedIpRange;
  }
  /** @return string */
  public function getMatchedIpRange()
  {
    return $this->matchedIpRange;
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

class NetworkmanagementEmpty extends \Google\Model
{
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
  /** @var bool */
  public $cancelRequested;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $statusDetail;
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

class ReachabilityDetails extends \Google\Collection
{
  /** @var Status */
  public $error;
  /** @var string */
  public $result;
  /** @var Trace[] */
  public $traces;
  /** @var string */
  public $verifyTime;
  protected $collection_key = 'traces';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $tracesType = Trace::class;
  protected $tracesDataType = 'array';
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
  /** @param string */
  public function setResult($result)
  {
    $this->result = $result;
  }
  /** @return string */
  public function getResult()
  {
    return $this->result;
  }
  /** @param Trace[] */
  public function setTraces($traces)
  {
    $this->traces = $traces;
  }
  /** @return Trace[] */
  public function getTraces()
  {
    return $this->traces;
  }
  /** @param string */
  public function setVerifyTime($verifyTime)
  {
    $this->verifyTime = $verifyTime;
  }
  /** @return string */
  public function getVerifyTime()
  {
    return $this->verifyTime;
  }
}

class RerunConnectivityTestRequest extends \Google\Model
{
}

class RouteInfo extends \Google\Collection
{
  /** @var string */
  public $destIpRange;
  /** @var string[] */
  public $destPortRanges;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $instanceTags;
  /** @var string */
  public $networkUri;
  /** @var string */
  public $nextHop;
  /** @var string */
  public $nextHopType;
  /** @var int */
  public $priority;
  /** @var string[] */
  public $protocols;
  /** @var string */
  public $routeType;
  /** @var string */
  public $srcIpRange;
  /** @var string[] */
  public $srcPortRanges;
  /** @var string */
  public $uri;
  protected $collection_key = 'srcPortRanges';
  /** @param string */
  public function setDestIpRange($destIpRange)
  {
    $this->destIpRange = $destIpRange;
  }
  /** @return string */
  public function getDestIpRange()
  {
    return $this->destIpRange;
  }
  /** @param string[] */
  public function setDestPortRanges($destPortRanges)
  {
    $this->destPortRanges = $destPortRanges;
  }
  /** @return string[] */
  public function getDestPortRanges()
  {
    return $this->destPortRanges;
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
  public function setInstanceTags($instanceTags)
  {
    $this->instanceTags = $instanceTags;
  }
  /** @return string[] */
  public function getInstanceTags()
  {
    return $this->instanceTags;
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
  public function setNextHop($nextHop)
  {
    $this->nextHop = $nextHop;
  }
  /** @return string */
  public function getNextHop()
  {
    return $this->nextHop;
  }
  /** @param string */
  public function setNextHopType($nextHopType)
  {
    $this->nextHopType = $nextHopType;
  }
  /** @return string */
  public function getNextHopType()
  {
    return $this->nextHopType;
  }
  /** @param int */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return int */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string[] */
  public function setProtocols($protocols)
  {
    $this->protocols = $protocols;
  }
  /** @return string[] */
  public function getProtocols()
  {
    return $this->protocols;
  }
  /** @param string */
  public function setRouteType($routeType)
  {
    $this->routeType = $routeType;
  }
  /** @return string */
  public function getRouteType()
  {
    return $this->routeType;
  }
  /** @param string */
  public function setSrcIpRange($srcIpRange)
  {
    $this->srcIpRange = $srcIpRange;
  }
  /** @return string */
  public function getSrcIpRange()
  {
    return $this->srcIpRange;
  }
  /** @param string[] */
  public function setSrcPortRanges($srcPortRanges)
  {
    $this->srcPortRanges = $srcPortRanges;
  }
  /** @return string[] */
  public function getSrcPortRanges()
  {
    return $this->srcPortRanges;
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

class Step extends \Google\Model
{
  /** @var AbortInfo */
  public $abort;
  /** @var bool */
  public $causesDrop;
  /** @var CloudFunctionInfo */
  public $cloudFunction;
  /** @var CloudSQLInstanceInfo */
  public $cloudSqlInstance;
  /** @var DeliverInfo */
  public $deliver;
  /** @var string */
  public $description;
  /** @var DropInfo */
  public $drop;
  /** @var EndpointInfo */
  public $endpoint;
  /** @var FirewallInfo */
  public $firewall;
  /** @var ForwardInfo */
  public $forward;
  /** @var ForwardingRuleInfo */
  public $forwardingRule;
  /** @var GKEMasterInfo */
  public $gkeMaster;
  /** @var InstanceInfo */
  public $instance;
  /** @var LoadBalancerInfo */
  public $loadBalancer;
  /** @var NetworkInfo */
  public $network;
  /** @var string */
  public $projectId;
  /** @var RouteInfo */
  public $route;
  /** @var string */
  public $state;
  /** @var VpcConnectorInfo */
  public $vpcConnector;
  /** @var VpnGatewayInfo */
  public $vpnGateway;
  /** @var VpnTunnelInfo */
  public $vpnTunnel;
  protected $abortType = AbortInfo::class;
  protected $abortDataType = '';
  protected $cloudFunctionType = CloudFunctionInfo::class;
  protected $cloudFunctionDataType = '';
  protected $cloudSqlInstanceType = CloudSQLInstanceInfo::class;
  protected $cloudSqlInstanceDataType = '';
  protected $deliverType = DeliverInfo::class;
  protected $deliverDataType = '';
  protected $dropType = DropInfo::class;
  protected $dropDataType = '';
  protected $endpointType = EndpointInfo::class;
  protected $endpointDataType = '';
  protected $firewallType = FirewallInfo::class;
  protected $firewallDataType = '';
  protected $forwardType = ForwardInfo::class;
  protected $forwardDataType = '';
  protected $forwardingRuleType = ForwardingRuleInfo::class;
  protected $forwardingRuleDataType = '';
  protected $gkeMasterType = GKEMasterInfo::class;
  protected $gkeMasterDataType = '';
  protected $instanceType = InstanceInfo::class;
  protected $instanceDataType = '';
  protected $loadBalancerType = LoadBalancerInfo::class;
  protected $loadBalancerDataType = '';
  protected $networkType = NetworkInfo::class;
  protected $networkDataType = '';
  protected $routeType = RouteInfo::class;
  protected $routeDataType = '';
  protected $vpcConnectorType = VpcConnectorInfo::class;
  protected $vpcConnectorDataType = '';
  protected $vpnGatewayType = VpnGatewayInfo::class;
  protected $vpnGatewayDataType = '';
  protected $vpnTunnelType = VpnTunnelInfo::class;
  protected $vpnTunnelDataType = '';
  /** @param AbortInfo */
  public function setAbort(AbortInfo $abort)
  {
    $this->abort = $abort;
  }
  /** @return AbortInfo */
  public function getAbort()
  {
    return $this->abort;
  }
  /** @param bool */
  public function setCausesDrop($causesDrop)
  {
    $this->causesDrop = $causesDrop;
  }
  /** @return bool */
  public function getCausesDrop()
  {
    return $this->causesDrop;
  }
  /** @param CloudFunctionInfo */
  public function setCloudFunction(CloudFunctionInfo $cloudFunction)
  {
    $this->cloudFunction = $cloudFunction;
  }
  /** @return CloudFunctionInfo */
  public function getCloudFunction()
  {
    return $this->cloudFunction;
  }
  /** @param CloudSQLInstanceInfo */
  public function setCloudSqlInstance(CloudSQLInstanceInfo $cloudSqlInstance)
  {
    $this->cloudSqlInstance = $cloudSqlInstance;
  }
  /** @return CloudSQLInstanceInfo */
  public function getCloudSqlInstance()
  {
    return $this->cloudSqlInstance;
  }
  /** @param DeliverInfo */
  public function setDeliver(DeliverInfo $deliver)
  {
    $this->deliver = $deliver;
  }
  /** @return DeliverInfo */
  public function getDeliver()
  {
    return $this->deliver;
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
  /** @param DropInfo */
  public function setDrop(DropInfo $drop)
  {
    $this->drop = $drop;
  }
  /** @return DropInfo */
  public function getDrop()
  {
    return $this->drop;
  }
  /** @param EndpointInfo */
  public function setEndpoint(EndpointInfo $endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /** @return EndpointInfo */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /** @param FirewallInfo */
  public function setFirewall(FirewallInfo $firewall)
  {
    $this->firewall = $firewall;
  }
  /** @return FirewallInfo */
  public function getFirewall()
  {
    return $this->firewall;
  }
  /** @param ForwardInfo */
  public function setForward(ForwardInfo $forward)
  {
    $this->forward = $forward;
  }
  /** @return ForwardInfo */
  public function getForward()
  {
    return $this->forward;
  }
  /** @param ForwardingRuleInfo */
  public function setForwardingRule(ForwardingRuleInfo $forwardingRule)
  {
    $this->forwardingRule = $forwardingRule;
  }
  /** @return ForwardingRuleInfo */
  public function getForwardingRule()
  {
    return $this->forwardingRule;
  }
  /** @param GKEMasterInfo */
  public function setGkeMaster(GKEMasterInfo $gkeMaster)
  {
    $this->gkeMaster = $gkeMaster;
  }
  /** @return GKEMasterInfo */
  public function getGkeMaster()
  {
    return $this->gkeMaster;
  }
  /** @param InstanceInfo */
  public function setInstance(InstanceInfo $instance)
  {
    $this->instance = $instance;
  }
  /** @return InstanceInfo */
  public function getInstance()
  {
    return $this->instance;
  }
  /** @param LoadBalancerInfo */
  public function setLoadBalancer(LoadBalancerInfo $loadBalancer)
  {
    $this->loadBalancer = $loadBalancer;
  }
  /** @return LoadBalancerInfo */
  public function getLoadBalancer()
  {
    return $this->loadBalancer;
  }
  /** @param NetworkInfo */
  public function setNetwork(NetworkInfo $network)
  {
    $this->network = $network;
  }
  /** @return NetworkInfo */
  public function getNetwork()
  {
    return $this->network;
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
  /** @param RouteInfo */
  public function setRoute(RouteInfo $route)
  {
    $this->route = $route;
  }
  /** @return RouteInfo */
  public function getRoute()
  {
    return $this->route;
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
  /** @param VpcConnectorInfo */
  public function setVpcConnector(VpcConnectorInfo $vpcConnector)
  {
    $this->vpcConnector = $vpcConnector;
  }
  /** @return VpcConnectorInfo */
  public function getVpcConnector()
  {
    return $this->vpcConnector;
  }
  /** @param VpnGatewayInfo */
  public function setVpnGateway(VpnGatewayInfo $vpnGateway)
  {
    $this->vpnGateway = $vpnGateway;
  }
  /** @return VpnGatewayInfo */
  public function getVpnGateway()
  {
    return $this->vpnGateway;
  }
  /** @param VpnTunnelInfo */
  public function setVpnTunnel(VpnTunnelInfo $vpnTunnel)
  {
    $this->vpnTunnel = $vpnTunnel;
  }
  /** @return VpnTunnelInfo */
  public function getVpnTunnel()
  {
    return $this->vpnTunnel;
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

class Trace extends \Google\Collection
{
  /** @var EndpointInfo */
  public $endpointInfo;
  /** @var Step[] */
  public $steps;
  protected $collection_key = 'steps';
  protected $endpointInfoType = EndpointInfo::class;
  protected $endpointInfoDataType = '';
  protected $stepsType = Step::class;
  protected $stepsDataType = 'array';
  /** @param EndpointInfo */
  public function setEndpointInfo(EndpointInfo $endpointInfo)
  {
    $this->endpointInfo = $endpointInfo;
  }
  /** @return EndpointInfo */
  public function getEndpointInfo()
  {
    return $this->endpointInfo;
  }
  /** @param Step[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return Step[] */
  public function getSteps()
  {
    return $this->steps;
  }
}

class VpcConnectorInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $location;
  /** @var string */
  public $uri;

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

class VpnGatewayInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $networkUri;
  /** @var string */
  public $region;
  /** @var string */
  public $uri;
  /** @var string */
  public $vpnTunnelUri;

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
  public function setVpnTunnelUri($vpnTunnelUri)
  {
    $this->vpnTunnelUri = $vpnTunnelUri;
  }
  /** @return string */
  public function getVpnTunnelUri()
  {
    return $this->vpnTunnelUri;
  }
}

class VpnTunnelInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $networkUri;
  /** @var string */
  public $region;
  /** @var string */
  public $remoteGateway;
  /** @var string */
  public $remoteGatewayIp;
  /** @var string */
  public $routingType;
  /** @var string */
  public $sourceGateway;
  /** @var string */
  public $sourceGatewayIp;
  /** @var string */
  public $uri;

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
  public function setRemoteGateway($remoteGateway)
  {
    $this->remoteGateway = $remoteGateway;
  }
  /** @return string */
  public function getRemoteGateway()
  {
    return $this->remoteGateway;
  }
  /** @param string */
  public function setRemoteGatewayIp($remoteGatewayIp)
  {
    $this->remoteGatewayIp = $remoteGatewayIp;
  }
  /** @return string */
  public function getRemoteGatewayIp()
  {
    return $this->remoteGatewayIp;
  }
  /** @param string */
  public function setRoutingType($routingType)
  {
    $this->routingType = $routingType;
  }
  /** @return string */
  public function getRoutingType()
  {
    return $this->routingType;
  }
  /** @param string */
  public function setSourceGateway($sourceGateway)
  {
    $this->sourceGateway = $sourceGateway;
  }
  /** @return string */
  public function getSourceGateway()
  {
    return $this->sourceGateway;
  }
  /** @param string */
  public function setSourceGatewayIp($sourceGatewayIp)
  {
    $this->sourceGatewayIp = $sourceGatewayIp;
  }
  /** @return string */
  public function getSourceGatewayIp()
  {
    return $this->sourceGatewayIp;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AbortInfo::class, 'Google_Service_NetworkManagement_AbortInfo');
class_alias(AuditConfig::class, 'Google_Service_NetworkManagement_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_NetworkManagement_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_NetworkManagement_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_NetworkManagement_CancelOperationRequest');
class_alias(CloudFunctionEndpoint::class, 'Google_Service_NetworkManagement_CloudFunctionEndpoint');
class_alias(CloudFunctionInfo::class, 'Google_Service_NetworkManagement_CloudFunctionInfo');
class_alias(CloudSQLInstanceInfo::class, 'Google_Service_NetworkManagement_CloudSQLInstanceInfo');
class_alias(ConnectivityTest::class, 'Google_Service_NetworkManagement_ConnectivityTest');
class_alias(DeliverInfo::class, 'Google_Service_NetworkManagement_DeliverInfo');
class_alias(DropInfo::class, 'Google_Service_NetworkManagement_DropInfo');
class_alias(Endpoint::class, 'Google_Service_NetworkManagement_Endpoint');
class_alias(EndpointInfo::class, 'Google_Service_NetworkManagement_EndpointInfo');
class_alias(Expr::class, 'Google_Service_NetworkManagement_Expr');
class_alias(FirewallInfo::class, 'Google_Service_NetworkManagement_FirewallInfo');
class_alias(ForwardInfo::class, 'Google_Service_NetworkManagement_ForwardInfo');
class_alias(ForwardingRuleInfo::class, 'Google_Service_NetworkManagement_ForwardingRuleInfo');
class_alias(GKEMasterInfo::class, 'Google_Service_NetworkManagement_GKEMasterInfo');
class_alias(InstanceInfo::class, 'Google_Service_NetworkManagement_InstanceInfo');
class_alias(ListConnectivityTestsResponse::class, 'Google_Service_NetworkManagement_ListConnectivityTestsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_NetworkManagement_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_NetworkManagement_ListOperationsResponse');
class_alias(LoadBalancerBackend::class, 'Google_Service_NetworkManagement_LoadBalancerBackend');
class_alias(LoadBalancerInfo::class, 'Google_Service_NetworkManagement_LoadBalancerInfo');
class_alias(Location::class, 'Google_Service_NetworkManagement_Location');
class_alias(NetworkInfo::class, 'Google_Service_NetworkManagement_NetworkInfo');
class_alias(NetworkmanagementEmpty::class, 'Google_Service_NetworkManagement_NetworkmanagementEmpty');
class_alias(Operation::class, 'Google_Service_NetworkManagement_Operation');
class_alias(OperationMetadata::class, 'Google_Service_NetworkManagement_OperationMetadata');
class_alias(Policy::class, 'Google_Service_NetworkManagement_Policy');
class_alias(ReachabilityDetails::class, 'Google_Service_NetworkManagement_ReachabilityDetails');
class_alias(RerunConnectivityTestRequest::class, 'Google_Service_NetworkManagement_RerunConnectivityTestRequest');
class_alias(RouteInfo::class, 'Google_Service_NetworkManagement_RouteInfo');
class_alias(SetIamPolicyRequest::class, 'Google_Service_NetworkManagement_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_NetworkManagement_Status');
class_alias(Step::class, 'Google_Service_NetworkManagement_Step');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_NetworkManagement_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_NetworkManagement_TestIamPermissionsResponse');
class_alias(Trace::class, 'Google_Service_NetworkManagement_Trace');
class_alias(VpcConnectorInfo::class, 'Google_Service_NetworkManagement_VpcConnectorInfo');
class_alias(VpnGatewayInfo::class, 'Google_Service_NetworkManagement_VpnGatewayInfo');
class_alias(VpnTunnelInfo::class, 'Google_Service_NetworkManagement_VpnTunnelInfo');
