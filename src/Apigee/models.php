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

namespace Google\Service\Apigee;

class EdgeConfigstoreBundleBadBundle extends \Google\Collection
{
  /** @var EdgeConfigstoreBundleBadBundleViolation[] */
  public $violations;
  protected $collection_key = 'violations';
  protected $violationsType = EdgeConfigstoreBundleBadBundleViolation::class;
  protected $violationsDataType = 'array';
  /** @param EdgeConfigstoreBundleBadBundleViolation[] */
  public function setViolations($violations)
  {
    $this->violations = $violations;
  }
  /** @return EdgeConfigstoreBundleBadBundleViolation[] */
  public function getViolations()
  {
    return $this->violations;
  }
}

class EdgeConfigstoreBundleBadBundleViolation extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $filename;

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
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  /** @return string */
  public function getFilename()
  {
    return $this->filename;
  }
}

class GoogleApiHttpBody extends \Google\Collection
{
  /** @var string */
  public $contentType;
  /** @var string */
  public $data;
  /** @var array[] */
  public $extensions;
  protected $collection_key = 'extensions';
  /** @param string */
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  /** @return string */
  public function getContentType()
  {
    return $this->contentType;
  }
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
}

class GoogleCloudApigeeV1Access extends \Google\Model
{
  /** @var GoogleCloudApigeeV1AccessGet */
  public $get;
  /** @var GoogleCloudApigeeV1AccessRemove */
  public $remove;
  /** @var GoogleCloudApigeeV1AccessSet */
  public $set;
  protected $internal_gapi_mappings = [
        "get" => "Get",
        "remove" => "Remove",
        "set" => "Set",
  ];
  protected $getType = GoogleCloudApigeeV1AccessGet::class;
  protected $getDataType = '';
  protected $removeType = GoogleCloudApigeeV1AccessRemove::class;
  protected $removeDataType = '';
  protected $setType = GoogleCloudApigeeV1AccessSet::class;
  protected $setDataType = '';
  /** @param GoogleCloudApigeeV1AccessGet */
  public function setGet(GoogleCloudApigeeV1AccessGet $get)
  {
    $this->get = $get;
  }
  /** @return GoogleCloudApigeeV1AccessGet */
  public function getGet()
  {
    return $this->get;
  }
  /** @param GoogleCloudApigeeV1AccessRemove */
  public function setRemove(GoogleCloudApigeeV1AccessRemove $remove)
  {
    $this->remove = $remove;
  }
  /** @return GoogleCloudApigeeV1AccessRemove */
  public function getRemove()
  {
    return $this->remove;
  }
  /** @param GoogleCloudApigeeV1AccessSet */
  public function setSet(GoogleCloudApigeeV1AccessSet $set)
  {
    $this->set = $set;
  }
  /** @return GoogleCloudApigeeV1AccessSet */
  public function getSet()
  {
    return $this->set;
  }
}

class GoogleCloudApigeeV1AccessGet extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
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

class GoogleCloudApigeeV1AccessRemove extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var bool */
  public $success;

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
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return bool */
  public function getSuccess()
  {
    return $this->success;
  }
}

class GoogleCloudApigeeV1AccessSet extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var bool */
  public $success;
  /** @var string */
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
  /** @param bool */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return bool */
  public function getSuccess()
  {
    return $this->success;
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

class GoogleCloudApigeeV1ActivateNatAddressRequest extends \Google\Model
{
}

class GoogleCloudApigeeV1AddonsConfig extends \Google\Model
{
  /** @var GoogleCloudApigeeV1AdvancedApiOpsConfig */
  public $advancedApiOpsConfig;
  /** @var GoogleCloudApigeeV1ApiSecurityConfig */
  public $apiSecurityConfig;
  /** @var GoogleCloudApigeeV1ConnectorsPlatformConfig */
  public $connectorsPlatformConfig;
  /** @var GoogleCloudApigeeV1IntegrationConfig */
  public $integrationConfig;
  /** @var GoogleCloudApigeeV1MonetizationConfig */
  public $monetizationConfig;
  protected $advancedApiOpsConfigType = GoogleCloudApigeeV1AdvancedApiOpsConfig::class;
  protected $advancedApiOpsConfigDataType = '';
  protected $apiSecurityConfigType = GoogleCloudApigeeV1ApiSecurityConfig::class;
  protected $apiSecurityConfigDataType = '';
  protected $connectorsPlatformConfigType = GoogleCloudApigeeV1ConnectorsPlatformConfig::class;
  protected $connectorsPlatformConfigDataType = '';
  protected $integrationConfigType = GoogleCloudApigeeV1IntegrationConfig::class;
  protected $integrationConfigDataType = '';
  protected $monetizationConfigType = GoogleCloudApigeeV1MonetizationConfig::class;
  protected $monetizationConfigDataType = '';
  /** @param GoogleCloudApigeeV1AdvancedApiOpsConfig */
  public function setAdvancedApiOpsConfig(GoogleCloudApigeeV1AdvancedApiOpsConfig $advancedApiOpsConfig)
  {
    $this->advancedApiOpsConfig = $advancedApiOpsConfig;
  }
  /** @return GoogleCloudApigeeV1AdvancedApiOpsConfig */
  public function getAdvancedApiOpsConfig()
  {
    return $this->advancedApiOpsConfig;
  }
  /** @param GoogleCloudApigeeV1ApiSecurityConfig */
  public function setApiSecurityConfig(GoogleCloudApigeeV1ApiSecurityConfig $apiSecurityConfig)
  {
    $this->apiSecurityConfig = $apiSecurityConfig;
  }
  /** @return GoogleCloudApigeeV1ApiSecurityConfig */
  public function getApiSecurityConfig()
  {
    return $this->apiSecurityConfig;
  }
  /** @param GoogleCloudApigeeV1ConnectorsPlatformConfig */
  public function setConnectorsPlatformConfig(GoogleCloudApigeeV1ConnectorsPlatformConfig $connectorsPlatformConfig)
  {
    $this->connectorsPlatformConfig = $connectorsPlatformConfig;
  }
  /** @return GoogleCloudApigeeV1ConnectorsPlatformConfig */
  public function getConnectorsPlatformConfig()
  {
    return $this->connectorsPlatformConfig;
  }
  /** @param GoogleCloudApigeeV1IntegrationConfig */
  public function setIntegrationConfig(GoogleCloudApigeeV1IntegrationConfig $integrationConfig)
  {
    $this->integrationConfig = $integrationConfig;
  }
  /** @return GoogleCloudApigeeV1IntegrationConfig */
  public function getIntegrationConfig()
  {
    return $this->integrationConfig;
  }
  /** @param GoogleCloudApigeeV1MonetizationConfig */
  public function setMonetizationConfig(GoogleCloudApigeeV1MonetizationConfig $monetizationConfig)
  {
    $this->monetizationConfig = $monetizationConfig;
  }
  /** @return GoogleCloudApigeeV1MonetizationConfig */
  public function getMonetizationConfig()
  {
    return $this->monetizationConfig;
  }
}

class GoogleCloudApigeeV1AdjustDeveloperBalanceRequest extends \Google\Model
{
  /** @var GoogleTypeMoney */
  public $adjustment;
  protected $adjustmentType = GoogleTypeMoney::class;
  protected $adjustmentDataType = '';
  /** @param GoogleTypeMoney */
  public function setAdjustment(GoogleTypeMoney $adjustment)
  {
    $this->adjustment = $adjustment;
  }
  /** @return GoogleTypeMoney */
  public function getAdjustment()
  {
    return $this->adjustment;
  }
}

class GoogleCloudApigeeV1AdvancedApiOpsConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class GoogleCloudApigeeV1Alias extends \Google\Model
{
  /** @var string */
  public $alias;
  /** @var GoogleCloudApigeeV1Certificate */
  public $certsInfo;
  /** @var string */
  public $type;
  protected $certsInfoType = GoogleCloudApigeeV1Certificate::class;
  protected $certsInfoDataType = '';
  /** @param string */
  public function setAlias($alias)
  {
    $this->alias = $alias;
  }
  /** @return string */
  public function getAlias()
  {
    return $this->alias;
  }
  /** @param GoogleCloudApigeeV1Certificate */
  public function setCertsInfo(GoogleCloudApigeeV1Certificate $certsInfo)
  {
    $this->certsInfo = $certsInfo;
  }
  /** @return GoogleCloudApigeeV1Certificate */
  public function getCertsInfo()
  {
    return $this->certsInfo;
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

class GoogleCloudApigeeV1AliasRevisionConfig extends \Google\Model
{
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $type;

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

class GoogleCloudApigeeV1ApiCategory extends \Google\Model
{
  /** @var GoogleCloudApigeeV1ApiCategoryData */
  public $data;
  /** @var string */
  public $errorCode;
  /** @var string */
  public $message;
  /** @var string */
  public $requestId;
  /** @var string */
  public $status;
  protected $dataType = GoogleCloudApigeeV1ApiCategoryData::class;
  protected $dataDataType = '';
  /** @param GoogleCloudApigeeV1ApiCategoryData */
  public function setData(GoogleCloudApigeeV1ApiCategoryData $data)
  {
    $this->data = $data;
  }
  /** @return GoogleCloudApigeeV1ApiCategoryData */
  public function getData()
  {
    return $this->data;
  }
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
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /** @return string */
  public function getMessage()
  {
    return $this->message;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
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

class GoogleCloudApigeeV1ApiCategoryData extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $siteId;
  /** @var string */
  public $updateTime;

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
  /** @param string */
  public function setSiteId($siteId)
  {
    $this->siteId = $siteId;
  }
  /** @return string */
  public function getSiteId()
  {
    return $this->siteId;
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

class GoogleCloudApigeeV1ApiProduct extends \Google\Collection
{
  /** @var string[] */
  public $apiResources;
  /** @var string */
  public $approvalType;
  /** @var GoogleCloudApigeeV1Attribute[] */
  public $attributes;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $environments;
  /** @var GoogleCloudApigeeV1GraphQLOperationGroup */
  public $graphqlOperationGroup;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var GoogleCloudApigeeV1OperationGroup */
  public $operationGroup;
  /** @var string[] */
  public $proxies;
  /** @var string */
  public $quota;
  /** @var string */
  public $quotaCounterScope;
  /** @var string */
  public $quotaInterval;
  /** @var string */
  public $quotaTimeUnit;
  /** @var string[] */
  public $scopes;
  protected $collection_key = 'scopes';
  protected $attributesType = GoogleCloudApigeeV1Attribute::class;
  protected $attributesDataType = 'array';
  protected $graphqlOperationGroupType = GoogleCloudApigeeV1GraphQLOperationGroup::class;
  protected $graphqlOperationGroupDataType = '';
  protected $operationGroupType = GoogleCloudApigeeV1OperationGroup::class;
  protected $operationGroupDataType = '';
  /** @param string[] */
  public function setApiResources($apiResources)
  {
    $this->apiResources = $apiResources;
  }
  /** @return string[] */
  public function getApiResources()
  {
    return $this->apiResources;
  }
  /** @param string */
  public function setApprovalType($approvalType)
  {
    $this->approvalType = $approvalType;
  }
  /** @return string */
  public function getApprovalType()
  {
    return $this->approvalType;
  }
  /** @param GoogleCloudApigeeV1Attribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudApigeeV1Attribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
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
  /** @param string[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return string[] */
  public function getEnvironments()
  {
    return $this->environments;
  }
  /** @param GoogleCloudApigeeV1GraphQLOperationGroup */
  public function setGraphqlOperationGroup(GoogleCloudApigeeV1GraphQLOperationGroup $graphqlOperationGroup)
  {
    $this->graphqlOperationGroup = $graphqlOperationGroup;
  }
  /** @return GoogleCloudApigeeV1GraphQLOperationGroup */
  public function getGraphqlOperationGroup()
  {
    return $this->graphqlOperationGroup;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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
  /** @param GoogleCloudApigeeV1OperationGroup */
  public function setOperationGroup(GoogleCloudApigeeV1OperationGroup $operationGroup)
  {
    $this->operationGroup = $operationGroup;
  }
  /** @return GoogleCloudApigeeV1OperationGroup */
  public function getOperationGroup()
  {
    return $this->operationGroup;
  }
  /** @param string[] */
  public function setProxies($proxies)
  {
    $this->proxies = $proxies;
  }
  /** @return string[] */
  public function getProxies()
  {
    return $this->proxies;
  }
  /** @param string */
  public function setQuota($quota)
  {
    $this->quota = $quota;
  }
  /** @return string */
  public function getQuota()
  {
    return $this->quota;
  }
  /** @param string */
  public function setQuotaCounterScope($quotaCounterScope)
  {
    $this->quotaCounterScope = $quotaCounterScope;
  }
  /** @return string */
  public function getQuotaCounterScope()
  {
    return $this->quotaCounterScope;
  }
  /** @param string */
  public function setQuotaInterval($quotaInterval)
  {
    $this->quotaInterval = $quotaInterval;
  }
  /** @return string */
  public function getQuotaInterval()
  {
    return $this->quotaInterval;
  }
  /** @param string */
  public function setQuotaTimeUnit($quotaTimeUnit)
  {
    $this->quotaTimeUnit = $quotaTimeUnit;
  }
  /** @return string */
  public function getQuotaTimeUnit()
  {
    return $this->quotaTimeUnit;
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
}

class GoogleCloudApigeeV1ApiProductRef extends \Google\Model
{
  /** @var string */
  public $apiproduct;
  /** @var string */
  public $status;

  /** @param string */
  public function setApiproduct($apiproduct)
  {
    $this->apiproduct = $apiproduct;
  }
  /** @return string */
  public function getApiproduct()
  {
    return $this->apiproduct;
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

class GoogleCloudApigeeV1ApiProxy extends \Google\Collection
{
  /** @var string */
  public $apiProxyType;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $latestRevisionId;
  /** @var GoogleCloudApigeeV1EntityMetadata */
  public $metaData;
  /** @var string */
  public $name;
  /** @var bool */
  public $readOnly;
  /** @var string[] */
  public $revision;
  protected $collection_key = 'revision';
  protected $metaDataType = GoogleCloudApigeeV1EntityMetadata::class;
  protected $metaDataDataType = '';
  /** @param string */
  public function setApiProxyType($apiProxyType)
  {
    $this->apiProxyType = $apiProxyType;
  }
  /** @return string */
  public function getApiProxyType()
  {
    return $this->apiProxyType;
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
  public function setLatestRevisionId($latestRevisionId)
  {
    $this->latestRevisionId = $latestRevisionId;
  }
  /** @return string */
  public function getLatestRevisionId()
  {
    return $this->latestRevisionId;
  }
  /** @param GoogleCloudApigeeV1EntityMetadata */
  public function setMetaData(GoogleCloudApigeeV1EntityMetadata $metaData)
  {
    $this->metaData = $metaData;
  }
  /** @return GoogleCloudApigeeV1EntityMetadata */
  public function getMetaData()
  {
    return $this->metaData;
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
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /** @return bool */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
  /** @param string[] */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string[] */
  public function getRevision()
  {
    return $this->revision;
  }
}

class GoogleCloudApigeeV1ApiProxyRevision extends \Google\Collection
{
  /** @var string */
  public $archive;
  /** @var string[] */
  public $basepaths;
  /** @var GoogleCloudApigeeV1ConfigVersion */
  public $configurationVersion;
  /** @var string */
  public $contextInfo;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $entityMetaDataAsProperties;
  /** @var string[] */
  public $integrationEndpoints;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var string[] */
  public $policies;
  /** @var string[] */
  public $proxies;
  /** @var string[] */
  public $proxyEndpoints;
  /** @var GoogleCloudApigeeV1ResourceFiles */
  public $resourceFiles;
  /** @var string[] */
  public $resources;
  /** @var string */
  public $revision;
  /** @var string[] */
  public $sharedFlows;
  /** @var string */
  public $spec;
  /** @var string[] */
  public $targetEndpoints;
  /** @var string[] */
  public $targetServers;
  /** @var string[] */
  public $targets;
  /** @var string[] */
  public $teams;
  /** @var string */
  public $type;
  protected $collection_key = 'teams';
  protected $configurationVersionType = GoogleCloudApigeeV1ConfigVersion::class;
  protected $configurationVersionDataType = '';
  protected $resourceFilesType = GoogleCloudApigeeV1ResourceFiles::class;
  protected $resourceFilesDataType = '';
  /** @param string */
  public function setArchive($archive)
  {
    $this->archive = $archive;
  }
  /** @return string */
  public function getArchive()
  {
    return $this->archive;
  }
  /** @param string[] */
  public function setBasepaths($basepaths)
  {
    $this->basepaths = $basepaths;
  }
  /** @return string[] */
  public function getBasepaths()
  {
    return $this->basepaths;
  }
  /** @param GoogleCloudApigeeV1ConfigVersion */
  public function setConfigurationVersion(GoogleCloudApigeeV1ConfigVersion $configurationVersion)
  {
    $this->configurationVersion = $configurationVersion;
  }
  /** @return GoogleCloudApigeeV1ConfigVersion */
  public function getConfigurationVersion()
  {
    return $this->configurationVersion;
  }
  /** @param string */
  public function setContextInfo($contextInfo)
  {
    $this->contextInfo = $contextInfo;
  }
  /** @return string */
  public function getContextInfo()
  {
    return $this->contextInfo;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
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
  /** @param string[] */
  public function setEntityMetaDataAsProperties($entityMetaDataAsProperties)
  {
    $this->entityMetaDataAsProperties = $entityMetaDataAsProperties;
  }
  /** @return string[] */
  public function getEntityMetaDataAsProperties()
  {
    return $this->entityMetaDataAsProperties;
  }
  /** @param string[] */
  public function setIntegrationEndpoints($integrationEndpoints)
  {
    $this->integrationEndpoints = $integrationEndpoints;
  }
  /** @return string[] */
  public function getIntegrationEndpoints()
  {
    return $this->integrationEndpoints;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /** @return string[] */
  public function getPolicies()
  {
    return $this->policies;
  }
  /** @param string[] */
  public function setProxies($proxies)
  {
    $this->proxies = $proxies;
  }
  /** @return string[] */
  public function getProxies()
  {
    return $this->proxies;
  }
  /** @param string[] */
  public function setProxyEndpoints($proxyEndpoints)
  {
    $this->proxyEndpoints = $proxyEndpoints;
  }
  /** @return string[] */
  public function getProxyEndpoints()
  {
    return $this->proxyEndpoints;
  }
  /** @param GoogleCloudApigeeV1ResourceFiles */
  public function setResourceFiles(GoogleCloudApigeeV1ResourceFiles $resourceFiles)
  {
    $this->resourceFiles = $resourceFiles;
  }
  /** @return GoogleCloudApigeeV1ResourceFiles */
  public function getResourceFiles()
  {
    return $this->resourceFiles;
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
  /** @param string */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string */
  public function getRevision()
  {
    return $this->revision;
  }
  /** @param string[] */
  public function setSharedFlows($sharedFlows)
  {
    $this->sharedFlows = $sharedFlows;
  }
  /** @return string[] */
  public function getSharedFlows()
  {
    return $this->sharedFlows;
  }
  /** @param string */
  public function setSpec($spec)
  {
    $this->spec = $spec;
  }
  /** @return string */
  public function getSpec()
  {
    return $this->spec;
  }
  /** @param string[] */
  public function setTargetEndpoints($targetEndpoints)
  {
    $this->targetEndpoints = $targetEndpoints;
  }
  /** @return string[] */
  public function getTargetEndpoints()
  {
    return $this->targetEndpoints;
  }
  /** @param string[] */
  public function setTargetServers($targetServers)
  {
    $this->targetServers = $targetServers;
  }
  /** @return string[] */
  public function getTargetServers()
  {
    return $this->targetServers;
  }
  /** @param string[] */
  public function setTargets($targets)
  {
    $this->targets = $targets;
  }
  /** @return string[] */
  public function getTargets()
  {
    return $this->targets;
  }
  /** @param string[] */
  public function setTeams($teams)
  {
    $this->teams = $teams;
  }
  /** @return string[] */
  public function getTeams()
  {
    return $this->teams;
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

class GoogleCloudApigeeV1ApiResponseWrapper extends \Google\Model
{
  /** @var string */
  public $errorCode;
  /** @var string */
  public $message;
  /** @var string */
  public $requestId;
  /** @var string */
  public $status;

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
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /** @return string */
  public function getMessage()
  {
    return $this->message;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
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

class GoogleCloudApigeeV1ApiSecurityConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $expiresAt;

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
  public function setExpiresAt($expiresAt)
  {
    $this->expiresAt = $expiresAt;
  }
  /** @return string */
  public function getExpiresAt()
  {
    return $this->expiresAt;
  }
}

class GoogleCloudApigeeV1ApiSecurityRuntimeConfig extends \Google\Collection
{
  /** @var string[] */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'location';
  /** @param string[] */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string[] */
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
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
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

class GoogleCloudApigeeV1App extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ApiProductRef[] */
  public $apiProducts;
  /** @var string */
  public $appId;
  /** @var GoogleCloudApigeeV1Attribute[] */
  public $attributes;
  /** @var string */
  public $callbackUrl;
  /** @var string */
  public $companyName;
  /** @var string */
  public $createdAt;
  /** @var GoogleCloudApigeeV1Credential[] */
  public $credentials;
  /** @var string */
  public $developerId;
  /** @var string */
  public $keyExpiresIn;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var string[] */
  public $scopes;
  /** @var string */
  public $status;
  protected $collection_key = 'scopes';
  protected $apiProductsType = GoogleCloudApigeeV1ApiProductRef::class;
  protected $apiProductsDataType = 'array';
  protected $attributesType = GoogleCloudApigeeV1Attribute::class;
  protected $attributesDataType = 'array';
  protected $credentialsType = GoogleCloudApigeeV1Credential::class;
  protected $credentialsDataType = 'array';
  /** @param GoogleCloudApigeeV1ApiProductRef[] */
  public function setApiProducts($apiProducts)
  {
    $this->apiProducts = $apiProducts;
  }
  /** @return GoogleCloudApigeeV1ApiProductRef[] */
  public function getApiProducts()
  {
    return $this->apiProducts;
  }
  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
  }
  /** @param GoogleCloudApigeeV1Attribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudApigeeV1Attribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setCallbackUrl($callbackUrl)
  {
    $this->callbackUrl = $callbackUrl;
  }
  /** @return string */
  public function getCallbackUrl()
  {
    return $this->callbackUrl;
  }
  /** @param string */
  public function setCompanyName($companyName)
  {
    $this->companyName = $companyName;
  }
  /** @return string */
  public function getCompanyName()
  {
    return $this->companyName;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param GoogleCloudApigeeV1Credential[] */
  public function setCredentials($credentials)
  {
    $this->credentials = $credentials;
  }
  /** @return GoogleCloudApigeeV1Credential[] */
  public function getCredentials()
  {
    return $this->credentials;
  }
  /** @param string */
  public function setDeveloperId($developerId)
  {
    $this->developerId = $developerId;
  }
  /** @return string */
  public function getDeveloperId()
  {
    return $this->developerId;
  }
  /** @param string */
  public function setKeyExpiresIn($keyExpiresIn)
  {
    $this->keyExpiresIn = $keyExpiresIn;
  }
  /** @return string */
  public function getKeyExpiresIn()
  {
    return $this->keyExpiresIn;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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

class GoogleCloudApigeeV1ArchiveDeployment extends \Google\Model
{
  /** @var string */
  public $createdAt;
  /** @var string */
  public $gcsUri;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $operation;
  /** @var string */
  public $updatedAt;

  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param string */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
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
  public function setUpdatedAt($updatedAt)
  {
    $this->updatedAt = $updatedAt;
  }
  /** @return string */
  public function getUpdatedAt()
  {
    return $this->updatedAt;
  }
}

class GoogleCloudApigeeV1AsyncQuery extends \Google\Model
{
  /** @var string */
  public $created;
  /** @var string */
  public $envgroupHostname;
  /** @var string */
  public $error;
  /** @var string */
  public $executionTime;
  /** @var string */
  public $name;
  /** @var GoogleCloudApigeeV1QueryMetadata */
  public $queryParams;
  /** @var string */
  public $reportDefinitionId;
  /** @var GoogleCloudApigeeV1AsyncQueryResult */
  public $result;
  /** @var string */
  public $resultFileSize;
  /** @var string */
  public $resultRows;
  /** @var string */
  public $self;
  /** @var string */
  public $state;
  /** @var string */
  public $updated;
  protected $queryParamsType = GoogleCloudApigeeV1QueryMetadata::class;
  protected $queryParamsDataType = '';
  protected $resultType = GoogleCloudApigeeV1AsyncQueryResult::class;
  protected $resultDataType = '';
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
  }
  /** @param string */
  public function setEnvgroupHostname($envgroupHostname)
  {
    $this->envgroupHostname = $envgroupHostname;
  }
  /** @return string */
  public function getEnvgroupHostname()
  {
    return $this->envgroupHostname;
  }
  /** @param string */
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return string */
  public function getError()
  {
    return $this->error;
  }
  /** @param string */
  public function setExecutionTime($executionTime)
  {
    $this->executionTime = $executionTime;
  }
  /** @return string */
  public function getExecutionTime()
  {
    return $this->executionTime;
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
  /** @param GoogleCloudApigeeV1QueryMetadata */
  public function setQueryParams(GoogleCloudApigeeV1QueryMetadata $queryParams)
  {
    $this->queryParams = $queryParams;
  }
  /** @return GoogleCloudApigeeV1QueryMetadata */
  public function getQueryParams()
  {
    return $this->queryParams;
  }
  /** @param string */
  public function setReportDefinitionId($reportDefinitionId)
  {
    $this->reportDefinitionId = $reportDefinitionId;
  }
  /** @return string */
  public function getReportDefinitionId()
  {
    return $this->reportDefinitionId;
  }
  /** @param GoogleCloudApigeeV1AsyncQueryResult */
  public function setResult(GoogleCloudApigeeV1AsyncQueryResult $result)
  {
    $this->result = $result;
  }
  /** @return GoogleCloudApigeeV1AsyncQueryResult */
  public function getResult()
  {
    return $this->result;
  }
  /** @param string */
  public function setResultFileSize($resultFileSize)
  {
    $this->resultFileSize = $resultFileSize;
  }
  /** @return string */
  public function getResultFileSize()
  {
    return $this->resultFileSize;
  }
  /** @param string */
  public function setResultRows($resultRows)
  {
    $this->resultRows = $resultRows;
  }
  /** @return string */
  public function getResultRows()
  {
    return $this->resultRows;
  }
  /** @param string */
  public function setSelf($self)
  {
    $this->self = $self;
  }
  /** @return string */
  public function getSelf()
  {
    return $this->self;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class GoogleCloudApigeeV1AsyncQueryResult extends \Google\Model
{
  /** @var string */
  public $expires;
  /** @var string */
  public $self;

  /** @param string */
  public function setExpires($expires)
  {
    $this->expires = $expires;
  }
  /** @return string */
  public function getExpires()
  {
    return $this->expires;
  }
  /** @param string */
  public function setSelf($self)
  {
    $this->self = $self;
  }
  /** @return string */
  public function getSelf()
  {
    return $this->self;
  }
}

class GoogleCloudApigeeV1AsyncQueryResultView extends \Google\Collection
{
  /** @var int */
  public $code;
  /** @var string */
  public $error;
  /** @var GoogleCloudApigeeV1QueryMetadata */
  public $metadata;
  /** @var array[] */
  public $rows;
  /** @var string */
  public $state;
  protected $collection_key = 'rows';
  protected $metadataType = GoogleCloudApigeeV1QueryMetadata::class;
  protected $metadataDataType = '';
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
  /** @param string */
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return string */
  public function getError()
  {
    return $this->error;
  }
  /** @param GoogleCloudApigeeV1QueryMetadata */
  public function setMetadata(GoogleCloudApigeeV1QueryMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return GoogleCloudApigeeV1QueryMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param array[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return array[] */
  public function getRows()
  {
    return $this->rows;
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

class GoogleCloudApigeeV1Attribute extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
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

class GoogleCloudApigeeV1Attributes extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1Attribute[] */
  public $attribute;
  protected $collection_key = 'attribute';
  protected $attributeType = GoogleCloudApigeeV1Attribute::class;
  protected $attributeDataType = 'array';
  /** @param GoogleCloudApigeeV1Attribute[] */
  public function setAttribute($attribute)
  {
    $this->attribute = $attribute;
  }
  /** @return GoogleCloudApigeeV1Attribute[] */
  public function getAttribute()
  {
    return $this->attribute;
  }
}

class GoogleCloudApigeeV1CanaryEvaluation extends \Google\Model
{
  /** @var string */
  public $control;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudApigeeV1CanaryEvaluationMetricLabels */
  public $metricLabels;
  /** @var string */
  public $name;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $treatment;
  /** @var string */
  public $verdict;
  protected $metricLabelsType = GoogleCloudApigeeV1CanaryEvaluationMetricLabels::class;
  protected $metricLabelsDataType = '';
  /** @param string */
  public function setControl($control)
  {
    $this->control = $control;
  }
  /** @return string */
  public function getControl()
  {
    return $this->control;
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
  /** @param GoogleCloudApigeeV1CanaryEvaluationMetricLabels */
  public function setMetricLabels(GoogleCloudApigeeV1CanaryEvaluationMetricLabels $metricLabels)
  {
    $this->metricLabels = $metricLabels;
  }
  /** @return GoogleCloudApigeeV1CanaryEvaluationMetricLabels */
  public function getMetricLabels()
  {
    return $this->metricLabels;
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
  public function setTreatment($treatment)
  {
    $this->treatment = $treatment;
  }
  /** @return string */
  public function getTreatment()
  {
    return $this->treatment;
  }
  /** @param string */
  public function setVerdict($verdict)
  {
    $this->verdict = $verdict;
  }
  /** @return string */
  public function getVerdict()
  {
    return $this->verdict;
  }
}

class GoogleCloudApigeeV1CanaryEvaluationMetricLabels extends \Google\Model
{
  /** @var string */
  public $env;
  /** @var string */
  public $instanceId;
  /** @var string */
  public $location;
  protected $internal_gapi_mappings = [
        "instanceId" => "instance_id",
  ];
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
  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
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
}

class GoogleCloudApigeeV1CertInfo extends \Google\Collection
{
  /** @var string */
  public $basicConstraints;
  /** @var string */
  public $expiryDate;
  /** @var string */
  public $isValid;
  /** @var string */
  public $issuer;
  /** @var string */
  public $publicKey;
  /** @var string */
  public $serialNumber;
  /** @var string */
  public $sigAlgName;
  /** @var string */
  public $subject;
  /** @var string[] */
  public $subjectAlternativeNames;
  /** @var string */
  public $validFrom;
  /** @var int */
  public $version;
  protected $collection_key = 'subjectAlternativeNames';
  /** @param string */
  public function setBasicConstraints($basicConstraints)
  {
    $this->basicConstraints = $basicConstraints;
  }
  /** @return string */
  public function getBasicConstraints()
  {
    return $this->basicConstraints;
  }
  /** @param string */
  public function setExpiryDate($expiryDate)
  {
    $this->expiryDate = $expiryDate;
  }
  /** @return string */
  public function getExpiryDate()
  {
    return $this->expiryDate;
  }
  /** @param string */
  public function setIsValid($isValid)
  {
    $this->isValid = $isValid;
  }
  /** @return string */
  public function getIsValid()
  {
    return $this->isValid;
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
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /** @param string */
  public function setSigAlgName($sigAlgName)
  {
    $this->sigAlgName = $sigAlgName;
  }
  /** @return string */
  public function getSigAlgName()
  {
    return $this->sigAlgName;
  }
  /** @param string */
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /** @return string */
  public function getSubject()
  {
    return $this->subject;
  }
  /** @param string[] */
  public function setSubjectAlternativeNames($subjectAlternativeNames)
  {
    $this->subjectAlternativeNames = $subjectAlternativeNames;
  }
  /** @return string[] */
  public function getSubjectAlternativeNames()
  {
    return $this->subjectAlternativeNames;
  }
  /** @param string */
  public function setValidFrom($validFrom)
  {
    $this->validFrom = $validFrom;
  }
  /** @return string */
  public function getValidFrom()
  {
    return $this->validFrom;
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

class GoogleCloudApigeeV1Certificate extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1CertInfo[] */
  public $certInfo;
  protected $collection_key = 'certInfo';
  protected $certInfoType = GoogleCloudApigeeV1CertInfo::class;
  protected $certInfoDataType = 'array';
  /** @param GoogleCloudApigeeV1CertInfo[] */
  public function setCertInfo($certInfo)
  {
    $this->certInfo = $certInfo;
  }
  /** @return GoogleCloudApigeeV1CertInfo[] */
  public function getCertInfo()
  {
    return $this->certInfo;
  }
}

class GoogleCloudApigeeV1CommonNameConfig extends \Google\Model
{
  /** @var bool */
  public $matchWildCards;
  /** @var string */
  public $name;

  /** @param bool */
  public function setMatchWildCards($matchWildCards)
  {
    $this->matchWildCards = $matchWildCards;
  }
  /** @return bool */
  public function getMatchWildCards()
  {
    return $this->matchWildCards;
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

class GoogleCloudApigeeV1ComputeEnvironmentScoresRequest extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ComputeEnvironmentScoresRequestFilter[] */
  public $filters;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var GoogleTypeInterval */
  public $timeRange;
  protected $collection_key = 'filters';
  protected $filtersType = GoogleCloudApigeeV1ComputeEnvironmentScoresRequestFilter::class;
  protected $filtersDataType = 'array';
  protected $timeRangeType = GoogleTypeInterval::class;
  protected $timeRangeDataType = '';
  /** @param GoogleCloudApigeeV1ComputeEnvironmentScoresRequestFilter[] */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return GoogleCloudApigeeV1ComputeEnvironmentScoresRequestFilter[] */
  public function getFilters()
  {
    return $this->filters;
  }
  /** @param int */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return int */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param GoogleTypeInterval */
  public function setTimeRange(GoogleTypeInterval $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return GoogleTypeInterval */
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class GoogleCloudApigeeV1ComputeEnvironmentScoresRequestFilter extends \Google\Model
{
  /** @var string */
  public $scorePath;

  /** @param string */
  public function setScorePath($scorePath)
  {
    $this->scorePath = $scorePath;
  }
  /** @return string */
  public function getScorePath()
  {
    return $this->scorePath;
  }
}

class GoogleCloudApigeeV1ComputeEnvironmentScoresResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudApigeeV1Score[] */
  public $scores;
  protected $collection_key = 'scores';
  protected $scoresType = GoogleCloudApigeeV1Score::class;
  protected $scoresDataType = 'array';
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
  /** @param GoogleCloudApigeeV1Score[] */
  public function setScores($scores)
  {
    $this->scores = $scores;
  }
  /** @return GoogleCloudApigeeV1Score[] */
  public function getScores()
  {
    return $this->scores;
  }
}

class GoogleCloudApigeeV1ConfigVersion extends \Google\Model
{
  /** @var int */
  public $majorVersion;
  /** @var int */
  public $minorVersion;

  /** @param int */
  public function setMajorVersion($majorVersion)
  {
    $this->majorVersion = $majorVersion;
  }
  /** @return int */
  public function getMajorVersion()
  {
    return $this->majorVersion;
  }
  /** @param int */
  public function setMinorVersion($minorVersion)
  {
    $this->minorVersion = $minorVersion;
  }
  /** @return int */
  public function getMinorVersion()
  {
    return $this->minorVersion;
  }
}

class GoogleCloudApigeeV1ConnectorsPlatformConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $expiresAt;

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
  public function setExpiresAt($expiresAt)
  {
    $this->expiresAt = $expiresAt;
  }
  /** @return string */
  public function getExpiresAt()
  {
    return $this->expiresAt;
  }
}

class GoogleCloudApigeeV1Credential extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ApiProductRef[] */
  public $apiProducts;
  /** @var GoogleCloudApigeeV1Attribute[] */
  public $attributes;
  /** @var string */
  public $consumerKey;
  /** @var string */
  public $consumerSecret;
  /** @var string */
  public $expiresAt;
  /** @var string */
  public $issuedAt;
  /** @var string[] */
  public $scopes;
  /** @var string */
  public $status;
  protected $collection_key = 'scopes';
  protected $apiProductsType = GoogleCloudApigeeV1ApiProductRef::class;
  protected $apiProductsDataType = 'array';
  protected $attributesType = GoogleCloudApigeeV1Attribute::class;
  protected $attributesDataType = 'array';
  /** @param GoogleCloudApigeeV1ApiProductRef[] */
  public function setApiProducts($apiProducts)
  {
    $this->apiProducts = $apiProducts;
  }
  /** @return GoogleCloudApigeeV1ApiProductRef[] */
  public function getApiProducts()
  {
    return $this->apiProducts;
  }
  /** @param GoogleCloudApigeeV1Attribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudApigeeV1Attribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setConsumerKey($consumerKey)
  {
    $this->consumerKey = $consumerKey;
  }
  /** @return string */
  public function getConsumerKey()
  {
    return $this->consumerKey;
  }
  /** @param string */
  public function setConsumerSecret($consumerSecret)
  {
    $this->consumerSecret = $consumerSecret;
  }
  /** @return string */
  public function getConsumerSecret()
  {
    return $this->consumerSecret;
  }
  /** @param string */
  public function setExpiresAt($expiresAt)
  {
    $this->expiresAt = $expiresAt;
  }
  /** @return string */
  public function getExpiresAt()
  {
    return $this->expiresAt;
  }
  /** @param string */
  public function setIssuedAt($issuedAt)
  {
    $this->issuedAt = $issuedAt;
  }
  /** @return string */
  public function getIssuedAt()
  {
    return $this->issuedAt;
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

class GoogleCloudApigeeV1CreditDeveloperBalanceRequest extends \Google\Model
{
  /** @var GoogleTypeMoney */
  public $transactionAmount;
  /** @var string */
  public $transactionId;
  protected $transactionAmountType = GoogleTypeMoney::class;
  protected $transactionAmountDataType = '';
  /** @param GoogleTypeMoney */
  public function setTransactionAmount(GoogleTypeMoney $transactionAmount)
  {
    $this->transactionAmount = $transactionAmount;
  }
  /** @return GoogleTypeMoney */
  public function getTransactionAmount()
  {
    return $this->transactionAmount;
  }
  /** @param string */
  public function setTransactionId($transactionId)
  {
    $this->transactionId = $transactionId;
  }
  /** @return string */
  public function getTransactionId()
  {
    return $this->transactionId;
  }
}

class GoogleCloudApigeeV1CustomReport extends \Google\Collection
{
  /** @var string */
  public $chartType;
  /** @var string[] */
  public $comments;
  /** @var string */
  public $createdAt;
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $displayName;
  /** @var string */
  public $environment;
  /** @var string */
  public $filter;
  /** @var string */
  public $fromTime;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $lastViewedAt;
  /** @var string */
  public $limit;
  /** @var GoogleCloudApigeeV1CustomReportMetric[] */
  public $metrics;
  /** @var string */
  public $name;
  /** @var string */
  public $offset;
  /** @var string */
  public $organization;
  /** @var GoogleCloudApigeeV1ReportProperty[] */
  public $properties;
  /** @var string[] */
  public $sortByCols;
  /** @var string */
  public $sortOrder;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $timeUnit;
  /** @var string */
  public $toTime;
  /** @var string */
  public $topk;
  protected $collection_key = 'tags';
  protected $metricsType = GoogleCloudApigeeV1CustomReportMetric::class;
  protected $metricsDataType = 'array';
  protected $propertiesType = GoogleCloudApigeeV1ReportProperty::class;
  protected $propertiesDataType = 'array';
  /** @param string */
  public function setChartType($chartType)
  {
    $this->chartType = $chartType;
  }
  /** @return string */
  public function getChartType()
  {
    return $this->chartType;
  }
  /** @param string[] */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  /** @return string[] */
  public function getComments()
  {
    return $this->comments;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param string[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string[] */
  public function getDimensions()
  {
    return $this->dimensions;
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
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return string */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setFromTime($fromTime)
  {
    $this->fromTime = $fromTime;
  }
  /** @return string */
  public function getFromTime()
  {
    return $this->fromTime;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
  }
  /** @param string */
  public function setLastViewedAt($lastViewedAt)
  {
    $this->lastViewedAt = $lastViewedAt;
  }
  /** @return string */
  public function getLastViewedAt()
  {
    return $this->lastViewedAt;
  }
  /** @param string */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  /** @return string */
  public function getLimit()
  {
    return $this->limit;
  }
  /** @param GoogleCloudApigeeV1CustomReportMetric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudApigeeV1CustomReportMetric[] */
  public function getMetrics()
  {
    return $this->metrics;
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
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }
  /** @return string */
  public function getOffset()
  {
    return $this->offset;
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
  /** @param GoogleCloudApigeeV1ReportProperty[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudApigeeV1ReportProperty[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string[] */
  public function setSortByCols($sortByCols)
  {
    $this->sortByCols = $sortByCols;
  }
  /** @return string[] */
  public function getSortByCols()
  {
    return $this->sortByCols;
  }
  /** @param string */
  public function setSortOrder($sortOrder)
  {
    $this->sortOrder = $sortOrder;
  }
  /** @return string */
  public function getSortOrder()
  {
    return $this->sortOrder;
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
  /** @param string */
  public function setTimeUnit($timeUnit)
  {
    $this->timeUnit = $timeUnit;
  }
  /** @return string */
  public function getTimeUnit()
  {
    return $this->timeUnit;
  }
  /** @param string */
  public function setToTime($toTime)
  {
    $this->toTime = $toTime;
  }
  /** @return string */
  public function getToTime()
  {
    return $this->toTime;
  }
  /** @param string */
  public function setTopk($topk)
  {
    $this->topk = $topk;
  }
  /** @return string */
  public function getTopk()
  {
    return $this->topk;
  }
}

class GoogleCloudApigeeV1CustomReportMetric extends \Google\Model
{
  /** @var string */
  public $function;
  /** @var string */
  public $name;

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

class GoogleCloudApigeeV1DataCollector extends \Google\Model
{
  /** @var string */
  public $createdAt;
  /** @var string */
  public $description;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var string */
  public $type;

  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
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
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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

class GoogleCloudApigeeV1DataCollectorConfig extends \Google\Model
{
  /** @var string */
  public $name;
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

class GoogleCloudApigeeV1Datastore extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var GoogleCloudApigeeV1DatastoreConfig */
  public $datastoreConfig;
  /** @var string */
  public $displayName;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $org;
  /** @var string */
  public $self;
  /** @var string */
  public $targetType;
  protected $datastoreConfigType = GoogleCloudApigeeV1DatastoreConfig::class;
  protected $datastoreConfigDataType = '';
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
  /** @param GoogleCloudApigeeV1DatastoreConfig */
  public function setDatastoreConfig(GoogleCloudApigeeV1DatastoreConfig $datastoreConfig)
  {
    $this->datastoreConfig = $datastoreConfig;
  }
  /** @return GoogleCloudApigeeV1DatastoreConfig */
  public function getDatastoreConfig()
  {
    return $this->datastoreConfig;
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
  public function setLastUpdateTime($lastUpdateTime)
  {
    $this->lastUpdateTime = $lastUpdateTime;
  }
  /** @return string */
  public function getLastUpdateTime()
  {
    return $this->lastUpdateTime;
  }
  /** @param string */
  public function setOrg($org)
  {
    $this->org = $org;
  }
  /** @return string */
  public function getOrg()
  {
    return $this->org;
  }
  /** @param string */
  public function setSelf($self)
  {
    $this->self = $self;
  }
  /** @return string */
  public function getSelf()
  {
    return $this->self;
  }
  /** @param string */
  public function setTargetType($targetType)
  {
    $this->targetType = $targetType;
  }
  /** @return string */
  public function getTargetType()
  {
    return $this->targetType;
  }
}

class GoogleCloudApigeeV1DatastoreConfig extends \Google\Model
{
  /** @var string */
  public $bucketName;
  /** @var string */
  public $datasetName;
  /** @var string */
  public $path;
  /** @var string */
  public $projectId;
  /** @var string */
  public $tablePrefix;

  /** @param string */
  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  /** @return string */
  public function getBucketName()
  {
    return $this->bucketName;
  }
  /** @param string */
  public function setDatasetName($datasetName)
  {
    $this->datasetName = $datasetName;
  }
  /** @return string */
  public function getDatasetName()
  {
    return $this->datasetName;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param string */
  public function setTablePrefix($tablePrefix)
  {
    $this->tablePrefix = $tablePrefix;
  }
  /** @return string */
  public function getTablePrefix()
  {
    return $this->tablePrefix;
  }
}

class GoogleCloudApigeeV1DateRange extends \Google\Model
{
  /** @var string */
  public $end;
  /** @var string */
  public $start;

  /** @param string */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return string */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param string */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return string */
  public function getStart()
  {
    return $this->start;
  }
}

class GoogleCloudApigeeV1DebugMask extends \Google\Collection
{
  /** @var string[] */
  public $faultJSONPaths;
  /** @var string[] */
  public $faultXPaths;
  /** @var string */
  public $name;
  /** @var string[] */
  public $namespaces;
  /** @var string[] */
  public $requestJSONPaths;
  /** @var string[] */
  public $requestXPaths;
  /** @var string[] */
  public $responseJSONPaths;
  /** @var string[] */
  public $responseXPaths;
  /** @var string[] */
  public $variables;
  protected $collection_key = 'variables';
  /** @param string[] */
  public function setFaultJSONPaths($faultJSONPaths)
  {
    $this->faultJSONPaths = $faultJSONPaths;
  }
  /** @return string[] */
  public function getFaultJSONPaths()
  {
    return $this->faultJSONPaths;
  }
  /** @param string[] */
  public function setFaultXPaths($faultXPaths)
  {
    $this->faultXPaths = $faultXPaths;
  }
  /** @return string[] */
  public function getFaultXPaths()
  {
    return $this->faultXPaths;
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
  public function setNamespaces($namespaces)
  {
    $this->namespaces = $namespaces;
  }
  /** @return string[] */
  public function getNamespaces()
  {
    return $this->namespaces;
  }
  /** @param string[] */
  public function setRequestJSONPaths($requestJSONPaths)
  {
    $this->requestJSONPaths = $requestJSONPaths;
  }
  /** @return string[] */
  public function getRequestJSONPaths()
  {
    return $this->requestJSONPaths;
  }
  /** @param string[] */
  public function setRequestXPaths($requestXPaths)
  {
    $this->requestXPaths = $requestXPaths;
  }
  /** @return string[] */
  public function getRequestXPaths()
  {
    return $this->requestXPaths;
  }
  /** @param string[] */
  public function setResponseJSONPaths($responseJSONPaths)
  {
    $this->responseJSONPaths = $responseJSONPaths;
  }
  /** @return string[] */
  public function getResponseJSONPaths()
  {
    return $this->responseJSONPaths;
  }
  /** @param string[] */
  public function setResponseXPaths($responseXPaths)
  {
    $this->responseXPaths = $responseXPaths;
  }
  /** @return string[] */
  public function getResponseXPaths()
  {
    return $this->responseXPaths;
  }
  /** @param string[] */
  public function setVariables($variables)
  {
    $this->variables = $variables;
  }
  /** @return string[] */
  public function getVariables()
  {
    return $this->variables;
  }
}

class GoogleCloudApigeeV1DebugSession extends \Google\Model
{
  /** @var int */
  public $count;
  /** @var string */
  public $createTime;
  /** @var string */
  public $filter;
  /** @var string */
  public $name;
  /** @var string */
  public $timeout;
  /** @var int */
  public $tracesize;
  /** @var int */
  public $validity;

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
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
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
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
  }
  /** @param int */
  public function setTracesize($tracesize)
  {
    $this->tracesize = $tracesize;
  }
  /** @return int */
  public function getTracesize()
  {
    return $this->tracesize;
  }
  /** @param int */
  public function setValidity($validity)
  {
    $this->validity = $validity;
  }
  /** @return int */
  public function getValidity()
  {
    return $this->validity;
  }
}

class GoogleCloudApigeeV1DebugSessionTransaction extends \Google\Collection
{
  /** @var bool */
  public $completed;
  /** @var GoogleCloudApigeeV1Point[] */
  public $point;
  protected $collection_key = 'point';
  protected $pointType = GoogleCloudApigeeV1Point::class;
  protected $pointDataType = 'array';
  /** @param bool */
  public function setCompleted($completed)
  {
    $this->completed = $completed;
  }
  /** @return bool */
  public function getCompleted()
  {
    return $this->completed;
  }
  /** @param GoogleCloudApigeeV1Point[] */
  public function setPoint($point)
  {
    $this->point = $point;
  }
  /** @return GoogleCloudApigeeV1Point[] */
  public function getPoint()
  {
    return $this->point;
  }
}

class GoogleCloudApigeeV1DeleteCustomReportResponse extends \Google\Model
{
  /** @var string */
  public $message;

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

class GoogleCloudApigeeV1Deployment extends \Google\Collection
{
  /** @var string */
  public $apiProxy;
  /** @var string */
  public $deployStartTime;
  /** @var string */
  public $environment;
  /** @var GoogleRpcStatus[] */
  public $errors;
  /** @var GoogleCloudApigeeV1InstanceDeploymentStatus[] */
  public $instances;
  /** @var GoogleCloudApigeeV1PodStatus[] */
  public $pods;
  /** @var string */
  public $revision;
  /** @var GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict[] */
  public $routeConflicts;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $state;
  protected $collection_key = 'routeConflicts';
  protected $errorsType = GoogleRpcStatus::class;
  protected $errorsDataType = 'array';
  protected $instancesType = GoogleCloudApigeeV1InstanceDeploymentStatus::class;
  protected $instancesDataType = 'array';
  protected $podsType = GoogleCloudApigeeV1PodStatus::class;
  protected $podsDataType = 'array';
  protected $routeConflictsType = GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict::class;
  protected $routeConflictsDataType = 'array';
  /** @param string */
  public function setApiProxy($apiProxy)
  {
    $this->apiProxy = $apiProxy;
  }
  /** @return string */
  public function getApiProxy()
  {
    return $this->apiProxy;
  }
  /** @param string */
  public function setDeployStartTime($deployStartTime)
  {
    $this->deployStartTime = $deployStartTime;
  }
  /** @return string */
  public function getDeployStartTime()
  {
    return $this->deployStartTime;
  }
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
  /** @param GoogleRpcStatus[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GoogleRpcStatus[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param GoogleCloudApigeeV1InstanceDeploymentStatus[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return GoogleCloudApigeeV1InstanceDeploymentStatus[] */
  public function getInstances()
  {
    return $this->instances;
  }
  /** @param GoogleCloudApigeeV1PodStatus[] */
  public function setPods($pods)
  {
    $this->pods = $pods;
  }
  /** @return GoogleCloudApigeeV1PodStatus[] */
  public function getPods()
  {
    return $this->pods;
  }
  /** @param string */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string */
  public function getRevision()
  {
    return $this->revision;
  }
  /** @param GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict[] */
  public function setRouteConflicts($routeConflicts)
  {
    $this->routeConflicts = $routeConflicts;
  }
  /** @return GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict[] */
  public function getRouteConflicts()
  {
    return $this->routeConflicts;
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

class GoogleCloudApigeeV1DeploymentChangeReport extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1DeploymentChangeReportRoutingChange[] */
  public $routingChanges;
  /** @var GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict[] */
  public $routingConflicts;
  /** @var GoogleRpcPreconditionFailure */
  public $validationErrors;
  protected $collection_key = 'routingConflicts';
  protected $routingChangesType = GoogleCloudApigeeV1DeploymentChangeReportRoutingChange::class;
  protected $routingChangesDataType = 'array';
  protected $routingConflictsType = GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict::class;
  protected $routingConflictsDataType = 'array';
  protected $validationErrorsType = GoogleRpcPreconditionFailure::class;
  protected $validationErrorsDataType = '';
  /** @param GoogleCloudApigeeV1DeploymentChangeReportRoutingChange[] */
  public function setRoutingChanges($routingChanges)
  {
    $this->routingChanges = $routingChanges;
  }
  /** @return GoogleCloudApigeeV1DeploymentChangeReportRoutingChange[] */
  public function getRoutingChanges()
  {
    return $this->routingChanges;
  }
  /** @param GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict[] */
  public function setRoutingConflicts($routingConflicts)
  {
    $this->routingConflicts = $routingConflicts;
  }
  /** @return GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict[] */
  public function getRoutingConflicts()
  {
    return $this->routingConflicts;
  }
  /** @param GoogleRpcPreconditionFailure */
  public function setValidationErrors(GoogleRpcPreconditionFailure $validationErrors)
  {
    $this->validationErrors = $validationErrors;
  }
  /** @return GoogleRpcPreconditionFailure */
  public function getValidationErrors()
  {
    return $this->validationErrors;
  }
}

class GoogleCloudApigeeV1DeploymentChangeReportRoutingChange extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $environmentGroup;
  /** @var GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment */
  public $fromDeployment;
  /** @var bool */
  public $shouldSequenceRollout;
  /** @var GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment */
  public $toDeployment;
  protected $fromDeploymentType = GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment::class;
  protected $fromDeploymentDataType = '';
  protected $toDeploymentType = GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment::class;
  protected $toDeploymentDataType = '';
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
  public function setEnvironmentGroup($environmentGroup)
  {
    $this->environmentGroup = $environmentGroup;
  }
  /** @return string */
  public function getEnvironmentGroup()
  {
    return $this->environmentGroup;
  }
  /** @param GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment */
  public function setFromDeployment(GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment $fromDeployment)
  {
    $this->fromDeployment = $fromDeployment;
  }
  /** @return GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment */
  public function getFromDeployment()
  {
    return $this->fromDeployment;
  }
  /** @param bool */
  public function setShouldSequenceRollout($shouldSequenceRollout)
  {
    $this->shouldSequenceRollout = $shouldSequenceRollout;
  }
  /** @return bool */
  public function getShouldSequenceRollout()
  {
    return $this->shouldSequenceRollout;
  }
  /** @param GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment */
  public function setToDeployment(GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment $toDeployment)
  {
    $this->toDeployment = $toDeployment;
  }
  /** @return GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment */
  public function getToDeployment()
  {
    return $this->toDeployment;
  }
}

class GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict extends \Google\Model
{
  /** @var GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment */
  public $conflictingDeployment;
  /** @var string */
  public $description;
  /** @var string */
  public $environmentGroup;
  protected $conflictingDeploymentType = GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment::class;
  protected $conflictingDeploymentDataType = '';
  /** @param GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment */
  public function setConflictingDeployment(GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment $conflictingDeployment)
  {
    $this->conflictingDeployment = $conflictingDeployment;
  }
  /** @return GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment */
  public function getConflictingDeployment()
  {
    return $this->conflictingDeployment;
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
  public function setEnvironmentGroup($environmentGroup)
  {
    $this->environmentGroup = $environmentGroup;
  }
  /** @return string */
  public function getEnvironmentGroup()
  {
    return $this->environmentGroup;
  }
}

class GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment extends \Google\Model
{
  /** @var string */
  public $apiProxy;
  /** @var string */
  public $basepath;
  /** @var string */
  public $environment;
  /** @var string */
  public $revision;

  /** @param string */
  public function setApiProxy($apiProxy)
  {
    $this->apiProxy = $apiProxy;
  }
  /** @return string */
  public function getApiProxy()
  {
    return $this->apiProxy;
  }
  /** @param string */
  public function setBasepath($basepath)
  {
    $this->basepath = $basepath;
  }
  /** @return string */
  public function getBasepath()
  {
    return $this->basepath;
  }
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
  /** @param string */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string */
  public function getRevision()
  {
    return $this->revision;
  }
}

class GoogleCloudApigeeV1DeploymentConfig extends \Google\Model
{
  /** @var string[] */
  public $attributes;
  /** @var string */
  public $basePath;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $proxyUid;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $uid;

  /** @param string[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return string[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setBasePath($basePath)
  {
    $this->basePath = $basePath;
  }
  /** @return string */
  public function getBasePath()
  {
    return $this->basePath;
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
  public function setProxyUid($proxyUid)
  {
    $this->proxyUid = $proxyUid;
  }
  /** @return string */
  public function getProxyUid()
  {
    return $this->proxyUid;
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
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
  }
}

class GoogleCloudApigeeV1Developer extends \Google\Collection
{
  /** @var string */
  public $accessType;
  /** @var string */
  public $appFamily;
  /** @var string[] */
  public $apps;
  /** @var GoogleCloudApigeeV1Attribute[] */
  public $attributes;
  /** @var string[] */
  public $companies;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $developerId;
  /** @var string */
  public $email;
  /** @var string */
  public $firstName;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $lastName;
  /** @var string */
  public $organizationName;
  /** @var string */
  public $status;
  /** @var string */
  public $userName;
  protected $collection_key = 'companies';
  protected $attributesType = GoogleCloudApigeeV1Attribute::class;
  protected $attributesDataType = 'array';
  /** @param string */
  public function setAccessType($accessType)
  {
    $this->accessType = $accessType;
  }
  /** @return string */
  public function getAccessType()
  {
    return $this->accessType;
  }
  /** @param string */
  public function setAppFamily($appFamily)
  {
    $this->appFamily = $appFamily;
  }
  /** @return string */
  public function getAppFamily()
  {
    return $this->appFamily;
  }
  /** @param string[] */
  public function setApps($apps)
  {
    $this->apps = $apps;
  }
  /** @return string[] */
  public function getApps()
  {
    return $this->apps;
  }
  /** @param GoogleCloudApigeeV1Attribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudApigeeV1Attribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string[] */
  public function setCompanies($companies)
  {
    $this->companies = $companies;
  }
  /** @return string[] */
  public function getCompanies()
  {
    return $this->companies;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param string */
  public function setDeveloperId($developerId)
  {
    $this->developerId = $developerId;
  }
  /** @return string */
  public function getDeveloperId()
  {
    return $this->developerId;
  }
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }
  /** @return string */
  public function getFirstName()
  {
    return $this->firstName;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
  }
  /** @param string */
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }
  /** @return string */
  public function getLastName()
  {
    return $this->lastName;
  }
  /** @param string */
  public function setOrganizationName($organizationName)
  {
    $this->organizationName = $organizationName;
  }
  /** @return string */
  public function getOrganizationName()
  {
    return $this->organizationName;
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
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  /** @return string */
  public function getUserName()
  {
    return $this->userName;
  }
}

class GoogleCloudApigeeV1DeveloperApp extends \Google\Collection
{
  /** @var string[] */
  public $apiProducts;
  /** @var string */
  public $appFamily;
  /** @var string */
  public $appId;
  /** @var GoogleCloudApigeeV1Attribute[] */
  public $attributes;
  /** @var string */
  public $callbackUrl;
  /** @var string */
  public $createdAt;
  /** @var GoogleCloudApigeeV1Credential[] */
  public $credentials;
  /** @var string */
  public $developerId;
  /** @var string */
  public $keyExpiresIn;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var string[] */
  public $scopes;
  /** @var string */
  public $status;
  protected $collection_key = 'scopes';
  protected $attributesType = GoogleCloudApigeeV1Attribute::class;
  protected $attributesDataType = 'array';
  protected $credentialsType = GoogleCloudApigeeV1Credential::class;
  protected $credentialsDataType = 'array';
  /** @param string[] */
  public function setApiProducts($apiProducts)
  {
    $this->apiProducts = $apiProducts;
  }
  /** @return string[] */
  public function getApiProducts()
  {
    return $this->apiProducts;
  }
  /** @param string */
  public function setAppFamily($appFamily)
  {
    $this->appFamily = $appFamily;
  }
  /** @return string */
  public function getAppFamily()
  {
    return $this->appFamily;
  }
  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
  }
  /** @param GoogleCloudApigeeV1Attribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudApigeeV1Attribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setCallbackUrl($callbackUrl)
  {
    $this->callbackUrl = $callbackUrl;
  }
  /** @return string */
  public function getCallbackUrl()
  {
    return $this->callbackUrl;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param GoogleCloudApigeeV1Credential[] */
  public function setCredentials($credentials)
  {
    $this->credentials = $credentials;
  }
  /** @return GoogleCloudApigeeV1Credential[] */
  public function getCredentials()
  {
    return $this->credentials;
  }
  /** @param string */
  public function setDeveloperId($developerId)
  {
    $this->developerId = $developerId;
  }
  /** @return string */
  public function getDeveloperId()
  {
    return $this->developerId;
  }
  /** @param string */
  public function setKeyExpiresIn($keyExpiresIn)
  {
    $this->keyExpiresIn = $keyExpiresIn;
  }
  /** @return string */
  public function getKeyExpiresIn()
  {
    return $this->keyExpiresIn;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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

class GoogleCloudApigeeV1DeveloperAppKey extends \Google\Collection
{
  /** @var array[] */
  public $apiProducts;
  /** @var GoogleCloudApigeeV1Attribute[] */
  public $attributes;
  /** @var string */
  public $consumerKey;
  /** @var string */
  public $consumerSecret;
  /** @var string */
  public $expiresAt;
  /** @var string */
  public $expiresInSeconds;
  /** @var string */
  public $issuedAt;
  /** @var string[] */
  public $scopes;
  /** @var string */
  public $status;
  protected $collection_key = 'scopes';
  protected $attributesType = GoogleCloudApigeeV1Attribute::class;
  protected $attributesDataType = 'array';
  /** @param array[] */
  public function setApiProducts($apiProducts)
  {
    $this->apiProducts = $apiProducts;
  }
  /** @return array[] */
  public function getApiProducts()
  {
    return $this->apiProducts;
  }
  /** @param GoogleCloudApigeeV1Attribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudApigeeV1Attribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setConsumerKey($consumerKey)
  {
    $this->consumerKey = $consumerKey;
  }
  /** @return string */
  public function getConsumerKey()
  {
    return $this->consumerKey;
  }
  /** @param string */
  public function setConsumerSecret($consumerSecret)
  {
    $this->consumerSecret = $consumerSecret;
  }
  /** @return string */
  public function getConsumerSecret()
  {
    return $this->consumerSecret;
  }
  /** @param string */
  public function setExpiresAt($expiresAt)
  {
    $this->expiresAt = $expiresAt;
  }
  /** @return string */
  public function getExpiresAt()
  {
    return $this->expiresAt;
  }
  /** @param string */
  public function setExpiresInSeconds($expiresInSeconds)
  {
    $this->expiresInSeconds = $expiresInSeconds;
  }
  /** @return string */
  public function getExpiresInSeconds()
  {
    return $this->expiresInSeconds;
  }
  /** @param string */
  public function setIssuedAt($issuedAt)
  {
    $this->issuedAt = $issuedAt;
  }
  /** @return string */
  public function getIssuedAt()
  {
    return $this->issuedAt;
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

class GoogleCloudApigeeV1DeveloperBalance extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1DeveloperBalanceWallet[] */
  public $wallets;
  protected $collection_key = 'wallets';
  protected $walletsType = GoogleCloudApigeeV1DeveloperBalanceWallet::class;
  protected $walletsDataType = 'array';
  /** @param GoogleCloudApigeeV1DeveloperBalanceWallet[] */
  public function setWallets($wallets)
  {
    $this->wallets = $wallets;
  }
  /** @return GoogleCloudApigeeV1DeveloperBalanceWallet[] */
  public function getWallets()
  {
    return $this->wallets;
  }
}

class GoogleCloudApigeeV1DeveloperBalanceWallet extends \Google\Model
{
  /** @var GoogleTypeMoney */
  public $balance;
  /** @var string */
  public $lastCreditTime;
  protected $balanceType = GoogleTypeMoney::class;
  protected $balanceDataType = '';
  /** @param GoogleTypeMoney */
  public function setBalance(GoogleTypeMoney $balance)
  {
    $this->balance = $balance;
  }
  /** @return GoogleTypeMoney */
  public function getBalance()
  {
    return $this->balance;
  }
  /** @param string */
  public function setLastCreditTime($lastCreditTime)
  {
    $this->lastCreditTime = $lastCreditTime;
  }
  /** @return string */
  public function getLastCreditTime()
  {
    return $this->lastCreditTime;
  }
}

class GoogleCloudApigeeV1DeveloperMonetizationConfig extends \Google\Model
{
  /** @var string */
  public $billingType;

  /** @param string */
  public function setBillingType($billingType)
  {
    $this->billingType = $billingType;
  }
  /** @return string */
  public function getBillingType()
  {
    return $this->billingType;
  }
}

class GoogleCloudApigeeV1DeveloperSubscription extends \Google\Model
{
  /** @var string */
  public $apiproduct;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $endTime;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var string */
  public $startTime;

  /** @param string */
  public function setApiproduct($apiproduct)
  {
    $this->apiproduct = $apiproduct;
  }
  /** @return string */
  public function getApiproduct()
  {
    return $this->apiproduct;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
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
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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

class GoogleCloudApigeeV1DimensionMetric extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1Metric[] */
  public $metrics;
  /** @var string */
  public $name;
  protected $collection_key = 'metrics';
  protected $metricsType = GoogleCloudApigeeV1Metric::class;
  protected $metricsDataType = 'array';
  /** @param GoogleCloudApigeeV1Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudApigeeV1Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
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

class GoogleCloudApigeeV1EndpointAttachment extends \Google\Model
{
  /** @var string */
  public $connectionState;
  /** @var string */
  public $host;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $serviceAttachment;
  /** @var string */
  public $state;

  /** @param string */
  public function setConnectionState($connectionState)
  {
    $this->connectionState = $connectionState;
  }
  /** @return string */
  public function getConnectionState()
  {
    return $this->connectionState;
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
  public function setServiceAttachment($serviceAttachment)
  {
    $this->serviceAttachment = $serviceAttachment;
  }
  /** @return string */
  public function getServiceAttachment()
  {
    return $this->serviceAttachment;
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

class GoogleCloudApigeeV1EntityMetadata extends \Google\Model
{
  /** @var string */
  public $createdAt;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $subType;

  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
  }
  /** @param string */
  public function setSubType($subType)
  {
    $this->subType = $subType;
  }
  /** @return string */
  public function getSubType()
  {
    return $this->subType;
  }
}

class GoogleCloudApigeeV1Environment extends \Google\Model
{
  /** @var string */
  public $apiProxyType;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $deploymentType;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $forwardProxyUri;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var GoogleCloudApigeeV1NodeConfig */
  public $nodeConfig;
  /** @var GoogleCloudApigeeV1Properties */
  public $properties;
  /** @var string */
  public $state;
  protected $nodeConfigType = GoogleCloudApigeeV1NodeConfig::class;
  protected $nodeConfigDataType = '';
  protected $propertiesType = GoogleCloudApigeeV1Properties::class;
  protected $propertiesDataType = '';
  /** @param string */
  public function setApiProxyType($apiProxyType)
  {
    $this->apiProxyType = $apiProxyType;
  }
  /** @return string */
  public function getApiProxyType()
  {
    return $this->apiProxyType;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param string */
  public function setDeploymentType($deploymentType)
  {
    $this->deploymentType = $deploymentType;
  }
  /** @return string */
  public function getDeploymentType()
  {
    return $this->deploymentType;
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
  public function setForwardProxyUri($forwardProxyUri)
  {
    $this->forwardProxyUri = $forwardProxyUri;
  }
  /** @return string */
  public function getForwardProxyUri()
  {
    return $this->forwardProxyUri;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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
  /** @param GoogleCloudApigeeV1NodeConfig */
  public function setNodeConfig(GoogleCloudApigeeV1NodeConfig $nodeConfig)
  {
    $this->nodeConfig = $nodeConfig;
  }
  /** @return GoogleCloudApigeeV1NodeConfig */
  public function getNodeConfig()
  {
    return $this->nodeConfig;
  }
  /** @param GoogleCloudApigeeV1Properties */
  public function setProperties(GoogleCloudApigeeV1Properties $properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudApigeeV1Properties */
  public function getProperties()
  {
    return $this->properties;
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

class GoogleCloudApigeeV1EnvironmentConfig extends \Google\Collection
{
  /** @var string */
  public $arcConfigLocation;
  /** @var string */
  public $createTime;
  /** @var GoogleCloudApigeeV1DataCollectorConfig[] */
  public $dataCollectors;
  /** @var GoogleCloudApigeeV1DebugMask */
  public $debugMask;
  /** @var GoogleCloudApigeeV1DeploymentConfig[] */
  public $deployments;
  /** @var string[] */
  public $featureFlags;
  /** @var GoogleCloudApigeeV1FlowHookConfig[] */
  public $flowhooks;
  /** @var string */
  public $forwardProxyUri;
  /** @var string */
  public $gatewayConfigLocation;
  /** @var GoogleCloudApigeeV1KeystoreConfig[] */
  public $keystores;
  /** @var string */
  public $name;
  /** @var string */
  public $provider;
  /** @var string */
  public $pubsubTopic;
  /** @var GoogleCloudApigeeV1ReferenceConfig[] */
  public $resourceReferences;
  /** @var GoogleCloudApigeeV1ResourceConfig[] */
  public $resources;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $sequenceNumber;
  /** @var GoogleCloudApigeeV1TargetServerConfig[] */
  public $targets;
  /** @var GoogleCloudApigeeV1RuntimeTraceConfig */
  public $traceConfig;
  /** @var string */
  public $uid;
  protected $collection_key = 'targets';
  protected $dataCollectorsType = GoogleCloudApigeeV1DataCollectorConfig::class;
  protected $dataCollectorsDataType = 'array';
  protected $debugMaskType = GoogleCloudApigeeV1DebugMask::class;
  protected $debugMaskDataType = '';
  protected $deploymentsType = GoogleCloudApigeeV1DeploymentConfig::class;
  protected $deploymentsDataType = 'array';
  protected $flowhooksType = GoogleCloudApigeeV1FlowHookConfig::class;
  protected $flowhooksDataType = 'array';
  protected $keystoresType = GoogleCloudApigeeV1KeystoreConfig::class;
  protected $keystoresDataType = 'array';
  protected $resourceReferencesType = GoogleCloudApigeeV1ReferenceConfig::class;
  protected $resourceReferencesDataType = 'array';
  protected $resourcesType = GoogleCloudApigeeV1ResourceConfig::class;
  protected $resourcesDataType = 'array';
  protected $targetsType = GoogleCloudApigeeV1TargetServerConfig::class;
  protected $targetsDataType = 'array';
  protected $traceConfigType = GoogleCloudApigeeV1RuntimeTraceConfig::class;
  protected $traceConfigDataType = '';
  /** @param string */
  public function setArcConfigLocation($arcConfigLocation)
  {
    $this->arcConfigLocation = $arcConfigLocation;
  }
  /** @return string */
  public function getArcConfigLocation()
  {
    return $this->arcConfigLocation;
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
  /** @param GoogleCloudApigeeV1DataCollectorConfig[] */
  public function setDataCollectors($dataCollectors)
  {
    $this->dataCollectors = $dataCollectors;
  }
  /** @return GoogleCloudApigeeV1DataCollectorConfig[] */
  public function getDataCollectors()
  {
    return $this->dataCollectors;
  }
  /** @param GoogleCloudApigeeV1DebugMask */
  public function setDebugMask(GoogleCloudApigeeV1DebugMask $debugMask)
  {
    $this->debugMask = $debugMask;
  }
  /** @return GoogleCloudApigeeV1DebugMask */
  public function getDebugMask()
  {
    return $this->debugMask;
  }
  /** @param GoogleCloudApigeeV1DeploymentConfig[] */
  public function setDeployments($deployments)
  {
    $this->deployments = $deployments;
  }
  /** @return GoogleCloudApigeeV1DeploymentConfig[] */
  public function getDeployments()
  {
    return $this->deployments;
  }
  /** @param string[] */
  public function setFeatureFlags($featureFlags)
  {
    $this->featureFlags = $featureFlags;
  }
  /** @return string[] */
  public function getFeatureFlags()
  {
    return $this->featureFlags;
  }
  /** @param GoogleCloudApigeeV1FlowHookConfig[] */
  public function setFlowhooks($flowhooks)
  {
    $this->flowhooks = $flowhooks;
  }
  /** @return GoogleCloudApigeeV1FlowHookConfig[] */
  public function getFlowhooks()
  {
    return $this->flowhooks;
  }
  /** @param string */
  public function setForwardProxyUri($forwardProxyUri)
  {
    $this->forwardProxyUri = $forwardProxyUri;
  }
  /** @return string */
  public function getForwardProxyUri()
  {
    return $this->forwardProxyUri;
  }
  /** @param string */
  public function setGatewayConfigLocation($gatewayConfigLocation)
  {
    $this->gatewayConfigLocation = $gatewayConfigLocation;
  }
  /** @return string */
  public function getGatewayConfigLocation()
  {
    return $this->gatewayConfigLocation;
  }
  /** @param GoogleCloudApigeeV1KeystoreConfig[] */
  public function setKeystores($keystores)
  {
    $this->keystores = $keystores;
  }
  /** @return GoogleCloudApigeeV1KeystoreConfig[] */
  public function getKeystores()
  {
    return $this->keystores;
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
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  /** @return string */
  public function getProvider()
  {
    return $this->provider;
  }
  /** @param string */
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /** @return string */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
  /** @param GoogleCloudApigeeV1ReferenceConfig[] */
  public function setResourceReferences($resourceReferences)
  {
    $this->resourceReferences = $resourceReferences;
  }
  /** @return GoogleCloudApigeeV1ReferenceConfig[] */
  public function getResourceReferences()
  {
    return $this->resourceReferences;
  }
  /** @param GoogleCloudApigeeV1ResourceConfig[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return GoogleCloudApigeeV1ResourceConfig[] */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
  /** @param string */
  public function setSequenceNumber($sequenceNumber)
  {
    $this->sequenceNumber = $sequenceNumber;
  }
  /** @return string */
  public function getSequenceNumber()
  {
    return $this->sequenceNumber;
  }
  /** @param GoogleCloudApigeeV1TargetServerConfig[] */
  public function setTargets($targets)
  {
    $this->targets = $targets;
  }
  /** @return GoogleCloudApigeeV1TargetServerConfig[] */
  public function getTargets()
  {
    return $this->targets;
  }
  /** @param GoogleCloudApigeeV1RuntimeTraceConfig */
  public function setTraceConfig(GoogleCloudApigeeV1RuntimeTraceConfig $traceConfig)
  {
    $this->traceConfig = $traceConfig;
  }
  /** @return GoogleCloudApigeeV1RuntimeTraceConfig */
  public function getTraceConfig()
  {
    return $this->traceConfig;
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
}

class GoogleCloudApigeeV1EnvironmentGroup extends \Google\Collection
{
  /** @var string */
  public $createdAt;
  /** @var string[] */
  public $hostnames;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  protected $collection_key = 'hostnames';
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param string[] */
  public function setHostnames($hostnames)
  {
    $this->hostnames = $hostnames;
  }
  /** @return string[] */
  public function getHostnames()
  {
    return $this->hostnames;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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
}

class GoogleCloudApigeeV1EnvironmentGroupAttachment extends \Google\Model
{
  /** @var string */
  public $createdAt;
  /** @var string */
  public $environment;
  /** @var string */
  public $environmentGroupId;
  /** @var string */
  public $name;

  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
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
  /** @param string */
  public function setEnvironmentGroupId($environmentGroupId)
  {
    $this->environmentGroupId = $environmentGroupId;
  }
  /** @return string */
  public function getEnvironmentGroupId()
  {
    return $this->environmentGroupId;
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

class GoogleCloudApigeeV1EnvironmentGroupConfig extends \Google\Collection
{
  /** @var string[] */
  public $hostnames;
  /** @var string */
  public $name;
  /** @var string */
  public $revisionId;
  /** @var GoogleCloudApigeeV1RoutingRule[] */
  public $routingRules;
  /** @var string */
  public $uid;
  protected $collection_key = 'routingRules';
  protected $routingRulesType = GoogleCloudApigeeV1RoutingRule::class;
  protected $routingRulesDataType = 'array';
  /** @param string[] */
  public function setHostnames($hostnames)
  {
    $this->hostnames = $hostnames;
  }
  /** @return string[] */
  public function getHostnames()
  {
    return $this->hostnames;
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
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
  /** @param GoogleCloudApigeeV1RoutingRule[] */
  public function setRoutingRules($routingRules)
  {
    $this->routingRules = $routingRules;
  }
  /** @return GoogleCloudApigeeV1RoutingRule[] */
  public function getRoutingRules()
  {
    return $this->routingRules;
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
}

class GoogleCloudApigeeV1ExpireDeveloperSubscriptionRequest extends \Google\Model
{
}

class GoogleCloudApigeeV1Export extends \Google\Model
{
  /** @var string */
  public $created;
  /** @var string */
  public $datastoreName;
  /** @var string */
  public $description;
  /** @var string */
  public $error;
  /** @var string */
  public $executionTime;
  /** @var string */
  public $name;
  /** @var string */
  public $self;
  /** @var string */
  public $state;
  /** @var string */
  public $updated;

  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
  }
  /** @param string */
  public function setDatastoreName($datastoreName)
  {
    $this->datastoreName = $datastoreName;
  }
  /** @return string */
  public function getDatastoreName()
  {
    return $this->datastoreName;
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
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return string */
  public function getError()
  {
    return $this->error;
  }
  /** @param string */
  public function setExecutionTime($executionTime)
  {
    $this->executionTime = $executionTime;
  }
  /** @return string */
  public function getExecutionTime()
  {
    return $this->executionTime;
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
  public function setSelf($self)
  {
    $this->self = $self;
  }
  /** @return string */
  public function getSelf()
  {
    return $this->self;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class GoogleCloudApigeeV1ExportRequest extends \Google\Model
{
  /** @var string */
  public $csvDelimiter;
  /** @var string */
  public $datastoreName;
  /** @var GoogleCloudApigeeV1DateRange */
  public $dateRange;
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $outputFormat;
  protected $dateRangeType = GoogleCloudApigeeV1DateRange::class;
  protected $dateRangeDataType = '';
  /** @param string */
  public function setCsvDelimiter($csvDelimiter)
  {
    $this->csvDelimiter = $csvDelimiter;
  }
  /** @return string */
  public function getCsvDelimiter()
  {
    return $this->csvDelimiter;
  }
  /** @param string */
  public function setDatastoreName($datastoreName)
  {
    $this->datastoreName = $datastoreName;
  }
  /** @return string */
  public function getDatastoreName()
  {
    return $this->datastoreName;
  }
  /** @param GoogleCloudApigeeV1DateRange */
  public function setDateRange(GoogleCloudApigeeV1DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  /** @return GoogleCloudApigeeV1DateRange */
  public function getDateRange()
  {
    return $this->dateRange;
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
  public function setOutputFormat($outputFormat)
  {
    $this->outputFormat = $outputFormat;
  }
  /** @return string */
  public function getOutputFormat()
  {
    return $this->outputFormat;
  }
}

class GoogleCloudApigeeV1FlowHook extends \Google\Model
{
  /** @var bool */
  public $continueOnError;
  /** @var string */
  public $description;
  /** @var string */
  public $flowHookPoint;
  /** @var string */
  public $sharedFlow;

  /** @param bool */
  public function setContinueOnError($continueOnError)
  {
    $this->continueOnError = $continueOnError;
  }
  /** @return bool */
  public function getContinueOnError()
  {
    return $this->continueOnError;
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
  public function setFlowHookPoint($flowHookPoint)
  {
    $this->flowHookPoint = $flowHookPoint;
  }
  /** @return string */
  public function getFlowHookPoint()
  {
    return $this->flowHookPoint;
  }
  /** @param string */
  public function setSharedFlow($sharedFlow)
  {
    $this->sharedFlow = $sharedFlow;
  }
  /** @return string */
  public function getSharedFlow()
  {
    return $this->sharedFlow;
  }
}

class GoogleCloudApigeeV1FlowHookConfig extends \Google\Model
{
  /** @var bool */
  public $continueOnError;
  /** @var string */
  public $name;
  /** @var string */
  public $sharedFlowName;

  /** @param bool */
  public function setContinueOnError($continueOnError)
  {
    $this->continueOnError = $continueOnError;
  }
  /** @return bool */
  public function getContinueOnError()
  {
    return $this->continueOnError;
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
  public function setSharedFlowName($sharedFlowName)
  {
    $this->sharedFlowName = $sharedFlowName;
  }
  /** @return string */
  public function getSharedFlowName()
  {
    return $this->sharedFlowName;
  }
}

class GoogleCloudApigeeV1GenerateDownloadUrlRequest extends \Google\Model
{
}

class GoogleCloudApigeeV1GenerateDownloadUrlResponse extends \Google\Model
{
  /** @var string */
  public $downloadUri;

  /** @param string */
  public function setDownloadUri($downloadUri)
  {
    $this->downloadUri = $downloadUri;
  }
  /** @return string */
  public function getDownloadUri()
  {
    return $this->downloadUri;
  }
}

class GoogleCloudApigeeV1GenerateUploadUrlRequest extends \Google\Model
{
}

class GoogleCloudApigeeV1GenerateUploadUrlResponse extends \Google\Model
{
  /** @var string */
  public $uploadUri;

  /** @param string */
  public function setUploadUri($uploadUri)
  {
    $this->uploadUri = $uploadUri;
  }
  /** @return string */
  public function getUploadUri()
  {
    return $this->uploadUri;
  }
}

class GoogleCloudApigeeV1GetAsyncQueryResultUrlResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1GetAsyncQueryResultUrlResponseURLInfo[] */
  public $urls;
  protected $collection_key = 'urls';
  protected $urlsType = GoogleCloudApigeeV1GetAsyncQueryResultUrlResponseURLInfo::class;
  protected $urlsDataType = 'array';
  /** @param GoogleCloudApigeeV1GetAsyncQueryResultUrlResponseURLInfo[] */
  public function setUrls($urls)
  {
    $this->urls = $urls;
  }
  /** @return GoogleCloudApigeeV1GetAsyncQueryResultUrlResponseURLInfo[] */
  public function getUrls()
  {
    return $this->urls;
  }
}

class GoogleCloudApigeeV1GetAsyncQueryResultUrlResponseURLInfo extends \Google\Model
{
  /** @var string */
  public $md5;
  /** @var string */
  public $sizeBytes;
  /** @var string */
  public $uri;

  /** @param string */
  public function setMd5($md5)
  {
    $this->md5 = $md5;
  }
  /** @return string */
  public function getMd5()
  {
    return $this->md5;
  }
  /** @param string */
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /** @return string */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class GoogleCloudApigeeV1GetSyncAuthorizationRequest extends \Google\Model
{
}

class GoogleCloudApigeeV1GraphQLOperation extends \Google\Collection
{
  /** @var string */
  public $operation;
  /** @var string[] */
  public $operationTypes;
  protected $collection_key = 'operationTypes';
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
  /** @param string[] */
  public function setOperationTypes($operationTypes)
  {
    $this->operationTypes = $operationTypes;
  }
  /** @return string[] */
  public function getOperationTypes()
  {
    return $this->operationTypes;
  }
}

class GoogleCloudApigeeV1GraphQLOperationConfig extends \Google\Collection
{
  /** @var string */
  public $apiSource;
  /** @var GoogleCloudApigeeV1Attribute[] */
  public $attributes;
  /** @var GoogleCloudApigeeV1GraphQLOperation[] */
  public $operations;
  /** @var GoogleCloudApigeeV1Quota */
  public $quota;
  protected $collection_key = 'operations';
  protected $attributesType = GoogleCloudApigeeV1Attribute::class;
  protected $attributesDataType = 'array';
  protected $operationsType = GoogleCloudApigeeV1GraphQLOperation::class;
  protected $operationsDataType = 'array';
  protected $quotaType = GoogleCloudApigeeV1Quota::class;
  protected $quotaDataType = '';
  /** @param string */
  public function setApiSource($apiSource)
  {
    $this->apiSource = $apiSource;
  }
  /** @return string */
  public function getApiSource()
  {
    return $this->apiSource;
  }
  /** @param GoogleCloudApigeeV1Attribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudApigeeV1Attribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param GoogleCloudApigeeV1GraphQLOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleCloudApigeeV1GraphQLOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
  /** @param GoogleCloudApigeeV1Quota */
  public function setQuota(GoogleCloudApigeeV1Quota $quota)
  {
    $this->quota = $quota;
  }
  /** @return GoogleCloudApigeeV1Quota */
  public function getQuota()
  {
    return $this->quota;
  }
}

class GoogleCloudApigeeV1GraphQLOperationGroup extends \Google\Collection
{
  /** @var string */
  public $operationConfigType;
  /** @var GoogleCloudApigeeV1GraphQLOperationConfig[] */
  public $operationConfigs;
  protected $collection_key = 'operationConfigs';
  protected $operationConfigsType = GoogleCloudApigeeV1GraphQLOperationConfig::class;
  protected $operationConfigsDataType = 'array';
  /** @param string */
  public function setOperationConfigType($operationConfigType)
  {
    $this->operationConfigType = $operationConfigType;
  }
  /** @return string */
  public function getOperationConfigType()
  {
    return $this->operationConfigType;
  }
  /** @param GoogleCloudApigeeV1GraphQLOperationConfig[] */
  public function setOperationConfigs($operationConfigs)
  {
    $this->operationConfigs = $operationConfigs;
  }
  /** @return GoogleCloudApigeeV1GraphQLOperationConfig[] */
  public function getOperationConfigs()
  {
    return $this->operationConfigs;
  }
}

class GoogleCloudApigeeV1IngressConfig extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1EnvironmentGroupConfig[] */
  public $environmentGroups;
  /** @var string */
  public $name;
  /** @var string */
  public $revisionCreateTime;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $uid;
  protected $collection_key = 'environmentGroups';
  protected $environmentGroupsType = GoogleCloudApigeeV1EnvironmentGroupConfig::class;
  protected $environmentGroupsDataType = 'array';
  /** @param GoogleCloudApigeeV1EnvironmentGroupConfig[] */
  public function setEnvironmentGroups($environmentGroups)
  {
    $this->environmentGroups = $environmentGroups;
  }
  /** @return GoogleCloudApigeeV1EnvironmentGroupConfig[] */
  public function getEnvironmentGroups()
  {
    return $this->environmentGroups;
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
  public function setRevisionCreateTime($revisionCreateTime)
  {
    $this->revisionCreateTime = $revisionCreateTime;
  }
  /** @return string */
  public function getRevisionCreateTime()
  {
    return $this->revisionCreateTime;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
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
}

class GoogleCloudApigeeV1Instance extends \Google\Collection
{
  /** @var string[] */
  public $consumerAcceptList;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $description;
  /** @var string */
  public $diskEncryptionKeyName;
  /** @var string */
  public $displayName;
  /** @var string */
  public $host;
  /** @var string */
  public $ipRange;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $peeringCidrRange;
  /** @var string */
  public $port;
  /** @var string */
  public $runtimeVersion;
  /** @var string */
  public $serviceAttachment;
  /** @var string */
  public $state;
  protected $collection_key = 'consumerAcceptList';
  /** @param string[] */
  public function setConsumerAcceptList($consumerAcceptList)
  {
    $this->consumerAcceptList = $consumerAcceptList;
  }
  /** @return string[] */
  public function getConsumerAcceptList()
  {
    return $this->consumerAcceptList;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
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
  public function setDiskEncryptionKeyName($diskEncryptionKeyName)
  {
    $this->diskEncryptionKeyName = $diskEncryptionKeyName;
  }
  /** @return string */
  public function getDiskEncryptionKeyName()
  {
    return $this->diskEncryptionKeyName;
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
  public function setIpRange($ipRange)
  {
    $this->ipRange = $ipRange;
  }
  /** @return string */
  public function getIpRange()
  {
    return $this->ipRange;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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
  public function setPeeringCidrRange($peeringCidrRange)
  {
    $this->peeringCidrRange = $peeringCidrRange;
  }
  /** @return string */
  public function getPeeringCidrRange()
  {
    return $this->peeringCidrRange;
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
  public function setRuntimeVersion($runtimeVersion)
  {
    $this->runtimeVersion = $runtimeVersion;
  }
  /** @return string */
  public function getRuntimeVersion()
  {
    return $this->runtimeVersion;
  }
  /** @param string */
  public function setServiceAttachment($serviceAttachment)
  {
    $this->serviceAttachment = $serviceAttachment;
  }
  /** @return string */
  public function getServiceAttachment()
  {
    return $this->serviceAttachment;
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

class GoogleCloudApigeeV1InstanceAttachment extends \Google\Model
{
  /** @var string */
  public $createdAt;
  /** @var string */
  public $environment;
  /** @var string */
  public $name;

  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
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

class GoogleCloudApigeeV1InstanceDeploymentStatus extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRevision[] */
  public $deployedRevisions;
  /** @var GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRoute[] */
  public $deployedRoutes;
  /** @var string */
  public $instance;
  protected $collection_key = 'deployedRoutes';
  protected $deployedRevisionsType = GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRevision::class;
  protected $deployedRevisionsDataType = 'array';
  protected $deployedRoutesType = GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRoute::class;
  protected $deployedRoutesDataType = 'array';
  /** @param GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRevision[] */
  public function setDeployedRevisions($deployedRevisions)
  {
    $this->deployedRevisions = $deployedRevisions;
  }
  /** @return GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRevision[] */
  public function getDeployedRevisions()
  {
    return $this->deployedRevisions;
  }
  /** @param GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRoute[] */
  public function setDeployedRoutes($deployedRoutes)
  {
    $this->deployedRoutes = $deployedRoutes;
  }
  /** @return GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRoute[] */
  public function getDeployedRoutes()
  {
    return $this->deployedRoutes;
  }
  /** @param string */
  public function setInstance($instance)
  {
    $this->instance = $instance;
  }
  /** @return string */
  public function getInstance()
  {
    return $this->instance;
  }
}

class GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRevision extends \Google\Model
{
  /** @var int */
  public $percentage;
  /** @var string */
  public $revision;

  /** @param int */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return int */
  public function getPercentage()
  {
    return $this->percentage;
  }
  /** @param string */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string */
  public function getRevision()
  {
    return $this->revision;
  }
}

class GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRoute extends \Google\Model
{
  /** @var string */
  public $basepath;
  /** @var string */
  public $envgroup;
  /** @var string */
  public $environment;
  /** @var int */
  public $percentage;

  /** @param string */
  public function setBasepath($basepath)
  {
    $this->basepath = $basepath;
  }
  /** @return string */
  public function getBasepath()
  {
    return $this->basepath;
  }
  /** @param string */
  public function setEnvgroup($envgroup)
  {
    $this->envgroup = $envgroup;
  }
  /** @return string */
  public function getEnvgroup()
  {
    return $this->envgroup;
  }
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
  /** @param int */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return int */
  public function getPercentage()
  {
    return $this->percentage;
  }
}

class GoogleCloudApigeeV1IntegrationConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class GoogleCloudApigeeV1KeyAliasReference extends \Google\Model
{
  /** @var string */
  public $aliasId;
  /** @var string */
  public $reference;

  /** @param string */
  public function setAliasId($aliasId)
  {
    $this->aliasId = $aliasId;
  }
  /** @return string */
  public function getAliasId()
  {
    return $this->aliasId;
  }
  /** @param string */
  public function setReference($reference)
  {
    $this->reference = $reference;
  }
  /** @return string */
  public function getReference()
  {
    return $this->reference;
  }
}

class GoogleCloudApigeeV1KeyValueEntry extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
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

class GoogleCloudApigeeV1KeyValueMap extends \Google\Model
{
  /** @var bool */
  public $encrypted;
  /** @var string */
  public $name;

  /** @param bool */
  public function setEncrypted($encrypted)
  {
    $this->encrypted = $encrypted;
  }
  /** @return bool */
  public function getEncrypted()
  {
    return $this->encrypted;
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

class GoogleCloudApigeeV1Keystore extends \Google\Collection
{
  /** @var string[] */
  public $aliases;
  /** @var string */
  public $name;
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

class GoogleCloudApigeeV1KeystoreConfig extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1AliasRevisionConfig[] */
  public $aliases;
  /** @var string */
  public $name;
  protected $collection_key = 'aliases';
  protected $aliasesType = GoogleCloudApigeeV1AliasRevisionConfig::class;
  protected $aliasesDataType = 'array';
  /** @param GoogleCloudApigeeV1AliasRevisionConfig[] */
  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }
  /** @return GoogleCloudApigeeV1AliasRevisionConfig[] */
  public function getAliases()
  {
    return $this->aliases;
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

class GoogleCloudApigeeV1ListApiCategoriesResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ApiCategoryData[] */
  public $data;
  /** @var string */
  public $errorCode;
  /** @var string */
  public $message;
  /** @var string */
  public $requestId;
  /** @var string */
  public $status;
  protected $collection_key = 'data';
  protected $dataType = GoogleCloudApigeeV1ApiCategoryData::class;
  protected $dataDataType = 'array';
  /** @param GoogleCloudApigeeV1ApiCategoryData[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return GoogleCloudApigeeV1ApiCategoryData[] */
  public function getData()
  {
    return $this->data;
  }
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
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /** @return string */
  public function getMessage()
  {
    return $this->message;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
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

class GoogleCloudApigeeV1ListApiProductsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ApiProduct[] */
  public $apiProduct;
  protected $collection_key = 'apiProduct';
  protected $apiProductType = GoogleCloudApigeeV1ApiProduct::class;
  protected $apiProductDataType = 'array';
  /** @param GoogleCloudApigeeV1ApiProduct[] */
  public function setApiProduct($apiProduct)
  {
    $this->apiProduct = $apiProduct;
  }
  /** @return GoogleCloudApigeeV1ApiProduct[] */
  public function getApiProduct()
  {
    return $this->apiProduct;
  }
}

class GoogleCloudApigeeV1ListApiProxiesResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ApiProxy[] */
  public $proxies;
  protected $collection_key = 'proxies';
  protected $proxiesType = GoogleCloudApigeeV1ApiProxy::class;
  protected $proxiesDataType = 'array';
  /** @param GoogleCloudApigeeV1ApiProxy[] */
  public function setProxies($proxies)
  {
    $this->proxies = $proxies;
  }
  /** @return GoogleCloudApigeeV1ApiProxy[] */
  public function getProxies()
  {
    return $this->proxies;
  }
}

class GoogleCloudApigeeV1ListAppsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1App[] */
  public $app;
  protected $collection_key = 'app';
  protected $appType = GoogleCloudApigeeV1App::class;
  protected $appDataType = 'array';
  /** @param GoogleCloudApigeeV1App[] */
  public function setApp($app)
  {
    $this->app = $app;
  }
  /** @return GoogleCloudApigeeV1App[] */
  public function getApp()
  {
    return $this->app;
  }
}

class GoogleCloudApigeeV1ListArchiveDeploymentsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ArchiveDeployment[] */
  public $archiveDeployments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'archiveDeployments';
  protected $archiveDeploymentsType = GoogleCloudApigeeV1ArchiveDeployment::class;
  protected $archiveDeploymentsDataType = 'array';
  /** @param GoogleCloudApigeeV1ArchiveDeployment[] */
  public function setArchiveDeployments($archiveDeployments)
  {
    $this->archiveDeployments = $archiveDeployments;
  }
  /** @return GoogleCloudApigeeV1ArchiveDeployment[] */
  public function getArchiveDeployments()
  {
    return $this->archiveDeployments;
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

class GoogleCloudApigeeV1ListAsyncQueriesResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1AsyncQuery[] */
  public $queries;
  protected $collection_key = 'queries';
  protected $queriesType = GoogleCloudApigeeV1AsyncQuery::class;
  protected $queriesDataType = 'array';
  /** @param GoogleCloudApigeeV1AsyncQuery[] */
  public function setQueries($queries)
  {
    $this->queries = $queries;
  }
  /** @return GoogleCloudApigeeV1AsyncQuery[] */
  public function getQueries()
  {
    return $this->queries;
  }
}

class GoogleCloudApigeeV1ListCustomReportsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1CustomReport[] */
  public $qualifier;
  protected $collection_key = 'qualifier';
  protected $qualifierType = GoogleCloudApigeeV1CustomReport::class;
  protected $qualifierDataType = 'array';
  /** @param GoogleCloudApigeeV1CustomReport[] */
  public function setQualifier($qualifier)
  {
    $this->qualifier = $qualifier;
  }
  /** @return GoogleCloudApigeeV1CustomReport[] */
  public function getQualifier()
  {
    return $this->qualifier;
  }
}

class GoogleCloudApigeeV1ListDataCollectorsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1DataCollector[] */
  public $dataCollectors;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dataCollectors';
  protected $dataCollectorsType = GoogleCloudApigeeV1DataCollector::class;
  protected $dataCollectorsDataType = 'array';
  /** @param GoogleCloudApigeeV1DataCollector[] */
  public function setDataCollectors($dataCollectors)
  {
    $this->dataCollectors = $dataCollectors;
  }
  /** @return GoogleCloudApigeeV1DataCollector[] */
  public function getDataCollectors()
  {
    return $this->dataCollectors;
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

class GoogleCloudApigeeV1ListDatastoresResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1Datastore[] */
  public $datastores;
  protected $collection_key = 'datastores';
  protected $datastoresType = GoogleCloudApigeeV1Datastore::class;
  protected $datastoresDataType = 'array';
  /** @param GoogleCloudApigeeV1Datastore[] */
  public function setDatastores($datastores)
  {
    $this->datastores = $datastores;
  }
  /** @return GoogleCloudApigeeV1Datastore[] */
  public function getDatastores()
  {
    return $this->datastores;
  }
}

class GoogleCloudApigeeV1ListDebugSessionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudApigeeV1Session[] */
  public $sessions;
  protected $collection_key = 'sessions';
  protected $sessionsType = GoogleCloudApigeeV1Session::class;
  protected $sessionsDataType = 'array';
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
  /** @param GoogleCloudApigeeV1Session[] */
  public function setSessions($sessions)
  {
    $this->sessions = $sessions;
  }
  /** @return GoogleCloudApigeeV1Session[] */
  public function getSessions()
  {
    return $this->sessions;
  }
}

class GoogleCloudApigeeV1ListDeploymentsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1Deployment[] */
  public $deployments;
  protected $collection_key = 'deployments';
  protected $deploymentsType = GoogleCloudApigeeV1Deployment::class;
  protected $deploymentsDataType = 'array';
  /** @param GoogleCloudApigeeV1Deployment[] */
  public function setDeployments($deployments)
  {
    $this->deployments = $deployments;
  }
  /** @return GoogleCloudApigeeV1Deployment[] */
  public function getDeployments()
  {
    return $this->deployments;
  }
}

class GoogleCloudApigeeV1ListDeveloperAppsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1DeveloperApp[] */
  public $app;
  protected $collection_key = 'app';
  protected $appType = GoogleCloudApigeeV1DeveloperApp::class;
  protected $appDataType = 'array';
  /** @param GoogleCloudApigeeV1DeveloperApp[] */
  public function setApp($app)
  {
    $this->app = $app;
  }
  /** @return GoogleCloudApigeeV1DeveloperApp[] */
  public function getApp()
  {
    return $this->app;
  }
}

class GoogleCloudApigeeV1ListDeveloperSubscriptionsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1DeveloperSubscription[] */
  public $developerSubscriptions;
  /** @var string */
  public $nextStartKey;
  protected $collection_key = 'developerSubscriptions';
  protected $developerSubscriptionsType = GoogleCloudApigeeV1DeveloperSubscription::class;
  protected $developerSubscriptionsDataType = 'array';
  /** @param GoogleCloudApigeeV1DeveloperSubscription[] */
  public function setDeveloperSubscriptions($developerSubscriptions)
  {
    $this->developerSubscriptions = $developerSubscriptions;
  }
  /** @return GoogleCloudApigeeV1DeveloperSubscription[] */
  public function getDeveloperSubscriptions()
  {
    return $this->developerSubscriptions;
  }
  /** @param string */
  public function setNextStartKey($nextStartKey)
  {
    $this->nextStartKey = $nextStartKey;
  }
  /** @return string */
  public function getNextStartKey()
  {
    return $this->nextStartKey;
  }
}

class GoogleCloudApigeeV1ListEndpointAttachmentsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1EndpointAttachment[] */
  public $endpointAttachments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'endpointAttachments';
  protected $endpointAttachmentsType = GoogleCloudApigeeV1EndpointAttachment::class;
  protected $endpointAttachmentsDataType = 'array';
  /** @param GoogleCloudApigeeV1EndpointAttachment[] */
  public function setEndpointAttachments($endpointAttachments)
  {
    $this->endpointAttachments = $endpointAttachments;
  }
  /** @return GoogleCloudApigeeV1EndpointAttachment[] */
  public function getEndpointAttachments()
  {
    return $this->endpointAttachments;
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

class GoogleCloudApigeeV1ListEnvironmentGroupAttachmentsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1EnvironmentGroupAttachment[] */
  public $environmentGroupAttachments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'environmentGroupAttachments';
  protected $environmentGroupAttachmentsType = GoogleCloudApigeeV1EnvironmentGroupAttachment::class;
  protected $environmentGroupAttachmentsDataType = 'array';
  /** @param GoogleCloudApigeeV1EnvironmentGroupAttachment[] */
  public function setEnvironmentGroupAttachments($environmentGroupAttachments)
  {
    $this->environmentGroupAttachments = $environmentGroupAttachments;
  }
  /** @return GoogleCloudApigeeV1EnvironmentGroupAttachment[] */
  public function getEnvironmentGroupAttachments()
  {
    return $this->environmentGroupAttachments;
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

class GoogleCloudApigeeV1ListEnvironmentGroupsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1EnvironmentGroup[] */
  public $environmentGroups;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'environmentGroups';
  protected $environmentGroupsType = GoogleCloudApigeeV1EnvironmentGroup::class;
  protected $environmentGroupsDataType = 'array';
  /** @param GoogleCloudApigeeV1EnvironmentGroup[] */
  public function setEnvironmentGroups($environmentGroups)
  {
    $this->environmentGroups = $environmentGroups;
  }
  /** @return GoogleCloudApigeeV1EnvironmentGroup[] */
  public function getEnvironmentGroups()
  {
    return $this->environmentGroups;
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

class GoogleCloudApigeeV1ListEnvironmentResourcesResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ResourceFile[] */
  public $resourceFile;
  protected $collection_key = 'resourceFile';
  protected $resourceFileType = GoogleCloudApigeeV1ResourceFile::class;
  protected $resourceFileDataType = 'array';
  /** @param GoogleCloudApigeeV1ResourceFile[] */
  public function setResourceFile($resourceFile)
  {
    $this->resourceFile = $resourceFile;
  }
  /** @return GoogleCloudApigeeV1ResourceFile[] */
  public function getResourceFile()
  {
    return $this->resourceFile;
  }
}

class GoogleCloudApigeeV1ListExportsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1Export[] */
  public $exports;
  protected $collection_key = 'exports';
  protected $exportsType = GoogleCloudApigeeV1Export::class;
  protected $exportsDataType = 'array';
  /** @param GoogleCloudApigeeV1Export[] */
  public function setExports($exports)
  {
    $this->exports = $exports;
  }
  /** @return GoogleCloudApigeeV1Export[] */
  public function getExports()
  {
    return $this->exports;
  }
}

class GoogleCloudApigeeV1ListHybridIssuersResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ServiceIssuersMapping[] */
  public $issuers;
  protected $collection_key = 'issuers';
  protected $issuersType = GoogleCloudApigeeV1ServiceIssuersMapping::class;
  protected $issuersDataType = 'array';
  /** @param GoogleCloudApigeeV1ServiceIssuersMapping[] */
  public function setIssuers($issuers)
  {
    $this->issuers = $issuers;
  }
  /** @return GoogleCloudApigeeV1ServiceIssuersMapping[] */
  public function getIssuers()
  {
    return $this->issuers;
  }
}

class GoogleCloudApigeeV1ListInstanceAttachmentsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1InstanceAttachment[] */
  public $attachments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'attachments';
  protected $attachmentsType = GoogleCloudApigeeV1InstanceAttachment::class;
  protected $attachmentsDataType = 'array';
  /** @param GoogleCloudApigeeV1InstanceAttachment[] */
  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }
  /** @return GoogleCloudApigeeV1InstanceAttachment[] */
  public function getAttachments()
  {
    return $this->attachments;
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

class GoogleCloudApigeeV1ListInstancesResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1Instance[] */
  public $instances;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'instances';
  protected $instancesType = GoogleCloudApigeeV1Instance::class;
  protected $instancesDataType = 'array';
  /** @param GoogleCloudApigeeV1Instance[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return GoogleCloudApigeeV1Instance[] */
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

class GoogleCloudApigeeV1ListKeyValueEntriesResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1KeyValueEntry[] */
  public $keyValueEntries;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'keyValueEntries';
  protected $keyValueEntriesType = GoogleCloudApigeeV1KeyValueEntry::class;
  protected $keyValueEntriesDataType = 'array';
  /** @param GoogleCloudApigeeV1KeyValueEntry[] */
  public function setKeyValueEntries($keyValueEntries)
  {
    $this->keyValueEntries = $keyValueEntries;
  }
  /** @return GoogleCloudApigeeV1KeyValueEntry[] */
  public function getKeyValueEntries()
  {
    return $this->keyValueEntries;
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

class GoogleCloudApigeeV1ListNatAddressesResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1NatAddress[] */
  public $natAddresses;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'natAddresses';
  protected $natAddressesType = GoogleCloudApigeeV1NatAddress::class;
  protected $natAddressesDataType = 'array';
  /** @param GoogleCloudApigeeV1NatAddress[] */
  public function setNatAddresses($natAddresses)
  {
    $this->natAddresses = $natAddresses;
  }
  /** @return GoogleCloudApigeeV1NatAddress[] */
  public function getNatAddresses()
  {
    return $this->natAddresses;
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

class GoogleCloudApigeeV1ListOfDevelopersResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1Developer[] */
  public $developer;
  protected $collection_key = 'developer';
  protected $developerType = GoogleCloudApigeeV1Developer::class;
  protected $developerDataType = 'array';
  /** @param GoogleCloudApigeeV1Developer[] */
  public function setDeveloper($developer)
  {
    $this->developer = $developer;
  }
  /** @return GoogleCloudApigeeV1Developer[] */
  public function getDeveloper()
  {
    return $this->developer;
  }
}

class GoogleCloudApigeeV1ListOrganizationsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1OrganizationProjectMapping[] */
  public $organizations;
  protected $collection_key = 'organizations';
  protected $organizationsType = GoogleCloudApigeeV1OrganizationProjectMapping::class;
  protected $organizationsDataType = 'array';
  /** @param GoogleCloudApigeeV1OrganizationProjectMapping[] */
  public function setOrganizations($organizations)
  {
    $this->organizations = $organizations;
  }
  /** @return GoogleCloudApigeeV1OrganizationProjectMapping[] */
  public function getOrganizations()
  {
    return $this->organizations;
  }
}

class GoogleCloudApigeeV1ListRatePlansResponse extends \Google\Collection
{
  /** @var string */
  public $nextStartKey;
  /** @var GoogleCloudApigeeV1RatePlan[] */
  public $ratePlans;
  protected $collection_key = 'ratePlans';
  protected $ratePlansType = GoogleCloudApigeeV1RatePlan::class;
  protected $ratePlansDataType = 'array';
  /** @param string */
  public function setNextStartKey($nextStartKey)
  {
    $this->nextStartKey = $nextStartKey;
  }
  /** @return string */
  public function getNextStartKey()
  {
    return $this->nextStartKey;
  }
  /** @param GoogleCloudApigeeV1RatePlan[] */
  public function setRatePlans($ratePlans)
  {
    $this->ratePlans = $ratePlans;
  }
  /** @return GoogleCloudApigeeV1RatePlan[] */
  public function getRatePlans()
  {
    return $this->ratePlans;
  }
}

class GoogleCloudApigeeV1ListSecurityProfileRevisionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudApigeeV1SecurityProfile[] */
  public $securityProfiles;
  protected $collection_key = 'securityProfiles';
  protected $securityProfilesType = GoogleCloudApigeeV1SecurityProfile::class;
  protected $securityProfilesDataType = 'array';
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
  /** @param GoogleCloudApigeeV1SecurityProfile[] */
  public function setSecurityProfiles($securityProfiles)
  {
    $this->securityProfiles = $securityProfiles;
  }
  /** @return GoogleCloudApigeeV1SecurityProfile[] */
  public function getSecurityProfiles()
  {
    return $this->securityProfiles;
  }
}

class GoogleCloudApigeeV1ListSecurityProfilesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudApigeeV1SecurityProfile[] */
  public $securityProfiles;
  protected $collection_key = 'securityProfiles';
  protected $securityProfilesType = GoogleCloudApigeeV1SecurityProfile::class;
  protected $securityProfilesDataType = 'array';
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
  /** @param GoogleCloudApigeeV1SecurityProfile[] */
  public function setSecurityProfiles($securityProfiles)
  {
    $this->securityProfiles = $securityProfiles;
  }
  /** @return GoogleCloudApigeeV1SecurityProfile[] */
  public function getSecurityProfiles()
  {
    return $this->securityProfiles;
  }
}

class GoogleCloudApigeeV1ListSecurityReportsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudApigeeV1SecurityReport[] */
  public $securityReports;
  protected $collection_key = 'securityReports';
  protected $securityReportsType = GoogleCloudApigeeV1SecurityReport::class;
  protected $securityReportsDataType = 'array';
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
  /** @param GoogleCloudApigeeV1SecurityReport[] */
  public function setSecurityReports($securityReports)
  {
    $this->securityReports = $securityReports;
  }
  /** @return GoogleCloudApigeeV1SecurityReport[] */
  public function getSecurityReports()
  {
    return $this->securityReports;
  }
}

class GoogleCloudApigeeV1ListSharedFlowsResponse extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1SharedFlow[] */
  public $sharedFlows;
  protected $collection_key = 'sharedFlows';
  protected $sharedFlowsType = GoogleCloudApigeeV1SharedFlow::class;
  protected $sharedFlowsDataType = 'array';
  /** @param GoogleCloudApigeeV1SharedFlow[] */
  public function setSharedFlows($sharedFlows)
  {
    $this->sharedFlows = $sharedFlows;
  }
  /** @return GoogleCloudApigeeV1SharedFlow[] */
  public function getSharedFlows()
  {
    return $this->sharedFlows;
  }
}

class GoogleCloudApigeeV1ListTraceConfigOverridesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudApigeeV1TraceConfigOverride[] */
  public $traceConfigOverrides;
  protected $collection_key = 'traceConfigOverrides';
  protected $traceConfigOverridesType = GoogleCloudApigeeV1TraceConfigOverride::class;
  protected $traceConfigOverridesDataType = 'array';
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
  /** @param GoogleCloudApigeeV1TraceConfigOverride[] */
  public function setTraceConfigOverrides($traceConfigOverrides)
  {
    $this->traceConfigOverrides = $traceConfigOverrides;
  }
  /** @return GoogleCloudApigeeV1TraceConfigOverride[] */
  public function getTraceConfigOverrides()
  {
    return $this->traceConfigOverrides;
  }
}

class GoogleCloudApigeeV1Metadata extends \Google\Collection
{
  /** @var string[] */
  public $errors;
  /** @var string[] */
  public $notices;
  protected $collection_key = 'notices';
  /** @param string[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return string[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param string[] */
  public function setNotices($notices)
  {
    $this->notices = $notices;
  }
  /** @return string[] */
  public function getNotices()
  {
    return $this->notices;
  }
}

class GoogleCloudApigeeV1Metric extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var array[] */
  public $values;
  protected $collection_key = 'values';
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
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return array[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudApigeeV1MetricAggregation extends \Google\Model
{
  /** @var string */
  public $aggregation;
  /** @var string */
  public $name;
  /** @var string */
  public $order;

  /** @param string */
  public function setAggregation($aggregation)
  {
    $this->aggregation = $aggregation;
  }
  /** @return string */
  public function getAggregation()
  {
    return $this->aggregation;
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
  public function setOrder($order)
  {
    $this->order = $order;
  }
  /** @return string */
  public function getOrder()
  {
    return $this->order;
  }
}

class GoogleCloudApigeeV1MonetizationConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class GoogleCloudApigeeV1NatAddress extends \Google\Model
{
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $name;
  /** @var string */
  public $state;

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
}

class GoogleCloudApigeeV1NodeConfig extends \Google\Model
{
  /** @var string */
  public $currentAggregateNodeCount;
  /** @var string */
  public $maxNodeCount;
  /** @var string */
  public $minNodeCount;

  /** @param string */
  public function setCurrentAggregateNodeCount($currentAggregateNodeCount)
  {
    $this->currentAggregateNodeCount = $currentAggregateNodeCount;
  }
  /** @return string */
  public function getCurrentAggregateNodeCount()
  {
    return $this->currentAggregateNodeCount;
  }
  /** @param string */
  public function setMaxNodeCount($maxNodeCount)
  {
    $this->maxNodeCount = $maxNodeCount;
  }
  /** @return string */
  public function getMaxNodeCount()
  {
    return $this->maxNodeCount;
  }
  /** @param string */
  public function setMinNodeCount($minNodeCount)
  {
    $this->minNodeCount = $minNodeCount;
  }
  /** @return string */
  public function getMinNodeCount()
  {
    return $this->minNodeCount;
  }
}

class GoogleCloudApigeeV1Operation extends \Google\Collection
{
  /** @var string[] */
  public $methods;
  /** @var string */
  public $resource;
  protected $collection_key = 'methods';
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

class GoogleCloudApigeeV1OperationConfig extends \Google\Collection
{
  /** @var string */
  public $apiSource;
  /** @var GoogleCloudApigeeV1Attribute[] */
  public $attributes;
  /** @var GoogleCloudApigeeV1Operation[] */
  public $operations;
  /** @var GoogleCloudApigeeV1Quota */
  public $quota;
  protected $collection_key = 'operations';
  protected $attributesType = GoogleCloudApigeeV1Attribute::class;
  protected $attributesDataType = 'array';
  protected $operationsType = GoogleCloudApigeeV1Operation::class;
  protected $operationsDataType = 'array';
  protected $quotaType = GoogleCloudApigeeV1Quota::class;
  protected $quotaDataType = '';
  /** @param string */
  public function setApiSource($apiSource)
  {
    $this->apiSource = $apiSource;
  }
  /** @return string */
  public function getApiSource()
  {
    return $this->apiSource;
  }
  /** @param GoogleCloudApigeeV1Attribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudApigeeV1Attribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param GoogleCloudApigeeV1Operation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleCloudApigeeV1Operation[] */
  public function getOperations()
  {
    return $this->operations;
  }
  /** @param GoogleCloudApigeeV1Quota */
  public function setQuota(GoogleCloudApigeeV1Quota $quota)
  {
    $this->quota = $quota;
  }
  /** @return GoogleCloudApigeeV1Quota */
  public function getQuota()
  {
    return $this->quota;
  }
}

class GoogleCloudApigeeV1OperationGroup extends \Google\Collection
{
  /** @var string */
  public $operationConfigType;
  /** @var GoogleCloudApigeeV1OperationConfig[] */
  public $operationConfigs;
  protected $collection_key = 'operationConfigs';
  protected $operationConfigsType = GoogleCloudApigeeV1OperationConfig::class;
  protected $operationConfigsDataType = 'array';
  /** @param string */
  public function setOperationConfigType($operationConfigType)
  {
    $this->operationConfigType = $operationConfigType;
  }
  /** @return string */
  public function getOperationConfigType()
  {
    return $this->operationConfigType;
  }
  /** @param GoogleCloudApigeeV1OperationConfig[] */
  public function setOperationConfigs($operationConfigs)
  {
    $this->operationConfigs = $operationConfigs;
  }
  /** @return GoogleCloudApigeeV1OperationConfig[] */
  public function getOperationConfigs()
  {
    return $this->operationConfigs;
  }
}

class GoogleCloudApigeeV1OperationMetadata extends \Google\Collection
{
  /** @var string */
  public $operationType;
  /** @var GoogleCloudApigeeV1OperationMetadataProgress */
  public $progress;
  /** @var string */
  public $state;
  /** @var string */
  public $targetResourceName;
  /** @var string[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $progressType = GoogleCloudApigeeV1OperationMetadataProgress::class;
  protected $progressDataType = '';
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
  /** @param GoogleCloudApigeeV1OperationMetadataProgress */
  public function setProgress(GoogleCloudApigeeV1OperationMetadataProgress $progress)
  {
    $this->progress = $progress;
  }
  /** @return GoogleCloudApigeeV1OperationMetadataProgress */
  public function getProgress()
  {
    return $this->progress;
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
  public function setTargetResourceName($targetResourceName)
  {
    $this->targetResourceName = $targetResourceName;
  }
  /** @return string */
  public function getTargetResourceName()
  {
    return $this->targetResourceName;
  }
  /** @param string[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return string[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class GoogleCloudApigeeV1OperationMetadataProgress extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var array[] */
  public $details;
  /** @var int */
  public $percentDone;
  /** @var string */
  public $state;

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
  /** @param int */
  public function setPercentDone($percentDone)
  {
    $this->percentDone = $percentDone;
  }
  /** @return int */
  public function getPercentDone()
  {
    return $this->percentDone;
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

class GoogleCloudApigeeV1OptimizedStats extends \Google\Model
{
  /** @var GoogleCloudApigeeV1OptimizedStatsResponse */
  public $response;
  protected $internal_gapi_mappings = [
        "response" => "Response",
  ];
  protected $responseType = GoogleCloudApigeeV1OptimizedStatsResponse::class;
  protected $responseDataType = '';
  /** @param GoogleCloudApigeeV1OptimizedStatsResponse */
  public function setResponse(GoogleCloudApigeeV1OptimizedStatsResponse $response)
  {
    $this->response = $response;
  }
  /** @return GoogleCloudApigeeV1OptimizedStatsResponse */
  public function getResponse()
  {
    return $this->response;
  }
}

class GoogleCloudApigeeV1OptimizedStatsNode extends \Google\Collection
{
  /** @var array[] */
  public $data;
  protected $collection_key = 'data';
  /** @param array[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return array[] */
  public function getData()
  {
    return $this->data;
  }
}

class GoogleCloudApigeeV1OptimizedStatsResponse extends \Google\Collection
{
  /** @var string[] */
  public $timeUnit;
  /** @var GoogleCloudApigeeV1Metadata */
  public $metaData;
  /** @var bool */
  public $resultTruncated;
  /** @var GoogleCloudApigeeV1OptimizedStatsNode */
  public $stats;
  protected $collection_key = 'TimeUnit';
  protected $internal_gapi_mappings = [
        "timeUnit" => "TimeUnit",
  ];
  protected $metaDataType = GoogleCloudApigeeV1Metadata::class;
  protected $metaDataDataType = '';
  protected $statsType = GoogleCloudApigeeV1OptimizedStatsNode::class;
  protected $statsDataType = '';
  /** @param string[] */
  public function setTimeUnit($timeUnit)
  {
    $this->timeUnit = $timeUnit;
  }
  /** @return string[] */
  public function getTimeUnit()
  {
    return $this->timeUnit;
  }
  /** @param GoogleCloudApigeeV1Metadata */
  public function setMetaData(GoogleCloudApigeeV1Metadata $metaData)
  {
    $this->metaData = $metaData;
  }
  /** @return GoogleCloudApigeeV1Metadata */
  public function getMetaData()
  {
    return $this->metaData;
  }
  /** @param bool */
  public function setResultTruncated($resultTruncated)
  {
    $this->resultTruncated = $resultTruncated;
  }
  /** @return bool */
  public function getResultTruncated()
  {
    return $this->resultTruncated;
  }
  /** @param GoogleCloudApigeeV1OptimizedStatsNode */
  public function setStats(GoogleCloudApigeeV1OptimizedStatsNode $stats)
  {
    $this->stats = $stats;
  }
  /** @return GoogleCloudApigeeV1OptimizedStatsNode */
  public function getStats()
  {
    return $this->stats;
  }
}

class GoogleCloudApigeeV1Organization extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1AddonsConfig */
  public $addonsConfig;
  /** @var string */
  public $analyticsRegion;
  /** @var string */
  public $apigeeProjectId;
  /** @var string[] */
  public $attributes;
  /** @var string */
  public $authorizedNetwork;
  /** @var string */
  public $billingType;
  /** @var string */
  public $caCertificate;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $customerName;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $environments;
  /** @var string */
  public $expiresAt;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var bool */
  public $portalDisabled;
  /** @var string */
  public $projectId;
  /** @var GoogleCloudApigeeV1Properties */
  public $properties;
  /** @var string */
  public $runtimeDatabaseEncryptionKeyName;
  /** @var string */
  public $runtimeType;
  /** @var string */
  public $state;
  /** @var string */
  public $subscriptionType;
  /** @var string */
  public $type;
  protected $collection_key = 'environments';
  protected $addonsConfigType = GoogleCloudApigeeV1AddonsConfig::class;
  protected $addonsConfigDataType = '';
  protected $propertiesType = GoogleCloudApigeeV1Properties::class;
  protected $propertiesDataType = '';
  /** @param GoogleCloudApigeeV1AddonsConfig */
  public function setAddonsConfig(GoogleCloudApigeeV1AddonsConfig $addonsConfig)
  {
    $this->addonsConfig = $addonsConfig;
  }
  /** @return GoogleCloudApigeeV1AddonsConfig */
  public function getAddonsConfig()
  {
    return $this->addonsConfig;
  }
  /** @param string */
  public function setAnalyticsRegion($analyticsRegion)
  {
    $this->analyticsRegion = $analyticsRegion;
  }
  /** @return string */
  public function getAnalyticsRegion()
  {
    return $this->analyticsRegion;
  }
  /** @param string */
  public function setApigeeProjectId($apigeeProjectId)
  {
    $this->apigeeProjectId = $apigeeProjectId;
  }
  /** @return string */
  public function getApigeeProjectId()
  {
    return $this->apigeeProjectId;
  }
  /** @param string[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return string[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setAuthorizedNetwork($authorizedNetwork)
  {
    $this->authorizedNetwork = $authorizedNetwork;
  }
  /** @return string */
  public function getAuthorizedNetwork()
  {
    return $this->authorizedNetwork;
  }
  /** @param string */
  public function setBillingType($billingType)
  {
    $this->billingType = $billingType;
  }
  /** @return string */
  public function getBillingType()
  {
    return $this->billingType;
  }
  /** @param string */
  public function setCaCertificate($caCertificate)
  {
    $this->caCertificate = $caCertificate;
  }
  /** @return string */
  public function getCaCertificate()
  {
    return $this->caCertificate;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param string */
  public function setCustomerName($customerName)
  {
    $this->customerName = $customerName;
  }
  /** @return string */
  public function getCustomerName()
  {
    return $this->customerName;
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
  /** @param string[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return string[] */
  public function getEnvironments()
  {
    return $this->environments;
  }
  /** @param string */
  public function setExpiresAt($expiresAt)
  {
    $this->expiresAt = $expiresAt;
  }
  /** @return string */
  public function getExpiresAt()
  {
    return $this->expiresAt;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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
  public function setPortalDisabled($portalDisabled)
  {
    $this->portalDisabled = $portalDisabled;
  }
  /** @return bool */
  public function getPortalDisabled()
  {
    return $this->portalDisabled;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param GoogleCloudApigeeV1Properties */
  public function setProperties(GoogleCloudApigeeV1Properties $properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudApigeeV1Properties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setRuntimeDatabaseEncryptionKeyName($runtimeDatabaseEncryptionKeyName)
  {
    $this->runtimeDatabaseEncryptionKeyName = $runtimeDatabaseEncryptionKeyName;
  }
  /** @return string */
  public function getRuntimeDatabaseEncryptionKeyName()
  {
    return $this->runtimeDatabaseEncryptionKeyName;
  }
  /** @param string */
  public function setRuntimeType($runtimeType)
  {
    $this->runtimeType = $runtimeType;
  }
  /** @return string */
  public function getRuntimeType()
  {
    return $this->runtimeType;
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
  public function setSubscriptionType($subscriptionType)
  {
    $this->subscriptionType = $subscriptionType;
  }
  /** @return string */
  public function getSubscriptionType()
  {
    return $this->subscriptionType;
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

class GoogleCloudApigeeV1OrganizationProjectMapping extends \Google\Collection
{
  /** @var string */
  public $location;
  /** @var string */
  public $organization;
  /** @var string */
  public $projectId;
  /** @var string[] */
  public $projectIds;
  protected $collection_key = 'projectIds';
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
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param string[] */
  public function setProjectIds($projectIds)
  {
    $this->projectIds = $projectIds;
  }
  /** @return string[] */
  public function getProjectIds()
  {
    return $this->projectIds;
  }
}

class GoogleCloudApigeeV1PodStatus extends \Google\Model
{
  /** @var string */
  public $appVersion;
  /** @var string */
  public $deploymentStatus;
  /** @var string */
  public $deploymentStatusTime;
  /** @var string */
  public $deploymentTime;
  /** @var string */
  public $podName;
  /** @var string */
  public $podStatus;
  /** @var string */
  public $podStatusTime;
  /** @var string */
  public $statusCode;
  /** @var string */
  public $statusCodeDetails;

  /** @param string */
  public function setAppVersion($appVersion)
  {
    $this->appVersion = $appVersion;
  }
  /** @return string */
  public function getAppVersion()
  {
    return $this->appVersion;
  }
  /** @param string */
  public function setDeploymentStatus($deploymentStatus)
  {
    $this->deploymentStatus = $deploymentStatus;
  }
  /** @return string */
  public function getDeploymentStatus()
  {
    return $this->deploymentStatus;
  }
  /** @param string */
  public function setDeploymentStatusTime($deploymentStatusTime)
  {
    $this->deploymentStatusTime = $deploymentStatusTime;
  }
  /** @return string */
  public function getDeploymentStatusTime()
  {
    return $this->deploymentStatusTime;
  }
  /** @param string */
  public function setDeploymentTime($deploymentTime)
  {
    $this->deploymentTime = $deploymentTime;
  }
  /** @return string */
  public function getDeploymentTime()
  {
    return $this->deploymentTime;
  }
  /** @param string */
  public function setPodName($podName)
  {
    $this->podName = $podName;
  }
  /** @return string */
  public function getPodName()
  {
    return $this->podName;
  }
  /** @param string */
  public function setPodStatus($podStatus)
  {
    $this->podStatus = $podStatus;
  }
  /** @return string */
  public function getPodStatus()
  {
    return $this->podStatus;
  }
  /** @param string */
  public function setPodStatusTime($podStatusTime)
  {
    $this->podStatusTime = $podStatusTime;
  }
  /** @return string */
  public function getPodStatusTime()
  {
    return $this->podStatusTime;
  }
  /** @param string */
  public function setStatusCode($statusCode)
  {
    $this->statusCode = $statusCode;
  }
  /** @return string */
  public function getStatusCode()
  {
    return $this->statusCode;
  }
  /** @param string */
  public function setStatusCodeDetails($statusCodeDetails)
  {
    $this->statusCodeDetails = $statusCodeDetails;
  }
  /** @return string */
  public function getStatusCodeDetails()
  {
    return $this->statusCodeDetails;
  }
}

class GoogleCloudApigeeV1Point extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var GoogleCloudApigeeV1Result[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = GoogleCloudApigeeV1Result::class;
  protected $resultsDataType = 'array';
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
  /** @param GoogleCloudApigeeV1Result[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudApigeeV1Result[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudApigeeV1Properties extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1Property[] */
  public $property;
  protected $collection_key = 'property';
  protected $propertyType = GoogleCloudApigeeV1Property::class;
  protected $propertyDataType = 'array';
  /** @param GoogleCloudApigeeV1Property[] */
  public function setProperty($property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudApigeeV1Property[] */
  public function getProperty()
  {
    return $this->property;
  }
}

class GoogleCloudApigeeV1Property extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
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

class GoogleCloudApigeeV1ProvisionOrganizationRequest extends \Google\Model
{
  /** @var string */
  public $analyticsRegion;
  /** @var string */
  public $authorizedNetwork;
  /** @var string */
  public $runtimeLocation;

  /** @param string */
  public function setAnalyticsRegion($analyticsRegion)
  {
    $this->analyticsRegion = $analyticsRegion;
  }
  /** @return string */
  public function getAnalyticsRegion()
  {
    return $this->analyticsRegion;
  }
  /** @param string */
  public function setAuthorizedNetwork($authorizedNetwork)
  {
    $this->authorizedNetwork = $authorizedNetwork;
  }
  /** @return string */
  public function getAuthorizedNetwork()
  {
    return $this->authorizedNetwork;
  }
  /** @param string */
  public function setRuntimeLocation($runtimeLocation)
  {
    $this->runtimeLocation = $runtimeLocation;
  }
  /** @return string */
  public function getRuntimeLocation()
  {
    return $this->runtimeLocation;
  }
}

class GoogleCloudApigeeV1Query extends \Google\Collection
{
  /** @var string */
  public $csvDelimiter;
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $envgroupHostname;
  /** @var string */
  public $filter;
  /** @var string */
  public $groupByTimeUnit;
  /** @var int */
  public $limit;
  /** @var GoogleCloudApigeeV1QueryMetric[] */
  public $metrics;
  /** @var string */
  public $name;
  /** @var string */
  public $outputFormat;
  /** @var string */
  public $reportDefinitionId;
  /** @var array */
  public $timeRange;
  protected $collection_key = 'metrics';
  protected $metricsType = GoogleCloudApigeeV1QueryMetric::class;
  protected $metricsDataType = 'array';
  /** @param string */
  public function setCsvDelimiter($csvDelimiter)
  {
    $this->csvDelimiter = $csvDelimiter;
  }
  /** @return string */
  public function getCsvDelimiter()
  {
    return $this->csvDelimiter;
  }
  /** @param string[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setEnvgroupHostname($envgroupHostname)
  {
    $this->envgroupHostname = $envgroupHostname;
  }
  /** @return string */
  public function getEnvgroupHostname()
  {
    return $this->envgroupHostname;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setGroupByTimeUnit($groupByTimeUnit)
  {
    $this->groupByTimeUnit = $groupByTimeUnit;
  }
  /** @return string */
  public function getGroupByTimeUnit()
  {
    return $this->groupByTimeUnit;
  }
  /** @param int */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  /** @return int */
  public function getLimit()
  {
    return $this->limit;
  }
  /** @param GoogleCloudApigeeV1QueryMetric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudApigeeV1QueryMetric[] */
  public function getMetrics()
  {
    return $this->metrics;
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
  public function setOutputFormat($outputFormat)
  {
    $this->outputFormat = $outputFormat;
  }
  /** @return string */
  public function getOutputFormat()
  {
    return $this->outputFormat;
  }
  /** @param string */
  public function setReportDefinitionId($reportDefinitionId)
  {
    $this->reportDefinitionId = $reportDefinitionId;
  }
  /** @return string */
  public function getReportDefinitionId()
  {
    return $this->reportDefinitionId;
  }
  /** @param array */
  public function setTimeRange($timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return array */
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class GoogleCloudApigeeV1QueryMetadata extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $endTimestamp;
  /** @var string[] */
  public $metrics;
  /** @var string */
  public $outputFormat;
  /** @var string */
  public $startTimestamp;
  /** @var string */
  public $timeUnit;
  protected $collection_key = 'metrics';
  /** @param string[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setEndTimestamp($endTimestamp)
  {
    $this->endTimestamp = $endTimestamp;
  }
  /** @return string */
  public function getEndTimestamp()
  {
    return $this->endTimestamp;
  }
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
  public function setOutputFormat($outputFormat)
  {
    $this->outputFormat = $outputFormat;
  }
  /** @return string */
  public function getOutputFormat()
  {
    return $this->outputFormat;
  }
  /** @param string */
  public function setStartTimestamp($startTimestamp)
  {
    $this->startTimestamp = $startTimestamp;
  }
  /** @return string */
  public function getStartTimestamp()
  {
    return $this->startTimestamp;
  }
  /** @param string */
  public function setTimeUnit($timeUnit)
  {
    $this->timeUnit = $timeUnit;
  }
  /** @return string */
  public function getTimeUnit()
  {
    return $this->timeUnit;
  }
}

class GoogleCloudApigeeV1QueryMetric extends \Google\Model
{
  /** @var string */
  public $alias;
  /** @var string */
  public $function;
  /** @var string */
  public $name;
  /** @var string */
  public $operator;
  /** @var string */
  public $value;

  /** @param string */
  public function setAlias($alias)
  {
    $this->alias = $alias;
  }
  /** @return string */
  public function getAlias()
  {
    return $this->alias;
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
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /** @return string */
  public function getOperator()
  {
    return $this->operator;
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

class GoogleCloudApigeeV1QueryTabularStatsRequest extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $filter;
  /** @var GoogleCloudApigeeV1MetricAggregation[] */
  public $metrics;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var GoogleTypeInterval */
  public $timeRange;
  protected $collection_key = 'metrics';
  protected $metricsType = GoogleCloudApigeeV1MetricAggregation::class;
  protected $metricsDataType = 'array';
  protected $timeRangeType = GoogleTypeInterval::class;
  protected $timeRangeDataType = '';
  /** @param string[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param GoogleCloudApigeeV1MetricAggregation[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudApigeeV1MetricAggregation[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param int */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return int */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param GoogleTypeInterval */
  public function setTimeRange(GoogleTypeInterval $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return GoogleTypeInterval */
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class GoogleCloudApigeeV1QueryTabularStatsResponse extends \Google\Collection
{
  /** @var string[] */
  public $columns;
  /** @var string */
  public $nextPageToken;
  /** @var array[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return string[] */
  public function getColumns()
  {
    return $this->columns;
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
  /** @param array[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return array[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudApigeeV1QueryTimeSeriesStatsRequest extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $filter;
  /** @var GoogleCloudApigeeV1MetricAggregation[] */
  public $metrics;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var GoogleTypeInterval */
  public $timeRange;
  /** @var string */
  public $timestampOrder;
  /** @var string */
  public $windowSize;
  protected $collection_key = 'metrics';
  protected $metricsType = GoogleCloudApigeeV1MetricAggregation::class;
  protected $metricsDataType = 'array';
  protected $timeRangeType = GoogleTypeInterval::class;
  protected $timeRangeDataType = '';
  /** @param string[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param GoogleCloudApigeeV1MetricAggregation[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudApigeeV1MetricAggregation[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param int */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return int */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param GoogleTypeInterval */
  public function setTimeRange(GoogleTypeInterval $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return GoogleTypeInterval */
  public function getTimeRange()
  {
    return $this->timeRange;
  }
  /** @param string */
  public function setTimestampOrder($timestampOrder)
  {
    $this->timestampOrder = $timestampOrder;
  }
  /** @return string */
  public function getTimestampOrder()
  {
    return $this->timestampOrder;
  }
  /** @param string */
  public function setWindowSize($windowSize)
  {
    $this->windowSize = $windowSize;
  }
  /** @return string */
  public function getWindowSize()
  {
    return $this->windowSize;
  }
}

class GoogleCloudApigeeV1QueryTimeSeriesStatsResponse extends \Google\Collection
{
  /** @var string[] */
  public $columns;
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudApigeeV1QueryTimeSeriesStatsResponseSequence[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = GoogleCloudApigeeV1QueryTimeSeriesStatsResponseSequence::class;
  protected $valuesDataType = 'array';
  /** @param string[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return string[] */
  public function getColumns()
  {
    return $this->columns;
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
  /** @param GoogleCloudApigeeV1QueryTimeSeriesStatsResponseSequence[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return GoogleCloudApigeeV1QueryTimeSeriesStatsResponseSequence[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudApigeeV1QueryTimeSeriesStatsResponseSequence extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var array[] */
  public $points;
  protected $collection_key = 'points';
  /** @param string[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param array[] */
  public function setPoints($points)
  {
    $this->points = $points;
  }
  /** @return array[] */
  public function getPoints()
  {
    return $this->points;
  }
}

class GoogleCloudApigeeV1Quota extends \Google\Model
{
  /** @var string */
  public $interval;
  /** @var string */
  public $limit;
  /** @var string */
  public $timeUnit;

  /** @param string */
  public function setInterval($interval)
  {
    $this->interval = $interval;
  }
  /** @return string */
  public function getInterval()
  {
    return $this->interval;
  }
  /** @param string */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  /** @return string */
  public function getLimit()
  {
    return $this->limit;
  }
  /** @param string */
  public function setTimeUnit($timeUnit)
  {
    $this->timeUnit = $timeUnit;
  }
  /** @return string */
  public function getTimeUnit()
  {
    return $this->timeUnit;
  }
}

class GoogleCloudApigeeV1RatePlan extends \Google\Collection
{
  /** @var string */
  public $apiproduct;
  /** @var string */
  public $billingPeriod;
  /** @var GoogleCloudApigeeV1RateRange[] */
  public $consumptionPricingRates;
  /** @var string */
  public $consumptionPricingType;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $endTime;
  /** @var int */
  public $fixedFeeFrequency;
  /** @var GoogleTypeMoney */
  public $fixedRecurringFee;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var string */
  public $paymentFundingModel;
  /** @var GoogleCloudApigeeV1RevenueShareRange[] */
  public $revenueShareRates;
  /** @var string */
  public $revenueShareType;
  /** @var GoogleTypeMoney */
  public $setupFee;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  protected $collection_key = 'revenueShareRates';
  protected $consumptionPricingRatesType = GoogleCloudApigeeV1RateRange::class;
  protected $consumptionPricingRatesDataType = 'array';
  protected $fixedRecurringFeeType = GoogleTypeMoney::class;
  protected $fixedRecurringFeeDataType = '';
  protected $revenueShareRatesType = GoogleCloudApigeeV1RevenueShareRange::class;
  protected $revenueShareRatesDataType = 'array';
  protected $setupFeeType = GoogleTypeMoney::class;
  protected $setupFeeDataType = '';
  /** @param string */
  public function setApiproduct($apiproduct)
  {
    $this->apiproduct = $apiproduct;
  }
  /** @return string */
  public function getApiproduct()
  {
    return $this->apiproduct;
  }
  /** @param string */
  public function setBillingPeriod($billingPeriod)
  {
    $this->billingPeriod = $billingPeriod;
  }
  /** @return string */
  public function getBillingPeriod()
  {
    return $this->billingPeriod;
  }
  /** @param GoogleCloudApigeeV1RateRange[] */
  public function setConsumptionPricingRates($consumptionPricingRates)
  {
    $this->consumptionPricingRates = $consumptionPricingRates;
  }
  /** @return GoogleCloudApigeeV1RateRange[] */
  public function getConsumptionPricingRates()
  {
    return $this->consumptionPricingRates;
  }
  /** @param string */
  public function setConsumptionPricingType($consumptionPricingType)
  {
    $this->consumptionPricingType = $consumptionPricingType;
  }
  /** @return string */
  public function getConsumptionPricingType()
  {
    return $this->consumptionPricingType;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param string */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /** @return string */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param int */
  public function setFixedFeeFrequency($fixedFeeFrequency)
  {
    $this->fixedFeeFrequency = $fixedFeeFrequency;
  }
  /** @return int */
  public function getFixedFeeFrequency()
  {
    return $this->fixedFeeFrequency;
  }
  /** @param GoogleTypeMoney */
  public function setFixedRecurringFee(GoogleTypeMoney $fixedRecurringFee)
  {
    $this->fixedRecurringFee = $fixedRecurringFee;
  }
  /** @return GoogleTypeMoney */
  public function getFixedRecurringFee()
  {
    return $this->fixedRecurringFee;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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
  public function setPaymentFundingModel($paymentFundingModel)
  {
    $this->paymentFundingModel = $paymentFundingModel;
  }
  /** @return string */
  public function getPaymentFundingModel()
  {
    return $this->paymentFundingModel;
  }
  /** @param GoogleCloudApigeeV1RevenueShareRange[] */
  public function setRevenueShareRates($revenueShareRates)
  {
    $this->revenueShareRates = $revenueShareRates;
  }
  /** @return GoogleCloudApigeeV1RevenueShareRange[] */
  public function getRevenueShareRates()
  {
    return $this->revenueShareRates;
  }
  /** @param string */
  public function setRevenueShareType($revenueShareType)
  {
    $this->revenueShareType = $revenueShareType;
  }
  /** @return string */
  public function getRevenueShareType()
  {
    return $this->revenueShareType;
  }
  /** @param GoogleTypeMoney */
  public function setSetupFee(GoogleTypeMoney $setupFee)
  {
    $this->setupFee = $setupFee;
  }
  /** @return GoogleTypeMoney */
  public function getSetupFee()
  {
    return $this->setupFee;
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

class GoogleCloudApigeeV1RateRange extends \Google\Model
{
  /** @var string */
  public $end;
  /** @var GoogleTypeMoney */
  public $fee;
  /** @var string */
  public $start;
  protected $feeType = GoogleTypeMoney::class;
  protected $feeDataType = '';
  /** @param string */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return string */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param GoogleTypeMoney */
  public function setFee(GoogleTypeMoney $fee)
  {
    $this->fee = $fee;
  }
  /** @return GoogleTypeMoney */
  public function getFee()
  {
    return $this->fee;
  }
  /** @param string */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return string */
  public function getStart()
  {
    return $this->start;
  }
}

class GoogleCloudApigeeV1Reference extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $refers;
  /** @var string */
  public $resourceType;

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
  public function setRefers($refers)
  {
    $this->refers = $refers;
  }
  /** @return string */
  public function getRefers()
  {
    return $this->refers;
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
}

class GoogleCloudApigeeV1ReferenceConfig extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $resourceName;

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
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

class GoogleCloudApigeeV1ReportInstanceStatusRequest extends \Google\Collection
{
  /** @var string */
  public $instanceUid;
  /** @var string */
  public $reportTime;
  /** @var GoogleCloudApigeeV1ResourceStatus[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = GoogleCloudApigeeV1ResourceStatus::class;
  protected $resourcesDataType = 'array';
  /** @param string */
  public function setInstanceUid($instanceUid)
  {
    $this->instanceUid = $instanceUid;
  }
  /** @return string */
  public function getInstanceUid()
  {
    return $this->instanceUid;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
  /** @param GoogleCloudApigeeV1ResourceStatus[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return GoogleCloudApigeeV1ResourceStatus[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class GoogleCloudApigeeV1ReportInstanceStatusResponse extends \Google\Model
{
}

class GoogleCloudApigeeV1ReportProperty extends \Google\Collection
{
  /** @var string */
  public $property;
  /** @var GoogleCloudApigeeV1Attribute[] */
  public $value;
  protected $collection_key = 'value';
  protected $valueType = GoogleCloudApigeeV1Attribute::class;
  protected $valueDataType = 'array';
  /** @param string */
  public function setProperty($property)
  {
    $this->property = $property;
  }
  /** @return string */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param GoogleCloudApigeeV1Attribute[] */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return GoogleCloudApigeeV1Attribute[] */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudApigeeV1ResourceConfig extends \Google\Model
{
  /** @var string */
  public $location;
  /** @var string */
  public $name;

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
}

class GoogleCloudApigeeV1ResourceFile extends \Google\Model
{
  /** @var string */
  public $name;
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

class GoogleCloudApigeeV1ResourceFiles extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ResourceFile[] */
  public $resourceFile;
  protected $collection_key = 'resourceFile';
  protected $resourceFileType = GoogleCloudApigeeV1ResourceFile::class;
  protected $resourceFileDataType = 'array';
  /** @param GoogleCloudApigeeV1ResourceFile[] */
  public function setResourceFile($resourceFile)
  {
    $this->resourceFile = $resourceFile;
  }
  /** @return GoogleCloudApigeeV1ResourceFile[] */
  public function getResourceFile()
  {
    return $this->resourceFile;
  }
}

class GoogleCloudApigeeV1ResourceStatus extends \Google\Collection
{
  /** @var string */
  public $resource;
  /** @var GoogleCloudApigeeV1RevisionStatus[] */
  public $revisions;
  /** @var int */
  public $totalReplicas;
  /** @var string */
  public $uid;
  protected $collection_key = 'revisions';
  protected $revisionsType = GoogleCloudApigeeV1RevisionStatus::class;
  protected $revisionsDataType = 'array';
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
  /** @param GoogleCloudApigeeV1RevisionStatus[] */
  public function setRevisions($revisions)
  {
    $this->revisions = $revisions;
  }
  /** @return GoogleCloudApigeeV1RevisionStatus[] */
  public function getRevisions()
  {
    return $this->revisions;
  }
  /** @param int */
  public function setTotalReplicas($totalReplicas)
  {
    $this->totalReplicas = $totalReplicas;
  }
  /** @return int */
  public function getTotalReplicas()
  {
    return $this->totalReplicas;
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
}

class GoogleCloudApigeeV1Result extends \Google\Collection
{
  /** @var string */
  public $actionResult;
  /** @var GoogleCloudApigeeV1Access[] */
  public $accessList;
  /** @var string */
  public $content;
  /** @var GoogleCloudApigeeV1Property[] */
  public $headers;
  /** @var GoogleCloudApigeeV1Properties */
  public $properties;
  /** @var string */
  public $reasonPhrase;
  /** @var string */
  public $statusCode;
  /** @var string */
  public $timestamp;
  /** @var string */
  public $uRI;
  /** @var string */
  public $verb;
  protected $collection_key = 'headers';
  protected $internal_gapi_mappings = [
        "actionResult" => "ActionResult",
  ];
  protected $accessListType = GoogleCloudApigeeV1Access::class;
  protected $accessListDataType = 'array';
  protected $headersType = GoogleCloudApigeeV1Property::class;
  protected $headersDataType = 'array';
  protected $propertiesType = GoogleCloudApigeeV1Properties::class;
  protected $propertiesDataType = '';
  /** @param string */
  public function setActionResult($actionResult)
  {
    $this->actionResult = $actionResult;
  }
  /** @return string */
  public function getActionResult()
  {
    return $this->actionResult;
  }
  /** @param GoogleCloudApigeeV1Access[] */
  public function setAccessList($accessList)
  {
    $this->accessList = $accessList;
  }
  /** @return GoogleCloudApigeeV1Access[] */
  public function getAccessList()
  {
    return $this->accessList;
  }
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
  /** @param GoogleCloudApigeeV1Property[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return GoogleCloudApigeeV1Property[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param GoogleCloudApigeeV1Properties */
  public function setProperties(GoogleCloudApigeeV1Properties $properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudApigeeV1Properties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string */
  public function setReasonPhrase($reasonPhrase)
  {
    $this->reasonPhrase = $reasonPhrase;
  }
  /** @return string */
  public function getReasonPhrase()
  {
    return $this->reasonPhrase;
  }
  /** @param string */
  public function setStatusCode($statusCode)
  {
    $this->statusCode = $statusCode;
  }
  /** @return string */
  public function getStatusCode()
  {
    return $this->statusCode;
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
  public function setURI($uRI)
  {
    $this->uRI = $uRI;
  }
  /** @return string */
  public function getURI()
  {
    return $this->uRI;
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

class GoogleCloudApigeeV1RevenueShareRange extends \Google\Model
{
  /** @var string */
  public $end;
  public $sharePercentage;
  /** @var string */
  public $start;

  /** @param string */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return string */
  public function getEnd()
  {
    return $this->end;
  }
  public function setSharePercentage($sharePercentage)
  {
    $this->sharePercentage = $sharePercentage;
  }
  public function getSharePercentage()
  {
    return $this->sharePercentage;
  }
  /** @param string */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return string */
  public function getStart()
  {
    return $this->start;
  }
}

class GoogleCloudApigeeV1RevisionStatus extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1UpdateError[] */
  public $errors;
  /** @var string */
  public $jsonSpec;
  /** @var int */
  public $replicas;
  /** @var string */
  public $revisionId;
  protected $collection_key = 'errors';
  protected $errorsType = GoogleCloudApigeeV1UpdateError::class;
  protected $errorsDataType = 'array';
  /** @param GoogleCloudApigeeV1UpdateError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GoogleCloudApigeeV1UpdateError[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param string */
  public function setJsonSpec($jsonSpec)
  {
    $this->jsonSpec = $jsonSpec;
  }
  /** @return string */
  public function getJsonSpec()
  {
    return $this->jsonSpec;
  }
  /** @param int */
  public function setReplicas($replicas)
  {
    $this->replicas = $replicas;
  }
  /** @return int */
  public function getReplicas()
  {
    return $this->replicas;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
}

class GoogleCloudApigeeV1RoutingRule extends \Google\Model
{
  /** @var string */
  public $basepath;
  /** @var string */
  public $envGroupRevision;
  /** @var string */
  public $environment;
  /** @var string */
  public $receiver;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setBasepath($basepath)
  {
    $this->basepath = $basepath;
  }
  /** @return string */
  public function getBasepath()
  {
    return $this->basepath;
  }
  /** @param string */
  public function setEnvGroupRevision($envGroupRevision)
  {
    $this->envGroupRevision = $envGroupRevision;
  }
  /** @return string */
  public function getEnvGroupRevision()
  {
    return $this->envGroupRevision;
  }
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
  /** @param string */
  public function setReceiver($receiver)
  {
    $this->receiver = $receiver;
  }
  /** @return string */
  public function getReceiver()
  {
    return $this->receiver;
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

class GoogleCloudApigeeV1RuntimeConfig extends \Google\Model
{
  /** @var string */
  public $analyticsBucket;
  /** @var string */
  public $name;
  /** @var string */
  public $tenantProjectId;
  /** @var string */
  public $traceBucket;

  /** @param string */
  public function setAnalyticsBucket($analyticsBucket)
  {
    $this->analyticsBucket = $analyticsBucket;
  }
  /** @return string */
  public function getAnalyticsBucket()
  {
    return $this->analyticsBucket;
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
  public function setTenantProjectId($tenantProjectId)
  {
    $this->tenantProjectId = $tenantProjectId;
  }
  /** @return string */
  public function getTenantProjectId()
  {
    return $this->tenantProjectId;
  }
  /** @param string */
  public function setTraceBucket($traceBucket)
  {
    $this->traceBucket = $traceBucket;
  }
  /** @return string */
  public function getTraceBucket()
  {
    return $this->traceBucket;
  }
}

class GoogleCloudApigeeV1RuntimeTraceConfig extends \Google\Collection
{
  /** @var string */
  public $endpoint;
  /** @var string */
  public $exporter;
  /** @var string */
  public $name;
  /** @var GoogleCloudApigeeV1RuntimeTraceConfigOverride[] */
  public $overrides;
  /** @var string */
  public $revisionCreateTime;
  /** @var string */
  public $revisionId;
  /** @var GoogleCloudApigeeV1RuntimeTraceSamplingConfig */
  public $samplingConfig;
  protected $collection_key = 'overrides';
  protected $overridesType = GoogleCloudApigeeV1RuntimeTraceConfigOverride::class;
  protected $overridesDataType = 'array';
  protected $samplingConfigType = GoogleCloudApigeeV1RuntimeTraceSamplingConfig::class;
  protected $samplingConfigDataType = '';
  /** @param string */
  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /** @return string */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /** @param string */
  public function setExporter($exporter)
  {
    $this->exporter = $exporter;
  }
  /** @return string */
  public function getExporter()
  {
    return $this->exporter;
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
  /** @param GoogleCloudApigeeV1RuntimeTraceConfigOverride[] */
  public function setOverrides($overrides)
  {
    $this->overrides = $overrides;
  }
  /** @return GoogleCloudApigeeV1RuntimeTraceConfigOverride[] */
  public function getOverrides()
  {
    return $this->overrides;
  }
  /** @param string */
  public function setRevisionCreateTime($revisionCreateTime)
  {
    $this->revisionCreateTime = $revisionCreateTime;
  }
  /** @return string */
  public function getRevisionCreateTime()
  {
    return $this->revisionCreateTime;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
  /** @param GoogleCloudApigeeV1RuntimeTraceSamplingConfig */
  public function setSamplingConfig(GoogleCloudApigeeV1RuntimeTraceSamplingConfig $samplingConfig)
  {
    $this->samplingConfig = $samplingConfig;
  }
  /** @return GoogleCloudApigeeV1RuntimeTraceSamplingConfig */
  public function getSamplingConfig()
  {
    return $this->samplingConfig;
  }
}

class GoogleCloudApigeeV1RuntimeTraceConfigOverride extends \Google\Model
{
  /** @var string */
  public $apiProxy;
  /** @var string */
  public $name;
  /** @var string */
  public $revisionCreateTime;
  /** @var string */
  public $revisionId;
  /** @var GoogleCloudApigeeV1RuntimeTraceSamplingConfig */
  public $samplingConfig;
  /** @var string */
  public $uid;
  protected $samplingConfigType = GoogleCloudApigeeV1RuntimeTraceSamplingConfig::class;
  protected $samplingConfigDataType = '';
  /** @param string */
  public function setApiProxy($apiProxy)
  {
    $this->apiProxy = $apiProxy;
  }
  /** @return string */
  public function getApiProxy()
  {
    return $this->apiProxy;
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
  public function setRevisionCreateTime($revisionCreateTime)
  {
    $this->revisionCreateTime = $revisionCreateTime;
  }
  /** @return string */
  public function getRevisionCreateTime()
  {
    return $this->revisionCreateTime;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
  /** @param GoogleCloudApigeeV1RuntimeTraceSamplingConfig */
  public function setSamplingConfig(GoogleCloudApigeeV1RuntimeTraceSamplingConfig $samplingConfig)
  {
    $this->samplingConfig = $samplingConfig;
  }
  /** @return GoogleCloudApigeeV1RuntimeTraceSamplingConfig */
  public function getSamplingConfig()
  {
    return $this->samplingConfig;
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
}

class GoogleCloudApigeeV1RuntimeTraceSamplingConfig extends \Google\Model
{
  /** @var string */
  public $sampler;
  /** @var float */
  public $samplingRate;

  /** @param string */
  public function setSampler($sampler)
  {
    $this->sampler = $sampler;
  }
  /** @return string */
  public function getSampler()
  {
    return $this->sampler;
  }
  /** @param float */
  public function setSamplingRate($samplingRate)
  {
    $this->samplingRate = $samplingRate;
  }
  /** @return float */
  public function getSamplingRate()
  {
    return $this->samplingRate;
  }
}

class GoogleCloudApigeeV1Schema extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1SchemaSchemaElement[] */
  public $dimensions;
  /** @var string[] */
  public $meta;
  /** @var GoogleCloudApigeeV1SchemaSchemaElement[] */
  public $metrics;
  protected $collection_key = 'metrics';
  protected $dimensionsType = GoogleCloudApigeeV1SchemaSchemaElement::class;
  protected $dimensionsDataType = 'array';
  protected $metricsType = GoogleCloudApigeeV1SchemaSchemaElement::class;
  protected $metricsDataType = 'array';
  /** @param GoogleCloudApigeeV1SchemaSchemaElement[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return GoogleCloudApigeeV1SchemaSchemaElement[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string[] */
  public function setMeta($meta)
  {
    $this->meta = $meta;
  }
  /** @return string[] */
  public function getMeta()
  {
    return $this->meta;
  }
  /** @param GoogleCloudApigeeV1SchemaSchemaElement[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudApigeeV1SchemaSchemaElement[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
}

class GoogleCloudApigeeV1SchemaSchemaElement extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var GoogleCloudApigeeV1SchemaSchemaProperty */
  public $properties;
  protected $propertiesType = GoogleCloudApigeeV1SchemaSchemaProperty::class;
  protected $propertiesDataType = '';
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
  /** @param GoogleCloudApigeeV1SchemaSchemaProperty */
  public function setProperties(GoogleCloudApigeeV1SchemaSchemaProperty $properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudApigeeV1SchemaSchemaProperty */
  public function getProperties()
  {
    return $this->properties;
  }
}

class GoogleCloudApigeeV1SchemaSchemaProperty extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $custom;
  /** @var string */
  public $type;

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
  public function setCustom($custom)
  {
    $this->custom = $custom;
  }
  /** @return string */
  public function getCustom()
  {
    return $this->custom;
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

class GoogleCloudApigeeV1Score extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ScoreComponent */
  public $component;
  /** @var GoogleCloudApigeeV1ScoreComponent[] */
  public $subcomponents;
  /** @var GoogleTypeInterval */
  public $timeRange;
  protected $collection_key = 'subcomponents';
  protected $componentType = GoogleCloudApigeeV1ScoreComponent::class;
  protected $componentDataType = '';
  protected $subcomponentsType = GoogleCloudApigeeV1ScoreComponent::class;
  protected $subcomponentsDataType = 'array';
  protected $timeRangeType = GoogleTypeInterval::class;
  protected $timeRangeDataType = '';
  /** @param GoogleCloudApigeeV1ScoreComponent */
  public function setComponent(GoogleCloudApigeeV1ScoreComponent $component)
  {
    $this->component = $component;
  }
  /** @return GoogleCloudApigeeV1ScoreComponent */
  public function getComponent()
  {
    return $this->component;
  }
  /** @param GoogleCloudApigeeV1ScoreComponent[] */
  public function setSubcomponents($subcomponents)
  {
    $this->subcomponents = $subcomponents;
  }
  /** @return GoogleCloudApigeeV1ScoreComponent[] */
  public function getSubcomponents()
  {
    return $this->subcomponents;
  }
  /** @param GoogleTypeInterval */
  public function setTimeRange(GoogleTypeInterval $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return GoogleTypeInterval */
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class GoogleCloudApigeeV1ScoreComponent extends \Google\Collection
{
  /** @var string */
  public $calculateTime;
  /** @var string */
  public $dataCaptureTime;
  /** @var string[] */
  public $drilldownPaths;
  /** @var GoogleCloudApigeeV1ScoreComponentRecommendation[] */
  public $recommendations;
  /** @var int */
  public $score;
  /** @var string */
  public $scorePath;
  protected $collection_key = 'recommendations';
  protected $recommendationsType = GoogleCloudApigeeV1ScoreComponentRecommendation::class;
  protected $recommendationsDataType = 'array';
  /** @param string */
  public function setCalculateTime($calculateTime)
  {
    $this->calculateTime = $calculateTime;
  }
  /** @return string */
  public function getCalculateTime()
  {
    return $this->calculateTime;
  }
  /** @param string */
  public function setDataCaptureTime($dataCaptureTime)
  {
    $this->dataCaptureTime = $dataCaptureTime;
  }
  /** @return string */
  public function getDataCaptureTime()
  {
    return $this->dataCaptureTime;
  }
  /** @param string[] */
  public function setDrilldownPaths($drilldownPaths)
  {
    $this->drilldownPaths = $drilldownPaths;
  }
  /** @return string[] */
  public function getDrilldownPaths()
  {
    return $this->drilldownPaths;
  }
  /** @param GoogleCloudApigeeV1ScoreComponentRecommendation[] */
  public function setRecommendations($recommendations)
  {
    $this->recommendations = $recommendations;
  }
  /** @return GoogleCloudApigeeV1ScoreComponentRecommendation[] */
  public function getRecommendations()
  {
    return $this->recommendations;
  }
  /** @param int */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return int */
  public function getScore()
  {
    return $this->score;
  }
  /** @param string */
  public function setScorePath($scorePath)
  {
    $this->scorePath = $scorePath;
  }
  /** @return string */
  public function getScorePath()
  {
    return $this->scorePath;
  }
}

class GoogleCloudApigeeV1ScoreComponentRecommendation extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ScoreComponentRecommendationAction[] */
  public $actions;
  /** @var string */
  public $description;
  /** @var int */
  public $impact;
  /** @var string */
  public $title;
  protected $collection_key = 'actions';
  protected $actionsType = GoogleCloudApigeeV1ScoreComponentRecommendationAction::class;
  protected $actionsDataType = 'array';
  /** @param GoogleCloudApigeeV1ScoreComponentRecommendationAction[] */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /** @return GoogleCloudApigeeV1ScoreComponentRecommendationAction[] */
  public function getActions()
  {
    return $this->actions;
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
  public function setImpact($impact)
  {
    $this->impact = $impact;
  }
  /** @return int */
  public function getImpact()
  {
    return $this->impact;
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

class GoogleCloudApigeeV1ScoreComponentRecommendationAction extends \Google\Model
{
  /** @var GoogleCloudApigeeV1ScoreComponentRecommendationActionActionContext */
  public $actionContext;
  /** @var string */
  public $description;
  protected $actionContextType = GoogleCloudApigeeV1ScoreComponentRecommendationActionActionContext::class;
  protected $actionContextDataType = '';
  /** @param GoogleCloudApigeeV1ScoreComponentRecommendationActionActionContext */
  public function setActionContext(GoogleCloudApigeeV1ScoreComponentRecommendationActionActionContext $actionContext)
  {
    $this->actionContext = $actionContext;
  }
  /** @return GoogleCloudApigeeV1ScoreComponentRecommendationActionActionContext */
  public function getActionContext()
  {
    return $this->actionContext;
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
}

class GoogleCloudApigeeV1ScoreComponentRecommendationActionActionContext extends \Google\Model
{
  /** @var string */
  public $documentationLink;

  /** @param string */
  public function setDocumentationLink($documentationLink)
  {
    $this->documentationLink = $documentationLink;
  }
  /** @return string */
  public function getDocumentationLink()
  {
    return $this->documentationLink;
  }
}

class GoogleCloudApigeeV1SecurityProfile extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var GoogleCloudApigeeV1SecurityProfileEnvironment[] */
  public $environments;
  /** @var int */
  public $maxScore;
  /** @var int */
  public $minScore;
  /** @var string */
  public $name;
  /** @var string */
  public $revisionCreateTime;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $revisionPublishTime;
  /** @var string */
  public $revisionUpdateTime;
  /** @var GoogleCloudApigeeV1SecurityProfileScoringConfig[] */
  public $scoringConfigs;
  protected $collection_key = 'scoringConfigs';
  protected $environmentsType = GoogleCloudApigeeV1SecurityProfileEnvironment::class;
  protected $environmentsDataType = 'array';
  protected $scoringConfigsType = GoogleCloudApigeeV1SecurityProfileScoringConfig::class;
  protected $scoringConfigsDataType = 'array';
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
  /** @param GoogleCloudApigeeV1SecurityProfileEnvironment[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return GoogleCloudApigeeV1SecurityProfileEnvironment[] */
  public function getEnvironments()
  {
    return $this->environments;
  }
  /** @param int */
  public function setMaxScore($maxScore)
  {
    $this->maxScore = $maxScore;
  }
  /** @return int */
  public function getMaxScore()
  {
    return $this->maxScore;
  }
  /** @param int */
  public function setMinScore($minScore)
  {
    $this->minScore = $minScore;
  }
  /** @return int */
  public function getMinScore()
  {
    return $this->minScore;
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
  public function setRevisionCreateTime($revisionCreateTime)
  {
    $this->revisionCreateTime = $revisionCreateTime;
  }
  /** @return string */
  public function getRevisionCreateTime()
  {
    return $this->revisionCreateTime;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
  /** @param string */
  public function setRevisionPublishTime($revisionPublishTime)
  {
    $this->revisionPublishTime = $revisionPublishTime;
  }
  /** @return string */
  public function getRevisionPublishTime()
  {
    return $this->revisionPublishTime;
  }
  /** @param string */
  public function setRevisionUpdateTime($revisionUpdateTime)
  {
    $this->revisionUpdateTime = $revisionUpdateTime;
  }
  /** @return string */
  public function getRevisionUpdateTime()
  {
    return $this->revisionUpdateTime;
  }
  /** @param GoogleCloudApigeeV1SecurityProfileScoringConfig[] */
  public function setScoringConfigs($scoringConfigs)
  {
    $this->scoringConfigs = $scoringConfigs;
  }
  /** @return GoogleCloudApigeeV1SecurityProfileScoringConfig[] */
  public function getScoringConfigs()
  {
    return $this->scoringConfigs;
  }
}

class GoogleCloudApigeeV1SecurityProfileEnvironment extends \Google\Model
{
  /** @var string */
  public $attachTime;
  /** @var string */
  public $environment;

  /** @param string */
  public function setAttachTime($attachTime)
  {
    $this->attachTime = $attachTime;
  }
  /** @return string */
  public function getAttachTime()
  {
    return $this->attachTime;
  }
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

class GoogleCloudApigeeV1SecurityProfileEnvironmentAssociation extends \Google\Model
{
  /** @var string */
  public $attachTime;
  /** @var string */
  public $name;
  /** @var string */
  public $securityProfileRevisionId;

  /** @param string */
  public function setAttachTime($attachTime)
  {
    $this->attachTime = $attachTime;
  }
  /** @return string */
  public function getAttachTime()
  {
    return $this->attachTime;
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
  public function setSecurityProfileRevisionId($securityProfileRevisionId)
  {
    $this->securityProfileRevisionId = $securityProfileRevisionId;
  }
  /** @return string */
  public function getSecurityProfileRevisionId()
  {
    return $this->securityProfileRevisionId;
  }
}

class GoogleCloudApigeeV1SecurityProfileScoringConfig extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $scorePath;
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
  public function setScorePath($scorePath)
  {
    $this->scorePath = $scorePath;
  }
  /** @return string */
  public function getScorePath()
  {
    return $this->scorePath;
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

class GoogleCloudApigeeV1SecurityReport extends \Google\Model
{
  /** @var string */
  public $created;
  /** @var string */
  public $displayName;
  /** @var string */
  public $envgroupHostname;
  /** @var string */
  public $error;
  /** @var string */
  public $executionTime;
  /** @var GoogleCloudApigeeV1SecurityReportMetadata */
  public $queryParams;
  /** @var string */
  public $reportDefinitionId;
  /** @var GoogleCloudApigeeV1SecurityReportResultMetadata */
  public $result;
  /** @var string */
  public $resultFileSize;
  /** @var string */
  public $resultRows;
  /** @var string */
  public $self;
  /** @var string */
  public $state;
  /** @var string */
  public $updated;
  protected $queryParamsType = GoogleCloudApigeeV1SecurityReportMetadata::class;
  protected $queryParamsDataType = '';
  protected $resultType = GoogleCloudApigeeV1SecurityReportResultMetadata::class;
  protected $resultDataType = '';
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
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
  public function setEnvgroupHostname($envgroupHostname)
  {
    $this->envgroupHostname = $envgroupHostname;
  }
  /** @return string */
  public function getEnvgroupHostname()
  {
    return $this->envgroupHostname;
  }
  /** @param string */
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return string */
  public function getError()
  {
    return $this->error;
  }
  /** @param string */
  public function setExecutionTime($executionTime)
  {
    $this->executionTime = $executionTime;
  }
  /** @return string */
  public function getExecutionTime()
  {
    return $this->executionTime;
  }
  /** @param GoogleCloudApigeeV1SecurityReportMetadata */
  public function setQueryParams(GoogleCloudApigeeV1SecurityReportMetadata $queryParams)
  {
    $this->queryParams = $queryParams;
  }
  /** @return GoogleCloudApigeeV1SecurityReportMetadata */
  public function getQueryParams()
  {
    return $this->queryParams;
  }
  /** @param string */
  public function setReportDefinitionId($reportDefinitionId)
  {
    $this->reportDefinitionId = $reportDefinitionId;
  }
  /** @return string */
  public function getReportDefinitionId()
  {
    return $this->reportDefinitionId;
  }
  /** @param GoogleCloudApigeeV1SecurityReportResultMetadata */
  public function setResult(GoogleCloudApigeeV1SecurityReportResultMetadata $result)
  {
    $this->result = $result;
  }
  /** @return GoogleCloudApigeeV1SecurityReportResultMetadata */
  public function getResult()
  {
    return $this->result;
  }
  /** @param string */
  public function setResultFileSize($resultFileSize)
  {
    $this->resultFileSize = $resultFileSize;
  }
  /** @return string */
  public function getResultFileSize()
  {
    return $this->resultFileSize;
  }
  /** @param string */
  public function setResultRows($resultRows)
  {
    $this->resultRows = $resultRows;
  }
  /** @return string */
  public function getResultRows()
  {
    return $this->resultRows;
  }
  /** @param string */
  public function setSelf($self)
  {
    $this->self = $self;
  }
  /** @return string */
  public function getSelf()
  {
    return $this->self;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class GoogleCloudApigeeV1SecurityReportMetadata extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $endTimestamp;
  /** @var string[] */
  public $metrics;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $startTimestamp;
  /** @var string */
  public $timeUnit;
  protected $collection_key = 'metrics';
  /** @param string[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setEndTimestamp($endTimestamp)
  {
    $this->endTimestamp = $endTimestamp;
  }
  /** @return string */
  public function getEndTimestamp()
  {
    return $this->endTimestamp;
  }
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
  public function setStartTimestamp($startTimestamp)
  {
    $this->startTimestamp = $startTimestamp;
  }
  /** @return string */
  public function getStartTimestamp()
  {
    return $this->startTimestamp;
  }
  /** @param string */
  public function setTimeUnit($timeUnit)
  {
    $this->timeUnit = $timeUnit;
  }
  /** @return string */
  public function getTimeUnit()
  {
    return $this->timeUnit;
  }
}

class GoogleCloudApigeeV1SecurityReportQuery extends \Google\Collection
{
  /** @var string */
  public $csvDelimiter;
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $displayName;
  /** @var string */
  public $envgroupHostname;
  /** @var string */
  public $filter;
  /** @var string */
  public $groupByTimeUnit;
  /** @var int */
  public $limit;
  /** @var GoogleCloudApigeeV1SecurityReportQueryMetric[] */
  public $metrics;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $reportDefinitionId;
  /** @var array */
  public $timeRange;
  protected $collection_key = 'metrics';
  protected $metricsType = GoogleCloudApigeeV1SecurityReportQueryMetric::class;
  protected $metricsDataType = 'array';
  /** @param string */
  public function setCsvDelimiter($csvDelimiter)
  {
    $this->csvDelimiter = $csvDelimiter;
  }
  /** @return string */
  public function getCsvDelimiter()
  {
    return $this->csvDelimiter;
  }
  /** @param string[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return string[] */
  public function getDimensions()
  {
    return $this->dimensions;
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
  public function setEnvgroupHostname($envgroupHostname)
  {
    $this->envgroupHostname = $envgroupHostname;
  }
  /** @return string */
  public function getEnvgroupHostname()
  {
    return $this->envgroupHostname;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setGroupByTimeUnit($groupByTimeUnit)
  {
    $this->groupByTimeUnit = $groupByTimeUnit;
  }
  /** @return string */
  public function getGroupByTimeUnit()
  {
    return $this->groupByTimeUnit;
  }
  /** @param int */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  /** @return int */
  public function getLimit()
  {
    return $this->limit;
  }
  /** @param GoogleCloudApigeeV1SecurityReportQueryMetric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudApigeeV1SecurityReportQueryMetric[] */
  public function getMetrics()
  {
    return $this->metrics;
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
  public function setReportDefinitionId($reportDefinitionId)
  {
    $this->reportDefinitionId = $reportDefinitionId;
  }
  /** @return string */
  public function getReportDefinitionId()
  {
    return $this->reportDefinitionId;
  }
  /** @param array */
  public function setTimeRange($timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return array */
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class GoogleCloudApigeeV1SecurityReportQueryMetric extends \Google\Model
{
  /** @var string */
  public $aggregationFunction;
  /** @var string */
  public $alias;
  /** @var string */
  public $name;
  /** @var string */
  public $operator;
  /** @var string */
  public $value;

  /** @param string */
  public function setAggregationFunction($aggregationFunction)
  {
    $this->aggregationFunction = $aggregationFunction;
  }
  /** @return string */
  public function getAggregationFunction()
  {
    return $this->aggregationFunction;
  }
  /** @param string */
  public function setAlias($alias)
  {
    $this->alias = $alias;
  }
  /** @return string */
  public function getAlias()
  {
    return $this->alias;
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
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /** @return string */
  public function getOperator()
  {
    return $this->operator;
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

class GoogleCloudApigeeV1SecurityReportResultMetadata extends \Google\Model
{
  /** @var string */
  public $expires;
  /** @var string */
  public $self;

  /** @param string */
  public function setExpires($expires)
  {
    $this->expires = $expires;
  }
  /** @return string */
  public function getExpires()
  {
    return $this->expires;
  }
  /** @param string */
  public function setSelf($self)
  {
    $this->self = $self;
  }
  /** @return string */
  public function getSelf()
  {
    return $this->self;
  }
}

class GoogleCloudApigeeV1SecurityReportResultView extends \Google\Collection
{
  /** @var int */
  public $code;
  /** @var string */
  public $error;
  /** @var GoogleCloudApigeeV1SecurityReportMetadata */
  public $metadata;
  /** @var array[] */
  public $rows;
  /** @var string */
  public $state;
  protected $collection_key = 'rows';
  protected $metadataType = GoogleCloudApigeeV1SecurityReportMetadata::class;
  protected $metadataDataType = '';
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
  /** @param string */
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return string */
  public function getError()
  {
    return $this->error;
  }
  /** @param GoogleCloudApigeeV1SecurityReportMetadata */
  public function setMetadata(GoogleCloudApigeeV1SecurityReportMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return GoogleCloudApigeeV1SecurityReportMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param array[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return array[] */
  public function getRows()
  {
    return $this->rows;
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

class GoogleCloudApigeeV1ServiceIssuersMapping extends \Google\Collection
{
  /** @var string[] */
  public $emailIds;
  /** @var string */
  public $service;
  protected $collection_key = 'emailIds';
  /** @param string[] */
  public function setEmailIds($emailIds)
  {
    $this->emailIds = $emailIds;
  }
  /** @return string[] */
  public function getEmailIds()
  {
    return $this->emailIds;
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

class GoogleCloudApigeeV1Session extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $timestampMs;

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
  public function setTimestampMs($timestampMs)
  {
    $this->timestampMs = $timestampMs;
  }
  /** @return string */
  public function getTimestampMs()
  {
    return $this->timestampMs;
  }
}

class GoogleCloudApigeeV1SetAddonsRequest extends \Google\Model
{
  /** @var GoogleCloudApigeeV1AddonsConfig */
  public $addonsConfig;
  protected $addonsConfigType = GoogleCloudApigeeV1AddonsConfig::class;
  protected $addonsConfigDataType = '';
  /** @param GoogleCloudApigeeV1AddonsConfig */
  public function setAddonsConfig(GoogleCloudApigeeV1AddonsConfig $addonsConfig)
  {
    $this->addonsConfig = $addonsConfig;
  }
  /** @return GoogleCloudApigeeV1AddonsConfig */
  public function getAddonsConfig()
  {
    return $this->addonsConfig;
  }
}

class GoogleCloudApigeeV1SharedFlow extends \Google\Collection
{
  /** @var string */
  public $latestRevisionId;
  /** @var GoogleCloudApigeeV1EntityMetadata */
  public $metaData;
  /** @var string */
  public $name;
  /** @var string[] */
  public $revision;
  protected $collection_key = 'revision';
  protected $metaDataType = GoogleCloudApigeeV1EntityMetadata::class;
  protected $metaDataDataType = '';
  /** @param string */
  public function setLatestRevisionId($latestRevisionId)
  {
    $this->latestRevisionId = $latestRevisionId;
  }
  /** @return string */
  public function getLatestRevisionId()
  {
    return $this->latestRevisionId;
  }
  /** @param GoogleCloudApigeeV1EntityMetadata */
  public function setMetaData(GoogleCloudApigeeV1EntityMetadata $metaData)
  {
    $this->metaData = $metaData;
  }
  /** @return GoogleCloudApigeeV1EntityMetadata */
  public function getMetaData()
  {
    return $this->metaData;
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
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string[] */
  public function getRevision()
  {
    return $this->revision;
  }
}

class GoogleCloudApigeeV1SharedFlowRevision extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1ConfigVersion */
  public $configurationVersion;
  /** @var string */
  public $contextInfo;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $entityMetaDataAsProperties;
  /** @var string */
  public $lastModifiedAt;
  /** @var string */
  public $name;
  /** @var string[] */
  public $policies;
  /** @var GoogleCloudApigeeV1ResourceFiles */
  public $resourceFiles;
  /** @var string[] */
  public $resources;
  /** @var string */
  public $revision;
  /** @var string[] */
  public $sharedFlows;
  /** @var string */
  public $type;
  protected $collection_key = 'sharedFlows';
  protected $configurationVersionType = GoogleCloudApigeeV1ConfigVersion::class;
  protected $configurationVersionDataType = '';
  protected $resourceFilesType = GoogleCloudApigeeV1ResourceFiles::class;
  protected $resourceFilesDataType = '';
  /** @param GoogleCloudApigeeV1ConfigVersion */
  public function setConfigurationVersion(GoogleCloudApigeeV1ConfigVersion $configurationVersion)
  {
    $this->configurationVersion = $configurationVersion;
  }
  /** @return GoogleCloudApigeeV1ConfigVersion */
  public function getConfigurationVersion()
  {
    return $this->configurationVersion;
  }
  /** @param string */
  public function setContextInfo($contextInfo)
  {
    $this->contextInfo = $contextInfo;
  }
  /** @return string */
  public function getContextInfo()
  {
    return $this->contextInfo;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
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
  /** @param string[] */
  public function setEntityMetaDataAsProperties($entityMetaDataAsProperties)
  {
    $this->entityMetaDataAsProperties = $entityMetaDataAsProperties;
  }
  /** @return string[] */
  public function getEntityMetaDataAsProperties()
  {
    return $this->entityMetaDataAsProperties;
  }
  /** @param string */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /** @return string */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
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
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /** @return string[] */
  public function getPolicies()
  {
    return $this->policies;
  }
  /** @param GoogleCloudApigeeV1ResourceFiles */
  public function setResourceFiles(GoogleCloudApigeeV1ResourceFiles $resourceFiles)
  {
    $this->resourceFiles = $resourceFiles;
  }
  /** @return GoogleCloudApigeeV1ResourceFiles */
  public function getResourceFiles()
  {
    return $this->resourceFiles;
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
  /** @param string */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string */
  public function getRevision()
  {
    return $this->revision;
  }
  /** @param string[] */
  public function setSharedFlows($sharedFlows)
  {
    $this->sharedFlows = $sharedFlows;
  }
  /** @return string[] */
  public function getSharedFlows()
  {
    return $this->sharedFlows;
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

class GoogleCloudApigeeV1Stats extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1StatsEnvironmentStats[] */
  public $environments;
  /** @var GoogleCloudApigeeV1StatsHostStats[] */
  public $hosts;
  /** @var GoogleCloudApigeeV1Metadata */
  public $metaData;
  protected $collection_key = 'hosts';
  protected $environmentsType = GoogleCloudApigeeV1StatsEnvironmentStats::class;
  protected $environmentsDataType = 'array';
  protected $hostsType = GoogleCloudApigeeV1StatsHostStats::class;
  protected $hostsDataType = 'array';
  protected $metaDataType = GoogleCloudApigeeV1Metadata::class;
  protected $metaDataDataType = '';
  /** @param GoogleCloudApigeeV1StatsEnvironmentStats[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return GoogleCloudApigeeV1StatsEnvironmentStats[] */
  public function getEnvironments()
  {
    return $this->environments;
  }
  /** @param GoogleCloudApigeeV1StatsHostStats[] */
  public function setHosts($hosts)
  {
    $this->hosts = $hosts;
  }
  /** @return GoogleCloudApigeeV1StatsHostStats[] */
  public function getHosts()
  {
    return $this->hosts;
  }
  /** @param GoogleCloudApigeeV1Metadata */
  public function setMetaData(GoogleCloudApigeeV1Metadata $metaData)
  {
    $this->metaData = $metaData;
  }
  /** @return GoogleCloudApigeeV1Metadata */
  public function getMetaData()
  {
    return $this->metaData;
  }
}

class GoogleCloudApigeeV1StatsEnvironmentStats extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1DimensionMetric[] */
  public $dimensions;
  /** @var GoogleCloudApigeeV1Metric[] */
  public $metrics;
  /** @var string */
  public $name;
  protected $collection_key = 'metrics';
  protected $dimensionsType = GoogleCloudApigeeV1DimensionMetric::class;
  protected $dimensionsDataType = 'array';
  protected $metricsType = GoogleCloudApigeeV1Metric::class;
  protected $metricsDataType = 'array';
  /** @param GoogleCloudApigeeV1DimensionMetric[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return GoogleCloudApigeeV1DimensionMetric[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param GoogleCloudApigeeV1Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudApigeeV1Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
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

class GoogleCloudApigeeV1StatsHostStats extends \Google\Collection
{
  /** @var GoogleCloudApigeeV1DimensionMetric[] */
  public $dimensions;
  /** @var GoogleCloudApigeeV1Metric[] */
  public $metrics;
  /** @var string */
  public $name;
  protected $collection_key = 'metrics';
  protected $dimensionsType = GoogleCloudApigeeV1DimensionMetric::class;
  protected $dimensionsDataType = 'array';
  protected $metricsType = GoogleCloudApigeeV1Metric::class;
  protected $metricsDataType = 'array';
  /** @param GoogleCloudApigeeV1DimensionMetric[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return GoogleCloudApigeeV1DimensionMetric[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param GoogleCloudApigeeV1Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudApigeeV1Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
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

class GoogleCloudApigeeV1Subscription extends \Google\Model
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

class GoogleCloudApigeeV1SyncAuthorization extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string[] */
  public $identities;
  protected $collection_key = 'identities';
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
  public function setIdentities($identities)
  {
    $this->identities = $identities;
  }
  /** @return string[] */
  public function getIdentities()
  {
    return $this->identities;
  }
}

class GoogleCloudApigeeV1TargetServer extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $host;
  /** @var bool */
  public $isEnabled;
  /** @var string */
  public $name;
  /** @var int */
  public $port;
  /** @var string */
  public $protocol;
  /** @var GoogleCloudApigeeV1TlsInfo */
  public $sSLInfo;
  protected $sSLInfoType = GoogleCloudApigeeV1TlsInfo::class;
  protected $sSLInfoDataType = '';
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
  public function setHost($host)
  {
    $this->host = $host;
  }
  /** @return string */
  public function getHost()
  {
    return $this->host;
  }
  /** @param bool */
  public function setIsEnabled($isEnabled)
  {
    $this->isEnabled = $isEnabled;
  }
  /** @return bool */
  public function getIsEnabled()
  {
    return $this->isEnabled;
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
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
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
  /** @param GoogleCloudApigeeV1TlsInfo */
  public function setSSLInfo(GoogleCloudApigeeV1TlsInfo $sSLInfo)
  {
    $this->sSLInfo = $sSLInfo;
  }
  /** @return GoogleCloudApigeeV1TlsInfo */
  public function getSSLInfo()
  {
    return $this->sSLInfo;
  }
}

class GoogleCloudApigeeV1TargetServerConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $host;
  /** @var string */
  public $name;
  /** @var int */
  public $port;
  /** @var string */
  public $protocol;
  /** @var GoogleCloudApigeeV1TlsInfoConfig */
  public $tlsInfo;
  protected $tlsInfoType = GoogleCloudApigeeV1TlsInfoConfig::class;
  protected $tlsInfoDataType = '';
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
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
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
  /** @param GoogleCloudApigeeV1TlsInfoConfig */
  public function setTlsInfo(GoogleCloudApigeeV1TlsInfoConfig $tlsInfo)
  {
    $this->tlsInfo = $tlsInfo;
  }
  /** @return GoogleCloudApigeeV1TlsInfoConfig */
  public function getTlsInfo()
  {
    return $this->tlsInfo;
  }
}

class GoogleCloudApigeeV1TestDatastoreResponse extends \Google\Model
{
  /** @var string */
  public $error;
  /** @var string */
  public $state;

  /** @param string */
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return string */
  public function getError()
  {
    return $this->error;
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

class GoogleCloudApigeeV1TlsInfo extends \Google\Collection
{
  /** @var string[] */
  public $ciphers;
  /** @var bool */
  public $clientAuthEnabled;
  /** @var GoogleCloudApigeeV1TlsInfoCommonName */
  public $commonName;
  /** @var bool */
  public $enabled;
  /** @var bool */
  public $ignoreValidationErrors;
  /** @var string */
  public $keyAlias;
  /** @var string */
  public $keyStore;
  /** @var string[] */
  public $protocols;
  /** @var string */
  public $trustStore;
  protected $collection_key = 'protocols';
  protected $commonNameType = GoogleCloudApigeeV1TlsInfoCommonName::class;
  protected $commonNameDataType = '';
  /** @param string[] */
  public function setCiphers($ciphers)
  {
    $this->ciphers = $ciphers;
  }
  /** @return string[] */
  public function getCiphers()
  {
    return $this->ciphers;
  }
  /** @param bool */
  public function setClientAuthEnabled($clientAuthEnabled)
  {
    $this->clientAuthEnabled = $clientAuthEnabled;
  }
  /** @return bool */
  public function getClientAuthEnabled()
  {
    return $this->clientAuthEnabled;
  }
  /** @param GoogleCloudApigeeV1TlsInfoCommonName */
  public function setCommonName(GoogleCloudApigeeV1TlsInfoCommonName $commonName)
  {
    $this->commonName = $commonName;
  }
  /** @return GoogleCloudApigeeV1TlsInfoCommonName */
  public function getCommonName()
  {
    return $this->commonName;
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
  /** @param bool */
  public function setIgnoreValidationErrors($ignoreValidationErrors)
  {
    $this->ignoreValidationErrors = $ignoreValidationErrors;
  }
  /** @return bool */
  public function getIgnoreValidationErrors()
  {
    return $this->ignoreValidationErrors;
  }
  /** @param string */
  public function setKeyAlias($keyAlias)
  {
    $this->keyAlias = $keyAlias;
  }
  /** @return string */
  public function getKeyAlias()
  {
    return $this->keyAlias;
  }
  /** @param string */
  public function setKeyStore($keyStore)
  {
    $this->keyStore = $keyStore;
  }
  /** @return string */
  public function getKeyStore()
  {
    return $this->keyStore;
  }
  /** @param string[] */
  public function setProtocols($protocols)
  {
    $this->protocols = $protocols;
  }
  /** @return string[] */
  public function getProtocols()
  {
    return $this->protocols;
  }
  /** @param string */
  public function setTrustStore($trustStore)
  {
    $this->trustStore = $trustStore;
  }
  /** @return string */
  public function getTrustStore()
  {
    return $this->trustStore;
  }
}

class GoogleCloudApigeeV1TlsInfoCommonName extends \Google\Model
{
  /** @var string */
  public $value;
  /** @var bool */
  public $wildcardMatch;

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
  /** @param bool */
  public function setWildcardMatch($wildcardMatch)
  {
    $this->wildcardMatch = $wildcardMatch;
  }
  /** @return bool */
  public function getWildcardMatch()
  {
    return $this->wildcardMatch;
  }
}

class GoogleCloudApigeeV1TlsInfoConfig extends \Google\Collection
{
  /** @var string[] */
  public $ciphers;
  /** @var bool */
  public $clientAuthEnabled;
  /** @var GoogleCloudApigeeV1CommonNameConfig */
  public $commonName;
  /** @var bool */
  public $enabled;
  /** @var bool */
  public $ignoreValidationErrors;
  /** @var string */
  public $keyAlias;
  /** @var GoogleCloudApigeeV1KeyAliasReference */
  public $keyAliasReference;
  /** @var string[] */
  public $protocols;
  /** @var string */
  public $trustStore;
  protected $collection_key = 'protocols';
  protected $commonNameType = GoogleCloudApigeeV1CommonNameConfig::class;
  protected $commonNameDataType = '';
  protected $keyAliasReferenceType = GoogleCloudApigeeV1KeyAliasReference::class;
  protected $keyAliasReferenceDataType = '';
  /** @param string[] */
  public function setCiphers($ciphers)
  {
    $this->ciphers = $ciphers;
  }
  /** @return string[] */
  public function getCiphers()
  {
    return $this->ciphers;
  }
  /** @param bool */
  public function setClientAuthEnabled($clientAuthEnabled)
  {
    $this->clientAuthEnabled = $clientAuthEnabled;
  }
  /** @return bool */
  public function getClientAuthEnabled()
  {
    return $this->clientAuthEnabled;
  }
  /** @param GoogleCloudApigeeV1CommonNameConfig */
  public function setCommonName(GoogleCloudApigeeV1CommonNameConfig $commonName)
  {
    $this->commonName = $commonName;
  }
  /** @return GoogleCloudApigeeV1CommonNameConfig */
  public function getCommonName()
  {
    return $this->commonName;
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
  /** @param bool */
  public function setIgnoreValidationErrors($ignoreValidationErrors)
  {
    $this->ignoreValidationErrors = $ignoreValidationErrors;
  }
  /** @return bool */
  public function getIgnoreValidationErrors()
  {
    return $this->ignoreValidationErrors;
  }
  /** @param string */
  public function setKeyAlias($keyAlias)
  {
    $this->keyAlias = $keyAlias;
  }
  /** @return string */
  public function getKeyAlias()
  {
    return $this->keyAlias;
  }
  /** @param GoogleCloudApigeeV1KeyAliasReference */
  public function setKeyAliasReference(GoogleCloudApigeeV1KeyAliasReference $keyAliasReference)
  {
    $this->keyAliasReference = $keyAliasReference;
  }
  /** @return GoogleCloudApigeeV1KeyAliasReference */
  public function getKeyAliasReference()
  {
    return $this->keyAliasReference;
  }
  /** @param string[] */
  public function setProtocols($protocols)
  {
    $this->protocols = $protocols;
  }
  /** @return string[] */
  public function getProtocols()
  {
    return $this->protocols;
  }
  /** @param string */
  public function setTrustStore($trustStore)
  {
    $this->trustStore = $trustStore;
  }
  /** @return string */
  public function getTrustStore()
  {
    return $this->trustStore;
  }
}

class GoogleCloudApigeeV1TraceConfig extends \Google\Model
{
  /** @var string */
  public $endpoint;
  /** @var string */
  public $exporter;
  /** @var GoogleCloudApigeeV1TraceSamplingConfig */
  public $samplingConfig;
  protected $samplingConfigType = GoogleCloudApigeeV1TraceSamplingConfig::class;
  protected $samplingConfigDataType = '';
  /** @param string */
  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /** @return string */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /** @param string */
  public function setExporter($exporter)
  {
    $this->exporter = $exporter;
  }
  /** @return string */
  public function getExporter()
  {
    return $this->exporter;
  }
  /** @param GoogleCloudApigeeV1TraceSamplingConfig */
  public function setSamplingConfig(GoogleCloudApigeeV1TraceSamplingConfig $samplingConfig)
  {
    $this->samplingConfig = $samplingConfig;
  }
  /** @return GoogleCloudApigeeV1TraceSamplingConfig */
  public function getSamplingConfig()
  {
    return $this->samplingConfig;
  }
}

class GoogleCloudApigeeV1TraceConfigOverride extends \Google\Model
{
  /** @var string */
  public $apiProxy;
  /** @var string */
  public $name;
  /** @var GoogleCloudApigeeV1TraceSamplingConfig */
  public $samplingConfig;
  protected $samplingConfigType = GoogleCloudApigeeV1TraceSamplingConfig::class;
  protected $samplingConfigDataType = '';
  /** @param string */
  public function setApiProxy($apiProxy)
  {
    $this->apiProxy = $apiProxy;
  }
  /** @return string */
  public function getApiProxy()
  {
    return $this->apiProxy;
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
  /** @param GoogleCloudApigeeV1TraceSamplingConfig */
  public function setSamplingConfig(GoogleCloudApigeeV1TraceSamplingConfig $samplingConfig)
  {
    $this->samplingConfig = $samplingConfig;
  }
  /** @return GoogleCloudApigeeV1TraceSamplingConfig */
  public function getSamplingConfig()
  {
    return $this->samplingConfig;
  }
}

class GoogleCloudApigeeV1TraceSamplingConfig extends \Google\Model
{
  /** @var string */
  public $sampler;
  /** @var float */
  public $samplingRate;

  /** @param string */
  public function setSampler($sampler)
  {
    $this->sampler = $sampler;
  }
  /** @return string */
  public function getSampler()
  {
    return $this->sampler;
  }
  /** @param float */
  public function setSamplingRate($samplingRate)
  {
    $this->samplingRate = $samplingRate;
  }
  /** @return float */
  public function getSamplingRate()
  {
    return $this->samplingRate;
  }
}

class GoogleCloudApigeeV1UpdateError extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $message;
  /** @var string */
  public $resource;
  /** @var string */
  public $type;

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
  /** @var GoogleTypeExpr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = GoogleTypeExpr::class;
  protected $conditionDataType = '';
  /** @param GoogleTypeExpr */
  public function setCondition(GoogleTypeExpr $condition)
  {
    $this->condition = $condition;
  }
  /** @return GoogleTypeExpr */
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

class GoogleLongrunningListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleLongrunningOperation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = GoogleLongrunningOperation::class;
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
  /** @param GoogleLongrunningOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleLongrunningOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class GoogleLongrunningOperation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = GoogleRpcStatus::class;
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
  /** @param GoogleRpcStatus */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /** @return GoogleRpcStatus */
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

class GoogleProtobufEmpty extends \Google\Model
{
}

class GoogleRpcPreconditionFailure extends \Google\Collection
{
  /** @var GoogleRpcPreconditionFailureViolation[] */
  public $violations;
  protected $collection_key = 'violations';
  protected $violationsType = GoogleRpcPreconditionFailureViolation::class;
  protected $violationsDataType = 'array';
  /** @param GoogleRpcPreconditionFailureViolation[] */
  public function setViolations($violations)
  {
    $this->violations = $violations;
  }
  /** @return GoogleRpcPreconditionFailureViolation[] */
  public function getViolations()
  {
    return $this->violations;
  }
}

class GoogleRpcPreconditionFailureViolation extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $subject;
  /** @var string */
  public $type;

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
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /** @return string */
  public function getSubject()
  {
    return $this->subject;
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

class GoogleRpcStatus extends \Google\Collection
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

class GoogleTypeExpr extends \Google\Model
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

class GoogleTypeInterval extends \Google\Model
{
  /** @var string */
  public $endTime;
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

class GoogleTypeMoney extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var int */
  public $nanos;
  /** @var string */
  public $units;

  /** @param string */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /** @return string */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /** @param int */
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  /** @return int */
  public function getNanos()
  {
    return $this->nanos;
  }
  /** @param string */
  public function setUnits($units)
  {
    $this->units = $units;
  }
  /** @return string */
  public function getUnits()
  {
    return $this->units;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EdgeConfigstoreBundleBadBundle::class, 'Google_Service_Apigee_EdgeConfigstoreBundleBadBundle');
class_alias(EdgeConfigstoreBundleBadBundleViolation::class, 'Google_Service_Apigee_EdgeConfigstoreBundleBadBundleViolation');
class_alias(GoogleApiHttpBody::class, 'Google_Service_Apigee_GoogleApiHttpBody');
class_alias(GoogleCloudApigeeV1Access::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Access');
class_alias(GoogleCloudApigeeV1AccessGet::class, 'Google_Service_Apigee_GoogleCloudApigeeV1AccessGet');
class_alias(GoogleCloudApigeeV1AccessRemove::class, 'Google_Service_Apigee_GoogleCloudApigeeV1AccessRemove');
class_alias(GoogleCloudApigeeV1AccessSet::class, 'Google_Service_Apigee_GoogleCloudApigeeV1AccessSet');
class_alias(GoogleCloudApigeeV1ActivateNatAddressRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ActivateNatAddressRequest');
class_alias(GoogleCloudApigeeV1AddonsConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1AddonsConfig');
class_alias(GoogleCloudApigeeV1AdjustDeveloperBalanceRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1AdjustDeveloperBalanceRequest');
class_alias(GoogleCloudApigeeV1AdvancedApiOpsConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1AdvancedApiOpsConfig');
class_alias(GoogleCloudApigeeV1Alias::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Alias');
class_alias(GoogleCloudApigeeV1AliasRevisionConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1AliasRevisionConfig');
class_alias(GoogleCloudApigeeV1ApiCategory::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApiCategory');
class_alias(GoogleCloudApigeeV1ApiCategoryData::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApiCategoryData');
class_alias(GoogleCloudApigeeV1ApiProduct::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApiProduct');
class_alias(GoogleCloudApigeeV1ApiProductRef::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApiProductRef');
class_alias(GoogleCloudApigeeV1ApiProxy::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApiProxy');
class_alias(GoogleCloudApigeeV1ApiProxyRevision::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApiProxyRevision');
class_alias(GoogleCloudApigeeV1ApiResponseWrapper::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApiResponseWrapper');
class_alias(GoogleCloudApigeeV1ApiSecurityConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApiSecurityConfig');
class_alias(GoogleCloudApigeeV1ApiSecurityRuntimeConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApiSecurityRuntimeConfig');
class_alias(GoogleCloudApigeeV1App::class, 'Google_Service_Apigee_GoogleCloudApigeeV1App');
class_alias(GoogleCloudApigeeV1ArchiveDeployment::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ArchiveDeployment');
class_alias(GoogleCloudApigeeV1AsyncQuery::class, 'Google_Service_Apigee_GoogleCloudApigeeV1AsyncQuery');
class_alias(GoogleCloudApigeeV1AsyncQueryResult::class, 'Google_Service_Apigee_GoogleCloudApigeeV1AsyncQueryResult');
class_alias(GoogleCloudApigeeV1AsyncQueryResultView::class, 'Google_Service_Apigee_GoogleCloudApigeeV1AsyncQueryResultView');
class_alias(GoogleCloudApigeeV1Attribute::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Attribute');
class_alias(GoogleCloudApigeeV1Attributes::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Attributes');
class_alias(GoogleCloudApigeeV1CanaryEvaluation::class, 'Google_Service_Apigee_GoogleCloudApigeeV1CanaryEvaluation');
class_alias(GoogleCloudApigeeV1CanaryEvaluationMetricLabels::class, 'Google_Service_Apigee_GoogleCloudApigeeV1CanaryEvaluationMetricLabels');
class_alias(GoogleCloudApigeeV1CertInfo::class, 'Google_Service_Apigee_GoogleCloudApigeeV1CertInfo');
class_alias(GoogleCloudApigeeV1Certificate::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Certificate');
class_alias(GoogleCloudApigeeV1CommonNameConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1CommonNameConfig');
class_alias(GoogleCloudApigeeV1ComputeEnvironmentScoresRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ComputeEnvironmentScoresRequest');
class_alias(GoogleCloudApigeeV1ComputeEnvironmentScoresRequestFilter::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ComputeEnvironmentScoresRequestFilter');
class_alias(GoogleCloudApigeeV1ComputeEnvironmentScoresResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ComputeEnvironmentScoresResponse');
class_alias(GoogleCloudApigeeV1ConfigVersion::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ConfigVersion');
class_alias(GoogleCloudApigeeV1ConnectorsPlatformConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ConnectorsPlatformConfig');
class_alias(GoogleCloudApigeeV1Credential::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Credential');
class_alias(GoogleCloudApigeeV1CreditDeveloperBalanceRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1CreditDeveloperBalanceRequest');
class_alias(GoogleCloudApigeeV1CustomReport::class, 'Google_Service_Apigee_GoogleCloudApigeeV1CustomReport');
class_alias(GoogleCloudApigeeV1CustomReportMetric::class, 'Google_Service_Apigee_GoogleCloudApigeeV1CustomReportMetric');
class_alias(GoogleCloudApigeeV1DataCollector::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DataCollector');
class_alias(GoogleCloudApigeeV1DataCollectorConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DataCollectorConfig');
class_alias(GoogleCloudApigeeV1Datastore::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Datastore');
class_alias(GoogleCloudApigeeV1DatastoreConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DatastoreConfig');
class_alias(GoogleCloudApigeeV1DateRange::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DateRange');
class_alias(GoogleCloudApigeeV1DebugMask::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DebugMask');
class_alias(GoogleCloudApigeeV1DebugSession::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DebugSession');
class_alias(GoogleCloudApigeeV1DebugSessionTransaction::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DebugSessionTransaction');
class_alias(GoogleCloudApigeeV1DeleteCustomReportResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeleteCustomReportResponse');
class_alias(GoogleCloudApigeeV1Deployment::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Deployment');
class_alias(GoogleCloudApigeeV1DeploymentChangeReport::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeploymentChangeReport');
class_alias(GoogleCloudApigeeV1DeploymentChangeReportRoutingChange::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeploymentChangeReportRoutingChange');
class_alias(GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeploymentChangeReportRoutingConflict');
class_alias(GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeploymentChangeReportRoutingDeployment');
class_alias(GoogleCloudApigeeV1DeploymentConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeploymentConfig');
class_alias(GoogleCloudApigeeV1Developer::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Developer');
class_alias(GoogleCloudApigeeV1DeveloperApp::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeveloperApp');
class_alias(GoogleCloudApigeeV1DeveloperAppKey::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeveloperAppKey');
class_alias(GoogleCloudApigeeV1DeveloperBalance::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeveloperBalance');
class_alias(GoogleCloudApigeeV1DeveloperBalanceWallet::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeveloperBalanceWallet');
class_alias(GoogleCloudApigeeV1DeveloperMonetizationConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeveloperMonetizationConfig');
class_alias(GoogleCloudApigeeV1DeveloperSubscription::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DeveloperSubscription');
class_alias(GoogleCloudApigeeV1DimensionMetric::class, 'Google_Service_Apigee_GoogleCloudApigeeV1DimensionMetric');
class_alias(GoogleCloudApigeeV1EndpointAttachment::class, 'Google_Service_Apigee_GoogleCloudApigeeV1EndpointAttachment');
class_alias(GoogleCloudApigeeV1EntityMetadata::class, 'Google_Service_Apigee_GoogleCloudApigeeV1EntityMetadata');
class_alias(GoogleCloudApigeeV1Environment::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Environment');
class_alias(GoogleCloudApigeeV1EnvironmentConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1EnvironmentConfig');
class_alias(GoogleCloudApigeeV1EnvironmentGroup::class, 'Google_Service_Apigee_GoogleCloudApigeeV1EnvironmentGroup');
class_alias(GoogleCloudApigeeV1EnvironmentGroupAttachment::class, 'Google_Service_Apigee_GoogleCloudApigeeV1EnvironmentGroupAttachment');
class_alias(GoogleCloudApigeeV1EnvironmentGroupConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1EnvironmentGroupConfig');
class_alias(GoogleCloudApigeeV1ExpireDeveloperSubscriptionRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ExpireDeveloperSubscriptionRequest');
class_alias(GoogleCloudApigeeV1Export::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Export');
class_alias(GoogleCloudApigeeV1ExportRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ExportRequest');
class_alias(GoogleCloudApigeeV1FlowHook::class, 'Google_Service_Apigee_GoogleCloudApigeeV1FlowHook');
class_alias(GoogleCloudApigeeV1FlowHookConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1FlowHookConfig');
class_alias(GoogleCloudApigeeV1GenerateDownloadUrlRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1GenerateDownloadUrlRequest');
class_alias(GoogleCloudApigeeV1GenerateDownloadUrlResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1GenerateDownloadUrlResponse');
class_alias(GoogleCloudApigeeV1GenerateUploadUrlRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1GenerateUploadUrlRequest');
class_alias(GoogleCloudApigeeV1GenerateUploadUrlResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1GenerateUploadUrlResponse');
class_alias(GoogleCloudApigeeV1GetAsyncQueryResultUrlResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1GetAsyncQueryResultUrlResponse');
class_alias(GoogleCloudApigeeV1GetAsyncQueryResultUrlResponseURLInfo::class, 'Google_Service_Apigee_GoogleCloudApigeeV1GetAsyncQueryResultUrlResponseURLInfo');
class_alias(GoogleCloudApigeeV1GetSyncAuthorizationRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1GetSyncAuthorizationRequest');
class_alias(GoogleCloudApigeeV1GraphQLOperation::class, 'Google_Service_Apigee_GoogleCloudApigeeV1GraphQLOperation');
class_alias(GoogleCloudApigeeV1GraphQLOperationConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1GraphQLOperationConfig');
class_alias(GoogleCloudApigeeV1GraphQLOperationGroup::class, 'Google_Service_Apigee_GoogleCloudApigeeV1GraphQLOperationGroup');
class_alias(GoogleCloudApigeeV1IngressConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1IngressConfig');
class_alias(GoogleCloudApigeeV1Instance::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Instance');
class_alias(GoogleCloudApigeeV1InstanceAttachment::class, 'Google_Service_Apigee_GoogleCloudApigeeV1InstanceAttachment');
class_alias(GoogleCloudApigeeV1InstanceDeploymentStatus::class, 'Google_Service_Apigee_GoogleCloudApigeeV1InstanceDeploymentStatus');
class_alias(GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRevision::class, 'Google_Service_Apigee_GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRevision');
class_alias(GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRoute::class, 'Google_Service_Apigee_GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRoute');
class_alias(GoogleCloudApigeeV1IntegrationConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1IntegrationConfig');
class_alias(GoogleCloudApigeeV1KeyAliasReference::class, 'Google_Service_Apigee_GoogleCloudApigeeV1KeyAliasReference');
class_alias(GoogleCloudApigeeV1KeyValueEntry::class, 'Google_Service_Apigee_GoogleCloudApigeeV1KeyValueEntry');
class_alias(GoogleCloudApigeeV1KeyValueMap::class, 'Google_Service_Apigee_GoogleCloudApigeeV1KeyValueMap');
class_alias(GoogleCloudApigeeV1Keystore::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Keystore');
class_alias(GoogleCloudApigeeV1KeystoreConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1KeystoreConfig');
class_alias(GoogleCloudApigeeV1ListApiCategoriesResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListApiCategoriesResponse');
class_alias(GoogleCloudApigeeV1ListApiProductsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListApiProductsResponse');
class_alias(GoogleCloudApigeeV1ListApiProxiesResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListApiProxiesResponse');
class_alias(GoogleCloudApigeeV1ListAppsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListAppsResponse');
class_alias(GoogleCloudApigeeV1ListArchiveDeploymentsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListArchiveDeploymentsResponse');
class_alias(GoogleCloudApigeeV1ListAsyncQueriesResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListAsyncQueriesResponse');
class_alias(GoogleCloudApigeeV1ListCustomReportsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListCustomReportsResponse');
class_alias(GoogleCloudApigeeV1ListDataCollectorsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListDataCollectorsResponse');
class_alias(GoogleCloudApigeeV1ListDatastoresResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListDatastoresResponse');
class_alias(GoogleCloudApigeeV1ListDebugSessionsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListDebugSessionsResponse');
class_alias(GoogleCloudApigeeV1ListDeploymentsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListDeploymentsResponse');
class_alias(GoogleCloudApigeeV1ListDeveloperAppsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListDeveloperAppsResponse');
class_alias(GoogleCloudApigeeV1ListDeveloperSubscriptionsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListDeveloperSubscriptionsResponse');
class_alias(GoogleCloudApigeeV1ListEndpointAttachmentsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListEndpointAttachmentsResponse');
class_alias(GoogleCloudApigeeV1ListEnvironmentGroupAttachmentsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListEnvironmentGroupAttachmentsResponse');
class_alias(GoogleCloudApigeeV1ListEnvironmentGroupsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListEnvironmentGroupsResponse');
class_alias(GoogleCloudApigeeV1ListEnvironmentResourcesResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListEnvironmentResourcesResponse');
class_alias(GoogleCloudApigeeV1ListExportsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListExportsResponse');
class_alias(GoogleCloudApigeeV1ListHybridIssuersResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListHybridIssuersResponse');
class_alias(GoogleCloudApigeeV1ListInstanceAttachmentsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListInstanceAttachmentsResponse');
class_alias(GoogleCloudApigeeV1ListInstancesResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListInstancesResponse');
class_alias(GoogleCloudApigeeV1ListKeyValueEntriesResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListKeyValueEntriesResponse');
class_alias(GoogleCloudApigeeV1ListNatAddressesResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListNatAddressesResponse');
class_alias(GoogleCloudApigeeV1ListOfDevelopersResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListOfDevelopersResponse');
class_alias(GoogleCloudApigeeV1ListOrganizationsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListOrganizationsResponse');
class_alias(GoogleCloudApigeeV1ListRatePlansResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListRatePlansResponse');
class_alias(GoogleCloudApigeeV1ListSecurityProfileRevisionsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListSecurityProfileRevisionsResponse');
class_alias(GoogleCloudApigeeV1ListSecurityProfilesResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListSecurityProfilesResponse');
class_alias(GoogleCloudApigeeV1ListSecurityReportsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListSecurityReportsResponse');
class_alias(GoogleCloudApigeeV1ListSharedFlowsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListSharedFlowsResponse');
class_alias(GoogleCloudApigeeV1ListTraceConfigOverridesResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ListTraceConfigOverridesResponse');
class_alias(GoogleCloudApigeeV1Metadata::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Metadata');
class_alias(GoogleCloudApigeeV1Metric::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Metric');
class_alias(GoogleCloudApigeeV1MetricAggregation::class, 'Google_Service_Apigee_GoogleCloudApigeeV1MetricAggregation');
class_alias(GoogleCloudApigeeV1MonetizationConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1MonetizationConfig');
class_alias(GoogleCloudApigeeV1NatAddress::class, 'Google_Service_Apigee_GoogleCloudApigeeV1NatAddress');
class_alias(GoogleCloudApigeeV1NodeConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1NodeConfig');
class_alias(GoogleCloudApigeeV1Operation::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Operation');
class_alias(GoogleCloudApigeeV1OperationConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1OperationConfig');
class_alias(GoogleCloudApigeeV1OperationGroup::class, 'Google_Service_Apigee_GoogleCloudApigeeV1OperationGroup');
class_alias(GoogleCloudApigeeV1OperationMetadata::class, 'Google_Service_Apigee_GoogleCloudApigeeV1OperationMetadata');
class_alias(GoogleCloudApigeeV1OperationMetadataProgress::class, 'Google_Service_Apigee_GoogleCloudApigeeV1OperationMetadataProgress');
class_alias(GoogleCloudApigeeV1OptimizedStats::class, 'Google_Service_Apigee_GoogleCloudApigeeV1OptimizedStats');
class_alias(GoogleCloudApigeeV1OptimizedStatsNode::class, 'Google_Service_Apigee_GoogleCloudApigeeV1OptimizedStatsNode');
class_alias(GoogleCloudApigeeV1OptimizedStatsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1OptimizedStatsResponse');
class_alias(GoogleCloudApigeeV1Organization::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Organization');
class_alias(GoogleCloudApigeeV1OrganizationProjectMapping::class, 'Google_Service_Apigee_GoogleCloudApigeeV1OrganizationProjectMapping');
class_alias(GoogleCloudApigeeV1PodStatus::class, 'Google_Service_Apigee_GoogleCloudApigeeV1PodStatus');
class_alias(GoogleCloudApigeeV1Point::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Point');
class_alias(GoogleCloudApigeeV1Properties::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Properties');
class_alias(GoogleCloudApigeeV1Property::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Property');
class_alias(GoogleCloudApigeeV1ProvisionOrganizationRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ProvisionOrganizationRequest');
class_alias(GoogleCloudApigeeV1Query::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Query');
class_alias(GoogleCloudApigeeV1QueryMetadata::class, 'Google_Service_Apigee_GoogleCloudApigeeV1QueryMetadata');
class_alias(GoogleCloudApigeeV1QueryMetric::class, 'Google_Service_Apigee_GoogleCloudApigeeV1QueryMetric');
class_alias(GoogleCloudApigeeV1QueryTabularStatsRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1QueryTabularStatsRequest');
class_alias(GoogleCloudApigeeV1QueryTabularStatsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1QueryTabularStatsResponse');
class_alias(GoogleCloudApigeeV1QueryTimeSeriesStatsRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1QueryTimeSeriesStatsRequest');
class_alias(GoogleCloudApigeeV1QueryTimeSeriesStatsResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1QueryTimeSeriesStatsResponse');
class_alias(GoogleCloudApigeeV1QueryTimeSeriesStatsResponseSequence::class, 'Google_Service_Apigee_GoogleCloudApigeeV1QueryTimeSeriesStatsResponseSequence');
class_alias(GoogleCloudApigeeV1Quota::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Quota');
class_alias(GoogleCloudApigeeV1RatePlan::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RatePlan');
class_alias(GoogleCloudApigeeV1RateRange::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RateRange');
class_alias(GoogleCloudApigeeV1Reference::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Reference');
class_alias(GoogleCloudApigeeV1ReferenceConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ReferenceConfig');
class_alias(GoogleCloudApigeeV1ReportInstanceStatusRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ReportInstanceStatusRequest');
class_alias(GoogleCloudApigeeV1ReportInstanceStatusResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ReportInstanceStatusResponse');
class_alias(GoogleCloudApigeeV1ReportProperty::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ReportProperty');
class_alias(GoogleCloudApigeeV1ResourceConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ResourceConfig');
class_alias(GoogleCloudApigeeV1ResourceFile::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ResourceFile');
class_alias(GoogleCloudApigeeV1ResourceFiles::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ResourceFiles');
class_alias(GoogleCloudApigeeV1ResourceStatus::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ResourceStatus');
class_alias(GoogleCloudApigeeV1Result::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Result');
class_alias(GoogleCloudApigeeV1RevenueShareRange::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RevenueShareRange');
class_alias(GoogleCloudApigeeV1RevisionStatus::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RevisionStatus');
class_alias(GoogleCloudApigeeV1RoutingRule::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RoutingRule');
class_alias(GoogleCloudApigeeV1RuntimeConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RuntimeConfig');
class_alias(GoogleCloudApigeeV1RuntimeTraceConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RuntimeTraceConfig');
class_alias(GoogleCloudApigeeV1RuntimeTraceConfigOverride::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RuntimeTraceConfigOverride');
class_alias(GoogleCloudApigeeV1RuntimeTraceSamplingConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1RuntimeTraceSamplingConfig');
class_alias(GoogleCloudApigeeV1Schema::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Schema');
class_alias(GoogleCloudApigeeV1SchemaSchemaElement::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SchemaSchemaElement');
class_alias(GoogleCloudApigeeV1SchemaSchemaProperty::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SchemaSchemaProperty');
class_alias(GoogleCloudApigeeV1Score::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Score');
class_alias(GoogleCloudApigeeV1ScoreComponent::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ScoreComponent');
class_alias(GoogleCloudApigeeV1ScoreComponentRecommendation::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ScoreComponentRecommendation');
class_alias(GoogleCloudApigeeV1ScoreComponentRecommendationAction::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ScoreComponentRecommendationAction');
class_alias(GoogleCloudApigeeV1ScoreComponentRecommendationActionActionContext::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ScoreComponentRecommendationActionActionContext');
class_alias(GoogleCloudApigeeV1SecurityProfile::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityProfile');
class_alias(GoogleCloudApigeeV1SecurityProfileEnvironment::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityProfileEnvironment');
class_alias(GoogleCloudApigeeV1SecurityProfileEnvironmentAssociation::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityProfileEnvironmentAssociation');
class_alias(GoogleCloudApigeeV1SecurityProfileScoringConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityProfileScoringConfig');
class_alias(GoogleCloudApigeeV1SecurityReport::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityReport');
class_alias(GoogleCloudApigeeV1SecurityReportMetadata::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityReportMetadata');
class_alias(GoogleCloudApigeeV1SecurityReportQuery::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityReportQuery');
class_alias(GoogleCloudApigeeV1SecurityReportQueryMetric::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityReportQueryMetric');
class_alias(GoogleCloudApigeeV1SecurityReportResultMetadata::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityReportResultMetadata');
class_alias(GoogleCloudApigeeV1SecurityReportResultView::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SecurityReportResultView');
class_alias(GoogleCloudApigeeV1ServiceIssuersMapping::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ServiceIssuersMapping');
class_alias(GoogleCloudApigeeV1Session::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Session');
class_alias(GoogleCloudApigeeV1SetAddonsRequest::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SetAddonsRequest');
class_alias(GoogleCloudApigeeV1SharedFlow::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SharedFlow');
class_alias(GoogleCloudApigeeV1SharedFlowRevision::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SharedFlowRevision');
class_alias(GoogleCloudApigeeV1Stats::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Stats');
class_alias(GoogleCloudApigeeV1StatsEnvironmentStats::class, 'Google_Service_Apigee_GoogleCloudApigeeV1StatsEnvironmentStats');
class_alias(GoogleCloudApigeeV1StatsHostStats::class, 'Google_Service_Apigee_GoogleCloudApigeeV1StatsHostStats');
class_alias(GoogleCloudApigeeV1Subscription::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Subscription');
class_alias(GoogleCloudApigeeV1SyncAuthorization::class, 'Google_Service_Apigee_GoogleCloudApigeeV1SyncAuthorization');
class_alias(GoogleCloudApigeeV1TargetServer::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TargetServer');
class_alias(GoogleCloudApigeeV1TargetServerConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TargetServerConfig');
class_alias(GoogleCloudApigeeV1TestDatastoreResponse::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TestDatastoreResponse');
class_alias(GoogleCloudApigeeV1TlsInfo::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TlsInfo');
class_alias(GoogleCloudApigeeV1TlsInfoCommonName::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TlsInfoCommonName');
class_alias(GoogleCloudApigeeV1TlsInfoConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TlsInfoConfig');
class_alias(GoogleCloudApigeeV1TraceConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TraceConfig');
class_alias(GoogleCloudApigeeV1TraceConfigOverride::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TraceConfigOverride');
class_alias(GoogleCloudApigeeV1TraceSamplingConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TraceSamplingConfig');
class_alias(GoogleCloudApigeeV1UpdateError::class, 'Google_Service_Apigee_GoogleCloudApigeeV1UpdateError');
class_alias(GoogleIamV1AuditConfig::class, 'Google_Service_Apigee_GoogleIamV1AuditConfig');
class_alias(GoogleIamV1AuditLogConfig::class, 'Google_Service_Apigee_GoogleIamV1AuditLogConfig');
class_alias(GoogleIamV1Binding::class, 'Google_Service_Apigee_GoogleIamV1Binding');
class_alias(GoogleIamV1Policy::class, 'Google_Service_Apigee_GoogleIamV1Policy');
class_alias(GoogleIamV1SetIamPolicyRequest::class, 'Google_Service_Apigee_GoogleIamV1SetIamPolicyRequest');
class_alias(GoogleIamV1TestIamPermissionsRequest::class, 'Google_Service_Apigee_GoogleIamV1TestIamPermissionsRequest');
class_alias(GoogleIamV1TestIamPermissionsResponse::class, 'Google_Service_Apigee_GoogleIamV1TestIamPermissionsResponse');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_Apigee_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_Apigee_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_Apigee_GoogleProtobufEmpty');
class_alias(GoogleRpcPreconditionFailure::class, 'Google_Service_Apigee_GoogleRpcPreconditionFailure');
class_alias(GoogleRpcPreconditionFailureViolation::class, 'Google_Service_Apigee_GoogleRpcPreconditionFailureViolation');
class_alias(GoogleRpcStatus::class, 'Google_Service_Apigee_GoogleRpcStatus');
class_alias(GoogleTypeExpr::class, 'Google_Service_Apigee_GoogleTypeExpr');
class_alias(GoogleTypeInterval::class, 'Google_Service_Apigee_GoogleTypeInterval');
class_alias(GoogleTypeMoney::class, 'Google_Service_Apigee_GoogleTypeMoney');
