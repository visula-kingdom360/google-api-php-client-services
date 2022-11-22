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

namespace Google\Service\CloudRetail;

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

class GoogleCloudRetailLoggingErrorContext extends \Google\Model
{
  /** @var GoogleCloudRetailLoggingHttpRequestContext */
  public $httpRequest;
  /** @var GoogleCloudRetailLoggingSourceLocation */
  public $reportLocation;
  protected $httpRequestType = GoogleCloudRetailLoggingHttpRequestContext::class;
  protected $httpRequestDataType = '';
  protected $reportLocationType = GoogleCloudRetailLoggingSourceLocation::class;
  protected $reportLocationDataType = '';
  /** @param GoogleCloudRetailLoggingHttpRequestContext */
  public function setHttpRequest(GoogleCloudRetailLoggingHttpRequestContext $httpRequest)
  {
    $this->httpRequest = $httpRequest;
  }
  /** @return GoogleCloudRetailLoggingHttpRequestContext */
  public function getHttpRequest()
  {
    return $this->httpRequest;
  }
  /** @param GoogleCloudRetailLoggingSourceLocation */
  public function setReportLocation(GoogleCloudRetailLoggingSourceLocation $reportLocation)
  {
    $this->reportLocation = $reportLocation;
  }
  /** @return GoogleCloudRetailLoggingSourceLocation */
  public function getReportLocation()
  {
    return $this->reportLocation;
  }
}

class GoogleCloudRetailLoggingErrorLog extends \Google\Model
{
  /** @var GoogleCloudRetailLoggingErrorContext */
  public $context;
  /** @var GoogleCloudRetailLoggingImportErrorContext */
  public $importPayload;
  /** @var string */
  public $message;
  /** @var array[] */
  public $requestPayload;
  /** @var array[] */
  public $responsePayload;
  /** @var GoogleCloudRetailLoggingServiceContext */
  public $serviceContext;
  /** @var GoogleRpcStatus */
  public $status;
  protected $contextType = GoogleCloudRetailLoggingErrorContext::class;
  protected $contextDataType = '';
  protected $importPayloadType = GoogleCloudRetailLoggingImportErrorContext::class;
  protected $importPayloadDataType = '';
  protected $serviceContextType = GoogleCloudRetailLoggingServiceContext::class;
  protected $serviceContextDataType = '';
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param GoogleCloudRetailLoggingErrorContext */
  public function setContext(GoogleCloudRetailLoggingErrorContext $context)
  {
    $this->context = $context;
  }
  /** @return GoogleCloudRetailLoggingErrorContext */
  public function getContext()
  {
    return $this->context;
  }
  /** @param GoogleCloudRetailLoggingImportErrorContext */
  public function setImportPayload(GoogleCloudRetailLoggingImportErrorContext $importPayload)
  {
    $this->importPayload = $importPayload;
  }
  /** @return GoogleCloudRetailLoggingImportErrorContext */
  public function getImportPayload()
  {
    return $this->importPayload;
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
  /** @param array[] */
  public function setRequestPayload($requestPayload)
  {
    $this->requestPayload = $requestPayload;
  }
  /** @return array[] */
  public function getRequestPayload()
  {
    return $this->requestPayload;
  }
  /** @param array[] */
  public function setResponsePayload($responsePayload)
  {
    $this->responsePayload = $responsePayload;
  }
  /** @return array[] */
  public function getResponsePayload()
  {
    return $this->responsePayload;
  }
  /** @param GoogleCloudRetailLoggingServiceContext */
  public function setServiceContext(GoogleCloudRetailLoggingServiceContext $serviceContext)
  {
    $this->serviceContext = $serviceContext;
  }
  /** @return GoogleCloudRetailLoggingServiceContext */
  public function getServiceContext()
  {
    return $this->serviceContext;
  }
  /** @param GoogleRpcStatus */
  public function setStatus(GoogleRpcStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleRpcStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class GoogleCloudRetailLoggingHttpRequestContext extends \Google\Model
{
  /** @var int */
  public $responseStatusCode;

  /** @param int */
  public function setResponseStatusCode($responseStatusCode)
  {
    $this->responseStatusCode = $responseStatusCode;
  }
  /** @return int */
  public function getResponseStatusCode()
  {
    return $this->responseStatusCode;
  }
}

class GoogleCloudRetailLoggingImportErrorContext extends \Google\Model
{
  /** @var string */
  public $catalogItem;
  /** @var string */
  public $gcsPath;
  /** @var string */
  public $lineNumber;
  /** @var string */
  public $operationName;
  /** @var string */
  public $product;
  /** @var string */
  public $userEvent;

  /** @param string */
  public function setCatalogItem($catalogItem)
  {
    $this->catalogItem = $catalogItem;
  }
  /** @return string */
  public function getCatalogItem()
  {
    return $this->catalogItem;
  }
  /** @param string */
  public function setGcsPath($gcsPath)
  {
    $this->gcsPath = $gcsPath;
  }
  /** @return string */
  public function getGcsPath()
  {
    return $this->gcsPath;
  }
  /** @param string */
  public function setLineNumber($lineNumber)
  {
    $this->lineNumber = $lineNumber;
  }
  /** @return string */
  public function getLineNumber()
  {
    return $this->lineNumber;
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
  public function setProduct($product)
  {
    $this->product = $product;
  }
  /** @return string */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param string */
  public function setUserEvent($userEvent)
  {
    $this->userEvent = $userEvent;
  }
  /** @return string */
  public function getUserEvent()
  {
    return $this->userEvent;
  }
}

class GoogleCloudRetailLoggingServiceContext extends \Google\Model
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

class GoogleCloudRetailLoggingSourceLocation extends \Google\Model
{
  /** @var string */
  public $functionName;

  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
}

class GoogleCloudRetailV2AddCatalogAttributeRequest extends \Google\Model
{
  /** @var GoogleCloudRetailV2CatalogAttribute */
  public $catalogAttribute;
  protected $catalogAttributeType = GoogleCloudRetailV2CatalogAttribute::class;
  protected $catalogAttributeDataType = '';
  /** @param GoogleCloudRetailV2CatalogAttribute */
  public function setCatalogAttribute(GoogleCloudRetailV2CatalogAttribute $catalogAttribute)
  {
    $this->catalogAttribute = $catalogAttribute;
  }
  /** @return GoogleCloudRetailV2CatalogAttribute */
  public function getCatalogAttribute()
  {
    return $this->catalogAttribute;
  }
}

class GoogleCloudRetailV2AddControlRequest extends \Google\Model
{
  /** @var string */
  public $controlId;

  /** @param string */
  public function setControlId($controlId)
  {
    $this->controlId = $controlId;
  }
  /** @return string */
  public function getControlId()
  {
    return $this->controlId;
  }
}

class GoogleCloudRetailV2AddFulfillmentPlacesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2AddFulfillmentPlacesRequest extends \Google\Collection
{
  /** @var string */
  public $addTime;
  /** @var bool */
  public $allowMissing;
  /** @var string[] */
  public $placeIds;
  /** @var string */
  public $type;
  protected $collection_key = 'placeIds';
  /** @param string */
  public function setAddTime($addTime)
  {
    $this->addTime = $addTime;
  }
  /** @return string */
  public function getAddTime()
  {
    return $this->addTime;
  }
  /** @param bool */
  public function setAllowMissing($allowMissing)
  {
    $this->allowMissing = $allowMissing;
  }
  /** @return bool */
  public function getAllowMissing()
  {
    return $this->allowMissing;
  }
  /** @param string[] */
  public function setPlaceIds($placeIds)
  {
    $this->placeIds = $placeIds;
  }
  /** @return string[] */
  public function getPlaceIds()
  {
    return $this->placeIds;
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

class GoogleCloudRetailV2AddFulfillmentPlacesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2AddLocalInventoriesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2AddLocalInventoriesRequest extends \Google\Collection
{
  /** @var string */
  public $addMask;
  /** @var string */
  public $addTime;
  /** @var bool */
  public $allowMissing;
  /** @var GoogleCloudRetailV2LocalInventory[] */
  public $localInventories;
  protected $collection_key = 'localInventories';
  protected $localInventoriesType = GoogleCloudRetailV2LocalInventory::class;
  protected $localInventoriesDataType = 'array';
  /** @param string */
  public function setAddMask($addMask)
  {
    $this->addMask = $addMask;
  }
  /** @return string */
  public function getAddMask()
  {
    return $this->addMask;
  }
  /** @param string */
  public function setAddTime($addTime)
  {
    $this->addTime = $addTime;
  }
  /** @return string */
  public function getAddTime()
  {
    return $this->addTime;
  }
  /** @param bool */
  public function setAllowMissing($allowMissing)
  {
    $this->allowMissing = $allowMissing;
  }
  /** @return bool */
  public function getAllowMissing()
  {
    return $this->allowMissing;
  }
  /** @param GoogleCloudRetailV2LocalInventory[] */
  public function setLocalInventories($localInventories)
  {
    $this->localInventories = $localInventories;
  }
  /** @return GoogleCloudRetailV2LocalInventory[] */
  public function getLocalInventories()
  {
    return $this->localInventories;
  }
}

class GoogleCloudRetailV2AddLocalInventoriesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2AttributesConfig extends \Google\Model
{
  /** @var string */
  public $attributeConfigLevel;
  /** @var GoogleCloudRetailV2CatalogAttribute[] */
  public $catalogAttributes;
  /** @var string */
  public $name;
  protected $catalogAttributesType = GoogleCloudRetailV2CatalogAttribute::class;
  protected $catalogAttributesDataType = 'map';
  /** @param string */
  public function setAttributeConfigLevel($attributeConfigLevel)
  {
    $this->attributeConfigLevel = $attributeConfigLevel;
  }
  /** @return string */
  public function getAttributeConfigLevel()
  {
    return $this->attributeConfigLevel;
  }
  /** @param GoogleCloudRetailV2CatalogAttribute[] */
  public function setCatalogAttributes($catalogAttributes)
  {
    $this->catalogAttributes = $catalogAttributes;
  }
  /** @return GoogleCloudRetailV2CatalogAttribute[] */
  public function getCatalogAttributes()
  {
    return $this->catalogAttributes;
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

class GoogleCloudRetailV2Audience extends \Google\Collection
{
  /** @var string[] */
  public $ageGroups;
  /** @var string[] */
  public $genders;
  protected $collection_key = 'genders';
  /** @param string[] */
  public function setAgeGroups($ageGroups)
  {
    $this->ageGroups = $ageGroups;
  }
  /** @return string[] */
  public function getAgeGroups()
  {
    return $this->ageGroups;
  }
  /** @param string[] */
  public function setGenders($genders)
  {
    $this->genders = $genders;
  }
  /** @return string[] */
  public function getGenders()
  {
    return $this->genders;
  }
}

class GoogleCloudRetailV2BigQuerySource extends \Google\Model
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

class GoogleCloudRetailV2Catalog extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GoogleCloudRetailV2ProductLevelConfig */
  public $productLevelConfig;
  protected $productLevelConfigType = GoogleCloudRetailV2ProductLevelConfig::class;
  protected $productLevelConfigDataType = '';
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
  /** @param GoogleCloudRetailV2ProductLevelConfig */
  public function setProductLevelConfig(GoogleCloudRetailV2ProductLevelConfig $productLevelConfig)
  {
    $this->productLevelConfig = $productLevelConfig;
  }
  /** @return GoogleCloudRetailV2ProductLevelConfig */
  public function getProductLevelConfig()
  {
    return $this->productLevelConfig;
  }
}

class GoogleCloudRetailV2CatalogAttribute extends \Google\Model
{
  /** @var string */
  public $dynamicFacetableOption;
  /** @var string */
  public $exactSearchableOption;
  /** @var bool */
  public $inUse;
  /** @var string */
  public $indexableOption;
  /** @var string */
  public $key;
  /** @var string */
  public $retrievableOption;
  /** @var string */
  public $searchableOption;
  /** @var string */
  public $type;

  /** @param string */
  public function setDynamicFacetableOption($dynamicFacetableOption)
  {
    $this->dynamicFacetableOption = $dynamicFacetableOption;
  }
  /** @return string */
  public function getDynamicFacetableOption()
  {
    return $this->dynamicFacetableOption;
  }
  /** @param string */
  public function setExactSearchableOption($exactSearchableOption)
  {
    $this->exactSearchableOption = $exactSearchableOption;
  }
  /** @return string */
  public function getExactSearchableOption()
  {
    return $this->exactSearchableOption;
  }
  /** @param bool */
  public function setInUse($inUse)
  {
    $this->inUse = $inUse;
  }
  /** @return bool */
  public function getInUse()
  {
    return $this->inUse;
  }
  /** @param string */
  public function setIndexableOption($indexableOption)
  {
    $this->indexableOption = $indexableOption;
  }
  /** @return string */
  public function getIndexableOption()
  {
    return $this->indexableOption;
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
  public function setRetrievableOption($retrievableOption)
  {
    $this->retrievableOption = $retrievableOption;
  }
  /** @return string */
  public function getRetrievableOption()
  {
    return $this->retrievableOption;
  }
  /** @param string */
  public function setSearchableOption($searchableOption)
  {
    $this->searchableOption = $searchableOption;
  }
  /** @return string */
  public function getSearchableOption()
  {
    return $this->searchableOption;
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

class GoogleCloudRetailV2ColorInfo extends \Google\Collection
{
  /** @var string[] */
  public $colorFamilies;
  /** @var string[] */
  public $colors;
  protected $collection_key = 'colors';
  /** @param string[] */
  public function setColorFamilies($colorFamilies)
  {
    $this->colorFamilies = $colorFamilies;
  }
  /** @return string[] */
  public function getColorFamilies()
  {
    return $this->colorFamilies;
  }
  /** @param string[] */
  public function setColors($colors)
  {
    $this->colors = $colors;
  }
  /** @return string[] */
  public function getColors()
  {
    return $this->colors;
  }
}

class GoogleCloudRetailV2CompleteQueryResponse extends \Google\Collection
{
  /** @var string */
  public $attributionToken;
  /** @var GoogleCloudRetailV2CompleteQueryResponseCompletionResult[] */
  public $completionResults;
  /** @var GoogleCloudRetailV2CompleteQueryResponseRecentSearchResult[] */
  public $recentSearchResults;
  protected $collection_key = 'recentSearchResults';
  protected $completionResultsType = GoogleCloudRetailV2CompleteQueryResponseCompletionResult::class;
  protected $completionResultsDataType = 'array';
  protected $recentSearchResultsType = GoogleCloudRetailV2CompleteQueryResponseRecentSearchResult::class;
  protected $recentSearchResultsDataType = 'array';
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
  /** @param GoogleCloudRetailV2CompleteQueryResponseCompletionResult[] */
  public function setCompletionResults($completionResults)
  {
    $this->completionResults = $completionResults;
  }
  /** @return GoogleCloudRetailV2CompleteQueryResponseCompletionResult[] */
  public function getCompletionResults()
  {
    return $this->completionResults;
  }
  /** @param GoogleCloudRetailV2CompleteQueryResponseRecentSearchResult[] */
  public function setRecentSearchResults($recentSearchResults)
  {
    $this->recentSearchResults = $recentSearchResults;
  }
  /** @return GoogleCloudRetailV2CompleteQueryResponseRecentSearchResult[] */
  public function getRecentSearchResults()
  {
    return $this->recentSearchResults;
  }
}

class GoogleCloudRetailV2CompleteQueryResponseCompletionResult extends \Google\Model
{
  /** @var GoogleCloudRetailV2CustomAttribute[] */
  public $attributes;
  /** @var string */
  public $suggestion;
  protected $attributesType = GoogleCloudRetailV2CustomAttribute::class;
  protected $attributesDataType = 'map';
  /** @param GoogleCloudRetailV2CustomAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudRetailV2CustomAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setSuggestion($suggestion)
  {
    $this->suggestion = $suggestion;
  }
  /** @return string */
  public function getSuggestion()
  {
    return $this->suggestion;
  }
}

class GoogleCloudRetailV2CompleteQueryResponseRecentSearchResult extends \Google\Model
{
  /** @var string */
  public $recentSearch;

  /** @param string */
  public function setRecentSearch($recentSearch)
  {
    $this->recentSearch = $recentSearch;
  }
  /** @return string */
  public function getRecentSearch()
  {
    return $this->recentSearch;
  }
}

class GoogleCloudRetailV2CompletionConfig extends \Google\Model
{
  /** @var GoogleCloudRetailV2CompletionDataInputConfig */
  public $allowlistInputConfig;
  /** @var bool */
  public $autoLearning;
  /** @var GoogleCloudRetailV2CompletionDataInputConfig */
  public $denylistInputConfig;
  /** @var string */
  public $lastAllowlistImportOperation;
  /** @var string */
  public $lastDenylistImportOperation;
  /** @var string */
  public $lastSuggestionsImportOperation;
  /** @var string */
  public $matchingOrder;
  /** @var int */
  public $maxSuggestions;
  /** @var int */
  public $minPrefixLength;
  /** @var string */
  public $name;
  /** @var GoogleCloudRetailV2CompletionDataInputConfig */
  public $suggestionsInputConfig;
  protected $allowlistInputConfigType = GoogleCloudRetailV2CompletionDataInputConfig::class;
  protected $allowlistInputConfigDataType = '';
  protected $denylistInputConfigType = GoogleCloudRetailV2CompletionDataInputConfig::class;
  protected $denylistInputConfigDataType = '';
  protected $suggestionsInputConfigType = GoogleCloudRetailV2CompletionDataInputConfig::class;
  protected $suggestionsInputConfigDataType = '';
  /** @param GoogleCloudRetailV2CompletionDataInputConfig */
  public function setAllowlistInputConfig(GoogleCloudRetailV2CompletionDataInputConfig $allowlistInputConfig)
  {
    $this->allowlistInputConfig = $allowlistInputConfig;
  }
  /** @return GoogleCloudRetailV2CompletionDataInputConfig */
  public function getAllowlistInputConfig()
  {
    return $this->allowlistInputConfig;
  }
  /** @param bool */
  public function setAutoLearning($autoLearning)
  {
    $this->autoLearning = $autoLearning;
  }
  /** @return bool */
  public function getAutoLearning()
  {
    return $this->autoLearning;
  }
  /** @param GoogleCloudRetailV2CompletionDataInputConfig */
  public function setDenylistInputConfig(GoogleCloudRetailV2CompletionDataInputConfig $denylistInputConfig)
  {
    $this->denylistInputConfig = $denylistInputConfig;
  }
  /** @return GoogleCloudRetailV2CompletionDataInputConfig */
  public function getDenylistInputConfig()
  {
    return $this->denylistInputConfig;
  }
  /** @param string */
  public function setLastAllowlistImportOperation($lastAllowlistImportOperation)
  {
    $this->lastAllowlistImportOperation = $lastAllowlistImportOperation;
  }
  /** @return string */
  public function getLastAllowlistImportOperation()
  {
    return $this->lastAllowlistImportOperation;
  }
  /** @param string */
  public function setLastDenylistImportOperation($lastDenylistImportOperation)
  {
    $this->lastDenylistImportOperation = $lastDenylistImportOperation;
  }
  /** @return string */
  public function getLastDenylistImportOperation()
  {
    return $this->lastDenylistImportOperation;
  }
  /** @param string */
  public function setLastSuggestionsImportOperation($lastSuggestionsImportOperation)
  {
    $this->lastSuggestionsImportOperation = $lastSuggestionsImportOperation;
  }
  /** @return string */
  public function getLastSuggestionsImportOperation()
  {
    return $this->lastSuggestionsImportOperation;
  }
  /** @param string */
  public function setMatchingOrder($matchingOrder)
  {
    $this->matchingOrder = $matchingOrder;
  }
  /** @return string */
  public function getMatchingOrder()
  {
    return $this->matchingOrder;
  }
  /** @param int */
  public function setMaxSuggestions($maxSuggestions)
  {
    $this->maxSuggestions = $maxSuggestions;
  }
  /** @return int */
  public function getMaxSuggestions()
  {
    return $this->maxSuggestions;
  }
  /** @param int */
  public function setMinPrefixLength($minPrefixLength)
  {
    $this->minPrefixLength = $minPrefixLength;
  }
  /** @return int */
  public function getMinPrefixLength()
  {
    return $this->minPrefixLength;
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
  /** @param GoogleCloudRetailV2CompletionDataInputConfig */
  public function setSuggestionsInputConfig(GoogleCloudRetailV2CompletionDataInputConfig $suggestionsInputConfig)
  {
    $this->suggestionsInputConfig = $suggestionsInputConfig;
  }
  /** @return GoogleCloudRetailV2CompletionDataInputConfig */
  public function getSuggestionsInputConfig()
  {
    return $this->suggestionsInputConfig;
  }
}

class GoogleCloudRetailV2CompletionDataInputConfig extends \Google\Model
{
  /** @var GoogleCloudRetailV2BigQuerySource */
  public $bigQuerySource;
  protected $bigQuerySourceType = GoogleCloudRetailV2BigQuerySource::class;
  protected $bigQuerySourceDataType = '';
  /** @param GoogleCloudRetailV2BigQuerySource */
  public function setBigQuerySource(GoogleCloudRetailV2BigQuerySource $bigQuerySource)
  {
    $this->bigQuerySource = $bigQuerySource;
  }
  /** @return GoogleCloudRetailV2BigQuerySource */
  public function getBigQuerySource()
  {
    return $this->bigQuerySource;
  }
}

class GoogleCloudRetailV2CompletionDetail extends \Google\Model
{
  /** @var string */
  public $completionAttributionToken;
  /** @var int */
  public $selectedPosition;
  /** @var string */
  public $selectedSuggestion;

  /** @param string */
  public function setCompletionAttributionToken($completionAttributionToken)
  {
    $this->completionAttributionToken = $completionAttributionToken;
  }
  /** @return string */
  public function getCompletionAttributionToken()
  {
    return $this->completionAttributionToken;
  }
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

class GoogleCloudRetailV2Condition extends \Google\Collection
{
  /** @var GoogleCloudRetailV2ConditionTimeRange[] */
  public $activeTimeRange;
  /** @var GoogleCloudRetailV2ConditionQueryTerm[] */
  public $queryTerms;
  protected $collection_key = 'queryTerms';
  protected $activeTimeRangeType = GoogleCloudRetailV2ConditionTimeRange::class;
  protected $activeTimeRangeDataType = 'array';
  protected $queryTermsType = GoogleCloudRetailV2ConditionQueryTerm::class;
  protected $queryTermsDataType = 'array';
  /** @param GoogleCloudRetailV2ConditionTimeRange[] */
  public function setActiveTimeRange($activeTimeRange)
  {
    $this->activeTimeRange = $activeTimeRange;
  }
  /** @return GoogleCloudRetailV2ConditionTimeRange[] */
  public function getActiveTimeRange()
  {
    return $this->activeTimeRange;
  }
  /** @param GoogleCloudRetailV2ConditionQueryTerm[] */
  public function setQueryTerms($queryTerms)
  {
    $this->queryTerms = $queryTerms;
  }
  /** @return GoogleCloudRetailV2ConditionQueryTerm[] */
  public function getQueryTerms()
  {
    return $this->queryTerms;
  }
}

class GoogleCloudRetailV2ConditionQueryTerm extends \Google\Model
{
  /** @var bool */
  public $fullMatch;
  /** @var string */
  public $value;

  /** @param bool */
  public function setFullMatch($fullMatch)
  {
    $this->fullMatch = $fullMatch;
  }
  /** @return bool */
  public function getFullMatch()
  {
    return $this->fullMatch;
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

class GoogleCloudRetailV2ConditionTimeRange extends \Google\Model
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

class GoogleCloudRetailV2Control extends \Google\Collection
{
  /** @var string[] */
  public $associatedServingConfigIds;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GoogleCloudRetailV2Rule */
  public $rule;
  /** @var string[] */
  public $searchSolutionUseCase;
  /** @var string[] */
  public $solutionTypes;
  protected $collection_key = 'solutionTypes';
  protected $ruleType = GoogleCloudRetailV2Rule::class;
  protected $ruleDataType = '';
  /** @param string[] */
  public function setAssociatedServingConfigIds($associatedServingConfigIds)
  {
    $this->associatedServingConfigIds = $associatedServingConfigIds;
  }
  /** @return string[] */
  public function getAssociatedServingConfigIds()
  {
    return $this->associatedServingConfigIds;
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
  /** @param GoogleCloudRetailV2Rule */
  public function setRule(GoogleCloudRetailV2Rule $rule)
  {
    $this->rule = $rule;
  }
  /** @return GoogleCloudRetailV2Rule */
  public function getRule()
  {
    return $this->rule;
  }
  /** @param string[] */
  public function setSearchSolutionUseCase($searchSolutionUseCase)
  {
    $this->searchSolutionUseCase = $searchSolutionUseCase;
  }
  /** @return string[] */
  public function getSearchSolutionUseCase()
  {
    return $this->searchSolutionUseCase;
  }
  /** @param string[] */
  public function setSolutionTypes($solutionTypes)
  {
    $this->solutionTypes = $solutionTypes;
  }
  /** @return string[] */
  public function getSolutionTypes()
  {
    return $this->solutionTypes;
  }
}

class GoogleCloudRetailV2CustomAttribute extends \Google\Collection
{
  /** @var bool */
  public $indexable;
  public $numbers;
  /** @var bool */
  public $searchable;
  /** @var string[] */
  public $text;
  protected $collection_key = 'text';
  /** @param bool */
  public function setIndexable($indexable)
  {
    $this->indexable = $indexable;
  }
  /** @return bool */
  public function getIndexable()
  {
    return $this->indexable;
  }
  public function setNumbers($numbers)
  {
    $this->numbers = $numbers;
  }
  public function getNumbers()
  {
    return $this->numbers;
  }
  /** @param bool */
  public function setSearchable($searchable)
  {
    $this->searchable = $searchable;
  }
  /** @return bool */
  public function getSearchable()
  {
    return $this->searchable;
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

class GoogleCloudRetailV2FulfillmentInfo extends \Google\Collection
{
  /** @var string[] */
  public $placeIds;
  /** @var string */
  public $type;
  protected $collection_key = 'placeIds';
  /** @param string[] */
  public function setPlaceIds($placeIds)
  {
    $this->placeIds = $placeIds;
  }
  /** @return string[] */
  public function getPlaceIds()
  {
    return $this->placeIds;
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

class GoogleCloudRetailV2GcsSource extends \Google\Collection
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

class GoogleCloudRetailV2GetDefaultBranchResponse extends \Google\Model
{
  /** @var string */
  public $branch;
  /** @var string */
  public $note;
  /** @var string */
  public $setTime;

  /** @param string */
  public function setBranch($branch)
  {
    $this->branch = $branch;
  }
  /** @return string */
  public function getBranch()
  {
    return $this->branch;
  }
  /** @param string */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /** @return string */
  public function getNote()
  {
    return $this->note;
  }
  /** @param string */
  public function setSetTime($setTime)
  {
    $this->setTime = $setTime;
  }
  /** @return string */
  public function getSetTime()
  {
    return $this->setTime;
  }
}

class GoogleCloudRetailV2Image extends \Google\Model
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

class GoogleCloudRetailV2ImportCompletionDataRequest extends \Google\Model
{
  /** @var GoogleCloudRetailV2CompletionDataInputConfig */
  public $inputConfig;
  /** @var string */
  public $notificationPubsubTopic;
  protected $inputConfigType = GoogleCloudRetailV2CompletionDataInputConfig::class;
  protected $inputConfigDataType = '';
  /** @param GoogleCloudRetailV2CompletionDataInputConfig */
  public function setInputConfig(GoogleCloudRetailV2CompletionDataInputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudRetailV2CompletionDataInputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param string */
  public function setNotificationPubsubTopic($notificationPubsubTopic)
  {
    $this->notificationPubsubTopic = $notificationPubsubTopic;
  }
  /** @return string */
  public function getNotificationPubsubTopic()
  {
    return $this->notificationPubsubTopic;
  }
}

class GoogleCloudRetailV2ImportCompletionDataResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
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

class GoogleCloudRetailV2ImportErrorsConfig extends \Google\Model
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

class GoogleCloudRetailV2ImportMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $failureCount;
  /** @var string */
  public $notificationPubsubTopic;
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
  public function setNotificationPubsubTopic($notificationPubsubTopic)
  {
    $this->notificationPubsubTopic = $notificationPubsubTopic;
  }
  /** @return string */
  public function getNotificationPubsubTopic()
  {
    return $this->notificationPubsubTopic;
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

class GoogleCloudRetailV2ImportProductsRequest extends \Google\Model
{
  /** @var GoogleCloudRetailV2ImportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRetailV2ProductInputConfig */
  public $inputConfig;
  /** @var string */
  public $notificationPubsubTopic;
  /** @var string */
  public $reconciliationMode;
  /** @var string */
  public $requestId;
  /** @var string */
  public $updateMask;
  protected $errorsConfigType = GoogleCloudRetailV2ImportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $inputConfigType = GoogleCloudRetailV2ProductInputConfig::class;
  protected $inputConfigDataType = '';
  /** @param GoogleCloudRetailV2ImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2ImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2ImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRetailV2ProductInputConfig */
  public function setInputConfig(GoogleCloudRetailV2ProductInputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudRetailV2ProductInputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param string */
  public function setNotificationPubsubTopic($notificationPubsubTopic)
  {
    $this->notificationPubsubTopic = $notificationPubsubTopic;
  }
  /** @return string */
  public function getNotificationPubsubTopic()
  {
    return $this->notificationPubsubTopic;
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

class GoogleCloudRetailV2ImportProductsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRetailV2ImportErrorsConfig */
  public $errorsConfig;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRetailV2ImportErrorsConfig::class;
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
  /** @param GoogleCloudRetailV2ImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2ImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2ImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
}

class GoogleCloudRetailV2ImportUserEventsRequest extends \Google\Model
{
  /** @var GoogleCloudRetailV2ImportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRetailV2UserEventInputConfig */
  public $inputConfig;
  protected $errorsConfigType = GoogleCloudRetailV2ImportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $inputConfigType = GoogleCloudRetailV2UserEventInputConfig::class;
  protected $inputConfigDataType = '';
  /** @param GoogleCloudRetailV2ImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2ImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2ImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRetailV2UserEventInputConfig */
  public function setInputConfig(GoogleCloudRetailV2UserEventInputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudRetailV2UserEventInputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
}

class GoogleCloudRetailV2ImportUserEventsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRetailV2ImportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRetailV2UserEventImportSummary */
  public $importSummary;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRetailV2ImportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $importSummaryType = GoogleCloudRetailV2UserEventImportSummary::class;
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
  /** @param GoogleCloudRetailV2ImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2ImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2ImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRetailV2UserEventImportSummary */
  public function setImportSummary(GoogleCloudRetailV2UserEventImportSummary $importSummary)
  {
    $this->importSummary = $importSummary;
  }
  /** @return GoogleCloudRetailV2UserEventImportSummary */
  public function getImportSummary()
  {
    return $this->importSummary;
  }
}

class GoogleCloudRetailV2Interval extends \Google\Model
{
  public $exclusiveMaximum;
  public $exclusiveMinimum;
  public $maximum;
  public $minimum;

  public function setExclusiveMaximum($exclusiveMaximum)
  {
    $this->exclusiveMaximum = $exclusiveMaximum;
  }
  public function getExclusiveMaximum()
  {
    return $this->exclusiveMaximum;
  }
  public function setExclusiveMinimum($exclusiveMinimum)
  {
    $this->exclusiveMinimum = $exclusiveMinimum;
  }
  public function getExclusiveMinimum()
  {
    return $this->exclusiveMinimum;
  }
  public function setMaximum($maximum)
  {
    $this->maximum = $maximum;
  }
  public function getMaximum()
  {
    return $this->maximum;
  }
  public function setMinimum($minimum)
  {
    $this->minimum = $minimum;
  }
  public function getMinimum()
  {
    return $this->minimum;
  }
}

class GoogleCloudRetailV2ListCatalogsResponse extends \Google\Collection
{
  /** @var GoogleCloudRetailV2Catalog[] */
  public $catalogs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'catalogs';
  protected $catalogsType = GoogleCloudRetailV2Catalog::class;
  protected $catalogsDataType = 'array';
  /** @param GoogleCloudRetailV2Catalog[] */
  public function setCatalogs($catalogs)
  {
    $this->catalogs = $catalogs;
  }
  /** @return GoogleCloudRetailV2Catalog[] */
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

class GoogleCloudRetailV2ListControlsResponse extends \Google\Collection
{
  /** @var GoogleCloudRetailV2Control[] */
  public $controls;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'controls';
  protected $controlsType = GoogleCloudRetailV2Control::class;
  protected $controlsDataType = 'array';
  /** @param GoogleCloudRetailV2Control[] */
  public function setControls($controls)
  {
    $this->controls = $controls;
  }
  /** @return GoogleCloudRetailV2Control[] */
  public function getControls()
  {
    return $this->controls;
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

class GoogleCloudRetailV2ListProductsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRetailV2Product[] */
  public $products;
  protected $collection_key = 'products';
  protected $productsType = GoogleCloudRetailV2Product::class;
  protected $productsDataType = 'array';
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
  /** @param GoogleCloudRetailV2Product[] */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /** @return GoogleCloudRetailV2Product[] */
  public function getProducts()
  {
    return $this->products;
  }
}

class GoogleCloudRetailV2ListServingConfigsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRetailV2ServingConfig[] */
  public $servingConfigs;
  protected $collection_key = 'servingConfigs';
  protected $servingConfigsType = GoogleCloudRetailV2ServingConfig::class;
  protected $servingConfigsDataType = 'array';
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
  /** @param GoogleCloudRetailV2ServingConfig[] */
  public function setServingConfigs($servingConfigs)
  {
    $this->servingConfigs = $servingConfigs;
  }
  /** @return GoogleCloudRetailV2ServingConfig[] */
  public function getServingConfigs()
  {
    return $this->servingConfigs;
  }
}

class GoogleCloudRetailV2LocalInventory extends \Google\Collection
{
  /** @var GoogleCloudRetailV2CustomAttribute[] */
  public $attributes;
  /** @var string[] */
  public $fulfillmentTypes;
  /** @var string */
  public $placeId;
  /** @var GoogleCloudRetailV2PriceInfo */
  public $priceInfo;
  protected $collection_key = 'fulfillmentTypes';
  protected $attributesType = GoogleCloudRetailV2CustomAttribute::class;
  protected $attributesDataType = 'map';
  protected $priceInfoType = GoogleCloudRetailV2PriceInfo::class;
  protected $priceInfoDataType = '';
  /** @param GoogleCloudRetailV2CustomAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudRetailV2CustomAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string[] */
  public function setFulfillmentTypes($fulfillmentTypes)
  {
    $this->fulfillmentTypes = $fulfillmentTypes;
  }
  /** @return string[] */
  public function getFulfillmentTypes()
  {
    return $this->fulfillmentTypes;
  }
  /** @param string */
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  /** @return string */
  public function getPlaceId()
  {
    return $this->placeId;
  }
  /** @param GoogleCloudRetailV2PriceInfo */
  public function setPriceInfo(GoogleCloudRetailV2PriceInfo $priceInfo)
  {
    $this->priceInfo = $priceInfo;
  }
  /** @return GoogleCloudRetailV2PriceInfo */
  public function getPriceInfo()
  {
    return $this->priceInfo;
  }
}

class GoogleCloudRetailV2PredictRequest extends \Google\Model
{
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
  /** @var GoogleCloudRetailV2UserEvent */
  public $userEvent;
  /** @var bool */
  public $validateOnly;
  protected $userEventType = GoogleCloudRetailV2UserEvent::class;
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
  /** @param GoogleCloudRetailV2UserEvent */
  public function setUserEvent(GoogleCloudRetailV2UserEvent $userEvent)
  {
    $this->userEvent = $userEvent;
  }
  /** @return GoogleCloudRetailV2UserEvent */
  public function getUserEvent()
  {
    return $this->userEvent;
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

class GoogleCloudRetailV2PredictResponse extends \Google\Collection
{
  /** @var string */
  public $attributionToken;
  /** @var string[] */
  public $missingIds;
  /** @var GoogleCloudRetailV2PredictResponsePredictionResult[] */
  public $results;
  /** @var bool */
  public $validateOnly;
  protected $collection_key = 'results';
  protected $resultsType = GoogleCloudRetailV2PredictResponsePredictionResult::class;
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
  /** @param GoogleCloudRetailV2PredictResponsePredictionResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudRetailV2PredictResponsePredictionResult[] */
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

class GoogleCloudRetailV2PredictResponsePredictionResult extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var array[] */
  public $metadata;

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

class GoogleCloudRetailV2PriceInfo extends \Google\Model
{
  /** @var float */
  public $cost;
  /** @var string */
  public $currencyCode;
  /** @var float */
  public $originalPrice;
  /** @var float */
  public $price;
  /** @var string */
  public $priceEffectiveTime;
  /** @var string */
  public $priceExpireTime;
  /** @var GoogleCloudRetailV2PriceInfoPriceRange */
  public $priceRange;
  protected $priceRangeType = GoogleCloudRetailV2PriceInfoPriceRange::class;
  protected $priceRangeDataType = '';
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
  public function setOriginalPrice($originalPrice)
  {
    $this->originalPrice = $originalPrice;
  }
  /** @return float */
  public function getOriginalPrice()
  {
    return $this->originalPrice;
  }
  /** @param float */
  public function setPrice($price)
  {
    $this->price = $price;
  }
  /** @return float */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setPriceEffectiveTime($priceEffectiveTime)
  {
    $this->priceEffectiveTime = $priceEffectiveTime;
  }
  /** @return string */
  public function getPriceEffectiveTime()
  {
    return $this->priceEffectiveTime;
  }
  /** @param string */
  public function setPriceExpireTime($priceExpireTime)
  {
    $this->priceExpireTime = $priceExpireTime;
  }
  /** @return string */
  public function getPriceExpireTime()
  {
    return $this->priceExpireTime;
  }
  /** @param GoogleCloudRetailV2PriceInfoPriceRange */
  public function setPriceRange(GoogleCloudRetailV2PriceInfoPriceRange $priceRange)
  {
    $this->priceRange = $priceRange;
  }
  /** @return GoogleCloudRetailV2PriceInfoPriceRange */
  public function getPriceRange()
  {
    return $this->priceRange;
  }
}

class GoogleCloudRetailV2PriceInfoPriceRange extends \Google\Model
{
  /** @var GoogleCloudRetailV2Interval */
  public $originalPrice;
  /** @var GoogleCloudRetailV2Interval */
  public $price;
  protected $originalPriceType = GoogleCloudRetailV2Interval::class;
  protected $originalPriceDataType = '';
  protected $priceType = GoogleCloudRetailV2Interval::class;
  protected $priceDataType = '';
  /** @param GoogleCloudRetailV2Interval */
  public function setOriginalPrice(GoogleCloudRetailV2Interval $originalPrice)
  {
    $this->originalPrice = $originalPrice;
  }
  /** @return GoogleCloudRetailV2Interval */
  public function getOriginalPrice()
  {
    return $this->originalPrice;
  }
  /** @param GoogleCloudRetailV2Interval */
  public function setPrice(GoogleCloudRetailV2Interval $price)
  {
    $this->price = $price;
  }
  /** @return GoogleCloudRetailV2Interval */
  public function getPrice()
  {
    return $this->price;
  }
}

class GoogleCloudRetailV2Product extends \Google\Collection
{
  /** @var GoogleCloudRetailV2CustomAttribute[] */
  public $attributes;
  /** @var GoogleCloudRetailV2Audience */
  public $audience;
  /** @var string */
  public $availability;
  /** @var int */
  public $availableQuantity;
  /** @var string */
  public $availableTime;
  /** @var string[] */
  public $brands;
  /** @var string[] */
  public $categories;
  /** @var string[] */
  public $collectionMemberIds;
  /** @var GoogleCloudRetailV2ColorInfo */
  public $colorInfo;
  /** @var string[] */
  public $conditions;
  /** @var string */
  public $description;
  /** @var string */
  public $expireTime;
  /** @var GoogleCloudRetailV2FulfillmentInfo[] */
  public $fulfillmentInfo;
  /** @var string */
  public $gtin;
  /** @var string */
  public $id;
  /** @var GoogleCloudRetailV2Image[] */
  public $images;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudRetailV2LocalInventory[] */
  public $localInventories;
  /** @var string[] */
  public $materials;
  /** @var string */
  public $name;
  /** @var string[] */
  public $patterns;
  /** @var GoogleCloudRetailV2PriceInfo */
  public $priceInfo;
  /** @var string */
  public $primaryProductId;
  /** @var GoogleCloudRetailV2Promotion[] */
  public $promotions;
  /** @var string */
  public $publishTime;
  /** @var GoogleCloudRetailV2Rating */
  public $rating;
  /** @var string */
  public $retrievableFields;
  /** @var string[] */
  public $sizes;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $title;
  /** @var string */
  public $ttl;
  /** @var string */
  public $type;
  /** @var string */
  public $uri;
  /** @var GoogleCloudRetailV2Product[] */
  public $variants;
  protected $collection_key = 'variants';
  protected $attributesType = GoogleCloudRetailV2CustomAttribute::class;
  protected $attributesDataType = 'map';
  protected $audienceType = GoogleCloudRetailV2Audience::class;
  protected $audienceDataType = '';
  protected $colorInfoType = GoogleCloudRetailV2ColorInfo::class;
  protected $colorInfoDataType = '';
  protected $fulfillmentInfoType = GoogleCloudRetailV2FulfillmentInfo::class;
  protected $fulfillmentInfoDataType = 'array';
  protected $imagesType = GoogleCloudRetailV2Image::class;
  protected $imagesDataType = 'array';
  protected $localInventoriesType = GoogleCloudRetailV2LocalInventory::class;
  protected $localInventoriesDataType = 'array';
  protected $priceInfoType = GoogleCloudRetailV2PriceInfo::class;
  protected $priceInfoDataType = '';
  protected $promotionsType = GoogleCloudRetailV2Promotion::class;
  protected $promotionsDataType = 'array';
  protected $ratingType = GoogleCloudRetailV2Rating::class;
  protected $ratingDataType = '';
  protected $variantsType = GoogleCloudRetailV2Product::class;
  protected $variantsDataType = 'array';
  /** @param GoogleCloudRetailV2CustomAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudRetailV2CustomAttribute[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param GoogleCloudRetailV2Audience */
  public function setAudience(GoogleCloudRetailV2Audience $audience)
  {
    $this->audience = $audience;
  }
  /** @return GoogleCloudRetailV2Audience */
  public function getAudience()
  {
    return $this->audience;
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
  public function setAvailableTime($availableTime)
  {
    $this->availableTime = $availableTime;
  }
  /** @return string */
  public function getAvailableTime()
  {
    return $this->availableTime;
  }
  /** @param string[] */
  public function setBrands($brands)
  {
    $this->brands = $brands;
  }
  /** @return string[] */
  public function getBrands()
  {
    return $this->brands;
  }
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
  /** @param string[] */
  public function setCollectionMemberIds($collectionMemberIds)
  {
    $this->collectionMemberIds = $collectionMemberIds;
  }
  /** @return string[] */
  public function getCollectionMemberIds()
  {
    return $this->collectionMemberIds;
  }
  /** @param GoogleCloudRetailV2ColorInfo */
  public function setColorInfo(GoogleCloudRetailV2ColorInfo $colorInfo)
  {
    $this->colorInfo = $colorInfo;
  }
  /** @return GoogleCloudRetailV2ColorInfo */
  public function getColorInfo()
  {
    return $this->colorInfo;
  }
  /** @param string[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return string[] */
  public function getConditions()
  {
    return $this->conditions;
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
  /** @param GoogleCloudRetailV2FulfillmentInfo[] */
  public function setFulfillmentInfo($fulfillmentInfo)
  {
    $this->fulfillmentInfo = $fulfillmentInfo;
  }
  /** @return GoogleCloudRetailV2FulfillmentInfo[] */
  public function getFulfillmentInfo()
  {
    return $this->fulfillmentInfo;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
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
  /** @param GoogleCloudRetailV2Image[] */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /** @return GoogleCloudRetailV2Image[] */
  public function getImages()
  {
    return $this->images;
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
  /** @param GoogleCloudRetailV2LocalInventory[] */
  public function setLocalInventories($localInventories)
  {
    $this->localInventories = $localInventories;
  }
  /** @return GoogleCloudRetailV2LocalInventory[] */
  public function getLocalInventories()
  {
    return $this->localInventories;
  }
  /** @param string[] */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return string[] */
  public function getMaterials()
  {
    return $this->materials;
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
  public function setPatterns($patterns)
  {
    $this->patterns = $patterns;
  }
  /** @return string[] */
  public function getPatterns()
  {
    return $this->patterns;
  }
  /** @param GoogleCloudRetailV2PriceInfo */
  public function setPriceInfo(GoogleCloudRetailV2PriceInfo $priceInfo)
  {
    $this->priceInfo = $priceInfo;
  }
  /** @return GoogleCloudRetailV2PriceInfo */
  public function getPriceInfo()
  {
    return $this->priceInfo;
  }
  /** @param string */
  public function setPrimaryProductId($primaryProductId)
  {
    $this->primaryProductId = $primaryProductId;
  }
  /** @return string */
  public function getPrimaryProductId()
  {
    return $this->primaryProductId;
  }
  /** @param GoogleCloudRetailV2Promotion[] */
  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  /** @return GoogleCloudRetailV2Promotion[] */
  public function getPromotions()
  {
    return $this->promotions;
  }
  /** @param string */
  public function setPublishTime($publishTime)
  {
    $this->publishTime = $publishTime;
  }
  /** @return string */
  public function getPublishTime()
  {
    return $this->publishTime;
  }
  /** @param GoogleCloudRetailV2Rating */
  public function setRating(GoogleCloudRetailV2Rating $rating)
  {
    $this->rating = $rating;
  }
  /** @return GoogleCloudRetailV2Rating */
  public function getRating()
  {
    return $this->rating;
  }
  /** @param string */
  public function setRetrievableFields($retrievableFields)
  {
    $this->retrievableFields = $retrievableFields;
  }
  /** @return string */
  public function getRetrievableFields()
  {
    return $this->retrievableFields;
  }
  /** @param string[] */
  public function setSizes($sizes)
  {
    $this->sizes = $sizes;
  }
  /** @return string[] */
  public function getSizes()
  {
    return $this->sizes;
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
  /** @param GoogleCloudRetailV2Product[] */
  public function setVariants($variants)
  {
    $this->variants = $variants;
  }
  /** @return GoogleCloudRetailV2Product[] */
  public function getVariants()
  {
    return $this->variants;
  }
}

class GoogleCloudRetailV2ProductDetail extends \Google\Model
{
  /** @var GoogleCloudRetailV2Product */
  public $product;
  /** @var int */
  public $quantity;
  protected $productType = GoogleCloudRetailV2Product::class;
  protected $productDataType = '';
  /** @param GoogleCloudRetailV2Product */
  public function setProduct(GoogleCloudRetailV2Product $product)
  {
    $this->product = $product;
  }
  /** @return GoogleCloudRetailV2Product */
  public function getProduct()
  {
    return $this->product;
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

class GoogleCloudRetailV2ProductInlineSource extends \Google\Collection
{
  /** @var GoogleCloudRetailV2Product[] */
  public $products;
  protected $collection_key = 'products';
  protected $productsType = GoogleCloudRetailV2Product::class;
  protected $productsDataType = 'array';
  /** @param GoogleCloudRetailV2Product[] */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /** @return GoogleCloudRetailV2Product[] */
  public function getProducts()
  {
    return $this->products;
  }
}

class GoogleCloudRetailV2ProductInputConfig extends \Google\Model
{
  /** @var GoogleCloudRetailV2BigQuerySource */
  public $bigQuerySource;
  /** @var GoogleCloudRetailV2GcsSource */
  public $gcsSource;
  /** @var GoogleCloudRetailV2ProductInlineSource */
  public $productInlineSource;
  protected $bigQuerySourceType = GoogleCloudRetailV2BigQuerySource::class;
  protected $bigQuerySourceDataType = '';
  protected $gcsSourceType = GoogleCloudRetailV2GcsSource::class;
  protected $gcsSourceDataType = '';
  protected $productInlineSourceType = GoogleCloudRetailV2ProductInlineSource::class;
  protected $productInlineSourceDataType = '';
  /** @param GoogleCloudRetailV2BigQuerySource */
  public function setBigQuerySource(GoogleCloudRetailV2BigQuerySource $bigQuerySource)
  {
    $this->bigQuerySource = $bigQuerySource;
  }
  /** @return GoogleCloudRetailV2BigQuerySource */
  public function getBigQuerySource()
  {
    return $this->bigQuerySource;
  }
  /** @param GoogleCloudRetailV2GcsSource */
  public function setGcsSource(GoogleCloudRetailV2GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudRetailV2GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param GoogleCloudRetailV2ProductInlineSource */
  public function setProductInlineSource(GoogleCloudRetailV2ProductInlineSource $productInlineSource)
  {
    $this->productInlineSource = $productInlineSource;
  }
  /** @return GoogleCloudRetailV2ProductInlineSource */
  public function getProductInlineSource()
  {
    return $this->productInlineSource;
  }
}

class GoogleCloudRetailV2ProductLevelConfig extends \Google\Model
{
  /** @var string */
  public $ingestionProductType;
  /** @var string */
  public $merchantCenterProductIdField;

  /** @param string */
  public function setIngestionProductType($ingestionProductType)
  {
    $this->ingestionProductType = $ingestionProductType;
  }
  /** @return string */
  public function getIngestionProductType()
  {
    return $this->ingestionProductType;
  }
  /** @param string */
  public function setMerchantCenterProductIdField($merchantCenterProductIdField)
  {
    $this->merchantCenterProductIdField = $merchantCenterProductIdField;
  }
  /** @return string */
  public function getMerchantCenterProductIdField()
  {
    return $this->merchantCenterProductIdField;
  }
}

class GoogleCloudRetailV2Promotion extends \Google\Model
{
  /** @var string */
  public $promotionId;

  /** @param string */
  public function setPromotionId($promotionId)
  {
    $this->promotionId = $promotionId;
  }
  /** @return string */
  public function getPromotionId()
  {
    return $this->promotionId;
  }
}

class GoogleCloudRetailV2PurchaseTransaction extends \Google\Model
{
  /** @var float */
  public $cost;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $id;
  /** @var float */
  public $revenue;
  /** @var float */
  public $tax;

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
}

class GoogleCloudRetailV2PurgeMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2PurgeUserEventsRequest extends \Google\Model
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

class GoogleCloudRetailV2PurgeUserEventsResponse extends \Google\Model
{
  /** @var string */
  public $purgedEventsCount;

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
}

class GoogleCloudRetailV2Rating extends \Google\Collection
{
  /** @var float */
  public $averageRating;
  /** @var int */
  public $ratingCount;
  /** @var int[] */
  public $ratingHistogram;
  protected $collection_key = 'ratingHistogram';
  /** @param float */
  public function setAverageRating($averageRating)
  {
    $this->averageRating = $averageRating;
  }
  /** @return float */
  public function getAverageRating()
  {
    return $this->averageRating;
  }
  /** @param int */
  public function setRatingCount($ratingCount)
  {
    $this->ratingCount = $ratingCount;
  }
  /** @return int */
  public function getRatingCount()
  {
    return $this->ratingCount;
  }
  /** @param int[] */
  public function setRatingHistogram($ratingHistogram)
  {
    $this->ratingHistogram = $ratingHistogram;
  }
  /** @return int[] */
  public function getRatingHistogram()
  {
    return $this->ratingHistogram;
  }
}

class GoogleCloudRetailV2RejoinUserEventsMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2RejoinUserEventsRequest extends \Google\Model
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

class GoogleCloudRetailV2RejoinUserEventsResponse extends \Google\Model
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

class GoogleCloudRetailV2RemoveCatalogAttributeRequest extends \Google\Model
{
  /** @var string */
  public $key;

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
}

class GoogleCloudRetailV2RemoveControlRequest extends \Google\Model
{
  /** @var string */
  public $controlId;

  /** @param string */
  public function setControlId($controlId)
  {
    $this->controlId = $controlId;
  }
  /** @return string */
  public function getControlId()
  {
    return $this->controlId;
  }
}

class GoogleCloudRetailV2RemoveFulfillmentPlacesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2RemoveFulfillmentPlacesRequest extends \Google\Collection
{
  /** @var bool */
  public $allowMissing;
  /** @var string[] */
  public $placeIds;
  /** @var string */
  public $removeTime;
  /** @var string */
  public $type;
  protected $collection_key = 'placeIds';
  /** @param bool */
  public function setAllowMissing($allowMissing)
  {
    $this->allowMissing = $allowMissing;
  }
  /** @return bool */
  public function getAllowMissing()
  {
    return $this->allowMissing;
  }
  /** @param string[] */
  public function setPlaceIds($placeIds)
  {
    $this->placeIds = $placeIds;
  }
  /** @return string[] */
  public function getPlaceIds()
  {
    return $this->placeIds;
  }
  /** @param string */
  public function setRemoveTime($removeTime)
  {
    $this->removeTime = $removeTime;
  }
  /** @return string */
  public function getRemoveTime()
  {
    return $this->removeTime;
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

class GoogleCloudRetailV2RemoveFulfillmentPlacesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2RemoveLocalInventoriesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2RemoveLocalInventoriesRequest extends \Google\Collection
{
  /** @var bool */
  public $allowMissing;
  /** @var string[] */
  public $placeIds;
  /** @var string */
  public $removeTime;
  protected $collection_key = 'placeIds';
  /** @param bool */
  public function setAllowMissing($allowMissing)
  {
    $this->allowMissing = $allowMissing;
  }
  /** @return bool */
  public function getAllowMissing()
  {
    return $this->allowMissing;
  }
  /** @param string[] */
  public function setPlaceIds($placeIds)
  {
    $this->placeIds = $placeIds;
  }
  /** @return string[] */
  public function getPlaceIds()
  {
    return $this->placeIds;
  }
  /** @param string */
  public function setRemoveTime($removeTime)
  {
    $this->removeTime = $removeTime;
  }
  /** @return string */
  public function getRemoveTime()
  {
    return $this->removeTime;
  }
}

class GoogleCloudRetailV2RemoveLocalInventoriesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2ReplaceCatalogAttributeRequest extends \Google\Model
{
  /** @var GoogleCloudRetailV2CatalogAttribute */
  public $catalogAttribute;
  /** @var string */
  public $updateMask;
  protected $catalogAttributeType = GoogleCloudRetailV2CatalogAttribute::class;
  protected $catalogAttributeDataType = '';
  /** @param GoogleCloudRetailV2CatalogAttribute */
  public function setCatalogAttribute(GoogleCloudRetailV2CatalogAttribute $catalogAttribute)
  {
    $this->catalogAttribute = $catalogAttribute;
  }
  /** @return GoogleCloudRetailV2CatalogAttribute */
  public function getCatalogAttribute()
  {
    return $this->catalogAttribute;
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

class GoogleCloudRetailV2Rule extends \Google\Model
{
  /** @var GoogleCloudRetailV2RuleBoostAction */
  public $boostAction;
  /** @var GoogleCloudRetailV2Condition */
  public $condition;
  /** @var GoogleCloudRetailV2RuleDoNotAssociateAction */
  public $doNotAssociateAction;
  /** @var GoogleCloudRetailV2RuleFilterAction */
  public $filterAction;
  /** @var GoogleCloudRetailV2RuleIgnoreAction */
  public $ignoreAction;
  /** @var GoogleCloudRetailV2RuleOnewaySynonymsAction */
  public $onewaySynonymsAction;
  /** @var GoogleCloudRetailV2RuleRedirectAction */
  public $redirectAction;
  /** @var GoogleCloudRetailV2RuleReplacementAction */
  public $replacementAction;
  /** @var GoogleCloudRetailV2RuleTwowaySynonymsAction */
  public $twowaySynonymsAction;
  protected $boostActionType = GoogleCloudRetailV2RuleBoostAction::class;
  protected $boostActionDataType = '';
  protected $conditionType = GoogleCloudRetailV2Condition::class;
  protected $conditionDataType = '';
  protected $doNotAssociateActionType = GoogleCloudRetailV2RuleDoNotAssociateAction::class;
  protected $doNotAssociateActionDataType = '';
  protected $filterActionType = GoogleCloudRetailV2RuleFilterAction::class;
  protected $filterActionDataType = '';
  protected $ignoreActionType = GoogleCloudRetailV2RuleIgnoreAction::class;
  protected $ignoreActionDataType = '';
  protected $onewaySynonymsActionType = GoogleCloudRetailV2RuleOnewaySynonymsAction::class;
  protected $onewaySynonymsActionDataType = '';
  protected $redirectActionType = GoogleCloudRetailV2RuleRedirectAction::class;
  protected $redirectActionDataType = '';
  protected $replacementActionType = GoogleCloudRetailV2RuleReplacementAction::class;
  protected $replacementActionDataType = '';
  protected $twowaySynonymsActionType = GoogleCloudRetailV2RuleTwowaySynonymsAction::class;
  protected $twowaySynonymsActionDataType = '';
  /** @param GoogleCloudRetailV2RuleBoostAction */
  public function setBoostAction(GoogleCloudRetailV2RuleBoostAction $boostAction)
  {
    $this->boostAction = $boostAction;
  }
  /** @return GoogleCloudRetailV2RuleBoostAction */
  public function getBoostAction()
  {
    return $this->boostAction;
  }
  /** @param GoogleCloudRetailV2Condition */
  public function setCondition(GoogleCloudRetailV2Condition $condition)
  {
    $this->condition = $condition;
  }
  /** @return GoogleCloudRetailV2Condition */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param GoogleCloudRetailV2RuleDoNotAssociateAction */
  public function setDoNotAssociateAction(GoogleCloudRetailV2RuleDoNotAssociateAction $doNotAssociateAction)
  {
    $this->doNotAssociateAction = $doNotAssociateAction;
  }
  /** @return GoogleCloudRetailV2RuleDoNotAssociateAction */
  public function getDoNotAssociateAction()
  {
    return $this->doNotAssociateAction;
  }
  /** @param GoogleCloudRetailV2RuleFilterAction */
  public function setFilterAction(GoogleCloudRetailV2RuleFilterAction $filterAction)
  {
    $this->filterAction = $filterAction;
  }
  /** @return GoogleCloudRetailV2RuleFilterAction */
  public function getFilterAction()
  {
    return $this->filterAction;
  }
  /** @param GoogleCloudRetailV2RuleIgnoreAction */
  public function setIgnoreAction(GoogleCloudRetailV2RuleIgnoreAction $ignoreAction)
  {
    $this->ignoreAction = $ignoreAction;
  }
  /** @return GoogleCloudRetailV2RuleIgnoreAction */
  public function getIgnoreAction()
  {
    return $this->ignoreAction;
  }
  /** @param GoogleCloudRetailV2RuleOnewaySynonymsAction */
  public function setOnewaySynonymsAction(GoogleCloudRetailV2RuleOnewaySynonymsAction $onewaySynonymsAction)
  {
    $this->onewaySynonymsAction = $onewaySynonymsAction;
  }
  /** @return GoogleCloudRetailV2RuleOnewaySynonymsAction */
  public function getOnewaySynonymsAction()
  {
    return $this->onewaySynonymsAction;
  }
  /** @param GoogleCloudRetailV2RuleRedirectAction */
  public function setRedirectAction(GoogleCloudRetailV2RuleRedirectAction $redirectAction)
  {
    $this->redirectAction = $redirectAction;
  }
  /** @return GoogleCloudRetailV2RuleRedirectAction */
  public function getRedirectAction()
  {
    return $this->redirectAction;
  }
  /** @param GoogleCloudRetailV2RuleReplacementAction */
  public function setReplacementAction(GoogleCloudRetailV2RuleReplacementAction $replacementAction)
  {
    $this->replacementAction = $replacementAction;
  }
  /** @return GoogleCloudRetailV2RuleReplacementAction */
  public function getReplacementAction()
  {
    return $this->replacementAction;
  }
  /** @param GoogleCloudRetailV2RuleTwowaySynonymsAction */
  public function setTwowaySynonymsAction(GoogleCloudRetailV2RuleTwowaySynonymsAction $twowaySynonymsAction)
  {
    $this->twowaySynonymsAction = $twowaySynonymsAction;
  }
  /** @return GoogleCloudRetailV2RuleTwowaySynonymsAction */
  public function getTwowaySynonymsAction()
  {
    return $this->twowaySynonymsAction;
  }
}

class GoogleCloudRetailV2RuleBoostAction extends \Google\Model
{
  /** @var float */
  public $boost;
  /** @var string */
  public $productsFilter;

  /** @param float */
  public function setBoost($boost)
  {
    $this->boost = $boost;
  }
  /** @return float */
  public function getBoost()
  {
    return $this->boost;
  }
  /** @param string */
  public function setProductsFilter($productsFilter)
  {
    $this->productsFilter = $productsFilter;
  }
  /** @return string */
  public function getProductsFilter()
  {
    return $this->productsFilter;
  }
}

class GoogleCloudRetailV2RuleDoNotAssociateAction extends \Google\Collection
{
  /** @var string[] */
  public $doNotAssociateTerms;
  /** @var string[] */
  public $queryTerms;
  /** @var string[] */
  public $terms;
  protected $collection_key = 'terms';
  /** @param string[] */
  public function setDoNotAssociateTerms($doNotAssociateTerms)
  {
    $this->doNotAssociateTerms = $doNotAssociateTerms;
  }
  /** @return string[] */
  public function getDoNotAssociateTerms()
  {
    return $this->doNotAssociateTerms;
  }
  /** @param string[] */
  public function setQueryTerms($queryTerms)
  {
    $this->queryTerms = $queryTerms;
  }
  /** @return string[] */
  public function getQueryTerms()
  {
    return $this->queryTerms;
  }
  /** @param string[] */
  public function setTerms($terms)
  {
    $this->terms = $terms;
  }
  /** @return string[] */
  public function getTerms()
  {
    return $this->terms;
  }
}

class GoogleCloudRetailV2RuleFilterAction extends \Google\Model
{
  /** @var string */
  public $filter;

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
}

class GoogleCloudRetailV2RuleIgnoreAction extends \Google\Collection
{
  /** @var string[] */
  public $ignoreTerms;
  protected $collection_key = 'ignoreTerms';
  /** @param string[] */
  public function setIgnoreTerms($ignoreTerms)
  {
    $this->ignoreTerms = $ignoreTerms;
  }
  /** @return string[] */
  public function getIgnoreTerms()
  {
    return $this->ignoreTerms;
  }
}

class GoogleCloudRetailV2RuleOnewaySynonymsAction extends \Google\Collection
{
  /** @var string[] */
  public $onewayTerms;
  /** @var string[] */
  public $queryTerms;
  /** @var string[] */
  public $synonyms;
  protected $collection_key = 'synonyms';
  /** @param string[] */
  public function setOnewayTerms($onewayTerms)
  {
    $this->onewayTerms = $onewayTerms;
  }
  /** @return string[] */
  public function getOnewayTerms()
  {
    return $this->onewayTerms;
  }
  /** @param string[] */
  public function setQueryTerms($queryTerms)
  {
    $this->queryTerms = $queryTerms;
  }
  /** @return string[] */
  public function getQueryTerms()
  {
    return $this->queryTerms;
  }
  /** @param string[] */
  public function setSynonyms($synonyms)
  {
    $this->synonyms = $synonyms;
  }
  /** @return string[] */
  public function getSynonyms()
  {
    return $this->synonyms;
  }
}

class GoogleCloudRetailV2RuleRedirectAction extends \Google\Model
{
  /** @var string */
  public $redirectUri;

  /** @param string */
  public function setRedirectUri($redirectUri)
  {
    $this->redirectUri = $redirectUri;
  }
  /** @return string */
  public function getRedirectUri()
  {
    return $this->redirectUri;
  }
}

class GoogleCloudRetailV2RuleReplacementAction extends \Google\Collection
{
  /** @var string[] */
  public $queryTerms;
  /** @var string */
  public $replacementTerm;
  /** @var string */
  public $term;
  protected $collection_key = 'queryTerms';
  /** @param string[] */
  public function setQueryTerms($queryTerms)
  {
    $this->queryTerms = $queryTerms;
  }
  /** @return string[] */
  public function getQueryTerms()
  {
    return $this->queryTerms;
  }
  /** @param string */
  public function setReplacementTerm($replacementTerm)
  {
    $this->replacementTerm = $replacementTerm;
  }
  /** @return string */
  public function getReplacementTerm()
  {
    return $this->replacementTerm;
  }
  /** @param string */
  public function setTerm($term)
  {
    $this->term = $term;
  }
  /** @return string */
  public function getTerm()
  {
    return $this->term;
  }
}

class GoogleCloudRetailV2RuleTwowaySynonymsAction extends \Google\Collection
{
  /** @var string[] */
  public $synonyms;
  protected $collection_key = 'synonyms';
  /** @param string[] */
  public function setSynonyms($synonyms)
  {
    $this->synonyms = $synonyms;
  }
  /** @return string[] */
  public function getSynonyms()
  {
    return $this->synonyms;
  }
}

class GoogleCloudRetailV2SearchRequest extends \Google\Collection
{
  /** @var GoogleCloudRetailV2SearchRequestBoostSpec */
  public $boostSpec;
  /** @var string */
  public $branch;
  /** @var string */
  public $canonicalFilter;
  /** @var GoogleCloudRetailV2SearchRequestDynamicFacetSpec */
  public $dynamicFacetSpec;
  /** @var GoogleCloudRetailV2SearchRequestFacetSpec[] */
  public $facetSpecs;
  /** @var string */
  public $filter;
  /** @var string[] */
  public $labels;
  /** @var int */
  public $offset;
  /** @var string */
  public $orderBy;
  /** @var string[] */
  public $pageCategories;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var GoogleCloudRetailV2SearchRequestPersonalizationSpec */
  public $personalizationSpec;
  /** @var string */
  public $query;
  /** @var GoogleCloudRetailV2SearchRequestQueryExpansionSpec */
  public $queryExpansionSpec;
  /** @var string */
  public $searchMode;
  /** @var GoogleCloudRetailV2SearchRequestSpellCorrectionSpec */
  public $spellCorrectionSpec;
  /** @var GoogleCloudRetailV2UserInfo */
  public $userInfo;
  /** @var string[] */
  public $variantRollupKeys;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'variantRollupKeys';
  protected $boostSpecType = GoogleCloudRetailV2SearchRequestBoostSpec::class;
  protected $boostSpecDataType = '';
  protected $dynamicFacetSpecType = GoogleCloudRetailV2SearchRequestDynamicFacetSpec::class;
  protected $dynamicFacetSpecDataType = '';
  protected $facetSpecsType = GoogleCloudRetailV2SearchRequestFacetSpec::class;
  protected $facetSpecsDataType = 'array';
  protected $personalizationSpecType = GoogleCloudRetailV2SearchRequestPersonalizationSpec::class;
  protected $personalizationSpecDataType = '';
  protected $queryExpansionSpecType = GoogleCloudRetailV2SearchRequestQueryExpansionSpec::class;
  protected $queryExpansionSpecDataType = '';
  protected $spellCorrectionSpecType = GoogleCloudRetailV2SearchRequestSpellCorrectionSpec::class;
  protected $spellCorrectionSpecDataType = '';
  protected $userInfoType = GoogleCloudRetailV2UserInfo::class;
  protected $userInfoDataType = '';
  /** @param GoogleCloudRetailV2SearchRequestBoostSpec */
  public function setBoostSpec(GoogleCloudRetailV2SearchRequestBoostSpec $boostSpec)
  {
    $this->boostSpec = $boostSpec;
  }
  /** @return GoogleCloudRetailV2SearchRequestBoostSpec */
  public function getBoostSpec()
  {
    return $this->boostSpec;
  }
  /** @param string */
  public function setBranch($branch)
  {
    $this->branch = $branch;
  }
  /** @return string */
  public function getBranch()
  {
    return $this->branch;
  }
  /** @param string */
  public function setCanonicalFilter($canonicalFilter)
  {
    $this->canonicalFilter = $canonicalFilter;
  }
  /** @return string */
  public function getCanonicalFilter()
  {
    return $this->canonicalFilter;
  }
  /** @param GoogleCloudRetailV2SearchRequestDynamicFacetSpec */
  public function setDynamicFacetSpec(GoogleCloudRetailV2SearchRequestDynamicFacetSpec $dynamicFacetSpec)
  {
    $this->dynamicFacetSpec = $dynamicFacetSpec;
  }
  /** @return GoogleCloudRetailV2SearchRequestDynamicFacetSpec */
  public function getDynamicFacetSpec()
  {
    return $this->dynamicFacetSpec;
  }
  /** @param GoogleCloudRetailV2SearchRequestFacetSpec[] */
  public function setFacetSpecs($facetSpecs)
  {
    $this->facetSpecs = $facetSpecs;
  }
  /** @return GoogleCloudRetailV2SearchRequestFacetSpec[] */
  public function getFacetSpecs()
  {
    return $this->facetSpecs;
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
  /** @param string[] */
  public function setPageCategories($pageCategories)
  {
    $this->pageCategories = $pageCategories;
  }
  /** @return string[] */
  public function getPageCategories()
  {
    return $this->pageCategories;
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
  /** @param GoogleCloudRetailV2SearchRequestPersonalizationSpec */
  public function setPersonalizationSpec(GoogleCloudRetailV2SearchRequestPersonalizationSpec $personalizationSpec)
  {
    $this->personalizationSpec = $personalizationSpec;
  }
  /** @return GoogleCloudRetailV2SearchRequestPersonalizationSpec */
  public function getPersonalizationSpec()
  {
    return $this->personalizationSpec;
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
  /** @param GoogleCloudRetailV2SearchRequestQueryExpansionSpec */
  public function setQueryExpansionSpec(GoogleCloudRetailV2SearchRequestQueryExpansionSpec $queryExpansionSpec)
  {
    $this->queryExpansionSpec = $queryExpansionSpec;
  }
  /** @return GoogleCloudRetailV2SearchRequestQueryExpansionSpec */
  public function getQueryExpansionSpec()
  {
    return $this->queryExpansionSpec;
  }
  /** @param string */
  public function setSearchMode($searchMode)
  {
    $this->searchMode = $searchMode;
  }
  /** @return string */
  public function getSearchMode()
  {
    return $this->searchMode;
  }
  /** @param GoogleCloudRetailV2SearchRequestSpellCorrectionSpec */
  public function setSpellCorrectionSpec(GoogleCloudRetailV2SearchRequestSpellCorrectionSpec $spellCorrectionSpec)
  {
    $this->spellCorrectionSpec = $spellCorrectionSpec;
  }
  /** @return GoogleCloudRetailV2SearchRequestSpellCorrectionSpec */
  public function getSpellCorrectionSpec()
  {
    return $this->spellCorrectionSpec;
  }
  /** @param GoogleCloudRetailV2UserInfo */
  public function setUserInfo(GoogleCloudRetailV2UserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }
  /** @return GoogleCloudRetailV2UserInfo */
  public function getUserInfo()
  {
    return $this->userInfo;
  }
  /** @param string[] */
  public function setVariantRollupKeys($variantRollupKeys)
  {
    $this->variantRollupKeys = $variantRollupKeys;
  }
  /** @return string[] */
  public function getVariantRollupKeys()
  {
    return $this->variantRollupKeys;
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

class GoogleCloudRetailV2SearchRequestBoostSpec extends \Google\Collection
{
  /** @var GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec[] */
  public $conditionBoostSpecs;
  /** @var bool */
  public $skipBoostSpecValidation;
  protected $collection_key = 'conditionBoostSpecs';
  protected $conditionBoostSpecsType = GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec::class;
  protected $conditionBoostSpecsDataType = 'array';
  /** @param GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec[] */
  public function setConditionBoostSpecs($conditionBoostSpecs)
  {
    $this->conditionBoostSpecs = $conditionBoostSpecs;
  }
  /** @return GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec[] */
  public function getConditionBoostSpecs()
  {
    return $this->conditionBoostSpecs;
  }
  /** @param bool */
  public function setSkipBoostSpecValidation($skipBoostSpecValidation)
  {
    $this->skipBoostSpecValidation = $skipBoostSpecValidation;
  }
  /** @return bool */
  public function getSkipBoostSpecValidation()
  {
    return $this->skipBoostSpecValidation;
  }
}

class GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec extends \Google\Model
{
  /** @var float */
  public $boost;
  /** @var string */
  public $condition;

  /** @param float */
  public function setBoost($boost)
  {
    $this->boost = $boost;
  }
  /** @return float */
  public function getBoost()
  {
    return $this->boost;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
}

class GoogleCloudRetailV2SearchRequestDynamicFacetSpec extends \Google\Model
{
  /** @var string */
  public $mode;

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
}

class GoogleCloudRetailV2SearchRequestFacetSpec extends \Google\Collection
{
  /** @var bool */
  public $enableDynamicPosition;
  /** @var string[] */
  public $excludedFilterKeys;
  /** @var GoogleCloudRetailV2SearchRequestFacetSpecFacetKey */
  public $facetKey;
  /** @var int */
  public $limit;
  protected $collection_key = 'excludedFilterKeys';
  protected $facetKeyType = GoogleCloudRetailV2SearchRequestFacetSpecFacetKey::class;
  protected $facetKeyDataType = '';
  /** @param bool */
  public function setEnableDynamicPosition($enableDynamicPosition)
  {
    $this->enableDynamicPosition = $enableDynamicPosition;
  }
  /** @return bool */
  public function getEnableDynamicPosition()
  {
    return $this->enableDynamicPosition;
  }
  /** @param string[] */
  public function setExcludedFilterKeys($excludedFilterKeys)
  {
    $this->excludedFilterKeys = $excludedFilterKeys;
  }
  /** @return string[] */
  public function getExcludedFilterKeys()
  {
    return $this->excludedFilterKeys;
  }
  /** @param GoogleCloudRetailV2SearchRequestFacetSpecFacetKey */
  public function setFacetKey(GoogleCloudRetailV2SearchRequestFacetSpecFacetKey $facetKey)
  {
    $this->facetKey = $facetKey;
  }
  /** @return GoogleCloudRetailV2SearchRequestFacetSpecFacetKey */
  public function getFacetKey()
  {
    return $this->facetKey;
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
}

class GoogleCloudRetailV2SearchRequestFacetSpecFacetKey extends \Google\Collection
{
  /** @var bool */
  public $caseInsensitive;
  /** @var string[] */
  public $contains;
  /** @var GoogleCloudRetailV2Interval[] */
  public $intervals;
  /** @var string */
  public $key;
  /** @var string */
  public $orderBy;
  /** @var string[] */
  public $prefixes;
  /** @var string */
  public $query;
  /** @var string[] */
  public $restrictedValues;
  /** @var bool */
  public $returnMinMax;
  protected $collection_key = 'restrictedValues';
  protected $intervalsType = GoogleCloudRetailV2Interval::class;
  protected $intervalsDataType = 'array';
  /** @param bool */
  public function setCaseInsensitive($caseInsensitive)
  {
    $this->caseInsensitive = $caseInsensitive;
  }
  /** @return bool */
  public function getCaseInsensitive()
  {
    return $this->caseInsensitive;
  }
  /** @param string[] */
  public function setContains($contains)
  {
    $this->contains = $contains;
  }
  /** @return string[] */
  public function getContains()
  {
    return $this->contains;
  }
  /** @param GoogleCloudRetailV2Interval[] */
  public function setIntervals($intervals)
  {
    $this->intervals = $intervals;
  }
  /** @return GoogleCloudRetailV2Interval[] */
  public function getIntervals()
  {
    return $this->intervals;
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
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  /** @return string */
  public function getOrderBy()
  {
    return $this->orderBy;
  }
  /** @param string[] */
  public function setPrefixes($prefixes)
  {
    $this->prefixes = $prefixes;
  }
  /** @return string[] */
  public function getPrefixes()
  {
    return $this->prefixes;
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
  /** @param string[] */
  public function setRestrictedValues($restrictedValues)
  {
    $this->restrictedValues = $restrictedValues;
  }
  /** @return string[] */
  public function getRestrictedValues()
  {
    return $this->restrictedValues;
  }
  /** @param bool */
  public function setReturnMinMax($returnMinMax)
  {
    $this->returnMinMax = $returnMinMax;
  }
  /** @return bool */
  public function getReturnMinMax()
  {
    return $this->returnMinMax;
  }
}

class GoogleCloudRetailV2SearchRequestPersonalizationSpec extends \Google\Model
{
  /** @var string */
  public $mode;

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
}

class GoogleCloudRetailV2SearchRequestQueryExpansionSpec extends \Google\Model
{
  /** @var string */
  public $condition;
  /** @var bool */
  public $pinUnexpandedResults;

  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param bool */
  public function setPinUnexpandedResults($pinUnexpandedResults)
  {
    $this->pinUnexpandedResults = $pinUnexpandedResults;
  }
  /** @return bool */
  public function getPinUnexpandedResults()
  {
    return $this->pinUnexpandedResults;
  }
}

class GoogleCloudRetailV2SearchRequestSpellCorrectionSpec extends \Google\Model
{
  /** @var string */
  public $mode;

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
}

class GoogleCloudRetailV2SearchResponse extends \Google\Collection
{
  /** @var string[] */
  public $appliedControls;
  /** @var string */
  public $attributionToken;
  /** @var string */
  public $correctedQuery;
  /** @var GoogleCloudRetailV2SearchResponseFacet[] */
  public $facets;
  /** @var GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec[] */
  public $invalidConditionBoostSpecs;
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRetailV2SearchResponseQueryExpansionInfo */
  public $queryExpansionInfo;
  /** @var string */
  public $redirectUri;
  /** @var GoogleCloudRetailV2SearchResponseSearchResult[] */
  public $results;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'results';
  protected $facetsType = GoogleCloudRetailV2SearchResponseFacet::class;
  protected $facetsDataType = 'array';
  protected $invalidConditionBoostSpecsType = GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec::class;
  protected $invalidConditionBoostSpecsDataType = 'array';
  protected $queryExpansionInfoType = GoogleCloudRetailV2SearchResponseQueryExpansionInfo::class;
  protected $queryExpansionInfoDataType = '';
  protected $resultsType = GoogleCloudRetailV2SearchResponseSearchResult::class;
  protected $resultsDataType = 'array';
  /** @param string[] */
  public function setAppliedControls($appliedControls)
  {
    $this->appliedControls = $appliedControls;
  }
  /** @return string[] */
  public function getAppliedControls()
  {
    return $this->appliedControls;
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
  /** @param string */
  public function setCorrectedQuery($correctedQuery)
  {
    $this->correctedQuery = $correctedQuery;
  }
  /** @return string */
  public function getCorrectedQuery()
  {
    return $this->correctedQuery;
  }
  /** @param GoogleCloudRetailV2SearchResponseFacet[] */
  public function setFacets($facets)
  {
    $this->facets = $facets;
  }
  /** @return GoogleCloudRetailV2SearchResponseFacet[] */
  public function getFacets()
  {
    return $this->facets;
  }
  /** @param GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec[] */
  public function setInvalidConditionBoostSpecs($invalidConditionBoostSpecs)
  {
    $this->invalidConditionBoostSpecs = $invalidConditionBoostSpecs;
  }
  /** @return GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec[] */
  public function getInvalidConditionBoostSpecs()
  {
    return $this->invalidConditionBoostSpecs;
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
  /** @param GoogleCloudRetailV2SearchResponseQueryExpansionInfo */
  public function setQueryExpansionInfo(GoogleCloudRetailV2SearchResponseQueryExpansionInfo $queryExpansionInfo)
  {
    $this->queryExpansionInfo = $queryExpansionInfo;
  }
  /** @return GoogleCloudRetailV2SearchResponseQueryExpansionInfo */
  public function getQueryExpansionInfo()
  {
    return $this->queryExpansionInfo;
  }
  /** @param string */
  public function setRedirectUri($redirectUri)
  {
    $this->redirectUri = $redirectUri;
  }
  /** @return string */
  public function getRedirectUri()
  {
    return $this->redirectUri;
  }
  /** @param GoogleCloudRetailV2SearchResponseSearchResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudRetailV2SearchResponseSearchResult[] */
  public function getResults()
  {
    return $this->results;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class GoogleCloudRetailV2SearchResponseFacet extends \Google\Collection
{
  /** @var bool */
  public $dynamicFacet;
  /** @var string */
  public $key;
  /** @var GoogleCloudRetailV2SearchResponseFacetFacetValue[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = GoogleCloudRetailV2SearchResponseFacetFacetValue::class;
  protected $valuesDataType = 'array';
  /** @param bool */
  public function setDynamicFacet($dynamicFacet)
  {
    $this->dynamicFacet = $dynamicFacet;
  }
  /** @return bool */
  public function getDynamicFacet()
  {
    return $this->dynamicFacet;
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
  /** @param GoogleCloudRetailV2SearchResponseFacetFacetValue[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return GoogleCloudRetailV2SearchResponseFacetFacetValue[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudRetailV2SearchResponseFacetFacetValue extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var GoogleCloudRetailV2Interval */
  public $interval;
  public $maxValue;
  public $minValue;
  /** @var string */
  public $value;
  protected $intervalType = GoogleCloudRetailV2Interval::class;
  protected $intervalDataType = '';
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
  /** @param GoogleCloudRetailV2Interval */
  public function setInterval(GoogleCloudRetailV2Interval $interval)
  {
    $this->interval = $interval;
  }
  /** @return GoogleCloudRetailV2Interval */
  public function getInterval()
  {
    return $this->interval;
  }
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  public function getMinValue()
  {
    return $this->minValue;
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

class GoogleCloudRetailV2SearchResponseQueryExpansionInfo extends \Google\Model
{
  /** @var bool */
  public $expandedQuery;
  /** @var string */
  public $pinnedResultCount;

  /** @param bool */
  public function setExpandedQuery($expandedQuery)
  {
    $this->expandedQuery = $expandedQuery;
  }
  /** @return bool */
  public function getExpandedQuery()
  {
    return $this->expandedQuery;
  }
  /** @param string */
  public function setPinnedResultCount($pinnedResultCount)
  {
    $this->pinnedResultCount = $pinnedResultCount;
  }
  /** @return string */
  public function getPinnedResultCount()
  {
    return $this->pinnedResultCount;
  }
}

class GoogleCloudRetailV2SearchResponseSearchResult extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var int */
  public $matchingVariantCount;
  /** @var string[] */
  public $matchingVariantFields;
  /** @var string[] */
  public $personalLabels;
  /** @var GoogleCloudRetailV2Product */
  public $product;
  /** @var array[] */
  public $variantRollupValues;
  protected $collection_key = 'personalLabels';
  protected $productType = GoogleCloudRetailV2Product::class;
  protected $productDataType = '';
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
  /** @param int */
  public function setMatchingVariantCount($matchingVariantCount)
  {
    $this->matchingVariantCount = $matchingVariantCount;
  }
  /** @return int */
  public function getMatchingVariantCount()
  {
    return $this->matchingVariantCount;
  }
  /** @param string[] */
  public function setMatchingVariantFields($matchingVariantFields)
  {
    $this->matchingVariantFields = $matchingVariantFields;
  }
  /** @return string[] */
  public function getMatchingVariantFields()
  {
    return $this->matchingVariantFields;
  }
  /** @param string[] */
  public function setPersonalLabels($personalLabels)
  {
    $this->personalLabels = $personalLabels;
  }
  /** @return string[] */
  public function getPersonalLabels()
  {
    return $this->personalLabels;
  }
  /** @param GoogleCloudRetailV2Product */
  public function setProduct(GoogleCloudRetailV2Product $product)
  {
    $this->product = $product;
  }
  /** @return GoogleCloudRetailV2Product */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param array[] */
  public function setVariantRollupValues($variantRollupValues)
  {
    $this->variantRollupValues = $variantRollupValues;
  }
  /** @return array[] */
  public function getVariantRollupValues()
  {
    return $this->variantRollupValues;
  }
}

class GoogleCloudRetailV2ServingConfig extends \Google\Collection
{
  /** @var string[] */
  public $boostControlIds;
  /** @var string */
  public $displayName;
  /** @var string */
  public $diversityLevel;
  /** @var string */
  public $diversityType;
  /** @var string[] */
  public $doNotAssociateControlIds;
  /** @var GoogleCloudRetailV2SearchRequestDynamicFacetSpec */
  public $dynamicFacetSpec;
  /** @var string */
  public $enableCategoryFilterLevel;
  /** @var string[] */
  public $facetControlIds;
  /** @var string[] */
  public $filterControlIds;
  /** @var string[] */
  public $ignoreControlIds;
  /** @var string */
  public $modelId;
  /** @var string */
  public $name;
  /** @var string[] */
  public $onewaySynonymsControlIds;
  /** @var GoogleCloudRetailV2SearchRequestPersonalizationSpec */
  public $personalizationSpec;
  /** @var string */
  public $priceRerankingLevel;
  /** @var string[] */
  public $redirectControlIds;
  /** @var string[] */
  public $replacementControlIds;
  /** @var string[] */
  public $solutionTypes;
  /** @var string[] */
  public $twowaySynonymsControlIds;
  protected $collection_key = 'twowaySynonymsControlIds';
  protected $dynamicFacetSpecType = GoogleCloudRetailV2SearchRequestDynamicFacetSpec::class;
  protected $dynamicFacetSpecDataType = '';
  protected $personalizationSpecType = GoogleCloudRetailV2SearchRequestPersonalizationSpec::class;
  protected $personalizationSpecDataType = '';
  /** @param string[] */
  public function setBoostControlIds($boostControlIds)
  {
    $this->boostControlIds = $boostControlIds;
  }
  /** @return string[] */
  public function getBoostControlIds()
  {
    return $this->boostControlIds;
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
  public function setDiversityLevel($diversityLevel)
  {
    $this->diversityLevel = $diversityLevel;
  }
  /** @return string */
  public function getDiversityLevel()
  {
    return $this->diversityLevel;
  }
  /** @param string */
  public function setDiversityType($diversityType)
  {
    $this->diversityType = $diversityType;
  }
  /** @return string */
  public function getDiversityType()
  {
    return $this->diversityType;
  }
  /** @param string[] */
  public function setDoNotAssociateControlIds($doNotAssociateControlIds)
  {
    $this->doNotAssociateControlIds = $doNotAssociateControlIds;
  }
  /** @return string[] */
  public function getDoNotAssociateControlIds()
  {
    return $this->doNotAssociateControlIds;
  }
  /** @param GoogleCloudRetailV2SearchRequestDynamicFacetSpec */
  public function setDynamicFacetSpec(GoogleCloudRetailV2SearchRequestDynamicFacetSpec $dynamicFacetSpec)
  {
    $this->dynamicFacetSpec = $dynamicFacetSpec;
  }
  /** @return GoogleCloudRetailV2SearchRequestDynamicFacetSpec */
  public function getDynamicFacetSpec()
  {
    return $this->dynamicFacetSpec;
  }
  /** @param string */
  public function setEnableCategoryFilterLevel($enableCategoryFilterLevel)
  {
    $this->enableCategoryFilterLevel = $enableCategoryFilterLevel;
  }
  /** @return string */
  public function getEnableCategoryFilterLevel()
  {
    return $this->enableCategoryFilterLevel;
  }
  /** @param string[] */
  public function setFacetControlIds($facetControlIds)
  {
    $this->facetControlIds = $facetControlIds;
  }
  /** @return string[] */
  public function getFacetControlIds()
  {
    return $this->facetControlIds;
  }
  /** @param string[] */
  public function setFilterControlIds($filterControlIds)
  {
    $this->filterControlIds = $filterControlIds;
  }
  /** @return string[] */
  public function getFilterControlIds()
  {
    return $this->filterControlIds;
  }
  /** @param string[] */
  public function setIgnoreControlIds($ignoreControlIds)
  {
    $this->ignoreControlIds = $ignoreControlIds;
  }
  /** @return string[] */
  public function getIgnoreControlIds()
  {
    return $this->ignoreControlIds;
  }
  /** @param string */
  public function setModelId($modelId)
  {
    $this->modelId = $modelId;
  }
  /** @return string */
  public function getModelId()
  {
    return $this->modelId;
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
  public function setOnewaySynonymsControlIds($onewaySynonymsControlIds)
  {
    $this->onewaySynonymsControlIds = $onewaySynonymsControlIds;
  }
  /** @return string[] */
  public function getOnewaySynonymsControlIds()
  {
    return $this->onewaySynonymsControlIds;
  }
  /** @param GoogleCloudRetailV2SearchRequestPersonalizationSpec */
  public function setPersonalizationSpec(GoogleCloudRetailV2SearchRequestPersonalizationSpec $personalizationSpec)
  {
    $this->personalizationSpec = $personalizationSpec;
  }
  /** @return GoogleCloudRetailV2SearchRequestPersonalizationSpec */
  public function getPersonalizationSpec()
  {
    return $this->personalizationSpec;
  }
  /** @param string */
  public function setPriceRerankingLevel($priceRerankingLevel)
  {
    $this->priceRerankingLevel = $priceRerankingLevel;
  }
  /** @return string */
  public function getPriceRerankingLevel()
  {
    return $this->priceRerankingLevel;
  }
  /** @param string[] */
  public function setRedirectControlIds($redirectControlIds)
  {
    $this->redirectControlIds = $redirectControlIds;
  }
  /** @return string[] */
  public function getRedirectControlIds()
  {
    return $this->redirectControlIds;
  }
  /** @param string[] */
  public function setReplacementControlIds($replacementControlIds)
  {
    $this->replacementControlIds = $replacementControlIds;
  }
  /** @return string[] */
  public function getReplacementControlIds()
  {
    return $this->replacementControlIds;
  }
  /** @param string[] */
  public function setSolutionTypes($solutionTypes)
  {
    $this->solutionTypes = $solutionTypes;
  }
  /** @return string[] */
  public function getSolutionTypes()
  {
    return $this->solutionTypes;
  }
  /** @param string[] */
  public function setTwowaySynonymsControlIds($twowaySynonymsControlIds)
  {
    $this->twowaySynonymsControlIds = $twowaySynonymsControlIds;
  }
  /** @return string[] */
  public function getTwowaySynonymsControlIds()
  {
    return $this->twowaySynonymsControlIds;
  }
}

class GoogleCloudRetailV2SetDefaultBranchRequest extends \Google\Model
{
  /** @var string */
  public $branchId;
  /** @var bool */
  public $force;
  /** @var string */
  public $note;

  /** @param string */
  public function setBranchId($branchId)
  {
    $this->branchId = $branchId;
  }
  /** @return string */
  public function getBranchId()
  {
    return $this->branchId;
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
  /** @param string */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /** @return string */
  public function getNote()
  {
    return $this->note;
  }
}

class GoogleCloudRetailV2SetInventoryMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2SetInventoryRequest extends \Google\Model
{
  /** @var bool */
  public $allowMissing;
  /** @var GoogleCloudRetailV2Product */
  public $inventory;
  /** @var string */
  public $setMask;
  /** @var string */
  public $setTime;
  protected $inventoryType = GoogleCloudRetailV2Product::class;
  protected $inventoryDataType = '';
  /** @param bool */
  public function setAllowMissing($allowMissing)
  {
    $this->allowMissing = $allowMissing;
  }
  /** @return bool */
  public function getAllowMissing()
  {
    return $this->allowMissing;
  }
  /** @param GoogleCloudRetailV2Product */
  public function setInventory(GoogleCloudRetailV2Product $inventory)
  {
    $this->inventory = $inventory;
  }
  /** @return GoogleCloudRetailV2Product */
  public function getInventory()
  {
    return $this->inventory;
  }
  /** @param string */
  public function setSetMask($setMask)
  {
    $this->setMask = $setMask;
  }
  /** @return string */
  public function getSetMask()
  {
    return $this->setMask;
  }
  /** @param string */
  public function setSetTime($setTime)
  {
    $this->setTime = $setTime;
  }
  /** @return string */
  public function getSetTime()
  {
    return $this->setTime;
  }
}

class GoogleCloudRetailV2SetInventoryResponse extends \Google\Model
{
}

class GoogleCloudRetailV2UserEvent extends \Google\Collection
{
  /** @var GoogleCloudRetailV2CustomAttribute[] */
  public $attributes;
  /** @var string */
  public $attributionToken;
  /** @var string */
  public $cartId;
  /** @var GoogleCloudRetailV2CompletionDetail */
  public $completionDetail;
  /** @var string */
  public $eventTime;
  /** @var string */
  public $eventType;
  /** @var string[] */
  public $experimentIds;
  /** @var string */
  public $filter;
  /** @var int */
  public $offset;
  /** @var string */
  public $orderBy;
  /** @var string[] */
  public $pageCategories;
  /** @var string */
  public $pageViewId;
  /** @var GoogleCloudRetailV2ProductDetail[] */
  public $productDetails;
  /** @var GoogleCloudRetailV2PurchaseTransaction */
  public $purchaseTransaction;
  /** @var string */
  public $referrerUri;
  /** @var string */
  public $searchQuery;
  /** @var string */
  public $sessionId;
  /** @var string */
  public $uri;
  /** @var GoogleCloudRetailV2UserInfo */
  public $userInfo;
  /** @var string */
  public $visitorId;
  protected $collection_key = 'productDetails';
  protected $attributesType = GoogleCloudRetailV2CustomAttribute::class;
  protected $attributesDataType = 'map';
  protected $completionDetailType = GoogleCloudRetailV2CompletionDetail::class;
  protected $completionDetailDataType = '';
  protected $productDetailsType = GoogleCloudRetailV2ProductDetail::class;
  protected $productDetailsDataType = 'array';
  protected $purchaseTransactionType = GoogleCloudRetailV2PurchaseTransaction::class;
  protected $purchaseTransactionDataType = '';
  protected $userInfoType = GoogleCloudRetailV2UserInfo::class;
  protected $userInfoDataType = '';
  /** @param GoogleCloudRetailV2CustomAttribute[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return GoogleCloudRetailV2CustomAttribute[] */
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
  /** @param GoogleCloudRetailV2CompletionDetail */
  public function setCompletionDetail(GoogleCloudRetailV2CompletionDetail $completionDetail)
  {
    $this->completionDetail = $completionDetail;
  }
  /** @return GoogleCloudRetailV2CompletionDetail */
  public function getCompletionDetail()
  {
    return $this->completionDetail;
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
  /** @param string[] */
  public function setPageCategories($pageCategories)
  {
    $this->pageCategories = $pageCategories;
  }
  /** @return string[] */
  public function getPageCategories()
  {
    return $this->pageCategories;
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
  /** @param GoogleCloudRetailV2ProductDetail[] */
  public function setProductDetails($productDetails)
  {
    $this->productDetails = $productDetails;
  }
  /** @return GoogleCloudRetailV2ProductDetail[] */
  public function getProductDetails()
  {
    return $this->productDetails;
  }
  /** @param GoogleCloudRetailV2PurchaseTransaction */
  public function setPurchaseTransaction(GoogleCloudRetailV2PurchaseTransaction $purchaseTransaction)
  {
    $this->purchaseTransaction = $purchaseTransaction;
  }
  /** @return GoogleCloudRetailV2PurchaseTransaction */
  public function getPurchaseTransaction()
  {
    return $this->purchaseTransaction;
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
  public function setSearchQuery($searchQuery)
  {
    $this->searchQuery = $searchQuery;
  }
  /** @return string */
  public function getSearchQuery()
  {
    return $this->searchQuery;
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
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
  /** @param GoogleCloudRetailV2UserInfo */
  public function setUserInfo(GoogleCloudRetailV2UserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }
  /** @return GoogleCloudRetailV2UserInfo */
  public function getUserInfo()
  {
    return $this->userInfo;
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

class GoogleCloudRetailV2UserEventImportSummary extends \Google\Model
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

class GoogleCloudRetailV2UserEventInlineSource extends \Google\Collection
{
  /** @var GoogleCloudRetailV2UserEvent[] */
  public $userEvents;
  protected $collection_key = 'userEvents';
  protected $userEventsType = GoogleCloudRetailV2UserEvent::class;
  protected $userEventsDataType = 'array';
  /** @param GoogleCloudRetailV2UserEvent[] */
  public function setUserEvents($userEvents)
  {
    $this->userEvents = $userEvents;
  }
  /** @return GoogleCloudRetailV2UserEvent[] */
  public function getUserEvents()
  {
    return $this->userEvents;
  }
}

class GoogleCloudRetailV2UserEventInputConfig extends \Google\Model
{
  /** @var GoogleCloudRetailV2BigQuerySource */
  public $bigQuerySource;
  /** @var GoogleCloudRetailV2GcsSource */
  public $gcsSource;
  /** @var GoogleCloudRetailV2UserEventInlineSource */
  public $userEventInlineSource;
  protected $bigQuerySourceType = GoogleCloudRetailV2BigQuerySource::class;
  protected $bigQuerySourceDataType = '';
  protected $gcsSourceType = GoogleCloudRetailV2GcsSource::class;
  protected $gcsSourceDataType = '';
  protected $userEventInlineSourceType = GoogleCloudRetailV2UserEventInlineSource::class;
  protected $userEventInlineSourceDataType = '';
  /** @param GoogleCloudRetailV2BigQuerySource */
  public function setBigQuerySource(GoogleCloudRetailV2BigQuerySource $bigQuerySource)
  {
    $this->bigQuerySource = $bigQuerySource;
  }
  /** @return GoogleCloudRetailV2BigQuerySource */
  public function getBigQuerySource()
  {
    return $this->bigQuerySource;
  }
  /** @param GoogleCloudRetailV2GcsSource */
  public function setGcsSource(GoogleCloudRetailV2GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudRetailV2GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param GoogleCloudRetailV2UserEventInlineSource */
  public function setUserEventInlineSource(GoogleCloudRetailV2UserEventInlineSource $userEventInlineSource)
  {
    $this->userEventInlineSource = $userEventInlineSource;
  }
  /** @return GoogleCloudRetailV2UserEventInlineSource */
  public function getUserEventInlineSource()
  {
    return $this->userEventInlineSource;
  }
}

class GoogleCloudRetailV2UserInfo extends \Google\Model
{
  /** @var bool */
  public $directUserRequest;
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $userAgent;
  /** @var string */
  public $userId;

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
}

class GoogleCloudRetailV2alphaAddFulfillmentPlacesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2alphaAddFulfillmentPlacesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2alphaAddLocalInventoriesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2alphaAddLocalInventoriesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2alphaBigQueryOutputResult extends \Google\Model
{
  /** @var string */
  public $datasetId;
  /** @var string */
  public $tableId;

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

class GoogleCloudRetailV2alphaCreateModelMetadata extends \Google\Model
{
  /** @var string */
  public $model;

  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
}

class GoogleCloudRetailV2alphaExportErrorsConfig extends \Google\Model
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

class GoogleCloudRetailV2alphaExportMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
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

class GoogleCloudRetailV2alphaExportProductsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRetailV2alphaExportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRetailV2alphaOutputResult */
  public $outputResult;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRetailV2alphaExportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $outputResultType = GoogleCloudRetailV2alphaOutputResult::class;
  protected $outputResultDataType = '';
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
  /** @param GoogleCloudRetailV2alphaExportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2alphaExportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2alphaExportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRetailV2alphaOutputResult */
  public function setOutputResult(GoogleCloudRetailV2alphaOutputResult $outputResult)
  {
    $this->outputResult = $outputResult;
  }
  /** @return GoogleCloudRetailV2alphaOutputResult */
  public function getOutputResult()
  {
    return $this->outputResult;
  }
}

class GoogleCloudRetailV2alphaExportUserEventsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRetailV2alphaExportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRetailV2alphaOutputResult */
  public $outputResult;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRetailV2alphaExportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $outputResultType = GoogleCloudRetailV2alphaOutputResult::class;
  protected $outputResultDataType = '';
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
  /** @param GoogleCloudRetailV2alphaExportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2alphaExportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2alphaExportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRetailV2alphaOutputResult */
  public function setOutputResult(GoogleCloudRetailV2alphaOutputResult $outputResult)
  {
    $this->outputResult = $outputResult;
  }
  /** @return GoogleCloudRetailV2alphaOutputResult */
  public function getOutputResult()
  {
    return $this->outputResult;
  }
}

class GoogleCloudRetailV2alphaGcsOutputResult extends \Google\Model
{
  /** @var string */
  public $outputUri;

  /** @param string */
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /** @return string */
  public function getOutputUri()
  {
    return $this->outputUri;
  }
}

class GoogleCloudRetailV2alphaImportCompletionDataResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
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

class GoogleCloudRetailV2alphaImportErrorsConfig extends \Google\Model
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

class GoogleCloudRetailV2alphaImportMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $failureCount;
  /** @var string */
  public $notificationPubsubTopic;
  /** @var string */
  public $requestId;
  /** @var string */
  public $successCount;
  /** @var GoogleCloudRetailV2alphaTransformedUserEventsMetadata */
  public $transformedUserEventsMetadata;
  /** @var string */
  public $updateTime;
  protected $transformedUserEventsMetadataType = GoogleCloudRetailV2alphaTransformedUserEventsMetadata::class;
  protected $transformedUserEventsMetadataDataType = '';
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
  public function setNotificationPubsubTopic($notificationPubsubTopic)
  {
    $this->notificationPubsubTopic = $notificationPubsubTopic;
  }
  /** @return string */
  public function getNotificationPubsubTopic()
  {
    return $this->notificationPubsubTopic;
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
  /** @param GoogleCloudRetailV2alphaTransformedUserEventsMetadata */
  public function setTransformedUserEventsMetadata(GoogleCloudRetailV2alphaTransformedUserEventsMetadata $transformedUserEventsMetadata)
  {
    $this->transformedUserEventsMetadata = $transformedUserEventsMetadata;
  }
  /** @return GoogleCloudRetailV2alphaTransformedUserEventsMetadata */
  public function getTransformedUserEventsMetadata()
  {
    return $this->transformedUserEventsMetadata;
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

class GoogleCloudRetailV2alphaImportProductsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRetailV2alphaImportErrorsConfig */
  public $errorsConfig;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRetailV2alphaImportErrorsConfig::class;
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
  /** @param GoogleCloudRetailV2alphaImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2alphaImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2alphaImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
}

class GoogleCloudRetailV2alphaImportUserEventsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRetailV2alphaImportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRetailV2alphaUserEventImportSummary */
  public $importSummary;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRetailV2alphaImportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $importSummaryType = GoogleCloudRetailV2alphaUserEventImportSummary::class;
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
  /** @param GoogleCloudRetailV2alphaImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2alphaImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2alphaImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRetailV2alphaUserEventImportSummary */
  public function setImportSummary(GoogleCloudRetailV2alphaUserEventImportSummary $importSummary)
  {
    $this->importSummary = $importSummary;
  }
  /** @return GoogleCloudRetailV2alphaUserEventImportSummary */
  public function getImportSummary()
  {
    return $this->importSummary;
  }
}

class GoogleCloudRetailV2alphaModel extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataState;
  /** @var string */
  public $displayName;
  /** @var string */
  public $filteringOption;
  /** @var string */
  public $lastTuneTime;
  /** @var string */
  public $name;
  /** @var string */
  public $optimizationObjective;
  /** @var GoogleCloudRetailV2alphaModelPageOptimizationConfig */
  public $pageOptimizationConfig;
  /** @var string */
  public $periodicTuningState;
  /** @var GoogleCloudRetailV2alphaModelServingConfigList[] */
  public $servingConfigLists;
  /** @var string */
  public $servingState;
  /** @var string */
  public $trainingState;
  /** @var string */
  public $tuningOperation;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'servingConfigLists';
  protected $pageOptimizationConfigType = GoogleCloudRetailV2alphaModelPageOptimizationConfig::class;
  protected $pageOptimizationConfigDataType = '';
  protected $servingConfigListsType = GoogleCloudRetailV2alphaModelServingConfigList::class;
  protected $servingConfigListsDataType = 'array';
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
  public function setDataState($dataState)
  {
    $this->dataState = $dataState;
  }
  /** @return string */
  public function getDataState()
  {
    return $this->dataState;
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
  public function setFilteringOption($filteringOption)
  {
    $this->filteringOption = $filteringOption;
  }
  /** @return string */
  public function getFilteringOption()
  {
    return $this->filteringOption;
  }
  /** @param string */
  public function setLastTuneTime($lastTuneTime)
  {
    $this->lastTuneTime = $lastTuneTime;
  }
  /** @return string */
  public function getLastTuneTime()
  {
    return $this->lastTuneTime;
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
  public function setOptimizationObjective($optimizationObjective)
  {
    $this->optimizationObjective = $optimizationObjective;
  }
  /** @return string */
  public function getOptimizationObjective()
  {
    return $this->optimizationObjective;
  }
  /** @param GoogleCloudRetailV2alphaModelPageOptimizationConfig */
  public function setPageOptimizationConfig(GoogleCloudRetailV2alphaModelPageOptimizationConfig $pageOptimizationConfig)
  {
    $this->pageOptimizationConfig = $pageOptimizationConfig;
  }
  /** @return GoogleCloudRetailV2alphaModelPageOptimizationConfig */
  public function getPageOptimizationConfig()
  {
    return $this->pageOptimizationConfig;
  }
  /** @param string */
  public function setPeriodicTuningState($periodicTuningState)
  {
    $this->periodicTuningState = $periodicTuningState;
  }
  /** @return string */
  public function getPeriodicTuningState()
  {
    return $this->periodicTuningState;
  }
  /** @param GoogleCloudRetailV2alphaModelServingConfigList[] */
  public function setServingConfigLists($servingConfigLists)
  {
    $this->servingConfigLists = $servingConfigLists;
  }
  /** @return GoogleCloudRetailV2alphaModelServingConfigList[] */
  public function getServingConfigLists()
  {
    return $this->servingConfigLists;
  }
  /** @param string */
  public function setServingState($servingState)
  {
    $this->servingState = $servingState;
  }
  /** @return string */
  public function getServingState()
  {
    return $this->servingState;
  }
  /** @param string */
  public function setTrainingState($trainingState)
  {
    $this->trainingState = $trainingState;
  }
  /** @return string */
  public function getTrainingState()
  {
    return $this->trainingState;
  }
  /** @param string */
  public function setTuningOperation($tuningOperation)
  {
    $this->tuningOperation = $tuningOperation;
  }
  /** @return string */
  public function getTuningOperation()
  {
    return $this->tuningOperation;
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

class GoogleCloudRetailV2alphaModelPageOptimizationConfig extends \Google\Collection
{
  /** @var string */
  public $pageOptimizationEventType;
  /** @var GoogleCloudRetailV2alphaModelPageOptimizationConfigPanel[] */
  public $panels;
  /** @var string */
  public $restriction;
  protected $collection_key = 'panels';
  protected $panelsType = GoogleCloudRetailV2alphaModelPageOptimizationConfigPanel::class;
  protected $panelsDataType = 'array';
  /** @param string */
  public function setPageOptimizationEventType($pageOptimizationEventType)
  {
    $this->pageOptimizationEventType = $pageOptimizationEventType;
  }
  /** @return string */
  public function getPageOptimizationEventType()
  {
    return $this->pageOptimizationEventType;
  }
  /** @param GoogleCloudRetailV2alphaModelPageOptimizationConfigPanel[] */
  public function setPanels($panels)
  {
    $this->panels = $panels;
  }
  /** @return GoogleCloudRetailV2alphaModelPageOptimizationConfigPanel[] */
  public function getPanels()
  {
    return $this->panels;
  }
  /** @param string */
  public function setRestriction($restriction)
  {
    $this->restriction = $restriction;
  }
  /** @return string */
  public function getRestriction()
  {
    return $this->restriction;
  }
}

class GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate extends \Google\Model
{
  /** @var string */
  public $servingConfigId;

  /** @param string */
  public function setServingConfigId($servingConfigId)
  {
    $this->servingConfigId = $servingConfigId;
  }
  /** @return string */
  public function getServingConfigId()
  {
    return $this->servingConfigId;
  }
}

class GoogleCloudRetailV2alphaModelPageOptimizationConfigPanel extends \Google\Collection
{
  /** @var GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate[] */
  public $candidates;
  /** @var GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate */
  public $defaultCandidate;
  /** @var string */
  public $displayName;
  protected $collection_key = 'candidates';
  protected $candidatesType = GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate::class;
  protected $candidatesDataType = 'array';
  protected $defaultCandidateType = GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate::class;
  protected $defaultCandidateDataType = '';
  /** @param GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate[] */
  public function setCandidates($candidates)
  {
    $this->candidates = $candidates;
  }
  /** @return GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate[] */
  public function getCandidates()
  {
    return $this->candidates;
  }
  /** @param GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate */
  public function setDefaultCandidate(GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate $defaultCandidate)
  {
    $this->defaultCandidate = $defaultCandidate;
  }
  /** @return GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate */
  public function getDefaultCandidate()
  {
    return $this->defaultCandidate;
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

class GoogleCloudRetailV2alphaModelServingConfigList extends \Google\Collection
{
  /** @var string[] */
  public $servingConfigIds;
  protected $collection_key = 'servingConfigIds';
  /** @param string[] */
  public function setServingConfigIds($servingConfigIds)
  {
    $this->servingConfigIds = $servingConfigIds;
  }
  /** @return string[] */
  public function getServingConfigIds()
  {
    return $this->servingConfigIds;
  }
}

class GoogleCloudRetailV2alphaOutputResult extends \Google\Collection
{
  /** @var GoogleCloudRetailV2alphaBigQueryOutputResult[] */
  public $bigqueryResult;
  /** @var GoogleCloudRetailV2alphaGcsOutputResult[] */
  public $gcsResult;
  protected $collection_key = 'gcsResult';
  protected $bigqueryResultType = GoogleCloudRetailV2alphaBigQueryOutputResult::class;
  protected $bigqueryResultDataType = 'array';
  protected $gcsResultType = GoogleCloudRetailV2alphaGcsOutputResult::class;
  protected $gcsResultDataType = 'array';
  /** @param GoogleCloudRetailV2alphaBigQueryOutputResult[] */
  public function setBigqueryResult($bigqueryResult)
  {
    $this->bigqueryResult = $bigqueryResult;
  }
  /** @return GoogleCloudRetailV2alphaBigQueryOutputResult[] */
  public function getBigqueryResult()
  {
    return $this->bigqueryResult;
  }
  /** @param GoogleCloudRetailV2alphaGcsOutputResult[] */
  public function setGcsResult($gcsResult)
  {
    $this->gcsResult = $gcsResult;
  }
  /** @return GoogleCloudRetailV2alphaGcsOutputResult[] */
  public function getGcsResult()
  {
    return $this->gcsResult;
  }
}

class GoogleCloudRetailV2alphaPurgeMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2alphaPurgeProductsMetadata extends \Google\Model
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

class GoogleCloudRetailV2alphaPurgeProductsResponse extends \Google\Collection
{
  /** @var string */
  public $purgeCount;
  /** @var string[] */
  public $purgeSample;
  protected $collection_key = 'purgeSample';
  /** @param string */
  public function setPurgeCount($purgeCount)
  {
    $this->purgeCount = $purgeCount;
  }
  /** @return string */
  public function getPurgeCount()
  {
    return $this->purgeCount;
  }
  /** @param string[] */
  public function setPurgeSample($purgeSample)
  {
    $this->purgeSample = $purgeSample;
  }
  /** @return string[] */
  public function getPurgeSample()
  {
    return $this->purgeSample;
  }
}

class GoogleCloudRetailV2alphaPurgeUserEventsResponse extends \Google\Model
{
  /** @var string */
  public $purgedEventsCount;

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
}

class GoogleCloudRetailV2alphaRejoinUserEventsMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2alphaRejoinUserEventsResponse extends \Google\Model
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

class GoogleCloudRetailV2alphaRemoveFulfillmentPlacesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2alphaRemoveFulfillmentPlacesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2alphaRemoveLocalInventoriesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2alphaRemoveLocalInventoriesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2alphaSetInventoryMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2alphaSetInventoryResponse extends \Google\Model
{
}

class GoogleCloudRetailV2alphaTransformedUserEventsMetadata extends \Google\Model
{
  /** @var string */
  public $sourceEventsCount;
  /** @var string */
  public $transformedEventsCount;

  /** @param string */
  public function setSourceEventsCount($sourceEventsCount)
  {
    $this->sourceEventsCount = $sourceEventsCount;
  }
  /** @return string */
  public function getSourceEventsCount()
  {
    return $this->sourceEventsCount;
  }
  /** @param string */
  public function setTransformedEventsCount($transformedEventsCount)
  {
    $this->transformedEventsCount = $transformedEventsCount;
  }
  /** @return string */
  public function getTransformedEventsCount()
  {
    return $this->transformedEventsCount;
  }
}

class GoogleCloudRetailV2alphaTuneModelMetadata extends \Google\Model
{
  /** @var string */
  public $model;

  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
}

class GoogleCloudRetailV2alphaTuneModelResponse extends \Google\Model
{
}

class GoogleCloudRetailV2alphaUserEventImportSummary extends \Google\Model
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

class GoogleCloudRetailV2betaAddFulfillmentPlacesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2betaAddFulfillmentPlacesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2betaAddLocalInventoriesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2betaAddLocalInventoriesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2betaBigQueryOutputResult extends \Google\Model
{
  /** @var string */
  public $datasetId;
  /** @var string */
  public $tableId;

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

class GoogleCloudRetailV2betaCreateModelMetadata extends \Google\Model
{
  /** @var string */
  public $model;

  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
}

class GoogleCloudRetailV2betaExportErrorsConfig extends \Google\Model
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

class GoogleCloudRetailV2betaExportMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
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

class GoogleCloudRetailV2betaExportProductsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRetailV2betaExportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRetailV2betaOutputResult */
  public $outputResult;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRetailV2betaExportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $outputResultType = GoogleCloudRetailV2betaOutputResult::class;
  protected $outputResultDataType = '';
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
  /** @param GoogleCloudRetailV2betaExportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2betaExportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2betaExportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRetailV2betaOutputResult */
  public function setOutputResult(GoogleCloudRetailV2betaOutputResult $outputResult)
  {
    $this->outputResult = $outputResult;
  }
  /** @return GoogleCloudRetailV2betaOutputResult */
  public function getOutputResult()
  {
    return $this->outputResult;
  }
}

class GoogleCloudRetailV2betaExportUserEventsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRetailV2betaExportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRetailV2betaOutputResult */
  public $outputResult;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRetailV2betaExportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $outputResultType = GoogleCloudRetailV2betaOutputResult::class;
  protected $outputResultDataType = '';
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
  /** @param GoogleCloudRetailV2betaExportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2betaExportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2betaExportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRetailV2betaOutputResult */
  public function setOutputResult(GoogleCloudRetailV2betaOutputResult $outputResult)
  {
    $this->outputResult = $outputResult;
  }
  /** @return GoogleCloudRetailV2betaOutputResult */
  public function getOutputResult()
  {
    return $this->outputResult;
  }
}

class GoogleCloudRetailV2betaGcsOutputResult extends \Google\Model
{
  /** @var string */
  public $outputUri;

  /** @param string */
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /** @return string */
  public function getOutputUri()
  {
    return $this->outputUri;
  }
}

class GoogleCloudRetailV2betaImportCompletionDataResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
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

class GoogleCloudRetailV2betaImportErrorsConfig extends \Google\Model
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

class GoogleCloudRetailV2betaImportMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $failureCount;
  /** @var string */
  public $notificationPubsubTopic;
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
  public function setNotificationPubsubTopic($notificationPubsubTopic)
  {
    $this->notificationPubsubTopic = $notificationPubsubTopic;
  }
  /** @return string */
  public function getNotificationPubsubTopic()
  {
    return $this->notificationPubsubTopic;
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

class GoogleCloudRetailV2betaImportProductsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRetailV2betaImportErrorsConfig */
  public $errorsConfig;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRetailV2betaImportErrorsConfig::class;
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
  /** @param GoogleCloudRetailV2betaImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2betaImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2betaImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
}

class GoogleCloudRetailV2betaImportUserEventsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $errorSamples;
  /** @var GoogleCloudRetailV2betaImportErrorsConfig */
  public $errorsConfig;
  /** @var GoogleCloudRetailV2betaUserEventImportSummary */
  public $importSummary;
  protected $collection_key = 'errorSamples';
  protected $errorSamplesType = GoogleRpcStatus::class;
  protected $errorSamplesDataType = 'array';
  protected $errorsConfigType = GoogleCloudRetailV2betaImportErrorsConfig::class;
  protected $errorsConfigDataType = '';
  protected $importSummaryType = GoogleCloudRetailV2betaUserEventImportSummary::class;
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
  /** @param GoogleCloudRetailV2betaImportErrorsConfig */
  public function setErrorsConfig(GoogleCloudRetailV2betaImportErrorsConfig $errorsConfig)
  {
    $this->errorsConfig = $errorsConfig;
  }
  /** @return GoogleCloudRetailV2betaImportErrorsConfig */
  public function getErrorsConfig()
  {
    return $this->errorsConfig;
  }
  /** @param GoogleCloudRetailV2betaUserEventImportSummary */
  public function setImportSummary(GoogleCloudRetailV2betaUserEventImportSummary $importSummary)
  {
    $this->importSummary = $importSummary;
  }
  /** @return GoogleCloudRetailV2betaUserEventImportSummary */
  public function getImportSummary()
  {
    return $this->importSummary;
  }
}

class GoogleCloudRetailV2betaModel extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $dataState;
  /** @var string */
  public $displayName;
  /** @var string */
  public $filteringOption;
  /** @var string */
  public $lastTuneTime;
  /** @var string */
  public $name;
  /** @var string */
  public $optimizationObjective;
  /** @var string */
  public $periodicTuningState;
  /** @var GoogleCloudRetailV2betaModelServingConfigList[] */
  public $servingConfigLists;
  /** @var string */
  public $servingState;
  /** @var string */
  public $trainingState;
  /** @var string */
  public $tuningOperation;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'servingConfigLists';
  protected $servingConfigListsType = GoogleCloudRetailV2betaModelServingConfigList::class;
  protected $servingConfigListsDataType = 'array';
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
  public function setDataState($dataState)
  {
    $this->dataState = $dataState;
  }
  /** @return string */
  public function getDataState()
  {
    return $this->dataState;
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
  public function setFilteringOption($filteringOption)
  {
    $this->filteringOption = $filteringOption;
  }
  /** @return string */
  public function getFilteringOption()
  {
    return $this->filteringOption;
  }
  /** @param string */
  public function setLastTuneTime($lastTuneTime)
  {
    $this->lastTuneTime = $lastTuneTime;
  }
  /** @return string */
  public function getLastTuneTime()
  {
    return $this->lastTuneTime;
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
  public function setOptimizationObjective($optimizationObjective)
  {
    $this->optimizationObjective = $optimizationObjective;
  }
  /** @return string */
  public function getOptimizationObjective()
  {
    return $this->optimizationObjective;
  }
  /** @param string */
  public function setPeriodicTuningState($periodicTuningState)
  {
    $this->periodicTuningState = $periodicTuningState;
  }
  /** @return string */
  public function getPeriodicTuningState()
  {
    return $this->periodicTuningState;
  }
  /** @param GoogleCloudRetailV2betaModelServingConfigList[] */
  public function setServingConfigLists($servingConfigLists)
  {
    $this->servingConfigLists = $servingConfigLists;
  }
  /** @return GoogleCloudRetailV2betaModelServingConfigList[] */
  public function getServingConfigLists()
  {
    return $this->servingConfigLists;
  }
  /** @param string */
  public function setServingState($servingState)
  {
    $this->servingState = $servingState;
  }
  /** @return string */
  public function getServingState()
  {
    return $this->servingState;
  }
  /** @param string */
  public function setTrainingState($trainingState)
  {
    $this->trainingState = $trainingState;
  }
  /** @return string */
  public function getTrainingState()
  {
    return $this->trainingState;
  }
  /** @param string */
  public function setTuningOperation($tuningOperation)
  {
    $this->tuningOperation = $tuningOperation;
  }
  /** @return string */
  public function getTuningOperation()
  {
    return $this->tuningOperation;
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

class GoogleCloudRetailV2betaModelServingConfigList extends \Google\Collection
{
  /** @var string[] */
  public $servingConfigIds;
  protected $collection_key = 'servingConfigIds';
  /** @param string[] */
  public function setServingConfigIds($servingConfigIds)
  {
    $this->servingConfigIds = $servingConfigIds;
  }
  /** @return string[] */
  public function getServingConfigIds()
  {
    return $this->servingConfigIds;
  }
}

class GoogleCloudRetailV2betaOutputResult extends \Google\Collection
{
  /** @var GoogleCloudRetailV2betaBigQueryOutputResult[] */
  public $bigqueryResult;
  /** @var GoogleCloudRetailV2betaGcsOutputResult[] */
  public $gcsResult;
  protected $collection_key = 'gcsResult';
  protected $bigqueryResultType = GoogleCloudRetailV2betaBigQueryOutputResult::class;
  protected $bigqueryResultDataType = 'array';
  protected $gcsResultType = GoogleCloudRetailV2betaGcsOutputResult::class;
  protected $gcsResultDataType = 'array';
  /** @param GoogleCloudRetailV2betaBigQueryOutputResult[] */
  public function setBigqueryResult($bigqueryResult)
  {
    $this->bigqueryResult = $bigqueryResult;
  }
  /** @return GoogleCloudRetailV2betaBigQueryOutputResult[] */
  public function getBigqueryResult()
  {
    return $this->bigqueryResult;
  }
  /** @param GoogleCloudRetailV2betaGcsOutputResult[] */
  public function setGcsResult($gcsResult)
  {
    $this->gcsResult = $gcsResult;
  }
  /** @return GoogleCloudRetailV2betaGcsOutputResult[] */
  public function getGcsResult()
  {
    return $this->gcsResult;
  }
}

class GoogleCloudRetailV2betaPurgeMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2betaPurgeUserEventsResponse extends \Google\Model
{
  /** @var string */
  public $purgedEventsCount;

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
}

class GoogleCloudRetailV2betaRejoinUserEventsMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2betaRejoinUserEventsResponse extends \Google\Model
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

class GoogleCloudRetailV2betaRemoveFulfillmentPlacesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2betaRemoveFulfillmentPlacesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2betaRemoveLocalInventoriesMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2betaRemoveLocalInventoriesResponse extends \Google\Model
{
}

class GoogleCloudRetailV2betaSetInventoryMetadata extends \Google\Model
{
}

class GoogleCloudRetailV2betaSetInventoryResponse extends \Google\Model
{
}

class GoogleCloudRetailV2betaTuneModelMetadata extends \Google\Model
{
  /** @var string */
  public $model;

  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
}

class GoogleCloudRetailV2betaTuneModelResponse extends \Google\Model
{
}

class GoogleCloudRetailV2betaUserEventImportSummary extends \Google\Model
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
class_alias(GoogleApiHttpBody::class, 'Google_Service_CloudRetail_GoogleApiHttpBody');
class_alias(GoogleCloudRetailLoggingErrorContext::class, 'Google_Service_CloudRetail_GoogleCloudRetailLoggingErrorContext');
class_alias(GoogleCloudRetailLoggingErrorLog::class, 'Google_Service_CloudRetail_GoogleCloudRetailLoggingErrorLog');
class_alias(GoogleCloudRetailLoggingHttpRequestContext::class, 'Google_Service_CloudRetail_GoogleCloudRetailLoggingHttpRequestContext');
class_alias(GoogleCloudRetailLoggingImportErrorContext::class, 'Google_Service_CloudRetail_GoogleCloudRetailLoggingImportErrorContext');
class_alias(GoogleCloudRetailLoggingServiceContext::class, 'Google_Service_CloudRetail_GoogleCloudRetailLoggingServiceContext');
class_alias(GoogleCloudRetailLoggingSourceLocation::class, 'Google_Service_CloudRetail_GoogleCloudRetailLoggingSourceLocation');
class_alias(GoogleCloudRetailV2AddCatalogAttributeRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2AddCatalogAttributeRequest');
class_alias(GoogleCloudRetailV2AddControlRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2AddControlRequest');
class_alias(GoogleCloudRetailV2AddFulfillmentPlacesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2AddFulfillmentPlacesMetadata');
class_alias(GoogleCloudRetailV2AddFulfillmentPlacesRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2AddFulfillmentPlacesRequest');
class_alias(GoogleCloudRetailV2AddFulfillmentPlacesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2AddFulfillmentPlacesResponse');
class_alias(GoogleCloudRetailV2AddLocalInventoriesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2AddLocalInventoriesMetadata');
class_alias(GoogleCloudRetailV2AddLocalInventoriesRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2AddLocalInventoriesRequest');
class_alias(GoogleCloudRetailV2AddLocalInventoriesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2AddLocalInventoriesResponse');
class_alias(GoogleCloudRetailV2AttributesConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2AttributesConfig');
class_alias(GoogleCloudRetailV2Audience::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Audience');
class_alias(GoogleCloudRetailV2BigQuerySource::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2BigQuerySource');
class_alias(GoogleCloudRetailV2Catalog::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Catalog');
class_alias(GoogleCloudRetailV2CatalogAttribute::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2CatalogAttribute');
class_alias(GoogleCloudRetailV2ColorInfo::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ColorInfo');
class_alias(GoogleCloudRetailV2CompleteQueryResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2CompleteQueryResponse');
class_alias(GoogleCloudRetailV2CompleteQueryResponseCompletionResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2CompleteQueryResponseCompletionResult');
class_alias(GoogleCloudRetailV2CompleteQueryResponseRecentSearchResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2CompleteQueryResponseRecentSearchResult');
class_alias(GoogleCloudRetailV2CompletionConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2CompletionConfig');
class_alias(GoogleCloudRetailV2CompletionDataInputConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2CompletionDataInputConfig');
class_alias(GoogleCloudRetailV2CompletionDetail::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2CompletionDetail');
class_alias(GoogleCloudRetailV2Condition::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Condition');
class_alias(GoogleCloudRetailV2ConditionQueryTerm::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ConditionQueryTerm');
class_alias(GoogleCloudRetailV2ConditionTimeRange::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ConditionTimeRange');
class_alias(GoogleCloudRetailV2Control::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Control');
class_alias(GoogleCloudRetailV2CustomAttribute::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2CustomAttribute');
class_alias(GoogleCloudRetailV2FulfillmentInfo::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2FulfillmentInfo');
class_alias(GoogleCloudRetailV2GcsSource::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2GcsSource');
class_alias(GoogleCloudRetailV2GetDefaultBranchResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2GetDefaultBranchResponse');
class_alias(GoogleCloudRetailV2Image::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Image');
class_alias(GoogleCloudRetailV2ImportCompletionDataRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ImportCompletionDataRequest');
class_alias(GoogleCloudRetailV2ImportCompletionDataResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ImportCompletionDataResponse');
class_alias(GoogleCloudRetailV2ImportErrorsConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ImportErrorsConfig');
class_alias(GoogleCloudRetailV2ImportMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ImportMetadata');
class_alias(GoogleCloudRetailV2ImportProductsRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ImportProductsRequest');
class_alias(GoogleCloudRetailV2ImportProductsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ImportProductsResponse');
class_alias(GoogleCloudRetailV2ImportUserEventsRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ImportUserEventsRequest');
class_alias(GoogleCloudRetailV2ImportUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ImportUserEventsResponse');
class_alias(GoogleCloudRetailV2Interval::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Interval');
class_alias(GoogleCloudRetailV2ListCatalogsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ListCatalogsResponse');
class_alias(GoogleCloudRetailV2ListControlsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ListControlsResponse');
class_alias(GoogleCloudRetailV2ListProductsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ListProductsResponse');
class_alias(GoogleCloudRetailV2ListServingConfigsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ListServingConfigsResponse');
class_alias(GoogleCloudRetailV2LocalInventory::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2LocalInventory');
class_alias(GoogleCloudRetailV2PredictRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2PredictRequest');
class_alias(GoogleCloudRetailV2PredictResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2PredictResponse');
class_alias(GoogleCloudRetailV2PredictResponsePredictionResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2PredictResponsePredictionResult');
class_alias(GoogleCloudRetailV2PriceInfo::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2PriceInfo');
class_alias(GoogleCloudRetailV2PriceInfoPriceRange::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2PriceInfoPriceRange');
class_alias(GoogleCloudRetailV2Product::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Product');
class_alias(GoogleCloudRetailV2ProductDetail::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ProductDetail');
class_alias(GoogleCloudRetailV2ProductInlineSource::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ProductInlineSource');
class_alias(GoogleCloudRetailV2ProductInputConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ProductInputConfig');
class_alias(GoogleCloudRetailV2ProductLevelConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ProductLevelConfig');
class_alias(GoogleCloudRetailV2Promotion::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Promotion');
class_alias(GoogleCloudRetailV2PurchaseTransaction::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2PurchaseTransaction');
class_alias(GoogleCloudRetailV2PurgeMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2PurgeMetadata');
class_alias(GoogleCloudRetailV2PurgeUserEventsRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2PurgeUserEventsRequest');
class_alias(GoogleCloudRetailV2PurgeUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2PurgeUserEventsResponse');
class_alias(GoogleCloudRetailV2Rating::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Rating');
class_alias(GoogleCloudRetailV2RejoinUserEventsMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RejoinUserEventsMetadata');
class_alias(GoogleCloudRetailV2RejoinUserEventsRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RejoinUserEventsRequest');
class_alias(GoogleCloudRetailV2RejoinUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RejoinUserEventsResponse');
class_alias(GoogleCloudRetailV2RemoveCatalogAttributeRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RemoveCatalogAttributeRequest');
class_alias(GoogleCloudRetailV2RemoveControlRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RemoveControlRequest');
class_alias(GoogleCloudRetailV2RemoveFulfillmentPlacesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RemoveFulfillmentPlacesMetadata');
class_alias(GoogleCloudRetailV2RemoveFulfillmentPlacesRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RemoveFulfillmentPlacesRequest');
class_alias(GoogleCloudRetailV2RemoveFulfillmentPlacesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RemoveFulfillmentPlacesResponse');
class_alias(GoogleCloudRetailV2RemoveLocalInventoriesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RemoveLocalInventoriesMetadata');
class_alias(GoogleCloudRetailV2RemoveLocalInventoriesRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RemoveLocalInventoriesRequest');
class_alias(GoogleCloudRetailV2RemoveLocalInventoriesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RemoveLocalInventoriesResponse');
class_alias(GoogleCloudRetailV2ReplaceCatalogAttributeRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ReplaceCatalogAttributeRequest');
class_alias(GoogleCloudRetailV2Rule::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2Rule');
class_alias(GoogleCloudRetailV2RuleBoostAction::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RuleBoostAction');
class_alias(GoogleCloudRetailV2RuleDoNotAssociateAction::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RuleDoNotAssociateAction');
class_alias(GoogleCloudRetailV2RuleFilterAction::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RuleFilterAction');
class_alias(GoogleCloudRetailV2RuleIgnoreAction::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RuleIgnoreAction');
class_alias(GoogleCloudRetailV2RuleOnewaySynonymsAction::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RuleOnewaySynonymsAction');
class_alias(GoogleCloudRetailV2RuleRedirectAction::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RuleRedirectAction');
class_alias(GoogleCloudRetailV2RuleReplacementAction::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RuleReplacementAction');
class_alias(GoogleCloudRetailV2RuleTwowaySynonymsAction::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2RuleTwowaySynonymsAction');
class_alias(GoogleCloudRetailV2SearchRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchRequest');
class_alias(GoogleCloudRetailV2SearchRequestBoostSpec::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchRequestBoostSpec');
class_alias(GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchRequestBoostSpecConditionBoostSpec');
class_alias(GoogleCloudRetailV2SearchRequestDynamicFacetSpec::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchRequestDynamicFacetSpec');
class_alias(GoogleCloudRetailV2SearchRequestFacetSpec::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchRequestFacetSpec');
class_alias(GoogleCloudRetailV2SearchRequestFacetSpecFacetKey::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchRequestFacetSpecFacetKey');
class_alias(GoogleCloudRetailV2SearchRequestPersonalizationSpec::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchRequestPersonalizationSpec');
class_alias(GoogleCloudRetailV2SearchRequestQueryExpansionSpec::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchRequestQueryExpansionSpec');
class_alias(GoogleCloudRetailV2SearchRequestSpellCorrectionSpec::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchRequestSpellCorrectionSpec');
class_alias(GoogleCloudRetailV2SearchResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchResponse');
class_alias(GoogleCloudRetailV2SearchResponseFacet::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchResponseFacet');
class_alias(GoogleCloudRetailV2SearchResponseFacetFacetValue::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchResponseFacetFacetValue');
class_alias(GoogleCloudRetailV2SearchResponseQueryExpansionInfo::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchResponseQueryExpansionInfo');
class_alias(GoogleCloudRetailV2SearchResponseSearchResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SearchResponseSearchResult');
class_alias(GoogleCloudRetailV2ServingConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ServingConfig');
class_alias(GoogleCloudRetailV2SetDefaultBranchRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SetDefaultBranchRequest');
class_alias(GoogleCloudRetailV2SetInventoryMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SetInventoryMetadata');
class_alias(GoogleCloudRetailV2SetInventoryRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SetInventoryRequest');
class_alias(GoogleCloudRetailV2SetInventoryResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2SetInventoryResponse');
class_alias(GoogleCloudRetailV2UserEvent::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2UserEvent');
class_alias(GoogleCloudRetailV2UserEventImportSummary::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2UserEventImportSummary');
class_alias(GoogleCloudRetailV2UserEventInlineSource::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2UserEventInlineSource');
class_alias(GoogleCloudRetailV2UserEventInputConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2UserEventInputConfig');
class_alias(GoogleCloudRetailV2UserInfo::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2UserInfo');
class_alias(GoogleCloudRetailV2alphaAddFulfillmentPlacesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaAddFulfillmentPlacesMetadata');
class_alias(GoogleCloudRetailV2alphaAddFulfillmentPlacesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaAddFulfillmentPlacesResponse');
class_alias(GoogleCloudRetailV2alphaAddLocalInventoriesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaAddLocalInventoriesMetadata');
class_alias(GoogleCloudRetailV2alphaAddLocalInventoriesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaAddLocalInventoriesResponse');
class_alias(GoogleCloudRetailV2alphaBigQueryOutputResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaBigQueryOutputResult');
class_alias(GoogleCloudRetailV2alphaCreateModelMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaCreateModelMetadata');
class_alias(GoogleCloudRetailV2alphaExportErrorsConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaExportErrorsConfig');
class_alias(GoogleCloudRetailV2alphaExportMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaExportMetadata');
class_alias(GoogleCloudRetailV2alphaExportProductsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaExportProductsResponse');
class_alias(GoogleCloudRetailV2alphaExportUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaExportUserEventsResponse');
class_alias(GoogleCloudRetailV2alphaGcsOutputResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaGcsOutputResult');
class_alias(GoogleCloudRetailV2alphaImportCompletionDataResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaImportCompletionDataResponse');
class_alias(GoogleCloudRetailV2alphaImportErrorsConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaImportErrorsConfig');
class_alias(GoogleCloudRetailV2alphaImportMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaImportMetadata');
class_alias(GoogleCloudRetailV2alphaImportProductsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaImportProductsResponse');
class_alias(GoogleCloudRetailV2alphaImportUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaImportUserEventsResponse');
class_alias(GoogleCloudRetailV2alphaModel::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaModel');
class_alias(GoogleCloudRetailV2alphaModelPageOptimizationConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaModelPageOptimizationConfig');
class_alias(GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaModelPageOptimizationConfigCandidate');
class_alias(GoogleCloudRetailV2alphaModelPageOptimizationConfigPanel::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaModelPageOptimizationConfigPanel');
class_alias(GoogleCloudRetailV2alphaModelServingConfigList::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaModelServingConfigList');
class_alias(GoogleCloudRetailV2alphaOutputResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaOutputResult');
class_alias(GoogleCloudRetailV2alphaPurgeMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaPurgeMetadata');
class_alias(GoogleCloudRetailV2alphaPurgeProductsMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaPurgeProductsMetadata');
class_alias(GoogleCloudRetailV2alphaPurgeProductsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaPurgeProductsResponse');
class_alias(GoogleCloudRetailV2alphaPurgeUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaPurgeUserEventsResponse');
class_alias(GoogleCloudRetailV2alphaRejoinUserEventsMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaRejoinUserEventsMetadata');
class_alias(GoogleCloudRetailV2alphaRejoinUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaRejoinUserEventsResponse');
class_alias(GoogleCloudRetailV2alphaRemoveFulfillmentPlacesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaRemoveFulfillmentPlacesMetadata');
class_alias(GoogleCloudRetailV2alphaRemoveFulfillmentPlacesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaRemoveFulfillmentPlacesResponse');
class_alias(GoogleCloudRetailV2alphaRemoveLocalInventoriesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaRemoveLocalInventoriesMetadata');
class_alias(GoogleCloudRetailV2alphaRemoveLocalInventoriesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaRemoveLocalInventoriesResponse');
class_alias(GoogleCloudRetailV2alphaSetInventoryMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaSetInventoryMetadata');
class_alias(GoogleCloudRetailV2alphaSetInventoryResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaSetInventoryResponse');
class_alias(GoogleCloudRetailV2alphaTransformedUserEventsMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaTransformedUserEventsMetadata');
class_alias(GoogleCloudRetailV2alphaTuneModelMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaTuneModelMetadata');
class_alias(GoogleCloudRetailV2alphaTuneModelResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaTuneModelResponse');
class_alias(GoogleCloudRetailV2alphaUserEventImportSummary::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2alphaUserEventImportSummary');
class_alias(GoogleCloudRetailV2betaAddFulfillmentPlacesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaAddFulfillmentPlacesMetadata');
class_alias(GoogleCloudRetailV2betaAddFulfillmentPlacesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaAddFulfillmentPlacesResponse');
class_alias(GoogleCloudRetailV2betaAddLocalInventoriesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaAddLocalInventoriesMetadata');
class_alias(GoogleCloudRetailV2betaAddLocalInventoriesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaAddLocalInventoriesResponse');
class_alias(GoogleCloudRetailV2betaBigQueryOutputResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaBigQueryOutputResult');
class_alias(GoogleCloudRetailV2betaCreateModelMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaCreateModelMetadata');
class_alias(GoogleCloudRetailV2betaExportErrorsConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaExportErrorsConfig');
class_alias(GoogleCloudRetailV2betaExportMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaExportMetadata');
class_alias(GoogleCloudRetailV2betaExportProductsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaExportProductsResponse');
class_alias(GoogleCloudRetailV2betaExportUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaExportUserEventsResponse');
class_alias(GoogleCloudRetailV2betaGcsOutputResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaGcsOutputResult');
class_alias(GoogleCloudRetailV2betaImportCompletionDataResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaImportCompletionDataResponse');
class_alias(GoogleCloudRetailV2betaImportErrorsConfig::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaImportErrorsConfig');
class_alias(GoogleCloudRetailV2betaImportMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaImportMetadata');
class_alias(GoogleCloudRetailV2betaImportProductsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaImportProductsResponse');
class_alias(GoogleCloudRetailV2betaImportUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaImportUserEventsResponse');
class_alias(GoogleCloudRetailV2betaModel::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaModel');
class_alias(GoogleCloudRetailV2betaModelServingConfigList::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaModelServingConfigList');
class_alias(GoogleCloudRetailV2betaOutputResult::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaOutputResult');
class_alias(GoogleCloudRetailV2betaPurgeMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaPurgeMetadata');
class_alias(GoogleCloudRetailV2betaPurgeUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaPurgeUserEventsResponse');
class_alias(GoogleCloudRetailV2betaRejoinUserEventsMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaRejoinUserEventsMetadata');
class_alias(GoogleCloudRetailV2betaRejoinUserEventsResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaRejoinUserEventsResponse');
class_alias(GoogleCloudRetailV2betaRemoveFulfillmentPlacesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaRemoveFulfillmentPlacesMetadata');
class_alias(GoogleCloudRetailV2betaRemoveFulfillmentPlacesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaRemoveFulfillmentPlacesResponse');
class_alias(GoogleCloudRetailV2betaRemoveLocalInventoriesMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaRemoveLocalInventoriesMetadata');
class_alias(GoogleCloudRetailV2betaRemoveLocalInventoriesResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaRemoveLocalInventoriesResponse');
class_alias(GoogleCloudRetailV2betaSetInventoryMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaSetInventoryMetadata');
class_alias(GoogleCloudRetailV2betaSetInventoryResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaSetInventoryResponse');
class_alias(GoogleCloudRetailV2betaTuneModelMetadata::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaTuneModelMetadata');
class_alias(GoogleCloudRetailV2betaTuneModelResponse::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaTuneModelResponse');
class_alias(GoogleCloudRetailV2betaUserEventImportSummary::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2betaUserEventImportSummary');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_CloudRetail_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_CloudRetail_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_CloudRetail_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_CloudRetail_GoogleRpcStatus');
class_alias(GoogleTypeDate::class, 'Google_Service_CloudRetail_GoogleTypeDate');
