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

namespace Google\Service\ChromeUXReport;

class Bin extends \Google\Model
{
  public $density;
  /** @var array */
  public $end;
  /** @var array */
  public $start;

  public function setDensity($density)
  {
    $this->density = $density;
  }
  public function getDensity()
  {
    return $this->density;
  }
  /** @param array */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return array */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param array */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return array */
  public function getStart()
  {
    return $this->start;
  }
}

class CollectionPeriod extends \Google\Model
{
  /** @var Date */
  public $firstDate;
  /** @var Date */
  public $lastDate;
  protected $firstDateType = Date::class;
  protected $firstDateDataType = '';
  protected $lastDateType = Date::class;
  protected $lastDateDataType = '';
  /** @param Date */
  public function setFirstDate(Date $firstDate)
  {
    $this->firstDate = $firstDate;
  }
  /** @return Date */
  public function getFirstDate()
  {
    return $this->firstDate;
  }
  /** @param Date */
  public function setLastDate(Date $lastDate)
  {
    $this->lastDate = $lastDate;
  }
  /** @return Date */
  public function getLastDate()
  {
    return $this->lastDate;
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

class Key extends \Google\Model
{
  /** @var string */
  public $effectiveConnectionType;
  /** @var string */
  public $formFactor;
  /** @var string */
  public $origin;
  /** @var string */
  public $url;

  /** @param string */
  public function setEffectiveConnectionType($effectiveConnectionType)
  {
    $this->effectiveConnectionType = $effectiveConnectionType;
  }
  /** @return string */
  public function getEffectiveConnectionType()
  {
    return $this->effectiveConnectionType;
  }
  /** @param string */
  public function setFormFactor($formFactor)
  {
    $this->formFactor = $formFactor;
  }
  /** @return string */
  public function getFormFactor()
  {
    return $this->formFactor;
  }
  /** @param string */
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }
  /** @return string */
  public function getOrigin()
  {
    return $this->origin;
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

class Metric extends \Google\Collection
{
  /** @var Bin[] */
  public $histogram;
  /** @var Percentiles */
  public $percentiles;
  protected $collection_key = 'histogram';
  protected $histogramType = Bin::class;
  protected $histogramDataType = 'array';
  protected $percentilesType = Percentiles::class;
  protected $percentilesDataType = '';
  /** @param Bin[] */
  public function setHistogram($histogram)
  {
    $this->histogram = $histogram;
  }
  /** @return Bin[] */
  public function getHistogram()
  {
    return $this->histogram;
  }
  /** @param Percentiles */
  public function setPercentiles(Percentiles $percentiles)
  {
    $this->percentiles = $percentiles;
  }
  /** @return Percentiles */
  public function getPercentiles()
  {
    return $this->percentiles;
  }
}

class Percentiles extends \Google\Model
{
  /** @var array */
  public $p75;

  /** @param array */
  public function setP75($p75)
  {
    $this->p75 = $p75;
  }
  /** @return array */
  public function getP75()
  {
    return $this->p75;
  }
}

class QueryRequest extends \Google\Collection
{
  /** @var string */
  public $effectiveConnectionType;
  /** @var string */
  public $formFactor;
  /** @var string[] */
  public $metrics;
  /** @var string */
  public $origin;
  /** @var string */
  public $url;
  protected $collection_key = 'metrics';
  /** @param string */
  public function setEffectiveConnectionType($effectiveConnectionType)
  {
    $this->effectiveConnectionType = $effectiveConnectionType;
  }
  /** @return string */
  public function getEffectiveConnectionType()
  {
    return $this->effectiveConnectionType;
  }
  /** @param string */
  public function setFormFactor($formFactor)
  {
    $this->formFactor = $formFactor;
  }
  /** @return string */
  public function getFormFactor()
  {
    return $this->formFactor;
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
  /** @param string */
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }
  /** @return string */
  public function getOrigin()
  {
    return $this->origin;
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

class QueryResponse extends \Google\Model
{
  /** @var Record */
  public $record;
  /** @var UrlNormalization */
  public $urlNormalizationDetails;
  protected $recordType = Record::class;
  protected $recordDataType = '';
  protected $urlNormalizationDetailsType = UrlNormalization::class;
  protected $urlNormalizationDetailsDataType = '';
  /** @param Record */
  public function setRecord(Record $record)
  {
    $this->record = $record;
  }
  /** @return Record */
  public function getRecord()
  {
    return $this->record;
  }
  /** @param UrlNormalization */
  public function setUrlNormalizationDetails(UrlNormalization $urlNormalizationDetails)
  {
    $this->urlNormalizationDetails = $urlNormalizationDetails;
  }
  /** @return UrlNormalization */
  public function getUrlNormalizationDetails()
  {
    return $this->urlNormalizationDetails;
  }
}

class Record extends \Google\Model
{
  /** @var CollectionPeriod */
  public $collectionPeriod;
  /** @var Key */
  public $key;
  /** @var Metric[] */
  public $metrics;
  protected $collectionPeriodType = CollectionPeriod::class;
  protected $collectionPeriodDataType = '';
  protected $keyType = Key::class;
  protected $keyDataType = '';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'map';
  /** @param CollectionPeriod */
  public function setCollectionPeriod(CollectionPeriod $collectionPeriod)
  {
    $this->collectionPeriod = $collectionPeriod;
  }
  /** @return CollectionPeriod */
  public function getCollectionPeriod()
  {
    return $this->collectionPeriod;
  }
  /** @param Key */
  public function setKey(Key $key)
  {
    $this->key = $key;
  }
  /** @return Key */
  public function getKey()
  {
    return $this->key;
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

class UrlNormalization extends \Google\Model
{
  /** @var string */
  public $normalizedUrl;
  /** @var string */
  public $originalUrl;

  /** @param string */
  public function setNormalizedUrl($normalizedUrl)
  {
    $this->normalizedUrl = $normalizedUrl;
  }
  /** @return string */
  public function getNormalizedUrl()
  {
    return $this->normalizedUrl;
  }
  /** @param string */
  public function setOriginalUrl($originalUrl)
  {
    $this->originalUrl = $originalUrl;
  }
  /** @return string */
  public function getOriginalUrl()
  {
    return $this->originalUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Bin::class, 'Google_Service_ChromeUXReport_Bin');
class_alias(CollectionPeriod::class, 'Google_Service_ChromeUXReport_CollectionPeriod');
class_alias(Date::class, 'Google_Service_ChromeUXReport_Date');
class_alias(Key::class, 'Google_Service_ChromeUXReport_Key');
class_alias(Metric::class, 'Google_Service_ChromeUXReport_Metric');
class_alias(Percentiles::class, 'Google_Service_ChromeUXReport_Percentiles');
class_alias(QueryRequest::class, 'Google_Service_ChromeUXReport_QueryRequest');
class_alias(QueryResponse::class, 'Google_Service_ChromeUXReport_QueryResponse');
class_alias(Record::class, 'Google_Service_ChromeUXReport_Record');
class_alias(UrlNormalization::class, 'Google_Service_ChromeUXReport_UrlNormalization');
