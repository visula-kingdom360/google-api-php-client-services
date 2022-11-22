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

namespace Google\Service\AccessContextManager;

class AccessContextManagerOperationMetadata extends \Google\Model
{
}

class AccessLevel extends \Google\Model
{
  /** @var BasicLevel */
  public $basic;
  /** @var CustomLevel */
  public $custom;
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $title;
  protected $basicType = BasicLevel::class;
  protected $basicDataType = '';
  protected $customType = CustomLevel::class;
  protected $customDataType = '';
  /** @param BasicLevel */
  public function setBasic(BasicLevel $basic)
  {
    $this->basic = $basic;
  }
  /** @return BasicLevel */
  public function getBasic()
  {
    return $this->basic;
  }
  /** @param CustomLevel */
  public function setCustom(CustomLevel $custom)
  {
    $this->custom = $custom;
  }
  /** @return CustomLevel */
  public function getCustom()
  {
    return $this->custom;
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

class AccessPolicy extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string[] */
  public $scopes;
  /** @var string */
  public $title;
  protected $collection_key = 'scopes';
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string[] */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /** @return string[] */
  public function getScopes()
  {
    return $this->scopes;
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

class AccesscontextmanagerEmpty extends \Google\Model
{
}

class ApiOperation extends \Google\Collection
{
  /** @var MethodSelector[] */
  public $methodSelectors;
  /** @var string */
  public $serviceName;
  protected $collection_key = 'methodSelectors';
  protected $methodSelectorsType = MethodSelector::class;
  protected $methodSelectorsDataType = 'array';
  /** @param MethodSelector[] */
  public function setMethodSelectors($methodSelectors)
  {
    $this->methodSelectors = $methodSelectors;
  }
  /** @return MethodSelector[] */
  public function getMethodSelectors()
  {
    return $this->methodSelectors;
  }
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

class BasicLevel extends \Google\Collection
{
  /** @var string */
  public $combiningFunction;
  /** @var Condition[] */
  public $conditions;
  protected $collection_key = 'conditions';
  protected $conditionsType = Condition::class;
  protected $conditionsDataType = 'array';
  /** @param string */
  public function setCombiningFunction($combiningFunction)
  {
    $this->combiningFunction = $combiningFunction;
  }
  /** @return string */
  public function getCombiningFunction()
  {
    return $this->combiningFunction;
  }
  /** @param Condition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return Condition[] */
  public function getConditions()
  {
    return $this->conditions;
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

class CommitServicePerimetersRequest extends \Google\Model
{
  /** @var string */
  public $etag;

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
}

class CommitServicePerimetersResponse extends \Google\Collection
{
  /** @var ServicePerimeter[] */
  public $servicePerimeters;
  protected $collection_key = 'servicePerimeters';
  protected $servicePerimetersType = ServicePerimeter::class;
  protected $servicePerimetersDataType = 'array';
  /** @param ServicePerimeter[] */
  public function setServicePerimeters($servicePerimeters)
  {
    $this->servicePerimeters = $servicePerimeters;
  }
  /** @return ServicePerimeter[] */
  public function getServicePerimeters()
  {
    return $this->servicePerimeters;
  }
}

class Condition extends \Google\Collection
{
  /** @var DevicePolicy */
  public $devicePolicy;
  /** @var string[] */
  public $ipSubnetworks;
  /** @var string[] */
  public $members;
  /** @var bool */
  public $negate;
  /** @var string[] */
  public $regions;
  /** @var string[] */
  public $requiredAccessLevels;
  protected $collection_key = 'requiredAccessLevels';
  protected $devicePolicyType = DevicePolicy::class;
  protected $devicePolicyDataType = '';
  /** @param DevicePolicy */
  public function setDevicePolicy(DevicePolicy $devicePolicy)
  {
    $this->devicePolicy = $devicePolicy;
  }
  /** @return DevicePolicy */
  public function getDevicePolicy()
  {
    return $this->devicePolicy;
  }
  /** @param string[] */
  public function setIpSubnetworks($ipSubnetworks)
  {
    $this->ipSubnetworks = $ipSubnetworks;
  }
  /** @return string[] */
  public function getIpSubnetworks()
  {
    return $this->ipSubnetworks;
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
  /** @param bool */
  public function setNegate($negate)
  {
    $this->negate = $negate;
  }
  /** @return bool */
  public function getNegate()
  {
    return $this->negate;
  }
  /** @param string[] */
  public function setRegions($regions)
  {
    $this->regions = $regions;
  }
  /** @return string[] */
  public function getRegions()
  {
    return $this->regions;
  }
  /** @param string[] */
  public function setRequiredAccessLevels($requiredAccessLevels)
  {
    $this->requiredAccessLevels = $requiredAccessLevels;
  }
  /** @return string[] */
  public function getRequiredAccessLevels()
  {
    return $this->requiredAccessLevels;
  }
}

class CustomLevel extends \Google\Model
{
  /** @var Expr */
  public $expr;
  protected $exprType = Expr::class;
  protected $exprDataType = '';
  /** @param Expr */
  public function setExpr(Expr $expr)
  {
    $this->expr = $expr;
  }
  /** @return Expr */
  public function getExpr()
  {
    return $this->expr;
  }
}

class DevicePolicy extends \Google\Collection
{
  /** @var string[] */
  public $allowedDeviceManagementLevels;
  /** @var string[] */
  public $allowedEncryptionStatuses;
  /** @var OsConstraint[] */
  public $osConstraints;
  /** @var bool */
  public $requireAdminApproval;
  /** @var bool */
  public $requireCorpOwned;
  /** @var bool */
  public $requireScreenlock;
  protected $collection_key = 'osConstraints';
  protected $osConstraintsType = OsConstraint::class;
  protected $osConstraintsDataType = 'array';
  /** @param string[] */
  public function setAllowedDeviceManagementLevels($allowedDeviceManagementLevels)
  {
    $this->allowedDeviceManagementLevels = $allowedDeviceManagementLevels;
  }
  /** @return string[] */
  public function getAllowedDeviceManagementLevels()
  {
    return $this->allowedDeviceManagementLevels;
  }
  /** @param string[] */
  public function setAllowedEncryptionStatuses($allowedEncryptionStatuses)
  {
    $this->allowedEncryptionStatuses = $allowedEncryptionStatuses;
  }
  /** @return string[] */
  public function getAllowedEncryptionStatuses()
  {
    return $this->allowedEncryptionStatuses;
  }
  /** @param OsConstraint[] */
  public function setOsConstraints($osConstraints)
  {
    $this->osConstraints = $osConstraints;
  }
  /** @return OsConstraint[] */
  public function getOsConstraints()
  {
    return $this->osConstraints;
  }
  /** @param bool */
  public function setRequireAdminApproval($requireAdminApproval)
  {
    $this->requireAdminApproval = $requireAdminApproval;
  }
  /** @return bool */
  public function getRequireAdminApproval()
  {
    return $this->requireAdminApproval;
  }
  /** @param bool */
  public function setRequireCorpOwned($requireCorpOwned)
  {
    $this->requireCorpOwned = $requireCorpOwned;
  }
  /** @return bool */
  public function getRequireCorpOwned()
  {
    return $this->requireCorpOwned;
  }
  /** @param bool */
  public function setRequireScreenlock($requireScreenlock)
  {
    $this->requireScreenlock = $requireScreenlock;
  }
  /** @return bool */
  public function getRequireScreenlock()
  {
    return $this->requireScreenlock;
  }
}

class EgressFrom extends \Google\Collection
{
  /** @var string[] */
  public $identities;
  /** @var string */
  public $identityType;
  protected $collection_key = 'identities';
  /** @param string[] */
  public function setIdentities($identities)
  {
    $this->identities = $identities;
  }
  /** @return string[] */
  public function getIdentities()
  {
    return $this->identities;
  }
  /** @param string */
  public function setIdentityType($identityType)
  {
    $this->identityType = $identityType;
  }
  /** @return string */
  public function getIdentityType()
  {
    return $this->identityType;
  }
}

class EgressPolicy extends \Google\Model
{
  /** @var EgressFrom */
  public $egressFrom;
  /** @var EgressTo */
  public $egressTo;
  protected $egressFromType = EgressFrom::class;
  protected $egressFromDataType = '';
  protected $egressToType = EgressTo::class;
  protected $egressToDataType = '';
  /** @param EgressFrom */
  public function setEgressFrom(EgressFrom $egressFrom)
  {
    $this->egressFrom = $egressFrom;
  }
  /** @return EgressFrom */
  public function getEgressFrom()
  {
    return $this->egressFrom;
  }
  /** @param EgressTo */
  public function setEgressTo(EgressTo $egressTo)
  {
    $this->egressTo = $egressTo;
  }
  /** @return EgressTo */
  public function getEgressTo()
  {
    return $this->egressTo;
  }
}

class EgressTo extends \Google\Collection
{
  /** @var string[] */
  public $externalResources;
  /** @var ApiOperation[] */
  public $operations;
  /** @var string[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $operationsType = ApiOperation::class;
  protected $operationsDataType = 'array';
  /** @param string[] */
  public function setExternalResources($externalResources)
  {
    $this->externalResources = $externalResources;
  }
  /** @return string[] */
  public function getExternalResources()
  {
    return $this->externalResources;
  }
  /** @param ApiOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return ApiOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
  /** @param string[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return string[] */
  public function getResources()
  {
    return $this->resources;
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

class GcpUserAccessBinding extends \Google\Collection
{
  /** @var string[] */
  public $accessLevels;
  /** @var string */
  public $groupKey;
  /** @var string */
  public $name;
  protected $collection_key = 'accessLevels';
  /** @param string[] */
  public function setAccessLevels($accessLevels)
  {
    $this->accessLevels = $accessLevels;
  }
  /** @return string[] */
  public function getAccessLevels()
  {
    return $this->accessLevels;
  }
  /** @param string */
  public function setGroupKey($groupKey)
  {
    $this->groupKey = $groupKey;
  }
  /** @return string */
  public function getGroupKey()
  {
    return $this->groupKey;
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

class GcpUserAccessBindingOperationMetadata extends \Google\Model
{
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

class IngressFrom extends \Google\Collection
{
  /** @var string[] */
  public $identities;
  /** @var string */
  public $identityType;
  /** @var IngressSource[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $sourcesType = IngressSource::class;
  protected $sourcesDataType = 'array';
  /** @param string[] */
  public function setIdentities($identities)
  {
    $this->identities = $identities;
  }
  /** @return string[] */
  public function getIdentities()
  {
    return $this->identities;
  }
  /** @param string */
  public function setIdentityType($identityType)
  {
    $this->identityType = $identityType;
  }
  /** @return string */
  public function getIdentityType()
  {
    return $this->identityType;
  }
  /** @param IngressSource[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return IngressSource[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class IngressPolicy extends \Google\Model
{
  /** @var IngressFrom */
  public $ingressFrom;
  /** @var IngressTo */
  public $ingressTo;
  protected $ingressFromType = IngressFrom::class;
  protected $ingressFromDataType = '';
  protected $ingressToType = IngressTo::class;
  protected $ingressToDataType = '';
  /** @param IngressFrom */
  public function setIngressFrom(IngressFrom $ingressFrom)
  {
    $this->ingressFrom = $ingressFrom;
  }
  /** @return IngressFrom */
  public function getIngressFrom()
  {
    return $this->ingressFrom;
  }
  /** @param IngressTo */
  public function setIngressTo(IngressTo $ingressTo)
  {
    $this->ingressTo = $ingressTo;
  }
  /** @return IngressTo */
  public function getIngressTo()
  {
    return $this->ingressTo;
  }
}

class IngressSource extends \Google\Model
{
  /** @var string */
  public $accessLevel;
  /** @var string */
  public $resource;

  /** @param string */
  public function setAccessLevel($accessLevel)
  {
    $this->accessLevel = $accessLevel;
  }
  /** @return string */
  public function getAccessLevel()
  {
    return $this->accessLevel;
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
}

class IngressTo extends \Google\Collection
{
  /** @var ApiOperation[] */
  public $operations;
  /** @var string[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $operationsType = ApiOperation::class;
  protected $operationsDataType = 'array';
  /** @param ApiOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return ApiOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
  /** @param string[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return string[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class ListAccessLevelsResponse extends \Google\Collection
{
  /** @var AccessLevel[] */
  public $accessLevels;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accessLevels';
  protected $accessLevelsType = AccessLevel::class;
  protected $accessLevelsDataType = 'array';
  /** @param AccessLevel[] */
  public function setAccessLevels($accessLevels)
  {
    $this->accessLevels = $accessLevels;
  }
  /** @return AccessLevel[] */
  public function getAccessLevels()
  {
    return $this->accessLevels;
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

class ListAccessPoliciesResponse extends \Google\Collection
{
  /** @var AccessPolicy[] */
  public $accessPolicies;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accessPolicies';
  protected $accessPoliciesType = AccessPolicy::class;
  protected $accessPoliciesDataType = 'array';
  /** @param AccessPolicy[] */
  public function setAccessPolicies($accessPolicies)
  {
    $this->accessPolicies = $accessPolicies;
  }
  /** @return AccessPolicy[] */
  public function getAccessPolicies()
  {
    return $this->accessPolicies;
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

class ListGcpUserAccessBindingsResponse extends \Google\Collection
{
  /** @var GcpUserAccessBinding[] */
  public $gcpUserAccessBindings;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'gcpUserAccessBindings';
  protected $gcpUserAccessBindingsType = GcpUserAccessBinding::class;
  protected $gcpUserAccessBindingsDataType = 'array';
  /** @param GcpUserAccessBinding[] */
  public function setGcpUserAccessBindings($gcpUserAccessBindings)
  {
    $this->gcpUserAccessBindings = $gcpUserAccessBindings;
  }
  /** @return GcpUserAccessBinding[] */
  public function getGcpUserAccessBindings()
  {
    return $this->gcpUserAccessBindings;
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

class ListServicePerimetersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ServicePerimeter[] */
  public $servicePerimeters;
  protected $collection_key = 'servicePerimeters';
  protected $servicePerimetersType = ServicePerimeter::class;
  protected $servicePerimetersDataType = 'array';
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
  /** @param ServicePerimeter[] */
  public function setServicePerimeters($servicePerimeters)
  {
    $this->servicePerimeters = $servicePerimeters;
  }
  /** @return ServicePerimeter[] */
  public function getServicePerimeters()
  {
    return $this->servicePerimeters;
  }
}

class MethodSelector extends \Google\Model
{
  /** @var string */
  public $method;
  /** @var string */
  public $permission;

  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string */
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /** @return string */
  public function getPermission()
  {
    return $this->permission;
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

class OsConstraint extends \Google\Model
{
  /** @var string */
  public $minimumVersion;
  /** @var string */
  public $osType;
  /** @var bool */
  public $requireVerifiedChromeOs;

  /** @param string */
  public function setMinimumVersion($minimumVersion)
  {
    $this->minimumVersion = $minimumVersion;
  }
  /** @return string */
  public function getMinimumVersion()
  {
    return $this->minimumVersion;
  }
  /** @param string */
  public function setOsType($osType)
  {
    $this->osType = $osType;
  }
  /** @return string */
  public function getOsType()
  {
    return $this->osType;
  }
  /** @param bool */
  public function setRequireVerifiedChromeOs($requireVerifiedChromeOs)
  {
    $this->requireVerifiedChromeOs = $requireVerifiedChromeOs;
  }
  /** @return bool */
  public function getRequireVerifiedChromeOs()
  {
    return $this->requireVerifiedChromeOs;
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

class ReplaceAccessLevelsRequest extends \Google\Collection
{
  /** @var AccessLevel[] */
  public $accessLevels;
  /** @var string */
  public $etag;
  protected $collection_key = 'accessLevels';
  protected $accessLevelsType = AccessLevel::class;
  protected $accessLevelsDataType = 'array';
  /** @param AccessLevel[] */
  public function setAccessLevels($accessLevels)
  {
    $this->accessLevels = $accessLevels;
  }
  /** @return AccessLevel[] */
  public function getAccessLevels()
  {
    return $this->accessLevels;
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
}

class ReplaceAccessLevelsResponse extends \Google\Collection
{
  /** @var AccessLevel[] */
  public $accessLevels;
  protected $collection_key = 'accessLevels';
  protected $accessLevelsType = AccessLevel::class;
  protected $accessLevelsDataType = 'array';
  /** @param AccessLevel[] */
  public function setAccessLevels($accessLevels)
  {
    $this->accessLevels = $accessLevels;
  }
  /** @return AccessLevel[] */
  public function getAccessLevels()
  {
    return $this->accessLevels;
  }
}

class ReplaceServicePerimetersRequest extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var ServicePerimeter[] */
  public $servicePerimeters;
  protected $collection_key = 'servicePerimeters';
  protected $servicePerimetersType = ServicePerimeter::class;
  protected $servicePerimetersDataType = 'array';
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
  /** @param ServicePerimeter[] */
  public function setServicePerimeters($servicePerimeters)
  {
    $this->servicePerimeters = $servicePerimeters;
  }
  /** @return ServicePerimeter[] */
  public function getServicePerimeters()
  {
    return $this->servicePerimeters;
  }
}

class ReplaceServicePerimetersResponse extends \Google\Collection
{
  /** @var ServicePerimeter[] */
  public $servicePerimeters;
  protected $collection_key = 'servicePerimeters';
  protected $servicePerimetersType = ServicePerimeter::class;
  protected $servicePerimetersDataType = 'array';
  /** @param ServicePerimeter[] */
  public function setServicePerimeters($servicePerimeters)
  {
    $this->servicePerimeters = $servicePerimeters;
  }
  /** @return ServicePerimeter[] */
  public function getServicePerimeters()
  {
    return $this->servicePerimeters;
  }
}

class ServicePerimeter extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $perimeterType;
  /** @var ServicePerimeterConfig */
  public $spec;
  /** @var ServicePerimeterConfig */
  public $status;
  /** @var string */
  public $title;
  /** @var bool */
  public $useExplicitDryRunSpec;
  protected $specType = ServicePerimeterConfig::class;
  protected $specDataType = '';
  protected $statusType = ServicePerimeterConfig::class;
  protected $statusDataType = '';
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
  public function setPerimeterType($perimeterType)
  {
    $this->perimeterType = $perimeterType;
  }
  /** @return string */
  public function getPerimeterType()
  {
    return $this->perimeterType;
  }
  /** @param ServicePerimeterConfig */
  public function setSpec(ServicePerimeterConfig $spec)
  {
    $this->spec = $spec;
  }
  /** @return ServicePerimeterConfig */
  public function getSpec()
  {
    return $this->spec;
  }
  /** @param ServicePerimeterConfig */
  public function setStatus(ServicePerimeterConfig $status)
  {
    $this->status = $status;
  }
  /** @return ServicePerimeterConfig */
  public function getStatus()
  {
    return $this->status;
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
  /** @param bool */
  public function setUseExplicitDryRunSpec($useExplicitDryRunSpec)
  {
    $this->useExplicitDryRunSpec = $useExplicitDryRunSpec;
  }
  /** @return bool */
  public function getUseExplicitDryRunSpec()
  {
    return $this->useExplicitDryRunSpec;
  }
}

class ServicePerimeterConfig extends \Google\Collection
{
  /** @var string[] */
  public $accessLevels;
  /** @var EgressPolicy[] */
  public $egressPolicies;
  /** @var IngressPolicy[] */
  public $ingressPolicies;
  /** @var string[] */
  public $resources;
  /** @var string[] */
  public $restrictedServices;
  /** @var VpcAccessibleServices */
  public $vpcAccessibleServices;
  protected $collection_key = 'restrictedServices';
  protected $egressPoliciesType = EgressPolicy::class;
  protected $egressPoliciesDataType = 'array';
  protected $ingressPoliciesType = IngressPolicy::class;
  protected $ingressPoliciesDataType = 'array';
  protected $vpcAccessibleServicesType = VpcAccessibleServices::class;
  protected $vpcAccessibleServicesDataType = '';
  /** @param string[] */
  public function setAccessLevels($accessLevels)
  {
    $this->accessLevels = $accessLevels;
  }
  /** @return string[] */
  public function getAccessLevels()
  {
    return $this->accessLevels;
  }
  /** @param EgressPolicy[] */
  public function setEgressPolicies($egressPolicies)
  {
    $this->egressPolicies = $egressPolicies;
  }
  /** @return EgressPolicy[] */
  public function getEgressPolicies()
  {
    return $this->egressPolicies;
  }
  /** @param IngressPolicy[] */
  public function setIngressPolicies($ingressPolicies)
  {
    $this->ingressPolicies = $ingressPolicies;
  }
  /** @return IngressPolicy[] */
  public function getIngressPolicies()
  {
    return $this->ingressPolicies;
  }
  /** @param string[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return string[] */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param string[] */
  public function setRestrictedServices($restrictedServices)
  {
    $this->restrictedServices = $restrictedServices;
  }
  /** @return string[] */
  public function getRestrictedServices()
  {
    return $this->restrictedServices;
  }
  /** @param VpcAccessibleServices */
  public function setVpcAccessibleServices(VpcAccessibleServices $vpcAccessibleServices)
  {
    $this->vpcAccessibleServices = $vpcAccessibleServices;
  }
  /** @return VpcAccessibleServices */
  public function getVpcAccessibleServices()
  {
    return $this->vpcAccessibleServices;
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

class VpcAccessibleServices extends \Google\Collection
{
  /** @var string[] */
  public $allowedServices;
  /** @var bool */
  public $enableRestriction;
  protected $collection_key = 'allowedServices';
  /** @param string[] */
  public function setAllowedServices($allowedServices)
  {
    $this->allowedServices = $allowedServices;
  }
  /** @return string[] */
  public function getAllowedServices()
  {
    return $this->allowedServices;
  }
  /** @param bool */
  public function setEnableRestriction($enableRestriction)
  {
    $this->enableRestriction = $enableRestriction;
  }
  /** @return bool */
  public function getEnableRestriction()
  {
    return $this->enableRestriction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessContextManagerOperationMetadata::class, 'Google_Service_AccessContextManager_AccessContextManagerOperationMetadata');
class_alias(AccessLevel::class, 'Google_Service_AccessContextManager_AccessLevel');
class_alias(AccessPolicy::class, 'Google_Service_AccessContextManager_AccessPolicy');
class_alias(AccesscontextmanagerEmpty::class, 'Google_Service_AccessContextManager_AccesscontextmanagerEmpty');
class_alias(ApiOperation::class, 'Google_Service_AccessContextManager_ApiOperation');
class_alias(AuditConfig::class, 'Google_Service_AccessContextManager_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_AccessContextManager_AuditLogConfig');
class_alias(BasicLevel::class, 'Google_Service_AccessContextManager_BasicLevel');
class_alias(Binding::class, 'Google_Service_AccessContextManager_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_AccessContextManager_CancelOperationRequest');
class_alias(CommitServicePerimetersRequest::class, 'Google_Service_AccessContextManager_CommitServicePerimetersRequest');
class_alias(CommitServicePerimetersResponse::class, 'Google_Service_AccessContextManager_CommitServicePerimetersResponse');
class_alias(Condition::class, 'Google_Service_AccessContextManager_Condition');
class_alias(CustomLevel::class, 'Google_Service_AccessContextManager_CustomLevel');
class_alias(DevicePolicy::class, 'Google_Service_AccessContextManager_DevicePolicy');
class_alias(EgressFrom::class, 'Google_Service_AccessContextManager_EgressFrom');
class_alias(EgressPolicy::class, 'Google_Service_AccessContextManager_EgressPolicy');
class_alias(EgressTo::class, 'Google_Service_AccessContextManager_EgressTo');
class_alias(Expr::class, 'Google_Service_AccessContextManager_Expr');
class_alias(GcpUserAccessBinding::class, 'Google_Service_AccessContextManager_GcpUserAccessBinding');
class_alias(GcpUserAccessBindingOperationMetadata::class, 'Google_Service_AccessContextManager_GcpUserAccessBindingOperationMetadata');
class_alias(GetIamPolicyRequest::class, 'Google_Service_AccessContextManager_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_AccessContextManager_GetPolicyOptions');
class_alias(IngressFrom::class, 'Google_Service_AccessContextManager_IngressFrom');
class_alias(IngressPolicy::class, 'Google_Service_AccessContextManager_IngressPolicy');
class_alias(IngressSource::class, 'Google_Service_AccessContextManager_IngressSource');
class_alias(IngressTo::class, 'Google_Service_AccessContextManager_IngressTo');
class_alias(ListAccessLevelsResponse::class, 'Google_Service_AccessContextManager_ListAccessLevelsResponse');
class_alias(ListAccessPoliciesResponse::class, 'Google_Service_AccessContextManager_ListAccessPoliciesResponse');
class_alias(ListGcpUserAccessBindingsResponse::class, 'Google_Service_AccessContextManager_ListGcpUserAccessBindingsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_AccessContextManager_ListOperationsResponse');
class_alias(ListServicePerimetersResponse::class, 'Google_Service_AccessContextManager_ListServicePerimetersResponse');
class_alias(MethodSelector::class, 'Google_Service_AccessContextManager_MethodSelector');
class_alias(Operation::class, 'Google_Service_AccessContextManager_Operation');
class_alias(OsConstraint::class, 'Google_Service_AccessContextManager_OsConstraint');
class_alias(Policy::class, 'Google_Service_AccessContextManager_Policy');
class_alias(ReplaceAccessLevelsRequest::class, 'Google_Service_AccessContextManager_ReplaceAccessLevelsRequest');
class_alias(ReplaceAccessLevelsResponse::class, 'Google_Service_AccessContextManager_ReplaceAccessLevelsResponse');
class_alias(ReplaceServicePerimetersRequest::class, 'Google_Service_AccessContextManager_ReplaceServicePerimetersRequest');
class_alias(ReplaceServicePerimetersResponse::class, 'Google_Service_AccessContextManager_ReplaceServicePerimetersResponse');
class_alias(ServicePerimeter::class, 'Google_Service_AccessContextManager_ServicePerimeter');
class_alias(ServicePerimeterConfig::class, 'Google_Service_AccessContextManager_ServicePerimeterConfig');
class_alias(SetIamPolicyRequest::class, 'Google_Service_AccessContextManager_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_AccessContextManager_Status');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_AccessContextManager_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_AccessContextManager_TestIamPermissionsResponse');
class_alias(VpcAccessibleServices::class, 'Google_Service_AccessContextManager_VpcAccessibleServices');
