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

namespace Google\Service\Reseller;

class Address extends \Google\Model
{
  /** @var string */
  public $addressLine1;
  /** @var string */
  public $addressLine2;
  /** @var string */
  public $addressLine3;
  /** @var string */
  public $contactName;
  /** @var string */
  public $countryCode;
  /** @var string */
  public $kind;
  /** @var string */
  public $locality;
  /** @var string */
  public $organizationName;
  /** @var string */
  public $postalCode;
  /** @var string */
  public $region;

  /** @param string */
  public function setAddressLine1($addressLine1)
  {
    $this->addressLine1 = $addressLine1;
  }
  /** @return string */
  public function getAddressLine1()
  {
    return $this->addressLine1;
  }
  /** @param string */
  public function setAddressLine2($addressLine2)
  {
    $this->addressLine2 = $addressLine2;
  }
  /** @return string */
  public function getAddressLine2()
  {
    return $this->addressLine2;
  }
  /** @param string */
  public function setAddressLine3($addressLine3)
  {
    $this->addressLine3 = $addressLine3;
  }
  /** @return string */
  public function getAddressLine3()
  {
    return $this->addressLine3;
  }
  /** @param string */
  public function setContactName($contactName)
  {
    $this->contactName = $contactName;
  }
  /** @return string */
  public function getContactName()
  {
    return $this->contactName;
  }
  /** @param string */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /** @return string */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  /** @return string */
  public function getLocality()
  {
    return $this->locality;
  }
  /** @param string */
  public function setOrganizationName($organizationName)
  {
    $this->organizationName = $organizationName;
  }
  /** @return string */
  public function getOrganizationName()
  {
    return $this->organizationName;
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
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
}

class ChangePlanRequest extends \Google\Model
{
  /** @var string */
  public $dealCode;
  /** @var string */
  public $kind;
  /** @var string */
  public $planName;
  /** @var string */
  public $purchaseOrderId;
  /** @var Seats */
  public $seats;
  protected $seatsType = Seats::class;
  protected $seatsDataType = '';
  /** @param string */
  public function setDealCode($dealCode)
  {
    $this->dealCode = $dealCode;
  }
  /** @return string */
  public function getDealCode()
  {
    return $this->dealCode;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setPlanName($planName)
  {
    $this->planName = $planName;
  }
  /** @return string */
  public function getPlanName()
  {
    return $this->planName;
  }
  /** @param string */
  public function setPurchaseOrderId($purchaseOrderId)
  {
    $this->purchaseOrderId = $purchaseOrderId;
  }
  /** @return string */
  public function getPurchaseOrderId()
  {
    return $this->purchaseOrderId;
  }
  /** @param Seats */
  public function setSeats(Seats $seats)
  {
    $this->seats = $seats;
  }
  /** @return Seats */
  public function getSeats()
  {
    return $this->seats;
  }
}

class Customer extends \Google\Model
{
  /** @var string */
  public $alternateEmail;
  /** @var string */
  public $customerDomain;
  /** @var bool */
  public $customerDomainVerified;
  /** @var string */
  public $customerId;
  /** @var string */
  public $customerType;
  /** @var string */
  public $kind;
  /** @var string */
  public $phoneNumber;
  /** @var Address */
  public $postalAddress;
  /** @var PrimaryAdmin */
  public $primaryAdmin;
  /** @var string */
  public $resourceUiUrl;
  protected $postalAddressType = Address::class;
  protected $postalAddressDataType = '';
  protected $primaryAdminType = PrimaryAdmin::class;
  protected $primaryAdminDataType = '';
  /** @param string */
  public function setAlternateEmail($alternateEmail)
  {
    $this->alternateEmail = $alternateEmail;
  }
  /** @return string */
  public function getAlternateEmail()
  {
    return $this->alternateEmail;
  }
  /** @param string */
  public function setCustomerDomain($customerDomain)
  {
    $this->customerDomain = $customerDomain;
  }
  /** @return string */
  public function getCustomerDomain()
  {
    return $this->customerDomain;
  }
  /** @param bool */
  public function setCustomerDomainVerified($customerDomainVerified)
  {
    $this->customerDomainVerified = $customerDomainVerified;
  }
  /** @return bool */
  public function getCustomerDomainVerified()
  {
    return $this->customerDomainVerified;
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
  public function setCustomerType($customerType)
  {
    $this->customerType = $customerType;
  }
  /** @return string */
  public function getCustomerType()
  {
    return $this->customerType;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param Address */
  public function setPostalAddress(Address $postalAddress)
  {
    $this->postalAddress = $postalAddress;
  }
  /** @return Address */
  public function getPostalAddress()
  {
    return $this->postalAddress;
  }
  /** @param PrimaryAdmin */
  public function setPrimaryAdmin(PrimaryAdmin $primaryAdmin)
  {
    $this->primaryAdmin = $primaryAdmin;
  }
  /** @return PrimaryAdmin */
  public function getPrimaryAdmin()
  {
    return $this->primaryAdmin;
  }
  /** @param string */
  public function setResourceUiUrl($resourceUiUrl)
  {
    $this->resourceUiUrl = $resourceUiUrl;
  }
  /** @return string */
  public function getResourceUiUrl()
  {
    return $this->resourceUiUrl;
  }
}

class PrimaryAdmin extends \Google\Model
{
  /** @var string */
  public $primaryEmail;

  /** @param string */
  public function setPrimaryEmail($primaryEmail)
  {
    $this->primaryEmail = $primaryEmail;
  }
  /** @return string */
  public function getPrimaryEmail()
  {
    return $this->primaryEmail;
  }
}

class RenewalSettings extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $renewalType;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setRenewalType($renewalType)
  {
    $this->renewalType = $renewalType;
  }
  /** @return string */
  public function getRenewalType()
  {
    return $this->renewalType;
  }
}

class ResellernotifyGetwatchdetailsResponse extends \Google\Collection
{
  /** @var string[] */
  public $serviceAccountEmailAddresses;
  /** @var string */
  public $topicName;
  protected $collection_key = 'serviceAccountEmailAddresses';
  /** @param string[] */
  public function setServiceAccountEmailAddresses($serviceAccountEmailAddresses)
  {
    $this->serviceAccountEmailAddresses = $serviceAccountEmailAddresses;
  }
  /** @return string[] */
  public function getServiceAccountEmailAddresses()
  {
    return $this->serviceAccountEmailAddresses;
  }
  /** @param string */
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  /** @return string */
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class ResellernotifyResource extends \Google\Model
{
  /** @var string */
  public $topicName;

  /** @param string */
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  /** @return string */
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class Seats extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var int */
  public $licensedNumberOfSeats;
  /** @var int */
  public $maximumNumberOfSeats;
  /** @var int */
  public $numberOfSeats;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param int */
  public function setLicensedNumberOfSeats($licensedNumberOfSeats)
  {
    $this->licensedNumberOfSeats = $licensedNumberOfSeats;
  }
  /** @return int */
  public function getLicensedNumberOfSeats()
  {
    return $this->licensedNumberOfSeats;
  }
  /** @param int */
  public function setMaximumNumberOfSeats($maximumNumberOfSeats)
  {
    $this->maximumNumberOfSeats = $maximumNumberOfSeats;
  }
  /** @return int */
  public function getMaximumNumberOfSeats()
  {
    return $this->maximumNumberOfSeats;
  }
  /** @param int */
  public function setNumberOfSeats($numberOfSeats)
  {
    $this->numberOfSeats = $numberOfSeats;
  }
  /** @return int */
  public function getNumberOfSeats()
  {
    return $this->numberOfSeats;
  }
}

class Subscription extends \Google\Collection
{
  /** @var string */
  public $billingMethod;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $customerDomain;
  /** @var string */
  public $customerId;
  /** @var string */
  public $dealCode;
  /** @var string */
  public $kind;
  /** @var SubscriptionPlan */
  public $plan;
  /** @var string */
  public $purchaseOrderId;
  /** @var RenewalSettings */
  public $renewalSettings;
  /** @var string */
  public $resourceUiUrl;
  /** @var Seats */
  public $seats;
  /** @var string */
  public $skuId;
  /** @var string */
  public $skuName;
  /** @var string */
  public $status;
  /** @var string */
  public $subscriptionId;
  /** @var string[] */
  public $suspensionReasons;
  /** @var SubscriptionTransferInfo */
  public $transferInfo;
  /** @var SubscriptionTrialSettings */
  public $trialSettings;
  protected $collection_key = 'suspensionReasons';
  protected $planType = SubscriptionPlan::class;
  protected $planDataType = '';
  protected $renewalSettingsType = RenewalSettings::class;
  protected $renewalSettingsDataType = '';
  protected $seatsType = Seats::class;
  protected $seatsDataType = '';
  protected $transferInfoType = SubscriptionTransferInfo::class;
  protected $transferInfoDataType = '';
  protected $trialSettingsType = SubscriptionTrialSettings::class;
  protected $trialSettingsDataType = '';
  /** @param string */
  public function setBillingMethod($billingMethod)
  {
    $this->billingMethod = $billingMethod;
  }
  /** @return string */
  public function getBillingMethod()
  {
    return $this->billingMethod;
  }
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /** @param string */
  public function setCustomerDomain($customerDomain)
  {
    $this->customerDomain = $customerDomain;
  }
  /** @return string */
  public function getCustomerDomain()
  {
    return $this->customerDomain;
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
  public function setDealCode($dealCode)
  {
    $this->dealCode = $dealCode;
  }
  /** @return string */
  public function getDealCode()
  {
    return $this->dealCode;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param SubscriptionPlan */
  public function setPlan(SubscriptionPlan $plan)
  {
    $this->plan = $plan;
  }
  /** @return SubscriptionPlan */
  public function getPlan()
  {
    return $this->plan;
  }
  /** @param string */
  public function setPurchaseOrderId($purchaseOrderId)
  {
    $this->purchaseOrderId = $purchaseOrderId;
  }
  /** @return string */
  public function getPurchaseOrderId()
  {
    return $this->purchaseOrderId;
  }
  /** @param RenewalSettings */
  public function setRenewalSettings(RenewalSettings $renewalSettings)
  {
    $this->renewalSettings = $renewalSettings;
  }
  /** @return RenewalSettings */
  public function getRenewalSettings()
  {
    return $this->renewalSettings;
  }
  /** @param string */
  public function setResourceUiUrl($resourceUiUrl)
  {
    $this->resourceUiUrl = $resourceUiUrl;
  }
  /** @return string */
  public function getResourceUiUrl()
  {
    return $this->resourceUiUrl;
  }
  /** @param Seats */
  public function setSeats(Seats $seats)
  {
    $this->seats = $seats;
  }
  /** @return Seats */
  public function getSeats()
  {
    return $this->seats;
  }
  /** @param string */
  public function setSkuId($skuId)
  {
    $this->skuId = $skuId;
  }
  /** @return string */
  public function getSkuId()
  {
    return $this->skuId;
  }
  /** @param string */
  public function setSkuName($skuName)
  {
    $this->skuName = $skuName;
  }
  /** @return string */
  public function getSkuName()
  {
    return $this->skuName;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setSubscriptionId($subscriptionId)
  {
    $this->subscriptionId = $subscriptionId;
  }
  /** @return string */
  public function getSubscriptionId()
  {
    return $this->subscriptionId;
  }
  /** @param string[] */
  public function setSuspensionReasons($suspensionReasons)
  {
    $this->suspensionReasons = $suspensionReasons;
  }
  /** @return string[] */
  public function getSuspensionReasons()
  {
    return $this->suspensionReasons;
  }
  /** @param SubscriptionTransferInfo */
  public function setTransferInfo(SubscriptionTransferInfo $transferInfo)
  {
    $this->transferInfo = $transferInfo;
  }
  /** @return SubscriptionTransferInfo */
  public function getTransferInfo()
  {
    return $this->transferInfo;
  }
  /** @param SubscriptionTrialSettings */
  public function setTrialSettings(SubscriptionTrialSettings $trialSettings)
  {
    $this->trialSettings = $trialSettings;
  }
  /** @return SubscriptionTrialSettings */
  public function getTrialSettings()
  {
    return $this->trialSettings;
  }
}

class SubscriptionPlan extends \Google\Model
{
  /** @var SubscriptionPlanCommitmentInterval */
  public $commitmentInterval;
  /** @var bool */
  public $isCommitmentPlan;
  /** @var string */
  public $planName;
  protected $commitmentIntervalType = SubscriptionPlanCommitmentInterval::class;
  protected $commitmentIntervalDataType = '';
  /** @param SubscriptionPlanCommitmentInterval */
  public function setCommitmentInterval(SubscriptionPlanCommitmentInterval $commitmentInterval)
  {
    $this->commitmentInterval = $commitmentInterval;
  }
  /** @return SubscriptionPlanCommitmentInterval */
  public function getCommitmentInterval()
  {
    return $this->commitmentInterval;
  }
  /** @param bool */
  public function setIsCommitmentPlan($isCommitmentPlan)
  {
    $this->isCommitmentPlan = $isCommitmentPlan;
  }
  /** @return bool */
  public function getIsCommitmentPlan()
  {
    return $this->isCommitmentPlan;
  }
  /** @param string */
  public function setPlanName($planName)
  {
    $this->planName = $planName;
  }
  /** @return string */
  public function getPlanName()
  {
    return $this->planName;
  }
}

class SubscriptionPlanCommitmentInterval extends \Google\Model
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

class SubscriptionTransferInfo extends \Google\Model
{
  /** @var string */
  public $currentLegacySkuId;
  /** @var int */
  public $minimumTransferableSeats;
  /** @var string */
  public $transferabilityExpirationTime;

  /** @param string */
  public function setCurrentLegacySkuId($currentLegacySkuId)
  {
    $this->currentLegacySkuId = $currentLegacySkuId;
  }
  /** @return string */
  public function getCurrentLegacySkuId()
  {
    return $this->currentLegacySkuId;
  }
  /** @param int */
  public function setMinimumTransferableSeats($minimumTransferableSeats)
  {
    $this->minimumTransferableSeats = $minimumTransferableSeats;
  }
  /** @return int */
  public function getMinimumTransferableSeats()
  {
    return $this->minimumTransferableSeats;
  }
  /** @param string */
  public function setTransferabilityExpirationTime($transferabilityExpirationTime)
  {
    $this->transferabilityExpirationTime = $transferabilityExpirationTime;
  }
  /** @return string */
  public function getTransferabilityExpirationTime()
  {
    return $this->transferabilityExpirationTime;
  }
}

class SubscriptionTrialSettings extends \Google\Model
{
  /** @var bool */
  public $isInTrial;
  /** @var string */
  public $trialEndTime;

  /** @param bool */
  public function setIsInTrial($isInTrial)
  {
    $this->isInTrial = $isInTrial;
  }
  /** @return bool */
  public function getIsInTrial()
  {
    return $this->isInTrial;
  }
  /** @param string */
  public function setTrialEndTime($trialEndTime)
  {
    $this->trialEndTime = $trialEndTime;
  }
  /** @return string */
  public function getTrialEndTime()
  {
    return $this->trialEndTime;
  }
}

class Subscriptions extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Subscription[] */
  public $subscriptions;
  protected $collection_key = 'subscriptions';
  protected $subscriptionsType = Subscription::class;
  protected $subscriptionsDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param Subscription[] */
  public function setSubscriptions($subscriptions)
  {
    $this->subscriptions = $subscriptions;
  }
  /** @return Subscription[] */
  public function getSubscriptions()
  {
    return $this->subscriptions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Address::class, 'Google_Service_Reseller_Address');
class_alias(ChangePlanRequest::class, 'Google_Service_Reseller_ChangePlanRequest');
class_alias(Customer::class, 'Google_Service_Reseller_Customer');
class_alias(PrimaryAdmin::class, 'Google_Service_Reseller_PrimaryAdmin');
class_alias(RenewalSettings::class, 'Google_Service_Reseller_RenewalSettings');
class_alias(ResellernotifyGetwatchdetailsResponse::class, 'Google_Service_Reseller_ResellernotifyGetwatchdetailsResponse');
class_alias(ResellernotifyResource::class, 'Google_Service_Reseller_ResellernotifyResource');
class_alias(Seats::class, 'Google_Service_Reseller_Seats');
class_alias(Subscription::class, 'Google_Service_Reseller_Subscription');
class_alias(SubscriptionPlan::class, 'Google_Service_Reseller_SubscriptionPlan');
class_alias(SubscriptionPlanCommitmentInterval::class, 'Google_Service_Reseller_SubscriptionPlanCommitmentInterval');
class_alias(SubscriptionTransferInfo::class, 'Google_Service_Reseller_SubscriptionTransferInfo');
class_alias(SubscriptionTrialSettings::class, 'Google_Service_Reseller_SubscriptionTrialSettings');
class_alias(Subscriptions::class, 'Google_Service_Reseller_Subscriptions');
