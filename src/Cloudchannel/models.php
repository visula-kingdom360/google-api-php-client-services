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

namespace Google\Service\Cloudchannel;

class GoogleCloudChannelV1ActivateEntitlementRequest extends \Google\Model
{
  /** @var string */
  public $requestId;

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

class GoogleCloudChannelV1AdminUser extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $familyName;
  /** @var string */
  public $givenName;

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
  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }
  /** @return string */
  public function getFamilyName()
  {
    return $this->familyName;
  }
  /** @param string */
  public function setGivenName($givenName)
  {
    $this->givenName = $givenName;
  }
  /** @return string */
  public function getGivenName()
  {
    return $this->givenName;
  }
}

class GoogleCloudChannelV1AssociationInfo extends \Google\Model
{
  /** @var string */
  public $baseEntitlement;

  /** @param string */
  public function setBaseEntitlement($baseEntitlement)
  {
    $this->baseEntitlement = $baseEntitlement;
  }
  /** @return string */
  public function getBaseEntitlement()
  {
    return $this->baseEntitlement;
  }
}

class GoogleCloudChannelV1CancelEntitlementRequest extends \Google\Model
{
  /** @var string */
  public $requestId;

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

class GoogleCloudChannelV1ChangeOfferRequest extends \Google\Collection
{
  /** @var string */
  public $offer;
  /** @var GoogleCloudChannelV1Parameter[] */
  public $parameters;
  /** @var string */
  public $purchaseOrderId;
  /** @var string */
  public $requestId;
  protected $collection_key = 'parameters';
  protected $parametersType = GoogleCloudChannelV1Parameter::class;
  protected $parametersDataType = 'array';
  /** @param string */
  public function setOffer($offer)
  {
    $this->offer = $offer;
  }
  /** @return string */
  public function getOffer()
  {
    return $this->offer;
  }
  /** @param GoogleCloudChannelV1Parameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudChannelV1Parameter[] */
  public function getParameters()
  {
    return $this->parameters;
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

class GoogleCloudChannelV1ChangeParametersRequest extends \Google\Collection
{
  /** @var GoogleCloudChannelV1Parameter[] */
  public $parameters;
  /** @var string */
  public $purchaseOrderId;
  /** @var string */
  public $requestId;
  protected $collection_key = 'parameters';
  protected $parametersType = GoogleCloudChannelV1Parameter::class;
  protected $parametersDataType = 'array';
  /** @param GoogleCloudChannelV1Parameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudChannelV1Parameter[] */
  public function getParameters()
  {
    return $this->parameters;
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

class GoogleCloudChannelV1ChangeRenewalSettingsRequest extends \Google\Model
{
  /** @var GoogleCloudChannelV1RenewalSettings */
  public $renewalSettings;
  /** @var string */
  public $requestId;
  protected $renewalSettingsType = GoogleCloudChannelV1RenewalSettings::class;
  protected $renewalSettingsDataType = '';
  /** @param GoogleCloudChannelV1RenewalSettings */
  public function setRenewalSettings(GoogleCloudChannelV1RenewalSettings $renewalSettings)
  {
    $this->renewalSettings = $renewalSettings;
  }
  /** @return GoogleCloudChannelV1RenewalSettings */
  public function getRenewalSettings()
  {
    return $this->renewalSettings;
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

class GoogleCloudChannelV1ChannelPartnerLink extends \Google\Model
{
  /** @var GoogleCloudChannelV1CloudIdentityInfo */
  public $channelPartnerCloudIdentityInfo;
  /** @var string */
  public $createTime;
  /** @var string */
  public $inviteLinkUri;
  /** @var string */
  public $linkState;
  /** @var string */
  public $name;
  /** @var string */
  public $publicId;
  /** @var string */
  public $resellerCloudIdentityId;
  /** @var string */
  public $updateTime;
  protected $channelPartnerCloudIdentityInfoType = GoogleCloudChannelV1CloudIdentityInfo::class;
  protected $channelPartnerCloudIdentityInfoDataType = '';
  /** @param GoogleCloudChannelV1CloudIdentityInfo */
  public function setChannelPartnerCloudIdentityInfo(GoogleCloudChannelV1CloudIdentityInfo $channelPartnerCloudIdentityInfo)
  {
    $this->channelPartnerCloudIdentityInfo = $channelPartnerCloudIdentityInfo;
  }
  /** @return GoogleCloudChannelV1CloudIdentityInfo */
  public function getChannelPartnerCloudIdentityInfo()
  {
    return $this->channelPartnerCloudIdentityInfo;
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
  public function setInviteLinkUri($inviteLinkUri)
  {
    $this->inviteLinkUri = $inviteLinkUri;
  }
  /** @return string */
  public function getInviteLinkUri()
  {
    return $this->inviteLinkUri;
  }
  /** @param string */
  public function setLinkState($linkState)
  {
    $this->linkState = $linkState;
  }
  /** @return string */
  public function getLinkState()
  {
    return $this->linkState;
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
  public function setPublicId($publicId)
  {
    $this->publicId = $publicId;
  }
  /** @return string */
  public function getPublicId()
  {
    return $this->publicId;
  }
  /** @param string */
  public function setResellerCloudIdentityId($resellerCloudIdentityId)
  {
    $this->resellerCloudIdentityId = $resellerCloudIdentityId;
  }
  /** @return string */
  public function getResellerCloudIdentityId()
  {
    return $this->resellerCloudIdentityId;
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

class GoogleCloudChannelV1ChannelPartnerRepricingConfig extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var GoogleCloudChannelV1RepricingConfig */
  public $repricingConfig;
  /** @var string */
  public $updateTime;
  protected $repricingConfigType = GoogleCloudChannelV1RepricingConfig::class;
  protected $repricingConfigDataType = '';
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
  /** @param GoogleCloudChannelV1RepricingConfig */
  public function setRepricingConfig(GoogleCloudChannelV1RepricingConfig $repricingConfig)
  {
    $this->repricingConfig = $repricingConfig;
  }
  /** @return GoogleCloudChannelV1RepricingConfig */
  public function getRepricingConfig()
  {
    return $this->repricingConfig;
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

class GoogleCloudChannelV1CheckCloudIdentityAccountsExistRequest extends \Google\Model
{
  /** @var string */
  public $domain;

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
}

class GoogleCloudChannelV1CheckCloudIdentityAccountsExistResponse extends \Google\Collection
{
  /** @var GoogleCloudChannelV1CloudIdentityCustomerAccount[] */
  public $cloudIdentityAccounts;
  protected $collection_key = 'cloudIdentityAccounts';
  protected $cloudIdentityAccountsType = GoogleCloudChannelV1CloudIdentityCustomerAccount::class;
  protected $cloudIdentityAccountsDataType = 'array';
  /** @param GoogleCloudChannelV1CloudIdentityCustomerAccount[] */
  public function setCloudIdentityAccounts($cloudIdentityAccounts)
  {
    $this->cloudIdentityAccounts = $cloudIdentityAccounts;
  }
  /** @return GoogleCloudChannelV1CloudIdentityCustomerAccount[] */
  public function getCloudIdentityAccounts()
  {
    return $this->cloudIdentityAccounts;
  }
}

class GoogleCloudChannelV1CloudIdentityCustomerAccount extends \Google\Model
{
  /** @var string */
  public $customerCloudIdentityId;
  /** @var string */
  public $customerName;
  /** @var bool */
  public $existing;
  /** @var bool */
  public $owned;

  /** @param string */
  public function setCustomerCloudIdentityId($customerCloudIdentityId)
  {
    $this->customerCloudIdentityId = $customerCloudIdentityId;
  }
  /** @return string */
  public function getCustomerCloudIdentityId()
  {
    return $this->customerCloudIdentityId;
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
  /** @param bool */
  public function setExisting($existing)
  {
    $this->existing = $existing;
  }
  /** @return bool */
  public function getExisting()
  {
    return $this->existing;
  }
  /** @param bool */
  public function setOwned($owned)
  {
    $this->owned = $owned;
  }
  /** @return bool */
  public function getOwned()
  {
    return $this->owned;
  }
}

class GoogleCloudChannelV1CloudIdentityInfo extends \Google\Model
{
  /** @var string */
  public $adminConsoleUri;
  /** @var string */
  public $alternateEmail;
  /** @var string */
  public $customerType;
  /** @var GoogleCloudChannelV1EduData */
  public $eduData;
  /** @var bool */
  public $isDomainVerified;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $primaryDomain;
  protected $eduDataType = GoogleCloudChannelV1EduData::class;
  protected $eduDataDataType = '';
  /** @param string */
  public function setAdminConsoleUri($adminConsoleUri)
  {
    $this->adminConsoleUri = $adminConsoleUri;
  }
  /** @return string */
  public function getAdminConsoleUri()
  {
    return $this->adminConsoleUri;
  }
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
  public function setCustomerType($customerType)
  {
    $this->customerType = $customerType;
  }
  /** @return string */
  public function getCustomerType()
  {
    return $this->customerType;
  }
  /** @param GoogleCloudChannelV1EduData */
  public function setEduData(GoogleCloudChannelV1EduData $eduData)
  {
    $this->eduData = $eduData;
  }
  /** @return GoogleCloudChannelV1EduData */
  public function getEduData()
  {
    return $this->eduData;
  }
  /** @param bool */
  public function setIsDomainVerified($isDomainVerified)
  {
    $this->isDomainVerified = $isDomainVerified;
  }
  /** @return bool */
  public function getIsDomainVerified()
  {
    return $this->isDomainVerified;
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
  /** @param string */
  public function setPrimaryDomain($primaryDomain)
  {
    $this->primaryDomain = $primaryDomain;
  }
  /** @return string */
  public function getPrimaryDomain()
  {
    return $this->primaryDomain;
  }
}

class GoogleCloudChannelV1Column extends \Google\Model
{
  /** @var string */
  public $columnId;
  /** @var string */
  public $dataType;
  /** @var string */
  public $displayName;

  /** @param string */
  public function setColumnId($columnId)
  {
    $this->columnId = $columnId;
  }
  /** @return string */
  public function getColumnId()
  {
    return $this->columnId;
  }
  /** @param string */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
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

class GoogleCloudChannelV1CommitmentSettings extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var GoogleCloudChannelV1RenewalSettings */
  public $renewalSettings;
  /** @var string */
  public $startTime;
  protected $renewalSettingsType = GoogleCloudChannelV1RenewalSettings::class;
  protected $renewalSettingsDataType = '';
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
  /** @param GoogleCloudChannelV1RenewalSettings */
  public function setRenewalSettings(GoogleCloudChannelV1RenewalSettings $renewalSettings)
  {
    $this->renewalSettings = $renewalSettings;
  }
  /** @return GoogleCloudChannelV1RenewalSettings */
  public function getRenewalSettings()
  {
    return $this->renewalSettings;
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

class GoogleCloudChannelV1Constraints extends \Google\Model
{
  /** @var GoogleCloudChannelV1CustomerConstraints */
  public $customerConstraints;
  protected $customerConstraintsType = GoogleCloudChannelV1CustomerConstraints::class;
  protected $customerConstraintsDataType = '';
  /** @param GoogleCloudChannelV1CustomerConstraints */
  public function setCustomerConstraints(GoogleCloudChannelV1CustomerConstraints $customerConstraints)
  {
    $this->customerConstraints = $customerConstraints;
  }
  /** @return GoogleCloudChannelV1CustomerConstraints */
  public function getCustomerConstraints()
  {
    return $this->customerConstraints;
  }
}

class GoogleCloudChannelV1ContactInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var string */
  public $firstName;
  /** @var string */
  public $lastName;
  /** @var string */
  public $phone;
  /** @var string */
  public $title;

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
  /** @param string */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }
  /** @return string */
  public function getFirstName()
  {
    return $this->firstName;
  }
  /** @param string */
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }
  /** @return string */
  public function getLastName()
  {
    return $this->lastName;
  }
  /** @param string */
  public function setPhone($phone)
  {
    $this->phone = $phone;
  }
  /** @return string */
  public function getPhone()
  {
    return $this->phone;
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

class GoogleCloudChannelV1CreateEntitlementRequest extends \Google\Model
{
  /** @var GoogleCloudChannelV1Entitlement */
  public $entitlement;
  /** @var string */
  public $requestId;
  protected $entitlementType = GoogleCloudChannelV1Entitlement::class;
  protected $entitlementDataType = '';
  /** @param GoogleCloudChannelV1Entitlement */
  public function setEntitlement(GoogleCloudChannelV1Entitlement $entitlement)
  {
    $this->entitlement = $entitlement;
  }
  /** @return GoogleCloudChannelV1Entitlement */
  public function getEntitlement()
  {
    return $this->entitlement;
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

class GoogleCloudChannelV1Customer extends \Google\Model
{
  /** @var string */
  public $alternateEmail;
  /** @var string */
  public $channelPartnerId;
  /** @var string */
  public $cloudIdentityId;
  /** @var GoogleCloudChannelV1CloudIdentityInfo */
  public $cloudIdentityInfo;
  /** @var string */
  public $createTime;
  /** @var string */
  public $domain;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $name;
  /** @var string */
  public $orgDisplayName;
  /** @var GoogleTypePostalAddress */
  public $orgPostalAddress;
  /** @var GoogleCloudChannelV1ContactInfo */
  public $primaryContactInfo;
  /** @var string */
  public $updateTime;
  protected $cloudIdentityInfoType = GoogleCloudChannelV1CloudIdentityInfo::class;
  protected $cloudIdentityInfoDataType = '';
  protected $orgPostalAddressType = GoogleTypePostalAddress::class;
  protected $orgPostalAddressDataType = '';
  protected $primaryContactInfoType = GoogleCloudChannelV1ContactInfo::class;
  protected $primaryContactInfoDataType = '';
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
  public function setChannelPartnerId($channelPartnerId)
  {
    $this->channelPartnerId = $channelPartnerId;
  }
  /** @return string */
  public function getChannelPartnerId()
  {
    return $this->channelPartnerId;
  }
  /** @param string */
  public function setCloudIdentityId($cloudIdentityId)
  {
    $this->cloudIdentityId = $cloudIdentityId;
  }
  /** @return string */
  public function getCloudIdentityId()
  {
    return $this->cloudIdentityId;
  }
  /** @param GoogleCloudChannelV1CloudIdentityInfo */
  public function setCloudIdentityInfo(GoogleCloudChannelV1CloudIdentityInfo $cloudIdentityInfo)
  {
    $this->cloudIdentityInfo = $cloudIdentityInfo;
  }
  /** @return GoogleCloudChannelV1CloudIdentityInfo */
  public function getCloudIdentityInfo()
  {
    return $this->cloudIdentityInfo;
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
  public function setOrgDisplayName($orgDisplayName)
  {
    $this->orgDisplayName = $orgDisplayName;
  }
  /** @return string */
  public function getOrgDisplayName()
  {
    return $this->orgDisplayName;
  }
  /** @param GoogleTypePostalAddress */
  public function setOrgPostalAddress(GoogleTypePostalAddress $orgPostalAddress)
  {
    $this->orgPostalAddress = $orgPostalAddress;
  }
  /** @return GoogleTypePostalAddress */
  public function getOrgPostalAddress()
  {
    return $this->orgPostalAddress;
  }
  /** @param GoogleCloudChannelV1ContactInfo */
  public function setPrimaryContactInfo(GoogleCloudChannelV1ContactInfo $primaryContactInfo)
  {
    $this->primaryContactInfo = $primaryContactInfo;
  }
  /** @return GoogleCloudChannelV1ContactInfo */
  public function getPrimaryContactInfo()
  {
    return $this->primaryContactInfo;
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

class GoogleCloudChannelV1CustomerConstraints extends \Google\Collection
{
  /** @var string[] */
  public $allowedCustomerTypes;
  /** @var string[] */
  public $allowedRegions;
  /** @var string[] */
  public $promotionalOrderTypes;
  protected $collection_key = 'promotionalOrderTypes';
  /** @param string[] */
  public function setAllowedCustomerTypes($allowedCustomerTypes)
  {
    $this->allowedCustomerTypes = $allowedCustomerTypes;
  }
  /** @return string[] */
  public function getAllowedCustomerTypes()
  {
    return $this->allowedCustomerTypes;
  }
  /** @param string[] */
  public function setAllowedRegions($allowedRegions)
  {
    $this->allowedRegions = $allowedRegions;
  }
  /** @return string[] */
  public function getAllowedRegions()
  {
    return $this->allowedRegions;
  }
  /** @param string[] */
  public function setPromotionalOrderTypes($promotionalOrderTypes)
  {
    $this->promotionalOrderTypes = $promotionalOrderTypes;
  }
  /** @return string[] */
  public function getPromotionalOrderTypes()
  {
    return $this->promotionalOrderTypes;
  }
}

class GoogleCloudChannelV1CustomerEvent extends \Google\Model
{
  /** @var string */
  public $customer;
  /** @var string */
  public $eventType;

  /** @param string */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /** @return string */
  public function getCustomer()
  {
    return $this->customer;
  }
  /** @param string */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string */
  public function getEventType()
  {
    return $this->eventType;
  }
}

class GoogleCloudChannelV1CustomerRepricingConfig extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var GoogleCloudChannelV1RepricingConfig */
  public $repricingConfig;
  /** @var string */
  public $updateTime;
  protected $repricingConfigType = GoogleCloudChannelV1RepricingConfig::class;
  protected $repricingConfigDataType = '';
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
  /** @param GoogleCloudChannelV1RepricingConfig */
  public function setRepricingConfig(GoogleCloudChannelV1RepricingConfig $repricingConfig)
  {
    $this->repricingConfig = $repricingConfig;
  }
  /** @return GoogleCloudChannelV1RepricingConfig */
  public function getRepricingConfig()
  {
    return $this->repricingConfig;
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

class GoogleCloudChannelV1DateRange extends \Google\Model
{
  /** @var GoogleTypeDate */
  public $invoiceEndDate;
  /** @var GoogleTypeDate */
  public $invoiceStartDate;
  /** @var GoogleTypeDateTime */
  public $usageEndDateTime;
  /** @var GoogleTypeDateTime */
  public $usageStartDateTime;
  protected $invoiceEndDateType = GoogleTypeDate::class;
  protected $invoiceEndDateDataType = '';
  protected $invoiceStartDateType = GoogleTypeDate::class;
  protected $invoiceStartDateDataType = '';
  protected $usageEndDateTimeType = GoogleTypeDateTime::class;
  protected $usageEndDateTimeDataType = '';
  protected $usageStartDateTimeType = GoogleTypeDateTime::class;
  protected $usageStartDateTimeDataType = '';
  /** @param GoogleTypeDate */
  public function setInvoiceEndDate(GoogleTypeDate $invoiceEndDate)
  {
    $this->invoiceEndDate = $invoiceEndDate;
  }
  /** @return GoogleTypeDate */
  public function getInvoiceEndDate()
  {
    return $this->invoiceEndDate;
  }
  /** @param GoogleTypeDate */
  public function setInvoiceStartDate(GoogleTypeDate $invoiceStartDate)
  {
    $this->invoiceStartDate = $invoiceStartDate;
  }
  /** @return GoogleTypeDate */
  public function getInvoiceStartDate()
  {
    return $this->invoiceStartDate;
  }
  /** @param GoogleTypeDateTime */
  public function setUsageEndDateTime(GoogleTypeDateTime $usageEndDateTime)
  {
    $this->usageEndDateTime = $usageEndDateTime;
  }
  /** @return GoogleTypeDateTime */
  public function getUsageEndDateTime()
  {
    return $this->usageEndDateTime;
  }
  /** @param GoogleTypeDateTime */
  public function setUsageStartDateTime(GoogleTypeDateTime $usageStartDateTime)
  {
    $this->usageStartDateTime = $usageStartDateTime;
  }
  /** @return GoogleTypeDateTime */
  public function getUsageStartDateTime()
  {
    return $this->usageStartDateTime;
  }
}

class GoogleCloudChannelV1EduData extends \Google\Model
{
  /** @var string */
  public $instituteSize;
  /** @var string */
  public $instituteType;
  /** @var string */
  public $website;

  /** @param string */
  public function setInstituteSize($instituteSize)
  {
    $this->instituteSize = $instituteSize;
  }
  /** @return string */
  public function getInstituteSize()
  {
    return $this->instituteSize;
  }
  /** @param string */
  public function setInstituteType($instituteType)
  {
    $this->instituteType = $instituteType;
  }
  /** @return string */
  public function getInstituteType()
  {
    return $this->instituteType;
  }
  /** @param string */
  public function setWebsite($website)
  {
    $this->website = $website;
  }
  /** @return string */
  public function getWebsite()
  {
    return $this->website;
  }
}

class GoogleCloudChannelV1Entitlement extends \Google\Collection
{
  /** @var GoogleCloudChannelV1AssociationInfo */
  public $associationInfo;
  /** @var GoogleCloudChannelV1CommitmentSettings */
  public $commitmentSettings;
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $offer;
  /** @var GoogleCloudChannelV1Parameter[] */
  public $parameters;
  /** @var GoogleCloudChannelV1ProvisionedService */
  public $provisionedService;
  /** @var string */
  public $provisioningState;
  /** @var string */
  public $purchaseOrderId;
  /** @var string[] */
  public $suspensionReasons;
  /** @var GoogleCloudChannelV1TrialSettings */
  public $trialSettings;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'suspensionReasons';
  protected $associationInfoType = GoogleCloudChannelV1AssociationInfo::class;
  protected $associationInfoDataType = '';
  protected $commitmentSettingsType = GoogleCloudChannelV1CommitmentSettings::class;
  protected $commitmentSettingsDataType = '';
  protected $parametersType = GoogleCloudChannelV1Parameter::class;
  protected $parametersDataType = 'array';
  protected $provisionedServiceType = GoogleCloudChannelV1ProvisionedService::class;
  protected $provisionedServiceDataType = '';
  protected $trialSettingsType = GoogleCloudChannelV1TrialSettings::class;
  protected $trialSettingsDataType = '';
  /** @param GoogleCloudChannelV1AssociationInfo */
  public function setAssociationInfo(GoogleCloudChannelV1AssociationInfo $associationInfo)
  {
    $this->associationInfo = $associationInfo;
  }
  /** @return GoogleCloudChannelV1AssociationInfo */
  public function getAssociationInfo()
  {
    return $this->associationInfo;
  }
  /** @param GoogleCloudChannelV1CommitmentSettings */
  public function setCommitmentSettings(GoogleCloudChannelV1CommitmentSettings $commitmentSettings)
  {
    $this->commitmentSettings = $commitmentSettings;
  }
  /** @return GoogleCloudChannelV1CommitmentSettings */
  public function getCommitmentSettings()
  {
    return $this->commitmentSettings;
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
  public function setOffer($offer)
  {
    $this->offer = $offer;
  }
  /** @return string */
  public function getOffer()
  {
    return $this->offer;
  }
  /** @param GoogleCloudChannelV1Parameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudChannelV1Parameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param GoogleCloudChannelV1ProvisionedService */
  public function setProvisionedService(GoogleCloudChannelV1ProvisionedService $provisionedService)
  {
    $this->provisionedService = $provisionedService;
  }
  /** @return GoogleCloudChannelV1ProvisionedService */
  public function getProvisionedService()
  {
    return $this->provisionedService;
  }
  /** @param string */
  public function setProvisioningState($provisioningState)
  {
    $this->provisioningState = $provisioningState;
  }
  /** @return string */
  public function getProvisioningState()
  {
    return $this->provisioningState;
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
  /** @param GoogleCloudChannelV1TrialSettings */
  public function setTrialSettings(GoogleCloudChannelV1TrialSettings $trialSettings)
  {
    $this->trialSettings = $trialSettings;
  }
  /** @return GoogleCloudChannelV1TrialSettings */
  public function getTrialSettings()
  {
    return $this->trialSettings;
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

class GoogleCloudChannelV1EntitlementEvent extends \Google\Model
{
  /** @var string */
  public $entitlement;
  /** @var string */
  public $eventType;

  /** @param string */
  public function setEntitlement($entitlement)
  {
    $this->entitlement = $entitlement;
  }
  /** @return string */
  public function getEntitlement()
  {
    return $this->entitlement;
  }
  /** @param string */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string */
  public function getEventType()
  {
    return $this->eventType;
  }
}

class GoogleCloudChannelV1FetchReportResultsRequest extends \Google\Model
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

class GoogleCloudChannelV1FetchReportResultsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudChannelV1ReportResultsMetadata */
  public $reportMetadata;
  /** @var GoogleCloudChannelV1Row[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $reportMetadataType = GoogleCloudChannelV1ReportResultsMetadata::class;
  protected $reportMetadataDataType = '';
  protected $rowsType = GoogleCloudChannelV1Row::class;
  protected $rowsDataType = 'array';
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
  /** @param GoogleCloudChannelV1ReportResultsMetadata */
  public function setReportMetadata(GoogleCloudChannelV1ReportResultsMetadata $reportMetadata)
  {
    $this->reportMetadata = $reportMetadata;
  }
  /** @return GoogleCloudChannelV1ReportResultsMetadata */
  public function getReportMetadata()
  {
    return $this->reportMetadata;
  }
  /** @param GoogleCloudChannelV1Row[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return GoogleCloudChannelV1Row[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class GoogleCloudChannelV1ImportCustomerRequest extends \Google\Model
{
  /** @var string */
  public $authToken;
  /** @var string */
  public $channelPartnerId;
  /** @var string */
  public $cloudIdentityId;
  /** @var string */
  public $customer;
  /** @var string */
  public $domain;
  /** @var bool */
  public $overwriteIfExists;

  /** @param string */
  public function setAuthToken($authToken)
  {
    $this->authToken = $authToken;
  }
  /** @return string */
  public function getAuthToken()
  {
    return $this->authToken;
  }
  /** @param string */
  public function setChannelPartnerId($channelPartnerId)
  {
    $this->channelPartnerId = $channelPartnerId;
  }
  /** @return string */
  public function getChannelPartnerId()
  {
    return $this->channelPartnerId;
  }
  /** @param string */
  public function setCloudIdentityId($cloudIdentityId)
  {
    $this->cloudIdentityId = $cloudIdentityId;
  }
  /** @return string */
  public function getCloudIdentityId()
  {
    return $this->cloudIdentityId;
  }
  /** @param string */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /** @return string */
  public function getCustomer()
  {
    return $this->customer;
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
  /** @param bool */
  public function setOverwriteIfExists($overwriteIfExists)
  {
    $this->overwriteIfExists = $overwriteIfExists;
  }
  /** @return bool */
  public function getOverwriteIfExists()
  {
    return $this->overwriteIfExists;
  }
}

class GoogleCloudChannelV1ListChannelPartnerLinksResponse extends \Google\Collection
{
  /** @var GoogleCloudChannelV1ChannelPartnerLink[] */
  public $channelPartnerLinks;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'channelPartnerLinks';
  protected $channelPartnerLinksType = GoogleCloudChannelV1ChannelPartnerLink::class;
  protected $channelPartnerLinksDataType = 'array';
  /** @param GoogleCloudChannelV1ChannelPartnerLink[] */
  public function setChannelPartnerLinks($channelPartnerLinks)
  {
    $this->channelPartnerLinks = $channelPartnerLinks;
  }
  /** @return GoogleCloudChannelV1ChannelPartnerLink[] */
  public function getChannelPartnerLinks()
  {
    return $this->channelPartnerLinks;
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

class GoogleCloudChannelV1ListChannelPartnerRepricingConfigsResponse extends \Google\Collection
{
  /** @var GoogleCloudChannelV1ChannelPartnerRepricingConfig[] */
  public $channelPartnerRepricingConfigs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'channelPartnerRepricingConfigs';
  protected $channelPartnerRepricingConfigsType = GoogleCloudChannelV1ChannelPartnerRepricingConfig::class;
  protected $channelPartnerRepricingConfigsDataType = 'array';
  /** @param GoogleCloudChannelV1ChannelPartnerRepricingConfig[] */
  public function setChannelPartnerRepricingConfigs($channelPartnerRepricingConfigs)
  {
    $this->channelPartnerRepricingConfigs = $channelPartnerRepricingConfigs;
  }
  /** @return GoogleCloudChannelV1ChannelPartnerRepricingConfig[] */
  public function getChannelPartnerRepricingConfigs()
  {
    return $this->channelPartnerRepricingConfigs;
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

class GoogleCloudChannelV1ListCustomerRepricingConfigsResponse extends \Google\Collection
{
  /** @var GoogleCloudChannelV1CustomerRepricingConfig[] */
  public $customerRepricingConfigs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customerRepricingConfigs';
  protected $customerRepricingConfigsType = GoogleCloudChannelV1CustomerRepricingConfig::class;
  protected $customerRepricingConfigsDataType = 'array';
  /** @param GoogleCloudChannelV1CustomerRepricingConfig[] */
  public function setCustomerRepricingConfigs($customerRepricingConfigs)
  {
    $this->customerRepricingConfigs = $customerRepricingConfigs;
  }
  /** @return GoogleCloudChannelV1CustomerRepricingConfig[] */
  public function getCustomerRepricingConfigs()
  {
    return $this->customerRepricingConfigs;
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

class GoogleCloudChannelV1ListCustomersResponse extends \Google\Collection
{
  /** @var GoogleCloudChannelV1Customer[] */
  public $customers;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customers';
  protected $customersType = GoogleCloudChannelV1Customer::class;
  protected $customersDataType = 'array';
  /** @param GoogleCloudChannelV1Customer[] */
  public function setCustomers($customers)
  {
    $this->customers = $customers;
  }
  /** @return GoogleCloudChannelV1Customer[] */
  public function getCustomers()
  {
    return $this->customers;
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

class GoogleCloudChannelV1ListEntitlementsResponse extends \Google\Collection
{
  /** @var GoogleCloudChannelV1Entitlement[] */
  public $entitlements;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'entitlements';
  protected $entitlementsType = GoogleCloudChannelV1Entitlement::class;
  protected $entitlementsDataType = 'array';
  /** @param GoogleCloudChannelV1Entitlement[] */
  public function setEntitlements($entitlements)
  {
    $this->entitlements = $entitlements;
  }
  /** @return GoogleCloudChannelV1Entitlement[] */
  public function getEntitlements()
  {
    return $this->entitlements;
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

class GoogleCloudChannelV1ListOffersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudChannelV1Offer[] */
  public $offers;
  protected $collection_key = 'offers';
  protected $offersType = GoogleCloudChannelV1Offer::class;
  protected $offersDataType = 'array';
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
  /** @param GoogleCloudChannelV1Offer[] */
  public function setOffers($offers)
  {
    $this->offers = $offers;
  }
  /** @return GoogleCloudChannelV1Offer[] */
  public function getOffers()
  {
    return $this->offers;
  }
}

class GoogleCloudChannelV1ListProductsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudChannelV1Product[] */
  public $products;
  protected $collection_key = 'products';
  protected $productsType = GoogleCloudChannelV1Product::class;
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
  /** @param GoogleCloudChannelV1Product[] */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /** @return GoogleCloudChannelV1Product[] */
  public function getProducts()
  {
    return $this->products;
  }
}

class GoogleCloudChannelV1ListPurchasableOffersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudChannelV1PurchasableOffer[] */
  public $purchasableOffers;
  protected $collection_key = 'purchasableOffers';
  protected $purchasableOffersType = GoogleCloudChannelV1PurchasableOffer::class;
  protected $purchasableOffersDataType = 'array';
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
  /** @param GoogleCloudChannelV1PurchasableOffer[] */
  public function setPurchasableOffers($purchasableOffers)
  {
    $this->purchasableOffers = $purchasableOffers;
  }
  /** @return GoogleCloudChannelV1PurchasableOffer[] */
  public function getPurchasableOffers()
  {
    return $this->purchasableOffers;
  }
}

class GoogleCloudChannelV1ListPurchasableSkusResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudChannelV1PurchasableSku[] */
  public $purchasableSkus;
  protected $collection_key = 'purchasableSkus';
  protected $purchasableSkusType = GoogleCloudChannelV1PurchasableSku::class;
  protected $purchasableSkusDataType = 'array';
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
  /** @param GoogleCloudChannelV1PurchasableSku[] */
  public function setPurchasableSkus($purchasableSkus)
  {
    $this->purchasableSkus = $purchasableSkus;
  }
  /** @return GoogleCloudChannelV1PurchasableSku[] */
  public function getPurchasableSkus()
  {
    return $this->purchasableSkus;
  }
}

class GoogleCloudChannelV1ListReportsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudChannelV1Report[] */
  public $reports;
  protected $collection_key = 'reports';
  protected $reportsType = GoogleCloudChannelV1Report::class;
  protected $reportsDataType = 'array';
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
  /** @param GoogleCloudChannelV1Report[] */
  public function setReports($reports)
  {
    $this->reports = $reports;
  }
  /** @return GoogleCloudChannelV1Report[] */
  public function getReports()
  {
    return $this->reports;
  }
}

class GoogleCloudChannelV1ListSkusResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudChannelV1Sku[] */
  public $skus;
  protected $collection_key = 'skus';
  protected $skusType = GoogleCloudChannelV1Sku::class;
  protected $skusDataType = 'array';
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
  /** @param GoogleCloudChannelV1Sku[] */
  public function setSkus($skus)
  {
    $this->skus = $skus;
  }
  /** @return GoogleCloudChannelV1Sku[] */
  public function getSkus()
  {
    return $this->skus;
  }
}

class GoogleCloudChannelV1ListSubscribersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $serviceAccounts;
  /** @var string */
  public $topic;
  protected $collection_key = 'serviceAccounts';
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
  /** @param string[] */
  public function setServiceAccounts($serviceAccounts)
  {
    $this->serviceAccounts = $serviceAccounts;
  }
  /** @return string[] */
  public function getServiceAccounts()
  {
    return $this->serviceAccounts;
  }
  /** @param string */
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /** @return string */
  public function getTopic()
  {
    return $this->topic;
  }
}

class GoogleCloudChannelV1ListTransferableOffersRequest extends \Google\Model
{
  /** @var string */
  public $cloudIdentityId;
  /** @var string */
  public $customerName;
  /** @var string */
  public $languageCode;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $sku;

  /** @param string */
  public function setCloudIdentityId($cloudIdentityId)
  {
    $this->cloudIdentityId = $cloudIdentityId;
  }
  /** @return string */
  public function getCloudIdentityId()
  {
    return $this->cloudIdentityId;
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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
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
  public function setSku($sku)
  {
    $this->sku = $sku;
  }
  /** @return string */
  public function getSku()
  {
    return $this->sku;
  }
}

class GoogleCloudChannelV1ListTransferableOffersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudChannelV1TransferableOffer[] */
  public $transferableOffers;
  protected $collection_key = 'transferableOffers';
  protected $transferableOffersType = GoogleCloudChannelV1TransferableOffer::class;
  protected $transferableOffersDataType = 'array';
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
  /** @param GoogleCloudChannelV1TransferableOffer[] */
  public function setTransferableOffers($transferableOffers)
  {
    $this->transferableOffers = $transferableOffers;
  }
  /** @return GoogleCloudChannelV1TransferableOffer[] */
  public function getTransferableOffers()
  {
    return $this->transferableOffers;
  }
}

class GoogleCloudChannelV1ListTransferableSkusRequest extends \Google\Model
{
  /** @var string */
  public $authToken;
  /** @var string */
  public $cloudIdentityId;
  /** @var string */
  public $customerName;
  /** @var string */
  public $languageCode;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;

  /** @param string */
  public function setAuthToken($authToken)
  {
    $this->authToken = $authToken;
  }
  /** @return string */
  public function getAuthToken()
  {
    return $this->authToken;
  }
  /** @param string */
  public function setCloudIdentityId($cloudIdentityId)
  {
    $this->cloudIdentityId = $cloudIdentityId;
  }
  /** @return string */
  public function getCloudIdentityId()
  {
    return $this->cloudIdentityId;
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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
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

class GoogleCloudChannelV1ListTransferableSkusResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudChannelV1TransferableSku[] */
  public $transferableSkus;
  protected $collection_key = 'transferableSkus';
  protected $transferableSkusType = GoogleCloudChannelV1TransferableSku::class;
  protected $transferableSkusDataType = 'array';
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
  /** @param GoogleCloudChannelV1TransferableSku[] */
  public function setTransferableSkus($transferableSkus)
  {
    $this->transferableSkus = $transferableSkus;
  }
  /** @return GoogleCloudChannelV1TransferableSku[] */
  public function getTransferableSkus()
  {
    return $this->transferableSkus;
  }
}

class GoogleCloudChannelV1MarketingInfo extends \Google\Model
{
  /** @var GoogleCloudChannelV1Media */
  public $defaultLogo;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  protected $defaultLogoType = GoogleCloudChannelV1Media::class;
  protected $defaultLogoDataType = '';
  /** @param GoogleCloudChannelV1Media */
  public function setDefaultLogo(GoogleCloudChannelV1Media $defaultLogo)
  {
    $this->defaultLogo = $defaultLogo;
  }
  /** @return GoogleCloudChannelV1Media */
  public function getDefaultLogo()
  {
    return $this->defaultLogo;
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
}

class GoogleCloudChannelV1Media extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $title;
  /** @var string */
  public $type;

  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
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

class GoogleCloudChannelV1Offer extends \Google\Collection
{
  /** @var GoogleCloudChannelV1Constraints */
  public $constraints;
  /** @var string */
  public $dealCode;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudChannelV1MarketingInfo */
  public $marketingInfo;
  /** @var string */
  public $name;
  /** @var GoogleCloudChannelV1ParameterDefinition[] */
  public $parameterDefinitions;
  /** @var GoogleCloudChannelV1Plan */
  public $plan;
  /** @var GoogleCloudChannelV1PriceByResource[] */
  public $priceByResources;
  /** @var GoogleCloudChannelV1Sku */
  public $sku;
  /** @var string */
  public $startTime;
  protected $collection_key = 'priceByResources';
  protected $constraintsType = GoogleCloudChannelV1Constraints::class;
  protected $constraintsDataType = '';
  protected $marketingInfoType = GoogleCloudChannelV1MarketingInfo::class;
  protected $marketingInfoDataType = '';
  protected $parameterDefinitionsType = GoogleCloudChannelV1ParameterDefinition::class;
  protected $parameterDefinitionsDataType = 'array';
  protected $planType = GoogleCloudChannelV1Plan::class;
  protected $planDataType = '';
  protected $priceByResourcesType = GoogleCloudChannelV1PriceByResource::class;
  protected $priceByResourcesDataType = 'array';
  protected $skuType = GoogleCloudChannelV1Sku::class;
  protected $skuDataType = '';
  /** @param GoogleCloudChannelV1Constraints */
  public function setConstraints(GoogleCloudChannelV1Constraints $constraints)
  {
    $this->constraints = $constraints;
  }
  /** @return GoogleCloudChannelV1Constraints */
  public function getConstraints()
  {
    return $this->constraints;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudChannelV1MarketingInfo */
  public function setMarketingInfo(GoogleCloudChannelV1MarketingInfo $marketingInfo)
  {
    $this->marketingInfo = $marketingInfo;
  }
  /** @return GoogleCloudChannelV1MarketingInfo */
  public function getMarketingInfo()
  {
    return $this->marketingInfo;
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
  /** @param GoogleCloudChannelV1ParameterDefinition[] */
  public function setParameterDefinitions($parameterDefinitions)
  {
    $this->parameterDefinitions = $parameterDefinitions;
  }
  /** @return GoogleCloudChannelV1ParameterDefinition[] */
  public function getParameterDefinitions()
  {
    return $this->parameterDefinitions;
  }
  /** @param GoogleCloudChannelV1Plan */
  public function setPlan(GoogleCloudChannelV1Plan $plan)
  {
    $this->plan = $plan;
  }
  /** @return GoogleCloudChannelV1Plan */
  public function getPlan()
  {
    return $this->plan;
  }
  /** @param GoogleCloudChannelV1PriceByResource[] */
  public function setPriceByResources($priceByResources)
  {
    $this->priceByResources = $priceByResources;
  }
  /** @return GoogleCloudChannelV1PriceByResource[] */
  public function getPriceByResources()
  {
    return $this->priceByResources;
  }
  /** @param GoogleCloudChannelV1Sku */
  public function setSku(GoogleCloudChannelV1Sku $sku)
  {
    $this->sku = $sku;
  }
  /** @return GoogleCloudChannelV1Sku */
  public function getSku()
  {
    return $this->sku;
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

class GoogleCloudChannelV1OperationMetadata extends \Google\Model
{
  /** @var string */
  public $operationType;

  /** @param string */
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
  }
}

class GoogleCloudChannelV1Parameter extends \Google\Model
{
  /** @var bool */
  public $editable;
  /** @var string */
  public $name;
  /** @var GoogleCloudChannelV1Value */
  public $value;
  protected $valueType = GoogleCloudChannelV1Value::class;
  protected $valueDataType = '';
  /** @param bool */
  public function setEditable($editable)
  {
    $this->editable = $editable;
  }
  /** @return bool */
  public function getEditable()
  {
    return $this->editable;
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
  /** @param GoogleCloudChannelV1Value */
  public function setValue(GoogleCloudChannelV1Value $value)
  {
    $this->value = $value;
  }
  /** @return GoogleCloudChannelV1Value */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudChannelV1ParameterDefinition extends \Google\Collection
{
  /** @var GoogleCloudChannelV1Value[] */
  public $allowedValues;
  /** @var GoogleCloudChannelV1Value */
  public $maxValue;
  /** @var GoogleCloudChannelV1Value */
  public $minValue;
  /** @var string */
  public $name;
  /** @var bool */
  public $optional;
  /** @var string */
  public $parameterType;
  protected $collection_key = 'allowedValues';
  protected $allowedValuesType = GoogleCloudChannelV1Value::class;
  protected $allowedValuesDataType = 'array';
  protected $maxValueType = GoogleCloudChannelV1Value::class;
  protected $maxValueDataType = '';
  protected $minValueType = GoogleCloudChannelV1Value::class;
  protected $minValueDataType = '';
  /** @param GoogleCloudChannelV1Value[] */
  public function setAllowedValues($allowedValues)
  {
    $this->allowedValues = $allowedValues;
  }
  /** @return GoogleCloudChannelV1Value[] */
  public function getAllowedValues()
  {
    return $this->allowedValues;
  }
  /** @param GoogleCloudChannelV1Value */
  public function setMaxValue(GoogleCloudChannelV1Value $maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /** @return GoogleCloudChannelV1Value */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /** @param GoogleCloudChannelV1Value */
  public function setMinValue(GoogleCloudChannelV1Value $minValue)
  {
    $this->minValue = $minValue;
  }
  /** @return GoogleCloudChannelV1Value */
  public function getMinValue()
  {
    return $this->minValue;
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
  public function setOptional($optional)
  {
    $this->optional = $optional;
  }
  /** @return bool */
  public function getOptional()
  {
    return $this->optional;
  }
  /** @param string */
  public function setParameterType($parameterType)
  {
    $this->parameterType = $parameterType;
  }
  /** @return string */
  public function getParameterType()
  {
    return $this->parameterType;
  }
}

class GoogleCloudChannelV1PercentageAdjustment extends \Google\Model
{
  /** @var GoogleTypeDecimal */
  public $percentage;
  protected $percentageType = GoogleTypeDecimal::class;
  protected $percentageDataType = '';
  /** @param GoogleTypeDecimal */
  public function setPercentage(GoogleTypeDecimal $percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return GoogleTypeDecimal */
  public function getPercentage()
  {
    return $this->percentage;
  }
}

class GoogleCloudChannelV1Period extends \Google\Model
{
  /** @var int */
  public $duration;
  /** @var string */
  public $periodType;

  /** @param int */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return int */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param string */
  public function setPeriodType($periodType)
  {
    $this->periodType = $periodType;
  }
  /** @return string */
  public function getPeriodType()
  {
    return $this->periodType;
  }
}

class GoogleCloudChannelV1Plan extends \Google\Model
{
  /** @var string */
  public $billingAccount;
  /** @var GoogleCloudChannelV1Period */
  public $paymentCycle;
  /** @var string */
  public $paymentPlan;
  /** @var string */
  public $paymentType;
  /** @var GoogleCloudChannelV1Period */
  public $trialPeriod;
  protected $paymentCycleType = GoogleCloudChannelV1Period::class;
  protected $paymentCycleDataType = '';
  protected $trialPeriodType = GoogleCloudChannelV1Period::class;
  protected $trialPeriodDataType = '';
  /** @param string */
  public function setBillingAccount($billingAccount)
  {
    $this->billingAccount = $billingAccount;
  }
  /** @return string */
  public function getBillingAccount()
  {
    return $this->billingAccount;
  }
  /** @param GoogleCloudChannelV1Period */
  public function setPaymentCycle(GoogleCloudChannelV1Period $paymentCycle)
  {
    $this->paymentCycle = $paymentCycle;
  }
  /** @return GoogleCloudChannelV1Period */
  public function getPaymentCycle()
  {
    return $this->paymentCycle;
  }
  /** @param string */
  public function setPaymentPlan($paymentPlan)
  {
    $this->paymentPlan = $paymentPlan;
  }
  /** @return string */
  public function getPaymentPlan()
  {
    return $this->paymentPlan;
  }
  /** @param string */
  public function setPaymentType($paymentType)
  {
    $this->paymentType = $paymentType;
  }
  /** @return string */
  public function getPaymentType()
  {
    return $this->paymentType;
  }
  /** @param GoogleCloudChannelV1Period */
  public function setTrialPeriod(GoogleCloudChannelV1Period $trialPeriod)
  {
    $this->trialPeriod = $trialPeriod;
  }
  /** @return GoogleCloudChannelV1Period */
  public function getTrialPeriod()
  {
    return $this->trialPeriod;
  }
}

class GoogleCloudChannelV1Price extends \Google\Model
{
  /** @var GoogleTypeMoney */
  public $basePrice;
  public $discount;
  /** @var GoogleTypeMoney */
  public $effectivePrice;
  /** @var string */
  public $externalPriceUri;
  protected $basePriceType = GoogleTypeMoney::class;
  protected $basePriceDataType = '';
  protected $effectivePriceType = GoogleTypeMoney::class;
  protected $effectivePriceDataType = '';
  /** @param GoogleTypeMoney */
  public function setBasePrice(GoogleTypeMoney $basePrice)
  {
    $this->basePrice = $basePrice;
  }
  /** @return GoogleTypeMoney */
  public function getBasePrice()
  {
    return $this->basePrice;
  }
  public function setDiscount($discount)
  {
    $this->discount = $discount;
  }
  public function getDiscount()
  {
    return $this->discount;
  }
  /** @param GoogleTypeMoney */
  public function setEffectivePrice(GoogleTypeMoney $effectivePrice)
  {
    $this->effectivePrice = $effectivePrice;
  }
  /** @return GoogleTypeMoney */
  public function getEffectivePrice()
  {
    return $this->effectivePrice;
  }
  /** @param string */
  public function setExternalPriceUri($externalPriceUri)
  {
    $this->externalPriceUri = $externalPriceUri;
  }
  /** @return string */
  public function getExternalPriceUri()
  {
    return $this->externalPriceUri;
  }
}

class GoogleCloudChannelV1PriceByResource extends \Google\Collection
{
  /** @var GoogleCloudChannelV1Price */
  public $price;
  /** @var GoogleCloudChannelV1PricePhase[] */
  public $pricePhases;
  /** @var string */
  public $resourceType;
  protected $collection_key = 'pricePhases';
  protected $priceType = GoogleCloudChannelV1Price::class;
  protected $priceDataType = '';
  protected $pricePhasesType = GoogleCloudChannelV1PricePhase::class;
  protected $pricePhasesDataType = 'array';
  /** @param GoogleCloudChannelV1Price */
  public function setPrice(GoogleCloudChannelV1Price $price)
  {
    $this->price = $price;
  }
  /** @return GoogleCloudChannelV1Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param GoogleCloudChannelV1PricePhase[] */
  public function setPricePhases($pricePhases)
  {
    $this->pricePhases = $pricePhases;
  }
  /** @return GoogleCloudChannelV1PricePhase[] */
  public function getPricePhases()
  {
    return $this->pricePhases;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

class GoogleCloudChannelV1PricePhase extends \Google\Collection
{
  /** @var int */
  public $firstPeriod;
  /** @var int */
  public $lastPeriod;
  /** @var string */
  public $periodType;
  /** @var GoogleCloudChannelV1Price */
  public $price;
  /** @var GoogleCloudChannelV1PriceTier[] */
  public $priceTiers;
  protected $collection_key = 'priceTiers';
  protected $priceType = GoogleCloudChannelV1Price::class;
  protected $priceDataType = '';
  protected $priceTiersType = GoogleCloudChannelV1PriceTier::class;
  protected $priceTiersDataType = 'array';
  /** @param int */
  public function setFirstPeriod($firstPeriod)
  {
    $this->firstPeriod = $firstPeriod;
  }
  /** @return int */
  public function getFirstPeriod()
  {
    return $this->firstPeriod;
  }
  /** @param int */
  public function setLastPeriod($lastPeriod)
  {
    $this->lastPeriod = $lastPeriod;
  }
  /** @return int */
  public function getLastPeriod()
  {
    return $this->lastPeriod;
  }
  /** @param string */
  public function setPeriodType($periodType)
  {
    $this->periodType = $periodType;
  }
  /** @return string */
  public function getPeriodType()
  {
    return $this->periodType;
  }
  /** @param GoogleCloudChannelV1Price */
  public function setPrice(GoogleCloudChannelV1Price $price)
  {
    $this->price = $price;
  }
  /** @return GoogleCloudChannelV1Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param GoogleCloudChannelV1PriceTier[] */
  public function setPriceTiers($priceTiers)
  {
    $this->priceTiers = $priceTiers;
  }
  /** @return GoogleCloudChannelV1PriceTier[] */
  public function getPriceTiers()
  {
    return $this->priceTiers;
  }
}

class GoogleCloudChannelV1PriceTier extends \Google\Model
{
  /** @var int */
  public $firstResource;
  /** @var int */
  public $lastResource;
  /** @var GoogleCloudChannelV1Price */
  public $price;
  protected $priceType = GoogleCloudChannelV1Price::class;
  protected $priceDataType = '';
  /** @param int */
  public function setFirstResource($firstResource)
  {
    $this->firstResource = $firstResource;
  }
  /** @return int */
  public function getFirstResource()
  {
    return $this->firstResource;
  }
  /** @param int */
  public function setLastResource($lastResource)
  {
    $this->lastResource = $lastResource;
  }
  /** @return int */
  public function getLastResource()
  {
    return $this->lastResource;
  }
  /** @param GoogleCloudChannelV1Price */
  public function setPrice(GoogleCloudChannelV1Price $price)
  {
    $this->price = $price;
  }
  /** @return GoogleCloudChannelV1Price */
  public function getPrice()
  {
    return $this->price;
  }
}

class GoogleCloudChannelV1Product extends \Google\Model
{
  /** @var GoogleCloudChannelV1MarketingInfo */
  public $marketingInfo;
  /** @var string */
  public $name;
  protected $marketingInfoType = GoogleCloudChannelV1MarketingInfo::class;
  protected $marketingInfoDataType = '';
  /** @param GoogleCloudChannelV1MarketingInfo */
  public function setMarketingInfo(GoogleCloudChannelV1MarketingInfo $marketingInfo)
  {
    $this->marketingInfo = $marketingInfo;
  }
  /** @return GoogleCloudChannelV1MarketingInfo */
  public function getMarketingInfo()
  {
    return $this->marketingInfo;
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

class GoogleCloudChannelV1ProvisionCloudIdentityRequest extends \Google\Model
{
  /** @var GoogleCloudChannelV1CloudIdentityInfo */
  public $cloudIdentityInfo;
  /** @var GoogleCloudChannelV1AdminUser */
  public $user;
  /** @var bool */
  public $validateOnly;
  protected $cloudIdentityInfoType = GoogleCloudChannelV1CloudIdentityInfo::class;
  protected $cloudIdentityInfoDataType = '';
  protected $userType = GoogleCloudChannelV1AdminUser::class;
  protected $userDataType = '';
  /** @param GoogleCloudChannelV1CloudIdentityInfo */
  public function setCloudIdentityInfo(GoogleCloudChannelV1CloudIdentityInfo $cloudIdentityInfo)
  {
    $this->cloudIdentityInfo = $cloudIdentityInfo;
  }
  /** @return GoogleCloudChannelV1CloudIdentityInfo */
  public function getCloudIdentityInfo()
  {
    return $this->cloudIdentityInfo;
  }
  /** @param GoogleCloudChannelV1AdminUser */
  public function setUser(GoogleCloudChannelV1AdminUser $user)
  {
    $this->user = $user;
  }
  /** @return GoogleCloudChannelV1AdminUser */
  public function getUser()
  {
    return $this->user;
  }
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

class GoogleCloudChannelV1ProvisionedService extends \Google\Model
{
  /** @var string */
  public $productId;
  /** @var string */
  public $provisioningId;
  /** @var string */
  public $skuId;

  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param string */
  public function setProvisioningId($provisioningId)
  {
    $this->provisioningId = $provisioningId;
  }
  /** @return string */
  public function getProvisioningId()
  {
    return $this->provisioningId;
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
}

class GoogleCloudChannelV1PurchasableOffer extends \Google\Model
{
  /** @var GoogleCloudChannelV1Offer */
  public $offer;
  protected $offerType = GoogleCloudChannelV1Offer::class;
  protected $offerDataType = '';
  /** @param GoogleCloudChannelV1Offer */
  public function setOffer(GoogleCloudChannelV1Offer $offer)
  {
    $this->offer = $offer;
  }
  /** @return GoogleCloudChannelV1Offer */
  public function getOffer()
  {
    return $this->offer;
  }
}

class GoogleCloudChannelV1PurchasableSku extends \Google\Model
{
  /** @var GoogleCloudChannelV1Sku */
  public $sku;
  protected $skuType = GoogleCloudChannelV1Sku::class;
  protected $skuDataType = '';
  /** @param GoogleCloudChannelV1Sku */
  public function setSku(GoogleCloudChannelV1Sku $sku)
  {
    $this->sku = $sku;
  }
  /** @return GoogleCloudChannelV1Sku */
  public function getSku()
  {
    return $this->sku;
  }
}

class GoogleCloudChannelV1RegisterSubscriberRequest extends \Google\Model
{
  /** @var string */
  public $serviceAccount;

  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}

class GoogleCloudChannelV1RegisterSubscriberResponse extends \Google\Model
{
  /** @var string */
  public $topic;

  /** @param string */
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /** @return string */
  public function getTopic()
  {
    return $this->topic;
  }
}

class GoogleCloudChannelV1RenewalSettings extends \Google\Model
{
  /** @var bool */
  public $enableRenewal;
  /** @var GoogleCloudChannelV1Period */
  public $paymentCycle;
  /** @var string */
  public $paymentPlan;
  /** @var bool */
  public $resizeUnitCount;
  protected $paymentCycleType = GoogleCloudChannelV1Period::class;
  protected $paymentCycleDataType = '';
  /** @param bool */
  public function setEnableRenewal($enableRenewal)
  {
    $this->enableRenewal = $enableRenewal;
  }
  /** @return bool */
  public function getEnableRenewal()
  {
    return $this->enableRenewal;
  }
  /** @param GoogleCloudChannelV1Period */
  public function setPaymentCycle(GoogleCloudChannelV1Period $paymentCycle)
  {
    $this->paymentCycle = $paymentCycle;
  }
  /** @return GoogleCloudChannelV1Period */
  public function getPaymentCycle()
  {
    return $this->paymentCycle;
  }
  /** @param string */
  public function setPaymentPlan($paymentPlan)
  {
    $this->paymentPlan = $paymentPlan;
  }
  /** @return string */
  public function getPaymentPlan()
  {
    return $this->paymentPlan;
  }
  /** @param bool */
  public function setResizeUnitCount($resizeUnitCount)
  {
    $this->resizeUnitCount = $resizeUnitCount;
  }
  /** @return bool */
  public function getResizeUnitCount()
  {
    return $this->resizeUnitCount;
  }
}

class GoogleCloudChannelV1Report extends \Google\Collection
{
  /** @var GoogleCloudChannelV1Column[] */
  public $columns;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  protected $collection_key = 'columns';
  protected $columnsType = GoogleCloudChannelV1Column::class;
  protected $columnsDataType = 'array';
  /** @param GoogleCloudChannelV1Column[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return GoogleCloudChannelV1Column[] */
  public function getColumns()
  {
    return $this->columns;
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
}

class GoogleCloudChannelV1ReportJob extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var GoogleCloudChannelV1ReportStatus */
  public $reportStatus;
  protected $reportStatusType = GoogleCloudChannelV1ReportStatus::class;
  protected $reportStatusDataType = '';
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
  /** @param GoogleCloudChannelV1ReportStatus */
  public function setReportStatus(GoogleCloudChannelV1ReportStatus $reportStatus)
  {
    $this->reportStatus = $reportStatus;
  }
  /** @return GoogleCloudChannelV1ReportStatus */
  public function getReportStatus()
  {
    return $this->reportStatus;
  }
}

class GoogleCloudChannelV1ReportResultsMetadata extends \Google\Model
{
  /** @var GoogleCloudChannelV1DateRange */
  public $dateRange;
  /** @var GoogleCloudChannelV1DateRange */
  public $precedingDateRange;
  /** @var GoogleCloudChannelV1Report */
  public $report;
  /** @var string */
  public $rowCount;
  protected $dateRangeType = GoogleCloudChannelV1DateRange::class;
  protected $dateRangeDataType = '';
  protected $precedingDateRangeType = GoogleCloudChannelV1DateRange::class;
  protected $precedingDateRangeDataType = '';
  protected $reportType = GoogleCloudChannelV1Report::class;
  protected $reportDataType = '';
  /** @param GoogleCloudChannelV1DateRange */
  public function setDateRange(GoogleCloudChannelV1DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  /** @return GoogleCloudChannelV1DateRange */
  public function getDateRange()
  {
    return $this->dateRange;
  }
  /** @param GoogleCloudChannelV1DateRange */
  public function setPrecedingDateRange(GoogleCloudChannelV1DateRange $precedingDateRange)
  {
    $this->precedingDateRange = $precedingDateRange;
  }
  /** @return GoogleCloudChannelV1DateRange */
  public function getPrecedingDateRange()
  {
    return $this->precedingDateRange;
  }
  /** @param GoogleCloudChannelV1Report */
  public function setReport(GoogleCloudChannelV1Report $report)
  {
    $this->report = $report;
  }
  /** @return GoogleCloudChannelV1Report */
  public function getReport()
  {
    return $this->report;
  }
  /** @param string */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return string */
  public function getRowCount()
  {
    return $this->rowCount;
  }
}

class GoogleCloudChannelV1ReportStatus extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;

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

class GoogleCloudChannelV1ReportValue extends \Google\Model
{
  /** @var GoogleTypeDateTime */
  public $dateTimeValue;
  /** @var GoogleTypeDate */
  public $dateValue;
  /** @var GoogleTypeDecimal */
  public $decimalValue;
  /** @var string */
  public $intValue;
  /** @var GoogleTypeMoney */
  public $moneyValue;
  /** @var string */
  public $stringValue;
  protected $dateTimeValueType = GoogleTypeDateTime::class;
  protected $dateTimeValueDataType = '';
  protected $dateValueType = GoogleTypeDate::class;
  protected $dateValueDataType = '';
  protected $decimalValueType = GoogleTypeDecimal::class;
  protected $decimalValueDataType = '';
  protected $moneyValueType = GoogleTypeMoney::class;
  protected $moneyValueDataType = '';
  /** @param GoogleTypeDateTime */
  public function setDateTimeValue(GoogleTypeDateTime $dateTimeValue)
  {
    $this->dateTimeValue = $dateTimeValue;
  }
  /** @return GoogleTypeDateTime */
  public function getDateTimeValue()
  {
    return $this->dateTimeValue;
  }
  /** @param GoogleTypeDate */
  public function setDateValue(GoogleTypeDate $dateValue)
  {
    $this->dateValue = $dateValue;
  }
  /** @return GoogleTypeDate */
  public function getDateValue()
  {
    return $this->dateValue;
  }
  /** @param GoogleTypeDecimal */
  public function setDecimalValue(GoogleTypeDecimal $decimalValue)
  {
    $this->decimalValue = $decimalValue;
  }
  /** @return GoogleTypeDecimal */
  public function getDecimalValue()
  {
    return $this->decimalValue;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param GoogleTypeMoney */
  public function setMoneyValue(GoogleTypeMoney $moneyValue)
  {
    $this->moneyValue = $moneyValue;
  }
  /** @return GoogleTypeMoney */
  public function getMoneyValue()
  {
    return $this->moneyValue;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class GoogleCloudChannelV1RepricingAdjustment extends \Google\Model
{
  /** @var GoogleCloudChannelV1PercentageAdjustment */
  public $percentageAdjustment;
  protected $percentageAdjustmentType = GoogleCloudChannelV1PercentageAdjustment::class;
  protected $percentageAdjustmentDataType = '';
  /** @param GoogleCloudChannelV1PercentageAdjustment */
  public function setPercentageAdjustment(GoogleCloudChannelV1PercentageAdjustment $percentageAdjustment)
  {
    $this->percentageAdjustment = $percentageAdjustment;
  }
  /** @return GoogleCloudChannelV1PercentageAdjustment */
  public function getPercentageAdjustment()
  {
    return $this->percentageAdjustment;
  }
}

class GoogleCloudChannelV1RepricingConfig extends \Google\Model
{
  /** @var GoogleCloudChannelV1RepricingAdjustment */
  public $adjustment;
  /** @var GoogleCloudChannelV1RepricingConfigChannelPartnerGranularity */
  public $channelPartnerGranularity;
  /** @var GoogleTypeDate */
  public $effectiveInvoiceMonth;
  /** @var GoogleCloudChannelV1RepricingConfigEntitlementGranularity */
  public $entitlementGranularity;
  /** @var string */
  public $rebillingBasis;
  protected $adjustmentType = GoogleCloudChannelV1RepricingAdjustment::class;
  protected $adjustmentDataType = '';
  protected $channelPartnerGranularityType = GoogleCloudChannelV1RepricingConfigChannelPartnerGranularity::class;
  protected $channelPartnerGranularityDataType = '';
  protected $effectiveInvoiceMonthType = GoogleTypeDate::class;
  protected $effectiveInvoiceMonthDataType = '';
  protected $entitlementGranularityType = GoogleCloudChannelV1RepricingConfigEntitlementGranularity::class;
  protected $entitlementGranularityDataType = '';
  /** @param GoogleCloudChannelV1RepricingAdjustment */
  public function setAdjustment(GoogleCloudChannelV1RepricingAdjustment $adjustment)
  {
    $this->adjustment = $adjustment;
  }
  /** @return GoogleCloudChannelV1RepricingAdjustment */
  public function getAdjustment()
  {
    return $this->adjustment;
  }
  /** @param GoogleCloudChannelV1RepricingConfigChannelPartnerGranularity */
  public function setChannelPartnerGranularity(GoogleCloudChannelV1RepricingConfigChannelPartnerGranularity $channelPartnerGranularity)
  {
    $this->channelPartnerGranularity = $channelPartnerGranularity;
  }
  /** @return GoogleCloudChannelV1RepricingConfigChannelPartnerGranularity */
  public function getChannelPartnerGranularity()
  {
    return $this->channelPartnerGranularity;
  }
  /** @param GoogleTypeDate */
  public function setEffectiveInvoiceMonth(GoogleTypeDate $effectiveInvoiceMonth)
  {
    $this->effectiveInvoiceMonth = $effectiveInvoiceMonth;
  }
  /** @return GoogleTypeDate */
  public function getEffectiveInvoiceMonth()
  {
    return $this->effectiveInvoiceMonth;
  }
  /** @param GoogleCloudChannelV1RepricingConfigEntitlementGranularity */
  public function setEntitlementGranularity(GoogleCloudChannelV1RepricingConfigEntitlementGranularity $entitlementGranularity)
  {
    $this->entitlementGranularity = $entitlementGranularity;
  }
  /** @return GoogleCloudChannelV1RepricingConfigEntitlementGranularity */
  public function getEntitlementGranularity()
  {
    return $this->entitlementGranularity;
  }
  /** @param string */
  public function setRebillingBasis($rebillingBasis)
  {
    $this->rebillingBasis = $rebillingBasis;
  }
  /** @return string */
  public function getRebillingBasis()
  {
    return $this->rebillingBasis;
  }
}

class GoogleCloudChannelV1RepricingConfigChannelPartnerGranularity extends \Google\Model
{
}

class GoogleCloudChannelV1RepricingConfigEntitlementGranularity extends \Google\Model
{
  /** @var string */
  public $entitlement;

  /** @param string */
  public function setEntitlement($entitlement)
  {
    $this->entitlement = $entitlement;
  }
  /** @return string */
  public function getEntitlement()
  {
    return $this->entitlement;
  }
}

class GoogleCloudChannelV1Row extends \Google\Collection
{
  /** @var GoogleCloudChannelV1ReportValue[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = GoogleCloudChannelV1ReportValue::class;
  protected $valuesDataType = 'array';
  /** @param GoogleCloudChannelV1ReportValue[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return GoogleCloudChannelV1ReportValue[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudChannelV1RunReportJobRequest extends \Google\Model
{
  /** @var GoogleCloudChannelV1DateRange */
  public $dateRange;
  /** @var string */
  public $filter;
  /** @var string */
  public $languageCode;
  protected $dateRangeType = GoogleCloudChannelV1DateRange::class;
  protected $dateRangeDataType = '';
  /** @param GoogleCloudChannelV1DateRange */
  public function setDateRange(GoogleCloudChannelV1DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  /** @return GoogleCloudChannelV1DateRange */
  public function getDateRange()
  {
    return $this->dateRange;
  }
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

class GoogleCloudChannelV1RunReportJobResponse extends \Google\Model
{
  /** @var GoogleCloudChannelV1ReportJob */
  public $reportJob;
  /** @var GoogleCloudChannelV1ReportResultsMetadata */
  public $reportMetadata;
  protected $reportJobType = GoogleCloudChannelV1ReportJob::class;
  protected $reportJobDataType = '';
  protected $reportMetadataType = GoogleCloudChannelV1ReportResultsMetadata::class;
  protected $reportMetadataDataType = '';
  /** @param GoogleCloudChannelV1ReportJob */
  public function setReportJob(GoogleCloudChannelV1ReportJob $reportJob)
  {
    $this->reportJob = $reportJob;
  }
  /** @return GoogleCloudChannelV1ReportJob */
  public function getReportJob()
  {
    return $this->reportJob;
  }
  /** @param GoogleCloudChannelV1ReportResultsMetadata */
  public function setReportMetadata(GoogleCloudChannelV1ReportResultsMetadata $reportMetadata)
  {
    $this->reportMetadata = $reportMetadata;
  }
  /** @return GoogleCloudChannelV1ReportResultsMetadata */
  public function getReportMetadata()
  {
    return $this->reportMetadata;
  }
}

class GoogleCloudChannelV1Sku extends \Google\Model
{
  /** @var GoogleCloudChannelV1MarketingInfo */
  public $marketingInfo;
  /** @var string */
  public $name;
  /** @var GoogleCloudChannelV1Product */
  public $product;
  protected $marketingInfoType = GoogleCloudChannelV1MarketingInfo::class;
  protected $marketingInfoDataType = '';
  protected $productType = GoogleCloudChannelV1Product::class;
  protected $productDataType = '';
  /** @param GoogleCloudChannelV1MarketingInfo */
  public function setMarketingInfo(GoogleCloudChannelV1MarketingInfo $marketingInfo)
  {
    $this->marketingInfo = $marketingInfo;
  }
  /** @return GoogleCloudChannelV1MarketingInfo */
  public function getMarketingInfo()
  {
    return $this->marketingInfo;
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
  /** @param GoogleCloudChannelV1Product */
  public function setProduct(GoogleCloudChannelV1Product $product)
  {
    $this->product = $product;
  }
  /** @return GoogleCloudChannelV1Product */
  public function getProduct()
  {
    return $this->product;
  }
}

class GoogleCloudChannelV1StartPaidServiceRequest extends \Google\Model
{
  /** @var string */
  public $requestId;

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

class GoogleCloudChannelV1SubscriberEvent extends \Google\Model
{
  /** @var GoogleCloudChannelV1CustomerEvent */
  public $customerEvent;
  /** @var GoogleCloudChannelV1EntitlementEvent */
  public $entitlementEvent;
  protected $customerEventType = GoogleCloudChannelV1CustomerEvent::class;
  protected $customerEventDataType = '';
  protected $entitlementEventType = GoogleCloudChannelV1EntitlementEvent::class;
  protected $entitlementEventDataType = '';
  /** @param GoogleCloudChannelV1CustomerEvent */
  public function setCustomerEvent(GoogleCloudChannelV1CustomerEvent $customerEvent)
  {
    $this->customerEvent = $customerEvent;
  }
  /** @return GoogleCloudChannelV1CustomerEvent */
  public function getCustomerEvent()
  {
    return $this->customerEvent;
  }
  /** @param GoogleCloudChannelV1EntitlementEvent */
  public function setEntitlementEvent(GoogleCloudChannelV1EntitlementEvent $entitlementEvent)
  {
    $this->entitlementEvent = $entitlementEvent;
  }
  /** @return GoogleCloudChannelV1EntitlementEvent */
  public function getEntitlementEvent()
  {
    return $this->entitlementEvent;
  }
}

class GoogleCloudChannelV1SuspendEntitlementRequest extends \Google\Model
{
  /** @var string */
  public $requestId;

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

class GoogleCloudChannelV1TransferEligibility extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $ineligibilityReason;
  /** @var bool */
  public $isEligible;

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
  public function setIneligibilityReason($ineligibilityReason)
  {
    $this->ineligibilityReason = $ineligibilityReason;
  }
  /** @return string */
  public function getIneligibilityReason()
  {
    return $this->ineligibilityReason;
  }
  /** @param bool */
  public function setIsEligible($isEligible)
  {
    $this->isEligible = $isEligible;
  }
  /** @return bool */
  public function getIsEligible()
  {
    return $this->isEligible;
  }
}

class GoogleCloudChannelV1TransferEntitlementsRequest extends \Google\Collection
{
  /** @var string */
  public $authToken;
  /** @var GoogleCloudChannelV1Entitlement[] */
  public $entitlements;
  /** @var string */
  public $requestId;
  protected $collection_key = 'entitlements';
  protected $entitlementsType = GoogleCloudChannelV1Entitlement::class;
  protected $entitlementsDataType = 'array';
  /** @param string */
  public function setAuthToken($authToken)
  {
    $this->authToken = $authToken;
  }
  /** @return string */
  public function getAuthToken()
  {
    return $this->authToken;
  }
  /** @param GoogleCloudChannelV1Entitlement[] */
  public function setEntitlements($entitlements)
  {
    $this->entitlements = $entitlements;
  }
  /** @return GoogleCloudChannelV1Entitlement[] */
  public function getEntitlements()
  {
    return $this->entitlements;
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

class GoogleCloudChannelV1TransferEntitlementsResponse extends \Google\Collection
{
  /** @var GoogleCloudChannelV1Entitlement[] */
  public $entitlements;
  protected $collection_key = 'entitlements';
  protected $entitlementsType = GoogleCloudChannelV1Entitlement::class;
  protected $entitlementsDataType = 'array';
  /** @param GoogleCloudChannelV1Entitlement[] */
  public function setEntitlements($entitlements)
  {
    $this->entitlements = $entitlements;
  }
  /** @return GoogleCloudChannelV1Entitlement[] */
  public function getEntitlements()
  {
    return $this->entitlements;
  }
}

class GoogleCloudChannelV1TransferEntitlementsToGoogleRequest extends \Google\Collection
{
  /** @var GoogleCloudChannelV1Entitlement[] */
  public $entitlements;
  /** @var string */
  public $requestId;
  protected $collection_key = 'entitlements';
  protected $entitlementsType = GoogleCloudChannelV1Entitlement::class;
  protected $entitlementsDataType = 'array';
  /** @param GoogleCloudChannelV1Entitlement[] */
  public function setEntitlements($entitlements)
  {
    $this->entitlements = $entitlements;
  }
  /** @return GoogleCloudChannelV1Entitlement[] */
  public function getEntitlements()
  {
    return $this->entitlements;
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

class GoogleCloudChannelV1TransferableOffer extends \Google\Model
{
  /** @var GoogleCloudChannelV1Offer */
  public $offer;
  protected $offerType = GoogleCloudChannelV1Offer::class;
  protected $offerDataType = '';
  /** @param GoogleCloudChannelV1Offer */
  public function setOffer(GoogleCloudChannelV1Offer $offer)
  {
    $this->offer = $offer;
  }
  /** @return GoogleCloudChannelV1Offer */
  public function getOffer()
  {
    return $this->offer;
  }
}

class GoogleCloudChannelV1TransferableSku extends \Google\Model
{
  /** @var GoogleCloudChannelV1Sku */
  public $legacySku;
  /** @var GoogleCloudChannelV1Sku */
  public $sku;
  /** @var GoogleCloudChannelV1TransferEligibility */
  public $transferEligibility;
  protected $legacySkuType = GoogleCloudChannelV1Sku::class;
  protected $legacySkuDataType = '';
  protected $skuType = GoogleCloudChannelV1Sku::class;
  protected $skuDataType = '';
  protected $transferEligibilityType = GoogleCloudChannelV1TransferEligibility::class;
  protected $transferEligibilityDataType = '';
  /** @param GoogleCloudChannelV1Sku */
  public function setLegacySku(GoogleCloudChannelV1Sku $legacySku)
  {
    $this->legacySku = $legacySku;
  }
  /** @return GoogleCloudChannelV1Sku */
  public function getLegacySku()
  {
    return $this->legacySku;
  }
  /** @param GoogleCloudChannelV1Sku */
  public function setSku(GoogleCloudChannelV1Sku $sku)
  {
    $this->sku = $sku;
  }
  /** @return GoogleCloudChannelV1Sku */
  public function getSku()
  {
    return $this->sku;
  }
  /** @param GoogleCloudChannelV1TransferEligibility */
  public function setTransferEligibility(GoogleCloudChannelV1TransferEligibility $transferEligibility)
  {
    $this->transferEligibility = $transferEligibility;
  }
  /** @return GoogleCloudChannelV1TransferEligibility */
  public function getTransferEligibility()
  {
    return $this->transferEligibility;
  }
}

class GoogleCloudChannelV1TrialSettings extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var bool */
  public $trial;

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
  /** @param bool */
  public function setTrial($trial)
  {
    $this->trial = $trial;
  }
  /** @return bool */
  public function getTrial()
  {
    return $this->trial;
  }
}

class GoogleCloudChannelV1UnregisterSubscriberRequest extends \Google\Model
{
  /** @var string */
  public $serviceAccount;

  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}

class GoogleCloudChannelV1UnregisterSubscriberResponse extends \Google\Model
{
  /** @var string */
  public $topic;

  /** @param string */
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /** @return string */
  public function getTopic()
  {
    return $this->topic;
  }
}

class GoogleCloudChannelV1UpdateChannelPartnerLinkRequest extends \Google\Model
{
  /** @var GoogleCloudChannelV1ChannelPartnerLink */
  public $channelPartnerLink;
  /** @var string */
  public $updateMask;
  protected $channelPartnerLinkType = GoogleCloudChannelV1ChannelPartnerLink::class;
  protected $channelPartnerLinkDataType = '';
  /** @param GoogleCloudChannelV1ChannelPartnerLink */
  public function setChannelPartnerLink(GoogleCloudChannelV1ChannelPartnerLink $channelPartnerLink)
  {
    $this->channelPartnerLink = $channelPartnerLink;
  }
  /** @return GoogleCloudChannelV1ChannelPartnerLink */
  public function getChannelPartnerLink()
  {
    return $this->channelPartnerLink;
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

class GoogleCloudChannelV1Value extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  public $doubleValue;
  /** @var string */
  public $int64Value;
  /** @var array[] */
  public $protoValue;
  /** @var string */
  public $stringValue;

  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
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
  /** @param array[] */
  public function setProtoValue($protoValue)
  {
    $this->protoValue = $protoValue;
  }
  /** @return array[] */
  public function getProtoValue()
  {
    return $this->protoValue;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class GoogleCloudChannelV1alpha1AssociationInfo extends \Google\Model
{
  /** @var string */
  public $baseEntitlement;

  /** @param string */
  public function setBaseEntitlement($baseEntitlement)
  {
    $this->baseEntitlement = $baseEntitlement;
  }
  /** @return string */
  public function getBaseEntitlement()
  {
    return $this->baseEntitlement;
  }
}

class GoogleCloudChannelV1alpha1ChannelPartnerEvent extends \Google\Model
{
  /** @var string */
  public $channelPartner;
  /** @var string */
  public $eventType;

  /** @param string */
  public function setChannelPartner($channelPartner)
  {
    $this->channelPartner = $channelPartner;
  }
  /** @return string */
  public function getChannelPartner()
  {
    return $this->channelPartner;
  }
  /** @param string */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string */
  public function getEventType()
  {
    return $this->eventType;
  }
}

class GoogleCloudChannelV1alpha1Column extends \Google\Model
{
  /** @var string */
  public $columnId;
  /** @var string */
  public $dataType;
  /** @var string */
  public $displayName;

  /** @param string */
  public function setColumnId($columnId)
  {
    $this->columnId = $columnId;
  }
  /** @return string */
  public function getColumnId()
  {
    return $this->columnId;
  }
  /** @param string */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return string */
  public function getDataType()
  {
    return $this->dataType;
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

class GoogleCloudChannelV1alpha1CommitmentSettings extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var GoogleCloudChannelV1alpha1RenewalSettings */
  public $renewalSettings;
  /** @var string */
  public $startTime;
  protected $renewalSettingsType = GoogleCloudChannelV1alpha1RenewalSettings::class;
  protected $renewalSettingsDataType = '';
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
  /** @param GoogleCloudChannelV1alpha1RenewalSettings */
  public function setRenewalSettings(GoogleCloudChannelV1alpha1RenewalSettings $renewalSettings)
  {
    $this->renewalSettings = $renewalSettings;
  }
  /** @return GoogleCloudChannelV1alpha1RenewalSettings */
  public function getRenewalSettings()
  {
    return $this->renewalSettings;
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

class GoogleCloudChannelV1alpha1CustomerEvent extends \Google\Model
{
  /** @var string */
  public $customer;
  /** @var string */
  public $eventType;

  /** @param string */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /** @return string */
  public function getCustomer()
  {
    return $this->customer;
  }
  /** @param string */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string */
  public function getEventType()
  {
    return $this->eventType;
  }
}

class GoogleCloudChannelV1alpha1DateRange extends \Google\Model
{
  /** @var GoogleTypeDate */
  public $invoiceEndDate;
  /** @var GoogleTypeDate */
  public $invoiceStartDate;
  /** @var GoogleTypeDateTime */
  public $usageEndDateTime;
  /** @var GoogleTypeDateTime */
  public $usageStartDateTime;
  protected $invoiceEndDateType = GoogleTypeDate::class;
  protected $invoiceEndDateDataType = '';
  protected $invoiceStartDateType = GoogleTypeDate::class;
  protected $invoiceStartDateDataType = '';
  protected $usageEndDateTimeType = GoogleTypeDateTime::class;
  protected $usageEndDateTimeDataType = '';
  protected $usageStartDateTimeType = GoogleTypeDateTime::class;
  protected $usageStartDateTimeDataType = '';
  /** @param GoogleTypeDate */
  public function setInvoiceEndDate(GoogleTypeDate $invoiceEndDate)
  {
    $this->invoiceEndDate = $invoiceEndDate;
  }
  /** @return GoogleTypeDate */
  public function getInvoiceEndDate()
  {
    return $this->invoiceEndDate;
  }
  /** @param GoogleTypeDate */
  public function setInvoiceStartDate(GoogleTypeDate $invoiceStartDate)
  {
    $this->invoiceStartDate = $invoiceStartDate;
  }
  /** @return GoogleTypeDate */
  public function getInvoiceStartDate()
  {
    return $this->invoiceStartDate;
  }
  /** @param GoogleTypeDateTime */
  public function setUsageEndDateTime(GoogleTypeDateTime $usageEndDateTime)
  {
    $this->usageEndDateTime = $usageEndDateTime;
  }
  /** @return GoogleTypeDateTime */
  public function getUsageEndDateTime()
  {
    return $this->usageEndDateTime;
  }
  /** @param GoogleTypeDateTime */
  public function setUsageStartDateTime(GoogleTypeDateTime $usageStartDateTime)
  {
    $this->usageStartDateTime = $usageStartDateTime;
  }
  /** @return GoogleTypeDateTime */
  public function getUsageStartDateTime()
  {
    return $this->usageStartDateTime;
  }
}

class GoogleCloudChannelV1alpha1Entitlement extends \Google\Collection
{
  /** @var int */
  public $assignedUnits;
  /** @var GoogleCloudChannelV1alpha1AssociationInfo */
  public $associationInfo;
  /** @var string */
  public $channelPartnerId;
  /** @var GoogleCloudChannelV1alpha1CommitmentSettings */
  public $commitmentSettings;
  /** @var string */
  public $createTime;
  /** @var int */
  public $maxUnits;
  /** @var string */
  public $name;
  /** @var int */
  public $numUnits;
  /** @var string */
  public $offer;
  /** @var GoogleCloudChannelV1alpha1Parameter[] */
  public $parameters;
  /** @var GoogleCloudChannelV1alpha1ProvisionedService */
  public $provisionedService;
  /** @var string */
  public $provisioningState;
  /** @var string */
  public $purchaseOrderId;
  /** @var string[] */
  public $suspensionReasons;
  /** @var GoogleCloudChannelV1alpha1TrialSettings */
  public $trialSettings;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'suspensionReasons';
  protected $associationInfoType = GoogleCloudChannelV1alpha1AssociationInfo::class;
  protected $associationInfoDataType = '';
  protected $commitmentSettingsType = GoogleCloudChannelV1alpha1CommitmentSettings::class;
  protected $commitmentSettingsDataType = '';
  protected $parametersType = GoogleCloudChannelV1alpha1Parameter::class;
  protected $parametersDataType = 'array';
  protected $provisionedServiceType = GoogleCloudChannelV1alpha1ProvisionedService::class;
  protected $provisionedServiceDataType = '';
  protected $trialSettingsType = GoogleCloudChannelV1alpha1TrialSettings::class;
  protected $trialSettingsDataType = '';
  /** @param int */
  public function setAssignedUnits($assignedUnits)
  {
    $this->assignedUnits = $assignedUnits;
  }
  /** @return int */
  public function getAssignedUnits()
  {
    return $this->assignedUnits;
  }
  /** @param GoogleCloudChannelV1alpha1AssociationInfo */
  public function setAssociationInfo(GoogleCloudChannelV1alpha1AssociationInfo $associationInfo)
  {
    $this->associationInfo = $associationInfo;
  }
  /** @return GoogleCloudChannelV1alpha1AssociationInfo */
  public function getAssociationInfo()
  {
    return $this->associationInfo;
  }
  /** @param string */
  public function setChannelPartnerId($channelPartnerId)
  {
    $this->channelPartnerId = $channelPartnerId;
  }
  /** @return string */
  public function getChannelPartnerId()
  {
    return $this->channelPartnerId;
  }
  /** @param GoogleCloudChannelV1alpha1CommitmentSettings */
  public function setCommitmentSettings(GoogleCloudChannelV1alpha1CommitmentSettings $commitmentSettings)
  {
    $this->commitmentSettings = $commitmentSettings;
  }
  /** @return GoogleCloudChannelV1alpha1CommitmentSettings */
  public function getCommitmentSettings()
  {
    return $this->commitmentSettings;
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
  /** @param int */
  public function setMaxUnits($maxUnits)
  {
    $this->maxUnits = $maxUnits;
  }
  /** @return int */
  public function getMaxUnits()
  {
    return $this->maxUnits;
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
  /** @param int */
  public function setNumUnits($numUnits)
  {
    $this->numUnits = $numUnits;
  }
  /** @return int */
  public function getNumUnits()
  {
    return $this->numUnits;
  }
  /** @param string */
  public function setOffer($offer)
  {
    $this->offer = $offer;
  }
  /** @return string */
  public function getOffer()
  {
    return $this->offer;
  }
  /** @param GoogleCloudChannelV1alpha1Parameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudChannelV1alpha1Parameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param GoogleCloudChannelV1alpha1ProvisionedService */
  public function setProvisionedService(GoogleCloudChannelV1alpha1ProvisionedService $provisionedService)
  {
    $this->provisionedService = $provisionedService;
  }
  /** @return GoogleCloudChannelV1alpha1ProvisionedService */
  public function getProvisionedService()
  {
    return $this->provisionedService;
  }
  /** @param string */
  public function setProvisioningState($provisioningState)
  {
    $this->provisioningState = $provisioningState;
  }
  /** @return string */
  public function getProvisioningState()
  {
    return $this->provisioningState;
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
  /** @param GoogleCloudChannelV1alpha1TrialSettings */
  public function setTrialSettings(GoogleCloudChannelV1alpha1TrialSettings $trialSettings)
  {
    $this->trialSettings = $trialSettings;
  }
  /** @return GoogleCloudChannelV1alpha1TrialSettings */
  public function getTrialSettings()
  {
    return $this->trialSettings;
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

class GoogleCloudChannelV1alpha1EntitlementEvent extends \Google\Model
{
  /** @var string */
  public $entitlement;
  /** @var string */
  public $eventType;

  /** @param string */
  public function setEntitlement($entitlement)
  {
    $this->entitlement = $entitlement;
  }
  /** @return string */
  public function getEntitlement()
  {
    return $this->entitlement;
  }
  /** @param string */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string */
  public function getEventType()
  {
    return $this->eventType;
  }
}

class GoogleCloudChannelV1alpha1OperationMetadata extends \Google\Model
{
  /** @var string */
  public $operationType;

  /** @param string */
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
  }
}

class GoogleCloudChannelV1alpha1Parameter extends \Google\Model
{
  /** @var bool */
  public $editable;
  /** @var string */
  public $name;
  /** @var GoogleCloudChannelV1alpha1Value */
  public $value;
  protected $valueType = GoogleCloudChannelV1alpha1Value::class;
  protected $valueDataType = '';
  /** @param bool */
  public function setEditable($editable)
  {
    $this->editable = $editable;
  }
  /** @return bool */
  public function getEditable()
  {
    return $this->editable;
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
  /** @param GoogleCloudChannelV1alpha1Value */
  public function setValue(GoogleCloudChannelV1alpha1Value $value)
  {
    $this->value = $value;
  }
  /** @return GoogleCloudChannelV1alpha1Value */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudChannelV1alpha1Period extends \Google\Model
{
  /** @var int */
  public $duration;
  /** @var string */
  public $periodType;

  /** @param int */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return int */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param string */
  public function setPeriodType($periodType)
  {
    $this->periodType = $periodType;
  }
  /** @return string */
  public function getPeriodType()
  {
    return $this->periodType;
  }
}

class GoogleCloudChannelV1alpha1ProvisionedService extends \Google\Model
{
  /** @var string */
  public $productId;
  /** @var string */
  public $provisioningId;
  /** @var string */
  public $skuId;

  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param string */
  public function setProvisioningId($provisioningId)
  {
    $this->provisioningId = $provisioningId;
  }
  /** @return string */
  public function getProvisioningId()
  {
    return $this->provisioningId;
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
}

class GoogleCloudChannelV1alpha1RenewalSettings extends \Google\Model
{
  /** @var bool */
  public $disableCommitment;
  /** @var bool */
  public $enableRenewal;
  /** @var GoogleCloudChannelV1alpha1Period */
  public $paymentCycle;
  /** @var string */
  public $paymentOption;
  /** @var string */
  public $paymentPlan;
  /** @var bool */
  public $resizeUnitCount;
  protected $paymentCycleType = GoogleCloudChannelV1alpha1Period::class;
  protected $paymentCycleDataType = '';
  /** @param bool */
  public function setDisableCommitment($disableCommitment)
  {
    $this->disableCommitment = $disableCommitment;
  }
  /** @return bool */
  public function getDisableCommitment()
  {
    return $this->disableCommitment;
  }
  /** @param bool */
  public function setEnableRenewal($enableRenewal)
  {
    $this->enableRenewal = $enableRenewal;
  }
  /** @return bool */
  public function getEnableRenewal()
  {
    return $this->enableRenewal;
  }
  /** @param GoogleCloudChannelV1alpha1Period */
  public function setPaymentCycle(GoogleCloudChannelV1alpha1Period $paymentCycle)
  {
    $this->paymentCycle = $paymentCycle;
  }
  /** @return GoogleCloudChannelV1alpha1Period */
  public function getPaymentCycle()
  {
    return $this->paymentCycle;
  }
  /** @param string */
  public function setPaymentOption($paymentOption)
  {
    $this->paymentOption = $paymentOption;
  }
  /** @return string */
  public function getPaymentOption()
  {
    return $this->paymentOption;
  }
  /** @param string */
  public function setPaymentPlan($paymentPlan)
  {
    $this->paymentPlan = $paymentPlan;
  }
  /** @return string */
  public function getPaymentPlan()
  {
    return $this->paymentPlan;
  }
  /** @param bool */
  public function setResizeUnitCount($resizeUnitCount)
  {
    $this->resizeUnitCount = $resizeUnitCount;
  }
  /** @return bool */
  public function getResizeUnitCount()
  {
    return $this->resizeUnitCount;
  }
}

class GoogleCloudChannelV1alpha1Report extends \Google\Collection
{
  /** @var GoogleCloudChannelV1alpha1Column[] */
  public $columns;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  protected $collection_key = 'columns';
  protected $columnsType = GoogleCloudChannelV1alpha1Column::class;
  protected $columnsDataType = 'array';
  /** @param GoogleCloudChannelV1alpha1Column[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return GoogleCloudChannelV1alpha1Column[] */
  public function getColumns()
  {
    return $this->columns;
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
}

class GoogleCloudChannelV1alpha1ReportJob extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var GoogleCloudChannelV1alpha1ReportStatus */
  public $reportStatus;
  protected $reportStatusType = GoogleCloudChannelV1alpha1ReportStatus::class;
  protected $reportStatusDataType = '';
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
  /** @param GoogleCloudChannelV1alpha1ReportStatus */
  public function setReportStatus(GoogleCloudChannelV1alpha1ReportStatus $reportStatus)
  {
    $this->reportStatus = $reportStatus;
  }
  /** @return GoogleCloudChannelV1alpha1ReportStatus */
  public function getReportStatus()
  {
    return $this->reportStatus;
  }
}

class GoogleCloudChannelV1alpha1ReportResultsMetadata extends \Google\Model
{
  /** @var GoogleCloudChannelV1alpha1DateRange */
  public $dateRange;
  /** @var GoogleCloudChannelV1alpha1DateRange */
  public $precedingDateRange;
  /** @var GoogleCloudChannelV1alpha1Report */
  public $report;
  /** @var string */
  public $rowCount;
  protected $dateRangeType = GoogleCloudChannelV1alpha1DateRange::class;
  protected $dateRangeDataType = '';
  protected $precedingDateRangeType = GoogleCloudChannelV1alpha1DateRange::class;
  protected $precedingDateRangeDataType = '';
  protected $reportType = GoogleCloudChannelV1alpha1Report::class;
  protected $reportDataType = '';
  /** @param GoogleCloudChannelV1alpha1DateRange */
  public function setDateRange(GoogleCloudChannelV1alpha1DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  /** @return GoogleCloudChannelV1alpha1DateRange */
  public function getDateRange()
  {
    return $this->dateRange;
  }
  /** @param GoogleCloudChannelV1alpha1DateRange */
  public function setPrecedingDateRange(GoogleCloudChannelV1alpha1DateRange $precedingDateRange)
  {
    $this->precedingDateRange = $precedingDateRange;
  }
  /** @return GoogleCloudChannelV1alpha1DateRange */
  public function getPrecedingDateRange()
  {
    return $this->precedingDateRange;
  }
  /** @param GoogleCloudChannelV1alpha1Report */
  public function setReport(GoogleCloudChannelV1alpha1Report $report)
  {
    $this->report = $report;
  }
  /** @return GoogleCloudChannelV1alpha1Report */
  public function getReport()
  {
    return $this->report;
  }
  /** @param string */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return string */
  public function getRowCount()
  {
    return $this->rowCount;
  }
}

class GoogleCloudChannelV1alpha1ReportStatus extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;

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

class GoogleCloudChannelV1alpha1RunReportJobResponse extends \Google\Model
{
  /** @var GoogleCloudChannelV1alpha1ReportJob */
  public $reportJob;
  /** @var GoogleCloudChannelV1alpha1ReportResultsMetadata */
  public $reportMetadata;
  protected $reportJobType = GoogleCloudChannelV1alpha1ReportJob::class;
  protected $reportJobDataType = '';
  protected $reportMetadataType = GoogleCloudChannelV1alpha1ReportResultsMetadata::class;
  protected $reportMetadataDataType = '';
  /** @param GoogleCloudChannelV1alpha1ReportJob */
  public function setReportJob(GoogleCloudChannelV1alpha1ReportJob $reportJob)
  {
    $this->reportJob = $reportJob;
  }
  /** @return GoogleCloudChannelV1alpha1ReportJob */
  public function getReportJob()
  {
    return $this->reportJob;
  }
  /** @param GoogleCloudChannelV1alpha1ReportResultsMetadata */
  public function setReportMetadata(GoogleCloudChannelV1alpha1ReportResultsMetadata $reportMetadata)
  {
    $this->reportMetadata = $reportMetadata;
  }
  /** @return GoogleCloudChannelV1alpha1ReportResultsMetadata */
  public function getReportMetadata()
  {
    return $this->reportMetadata;
  }
}

class GoogleCloudChannelV1alpha1SubscriberEvent extends \Google\Model
{
  /** @var GoogleCloudChannelV1alpha1ChannelPartnerEvent */
  public $channelPartnerEvent;
  /** @var GoogleCloudChannelV1alpha1CustomerEvent */
  public $customerEvent;
  /** @var GoogleCloudChannelV1alpha1EntitlementEvent */
  public $entitlementEvent;
  protected $channelPartnerEventType = GoogleCloudChannelV1alpha1ChannelPartnerEvent::class;
  protected $channelPartnerEventDataType = '';
  protected $customerEventType = GoogleCloudChannelV1alpha1CustomerEvent::class;
  protected $customerEventDataType = '';
  protected $entitlementEventType = GoogleCloudChannelV1alpha1EntitlementEvent::class;
  protected $entitlementEventDataType = '';
  /** @param GoogleCloudChannelV1alpha1ChannelPartnerEvent */
  public function setChannelPartnerEvent(GoogleCloudChannelV1alpha1ChannelPartnerEvent $channelPartnerEvent)
  {
    $this->channelPartnerEvent = $channelPartnerEvent;
  }
  /** @return GoogleCloudChannelV1alpha1ChannelPartnerEvent */
  public function getChannelPartnerEvent()
  {
    return $this->channelPartnerEvent;
  }
  /** @param GoogleCloudChannelV1alpha1CustomerEvent */
  public function setCustomerEvent(GoogleCloudChannelV1alpha1CustomerEvent $customerEvent)
  {
    $this->customerEvent = $customerEvent;
  }
  /** @return GoogleCloudChannelV1alpha1CustomerEvent */
  public function getCustomerEvent()
  {
    return $this->customerEvent;
  }
  /** @param GoogleCloudChannelV1alpha1EntitlementEvent */
  public function setEntitlementEvent(GoogleCloudChannelV1alpha1EntitlementEvent $entitlementEvent)
  {
    $this->entitlementEvent = $entitlementEvent;
  }
  /** @return GoogleCloudChannelV1alpha1EntitlementEvent */
  public function getEntitlementEvent()
  {
    return $this->entitlementEvent;
  }
}

class GoogleCloudChannelV1alpha1TransferEntitlementsResponse extends \Google\Collection
{
  /** @var GoogleCloudChannelV1alpha1Entitlement[] */
  public $entitlements;
  protected $collection_key = 'entitlements';
  protected $entitlementsType = GoogleCloudChannelV1alpha1Entitlement::class;
  protected $entitlementsDataType = 'array';
  /** @param GoogleCloudChannelV1alpha1Entitlement[] */
  public function setEntitlements($entitlements)
  {
    $this->entitlements = $entitlements;
  }
  /** @return GoogleCloudChannelV1alpha1Entitlement[] */
  public function getEntitlements()
  {
    return $this->entitlements;
  }
}

class GoogleCloudChannelV1alpha1TrialSettings extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var bool */
  public $trial;

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
  /** @param bool */
  public function setTrial($trial)
  {
    $this->trial = $trial;
  }
  /** @return bool */
  public function getTrial()
  {
    return $this->trial;
  }
}

class GoogleCloudChannelV1alpha1Value extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  public $doubleValue;
  /** @var string */
  public $int64Value;
  /** @var array[] */
  public $protoValue;
  /** @var string */
  public $stringValue;

  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
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
  /** @param array[] */
  public function setProtoValue($protoValue)
  {
    $this->protoValue = $protoValue;
  }
  /** @return array[] */
  public function getProtoValue()
  {
    return $this->protoValue;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class GoogleLongrunningCancelOperationRequest extends \Google\Model
{
}

class GoogleLongrunningListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleLongrunningOperation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = GoogleLongrunningOperation::class;
  protected $operationsDataType = 'array';
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
  /** @param GoogleLongrunningOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleLongrunningOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class GoogleLongrunningOperation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  /** @param bool */
  public function setDone($done)
  {
    $this->done = $done;
  }
  /** @return bool */
  public function getDone()
  {
    return $this->done;
  }
  /** @param GoogleRpcStatus */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /** @return GoogleRpcStatus */
  public function getError()
  {
    return $this->error;
  }
  /** @param array[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return array[] */
  public function getMetadata()
  {
    return $this->metadata;
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
  /** @param array[] */
  public function setResponse($response)
  {
    $this->response = $response;
  }
  /** @return array[] */
  public function getResponse()
  {
    return $this->response;
  }
}

class GoogleProtobufEmpty extends \Google\Model
{
}

class GoogleRpcStatus extends \Google\Collection
{
  /** @var int */
  public $code;
  /** @var array[] */
  public $details;
  /** @var string */
  public $message;
  protected $collection_key = 'details';
  /** @param int */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return int */
  public function getCode()
  {
    return $this->code;
  }
  /** @param array[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return array[] */
  public function getDetails()
  {
    return $this->details;
  }
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

class GoogleTypeDateTime extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $month;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;
  /** @var GoogleTypeTimeZone */
  public $timeZone;
  /** @var string */
  public $utcOffset;
  /** @var int */
  public $year;
  protected $timeZoneType = GoogleTypeTimeZone::class;
  protected $timeZoneDataType = '';
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
  /** @param GoogleTypeTimeZone */
  public function setTimeZone(GoogleTypeTimeZone $timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return GoogleTypeTimeZone */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /** @param string */
  public function setUtcOffset($utcOffset)
  {
    $this->utcOffset = $utcOffset;
  }
  /** @return string */
  public function getUtcOffset()
  {
    return $this->utcOffset;
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

class GoogleTypeDecimal extends \Google\Model
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

class GoogleTypePostalAddress extends \Google\Collection
{
  /** @var string[] */
  public $addressLines;
  /** @var string */
  public $administrativeArea;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $locality;
  /** @var string */
  public $organization;
  /** @var string */
  public $postalCode;
  /** @var string[] */
  public $recipients;
  /** @var string */
  public $regionCode;
  /** @var int */
  public $revision;
  /** @var string */
  public $sortingCode;
  /** @var string */
  public $sublocality;
  protected $collection_key = 'recipients';
  /** @param string[] */
  public function setAddressLines($addressLines)
  {
    $this->addressLines = $addressLines;
  }
  /** @return string[] */
  public function getAddressLines()
  {
    return $this->addressLines;
  }
  /** @param string */
  public function setAdministrativeArea($administrativeArea)
  {
    $this->administrativeArea = $administrativeArea;
  }
  /** @return string */
  public function getAdministrativeArea()
  {
    return $this->administrativeArea;
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
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
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
  /** @param string[] */
  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }
  /** @return string[] */
  public function getRecipients()
  {
    return $this->recipients;
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
  /** @param int */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return int */
  public function getRevision()
  {
    return $this->revision;
  }
  /** @param string */
  public function setSortingCode($sortingCode)
  {
    $this->sortingCode = $sortingCode;
  }
  /** @return string */
  public function getSortingCode()
  {
    return $this->sortingCode;
  }
  /** @param string */
  public function setSublocality($sublocality)
  {
    $this->sublocality = $sublocality;
  }
  /** @return string */
  public function getSublocality()
  {
    return $this->sublocality;
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
class_alias(GoogleCloudChannelV1ActivateEntitlementRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ActivateEntitlementRequest');
class_alias(GoogleCloudChannelV1AdminUser::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1AdminUser');
class_alias(GoogleCloudChannelV1AssociationInfo::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1AssociationInfo');
class_alias(GoogleCloudChannelV1CancelEntitlementRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1CancelEntitlementRequest');
class_alias(GoogleCloudChannelV1ChangeOfferRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ChangeOfferRequest');
class_alias(GoogleCloudChannelV1ChangeParametersRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ChangeParametersRequest');
class_alias(GoogleCloudChannelV1ChangeRenewalSettingsRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ChangeRenewalSettingsRequest');
class_alias(GoogleCloudChannelV1ChannelPartnerLink::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ChannelPartnerLink');
class_alias(GoogleCloudChannelV1ChannelPartnerRepricingConfig::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ChannelPartnerRepricingConfig');
class_alias(GoogleCloudChannelV1CheckCloudIdentityAccountsExistRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1CheckCloudIdentityAccountsExistRequest');
class_alias(GoogleCloudChannelV1CheckCloudIdentityAccountsExistResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1CheckCloudIdentityAccountsExistResponse');
class_alias(GoogleCloudChannelV1CloudIdentityCustomerAccount::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1CloudIdentityCustomerAccount');
class_alias(GoogleCloudChannelV1CloudIdentityInfo::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1CloudIdentityInfo');
class_alias(GoogleCloudChannelV1Column::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Column');
class_alias(GoogleCloudChannelV1CommitmentSettings::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1CommitmentSettings');
class_alias(GoogleCloudChannelV1Constraints::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Constraints');
class_alias(GoogleCloudChannelV1ContactInfo::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ContactInfo');
class_alias(GoogleCloudChannelV1CreateEntitlementRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1CreateEntitlementRequest');
class_alias(GoogleCloudChannelV1Customer::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Customer');
class_alias(GoogleCloudChannelV1CustomerConstraints::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1CustomerConstraints');
class_alias(GoogleCloudChannelV1CustomerEvent::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1CustomerEvent');
class_alias(GoogleCloudChannelV1CustomerRepricingConfig::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1CustomerRepricingConfig');
class_alias(GoogleCloudChannelV1DateRange::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1DateRange');
class_alias(GoogleCloudChannelV1EduData::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1EduData');
class_alias(GoogleCloudChannelV1Entitlement::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Entitlement');
class_alias(GoogleCloudChannelV1EntitlementEvent::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1EntitlementEvent');
class_alias(GoogleCloudChannelV1FetchReportResultsRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1FetchReportResultsRequest');
class_alias(GoogleCloudChannelV1FetchReportResultsResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1FetchReportResultsResponse');
class_alias(GoogleCloudChannelV1ImportCustomerRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ImportCustomerRequest');
class_alias(GoogleCloudChannelV1ListChannelPartnerLinksResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListChannelPartnerLinksResponse');
class_alias(GoogleCloudChannelV1ListChannelPartnerRepricingConfigsResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListChannelPartnerRepricingConfigsResponse');
class_alias(GoogleCloudChannelV1ListCustomerRepricingConfigsResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListCustomerRepricingConfigsResponse');
class_alias(GoogleCloudChannelV1ListCustomersResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListCustomersResponse');
class_alias(GoogleCloudChannelV1ListEntitlementsResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListEntitlementsResponse');
class_alias(GoogleCloudChannelV1ListOffersResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListOffersResponse');
class_alias(GoogleCloudChannelV1ListProductsResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListProductsResponse');
class_alias(GoogleCloudChannelV1ListPurchasableOffersResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListPurchasableOffersResponse');
class_alias(GoogleCloudChannelV1ListPurchasableSkusResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListPurchasableSkusResponse');
class_alias(GoogleCloudChannelV1ListReportsResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListReportsResponse');
class_alias(GoogleCloudChannelV1ListSkusResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListSkusResponse');
class_alias(GoogleCloudChannelV1ListSubscribersResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListSubscribersResponse');
class_alias(GoogleCloudChannelV1ListTransferableOffersRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListTransferableOffersRequest');
class_alias(GoogleCloudChannelV1ListTransferableOffersResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListTransferableOffersResponse');
class_alias(GoogleCloudChannelV1ListTransferableSkusRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListTransferableSkusRequest');
class_alias(GoogleCloudChannelV1ListTransferableSkusResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListTransferableSkusResponse');
class_alias(GoogleCloudChannelV1MarketingInfo::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1MarketingInfo');
class_alias(GoogleCloudChannelV1Media::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Media');
class_alias(GoogleCloudChannelV1Offer::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Offer');
class_alias(GoogleCloudChannelV1OperationMetadata::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1OperationMetadata');
class_alias(GoogleCloudChannelV1Parameter::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Parameter');
class_alias(GoogleCloudChannelV1ParameterDefinition::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ParameterDefinition');
class_alias(GoogleCloudChannelV1PercentageAdjustment::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1PercentageAdjustment');
class_alias(GoogleCloudChannelV1Period::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Period');
class_alias(GoogleCloudChannelV1Plan::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Plan');
class_alias(GoogleCloudChannelV1Price::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Price');
class_alias(GoogleCloudChannelV1PriceByResource::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1PriceByResource');
class_alias(GoogleCloudChannelV1PricePhase::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1PricePhase');
class_alias(GoogleCloudChannelV1PriceTier::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1PriceTier');
class_alias(GoogleCloudChannelV1Product::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Product');
class_alias(GoogleCloudChannelV1ProvisionCloudIdentityRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ProvisionCloudIdentityRequest');
class_alias(GoogleCloudChannelV1ProvisionedService::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ProvisionedService');
class_alias(GoogleCloudChannelV1PurchasableOffer::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1PurchasableOffer');
class_alias(GoogleCloudChannelV1PurchasableSku::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1PurchasableSku');
class_alias(GoogleCloudChannelV1RegisterSubscriberRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1RegisterSubscriberRequest');
class_alias(GoogleCloudChannelV1RegisterSubscriberResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1RegisterSubscriberResponse');
class_alias(GoogleCloudChannelV1RenewalSettings::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1RenewalSettings');
class_alias(GoogleCloudChannelV1Report::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Report');
class_alias(GoogleCloudChannelV1ReportJob::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ReportJob');
class_alias(GoogleCloudChannelV1ReportResultsMetadata::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ReportResultsMetadata');
class_alias(GoogleCloudChannelV1ReportStatus::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ReportStatus');
class_alias(GoogleCloudChannelV1ReportValue::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ReportValue');
class_alias(GoogleCloudChannelV1RepricingAdjustment::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1RepricingAdjustment');
class_alias(GoogleCloudChannelV1RepricingConfig::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1RepricingConfig');
class_alias(GoogleCloudChannelV1RepricingConfigChannelPartnerGranularity::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1RepricingConfigChannelPartnerGranularity');
class_alias(GoogleCloudChannelV1RepricingConfigEntitlementGranularity::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1RepricingConfigEntitlementGranularity');
class_alias(GoogleCloudChannelV1Row::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Row');
class_alias(GoogleCloudChannelV1RunReportJobRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1RunReportJobRequest');
class_alias(GoogleCloudChannelV1RunReportJobResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1RunReportJobResponse');
class_alias(GoogleCloudChannelV1Sku::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Sku');
class_alias(GoogleCloudChannelV1StartPaidServiceRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1StartPaidServiceRequest');
class_alias(GoogleCloudChannelV1SubscriberEvent::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1SubscriberEvent');
class_alias(GoogleCloudChannelV1SuspendEntitlementRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1SuspendEntitlementRequest');
class_alias(GoogleCloudChannelV1TransferEligibility::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1TransferEligibility');
class_alias(GoogleCloudChannelV1TransferEntitlementsRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1TransferEntitlementsRequest');
class_alias(GoogleCloudChannelV1TransferEntitlementsResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1TransferEntitlementsResponse');
class_alias(GoogleCloudChannelV1TransferEntitlementsToGoogleRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1TransferEntitlementsToGoogleRequest');
class_alias(GoogleCloudChannelV1TransferableOffer::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1TransferableOffer');
class_alias(GoogleCloudChannelV1TransferableSku::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1TransferableSku');
class_alias(GoogleCloudChannelV1TrialSettings::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1TrialSettings');
class_alias(GoogleCloudChannelV1UnregisterSubscriberRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1UnregisterSubscriberRequest');
class_alias(GoogleCloudChannelV1UnregisterSubscriberResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1UnregisterSubscriberResponse');
class_alias(GoogleCloudChannelV1UpdateChannelPartnerLinkRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1UpdateChannelPartnerLinkRequest');
class_alias(GoogleCloudChannelV1Value::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Value');
class_alias(GoogleCloudChannelV1alpha1AssociationInfo::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1AssociationInfo');
class_alias(GoogleCloudChannelV1alpha1ChannelPartnerEvent::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1ChannelPartnerEvent');
class_alias(GoogleCloudChannelV1alpha1Column::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1Column');
class_alias(GoogleCloudChannelV1alpha1CommitmentSettings::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1CommitmentSettings');
class_alias(GoogleCloudChannelV1alpha1CustomerEvent::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1CustomerEvent');
class_alias(GoogleCloudChannelV1alpha1DateRange::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1DateRange');
class_alias(GoogleCloudChannelV1alpha1Entitlement::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1Entitlement');
class_alias(GoogleCloudChannelV1alpha1EntitlementEvent::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1EntitlementEvent');
class_alias(GoogleCloudChannelV1alpha1OperationMetadata::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1OperationMetadata');
class_alias(GoogleCloudChannelV1alpha1Parameter::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1Parameter');
class_alias(GoogleCloudChannelV1alpha1Period::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1Period');
class_alias(GoogleCloudChannelV1alpha1ProvisionedService::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1ProvisionedService');
class_alias(GoogleCloudChannelV1alpha1RenewalSettings::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1RenewalSettings');
class_alias(GoogleCloudChannelV1alpha1Report::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1Report');
class_alias(GoogleCloudChannelV1alpha1ReportJob::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1ReportJob');
class_alias(GoogleCloudChannelV1alpha1ReportResultsMetadata::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1ReportResultsMetadata');
class_alias(GoogleCloudChannelV1alpha1ReportStatus::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1ReportStatus');
class_alias(GoogleCloudChannelV1alpha1RunReportJobResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1RunReportJobResponse');
class_alias(GoogleCloudChannelV1alpha1SubscriberEvent::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1SubscriberEvent');
class_alias(GoogleCloudChannelV1alpha1TransferEntitlementsResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1TransferEntitlementsResponse');
class_alias(GoogleCloudChannelV1alpha1TrialSettings::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1TrialSettings');
class_alias(GoogleCloudChannelV1alpha1Value::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1Value');
class_alias(GoogleLongrunningCancelOperationRequest::class, 'Google_Service_Cloudchannel_GoogleLongrunningCancelOperationRequest');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_Cloudchannel_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_Cloudchannel_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_Cloudchannel_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_Cloudchannel_GoogleRpcStatus');
class_alias(GoogleTypeDate::class, 'Google_Service_Cloudchannel_GoogleTypeDate');
class_alias(GoogleTypeDateTime::class, 'Google_Service_Cloudchannel_GoogleTypeDateTime');
class_alias(GoogleTypeDecimal::class, 'Google_Service_Cloudchannel_GoogleTypeDecimal');
class_alias(GoogleTypeMoney::class, 'Google_Service_Cloudchannel_GoogleTypeMoney');
class_alias(GoogleTypePostalAddress::class, 'Google_Service_Cloudchannel_GoogleTypePostalAddress');
class_alias(GoogleTypeTimeZone::class, 'Google_Service_Cloudchannel_GoogleTypeTimeZone');
