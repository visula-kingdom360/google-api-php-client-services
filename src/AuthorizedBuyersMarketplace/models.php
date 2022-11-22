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

namespace Google\Service\AuthorizedBuyersMarketplace;

class AcceptProposalRequest extends \Google\Model
{
  /** @var string */
  public $proposalRevision;

  /** @param string */
  public function setProposalRevision($proposalRevision)
  {
    $this->proposalRevision = $proposalRevision;
  }
  /** @return string */
  public function getProposalRevision()
  {
    return $this->proposalRevision;
  }
}

class ActivateClientRequest extends \Google\Model
{
}

class ActivateClientUserRequest extends \Google\Model
{
}

class AdSize extends \Google\Model
{
  /** @var string */
  public $height;
  /** @var string */
  public $type;
  /** @var string */
  public $width;

  /** @param string */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return string */
  public function getHeight()
  {
    return $this->height;
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
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return string */
  public function getWidth()
  {
    return $this->width;
  }
}

class AddCreativeRequest extends \Google\Model
{
  /** @var string */
  public $creative;

  /** @param string */
  public function setCreative($creative)
  {
    $this->creative = $creative;
  }
  /** @return string */
  public function getCreative()
  {
    return $this->creative;
  }
}

class AddNoteRequest extends \Google\Model
{
  /** @var Note */
  public $note;
  protected $noteType = Note::class;
  protected $noteDataType = '';
  /** @param Note */
  public function setNote(Note $note)
  {
    $this->note = $note;
  }
  /** @return Note */
  public function getNote()
  {
    return $this->note;
  }
}

class AuctionPackage extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $creator;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string[] */
  public $subscribedClients;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'subscribedClients';
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
  public function setCreator($creator)
  {
    $this->creator = $creator;
  }
  /** @return string */
  public function getCreator()
  {
    return $this->creator;
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
  public function setSubscribedClients($subscribedClients)
  {
    $this->subscribedClients = $subscribedClients;
  }
  /** @return string[] */
  public function getSubscribedClients()
  {
    return $this->subscribedClients;
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

class AuthorizedbuyersmarketplaceEmpty extends \Google\Model
{
}

class BatchUpdateDealsRequest extends \Google\Collection
{
  /** @var UpdateDealRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = UpdateDealRequest::class;
  protected $requestsDataType = 'array';
  /** @param UpdateDealRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return UpdateDealRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchUpdateDealsResponse extends \Google\Collection
{
  /** @var Deal[] */
  public $deals;
  protected $collection_key = 'deals';
  protected $dealsType = Deal::class;
  protected $dealsDataType = 'array';
  /** @param Deal[] */
  public function setDeals($deals)
  {
    $this->deals = $deals;
  }
  /** @return Deal[] */
  public function getDeals()
  {
    return $this->deals;
  }
}

class CancelNegotiationRequest extends \Google\Model
{
}

class Client extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $partnerClientId;
  /** @var string */
  public $role;
  /** @var bool */
  public $sellerVisible;
  /** @var string */
  public $state;

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
  public function setPartnerClientId($partnerClientId)
  {
    $this->partnerClientId = $partnerClientId;
  }
  /** @return string */
  public function getPartnerClientId()
  {
    return $this->partnerClientId;
  }
  /** @param string */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /** @return string */
  public function getRole()
  {
    return $this->role;
  }
  /** @param bool */
  public function setSellerVisible($sellerVisible)
  {
    $this->sellerVisible = $sellerVisible;
  }
  /** @return bool */
  public function getSellerVisible()
  {
    return $this->sellerVisible;
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

class ClientUser extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $name;
  /** @var string */
  public $state;

  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
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

class Contact extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;

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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
}

class CreativeRequirements extends \Google\Model
{
  /** @var string */
  public $creativeFormat;
  /** @var string */
  public $creativePreApprovalPolicy;
  /** @var string */
  public $creativeSafeFrameCompatibility;
  /** @var string */
  public $maxAdDurationMs;
  /** @var string */
  public $programmaticCreativeSource;
  /** @var string */
  public $skippableAdType;

  /** @param string */
  public function setCreativeFormat($creativeFormat)
  {
    $this->creativeFormat = $creativeFormat;
  }
  /** @return string */
  public function getCreativeFormat()
  {
    return $this->creativeFormat;
  }
  /** @param string */
  public function setCreativePreApprovalPolicy($creativePreApprovalPolicy)
  {
    $this->creativePreApprovalPolicy = $creativePreApprovalPolicy;
  }
  /** @return string */
  public function getCreativePreApprovalPolicy()
  {
    return $this->creativePreApprovalPolicy;
  }
  /** @param string */
  public function setCreativeSafeFrameCompatibility($creativeSafeFrameCompatibility)
  {
    $this->creativeSafeFrameCompatibility = $creativeSafeFrameCompatibility;
  }
  /** @return string */
  public function getCreativeSafeFrameCompatibility()
  {
    return $this->creativeSafeFrameCompatibility;
  }
  /** @param string */
  public function setMaxAdDurationMs($maxAdDurationMs)
  {
    $this->maxAdDurationMs = $maxAdDurationMs;
  }
  /** @return string */
  public function getMaxAdDurationMs()
  {
    return $this->maxAdDurationMs;
  }
  /** @param string */
  public function setProgrammaticCreativeSource($programmaticCreativeSource)
  {
    $this->programmaticCreativeSource = $programmaticCreativeSource;
  }
  /** @return string */
  public function getProgrammaticCreativeSource()
  {
    return $this->programmaticCreativeSource;
  }
  /** @param string */
  public function setSkippableAdType($skippableAdType)
  {
    $this->skippableAdType = $skippableAdType;
  }
  /** @return string */
  public function getSkippableAdType()
  {
    return $this->skippableAdType;
  }
}

class CriteriaTargeting extends \Google\Collection
{
  /** @var string[] */
  public $excludedCriteriaIds;
  /** @var string[] */
  public $targetedCriteriaIds;
  protected $collection_key = 'targetedCriteriaIds';
  /** @param string[] */
  public function setExcludedCriteriaIds($excludedCriteriaIds)
  {
    $this->excludedCriteriaIds = $excludedCriteriaIds;
  }
  /** @return string[] */
  public function getExcludedCriteriaIds()
  {
    return $this->excludedCriteriaIds;
  }
  /** @param string[] */
  public function setTargetedCriteriaIds($targetedCriteriaIds)
  {
    $this->targetedCriteriaIds = $targetedCriteriaIds;
  }
  /** @return string[] */
  public function getTargetedCriteriaIds()
  {
    return $this->targetedCriteriaIds;
  }
}

class DayPart extends \Google\Model
{
  /** @var string */
  public $dayOfWeek;
  /** @var TimeOfDay */
  public $endTime;
  /** @var TimeOfDay */
  public $startTime;
  protected $endTimeType = TimeOfDay::class;
  protected $endTimeDataType = '';
  protected $startTimeType = TimeOfDay::class;
  protected $startTimeDataType = '';
  /** @param string */
  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  /** @return string */
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
  /** @param TimeOfDay */
  public function setEndTime(TimeOfDay $endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return TimeOfDay */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param TimeOfDay */
  public function setStartTime(TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return TimeOfDay */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class DayPartTargeting extends \Google\Collection
{
  /** @var DayPart[] */
  public $dayParts;
  /** @var string */
  public $timeZoneType;
  protected $collection_key = 'dayParts';
  protected $dayPartsType = DayPart::class;
  protected $dayPartsDataType = 'array';
  /** @param DayPart[] */
  public function setDayParts($dayParts)
  {
    $this->dayParts = $dayParts;
  }
  /** @return DayPart[] */
  public function getDayParts()
  {
    return $this->dayParts;
  }
  /** @param string */
  public function setTimeZoneType($timeZoneType)
  {
    $this->timeZoneType = $timeZoneType;
  }
  /** @return string */
  public function getTimeZoneType()
  {
    return $this->timeZoneType;
  }
}

class DeactivateClientRequest extends \Google\Model
{
}

class DeactivateClientUserRequest extends \Google\Model
{
}

class Deal extends \Google\Model
{
  /** @var string */
  public $billedBuyer;
  /** @var string */
  public $buyer;
  /** @var string */
  public $client;
  /** @var string */
  public $createTime;
  /** @var CreativeRequirements */
  public $creativeRequirements;
  /** @var string */
  public $dealType;
  /** @var DeliveryControl */
  public $deliveryControl;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var Money */
  public $estimatedGrossSpend;
  /** @var string */
  public $flightEndTime;
  /** @var string */
  public $flightStartTime;
  /** @var string */
  public $name;
  /** @var PreferredDealTerms */
  public $preferredDealTerms;
  /** @var PrivateAuctionTerms */
  public $privateAuctionTerms;
  /** @var ProgrammaticGuaranteedTerms */
  public $programmaticGuaranteedTerms;
  /** @var string */
  public $proposalRevision;
  /** @var string */
  public $publisherProfile;
  /** @var TimeZone */
  public $sellerTimeZone;
  /** @var MarketplaceTargeting */
  public $targeting;
  /** @var string */
  public $updateTime;
  protected $creativeRequirementsType = CreativeRequirements::class;
  protected $creativeRequirementsDataType = '';
  protected $deliveryControlType = DeliveryControl::class;
  protected $deliveryControlDataType = '';
  protected $estimatedGrossSpendType = Money::class;
  protected $estimatedGrossSpendDataType = '';
  protected $preferredDealTermsType = PreferredDealTerms::class;
  protected $preferredDealTermsDataType = '';
  protected $privateAuctionTermsType = PrivateAuctionTerms::class;
  protected $privateAuctionTermsDataType = '';
  protected $programmaticGuaranteedTermsType = ProgrammaticGuaranteedTerms::class;
  protected $programmaticGuaranteedTermsDataType = '';
  protected $sellerTimeZoneType = TimeZone::class;
  protected $sellerTimeZoneDataType = '';
  protected $targetingType = MarketplaceTargeting::class;
  protected $targetingDataType = '';
  /** @param string */
  public function setBilledBuyer($billedBuyer)
  {
    $this->billedBuyer = $billedBuyer;
  }
  /** @return string */
  public function getBilledBuyer()
  {
    return $this->billedBuyer;
  }
  /** @param string */
  public function setBuyer($buyer)
  {
    $this->buyer = $buyer;
  }
  /** @return string */
  public function getBuyer()
  {
    return $this->buyer;
  }
  /** @param string */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /** @return string */
  public function getClient()
  {
    return $this->client;
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
  /** @param CreativeRequirements */
  public function setCreativeRequirements(CreativeRequirements $creativeRequirements)
  {
    $this->creativeRequirements = $creativeRequirements;
  }
  /** @return CreativeRequirements */
  public function getCreativeRequirements()
  {
    return $this->creativeRequirements;
  }
  /** @param string */
  public function setDealType($dealType)
  {
    $this->dealType = $dealType;
  }
  /** @return string */
  public function getDealType()
  {
    return $this->dealType;
  }
  /** @param DeliveryControl */
  public function setDeliveryControl(DeliveryControl $deliveryControl)
  {
    $this->deliveryControl = $deliveryControl;
  }
  /** @return DeliveryControl */
  public function getDeliveryControl()
  {
    return $this->deliveryControl;
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
  /** @param Money */
  public function setEstimatedGrossSpend(Money $estimatedGrossSpend)
  {
    $this->estimatedGrossSpend = $estimatedGrossSpend;
  }
  /** @return Money */
  public function getEstimatedGrossSpend()
  {
    return $this->estimatedGrossSpend;
  }
  /** @param string */
  public function setFlightEndTime($flightEndTime)
  {
    $this->flightEndTime = $flightEndTime;
  }
  /** @return string */
  public function getFlightEndTime()
  {
    return $this->flightEndTime;
  }
  /** @param string */
  public function setFlightStartTime($flightStartTime)
  {
    $this->flightStartTime = $flightStartTime;
  }
  /** @return string */
  public function getFlightStartTime()
  {
    return $this->flightStartTime;
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
  /** @param PreferredDealTerms */
  public function setPreferredDealTerms(PreferredDealTerms $preferredDealTerms)
  {
    $this->preferredDealTerms = $preferredDealTerms;
  }
  /** @return PreferredDealTerms */
  public function getPreferredDealTerms()
  {
    return $this->preferredDealTerms;
  }
  /** @param PrivateAuctionTerms */
  public function setPrivateAuctionTerms(PrivateAuctionTerms $privateAuctionTerms)
  {
    $this->privateAuctionTerms = $privateAuctionTerms;
  }
  /** @return PrivateAuctionTerms */
  public function getPrivateAuctionTerms()
  {
    return $this->privateAuctionTerms;
  }
  /** @param ProgrammaticGuaranteedTerms */
  public function setProgrammaticGuaranteedTerms(ProgrammaticGuaranteedTerms $programmaticGuaranteedTerms)
  {
    $this->programmaticGuaranteedTerms = $programmaticGuaranteedTerms;
  }
  /** @return ProgrammaticGuaranteedTerms */
  public function getProgrammaticGuaranteedTerms()
  {
    return $this->programmaticGuaranteedTerms;
  }
  /** @param string */
  public function setProposalRevision($proposalRevision)
  {
    $this->proposalRevision = $proposalRevision;
  }
  /** @return string */
  public function getProposalRevision()
  {
    return $this->proposalRevision;
  }
  /** @param string */
  public function setPublisherProfile($publisherProfile)
  {
    $this->publisherProfile = $publisherProfile;
  }
  /** @return string */
  public function getPublisherProfile()
  {
    return $this->publisherProfile;
  }
  /** @param TimeZone */
  public function setSellerTimeZone(TimeZone $sellerTimeZone)
  {
    $this->sellerTimeZone = $sellerTimeZone;
  }
  /** @return TimeZone */
  public function getSellerTimeZone()
  {
    return $this->sellerTimeZone;
  }
  /** @param MarketplaceTargeting */
  public function setTargeting(MarketplaceTargeting $targeting)
  {
    $this->targeting = $targeting;
  }
  /** @return MarketplaceTargeting */
  public function getTargeting()
  {
    return $this->targeting;
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

class DealPausingInfo extends \Google\Model
{
  /** @var string */
  public $pauseReason;
  /** @var string */
  public $pauseRole;
  /** @var bool */
  public $pausingConsented;

  /** @param string */
  public function setPauseReason($pauseReason)
  {
    $this->pauseReason = $pauseReason;
  }
  /** @return string */
  public function getPauseReason()
  {
    return $this->pauseReason;
  }
  /** @param string */
  public function setPauseRole($pauseRole)
  {
    $this->pauseRole = $pauseRole;
  }
  /** @return string */
  public function getPauseRole()
  {
    return $this->pauseRole;
  }
  /** @param bool */
  public function setPausingConsented($pausingConsented)
  {
    $this->pausingConsented = $pausingConsented;
  }
  /** @return bool */
  public function getPausingConsented()
  {
    return $this->pausingConsented;
  }
}

class DeliveryControl extends \Google\Collection
{
  /** @var string */
  public $companionDeliveryType;
  /** @var string */
  public $creativeRotationType;
  /** @var string */
  public $deliveryRateType;
  /** @var FrequencyCap[] */
  public $frequencyCap;
  /** @var string */
  public $roadblockingType;
  protected $collection_key = 'frequencyCap';
  protected $frequencyCapType = FrequencyCap::class;
  protected $frequencyCapDataType = 'array';
  /** @param string */
  public function setCompanionDeliveryType($companionDeliveryType)
  {
    $this->companionDeliveryType = $companionDeliveryType;
  }
  /** @return string */
  public function getCompanionDeliveryType()
  {
    return $this->companionDeliveryType;
  }
  /** @param string */
  public function setCreativeRotationType($creativeRotationType)
  {
    $this->creativeRotationType = $creativeRotationType;
  }
  /** @return string */
  public function getCreativeRotationType()
  {
    return $this->creativeRotationType;
  }
  /** @param string */
  public function setDeliveryRateType($deliveryRateType)
  {
    $this->deliveryRateType = $deliveryRateType;
  }
  /** @return string */
  public function getDeliveryRateType()
  {
    return $this->deliveryRateType;
  }
  /** @param FrequencyCap[] */
  public function setFrequencyCap($frequencyCap)
  {
    $this->frequencyCap = $frequencyCap;
  }
  /** @return FrequencyCap[] */
  public function getFrequencyCap()
  {
    return $this->frequencyCap;
  }
  /** @param string */
  public function setRoadblockingType($roadblockingType)
  {
    $this->roadblockingType = $roadblockingType;
  }
  /** @return string */
  public function getRoadblockingType()
  {
    return $this->roadblockingType;
  }
}

class FinalizedDeal extends \Google\Model
{
  /** @var Deal */
  public $deal;
  /** @var DealPausingInfo */
  public $dealPausingInfo;
  /** @var string */
  public $dealServingStatus;
  /** @var string */
  public $name;
  /** @var bool */
  public $readyToServe;
  /** @var RtbMetrics */
  public $rtbMetrics;
  protected $dealType = Deal::class;
  protected $dealDataType = '';
  protected $dealPausingInfoType = DealPausingInfo::class;
  protected $dealPausingInfoDataType = '';
  protected $rtbMetricsType = RtbMetrics::class;
  protected $rtbMetricsDataType = '';
  /** @param Deal */
  public function setDeal(Deal $deal)
  {
    $this->deal = $deal;
  }
  /** @return Deal */
  public function getDeal()
  {
    return $this->deal;
  }
  /** @param DealPausingInfo */
  public function setDealPausingInfo(DealPausingInfo $dealPausingInfo)
  {
    $this->dealPausingInfo = $dealPausingInfo;
  }
  /** @return DealPausingInfo */
  public function getDealPausingInfo()
  {
    return $this->dealPausingInfo;
  }
  /** @param string */
  public function setDealServingStatus($dealServingStatus)
  {
    $this->dealServingStatus = $dealServingStatus;
  }
  /** @return string */
  public function getDealServingStatus()
  {
    return $this->dealServingStatus;
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
  public function setReadyToServe($readyToServe)
  {
    $this->readyToServe = $readyToServe;
  }
  /** @return bool */
  public function getReadyToServe()
  {
    return $this->readyToServe;
  }
  /** @param RtbMetrics */
  public function setRtbMetrics(RtbMetrics $rtbMetrics)
  {
    $this->rtbMetrics = $rtbMetrics;
  }
  /** @return RtbMetrics */
  public function getRtbMetrics()
  {
    return $this->rtbMetrics;
  }
}

class FirstPartyMobileApplicationTargeting extends \Google\Collection
{
  /** @var string[] */
  public $excludedAppIds;
  /** @var string[] */
  public $targetedAppIds;
  protected $collection_key = 'targetedAppIds';
  /** @param string[] */
  public function setExcludedAppIds($excludedAppIds)
  {
    $this->excludedAppIds = $excludedAppIds;
  }
  /** @return string[] */
  public function getExcludedAppIds()
  {
    return $this->excludedAppIds;
  }
  /** @param string[] */
  public function setTargetedAppIds($targetedAppIds)
  {
    $this->targetedAppIds = $targetedAppIds;
  }
  /** @return string[] */
  public function getTargetedAppIds()
  {
    return $this->targetedAppIds;
  }
}

class FrequencyCap extends \Google\Model
{
  /** @var int */
  public $maxImpressions;
  /** @var string */
  public $timeUnitType;
  /** @var int */
  public $timeUnitsCount;

  /** @param int */
  public function setMaxImpressions($maxImpressions)
  {
    $this->maxImpressions = $maxImpressions;
  }
  /** @return int */
  public function getMaxImpressions()
  {
    return $this->maxImpressions;
  }
  /** @param string */
  public function setTimeUnitType($timeUnitType)
  {
    $this->timeUnitType = $timeUnitType;
  }
  /** @return string */
  public function getTimeUnitType()
  {
    return $this->timeUnitType;
  }
  /** @param int */
  public function setTimeUnitsCount($timeUnitsCount)
  {
    $this->timeUnitsCount = $timeUnitsCount;
  }
  /** @return int */
  public function getTimeUnitsCount()
  {
    return $this->timeUnitsCount;
  }
}

class InventorySizeTargeting extends \Google\Collection
{
  /** @var AdSize[] */
  public $excludedInventorySizes;
  /** @var AdSize[] */
  public $targetedInventorySizes;
  protected $collection_key = 'targetedInventorySizes';
  protected $excludedInventorySizesType = AdSize::class;
  protected $excludedInventorySizesDataType = 'array';
  protected $targetedInventorySizesType = AdSize::class;
  protected $targetedInventorySizesDataType = 'array';
  /** @param AdSize[] */
  public function setExcludedInventorySizes($excludedInventorySizes)
  {
    $this->excludedInventorySizes = $excludedInventorySizes;
  }
  /** @return AdSize[] */
  public function getExcludedInventorySizes()
  {
    return $this->excludedInventorySizes;
  }
  /** @param AdSize[] */
  public function setTargetedInventorySizes($targetedInventorySizes)
  {
    $this->targetedInventorySizes = $targetedInventorySizes;
  }
  /** @return AdSize[] */
  public function getTargetedInventorySizes()
  {
    return $this->targetedInventorySizes;
  }
}

class InventoryTypeTargeting extends \Google\Collection
{
  /** @var string[] */
  public $inventoryTypes;
  protected $collection_key = 'inventoryTypes';
  /** @param string[] */
  public function setInventoryTypes($inventoryTypes)
  {
    $this->inventoryTypes = $inventoryTypes;
  }
  /** @return string[] */
  public function getInventoryTypes()
  {
    return $this->inventoryTypes;
  }
}

class ListAuctionPackagesResponse extends \Google\Collection
{
  /** @var AuctionPackage[] */
  public $auctionPackages;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'auctionPackages';
  protected $auctionPackagesType = AuctionPackage::class;
  protected $auctionPackagesDataType = 'array';
  /** @param AuctionPackage[] */
  public function setAuctionPackages($auctionPackages)
  {
    $this->auctionPackages = $auctionPackages;
  }
  /** @return AuctionPackage[] */
  public function getAuctionPackages()
  {
    return $this->auctionPackages;
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

class ListClientUsersResponse extends \Google\Collection
{
  /** @var ClientUser[] */
  public $clientUsers;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'clientUsers';
  protected $clientUsersType = ClientUser::class;
  protected $clientUsersDataType = 'array';
  /** @param ClientUser[] */
  public function setClientUsers($clientUsers)
  {
    $this->clientUsers = $clientUsers;
  }
  /** @return ClientUser[] */
  public function getClientUsers()
  {
    return $this->clientUsers;
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

class ListClientsResponse extends \Google\Collection
{
  /** @var Client[] */
  public $clients;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'clients';
  protected $clientsType = Client::class;
  protected $clientsDataType = 'array';
  /** @param Client[] */
  public function setClients($clients)
  {
    $this->clients = $clients;
  }
  /** @return Client[] */
  public function getClients()
  {
    return $this->clients;
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

class ListDealsResponse extends \Google\Collection
{
  /** @var Deal[] */
  public $deals;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'deals';
  protected $dealsType = Deal::class;
  protected $dealsDataType = 'array';
  /** @param Deal[] */
  public function setDeals($deals)
  {
    $this->deals = $deals;
  }
  /** @return Deal[] */
  public function getDeals()
  {
    return $this->deals;
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

class ListFinalizedDealsResponse extends \Google\Collection
{
  /** @var FinalizedDeal[] */
  public $finalizedDeals;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'finalizedDeals';
  protected $finalizedDealsType = FinalizedDeal::class;
  protected $finalizedDealsDataType = 'array';
  /** @param FinalizedDeal[] */
  public function setFinalizedDeals($finalizedDeals)
  {
    $this->finalizedDeals = $finalizedDeals;
  }
  /** @return FinalizedDeal[] */
  public function getFinalizedDeals()
  {
    return $this->finalizedDeals;
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

class ListProposalsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Proposal[] */
  public $proposals;
  protected $collection_key = 'proposals';
  protected $proposalsType = Proposal::class;
  protected $proposalsDataType = 'array';
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
  /** @param Proposal[] */
  public function setProposals($proposals)
  {
    $this->proposals = $proposals;
  }
  /** @return Proposal[] */
  public function getProposals()
  {
    return $this->proposals;
  }
}

class ListPublisherProfilesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PublisherProfile[] */
  public $publisherProfiles;
  protected $collection_key = 'publisherProfiles';
  protected $publisherProfilesType = PublisherProfile::class;
  protected $publisherProfilesDataType = 'array';
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
  /** @param PublisherProfile[] */
  public function setPublisherProfiles($publisherProfiles)
  {
    $this->publisherProfiles = $publisherProfiles;
  }
  /** @return PublisherProfile[] */
  public function getPublisherProfiles()
  {
    return $this->publisherProfiles;
  }
}

class MarketplaceTargeting extends \Google\Model
{
  /** @var DayPartTargeting */
  public $daypartTargeting;
  /** @var CriteriaTargeting */
  public $geoTargeting;
  /** @var InventorySizeTargeting */
  public $inventorySizeTargeting;
  /** @var InventoryTypeTargeting */
  public $inventoryTypeTargeting;
  /** @var PlacementTargeting */
  public $placementTargeting;
  /** @var TechnologyTargeting */
  public $technologyTargeting;
  /** @var CriteriaTargeting */
  public $userListTargeting;
  /** @var VideoTargeting */
  public $videoTargeting;
  protected $daypartTargetingType = DayPartTargeting::class;
  protected $daypartTargetingDataType = '';
  protected $geoTargetingType = CriteriaTargeting::class;
  protected $geoTargetingDataType = '';
  protected $inventorySizeTargetingType = InventorySizeTargeting::class;
  protected $inventorySizeTargetingDataType = '';
  protected $inventoryTypeTargetingType = InventoryTypeTargeting::class;
  protected $inventoryTypeTargetingDataType = '';
  protected $placementTargetingType = PlacementTargeting::class;
  protected $placementTargetingDataType = '';
  protected $technologyTargetingType = TechnologyTargeting::class;
  protected $technologyTargetingDataType = '';
  protected $userListTargetingType = CriteriaTargeting::class;
  protected $userListTargetingDataType = '';
  protected $videoTargetingType = VideoTargeting::class;
  protected $videoTargetingDataType = '';
  /** @param DayPartTargeting */
  public function setDaypartTargeting(DayPartTargeting $daypartTargeting)
  {
    $this->daypartTargeting = $daypartTargeting;
  }
  /** @return DayPartTargeting */
  public function getDaypartTargeting()
  {
    return $this->daypartTargeting;
  }
  /** @param CriteriaTargeting */
  public function setGeoTargeting(CriteriaTargeting $geoTargeting)
  {
    $this->geoTargeting = $geoTargeting;
  }
  /** @return CriteriaTargeting */
  public function getGeoTargeting()
  {
    return $this->geoTargeting;
  }
  /** @param InventorySizeTargeting */
  public function setInventorySizeTargeting(InventorySizeTargeting $inventorySizeTargeting)
  {
    $this->inventorySizeTargeting = $inventorySizeTargeting;
  }
  /** @return InventorySizeTargeting */
  public function getInventorySizeTargeting()
  {
    return $this->inventorySizeTargeting;
  }
  /** @param InventoryTypeTargeting */
  public function setInventoryTypeTargeting(InventoryTypeTargeting $inventoryTypeTargeting)
  {
    $this->inventoryTypeTargeting = $inventoryTypeTargeting;
  }
  /** @return InventoryTypeTargeting */
  public function getInventoryTypeTargeting()
  {
    return $this->inventoryTypeTargeting;
  }
  /** @param PlacementTargeting */
  public function setPlacementTargeting(PlacementTargeting $placementTargeting)
  {
    $this->placementTargeting = $placementTargeting;
  }
  /** @return PlacementTargeting */
  public function getPlacementTargeting()
  {
    return $this->placementTargeting;
  }
  /** @param TechnologyTargeting */
  public function setTechnologyTargeting(TechnologyTargeting $technologyTargeting)
  {
    $this->technologyTargeting = $technologyTargeting;
  }
  /** @return TechnologyTargeting */
  public function getTechnologyTargeting()
  {
    return $this->technologyTargeting;
  }
  /** @param CriteriaTargeting */
  public function setUserListTargeting(CriteriaTargeting $userListTargeting)
  {
    $this->userListTargeting = $userListTargeting;
  }
  /** @return CriteriaTargeting */
  public function getUserListTargeting()
  {
    return $this->userListTargeting;
  }
  /** @param VideoTargeting */
  public function setVideoTargeting(VideoTargeting $videoTargeting)
  {
    $this->videoTargeting = $videoTargeting;
  }
  /** @return VideoTargeting */
  public function getVideoTargeting()
  {
    return $this->videoTargeting;
  }
}

class MobileApplicationTargeting extends \Google\Model
{
  /** @var FirstPartyMobileApplicationTargeting */
  public $firstPartyTargeting;
  protected $firstPartyTargetingType = FirstPartyMobileApplicationTargeting::class;
  protected $firstPartyTargetingDataType = '';
  /** @param FirstPartyMobileApplicationTargeting */
  public function setFirstPartyTargeting(FirstPartyMobileApplicationTargeting $firstPartyTargeting)
  {
    $this->firstPartyTargeting = $firstPartyTargeting;
  }
  /** @return FirstPartyMobileApplicationTargeting */
  public function getFirstPartyTargeting()
  {
    return $this->firstPartyTargeting;
  }
}

class Money extends \Google\Model
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

class Note extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $creatorRole;
  /** @var string */
  public $note;

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
  public function setCreatorRole($creatorRole)
  {
    $this->creatorRole = $creatorRole;
  }
  /** @return string */
  public function getCreatorRole()
  {
    return $this->creatorRole;
  }
  /** @param string */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /** @return string */
  public function getNote()
  {
    return $this->note;
  }
}

class OperatingSystemTargeting extends \Google\Model
{
  /** @var CriteriaTargeting */
  public $operatingSystemCriteria;
  /** @var CriteriaTargeting */
  public $operatingSystemVersionCriteria;
  protected $operatingSystemCriteriaType = CriteriaTargeting::class;
  protected $operatingSystemCriteriaDataType = '';
  protected $operatingSystemVersionCriteriaType = CriteriaTargeting::class;
  protected $operatingSystemVersionCriteriaDataType = '';
  /** @param CriteriaTargeting */
  public function setOperatingSystemCriteria(CriteriaTargeting $operatingSystemCriteria)
  {
    $this->operatingSystemCriteria = $operatingSystemCriteria;
  }
  /** @return CriteriaTargeting */
  public function getOperatingSystemCriteria()
  {
    return $this->operatingSystemCriteria;
  }
  /** @param CriteriaTargeting */
  public function setOperatingSystemVersionCriteria(CriteriaTargeting $operatingSystemVersionCriteria)
  {
    $this->operatingSystemVersionCriteria = $operatingSystemVersionCriteria;
  }
  /** @return CriteriaTargeting */
  public function getOperatingSystemVersionCriteria()
  {
    return $this->operatingSystemVersionCriteria;
  }
}

class PauseFinalizedDealRequest extends \Google\Model
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

class PlacementTargeting extends \Google\Model
{
  /** @var MobileApplicationTargeting */
  public $mobileApplicationTargeting;
  /** @var UriTargeting */
  public $uriTargeting;
  protected $mobileApplicationTargetingType = MobileApplicationTargeting::class;
  protected $mobileApplicationTargetingDataType = '';
  protected $uriTargetingType = UriTargeting::class;
  protected $uriTargetingDataType = '';
  /** @param MobileApplicationTargeting */
  public function setMobileApplicationTargeting(MobileApplicationTargeting $mobileApplicationTargeting)
  {
    $this->mobileApplicationTargeting = $mobileApplicationTargeting;
  }
  /** @return MobileApplicationTargeting */
  public function getMobileApplicationTargeting()
  {
    return $this->mobileApplicationTargeting;
  }
  /** @param UriTargeting */
  public function setUriTargeting(UriTargeting $uriTargeting)
  {
    $this->uriTargeting = $uriTargeting;
  }
  /** @return UriTargeting */
  public function getUriTargeting()
  {
    return $this->uriTargeting;
  }
}

class PreferredDealTerms extends \Google\Model
{
  /** @var Price */
  public $fixedPrice;
  protected $fixedPriceType = Price::class;
  protected $fixedPriceDataType = '';
  /** @param Price */
  public function setFixedPrice(Price $fixedPrice)
  {
    $this->fixedPrice = $fixedPrice;
  }
  /** @return Price */
  public function getFixedPrice()
  {
    return $this->fixedPrice;
  }
}

class Price extends \Google\Model
{
  /** @var Money */
  public $amount;
  /** @var string */
  public $type;
  protected $amountType = Money::class;
  protected $amountDataType = '';
  /** @param Money */
  public function setAmount(Money $amount)
  {
    $this->amount = $amount;
  }
  /** @return Money */
  public function getAmount()
  {
    return $this->amount;
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

class PrivateAuctionTerms extends \Google\Model
{
  /** @var Price */
  public $floorPrice;
  /** @var bool */
  public $openAuctionAllowed;
  protected $floorPriceType = Price::class;
  protected $floorPriceDataType = '';
  /** @param Price */
  public function setFloorPrice(Price $floorPrice)
  {
    $this->floorPrice = $floorPrice;
  }
  /** @return Price */
  public function getFloorPrice()
  {
    return $this->floorPrice;
  }
  /** @param bool */
  public function setOpenAuctionAllowed($openAuctionAllowed)
  {
    $this->openAuctionAllowed = $openAuctionAllowed;
  }
  /** @return bool */
  public function getOpenAuctionAllowed()
  {
    return $this->openAuctionAllowed;
  }
}

class PrivateData extends \Google\Model
{
  /** @var string */
  public $referenceId;

  /** @param string */
  public function setReferenceId($referenceId)
  {
    $this->referenceId = $referenceId;
  }
  /** @return string */
  public function getReferenceId()
  {
    return $this->referenceId;
  }
}

class ProgrammaticGuaranteedTerms extends \Google\Model
{
  /** @var Price */
  public $fixedPrice;
  /** @var string */
  public $guaranteedLooks;
  /** @var string */
  public $impressionCap;
  /** @var string */
  public $minimumDailyLooks;
  /** @var string */
  public $percentShareOfVoice;
  /** @var string */
  public $reservationType;
  protected $fixedPriceType = Price::class;
  protected $fixedPriceDataType = '';
  /** @param Price */
  public function setFixedPrice(Price $fixedPrice)
  {
    $this->fixedPrice = $fixedPrice;
  }
  /** @return Price */
  public function getFixedPrice()
  {
    return $this->fixedPrice;
  }
  /** @param string */
  public function setGuaranteedLooks($guaranteedLooks)
  {
    $this->guaranteedLooks = $guaranteedLooks;
  }
  /** @return string */
  public function getGuaranteedLooks()
  {
    return $this->guaranteedLooks;
  }
  /** @param string */
  public function setImpressionCap($impressionCap)
  {
    $this->impressionCap = $impressionCap;
  }
  /** @return string */
  public function getImpressionCap()
  {
    return $this->impressionCap;
  }
  /** @param string */
  public function setMinimumDailyLooks($minimumDailyLooks)
  {
    $this->minimumDailyLooks = $minimumDailyLooks;
  }
  /** @return string */
  public function getMinimumDailyLooks()
  {
    return $this->minimumDailyLooks;
  }
  /** @param string */
  public function setPercentShareOfVoice($percentShareOfVoice)
  {
    $this->percentShareOfVoice = $percentShareOfVoice;
  }
  /** @return string */
  public function getPercentShareOfVoice()
  {
    return $this->percentShareOfVoice;
  }
  /** @param string */
  public function setReservationType($reservationType)
  {
    $this->reservationType = $reservationType;
  }
  /** @return string */
  public function getReservationType()
  {
    return $this->reservationType;
  }
}

class Proposal extends \Google\Collection
{
  /** @var string */
  public $billedBuyer;
  /** @var string */
  public $buyer;
  /** @var Contact[] */
  public $buyerContacts;
  /** @var PrivateData */
  public $buyerPrivateData;
  /** @var string */
  public $client;
  /** @var string */
  public $dealType;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $isRenegotiating;
  /** @var string */
  public $lastUpdaterOrCommentorRole;
  /** @var string */
  public $name;
  /** @var Note[] */
  public $notes;
  /** @var string */
  public $originatorRole;
  /** @var bool */
  public $pausingConsented;
  /** @var string */
  public $proposalRevision;
  /** @var string */
  public $publisherProfile;
  /** @var Contact[] */
  public $sellerContacts;
  /** @var string */
  public $state;
  /** @var string */
  public $termsAndConditions;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'sellerContacts';
  protected $buyerContactsType = Contact::class;
  protected $buyerContactsDataType = 'array';
  protected $buyerPrivateDataType = PrivateData::class;
  protected $buyerPrivateDataDataType = '';
  protected $notesType = Note::class;
  protected $notesDataType = 'array';
  protected $sellerContactsType = Contact::class;
  protected $sellerContactsDataType = 'array';
  /** @param string */
  public function setBilledBuyer($billedBuyer)
  {
    $this->billedBuyer = $billedBuyer;
  }
  /** @return string */
  public function getBilledBuyer()
  {
    return $this->billedBuyer;
  }
  /** @param string */
  public function setBuyer($buyer)
  {
    $this->buyer = $buyer;
  }
  /** @return string */
  public function getBuyer()
  {
    return $this->buyer;
  }
  /** @param Contact[] */
  public function setBuyerContacts($buyerContacts)
  {
    $this->buyerContacts = $buyerContacts;
  }
  /** @return Contact[] */
  public function getBuyerContacts()
  {
    return $this->buyerContacts;
  }
  /** @param PrivateData */
  public function setBuyerPrivateData(PrivateData $buyerPrivateData)
  {
    $this->buyerPrivateData = $buyerPrivateData;
  }
  /** @return PrivateData */
  public function getBuyerPrivateData()
  {
    return $this->buyerPrivateData;
  }
  /** @param string */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /** @return string */
  public function getClient()
  {
    return $this->client;
  }
  /** @param string */
  public function setDealType($dealType)
  {
    $this->dealType = $dealType;
  }
  /** @return string */
  public function getDealType()
  {
    return $this->dealType;
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
  /** @param bool */
  public function setIsRenegotiating($isRenegotiating)
  {
    $this->isRenegotiating = $isRenegotiating;
  }
  /** @return bool */
  public function getIsRenegotiating()
  {
    return $this->isRenegotiating;
  }
  /** @param string */
  public function setLastUpdaterOrCommentorRole($lastUpdaterOrCommentorRole)
  {
    $this->lastUpdaterOrCommentorRole = $lastUpdaterOrCommentorRole;
  }
  /** @return string */
  public function getLastUpdaterOrCommentorRole()
  {
    return $this->lastUpdaterOrCommentorRole;
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
  /** @param Note[] */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return Note[] */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param string */
  public function setOriginatorRole($originatorRole)
  {
    $this->originatorRole = $originatorRole;
  }
  /** @return string */
  public function getOriginatorRole()
  {
    return $this->originatorRole;
  }
  /** @param bool */
  public function setPausingConsented($pausingConsented)
  {
    $this->pausingConsented = $pausingConsented;
  }
  /** @return bool */
  public function getPausingConsented()
  {
    return $this->pausingConsented;
  }
  /** @param string */
  public function setProposalRevision($proposalRevision)
  {
    $this->proposalRevision = $proposalRevision;
  }
  /** @return string */
  public function getProposalRevision()
  {
    return $this->proposalRevision;
  }
  /** @param string */
  public function setPublisherProfile($publisherProfile)
  {
    $this->publisherProfile = $publisherProfile;
  }
  /** @return string */
  public function getPublisherProfile()
  {
    return $this->publisherProfile;
  }
  /** @param Contact[] */
  public function setSellerContacts($sellerContacts)
  {
    $this->sellerContacts = $sellerContacts;
  }
  /** @return Contact[] */
  public function getSellerContacts()
  {
    return $this->sellerContacts;
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
  public function setTermsAndConditions($termsAndConditions)
  {
    $this->termsAndConditions = $termsAndConditions;
  }
  /** @return string */
  public function getTermsAndConditions()
  {
    return $this->termsAndConditions;
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

class PublisherProfile extends \Google\Collection
{
  /** @var string */
  public $audienceDescription;
  /** @var string */
  public $directDealsContact;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $domains;
  /** @var bool */
  public $isParent;
  /** @var string */
  public $logoUrl;
  /** @var string */
  public $mediaKitUrl;
  /** @var PublisherProfileMobileApplication[] */
  public $mobileApps;
  /** @var string */
  public $name;
  /** @var string */
  public $overview;
  /** @var string */
  public $pitchStatement;
  /** @var string */
  public $programmaticDealsContact;
  /** @var string */
  public $publisherCode;
  /** @var string */
  public $samplePageUrl;
  /** @var string[] */
  public $topHeadlines;
  protected $collection_key = 'topHeadlines';
  protected $mobileAppsType = PublisherProfileMobileApplication::class;
  protected $mobileAppsDataType = 'array';
  /** @param string */
  public function setAudienceDescription($audienceDescription)
  {
    $this->audienceDescription = $audienceDescription;
  }
  /** @return string */
  public function getAudienceDescription()
  {
    return $this->audienceDescription;
  }
  /** @param string */
  public function setDirectDealsContact($directDealsContact)
  {
    $this->directDealsContact = $directDealsContact;
  }
  /** @return string */
  public function getDirectDealsContact()
  {
    return $this->directDealsContact;
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
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /** @return string[] */
  public function getDomains()
  {
    return $this->domains;
  }
  /** @param bool */
  public function setIsParent($isParent)
  {
    $this->isParent = $isParent;
  }
  /** @return bool */
  public function getIsParent()
  {
    return $this->isParent;
  }
  /** @param string */
  public function setLogoUrl($logoUrl)
  {
    $this->logoUrl = $logoUrl;
  }
  /** @return string */
  public function getLogoUrl()
  {
    return $this->logoUrl;
  }
  /** @param string */
  public function setMediaKitUrl($mediaKitUrl)
  {
    $this->mediaKitUrl = $mediaKitUrl;
  }
  /** @return string */
  public function getMediaKitUrl()
  {
    return $this->mediaKitUrl;
  }
  /** @param PublisherProfileMobileApplication[] */
  public function setMobileApps($mobileApps)
  {
    $this->mobileApps = $mobileApps;
  }
  /** @return PublisherProfileMobileApplication[] */
  public function getMobileApps()
  {
    return $this->mobileApps;
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
  public function setOverview($overview)
  {
    $this->overview = $overview;
  }
  /** @return string */
  public function getOverview()
  {
    return $this->overview;
  }
  /** @param string */
  public function setPitchStatement($pitchStatement)
  {
    $this->pitchStatement = $pitchStatement;
  }
  /** @return string */
  public function getPitchStatement()
  {
    return $this->pitchStatement;
  }
  /** @param string */
  public function setProgrammaticDealsContact($programmaticDealsContact)
  {
    $this->programmaticDealsContact = $programmaticDealsContact;
  }
  /** @return string */
  public function getProgrammaticDealsContact()
  {
    return $this->programmaticDealsContact;
  }
  /** @param string */
  public function setPublisherCode($publisherCode)
  {
    $this->publisherCode = $publisherCode;
  }
  /** @return string */
  public function getPublisherCode()
  {
    return $this->publisherCode;
  }
  /** @param string */
  public function setSamplePageUrl($samplePageUrl)
  {
    $this->samplePageUrl = $samplePageUrl;
  }
  /** @return string */
  public function getSamplePageUrl()
  {
    return $this->samplePageUrl;
  }
  /** @param string[] */
  public function setTopHeadlines($topHeadlines)
  {
    $this->topHeadlines = $topHeadlines;
  }
  /** @return string[] */
  public function getTopHeadlines()
  {
    return $this->topHeadlines;
  }
}

class PublisherProfileMobileApplication extends \Google\Model
{
  /** @var string */
  public $appStore;
  /** @var string */
  public $externalAppId;
  /** @var string */
  public $name;

  /** @param string */
  public function setAppStore($appStore)
  {
    $this->appStore = $appStore;
  }
  /** @return string */
  public function getAppStore()
  {
    return $this->appStore;
  }
  /** @param string */
  public function setExternalAppId($externalAppId)
  {
    $this->externalAppId = $externalAppId;
  }
  /** @return string */
  public function getExternalAppId()
  {
    return $this->externalAppId;
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

class ResumeFinalizedDealRequest extends \Google\Model
{
}

class RtbMetrics extends \Google\Model
{
  /** @var string */
  public $adImpressions7Days;
  public $bidRate7Days;
  /** @var string */
  public $bidRequests7Days;
  /** @var string */
  public $bids7Days;
  public $filteredBidRate7Days;
  public $mustBidRateCurrentMonth;

  /** @param string */
  public function setAdImpressions7Days($adImpressions7Days)
  {
    $this->adImpressions7Days = $adImpressions7Days;
  }
  /** @return string */
  public function getAdImpressions7Days()
  {
    return $this->adImpressions7Days;
  }
  public function setBidRate7Days($bidRate7Days)
  {
    $this->bidRate7Days = $bidRate7Days;
  }
  public function getBidRate7Days()
  {
    return $this->bidRate7Days;
  }
  /** @param string */
  public function setBidRequests7Days($bidRequests7Days)
  {
    $this->bidRequests7Days = $bidRequests7Days;
  }
  /** @return string */
  public function getBidRequests7Days()
  {
    return $this->bidRequests7Days;
  }
  /** @param string */
  public function setBids7Days($bids7Days)
  {
    $this->bids7Days = $bids7Days;
  }
  /** @return string */
  public function getBids7Days()
  {
    return $this->bids7Days;
  }
  public function setFilteredBidRate7Days($filteredBidRate7Days)
  {
    $this->filteredBidRate7Days = $filteredBidRate7Days;
  }
  public function getFilteredBidRate7Days()
  {
    return $this->filteredBidRate7Days;
  }
  public function setMustBidRateCurrentMonth($mustBidRateCurrentMonth)
  {
    $this->mustBidRateCurrentMonth = $mustBidRateCurrentMonth;
  }
  public function getMustBidRateCurrentMonth()
  {
    return $this->mustBidRateCurrentMonth;
  }
}

class SendRfpRequest extends \Google\Collection
{
  /** @var Contact[] */
  public $buyerContacts;
  /** @var string */
  public $client;
  /** @var string */
  public $displayName;
  /** @var Money */
  public $estimatedGrossSpend;
  /** @var string */
  public $flightEndTime;
  /** @var string */
  public $flightStartTime;
  /** @var CriteriaTargeting */
  public $geoTargeting;
  /** @var InventorySizeTargeting */
  public $inventorySizeTargeting;
  /** @var string */
  public $note;
  /** @var PreferredDealTerms */
  public $preferredDealTerms;
  /** @var ProgrammaticGuaranteedTerms */
  public $programmaticGuaranteedTerms;
  /** @var string */
  public $publisherProfile;
  protected $collection_key = 'buyerContacts';
  protected $buyerContactsType = Contact::class;
  protected $buyerContactsDataType = 'array';
  protected $estimatedGrossSpendType = Money::class;
  protected $estimatedGrossSpendDataType = '';
  protected $geoTargetingType = CriteriaTargeting::class;
  protected $geoTargetingDataType = '';
  protected $inventorySizeTargetingType = InventorySizeTargeting::class;
  protected $inventorySizeTargetingDataType = '';
  protected $preferredDealTermsType = PreferredDealTerms::class;
  protected $preferredDealTermsDataType = '';
  protected $programmaticGuaranteedTermsType = ProgrammaticGuaranteedTerms::class;
  protected $programmaticGuaranteedTermsDataType = '';
  /** @param Contact[] */
  public function setBuyerContacts($buyerContacts)
  {
    $this->buyerContacts = $buyerContacts;
  }
  /** @return Contact[] */
  public function getBuyerContacts()
  {
    return $this->buyerContacts;
  }
  /** @param string */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /** @return string */
  public function getClient()
  {
    return $this->client;
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
  /** @param Money */
  public function setEstimatedGrossSpend(Money $estimatedGrossSpend)
  {
    $this->estimatedGrossSpend = $estimatedGrossSpend;
  }
  /** @return Money */
  public function getEstimatedGrossSpend()
  {
    return $this->estimatedGrossSpend;
  }
  /** @param string */
  public function setFlightEndTime($flightEndTime)
  {
    $this->flightEndTime = $flightEndTime;
  }
  /** @return string */
  public function getFlightEndTime()
  {
    return $this->flightEndTime;
  }
  /** @param string */
  public function setFlightStartTime($flightStartTime)
  {
    $this->flightStartTime = $flightStartTime;
  }
  /** @return string */
  public function getFlightStartTime()
  {
    return $this->flightStartTime;
  }
  /** @param CriteriaTargeting */
  public function setGeoTargeting(CriteriaTargeting $geoTargeting)
  {
    $this->geoTargeting = $geoTargeting;
  }
  /** @return CriteriaTargeting */
  public function getGeoTargeting()
  {
    return $this->geoTargeting;
  }
  /** @param InventorySizeTargeting */
  public function setInventorySizeTargeting(InventorySizeTargeting $inventorySizeTargeting)
  {
    $this->inventorySizeTargeting = $inventorySizeTargeting;
  }
  /** @return InventorySizeTargeting */
  public function getInventorySizeTargeting()
  {
    return $this->inventorySizeTargeting;
  }
  /** @param string */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /** @return string */
  public function getNote()
  {
    return $this->note;
  }
  /** @param PreferredDealTerms */
  public function setPreferredDealTerms(PreferredDealTerms $preferredDealTerms)
  {
    $this->preferredDealTerms = $preferredDealTerms;
  }
  /** @return PreferredDealTerms */
  public function getPreferredDealTerms()
  {
    return $this->preferredDealTerms;
  }
  /** @param ProgrammaticGuaranteedTerms */
  public function setProgrammaticGuaranteedTerms(ProgrammaticGuaranteedTerms $programmaticGuaranteedTerms)
  {
    $this->programmaticGuaranteedTerms = $programmaticGuaranteedTerms;
  }
  /** @return ProgrammaticGuaranteedTerms */
  public function getProgrammaticGuaranteedTerms()
  {
    return $this->programmaticGuaranteedTerms;
  }
  /** @param string */
  public function setPublisherProfile($publisherProfile)
  {
    $this->publisherProfile = $publisherProfile;
  }
  /** @return string */
  public function getPublisherProfile()
  {
    return $this->publisherProfile;
  }
}

class SetReadyToServeRequest extends \Google\Model
{
}

class SubscribeAuctionPackageRequest extends \Google\Model
{
}

class SubscribeClientsRequest extends \Google\Collection
{
  /** @var string[] */
  public $clients;
  protected $collection_key = 'clients';
  /** @param string[] */
  public function setClients($clients)
  {
    $this->clients = $clients;
  }
  /** @return string[] */
  public function getClients()
  {
    return $this->clients;
  }
}

class TechnologyTargeting extends \Google\Model
{
  /** @var CriteriaTargeting */
  public $deviceCapabilityTargeting;
  /** @var CriteriaTargeting */
  public $deviceCategoryTargeting;
  /** @var OperatingSystemTargeting */
  public $operatingSystemTargeting;
  protected $deviceCapabilityTargetingType = CriteriaTargeting::class;
  protected $deviceCapabilityTargetingDataType = '';
  protected $deviceCategoryTargetingType = CriteriaTargeting::class;
  protected $deviceCategoryTargetingDataType = '';
  protected $operatingSystemTargetingType = OperatingSystemTargeting::class;
  protected $operatingSystemTargetingDataType = '';
  /** @param CriteriaTargeting */
  public function setDeviceCapabilityTargeting(CriteriaTargeting $deviceCapabilityTargeting)
  {
    $this->deviceCapabilityTargeting = $deviceCapabilityTargeting;
  }
  /** @return CriteriaTargeting */
  public function getDeviceCapabilityTargeting()
  {
    return $this->deviceCapabilityTargeting;
  }
  /** @param CriteriaTargeting */
  public function setDeviceCategoryTargeting(CriteriaTargeting $deviceCategoryTargeting)
  {
    $this->deviceCategoryTargeting = $deviceCategoryTargeting;
  }
  /** @return CriteriaTargeting */
  public function getDeviceCategoryTargeting()
  {
    return $this->deviceCategoryTargeting;
  }
  /** @param OperatingSystemTargeting */
  public function setOperatingSystemTargeting(OperatingSystemTargeting $operatingSystemTargeting)
  {
    $this->operatingSystemTargeting = $operatingSystemTargeting;
  }
  /** @return OperatingSystemTargeting */
  public function getOperatingSystemTargeting()
  {
    return $this->operatingSystemTargeting;
  }
}

class TimeOfDay extends \Google\Model
{
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;

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

class UnsubscribeAuctionPackageRequest extends \Google\Model
{
}

class UnsubscribeClientsRequest extends \Google\Collection
{
  /** @var string[] */
  public $clients;
  protected $collection_key = 'clients';
  /** @param string[] */
  public function setClients($clients)
  {
    $this->clients = $clients;
  }
  /** @return string[] */
  public function getClients()
  {
    return $this->clients;
  }
}

class UpdateDealRequest extends \Google\Model
{
  /** @var Deal */
  public $deal;
  /** @var string */
  public $updateMask;
  protected $dealType = Deal::class;
  protected $dealDataType = '';
  /** @param Deal */
  public function setDeal(Deal $deal)
  {
    $this->deal = $deal;
  }
  /** @return Deal */
  public function getDeal()
  {
    return $this->deal;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

class UriTargeting extends \Google\Collection
{
  /** @var string[] */
  public $excludedUris;
  /** @var string[] */
  public $targetedUris;
  protected $collection_key = 'targetedUris';
  /** @param string[] */
  public function setExcludedUris($excludedUris)
  {
    $this->excludedUris = $excludedUris;
  }
  /** @return string[] */
  public function getExcludedUris()
  {
    return $this->excludedUris;
  }
  /** @param string[] */
  public function setTargetedUris($targetedUris)
  {
    $this->targetedUris = $targetedUris;
  }
  /** @return string[] */
  public function getTargetedUris()
  {
    return $this->targetedUris;
  }
}

class VideoTargeting extends \Google\Collection
{
  /** @var string[] */
  public $excludedPositionTypes;
  /** @var string[] */
  public $targetedPositionTypes;
  protected $collection_key = 'targetedPositionTypes';
  /** @param string[] */
  public function setExcludedPositionTypes($excludedPositionTypes)
  {
    $this->excludedPositionTypes = $excludedPositionTypes;
  }
  /** @return string[] */
  public function getExcludedPositionTypes()
  {
    return $this->excludedPositionTypes;
  }
  /** @param string[] */
  public function setTargetedPositionTypes($targetedPositionTypes)
  {
    $this->targetedPositionTypes = $targetedPositionTypes;
  }
  /** @return string[] */
  public function getTargetedPositionTypes()
  {
    return $this->targetedPositionTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AcceptProposalRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_AcceptProposalRequest');
class_alias(ActivateClientRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_ActivateClientRequest');
class_alias(ActivateClientUserRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_ActivateClientUserRequest');
class_alias(AdSize::class, 'Google_Service_AuthorizedBuyersMarketplace_AdSize');
class_alias(AddCreativeRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_AddCreativeRequest');
class_alias(AddNoteRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_AddNoteRequest');
class_alias(AuctionPackage::class, 'Google_Service_AuthorizedBuyersMarketplace_AuctionPackage');
class_alias(AuthorizedbuyersmarketplaceEmpty::class, 'Google_Service_AuthorizedBuyersMarketplace_AuthorizedbuyersmarketplaceEmpty');
class_alias(BatchUpdateDealsRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_BatchUpdateDealsRequest');
class_alias(BatchUpdateDealsResponse::class, 'Google_Service_AuthorizedBuyersMarketplace_BatchUpdateDealsResponse');
class_alias(CancelNegotiationRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_CancelNegotiationRequest');
class_alias(Client::class, 'Google_Service_AuthorizedBuyersMarketplace_Client');
class_alias(ClientUser::class, 'Google_Service_AuthorizedBuyersMarketplace_ClientUser');
class_alias(Contact::class, 'Google_Service_AuthorizedBuyersMarketplace_Contact');
class_alias(CreativeRequirements::class, 'Google_Service_AuthorizedBuyersMarketplace_CreativeRequirements');
class_alias(CriteriaTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_CriteriaTargeting');
class_alias(DayPart::class, 'Google_Service_AuthorizedBuyersMarketplace_DayPart');
class_alias(DayPartTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_DayPartTargeting');
class_alias(DeactivateClientRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_DeactivateClientRequest');
class_alias(DeactivateClientUserRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_DeactivateClientUserRequest');
class_alias(Deal::class, 'Google_Service_AuthorizedBuyersMarketplace_Deal');
class_alias(DealPausingInfo::class, 'Google_Service_AuthorizedBuyersMarketplace_DealPausingInfo');
class_alias(DeliveryControl::class, 'Google_Service_AuthorizedBuyersMarketplace_DeliveryControl');
class_alias(FinalizedDeal::class, 'Google_Service_AuthorizedBuyersMarketplace_FinalizedDeal');
class_alias(FirstPartyMobileApplicationTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_FirstPartyMobileApplicationTargeting');
class_alias(FrequencyCap::class, 'Google_Service_AuthorizedBuyersMarketplace_FrequencyCap');
class_alias(InventorySizeTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_InventorySizeTargeting');
class_alias(InventoryTypeTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_InventoryTypeTargeting');
class_alias(ListAuctionPackagesResponse::class, 'Google_Service_AuthorizedBuyersMarketplace_ListAuctionPackagesResponse');
class_alias(ListClientUsersResponse::class, 'Google_Service_AuthorizedBuyersMarketplace_ListClientUsersResponse');
class_alias(ListClientsResponse::class, 'Google_Service_AuthorizedBuyersMarketplace_ListClientsResponse');
class_alias(ListDealsResponse::class, 'Google_Service_AuthorizedBuyersMarketplace_ListDealsResponse');
class_alias(ListFinalizedDealsResponse::class, 'Google_Service_AuthorizedBuyersMarketplace_ListFinalizedDealsResponse');
class_alias(ListProposalsResponse::class, 'Google_Service_AuthorizedBuyersMarketplace_ListProposalsResponse');
class_alias(ListPublisherProfilesResponse::class, 'Google_Service_AuthorizedBuyersMarketplace_ListPublisherProfilesResponse');
class_alias(MarketplaceTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_MarketplaceTargeting');
class_alias(MobileApplicationTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_MobileApplicationTargeting');
class_alias(Money::class, 'Google_Service_AuthorizedBuyersMarketplace_Money');
class_alias(Note::class, 'Google_Service_AuthorizedBuyersMarketplace_Note');
class_alias(OperatingSystemTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_OperatingSystemTargeting');
class_alias(PauseFinalizedDealRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_PauseFinalizedDealRequest');
class_alias(PlacementTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_PlacementTargeting');
class_alias(PreferredDealTerms::class, 'Google_Service_AuthorizedBuyersMarketplace_PreferredDealTerms');
class_alias(Price::class, 'Google_Service_AuthorizedBuyersMarketplace_Price');
class_alias(PrivateAuctionTerms::class, 'Google_Service_AuthorizedBuyersMarketplace_PrivateAuctionTerms');
class_alias(PrivateData::class, 'Google_Service_AuthorizedBuyersMarketplace_PrivateData');
class_alias(ProgrammaticGuaranteedTerms::class, 'Google_Service_AuthorizedBuyersMarketplace_ProgrammaticGuaranteedTerms');
class_alias(Proposal::class, 'Google_Service_AuthorizedBuyersMarketplace_Proposal');
class_alias(PublisherProfile::class, 'Google_Service_AuthorizedBuyersMarketplace_PublisherProfile');
class_alias(PublisherProfileMobileApplication::class, 'Google_Service_AuthorizedBuyersMarketplace_PublisherProfileMobileApplication');
class_alias(ResumeFinalizedDealRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_ResumeFinalizedDealRequest');
class_alias(RtbMetrics::class, 'Google_Service_AuthorizedBuyersMarketplace_RtbMetrics');
class_alias(SendRfpRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_SendRfpRequest');
class_alias(SetReadyToServeRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_SetReadyToServeRequest');
class_alias(SubscribeAuctionPackageRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_SubscribeAuctionPackageRequest');
class_alias(SubscribeClientsRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_SubscribeClientsRequest');
class_alias(TechnologyTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_TechnologyTargeting');
class_alias(TimeOfDay::class, 'Google_Service_AuthorizedBuyersMarketplace_TimeOfDay');
class_alias(TimeZone::class, 'Google_Service_AuthorizedBuyersMarketplace_TimeZone');
class_alias(UnsubscribeAuctionPackageRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_UnsubscribeAuctionPackageRequest');
class_alias(UnsubscribeClientsRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_UnsubscribeClientsRequest');
class_alias(UpdateDealRequest::class, 'Google_Service_AuthorizedBuyersMarketplace_UpdateDealRequest');
class_alias(UriTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_UriTargeting');
class_alias(VideoTargeting::class, 'Google_Service_AuthorizedBuyersMarketplace_VideoTargeting');
