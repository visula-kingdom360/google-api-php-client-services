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

namespace Google\Service\Dns;

class Change extends \Google\Collection
{
  /** @var ResourceRecordSet[] */
  public $additions;
  /** @var ResourceRecordSet[] */
  public $deletions;
  /** @var string */
  public $id;
  /** @var bool */
  public $isServing;
  /** @var string */
  public $kind;
  /** @var string */
  public $startTime;
  /** @var string */
  public $status;
  protected $collection_key = 'deletions';
  protected $additionsType = ResourceRecordSet::class;
  protected $additionsDataType = 'array';
  protected $deletionsType = ResourceRecordSet::class;
  protected $deletionsDataType = 'array';
  /** @param ResourceRecordSet[] */
  public function setAdditions($additions)
  {
    $this->additions = $additions;
  }
  /** @return ResourceRecordSet[] */
  public function getAdditions()
  {
    return $this->additions;
  }
  /** @param ResourceRecordSet[] */
  public function setDeletions($deletions)
  {
    $this->deletions = $deletions;
  }
  /** @return ResourceRecordSet[] */
  public function getDeletions()
  {
    return $this->deletions;
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
  public function setIsServing($isServing)
  {
    $this->isServing = $isServing;
  }
  /** @return bool */
  public function getIsServing()
  {
    return $this->isServing;
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
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
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

class ChangesListResponse extends \Google\Collection
{
  /** @var Change[] */
  public $changes;
  /** @var ResponseHeader */
  public $header;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'changes';
  protected $changesType = Change::class;
  protected $changesDataType = 'array';
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  /** @param Change[] */
  public function setChanges($changes)
  {
    $this->changes = $changes;
  }
  /** @return Change[] */
  public function getChanges()
  {
    return $this->changes;
  }
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
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

class DnsKey extends \Google\Collection
{
  /** @var string */
  public $algorithm;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $description;
  /** @var DnsKeyDigest[] */
  public $digests;
  /** @var string */
  public $id;
  /** @var bool */
  public $isActive;
  /** @var string */
  public $keyLength;
  /** @var int */
  public $keyTag;
  /** @var string */
  public $kind;
  /** @var string */
  public $publicKey;
  /** @var string */
  public $type;
  protected $collection_key = 'digests';
  protected $digestsType = DnsKeyDigest::class;
  protected $digestsDataType = 'array';
  /** @param string */
  public function setAlgorithm($algorithm)
  {
    $this->algorithm = $algorithm;
  }
  /** @return string */
  public function getAlgorithm()
  {
    return $this->algorithm;
  }
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
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
  /** @param DnsKeyDigest[] */
  public function setDigests($digests)
  {
    $this->digests = $digests;
  }
  /** @return DnsKeyDigest[] */
  public function getDigests()
  {
    return $this->digests;
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
  public function setIsActive($isActive)
  {
    $this->isActive = $isActive;
  }
  /** @return bool */
  public function getIsActive()
  {
    return $this->isActive;
  }
  /** @param string */
  public function setKeyLength($keyLength)
  {
    $this->keyLength = $keyLength;
  }
  /** @return string */
  public function getKeyLength()
  {
    return $this->keyLength;
  }
  /** @param int */
  public function setKeyTag($keyTag)
  {
    $this->keyTag = $keyTag;
  }
  /** @return int */
  public function getKeyTag()
  {
    return $this->keyTag;
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
  public function setPublicKey($publicKey)
  {
    $this->publicKey = $publicKey;
  }
  /** @return string */
  public function getPublicKey()
  {
    return $this->publicKey;
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

class DnsKeyDigest extends \Google\Model
{
  /** @var string */
  public $digest;
  /** @var string */
  public $type;

  /** @param string */
  public function setDigest($digest)
  {
    $this->digest = $digest;
  }
  /** @return string */
  public function getDigest()
  {
    return $this->digest;
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

class DnsKeySpec extends \Google\Model
{
  /** @var string */
  public $algorithm;
  /** @var string */
  public $keyLength;
  /** @var string */
  public $keyType;
  /** @var string */
  public $kind;

  /** @param string */
  public function setAlgorithm($algorithm)
  {
    $this->algorithm = $algorithm;
  }
  /** @return string */
  public function getAlgorithm()
  {
    return $this->algorithm;
  }
  /** @param string */
  public function setKeyLength($keyLength)
  {
    $this->keyLength = $keyLength;
  }
  /** @return string */
  public function getKeyLength()
  {
    return $this->keyLength;
  }
  /** @param string */
  public function setKeyType($keyType)
  {
    $this->keyType = $keyType;
  }
  /** @return string */
  public function getKeyType()
  {
    return $this->keyType;
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
}

class DnsKeysListResponse extends \Google\Collection
{
  /** @var DnsKey[] */
  public $dnsKeys;
  /** @var ResponseHeader */
  public $header;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dnsKeys';
  protected $dnsKeysType = DnsKey::class;
  protected $dnsKeysDataType = 'array';
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  /** @param DnsKey[] */
  public function setDnsKeys($dnsKeys)
  {
    $this->dnsKeys = $dnsKeys;
  }
  /** @return DnsKey[] */
  public function getDnsKeys()
  {
    return $this->dnsKeys;
  }
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
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

class GoogleIamV1GetIamPolicyRequest extends \Google\Model
{
  /** @var GoogleIamV1GetPolicyOptions */
  public $options;
  protected $optionsType = GoogleIamV1GetPolicyOptions::class;
  protected $optionsDataType = '';
  /** @param GoogleIamV1GetPolicyOptions */
  public function setOptions(GoogleIamV1GetPolicyOptions $options)
  {
    $this->options = $options;
  }
  /** @return GoogleIamV1GetPolicyOptions */
  public function getOptions()
  {
    return $this->options;
  }
}

class GoogleIamV1GetPolicyOptions extends \Google\Model
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

class ManagedZone extends \Google\Collection
{
  /** @var ManagedZoneCloudLoggingConfig */
  public $cloudLoggingConfig;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $description;
  /** @var string */
  public $dnsName;
  /** @var ManagedZoneDnsSecConfig */
  public $dnssecConfig;
  /** @var ManagedZoneForwardingConfig */
  public $forwardingConfig;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $nameServerSet;
  /** @var string[] */
  public $nameServers;
  /** @var ManagedZonePeeringConfig */
  public $peeringConfig;
  /** @var ManagedZonePrivateVisibilityConfig */
  public $privateVisibilityConfig;
  /** @var ManagedZoneReverseLookupConfig */
  public $reverseLookupConfig;
  /** @var ManagedZoneServiceDirectoryConfig */
  public $serviceDirectoryConfig;
  /** @var string */
  public $visibility;
  protected $collection_key = 'nameServers';
  protected $cloudLoggingConfigType = ManagedZoneCloudLoggingConfig::class;
  protected $cloudLoggingConfigDataType = '';
  protected $dnssecConfigType = ManagedZoneDnsSecConfig::class;
  protected $dnssecConfigDataType = '';
  protected $forwardingConfigType = ManagedZoneForwardingConfig::class;
  protected $forwardingConfigDataType = '';
  protected $peeringConfigType = ManagedZonePeeringConfig::class;
  protected $peeringConfigDataType = '';
  protected $privateVisibilityConfigType = ManagedZonePrivateVisibilityConfig::class;
  protected $privateVisibilityConfigDataType = '';
  protected $reverseLookupConfigType = ManagedZoneReverseLookupConfig::class;
  protected $reverseLookupConfigDataType = '';
  protected $serviceDirectoryConfigType = ManagedZoneServiceDirectoryConfig::class;
  protected $serviceDirectoryConfigDataType = '';
  /** @param ManagedZoneCloudLoggingConfig */
  public function setCloudLoggingConfig(ManagedZoneCloudLoggingConfig $cloudLoggingConfig)
  {
    $this->cloudLoggingConfig = $cloudLoggingConfig;
  }
  /** @return ManagedZoneCloudLoggingConfig */
  public function getCloudLoggingConfig()
  {
    return $this->cloudLoggingConfig;
  }
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
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
  public function setDnsName($dnsName)
  {
    $this->dnsName = $dnsName;
  }
  /** @return string */
  public function getDnsName()
  {
    return $this->dnsName;
  }
  /** @param ManagedZoneDnsSecConfig */
  public function setDnssecConfig(ManagedZoneDnsSecConfig $dnssecConfig)
  {
    $this->dnssecConfig = $dnssecConfig;
  }
  /** @return ManagedZoneDnsSecConfig */
  public function getDnssecConfig()
  {
    return $this->dnssecConfig;
  }
  /** @param ManagedZoneForwardingConfig */
  public function setForwardingConfig(ManagedZoneForwardingConfig $forwardingConfig)
  {
    $this->forwardingConfig = $forwardingConfig;
  }
  /** @return ManagedZoneForwardingConfig */
  public function getForwardingConfig()
  {
    return $this->forwardingConfig;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  public function setNameServerSet($nameServerSet)
  {
    $this->nameServerSet = $nameServerSet;
  }
  /** @return string */
  public function getNameServerSet()
  {
    return $this->nameServerSet;
  }
  /** @param string[] */
  public function setNameServers($nameServers)
  {
    $this->nameServers = $nameServers;
  }
  /** @return string[] */
  public function getNameServers()
  {
    return $this->nameServers;
  }
  /** @param ManagedZonePeeringConfig */
  public function setPeeringConfig(ManagedZonePeeringConfig $peeringConfig)
  {
    $this->peeringConfig = $peeringConfig;
  }
  /** @return ManagedZonePeeringConfig */
  public function getPeeringConfig()
  {
    return $this->peeringConfig;
  }
  /** @param ManagedZonePrivateVisibilityConfig */
  public function setPrivateVisibilityConfig(ManagedZonePrivateVisibilityConfig $privateVisibilityConfig)
  {
    $this->privateVisibilityConfig = $privateVisibilityConfig;
  }
  /** @return ManagedZonePrivateVisibilityConfig */
  public function getPrivateVisibilityConfig()
  {
    return $this->privateVisibilityConfig;
  }
  /** @param ManagedZoneReverseLookupConfig */
  public function setReverseLookupConfig(ManagedZoneReverseLookupConfig $reverseLookupConfig)
  {
    $this->reverseLookupConfig = $reverseLookupConfig;
  }
  /** @return ManagedZoneReverseLookupConfig */
  public function getReverseLookupConfig()
  {
    return $this->reverseLookupConfig;
  }
  /** @param ManagedZoneServiceDirectoryConfig */
  public function setServiceDirectoryConfig(ManagedZoneServiceDirectoryConfig $serviceDirectoryConfig)
  {
    $this->serviceDirectoryConfig = $serviceDirectoryConfig;
  }
  /** @return ManagedZoneServiceDirectoryConfig */
  public function getServiceDirectoryConfig()
  {
    return $this->serviceDirectoryConfig;
  }
  /** @param string */
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  /** @return string */
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class ManagedZoneCloudLoggingConfig extends \Google\Model
{
  /** @var bool */
  public $enableLogging;
  /** @var string */
  public $kind;

  /** @param bool */
  public function setEnableLogging($enableLogging)
  {
    $this->enableLogging = $enableLogging;
  }
  /** @return bool */
  public function getEnableLogging()
  {
    return $this->enableLogging;
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
}

class ManagedZoneDnsSecConfig extends \Google\Collection
{
  /** @var DnsKeySpec[] */
  public $defaultKeySpecs;
  /** @var string */
  public $kind;
  /** @var string */
  public $nonExistence;
  /** @var string */
  public $state;
  protected $collection_key = 'defaultKeySpecs';
  protected $defaultKeySpecsType = DnsKeySpec::class;
  protected $defaultKeySpecsDataType = 'array';
  /** @param DnsKeySpec[] */
  public function setDefaultKeySpecs($defaultKeySpecs)
  {
    $this->defaultKeySpecs = $defaultKeySpecs;
  }
  /** @return DnsKeySpec[] */
  public function getDefaultKeySpecs()
  {
    return $this->defaultKeySpecs;
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
  public function setNonExistence($nonExistence)
  {
    $this->nonExistence = $nonExistence;
  }
  /** @return string */
  public function getNonExistence()
  {
    return $this->nonExistence;
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
}

class ManagedZoneForwardingConfig extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var ManagedZoneForwardingConfigNameServerTarget[] */
  public $targetNameServers;
  protected $collection_key = 'targetNameServers';
  protected $targetNameServersType = ManagedZoneForwardingConfigNameServerTarget::class;
  protected $targetNameServersDataType = 'array';
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
  /** @param ManagedZoneForwardingConfigNameServerTarget[] */
  public function setTargetNameServers($targetNameServers)
  {
    $this->targetNameServers = $targetNameServers;
  }
  /** @return ManagedZoneForwardingConfigNameServerTarget[] */
  public function getTargetNameServers()
  {
    return $this->targetNameServers;
  }
}

class ManagedZoneForwardingConfigNameServerTarget extends \Google\Model
{
  /** @var string */
  public $forwardingPath;
  /** @var string */
  public $ipv4Address;
  /** @var string */
  public $ipv6Address;
  /** @var string */
  public $kind;

  /** @param string */
  public function setForwardingPath($forwardingPath)
  {
    $this->forwardingPath = $forwardingPath;
  }
  /** @return string */
  public function getForwardingPath()
  {
    return $this->forwardingPath;
  }
  /** @param string */
  public function setIpv4Address($ipv4Address)
  {
    $this->ipv4Address = $ipv4Address;
  }
  /** @return string */
  public function getIpv4Address()
  {
    return $this->ipv4Address;
  }
  /** @param string */
  public function setIpv6Address($ipv6Address)
  {
    $this->ipv6Address = $ipv6Address;
  }
  /** @return string */
  public function getIpv6Address()
  {
    return $this->ipv6Address;
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
}

class ManagedZoneOperationsListResponse extends \Google\Collection
{
  /** @var ResponseHeader */
  public $header;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Operation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $operationsType = Operation::class;
  protected $operationsDataType = 'array';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
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

class ManagedZonePeeringConfig extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var ManagedZonePeeringConfigTargetNetwork */
  public $targetNetwork;
  protected $targetNetworkType = ManagedZonePeeringConfigTargetNetwork::class;
  protected $targetNetworkDataType = '';
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
  /** @param ManagedZonePeeringConfigTargetNetwork */
  public function setTargetNetwork(ManagedZonePeeringConfigTargetNetwork $targetNetwork)
  {
    $this->targetNetwork = $targetNetwork;
  }
  /** @return ManagedZonePeeringConfigTargetNetwork */
  public function getTargetNetwork()
  {
    return $this->targetNetwork;
  }
}

class ManagedZonePeeringConfigTargetNetwork extends \Google\Model
{
  /** @var string */
  public $deactivateTime;
  /** @var string */
  public $kind;
  /** @var string */
  public $networkUrl;

  /** @param string */
  public function setDeactivateTime($deactivateTime)
  {
    $this->deactivateTime = $deactivateTime;
  }
  /** @return string */
  public function getDeactivateTime()
  {
    return $this->deactivateTime;
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
  public function setNetworkUrl($networkUrl)
  {
    $this->networkUrl = $networkUrl;
  }
  /** @return string */
  public function getNetworkUrl()
  {
    return $this->networkUrl;
  }
}

class ManagedZonePrivateVisibilityConfig extends \Google\Collection
{
  /** @var ManagedZonePrivateVisibilityConfigGKECluster[] */
  public $gkeClusters;
  /** @var string */
  public $kind;
  /** @var ManagedZonePrivateVisibilityConfigNetwork[] */
  public $networks;
  protected $collection_key = 'networks';
  protected $gkeClustersType = ManagedZonePrivateVisibilityConfigGKECluster::class;
  protected $gkeClustersDataType = 'array';
  protected $networksType = ManagedZonePrivateVisibilityConfigNetwork::class;
  protected $networksDataType = 'array';
  /** @param ManagedZonePrivateVisibilityConfigGKECluster[] */
  public function setGkeClusters($gkeClusters)
  {
    $this->gkeClusters = $gkeClusters;
  }
  /** @return ManagedZonePrivateVisibilityConfigGKECluster[] */
  public function getGkeClusters()
  {
    return $this->gkeClusters;
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
  /** @param ManagedZonePrivateVisibilityConfigNetwork[] */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /** @return ManagedZonePrivateVisibilityConfigNetwork[] */
  public function getNetworks()
  {
    return $this->networks;
  }
}

class ManagedZonePrivateVisibilityConfigGKECluster extends \Google\Model
{
  /** @var string */
  public $gkeClusterName;
  /** @var string */
  public $kind;

  /** @param string */
  public function setGkeClusterName($gkeClusterName)
  {
    $this->gkeClusterName = $gkeClusterName;
  }
  /** @return string */
  public function getGkeClusterName()
  {
    return $this->gkeClusterName;
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
}

class ManagedZonePrivateVisibilityConfigNetwork extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $networkUrl;

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
  public function setNetworkUrl($networkUrl)
  {
    $this->networkUrl = $networkUrl;
  }
  /** @return string */
  public function getNetworkUrl()
  {
    return $this->networkUrl;
  }
}

class ManagedZoneReverseLookupConfig extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class ManagedZoneServiceDirectoryConfig extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var ManagedZoneServiceDirectoryConfigNamespace */
  public $namespace;
  protected $namespaceType = ManagedZoneServiceDirectoryConfigNamespace::class;
  protected $namespaceDataType = '';
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
  /** @param ManagedZoneServiceDirectoryConfigNamespace */
  public function setNamespace(ManagedZoneServiceDirectoryConfigNamespace $namespace)
  {
    $this->namespace = $namespace;
  }
  /** @return ManagedZoneServiceDirectoryConfigNamespace */
  public function getNamespace()
  {
    return $this->namespace;
  }
}

class ManagedZoneServiceDirectoryConfigNamespace extends \Google\Model
{
  /** @var string */
  public $deletionTime;
  /** @var string */
  public $kind;
  /** @var string */
  public $namespaceUrl;

  /** @param string */
  public function setDeletionTime($deletionTime)
  {
    $this->deletionTime = $deletionTime;
  }
  /** @return string */
  public function getDeletionTime()
  {
    return $this->deletionTime;
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
  public function setNamespaceUrl($namespaceUrl)
  {
    $this->namespaceUrl = $namespaceUrl;
  }
  /** @return string */
  public function getNamespaceUrl()
  {
    return $this->namespaceUrl;
  }
}

class ManagedZonesListResponse extends \Google\Collection
{
  /** @var ResponseHeader */
  public $header;
  /** @var string */
  public $kind;
  /** @var ManagedZone[] */
  public $managedZones;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'managedZones';
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $managedZonesType = ManagedZone::class;
  protected $managedZonesDataType = 'array';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
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
  /** @param ManagedZone[] */
  public function setManagedZones($managedZones)
  {
    $this->managedZones = $managedZones;
  }
  /** @return ManagedZone[] */
  public function getManagedZones()
  {
    return $this->managedZones;
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

class Operation extends \Google\Model
{
  /** @var OperationDnsKeyContext */
  public $dnsKeyContext;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $startTime;
  /** @var string */
  public $status;
  /** @var string */
  public $type;
  /** @var string */
  public $user;
  /** @var OperationManagedZoneContext */
  public $zoneContext;
  protected $dnsKeyContextType = OperationDnsKeyContext::class;
  protected $dnsKeyContextDataType = '';
  protected $zoneContextType = OperationManagedZoneContext::class;
  protected $zoneContextDataType = '';
  /** @param OperationDnsKeyContext */
  public function setDnsKeyContext(OperationDnsKeyContext $dnsKeyContext)
  {
    $this->dnsKeyContext = $dnsKeyContext;
  }
  /** @return OperationDnsKeyContext */
  public function getDnsKeyContext()
  {
    return $this->dnsKeyContext;
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
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
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
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return string */
  public function getUser()
  {
    return $this->user;
  }
  /** @param OperationManagedZoneContext */
  public function setZoneContext(OperationManagedZoneContext $zoneContext)
  {
    $this->zoneContext = $zoneContext;
  }
  /** @return OperationManagedZoneContext */
  public function getZoneContext()
  {
    return $this->zoneContext;
  }
}

class OperationDnsKeyContext extends \Google\Model
{
  /** @var DnsKey */
  public $newValue;
  /** @var DnsKey */
  public $oldValue;
  protected $newValueType = DnsKey::class;
  protected $newValueDataType = '';
  protected $oldValueType = DnsKey::class;
  protected $oldValueDataType = '';
  /** @param DnsKey */
  public function setNewValue(DnsKey $newValue)
  {
    $this->newValue = $newValue;
  }
  /** @return DnsKey */
  public function getNewValue()
  {
    return $this->newValue;
  }
  /** @param DnsKey */
  public function setOldValue(DnsKey $oldValue)
  {
    $this->oldValue = $oldValue;
  }
  /** @return DnsKey */
  public function getOldValue()
  {
    return $this->oldValue;
  }
}

class OperationManagedZoneContext extends \Google\Model
{
  /** @var ManagedZone */
  public $newValue;
  /** @var ManagedZone */
  public $oldValue;
  protected $newValueType = ManagedZone::class;
  protected $newValueDataType = '';
  protected $oldValueType = ManagedZone::class;
  protected $oldValueDataType = '';
  /** @param ManagedZone */
  public function setNewValue(ManagedZone $newValue)
  {
    $this->newValue = $newValue;
  }
  /** @return ManagedZone */
  public function getNewValue()
  {
    return $this->newValue;
  }
  /** @param ManagedZone */
  public function setOldValue(ManagedZone $oldValue)
  {
    $this->oldValue = $oldValue;
  }
  /** @return ManagedZone */
  public function getOldValue()
  {
    return $this->oldValue;
  }
}

class PoliciesListResponse extends \Google\Collection
{
  /** @var ResponseHeader */
  public $header;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Policy[] */
  public $policies;
  protected $collection_key = 'policies';
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $policiesType = Policy::class;
  protected $policiesDataType = 'array';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
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
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param Policy[] */
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /** @return Policy[] */
  public function getPolicies()
  {
    return $this->policies;
  }
}

class PoliciesPatchResponse extends \Google\Model
{
  /** @var ResponseHeader */
  public $header;
  /** @var Policy */
  public $policy;
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
  }
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
}

class PoliciesUpdateResponse extends \Google\Model
{
  /** @var ResponseHeader */
  public $header;
  /** @var Policy */
  public $policy;
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
  }
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
}

class Policy extends \Google\Collection
{
  /** @var PolicyAlternativeNameServerConfig */
  public $alternativeNameServerConfig;
  /** @var string */
  public $description;
  /** @var bool */
  public $enableInboundForwarding;
  /** @var bool */
  public $enableLogging;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var PolicyNetwork[] */
  public $networks;
  protected $collection_key = 'networks';
  protected $alternativeNameServerConfigType = PolicyAlternativeNameServerConfig::class;
  protected $alternativeNameServerConfigDataType = '';
  protected $networksType = PolicyNetwork::class;
  protected $networksDataType = 'array';
  /** @param PolicyAlternativeNameServerConfig */
  public function setAlternativeNameServerConfig(PolicyAlternativeNameServerConfig $alternativeNameServerConfig)
  {
    $this->alternativeNameServerConfig = $alternativeNameServerConfig;
  }
  /** @return PolicyAlternativeNameServerConfig */
  public function getAlternativeNameServerConfig()
  {
    return $this->alternativeNameServerConfig;
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
  public function setEnableInboundForwarding($enableInboundForwarding)
  {
    $this->enableInboundForwarding = $enableInboundForwarding;
  }
  /** @return bool */
  public function getEnableInboundForwarding()
  {
    return $this->enableInboundForwarding;
  }
  /** @param bool */
  public function setEnableLogging($enableLogging)
  {
    $this->enableLogging = $enableLogging;
  }
  /** @return bool */
  public function getEnableLogging()
  {
    return $this->enableLogging;
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
  /** @param PolicyNetwork[] */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /** @return PolicyNetwork[] */
  public function getNetworks()
  {
    return $this->networks;
  }
}

class PolicyAlternativeNameServerConfig extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var PolicyAlternativeNameServerConfigTargetNameServer[] */
  public $targetNameServers;
  protected $collection_key = 'targetNameServers';
  protected $targetNameServersType = PolicyAlternativeNameServerConfigTargetNameServer::class;
  protected $targetNameServersDataType = 'array';
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
  /** @param PolicyAlternativeNameServerConfigTargetNameServer[] */
  public function setTargetNameServers($targetNameServers)
  {
    $this->targetNameServers = $targetNameServers;
  }
  /** @return PolicyAlternativeNameServerConfigTargetNameServer[] */
  public function getTargetNameServers()
  {
    return $this->targetNameServers;
  }
}

class PolicyAlternativeNameServerConfigTargetNameServer extends \Google\Model
{
  /** @var string */
  public $forwardingPath;
  /** @var string */
  public $ipv4Address;
  /** @var string */
  public $ipv6Address;
  /** @var string */
  public $kind;

  /** @param string */
  public function setForwardingPath($forwardingPath)
  {
    $this->forwardingPath = $forwardingPath;
  }
  /** @return string */
  public function getForwardingPath()
  {
    return $this->forwardingPath;
  }
  /** @param string */
  public function setIpv4Address($ipv4Address)
  {
    $this->ipv4Address = $ipv4Address;
  }
  /** @return string */
  public function getIpv4Address()
  {
    return $this->ipv4Address;
  }
  /** @param string */
  public function setIpv6Address($ipv6Address)
  {
    $this->ipv6Address = $ipv6Address;
  }
  /** @return string */
  public function getIpv6Address()
  {
    return $this->ipv6Address;
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
}

class PolicyNetwork extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $networkUrl;

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
  public function setNetworkUrl($networkUrl)
  {
    $this->networkUrl = $networkUrl;
  }
  /** @return string */
  public function getNetworkUrl()
  {
    return $this->networkUrl;
  }
}

class Project extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $number;
  /** @var Quota */
  public $quota;
  protected $quotaType = Quota::class;
  protected $quotaDataType = '';
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
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return string */
  public function getNumber()
  {
    return $this->number;
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
}

class Quota extends \Google\Collection
{
  /** @var int */
  public $dnsKeysPerManagedZone;
  /** @var int */
  public $gkeClustersPerManagedZone;
  /** @var int */
  public $gkeClustersPerPolicy;
  /** @var int */
  public $gkeClustersPerResponsePolicy;
  /** @var int */
  public $itemsPerRoutingPolicy;
  /** @var string */
  public $kind;
  /** @var int */
  public $managedZones;
  /** @var int */
  public $managedZonesPerGkeCluster;
  /** @var int */
  public $managedZonesPerNetwork;
  /** @var int */
  public $networksPerManagedZone;
  /** @var int */
  public $networksPerPolicy;
  /** @var int */
  public $networksPerResponsePolicy;
  /** @var int */
  public $peeringZonesPerTargetNetwork;
  /** @var int */
  public $policies;
  /** @var int */
  public $resourceRecordsPerRrset;
  /** @var int */
  public $responsePolicies;
  /** @var int */
  public $responsePolicyRulesPerResponsePolicy;
  /** @var int */
  public $rrsetAdditionsPerChange;
  /** @var int */
  public $rrsetDeletionsPerChange;
  /** @var int */
  public $rrsetsPerManagedZone;
  /** @var int */
  public $targetNameServersPerManagedZone;
  /** @var int */
  public $targetNameServersPerPolicy;
  /** @var int */
  public $totalRrdataSizePerChange;
  /** @var DnsKeySpec[] */
  public $whitelistedKeySpecs;
  protected $collection_key = 'whitelistedKeySpecs';
  protected $whitelistedKeySpecsType = DnsKeySpec::class;
  protected $whitelistedKeySpecsDataType = 'array';
  /** @param int */
  public function setDnsKeysPerManagedZone($dnsKeysPerManagedZone)
  {
    $this->dnsKeysPerManagedZone = $dnsKeysPerManagedZone;
  }
  /** @return int */
  public function getDnsKeysPerManagedZone()
  {
    return $this->dnsKeysPerManagedZone;
  }
  /** @param int */
  public function setGkeClustersPerManagedZone($gkeClustersPerManagedZone)
  {
    $this->gkeClustersPerManagedZone = $gkeClustersPerManagedZone;
  }
  /** @return int */
  public function getGkeClustersPerManagedZone()
  {
    return $this->gkeClustersPerManagedZone;
  }
  /** @param int */
  public function setGkeClustersPerPolicy($gkeClustersPerPolicy)
  {
    $this->gkeClustersPerPolicy = $gkeClustersPerPolicy;
  }
  /** @return int */
  public function getGkeClustersPerPolicy()
  {
    return $this->gkeClustersPerPolicy;
  }
  /** @param int */
  public function setGkeClustersPerResponsePolicy($gkeClustersPerResponsePolicy)
  {
    $this->gkeClustersPerResponsePolicy = $gkeClustersPerResponsePolicy;
  }
  /** @return int */
  public function getGkeClustersPerResponsePolicy()
  {
    return $this->gkeClustersPerResponsePolicy;
  }
  /** @param int */
  public function setItemsPerRoutingPolicy($itemsPerRoutingPolicy)
  {
    $this->itemsPerRoutingPolicy = $itemsPerRoutingPolicy;
  }
  /** @return int */
  public function getItemsPerRoutingPolicy()
  {
    return $this->itemsPerRoutingPolicy;
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
  /** @param int */
  public function setManagedZones($managedZones)
  {
    $this->managedZones = $managedZones;
  }
  /** @return int */
  public function getManagedZones()
  {
    return $this->managedZones;
  }
  /** @param int */
  public function setManagedZonesPerGkeCluster($managedZonesPerGkeCluster)
  {
    $this->managedZonesPerGkeCluster = $managedZonesPerGkeCluster;
  }
  /** @return int */
  public function getManagedZonesPerGkeCluster()
  {
    return $this->managedZonesPerGkeCluster;
  }
  /** @param int */
  public function setManagedZonesPerNetwork($managedZonesPerNetwork)
  {
    $this->managedZonesPerNetwork = $managedZonesPerNetwork;
  }
  /** @return int */
  public function getManagedZonesPerNetwork()
  {
    return $this->managedZonesPerNetwork;
  }
  /** @param int */
  public function setNetworksPerManagedZone($networksPerManagedZone)
  {
    $this->networksPerManagedZone = $networksPerManagedZone;
  }
  /** @return int */
  public function getNetworksPerManagedZone()
  {
    return $this->networksPerManagedZone;
  }
  /** @param int */
  public function setNetworksPerPolicy($networksPerPolicy)
  {
    $this->networksPerPolicy = $networksPerPolicy;
  }
  /** @return int */
  public function getNetworksPerPolicy()
  {
    return $this->networksPerPolicy;
  }
  /** @param int */
  public function setNetworksPerResponsePolicy($networksPerResponsePolicy)
  {
    $this->networksPerResponsePolicy = $networksPerResponsePolicy;
  }
  /** @return int */
  public function getNetworksPerResponsePolicy()
  {
    return $this->networksPerResponsePolicy;
  }
  /** @param int */
  public function setPeeringZonesPerTargetNetwork($peeringZonesPerTargetNetwork)
  {
    $this->peeringZonesPerTargetNetwork = $peeringZonesPerTargetNetwork;
  }
  /** @return int */
  public function getPeeringZonesPerTargetNetwork()
  {
    return $this->peeringZonesPerTargetNetwork;
  }
  /** @param int */
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /** @return int */
  public function getPolicies()
  {
    return $this->policies;
  }
  /** @param int */
  public function setResourceRecordsPerRrset($resourceRecordsPerRrset)
  {
    $this->resourceRecordsPerRrset = $resourceRecordsPerRrset;
  }
  /** @return int */
  public function getResourceRecordsPerRrset()
  {
    return $this->resourceRecordsPerRrset;
  }
  /** @param int */
  public function setResponsePolicies($responsePolicies)
  {
    $this->responsePolicies = $responsePolicies;
  }
  /** @return int */
  public function getResponsePolicies()
  {
    return $this->responsePolicies;
  }
  /** @param int */
  public function setResponsePolicyRulesPerResponsePolicy($responsePolicyRulesPerResponsePolicy)
  {
    $this->responsePolicyRulesPerResponsePolicy = $responsePolicyRulesPerResponsePolicy;
  }
  /** @return int */
  public function getResponsePolicyRulesPerResponsePolicy()
  {
    return $this->responsePolicyRulesPerResponsePolicy;
  }
  /** @param int */
  public function setRrsetAdditionsPerChange($rrsetAdditionsPerChange)
  {
    $this->rrsetAdditionsPerChange = $rrsetAdditionsPerChange;
  }
  /** @return int */
  public function getRrsetAdditionsPerChange()
  {
    return $this->rrsetAdditionsPerChange;
  }
  /** @param int */
  public function setRrsetDeletionsPerChange($rrsetDeletionsPerChange)
  {
    $this->rrsetDeletionsPerChange = $rrsetDeletionsPerChange;
  }
  /** @return int */
  public function getRrsetDeletionsPerChange()
  {
    return $this->rrsetDeletionsPerChange;
  }
  /** @param int */
  public function setRrsetsPerManagedZone($rrsetsPerManagedZone)
  {
    $this->rrsetsPerManagedZone = $rrsetsPerManagedZone;
  }
  /** @return int */
  public function getRrsetsPerManagedZone()
  {
    return $this->rrsetsPerManagedZone;
  }
  /** @param int */
  public function setTargetNameServersPerManagedZone($targetNameServersPerManagedZone)
  {
    $this->targetNameServersPerManagedZone = $targetNameServersPerManagedZone;
  }
  /** @return int */
  public function getTargetNameServersPerManagedZone()
  {
    return $this->targetNameServersPerManagedZone;
  }
  /** @param int */
  public function setTargetNameServersPerPolicy($targetNameServersPerPolicy)
  {
    $this->targetNameServersPerPolicy = $targetNameServersPerPolicy;
  }
  /** @return int */
  public function getTargetNameServersPerPolicy()
  {
    return $this->targetNameServersPerPolicy;
  }
  /** @param int */
  public function setTotalRrdataSizePerChange($totalRrdataSizePerChange)
  {
    $this->totalRrdataSizePerChange = $totalRrdataSizePerChange;
  }
  /** @return int */
  public function getTotalRrdataSizePerChange()
  {
    return $this->totalRrdataSizePerChange;
  }
  /** @param DnsKeySpec[] */
  public function setWhitelistedKeySpecs($whitelistedKeySpecs)
  {
    $this->whitelistedKeySpecs = $whitelistedKeySpecs;
  }
  /** @return DnsKeySpec[] */
  public function getWhitelistedKeySpecs()
  {
    return $this->whitelistedKeySpecs;
  }
}

class RRSetRoutingPolicy extends \Google\Model
{
  /** @var RRSetRoutingPolicyGeoPolicy */
  public $geo;
  /** @var string */
  public $kind;
  /** @var RRSetRoutingPolicyPrimaryBackupPolicy */
  public $primaryBackup;
  /** @var RRSetRoutingPolicyWrrPolicy */
  public $wrr;
  protected $geoType = RRSetRoutingPolicyGeoPolicy::class;
  protected $geoDataType = '';
  protected $primaryBackupType = RRSetRoutingPolicyPrimaryBackupPolicy::class;
  protected $primaryBackupDataType = '';
  protected $wrrType = RRSetRoutingPolicyWrrPolicy::class;
  protected $wrrDataType = '';
  /** @param RRSetRoutingPolicyGeoPolicy */
  public function setGeo(RRSetRoutingPolicyGeoPolicy $geo)
  {
    $this->geo = $geo;
  }
  /** @return RRSetRoutingPolicyGeoPolicy */
  public function getGeo()
  {
    return $this->geo;
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
  /** @param RRSetRoutingPolicyPrimaryBackupPolicy */
  public function setPrimaryBackup(RRSetRoutingPolicyPrimaryBackupPolicy $primaryBackup)
  {
    $this->primaryBackup = $primaryBackup;
  }
  /** @return RRSetRoutingPolicyPrimaryBackupPolicy */
  public function getPrimaryBackup()
  {
    return $this->primaryBackup;
  }
  /** @param RRSetRoutingPolicyWrrPolicy */
  public function setWrr(RRSetRoutingPolicyWrrPolicy $wrr)
  {
    $this->wrr = $wrr;
  }
  /** @return RRSetRoutingPolicyWrrPolicy */
  public function getWrr()
  {
    return $this->wrr;
  }
}

class RRSetRoutingPolicyGeoPolicy extends \Google\Collection
{
  /** @var bool */
  public $enableFencing;
  /** @var RRSetRoutingPolicyGeoPolicyGeoPolicyItem[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = RRSetRoutingPolicyGeoPolicyGeoPolicyItem::class;
  protected $itemsDataType = 'array';
  /** @param bool */
  public function setEnableFencing($enableFencing)
  {
    $this->enableFencing = $enableFencing;
  }
  /** @return bool */
  public function getEnableFencing()
  {
    return $this->enableFencing;
  }
  /** @param RRSetRoutingPolicyGeoPolicyGeoPolicyItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return RRSetRoutingPolicyGeoPolicyGeoPolicyItem[] */
  public function getItems()
  {
    return $this->items;
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
}

class RRSetRoutingPolicyGeoPolicyGeoPolicyItem extends \Google\Collection
{
  /** @var RRSetRoutingPolicyHealthCheckTargets */
  public $healthCheckedTargets;
  /** @var string */
  public $kind;
  /** @var string */
  public $location;
  /** @var string[] */
  public $rrdatas;
  /** @var string[] */
  public $signatureRrdatas;
  protected $collection_key = 'signatureRrdatas';
  protected $healthCheckedTargetsType = RRSetRoutingPolicyHealthCheckTargets::class;
  protected $healthCheckedTargetsDataType = '';
  /** @param RRSetRoutingPolicyHealthCheckTargets */
  public function setHealthCheckedTargets(RRSetRoutingPolicyHealthCheckTargets $healthCheckedTargets)
  {
    $this->healthCheckedTargets = $healthCheckedTargets;
  }
  /** @return RRSetRoutingPolicyHealthCheckTargets */
  public function getHealthCheckedTargets()
  {
    return $this->healthCheckedTargets;
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
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string[] */
  public function setRrdatas($rrdatas)
  {
    $this->rrdatas = $rrdatas;
  }
  /** @return string[] */
  public function getRrdatas()
  {
    return $this->rrdatas;
  }
  /** @param string[] */
  public function setSignatureRrdatas($signatureRrdatas)
  {
    $this->signatureRrdatas = $signatureRrdatas;
  }
  /** @return string[] */
  public function getSignatureRrdatas()
  {
    return $this->signatureRrdatas;
  }
}

class RRSetRoutingPolicyHealthCheckTargets extends \Google\Collection
{
  /** @var RRSetRoutingPolicyLoadBalancerTarget[] */
  public $internalLoadBalancers;
  protected $collection_key = 'internalLoadBalancers';
  protected $internalLoadBalancersType = RRSetRoutingPolicyLoadBalancerTarget::class;
  protected $internalLoadBalancersDataType = 'array';
  /** @param RRSetRoutingPolicyLoadBalancerTarget[] */
  public function setInternalLoadBalancers($internalLoadBalancers)
  {
    $this->internalLoadBalancers = $internalLoadBalancers;
  }
  /** @return RRSetRoutingPolicyLoadBalancerTarget[] */
  public function getInternalLoadBalancers()
  {
    return $this->internalLoadBalancers;
  }
}

class RRSetRoutingPolicyLoadBalancerTarget extends \Google\Model
{
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $ipProtocol;
  /** @var string */
  public $kind;
  /** @var string */
  public $loadBalancerType;
  /** @var string */
  public $networkUrl;
  /** @var string */
  public $port;
  /** @var string */
  public $project;
  /** @var string */
  public $region;

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
  public function setIpProtocol($ipProtocol)
  {
    $this->ipProtocol = $ipProtocol;
  }
  /** @return string */
  public function getIpProtocol()
  {
    return $this->ipProtocol;
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
  public function setLoadBalancerType($loadBalancerType)
  {
    $this->loadBalancerType = $loadBalancerType;
  }
  /** @return string */
  public function getLoadBalancerType()
  {
    return $this->loadBalancerType;
  }
  /** @param string */
  public function setNetworkUrl($networkUrl)
  {
    $this->networkUrl = $networkUrl;
  }
  /** @return string */
  public function getNetworkUrl()
  {
    return $this->networkUrl;
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
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
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
}

class RRSetRoutingPolicyPrimaryBackupPolicy extends \Google\Model
{
  /** @var RRSetRoutingPolicyGeoPolicy */
  public $backupGeoTargets;
  /** @var string */
  public $kind;
  /** @var RRSetRoutingPolicyHealthCheckTargets */
  public $primaryTargets;
  public $trickleTraffic;
  protected $backupGeoTargetsType = RRSetRoutingPolicyGeoPolicy::class;
  protected $backupGeoTargetsDataType = '';
  protected $primaryTargetsType = RRSetRoutingPolicyHealthCheckTargets::class;
  protected $primaryTargetsDataType = '';
  /** @param RRSetRoutingPolicyGeoPolicy */
  public function setBackupGeoTargets(RRSetRoutingPolicyGeoPolicy $backupGeoTargets)
  {
    $this->backupGeoTargets = $backupGeoTargets;
  }
  /** @return RRSetRoutingPolicyGeoPolicy */
  public function getBackupGeoTargets()
  {
    return $this->backupGeoTargets;
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
  /** @param RRSetRoutingPolicyHealthCheckTargets */
  public function setPrimaryTargets(RRSetRoutingPolicyHealthCheckTargets $primaryTargets)
  {
    $this->primaryTargets = $primaryTargets;
  }
  /** @return RRSetRoutingPolicyHealthCheckTargets */
  public function getPrimaryTargets()
  {
    return $this->primaryTargets;
  }
  public function setTrickleTraffic($trickleTraffic)
  {
    $this->trickleTraffic = $trickleTraffic;
  }
  public function getTrickleTraffic()
  {
    return $this->trickleTraffic;
  }
}

class RRSetRoutingPolicyWrrPolicy extends \Google\Collection
{
  /** @var RRSetRoutingPolicyWrrPolicyWrrPolicyItem[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = RRSetRoutingPolicyWrrPolicyWrrPolicyItem::class;
  protected $itemsDataType = 'array';
  /** @param RRSetRoutingPolicyWrrPolicyWrrPolicyItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return RRSetRoutingPolicyWrrPolicyWrrPolicyItem[] */
  public function getItems()
  {
    return $this->items;
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
}

class RRSetRoutingPolicyWrrPolicyWrrPolicyItem extends \Google\Collection
{
  /** @var RRSetRoutingPolicyHealthCheckTargets */
  public $healthCheckedTargets;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $rrdatas;
  /** @var string[] */
  public $signatureRrdatas;
  public $weight;
  protected $collection_key = 'signatureRrdatas';
  protected $healthCheckedTargetsType = RRSetRoutingPolicyHealthCheckTargets::class;
  protected $healthCheckedTargetsDataType = '';
  /** @param RRSetRoutingPolicyHealthCheckTargets */
  public function setHealthCheckedTargets(RRSetRoutingPolicyHealthCheckTargets $healthCheckedTargets)
  {
    $this->healthCheckedTargets = $healthCheckedTargets;
  }
  /** @return RRSetRoutingPolicyHealthCheckTargets */
  public function getHealthCheckedTargets()
  {
    return $this->healthCheckedTargets;
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
  /** @param string[] */
  public function setRrdatas($rrdatas)
  {
    $this->rrdatas = $rrdatas;
  }
  /** @return string[] */
  public function getRrdatas()
  {
    return $this->rrdatas;
  }
  /** @param string[] */
  public function setSignatureRrdatas($signatureRrdatas)
  {
    $this->signatureRrdatas = $signatureRrdatas;
  }
  /** @return string[] */
  public function getSignatureRrdatas()
  {
    return $this->signatureRrdatas;
  }
  public function setWeight($weight)
  {
    $this->weight = $weight;
  }
  public function getWeight()
  {
    return $this->weight;
  }
}

class ResourceRecordSet extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var RRSetRoutingPolicy */
  public $routingPolicy;
  /** @var string[] */
  public $rrdatas;
  /** @var string[] */
  public $signatureRrdatas;
  /** @var int */
  public $ttl;
  /** @var string */
  public $type;
  protected $collection_key = 'signatureRrdatas';
  protected $routingPolicyType = RRSetRoutingPolicy::class;
  protected $routingPolicyDataType = '';
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
  /** @param RRSetRoutingPolicy */
  public function setRoutingPolicy(RRSetRoutingPolicy $routingPolicy)
  {
    $this->routingPolicy = $routingPolicy;
  }
  /** @return RRSetRoutingPolicy */
  public function getRoutingPolicy()
  {
    return $this->routingPolicy;
  }
  /** @param string[] */
  public function setRrdatas($rrdatas)
  {
    $this->rrdatas = $rrdatas;
  }
  /** @return string[] */
  public function getRrdatas()
  {
    return $this->rrdatas;
  }
  /** @param string[] */
  public function setSignatureRrdatas($signatureRrdatas)
  {
    $this->signatureRrdatas = $signatureRrdatas;
  }
  /** @return string[] */
  public function getSignatureRrdatas()
  {
    return $this->signatureRrdatas;
  }
  /** @param int */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return int */
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

class ResourceRecordSetsDeleteResponse extends \Google\Model
{
}

class ResourceRecordSetsListResponse extends \Google\Collection
{
  /** @var ResponseHeader */
  public $header;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var ResourceRecordSet[] */
  public $rrsets;
  protected $collection_key = 'rrsets';
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $rrsetsType = ResourceRecordSet::class;
  protected $rrsetsDataType = 'array';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
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
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param ResourceRecordSet[] */
  public function setRrsets($rrsets)
  {
    $this->rrsets = $rrsets;
  }
  /** @return ResourceRecordSet[] */
  public function getRrsets()
  {
    return $this->rrsets;
  }
}

class ResponseHeader extends \Google\Model
{
  /** @var string */
  public $operationId;

  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
}

class ResponsePoliciesListResponse extends \Google\Collection
{
  /** @var ResponseHeader */
  public $header;
  /** @var string */
  public $nextPageToken;
  /** @var ResponsePolicy[] */
  public $responsePolicies;
  protected $collection_key = 'responsePolicies';
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $responsePoliciesType = ResponsePolicy::class;
  protected $responsePoliciesDataType = 'array';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
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
  /** @param ResponsePolicy[] */
  public function setResponsePolicies($responsePolicies)
  {
    $this->responsePolicies = $responsePolicies;
  }
  /** @return ResponsePolicy[] */
  public function getResponsePolicies()
  {
    return $this->responsePolicies;
  }
}

class ResponsePoliciesPatchResponse extends \Google\Model
{
  /** @var ResponseHeader */
  public $header;
  /** @var ResponsePolicy */
  public $responsePolicy;
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $responsePolicyType = ResponsePolicy::class;
  protected $responsePolicyDataType = '';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param ResponsePolicy */
  public function setResponsePolicy(ResponsePolicy $responsePolicy)
  {
    $this->responsePolicy = $responsePolicy;
  }
  /** @return ResponsePolicy */
  public function getResponsePolicy()
  {
    return $this->responsePolicy;
  }
}

class ResponsePoliciesUpdateResponse extends \Google\Model
{
  /** @var ResponseHeader */
  public $header;
  /** @var ResponsePolicy */
  public $responsePolicy;
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $responsePolicyType = ResponsePolicy::class;
  protected $responsePolicyDataType = '';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param ResponsePolicy */
  public function setResponsePolicy(ResponsePolicy $responsePolicy)
  {
    $this->responsePolicy = $responsePolicy;
  }
  /** @return ResponsePolicy */
  public function getResponsePolicy()
  {
    return $this->responsePolicy;
  }
}

class ResponsePolicy extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var ResponsePolicyGKECluster[] */
  public $gkeClusters;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var ResponsePolicyNetwork[] */
  public $networks;
  /** @var string */
  public $responsePolicyName;
  protected $collection_key = 'networks';
  protected $gkeClustersType = ResponsePolicyGKECluster::class;
  protected $gkeClustersDataType = 'array';
  protected $networksType = ResponsePolicyNetwork::class;
  protected $networksDataType = 'array';
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
  /** @param ResponsePolicyGKECluster[] */
  public function setGkeClusters($gkeClusters)
  {
    $this->gkeClusters = $gkeClusters;
  }
  /** @return ResponsePolicyGKECluster[] */
  public function getGkeClusters()
  {
    return $this->gkeClusters;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param ResponsePolicyNetwork[] */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /** @return ResponsePolicyNetwork[] */
  public function getNetworks()
  {
    return $this->networks;
  }
  /** @param string */
  public function setResponsePolicyName($responsePolicyName)
  {
    $this->responsePolicyName = $responsePolicyName;
  }
  /** @return string */
  public function getResponsePolicyName()
  {
    return $this->responsePolicyName;
  }
}

class ResponsePolicyGKECluster extends \Google\Model
{
  /** @var string */
  public $gkeClusterName;
  /** @var string */
  public $kind;

  /** @param string */
  public function setGkeClusterName($gkeClusterName)
  {
    $this->gkeClusterName = $gkeClusterName;
  }
  /** @return string */
  public function getGkeClusterName()
  {
    return $this->gkeClusterName;
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
}

class ResponsePolicyNetwork extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $networkUrl;

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
  public function setNetworkUrl($networkUrl)
  {
    $this->networkUrl = $networkUrl;
  }
  /** @return string */
  public function getNetworkUrl()
  {
    return $this->networkUrl;
  }
}

class ResponsePolicyRule extends \Google\Model
{
  /** @var string */
  public $behavior;
  /** @var string */
  public $dnsName;
  /** @var string */
  public $kind;
  /** @var ResponsePolicyRuleLocalData */
  public $localData;
  /** @var string */
  public $ruleName;
  protected $localDataType = ResponsePolicyRuleLocalData::class;
  protected $localDataDataType = '';
  /** @param string */
  public function setBehavior($behavior)
  {
    $this->behavior = $behavior;
  }
  /** @return string */
  public function getBehavior()
  {
    return $this->behavior;
  }
  /** @param string */
  public function setDnsName($dnsName)
  {
    $this->dnsName = $dnsName;
  }
  /** @return string */
  public function getDnsName()
  {
    return $this->dnsName;
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
  /** @param ResponsePolicyRuleLocalData */
  public function setLocalData(ResponsePolicyRuleLocalData $localData)
  {
    $this->localData = $localData;
  }
  /** @return ResponsePolicyRuleLocalData */
  public function getLocalData()
  {
    return $this->localData;
  }
  /** @param string */
  public function setRuleName($ruleName)
  {
    $this->ruleName = $ruleName;
  }
  /** @return string */
  public function getRuleName()
  {
    return $this->ruleName;
  }
}

class ResponsePolicyRuleLocalData extends \Google\Collection
{
  /** @var ResourceRecordSet[] */
  public $localDatas;
  protected $collection_key = 'localDatas';
  protected $localDatasType = ResourceRecordSet::class;
  protected $localDatasDataType = 'array';
  /** @param ResourceRecordSet[] */
  public function setLocalDatas($localDatas)
  {
    $this->localDatas = $localDatas;
  }
  /** @return ResourceRecordSet[] */
  public function getLocalDatas()
  {
    return $this->localDatas;
  }
}

class ResponsePolicyRulesListResponse extends \Google\Collection
{
  /** @var ResponseHeader */
  public $header;
  /** @var string */
  public $nextPageToken;
  /** @var ResponsePolicyRule[] */
  public $responsePolicyRules;
  protected $collection_key = 'responsePolicyRules';
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $responsePolicyRulesType = ResponsePolicyRule::class;
  protected $responsePolicyRulesDataType = 'array';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
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
  /** @param ResponsePolicyRule[] */
  public function setResponsePolicyRules($responsePolicyRules)
  {
    $this->responsePolicyRules = $responsePolicyRules;
  }
  /** @return ResponsePolicyRule[] */
  public function getResponsePolicyRules()
  {
    return $this->responsePolicyRules;
  }
}

class ResponsePolicyRulesPatchResponse extends \Google\Model
{
  /** @var ResponseHeader */
  public $header;
  /** @var ResponsePolicyRule */
  public $responsePolicyRule;
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $responsePolicyRuleType = ResponsePolicyRule::class;
  protected $responsePolicyRuleDataType = '';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param ResponsePolicyRule */
  public function setResponsePolicyRule(ResponsePolicyRule $responsePolicyRule)
  {
    $this->responsePolicyRule = $responsePolicyRule;
  }
  /** @return ResponsePolicyRule */
  public function getResponsePolicyRule()
  {
    return $this->responsePolicyRule;
  }
}

class ResponsePolicyRulesUpdateResponse extends \Google\Model
{
  /** @var ResponseHeader */
  public $header;
  /** @var ResponsePolicyRule */
  public $responsePolicyRule;
  protected $headerType = ResponseHeader::class;
  protected $headerDataType = '';
  protected $responsePolicyRuleType = ResponsePolicyRule::class;
  protected $responsePolicyRuleDataType = '';
  /** @param ResponseHeader */
  public function setHeader(ResponseHeader $header)
  {
    $this->header = $header;
  }
  /** @return ResponseHeader */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param ResponsePolicyRule */
  public function setResponsePolicyRule(ResponsePolicyRule $responsePolicyRule)
  {
    $this->responsePolicyRule = $responsePolicyRule;
  }
  /** @return ResponsePolicyRule */
  public function getResponsePolicyRule()
  {
    return $this->responsePolicyRule;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Change::class, 'Google_Service_Dns_Change');
class_alias(ChangesListResponse::class, 'Google_Service_Dns_ChangesListResponse');
class_alias(DnsKey::class, 'Google_Service_Dns_DnsKey');
class_alias(DnsKeyDigest::class, 'Google_Service_Dns_DnsKeyDigest');
class_alias(DnsKeySpec::class, 'Google_Service_Dns_DnsKeySpec');
class_alias(DnsKeysListResponse::class, 'Google_Service_Dns_DnsKeysListResponse');
class_alias(Expr::class, 'Google_Service_Dns_Expr');
class_alias(GoogleIamV1AuditConfig::class, 'Google_Service_Dns_GoogleIamV1AuditConfig');
class_alias(GoogleIamV1AuditLogConfig::class, 'Google_Service_Dns_GoogleIamV1AuditLogConfig');
class_alias(GoogleIamV1Binding::class, 'Google_Service_Dns_GoogleIamV1Binding');
class_alias(GoogleIamV1GetIamPolicyRequest::class, 'Google_Service_Dns_GoogleIamV1GetIamPolicyRequest');
class_alias(GoogleIamV1GetPolicyOptions::class, 'Google_Service_Dns_GoogleIamV1GetPolicyOptions');
class_alias(GoogleIamV1Policy::class, 'Google_Service_Dns_GoogleIamV1Policy');
class_alias(GoogleIamV1SetIamPolicyRequest::class, 'Google_Service_Dns_GoogleIamV1SetIamPolicyRequest');
class_alias(GoogleIamV1TestIamPermissionsRequest::class, 'Google_Service_Dns_GoogleIamV1TestIamPermissionsRequest');
class_alias(GoogleIamV1TestIamPermissionsResponse::class, 'Google_Service_Dns_GoogleIamV1TestIamPermissionsResponse');
class_alias(ManagedZone::class, 'Google_Service_Dns_ManagedZone');
class_alias(ManagedZoneCloudLoggingConfig::class, 'Google_Service_Dns_ManagedZoneCloudLoggingConfig');
class_alias(ManagedZoneDnsSecConfig::class, 'Google_Service_Dns_ManagedZoneDnsSecConfig');
class_alias(ManagedZoneForwardingConfig::class, 'Google_Service_Dns_ManagedZoneForwardingConfig');
class_alias(ManagedZoneForwardingConfigNameServerTarget::class, 'Google_Service_Dns_ManagedZoneForwardingConfigNameServerTarget');
class_alias(ManagedZoneOperationsListResponse::class, 'Google_Service_Dns_ManagedZoneOperationsListResponse');
class_alias(ManagedZonePeeringConfig::class, 'Google_Service_Dns_ManagedZonePeeringConfig');
class_alias(ManagedZonePeeringConfigTargetNetwork::class, 'Google_Service_Dns_ManagedZonePeeringConfigTargetNetwork');
class_alias(ManagedZonePrivateVisibilityConfig::class, 'Google_Service_Dns_ManagedZonePrivateVisibilityConfig');
class_alias(ManagedZonePrivateVisibilityConfigGKECluster::class, 'Google_Service_Dns_ManagedZonePrivateVisibilityConfigGKECluster');
class_alias(ManagedZonePrivateVisibilityConfigNetwork::class, 'Google_Service_Dns_ManagedZonePrivateVisibilityConfigNetwork');
class_alias(ManagedZoneReverseLookupConfig::class, 'Google_Service_Dns_ManagedZoneReverseLookupConfig');
class_alias(ManagedZoneServiceDirectoryConfig::class, 'Google_Service_Dns_ManagedZoneServiceDirectoryConfig');
class_alias(ManagedZoneServiceDirectoryConfigNamespace::class, 'Google_Service_Dns_ManagedZoneServiceDirectoryConfigNamespace');
class_alias(ManagedZonesListResponse::class, 'Google_Service_Dns_ManagedZonesListResponse');
class_alias(Operation::class, 'Google_Service_Dns_Operation');
class_alias(OperationDnsKeyContext::class, 'Google_Service_Dns_OperationDnsKeyContext');
class_alias(OperationManagedZoneContext::class, 'Google_Service_Dns_OperationManagedZoneContext');
class_alias(PoliciesListResponse::class, 'Google_Service_Dns_PoliciesListResponse');
class_alias(PoliciesPatchResponse::class, 'Google_Service_Dns_PoliciesPatchResponse');
class_alias(PoliciesUpdateResponse::class, 'Google_Service_Dns_PoliciesUpdateResponse');
class_alias(Policy::class, 'Google_Service_Dns_Policy');
class_alias(PolicyAlternativeNameServerConfig::class, 'Google_Service_Dns_PolicyAlternativeNameServerConfig');
class_alias(PolicyAlternativeNameServerConfigTargetNameServer::class, 'Google_Service_Dns_PolicyAlternativeNameServerConfigTargetNameServer');
class_alias(PolicyNetwork::class, 'Google_Service_Dns_PolicyNetwork');
class_alias(Project::class, 'Google_Service_Dns_Project');
class_alias(Quota::class, 'Google_Service_Dns_Quota');
class_alias(RRSetRoutingPolicy::class, 'Google_Service_Dns_RRSetRoutingPolicy');
class_alias(RRSetRoutingPolicyGeoPolicy::class, 'Google_Service_Dns_RRSetRoutingPolicyGeoPolicy');
class_alias(RRSetRoutingPolicyGeoPolicyGeoPolicyItem::class, 'Google_Service_Dns_RRSetRoutingPolicyGeoPolicyGeoPolicyItem');
class_alias(RRSetRoutingPolicyHealthCheckTargets::class, 'Google_Service_Dns_RRSetRoutingPolicyHealthCheckTargets');
class_alias(RRSetRoutingPolicyLoadBalancerTarget::class, 'Google_Service_Dns_RRSetRoutingPolicyLoadBalancerTarget');
class_alias(RRSetRoutingPolicyPrimaryBackupPolicy::class, 'Google_Service_Dns_RRSetRoutingPolicyPrimaryBackupPolicy');
class_alias(RRSetRoutingPolicyWrrPolicy::class, 'Google_Service_Dns_RRSetRoutingPolicyWrrPolicy');
class_alias(RRSetRoutingPolicyWrrPolicyWrrPolicyItem::class, 'Google_Service_Dns_RRSetRoutingPolicyWrrPolicyWrrPolicyItem');
class_alias(ResourceRecordSet::class, 'Google_Service_Dns_ResourceRecordSet');
class_alias(ResourceRecordSetsDeleteResponse::class, 'Google_Service_Dns_ResourceRecordSetsDeleteResponse');
class_alias(ResourceRecordSetsListResponse::class, 'Google_Service_Dns_ResourceRecordSetsListResponse');
class_alias(ResponseHeader::class, 'Google_Service_Dns_ResponseHeader');
class_alias(ResponsePoliciesListResponse::class, 'Google_Service_Dns_ResponsePoliciesListResponse');
class_alias(ResponsePoliciesPatchResponse::class, 'Google_Service_Dns_ResponsePoliciesPatchResponse');
class_alias(ResponsePoliciesUpdateResponse::class, 'Google_Service_Dns_ResponsePoliciesUpdateResponse');
class_alias(ResponsePolicy::class, 'Google_Service_Dns_ResponsePolicy');
class_alias(ResponsePolicyGKECluster::class, 'Google_Service_Dns_ResponsePolicyGKECluster');
class_alias(ResponsePolicyNetwork::class, 'Google_Service_Dns_ResponsePolicyNetwork');
class_alias(ResponsePolicyRule::class, 'Google_Service_Dns_ResponsePolicyRule');
class_alias(ResponsePolicyRuleLocalData::class, 'Google_Service_Dns_ResponsePolicyRuleLocalData');
class_alias(ResponsePolicyRulesListResponse::class, 'Google_Service_Dns_ResponsePolicyRulesListResponse');
class_alias(ResponsePolicyRulesPatchResponse::class, 'Google_Service_Dns_ResponsePolicyRulesPatchResponse');
class_alias(ResponsePolicyRulesUpdateResponse::class, 'Google_Service_Dns_ResponsePolicyRulesUpdateResponse');
