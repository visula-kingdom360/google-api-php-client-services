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

namespace Google\Service\Appengine;

class ApiConfigHandler extends \Google\Model
{
  /** @var string */
  public $authFailAction;
  /** @var string */
  public $login;
  /** @var string */
  public $script;
  /** @var string */
  public $securityLevel;
  /** @var string */
  public $url;

  /** @param string */
  public function setAuthFailAction($authFailAction)
  {
    $this->authFailAction = $authFailAction;
  }
  /** @return string */
  public function getAuthFailAction()
  {
    return $this->authFailAction;
  }
  /** @param string */
  public function setLogin($login)
  {
    $this->login = $login;
  }
  /** @return string */
  public function getLogin()
  {
    return $this->login;
  }
  /** @param string */
  public function setScript($script)
  {
    $this->script = $script;
  }
  /** @return string */
  public function getScript()
  {
    return $this->script;
  }
  /** @param string */
  public function setSecurityLevel($securityLevel)
  {
    $this->securityLevel = $securityLevel;
  }
  /** @return string */
  public function getSecurityLevel()
  {
    return $this->securityLevel;
  }
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class ApiEndpointHandler extends \Google\Model
{
  /** @var string */
  public $scriptPath;

  /** @param string */
  public function setScriptPath($scriptPath)
  {
    $this->scriptPath = $scriptPath;
  }
  /** @return string */
  public function getScriptPath()
  {
    return $this->scriptPath;
  }
}

class AppengineEmpty extends \Google\Model
{
}

class Application extends \Google\Collection
{
  /** @var string */
  public $authDomain;
  /** @var string */
  public $codeBucket;
  /** @var string */
  public $databaseType;
  /** @var string */
  public $defaultBucket;
  /** @var string */
  public $defaultCookieExpiration;
  /** @var string */
  public $defaultHostname;
  /** @var UrlDispatchRule[] */
  public $dispatchRules;
  /** @var FeatureSettings */
  public $featureSettings;
  /** @var string */
  public $gcrDomain;
  /** @var IdentityAwareProxy */
  public $iap;
  /** @var string */
  public $id;
  /** @var string */
  public $locationId;
  /** @var string */
  public $name;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $servingStatus;
  protected $collection_key = 'dispatchRules';
  protected $dispatchRulesType = UrlDispatchRule::class;
  protected $dispatchRulesDataType = 'array';
  protected $featureSettingsType = FeatureSettings::class;
  protected $featureSettingsDataType = '';
  protected $iapType = IdentityAwareProxy::class;
  protected $iapDataType = '';
  /** @param string */
  public function setAuthDomain($authDomain)
  {
    $this->authDomain = $authDomain;
  }
  /** @return string */
  public function getAuthDomain()
  {
    return $this->authDomain;
  }
  /** @param string */
  public function setCodeBucket($codeBucket)
  {
    $this->codeBucket = $codeBucket;
  }
  /** @return string */
  public function getCodeBucket()
  {
    return $this->codeBucket;
  }
  /** @param string */
  public function setDatabaseType($databaseType)
  {
    $this->databaseType = $databaseType;
  }
  /** @return string */
  public function getDatabaseType()
  {
    return $this->databaseType;
  }
  /** @param string */
  public function setDefaultBucket($defaultBucket)
  {
    $this->defaultBucket = $defaultBucket;
  }
  /** @return string */
  public function getDefaultBucket()
  {
    return $this->defaultBucket;
  }
  /** @param string */
  public function setDefaultCookieExpiration($defaultCookieExpiration)
  {
    $this->defaultCookieExpiration = $defaultCookieExpiration;
  }
  /** @return string */
  public function getDefaultCookieExpiration()
  {
    return $this->defaultCookieExpiration;
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
  /** @param UrlDispatchRule[] */
  public function setDispatchRules($dispatchRules)
  {
    $this->dispatchRules = $dispatchRules;
  }
  /** @return UrlDispatchRule[] */
  public function getDispatchRules()
  {
    return $this->dispatchRules;
  }
  /** @param FeatureSettings */
  public function setFeatureSettings(FeatureSettings $featureSettings)
  {
    $this->featureSettings = $featureSettings;
  }
  /** @return FeatureSettings */
  public function getFeatureSettings()
  {
    return $this->featureSettings;
  }
  /** @param string */
  public function setGcrDomain($gcrDomain)
  {
    $this->gcrDomain = $gcrDomain;
  }
  /** @return string */
  public function getGcrDomain()
  {
    return $this->gcrDomain;
  }
  /** @param IdentityAwareProxy */
  public function setIap(IdentityAwareProxy $iap)
  {
    $this->iap = $iap;
  }
  /** @return IdentityAwareProxy */
  public function getIap()
  {
    return $this->iap;
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
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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
  public function setServingStatus($servingStatus)
  {
    $this->servingStatus = $servingStatus;
  }
  /** @return string */
  public function getServingStatus()
  {
    return $this->servingStatus;
  }
}

class AuthorizedCertificate extends \Google\Collection
{
  /** @var CertificateRawData */
  public $certificateRawData;
  /** @var string */
  public $displayName;
  /** @var int */
  public $domainMappingsCount;
  /** @var string[] */
  public $domainNames;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $id;
  /** @var ManagedCertificate */
  public $managedCertificate;
  /** @var string */
  public $name;
  /** @var string[] */
  public $visibleDomainMappings;
  protected $collection_key = 'visibleDomainMappings';
  protected $certificateRawDataType = CertificateRawData::class;
  protected $certificateRawDataDataType = '';
  protected $managedCertificateType = ManagedCertificate::class;
  protected $managedCertificateDataType = '';
  /** @param CertificateRawData */
  public function setCertificateRawData(CertificateRawData $certificateRawData)
  {
    $this->certificateRawData = $certificateRawData;
  }
  /** @return CertificateRawData */
  public function getCertificateRawData()
  {
    return $this->certificateRawData;
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
  /** @param int */
  public function setDomainMappingsCount($domainMappingsCount)
  {
    $this->domainMappingsCount = $domainMappingsCount;
  }
  /** @return int */
  public function getDomainMappingsCount()
  {
    return $this->domainMappingsCount;
  }
  /** @param string[] */
  public function setDomainNames($domainNames)
  {
    $this->domainNames = $domainNames;
  }
  /** @return string[] */
  public function getDomainNames()
  {
    return $this->domainNames;
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
  /** @param ManagedCertificate */
  public function setManagedCertificate(ManagedCertificate $managedCertificate)
  {
    $this->managedCertificate = $managedCertificate;
  }
  /** @return ManagedCertificate */
  public function getManagedCertificate()
  {
    return $this->managedCertificate;
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
  public function setVisibleDomainMappings($visibleDomainMappings)
  {
    $this->visibleDomainMappings = $visibleDomainMappings;
  }
  /** @return string[] */
  public function getVisibleDomainMappings()
  {
    return $this->visibleDomainMappings;
  }
}

class AuthorizedDomain extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;

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

class AutomaticScaling extends \Google\Model
{
  /** @var string */
  public $coolDownPeriod;
  /** @var CpuUtilization */
  public $cpuUtilization;
  /** @var DiskUtilization */
  public $diskUtilization;
  /** @var int */
  public $maxConcurrentRequests;
  /** @var int */
  public $maxIdleInstances;
  /** @var string */
  public $maxPendingLatency;
  /** @var int */
  public $maxTotalInstances;
  /** @var int */
  public $minIdleInstances;
  /** @var string */
  public $minPendingLatency;
  /** @var int */
  public $minTotalInstances;
  /** @var NetworkUtilization */
  public $networkUtilization;
  /** @var RequestUtilization */
  public $requestUtilization;
  /** @var StandardSchedulerSettings */
  public $standardSchedulerSettings;
  protected $cpuUtilizationType = CpuUtilization::class;
  protected $cpuUtilizationDataType = '';
  protected $diskUtilizationType = DiskUtilization::class;
  protected $diskUtilizationDataType = '';
  protected $networkUtilizationType = NetworkUtilization::class;
  protected $networkUtilizationDataType = '';
  protected $requestUtilizationType = RequestUtilization::class;
  protected $requestUtilizationDataType = '';
  protected $standardSchedulerSettingsType = StandardSchedulerSettings::class;
  protected $standardSchedulerSettingsDataType = '';
  /** @param string */
  public function setCoolDownPeriod($coolDownPeriod)
  {
    $this->coolDownPeriod = $coolDownPeriod;
  }
  /** @return string */
  public function getCoolDownPeriod()
  {
    return $this->coolDownPeriod;
  }
  /** @param CpuUtilization */
  public function setCpuUtilization(CpuUtilization $cpuUtilization)
  {
    $this->cpuUtilization = $cpuUtilization;
  }
  /** @return CpuUtilization */
  public function getCpuUtilization()
  {
    return $this->cpuUtilization;
  }
  /** @param DiskUtilization */
  public function setDiskUtilization(DiskUtilization $diskUtilization)
  {
    $this->diskUtilization = $diskUtilization;
  }
  /** @return DiskUtilization */
  public function getDiskUtilization()
  {
    return $this->diskUtilization;
  }
  /** @param int */
  public function setMaxConcurrentRequests($maxConcurrentRequests)
  {
    $this->maxConcurrentRequests = $maxConcurrentRequests;
  }
  /** @return int */
  public function getMaxConcurrentRequests()
  {
    return $this->maxConcurrentRequests;
  }
  /** @param int */
  public function setMaxIdleInstances($maxIdleInstances)
  {
    $this->maxIdleInstances = $maxIdleInstances;
  }
  /** @return int */
  public function getMaxIdleInstances()
  {
    return $this->maxIdleInstances;
  }
  /** @param string */
  public function setMaxPendingLatency($maxPendingLatency)
  {
    $this->maxPendingLatency = $maxPendingLatency;
  }
  /** @return string */
  public function getMaxPendingLatency()
  {
    return $this->maxPendingLatency;
  }
  /** @param int */
  public function setMaxTotalInstances($maxTotalInstances)
  {
    $this->maxTotalInstances = $maxTotalInstances;
  }
  /** @return int */
  public function getMaxTotalInstances()
  {
    return $this->maxTotalInstances;
  }
  /** @param int */
  public function setMinIdleInstances($minIdleInstances)
  {
    $this->minIdleInstances = $minIdleInstances;
  }
  /** @return int */
  public function getMinIdleInstances()
  {
    return $this->minIdleInstances;
  }
  /** @param string */
  public function setMinPendingLatency($minPendingLatency)
  {
    $this->minPendingLatency = $minPendingLatency;
  }
  /** @return string */
  public function getMinPendingLatency()
  {
    return $this->minPendingLatency;
  }
  /** @param int */
  public function setMinTotalInstances($minTotalInstances)
  {
    $this->minTotalInstances = $minTotalInstances;
  }
  /** @return int */
  public function getMinTotalInstances()
  {
    return $this->minTotalInstances;
  }
  /** @param NetworkUtilization */
  public function setNetworkUtilization(NetworkUtilization $networkUtilization)
  {
    $this->networkUtilization = $networkUtilization;
  }
  /** @return NetworkUtilization */
  public function getNetworkUtilization()
  {
    return $this->networkUtilization;
  }
  /** @param RequestUtilization */
  public function setRequestUtilization(RequestUtilization $requestUtilization)
  {
    $this->requestUtilization = $requestUtilization;
  }
  /** @return RequestUtilization */
  public function getRequestUtilization()
  {
    return $this->requestUtilization;
  }
  /** @param StandardSchedulerSettings */
  public function setStandardSchedulerSettings(StandardSchedulerSettings $standardSchedulerSettings)
  {
    $this->standardSchedulerSettings = $standardSchedulerSettings;
  }
  /** @return StandardSchedulerSettings */
  public function getStandardSchedulerSettings()
  {
    return $this->standardSchedulerSettings;
  }
}

class BasicScaling extends \Google\Model
{
  /** @var string */
  public $idleTimeout;
  /** @var int */
  public $maxInstances;

  /** @param string */
  public function setIdleTimeout($idleTimeout)
  {
    $this->idleTimeout = $idleTimeout;
  }
  /** @return string */
  public function getIdleTimeout()
  {
    return $this->idleTimeout;
  }
  /** @param int */
  public function setMaxInstances($maxInstances)
  {
    $this->maxInstances = $maxInstances;
  }
  /** @return int */
  public function getMaxInstances()
  {
    return $this->maxInstances;
  }
}

class BatchUpdateIngressRulesRequest extends \Google\Collection
{
  /** @var FirewallRule[] */
  public $ingressRules;
  protected $collection_key = 'ingressRules';
  protected $ingressRulesType = FirewallRule::class;
  protected $ingressRulesDataType = 'array';
  /** @param FirewallRule[] */
  public function setIngressRules($ingressRules)
  {
    $this->ingressRules = $ingressRules;
  }
  /** @return FirewallRule[] */
  public function getIngressRules()
  {
    return $this->ingressRules;
  }
}

class BatchUpdateIngressRulesResponse extends \Google\Collection
{
  /** @var FirewallRule[] */
  public $ingressRules;
  protected $collection_key = 'ingressRules';
  protected $ingressRulesType = FirewallRule::class;
  protected $ingressRulesDataType = 'array';
  /** @param FirewallRule[] */
  public function setIngressRules($ingressRules)
  {
    $this->ingressRules = $ingressRules;
  }
  /** @return FirewallRule[] */
  public function getIngressRules()
  {
    return $this->ingressRules;
  }
}

class CertificateRawData extends \Google\Model
{
  /** @var string */
  public $privateKey;
  /** @var string */
  public $publicCertificate;

  /** @param string */
  public function setPrivateKey($privateKey)
  {
    $this->privateKey = $privateKey;
  }
  /** @return string */
  public function getPrivateKey()
  {
    return $this->privateKey;
  }
  /** @param string */
  public function setPublicCertificate($publicCertificate)
  {
    $this->publicCertificate = $publicCertificate;
  }
  /** @return string */
  public function getPublicCertificate()
  {
    return $this->publicCertificate;
  }
}

class CloudBuildOptions extends \Google\Model
{
  /** @var string */
  public $appYamlPath;
  /** @var string */
  public $cloudBuildTimeout;

  /** @param string */
  public function setAppYamlPath($appYamlPath)
  {
    $this->appYamlPath = $appYamlPath;
  }
  /** @return string */
  public function getAppYamlPath()
  {
    return $this->appYamlPath;
  }
  /** @param string */
  public function setCloudBuildTimeout($cloudBuildTimeout)
  {
    $this->cloudBuildTimeout = $cloudBuildTimeout;
  }
  /** @return string */
  public function getCloudBuildTimeout()
  {
    return $this->cloudBuildTimeout;
  }
}

class ContainerInfo extends \Google\Model
{
  /** @var string */
  public $image;

  /** @param string */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return string */
  public function getImage()
  {
    return $this->image;
  }
}

class CpuUtilization extends \Google\Model
{
  /** @var string */
  public $aggregationWindowLength;
  public $targetUtilization;

  /** @param string */
  public function setAggregationWindowLength($aggregationWindowLength)
  {
    $this->aggregationWindowLength = $aggregationWindowLength;
  }
  /** @return string */
  public function getAggregationWindowLength()
  {
    return $this->aggregationWindowLength;
  }
  public function setTargetUtilization($targetUtilization)
  {
    $this->targetUtilization = $targetUtilization;
  }
  public function getTargetUtilization()
  {
    return $this->targetUtilization;
  }
}

class CreateVersionMetadataV1 extends \Google\Model
{
  /** @var string */
  public $cloudBuildId;

  /** @param string */
  public function setCloudBuildId($cloudBuildId)
  {
    $this->cloudBuildId = $cloudBuildId;
  }
  /** @return string */
  public function getCloudBuildId()
  {
    return $this->cloudBuildId;
  }
}

class CreateVersionMetadataV1Alpha extends \Google\Model
{
  /** @var string */
  public $cloudBuildId;

  /** @param string */
  public function setCloudBuildId($cloudBuildId)
  {
    $this->cloudBuildId = $cloudBuildId;
  }
  /** @return string */
  public function getCloudBuildId()
  {
    return $this->cloudBuildId;
  }
}

class CreateVersionMetadataV1Beta extends \Google\Model
{
  /** @var string */
  public $cloudBuildId;

  /** @param string */
  public function setCloudBuildId($cloudBuildId)
  {
    $this->cloudBuildId = $cloudBuildId;
  }
  /** @return string */
  public function getCloudBuildId()
  {
    return $this->cloudBuildId;
  }
}

class DebugInstanceRequest extends \Google\Model
{
  /** @var string */
  public $sshKey;

  /** @param string */
  public function setSshKey($sshKey)
  {
    $this->sshKey = $sshKey;
  }
  /** @return string */
  public function getSshKey()
  {
    return $this->sshKey;
  }
}

class Deployment extends \Google\Model
{
  /** @var CloudBuildOptions */
  public $cloudBuildOptions;
  /** @var ContainerInfo */
  public $container;
  /** @var FileInfo[] */
  public $files;
  /** @var ZipInfo */
  public $zip;
  protected $cloudBuildOptionsType = CloudBuildOptions::class;
  protected $cloudBuildOptionsDataType = '';
  protected $containerType = ContainerInfo::class;
  protected $containerDataType = '';
  protected $filesType = FileInfo::class;
  protected $filesDataType = 'map';
  protected $zipType = ZipInfo::class;
  protected $zipDataType = '';
  /** @param CloudBuildOptions */
  public function setCloudBuildOptions(CloudBuildOptions $cloudBuildOptions)
  {
    $this->cloudBuildOptions = $cloudBuildOptions;
  }
  /** @return CloudBuildOptions */
  public function getCloudBuildOptions()
  {
    return $this->cloudBuildOptions;
  }
  /** @param ContainerInfo */
  public function setContainer(ContainerInfo $container)
  {
    $this->container = $container;
  }
  /** @return ContainerInfo */
  public function getContainer()
  {
    return $this->container;
  }
  /** @param FileInfo[] */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /** @return FileInfo[] */
  public function getFiles()
  {
    return $this->files;
  }
  /** @param ZipInfo */
  public function setZip(ZipInfo $zip)
  {
    $this->zip = $zip;
  }
  /** @return ZipInfo */
  public function getZip()
  {
    return $this->zip;
  }
}

class DiskUtilization extends \Google\Model
{
  /** @var int */
  public $targetReadBytesPerSecond;
  /** @var int */
  public $targetReadOpsPerSecond;
  /** @var int */
  public $targetWriteBytesPerSecond;
  /** @var int */
  public $targetWriteOpsPerSecond;

  /** @param int */
  public function setTargetReadBytesPerSecond($targetReadBytesPerSecond)
  {
    $this->targetReadBytesPerSecond = $targetReadBytesPerSecond;
  }
  /** @return int */
  public function getTargetReadBytesPerSecond()
  {
    return $this->targetReadBytesPerSecond;
  }
  /** @param int */
  public function setTargetReadOpsPerSecond($targetReadOpsPerSecond)
  {
    $this->targetReadOpsPerSecond = $targetReadOpsPerSecond;
  }
  /** @return int */
  public function getTargetReadOpsPerSecond()
  {
    return $this->targetReadOpsPerSecond;
  }
  /** @param int */
  public function setTargetWriteBytesPerSecond($targetWriteBytesPerSecond)
  {
    $this->targetWriteBytesPerSecond = $targetWriteBytesPerSecond;
  }
  /** @return int */
  public function getTargetWriteBytesPerSecond()
  {
    return $this->targetWriteBytesPerSecond;
  }
  /** @param int */
  public function setTargetWriteOpsPerSecond($targetWriteOpsPerSecond)
  {
    $this->targetWriteOpsPerSecond = $targetWriteOpsPerSecond;
  }
  /** @return int */
  public function getTargetWriteOpsPerSecond()
  {
    return $this->targetWriteOpsPerSecond;
  }
}

class DomainMapping extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var ResourceRecord[] */
  public $resourceRecords;
  /** @var SslSettings */
  public $sslSettings;
  protected $collection_key = 'resourceRecords';
  protected $resourceRecordsType = ResourceRecord::class;
  protected $resourceRecordsDataType = 'array';
  protected $sslSettingsType = SslSettings::class;
  protected $sslSettingsDataType = '';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param ResourceRecord[] */
  public function setResourceRecords($resourceRecords)
  {
    $this->resourceRecords = $resourceRecords;
  }
  /** @return ResourceRecord[] */
  public function getResourceRecords()
  {
    return $this->resourceRecords;
  }
  /** @param SslSettings */
  public function setSslSettings(SslSettings $sslSettings)
  {
    $this->sslSettings = $sslSettings;
  }
  /** @return SslSettings */
  public function getSslSettings()
  {
    return $this->sslSettings;
  }
}

class EndpointsApiService extends \Google\Model
{
  /** @var string */
  public $configId;
  /** @var bool */
  public $disableTraceSampling;
  /** @var string */
  public $name;
  /** @var string */
  public $rolloutStrategy;

  /** @param string */
  public function setConfigId($configId)
  {
    $this->configId = $configId;
  }
  /** @return string */
  public function getConfigId()
  {
    return $this->configId;
  }
  /** @param bool */
  public function setDisableTraceSampling($disableTraceSampling)
  {
    $this->disableTraceSampling = $disableTraceSampling;
  }
  /** @return bool */
  public function getDisableTraceSampling()
  {
    return $this->disableTraceSampling;
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
  public function setRolloutStrategy($rolloutStrategy)
  {
    $this->rolloutStrategy = $rolloutStrategy;
  }
  /** @return string */
  public function getRolloutStrategy()
  {
    return $this->rolloutStrategy;
  }
}

class Entrypoint extends \Google\Model
{
  /** @var string */
  public $shell;

  /** @param string */
  public function setShell($shell)
  {
    $this->shell = $shell;
  }
  /** @return string */
  public function getShell()
  {
    return $this->shell;
  }
}

class ErrorHandler extends \Google\Model
{
  /** @var string */
  public $errorCode;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $staticFile;

  /** @param string */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return string */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param string */
  public function setStaticFile($staticFile)
  {
    $this->staticFile = $staticFile;
  }
  /** @return string */
  public function getStaticFile()
  {
    return $this->staticFile;
  }
}

class FeatureSettings extends \Google\Model
{
  /** @var bool */
  public $splitHealthChecks;
  /** @var bool */
  public $useContainerOptimizedOs;

  /** @param bool */
  public function setSplitHealthChecks($splitHealthChecks)
  {
    $this->splitHealthChecks = $splitHealthChecks;
  }
  /** @return bool */
  public function getSplitHealthChecks()
  {
    return $this->splitHealthChecks;
  }
  /** @param bool */
  public function setUseContainerOptimizedOs($useContainerOptimizedOs)
  {
    $this->useContainerOptimizedOs = $useContainerOptimizedOs;
  }
  /** @return bool */
  public function getUseContainerOptimizedOs()
  {
    return $this->useContainerOptimizedOs;
  }
}

class FileInfo extends \Google\Model
{
  /** @var string */
  public $mimeType;
  /** @var string */
  public $sha1Sum;
  /** @var string */
  public $sourceUrl;

  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param string */
  public function setSha1Sum($sha1Sum)
  {
    $this->sha1Sum = $sha1Sum;
  }
  /** @return string */
  public function getSha1Sum()
  {
    return $this->sha1Sum;
  }
  /** @param string */
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  /** @return string */
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
}

class FirewallRule extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $description;
  /** @var int */
  public $priority;
  /** @var string */
  public $sourceRange;

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
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return int */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string */
  public function setSourceRange($sourceRange)
  {
    $this->sourceRange = $sourceRange;
  }
  /** @return string */
  public function getSourceRange()
  {
    return $this->sourceRange;
  }
}

class GoogleAppengineV1betaLocationMetadata extends \Google\Model
{
  /** @var bool */
  public $flexibleEnvironmentAvailable;
  /** @var bool */
  public $searchApiAvailable;
  /** @var bool */
  public $standardEnvironmentAvailable;

  /** @param bool */
  public function setFlexibleEnvironmentAvailable($flexibleEnvironmentAvailable)
  {
    $this->flexibleEnvironmentAvailable = $flexibleEnvironmentAvailable;
  }
  /** @return bool */
  public function getFlexibleEnvironmentAvailable()
  {
    return $this->flexibleEnvironmentAvailable;
  }
  /** @param bool */
  public function setSearchApiAvailable($searchApiAvailable)
  {
    $this->searchApiAvailable = $searchApiAvailable;
  }
  /** @return bool */
  public function getSearchApiAvailable()
  {
    return $this->searchApiAvailable;
  }
  /** @param bool */
  public function setStandardEnvironmentAvailable($standardEnvironmentAvailable)
  {
    $this->standardEnvironmentAvailable = $standardEnvironmentAvailable;
  }
  /** @return bool */
  public function getStandardEnvironmentAvailable()
  {
    return $this->standardEnvironmentAvailable;
  }
}

class HealthCheck extends \Google\Model
{
  /** @var string */
  public $checkInterval;
  /** @var bool */
  public $disableHealthCheck;
  /** @var string */
  public $healthyThreshold;
  /** @var string */
  public $host;
  /** @var string */
  public $restartThreshold;
  /** @var string */
  public $timeout;
  /** @var string */
  public $unhealthyThreshold;

  /** @param string */
  public function setCheckInterval($checkInterval)
  {
    $this->checkInterval = $checkInterval;
  }
  /** @return string */
  public function getCheckInterval()
  {
    return $this->checkInterval;
  }
  /** @param bool */
  public function setDisableHealthCheck($disableHealthCheck)
  {
    $this->disableHealthCheck = $disableHealthCheck;
  }
  /** @return bool */
  public function getDisableHealthCheck()
  {
    return $this->disableHealthCheck;
  }
  /** @param string */
  public function setHealthyThreshold($healthyThreshold)
  {
    $this->healthyThreshold = $healthyThreshold;
  }
  /** @return string */
  public function getHealthyThreshold()
  {
    return $this->healthyThreshold;
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
  public function setRestartThreshold($restartThreshold)
  {
    $this->restartThreshold = $restartThreshold;
  }
  /** @return string */
  public function getRestartThreshold()
  {
    return $this->restartThreshold;
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
  /** @param string */
  public function setUnhealthyThreshold($unhealthyThreshold)
  {
    $this->unhealthyThreshold = $unhealthyThreshold;
  }
  /** @return string */
  public function getUnhealthyThreshold()
  {
    return $this->unhealthyThreshold;
  }
}

class IdentityAwareProxy extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $oauth2ClientId;
  /** @var string */
  public $oauth2ClientSecret;
  /** @var string */
  public $oauth2ClientSecretSha256;

  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /** @param string */
  public function setOauth2ClientId($oauth2ClientId)
  {
    $this->oauth2ClientId = $oauth2ClientId;
  }
  /** @return string */
  public function getOauth2ClientId()
  {
    return $this->oauth2ClientId;
  }
  /** @param string */
  public function setOauth2ClientSecret($oauth2ClientSecret)
  {
    $this->oauth2ClientSecret = $oauth2ClientSecret;
  }
  /** @return string */
  public function getOauth2ClientSecret()
  {
    return $this->oauth2ClientSecret;
  }
  /** @param string */
  public function setOauth2ClientSecretSha256($oauth2ClientSecretSha256)
  {
    $this->oauth2ClientSecretSha256 = $oauth2ClientSecretSha256;
  }
  /** @return string */
  public function getOauth2ClientSecretSha256()
  {
    return $this->oauth2ClientSecretSha256;
  }
}

class Instance extends \Google\Model
{
  /** @var string */
  public $appEngineRelease;
  /** @var string */
  public $availability;
  /** @var int */
  public $averageLatency;
  /** @var int */
  public $errors;
  /** @var string */
  public $id;
  /** @var string */
  public $memoryUsage;
  /** @var string */
  public $name;
  /** @var float */
  public $qps;
  /** @var int */
  public $requests;
  /** @var string */
  public $startTime;
  /** @var bool */
  public $vmDebugEnabled;
  /** @var string */
  public $vmId;
  /** @var string */
  public $vmIp;
  /** @var string */
  public $vmLiveness;
  /** @var string */
  public $vmName;
  /** @var string */
  public $vmStatus;
  /** @var string */
  public $vmZoneName;

  /** @param string */
  public function setAppEngineRelease($appEngineRelease)
  {
    $this->appEngineRelease = $appEngineRelease;
  }
  /** @return string */
  public function getAppEngineRelease()
  {
    return $this->appEngineRelease;
  }
  /** @param string */
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /** @return string */
  public function getAvailability()
  {
    return $this->availability;
  }
  /** @param int */
  public function setAverageLatency($averageLatency)
  {
    $this->averageLatency = $averageLatency;
  }
  /** @return int */
  public function getAverageLatency()
  {
    return $this->averageLatency;
  }
  /** @param int */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return int */
  public function getErrors()
  {
    return $this->errors;
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
  public function setMemoryUsage($memoryUsage)
  {
    $this->memoryUsage = $memoryUsage;
  }
  /** @return string */
  public function getMemoryUsage()
  {
    return $this->memoryUsage;
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
  /** @param float */
  public function setQps($qps)
  {
    $this->qps = $qps;
  }
  /** @return float */
  public function getQps()
  {
    return $this->qps;
  }
  /** @param int */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return int */
  public function getRequests()
  {
    return $this->requests;
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
  /** @param bool */
  public function setVmDebugEnabled($vmDebugEnabled)
  {
    $this->vmDebugEnabled = $vmDebugEnabled;
  }
  /** @return bool */
  public function getVmDebugEnabled()
  {
    return $this->vmDebugEnabled;
  }
  /** @param string */
  public function setVmId($vmId)
  {
    $this->vmId = $vmId;
  }
  /** @return string */
  public function getVmId()
  {
    return $this->vmId;
  }
  /** @param string */
  public function setVmIp($vmIp)
  {
    $this->vmIp = $vmIp;
  }
  /** @return string */
  public function getVmIp()
  {
    return $this->vmIp;
  }
  /** @param string */
  public function setVmLiveness($vmLiveness)
  {
    $this->vmLiveness = $vmLiveness;
  }
  /** @return string */
  public function getVmLiveness()
  {
    return $this->vmLiveness;
  }
  /** @param string */
  public function setVmName($vmName)
  {
    $this->vmName = $vmName;
  }
  /** @return string */
  public function getVmName()
  {
    return $this->vmName;
  }
  /** @param string */
  public function setVmStatus($vmStatus)
  {
    $this->vmStatus = $vmStatus;
  }
  /** @return string */
  public function getVmStatus()
  {
    return $this->vmStatus;
  }
  /** @param string */
  public function setVmZoneName($vmZoneName)
  {
    $this->vmZoneName = $vmZoneName;
  }
  /** @return string */
  public function getVmZoneName()
  {
    return $this->vmZoneName;
  }
}

class Library extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $version;

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

class ListAuthorizedCertificatesResponse extends \Google\Collection
{
  /** @var AuthorizedCertificate[] */
  public $certificates;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'certificates';
  protected $certificatesType = AuthorizedCertificate::class;
  protected $certificatesDataType = 'array';
  /** @param AuthorizedCertificate[] */
  public function setCertificates($certificates)
  {
    $this->certificates = $certificates;
  }
  /** @return AuthorizedCertificate[] */
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
}

class ListAuthorizedDomainsResponse extends \Google\Collection
{
  /** @var AuthorizedDomain[] */
  public $domains;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'domains';
  protected $domainsType = AuthorizedDomain::class;
  protected $domainsDataType = 'array';
  /** @param AuthorizedDomain[] */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /** @return AuthorizedDomain[] */
  public function getDomains()
  {
    return $this->domains;
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

class ListDomainMappingsResponse extends \Google\Collection
{
  /** @var DomainMapping[] */
  public $domainMappings;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'domainMappings';
  protected $domainMappingsType = DomainMapping::class;
  protected $domainMappingsDataType = 'array';
  /** @param DomainMapping[] */
  public function setDomainMappings($domainMappings)
  {
    $this->domainMappings = $domainMappings;
  }
  /** @return DomainMapping[] */
  public function getDomainMappings()
  {
    return $this->domainMappings;
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

class ListIngressRulesResponse extends \Google\Collection
{
  /** @var FirewallRule[] */
  public $ingressRules;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'ingressRules';
  protected $ingressRulesType = FirewallRule::class;
  protected $ingressRulesDataType = 'array';
  /** @param FirewallRule[] */
  public function setIngressRules($ingressRules)
  {
    $this->ingressRules = $ingressRules;
  }
  /** @return FirewallRule[] */
  public function getIngressRules()
  {
    return $this->ingressRules;
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

class ListInstancesResponse extends \Google\Collection
{
  /** @var Instance[] */
  public $instances;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'instances';
  protected $instancesType = Instance::class;
  protected $instancesDataType = 'array';
  /** @param Instance[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return Instance[] */
  public function getInstances()
  {
    return $this->instances;
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

class ListServicesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Service[] */
  public $services;
  protected $collection_key = 'services';
  protected $servicesType = Service::class;
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
  /** @param Service[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return Service[] */
  public function getServices()
  {
    return $this->services;
  }
}

class ListVersionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Version[] */
  public $versions;
  protected $collection_key = 'versions';
  protected $versionsType = Version::class;
  protected $versionsDataType = 'array';
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
  /** @param Version[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return Version[] */
  public function getVersions()
  {
    return $this->versions;
  }
}

class LivenessCheck extends \Google\Model
{
  /** @var string */
  public $checkInterval;
  /** @var string */
  public $failureThreshold;
  /** @var string */
  public $host;
  /** @var string */
  public $initialDelay;
  /** @var string */
  public $path;
  /** @var string */
  public $successThreshold;
  /** @var string */
  public $timeout;

  /** @param string */
  public function setCheckInterval($checkInterval)
  {
    $this->checkInterval = $checkInterval;
  }
  /** @return string */
  public function getCheckInterval()
  {
    return $this->checkInterval;
  }
  /** @param string */
  public function setFailureThreshold($failureThreshold)
  {
    $this->failureThreshold = $failureThreshold;
  }
  /** @return string */
  public function getFailureThreshold()
  {
    return $this->failureThreshold;
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
  public function setInitialDelay($initialDelay)
  {
    $this->initialDelay = $initialDelay;
  }
  /** @return string */
  public function getInitialDelay()
  {
    return $this->initialDelay;
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
  public function setSuccessThreshold($successThreshold)
  {
    $this->successThreshold = $successThreshold;
  }
  /** @return string */
  public function getSuccessThreshold()
  {
    return $this->successThreshold;
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

class LocationMetadata extends \Google\Model
{
  /** @var bool */
  public $flexibleEnvironmentAvailable;
  /** @var bool */
  public $searchApiAvailable;
  /** @var bool */
  public $standardEnvironmentAvailable;

  /** @param bool */
  public function setFlexibleEnvironmentAvailable($flexibleEnvironmentAvailable)
  {
    $this->flexibleEnvironmentAvailable = $flexibleEnvironmentAvailable;
  }
  /** @return bool */
  public function getFlexibleEnvironmentAvailable()
  {
    return $this->flexibleEnvironmentAvailable;
  }
  /** @param bool */
  public function setSearchApiAvailable($searchApiAvailable)
  {
    $this->searchApiAvailable = $searchApiAvailable;
  }
  /** @return bool */
  public function getSearchApiAvailable()
  {
    return $this->searchApiAvailable;
  }
  /** @param bool */
  public function setStandardEnvironmentAvailable($standardEnvironmentAvailable)
  {
    $this->standardEnvironmentAvailable = $standardEnvironmentAvailable;
  }
  /** @return bool */
  public function getStandardEnvironmentAvailable()
  {
    return $this->standardEnvironmentAvailable;
  }
}

class ManagedCertificate extends \Google\Model
{
  /** @var string */
  public $lastRenewalTime;
  /** @var string */
  public $status;

  /** @param string */
  public function setLastRenewalTime($lastRenewalTime)
  {
    $this->lastRenewalTime = $lastRenewalTime;
  }
  /** @return string */
  public function getLastRenewalTime()
  {
    return $this->lastRenewalTime;
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

class ManualScaling extends \Google\Model
{
  /** @var int */
  public $instances;

  /** @param int */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return int */
  public function getInstances()
  {
    return $this->instances;
  }
}

class Network extends \Google\Collection
{
  /** @var string[] */
  public $forwardedPorts;
  /** @var string */
  public $instanceIpMode;
  /** @var string */
  public $instanceTag;
  /** @var string */
  public $name;
  /** @var bool */
  public $sessionAffinity;
  /** @var string */
  public $subnetworkName;
  protected $collection_key = 'forwardedPorts';
  /** @param string[] */
  public function setForwardedPorts($forwardedPorts)
  {
    $this->forwardedPorts = $forwardedPorts;
  }
  /** @return string[] */
  public function getForwardedPorts()
  {
    return $this->forwardedPorts;
  }
  /** @param string */
  public function setInstanceIpMode($instanceIpMode)
  {
    $this->instanceIpMode = $instanceIpMode;
  }
  /** @return string */
  public function getInstanceIpMode()
  {
    return $this->instanceIpMode;
  }
  /** @param string */
  public function setInstanceTag($instanceTag)
  {
    $this->instanceTag = $instanceTag;
  }
  /** @return string */
  public function getInstanceTag()
  {
    return $this->instanceTag;
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
  /** @param bool */
  public function setSessionAffinity($sessionAffinity)
  {
    $this->sessionAffinity = $sessionAffinity;
  }
  /** @return bool */
  public function getSessionAffinity()
  {
    return $this->sessionAffinity;
  }
  /** @param string */
  public function setSubnetworkName($subnetworkName)
  {
    $this->subnetworkName = $subnetworkName;
  }
  /** @return string */
  public function getSubnetworkName()
  {
    return $this->subnetworkName;
  }
}

class NetworkSettings extends \Google\Model
{
  /** @var string */
  public $ingressTrafficAllowed;

  /** @param string */
  public function setIngressTrafficAllowed($ingressTrafficAllowed)
  {
    $this->ingressTrafficAllowed = $ingressTrafficAllowed;
  }
  /** @return string */
  public function getIngressTrafficAllowed()
  {
    return $this->ingressTrafficAllowed;
  }
}

class NetworkUtilization extends \Google\Model
{
  /** @var int */
  public $targetReceivedBytesPerSecond;
  /** @var int */
  public $targetReceivedPacketsPerSecond;
  /** @var int */
  public $targetSentBytesPerSecond;
  /** @var int */
  public $targetSentPacketsPerSecond;

  /** @param int */
  public function setTargetReceivedBytesPerSecond($targetReceivedBytesPerSecond)
  {
    $this->targetReceivedBytesPerSecond = $targetReceivedBytesPerSecond;
  }
  /** @return int */
  public function getTargetReceivedBytesPerSecond()
  {
    return $this->targetReceivedBytesPerSecond;
  }
  /** @param int */
  public function setTargetReceivedPacketsPerSecond($targetReceivedPacketsPerSecond)
  {
    $this->targetReceivedPacketsPerSecond = $targetReceivedPacketsPerSecond;
  }
  /** @return int */
  public function getTargetReceivedPacketsPerSecond()
  {
    return $this->targetReceivedPacketsPerSecond;
  }
  /** @param int */
  public function setTargetSentBytesPerSecond($targetSentBytesPerSecond)
  {
    $this->targetSentBytesPerSecond = $targetSentBytesPerSecond;
  }
  /** @return int */
  public function getTargetSentBytesPerSecond()
  {
    return $this->targetSentBytesPerSecond;
  }
  /** @param int */
  public function setTargetSentPacketsPerSecond($targetSentPacketsPerSecond)
  {
    $this->targetSentPacketsPerSecond = $targetSentPacketsPerSecond;
  }
  /** @return int */
  public function getTargetSentPacketsPerSecond()
  {
    return $this->targetSentPacketsPerSecond;
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

class OperationMetadataV1 extends \Google\Collection
{
  /** @var CreateVersionMetadataV1 */
  public $createVersionMetadata;
  /** @var string */
  public $endTime;
  /** @var string */
  public $ephemeralMessage;
  /** @var string */
  public $insertTime;
  /** @var string */
  public $method;
  /** @var string */
  public $target;
  /** @var string */
  public $user;
  /** @var string[] */
  public $warning;
  protected $collection_key = 'warning';
  protected $createVersionMetadataType = CreateVersionMetadataV1::class;
  protected $createVersionMetadataDataType = '';
  /** @param CreateVersionMetadataV1 */
  public function setCreateVersionMetadata(CreateVersionMetadataV1 $createVersionMetadata)
  {
    $this->createVersionMetadata = $createVersionMetadata;
  }
  /** @return CreateVersionMetadataV1 */
  public function getCreateVersionMetadata()
  {
    return $this->createVersionMetadata;
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
  public function setEphemeralMessage($ephemeralMessage)
  {
    $this->ephemeralMessage = $ephemeralMessage;
  }
  /** @return string */
  public function getEphemeralMessage()
  {
    return $this->ephemeralMessage;
  }
  /** @param string */
  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
  }
  /** @return string */
  public function getInsertTime()
  {
    return $this->insertTime;
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
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return string */
  public function getUser()
  {
    return $this->user;
  }
  /** @param string[] */
  public function setWarning($warning)
  {
    $this->warning = $warning;
  }
  /** @return string[] */
  public function getWarning()
  {
    return $this->warning;
  }
}

class OperationMetadataV1Alpha extends \Google\Collection
{
  /** @var CreateVersionMetadataV1Alpha */
  public $createVersionMetadata;
  /** @var string */
  public $endTime;
  /** @var string */
  public $ephemeralMessage;
  /** @var string */
  public $insertTime;
  /** @var string */
  public $method;
  /** @var string */
  public $target;
  /** @var string */
  public $user;
  /** @var string[] */
  public $warning;
  protected $collection_key = 'warning';
  protected $createVersionMetadataType = CreateVersionMetadataV1Alpha::class;
  protected $createVersionMetadataDataType = '';
  /** @param CreateVersionMetadataV1Alpha */
  public function setCreateVersionMetadata(CreateVersionMetadataV1Alpha $createVersionMetadata)
  {
    $this->createVersionMetadata = $createVersionMetadata;
  }
  /** @return CreateVersionMetadataV1Alpha */
  public function getCreateVersionMetadata()
  {
    return $this->createVersionMetadata;
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
  public function setEphemeralMessage($ephemeralMessage)
  {
    $this->ephemeralMessage = $ephemeralMessage;
  }
  /** @return string */
  public function getEphemeralMessage()
  {
    return $this->ephemeralMessage;
  }
  /** @param string */
  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
  }
  /** @return string */
  public function getInsertTime()
  {
    return $this->insertTime;
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
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return string */
  public function getUser()
  {
    return $this->user;
  }
  /** @param string[] */
  public function setWarning($warning)
  {
    $this->warning = $warning;
  }
  /** @return string[] */
  public function getWarning()
  {
    return $this->warning;
  }
}

class OperationMetadataV1Beta extends \Google\Collection
{
  /** @var CreateVersionMetadataV1Beta */
  public $createVersionMetadata;
  /** @var string */
  public $endTime;
  /** @var string */
  public $ephemeralMessage;
  /** @var string */
  public $insertTime;
  /** @var string */
  public $method;
  /** @var string */
  public $target;
  /** @var string */
  public $user;
  /** @var string[] */
  public $warning;
  protected $collection_key = 'warning';
  protected $createVersionMetadataType = CreateVersionMetadataV1Beta::class;
  protected $createVersionMetadataDataType = '';
  /** @param CreateVersionMetadataV1Beta */
  public function setCreateVersionMetadata(CreateVersionMetadataV1Beta $createVersionMetadata)
  {
    $this->createVersionMetadata = $createVersionMetadata;
  }
  /** @return CreateVersionMetadataV1Beta */
  public function getCreateVersionMetadata()
  {
    return $this->createVersionMetadata;
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
  public function setEphemeralMessage($ephemeralMessage)
  {
    $this->ephemeralMessage = $ephemeralMessage;
  }
  /** @return string */
  public function getEphemeralMessage()
  {
    return $this->ephemeralMessage;
  }
  /** @param string */
  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
  }
  /** @return string */
  public function getInsertTime()
  {
    return $this->insertTime;
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
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return string */
  public function getUser()
  {
    return $this->user;
  }
  /** @param string[] */
  public function setWarning($warning)
  {
    $this->warning = $warning;
  }
  /** @return string[] */
  public function getWarning()
  {
    return $this->warning;
  }
}

class ReadinessCheck extends \Google\Model
{
  /** @var string */
  public $appStartTimeout;
  /** @var string */
  public $checkInterval;
  /** @var string */
  public $failureThreshold;
  /** @var string */
  public $host;
  /** @var string */
  public $path;
  /** @var string */
  public $successThreshold;
  /** @var string */
  public $timeout;

  /** @param string */
  public function setAppStartTimeout($appStartTimeout)
  {
    $this->appStartTimeout = $appStartTimeout;
  }
  /** @return string */
  public function getAppStartTimeout()
  {
    return $this->appStartTimeout;
  }
  /** @param string */
  public function setCheckInterval($checkInterval)
  {
    $this->checkInterval = $checkInterval;
  }
  /** @return string */
  public function getCheckInterval()
  {
    return $this->checkInterval;
  }
  /** @param string */
  public function setFailureThreshold($failureThreshold)
  {
    $this->failureThreshold = $failureThreshold;
  }
  /** @return string */
  public function getFailureThreshold()
  {
    return $this->failureThreshold;
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
  public function setSuccessThreshold($successThreshold)
  {
    $this->successThreshold = $successThreshold;
  }
  /** @return string */
  public function getSuccessThreshold()
  {
    return $this->successThreshold;
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

class RepairApplicationRequest extends \Google\Model
{
}

class RequestUtilization extends \Google\Model
{
  /** @var int */
  public $targetConcurrentRequests;
  /** @var int */
  public $targetRequestCountPerSecond;

  /** @param int */
  public function setTargetConcurrentRequests($targetConcurrentRequests)
  {
    $this->targetConcurrentRequests = $targetConcurrentRequests;
  }
  /** @return int */
  public function getTargetConcurrentRequests()
  {
    return $this->targetConcurrentRequests;
  }
  /** @param int */
  public function setTargetRequestCountPerSecond($targetRequestCountPerSecond)
  {
    $this->targetRequestCountPerSecond = $targetRequestCountPerSecond;
  }
  /** @return int */
  public function getTargetRequestCountPerSecond()
  {
    return $this->targetRequestCountPerSecond;
  }
}

class ResourceRecord extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $rrdata;
  /** @var string */
  public $type;

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
  public function setRrdata($rrdata)
  {
    $this->rrdata = $rrdata;
  }
  /** @return string */
  public function getRrdata()
  {
    return $this->rrdata;
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

class Resources extends \Google\Collection
{
  public $cpu;
  public $diskGb;
  /** @var string */
  public $kmsKeyReference;
  public $memoryGb;
  /** @var Volume[] */
  public $volumes;
  protected $collection_key = 'volumes';
  protected $volumesType = Volume::class;
  protected $volumesDataType = 'array';
  public function setCpu($cpu)
  {
    $this->cpu = $cpu;
  }
  public function getCpu()
  {
    return $this->cpu;
  }
  public function setDiskGb($diskGb)
  {
    $this->diskGb = $diskGb;
  }
  public function getDiskGb()
  {
    return $this->diskGb;
  }
  /** @param string */
  public function setKmsKeyReference($kmsKeyReference)
  {
    $this->kmsKeyReference = $kmsKeyReference;
  }
  /** @return string */
  public function getKmsKeyReference()
  {
    return $this->kmsKeyReference;
  }
  public function setMemoryGb($memoryGb)
  {
    $this->memoryGb = $memoryGb;
  }
  public function getMemoryGb()
  {
    return $this->memoryGb;
  }
  /** @param Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
}

class ScriptHandler extends \Google\Model
{
  /** @var string */
  public $scriptPath;

  /** @param string */
  public function setScriptPath($scriptPath)
  {
    $this->scriptPath = $scriptPath;
  }
  /** @return string */
  public function getScriptPath()
  {
    return $this->scriptPath;
  }
}

class Service extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var NetworkSettings */
  public $networkSettings;
  /** @var TrafficSplit */
  public $split;
  protected $networkSettingsType = NetworkSettings::class;
  protected $networkSettingsDataType = '';
  protected $splitType = TrafficSplit::class;
  protected $splitDataType = '';
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
  /** @param NetworkSettings */
  public function setNetworkSettings(NetworkSettings $networkSettings)
  {
    $this->networkSettings = $networkSettings;
  }
  /** @return NetworkSettings */
  public function getNetworkSettings()
  {
    return $this->networkSettings;
  }
  /** @param TrafficSplit */
  public function setSplit(TrafficSplit $split)
  {
    $this->split = $split;
  }
  /** @return TrafficSplit */
  public function getSplit()
  {
    return $this->split;
  }
}

class SslSettings extends \Google\Model
{
  /** @var string */
  public $certificateId;
  /** @var string */
  public $pendingManagedCertificateId;
  /** @var string */
  public $sslManagementType;

  /** @param string */
  public function setCertificateId($certificateId)
  {
    $this->certificateId = $certificateId;
  }
  /** @return string */
  public function getCertificateId()
  {
    return $this->certificateId;
  }
  /** @param string */
  public function setPendingManagedCertificateId($pendingManagedCertificateId)
  {
    $this->pendingManagedCertificateId = $pendingManagedCertificateId;
  }
  /** @return string */
  public function getPendingManagedCertificateId()
  {
    return $this->pendingManagedCertificateId;
  }
  /** @param string */
  public function setSslManagementType($sslManagementType)
  {
    $this->sslManagementType = $sslManagementType;
  }
  /** @return string */
  public function getSslManagementType()
  {
    return $this->sslManagementType;
  }
}

class StandardSchedulerSettings extends \Google\Model
{
  /** @var int */
  public $maxInstances;
  /** @var int */
  public $minInstances;
  public $targetCpuUtilization;
  public $targetThroughputUtilization;

  /** @param int */
  public function setMaxInstances($maxInstances)
  {
    $this->maxInstances = $maxInstances;
  }
  /** @return int */
  public function getMaxInstances()
  {
    return $this->maxInstances;
  }
  /** @param int */
  public function setMinInstances($minInstances)
  {
    $this->minInstances = $minInstances;
  }
  /** @return int */
  public function getMinInstances()
  {
    return $this->minInstances;
  }
  public function setTargetCpuUtilization($targetCpuUtilization)
  {
    $this->targetCpuUtilization = $targetCpuUtilization;
  }
  public function getTargetCpuUtilization()
  {
    return $this->targetCpuUtilization;
  }
  public function setTargetThroughputUtilization($targetThroughputUtilization)
  {
    $this->targetThroughputUtilization = $targetThroughputUtilization;
  }
  public function getTargetThroughputUtilization()
  {
    return $this->targetThroughputUtilization;
  }
}

class StaticFilesHandler extends \Google\Model
{
  /** @var bool */
  public $applicationReadable;
  /** @var string */
  public $expiration;
  /** @var string[] */
  public $httpHeaders;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $path;
  /** @var bool */
  public $requireMatchingFile;
  /** @var string */
  public $uploadPathRegex;

  /** @param bool */
  public function setApplicationReadable($applicationReadable)
  {
    $this->applicationReadable = $applicationReadable;
  }
  /** @return bool */
  public function getApplicationReadable()
  {
    return $this->applicationReadable;
  }
  /** @param string */
  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
  }
  /** @return string */
  public function getExpiration()
  {
    return $this->expiration;
  }
  /** @param string[] */
  public function setHttpHeaders($httpHeaders)
  {
    $this->httpHeaders = $httpHeaders;
  }
  /** @return string[] */
  public function getHttpHeaders()
  {
    return $this->httpHeaders;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
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
  /** @param bool */
  public function setRequireMatchingFile($requireMatchingFile)
  {
    $this->requireMatchingFile = $requireMatchingFile;
  }
  /** @return bool */
  public function getRequireMatchingFile()
  {
    return $this->requireMatchingFile;
  }
  /** @param string */
  public function setUploadPathRegex($uploadPathRegex)
  {
    $this->uploadPathRegex = $uploadPathRegex;
  }
  /** @return string */
  public function getUploadPathRegex()
  {
    return $this->uploadPathRegex;
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

class TrafficSplit extends \Google\Model
{
  public $allocations;
  /** @var string */
  public $shardBy;

  public function setAllocations($allocations)
  {
    $this->allocations = $allocations;
  }
  public function getAllocations()
  {
    return $this->allocations;
  }
  /** @param string */
  public function setShardBy($shardBy)
  {
    $this->shardBy = $shardBy;
  }
  /** @return string */
  public function getShardBy()
  {
    return $this->shardBy;
  }
}

class UrlDispatchRule extends \Google\Model
{
  /** @var string */
  public $domain;
  /** @var string */
  public $path;
  /** @var string */
  public $service;

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

class UrlMap extends \Google\Model
{
  /** @var ApiEndpointHandler */
  public $apiEndpoint;
  /** @var string */
  public $authFailAction;
  /** @var string */
  public $login;
  /** @var string */
  public $redirectHttpResponseCode;
  /** @var ScriptHandler */
  public $script;
  /** @var string */
  public $securityLevel;
  /** @var StaticFilesHandler */
  public $staticFiles;
  /** @var string */
  public $urlRegex;
  protected $apiEndpointType = ApiEndpointHandler::class;
  protected $apiEndpointDataType = '';
  protected $scriptType = ScriptHandler::class;
  protected $scriptDataType = '';
  protected $staticFilesType = StaticFilesHandler::class;
  protected $staticFilesDataType = '';
  /** @param ApiEndpointHandler */
  public function setApiEndpoint(ApiEndpointHandler $apiEndpoint)
  {
    $this->apiEndpoint = $apiEndpoint;
  }
  /** @return ApiEndpointHandler */
  public function getApiEndpoint()
  {
    return $this->apiEndpoint;
  }
  /** @param string */
  public function setAuthFailAction($authFailAction)
  {
    $this->authFailAction = $authFailAction;
  }
  /** @return string */
  public function getAuthFailAction()
  {
    return $this->authFailAction;
  }
  /** @param string */
  public function setLogin($login)
  {
    $this->login = $login;
  }
  /** @return string */
  public function getLogin()
  {
    return $this->login;
  }
  /** @param string */
  public function setRedirectHttpResponseCode($redirectHttpResponseCode)
  {
    $this->redirectHttpResponseCode = $redirectHttpResponseCode;
  }
  /** @return string */
  public function getRedirectHttpResponseCode()
  {
    return $this->redirectHttpResponseCode;
  }
  /** @param ScriptHandler */
  public function setScript(ScriptHandler $script)
  {
    $this->script = $script;
  }
  /** @return ScriptHandler */
  public function getScript()
  {
    return $this->script;
  }
  /** @param string */
  public function setSecurityLevel($securityLevel)
  {
    $this->securityLevel = $securityLevel;
  }
  /** @return string */
  public function getSecurityLevel()
  {
    return $this->securityLevel;
  }
  /** @param StaticFilesHandler */
  public function setStaticFiles(StaticFilesHandler $staticFiles)
  {
    $this->staticFiles = $staticFiles;
  }
  /** @return StaticFilesHandler */
  public function getStaticFiles()
  {
    return $this->staticFiles;
  }
  /** @param string */
  public function setUrlRegex($urlRegex)
  {
    $this->urlRegex = $urlRegex;
  }
  /** @return string */
  public function getUrlRegex()
  {
    return $this->urlRegex;
  }
}

class Version extends \Google\Collection
{
  /** @var ApiConfigHandler */
  public $apiConfig;
  /** @var bool */
  public $appEngineApis;
  /** @var AutomaticScaling */
  public $automaticScaling;
  /** @var BasicScaling */
  public $basicScaling;
  /** @var string[] */
  public $betaSettings;
  /** @var string[] */
  public $buildEnvVariables;
  /** @var string */
  public $createTime;
  /** @var string */
  public $createdBy;
  /** @var string */
  public $defaultExpiration;
  /** @var Deployment */
  public $deployment;
  /** @var string */
  public $diskUsageBytes;
  /** @var EndpointsApiService */
  public $endpointsApiService;
  /** @var Entrypoint */
  public $entrypoint;
  /** @var string */
  public $env;
  /** @var string[] */
  public $envVariables;
  /** @var ErrorHandler[] */
  public $errorHandlers;
  /** @var UrlMap[] */
  public $handlers;
  /** @var HealthCheck */
  public $healthCheck;
  /** @var string */
  public $id;
  /** @var string[] */
  public $inboundServices;
  /** @var string */
  public $instanceClass;
  /** @var Library[] */
  public $libraries;
  /** @var LivenessCheck */
  public $livenessCheck;
  /** @var ManualScaling */
  public $manualScaling;
  /** @var string */
  public $name;
  /** @var Network */
  public $network;
  /** @var string */
  public $nobuildFilesRegex;
  /** @var ReadinessCheck */
  public $readinessCheck;
  /** @var Resources */
  public $resources;
  /** @var string */
  public $runtime;
  /** @var string */
  public $runtimeApiVersion;
  /** @var string */
  public $runtimeChannel;
  /** @var string */
  public $runtimeMainExecutablePath;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $servingStatus;
  /** @var bool */
  public $threadsafe;
  /** @var string */
  public $versionUrl;
  /** @var bool */
  public $vm;
  /** @var VpcAccessConnector */
  public $vpcAccessConnector;
  /** @var string[] */
  public $zones;
  protected $collection_key = 'zones';
  protected $apiConfigType = ApiConfigHandler::class;
  protected $apiConfigDataType = '';
  protected $automaticScalingType = AutomaticScaling::class;
  protected $automaticScalingDataType = '';
  protected $basicScalingType = BasicScaling::class;
  protected $basicScalingDataType = '';
  protected $deploymentType = Deployment::class;
  protected $deploymentDataType = '';
  protected $endpointsApiServiceType = EndpointsApiService::class;
  protected $endpointsApiServiceDataType = '';
  protected $entrypointType = Entrypoint::class;
  protected $entrypointDataType = '';
  protected $errorHandlersType = ErrorHandler::class;
  protected $errorHandlersDataType = 'array';
  protected $handlersType = UrlMap::class;
  protected $handlersDataType = 'array';
  protected $healthCheckType = HealthCheck::class;
  protected $healthCheckDataType = '';
  protected $librariesType = Library::class;
  protected $librariesDataType = 'array';
  protected $livenessCheckType = LivenessCheck::class;
  protected $livenessCheckDataType = '';
  protected $manualScalingType = ManualScaling::class;
  protected $manualScalingDataType = '';
  protected $networkType = Network::class;
  protected $networkDataType = '';
  protected $readinessCheckType = ReadinessCheck::class;
  protected $readinessCheckDataType = '';
  protected $resourcesType = Resources::class;
  protected $resourcesDataType = '';
  protected $vpcAccessConnectorType = VpcAccessConnector::class;
  protected $vpcAccessConnectorDataType = '';
  /** @param ApiConfigHandler */
  public function setApiConfig(ApiConfigHandler $apiConfig)
  {
    $this->apiConfig = $apiConfig;
  }
  /** @return ApiConfigHandler */
  public function getApiConfig()
  {
    return $this->apiConfig;
  }
  /** @param bool */
  public function setAppEngineApis($appEngineApis)
  {
    $this->appEngineApis = $appEngineApis;
  }
  /** @return bool */
  public function getAppEngineApis()
  {
    return $this->appEngineApis;
  }
  /** @param AutomaticScaling */
  public function setAutomaticScaling(AutomaticScaling $automaticScaling)
  {
    $this->automaticScaling = $automaticScaling;
  }
  /** @return AutomaticScaling */
  public function getAutomaticScaling()
  {
    return $this->automaticScaling;
  }
  /** @param BasicScaling */
  public function setBasicScaling(BasicScaling $basicScaling)
  {
    $this->basicScaling = $basicScaling;
  }
  /** @return BasicScaling */
  public function getBasicScaling()
  {
    return $this->basicScaling;
  }
  /** @param string[] */
  public function setBetaSettings($betaSettings)
  {
    $this->betaSettings = $betaSettings;
  }
  /** @return string[] */
  public function getBetaSettings()
  {
    return $this->betaSettings;
  }
  /** @param string[] */
  public function setBuildEnvVariables($buildEnvVariables)
  {
    $this->buildEnvVariables = $buildEnvVariables;
  }
  /** @return string[] */
  public function getBuildEnvVariables()
  {
    return $this->buildEnvVariables;
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
  public function setCreatedBy($createdBy)
  {
    $this->createdBy = $createdBy;
  }
  /** @return string */
  public function getCreatedBy()
  {
    return $this->createdBy;
  }
  /** @param string */
  public function setDefaultExpiration($defaultExpiration)
  {
    $this->defaultExpiration = $defaultExpiration;
  }
  /** @return string */
  public function getDefaultExpiration()
  {
    return $this->defaultExpiration;
  }
  /** @param Deployment */
  public function setDeployment(Deployment $deployment)
  {
    $this->deployment = $deployment;
  }
  /** @return Deployment */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /** @param string */
  public function setDiskUsageBytes($diskUsageBytes)
  {
    $this->diskUsageBytes = $diskUsageBytes;
  }
  /** @return string */
  public function getDiskUsageBytes()
  {
    return $this->diskUsageBytes;
  }
  /** @param EndpointsApiService */
  public function setEndpointsApiService(EndpointsApiService $endpointsApiService)
  {
    $this->endpointsApiService = $endpointsApiService;
  }
  /** @return EndpointsApiService */
  public function getEndpointsApiService()
  {
    return $this->endpointsApiService;
  }
  /** @param Entrypoint */
  public function setEntrypoint(Entrypoint $entrypoint)
  {
    $this->entrypoint = $entrypoint;
  }
  /** @return Entrypoint */
  public function getEntrypoint()
  {
    return $this->entrypoint;
  }
  /** @param string */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /** @return string */
  public function getEnv()
  {
    return $this->env;
  }
  /** @param string[] */
  public function setEnvVariables($envVariables)
  {
    $this->envVariables = $envVariables;
  }
  /** @return string[] */
  public function getEnvVariables()
  {
    return $this->envVariables;
  }
  /** @param ErrorHandler[] */
  public function setErrorHandlers($errorHandlers)
  {
    $this->errorHandlers = $errorHandlers;
  }
  /** @return ErrorHandler[] */
  public function getErrorHandlers()
  {
    return $this->errorHandlers;
  }
  /** @param UrlMap[] */
  public function setHandlers($handlers)
  {
    $this->handlers = $handlers;
  }
  /** @return UrlMap[] */
  public function getHandlers()
  {
    return $this->handlers;
  }
  /** @param HealthCheck */
  public function setHealthCheck(HealthCheck $healthCheck)
  {
    $this->healthCheck = $healthCheck;
  }
  /** @return HealthCheck */
  public function getHealthCheck()
  {
    return $this->healthCheck;
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
  /** @param string[] */
  public function setInboundServices($inboundServices)
  {
    $this->inboundServices = $inboundServices;
  }
  /** @return string[] */
  public function getInboundServices()
  {
    return $this->inboundServices;
  }
  /** @param string */
  public function setInstanceClass($instanceClass)
  {
    $this->instanceClass = $instanceClass;
  }
  /** @return string */
  public function getInstanceClass()
  {
    return $this->instanceClass;
  }
  /** @param Library[] */
  public function setLibraries($libraries)
  {
    $this->libraries = $libraries;
  }
  /** @return Library[] */
  public function getLibraries()
  {
    return $this->libraries;
  }
  /** @param LivenessCheck */
  public function setLivenessCheck(LivenessCheck $livenessCheck)
  {
    $this->livenessCheck = $livenessCheck;
  }
  /** @return LivenessCheck */
  public function getLivenessCheck()
  {
    return $this->livenessCheck;
  }
  /** @param ManualScaling */
  public function setManualScaling(ManualScaling $manualScaling)
  {
    $this->manualScaling = $manualScaling;
  }
  /** @return ManualScaling */
  public function getManualScaling()
  {
    return $this->manualScaling;
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
  /** @param Network */
  public function setNetwork(Network $network)
  {
    $this->network = $network;
  }
  /** @return Network */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param string */
  public function setNobuildFilesRegex($nobuildFilesRegex)
  {
    $this->nobuildFilesRegex = $nobuildFilesRegex;
  }
  /** @return string */
  public function getNobuildFilesRegex()
  {
    return $this->nobuildFilesRegex;
  }
  /** @param ReadinessCheck */
  public function setReadinessCheck(ReadinessCheck $readinessCheck)
  {
    $this->readinessCheck = $readinessCheck;
  }
  /** @return ReadinessCheck */
  public function getReadinessCheck()
  {
    return $this->readinessCheck;
  }
  /** @param Resources */
  public function setResources(Resources $resources)
  {
    $this->resources = $resources;
  }
  /** @return Resources */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param string */
  public function setRuntime($runtime)
  {
    $this->runtime = $runtime;
  }
  /** @return string */
  public function getRuntime()
  {
    return $this->runtime;
  }
  /** @param string */
  public function setRuntimeApiVersion($runtimeApiVersion)
  {
    $this->runtimeApiVersion = $runtimeApiVersion;
  }
  /** @return string */
  public function getRuntimeApiVersion()
  {
    return $this->runtimeApiVersion;
  }
  /** @param string */
  public function setRuntimeChannel($runtimeChannel)
  {
    $this->runtimeChannel = $runtimeChannel;
  }
  /** @return string */
  public function getRuntimeChannel()
  {
    return $this->runtimeChannel;
  }
  /** @param string */
  public function setRuntimeMainExecutablePath($runtimeMainExecutablePath)
  {
    $this->runtimeMainExecutablePath = $runtimeMainExecutablePath;
  }
  /** @return string */
  public function getRuntimeMainExecutablePath()
  {
    return $this->runtimeMainExecutablePath;
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
  public function setServingStatus($servingStatus)
  {
    $this->servingStatus = $servingStatus;
  }
  /** @return string */
  public function getServingStatus()
  {
    return $this->servingStatus;
  }
  /** @param bool */
  public function setThreadsafe($threadsafe)
  {
    $this->threadsafe = $threadsafe;
  }
  /** @return bool */
  public function getThreadsafe()
  {
    return $this->threadsafe;
  }
  /** @param string */
  public function setVersionUrl($versionUrl)
  {
    $this->versionUrl = $versionUrl;
  }
  /** @return string */
  public function getVersionUrl()
  {
    return $this->versionUrl;
  }
  /** @param bool */
  public function setVm($vm)
  {
    $this->vm = $vm;
  }
  /** @return bool */
  public function getVm()
  {
    return $this->vm;
  }
  /** @param VpcAccessConnector */
  public function setVpcAccessConnector(VpcAccessConnector $vpcAccessConnector)
  {
    $this->vpcAccessConnector = $vpcAccessConnector;
  }
  /** @return VpcAccessConnector */
  public function getVpcAccessConnector()
  {
    return $this->vpcAccessConnector;
  }
  /** @param string[] */
  public function setZones($zones)
  {
    $this->zones = $zones;
  }
  /** @return string[] */
  public function getZones()
  {
    return $this->zones;
  }
}

class Volume extends \Google\Model
{
  /** @var string */
  public $name;
  public $sizeGb;
  /** @var string */
  public $volumeType;

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
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
  /** @param string */
  public function setVolumeType($volumeType)
  {
    $this->volumeType = $volumeType;
  }
  /** @return string */
  public function getVolumeType()
  {
    return $this->volumeType;
  }
}

class VpcAccessConnector extends \Google\Model
{
  /** @var string */
  public $egressSetting;
  /** @var string */
  public $name;

  /** @param string */
  public function setEgressSetting($egressSetting)
  {
    $this->egressSetting = $egressSetting;
  }
  /** @return string */
  public function getEgressSetting()
  {
    return $this->egressSetting;
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

class ZipInfo extends \Google\Model
{
  /** @var int */
  public $filesCount;
  /** @var string */
  public $sourceUrl;

  /** @param int */
  public function setFilesCount($filesCount)
  {
    $this->filesCount = $filesCount;
  }
  /** @return int */
  public function getFilesCount()
  {
    return $this->filesCount;
  }
  /** @param string */
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  /** @return string */
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApiConfigHandler::class, 'Google_Service_Appengine_ApiConfigHandler');
class_alias(ApiEndpointHandler::class, 'Google_Service_Appengine_ApiEndpointHandler');
class_alias(AppengineEmpty::class, 'Google_Service_Appengine_AppengineEmpty');
class_alias(Application::class, 'Google_Service_Appengine_Application');
class_alias(AuthorizedCertificate::class, 'Google_Service_Appengine_AuthorizedCertificate');
class_alias(AuthorizedDomain::class, 'Google_Service_Appengine_AuthorizedDomain');
class_alias(AutomaticScaling::class, 'Google_Service_Appengine_AutomaticScaling');
class_alias(BasicScaling::class, 'Google_Service_Appengine_BasicScaling');
class_alias(BatchUpdateIngressRulesRequest::class, 'Google_Service_Appengine_BatchUpdateIngressRulesRequest');
class_alias(BatchUpdateIngressRulesResponse::class, 'Google_Service_Appengine_BatchUpdateIngressRulesResponse');
class_alias(CertificateRawData::class, 'Google_Service_Appengine_CertificateRawData');
class_alias(CloudBuildOptions::class, 'Google_Service_Appengine_CloudBuildOptions');
class_alias(ContainerInfo::class, 'Google_Service_Appengine_ContainerInfo');
class_alias(CpuUtilization::class, 'Google_Service_Appengine_CpuUtilization');
class_alias(CreateVersionMetadataV1::class, 'Google_Service_Appengine_CreateVersionMetadataV1');
class_alias(CreateVersionMetadataV1Alpha::class, 'Google_Service_Appengine_CreateVersionMetadataV1Alpha');
class_alias(CreateVersionMetadataV1Beta::class, 'Google_Service_Appengine_CreateVersionMetadataV1Beta');
class_alias(DebugInstanceRequest::class, 'Google_Service_Appengine_DebugInstanceRequest');
class_alias(Deployment::class, 'Google_Service_Appengine_Deployment');
class_alias(DiskUtilization::class, 'Google_Service_Appengine_DiskUtilization');
class_alias(DomainMapping::class, 'Google_Service_Appengine_DomainMapping');
class_alias(EndpointsApiService::class, 'Google_Service_Appengine_EndpointsApiService');
class_alias(Entrypoint::class, 'Google_Service_Appengine_Entrypoint');
class_alias(ErrorHandler::class, 'Google_Service_Appengine_ErrorHandler');
class_alias(FeatureSettings::class, 'Google_Service_Appengine_FeatureSettings');
class_alias(FileInfo::class, 'Google_Service_Appengine_FileInfo');
class_alias(FirewallRule::class, 'Google_Service_Appengine_FirewallRule');
class_alias(GoogleAppengineV1betaLocationMetadata::class, 'Google_Service_Appengine_GoogleAppengineV1betaLocationMetadata');
class_alias(HealthCheck::class, 'Google_Service_Appengine_HealthCheck');
class_alias(IdentityAwareProxy::class, 'Google_Service_Appengine_IdentityAwareProxy');
class_alias(Instance::class, 'Google_Service_Appengine_Instance');
class_alias(Library::class, 'Google_Service_Appengine_Library');
class_alias(ListAuthorizedCertificatesResponse::class, 'Google_Service_Appengine_ListAuthorizedCertificatesResponse');
class_alias(ListAuthorizedDomainsResponse::class, 'Google_Service_Appengine_ListAuthorizedDomainsResponse');
class_alias(ListDomainMappingsResponse::class, 'Google_Service_Appengine_ListDomainMappingsResponse');
class_alias(ListIngressRulesResponse::class, 'Google_Service_Appengine_ListIngressRulesResponse');
class_alias(ListInstancesResponse::class, 'Google_Service_Appengine_ListInstancesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_Appengine_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Appengine_ListOperationsResponse');
class_alias(ListServicesResponse::class, 'Google_Service_Appengine_ListServicesResponse');
class_alias(ListVersionsResponse::class, 'Google_Service_Appengine_ListVersionsResponse');
class_alias(LivenessCheck::class, 'Google_Service_Appengine_LivenessCheck');
class_alias(Location::class, 'Google_Service_Appengine_Location');
class_alias(LocationMetadata::class, 'Google_Service_Appengine_LocationMetadata');
class_alias(ManagedCertificate::class, 'Google_Service_Appengine_ManagedCertificate');
class_alias(ManualScaling::class, 'Google_Service_Appengine_ManualScaling');
class_alias(Network::class, 'Google_Service_Appengine_Network');
class_alias(NetworkSettings::class, 'Google_Service_Appengine_NetworkSettings');
class_alias(NetworkUtilization::class, 'Google_Service_Appengine_NetworkUtilization');
class_alias(Operation::class, 'Google_Service_Appengine_Operation');
class_alias(OperationMetadataV1::class, 'Google_Service_Appengine_OperationMetadataV1');
class_alias(OperationMetadataV1Alpha::class, 'Google_Service_Appengine_OperationMetadataV1Alpha');
class_alias(OperationMetadataV1Beta::class, 'Google_Service_Appengine_OperationMetadataV1Beta');
class_alias(ReadinessCheck::class, 'Google_Service_Appengine_ReadinessCheck');
class_alias(RepairApplicationRequest::class, 'Google_Service_Appengine_RepairApplicationRequest');
class_alias(RequestUtilization::class, 'Google_Service_Appengine_RequestUtilization');
class_alias(ResourceRecord::class, 'Google_Service_Appengine_ResourceRecord');
class_alias(Resources::class, 'Google_Service_Appengine_Resources');
class_alias(ScriptHandler::class, 'Google_Service_Appengine_ScriptHandler');
class_alias(Service::class, 'Google_Service_Appengine_Service');
class_alias(SslSettings::class, 'Google_Service_Appengine_SslSettings');
class_alias(StandardSchedulerSettings::class, 'Google_Service_Appengine_StandardSchedulerSettings');
class_alias(StaticFilesHandler::class, 'Google_Service_Appengine_StaticFilesHandler');
class_alias(Status::class, 'Google_Service_Appengine_Status');
class_alias(TrafficSplit::class, 'Google_Service_Appengine_TrafficSplit');
class_alias(UrlDispatchRule::class, 'Google_Service_Appengine_UrlDispatchRule');
class_alias(UrlMap::class, 'Google_Service_Appengine_UrlMap');
class_alias(Version::class, 'Google_Service_Appengine_Version');
class_alias(Volume::class, 'Google_Service_Appengine_Volume');
class_alias(VpcAccessConnector::class, 'Google_Service_Appengine_VpcAccessConnector');
class_alias(ZipInfo::class, 'Google_Service_Appengine_ZipInfo');
