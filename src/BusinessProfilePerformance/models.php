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

namespace Google\Service\BusinessProfilePerformance;

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

class DatedValue extends \Google\Model
{
  /** @var Date */
  public $date;
  /** @var string */
  public $value;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
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

class GetDailyMetricsTimeSeriesResponse extends \Google\Model
{
  /** @var TimeSeries */
  public $timeSeries;
  protected $timeSeriesType = TimeSeries::class;
  protected $timeSeriesDataType = '';
  /** @param TimeSeries */
  public function setTimeSeries(TimeSeries $timeSeries)
  {
    $this->timeSeries = $timeSeries;
  }
  /** @return TimeSeries */
  public function getTimeSeries()
  {
    return $this->timeSeries;
  }
}

class InsightsValue extends \Google\Model
{
  /** @var string */
  public $threshold;
  /** @var string */
  public $value;

  /** @param string */
  public function setThreshold($threshold)
  {
    $this->threshold = $threshold;
  }
  /** @return string */
  public function getThreshold()
  {
    return $this->threshold;
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

class ListSearchKeywordImpressionsMonthlyResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var SearchKeywordCount[] */
  public $searchKeywordsCounts;
  protected $collection_key = 'searchKeywordsCounts';
  protected $searchKeywordsCountsType = SearchKeywordCount::class;
  protected $searchKeywordsCountsDataType = 'array';
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
  /** @param SearchKeywordCount[] */
  public function setSearchKeywordsCounts($searchKeywordsCounts)
  {
    $this->searchKeywordsCounts = $searchKeywordsCounts;
  }
  /** @return SearchKeywordCount[] */
  public function getSearchKeywordsCounts()
  {
    return $this->searchKeywordsCounts;
  }
}

class SearchKeywordCount extends \Google\Model
{
  /** @var InsightsValue */
  public $insightsValue;
  /** @var string */
  public $searchKeyword;
  protected $insightsValueType = InsightsValue::class;
  protected $insightsValueDataType = '';
  /** @param InsightsValue */
  public function setInsightsValue(InsightsValue $insightsValue)
  {
    $this->insightsValue = $insightsValue;
  }
  /** @return InsightsValue */
  public function getInsightsValue()
  {
    return $this->insightsValue;
  }
  /** @param string */
  public function setSearchKeyword($searchKeyword)
  {
    $this->searchKeyword = $searchKeyword;
  }
  /** @return string */
  public function getSearchKeyword()
  {
    return $this->searchKeyword;
  }
}

class TimeSeries extends \Google\Collection
{
  /** @var DatedValue[] */
  public $datedValues;
  protected $collection_key = 'datedValues';
  protected $datedValuesType = DatedValue::class;
  protected $datedValuesDataType = 'array';
  /** @param DatedValue[] */
  public function setDatedValues($datedValues)
  {
    $this->datedValues = $datedValues;
  }
  /** @return DatedValue[] */
  public function getDatedValues()
  {
    return $this->datedValues;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Date::class, 'Google_Service_BusinessProfilePerformance_Date');
class_alias(DatedValue::class, 'Google_Service_BusinessProfilePerformance_DatedValue');
class_alias(GetDailyMetricsTimeSeriesResponse::class, 'Google_Service_BusinessProfilePerformance_GetDailyMetricsTimeSeriesResponse');
class_alias(InsightsValue::class, 'Google_Service_BusinessProfilePerformance_InsightsValue');
class_alias(ListSearchKeywordImpressionsMonthlyResponse::class, 'Google_Service_BusinessProfilePerformance_ListSearchKeywordImpressionsMonthlyResponse');
class_alias(SearchKeywordCount::class, 'Google_Service_BusinessProfilePerformance_SearchKeywordCount');
class_alias(TimeSeries::class, 'Google_Service_BusinessProfilePerformance_TimeSeries');
