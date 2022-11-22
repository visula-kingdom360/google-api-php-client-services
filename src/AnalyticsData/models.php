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

namespace Google\Service\AnalyticsData;

class ActiveMetricRestriction extends \Google\Collection
{
  /** @var string */
  public $metricName;
  /** @var string[] */
  public $restrictedMetricTypes;
  protected $collection_key = 'restrictedMetricTypes';
  /** @param string */
  public function setMetricName($metricName)
  {
    $this->metricName = $metricName;
  }
  /** @return string */
  public function getMetricName()
  {
    return $this->metricName;
  }
  /** @param string[] */
  public function setRestrictedMetricTypes($restrictedMetricTypes)
  {
    $this->restrictedMetricTypes = $restrictedMetricTypes;
  }
  /** @return string[] */
  public function getRestrictedMetricTypes()
  {
    return $this->restrictedMetricTypes;
  }
}

class BatchRunPivotReportsRequest extends \Google\Collection
{
  /** @var RunPivotReportRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = RunPivotReportRequest::class;
  protected $requestsDataType = 'array';
  /** @param RunPivotReportRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return RunPivotReportRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchRunPivotReportsResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var RunPivotReportResponse[] */
  public $pivotReports;
  protected $collection_key = 'pivotReports';
  protected $pivotReportsType = RunPivotReportResponse::class;
  protected $pivotReportsDataType = 'array';
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
  /** @param RunPivotReportResponse[] */
  public function setPivotReports($pivotReports)
  {
    $this->pivotReports = $pivotReports;
  }
  /** @return RunPivotReportResponse[] */
  public function getPivotReports()
  {
    return $this->pivotReports;
  }
}

class BatchRunReportsRequest extends \Google\Collection
{
  /** @var RunReportRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = RunReportRequest::class;
  protected $requestsDataType = 'array';
  /** @param RunReportRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return RunReportRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchRunReportsResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var RunReportResponse[] */
  public $reports;
  protected $collection_key = 'reports';
  protected $reportsType = RunReportResponse::class;
  protected $reportsDataType = 'array';
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
  /** @param RunReportResponse[] */
  public function setReports($reports)
  {
    $this->reports = $reports;
  }
  /** @return RunReportResponse[] */
  public function getReports()
  {
    return $this->reports;
  }
}

class BetweenFilter extends \Google\Model
{
  /** @var NumericValue */
  public $fromValue;
  /** @var NumericValue */
  public $toValue;
  protected $fromValueType = NumericValue::class;
  protected $fromValueDataType = '';
  protected $toValueType = NumericValue::class;
  protected $toValueDataType = '';
  /** @param NumericValue */
  public function setFromValue(NumericValue $fromValue)
  {
    $this->fromValue = $fromValue;
  }
  /** @return NumericValue */
  public function getFromValue()
  {
    return $this->fromValue;
  }
  /** @param NumericValue */
  public function setToValue(NumericValue $toValue)
  {
    $this->toValue = $toValue;
  }
  /** @return NumericValue */
  public function getToValue()
  {
    return $this->toValue;
  }
}

class CaseExpression extends \Google\Model
{
  /** @var string */
  public $dimensionName;

  /** @param string */
  public function setDimensionName($dimensionName)
  {
    $this->dimensionName = $dimensionName;
  }
  /** @return string */
  public function getDimensionName()
  {
    return $this->dimensionName;
  }
}

class CheckCompatibilityRequest extends \Google\Collection
{
  /** @var string */
  public $compatibilityFilter;
  /** @var FilterExpression */
  public $dimensionFilter;
  /** @var Dimension[] */
  public $dimensions;
  /** @var FilterExpression */
  public $metricFilter;
  /** @var Metric[] */
  public $metrics;
  protected $collection_key = 'metrics';
  protected $dimensionFilterType = FilterExpression::class;
  protected $dimensionFilterDataType = '';
  protected $dimensionsType = Dimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricFilterType = FilterExpression::class;
  protected $metricFilterDataType = '';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  /** @param string */
  public function setCompatibilityFilter($compatibilityFilter)
  {
    $this->compatibilityFilter = $compatibilityFilter;
  }
  /** @return string */
  public function getCompatibilityFilter()
  {
    return $this->compatibilityFilter;
  }
  /** @param FilterExpression */
  public function setDimensionFilter(FilterExpression $dimensionFilter)
  {
    $this->dimensionFilter = $dimensionFilter;
  }
  /** @return FilterExpression */
  public function getDimensionFilter()
  {
    return $this->dimensionFilter;
  }
  /** @param Dimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param FilterExpression */
  public function setMetricFilter(FilterExpression $metricFilter)
  {
    $this->metricFilter = $metricFilter;
  }
  /** @return FilterExpression */
  public function getMetricFilter()
  {
    return $this->metricFilter;
  }
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
}

class CheckCompatibilityResponse extends \Google\Collection
{
  /** @var DimensionCompatibility[] */
  public $dimensionCompatibilities;
  /** @var MetricCompatibility[] */
  public $metricCompatibilities;
  protected $collection_key = 'metricCompatibilities';
  protected $dimensionCompatibilitiesType = DimensionCompatibility::class;
  protected $dimensionCompatibilitiesDataType = 'array';
  protected $metricCompatibilitiesType = MetricCompatibility::class;
  protected $metricCompatibilitiesDataType = 'array';
  /** @param DimensionCompatibility[] */
  public function setDimensionCompatibilities($dimensionCompatibilities)
  {
    $this->dimensionCompatibilities = $dimensionCompatibilities;
  }
  /** @return DimensionCompatibility[] */
  public function getDimensionCompatibilities()
  {
    return $this->dimensionCompatibilities;
  }
  /** @param MetricCompatibility[] */
  public function setMetricCompatibilities($metricCompatibilities)
  {
    $this->metricCompatibilities = $metricCompatibilities;
  }
  /** @return MetricCompatibility[] */
  public function getMetricCompatibilities()
  {
    return $this->metricCompatibilities;
  }
}

class Cohort extends \Google\Model
{
  /** @var DateRange */
  public $dateRange;
  /** @var string */
  public $dimension;
  /** @var string */
  public $name;
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  /** @param DateRange */
  public function setDateRange(DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  /** @return DateRange */
  public function getDateRange()
  {
    return $this->dateRange;
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

class CohortReportSettings extends \Google\Model
{
  /** @var bool */
  public $accumulate;

  /** @param bool */
  public function setAccumulate($accumulate)
  {
    $this->accumulate = $accumulate;
  }
  /** @return bool */
  public function getAccumulate()
  {
    return $this->accumulate;
  }
}

class CohortSpec extends \Google\Collection
{
  /** @var CohortReportSettings */
  public $cohortReportSettings;
  /** @var Cohort[] */
  public $cohorts;
  /** @var CohortsRange */
  public $cohortsRange;
  protected $collection_key = 'cohorts';
  protected $cohortReportSettingsType = CohortReportSettings::class;
  protected $cohortReportSettingsDataType = '';
  protected $cohortsType = Cohort::class;
  protected $cohortsDataType = 'array';
  protected $cohortsRangeType = CohortsRange::class;
  protected $cohortsRangeDataType = '';
  /** @param CohortReportSettings */
  public function setCohortReportSettings(CohortReportSettings $cohortReportSettings)
  {
    $this->cohortReportSettings = $cohortReportSettings;
  }
  /** @return CohortReportSettings */
  public function getCohortReportSettings()
  {
    return $this->cohortReportSettings;
  }
  /** @param Cohort[] */
  public function setCohorts($cohorts)
  {
    $this->cohorts = $cohorts;
  }
  /** @return Cohort[] */
  public function getCohorts()
  {
    return $this->cohorts;
  }
  /** @param CohortsRange */
  public function setCohortsRange(CohortsRange $cohortsRange)
  {
    $this->cohortsRange = $cohortsRange;
  }
  /** @return CohortsRange */
  public function getCohortsRange()
  {
    return $this->cohortsRange;
  }
}

class CohortsRange extends \Google\Model
{
  /** @var int */
  public $endOffset;
  /** @var string */
  public $granularity;
  /** @var int */
  public $startOffset;

  /** @param int */
  public function setEndOffset($endOffset)
  {
    $this->endOffset = $endOffset;
  }
  /** @return int */
  public function getEndOffset()
  {
    return $this->endOffset;
  }
  /** @param string */
  public function setGranularity($granularity)
  {
    $this->granularity = $granularity;
  }
  /** @return string */
  public function getGranularity()
  {
    return $this->granularity;
  }
  /** @param int */
  public function setStartOffset($startOffset)
  {
    $this->startOffset = $startOffset;
  }
  /** @return int */
  public function getStartOffset()
  {
    return $this->startOffset;
  }
}

class ConcatenateExpression extends \Google\Collection
{
  /** @var string */
  public $delimiter;
  /** @var string[] */
  public $dimensionNames;
  protected $collection_key = 'dimensionNames';
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
  /** @param string[] */
  public function setDimensionNames($dimensionNames)
  {
    $this->dimensionNames = $dimensionNames;
  }
  /** @return string[] */
  public function getDimensionNames()
  {
    return $this->dimensionNames;
  }
}

class DateRange extends \Google\Model
{
  /** @var string */
  public $endDate;
  /** @var string */
  public $name;
  /** @var string */
  public $startDate;

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

class Dimension extends \Google\Model
{
  /** @var DimensionExpression */
  public $dimensionExpression;
  /** @var string */
  public $name;
  protected $dimensionExpressionType = DimensionExpression::class;
  protected $dimensionExpressionDataType = '';
  /** @param DimensionExpression */
  public function setDimensionExpression(DimensionExpression $dimensionExpression)
  {
    $this->dimensionExpression = $dimensionExpression;
  }
  /** @return DimensionExpression */
  public function getDimensionExpression()
  {
    return $this->dimensionExpression;
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

class DimensionCompatibility extends \Google\Model
{
  /** @var string */
  public $compatibility;
  /** @var DimensionMetadata */
  public $dimensionMetadata;
  protected $dimensionMetadataType = DimensionMetadata::class;
  protected $dimensionMetadataDataType = '';
  /** @param string */
  public function setCompatibility($compatibility)
  {
    $this->compatibility = $compatibility;
  }
  /** @return string */
  public function getCompatibility()
  {
    return $this->compatibility;
  }
  /** @param DimensionMetadata */
  public function setDimensionMetadata(DimensionMetadata $dimensionMetadata)
  {
    $this->dimensionMetadata = $dimensionMetadata;
  }
  /** @return DimensionMetadata */
  public function getDimensionMetadata()
  {
    return $this->dimensionMetadata;
  }
}

class DimensionExpression extends \Google\Model
{
  /** @var ConcatenateExpression */
  public $concatenate;
  /** @var CaseExpression */
  public $lowerCase;
  /** @var CaseExpression */
  public $upperCase;
  protected $concatenateType = ConcatenateExpression::class;
  protected $concatenateDataType = '';
  protected $lowerCaseType = CaseExpression::class;
  protected $lowerCaseDataType = '';
  protected $upperCaseType = CaseExpression::class;
  protected $upperCaseDataType = '';
  /** @param ConcatenateExpression */
  public function setConcatenate(ConcatenateExpression $concatenate)
  {
    $this->concatenate = $concatenate;
  }
  /** @return ConcatenateExpression */
  public function getConcatenate()
  {
    return $this->concatenate;
  }
  /** @param CaseExpression */
  public function setLowerCase(CaseExpression $lowerCase)
  {
    $this->lowerCase = $lowerCase;
  }
  /** @return CaseExpression */
  public function getLowerCase()
  {
    return $this->lowerCase;
  }
  /** @param CaseExpression */
  public function setUpperCase(CaseExpression $upperCase)
  {
    $this->upperCase = $upperCase;
  }
  /** @return CaseExpression */
  public function getUpperCase()
  {
    return $this->upperCase;
  }
}

class DimensionHeader extends \Google\Model
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

class DimensionMetadata extends \Google\Collection
{
  /** @var string */
  public $apiName;
  /** @var string */
  public $category;
  /** @var bool */
  public $customDefinition;
  /** @var string[] */
  public $deprecatedApiNames;
  /** @var string */
  public $description;
  /** @var string */
  public $uiName;
  protected $collection_key = 'deprecatedApiNames';
  /** @param string */
  public function setApiName($apiName)
  {
    $this->apiName = $apiName;
  }
  /** @return string */
  public function getApiName()
  {
    return $this->apiName;
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
  /** @param bool */
  public function setCustomDefinition($customDefinition)
  {
    $this->customDefinition = $customDefinition;
  }
  /** @return bool */
  public function getCustomDefinition()
  {
    return $this->customDefinition;
  }
  /** @param string[] */
  public function setDeprecatedApiNames($deprecatedApiNames)
  {
    $this->deprecatedApiNames = $deprecatedApiNames;
  }
  /** @return string[] */
  public function getDeprecatedApiNames()
  {
    return $this->deprecatedApiNames;
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
  public function setUiName($uiName)
  {
    $this->uiName = $uiName;
  }
  /** @return string */
  public function getUiName()
  {
    return $this->uiName;
  }
}

class DimensionOrderBy extends \Google\Model
{
  /** @var string */
  public $dimensionName;
  /** @var string */
  public $orderType;

  /** @param string */
  public function setDimensionName($dimensionName)
  {
    $this->dimensionName = $dimensionName;
  }
  /** @return string */
  public function getDimensionName()
  {
    return $this->dimensionName;
  }
  /** @param string */
  public function setOrderType($orderType)
  {
    $this->orderType = $orderType;
  }
  /** @return string */
  public function getOrderType()
  {
    return $this->orderType;
  }
}

class DimensionValue extends \Google\Model
{
  /** @var string */
  public $value;

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

class Filter extends \Google\Model
{
  /** @var BetweenFilter */
  public $betweenFilter;
  /** @var string */
  public $fieldName;
  /** @var InListFilter */
  public $inListFilter;
  /** @var NumericFilter */
  public $numericFilter;
  /** @var StringFilter */
  public $stringFilter;
  protected $betweenFilterType = BetweenFilter::class;
  protected $betweenFilterDataType = '';
  protected $inListFilterType = InListFilter::class;
  protected $inListFilterDataType = '';
  protected $numericFilterType = NumericFilter::class;
  protected $numericFilterDataType = '';
  protected $stringFilterType = StringFilter::class;
  protected $stringFilterDataType = '';
  /** @param BetweenFilter */
  public function setBetweenFilter(BetweenFilter $betweenFilter)
  {
    $this->betweenFilter = $betweenFilter;
  }
  /** @return BetweenFilter */
  public function getBetweenFilter()
  {
    return $this->betweenFilter;
  }
  /** @param string */
  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /** @return string */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  /** @param InListFilter */
  public function setInListFilter(InListFilter $inListFilter)
  {
    $this->inListFilter = $inListFilter;
  }
  /** @return InListFilter */
  public function getInListFilter()
  {
    return $this->inListFilter;
  }
  /** @param NumericFilter */
  public function setNumericFilter(NumericFilter $numericFilter)
  {
    $this->numericFilter = $numericFilter;
  }
  /** @return NumericFilter */
  public function getNumericFilter()
  {
    return $this->numericFilter;
  }
  /** @param StringFilter */
  public function setStringFilter(StringFilter $stringFilter)
  {
    $this->stringFilter = $stringFilter;
  }
  /** @return StringFilter */
  public function getStringFilter()
  {
    return $this->stringFilter;
  }
}

class FilterExpression extends \Google\Model
{
  /** @var FilterExpressionList */
  public $andGroup;
  /** @var Filter */
  public $filter;
  /** @var FilterExpression */
  public $notExpression;
  /** @var FilterExpressionList */
  public $orGroup;
  protected $andGroupType = FilterExpressionList::class;
  protected $andGroupDataType = '';
  protected $filterType = Filter::class;
  protected $filterDataType = '';
  protected $notExpressionType = FilterExpression::class;
  protected $notExpressionDataType = '';
  protected $orGroupType = FilterExpressionList::class;
  protected $orGroupDataType = '';
  /** @param FilterExpressionList */
  public function setAndGroup(FilterExpressionList $andGroup)
  {
    $this->andGroup = $andGroup;
  }
  /** @return FilterExpressionList */
  public function getAndGroup()
  {
    return $this->andGroup;
  }
  /** @param Filter */
  public function setFilter(Filter $filter)
  {
    $this->filter = $filter;
  }
  /** @return Filter */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param FilterExpression */
  public function setNotExpression(FilterExpression $notExpression)
  {
    $this->notExpression = $notExpression;
  }
  /** @return FilterExpression */
  public function getNotExpression()
  {
    return $this->notExpression;
  }
  /** @param FilterExpressionList */
  public function setOrGroup(FilterExpressionList $orGroup)
  {
    $this->orGroup = $orGroup;
  }
  /** @return FilterExpressionList */
  public function getOrGroup()
  {
    return $this->orGroup;
  }
}

class FilterExpressionList extends \Google\Collection
{
  /** @var FilterExpression[] */
  public $expressions;
  protected $collection_key = 'expressions';
  protected $expressionsType = FilterExpression::class;
  protected $expressionsDataType = 'array';
  /** @param FilterExpression[] */
  public function setExpressions($expressions)
  {
    $this->expressions = $expressions;
  }
  /** @return FilterExpression[] */
  public function getExpressions()
  {
    return $this->expressions;
  }
}

class InListFilter extends \Google\Collection
{
  /** @var bool */
  public $caseSensitive;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param bool */
  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }
  /** @return bool */
  public function getCaseSensitive()
  {
    return $this->caseSensitive;
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

class Metadata extends \Google\Collection
{
  /** @var DimensionMetadata[] */
  public $dimensions;
  /** @var MetricMetadata[] */
  public $metrics;
  /** @var string */
  public $name;
  protected $collection_key = 'metrics';
  protected $dimensionsType = DimensionMetadata::class;
  protected $dimensionsDataType = 'array';
  protected $metricsType = MetricMetadata::class;
  protected $metricsDataType = 'array';
  /** @param DimensionMetadata[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return DimensionMetadata[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param MetricMetadata[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return MetricMetadata[] */
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

class Metric extends \Google\Model
{
  /** @var string */
  public $expression;
  /** @var bool */
  public $invisible;
  /** @var string */
  public $name;

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
  /** @param bool */
  public function setInvisible($invisible)
  {
    $this->invisible = $invisible;
  }
  /** @return bool */
  public function getInvisible()
  {
    return $this->invisible;
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

class MetricCompatibility extends \Google\Model
{
  /** @var string */
  public $compatibility;
  /** @var MetricMetadata */
  public $metricMetadata;
  protected $metricMetadataType = MetricMetadata::class;
  protected $metricMetadataDataType = '';
  /** @param string */
  public function setCompatibility($compatibility)
  {
    $this->compatibility = $compatibility;
  }
  /** @return string */
  public function getCompatibility()
  {
    return $this->compatibility;
  }
  /** @param MetricMetadata */
  public function setMetricMetadata(MetricMetadata $metricMetadata)
  {
    $this->metricMetadata = $metricMetadata;
  }
  /** @return MetricMetadata */
  public function getMetricMetadata()
  {
    return $this->metricMetadata;
  }
}

class MetricHeader extends \Google\Model
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

class MetricMetadata extends \Google\Collection
{
  /** @var string */
  public $apiName;
  /** @var string[] */
  public $blockedReasons;
  /** @var string */
  public $category;
  /** @var bool */
  public $customDefinition;
  /** @var string[] */
  public $deprecatedApiNames;
  /** @var string */
  public $description;
  /** @var string */
  public $expression;
  /** @var string */
  public $type;
  /** @var string */
  public $uiName;
  protected $collection_key = 'deprecatedApiNames';
  /** @param string */
  public function setApiName($apiName)
  {
    $this->apiName = $apiName;
  }
  /** @return string */
  public function getApiName()
  {
    return $this->apiName;
  }
  /** @param string[] */
  public function setBlockedReasons($blockedReasons)
  {
    $this->blockedReasons = $blockedReasons;
  }
  /** @return string[] */
  public function getBlockedReasons()
  {
    return $this->blockedReasons;
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
  /** @param bool */
  public function setCustomDefinition($customDefinition)
  {
    $this->customDefinition = $customDefinition;
  }
  /** @return bool */
  public function getCustomDefinition()
  {
    return $this->customDefinition;
  }
  /** @param string[] */
  public function setDeprecatedApiNames($deprecatedApiNames)
  {
    $this->deprecatedApiNames = $deprecatedApiNames;
  }
  /** @return string[] */
  public function getDeprecatedApiNames()
  {
    return $this->deprecatedApiNames;
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
  public function setUiName($uiName)
  {
    $this->uiName = $uiName;
  }
  /** @return string */
  public function getUiName()
  {
    return $this->uiName;
  }
}

class MetricOrderBy extends \Google\Model
{
  /** @var string */
  public $metricName;

  /** @param string */
  public function setMetricName($metricName)
  {
    $this->metricName = $metricName;
  }
  /** @return string */
  public function getMetricName()
  {
    return $this->metricName;
  }
}

class MetricValue extends \Google\Model
{
  /** @var string */
  public $value;

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

class MinuteRange extends \Google\Model
{
  /** @var int */
  public $endMinutesAgo;
  /** @var string */
  public $name;
  /** @var int */
  public $startMinutesAgo;

  /** @param int */
  public function setEndMinutesAgo($endMinutesAgo)
  {
    $this->endMinutesAgo = $endMinutesAgo;
  }
  /** @return int */
  public function getEndMinutesAgo()
  {
    return $this->endMinutesAgo;
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
  public function setStartMinutesAgo($startMinutesAgo)
  {
    $this->startMinutesAgo = $startMinutesAgo;
  }
  /** @return int */
  public function getStartMinutesAgo()
  {
    return $this->startMinutesAgo;
  }
}

class NumericFilter extends \Google\Model
{
  /** @var string */
  public $operation;
  /** @var NumericValue */
  public $value;
  protected $valueType = NumericValue::class;
  protected $valueDataType = '';
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
  /** @param NumericValue */
  public function setValue(NumericValue $value)
  {
    $this->value = $value;
  }
  /** @return NumericValue */
  public function getValue()
  {
    return $this->value;
  }
}

class NumericValue extends \Google\Model
{
  public $doubleValue;
  /** @var string */
  public $int64Value;

  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param string */
  public function setInt64Value($int64Value)
  {
    $this->int64Value = $int64Value;
  }
  /** @return string */
  public function getInt64Value()
  {
    return $this->int64Value;
  }
}

class OrderBy extends \Google\Model
{
  /** @var bool */
  public $desc;
  /** @var DimensionOrderBy */
  public $dimension;
  /** @var MetricOrderBy */
  public $metric;
  /** @var PivotOrderBy */
  public $pivot;
  protected $dimensionType = DimensionOrderBy::class;
  protected $dimensionDataType = '';
  protected $metricType = MetricOrderBy::class;
  protected $metricDataType = '';
  protected $pivotType = PivotOrderBy::class;
  protected $pivotDataType = '';
  /** @param bool */
  public function setDesc($desc)
  {
    $this->desc = $desc;
  }
  /** @return bool */
  public function getDesc()
  {
    return $this->desc;
  }
  /** @param DimensionOrderBy */
  public function setDimension(DimensionOrderBy $dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return DimensionOrderBy */
  public function getDimension()
  {
    return $this->dimension;
  }
  /** @param MetricOrderBy */
  public function setMetric(MetricOrderBy $metric)
  {
    $this->metric = $metric;
  }
  /** @return MetricOrderBy */
  public function getMetric()
  {
    return $this->metric;
  }
  /** @param PivotOrderBy */
  public function setPivot(PivotOrderBy $pivot)
  {
    $this->pivot = $pivot;
  }
  /** @return PivotOrderBy */
  public function getPivot()
  {
    return $this->pivot;
  }
}

class Pivot extends \Google\Collection
{
  /** @var string[] */
  public $fieldNames;
  /** @var string */
  public $limit;
  /** @var string[] */
  public $metricAggregations;
  /** @var string */
  public $offset;
  /** @var OrderBy[] */
  public $orderBys;
  protected $collection_key = 'orderBys';
  protected $orderBysType = OrderBy::class;
  protected $orderBysDataType = 'array';
  /** @param string[] */
  public function setFieldNames($fieldNames)
  {
    $this->fieldNames = $fieldNames;
  }
  /** @return string[] */
  public function getFieldNames()
  {
    return $this->fieldNames;
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
  /** @param string[] */
  public function setMetricAggregations($metricAggregations)
  {
    $this->metricAggregations = $metricAggregations;
  }
  /** @return string[] */
  public function getMetricAggregations()
  {
    return $this->metricAggregations;
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
  /** @param OrderBy[] */
  public function setOrderBys($orderBys)
  {
    $this->orderBys = $orderBys;
  }
  /** @return OrderBy[] */
  public function getOrderBys()
  {
    return $this->orderBys;
  }
}

class PivotDimensionHeader extends \Google\Collection
{
  /** @var DimensionValue[] */
  public $dimensionValues;
  protected $collection_key = 'dimensionValues';
  protected $dimensionValuesType = DimensionValue::class;
  protected $dimensionValuesDataType = 'array';
  /** @param DimensionValue[] */
  public function setDimensionValues($dimensionValues)
  {
    $this->dimensionValues = $dimensionValues;
  }
  /** @return DimensionValue[] */
  public function getDimensionValues()
  {
    return $this->dimensionValues;
  }
}

class PivotHeader extends \Google\Collection
{
  /** @var PivotDimensionHeader[] */
  public $pivotDimensionHeaders;
  /** @var int */
  public $rowCount;
  protected $collection_key = 'pivotDimensionHeaders';
  protected $pivotDimensionHeadersType = PivotDimensionHeader::class;
  protected $pivotDimensionHeadersDataType = 'array';
  /** @param PivotDimensionHeader[] */
  public function setPivotDimensionHeaders($pivotDimensionHeaders)
  {
    $this->pivotDimensionHeaders = $pivotDimensionHeaders;
  }
  /** @return PivotDimensionHeader[] */
  public function getPivotDimensionHeaders()
  {
    return $this->pivotDimensionHeaders;
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
}

class PivotOrderBy extends \Google\Collection
{
  /** @var string */
  public $metricName;
  /** @var PivotSelection[] */
  public $pivotSelections;
  protected $collection_key = 'pivotSelections';
  protected $pivotSelectionsType = PivotSelection::class;
  protected $pivotSelectionsDataType = 'array';
  /** @param string */
  public function setMetricName($metricName)
  {
    $this->metricName = $metricName;
  }
  /** @return string */
  public function getMetricName()
  {
    return $this->metricName;
  }
  /** @param PivotSelection[] */
  public function setPivotSelections($pivotSelections)
  {
    $this->pivotSelections = $pivotSelections;
  }
  /** @return PivotSelection[] */
  public function getPivotSelections()
  {
    return $this->pivotSelections;
  }
}

class PivotSelection extends \Google\Model
{
  /** @var string */
  public $dimensionName;
  /** @var string */
  public $dimensionValue;

  /** @param string */
  public function setDimensionName($dimensionName)
  {
    $this->dimensionName = $dimensionName;
  }
  /** @return string */
  public function getDimensionName()
  {
    return $this->dimensionName;
  }
  /** @param string */
  public function setDimensionValue($dimensionValue)
  {
    $this->dimensionValue = $dimensionValue;
  }
  /** @return string */
  public function getDimensionValue()
  {
    return $this->dimensionValue;
  }
}

class PropertyQuota extends \Google\Model
{
  /** @var QuotaStatus */
  public $concurrentRequests;
  /** @var QuotaStatus */
  public $potentiallyThresholdedRequestsPerHour;
  /** @var QuotaStatus */
  public $serverErrorsPerProjectPerHour;
  /** @var QuotaStatus */
  public $tokensPerDay;
  /** @var QuotaStatus */
  public $tokensPerHour;
  /** @var QuotaStatus */
  public $tokensPerProjectPerHour;
  protected $concurrentRequestsType = QuotaStatus::class;
  protected $concurrentRequestsDataType = '';
  protected $potentiallyThresholdedRequestsPerHourType = QuotaStatus::class;
  protected $potentiallyThresholdedRequestsPerHourDataType = '';
  protected $serverErrorsPerProjectPerHourType = QuotaStatus::class;
  protected $serverErrorsPerProjectPerHourDataType = '';
  protected $tokensPerDayType = QuotaStatus::class;
  protected $tokensPerDayDataType = '';
  protected $tokensPerHourType = QuotaStatus::class;
  protected $tokensPerHourDataType = '';
  protected $tokensPerProjectPerHourType = QuotaStatus::class;
  protected $tokensPerProjectPerHourDataType = '';
  /** @param QuotaStatus */
  public function setConcurrentRequests(QuotaStatus $concurrentRequests)
  {
    $this->concurrentRequests = $concurrentRequests;
  }
  /** @return QuotaStatus */
  public function getConcurrentRequests()
  {
    return $this->concurrentRequests;
  }
  /** @param QuotaStatus */
  public function setPotentiallyThresholdedRequestsPerHour(QuotaStatus $potentiallyThresholdedRequestsPerHour)
  {
    $this->potentiallyThresholdedRequestsPerHour = $potentiallyThresholdedRequestsPerHour;
  }
  /** @return QuotaStatus */
  public function getPotentiallyThresholdedRequestsPerHour()
  {
    return $this->potentiallyThresholdedRequestsPerHour;
  }
  /** @param QuotaStatus */
  public function setServerErrorsPerProjectPerHour(QuotaStatus $serverErrorsPerProjectPerHour)
  {
    $this->serverErrorsPerProjectPerHour = $serverErrorsPerProjectPerHour;
  }
  /** @return QuotaStatus */
  public function getServerErrorsPerProjectPerHour()
  {
    return $this->serverErrorsPerProjectPerHour;
  }
  /** @param QuotaStatus */
  public function setTokensPerDay(QuotaStatus $tokensPerDay)
  {
    $this->tokensPerDay = $tokensPerDay;
  }
  /** @return QuotaStatus */
  public function getTokensPerDay()
  {
    return $this->tokensPerDay;
  }
  /** @param QuotaStatus */
  public function setTokensPerHour(QuotaStatus $tokensPerHour)
  {
    $this->tokensPerHour = $tokensPerHour;
  }
  /** @return QuotaStatus */
  public function getTokensPerHour()
  {
    return $this->tokensPerHour;
  }
  /** @param QuotaStatus */
  public function setTokensPerProjectPerHour(QuotaStatus $tokensPerProjectPerHour)
  {
    $this->tokensPerProjectPerHour = $tokensPerProjectPerHour;
  }
  /** @return QuotaStatus */
  public function getTokensPerProjectPerHour()
  {
    return $this->tokensPerProjectPerHour;
  }
}

class QuotaStatus extends \Google\Model
{
  /** @var int */
  public $consumed;
  /** @var int */
  public $remaining;

  /** @param int */
  public function setConsumed($consumed)
  {
    $this->consumed = $consumed;
  }
  /** @return int */
  public function getConsumed()
  {
    return $this->consumed;
  }
  /** @param int */
  public function setRemaining($remaining)
  {
    $this->remaining = $remaining;
  }
  /** @return int */
  public function getRemaining()
  {
    return $this->remaining;
  }
}

class ResponseMetaData extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var bool */
  public $dataLossFromOtherRow;
  /** @var string */
  public $emptyReason;
  /** @var SchemaRestrictionResponse */
  public $schemaRestrictionResponse;
  /** @var bool */
  public $subjectToThresholding;
  /** @var string */
  public $timeZone;
  protected $schemaRestrictionResponseType = SchemaRestrictionResponse::class;
  protected $schemaRestrictionResponseDataType = '';
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
  /** @param bool */
  public function setDataLossFromOtherRow($dataLossFromOtherRow)
  {
    $this->dataLossFromOtherRow = $dataLossFromOtherRow;
  }
  /** @return bool */
  public function getDataLossFromOtherRow()
  {
    return $this->dataLossFromOtherRow;
  }
  /** @param string */
  public function setEmptyReason($emptyReason)
  {
    $this->emptyReason = $emptyReason;
  }
  /** @return string */
  public function getEmptyReason()
  {
    return $this->emptyReason;
  }
  /** @param SchemaRestrictionResponse */
  public function setSchemaRestrictionResponse(SchemaRestrictionResponse $schemaRestrictionResponse)
  {
    $this->schemaRestrictionResponse = $schemaRestrictionResponse;
  }
  /** @return SchemaRestrictionResponse */
  public function getSchemaRestrictionResponse()
  {
    return $this->schemaRestrictionResponse;
  }
  /** @param bool */
  public function setSubjectToThresholding($subjectToThresholding)
  {
    $this->subjectToThresholding = $subjectToThresholding;
  }
  /** @return bool */
  public function getSubjectToThresholding()
  {
    return $this->subjectToThresholding;
  }
  /** @param string */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return string */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

class Row extends \Google\Collection
{
  /** @var DimensionValue[] */
  public $dimensionValues;
  /** @var MetricValue[] */
  public $metricValues;
  protected $collection_key = 'metricValues';
  protected $dimensionValuesType = DimensionValue::class;
  protected $dimensionValuesDataType = 'array';
  protected $metricValuesType = MetricValue::class;
  protected $metricValuesDataType = 'array';
  /** @param DimensionValue[] */
  public function setDimensionValues($dimensionValues)
  {
    $this->dimensionValues = $dimensionValues;
  }
  /** @return DimensionValue[] */
  public function getDimensionValues()
  {
    return $this->dimensionValues;
  }
  /** @param MetricValue[] */
  public function setMetricValues($metricValues)
  {
    $this->metricValues = $metricValues;
  }
  /** @return MetricValue[] */
  public function getMetricValues()
  {
    return $this->metricValues;
  }
}

class RunPivotReportRequest extends \Google\Collection
{
  /** @var CohortSpec */
  public $cohortSpec;
  /** @var string */
  public $currencyCode;
  /** @var DateRange[] */
  public $dateRanges;
  /** @var FilterExpression */
  public $dimensionFilter;
  /** @var Dimension[] */
  public $dimensions;
  /** @var bool */
  public $keepEmptyRows;
  /** @var FilterExpression */
  public $metricFilter;
  /** @var Metric[] */
  public $metrics;
  /** @var Pivot[] */
  public $pivots;
  /** @var string */
  public $property;
  /** @var bool */
  public $returnPropertyQuota;
  protected $collection_key = 'pivots';
  protected $cohortSpecType = CohortSpec::class;
  protected $cohortSpecDataType = '';
  protected $dateRangesType = DateRange::class;
  protected $dateRangesDataType = 'array';
  protected $dimensionFilterType = FilterExpression::class;
  protected $dimensionFilterDataType = '';
  protected $dimensionsType = Dimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricFilterType = FilterExpression::class;
  protected $metricFilterDataType = '';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $pivotsType = Pivot::class;
  protected $pivotsDataType = 'array';
  /** @param CohortSpec */
  public function setCohortSpec(CohortSpec $cohortSpec)
  {
    $this->cohortSpec = $cohortSpec;
  }
  /** @return CohortSpec */
  public function getCohortSpec()
  {
    return $this->cohortSpec;
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
  /** @param DateRange[] */
  public function setDateRanges($dateRanges)
  {
    $this->dateRanges = $dateRanges;
  }
  /** @return DateRange[] */
  public function getDateRanges()
  {
    return $this->dateRanges;
  }
  /** @param FilterExpression */
  public function setDimensionFilter(FilterExpression $dimensionFilter)
  {
    $this->dimensionFilter = $dimensionFilter;
  }
  /** @return FilterExpression */
  public function getDimensionFilter()
  {
    return $this->dimensionFilter;
  }
  /** @param Dimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param bool */
  public function setKeepEmptyRows($keepEmptyRows)
  {
    $this->keepEmptyRows = $keepEmptyRows;
  }
  /** @return bool */
  public function getKeepEmptyRows()
  {
    return $this->keepEmptyRows;
  }
  /** @param FilterExpression */
  public function setMetricFilter(FilterExpression $metricFilter)
  {
    $this->metricFilter = $metricFilter;
  }
  /** @return FilterExpression */
  public function getMetricFilter()
  {
    return $this->metricFilter;
  }
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param Pivot[] */
  public function setPivots($pivots)
  {
    $this->pivots = $pivots;
  }
  /** @return Pivot[] */
  public function getPivots()
  {
    return $this->pivots;
  }
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
  /** @param bool */
  public function setReturnPropertyQuota($returnPropertyQuota)
  {
    $this->returnPropertyQuota = $returnPropertyQuota;
  }
  /** @return bool */
  public function getReturnPropertyQuota()
  {
    return $this->returnPropertyQuota;
  }
}

class RunPivotReportResponse extends \Google\Collection
{
  /** @var Row[] */
  public $aggregates;
  /** @var DimensionHeader[] */
  public $dimensionHeaders;
  /** @var string */
  public $kind;
  /** @var ResponseMetaData */
  public $metadata;
  /** @var MetricHeader[] */
  public $metricHeaders;
  /** @var PivotHeader[] */
  public $pivotHeaders;
  /** @var PropertyQuota */
  public $propertyQuota;
  /** @var Row[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $aggregatesType = Row::class;
  protected $aggregatesDataType = 'array';
  protected $dimensionHeadersType = DimensionHeader::class;
  protected $dimensionHeadersDataType = 'array';
  protected $metadataType = ResponseMetaData::class;
  protected $metadataDataType = '';
  protected $metricHeadersType = MetricHeader::class;
  protected $metricHeadersDataType = 'array';
  protected $pivotHeadersType = PivotHeader::class;
  protected $pivotHeadersDataType = 'array';
  protected $propertyQuotaType = PropertyQuota::class;
  protected $propertyQuotaDataType = '';
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';
  /** @param Row[] */
  public function setAggregates($aggregates)
  {
    $this->aggregates = $aggregates;
  }
  /** @return Row[] */
  public function getAggregates()
  {
    return $this->aggregates;
  }
  /** @param DimensionHeader[] */
  public function setDimensionHeaders($dimensionHeaders)
  {
    $this->dimensionHeaders = $dimensionHeaders;
  }
  /** @return DimensionHeader[] */
  public function getDimensionHeaders()
  {
    return $this->dimensionHeaders;
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
  /** @param ResponseMetaData */
  public function setMetadata(ResponseMetaData $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ResponseMetaData */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param MetricHeader[] */
  public function setMetricHeaders($metricHeaders)
  {
    $this->metricHeaders = $metricHeaders;
  }
  /** @return MetricHeader[] */
  public function getMetricHeaders()
  {
    return $this->metricHeaders;
  }
  /** @param PivotHeader[] */
  public function setPivotHeaders($pivotHeaders)
  {
    $this->pivotHeaders = $pivotHeaders;
  }
  /** @return PivotHeader[] */
  public function getPivotHeaders()
  {
    return $this->pivotHeaders;
  }
  /** @param PropertyQuota */
  public function setPropertyQuota(PropertyQuota $propertyQuota)
  {
    $this->propertyQuota = $propertyQuota;
  }
  /** @return PropertyQuota */
  public function getPropertyQuota()
  {
    return $this->propertyQuota;
  }
  /** @param Row[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return Row[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class RunRealtimeReportRequest extends \Google\Collection
{
  /** @var FilterExpression */
  public $dimensionFilter;
  /** @var Dimension[] */
  public $dimensions;
  /** @var string */
  public $limit;
  /** @var string[] */
  public $metricAggregations;
  /** @var FilterExpression */
  public $metricFilter;
  /** @var Metric[] */
  public $metrics;
  /** @var MinuteRange[] */
  public $minuteRanges;
  /** @var OrderBy[] */
  public $orderBys;
  /** @var bool */
  public $returnPropertyQuota;
  protected $collection_key = 'orderBys';
  protected $dimensionFilterType = FilterExpression::class;
  protected $dimensionFilterDataType = '';
  protected $dimensionsType = Dimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricFilterType = FilterExpression::class;
  protected $metricFilterDataType = '';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $minuteRangesType = MinuteRange::class;
  protected $minuteRangesDataType = 'array';
  protected $orderBysType = OrderBy::class;
  protected $orderBysDataType = 'array';
  /** @param FilterExpression */
  public function setDimensionFilter(FilterExpression $dimensionFilter)
  {
    $this->dimensionFilter = $dimensionFilter;
  }
  /** @return FilterExpression */
  public function getDimensionFilter()
  {
    return $this->dimensionFilter;
  }
  /** @param Dimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
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
  /** @param string[] */
  public function setMetricAggregations($metricAggregations)
  {
    $this->metricAggregations = $metricAggregations;
  }
  /** @return string[] */
  public function getMetricAggregations()
  {
    return $this->metricAggregations;
  }
  /** @param FilterExpression */
  public function setMetricFilter(FilterExpression $metricFilter)
  {
    $this->metricFilter = $metricFilter;
  }
  /** @return FilterExpression */
  public function getMetricFilter()
  {
    return $this->metricFilter;
  }
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param MinuteRange[] */
  public function setMinuteRanges($minuteRanges)
  {
    $this->minuteRanges = $minuteRanges;
  }
  /** @return MinuteRange[] */
  public function getMinuteRanges()
  {
    return $this->minuteRanges;
  }
  /** @param OrderBy[] */
  public function setOrderBys($orderBys)
  {
    $this->orderBys = $orderBys;
  }
  /** @return OrderBy[] */
  public function getOrderBys()
  {
    return $this->orderBys;
  }
  /** @param bool */
  public function setReturnPropertyQuota($returnPropertyQuota)
  {
    $this->returnPropertyQuota = $returnPropertyQuota;
  }
  /** @return bool */
  public function getReturnPropertyQuota()
  {
    return $this->returnPropertyQuota;
  }
}

class RunRealtimeReportResponse extends \Google\Collection
{
  /** @var DimensionHeader[] */
  public $dimensionHeaders;
  /** @var string */
  public $kind;
  /** @var Row[] */
  public $maximums;
  /** @var MetricHeader[] */
  public $metricHeaders;
  /** @var Row[] */
  public $minimums;
  /** @var PropertyQuota */
  public $propertyQuota;
  /** @var int */
  public $rowCount;
  /** @var Row[] */
  public $rows;
  /** @var Row[] */
  public $totals;
  protected $collection_key = 'totals';
  protected $dimensionHeadersType = DimensionHeader::class;
  protected $dimensionHeadersDataType = 'array';
  protected $maximumsType = Row::class;
  protected $maximumsDataType = 'array';
  protected $metricHeadersType = MetricHeader::class;
  protected $metricHeadersDataType = 'array';
  protected $minimumsType = Row::class;
  protected $minimumsDataType = 'array';
  protected $propertyQuotaType = PropertyQuota::class;
  protected $propertyQuotaDataType = '';
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';
  protected $totalsType = Row::class;
  protected $totalsDataType = 'array';
  /** @param DimensionHeader[] */
  public function setDimensionHeaders($dimensionHeaders)
  {
    $this->dimensionHeaders = $dimensionHeaders;
  }
  /** @return DimensionHeader[] */
  public function getDimensionHeaders()
  {
    return $this->dimensionHeaders;
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
  /** @param Row[] */
  public function setMaximums($maximums)
  {
    $this->maximums = $maximums;
  }
  /** @return Row[] */
  public function getMaximums()
  {
    return $this->maximums;
  }
  /** @param MetricHeader[] */
  public function setMetricHeaders($metricHeaders)
  {
    $this->metricHeaders = $metricHeaders;
  }
  /** @return MetricHeader[] */
  public function getMetricHeaders()
  {
    return $this->metricHeaders;
  }
  /** @param Row[] */
  public function setMinimums($minimums)
  {
    $this->minimums = $minimums;
  }
  /** @return Row[] */
  public function getMinimums()
  {
    return $this->minimums;
  }
  /** @param PropertyQuota */
  public function setPropertyQuota(PropertyQuota $propertyQuota)
  {
    $this->propertyQuota = $propertyQuota;
  }
  /** @return PropertyQuota */
  public function getPropertyQuota()
  {
    return $this->propertyQuota;
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
  /** @param Row[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return Row[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param Row[] */
  public function setTotals($totals)
  {
    $this->totals = $totals;
  }
  /** @return Row[] */
  public function getTotals()
  {
    return $this->totals;
  }
}

class RunReportRequest extends \Google\Collection
{
  /** @var CohortSpec */
  public $cohortSpec;
  /** @var string */
  public $currencyCode;
  /** @var DateRange[] */
  public $dateRanges;
  /** @var FilterExpression */
  public $dimensionFilter;
  /** @var Dimension[] */
  public $dimensions;
  /** @var bool */
  public $keepEmptyRows;
  /** @var string */
  public $limit;
  /** @var string[] */
  public $metricAggregations;
  /** @var FilterExpression */
  public $metricFilter;
  /** @var Metric[] */
  public $metrics;
  /** @var string */
  public $offset;
  /** @var OrderBy[] */
  public $orderBys;
  /** @var string */
  public $property;
  /** @var bool */
  public $returnPropertyQuota;
  protected $collection_key = 'orderBys';
  protected $cohortSpecType = CohortSpec::class;
  protected $cohortSpecDataType = '';
  protected $dateRangesType = DateRange::class;
  protected $dateRangesDataType = 'array';
  protected $dimensionFilterType = FilterExpression::class;
  protected $dimensionFilterDataType = '';
  protected $dimensionsType = Dimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricFilterType = FilterExpression::class;
  protected $metricFilterDataType = '';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $orderBysType = OrderBy::class;
  protected $orderBysDataType = 'array';
  /** @param CohortSpec */
  public function setCohortSpec(CohortSpec $cohortSpec)
  {
    $this->cohortSpec = $cohortSpec;
  }
  /** @return CohortSpec */
  public function getCohortSpec()
  {
    return $this->cohortSpec;
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
  /** @param DateRange[] */
  public function setDateRanges($dateRanges)
  {
    $this->dateRanges = $dateRanges;
  }
  /** @return DateRange[] */
  public function getDateRanges()
  {
    return $this->dateRanges;
  }
  /** @param FilterExpression */
  public function setDimensionFilter(FilterExpression $dimensionFilter)
  {
    $this->dimensionFilter = $dimensionFilter;
  }
  /** @return FilterExpression */
  public function getDimensionFilter()
  {
    return $this->dimensionFilter;
  }
  /** @param Dimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param bool */
  public function setKeepEmptyRows($keepEmptyRows)
  {
    $this->keepEmptyRows = $keepEmptyRows;
  }
  /** @return bool */
  public function getKeepEmptyRows()
  {
    return $this->keepEmptyRows;
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
  /** @param string[] */
  public function setMetricAggregations($metricAggregations)
  {
    $this->metricAggregations = $metricAggregations;
  }
  /** @return string[] */
  public function getMetricAggregations()
  {
    return $this->metricAggregations;
  }
  /** @param FilterExpression */
  public function setMetricFilter(FilterExpression $metricFilter)
  {
    $this->metricFilter = $metricFilter;
  }
  /** @return FilterExpression */
  public function getMetricFilter()
  {
    return $this->metricFilter;
  }
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
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
  /** @param OrderBy[] */
  public function setOrderBys($orderBys)
  {
    $this->orderBys = $orderBys;
  }
  /** @return OrderBy[] */
  public function getOrderBys()
  {
    return $this->orderBys;
  }
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
  /** @param bool */
  public function setReturnPropertyQuota($returnPropertyQuota)
  {
    $this->returnPropertyQuota = $returnPropertyQuota;
  }
  /** @return bool */
  public function getReturnPropertyQuota()
  {
    return $this->returnPropertyQuota;
  }
}

class RunReportResponse extends \Google\Collection
{
  /** @var DimensionHeader[] */
  public $dimensionHeaders;
  /** @var string */
  public $kind;
  /** @var Row[] */
  public $maximums;
  /** @var ResponseMetaData */
  public $metadata;
  /** @var MetricHeader[] */
  public $metricHeaders;
  /** @var Row[] */
  public $minimums;
  /** @var PropertyQuota */
  public $propertyQuota;
  /** @var int */
  public $rowCount;
  /** @var Row[] */
  public $rows;
  /** @var Row[] */
  public $totals;
  protected $collection_key = 'totals';
  protected $dimensionHeadersType = DimensionHeader::class;
  protected $dimensionHeadersDataType = 'array';
  protected $maximumsType = Row::class;
  protected $maximumsDataType = 'array';
  protected $metadataType = ResponseMetaData::class;
  protected $metadataDataType = '';
  protected $metricHeadersType = MetricHeader::class;
  protected $metricHeadersDataType = 'array';
  protected $minimumsType = Row::class;
  protected $minimumsDataType = 'array';
  protected $propertyQuotaType = PropertyQuota::class;
  protected $propertyQuotaDataType = '';
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';
  protected $totalsType = Row::class;
  protected $totalsDataType = 'array';
  /** @param DimensionHeader[] */
  public function setDimensionHeaders($dimensionHeaders)
  {
    $this->dimensionHeaders = $dimensionHeaders;
  }
  /** @return DimensionHeader[] */
  public function getDimensionHeaders()
  {
    return $this->dimensionHeaders;
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
  /** @param Row[] */
  public function setMaximums($maximums)
  {
    $this->maximums = $maximums;
  }
  /** @return Row[] */
  public function getMaximums()
  {
    return $this->maximums;
  }
  /** @param ResponseMetaData */
  public function setMetadata(ResponseMetaData $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ResponseMetaData */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param MetricHeader[] */
  public function setMetricHeaders($metricHeaders)
  {
    $this->metricHeaders = $metricHeaders;
  }
  /** @return MetricHeader[] */
  public function getMetricHeaders()
  {
    return $this->metricHeaders;
  }
  /** @param Row[] */
  public function setMinimums($minimums)
  {
    $this->minimums = $minimums;
  }
  /** @return Row[] */
  public function getMinimums()
  {
    return $this->minimums;
  }
  /** @param PropertyQuota */
  public function setPropertyQuota(PropertyQuota $propertyQuota)
  {
    $this->propertyQuota = $propertyQuota;
  }
  /** @return PropertyQuota */
  public function getPropertyQuota()
  {
    return $this->propertyQuota;
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
  /** @param Row[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return Row[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param Row[] */
  public function setTotals($totals)
  {
    $this->totals = $totals;
  }
  /** @return Row[] */
  public function getTotals()
  {
    return $this->totals;
  }
}

class SchemaRestrictionResponse extends \Google\Collection
{
  /** @var ActiveMetricRestriction[] */
  public $activeMetricRestrictions;
  protected $collection_key = 'activeMetricRestrictions';
  protected $activeMetricRestrictionsType = ActiveMetricRestriction::class;
  protected $activeMetricRestrictionsDataType = 'array';
  /** @param ActiveMetricRestriction[] */
  public function setActiveMetricRestrictions($activeMetricRestrictions)
  {
    $this->activeMetricRestrictions = $activeMetricRestrictions;
  }
  /** @return ActiveMetricRestriction[] */
  public function getActiveMetricRestrictions()
  {
    return $this->activeMetricRestrictions;
  }
}

class StringFilter extends \Google\Model
{
  /** @var bool */
  public $caseSensitive;
  /** @var string */
  public $matchType;
  /** @var string */
  public $value;

  /** @param bool */
  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }
  /** @return bool */
  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }
  /** @param string */
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /** @return string */
  public function getMatchType()
  {
    return $this->matchType;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActiveMetricRestriction::class, 'Google_Service_AnalyticsData_ActiveMetricRestriction');
class_alias(BatchRunPivotReportsRequest::class, 'Google_Service_AnalyticsData_BatchRunPivotReportsRequest');
class_alias(BatchRunPivotReportsResponse::class, 'Google_Service_AnalyticsData_BatchRunPivotReportsResponse');
class_alias(BatchRunReportsRequest::class, 'Google_Service_AnalyticsData_BatchRunReportsRequest');
class_alias(BatchRunReportsResponse::class, 'Google_Service_AnalyticsData_BatchRunReportsResponse');
class_alias(BetweenFilter::class, 'Google_Service_AnalyticsData_BetweenFilter');
class_alias(CaseExpression::class, 'Google_Service_AnalyticsData_CaseExpression');
class_alias(CheckCompatibilityRequest::class, 'Google_Service_AnalyticsData_CheckCompatibilityRequest');
class_alias(CheckCompatibilityResponse::class, 'Google_Service_AnalyticsData_CheckCompatibilityResponse');
class_alias(Cohort::class, 'Google_Service_AnalyticsData_Cohort');
class_alias(CohortReportSettings::class, 'Google_Service_AnalyticsData_CohortReportSettings');
class_alias(CohortSpec::class, 'Google_Service_AnalyticsData_CohortSpec');
class_alias(CohortsRange::class, 'Google_Service_AnalyticsData_CohortsRange');
class_alias(ConcatenateExpression::class, 'Google_Service_AnalyticsData_ConcatenateExpression');
class_alias(DateRange::class, 'Google_Service_AnalyticsData_DateRange');
class_alias(Dimension::class, 'Google_Service_AnalyticsData_Dimension');
class_alias(DimensionCompatibility::class, 'Google_Service_AnalyticsData_DimensionCompatibility');
class_alias(DimensionExpression::class, 'Google_Service_AnalyticsData_DimensionExpression');
class_alias(DimensionHeader::class, 'Google_Service_AnalyticsData_DimensionHeader');
class_alias(DimensionMetadata::class, 'Google_Service_AnalyticsData_DimensionMetadata');
class_alias(DimensionOrderBy::class, 'Google_Service_AnalyticsData_DimensionOrderBy');
class_alias(DimensionValue::class, 'Google_Service_AnalyticsData_DimensionValue');
class_alias(Filter::class, 'Google_Service_AnalyticsData_Filter');
class_alias(FilterExpression::class, 'Google_Service_AnalyticsData_FilterExpression');
class_alias(FilterExpressionList::class, 'Google_Service_AnalyticsData_FilterExpressionList');
class_alias(InListFilter::class, 'Google_Service_AnalyticsData_InListFilter');
class_alias(Metadata::class, 'Google_Service_AnalyticsData_Metadata');
class_alias(Metric::class, 'Google_Service_AnalyticsData_Metric');
class_alias(MetricCompatibility::class, 'Google_Service_AnalyticsData_MetricCompatibility');
class_alias(MetricHeader::class, 'Google_Service_AnalyticsData_MetricHeader');
class_alias(MetricMetadata::class, 'Google_Service_AnalyticsData_MetricMetadata');
class_alias(MetricOrderBy::class, 'Google_Service_AnalyticsData_MetricOrderBy');
class_alias(MetricValue::class, 'Google_Service_AnalyticsData_MetricValue');
class_alias(MinuteRange::class, 'Google_Service_AnalyticsData_MinuteRange');
class_alias(NumericFilter::class, 'Google_Service_AnalyticsData_NumericFilter');
class_alias(NumericValue::class, 'Google_Service_AnalyticsData_NumericValue');
class_alias(OrderBy::class, 'Google_Service_AnalyticsData_OrderBy');
class_alias(Pivot::class, 'Google_Service_AnalyticsData_Pivot');
class_alias(PivotDimensionHeader::class, 'Google_Service_AnalyticsData_PivotDimensionHeader');
class_alias(PivotHeader::class, 'Google_Service_AnalyticsData_PivotHeader');
class_alias(PivotOrderBy::class, 'Google_Service_AnalyticsData_PivotOrderBy');
class_alias(PivotSelection::class, 'Google_Service_AnalyticsData_PivotSelection');
class_alias(PropertyQuota::class, 'Google_Service_AnalyticsData_PropertyQuota');
class_alias(QuotaStatus::class, 'Google_Service_AnalyticsData_QuotaStatus');
class_alias(ResponseMetaData::class, 'Google_Service_AnalyticsData_ResponseMetaData');
class_alias(Row::class, 'Google_Service_AnalyticsData_Row');
class_alias(RunPivotReportRequest::class, 'Google_Service_AnalyticsData_RunPivotReportRequest');
class_alias(RunPivotReportResponse::class, 'Google_Service_AnalyticsData_RunPivotReportResponse');
class_alias(RunRealtimeReportRequest::class, 'Google_Service_AnalyticsData_RunRealtimeReportRequest');
class_alias(RunRealtimeReportResponse::class, 'Google_Service_AnalyticsData_RunRealtimeReportResponse');
class_alias(RunReportRequest::class, 'Google_Service_AnalyticsData_RunReportRequest');
class_alias(RunReportResponse::class, 'Google_Service_AnalyticsData_RunReportResponse');
class_alias(SchemaRestrictionResponse::class, 'Google_Service_AnalyticsData_SchemaRestrictionResponse');
class_alias(StringFilter::class, 'Google_Service_AnalyticsData_StringFilter');
