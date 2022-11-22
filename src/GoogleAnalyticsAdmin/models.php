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

namespace Google\Service\GoogleAnalyticsAdmin;

class GoogleAnalyticsAdminV1alphaAccessBetweenFilter extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaNumericValue */
  public $fromValue;
  /** @var GoogleAnalyticsAdminV1alphaNumericValue */
  public $toValue;
  protected $fromValueType = GoogleAnalyticsAdminV1alphaNumericValue::class;
  protected $fromValueDataType = '';
  protected $toValueType = GoogleAnalyticsAdminV1alphaNumericValue::class;
  protected $toValueDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaNumericValue */
  public function setFromValue(GoogleAnalyticsAdminV1alphaNumericValue $fromValue)
  {
    $this->fromValue = $fromValue;
  }
  /** @return GoogleAnalyticsAdminV1alphaNumericValue */
  public function getFromValue()
  {
    return $this->fromValue;
  }
  /** @param GoogleAnalyticsAdminV1alphaNumericValue */
  public function setToValue(GoogleAnalyticsAdminV1alphaNumericValue $toValue)
  {
    $this->toValue = $toValue;
  }
  /** @return GoogleAnalyticsAdminV1alphaNumericValue */
  public function getToValue()
  {
    return $this->toValue;
  }
}

class GoogleAnalyticsAdminV1alphaAccessDateRange extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccessDimension extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccessDimensionHeader extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccessDimensionValue extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccessFilter extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaAccessBetweenFilter */
  public $betweenFilter;
  /** @var string */
  public $fieldName;
  /** @var GoogleAnalyticsAdminV1alphaAccessInListFilter */
  public $inListFilter;
  /** @var GoogleAnalyticsAdminV1alphaAccessNumericFilter */
  public $numericFilter;
  /** @var GoogleAnalyticsAdminV1alphaAccessStringFilter */
  public $stringFilter;
  protected $betweenFilterType = GoogleAnalyticsAdminV1alphaAccessBetweenFilter::class;
  protected $betweenFilterDataType = '';
  protected $inListFilterType = GoogleAnalyticsAdminV1alphaAccessInListFilter::class;
  protected $inListFilterDataType = '';
  protected $numericFilterType = GoogleAnalyticsAdminV1alphaAccessNumericFilter::class;
  protected $numericFilterDataType = '';
  protected $stringFilterType = GoogleAnalyticsAdminV1alphaAccessStringFilter::class;
  protected $stringFilterDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaAccessBetweenFilter */
  public function setBetweenFilter(GoogleAnalyticsAdminV1alphaAccessBetweenFilter $betweenFilter)
  {
    $this->betweenFilter = $betweenFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessBetweenFilter */
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
  /** @param GoogleAnalyticsAdminV1alphaAccessInListFilter */
  public function setInListFilter(GoogleAnalyticsAdminV1alphaAccessInListFilter $inListFilter)
  {
    $this->inListFilter = $inListFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessInListFilter */
  public function getInListFilter()
  {
    return $this->inListFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessNumericFilter */
  public function setNumericFilter(GoogleAnalyticsAdminV1alphaAccessNumericFilter $numericFilter)
  {
    $this->numericFilter = $numericFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessNumericFilter */
  public function getNumericFilter()
  {
    return $this->numericFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessStringFilter */
  public function setStringFilter(GoogleAnalyticsAdminV1alphaAccessStringFilter $stringFilter)
  {
    $this->stringFilter = $stringFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessStringFilter */
  public function getStringFilter()
  {
    return $this->stringFilter;
  }
}

class GoogleAnalyticsAdminV1alphaAccessFilterExpression extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaAccessFilter */
  public $accessFilter;
  /** @var GoogleAnalyticsAdminV1alphaAccessFilterExpressionList */
  public $andGroup;
  /** @var GoogleAnalyticsAdminV1alphaAccessFilterExpression */
  public $notExpression;
  /** @var GoogleAnalyticsAdminV1alphaAccessFilterExpressionList */
  public $orGroup;
  protected $accessFilterType = GoogleAnalyticsAdminV1alphaAccessFilter::class;
  protected $accessFilterDataType = '';
  protected $andGroupType = GoogleAnalyticsAdminV1alphaAccessFilterExpressionList::class;
  protected $andGroupDataType = '';
  protected $notExpressionType = GoogleAnalyticsAdminV1alphaAccessFilterExpression::class;
  protected $notExpressionDataType = '';
  protected $orGroupType = GoogleAnalyticsAdminV1alphaAccessFilterExpressionList::class;
  protected $orGroupDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaAccessFilter */
  public function setAccessFilter(GoogleAnalyticsAdminV1alphaAccessFilter $accessFilter)
  {
    $this->accessFilter = $accessFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessFilter */
  public function getAccessFilter()
  {
    return $this->accessFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessFilterExpressionList */
  public function setAndGroup(GoogleAnalyticsAdminV1alphaAccessFilterExpressionList $andGroup)
  {
    $this->andGroup = $andGroup;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessFilterExpressionList */
  public function getAndGroup()
  {
    return $this->andGroup;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessFilterExpression */
  public function setNotExpression(GoogleAnalyticsAdminV1alphaAccessFilterExpression $notExpression)
  {
    $this->notExpression = $notExpression;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessFilterExpression */
  public function getNotExpression()
  {
    return $this->notExpression;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessFilterExpressionList */
  public function setOrGroup(GoogleAnalyticsAdminV1alphaAccessFilterExpressionList $orGroup)
  {
    $this->orGroup = $orGroup;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessFilterExpressionList */
  public function getOrGroup()
  {
    return $this->orGroup;
  }
}

class GoogleAnalyticsAdminV1alphaAccessFilterExpressionList extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaAccessFilterExpression[] */
  public $expressions;
  protected $collection_key = 'expressions';
  protected $expressionsType = GoogleAnalyticsAdminV1alphaAccessFilterExpression::class;
  protected $expressionsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaAccessFilterExpression[] */
  public function setExpressions($expressions)
  {
    $this->expressions = $expressions;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessFilterExpression[] */
  public function getExpressions()
  {
    return $this->expressions;
  }
}

class GoogleAnalyticsAdminV1alphaAccessInListFilter extends \Google\Collection
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

class GoogleAnalyticsAdminV1alphaAccessMetric extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccessMetricHeader extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccessMetricValue extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccessNumericFilter extends \Google\Model
{
  /** @var string */
  public $operation;
  /** @var GoogleAnalyticsAdminV1alphaNumericValue */
  public $value;
  protected $valueType = GoogleAnalyticsAdminV1alphaNumericValue::class;
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
  /** @param GoogleAnalyticsAdminV1alphaNumericValue */
  public function setValue(GoogleAnalyticsAdminV1alphaNumericValue $value)
  {
    $this->value = $value;
  }
  /** @return GoogleAnalyticsAdminV1alphaNumericValue */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleAnalyticsAdminV1alphaAccessOrderBy extends \Google\Model
{
  /** @var bool */
  public $desc;
  /** @var GoogleAnalyticsAdminV1alphaAccessOrderByDimensionOrderBy */
  public $dimension;
  /** @var GoogleAnalyticsAdminV1alphaAccessOrderByMetricOrderBy */
  public $metric;
  protected $dimensionType = GoogleAnalyticsAdminV1alphaAccessOrderByDimensionOrderBy::class;
  protected $dimensionDataType = '';
  protected $metricType = GoogleAnalyticsAdminV1alphaAccessOrderByMetricOrderBy::class;
  protected $metricDataType = '';
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
  /** @param GoogleAnalyticsAdminV1alphaAccessOrderByDimensionOrderBy */
  public function setDimension(GoogleAnalyticsAdminV1alphaAccessOrderByDimensionOrderBy $dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessOrderByDimensionOrderBy */
  public function getDimension()
  {
    return $this->dimension;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessOrderByMetricOrderBy */
  public function setMetric(GoogleAnalyticsAdminV1alphaAccessOrderByMetricOrderBy $metric)
  {
    $this->metric = $metric;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessOrderByMetricOrderBy */
  public function getMetric()
  {
    return $this->metric;
  }
}

class GoogleAnalyticsAdminV1alphaAccessOrderByDimensionOrderBy extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccessOrderByMetricOrderBy extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccessQuota extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public $concurrentRequests;
  /** @var GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public $serverErrorsPerProjectPerHour;
  /** @var GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public $tokensPerDay;
  /** @var GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public $tokensPerHour;
  /** @var GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public $tokensPerProjectPerHour;
  protected $concurrentRequestsType = GoogleAnalyticsAdminV1alphaAccessQuotaStatus::class;
  protected $concurrentRequestsDataType = '';
  protected $serverErrorsPerProjectPerHourType = GoogleAnalyticsAdminV1alphaAccessQuotaStatus::class;
  protected $serverErrorsPerProjectPerHourDataType = '';
  protected $tokensPerDayType = GoogleAnalyticsAdminV1alphaAccessQuotaStatus::class;
  protected $tokensPerDayDataType = '';
  protected $tokensPerHourType = GoogleAnalyticsAdminV1alphaAccessQuotaStatus::class;
  protected $tokensPerHourDataType = '';
  protected $tokensPerProjectPerHourType = GoogleAnalyticsAdminV1alphaAccessQuotaStatus::class;
  protected $tokensPerProjectPerHourDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public function setConcurrentRequests(GoogleAnalyticsAdminV1alphaAccessQuotaStatus $concurrentRequests)
  {
    $this->concurrentRequests = $concurrentRequests;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public function getConcurrentRequests()
  {
    return $this->concurrentRequests;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public function setServerErrorsPerProjectPerHour(GoogleAnalyticsAdminV1alphaAccessQuotaStatus $serverErrorsPerProjectPerHour)
  {
    $this->serverErrorsPerProjectPerHour = $serverErrorsPerProjectPerHour;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public function getServerErrorsPerProjectPerHour()
  {
    return $this->serverErrorsPerProjectPerHour;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public function setTokensPerDay(GoogleAnalyticsAdminV1alphaAccessQuotaStatus $tokensPerDay)
  {
    $this->tokensPerDay = $tokensPerDay;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public function getTokensPerDay()
  {
    return $this->tokensPerDay;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public function setTokensPerHour(GoogleAnalyticsAdminV1alphaAccessQuotaStatus $tokensPerHour)
  {
    $this->tokensPerHour = $tokensPerHour;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public function getTokensPerHour()
  {
    return $this->tokensPerHour;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public function setTokensPerProjectPerHour(GoogleAnalyticsAdminV1alphaAccessQuotaStatus $tokensPerProjectPerHour)
  {
    $this->tokensPerProjectPerHour = $tokensPerProjectPerHour;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessQuotaStatus */
  public function getTokensPerProjectPerHour()
  {
    return $this->tokensPerProjectPerHour;
  }
}

class GoogleAnalyticsAdminV1alphaAccessQuotaStatus extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccessRow extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaAccessDimensionValue[] */
  public $dimensionValues;
  /** @var GoogleAnalyticsAdminV1alphaAccessMetricValue[] */
  public $metricValues;
  protected $collection_key = 'metricValues';
  protected $dimensionValuesType = GoogleAnalyticsAdminV1alphaAccessDimensionValue::class;
  protected $dimensionValuesDataType = 'array';
  protected $metricValuesType = GoogleAnalyticsAdminV1alphaAccessMetricValue::class;
  protected $metricValuesDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaAccessDimensionValue[] */
  public function setDimensionValues($dimensionValues)
  {
    $this->dimensionValues = $dimensionValues;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessDimensionValue[] */
  public function getDimensionValues()
  {
    return $this->dimensionValues;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessMetricValue[] */
  public function setMetricValues($metricValues)
  {
    $this->metricValues = $metricValues;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessMetricValue[] */
  public function getMetricValues()
  {
    return $this->metricValues;
  }
}

class GoogleAnalyticsAdminV1alphaAccessStringFilter extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAccount extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $regionCode;
  /** @var string */
  public $updateTime;

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
  /** @param bool */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return bool */
  public function getDeleted()
  {
    return $this->deleted;
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
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /** @return string */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
  /** @param string */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class GoogleAnalyticsAdminV1alphaAccountSummary extends \Google\Collection
{
  /** @var string */
  public $account;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GoogleAnalyticsAdminV1alphaPropertySummary[] */
  public $propertySummaries;
  protected $collection_key = 'propertySummaries';
  protected $propertySummariesType = GoogleAnalyticsAdminV1alphaPropertySummary::class;
  protected $propertySummariesDataType = 'array';
  /** @param string */
  public function setAccount($account)
  {
    $this->account = $account;
  }
  /** @return string */
  public function getAccount()
  {
    return $this->account;
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
  /** @param GoogleAnalyticsAdminV1alphaPropertySummary[] */
  public function setPropertySummaries($propertySummaries)
  {
    $this->propertySummaries = $propertySummaries;
  }
  /** @return GoogleAnalyticsAdminV1alphaPropertySummary[] */
  public function getPropertySummaries()
  {
    return $this->propertySummaries;
  }
}

class GoogleAnalyticsAdminV1alphaAcknowledgeUserDataCollectionRequest extends \Google\Model
{
  /** @var string */
  public $acknowledgement;

  /** @param string */
  public function setAcknowledgement($acknowledgement)
  {
    $this->acknowledgement = $acknowledgement;
  }
  /** @return string */
  public function getAcknowledgement()
  {
    return $this->acknowledgement;
  }
}

class GoogleAnalyticsAdminV1alphaAcknowledgeUserDataCollectionResponse extends \Google\Model
{
}

class GoogleAnalyticsAdminV1alphaApproveDisplayVideo360AdvertiserLinkProposalRequest extends \Google\Model
{
}

class GoogleAnalyticsAdminV1alphaApproveDisplayVideo360AdvertiserLinkProposalResponse extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink */
  public $displayVideo360AdvertiserLink;
  protected $displayVideo360AdvertiserLinkType = GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink::class;
  protected $displayVideo360AdvertiserLinkDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink */
  public function setDisplayVideo360AdvertiserLink(GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink $displayVideo360AdvertiserLink)
  {
    $this->displayVideo360AdvertiserLink = $displayVideo360AdvertiserLink;
  }
  /** @return GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink */
  public function getDisplayVideo360AdvertiserLink()
  {
    return $this->displayVideo360AdvertiserLink;
  }
}

class GoogleAnalyticsAdminV1alphaArchiveAudienceRequest extends \Google\Model
{
}

class GoogleAnalyticsAdminV1alphaArchiveCustomDimensionRequest extends \Google\Model
{
}

class GoogleAnalyticsAdminV1alphaArchiveCustomMetricRequest extends \Google\Model
{
}

class GoogleAnalyticsAdminV1alphaAttributionSettings extends \Google\Model
{
  /** @var string */
  public $acquisitionConversionEventLookbackWindow;
  /** @var string */
  public $name;
  /** @var string */
  public $otherConversionEventLookbackWindow;
  /** @var string */
  public $reportingAttributionModel;

  /** @param string */
  public function setAcquisitionConversionEventLookbackWindow($acquisitionConversionEventLookbackWindow)
  {
    $this->acquisitionConversionEventLookbackWindow = $acquisitionConversionEventLookbackWindow;
  }
  /** @return string */
  public function getAcquisitionConversionEventLookbackWindow()
  {
    return $this->acquisitionConversionEventLookbackWindow;
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
  public function setOtherConversionEventLookbackWindow($otherConversionEventLookbackWindow)
  {
    $this->otherConversionEventLookbackWindow = $otherConversionEventLookbackWindow;
  }
  /** @return string */
  public function getOtherConversionEventLookbackWindow()
  {
    return $this->otherConversionEventLookbackWindow;
  }
  /** @param string */
  public function setReportingAttributionModel($reportingAttributionModel)
  {
    $this->reportingAttributionModel = $reportingAttributionModel;
  }
  /** @return string */
  public function getReportingAttributionModel()
  {
    return $this->reportingAttributionModel;
  }
}

class GoogleAnalyticsAdminV1alphaAudience extends \Google\Collection
{
  /** @var bool */
  public $adsPersonalizationEnabled;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleAnalyticsAdminV1alphaAudienceEventTrigger */
  public $eventTrigger;
  /** @var string */
  public $exclusionDurationMode;
  /** @var GoogleAnalyticsAdminV1alphaAudienceFilterClause[] */
  public $filterClauses;
  /** @var int */
  public $membershipDurationDays;
  /** @var string */
  public $name;
  protected $collection_key = 'filterClauses';
  protected $eventTriggerType = GoogleAnalyticsAdminV1alphaAudienceEventTrigger::class;
  protected $eventTriggerDataType = '';
  protected $filterClausesType = GoogleAnalyticsAdminV1alphaAudienceFilterClause::class;
  protected $filterClausesDataType = 'array';
  /** @param bool */
  public function setAdsPersonalizationEnabled($adsPersonalizationEnabled)
  {
    $this->adsPersonalizationEnabled = $adsPersonalizationEnabled;
  }
  /** @return bool */
  public function getAdsPersonalizationEnabled()
  {
    return $this->adsPersonalizationEnabled;
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceEventTrigger */
  public function setEventTrigger(GoogleAnalyticsAdminV1alphaAudienceEventTrigger $eventTrigger)
  {
    $this->eventTrigger = $eventTrigger;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceEventTrigger */
  public function getEventTrigger()
  {
    return $this->eventTrigger;
  }
  /** @param string */
  public function setExclusionDurationMode($exclusionDurationMode)
  {
    $this->exclusionDurationMode = $exclusionDurationMode;
  }
  /** @return string */
  public function getExclusionDurationMode()
  {
    return $this->exclusionDurationMode;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceFilterClause[] */
  public function setFilterClauses($filterClauses)
  {
    $this->filterClauses = $filterClauses;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceFilterClause[] */
  public function getFilterClauses()
  {
    return $this->filterClauses;
  }
  /** @param int */
  public function setMembershipDurationDays($membershipDurationDays)
  {
    $this->membershipDurationDays = $membershipDurationDays;
  }
  /** @return int */
  public function getMembershipDurationDays()
  {
    return $this->membershipDurationDays;
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

class GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilter extends \Google\Model
{
  /** @var bool */
  public $atAnyPointInTime;
  /** @var GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterBetweenFilter */
  public $betweenFilter;
  /** @var string */
  public $fieldName;
  /** @var int */
  public $inAnyNDayPeriod;
  /** @var GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterInListFilter */
  public $inListFilter;
  /** @var GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericFilter */
  public $numericFilter;
  /** @var GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterStringFilter */
  public $stringFilter;
  protected $betweenFilterType = GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterBetweenFilter::class;
  protected $betweenFilterDataType = '';
  protected $inListFilterType = GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterInListFilter::class;
  protected $inListFilterDataType = '';
  protected $numericFilterType = GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericFilter::class;
  protected $numericFilterDataType = '';
  protected $stringFilterType = GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterStringFilter::class;
  protected $stringFilterDataType = '';
  /** @param bool */
  public function setAtAnyPointInTime($atAnyPointInTime)
  {
    $this->atAnyPointInTime = $atAnyPointInTime;
  }
  /** @return bool */
  public function getAtAnyPointInTime()
  {
    return $this->atAnyPointInTime;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterBetweenFilter */
  public function setBetweenFilter(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterBetweenFilter $betweenFilter)
  {
    $this->betweenFilter = $betweenFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterBetweenFilter */
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
  /** @param int */
  public function setInAnyNDayPeriod($inAnyNDayPeriod)
  {
    $this->inAnyNDayPeriod = $inAnyNDayPeriod;
  }
  /** @return int */
  public function getInAnyNDayPeriod()
  {
    return $this->inAnyNDayPeriod;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterInListFilter */
  public function setInListFilter(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterInListFilter $inListFilter)
  {
    $this->inListFilter = $inListFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterInListFilter */
  public function getInListFilter()
  {
    return $this->inListFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericFilter */
  public function setNumericFilter(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericFilter $numericFilter)
  {
    $this->numericFilter = $numericFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericFilter */
  public function getNumericFilter()
  {
    return $this->numericFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterStringFilter */
  public function setStringFilter(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterStringFilter $stringFilter)
  {
    $this->stringFilter = $stringFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterStringFilter */
  public function getStringFilter()
  {
    return $this->stringFilter;
  }
}

class GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterBetweenFilter extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue */
  public $fromValue;
  /** @var GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue */
  public $toValue;
  protected $fromValueType = GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue::class;
  protected $fromValueDataType = '';
  protected $toValueType = GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue::class;
  protected $toValueDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue */
  public function setFromValue(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue $fromValue)
  {
    $this->fromValue = $fromValue;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue */
  public function getFromValue()
  {
    return $this->fromValue;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue */
  public function setToValue(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue $toValue)
  {
    $this->toValue = $toValue;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue */
  public function getToValue()
  {
    return $this->toValue;
  }
}

class GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterInListFilter extends \Google\Collection
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

class GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericFilter extends \Google\Model
{
  /** @var string */
  public $operation;
  /** @var GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue */
  public $value;
  protected $valueType = GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue::class;
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
  /** @param GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue */
  public function setValue(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue $value)
  {
    $this->value = $value;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterStringFilter extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaAudienceEventFilter extends \Google\Model
{
  /** @var string */
  public $eventName;
  /** @var GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public $eventParameterFilterExpression;
  protected $eventParameterFilterExpressionType = GoogleAnalyticsAdminV1alphaAudienceFilterExpression::class;
  protected $eventParameterFilterExpressionDataType = '';
  /** @param string */
  public function setEventName($eventName)
  {
    $this->eventName = $eventName;
  }
  /** @return string */
  public function getEventName()
  {
    return $this->eventName;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public function setEventParameterFilterExpression(GoogleAnalyticsAdminV1alphaAudienceFilterExpression $eventParameterFilterExpression)
  {
    $this->eventParameterFilterExpression = $eventParameterFilterExpression;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public function getEventParameterFilterExpression()
  {
    return $this->eventParameterFilterExpression;
  }
}

class GoogleAnalyticsAdminV1alphaAudienceEventTrigger extends \Google\Model
{
  /** @var string */
  public $eventName;
  /** @var string */
  public $logCondition;

  /** @param string */
  public function setEventName($eventName)
  {
    $this->eventName = $eventName;
  }
  /** @return string */
  public function getEventName()
  {
    return $this->eventName;
  }
  /** @param string */
  public function setLogCondition($logCondition)
  {
    $this->logCondition = $logCondition;
  }
  /** @return string */
  public function getLogCondition()
  {
    return $this->logCondition;
  }
}

class GoogleAnalyticsAdminV1alphaAudienceFilterClause extends \Google\Model
{
  /** @var string */
  public $clauseType;
  /** @var GoogleAnalyticsAdminV1alphaAudienceSequenceFilter */
  public $sequenceFilter;
  /** @var GoogleAnalyticsAdminV1alphaAudienceSimpleFilter */
  public $simpleFilter;
  protected $sequenceFilterType = GoogleAnalyticsAdminV1alphaAudienceSequenceFilter::class;
  protected $sequenceFilterDataType = '';
  protected $simpleFilterType = GoogleAnalyticsAdminV1alphaAudienceSimpleFilter::class;
  protected $simpleFilterDataType = '';
  /** @param string */
  public function setClauseType($clauseType)
  {
    $this->clauseType = $clauseType;
  }
  /** @return string */
  public function getClauseType()
  {
    return $this->clauseType;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceSequenceFilter */
  public function setSequenceFilter(GoogleAnalyticsAdminV1alphaAudienceSequenceFilter $sequenceFilter)
  {
    $this->sequenceFilter = $sequenceFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceSequenceFilter */
  public function getSequenceFilter()
  {
    return $this->sequenceFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceSimpleFilter */
  public function setSimpleFilter(GoogleAnalyticsAdminV1alphaAudienceSimpleFilter $simpleFilter)
  {
    $this->simpleFilter = $simpleFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceSimpleFilter */
  public function getSimpleFilter()
  {
    return $this->simpleFilter;
  }
}

class GoogleAnalyticsAdminV1alphaAudienceFilterExpression extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList */
  public $andGroup;
  /** @var GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilter */
  public $dimensionOrMetricFilter;
  /** @var GoogleAnalyticsAdminV1alphaAudienceEventFilter */
  public $eventFilter;
  /** @var GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public $notExpression;
  /** @var GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList */
  public $orGroup;
  protected $andGroupType = GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList::class;
  protected $andGroupDataType = '';
  protected $dimensionOrMetricFilterType = GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilter::class;
  protected $dimensionOrMetricFilterDataType = '';
  protected $eventFilterType = GoogleAnalyticsAdminV1alphaAudienceEventFilter::class;
  protected $eventFilterDataType = '';
  protected $notExpressionType = GoogleAnalyticsAdminV1alphaAudienceFilterExpression::class;
  protected $notExpressionDataType = '';
  protected $orGroupType = GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList::class;
  protected $orGroupDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList */
  public function setAndGroup(GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList $andGroup)
  {
    $this->andGroup = $andGroup;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList */
  public function getAndGroup()
  {
    return $this->andGroup;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilter */
  public function setDimensionOrMetricFilter(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilter $dimensionOrMetricFilter)
  {
    $this->dimensionOrMetricFilter = $dimensionOrMetricFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilter */
  public function getDimensionOrMetricFilter()
  {
    return $this->dimensionOrMetricFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceEventFilter */
  public function setEventFilter(GoogleAnalyticsAdminV1alphaAudienceEventFilter $eventFilter)
  {
    $this->eventFilter = $eventFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceEventFilter */
  public function getEventFilter()
  {
    return $this->eventFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public function setNotExpression(GoogleAnalyticsAdminV1alphaAudienceFilterExpression $notExpression)
  {
    $this->notExpression = $notExpression;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public function getNotExpression()
  {
    return $this->notExpression;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList */
  public function setOrGroup(GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList $orGroup)
  {
    $this->orGroup = $orGroup;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList */
  public function getOrGroup()
  {
    return $this->orGroup;
  }
}

class GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaAudienceFilterExpression[] */
  public $filterExpressions;
  protected $collection_key = 'filterExpressions';
  protected $filterExpressionsType = GoogleAnalyticsAdminV1alphaAudienceFilterExpression::class;
  protected $filterExpressionsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaAudienceFilterExpression[] */
  public function setFilterExpressions($filterExpressions)
  {
    $this->filterExpressions = $filterExpressions;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceFilterExpression[] */
  public function getFilterExpressions()
  {
    return $this->filterExpressions;
  }
}

class GoogleAnalyticsAdminV1alphaAudienceSequenceFilter extends \Google\Collection
{
  /** @var string */
  public $scope;
  /** @var string */
  public $sequenceMaximumDuration;
  /** @var GoogleAnalyticsAdminV1alphaAudienceSequenceFilterAudienceSequenceStep[] */
  public $sequenceSteps;
  protected $collection_key = 'sequenceSteps';
  protected $sequenceStepsType = GoogleAnalyticsAdminV1alphaAudienceSequenceFilterAudienceSequenceStep::class;
  protected $sequenceStepsDataType = 'array';
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
  /** @param string */
  public function setSequenceMaximumDuration($sequenceMaximumDuration)
  {
    $this->sequenceMaximumDuration = $sequenceMaximumDuration;
  }
  /** @return string */
  public function getSequenceMaximumDuration()
  {
    return $this->sequenceMaximumDuration;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceSequenceFilterAudienceSequenceStep[] */
  public function setSequenceSteps($sequenceSteps)
  {
    $this->sequenceSteps = $sequenceSteps;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceSequenceFilterAudienceSequenceStep[] */
  public function getSequenceSteps()
  {
    return $this->sequenceSteps;
  }
}

class GoogleAnalyticsAdminV1alphaAudienceSequenceFilterAudienceSequenceStep extends \Google\Model
{
  /** @var string */
  public $constraintDuration;
  /** @var GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public $filterExpression;
  /** @var bool */
  public $immediatelyFollows;
  /** @var string */
  public $scope;
  protected $filterExpressionType = GoogleAnalyticsAdminV1alphaAudienceFilterExpression::class;
  protected $filterExpressionDataType = '';
  /** @param string */
  public function setConstraintDuration($constraintDuration)
  {
    $this->constraintDuration = $constraintDuration;
  }
  /** @return string */
  public function getConstraintDuration()
  {
    return $this->constraintDuration;
  }
  /** @param GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public function setFilterExpression(GoogleAnalyticsAdminV1alphaAudienceFilterExpression $filterExpression)
  {
    $this->filterExpression = $filterExpression;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public function getFilterExpression()
  {
    return $this->filterExpression;
  }
  /** @param bool */
  public function setImmediatelyFollows($immediatelyFollows)
  {
    $this->immediatelyFollows = $immediatelyFollows;
  }
  /** @return bool */
  public function getImmediatelyFollows()
  {
    return $this->immediatelyFollows;
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

class GoogleAnalyticsAdminV1alphaAudienceSimpleFilter extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public $filterExpression;
  /** @var string */
  public $scope;
  protected $filterExpressionType = GoogleAnalyticsAdminV1alphaAudienceFilterExpression::class;
  protected $filterExpressionDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public function setFilterExpression(GoogleAnalyticsAdminV1alphaAudienceFilterExpression $filterExpression)
  {
    $this->filterExpression = $filterExpression;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudienceFilterExpression */
  public function getFilterExpression()
  {
    return $this->filterExpression;
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

class GoogleAnalyticsAdminV1alphaAuditUserLink extends \Google\Collection
{
  /** @var string[] */
  public $directRoles;
  /** @var string[] */
  public $effectiveRoles;
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $name;
  protected $collection_key = 'effectiveRoles';
  /** @param string[] */
  public function setDirectRoles($directRoles)
  {
    $this->directRoles = $directRoles;
  }
  /** @return string[] */
  public function getDirectRoles()
  {
    return $this->directRoles;
  }
  /** @param string[] */
  public function setEffectiveRoles($effectiveRoles)
  {
    $this->effectiveRoles = $effectiveRoles;
  }
  /** @return string[] */
  public function getEffectiveRoles()
  {
    return $this->effectiveRoles;
  }
  /** @param string */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /** @return string */
  public function getEmailAddress()
  {
    return $this->emailAddress;
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

class GoogleAnalyticsAdminV1alphaAuditUserLinksRequest extends \Google\Model
{
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;

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
}

class GoogleAnalyticsAdminV1alphaAuditUserLinksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleAnalyticsAdminV1alphaAuditUserLink[] */
  public $userLinks;
  protected $collection_key = 'userLinks';
  protected $userLinksType = GoogleAnalyticsAdminV1alphaAuditUserLink::class;
  protected $userLinksDataType = 'array';
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
  /** @param GoogleAnalyticsAdminV1alphaAuditUserLink[] */
  public function setUserLinks($userLinks)
  {
    $this->userLinks = $userLinks;
  }
  /** @return GoogleAnalyticsAdminV1alphaAuditUserLink[] */
  public function getUserLinks()
  {
    return $this->userLinks;
  }
}

class GoogleAnalyticsAdminV1alphaBatchCreateUserLinksRequest extends \Google\Collection
{
  /** @var bool */
  public $notifyNewUsers;
  /** @var GoogleAnalyticsAdminV1alphaCreateUserLinkRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = GoogleAnalyticsAdminV1alphaCreateUserLinkRequest::class;
  protected $requestsDataType = 'array';
  /** @param bool */
  public function setNotifyNewUsers($notifyNewUsers)
  {
    $this->notifyNewUsers = $notifyNewUsers;
  }
  /** @return bool */
  public function getNotifyNewUsers()
  {
    return $this->notifyNewUsers;
  }
  /** @param GoogleAnalyticsAdminV1alphaCreateUserLinkRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return GoogleAnalyticsAdminV1alphaCreateUserLinkRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class GoogleAnalyticsAdminV1alphaBatchCreateUserLinksResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaUserLink[] */
  public $userLinks;
  protected $collection_key = 'userLinks';
  protected $userLinksType = GoogleAnalyticsAdminV1alphaUserLink::class;
  protected $userLinksDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaUserLink[] */
  public function setUserLinks($userLinks)
  {
    $this->userLinks = $userLinks;
  }
  /** @return GoogleAnalyticsAdminV1alphaUserLink[] */
  public function getUserLinks()
  {
    return $this->userLinks;
  }
}

class GoogleAnalyticsAdminV1alphaBatchDeleteUserLinksRequest extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaDeleteUserLinkRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = GoogleAnalyticsAdminV1alphaDeleteUserLinkRequest::class;
  protected $requestsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaDeleteUserLinkRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return GoogleAnalyticsAdminV1alphaDeleteUserLinkRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class GoogleAnalyticsAdminV1alphaBatchGetUserLinksResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaUserLink[] */
  public $userLinks;
  protected $collection_key = 'userLinks';
  protected $userLinksType = GoogleAnalyticsAdminV1alphaUserLink::class;
  protected $userLinksDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaUserLink[] */
  public function setUserLinks($userLinks)
  {
    $this->userLinks = $userLinks;
  }
  /** @return GoogleAnalyticsAdminV1alphaUserLink[] */
  public function getUserLinks()
  {
    return $this->userLinks;
  }
}

class GoogleAnalyticsAdminV1alphaBatchUpdateUserLinksRequest extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaUpdateUserLinkRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = GoogleAnalyticsAdminV1alphaUpdateUserLinkRequest::class;
  protected $requestsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaUpdateUserLinkRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return GoogleAnalyticsAdminV1alphaUpdateUserLinkRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class GoogleAnalyticsAdminV1alphaBatchUpdateUserLinksResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaUserLink[] */
  public $userLinks;
  protected $collection_key = 'userLinks';
  protected $userLinksType = GoogleAnalyticsAdminV1alphaUserLink::class;
  protected $userLinksDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaUserLink[] */
  public function setUserLinks($userLinks)
  {
    $this->userLinks = $userLinks;
  }
  /** @return GoogleAnalyticsAdminV1alphaUserLink[] */
  public function getUserLinks()
  {
    return $this->userLinks;
  }
}

class GoogleAnalyticsAdminV1alphaCancelDisplayVideo360AdvertiserLinkProposalRequest extends \Google\Model
{
}

class GoogleAnalyticsAdminV1alphaChangeHistoryChange extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $resource;
  /** @var GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource */
  public $resourceAfterChange;
  /** @var GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource */
  public $resourceBeforeChange;
  protected $resourceAfterChangeType = GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource::class;
  protected $resourceAfterChangeDataType = '';
  protected $resourceBeforeChangeType = GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource::class;
  protected $resourceBeforeChangeDataType = '';
  /** @param string */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /** @return string */
  public function getAction()
  {
    return $this->action;
  }
  /** @param string */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource */
  public function setResourceAfterChange(GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource $resourceAfterChange)
  {
    $this->resourceAfterChange = $resourceAfterChange;
  }
  /** @return GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource */
  public function getResourceAfterChange()
  {
    return $this->resourceAfterChange;
  }
  /** @param GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource */
  public function setResourceBeforeChange(GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource $resourceBeforeChange)
  {
    $this->resourceBeforeChange = $resourceBeforeChange;
  }
  /** @return GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource */
  public function getResourceBeforeChange()
  {
    return $this->resourceBeforeChange;
  }
}

class GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaAccount */
  public $account;
  /** @var GoogleAnalyticsAdminV1alphaAttributionSettings */
  public $attributionSettings;
  /** @var GoogleAnalyticsAdminV1alphaConversionEvent */
  public $conversionEvent;
  /** @var GoogleAnalyticsAdminV1alphaCustomDimension */
  public $customDimension;
  /** @var GoogleAnalyticsAdminV1alphaCustomMetric */
  public $customMetric;
  /** @var GoogleAnalyticsAdminV1alphaDataRetentionSettings */
  public $dataRetentionSettings;
  /** @var GoogleAnalyticsAdminV1alphaDataStream */
  public $dataStream;
  /** @var GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink */
  public $displayVideo360AdvertiserLink;
  /** @var GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal */
  public $displayVideo360AdvertiserLinkProposal;
  /** @var GoogleAnalyticsAdminV1alphaExpandedDataSet */
  public $expandedDataSet;
  /** @var GoogleAnalyticsAdminV1alphaFirebaseLink */
  public $firebaseLink;
  /** @var GoogleAnalyticsAdminV1alphaGoogleAdsLink */
  public $googleAdsLink;
  /** @var GoogleAnalyticsAdminV1alphaGoogleSignalsSettings */
  public $googleSignalsSettings;
  /** @var GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret */
  public $measurementProtocolSecret;
  /** @var GoogleAnalyticsAdminV1alphaProperty */
  public $property;
  /** @var GoogleAnalyticsAdminV1alphaSearchAds360Link */
  public $searchAds360Link;
  protected $accountType = GoogleAnalyticsAdminV1alphaAccount::class;
  protected $accountDataType = '';
  protected $attributionSettingsType = GoogleAnalyticsAdminV1alphaAttributionSettings::class;
  protected $attributionSettingsDataType = '';
  protected $conversionEventType = GoogleAnalyticsAdminV1alphaConversionEvent::class;
  protected $conversionEventDataType = '';
  protected $customDimensionType = GoogleAnalyticsAdminV1alphaCustomDimension::class;
  protected $customDimensionDataType = '';
  protected $customMetricType = GoogleAnalyticsAdminV1alphaCustomMetric::class;
  protected $customMetricDataType = '';
  protected $dataRetentionSettingsType = GoogleAnalyticsAdminV1alphaDataRetentionSettings::class;
  protected $dataRetentionSettingsDataType = '';
  protected $dataStreamType = GoogleAnalyticsAdminV1alphaDataStream::class;
  protected $dataStreamDataType = '';
  protected $displayVideo360AdvertiserLinkType = GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink::class;
  protected $displayVideo360AdvertiserLinkDataType = '';
  protected $displayVideo360AdvertiserLinkProposalType = GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal::class;
  protected $displayVideo360AdvertiserLinkProposalDataType = '';
  protected $expandedDataSetType = GoogleAnalyticsAdminV1alphaExpandedDataSet::class;
  protected $expandedDataSetDataType = '';
  protected $firebaseLinkType = GoogleAnalyticsAdminV1alphaFirebaseLink::class;
  protected $firebaseLinkDataType = '';
  protected $googleAdsLinkType = GoogleAnalyticsAdminV1alphaGoogleAdsLink::class;
  protected $googleAdsLinkDataType = '';
  protected $googleSignalsSettingsType = GoogleAnalyticsAdminV1alphaGoogleSignalsSettings::class;
  protected $googleSignalsSettingsDataType = '';
  protected $measurementProtocolSecretType = GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret::class;
  protected $measurementProtocolSecretDataType = '';
  protected $propertyType = GoogleAnalyticsAdminV1alphaProperty::class;
  protected $propertyDataType = '';
  protected $searchAds360LinkType = GoogleAnalyticsAdminV1alphaSearchAds360Link::class;
  protected $searchAds360LinkDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaAccount */
  public function setAccount(GoogleAnalyticsAdminV1alphaAccount $account)
  {
    $this->account = $account;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccount */
  public function getAccount()
  {
    return $this->account;
  }
  /** @param GoogleAnalyticsAdminV1alphaAttributionSettings */
  public function setAttributionSettings(GoogleAnalyticsAdminV1alphaAttributionSettings $attributionSettings)
  {
    $this->attributionSettings = $attributionSettings;
  }
  /** @return GoogleAnalyticsAdminV1alphaAttributionSettings */
  public function getAttributionSettings()
  {
    return $this->attributionSettings;
  }
  /** @param GoogleAnalyticsAdminV1alphaConversionEvent */
  public function setConversionEvent(GoogleAnalyticsAdminV1alphaConversionEvent $conversionEvent)
  {
    $this->conversionEvent = $conversionEvent;
  }
  /** @return GoogleAnalyticsAdminV1alphaConversionEvent */
  public function getConversionEvent()
  {
    return $this->conversionEvent;
  }
  /** @param GoogleAnalyticsAdminV1alphaCustomDimension */
  public function setCustomDimension(GoogleAnalyticsAdminV1alphaCustomDimension $customDimension)
  {
    $this->customDimension = $customDimension;
  }
  /** @return GoogleAnalyticsAdminV1alphaCustomDimension */
  public function getCustomDimension()
  {
    return $this->customDimension;
  }
  /** @param GoogleAnalyticsAdminV1alphaCustomMetric */
  public function setCustomMetric(GoogleAnalyticsAdminV1alphaCustomMetric $customMetric)
  {
    $this->customMetric = $customMetric;
  }
  /** @return GoogleAnalyticsAdminV1alphaCustomMetric */
  public function getCustomMetric()
  {
    return $this->customMetric;
  }
  /** @param GoogleAnalyticsAdminV1alphaDataRetentionSettings */
  public function setDataRetentionSettings(GoogleAnalyticsAdminV1alphaDataRetentionSettings $dataRetentionSettings)
  {
    $this->dataRetentionSettings = $dataRetentionSettings;
  }
  /** @return GoogleAnalyticsAdminV1alphaDataRetentionSettings */
  public function getDataRetentionSettings()
  {
    return $this->dataRetentionSettings;
  }
  /** @param GoogleAnalyticsAdminV1alphaDataStream */
  public function setDataStream(GoogleAnalyticsAdminV1alphaDataStream $dataStream)
  {
    $this->dataStream = $dataStream;
  }
  /** @return GoogleAnalyticsAdminV1alphaDataStream */
  public function getDataStream()
  {
    return $this->dataStream;
  }
  /** @param GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink */
  public function setDisplayVideo360AdvertiserLink(GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink $displayVideo360AdvertiserLink)
  {
    $this->displayVideo360AdvertiserLink = $displayVideo360AdvertiserLink;
  }
  /** @return GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink */
  public function getDisplayVideo360AdvertiserLink()
  {
    return $this->displayVideo360AdvertiserLink;
  }
  /** @param GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal */
  public function setDisplayVideo360AdvertiserLinkProposal(GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal $displayVideo360AdvertiserLinkProposal)
  {
    $this->displayVideo360AdvertiserLinkProposal = $displayVideo360AdvertiserLinkProposal;
  }
  /** @return GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal */
  public function getDisplayVideo360AdvertiserLinkProposal()
  {
    return $this->displayVideo360AdvertiserLinkProposal;
  }
  /** @param GoogleAnalyticsAdminV1alphaExpandedDataSet */
  public function setExpandedDataSet(GoogleAnalyticsAdminV1alphaExpandedDataSet $expandedDataSet)
  {
    $this->expandedDataSet = $expandedDataSet;
  }
  /** @return GoogleAnalyticsAdminV1alphaExpandedDataSet */
  public function getExpandedDataSet()
  {
    return $this->expandedDataSet;
  }
  /** @param GoogleAnalyticsAdminV1alphaFirebaseLink */
  public function setFirebaseLink(GoogleAnalyticsAdminV1alphaFirebaseLink $firebaseLink)
  {
    $this->firebaseLink = $firebaseLink;
  }
  /** @return GoogleAnalyticsAdminV1alphaFirebaseLink */
  public function getFirebaseLink()
  {
    return $this->firebaseLink;
  }
  /** @param GoogleAnalyticsAdminV1alphaGoogleAdsLink */
  public function setGoogleAdsLink(GoogleAnalyticsAdminV1alphaGoogleAdsLink $googleAdsLink)
  {
    $this->googleAdsLink = $googleAdsLink;
  }
  /** @return GoogleAnalyticsAdminV1alphaGoogleAdsLink */
  public function getGoogleAdsLink()
  {
    return $this->googleAdsLink;
  }
  /** @param GoogleAnalyticsAdminV1alphaGoogleSignalsSettings */
  public function setGoogleSignalsSettings(GoogleAnalyticsAdminV1alphaGoogleSignalsSettings $googleSignalsSettings)
  {
    $this->googleSignalsSettings = $googleSignalsSettings;
  }
  /** @return GoogleAnalyticsAdminV1alphaGoogleSignalsSettings */
  public function getGoogleSignalsSettings()
  {
    return $this->googleSignalsSettings;
  }
  /** @param GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret */
  public function setMeasurementProtocolSecret(GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret $measurementProtocolSecret)
  {
    $this->measurementProtocolSecret = $measurementProtocolSecret;
  }
  /** @return GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret */
  public function getMeasurementProtocolSecret()
  {
    return $this->measurementProtocolSecret;
  }
  /** @param GoogleAnalyticsAdminV1alphaProperty */
  public function setProperty(GoogleAnalyticsAdminV1alphaProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleAnalyticsAdminV1alphaProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param GoogleAnalyticsAdminV1alphaSearchAds360Link */
  public function setSearchAds360Link(GoogleAnalyticsAdminV1alphaSearchAds360Link $searchAds360Link)
  {
    $this->searchAds360Link = $searchAds360Link;
  }
  /** @return GoogleAnalyticsAdminV1alphaSearchAds360Link */
  public function getSearchAds360Link()
  {
    return $this->searchAds360Link;
  }
}

class GoogleAnalyticsAdminV1alphaChangeHistoryEvent extends \Google\Collection
{
  /** @var string */
  public $actorType;
  /** @var string */
  public $changeTime;
  /** @var GoogleAnalyticsAdminV1alphaChangeHistoryChange[] */
  public $changes;
  /** @var bool */
  public $changesFiltered;
  /** @var string */
  public $id;
  /** @var string */
  public $userActorEmail;
  protected $collection_key = 'changes';
  protected $changesType = GoogleAnalyticsAdminV1alphaChangeHistoryChange::class;
  protected $changesDataType = 'array';
  /** @param string */
  public function setActorType($actorType)
  {
    $this->actorType = $actorType;
  }
  /** @return string */
  public function getActorType()
  {
    return $this->actorType;
  }
  /** @param string */
  public function setChangeTime($changeTime)
  {
    $this->changeTime = $changeTime;
  }
  /** @return string */
  public function getChangeTime()
  {
    return $this->changeTime;
  }
  /** @param GoogleAnalyticsAdminV1alphaChangeHistoryChange[] */
  public function setChanges($changes)
  {
    $this->changes = $changes;
  }
  /** @return GoogleAnalyticsAdminV1alphaChangeHistoryChange[] */
  public function getChanges()
  {
    return $this->changes;
  }
  /** @param bool */
  public function setChangesFiltered($changesFiltered)
  {
    $this->changesFiltered = $changesFiltered;
  }
  /** @return bool */
  public function getChangesFiltered()
  {
    return $this->changesFiltered;
  }
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
  public function setUserActorEmail($userActorEmail)
  {
    $this->userActorEmail = $userActorEmail;
  }
  /** @return string */
  public function getUserActorEmail()
  {
    return $this->userActorEmail;
  }
}

class GoogleAnalyticsAdminV1alphaConversionEvent extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var bool */
  public $custom;
  /** @var bool */
  public $deletable;
  /** @var string */
  public $eventName;
  /** @var string */
  public $name;

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
  /** @param bool */
  public function setCustom($custom)
  {
    $this->custom = $custom;
  }
  /** @return bool */
  public function getCustom()
  {
    return $this->custom;
  }
  /** @param bool */
  public function setDeletable($deletable)
  {
    $this->deletable = $deletable;
  }
  /** @return bool */
  public function getDeletable()
  {
    return $this->deletable;
  }
  /** @param string */
  public function setEventName($eventName)
  {
    $this->eventName = $eventName;
  }
  /** @return string */
  public function getEventName()
  {
    return $this->eventName;
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

class GoogleAnalyticsAdminV1alphaCreateUserLinkRequest extends \Google\Model
{
  /** @var bool */
  public $notifyNewUser;
  /** @var string */
  public $parent;
  /** @var GoogleAnalyticsAdminV1alphaUserLink */
  public $userLink;
  protected $userLinkType = GoogleAnalyticsAdminV1alphaUserLink::class;
  protected $userLinkDataType = '';
  /** @param bool */
  public function setNotifyNewUser($notifyNewUser)
  {
    $this->notifyNewUser = $notifyNewUser;
  }
  /** @return bool */
  public function getNotifyNewUser()
  {
    return $this->notifyNewUser;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param GoogleAnalyticsAdminV1alphaUserLink */
  public function setUserLink(GoogleAnalyticsAdminV1alphaUserLink $userLink)
  {
    $this->userLink = $userLink;
  }
  /** @return GoogleAnalyticsAdminV1alphaUserLink */
  public function getUserLink()
  {
    return $this->userLink;
  }
}

class GoogleAnalyticsAdminV1alphaCustomDimension extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var bool */
  public $disallowAdsPersonalization;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $parameterName;
  /** @var string */
  public $scope;

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
  /** @param bool */
  public function setDisallowAdsPersonalization($disallowAdsPersonalization)
  {
    $this->disallowAdsPersonalization = $disallowAdsPersonalization;
  }
  /** @return bool */
  public function getDisallowAdsPersonalization()
  {
    return $this->disallowAdsPersonalization;
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
  public function setParameterName($parameterName)
  {
    $this->parameterName = $parameterName;
  }
  /** @return string */
  public function getParameterName()
  {
    return $this->parameterName;
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

class GoogleAnalyticsAdminV1alphaCustomMetric extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $measurementUnit;
  /** @var string */
  public $name;
  /** @var string */
  public $parameterName;
  /** @var string[] */
  public $restrictedMetricType;
  /** @var string */
  public $scope;
  protected $collection_key = 'restrictedMetricType';
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
  public function setMeasurementUnit($measurementUnit)
  {
    $this->measurementUnit = $measurementUnit;
  }
  /** @return string */
  public function getMeasurementUnit()
  {
    return $this->measurementUnit;
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
  public function setParameterName($parameterName)
  {
    $this->parameterName = $parameterName;
  }
  /** @return string */
  public function getParameterName()
  {
    return $this->parameterName;
  }
  /** @param string[] */
  public function setRestrictedMetricType($restrictedMetricType)
  {
    $this->restrictedMetricType = $restrictedMetricType;
  }
  /** @return string[] */
  public function getRestrictedMetricType()
  {
    return $this->restrictedMetricType;
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

class GoogleAnalyticsAdminV1alphaDataRetentionSettings extends \Google\Model
{
  /** @var string */
  public $eventDataRetention;
  /** @var string */
  public $name;
  /** @var bool */
  public $resetUserDataOnNewActivity;

  /** @param string */
  public function setEventDataRetention($eventDataRetention)
  {
    $this->eventDataRetention = $eventDataRetention;
  }
  /** @return string */
  public function getEventDataRetention()
  {
    return $this->eventDataRetention;
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
  /** @param bool */
  public function setResetUserDataOnNewActivity($resetUserDataOnNewActivity)
  {
    $this->resetUserDataOnNewActivity = $resetUserDataOnNewActivity;
  }
  /** @return bool */
  public function getResetUserDataOnNewActivity()
  {
    return $this->resetUserDataOnNewActivity;
  }
}

class GoogleAnalyticsAdminV1alphaDataSharingSettings extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var bool */
  public $sharingWithGoogleAnySalesEnabled;
  /** @var bool */
  public $sharingWithGoogleAssignedSalesEnabled;
  /** @var bool */
  public $sharingWithGoogleProductsEnabled;
  /** @var bool */
  public $sharingWithGoogleSupportEnabled;
  /** @var bool */
  public $sharingWithOthersEnabled;

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
  /** @param bool */
  public function setSharingWithGoogleAnySalesEnabled($sharingWithGoogleAnySalesEnabled)
  {
    $this->sharingWithGoogleAnySalesEnabled = $sharingWithGoogleAnySalesEnabled;
  }
  /** @return bool */
  public function getSharingWithGoogleAnySalesEnabled()
  {
    return $this->sharingWithGoogleAnySalesEnabled;
  }
  /** @param bool */
  public function setSharingWithGoogleAssignedSalesEnabled($sharingWithGoogleAssignedSalesEnabled)
  {
    $this->sharingWithGoogleAssignedSalesEnabled = $sharingWithGoogleAssignedSalesEnabled;
  }
  /** @return bool */
  public function getSharingWithGoogleAssignedSalesEnabled()
  {
    return $this->sharingWithGoogleAssignedSalesEnabled;
  }
  /** @param bool */
  public function setSharingWithGoogleProductsEnabled($sharingWithGoogleProductsEnabled)
  {
    $this->sharingWithGoogleProductsEnabled = $sharingWithGoogleProductsEnabled;
  }
  /** @return bool */
  public function getSharingWithGoogleProductsEnabled()
  {
    return $this->sharingWithGoogleProductsEnabled;
  }
  /** @param bool */
  public function setSharingWithGoogleSupportEnabled($sharingWithGoogleSupportEnabled)
  {
    $this->sharingWithGoogleSupportEnabled = $sharingWithGoogleSupportEnabled;
  }
  /** @return bool */
  public function getSharingWithGoogleSupportEnabled()
  {
    return $this->sharingWithGoogleSupportEnabled;
  }
  /** @param bool */
  public function setSharingWithOthersEnabled($sharingWithOthersEnabled)
  {
    $this->sharingWithOthersEnabled = $sharingWithOthersEnabled;
  }
  /** @return bool */
  public function getSharingWithOthersEnabled()
  {
    return $this->sharingWithOthersEnabled;
  }
}

class GoogleAnalyticsAdminV1alphaDataStream extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaDataStreamAndroidAppStreamData */
  public $androidAppStreamData;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var GoogleAnalyticsAdminV1alphaDataStreamIosAppStreamData */
  public $iosAppStreamData;
  /** @var string */
  public $name;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  /** @var GoogleAnalyticsAdminV1alphaDataStreamWebStreamData */
  public $webStreamData;
  protected $androidAppStreamDataType = GoogleAnalyticsAdminV1alphaDataStreamAndroidAppStreamData::class;
  protected $androidAppStreamDataDataType = '';
  protected $iosAppStreamDataType = GoogleAnalyticsAdminV1alphaDataStreamIosAppStreamData::class;
  protected $iosAppStreamDataDataType = '';
  protected $webStreamDataType = GoogleAnalyticsAdminV1alphaDataStreamWebStreamData::class;
  protected $webStreamDataDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaDataStreamAndroidAppStreamData */
  public function setAndroidAppStreamData(GoogleAnalyticsAdminV1alphaDataStreamAndroidAppStreamData $androidAppStreamData)
  {
    $this->androidAppStreamData = $androidAppStreamData;
  }
  /** @return GoogleAnalyticsAdminV1alphaDataStreamAndroidAppStreamData */
  public function getAndroidAppStreamData()
  {
    return $this->androidAppStreamData;
  }
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
  /** @param GoogleAnalyticsAdminV1alphaDataStreamIosAppStreamData */
  public function setIosAppStreamData(GoogleAnalyticsAdminV1alphaDataStreamIosAppStreamData $iosAppStreamData)
  {
    $this->iosAppStreamData = $iosAppStreamData;
  }
  /** @return GoogleAnalyticsAdminV1alphaDataStreamIosAppStreamData */
  public function getIosAppStreamData()
  {
    return $this->iosAppStreamData;
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
  /** @param string */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /** @param GoogleAnalyticsAdminV1alphaDataStreamWebStreamData */
  public function setWebStreamData(GoogleAnalyticsAdminV1alphaDataStreamWebStreamData $webStreamData)
  {
    $this->webStreamData = $webStreamData;
  }
  /** @return GoogleAnalyticsAdminV1alphaDataStreamWebStreamData */
  public function getWebStreamData()
  {
    return $this->webStreamData;
  }
}

class GoogleAnalyticsAdminV1alphaDataStreamAndroidAppStreamData extends \Google\Model
{
  /** @var string */
  public $firebaseAppId;
  /** @var string */
  public $packageName;

  /** @param string */
  public function setFirebaseAppId($firebaseAppId)
  {
    $this->firebaseAppId = $firebaseAppId;
  }
  /** @return string */
  public function getFirebaseAppId()
  {
    return $this->firebaseAppId;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
}

class GoogleAnalyticsAdminV1alphaDataStreamIosAppStreamData extends \Google\Model
{
  /** @var string */
  public $bundleId;
  /** @var string */
  public $firebaseAppId;

  /** @param string */
  public function setBundleId($bundleId)
  {
    $this->bundleId = $bundleId;
  }
  /** @return string */
  public function getBundleId()
  {
    return $this->bundleId;
  }
  /** @param string */
  public function setFirebaseAppId($firebaseAppId)
  {
    $this->firebaseAppId = $firebaseAppId;
  }
  /** @return string */
  public function getFirebaseAppId()
  {
    return $this->firebaseAppId;
  }
}

class GoogleAnalyticsAdminV1alphaDataStreamWebStreamData extends \Google\Model
{
  /** @var string */
  public $defaultUri;
  /** @var string */
  public $firebaseAppId;
  /** @var string */
  public $measurementId;

  /** @param string */
  public function setDefaultUri($defaultUri)
  {
    $this->defaultUri = $defaultUri;
  }
  /** @return string */
  public function getDefaultUri()
  {
    return $this->defaultUri;
  }
  /** @param string */
  public function setFirebaseAppId($firebaseAppId)
  {
    $this->firebaseAppId = $firebaseAppId;
  }
  /** @return string */
  public function getFirebaseAppId()
  {
    return $this->firebaseAppId;
  }
  /** @param string */
  public function setMeasurementId($measurementId)
  {
    $this->measurementId = $measurementId;
  }
  /** @return string */
  public function getMeasurementId()
  {
    return $this->measurementId;
  }
}

class GoogleAnalyticsAdminV1alphaDeleteUserLinkRequest extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink extends \Google\Model
{
  /** @var bool */
  public $adsPersonalizationEnabled;
  /** @var string */
  public $advertiserDisplayName;
  /** @var string */
  public $advertiserId;
  /** @var bool */
  public $campaignDataSharingEnabled;
  /** @var bool */
  public $costDataSharingEnabled;
  /** @var string */
  public $name;

  /** @param bool */
  public function setAdsPersonalizationEnabled($adsPersonalizationEnabled)
  {
    $this->adsPersonalizationEnabled = $adsPersonalizationEnabled;
  }
  /** @return bool */
  public function getAdsPersonalizationEnabled()
  {
    return $this->adsPersonalizationEnabled;
  }
  /** @param string */
  public function setAdvertiserDisplayName($advertiserDisplayName)
  {
    $this->advertiserDisplayName = $advertiserDisplayName;
  }
  /** @return string */
  public function getAdvertiserDisplayName()
  {
    return $this->advertiserDisplayName;
  }
  /** @param string */
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param bool */
  public function setCampaignDataSharingEnabled($campaignDataSharingEnabled)
  {
    $this->campaignDataSharingEnabled = $campaignDataSharingEnabled;
  }
  /** @return bool */
  public function getCampaignDataSharingEnabled()
  {
    return $this->campaignDataSharingEnabled;
  }
  /** @param bool */
  public function setCostDataSharingEnabled($costDataSharingEnabled)
  {
    $this->costDataSharingEnabled = $costDataSharingEnabled;
  }
  /** @return bool */
  public function getCostDataSharingEnabled()
  {
    return $this->costDataSharingEnabled;
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

class GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal extends \Google\Model
{
  /** @var bool */
  public $adsPersonalizationEnabled;
  /** @var string */
  public $advertiserDisplayName;
  /** @var string */
  public $advertiserId;
  /** @var bool */
  public $campaignDataSharingEnabled;
  /** @var bool */
  public $costDataSharingEnabled;
  /** @var GoogleAnalyticsAdminV1alphaLinkProposalStatusDetails */
  public $linkProposalStatusDetails;
  /** @var string */
  public $name;
  /** @var string */
  public $validationEmail;
  protected $linkProposalStatusDetailsType = GoogleAnalyticsAdminV1alphaLinkProposalStatusDetails::class;
  protected $linkProposalStatusDetailsDataType = '';
  /** @param bool */
  public function setAdsPersonalizationEnabled($adsPersonalizationEnabled)
  {
    $this->adsPersonalizationEnabled = $adsPersonalizationEnabled;
  }
  /** @return bool */
  public function getAdsPersonalizationEnabled()
  {
    return $this->adsPersonalizationEnabled;
  }
  /** @param string */
  public function setAdvertiserDisplayName($advertiserDisplayName)
  {
    $this->advertiserDisplayName = $advertiserDisplayName;
  }
  /** @return string */
  public function getAdvertiserDisplayName()
  {
    return $this->advertiserDisplayName;
  }
  /** @param string */
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param bool */
  public function setCampaignDataSharingEnabled($campaignDataSharingEnabled)
  {
    $this->campaignDataSharingEnabled = $campaignDataSharingEnabled;
  }
  /** @return bool */
  public function getCampaignDataSharingEnabled()
  {
    return $this->campaignDataSharingEnabled;
  }
  /** @param bool */
  public function setCostDataSharingEnabled($costDataSharingEnabled)
  {
    $this->costDataSharingEnabled = $costDataSharingEnabled;
  }
  /** @return bool */
  public function getCostDataSharingEnabled()
  {
    return $this->costDataSharingEnabled;
  }
  /** @param GoogleAnalyticsAdminV1alphaLinkProposalStatusDetails */
  public function setLinkProposalStatusDetails(GoogleAnalyticsAdminV1alphaLinkProposalStatusDetails $linkProposalStatusDetails)
  {
    $this->linkProposalStatusDetails = $linkProposalStatusDetails;
  }
  /** @return GoogleAnalyticsAdminV1alphaLinkProposalStatusDetails */
  public function getLinkProposalStatusDetails()
  {
    return $this->linkProposalStatusDetails;
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
  public function setValidationEmail($validationEmail)
  {
    $this->validationEmail = $validationEmail;
  }
  /** @return string */
  public function getValidationEmail()
  {
    return $this->validationEmail;
  }
}

class GoogleAnalyticsAdminV1alphaExpandedDataSet extends \Google\Collection
{
  /** @var string */
  public $dataCollectionStartTime;
  /** @var string */
  public $description;
  /** @var GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression */
  public $dimensionFilterExpression;
  /** @var string[] */
  public $dimensionNames;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $metricNames;
  /** @var string */
  public $name;
  protected $collection_key = 'metricNames';
  protected $dimensionFilterExpressionType = GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression::class;
  protected $dimensionFilterExpressionDataType = '';
  /** @param string */
  public function setDataCollectionStartTime($dataCollectionStartTime)
  {
    $this->dataCollectionStartTime = $dataCollectionStartTime;
  }
  /** @return string */
  public function getDataCollectionStartTime()
  {
    return $this->dataCollectionStartTime;
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
  /** @param GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression */
  public function setDimensionFilterExpression(GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression $dimensionFilterExpression)
  {
    $this->dimensionFilterExpression = $dimensionFilterExpression;
  }
  /** @return GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression */
  public function getDimensionFilterExpression()
  {
    return $this->dimensionFilterExpression;
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
  /** @param string[] */
  public function setMetricNames($metricNames)
  {
    $this->metricNames = $metricNames;
  }
  /** @return string[] */
  public function getMetricNames()
  {
    return $this->metricNames;
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

class GoogleAnalyticsAdminV1alphaExpandedDataSetFilter extends \Google\Model
{
  /** @var string */
  public $fieldName;
  /** @var GoogleAnalyticsAdminV1alphaExpandedDataSetFilterInListFilter */
  public $inListFilter;
  /** @var GoogleAnalyticsAdminV1alphaExpandedDataSetFilterStringFilter */
  public $stringFilter;
  protected $inListFilterType = GoogleAnalyticsAdminV1alphaExpandedDataSetFilterInListFilter::class;
  protected $inListFilterDataType = '';
  protected $stringFilterType = GoogleAnalyticsAdminV1alphaExpandedDataSetFilterStringFilter::class;
  protected $stringFilterDataType = '';
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
  /** @param GoogleAnalyticsAdminV1alphaExpandedDataSetFilterInListFilter */
  public function setInListFilter(GoogleAnalyticsAdminV1alphaExpandedDataSetFilterInListFilter $inListFilter)
  {
    $this->inListFilter = $inListFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaExpandedDataSetFilterInListFilter */
  public function getInListFilter()
  {
    return $this->inListFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaExpandedDataSetFilterStringFilter */
  public function setStringFilter(GoogleAnalyticsAdminV1alphaExpandedDataSetFilterStringFilter $stringFilter)
  {
    $this->stringFilter = $stringFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaExpandedDataSetFilterStringFilter */
  public function getStringFilter()
  {
    return $this->stringFilter;
  }
}

class GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpressionList */
  public $andGroup;
  /** @var GoogleAnalyticsAdminV1alphaExpandedDataSetFilter */
  public $filter;
  /** @var GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression */
  public $notExpression;
  protected $andGroupType = GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpressionList::class;
  protected $andGroupDataType = '';
  protected $filterType = GoogleAnalyticsAdminV1alphaExpandedDataSetFilter::class;
  protected $filterDataType = '';
  protected $notExpressionType = GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression::class;
  protected $notExpressionDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpressionList */
  public function setAndGroup(GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpressionList $andGroup)
  {
    $this->andGroup = $andGroup;
  }
  /** @return GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpressionList */
  public function getAndGroup()
  {
    return $this->andGroup;
  }
  /** @param GoogleAnalyticsAdminV1alphaExpandedDataSetFilter */
  public function setFilter(GoogleAnalyticsAdminV1alphaExpandedDataSetFilter $filter)
  {
    $this->filter = $filter;
  }
  /** @return GoogleAnalyticsAdminV1alphaExpandedDataSetFilter */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression */
  public function setNotExpression(GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression $notExpression)
  {
    $this->notExpression = $notExpression;
  }
  /** @return GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression */
  public function getNotExpression()
  {
    return $this->notExpression;
  }
}

class GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpressionList extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression[] */
  public $filterExpressions;
  protected $collection_key = 'filterExpressions';
  protected $filterExpressionsType = GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression::class;
  protected $filterExpressionsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression[] */
  public function setFilterExpressions($filterExpressions)
  {
    $this->filterExpressions = $filterExpressions;
  }
  /** @return GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression[] */
  public function getFilterExpressions()
  {
    return $this->filterExpressions;
  }
}

class GoogleAnalyticsAdminV1alphaExpandedDataSetFilterInListFilter extends \Google\Collection
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

class GoogleAnalyticsAdminV1alphaExpandedDataSetFilterStringFilter extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaFirebaseLink extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $project;

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
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
}

class GoogleAnalyticsAdminV1alphaGlobalSiteTag extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $snippet;

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
  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return string */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class GoogleAnalyticsAdminV1alphaGoogleAdsLink extends \Google\Model
{
  /** @var bool */
  public $adsPersonalizationEnabled;
  /** @var bool */
  public $canManageClients;
  /** @var string */
  public $createTime;
  /** @var string */
  public $creatorEmailAddress;
  /** @var string */
  public $customerId;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;

  /** @param bool */
  public function setAdsPersonalizationEnabled($adsPersonalizationEnabled)
  {
    $this->adsPersonalizationEnabled = $adsPersonalizationEnabled;
  }
  /** @return bool */
  public function getAdsPersonalizationEnabled()
  {
    return $this->adsPersonalizationEnabled;
  }
  /** @param bool */
  public function setCanManageClients($canManageClients)
  {
    $this->canManageClients = $canManageClients;
  }
  /** @return bool */
  public function getCanManageClients()
  {
    return $this->canManageClients;
  }
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
  public function setCreatorEmailAddress($creatorEmailAddress)
  {
    $this->creatorEmailAddress = $creatorEmailAddress;
  }
  /** @return string */
  public function getCreatorEmailAddress()
  {
    return $this->creatorEmailAddress;
  }
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class GoogleAnalyticsAdminV1alphaGoogleSignalsSettings extends \Google\Model
{
  /** @var string */
  public $consent;
  /** @var string */
  public $name;
  /** @var string */
  public $state;

  /** @param string */
  public function setConsent($consent)
  {
    $this->consent = $consent;
  }
  /** @return string */
  public function getConsent()
  {
    return $this->consent;
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

class GoogleAnalyticsAdminV1alphaLinkProposalStatusDetails extends \Google\Model
{
  /** @var string */
  public $linkProposalInitiatingProduct;
  /** @var string */
  public $linkProposalState;
  /** @var string */
  public $requestorEmail;

  /** @param string */
  public function setLinkProposalInitiatingProduct($linkProposalInitiatingProduct)
  {
    $this->linkProposalInitiatingProduct = $linkProposalInitiatingProduct;
  }
  /** @return string */
  public function getLinkProposalInitiatingProduct()
  {
    return $this->linkProposalInitiatingProduct;
  }
  /** @param string */
  public function setLinkProposalState($linkProposalState)
  {
    $this->linkProposalState = $linkProposalState;
  }
  /** @return string */
  public function getLinkProposalState()
  {
    return $this->linkProposalState;
  }
  /** @param string */
  public function setRequestorEmail($requestorEmail)
  {
    $this->requestorEmail = $requestorEmail;
  }
  /** @return string */
  public function getRequestorEmail()
  {
    return $this->requestorEmail;
  }
}

class GoogleAnalyticsAdminV1alphaListAccountSummariesResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaAccountSummary[] */
  public $accountSummaries;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accountSummaries';
  protected $accountSummariesType = GoogleAnalyticsAdminV1alphaAccountSummary::class;
  protected $accountSummariesDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaAccountSummary[] */
  public function setAccountSummaries($accountSummaries)
  {
    $this->accountSummaries = $accountSummaries;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccountSummary[] */
  public function getAccountSummaries()
  {
    return $this->accountSummaries;
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

class GoogleAnalyticsAdminV1alphaListAccountsResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaAccount[] */
  public $accounts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accounts';
  protected $accountsType = GoogleAnalyticsAdminV1alphaAccount::class;
  protected $accountsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaAccount[] */
  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccount[] */
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

class GoogleAnalyticsAdminV1alphaListAudiencesResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaAudience[] */
  public $audiences;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'audiences';
  protected $audiencesType = GoogleAnalyticsAdminV1alphaAudience::class;
  protected $audiencesDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaAudience[] */
  public function setAudiences($audiences)
  {
    $this->audiences = $audiences;
  }
  /** @return GoogleAnalyticsAdminV1alphaAudience[] */
  public function getAudiences()
  {
    return $this->audiences;
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

class GoogleAnalyticsAdminV1alphaListConversionEventsResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaConversionEvent[] */
  public $conversionEvents;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'conversionEvents';
  protected $conversionEventsType = GoogleAnalyticsAdminV1alphaConversionEvent::class;
  protected $conversionEventsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaConversionEvent[] */
  public function setConversionEvents($conversionEvents)
  {
    $this->conversionEvents = $conversionEvents;
  }
  /** @return GoogleAnalyticsAdminV1alphaConversionEvent[] */
  public function getConversionEvents()
  {
    return $this->conversionEvents;
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

class GoogleAnalyticsAdminV1alphaListCustomDimensionsResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaCustomDimension[] */
  public $customDimensions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customDimensions';
  protected $customDimensionsType = GoogleAnalyticsAdminV1alphaCustomDimension::class;
  protected $customDimensionsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaCustomDimension[] */
  public function setCustomDimensions($customDimensions)
  {
    $this->customDimensions = $customDimensions;
  }
  /** @return GoogleAnalyticsAdminV1alphaCustomDimension[] */
  public function getCustomDimensions()
  {
    return $this->customDimensions;
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

class GoogleAnalyticsAdminV1alphaListCustomMetricsResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaCustomMetric[] */
  public $customMetrics;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customMetrics';
  protected $customMetricsType = GoogleAnalyticsAdminV1alphaCustomMetric::class;
  protected $customMetricsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaCustomMetric[] */
  public function setCustomMetrics($customMetrics)
  {
    $this->customMetrics = $customMetrics;
  }
  /** @return GoogleAnalyticsAdminV1alphaCustomMetric[] */
  public function getCustomMetrics()
  {
    return $this->customMetrics;
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

class GoogleAnalyticsAdminV1alphaListDataStreamsResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaDataStream[] */
  public $dataStreams;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dataStreams';
  protected $dataStreamsType = GoogleAnalyticsAdminV1alphaDataStream::class;
  protected $dataStreamsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaDataStream[] */
  public function setDataStreams($dataStreams)
  {
    $this->dataStreams = $dataStreams;
  }
  /** @return GoogleAnalyticsAdminV1alphaDataStream[] */
  public function getDataStreams()
  {
    return $this->dataStreams;
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

class GoogleAnalyticsAdminV1alphaListDisplayVideo360AdvertiserLinkProposalsResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal[] */
  public $displayVideo360AdvertiserLinkProposals;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'displayVideo360AdvertiserLinkProposals';
  protected $displayVideo360AdvertiserLinkProposalsType = GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal::class;
  protected $displayVideo360AdvertiserLinkProposalsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal[] */
  public function setDisplayVideo360AdvertiserLinkProposals($displayVideo360AdvertiserLinkProposals)
  {
    $this->displayVideo360AdvertiserLinkProposals = $displayVideo360AdvertiserLinkProposals;
  }
  /** @return GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal[] */
  public function getDisplayVideo360AdvertiserLinkProposals()
  {
    return $this->displayVideo360AdvertiserLinkProposals;
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

class GoogleAnalyticsAdminV1alphaListDisplayVideo360AdvertiserLinksResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink[] */
  public $displayVideo360AdvertiserLinks;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'displayVideo360AdvertiserLinks';
  protected $displayVideo360AdvertiserLinksType = GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink::class;
  protected $displayVideo360AdvertiserLinksDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink[] */
  public function setDisplayVideo360AdvertiserLinks($displayVideo360AdvertiserLinks)
  {
    $this->displayVideo360AdvertiserLinks = $displayVideo360AdvertiserLinks;
  }
  /** @return GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink[] */
  public function getDisplayVideo360AdvertiserLinks()
  {
    return $this->displayVideo360AdvertiserLinks;
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

class GoogleAnalyticsAdminV1alphaListFirebaseLinksResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaFirebaseLink[] */
  public $firebaseLinks;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'firebaseLinks';
  protected $firebaseLinksType = GoogleAnalyticsAdminV1alphaFirebaseLink::class;
  protected $firebaseLinksDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaFirebaseLink[] */
  public function setFirebaseLinks($firebaseLinks)
  {
    $this->firebaseLinks = $firebaseLinks;
  }
  /** @return GoogleAnalyticsAdminV1alphaFirebaseLink[] */
  public function getFirebaseLinks()
  {
    return $this->firebaseLinks;
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

class GoogleAnalyticsAdminV1alphaListGoogleAdsLinksResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaGoogleAdsLink[] */
  public $googleAdsLinks;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'googleAdsLinks';
  protected $googleAdsLinksType = GoogleAnalyticsAdminV1alphaGoogleAdsLink::class;
  protected $googleAdsLinksDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaGoogleAdsLink[] */
  public function setGoogleAdsLinks($googleAdsLinks)
  {
    $this->googleAdsLinks = $googleAdsLinks;
  }
  /** @return GoogleAnalyticsAdminV1alphaGoogleAdsLink[] */
  public function getGoogleAdsLinks()
  {
    return $this->googleAdsLinks;
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

class GoogleAnalyticsAdminV1alphaListMeasurementProtocolSecretsResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret[] */
  public $measurementProtocolSecrets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'measurementProtocolSecrets';
  protected $measurementProtocolSecretsType = GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret::class;
  protected $measurementProtocolSecretsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret[] */
  public function setMeasurementProtocolSecrets($measurementProtocolSecrets)
  {
    $this->measurementProtocolSecrets = $measurementProtocolSecrets;
  }
  /** @return GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret[] */
  public function getMeasurementProtocolSecrets()
  {
    return $this->measurementProtocolSecrets;
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

class GoogleAnalyticsAdminV1alphaListPropertiesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleAnalyticsAdminV1alphaProperty[] */
  public $properties;
  protected $collection_key = 'properties';
  protected $propertiesType = GoogleAnalyticsAdminV1alphaProperty::class;
  protected $propertiesDataType = 'array';
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
  /** @param GoogleAnalyticsAdminV1alphaProperty[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleAnalyticsAdminV1alphaProperty[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class GoogleAnalyticsAdminV1alphaListSearchAds360LinksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleAnalyticsAdminV1alphaSearchAds360Link[] */
  public $searchAds360Links;
  protected $collection_key = 'searchAds360Links';
  protected $searchAds360LinksType = GoogleAnalyticsAdminV1alphaSearchAds360Link::class;
  protected $searchAds360LinksDataType = 'array';
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
  /** @param GoogleAnalyticsAdminV1alphaSearchAds360Link[] */
  public function setSearchAds360Links($searchAds360Links)
  {
    $this->searchAds360Links = $searchAds360Links;
  }
  /** @return GoogleAnalyticsAdminV1alphaSearchAds360Link[] */
  public function getSearchAds360Links()
  {
    return $this->searchAds360Links;
  }
}

class GoogleAnalyticsAdminV1alphaListUserLinksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleAnalyticsAdminV1alphaUserLink[] */
  public $userLinks;
  protected $collection_key = 'userLinks';
  protected $userLinksType = GoogleAnalyticsAdminV1alphaUserLink::class;
  protected $userLinksDataType = 'array';
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
  /** @param GoogleAnalyticsAdminV1alphaUserLink[] */
  public function setUserLinks($userLinks)
  {
    $this->userLinks = $userLinks;
  }
  /** @return GoogleAnalyticsAdminV1alphaUserLink[] */
  public function getUserLinks()
  {
    return $this->userLinks;
  }
}

class GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $secretValue;

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
  public function setSecretValue($secretValue)
  {
    $this->secretValue = $secretValue;
  }
  /** @return string */
  public function getSecretValue()
  {
    return $this->secretValue;
  }
}

class GoogleAnalyticsAdminV1alphaNumericValue extends \Google\Model
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

class GoogleAnalyticsAdminV1alphaProperty extends \Google\Model
{
  /** @var string */
  public $account;
  /** @var string */
  public $createTime;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $industryCategory;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string */
  public $propertyType;
  /** @var string */
  public $serviceLevel;
  /** @var string */
  public $timeZone;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setAccount($account)
  {
    $this->account = $account;
  }
  /** @return string */
  public function getAccount()
  {
    return $this->account;
  }
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
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
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
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /** @param string */
  public function setIndustryCategory($industryCategory)
  {
    $this->industryCategory = $industryCategory;
  }
  /** @return string */
  public function getIndustryCategory()
  {
    return $this->industryCategory;
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string */
  public function setPropertyType($propertyType)
  {
    $this->propertyType = $propertyType;
  }
  /** @return string */
  public function getPropertyType()
  {
    return $this->propertyType;
  }
  /** @param string */
  public function setServiceLevel($serviceLevel)
  {
    $this->serviceLevel = $serviceLevel;
  }
  /** @return string */
  public function getServiceLevel()
  {
    return $this->serviceLevel;
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
  /** @param string */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class GoogleAnalyticsAdminV1alphaPropertySummary extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $parent;
  /** @var string */
  public $property;
  /** @var string */
  public $propertyType;

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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
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
  /** @param string */
  public function setPropertyType($propertyType)
  {
    $this->propertyType = $propertyType;
  }
  /** @return string */
  public function getPropertyType()
  {
    return $this->propertyType;
  }
}

class GoogleAnalyticsAdminV1alphaProvisionAccountTicketRequest extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaAccount */
  public $account;
  /** @var string */
  public $redirectUri;
  protected $accountType = GoogleAnalyticsAdminV1alphaAccount::class;
  protected $accountDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaAccount */
  public function setAccount(GoogleAnalyticsAdminV1alphaAccount $account)
  {
    $this->account = $account;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccount */
  public function getAccount()
  {
    return $this->account;
  }
  /** @param string */
  public function setRedirectUri($redirectUri)
  {
    $this->redirectUri = $redirectUri;
  }
  /** @return string */
  public function getRedirectUri()
  {
    return $this->redirectUri;
  }
}

class GoogleAnalyticsAdminV1alphaProvisionAccountTicketResponse extends \Google\Model
{
  /** @var string */
  public $accountTicketId;

  /** @param string */
  public function setAccountTicketId($accountTicketId)
  {
    $this->accountTicketId = $accountTicketId;
  }
  /** @return string */
  public function getAccountTicketId()
  {
    return $this->accountTicketId;
  }
}

class GoogleAnalyticsAdminV1alphaRunAccessReportRequest extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaAccessDateRange[] */
  public $dateRanges;
  /** @var GoogleAnalyticsAdminV1alphaAccessFilterExpression */
  public $dimensionFilter;
  /** @var GoogleAnalyticsAdminV1alphaAccessDimension[] */
  public $dimensions;
  /** @var string */
  public $limit;
  /** @var GoogleAnalyticsAdminV1alphaAccessFilterExpression */
  public $metricFilter;
  /** @var GoogleAnalyticsAdminV1alphaAccessMetric[] */
  public $metrics;
  /** @var string */
  public $offset;
  /** @var GoogleAnalyticsAdminV1alphaAccessOrderBy[] */
  public $orderBys;
  /** @var bool */
  public $returnEntityQuota;
  /** @var string */
  public $timeZone;
  protected $collection_key = 'orderBys';
  protected $dateRangesType = GoogleAnalyticsAdminV1alphaAccessDateRange::class;
  protected $dateRangesDataType = 'array';
  protected $dimensionFilterType = GoogleAnalyticsAdminV1alphaAccessFilterExpression::class;
  protected $dimensionFilterDataType = '';
  protected $dimensionsType = GoogleAnalyticsAdminV1alphaAccessDimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricFilterType = GoogleAnalyticsAdminV1alphaAccessFilterExpression::class;
  protected $metricFilterDataType = '';
  protected $metricsType = GoogleAnalyticsAdminV1alphaAccessMetric::class;
  protected $metricsDataType = 'array';
  protected $orderBysType = GoogleAnalyticsAdminV1alphaAccessOrderBy::class;
  protected $orderBysDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaAccessDateRange[] */
  public function setDateRanges($dateRanges)
  {
    $this->dateRanges = $dateRanges;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessDateRange[] */
  public function getDateRanges()
  {
    return $this->dateRanges;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessFilterExpression */
  public function setDimensionFilter(GoogleAnalyticsAdminV1alphaAccessFilterExpression $dimensionFilter)
  {
    $this->dimensionFilter = $dimensionFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessFilterExpression */
  public function getDimensionFilter()
  {
    return $this->dimensionFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessDimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessDimension[] */
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
  /** @param GoogleAnalyticsAdminV1alphaAccessFilterExpression */
  public function setMetricFilter(GoogleAnalyticsAdminV1alphaAccessFilterExpression $metricFilter)
  {
    $this->metricFilter = $metricFilter;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessFilterExpression */
  public function getMetricFilter()
  {
    return $this->metricFilter;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessMetric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessMetric[] */
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
  /** @param GoogleAnalyticsAdminV1alphaAccessOrderBy[] */
  public function setOrderBys($orderBys)
  {
    $this->orderBys = $orderBys;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessOrderBy[] */
  public function getOrderBys()
  {
    return $this->orderBys;
  }
  /** @param bool */
  public function setReturnEntityQuota($returnEntityQuota)
  {
    $this->returnEntityQuota = $returnEntityQuota;
  }
  /** @return bool */
  public function getReturnEntityQuota()
  {
    return $this->returnEntityQuota;
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

class GoogleAnalyticsAdminV1alphaRunAccessReportResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaAccessDimensionHeader[] */
  public $dimensionHeaders;
  /** @var GoogleAnalyticsAdminV1alphaAccessMetricHeader[] */
  public $metricHeaders;
  /** @var GoogleAnalyticsAdminV1alphaAccessQuota */
  public $quota;
  /** @var int */
  public $rowCount;
  /** @var GoogleAnalyticsAdminV1alphaAccessRow[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $dimensionHeadersType = GoogleAnalyticsAdminV1alphaAccessDimensionHeader::class;
  protected $dimensionHeadersDataType = 'array';
  protected $metricHeadersType = GoogleAnalyticsAdminV1alphaAccessMetricHeader::class;
  protected $metricHeadersDataType = 'array';
  protected $quotaType = GoogleAnalyticsAdminV1alphaAccessQuota::class;
  protected $quotaDataType = '';
  protected $rowsType = GoogleAnalyticsAdminV1alphaAccessRow::class;
  protected $rowsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaAccessDimensionHeader[] */
  public function setDimensionHeaders($dimensionHeaders)
  {
    $this->dimensionHeaders = $dimensionHeaders;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessDimensionHeader[] */
  public function getDimensionHeaders()
  {
    return $this->dimensionHeaders;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessMetricHeader[] */
  public function setMetricHeaders($metricHeaders)
  {
    $this->metricHeaders = $metricHeaders;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessMetricHeader[] */
  public function getMetricHeaders()
  {
    return $this->metricHeaders;
  }
  /** @param GoogleAnalyticsAdminV1alphaAccessQuota */
  public function setQuota(GoogleAnalyticsAdminV1alphaAccessQuota $quota)
  {
    $this->quota = $quota;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessQuota */
  public function getQuota()
  {
    return $this->quota;
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
  /** @param GoogleAnalyticsAdminV1alphaAccessRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return GoogleAnalyticsAdminV1alphaAccessRow[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class GoogleAnalyticsAdminV1alphaSearchAds360Link extends \Google\Model
{
  /** @var bool */
  public $adsPersonalizationEnabled;
  /** @var string */
  public $advertiserDisplayName;
  /** @var string */
  public $advertiserId;
  /** @var bool */
  public $campaignDataSharingEnabled;
  /** @var bool */
  public $costDataSharingEnabled;
  /** @var string */
  public $name;
  /** @var bool */
  public $siteStatsSharingEnabled;

  /** @param bool */
  public function setAdsPersonalizationEnabled($adsPersonalizationEnabled)
  {
    $this->adsPersonalizationEnabled = $adsPersonalizationEnabled;
  }
  /** @return bool */
  public function getAdsPersonalizationEnabled()
  {
    return $this->adsPersonalizationEnabled;
  }
  /** @param string */
  public function setAdvertiserDisplayName($advertiserDisplayName)
  {
    $this->advertiserDisplayName = $advertiserDisplayName;
  }
  /** @return string */
  public function getAdvertiserDisplayName()
  {
    return $this->advertiserDisplayName;
  }
  /** @param string */
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param bool */
  public function setCampaignDataSharingEnabled($campaignDataSharingEnabled)
  {
    $this->campaignDataSharingEnabled = $campaignDataSharingEnabled;
  }
  /** @return bool */
  public function getCampaignDataSharingEnabled()
  {
    return $this->campaignDataSharingEnabled;
  }
  /** @param bool */
  public function setCostDataSharingEnabled($costDataSharingEnabled)
  {
    $this->costDataSharingEnabled = $costDataSharingEnabled;
  }
  /** @return bool */
  public function getCostDataSharingEnabled()
  {
    return $this->costDataSharingEnabled;
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
  /** @param bool */
  public function setSiteStatsSharingEnabled($siteStatsSharingEnabled)
  {
    $this->siteStatsSharingEnabled = $siteStatsSharingEnabled;
  }
  /** @return bool */
  public function getSiteStatsSharingEnabled()
  {
    return $this->siteStatsSharingEnabled;
  }
}

class GoogleAnalyticsAdminV1alphaSearchChangeHistoryEventsRequest extends \Google\Collection
{
  /** @var string[] */
  public $action;
  /** @var string[] */
  public $actorEmail;
  /** @var string */
  public $earliestChangeTime;
  /** @var string */
  public $latestChangeTime;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $property;
  /** @var string[] */
  public $resourceType;
  protected $collection_key = 'resourceType';
  /** @param string[] */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /** @return string[] */
  public function getAction()
  {
    return $this->action;
  }
  /** @param string[] */
  public function setActorEmail($actorEmail)
  {
    $this->actorEmail = $actorEmail;
  }
  /** @return string[] */
  public function getActorEmail()
  {
    return $this->actorEmail;
  }
  /** @param string */
  public function setEarliestChangeTime($earliestChangeTime)
  {
    $this->earliestChangeTime = $earliestChangeTime;
  }
  /** @return string */
  public function getEarliestChangeTime()
  {
    return $this->earliestChangeTime;
  }
  /** @param string */
  public function setLatestChangeTime($latestChangeTime)
  {
    $this->latestChangeTime = $latestChangeTime;
  }
  /** @return string */
  public function getLatestChangeTime()
  {
    return $this->latestChangeTime;
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
  /** @param string[] */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string[] */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

class GoogleAnalyticsAdminV1alphaSearchChangeHistoryEventsResponse extends \Google\Collection
{
  /** @var GoogleAnalyticsAdminV1alphaChangeHistoryEvent[] */
  public $changeHistoryEvents;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'changeHistoryEvents';
  protected $changeHistoryEventsType = GoogleAnalyticsAdminV1alphaChangeHistoryEvent::class;
  protected $changeHistoryEventsDataType = 'array';
  /** @param GoogleAnalyticsAdminV1alphaChangeHistoryEvent[] */
  public function setChangeHistoryEvents($changeHistoryEvents)
  {
    $this->changeHistoryEvents = $changeHistoryEvents;
  }
  /** @return GoogleAnalyticsAdminV1alphaChangeHistoryEvent[] */
  public function getChangeHistoryEvents()
  {
    return $this->changeHistoryEvents;
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

class GoogleAnalyticsAdminV1alphaUpdateUserLinkRequest extends \Google\Model
{
  /** @var GoogleAnalyticsAdminV1alphaUserLink */
  public $userLink;
  protected $userLinkType = GoogleAnalyticsAdminV1alphaUserLink::class;
  protected $userLinkDataType = '';
  /** @param GoogleAnalyticsAdminV1alphaUserLink */
  public function setUserLink(GoogleAnalyticsAdminV1alphaUserLink $userLink)
  {
    $this->userLink = $userLink;
  }
  /** @return GoogleAnalyticsAdminV1alphaUserLink */
  public function getUserLink()
  {
    return $this->userLink;
  }
}

class GoogleAnalyticsAdminV1alphaUserLink extends \Google\Collection
{
  /** @var string[] */
  public $directRoles;
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $name;
  protected $collection_key = 'directRoles';
  /** @param string[] */
  public function setDirectRoles($directRoles)
  {
    $this->directRoles = $directRoles;
  }
  /** @return string[] */
  public function getDirectRoles()
  {
    return $this->directRoles;
  }
  /** @param string */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /** @return string */
  public function getEmailAddress()
  {
    return $this->emailAddress;
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

class GoogleProtobufEmpty extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAnalyticsAdminV1alphaAccessBetweenFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessBetweenFilter');
class_alias(GoogleAnalyticsAdminV1alphaAccessDateRange::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessDateRange');
class_alias(GoogleAnalyticsAdminV1alphaAccessDimension::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessDimension');
class_alias(GoogleAnalyticsAdminV1alphaAccessDimensionHeader::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessDimensionHeader');
class_alias(GoogleAnalyticsAdminV1alphaAccessDimensionValue::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessDimensionValue');
class_alias(GoogleAnalyticsAdminV1alphaAccessFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessFilter');
class_alias(GoogleAnalyticsAdminV1alphaAccessFilterExpression::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessFilterExpression');
class_alias(GoogleAnalyticsAdminV1alphaAccessFilterExpressionList::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessFilterExpressionList');
class_alias(GoogleAnalyticsAdminV1alphaAccessInListFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessInListFilter');
class_alias(GoogleAnalyticsAdminV1alphaAccessMetric::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessMetric');
class_alias(GoogleAnalyticsAdminV1alphaAccessMetricHeader::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessMetricHeader');
class_alias(GoogleAnalyticsAdminV1alphaAccessMetricValue::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessMetricValue');
class_alias(GoogleAnalyticsAdminV1alphaAccessNumericFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessNumericFilter');
class_alias(GoogleAnalyticsAdminV1alphaAccessOrderBy::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessOrderBy');
class_alias(GoogleAnalyticsAdminV1alphaAccessOrderByDimensionOrderBy::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessOrderByDimensionOrderBy');
class_alias(GoogleAnalyticsAdminV1alphaAccessOrderByMetricOrderBy::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessOrderByMetricOrderBy');
class_alias(GoogleAnalyticsAdminV1alphaAccessQuota::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessQuota');
class_alias(GoogleAnalyticsAdminV1alphaAccessQuotaStatus::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessQuotaStatus');
class_alias(GoogleAnalyticsAdminV1alphaAccessRow::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessRow');
class_alias(GoogleAnalyticsAdminV1alphaAccessStringFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccessStringFilter');
class_alias(GoogleAnalyticsAdminV1alphaAccount::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccount');
class_alias(GoogleAnalyticsAdminV1alphaAccountSummary::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAccountSummary');
class_alias(GoogleAnalyticsAdminV1alphaAcknowledgeUserDataCollectionRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAcknowledgeUserDataCollectionRequest');
class_alias(GoogleAnalyticsAdminV1alphaAcknowledgeUserDataCollectionResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAcknowledgeUserDataCollectionResponse');
class_alias(GoogleAnalyticsAdminV1alphaApproveDisplayVideo360AdvertiserLinkProposalRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaApproveDisplayVideo360AdvertiserLinkProposalRequest');
class_alias(GoogleAnalyticsAdminV1alphaApproveDisplayVideo360AdvertiserLinkProposalResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaApproveDisplayVideo360AdvertiserLinkProposalResponse');
class_alias(GoogleAnalyticsAdminV1alphaArchiveAudienceRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaArchiveAudienceRequest');
class_alias(GoogleAnalyticsAdminV1alphaArchiveCustomDimensionRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaArchiveCustomDimensionRequest');
class_alias(GoogleAnalyticsAdminV1alphaArchiveCustomMetricRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaArchiveCustomMetricRequest');
class_alias(GoogleAnalyticsAdminV1alphaAttributionSettings::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAttributionSettings');
class_alias(GoogleAnalyticsAdminV1alphaAudience::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudience');
class_alias(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilter');
class_alias(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterBetweenFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterBetweenFilter');
class_alias(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterInListFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterInListFilter');
class_alias(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericFilter');
class_alias(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterNumericValue');
class_alias(GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterStringFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceDimensionOrMetricFilterStringFilter');
class_alias(GoogleAnalyticsAdminV1alphaAudienceEventFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceEventFilter');
class_alias(GoogleAnalyticsAdminV1alphaAudienceEventTrigger::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceEventTrigger');
class_alias(GoogleAnalyticsAdminV1alphaAudienceFilterClause::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceFilterClause');
class_alias(GoogleAnalyticsAdminV1alphaAudienceFilterExpression::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceFilterExpression');
class_alias(GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceFilterExpressionList');
class_alias(GoogleAnalyticsAdminV1alphaAudienceSequenceFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceSequenceFilter');
class_alias(GoogleAnalyticsAdminV1alphaAudienceSequenceFilterAudienceSequenceStep::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceSequenceFilterAudienceSequenceStep');
class_alias(GoogleAnalyticsAdminV1alphaAudienceSimpleFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAudienceSimpleFilter');
class_alias(GoogleAnalyticsAdminV1alphaAuditUserLink::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAuditUserLink');
class_alias(GoogleAnalyticsAdminV1alphaAuditUserLinksRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAuditUserLinksRequest');
class_alias(GoogleAnalyticsAdminV1alphaAuditUserLinksResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAuditUserLinksResponse');
class_alias(GoogleAnalyticsAdminV1alphaBatchCreateUserLinksRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchCreateUserLinksRequest');
class_alias(GoogleAnalyticsAdminV1alphaBatchCreateUserLinksResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchCreateUserLinksResponse');
class_alias(GoogleAnalyticsAdminV1alphaBatchDeleteUserLinksRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchDeleteUserLinksRequest');
class_alias(GoogleAnalyticsAdminV1alphaBatchGetUserLinksResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchGetUserLinksResponse');
class_alias(GoogleAnalyticsAdminV1alphaBatchUpdateUserLinksRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchUpdateUserLinksRequest');
class_alias(GoogleAnalyticsAdminV1alphaBatchUpdateUserLinksResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchUpdateUserLinksResponse');
class_alias(GoogleAnalyticsAdminV1alphaCancelDisplayVideo360AdvertiserLinkProposalRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaCancelDisplayVideo360AdvertiserLinkProposalRequest');
class_alias(GoogleAnalyticsAdminV1alphaChangeHistoryChange::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaChangeHistoryChange');
class_alias(GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaChangeHistoryChangeChangeHistoryResource');
class_alias(GoogleAnalyticsAdminV1alphaChangeHistoryEvent::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaChangeHistoryEvent');
class_alias(GoogleAnalyticsAdminV1alphaConversionEvent::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaConversionEvent');
class_alias(GoogleAnalyticsAdminV1alphaCreateUserLinkRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaCreateUserLinkRequest');
class_alias(GoogleAnalyticsAdminV1alphaCustomDimension::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaCustomDimension');
class_alias(GoogleAnalyticsAdminV1alphaCustomMetric::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaCustomMetric');
class_alias(GoogleAnalyticsAdminV1alphaDataRetentionSettings::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaDataRetentionSettings');
class_alias(GoogleAnalyticsAdminV1alphaDataSharingSettings::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaDataSharingSettings');
class_alias(GoogleAnalyticsAdminV1alphaDataStream::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaDataStream');
class_alias(GoogleAnalyticsAdminV1alphaDataStreamAndroidAppStreamData::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaDataStreamAndroidAppStreamData');
class_alias(GoogleAnalyticsAdminV1alphaDataStreamIosAppStreamData::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaDataStreamIosAppStreamData');
class_alias(GoogleAnalyticsAdminV1alphaDataStreamWebStreamData::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaDataStreamWebStreamData');
class_alias(GoogleAnalyticsAdminV1alphaDeleteUserLinkRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaDeleteUserLinkRequest');
class_alias(GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLink');
class_alias(GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaDisplayVideo360AdvertiserLinkProposal');
class_alias(GoogleAnalyticsAdminV1alphaExpandedDataSet::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaExpandedDataSet');
class_alias(GoogleAnalyticsAdminV1alphaExpandedDataSetFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaExpandedDataSetFilter');
class_alias(GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpression');
class_alias(GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpressionList::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaExpandedDataSetFilterExpressionList');
class_alias(GoogleAnalyticsAdminV1alphaExpandedDataSetFilterInListFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaExpandedDataSetFilterInListFilter');
class_alias(GoogleAnalyticsAdminV1alphaExpandedDataSetFilterStringFilter::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaExpandedDataSetFilterStringFilter');
class_alias(GoogleAnalyticsAdminV1alphaFirebaseLink::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaFirebaseLink');
class_alias(GoogleAnalyticsAdminV1alphaGlobalSiteTag::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaGlobalSiteTag');
class_alias(GoogleAnalyticsAdminV1alphaGoogleAdsLink::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaGoogleAdsLink');
class_alias(GoogleAnalyticsAdminV1alphaGoogleSignalsSettings::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaGoogleSignalsSettings');
class_alias(GoogleAnalyticsAdminV1alphaLinkProposalStatusDetails::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaLinkProposalStatusDetails');
class_alias(GoogleAnalyticsAdminV1alphaListAccountSummariesResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListAccountSummariesResponse');
class_alias(GoogleAnalyticsAdminV1alphaListAccountsResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListAccountsResponse');
class_alias(GoogleAnalyticsAdminV1alphaListAudiencesResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListAudiencesResponse');
class_alias(GoogleAnalyticsAdminV1alphaListConversionEventsResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListConversionEventsResponse');
class_alias(GoogleAnalyticsAdminV1alphaListCustomDimensionsResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListCustomDimensionsResponse');
class_alias(GoogleAnalyticsAdminV1alphaListCustomMetricsResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListCustomMetricsResponse');
class_alias(GoogleAnalyticsAdminV1alphaListDataStreamsResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListDataStreamsResponse');
class_alias(GoogleAnalyticsAdminV1alphaListDisplayVideo360AdvertiserLinkProposalsResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListDisplayVideo360AdvertiserLinkProposalsResponse');
class_alias(GoogleAnalyticsAdminV1alphaListDisplayVideo360AdvertiserLinksResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListDisplayVideo360AdvertiserLinksResponse');
class_alias(GoogleAnalyticsAdminV1alphaListFirebaseLinksResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListFirebaseLinksResponse');
class_alias(GoogleAnalyticsAdminV1alphaListGoogleAdsLinksResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListGoogleAdsLinksResponse');
class_alias(GoogleAnalyticsAdminV1alphaListMeasurementProtocolSecretsResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListMeasurementProtocolSecretsResponse');
class_alias(GoogleAnalyticsAdminV1alphaListPropertiesResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListPropertiesResponse');
class_alias(GoogleAnalyticsAdminV1alphaListSearchAds360LinksResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListSearchAds360LinksResponse');
class_alias(GoogleAnalyticsAdminV1alphaListUserLinksResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListUserLinksResponse');
class_alias(GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaMeasurementProtocolSecret');
class_alias(GoogleAnalyticsAdminV1alphaNumericValue::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaNumericValue');
class_alias(GoogleAnalyticsAdminV1alphaProperty::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaProperty');
class_alias(GoogleAnalyticsAdminV1alphaPropertySummary::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaPropertySummary');
class_alias(GoogleAnalyticsAdminV1alphaProvisionAccountTicketRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaProvisionAccountTicketRequest');
class_alias(GoogleAnalyticsAdminV1alphaProvisionAccountTicketResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaProvisionAccountTicketResponse');
class_alias(GoogleAnalyticsAdminV1alphaRunAccessReportRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaRunAccessReportRequest');
class_alias(GoogleAnalyticsAdminV1alphaRunAccessReportResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaRunAccessReportResponse');
class_alias(GoogleAnalyticsAdminV1alphaSearchAds360Link::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaSearchAds360Link');
class_alias(GoogleAnalyticsAdminV1alphaSearchChangeHistoryEventsRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaSearchChangeHistoryEventsRequest');
class_alias(GoogleAnalyticsAdminV1alphaSearchChangeHistoryEventsResponse::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaSearchChangeHistoryEventsResponse');
class_alias(GoogleAnalyticsAdminV1alphaUpdateUserLinkRequest::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaUpdateUserLinkRequest');
class_alias(GoogleAnalyticsAdminV1alphaUserLink::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaUserLink');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_GoogleAnalyticsAdmin_GoogleProtobufEmpty');
