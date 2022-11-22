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

namespace Google\Service\CloudComposer;

class AllowedIpRange extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $value;

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

class CheckUpgradeResponse extends \Google\Model
{
  /** @var string */
  public $buildLogUri;
  /** @var string */
  public $containsPypiModulesConflict;
  /** @var string */
  public $imageVersion;
  /** @var string */
  public $pypiConflictBuildLogExtract;
  /** @var string[] */
  public $pypiDependencies;

  /** @param string */
  public function setBuildLogUri($buildLogUri)
  {
    $this->buildLogUri = $buildLogUri;
  }
  /** @return string */
  public function getBuildLogUri()
  {
    return $this->buildLogUri;
  }
  /** @param string */
  public function setContainsPypiModulesConflict($containsPypiModulesConflict)
  {
    $this->containsPypiModulesConflict = $containsPypiModulesConflict;
  }
  /** @return string */
  public function getContainsPypiModulesConflict()
  {
    return $this->containsPypiModulesConflict;
  }
  /** @param string */
  public function setImageVersion($imageVersion)
  {
    $this->imageVersion = $imageVersion;
  }
  /** @return string */
  public function getImageVersion()
  {
    return $this->imageVersion;
  }
  /** @param string */
  public function setPypiConflictBuildLogExtract($pypiConflictBuildLogExtract)
  {
    $this->pypiConflictBuildLogExtract = $pypiConflictBuildLogExtract;
  }
  /** @return string */
  public function getPypiConflictBuildLogExtract()
  {
    return $this->pypiConflictBuildLogExtract;
  }
  /** @param string[] */
  public function setPypiDependencies($pypiDependencies)
  {
    $this->pypiDependencies = $pypiDependencies;
  }
  /** @return string[] */
  public function getPypiDependencies()
  {
    return $this->pypiDependencies;
  }
}

class CidrBlock extends \Google\Model
{
  /** @var string */
  public $cidrBlock;
  /** @var string */
  public $displayName;

  /** @param string */
  public function setCidrBlock($cidrBlock)
  {
    $this->cidrBlock = $cidrBlock;
  }
  /** @return string */
  public function getCidrBlock()
  {
    return $this->cidrBlock;
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
}

class ComposerEmpty extends \Google\Model
{
}

class DatabaseConfig extends \Google\Model
{
  /** @var string */
  public $machineType;

  /** @param string */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
  }
}

class Date extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $month;
  /** @var int */
  public $year;

  /** @param int */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return int */
  public function getDay()
  {
    return $this->day;
  }
  /** @param int */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /** @return int */
  public function getMonth()
  {
    return $this->month;
  }
  /** @param int */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /** @return int */
  public function getYear()
  {
    return $this->year;
  }
}

class EncryptionConfig extends \Google\Model
{
  /** @var string */
  public $kmsKeyName;

  /** @param string */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /** @return string */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
  }
}

class Environment extends \Google\Model
{
  /** @var EnvironmentConfig */
  public $config;
  /** @var string */
  public $createTime;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $uuid;
  protected $configType = EnvironmentConfig::class;
  protected $configDataType = '';
  /** @param EnvironmentConfig */
  public function setConfig(EnvironmentConfig $config)
  {
    $this->config = $config;
  }
  /** @return EnvironmentConfig */
  public function getConfig()
  {
    return $this->config;
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
  /** @param string */
  public function setUuid($uuid)
  {
    $this->uuid = $uuid;
  }
  /** @return string */
  public function getUuid()
  {
    return $this->uuid;
  }
}

class EnvironmentConfig extends \Google\Model
{
  /** @var string */
  public $airflowUri;
  /** @var string */
  public $dagGcsPrefix;
  /** @var DatabaseConfig */
  public $databaseConfig;
  /** @var EncryptionConfig */
  public $encryptionConfig;
  /** @var string */
  public $environmentSize;
  /** @var string */
  public $gkeCluster;
  /** @var MaintenanceWindow */
  public $maintenanceWindow;
  /** @var MasterAuthorizedNetworksConfig */
  public $masterAuthorizedNetworksConfig;
  /** @var NodeConfig */
  public $nodeConfig;
  /** @var int */
  public $nodeCount;
  /** @var PrivateEnvironmentConfig */
  public $privateEnvironmentConfig;
  /** @var SoftwareConfig */
  public $softwareConfig;
  /** @var WebServerConfig */
  public $webServerConfig;
  /** @var WebServerNetworkAccessControl */
  public $webServerNetworkAccessControl;
  /** @var WorkloadsConfig */
  public $workloadsConfig;
  protected $databaseConfigType = DatabaseConfig::class;
  protected $databaseConfigDataType = '';
  protected $encryptionConfigType = EncryptionConfig::class;
  protected $encryptionConfigDataType = '';
  protected $maintenanceWindowType = MaintenanceWindow::class;
  protected $maintenanceWindowDataType = '';
  protected $masterAuthorizedNetworksConfigType = MasterAuthorizedNetworksConfig::class;
  protected $masterAuthorizedNetworksConfigDataType = '';
  protected $nodeConfigType = NodeConfig::class;
  protected $nodeConfigDataType = '';
  protected $privateEnvironmentConfigType = PrivateEnvironmentConfig::class;
  protected $privateEnvironmentConfigDataType = '';
  protected $softwareConfigType = SoftwareConfig::class;
  protected $softwareConfigDataType = '';
  protected $webServerConfigType = WebServerConfig::class;
  protected $webServerConfigDataType = '';
  protected $webServerNetworkAccessControlType = WebServerNetworkAccessControl::class;
  protected $webServerNetworkAccessControlDataType = '';
  protected $workloadsConfigType = WorkloadsConfig::class;
  protected $workloadsConfigDataType = '';
  /** @param string */
  public function setAirflowUri($airflowUri)
  {
    $this->airflowUri = $airflowUri;
  }
  /** @return string */
  public function getAirflowUri()
  {
    return $this->airflowUri;
  }
  /** @param string */
  public function setDagGcsPrefix($dagGcsPrefix)
  {
    $this->dagGcsPrefix = $dagGcsPrefix;
  }
  /** @return string */
  public function getDagGcsPrefix()
  {
    return $this->dagGcsPrefix;
  }
  /** @param DatabaseConfig */
  public function setDatabaseConfig(DatabaseConfig $databaseConfig)
  {
    $this->databaseConfig = $databaseConfig;
  }
  /** @return DatabaseConfig */
  public function getDatabaseConfig()
  {
    return $this->databaseConfig;
  }
  /** @param EncryptionConfig */
  public function setEncryptionConfig(EncryptionConfig $encryptionConfig)
  {
    $this->encryptionConfig = $encryptionConfig;
  }
  /** @return EncryptionConfig */
  public function getEncryptionConfig()
  {
    return $this->encryptionConfig;
  }
  /** @param string */
  public function setEnvironmentSize($environmentSize)
  {
    $this->environmentSize = $environmentSize;
  }
  /** @return string */
  public function getEnvironmentSize()
  {
    return $this->environmentSize;
  }
  /** @param string */
  public function setGkeCluster($gkeCluster)
  {
    $this->gkeCluster = $gkeCluster;
  }
  /** @return string */
  public function getGkeCluster()
  {
    return $this->gkeCluster;
  }
  /** @param MaintenanceWindow */
  public function setMaintenanceWindow(MaintenanceWindow $maintenanceWindow)
  {
    $this->maintenanceWindow = $maintenanceWindow;
  }
  /** @return MaintenanceWindow */
  public function getMaintenanceWindow()
  {
    return $this->maintenanceWindow;
  }
  /** @param MasterAuthorizedNetworksConfig */
  public function setMasterAuthorizedNetworksConfig(MasterAuthorizedNetworksConfig $masterAuthorizedNetworksConfig)
  {
    $this->masterAuthorizedNetworksConfig = $masterAuthorizedNetworksConfig;
  }
  /** @return MasterAuthorizedNetworksConfig */
  public function getMasterAuthorizedNetworksConfig()
  {
    return $this->masterAuthorizedNetworksConfig;
  }
  /** @param NodeConfig */
  public function setNodeConfig(NodeConfig $nodeConfig)
  {
    $this->nodeConfig = $nodeConfig;
  }
  /** @return NodeConfig */
  public function getNodeConfig()
  {
    return $this->nodeConfig;
  }
  /** @param int */
  public function setNodeCount($nodeCount)
  {
    $this->nodeCount = $nodeCount;
  }
  /** @return int */
  public function getNodeCount()
  {
    return $this->nodeCount;
  }
  /** @param PrivateEnvironmentConfig */
  public function setPrivateEnvironmentConfig(PrivateEnvironmentConfig $privateEnvironmentConfig)
  {
    $this->privateEnvironmentConfig = $privateEnvironmentConfig;
  }
  /** @return PrivateEnvironmentConfig */
  public function getPrivateEnvironmentConfig()
  {
    return $this->privateEnvironmentConfig;
  }
  /** @param SoftwareConfig */
  public function setSoftwareConfig(SoftwareConfig $softwareConfig)
  {
    $this->softwareConfig = $softwareConfig;
  }
  /** @return SoftwareConfig */
  public function getSoftwareConfig()
  {
    return $this->softwareConfig;
  }
  /** @param WebServerConfig */
  public function setWebServerConfig(WebServerConfig $webServerConfig)
  {
    $this->webServerConfig = $webServerConfig;
  }
  /** @return WebServerConfig */
  public function getWebServerConfig()
  {
    return $this->webServerConfig;
  }
  /** @param WebServerNetworkAccessControl */
  public function setWebServerNetworkAccessControl(WebServerNetworkAccessControl $webServerNetworkAccessControl)
  {
    $this->webServerNetworkAccessControl = $webServerNetworkAccessControl;
  }
  /** @return WebServerNetworkAccessControl */
  public function getWebServerNetworkAccessControl()
  {
    return $this->webServerNetworkAccessControl;
  }
  /** @param WorkloadsConfig */
  public function setWorkloadsConfig(WorkloadsConfig $workloadsConfig)
  {
    $this->workloadsConfig = $workloadsConfig;
  }
  /** @return WorkloadsConfig */
  public function getWorkloadsConfig()
  {
    return $this->workloadsConfig;
  }
}

class IPAllocationPolicy extends \Google\Model
{
  /** @var string */
  public $clusterIpv4CidrBlock;
  /** @var string */
  public $clusterSecondaryRangeName;
  /** @var string */
  public $servicesIpv4CidrBlock;
  /** @var string */
  public $servicesSecondaryRangeName;
  /** @var bool */
  public $useIpAliases;

  /** @param string */
  public function setClusterIpv4CidrBlock($clusterIpv4CidrBlock)
  {
    $this->clusterIpv4CidrBlock = $clusterIpv4CidrBlock;
  }
  /** @return string */
  public function getClusterIpv4CidrBlock()
  {
    return $this->clusterIpv4CidrBlock;
  }
  /** @param string */
  public function setClusterSecondaryRangeName($clusterSecondaryRangeName)
  {
    $this->clusterSecondaryRangeName = $clusterSecondaryRangeName;
  }
  /** @return string */
  public function getClusterSecondaryRangeName()
  {
    return $this->clusterSecondaryRangeName;
  }
  /** @param string */
  public function setServicesIpv4CidrBlock($servicesIpv4CidrBlock)
  {
    $this->servicesIpv4CidrBlock = $servicesIpv4CidrBlock;
  }
  /** @return string */
  public function getServicesIpv4CidrBlock()
  {
    return $this->servicesIpv4CidrBlock;
  }
  /** @param string */
  public function setServicesSecondaryRangeName($servicesSecondaryRangeName)
  {
    $this->servicesSecondaryRangeName = $servicesSecondaryRangeName;
  }
  /** @return string */
  public function getServicesSecondaryRangeName()
  {
    return $this->servicesSecondaryRangeName;
  }
  /** @param bool */
  public function setUseIpAliases($useIpAliases)
  {
    $this->useIpAliases = $useIpAliases;
  }
  /** @return bool */
  public function getUseIpAliases()
  {
    return $this->useIpAliases;
  }
}

class ImageVersion extends \Google\Collection
{
  /** @var bool */
  public $creationDisabled;
  /** @var string */
  public $imageVersionId;
  /** @var bool */
  public $isDefault;
  /** @var Date */
  public $releaseDate;
  /** @var string[] */
  public $supportedPythonVersions;
  /** @var bool */
  public $upgradeDisabled;
  protected $collection_key = 'supportedPythonVersions';
  protected $releaseDateType = Date::class;
  protected $releaseDateDataType = '';
  /** @param bool */
  public function setCreationDisabled($creationDisabled)
  {
    $this->creationDisabled = $creationDisabled;
  }
  /** @return bool */
  public function getCreationDisabled()
  {
    return $this->creationDisabled;
  }
  /** @param string */
  public function setImageVersionId($imageVersionId)
  {
    $this->imageVersionId = $imageVersionId;
  }
  /** @return string */
  public function getImageVersionId()
  {
    return $this->imageVersionId;
  }
  /** @param bool */
  public function setIsDefault($isDefault)
  {
    $this->isDefault = $isDefault;
  }
  /** @return bool */
  public function getIsDefault()
  {
    return $this->isDefault;
  }
  /** @param Date */
  public function setReleaseDate(Date $releaseDate)
  {
    $this->releaseDate = $releaseDate;
  }
  /** @return Date */
  public function getReleaseDate()
  {
    return $this->releaseDate;
  }
  /** @param string[] */
  public function setSupportedPythonVersions($supportedPythonVersions)
  {
    $this->supportedPythonVersions = $supportedPythonVersions;
  }
  /** @return string[] */
  public function getSupportedPythonVersions()
  {
    return $this->supportedPythonVersions;
  }
  /** @param bool */
  public function setUpgradeDisabled($upgradeDisabled)
  {
    $this->upgradeDisabled = $upgradeDisabled;
  }
  /** @return bool */
  public function getUpgradeDisabled()
  {
    return $this->upgradeDisabled;
  }
}

class ListEnvironmentsResponse extends \Google\Collection
{
  /** @var Environment[] */
  public $environments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'environments';
  protected $environmentsType = Environment::class;
  protected $environmentsDataType = 'array';
  /** @param Environment[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return Environment[] */
  public function getEnvironments()
  {
    return $this->environments;
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

class ListImageVersionsResponse extends \Google\Collection
{
  /** @var ImageVersion[] */
  public $imageVersions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'imageVersions';
  protected $imageVersionsType = ImageVersion::class;
  protected $imageVersionsDataType = 'array';
  /** @param ImageVersion[] */
  public function setImageVersions($imageVersions)
  {
    $this->imageVersions = $imageVersions;
  }
  /** @return ImageVersion[] */
  public function getImageVersions()
  {
    return $this->imageVersions;
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

class LoadSnapshotResponse extends \Google\Model
{
}

class MaintenanceWindow extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $recurrence;
  /** @var string */
  public $startTime;

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
  public function setRecurrence($recurrence)
  {
    $this->recurrence = $recurrence;
  }
  /** @return string */
  public function getRecurrence()
  {
    return $this->recurrence;
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
}

class MasterAuthorizedNetworksConfig extends \Google\Collection
{
  /** @var CidrBlock[] */
  public $cidrBlocks;
  /** @var bool */
  public $enabled;
  protected $collection_key = 'cidrBlocks';
  protected $cidrBlocksType = CidrBlock::class;
  protected $cidrBlocksDataType = 'array';
  /** @param CidrBlock[] */
  public function setCidrBlocks($cidrBlocks)
  {
    $this->cidrBlocks = $cidrBlocks;
  }
  /** @return CidrBlock[] */
  public function getCidrBlocks()
  {
    return $this->cidrBlocks;
  }
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
}

class NetworkingConfig extends \Google\Model
{
  /** @var string */
  public $connectionType;

  /** @param string */
  public function setConnectionType($connectionType)
  {
    $this->connectionType = $connectionType;
  }
  /** @return string */
  public function getConnectionType()
  {
    return $this->connectionType;
  }
}

class NodeConfig extends \Google\Collection
{
  /** @var int */
  public $diskSizeGb;
  /** @var bool */
  public $enableIpMasqAgent;
  /** @var IPAllocationPolicy */
  public $ipAllocationPolicy;
  /** @var string */
  public $location;
  /** @var string */
  public $machineType;
  /** @var string */
  public $network;
  /** @var string[] */
  public $oauthScopes;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $subnetwork;
  /** @var string[] */
  public $tags;
  protected $collection_key = 'tags';
  protected $ipAllocationPolicyType = IPAllocationPolicy::class;
  protected $ipAllocationPolicyDataType = '';
  /** @param int */
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  /** @return int */
  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }
  /** @param bool */
  public function setEnableIpMasqAgent($enableIpMasqAgent)
  {
    $this->enableIpMasqAgent = $enableIpMasqAgent;
  }
  /** @return bool */
  public function getEnableIpMasqAgent()
  {
    return $this->enableIpMasqAgent;
  }
  /** @param IPAllocationPolicy */
  public function setIpAllocationPolicy(IPAllocationPolicy $ipAllocationPolicy)
  {
    $this->ipAllocationPolicy = $ipAllocationPolicy;
  }
  /** @return IPAllocationPolicy */
  public function getIpAllocationPolicy()
  {
    return $this->ipAllocationPolicy;
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
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
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
  /** @param string[] */
  public function setOauthScopes($oauthScopes)
  {
    $this->oauthScopes = $oauthScopes;
  }
  /** @return string[] */
  public function getOauthScopes()
  {
    return $this->oauthScopes;
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
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
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
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $operationType;
  /** @var string */
  public $resource;
  /** @var string */
  public $resourceUuid;
  /** @var string */
  public $state;

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
  /** @param string */
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
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
  /** @param string */
  public function setResourceUuid($resourceUuid)
  {
    $this->resourceUuid = $resourceUuid;
  }
  /** @return string */
  public function getResourceUuid()
  {
    return $this->resourceUuid;
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

class PrivateClusterConfig extends \Google\Model
{
  /** @var bool */
  public $enablePrivateEndpoint;
  /** @var string */
  public $masterIpv4CidrBlock;
  /** @var string */
  public $masterIpv4ReservedRange;

  /** @param bool */
  public function setEnablePrivateEndpoint($enablePrivateEndpoint)
  {
    $this->enablePrivateEndpoint = $enablePrivateEndpoint;
  }
  /** @return bool */
  public function getEnablePrivateEndpoint()
  {
    return $this->enablePrivateEndpoint;
  }
  /** @param string */
  public function setMasterIpv4CidrBlock($masterIpv4CidrBlock)
  {
    $this->masterIpv4CidrBlock = $masterIpv4CidrBlock;
  }
  /** @return string */
  public function getMasterIpv4CidrBlock()
  {
    return $this->masterIpv4CidrBlock;
  }
  /** @param string */
  public function setMasterIpv4ReservedRange($masterIpv4ReservedRange)
  {
    $this->masterIpv4ReservedRange = $masterIpv4ReservedRange;
  }
  /** @return string */
  public function getMasterIpv4ReservedRange()
  {
    return $this->masterIpv4ReservedRange;
  }
}

class PrivateEnvironmentConfig extends \Google\Model
{
  /** @var string */
  public $cloudComposerConnectionSubnetwork;
  /** @var string */
  public $cloudComposerNetworkIpv4CidrBlock;
  /** @var string */
  public $cloudComposerNetworkIpv4ReservedRange;
  /** @var string */
  public $cloudSqlIpv4CidrBlock;
  /** @var bool */
  public $enablePrivateEnvironment;
  /** @var bool */
  public $enablePrivatelyUsedPublicIps;
  /** @var NetworkingConfig */
  public $networkingConfig;
  /** @var PrivateClusterConfig */
  public $privateClusterConfig;
  /** @var string */
  public $webServerIpv4CidrBlock;
  /** @var string */
  public $webServerIpv4ReservedRange;
  protected $networkingConfigType = NetworkingConfig::class;
  protected $networkingConfigDataType = '';
  protected $privateClusterConfigType = PrivateClusterConfig::class;
  protected $privateClusterConfigDataType = '';
  /** @param string */
  public function setCloudComposerConnectionSubnetwork($cloudComposerConnectionSubnetwork)
  {
    $this->cloudComposerConnectionSubnetwork = $cloudComposerConnectionSubnetwork;
  }
  /** @return string */
  public function getCloudComposerConnectionSubnetwork()
  {
    return $this->cloudComposerConnectionSubnetwork;
  }
  /** @param string */
  public function setCloudComposerNetworkIpv4CidrBlock($cloudComposerNetworkIpv4CidrBlock)
  {
    $this->cloudComposerNetworkIpv4CidrBlock = $cloudComposerNetworkIpv4CidrBlock;
  }
  /** @return string */
  public function getCloudComposerNetworkIpv4CidrBlock()
  {
    return $this->cloudComposerNetworkIpv4CidrBlock;
  }
  /** @param string */
  public function setCloudComposerNetworkIpv4ReservedRange($cloudComposerNetworkIpv4ReservedRange)
  {
    $this->cloudComposerNetworkIpv4ReservedRange = $cloudComposerNetworkIpv4ReservedRange;
  }
  /** @return string */
  public function getCloudComposerNetworkIpv4ReservedRange()
  {
    return $this->cloudComposerNetworkIpv4ReservedRange;
  }
  /** @param string */
  public function setCloudSqlIpv4CidrBlock($cloudSqlIpv4CidrBlock)
  {
    $this->cloudSqlIpv4CidrBlock = $cloudSqlIpv4CidrBlock;
  }
  /** @return string */
  public function getCloudSqlIpv4CidrBlock()
  {
    return $this->cloudSqlIpv4CidrBlock;
  }
  /** @param bool */
  public function setEnablePrivateEnvironment($enablePrivateEnvironment)
  {
    $this->enablePrivateEnvironment = $enablePrivateEnvironment;
  }
  /** @return bool */
  public function getEnablePrivateEnvironment()
  {
    return $this->enablePrivateEnvironment;
  }
  /** @param bool */
  public function setEnablePrivatelyUsedPublicIps($enablePrivatelyUsedPublicIps)
  {
    $this->enablePrivatelyUsedPublicIps = $enablePrivatelyUsedPublicIps;
  }
  /** @return bool */
  public function getEnablePrivatelyUsedPublicIps()
  {
    return $this->enablePrivatelyUsedPublicIps;
  }
  /** @param NetworkingConfig */
  public function setNetworkingConfig(NetworkingConfig $networkingConfig)
  {
    $this->networkingConfig = $networkingConfig;
  }
  /** @return NetworkingConfig */
  public function getNetworkingConfig()
  {
    return $this->networkingConfig;
  }
  /** @param PrivateClusterConfig */
  public function setPrivateClusterConfig(PrivateClusterConfig $privateClusterConfig)
  {
    $this->privateClusterConfig = $privateClusterConfig;
  }
  /** @return PrivateClusterConfig */
  public function getPrivateClusterConfig()
  {
    return $this->privateClusterConfig;
  }
  /** @param string */
  public function setWebServerIpv4CidrBlock($webServerIpv4CidrBlock)
  {
    $this->webServerIpv4CidrBlock = $webServerIpv4CidrBlock;
  }
  /** @return string */
  public function getWebServerIpv4CidrBlock()
  {
    return $this->webServerIpv4CidrBlock;
  }
  /** @param string */
  public function setWebServerIpv4ReservedRange($webServerIpv4ReservedRange)
  {
    $this->webServerIpv4ReservedRange = $webServerIpv4ReservedRange;
  }
  /** @return string */
  public function getWebServerIpv4ReservedRange()
  {
    return $this->webServerIpv4ReservedRange;
  }
}

class SaveSnapshotResponse extends \Google\Model
{
  /** @var string */
  public $snapshotPath;

  /** @param string */
  public function setSnapshotPath($snapshotPath)
  {
    $this->snapshotPath = $snapshotPath;
  }
  /** @return string */
  public function getSnapshotPath()
  {
    return $this->snapshotPath;
  }
}

class SchedulerResource extends \Google\Model
{
  /** @var int */
  public $count;
  /** @var float */
  public $cpu;
  /** @var float */
  public $memoryGb;
  /** @var float */
  public $storageGb;

  /** @param int */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return int */
  public function getCount()
  {
    return $this->count;
  }
  /** @param float */
  public function setCpu($cpu)
  {
    $this->cpu = $cpu;
  }
  /** @return float */
  public function getCpu()
  {
    return $this->cpu;
  }
  /** @param float */
  public function setMemoryGb($memoryGb)
  {
    $this->memoryGb = $memoryGb;
  }
  /** @return float */
  public function getMemoryGb()
  {
    return $this->memoryGb;
  }
  /** @param float */
  public function setStorageGb($storageGb)
  {
    $this->storageGb = $storageGb;
  }
  /** @return float */
  public function getStorageGb()
  {
    return $this->storageGb;
  }
}

class SoftwareConfig extends \Google\Model
{
  /** @var string[] */
  public $airflowConfigOverrides;
  /** @var string[] */
  public $envVariables;
  /** @var string */
  public $imageVersion;
  /** @var string[] */
  public $pypiPackages;
  /** @var string */
  public $pythonVersion;
  /** @var int */
  public $schedulerCount;

  /** @param string[] */
  public function setAirflowConfigOverrides($airflowConfigOverrides)
  {
    $this->airflowConfigOverrides = $airflowConfigOverrides;
  }
  /** @return string[] */
  public function getAirflowConfigOverrides()
  {
    return $this->airflowConfigOverrides;
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
  /** @param string */
  public function setImageVersion($imageVersion)
  {
    $this->imageVersion = $imageVersion;
  }
  /** @return string */
  public function getImageVersion()
  {
    return $this->imageVersion;
  }
  /** @param string[] */
  public function setPypiPackages($pypiPackages)
  {
    $this->pypiPackages = $pypiPackages;
  }
  /** @return string[] */
  public function getPypiPackages()
  {
    return $this->pypiPackages;
  }
  /** @param string */
  public function setPythonVersion($pythonVersion)
  {
    $this->pythonVersion = $pythonVersion;
  }
  /** @return string */
  public function getPythonVersion()
  {
    return $this->pythonVersion;
  }
  /** @param int */
  public function setSchedulerCount($schedulerCount)
  {
    $this->schedulerCount = $schedulerCount;
  }
  /** @return int */
  public function getSchedulerCount()
  {
    return $this->schedulerCount;
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

class WebServerConfig extends \Google\Model
{
  /** @var string */
  public $machineType;

  /** @param string */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
  }
}

class WebServerNetworkAccessControl extends \Google\Collection
{
  /** @var AllowedIpRange[] */
  public $allowedIpRanges;
  protected $collection_key = 'allowedIpRanges';
  protected $allowedIpRangesType = AllowedIpRange::class;
  protected $allowedIpRangesDataType = 'array';
  /** @param AllowedIpRange[] */
  public function setAllowedIpRanges($allowedIpRanges)
  {
    $this->allowedIpRanges = $allowedIpRanges;
  }
  /** @return AllowedIpRange[] */
  public function getAllowedIpRanges()
  {
    return $this->allowedIpRanges;
  }
}

class WebServerResource extends \Google\Model
{
  /** @var float */
  public $cpu;
  /** @var float */
  public $memoryGb;
  /** @var float */
  public $storageGb;

  /** @param float */
  public function setCpu($cpu)
  {
    $this->cpu = $cpu;
  }
  /** @return float */
  public function getCpu()
  {
    return $this->cpu;
  }
  /** @param float */
  public function setMemoryGb($memoryGb)
  {
    $this->memoryGb = $memoryGb;
  }
  /** @return float */
  public function getMemoryGb()
  {
    return $this->memoryGb;
  }
  /** @param float */
  public function setStorageGb($storageGb)
  {
    $this->storageGb = $storageGb;
  }
  /** @return float */
  public function getStorageGb()
  {
    return $this->storageGb;
  }
}

class WorkerResource extends \Google\Model
{
  /** @var float */
  public $cpu;
  /** @var int */
  public $maxCount;
  /** @var float */
  public $memoryGb;
  /** @var int */
  public $minCount;
  /** @var float */
  public $storageGb;

  /** @param float */
  public function setCpu($cpu)
  {
    $this->cpu = $cpu;
  }
  /** @return float */
  public function getCpu()
  {
    return $this->cpu;
  }
  /** @param int */
  public function setMaxCount($maxCount)
  {
    $this->maxCount = $maxCount;
  }
  /** @return int */
  public function getMaxCount()
  {
    return $this->maxCount;
  }
  /** @param float */
  public function setMemoryGb($memoryGb)
  {
    $this->memoryGb = $memoryGb;
  }
  /** @return float */
  public function getMemoryGb()
  {
    return $this->memoryGb;
  }
  /** @param int */
  public function setMinCount($minCount)
  {
    $this->minCount = $minCount;
  }
  /** @return int */
  public function getMinCount()
  {
    return $this->minCount;
  }
  /** @param float */
  public function setStorageGb($storageGb)
  {
    $this->storageGb = $storageGb;
  }
  /** @return float */
  public function getStorageGb()
  {
    return $this->storageGb;
  }
}

class WorkloadsConfig extends \Google\Model
{
  /** @var SchedulerResource */
  public $scheduler;
  /** @var WebServerResource */
  public $webServer;
  /** @var WorkerResource */
  public $worker;
  protected $schedulerType = SchedulerResource::class;
  protected $schedulerDataType = '';
  protected $webServerType = WebServerResource::class;
  protected $webServerDataType = '';
  protected $workerType = WorkerResource::class;
  protected $workerDataType = '';
  /** @param SchedulerResource */
  public function setScheduler(SchedulerResource $scheduler)
  {
    $this->scheduler = $scheduler;
  }
  /** @return SchedulerResource */
  public function getScheduler()
  {
    return $this->scheduler;
  }
  /** @param WebServerResource */
  public function setWebServer(WebServerResource $webServer)
  {
    $this->webServer = $webServer;
  }
  /** @return WebServerResource */
  public function getWebServer()
  {
    return $this->webServer;
  }
  /** @param WorkerResource */
  public function setWorker(WorkerResource $worker)
  {
    $this->worker = $worker;
  }
  /** @return WorkerResource */
  public function getWorker()
  {
    return $this->worker;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AllowedIpRange::class, 'Google_Service_CloudComposer_AllowedIpRange');
class_alias(CheckUpgradeResponse::class, 'Google_Service_CloudComposer_CheckUpgradeResponse');
class_alias(CidrBlock::class, 'Google_Service_CloudComposer_CidrBlock');
class_alias(ComposerEmpty::class, 'Google_Service_CloudComposer_ComposerEmpty');
class_alias(DatabaseConfig::class, 'Google_Service_CloudComposer_DatabaseConfig');
class_alias(Date::class, 'Google_Service_CloudComposer_Date');
class_alias(EncryptionConfig::class, 'Google_Service_CloudComposer_EncryptionConfig');
class_alias(Environment::class, 'Google_Service_CloudComposer_Environment');
class_alias(EnvironmentConfig::class, 'Google_Service_CloudComposer_EnvironmentConfig');
class_alias(IPAllocationPolicy::class, 'Google_Service_CloudComposer_IPAllocationPolicy');
class_alias(ImageVersion::class, 'Google_Service_CloudComposer_ImageVersion');
class_alias(ListEnvironmentsResponse::class, 'Google_Service_CloudComposer_ListEnvironmentsResponse');
class_alias(ListImageVersionsResponse::class, 'Google_Service_CloudComposer_ListImageVersionsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudComposer_ListOperationsResponse');
class_alias(LoadSnapshotResponse::class, 'Google_Service_CloudComposer_LoadSnapshotResponse');
class_alias(MaintenanceWindow::class, 'Google_Service_CloudComposer_MaintenanceWindow');
class_alias(MasterAuthorizedNetworksConfig::class, 'Google_Service_CloudComposer_MasterAuthorizedNetworksConfig');
class_alias(NetworkingConfig::class, 'Google_Service_CloudComposer_NetworkingConfig');
class_alias(NodeConfig::class, 'Google_Service_CloudComposer_NodeConfig');
class_alias(Operation::class, 'Google_Service_CloudComposer_Operation');
class_alias(OperationMetadata::class, 'Google_Service_CloudComposer_OperationMetadata');
class_alias(PrivateClusterConfig::class, 'Google_Service_CloudComposer_PrivateClusterConfig');
class_alias(PrivateEnvironmentConfig::class, 'Google_Service_CloudComposer_PrivateEnvironmentConfig');
class_alias(SaveSnapshotResponse::class, 'Google_Service_CloudComposer_SaveSnapshotResponse');
class_alias(SchedulerResource::class, 'Google_Service_CloudComposer_SchedulerResource');
class_alias(SoftwareConfig::class, 'Google_Service_CloudComposer_SoftwareConfig');
class_alias(Status::class, 'Google_Service_CloudComposer_Status');
class_alias(WebServerConfig::class, 'Google_Service_CloudComposer_WebServerConfig');
class_alias(WebServerNetworkAccessControl::class, 'Google_Service_CloudComposer_WebServerNetworkAccessControl');
class_alias(WebServerResource::class, 'Google_Service_CloudComposer_WebServerResource');
class_alias(WorkerResource::class, 'Google_Service_CloudComposer_WorkerResource');
class_alias(WorkloadsConfig::class, 'Google_Service_CloudComposer_WorkloadsConfig');
