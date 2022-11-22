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

namespace Google\Service\Localservices;

class GoogleAdsHomeservicesLocalservicesV1AccountReport extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var GoogleAdsHomeservicesLocalservicesV1AggregatorInfo */
  public $aggregatorInfo;
  public $averageFiveStarRating;
  public $averageWeeklyBudget;
  /** @var string */
  public $businessName;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $currentPeriodChargedLeads;
  /** @var string */
  public $currentPeriodConnectedPhoneCalls;
  /** @var string */
  public $currentPeriodPhoneCalls;
  public $currentPeriodTotalCost;
  /** @var string */
  public $impressionsLastTwoDays;
  public $phoneLeadResponsiveness;
  /** @var string */
  public $previousPeriodChargedLeads;
  /** @var string */
  public $previousPeriodConnectedPhoneCalls;
  /** @var string */
  public $previousPeriodPhoneCalls;
  public $previousPeriodTotalCost;
  /** @var int */
  public $totalReview;
  protected $aggregatorInfoType = GoogleAdsHomeservicesLocalservicesV1AggregatorInfo::class;
  protected $aggregatorInfoDataType = '';
  /** @param string */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /** @return string */
  public function getAccountId()
  {
    return $this->accountId;
  }
  /** @param GoogleAdsHomeservicesLocalservicesV1AggregatorInfo */
  public function setAggregatorInfo(GoogleAdsHomeservicesLocalservicesV1AggregatorInfo $aggregatorInfo)
  {
    $this->aggregatorInfo = $aggregatorInfo;
  }
  /** @return GoogleAdsHomeservicesLocalservicesV1AggregatorInfo */
  public function getAggregatorInfo()
  {
    return $this->aggregatorInfo;
  }
  public function setAverageFiveStarRating($averageFiveStarRating)
  {
    $this->averageFiveStarRating = $averageFiveStarRating;
  }
  public function getAverageFiveStarRating()
  {
    return $this->averageFiveStarRating;
  }
  public function setAverageWeeklyBudget($averageWeeklyBudget)
  {
    $this->averageWeeklyBudget = $averageWeeklyBudget;
  }
  public function getAverageWeeklyBudget()
  {
    return $this->averageWeeklyBudget;
  }
  /** @param string */
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  /** @return string */
  public function getBusinessName()
  {
    return $this->businessName;
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
  public function setCurrentPeriodChargedLeads($currentPeriodChargedLeads)
  {
    $this->currentPeriodChargedLeads = $currentPeriodChargedLeads;
  }
  /** @return string */
  public function getCurrentPeriodChargedLeads()
  {
    return $this->currentPeriodChargedLeads;
  }
  /** @param string */
  public function setCurrentPeriodConnectedPhoneCalls($currentPeriodConnectedPhoneCalls)
  {
    $this->currentPeriodConnectedPhoneCalls = $currentPeriodConnectedPhoneCalls;
  }
  /** @return string */
  public function getCurrentPeriodConnectedPhoneCalls()
  {
    return $this->currentPeriodConnectedPhoneCalls;
  }
  /** @param string */
  public function setCurrentPeriodPhoneCalls($currentPeriodPhoneCalls)
  {
    $this->currentPeriodPhoneCalls = $currentPeriodPhoneCalls;
  }
  /** @return string */
  public function getCurrentPeriodPhoneCalls()
  {
    return $this->currentPeriodPhoneCalls;
  }
  public function setCurrentPeriodTotalCost($currentPeriodTotalCost)
  {
    $this->currentPeriodTotalCost = $currentPeriodTotalCost;
  }
  public function getCurrentPeriodTotalCost()
  {
    return $this->currentPeriodTotalCost;
  }
  /** @param string */
  public function setImpressionsLastTwoDays($impressionsLastTwoDays)
  {
    $this->impressionsLastTwoDays = $impressionsLastTwoDays;
  }
  /** @return string */
  public function getImpressionsLastTwoDays()
  {
    return $this->impressionsLastTwoDays;
  }
  public function setPhoneLeadResponsiveness($phoneLeadResponsiveness)
  {
    $this->phoneLeadResponsiveness = $phoneLeadResponsiveness;
  }
  public function getPhoneLeadResponsiveness()
  {
    return $this->phoneLeadResponsiveness;
  }
  /** @param string */
  public function setPreviousPeriodChargedLeads($previousPeriodChargedLeads)
  {
    $this->previousPeriodChargedLeads = $previousPeriodChargedLeads;
  }
  /** @return string */
  public function getPreviousPeriodChargedLeads()
  {
    return $this->previousPeriodChargedLeads;
  }
  /** @param string */
  public function setPreviousPeriodConnectedPhoneCalls($previousPeriodConnectedPhoneCalls)
  {
    $this->previousPeriodConnectedPhoneCalls = $previousPeriodConnectedPhoneCalls;
  }
  /** @return string */
  public function getPreviousPeriodConnectedPhoneCalls()
  {
    return $this->previousPeriodConnectedPhoneCalls;
  }
  /** @param string */
  public function setPreviousPeriodPhoneCalls($previousPeriodPhoneCalls)
  {
    $this->previousPeriodPhoneCalls = $previousPeriodPhoneCalls;
  }
  /** @return string */
  public function getPreviousPeriodPhoneCalls()
  {
    return $this->previousPeriodPhoneCalls;
  }
  public function setPreviousPeriodTotalCost($previousPeriodTotalCost)
  {
    $this->previousPeriodTotalCost = $previousPeriodTotalCost;
  }
  public function getPreviousPeriodTotalCost()
  {
    return $this->previousPeriodTotalCost;
  }
  /** @param int */
  public function setTotalReview($totalReview)
  {
    $this->totalReview = $totalReview;
  }
  /** @return int */
  public function getTotalReview()
  {
    return $this->totalReview;
  }
}

class GoogleAdsHomeservicesLocalservicesV1AggregatorInfo extends \Google\Model
{
  /** @var string */
  public $aggregatorProviderId;

  /** @param string */
  public function setAggregatorProviderId($aggregatorProviderId)
  {
    $this->aggregatorProviderId = $aggregatorProviderId;
  }
  /** @return string */
  public function getAggregatorProviderId()
  {
    return $this->aggregatorProviderId;
  }
}

class GoogleAdsHomeservicesLocalservicesV1BookingLead extends \Google\Model
{
  /** @var string */
  public $bookingAppointmentTimestamp;
  /** @var string */
  public $consumerEmail;
  /** @var string */
  public $consumerPhoneNumber;
  /** @var string */
  public $customerName;
  /** @var string */
  public $jobType;

  /** @param string */
  public function setBookingAppointmentTimestamp($bookingAppointmentTimestamp)
  {
    $this->bookingAppointmentTimestamp = $bookingAppointmentTimestamp;
  }
  /** @return string */
  public function getBookingAppointmentTimestamp()
  {
    return $this->bookingAppointmentTimestamp;
  }
  /** @param string */
  public function setConsumerEmail($consumerEmail)
  {
    $this->consumerEmail = $consumerEmail;
  }
  /** @return string */
  public function getConsumerEmail()
  {
    return $this->consumerEmail;
  }
  /** @param string */
  public function setConsumerPhoneNumber($consumerPhoneNumber)
  {
    $this->consumerPhoneNumber = $consumerPhoneNumber;
  }
  /** @return string */
  public function getConsumerPhoneNumber()
  {
    return $this->consumerPhoneNumber;
  }
  /** @param string */
  public function setCustomerName($customerName)
  {
    $this->customerName = $customerName;
  }
  /** @return string */
  public function getCustomerName()
  {
    return $this->customerName;
  }
  /** @param string */
  public function setJobType($jobType)
  {
    $this->jobType = $jobType;
  }
  /** @return string */
  public function getJobType()
  {
    return $this->jobType;
  }
}

class GoogleAdsHomeservicesLocalservicesV1DetailedLeadReport extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var GoogleAdsHomeservicesLocalservicesV1AggregatorInfo */
  public $aggregatorInfo;
  /** @var GoogleAdsHomeservicesLocalservicesV1BookingLead */
  public $bookingLead;
  /** @var string */
  public $businessName;
  /** @var string */
  public $chargeStatus;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $disputeStatus;
  /** @var string */
  public $geo;
  /** @var string */
  public $leadCategory;
  /** @var string */
  public $leadCreationTimestamp;
  /** @var string */
  public $leadId;
  public $leadPrice;
  /** @var string */
  public $leadType;
  /** @var GoogleAdsHomeservicesLocalservicesV1MessageLead */
  public $messageLead;
  /** @var GoogleAdsHomeservicesLocalservicesV1PhoneLead */
  public $phoneLead;
  /** @var GoogleTypeTimeZone */
  public $timezone;
  protected $aggregatorInfoType = GoogleAdsHomeservicesLocalservicesV1AggregatorInfo::class;
  protected $aggregatorInfoDataType = '';
  protected $bookingLeadType = GoogleAdsHomeservicesLocalservicesV1BookingLead::class;
  protected $bookingLeadDataType = '';
  protected $messageLeadType = GoogleAdsHomeservicesLocalservicesV1MessageLead::class;
  protected $messageLeadDataType = '';
  protected $phoneLeadType = GoogleAdsHomeservicesLocalservicesV1PhoneLead::class;
  protected $phoneLeadDataType = '';
  protected $timezoneType = GoogleTypeTimeZone::class;
  protected $timezoneDataType = '';
  /** @param string */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /** @return string */
  public function getAccountId()
  {
    return $this->accountId;
  }
  /** @param GoogleAdsHomeservicesLocalservicesV1AggregatorInfo */
  public function setAggregatorInfo(GoogleAdsHomeservicesLocalservicesV1AggregatorInfo $aggregatorInfo)
  {
    $this->aggregatorInfo = $aggregatorInfo;
  }
  /** @return GoogleAdsHomeservicesLocalservicesV1AggregatorInfo */
  public function getAggregatorInfo()
  {
    return $this->aggregatorInfo;
  }
  /** @param GoogleAdsHomeservicesLocalservicesV1BookingLead */
  public function setBookingLead(GoogleAdsHomeservicesLocalservicesV1BookingLead $bookingLead)
  {
    $this->bookingLead = $bookingLead;
  }
  /** @return GoogleAdsHomeservicesLocalservicesV1BookingLead */
  public function getBookingLead()
  {
    return $this->bookingLead;
  }
  /** @param string */
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  /** @return string */
  public function getBusinessName()
  {
    return $this->businessName;
  }
  /** @param string */
  public function setChargeStatus($chargeStatus)
  {
    $this->chargeStatus = $chargeStatus;
  }
  /** @return string */
  public function getChargeStatus()
  {
    return $this->chargeStatus;
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
  public function setDisputeStatus($disputeStatus)
  {
    $this->disputeStatus = $disputeStatus;
  }
  /** @return string */
  public function getDisputeStatus()
  {
    return $this->disputeStatus;
  }
  /** @param string */
  public function setGeo($geo)
  {
    $this->geo = $geo;
  }
  /** @return string */
  public function getGeo()
  {
    return $this->geo;
  }
  /** @param string */
  public function setLeadCategory($leadCategory)
  {
    $this->leadCategory = $leadCategory;
  }
  /** @return string */
  public function getLeadCategory()
  {
    return $this->leadCategory;
  }
  /** @param string */
  public function setLeadCreationTimestamp($leadCreationTimestamp)
  {
    $this->leadCreationTimestamp = $leadCreationTimestamp;
  }
  /** @return string */
  public function getLeadCreationTimestamp()
  {
    return $this->leadCreationTimestamp;
  }
  /** @param string */
  public function setLeadId($leadId)
  {
    $this->leadId = $leadId;
  }
  /** @return string */
  public function getLeadId()
  {
    return $this->leadId;
  }
  public function setLeadPrice($leadPrice)
  {
    $this->leadPrice = $leadPrice;
  }
  public function getLeadPrice()
  {
    return $this->leadPrice;
  }
  /** @param string */
  public function setLeadType($leadType)
  {
    $this->leadType = $leadType;
  }
  /** @return string */
  public function getLeadType()
  {
    return $this->leadType;
  }
  /** @param GoogleAdsHomeservicesLocalservicesV1MessageLead */
  public function setMessageLead(GoogleAdsHomeservicesLocalservicesV1MessageLead $messageLead)
  {
    $this->messageLead = $messageLead;
  }
  /** @return GoogleAdsHomeservicesLocalservicesV1MessageLead */
  public function getMessageLead()
  {
    return $this->messageLead;
  }
  /** @param GoogleAdsHomeservicesLocalservicesV1PhoneLead */
  public function setPhoneLead(GoogleAdsHomeservicesLocalservicesV1PhoneLead $phoneLead)
  {
    $this->phoneLead = $phoneLead;
  }
  /** @return GoogleAdsHomeservicesLocalservicesV1PhoneLead */
  public function getPhoneLead()
  {
    return $this->phoneLead;
  }
  /** @param GoogleTypeTimeZone */
  public function setTimezone(GoogleTypeTimeZone $timezone)
  {
    $this->timezone = $timezone;
  }
  /** @return GoogleTypeTimeZone */
  public function getTimezone()
  {
    return $this->timezone;
  }
}

class GoogleAdsHomeservicesLocalservicesV1MessageLead extends \Google\Model
{
  /** @var string */
  public $consumerPhoneNumber;
  /** @var string */
  public $customerName;
  /** @var string */
  public $jobType;
  /** @var string */
  public $postalCode;

  /** @param string */
  public function setConsumerPhoneNumber($consumerPhoneNumber)
  {
    $this->consumerPhoneNumber = $consumerPhoneNumber;
  }
  /** @return string */
  public function getConsumerPhoneNumber()
  {
    return $this->consumerPhoneNumber;
  }
  /** @param string */
  public function setCustomerName($customerName)
  {
    $this->customerName = $customerName;
  }
  /** @return string */
  public function getCustomerName()
  {
    return $this->customerName;
  }
  /** @param string */
  public function setJobType($jobType)
  {
    $this->jobType = $jobType;
  }
  /** @return string */
  public function getJobType()
  {
    return $this->jobType;
  }
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
}

class GoogleAdsHomeservicesLocalservicesV1PhoneLead extends \Google\Model
{
  /** @var string */
  public $chargedCallTimestamp;
  /** @var string */
  public $chargedConnectedCallDurationSeconds;
  /** @var string */
  public $consumerPhoneNumber;

  /** @param string */
  public function setChargedCallTimestamp($chargedCallTimestamp)
  {
    $this->chargedCallTimestamp = $chargedCallTimestamp;
  }
  /** @return string */
  public function getChargedCallTimestamp()
  {
    return $this->chargedCallTimestamp;
  }
  /** @param string */
  public function setChargedConnectedCallDurationSeconds($chargedConnectedCallDurationSeconds)
  {
    $this->chargedConnectedCallDurationSeconds = $chargedConnectedCallDurationSeconds;
  }
  /** @return string */
  public function getChargedConnectedCallDurationSeconds()
  {
    return $this->chargedConnectedCallDurationSeconds;
  }
  /** @param string */
  public function setConsumerPhoneNumber($consumerPhoneNumber)
  {
    $this->consumerPhoneNumber = $consumerPhoneNumber;
  }
  /** @return string */
  public function getConsumerPhoneNumber()
  {
    return $this->consumerPhoneNumber;
  }
}

class GoogleAdsHomeservicesLocalservicesV1SearchAccountReportsResponse extends \Google\Collection
{
  /** @var GoogleAdsHomeservicesLocalservicesV1AccountReport[] */
  public $accountReports;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accountReports';
  protected $accountReportsType = GoogleAdsHomeservicesLocalservicesV1AccountReport::class;
  protected $accountReportsDataType = 'array';
  /** @param GoogleAdsHomeservicesLocalservicesV1AccountReport[] */
  public function setAccountReports($accountReports)
  {
    $this->accountReports = $accountReports;
  }
  /** @return GoogleAdsHomeservicesLocalservicesV1AccountReport[] */
  public function getAccountReports()
  {
    return $this->accountReports;
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

class GoogleAdsHomeservicesLocalservicesV1SearchDetailedLeadReportsResponse extends \Google\Collection
{
  /** @var GoogleAdsHomeservicesLocalservicesV1DetailedLeadReport[] */
  public $detailedLeadReports;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'detailedLeadReports';
  protected $detailedLeadReportsType = GoogleAdsHomeservicesLocalservicesV1DetailedLeadReport::class;
  protected $detailedLeadReportsDataType = 'array';
  /** @param GoogleAdsHomeservicesLocalservicesV1DetailedLeadReport[] */
  public function setDetailedLeadReports($detailedLeadReports)
  {
    $this->detailedLeadReports = $detailedLeadReports;
  }
  /** @return GoogleAdsHomeservicesLocalservicesV1DetailedLeadReport[] */
  public function getDetailedLeadReports()
  {
    return $this->detailedLeadReports;
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

class GoogleTypeTimeZone extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsHomeservicesLocalservicesV1AccountReport::class, 'Google_Service_Localservices_GoogleAdsHomeservicesLocalservicesV1AccountReport');
class_alias(GoogleAdsHomeservicesLocalservicesV1AggregatorInfo::class, 'Google_Service_Localservices_GoogleAdsHomeservicesLocalservicesV1AggregatorInfo');
class_alias(GoogleAdsHomeservicesLocalservicesV1BookingLead::class, 'Google_Service_Localservices_GoogleAdsHomeservicesLocalservicesV1BookingLead');
class_alias(GoogleAdsHomeservicesLocalservicesV1DetailedLeadReport::class, 'Google_Service_Localservices_GoogleAdsHomeservicesLocalservicesV1DetailedLeadReport');
class_alias(GoogleAdsHomeservicesLocalservicesV1MessageLead::class, 'Google_Service_Localservices_GoogleAdsHomeservicesLocalservicesV1MessageLead');
class_alias(GoogleAdsHomeservicesLocalservicesV1PhoneLead::class, 'Google_Service_Localservices_GoogleAdsHomeservicesLocalservicesV1PhoneLead');
class_alias(GoogleAdsHomeservicesLocalservicesV1SearchAccountReportsResponse::class, 'Google_Service_Localservices_GoogleAdsHomeservicesLocalservicesV1SearchAccountReportsResponse');
class_alias(GoogleAdsHomeservicesLocalservicesV1SearchDetailedLeadReportsResponse::class, 'Google_Service_Localservices_GoogleAdsHomeservicesLocalservicesV1SearchDetailedLeadReportsResponse');
class_alias(GoogleTypeTimeZone::class, 'Google_Service_Localservices_GoogleTypeTimeZone');
