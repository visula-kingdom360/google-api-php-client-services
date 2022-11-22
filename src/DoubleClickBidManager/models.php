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

namespace Google\Service\DoubleClickBidManager;

class ChannelGrouping extends \Google\Collection
{
  /** @var string */
  public $fallbackName;
  /** @var string */
  public $name;
  /** @var Rule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = Rule::class;
  protected $rulesDataType = 'array';
  /** @param string */
  public function setFallbackName($fallbackName)
  {
    $this->fallbackName = $fallbackName;
  }
  /** @return string */
  public function getFallbackName()
  {
    return $this->fallbackName;
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
  /** @param Rule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return Rule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class DataRange extends \Google\Model
{
  /** @var Date */
  public $customEndDate;
  /** @var Date */
  public $customStartDate;
  /** @var string */
  public $range;
  protected $customEndDateType = Date::class;
  protected $customEndDateDataType = '';
  protected $customStartDateType = Date::class;
  protected $customStartDateDataType = '';
  /** @param Date */
  public function setCustomEndDate(Date $customEndDate)
  {
    $this->customEndDate = $customEndDate;
  }
  /** @return Date */
  public function getCustomEndDate()
  {
    return $this->customEndDate;
  }
  /** @param Date */
  public function setCustomStartDate(Date $customStartDate)
  {
    $this->customStartDate = $customStartDate;
  }
  /** @return Date */
  public function getCustomStartDate()
  {
    return $this->customStartDate;
  }
  /** @param string */
  public function setRange($range)
  {
    $this->range = $range;
  }
  /** @return string */
  public function getRange()
  {
    return $this->range;
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

class DisjunctiveMatchStatement extends \Google\Collection
{
  /** @var EventFilter[] */
  public $eventFilters;
  protected $collection_key = 'eventFilters';
  protected $eventFiltersType = EventFilter::class;
  protected $eventFiltersDataType = 'array';
  /** @param EventFilter[] */
  public function setEventFilters($eventFilters)
  {
    $this->eventFilters = $eventFilters;
  }
  /** @return EventFilter[] */
  public function getEventFilters()
  {
    return $this->eventFilters;
  }
}

class EventFilter extends \Google\Model
{
  /** @var PathQueryOptionsFilter */
  public $dimensionFilter;
  protected $dimensionFilterType = PathQueryOptionsFilter::class;
  protected $dimensionFilterDataType = '';
  /** @param PathQueryOptionsFilter */
  public function setDimensionFilter(PathQueryOptionsFilter $dimensionFilter)
  {
    $this->dimensionFilter = $dimensionFilter;
  }
  /** @return PathQueryOptionsFilter */
  public function getDimensionFilter()
  {
    return $this->dimensionFilter;
  }
}

class FilterPair extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $value;

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

class ListQueriesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Query[] */
  public $queries;
  protected $collection_key = 'queries';
  protected $queriesType = Query::class;
  protected $queriesDataType = 'array';
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
  /** @param Query[] */
  public function setQueries($queries)
  {
    $this->queries = $queries;
  }
  /** @return Query[] */
  public function getQueries()
  {
    return $this->queries;
  }
}

class ListReportsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Report[] */
  public $reports;
  protected $collection_key = 'reports';
  protected $reportsType = Report::class;
  protected $reportsDataType = 'array';
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
}

class Options extends \Google\Model
{
  /** @var bool */
  public $includeOnlyTargetedUserLists;
  /** @var PathQueryOptions */
  public $pathQueryOptions;
  protected $pathQueryOptionsType = PathQueryOptions::class;
  protected $pathQueryOptionsDataType = '';
  /** @param bool */
  public function setIncludeOnlyTargetedUserLists($includeOnlyTargetedUserLists)
  {
    $this->includeOnlyTargetedUserLists = $includeOnlyTargetedUserLists;
  }
  /** @return bool */
  public function getIncludeOnlyTargetedUserLists()
  {
    return $this->includeOnlyTargetedUserLists;
  }
  /** @param PathQueryOptions */
  public function setPathQueryOptions(PathQueryOptions $pathQueryOptions)
  {
    $this->pathQueryOptions = $pathQueryOptions;
  }
  /** @return PathQueryOptions */
  public function getPathQueryOptions()
  {
    return $this->pathQueryOptions;
  }
}

class Parameters extends \Google\Collection
{
  /** @var FilterPair[] */
  public $filters;
  /** @var string[] */
  public $groupBys;
  /** @var string[] */
  public $metrics;
  /** @var Options */
  public $options;
  /** @var string */
  public $type;
  protected $collection_key = 'metrics';
  protected $filtersType = FilterPair::class;
  protected $filtersDataType = 'array';
  protected $optionsType = Options::class;
  protected $optionsDataType = '';
  /** @param FilterPair[] */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return FilterPair[] */
  public function getFilters()
  {
    return $this->filters;
  }
  /** @param string[] */
  public function setGroupBys($groupBys)
  {
    $this->groupBys = $groupBys;
  }
  /** @return string[] */
  public function getGroupBys()
  {
    return $this->groupBys;
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
  /** @param Options */
  public function setOptions(Options $options)
  {
    $this->options = $options;
  }
  /** @return Options */
  public function getOptions()
  {
    return $this->options;
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

class PathFilter extends \Google\Collection
{
  /** @var EventFilter[] */
  public $eventFilters;
  /** @var string */
  public $pathMatchPosition;
  protected $collection_key = 'eventFilters';
  protected $eventFiltersType = EventFilter::class;
  protected $eventFiltersDataType = 'array';
  /** @param EventFilter[] */
  public function setEventFilters($eventFilters)
  {
    $this->eventFilters = $eventFilters;
  }
  /** @return EventFilter[] */
  public function getEventFilters()
  {
    return $this->eventFilters;
  }
  /** @param string */
  public function setPathMatchPosition($pathMatchPosition)
  {
    $this->pathMatchPosition = $pathMatchPosition;
  }
  /** @return string */
  public function getPathMatchPosition()
  {
    return $this->pathMatchPosition;
  }
}

class PathQueryOptions extends \Google\Collection
{
  /** @var ChannelGrouping */
  public $channelGrouping;
  /** @var PathFilter[] */
  public $pathFilters;
  protected $collection_key = 'pathFilters';
  protected $channelGroupingType = ChannelGrouping::class;
  protected $channelGroupingDataType = '';
  protected $pathFiltersType = PathFilter::class;
  protected $pathFiltersDataType = 'array';
  /** @param ChannelGrouping */
  public function setChannelGrouping(ChannelGrouping $channelGrouping)
  {
    $this->channelGrouping = $channelGrouping;
  }
  /** @return ChannelGrouping */
  public function getChannelGrouping()
  {
    return $this->channelGrouping;
  }
  /** @param PathFilter[] */
  public function setPathFilters($pathFilters)
  {
    $this->pathFilters = $pathFilters;
  }
  /** @return PathFilter[] */
  public function getPathFilters()
  {
    return $this->pathFilters;
  }
}

class PathQueryOptionsFilter extends \Google\Collection
{
  /** @var string */
  public $filter;
  /** @var string */
  public $match;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
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
  public function setMatch($match)
  {
    $this->match = $match;
  }
  /** @return string */
  public function getMatch()
  {
    return $this->match;
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

class Query extends \Google\Model
{
  /** @var QueryMetadata */
  public $metadata;
  /** @var Parameters */
  public $params;
  /** @var string */
  public $queryId;
  /** @var QuerySchedule */
  public $schedule;
  protected $metadataType = QueryMetadata::class;
  protected $metadataDataType = '';
  protected $paramsType = Parameters::class;
  protected $paramsDataType = '';
  protected $scheduleType = QuerySchedule::class;
  protected $scheduleDataType = '';
  /** @param QueryMetadata */
  public function setMetadata(QueryMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return QueryMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param Parameters */
  public function setParams(Parameters $params)
  {
    $this->params = $params;
  }
  /** @return Parameters */
  public function getParams()
  {
    return $this->params;
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
  /** @param QuerySchedule */
  public function setSchedule(QuerySchedule $schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return QuerySchedule */
  public function getSchedule()
  {
    return $this->schedule;
  }
}

class QueryMetadata extends \Google\Collection
{
  /** @var DataRange */
  public $dataRange;
  /** @var string */
  public $format;
  /** @var bool */
  public $sendNotification;
  /** @var string[] */
  public $shareEmailAddress;
  /** @var string */
  public $title;
  protected $collection_key = 'shareEmailAddress';
  protected $dataRangeType = DataRange::class;
  protected $dataRangeDataType = '';
  /** @param DataRange */
  public function setDataRange(DataRange $dataRange)
  {
    $this->dataRange = $dataRange;
  }
  /** @return DataRange */
  public function getDataRange()
  {
    return $this->dataRange;
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
  /** @param bool */
  public function setSendNotification($sendNotification)
  {
    $this->sendNotification = $sendNotification;
  }
  /** @return bool */
  public function getSendNotification()
  {
    return $this->sendNotification;
  }
  /** @param string[] */
  public function setShareEmailAddress($shareEmailAddress)
  {
    $this->shareEmailAddress = $shareEmailAddress;
  }
  /** @return string[] */
  public function getShareEmailAddress()
  {
    return $this->shareEmailAddress;
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

class QuerySchedule extends \Google\Model
{
  /** @var Date */
  public $endDate;
  /** @var string */
  public $frequency;
  /** @var string */
  public $nextRunTimezoneCode;
  /** @var Date */
  public $startDate;
  protected $endDateType = Date::class;
  protected $endDateDataType = '';
  protected $startDateType = Date::class;
  protected $startDateDataType = '';
  /** @param Date */
  public function setEndDate(Date $endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return Date */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param string */
  public function setFrequency($frequency)
  {
    $this->frequency = $frequency;
  }
  /** @return string */
  public function getFrequency()
  {
    return $this->frequency;
  }
  /** @param string */
  public function setNextRunTimezoneCode($nextRunTimezoneCode)
  {
    $this->nextRunTimezoneCode = $nextRunTimezoneCode;
  }
  /** @return string */
  public function getNextRunTimezoneCode()
  {
    return $this->nextRunTimezoneCode;
  }
  /** @param Date */
  public function setStartDate(Date $startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return Date */
  public function getStartDate()
  {
    return $this->startDate;
  }
}

class Report extends \Google\Model
{
  /** @var ReportKey */
  public $key;
  /** @var ReportMetadata */
  public $metadata;
  /** @var Parameters */
  public $params;
  protected $keyType = ReportKey::class;
  protected $keyDataType = '';
  protected $metadataType = ReportMetadata::class;
  protected $metadataDataType = '';
  protected $paramsType = Parameters::class;
  protected $paramsDataType = '';
  /** @param ReportKey */
  public function setKey(ReportKey $key)
  {
    $this->key = $key;
  }
  /** @return ReportKey */
  public function getKey()
  {
    return $this->key;
  }
  /** @param ReportMetadata */
  public function setMetadata(ReportMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ReportMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param Parameters */
  public function setParams(Parameters $params)
  {
    $this->params = $params;
  }
  /** @return Parameters */
  public function getParams()
  {
    return $this->params;
  }
}

class ReportKey extends \Google\Model
{
  /** @var string */
  public $queryId;
  /** @var string */
  public $reportId;

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
  public function setReportId($reportId)
  {
    $this->reportId = $reportId;
  }
  /** @return string */
  public function getReportId()
  {
    return $this->reportId;
  }
}

class ReportMetadata extends \Google\Model
{
  /** @var string */
  public $googleCloudStoragePath;
  /** @var Date */
  public $reportDataEndDate;
  /** @var Date */
  public $reportDataStartDate;
  /** @var ReportStatus */
  public $status;
  protected $reportDataEndDateType = Date::class;
  protected $reportDataEndDateDataType = '';
  protected $reportDataStartDateType = Date::class;
  protected $reportDataStartDateDataType = '';
  protected $statusType = ReportStatus::class;
  protected $statusDataType = '';
  /** @param string */
  public function setGoogleCloudStoragePath($googleCloudStoragePath)
  {
    $this->googleCloudStoragePath = $googleCloudStoragePath;
  }
  /** @return string */
  public function getGoogleCloudStoragePath()
  {
    return $this->googleCloudStoragePath;
  }
  /** @param Date */
  public function setReportDataEndDate(Date $reportDataEndDate)
  {
    $this->reportDataEndDate = $reportDataEndDate;
  }
  /** @return Date */
  public function getReportDataEndDate()
  {
    return $this->reportDataEndDate;
  }
  /** @param Date */
  public function setReportDataStartDate(Date $reportDataStartDate)
  {
    $this->reportDataStartDate = $reportDataStartDate;
  }
  /** @return Date */
  public function getReportDataStartDate()
  {
    return $this->reportDataStartDate;
  }
  /** @param ReportStatus */
  public function setStatus(ReportStatus $status)
  {
    $this->status = $status;
  }
  /** @return ReportStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class ReportStatus extends \Google\Model
{
  /** @var string */
  public $finishTime;
  /** @var string */
  public $format;
  /** @var string */
  public $state;

  /** @param string */
  public function setFinishTime($finishTime)
  {
    $this->finishTime = $finishTime;
  }
  /** @return string */
  public function getFinishTime()
  {
    return $this->finishTime;
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

class Rule extends \Google\Collection
{
  /** @var DisjunctiveMatchStatement[] */
  public $disjunctiveMatchStatements;
  /** @var string */
  public $name;
  protected $collection_key = 'disjunctiveMatchStatements';
  protected $disjunctiveMatchStatementsType = DisjunctiveMatchStatement::class;
  protected $disjunctiveMatchStatementsDataType = 'array';
  /** @param DisjunctiveMatchStatement[] */
  public function setDisjunctiveMatchStatements($disjunctiveMatchStatements)
  {
    $this->disjunctiveMatchStatements = $disjunctiveMatchStatements;
  }
  /** @return DisjunctiveMatchStatement[] */
  public function getDisjunctiveMatchStatements()
  {
    return $this->disjunctiveMatchStatements;
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

class RunQueryRequest extends \Google\Model
{
  /** @var DataRange */
  public $dataRange;
  protected $dataRangeType = DataRange::class;
  protected $dataRangeDataType = '';
  /** @param DataRange */
  public function setDataRange(DataRange $dataRange)
  {
    $this->dataRange = $dataRange;
  }
  /** @return DataRange */
  public function getDataRange()
  {
    return $this->dataRange;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChannelGrouping::class, 'Google_Service_DoubleClickBidManager_ChannelGrouping');
class_alias(DataRange::class, 'Google_Service_DoubleClickBidManager_DataRange');
class_alias(Date::class, 'Google_Service_DoubleClickBidManager_Date');
class_alias(DisjunctiveMatchStatement::class, 'Google_Service_DoubleClickBidManager_DisjunctiveMatchStatement');
class_alias(EventFilter::class, 'Google_Service_DoubleClickBidManager_EventFilter');
class_alias(FilterPair::class, 'Google_Service_DoubleClickBidManager_FilterPair');
class_alias(ListQueriesResponse::class, 'Google_Service_DoubleClickBidManager_ListQueriesResponse');
class_alias(ListReportsResponse::class, 'Google_Service_DoubleClickBidManager_ListReportsResponse');
class_alias(Options::class, 'Google_Service_DoubleClickBidManager_Options');
class_alias(Parameters::class, 'Google_Service_DoubleClickBidManager_Parameters');
class_alias(PathFilter::class, 'Google_Service_DoubleClickBidManager_PathFilter');
class_alias(PathQueryOptions::class, 'Google_Service_DoubleClickBidManager_PathQueryOptions');
class_alias(PathQueryOptionsFilter::class, 'Google_Service_DoubleClickBidManager_PathQueryOptionsFilter');
class_alias(Query::class, 'Google_Service_DoubleClickBidManager_Query');
class_alias(QueryMetadata::class, 'Google_Service_DoubleClickBidManager_QueryMetadata');
class_alias(QuerySchedule::class, 'Google_Service_DoubleClickBidManager_QuerySchedule');
class_alias(Report::class, 'Google_Service_DoubleClickBidManager_Report');
class_alias(ReportKey::class, 'Google_Service_DoubleClickBidManager_ReportKey');
class_alias(ReportMetadata::class, 'Google_Service_DoubleClickBidManager_ReportMetadata');
class_alias(ReportStatus::class, 'Google_Service_DoubleClickBidManager_ReportStatus');
class_alias(Rule::class, 'Google_Service_DoubleClickBidManager_Rule');
class_alias(RunQueryRequest::class, 'Google_Service_DoubleClickBidManager_RunQueryRequest');
