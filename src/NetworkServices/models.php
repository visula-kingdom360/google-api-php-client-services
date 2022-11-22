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

namespace Google\Service\NetworkServices;

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

class EndpointMatcher extends \Google\Model
{
  /** @var EndpointMatcherMetadataLabelMatcher */
  public $metadataLabelMatcher;
  protected $metadataLabelMatcherType = EndpointMatcherMetadataLabelMatcher::class;
  protected $metadataLabelMatcherDataType = '';
  /** @param EndpointMatcherMetadataLabelMatcher */
  public function setMetadataLabelMatcher(EndpointMatcherMetadataLabelMatcher $metadataLabelMatcher)
  {
    $this->metadataLabelMatcher = $metadataLabelMatcher;
  }
  /** @return EndpointMatcherMetadataLabelMatcher */
  public function getMetadataLabelMatcher()
  {
    return $this->metadataLabelMatcher;
  }
}

class EndpointMatcherMetadataLabelMatcher extends \Google\Collection
{
  /** @var string */
  public $metadataLabelMatchCriteria;
  /** @var EndpointMatcherMetadataLabelMatcherMetadataLabels[] */
  public $metadataLabels;
  protected $collection_key = 'metadataLabels';
  protected $metadataLabelsType = EndpointMatcherMetadataLabelMatcherMetadataLabels::class;
  protected $metadataLabelsDataType = 'array';
  /** @param string */
  public function setMetadataLabelMatchCriteria($metadataLabelMatchCriteria)
  {
    $this->metadataLabelMatchCriteria = $metadataLabelMatchCriteria;
  }
  /** @return string */
  public function getMetadataLabelMatchCriteria()
  {
    return $this->metadataLabelMatchCriteria;
  }
  /** @param EndpointMatcherMetadataLabelMatcherMetadataLabels[] */
  public function setMetadataLabels($metadataLabels)
  {
    $this->metadataLabels = $metadataLabels;
  }
  /** @return EndpointMatcherMetadataLabelMatcherMetadataLabels[] */
  public function getMetadataLabels()
  {
    return $this->metadataLabels;
  }
}

class EndpointMatcherMetadataLabelMatcherMetadataLabels extends \Google\Model
{
  /** @var string */
  public $labelName;
  /** @var string */
  public $labelValue;

  /** @param string */
  public function setLabelName($labelName)
  {
    $this->labelName = $labelName;
  }
  /** @return string */
  public function getLabelName()
  {
    return $this->labelName;
  }
  /** @param string */
  public function setLabelValue($labelValue)
  {
    $this->labelValue = $labelValue;
  }
  /** @return string */
  public function getLabelValue()
  {
    return $this->labelValue;
  }
}

class EndpointPolicy extends \Google\Model
{
  /** @var string */
  public $authorizationPolicy;
  /** @var string */
  public $clientTlsPolicy;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var EndpointMatcher */
  public $endpointMatcher;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $serverTlsPolicy;
  /** @var TrafficPortSelector */
  public $trafficPortSelector;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $endpointMatcherType = EndpointMatcher::class;
  protected $endpointMatcherDataType = '';
  protected $trafficPortSelectorType = TrafficPortSelector::class;
  protected $trafficPortSelectorDataType = '';
  /** @param string */
  public function setAuthorizationPolicy($authorizationPolicy)
  {
    $this->authorizationPolicy = $authorizationPolicy;
  }
  /** @return string */
  public function getAuthorizationPolicy()
  {
    return $this->authorizationPolicy;
  }
  /** @param string */
  public function setClientTlsPolicy($clientTlsPolicy)
  {
    $this->clientTlsPolicy = $clientTlsPolicy;
  }
  /** @return string */
  public function getClientTlsPolicy()
  {
    return $this->clientTlsPolicy;
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
  /** @param EndpointMatcher */
  public function setEndpointMatcher(EndpointMatcher $endpointMatcher)
  {
    $this->endpointMatcher = $endpointMatcher;
  }
  /** @return EndpointMatcher */
  public function getEndpointMatcher()
  {
    return $this->endpointMatcher;
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
  public function setServerTlsPolicy($serverTlsPolicy)
  {
    $this->serverTlsPolicy = $serverTlsPolicy;
  }
  /** @return string */
  public function getServerTlsPolicy()
  {
    return $this->serverTlsPolicy;
  }
  /** @param TrafficPortSelector */
  public function setTrafficPortSelector(TrafficPortSelector $trafficPortSelector)
  {
    $this->trafficPortSelector = $trafficPortSelector;
  }
  /** @return TrafficPortSelector */
  public function getTrafficPortSelector()
  {
    return $this->trafficPortSelector;
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

class Gateway extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var int[] */
  public $ports;
  /** @var string */
  public $scope;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $serverTlsPolicy;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'ports';
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
  /** @param int[] */
  public function setPorts($ports)
  {
    $this->ports = $ports;
  }
  /** @return int[] */
  public function getPorts()
  {
    return $this->ports;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
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
  public function setServerTlsPolicy($serverTlsPolicy)
  {
    $this->serverTlsPolicy = $serverTlsPolicy;
  }
  /** @return string */
  public function getServerTlsPolicy()
  {
    return $this->serverTlsPolicy;
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
}

class GrpcRoute extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $gateways;
  /** @var string[] */
  public $hostnames;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $meshes;
  /** @var string */
  public $name;
  /** @var GrpcRouteRouteRule[] */
  public $rules;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'rules';
  protected $rulesType = GrpcRouteRouteRule::class;
  protected $rulesDataType = 'array';
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
  public function setGateways($gateways)
  {
    $this->gateways = $gateways;
  }
  /** @return string[] */
  public function getGateways()
  {
    return $this->gateways;
  }
  /** @param string[] */
  public function setHostnames($hostnames)
  {
    $this->hostnames = $hostnames;
  }
  /** @return string[] */
  public function getHostnames()
  {
    return $this->hostnames;
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
  /** @param string[] */
  public function setMeshes($meshes)
  {
    $this->meshes = $meshes;
  }
  /** @return string[] */
  public function getMeshes()
  {
    return $this->meshes;
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
  /** @param GrpcRouteRouteRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return GrpcRouteRouteRule[] */
  public function getRules()
  {
    return $this->rules;
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

class GrpcRouteDestination extends \Google\Model
{
  /** @var string */
  public $serviceName;
  /** @var int */
  public $weight;

  /** @param string */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
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

class GrpcRouteFaultInjectionPolicy extends \Google\Model
{
  /** @var GrpcRouteFaultInjectionPolicyAbort */
  public $abort;
  /** @var GrpcRouteFaultInjectionPolicyDelay */
  public $delay;
  protected $abortType = GrpcRouteFaultInjectionPolicyAbort::class;
  protected $abortDataType = '';
  protected $delayType = GrpcRouteFaultInjectionPolicyDelay::class;
  protected $delayDataType = '';
  /** @param GrpcRouteFaultInjectionPolicyAbort */
  public function setAbort(GrpcRouteFaultInjectionPolicyAbort $abort)
  {
    $this->abort = $abort;
  }
  /** @return GrpcRouteFaultInjectionPolicyAbort */
  public function getAbort()
  {
    return $this->abort;
  }
  /** @param GrpcRouteFaultInjectionPolicyDelay */
  public function setDelay(GrpcRouteFaultInjectionPolicyDelay $delay)
  {
    $this->delay = $delay;
  }
  /** @return GrpcRouteFaultInjectionPolicyDelay */
  public function getDelay()
  {
    return $this->delay;
  }
}

class GrpcRouteFaultInjectionPolicyAbort extends \Google\Model
{
  /** @var int */
  public $httpStatus;
  /** @var int */
  public $percentage;

  /** @param int */
  public function setHttpStatus($httpStatus)
  {
    $this->httpStatus = $httpStatus;
  }
  /** @return int */
  public function getHttpStatus()
  {
    return $this->httpStatus;
  }
  /** @param int */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return int */
  public function getPercentage()
  {
    return $this->percentage;
  }
}

class GrpcRouteFaultInjectionPolicyDelay extends \Google\Model
{
  /** @var string */
  public $fixedDelay;
  /** @var int */
  public $percentage;

  /** @param string */
  public function setFixedDelay($fixedDelay)
  {
    $this->fixedDelay = $fixedDelay;
  }
  /** @return string */
  public function getFixedDelay()
  {
    return $this->fixedDelay;
  }
  /** @param int */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return int */
  public function getPercentage()
  {
    return $this->percentage;
  }
}

class GrpcRouteHeaderMatch extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $type;
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

class GrpcRouteMethodMatch extends \Google\Model
{
  /** @var bool */
  public $caseSensitive;
  /** @var string */
  public $grpcMethod;
  /** @var string */
  public $grpcService;
  /** @var string */
  public $type;

  /** @param bool */
  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }
  /** @return bool */
  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }
  /** @param string */
  public function setGrpcMethod($grpcMethod)
  {
    $this->grpcMethod = $grpcMethod;
  }
  /** @return string */
  public function getGrpcMethod()
  {
    return $this->grpcMethod;
  }
  /** @param string */
  public function setGrpcService($grpcService)
  {
    $this->grpcService = $grpcService;
  }
  /** @return string */
  public function getGrpcService()
  {
    return $this->grpcService;
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

class GrpcRouteRetryPolicy extends \Google\Collection
{
  /** @var string */
  public $numRetries;
  /** @var string[] */
  public $retryConditions;
  protected $collection_key = 'retryConditions';
  /** @param string */
  public function setNumRetries($numRetries)
  {
    $this->numRetries = $numRetries;
  }
  /** @return string */
  public function getNumRetries()
  {
    return $this->numRetries;
  }
  /** @param string[] */
  public function setRetryConditions($retryConditions)
  {
    $this->retryConditions = $retryConditions;
  }
  /** @return string[] */
  public function getRetryConditions()
  {
    return $this->retryConditions;
  }
}

class GrpcRouteRouteAction extends \Google\Collection
{
  /** @var GrpcRouteDestination[] */
  public $destinations;
  /** @var GrpcRouteFaultInjectionPolicy */
  public $faultInjectionPolicy;
  /** @var GrpcRouteRetryPolicy */
  public $retryPolicy;
  /** @var string */
  public $timeout;
  protected $collection_key = 'destinations';
  protected $destinationsType = GrpcRouteDestination::class;
  protected $destinationsDataType = 'array';
  protected $faultInjectionPolicyType = GrpcRouteFaultInjectionPolicy::class;
  protected $faultInjectionPolicyDataType = '';
  protected $retryPolicyType = GrpcRouteRetryPolicy::class;
  protected $retryPolicyDataType = '';
  /** @param GrpcRouteDestination[] */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /** @return GrpcRouteDestination[] */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /** @param GrpcRouteFaultInjectionPolicy */
  public function setFaultInjectionPolicy(GrpcRouteFaultInjectionPolicy $faultInjectionPolicy)
  {
    $this->faultInjectionPolicy = $faultInjectionPolicy;
  }
  /** @return GrpcRouteFaultInjectionPolicy */
  public function getFaultInjectionPolicy()
  {
    return $this->faultInjectionPolicy;
  }
  /** @param GrpcRouteRetryPolicy */
  public function setRetryPolicy(GrpcRouteRetryPolicy $retryPolicy)
  {
    $this->retryPolicy = $retryPolicy;
  }
  /** @return GrpcRouteRetryPolicy */
  public function getRetryPolicy()
  {
    return $this->retryPolicy;
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
}

class GrpcRouteRouteMatch extends \Google\Collection
{
  /** @var GrpcRouteHeaderMatch[] */
  public $headers;
  /** @var GrpcRouteMethodMatch */
  public $method;
  protected $collection_key = 'headers';
  protected $headersType = GrpcRouteHeaderMatch::class;
  protected $headersDataType = 'array';
  protected $methodType = GrpcRouteMethodMatch::class;
  protected $methodDataType = '';
  /** @param GrpcRouteHeaderMatch[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return GrpcRouteHeaderMatch[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param GrpcRouteMethodMatch */
  public function setMethod(GrpcRouteMethodMatch $method)
  {
    $this->method = $method;
  }
  /** @return GrpcRouteMethodMatch */
  public function getMethod()
  {
    return $this->method;
  }
}

class GrpcRouteRouteRule extends \Google\Collection
{
  /** @var GrpcRouteRouteAction */
  public $action;
  /** @var GrpcRouteRouteMatch[] */
  public $matches;
  protected $collection_key = 'matches';
  protected $actionType = GrpcRouteRouteAction::class;
  protected $actionDataType = '';
  protected $matchesType = GrpcRouteRouteMatch::class;
  protected $matchesDataType = 'array';
  /** @param GrpcRouteRouteAction */
  public function setAction(GrpcRouteRouteAction $action)
  {
    $this->action = $action;
  }
  /** @return GrpcRouteRouteAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param GrpcRouteRouteMatch[] */
  public function setMatches($matches)
  {
    $this->matches = $matches;
  }
  /** @return GrpcRouteRouteMatch[] */
  public function getMatches()
  {
    return $this->matches;
  }
}

class HttpRoute extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $gateways;
  /** @var string[] */
  public $hostnames;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $meshes;
  /** @var string */
  public $name;
  /** @var HttpRouteRouteRule[] */
  public $rules;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'rules';
  protected $rulesType = HttpRouteRouteRule::class;
  protected $rulesDataType = 'array';
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
  public function setGateways($gateways)
  {
    $this->gateways = $gateways;
  }
  /** @return string[] */
  public function getGateways()
  {
    return $this->gateways;
  }
  /** @param string[] */
  public function setHostnames($hostnames)
  {
    $this->hostnames = $hostnames;
  }
  /** @return string[] */
  public function getHostnames()
  {
    return $this->hostnames;
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
  /** @param string[] */
  public function setMeshes($meshes)
  {
    $this->meshes = $meshes;
  }
  /** @return string[] */
  public function getMeshes()
  {
    return $this->meshes;
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
  /** @param HttpRouteRouteRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return HttpRouteRouteRule[] */
  public function getRules()
  {
    return $this->rules;
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

class HttpRouteCorsPolicy extends \Google\Collection
{
  /** @var bool */
  public $allowCredentials;
  /** @var string[] */
  public $allowHeaders;
  /** @var string[] */
  public $allowMethods;
  /** @var string[] */
  public $allowOriginRegexes;
  /** @var string[] */
  public $allowOrigins;
  /** @var bool */
  public $disabled;
  /** @var string[] */
  public $exposeHeaders;
  /** @var string */
  public $maxAge;
  protected $collection_key = 'exposeHeaders';
  /** @param bool */
  public function setAllowCredentials($allowCredentials)
  {
    $this->allowCredentials = $allowCredentials;
  }
  /** @return bool */
  public function getAllowCredentials()
  {
    return $this->allowCredentials;
  }
  /** @param string[] */
  public function setAllowHeaders($allowHeaders)
  {
    $this->allowHeaders = $allowHeaders;
  }
  /** @return string[] */
  public function getAllowHeaders()
  {
    return $this->allowHeaders;
  }
  /** @param string[] */
  public function setAllowMethods($allowMethods)
  {
    $this->allowMethods = $allowMethods;
  }
  /** @return string[] */
  public function getAllowMethods()
  {
    return $this->allowMethods;
  }
  /** @param string[] */
  public function setAllowOriginRegexes($allowOriginRegexes)
  {
    $this->allowOriginRegexes = $allowOriginRegexes;
  }
  /** @return string[] */
  public function getAllowOriginRegexes()
  {
    return $this->allowOriginRegexes;
  }
  /** @param string[] */
  public function setAllowOrigins($allowOrigins)
  {
    $this->allowOrigins = $allowOrigins;
  }
  /** @return string[] */
  public function getAllowOrigins()
  {
    return $this->allowOrigins;
  }
  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /** @param string[] */
  public function setExposeHeaders($exposeHeaders)
  {
    $this->exposeHeaders = $exposeHeaders;
  }
  /** @return string[] */
  public function getExposeHeaders()
  {
    return $this->exposeHeaders;
  }
  /** @param string */
  public function setMaxAge($maxAge)
  {
    $this->maxAge = $maxAge;
  }
  /** @return string */
  public function getMaxAge()
  {
    return $this->maxAge;
  }
}

class HttpRouteDestination extends \Google\Model
{
  /** @var string */
  public $serviceName;
  /** @var int */
  public $weight;

  /** @param string */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
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

class HttpRouteFaultInjectionPolicy extends \Google\Model
{
  /** @var HttpRouteFaultInjectionPolicyAbort */
  public $abort;
  /** @var HttpRouteFaultInjectionPolicyDelay */
  public $delay;
  protected $abortType = HttpRouteFaultInjectionPolicyAbort::class;
  protected $abortDataType = '';
  protected $delayType = HttpRouteFaultInjectionPolicyDelay::class;
  protected $delayDataType = '';
  /** @param HttpRouteFaultInjectionPolicyAbort */
  public function setAbort(HttpRouteFaultInjectionPolicyAbort $abort)
  {
    $this->abort = $abort;
  }
  /** @return HttpRouteFaultInjectionPolicyAbort */
  public function getAbort()
  {
    return $this->abort;
  }
  /** @param HttpRouteFaultInjectionPolicyDelay */
  public function setDelay(HttpRouteFaultInjectionPolicyDelay $delay)
  {
    $this->delay = $delay;
  }
  /** @return HttpRouteFaultInjectionPolicyDelay */
  public function getDelay()
  {
    return $this->delay;
  }
}

class HttpRouteFaultInjectionPolicyAbort extends \Google\Model
{
  /** @var int */
  public $httpStatus;
  /** @var int */
  public $percentage;

  /** @param int */
  public function setHttpStatus($httpStatus)
  {
    $this->httpStatus = $httpStatus;
  }
  /** @return int */
  public function getHttpStatus()
  {
    return $this->httpStatus;
  }
  /** @param int */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return int */
  public function getPercentage()
  {
    return $this->percentage;
  }
}

class HttpRouteFaultInjectionPolicyDelay extends \Google\Model
{
  /** @var string */
  public $fixedDelay;
  /** @var int */
  public $percentage;

  /** @param string */
  public function setFixedDelay($fixedDelay)
  {
    $this->fixedDelay = $fixedDelay;
  }
  /** @return string */
  public function getFixedDelay()
  {
    return $this->fixedDelay;
  }
  /** @param int */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return int */
  public function getPercentage()
  {
    return $this->percentage;
  }
}

class HttpRouteHeaderMatch extends \Google\Model
{
  /** @var string */
  public $exactMatch;
  /** @var string */
  public $header;
  /** @var bool */
  public $invertMatch;
  /** @var string */
  public $prefixMatch;
  /** @var bool */
  public $presentMatch;
  /** @var HttpRouteHeaderMatchIntegerRange */
  public $rangeMatch;
  /** @var string */
  public $regexMatch;
  /** @var string */
  public $suffixMatch;
  protected $rangeMatchType = HttpRouteHeaderMatchIntegerRange::class;
  protected $rangeMatchDataType = '';
  /** @param string */
  public function setExactMatch($exactMatch)
  {
    $this->exactMatch = $exactMatch;
  }
  /** @return string */
  public function getExactMatch()
  {
    return $this->exactMatch;
  }
  /** @param string */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /** @return string */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param bool */
  public function setInvertMatch($invertMatch)
  {
    $this->invertMatch = $invertMatch;
  }
  /** @return bool */
  public function getInvertMatch()
  {
    return $this->invertMatch;
  }
  /** @param string */
  public function setPrefixMatch($prefixMatch)
  {
    $this->prefixMatch = $prefixMatch;
  }
  /** @return string */
  public function getPrefixMatch()
  {
    return $this->prefixMatch;
  }
  /** @param bool */
  public function setPresentMatch($presentMatch)
  {
    $this->presentMatch = $presentMatch;
  }
  /** @return bool */
  public function getPresentMatch()
  {
    return $this->presentMatch;
  }
  /** @param HttpRouteHeaderMatchIntegerRange */
  public function setRangeMatch(HttpRouteHeaderMatchIntegerRange $rangeMatch)
  {
    $this->rangeMatch = $rangeMatch;
  }
  /** @return HttpRouteHeaderMatchIntegerRange */
  public function getRangeMatch()
  {
    return $this->rangeMatch;
  }
  /** @param string */
  public function setRegexMatch($regexMatch)
  {
    $this->regexMatch = $regexMatch;
  }
  /** @return string */
  public function getRegexMatch()
  {
    return $this->regexMatch;
  }
  /** @param string */
  public function setSuffixMatch($suffixMatch)
  {
    $this->suffixMatch = $suffixMatch;
  }
  /** @return string */
  public function getSuffixMatch()
  {
    return $this->suffixMatch;
  }
}

class HttpRouteHeaderMatchIntegerRange extends \Google\Model
{
  /** @var int */
  public $end;
  /** @var int */
  public $start;

  /** @param int */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return int */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param int */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return int */
  public function getStart()
  {
    return $this->start;
  }
}

class HttpRouteHeaderModifier extends \Google\Collection
{
  /** @var string[] */
  public $add;
  /** @var string[] */
  public $remove;
  /** @var string[] */
  public $set;
  protected $collection_key = 'remove';
  /** @param string[] */
  public function setAdd($add)
  {
    $this->add = $add;
  }
  /** @return string[] */
  public function getAdd()
  {
    return $this->add;
  }
  /** @param string[] */
  public function setRemove($remove)
  {
    $this->remove = $remove;
  }
  /** @return string[] */
  public function getRemove()
  {
    return $this->remove;
  }
  /** @param string[] */
  public function setSet($set)
  {
    $this->set = $set;
  }
  /** @return string[] */
  public function getSet()
  {
    return $this->set;
  }
}

class HttpRouteQueryParameterMatch extends \Google\Model
{
  /** @var string */
  public $exactMatch;
  /** @var bool */
  public $presentMatch;
  /** @var string */
  public $queryParameter;
  /** @var string */
  public $regexMatch;

  /** @param string */
  public function setExactMatch($exactMatch)
  {
    $this->exactMatch = $exactMatch;
  }
  /** @return string */
  public function getExactMatch()
  {
    return $this->exactMatch;
  }
  /** @param bool */
  public function setPresentMatch($presentMatch)
  {
    $this->presentMatch = $presentMatch;
  }
  /** @return bool */
  public function getPresentMatch()
  {
    return $this->presentMatch;
  }
  /** @param string */
  public function setQueryParameter($queryParameter)
  {
    $this->queryParameter = $queryParameter;
  }
  /** @return string */
  public function getQueryParameter()
  {
    return $this->queryParameter;
  }
  /** @param string */
  public function setRegexMatch($regexMatch)
  {
    $this->regexMatch = $regexMatch;
  }
  /** @return string */
  public function getRegexMatch()
  {
    return $this->regexMatch;
  }
}

class HttpRouteRedirect extends \Google\Model
{
  /** @var string */
  public $hostRedirect;
  /** @var bool */
  public $httpsRedirect;
  /** @var string */
  public $pathRedirect;
  /** @var int */
  public $portRedirect;
  /** @var string */
  public $prefixRewrite;
  /** @var string */
  public $responseCode;
  /** @var bool */
  public $stripQuery;

  /** @param string */
  public function setHostRedirect($hostRedirect)
  {
    $this->hostRedirect = $hostRedirect;
  }
  /** @return string */
  public function getHostRedirect()
  {
    return $this->hostRedirect;
  }
  /** @param bool */
  public function setHttpsRedirect($httpsRedirect)
  {
    $this->httpsRedirect = $httpsRedirect;
  }
  /** @return bool */
  public function getHttpsRedirect()
  {
    return $this->httpsRedirect;
  }
  /** @param string */
  public function setPathRedirect($pathRedirect)
  {
    $this->pathRedirect = $pathRedirect;
  }
  /** @return string */
  public function getPathRedirect()
  {
    return $this->pathRedirect;
  }
  /** @param int */
  public function setPortRedirect($portRedirect)
  {
    $this->portRedirect = $portRedirect;
  }
  /** @return int */
  public function getPortRedirect()
  {
    return $this->portRedirect;
  }
  /** @param string */
  public function setPrefixRewrite($prefixRewrite)
  {
    $this->prefixRewrite = $prefixRewrite;
  }
  /** @return string */
  public function getPrefixRewrite()
  {
    return $this->prefixRewrite;
  }
  /** @param string */
  public function setResponseCode($responseCode)
  {
    $this->responseCode = $responseCode;
  }
  /** @return string */
  public function getResponseCode()
  {
    return $this->responseCode;
  }
  /** @param bool */
  public function setStripQuery($stripQuery)
  {
    $this->stripQuery = $stripQuery;
  }
  /** @return bool */
  public function getStripQuery()
  {
    return $this->stripQuery;
  }
}

class HttpRouteRequestMirrorPolicy extends \Google\Model
{
  /** @var HttpRouteDestination */
  public $destination;
  protected $destinationType = HttpRouteDestination::class;
  protected $destinationDataType = '';
  /** @param HttpRouteDestination */
  public function setDestination(HttpRouteDestination $destination)
  {
    $this->destination = $destination;
  }
  /** @return HttpRouteDestination */
  public function getDestination()
  {
    return $this->destination;
  }
}

class HttpRouteRetryPolicy extends \Google\Collection
{
  /** @var int */
  public $numRetries;
  /** @var string */
  public $perTryTimeout;
  /** @var string[] */
  public $retryConditions;
  protected $collection_key = 'retryConditions';
  /** @param int */
  public function setNumRetries($numRetries)
  {
    $this->numRetries = $numRetries;
  }
  /** @return int */
  public function getNumRetries()
  {
    return $this->numRetries;
  }
  /** @param string */
  public function setPerTryTimeout($perTryTimeout)
  {
    $this->perTryTimeout = $perTryTimeout;
  }
  /** @return string */
  public function getPerTryTimeout()
  {
    return $this->perTryTimeout;
  }
  /** @param string[] */
  public function setRetryConditions($retryConditions)
  {
    $this->retryConditions = $retryConditions;
  }
  /** @return string[] */
  public function getRetryConditions()
  {
    return $this->retryConditions;
  }
}

class HttpRouteRouteAction extends \Google\Collection
{
  /** @var HttpRouteCorsPolicy */
  public $corsPolicy;
  /** @var HttpRouteDestination[] */
  public $destinations;
  /** @var HttpRouteFaultInjectionPolicy */
  public $faultInjectionPolicy;
  /** @var HttpRouteRedirect */
  public $redirect;
  /** @var HttpRouteHeaderModifier */
  public $requestHeaderModifier;
  /** @var HttpRouteRequestMirrorPolicy */
  public $requestMirrorPolicy;
  /** @var HttpRouteHeaderModifier */
  public $responseHeaderModifier;
  /** @var HttpRouteRetryPolicy */
  public $retryPolicy;
  /** @var string */
  public $timeout;
  /** @var HttpRouteURLRewrite */
  public $urlRewrite;
  protected $collection_key = 'destinations';
  protected $corsPolicyType = HttpRouteCorsPolicy::class;
  protected $corsPolicyDataType = '';
  protected $destinationsType = HttpRouteDestination::class;
  protected $destinationsDataType = 'array';
  protected $faultInjectionPolicyType = HttpRouteFaultInjectionPolicy::class;
  protected $faultInjectionPolicyDataType = '';
  protected $redirectType = HttpRouteRedirect::class;
  protected $redirectDataType = '';
  protected $requestHeaderModifierType = HttpRouteHeaderModifier::class;
  protected $requestHeaderModifierDataType = '';
  protected $requestMirrorPolicyType = HttpRouteRequestMirrorPolicy::class;
  protected $requestMirrorPolicyDataType = '';
  protected $responseHeaderModifierType = HttpRouteHeaderModifier::class;
  protected $responseHeaderModifierDataType = '';
  protected $retryPolicyType = HttpRouteRetryPolicy::class;
  protected $retryPolicyDataType = '';
  protected $urlRewriteType = HttpRouteURLRewrite::class;
  protected $urlRewriteDataType = '';
  /** @param HttpRouteCorsPolicy */
  public function setCorsPolicy(HttpRouteCorsPolicy $corsPolicy)
  {
    $this->corsPolicy = $corsPolicy;
  }
  /** @return HttpRouteCorsPolicy */
  public function getCorsPolicy()
  {
    return $this->corsPolicy;
  }
  /** @param HttpRouteDestination[] */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /** @return HttpRouteDestination[] */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /** @param HttpRouteFaultInjectionPolicy */
  public function setFaultInjectionPolicy(HttpRouteFaultInjectionPolicy $faultInjectionPolicy)
  {
    $this->faultInjectionPolicy = $faultInjectionPolicy;
  }
  /** @return HttpRouteFaultInjectionPolicy */
  public function getFaultInjectionPolicy()
  {
    return $this->faultInjectionPolicy;
  }
  /** @param HttpRouteRedirect */
  public function setRedirect(HttpRouteRedirect $redirect)
  {
    $this->redirect = $redirect;
  }
  /** @return HttpRouteRedirect */
  public function getRedirect()
  {
    return $this->redirect;
  }
  /** @param HttpRouteHeaderModifier */
  public function setRequestHeaderModifier(HttpRouteHeaderModifier $requestHeaderModifier)
  {
    $this->requestHeaderModifier = $requestHeaderModifier;
  }
  /** @return HttpRouteHeaderModifier */
  public function getRequestHeaderModifier()
  {
    return $this->requestHeaderModifier;
  }
  /** @param HttpRouteRequestMirrorPolicy */
  public function setRequestMirrorPolicy(HttpRouteRequestMirrorPolicy $requestMirrorPolicy)
  {
    $this->requestMirrorPolicy = $requestMirrorPolicy;
  }
  /** @return HttpRouteRequestMirrorPolicy */
  public function getRequestMirrorPolicy()
  {
    return $this->requestMirrorPolicy;
  }
  /** @param HttpRouteHeaderModifier */
  public function setResponseHeaderModifier(HttpRouteHeaderModifier $responseHeaderModifier)
  {
    $this->responseHeaderModifier = $responseHeaderModifier;
  }
  /** @return HttpRouteHeaderModifier */
  public function getResponseHeaderModifier()
  {
    return $this->responseHeaderModifier;
  }
  /** @param HttpRouteRetryPolicy */
  public function setRetryPolicy(HttpRouteRetryPolicy $retryPolicy)
  {
    $this->retryPolicy = $retryPolicy;
  }
  /** @return HttpRouteRetryPolicy */
  public function getRetryPolicy()
  {
    return $this->retryPolicy;
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
  /** @param HttpRouteURLRewrite */
  public function setUrlRewrite(HttpRouteURLRewrite $urlRewrite)
  {
    $this->urlRewrite = $urlRewrite;
  }
  /** @return HttpRouteURLRewrite */
  public function getUrlRewrite()
  {
    return $this->urlRewrite;
  }
}

class HttpRouteRouteMatch extends \Google\Collection
{
  /** @var string */
  public $fullPathMatch;
  /** @var HttpRouteHeaderMatch[] */
  public $headers;
  /** @var bool */
  public $ignoreCase;
  /** @var string */
  public $prefixMatch;
  /** @var HttpRouteQueryParameterMatch[] */
  public $queryParameters;
  /** @var string */
  public $regexMatch;
  protected $collection_key = 'queryParameters';
  protected $headersType = HttpRouteHeaderMatch::class;
  protected $headersDataType = 'array';
  protected $queryParametersType = HttpRouteQueryParameterMatch::class;
  protected $queryParametersDataType = 'array';
  /** @param string */
  public function setFullPathMatch($fullPathMatch)
  {
    $this->fullPathMatch = $fullPathMatch;
  }
  /** @return string */
  public function getFullPathMatch()
  {
    return $this->fullPathMatch;
  }
  /** @param HttpRouteHeaderMatch[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return HttpRouteHeaderMatch[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param bool */
  public function setIgnoreCase($ignoreCase)
  {
    $this->ignoreCase = $ignoreCase;
  }
  /** @return bool */
  public function getIgnoreCase()
  {
    return $this->ignoreCase;
  }
  /** @param string */
  public function setPrefixMatch($prefixMatch)
  {
    $this->prefixMatch = $prefixMatch;
  }
  /** @return string */
  public function getPrefixMatch()
  {
    return $this->prefixMatch;
  }
  /** @param HttpRouteQueryParameterMatch[] */
  public function setQueryParameters($queryParameters)
  {
    $this->queryParameters = $queryParameters;
  }
  /** @return HttpRouteQueryParameterMatch[] */
  public function getQueryParameters()
  {
    return $this->queryParameters;
  }
  /** @param string */
  public function setRegexMatch($regexMatch)
  {
    $this->regexMatch = $regexMatch;
  }
  /** @return string */
  public function getRegexMatch()
  {
    return $this->regexMatch;
  }
}

class HttpRouteRouteRule extends \Google\Collection
{
  /** @var HttpRouteRouteAction */
  public $action;
  /** @var HttpRouteRouteMatch[] */
  public $matches;
  protected $collection_key = 'matches';
  protected $actionType = HttpRouteRouteAction::class;
  protected $actionDataType = '';
  protected $matchesType = HttpRouteRouteMatch::class;
  protected $matchesDataType = 'array';
  /** @param HttpRouteRouteAction */
  public function setAction(HttpRouteRouteAction $action)
  {
    $this->action = $action;
  }
  /** @return HttpRouteRouteAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param HttpRouteRouteMatch[] */
  public function setMatches($matches)
  {
    $this->matches = $matches;
  }
  /** @return HttpRouteRouteMatch[] */
  public function getMatches()
  {
    return $this->matches;
  }
}

class HttpRouteURLRewrite extends \Google\Model
{
  /** @var string */
  public $hostRewrite;
  /** @var string */
  public $pathPrefixRewrite;

  /** @param string */
  public function setHostRewrite($hostRewrite)
  {
    $this->hostRewrite = $hostRewrite;
  }
  /** @return string */
  public function getHostRewrite()
  {
    return $this->hostRewrite;
  }
  /** @param string */
  public function setPathPrefixRewrite($pathPrefixRewrite)
  {
    $this->pathPrefixRewrite = $pathPrefixRewrite;
  }
  /** @return string */
  public function getPathPrefixRewrite()
  {
    return $this->pathPrefixRewrite;
  }
}

class ListEndpointPoliciesResponse extends \Google\Collection
{
  /** @var EndpointPolicy[] */
  public $endpointPolicies;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'endpointPolicies';
  protected $endpointPoliciesType = EndpointPolicy::class;
  protected $endpointPoliciesDataType = 'array';
  /** @param EndpointPolicy[] */
  public function setEndpointPolicies($endpointPolicies)
  {
    $this->endpointPolicies = $endpointPolicies;
  }
  /** @return EndpointPolicy[] */
  public function getEndpointPolicies()
  {
    return $this->endpointPolicies;
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

class ListGatewaysResponse extends \Google\Collection
{
  /** @var Gateway[] */
  public $gateways;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'gateways';
  protected $gatewaysType = Gateway::class;
  protected $gatewaysDataType = 'array';
  /** @param Gateway[] */
  public function setGateways($gateways)
  {
    $this->gateways = $gateways;
  }
  /** @return Gateway[] */
  public function getGateways()
  {
    return $this->gateways;
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

class ListGrpcRoutesResponse extends \Google\Collection
{
  /** @var GrpcRoute[] */
  public $grpcRoutes;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'grpcRoutes';
  protected $grpcRoutesType = GrpcRoute::class;
  protected $grpcRoutesDataType = 'array';
  /** @param GrpcRoute[] */
  public function setGrpcRoutes($grpcRoutes)
  {
    $this->grpcRoutes = $grpcRoutes;
  }
  /** @return GrpcRoute[] */
  public function getGrpcRoutes()
  {
    return $this->grpcRoutes;
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

class ListHttpRoutesResponse extends \Google\Collection
{
  /** @var HttpRoute[] */
  public $httpRoutes;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'httpRoutes';
  protected $httpRoutesType = HttpRoute::class;
  protected $httpRoutesDataType = 'array';
  /** @param HttpRoute[] */
  public function setHttpRoutes($httpRoutes)
  {
    $this->httpRoutes = $httpRoutes;
  }
  /** @return HttpRoute[] */
  public function getHttpRoutes()
  {
    return $this->httpRoutes;
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

class ListMeshesResponse extends \Google\Collection
{
  /** @var Mesh[] */
  public $meshes;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'meshes';
  protected $meshesType = Mesh::class;
  protected $meshesDataType = 'array';
  /** @param Mesh[] */
  public function setMeshes($meshes)
  {
    $this->meshes = $meshes;
  }
  /** @return Mesh[] */
  public function getMeshes()
  {
    return $this->meshes;
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

class ListServiceBindingsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ServiceBinding[] */
  public $serviceBindings;
  protected $collection_key = 'serviceBindings';
  protected $serviceBindingsType = ServiceBinding::class;
  protected $serviceBindingsDataType = 'array';
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
  /** @param ServiceBinding[] */
  public function setServiceBindings($serviceBindings)
  {
    $this->serviceBindings = $serviceBindings;
  }
  /** @return ServiceBinding[] */
  public function getServiceBindings()
  {
    return $this->serviceBindings;
  }
}

class ListTcpRoutesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TcpRoute[] */
  public $tcpRoutes;
  protected $collection_key = 'tcpRoutes';
  protected $tcpRoutesType = TcpRoute::class;
  protected $tcpRoutesDataType = 'array';
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
  /** @param TcpRoute[] */
  public function setTcpRoutes($tcpRoutes)
  {
    $this->tcpRoutes = $tcpRoutes;
  }
  /** @return TcpRoute[] */
  public function getTcpRoutes()
  {
    return $this->tcpRoutes;
  }
}

class ListTlsRoutesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TlsRoute[] */
  public $tlsRoutes;
  protected $collection_key = 'tlsRoutes';
  protected $tlsRoutesType = TlsRoute::class;
  protected $tlsRoutesDataType = 'array';
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
  /** @param TlsRoute[] */
  public function setTlsRoutes($tlsRoutes)
  {
    $this->tlsRoutes = $tlsRoutes;
  }
  /** @return TlsRoute[] */
  public function getTlsRoutes()
  {
    return $this->tlsRoutes;
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

class Mesh extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var int */
  public $interceptionPort;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updateTime;

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
  /** @param int */
  public function setInterceptionPort($interceptionPort)
  {
    $this->interceptionPort = $interceptionPort;
  }
  /** @return int */
  public function getInterceptionPort()
  {
    return $this->interceptionPort;
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

class NetworkservicesEmpty extends \Google\Model
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

class ServiceBinding extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $service;
  /** @var string */
  public $updateTime;

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

class TcpRoute extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $gateways;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $meshes;
  /** @var string */
  public $name;
  /** @var TcpRouteRouteRule[] */
  public $rules;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'rules';
  protected $rulesType = TcpRouteRouteRule::class;
  protected $rulesDataType = 'array';
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
  public function setGateways($gateways)
  {
    $this->gateways = $gateways;
  }
  /** @return string[] */
  public function getGateways()
  {
    return $this->gateways;
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
  /** @param string[] */
  public function setMeshes($meshes)
  {
    $this->meshes = $meshes;
  }
  /** @return string[] */
  public function getMeshes()
  {
    return $this->meshes;
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
  /** @param TcpRouteRouteRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return TcpRouteRouteRule[] */
  public function getRules()
  {
    return $this->rules;
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

class TcpRouteRouteAction extends \Google\Collection
{
  /** @var TcpRouteRouteDestination[] */
  public $destinations;
  /** @var bool */
  public $originalDestination;
  protected $collection_key = 'destinations';
  protected $destinationsType = TcpRouteRouteDestination::class;
  protected $destinationsDataType = 'array';
  /** @param TcpRouteRouteDestination[] */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /** @return TcpRouteRouteDestination[] */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /** @param bool */
  public function setOriginalDestination($originalDestination)
  {
    $this->originalDestination = $originalDestination;
  }
  /** @return bool */
  public function getOriginalDestination()
  {
    return $this->originalDestination;
  }
}

class TcpRouteRouteDestination extends \Google\Model
{
  /** @var string */
  public $serviceName;
  /** @var int */
  public $weight;

  /** @param string */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
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

class TcpRouteRouteMatch extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string */
  public $port;

  /** @param string */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /** @return string */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param string */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return string */
  public function getPort()
  {
    return $this->port;
  }
}

class TcpRouteRouteRule extends \Google\Collection
{
  /** @var TcpRouteRouteAction */
  public $action;
  /** @var TcpRouteRouteMatch[] */
  public $matches;
  protected $collection_key = 'matches';
  protected $actionType = TcpRouteRouteAction::class;
  protected $actionDataType = '';
  protected $matchesType = TcpRouteRouteMatch::class;
  protected $matchesDataType = 'array';
  /** @param TcpRouteRouteAction */
  public function setAction(TcpRouteRouteAction $action)
  {
    $this->action = $action;
  }
  /** @return TcpRouteRouteAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param TcpRouteRouteMatch[] */
  public function setMatches($matches)
  {
    $this->matches = $matches;
  }
  /** @return TcpRouteRouteMatch[] */
  public function getMatches()
  {
    return $this->matches;
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

class TlsRoute extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $gateways;
  /** @var string[] */
  public $meshes;
  /** @var string */
  public $name;
  /** @var TlsRouteRouteRule[] */
  public $rules;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'rules';
  protected $rulesType = TlsRouteRouteRule::class;
  protected $rulesDataType = 'array';
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
  public function setGateways($gateways)
  {
    $this->gateways = $gateways;
  }
  /** @return string[] */
  public function getGateways()
  {
    return $this->gateways;
  }
  /** @param string[] */
  public function setMeshes($meshes)
  {
    $this->meshes = $meshes;
  }
  /** @return string[] */
  public function getMeshes()
  {
    return $this->meshes;
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
  /** @param TlsRouteRouteRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return TlsRouteRouteRule[] */
  public function getRules()
  {
    return $this->rules;
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

class TlsRouteRouteAction extends \Google\Collection
{
  /** @var TlsRouteRouteDestination[] */
  public $destinations;
  protected $collection_key = 'destinations';
  protected $destinationsType = TlsRouteRouteDestination::class;
  protected $destinationsDataType = 'array';
  /** @param TlsRouteRouteDestination[] */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /** @return TlsRouteRouteDestination[] */
  public function getDestinations()
  {
    return $this->destinations;
  }
}

class TlsRouteRouteDestination extends \Google\Model
{
  /** @var string */
  public $serviceName;
  /** @var int */
  public $weight;

  /** @param string */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
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

class TlsRouteRouteMatch extends \Google\Collection
{
  /** @var string[] */
  public $alpn;
  /** @var string[] */
  public $sniHost;
  protected $collection_key = 'sniHost';
  /** @param string[] */
  public function setAlpn($alpn)
  {
    $this->alpn = $alpn;
  }
  /** @return string[] */
  public function getAlpn()
  {
    return $this->alpn;
  }
  /** @param string[] */
  public function setSniHost($sniHost)
  {
    $this->sniHost = $sniHost;
  }
  /** @return string[] */
  public function getSniHost()
  {
    return $this->sniHost;
  }
}

class TlsRouteRouteRule extends \Google\Collection
{
  /** @var TlsRouteRouteAction */
  public $action;
  /** @var TlsRouteRouteMatch[] */
  public $matches;
  protected $collection_key = 'matches';
  protected $actionType = TlsRouteRouteAction::class;
  protected $actionDataType = '';
  protected $matchesType = TlsRouteRouteMatch::class;
  protected $matchesDataType = 'array';
  /** @param TlsRouteRouteAction */
  public function setAction(TlsRouteRouteAction $action)
  {
    $this->action = $action;
  }
  /** @return TlsRouteRouteAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param TlsRouteRouteMatch[] */
  public function setMatches($matches)
  {
    $this->matches = $matches;
  }
  /** @return TlsRouteRouteMatch[] */
  public function getMatches()
  {
    return $this->matches;
  }
}

class TrafficPortSelector extends \Google\Collection
{
  /** @var string[] */
  public $ports;
  protected $collection_key = 'ports';
  /** @param string[] */
  public function setPorts($ports)
  {
    $this->ports = $ports;
  }
  /** @return string[] */
  public function getPorts()
  {
    return $this->ports;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditConfig::class, 'Google_Service_NetworkServices_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_NetworkServices_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_NetworkServices_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_NetworkServices_CancelOperationRequest');
class_alias(EndpointMatcher::class, 'Google_Service_NetworkServices_EndpointMatcher');
class_alias(EndpointMatcherMetadataLabelMatcher::class, 'Google_Service_NetworkServices_EndpointMatcherMetadataLabelMatcher');
class_alias(EndpointMatcherMetadataLabelMatcherMetadataLabels::class, 'Google_Service_NetworkServices_EndpointMatcherMetadataLabelMatcherMetadataLabels');
class_alias(EndpointPolicy::class, 'Google_Service_NetworkServices_EndpointPolicy');
class_alias(Expr::class, 'Google_Service_NetworkServices_Expr');
class_alias(Gateway::class, 'Google_Service_NetworkServices_Gateway');
class_alias(GrpcRoute::class, 'Google_Service_NetworkServices_GrpcRoute');
class_alias(GrpcRouteDestination::class, 'Google_Service_NetworkServices_GrpcRouteDestination');
class_alias(GrpcRouteFaultInjectionPolicy::class, 'Google_Service_NetworkServices_GrpcRouteFaultInjectionPolicy');
class_alias(GrpcRouteFaultInjectionPolicyAbort::class, 'Google_Service_NetworkServices_GrpcRouteFaultInjectionPolicyAbort');
class_alias(GrpcRouteFaultInjectionPolicyDelay::class, 'Google_Service_NetworkServices_GrpcRouteFaultInjectionPolicyDelay');
class_alias(GrpcRouteHeaderMatch::class, 'Google_Service_NetworkServices_GrpcRouteHeaderMatch');
class_alias(GrpcRouteMethodMatch::class, 'Google_Service_NetworkServices_GrpcRouteMethodMatch');
class_alias(GrpcRouteRetryPolicy::class, 'Google_Service_NetworkServices_GrpcRouteRetryPolicy');
class_alias(GrpcRouteRouteAction::class, 'Google_Service_NetworkServices_GrpcRouteRouteAction');
class_alias(GrpcRouteRouteMatch::class, 'Google_Service_NetworkServices_GrpcRouteRouteMatch');
class_alias(GrpcRouteRouteRule::class, 'Google_Service_NetworkServices_GrpcRouteRouteRule');
class_alias(HttpRoute::class, 'Google_Service_NetworkServices_HttpRoute');
class_alias(HttpRouteCorsPolicy::class, 'Google_Service_NetworkServices_HttpRouteCorsPolicy');
class_alias(HttpRouteDestination::class, 'Google_Service_NetworkServices_HttpRouteDestination');
class_alias(HttpRouteFaultInjectionPolicy::class, 'Google_Service_NetworkServices_HttpRouteFaultInjectionPolicy');
class_alias(HttpRouteFaultInjectionPolicyAbort::class, 'Google_Service_NetworkServices_HttpRouteFaultInjectionPolicyAbort');
class_alias(HttpRouteFaultInjectionPolicyDelay::class, 'Google_Service_NetworkServices_HttpRouteFaultInjectionPolicyDelay');
class_alias(HttpRouteHeaderMatch::class, 'Google_Service_NetworkServices_HttpRouteHeaderMatch');
class_alias(HttpRouteHeaderMatchIntegerRange::class, 'Google_Service_NetworkServices_HttpRouteHeaderMatchIntegerRange');
class_alias(HttpRouteHeaderModifier::class, 'Google_Service_NetworkServices_HttpRouteHeaderModifier');
class_alias(HttpRouteQueryParameterMatch::class, 'Google_Service_NetworkServices_HttpRouteQueryParameterMatch');
class_alias(HttpRouteRedirect::class, 'Google_Service_NetworkServices_HttpRouteRedirect');
class_alias(HttpRouteRequestMirrorPolicy::class, 'Google_Service_NetworkServices_HttpRouteRequestMirrorPolicy');
class_alias(HttpRouteRetryPolicy::class, 'Google_Service_NetworkServices_HttpRouteRetryPolicy');
class_alias(HttpRouteRouteAction::class, 'Google_Service_NetworkServices_HttpRouteRouteAction');
class_alias(HttpRouteRouteMatch::class, 'Google_Service_NetworkServices_HttpRouteRouteMatch');
class_alias(HttpRouteRouteRule::class, 'Google_Service_NetworkServices_HttpRouteRouteRule');
class_alias(HttpRouteURLRewrite::class, 'Google_Service_NetworkServices_HttpRouteURLRewrite');
class_alias(ListEndpointPoliciesResponse::class, 'Google_Service_NetworkServices_ListEndpointPoliciesResponse');
class_alias(ListGatewaysResponse::class, 'Google_Service_NetworkServices_ListGatewaysResponse');
class_alias(ListGrpcRoutesResponse::class, 'Google_Service_NetworkServices_ListGrpcRoutesResponse');
class_alias(ListHttpRoutesResponse::class, 'Google_Service_NetworkServices_ListHttpRoutesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_NetworkServices_ListLocationsResponse');
class_alias(ListMeshesResponse::class, 'Google_Service_NetworkServices_ListMeshesResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_NetworkServices_ListOperationsResponse');
class_alias(ListServiceBindingsResponse::class, 'Google_Service_NetworkServices_ListServiceBindingsResponse');
class_alias(ListTcpRoutesResponse::class, 'Google_Service_NetworkServices_ListTcpRoutesResponse');
class_alias(ListTlsRoutesResponse::class, 'Google_Service_NetworkServices_ListTlsRoutesResponse');
class_alias(Location::class, 'Google_Service_NetworkServices_Location');
class_alias(Mesh::class, 'Google_Service_NetworkServices_Mesh');
class_alias(NetworkservicesEmpty::class, 'Google_Service_NetworkServices_NetworkservicesEmpty');
class_alias(Operation::class, 'Google_Service_NetworkServices_Operation');
class_alias(OperationMetadata::class, 'Google_Service_NetworkServices_OperationMetadata');
class_alias(Policy::class, 'Google_Service_NetworkServices_Policy');
class_alias(ServiceBinding::class, 'Google_Service_NetworkServices_ServiceBinding');
class_alias(SetIamPolicyRequest::class, 'Google_Service_NetworkServices_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_NetworkServices_Status');
class_alias(TcpRoute::class, 'Google_Service_NetworkServices_TcpRoute');
class_alias(TcpRouteRouteAction::class, 'Google_Service_NetworkServices_TcpRouteRouteAction');
class_alias(TcpRouteRouteDestination::class, 'Google_Service_NetworkServices_TcpRouteRouteDestination');
class_alias(TcpRouteRouteMatch::class, 'Google_Service_NetworkServices_TcpRouteRouteMatch');
class_alias(TcpRouteRouteRule::class, 'Google_Service_NetworkServices_TcpRouteRouteRule');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_NetworkServices_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_NetworkServices_TestIamPermissionsResponse');
class_alias(TlsRoute::class, 'Google_Service_NetworkServices_TlsRoute');
class_alias(TlsRouteRouteAction::class, 'Google_Service_NetworkServices_TlsRouteRouteAction');
class_alias(TlsRouteRouteDestination::class, 'Google_Service_NetworkServices_TlsRouteRouteDestination');
class_alias(TlsRouteRouteMatch::class, 'Google_Service_NetworkServices_TlsRouteRouteMatch');
class_alias(TlsRouteRouteRule::class, 'Google_Service_NetworkServices_TlsRouteRouteRule');
class_alias(TrafficPortSelector::class, 'Google_Service_NetworkServices_TrafficPortSelector');
