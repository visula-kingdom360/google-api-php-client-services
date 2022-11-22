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

namespace Google\Service\RecommendationsAI;

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

class GoogleCloudRecommendationengineV1alphaRejoinCatalogMetadata extends \Google\Model
{
}

class GoogleCloudRecommendationengineV1alphaRejoinCatalogResponse extends \Google\Model
{
  /** @var string */
  public $rejoinedUserEventsCount;

  /** @param string */
  public function setRejoinedUserEventsCount($rejoinedUserEventsCount)
  {
    $this->rejoinedUserEventsCount = $rejoinedUserEventsCount;
  }
  /** @return string */
  public function getRejoinedUserEventsCount()
  {
    return $this->rejoinedUserEventsCount;
  }
}

class GoogleCloudRecommendationengineV1alphaTuningMetadata extends \Google\Model
{
  /** @var string */
  public $recommendationModel;

  /** @param string */
  public function setRecommendationModel($recommendationModel)
  {
    $this->recommendationModel = $recommendationModel;
  }
  /** @return string */
  public function getRecommendationModel()
  {
    return $this->recommendationModel;
  }
}

class GoogleCloudRecommendationengineV1alphaTuningResponse extends \Google\Model
{
}

class GoogleCloudRecommendationengineV1beta1BigQuerySource extends \Google\Model
{
  /** @var string */
  public $dataSchema;
  /** @var string */
  public $datasetId;
  /** @var string */
  public $gcsStagingDir;
  /** @var string */
  public $projectId;
  /** @var string */
  public $tableId;

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

class GoogleCloudRecommendationengineV1beta1Catalog extends \Google\Model
{
  /** @var GoogleCloudRecommendationengineV1beta1CatalogItemLevelConfig */
  public $catalogItemLevelConfig;
  /** @var string */
  public $defaultEventStoreId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  protected $catalogItemLevelConfigType = GoogleCloudRecommendationengineV1beta1CatalogItemLevelConfig::class;
  protected $catalogItemLevelConfigDataType = '';
  /** @param GoogleCloudRecommendationengineV1beta1CatalogItemLevelConfig */
  public function setCatalogItemLevelConfig(GoogleCloudRecommendationengineV1beta1CatalogItemLevelConfig $catalogItemLevelConfig)
  {
    $this->catalogItemLevelConfig = $catalogItemLevelConfig;
  }
  /** @return GoogleCloudRecommendationengineV1beta1CatalogItemLevelConfig */
  public function getCatalogItemLevelConfig()
  {
    return $this->catalogItemLevelConfig;
  }
  /** @param string */
  public function setDefaultEventStoreId($defaultEventStoreId)
  {
    $this->defaultEventStoreId = $defaultEventStoreId;
  }
  /** @return string */
  public function getDefaultEventStoreId()
  {
    return $this->defaultEventStoreId;
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

class GoogleCloudRecommendationengineV1beta1CatalogInlineSource extends \Google\Collection
{
  /** @var GoogleCloudRecommendationengineV1beta1CatalogItem[] */
  public $catalogItems;
  protected $collection_key = 'catalogItems';
  protected $catalogItemsType = GoogleCloudRecommendationengineV1beta1CatalogItem::class;
  protected $catalogItemsDataType = 'array';
  /** @param GoogleCloudRecommendationengineV1beta1CatalogItem[] */
  public function setCatalogItems($catalogItems)
  {
    $this->catalogItems = $catalogItems;
  }
  /** @return GoogleCloudRecommendationengineV1beta1CatalogItem[] */
  public function getCatalogItems()
  {
    return $this->catalogItems;
  }
}

class GoogleCloudRecommendationengineV1beta1CatalogItem extends \Google\Collection
{
  /** @var GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy[] */
  public $categoryHierarchies;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var GoogleCloudRecommendationengineV1beta1FeatureMap */
  public $itemAttributes;
  /** @var string */
  public $itemGroupId;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudRecommendationengineV1beta1ProductCatalogItem */
  public $productMetadata;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $title;
  protected $collection_key = 'tags';
  protected $categoryHierarchiesType = GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy::class;
  protected $categoryHierarchiesDataType = 'array';
  protected $itemAttributesType = GoogleCloudRecommendationengineV1beta1FeatureMap::class;
  protected $itemAttributesDataType = '';
  protected $productMetadataType = GoogleCloudRecommendationengineV1beta1ProductCatalogItem::class;
  protected $productMetadataDataType = '';
  /** @param GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy[] */
  public function setCategoryHierarchies($categoryHierarchies)
  {
    $this->categoryHierarchies = $categoryHierarchies;
  }
  /** @return GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy[] */
  public function getCategoryHierarchies()
  {
    return $this->categoryHierarchies;
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param GoogleCloudRecommendationengineV1beta1FeatureMap */
  public function setItemAttributes(GoogleCloudRecommendationengineV1beta1FeatureMap $itemAttributes)
  {
    $this->itemAttributes = $itemAttributes;
  }
  /** @return GoogleCloudRecommendationengineV1beta1FeatureMap */
  public function getItemAttributes()
  {
    return $this->itemAttributes;
  }
  /** @param string */
  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }
  /** @return string */
  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param GoogleCloudRecommendationengineV1beta1ProductCatalogItem */
  public function setProductMetadata(GoogleCloudRecommendationengineV1beta1ProductCatalogItem $productMetadata)
  {
    $this->productMetadata = $productMetadata;
  }
  /** @return GoogleCloudRecommendationengineV1beta1ProductCatalogItem */
  public function getProductMetadata()
  {
    return $this->productMetadata;
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

class GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy extends \Google\Collection
{
  /** @var string[] */
  public $categories;
  protected $collection_key = 'categories';
  /** @param string[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return string[] */
  public function getCategories()
  {
    return $this->categories;
  }
}

class GoogleCloudRecommendationengineV1beta1CatalogItemLevelConfig extends \Google\Model
{
  /** @var string */
  public $eventItemLevel;
  /** @var string */
  public $predictItemLevel;

  /** @param string */
  public function setEventItemLevel($eventItemLevel)
  {
    $this->eventItemLevel = $eventItemLevel;
  }
  /** @return string */
  public function getEventItemLevel()
  {
    return $this->eventItemLevel;
  }
  /** @param string */
  public function setPredictItemLevel($predictItemLevel)
  {
    $this->predictItemLevel = $predictItemLevel;
  }
  /** @return string */
  public function getPredictItemLevel()
  {
    return $this->predictItemLevel;
  }
}

class GoogleCloudRecommendationengineV1beta1CreatePredictionApiKeyRegistrationRequest extends \Google\Model
{
  /** @var GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration */
  public $predictionApiKeyRegistration;
  protected $predictionApiKeyRegistrationType = GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration::class;
  protected $predictionApiKeyRegistrationDataType = '';
  /** @param GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration */
  public function setPredictionApiKeyRegistration(GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration $predictionApiKeyRegistration)
  {
    $this->predictionApiKeyRegistration = $predictionApiKeyRegistration;
  }
  /** @return GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration */
  public function getPredictionApiKeyRegistration()
  {
    return $this->predictionApiKeyRegistration;
  }
}

class GoogleCloudRecommendationengineV1beta1EventDetail extends \Google\Collection
{
  /** @var GoogleCloudRecommendationengineV1beta1FeatureMap */
  public $eventAttributes;
  /** @var string[] */
  public $experimentIds;
  /** @var string */
  public $pageViewId;
  /** @var string */
  public $recommendationToken;
  /** @var string */
  public $referrerUri;
  /** @var string */
  public $uri;
  protected $collection_key = 'experimentIds';
  protected $eventAttributesType = GoogleCloudRecommendationengineV1beta1FeatureMap::class;
  protected $eventAttributesDataType = '';
  /** @param GoogleCloudRecommendationengineV1beta1FeatureMap */
  public function setEventAttributes(GoogleCloudRecommendationengineV1beta1FeatureMap $eventAttributes)
  {
    $this->eventAttributes = $eventAttributes;
  }
  /** @return GoogleCloudRecommendationengineV1beta1FeatureMap */
  public function getEventAttributes()
  {
    return $this->eventAttributes;
  }
  /** @param string[] */
  public function setExperimentIds($experimentIds)
  {
    $this->experimentIds = $experimentIds;
  }
  /** @return string[] */
  public function getExperimentIds()
  {
    return $this->experimentIds;
  }
  /** @param string */
  public function setPageViewId($pageViewId)
  {
    $this->pageViewId = $pageViewId;
  }
  /** @return string */
  public function getPageViewId()
  {
    return $this->pageViewId;
  }
  /** @param string */
  public function setRecommendationToken($recommendationToken)
  {
    $this->recommendationToken = $recommendationToken;
  }
  /** @return string */
  public function getRecommendationToken()
  {
    return $this->recommendationToken;
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

class GoogleCloudRecommendationengineV1beta1FeatureMap extends \Google\Model
{
  /** @var GoogleCloudRecommendationengineV1beta1FeatureMapStringList[] */
  public $categoricalFeatures;
  /** @var GoogleCloudRecommendationengineV1beta1FeatureMapFloatList[] */
  public $numericalFeatures;
  protected $categoricalFeaturesType = GoogleCloudRecommendationengineV1beta1FeatureMapStringList::class;
  protected $categoricalFeaturesDataType = 'map';
  protected $numericalFeaturesType = GoogleCloudRecommendationengineV1beta1FeatureMapFloatList::class;
  protected $numericalFeaturesDataType = 'map';
  /** @param GoogleCloudRecommendationengineV1beta1FeatureMapStringList[] */
  public function setCategoricalFeatures($categoricalFeatures)
  {
    $this->categoricalFeatures = $categoricalFeatures;
  }
  /** @return GoogleCloudRecommendationengineV1beta1FeatureMapStringList[] */
  public function getCategoricalFeatures()
  {
    return $this->categoricalFeatures;
  }
  /** @param GoogleCloudRecommendationengineV1beta1FeatureMapFloatList[] */
  public function setNumericalFeatures($numericalFeatures)
  {
    $this->numericalFeatures = $numericalFeatures;
  }
  /** @return GoogleCloudRecommendationengineV1beta1FeatureMapFloatList[] */
  public function getNumericalFeatures()
  {
    return $this->numericalFeatures;
  }
}

class GoogleCloudRecommendationengineV1beta1FeatureMapFloatList extends \Google\Collection
{
  /** @var float[] */
  public $value;
  protected $collection_key = 'value';
  /** @param float[] */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return float[] */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudRecommendationengineV1beta1FeatureMapStringList extends \Google\Collection
{
  /** @var string[] */
  public $value;
  protected $collection_key = 'value';
  /** @param string[] */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string[] */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudRecommendationengineV1beta1GcsSource extends \Google\Collection
{
  /** @var string[] */
  public $inputUris;
  /** @var string */
  public $jsonSchema;
  protected $collection_key = 'inputUris';
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
  /** @param string */
  public function setJsonSchema($jsonSchema)
  {
    $this->jsonSchema = $jsonSchema;
  }
  /** @return string */
  public function getJsonSchema()
  {
    return $this->jsonSchema;
  }
}

class GoogleCloudRecommendationengineV1beta1Image extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var string */
  public $uri;
  /** @var int */
  public $width;

  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
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
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class GoogleCloudRecommendationengineV1beta1ImportCatalogItemsRequest extends \Google\Model
{
  /** @var GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRecommendationengineV1beta1InputConfig */
  public $inputConfig;
  /** @var string */
  public $requestId;
  /** @var string */
  public $updateMask;
  protected $errorsConfigType = GoogleCloudRecommendationengineV1beta1ImportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $inputConfigType = GoogleCloudRecommendationengineV1beta1InputConfig::class;
  protected $inputConfigDataType = '';
  /** @param GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRecommendationengineV1beta1ImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRecommendationengineV1beta1InputConfig */
  public function setInputConfig(GoogleCloudRecommendationengineV1beta1InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudRecommendationengineV1beta1InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
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

class GoogleCloudRecommendationengineV1beta1ImportCatalogItemsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public $errorsConfig;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRecommendationengineV1beta1ImportErrorsConfig::class;
  protected $errorsConfigDataType = '';
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
  /** @param GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRecommendationengineV1beta1ImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
}

class GoogleCloudRecommendationengineV1beta1ImportErrorsConfig extends \Google\Model
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

class GoogleCloudRecommendationengineV1beta1ImportMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $failureCount;
  /** @var string */
  public $operationName;
  /** @var string */
  public $requestId;
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
  public function setOperationName($operationName)
  {
    $this->operationName = $operationName;
  }
  /** @return string */
  public function getOperationName()
  {
    return $this->operationName;
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

class GoogleCloudRecommendationengineV1beta1ImportUserEventsRequest extends \Google\Model
{
  /** @var GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRecommendationengineV1beta1InputConfig */
  public $inputConfig;
  /** @var string */
  public $requestId;
  protected $errorsConfigType = GoogleCloudRecommendationengineV1beta1ImportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $inputConfigType = GoogleCloudRecommendationengineV1beta1InputConfig::class;
  protected $inputConfigDataType = '';
  /** @param GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRecommendationengineV1beta1ImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRecommendationengineV1beta1InputConfig */
  public function setInputConfig(GoogleCloudRecommendationengineV1beta1InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudRecommendationengineV1beta1InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
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
}

class GoogleCloudRecommendationengineV1beta1ImportUserEventsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRecommendationengineV1beta1UserEventImportSummary */
  public $importSummary;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRecommendationengineV1beta1ImportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $importSummaryType = GoogleCloudRecommendationengineV1beta1UserEventImportSummary::class;
  protected $importSummaryDataType = '';
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
  /** @param GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRecommendationengineV1beta1ImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRecommendationengineV1beta1ImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRecommendationengineV1beta1UserEventImportSummary */
  public function setImportSummary(GoogleCloudRecommendationengineV1beta1UserEventImportSummary $importSummary)
  {
    $this->importSummary = $importSummary;
  }
  /** @return GoogleCloudRecommendationengineV1beta1UserEventImportSummary */
  public function getImportSummary()
  {
    return $this->importSummary;
  }
}

class GoogleCloudRecommendationengineV1beta1InputConfig extends \Google\Model
{
  /** @var GoogleCloudRecommendationengineV1beta1BigQuerySource */
  public $bigQuerySource;
  /** @var GoogleCloudRecommendationengineV1beta1CatalogInlineSource */
  public $catalogInlineSource;
  /** @var GoogleCloudRecommendationengineV1beta1GcsSource */
  public $gcsSource;
  /** @var GoogleCloudRecommendationengineV1beta1UserEventInlineSource */
  public $userEventInlineSource;
  protected $bigQuerySourceType = GoogleCloudRecommendationengineV1beta1BigQuerySource::class;
  protected $bigQuerySourceDataType = '';
  protected $catalogInlineSourceType = GoogleCloudRecommendationengineV1beta1CatalogInlineSource::class;
  protected $catalogInlineSourceDataType = '';
  protected $gcsSourceType = GoogleCloudRecommendationengineV1beta1GcsSource::class;
  protected $gcsSourceDataType = '';
  protected $userEventInlineSourceType = GoogleCloudRecommendationengineV1beta1UserEventInlineSource::class;
  protected $userEventInlineSourceDataType = '';
  /** @param GoogleCloudRecommendationengineV1beta1BigQuerySource */
  public function setBigQuerySource(GoogleCloudRecommendationengineV1beta1BigQuerySource $bigQuerySource)
  {
    $this->bigQuerySource = $bigQuerySource;
  }
  /** @return GoogleCloudRecommendationengineV1beta1BigQuerySource */
  public function getBigQuerySource()
  {
    return $this->bigQuerySource;
  }
  /** @param GoogleCloudRecommendationengineV1beta1CatalogInlineSource */
  public function setCatalogInlineSource(GoogleCloudRecommendationengineV1beta1CatalogInlineSource $catalogInlineSource)
  {
    $this->catalogInlineSource = $catalogInlineSource;
  }
  /** @return GoogleCloudRecommendationengineV1beta1CatalogInlineSource */
  public function getCatalogInlineSource()
  {
    return $this->catalogInlineSource;
  }
  /** @param GoogleCloudRecommendationengineV1beta1GcsSource */
  public function setGcsSource(GoogleCloudRecommendationengineV1beta1GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudRecommendationengineV1beta1GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param GoogleCloudRecommendationengineV1beta1UserEventInlineSource */
  public function setUserEventInlineSource(GoogleCloudRecommendationengineV1beta1UserEventInlineSource $userEventInlineSource)
  {
    $this->userEventInlineSource = $userEventInlineSource;
  }
  /** @return GoogleCloudRecommendationengineV1beta1UserEventInlineSource */
  public function getUserEventInlineSource()
  {
    return $this->userEventInlineSource;
  }
}

class GoogleCloudRecommendationengineV1beta1ListCatalogItemsResponse extends \Google\Collection
{
  /** @var GoogleCloudRecommendationengineV1beta1CatalogItem[] */
  public $catalogItems;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'catalogItems';
  protected $catalogItemsType = GoogleCloudRecommendationengineV1beta1CatalogItem::class;
  protected $catalogItemsDataType = 'array';
  /** @param GoogleCloudRecommendationengineV1beta1CatalogItem[] */
  public function setCatalogItems($catalogItems)
  {
    $this->catalogItems = $catalogItems;
  }
  /** @return GoogleCloudRecommendationengineV1beta1CatalogItem[] */
  public function getCatalogItems()
  {
    return $this->catalogItems;
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

class GoogleCloudRecommendationengineV1beta1ListCatalogsResponse extends \Google\Collection
{
  /** @var GoogleCloudRecommendationengineV1beta1Catalog[] */
  public $catalogs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'catalogs';
  protected $catalogsType = GoogleCloudRecommendationengineV1beta1Catalog::class;
  protected $catalogsDataType = 'array';
  /** @param GoogleCloudRecommendationengineV1beta1Catalog[] */
  public function setCatalogs($catalogs)
  {
    $this->catalogs = $catalogs;
  }
  /** @return GoogleCloudRecommendationengineV1beta1Catalog[] */
  public function getCatalogs()
  {
    return $this->catalogs;
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

class GoogleCloudRecommendationengineV1beta1ListPredictionApiKeyRegistrationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration[] */
  public $predictionApiKeyRegistrations;
  protected $collection_key = 'predictionApiKeyRegistrations';
  protected $predictionApiKeyRegistrationsType = GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration::class;
  protected $predictionApiKeyRegistrationsDataType = 'array';
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
  /** @param GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration[] */
  public function setPredictionApiKeyRegistrations($predictionApiKeyRegistrations)
  {
    $this->predictionApiKeyRegistrations = $predictionApiKeyRegistrations;
  }
  /** @return GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration[] */
  public function getPredictionApiKeyRegistrations()
  {
    return $this->predictionApiKeyRegistrations;
  }
}

class GoogleCloudRecommendationengineV1beta1ListUserEventsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRecommendationengineV1beta1UserEvent[] */
  public $userEvents;
  protected $collection_key = 'userEvents';
  protected $userEventsType = GoogleCloudRecommendationengineV1beta1UserEvent::class;
  protected $userEventsDataType = 'array';
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
  /** @param GoogleCloudRecommendationengineV1beta1UserEvent[] */
  public function setUserEvents($userEvents)
  {
    $this->userEvents = $userEvents;
  }
  /** @return GoogleCloudRecommendationengineV1beta1UserEvent[] */
  public function getUserEvents()
  {
    return $this->userEvents;
  }
}

class GoogleCloudRecommendationengineV1beta1PredictRequest extends \Google\Model
{
  /** @var bool */
  public $dryRun;
  /** @var string */
  public $filter;
  /** @var string[] */
  public $labels;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var array[] */
  public $params;
  /** @var GoogleCloudRecommendationengineV1beta1UserEvent */
  public $userEvent;
  protected $userEventType = GoogleCloudRecommendationengineV1beta1UserEvent::class;
  protected $userEventDataType = '';
  /** @param bool */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /** @return bool */
  public function getDryRun()
  {
    return $this->dryRun;
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
  /** @param GoogleCloudRecommendationengineV1beta1UserEvent */
  public function setUserEvent(GoogleCloudRecommendationengineV1beta1UserEvent $userEvent)
  {
    $this->userEvent = $userEvent;
  }
  /** @return GoogleCloudRecommendationengineV1beta1UserEvent */
  public function getUserEvent()
  {
    return $this->userEvent;
  }
}

class GoogleCloudRecommendationengineV1beta1PredictResponse extends \Google\Collection
{
  /** @var bool */
  public $dryRun;
  /** @var string[] */
  public $itemsMissingInCatalog;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $recommendationToken;
  /** @var GoogleCloudRecommendationengineV1beta1PredictResponsePredictionResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = GoogleCloudRecommendationengineV1beta1PredictResponsePredictionResult::class;
  protected $resultsDataType = 'array';
  /** @param bool */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /** @return bool */
  public function getDryRun()
  {
    return $this->dryRun;
  }
  /** @param string[] */
  public function setItemsMissingInCatalog($itemsMissingInCatalog)
  {
    $this->itemsMissingInCatalog = $itemsMissingInCatalog;
  }
  /** @return string[] */
  public function getItemsMissingInCatalog()
  {
    return $this->itemsMissingInCatalog;
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
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param string */
  public function setRecommendationToken($recommendationToken)
  {
    $this->recommendationToken = $recommendationToken;
  }
  /** @return string */
  public function getRecommendationToken()
  {
    return $this->recommendationToken;
  }
  /** @param GoogleCloudRecommendationengineV1beta1PredictResponsePredictionResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudRecommendationengineV1beta1PredictResponsePredictionResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudRecommendationengineV1beta1PredictResponsePredictionResult extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var array[] */
  public $itemMetadata;

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
  public function setItemMetadata($itemMetadata)
  {
    $this->itemMetadata = $itemMetadata;
  }
  /** @return array[] */
  public function getItemMetadata()
  {
    return $this->itemMetadata;
  }
}

class GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration extends \Google\Model
{
  /** @var string */
  public $apiKey;

  /** @param string */
  public function setApiKey($apiKey)
  {
    $this->apiKey = $apiKey;
  }
  /** @return string */
  public function getApiKey()
  {
    return $this->apiKey;
  }
}

class GoogleCloudRecommendationengineV1beta1ProductCatalogItem extends \Google\Collection
{
  /** @var string */
  public $availableQuantity;
  /** @var string */
  public $canonicalProductUri;
  /** @var float[] */
  public $costs;
  /** @var string */
  public $currencyCode;
  /** @var GoogleCloudRecommendationengineV1beta1ProductCatalogItemExactPrice */
  public $exactPrice;
  /** @var GoogleCloudRecommendationengineV1beta1Image[] */
  public $images;
  /** @var GoogleCloudRecommendationengineV1beta1ProductCatalogItemPriceRange */
  public $priceRange;
  /** @var string */
  public $stockState;
  protected $collection_key = 'images';
  protected $exactPriceType = GoogleCloudRecommendationengineV1beta1ProductCatalogItemExactPrice::class;
  protected $exactPriceDataType = '';
  protected $imagesType = GoogleCloudRecommendationengineV1beta1Image::class;
  protected $imagesDataType = 'array';
  protected $priceRangeType = GoogleCloudRecommendationengineV1beta1ProductCatalogItemPriceRange::class;
  protected $priceRangeDataType = '';
  /** @param string */
  public function setAvailableQuantity($availableQuantity)
  {
    $this->availableQuantity = $availableQuantity;
  }
  /** @return string */
  public function getAvailableQuantity()
  {
    return $this->availableQuantity;
  }
  /** @param string */
  public function setCanonicalProductUri($canonicalProductUri)
  {
    $this->canonicalProductUri = $canonicalProductUri;
  }
  /** @return string */
  public function getCanonicalProductUri()
  {
    return $this->canonicalProductUri;
  }
  /** @param float[] */
  public function setCosts($costs)
  {
    $this->costs = $costs;
  }
  /** @return float[] */
  public function getCosts()
  {
    return $this->costs;
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
  /** @param GoogleCloudRecommendationengineV1beta1ProductCatalogItemExactPrice */
  public function setExactPrice(GoogleCloudRecommendationengineV1beta1ProductCatalogItemExactPrice $exactPrice)
  {
    $this->exactPrice = $exactPrice;
  }
  /** @return GoogleCloudRecommendationengineV1beta1ProductCatalogItemExactPrice */
  public function getExactPrice()
  {
    return $this->exactPrice;
  }
  /** @param GoogleCloudRecommendationengineV1beta1Image[] */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /** @return GoogleCloudRecommendationengineV1beta1Image[] */
  public function getImages()
  {
    return $this->images;
  }
  /** @param GoogleCloudRecommendationengineV1beta1ProductCatalogItemPriceRange */
  public function setPriceRange(GoogleCloudRecommendationengineV1beta1ProductCatalogItemPriceRange $priceRange)
  {
    $this->priceRange = $priceRange;
  }
  /** @return GoogleCloudRecommendationengineV1beta1ProductCatalogItemPriceRange */
  public function getPriceRange()
  {
    return $this->priceRange;
  }
  /** @param string */
  public function setStockState($stockState)
  {
    $this->stockState = $stockState;
  }
  /** @return string */
  public function getStockState()
  {
    return $this->stockState;
  }
}

class GoogleCloudRecommendationengineV1beta1ProductCatalogItemExactPrice extends \Google\Model
{
  /** @var float */
  public $displayPrice;
  /** @var float */
  public $originalPrice;

  /** @param float */
  public function setDisplayPrice($displayPrice)
  {
    $this->displayPrice = $displayPrice;
  }
  /** @return float */
  public function getDisplayPrice()
  {
    return $this->displayPrice;
  }
  /** @param float */
  public function setOriginalPrice($originalPrice)
  {
    $this->originalPrice = $originalPrice;
  }
  /** @return float */
  public function getOriginalPrice()
  {
    return $this->originalPrice;
  }
}

class GoogleCloudRecommendationengineV1beta1ProductCatalogItemPriceRange extends \Google\Model
{
  /** @var float */
  public $max;
  /** @var float */
  public $min;

  /** @param float */
  public function setMax($max)
  {
    $this->max = $max;
  }
  /** @return float */
  public function getMax()
  {
    return $this->max;
  }
  /** @param float */
  public function setMin($min)
  {
    $this->min = $min;
  }
  /** @return float */
  public function getMin()
  {
    return $this->min;
  }
}

class GoogleCloudRecommendationengineV1beta1ProductDetail extends \Google\Model
{
  /** @var int */
  public $availableQuantity;
  /** @var string */
  public $currencyCode;
  /** @var float */
  public $displayPrice;
  /** @var string */
  public $id;
  /** @var GoogleCloudRecommendationengineV1beta1FeatureMap */
  public $itemAttributes;
  /** @var float */
  public $originalPrice;
  /** @var int */
  public $quantity;
  /** @var string */
  public $stockState;
  protected $itemAttributesType = GoogleCloudRecommendationengineV1beta1FeatureMap::class;
  protected $itemAttributesDataType = '';
  /** @param int */
  public function setAvailableQuantity($availableQuantity)
  {
    $this->availableQuantity = $availableQuantity;
  }
  /** @return int */
  public function getAvailableQuantity()
  {
    return $this->availableQuantity;
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
  /** @param float */
  public function setDisplayPrice($displayPrice)
  {
    $this->displayPrice = $displayPrice;
  }
  /** @return float */
  public function getDisplayPrice()
  {
    return $this->displayPrice;
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
  /** @param GoogleCloudRecommendationengineV1beta1FeatureMap */
  public function setItemAttributes(GoogleCloudRecommendationengineV1beta1FeatureMap $itemAttributes)
  {
    $this->itemAttributes = $itemAttributes;
  }
  /** @return GoogleCloudRecommendationengineV1beta1FeatureMap */
  public function getItemAttributes()
  {
    return $this->itemAttributes;
  }
  /** @param float */
  public function setOriginalPrice($originalPrice)
  {
    $this->originalPrice = $originalPrice;
  }
  /** @return float */
  public function getOriginalPrice()
  {
    return $this->originalPrice;
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
  /** @param string */
  public function setStockState($stockState)
  {
    $this->stockState = $stockState;
  }
  /** @return string */
  public function getStockState()
  {
    return $this->stockState;
  }
}

class GoogleCloudRecommendationengineV1beta1ProductEventDetail extends \Google\Collection
{
  /** @var string */
  public $cartId;
  /** @var string */
  public $listId;
  /** @var GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy[] */
  public $pageCategories;
  /** @var GoogleCloudRecommendationengineV1beta1ProductDetail[] */
  public $productDetails;
  /** @var GoogleCloudRecommendationengineV1beta1PurchaseTransaction */
  public $purchaseTransaction;
  /** @var string */
  public $searchQuery;
  protected $collection_key = 'productDetails';
  protected $pageCategoriesType = GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy::class;
  protected $pageCategoriesDataType = 'array';
  protected $productDetailsType = GoogleCloudRecommendationengineV1beta1ProductDetail::class;
  protected $productDetailsDataType = 'array';
  protected $purchaseTransactionType = GoogleCloudRecommendationengineV1beta1PurchaseTransaction::class;
  protected $purchaseTransactionDataType = '';
  /** @param string */
  public function setCartId($cartId)
  {
    $this->cartId = $cartId;
  }
  /** @return string */
  public function getCartId()
  {
    return $this->cartId;
  }
  /** @param string */
  public function setListId($listId)
  {
    $this->listId = $listId;
  }
  /** @return string */
  public function getListId()
  {
    return $this->listId;
  }
  /** @param GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy[] */
  public function setPageCategories($pageCategories)
  {
    $this->pageCategories = $pageCategories;
  }
  /** @return GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy[] */
  public function getPageCategories()
  {
    return $this->pageCategories;
  }
  /** @param GoogleCloudRecommendationengineV1beta1ProductDetail[] */
  public function setProductDetails($productDetails)
  {
    $this->productDetails = $productDetails;
  }
  /** @return GoogleCloudRecommendationengineV1beta1ProductDetail[] */
  public function getProductDetails()
  {
    return $this->productDetails;
  }
  /** @param GoogleCloudRecommendationengineV1beta1PurchaseTransaction */
  public function setPurchaseTransaction(GoogleCloudRecommendationengineV1beta1PurchaseTransaction $purchaseTransaction)
  {
    $this->purchaseTransaction = $purchaseTransaction;
  }
  /** @return GoogleCloudRecommendationengineV1beta1PurchaseTransaction */
  public function getPurchaseTransaction()
  {
    return $this->purchaseTransaction;
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

class GoogleCloudRecommendationengineV1beta1PurchaseTransaction extends \Google\Model
{
  /** @var float[] */
  public $costs;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $id;
  /** @var float */
  public $revenue;
  /** @var float[] */
  public $taxes;

  /** @param float[] */
  public function setCosts($costs)
  {
    $this->costs = $costs;
  }
  /** @return float[] */
  public function getCosts()
  {
    return $this->costs;
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param float */
  public function setRevenue($revenue)
  {
    $this->revenue = $revenue;
  }
  /** @return float */
  public function getRevenue()
  {
    return $this->revenue;
  }
  /** @param float[] */
  public function setTaxes($taxes)
  {
    $this->taxes = $taxes;
  }
  /** @return float[] */
  public function getTaxes()
  {
    return $this->taxes;
  }
}

class GoogleCloudRecommendationengineV1beta1PurgeUserEventsMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $operationName;

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
  public function setOperationName($operationName)
  {
    $this->operationName = $operationName;
  }
  /** @return string */
  public function getOperationName()
  {
    return $this->operationName;
  }
}

class GoogleCloudRecommendationengineV1beta1PurgeUserEventsRequest extends \Google\Model
{
  /** @var string */
  public $filter;
  /** @var bool */
  public $force;

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
  /** @param bool */
  public function setForce($force)
  {
    $this->force = $force;
  }
  /** @return bool */
  public function getForce()
  {
    return $this->force;
  }
}

class GoogleCloudRecommendationengineV1beta1PurgeUserEventsResponse extends \Google\Collection
{
  /** @var string */
  public $purgedEventsCount;
  /** @var GoogleCloudRecommendationengineV1beta1UserEvent[] */
  public $userEventsSample;
  protected $collection_key = 'userEventsSample';
  protected $userEventsSampleType = GoogleCloudRecommendationengineV1beta1UserEvent::class;
  protected $userEventsSampleDataType = 'array';
  /** @param string */
  public function setPurgedEventsCount($purgedEventsCount)
  {
    $this->purgedEventsCount = $purgedEventsCount;
  }
  /** @return string */
  public function getPurgedEventsCount()
  {
    return $this->purgedEventsCount;
  }
  /** @param GoogleCloudRecommendationengineV1beta1UserEvent[] */
  public function setUserEventsSample($userEventsSample)
  {
    $this->userEventsSample = $userEventsSample;
  }
  /** @return GoogleCloudRecommendationengineV1beta1UserEvent[] */
  public function getUserEventsSample()
  {
    return $this->userEventsSample;
  }
}

class GoogleCloudRecommendationengineV1beta1RejoinUserEventsMetadata extends \Google\Model
{
}

class GoogleCloudRecommendationengineV1beta1RejoinUserEventsRequest extends \Google\Model
{
  /** @var string */
  public $userEventRejoinScope;

  /** @param string */
  public function setUserEventRejoinScope($userEventRejoinScope)
  {
    $this->userEventRejoinScope = $userEventRejoinScope;
  }
  /** @return string */
  public function getUserEventRejoinScope()
  {
    return $this->userEventRejoinScope;
  }
}

class GoogleCloudRecommendationengineV1beta1RejoinUserEventsResponse extends \Google\Model
{
  /** @var string */
  public $rejoinedUserEventsCount;

  /** @param string */
  public function setRejoinedUserEventsCount($rejoinedUserEventsCount)
  {
    $this->rejoinedUserEventsCount = $rejoinedUserEventsCount;
  }
  /** @return string */
  public function getRejoinedUserEventsCount()
  {
    return $this->rejoinedUserEventsCount;
  }
}

class GoogleCloudRecommendationengineV1beta1UserEvent extends \Google\Model
{
  /** @var GoogleCloudRecommendationengineV1beta1EventDetail */
  public $eventDetail;
  /** @var string */
  public $eventSource;
  /** @var string */
  public $eventTime;
  /** @var string */
  public $eventType;
  /** @var GoogleCloudRecommendationengineV1beta1ProductEventDetail */
  public $productEventDetail;
  /** @var GoogleCloudRecommendationengineV1beta1UserInfo */
  public $userInfo;
  protected $eventDetailType = GoogleCloudRecommendationengineV1beta1EventDetail::class;
  protected $eventDetailDataType = '';
  protected $productEventDetailType = GoogleCloudRecommendationengineV1beta1ProductEventDetail::class;
  protected $productEventDetailDataType = '';
  protected $userInfoType = GoogleCloudRecommendationengineV1beta1UserInfo::class;
  protected $userInfoDataType = '';
  /** @param GoogleCloudRecommendationengineV1beta1EventDetail */
  public function setEventDetail(GoogleCloudRecommendationengineV1beta1EventDetail $eventDetail)
  {
    $this->eventDetail = $eventDetail;
  }
  /** @return GoogleCloudRecommendationengineV1beta1EventDetail */
  public function getEventDetail()
  {
    return $this->eventDetail;
  }
  /** @param string */
  public function setEventSource($eventSource)
  {
    $this->eventSource = $eventSource;
  }
  /** @return string */
  public function getEventSource()
  {
    return $this->eventSource;
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
  /** @param GoogleCloudRecommendationengineV1beta1ProductEventDetail */
  public function setProductEventDetail(GoogleCloudRecommendationengineV1beta1ProductEventDetail $productEventDetail)
  {
    $this->productEventDetail = $productEventDetail;
  }
  /** @return GoogleCloudRecommendationengineV1beta1ProductEventDetail */
  public function getProductEventDetail()
  {
    return $this->productEventDetail;
  }
  /** @param GoogleCloudRecommendationengineV1beta1UserInfo */
  public function setUserInfo(GoogleCloudRecommendationengineV1beta1UserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }
  /** @return GoogleCloudRecommendationengineV1beta1UserInfo */
  public function getUserInfo()
  {
    return $this->userInfo;
  }
}

class GoogleCloudRecommendationengineV1beta1UserEventImportSummary extends \Google\Model
{
  /** @var string */
  public $joinedEventsCount;
  /** @var string */
  public $unjoinedEventsCount;

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

class GoogleCloudRecommendationengineV1beta1UserEventInlineSource extends \Google\Collection
{
  /** @var GoogleCloudRecommendationengineV1beta1UserEvent[] */
  public $userEvents;
  protected $collection_key = 'userEvents';
  protected $userEventsType = GoogleCloudRecommendationengineV1beta1UserEvent::class;
  protected $userEventsDataType = 'array';
  /** @param GoogleCloudRecommendationengineV1beta1UserEvent[] */
  public function setUserEvents($userEvents)
  {
    $this->userEvents = $userEvents;
  }
  /** @return GoogleCloudRecommendationengineV1beta1UserEvent[] */
  public function getUserEvents()
  {
    return $this->userEvents;
  }
}

class GoogleCloudRecommendationengineV1beta1UserInfo extends \Google\Model
{
  /** @var bool */
  public $directUserRequest;
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $userAgent;
  /** @var string */
  public $userId;
  /** @var string */
  public $visitorId;

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
  /** @param string */
  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }
  /** @return string */
  public function getVisitorId()
  {
    return $this->visitorId;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleApiHttpBody::class, 'Google_Service_RecommendationsAI_GoogleApiHttpBody');
class_alias(GoogleCloudRecommendationengineV1alphaRejoinCatalogMetadata::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1alphaRejoinCatalogMetadata');
class_alias(GoogleCloudRecommendationengineV1alphaRejoinCatalogResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1alphaRejoinCatalogResponse');
class_alias(GoogleCloudRecommendationengineV1alphaTuningMetadata::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1alphaTuningMetadata');
class_alias(GoogleCloudRecommendationengineV1alphaTuningResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1alphaTuningResponse');
class_alias(GoogleCloudRecommendationengineV1beta1BigQuerySource::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1BigQuerySource');
class_alias(GoogleCloudRecommendationengineV1beta1Catalog::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1Catalog');
class_alias(GoogleCloudRecommendationengineV1beta1CatalogInlineSource::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1CatalogInlineSource');
class_alias(GoogleCloudRecommendationengineV1beta1CatalogItem::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1CatalogItem');
class_alias(GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1CatalogItemCategoryHierarchy');
class_alias(GoogleCloudRecommendationengineV1beta1CatalogItemLevelConfig::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1CatalogItemLevelConfig');
class_alias(GoogleCloudRecommendationengineV1beta1CreatePredictionApiKeyRegistrationRequest::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1CreatePredictionApiKeyRegistrationRequest');
class_alias(GoogleCloudRecommendationengineV1beta1EventDetail::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1EventDetail');
class_alias(GoogleCloudRecommendationengineV1beta1FeatureMap::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1FeatureMap');
class_alias(GoogleCloudRecommendationengineV1beta1FeatureMapFloatList::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1FeatureMapFloatList');
class_alias(GoogleCloudRecommendationengineV1beta1FeatureMapStringList::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1FeatureMapStringList');
class_alias(GoogleCloudRecommendationengineV1beta1GcsSource::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1GcsSource');
class_alias(GoogleCloudRecommendationengineV1beta1Image::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1Image');
class_alias(GoogleCloudRecommendationengineV1beta1ImportCatalogItemsRequest::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ImportCatalogItemsRequest');
class_alias(GoogleCloudRecommendationengineV1beta1ImportCatalogItemsResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ImportCatalogItemsResponse');
class_alias(GoogleCloudRecommendationengineV1beta1ImportErrorsConfig::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ImportErrorsConfig');
class_alias(GoogleCloudRecommendationengineV1beta1ImportMetadata::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ImportMetadata');
class_alias(GoogleCloudRecommendationengineV1beta1ImportUserEventsRequest::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ImportUserEventsRequest');
class_alias(GoogleCloudRecommendationengineV1beta1ImportUserEventsResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ImportUserEventsResponse');
class_alias(GoogleCloudRecommendationengineV1beta1InputConfig::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1InputConfig');
class_alias(GoogleCloudRecommendationengineV1beta1ListCatalogItemsResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ListCatalogItemsResponse');
class_alias(GoogleCloudRecommendationengineV1beta1ListCatalogsResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ListCatalogsResponse');
class_alias(GoogleCloudRecommendationengineV1beta1ListPredictionApiKeyRegistrationsResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ListPredictionApiKeyRegistrationsResponse');
class_alias(GoogleCloudRecommendationengineV1beta1ListUserEventsResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ListUserEventsResponse');
class_alias(GoogleCloudRecommendationengineV1beta1PredictRequest::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1PredictRequest');
class_alias(GoogleCloudRecommendationengineV1beta1PredictResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1PredictResponse');
class_alias(GoogleCloudRecommendationengineV1beta1PredictResponsePredictionResult::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1PredictResponsePredictionResult');
class_alias(GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1PredictionApiKeyRegistration');
class_alias(GoogleCloudRecommendationengineV1beta1ProductCatalogItem::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ProductCatalogItem');
class_alias(GoogleCloudRecommendationengineV1beta1ProductCatalogItemExactPrice::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ProductCatalogItemExactPrice');
class_alias(GoogleCloudRecommendationengineV1beta1ProductCatalogItemPriceRange::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ProductCatalogItemPriceRange');
class_alias(GoogleCloudRecommendationengineV1beta1ProductDetail::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ProductDetail');
class_alias(GoogleCloudRecommendationengineV1beta1ProductEventDetail::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ProductEventDetail');
class_alias(GoogleCloudRecommendationengineV1beta1PurchaseTransaction::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1PurchaseTransaction');
class_alias(GoogleCloudRecommendationengineV1beta1PurgeUserEventsMetadata::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1PurgeUserEventsMetadata');
class_alias(GoogleCloudRecommendationengineV1beta1PurgeUserEventsRequest::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1PurgeUserEventsRequest');
class_alias(GoogleCloudRecommendationengineV1beta1PurgeUserEventsResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1PurgeUserEventsResponse');
class_alias(GoogleCloudRecommendationengineV1beta1RejoinUserEventsMetadata::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1RejoinUserEventsMetadata');
class_alias(GoogleCloudRecommendationengineV1beta1RejoinUserEventsRequest::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1RejoinUserEventsRequest');
class_alias(GoogleCloudRecommendationengineV1beta1RejoinUserEventsResponse::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1RejoinUserEventsResponse');
class_alias(GoogleCloudRecommendationengineV1beta1UserEvent::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1UserEvent');
class_alias(GoogleCloudRecommendationengineV1beta1UserEventImportSummary::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1UserEventImportSummary');
class_alias(GoogleCloudRecommendationengineV1beta1UserEventInlineSource::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1UserEventInlineSource');
class_alias(GoogleCloudRecommendationengineV1beta1UserInfo::class, 'Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1UserInfo');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_RecommendationsAI_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_RecommendationsAI_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_RecommendationsAI_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_RecommendationsAI_GoogleRpcStatus');
