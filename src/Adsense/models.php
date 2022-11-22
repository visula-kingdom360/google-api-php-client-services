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

namespace Google\Service\Adsense;

class Account extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string[] */
  public $pendingTasks;
  /** @var bool */
  public $premium;
  /** @var string */
  public $state;
  /** @var TimeZone */
  public $timeZone;
  protected $collection_key = 'pendingTasks';
  protected $timeZoneType = TimeZone::class;
  protected $timeZoneDataType = '';
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
  /** @param string[] */
  public function setPendingTasks($pendingTasks)
  {
    $this->pendingTasks = $pendingTasks;
  }
  /** @return string[] */
  public function getPendingTasks()
  {
    return $this->pendingTasks;
  }
  /** @param bool */
  public function setPremium($premium)
  {
    $this->premium = $premium;
  }
  /** @return bool */
  public function getPremium()
  {
    return $this->premium;
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
  /** @param TimeZone */
  public function setTimeZone(TimeZone $timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return TimeZone */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

class AdBlockingRecoveryTag extends \Google\Model
{
  /** @var string */
  public $errorProtectionCode;
  /** @var string */
  public $tag;

  /** @param string */
  public function setErrorProtectionCode($errorProtectionCode)
  {
    $this->errorProtectionCode = $errorProtectionCode;
  }
  /** @return string */
  public function getErrorProtectionCode()
  {
    return $this->errorProtectionCode;
  }
  /** @param string */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return string */
  public function getTag()
  {
    return $this->tag;
  }
}

class AdClient extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $productCode;
  /** @var string */
  public $reportingDimensionId;
  /** @var string */
  public $state;

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
  public function setProductCode($productCode)
  {
    $this->productCode = $productCode;
  }
  /** @return string */
  public function getProductCode()
  {
    return $this->productCode;
  }
  /** @param string */
  public function setReportingDimensionId($reportingDimensionId)
  {
    $this->reportingDimensionId = $reportingDimensionId;
  }
  /** @return string */
  public function getReportingDimensionId()
  {
    return $this->reportingDimensionId;
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

class AdClientAdCode extends \Google\Model
{
  /** @var string */
  public $adCode;
  /** @var string */
  public $ampBody;
  /** @var string */
  public $ampHead;

  /** @param string */
  public function setAdCode($adCode)
  {
    $this->adCode = $adCode;
  }
  /** @return string */
  public function getAdCode()
  {
    return $this->adCode;
  }
  /** @param string */
  public function setAmpBody($ampBody)
  {
    $this->ampBody = $ampBody;
  }
  /** @return string */
  public function getAmpBody()
  {
    return $this->ampBody;
  }
  /** @param string */
  public function setAmpHead($ampHead)
  {
    $this->ampHead = $ampHead;
  }
  /** @return string */
  public function getAmpHead()
  {
    return $this->ampHead;
  }
}

class AdUnit extends \Google\Model
{
  /** @var ContentAdsSettings */
  public $contentAdsSettings;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $reportingDimensionId;
  /** @var string */
  public $state;
  protected $contentAdsSettingsType = ContentAdsSettings::class;
  protected $contentAdsSettingsDataType = '';
  /** @param ContentAdsSettings */
  public function setContentAdsSettings(ContentAdsSettings $contentAdsSettings)
  {
    $this->contentAdsSettings = $contentAdsSettings;
  }
  /** @return ContentAdsSettings */
  public function getContentAdsSettings()
  {
    return $this->contentAdsSettings;
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
  /** @param string */
  public function setReportingDimensionId($reportingDimensionId)
  {
    $this->reportingDimensionId = $reportingDimensionId;
  }
  /** @return string */
  public function getReportingDimensionId()
  {
    return $this->reportingDimensionId;
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

class AdUnitAdCode extends \Google\Model
{
  /** @var string */
  public $adCode;

  /** @param string */
  public function setAdCode($adCode)
  {
    $this->adCode = $adCode;
  }
  /** @return string */
  public function getAdCode()
  {
    return $this->adCode;
  }
}

class AdsenseEmpty extends \Google\Model
{
}

class Alert extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $name;
  /** @var string */
  public $severity;
  /** @var string */
  public $type;

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
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
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

class Cell extends \Google\Model
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

class ContentAdsSettings extends \Google\Model
{
  /** @var string */
  public $size;
  /** @var string */
  public $type;

  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
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

class CustomChannel extends \Google\Model
{
  /** @var bool */
  public $active;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $reportingDimensionId;

  /** @param bool */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /** @return bool */
  public function getActive()
  {
    return $this->active;
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
  /** @param string */
  public function setReportingDimensionId($reportingDimensionId)
  {
    $this->reportingDimensionId = $reportingDimensionId;
  }
  /** @return string */
  public function getReportingDimensionId()
  {
    return $this->reportingDimensionId;
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

class Header extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $name;
  /** @var string */
  public $type;

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

class HttpBody extends \Google\Collection
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

class ListAccountsResponse extends \Google\Collection
{
  /** @var Account[] */
  public $accounts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accounts';
  protected $accountsType = Account::class;
  protected $accountsDataType = 'array';
  /** @param Account[] */
  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;
  }
  /** @return Account[] */
  public function getAccounts()
  {
    return $this->accounts;
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

class ListAdClientsResponse extends \Google\Collection
{
  /** @var AdClient[] */
  public $adClients;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'adClients';
  protected $adClientsType = AdClient::class;
  protected $adClientsDataType = 'array';
  /** @param AdClient[] */
  public function setAdClients($adClients)
  {
    $this->adClients = $adClients;
  }
  /** @return AdClient[] */
  public function getAdClients()
  {
    return $this->adClients;
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

class ListAlertsResponse extends \Google\Collection
{
  /** @var Alert[] */
  public $alerts;
  protected $collection_key = 'alerts';
  protected $alertsType = Alert::class;
  protected $alertsDataType = 'array';
  /** @param Alert[] */
  public function setAlerts($alerts)
  {
    $this->alerts = $alerts;
  }
  /** @return Alert[] */
  public function getAlerts()
  {
    return $this->alerts;
  }
}

class ListChildAccountsResponse extends \Google\Collection
{
  /** @var Account[] */
  public $accounts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accounts';
  protected $accountsType = Account::class;
  protected $accountsDataType = 'array';
  /** @param Account[] */
  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;
  }
  /** @return Account[] */
  public function getAccounts()
  {
    return $this->accounts;
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

class ListCustomChannelsResponse extends \Google\Collection
{
  /** @var CustomChannel[] */
  public $customChannels;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customChannels';
  protected $customChannelsType = CustomChannel::class;
  protected $customChannelsDataType = 'array';
  /** @param CustomChannel[] */
  public function setCustomChannels($customChannels)
  {
    $this->customChannels = $customChannels;
  }
  /** @return CustomChannel[] */
  public function getCustomChannels()
  {
    return $this->customChannels;
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

class ListLinkedAdUnitsResponse extends \Google\Collection
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

class ListLinkedCustomChannelsResponse extends \Google\Collection
{
  /** @var CustomChannel[] */
  public $customChannels;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customChannels';
  protected $customChannelsType = CustomChannel::class;
  protected $customChannelsDataType = 'array';
  /** @param CustomChannel[] */
  public function setCustomChannels($customChannels)
  {
    $this->customChannels = $customChannels;
  }
  /** @return CustomChannel[] */
  public function getCustomChannels()
  {
    return $this->customChannels;
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

class ListPaymentsResponse extends \Google\Collection
{
  /** @var Payment[] */
  public $payments;
  protected $collection_key = 'payments';
  protected $paymentsType = Payment::class;
  protected $paymentsDataType = 'array';
  /** @param Payment[] */
  public function setPayments($payments)
  {
    $this->payments = $payments;
  }
  /** @return Payment[] */
  public function getPayments()
  {
    return $this->payments;
  }
}

class ListSavedReportsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var SavedReport[] */
  public $savedReports;
  protected $collection_key = 'savedReports';
  protected $savedReportsType = SavedReport::class;
  protected $savedReportsDataType = 'array';
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
  /** @param SavedReport[] */
  public function setSavedReports($savedReports)
  {
    $this->savedReports = $savedReports;
  }
  /** @return SavedReport[] */
  public function getSavedReports()
  {
    return $this->savedReports;
  }
}

class ListSitesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Site[] */
  public $sites;
  protected $collection_key = 'sites';
  protected $sitesType = Site::class;
  protected $sitesDataType = 'array';
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
  /** @param Site[] */
  public function setSites($sites)
  {
    $this->sites = $sites;
  }
  /** @return Site[] */
  public function getSites()
  {
    return $this->sites;
  }
}

class ListUrlChannelsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var UrlChannel[] */
  public $urlChannels;
  protected $collection_key = 'urlChannels';
  protected $urlChannelsType = UrlChannel::class;
  protected $urlChannelsDataType = 'array';
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
  /** @param UrlChannel[] */
  public function setUrlChannels($urlChannels)
  {
    $this->urlChannels = $urlChannels;
  }
  /** @return UrlChannel[] */
  public function getUrlChannels()
  {
    return $this->urlChannels;
  }
}

class Payment extends \Google\Model
{
  /** @var string */
  public $amount;
  /** @var Date */
  public $date;
  /** @var string */
  public $name;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /** @param string */
  public function setAmount($amount)
  {
    $this->amount = $amount;
  }
  /** @return string */
  public function getAmount()
  {
    return $this->amount;
  }
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

class ReportResult extends \Google\Collection
{
  /** @var Row */
  public $averages;
  /** @var Date */
  public $endDate;
  /** @var Header[] */
  public $headers;
  /** @var Row[] */
  public $rows;
  /** @var Date */
  public $startDate;
  /** @var string */
  public $totalMatchedRows;
  /** @var Row */
  public $totals;
  /** @var string[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $averagesType = Row::class;
  protected $averagesDataType = '';
  protected $endDateType = Date::class;
  protected $endDateDataType = '';
  protected $headersType = Header::class;
  protected $headersDataType = 'array';
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';
  protected $startDateType = Date::class;
  protected $startDateDataType = '';
  protected $totalsType = Row::class;
  protected $totalsDataType = '';
  /** @param Row */
  public function setAverages(Row $averages)
  {
    $this->averages = $averages;
  }
  /** @return Row */
  public function getAverages()
  {
    return $this->averages;
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
  /** @param Header[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return Header[] */
  public function getHeaders()
  {
    return $this->headers;
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
  /** @param string */
  public function setTotalMatchedRows($totalMatchedRows)
  {
    $this->totalMatchedRows = $totalMatchedRows;
  }
  /** @return string */
  public function getTotalMatchedRows()
  {
    return $this->totalMatchedRows;
  }
  /** @param Row */
  public function setTotals(Row $totals)
  {
    $this->totals = $totals;
  }
  /** @return Row */
  public function getTotals()
  {
    return $this->totals;
  }
  /** @param string[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return string[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class Row extends \Google\Collection
{
  /** @var Cell[] */
  public $cells;
  protected $collection_key = 'cells';
  protected $cellsType = Cell::class;
  protected $cellsDataType = 'array';
  /** @param Cell[] */
  public function setCells($cells)
  {
    $this->cells = $cells;
  }
  /** @return Cell[] */
  public function getCells()
  {
    return $this->cells;
  }
}

class SavedReport extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $title;

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

class Site extends \Google\Model
{
  /** @var bool */
  public $autoAdsEnabled;
  /** @var string */
  public $domain;
  /** @var string */
  public $name;
  /** @var string */
  public $reportingDimensionId;
  /** @var string */
  public $state;

  /** @param bool */
  public function setAutoAdsEnabled($autoAdsEnabled)
  {
    $this->autoAdsEnabled = $autoAdsEnabled;
  }
  /** @return bool */
  public function getAutoAdsEnabled()
  {
    return $this->autoAdsEnabled;
  }
  /** @param string */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /** @return string */
  public function getDomain()
  {
    return $this->domain;
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
  public function setReportingDimensionId($reportingDimensionId)
  {
    $this->reportingDimensionId = $reportingDimensionId;
  }
  /** @return string */
  public function getReportingDimensionId()
  {
    return $this->reportingDimensionId;
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

class TimeZone extends \Google\Model
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

class UrlChannel extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $reportingDimensionId;
  /** @var string */
  public $uriPattern;

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
  public function setReportingDimensionId($reportingDimensionId)
  {
    $this->reportingDimensionId = $reportingDimensionId;
  }
  /** @return string */
  public function getReportingDimensionId()
  {
    return $this->reportingDimensionId;
  }
  /** @param string */
  public function setUriPattern($uriPattern)
  {
    $this->uriPattern = $uriPattern;
  }
  /** @return string */
  public function getUriPattern()
  {
    return $this->uriPattern;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Account::class, 'Google_Service_Adsense_Account');
class_alias(AdBlockingRecoveryTag::class, 'Google_Service_Adsense_AdBlockingRecoveryTag');
class_alias(AdClient::class, 'Google_Service_Adsense_AdClient');
class_alias(AdClientAdCode::class, 'Google_Service_Adsense_AdClientAdCode');
class_alias(AdUnit::class, 'Google_Service_Adsense_AdUnit');
class_alias(AdUnitAdCode::class, 'Google_Service_Adsense_AdUnitAdCode');
class_alias(AdsenseEmpty::class, 'Google_Service_Adsense_AdsenseEmpty');
class_alias(Alert::class, 'Google_Service_Adsense_Alert');
class_alias(Cell::class, 'Google_Service_Adsense_Cell');
class_alias(ContentAdsSettings::class, 'Google_Service_Adsense_ContentAdsSettings');
class_alias(CustomChannel::class, 'Google_Service_Adsense_CustomChannel');
class_alias(Date::class, 'Google_Service_Adsense_Date');
class_alias(Header::class, 'Google_Service_Adsense_Header');
class_alias(HttpBody::class, 'Google_Service_Adsense_HttpBody');
class_alias(ListAccountsResponse::class, 'Google_Service_Adsense_ListAccountsResponse');
class_alias(ListAdClientsResponse::class, 'Google_Service_Adsense_ListAdClientsResponse');
class_alias(ListAdUnitsResponse::class, 'Google_Service_Adsense_ListAdUnitsResponse');
class_alias(ListAlertsResponse::class, 'Google_Service_Adsense_ListAlertsResponse');
class_alias(ListChildAccountsResponse::class, 'Google_Service_Adsense_ListChildAccountsResponse');
class_alias(ListCustomChannelsResponse::class, 'Google_Service_Adsense_ListCustomChannelsResponse');
class_alias(ListLinkedAdUnitsResponse::class, 'Google_Service_Adsense_ListLinkedAdUnitsResponse');
class_alias(ListLinkedCustomChannelsResponse::class, 'Google_Service_Adsense_ListLinkedCustomChannelsResponse');
class_alias(ListPaymentsResponse::class, 'Google_Service_Adsense_ListPaymentsResponse');
class_alias(ListSavedReportsResponse::class, 'Google_Service_Adsense_ListSavedReportsResponse');
class_alias(ListSitesResponse::class, 'Google_Service_Adsense_ListSitesResponse');
class_alias(ListUrlChannelsResponse::class, 'Google_Service_Adsense_ListUrlChannelsResponse');
class_alias(Payment::class, 'Google_Service_Adsense_Payment');
class_alias(ReportResult::class, 'Google_Service_Adsense_ReportResult');
class_alias(Row::class, 'Google_Service_Adsense_Row');
class_alias(SavedReport::class, 'Google_Service_Adsense_SavedReport');
class_alias(Site::class, 'Google_Service_Adsense_Site');
class_alias(TimeZone::class, 'Google_Service_Adsense_TimeZone');
class_alias(UrlChannel::class, 'Google_Service_Adsense_UrlChannel');
