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

namespace Google\Service\NetworkSecurity;

class AuthorizationPolicy extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var Rule[] */
  public $rules;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'rules';
  protected $rulesType = Rule::class;
  protected $rulesDataType = 'array';
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
  /** @param Rule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return Rule[] */
  public function getRules()
  {
    return $this->rules;
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

class CancelOperationRequest extends \Google\Model
{
}

class CertificateProviderInstance extends \Google\Model
{
  /** @var string */
  public $pluginInstance;

  /** @param string */
  public function setPluginInstance($pluginInstance)
  {
    $this->pluginInstance = $pluginInstance;
  }
  /** @return string */
  public function getPluginInstance()
  {
    return $this->pluginInstance;
  }
}

class ClientTlsPolicy extends \Google\Collection
{
  /** @var GoogleCloudNetworksecurityV1CertificateProvider */
  public $clientCertificate;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var ValidationCA[] */
  public $serverValidationCa;
  /** @var string */
  public $sni;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'serverValidationCa';
  protected $clientCertificateType = GoogleCloudNetworksecurityV1CertificateProvider::class;
  protected $clientCertificateDataType = '';
  protected $serverValidationCaType = ValidationCA::class;
  protected $serverValidationCaDataType = 'array';
  /** @param GoogleCloudNetworksecurityV1CertificateProvider */
  public function setClientCertificate(GoogleCloudNetworksecurityV1CertificateProvider $clientCertificate)
  {
    $this->clientCertificate = $clientCertificate;
  }
  /** @return GoogleCloudNetworksecurityV1CertificateProvider */
  public function getClientCertificate()
  {
    return $this->clientCertificate;
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
  /** @param ValidationCA[] */
  public function setServerValidationCa($serverValidationCa)
  {
    $this->serverValidationCa = $serverValidationCa;
  }
  /** @return ValidationCA[] */
  public function getServerValidationCa()
  {
    return $this->serverValidationCa;
  }
  /** @param string */
  public function setSni($sni)
  {
    $this->sni = $sni;
  }
  /** @return string */
  public function getSni()
  {
    return $this->sni;
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

class Destination extends \Google\Collection
{
  /** @var string[] */
  public $hosts;
  /** @var HttpHeaderMatch */
  public $httpHeaderMatch;
  /** @var string[] */
  public $methods;
  /** @var string[] */
  public $ports;
  protected $collection_key = 'ports';
  protected $httpHeaderMatchType = HttpHeaderMatch::class;
  protected $httpHeaderMatchDataType = '';
  /** @param string[] */
  public function setHosts($hosts)
  {
    $this->hosts = $hosts;
  }
  /** @return string[] */
  public function getHosts()
  {
    return $this->hosts;
  }
  /** @param HttpHeaderMatch */
  public function setHttpHeaderMatch(HttpHeaderMatch $httpHeaderMatch)
  {
    $this->httpHeaderMatch = $httpHeaderMatch;
  }
  /** @return HttpHeaderMatch */
  public function getHttpHeaderMatch()
  {
    return $this->httpHeaderMatch;
  }
  /** @param string[] */
  public function setMethods($methods)
  {
    $this->methods = $methods;
  }
  /** @return string[] */
  public function getMethods()
  {
    return $this->methods;
  }
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

class GoogleCloudNetworksecurityV1CertificateProvider extends \Google\Model
{
  /** @var CertificateProviderInstance */
  public $certificateProviderInstance;
  /** @var GoogleCloudNetworksecurityV1GrpcEndpoint */
  public $grpcEndpoint;
  protected $certificateProviderInstanceType = CertificateProviderInstance::class;
  protected $certificateProviderInstanceDataType = '';
  protected $grpcEndpointType = GoogleCloudNetworksecurityV1GrpcEndpoint::class;
  protected $grpcEndpointDataType = '';
  /** @param CertificateProviderInstance */
  public function setCertificateProviderInstance(CertificateProviderInstance $certificateProviderInstance)
  {
    $this->certificateProviderInstance = $certificateProviderInstance;
  }
  /** @return CertificateProviderInstance */
  public function getCertificateProviderInstance()
  {
    return $this->certificateProviderInstance;
  }
  /** @param GoogleCloudNetworksecurityV1GrpcEndpoint */
  public function setGrpcEndpoint(GoogleCloudNetworksecurityV1GrpcEndpoint $grpcEndpoint)
  {
    $this->grpcEndpoint = $grpcEndpoint;
  }
  /** @return GoogleCloudNetworksecurityV1GrpcEndpoint */
  public function getGrpcEndpoint()
  {
    return $this->grpcEndpoint;
  }
}

class GoogleCloudNetworksecurityV1GrpcEndpoint extends \Google\Model
{
  /** @var string */
  public $targetUri;

  /** @param string */
  public function setTargetUri($targetUri)
  {
    $this->targetUri = $targetUri;
  }
  /** @return string */
  public function getTargetUri()
  {
    return $this->targetUri;
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

class HttpHeaderMatch extends \Google\Model
{
  /** @var string */
  public $headerName;
  /** @var string */
  public $regexMatch;

  /** @param string */
  public function setHeaderName($headerName)
  {
    $this->headerName = $headerName;
  }
  /** @return string */
  public function getHeaderName()
  {
    return $this->headerName;
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

class ListAuthorizationPoliciesResponse extends \Google\Collection
{
  /** @var AuthorizationPolicy[] */
  public $authorizationPolicies;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'authorizationPolicies';
  protected $authorizationPoliciesType = AuthorizationPolicy::class;
  protected $authorizationPoliciesDataType = 'array';
  /** @param AuthorizationPolicy[] */
  public function setAuthorizationPolicies($authorizationPolicies)
  {
    $this->authorizationPolicies = $authorizationPolicies;
  }
  /** @return AuthorizationPolicy[] */
  public function getAuthorizationPolicies()
  {
    return $this->authorizationPolicies;
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

class ListClientTlsPoliciesResponse extends \Google\Collection
{
  /** @var ClientTlsPolicy[] */
  public $clientTlsPolicies;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'clientTlsPolicies';
  protected $clientTlsPoliciesType = ClientTlsPolicy::class;
  protected $clientTlsPoliciesDataType = 'array';
  /** @param ClientTlsPolicy[] */
  public function setClientTlsPolicies($clientTlsPolicies)
  {
    $this->clientTlsPolicies = $clientTlsPolicies;
  }
  /** @return ClientTlsPolicy[] */
  public function getClientTlsPolicies()
  {
    return $this->clientTlsPolicies;
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

class ListServerTlsPoliciesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ServerTlsPolicy[] */
  public $serverTlsPolicies;
  protected $collection_key = 'serverTlsPolicies';
  protected $serverTlsPoliciesType = ServerTlsPolicy::class;
  protected $serverTlsPoliciesDataType = 'array';
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
  /** @param ServerTlsPolicy[] */
  public function setServerTlsPolicies($serverTlsPolicies)
  {
    $this->serverTlsPolicies = $serverTlsPolicies;
  }
  /** @return ServerTlsPolicy[] */
  public function getServerTlsPolicies()
  {
    return $this->serverTlsPolicies;
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

class MTLSPolicy extends \Google\Collection
{
  /** @var ValidationCA[] */
  public $clientValidationCa;
  protected $collection_key = 'clientValidationCa';
  protected $clientValidationCaType = ValidationCA::class;
  protected $clientValidationCaDataType = 'array';
  /** @param ValidationCA[] */
  public function setClientValidationCa($clientValidationCa)
  {
    $this->clientValidationCa = $clientValidationCa;
  }
  /** @return ValidationCA[] */
  public function getClientValidationCa()
  {
    return $this->clientValidationCa;
  }
}

class NetworksecurityEmpty extends \Google\Model
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

class Rule extends \Google\Collection
{
  /** @var Destination[] */
  public $destinations;
  /** @var Source[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $destinationsType = Destination::class;
  protected $destinationsDataType = 'array';
  protected $sourcesType = Source::class;
  protected $sourcesDataType = 'array';
  /** @param Destination[] */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /** @return Destination[] */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /** @param Source[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return Source[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class ServerTlsPolicy extends \Google\Model
{
  /** @var bool */
  public $allowOpen;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var MTLSPolicy */
  public $mtlsPolicy;
  /** @var string */
  public $name;
  /** @var GoogleCloudNetworksecurityV1CertificateProvider */
  public $serverCertificate;
  /** @var string */
  public $updateTime;
  protected $mtlsPolicyType = MTLSPolicy::class;
  protected $mtlsPolicyDataType = '';
  protected $serverCertificateType = GoogleCloudNetworksecurityV1CertificateProvider::class;
  protected $serverCertificateDataType = '';
  /** @param bool */
  public function setAllowOpen($allowOpen)
  {
    $this->allowOpen = $allowOpen;
  }
  /** @return bool */
  public function getAllowOpen()
  {
    return $this->allowOpen;
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
  /** @param MTLSPolicy */
  public function setMtlsPolicy(MTLSPolicy $mtlsPolicy)
  {
    $this->mtlsPolicy = $mtlsPolicy;
  }
  /** @return MTLSPolicy */
  public function getMtlsPolicy()
  {
    return $this->mtlsPolicy;
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
  /** @param GoogleCloudNetworksecurityV1CertificateProvider */
  public function setServerCertificate(GoogleCloudNetworksecurityV1CertificateProvider $serverCertificate)
  {
    $this->serverCertificate = $serverCertificate;
  }
  /** @return GoogleCloudNetworksecurityV1CertificateProvider */
  public function getServerCertificate()
  {
    return $this->serverCertificate;
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

class Source extends \Google\Collection
{
  /** @var string[] */
  public $ipBlocks;
  /** @var string[] */
  public $principals;
  protected $collection_key = 'principals';
  /** @param string[] */
  public function setIpBlocks($ipBlocks)
  {
    $this->ipBlocks = $ipBlocks;
  }
  /** @return string[] */
  public function getIpBlocks()
  {
    return $this->ipBlocks;
  }
  /** @param string[] */
  public function setPrincipals($principals)
  {
    $this->principals = $principals;
  }
  /** @return string[] */
  public function getPrincipals()
  {
    return $this->principals;
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

class ValidationCA extends \Google\Model
{
  /** @var CertificateProviderInstance */
  public $certificateProviderInstance;
  /** @var GoogleCloudNetworksecurityV1GrpcEndpoint */
  public $grpcEndpoint;
  protected $certificateProviderInstanceType = CertificateProviderInstance::class;
  protected $certificateProviderInstanceDataType = '';
  protected $grpcEndpointType = GoogleCloudNetworksecurityV1GrpcEndpoint::class;
  protected $grpcEndpointDataType = '';
  /** @param CertificateProviderInstance */
  public function setCertificateProviderInstance(CertificateProviderInstance $certificateProviderInstance)
  {
    $this->certificateProviderInstance = $certificateProviderInstance;
  }
  /** @return CertificateProviderInstance */
  public function getCertificateProviderInstance()
  {
    return $this->certificateProviderInstance;
  }
  /** @param GoogleCloudNetworksecurityV1GrpcEndpoint */
  public function setGrpcEndpoint(GoogleCloudNetworksecurityV1GrpcEndpoint $grpcEndpoint)
  {
    $this->grpcEndpoint = $grpcEndpoint;
  }
  /** @return GoogleCloudNetworksecurityV1GrpcEndpoint */
  public function getGrpcEndpoint()
  {
    return $this->grpcEndpoint;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuthorizationPolicy::class, 'Google_Service_NetworkSecurity_AuthorizationPolicy');
class_alias(CancelOperationRequest::class, 'Google_Service_NetworkSecurity_CancelOperationRequest');
class_alias(CertificateProviderInstance::class, 'Google_Service_NetworkSecurity_CertificateProviderInstance');
class_alias(ClientTlsPolicy::class, 'Google_Service_NetworkSecurity_ClientTlsPolicy');
class_alias(Destination::class, 'Google_Service_NetworkSecurity_Destination');
class_alias(Expr::class, 'Google_Service_NetworkSecurity_Expr');
class_alias(GoogleCloudNetworksecurityV1CertificateProvider::class, 'Google_Service_NetworkSecurity_GoogleCloudNetworksecurityV1CertificateProvider');
class_alias(GoogleCloudNetworksecurityV1GrpcEndpoint::class, 'Google_Service_NetworkSecurity_GoogleCloudNetworksecurityV1GrpcEndpoint');
class_alias(GoogleIamV1AuditConfig::class, 'Google_Service_NetworkSecurity_GoogleIamV1AuditConfig');
class_alias(GoogleIamV1AuditLogConfig::class, 'Google_Service_NetworkSecurity_GoogleIamV1AuditLogConfig');
class_alias(GoogleIamV1Binding::class, 'Google_Service_NetworkSecurity_GoogleIamV1Binding');
class_alias(GoogleIamV1Policy::class, 'Google_Service_NetworkSecurity_GoogleIamV1Policy');
class_alias(GoogleIamV1SetIamPolicyRequest::class, 'Google_Service_NetworkSecurity_GoogleIamV1SetIamPolicyRequest');
class_alias(GoogleIamV1TestIamPermissionsRequest::class, 'Google_Service_NetworkSecurity_GoogleIamV1TestIamPermissionsRequest');
class_alias(GoogleIamV1TestIamPermissionsResponse::class, 'Google_Service_NetworkSecurity_GoogleIamV1TestIamPermissionsResponse');
class_alias(HttpHeaderMatch::class, 'Google_Service_NetworkSecurity_HttpHeaderMatch');
class_alias(ListAuthorizationPoliciesResponse::class, 'Google_Service_NetworkSecurity_ListAuthorizationPoliciesResponse');
class_alias(ListClientTlsPoliciesResponse::class, 'Google_Service_NetworkSecurity_ListClientTlsPoliciesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_NetworkSecurity_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_NetworkSecurity_ListOperationsResponse');
class_alias(ListServerTlsPoliciesResponse::class, 'Google_Service_NetworkSecurity_ListServerTlsPoliciesResponse');
class_alias(Location::class, 'Google_Service_NetworkSecurity_Location');
class_alias(MTLSPolicy::class, 'Google_Service_NetworkSecurity_MTLSPolicy');
class_alias(NetworksecurityEmpty::class, 'Google_Service_NetworkSecurity_NetworksecurityEmpty');
class_alias(Operation::class, 'Google_Service_NetworkSecurity_Operation');
class_alias(OperationMetadata::class, 'Google_Service_NetworkSecurity_OperationMetadata');
class_alias(Rule::class, 'Google_Service_NetworkSecurity_Rule');
class_alias(ServerTlsPolicy::class, 'Google_Service_NetworkSecurity_ServerTlsPolicy');
class_alias(Source::class, 'Google_Service_NetworkSecurity_Source');
class_alias(Status::class, 'Google_Service_NetworkSecurity_Status');
class_alias(ValidationCA::class, 'Google_Service_NetworkSecurity_ValidationCA');
