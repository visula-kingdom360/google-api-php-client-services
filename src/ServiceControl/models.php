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

namespace Google\Service\ServiceControl;

class Api extends \Google\Model
{
  /** @var string */
  public $operation;
  /** @var string */
  public $protocol;
  /** @var string */
  public $service;
  /** @var string */
  public $version;

  /** @param string */
  public function setOperation($operation)
  {
    $this->operation = $operation;
  }
  /** @return string */
  public function getOperation()
  {
    return $this->operation;
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

class AttributeContext extends \Google\Collection
{
  /** @var Api */
  public $api;
  /** @var Peer */
  public $destination;
  /** @var array[] */
  public $extensions;
  /** @var Peer */
  public $origin;
  /** @var Request */
  public $request;
  /** @var ServicecontrolResource */
  public $resource;
  /** @var Response */
  public $response;
  /** @var Peer */
  public $source;
  protected $collection_key = 'extensions';
  protected $apiType = Api::class;
  protected $apiDataType = '';
  protected $destinationType = Peer::class;
  protected $destinationDataType = '';
  protected $originType = Peer::class;
  protected $originDataType = '';
  protected $requestType = Request::class;
  protected $requestDataType = '';
  protected $resourceType = ServicecontrolResource::class;
  protected $resourceDataType = '';
  protected $responseType = Response::class;
  protected $responseDataType = '';
  protected $sourceType = Peer::class;
  protected $sourceDataType = '';
  /** @param Api */
  public function setApi(Api $api)
  {
    $this->api = $api;
  }
  /** @return Api */
  public function getApi()
  {
    return $this->api;
  }
  /** @param Peer */
  public function setDestination(Peer $destination)
  {
    $this->destination = $destination;
  }
  /** @return Peer */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param array[] */
  public function setExtensions($extensions)
  {
    $this->extensions = $extensions;
  }
  /** @return array[] */
  public function getExtensions()
  {
    return $this->extensions;
  }
  /** @param Peer */
  public function setOrigin(Peer $origin)
  {
    $this->origin = $origin;
  }
  /** @return Peer */
  public function getOrigin()
  {
    return $this->origin;
  }
  /** @param Request */
  public function setRequest(Request $request)
  {
    $this->request = $request;
  }
  /** @return Request */
  public function getRequest()
  {
    return $this->request;
  }
  /** @param ServicecontrolResource */
  public function setResource(ServicecontrolResource $resource)
  {
    $this->resource = $resource;
  }
  /** @return ServicecontrolResource */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param Response */
  public function setResponse(Response $response)
  {
    $this->response = $response;
  }
  /** @return Response */
  public function getResponse()
  {
    return $this->response;
  }
  /** @param Peer */
  public function setSource(Peer $source)
  {
    $this->source = $source;
  }
  /** @return Peer */
  public function getSource()
  {
    return $this->source;
  }
}

class AuditLog extends \Google\Collection
{
  /** @var AuthenticationInfo */
  public $authenticationInfo;
  /** @var AuthorizationInfo[] */
  public $authorizationInfo;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $methodName;
  /** @var string */
  public $numResponseItems;
  /** @var PolicyViolationInfo */
  public $policyViolationInfo;
  /** @var array[] */
  public $request;
  /** @var RequestMetadata */
  public $requestMetadata;
  /** @var ResourceLocation */
  public $resourceLocation;
  /** @var string */
  public $resourceName;
  /** @var array[] */
  public $resourceOriginalState;
  /** @var array[] */
  public $response;
  /** @var array[] */
  public $serviceData;
  /** @var string */
  public $serviceName;
  /** @var Status */
  public $status;
  protected $collection_key = 'authorizationInfo';
  protected $authenticationInfoType = AuthenticationInfo::class;
  protected $authenticationInfoDataType = '';
  protected $authorizationInfoType = AuthorizationInfo::class;
  protected $authorizationInfoDataType = 'array';
  protected $policyViolationInfoType = PolicyViolationInfo::class;
  protected $policyViolationInfoDataType = '';
  protected $requestMetadataType = RequestMetadata::class;
  protected $requestMetadataDataType = '';
  protected $resourceLocationType = ResourceLocation::class;
  protected $resourceLocationDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param AuthenticationInfo */
  public function setAuthenticationInfo(AuthenticationInfo $authenticationInfo)
  {
    $this->authenticationInfo = $authenticationInfo;
  }
  /** @return AuthenticationInfo */
  public function getAuthenticationInfo()
  {
    return $this->authenticationInfo;
  }
  /** @param AuthorizationInfo[] */
  public function setAuthorizationInfo($authorizationInfo)
  {
    $this->authorizationInfo = $authorizationInfo;
  }
  /** @return AuthorizationInfo[] */
  public function getAuthorizationInfo()
  {
    return $this->authorizationInfo;
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
  public function setMethodName($methodName)
  {
    $this->methodName = $methodName;
  }
  /** @return string */
  public function getMethodName()
  {
    return $this->methodName;
  }
  /** @param string */
  public function setNumResponseItems($numResponseItems)
  {
    $this->numResponseItems = $numResponseItems;
  }
  /** @return string */
  public function getNumResponseItems()
  {
    return $this->numResponseItems;
  }
  /** @param PolicyViolationInfo */
  public function setPolicyViolationInfo(PolicyViolationInfo $policyViolationInfo)
  {
    $this->policyViolationInfo = $policyViolationInfo;
  }
  /** @return PolicyViolationInfo */
  public function getPolicyViolationInfo()
  {
    return $this->policyViolationInfo;
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
  /** @param RequestMetadata */
  public function setRequestMetadata(RequestMetadata $requestMetadata)
  {
    $this->requestMetadata = $requestMetadata;
  }
  /** @return RequestMetadata */
  public function getRequestMetadata()
  {
    return $this->requestMetadata;
  }
  /** @param ResourceLocation */
  public function setResourceLocation(ResourceLocation $resourceLocation)
  {
    $this->resourceLocation = $resourceLocation;
  }
  /** @return ResourceLocation */
  public function getResourceLocation()
  {
    return $this->resourceLocation;
  }
  /** @param string */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /** @param array[] */
  public function setResourceOriginalState($resourceOriginalState)
  {
    $this->resourceOriginalState = $resourceOriginalState;
  }
  /** @return array[] */
  public function getResourceOriginalState()
  {
    return $this->resourceOriginalState;
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
  /** @param array[] */
  public function setServiceData($serviceData)
  {
    $this->serviceData = $serviceData;
  }
  /** @return array[] */
  public function getServiceData()
  {
    return $this->serviceData;
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
  /** @param Status */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /** @return Status */
  public function getStatus()
  {
    return $this->status;
  }
}

class Auth extends \Google\Collection
{
  /** @var string[] */
  public $accessLevels;
  /** @var string[] */
  public $audiences;
  /** @var array[] */
  public $claims;
  /** @var string */
  public $presenter;
  /** @var string */
  public $principal;
  protected $collection_key = 'audiences';
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
  /** @param string[] */
  public function setAudiences($audiences)
  {
    $this->audiences = $audiences;
  }
  /** @return string[] */
  public function getAudiences()
  {
    return $this->audiences;
  }
  /** @param array[] */
  public function setClaims($claims)
  {
    $this->claims = $claims;
  }
  /** @return array[] */
  public function getClaims()
  {
    return $this->claims;
  }
  /** @param string */
  public function setPresenter($presenter)
  {
    $this->presenter = $presenter;
  }
  /** @return string */
  public function getPresenter()
  {
    return $this->presenter;
  }
  /** @param string */
  public function setPrincipal($principal)
  {
    $this->principal = $principal;
  }
  /** @return string */
  public function getPrincipal()
  {
    return $this->principal;
  }
}

class AuthenticationInfo extends \Google\Collection
{
  /** @var string */
  public $authoritySelector;
  /** @var string */
  public $principalEmail;
  /** @var string */
  public $principalSubject;
  /** @var ServiceAccountDelegationInfo[] */
  public $serviceAccountDelegationInfo;
  /** @var string */
  public $serviceAccountKeyName;
  /** @var array[] */
  public $thirdPartyPrincipal;
  protected $collection_key = 'serviceAccountDelegationInfo';
  protected $serviceAccountDelegationInfoType = ServiceAccountDelegationInfo::class;
  protected $serviceAccountDelegationInfoDataType = 'array';
  /** @param string */
  public function setAuthoritySelector($authoritySelector)
  {
    $this->authoritySelector = $authoritySelector;
  }
  /** @return string */
  public function getAuthoritySelector()
  {
    return $this->authoritySelector;
  }
  /** @param string */
  public function setPrincipalEmail($principalEmail)
  {
    $this->principalEmail = $principalEmail;
  }
  /** @return string */
  public function getPrincipalEmail()
  {
    return $this->principalEmail;
  }
  /** @param string */
  public function setPrincipalSubject($principalSubject)
  {
    $this->principalSubject = $principalSubject;
  }
  /** @return string */
  public function getPrincipalSubject()
  {
    return $this->principalSubject;
  }
  /** @param ServiceAccountDelegationInfo[] */
  public function setServiceAccountDelegationInfo($serviceAccountDelegationInfo)
  {
    $this->serviceAccountDelegationInfo = $serviceAccountDelegationInfo;
  }
  /** @return ServiceAccountDelegationInfo[] */
  public function getServiceAccountDelegationInfo()
  {
    return $this->serviceAccountDelegationInfo;
  }
  /** @param string */
  public function setServiceAccountKeyName($serviceAccountKeyName)
  {
    $this->serviceAccountKeyName = $serviceAccountKeyName;
  }
  /** @return string */
  public function getServiceAccountKeyName()
  {
    return $this->serviceAccountKeyName;
  }
  /** @param array[] */
  public function setThirdPartyPrincipal($thirdPartyPrincipal)
  {
    $this->thirdPartyPrincipal = $thirdPartyPrincipal;
  }
  /** @return array[] */
  public function getThirdPartyPrincipal()
  {
    return $this->thirdPartyPrincipal;
  }
}

class AuthorizationInfo extends \Google\Model
{
  /** @var bool */
  public $granted;
  /** @var string */
  public $permission;
  /** @var string */
  public $resource;
  /** @var ServicecontrolResource */
  public $resourceAttributes;
  protected $resourceAttributesType = ServicecontrolResource::class;
  protected $resourceAttributesDataType = '';
  /** @param bool */
  public function setGranted($granted)
  {
    $this->granted = $granted;
  }
  /** @return bool */
  public function getGranted()
  {
    return $this->granted;
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
  /** @param ServicecontrolResource */
  public function setResourceAttributes(ServicecontrolResource $resourceAttributes)
  {
    $this->resourceAttributes = $resourceAttributes;
  }
  /** @return ServicecontrolResource */
  public function getResourceAttributes()
  {
    return $this->resourceAttributes;
  }
}

class CheckRequest extends \Google\Collection
{
  /** @var AttributeContext */
  public $attributes;
  /** @var string */
  public $flags;
  /** @var ResourceInfo[] */
  public $resources;
  /** @var string */
  public $serviceConfigId;
  protected $collection_key = 'resources';
  protected $attributesType = AttributeContext::class;
  protected $attributesDataType = '';
  protected $resourcesType = ResourceInfo::class;
  protected $resourcesDataType = 'array';
  /** @param AttributeContext */
  public function setAttributes(AttributeContext $attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return AttributeContext */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setFlags($flags)
  {
    $this->flags = $flags;
  }
  /** @return string */
  public function getFlags()
  {
    return $this->flags;
  }
  /** @param ResourceInfo[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return ResourceInfo[] */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param string */
  public function setServiceConfigId($serviceConfigId)
  {
    $this->serviceConfigId = $serviceConfigId;
  }
  /** @return string */
  public function getServiceConfigId()
  {
    return $this->serviceConfigId;
  }
}

class CheckResponse extends \Google\Model
{
  /** @var string[] */
  public $headers;
  /** @var Status */
  public $status;
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param Status */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /** @return Status */
  public function getStatus()
  {
    return $this->status;
  }
}

class FirstPartyPrincipal extends \Google\Model
{
  /** @var string */
  public $principalEmail;
  /** @var array[] */
  public $serviceMetadata;

  /** @param string */
  public function setPrincipalEmail($principalEmail)
  {
    $this->principalEmail = $principalEmail;
  }
  /** @return string */
  public function getPrincipalEmail()
  {
    return $this->principalEmail;
  }
  /** @param array[] */
  public function setServiceMetadata($serviceMetadata)
  {
    $this->serviceMetadata = $serviceMetadata;
  }
  /** @return array[] */
  public function getServiceMetadata()
  {
    return $this->serviceMetadata;
  }
}

class OrgPolicyViolationInfo extends \Google\Collection
{
  /** @var array[] */
  public $payload;
  /** @var string[] */
  public $resourceTags;
  /** @var string */
  public $resourceType;
  /** @var ViolationInfo[] */
  public $violationInfo;
  protected $collection_key = 'violationInfo';
  protected $violationInfoType = ViolationInfo::class;
  protected $violationInfoDataType = 'array';
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param string[] */
  public function setResourceTags($resourceTags)
  {
    $this->resourceTags = $resourceTags;
  }
  /** @return string[] */
  public function getResourceTags()
  {
    return $this->resourceTags;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /** @param ViolationInfo[] */
  public function setViolationInfo($violationInfo)
  {
    $this->violationInfo = $violationInfo;
  }
  /** @return ViolationInfo[] */
  public function getViolationInfo()
  {
    return $this->violationInfo;
  }
}

class Peer extends \Google\Model
{
  /** @var string */
  public $ip;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $port;
  /** @var string */
  public $principal;
  /** @var string */
  public $regionCode;

  /** @param string */
  public function setIp($ip)
  {
    $this->ip = $ip;
  }
  /** @return string */
  public function getIp()
  {
    return $this->ip;
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
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return string */
  public function getPort()
  {
    return $this->port;
  }
  /** @param string */
  public function setPrincipal($principal)
  {
    $this->principal = $principal;
  }
  /** @return string */
  public function getPrincipal()
  {
    return $this->principal;
  }
  /** @param string */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /** @return string */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
}

class PolicyViolationInfo extends \Google\Model
{
  /** @var OrgPolicyViolationInfo */
  public $orgPolicyViolationInfo;
  protected $orgPolicyViolationInfoType = OrgPolicyViolationInfo::class;
  protected $orgPolicyViolationInfoDataType = '';
  /** @param OrgPolicyViolationInfo */
  public function setOrgPolicyViolationInfo(OrgPolicyViolationInfo $orgPolicyViolationInfo)
  {
    $this->orgPolicyViolationInfo = $orgPolicyViolationInfo;
  }
  /** @return OrgPolicyViolationInfo */
  public function getOrgPolicyViolationInfo()
  {
    return $this->orgPolicyViolationInfo;
  }
}

class ReportRequest extends \Google\Collection
{
  /** @var AttributeContext[] */
  public $operations;
  /** @var string */
  public $serviceConfigId;
  protected $collection_key = 'operations';
  protected $operationsType = AttributeContext::class;
  protected $operationsDataType = 'array';
  /** @param AttributeContext[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return AttributeContext[] */
  public function getOperations()
  {
    return $this->operations;
  }
  /** @param string */
  public function setServiceConfigId($serviceConfigId)
  {
    $this->serviceConfigId = $serviceConfigId;
  }
  /** @return string */
  public function getServiceConfigId()
  {
    return $this->serviceConfigId;
  }
}

class ReportResponse extends \Google\Model
{
}

class Request extends \Google\Model
{
  /** @var Auth */
  public $auth;
  /** @var string[] */
  public $headers;
  /** @var string */
  public $host;
  /** @var string */
  public $id;
  /** @var string */
  public $method;
  /** @var string */
  public $path;
  /** @var string */
  public $protocol;
  /** @var string */
  public $query;
  /** @var string */
  public $reason;
  /** @var string */
  public $scheme;
  /** @var string */
  public $size;
  /** @var string */
  public $time;
  protected $authType = Auth::class;
  protected $authDataType = '';
  /** @param Auth */
  public function setAuth(Auth $auth)
  {
    $this->auth = $auth;
  }
  /** @return Auth */
  public function getAuth()
  {
    return $this->auth;
  }
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param string */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /** @return string */
  public function getHost()
  {
    return $this->host;
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
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
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
  public function setScheme($scheme)
  {
    $this->scheme = $scheme;
  }
  /** @return string */
  public function getScheme()
  {
    return $this->scheme;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
  }
  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
  }
}

class RequestMetadata extends \Google\Model
{
  /** @var string */
  public $callerIp;
  /** @var string */
  public $callerNetwork;
  /** @var string */
  public $callerSuppliedUserAgent;
  /** @var Peer */
  public $destinationAttributes;
  /** @var Request */
  public $requestAttributes;
  protected $destinationAttributesType = Peer::class;
  protected $destinationAttributesDataType = '';
  protected $requestAttributesType = Request::class;
  protected $requestAttributesDataType = '';
  /** @param string */
  public function setCallerIp($callerIp)
  {
    $this->callerIp = $callerIp;
  }
  /** @return string */
  public function getCallerIp()
  {
    return $this->callerIp;
  }
  /** @param string */
  public function setCallerNetwork($callerNetwork)
  {
    $this->callerNetwork = $callerNetwork;
  }
  /** @return string */
  public function getCallerNetwork()
  {
    return $this->callerNetwork;
  }
  /** @param string */
  public function setCallerSuppliedUserAgent($callerSuppliedUserAgent)
  {
    $this->callerSuppliedUserAgent = $callerSuppliedUserAgent;
  }
  /** @return string */
  public function getCallerSuppliedUserAgent()
  {
    return $this->callerSuppliedUserAgent;
  }
  /** @param Peer */
  public function setDestinationAttributes(Peer $destinationAttributes)
  {
    $this->destinationAttributes = $destinationAttributes;
  }
  /** @return Peer */
  public function getDestinationAttributes()
  {
    return $this->destinationAttributes;
  }
  /** @param Request */
  public function setRequestAttributes(Request $requestAttributes)
  {
    $this->requestAttributes = $requestAttributes;
  }
  /** @return Request */
  public function getRequestAttributes()
  {
    return $this->requestAttributes;
  }
}

class ResourceInfo extends \Google\Model
{
  /** @var string */
  public $container;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $permission;
  /** @var string */
  public $type;

  /** @param string */
  public function setContainer($container)
  {
    $this->container = $container;
  }
  /** @return string */
  public function getContainer()
  {
    return $this->container;
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
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /** @return string */
  public function getPermission()
  {
    return $this->permission;
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

class ResourceLocation extends \Google\Collection
{
  /** @var string[] */
  public $currentLocations;
  /** @var string[] */
  public $originalLocations;
  protected $collection_key = 'originalLocations';
  /** @param string[] */
  public function setCurrentLocations($currentLocations)
  {
    $this->currentLocations = $currentLocations;
  }
  /** @return string[] */
  public function getCurrentLocations()
  {
    return $this->currentLocations;
  }
  /** @param string[] */
  public function setOriginalLocations($originalLocations)
  {
    $this->originalLocations = $originalLocations;
  }
  /** @return string[] */
  public function getOriginalLocations()
  {
    return $this->originalLocations;
  }
}

class Response extends \Google\Model
{
  /** @var string */
  public $backendLatency;
  /** @var string */
  public $code;
  /** @var string[] */
  public $headers;
  /** @var string */
  public $size;
  /** @var string */
  public $time;

  /** @param string */
  public function setBackendLatency($backendLatency)
  {
    $this->backendLatency = $backendLatency;
  }
  /** @return string */
  public function getBackendLatency()
  {
    return $this->backendLatency;
  }
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
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
  }
  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
  }
}

class ServiceAccountDelegationInfo extends \Google\Model
{
  /** @var FirstPartyPrincipal */
  public $firstPartyPrincipal;
  /** @var string */
  public $principalSubject;
  /** @var ThirdPartyPrincipal */
  public $thirdPartyPrincipal;
  protected $firstPartyPrincipalType = FirstPartyPrincipal::class;
  protected $firstPartyPrincipalDataType = '';
  protected $thirdPartyPrincipalType = ThirdPartyPrincipal::class;
  protected $thirdPartyPrincipalDataType = '';
  /** @param FirstPartyPrincipal */
  public function setFirstPartyPrincipal(FirstPartyPrincipal $firstPartyPrincipal)
  {
    $this->firstPartyPrincipal = $firstPartyPrincipal;
  }
  /** @return FirstPartyPrincipal */
  public function getFirstPartyPrincipal()
  {
    return $this->firstPartyPrincipal;
  }
  /** @param string */
  public function setPrincipalSubject($principalSubject)
  {
    $this->principalSubject = $principalSubject;
  }
  /** @return string */
  public function getPrincipalSubject()
  {
    return $this->principalSubject;
  }
  /** @param ThirdPartyPrincipal */
  public function setThirdPartyPrincipal(ThirdPartyPrincipal $thirdPartyPrincipal)
  {
    $this->thirdPartyPrincipal = $thirdPartyPrincipal;
  }
  /** @return ThirdPartyPrincipal */
  public function getThirdPartyPrincipal()
  {
    return $this->thirdPartyPrincipal;
  }
}

class ServicecontrolResource extends \Google\Model
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $service;
  /** @var string */
  public $type;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;

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

class SpanContext extends \Google\Model
{
  /** @var string */
  public $spanName;

  /** @param string */
  public function setSpanName($spanName)
  {
    $this->spanName = $spanName;
  }
  /** @return string */
  public function getSpanName()
  {
    return $this->spanName;
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

class ThirdPartyPrincipal extends \Google\Model
{
  /** @var array[] */
  public $thirdPartyClaims;

  /** @param array[] */
  public function setThirdPartyClaims($thirdPartyClaims)
  {
    $this->thirdPartyClaims = $thirdPartyClaims;
  }
  /** @return array[] */
  public function getThirdPartyClaims()
  {
    return $this->thirdPartyClaims;
  }
}

class V2HttpRequest extends \Google\Model
{
  /** @var string */
  public $cacheFillBytes;
  /** @var bool */
  public $cacheHit;
  /** @var bool */
  public $cacheLookup;
  /** @var bool */
  public $cacheValidatedWithOriginServer;
  /** @var string */
  public $latency;
  /** @var string */
  public $protocol;
  /** @var string */
  public $referer;
  /** @var string */
  public $remoteIp;
  /** @var string */
  public $requestMethod;
  /** @var string */
  public $requestSize;
  /** @var string */
  public $requestUrl;
  /** @var string */
  public $responseSize;
  /** @var string */
  public $serverIp;
  /** @var int */
  public $status;
  /** @var string */
  public $userAgent;

  /** @param string */
  public function setCacheFillBytes($cacheFillBytes)
  {
    $this->cacheFillBytes = $cacheFillBytes;
  }
  /** @return string */
  public function getCacheFillBytes()
  {
    return $this->cacheFillBytes;
  }
  /** @param bool */
  public function setCacheHit($cacheHit)
  {
    $this->cacheHit = $cacheHit;
  }
  /** @return bool */
  public function getCacheHit()
  {
    return $this->cacheHit;
  }
  /** @param bool */
  public function setCacheLookup($cacheLookup)
  {
    $this->cacheLookup = $cacheLookup;
  }
  /** @return bool */
  public function getCacheLookup()
  {
    return $this->cacheLookup;
  }
  /** @param bool */
  public function setCacheValidatedWithOriginServer($cacheValidatedWithOriginServer)
  {
    $this->cacheValidatedWithOriginServer = $cacheValidatedWithOriginServer;
  }
  /** @return bool */
  public function getCacheValidatedWithOriginServer()
  {
    return $this->cacheValidatedWithOriginServer;
  }
  /** @param string */
  public function setLatency($latency)
  {
    $this->latency = $latency;
  }
  /** @return string */
  public function getLatency()
  {
    return $this->latency;
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
  public function setReferer($referer)
  {
    $this->referer = $referer;
  }
  /** @return string */
  public function getReferer()
  {
    return $this->referer;
  }
  /** @param string */
  public function setRemoteIp($remoteIp)
  {
    $this->remoteIp = $remoteIp;
  }
  /** @return string */
  public function getRemoteIp()
  {
    return $this->remoteIp;
  }
  /** @param string */
  public function setRequestMethod($requestMethod)
  {
    $this->requestMethod = $requestMethod;
  }
  /** @return string */
  public function getRequestMethod()
  {
    return $this->requestMethod;
  }
  /** @param string */
  public function setRequestSize($requestSize)
  {
    $this->requestSize = $requestSize;
  }
  /** @return string */
  public function getRequestSize()
  {
    return $this->requestSize;
  }
  /** @param string */
  public function setRequestUrl($requestUrl)
  {
    $this->requestUrl = $requestUrl;
  }
  /** @return string */
  public function getRequestUrl()
  {
    return $this->requestUrl;
  }
  /** @param string */
  public function setResponseSize($responseSize)
  {
    $this->responseSize = $responseSize;
  }
  /** @return string */
  public function getResponseSize()
  {
    return $this->responseSize;
  }
  /** @param string */
  public function setServerIp($serverIp)
  {
    $this->serverIp = $serverIp;
  }
  /** @return string */
  public function getServerIp()
  {
    return $this->serverIp;
  }
  /** @param int */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return int */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /** @return string */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
}

class V2LogEntry extends \Google\Model
{
  /** @var V2HttpRequest */
  public $httpRequest;
  /** @var string */
  public $insertId;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $monitoredResourceLabels;
  /** @var string */
  public $name;
  /** @var V2LogEntryOperation */
  public $operation;
  /** @var array[] */
  public $protoPayload;
  /** @var string */
  public $severity;
  /** @var V2LogEntrySourceLocation */
  public $sourceLocation;
  /** @var array[] */
  public $structPayload;
  /** @var string */
  public $textPayload;
  /** @var string */
  public $timestamp;
  /** @var string */
  public $trace;
  protected $httpRequestType = V2HttpRequest::class;
  protected $httpRequestDataType = '';
  protected $operationType = V2LogEntryOperation::class;
  protected $operationDataType = '';
  protected $sourceLocationType = V2LogEntrySourceLocation::class;
  protected $sourceLocationDataType = '';
  /** @param V2HttpRequest */
  public function setHttpRequest(V2HttpRequest $httpRequest)
  {
    $this->httpRequest = $httpRequest;
  }
  /** @return V2HttpRequest */
  public function getHttpRequest()
  {
    return $this->httpRequest;
  }
  /** @param string */
  public function setInsertId($insertId)
  {
    $this->insertId = $insertId;
  }
  /** @return string */
  public function getInsertId()
  {
    return $this->insertId;
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
  public function setMonitoredResourceLabels($monitoredResourceLabels)
  {
    $this->monitoredResourceLabels = $monitoredResourceLabels;
  }
  /** @return string[] */
  public function getMonitoredResourceLabels()
  {
    return $this->monitoredResourceLabels;
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
  /** @param V2LogEntryOperation */
  public function setOperation(V2LogEntryOperation $operation)
  {
    $this->operation = $operation;
  }
  /** @return V2LogEntryOperation */
  public function getOperation()
  {
    return $this->operation;
  }
  /** @param array[] */
  public function setProtoPayload($protoPayload)
  {
    $this->protoPayload = $protoPayload;
  }
  /** @return array[] */
  public function getProtoPayload()
  {
    return $this->protoPayload;
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
  /** @param V2LogEntrySourceLocation */
  public function setSourceLocation(V2LogEntrySourceLocation $sourceLocation)
  {
    $this->sourceLocation = $sourceLocation;
  }
  /** @return V2LogEntrySourceLocation */
  public function getSourceLocation()
  {
    return $this->sourceLocation;
  }
  /** @param array[] */
  public function setStructPayload($structPayload)
  {
    $this->structPayload = $structPayload;
  }
  /** @return array[] */
  public function getStructPayload()
  {
    return $this->structPayload;
  }
  /** @param string */
  public function setTextPayload($textPayload)
  {
    $this->textPayload = $textPayload;
  }
  /** @return string */
  public function getTextPayload()
  {
    return $this->textPayload;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
  /** @param string */
  public function setTrace($trace)
  {
    $this->trace = $trace;
  }
  /** @return string */
  public function getTrace()
  {
    return $this->trace;
  }
}

class V2LogEntryOperation extends \Google\Model
{
  /** @var bool */
  public $first;
  /** @var string */
  public $id;
  /** @var bool */
  public $last;
  /** @var string */
  public $producer;

  /** @param bool */
  public function setFirst($first)
  {
    $this->first = $first;
  }
  /** @return bool */
  public function getFirst()
  {
    return $this->first;
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
  /** @param bool */
  public function setLast($last)
  {
    $this->last = $last;
  }
  /** @return bool */
  public function getLast()
  {
    return $this->last;
  }
  /** @param string */
  public function setProducer($producer)
  {
    $this->producer = $producer;
  }
  /** @return string */
  public function getProducer()
  {
    return $this->producer;
  }
}

class V2LogEntrySourceLocation extends \Google\Model
{
  /** @var string */
  public $file;
  /** @var string */
  public $function;
  /** @var string */
  public $line;

  /** @param string */
  public function setFile($file)
  {
    $this->file = $file;
  }
  /** @return string */
  public function getFile()
  {
    return $this->file;
  }
  /** @param string */
  public function setFunction($function)
  {
    $this->function = $function;
  }
  /** @return string */
  public function getFunction()
  {
    return $this->function;
  }
  /** @param string */
  public function setLine($line)
  {
    $this->line = $line;
  }
  /** @return string */
  public function getLine()
  {
    return $this->line;
  }
}

class ViolationInfo extends \Google\Model
{
  /** @var string */
  public $checkedValue;
  /** @var string */
  public $constraint;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $policyType;

  /** @param string */
  public function setCheckedValue($checkedValue)
  {
    $this->checkedValue = $checkedValue;
  }
  /** @return string */
  public function getCheckedValue()
  {
    return $this->checkedValue;
  }
  /** @param string */
  public function setConstraint($constraint)
  {
    $this->constraint = $constraint;
  }
  /** @return string */
  public function getConstraint()
  {
    return $this->constraint;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param string */
  public function setPolicyType($policyType)
  {
    $this->policyType = $policyType;
  }
  /** @return string */
  public function getPolicyType()
  {
    return $this->policyType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Api::class, 'Google_Service_ServiceControl_Api');
class_alias(AttributeContext::class, 'Google_Service_ServiceControl_AttributeContext');
class_alias(AuditLog::class, 'Google_Service_ServiceControl_AuditLog');
class_alias(Auth::class, 'Google_Service_ServiceControl_Auth');
class_alias(AuthenticationInfo::class, 'Google_Service_ServiceControl_AuthenticationInfo');
class_alias(AuthorizationInfo::class, 'Google_Service_ServiceControl_AuthorizationInfo');
class_alias(CheckRequest::class, 'Google_Service_ServiceControl_CheckRequest');
class_alias(CheckResponse::class, 'Google_Service_ServiceControl_CheckResponse');
class_alias(FirstPartyPrincipal::class, 'Google_Service_ServiceControl_FirstPartyPrincipal');
class_alias(OrgPolicyViolationInfo::class, 'Google_Service_ServiceControl_OrgPolicyViolationInfo');
class_alias(Peer::class, 'Google_Service_ServiceControl_Peer');
class_alias(PolicyViolationInfo::class, 'Google_Service_ServiceControl_PolicyViolationInfo');
class_alias(ReportRequest::class, 'Google_Service_ServiceControl_ReportRequest');
class_alias(ReportResponse::class, 'Google_Service_ServiceControl_ReportResponse');
class_alias(Request::class, 'Google_Service_ServiceControl_Request');
class_alias(RequestMetadata::class, 'Google_Service_ServiceControl_RequestMetadata');
class_alias(ResourceInfo::class, 'Google_Service_ServiceControl_ResourceInfo');
class_alias(ResourceLocation::class, 'Google_Service_ServiceControl_ResourceLocation');
class_alias(Response::class, 'Google_Service_ServiceControl_Response');
class_alias(ServiceAccountDelegationInfo::class, 'Google_Service_ServiceControl_ServiceAccountDelegationInfo');
class_alias(ServicecontrolResource::class, 'Google_Service_ServiceControl_ServicecontrolResource');
class_alias(SpanContext::class, 'Google_Service_ServiceControl_SpanContext');
class_alias(Status::class, 'Google_Service_ServiceControl_Status');
class_alias(ThirdPartyPrincipal::class, 'Google_Service_ServiceControl_ThirdPartyPrincipal');
class_alias(V2HttpRequest::class, 'Google_Service_ServiceControl_V2HttpRequest');
class_alias(V2LogEntry::class, 'Google_Service_ServiceControl_V2LogEntry');
class_alias(V2LogEntryOperation::class, 'Google_Service_ServiceControl_V2LogEntryOperation');
class_alias(V2LogEntrySourceLocation::class, 'Google_Service_ServiceControl_V2LogEntrySourceLocation');
class_alias(ViolationInfo::class, 'Google_Service_ServiceControl_ViolationInfo');
