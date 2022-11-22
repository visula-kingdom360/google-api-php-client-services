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

namespace Google\Service\PaymentsResellerSubscription;

class GoogleCloudPaymentsResellerSubscriptionV1Amount extends \Google\Model
{
  /** @var string */
  public $amountMicros;
  /** @var string */
  public $currencyCode;

  /** @param string */
  public function setAmountMicros($amountMicros)
  {
    $this->amountMicros = $amountMicros;
  }
  /** @return string */
  public function getAmountMicros()
  {
    return $this->amountMicros;
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
}

class GoogleCloudPaymentsResellerSubscriptionV1CancelSubscriptionRequest extends \Google\Model
{
  /** @var bool */
  public $cancelImmediately;
  /** @var string */
  public $cancellationReason;

  /** @param bool */
  public function setCancelImmediately($cancelImmediately)
  {
    $this->cancelImmediately = $cancelImmediately;
  }
  /** @return bool */
  public function getCancelImmediately()
  {
    return $this->cancelImmediately;
  }
  /** @param string */
  public function setCancellationReason($cancellationReason)
  {
    $this->cancellationReason = $cancellationReason;
  }
  /** @return string */
  public function getCancellationReason()
  {
    return $this->cancellationReason;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1CancelSubscriptionResponse extends \Google\Model
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Subscription */
  public $subscription;
  protected $subscriptionType = GoogleCloudPaymentsResellerSubscriptionV1Subscription::class;
  protected $subscriptionDataType = '';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Subscription */
  public function setSubscription(GoogleCloudPaymentsResellerSubscriptionV1Subscription $subscription)
  {
    $this->subscription = $subscription;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Subscription */
  public function getSubscription()
  {
    return $this->subscription;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1Duration extends \Google\Model
{
  /** @var int */
  public $count;
  /** @var string */
  public $unit;

  /** @param int */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return int */
  public function getCount()
  {
    return $this->count;
  }
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1EntitleSubscriptionRequest extends \Google\Model
{
}

class GoogleCloudPaymentsResellerSubscriptionV1EntitleSubscriptionResponse extends \Google\Model
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Subscription */
  public $subscription;
  protected $subscriptionType = GoogleCloudPaymentsResellerSubscriptionV1Subscription::class;
  protected $subscriptionDataType = '';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Subscription */
  public function setSubscription(GoogleCloudPaymentsResellerSubscriptionV1Subscription $subscription)
  {
    $this->subscription = $subscription;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Subscription */
  public function getSubscription()
  {
    return $this->subscription;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1ExtendSubscriptionRequest extends \Google\Model
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Extension */
  public $extension;
  /** @var string */
  public $requestId;
  protected $extensionType = GoogleCloudPaymentsResellerSubscriptionV1Extension::class;
  protected $extensionDataType = '';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Extension */
  public function setExtension(GoogleCloudPaymentsResellerSubscriptionV1Extension $extension)
  {
    $this->extension = $extension;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Extension */
  public function getExtension()
  {
    return $this->extension;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1ExtendSubscriptionResponse extends \Google\Model
{
  /** @var string */
  public $cycleEndTime;
  /** @var string */
  public $freeTrialEndTime;
  /** @var string */
  public $renewalTime;

  /** @param string */
  public function setCycleEndTime($cycleEndTime)
  {
    $this->cycleEndTime = $cycleEndTime;
  }
  /** @return string */
  public function getCycleEndTime()
  {
    return $this->cycleEndTime;
  }
  /** @param string */
  public function setFreeTrialEndTime($freeTrialEndTime)
  {
    $this->freeTrialEndTime = $freeTrialEndTime;
  }
  /** @return string */
  public function getFreeTrialEndTime()
  {
    return $this->freeTrialEndTime;
  }
  /** @param string */
  public function setRenewalTime($renewalTime)
  {
    $this->renewalTime = $renewalTime;
  }
  /** @return string */
  public function getRenewalTime()
  {
    return $this->renewalTime;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1Extension extends \Google\Model
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public $duration;
  /** @var string */
  public $partnerUserToken;
  protected $durationType = GoogleCloudPaymentsResellerSubscriptionV1Duration::class;
  protected $durationDataType = '';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public function setDuration(GoogleCloudPaymentsResellerSubscriptionV1Duration $duration)
  {
    $this->duration = $duration;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param string */
  public function setPartnerUserToken($partnerUserToken)
  {
    $this->partnerUserToken = $partnerUserToken;
  }
  /** @return string */
  public function getPartnerUserToken()
  {
    return $this->partnerUserToken;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1FindEligiblePromotionsRequest extends \Google\Model
{
  /** @var string */
  public $filter;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;

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

class GoogleCloudPaymentsResellerSubscriptionV1FindEligiblePromotionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Promotion[] */
  public $promotions;
  protected $collection_key = 'promotions';
  protected $promotionsType = GoogleCloudPaymentsResellerSubscriptionV1Promotion::class;
  protected $promotionsDataType = 'array';
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
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Promotion[] */
  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Promotion[] */
  public function getPromotions()
  {
    return $this->promotions;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1ListProductsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Product[] */
  public $products;
  protected $collection_key = 'products';
  protected $productsType = GoogleCloudPaymentsResellerSubscriptionV1Product::class;
  protected $productsDataType = 'array';
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
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Product[] */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Product[] */
  public function getProducts()
  {
    return $this->products;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1ListPromotionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Promotion[] */
  public $promotions;
  protected $collection_key = 'promotions';
  protected $promotionsType = GoogleCloudPaymentsResellerSubscriptionV1Promotion::class;
  protected $promotionsDataType = 'array';
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
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Promotion[] */
  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Promotion[] */
  public function getPromotions()
  {
    return $this->promotions;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1Location extends \Google\Model
{
  /** @var string */
  public $postalCode;
  /** @var string */
  public $regionCode;

  /** @param string */
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  /** @return string */
  public function getPostalCode()
  {
    return $this->postalCode;
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
}

class GoogleCloudPaymentsResellerSubscriptionV1Product extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1ProductPriceConfig[] */
  public $priceConfigs;
  /** @var string[] */
  public $regionCodes;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public $subscriptionBillingCycleDuration;
  /** @var GoogleTypeLocalizedText[] */
  public $titles;
  protected $collection_key = 'titles';
  protected $priceConfigsType = GoogleCloudPaymentsResellerSubscriptionV1ProductPriceConfig::class;
  protected $priceConfigsDataType = 'array';
  protected $subscriptionBillingCycleDurationType = GoogleCloudPaymentsResellerSubscriptionV1Duration::class;
  protected $subscriptionBillingCycleDurationDataType = '';
  protected $titlesType = GoogleTypeLocalizedText::class;
  protected $titlesDataType = 'array';
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
  /** @param GoogleCloudPaymentsResellerSubscriptionV1ProductPriceConfig[] */
  public function setPriceConfigs($priceConfigs)
  {
    $this->priceConfigs = $priceConfigs;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1ProductPriceConfig[] */
  public function getPriceConfigs()
  {
    return $this->priceConfigs;
  }
  /** @param string[] */
  public function setRegionCodes($regionCodes)
  {
    $this->regionCodes = $regionCodes;
  }
  /** @return string[] */
  public function getRegionCodes()
  {
    return $this->regionCodes;
  }
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public function setSubscriptionBillingCycleDuration(GoogleCloudPaymentsResellerSubscriptionV1Duration $subscriptionBillingCycleDuration)
  {
    $this->subscriptionBillingCycleDuration = $subscriptionBillingCycleDuration;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public function getSubscriptionBillingCycleDuration()
  {
    return $this->subscriptionBillingCycleDuration;
  }
  /** @param GoogleTypeLocalizedText[] */
  public function setTitles($titles)
  {
    $this->titles = $titles;
  }
  /** @return GoogleTypeLocalizedText[] */
  public function getTitles()
  {
    return $this->titles;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1ProductPriceConfig extends \Google\Model
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Amount */
  public $amount;
  /** @var string */
  public $regionCode;
  protected $amountType = GoogleCloudPaymentsResellerSubscriptionV1Amount::class;
  protected $amountDataType = '';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Amount */
  public function setAmount(GoogleCloudPaymentsResellerSubscriptionV1Amount $amount)
  {
    $this->amount = $amount;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Amount */
  public function getAmount()
  {
    return $this->amount;
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
}

class GoogleCloudPaymentsResellerSubscriptionV1Promotion extends \Google\Collection
{
  /** @var string[] */
  public $applicableProducts;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public $freeTrialDuration;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails */
  public $introductoryPricingDetails;
  /** @var string */
  public $name;
  /** @var string */
  public $promotionType;
  /** @var string[] */
  public $regionCodes;
  /** @var string */
  public $startTime;
  /** @var GoogleTypeLocalizedText[] */
  public $titles;
  protected $collection_key = 'titles';
  protected $freeTrialDurationType = GoogleCloudPaymentsResellerSubscriptionV1Duration::class;
  protected $freeTrialDurationDataType = '';
  protected $introductoryPricingDetailsType = GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails::class;
  protected $introductoryPricingDetailsDataType = '';
  protected $titlesType = GoogleTypeLocalizedText::class;
  protected $titlesDataType = 'array';
  /** @param string[] */
  public function setApplicableProducts($applicableProducts)
  {
    $this->applicableProducts = $applicableProducts;
  }
  /** @return string[] */
  public function getApplicableProducts()
  {
    return $this->applicableProducts;
  }
  /** @param string */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public function setFreeTrialDuration(GoogleCloudPaymentsResellerSubscriptionV1Duration $freeTrialDuration)
  {
    $this->freeTrialDuration = $freeTrialDuration;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public function getFreeTrialDuration()
  {
    return $this->freeTrialDuration;
  }
  /** @param GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails */
  public function setIntroductoryPricingDetails(GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails $introductoryPricingDetails)
  {
    $this->introductoryPricingDetails = $introductoryPricingDetails;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails */
  public function getIntroductoryPricingDetails()
  {
    return $this->introductoryPricingDetails;
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
  public function setPromotionType($promotionType)
  {
    $this->promotionType = $promotionType;
  }
  /** @return string */
  public function getPromotionType()
  {
    return $this->promotionType;
  }
  /** @param string[] */
  public function setRegionCodes($regionCodes)
  {
    $this->regionCodes = $regionCodes;
  }
  /** @return string[] */
  public function getRegionCodes()
  {
    return $this->regionCodes;
  }
  /** @param string */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /** @param GoogleTypeLocalizedText[] */
  public function setTitles($titles)
  {
    $this->titles = $titles;
  }
  /** @return GoogleTypeLocalizedText[] */
  public function getTitles()
  {
    return $this->titles;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails extends \Google\Collection
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetailsIntroductoryPricingSpec[] */
  public $introductoryPricingSpecs;
  protected $collection_key = 'introductoryPricingSpecs';
  protected $introductoryPricingSpecsType = GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetailsIntroductoryPricingSpec::class;
  protected $introductoryPricingSpecsDataType = 'array';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetailsIntroductoryPricingSpec[] */
  public function setIntroductoryPricingSpecs($introductoryPricingSpecs)
  {
    $this->introductoryPricingSpecs = $introductoryPricingSpecs;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetailsIntroductoryPricingSpec[] */
  public function getIntroductoryPricingSpecs()
  {
    return $this->introductoryPricingSpecs;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetailsIntroductoryPricingSpec extends \Google\Model
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Amount */
  public $discountAmount;
  /** @var string */
  public $discountRatioMicros;
  /** @var int */
  public $recurrenceCount;
  /** @var string */
  public $regionCode;
  protected $discountAmountType = GoogleCloudPaymentsResellerSubscriptionV1Amount::class;
  protected $discountAmountDataType = '';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Amount */
  public function setDiscountAmount(GoogleCloudPaymentsResellerSubscriptionV1Amount $discountAmount)
  {
    $this->discountAmount = $discountAmount;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Amount */
  public function getDiscountAmount()
  {
    return $this->discountAmount;
  }
  /** @param string */
  public function setDiscountRatioMicros($discountRatioMicros)
  {
    $this->discountRatioMicros = $discountRatioMicros;
  }
  /** @return string */
  public function getDiscountRatioMicros()
  {
    return $this->discountRatioMicros;
  }
  /** @param int */
  public function setRecurrenceCount($recurrenceCount)
  {
    $this->recurrenceCount = $recurrenceCount;
  }
  /** @return int */
  public function getRecurrenceCount()
  {
    return $this->recurrenceCount;
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
}

class GoogleCloudPaymentsResellerSubscriptionV1ServicePeriod extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

  /** @param string */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param string */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1Subscription extends \Google\Collection
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1SubscriptionCancellationDetails */
  public $cancellationDetails;
  /** @var string */
  public $createTime;
  /** @var string */
  public $cycleEndTime;
  /** @var bool */
  public $endUserEntitled;
  /** @var string */
  public $freeTrialEndTime;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItem[] */
  public $lineItems;
  /** @var string */
  public $name;
  /** @var string */
  public $partnerUserToken;
  /** @var string */
  public $processingState;
  /** @var string[] */
  public $products;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec[] */
  public $promotionSpecs;
  /** @var string[] */
  public $promotions;
  /** @var string */
  public $redirectUri;
  /** @var string */
  public $renewalTime;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Location */
  public $serviceLocation;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1SubscriptionUpgradeDowngradeDetails */
  public $upgradeDowngradeDetails;
  protected $collection_key = 'promotions';
  protected $cancellationDetailsType = GoogleCloudPaymentsResellerSubscriptionV1SubscriptionCancellationDetails::class;
  protected $cancellationDetailsDataType = '';
  protected $lineItemsType = GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItem::class;
  protected $lineItemsDataType = 'array';
  protected $promotionSpecsType = GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec::class;
  protected $promotionSpecsDataType = 'array';
  protected $serviceLocationType = GoogleCloudPaymentsResellerSubscriptionV1Location::class;
  protected $serviceLocationDataType = '';
  protected $upgradeDowngradeDetailsType = GoogleCloudPaymentsResellerSubscriptionV1SubscriptionUpgradeDowngradeDetails::class;
  protected $upgradeDowngradeDetailsDataType = '';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1SubscriptionCancellationDetails */
  public function setCancellationDetails(GoogleCloudPaymentsResellerSubscriptionV1SubscriptionCancellationDetails $cancellationDetails)
  {
    $this->cancellationDetails = $cancellationDetails;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1SubscriptionCancellationDetails */
  public function getCancellationDetails()
  {
    return $this->cancellationDetails;
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
  public function setCycleEndTime($cycleEndTime)
  {
    $this->cycleEndTime = $cycleEndTime;
  }
  /** @return string */
  public function getCycleEndTime()
  {
    return $this->cycleEndTime;
  }
  /** @param bool */
  public function setEndUserEntitled($endUserEntitled)
  {
    $this->endUserEntitled = $endUserEntitled;
  }
  /** @return bool */
  public function getEndUserEntitled()
  {
    return $this->endUserEntitled;
  }
  /** @param string */
  public function setFreeTrialEndTime($freeTrialEndTime)
  {
    $this->freeTrialEndTime = $freeTrialEndTime;
  }
  /** @return string */
  public function getFreeTrialEndTime()
  {
    return $this->freeTrialEndTime;
  }
  /** @param GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItem[] */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItem[] */
  public function getLineItems()
  {
    return $this->lineItems;
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
  public function setPartnerUserToken($partnerUserToken)
  {
    $this->partnerUserToken = $partnerUserToken;
  }
  /** @return string */
  public function getPartnerUserToken()
  {
    return $this->partnerUserToken;
  }
  /** @param string */
  public function setProcessingState($processingState)
  {
    $this->processingState = $processingState;
  }
  /** @return string */
  public function getProcessingState()
  {
    return $this->processingState;
  }
  /** @param string[] */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /** @return string[] */
  public function getProducts()
  {
    return $this->products;
  }
  /** @param GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec[] */
  public function setPromotionSpecs($promotionSpecs)
  {
    $this->promotionSpecs = $promotionSpecs;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec[] */
  public function getPromotionSpecs()
  {
    return $this->promotionSpecs;
  }
  /** @param string[] */
  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  /** @return string[] */
  public function getPromotions()
  {
    return $this->promotions;
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
  /** @param string */
  public function setRenewalTime($renewalTime)
  {
    $this->renewalTime = $renewalTime;
  }
  /** @return string */
  public function getRenewalTime()
  {
    return $this->renewalTime;
  }
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Location */
  public function setServiceLocation(GoogleCloudPaymentsResellerSubscriptionV1Location $serviceLocation)
  {
    $this->serviceLocation = $serviceLocation;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Location */
  public function getServiceLocation()
  {
    return $this->serviceLocation;
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
  /** @param GoogleCloudPaymentsResellerSubscriptionV1SubscriptionUpgradeDowngradeDetails */
  public function setUpgradeDowngradeDetails(GoogleCloudPaymentsResellerSubscriptionV1SubscriptionUpgradeDowngradeDetails $upgradeDowngradeDetails)
  {
    $this->upgradeDowngradeDetails = $upgradeDowngradeDetails;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1SubscriptionUpgradeDowngradeDetails */
  public function getUpgradeDowngradeDetails()
  {
    return $this->upgradeDowngradeDetails;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1SubscriptionCancellationDetails extends \Google\Model
{
  /** @var string */
  public $reason;

  /** @param string */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItem extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $lineItemFreeTrialEndTime;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec[] */
  public $lineItemPromotionSpecs;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItemOneTimeRecurrenceDetails */
  public $oneTimeRecurrenceDetails;
  /** @var string */
  public $product;
  /** @var string */
  public $recurrenceType;
  /** @var string */
  public $state;
  protected $collection_key = 'lineItemPromotionSpecs';
  protected $lineItemPromotionSpecsType = GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec::class;
  protected $lineItemPromotionSpecsDataType = 'array';
  protected $oneTimeRecurrenceDetailsType = GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItemOneTimeRecurrenceDetails::class;
  protected $oneTimeRecurrenceDetailsDataType = '';
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
  public function setLineItemFreeTrialEndTime($lineItemFreeTrialEndTime)
  {
    $this->lineItemFreeTrialEndTime = $lineItemFreeTrialEndTime;
  }
  /** @return string */
  public function getLineItemFreeTrialEndTime()
  {
    return $this->lineItemFreeTrialEndTime;
  }
  /** @param GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec[] */
  public function setLineItemPromotionSpecs($lineItemPromotionSpecs)
  {
    $this->lineItemPromotionSpecs = $lineItemPromotionSpecs;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec[] */
  public function getLineItemPromotionSpecs()
  {
    return $this->lineItemPromotionSpecs;
  }
  /** @param GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItemOneTimeRecurrenceDetails */
  public function setOneTimeRecurrenceDetails(GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItemOneTimeRecurrenceDetails $oneTimeRecurrenceDetails)
  {
    $this->oneTimeRecurrenceDetails = $oneTimeRecurrenceDetails;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItemOneTimeRecurrenceDetails */
  public function getOneTimeRecurrenceDetails()
  {
    return $this->oneTimeRecurrenceDetails;
  }
  /** @param string */
  public function setProduct($product)
  {
    $this->product = $product;
  }
  /** @return string */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param string */
  public function setRecurrenceType($recurrenceType)
  {
    $this->recurrenceType = $recurrenceType;
  }
  /** @return string */
  public function getRecurrenceType()
  {
    return $this->recurrenceType;
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

class GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItemOneTimeRecurrenceDetails extends \Google\Model
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1ServicePeriod */
  public $servicePeriod;
  protected $servicePeriodType = GoogleCloudPaymentsResellerSubscriptionV1ServicePeriod::class;
  protected $servicePeriodDataType = '';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1ServicePeriod */
  public function setServicePeriod(GoogleCloudPaymentsResellerSubscriptionV1ServicePeriod $servicePeriod)
  {
    $this->servicePeriod = $servicePeriod;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1ServicePeriod */
  public function getServicePeriod()
  {
    return $this->servicePeriod;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec extends \Google\Model
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public $freeTrialDuration;
  /** @var GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails */
  public $introductoryPricingDetails;
  /** @var string */
  public $promotion;
  /** @var string */
  public $type;
  protected $freeTrialDurationType = GoogleCloudPaymentsResellerSubscriptionV1Duration::class;
  protected $freeTrialDurationDataType = '';
  protected $introductoryPricingDetailsType = GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails::class;
  protected $introductoryPricingDetailsDataType = '';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public function setFreeTrialDuration(GoogleCloudPaymentsResellerSubscriptionV1Duration $freeTrialDuration)
  {
    $this->freeTrialDuration = $freeTrialDuration;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Duration */
  public function getFreeTrialDuration()
  {
    return $this->freeTrialDuration;
  }
  /** @param GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails */
  public function setIntroductoryPricingDetails(GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails $introductoryPricingDetails)
  {
    $this->introductoryPricingDetails = $introductoryPricingDetails;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails */
  public function getIntroductoryPricingDetails()
  {
    return $this->introductoryPricingDetails;
  }
  /** @param string */
  public function setPromotion($promotion)
  {
    $this->promotion = $promotion;
  }
  /** @return string */
  public function getPromotion()
  {
    return $this->promotion;
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

class GoogleCloudPaymentsResellerSubscriptionV1SubscriptionUpgradeDowngradeDetails extends \Google\Model
{
  /** @var string */
  public $billingCycleSpec;
  /** @var string */
  public $previousSubscriptionId;

  /** @param string */
  public function setBillingCycleSpec($billingCycleSpec)
  {
    $this->billingCycleSpec = $billingCycleSpec;
  }
  /** @return string */
  public function getBillingCycleSpec()
  {
    return $this->billingCycleSpec;
  }
  /** @param string */
  public function setPreviousSubscriptionId($previousSubscriptionId)
  {
    $this->previousSubscriptionId = $previousSubscriptionId;
  }
  /** @return string */
  public function getPreviousSubscriptionId()
  {
    return $this->previousSubscriptionId;
  }
}

class GoogleCloudPaymentsResellerSubscriptionV1UndoCancelSubscriptionRequest extends \Google\Model
{
}

class GoogleCloudPaymentsResellerSubscriptionV1UndoCancelSubscriptionResponse extends \Google\Model
{
  /** @var GoogleCloudPaymentsResellerSubscriptionV1Subscription */
  public $subscription;
  protected $subscriptionType = GoogleCloudPaymentsResellerSubscriptionV1Subscription::class;
  protected $subscriptionDataType = '';
  /** @param GoogleCloudPaymentsResellerSubscriptionV1Subscription */
  public function setSubscription(GoogleCloudPaymentsResellerSubscriptionV1Subscription $subscription)
  {
    $this->subscription = $subscription;
  }
  /** @return GoogleCloudPaymentsResellerSubscriptionV1Subscription */
  public function getSubscription()
  {
    return $this->subscription;
  }
}

class GoogleTypeLocalizedText extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $text;

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
  /** @param string */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudPaymentsResellerSubscriptionV1Amount::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1Amount');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1CancelSubscriptionRequest::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1CancelSubscriptionRequest');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1CancelSubscriptionResponse::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1CancelSubscriptionResponse');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1Duration::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1Duration');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1EntitleSubscriptionRequest::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1EntitleSubscriptionRequest');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1EntitleSubscriptionResponse::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1EntitleSubscriptionResponse');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1ExtendSubscriptionRequest::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1ExtendSubscriptionRequest');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1ExtendSubscriptionResponse::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1ExtendSubscriptionResponse');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1Extension::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1Extension');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1FindEligiblePromotionsRequest::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1FindEligiblePromotionsRequest');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1FindEligiblePromotionsResponse::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1FindEligiblePromotionsResponse');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1ListProductsResponse::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1ListProductsResponse');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1ListPromotionsResponse::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1ListPromotionsResponse');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1Location::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1Location');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1Product::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1Product');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1ProductPriceConfig::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1ProductPriceConfig');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1Promotion::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1Promotion');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetails');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetailsIntroductoryPricingSpec::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1PromotionIntroductoryPricingDetailsIntroductoryPricingSpec');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1ServicePeriod::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1ServicePeriod');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1Subscription::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1Subscription');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1SubscriptionCancellationDetails::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1SubscriptionCancellationDetails');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItem::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItem');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItemOneTimeRecurrenceDetails::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1SubscriptionLineItemOneTimeRecurrenceDetails');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1SubscriptionPromotionSpec');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1SubscriptionUpgradeDowngradeDetails::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1SubscriptionUpgradeDowngradeDetails');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1UndoCancelSubscriptionRequest::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1UndoCancelSubscriptionRequest');
class_alias(GoogleCloudPaymentsResellerSubscriptionV1UndoCancelSubscriptionResponse::class, 'Google_Service_PaymentsResellerSubscription_GoogleCloudPaymentsResellerSubscriptionV1UndoCancelSubscriptionResponse');
class_alias(GoogleTypeLocalizedText::class, 'Google_Service_PaymentsResellerSubscription_GoogleTypeLocalizedText');
