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

namespace Google\Service\CloudDataplex;

class DataplexEmpty extends \Google\Model
{
}

class GoogleCloudDataplexV1Action extends \Google\Collection
{
  /** @var string */
  public $asset;
  /** @var string */
  public $category;
  /** @var string[] */
  public $dataLocations;
  /** @var string */
  public $detectTime;
  /** @var GoogleCloudDataplexV1ActionFailedSecurityPolicyApply */
  public $failedSecurityPolicyApply;
  /** @var GoogleCloudDataplexV1ActionIncompatibleDataSchema */
  public $incompatibleDataSchema;
  /** @var GoogleCloudDataplexV1ActionInvalidDataFormat */
  public $invalidDataFormat;
  /** @var GoogleCloudDataplexV1ActionInvalidDataOrganization */
  public $invalidDataOrganization;
  /** @var GoogleCloudDataplexV1ActionInvalidDataPartition */
  public $invalidDataPartition;
  /** @var string */
  public $issue;
  /** @var string */
  public $lake;
  /** @var GoogleCloudDataplexV1ActionMissingData */
  public $missingData;
  /** @var GoogleCloudDataplexV1ActionMissingResource */
  public $missingResource;
  /** @var string */
  public $name;
  /** @var GoogleCloudDataplexV1ActionUnauthorizedResource */
  public $unauthorizedResource;
  /** @var string */
  public $zone;
  protected $collection_key = 'dataLocations';
  protected $failedSecurityPolicyApplyType = GoogleCloudDataplexV1ActionFailedSecurityPolicyApply::class;
  protected $failedSecurityPolicyApplyDataType = '';
  protected $incompatibleDataSchemaType = GoogleCloudDataplexV1ActionIncompatibleDataSchema::class;
  protected $incompatibleDataSchemaDataType = '';
  protected $invalidDataFormatType = GoogleCloudDataplexV1ActionInvalidDataFormat::class;
  protected $invalidDataFormatDataType = '';
  protected $invalidDataOrganizationType = GoogleCloudDataplexV1ActionInvalidDataOrganization::class;
  protected $invalidDataOrganizationDataType = '';
  protected $invalidDataPartitionType = GoogleCloudDataplexV1ActionInvalidDataPartition::class;
  protected $invalidDataPartitionDataType = '';
  protected $missingDataType = GoogleCloudDataplexV1ActionMissingData::class;
  protected $missingDataDataType = '';
  protected $missingResourceType = GoogleCloudDataplexV1ActionMissingResource::class;
  protected $missingResourceDataType = '';
  protected $unauthorizedResourceType = GoogleCloudDataplexV1ActionUnauthorizedResource::class;
  protected $unauthorizedResourceDataType = '';
  /** @param string */
  public function setAsset($asset)
  {
    $this->asset = $asset;
  }
  /** @return string */
  public function getAsset()
  {
    return $this->asset;
  }
  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param string[] */
  public function setDataLocations($dataLocations)
  {
    $this->dataLocations = $dataLocations;
  }
  /** @return string[] */
  public function getDataLocations()
  {
    return $this->dataLocations;
  }
  /** @param string */
  public function setDetectTime($detectTime)
  {
    $this->detectTime = $detectTime;
  }
  /** @return string */
  public function getDetectTime()
  {
    return $this->detectTime;
  }
  /** @param GoogleCloudDataplexV1ActionFailedSecurityPolicyApply */
  public function setFailedSecurityPolicyApply(GoogleCloudDataplexV1ActionFailedSecurityPolicyApply $failedSecurityPolicyApply)
  {
    $this->failedSecurityPolicyApply = $failedSecurityPolicyApply;
  }
  /** @return GoogleCloudDataplexV1ActionFailedSecurityPolicyApply */
  public function getFailedSecurityPolicyApply()
  {
    return $this->failedSecurityPolicyApply;
  }
  /** @param GoogleCloudDataplexV1ActionIncompatibleDataSchema */
  public function setIncompatibleDataSchema(GoogleCloudDataplexV1ActionIncompatibleDataSchema $incompatibleDataSchema)
  {
    $this->incompatibleDataSchema = $incompatibleDataSchema;
  }
  /** @return GoogleCloudDataplexV1ActionIncompatibleDataSchema */
  public function getIncompatibleDataSchema()
  {
    return $this->incompatibleDataSchema;
  }
  /** @param GoogleCloudDataplexV1ActionInvalidDataFormat */
  public function setInvalidDataFormat(GoogleCloudDataplexV1ActionInvalidDataFormat $invalidDataFormat)
  {
    $this->invalidDataFormat = $invalidDataFormat;
  }
  /** @return GoogleCloudDataplexV1ActionInvalidDataFormat */
  public function getInvalidDataFormat()
  {
    return $this->invalidDataFormat;
  }
  /** @param GoogleCloudDataplexV1ActionInvalidDataOrganization */
  public function setInvalidDataOrganization(GoogleCloudDataplexV1ActionInvalidDataOrganization $invalidDataOrganization)
  {
    $this->invalidDataOrganization = $invalidDataOrganization;
  }
  /** @return GoogleCloudDataplexV1ActionInvalidDataOrganization */
  public function getInvalidDataOrganization()
  {
    return $this->invalidDataOrganization;
  }
  /** @param GoogleCloudDataplexV1ActionInvalidDataPartition */
  public function setInvalidDataPartition(GoogleCloudDataplexV1ActionInvalidDataPartition $invalidDataPartition)
  {
    $this->invalidDataPartition = $invalidDataPartition;
  }
  /** @return GoogleCloudDataplexV1ActionInvalidDataPartition */
  public function getInvalidDataPartition()
  {
    return $this->invalidDataPartition;
  }
  /** @param string */
  public function setIssue($issue)
  {
    $this->issue = $issue;
  }
  /** @return string */
  public function getIssue()
  {
    return $this->issue;
  }
  /** @param string */
  public function setLake($lake)
  {
    $this->lake = $lake;
  }
  /** @return string */
  public function getLake()
  {
    return $this->lake;
  }
  /** @param GoogleCloudDataplexV1ActionMissingData */
  public function setMissingData(GoogleCloudDataplexV1ActionMissingData $missingData)
  {
    $this->missingData = $missingData;
  }
  /** @return GoogleCloudDataplexV1ActionMissingData */
  public function getMissingData()
  {
    return $this->missingData;
  }
  /** @param GoogleCloudDataplexV1ActionMissingResource */
  public function setMissingResource(GoogleCloudDataplexV1ActionMissingResource $missingResource)
  {
    $this->missingResource = $missingResource;
  }
  /** @return GoogleCloudDataplexV1ActionMissingResource */
  public function getMissingResource()
  {
    return $this->missingResource;
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
  /** @param GoogleCloudDataplexV1ActionUnauthorizedResource */
  public function setUnauthorizedResource(GoogleCloudDataplexV1ActionUnauthorizedResource $unauthorizedResource)
  {
    $this->unauthorizedResource = $unauthorizedResource;
  }
  /** @return GoogleCloudDataplexV1ActionUnauthorizedResource */
  public function getUnauthorizedResource()
  {
    return $this->unauthorizedResource;
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

class GoogleCloudDataplexV1ActionFailedSecurityPolicyApply extends \Google\Model
{
  /** @var string */
  public $asset;

  /** @param string */
  public function setAsset($asset)
  {
    $this->asset = $asset;
  }
  /** @return string */
  public function getAsset()
  {
    return $this->asset;
  }
}

class GoogleCloudDataplexV1ActionIncompatibleDataSchema extends \Google\Collection
{
  /** @var string */
  public $existingSchema;
  /** @var string */
  public $newSchema;
  /** @var string[] */
  public $sampledDataLocations;
  /** @var string */
  public $schemaChange;
  /** @var string */
  public $table;
  protected $collection_key = 'sampledDataLocations';
  /** @param string */
  public function setExistingSchema($existingSchema)
  {
    $this->existingSchema = $existingSchema;
  }
  /** @return string */
  public function getExistingSchema()
  {
    return $this->existingSchema;
  }
  /** @param string */
  public function setNewSchema($newSchema)
  {
    $this->newSchema = $newSchema;
  }
  /** @return string */
  public function getNewSchema()
  {
    return $this->newSchema;
  }
  /** @param string[] */
  public function setSampledDataLocations($sampledDataLocations)
  {
    $this->sampledDataLocations = $sampledDataLocations;
  }
  /** @return string[] */
  public function getSampledDataLocations()
  {
    return $this->sampledDataLocations;
  }
  /** @param string */
  public function setSchemaChange($schemaChange)
  {
    $this->schemaChange = $schemaChange;
  }
  /** @return string */
  public function getSchemaChange()
  {
    return $this->schemaChange;
  }
  /** @param string */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
}

class GoogleCloudDataplexV1ActionInvalidDataFormat extends \Google\Collection
{
  /** @var string */
  public $expectedFormat;
  /** @var string */
  public $newFormat;
  /** @var string[] */
  public $sampledDataLocations;
  protected $collection_key = 'sampledDataLocations';
  /** @param string */
  public function setExpectedFormat($expectedFormat)
  {
    $this->expectedFormat = $expectedFormat;
  }
  /** @return string */
  public function getExpectedFormat()
  {
    return $this->expectedFormat;
  }
  /** @param string */
  public function setNewFormat($newFormat)
  {
    $this->newFormat = $newFormat;
  }
  /** @return string */
  public function getNewFormat()
  {
    return $this->newFormat;
  }
  /** @param string[] */
  public function setSampledDataLocations($sampledDataLocations)
  {
    $this->sampledDataLocations = $sampledDataLocations;
  }
  /** @return string[] */
  public function getSampledDataLocations()
  {
    return $this->sampledDataLocations;
  }
}

class GoogleCloudDataplexV1ActionInvalidDataOrganization extends \Google\Model
{
}

class GoogleCloudDataplexV1ActionInvalidDataPartition extends \Google\Model
{
  /** @var string */
  public $expectedStructure;

  /** @param string */
  public function setExpectedStructure($expectedStructure)
  {
    $this->expectedStructure = $expectedStructure;
  }
  /** @return string */
  public function getExpectedStructure()
  {
    return $this->expectedStructure;
  }
}

class GoogleCloudDataplexV1ActionMissingData extends \Google\Model
{
}

class GoogleCloudDataplexV1ActionMissingResource extends \Google\Model
{
}

class GoogleCloudDataplexV1ActionUnauthorizedResource extends \Google\Model
{
}

class GoogleCloudDataplexV1Asset extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var GoogleCloudDataplexV1AssetDiscoverySpec */
  public $discoverySpec;
  /** @var GoogleCloudDataplexV1AssetDiscoveryStatus */
  public $discoveryStatus;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var GoogleCloudDataplexV1AssetResourceSpec */
  public $resourceSpec;
  /** @var GoogleCloudDataplexV1AssetResourceStatus */
  public $resourceStatus;
  /** @var GoogleCloudDataplexV1AssetSecurityStatus */
  public $securityStatus;
  /** @var string */
  public $state;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $discoverySpecType = GoogleCloudDataplexV1AssetDiscoverySpec::class;
  protected $discoverySpecDataType = '';
  protected $discoveryStatusType = GoogleCloudDataplexV1AssetDiscoveryStatus::class;
  protected $discoveryStatusDataType = '';
  protected $resourceSpecType = GoogleCloudDataplexV1AssetResourceSpec::class;
  protected $resourceSpecDataType = '';
  protected $resourceStatusType = GoogleCloudDataplexV1AssetResourceStatus::class;
  protected $resourceStatusDataType = '';
  protected $securityStatusType = GoogleCloudDataplexV1AssetSecurityStatus::class;
  protected $securityStatusDataType = '';
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
  /** @param GoogleCloudDataplexV1AssetDiscoverySpec */
  public function setDiscoverySpec(GoogleCloudDataplexV1AssetDiscoverySpec $discoverySpec)
  {
    $this->discoverySpec = $discoverySpec;
  }
  /** @return GoogleCloudDataplexV1AssetDiscoverySpec */
  public function getDiscoverySpec()
  {
    return $this->discoverySpec;
  }
  /** @param GoogleCloudDataplexV1AssetDiscoveryStatus */
  public function setDiscoveryStatus(GoogleCloudDataplexV1AssetDiscoveryStatus $discoveryStatus)
  {
    $this->discoveryStatus = $discoveryStatus;
  }
  /** @return GoogleCloudDataplexV1AssetDiscoveryStatus */
  public function getDiscoveryStatus()
  {
    return $this->discoveryStatus;
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
  /** @param GoogleCloudDataplexV1AssetResourceSpec */
  public function setResourceSpec(GoogleCloudDataplexV1AssetResourceSpec $resourceSpec)
  {
    $this->resourceSpec = $resourceSpec;
  }
  /** @return GoogleCloudDataplexV1AssetResourceSpec */
  public function getResourceSpec()
  {
    return $this->resourceSpec;
  }
  /** @param GoogleCloudDataplexV1AssetResourceStatus */
  public function setResourceStatus(GoogleCloudDataplexV1AssetResourceStatus $resourceStatus)
  {
    $this->resourceStatus = $resourceStatus;
  }
  /** @return GoogleCloudDataplexV1AssetResourceStatus */
  public function getResourceStatus()
  {
    return $this->resourceStatus;
  }
  /** @param GoogleCloudDataplexV1AssetSecurityStatus */
  public function setSecurityStatus(GoogleCloudDataplexV1AssetSecurityStatus $securityStatus)
  {
    $this->securityStatus = $securityStatus;
  }
  /** @return GoogleCloudDataplexV1AssetSecurityStatus */
  public function getSecurityStatus()
  {
    return $this->securityStatus;
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

class GoogleCloudDataplexV1AssetDiscoverySpec extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1AssetDiscoverySpecCsvOptions */
  public $csvOptions;
  /** @var bool */
  public $enabled;
  /** @var string[] */
  public $excludePatterns;
  /** @var string[] */
  public $includePatterns;
  /** @var GoogleCloudDataplexV1AssetDiscoverySpecJsonOptions */
  public $jsonOptions;
  /** @var string */
  public $schedule;
  protected $collection_key = 'includePatterns';
  protected $csvOptionsType = GoogleCloudDataplexV1AssetDiscoverySpecCsvOptions::class;
  protected $csvOptionsDataType = '';
  protected $jsonOptionsType = GoogleCloudDataplexV1AssetDiscoverySpecJsonOptions::class;
  protected $jsonOptionsDataType = '';
  /** @param GoogleCloudDataplexV1AssetDiscoverySpecCsvOptions */
  public function setCsvOptions(GoogleCloudDataplexV1AssetDiscoverySpecCsvOptions $csvOptions)
  {
    $this->csvOptions = $csvOptions;
  }
  /** @return GoogleCloudDataplexV1AssetDiscoverySpecCsvOptions */
  public function getCsvOptions()
  {
    return $this->csvOptions;
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
  /** @param string[] */
  public function setExcludePatterns($excludePatterns)
  {
    $this->excludePatterns = $excludePatterns;
  }
  /** @return string[] */
  public function getExcludePatterns()
  {
    return $this->excludePatterns;
  }
  /** @param string[] */
  public function setIncludePatterns($includePatterns)
  {
    $this->includePatterns = $includePatterns;
  }
  /** @return string[] */
  public function getIncludePatterns()
  {
    return $this->includePatterns;
  }
  /** @param GoogleCloudDataplexV1AssetDiscoverySpecJsonOptions */
  public function setJsonOptions(GoogleCloudDataplexV1AssetDiscoverySpecJsonOptions $jsonOptions)
  {
    $this->jsonOptions = $jsonOptions;
  }
  /** @return GoogleCloudDataplexV1AssetDiscoverySpecJsonOptions */
  public function getJsonOptions()
  {
    return $this->jsonOptions;
  }
  /** @param string */
  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return string */
  public function getSchedule()
  {
    return $this->schedule;
  }
}

class GoogleCloudDataplexV1AssetDiscoverySpecCsvOptions extends \Google\Model
{
  /** @var string */
  public $delimiter;
  /** @var bool */
  public $disableTypeInference;
  /** @var string */
  public $encoding;
  /** @var int */
  public $headerRows;

  /** @param string */
  public function setDelimiter($delimiter)
  {
    $this->delimiter = $delimiter;
  }
  /** @return string */
  public function getDelimiter()
  {
    return $this->delimiter;
  }
  /** @param bool */
  public function setDisableTypeInference($disableTypeInference)
  {
    $this->disableTypeInference = $disableTypeInference;
  }
  /** @return bool */
  public function getDisableTypeInference()
  {
    return $this->disableTypeInference;
  }
  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
  }
  /** @param int */
  public function setHeaderRows($headerRows)
  {
    $this->headerRows = $headerRows;
  }
  /** @return int */
  public function getHeaderRows()
  {
    return $this->headerRows;
  }
}

class GoogleCloudDataplexV1AssetDiscoverySpecJsonOptions extends \Google\Model
{
  /** @var bool */
  public $disableTypeInference;
  /** @var string */
  public $encoding;

  /** @param bool */
  public function setDisableTypeInference($disableTypeInference)
  {
    $this->disableTypeInference = $disableTypeInference;
  }
  /** @return bool */
  public function getDisableTypeInference()
  {
    return $this->disableTypeInference;
  }
  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
  }
}

class GoogleCloudDataplexV1AssetDiscoveryStatus extends \Google\Model
{
  /** @var string */
  public $lastRunDuration;
  /** @var string */
  public $lastRunTime;
  /** @var string */
  public $message;
  /** @var string */
  public $state;
  /** @var GoogleCloudDataplexV1AssetDiscoveryStatusStats */
  public $stats;
  /** @var string */
  public $updateTime;
  protected $statsType = GoogleCloudDataplexV1AssetDiscoveryStatusStats::class;
  protected $statsDataType = '';
  /** @param string */
  public function setLastRunDuration($lastRunDuration)
  {
    $this->lastRunDuration = $lastRunDuration;
  }
  /** @return string */
  public function getLastRunDuration()
  {
    return $this->lastRunDuration;
  }
  /** @param string */
  public function setLastRunTime($lastRunTime)
  {
    $this->lastRunTime = $lastRunTime;
  }
  /** @return string */
  public function getLastRunTime()
  {
    return $this->lastRunTime;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param GoogleCloudDataplexV1AssetDiscoveryStatusStats */
  public function setStats(GoogleCloudDataplexV1AssetDiscoveryStatusStats $stats)
  {
    $this->stats = $stats;
  }
  /** @return GoogleCloudDataplexV1AssetDiscoveryStatusStats */
  public function getStats()
  {
    return $this->stats;
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

class GoogleCloudDataplexV1AssetDiscoveryStatusStats extends \Google\Model
{
  /** @var string */
  public $dataItems;
  /** @var string */
  public $dataSize;
  /** @var string */
  public $filesets;
  /** @var string */
  public $tables;

  /** @param string */
  public function setDataItems($dataItems)
  {
    $this->dataItems = $dataItems;
  }
  /** @return string */
  public function getDataItems()
  {
    return $this->dataItems;
  }
  /** @param string */
  public function setDataSize($dataSize)
  {
    $this->dataSize = $dataSize;
  }
  /** @return string */
  public function getDataSize()
  {
    return $this->dataSize;
  }
  /** @param string */
  public function setFilesets($filesets)
  {
    $this->filesets = $filesets;
  }
  /** @return string */
  public function getFilesets()
  {
    return $this->filesets;
  }
  /** @param string */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /** @return string */
  public function getTables()
  {
    return $this->tables;
  }
}

class GoogleCloudDataplexV1AssetResourceSpec extends \Google\Model
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

class GoogleCloudDataplexV1AssetResourceStatus extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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

class GoogleCloudDataplexV1AssetSecurityStatus extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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

class GoogleCloudDataplexV1AssetStatus extends \Google\Model
{
  /** @var int */
  public $activeAssets;
  /** @var int */
  public $securityPolicyApplyingAssets;
  /** @var string */
  public $updateTime;

  /** @param int */
  public function setActiveAssets($activeAssets)
  {
    $this->activeAssets = $activeAssets;
  }
  /** @return int */
  public function getActiveAssets()
  {
    return $this->activeAssets;
  }
  /** @param int */
  public function setSecurityPolicyApplyingAssets($securityPolicyApplyingAssets)
  {
    $this->securityPolicyApplyingAssets = $securityPolicyApplyingAssets;
  }
  /** @return int */
  public function getSecurityPolicyApplyingAssets()
  {
    return $this->securityPolicyApplyingAssets;
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

class GoogleCloudDataplexV1CancelJobRequest extends \Google\Model
{
}

class GoogleCloudDataplexV1Content extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataText;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var GoogleCloudDataplexV1ContentNotebook */
  public $notebook;
  /** @var string */
  public $path;
  /** @var GoogleCloudDataplexV1ContentSqlScript */
  public $sqlScript;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $notebookType = GoogleCloudDataplexV1ContentNotebook::class;
  protected $notebookDataType = '';
  protected $sqlScriptType = GoogleCloudDataplexV1ContentSqlScript::class;
  protected $sqlScriptDataType = '';
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
  public function setDataText($dataText)
  {
    $this->dataText = $dataText;
  }
  /** @return string */
  public function getDataText()
  {
    return $this->dataText;
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
  /** @param GoogleCloudDataplexV1ContentNotebook */
  public function setNotebook(GoogleCloudDataplexV1ContentNotebook $notebook)
  {
    $this->notebook = $notebook;
  }
  /** @return GoogleCloudDataplexV1ContentNotebook */
  public function getNotebook()
  {
    return $this->notebook;
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
  /** @param GoogleCloudDataplexV1ContentSqlScript */
  public function setSqlScript(GoogleCloudDataplexV1ContentSqlScript $sqlScript)
  {
    $this->sqlScript = $sqlScript;
  }
  /** @return GoogleCloudDataplexV1ContentSqlScript */
  public function getSqlScript()
  {
    return $this->sqlScript;
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

class GoogleCloudDataplexV1ContentNotebook extends \Google\Model
{
  /** @var string */
  public $kernelType;

  /** @param string */
  public function setKernelType($kernelType)
  {
    $this->kernelType = $kernelType;
  }
  /** @return string */
  public function getKernelType()
  {
    return $this->kernelType;
  }
}

class GoogleCloudDataplexV1ContentSqlScript extends \Google\Model
{
  /** @var string */
  public $engine;

  /** @param string */
  public function setEngine($engine)
  {
    $this->engine = $engine;
  }
  /** @return string */
  public function getEngine()
  {
    return $this->engine;
  }
}

class GoogleCloudDataplexV1DataProfileResult extends \Google\Model
{
  /** @var GoogleCloudDataplexV1DataProfileResultProfile */
  public $profile;
  /** @var string */
  public $rowCount;
  /** @var GoogleCloudDataplexV1ScannedData */
  public $scannedData;
  protected $profileType = GoogleCloudDataplexV1DataProfileResultProfile::class;
  protected $profileDataType = '';
  protected $scannedDataType = GoogleCloudDataplexV1ScannedData::class;
  protected $scannedDataDataType = '';
  /** @param GoogleCloudDataplexV1DataProfileResultProfile */
  public function setProfile(GoogleCloudDataplexV1DataProfileResultProfile $profile)
  {
    $this->profile = $profile;
  }
  /** @return GoogleCloudDataplexV1DataProfileResultProfile */
  public function getProfile()
  {
    return $this->profile;
  }
  /** @param string */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return string */
  public function getRowCount()
  {
    return $this->rowCount;
  }
  /** @param GoogleCloudDataplexV1ScannedData */
  public function setScannedData(GoogleCloudDataplexV1ScannedData $scannedData)
  {
    $this->scannedData = $scannedData;
  }
  /** @return GoogleCloudDataplexV1ScannedData */
  public function getScannedData()
  {
    return $this->scannedData;
  }
}

class GoogleCloudDataplexV1DataProfileResultProfile extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1DataProfileResultProfileField[] */
  public $fields;
  protected $collection_key = 'fields';
  protected $fieldsType = GoogleCloudDataplexV1DataProfileResultProfileField::class;
  protected $fieldsDataType = 'array';
  /** @param GoogleCloudDataplexV1DataProfileResultProfileField[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return GoogleCloudDataplexV1DataProfileResultProfileField[] */
  public function getFields()
  {
    return $this->fields;
  }
}

class GoogleCloudDataplexV1DataProfileResultProfileField extends \Google\Model
{
  /** @var string */
  public $mode;
  /** @var string */
  public $name;
  /** @var GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfo */
  public $profile;
  /** @var string */
  public $type;
  protected $profileType = GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfo::class;
  protected $profileDataType = '';
  /** @param string */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
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
  /** @param GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfo */
  public function setProfile(GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfo $profile)
  {
    $this->profile = $profile;
  }
  /** @return GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfo */
  public function getProfile()
  {
    return $this->profile;
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

class GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfo extends \Google\Collection
{
  public $distinctRatio;
  /** @var GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoDoubleFieldInfo */
  public $doubleProfile;
  /** @var GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoIntegerFieldInfo */
  public $integerProfile;
  public $nullRatio;
  /** @var GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoStringFieldInfo */
  public $stringProfile;
  /** @var GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoTopNValue[] */
  public $topNValues;
  protected $collection_key = 'topNValues';
  protected $doubleProfileType = GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoDoubleFieldInfo::class;
  protected $doubleProfileDataType = '';
  protected $integerProfileType = GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoIntegerFieldInfo::class;
  protected $integerProfileDataType = '';
  protected $stringProfileType = GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoStringFieldInfo::class;
  protected $stringProfileDataType = '';
  protected $topNValuesType = GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoTopNValue::class;
  protected $topNValuesDataType = 'array';
  public function setDistinctRatio($distinctRatio)
  {
    $this->distinctRatio = $distinctRatio;
  }
  public function getDistinctRatio()
  {
    return $this->distinctRatio;
  }
  /** @param GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoDoubleFieldInfo */
  public function setDoubleProfile(GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoDoubleFieldInfo $doubleProfile)
  {
    $this->doubleProfile = $doubleProfile;
  }
  /** @return GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoDoubleFieldInfo */
  public function getDoubleProfile()
  {
    return $this->doubleProfile;
  }
  /** @param GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoIntegerFieldInfo */
  public function setIntegerProfile(GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoIntegerFieldInfo $integerProfile)
  {
    $this->integerProfile = $integerProfile;
  }
  /** @return GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoIntegerFieldInfo */
  public function getIntegerProfile()
  {
    return $this->integerProfile;
  }
  public function setNullRatio($nullRatio)
  {
    $this->nullRatio = $nullRatio;
  }
  public function getNullRatio()
  {
    return $this->nullRatio;
  }
  /** @param GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoStringFieldInfo */
  public function setStringProfile(GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoStringFieldInfo $stringProfile)
  {
    $this->stringProfile = $stringProfile;
  }
  /** @return GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoStringFieldInfo */
  public function getStringProfile()
  {
    return $this->stringProfile;
  }
  /** @param GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoTopNValue[] */
  public function setTopNValues($topNValues)
  {
    $this->topNValues = $topNValues;
  }
  /** @return GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoTopNValue[] */
  public function getTopNValues()
  {
    return $this->topNValues;
  }
}

class GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoDoubleFieldInfo extends \Google\Collection
{
  public $average;
  public $max;
  public $min;
  public $quartiles;
  public $standardDeviation;
  protected $collection_key = 'quartiles';
  public function setAverage($average)
  {
    $this->average = $average;
  }
  public function getAverage()
  {
    return $this->average;
  }
  public function setMax($max)
  {
    $this->max = $max;
  }
  public function getMax()
  {
    return $this->max;
  }
  public function setMin($min)
  {
    $this->min = $min;
  }
  public function getMin()
  {
    return $this->min;
  }
  public function setQuartiles($quartiles)
  {
    $this->quartiles = $quartiles;
  }
  public function getQuartiles()
  {
    return $this->quartiles;
  }
  public function setStandardDeviation($standardDeviation)
  {
    $this->standardDeviation = $standardDeviation;
  }
  public function getStandardDeviation()
  {
    return $this->standardDeviation;
  }
}

class GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoIntegerFieldInfo extends \Google\Collection
{
  public $average;
  /** @var string */
  public $max;
  /** @var string */
  public $min;
  /** @var string[] */
  public $quartiles;
  public $standardDeviation;
  protected $collection_key = 'quartiles';
  public function setAverage($average)
  {
    $this->average = $average;
  }
  public function getAverage()
  {
    return $this->average;
  }
  /** @param string */
  public function setMax($max)
  {
    $this->max = $max;
  }
  /** @return string */
  public function getMax()
  {
    return $this->max;
  }
  /** @param string */
  public function setMin($min)
  {
    $this->min = $min;
  }
  /** @return string */
  public function getMin()
  {
    return $this->min;
  }
  /** @param string[] */
  public function setQuartiles($quartiles)
  {
    $this->quartiles = $quartiles;
  }
  /** @return string[] */
  public function getQuartiles()
  {
    return $this->quartiles;
  }
  public function setStandardDeviation($standardDeviation)
  {
    $this->standardDeviation = $standardDeviation;
  }
  public function getStandardDeviation()
  {
    return $this->standardDeviation;
  }
}

class GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoStringFieldInfo extends \Google\Model
{
  public $averageLength;
  /** @var string */
  public $maxLength;
  /** @var string */
  public $minLength;

  public function setAverageLength($averageLength)
  {
    $this->averageLength = $averageLength;
  }
  public function getAverageLength()
  {
    return $this->averageLength;
  }
  /** @param string */
  public function setMaxLength($maxLength)
  {
    $this->maxLength = $maxLength;
  }
  /** @return string */
  public function getMaxLength()
  {
    return $this->maxLength;
  }
  /** @param string */
  public function setMinLength($minLength)
  {
    $this->minLength = $minLength;
  }
  /** @return string */
  public function getMinLength()
  {
    return $this->minLength;
  }
}

class GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoTopNValue extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var string */
  public $value;

  /** @param string */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return string */
  public function getCount()
  {
    return $this->count;
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

class GoogleCloudDataplexV1DataProfileSpec extends \Google\Model
{
}

class GoogleCloudDataplexV1DataQualityDimensionResult extends \Google\Model
{
  /** @var bool */
  public $passed;

  /** @param bool */
  public function setPassed($passed)
  {
    $this->passed = $passed;
  }
  /** @return bool */
  public function getPassed()
  {
    return $this->passed;
  }
}

class GoogleCloudDataplexV1DataQualityResult extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1DataQualityDimensionResult[] */
  public $dimensions;
  /** @var bool */
  public $passed;
  /** @var string */
  public $rowCount;
  /** @var GoogleCloudDataplexV1DataQualityRuleResult[] */
  public $rules;
  /** @var GoogleCloudDataplexV1ScannedData */
  public $scannedData;
  protected $collection_key = 'rules';
  protected $dimensionsType = GoogleCloudDataplexV1DataQualityDimensionResult::class;
  protected $dimensionsDataType = 'array';
  protected $rulesType = GoogleCloudDataplexV1DataQualityRuleResult::class;
  protected $rulesDataType = 'array';
  protected $scannedDataType = GoogleCloudDataplexV1ScannedData::class;
  protected $scannedDataDataType = '';
  /** @param GoogleCloudDataplexV1DataQualityDimensionResult[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return GoogleCloudDataplexV1DataQualityDimensionResult[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param bool */
  public function setPassed($passed)
  {
    $this->passed = $passed;
  }
  /** @return bool */
  public function getPassed()
  {
    return $this->passed;
  }
  /** @param string */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return string */
  public function getRowCount()
  {
    return $this->rowCount;
  }
  /** @param GoogleCloudDataplexV1DataQualityRuleResult[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return GoogleCloudDataplexV1DataQualityRuleResult[] */
  public function getRules()
  {
    return $this->rules;
  }
  /** @param GoogleCloudDataplexV1ScannedData */
  public function setScannedData(GoogleCloudDataplexV1ScannedData $scannedData)
  {
    $this->scannedData = $scannedData;
  }
  /** @return GoogleCloudDataplexV1ScannedData */
  public function getScannedData()
  {
    return $this->scannedData;
  }
}

class GoogleCloudDataplexV1DataQualityRule extends \Google\Model
{
  /** @var string */
  public $column;
  /** @var string */
  public $dimension;
  /** @var bool */
  public $ignoreNull;
  /** @var GoogleCloudDataplexV1DataQualityRuleNonNullExpectation */
  public $nonNullExpectation;
  /** @var GoogleCloudDataplexV1DataQualityRuleRangeExpectation */
  public $rangeExpectation;
  /** @var GoogleCloudDataplexV1DataQualityRuleRegexExpectation */
  public $regexExpectation;
  /** @var GoogleCloudDataplexV1DataQualityRuleRowConditionExpectation */
  public $rowConditionExpectation;
  /** @var GoogleCloudDataplexV1DataQualityRuleSetExpectation */
  public $setExpectation;
  /** @var GoogleCloudDataplexV1DataQualityRuleStatisticRangeExpectation */
  public $statisticRangeExpectation;
  /** @var GoogleCloudDataplexV1DataQualityRuleTableConditionExpectation */
  public $tableConditionExpectation;
  public $threshold;
  /** @var GoogleCloudDataplexV1DataQualityRuleUniquenessExpectation */
  public $uniquenessExpectation;
  protected $nonNullExpectationType = GoogleCloudDataplexV1DataQualityRuleNonNullExpectation::class;
  protected $nonNullExpectationDataType = '';
  protected $rangeExpectationType = GoogleCloudDataplexV1DataQualityRuleRangeExpectation::class;
  protected $rangeExpectationDataType = '';
  protected $regexExpectationType = GoogleCloudDataplexV1DataQualityRuleRegexExpectation::class;
  protected $regexExpectationDataType = '';
  protected $rowConditionExpectationType = GoogleCloudDataplexV1DataQualityRuleRowConditionExpectation::class;
  protected $rowConditionExpectationDataType = '';
  protected $setExpectationType = GoogleCloudDataplexV1DataQualityRuleSetExpectation::class;
  protected $setExpectationDataType = '';
  protected $statisticRangeExpectationType = GoogleCloudDataplexV1DataQualityRuleStatisticRangeExpectation::class;
  protected $statisticRangeExpectationDataType = '';
  protected $tableConditionExpectationType = GoogleCloudDataplexV1DataQualityRuleTableConditionExpectation::class;
  protected $tableConditionExpectationDataType = '';
  protected $uniquenessExpectationType = GoogleCloudDataplexV1DataQualityRuleUniquenessExpectation::class;
  protected $uniquenessExpectationDataType = '';
  /** @param string */
  public function setColumn($column)
  {
    $this->column = $column;
  }
  /** @return string */
  public function getColumn()
  {
    return $this->column;
  }
  /** @param string */
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return string */
  public function getDimension()
  {
    return $this->dimension;
  }
  /** @param bool */
  public function setIgnoreNull($ignoreNull)
  {
    $this->ignoreNull = $ignoreNull;
  }
  /** @return bool */
  public function getIgnoreNull()
  {
    return $this->ignoreNull;
  }
  /** @param GoogleCloudDataplexV1DataQualityRuleNonNullExpectation */
  public function setNonNullExpectation(GoogleCloudDataplexV1DataQualityRuleNonNullExpectation $nonNullExpectation)
  {
    $this->nonNullExpectation = $nonNullExpectation;
  }
  /** @return GoogleCloudDataplexV1DataQualityRuleNonNullExpectation */
  public function getNonNullExpectation()
  {
    return $this->nonNullExpectation;
  }
  /** @param GoogleCloudDataplexV1DataQualityRuleRangeExpectation */
  public function setRangeExpectation(GoogleCloudDataplexV1DataQualityRuleRangeExpectation $rangeExpectation)
  {
    $this->rangeExpectation = $rangeExpectation;
  }
  /** @return GoogleCloudDataplexV1DataQualityRuleRangeExpectation */
  public function getRangeExpectation()
  {
    return $this->rangeExpectation;
  }
  /** @param GoogleCloudDataplexV1DataQualityRuleRegexExpectation */
  public function setRegexExpectation(GoogleCloudDataplexV1DataQualityRuleRegexExpectation $regexExpectation)
  {
    $this->regexExpectation = $regexExpectation;
  }
  /** @return GoogleCloudDataplexV1DataQualityRuleRegexExpectation */
  public function getRegexExpectation()
  {
    return $this->regexExpectation;
  }
  /** @param GoogleCloudDataplexV1DataQualityRuleRowConditionExpectation */
  public function setRowConditionExpectation(GoogleCloudDataplexV1DataQualityRuleRowConditionExpectation $rowConditionExpectation)
  {
    $this->rowConditionExpectation = $rowConditionExpectation;
  }
  /** @return GoogleCloudDataplexV1DataQualityRuleRowConditionExpectation */
  public function getRowConditionExpectation()
  {
    return $this->rowConditionExpectation;
  }
  /** @param GoogleCloudDataplexV1DataQualityRuleSetExpectation */
  public function setSetExpectation(GoogleCloudDataplexV1DataQualityRuleSetExpectation $setExpectation)
  {
    $this->setExpectation = $setExpectation;
  }
  /** @return GoogleCloudDataplexV1DataQualityRuleSetExpectation */
  public function getSetExpectation()
  {
    return $this->setExpectation;
  }
  /** @param GoogleCloudDataplexV1DataQualityRuleStatisticRangeExpectation */
  public function setStatisticRangeExpectation(GoogleCloudDataplexV1DataQualityRuleStatisticRangeExpectation $statisticRangeExpectation)
  {
    $this->statisticRangeExpectation = $statisticRangeExpectation;
  }
  /** @return GoogleCloudDataplexV1DataQualityRuleStatisticRangeExpectation */
  public function getStatisticRangeExpectation()
  {
    return $this->statisticRangeExpectation;
  }
  /** @param GoogleCloudDataplexV1DataQualityRuleTableConditionExpectation */
  public function setTableConditionExpectation(GoogleCloudDataplexV1DataQualityRuleTableConditionExpectation $tableConditionExpectation)
  {
    $this->tableConditionExpectation = $tableConditionExpectation;
  }
  /** @return GoogleCloudDataplexV1DataQualityRuleTableConditionExpectation */
  public function getTableConditionExpectation()
  {
    return $this->tableConditionExpectation;
  }
  public function setThreshold($threshold)
  {
    $this->threshold = $threshold;
  }
  public function getThreshold()
  {
    return $this->threshold;
  }
  /** @param GoogleCloudDataplexV1DataQualityRuleUniquenessExpectation */
  public function setUniquenessExpectation(GoogleCloudDataplexV1DataQualityRuleUniquenessExpectation $uniquenessExpectation)
  {
    $this->uniquenessExpectation = $uniquenessExpectation;
  }
  /** @return GoogleCloudDataplexV1DataQualityRuleUniquenessExpectation */
  public function getUniquenessExpectation()
  {
    return $this->uniquenessExpectation;
  }
}

class GoogleCloudDataplexV1DataQualityRuleNonNullExpectation extends \Google\Model
{
}

class GoogleCloudDataplexV1DataQualityRuleRangeExpectation extends \Google\Model
{
  /** @var string */
  public $maxValue;
  /** @var string */
  public $minValue;
  /** @var bool */
  public $strictMaxEnabled;
  /** @var bool */
  public $strictMinEnabled;

  /** @param string */
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /** @return string */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /** @param string */
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  /** @return string */
  public function getMinValue()
  {
    return $this->minValue;
  }
  /** @param bool */
  public function setStrictMaxEnabled($strictMaxEnabled)
  {
    $this->strictMaxEnabled = $strictMaxEnabled;
  }
  /** @return bool */
  public function getStrictMaxEnabled()
  {
    return $this->strictMaxEnabled;
  }
  /** @param bool */
  public function setStrictMinEnabled($strictMinEnabled)
  {
    $this->strictMinEnabled = $strictMinEnabled;
  }
  /** @return bool */
  public function getStrictMinEnabled()
  {
    return $this->strictMinEnabled;
  }
}

class GoogleCloudDataplexV1DataQualityRuleRegexExpectation extends \Google\Model
{
  /** @var string */
  public $regex;

  /** @param string */
  public function setRegex($regex)
  {
    $this->regex = $regex;
  }
  /** @return string */
  public function getRegex()
  {
    return $this->regex;
  }
}

class GoogleCloudDataplexV1DataQualityRuleResult extends \Google\Model
{
  /** @var string */
  public $evaluatedCount;
  /** @var string */
  public $failingRowsQuery;
  /** @var string */
  public $nullCount;
  public $passRatio;
  /** @var bool */
  public $passed;
  /** @var string */
  public $passedCount;
  /** @var GoogleCloudDataplexV1DataQualityRule */
  public $rule;
  protected $ruleType = GoogleCloudDataplexV1DataQualityRule::class;
  protected $ruleDataType = '';
  /** @param string */
  public function setEvaluatedCount($evaluatedCount)
  {
    $this->evaluatedCount = $evaluatedCount;
  }
  /** @return string */
  public function getEvaluatedCount()
  {
    return $this->evaluatedCount;
  }
  /** @param string */
  public function setFailingRowsQuery($failingRowsQuery)
  {
    $this->failingRowsQuery = $failingRowsQuery;
  }
  /** @return string */
  public function getFailingRowsQuery()
  {
    return $this->failingRowsQuery;
  }
  /** @param string */
  public function setNullCount($nullCount)
  {
    $this->nullCount = $nullCount;
  }
  /** @return string */
  public function getNullCount()
  {
    return $this->nullCount;
  }
  public function setPassRatio($passRatio)
  {
    $this->passRatio = $passRatio;
  }
  public function getPassRatio()
  {
    return $this->passRatio;
  }
  /** @param bool */
  public function setPassed($passed)
  {
    $this->passed = $passed;
  }
  /** @return bool */
  public function getPassed()
  {
    return $this->passed;
  }
  /** @param string */
  public function setPassedCount($passedCount)
  {
    $this->passedCount = $passedCount;
  }
  /** @return string */
  public function getPassedCount()
  {
    return $this->passedCount;
  }
  /** @param GoogleCloudDataplexV1DataQualityRule */
  public function setRule(GoogleCloudDataplexV1DataQualityRule $rule)
  {
    $this->rule = $rule;
  }
  /** @return GoogleCloudDataplexV1DataQualityRule */
  public function getRule()
  {
    return $this->rule;
  }
}

class GoogleCloudDataplexV1DataQualityRuleRowConditionExpectation extends \Google\Model
{
  /** @var string */
  public $sqlExpression;

  /** @param string */
  public function setSqlExpression($sqlExpression)
  {
    $this->sqlExpression = $sqlExpression;
  }
  /** @return string */
  public function getSqlExpression()
  {
    return $this->sqlExpression;
  }
}

class GoogleCloudDataplexV1DataQualityRuleSetExpectation extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
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

class GoogleCloudDataplexV1DataQualityRuleStatisticRangeExpectation extends \Google\Model
{
  /** @var string */
  public $maxValue;
  /** @var string */
  public $minValue;
  /** @var string */
  public $statistic;
  /** @var bool */
  public $strictMaxEnabled;
  /** @var bool */
  public $strictMinEnabled;

  /** @param string */
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /** @return string */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /** @param string */
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  /** @return string */
  public function getMinValue()
  {
    return $this->minValue;
  }
  /** @param string */
  public function setStatistic($statistic)
  {
    $this->statistic = $statistic;
  }
  /** @return string */
  public function getStatistic()
  {
    return $this->statistic;
  }
  /** @param bool */
  public function setStrictMaxEnabled($strictMaxEnabled)
  {
    $this->strictMaxEnabled = $strictMaxEnabled;
  }
  /** @return bool */
  public function getStrictMaxEnabled()
  {
    return $this->strictMaxEnabled;
  }
  /** @param bool */
  public function setStrictMinEnabled($strictMinEnabled)
  {
    $this->strictMinEnabled = $strictMinEnabled;
  }
  /** @return bool */
  public function getStrictMinEnabled()
  {
    return $this->strictMinEnabled;
  }
}

class GoogleCloudDataplexV1DataQualityRuleTableConditionExpectation extends \Google\Model
{
  /** @var string */
  public $sqlExpression;

  /** @param string */
  public function setSqlExpression($sqlExpression)
  {
    $this->sqlExpression = $sqlExpression;
  }
  /** @return string */
  public function getSqlExpression()
  {
    return $this->sqlExpression;
  }
}

class GoogleCloudDataplexV1DataQualityRuleUniquenessExpectation extends \Google\Model
{
}

class GoogleCloudDataplexV1DataQualitySpec extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1DataQualityRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = GoogleCloudDataplexV1DataQualityRule::class;
  protected $rulesDataType = 'array';
  /** @param GoogleCloudDataplexV1DataQualityRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return GoogleCloudDataplexV1DataQualityRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class GoogleCloudDataplexV1DataScan extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDataplexV1DataSource */
  public $data;
  /** @var GoogleCloudDataplexV1DataProfileResult */
  public $dataProfileResult;
  /** @var GoogleCloudDataplexV1DataProfileSpec */
  public $dataProfileSpec;
  /** @var GoogleCloudDataplexV1DataQualityResult */
  public $dataQualityResult;
  /** @var GoogleCloudDataplexV1DataQualitySpec */
  public $dataQualitySpec;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDataplexV1DataScanExecutionSpec */
  public $executionSpec;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $type;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $dataType = GoogleCloudDataplexV1DataSource::class;
  protected $dataDataType = '';
  protected $dataProfileResultType = GoogleCloudDataplexV1DataProfileResult::class;
  protected $dataProfileResultDataType = '';
  protected $dataProfileSpecType = GoogleCloudDataplexV1DataProfileSpec::class;
  protected $dataProfileSpecDataType = '';
  protected $dataQualityResultType = GoogleCloudDataplexV1DataQualityResult::class;
  protected $dataQualityResultDataType = '';
  protected $dataQualitySpecType = GoogleCloudDataplexV1DataQualitySpec::class;
  protected $dataQualitySpecDataType = '';
  protected $executionSpecType = GoogleCloudDataplexV1DataScanExecutionSpec::class;
  protected $executionSpecDataType = '';
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
  /** @param GoogleCloudDataplexV1DataSource */
  public function setData(GoogleCloudDataplexV1DataSource $data)
  {
    $this->data = $data;
  }
  /** @return GoogleCloudDataplexV1DataSource */
  public function getData()
  {
    return $this->data;
  }
  /** @param GoogleCloudDataplexV1DataProfileResult */
  public function setDataProfileResult(GoogleCloudDataplexV1DataProfileResult $dataProfileResult)
  {
    $this->dataProfileResult = $dataProfileResult;
  }
  /** @return GoogleCloudDataplexV1DataProfileResult */
  public function getDataProfileResult()
  {
    return $this->dataProfileResult;
  }
  /** @param GoogleCloudDataplexV1DataProfileSpec */
  public function setDataProfileSpec(GoogleCloudDataplexV1DataProfileSpec $dataProfileSpec)
  {
    $this->dataProfileSpec = $dataProfileSpec;
  }
  /** @return GoogleCloudDataplexV1DataProfileSpec */
  public function getDataProfileSpec()
  {
    return $this->dataProfileSpec;
  }
  /** @param GoogleCloudDataplexV1DataQualityResult */
  public function setDataQualityResult(GoogleCloudDataplexV1DataQualityResult $dataQualityResult)
  {
    $this->dataQualityResult = $dataQualityResult;
  }
  /** @return GoogleCloudDataplexV1DataQualityResult */
  public function getDataQualityResult()
  {
    return $this->dataQualityResult;
  }
  /** @param GoogleCloudDataplexV1DataQualitySpec */
  public function setDataQualitySpec(GoogleCloudDataplexV1DataQualitySpec $dataQualitySpec)
  {
    $this->dataQualitySpec = $dataQualitySpec;
  }
  /** @return GoogleCloudDataplexV1DataQualitySpec */
  public function getDataQualitySpec()
  {
    return $this->dataQualitySpec;
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
  /** @param GoogleCloudDataplexV1DataScanExecutionSpec */
  public function setExecutionSpec(GoogleCloudDataplexV1DataScanExecutionSpec $executionSpec)
  {
    $this->executionSpec = $executionSpec;
  }
  /** @return GoogleCloudDataplexV1DataScanExecutionSpec */
  public function getExecutionSpec()
  {
    return $this->executionSpec;
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

class GoogleCloudDataplexV1DataScanEvent extends \Google\Model
{
  /** @var GoogleCloudDataplexV1DataScanEventDataProfileResult */
  public $dataProfile;
  /** @var GoogleCloudDataplexV1DataScanEventDataQualityResult */
  public $dataQuality;
  /** @var string */
  public $dataSource;
  /** @var string */
  public $endTime;
  /** @var string */
  public $jobId;
  /** @var string */
  public $message;
  /** @var string */
  public $scope;
  /** @var string */
  public $specVersion;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $trigger;
  /** @var string */
  public $type;
  protected $dataProfileType = GoogleCloudDataplexV1DataScanEventDataProfileResult::class;
  protected $dataProfileDataType = '';
  protected $dataQualityType = GoogleCloudDataplexV1DataScanEventDataQualityResult::class;
  protected $dataQualityDataType = '';
  /** @param GoogleCloudDataplexV1DataScanEventDataProfileResult */
  public function setDataProfile(GoogleCloudDataplexV1DataScanEventDataProfileResult $dataProfile)
  {
    $this->dataProfile = $dataProfile;
  }
  /** @return GoogleCloudDataplexV1DataScanEventDataProfileResult */
  public function getDataProfile()
  {
    return $this->dataProfile;
  }
  /** @param GoogleCloudDataplexV1DataScanEventDataQualityResult */
  public function setDataQuality(GoogleCloudDataplexV1DataScanEventDataQualityResult $dataQuality)
  {
    $this->dataQuality = $dataQuality;
  }
  /** @return GoogleCloudDataplexV1DataScanEventDataQualityResult */
  public function getDataQuality()
  {
    return $this->dataQuality;
  }
  /** @param string */
  public function setDataSource($dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /** @return string */
  public function getDataSource()
  {
    return $this->dataSource;
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
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /** @return string */
  public function getJobId()
  {
    return $this->jobId;
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
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param string */
  public function setSpecVersion($specVersion)
  {
    $this->specVersion = $specVersion;
  }
  /** @return string */
  public function getSpecVersion()
  {
    return $this->specVersion;
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
  public function setTrigger($trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return string */
  public function getTrigger()
  {
    return $this->trigger;
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

class GoogleCloudDataplexV1DataScanEventDataProfileResult extends \Google\Model
{
  /** @var string */
  public $rowCount;

  /** @param string */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return string */
  public function getRowCount()
  {
    return $this->rowCount;
  }
}

class GoogleCloudDataplexV1DataScanEventDataQualityResult extends \Google\Model
{
  /** @var bool[] */
  public $dimensionPassed;
  /** @var bool */
  public $passed;
  /** @var string */
  public $rowCount;

  /** @param bool[] */
  public function setDimensionPassed($dimensionPassed)
  {
    $this->dimensionPassed = $dimensionPassed;
  }
  /** @return bool[] */
  public function getDimensionPassed()
  {
    return $this->dimensionPassed;
  }
  /** @param bool */
  public function setPassed($passed)
  {
    $this->passed = $passed;
  }
  /** @return bool */
  public function getPassed()
  {
    return $this->passed;
  }
  /** @param string */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return string */
  public function getRowCount()
  {
    return $this->rowCount;
  }
}

class GoogleCloudDataplexV1DataScanExecutionSpec extends \Google\Model
{
  /** @var string */
  public $field;
  /** @var GoogleCloudDataplexV1Trigger */
  public $trigger;
  protected $triggerType = GoogleCloudDataplexV1Trigger::class;
  protected $triggerDataType = '';
  /** @param string */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param GoogleCloudDataplexV1Trigger */
  public function setTrigger(GoogleCloudDataplexV1Trigger $trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return GoogleCloudDataplexV1Trigger */
  public function getTrigger()
  {
    return $this->trigger;
  }
}

class GoogleCloudDataplexV1DataScanJob extends \Google\Model
{
  /** @var GoogleCloudDataplexV1DataProfileResult */
  public $dataProfileResult;
  /** @var GoogleCloudDataplexV1DataProfileSpec */
  public $dataProfileSpec;
  /** @var GoogleCloudDataplexV1DataQualityResult */
  public $dataQualityResult;
  /** @var GoogleCloudDataplexV1DataQualitySpec */
  public $dataQualitySpec;
  /** @var string */
  public $endTime;
  /** @var string */
  public $message;
  /** @var string */
  public $name;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $type;
  /** @var string */
  public $uid;
  protected $dataProfileResultType = GoogleCloudDataplexV1DataProfileResult::class;
  protected $dataProfileResultDataType = '';
  protected $dataProfileSpecType = GoogleCloudDataplexV1DataProfileSpec::class;
  protected $dataProfileSpecDataType = '';
  protected $dataQualityResultType = GoogleCloudDataplexV1DataQualityResult::class;
  protected $dataQualityResultDataType = '';
  protected $dataQualitySpecType = GoogleCloudDataplexV1DataQualitySpec::class;
  protected $dataQualitySpecDataType = '';
  /** @param GoogleCloudDataplexV1DataProfileResult */
  public function setDataProfileResult(GoogleCloudDataplexV1DataProfileResult $dataProfileResult)
  {
    $this->dataProfileResult = $dataProfileResult;
  }
  /** @return GoogleCloudDataplexV1DataProfileResult */
  public function getDataProfileResult()
  {
    return $this->dataProfileResult;
  }
  /** @param GoogleCloudDataplexV1DataProfileSpec */
  public function setDataProfileSpec(GoogleCloudDataplexV1DataProfileSpec $dataProfileSpec)
  {
    $this->dataProfileSpec = $dataProfileSpec;
  }
  /** @return GoogleCloudDataplexV1DataProfileSpec */
  public function getDataProfileSpec()
  {
    return $this->dataProfileSpec;
  }
  /** @param GoogleCloudDataplexV1DataQualityResult */
  public function setDataQualityResult(GoogleCloudDataplexV1DataQualityResult $dataQualityResult)
  {
    $this->dataQualityResult = $dataQualityResult;
  }
  /** @return GoogleCloudDataplexV1DataQualityResult */
  public function getDataQualityResult()
  {
    return $this->dataQualityResult;
  }
  /** @param GoogleCloudDataplexV1DataQualitySpec */
  public function setDataQualitySpec(GoogleCloudDataplexV1DataQualitySpec $dataQualitySpec)
  {
    $this->dataQualitySpec = $dataQualitySpec;
  }
  /** @return GoogleCloudDataplexV1DataQualitySpec */
  public function getDataQualitySpec()
  {
    return $this->dataQualitySpec;
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
}

class GoogleCloudDataplexV1DataSource extends \Google\Model
{
  /** @var string */
  public $entity;

  /** @param string */
  public function setEntity($entity)
  {
    $this->entity = $entity;
  }
  /** @return string */
  public function getEntity()
  {
    return $this->entity;
  }
}

class GoogleCloudDataplexV1DiscoveryEvent extends \Google\Model
{
  /** @var GoogleCloudDataplexV1DiscoveryEventActionDetails */
  public $action;
  /** @var string */
  public $assetId;
  /** @var GoogleCloudDataplexV1DiscoveryEventConfigDetails */
  public $config;
  /** @var string */
  public $dataLocation;
  /** @var GoogleCloudDataplexV1DiscoveryEventEntityDetails */
  public $entity;
  /** @var string */
  public $lakeId;
  /** @var string */
  public $message;
  /** @var GoogleCloudDataplexV1DiscoveryEventPartitionDetails */
  public $partition;
  /** @var string */
  public $type;
  /** @var string */
  public $zoneId;
  protected $actionType = GoogleCloudDataplexV1DiscoveryEventActionDetails::class;
  protected $actionDataType = '';
  protected $configType = GoogleCloudDataplexV1DiscoveryEventConfigDetails::class;
  protected $configDataType = '';
  protected $entityType = GoogleCloudDataplexV1DiscoveryEventEntityDetails::class;
  protected $entityDataType = '';
  protected $partitionType = GoogleCloudDataplexV1DiscoveryEventPartitionDetails::class;
  protected $partitionDataType = '';
  /** @param GoogleCloudDataplexV1DiscoveryEventActionDetails */
  public function setAction(GoogleCloudDataplexV1DiscoveryEventActionDetails $action)
  {
    $this->action = $action;
  }
  /** @return GoogleCloudDataplexV1DiscoveryEventActionDetails */
  public function getAction()
  {
    return $this->action;
  }
  /** @param string */
  public function setAssetId($assetId)
  {
    $this->assetId = $assetId;
  }
  /** @return string */
  public function getAssetId()
  {
    return $this->assetId;
  }
  /** @param GoogleCloudDataplexV1DiscoveryEventConfigDetails */
  public function setConfig(GoogleCloudDataplexV1DiscoveryEventConfigDetails $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudDataplexV1DiscoveryEventConfigDetails */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param string */
  public function setDataLocation($dataLocation)
  {
    $this->dataLocation = $dataLocation;
  }
  /** @return string */
  public function getDataLocation()
  {
    return $this->dataLocation;
  }
  /** @param GoogleCloudDataplexV1DiscoveryEventEntityDetails */
  public function setEntity(GoogleCloudDataplexV1DiscoveryEventEntityDetails $entity)
  {
    $this->entity = $entity;
  }
  /** @return GoogleCloudDataplexV1DiscoveryEventEntityDetails */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param string */
  public function setLakeId($lakeId)
  {
    $this->lakeId = $lakeId;
  }
  /** @return string */
  public function getLakeId()
  {
    return $this->lakeId;
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
  /** @param GoogleCloudDataplexV1DiscoveryEventPartitionDetails */
  public function setPartition(GoogleCloudDataplexV1DiscoveryEventPartitionDetails $partition)
  {
    $this->partition = $partition;
  }
  /** @return GoogleCloudDataplexV1DiscoveryEventPartitionDetails */
  public function getPartition()
  {
    return $this->partition;
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
  public function setZoneId($zoneId)
  {
    $this->zoneId = $zoneId;
  }
  /** @return string */
  public function getZoneId()
  {
    return $this->zoneId;
  }
}

class GoogleCloudDataplexV1DiscoveryEventActionDetails extends \Google\Model
{
  /** @var string */
  public $type;

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

class GoogleCloudDataplexV1DiscoveryEventConfigDetails extends \Google\Model
{
  /** @var string[] */
  public $parameters;

  /** @param string[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return string[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleCloudDataplexV1DiscoveryEventEntityDetails extends \Google\Model
{
  /** @var string */
  public $entity;
  /** @var string */
  public $type;

  /** @param string */
  public function setEntity($entity)
  {
    $this->entity = $entity;
  }
  /** @return string */
  public function getEntity()
  {
    return $this->entity;
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

class GoogleCloudDataplexV1DiscoveryEventPartitionDetails extends \Google\Collection
{
  /** @var string */
  public $entity;
  /** @var string */
  public $partition;
  /** @var string[] */
  public $sampledDataLocations;
  /** @var string */
  public $type;
  protected $collection_key = 'sampledDataLocations';
  /** @param string */
  public function setEntity($entity)
  {
    $this->entity = $entity;
  }
  /** @return string */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param string */
  public function setPartition($partition)
  {
    $this->partition = $partition;
  }
  /** @return string */
  public function getPartition()
  {
    return $this->partition;
  }
  /** @param string[] */
  public function setSampledDataLocations($sampledDataLocations)
  {
    $this->sampledDataLocations = $sampledDataLocations;
  }
  /** @return string[] */
  public function getSampledDataLocations()
  {
    return $this->sampledDataLocations;
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

class GoogleCloudDataplexV1Entity extends \Google\Model
{
  /** @var string */
  public $asset;
  /** @var string */
  public $catalogEntry;
  /** @var GoogleCloudDataplexV1EntityCompatibilityStatus */
  public $compatibility;
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataPath;
  /** @var string */
  public $dataPathPattern;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var GoogleCloudDataplexV1StorageFormat */
  public $format;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var GoogleCloudDataplexV1Schema */
  public $schema;
  /** @var string */
  public $system;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $compatibilityType = GoogleCloudDataplexV1EntityCompatibilityStatus::class;
  protected $compatibilityDataType = '';
  protected $formatType = GoogleCloudDataplexV1StorageFormat::class;
  protected $formatDataType = '';
  protected $schemaType = GoogleCloudDataplexV1Schema::class;
  protected $schemaDataType = '';
  /** @param string */
  public function setAsset($asset)
  {
    $this->asset = $asset;
  }
  /** @return string */
  public function getAsset()
  {
    return $this->asset;
  }
  /** @param string */
  public function setCatalogEntry($catalogEntry)
  {
    $this->catalogEntry = $catalogEntry;
  }
  /** @return string */
  public function getCatalogEntry()
  {
    return $this->catalogEntry;
  }
  /** @param GoogleCloudDataplexV1EntityCompatibilityStatus */
  public function setCompatibility(GoogleCloudDataplexV1EntityCompatibilityStatus $compatibility)
  {
    $this->compatibility = $compatibility;
  }
  /** @return GoogleCloudDataplexV1EntityCompatibilityStatus */
  public function getCompatibility()
  {
    return $this->compatibility;
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
  public function setDataPath($dataPath)
  {
    $this->dataPath = $dataPath;
  }
  /** @return string */
  public function getDataPath()
  {
    return $this->dataPath;
  }
  /** @param string */
  public function setDataPathPattern($dataPathPattern)
  {
    $this->dataPathPattern = $dataPathPattern;
  }
  /** @return string */
  public function getDataPathPattern()
  {
    return $this->dataPathPattern;
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param GoogleCloudDataplexV1StorageFormat */
  public function setFormat(GoogleCloudDataplexV1StorageFormat $format)
  {
    $this->format = $format;
  }
  /** @return GoogleCloudDataplexV1StorageFormat */
  public function getFormat()
  {
    return $this->format;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param GoogleCloudDataplexV1Schema */
  public function setSchema(GoogleCloudDataplexV1Schema $schema)
  {
    $this->schema = $schema;
  }
  /** @return GoogleCloudDataplexV1Schema */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param string */
  public function setSystem($system)
  {
    $this->system = $system;
  }
  /** @return string */
  public function getSystem()
  {
    return $this->system;
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

class GoogleCloudDataplexV1EntityCompatibilityStatus extends \Google\Model
{
  /** @var GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility */
  public $bigquery;
  /** @var GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility */
  public $hiveMetastore;
  protected $bigqueryType = GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility::class;
  protected $bigqueryDataType = '';
  protected $hiveMetastoreType = GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility::class;
  protected $hiveMetastoreDataType = '';
  /** @param GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility */
  public function setBigquery(GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility $bigquery)
  {
    $this->bigquery = $bigquery;
  }
  /** @return GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility */
  public function getBigquery()
  {
    return $this->bigquery;
  }
  /** @param GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility */
  public function setHiveMetastore(GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility $hiveMetastore)
  {
    $this->hiveMetastore = $hiveMetastore;
  }
  /** @return GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility */
  public function getHiveMetastore()
  {
    return $this->hiveMetastore;
  }
}

class GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility extends \Google\Model
{
  /** @var bool */
  public $compatible;
  /** @var string */
  public $reason;

  /** @param bool */
  public function setCompatible($compatible)
  {
    $this->compatible = $compatible;
  }
  /** @return bool */
  public function getCompatible()
  {
    return $this->compatible;
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

class GoogleCloudDataplexV1Environment extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDataplexV1EnvironmentEndpoints */
  public $endpoints;
  /** @var GoogleCloudDataplexV1EnvironmentInfrastructureSpec */
  public $infrastructureSpec;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var GoogleCloudDataplexV1EnvironmentSessionSpec */
  public $sessionSpec;
  /** @var GoogleCloudDataplexV1EnvironmentSessionStatus */
  public $sessionStatus;
  /** @var string */
  public $state;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $endpointsType = GoogleCloudDataplexV1EnvironmentEndpoints::class;
  protected $endpointsDataType = '';
  protected $infrastructureSpecType = GoogleCloudDataplexV1EnvironmentInfrastructureSpec::class;
  protected $infrastructureSpecDataType = '';
  protected $sessionSpecType = GoogleCloudDataplexV1EnvironmentSessionSpec::class;
  protected $sessionSpecDataType = '';
  protected $sessionStatusType = GoogleCloudDataplexV1EnvironmentSessionStatus::class;
  protected $sessionStatusDataType = '';
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param GoogleCloudDataplexV1EnvironmentEndpoints */
  public function setEndpoints(GoogleCloudDataplexV1EnvironmentEndpoints $endpoints)
  {
    $this->endpoints = $endpoints;
  }
  /** @return GoogleCloudDataplexV1EnvironmentEndpoints */
  public function getEndpoints()
  {
    return $this->endpoints;
  }
  /** @param GoogleCloudDataplexV1EnvironmentInfrastructureSpec */
  public function setInfrastructureSpec(GoogleCloudDataplexV1EnvironmentInfrastructureSpec $infrastructureSpec)
  {
    $this->infrastructureSpec = $infrastructureSpec;
  }
  /** @return GoogleCloudDataplexV1EnvironmentInfrastructureSpec */
  public function getInfrastructureSpec()
  {
    return $this->infrastructureSpec;
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
  /** @param GoogleCloudDataplexV1EnvironmentSessionSpec */
  public function setSessionSpec(GoogleCloudDataplexV1EnvironmentSessionSpec $sessionSpec)
  {
    $this->sessionSpec = $sessionSpec;
  }
  /** @return GoogleCloudDataplexV1EnvironmentSessionSpec */
  public function getSessionSpec()
  {
    return $this->sessionSpec;
  }
  /** @param GoogleCloudDataplexV1EnvironmentSessionStatus */
  public function setSessionStatus(GoogleCloudDataplexV1EnvironmentSessionStatus $sessionStatus)
  {
    $this->sessionStatus = $sessionStatus;
  }
  /** @return GoogleCloudDataplexV1EnvironmentSessionStatus */
  public function getSessionStatus()
  {
    return $this->sessionStatus;
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

class GoogleCloudDataplexV1EnvironmentEndpoints extends \Google\Model
{
  /** @var string */
  public $notebooks;
  /** @var string */
  public $sql;

  /** @param string */
  public function setNotebooks($notebooks)
  {
    $this->notebooks = $notebooks;
  }
  /** @return string */
  public function getNotebooks()
  {
    return $this->notebooks;
  }
  /** @param string */
  public function setSql($sql)
  {
    $this->sql = $sql;
  }
  /** @return string */
  public function getSql()
  {
    return $this->sql;
  }
}

class GoogleCloudDataplexV1EnvironmentInfrastructureSpec extends \Google\Model
{
  /** @var GoogleCloudDataplexV1EnvironmentInfrastructureSpecComputeResources */
  public $compute;
  /** @var GoogleCloudDataplexV1EnvironmentInfrastructureSpecOsImageRuntime */
  public $osImage;
  protected $computeType = GoogleCloudDataplexV1EnvironmentInfrastructureSpecComputeResources::class;
  protected $computeDataType = '';
  protected $osImageType = GoogleCloudDataplexV1EnvironmentInfrastructureSpecOsImageRuntime::class;
  protected $osImageDataType = '';
  /** @param GoogleCloudDataplexV1EnvironmentInfrastructureSpecComputeResources */
  public function setCompute(GoogleCloudDataplexV1EnvironmentInfrastructureSpecComputeResources $compute)
  {
    $this->compute = $compute;
  }
  /** @return GoogleCloudDataplexV1EnvironmentInfrastructureSpecComputeResources */
  public function getCompute()
  {
    return $this->compute;
  }
  /** @param GoogleCloudDataplexV1EnvironmentInfrastructureSpecOsImageRuntime */
  public function setOsImage(GoogleCloudDataplexV1EnvironmentInfrastructureSpecOsImageRuntime $osImage)
  {
    $this->osImage = $osImage;
  }
  /** @return GoogleCloudDataplexV1EnvironmentInfrastructureSpecOsImageRuntime */
  public function getOsImage()
  {
    return $this->osImage;
  }
}

class GoogleCloudDataplexV1EnvironmentInfrastructureSpecComputeResources extends \Google\Model
{
  /** @var int */
  public $diskSizeGb;
  /** @var int */
  public $maxNodeCount;
  /** @var int */
  public $nodeCount;

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
  /** @param int */
  public function setMaxNodeCount($maxNodeCount)
  {
    $this->maxNodeCount = $maxNodeCount;
  }
  /** @return int */
  public function getMaxNodeCount()
  {
    return $this->maxNodeCount;
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
}

class GoogleCloudDataplexV1EnvironmentInfrastructureSpecOsImageRuntime extends \Google\Collection
{
  /** @var string */
  public $imageVersion;
  /** @var string[] */
  public $javaLibraries;
  /** @var string[] */
  public $properties;
  /** @var string[] */
  public $pythonPackages;
  protected $collection_key = 'pythonPackages';
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
  public function setJavaLibraries($javaLibraries)
  {
    $this->javaLibraries = $javaLibraries;
  }
  /** @return string[] */
  public function getJavaLibraries()
  {
    return $this->javaLibraries;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string[] */
  public function setPythonPackages($pythonPackages)
  {
    $this->pythonPackages = $pythonPackages;
  }
  /** @return string[] */
  public function getPythonPackages()
  {
    return $this->pythonPackages;
  }
}

class GoogleCloudDataplexV1EnvironmentSessionSpec extends \Google\Model
{
  /** @var bool */
  public $enableFastStartup;
  /** @var string */
  public $maxIdleDuration;

  /** @param bool */
  public function setEnableFastStartup($enableFastStartup)
  {
    $this->enableFastStartup = $enableFastStartup;
  }
  /** @return bool */
  public function getEnableFastStartup()
  {
    return $this->enableFastStartup;
  }
  /** @param string */
  public function setMaxIdleDuration($maxIdleDuration)
  {
    $this->maxIdleDuration = $maxIdleDuration;
  }
  /** @return string */
  public function getMaxIdleDuration()
  {
    return $this->maxIdleDuration;
  }
}

class GoogleCloudDataplexV1EnvironmentSessionStatus extends \Google\Model
{
  /** @var bool */
  public $active;

  /** @param bool */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /** @return bool */
  public function getActive()
  {
    return $this->active;
  }
}

class GoogleCloudDataplexV1Job extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $message;
  /** @var string */
  public $name;
  /** @var string */
  public $retryCount;
  /** @var string */
  public $service;
  /** @var string */
  public $serviceJob;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $uid;

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
  public function setRetryCount($retryCount)
  {
    $this->retryCount = $retryCount;
  }
  /** @return string */
  public function getRetryCount()
  {
    return $this->retryCount;
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
  public function setServiceJob($serviceJob)
  {
    $this->serviceJob = $serviceJob;
  }
  /** @return string */
  public function getServiceJob()
  {
    return $this->serviceJob;
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

class GoogleCloudDataplexV1JobEvent extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $jobId;
  /** @var string */
  public $message;
  /** @var int */
  public $retries;
  /** @var string */
  public $service;
  /** @var string */
  public $serviceJob;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $type;

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
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /** @return string */
  public function getJobId()
  {
    return $this->jobId;
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
  /** @param int */
  public function setRetries($retries)
  {
    $this->retries = $retries;
  }
  /** @return int */
  public function getRetries()
  {
    return $this->retries;
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
  public function setServiceJob($serviceJob)
  {
    $this->serviceJob = $serviceJob;
  }
  /** @return string */
  public function getServiceJob()
  {
    return $this->serviceJob;
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

class GoogleCloudDataplexV1Lake extends \Google\Model
{
  /** @var GoogleCloudDataplexV1AssetStatus */
  public $assetStatus;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var GoogleCloudDataplexV1LakeMetastore */
  public $metastore;
  /** @var GoogleCloudDataplexV1LakeMetastoreStatus */
  public $metastoreStatus;
  /** @var string */
  public $name;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $state;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $assetStatusType = GoogleCloudDataplexV1AssetStatus::class;
  protected $assetStatusDataType = '';
  protected $metastoreType = GoogleCloudDataplexV1LakeMetastore::class;
  protected $metastoreDataType = '';
  protected $metastoreStatusType = GoogleCloudDataplexV1LakeMetastoreStatus::class;
  protected $metastoreStatusDataType = '';
  /** @param GoogleCloudDataplexV1AssetStatus */
  public function setAssetStatus(GoogleCloudDataplexV1AssetStatus $assetStatus)
  {
    $this->assetStatus = $assetStatus;
  }
  /** @return GoogleCloudDataplexV1AssetStatus */
  public function getAssetStatus()
  {
    return $this->assetStatus;
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
  /** @param GoogleCloudDataplexV1LakeMetastore */
  public function setMetastore(GoogleCloudDataplexV1LakeMetastore $metastore)
  {
    $this->metastore = $metastore;
  }
  /** @return GoogleCloudDataplexV1LakeMetastore */
  public function getMetastore()
  {
    return $this->metastore;
  }
  /** @param GoogleCloudDataplexV1LakeMetastoreStatus */
  public function setMetastoreStatus(GoogleCloudDataplexV1LakeMetastoreStatus $metastoreStatus)
  {
    $this->metastoreStatus = $metastoreStatus;
  }
  /** @return GoogleCloudDataplexV1LakeMetastoreStatus */
  public function getMetastoreStatus()
  {
    return $this->metastoreStatus;
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

class GoogleCloudDataplexV1LakeMetastore extends \Google\Model
{
  /** @var string */
  public $service;

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

class GoogleCloudDataplexV1LakeMetastoreStatus extends \Google\Model
{
  /** @var string */
  public $endpoint;
  /** @var string */
  public $message;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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

class GoogleCloudDataplexV1ListActionsResponse extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1Action[] */
  public $actions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'actions';
  protected $actionsType = GoogleCloudDataplexV1Action::class;
  protected $actionsDataType = 'array';
  /** @param GoogleCloudDataplexV1Action[] */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /** @return GoogleCloudDataplexV1Action[] */
  public function getActions()
  {
    return $this->actions;
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

class GoogleCloudDataplexV1ListAssetsResponse extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1Asset[] */
  public $assets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assets';
  protected $assetsType = GoogleCloudDataplexV1Asset::class;
  protected $assetsDataType = 'array';
  /** @param GoogleCloudDataplexV1Asset[] */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /** @return GoogleCloudDataplexV1Asset[] */
  public function getAssets()
  {
    return $this->assets;
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

class GoogleCloudDataplexV1ListContentResponse extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1Content[] */
  public $content;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'content';
  protected $contentType = GoogleCloudDataplexV1Content::class;
  protected $contentDataType = 'array';
  /** @param GoogleCloudDataplexV1Content[] */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return GoogleCloudDataplexV1Content[] */
  public function getContent()
  {
    return $this->content;
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

class GoogleCloudDataplexV1ListDataScanJobsResponse extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1DataScanJob[] */
  public $dataScanJobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dataScanJobs';
  protected $dataScanJobsType = GoogleCloudDataplexV1DataScanJob::class;
  protected $dataScanJobsDataType = 'array';
  /** @param GoogleCloudDataplexV1DataScanJob[] */
  public function setDataScanJobs($dataScanJobs)
  {
    $this->dataScanJobs = $dataScanJobs;
  }
  /** @return GoogleCloudDataplexV1DataScanJob[] */
  public function getDataScanJobs()
  {
    return $this->dataScanJobs;
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

class GoogleCloudDataplexV1ListDataScansResponse extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1DataScan[] */
  public $dataScans;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $dataScansType = GoogleCloudDataplexV1DataScan::class;
  protected $dataScansDataType = 'array';
  /** @param GoogleCloudDataplexV1DataScan[] */
  public function setDataScans($dataScans)
  {
    $this->dataScans = $dataScans;
  }
  /** @return GoogleCloudDataplexV1DataScan[] */
  public function getDataScans()
  {
    return $this->dataScans;
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

class GoogleCloudDataplexV1ListEntitiesResponse extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1Entity[] */
  public $entities;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'entities';
  protected $entitiesType = GoogleCloudDataplexV1Entity::class;
  protected $entitiesDataType = 'array';
  /** @param GoogleCloudDataplexV1Entity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudDataplexV1Entity[] */
  public function getEntities()
  {
    return $this->entities;
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

class GoogleCloudDataplexV1ListEnvironmentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1Environment[] */
  public $environments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'environments';
  protected $environmentsType = GoogleCloudDataplexV1Environment::class;
  protected $environmentsDataType = 'array';
  /** @param GoogleCloudDataplexV1Environment[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return GoogleCloudDataplexV1Environment[] */
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

class GoogleCloudDataplexV1ListJobsResponse extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1Job[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
  protected $jobsType = GoogleCloudDataplexV1Job::class;
  protected $jobsDataType = 'array';
  /** @param GoogleCloudDataplexV1Job[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return GoogleCloudDataplexV1Job[] */
  public function getJobs()
  {
    return $this->jobs;
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

class GoogleCloudDataplexV1ListLakesResponse extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1Lake[] */
  public $lakes;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachableLocations;
  protected $collection_key = 'unreachableLocations';
  protected $lakesType = GoogleCloudDataplexV1Lake::class;
  protected $lakesDataType = 'array';
  /** @param GoogleCloudDataplexV1Lake[] */
  public function setLakes($lakes)
  {
    $this->lakes = $lakes;
  }
  /** @return GoogleCloudDataplexV1Lake[] */
  public function getLakes()
  {
    return $this->lakes;
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

class GoogleCloudDataplexV1ListPartitionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDataplexV1Partition[] */
  public $partitions;
  protected $collection_key = 'partitions';
  protected $partitionsType = GoogleCloudDataplexV1Partition::class;
  protected $partitionsDataType = 'array';
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
  /** @param GoogleCloudDataplexV1Partition[] */
  public function setPartitions($partitions)
  {
    $this->partitions = $partitions;
  }
  /** @return GoogleCloudDataplexV1Partition[] */
  public function getPartitions()
  {
    return $this->partitions;
  }
}

class GoogleCloudDataplexV1ListSessionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDataplexV1Session[] */
  public $sessions;
  protected $collection_key = 'sessions';
  protected $sessionsType = GoogleCloudDataplexV1Session::class;
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
  /** @param GoogleCloudDataplexV1Session[] */
  public function setSessions($sessions)
  {
    $this->sessions = $sessions;
  }
  /** @return GoogleCloudDataplexV1Session[] */
  public function getSessions()
  {
    return $this->sessions;
  }
}

class GoogleCloudDataplexV1ListTasksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDataplexV1Task[] */
  public $tasks;
  /** @var string[] */
  public $unreachableLocations;
  protected $collection_key = 'unreachableLocations';
  protected $tasksType = GoogleCloudDataplexV1Task::class;
  protected $tasksDataType = 'array';
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
  /** @param GoogleCloudDataplexV1Task[] */
  public function setTasks($tasks)
  {
    $this->tasks = $tasks;
  }
  /** @return GoogleCloudDataplexV1Task[] */
  public function getTasks()
  {
    return $this->tasks;
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

class GoogleCloudDataplexV1ListZonesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDataplexV1Zone[] */
  public $zones;
  protected $collection_key = 'zones';
  protected $zonesType = GoogleCloudDataplexV1Zone::class;
  protected $zonesDataType = 'array';
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
  /** @param GoogleCloudDataplexV1Zone[] */
  public function setZones($zones)
  {
    $this->zones = $zones;
  }
  /** @return GoogleCloudDataplexV1Zone[] */
  public function getZones()
  {
    return $this->zones;
  }
}

class GoogleCloudDataplexV1OperationMetadata extends \Google\Model
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

class GoogleCloudDataplexV1Partition extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
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

class GoogleCloudDataplexV1RunDataScanRequest extends \Google\Model
{
}

class GoogleCloudDataplexV1RunDataScanResponse extends \Google\Model
{
  /** @var GoogleCloudDataplexV1DataScanJob */
  public $job;
  protected $jobType = GoogleCloudDataplexV1DataScanJob::class;
  protected $jobDataType = '';
  /** @param GoogleCloudDataplexV1DataScanJob */
  public function setJob(GoogleCloudDataplexV1DataScanJob $job)
  {
    $this->job = $job;
  }
  /** @return GoogleCloudDataplexV1DataScanJob */
  public function getJob()
  {
    return $this->job;
  }
}

class GoogleCloudDataplexV1ScannedData extends \Google\Model
{
  /** @var GoogleCloudDataplexV1ScannedDataIncrementalField */
  public $incrementalField;
  protected $incrementalFieldType = GoogleCloudDataplexV1ScannedDataIncrementalField::class;
  protected $incrementalFieldDataType = '';
  /** @param GoogleCloudDataplexV1ScannedDataIncrementalField */
  public function setIncrementalField(GoogleCloudDataplexV1ScannedDataIncrementalField $incrementalField)
  {
    $this->incrementalField = $incrementalField;
  }
  /** @return GoogleCloudDataplexV1ScannedDataIncrementalField */
  public function getIncrementalField()
  {
    return $this->incrementalField;
  }
}

class GoogleCloudDataplexV1ScannedDataIncrementalField extends \Google\Model
{
  /** @var string */
  public $end;
  /** @var string */
  public $field;
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
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
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

class GoogleCloudDataplexV1Schema extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1SchemaSchemaField[] */
  public $fields;
  /** @var GoogleCloudDataplexV1SchemaPartitionField[] */
  public $partitionFields;
  /** @var string */
  public $partitionStyle;
  /** @var bool */
  public $userManaged;
  protected $collection_key = 'partitionFields';
  protected $fieldsType = GoogleCloudDataplexV1SchemaSchemaField::class;
  protected $fieldsDataType = 'array';
  protected $partitionFieldsType = GoogleCloudDataplexV1SchemaPartitionField::class;
  protected $partitionFieldsDataType = 'array';
  /** @param GoogleCloudDataplexV1SchemaSchemaField[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return GoogleCloudDataplexV1SchemaSchemaField[] */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param GoogleCloudDataplexV1SchemaPartitionField[] */
  public function setPartitionFields($partitionFields)
  {
    $this->partitionFields = $partitionFields;
  }
  /** @return GoogleCloudDataplexV1SchemaPartitionField[] */
  public function getPartitionFields()
  {
    return $this->partitionFields;
  }
  /** @param string */
  public function setPartitionStyle($partitionStyle)
  {
    $this->partitionStyle = $partitionStyle;
  }
  /** @return string */
  public function getPartitionStyle()
  {
    return $this->partitionStyle;
  }
  /** @param bool */
  public function setUserManaged($userManaged)
  {
    $this->userManaged = $userManaged;
  }
  /** @return bool */
  public function getUserManaged()
  {
    return $this->userManaged;
  }
}

class GoogleCloudDataplexV1SchemaPartitionField extends \Google\Model
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

class GoogleCloudDataplexV1SchemaSchemaField extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var GoogleCloudDataplexV1SchemaSchemaField[] */
  public $fields;
  /** @var string */
  public $mode;
  /** @var string */
  public $name;
  /** @var string */
  public $type;
  protected $collection_key = 'fields';
  protected $fieldsType = GoogleCloudDataplexV1SchemaSchemaField::class;
  protected $fieldsDataType = 'array';
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
  /** @param GoogleCloudDataplexV1SchemaSchemaField[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return GoogleCloudDataplexV1SchemaSchemaField[] */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param string */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
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

class GoogleCloudDataplexV1Session extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $userId;

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
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class GoogleCloudDataplexV1SessionEvent extends \Google\Model
{
  /** @var bool */
  public $eventSucceeded;
  /** @var bool */
  public $fastStartupEnabled;
  /** @var string */
  public $message;
  /** @var GoogleCloudDataplexV1SessionEventQueryDetail */
  public $query;
  /** @var string */
  public $sessionId;
  /** @var string */
  public $type;
  /** @var string */
  public $unassignedDuration;
  /** @var string */
  public $userId;
  protected $queryType = GoogleCloudDataplexV1SessionEventQueryDetail::class;
  protected $queryDataType = '';
  /** @param bool */
  public function setEventSucceeded($eventSucceeded)
  {
    $this->eventSucceeded = $eventSucceeded;
  }
  /** @return bool */
  public function getEventSucceeded()
  {
    return $this->eventSucceeded;
  }
  /** @param bool */
  public function setFastStartupEnabled($fastStartupEnabled)
  {
    $this->fastStartupEnabled = $fastStartupEnabled;
  }
  /** @return bool */
  public function getFastStartupEnabled()
  {
    return $this->fastStartupEnabled;
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
  /** @param GoogleCloudDataplexV1SessionEventQueryDetail */
  public function setQuery(GoogleCloudDataplexV1SessionEventQueryDetail $query)
  {
    $this->query = $query;
  }
  /** @return GoogleCloudDataplexV1SessionEventQueryDetail */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param string */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /** @return string */
  public function getSessionId()
  {
    return $this->sessionId;
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
  public function setUnassignedDuration($unassignedDuration)
  {
    $this->unassignedDuration = $unassignedDuration;
  }
  /** @return string */
  public function getUnassignedDuration()
  {
    return $this->unassignedDuration;
  }
  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class GoogleCloudDataplexV1SessionEventQueryDetail extends \Google\Model
{
  /** @var string */
  public $dataProcessedBytes;
  /** @var string */
  public $duration;
  /** @var string */
  public $engine;
  /** @var string */
  public $queryId;
  /** @var string */
  public $queryText;
  /** @var string */
  public $resultSizeBytes;

  /** @param string */
  public function setDataProcessedBytes($dataProcessedBytes)
  {
    $this->dataProcessedBytes = $dataProcessedBytes;
  }
  /** @return string */
  public function getDataProcessedBytes()
  {
    return $this->dataProcessedBytes;
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
  public function setEngine($engine)
  {
    $this->engine = $engine;
  }
  /** @return string */
  public function getEngine()
  {
    return $this->engine;
  }
  /** @param string */
  public function setQueryId($queryId)
  {
    $this->queryId = $queryId;
  }
  /** @return string */
  public function getQueryId()
  {
    return $this->queryId;
  }
  /** @param string */
  public function setQueryText($queryText)
  {
    $this->queryText = $queryText;
  }
  /** @return string */
  public function getQueryText()
  {
    return $this->queryText;
  }
  /** @param string */
  public function setResultSizeBytes($resultSizeBytes)
  {
    $this->resultSizeBytes = $resultSizeBytes;
  }
  /** @return string */
  public function getResultSizeBytes()
  {
    return $this->resultSizeBytes;
  }
}

class GoogleCloudDataplexV1StorageFormat extends \Google\Model
{
  /** @var string */
  public $compressionFormat;
  /** @var GoogleCloudDataplexV1StorageFormatCsvOptions */
  public $csv;
  /** @var string */
  public $format;
  /** @var GoogleCloudDataplexV1StorageFormatJsonOptions */
  public $json;
  /** @var string */
  public $mimeType;
  protected $csvType = GoogleCloudDataplexV1StorageFormatCsvOptions::class;
  protected $csvDataType = '';
  protected $jsonType = GoogleCloudDataplexV1StorageFormatJsonOptions::class;
  protected $jsonDataType = '';
  /** @param string */
  public function setCompressionFormat($compressionFormat)
  {
    $this->compressionFormat = $compressionFormat;
  }
  /** @return string */
  public function getCompressionFormat()
  {
    return $this->compressionFormat;
  }
  /** @param GoogleCloudDataplexV1StorageFormatCsvOptions */
  public function setCsv(GoogleCloudDataplexV1StorageFormatCsvOptions $csv)
  {
    $this->csv = $csv;
  }
  /** @return GoogleCloudDataplexV1StorageFormatCsvOptions */
  public function getCsv()
  {
    return $this->csv;
  }
  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
  }
  /** @param GoogleCloudDataplexV1StorageFormatJsonOptions */
  public function setJson(GoogleCloudDataplexV1StorageFormatJsonOptions $json)
  {
    $this->json = $json;
  }
  /** @return GoogleCloudDataplexV1StorageFormatJsonOptions */
  public function getJson()
  {
    return $this->json;
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
}

class GoogleCloudDataplexV1StorageFormatCsvOptions extends \Google\Model
{
  /** @var string */
  public $delimiter;
  /** @var string */
  public $encoding;
  /** @var int */
  public $headerRows;
  /** @var string */
  public $quote;

  /** @param string */
  public function setDelimiter($delimiter)
  {
    $this->delimiter = $delimiter;
  }
  /** @return string */
  public function getDelimiter()
  {
    return $this->delimiter;
  }
  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
  }
  /** @param int */
  public function setHeaderRows($headerRows)
  {
    $this->headerRows = $headerRows;
  }
  /** @return int */
  public function getHeaderRows()
  {
    return $this->headerRows;
  }
  /** @param string */
  public function setQuote($quote)
  {
    $this->quote = $quote;
  }
  /** @return string */
  public function getQuote()
  {
    return $this->quote;
  }
}

class GoogleCloudDataplexV1StorageFormatJsonOptions extends \Google\Model
{
  /** @var string */
  public $encoding;

  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
  }
}

class GoogleCloudDataplexV1Task extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDataplexV1TaskExecutionSpec */
  public $executionSpec;
  /** @var GoogleCloudDataplexV1TaskExecutionStatus */
  public $executionStatus;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var GoogleCloudDataplexV1TaskNotebookTaskConfig */
  public $notebook;
  /** @var GoogleCloudDataplexV1TaskSparkTaskConfig */
  public $spark;
  /** @var string */
  public $state;
  /** @var GoogleCloudDataplexV1TaskTriggerSpec */
  public $triggerSpec;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $executionSpecType = GoogleCloudDataplexV1TaskExecutionSpec::class;
  protected $executionSpecDataType = '';
  protected $executionStatusType = GoogleCloudDataplexV1TaskExecutionStatus::class;
  protected $executionStatusDataType = '';
  protected $notebookType = GoogleCloudDataplexV1TaskNotebookTaskConfig::class;
  protected $notebookDataType = '';
  protected $sparkType = GoogleCloudDataplexV1TaskSparkTaskConfig::class;
  protected $sparkDataType = '';
  protected $triggerSpecType = GoogleCloudDataplexV1TaskTriggerSpec::class;
  protected $triggerSpecDataType = '';
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param GoogleCloudDataplexV1TaskExecutionSpec */
  public function setExecutionSpec(GoogleCloudDataplexV1TaskExecutionSpec $executionSpec)
  {
    $this->executionSpec = $executionSpec;
  }
  /** @return GoogleCloudDataplexV1TaskExecutionSpec */
  public function getExecutionSpec()
  {
    return $this->executionSpec;
  }
  /** @param GoogleCloudDataplexV1TaskExecutionStatus */
  public function setExecutionStatus(GoogleCloudDataplexV1TaskExecutionStatus $executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return GoogleCloudDataplexV1TaskExecutionStatus */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
  /** @param GoogleCloudDataplexV1TaskNotebookTaskConfig */
  public function setNotebook(GoogleCloudDataplexV1TaskNotebookTaskConfig $notebook)
  {
    $this->notebook = $notebook;
  }
  /** @return GoogleCloudDataplexV1TaskNotebookTaskConfig */
  public function getNotebook()
  {
    return $this->notebook;
  }
  /** @param GoogleCloudDataplexV1TaskSparkTaskConfig */
  public function setSpark(GoogleCloudDataplexV1TaskSparkTaskConfig $spark)
  {
    $this->spark = $spark;
  }
  /** @return GoogleCloudDataplexV1TaskSparkTaskConfig */
  public function getSpark()
  {
    return $this->spark;
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
  /** @param GoogleCloudDataplexV1TaskTriggerSpec */
  public function setTriggerSpec(GoogleCloudDataplexV1TaskTriggerSpec $triggerSpec)
  {
    $this->triggerSpec = $triggerSpec;
  }
  /** @return GoogleCloudDataplexV1TaskTriggerSpec */
  public function getTriggerSpec()
  {
    return $this->triggerSpec;
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

class GoogleCloudDataplexV1TaskExecutionSpec extends \Google\Model
{
  /** @var string[] */
  public $args;
  /** @var string */
  public $kmsKey;
  /** @var string */
  public $maxJobExecutionLifetime;
  /** @var string */
  public $project;
  /** @var string */
  public $serviceAccount;

  /** @param string[] */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /** @return string[] */
  public function getArgs()
  {
    return $this->args;
  }
  /** @param string */
  public function setKmsKey($kmsKey)
  {
    $this->kmsKey = $kmsKey;
  }
  /** @return string */
  public function getKmsKey()
  {
    return $this->kmsKey;
  }
  /** @param string */
  public function setMaxJobExecutionLifetime($maxJobExecutionLifetime)
  {
    $this->maxJobExecutionLifetime = $maxJobExecutionLifetime;
  }
  /** @return string */
  public function getMaxJobExecutionLifetime()
  {
    return $this->maxJobExecutionLifetime;
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
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}

class GoogleCloudDataplexV1TaskExecutionStatus extends \Google\Model
{
  /** @var GoogleCloudDataplexV1Job */
  public $latestJob;
  /** @var string */
  public $updateTime;
  protected $latestJobType = GoogleCloudDataplexV1Job::class;
  protected $latestJobDataType = '';
  /** @param GoogleCloudDataplexV1Job */
  public function setLatestJob(GoogleCloudDataplexV1Job $latestJob)
  {
    $this->latestJob = $latestJob;
  }
  /** @return GoogleCloudDataplexV1Job */
  public function getLatestJob()
  {
    return $this->latestJob;
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

class GoogleCloudDataplexV1TaskInfrastructureSpec extends \Google\Model
{
  /** @var GoogleCloudDataplexV1TaskInfrastructureSpecBatchComputeResources */
  public $batch;
  /** @var GoogleCloudDataplexV1TaskInfrastructureSpecContainerImageRuntime */
  public $containerImage;
  /** @var GoogleCloudDataplexV1TaskInfrastructureSpecVpcNetwork */
  public $vpcNetwork;
  protected $batchType = GoogleCloudDataplexV1TaskInfrastructureSpecBatchComputeResources::class;
  protected $batchDataType = '';
  protected $containerImageType = GoogleCloudDataplexV1TaskInfrastructureSpecContainerImageRuntime::class;
  protected $containerImageDataType = '';
  protected $vpcNetworkType = GoogleCloudDataplexV1TaskInfrastructureSpecVpcNetwork::class;
  protected $vpcNetworkDataType = '';
  /** @param GoogleCloudDataplexV1TaskInfrastructureSpecBatchComputeResources */
  public function setBatch(GoogleCloudDataplexV1TaskInfrastructureSpecBatchComputeResources $batch)
  {
    $this->batch = $batch;
  }
  /** @return GoogleCloudDataplexV1TaskInfrastructureSpecBatchComputeResources */
  public function getBatch()
  {
    return $this->batch;
  }
  /** @param GoogleCloudDataplexV1TaskInfrastructureSpecContainerImageRuntime */
  public function setContainerImage(GoogleCloudDataplexV1TaskInfrastructureSpecContainerImageRuntime $containerImage)
  {
    $this->containerImage = $containerImage;
  }
  /** @return GoogleCloudDataplexV1TaskInfrastructureSpecContainerImageRuntime */
  public function getContainerImage()
  {
    return $this->containerImage;
  }
  /** @param GoogleCloudDataplexV1TaskInfrastructureSpecVpcNetwork */
  public function setVpcNetwork(GoogleCloudDataplexV1TaskInfrastructureSpecVpcNetwork $vpcNetwork)
  {
    $this->vpcNetwork = $vpcNetwork;
  }
  /** @return GoogleCloudDataplexV1TaskInfrastructureSpecVpcNetwork */
  public function getVpcNetwork()
  {
    return $this->vpcNetwork;
  }
}

class GoogleCloudDataplexV1TaskInfrastructureSpecBatchComputeResources extends \Google\Model
{
  /** @var int */
  public $executorsCount;
  /** @var int */
  public $maxExecutorsCount;

  /** @param int */
  public function setExecutorsCount($executorsCount)
  {
    $this->executorsCount = $executorsCount;
  }
  /** @return int */
  public function getExecutorsCount()
  {
    return $this->executorsCount;
  }
  /** @param int */
  public function setMaxExecutorsCount($maxExecutorsCount)
  {
    $this->maxExecutorsCount = $maxExecutorsCount;
  }
  /** @return int */
  public function getMaxExecutorsCount()
  {
    return $this->maxExecutorsCount;
  }
}

class GoogleCloudDataplexV1TaskInfrastructureSpecContainerImageRuntime extends \Google\Collection
{
  /** @var string */
  public $image;
  /** @var string[] */
  public $javaJars;
  /** @var string[] */
  public $properties;
  /** @var string[] */
  public $pythonPackages;
  protected $collection_key = 'pythonPackages';
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
  /** @param string[] */
  public function setJavaJars($javaJars)
  {
    $this->javaJars = $javaJars;
  }
  /** @return string[] */
  public function getJavaJars()
  {
    return $this->javaJars;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string[] */
  public function setPythonPackages($pythonPackages)
  {
    $this->pythonPackages = $pythonPackages;
  }
  /** @return string[] */
  public function getPythonPackages()
  {
    return $this->pythonPackages;
  }
}

class GoogleCloudDataplexV1TaskInfrastructureSpecVpcNetwork extends \Google\Collection
{
  /** @var string */
  public $network;
  /** @var string[] */
  public $networkTags;
  /** @var string */
  public $subNetwork;
  protected $collection_key = 'networkTags';
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
  public function setNetworkTags($networkTags)
  {
    $this->networkTags = $networkTags;
  }
  /** @return string[] */
  public function getNetworkTags()
  {
    return $this->networkTags;
  }
  /** @param string */
  public function setSubNetwork($subNetwork)
  {
    $this->subNetwork = $subNetwork;
  }
  /** @return string */
  public function getSubNetwork()
  {
    return $this->subNetwork;
  }
}

class GoogleCloudDataplexV1TaskNotebookTaskConfig extends \Google\Collection
{
  /** @var string[] */
  public $archiveUris;
  /** @var string[] */
  public $fileUris;
  /** @var GoogleCloudDataplexV1TaskInfrastructureSpec */
  public $infrastructureSpec;
  /** @var string */
  public $notebook;
  protected $collection_key = 'fileUris';
  protected $infrastructureSpecType = GoogleCloudDataplexV1TaskInfrastructureSpec::class;
  protected $infrastructureSpecDataType = '';
  /** @param string[] */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /** @return string[] */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
  /** @param string[] */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /** @return string[] */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /** @param GoogleCloudDataplexV1TaskInfrastructureSpec */
  public function setInfrastructureSpec(GoogleCloudDataplexV1TaskInfrastructureSpec $infrastructureSpec)
  {
    $this->infrastructureSpec = $infrastructureSpec;
  }
  /** @return GoogleCloudDataplexV1TaskInfrastructureSpec */
  public function getInfrastructureSpec()
  {
    return $this->infrastructureSpec;
  }
  /** @param string */
  public function setNotebook($notebook)
  {
    $this->notebook = $notebook;
  }
  /** @return string */
  public function getNotebook()
  {
    return $this->notebook;
  }
}

class GoogleCloudDataplexV1TaskSparkTaskConfig extends \Google\Collection
{
  /** @var string[] */
  public $archiveUris;
  /** @var string[] */
  public $fileUris;
  /** @var GoogleCloudDataplexV1TaskInfrastructureSpec */
  public $infrastructureSpec;
  /** @var string */
  public $mainClass;
  /** @var string */
  public $mainJarFileUri;
  /** @var string */
  public $pythonScriptFile;
  /** @var string */
  public $sqlScript;
  /** @var string */
  public $sqlScriptFile;
  protected $collection_key = 'fileUris';
  protected $infrastructureSpecType = GoogleCloudDataplexV1TaskInfrastructureSpec::class;
  protected $infrastructureSpecDataType = '';
  /** @param string[] */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /** @return string[] */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
  /** @param string[] */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /** @return string[] */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /** @param GoogleCloudDataplexV1TaskInfrastructureSpec */
  public function setInfrastructureSpec(GoogleCloudDataplexV1TaskInfrastructureSpec $infrastructureSpec)
  {
    $this->infrastructureSpec = $infrastructureSpec;
  }
  /** @return GoogleCloudDataplexV1TaskInfrastructureSpec */
  public function getInfrastructureSpec()
  {
    return $this->infrastructureSpec;
  }
  /** @param string */
  public function setMainClass($mainClass)
  {
    $this->mainClass = $mainClass;
  }
  /** @return string */
  public function getMainClass()
  {
    return $this->mainClass;
  }
  /** @param string */
  public function setMainJarFileUri($mainJarFileUri)
  {
    $this->mainJarFileUri = $mainJarFileUri;
  }
  /** @return string */
  public function getMainJarFileUri()
  {
    return $this->mainJarFileUri;
  }
  /** @param string */
  public function setPythonScriptFile($pythonScriptFile)
  {
    $this->pythonScriptFile = $pythonScriptFile;
  }
  /** @return string */
  public function getPythonScriptFile()
  {
    return $this->pythonScriptFile;
  }
  /** @param string */
  public function setSqlScript($sqlScript)
  {
    $this->sqlScript = $sqlScript;
  }
  /** @return string */
  public function getSqlScript()
  {
    return $this->sqlScript;
  }
  /** @param string */
  public function setSqlScriptFile($sqlScriptFile)
  {
    $this->sqlScriptFile = $sqlScriptFile;
  }
  /** @return string */
  public function getSqlScriptFile()
  {
    return $this->sqlScriptFile;
  }
}

class GoogleCloudDataplexV1TaskTriggerSpec extends \Google\Model
{
  /** @var bool */
  public $disabled;
  /** @var int */
  public $maxRetries;
  /** @var string */
  public $schedule;
  /** @var string */
  public $startTime;
  /** @var string */
  public $type;

  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /** @param int */
  public function setMaxRetries($maxRetries)
  {
    $this->maxRetries = $maxRetries;
  }
  /** @return int */
  public function getMaxRetries()
  {
    return $this->maxRetries;
  }
  /** @param string */
  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return string */
  public function getSchedule()
  {
    return $this->schedule;
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

class GoogleCloudDataplexV1Trigger extends \Google\Model
{
  /** @var GoogleCloudDataplexV1TriggerOnDemand */
  public $onDemand;
  /** @var GoogleCloudDataplexV1TriggerSchedule */
  public $schedule;
  protected $onDemandType = GoogleCloudDataplexV1TriggerOnDemand::class;
  protected $onDemandDataType = '';
  protected $scheduleType = GoogleCloudDataplexV1TriggerSchedule::class;
  protected $scheduleDataType = '';
  /** @param GoogleCloudDataplexV1TriggerOnDemand */
  public function setOnDemand(GoogleCloudDataplexV1TriggerOnDemand $onDemand)
  {
    $this->onDemand = $onDemand;
  }
  /** @return GoogleCloudDataplexV1TriggerOnDemand */
  public function getOnDemand()
  {
    return $this->onDemand;
  }
  /** @param GoogleCloudDataplexV1TriggerSchedule */
  public function setSchedule(GoogleCloudDataplexV1TriggerSchedule $schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return GoogleCloudDataplexV1TriggerSchedule */
  public function getSchedule()
  {
    return $this->schedule;
  }
}

class GoogleCloudDataplexV1TriggerOnDemand extends \Google\Model
{
}

class GoogleCloudDataplexV1TriggerSchedule extends \Google\Model
{
  /** @var string */
  public $cron;

  /** @param string */
  public function setCron($cron)
  {
    $this->cron = $cron;
  }
  /** @return string */
  public function getCron()
  {
    return $this->cron;
  }
}

class GoogleCloudDataplexV1Zone extends \Google\Model
{
  /** @var GoogleCloudDataplexV1AssetStatus */
  public $assetStatus;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var GoogleCloudDataplexV1ZoneDiscoverySpec */
  public $discoverySpec;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var GoogleCloudDataplexV1ZoneResourceSpec */
  public $resourceSpec;
  /** @var string */
  public $state;
  /** @var string */
  public $type;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $assetStatusType = GoogleCloudDataplexV1AssetStatus::class;
  protected $assetStatusDataType = '';
  protected $discoverySpecType = GoogleCloudDataplexV1ZoneDiscoverySpec::class;
  protected $discoverySpecDataType = '';
  protected $resourceSpecType = GoogleCloudDataplexV1ZoneResourceSpec::class;
  protected $resourceSpecDataType = '';
  /** @param GoogleCloudDataplexV1AssetStatus */
  public function setAssetStatus(GoogleCloudDataplexV1AssetStatus $assetStatus)
  {
    $this->assetStatus = $assetStatus;
  }
  /** @return GoogleCloudDataplexV1AssetStatus */
  public function getAssetStatus()
  {
    return $this->assetStatus;
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
  /** @param GoogleCloudDataplexV1ZoneDiscoverySpec */
  public function setDiscoverySpec(GoogleCloudDataplexV1ZoneDiscoverySpec $discoverySpec)
  {
    $this->discoverySpec = $discoverySpec;
  }
  /** @return GoogleCloudDataplexV1ZoneDiscoverySpec */
  public function getDiscoverySpec()
  {
    return $this->discoverySpec;
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
  /** @param GoogleCloudDataplexV1ZoneResourceSpec */
  public function setResourceSpec(GoogleCloudDataplexV1ZoneResourceSpec $resourceSpec)
  {
    $this->resourceSpec = $resourceSpec;
  }
  /** @return GoogleCloudDataplexV1ZoneResourceSpec */
  public function getResourceSpec()
  {
    return $this->resourceSpec;
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

class GoogleCloudDataplexV1ZoneDiscoverySpec extends \Google\Collection
{
  /** @var GoogleCloudDataplexV1ZoneDiscoverySpecCsvOptions */
  public $csvOptions;
  /** @var bool */
  public $enabled;
  /** @var string[] */
  public $excludePatterns;
  /** @var string[] */
  public $includePatterns;
  /** @var GoogleCloudDataplexV1ZoneDiscoverySpecJsonOptions */
  public $jsonOptions;
  /** @var string */
  public $schedule;
  protected $collection_key = 'includePatterns';
  protected $csvOptionsType = GoogleCloudDataplexV1ZoneDiscoverySpecCsvOptions::class;
  protected $csvOptionsDataType = '';
  protected $jsonOptionsType = GoogleCloudDataplexV1ZoneDiscoverySpecJsonOptions::class;
  protected $jsonOptionsDataType = '';
  /** @param GoogleCloudDataplexV1ZoneDiscoverySpecCsvOptions */
  public function setCsvOptions(GoogleCloudDataplexV1ZoneDiscoverySpecCsvOptions $csvOptions)
  {
    $this->csvOptions = $csvOptions;
  }
  /** @return GoogleCloudDataplexV1ZoneDiscoverySpecCsvOptions */
  public function getCsvOptions()
  {
    return $this->csvOptions;
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
  /** @param string[] */
  public function setExcludePatterns($excludePatterns)
  {
    $this->excludePatterns = $excludePatterns;
  }
  /** @return string[] */
  public function getExcludePatterns()
  {
    return $this->excludePatterns;
  }
  /** @param string[] */
  public function setIncludePatterns($includePatterns)
  {
    $this->includePatterns = $includePatterns;
  }
  /** @return string[] */
  public function getIncludePatterns()
  {
    return $this->includePatterns;
  }
  /** @param GoogleCloudDataplexV1ZoneDiscoverySpecJsonOptions */
  public function setJsonOptions(GoogleCloudDataplexV1ZoneDiscoverySpecJsonOptions $jsonOptions)
  {
    $this->jsonOptions = $jsonOptions;
  }
  /** @return GoogleCloudDataplexV1ZoneDiscoverySpecJsonOptions */
  public function getJsonOptions()
  {
    return $this->jsonOptions;
  }
  /** @param string */
  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return string */
  public function getSchedule()
  {
    return $this->schedule;
  }
}

class GoogleCloudDataplexV1ZoneDiscoverySpecCsvOptions extends \Google\Model
{
  /** @var string */
  public $delimiter;
  /** @var bool */
  public $disableTypeInference;
  /** @var string */
  public $encoding;
  /** @var int */
  public $headerRows;

  /** @param string */
  public function setDelimiter($delimiter)
  {
    $this->delimiter = $delimiter;
  }
  /** @return string */
  public function getDelimiter()
  {
    return $this->delimiter;
  }
  /** @param bool */
  public function setDisableTypeInference($disableTypeInference)
  {
    $this->disableTypeInference = $disableTypeInference;
  }
  /** @return bool */
  public function getDisableTypeInference()
  {
    return $this->disableTypeInference;
  }
  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
  }
  /** @param int */
  public function setHeaderRows($headerRows)
  {
    $this->headerRows = $headerRows;
  }
  /** @return int */
  public function getHeaderRows()
  {
    return $this->headerRows;
  }
}

class GoogleCloudDataplexV1ZoneDiscoverySpecJsonOptions extends \Google\Model
{
  /** @var bool */
  public $disableTypeInference;
  /** @var string */
  public $encoding;

  /** @param bool */
  public function setDisableTypeInference($disableTypeInference)
  {
    $this->disableTypeInference = $disableTypeInference;
  }
  /** @return bool */
  public function getDisableTypeInference()
  {
    return $this->disableTypeInference;
  }
  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
  }
}

class GoogleCloudDataplexV1ZoneResourceSpec extends \Google\Model
{
  /** @var string */
  public $locationType;

  /** @param string */
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /** @return string */
  public function getLocationType()
  {
    return $this->locationType;
  }
}

class GoogleCloudLocationListLocationsResponse extends \Google\Collection
{
  /** @var GoogleCloudLocationLocation[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = GoogleCloudLocationLocation::class;
  protected $locationsDataType = 'array';
  /** @param GoogleCloudLocationLocation[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return GoogleCloudLocationLocation[] */
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

class GoogleCloudLocationLocation extends \Google\Model
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

class GoogleLongrunningCancelOperationRequest extends \Google\Model
{
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataplexEmpty::class, 'Google_Service_CloudDataplex_DataplexEmpty');
class_alias(GoogleCloudDataplexV1Action::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Action');
class_alias(GoogleCloudDataplexV1ActionFailedSecurityPolicyApply::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ActionFailedSecurityPolicyApply');
class_alias(GoogleCloudDataplexV1ActionIncompatibleDataSchema::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ActionIncompatibleDataSchema');
class_alias(GoogleCloudDataplexV1ActionInvalidDataFormat::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ActionInvalidDataFormat');
class_alias(GoogleCloudDataplexV1ActionInvalidDataOrganization::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ActionInvalidDataOrganization');
class_alias(GoogleCloudDataplexV1ActionInvalidDataPartition::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ActionInvalidDataPartition');
class_alias(GoogleCloudDataplexV1ActionMissingData::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ActionMissingData');
class_alias(GoogleCloudDataplexV1ActionMissingResource::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ActionMissingResource');
class_alias(GoogleCloudDataplexV1ActionUnauthorizedResource::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ActionUnauthorizedResource');
class_alias(GoogleCloudDataplexV1Asset::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Asset');
class_alias(GoogleCloudDataplexV1AssetDiscoverySpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1AssetDiscoverySpec');
class_alias(GoogleCloudDataplexV1AssetDiscoverySpecCsvOptions::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1AssetDiscoverySpecCsvOptions');
class_alias(GoogleCloudDataplexV1AssetDiscoverySpecJsonOptions::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1AssetDiscoverySpecJsonOptions');
class_alias(GoogleCloudDataplexV1AssetDiscoveryStatus::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1AssetDiscoveryStatus');
class_alias(GoogleCloudDataplexV1AssetDiscoveryStatusStats::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1AssetDiscoveryStatusStats');
class_alias(GoogleCloudDataplexV1AssetResourceSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1AssetResourceSpec');
class_alias(GoogleCloudDataplexV1AssetResourceStatus::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1AssetResourceStatus');
class_alias(GoogleCloudDataplexV1AssetSecurityStatus::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1AssetSecurityStatus');
class_alias(GoogleCloudDataplexV1AssetStatus::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1AssetStatus');
class_alias(GoogleCloudDataplexV1CancelJobRequest::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1CancelJobRequest');
class_alias(GoogleCloudDataplexV1Content::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Content');
class_alias(GoogleCloudDataplexV1ContentNotebook::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ContentNotebook');
class_alias(GoogleCloudDataplexV1ContentSqlScript::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ContentSqlScript');
class_alias(GoogleCloudDataplexV1DataProfileResult::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataProfileResult');
class_alias(GoogleCloudDataplexV1DataProfileResultProfile::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataProfileResultProfile');
class_alias(GoogleCloudDataplexV1DataProfileResultProfileField::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataProfileResultProfileField');
class_alias(GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfo::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfo');
class_alias(GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoDoubleFieldInfo::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoDoubleFieldInfo');
class_alias(GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoIntegerFieldInfo::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoIntegerFieldInfo');
class_alias(GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoStringFieldInfo::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoStringFieldInfo');
class_alias(GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoTopNValue::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataProfileResultProfileFieldProfileInfoTopNValue');
class_alias(GoogleCloudDataplexV1DataProfileSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataProfileSpec');
class_alias(GoogleCloudDataplexV1DataQualityDimensionResult::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityDimensionResult');
class_alias(GoogleCloudDataplexV1DataQualityResult::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityResult');
class_alias(GoogleCloudDataplexV1DataQualityRule::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityRule');
class_alias(GoogleCloudDataplexV1DataQualityRuleNonNullExpectation::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityRuleNonNullExpectation');
class_alias(GoogleCloudDataplexV1DataQualityRuleRangeExpectation::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityRuleRangeExpectation');
class_alias(GoogleCloudDataplexV1DataQualityRuleRegexExpectation::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityRuleRegexExpectation');
class_alias(GoogleCloudDataplexV1DataQualityRuleResult::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityRuleResult');
class_alias(GoogleCloudDataplexV1DataQualityRuleRowConditionExpectation::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityRuleRowConditionExpectation');
class_alias(GoogleCloudDataplexV1DataQualityRuleSetExpectation::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityRuleSetExpectation');
class_alias(GoogleCloudDataplexV1DataQualityRuleStatisticRangeExpectation::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityRuleStatisticRangeExpectation');
class_alias(GoogleCloudDataplexV1DataQualityRuleTableConditionExpectation::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityRuleTableConditionExpectation');
class_alias(GoogleCloudDataplexV1DataQualityRuleUniquenessExpectation::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualityRuleUniquenessExpectation');
class_alias(GoogleCloudDataplexV1DataQualitySpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataQualitySpec');
class_alias(GoogleCloudDataplexV1DataScan::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataScan');
class_alias(GoogleCloudDataplexV1DataScanEvent::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataScanEvent');
class_alias(GoogleCloudDataplexV1DataScanEventDataProfileResult::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataScanEventDataProfileResult');
class_alias(GoogleCloudDataplexV1DataScanEventDataQualityResult::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataScanEventDataQualityResult');
class_alias(GoogleCloudDataplexV1DataScanExecutionSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataScanExecutionSpec');
class_alias(GoogleCloudDataplexV1DataScanJob::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataScanJob');
class_alias(GoogleCloudDataplexV1DataSource::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataSource');
class_alias(GoogleCloudDataplexV1DiscoveryEvent::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DiscoveryEvent');
class_alias(GoogleCloudDataplexV1DiscoveryEventActionDetails::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DiscoveryEventActionDetails');
class_alias(GoogleCloudDataplexV1DiscoveryEventConfigDetails::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DiscoveryEventConfigDetails');
class_alias(GoogleCloudDataplexV1DiscoveryEventEntityDetails::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DiscoveryEventEntityDetails');
class_alias(GoogleCloudDataplexV1DiscoveryEventPartitionDetails::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DiscoveryEventPartitionDetails');
class_alias(GoogleCloudDataplexV1Entity::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Entity');
class_alias(GoogleCloudDataplexV1EntityCompatibilityStatus::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1EntityCompatibilityStatus');
class_alias(GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1EntityCompatibilityStatusCompatibility');
class_alias(GoogleCloudDataplexV1Environment::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Environment');
class_alias(GoogleCloudDataplexV1EnvironmentEndpoints::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1EnvironmentEndpoints');
class_alias(GoogleCloudDataplexV1EnvironmentInfrastructureSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1EnvironmentInfrastructureSpec');
class_alias(GoogleCloudDataplexV1EnvironmentInfrastructureSpecComputeResources::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1EnvironmentInfrastructureSpecComputeResources');
class_alias(GoogleCloudDataplexV1EnvironmentInfrastructureSpecOsImageRuntime::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1EnvironmentInfrastructureSpecOsImageRuntime');
class_alias(GoogleCloudDataplexV1EnvironmentSessionSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1EnvironmentSessionSpec');
class_alias(GoogleCloudDataplexV1EnvironmentSessionStatus::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1EnvironmentSessionStatus');
class_alias(GoogleCloudDataplexV1Job::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Job');
class_alias(GoogleCloudDataplexV1JobEvent::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1JobEvent');
class_alias(GoogleCloudDataplexV1Lake::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Lake');
class_alias(GoogleCloudDataplexV1LakeMetastore::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1LakeMetastore');
class_alias(GoogleCloudDataplexV1LakeMetastoreStatus::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1LakeMetastoreStatus');
class_alias(GoogleCloudDataplexV1ListActionsResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListActionsResponse');
class_alias(GoogleCloudDataplexV1ListAssetsResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListAssetsResponse');
class_alias(GoogleCloudDataplexV1ListContentResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListContentResponse');
class_alias(GoogleCloudDataplexV1ListDataScanJobsResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListDataScanJobsResponse');
class_alias(GoogleCloudDataplexV1ListDataScansResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListDataScansResponse');
class_alias(GoogleCloudDataplexV1ListEntitiesResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListEntitiesResponse');
class_alias(GoogleCloudDataplexV1ListEnvironmentsResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListEnvironmentsResponse');
class_alias(GoogleCloudDataplexV1ListJobsResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListJobsResponse');
class_alias(GoogleCloudDataplexV1ListLakesResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListLakesResponse');
class_alias(GoogleCloudDataplexV1ListPartitionsResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListPartitionsResponse');
class_alias(GoogleCloudDataplexV1ListSessionsResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListSessionsResponse');
class_alias(GoogleCloudDataplexV1ListTasksResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListTasksResponse');
class_alias(GoogleCloudDataplexV1ListZonesResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ListZonesResponse');
class_alias(GoogleCloudDataplexV1OperationMetadata::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1OperationMetadata');
class_alias(GoogleCloudDataplexV1Partition::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Partition');
class_alias(GoogleCloudDataplexV1RunDataScanRequest::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1RunDataScanRequest');
class_alias(GoogleCloudDataplexV1RunDataScanResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1RunDataScanResponse');
class_alias(GoogleCloudDataplexV1ScannedData::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ScannedData');
class_alias(GoogleCloudDataplexV1ScannedDataIncrementalField::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ScannedDataIncrementalField');
class_alias(GoogleCloudDataplexV1Schema::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Schema');
class_alias(GoogleCloudDataplexV1SchemaPartitionField::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1SchemaPartitionField');
class_alias(GoogleCloudDataplexV1SchemaSchemaField::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1SchemaSchemaField');
class_alias(GoogleCloudDataplexV1Session::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Session');
class_alias(GoogleCloudDataplexV1SessionEvent::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1SessionEvent');
class_alias(GoogleCloudDataplexV1SessionEventQueryDetail::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1SessionEventQueryDetail');
class_alias(GoogleCloudDataplexV1StorageFormat::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1StorageFormat');
class_alias(GoogleCloudDataplexV1StorageFormatCsvOptions::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1StorageFormatCsvOptions');
class_alias(GoogleCloudDataplexV1StorageFormatJsonOptions::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1StorageFormatJsonOptions');
class_alias(GoogleCloudDataplexV1Task::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Task');
class_alias(GoogleCloudDataplexV1TaskExecutionSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TaskExecutionSpec');
class_alias(GoogleCloudDataplexV1TaskExecutionStatus::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TaskExecutionStatus');
class_alias(GoogleCloudDataplexV1TaskInfrastructureSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TaskInfrastructureSpec');
class_alias(GoogleCloudDataplexV1TaskInfrastructureSpecBatchComputeResources::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TaskInfrastructureSpecBatchComputeResources');
class_alias(GoogleCloudDataplexV1TaskInfrastructureSpecContainerImageRuntime::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TaskInfrastructureSpecContainerImageRuntime');
class_alias(GoogleCloudDataplexV1TaskInfrastructureSpecVpcNetwork::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TaskInfrastructureSpecVpcNetwork');
class_alias(GoogleCloudDataplexV1TaskNotebookTaskConfig::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TaskNotebookTaskConfig');
class_alias(GoogleCloudDataplexV1TaskSparkTaskConfig::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TaskSparkTaskConfig');
class_alias(GoogleCloudDataplexV1TaskTriggerSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TaskTriggerSpec');
class_alias(GoogleCloudDataplexV1Trigger::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Trigger');
class_alias(GoogleCloudDataplexV1TriggerOnDemand::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TriggerOnDemand');
class_alias(GoogleCloudDataplexV1TriggerSchedule::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1TriggerSchedule');
class_alias(GoogleCloudDataplexV1Zone::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1Zone');
class_alias(GoogleCloudDataplexV1ZoneDiscoverySpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ZoneDiscoverySpec');
class_alias(GoogleCloudDataplexV1ZoneDiscoverySpecCsvOptions::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ZoneDiscoverySpecCsvOptions');
class_alias(GoogleCloudDataplexV1ZoneDiscoverySpecJsonOptions::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ZoneDiscoverySpecJsonOptions');
class_alias(GoogleCloudDataplexV1ZoneResourceSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ZoneResourceSpec');
class_alias(GoogleCloudLocationListLocationsResponse::class, 'Google_Service_CloudDataplex_GoogleCloudLocationListLocationsResponse');
class_alias(GoogleCloudLocationLocation::class, 'Google_Service_CloudDataplex_GoogleCloudLocationLocation');
class_alias(GoogleIamV1AuditConfig::class, 'Google_Service_CloudDataplex_GoogleIamV1AuditConfig');
class_alias(GoogleIamV1AuditLogConfig::class, 'Google_Service_CloudDataplex_GoogleIamV1AuditLogConfig');
class_alias(GoogleIamV1Binding::class, 'Google_Service_CloudDataplex_GoogleIamV1Binding');
class_alias(GoogleIamV1Policy::class, 'Google_Service_CloudDataplex_GoogleIamV1Policy');
class_alias(GoogleIamV1SetIamPolicyRequest::class, 'Google_Service_CloudDataplex_GoogleIamV1SetIamPolicyRequest');
class_alias(GoogleIamV1TestIamPermissionsRequest::class, 'Google_Service_CloudDataplex_GoogleIamV1TestIamPermissionsRequest');
class_alias(GoogleIamV1TestIamPermissionsResponse::class, 'Google_Service_CloudDataplex_GoogleIamV1TestIamPermissionsResponse');
class_alias(GoogleLongrunningCancelOperationRequest::class, 'Google_Service_CloudDataplex_GoogleLongrunningCancelOperationRequest');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_CloudDataplex_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_CloudDataplex_GoogleLongrunningOperation');
class_alias(GoogleRpcStatus::class, 'Google_Service_CloudDataplex_GoogleRpcStatus');
class_alias(GoogleTypeExpr::class, 'Google_Service_CloudDataplex_GoogleTypeExpr');
