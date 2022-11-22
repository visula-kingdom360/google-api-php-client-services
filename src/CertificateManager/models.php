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

namespace Google\Service\CertificateManager;

class AuthorizationAttemptInfo extends \Google\Model
{
  /** @var string */
  public $details;
  /** @var string */
  public $domain;
  /** @var string */
  public $failureReason;
  /** @var string */
  public $state;

  /** @param string */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string */
  public function getDetails()
  {
    return $this->details;
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
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /** @return string */
  public function getFailureReason()
  {
    return $this->failureReason;
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

class CancelOperationRequest extends \Google\Model
{
}

class Certificate extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $expireTime;
  /** @var string[] */
  public $labels;
  /** @var ManagedCertificate */
  public $managed;
  /** @var string */
  public $name;
  /** @var string */
  public $pemCertificate;
  /** @var string[] */
  public $sanDnsnames;
  /** @var string */
  public $scope;
  /** @var SelfManagedCertificate */
  public $selfManaged;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'sanDnsnames';
  protected $managedType = ManagedCertificate::class;
  protected $managedDataType = '';
  protected $selfManagedType = SelfManagedCertificate::class;
  protected $selfManagedDataType = '';
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
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
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
  /** @param ManagedCertificate */
  public function setManaged(ManagedCertificate $managed)
  {
    $this->managed = $managed;
  }
  /** @return ManagedCertificate */
  public function getManaged()
  {
    return $this->managed;
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
  public function setPemCertificate($pemCertificate)
  {
    $this->pemCertificate = $pemCertificate;
  }
  /** @return string */
  public function getPemCertificate()
  {
    return $this->pemCertificate;
  }
  /** @param string[] */
  public function setSanDnsnames($sanDnsnames)
  {
    $this->sanDnsnames = $sanDnsnames;
  }
  /** @return string[] */
  public function getSanDnsnames()
  {
    return $this->sanDnsnames;
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
  /** @param SelfManagedCertificate */
  public function setSelfManaged(SelfManagedCertificate $selfManaged)
  {
    $this->selfManaged = $selfManaged;
  }
  /** @return SelfManagedCertificate */
  public function getSelfManaged()
  {
    return $this->selfManaged;
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

class CertificateAuthorityConfig extends \Google\Model
{
  /** @var CertificateAuthorityServiceConfig */
  public $certificateAuthorityServiceConfig;
  protected $certificateAuthorityServiceConfigType = CertificateAuthorityServiceConfig::class;
  protected $certificateAuthorityServiceConfigDataType = '';
  /** @param CertificateAuthorityServiceConfig */
  public function setCertificateAuthorityServiceConfig(CertificateAuthorityServiceConfig $certificateAuthorityServiceConfig)
  {
    $this->certificateAuthorityServiceConfig = $certificateAuthorityServiceConfig;
  }
  /** @return CertificateAuthorityServiceConfig */
  public function getCertificateAuthorityServiceConfig()
  {
    return $this->certificateAuthorityServiceConfig;
  }
}

class CertificateAuthorityServiceConfig extends \Google\Model
{
  /** @var string */
  public $caPool;

  /** @param string */
  public function setCaPool($caPool)
  {
    $this->caPool = $caPool;
  }
  /** @return string */
  public function getCaPool()
  {
    return $this->caPool;
  }
}

class CertificateIssuanceConfig extends \Google\Model
{
  /** @var CertificateAuthorityConfig */
  public $certificateAuthorityConfig;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $keyAlgorithm;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lifetime;
  /** @var string */
  public $name;
  /** @var int */
  public $rotationWindowPercentage;
  /** @var string */
  public $updateTime;
  protected $certificateAuthorityConfigType = CertificateAuthorityConfig::class;
  protected $certificateAuthorityConfigDataType = '';
  /** @param CertificateAuthorityConfig */
  public function setCertificateAuthorityConfig(CertificateAuthorityConfig $certificateAuthorityConfig)
  {
    $this->certificateAuthorityConfig = $certificateAuthorityConfig;
  }
  /** @return CertificateAuthorityConfig */
  public function getCertificateAuthorityConfig()
  {
    return $this->certificateAuthorityConfig;
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
  /** @param string */
  public function setKeyAlgorithm($keyAlgorithm)
  {
    $this->keyAlgorithm = $keyAlgorithm;
  }
  /** @return string */
  public function getKeyAlgorithm()
  {
    return $this->keyAlgorithm;
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
  public function setLifetime($lifetime)
  {
    $this->lifetime = $lifetime;
  }
  /** @return string */
  public function getLifetime()
  {
    return $this->lifetime;
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
  public function setRotationWindowPercentage($rotationWindowPercentage)
  {
    $this->rotationWindowPercentage = $rotationWindowPercentage;
  }
  /** @return int */
  public function getRotationWindowPercentage()
  {
    return $this->rotationWindowPercentage;
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

class CertificateMap extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var GclbTarget[] */
  public $gclbTargets;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'gclbTargets';
  protected $gclbTargetsType = GclbTarget::class;
  protected $gclbTargetsDataType = 'array';
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
  /** @param GclbTarget[] */
  public function setGclbTargets($gclbTargets)
  {
    $this->gclbTargets = $gclbTargets;
  }
  /** @return GclbTarget[] */
  public function getGclbTargets()
  {
    return $this->gclbTargets;
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

class CertificateMapEntry extends \Google\Collection
{
  /** @var string[] */
  public $certificates;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $hostname;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $matcher;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'certificates';
  /** @param string[] */
  public function setCertificates($certificates)
  {
    $this->certificates = $certificates;
  }
  /** @return string[] */
  public function getCertificates()
  {
    return $this->certificates;
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
  /** @param string */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /** @return string */
  public function getHostname()
  {
    return $this->hostname;
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
  public function setMatcher($matcher)
  {
    $this->matcher = $matcher;
  }
  /** @return string */
  public function getMatcher()
  {
    return $this->matcher;
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

class CertificatemanagerEmpty extends \Google\Model
{
}

class DnsAuthorization extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var DnsResourceRecord */
  public $dnsResourceRecord;
  /** @var string */
  public $domain;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  protected $dnsResourceRecordType = DnsResourceRecord::class;
  protected $dnsResourceRecordDataType = '';
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
  /** @param DnsResourceRecord */
  public function setDnsResourceRecord(DnsResourceRecord $dnsResourceRecord)
  {
    $this->dnsResourceRecord = $dnsResourceRecord;
  }
  /** @return DnsResourceRecord */
  public function getDnsResourceRecord()
  {
    return $this->dnsResourceRecord;
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

class DnsResourceRecord extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $name;
  /** @var string */
  public $type;

  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
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

class GclbTarget extends \Google\Collection
{
  /** @var IpConfig[] */
  public $ipConfigs;
  /** @var string */
  public $targetHttpsProxy;
  /** @var string */
  public $targetSslProxy;
  protected $collection_key = 'ipConfigs';
  protected $ipConfigsType = IpConfig::class;
  protected $ipConfigsDataType = 'array';
  /** @param IpConfig[] */
  public function setIpConfigs($ipConfigs)
  {
    $this->ipConfigs = $ipConfigs;
  }
  /** @return IpConfig[] */
  public function getIpConfigs()
  {
    return $this->ipConfigs;
  }
  /** @param string */
  public function setTargetHttpsProxy($targetHttpsProxy)
  {
    $this->targetHttpsProxy = $targetHttpsProxy;
  }
  /** @return string */
  public function getTargetHttpsProxy()
  {
    return $this->targetHttpsProxy;
  }
  /** @param string */
  public function setTargetSslProxy($targetSslProxy)
  {
    $this->targetSslProxy = $targetSslProxy;
  }
  /** @return string */
  public function getTargetSslProxy()
  {
    return $this->targetSslProxy;
  }
}

class IpConfig extends \Google\Collection
{
  /** @var string */
  public $ipAddress;
  /** @var string[] */
  public $ports;
  protected $collection_key = 'ports';
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

class ListCertificateIssuanceConfigsResponse extends \Google\Collection
{
  /** @var CertificateIssuanceConfig[] */
  public $certificateIssuanceConfigs;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $certificateIssuanceConfigsType = CertificateIssuanceConfig::class;
  protected $certificateIssuanceConfigsDataType = 'array';
  /** @param CertificateIssuanceConfig[] */
  public function setCertificateIssuanceConfigs($certificateIssuanceConfigs)
  {
    $this->certificateIssuanceConfigs = $certificateIssuanceConfigs;
  }
  /** @return CertificateIssuanceConfig[] */
  public function getCertificateIssuanceConfigs()
  {
    return $this->certificateIssuanceConfigs;
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

class ListCertificateMapEntriesResponse extends \Google\Collection
{
  /** @var CertificateMapEntry[] */
  public $certificateMapEntries;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $certificateMapEntriesType = CertificateMapEntry::class;
  protected $certificateMapEntriesDataType = 'array';
  /** @param CertificateMapEntry[] */
  public function setCertificateMapEntries($certificateMapEntries)
  {
    $this->certificateMapEntries = $certificateMapEntries;
  }
  /** @return CertificateMapEntry[] */
  public function getCertificateMapEntries()
  {
    return $this->certificateMapEntries;
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

class ListCertificateMapsResponse extends \Google\Collection
{
  /** @var CertificateMap[] */
  public $certificateMaps;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $certificateMapsType = CertificateMap::class;
  protected $certificateMapsDataType = 'array';
  /** @param CertificateMap[] */
  public function setCertificateMaps($certificateMaps)
  {
    $this->certificateMaps = $certificateMaps;
  }
  /** @return CertificateMap[] */
  public function getCertificateMaps()
  {
    return $this->certificateMaps;
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

class ListCertificatesResponse extends \Google\Collection
{
  /** @var Certificate[] */
  public $certificates;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $certificatesType = Certificate::class;
  protected $certificatesDataType = 'array';
  /** @param Certificate[] */
  public function setCertificates($certificates)
  {
    $this->certificates = $certificates;
  }
  /** @return Certificate[] */
  public function getCertificates()
  {
    return $this->certificates;
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

class ListDnsAuthorizationsResponse extends \Google\Collection
{
  /** @var DnsAuthorization[] */
  public $dnsAuthorizations;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $dnsAuthorizationsType = DnsAuthorization::class;
  protected $dnsAuthorizationsDataType = 'array';
  /** @param DnsAuthorization[] */
  public function setDnsAuthorizations($dnsAuthorizations)
  {
    $this->dnsAuthorizations = $dnsAuthorizations;
  }
  /** @return DnsAuthorization[] */
  public function getDnsAuthorizations()
  {
    return $this->dnsAuthorizations;
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

class ManagedCertificate extends \Google\Collection
{
  /** @var AuthorizationAttemptInfo[] */
  public $authorizationAttemptInfo;
  /** @var string[] */
  public $dnsAuthorizations;
  /** @var string[] */
  public $domains;
  /** @var string */
  public $issuanceConfig;
  /** @var ProvisioningIssue */
  public $provisioningIssue;
  /** @var string */
  public $state;
  protected $collection_key = 'domains';
  protected $authorizationAttemptInfoType = AuthorizationAttemptInfo::class;
  protected $authorizationAttemptInfoDataType = 'array';
  protected $provisioningIssueType = ProvisioningIssue::class;
  protected $provisioningIssueDataType = '';
  /** @param AuthorizationAttemptInfo[] */
  public function setAuthorizationAttemptInfo($authorizationAttemptInfo)
  {
    $this->authorizationAttemptInfo = $authorizationAttemptInfo;
  }
  /** @return AuthorizationAttemptInfo[] */
  public function getAuthorizationAttemptInfo()
  {
    return $this->authorizationAttemptInfo;
  }
  /** @param string[] */
  public function setDnsAuthorizations($dnsAuthorizations)
  {
    $this->dnsAuthorizations = $dnsAuthorizations;
  }
  /** @return string[] */
  public function getDnsAuthorizations()
  {
    return $this->dnsAuthorizations;
  }
  /** @param string[] */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /** @return string[] */
  public function getDomains()
  {
    return $this->domains;
  }
  /** @param string */
  public function setIssuanceConfig($issuanceConfig)
  {
    $this->issuanceConfig = $issuanceConfig;
  }
  /** @return string */
  public function getIssuanceConfig()
  {
    return $this->issuanceConfig;
  }
  /** @param ProvisioningIssue */
  public function setProvisioningIssue(ProvisioningIssue $provisioningIssue)
  {
    $this->provisioningIssue = $provisioningIssue;
  }
  /** @return ProvisioningIssue */
  public function getProvisioningIssue()
  {
    return $this->provisioningIssue;
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

class ProvisioningIssue extends \Google\Model
{
  /** @var string */
  public $details;
  /** @var string */
  public $reason;

  /** @param string */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string */
  public function getDetails()
  {
    return $this->details;
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
}

class SelfManagedCertificate extends \Google\Model
{
  /** @var string */
  public $pemCertificate;
  /** @var string */
  public $pemPrivateKey;

  /** @param string */
  public function setPemCertificate($pemCertificate)
  {
    $this->pemCertificate = $pemCertificate;
  }
  /** @return string */
  public function getPemCertificate()
  {
    return $this->pemCertificate;
  }
  /** @param string */
  public function setPemPrivateKey($pemPrivateKey)
  {
    $this->pemPrivateKey = $pemPrivateKey;
  }
  /** @return string */
  public function getPemPrivateKey()
  {
    return $this->pemPrivateKey;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuthorizationAttemptInfo::class, 'Google_Service_CertificateManager_AuthorizationAttemptInfo');
class_alias(CancelOperationRequest::class, 'Google_Service_CertificateManager_CancelOperationRequest');
class_alias(Certificate::class, 'Google_Service_CertificateManager_Certificate');
class_alias(CertificateAuthorityConfig::class, 'Google_Service_CertificateManager_CertificateAuthorityConfig');
class_alias(CertificateAuthorityServiceConfig::class, 'Google_Service_CertificateManager_CertificateAuthorityServiceConfig');
class_alias(CertificateIssuanceConfig::class, 'Google_Service_CertificateManager_CertificateIssuanceConfig');
class_alias(CertificateMap::class, 'Google_Service_CertificateManager_CertificateMap');
class_alias(CertificateMapEntry::class, 'Google_Service_CertificateManager_CertificateMapEntry');
class_alias(CertificatemanagerEmpty::class, 'Google_Service_CertificateManager_CertificatemanagerEmpty');
class_alias(DnsAuthorization::class, 'Google_Service_CertificateManager_DnsAuthorization');
class_alias(DnsResourceRecord::class, 'Google_Service_CertificateManager_DnsResourceRecord');
class_alias(GclbTarget::class, 'Google_Service_CertificateManager_GclbTarget');
class_alias(IpConfig::class, 'Google_Service_CertificateManager_IpConfig');
class_alias(ListCertificateIssuanceConfigsResponse::class, 'Google_Service_CertificateManager_ListCertificateIssuanceConfigsResponse');
class_alias(ListCertificateMapEntriesResponse::class, 'Google_Service_CertificateManager_ListCertificateMapEntriesResponse');
class_alias(ListCertificateMapsResponse::class, 'Google_Service_CertificateManager_ListCertificateMapsResponse');
class_alias(ListCertificatesResponse::class, 'Google_Service_CertificateManager_ListCertificatesResponse');
class_alias(ListDnsAuthorizationsResponse::class, 'Google_Service_CertificateManager_ListDnsAuthorizationsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_CertificateManager_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CertificateManager_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_CertificateManager_Location');
class_alias(ManagedCertificate::class, 'Google_Service_CertificateManager_ManagedCertificate');
class_alias(Operation::class, 'Google_Service_CertificateManager_Operation');
class_alias(OperationMetadata::class, 'Google_Service_CertificateManager_OperationMetadata');
class_alias(ProvisioningIssue::class, 'Google_Service_CertificateManager_ProvisioningIssue');
class_alias(SelfManagedCertificate::class, 'Google_Service_CertificateManager_SelfManagedCertificate');
class_alias(Status::class, 'Google_Service_CertificateManager_Status');
