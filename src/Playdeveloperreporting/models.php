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

namespace Google\Service\Playdeveloperreporting;

class GooglePlayDeveloperReportingV1beta1Anomaly extends \Google\Collection
{
  /** @var GooglePlayDeveloperReportingV1beta1DimensionValue[] */
  public $dimensions;
  /** @var GooglePlayDeveloperReportingV1beta1MetricValue */
  public $metric;
  /** @var string */
  public $metricSet;
  /** @var string */
  public $name;
  /** @var GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public $timelineSpec;
  protected $collection_key = 'dimensions';
  protected $dimensionsType = GooglePlayDeveloperReportingV1beta1DimensionValue::class;
  protected $dimensionsDataType = 'array';
  protected $metricType = GooglePlayDeveloperReportingV1beta1MetricValue::class;
  protected $metricDataType = '';
  protected $timelineSpecType = GooglePlayDeveloperReportingV1beta1TimelineSpec::class;
  protected $timelineSpecDataType = '';
  /** @param GooglePlayDeveloperReportingV1beta1DimensionValue[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return GooglePlayDeveloperReportingV1beta1DimensionValue[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param GooglePlayDeveloperReportingV1beta1MetricValue */
  public function setMetric(GooglePlayDeveloperReportingV1beta1MetricValue $metric)
  {
    $this->metric = $metric;
  }
  /** @return GooglePlayDeveloperReportingV1beta1MetricValue */
  public function getMetric()
  {
    return $this->metric;
  }
  /** @param string */
  public function setMetricSet($metricSet)
  {
    $this->metricSet = $metricSet;
  }
  /** @return string */
  public function getMetricSet()
  {
    return $this->metricSet;
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
  /** @param GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public function setTimelineSpec(GooglePlayDeveloperReportingV1beta1TimelineSpec $timelineSpec)
  {
    $this->timelineSpec = $timelineSpec;
  }
  /** @return GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public function getTimelineSpec()
  {
    return $this->timelineSpec;
  }
}

class GooglePlayDeveloperReportingV1beta1AnrRateMetricSet extends \Google\Model
{
  /** @var GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public $freshnessInfo;
  /** @var string */
  public $name;
  protected $freshnessInfoType = GooglePlayDeveloperReportingV1beta1FreshnessInfo::class;
  protected $freshnessInfoDataType = '';
  /** @param GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public function setFreshnessInfo(GooglePlayDeveloperReportingV1beta1FreshnessInfo $freshnessInfo)
  {
    $this->freshnessInfo = $freshnessInfo;
  }
  /** @return GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public function getFreshnessInfo()
  {
    return $this->freshnessInfo;
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

class GooglePlayDeveloperReportingV1beta1CrashRateMetricSet extends \Google\Model
{
  /** @var GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public $freshnessInfo;
  /** @var string */
  public $name;
  protected $freshnessInfoType = GooglePlayDeveloperReportingV1beta1FreshnessInfo::class;
  protected $freshnessInfoDataType = '';
  /** @param GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public function setFreshnessInfo(GooglePlayDeveloperReportingV1beta1FreshnessInfo $freshnessInfo)
  {
    $this->freshnessInfo = $freshnessInfo;
  }
  /** @return GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public function getFreshnessInfo()
  {
    return $this->freshnessInfo;
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

class GooglePlayDeveloperReportingV1beta1DimensionValue extends \Google\Model
{
  /** @var string */
  public $dimension;
  /** @var string */
  public $int64Value;
  /** @var string */
  public $stringValue;
  /** @var string */
  public $valueLabel;

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
  public function setInt64Value($int64Value)
  {
    $this->int64Value = $int64Value;
  }
  /** @return string */
  public function getInt64Value()
  {
    return $this->int64Value;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
  /** @param string */
  public function setValueLabel($valueLabel)
  {
    $this->valueLabel = $valueLabel;
  }
  /** @return string */
  public function getValueLabel()
  {
    return $this->valueLabel;
  }
}

class GooglePlayDeveloperReportingV1beta1ExcessiveWakeupRateMetricSet extends \Google\Model
{
  /** @var GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public $freshnessInfo;
  /** @var string */
  public $name;
  protected $freshnessInfoType = GooglePlayDeveloperReportingV1beta1FreshnessInfo::class;
  protected $freshnessInfoDataType = '';
  /** @param GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public function setFreshnessInfo(GooglePlayDeveloperReportingV1beta1FreshnessInfo $freshnessInfo)
  {
    $this->freshnessInfo = $freshnessInfo;
  }
  /** @return GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public function getFreshnessInfo()
  {
    return $this->freshnessInfo;
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

class GooglePlayDeveloperReportingV1beta1FreshnessInfo extends \Google\Collection
{
  /** @var GooglePlayDeveloperReportingV1beta1FreshnessInfoFreshness[] */
  public $freshnesses;
  protected $collection_key = 'freshnesses';
  protected $freshnessesType = GooglePlayDeveloperReportingV1beta1FreshnessInfoFreshness::class;
  protected $freshnessesDataType = 'array';
  /** @param GooglePlayDeveloperReportingV1beta1FreshnessInfoFreshness[] */
  public function setFreshnesses($freshnesses)
  {
    $this->freshnesses = $freshnesses;
  }
  /** @return GooglePlayDeveloperReportingV1beta1FreshnessInfoFreshness[] */
  public function getFreshnesses()
  {
    return $this->freshnesses;
  }
}

class GooglePlayDeveloperReportingV1beta1FreshnessInfoFreshness extends \Google\Model
{
  /** @var string */
  public $aggregationPeriod;
  /** @var GoogleTypeDateTime */
  public $latestEndTime;
  protected $latestEndTimeType = GoogleTypeDateTime::class;
  protected $latestEndTimeDataType = '';
  /** @param string */
  public function setAggregationPeriod($aggregationPeriod)
  {
    $this->aggregationPeriod = $aggregationPeriod;
  }
  /** @return string */
  public function getAggregationPeriod()
  {
    return $this->aggregationPeriod;
  }
  /** @param GoogleTypeDateTime */
  public function setLatestEndTime(GoogleTypeDateTime $latestEndTime)
  {
    $this->latestEndTime = $latestEndTime;
  }
  /** @return GoogleTypeDateTime */
  public function getLatestEndTime()
  {
    return $this->latestEndTime;
  }
}

class GooglePlayDeveloperReportingV1beta1ListAnomaliesResponse extends \Google\Collection
{
  /** @var GooglePlayDeveloperReportingV1beta1Anomaly[] */
  public $anomalies;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'anomalies';
  protected $anomaliesType = GooglePlayDeveloperReportingV1beta1Anomaly::class;
  protected $anomaliesDataType = 'array';
  /** @param GooglePlayDeveloperReportingV1beta1Anomaly[] */
  public function setAnomalies($anomalies)
  {
    $this->anomalies = $anomalies;
  }
  /** @return GooglePlayDeveloperReportingV1beta1Anomaly[] */
  public function getAnomalies()
  {
    return $this->anomalies;
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

class GooglePlayDeveloperReportingV1beta1MetricValue extends \Google\Model
{
  /** @var GoogleTypeDecimal */
  public $decimalValue;
  /** @var string */
  public $metric;
  protected $decimalValueType = GoogleTypeDecimal::class;
  protected $decimalValueDataType = '';
  /** @param GoogleTypeDecimal */
  public function setDecimalValue(GoogleTypeDecimal $decimalValue)
  {
    $this->decimalValue = $decimalValue;
  }
  /** @return GoogleTypeDecimal */
  public function getDecimalValue()
  {
    return $this->decimalValue;
  }
  /** @param string */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /** @return string */
  public function getMetric()
  {
    return $this->metric;
  }
}

class GooglePlayDeveloperReportingV1beta1MetricsRow extends \Google\Collection
{
  /** @var string */
  public $aggregationPeriod;
  /** @var GooglePlayDeveloperReportingV1beta1DimensionValue[] */
  public $dimensions;
  /** @var GooglePlayDeveloperReportingV1beta1MetricValue[] */
  public $metrics;
  /** @var GoogleTypeDateTime */
  public $startTime;
  protected $collection_key = 'metrics';
  protected $dimensionsType = GooglePlayDeveloperReportingV1beta1DimensionValue::class;
  protected $dimensionsDataType = 'array';
  protected $metricsType = GooglePlayDeveloperReportingV1beta1MetricValue::class;
  protected $metricsDataType = 'array';
  protected $startTimeType = GoogleTypeDateTime::class;
  protected $startTimeDataType = '';
  /** @param string */
  public function setAggregationPeriod($aggregationPeriod)
  {
    $this->aggregationPeriod = $aggregationPeriod;
  }
  /** @return string */
  public function getAggregationPeriod()
  {
    return $this->aggregationPeriod;
  }
  /** @param GooglePlayDeveloperReportingV1beta1DimensionValue[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return GooglePlayDeveloperReportingV1beta1DimensionValue[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param GooglePlayDeveloperReportingV1beta1MetricValue[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GooglePlayDeveloperReportingV1beta1MetricValue[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param GoogleTypeDateTime */
  public function setStartTime(GoogleTypeDateTime $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return GoogleTypeDateTime */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class GooglePlayDeveloperReportingV1beta1QueryAnrRateMetricSetRequest extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $filter;
  /** @var string[] */
  public $metrics;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public $timelineSpec;
  protected $collection_key = 'metrics';
  protected $timelineSpecType = GooglePlayDeveloperReportingV1beta1TimelineSpec::class;
  protected $timelineSpecDataType = '';
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
  /** @param GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public function setTimelineSpec(GooglePlayDeveloperReportingV1beta1TimelineSpec $timelineSpec)
  {
    $this->timelineSpec = $timelineSpec;
  }
  /** @return GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public function getTimelineSpec()
  {
    return $this->timelineSpec;
  }
}

class GooglePlayDeveloperReportingV1beta1QueryAnrRateMetricSetResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = GooglePlayDeveloperReportingV1beta1MetricsRow::class;
  protected $rowsDataType = 'array';
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
  /** @param GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class GooglePlayDeveloperReportingV1beta1QueryCrashRateMetricSetRequest extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $filter;
  /** @var string[] */
  public $metrics;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public $timelineSpec;
  protected $collection_key = 'metrics';
  protected $timelineSpecType = GooglePlayDeveloperReportingV1beta1TimelineSpec::class;
  protected $timelineSpecDataType = '';
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
  /** @param GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public function setTimelineSpec(GooglePlayDeveloperReportingV1beta1TimelineSpec $timelineSpec)
  {
    $this->timelineSpec = $timelineSpec;
  }
  /** @return GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public function getTimelineSpec()
  {
    return $this->timelineSpec;
  }
}

class GooglePlayDeveloperReportingV1beta1QueryCrashRateMetricSetResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = GooglePlayDeveloperReportingV1beta1MetricsRow::class;
  protected $rowsDataType = 'array';
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
  /** @param GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class GooglePlayDeveloperReportingV1beta1QueryExcessiveWakeupRateMetricSetRequest extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $filter;
  /** @var string[] */
  public $metrics;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public $timelineSpec;
  protected $collection_key = 'metrics';
  protected $timelineSpecType = GooglePlayDeveloperReportingV1beta1TimelineSpec::class;
  protected $timelineSpecDataType = '';
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
  /** @param GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public function setTimelineSpec(GooglePlayDeveloperReportingV1beta1TimelineSpec $timelineSpec)
  {
    $this->timelineSpec = $timelineSpec;
  }
  /** @return GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public function getTimelineSpec()
  {
    return $this->timelineSpec;
  }
}

class GooglePlayDeveloperReportingV1beta1QueryExcessiveWakeupRateMetricSetResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = GooglePlayDeveloperReportingV1beta1MetricsRow::class;
  protected $rowsDataType = 'array';
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
  /** @param GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class GooglePlayDeveloperReportingV1beta1QueryStuckBackgroundWakelockRateMetricSetRequest extends \Google\Collection
{
  /** @var string[] */
  public $dimensions;
  /** @var string */
  public $filter;
  /** @var string[] */
  public $metrics;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public $timelineSpec;
  protected $collection_key = 'metrics';
  protected $timelineSpecType = GooglePlayDeveloperReportingV1beta1TimelineSpec::class;
  protected $timelineSpecDataType = '';
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
  /** @param GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public function setTimelineSpec(GooglePlayDeveloperReportingV1beta1TimelineSpec $timelineSpec)
  {
    $this->timelineSpec = $timelineSpec;
  }
  /** @return GooglePlayDeveloperReportingV1beta1TimelineSpec */
  public function getTimelineSpec()
  {
    return $this->timelineSpec;
  }
}

class GooglePlayDeveloperReportingV1beta1QueryStuckBackgroundWakelockRateMetricSetResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = GooglePlayDeveloperReportingV1beta1MetricsRow::class;
  protected $rowsDataType = 'array';
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
  /** @param GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return GooglePlayDeveloperReportingV1beta1MetricsRow[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class GooglePlayDeveloperReportingV1beta1StuckBackgroundWakelockRateMetricSet extends \Google\Model
{
  /** @var GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public $freshnessInfo;
  /** @var string */
  public $name;
  protected $freshnessInfoType = GooglePlayDeveloperReportingV1beta1FreshnessInfo::class;
  protected $freshnessInfoDataType = '';
  /** @param GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public function setFreshnessInfo(GooglePlayDeveloperReportingV1beta1FreshnessInfo $freshnessInfo)
  {
    $this->freshnessInfo = $freshnessInfo;
  }
  /** @return GooglePlayDeveloperReportingV1beta1FreshnessInfo */
  public function getFreshnessInfo()
  {
    return $this->freshnessInfo;
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

class GooglePlayDeveloperReportingV1beta1TimelineSpec extends \Google\Model
{
  /** @var string */
  public $aggregationPeriod;
  /** @var GoogleTypeDateTime */
  public $endTime;
  /** @var GoogleTypeDateTime */
  public $startTime;
  protected $endTimeType = GoogleTypeDateTime::class;
  protected $endTimeDataType = '';
  protected $startTimeType = GoogleTypeDateTime::class;
  protected $startTimeDataType = '';
  /** @param string */
  public function setAggregationPeriod($aggregationPeriod)
  {
    $this->aggregationPeriod = $aggregationPeriod;
  }
  /** @return string */
  public function getAggregationPeriod()
  {
    return $this->aggregationPeriod;
  }
  /** @param GoogleTypeDateTime */
  public function setEndTime(GoogleTypeDateTime $endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return GoogleTypeDateTime */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleTypeDateTime */
  public function setStartTime(GoogleTypeDateTime $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return GoogleTypeDateTime */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class GoogleTypeDateTime extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $month;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;
  /** @var GoogleTypeTimeZone */
  public $timeZone;
  /** @var string */
  public $utcOffset;
  /** @var int */
  public $year;
  protected $timeZoneType = GoogleTypeTimeZone::class;
  protected $timeZoneDataType = '';
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
  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  /** @return int */
  public function getHours()
  {
    return $this->hours;
  }
  /** @param int */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  /** @return int */
  public function getMinutes()
  {
    return $this->minutes;
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
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  /** @return int */
  public function getNanos()
  {
    return $this->nanos;
  }
  /** @param int */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return int */
  public function getSeconds()
  {
    return $this->seconds;
  }
  /** @param GoogleTypeTimeZone */
  public function setTimeZone(GoogleTypeTimeZone $timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return GoogleTypeTimeZone */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /** @param string */
  public function setUtcOffset($utcOffset)
  {
    $this->utcOffset = $utcOffset;
  }
  /** @return string */
  public function getUtcOffset()
  {
    return $this->utcOffset;
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

class GoogleTypeDecimal extends \Google\Model
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

class GoogleTypeTimeZone extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $version;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePlayDeveloperReportingV1beta1Anomaly::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1Anomaly');
class_alias(GooglePlayDeveloperReportingV1beta1AnrRateMetricSet::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1AnrRateMetricSet');
class_alias(GooglePlayDeveloperReportingV1beta1CrashRateMetricSet::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1CrashRateMetricSet');
class_alias(GooglePlayDeveloperReportingV1beta1DimensionValue::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1DimensionValue');
class_alias(GooglePlayDeveloperReportingV1beta1ExcessiveWakeupRateMetricSet::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1ExcessiveWakeupRateMetricSet');
class_alias(GooglePlayDeveloperReportingV1beta1FreshnessInfo::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1FreshnessInfo');
class_alias(GooglePlayDeveloperReportingV1beta1FreshnessInfoFreshness::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1FreshnessInfoFreshness');
class_alias(GooglePlayDeveloperReportingV1beta1ListAnomaliesResponse::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1ListAnomaliesResponse');
class_alias(GooglePlayDeveloperReportingV1beta1MetricValue::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1MetricValue');
class_alias(GooglePlayDeveloperReportingV1beta1MetricsRow::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1MetricsRow');
class_alias(GooglePlayDeveloperReportingV1beta1QueryAnrRateMetricSetRequest::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1QueryAnrRateMetricSetRequest');
class_alias(GooglePlayDeveloperReportingV1beta1QueryAnrRateMetricSetResponse::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1QueryAnrRateMetricSetResponse');
class_alias(GooglePlayDeveloperReportingV1beta1QueryCrashRateMetricSetRequest::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1QueryCrashRateMetricSetRequest');
class_alias(GooglePlayDeveloperReportingV1beta1QueryCrashRateMetricSetResponse::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1QueryCrashRateMetricSetResponse');
class_alias(GooglePlayDeveloperReportingV1beta1QueryExcessiveWakeupRateMetricSetRequest::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1QueryExcessiveWakeupRateMetricSetRequest');
class_alias(GooglePlayDeveloperReportingV1beta1QueryExcessiveWakeupRateMetricSetResponse::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1QueryExcessiveWakeupRateMetricSetResponse');
class_alias(GooglePlayDeveloperReportingV1beta1QueryStuckBackgroundWakelockRateMetricSetRequest::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1QueryStuckBackgroundWakelockRateMetricSetRequest');
class_alias(GooglePlayDeveloperReportingV1beta1QueryStuckBackgroundWakelockRateMetricSetResponse::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1QueryStuckBackgroundWakelockRateMetricSetResponse');
class_alias(GooglePlayDeveloperReportingV1beta1StuckBackgroundWakelockRateMetricSet::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1StuckBackgroundWakelockRateMetricSet');
class_alias(GooglePlayDeveloperReportingV1beta1TimelineSpec::class, 'Google_Service_Playdeveloperreporting_GooglePlayDeveloperReportingV1beta1TimelineSpec');
class_alias(GoogleTypeDateTime::class, 'Google_Service_Playdeveloperreporting_GoogleTypeDateTime');
class_alias(GoogleTypeDecimal::class, 'Google_Service_Playdeveloperreporting_GoogleTypeDecimal');
class_alias(GoogleTypeTimeZone::class, 'Google_Service_Playdeveloperreporting_GoogleTypeTimeZone');
