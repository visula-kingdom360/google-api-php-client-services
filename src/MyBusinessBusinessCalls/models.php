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

namespace Google\Service\MyBusinessBusinessCalls;

class AggregateMetrics extends \Google\Collection
{
  /** @var int */
  public $answeredCallsCount;
  /** @var Date */
  public $endDate;
  /** @var HourlyMetrics[] */
  public $hourlyMetrics;
  /** @var int */
  public $missedCallsCount;
  /** @var Date */
  public $startDate;
  /** @var WeekDayMetrics[] */
  public $weekdayMetrics;
  protected $collection_key = 'weekdayMetrics';
  protected $endDateType = Date::class;
  protected $endDateDataType = '';
  protected $hourlyMetricsType = HourlyMetrics::class;
  protected $hourlyMetricsDataType = 'array';
  protected $startDateType = Date::class;
  protected $startDateDataType = '';
  protected $weekdayMetricsType = WeekDayMetrics::class;
  protected $weekdayMetricsDataType = 'array';
  /** @param int */
  public function setAnsweredCallsCount($answeredCallsCount)
  {
    $this->answeredCallsCount = $answeredCallsCount;
  }
  /** @return int */
  public function getAnsweredCallsCount()
  {
    return $this->answeredCallsCount;
  }
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
  /** @param HourlyMetrics[] */
  public function setHourlyMetrics($hourlyMetrics)
  {
    $this->hourlyMetrics = $hourlyMetrics;
  }
  /** @return HourlyMetrics[] */
  public function getHourlyMetrics()
  {
    return $this->hourlyMetrics;
  }
  /** @param int */
  public function setMissedCallsCount($missedCallsCount)
  {
    $this->missedCallsCount = $missedCallsCount;
  }
  /** @return int */
  public function getMissedCallsCount()
  {
    return $this->missedCallsCount;
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
  /** @param WeekDayMetrics[] */
  public function setWeekdayMetrics($weekdayMetrics)
  {
    $this->weekdayMetrics = $weekdayMetrics;
  }
  /** @return WeekDayMetrics[] */
  public function getWeekdayMetrics()
  {
    return $this->weekdayMetrics;
  }
}

class BusinessCallsInsights extends \Google\Model
{
  /** @var AggregateMetrics */
  public $aggregateMetrics;
  /** @var string */
  public $metricType;
  /** @var string */
  public $name;
  protected $aggregateMetricsType = AggregateMetrics::class;
  protected $aggregateMetricsDataType = '';
  /** @param AggregateMetrics */
  public function setAggregateMetrics(AggregateMetrics $aggregateMetrics)
  {
    $this->aggregateMetrics = $aggregateMetrics;
  }
  /** @return AggregateMetrics */
  public function getAggregateMetrics()
  {
    return $this->aggregateMetrics;
  }
  /** @param string */
  public function setMetricType($metricType)
  {
    $this->metricType = $metricType;
  }
  /** @return string */
  public function getMetricType()
  {
    return $this->metricType;
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

class BusinessCallsSettings extends \Google\Model
{
  /** @var string */
  public $callsState;
  /** @var string */
  public $consentTime;
  /** @var string */
  public $name;

  /** @param string */
  public function setCallsState($callsState)
  {
    $this->callsState = $callsState;
  }
  /** @return string */
  public function getCallsState()
  {
    return $this->callsState;
  }
  /** @param string */
  public function setConsentTime($consentTime)
  {
    $this->consentTime = $consentTime;
  }
  /** @return string */
  public function getConsentTime()
  {
    return $this->consentTime;
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

class HourlyMetrics extends \Google\Model
{
  /** @var int */
  public $hour;
  /** @var int */
  public $missedCallsCount;

  /** @param int */
  public function setHour($hour)
  {
    $this->hour = $hour;
  }
  /** @return int */
  public function getHour()
  {
    return $this->hour;
  }
  /** @param int */
  public function setMissedCallsCount($missedCallsCount)
  {
    $this->missedCallsCount = $missedCallsCount;
  }
  /** @return int */
  public function getMissedCallsCount()
  {
    return $this->missedCallsCount;
  }
}

class ListBusinessCallsInsightsResponse extends \Google\Collection
{
  /** @var BusinessCallsInsights[] */
  public $businessCallsInsights;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'businessCallsInsights';
  protected $businessCallsInsightsType = BusinessCallsInsights::class;
  protected $businessCallsInsightsDataType = 'array';
  /** @param BusinessCallsInsights[] */
  public function setBusinessCallsInsights($businessCallsInsights)
  {
    $this->businessCallsInsights = $businessCallsInsights;
  }
  /** @return BusinessCallsInsights[] */
  public function getBusinessCallsInsights()
  {
    return $this->businessCallsInsights;
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

class WeekDayMetrics extends \Google\Model
{
  /** @var string */
  public $day;
  /** @var int */
  public $missedCallsCount;

  /** @param string */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return string */
  public function getDay()
  {
    return $this->day;
  }
  /** @param int */
  public function setMissedCallsCount($missedCallsCount)
  {
    $this->missedCallsCount = $missedCallsCount;
  }
  /** @return int */
  public function getMissedCallsCount()
  {
    return $this->missedCallsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AggregateMetrics::class, 'Google_Service_MyBusinessBusinessCalls_AggregateMetrics');
class_alias(BusinessCallsInsights::class, 'Google_Service_MyBusinessBusinessCalls_BusinessCallsInsights');
class_alias(BusinessCallsSettings::class, 'Google_Service_MyBusinessBusinessCalls_BusinessCallsSettings');
class_alias(Date::class, 'Google_Service_MyBusinessBusinessCalls_Date');
class_alias(HourlyMetrics::class, 'Google_Service_MyBusinessBusinessCalls_HourlyMetrics');
class_alias(ListBusinessCallsInsightsResponse::class, 'Google_Service_MyBusinessBusinessCalls_ListBusinessCallsInsightsResponse');
class_alias(WeekDayMetrics::class, 'Google_Service_MyBusinessBusinessCalls_WeekDayMetrics');
