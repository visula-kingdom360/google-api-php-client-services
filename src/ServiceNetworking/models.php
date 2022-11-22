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

namespace Google\Service\ServiceNetworking;

class AddDnsRecordSetMetadata extends \Google\Model
{
}

class AddDnsRecordSetRequest extends \Google\Model
{
  /** @var string */
  public $consumerNetwork;
  /** @var DnsRecordSet */
  public $dnsRecordSet;
  /** @var string */
  public $zone;
  protected $dnsRecordSetType = DnsRecordSet::class;
  protected $dnsRecordSetDataType = '';
  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
  /** @param DnsRecordSet */
  public function setDnsRecordSet(DnsRecordSet $dnsRecordSet)
  {
    $this->dnsRecordSet = $dnsRecordSet;
  }
  /** @return DnsRecordSet */
  public function getDnsRecordSet()
  {
    return $this->dnsRecordSet;
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

class AddDnsZoneMetadata extends \Google\Model
{
}

class AddDnsZoneRequest extends \Google\Model
{
  /** @var string */
  public $consumerNetwork;
  /** @var string */
  public $dnsSuffix;
  /** @var string */
  public $name;

  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
  /** @param string */
  public function setDnsSuffix($dnsSuffix)
  {
    $this->dnsSuffix = $dnsSuffix;
  }
  /** @return string */
  public function getDnsSuffix()
  {
    return $this->dnsSuffix;
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

class AddDnsZoneResponse extends \Google\Model
{
  /** @var DnsZone */
  public $consumerPeeringZone;
  /** @var DnsZone */
  public $producerPrivateZone;
  protected $consumerPeeringZoneType = DnsZone::class;
  protected $consumerPeeringZoneDataType = '';
  protected $producerPrivateZoneType = DnsZone::class;
  protected $producerPrivateZoneDataType = '';
  /** @param DnsZone */
  public function setConsumerPeeringZone(DnsZone $consumerPeeringZone)
  {
    $this->consumerPeeringZone = $consumerPeeringZone;
  }
  /** @return DnsZone */
  public function getConsumerPeeringZone()
  {
    return $this->consumerPeeringZone;
  }
  /** @param DnsZone */
  public function setProducerPrivateZone(DnsZone $producerPrivateZone)
  {
    $this->producerPrivateZone = $producerPrivateZone;
  }
  /** @return DnsZone */
  public function getProducerPrivateZone()
  {
    return $this->producerPrivateZone;
  }
}

class AddRolesMetadata extends \Google\Model
{
}

class AddRolesRequest extends \Google\Collection
{
  /** @var string */
  public $consumerNetwork;
  /** @var PolicyBinding[] */
  public $policyBinding;
  protected $collection_key = 'policyBinding';
  protected $policyBindingType = PolicyBinding::class;
  protected $policyBindingDataType = 'array';
  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
  /** @param PolicyBinding[] */
  public function setPolicyBinding($policyBinding)
  {
    $this->policyBinding = $policyBinding;
  }
  /** @return PolicyBinding[] */
  public function getPolicyBinding()
  {
    return $this->policyBinding;
  }
}

class AddRolesResponse extends \Google\Collection
{
  /** @var PolicyBinding[] */
  public $policyBinding;
  protected $collection_key = 'policyBinding';
  protected $policyBindingType = PolicyBinding::class;
  protected $policyBindingDataType = 'array';
  /** @param PolicyBinding[] */
  public function setPolicyBinding($policyBinding)
  {
    $this->policyBinding = $policyBinding;
  }
  /** @return PolicyBinding[] */
  public function getPolicyBinding()
  {
    return $this->policyBinding;
  }
}

class AddSubnetworkRequest extends \Google\Collection
{
  /** @var bool */
  public $checkServiceNetworkingUsePermission;
  /** @var string */
  public $computeIdempotencyWindow;
  /** @var string */
  public $consumer;
  /** @var string */
  public $consumerNetwork;
  /** @var string */
  public $description;
  /** @var int */
  public $ipPrefixLength;
  /** @var string */
  public $outsideAllocationPublicIpRange;
  /** @var string */
  public $privateIpv6GoogleAccess;
  /** @var string */
  public $purpose;
  /** @var string */
  public $region;
  /** @var string */
  public $requestedAddress;
  /** @var string[] */
  public $requestedRanges;
  /** @var SecondaryIpRangeSpec[] */
  public $secondaryIpRangeSpecs;
  /** @var string */
  public $subnetwork;
  /** @var string[] */
  public $subnetworkUsers;
  /** @var bool */
  public $useCustomComputeIdempotencyWindow;
  protected $collection_key = 'subnetworkUsers';
  protected $secondaryIpRangeSpecsType = SecondaryIpRangeSpec::class;
  protected $secondaryIpRangeSpecsDataType = 'array';
  /** @param bool */
  public function setCheckServiceNetworkingUsePermission($checkServiceNetworkingUsePermission)
  {
    $this->checkServiceNetworkingUsePermission = $checkServiceNetworkingUsePermission;
  }
  /** @return bool */
  public function getCheckServiceNetworkingUsePermission()
  {
    return $this->checkServiceNetworkingUsePermission;
  }
  /** @param string */
  public function setComputeIdempotencyWindow($computeIdempotencyWindow)
  {
    $this->computeIdempotencyWindow = $computeIdempotencyWindow;
  }
  /** @return string */
  public function getComputeIdempotencyWindow()
  {
    return $this->computeIdempotencyWindow;
  }
  /** @param string */
  public function setConsumer($consumer)
  {
    $this->consumer = $consumer;
  }
  /** @return string */
  public function getConsumer()
  {
    return $this->consumer;
  }
  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
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
  public function setIpPrefixLength($ipPrefixLength)
  {
    $this->ipPrefixLength = $ipPrefixLength;
  }
  /** @return int */
  public function getIpPrefixLength()
  {
    return $this->ipPrefixLength;
  }
  /** @param string */
  public function setOutsideAllocationPublicIpRange($outsideAllocationPublicIpRange)
  {
    $this->outsideAllocationPublicIpRange = $outsideAllocationPublicIpRange;
  }
  /** @return string */
  public function getOutsideAllocationPublicIpRange()
  {
    return $this->outsideAllocationPublicIpRange;
  }
  /** @param string */
  public function setPrivateIpv6GoogleAccess($privateIpv6GoogleAccess)
  {
    $this->privateIpv6GoogleAccess = $privateIpv6GoogleAccess;
  }
  /** @return string */
  public function getPrivateIpv6GoogleAccess()
  {
    return $this->privateIpv6GoogleAccess;
  }
  /** @param string */
  public function setPurpose($purpose)
  {
    $this->purpose = $purpose;
  }
  /** @return string */
  public function getPurpose()
  {
    return $this->purpose;
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
  public function setRequestedAddress($requestedAddress)
  {
    $this->requestedAddress = $requestedAddress;
  }
  /** @return string */
  public function getRequestedAddress()
  {
    return $this->requestedAddress;
  }
  /** @param string[] */
  public function setRequestedRanges($requestedRanges)
  {
    $this->requestedRanges = $requestedRanges;
  }
  /** @return string[] */
  public function getRequestedRanges()
  {
    return $this->requestedRanges;
  }
  /** @param SecondaryIpRangeSpec[] */
  public function setSecondaryIpRangeSpecs($secondaryIpRangeSpecs)
  {
    $this->secondaryIpRangeSpecs = $secondaryIpRangeSpecs;
  }
  /** @return SecondaryIpRangeSpec[] */
  public function getSecondaryIpRangeSpecs()
  {
    return $this->secondaryIpRangeSpecs;
  }
  /** @param string */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /** @return string */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
  /** @param string[] */
  public function setSubnetworkUsers($subnetworkUsers)
  {
    $this->subnetworkUsers = $subnetworkUsers;
  }
  /** @return string[] */
  public function getSubnetworkUsers()
  {
    return $this->subnetworkUsers;
  }
  /** @param bool */
  public function setUseCustomComputeIdempotencyWindow($useCustomComputeIdempotencyWindow)
  {
    $this->useCustomComputeIdempotencyWindow = $useCustomComputeIdempotencyWindow;
  }
  /** @return bool */
  public function getUseCustomComputeIdempotencyWindow()
  {
    return $this->useCustomComputeIdempotencyWindow;
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
  public $minDeadline;
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
  public function setMinDeadline($minDeadline)
  {
    $this->minDeadline = $minDeadline;
  }
  public function getMinDeadline()
  {
    return $this->minDeadline;
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

class CancelOperationRequest extends \Google\Model
{
}

class ClientLibrarySettings extends \Google\Model
{
  /** @var CppSettings */
  public $cppSettings;
  /** @var DotnetSettings */
  public $dotnetSettings;
  /** @var GoSettings */
  public $goSettings;
  /** @var JavaSettings */
  public $javaSettings;
  /** @var string */
  public $launchStage;
  /** @var NodeSettings */
  public $nodeSettings;
  /** @var PhpSettings */
  public $phpSettings;
  /** @var PythonSettings */
  public $pythonSettings;
  /** @var bool */
  public $restNumericEnums;
  /** @var RubySettings */
  public $rubySettings;
  /** @var string */
  public $version;
  protected $cppSettingsType = CppSettings::class;
  protected $cppSettingsDataType = '';
  protected $dotnetSettingsType = DotnetSettings::class;
  protected $dotnetSettingsDataType = '';
  protected $goSettingsType = GoSettings::class;
  protected $goSettingsDataType = '';
  protected $javaSettingsType = JavaSettings::class;
  protected $javaSettingsDataType = '';
  protected $nodeSettingsType = NodeSettings::class;
  protected $nodeSettingsDataType = '';
  protected $phpSettingsType = PhpSettings::class;
  protected $phpSettingsDataType = '';
  protected $pythonSettingsType = PythonSettings::class;
  protected $pythonSettingsDataType = '';
  protected $rubySettingsType = RubySettings::class;
  protected $rubySettingsDataType = '';
  /** @param CppSettings */
  public function setCppSettings(CppSettings $cppSettings)
  {
    $this->cppSettings = $cppSettings;
  }
  /** @return CppSettings */
  public function getCppSettings()
  {
    return $this->cppSettings;
  }
  /** @param DotnetSettings */
  public function setDotnetSettings(DotnetSettings $dotnetSettings)
  {
    $this->dotnetSettings = $dotnetSettings;
  }
  /** @return DotnetSettings */
  public function getDotnetSettings()
  {
    return $this->dotnetSettings;
  }
  /** @param GoSettings */
  public function setGoSettings(GoSettings $goSettings)
  {
    $this->goSettings = $goSettings;
  }
  /** @return GoSettings */
  public function getGoSettings()
  {
    return $this->goSettings;
  }
  /** @param JavaSettings */
  public function setJavaSettings(JavaSettings $javaSettings)
  {
    $this->javaSettings = $javaSettings;
  }
  /** @return JavaSettings */
  public function getJavaSettings()
  {
    return $this->javaSettings;
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
  /** @param NodeSettings */
  public function setNodeSettings(NodeSettings $nodeSettings)
  {
    $this->nodeSettings = $nodeSettings;
  }
  /** @return NodeSettings */
  public function getNodeSettings()
  {
    return $this->nodeSettings;
  }
  /** @param PhpSettings */
  public function setPhpSettings(PhpSettings $phpSettings)
  {
    $this->phpSettings = $phpSettings;
  }
  /** @return PhpSettings */
  public function getPhpSettings()
  {
    return $this->phpSettings;
  }
  /** @param PythonSettings */
  public function setPythonSettings(PythonSettings $pythonSettings)
  {
    $this->pythonSettings = $pythonSettings;
  }
  /** @return PythonSettings */
  public function getPythonSettings()
  {
    return $this->pythonSettings;
  }
  /** @param bool */
  public function setRestNumericEnums($restNumericEnums)
  {
    $this->restNumericEnums = $restNumericEnums;
  }
  /** @return bool */
  public function getRestNumericEnums()
  {
    return $this->restNumericEnums;
  }
  /** @param RubySettings */
  public function setRubySettings(RubySettings $rubySettings)
  {
    $this->rubySettings = $rubySettings;
  }
  /** @return RubySettings */
  public function getRubySettings()
  {
    return $this->rubySettings;
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

class CloudSQLConfig extends \Google\Model
{
  /** @var string */
  public $service;
  /** @var string */
  public $umbrellaNetwork;
  /** @var string */
  public $umbrellaProject;

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
  public function setUmbrellaNetwork($umbrellaNetwork)
  {
    $this->umbrellaNetwork = $umbrellaNetwork;
  }
  /** @return string */
  public function getUmbrellaNetwork()
  {
    return $this->umbrellaNetwork;
  }
  /** @param string */
  public function setUmbrellaProject($umbrellaProject)
  {
    $this->umbrellaProject = $umbrellaProject;
  }
  /** @return string */
  public function getUmbrellaProject()
  {
    return $this->umbrellaProject;
  }
}

class CommonLanguageSettings extends \Google\Collection
{
  /** @var string[] */
  public $destinations;
  /** @var string */
  public $referenceDocsUri;
  protected $collection_key = 'destinations';
  /** @param string[] */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /** @return string[] */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /** @param string */
  public function setReferenceDocsUri($referenceDocsUri)
  {
    $this->referenceDocsUri = $referenceDocsUri;
  }
  /** @return string */
  public function getReferenceDocsUri()
  {
    return $this->referenceDocsUri;
  }
}

class Connection extends \Google\Collection
{
  /** @var string */
  public $network;
  /** @var string */
  public $peering;
  /** @var string[] */
  public $reservedPeeringRanges;
  /** @var string */
  public $service;
  protected $collection_key = 'reservedPeeringRanges';
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
  public function setPeering($peering)
  {
    $this->peering = $peering;
  }
  /** @return string */
  public function getPeering()
  {
    return $this->peering;
  }
  /** @param string[] */
  public function setReservedPeeringRanges($reservedPeeringRanges)
  {
    $this->reservedPeeringRanges = $reservedPeeringRanges;
  }
  /** @return string[] */
  public function getReservedPeeringRanges()
  {
    return $this->reservedPeeringRanges;
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

class ConsumerConfig extends \Google\Collection
{
  /** @var CloudSQLConfig[] */
  public $cloudsqlConfigs;
  /** @var bool */
  public $consumerExportCustomRoutes;
  /** @var bool */
  public $consumerExportSubnetRoutesWithPublicIp;
  /** @var bool */
  public $consumerImportCustomRoutes;
  /** @var bool */
  public $consumerImportSubnetRoutesWithPublicIp;
  /** @var bool */
  public $producerExportCustomRoutes;
  /** @var bool */
  public $producerExportSubnetRoutesWithPublicIp;
  /** @var bool */
  public $producerImportCustomRoutes;
  /** @var bool */
  public $producerImportSubnetRoutesWithPublicIp;
  /** @var string */
  public $producerNetwork;
  /** @var GoogleCloudServicenetworkingV1ConsumerConfigReservedRange[] */
  public $reservedRanges;
  /** @var string[] */
  public $usedIpRanges;
  /** @var bool */
  public $vpcScReferenceArchitectureEnabled;
  protected $collection_key = 'usedIpRanges';
  protected $cloudsqlConfigsType = CloudSQLConfig::class;
  protected $cloudsqlConfigsDataType = 'array';
  protected $reservedRangesType = GoogleCloudServicenetworkingV1ConsumerConfigReservedRange::class;
  protected $reservedRangesDataType = 'array';
  /** @param CloudSQLConfig[] */
  public function setCloudsqlConfigs($cloudsqlConfigs)
  {
    $this->cloudsqlConfigs = $cloudsqlConfigs;
  }
  /** @return CloudSQLConfig[] */
  public function getCloudsqlConfigs()
  {
    return $this->cloudsqlConfigs;
  }
  /** @param bool */
  public function setConsumerExportCustomRoutes($consumerExportCustomRoutes)
  {
    $this->consumerExportCustomRoutes = $consumerExportCustomRoutes;
  }
  /** @return bool */
  public function getConsumerExportCustomRoutes()
  {
    return $this->consumerExportCustomRoutes;
  }
  /** @param bool */
  public function setConsumerExportSubnetRoutesWithPublicIp($consumerExportSubnetRoutesWithPublicIp)
  {
    $this->consumerExportSubnetRoutesWithPublicIp = $consumerExportSubnetRoutesWithPublicIp;
  }
  /** @return bool */
  public function getConsumerExportSubnetRoutesWithPublicIp()
  {
    return $this->consumerExportSubnetRoutesWithPublicIp;
  }
  /** @param bool */
  public function setConsumerImportCustomRoutes($consumerImportCustomRoutes)
  {
    $this->consumerImportCustomRoutes = $consumerImportCustomRoutes;
  }
  /** @return bool */
  public function getConsumerImportCustomRoutes()
  {
    return $this->consumerImportCustomRoutes;
  }
  /** @param bool */
  public function setConsumerImportSubnetRoutesWithPublicIp($consumerImportSubnetRoutesWithPublicIp)
  {
    $this->consumerImportSubnetRoutesWithPublicIp = $consumerImportSubnetRoutesWithPublicIp;
  }
  /** @return bool */
  public function getConsumerImportSubnetRoutesWithPublicIp()
  {
    return $this->consumerImportSubnetRoutesWithPublicIp;
  }
  /** @param bool */
  public function setProducerExportCustomRoutes($producerExportCustomRoutes)
  {
    $this->producerExportCustomRoutes = $producerExportCustomRoutes;
  }
  /** @return bool */
  public function getProducerExportCustomRoutes()
  {
    return $this->producerExportCustomRoutes;
  }
  /** @param bool */
  public function setProducerExportSubnetRoutesWithPublicIp($producerExportSubnetRoutesWithPublicIp)
  {
    $this->producerExportSubnetRoutesWithPublicIp = $producerExportSubnetRoutesWithPublicIp;
  }
  /** @return bool */
  public function getProducerExportSubnetRoutesWithPublicIp()
  {
    return $this->producerExportSubnetRoutesWithPublicIp;
  }
  /** @param bool */
  public function setProducerImportCustomRoutes($producerImportCustomRoutes)
  {
    $this->producerImportCustomRoutes = $producerImportCustomRoutes;
  }
  /** @return bool */
  public function getProducerImportCustomRoutes()
  {
    return $this->producerImportCustomRoutes;
  }
  /** @param bool */
  public function setProducerImportSubnetRoutesWithPublicIp($producerImportSubnetRoutesWithPublicIp)
  {
    $this->producerImportSubnetRoutesWithPublicIp = $producerImportSubnetRoutesWithPublicIp;
  }
  /** @return bool */
  public function getProducerImportSubnetRoutesWithPublicIp()
  {
    return $this->producerImportSubnetRoutesWithPublicIp;
  }
  /** @param string */
  public function setProducerNetwork($producerNetwork)
  {
    $this->producerNetwork = $producerNetwork;
  }
  /** @return string */
  public function getProducerNetwork()
  {
    return $this->producerNetwork;
  }
  /** @param GoogleCloudServicenetworkingV1ConsumerConfigReservedRange[] */
  public function setReservedRanges($reservedRanges)
  {
    $this->reservedRanges = $reservedRanges;
  }
  /** @return GoogleCloudServicenetworkingV1ConsumerConfigReservedRange[] */
  public function getReservedRanges()
  {
    return $this->reservedRanges;
  }
  /** @param string[] */
  public function setUsedIpRanges($usedIpRanges)
  {
    $this->usedIpRanges = $usedIpRanges;
  }
  /** @return string[] */
  public function getUsedIpRanges()
  {
    return $this->usedIpRanges;
  }
  /** @param bool */
  public function setVpcScReferenceArchitectureEnabled($vpcScReferenceArchitectureEnabled)
  {
    $this->vpcScReferenceArchitectureEnabled = $vpcScReferenceArchitectureEnabled;
  }
  /** @return bool */
  public function getVpcScReferenceArchitectureEnabled()
  {
    return $this->vpcScReferenceArchitectureEnabled;
  }
}

class ConsumerConfigMetadata extends \Google\Model
{
}

class ConsumerProject extends \Google\Model
{
  /** @var string */
  public $projectNum;

  /** @param string */
  public function setProjectNum($projectNum)
  {
    $this->projectNum = $projectNum;
  }
  /** @return string */
  public function getProjectNum()
  {
    return $this->projectNum;
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

class CppSettings extends \Google\Model
{
  /** @var CommonLanguageSettings */
  public $common;
  protected $commonType = CommonLanguageSettings::class;
  protected $commonDataType = '';
  /** @param CommonLanguageSettings */
  public function setCommon(CommonLanguageSettings $common)
  {
    $this->common = $common;
  }
  /** @return CommonLanguageSettings */
  public function getCommon()
  {
    return $this->common;
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

class DeleteConnectionMetadata extends \Google\Model
{
}

class DeleteConnectionRequest extends \Google\Model
{
  /** @var string */
  public $consumerNetwork;

  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
}

class DeletePeeredDnsDomainMetadata extends \Google\Model
{
}

class DisableVpcServiceControlsRequest extends \Google\Model
{
  /** @var string */
  public $consumerNetwork;

  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
}

class DnsRecordSet extends \Google\Collection
{
  /** @var string[] */
  public $data;
  /** @var string */
  public $domain;
  /** @var string */
  public $ttl;
  /** @var string */
  public $type;
  protected $collection_key = 'data';
  /** @param string[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string[] */
  public function getData()
  {
    return $this->data;
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
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
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

class DnsZone extends \Google\Model
{
  /** @var string */
  public $dnsSuffix;
  /** @var string */
  public $name;

  /** @param string */
  public function setDnsSuffix($dnsSuffix)
  {
    $this->dnsSuffix = $dnsSuffix;
  }
  /** @return string */
  public function getDnsSuffix()
  {
    return $this->dnsSuffix;
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

class DotnetSettings extends \Google\Model
{
  /** @var CommonLanguageSettings */
  public $common;
  protected $commonType = CommonLanguageSettings::class;
  protected $commonDataType = '';
  /** @param CommonLanguageSettings */
  public function setCommon(CommonLanguageSettings $common)
  {
    $this->common = $common;
  }
  /** @return CommonLanguageSettings */
  public function getCommon()
  {
    return $this->common;
  }
}

class EnableVpcServiceControlsRequest extends \Google\Model
{
  /** @var string */
  public $consumerNetwork;

  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
}

class Endpoint extends \Google\Collection
{
  /** @var string[] */
  public $aliases;
  /** @var bool */
  public $allowCors;
  /** @var string */
  public $name;
  /** @var string */
  public $target;
  protected $collection_key = 'aliases';
  /** @param string[] */
  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }
  /** @return string[] */
  public function getAliases()
  {
    return $this->aliases;
  }
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

class GoSettings extends \Google\Model
{
  /** @var CommonLanguageSettings */
  public $common;
  protected $commonType = CommonLanguageSettings::class;
  protected $commonDataType = '';
  /** @param CommonLanguageSettings */
  public function setCommon(CommonLanguageSettings $common)
  {
    $this->common = $common;
  }
  /** @return CommonLanguageSettings */
  public function getCommon()
  {
    return $this->common;
  }
}

class GoogleCloudServicenetworkingV1ConsumerConfigReservedRange extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var int */
  public $ipPrefixLength;
  /** @var string */
  public $name;

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
  /** @param int */
  public function setIpPrefixLength($ipPrefixLength)
  {
    $this->ipPrefixLength = $ipPrefixLength;
  }
  /** @return int */
  public function getIpPrefixLength()
  {
    return $this->ipPrefixLength;
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

class GoogleCloudServicenetworkingV1betaConnection extends \Google\Collection
{
  /** @var string */
  public $network;
  /** @var string */
  public $peering;
  /** @var string[] */
  public $reservedPeeringRanges;
  /** @var string */
  public $service;
  protected $collection_key = 'reservedPeeringRanges';
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
  public function setPeering($peering)
  {
    $this->peering = $peering;
  }
  /** @return string */
  public function getPeering()
  {
    return $this->peering;
  }
  /** @param string[] */
  public function setReservedPeeringRanges($reservedPeeringRanges)
  {
    $this->reservedPeeringRanges = $reservedPeeringRanges;
  }
  /** @return string[] */
  public function getReservedPeeringRanges()
  {
    return $this->reservedPeeringRanges;
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

class GoogleCloudServicenetworkingV1betaSubnetwork extends \Google\Model
{
  /** @var string */
  public $ipCidrRange;
  /** @var string */
  public $name;
  /** @var string */
  public $network;
  /** @var bool */
  public $outsideAllocation;

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
  /** @param bool */
  public function setOutsideAllocation($outsideAllocation)
  {
    $this->outsideAllocation = $outsideAllocation;
  }
  /** @return bool */
  public function getOutsideAllocation()
  {
    return $this->outsideAllocation;
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

class JavaSettings extends \Google\Model
{
  /** @var CommonLanguageSettings */
  public $common;
  /** @var string */
  public $libraryPackage;
  /** @var string[] */
  public $serviceClassNames;
  protected $commonType = CommonLanguageSettings::class;
  protected $commonDataType = '';
  /** @param CommonLanguageSettings */
  public function setCommon(CommonLanguageSettings $common)
  {
    $this->common = $common;
  }
  /** @return CommonLanguageSettings */
  public function getCommon()
  {
    return $this->common;
  }
  /** @param string */
  public function setLibraryPackage($libraryPackage)
  {
    $this->libraryPackage = $libraryPackage;
  }
  /** @return string */
  public function getLibraryPackage()
  {
    return $this->libraryPackage;
  }
  /** @param string[] */
  public function setServiceClassNames($serviceClassNames)
  {
    $this->serviceClassNames = $serviceClassNames;
  }
  /** @return string[] */
  public function getServiceClassNames()
  {
    return $this->serviceClassNames;
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

class ListConnectionsResponse extends \Google\Collection
{
  /** @var Connection[] */
  public $connections;
  protected $collection_key = 'connections';
  protected $connectionsType = Connection::class;
  protected $connectionsDataType = 'array';
  /** @param Connection[] */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /** @return Connection[] */
  public function getConnections()
  {
    return $this->connections;
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

class ListPeeredDnsDomainsResponse extends \Google\Collection
{
  /** @var PeeredDnsDomain[] */
  public $peeredDnsDomains;
  protected $collection_key = 'peeredDnsDomains';
  protected $peeredDnsDomainsType = PeeredDnsDomain::class;
  protected $peeredDnsDomainsDataType = 'array';
  /** @param PeeredDnsDomain[] */
  public function setPeeredDnsDomains($peeredDnsDomains)
  {
    $this->peeredDnsDomains = $peeredDnsDomains;
  }
  /** @return PeeredDnsDomain[] */
  public function getPeeredDnsDomains()
  {
    return $this->peeredDnsDomains;
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

class LongRunning extends \Google\Model
{
  /** @var string */
  public $initialPollDelay;
  /** @var string */
  public $maxPollDelay;
  /** @var float */
  public $pollDelayMultiplier;
  /** @var string */
  public $totalPollTimeout;

  /** @param string */
  public function setInitialPollDelay($initialPollDelay)
  {
    $this->initialPollDelay = $initialPollDelay;
  }
  /** @return string */
  public function getInitialPollDelay()
  {
    return $this->initialPollDelay;
  }
  /** @param string */
  public function setMaxPollDelay($maxPollDelay)
  {
    $this->maxPollDelay = $maxPollDelay;
  }
  /** @return string */
  public function getMaxPollDelay()
  {
    return $this->maxPollDelay;
  }
  /** @param float */
  public function setPollDelayMultiplier($pollDelayMultiplier)
  {
    $this->pollDelayMultiplier = $pollDelayMultiplier;
  }
  /** @return float */
  public function getPollDelayMultiplier()
  {
    return $this->pollDelayMultiplier;
  }
  /** @param string */
  public function setTotalPollTimeout($totalPollTimeout)
  {
    $this->totalPollTimeout = $totalPollTimeout;
  }
  /** @return string */
  public function getTotalPollTimeout()
  {
    return $this->totalPollTimeout;
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

class MethodSettings extends \Google\Model
{
  /** @var LongRunning */
  public $longRunning;
  /** @var string */
  public $selector;
  protected $longRunningType = LongRunning::class;
  protected $longRunningDataType = '';
  /** @param LongRunning */
  public function setLongRunning(LongRunning $longRunning)
  {
    $this->longRunning = $longRunning;
  }
  /** @return LongRunning */
  public function getLongRunning()
  {
    return $this->longRunning;
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

class NodeSettings extends \Google\Model
{
  /** @var CommonLanguageSettings */
  public $common;
  protected $commonType = CommonLanguageSettings::class;
  protected $commonDataType = '';
  /** @param CommonLanguageSettings */
  public function setCommon(CommonLanguageSettings $common)
  {
    $this->common = $common;
  }
  /** @return CommonLanguageSettings */
  public function getCommon()
  {
    return $this->common;
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

class PartialDeleteConnectionMetadata extends \Google\Model
{
}

class PeeredDnsDomain extends \Google\Model
{
  /** @var string */
  public $dnsSuffix;
  /** @var string */
  public $name;

  /** @param string */
  public function setDnsSuffix($dnsSuffix)
  {
    $this->dnsSuffix = $dnsSuffix;
  }
  /** @return string */
  public function getDnsSuffix()
  {
    return $this->dnsSuffix;
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

class PeeredDnsDomainMetadata extends \Google\Model
{
}

class PhpSettings extends \Google\Model
{
  /** @var CommonLanguageSettings */
  public $common;
  protected $commonType = CommonLanguageSettings::class;
  protected $commonDataType = '';
  /** @param CommonLanguageSettings */
  public function setCommon(CommonLanguageSettings $common)
  {
    $this->common = $common;
  }
  /** @return CommonLanguageSettings */
  public function getCommon()
  {
    return $this->common;
  }
}

class PolicyBinding extends \Google\Model
{
  /** @var string */
  public $member;
  /** @var string */
  public $role;

  /** @param string */
  public function setMember($member)
  {
    $this->member = $member;
  }
  /** @return string */
  public function getMember()
  {
    return $this->member;
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

class Publishing extends \Google\Collection
{
  /** @var string */
  public $apiShortName;
  /** @var string[] */
  public $codeownerGithubTeams;
  /** @var string */
  public $docTagPrefix;
  /** @var string */
  public $documentationUri;
  /** @var string */
  public $githubLabel;
  /** @var ClientLibrarySettings[] */
  public $librarySettings;
  /** @var MethodSettings[] */
  public $methodSettings;
  /** @var string */
  public $newIssueUri;
  /** @var string */
  public $organization;
  protected $collection_key = 'methodSettings';
  protected $librarySettingsType = ClientLibrarySettings::class;
  protected $librarySettingsDataType = 'array';
  protected $methodSettingsType = MethodSettings::class;
  protected $methodSettingsDataType = 'array';
  /** @param string */
  public function setApiShortName($apiShortName)
  {
    $this->apiShortName = $apiShortName;
  }
  /** @return string */
  public function getApiShortName()
  {
    return $this->apiShortName;
  }
  /** @param string[] */
  public function setCodeownerGithubTeams($codeownerGithubTeams)
  {
    $this->codeownerGithubTeams = $codeownerGithubTeams;
  }
  /** @return string[] */
  public function getCodeownerGithubTeams()
  {
    return $this->codeownerGithubTeams;
  }
  /** @param string */
  public function setDocTagPrefix($docTagPrefix)
  {
    $this->docTagPrefix = $docTagPrefix;
  }
  /** @return string */
  public function getDocTagPrefix()
  {
    return $this->docTagPrefix;
  }
  /** @param string */
  public function setDocumentationUri($documentationUri)
  {
    $this->documentationUri = $documentationUri;
  }
  /** @return string */
  public function getDocumentationUri()
  {
    return $this->documentationUri;
  }
  /** @param string */
  public function setGithubLabel($githubLabel)
  {
    $this->githubLabel = $githubLabel;
  }
  /** @return string */
  public function getGithubLabel()
  {
    return $this->githubLabel;
  }
  /** @param ClientLibrarySettings[] */
  public function setLibrarySettings($librarySettings)
  {
    $this->librarySettings = $librarySettings;
  }
  /** @return ClientLibrarySettings[] */
  public function getLibrarySettings()
  {
    return $this->librarySettings;
  }
  /** @param MethodSettings[] */
  public function setMethodSettings($methodSettings)
  {
    $this->methodSettings = $methodSettings;
  }
  /** @return MethodSettings[] */
  public function getMethodSettings()
  {
    return $this->methodSettings;
  }
  /** @param string */
  public function setNewIssueUri($newIssueUri)
  {
    $this->newIssueUri = $newIssueUri;
  }
  /** @return string */
  public function getNewIssueUri()
  {
    return $this->newIssueUri;
  }
  /** @param string */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
  }
}

class PythonSettings extends \Google\Model
{
  /** @var CommonLanguageSettings */
  public $common;
  protected $commonType = CommonLanguageSettings::class;
  protected $commonDataType = '';
  /** @param CommonLanguageSettings */
  public function setCommon(CommonLanguageSettings $common)
  {
    $this->common = $common;
  }
  /** @return CommonLanguageSettings */
  public function getCommon()
  {
    return $this->common;
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

class Range extends \Google\Model
{
  /** @var string */
  public $ipCidrRange;
  /** @var string */
  public $network;

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

class RangeReservation extends \Google\Collection
{
  /** @var int */
  public $ipPrefixLength;
  /** @var string[] */
  public $requestedRanges;
  /** @var int[] */
  public $secondaryRangeIpPrefixLengths;
  /** @var Subnetwork[] */
  public $subnetworkCandidates;
  protected $collection_key = 'subnetworkCandidates';
  protected $subnetworkCandidatesType = Subnetwork::class;
  protected $subnetworkCandidatesDataType = 'array';
  /** @param int */
  public function setIpPrefixLength($ipPrefixLength)
  {
    $this->ipPrefixLength = $ipPrefixLength;
  }
  /** @return int */
  public function getIpPrefixLength()
  {
    return $this->ipPrefixLength;
  }
  /** @param string[] */
  public function setRequestedRanges($requestedRanges)
  {
    $this->requestedRanges = $requestedRanges;
  }
  /** @return string[] */
  public function getRequestedRanges()
  {
    return $this->requestedRanges;
  }
  /** @param int[] */
  public function setSecondaryRangeIpPrefixLengths($secondaryRangeIpPrefixLengths)
  {
    $this->secondaryRangeIpPrefixLengths = $secondaryRangeIpPrefixLengths;
  }
  /** @return int[] */
  public function getSecondaryRangeIpPrefixLengths()
  {
    return $this->secondaryRangeIpPrefixLengths;
  }
  /** @param Subnetwork[] */
  public function setSubnetworkCandidates($subnetworkCandidates)
  {
    $this->subnetworkCandidates = $subnetworkCandidates;
  }
  /** @return Subnetwork[] */
  public function getSubnetworkCandidates()
  {
    return $this->subnetworkCandidates;
  }
}

class RemoveDnsRecordSetMetadata extends \Google\Model
{
}

class RemoveDnsRecordSetRequest extends \Google\Model
{
  /** @var string */
  public $consumerNetwork;
  /** @var DnsRecordSet */
  public $dnsRecordSet;
  /** @var string */
  public $zone;
  protected $dnsRecordSetType = DnsRecordSet::class;
  protected $dnsRecordSetDataType = '';
  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
  /** @param DnsRecordSet */
  public function setDnsRecordSet(DnsRecordSet $dnsRecordSet)
  {
    $this->dnsRecordSet = $dnsRecordSet;
  }
  /** @return DnsRecordSet */
  public function getDnsRecordSet()
  {
    return $this->dnsRecordSet;
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

class RemoveDnsRecordSetResponse extends \Google\Model
{
}

class RemoveDnsZoneMetadata extends \Google\Model
{
}

class RemoveDnsZoneRequest extends \Google\Model
{
  /** @var string */
  public $consumerNetwork;
  /** @var string */
  public $name;

  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
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

class RemoveDnsZoneResponse extends \Google\Model
{
}

class Route extends \Google\Model
{
  /** @var string */
  public $destRange;
  /** @var string */
  public $name;
  /** @var string */
  public $network;
  /** @var string */
  public $nextHopGateway;

  /** @param string */
  public function setDestRange($destRange)
  {
    $this->destRange = $destRange;
  }
  /** @return string */
  public function getDestRange()
  {
    return $this->destRange;
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
  /** @param string */
  public function setNextHopGateway($nextHopGateway)
  {
    $this->nextHopGateway = $nextHopGateway;
  }
  /** @return string */
  public function getNextHopGateway()
  {
    return $this->nextHopGateway;
  }
}

class RubySettings extends \Google\Model
{
  /** @var CommonLanguageSettings */
  public $common;
  protected $commonType = CommonLanguageSettings::class;
  protected $commonDataType = '';
  /** @param CommonLanguageSettings */
  public function setCommon(CommonLanguageSettings $common)
  {
    $this->common = $common;
  }
  /** @return CommonLanguageSettings */
  public function getCommon()
  {
    return $this->common;
  }
}

class SearchRangeRequest extends \Google\Model
{
  /** @var int */
  public $ipPrefixLength;
  /** @var string */
  public $network;

  /** @param int */
  public function setIpPrefixLength($ipPrefixLength)
  {
    $this->ipPrefixLength = $ipPrefixLength;
  }
  /** @return int */
  public function getIpPrefixLength()
  {
    return $this->ipPrefixLength;
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

class SecondaryIpRange extends \Google\Model
{
  /** @var string */
  public $ipCidrRange;
  /** @var string */
  public $rangeName;

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
  /** @param string */
  public function setRangeName($rangeName)
  {
    $this->rangeName = $rangeName;
  }
  /** @return string */
  public function getRangeName()
  {
    return $this->rangeName;
  }
}

class SecondaryIpRangeSpec extends \Google\Model
{
  /** @var int */
  public $ipPrefixLength;
  /** @var string */
  public $outsideAllocationPublicIpRange;
  /** @var string */
  public $rangeName;
  /** @var string */
  public $requestedAddress;

  /** @param int */
  public function setIpPrefixLength($ipPrefixLength)
  {
    $this->ipPrefixLength = $ipPrefixLength;
  }
  /** @return int */
  public function getIpPrefixLength()
  {
    return $this->ipPrefixLength;
  }
  /** @param string */
  public function setOutsideAllocationPublicIpRange($outsideAllocationPublicIpRange)
  {
    $this->outsideAllocationPublicIpRange = $outsideAllocationPublicIpRange;
  }
  /** @return string */
  public function getOutsideAllocationPublicIpRange()
  {
    return $this->outsideAllocationPublicIpRange;
  }
  /** @param string */
  public function setRangeName($rangeName)
  {
    $this->rangeName = $rangeName;
  }
  /** @return string */
  public function getRangeName()
  {
    return $this->rangeName;
  }
  /** @param string */
  public function setRequestedAddress($requestedAddress)
  {
    $this->requestedAddress = $requestedAddress;
  }
  /** @return string */
  public function getRequestedAddress()
  {
    return $this->requestedAddress;
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
  /** @var Publishing */
  public $publishing;
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
  protected $publishingType = Publishing::class;
  protected $publishingDataType = '';
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
  /** @param Publishing */
  public function setPublishing(Publishing $publishing)
  {
    $this->publishing = $publishing;
  }
  /** @return Publishing */
  public function getPublishing()
  {
    return $this->publishing;
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

class ServicenetworkingEmpty extends \Google\Model
{
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

class Subnetwork extends \Google\Collection
{
  /** @var string */
  public $ipCidrRange;
  /** @var string */
  public $name;
  /** @var string */
  public $network;
  /** @var bool */
  public $outsideAllocation;
  /** @var string */
  public $region;
  /** @var SecondaryIpRange[] */
  public $secondaryIpRanges;
  protected $collection_key = 'secondaryIpRanges';
  protected $secondaryIpRangesType = SecondaryIpRange::class;
  protected $secondaryIpRangesDataType = 'array';
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
  /** @param bool */
  public function setOutsideAllocation($outsideAllocation)
  {
    $this->outsideAllocation = $outsideAllocation;
  }
  /** @return bool */
  public function getOutsideAllocation()
  {
    return $this->outsideAllocation;
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
  /** @param SecondaryIpRange[] */
  public function setSecondaryIpRanges($secondaryIpRanges)
  {
    $this->secondaryIpRanges = $secondaryIpRanges;
  }
  /** @return SecondaryIpRange[] */
  public function getSecondaryIpRanges()
  {
    return $this->secondaryIpRanges;
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

class UpdateConsumerConfigRequest extends \Google\Model
{
  /** @var ConsumerConfig */
  public $consumerConfig;
  protected $consumerConfigType = ConsumerConfig::class;
  protected $consumerConfigDataType = '';
  /** @param ConsumerConfig */
  public function setConsumerConfig(ConsumerConfig $consumerConfig)
  {
    $this->consumerConfig = $consumerConfig;
  }
  /** @return ConsumerConfig */
  public function getConsumerConfig()
  {
    return $this->consumerConfig;
  }
}

class UpdateDnsRecordSetMetadata extends \Google\Model
{
}

class UpdateDnsRecordSetRequest extends \Google\Model
{
  /** @var string */
  public $consumerNetwork;
  /** @var DnsRecordSet */
  public $existingDnsRecordSet;
  /** @var DnsRecordSet */
  public $newDnsRecordSet;
  /** @var string */
  public $zone;
  protected $existingDnsRecordSetType = DnsRecordSet::class;
  protected $existingDnsRecordSetDataType = '';
  protected $newDnsRecordSetType = DnsRecordSet::class;
  protected $newDnsRecordSetDataType = '';
  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
  /** @param DnsRecordSet */
  public function setExistingDnsRecordSet(DnsRecordSet $existingDnsRecordSet)
  {
    $this->existingDnsRecordSet = $existingDnsRecordSet;
  }
  /** @return DnsRecordSet */
  public function getExistingDnsRecordSet()
  {
    return $this->existingDnsRecordSet;
  }
  /** @param DnsRecordSet */
  public function setNewDnsRecordSet(DnsRecordSet $newDnsRecordSet)
  {
    $this->newDnsRecordSet = $newDnsRecordSet;
  }
  /** @return DnsRecordSet */
  public function getNewDnsRecordSet()
  {
    return $this->newDnsRecordSet;
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

class ValidateConsumerConfigRequest extends \Google\Model
{
  /** @var bool */
  public $checkServiceNetworkingUsePermission;
  /** @var string */
  public $consumerNetwork;
  /** @var ConsumerProject */
  public $consumerProject;
  /** @var RangeReservation */
  public $rangeReservation;
  /** @var bool */
  public $validateNetwork;
  protected $consumerProjectType = ConsumerProject::class;
  protected $consumerProjectDataType = '';
  protected $rangeReservationType = RangeReservation::class;
  protected $rangeReservationDataType = '';
  /** @param bool */
  public function setCheckServiceNetworkingUsePermission($checkServiceNetworkingUsePermission)
  {
    $this->checkServiceNetworkingUsePermission = $checkServiceNetworkingUsePermission;
  }
  /** @return bool */
  public function getCheckServiceNetworkingUsePermission()
  {
    return $this->checkServiceNetworkingUsePermission;
  }
  /** @param string */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /** @return string */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
  /** @param ConsumerProject */
  public function setConsumerProject(ConsumerProject $consumerProject)
  {
    $this->consumerProject = $consumerProject;
  }
  /** @return ConsumerProject */
  public function getConsumerProject()
  {
    return $this->consumerProject;
  }
  /** @param RangeReservation */
  public function setRangeReservation(RangeReservation $rangeReservation)
  {
    $this->rangeReservation = $rangeReservation;
  }
  /** @return RangeReservation */
  public function getRangeReservation()
  {
    return $this->rangeReservation;
  }
  /** @param bool */
  public function setValidateNetwork($validateNetwork)
  {
    $this->validateNetwork = $validateNetwork;
  }
  /** @return bool */
  public function getValidateNetwork()
  {
    return $this->validateNetwork;
  }
}

class ValidateConsumerConfigResponse extends \Google\Collection
{
  /** @var Subnetwork[] */
  public $existingSubnetworkCandidates;
  /** @var bool */
  public $isValid;
  /** @var string */
  public $validationError;
  protected $collection_key = 'existingSubnetworkCandidates';
  protected $existingSubnetworkCandidatesType = Subnetwork::class;
  protected $existingSubnetworkCandidatesDataType = 'array';
  /** @param Subnetwork[] */
  public function setExistingSubnetworkCandidates($existingSubnetworkCandidates)
  {
    $this->existingSubnetworkCandidates = $existingSubnetworkCandidates;
  }
  /** @return Subnetwork[] */
  public function getExistingSubnetworkCandidates()
  {
    return $this->existingSubnetworkCandidates;
  }
  /** @param bool */
  public function setIsValid($isValid)
  {
    $this->isValid = $isValid;
  }
  /** @return bool */
  public function getIsValid()
  {
    return $this->isValid;
  }
  /** @param string */
  public function setValidationError($validationError)
  {
    $this->validationError = $validationError;
  }
  /** @return string */
  public function getValidationError()
  {
    return $this->validationError;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddDnsRecordSetMetadata::class, 'Google_Service_ServiceNetworking_AddDnsRecordSetMetadata');
class_alias(AddDnsRecordSetRequest::class, 'Google_Service_ServiceNetworking_AddDnsRecordSetRequest');
class_alias(AddDnsZoneMetadata::class, 'Google_Service_ServiceNetworking_AddDnsZoneMetadata');
class_alias(AddDnsZoneRequest::class, 'Google_Service_ServiceNetworking_AddDnsZoneRequest');
class_alias(AddDnsZoneResponse::class, 'Google_Service_ServiceNetworking_AddDnsZoneResponse');
class_alias(AddRolesMetadata::class, 'Google_Service_ServiceNetworking_AddRolesMetadata');
class_alias(AddRolesRequest::class, 'Google_Service_ServiceNetworking_AddRolesRequest');
class_alias(AddRolesResponse::class, 'Google_Service_ServiceNetworking_AddRolesResponse');
class_alias(AddSubnetworkRequest::class, 'Google_Service_ServiceNetworking_AddSubnetworkRequest');
class_alias(Api::class, 'Google_Service_ServiceNetworking_Api');
class_alias(AuthProvider::class, 'Google_Service_ServiceNetworking_AuthProvider');
class_alias(AuthRequirement::class, 'Google_Service_ServiceNetworking_AuthRequirement');
class_alias(Authentication::class, 'Google_Service_ServiceNetworking_Authentication');
class_alias(AuthenticationRule::class, 'Google_Service_ServiceNetworking_AuthenticationRule');
class_alias(Backend::class, 'Google_Service_ServiceNetworking_Backend');
class_alias(BackendRule::class, 'Google_Service_ServiceNetworking_BackendRule');
class_alias(Billing::class, 'Google_Service_ServiceNetworking_Billing');
class_alias(BillingDestination::class, 'Google_Service_ServiceNetworking_BillingDestination');
class_alias(CancelOperationRequest::class, 'Google_Service_ServiceNetworking_CancelOperationRequest');
class_alias(ClientLibrarySettings::class, 'Google_Service_ServiceNetworking_ClientLibrarySettings');
class_alias(CloudSQLConfig::class, 'Google_Service_ServiceNetworking_CloudSQLConfig');
class_alias(CommonLanguageSettings::class, 'Google_Service_ServiceNetworking_CommonLanguageSettings');
class_alias(Connection::class, 'Google_Service_ServiceNetworking_Connection');
class_alias(ConsumerConfig::class, 'Google_Service_ServiceNetworking_ConsumerConfig');
class_alias(ConsumerConfigMetadata::class, 'Google_Service_ServiceNetworking_ConsumerConfigMetadata');
class_alias(ConsumerProject::class, 'Google_Service_ServiceNetworking_ConsumerProject');
class_alias(Context::class, 'Google_Service_ServiceNetworking_Context');
class_alias(ContextRule::class, 'Google_Service_ServiceNetworking_ContextRule');
class_alias(Control::class, 'Google_Service_ServiceNetworking_Control');
class_alias(CppSettings::class, 'Google_Service_ServiceNetworking_CppSettings');
class_alias(CustomError::class, 'Google_Service_ServiceNetworking_CustomError');
class_alias(CustomErrorRule::class, 'Google_Service_ServiceNetworking_CustomErrorRule');
class_alias(CustomHttpPattern::class, 'Google_Service_ServiceNetworking_CustomHttpPattern');
class_alias(DeleteConnectionMetadata::class, 'Google_Service_ServiceNetworking_DeleteConnectionMetadata');
class_alias(DeleteConnectionRequest::class, 'Google_Service_ServiceNetworking_DeleteConnectionRequest');
class_alias(DeletePeeredDnsDomainMetadata::class, 'Google_Service_ServiceNetworking_DeletePeeredDnsDomainMetadata');
class_alias(DisableVpcServiceControlsRequest::class, 'Google_Service_ServiceNetworking_DisableVpcServiceControlsRequest');
class_alias(DnsRecordSet::class, 'Google_Service_ServiceNetworking_DnsRecordSet');
class_alias(DnsZone::class, 'Google_Service_ServiceNetworking_DnsZone');
class_alias(Documentation::class, 'Google_Service_ServiceNetworking_Documentation');
class_alias(DocumentationRule::class, 'Google_Service_ServiceNetworking_DocumentationRule');
class_alias(DotnetSettings::class, 'Google_Service_ServiceNetworking_DotnetSettings');
class_alias(EnableVpcServiceControlsRequest::class, 'Google_Service_ServiceNetworking_EnableVpcServiceControlsRequest');
class_alias(Endpoint::class, 'Google_Service_ServiceNetworking_Endpoint');
class_alias(Enum::class, 'Google_Service_ServiceNetworking_Enum');
class_alias(EnumValue::class, 'Google_Service_ServiceNetworking_EnumValue');
class_alias(Field::class, 'Google_Service_ServiceNetworking_Field');
class_alias(GoSettings::class, 'Google_Service_ServiceNetworking_GoSettings');
class_alias(GoogleCloudServicenetworkingV1ConsumerConfigReservedRange::class, 'Google_Service_ServiceNetworking_GoogleCloudServicenetworkingV1ConsumerConfigReservedRange');
class_alias(GoogleCloudServicenetworkingV1betaConnection::class, 'Google_Service_ServiceNetworking_GoogleCloudServicenetworkingV1betaConnection');
class_alias(GoogleCloudServicenetworkingV1betaSubnetwork::class, 'Google_Service_ServiceNetworking_GoogleCloudServicenetworkingV1betaSubnetwork');
class_alias(Http::class, 'Google_Service_ServiceNetworking_Http');
class_alias(HttpRule::class, 'Google_Service_ServiceNetworking_HttpRule');
class_alias(JavaSettings::class, 'Google_Service_ServiceNetworking_JavaSettings');
class_alias(JwtLocation::class, 'Google_Service_ServiceNetworking_JwtLocation');
class_alias(LabelDescriptor::class, 'Google_Service_ServiceNetworking_LabelDescriptor');
class_alias(ListConnectionsResponse::class, 'Google_Service_ServiceNetworking_ListConnectionsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_ServiceNetworking_ListOperationsResponse');
class_alias(ListPeeredDnsDomainsResponse::class, 'Google_Service_ServiceNetworking_ListPeeredDnsDomainsResponse');
class_alias(LogDescriptor::class, 'Google_Service_ServiceNetworking_LogDescriptor');
class_alias(Logging::class, 'Google_Service_ServiceNetworking_Logging');
class_alias(LoggingDestination::class, 'Google_Service_ServiceNetworking_LoggingDestination');
class_alias(LongRunning::class, 'Google_Service_ServiceNetworking_LongRunning');
class_alias(Method::class, 'Google_Service_ServiceNetworking_Method');
class_alias(MethodSettings::class, 'Google_Service_ServiceNetworking_MethodSettings');
class_alias(MetricDescriptor::class, 'Google_Service_ServiceNetworking_MetricDescriptor');
class_alias(MetricDescriptorMetadata::class, 'Google_Service_ServiceNetworking_MetricDescriptorMetadata');
class_alias(MetricRule::class, 'Google_Service_ServiceNetworking_MetricRule');
class_alias(Mixin::class, 'Google_Service_ServiceNetworking_Mixin');
class_alias(MonitoredResourceDescriptor::class, 'Google_Service_ServiceNetworking_MonitoredResourceDescriptor');
class_alias(Monitoring::class, 'Google_Service_ServiceNetworking_Monitoring');
class_alias(MonitoringDestination::class, 'Google_Service_ServiceNetworking_MonitoringDestination');
class_alias(NodeSettings::class, 'Google_Service_ServiceNetworking_NodeSettings');
class_alias(OAuthRequirements::class, 'Google_Service_ServiceNetworking_OAuthRequirements');
class_alias(Operation::class, 'Google_Service_ServiceNetworking_Operation');
class_alias(Option::class, 'Google_Service_ServiceNetworking_Option');
class_alias(Page::class, 'Google_Service_ServiceNetworking_Page');
class_alias(PartialDeleteConnectionMetadata::class, 'Google_Service_ServiceNetworking_PartialDeleteConnectionMetadata');
class_alias(PeeredDnsDomain::class, 'Google_Service_ServiceNetworking_PeeredDnsDomain');
class_alias(PeeredDnsDomainMetadata::class, 'Google_Service_ServiceNetworking_PeeredDnsDomainMetadata');
class_alias(PhpSettings::class, 'Google_Service_ServiceNetworking_PhpSettings');
class_alias(PolicyBinding::class, 'Google_Service_ServiceNetworking_PolicyBinding');
class_alias(Publishing::class, 'Google_Service_ServiceNetworking_Publishing');
class_alias(PythonSettings::class, 'Google_Service_ServiceNetworking_PythonSettings');
class_alias(Quota::class, 'Google_Service_ServiceNetworking_Quota');
class_alias(QuotaLimit::class, 'Google_Service_ServiceNetworking_QuotaLimit');
class_alias(Range::class, 'Google_Service_ServiceNetworking_Range');
class_alias(RangeReservation::class, 'Google_Service_ServiceNetworking_RangeReservation');
class_alias(RemoveDnsRecordSetMetadata::class, 'Google_Service_ServiceNetworking_RemoveDnsRecordSetMetadata');
class_alias(RemoveDnsRecordSetRequest::class, 'Google_Service_ServiceNetworking_RemoveDnsRecordSetRequest');
class_alias(RemoveDnsRecordSetResponse::class, 'Google_Service_ServiceNetworking_RemoveDnsRecordSetResponse');
class_alias(RemoveDnsZoneMetadata::class, 'Google_Service_ServiceNetworking_RemoveDnsZoneMetadata');
class_alias(RemoveDnsZoneRequest::class, 'Google_Service_ServiceNetworking_RemoveDnsZoneRequest');
class_alias(RemoveDnsZoneResponse::class, 'Google_Service_ServiceNetworking_RemoveDnsZoneResponse');
class_alias(Route::class, 'Google_Service_ServiceNetworking_Route');
class_alias(RubySettings::class, 'Google_Service_ServiceNetworking_RubySettings');
class_alias(SearchRangeRequest::class, 'Google_Service_ServiceNetworking_SearchRangeRequest');
class_alias(SecondaryIpRange::class, 'Google_Service_ServiceNetworking_SecondaryIpRange');
class_alias(SecondaryIpRangeSpec::class, 'Google_Service_ServiceNetworking_SecondaryIpRangeSpec');
class_alias(Service::class, 'Google_Service_ServiceNetworking_Service');
class_alias(ServicenetworkingEmpty::class, 'Google_Service_ServiceNetworking_ServicenetworkingEmpty');
class_alias(SourceContext::class, 'Google_Service_ServiceNetworking_SourceContext');
class_alias(SourceInfo::class, 'Google_Service_ServiceNetworking_SourceInfo');
class_alias(Status::class, 'Google_Service_ServiceNetworking_Status');
class_alias(Subnetwork::class, 'Google_Service_ServiceNetworking_Subnetwork');
class_alias(SystemParameter::class, 'Google_Service_ServiceNetworking_SystemParameter');
class_alias(SystemParameterRule::class, 'Google_Service_ServiceNetworking_SystemParameterRule');
class_alias(SystemParameters::class, 'Google_Service_ServiceNetworking_SystemParameters');
class_alias(Type::class, 'Google_Service_ServiceNetworking_Type');
class_alias(UpdateConsumerConfigRequest::class, 'Google_Service_ServiceNetworking_UpdateConsumerConfigRequest');
class_alias(UpdateDnsRecordSetMetadata::class, 'Google_Service_ServiceNetworking_UpdateDnsRecordSetMetadata');
class_alias(UpdateDnsRecordSetRequest::class, 'Google_Service_ServiceNetworking_UpdateDnsRecordSetRequest');
class_alias(Usage::class, 'Google_Service_ServiceNetworking_Usage');
class_alias(UsageRule::class, 'Google_Service_ServiceNetworking_UsageRule');
class_alias(ValidateConsumerConfigRequest::class, 'Google_Service_ServiceNetworking_ValidateConsumerConfigRequest');
class_alias(ValidateConsumerConfigResponse::class, 'Google_Service_ServiceNetworking_ValidateConsumerConfigResponse');
