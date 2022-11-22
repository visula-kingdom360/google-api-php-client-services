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

namespace Google\Service\Doubleclicksearch;

class Availability extends \Google\Model
{
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $agencyId;
  /** @var string */
  public $availabilityTimestamp;
  /** @var string */
  public $customerId;
  /** @var string */
  public $segmentationId;
  /** @var string */
  public $segmentationName;
  /** @var string */
  public $segmentationType;

  /** @param string */
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param string */
  public function setAgencyId($agencyId)
  {
    $this->agencyId = $agencyId;
  }
  /** @return string */
  public function getAgencyId()
  {
    return $this->agencyId;
  }
  /** @param string */
  public function setAvailabilityTimestamp($availabilityTimestamp)
  {
    $this->availabilityTimestamp = $availabilityTimestamp;
  }
  /** @return string */
  public function getAvailabilityTimestamp()
  {
    return $this->availabilityTimestamp;
  }
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param string */
  public function setSegmentationId($segmentationId)
  {
    $this->segmentationId = $segmentationId;
  }
  /** @return string */
  public function getSegmentationId()
  {
    return $this->segmentationId;
  }
  /** @param string */
  public function setSegmentationName($segmentationName)
  {
    $this->segmentationName = $segmentationName;
  }
  /** @return string */
  public function getSegmentationName()
  {
    return $this->segmentationName;
  }
  /** @param string */
  public function setSegmentationType($segmentationType)
  {
    $this->segmentationType = $segmentationType;
  }
  /** @return string */
  public function getSegmentationType()
  {
    return $this->segmentationType;
  }
}

class Conversion extends \Google\Collection
{
  /** @var string */
  public $adGroupId;
  /** @var string */
  public $adId;
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $agencyId;
  /** @var string */
  public $attributionModel;
  /** @var string */
  public $campaignId;
  /** @var string */
  public $channel;
  /** @var string */
  public $clickId;
  /** @var string */
  public $conversionId;
  /** @var string */
  public $conversionModifiedTimestamp;
  /** @var string */
  public $conversionTimestamp;
  /** @var string */
  public $countMillis;
  /** @var string */
  public $criterionId;
  /** @var string */
  public $currencyCode;
  /** @var CustomDimension[] */
  public $customDimension;
  /** @var CustomMetric[] */
  public $customMetric;
  /** @var string */
  public $customerId;
  /** @var string */
  public $deviceType;
  /** @var string */
  public $dsConversionId;
  /** @var string */
  public $engineAccountId;
  /** @var string */
  public $floodlightOrderId;
  /** @var string */
  public $inventoryAccountId;
  /** @var string */
  public $productCountry;
  /** @var string */
  public $productGroupId;
  /** @var string */
  public $productId;
  /** @var string */
  public $productLanguage;
  /** @var string */
  public $quantityMillis;
  /** @var string */
  public $revenueMicros;
  /** @var string */
  public $segmentationId;
  /** @var string */
  public $segmentationName;
  /** @var string */
  public $segmentationType;
  /** @var string */
  public $state;
  /** @var string */
  public $storeId;
  /** @var string */
  public $type;
  protected $collection_key = 'customMetric';
  protected $customDimensionType = CustomDimension::class;
  protected $customDimensionDataType = 'array';
  protected $customMetricType = CustomMetric::class;
  protected $customMetricDataType = 'array';
  /** @param string */
  public function setAdGroupId($adGroupId)
  {
    $this->adGroupId = $adGroupId;
  }
  /** @return string */
  public function getAdGroupId()
  {
    return $this->adGroupId;
  }
  /** @param string */
  public function setAdId($adId)
  {
    $this->adId = $adId;
  }
  /** @return string */
  public function getAdId()
  {
    return $this->adId;
  }
  /** @param string */
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param string */
  public function setAgencyId($agencyId)
  {
    $this->agencyId = $agencyId;
  }
  /** @return string */
  public function getAgencyId()
  {
    return $this->agencyId;
  }
  /** @param string */
  public function setAttributionModel($attributionModel)
  {
    $this->attributionModel = $attributionModel;
  }
  /** @return string */
  public function getAttributionModel()
  {
    return $this->attributionModel;
  }
  /** @param string */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /** @return string */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /** @param string */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /** @return string */
  public function getChannel()
  {
    return $this->channel;
  }
  /** @param string */
  public function setClickId($clickId)
  {
    $this->clickId = $clickId;
  }
  /** @return string */
  public function getClickId()
  {
    return $this->clickId;
  }
  /** @param string */
  public function setConversionId($conversionId)
  {
    $this->conversionId = $conversionId;
  }
  /** @return string */
  public function getConversionId()
  {
    return $this->conversionId;
  }
  /** @param string */
  public function setConversionModifiedTimestamp($conversionModifiedTimestamp)
  {
    $this->conversionModifiedTimestamp = $conversionModifiedTimestamp;
  }
  /** @return string */
  public function getConversionModifiedTimestamp()
  {
    return $this->conversionModifiedTimestamp;
  }
  /** @param string */
  public function setConversionTimestamp($conversionTimestamp)
  {
    $this->conversionTimestamp = $conversionTimestamp;
  }
  /** @return string */
  public function getConversionTimestamp()
  {
    return $this->conversionTimestamp;
  }
  /** @param string */
  public function setCountMillis($countMillis)
  {
    $this->countMillis = $countMillis;
  }
  /** @return string */
  public function getCountMillis()
  {
    return $this->countMillis;
  }
  /** @param string */
  public function setCriterionId($criterionId)
  {
    $this->criterionId = $criterionId;
  }
  /** @return string */
  public function getCriterionId()
  {
    return $this->criterionId;
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
  /** @param CustomDimension[] */
  public function setCustomDimension($customDimension)
  {
    $this->customDimension = $customDimension;
  }
  /** @return CustomDimension[] */
  public function getCustomDimension()
  {
    return $this->customDimension;
  }
  /** @param CustomMetric[] */
  public function setCustomMetric($customMetric)
  {
    $this->customMetric = $customMetric;
  }
  /** @return CustomMetric[] */
  public function getCustomMetric()
  {
    return $this->customMetric;
  }
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param string */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /** @return string */
  public function getDeviceType()
  {
    return $this->deviceType;
  }
  /** @param string */
  public function setDsConversionId($dsConversionId)
  {
    $this->dsConversionId = $dsConversionId;
  }
  /** @return string */
  public function getDsConversionId()
  {
    return $this->dsConversionId;
  }
  /** @param string */
  public function setEngineAccountId($engineAccountId)
  {
    $this->engineAccountId = $engineAccountId;
  }
  /** @return string */
  public function getEngineAccountId()
  {
    return $this->engineAccountId;
  }
  /** @param string */
  public function setFloodlightOrderId($floodlightOrderId)
  {
    $this->floodlightOrderId = $floodlightOrderId;
  }
  /** @return string */
  public function getFloodlightOrderId()
  {
    return $this->floodlightOrderId;
  }
  /** @param string */
  public function setInventoryAccountId($inventoryAccountId)
  {
    $this->inventoryAccountId = $inventoryAccountId;
  }
  /** @return string */
  public function getInventoryAccountId()
  {
    return $this->inventoryAccountId;
  }
  /** @param string */
  public function setProductCountry($productCountry)
  {
    $this->productCountry = $productCountry;
  }
  /** @return string */
  public function getProductCountry()
  {
    return $this->productCountry;
  }
  /** @param string */
  public function setProductGroupId($productGroupId)
  {
    $this->productGroupId = $productGroupId;
  }
  /** @return string */
  public function getProductGroupId()
  {
    return $this->productGroupId;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param string */
  public function setProductLanguage($productLanguage)
  {
    $this->productLanguage = $productLanguage;
  }
  /** @return string */
  public function getProductLanguage()
  {
    return $this->productLanguage;
  }
  /** @param string */
  public function setQuantityMillis($quantityMillis)
  {
    $this->quantityMillis = $quantityMillis;
  }
  /** @return string */
  public function getQuantityMillis()
  {
    return $this->quantityMillis;
  }
  /** @param string */
  public function setRevenueMicros($revenueMicros)
  {
    $this->revenueMicros = $revenueMicros;
  }
  /** @return string */
  public function getRevenueMicros()
  {
    return $this->revenueMicros;
  }
  /** @param string */
  public function setSegmentationId($segmentationId)
  {
    $this->segmentationId = $segmentationId;
  }
  /** @return string */
  public function getSegmentationId()
  {
    return $this->segmentationId;
  }
  /** @param string */
  public function setSegmentationName($segmentationName)
  {
    $this->segmentationName = $segmentationName;
  }
  /** @return string */
  public function getSegmentationName()
  {
    return $this->segmentationName;
  }
  /** @param string */
  public function setSegmentationType($segmentationType)
  {
    $this->segmentationType = $segmentationType;
  }
  /** @return string */
  public function getSegmentationType()
  {
    return $this->segmentationType;
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
  public function setStoreId($storeId)
  {
    $this->storeId = $storeId;
  }
  /** @return string */
  public function getStoreId()
  {
    return $this->storeId;
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

class ConversionList extends \Google\Collection
{
  /** @var Conversion[] */
  public $conversion;
  /** @var string */
  public $kind;
  protected $collection_key = 'conversion';
  protected $conversionType = Conversion::class;
  protected $conversionDataType = 'array';
  /** @param Conversion[] */
  public function setConversion($conversion)
  {
    $this->conversion = $conversion;
  }
  /** @return Conversion[] */
  public function getConversion()
  {
    return $this->conversion;
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

class CustomDimension extends \Google\Model
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

class CustomMetric extends \Google\Model
{
  /** @var string */
  public $name;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class IdMappingFile extends \Google\Model
{
}

class Report extends \Google\Collection
{
  /** @var ReportFiles[] */
  public $files;
  /** @var string */
  public $id;
  /** @var bool */
  public $isReportReady;
  /** @var string */
  public $kind;
  /** @var ReportRequest */
  public $request;
  /** @var int */
  public $rowCount;
  /** @var array[] */
  public $rows;
  /** @var string */
  public $statisticsCurrencyCode;
  /** @var string */
  public $statisticsTimeZone;
  protected $collection_key = 'rows';
  protected $filesType = ReportFiles::class;
  protected $filesDataType = 'array';
  protected $requestType = ReportRequest::class;
  protected $requestDataType = '';
  /** @param ReportFiles[] */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /** @return ReportFiles[] */
  public function getFiles()
  {
    return $this->files;
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
  public function setIsReportReady($isReportReady)
  {
    $this->isReportReady = $isReportReady;
  }
  /** @return bool */
  public function getIsReportReady()
  {
    return $this->isReportReady;
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
  /** @param ReportRequest */
  public function setRequest(ReportRequest $request)
  {
    $this->request = $request;
  }
  /** @return ReportRequest */
  public function getRequest()
  {
    return $this->request;
  }
  /** @param int */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return int */
  public function getRowCount()
  {
    return $this->rowCount;
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
  public function setStatisticsCurrencyCode($statisticsCurrencyCode)
  {
    $this->statisticsCurrencyCode = $statisticsCurrencyCode;
  }
  /** @return string */
  public function getStatisticsCurrencyCode()
  {
    return $this->statisticsCurrencyCode;
  }
  /** @param string */
  public function setStatisticsTimeZone($statisticsTimeZone)
  {
    $this->statisticsTimeZone = $statisticsTimeZone;
  }
  /** @return string */
  public function getStatisticsTimeZone()
  {
    return $this->statisticsTimeZone;
  }
}

class ReportApiColumnSpec extends \Google\Model
{
  /** @var string */
  public $columnName;
  /** @var string */
  public $customDimensionName;
  /** @var string */
  public $customMetricName;
  /** @var string */
  public $endDate;
  /** @var bool */
  public $groupByColumn;
  /** @var string */
  public $headerText;
  /** @var string */
  public $platformSource;
  /** @var string */
  public $productReportPerspective;
  /** @var string */
  public $savedColumnName;
  /** @var string */
  public $startDate;

  /** @param string */
  public function setColumnName($columnName)
  {
    $this->columnName = $columnName;
  }
  /** @return string */
  public function getColumnName()
  {
    return $this->columnName;
  }
  /** @param string */
  public function setCustomDimensionName($customDimensionName)
  {
    $this->customDimensionName = $customDimensionName;
  }
  /** @return string */
  public function getCustomDimensionName()
  {
    return $this->customDimensionName;
  }
  /** @param string */
  public function setCustomMetricName($customMetricName)
  {
    $this->customMetricName = $customMetricName;
  }
  /** @return string */
  public function getCustomMetricName()
  {
    return $this->customMetricName;
  }
  /** @param string */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return string */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param bool */
  public function setGroupByColumn($groupByColumn)
  {
    $this->groupByColumn = $groupByColumn;
  }
  /** @return bool */
  public function getGroupByColumn()
  {
    return $this->groupByColumn;
  }
  /** @param string */
  public function setHeaderText($headerText)
  {
    $this->headerText = $headerText;
  }
  /** @return string */
  public function getHeaderText()
  {
    return $this->headerText;
  }
  /** @param string */
  public function setPlatformSource($platformSource)
  {
    $this->platformSource = $platformSource;
  }
  /** @return string */
  public function getPlatformSource()
  {
    return $this->platformSource;
  }
  /** @param string */
  public function setProductReportPerspective($productReportPerspective)
  {
    $this->productReportPerspective = $productReportPerspective;
  }
  /** @return string */
  public function getProductReportPerspective()
  {
    return $this->productReportPerspective;
  }
  /** @param string */
  public function setSavedColumnName($savedColumnName)
  {
    $this->savedColumnName = $savedColumnName;
  }
  /** @return string */
  public function getSavedColumnName()
  {
    return $this->savedColumnName;
  }
  /** @param string */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return string */
  public function getStartDate()
  {
    return $this->startDate;
  }
}

class ReportFiles extends \Google\Model
{
  /** @var string */
  public $byteCount;
  /** @var string */
  public $url;

  /** @param string */
  public function setByteCount($byteCount)
  {
    $this->byteCount = $byteCount;
  }
  /** @return string */
  public function getByteCount()
  {
    return $this->byteCount;
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

class ReportRequest extends \Google\Collection
{
  /** @var ReportApiColumnSpec[] */
  public $columns;
  /** @var string */
  public $downloadFormat;
  /** @var ReportRequestFilters[] */
  public $filters;
  /** @var bool */
  public $includeDeletedEntities;
  /** @var bool */
  public $includeRemovedEntities;
  /** @var int */
  public $maxRowsPerFile;
  /** @var ReportRequestOrderBy[] */
  public $orderBy;
  /** @var ReportRequestReportScope */
  public $reportScope;
  /** @var string */
  public $reportType;
  /** @var int */
  public $rowCount;
  /** @var int */
  public $startRow;
  /** @var string */
  public $statisticsCurrency;
  /** @var ReportRequestTimeRange */
  public $timeRange;
  /** @var bool */
  public $verifySingleTimeZone;
  protected $collection_key = 'orderBy';
  protected $columnsType = ReportApiColumnSpec::class;
  protected $columnsDataType = 'array';
  protected $filtersType = ReportRequestFilters::class;
  protected $filtersDataType = 'array';
  protected $orderByType = ReportRequestOrderBy::class;
  protected $orderByDataType = 'array';
  protected $reportScopeType = ReportRequestReportScope::class;
  protected $reportScopeDataType = '';
  protected $timeRangeType = ReportRequestTimeRange::class;
  protected $timeRangeDataType = '';
  /** @param ReportApiColumnSpec[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return ReportApiColumnSpec[] */
  public function getColumns()
  {
    return $this->columns;
  }
  /** @param string */
  public function setDownloadFormat($downloadFormat)
  {
    $this->downloadFormat = $downloadFormat;
  }
  /** @return string */
  public function getDownloadFormat()
  {
    return $this->downloadFormat;
  }
  /** @param ReportRequestFilters[] */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return ReportRequestFilters[] */
  public function getFilters()
  {
    return $this->filters;
  }
  /** @param bool */
  public function setIncludeDeletedEntities($includeDeletedEntities)
  {
    $this->includeDeletedEntities = $includeDeletedEntities;
  }
  /** @return bool */
  public function getIncludeDeletedEntities()
  {
    return $this->includeDeletedEntities;
  }
  /** @param bool */
  public function setIncludeRemovedEntities($includeRemovedEntities)
  {
    $this->includeRemovedEntities = $includeRemovedEntities;
  }
  /** @return bool */
  public function getIncludeRemovedEntities()
  {
    return $this->includeRemovedEntities;
  }
  /** @param int */
  public function setMaxRowsPerFile($maxRowsPerFile)
  {
    $this->maxRowsPerFile = $maxRowsPerFile;
  }
  /** @return int */
  public function getMaxRowsPerFile()
  {
    return $this->maxRowsPerFile;
  }
  /** @param ReportRequestOrderBy[] */
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  /** @return ReportRequestOrderBy[] */
  public function getOrderBy()
  {
    return $this->orderBy;
  }
  /** @param ReportRequestReportScope */
  public function setReportScope(ReportRequestReportScope $reportScope)
  {
    $this->reportScope = $reportScope;
  }
  /** @return ReportRequestReportScope */
  public function getReportScope()
  {
    return $this->reportScope;
  }
  /** @param string */
  public function setReportType($reportType)
  {
    $this->reportType = $reportType;
  }
  /** @return string */
  public function getReportType()
  {
    return $this->reportType;
  }
  /** @param int */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return int */
  public function getRowCount()
  {
    return $this->rowCount;
  }
  /** @param int */
  public function setStartRow($startRow)
  {
    $this->startRow = $startRow;
  }
  /** @return int */
  public function getStartRow()
  {
    return $this->startRow;
  }
  /** @param string */
  public function setStatisticsCurrency($statisticsCurrency)
  {
    $this->statisticsCurrency = $statisticsCurrency;
  }
  /** @return string */
  public function getStatisticsCurrency()
  {
    return $this->statisticsCurrency;
  }
  /** @param ReportRequestTimeRange */
  public function setTimeRange(ReportRequestTimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return ReportRequestTimeRange */
  public function getTimeRange()
  {
    return $this->timeRange;
  }
  /** @param bool */
  public function setVerifySingleTimeZone($verifySingleTimeZone)
  {
    $this->verifySingleTimeZone = $verifySingleTimeZone;
  }
  /** @return bool */
  public function getVerifySingleTimeZone()
  {
    return $this->verifySingleTimeZone;
  }
}

class ReportRequestFilters extends \Google\Collection
{
  /** @var ReportApiColumnSpec */
  public $column;
  /** @var string */
  public $operator;
  /** @var array[] */
  public $values;
  protected $collection_key = 'values';
  protected $columnType = ReportApiColumnSpec::class;
  protected $columnDataType = '';
  /** @param ReportApiColumnSpec */
  public function setColumn(ReportApiColumnSpec $column)
  {
    $this->column = $column;
  }
  /** @return ReportApiColumnSpec */
  public function getColumn()
  {
    return $this->column;
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

class ReportRequestOrderBy extends \Google\Model
{
  /** @var ReportApiColumnSpec */
  public $column;
  /** @var string */
  public $sortOrder;
  protected $columnType = ReportApiColumnSpec::class;
  protected $columnDataType = '';
  /** @param ReportApiColumnSpec */
  public function setColumn(ReportApiColumnSpec $column)
  {
    $this->column = $column;
  }
  /** @return ReportApiColumnSpec */
  public function getColumn()
  {
    return $this->column;
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
}

class ReportRequestReportScope extends \Google\Model
{
  /** @var string */
  public $adGroupId;
  /** @var string */
  public $adId;
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $agencyId;
  /** @var string */
  public $campaignId;
  /** @var string */
  public $engineAccountId;
  /** @var string */
  public $keywordId;

  /** @param string */
  public function setAdGroupId($adGroupId)
  {
    $this->adGroupId = $adGroupId;
  }
  /** @return string */
  public function getAdGroupId()
  {
    return $this->adGroupId;
  }
  /** @param string */
  public function setAdId($adId)
  {
    $this->adId = $adId;
  }
  /** @return string */
  public function getAdId()
  {
    return $this->adId;
  }
  /** @param string */
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param string */
  public function setAgencyId($agencyId)
  {
    $this->agencyId = $agencyId;
  }
  /** @return string */
  public function getAgencyId()
  {
    return $this->agencyId;
  }
  /** @param string */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /** @return string */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /** @param string */
  public function setEngineAccountId($engineAccountId)
  {
    $this->engineAccountId = $engineAccountId;
  }
  /** @return string */
  public function getEngineAccountId()
  {
    return $this->engineAccountId;
  }
  /** @param string */
  public function setKeywordId($keywordId)
  {
    $this->keywordId = $keywordId;
  }
  /** @return string */
  public function getKeywordId()
  {
    return $this->keywordId;
  }
}

class ReportRequestTimeRange extends \Google\Model
{
  /** @var string */
  public $changedAttributesSinceTimestamp;
  /** @var string */
  public $changedMetricsSinceTimestamp;
  /** @var string */
  public $endDate;
  /** @var string */
  public $startDate;

  /** @param string */
  public function setChangedAttributesSinceTimestamp($changedAttributesSinceTimestamp)
  {
    $this->changedAttributesSinceTimestamp = $changedAttributesSinceTimestamp;
  }
  /** @return string */
  public function getChangedAttributesSinceTimestamp()
  {
    return $this->changedAttributesSinceTimestamp;
  }
  /** @param string */
  public function setChangedMetricsSinceTimestamp($changedMetricsSinceTimestamp)
  {
    $this->changedMetricsSinceTimestamp = $changedMetricsSinceTimestamp;
  }
  /** @return string */
  public function getChangedMetricsSinceTimestamp()
  {
    return $this->changedMetricsSinceTimestamp;
  }
  /** @param string */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return string */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param string */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return string */
  public function getStartDate()
  {
    return $this->startDate;
  }
}

class SavedColumn extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $savedColumnName;
  /** @var string */
  public $type;

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
  public function setSavedColumnName($savedColumnName)
  {
    $this->savedColumnName = $savedColumnName;
  }
  /** @return string */
  public function getSavedColumnName()
  {
    return $this->savedColumnName;
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

class SavedColumnList extends \Google\Collection
{
  /** @var SavedColumn[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = SavedColumn::class;
  protected $itemsDataType = 'array';
  /** @param SavedColumn[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return SavedColumn[] */
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

class UpdateAvailabilityRequest extends \Google\Collection
{
  /** @var Availability[] */
  public $availabilities;
  protected $collection_key = 'availabilities';
  protected $availabilitiesType = Availability::class;
  protected $availabilitiesDataType = 'array';
  /** @param Availability[] */
  public function setAvailabilities($availabilities)
  {
    $this->availabilities = $availabilities;
  }
  /** @return Availability[] */
  public function getAvailabilities()
  {
    return $this->availabilities;
  }
}

class UpdateAvailabilityResponse extends \Google\Collection
{
  /** @var Availability[] */
  public $availabilities;
  protected $collection_key = 'availabilities';
  protected $availabilitiesType = Availability::class;
  protected $availabilitiesDataType = 'array';
  /** @param Availability[] */
  public function setAvailabilities($availabilities)
  {
    $this->availabilities = $availabilities;
  }
  /** @return Availability[] */
  public function getAvailabilities()
  {
    return $this->availabilities;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Availability::class, 'Google_Service_Doubleclicksearch_Availability');
class_alias(Conversion::class, 'Google_Service_Doubleclicksearch_Conversion');
class_alias(ConversionList::class, 'Google_Service_Doubleclicksearch_ConversionList');
class_alias(CustomDimension::class, 'Google_Service_Doubleclicksearch_CustomDimension');
class_alias(CustomMetric::class, 'Google_Service_Doubleclicksearch_CustomMetric');
class_alias(IdMappingFile::class, 'Google_Service_Doubleclicksearch_IdMappingFile');
class_alias(Report::class, 'Google_Service_Doubleclicksearch_Report');
class_alias(ReportApiColumnSpec::class, 'Google_Service_Doubleclicksearch_ReportApiColumnSpec');
class_alias(ReportFiles::class, 'Google_Service_Doubleclicksearch_ReportFiles');
class_alias(ReportRequest::class, 'Google_Service_Doubleclicksearch_ReportRequest');
class_alias(ReportRequestFilters::class, 'Google_Service_Doubleclicksearch_ReportRequestFilters');
class_alias(ReportRequestOrderBy::class, 'Google_Service_Doubleclicksearch_ReportRequestOrderBy');
class_alias(ReportRequestReportScope::class, 'Google_Service_Doubleclicksearch_ReportRequestReportScope');
class_alias(ReportRequestTimeRange::class, 'Google_Service_Doubleclicksearch_ReportRequestTimeRange');
class_alias(SavedColumn::class, 'Google_Service_Doubleclicksearch_SavedColumn');
class_alias(SavedColumnList::class, 'Google_Service_Doubleclicksearch_SavedColumnList');
class_alias(UpdateAvailabilityRequest::class, 'Google_Service_Doubleclicksearch_UpdateAvailabilityRequest');
class_alias(UpdateAvailabilityResponse::class, 'Google_Service_Doubleclicksearch_UpdateAvailabilityResponse');
