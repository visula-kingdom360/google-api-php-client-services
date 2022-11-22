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

namespace Google\Service\CloudBillingBudget;

class GoogleCloudBillingBudgetsV1Budget extends \Google\Collection
{
  /** @var GoogleCloudBillingBudgetsV1BudgetAmount */
  public $amount;
  /** @var GoogleCloudBillingBudgetsV1Filter */
  public $budgetFilter;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var GoogleCloudBillingBudgetsV1NotificationsRule */
  public $notificationsRule;
  /** @var GoogleCloudBillingBudgetsV1ThresholdRule[] */
  public $thresholdRules;
  protected $collection_key = 'thresholdRules';
  protected $amountType = GoogleCloudBillingBudgetsV1BudgetAmount::class;
  protected $amountDataType = '';
  protected $budgetFilterType = GoogleCloudBillingBudgetsV1Filter::class;
  protected $budgetFilterDataType = '';
  protected $notificationsRuleType = GoogleCloudBillingBudgetsV1NotificationsRule::class;
  protected $notificationsRuleDataType = '';
  protected $thresholdRulesType = GoogleCloudBillingBudgetsV1ThresholdRule::class;
  protected $thresholdRulesDataType = 'array';
  /** @param GoogleCloudBillingBudgetsV1BudgetAmount */
  public function setAmount(GoogleCloudBillingBudgetsV1BudgetAmount $amount)
  {
    $this->amount = $amount;
  }
  /** @return GoogleCloudBillingBudgetsV1BudgetAmount */
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param GoogleCloudBillingBudgetsV1Filter */
  public function setBudgetFilter(GoogleCloudBillingBudgetsV1Filter $budgetFilter)
  {
    $this->budgetFilter = $budgetFilter;
  }
  /** @return GoogleCloudBillingBudgetsV1Filter */
  public function getBudgetFilter()
  {
    return $this->budgetFilter;
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
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
  /** @param GoogleCloudBillingBudgetsV1NotificationsRule */
  public function setNotificationsRule(GoogleCloudBillingBudgetsV1NotificationsRule $notificationsRule)
  {
    $this->notificationsRule = $notificationsRule;
  }
  /** @return GoogleCloudBillingBudgetsV1NotificationsRule */
  public function getNotificationsRule()
  {
    return $this->notificationsRule;
  }
  /** @param GoogleCloudBillingBudgetsV1ThresholdRule[] */
  public function setThresholdRules($thresholdRules)
  {
    $this->thresholdRules = $thresholdRules;
  }
  /** @return GoogleCloudBillingBudgetsV1ThresholdRule[] */
  public function getThresholdRules()
  {
    return $this->thresholdRules;
  }
}

class GoogleCloudBillingBudgetsV1BudgetAmount extends \Google\Model
{
  /** @var GoogleCloudBillingBudgetsV1LastPeriodAmount */
  public $lastPeriodAmount;
  /** @var GoogleTypeMoney */
  public $specifiedAmount;
  protected $lastPeriodAmountType = GoogleCloudBillingBudgetsV1LastPeriodAmount::class;
  protected $lastPeriodAmountDataType = '';
  protected $specifiedAmountType = GoogleTypeMoney::class;
  protected $specifiedAmountDataType = '';
  /** @param GoogleCloudBillingBudgetsV1LastPeriodAmount */
  public function setLastPeriodAmount(GoogleCloudBillingBudgetsV1LastPeriodAmount $lastPeriodAmount)
  {
    $this->lastPeriodAmount = $lastPeriodAmount;
  }
  /** @return GoogleCloudBillingBudgetsV1LastPeriodAmount */
  public function getLastPeriodAmount()
  {
    return $this->lastPeriodAmount;
  }
  /** @param GoogleTypeMoney */
  public function setSpecifiedAmount(GoogleTypeMoney $specifiedAmount)
  {
    $this->specifiedAmount = $specifiedAmount;
  }
  /** @return GoogleTypeMoney */
  public function getSpecifiedAmount()
  {
    return $this->specifiedAmount;
  }
}

class GoogleCloudBillingBudgetsV1CustomPeriod extends \Google\Model
{
  /** @var GoogleTypeDate */
  public $endDate;
  /** @var GoogleTypeDate */
  public $startDate;
  protected $endDateType = GoogleTypeDate::class;
  protected $endDateDataType = '';
  protected $startDateType = GoogleTypeDate::class;
  protected $startDateDataType = '';
  /** @param GoogleTypeDate */
  public function setEndDate(GoogleTypeDate $endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return GoogleTypeDate */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param GoogleTypeDate */
  public function setStartDate(GoogleTypeDate $startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return GoogleTypeDate */
  public function getStartDate()
  {
    return $this->startDate;
  }
}

class GoogleCloudBillingBudgetsV1Filter extends \Google\Collection
{
  /** @var string */
  public $calendarPeriod;
  /** @var string[] */
  public $creditTypes;
  /** @var string */
  public $creditTypesTreatment;
  /** @var GoogleCloudBillingBudgetsV1CustomPeriod */
  public $customPeriod;
  /** @var array[] */
  public $labels;
  /** @var string[] */
  public $projects;
  /** @var string[] */
  public $services;
  /** @var string[] */
  public $subaccounts;
  protected $collection_key = 'subaccounts';
  protected $customPeriodType = GoogleCloudBillingBudgetsV1CustomPeriod::class;
  protected $customPeriodDataType = '';
  /** @param string */
  public function setCalendarPeriod($calendarPeriod)
  {
    $this->calendarPeriod = $calendarPeriod;
  }
  /** @return string */
  public function getCalendarPeriod()
  {
    return $this->calendarPeriod;
  }
  /** @param string[] */
  public function setCreditTypes($creditTypes)
  {
    $this->creditTypes = $creditTypes;
  }
  /** @return string[] */
  public function getCreditTypes()
  {
    return $this->creditTypes;
  }
  /** @param string */
  public function setCreditTypesTreatment($creditTypesTreatment)
  {
    $this->creditTypesTreatment = $creditTypesTreatment;
  }
  /** @return string */
  public function getCreditTypesTreatment()
  {
    return $this->creditTypesTreatment;
  }
  /** @param GoogleCloudBillingBudgetsV1CustomPeriod */
  public function setCustomPeriod(GoogleCloudBillingBudgetsV1CustomPeriod $customPeriod)
  {
    $this->customPeriod = $customPeriod;
  }
  /** @return GoogleCloudBillingBudgetsV1CustomPeriod */
  public function getCustomPeriod()
  {
    return $this->customPeriod;
  }
  /** @param array[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return array[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string[] */
  public function setProjects($projects)
  {
    $this->projects = $projects;
  }
  /** @return string[] */
  public function getProjects()
  {
    return $this->projects;
  }
  /** @param string[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return string[] */
  public function getServices()
  {
    return $this->services;
  }
  /** @param string[] */
  public function setSubaccounts($subaccounts)
  {
    $this->subaccounts = $subaccounts;
  }
  /** @return string[] */
  public function getSubaccounts()
  {
    return $this->subaccounts;
  }
}

class GoogleCloudBillingBudgetsV1LastPeriodAmount extends \Google\Model
{
}

class GoogleCloudBillingBudgetsV1ListBudgetsResponse extends \Google\Collection
{
  /** @var GoogleCloudBillingBudgetsV1Budget[] */
  public $budgets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'budgets';
  protected $budgetsType = GoogleCloudBillingBudgetsV1Budget::class;
  protected $budgetsDataType = 'array';
  /** @param GoogleCloudBillingBudgetsV1Budget[] */
  public function setBudgets($budgets)
  {
    $this->budgets = $budgets;
  }
  /** @return GoogleCloudBillingBudgetsV1Budget[] */
  public function getBudgets()
  {
    return $this->budgets;
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

class GoogleCloudBillingBudgetsV1NotificationsRule extends \Google\Collection
{
  /** @var bool */
  public $disableDefaultIamRecipients;
  /** @var string[] */
  public $monitoringNotificationChannels;
  /** @var string */
  public $pubsubTopic;
  /** @var string */
  public $schemaVersion;
  protected $collection_key = 'monitoringNotificationChannels';
  /** @param bool */
  public function setDisableDefaultIamRecipients($disableDefaultIamRecipients)
  {
    $this->disableDefaultIamRecipients = $disableDefaultIamRecipients;
  }
  /** @return bool */
  public function getDisableDefaultIamRecipients()
  {
    return $this->disableDefaultIamRecipients;
  }
  /** @param string[] */
  public function setMonitoringNotificationChannels($monitoringNotificationChannels)
  {
    $this->monitoringNotificationChannels = $monitoringNotificationChannels;
  }
  /** @return string[] */
  public function getMonitoringNotificationChannels()
  {
    return $this->monitoringNotificationChannels;
  }
  /** @param string */
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /** @return string */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
  /** @param string */
  public function setSchemaVersion($schemaVersion)
  {
    $this->schemaVersion = $schemaVersion;
  }
  /** @return string */
  public function getSchemaVersion()
  {
    return $this->schemaVersion;
  }
}

class GoogleCloudBillingBudgetsV1ThresholdRule extends \Google\Model
{
  /** @var string */
  public $spendBasis;
  public $thresholdPercent;

  /** @param string */
  public function setSpendBasis($spendBasis)
  {
    $this->spendBasis = $spendBasis;
  }
  /** @return string */
  public function getSpendBasis()
  {
    return $this->spendBasis;
  }
  public function setThresholdPercent($thresholdPercent)
  {
    $this->thresholdPercent = $thresholdPercent;
  }
  public function getThresholdPercent()
  {
    return $this->thresholdPercent;
  }
}

class GoogleProtobufEmpty extends \Google\Model
{
}

class GoogleTypeDate extends \Google\Model
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

class GoogleTypeMoney extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var int */
  public $nanos;
  /** @var string */
  public $units;

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
  /** @param string */
  public function setUnits($units)
  {
    $this->units = $units;
  }
  /** @return string */
  public function getUnits()
  {
    return $this->units;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudBillingBudgetsV1Budget::class, 'Google_Service_CloudBillingBudget_GoogleCloudBillingBudgetsV1Budget');
class_alias(GoogleCloudBillingBudgetsV1BudgetAmount::class, 'Google_Service_CloudBillingBudget_GoogleCloudBillingBudgetsV1BudgetAmount');
class_alias(GoogleCloudBillingBudgetsV1CustomPeriod::class, 'Google_Service_CloudBillingBudget_GoogleCloudBillingBudgetsV1CustomPeriod');
class_alias(GoogleCloudBillingBudgetsV1Filter::class, 'Google_Service_CloudBillingBudget_GoogleCloudBillingBudgetsV1Filter');
class_alias(GoogleCloudBillingBudgetsV1LastPeriodAmount::class, 'Google_Service_CloudBillingBudget_GoogleCloudBillingBudgetsV1LastPeriodAmount');
class_alias(GoogleCloudBillingBudgetsV1ListBudgetsResponse::class, 'Google_Service_CloudBillingBudget_GoogleCloudBillingBudgetsV1ListBudgetsResponse');
class_alias(GoogleCloudBillingBudgetsV1NotificationsRule::class, 'Google_Service_CloudBillingBudget_GoogleCloudBillingBudgetsV1NotificationsRule');
class_alias(GoogleCloudBillingBudgetsV1ThresholdRule::class, 'Google_Service_CloudBillingBudget_GoogleCloudBillingBudgetsV1ThresholdRule');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_CloudBillingBudget_GoogleProtobufEmpty');
class_alias(GoogleTypeDate::class, 'Google_Service_CloudBillingBudget_GoogleTypeDate');
class_alias(GoogleTypeMoney::class, 'Google_Service_CloudBillingBudget_GoogleTypeMoney');
