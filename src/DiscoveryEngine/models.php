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

namespace Google\Service\DiscoveryEngine;

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

class GoogleCloudDiscoveryengineV1alphaImportDocumentsMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $failureCount;
  /** @var string */
  public $successCount;
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
  public function setFailureCount($failureCount)
  {
    $this->failureCount = $failureCount;
  }
  /** @return string */
  public function getFailureCount()
  {
    return $this->failureCount;
  }
  /** @param string */
  public function setSuccessCount($successCount)
  {
    $this->successCount = $successCount;
  }
  /** @return string */
  public function getSuccessCount()
  {
    return $this->successCount;
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

class GoogleCloudDiscoveryengineV1alphaImportDocumentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDiscoveryengineV1alphaImportErrorConfig */
  public $errorConfig;
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  protected $collection_key = 'errorSamples';
  protected $errorConfigType = GoogleCloudDiscoveryengineV1alphaImportErrorConfig::class;
  protected $errorConfigDataType = '';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  /** @param GoogleCloudDiscoveryengineV1alphaImportErrorConfig */
  public function setErrorConfig(GoogleCloudDiscoveryengineV1alphaImportErrorConfig $errorConfig)
  {
    $this->errorConfig = $errorConfig;
  }
  /** @return GoogleCloudDiscoveryengineV1alphaImportErrorConfig */
  public function getErrorConfig()
  {
    return $this->errorConfig;
  }
  /** @param GoogleRpcStatus[] */
  public function setErrorSamples($errorSamples)
  {
    $this->errorSamples = $errorSamples;
  }
  /** @return GoogleRpcStatus[] */
  public function getErrorSamples()
  {
    return $this->errorSamples;
  }
}

class GoogleCloudDiscoveryengineV1alphaImportErrorConfig extends \Google\Model
{
  /** @var string */
  public $gcsPrefix;

  /** @param string */
  public function setGcsPrefix($gcsPrefix)
  {
    $this->gcsPrefix = $gcsPrefix;
  }
  /** @return string */
  public function getGcsPrefix()
  {
    return $this->gcsPrefix;
  }
}

class GoogleCloudDiscoveryengineV1alphaImportUserEventsMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $failureCount;
  /** @var string */
  public $successCount;
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
  public function setFailureCount($failureCount)
  {
    $this->failureCount = $failureCount;
  }
  /** @return string */
  public function getFailureCount()
  {
    return $this->failureCount;
  }
  /** @param string */
  public function setSuccessCount($successCount)
  {
    $this->successCount = $successCount;
  }
  /** @return string */
  public function getSuccessCount()
  {
    return $this->successCount;
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

class GoogleCloudDiscoveryengineV1alphaImportUserEventsResponse extends \Google\Collection
{
  /** @var GoogleCloudDiscoveryengineV1alphaImportErrorConfig */
  public $errorConfig;
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var string */
  public $joinedEventsCount;
  /** @var string */
  public $unjoinedEventsCount;
  protected $collection_key = 'errorSamples';
  protected $errorConfigType = GoogleCloudDiscoveryengineV1alphaImportErrorConfig::class;
  protected $errorConfigDataType = '';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  /** @param GoogleCloudDiscoveryengineV1alphaImportErrorConfig */
  public function setErrorConfig(GoogleCloudDiscoveryengineV1alphaImportErrorConfig $errorConfig)
  {
    $this->errorConfig = $errorConfig;
  }
  /** @return GoogleCloudDiscoveryengineV1alphaImportErrorConfig */
  public function getErrorConfig()
  {
    return $this->errorConfig;
  }
  /** @param GoogleRpcStatus[] */
  public function setErrorSamples($errorSamples)
  {
    $this->errorSamples = $errorSamples;
  }
  /** @return GoogleRpcStatus[] */
  public function getErrorSamples()
  {
    return $this->errorSamples;
  }
  /** @param string */
  public function setJoinedEventsCount($joinedEventsCount)
  {
    $this->joinedEventsCount = $joinedEventsCount;
  }
  /** @return string */
  public function getJoinedEventsCount()
  {
    return $this->joinedEventsCount;
  }
  /** @param string */
  public function setUnjoinedEventsCount($unjoinedEventsCount)
  {
    $this->unjoinedEventsCount = $unjoinedEventsCount;
  }
  /** @return string */
  public function getUnjoinedEventsCount()
  {
    return $this->unjoinedEventsCount;
  }
}

class GoogleCloudDiscoveryengineV1betaBigQuerySource extends \Google\Model
{
  /** @var string */
  public $dataSchema;
  /** @var string */
  public $datasetId;
  /** @var string */
  public $gcsStagingDir;
  /** @var GoogleTypeDate */
  public $partitionDate;
  /** @var string */
  public $projectId;
  /** @var string */
  public $tableId;
  protected $partitionDateType = GoogleTypeDate::class;
  protected $partitionDateDataType = '';
  /** @param string */
  public function setDataSchema($dataSchema)
  {
    $this->dataSchema = $dataSchema;
  }
  /** @return string */
  public function getDataSchema()
  {
    return $this->dataSchema;
  }
  /** @param string */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /** @return string */
  public function getDatasetId()
  {
    return $this->datasetId;
  }
  /** @param string */
  public function setGcsStagingDir($gcsStagingDir)
  {
    $this->gcsStagingDir = $gcsStagingDir;
  }
  /** @return string */
  public function getGcsStagingDir()
  {
    return $this->gcsStagingDir;
  }
  /** @param GoogleTypeDate */
  public function setPartitionDate(GoogleTypeDate $partitionDate)
  {
    $this->partitionDate = $partitionDate;
  }
  /** @return GoogleTypeDate */
  public function getPartitionDate()
  {
    return $this->partitionDate;
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
  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }
  /** @return string */
  public function getTableId()
  {
    return $this->tableId;
  }
}

class GoogleCloudDiscoveryengineV1betaCompletionInfo extends \Google\Model
{
  /** @var int */
  public $selectedPosition;
  /** @var string */
  public $selectedSuggestion;

  /** @param int */
  public function setSelectedPosition($selectedPosition)
  {
    $this->selectedPosition = $selectedPosition;
  }
  /** @return int */
  public function getSelectedPosition()
  {
    return $this->selectedPosition;
  }
  /** @param string */
  public function setSelectedSuggestion($selectedSuggestion)
  {
    $this->selectedSuggestion = $selectedSuggestion;
  }
  /** @return string */
  public function getSelectedSuggestion()
  {
    return $this->selectedSuggestion;
  }
}

class GoogleCloudDiscoveryengineV1betaCustomAttribute extends \Google\Collection
{
  public $numbers;
  /** @var string[] */
  public $text;
  protected $collection_key = 'text';
  public function setNumbers($numbers)
  {
    $this->numbers = $numbers;
  }
  public function getNumbers()
  {
    return $this->numbers;
  }
  /** @param string[] */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string[] */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDiscoveryengineV1betaDocument extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $jsonData;
  /** @var string */
  public $name;
  /** @var string */
  public $parentDocumentId;
  /** @var string */
  public $schemaId;
  /** @var array[] */
  public $structData;

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
  public function setJsonData($jsonData)
  {
    $this->jsonData = $jsonData;
  }
  /** @return string */
  public function getJsonData()
  {
    return $this->jsonData;
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
  public function setParentDocumentId($parentDocumentId)
  {
    $this->parentDocumentId = $parentDocumentId;
  }
  /** @return string */
  public function getParentDocumentId()
  {
    return $this->parentDocumentId;
  }
  /** @param string */
  public function setSchemaId($schemaId)
  {
    $this->schemaId = $schemaId;
  }
  /** @return string */
  public function getSchemaId()
  {
    return $this->schemaId;
  }
  /** @param array[] */
  public function setStructData($structData)
  {
    $this->structData = $structData;
  }
  /** @return array[] */
  public function getStructData()
  {
    return $this->structData;
  }
}

class GoogleCloudDiscoveryengineV1betaDocumentInfo extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string[] */
  public $promotionIds;
  /** @var int */
  public $quantity;
  protected $collection_key = 'promotionIds';
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
  /** @param string[] */
  public function setPromotionIds($promotionIds)
  {
    $this->promotionIds = $promotionIds;
  }
  /** @return string[] */
  public function getPromotionIds()
  {
    return $this->promotionIds;
  }
  /** @param int */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return int */
  public function getQuantity()
  {
    return $this->quantity;
  }
}

class GoogleCloudDiscoveryengineV1betaGcsSource extends \Google\Collection
{
  /** @var string */
  public $dataSchema;
  /** @var string[] */
  public $inputUris;
  protected $collection_key = 'inputUris';
  /** @param string */
  public function setDataSchema($dataSchema)
  {
    $this->dataSchema = $dataSchema;
  }
  /** @return string */
  public function getDataSchema()
  {
    return $this->dataSchema;
  }
  /** @param string[] */
  public function setInputUris($inputUris)
  {
    $this->inputUris = $inputUris;
  }
  /** @return string[] */
  public function getInputUris()
  {
    return $this->inputUris;
  }
}

class GoogleCloudDiscoveryengineV1betaImportDocumentsMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $failureCount;
  /** @var string */
  public $successCount;
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
  public function setFailureCount($failureCount)
  {
    $this->failureCount = $failureCount;
  }
  /** @return string */
  public function getFailureCount()
  {
    return $this->failureCount;
  }
  /** @param string */
  public function setSuccessCount($successCount)
  {
    $this->successCount = $successCount;
  }
  /** @return string */
  public function getSuccessCount()
  {
    return $this->successCount;
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

class GoogleCloudDiscoveryengineV1betaImportDocumentsRequest extends \Google\Model
{
  /** @var GoogleCloudDiscoveryengineV1betaBigQuerySource */
  public $bigquerySource;
  /** @var GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public $errorConfig;
  /** @var GoogleCloudDiscoveryengineV1betaGcsSource */
  public $gcsSource;
  /** @var GoogleCloudDiscoveryengineV1betaImportDocumentsRequestInlineSource */
  public $inlineSource;
  /** @var string */
  public $reconciliationMode;
  protected $bigquerySourceType = GoogleCloudDiscoveryengineV1betaBigQuerySource::class;
  protected $bigquerySourceDataType = '';
  protected $errorConfigType = GoogleCloudDiscoveryengineV1betaImportErrorConfig::class;
  protected $errorConfigDataType = '';
  protected $gcsSourceType = GoogleCloudDiscoveryengineV1betaGcsSource::class;
  protected $gcsSourceDataType = '';
  protected $inlineSourceType = GoogleCloudDiscoveryengineV1betaImportDocumentsRequestInlineSource::class;
  protected $inlineSourceDataType = '';
  /** @param GoogleCloudDiscoveryengineV1betaBigQuerySource */
  public function setBigquerySource(GoogleCloudDiscoveryengineV1betaBigQuerySource $bigquerySource)
  {
    $this->bigquerySource = $bigquerySource;
  }
  /** @return GoogleCloudDiscoveryengineV1betaBigQuerySource */
  public function getBigquerySource()
  {
    return $this->bigquerySource;
  }
  /** @param GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public function setErrorConfig(GoogleCloudDiscoveryengineV1betaImportErrorConfig $errorConfig)
  {
    $this->errorConfig = $errorConfig;
  }
  /** @return GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public function getErrorConfig()
  {
    return $this->errorConfig;
  }
  /** @param GoogleCloudDiscoveryengineV1betaGcsSource */
  public function setGcsSource(GoogleCloudDiscoveryengineV1betaGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudDiscoveryengineV1betaGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param GoogleCloudDiscoveryengineV1betaImportDocumentsRequestInlineSource */
  public function setInlineSource(GoogleCloudDiscoveryengineV1betaImportDocumentsRequestInlineSource $inlineSource)
  {
    $this->inlineSource = $inlineSource;
  }
  /** @return GoogleCloudDiscoveryengineV1betaImportDocumentsRequestInlineSource */
  public function getInlineSource()
  {
    return $this->inlineSource;
  }
  /** @param string */
  public function setReconciliationMode($reconciliationMode)
  {
    $this->reconciliationMode = $reconciliationMode;
  }
  /** @return string */
  public function getReconciliationMode()
  {
    return $this->reconciliationMode;
  }
}

class GoogleCloudDiscoveryengineV1betaImportDocumentsRequestInlineSource extends \Google\Collection
{
  /** @var GoogleCloudDiscoveryengineV1betaDocument[] */
  public $documents;
  protected $collection_key = 'documents';
  protected $documentsType = GoogleCloudDiscoveryengineV1betaDocument::class;
  protected $documentsDataType = 'array';
  /** @param GoogleCloudDiscoveryengineV1betaDocument[] */
  public function setDocuments($documents)
  {
    $this->documents = $documents;
  }
  /** @return GoogleCloudDiscoveryengineV1betaDocument[] */
  public function getDocuments()
  {
    return $this->documents;
  }
}

class GoogleCloudDiscoveryengineV1betaImportDocumentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public $errorConfig;
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  protected $collection_key = 'errorSamples';
  protected $errorConfigType = GoogleCloudDiscoveryengineV1betaImportErrorConfig::class;
  protected $errorConfigDataType = '';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  /** @param GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public function setErrorConfig(GoogleCloudDiscoveryengineV1betaImportErrorConfig $errorConfig)
  {
    $this->errorConfig = $errorConfig;
  }
  /** @return GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public function getErrorConfig()
  {
    return $this->errorConfig;
  }
  /** @param GoogleRpcStatus[] */
  public function setErrorSamples($errorSamples)
  {
    $this->errorSamples = $errorSamples;
  }
  /** @return GoogleRpcStatus[] */
  public function getErrorSamples()
  {
    return $this->errorSamples;
  }
}

class GoogleCloudDiscoveryengineV1betaImportErrorConfig extends \Google\Model
{
  /** @var string */
  public $gcsPrefix;

  /** @param string */
  public function setGcsPrefix($gcsPrefix)
  {
    $this->gcsPrefix = $gcsPrefix;
  }
  /** @return string */
  public function getGcsPrefix()
  {
    return $this->gcsPrefix;
  }
}

class GoogleCloudDiscoveryengineV1betaImportUserEventsMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $failureCount;
  /** @var string */
  public $successCount;
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
  public function setFailureCount($failureCount)
  {
    $this->failureCount = $failureCount;
  }
  /** @return string */
  public function getFailureCount()
  {
    return $this->failureCount;
  }
  /** @param string */
  public function setSuccessCount($successCount)
  {
    $this->successCount = $successCount;
  }
  /** @return string */
  public function getSuccessCount()
  {
    return $this->successCount;
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

class GoogleCloudDiscoveryengineV1betaImportUserEventsRequest extends \Google\Model
{
  /** @var GoogleCloudDiscoveryengineV1betaBigQuerySource */
  public $bigquerySource;
  /** @var GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public $errorConfig;
  /** @var GoogleCloudDiscoveryengineV1betaGcsSource */
  public $gcsSource;
  /** @var GoogleCloudDiscoveryengineV1betaImportUserEventsRequestInlineSource */
  public $inlineSource;
  protected $bigquerySourceType = GoogleCloudDiscoveryengineV1betaBigQuerySource::class;
  protected $bigquerySourceDataType = '';
  protected $errorConfigType = GoogleCloudDiscoveryengineV1betaImportErrorConfig::class;
  protected $errorConfigDataType = '';
  protected $gcsSourceType = GoogleCloudDiscoveryengineV1betaGcsSource::class;
  protected $gcsSourceDataType = '';
  protected $inlineSourceType = GoogleCloudDiscoveryengineV1betaImportUserEventsRequestInlineSource::class;
  protected $inlineSourceDataType = '';
  /** @param GoogleCloudDiscoveryengineV1betaBigQuerySource */
  public function setBigquerySource(GoogleCloudDiscoveryengineV1betaBigQuerySource $bigquerySource)
  {
    $this->bigquerySource = $bigquerySource;
  }
  /** @return GoogleCloudDiscoveryengineV1betaBigQuerySource */
  public function getBigquerySource()
  {
    return $this->bigquerySource;
  }
  /** @param GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public function setErrorConfig(GoogleCloudDiscoveryengineV1betaImportErrorConfig $errorConfig)
  {
    $this->errorConfig = $errorConfig;
  }
  /** @return GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public function getErrorConfig()
  {
    return $this->errorConfig;
  }
  /** @param GoogleCloudDiscoveryengineV1betaGcsSource */
  public function setGcsSource(GoogleCloudDiscoveryengineV1betaGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudDiscoveryengineV1betaGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param GoogleCloudDiscoveryengineV1betaImportUserEventsRequestInlineSource */
  public function setInlineSource(GoogleCloudDiscoveryengineV1betaImportUserEventsRequestInlineSource $inlineSource)
  {
    $this->inlineSource = $inlineSource;
  }
  /** @return GoogleCloudDiscoveryengineV1betaImportUserEventsRequestInlineSource */
  public function getInlineSource()
  {
    return $this->inlineSource;
  }
}

class GoogleCloudDiscoveryengineV1betaImportUserEventsRequestInlineSource extends \Google\Collection
{
  /** @var GoogleCloudDiscoveryengineV1betaUserEvent[] */
  public $userEvents;
  protected $collection_key = 'userEvents';
  protected $userEventsType = GoogleCloudDiscoveryengineV1betaUserEvent::class;
  protected $userEventsDataType = 'array';
  /** @param GoogleCloudDiscoveryengineV1betaUserEvent[] */
  public function setUserEvents($userEvents)
  {
    $this->userEvents = $userEvents;
  }
  /** @return GoogleCloudDiscoveryengineV1betaUserEvent[] */
  public function getUserEvents()
  {
    return $this->userEvents;
  }
}

class GoogleCloudDiscoveryengineV1betaImportUserEventsResponse extends \Google\Collection
{
  /** @var GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public $errorConfig;
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var string */
  public $joinedEventsCount;
  /** @var string */
  public $unjoinedEventsCount;
  protected $collection_key = 'errorSamples';
  protected $errorConfigType = GoogleCloudDiscoveryengineV1betaImportErrorConfig::class;
  protected $errorConfigDataType = '';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  /** @param GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public function setErrorConfig(GoogleCloudDiscoveryengineV1betaImportErrorConfig $errorConfig)
  {
    $this->errorConfig = $errorConfig;
  }
  /** @return GoogleCloudDiscoveryengineV1betaImportErrorConfig */
  public function getErrorConfig()
  {
    return $this->errorConfig;
  }
  /** @param GoogleRpcStatus[] */
  public function setErrorSamples($errorSamples)
  {
    $this->errorSamples = $errorSamples;
  }
  /** @return GoogleRpcStatus[] */
  public function getErrorSamples()
  {
    return $this->errorSamples;
  }
  /** @param string */
  public function setJoinedEventsCount($joinedEventsCount)
  {
    $this->joinedEventsCount = $joinedEventsCount;
  }
  /** @return string */
  public function getJoinedEventsCount()
  {
    return $this->joinedEventsCount;
  }
  /** @param string */
  public function setUnjoinedEventsCount($unjoinedEventsCount)
  {
    $this->unjoinedEventsCount = $unjoinedEventsCount;
  }
  /** @return string */
  public function getUnjoinedEventsCount()
  {
    return $this->unjoinedEventsCount;
  }
}

class GoogleCloudDiscoveryengineV1betaListDocumentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDiscoveryengineV1betaDocument[] */
  public $documents;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'documents';
  protected $documentsType = GoogleCloudDiscoveryengineV1betaDocument::class;
  protected $documentsDataType = 'array';
  /** @param GoogleCloudDiscoveryengineV1betaDocument[] */
  public function setDocuments($documents)
  {
    $this->documents = $documents;
  }
  /** @return GoogleCloudDiscoveryengineV1betaDocument[] */
  public function getDocuments()
  {
    return $this->documents;
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

class GoogleCloudDiscoveryengineV1betaMediaInfo extends \Google\Model
{
  /** @var string */
  public $mediaProgressDuration;
  /** @var float */
  public $mediaProgressPercentage;

  /** @param string */
  public function setMediaProgressDuration($mediaProgressDuration)
  {
    $this->mediaProgressDuration = $mediaProgressDuration;
  }
  /** @return string */
  public function getMediaProgressDuration()
  {
    return $this->mediaProgressDuration;
  }
  /** @param float */
  public function setMediaProgressPercentage($mediaProgressPercentage)
  {
    $this->mediaProgressPercentage = $mediaProgressPercentage;
  }
  /** @return float */
  public function getMediaProgressPercentage()
  {
    return $this->mediaProgressPercentage;
  }
}

class GoogleCloudDiscoveryengineV1betaPageInfo extends \Google\Model
{
  /** @var string */
  public $pageCategory;
  /** @var string */
  public $pageviewId;
  /** @var string */
  public $referrerUri;
  /** @var string */
  public $uri;

  /** @param string */
  public function setPageCategory($pageCategory)
  {
    $this->pageCategory = $pageCategory;
  }
  /** @return string */
  public function getPageCategory()
  {
    return $this->pageCategory;
  }
  /** @param string */
  public function setPageviewId($pageviewId)
  {
    $this->pageviewId = $pageviewId;
  }
  /** @return string */
  public function getPageviewId()
  {
    return $this->pageviewId;
  }
  /** @param string */
  public function setReferrerUri($referrerUri)
  {
    $this->referrerUri = $referrerUri;
  }
  /** @return string */
  public function getReferrerUri()
  {
    return $this->referrerUri;
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

class GoogleCloudDiscoveryengineV1betaPanelInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $panelId;
  /** @var int */
  public $panelPosition;
  /** @var int */
  public $totalPanels;

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
  public function setPanelId($panelId)
  {
    $this->panelId = $panelId;
  }
  /** @return string */
  public function getPanelId()
  {
    return $this->panelId;
  }
  /** @param int */
  public function setPanelPosition($panelPosition)
  {
    $this->panelPosition = $panelPosition;
  }
  /** @return int */
  public function getPanelPosition()
  {
    return $this->panelPosition;
  }
  /** @param int */
  public function setTotalPanels($totalPanels)
  {
    $this->totalPanels = $totalPanels;
  }
  /** @return int */
  public function getTotalPanels()
  {
    return $this->totalPanels;
  }
}

class GoogleCloudDiscoveryengineV1betaRecommendRequest extends \Google\Model
{
  /** @var string */
  public $filter;
  /** @var int */
  public $pageSize;
  /** @var array[] */
  public $params;
  /** @var GoogleCloudDiscoveryengineV1betaUserEvent */
  public $userEvent;
  /** @var string[] */
  public $userLabels;
  /** @var bool */
  public $validateOnly;
  protected $userEventType = GoogleCloudDiscoveryengineV1betaUserEvent::class;
  protected $userEventDataType = '';
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
  /** @param array[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return array[] */
  public function getParams()
  {
    return $this->params;
  }
  /** @param GoogleCloudDiscoveryengineV1betaUserEvent */
  public function setUserEvent(GoogleCloudDiscoveryengineV1betaUserEvent $userEvent)
  {
    $this->userEvent = $userEvent;
  }
  /** @return GoogleCloudDiscoveryengineV1betaUserEvent */
  public function getUserEvent()
  {
    return $this->userEvent;
  }
  /** @param string[] */
  public function setUserLabels($userLabels)
  {
    $this->userLabels = $userLabels;
  }
  /** @return string[] */
  public function getUserLabels()
  {
    return $this->userLabels;
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

class GoogleCloudDiscoveryengineV1betaRecommendResponse extends \Google\Collection
{
  /** @var string */
  public $attributionToken;
  /** @var string[] */
  public $missingIds;
  /** @var GoogleCloudDiscoveryengineV1betaRecommendResponseRecommendationResult[] */
  public $results;
  /** @var bool */
  public $validateOnly;
  protected $collection_key = 'results';
  protected $resultsType = GoogleCloudDiscoveryengineV1betaRecommendResponseRecommendationResult::class;
  protected $resultsDataType = 'array';
  /** @param string */
  public function setAttributionToken($attributionToken)
  {
    $this->attributionToken = $attributionToken;
  }
  /** @return string */
  public function getAttributionToken()
  {
    return $this->attributionToken;
  }
  /** @param string[] */
  public function setMissingIds($missingIds)
  {
    $this->missingIds = $missingIds;
  }
  /** @return string[] */
  public function getMissingIds()
  {
    return $this->missingIds;
  }
  /** @param GoogleCloudDiscoveryengineV1betaRecommendResponseRecommendationResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudDiscoveryengineV1betaRecommendResponseRecommendationResult[] */
  public function getResults()
  {
    return $this->results;
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

class GoogleCloudDiscoveryengineV1betaRecommendResponseRecommendationResult extends \Google\Model
{
  /** @var GoogleCloudDiscoveryengineV1betaDocument */
  public $document;
  /** @var string */
  public $id;
  /** @var array[] */
  public $metadata;
  protected $documentType = GoogleCloudDiscoveryengineV1betaDocument::class;
  protected $documentDataType = '';
  /** @param GoogleCloudDiscoveryengineV1betaDocument */
  public function setDocument(GoogleCloudDiscoveryengineV1betaDocument $document)
  {
    $this->document = $document;
  }
  /** @return GoogleCloudDiscoveryengineV1betaDocument */
  public function getDocument()
  {
    return $this->document;
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
}

class GoogleCloudDiscoveryengineV1betaSearchInfo extends \Google\Model
{
  /** @var int */
  public $offset;
  /** @var string */
  public $orderBy;
  /** @var string */
  public $searchQuery;

  /** @param int */
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }
  /** @return int */
  public function getOffset()
  {
    return $this->offset;
  }
  /** @param string */
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  /** @return string */
  public function getOrderBy()
  {
    return $this->orderBy;
  }
  /** @param string */
  public function setSearchQuery($searchQuery)
  {
    $this->searchQuery = $searchQuery;
  }
  /** @return string */
  public function getSearchQuery()
  {
    return $this->searchQuery;
  }
}

class GoogleCloudDiscoveryengineV1betaTransactionInfo extends \Google\Model
{
  /** @var float */
  public $cost;
  /** @var string */
  public $currency;
  /** @var float */
  public $discountValue;
  /** @var float */
  public $tax;
  /** @var string */
  public $transactionId;
  /** @var float */
  public $value;

  /** @param float */
  public function setCost($cost)
  {
    $this->cost = $cost;
  }
  /** @return float */
  public function getCost()
  {
    return $this->cost;
  }
  /** @param string */
  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }
  /** @return string */
  public function getCurrency()
  {
    return $this->currency;
  }
  /** @param float */
  public function setDiscountValue($discountValue)
  {
    $this->discountValue = $discountValue;
  }
  /** @return float */
  public function getDiscountValue()
  {
    return $this->discountValue;
  }
  /** @param float */
  public function setTax($tax)
  {
    $this->tax = $tax;
  }
  /** @return float */
  public function getTax()
  {
    return $this->tax;
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
  /** @param float */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return float */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudDiscoveryengineV1betaUserEvent extends \Google\Collection
{
  /** @var GoogleCloudDiscoveryengineV1betaCustomAttribute[] */
  public $attributes;
  /** @var string */
  public $attributionToken;
  /** @var GoogleCloudDiscoveryengineV1betaCompletionInfo */
  public $completionInfo;
  /** @var bool */
  public $directUserRequest;
  /** @var GoogleCloudDiscoveryengineV1betaDocumentInfo[] */
  public $documents;
  /** @var string */
  public $eventTime;
  /** @var string */
  public $eventType;
  /** @var string */
  public $filter;
  /** @var GoogleCloudDiscoveryengineV1betaMediaInfo */
  public $mediaInfo;
  /** @var GoogleCloudDiscoveryengineV1betaPageInfo */
  public $pageInfo;
  /** @var GoogleCloudDiscoveryengineV1betaPanelInfo */
  public $panel;
  /** @var string[] */
  public $promotionIds;
  /** @var GoogleCloudDiscoveryengineV1betaSearchInfo */
  public $searchInfo;
  /** @var string */
  public $sessionId;
  /** @var string[] */
  public $tagIds;
  /** @var GoogleCloudDiscoveryengineV1betaTransactionInfo */
  public $transactionInfo;
  /** @var GoogleCloudDiscoveryengineV1betaUserInfo */
  public $userInfo;
  /** @var string */
  public $userPseudoId;
  protected $collection_key = 'tagIds';
  protected $attributesType = GoogleCloudDiscoveryengineV1betaCustomAttribute::class;
  protected $attributesDataType = 'map';
  protected $completionInfoType = GoogleCloudDiscoveryengineV1betaCompletionInfo::class;
  protected $completionInfoDataType = '';
  protected $documentsType = GoogleCloudDiscoveryengineV1betaDocumentInfo::class;
  protected $documentsDataType = 'array';
  protected $mediaInfoType = GoogleCloudDiscoveryengineV1betaMediaInfo::class;
  protected $mediaInfoDataType = '';
  protected $pageInfoType = GoogleCloudDiscoveryengineV1betaPageInfo::class;
  protected $pageInfoDataType = '';
  protected $panelType = GoogleCloudDiscoveryengineV1betaPanelInfo::class;
  protected $panelDataType = '';
  protected $searchInfoType = GoogleCloudDiscoveryengineV1betaSearchInfo::class;
  protected $searchInfoDataType = '';
  protected $transactionInfoType = GoogleCloudDiscoveryengineV1betaTransactionInfo::class;
  protected $transactionInfoDataType = '';
  protected $userInfoType = GoogleCloudDiscoveryengineV1betaUserInfo::class;
  protected $userInfoDataType = '';
  /** @param GoogleCloudDiscoveryengineV1betaCustomAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudDiscoveryengineV1betaCustomAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setAttributionToken($attributionToken)
  {
    $this->attributionToken = $attributionToken;
  }
  /** @return string */
  public function getAttributionToken()
  {
    return $this->attributionToken;
  }
  /** @param GoogleCloudDiscoveryengineV1betaCompletionInfo */
  public function setCompletionInfo(GoogleCloudDiscoveryengineV1betaCompletionInfo $completionInfo)
  {
    $this->completionInfo = $completionInfo;
  }
  /** @return GoogleCloudDiscoveryengineV1betaCompletionInfo */
  public function getCompletionInfo()
  {
    return $this->completionInfo;
  }
  /** @param bool */
  public function setDirectUserRequest($directUserRequest)
  {
    $this->directUserRequest = $directUserRequest;
  }
  /** @return bool */
  public function getDirectUserRequest()
  {
    return $this->directUserRequest;
  }
  /** @param GoogleCloudDiscoveryengineV1betaDocumentInfo[] */
  public function setDocuments($documents)
  {
    $this->documents = $documents;
  }
  /** @return GoogleCloudDiscoveryengineV1betaDocumentInfo[] */
  public function getDocuments()
  {
    return $this->documents;
  }
  /** @param string */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /** @param string */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string */
  public function getEventType()
  {
    return $this->eventType;
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
  /** @param GoogleCloudDiscoveryengineV1betaMediaInfo */
  public function setMediaInfo(GoogleCloudDiscoveryengineV1betaMediaInfo $mediaInfo)
  {
    $this->mediaInfo = $mediaInfo;
  }
  /** @return GoogleCloudDiscoveryengineV1betaMediaInfo */
  public function getMediaInfo()
  {
    return $this->mediaInfo;
  }
  /** @param GoogleCloudDiscoveryengineV1betaPageInfo */
  public function setPageInfo(GoogleCloudDiscoveryengineV1betaPageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return GoogleCloudDiscoveryengineV1betaPageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param GoogleCloudDiscoveryengineV1betaPanelInfo */
  public function setPanel(GoogleCloudDiscoveryengineV1betaPanelInfo $panel)
  {
    $this->panel = $panel;
  }
  /** @return GoogleCloudDiscoveryengineV1betaPanelInfo */
  public function getPanel()
  {
    return $this->panel;
  }
  /** @param string[] */
  public function setPromotionIds($promotionIds)
  {
    $this->promotionIds = $promotionIds;
  }
  /** @return string[] */
  public function getPromotionIds()
  {
    return $this->promotionIds;
  }
  /** @param GoogleCloudDiscoveryengineV1betaSearchInfo */
  public function setSearchInfo(GoogleCloudDiscoveryengineV1betaSearchInfo $searchInfo)
  {
    $this->searchInfo = $searchInfo;
  }
  /** @return GoogleCloudDiscoveryengineV1betaSearchInfo */
  public function getSearchInfo()
  {
    return $this->searchInfo;
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
  /** @param string[] */
  public function setTagIds($tagIds)
  {
    $this->tagIds = $tagIds;
  }
  /** @return string[] */
  public function getTagIds()
  {
    return $this->tagIds;
  }
  /** @param GoogleCloudDiscoveryengineV1betaTransactionInfo */
  public function setTransactionInfo(GoogleCloudDiscoveryengineV1betaTransactionInfo $transactionInfo)
  {
    $this->transactionInfo = $transactionInfo;
  }
  /** @return GoogleCloudDiscoveryengineV1betaTransactionInfo */
  public function getTransactionInfo()
  {
    return $this->transactionInfo;
  }
  /** @param GoogleCloudDiscoveryengineV1betaUserInfo */
  public function setUserInfo(GoogleCloudDiscoveryengineV1betaUserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }
  /** @return GoogleCloudDiscoveryengineV1betaUserInfo */
  public function getUserInfo()
  {
    return $this->userInfo;
  }
  /** @param string */
  public function setUserPseudoId($userPseudoId)
  {
    $this->userPseudoId = $userPseudoId;
  }
  /** @return string */
  public function getUserPseudoId()
  {
    return $this->userPseudoId;
  }
}

class GoogleCloudDiscoveryengineV1betaUserInfo extends \Google\Model
{
  /** @var string */
  public $userAgent;
  /** @var string */
  public $userId;

  /** @param string */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /** @return string */
  public function getUserAgent()
  {
    return $this->userAgent;
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

class GoogleTypeDate extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleApiHttpBody::class, 'Google_Service_DiscoveryEngine_GoogleApiHttpBody');
class_alias(GoogleCloudDiscoveryengineV1alphaImportDocumentsMetadata::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaImportDocumentsMetadata');
class_alias(GoogleCloudDiscoveryengineV1alphaImportDocumentsResponse::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaImportDocumentsResponse');
class_alias(GoogleCloudDiscoveryengineV1alphaImportErrorConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaImportErrorConfig');
class_alias(GoogleCloudDiscoveryengineV1alphaImportUserEventsMetadata::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaImportUserEventsMetadata');
class_alias(GoogleCloudDiscoveryengineV1alphaImportUserEventsResponse::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaImportUserEventsResponse');
class_alias(GoogleCloudDiscoveryengineV1betaBigQuerySource::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaBigQuerySource');
class_alias(GoogleCloudDiscoveryengineV1betaCompletionInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaCompletionInfo');
class_alias(GoogleCloudDiscoveryengineV1betaCustomAttribute::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaCustomAttribute');
class_alias(GoogleCloudDiscoveryengineV1betaDocument::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaDocument');
class_alias(GoogleCloudDiscoveryengineV1betaDocumentInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaDocumentInfo');
class_alias(GoogleCloudDiscoveryengineV1betaGcsSource::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaGcsSource');
class_alias(GoogleCloudDiscoveryengineV1betaImportDocumentsMetadata::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaImportDocumentsMetadata');
class_alias(GoogleCloudDiscoveryengineV1betaImportDocumentsRequest::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaImportDocumentsRequest');
class_alias(GoogleCloudDiscoveryengineV1betaImportDocumentsRequestInlineSource::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaImportDocumentsRequestInlineSource');
class_alias(GoogleCloudDiscoveryengineV1betaImportDocumentsResponse::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaImportDocumentsResponse');
class_alias(GoogleCloudDiscoveryengineV1betaImportErrorConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaImportErrorConfig');
class_alias(GoogleCloudDiscoveryengineV1betaImportUserEventsMetadata::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaImportUserEventsMetadata');
class_alias(GoogleCloudDiscoveryengineV1betaImportUserEventsRequest::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaImportUserEventsRequest');
class_alias(GoogleCloudDiscoveryengineV1betaImportUserEventsRequestInlineSource::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaImportUserEventsRequestInlineSource');
class_alias(GoogleCloudDiscoveryengineV1betaImportUserEventsResponse::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaImportUserEventsResponse');
class_alias(GoogleCloudDiscoveryengineV1betaListDocumentsResponse::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaListDocumentsResponse');
class_alias(GoogleCloudDiscoveryengineV1betaMediaInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaMediaInfo');
class_alias(GoogleCloudDiscoveryengineV1betaPageInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaPageInfo');
class_alias(GoogleCloudDiscoveryengineV1betaPanelInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaPanelInfo');
class_alias(GoogleCloudDiscoveryengineV1betaRecommendRequest::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaRecommendRequest');
class_alias(GoogleCloudDiscoveryengineV1betaRecommendResponse::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaRecommendResponse');
class_alias(GoogleCloudDiscoveryengineV1betaRecommendResponseRecommendationResult::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaRecommendResponseRecommendationResult');
class_alias(GoogleCloudDiscoveryengineV1betaSearchInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaSearchInfo');
class_alias(GoogleCloudDiscoveryengineV1betaTransactionInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaTransactionInfo');
class_alias(GoogleCloudDiscoveryengineV1betaUserEvent::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaUserEvent');
class_alias(GoogleCloudDiscoveryengineV1betaUserInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaUserInfo');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_DiscoveryEngine_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_DiscoveryEngine_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_DiscoveryEngine_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_DiscoveryEngine_GoogleRpcStatus');
class_alias(GoogleTypeDate::class, 'Google_Service_DiscoveryEngine_GoogleTypeDate');
