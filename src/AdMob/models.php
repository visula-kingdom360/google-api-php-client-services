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

namespace Google\Service\AdMob;

class AdUnit extends \Google\Collection
{
  /** @var string */
  public $adFormat;
  /** @var string[] */
  public $adTypes;
  /** @var string */
  public $adUnitId;
  /** @var string */
  public $appId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  protected $collection_key = 'adTypes';
  /** @param string */
  public function setAdFormat($adFormat)
  {
    $this->adFormat = $adFormat;
  }
  /** @return string */
  public function getAdFormat()
  {
    return $this->adFormat;
  }
  /** @param string[] */
  public function setAdTypes($adTypes)
  {
    $this->adTypes = $adTypes;
  }
  /** @return string[] */
  public function getAdTypes()
  {
    return $this->adTypes;
  }
  /** @param string */
  public function setAdUnitId($adUnitId)
  {
    $this->adUnitId = $adUnitId;
  }
  /** @return string */
  public function getAdUnitId()
  {
    return $this->adUnitId;
  }
  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
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

class App extends \Google\Model
{
  /** @var string */
  public $appId;
  /** @var AppLinkedAppInfo */
  public $linkedAppInfo;
  /** @var AppManualAppInfo */
  public $manualAppInfo;
  /** @var string */
  public $name;
  /** @var string */
  public $platform;
  protected $linkedAppInfoType = AppLinkedAppInfo::class;
  protected $linkedAppInfoDataType = '';
  protected $manualAppInfoType = AppManualAppInfo::class;
  protected $manualAppInfoDataType = '';
  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
  }
  /** @param AppLinkedAppInfo */
  public function setLinkedAppInfo(AppLinkedAppInfo $linkedAppInfo)
  {
    $this->linkedAppInfo = $linkedAppInfo;
  }
  /** @return AppLinkedAppInfo */
  public function getLinkedAppInfo()
  {
    return $this->linkedAppInfo;
  }
  /** @param AppManualAppInfo */
  public function setManualAppInfo(AppManualAppInfo $manualAppInfo)
  {
    $this->manualAppInfo = $manualAppInfo;
  }
  /** @return AppManualAppInfo */
  public function getManualAppInfo()
  {
    return $this->manualAppInfo;
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
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  /** @return string */
  public function getPlatform()
  {
    return $this->platform;
  }
}

class AppLinkedAppInfo extends \Google\Model
{
  /** @var string */
  public $appStoreId;
  /** @var string */
  public $displayName;

  /** @param string */
  public function setAppStoreId($appStoreId)
  {
    $this->appStoreId = $appStoreId;
  }
  /** @return string */
  public function getAppStoreId()
  {
    return $this->appStoreId;
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

class AppManualAppInfo extends \Google\Model
{
  /** @var string */
  public $displayName;

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

class DateRange extends \Google\Model
{
  /** @var Date */
  public $endDate;
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

class GenerateMediationReportRequest extends \Google\Model
{
  /** @var MediationReportSpec */
  public $reportSpec;
  protected $reportSpecType = MediationReportSpec::class;
  protected $reportSpecDataType = '';
  /** @param MediationReportSpec */
  public function setReportSpec(MediationReportSpec $reportSpec)
  {
    $this->reportSpec = $reportSpec;
  }
  /** @return MediationReportSpec */
  public function getReportSpec()
  {
    return $this->reportSpec;
  }
}

class GenerateMediationReportResponse extends \Google\Model
{
  /** @var ReportFooter */
  public $footer;
  /** @var ReportHeader */
  public $header;
  /** @var ReportRow */
  public $row;
  protected $footerType = ReportFooter::class;
  protected $footerDataType = '';
  protected $headerType = ReportHeader::class;
  protected $headerDataType = '';
  protected $rowType = ReportRow::class;
  protected $rowDataType = '';
  /** @param ReportFooter */
  public function setFooter(ReportFooter $footer)
  {
    $this->footer = $footer;
  }
  /** @return ReportFooter */
  public function getFooter()
  {
    return $this->footer;
  }
  /** @param ReportHeader */
  public function setHeader(ReportHeader $header)
  {
    $this->header = $header;
  }
  /** @return ReportHeader */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param ReportRow */
  public function setRow(ReportRow $row)
  {
    $this->row = $row;
  }
  /** @return ReportRow */
  public function getRow()
  {
    return $this->row;
  }
}

class GenerateNetworkReportRequest extends \Google\Model
{
  /** @var NetworkReportSpec */
  public $reportSpec;
  protected $reportSpecType = NetworkReportSpec::class;
  protected $reportSpecDataType = '';
  /** @param NetworkReportSpec */
  public function setReportSpec(NetworkReportSpec $reportSpec)
  {
    $this->reportSpec = $reportSpec;
  }
  /** @return NetworkReportSpec */
  public function getReportSpec()
  {
    return $this->reportSpec;
  }
}

class GenerateNetworkReportResponse extends \Google\Model
{
  /** @var ReportFooter */
  public $footer;
  /** @var ReportHeader */
  public $header;
  /** @var ReportRow */
  public $row;
  protected $footerType = ReportFooter::class;
  protected $footerDataType = '';
  protected $headerType = ReportHeader::class;
  protected $headerDataType = '';
  protected $rowType = ReportRow::class;
  protected $rowDataType = '';
  /** @param ReportFooter */
  public function setFooter(ReportFooter $footer)
  {
    $this->footer = $footer;
  }
  /** @return ReportFooter */
  public function getFooter()
  {
    return $this->footer;
  }
  /** @param ReportHeader */
  public function setHeader(ReportHeader $header)
  {
    $this->header = $header;
  }
  /** @return ReportHeader */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param ReportRow */
  public function setRow(ReportRow $row)
  {
    $this->row = $row;
  }
  /** @return ReportRow */
  public function getRow()
  {
    return $this->row;
  }
}

class ListAdUnitsResponse extends \Google\Collection
{
  /** @var AdUnit[] */
  public $adUnits;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'adUnits';
  protected $adUnitsType = AdUnit::class;
  protected $adUnitsDataType = 'array';
  /** @param AdUnit[] */
  public function setAdUnits($adUnits)
  {
    $this->adUnits = $adUnits;
  }
  /** @return AdUnit[] */
  public function getAdUnits()
  {
    return $this->adUnits;
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

class ListAppsResponse extends \Google\Collection
{
  /** @var App[] */
  public $apps;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apps';
  protected $appsType = App::class;
  protected $appsDataType = 'array';
  /** @param App[] */
  public function setApps($apps)
  {
    $this->apps = $apps;
  }
  /** @return App[] */
  public function getApps()
  {
    return $this->apps;
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

class ListPublisherAccountsResponse extends \Google\Collection
{
  /** @var PublisherAccount[] */
  public $account;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'account';
  protected $accountType = PublisherAccount::class;
  protected $accountDataType = 'array';
  /** @param PublisherAccount[] */
  public function setAccount($account)
  {
    $this->account = $account;
  }
  /** @return PublisherAccount[] */
  public function getAccount()
  {
    return $this->account;
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

class LocalizationSettings extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $languageCode;

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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class MediationReportSpec extends \Google\Collection
{
  /** @var DateRange */
  public $dateRange;
  /** @var MediationReportSpecDimensionFilter[] */
  public $dimensionFilters;
  /** @var string[] */
  public $dimensions;
  /** @var LocalizationSettings */
  public $localizationSettings;
  /** @var int */
  public $maxReportRows;
  /** @var string[] */
  public $metrics;
  /** @var MediationReportSpecSortCondition[] */
  public $sortConditions;
  /** @var string */
  public $timeZone;
  protected $collection_key = 'sortConditions';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $dimensionFiltersType = MediationReportSpecDimensionFilter::class;
  protected $dimensionFiltersDataType = 'array';
  protected $localizationSettingsType = LocalizationSettings::class;
  protected $localizationSettingsDataType = '';
  protected $sortConditionsType = MediationReportSpecSortCondition::class;
  protected $sortConditionsDataType = 'array';
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
  /** @param MediationReportSpecDimensionFilter[] */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /** @return MediationReportSpecDimensionFilter[] */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
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
  /** @param LocalizationSettings */
  public function setLocalizationSettings(LocalizationSettings $localizationSettings)
  {
    $this->localizationSettings = $localizationSettings;
  }
  /** @return LocalizationSettings */
  public function getLocalizationSettings()
  {
    return $this->localizationSettings;
  }
  /** @param int */
  public function setMaxReportRows($maxReportRows)
  {
    $this->maxReportRows = $maxReportRows;
  }
  /** @return int */
  public function getMaxReportRows()
  {
    return $this->maxReportRows;
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
  /** @param MediationReportSpecSortCondition[] */
  public function setSortConditions($sortConditions)
  {
    $this->sortConditions = $sortConditions;
  }
  /** @return MediationReportSpecSortCondition[] */
  public function getSortConditions()
  {
    return $this->sortConditions;
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

class MediationReportSpecDimensionFilter extends \Google\Model
{
  /** @var string */
  public $dimension;
  /** @var StringList */
  public $matchesAny;
  protected $matchesAnyType = StringList::class;
  protected $matchesAnyDataType = '';
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
  /** @param StringList */
  public function setMatchesAny(StringList $matchesAny)
  {
    $this->matchesAny = $matchesAny;
  }
  /** @return StringList */
  public function getMatchesAny()
  {
    return $this->matchesAny;
  }
}

class MediationReportSpecSortCondition extends \Google\Model
{
  /** @var string */
  public $dimension;
  /** @var string */
  public $metric;
  /** @var string */
  public $order;

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
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /** @return string */
  public function getMetric()
  {
    return $this->metric;
  }
  /** @param string */
  public function setOrder($order)
  {
    $this->order = $order;
  }
  /** @return string */
  public function getOrder()
  {
    return $this->order;
  }
}

class NetworkReportSpec extends \Google\Collection
{
  /** @var DateRange */
  public $dateRange;
  /** @var NetworkReportSpecDimensionFilter[] */
  public $dimensionFilters;
  /** @var string[] */
  public $dimensions;
  /** @var LocalizationSettings */
  public $localizationSettings;
  /** @var int */
  public $maxReportRows;
  /** @var string[] */
  public $metrics;
  /** @var NetworkReportSpecSortCondition[] */
  public $sortConditions;
  /** @var string */
  public $timeZone;
  protected $collection_key = 'sortConditions';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $dimensionFiltersType = NetworkReportSpecDimensionFilter::class;
  protected $dimensionFiltersDataType = 'array';
  protected $localizationSettingsType = LocalizationSettings::class;
  protected $localizationSettingsDataType = '';
  protected $sortConditionsType = NetworkReportSpecSortCondition::class;
  protected $sortConditionsDataType = 'array';
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
  /** @param NetworkReportSpecDimensionFilter[] */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /** @return NetworkReportSpecDimensionFilter[] */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
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
  /** @param LocalizationSettings */
  public function setLocalizationSettings(LocalizationSettings $localizationSettings)
  {
    $this->localizationSettings = $localizationSettings;
  }
  /** @return LocalizationSettings */
  public function getLocalizationSettings()
  {
    return $this->localizationSettings;
  }
  /** @param int */
  public function setMaxReportRows($maxReportRows)
  {
    $this->maxReportRows = $maxReportRows;
  }
  /** @return int */
  public function getMaxReportRows()
  {
    return $this->maxReportRows;
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
  /** @param NetworkReportSpecSortCondition[] */
  public function setSortConditions($sortConditions)
  {
    $this->sortConditions = $sortConditions;
  }
  /** @return NetworkReportSpecSortCondition[] */
  public function getSortConditions()
  {
    return $this->sortConditions;
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

class NetworkReportSpecDimensionFilter extends \Google\Model
{
  /** @var string */
  public $dimension;
  /** @var StringList */
  public $matchesAny;
  protected $matchesAnyType = StringList::class;
  protected $matchesAnyDataType = '';
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
  /** @param StringList */
  public function setMatchesAny(StringList $matchesAny)
  {
    $this->matchesAny = $matchesAny;
  }
  /** @return StringList */
  public function getMatchesAny()
  {
    return $this->matchesAny;
  }
}

class NetworkReportSpecSortCondition extends \Google\Model
{
  /** @var string */
  public $dimension;
  /** @var string */
  public $metric;
  /** @var string */
  public $order;

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
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /** @return string */
  public function getMetric()
  {
    return $this->metric;
  }
  /** @param string */
  public function setOrder($order)
  {
    $this->order = $order;
  }
  /** @return string */
  public function getOrder()
  {
    return $this->order;
  }
}

class PublisherAccount extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $name;
  /** @var string */
  public $publisherId;
  /** @var string */
  public $reportingTimeZone;

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
  public function setPublisherId($publisherId)
  {
    $this->publisherId = $publisherId;
  }
  /** @return string */
  public function getPublisherId()
  {
    return $this->publisherId;
  }
  /** @param string */
  public function setReportingTimeZone($reportingTimeZone)
  {
    $this->reportingTimeZone = $reportingTimeZone;
  }
  /** @return string */
  public function getReportingTimeZone()
  {
    return $this->reportingTimeZone;
  }
}

class ReportFooter extends \Google\Collection
{
  /** @var string */
  public $matchingRowCount;
  /** @var ReportWarning[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $warningsType = ReportWarning::class;
  protected $warningsDataType = 'array';
  /** @param string */
  public function setMatchingRowCount($matchingRowCount)
  {
    $this->matchingRowCount = $matchingRowCount;
  }
  /** @return string */
  public function getMatchingRowCount()
  {
    return $this->matchingRowCount;
  }
  /** @param ReportWarning[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return ReportWarning[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class ReportHeader extends \Google\Model
{
  /** @var DateRange */
  public $dateRange;
  /** @var LocalizationSettings */
  public $localizationSettings;
  /** @var string */
  public $reportingTimeZone;
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $localizationSettingsType = LocalizationSettings::class;
  protected $localizationSettingsDataType = '';
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
  /** @param LocalizationSettings */
  public function setLocalizationSettings(LocalizationSettings $localizationSettings)
  {
    $this->localizationSettings = $localizationSettings;
  }
  /** @return LocalizationSettings */
  public function getLocalizationSettings()
  {
    return $this->localizationSettings;
  }
  /** @param string */
  public function setReportingTimeZone($reportingTimeZone)
  {
    $this->reportingTimeZone = $reportingTimeZone;
  }
  /** @return string */
  public function getReportingTimeZone()
  {
    return $this->reportingTimeZone;
  }
}

class ReportRow extends \Google\Model
{
  /** @var ReportRowDimensionValue[] */
  public $dimensionValues;
  /** @var ReportRowMetricValue[] */
  public $metricValues;
  protected $dimensionValuesType = ReportRowDimensionValue::class;
  protected $dimensionValuesDataType = 'map';
  protected $metricValuesType = ReportRowMetricValue::class;
  protected $metricValuesDataType = 'map';
  /** @param ReportRowDimensionValue[] */
  public function setDimensionValues($dimensionValues)
  {
    $this->dimensionValues = $dimensionValues;
  }
  /** @return ReportRowDimensionValue[] */
  public function getDimensionValues()
  {
    return $this->dimensionValues;
  }
  /** @param ReportRowMetricValue[] */
  public function setMetricValues($metricValues)
  {
    $this->metricValues = $metricValues;
  }
  /** @return ReportRowMetricValue[] */
  public function getMetricValues()
  {
    return $this->metricValues;
  }
}

class ReportRowDimensionValue extends \Google\Model
{
  /** @var string */
  public $displayLabel;
  /** @var string */
  public $value;

  /** @param string */
  public function setDisplayLabel($displayLabel)
  {
    $this->displayLabel = $displayLabel;
  }
  /** @return string */
  public function getDisplayLabel()
  {
    return $this->displayLabel;
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

class ReportRowMetricValue extends \Google\Model
{
  public $doubleValue;
  /** @var string */
  public $integerValue;
  /** @var string */
  public $microsValue;

  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param string */
  public function setIntegerValue($integerValue)
  {
    $this->integerValue = $integerValue;
  }
  /** @return string */
  public function getIntegerValue()
  {
    return $this->integerValue;
  }
  /** @param string */
  public function setMicrosValue($microsValue)
  {
    $this->microsValue = $microsValue;
  }
  /** @return string */
  public function getMicrosValue()
  {
    return $this->microsValue;
  }
}

class ReportWarning extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $type;

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

class StringList extends \Google\Collection
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdUnit::class, 'Google_Service_AdMob_AdUnit');
class_alias(App::class, 'Google_Service_AdMob_App');
class_alias(AppLinkedAppInfo::class, 'Google_Service_AdMob_AppLinkedAppInfo');
class_alias(AppManualAppInfo::class, 'Google_Service_AdMob_AppManualAppInfo');
class_alias(Date::class, 'Google_Service_AdMob_Date');
class_alias(DateRange::class, 'Google_Service_AdMob_DateRange');
class_alias(GenerateMediationReportRequest::class, 'Google_Service_AdMob_GenerateMediationReportRequest');
class_alias(GenerateMediationReportResponse::class, 'Google_Service_AdMob_GenerateMediationReportResponse');
class_alias(GenerateNetworkReportRequest::class, 'Google_Service_AdMob_GenerateNetworkReportRequest');
class_alias(GenerateNetworkReportResponse::class, 'Google_Service_AdMob_GenerateNetworkReportResponse');
class_alias(ListAdUnitsResponse::class, 'Google_Service_AdMob_ListAdUnitsResponse');
class_alias(ListAppsResponse::class, 'Google_Service_AdMob_ListAppsResponse');
class_alias(ListPublisherAccountsResponse::class, 'Google_Service_AdMob_ListPublisherAccountsResponse');
class_alias(LocalizationSettings::class, 'Google_Service_AdMob_LocalizationSettings');
class_alias(MediationReportSpec::class, 'Google_Service_AdMob_MediationReportSpec');
class_alias(MediationReportSpecDimensionFilter::class, 'Google_Service_AdMob_MediationReportSpecDimensionFilter');
class_alias(MediationReportSpecSortCondition::class, 'Google_Service_AdMob_MediationReportSpecSortCondition');
class_alias(NetworkReportSpec::class, 'Google_Service_AdMob_NetworkReportSpec');
class_alias(NetworkReportSpecDimensionFilter::class, 'Google_Service_AdMob_NetworkReportSpecDimensionFilter');
class_alias(NetworkReportSpecSortCondition::class, 'Google_Service_AdMob_NetworkReportSpecSortCondition');
class_alias(PublisherAccount::class, 'Google_Service_AdMob_PublisherAccount');
class_alias(ReportFooter::class, 'Google_Service_AdMob_ReportFooter');
class_alias(ReportHeader::class, 'Google_Service_AdMob_ReportHeader');
class_alias(ReportRow::class, 'Google_Service_AdMob_ReportRow');
class_alias(ReportRowDimensionValue::class, 'Google_Service_AdMob_ReportRowDimensionValue');
class_alias(ReportRowMetricValue::class, 'Google_Service_AdMob_ReportRowMetricValue');
class_alias(ReportWarning::class, 'Google_Service_AdMob_ReportWarning');
class_alias(StringList::class, 'Google_Service_AdMob_StringList');
