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

namespace Google\Service\ServiceManagement;

class Advice extends \Google\Model
{
  /** @var string */
  public $description;

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
}

class Api extends \Google\Collection
{
  /** @var Method[] */
  public $methods;
  /** @var Mixin[] */
  public $mixins;
  /** @var string */
  public $name;
  /** @var Option[] */
  public $options;
  /** @var SourceContext */
  public $sourceContext;
  /** @var string */
  public $syntax;
  /** @var string */
  public $version;
  protected $collection_key = 'options';
  protected $methodsType = Method::class;
  protected $methodsDataType = 'array';
  protected $mixinsType = Mixin::class;
  protected $mixinsDataType = 'array';
  protected $optionsType = Option::class;
  protected $optionsDataType = 'array';
  protected $sourceContextType = SourceContext::class;
  protected $sourceContextDataType = '';
  /** @param Method[] */
  public function setMethods($methods)
  {
    $this->methods = $methods;
  }
  /** @return Method[] */
  public function getMethods()
  {
    return $this->methods;
  }
  /** @param Mixin[] */
  public function setMixins($mixins)
  {
    $this->mixins = $mixins;
  }
  /** @return Mixin[] */
  public function getMixins()
  {
    return $this->mixins;
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
  /** @param Option[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return Option[] */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param SourceContext */
  public function setSourceContext(SourceContext $sourceContext)
  {
    $this->sourceContext = $sourceContext;
  }
  /** @return SourceContext */
  public function getSourceContext()
  {
    return $this->sourceContext;
  }
  /** @param string */
  public function setSyntax($syntax)
  {
    $this->syntax = $syntax;
  }
  /** @return string */
  public function getSyntax()
  {
    return $this->syntax;
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

class AuthProvider extends \Google\Collection
{
  /** @var string */
  public $audiences;
  /** @var string */
  public $authorizationUrl;
  /** @var string */
  public $id;
  /** @var string */
  public $issuer;
  /** @var string */
  public $jwksUri;
  /** @var JwtLocation[] */
  public $jwtLocations;
  protected $collection_key = 'jwtLocations';
  protected $jwtLocationsType = JwtLocation::class;
  protected $jwtLocationsDataType = 'array';
  /** @param string */
  public function setAudiences($audiences)
  {
    $this->audiences = $audiences;
  }
  /** @return string */
  public function getAudiences()
  {
    return $this->audiences;
  }
  /** @param string */
  public function setAuthorizationUrl($authorizationUrl)
  {
    $this->authorizationUrl = $authorizationUrl;
  }
  /** @return string */
  public function getAuthorizationUrl()
  {
    return $this->authorizationUrl;
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
  public function setIssuer($issuer)
  {
    $this->issuer = $issuer;
  }
  /** @return string */
  public function getIssuer()
  {
    return $this->issuer;
  }
  /** @param string */
  public function setJwksUri($jwksUri)
  {
    $this->jwksUri = $jwksUri;
  }
  /** @return string */
  public function getJwksUri()
  {
    return $this->jwksUri;
  }
  /** @param JwtLocation[] */
  public function setJwtLocations($jwtLocations)
  {
    $this->jwtLocations = $jwtLocations;
  }
  /** @return JwtLocation[] */
  public function getJwtLocations()
  {
    return $this->jwtLocations;
  }
}

class AuthRequirement extends \Google\Model
{
  /** @var string */
  public $audiences;
  /** @var string */
  public $providerId;

  /** @param string */
  public function setAudiences($audiences)
  {
    $this->audiences = $audiences;
  }
  /** @return string */
  public function getAudiences()
  {
    return $this->audiences;
  }
  /** @param string */
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  /** @return string */
  public function getProviderId()
  {
    return $this->providerId;
  }
}

class Authentication extends \Google\Collection
{
  /** @var AuthProvider[] */
  public $providers;
  /** @var AuthenticationRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $providersType = AuthProvider::class;
  protected $providersDataType = 'array';
  protected $rulesType = AuthenticationRule::class;
  protected $rulesDataType = 'array';
  /** @param AuthProvider[] */
  public function setProviders($providers)
  {
    $this->providers = $providers;
  }
  /** @return AuthProvider[] */
  public function getProviders()
  {
    return $this->providers;
  }
  /** @param AuthenticationRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return AuthenticationRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class AuthenticationRule extends \Google\Collection
{
  /** @var bool */
  public $allowWithoutCredential;
  /** @var OAuthRequirements */
  public $oauth;
  /** @var AuthRequirement[] */
  public $requirements;
  /** @var string */
  public $selector;
  protected $collection_key = 'requirements';
  protected $oauthType = OAuthRequirements::class;
  protected $oauthDataType = '';
  protected $requirementsType = AuthRequirement::class;
  protected $requirementsDataType = 'array';
  /** @param bool */
  public function setAllowWithoutCredential($allowWithoutCredential)
  {
    $this->allowWithoutCredential = $allowWithoutCredential;
  }
  /** @return bool */
  public function getAllowWithoutCredential()
  {
    return $this->allowWithoutCredential;
  }
  /** @param OAuthRequirements */
  public function setOauth(OAuthRequirements $oauth)
  {
    $this->oauth = $oauth;
  }
  /** @return OAuthRequirements */
  public function getOauth()
  {
    return $this->oauth;
  }
  /** @param AuthRequirement[] */
  public function setRequirements($requirements)
  {
    $this->requirements = $requirements;
  }
  /** @return AuthRequirement[] */
  public function getRequirements()
  {
    return $this->requirements;
  }
  /** @param string */
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /** @return string */
  public function getSelector()
  {
    return $this->selector;
  }
}

class Backend extends \Google\Collection
{
  /** @var BackendRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = BackendRule::class;
  protected $rulesDataType = 'array';
  /** @param BackendRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return BackendRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class BackendRule extends \Google\Model
{
  /** @var string */
  public $address;
  public $deadline;
  /** @var bool */
  public $disableAuth;
  /** @var string */
  public $jwtAudience;
  public $operationDeadline;
  /** @var string */
  public $pathTranslation;
  /** @var string */
  public $protocol;
  /** @var string */
  public $selector;

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
  public function setDeadline($deadline)
  {
    $this->deadline = $deadline;
  }
  public function getDeadline()
  {
    return $this->deadline;
  }
  /** @param bool */
  public function setDisableAuth($disableAuth)
  {
    $this->disableAuth = $disableAuth;
  }
  /** @return bool */
  public function getDisableAuth()
  {
    return $this->disableAuth;
  }
  /** @param string */
  public function setJwtAudience($jwtAudience)
  {
    $this->jwtAudience = $jwtAudience;
  }
  /** @return string */
  public function getJwtAudience()
  {
    return $this->jwtAudience;
  }
  public function setOperationDeadline($operationDeadline)
  {
    $this->operationDeadline = $operationDeadline;
  }
  public function getOperationDeadline()
  {
    return $this->operationDeadline;
  }
  /** @param string */
  public function setPathTranslation($pathTranslation)
  {
    $this->pathTranslation = $pathTranslation;
  }
  /** @return string */
  public function getPathTranslation()
  {
    return $this->pathTranslation;
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
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /** @return string */
  public function getSelector()
  {
    return $this->selector;
  }
}

class Billing extends \Google\Collection
{
  /** @var BillingDestination[] */
  public $consumerDestinations;
  protected $collection_key = 'consumerDestinations';
  protected $consumerDestinationsType = BillingDestination::class;
  protected $consumerDestinationsDataType = 'array';
  /** @param BillingDestination[] */
  public function setConsumerDestinations($consumerDestinations)
  {
    $this->consumerDestinations = $consumerDestinations;
  }
  /** @return BillingDestination[] */
  public function getConsumerDestinations()
  {
    return $this->consumerDestinations;
  }
}

class BillingDestination extends \Google\Collection
{
  /** @var string[] */
  public $metrics;
  /** @var string */
  public $monitoredResource;
  protected $collection_key = 'metrics';
  /** @param string[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return string[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param string */
  public function setMonitoredResource($monitoredResource)
  {
    $this->monitoredResource = $monitoredResource;
  }
  /** @return string */
  public function getMonitoredResource()
  {
    return $this->monitoredResource;
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

class ChangeReport extends \Google\Collection
{
  /** @var ConfigChange[] */
  public $configChanges;
  protected $collection_key = 'configChanges';
  protected $configChangesType = ConfigChange::class;
  protected $configChangesDataType = 'array';
  /** @param ConfigChange[] */
  public function setConfigChanges($configChanges)
  {
    $this->configChanges = $configChanges;
  }
  /** @return ConfigChange[] */
  public function getConfigChanges()
  {
    return $this->configChanges;
  }
}

class ConfigChange extends \Google\Collection
{
  /** @var Advice[] */
  public $advices;
  /** @var string */
  public $changeType;
  /** @var string */
  public $element;
  /** @var string */
  public $newValue;
  /** @var string */
  public $oldValue;
  protected $collection_key = 'advices';
  protected $advicesType = Advice::class;
  protected $advicesDataType = 'array';
  /** @param Advice[] */
  public function setAdvices($advices)
  {
    $this->advices = $advices;
  }
  /** @return Advice[] */
  public function getAdvices()
  {
    return $this->advices;
  }
  /** @param string */
  public function setChangeType($changeType)
  {
    $this->changeType = $changeType;
  }
  /** @return string */
  public function getChangeType()
  {
    return $this->changeType;
  }
  /** @param string */
  public function setElement($element)
  {
    $this->element = $element;
  }
  /** @return string */
  public function getElement()
  {
    return $this->element;
  }
  /** @param string */
  public function setNewValue($newValue)
  {
    $this->newValue = $newValue;
  }
  /** @return string */
  public function getNewValue()
  {
    return $this->newValue;
  }
  /** @param string */
  public function setOldValue($oldValue)
  {
    $this->oldValue = $oldValue;
  }
  /** @return string */
  public function getOldValue()
  {
    return $this->oldValue;
  }
}

class ConfigFile extends \Google\Model
{
  /** @var string */
  public $fileContents;
  /** @var string */
  public $filePath;
  /** @var string */
  public $fileType;

  /** @param string */
  public function setFileContents($fileContents)
  {
    $this->fileContents = $fileContents;
  }
  /** @return string */
  public function getFileContents()
  {
    return $this->fileContents;
  }
  /** @param string */
  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  /** @return string */
  public function getFilePath()
  {
    return $this->filePath;
  }
  /** @param string */
  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }
  /** @return string */
  public function getFileType()
  {
    return $this->fileType;
  }
}

class ConfigRef extends \Google\Model
{
  /** @var string */
  public $name;

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

class ConfigSource extends \Google\Collection
{
  /** @var ConfigFile[] */
  public $files;
  /** @var string */
  public $id;
  protected $collection_key = 'files';
  protected $filesType = ConfigFile::class;
  protected $filesDataType = 'array';
  /** @param ConfigFile[] */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /** @return ConfigFile[] */
  public function getFiles()
  {
    return $this->files;
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
}

class Context extends \Google\Collection
{
  /** @var ContextRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = ContextRule::class;
  protected $rulesDataType = 'array';
  /** @param ContextRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return ContextRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class ContextRule extends \Google\Collection
{
  /** @var string[] */
  public $allowedRequestExtensions;
  /** @var string[] */
  public $allowedResponseExtensions;
  /** @var string[] */
  public $provided;
  /** @var string[] */
  public $requested;
  /** @var string */
  public $selector;
  protected $collection_key = 'requested';
  /** @param string[] */
  public function setAllowedRequestExtensions($allowedRequestExtensions)
  {
    $this->allowedRequestExtensions = $allowedRequestExtensions;
  }
  /** @return string[] */
  public function getAllowedRequestExtensions()
  {
    return $this->allowedRequestExtensions;
  }
  /** @param string[] */
  public function setAllowedResponseExtensions($allowedResponseExtensions)
  {
    $this->allowedResponseExtensions = $allowedResponseExtensions;
  }
  /** @return string[] */
  public function getAllowedResponseExtensions()
  {
    return $this->allowedResponseExtensions;
  }
  /** @param string[] */
  public function setProvided($provided)
  {
    $this->provided = $provided;
  }
  /** @return string[] */
  public function getProvided()
  {
    return $this->provided;
  }
  /** @param string[] */
  public function setRequested($requested)
  {
    $this->requested = $requested;
  }
  /** @return string[] */
  public function getRequested()
  {
    return $this->requested;
  }
  /** @param string */
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /** @return string */
  public function getSelector()
  {
    return $this->selector;
  }
}

class Control extends \Google\Model
{
  /** @var string */
  public $environment;

  /** @param string */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return string */
  public function getEnvironment()
  {
    return $this->environment;
  }
}

class CustomError extends \Google\Collection
{
  /** @var CustomErrorRule[] */
  public $rules;
  /** @var string[] */
  public $types;
  protected $collection_key = 'types';
  protected $rulesType = CustomErrorRule::class;
  protected $rulesDataType = 'array';
  /** @param CustomErrorRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return CustomErrorRule[] */
  public function getRules()
  {
    return $this->rules;
  }
  /** @param string[] */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /** @return string[] */
  public function getTypes()
  {
    return $this->types;
  }
}

class CustomErrorRule extends \Google\Model
{
  /** @var bool */
  public $isErrorType;
  /** @var string */
  public $selector;

  /** @param bool */
  public function setIsErrorType($isErrorType)
  {
    $this->isErrorType = $isErrorType;
  }
  /** @return bool */
  public function getIsErrorType()
  {
    return $this->isErrorType;
  }
  /** @param string */
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /** @return string */
  public function getSelector()
  {
    return $this->selector;
  }
}

class CustomHttpPattern extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $path;

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

class DeleteServiceStrategy extends \Google\Model
{
}

class Diagnostic extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $location;
  /** @var string */
  public $message;

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

class Documentation extends \Google\Collection
{
  /** @var string */
  public $documentationRootUrl;
  /** @var string */
  public $overview;
  /** @var Page[] */
  public $pages;
  /** @var DocumentationRule[] */
  public $rules;
  /** @var string */
  public $serviceRootUrl;
  /** @var string */
  public $summary;
  protected $collection_key = 'rules';
  protected $pagesType = Page::class;
  protected $pagesDataType = 'array';
  protected $rulesType = DocumentationRule::class;
  protected $rulesDataType = 'array';
  /** @param string */
  public function setDocumentationRootUrl($documentationRootUrl)
  {
    $this->documentationRootUrl = $documentationRootUrl;
  }
  /** @return string */
  public function getDocumentationRootUrl()
  {
    return $this->documentationRootUrl;
  }
  /** @param string */
  public function setOverview($overview)
  {
    $this->overview = $overview;
  }
  /** @return string */
  public function getOverview()
  {
    return $this->overview;
  }
  /** @param Page[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return Page[] */
  public function getPages()
  {
    return $this->pages;
  }
  /** @param DocumentationRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return DocumentationRule[] */
  public function getRules()
  {
    return $this->rules;
  }
  /** @param string */
  public function setServiceRootUrl($serviceRootUrl)
  {
    $this->serviceRootUrl = $serviceRootUrl;
  }
  /** @return string */
  public function getServiceRootUrl()
  {
    return $this->serviceRootUrl;
  }
  /** @param string */
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  /** @return string */
  public function getSummary()
  {
    return $this->summary;
  }
}

class DocumentationRule extends \Google\Model
{
  /** @var string */
  public $deprecationDescription;
  /** @var string */
  public $description;
  /** @var string */
  public $selector;

  /** @param string */
  public function setDeprecationDescription($deprecationDescription)
  {
    $this->deprecationDescription = $deprecationDescription;
  }
  /** @return string */
  public function getDeprecationDescription()
  {
    return $this->deprecationDescription;
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
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /** @return string */
  public function getSelector()
  {
    return $this->selector;
  }
}

class EnableServiceResponse extends \Google\Model
{
}

class Endpoint extends \Google\Model
{
  /** @var bool */
  public $allowCors;
  /** @var string */
  public $name;
  /** @var string */
  public $target;

  /** @param bool */
  public function setAllowCors($allowCors)
  {
    $this->allowCors = $allowCors;
  }
  /** @return bool */
  public function getAllowCors()
  {
    return $this->allowCors;
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

class Enum extends \Google\Collection
{
  /** @var EnumValue[] */
  public $enumvalue;
  /** @var string */
  public $name;
  /** @var Option[] */
  public $options;
  /** @var SourceContext */
  public $sourceContext;
  /** @var string */
  public $syntax;
  protected $collection_key = 'options';
  protected $enumvalueType = EnumValue::class;
  protected $enumvalueDataType = 'array';
  protected $optionsType = Option::class;
  protected $optionsDataType = 'array';
  protected $sourceContextType = SourceContext::class;
  protected $sourceContextDataType = '';
  /** @param EnumValue[] */
  public function setEnumvalue($enumvalue)
  {
    $this->enumvalue = $enumvalue;
  }
  /** @return EnumValue[] */
  public function getEnumvalue()
  {
    return $this->enumvalue;
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
  /** @param Option[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return Option[] */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param SourceContext */
  public function setSourceContext(SourceContext $sourceContext)
  {
    $this->sourceContext = $sourceContext;
  }
  /** @return SourceContext */
  public function getSourceContext()
  {
    return $this->sourceContext;
  }
  /** @param string */
  public function setSyntax($syntax)
  {
    $this->syntax = $syntax;
  }
  /** @return string */
  public function getSyntax()
  {
    return $this->syntax;
  }
}

class EnumValue extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var int */
  public $number;
  /** @var Option[] */
  public $options;
  protected $collection_key = 'options';
  protected $optionsType = Option::class;
  protected $optionsDataType = 'array';
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
  /** @param int */
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return int */
  public function getNumber()
  {
    return $this->number;
  }
  /** @param Option[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return Option[] */
  public function getOptions()
  {
    return $this->options;
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

class Field extends \Google\Collection
{
  /** @var string */
  public $cardinality;
  /** @var string */
  public $defaultValue;
  /** @var string */
  public $jsonName;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var int */
  public $number;
  /** @var int */
  public $oneofIndex;
  /** @var Option[] */
  public $options;
  /** @var bool */
  public $packed;
  /** @var string */
  public $typeUrl;
  protected $collection_key = 'options';
  protected $optionsType = Option::class;
  protected $optionsDataType = 'array';
  /** @param string */
  public function setCardinality($cardinality)
  {
    $this->cardinality = $cardinality;
  }
  /** @return string */
  public function getCardinality()
  {
    return $this->cardinality;
  }
  /** @param string */
  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return string */
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  /** @param string */
  public function setJsonName($jsonName)
  {
    $this->jsonName = $jsonName;
  }
  /** @return string */
  public function getJsonName()
  {
    return $this->jsonName;
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
  /** @param int */
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return int */
  public function getNumber()
  {
    return $this->number;
  }
  /** @param int */
  public function setOneofIndex($oneofIndex)
  {
    $this->oneofIndex = $oneofIndex;
  }
  /** @return int */
  public function getOneofIndex()
  {
    return $this->oneofIndex;
  }
  /** @param Option[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return Option[] */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param bool */
  public function setPacked($packed)
  {
    $this->packed = $packed;
  }
  /** @return bool */
  public function getPacked()
  {
    return $this->packed;
  }
  /** @param string */
  public function setTypeUrl($typeUrl)
  {
    $this->typeUrl = $typeUrl;
  }
  /** @return string */
  public function getTypeUrl()
  {
    return $this->typeUrl;
  }
}

class FlowErrorDetails extends \Google\Model
{
  /** @var string */
  public $exceptionType;
  /** @var string */
  public $flowStepId;

  /** @param string */
  public function setExceptionType($exceptionType)
  {
    $this->exceptionType = $exceptionType;
  }
  /** @return string */
  public function getExceptionType()
  {
    return $this->exceptionType;
  }
  /** @param string */
  public function setFlowStepId($flowStepId)
  {
    $this->flowStepId = $flowStepId;
  }
  /** @return string */
  public function getFlowStepId()
  {
    return $this->flowStepId;
  }
}

class GenerateConfigReportRequest extends \Google\Model
{
  /** @var array[] */
  public $newConfig;
  /** @var array[] */
  public $oldConfig;

  /** @param array[] */
  public function setNewConfig($newConfig)
  {
    $this->newConfig = $newConfig;
  }
  /** @return array[] */
  public function getNewConfig()
  {
    return $this->newConfig;
  }
  /** @param array[] */
  public function setOldConfig($oldConfig)
  {
    $this->oldConfig = $oldConfig;
  }
  /** @return array[] */
  public function getOldConfig()
  {
    return $this->oldConfig;
  }
}

class GenerateConfigReportResponse extends \Google\Collection
{
  /** @var ChangeReport[] */
  public $changeReports;
  /** @var Diagnostic[] */
  public $diagnostics;
  /** @var string */
  public $id;
  /** @var string */
  public $serviceName;
  protected $collection_key = 'diagnostics';
  protected $changeReportsType = ChangeReport::class;
  protected $changeReportsDataType = 'array';
  protected $diagnosticsType = Diagnostic::class;
  protected $diagnosticsDataType = 'array';
  /** @param ChangeReport[] */
  public function setChangeReports($changeReports)
  {
    $this->changeReports = $changeReports;
  }
  /** @return ChangeReport[] */
  public function getChangeReports()
  {
    return $this->changeReports;
  }
  /** @param Diagnostic[] */
  public function setDiagnostics($diagnostics)
  {
    $this->diagnostics = $diagnostics;
  }
  /** @return Diagnostic[] */
  public function getDiagnostics()
  {
    return $this->diagnostics;
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

class Http extends \Google\Collection
{
  /** @var bool */
  public $fullyDecodeReservedExpansion;
  /** @var HttpRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = HttpRule::class;
  protected $rulesDataType = 'array';
  /** @param bool */
  public function setFullyDecodeReservedExpansion($fullyDecodeReservedExpansion)
  {
    $this->fullyDecodeReservedExpansion = $fullyDecodeReservedExpansion;
  }
  /** @return bool */
  public function getFullyDecodeReservedExpansion()
  {
    return $this->fullyDecodeReservedExpansion;
  }
  /** @param HttpRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return HttpRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class HttpRule extends \Google\Collection
{
  /** @var HttpRule[] */
  public $additionalBindings;
  /** @var string */
  public $body;
  /** @var CustomHttpPattern */
  public $custom;
  /** @var string */
  public $delete;
  /** @var string */
  public $get;
  /** @var string */
  public $patch;
  /** @var string */
  public $post;
  /** @var string */
  public $put;
  /** @var string */
  public $responseBody;
  /** @var string */
  public $selector;
  protected $collection_key = 'additionalBindings';
  protected $additionalBindingsType = HttpRule::class;
  protected $additionalBindingsDataType = 'array';
  protected $customType = CustomHttpPattern::class;
  protected $customDataType = '';
  /** @param HttpRule[] */
  public function setAdditionalBindings($additionalBindings)
  {
    $this->additionalBindings = $additionalBindings;
  }
  /** @return HttpRule[] */
  public function getAdditionalBindings()
  {
    return $this->additionalBindings;
  }
  /** @param string */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /** @return string */
  public function getBody()
  {
    return $this->body;
  }
  /** @param CustomHttpPattern */
  public function setCustom(CustomHttpPattern $custom)
  {
    $this->custom = $custom;
  }
  /** @return CustomHttpPattern */
  public function getCustom()
  {
    return $this->custom;
  }
  /** @param string */
  public function setDelete($delete)
  {
    $this->delete = $delete;
  }
  /** @return string */
  public function getDelete()
  {
    return $this->delete;
  }
  /** @param string */
  public function setGet($get)
  {
    $this->get = $get;
  }
  /** @return string */
  public function getGet()
  {
    return $this->get;
  }
  /** @param string */
  public function setPatch($patch)
  {
    $this->patch = $patch;
  }
  /** @return string */
  public function getPatch()
  {
    return $this->patch;
  }
  /** @param string */
  public function setPost($post)
  {
    $this->post = $post;
  }
  /** @return string */
  public function getPost()
  {
    return $this->post;
  }
  /** @param string */
  public function setPut($put)
  {
    $this->put = $put;
  }
  /** @return string */
  public function getPut()
  {
    return $this->put;
  }
  /** @param string */
  public function setResponseBody($responseBody)
  {
    $this->responseBody = $responseBody;
  }
  /** @return string */
  public function getResponseBody()
  {
    return $this->responseBody;
  }
  /** @param string */
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /** @return string */
  public function getSelector()
  {
    return $this->selector;
  }
}

class JwtLocation extends \Google\Model
{
  /** @var string */
  public $cookie;
  /** @var string */
  public $header;
  /** @var string */
  public $query;
  /** @var string */
  public $valuePrefix;

  /** @param string */
  public function setCookie($cookie)
  {
    $this->cookie = $cookie;
  }
  /** @return string */
  public function getCookie()
  {
    return $this->cookie;
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
  public function setValuePrefix($valuePrefix)
  {
    $this->valuePrefix = $valuePrefix;
  }
  /** @return string */
  public function getValuePrefix()
  {
    return $this->valuePrefix;
  }
}

class LabelDescriptor extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $key;
  /** @var string */
  public $valueType;

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
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
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

class ListServiceConfigsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Service[] */
  public $serviceConfigs;
  protected $collection_key = 'serviceConfigs';
  protected $serviceConfigsType = Service::class;
  protected $serviceConfigsDataType = 'array';
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
  /** @param Service[] */
  public function setServiceConfigs($serviceConfigs)
  {
    $this->serviceConfigs = $serviceConfigs;
  }
  /** @return Service[] */
  public function getServiceConfigs()
  {
    return $this->serviceConfigs;
  }
}

class ListServiceRolloutsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Rollout[] */
  public $rollouts;
  protected $collection_key = 'rollouts';
  protected $rolloutsType = Rollout::class;
  protected $rolloutsDataType = 'array';
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
  /** @param Rollout[] */
  public function setRollouts($rollouts)
  {
    $this->rollouts = $rollouts;
  }
  /** @return Rollout[] */
  public function getRollouts()
  {
    return $this->rollouts;
  }
}

class ListServicesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ManagedService[] */
  public $services;
  protected $collection_key = 'services';
  protected $servicesType = ManagedService::class;
  protected $servicesDataType = 'array';
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
  /** @param ManagedService[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return ManagedService[] */
  public function getServices()
  {
    return $this->services;
  }
}

class LogDescriptor extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var LabelDescriptor[] */
  public $labels;
  /** @var string */
  public $name;
  protected $collection_key = 'labels';
  protected $labelsType = LabelDescriptor::class;
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
  /** @param LabelDescriptor[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return LabelDescriptor[] */
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
}

class Logging extends \Google\Collection
{
  /** @var LoggingDestination[] */
  public $consumerDestinations;
  /** @var LoggingDestination[] */
  public $producerDestinations;
  protected $collection_key = 'producerDestinations';
  protected $consumerDestinationsType = LoggingDestination::class;
  protected $consumerDestinationsDataType = 'array';
  protected $producerDestinationsType = LoggingDestination::class;
  protected $producerDestinationsDataType = 'array';
  /** @param LoggingDestination[] */
  public function setConsumerDestinations($consumerDestinations)
  {
    $this->consumerDestinations = $consumerDestinations;
  }
  /** @return LoggingDestination[] */
  public function getConsumerDestinations()
  {
    return $this->consumerDestinations;
  }
  /** @param LoggingDestination[] */
  public function setProducerDestinations($producerDestinations)
  {
    $this->producerDestinations = $producerDestinations;
  }
  /** @return LoggingDestination[] */
  public function getProducerDestinations()
  {
    return $this->producerDestinations;
  }
}

class LoggingDestination extends \Google\Collection
{
  /** @var string[] */
  public $logs;
  /** @var string */
  public $monitoredResource;
  protected $collection_key = 'logs';
  /** @param string[] */
  public function setLogs($logs)
  {
    $this->logs = $logs;
  }
  /** @return string[] */
  public function getLogs()
  {
    return $this->logs;
  }
  /** @param string */
  public function setMonitoredResource($monitoredResource)
  {
    $this->monitoredResource = $monitoredResource;
  }
  /** @return string */
  public function getMonitoredResource()
  {
    return $this->monitoredResource;
  }
}

class ManagedService extends \Google\Model
{
  /** @var string */
  public $producerProjectId;
  /** @var string */
  public $serviceName;

  /** @param string */
  public function setProducerProjectId($producerProjectId)
  {
    $this->producerProjectId = $producerProjectId;
  }
  /** @return string */
  public function getProducerProjectId()
  {
    return $this->producerProjectId;
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

class Method extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var Option[] */
  public $options;
  /** @var bool */
  public $requestStreaming;
  /** @var string */
  public $requestTypeUrl;
  /** @var bool */
  public $responseStreaming;
  /** @var string */
  public $responseTypeUrl;
  /** @var string */
  public $syntax;
  protected $collection_key = 'options';
  protected $optionsType = Option::class;
  protected $optionsDataType = 'array';
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
  /** @param Option[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return Option[] */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param bool */
  public function setRequestStreaming($requestStreaming)
  {
    $this->requestStreaming = $requestStreaming;
  }
  /** @return bool */
  public function getRequestStreaming()
  {
    return $this->requestStreaming;
  }
  /** @param string */
  public function setRequestTypeUrl($requestTypeUrl)
  {
    $this->requestTypeUrl = $requestTypeUrl;
  }
  /** @return string */
  public function getRequestTypeUrl()
  {
    return $this->requestTypeUrl;
  }
  /** @param bool */
  public function setResponseStreaming($responseStreaming)
  {
    $this->responseStreaming = $responseStreaming;
  }
  /** @return bool */
  public function getResponseStreaming()
  {
    return $this->responseStreaming;
  }
  /** @param string */
  public function setResponseTypeUrl($responseTypeUrl)
  {
    $this->responseTypeUrl = $responseTypeUrl;
  }
  /** @return string */
  public function getResponseTypeUrl()
  {
    return $this->responseTypeUrl;
  }
  /** @param string */
  public function setSyntax($syntax)
  {
    $this->syntax = $syntax;
  }
  /** @return string */
  public function getSyntax()
  {
    return $this->syntax;
  }
}

class MetricDescriptor extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var LabelDescriptor[] */
  public $labels;
  /** @var string */
  public $launchStage;
  /** @var MetricDescriptorMetadata */
  public $metadata;
  /** @var string */
  public $metricKind;
  /** @var string[] */
  public $monitoredResourceTypes;
  /** @var string */
  public $name;
  /** @var string */
  public $type;
  /** @var string */
  public $unit;
  /** @var string */
  public $valueType;
  protected $collection_key = 'monitoredResourceTypes';
  protected $labelsType = LabelDescriptor::class;
  protected $labelsDataType = 'array';
  protected $metadataType = MetricDescriptorMetadata::class;
  protected $metadataDataType = '';
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param LabelDescriptor[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return LabelDescriptor[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
  }
  /** @param MetricDescriptorMetadata */
  public function setMetadata(MetricDescriptorMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return MetricDescriptorMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setMetricKind($metricKind)
  {
    $this->metricKind = $metricKind;
  }
  /** @return string */
  public function getMetricKind()
  {
    return $this->metricKind;
  }
  /** @param string[] */
  public function setMonitoredResourceTypes($monitoredResourceTypes)
  {
    $this->monitoredResourceTypes = $monitoredResourceTypes;
  }
  /** @return string[] */
  public function getMonitoredResourceTypes()
  {
    return $this->monitoredResourceTypes;
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
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
  /** @param string */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /** @return string */
  public function getValueType()
  {
    return $this->valueType;
  }
}

class MetricDescriptorMetadata extends \Google\Model
{
  /** @var string */
  public $ingestDelay;
  /** @var string */
  public $launchStage;
  /** @var string */
  public $samplePeriod;

  /** @param string */
  public function setIngestDelay($ingestDelay)
  {
    $this->ingestDelay = $ingestDelay;
  }
  /** @return string */
  public function getIngestDelay()
  {
    return $this->ingestDelay;
  }
  /** @param string */
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
  }
  /** @param string */
  public function setSamplePeriod($samplePeriod)
  {
    $this->samplePeriod = $samplePeriod;
  }
  /** @return string */
  public function getSamplePeriod()
  {
    return $this->samplePeriod;
  }
}

class MetricRule extends \Google\Model
{
  /** @var string[] */
  public $metricCosts;
  /** @var string */
  public $selector;

  /** @param string[] */
  public function setMetricCosts($metricCosts)
  {
    $this->metricCosts = $metricCosts;
  }
  /** @return string[] */
  public function getMetricCosts()
  {
    return $this->metricCosts;
  }
  /** @param string */
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /** @return string */
  public function getSelector()
  {
    return $this->selector;
  }
}

class Mixin extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $root;

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
  public function setRoot($root)
  {
    $this->root = $root;
  }
  /** @return string */
  public function getRoot()
  {
    return $this->root;
  }
}

class MonitoredResourceDescriptor extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var LabelDescriptor[] */
  public $labels;
  /** @var string */
  public $launchStage;
  /** @var string */
  public $name;
  /** @var string */
  public $type;
  protected $collection_key = 'labels';
  protected $labelsType = LabelDescriptor::class;
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
  /** @param LabelDescriptor[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return LabelDescriptor[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }
  /** @return string */
  public function getLaunchStage()
  {
    return $this->launchStage;
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

class Monitoring extends \Google\Collection
{
  /** @var MonitoringDestination[] */
  public $consumerDestinations;
  /** @var MonitoringDestination[] */
  public $producerDestinations;
  protected $collection_key = 'producerDestinations';
  protected $consumerDestinationsType = MonitoringDestination::class;
  protected $consumerDestinationsDataType = 'array';
  protected $producerDestinationsType = MonitoringDestination::class;
  protected $producerDestinationsDataType = 'array';
  /** @param MonitoringDestination[] */
  public function setConsumerDestinations($consumerDestinations)
  {
    $this->consumerDestinations = $consumerDestinations;
  }
  /** @return MonitoringDestination[] */
  public function getConsumerDestinations()
  {
    return $this->consumerDestinations;
  }
  /** @param MonitoringDestination[] */
  public function setProducerDestinations($producerDestinations)
  {
    $this->producerDestinations = $producerDestinations;
  }
  /** @return MonitoringDestination[] */
  public function getProducerDestinations()
  {
    return $this->producerDestinations;
  }
}

class MonitoringDestination extends \Google\Collection
{
  /** @var string[] */
  public $metrics;
  /** @var string */
  public $monitoredResource;
  protected $collection_key = 'metrics';
  /** @param string[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return string[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param string */
  public function setMonitoredResource($monitoredResource)
  {
    $this->monitoredResource = $monitoredResource;
  }
  /** @return string */
  public function getMonitoredResource()
  {
    return $this->monitoredResource;
  }
}

class OAuthRequirements extends \Google\Model
{
  /** @var string */
  public $canonicalScopes;

  /** @param string */
  public function setCanonicalScopes($canonicalScopes)
  {
    $this->canonicalScopes = $canonicalScopes;
  }
  /** @return string */
  public function getCanonicalScopes()
  {
    return $this->canonicalScopes;
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

class OperationInfo extends \Google\Model
{
  /** @var string */
  public $metadataType;
  /** @var string */
  public $responseType;

  /** @param string */
  public function setMetadataType($metadataType)
  {
    $this->metadataType = $metadataType;
  }
  /** @return string */
  public function getMetadataType()
  {
    return $this->metadataType;
  }
  /** @param string */
  public function setResponseType($responseType)
  {
    $this->responseType = $responseType;
  }
  /** @return string */
  public function getResponseType()
  {
    return $this->responseType;
  }
}

class OperationMetadata extends \Google\Collection
{
  /** @var int */
  public $progressPercentage;
  /** @var string[] */
  public $resourceNames;
  /** @var string */
  public $startTime;
  /** @var Step[] */
  public $steps;
  protected $collection_key = 'steps';
  protected $stepsType = Step::class;
  protected $stepsDataType = 'array';
  /** @param int */
  public function setProgressPercentage($progressPercentage)
  {
    $this->progressPercentage = $progressPercentage;
  }
  /** @return int */
  public function getProgressPercentage()
  {
    return $this->progressPercentage;
  }
  /** @param string[] */
  public function setResourceNames($resourceNames)
  {
    $this->resourceNames = $resourceNames;
  }
  /** @return string[] */
  public function getResourceNames()
  {
    return $this->resourceNames;
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

class Option extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var array[] */
  public $value;

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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array[] */
  public function getValue()
  {
    return $this->value;
  }
}

class Page extends \Google\Collection
{
  /** @var string */
  public $content;
  /** @var string */
  public $name;
  /** @var Page[] */
  public $subpages;
  protected $collection_key = 'subpages';
  protected $subpagesType = Page::class;
  protected $subpagesDataType = 'array';
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
  /** @param Page[] */
  public function setSubpages($subpages)
  {
    $this->subpages = $subpages;
  }
  /** @return Page[] */
  public function getSubpages()
  {
    return $this->subpages;
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

class Quota extends \Google\Collection
{
  /** @var QuotaLimit[] */
  public $limits;
  /** @var MetricRule[] */
  public $metricRules;
  protected $collection_key = 'metricRules';
  protected $limitsType = QuotaLimit::class;
  protected $limitsDataType = 'array';
  protected $metricRulesType = MetricRule::class;
  protected $metricRulesDataType = 'array';
  /** @param QuotaLimit[] */
  public function setLimits($limits)
  {
    $this->limits = $limits;
  }
  /** @return QuotaLimit[] */
  public function getLimits()
  {
    return $this->limits;
  }
  /** @param MetricRule[] */
  public function setMetricRules($metricRules)
  {
    $this->metricRules = $metricRules;
  }
  /** @return MetricRule[] */
  public function getMetricRules()
  {
    return $this->metricRules;
  }
}

class QuotaLimit extends \Google\Model
{
  /** @var string */
  public $defaultLimit;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $duration;
  /** @var string */
  public $freeTier;
  /** @var string */
  public $maxLimit;
  /** @var string */
  public $metric;
  /** @var string */
  public $name;
  /** @var string */
  public $unit;
  /** @var string[] */
  public $values;

  /** @param string */
  public function setDefaultLimit($defaultLimit)
  {
    $this->defaultLimit = $defaultLimit;
  }
  /** @return string */
  public function getDefaultLimit()
  {
    return $this->defaultLimit;
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
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param string */
  public function setFreeTier($freeTier)
  {
    $this->freeTier = $freeTier;
  }
  /** @return string */
  public function getFreeTier()
  {
    return $this->freeTier;
  }
  /** @param string */
  public function setMaxLimit($maxLimit)
  {
    $this->maxLimit = $maxLimit;
  }
  /** @return string */
  public function getMaxLimit()
  {
    return $this->maxLimit;
  }
  /** @param string */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /** @return string */
  public function getMetric()
  {
    return $this->metric;
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
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class ResourceReference extends \Google\Model
{
  /** @var string */
  public $childType;
  /** @var string */
  public $type;

  /** @param string */
  public function setChildType($childType)
  {
    $this->childType = $childType;
  }
  /** @return string */
  public function getChildType()
  {
    return $this->childType;
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

class Rollout extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $createdBy;
  /** @var DeleteServiceStrategy */
  public $deleteServiceStrategy;
  /** @var string */
  public $rolloutId;
  /** @var string */
  public $serviceName;
  /** @var string */
  public $status;
  /** @var TrafficPercentStrategy */
  public $trafficPercentStrategy;
  protected $deleteServiceStrategyType = DeleteServiceStrategy::class;
  protected $deleteServiceStrategyDataType = '';
  protected $trafficPercentStrategyType = TrafficPercentStrategy::class;
  protected $trafficPercentStrategyDataType = '';
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
  public function setCreatedBy($createdBy)
  {
    $this->createdBy = $createdBy;
  }
  /** @return string */
  public function getCreatedBy()
  {
    return $this->createdBy;
  }
  /** @param DeleteServiceStrategy */
  public function setDeleteServiceStrategy(DeleteServiceStrategy $deleteServiceStrategy)
  {
    $this->deleteServiceStrategy = $deleteServiceStrategy;
  }
  /** @return DeleteServiceStrategy */
  public function getDeleteServiceStrategy()
  {
    return $this->deleteServiceStrategy;
  }
  /** @param string */
  public function setRolloutId($rolloutId)
  {
    $this->rolloutId = $rolloutId;
  }
  /** @return string */
  public function getRolloutId()
  {
    return $this->rolloutId;
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
  /** @param TrafficPercentStrategy */
  public function setTrafficPercentStrategy(TrafficPercentStrategy $trafficPercentStrategy)
  {
    $this->trafficPercentStrategy = $trafficPercentStrategy;
  }
  /** @return TrafficPercentStrategy */
  public function getTrafficPercentStrategy()
  {
    return $this->trafficPercentStrategy;
  }
}

class Service extends \Google\Collection
{
  /** @var Api[] */
  public $apis;
  /** @var Authentication */
  public $authentication;
  /** @var Backend */
  public $backend;
  /** @var Billing */
  public $billing;
  /** @var string */
  public $configVersion;
  /** @var Context */
  public $context;
  /** @var Control */
  public $control;
  /** @var CustomError */
  public $customError;
  /** @var Documentation */
  public $documentation;
  /** @var Endpoint[] */
  public $endpoints;
  /** @var Enum[] */
  public $enums;
  /** @var Http */
  public $http;
  /** @var string */
  public $id;
  /** @var Logging */
  public $logging;
  /** @var LogDescriptor[] */
  public $logs;
  /** @var MetricDescriptor[] */
  public $metrics;
  /** @var MonitoredResourceDescriptor[] */
  public $monitoredResources;
  /** @var Monitoring */
  public $monitoring;
  /** @var string */
  public $name;
  /** @var string */
  public $producerProjectId;
  /** @var Quota */
  public $quota;
  /** @var SourceInfo */
  public $sourceInfo;
  /** @var SystemParameters */
  public $systemParameters;
  /** @var Type[] */
  public $systemTypes;
  /** @var string */
  public $title;
  /** @var Type[] */
  public $types;
  /** @var Usage */
  public $usage;
  protected $collection_key = 'types';
  protected $apisType = Api::class;
  protected $apisDataType = 'array';
  protected $authenticationType = Authentication::class;
  protected $authenticationDataType = '';
  protected $backendType = Backend::class;
  protected $backendDataType = '';
  protected $billingType = Billing::class;
  protected $billingDataType = '';
  protected $contextType = Context::class;
  protected $contextDataType = '';
  protected $controlType = Control::class;
  protected $controlDataType = '';
  protected $customErrorType = CustomError::class;
  protected $customErrorDataType = '';
  protected $documentationType = Documentation::class;
  protected $documentationDataType = '';
  protected $endpointsType = Endpoint::class;
  protected $endpointsDataType = 'array';
  protected $enumsType = Enum::class;
  protected $enumsDataType = 'array';
  protected $httpType = Http::class;
  protected $httpDataType = '';
  protected $loggingType = Logging::class;
  protected $loggingDataType = '';
  protected $logsType = LogDescriptor::class;
  protected $logsDataType = 'array';
  protected $metricsType = MetricDescriptor::class;
  protected $metricsDataType = 'array';
  protected $monitoredResourcesType = MonitoredResourceDescriptor::class;
  protected $monitoredResourcesDataType = 'array';
  protected $monitoringType = Monitoring::class;
  protected $monitoringDataType = '';
  protected $quotaType = Quota::class;
  protected $quotaDataType = '';
  protected $sourceInfoType = SourceInfo::class;
  protected $sourceInfoDataType = '';
  protected $systemParametersType = SystemParameters::class;
  protected $systemParametersDataType = '';
  protected $systemTypesType = Type::class;
  protected $systemTypesDataType = 'array';
  protected $typesType = Type::class;
  protected $typesDataType = 'array';
  protected $usageType = Usage::class;
  protected $usageDataType = '';
  /** @param Api[] */
  public function setApis($apis)
  {
    $this->apis = $apis;
  }
  /** @return Api[] */
  public function getApis()
  {
    return $this->apis;
  }
  /** @param Authentication */
  public function setAuthentication(Authentication $authentication)
  {
    $this->authentication = $authentication;
  }
  /** @return Authentication */
  public function getAuthentication()
  {
    return $this->authentication;
  }
  /** @param Backend */
  public function setBackend(Backend $backend)
  {
    $this->backend = $backend;
  }
  /** @return Backend */
  public function getBackend()
  {
    return $this->backend;
  }
  /** @param Billing */
  public function setBilling(Billing $billing)
  {
    $this->billing = $billing;
  }
  /** @return Billing */
  public function getBilling()
  {
    return $this->billing;
  }
  /** @param string */
  public function setConfigVersion($configVersion)
  {
    $this->configVersion = $configVersion;
  }
  /** @return string */
  public function getConfigVersion()
  {
    return $this->configVersion;
  }
  /** @param Context */
  public function setContext(Context $context)
  {
    $this->context = $context;
  }
  /** @return Context */
  public function getContext()
  {
    return $this->context;
  }
  /** @param Control */
  public function setControl(Control $control)
  {
    $this->control = $control;
  }
  /** @return Control */
  public function getControl()
  {
    return $this->control;
  }
  /** @param CustomError */
  public function setCustomError(CustomError $customError)
  {
    $this->customError = $customError;
  }
  /** @return CustomError */
  public function getCustomError()
  {
    return $this->customError;
  }
  /** @param Documentation */
  public function setDocumentation(Documentation $documentation)
  {
    $this->documentation = $documentation;
  }
  /** @return Documentation */
  public function getDocumentation()
  {
    return $this->documentation;
  }
  /** @param Endpoint[] */
  public function setEndpoints($endpoints)
  {
    $this->endpoints = $endpoints;
  }
  /** @return Endpoint[] */
  public function getEndpoints()
  {
    return $this->endpoints;
  }
  /** @param Enum[] */
  public function setEnums($enums)
  {
    $this->enums = $enums;
  }
  /** @return Enum[] */
  public function getEnums()
  {
    return $this->enums;
  }
  /** @param Http */
  public function setHttp(Http $http)
  {
    $this->http = $http;
  }
  /** @return Http */
  public function getHttp()
  {
    return $this->http;
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
  /** @param Logging */
  public function setLogging(Logging $logging)
  {
    $this->logging = $logging;
  }
  /** @return Logging */
  public function getLogging()
  {
    return $this->logging;
  }
  /** @param LogDescriptor[] */
  public function setLogs($logs)
  {
    $this->logs = $logs;
  }
  /** @return LogDescriptor[] */
  public function getLogs()
  {
    return $this->logs;
  }
  /** @param MetricDescriptor[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return MetricDescriptor[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param MonitoredResourceDescriptor[] */
  public function setMonitoredResources($monitoredResources)
  {
    $this->monitoredResources = $monitoredResources;
  }
  /** @return MonitoredResourceDescriptor[] */
  public function getMonitoredResources()
  {
    return $this->monitoredResources;
  }
  /** @param Monitoring */
  public function setMonitoring(Monitoring $monitoring)
  {
    $this->monitoring = $monitoring;
  }
  /** @return Monitoring */
  public function getMonitoring()
  {
    return $this->monitoring;
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
  public function setProducerProjectId($producerProjectId)
  {
    $this->producerProjectId = $producerProjectId;
  }
  /** @return string */
  public function getProducerProjectId()
  {
    return $this->producerProjectId;
  }
  /** @param Quota */
  public function setQuota(Quota $quota)
  {
    $this->quota = $quota;
  }
  /** @return Quota */
  public function getQuota()
  {
    return $this->quota;
  }
  /** @param SourceInfo */
  public function setSourceInfo(SourceInfo $sourceInfo)
  {
    $this->sourceInfo = $sourceInfo;
  }
  /** @return SourceInfo */
  public function getSourceInfo()
  {
    return $this->sourceInfo;
  }
  /** @param SystemParameters */
  public function setSystemParameters(SystemParameters $systemParameters)
  {
    $this->systemParameters = $systemParameters;
  }
  /** @return SystemParameters */
  public function getSystemParameters()
  {
    return $this->systemParameters;
  }
  /** @param Type[] */
  public function setSystemTypes($systemTypes)
  {
    $this->systemTypes = $systemTypes;
  }
  /** @return Type[] */
  public function getSystemTypes()
  {
    return $this->systemTypes;
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
  /** @param Usage */
  public function setUsage(Usage $usage)
  {
    $this->usage = $usage;
  }
  /** @return Usage */
  public function getUsage()
  {
    return $this->usage;
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

class SourceContext extends \Google\Model
{
  /** @var string */
  public $fileName;

  /** @param string */
  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }
  /** @return string */
  public function getFileName()
  {
    return $this->fileName;
  }
}

class SourceInfo extends \Google\Collection
{
  /** @var array[] */
  public $sourceFiles;
  protected $collection_key = 'sourceFiles';
  /** @param array[] */
  public function setSourceFiles($sourceFiles)
  {
    $this->sourceFiles = $sourceFiles;
  }
  /** @return array[] */
  public function getSourceFiles()
  {
    return $this->sourceFiles;
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
  /** @var string */
  public $description;
  /** @var string */
  public $status;

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
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
}

class SubmitConfigSourceRequest extends \Google\Model
{
  /** @var ConfigSource */
  public $configSource;
  /** @var bool */
  public $validateOnly;
  protected $configSourceType = ConfigSource::class;
  protected $configSourceDataType = '';
  /** @param ConfigSource */
  public function setConfigSource(ConfigSource $configSource)
  {
    $this->configSource = $configSource;
  }
  /** @return ConfigSource */
  public function getConfigSource()
  {
    return $this->configSource;
  }
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

class SubmitConfigSourceResponse extends \Google\Model
{
  /** @var Service */
  public $serviceConfig;
  protected $serviceConfigType = Service::class;
  protected $serviceConfigDataType = '';
  /** @param Service */
  public function setServiceConfig(Service $serviceConfig)
  {
    $this->serviceConfig = $serviceConfig;
  }
  /** @return Service */
  public function getServiceConfig()
  {
    return $this->serviceConfig;
  }
}

class SystemParameter extends \Google\Model
{
  /** @var string */
  public $httpHeader;
  /** @var string */
  public $name;
  /** @var string */
  public $urlQueryParameter;

  /** @param string */
  public function setHttpHeader($httpHeader)
  {
    $this->httpHeader = $httpHeader;
  }
  /** @return string */
  public function getHttpHeader()
  {
    return $this->httpHeader;
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
  public function setUrlQueryParameter($urlQueryParameter)
  {
    $this->urlQueryParameter = $urlQueryParameter;
  }
  /** @return string */
  public function getUrlQueryParameter()
  {
    return $this->urlQueryParameter;
  }
}

class SystemParameterRule extends \Google\Collection
{
  /** @var SystemParameter[] */
  public $parameters;
  /** @var string */
  public $selector;
  protected $collection_key = 'parameters';
  protected $parametersType = SystemParameter::class;
  protected $parametersDataType = 'array';
  /** @param SystemParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return SystemParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /** @return string */
  public function getSelector()
  {
    return $this->selector;
  }
}

class SystemParameters extends \Google\Collection
{
  /** @var SystemParameterRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = SystemParameterRule::class;
  protected $rulesDataType = 'array';
  /** @param SystemParameterRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return SystemParameterRule[] */
  public function getRules()
  {
    return $this->rules;
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

class TrafficPercentStrategy extends \Google\Model
{
  public $percentages;

  public function setPercentages($percentages)
  {
    $this->percentages = $percentages;
  }
  public function getPercentages()
  {
    return $this->percentages;
  }
}

class Type extends \Google\Collection
{
  /** @var Field[] */
  public $fields;
  /** @var string */
  public $name;
  /** @var string[] */
  public $oneofs;
  /** @var Option[] */
  public $options;
  /** @var SourceContext */
  public $sourceContext;
  /** @var string */
  public $syntax;
  protected $collection_key = 'options';
  protected $fieldsType = Field::class;
  protected $fieldsDataType = 'array';
  protected $optionsType = Option::class;
  protected $optionsDataType = 'array';
  protected $sourceContextType = SourceContext::class;
  protected $sourceContextDataType = '';
  /** @param Field[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return Field[] */
  public function getFields()
  {
    return $this->fields;
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
  /** @param string[] */
  public function setOneofs($oneofs)
  {
    $this->oneofs = $oneofs;
  }
  /** @return string[] */
  public function getOneofs()
  {
    return $this->oneofs;
  }
  /** @param Option[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return Option[] */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param SourceContext */
  public function setSourceContext(SourceContext $sourceContext)
  {
    $this->sourceContext = $sourceContext;
  }
  /** @return SourceContext */
  public function getSourceContext()
  {
    return $this->sourceContext;
  }
  /** @param string */
  public function setSyntax($syntax)
  {
    $this->syntax = $syntax;
  }
  /** @return string */
  public function getSyntax()
  {
    return $this->syntax;
  }
}

class UndeleteServiceResponse extends \Google\Model
{
  /** @var ManagedService */
  public $service;
  protected $serviceType = ManagedService::class;
  protected $serviceDataType = '';
  /** @param ManagedService */
  public function setService(ManagedService $service)
  {
    $this->service = $service;
  }
  /** @return ManagedService */
  public function getService()
  {
    return $this->service;
  }
}

class Usage extends \Google\Collection
{
  /** @var string */
  public $producerNotificationChannel;
  /** @var string[] */
  public $requirements;
  /** @var UsageRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = UsageRule::class;
  protected $rulesDataType = 'array';
  /** @param string */
  public function setProducerNotificationChannel($producerNotificationChannel)
  {
    $this->producerNotificationChannel = $producerNotificationChannel;
  }
  /** @return string */
  public function getProducerNotificationChannel()
  {
    return $this->producerNotificationChannel;
  }
  /** @param string[] */
  public function setRequirements($requirements)
  {
    $this->requirements = $requirements;
  }
  /** @return string[] */
  public function getRequirements()
  {
    return $this->requirements;
  }
  /** @param UsageRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return UsageRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class UsageRule extends \Google\Model
{
  /** @var bool */
  public $allowUnregisteredCalls;
  /** @var string */
  public $selector;
  /** @var bool */
  public $skipServiceControl;

  /** @param bool */
  public function setAllowUnregisteredCalls($allowUnregisteredCalls)
  {
    $this->allowUnregisteredCalls = $allowUnregisteredCalls;
  }
  /** @return bool */
  public function getAllowUnregisteredCalls()
  {
    return $this->allowUnregisteredCalls;
  }
  /** @param string */
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /** @return string */
  public function getSelector()
  {
    return $this->selector;
  }
  /** @param bool */
  public function setSkipServiceControl($skipServiceControl)
  {
    $this->skipServiceControl = $skipServiceControl;
  }
  /** @return bool */
  public function getSkipServiceControl()
  {
    return $this->skipServiceControl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Advice::class, 'Google_Service_ServiceManagement_Advice');
class_alias(Api::class, 'Google_Service_ServiceManagement_Api');
class_alias(AuditConfig::class, 'Google_Service_ServiceManagement_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_ServiceManagement_AuditLogConfig');
class_alias(AuthProvider::class, 'Google_Service_ServiceManagement_AuthProvider');
class_alias(AuthRequirement::class, 'Google_Service_ServiceManagement_AuthRequirement');
class_alias(Authentication::class, 'Google_Service_ServiceManagement_Authentication');
class_alias(AuthenticationRule::class, 'Google_Service_ServiceManagement_AuthenticationRule');
class_alias(Backend::class, 'Google_Service_ServiceManagement_Backend');
class_alias(BackendRule::class, 'Google_Service_ServiceManagement_BackendRule');
class_alias(Billing::class, 'Google_Service_ServiceManagement_Billing');
class_alias(BillingDestination::class, 'Google_Service_ServiceManagement_BillingDestination');
class_alias(Binding::class, 'Google_Service_ServiceManagement_Binding');
class_alias(ChangeReport::class, 'Google_Service_ServiceManagement_ChangeReport');
class_alias(ConfigChange::class, 'Google_Service_ServiceManagement_ConfigChange');
class_alias(ConfigFile::class, 'Google_Service_ServiceManagement_ConfigFile');
class_alias(ConfigRef::class, 'Google_Service_ServiceManagement_ConfigRef');
class_alias(ConfigSource::class, 'Google_Service_ServiceManagement_ConfigSource');
class_alias(Context::class, 'Google_Service_ServiceManagement_Context');
class_alias(ContextRule::class, 'Google_Service_ServiceManagement_ContextRule');
class_alias(Control::class, 'Google_Service_ServiceManagement_Control');
class_alias(CustomError::class, 'Google_Service_ServiceManagement_CustomError');
class_alias(CustomErrorRule::class, 'Google_Service_ServiceManagement_CustomErrorRule');
class_alias(CustomHttpPattern::class, 'Google_Service_ServiceManagement_CustomHttpPattern');
class_alias(DeleteServiceStrategy::class, 'Google_Service_ServiceManagement_DeleteServiceStrategy');
class_alias(Diagnostic::class, 'Google_Service_ServiceManagement_Diagnostic');
class_alias(Documentation::class, 'Google_Service_ServiceManagement_Documentation');
class_alias(DocumentationRule::class, 'Google_Service_ServiceManagement_DocumentationRule');
class_alias(EnableServiceResponse::class, 'Google_Service_ServiceManagement_EnableServiceResponse');
class_alias(Endpoint::class, 'Google_Service_ServiceManagement_Endpoint');
class_alias(Enum::class, 'Google_Service_ServiceManagement_Enum');
class_alias(EnumValue::class, 'Google_Service_ServiceManagement_EnumValue');
class_alias(Expr::class, 'Google_Service_ServiceManagement_Expr');
class_alias(Field::class, 'Google_Service_ServiceManagement_Field');
class_alias(FlowErrorDetails::class, 'Google_Service_ServiceManagement_FlowErrorDetails');
class_alias(GenerateConfigReportRequest::class, 'Google_Service_ServiceManagement_GenerateConfigReportRequest');
class_alias(GenerateConfigReportResponse::class, 'Google_Service_ServiceManagement_GenerateConfigReportResponse');
class_alias(GetIamPolicyRequest::class, 'Google_Service_ServiceManagement_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_ServiceManagement_GetPolicyOptions');
class_alias(Http::class, 'Google_Service_ServiceManagement_Http');
class_alias(HttpRule::class, 'Google_Service_ServiceManagement_HttpRule');
class_alias(JwtLocation::class, 'Google_Service_ServiceManagement_JwtLocation');
class_alias(LabelDescriptor::class, 'Google_Service_ServiceManagement_LabelDescriptor');
class_alias(ListOperationsResponse::class, 'Google_Service_ServiceManagement_ListOperationsResponse');
class_alias(ListServiceConfigsResponse::class, 'Google_Service_ServiceManagement_ListServiceConfigsResponse');
class_alias(ListServiceRolloutsResponse::class, 'Google_Service_ServiceManagement_ListServiceRolloutsResponse');
class_alias(ListServicesResponse::class, 'Google_Service_ServiceManagement_ListServicesResponse');
class_alias(LogDescriptor::class, 'Google_Service_ServiceManagement_LogDescriptor');
class_alias(Logging::class, 'Google_Service_ServiceManagement_Logging');
class_alias(LoggingDestination::class, 'Google_Service_ServiceManagement_LoggingDestination');
class_alias(ManagedService::class, 'Google_Service_ServiceManagement_ManagedService');
class_alias(Method::class, 'Google_Service_ServiceManagement_Method');
class_alias(MetricDescriptor::class, 'Google_Service_ServiceManagement_MetricDescriptor');
class_alias(MetricDescriptorMetadata::class, 'Google_Service_ServiceManagement_MetricDescriptorMetadata');
class_alias(MetricRule::class, 'Google_Service_ServiceManagement_MetricRule');
class_alias(Mixin::class, 'Google_Service_ServiceManagement_Mixin');
class_alias(MonitoredResourceDescriptor::class, 'Google_Service_ServiceManagement_MonitoredResourceDescriptor');
class_alias(Monitoring::class, 'Google_Service_ServiceManagement_Monitoring');
class_alias(MonitoringDestination::class, 'Google_Service_ServiceManagement_MonitoringDestination');
class_alias(OAuthRequirements::class, 'Google_Service_ServiceManagement_OAuthRequirements');
class_alias(Operation::class, 'Google_Service_ServiceManagement_Operation');
class_alias(OperationInfo::class, 'Google_Service_ServiceManagement_OperationInfo');
class_alias(OperationMetadata::class, 'Google_Service_ServiceManagement_OperationMetadata');
class_alias(Option::class, 'Google_Service_ServiceManagement_Option');
class_alias(Page::class, 'Google_Service_ServiceManagement_Page');
class_alias(Policy::class, 'Google_Service_ServiceManagement_Policy');
class_alias(Quota::class, 'Google_Service_ServiceManagement_Quota');
class_alias(QuotaLimit::class, 'Google_Service_ServiceManagement_QuotaLimit');
class_alias(ResourceReference::class, 'Google_Service_ServiceManagement_ResourceReference');
class_alias(Rollout::class, 'Google_Service_ServiceManagement_Rollout');
class_alias(Service::class, 'Google_Service_ServiceManagement_Service');
class_alias(SetIamPolicyRequest::class, 'Google_Service_ServiceManagement_SetIamPolicyRequest');
class_alias(SourceContext::class, 'Google_Service_ServiceManagement_SourceContext');
class_alias(SourceInfo::class, 'Google_Service_ServiceManagement_SourceInfo');
class_alias(Status::class, 'Google_Service_ServiceManagement_Status');
class_alias(Step::class, 'Google_Service_ServiceManagement_Step');
class_alias(SubmitConfigSourceRequest::class, 'Google_Service_ServiceManagement_SubmitConfigSourceRequest');
class_alias(SubmitConfigSourceResponse::class, 'Google_Service_ServiceManagement_SubmitConfigSourceResponse');
class_alias(SystemParameter::class, 'Google_Service_ServiceManagement_SystemParameter');
class_alias(SystemParameterRule::class, 'Google_Service_ServiceManagement_SystemParameterRule');
class_alias(SystemParameters::class, 'Google_Service_ServiceManagement_SystemParameters');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_ServiceManagement_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_ServiceManagement_TestIamPermissionsResponse');
class_alias(TrafficPercentStrategy::class, 'Google_Service_ServiceManagement_TrafficPercentStrategy');
class_alias(Type::class, 'Google_Service_ServiceManagement_Type');
class_alias(UndeleteServiceResponse::class, 'Google_Service_ServiceManagement_UndeleteServiceResponse');
class_alias(Usage::class, 'Google_Service_ServiceManagement_Usage');
class_alias(UsageRule::class, 'Google_Service_ServiceManagement_UsageRule');
