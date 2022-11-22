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

namespace Google\Service\AnalyticsReporting;

class Activity extends \Google\Collection
{
  /** @var string */
  public $activityTime;
  /** @var string */
  public $activityType;
  /** @var ScreenviewData */
  public $appview;
  /** @var string */
  public $campaign;
  /** @var string */
  public $channelGrouping;
  /** @var CustomDimension[] */
  public $customDimension;
  /** @var EcommerceData */
  public $ecommerce;
  /** @var EventData */
  public $event;
  /** @var GoalSetData */
  public $goals;
  /** @var string */
  public $hostname;
  /** @var string */
  public $keyword;
  /** @var string */
  public $landingPagePath;
  /** @var string */
  public $medium;
  /** @var PageviewData */
  public $pageview;
  /** @var string */
  public $source;
  protected $collection_key = 'customDimension';
  protected $appviewType = ScreenviewData::class;
  protected $appviewDataType = '';
  protected $customDimensionType = CustomDimension::class;
  protected $customDimensionDataType = 'array';
  protected $ecommerceType = EcommerceData::class;
  protected $ecommerceDataType = '';
  protected $eventType = EventData::class;
  protected $eventDataType = '';
  protected $goalsType = GoalSetData::class;
  protected $goalsDataType = '';
  protected $pageviewType = PageviewData::class;
  protected $pageviewDataType = '';
  /** @param string */
  public function setActivityTime($activityTime)
  {
    $this->activityTime = $activityTime;
  }
  /** @return string */
  public function getActivityTime()
  {
    return $this->activityTime;
  }
  /** @param string */
  public function setActivityType($activityType)
  {
    $this->activityType = $activityType;
  }
  /** @return string */
  public function getActivityType()
  {
    return $this->activityType;
  }
  /** @param ScreenviewData */
  public function setAppview(ScreenviewData $appview)
  {
    $this->appview = $appview;
  }
  /** @return ScreenviewData */
  public function getAppview()
  {
    return $this->appview;
  }
  /** @param string */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /** @return string */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /** @param string */
  public function setChannelGrouping($channelGrouping)
  {
    $this->channelGrouping = $channelGrouping;
  }
  /** @return string */
  public function getChannelGrouping()
  {
    return $this->channelGrouping;
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
  /** @param EcommerceData */
  public function setEcommerce(EcommerceData $ecommerce)
  {
    $this->ecommerce = $ecommerce;
  }
  /** @return EcommerceData */
  public function getEcommerce()
  {
    return $this->ecommerce;
  }
  /** @param EventData */
  public function setEvent(EventData $event)
  {
    $this->event = $event;
  }
  /** @return EventData */
  public function getEvent()
  {
    return $this->event;
  }
  /** @param GoalSetData */
  public function setGoals(GoalSetData $goals)
  {
    $this->goals = $goals;
  }
  /** @return GoalSetData */
  public function getGoals()
  {
    return $this->goals;
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
  /** @param string */
  public function setKeyword($keyword)
  {
    $this->keyword = $keyword;
  }
  /** @return string */
  public function getKeyword()
  {
    return $this->keyword;
  }
  /** @param string */
  public function setLandingPagePath($landingPagePath)
  {
    $this->landingPagePath = $landingPagePath;
  }
  /** @return string */
  public function getLandingPagePath()
  {
    return $this->landingPagePath;
  }
  /** @param string */
  public function setMedium($medium)
  {
    $this->medium = $medium;
  }
  /** @return string */
  public function getMedium()
  {
    return $this->medium;
  }
  /** @param PageviewData */
  public function setPageview(PageviewData $pageview)
  {
    $this->pageview = $pageview;
  }
  /** @return PageviewData */
  public function getPageview()
  {
    return $this->pageview;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
}

class Cohort extends \Google\Model
{
  /** @var DateRange */
  public $dateRange;
  /** @var string */
  public $name;
  /** @var string */
  public $type;
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

class CohortGroup extends \Google\Collection
{
  /** @var Cohort[] */
  public $cohorts;
  /** @var bool */
  public $lifetimeValue;
  protected $collection_key = 'cohorts';
  protected $cohortsType = Cohort::class;
  protected $cohortsDataType = 'array';
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
  /** @param bool */
  public function setLifetimeValue($lifetimeValue)
  {
    $this->lifetimeValue = $lifetimeValue;
  }
  /** @return bool */
  public function getLifetimeValue()
  {
    return $this->lifetimeValue;
  }
}

class ColumnHeader extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var MetricHeader */
  public $metricHeader;
  protected $collection_key = 'dimensions';
  protected $metricHeaderType = MetricHeader::class;
  protected $metricHeaderDataType = '';
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
  /** @param MetricHeader */
  public function setMetricHeader(MetricHeader $metricHeader)
  {
    $this->metricHeader = $metricHeader;
  }
  /** @return MetricHeader */
  public function getMetricHeader()
  {
    return $this->metricHeader;
  }
}

class CustomDimension extends \Google\Model
{
  /** @var int */
  public $index;
  /** @var string */
  public $value;

  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
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

class DateRange extends \Google\Model
{
  /** @var string */
  public $endDate;
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

class DateRangeValues extends \Google\Collection
{
  /** @var PivotValueRegion[] */
  public $pivotValueRegions;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  protected $pivotValueRegionsType = PivotValueRegion::class;
  protected $pivotValueRegionsDataType = 'array';
  /** @param PivotValueRegion[] */
  public function setPivotValueRegions($pivotValueRegions)
  {
    $this->pivotValueRegions = $pivotValueRegions;
  }
  /** @return PivotValueRegion[] */
  public function getPivotValueRegions()
  {
    return $this->pivotValueRegions;
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

class Dimension extends \Google\Collection
{
  /** @var string[] */
  public $histogramBuckets;
  /** @var string */
  public $name;
  protected $collection_key = 'histogramBuckets';
  /** @param string[] */
  public function setHistogramBuckets($histogramBuckets)
  {
    $this->histogramBuckets = $histogramBuckets;
  }
  /** @return string[] */
  public function getHistogramBuckets()
  {
    return $this->histogramBuckets;
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

class DimensionFilter extends \Google\Collection
{
  /** @var bool */
  public $caseSensitive;
  /** @var string */
  public $dimensionName;
  /** @var string[] */
  public $expressions;
  /** @var bool */
  public $not;
  /** @var string */
  public $operator;
  protected $collection_key = 'expressions';
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
  public function setDimensionName($dimensionName)
  {
    $this->dimensionName = $dimensionName;
  }
  /** @return string */
  public function getDimensionName()
  {
    return $this->dimensionName;
  }
  /** @param string[] */
  public function setExpressions($expressions)
  {
    $this->expressions = $expressions;
  }
  /** @return string[] */
  public function getExpressions()
  {
    return $this->expressions;
  }
  /** @param bool */
  public function setNot($not)
  {
    $this->not = $not;
  }
  /** @return bool */
  public function getNot()
  {
    return $this->not;
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
}

class DimensionFilterClause extends \Google\Collection
{
  /** @var DimensionFilter[] */
  public $filters;
  /** @var string */
  public $operator;
  protected $collection_key = 'filters';
  protected $filtersType = DimensionFilter::class;
  protected $filtersDataType = 'array';
  /** @param DimensionFilter[] */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return DimensionFilter[] */
  public function getFilters()
  {
    return $this->filters;
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
}

class DynamicSegment extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var SegmentDefinition */
  public $sessionSegment;
  /** @var SegmentDefinition */
  public $userSegment;
  protected $sessionSegmentType = SegmentDefinition::class;
  protected $sessionSegmentDataType = '';
  protected $userSegmentType = SegmentDefinition::class;
  protected $userSegmentDataType = '';
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
  /** @param SegmentDefinition */
  public function setSessionSegment(SegmentDefinition $sessionSegment)
  {
    $this->sessionSegment = $sessionSegment;
  }
  /** @return SegmentDefinition */
  public function getSessionSegment()
  {
    return $this->sessionSegment;
  }
  /** @param SegmentDefinition */
  public function setUserSegment(SegmentDefinition $userSegment)
  {
    $this->userSegment = $userSegment;
  }
  /** @return SegmentDefinition */
  public function getUserSegment()
  {
    return $this->userSegment;
  }
}

class EcommerceData extends \Google\Collection
{
  /** @var string */
  public $actionType;
  /** @var string */
  public $ecommerceType;
  /** @var ProductData[] */
  public $products;
  /** @var TransactionData */
  public $transaction;
  protected $collection_key = 'products';
  protected $productsType = ProductData::class;
  protected $productsDataType = 'array';
  protected $transactionType = TransactionData::class;
  protected $transactionDataType = '';
  /** @param string */
  public function setActionType($actionType)
  {
    $this->actionType = $actionType;
  }
  /** @return string */
  public function getActionType()
  {
    return $this->actionType;
  }
  /** @param string */
  public function setEcommerceType($ecommerceType)
  {
    $this->ecommerceType = $ecommerceType;
  }
  /** @return string */
  public function getEcommerceType()
  {
    return $this->ecommerceType;
  }
  /** @param ProductData[] */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /** @return ProductData[] */
  public function getProducts()
  {
    return $this->products;
  }
  /** @param TransactionData */
  public function setTransaction(TransactionData $transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return TransactionData */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class EventData extends \Google\Model
{
  /** @var string */
  public $eventAction;
  /** @var string */
  public $eventCategory;
  /** @var string */
  public $eventCount;
  /** @var string */
  public $eventLabel;
  /** @var string */
  public $eventValue;

  /** @param string */
  public function setEventAction($eventAction)
  {
    $this->eventAction = $eventAction;
  }
  /** @return string */
  public function getEventAction()
  {
    return $this->eventAction;
  }
  /** @param string */
  public function setEventCategory($eventCategory)
  {
    $this->eventCategory = $eventCategory;
  }
  /** @return string */
  public function getEventCategory()
  {
    return $this->eventCategory;
  }
  /** @param string */
  public function setEventCount($eventCount)
  {
    $this->eventCount = $eventCount;
  }
  /** @return string */
  public function getEventCount()
  {
    return $this->eventCount;
  }
  /** @param string */
  public function setEventLabel($eventLabel)
  {
    $this->eventLabel = $eventLabel;
  }
  /** @return string */
  public function getEventLabel()
  {
    return $this->eventLabel;
  }
  /** @param string */
  public function setEventValue($eventValue)
  {
    $this->eventValue = $eventValue;
  }
  /** @return string */
  public function getEventValue()
  {
    return $this->eventValue;
  }
}

class GetReportsRequest extends \Google\Collection
{
  /** @var ReportRequest[] */
  public $reportRequests;
  /** @var bool */
  public $useResourceQuotas;
  protected $collection_key = 'reportRequests';
  protected $reportRequestsType = ReportRequest::class;
  protected $reportRequestsDataType = 'array';
  /** @param ReportRequest[] */
  public function setReportRequests($reportRequests)
  {
    $this->reportRequests = $reportRequests;
  }
  /** @return ReportRequest[] */
  public function getReportRequests()
  {
    return $this->reportRequests;
  }
  /** @param bool */
  public function setUseResourceQuotas($useResourceQuotas)
  {
    $this->useResourceQuotas = $useResourceQuotas;
  }
  /** @return bool */
  public function getUseResourceQuotas()
  {
    return $this->useResourceQuotas;
  }
}

class GetReportsResponse extends \Google\Collection
{
  /** @var int */
  public $queryCost;
  /** @var Report[] */
  public $reports;
  /** @var ResourceQuotasRemaining */
  public $resourceQuotasRemaining;
  protected $collection_key = 'reports';
  protected $reportsType = Report::class;
  protected $reportsDataType = 'array';
  protected $resourceQuotasRemainingType = ResourceQuotasRemaining::class;
  protected $resourceQuotasRemainingDataType = '';
  /** @param int */
  public function setQueryCost($queryCost)
  {
    $this->queryCost = $queryCost;
  }
  /** @return int */
  public function getQueryCost()
  {
    return $this->queryCost;
  }
  /** @param Report[] */
  public function setReports($reports)
  {
    $this->reports = $reports;
  }
  /** @return Report[] */
  public function getReports()
  {
    return $this->reports;
  }
  /** @param ResourceQuotasRemaining */
  public function setResourceQuotasRemaining(ResourceQuotasRemaining $resourceQuotasRemaining)
  {
    $this->resourceQuotasRemaining = $resourceQuotasRemaining;
  }
  /** @return ResourceQuotasRemaining */
  public function getResourceQuotasRemaining()
  {
    return $this->resourceQuotasRemaining;
  }
}

class GoalData extends \Google\Model
{
  /** @var string */
  public $goalCompletionLocation;
  /** @var string */
  public $goalCompletions;
  /** @var int */
  public $goalIndex;
  /** @var string */
  public $goalName;
  /** @var string */
  public $goalPreviousStep1;
  /** @var string */
  public $goalPreviousStep2;
  /** @var string */
  public $goalPreviousStep3;
  public $goalValue;

  /** @param string */
  public function setGoalCompletionLocation($goalCompletionLocation)
  {
    $this->goalCompletionLocation = $goalCompletionLocation;
  }
  /** @return string */
  public function getGoalCompletionLocation()
  {
    return $this->goalCompletionLocation;
  }
  /** @param string */
  public function setGoalCompletions($goalCompletions)
  {
    $this->goalCompletions = $goalCompletions;
  }
  /** @return string */
  public function getGoalCompletions()
  {
    return $this->goalCompletions;
  }
  /** @param int */
  public function setGoalIndex($goalIndex)
  {
    $this->goalIndex = $goalIndex;
  }
  /** @return int */
  public function getGoalIndex()
  {
    return $this->goalIndex;
  }
  /** @param string */
  public function setGoalName($goalName)
  {
    $this->goalName = $goalName;
  }
  /** @return string */
  public function getGoalName()
  {
    return $this->goalName;
  }
  /** @param string */
  public function setGoalPreviousStep1($goalPreviousStep1)
  {
    $this->goalPreviousStep1 = $goalPreviousStep1;
  }
  /** @return string */
  public function getGoalPreviousStep1()
  {
    return $this->goalPreviousStep1;
  }
  /** @param string */
  public function setGoalPreviousStep2($goalPreviousStep2)
  {
    $this->goalPreviousStep2 = $goalPreviousStep2;
  }
  /** @return string */
  public function getGoalPreviousStep2()
  {
    return $this->goalPreviousStep2;
  }
  /** @param string */
  public function setGoalPreviousStep3($goalPreviousStep3)
  {
    $this->goalPreviousStep3 = $goalPreviousStep3;
  }
  /** @return string */
  public function getGoalPreviousStep3()
  {
    return $this->goalPreviousStep3;
  }
  public function setGoalValue($goalValue)
  {
    $this->goalValue = $goalValue;
  }
  public function getGoalValue()
  {
    return $this->goalValue;
  }
}

class GoalSetData extends \Google\Collection
{
  /** @var GoalData[] */
  public $goals;
  protected $collection_key = 'goals';
  protected $goalsType = GoalData::class;
  protected $goalsDataType = 'array';
  /** @param GoalData[] */
  public function setGoals($goals)
  {
    $this->goals = $goals;
  }
  /** @return GoalData[] */
  public function getGoals()
  {
    return $this->goals;
  }
}

class Metric extends \Google\Model
{
  /** @var string */
  public $alias;
  /** @var string */
  public $expression;
  /** @var string */
  public $formattingType;

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
  public function setFormattingType($formattingType)
  {
    $this->formattingType = $formattingType;
  }
  /** @return string */
  public function getFormattingType()
  {
    return $this->formattingType;
  }
}

class MetricFilter extends \Google\Model
{
  /** @var string */
  public $comparisonValue;
  /** @var string */
  public $metricName;
  /** @var bool */
  public $not;
  /** @var string */
  public $operator;

  /** @param string */
  public function setComparisonValue($comparisonValue)
  {
    $this->comparisonValue = $comparisonValue;
  }
  /** @return string */
  public function getComparisonValue()
  {
    return $this->comparisonValue;
  }
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
  /** @param bool */
  public function setNot($not)
  {
    $this->not = $not;
  }
  /** @return bool */
  public function getNot()
  {
    return $this->not;
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
}

class MetricFilterClause extends \Google\Collection
{
  /** @var MetricFilter[] */
  public $filters;
  /** @var string */
  public $operator;
  protected $collection_key = 'filters';
  protected $filtersType = MetricFilter::class;
  protected $filtersDataType = 'array';
  /** @param MetricFilter[] */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return MetricFilter[] */
  public function getFilters()
  {
    return $this->filters;
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
}

class MetricHeader extends \Google\Collection
{
  /** @var MetricHeaderEntry[] */
  public $metricHeaderEntries;
  /** @var PivotHeader[] */
  public $pivotHeaders;
  protected $collection_key = 'pivotHeaders';
  protected $metricHeaderEntriesType = MetricHeaderEntry::class;
  protected $metricHeaderEntriesDataType = 'array';
  protected $pivotHeadersType = PivotHeader::class;
  protected $pivotHeadersDataType = 'array';
  /** @param MetricHeaderEntry[] */
  public function setMetricHeaderEntries($metricHeaderEntries)
  {
    $this->metricHeaderEntries = $metricHeaderEntries;
  }
  /** @return MetricHeaderEntry[] */
  public function getMetricHeaderEntries()
  {
    return $this->metricHeaderEntries;
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
}

class MetricHeaderEntry extends \Google\Model
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

class OrFiltersForSegment extends \Google\Collection
{
  /** @var SegmentFilterClause[] */
  public $segmentFilterClauses;
  protected $collection_key = 'segmentFilterClauses';
  protected $segmentFilterClausesType = SegmentFilterClause::class;
  protected $segmentFilterClausesDataType = 'array';
  /** @param SegmentFilterClause[] */
  public function setSegmentFilterClauses($segmentFilterClauses)
  {
    $this->segmentFilterClauses = $segmentFilterClauses;
  }
  /** @return SegmentFilterClause[] */
  public function getSegmentFilterClauses()
  {
    return $this->segmentFilterClauses;
  }
}

class OrderBy extends \Google\Model
{
  /** @var string */
  public $fieldName;
  /** @var string */
  public $orderType;
  /** @var string */
  public $sortOrder;

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

class PageviewData extends \Google\Model
{
  /** @var string */
  public $pagePath;
  /** @var string */
  public $pageTitle;

  /** @param string */
  public function setPagePath($pagePath)
  {
    $this->pagePath = $pagePath;
  }
  /** @return string */
  public function getPagePath()
  {
    return $this->pagePath;
  }
  /** @param string */
  public function setPageTitle($pageTitle)
  {
    $this->pageTitle = $pageTitle;
  }
  /** @return string */
  public function getPageTitle()
  {
    return $this->pageTitle;
  }
}

class Pivot extends \Google\Collection
{
  /** @var DimensionFilterClause[] */
  public $dimensionFilterClauses;
  /** @var Dimension[] */
  public $dimensions;
  /** @var int */
  public $maxGroupCount;
  /** @var Metric[] */
  public $metrics;
  /** @var int */
  public $startGroup;
  protected $collection_key = 'metrics';
  protected $dimensionFilterClausesType = DimensionFilterClause::class;
  protected $dimensionFilterClausesDataType = 'array';
  protected $dimensionsType = Dimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  /** @param DimensionFilterClause[] */
  public function setDimensionFilterClauses($dimensionFilterClauses)
  {
    $this->dimensionFilterClauses = $dimensionFilterClauses;
  }
  /** @return DimensionFilterClause[] */
  public function getDimensionFilterClauses()
  {
    return $this->dimensionFilterClauses;
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
  /** @param int */
  public function setMaxGroupCount($maxGroupCount)
  {
    $this->maxGroupCount = $maxGroupCount;
  }
  /** @return int */
  public function getMaxGroupCount()
  {
    return $this->maxGroupCount;
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
  /** @param int */
  public function setStartGroup($startGroup)
  {
    $this->startGroup = $startGroup;
  }
  /** @return int */
  public function getStartGroup()
  {
    return $this->startGroup;
  }
}

class PivotHeader extends \Google\Collection
{
  /** @var PivotHeaderEntry[] */
  public $pivotHeaderEntries;
  /** @var int */
  public $totalPivotGroupsCount;
  protected $collection_key = 'pivotHeaderEntries';
  protected $pivotHeaderEntriesType = PivotHeaderEntry::class;
  protected $pivotHeaderEntriesDataType = 'array';
  /** @param PivotHeaderEntry[] */
  public function setPivotHeaderEntries($pivotHeaderEntries)
  {
    $this->pivotHeaderEntries = $pivotHeaderEntries;
  }
  /** @return PivotHeaderEntry[] */
  public function getPivotHeaderEntries()
  {
    return $this->pivotHeaderEntries;
  }
  /** @param int */
  public function setTotalPivotGroupsCount($totalPivotGroupsCount)
  {
    $this->totalPivotGroupsCount = $totalPivotGroupsCount;
  }
  /** @return int */
  public function getTotalPivotGroupsCount()
  {
    return $this->totalPivotGroupsCount;
  }
}

class PivotHeaderEntry extends \Google\Collection
{
  /** @var string[] */
  public $dimensionNames;
  /** @var string[] */
  public $dimensionValues;
  /** @var MetricHeaderEntry */
  public $metric;
  protected $collection_key = 'dimensionValues';
  protected $metricType = MetricHeaderEntry::class;
  protected $metricDataType = '';
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
  /** @param string[] */
  public function setDimensionValues($dimensionValues)
  {
    $this->dimensionValues = $dimensionValues;
  }
  /** @return string[] */
  public function getDimensionValues()
  {
    return $this->dimensionValues;
  }
  /** @param MetricHeaderEntry */
  public function setMetric(MetricHeaderEntry $metric)
  {
    $this->metric = $metric;
  }
  /** @return MetricHeaderEntry */
  public function getMetric()
  {
    return $this->metric;
  }
}

class PivotValueRegion extends \Google\Collection
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

class ProductData extends \Google\Model
{
  public $itemRevenue;
  /** @var string */
  public $productName;
  /** @var string */
  public $productQuantity;
  /** @var string */
  public $productSku;

  public function setItemRevenue($itemRevenue)
  {
    $this->itemRevenue = $itemRevenue;
  }
  public function getItemRevenue()
  {
    return $this->itemRevenue;
  }
  /** @param string */
  public function setProductName($productName)
  {
    $this->productName = $productName;
  }
  /** @return string */
  public function getProductName()
  {
    return $this->productName;
  }
  /** @param string */
  public function setProductQuantity($productQuantity)
  {
    $this->productQuantity = $productQuantity;
  }
  /** @return string */
  public function getProductQuantity()
  {
    return $this->productQuantity;
  }
  /** @param string */
  public function setProductSku($productSku)
  {
    $this->productSku = $productSku;
  }
  /** @return string */
  public function getProductSku()
  {
    return $this->productSku;
  }
}

class Report extends \Google\Model
{
  /** @var ColumnHeader */
  public $columnHeader;
  /** @var ReportData */
  public $data;
  /** @var string */
  public $nextPageToken;
  protected $columnHeaderType = ColumnHeader::class;
  protected $columnHeaderDataType = '';
  protected $dataType = ReportData::class;
  protected $dataDataType = '';
  /** @param ColumnHeader */
  public function setColumnHeader(ColumnHeader $columnHeader)
  {
    $this->columnHeader = $columnHeader;
  }
  /** @return ColumnHeader */
  public function getColumnHeader()
  {
    return $this->columnHeader;
  }
  /** @param ReportData */
  public function setData(ReportData $data)
  {
    $this->data = $data;
  }
  /** @return ReportData */
  public function getData()
  {
    return $this->data;
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

class ReportData extends \Google\Collection
{
  /** @var string */
  public $dataLastRefreshed;
  /** @var string */
  public $emptyReason;
  /** @var bool */
  public $isDataGolden;
  /** @var DateRangeValues[] */
  public $maximums;
  /** @var DateRangeValues[] */
  public $minimums;
  /** @var int */
  public $rowCount;
  /** @var ReportRow[] */
  public $rows;
  /** @var string[] */
  public $samplesReadCounts;
  /** @var string[] */
  public $samplingSpaceSizes;
  /** @var DateRangeValues[] */
  public $totals;
  protected $collection_key = 'totals';
  protected $maximumsType = DateRangeValues::class;
  protected $maximumsDataType = 'array';
  protected $minimumsType = DateRangeValues::class;
  protected $minimumsDataType = 'array';
  protected $rowsType = ReportRow::class;
  protected $rowsDataType = 'array';
  protected $totalsType = DateRangeValues::class;
  protected $totalsDataType = 'array';
  /** @param string */
  public function setDataLastRefreshed($dataLastRefreshed)
  {
    $this->dataLastRefreshed = $dataLastRefreshed;
  }
  /** @return string */
  public function getDataLastRefreshed()
  {
    return $this->dataLastRefreshed;
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
  /** @param bool */
  public function setIsDataGolden($isDataGolden)
  {
    $this->isDataGolden = $isDataGolden;
  }
  /** @return bool */
  public function getIsDataGolden()
  {
    return $this->isDataGolden;
  }
  /** @param DateRangeValues[] */
  public function setMaximums($maximums)
  {
    $this->maximums = $maximums;
  }
  /** @return DateRangeValues[] */
  public function getMaximums()
  {
    return $this->maximums;
  }
  /** @param DateRangeValues[] */
  public function setMinimums($minimums)
  {
    $this->minimums = $minimums;
  }
  /** @return DateRangeValues[] */
  public function getMinimums()
  {
    return $this->minimums;
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
  /** @param ReportRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return ReportRow[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param string[] */
  public function setSamplesReadCounts($samplesReadCounts)
  {
    $this->samplesReadCounts = $samplesReadCounts;
  }
  /** @return string[] */
  public function getSamplesReadCounts()
  {
    return $this->samplesReadCounts;
  }
  /** @param string[] */
  public function setSamplingSpaceSizes($samplingSpaceSizes)
  {
    $this->samplingSpaceSizes = $samplingSpaceSizes;
  }
  /** @return string[] */
  public function getSamplingSpaceSizes()
  {
    return $this->samplingSpaceSizes;
  }
  /** @param DateRangeValues[] */
  public function setTotals($totals)
  {
    $this->totals = $totals;
  }
  /** @return DateRangeValues[] */
  public function getTotals()
  {
    return $this->totals;
  }
}

class ReportRequest extends \Google\Collection
{
  /** @var CohortGroup */
  public $cohortGroup;
  /** @var DateRange[] */
  public $dateRanges;
  /** @var DimensionFilterClause[] */
  public $dimensionFilterClauses;
  /** @var Dimension[] */
  public $dimensions;
  /** @var string */
  public $filtersExpression;
  /** @var bool */
  public $hideTotals;
  /** @var bool */
  public $hideValueRanges;
  /** @var bool */
  public $includeEmptyRows;
  /** @var MetricFilterClause[] */
  public $metricFilterClauses;
  /** @var Metric[] */
  public $metrics;
  /** @var OrderBy[] */
  public $orderBys;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var Pivot[] */
  public $pivots;
  /** @var string */
  public $samplingLevel;
  /** @var Segment[] */
  public $segments;
  /** @var string */
  public $viewId;
  protected $collection_key = 'segments';
  protected $cohortGroupType = CohortGroup::class;
  protected $cohortGroupDataType = '';
  protected $dateRangesType = DateRange::class;
  protected $dateRangesDataType = 'array';
  protected $dimensionFilterClausesType = DimensionFilterClause::class;
  protected $dimensionFilterClausesDataType = 'array';
  protected $dimensionsType = Dimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricFilterClausesType = MetricFilterClause::class;
  protected $metricFilterClausesDataType = 'array';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $orderBysType = OrderBy::class;
  protected $orderBysDataType = 'array';
  protected $pivotsType = Pivot::class;
  protected $pivotsDataType = 'array';
  protected $segmentsType = Segment::class;
  protected $segmentsDataType = 'array';
  /** @param CohortGroup */
  public function setCohortGroup(CohortGroup $cohortGroup)
  {
    $this->cohortGroup = $cohortGroup;
  }
  /** @return CohortGroup */
  public function getCohortGroup()
  {
    return $this->cohortGroup;
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
  /** @param DimensionFilterClause[] */
  public function setDimensionFilterClauses($dimensionFilterClauses)
  {
    $this->dimensionFilterClauses = $dimensionFilterClauses;
  }
  /** @return DimensionFilterClause[] */
  public function getDimensionFilterClauses()
  {
    return $this->dimensionFilterClauses;
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
  public function setFiltersExpression($filtersExpression)
  {
    $this->filtersExpression = $filtersExpression;
  }
  /** @return string */
  public function getFiltersExpression()
  {
    return $this->filtersExpression;
  }
  /** @param bool */
  public function setHideTotals($hideTotals)
  {
    $this->hideTotals = $hideTotals;
  }
  /** @return bool */
  public function getHideTotals()
  {
    return $this->hideTotals;
  }
  /** @param bool */
  public function setHideValueRanges($hideValueRanges)
  {
    $this->hideValueRanges = $hideValueRanges;
  }
  /** @return bool */
  public function getHideValueRanges()
  {
    return $this->hideValueRanges;
  }
  /** @param bool */
  public function setIncludeEmptyRows($includeEmptyRows)
  {
    $this->includeEmptyRows = $includeEmptyRows;
  }
  /** @return bool */
  public function getIncludeEmptyRows()
  {
    return $this->includeEmptyRows;
  }
  /** @param MetricFilterClause[] */
  public function setMetricFilterClauses($metricFilterClauses)
  {
    $this->metricFilterClauses = $metricFilterClauses;
  }
  /** @return MetricFilterClause[] */
  public function getMetricFilterClauses()
  {
    return $this->metricFilterClauses;
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
  public function setSamplingLevel($samplingLevel)
  {
    $this->samplingLevel = $samplingLevel;
  }
  /** @return string */
  public function getSamplingLevel()
  {
    return $this->samplingLevel;
  }
  /** @param Segment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return Segment[] */
  public function getSegments()
  {
    return $this->segments;
  }
  /** @param string */
  public function setViewId($viewId)
  {
    $this->viewId = $viewId;
  }
  /** @return string */
  public function getViewId()
  {
    return $this->viewId;
  }
}

class ReportRow extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var DateRangeValues[] */
  public $metrics;
  protected $collection_key = 'metrics';
  protected $metricsType = DateRangeValues::class;
  protected $metricsDataType = 'array';
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
  /** @param DateRangeValues[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return DateRangeValues[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
}

class ResourceQuotasRemaining extends \Google\Model
{
  /** @var int */
  public $dailyQuotaTokensRemaining;
  /** @var int */
  public $hourlyQuotaTokensRemaining;

  /** @param int */
  public function setDailyQuotaTokensRemaining($dailyQuotaTokensRemaining)
  {
    $this->dailyQuotaTokensRemaining = $dailyQuotaTokensRemaining;
  }
  /** @return int */
  public function getDailyQuotaTokensRemaining()
  {
    return $this->dailyQuotaTokensRemaining;
  }
  /** @param int */
  public function setHourlyQuotaTokensRemaining($hourlyQuotaTokensRemaining)
  {
    $this->hourlyQuotaTokensRemaining = $hourlyQuotaTokensRemaining;
  }
  /** @return int */
  public function getHourlyQuotaTokensRemaining()
  {
    return $this->hourlyQuotaTokensRemaining;
  }
}

class ScreenviewData extends \Google\Model
{
  /** @var string */
  public $appName;
  /** @var string */
  public $mobileDeviceBranding;
  /** @var string */
  public $mobileDeviceModel;
  /** @var string */
  public $screenName;

  /** @param string */
  public function setAppName($appName)
  {
    $this->appName = $appName;
  }
  /** @return string */
  public function getAppName()
  {
    return $this->appName;
  }
  /** @param string */
  public function setMobileDeviceBranding($mobileDeviceBranding)
  {
    $this->mobileDeviceBranding = $mobileDeviceBranding;
  }
  /** @return string */
  public function getMobileDeviceBranding()
  {
    return $this->mobileDeviceBranding;
  }
  /** @param string */
  public function setMobileDeviceModel($mobileDeviceModel)
  {
    $this->mobileDeviceModel = $mobileDeviceModel;
  }
  /** @return string */
  public function getMobileDeviceModel()
  {
    return $this->mobileDeviceModel;
  }
  /** @param string */
  public function setScreenName($screenName)
  {
    $this->screenName = $screenName;
  }
  /** @return string */
  public function getScreenName()
  {
    return $this->screenName;
  }
}

class SearchUserActivityRequest extends \Google\Collection
{
  /** @var string[] */
  public $activityTypes;
  /** @var DateRange */
  public $dateRange;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var User */
  public $user;
  /** @var string */
  public $viewId;
  protected $collection_key = 'activityTypes';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $userType = User::class;
  protected $userDataType = '';
  /** @param string[] */
  public function setActivityTypes($activityTypes)
  {
    $this->activityTypes = $activityTypes;
  }
  /** @return string[] */
  public function getActivityTypes()
  {
    return $this->activityTypes;
  }
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
  /** @param User */
  public function setUser(User $user)
  {
    $this->user = $user;
  }
  /** @return User */
  public function getUser()
  {
    return $this->user;
  }
  /** @param string */
  public function setViewId($viewId)
  {
    $this->viewId = $viewId;
  }
  /** @return string */
  public function getViewId()
  {
    return $this->viewId;
  }
}

class SearchUserActivityResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  public $sampleRate;
  /** @var UserActivitySession[] */
  public $sessions;
  /** @var int */
  public $totalRows;
  protected $collection_key = 'sessions';
  protected $sessionsType = UserActivitySession::class;
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
  public function setSampleRate($sampleRate)
  {
    $this->sampleRate = $sampleRate;
  }
  public function getSampleRate()
  {
    return $this->sampleRate;
  }
  /** @param UserActivitySession[] */
  public function setSessions($sessions)
  {
    $this->sessions = $sessions;
  }
  /** @return UserActivitySession[] */
  public function getSessions()
  {
    return $this->sessions;
  }
  /** @param int */
  public function setTotalRows($totalRows)
  {
    $this->totalRows = $totalRows;
  }
  /** @return int */
  public function getTotalRows()
  {
    return $this->totalRows;
  }
}

class Segment extends \Google\Model
{
  /** @var DynamicSegment */
  public $dynamicSegment;
  /** @var string */
  public $segmentId;
  protected $dynamicSegmentType = DynamicSegment::class;
  protected $dynamicSegmentDataType = '';
  /** @param DynamicSegment */
  public function setDynamicSegment(DynamicSegment $dynamicSegment)
  {
    $this->dynamicSegment = $dynamicSegment;
  }
  /** @return DynamicSegment */
  public function getDynamicSegment()
  {
    return $this->dynamicSegment;
  }
  /** @param string */
  public function setSegmentId($segmentId)
  {
    $this->segmentId = $segmentId;
  }
  /** @return string */
  public function getSegmentId()
  {
    return $this->segmentId;
  }
}

class SegmentDefinition extends \Google\Collection
{
  /** @var SegmentFilter[] */
  public $segmentFilters;
  protected $collection_key = 'segmentFilters';
  protected $segmentFiltersType = SegmentFilter::class;
  protected $segmentFiltersDataType = 'array';
  /** @param SegmentFilter[] */
  public function setSegmentFilters($segmentFilters)
  {
    $this->segmentFilters = $segmentFilters;
  }
  /** @return SegmentFilter[] */
  public function getSegmentFilters()
  {
    return $this->segmentFilters;
  }
}

class SegmentDimensionFilter extends \Google\Collection
{
  /** @var bool */
  public $caseSensitive;
  /** @var string */
  public $dimensionName;
  /** @var string[] */
  public $expressions;
  /** @var string */
  public $maxComparisonValue;
  /** @var string */
  public $minComparisonValue;
  /** @var string */
  public $operator;
  protected $collection_key = 'expressions';
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
  public function setDimensionName($dimensionName)
  {
    $this->dimensionName = $dimensionName;
  }
  /** @return string */
  public function getDimensionName()
  {
    return $this->dimensionName;
  }
  /** @param string[] */
  public function setExpressions($expressions)
  {
    $this->expressions = $expressions;
  }
  /** @return string[] */
  public function getExpressions()
  {
    return $this->expressions;
  }
  /** @param string */
  public function setMaxComparisonValue($maxComparisonValue)
  {
    $this->maxComparisonValue = $maxComparisonValue;
  }
  /** @return string */
  public function getMaxComparisonValue()
  {
    return $this->maxComparisonValue;
  }
  /** @param string */
  public function setMinComparisonValue($minComparisonValue)
  {
    $this->minComparisonValue = $minComparisonValue;
  }
  /** @return string */
  public function getMinComparisonValue()
  {
    return $this->minComparisonValue;
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
}

class SegmentFilter extends \Google\Model
{
  /** @var bool */
  public $not;
  /** @var SequenceSegment */
  public $sequenceSegment;
  /** @var SimpleSegment */
  public $simpleSegment;
  protected $sequenceSegmentType = SequenceSegment::class;
  protected $sequenceSegmentDataType = '';
  protected $simpleSegmentType = SimpleSegment::class;
  protected $simpleSegmentDataType = '';
  /** @param bool */
  public function setNot($not)
  {
    $this->not = $not;
  }
  /** @return bool */
  public function getNot()
  {
    return $this->not;
  }
  /** @param SequenceSegment */
  public function setSequenceSegment(SequenceSegment $sequenceSegment)
  {
    $this->sequenceSegment = $sequenceSegment;
  }
  /** @return SequenceSegment */
  public function getSequenceSegment()
  {
    return $this->sequenceSegment;
  }
  /** @param SimpleSegment */
  public function setSimpleSegment(SimpleSegment $simpleSegment)
  {
    $this->simpleSegment = $simpleSegment;
  }
  /** @return SimpleSegment */
  public function getSimpleSegment()
  {
    return $this->simpleSegment;
  }
}

class SegmentFilterClause extends \Google\Model
{
  /** @var SegmentDimensionFilter */
  public $dimensionFilter;
  /** @var SegmentMetricFilter */
  public $metricFilter;
  /** @var bool */
  public $not;
  protected $dimensionFilterType = SegmentDimensionFilter::class;
  protected $dimensionFilterDataType = '';
  protected $metricFilterType = SegmentMetricFilter::class;
  protected $metricFilterDataType = '';
  /** @param SegmentDimensionFilter */
  public function setDimensionFilter(SegmentDimensionFilter $dimensionFilter)
  {
    $this->dimensionFilter = $dimensionFilter;
  }
  /** @return SegmentDimensionFilter */
  public function getDimensionFilter()
  {
    return $this->dimensionFilter;
  }
  /** @param SegmentMetricFilter */
  public function setMetricFilter(SegmentMetricFilter $metricFilter)
  {
    $this->metricFilter = $metricFilter;
  }
  /** @return SegmentMetricFilter */
  public function getMetricFilter()
  {
    return $this->metricFilter;
  }
  /** @param bool */
  public function setNot($not)
  {
    $this->not = $not;
  }
  /** @return bool */
  public function getNot()
  {
    return $this->not;
  }
}

class SegmentMetricFilter extends \Google\Model
{
  /** @var string */
  public $comparisonValue;
  /** @var string */
  public $maxComparisonValue;
  /** @var string */
  public $metricName;
  /** @var string */
  public $operator;
  /** @var string */
  public $scope;

  /** @param string */
  public function setComparisonValue($comparisonValue)
  {
    $this->comparisonValue = $comparisonValue;
  }
  /** @return string */
  public function getComparisonValue()
  {
    return $this->comparisonValue;
  }
  /** @param string */
  public function setMaxComparisonValue($maxComparisonValue)
  {
    $this->maxComparisonValue = $maxComparisonValue;
  }
  /** @return string */
  public function getMaxComparisonValue()
  {
    return $this->maxComparisonValue;
  }
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
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
}

class SegmentSequenceStep extends \Google\Collection
{
  /** @var string */
  public $matchType;
  /** @var OrFiltersForSegment[] */
  public $orFiltersForSegment;
  protected $collection_key = 'orFiltersForSegment';
  protected $orFiltersForSegmentType = OrFiltersForSegment::class;
  protected $orFiltersForSegmentDataType = 'array';
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
  /** @param OrFiltersForSegment[] */
  public function setOrFiltersForSegment($orFiltersForSegment)
  {
    $this->orFiltersForSegment = $orFiltersForSegment;
  }
  /** @return OrFiltersForSegment[] */
  public function getOrFiltersForSegment()
  {
    return $this->orFiltersForSegment;
  }
}

class SequenceSegment extends \Google\Collection
{
  /** @var bool */
  public $firstStepShouldMatchFirstHit;
  /** @var SegmentSequenceStep[] */
  public $segmentSequenceSteps;
  protected $collection_key = 'segmentSequenceSteps';
  protected $segmentSequenceStepsType = SegmentSequenceStep::class;
  protected $segmentSequenceStepsDataType = 'array';
  /** @param bool */
  public function setFirstStepShouldMatchFirstHit($firstStepShouldMatchFirstHit)
  {
    $this->firstStepShouldMatchFirstHit = $firstStepShouldMatchFirstHit;
  }
  /** @return bool */
  public function getFirstStepShouldMatchFirstHit()
  {
    return $this->firstStepShouldMatchFirstHit;
  }
  /** @param SegmentSequenceStep[] */
  public function setSegmentSequenceSteps($segmentSequenceSteps)
  {
    $this->segmentSequenceSteps = $segmentSequenceSteps;
  }
  /** @return SegmentSequenceStep[] */
  public function getSegmentSequenceSteps()
  {
    return $this->segmentSequenceSteps;
  }
}

class SimpleSegment extends \Google\Collection
{
  /** @var OrFiltersForSegment[] */
  public $orFiltersForSegment;
  protected $collection_key = 'orFiltersForSegment';
  protected $orFiltersForSegmentType = OrFiltersForSegment::class;
  protected $orFiltersForSegmentDataType = 'array';
  /** @param OrFiltersForSegment[] */
  public function setOrFiltersForSegment($orFiltersForSegment)
  {
    $this->orFiltersForSegment = $orFiltersForSegment;
  }
  /** @return OrFiltersForSegment[] */
  public function getOrFiltersForSegment()
  {
    return $this->orFiltersForSegment;
  }
}

class TransactionData extends \Google\Model
{
  /** @var string */
  public $transactionId;
  public $transactionRevenue;
  public $transactionShipping;
  public $transactionTax;

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
  public function setTransactionRevenue($transactionRevenue)
  {
    $this->transactionRevenue = $transactionRevenue;
  }
  public function getTransactionRevenue()
  {
    return $this->transactionRevenue;
  }
  public function setTransactionShipping($transactionShipping)
  {
    $this->transactionShipping = $transactionShipping;
  }
  public function getTransactionShipping()
  {
    return $this->transactionShipping;
  }
  public function setTransactionTax($transactionTax)
  {
    $this->transactionTax = $transactionTax;
  }
  public function getTransactionTax()
  {
    return $this->transactionTax;
  }
}

class User extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $userId;

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

class UserActivitySession extends \Google\Collection
{
  /** @var Activity[] */
  public $activities;
  /** @var string */
  public $dataSource;
  /** @var string */
  public $deviceCategory;
  /** @var string */
  public $platform;
  /** @var string */
  public $sessionDate;
  /** @var string */
  public $sessionId;
  protected $collection_key = 'activities';
  protected $activitiesType = Activity::class;
  protected $activitiesDataType = 'array';
  /** @param Activity[] */
  public function setActivities($activities)
  {
    $this->activities = $activities;
  }
  /** @return Activity[] */
  public function getActivities()
  {
    return $this->activities;
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
  public function setDeviceCategory($deviceCategory)
  {
    $this->deviceCategory = $deviceCategory;
  }
  /** @return string */
  public function getDeviceCategory()
  {
    return $this->deviceCategory;
  }
  /** @param string */
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  /** @return string */
  public function getPlatform()
  {
    return $this->platform;
  }
  /** @param string */
  public function setSessionDate($sessionDate)
  {
    $this->sessionDate = $sessionDate;
  }
  /** @return string */
  public function getSessionDate()
  {
    return $this->sessionDate;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Activity::class, 'Google_Service_AnalyticsReporting_Activity');
class_alias(Cohort::class, 'Google_Service_AnalyticsReporting_Cohort');
class_alias(CohortGroup::class, 'Google_Service_AnalyticsReporting_CohortGroup');
class_alias(ColumnHeader::class, 'Google_Service_AnalyticsReporting_ColumnHeader');
class_alias(CustomDimension::class, 'Google_Service_AnalyticsReporting_CustomDimension');
class_alias(DateRange::class, 'Google_Service_AnalyticsReporting_DateRange');
class_alias(DateRangeValues::class, 'Google_Service_AnalyticsReporting_DateRangeValues');
class_alias(Dimension::class, 'Google_Service_AnalyticsReporting_Dimension');
class_alias(DimensionFilter::class, 'Google_Service_AnalyticsReporting_DimensionFilter');
class_alias(DimensionFilterClause::class, 'Google_Service_AnalyticsReporting_DimensionFilterClause');
class_alias(DynamicSegment::class, 'Google_Service_AnalyticsReporting_DynamicSegment');
class_alias(EcommerceData::class, 'Google_Service_AnalyticsReporting_EcommerceData');
class_alias(EventData::class, 'Google_Service_AnalyticsReporting_EventData');
class_alias(GetReportsRequest::class, 'Google_Service_AnalyticsReporting_GetReportsRequest');
class_alias(GetReportsResponse::class, 'Google_Service_AnalyticsReporting_GetReportsResponse');
class_alias(GoalData::class, 'Google_Service_AnalyticsReporting_GoalData');
class_alias(GoalSetData::class, 'Google_Service_AnalyticsReporting_GoalSetData');
class_alias(Metric::class, 'Google_Service_AnalyticsReporting_Metric');
class_alias(MetricFilter::class, 'Google_Service_AnalyticsReporting_MetricFilter');
class_alias(MetricFilterClause::class, 'Google_Service_AnalyticsReporting_MetricFilterClause');
class_alias(MetricHeader::class, 'Google_Service_AnalyticsReporting_MetricHeader');
class_alias(MetricHeaderEntry::class, 'Google_Service_AnalyticsReporting_MetricHeaderEntry');
class_alias(OrFiltersForSegment::class, 'Google_Service_AnalyticsReporting_OrFiltersForSegment');
class_alias(OrderBy::class, 'Google_Service_AnalyticsReporting_OrderBy');
class_alias(PageviewData::class, 'Google_Service_AnalyticsReporting_PageviewData');
class_alias(Pivot::class, 'Google_Service_AnalyticsReporting_Pivot');
class_alias(PivotHeader::class, 'Google_Service_AnalyticsReporting_PivotHeader');
class_alias(PivotHeaderEntry::class, 'Google_Service_AnalyticsReporting_PivotHeaderEntry');
class_alias(PivotValueRegion::class, 'Google_Service_AnalyticsReporting_PivotValueRegion');
class_alias(ProductData::class, 'Google_Service_AnalyticsReporting_ProductData');
class_alias(Report::class, 'Google_Service_AnalyticsReporting_Report');
class_alias(ReportData::class, 'Google_Service_AnalyticsReporting_ReportData');
class_alias(ReportRequest::class, 'Google_Service_AnalyticsReporting_ReportRequest');
class_alias(ReportRow::class, 'Google_Service_AnalyticsReporting_ReportRow');
class_alias(ResourceQuotasRemaining::class, 'Google_Service_AnalyticsReporting_ResourceQuotasRemaining');
class_alias(ScreenviewData::class, 'Google_Service_AnalyticsReporting_ScreenviewData');
class_alias(SearchUserActivityRequest::class, 'Google_Service_AnalyticsReporting_SearchUserActivityRequest');
class_alias(SearchUserActivityResponse::class, 'Google_Service_AnalyticsReporting_SearchUserActivityResponse');
class_alias(Segment::class, 'Google_Service_AnalyticsReporting_Segment');
class_alias(SegmentDefinition::class, 'Google_Service_AnalyticsReporting_SegmentDefinition');
class_alias(SegmentDimensionFilter::class, 'Google_Service_AnalyticsReporting_SegmentDimensionFilter');
class_alias(SegmentFilter::class, 'Google_Service_AnalyticsReporting_SegmentFilter');
class_alias(SegmentFilterClause::class, 'Google_Service_AnalyticsReporting_SegmentFilterClause');
class_alias(SegmentMetricFilter::class, 'Google_Service_AnalyticsReporting_SegmentMetricFilter');
class_alias(SegmentSequenceStep::class, 'Google_Service_AnalyticsReporting_SegmentSequenceStep');
class_alias(SequenceSegment::class, 'Google_Service_AnalyticsReporting_SequenceSegment');
class_alias(SimpleSegment::class, 'Google_Service_AnalyticsReporting_SimpleSegment');
class_alias(TransactionData::class, 'Google_Service_AnalyticsReporting_TransactionData');
class_alias(User::class, 'Google_Service_AnalyticsReporting_User');
class_alias(UserActivitySession::class, 'Google_Service_AnalyticsReporting_UserActivitySession');
