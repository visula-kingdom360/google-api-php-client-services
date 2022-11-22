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

namespace Google\Service\Apigateway;

class ApigatewayApi extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $managedService;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
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
  public function setManagedService($managedService)
  {
    $this->managedService = $managedService;
  }
  /** @return string */
  public function getManagedService()
  {
    return $this->managedService;
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

class ApigatewayApiConfig extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $gatewayServiceAccount;
  /** @var ApigatewayApiConfigGrpcServiceDefinition[] */
  public $grpcServices;
  /** @var string[] */
  public $labels;
  /** @var ApigatewayApiConfigFile[] */
  public $managedServiceConfigs;
  /** @var string */
  public $name;
  /** @var ApigatewayApiConfigOpenApiDocument[] */
  public $openapiDocuments;
  /** @var string */
  public $serviceConfigId;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'openapiDocuments';
  protected $grpcServicesType = ApigatewayApiConfigGrpcServiceDefinition::class;
  protected $grpcServicesDataType = 'array';
  protected $managedServiceConfigsType = ApigatewayApiConfigFile::class;
  protected $managedServiceConfigsDataType = 'array';
  protected $openapiDocumentsType = ApigatewayApiConfigOpenApiDocument::class;
  protected $openapiDocumentsDataType = 'array';
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
  public function setGatewayServiceAccount($gatewayServiceAccount)
  {
    $this->gatewayServiceAccount = $gatewayServiceAccount;
  }
  /** @return string */
  public function getGatewayServiceAccount()
  {
    return $this->gatewayServiceAccount;
  }
  /** @param ApigatewayApiConfigGrpcServiceDefinition[] */
  public function setGrpcServices($grpcServices)
  {
    $this->grpcServices = $grpcServices;
  }
  /** @return ApigatewayApiConfigGrpcServiceDefinition[] */
  public function getGrpcServices()
  {
    return $this->grpcServices;
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
  /** @param ApigatewayApiConfigFile[] */
  public function setManagedServiceConfigs($managedServiceConfigs)
  {
    $this->managedServiceConfigs = $managedServiceConfigs;
  }
  /** @return ApigatewayApiConfigFile[] */
  public function getManagedServiceConfigs()
  {
    return $this->managedServiceConfigs;
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
  /** @param ApigatewayApiConfigOpenApiDocument[] */
  public function setOpenapiDocuments($openapiDocuments)
  {
    $this->openapiDocuments = $openapiDocuments;
  }
  /** @return ApigatewayApiConfigOpenApiDocument[] */
  public function getOpenapiDocuments()
  {
    return $this->openapiDocuments;
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

class ApigatewayApiConfigFile extends \Google\Model
{
  /** @var string */
  public $contents;
  /** @var string */
  public $path;

  /** @param string */
  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  /** @return string */
  public function getContents()
  {
    return $this->contents;
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
}

class ApigatewayApiConfigGrpcServiceDefinition extends \Google\Collection
{
  /** @var ApigatewayApiConfigFile */
  public $fileDescriptorSet;
  /** @var ApigatewayApiConfigFile[] */
  public $source;
  protected $collection_key = 'source';
  protected $fileDescriptorSetType = ApigatewayApiConfigFile::class;
  protected $fileDescriptorSetDataType = '';
  protected $sourceType = ApigatewayApiConfigFile::class;
  protected $sourceDataType = 'array';
  /** @param ApigatewayApiConfigFile */
  public function setFileDescriptorSet(ApigatewayApiConfigFile $fileDescriptorSet)
  {
    $this->fileDescriptorSet = $fileDescriptorSet;
  }
  /** @return ApigatewayApiConfigFile */
  public function getFileDescriptorSet()
  {
    return $this->fileDescriptorSet;
  }
  /** @param ApigatewayApiConfigFile[] */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return ApigatewayApiConfigFile[] */
  public function getSource()
  {
    return $this->source;
  }
}

class ApigatewayApiConfigOpenApiDocument extends \Google\Model
{
  /** @var ApigatewayApiConfigFile */
  public $document;
  protected $documentType = ApigatewayApiConfigFile::class;
  protected $documentDataType = '';
  /** @param ApigatewayApiConfigFile */
  public function setDocument(ApigatewayApiConfigFile $document)
  {
    $this->document = $document;
  }
  /** @return ApigatewayApiConfigFile */
  public function getDocument()
  {
    return $this->document;
  }
}

class ApigatewayAuditConfig extends \Google\Collection
{
  /** @var ApigatewayAuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = ApigatewayAuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param ApigatewayAuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return ApigatewayAuditLogConfig[] */
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

class ApigatewayAuditLogConfig extends \Google\Collection
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

class ApigatewayBinding extends \Google\Collection
{
  /** @var ApigatewayExpr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = ApigatewayExpr::class;
  protected $conditionDataType = '';
  /** @param ApigatewayExpr */
  public function setCondition(ApigatewayExpr $condition)
  {
    $this->condition = $condition;
  }
  /** @return ApigatewayExpr */
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

class ApigatewayCancelOperationRequest extends \Google\Model
{
}

class ApigatewayEmpty extends \Google\Model
{
}

class ApigatewayExpr extends \Google\Model
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

class ApigatewayGateway extends \Google\Model
{
  /** @var string */
  public $apiConfig;
  /** @var string */
  public $createTime;
  /** @var string */
  public $defaultHostname;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setApiConfig($apiConfig)
  {
    $this->apiConfig = $apiConfig;
  }
  /** @return string */
  public function getApiConfig()
  {
    return $this->apiConfig;
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
  public function setDefaultHostname($defaultHostname)
  {
    $this->defaultHostname = $defaultHostname;
  }
  /** @return string */
  public function getDefaultHostname()
  {
    return $this->defaultHostname;
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

class ApigatewayListApiConfigsResponse extends \Google\Collection
{
  /** @var ApigatewayApiConfig[] */
  public $apiConfigs;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachableLocations;
  protected $collection_key = 'unreachableLocations';
  protected $apiConfigsType = ApigatewayApiConfig::class;
  protected $apiConfigsDataType = 'array';
  /** @param ApigatewayApiConfig[] */
  public function setApiConfigs($apiConfigs)
  {
    $this->apiConfigs = $apiConfigs;
  }
  /** @return ApigatewayApiConfig[] */
  public function getApiConfigs()
  {
    return $this->apiConfigs;
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
  public function setUnreachableLocations($unreachableLocations)
  {
    $this->unreachableLocations = $unreachableLocations;
  }
  /** @return string[] */
  public function getUnreachableLocations()
  {
    return $this->unreachableLocations;
  }
}

class ApigatewayListApisResponse extends \Google\Collection
{
  /** @var ApigatewayApi[] */
  public $apis;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachableLocations;
  protected $collection_key = 'unreachableLocations';
  protected $apisType = ApigatewayApi::class;
  protected $apisDataType = 'array';
  /** @param ApigatewayApi[] */
  public function setApis($apis)
  {
    $this->apis = $apis;
  }
  /** @return ApigatewayApi[] */
  public function getApis()
  {
    return $this->apis;
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
  public function setUnreachableLocations($unreachableLocations)
  {
    $this->unreachableLocations = $unreachableLocations;
  }
  /** @return string[] */
  public function getUnreachableLocations()
  {
    return $this->unreachableLocations;
  }
}

class ApigatewayListGatewaysResponse extends \Google\Collection
{
  /** @var ApigatewayGateway[] */
  public $gateways;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachableLocations;
  protected $collection_key = 'unreachableLocations';
  protected $gatewaysType = ApigatewayGateway::class;
  protected $gatewaysDataType = 'array';
  /** @param ApigatewayGateway[] */
  public function setGateways($gateways)
  {
    $this->gateways = $gateways;
  }
  /** @return ApigatewayGateway[] */
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
  /** @param string[] */
  public function setUnreachableLocations($unreachableLocations)
  {
    $this->unreachableLocations = $unreachableLocations;
  }
  /** @return string[] */
  public function getUnreachableLocations()
  {
    return $this->unreachableLocations;
  }
}

class ApigatewayListLocationsResponse extends \Google\Collection
{
  /** @var ApigatewayLocation[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = ApigatewayLocation::class;
  protected $locationsDataType = 'array';
  /** @param ApigatewayLocation[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return ApigatewayLocation[] */
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

class ApigatewayListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ApigatewayOperation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = ApigatewayOperation::class;
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
  /** @param ApigatewayOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return ApigatewayOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class ApigatewayLocation extends \Google\Model
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

class ApigatewayOperation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var ApigatewayStatus */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = ApigatewayStatus::class;
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
  /** @param ApigatewayStatus */
  public function setError(ApigatewayStatus $error)
  {
    $this->error = $error;
  }
  /** @return ApigatewayStatus */
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

class ApigatewayOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $createTime;
  /** @var ApigatewayOperationMetadataDiagnostic[] */
  public $diagnostics;
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
  protected $collection_key = 'diagnostics';
  protected $diagnosticsType = ApigatewayOperationMetadataDiagnostic::class;
  protected $diagnosticsDataType = 'array';
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
  /** @param ApigatewayOperationMetadataDiagnostic[] */
  public function setDiagnostics($diagnostics)
  {
    $this->diagnostics = $diagnostics;
  }
  /** @return ApigatewayOperationMetadataDiagnostic[] */
  public function getDiagnostics()
  {
    return $this->diagnostics;
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

class ApigatewayOperationMetadataDiagnostic extends \Google\Model
{
  /** @var string */
  public $location;
  /** @var string */
  public $message;

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

class ApigatewayPolicy extends \Google\Collection
{
  /** @var ApigatewayAuditConfig[] */
  public $auditConfigs;
  /** @var ApigatewayBinding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = ApigatewayAuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = ApigatewayBinding::class;
  protected $bindingsDataType = 'array';
  /** @param ApigatewayAuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return ApigatewayAuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
  /** @param ApigatewayBinding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return ApigatewayBinding[] */
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

class ApigatewaySetIamPolicyRequest extends \Google\Model
{
  /** @var ApigatewayPolicy */
  public $policy;
  /** @var string */
  public $updateMask;
  protected $policyType = ApigatewayPolicy::class;
  protected $policyDataType = '';
  /** @param ApigatewayPolicy */
  public function setPolicy(ApigatewayPolicy $policy)
  {
    $this->policy = $policy;
  }
  /** @return ApigatewayPolicy */
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

class ApigatewayStatus extends \Google\Collection
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

class ApigatewayTestIamPermissionsRequest extends \Google\Collection
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

class ApigatewayTestIamPermissionsResponse extends \Google\Collection
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
class_alias(ApigatewayApi::class, 'Google_Service_Apigateway_ApigatewayApi');
class_alias(ApigatewayApiConfig::class, 'Google_Service_Apigateway_ApigatewayApiConfig');
class_alias(ApigatewayApiConfigFile::class, 'Google_Service_Apigateway_ApigatewayApiConfigFile');
class_alias(ApigatewayApiConfigGrpcServiceDefinition::class, 'Google_Service_Apigateway_ApigatewayApiConfigGrpcServiceDefinition');
class_alias(ApigatewayApiConfigOpenApiDocument::class, 'Google_Service_Apigateway_ApigatewayApiConfigOpenApiDocument');
class_alias(ApigatewayAuditConfig::class, 'Google_Service_Apigateway_ApigatewayAuditConfig');
class_alias(ApigatewayAuditLogConfig::class, 'Google_Service_Apigateway_ApigatewayAuditLogConfig');
class_alias(ApigatewayBinding::class, 'Google_Service_Apigateway_ApigatewayBinding');
class_alias(ApigatewayCancelOperationRequest::class, 'Google_Service_Apigateway_ApigatewayCancelOperationRequest');
class_alias(ApigatewayEmpty::class, 'Google_Service_Apigateway_ApigatewayEmpty');
class_alias(ApigatewayExpr::class, 'Google_Service_Apigateway_ApigatewayExpr');
class_alias(ApigatewayGateway::class, 'Google_Service_Apigateway_ApigatewayGateway');
class_alias(ApigatewayListApiConfigsResponse::class, 'Google_Service_Apigateway_ApigatewayListApiConfigsResponse');
class_alias(ApigatewayListApisResponse::class, 'Google_Service_Apigateway_ApigatewayListApisResponse');
class_alias(ApigatewayListGatewaysResponse::class, 'Google_Service_Apigateway_ApigatewayListGatewaysResponse');
class_alias(ApigatewayListLocationsResponse::class, 'Google_Service_Apigateway_ApigatewayListLocationsResponse');
class_alias(ApigatewayListOperationsResponse::class, 'Google_Service_Apigateway_ApigatewayListOperationsResponse');
class_alias(ApigatewayLocation::class, 'Google_Service_Apigateway_ApigatewayLocation');
class_alias(ApigatewayOperation::class, 'Google_Service_Apigateway_ApigatewayOperation');
class_alias(ApigatewayOperationMetadata::class, 'Google_Service_Apigateway_ApigatewayOperationMetadata');
class_alias(ApigatewayOperationMetadataDiagnostic::class, 'Google_Service_Apigateway_ApigatewayOperationMetadataDiagnostic');
class_alias(ApigatewayPolicy::class, 'Google_Service_Apigateway_ApigatewayPolicy');
class_alias(ApigatewaySetIamPolicyRequest::class, 'Google_Service_Apigateway_ApigatewaySetIamPolicyRequest');
class_alias(ApigatewayStatus::class, 'Google_Service_Apigateway_ApigatewayStatus');
class_alias(ApigatewayTestIamPermissionsRequest::class, 'Google_Service_Apigateway_ApigatewayTestIamPermissionsRequest');
class_alias(ApigatewayTestIamPermissionsResponse::class, 'Google_Service_Apigateway_ApigatewayTestIamPermissionsResponse');
