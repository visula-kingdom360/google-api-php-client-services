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

namespace Google\Service\ShoppingContent;

class Account extends \Google\Collection
{
  /** @var string */
  public $accountManagement;
  /** @var AccountAdsLink[] */
  public $adsLinks;
  /** @var bool */
  public $adultContent;
  /** @var AccountAutomaticImprovements */
  public $automaticImprovements;
  /** @var string[] */
  public $automaticLabelIds;
  /** @var AccountBusinessInformation */
  public $businessInformation;
  /** @var string */
  public $cssId;
  /** @var AccountGoogleMyBusinessLink */
  public $googleMyBusinessLink;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labelIds;
  /** @var string */
  public $name;
  /** @var string */
  public $sellerId;
  /** @var AccountUser[] */
  public $users;
  /** @var string */
  public $websiteUrl;
  /** @var AccountYouTubeChannelLink[] */
  public $youtubeChannelLinks;
  protected $collection_key = 'youtubeChannelLinks';
  protected $adsLinksType = AccountAdsLink::class;
  protected $adsLinksDataType = 'array';
  protected $automaticImprovementsType = AccountAutomaticImprovements::class;
  protected $automaticImprovementsDataType = '';
  protected $businessInformationType = AccountBusinessInformation::class;
  protected $businessInformationDataType = '';
  protected $googleMyBusinessLinkType = AccountGoogleMyBusinessLink::class;
  protected $googleMyBusinessLinkDataType = '';
  protected $usersType = AccountUser::class;
  protected $usersDataType = 'array';
  protected $youtubeChannelLinksType = AccountYouTubeChannelLink::class;
  protected $youtubeChannelLinksDataType = 'array';
  /** @param string */
  public function setAccountManagement($accountManagement)
  {
    $this->accountManagement = $accountManagement;
  }
  /** @return string */
  public function getAccountManagement()
  {
    return $this->accountManagement;
  }
  /** @param AccountAdsLink[] */
  public function setAdsLinks($adsLinks)
  {
    $this->adsLinks = $adsLinks;
  }
  /** @return AccountAdsLink[] */
  public function getAdsLinks()
  {
    return $this->adsLinks;
  }
  /** @param bool */
  public function setAdultContent($adultContent)
  {
    $this->adultContent = $adultContent;
  }
  /** @return bool */
  public function getAdultContent()
  {
    return $this->adultContent;
  }
  /** @param AccountAutomaticImprovements */
  public function setAutomaticImprovements(AccountAutomaticImprovements $automaticImprovements)
  {
    $this->automaticImprovements = $automaticImprovements;
  }
  /** @return AccountAutomaticImprovements */
  public function getAutomaticImprovements()
  {
    return $this->automaticImprovements;
  }
  /** @param string[] */
  public function setAutomaticLabelIds($automaticLabelIds)
  {
    $this->automaticLabelIds = $automaticLabelIds;
  }
  /** @return string[] */
  public function getAutomaticLabelIds()
  {
    return $this->automaticLabelIds;
  }
  /** @param AccountBusinessInformation */
  public function setBusinessInformation(AccountBusinessInformation $businessInformation)
  {
    $this->businessInformation = $businessInformation;
  }
  /** @return AccountBusinessInformation */
  public function getBusinessInformation()
  {
    return $this->businessInformation;
  }
  /** @param string */
  public function setCssId($cssId)
  {
    $this->cssId = $cssId;
  }
  /** @return string */
  public function getCssId()
  {
    return $this->cssId;
  }
  /** @param AccountGoogleMyBusinessLink */
  public function setGoogleMyBusinessLink(AccountGoogleMyBusinessLink $googleMyBusinessLink)
  {
    $this->googleMyBusinessLink = $googleMyBusinessLink;
  }
  /** @return AccountGoogleMyBusinessLink */
  public function getGoogleMyBusinessLink()
  {
    return $this->googleMyBusinessLink;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string[] */
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  /** @return string[] */
  public function getLabelIds()
  {
    return $this->labelIds;
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
  public function setSellerId($sellerId)
  {
    $this->sellerId = $sellerId;
  }
  /** @return string */
  public function getSellerId()
  {
    return $this->sellerId;
  }
  /** @param AccountUser[] */
  public function setUsers($users)
  {
    $this->users = $users;
  }
  /** @return AccountUser[] */
  public function getUsers()
  {
    return $this->users;
  }
  /** @param string */
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  /** @return string */
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
  /** @param AccountYouTubeChannelLink[] */
  public function setYoutubeChannelLinks($youtubeChannelLinks)
  {
    $this->youtubeChannelLinks = $youtubeChannelLinks;
  }
  /** @return AccountYouTubeChannelLink[] */
  public function getYoutubeChannelLinks()
  {
    return $this->youtubeChannelLinks;
  }
}

class AccountAddress extends \Google\Model
{
  /** @var string */
  public $country;
  /** @var string */
  public $locality;
  /** @var string */
  public $postalCode;
  /** @var string */
  public $region;
  /** @var string */
  public $streetAddress;

  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
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
  /** @param string */
  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }
  /** @return string */
  public function getStreetAddress()
  {
    return $this->streetAddress;
  }
}

class AccountAdsLink extends \Google\Model
{
  /** @var string */
  public $adsId;
  /** @var string */
  public $status;

  /** @param string */
  public function setAdsId($adsId)
  {
    $this->adsId = $adsId;
  }
  /** @return string */
  public function getAdsId()
  {
    return $this->adsId;
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
}

class AccountAutomaticImprovements extends \Google\Model
{
  /** @var AccountImageImprovements */
  public $imageImprovements;
  /** @var AccountItemUpdates */
  public $itemUpdates;
  /** @var AccountShippingImprovements */
  public $shippingImprovements;
  protected $imageImprovementsType = AccountImageImprovements::class;
  protected $imageImprovementsDataType = '';
  protected $itemUpdatesType = AccountItemUpdates::class;
  protected $itemUpdatesDataType = '';
  protected $shippingImprovementsType = AccountShippingImprovements::class;
  protected $shippingImprovementsDataType = '';
  /** @param AccountImageImprovements */
  public function setImageImprovements(AccountImageImprovements $imageImprovements)
  {
    $this->imageImprovements = $imageImprovements;
  }
  /** @return AccountImageImprovements */
  public function getImageImprovements()
  {
    return $this->imageImprovements;
  }
  /** @param AccountItemUpdates */
  public function setItemUpdates(AccountItemUpdates $itemUpdates)
  {
    $this->itemUpdates = $itemUpdates;
  }
  /** @return AccountItemUpdates */
  public function getItemUpdates()
  {
    return $this->itemUpdates;
  }
  /** @param AccountShippingImprovements */
  public function setShippingImprovements(AccountShippingImprovements $shippingImprovements)
  {
    $this->shippingImprovements = $shippingImprovements;
  }
  /** @return AccountShippingImprovements */
  public function getShippingImprovements()
  {
    return $this->shippingImprovements;
  }
}

class AccountBusinessInformation extends \Google\Model
{
  /** @var AccountAddress */
  public $address;
  /** @var AccountCustomerService */
  public $customerService;
  /** @var string */
  public $koreanBusinessRegistrationNumber;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $phoneVerificationStatus;
  protected $addressType = AccountAddress::class;
  protected $addressDataType = '';
  protected $customerServiceType = AccountCustomerService::class;
  protected $customerServiceDataType = '';
  /** @param AccountAddress */
  public function setAddress(AccountAddress $address)
  {
    $this->address = $address;
  }
  /** @return AccountAddress */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param AccountCustomerService */
  public function setCustomerService(AccountCustomerService $customerService)
  {
    $this->customerService = $customerService;
  }
  /** @return AccountCustomerService */
  public function getCustomerService()
  {
    return $this->customerService;
  }
  /** @param string */
  public function setKoreanBusinessRegistrationNumber($koreanBusinessRegistrationNumber)
  {
    $this->koreanBusinessRegistrationNumber = $koreanBusinessRegistrationNumber;
  }
  /** @return string */
  public function getKoreanBusinessRegistrationNumber()
  {
    return $this->koreanBusinessRegistrationNumber;
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
  public function setPhoneVerificationStatus($phoneVerificationStatus)
  {
    $this->phoneVerificationStatus = $phoneVerificationStatus;
  }
  /** @return string */
  public function getPhoneVerificationStatus()
  {
    return $this->phoneVerificationStatus;
  }
}

class AccountCredentials extends \Google\Model
{
  /** @var string */
  public $accessToken;
  /** @var string */
  public $expiresIn;
  /** @var string */
  public $purpose;

  /** @param string */
  public function setAccessToken($accessToken)
  {
    $this->accessToken = $accessToken;
  }
  /** @return string */
  public function getAccessToken()
  {
    return $this->accessToken;
  }
  /** @param string */
  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }
  /** @return string */
  public function getExpiresIn()
  {
    return $this->expiresIn;
  }
  /** @param string */
  public function setPurpose($purpose)
  {
    $this->purpose = $purpose;
  }
  /** @return string */
  public function getPurpose()
  {
    return $this->purpose;
  }
}

class AccountCustomerService extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $url;

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

class AccountGoogleMyBusinessLink extends \Google\Model
{
  /** @var string */
  public $gmbAccountId;
  /** @var string */
  public $gmbEmail;
  /** @var string */
  public $status;

  /** @param string */
  public function setGmbAccountId($gmbAccountId)
  {
    $this->gmbAccountId = $gmbAccountId;
  }
  /** @return string */
  public function getGmbAccountId()
  {
    return $this->gmbAccountId;
  }
  /** @param string */
  public function setGmbEmail($gmbEmail)
  {
    $this->gmbEmail = $gmbEmail;
  }
  /** @return string */
  public function getGmbEmail()
  {
    return $this->gmbEmail;
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
}

class AccountIdentifier extends \Google\Model
{
  /** @var string */
  public $aggregatorId;
  /** @var string */
  public $merchantId;

  /** @param string */
  public function setAggregatorId($aggregatorId)
  {
    $this->aggregatorId = $aggregatorId;
  }
  /** @return string */
  public function getAggregatorId()
  {
    return $this->aggregatorId;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
}

class AccountImageImprovements extends \Google\Model
{
  /** @var AccountImageImprovementsSettings */
  public $accountImageImprovementsSettings;
  /** @var bool */
  public $effectiveAllowAutomaticImageImprovements;
  protected $accountImageImprovementsSettingsType = AccountImageImprovementsSettings::class;
  protected $accountImageImprovementsSettingsDataType = '';
  /** @param AccountImageImprovementsSettings */
  public function setAccountImageImprovementsSettings(AccountImageImprovementsSettings $accountImageImprovementsSettings)
  {
    $this->accountImageImprovementsSettings = $accountImageImprovementsSettings;
  }
  /** @return AccountImageImprovementsSettings */
  public function getAccountImageImprovementsSettings()
  {
    return $this->accountImageImprovementsSettings;
  }
  /** @param bool */
  public function setEffectiveAllowAutomaticImageImprovements($effectiveAllowAutomaticImageImprovements)
  {
    $this->effectiveAllowAutomaticImageImprovements = $effectiveAllowAutomaticImageImprovements;
  }
  /** @return bool */
  public function getEffectiveAllowAutomaticImageImprovements()
  {
    return $this->effectiveAllowAutomaticImageImprovements;
  }
}

class AccountImageImprovementsSettings extends \Google\Model
{
  /** @var bool */
  public $allowAutomaticImageImprovements;

  /** @param bool */
  public function setAllowAutomaticImageImprovements($allowAutomaticImageImprovements)
  {
    $this->allowAutomaticImageImprovements = $allowAutomaticImageImprovements;
  }
  /** @return bool */
  public function getAllowAutomaticImageImprovements()
  {
    return $this->allowAutomaticImageImprovements;
  }
}

class AccountItemUpdates extends \Google\Model
{
  /** @var AccountItemUpdatesSettings */
  public $accountItemUpdatesSettings;
  /** @var bool */
  public $effectiveAllowAvailabilityUpdates;
  /** @var bool */
  public $effectiveAllowConditionUpdates;
  /** @var bool */
  public $effectiveAllowPriceUpdates;
  /** @var bool */
  public $effectiveAllowStrictAvailabilityUpdates;
  protected $accountItemUpdatesSettingsType = AccountItemUpdatesSettings::class;
  protected $accountItemUpdatesSettingsDataType = '';
  /** @param AccountItemUpdatesSettings */
  public function setAccountItemUpdatesSettings(AccountItemUpdatesSettings $accountItemUpdatesSettings)
  {
    $this->accountItemUpdatesSettings = $accountItemUpdatesSettings;
  }
  /** @return AccountItemUpdatesSettings */
  public function getAccountItemUpdatesSettings()
  {
    return $this->accountItemUpdatesSettings;
  }
  /** @param bool */
  public function setEffectiveAllowAvailabilityUpdates($effectiveAllowAvailabilityUpdates)
  {
    $this->effectiveAllowAvailabilityUpdates = $effectiveAllowAvailabilityUpdates;
  }
  /** @return bool */
  public function getEffectiveAllowAvailabilityUpdates()
  {
    return $this->effectiveAllowAvailabilityUpdates;
  }
  /** @param bool */
  public function setEffectiveAllowConditionUpdates($effectiveAllowConditionUpdates)
  {
    $this->effectiveAllowConditionUpdates = $effectiveAllowConditionUpdates;
  }
  /** @return bool */
  public function getEffectiveAllowConditionUpdates()
  {
    return $this->effectiveAllowConditionUpdates;
  }
  /** @param bool */
  public function setEffectiveAllowPriceUpdates($effectiveAllowPriceUpdates)
  {
    $this->effectiveAllowPriceUpdates = $effectiveAllowPriceUpdates;
  }
  /** @return bool */
  public function getEffectiveAllowPriceUpdates()
  {
    return $this->effectiveAllowPriceUpdates;
  }
  /** @param bool */
  public function setEffectiveAllowStrictAvailabilityUpdates($effectiveAllowStrictAvailabilityUpdates)
  {
    $this->effectiveAllowStrictAvailabilityUpdates = $effectiveAllowStrictAvailabilityUpdates;
  }
  /** @return bool */
  public function getEffectiveAllowStrictAvailabilityUpdates()
  {
    return $this->effectiveAllowStrictAvailabilityUpdates;
  }
}

class AccountItemUpdatesSettings extends \Google\Model
{
  /** @var bool */
  public $allowAvailabilityUpdates;
  /** @var bool */
  public $allowConditionUpdates;
  /** @var bool */
  public $allowPriceUpdates;
  /** @var bool */
  public $allowStrictAvailabilityUpdates;

  /** @param bool */
  public function setAllowAvailabilityUpdates($allowAvailabilityUpdates)
  {
    $this->allowAvailabilityUpdates = $allowAvailabilityUpdates;
  }
  /** @return bool */
  public function getAllowAvailabilityUpdates()
  {
    return $this->allowAvailabilityUpdates;
  }
  /** @param bool */
  public function setAllowConditionUpdates($allowConditionUpdates)
  {
    $this->allowConditionUpdates = $allowConditionUpdates;
  }
  /** @return bool */
  public function getAllowConditionUpdates()
  {
    return $this->allowConditionUpdates;
  }
  /** @param bool */
  public function setAllowPriceUpdates($allowPriceUpdates)
  {
    $this->allowPriceUpdates = $allowPriceUpdates;
  }
  /** @return bool */
  public function getAllowPriceUpdates()
  {
    return $this->allowPriceUpdates;
  }
  /** @param bool */
  public function setAllowStrictAvailabilityUpdates($allowStrictAvailabilityUpdates)
  {
    $this->allowStrictAvailabilityUpdates = $allowStrictAvailabilityUpdates;
  }
  /** @return bool */
  public function getAllowStrictAvailabilityUpdates()
  {
    return $this->allowStrictAvailabilityUpdates;
  }
}

class AccountLabel extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $description;
  /** @var string */
  public $labelId;
  /** @var string */
  public $labelType;
  /** @var string */
  public $name;

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
  public function setLabelId($labelId)
  {
    $this->labelId = $labelId;
  }
  /** @return string */
  public function getLabelId()
  {
    return $this->labelId;
  }
  /** @param string */
  public function setLabelType($labelType)
  {
    $this->labelType = $labelType;
  }
  /** @return string */
  public function getLabelType()
  {
    return $this->labelType;
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

class AccountReturnCarrier extends \Google\Model
{
  /** @var string */
  public $carrierAccountId;
  /** @var string */
  public $carrierAccountName;
  /** @var string */
  public $carrierAccountNumber;
  /** @var string */
  public $carrierCode;

  /** @param string */
  public function setCarrierAccountId($carrierAccountId)
  {
    $this->carrierAccountId = $carrierAccountId;
  }
  /** @return string */
  public function getCarrierAccountId()
  {
    return $this->carrierAccountId;
  }
  /** @param string */
  public function setCarrierAccountName($carrierAccountName)
  {
    $this->carrierAccountName = $carrierAccountName;
  }
  /** @return string */
  public function getCarrierAccountName()
  {
    return $this->carrierAccountName;
  }
  /** @param string */
  public function setCarrierAccountNumber($carrierAccountNumber)
  {
    $this->carrierAccountNumber = $carrierAccountNumber;
  }
  /** @return string */
  public function getCarrierAccountNumber()
  {
    return $this->carrierAccountNumber;
  }
  /** @param string */
  public function setCarrierCode($carrierCode)
  {
    $this->carrierCode = $carrierCode;
  }
  /** @return string */
  public function getCarrierCode()
  {
    return $this->carrierCode;
  }
}

class AccountShippingImprovements extends \Google\Model
{
  /** @var bool */
  public $allowShippingImprovements;

  /** @param bool */
  public function setAllowShippingImprovements($allowShippingImprovements)
  {
    $this->allowShippingImprovements = $allowShippingImprovements;
  }
  /** @return bool */
  public function getAllowShippingImprovements()
  {
    return $this->allowShippingImprovements;
  }
}

class AccountStatus extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var AccountStatusAccountLevelIssue[] */
  public $accountLevelIssues;
  /** @var string */
  public $accountManagement;
  /** @var string */
  public $kind;
  /** @var AccountStatusProducts[] */
  public $products;
  /** @var bool */
  public $websiteClaimed;
  protected $collection_key = 'products';
  protected $accountLevelIssuesType = AccountStatusAccountLevelIssue::class;
  protected $accountLevelIssuesDataType = 'array';
  protected $productsType = AccountStatusProducts::class;
  protected $productsDataType = 'array';
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
  /** @param AccountStatusAccountLevelIssue[] */
  public function setAccountLevelIssues($accountLevelIssues)
  {
    $this->accountLevelIssues = $accountLevelIssues;
  }
  /** @return AccountStatusAccountLevelIssue[] */
  public function getAccountLevelIssues()
  {
    return $this->accountLevelIssues;
  }
  /** @param string */
  public function setAccountManagement($accountManagement)
  {
    $this->accountManagement = $accountManagement;
  }
  /** @return string */
  public function getAccountManagement()
  {
    return $this->accountManagement;
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
  /** @param AccountStatusProducts[] */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /** @return AccountStatusProducts[] */
  public function getProducts()
  {
    return $this->products;
  }
  /** @param bool */
  public function setWebsiteClaimed($websiteClaimed)
  {
    $this->websiteClaimed = $websiteClaimed;
  }
  /** @return bool */
  public function getWebsiteClaimed()
  {
    return $this->websiteClaimed;
  }
}

class AccountStatusAccountLevelIssue extends \Google\Model
{
  /** @var string */
  public $country;
  /** @var string */
  public $destination;
  /** @var string */
  public $detail;
  /** @var string */
  public $documentation;
  /** @var string */
  public $id;
  /** @var string */
  public $severity;
  /** @var string */
  public $title;

  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /** @return string */
  public function getDetail()
  {
    return $this->detail;
  }
  /** @param string */
  public function setDocumentation($documentation)
  {
    $this->documentation = $documentation;
  }
  /** @return string */
  public function getDocumentation()
  {
    return $this->documentation;
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

class AccountStatusItemLevelIssue extends \Google\Model
{
  /** @var string */
  public $attributeName;
  /** @var string */
  public $code;
  /** @var string */
  public $description;
  /** @var string */
  public $detail;
  /** @var string */
  public $documentation;
  /** @var string */
  public $numItems;
  /** @var string */
  public $resolution;
  /** @var string */
  public $servability;

  /** @param string */
  public function setAttributeName($attributeName)
  {
    $this->attributeName = $attributeName;
  }
  /** @return string */
  public function getAttributeName()
  {
    return $this->attributeName;
  }
  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
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
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /** @return string */
  public function getDetail()
  {
    return $this->detail;
  }
  /** @param string */
  public function setDocumentation($documentation)
  {
    $this->documentation = $documentation;
  }
  /** @return string */
  public function getDocumentation()
  {
    return $this->documentation;
  }
  /** @param string */
  public function setNumItems($numItems)
  {
    $this->numItems = $numItems;
  }
  /** @return string */
  public function getNumItems()
  {
    return $this->numItems;
  }
  /** @param string */
  public function setResolution($resolution)
  {
    $this->resolution = $resolution;
  }
  /** @return string */
  public function getResolution()
  {
    return $this->resolution;
  }
  /** @param string */
  public function setServability($servability)
  {
    $this->servability = $servability;
  }
  /** @return string */
  public function getServability()
  {
    return $this->servability;
  }
}

class AccountStatusProducts extends \Google\Collection
{
  /** @var string */
  public $channel;
  /** @var string */
  public $country;
  /** @var string */
  public $destination;
  /** @var AccountStatusItemLevelIssue[] */
  public $itemLevelIssues;
  /** @var AccountStatusStatistics */
  public $statistics;
  protected $collection_key = 'itemLevelIssues';
  protected $itemLevelIssuesType = AccountStatusItemLevelIssue::class;
  protected $itemLevelIssuesDataType = 'array';
  protected $statisticsType = AccountStatusStatistics::class;
  protected $statisticsDataType = '';
  /** @param string */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /** @return string */
  public function getChannel()
  {
    return $this->channel;
  }
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param AccountStatusItemLevelIssue[] */
  public function setItemLevelIssues($itemLevelIssues)
  {
    $this->itemLevelIssues = $itemLevelIssues;
  }
  /** @return AccountStatusItemLevelIssue[] */
  public function getItemLevelIssues()
  {
    return $this->itemLevelIssues;
  }
  /** @param AccountStatusStatistics */
  public function setStatistics(AccountStatusStatistics $statistics)
  {
    $this->statistics = $statistics;
  }
  /** @return AccountStatusStatistics */
  public function getStatistics()
  {
    return $this->statistics;
  }
}

class AccountStatusStatistics extends \Google\Model
{
  /** @var string */
  public $active;
  /** @var string */
  public $disapproved;
  /** @var string */
  public $expiring;
  /** @var string */
  public $pending;

  /** @param string */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /** @return string */
  public function getActive()
  {
    return $this->active;
  }
  /** @param string */
  public function setDisapproved($disapproved)
  {
    $this->disapproved = $disapproved;
  }
  /** @return string */
  public function getDisapproved()
  {
    return $this->disapproved;
  }
  /** @param string */
  public function setExpiring($expiring)
  {
    $this->expiring = $expiring;
  }
  /** @return string */
  public function getExpiring()
  {
    return $this->expiring;
  }
  /** @param string */
  public function setPending($pending)
  {
    $this->pending = $pending;
  }
  /** @return string */
  public function getPending()
  {
    return $this->pending;
  }
}

class AccountTax extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $kind;
  /** @var AccountTaxTaxRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = AccountTaxTaxRule::class;
  protected $rulesDataType = 'array';
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
  /** @param AccountTaxTaxRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return AccountTaxTaxRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class AccountTaxTaxRule extends \Google\Model
{
  /** @var string */
  public $country;
  /** @var string */
  public $locationId;
  /** @var string */
  public $ratePercent;
  /** @var bool */
  public $shippingTaxed;
  /** @var bool */
  public $useGlobalRate;

  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
  /** @param string */
  public function setRatePercent($ratePercent)
  {
    $this->ratePercent = $ratePercent;
  }
  /** @return string */
  public function getRatePercent()
  {
    return $this->ratePercent;
  }
  /** @param bool */
  public function setShippingTaxed($shippingTaxed)
  {
    $this->shippingTaxed = $shippingTaxed;
  }
  /** @return bool */
  public function getShippingTaxed()
  {
    return $this->shippingTaxed;
  }
  /** @param bool */
  public function setUseGlobalRate($useGlobalRate)
  {
    $this->useGlobalRate = $useGlobalRate;
  }
  /** @return bool */
  public function getUseGlobalRate()
  {
    return $this->useGlobalRate;
  }
}

class AccountUser extends \Google\Model
{
  /** @var bool */
  public $admin;
  /** @var string */
  public $emailAddress;
  /** @var bool */
  public $orderManager;
  /** @var bool */
  public $paymentsAnalyst;
  /** @var bool */
  public $paymentsManager;
  /** @var bool */
  public $reportingManager;

  /** @param bool */
  public function setAdmin($admin)
  {
    $this->admin = $admin;
  }
  /** @return bool */
  public function getAdmin()
  {
    return $this->admin;
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
  /** @param bool */
  public function setOrderManager($orderManager)
  {
    $this->orderManager = $orderManager;
  }
  /** @return bool */
  public function getOrderManager()
  {
    return $this->orderManager;
  }
  /** @param bool */
  public function setPaymentsAnalyst($paymentsAnalyst)
  {
    $this->paymentsAnalyst = $paymentsAnalyst;
  }
  /** @return bool */
  public function getPaymentsAnalyst()
  {
    return $this->paymentsAnalyst;
  }
  /** @param bool */
  public function setPaymentsManager($paymentsManager)
  {
    $this->paymentsManager = $paymentsManager;
  }
  /** @return bool */
  public function getPaymentsManager()
  {
    return $this->paymentsManager;
  }
  /** @param bool */
  public function setReportingManager($reportingManager)
  {
    $this->reportingManager = $reportingManager;
  }
  /** @return bool */
  public function getReportingManager()
  {
    return $this->reportingManager;
  }
}

class AccountYouTubeChannelLink extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var string */
  public $status;

  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
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
}

class AccountsAuthInfoResponse extends \Google\Collection
{
  /** @var AccountIdentifier[] */
  public $accountIdentifiers;
  /** @var string */
  public $kind;
  protected $collection_key = 'accountIdentifiers';
  protected $accountIdentifiersType = AccountIdentifier::class;
  protected $accountIdentifiersDataType = 'array';
  /** @param AccountIdentifier[] */
  public function setAccountIdentifiers($accountIdentifiers)
  {
    $this->accountIdentifiers = $accountIdentifiers;
  }
  /** @return AccountIdentifier[] */
  public function getAccountIdentifiers()
  {
    return $this->accountIdentifiers;
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
}

class AccountsClaimWebsiteResponse extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class AccountsCustomBatchRequest extends \Google\Collection
{
  /** @var AccountsCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = AccountsCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param AccountsCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return AccountsCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class AccountsCustomBatchRequestEntry extends \Google\Collection
{
  /** @var Account */
  public $account;
  /** @var string */
  public $accountId;
  /** @var string */
  public $batchId;
  /** @var bool */
  public $force;
  /** @var string[] */
  public $labelIds;
  /** @var AccountsCustomBatchRequestEntryLinkRequest */
  public $linkRequest;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  /** @var bool */
  public $overwrite;
  /** @var string */
  public $view;
  protected $collection_key = 'labelIds';
  protected $accountType = Account::class;
  protected $accountDataType = '';
  protected $linkRequestType = AccountsCustomBatchRequestEntryLinkRequest::class;
  protected $linkRequestDataType = '';
  /** @param Account */
  public function setAccount(Account $account)
  {
    $this->account = $account;
  }
  /** @return Account */
  public function getAccount()
  {
    return $this->account;
  }
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
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param bool */
  public function setForce($force)
  {
    $this->force = $force;
  }
  /** @return bool */
  public function getForce()
  {
    return $this->force;
  }
  /** @param string[] */
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  /** @return string[] */
  public function getLabelIds()
  {
    return $this->labelIds;
  }
  /** @param AccountsCustomBatchRequestEntryLinkRequest */
  public function setLinkRequest(AccountsCustomBatchRequestEntryLinkRequest $linkRequest)
  {
    $this->linkRequest = $linkRequest;
  }
  /** @return AccountsCustomBatchRequestEntryLinkRequest */
  public function getLinkRequest()
  {
    return $this->linkRequest;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param bool */
  public function setOverwrite($overwrite)
  {
    $this->overwrite = $overwrite;
  }
  /** @return bool */
  public function getOverwrite()
  {
    return $this->overwrite;
  }
  /** @param string */
  public function setView($view)
  {
    $this->view = $view;
  }
  /** @return string */
  public function getView()
  {
    return $this->view;
  }
}

class AccountsCustomBatchRequestEntryLinkRequest extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var string */
  public $linkType;
  /** @var string */
  public $linkedAccountId;
  /** @var string[] */
  public $services;
  protected $collection_key = 'services';
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
  public function setLinkType($linkType)
  {
    $this->linkType = $linkType;
  }
  /** @return string */
  public function getLinkType()
  {
    return $this->linkType;
  }
  /** @param string */
  public function setLinkedAccountId($linkedAccountId)
  {
    $this->linkedAccountId = $linkedAccountId;
  }
  /** @return string */
  public function getLinkedAccountId()
  {
    return $this->linkedAccountId;
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
}

class AccountsCustomBatchResponse extends \Google\Collection
{
  /** @var AccountsCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = AccountsCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param AccountsCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return AccountsCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class AccountsCustomBatchResponseEntry extends \Google\Model
{
  /** @var Account */
  public $account;
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $kind;
  protected $accountType = Account::class;
  protected $accountDataType = '';
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  /** @param Account */
  public function setAccount(Account $account)
  {
    $this->account = $account;
  }
  /** @return Account */
  public function getAccount()
  {
    return $this->account;
  }
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
}

class AccountsLinkRequest extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var ECommercePlatformLinkInfo */
  public $eCommercePlatformLinkInfo;
  /** @var string */
  public $linkType;
  /** @var string */
  public $linkedAccountId;
  /** @var PaymentServiceProviderLinkInfo */
  public $paymentServiceProviderLinkInfo;
  /** @var string[] */
  public $services;
  protected $collection_key = 'services';
  protected $eCommercePlatformLinkInfoType = ECommercePlatformLinkInfo::class;
  protected $eCommercePlatformLinkInfoDataType = '';
  protected $paymentServiceProviderLinkInfoType = PaymentServiceProviderLinkInfo::class;
  protected $paymentServiceProviderLinkInfoDataType = '';
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
  /** @param ECommercePlatformLinkInfo */
  public function setECommercePlatformLinkInfo(ECommercePlatformLinkInfo $eCommercePlatformLinkInfo)
  {
    $this->eCommercePlatformLinkInfo = $eCommercePlatformLinkInfo;
  }
  /** @return ECommercePlatformLinkInfo */
  public function getECommercePlatformLinkInfo()
  {
    return $this->eCommercePlatformLinkInfo;
  }
  /** @param string */
  public function setLinkType($linkType)
  {
    $this->linkType = $linkType;
  }
  /** @return string */
  public function getLinkType()
  {
    return $this->linkType;
  }
  /** @param string */
  public function setLinkedAccountId($linkedAccountId)
  {
    $this->linkedAccountId = $linkedAccountId;
  }
  /** @return string */
  public function getLinkedAccountId()
  {
    return $this->linkedAccountId;
  }
  /** @param PaymentServiceProviderLinkInfo */
  public function setPaymentServiceProviderLinkInfo(PaymentServiceProviderLinkInfo $paymentServiceProviderLinkInfo)
  {
    $this->paymentServiceProviderLinkInfo = $paymentServiceProviderLinkInfo;
  }
  /** @return PaymentServiceProviderLinkInfo */
  public function getPaymentServiceProviderLinkInfo()
  {
    return $this->paymentServiceProviderLinkInfo;
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
}

class AccountsLinkResponse extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class AccountsListLinksResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var LinkedAccount[] */
  public $links;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'links';
  protected $linksType = LinkedAccount::class;
  protected $linksDataType = 'array';
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
  /** @param LinkedAccount[] */
  public function setLinks($links)
  {
    $this->links = $links;
  }
  /** @return LinkedAccount[] */
  public function getLinks()
  {
    return $this->links;
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

class AccountsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Account[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = Account::class;
  protected $resourcesDataType = 'array';
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
  /** @param Account[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return Account[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class AccountsUpdateLabelsRequest extends \Google\Collection
{
  /** @var string[] */
  public $labelIds;
  protected $collection_key = 'labelIds';
  /** @param string[] */
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  /** @return string[] */
  public function getLabelIds()
  {
    return $this->labelIds;
  }
}

class AccountsUpdateLabelsResponse extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class AccountstatusesCustomBatchRequest extends \Google\Collection
{
  /** @var AccountstatusesCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = AccountstatusesCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param AccountstatusesCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return AccountstatusesCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class AccountstatusesCustomBatchRequestEntry extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $batchId;
  /** @var string[] */
  public $destinations;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  protected $collection_key = 'destinations';
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
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param string[] */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /** @return string[] */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
}

class AccountstatusesCustomBatchResponse extends \Google\Collection
{
  /** @var AccountstatusesCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = AccountstatusesCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param AccountstatusesCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return AccountstatusesCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class AccountstatusesCustomBatchResponseEntry extends \Google\Model
{
  /** @var AccountStatus */
  public $accountStatus;
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  protected $accountStatusType = AccountStatus::class;
  protected $accountStatusDataType = '';
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  /** @param AccountStatus */
  public function setAccountStatus(AccountStatus $accountStatus)
  {
    $this->accountStatus = $accountStatus;
  }
  /** @return AccountStatus */
  public function getAccountStatus()
  {
    return $this->accountStatus;
  }
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
  }
}

class AccountstatusesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var AccountStatus[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = AccountStatus::class;
  protected $resourcesDataType = 'array';
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
  /** @param AccountStatus[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return AccountStatus[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class AccounttaxCustomBatchRequest extends \Google\Collection
{
  /** @var AccounttaxCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = AccounttaxCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param AccounttaxCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return AccounttaxCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class AccounttaxCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var AccountTax */
  public $accountTax;
  /** @var string */
  public $batchId;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  protected $accountTaxType = AccountTax::class;
  protected $accountTaxDataType = '';
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
  /** @param AccountTax */
  public function setAccountTax(AccountTax $accountTax)
  {
    $this->accountTax = $accountTax;
  }
  /** @return AccountTax */
  public function getAccountTax()
  {
    return $this->accountTax;
  }
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
}

class AccounttaxCustomBatchResponse extends \Google\Collection
{
  /** @var AccounttaxCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = AccounttaxCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param AccounttaxCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return AccounttaxCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class AccounttaxCustomBatchResponseEntry extends \Google\Model
{
  /** @var AccountTax */
  public $accountTax;
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $kind;
  protected $accountTaxType = AccountTax::class;
  protected $accountTaxDataType = '';
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  /** @param AccountTax */
  public function setAccountTax(AccountTax $accountTax)
  {
    $this->accountTax = $accountTax;
  }
  /** @return AccountTax */
  public function getAccountTax()
  {
    return $this->accountTax;
  }
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
}

class AccounttaxListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var AccountTax[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = AccountTax::class;
  protected $resourcesDataType = 'array';
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
  /** @param AccountTax[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return AccountTax[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class ActivateBuyOnGoogleProgramRequest extends \Google\Model
{
}

class Address extends \Google\Model
{
  /** @var string */
  public $administrativeArea;
  /** @var string */
  public $city;
  /** @var string */
  public $country;
  /** @var string */
  public $postalCode;
  /** @var string */
  public $streetAddress;

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
  public function setCity($city)
  {
    $this->city = $city;
  }
  /** @return string */
  public function getCity()
  {
    return $this->city;
  }
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
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
  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }
  /** @return string */
  public function getStreetAddress()
  {
    return $this->streetAddress;
  }
}

class Amount extends \Google\Model
{
  /** @var Price */
  public $priceAmount;
  /** @var Price */
  public $taxAmount;
  protected $priceAmountType = Price::class;
  protected $priceAmountDataType = '';
  protected $taxAmountType = Price::class;
  protected $taxAmountDataType = '';
  /** @param Price */
  public function setPriceAmount(Price $priceAmount)
  {
    $this->priceAmount = $priceAmount;
  }
  /** @return Price */
  public function getPriceAmount()
  {
    return $this->priceAmount;
  }
  /** @param Price */
  public function setTaxAmount(Price $taxAmount)
  {
    $this->taxAmount = $taxAmount;
  }
  /** @return Price */
  public function getTaxAmount()
  {
    return $this->taxAmount;
  }
}

class BestSellers extends \Google\Model
{
  /** @var string */
  public $categoryId;
  /** @var string */
  public $countryCode;
  /** @var string */
  public $previousRank;
  /** @var string */
  public $previousRelativeDemand;
  /** @var string */
  public $rank;
  /** @var string */
  public $relativeDemand;
  /** @var string */
  public $relativeDemandChange;
  /** @var Date */
  public $reportDate;
  /** @var string */
  public $reportGranularity;
  protected $reportDateType = Date::class;
  protected $reportDateDataType = '';
  /** @param string */
  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  /** @return string */
  public function getCategoryId()
  {
    return $this->categoryId;
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
  public function setPreviousRank($previousRank)
  {
    $this->previousRank = $previousRank;
  }
  /** @return string */
  public function getPreviousRank()
  {
    return $this->previousRank;
  }
  /** @param string */
  public function setPreviousRelativeDemand($previousRelativeDemand)
  {
    $this->previousRelativeDemand = $previousRelativeDemand;
  }
  /** @return string */
  public function getPreviousRelativeDemand()
  {
    return $this->previousRelativeDemand;
  }
  /** @param string */
  public function setRank($rank)
  {
    $this->rank = $rank;
  }
  /** @return string */
  public function getRank()
  {
    return $this->rank;
  }
  /** @param string */
  public function setRelativeDemand($relativeDemand)
  {
    $this->relativeDemand = $relativeDemand;
  }
  /** @return string */
  public function getRelativeDemand()
  {
    return $this->relativeDemand;
  }
  /** @param string */
  public function setRelativeDemandChange($relativeDemandChange)
  {
    $this->relativeDemandChange = $relativeDemandChange;
  }
  /** @return string */
  public function getRelativeDemandChange()
  {
    return $this->relativeDemandChange;
  }
  /** @param Date */
  public function setReportDate(Date $reportDate)
  {
    $this->reportDate = $reportDate;
  }
  /** @return Date */
  public function getReportDate()
  {
    return $this->reportDate;
  }
  /** @param string */
  public function setReportGranularity($reportGranularity)
  {
    $this->reportGranularity = $reportGranularity;
  }
  /** @return string */
  public function getReportGranularity()
  {
    return $this->reportGranularity;
  }
}

class Brand extends \Google\Model
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

class BusinessDayConfig extends \Google\Collection
{
  /** @var string[] */
  public $businessDays;
  protected $collection_key = 'businessDays';
  /** @param string[] */
  public function setBusinessDays($businessDays)
  {
    $this->businessDays = $businessDays;
  }
  /** @return string[] */
  public function getBusinessDays()
  {
    return $this->businessDays;
  }
}

class BuyOnGoogleProgramStatus extends \Google\Collection
{
  /** @var string[] */
  public $businessModel;
  /** @var string */
  public $customerServicePendingEmail;
  /** @var string */
  public $customerServicePendingPhoneNumber;
  /** @var string */
  public $customerServicePendingPhoneRegionCode;
  /** @var string */
  public $customerServiceVerifiedEmail;
  /** @var string */
  public $customerServiceVerifiedPhoneNumber;
  /** @var string */
  public $customerServiceVerifiedPhoneRegionCode;
  /** @var string */
  public $onlineSalesChannel;
  /** @var string */
  public $participationStage;
  protected $collection_key = 'businessModel';
  /** @param string[] */
  public function setBusinessModel($businessModel)
  {
    $this->businessModel = $businessModel;
  }
  /** @return string[] */
  public function getBusinessModel()
  {
    return $this->businessModel;
  }
  /** @param string */
  public function setCustomerServicePendingEmail($customerServicePendingEmail)
  {
    $this->customerServicePendingEmail = $customerServicePendingEmail;
  }
  /** @return string */
  public function getCustomerServicePendingEmail()
  {
    return $this->customerServicePendingEmail;
  }
  /** @param string */
  public function setCustomerServicePendingPhoneNumber($customerServicePendingPhoneNumber)
  {
    $this->customerServicePendingPhoneNumber = $customerServicePendingPhoneNumber;
  }
  /** @return string */
  public function getCustomerServicePendingPhoneNumber()
  {
    return $this->customerServicePendingPhoneNumber;
  }
  /** @param string */
  public function setCustomerServicePendingPhoneRegionCode($customerServicePendingPhoneRegionCode)
  {
    $this->customerServicePendingPhoneRegionCode = $customerServicePendingPhoneRegionCode;
  }
  /** @return string */
  public function getCustomerServicePendingPhoneRegionCode()
  {
    return $this->customerServicePendingPhoneRegionCode;
  }
  /** @param string */
  public function setCustomerServiceVerifiedEmail($customerServiceVerifiedEmail)
  {
    $this->customerServiceVerifiedEmail = $customerServiceVerifiedEmail;
  }
  /** @return string */
  public function getCustomerServiceVerifiedEmail()
  {
    return $this->customerServiceVerifiedEmail;
  }
  /** @param string */
  public function setCustomerServiceVerifiedPhoneNumber($customerServiceVerifiedPhoneNumber)
  {
    $this->customerServiceVerifiedPhoneNumber = $customerServiceVerifiedPhoneNumber;
  }
  /** @return string */
  public function getCustomerServiceVerifiedPhoneNumber()
  {
    return $this->customerServiceVerifiedPhoneNumber;
  }
  /** @param string */
  public function setCustomerServiceVerifiedPhoneRegionCode($customerServiceVerifiedPhoneRegionCode)
  {
    $this->customerServiceVerifiedPhoneRegionCode = $customerServiceVerifiedPhoneRegionCode;
  }
  /** @return string */
  public function getCustomerServiceVerifiedPhoneRegionCode()
  {
    return $this->customerServiceVerifiedPhoneRegionCode;
  }
  /** @param string */
  public function setOnlineSalesChannel($onlineSalesChannel)
  {
    $this->onlineSalesChannel = $onlineSalesChannel;
  }
  /** @return string */
  public function getOnlineSalesChannel()
  {
    return $this->onlineSalesChannel;
  }
  /** @param string */
  public function setParticipationStage($participationStage)
  {
    $this->participationStage = $participationStage;
  }
  /** @return string */
  public function getParticipationStage()
  {
    return $this->participationStage;
  }
}

class CaptureOrderRequest extends \Google\Model
{
}

class CaptureOrderResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }
}

class CarrierRate extends \Google\Model
{
  /** @var string */
  public $carrierName;
  /** @var string */
  public $carrierService;
  /** @var Price */
  public $flatAdjustment;
  /** @var string */
  public $name;
  /** @var string */
  public $originPostalCode;
  /** @var string */
  public $percentageAdjustment;
  protected $flatAdjustmentType = Price::class;
  protected $flatAdjustmentDataType = '';
  /** @param string */
  public function setCarrierName($carrierName)
  {
    $this->carrierName = $carrierName;
  }
  /** @return string */
  public function getCarrierName()
  {
    return $this->carrierName;
  }
  /** @param string */
  public function setCarrierService($carrierService)
  {
    $this->carrierService = $carrierService;
  }
  /** @return string */
  public function getCarrierService()
  {
    return $this->carrierService;
  }
  /** @param Price */
  public function setFlatAdjustment(Price $flatAdjustment)
  {
    $this->flatAdjustment = $flatAdjustment;
  }
  /** @return Price */
  public function getFlatAdjustment()
  {
    return $this->flatAdjustment;
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
  public function setOriginPostalCode($originPostalCode)
  {
    $this->originPostalCode = $originPostalCode;
  }
  /** @return string */
  public function getOriginPostalCode()
  {
    return $this->originPostalCode;
  }
  /** @param string */
  public function setPercentageAdjustment($percentageAdjustment)
  {
    $this->percentageAdjustment = $percentageAdjustment;
  }
  /** @return string */
  public function getPercentageAdjustment()
  {
    return $this->percentageAdjustment;
  }
}

class CarriersCarrier extends \Google\Collection
{
  /** @var string */
  public $country;
  /** @var string[] */
  public $eddServices;
  /** @var string */
  public $name;
  /** @var string[] */
  public $services;
  protected $collection_key = 'services';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string[] */
  public function setEddServices($eddServices)
  {
    $this->eddServices = $eddServices;
  }
  /** @return string[] */
  public function getEddServices()
  {
    return $this->eddServices;
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
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return string[] */
  public function getServices()
  {
    return $this->services;
  }
}

class Collection extends \Google\Collection
{
  /** @var string */
  public $customLabel0;
  /** @var string */
  public $customLabel1;
  /** @var string */
  public $customLabel2;
  /** @var string */
  public $customLabel3;
  /** @var string */
  public $customLabel4;
  /** @var CollectionFeaturedProduct[] */
  public $featuredProduct;
  /** @var string[] */
  public $headline;
  /** @var string */
  public $id;
  /** @var string[] */
  public $imageLink;
  /** @var string */
  public $language;
  /** @var string */
  public $link;
  /** @var string */
  public $mobileLink;
  /** @var string */
  public $productCountry;
  protected $collection_key = 'imageLink';
  protected $featuredProductType = CollectionFeaturedProduct::class;
  protected $featuredProductDataType = 'array';
  /** @param string */
  public function setCustomLabel0($customLabel0)
  {
    $this->customLabel0 = $customLabel0;
  }
  /** @return string */
  public function getCustomLabel0()
  {
    return $this->customLabel0;
  }
  /** @param string */
  public function setCustomLabel1($customLabel1)
  {
    $this->customLabel1 = $customLabel1;
  }
  /** @return string */
  public function getCustomLabel1()
  {
    return $this->customLabel1;
  }
  /** @param string */
  public function setCustomLabel2($customLabel2)
  {
    $this->customLabel2 = $customLabel2;
  }
  /** @return string */
  public function getCustomLabel2()
  {
    return $this->customLabel2;
  }
  /** @param string */
  public function setCustomLabel3($customLabel3)
  {
    $this->customLabel3 = $customLabel3;
  }
  /** @return string */
  public function getCustomLabel3()
  {
    return $this->customLabel3;
  }
  /** @param string */
  public function setCustomLabel4($customLabel4)
  {
    $this->customLabel4 = $customLabel4;
  }
  /** @return string */
  public function getCustomLabel4()
  {
    return $this->customLabel4;
  }
  /** @param CollectionFeaturedProduct[] */
  public function setFeaturedProduct($featuredProduct)
  {
    $this->featuredProduct = $featuredProduct;
  }
  /** @return CollectionFeaturedProduct[] */
  public function getFeaturedProduct()
  {
    return $this->featuredProduct;
  }
  /** @param string[] */
  public function setHeadline($headline)
  {
    $this->headline = $headline;
  }
  /** @return string[] */
  public function getHeadline()
  {
    return $this->headline;
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
  /** @param string[] */
  public function setImageLink($imageLink)
  {
    $this->imageLink = $imageLink;
  }
  /** @return string[] */
  public function getImageLink()
  {
    return $this->imageLink;
  }
  /** @param string */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
  }
  /** @param string */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
  }
  /** @param string */
  public function setMobileLink($mobileLink)
  {
    $this->mobileLink = $mobileLink;
  }
  /** @return string */
  public function getMobileLink()
  {
    return $this->mobileLink;
  }
  /** @param string */
  public function setProductCountry($productCountry)
  {
    $this->productCountry = $productCountry;
  }
  /** @return string */
  public function getProductCountry()
  {
    return $this->productCountry;
  }
}

class CollectionFeaturedProduct extends \Google\Model
{
  /** @var string */
  public $offerId;
  /** @var float */
  public $x;
  /** @var float */
  public $y;

  /** @param string */
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  /** @return string */
  public function getOfferId()
  {
    return $this->offerId;
  }
  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
}

class CollectionStatus extends \Google\Collection
{
  /** @var CollectionStatusItemLevelIssue[] */
  public $collectionLevelIssuses;
  /** @var string */
  public $creationDate;
  /** @var CollectionStatusDestinationStatus[] */
  public $destinationStatuses;
  /** @var string */
  public $id;
  /** @var string */
  public $lastUpdateDate;
  protected $collection_key = 'destinationStatuses';
  protected $collectionLevelIssusesType = CollectionStatusItemLevelIssue::class;
  protected $collectionLevelIssusesDataType = 'array';
  protected $destinationStatusesType = CollectionStatusDestinationStatus::class;
  protected $destinationStatusesDataType = 'array';
  /** @param CollectionStatusItemLevelIssue[] */
  public function setCollectionLevelIssuses($collectionLevelIssuses)
  {
    $this->collectionLevelIssuses = $collectionLevelIssuses;
  }
  /** @return CollectionStatusItemLevelIssue[] */
  public function getCollectionLevelIssuses()
  {
    return $this->collectionLevelIssuses;
  }
  /** @param string */
  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }
  /** @return string */
  public function getCreationDate()
  {
    return $this->creationDate;
  }
  /** @param CollectionStatusDestinationStatus[] */
  public function setDestinationStatuses($destinationStatuses)
  {
    $this->destinationStatuses = $destinationStatuses;
  }
  /** @return CollectionStatusDestinationStatus[] */
  public function getDestinationStatuses()
  {
    return $this->destinationStatuses;
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
  public function setLastUpdateDate($lastUpdateDate)
  {
    $this->lastUpdateDate = $lastUpdateDate;
  }
  /** @return string */
  public function getLastUpdateDate()
  {
    return $this->lastUpdateDate;
  }
}

class CollectionStatusDestinationStatus extends \Google\Collection
{
  /** @var string[] */
  public $approvedCountries;
  /** @var string */
  public $destination;
  /** @var string[] */
  public $disapprovedCountries;
  /** @var string[] */
  public $pendingCountries;
  /** @var string */
  public $status;
  protected $collection_key = 'pendingCountries';
  /** @param string[] */
  public function setApprovedCountries($approvedCountries)
  {
    $this->approvedCountries = $approvedCountries;
  }
  /** @return string[] */
  public function getApprovedCountries()
  {
    return $this->approvedCountries;
  }
  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string[] */
  public function setDisapprovedCountries($disapprovedCountries)
  {
    $this->disapprovedCountries = $disapprovedCountries;
  }
  /** @return string[] */
  public function getDisapprovedCountries()
  {
    return $this->disapprovedCountries;
  }
  /** @param string[] */
  public function setPendingCountries($pendingCountries)
  {
    $this->pendingCountries = $pendingCountries;
  }
  /** @return string[] */
  public function getPendingCountries()
  {
    return $this->pendingCountries;
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
}

class CollectionStatusItemLevelIssue extends \Google\Collection
{
  /** @var string[] */
  public $applicableCountries;
  /** @var string */
  public $attributeName;
  /** @var string */
  public $code;
  /** @var string */
  public $description;
  /** @var string */
  public $destination;
  /** @var string */
  public $detail;
  /** @var string */
  public $documentation;
  /** @var string */
  public $resolution;
  /** @var string */
  public $servability;
  protected $collection_key = 'applicableCountries';
  /** @param string[] */
  public function setApplicableCountries($applicableCountries)
  {
    $this->applicableCountries = $applicableCountries;
  }
  /** @return string[] */
  public function getApplicableCountries()
  {
    return $this->applicableCountries;
  }
  /** @param string */
  public function setAttributeName($attributeName)
  {
    $this->attributeName = $attributeName;
  }
  /** @return string */
  public function getAttributeName()
  {
    return $this->attributeName;
  }
  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
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
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /** @return string */
  public function getDetail()
  {
    return $this->detail;
  }
  /** @param string */
  public function setDocumentation($documentation)
  {
    $this->documentation = $documentation;
  }
  /** @return string */
  public function getDocumentation()
  {
    return $this->documentation;
  }
  /** @param string */
  public function setResolution($resolution)
  {
    $this->resolution = $resolution;
  }
  /** @return string */
  public function getResolution()
  {
    return $this->resolution;
  }
  /** @param string */
  public function setServability($servability)
  {
    $this->servability = $servability;
  }
  /** @return string */
  public function getServability()
  {
    return $this->servability;
  }
}

class Css extends \Google\Collection
{
  /** @var string */
  public $cssDomainId;
  /** @var string */
  public $cssGroupId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $fullName;
  /** @var string */
  public $homepageUri;
  /** @var string[] */
  public $labelIds;
  protected $collection_key = 'labelIds';
  /** @param string */
  public function setCssDomainId($cssDomainId)
  {
    $this->cssDomainId = $cssDomainId;
  }
  /** @return string */
  public function getCssDomainId()
  {
    return $this->cssDomainId;
  }
  /** @param string */
  public function setCssGroupId($cssGroupId)
  {
    $this->cssGroupId = $cssGroupId;
  }
  /** @return string */
  public function getCssGroupId()
  {
    return $this->cssGroupId;
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
  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
  /** @return string */
  public function getFullName()
  {
    return $this->fullName;
  }
  /** @param string */
  public function setHomepageUri($homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  /** @return string */
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  /** @param string[] */
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  /** @return string[] */
  public function getLabelIds()
  {
    return $this->labelIds;
  }
}

class CustomAttribute extends \Google\Collection
{
  /** @var CustomAttribute[] */
  public $groupValues;
  /** @var string */
  public $name;
  /** @var string */
  public $value;
  protected $collection_key = 'groupValues';
  protected $groupValuesType = CustomAttribute::class;
  protected $groupValuesDataType = 'array';
  /** @param CustomAttribute[] */
  public function setGroupValues($groupValues)
  {
    $this->groupValues = $groupValues;
  }
  /** @return CustomAttribute[] */
  public function getGroupValues()
  {
    return $this->groupValues;
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

class CustomerReturnReason extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $reasonCode;

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
  public function setReasonCode($reasonCode)
  {
    $this->reasonCode = $reasonCode;
  }
  /** @return string */
  public function getReasonCode()
  {
    return $this->reasonCode;
  }
}

class CutoffTime extends \Google\Model
{
  /** @var string */
  public $hour;
  /** @var string */
  public $minute;
  /** @var string */
  public $timezone;

  /** @param string */
  public function setHour($hour)
  {
    $this->hour = $hour;
  }
  /** @return string */
  public function getHour()
  {
    return $this->hour;
  }
  /** @param string */
  public function setMinute($minute)
  {
    $this->minute = $minute;
  }
  /** @return string */
  public function getMinute()
  {
    return $this->minute;
  }
  /** @param string */
  public function setTimezone($timezone)
  {
    $this->timezone = $timezone;
  }
  /** @return string */
  public function getTimezone()
  {
    return $this->timezone;
  }
}

class Datafeed extends \Google\Collection
{
  /** @var string */
  public $attributeLanguage;
  /** @var string */
  public $contentType;
  /** @var DatafeedFetchSchedule */
  public $fetchSchedule;
  /** @var string */
  public $fileName;
  /** @var DatafeedFormat */
  public $format;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var DatafeedTarget[] */
  public $targets;
  protected $collection_key = 'targets';
  protected $fetchScheduleType = DatafeedFetchSchedule::class;
  protected $fetchScheduleDataType = '';
  protected $formatType = DatafeedFormat::class;
  protected $formatDataType = '';
  protected $targetsType = DatafeedTarget::class;
  protected $targetsDataType = 'array';
  /** @param string */
  public function setAttributeLanguage($attributeLanguage)
  {
    $this->attributeLanguage = $attributeLanguage;
  }
  /** @return string */
  public function getAttributeLanguage()
  {
    return $this->attributeLanguage;
  }
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
  /** @param DatafeedFetchSchedule */
  public function setFetchSchedule(DatafeedFetchSchedule $fetchSchedule)
  {
    $this->fetchSchedule = $fetchSchedule;
  }
  /** @return DatafeedFetchSchedule */
  public function getFetchSchedule()
  {
    return $this->fetchSchedule;
  }
  /** @param string */
  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }
  /** @return string */
  public function getFileName()
  {
    return $this->fileName;
  }
  /** @param DatafeedFormat */
  public function setFormat(DatafeedFormat $format)
  {
    $this->format = $format;
  }
  /** @return DatafeedFormat */
  public function getFormat()
  {
    return $this->format;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param DatafeedTarget[] */
  public function setTargets($targets)
  {
    $this->targets = $targets;
  }
  /** @return DatafeedTarget[] */
  public function getTargets()
  {
    return $this->targets;
  }
}

class DatafeedFetchSchedule extends \Google\Model
{
  /** @var string */
  public $dayOfMonth;
  /** @var string */
  public $fetchUrl;
  /** @var string */
  public $hour;
  /** @var string */
  public $minuteOfHour;
  /** @var string */
  public $password;
  /** @var bool */
  public $paused;
  /** @var string */
  public $timeZone;
  /** @var string */
  public $username;
  /** @var string */
  public $weekday;

  /** @param string */
  public function setDayOfMonth($dayOfMonth)
  {
    $this->dayOfMonth = $dayOfMonth;
  }
  /** @return string */
  public function getDayOfMonth()
  {
    return $this->dayOfMonth;
  }
  /** @param string */
  public function setFetchUrl($fetchUrl)
  {
    $this->fetchUrl = $fetchUrl;
  }
  /** @return string */
  public function getFetchUrl()
  {
    return $this->fetchUrl;
  }
  /** @param string */
  public function setHour($hour)
  {
    $this->hour = $hour;
  }
  /** @return string */
  public function getHour()
  {
    return $this->hour;
  }
  /** @param string */
  public function setMinuteOfHour($minuteOfHour)
  {
    $this->minuteOfHour = $minuteOfHour;
  }
  /** @return string */
  public function getMinuteOfHour()
  {
    return $this->minuteOfHour;
  }
  /** @param string */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /** @return string */
  public function getPassword()
  {
    return $this->password;
  }
  /** @param bool */
  public function setPaused($paused)
  {
    $this->paused = $paused;
  }
  /** @return bool */
  public function getPaused()
  {
    return $this->paused;
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
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /** @return string */
  public function getUsername()
  {
    return $this->username;
  }
  /** @param string */
  public function setWeekday($weekday)
  {
    $this->weekday = $weekday;
  }
  /** @return string */
  public function getWeekday()
  {
    return $this->weekday;
  }
}

class DatafeedFormat extends \Google\Model
{
  /** @var string */
  public $columnDelimiter;
  /** @var string */
  public $fileEncoding;
  /** @var string */
  public $quotingMode;

  /** @param string */
  public function setColumnDelimiter($columnDelimiter)
  {
    $this->columnDelimiter = $columnDelimiter;
  }
  /** @return string */
  public function getColumnDelimiter()
  {
    return $this->columnDelimiter;
  }
  /** @param string */
  public function setFileEncoding($fileEncoding)
  {
    $this->fileEncoding = $fileEncoding;
  }
  /** @return string */
  public function getFileEncoding()
  {
    return $this->fileEncoding;
  }
  /** @param string */
  public function setQuotingMode($quotingMode)
  {
    $this->quotingMode = $quotingMode;
  }
  /** @return string */
  public function getQuotingMode()
  {
    return $this->quotingMode;
  }
}

class DatafeedStatus extends \Google\Collection
{
  /** @var string */
  public $country;
  /** @var string */
  public $datafeedId;
  /** @var DatafeedStatusError[] */
  public $errors;
  /** @var string */
  public $feedLabel;
  /** @var string */
  public $itemsTotal;
  /** @var string */
  public $itemsValid;
  /** @var string */
  public $kind;
  /** @var string */
  public $language;
  /** @var string */
  public $lastUploadDate;
  /** @var string */
  public $processingStatus;
  /** @var DatafeedStatusError[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $errorsType = DatafeedStatusError::class;
  protected $errorsDataType = 'array';
  protected $warningsType = DatafeedStatusError::class;
  protected $warningsDataType = 'array';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setDatafeedId($datafeedId)
  {
    $this->datafeedId = $datafeedId;
  }
  /** @return string */
  public function getDatafeedId()
  {
    return $this->datafeedId;
  }
  /** @param DatafeedStatusError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return DatafeedStatusError[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param string */
  public function setFeedLabel($feedLabel)
  {
    $this->feedLabel = $feedLabel;
  }
  /** @return string */
  public function getFeedLabel()
  {
    return $this->feedLabel;
  }
  /** @param string */
  public function setItemsTotal($itemsTotal)
  {
    $this->itemsTotal = $itemsTotal;
  }
  /** @return string */
  public function getItemsTotal()
  {
    return $this->itemsTotal;
  }
  /** @param string */
  public function setItemsValid($itemsValid)
  {
    $this->itemsValid = $itemsValid;
  }
  /** @return string */
  public function getItemsValid()
  {
    return $this->itemsValid;
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
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
  }
  /** @param string */
  public function setLastUploadDate($lastUploadDate)
  {
    $this->lastUploadDate = $lastUploadDate;
  }
  /** @return string */
  public function getLastUploadDate()
  {
    return $this->lastUploadDate;
  }
  /** @param string */
  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }
  /** @return string */
  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }
  /** @param DatafeedStatusError[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return DatafeedStatusError[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class DatafeedStatusError extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var string */
  public $count;
  /** @var DatafeedStatusExample[] */
  public $examples;
  /** @var string */
  public $message;
  protected $collection_key = 'examples';
  protected $examplesType = DatafeedStatusExample::class;
  protected $examplesDataType = 'array';
  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
  /** @param string */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return string */
  public function getCount()
  {
    return $this->count;
  }
  /** @param DatafeedStatusExample[] */
  public function setExamples($examples)
  {
    $this->examples = $examples;
  }
  /** @return DatafeedStatusExample[] */
  public function getExamples()
  {
    return $this->examples;
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

class DatafeedStatusExample extends \Google\Model
{
  /** @var string */
  public $itemId;
  /** @var string */
  public $lineNumber;
  /** @var string */
  public $value;

  /** @param string */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string */
  public function getItemId()
  {
    return $this->itemId;
  }
  /** @param string */
  public function setLineNumber($lineNumber)
  {
    $this->lineNumber = $lineNumber;
  }
  /** @return string */
  public function getLineNumber()
  {
    return $this->lineNumber;
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

class DatafeedTarget extends \Google\Collection
{
  /** @var string */
  public $country;
  /** @var string[] */
  public $excludedDestinations;
  /** @var string */
  public $feedLabel;
  /** @var string[] */
  public $includedDestinations;
  /** @var string */
  public $language;
  /** @var string[] */
  public $targetCountries;
  protected $collection_key = 'targetCountries';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string[] */
  public function setExcludedDestinations($excludedDestinations)
  {
    $this->excludedDestinations = $excludedDestinations;
  }
  /** @return string[] */
  public function getExcludedDestinations()
  {
    return $this->excludedDestinations;
  }
  /** @param string */
  public function setFeedLabel($feedLabel)
  {
    $this->feedLabel = $feedLabel;
  }
  /** @return string */
  public function getFeedLabel()
  {
    return $this->feedLabel;
  }
  /** @param string[] */
  public function setIncludedDestinations($includedDestinations)
  {
    $this->includedDestinations = $includedDestinations;
  }
  /** @return string[] */
  public function getIncludedDestinations()
  {
    return $this->includedDestinations;
  }
  /** @param string */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
  }
  /** @param string[] */
  public function setTargetCountries($targetCountries)
  {
    $this->targetCountries = $targetCountries;
  }
  /** @return string[] */
  public function getTargetCountries()
  {
    return $this->targetCountries;
  }
}

class DatafeedsCustomBatchRequest extends \Google\Collection
{
  /** @var DatafeedsCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = DatafeedsCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param DatafeedsCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return DatafeedsCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class DatafeedsCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var Datafeed */
  public $datafeed;
  /** @var string */
  public $datafeedId;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  protected $datafeedType = Datafeed::class;
  protected $datafeedDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Datafeed */
  public function setDatafeed(Datafeed $datafeed)
  {
    $this->datafeed = $datafeed;
  }
  /** @return Datafeed */
  public function getDatafeed()
  {
    return $this->datafeed;
  }
  /** @param string */
  public function setDatafeedId($datafeedId)
  {
    $this->datafeedId = $datafeedId;
  }
  /** @return string */
  public function getDatafeedId()
  {
    return $this->datafeedId;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
}

class DatafeedsCustomBatchResponse extends \Google\Collection
{
  /** @var DatafeedsCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = DatafeedsCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param DatafeedsCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return DatafeedsCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class DatafeedsCustomBatchResponseEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var Datafeed */
  public $datafeed;
  /** @var Errors */
  public $errors;
  protected $datafeedType = Datafeed::class;
  protected $datafeedDataType = '';
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Datafeed */
  public function setDatafeed(Datafeed $datafeed)
  {
    $this->datafeed = $datafeed;
  }
  /** @return Datafeed */
  public function getDatafeed()
  {
    return $this->datafeed;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
  }
}

class DatafeedsFetchNowResponse extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class DatafeedsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Datafeed[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = Datafeed::class;
  protected $resourcesDataType = 'array';
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
  /** @param Datafeed[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return Datafeed[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class DatafeedstatusesCustomBatchRequest extends \Google\Collection
{
  /** @var DatafeedstatusesCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = DatafeedstatusesCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param DatafeedstatusesCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return DatafeedstatusesCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class DatafeedstatusesCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var string */
  public $country;
  /** @var string */
  public $datafeedId;
  /** @var string */
  public $feedLabel;
  /** @var string */
  public $language;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;

  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setDatafeedId($datafeedId)
  {
    $this->datafeedId = $datafeedId;
  }
  /** @return string */
  public function getDatafeedId()
  {
    return $this->datafeedId;
  }
  /** @param string */
  public function setFeedLabel($feedLabel)
  {
    $this->feedLabel = $feedLabel;
  }
  /** @return string */
  public function getFeedLabel()
  {
    return $this->feedLabel;
  }
  /** @param string */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
}

class DatafeedstatusesCustomBatchResponse extends \Google\Collection
{
  /** @var DatafeedstatusesCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = DatafeedstatusesCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param DatafeedstatusesCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return DatafeedstatusesCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class DatafeedstatusesCustomBatchResponseEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var DatafeedStatus */
  public $datafeedStatus;
  /** @var Errors */
  public $errors;
  protected $datafeedStatusType = DatafeedStatus::class;
  protected $datafeedStatusDataType = '';
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param DatafeedStatus */
  public function setDatafeedStatus(DatafeedStatus $datafeedStatus)
  {
    $this->datafeedStatus = $datafeedStatus;
  }
  /** @return DatafeedStatus */
  public function getDatafeedStatus()
  {
    return $this->datafeedStatus;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
  }
}

class DatafeedstatusesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var DatafeedStatus[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = DatafeedStatus::class;
  protected $resourcesDataType = 'array';
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
  /** @param DatafeedStatus[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return DatafeedStatus[] */
  public function getResources()
  {
    return $this->resources;
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

class DateTime extends \Google\Model
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
  /** @var TimeZone */
  public $timeZone;
  /** @var string */
  public $utcOffset;
  /** @var int */
  public $year;
  protected $timeZoneType = TimeZone::class;
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

class DeliveryArea extends \Google\Model
{
  /** @var string */
  public $countryCode;
  /** @var DeliveryAreaPostalCodeRange */
  public $postalCodeRange;
  /** @var string */
  public $regionCode;
  protected $postalCodeRangeType = DeliveryAreaPostalCodeRange::class;
  protected $postalCodeRangeDataType = '';
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
  /** @param DeliveryAreaPostalCodeRange */
  public function setPostalCodeRange(DeliveryAreaPostalCodeRange $postalCodeRange)
  {
    $this->postalCodeRange = $postalCodeRange;
  }
  /** @return DeliveryAreaPostalCodeRange */
  public function getPostalCodeRange()
  {
    return $this->postalCodeRange;
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

class DeliveryAreaPostalCodeRange extends \Google\Model
{
  /** @var string */
  public $firstPostalCode;
  /** @var string */
  public $lastPostalCode;

  /** @param string */
  public function setFirstPostalCode($firstPostalCode)
  {
    $this->firstPostalCode = $firstPostalCode;
  }
  /** @return string */
  public function getFirstPostalCode()
  {
    return $this->firstPostalCode;
  }
  /** @param string */
  public function setLastPostalCode($lastPostalCode)
  {
    $this->lastPostalCode = $lastPostalCode;
  }
  /** @return string */
  public function getLastPostalCode()
  {
    return $this->lastPostalCode;
  }
}

class DeliveryTime extends \Google\Collection
{
  /** @var CutoffTime */
  public $cutoffTime;
  /** @var BusinessDayConfig */
  public $handlingBusinessDayConfig;
  /** @var HolidayCutoff[] */
  public $holidayCutoffs;
  /** @var string */
  public $maxHandlingTimeInDays;
  /** @var string */
  public $maxTransitTimeInDays;
  /** @var string */
  public $minHandlingTimeInDays;
  /** @var string */
  public $minTransitTimeInDays;
  /** @var BusinessDayConfig */
  public $transitBusinessDayConfig;
  /** @var TransitTable */
  public $transitTimeTable;
  /** @var WarehouseBasedDeliveryTime[] */
  public $warehouseBasedDeliveryTimes;
  protected $collection_key = 'warehouseBasedDeliveryTimes';
  protected $cutoffTimeType = CutoffTime::class;
  protected $cutoffTimeDataType = '';
  protected $handlingBusinessDayConfigType = BusinessDayConfig::class;
  protected $handlingBusinessDayConfigDataType = '';
  protected $holidayCutoffsType = HolidayCutoff::class;
  protected $holidayCutoffsDataType = 'array';
  protected $transitBusinessDayConfigType = BusinessDayConfig::class;
  protected $transitBusinessDayConfigDataType = '';
  protected $transitTimeTableType = TransitTable::class;
  protected $transitTimeTableDataType = '';
  protected $warehouseBasedDeliveryTimesType = WarehouseBasedDeliveryTime::class;
  protected $warehouseBasedDeliveryTimesDataType = 'array';
  /** @param CutoffTime */
  public function setCutoffTime(CutoffTime $cutoffTime)
  {
    $this->cutoffTime = $cutoffTime;
  }
  /** @return CutoffTime */
  public function getCutoffTime()
  {
    return $this->cutoffTime;
  }
  /** @param BusinessDayConfig */
  public function setHandlingBusinessDayConfig(BusinessDayConfig $handlingBusinessDayConfig)
  {
    $this->handlingBusinessDayConfig = $handlingBusinessDayConfig;
  }
  /** @return BusinessDayConfig */
  public function getHandlingBusinessDayConfig()
  {
    return $this->handlingBusinessDayConfig;
  }
  /** @param HolidayCutoff[] */
  public function setHolidayCutoffs($holidayCutoffs)
  {
    $this->holidayCutoffs = $holidayCutoffs;
  }
  /** @return HolidayCutoff[] */
  public function getHolidayCutoffs()
  {
    return $this->holidayCutoffs;
  }
  /** @param string */
  public function setMaxHandlingTimeInDays($maxHandlingTimeInDays)
  {
    $this->maxHandlingTimeInDays = $maxHandlingTimeInDays;
  }
  /** @return string */
  public function getMaxHandlingTimeInDays()
  {
    return $this->maxHandlingTimeInDays;
  }
  /** @param string */
  public function setMaxTransitTimeInDays($maxTransitTimeInDays)
  {
    $this->maxTransitTimeInDays = $maxTransitTimeInDays;
  }
  /** @return string */
  public function getMaxTransitTimeInDays()
  {
    return $this->maxTransitTimeInDays;
  }
  /** @param string */
  public function setMinHandlingTimeInDays($minHandlingTimeInDays)
  {
    $this->minHandlingTimeInDays = $minHandlingTimeInDays;
  }
  /** @return string */
  public function getMinHandlingTimeInDays()
  {
    return $this->minHandlingTimeInDays;
  }
  /** @param string */
  public function setMinTransitTimeInDays($minTransitTimeInDays)
  {
    $this->minTransitTimeInDays = $minTransitTimeInDays;
  }
  /** @return string */
  public function getMinTransitTimeInDays()
  {
    return $this->minTransitTimeInDays;
  }
  /** @param BusinessDayConfig */
  public function setTransitBusinessDayConfig(BusinessDayConfig $transitBusinessDayConfig)
  {
    $this->transitBusinessDayConfig = $transitBusinessDayConfig;
  }
  /** @return BusinessDayConfig */
  public function getTransitBusinessDayConfig()
  {
    return $this->transitBusinessDayConfig;
  }
  /** @param TransitTable */
  public function setTransitTimeTable(TransitTable $transitTimeTable)
  {
    $this->transitTimeTable = $transitTimeTable;
  }
  /** @return TransitTable */
  public function getTransitTimeTable()
  {
    return $this->transitTimeTable;
  }
  /** @param WarehouseBasedDeliveryTime[] */
  public function setWarehouseBasedDeliveryTimes($warehouseBasedDeliveryTimes)
  {
    $this->warehouseBasedDeliveryTimes = $warehouseBasedDeliveryTimes;
  }
  /** @return WarehouseBasedDeliveryTime[] */
  public function getWarehouseBasedDeliveryTimes()
  {
    return $this->warehouseBasedDeliveryTimes;
  }
}

class ECommercePlatformLinkInfo extends \Google\Model
{
  /** @var string */
  public $externalAccountId;

  /** @param string */
  public function setExternalAccountId($externalAccountId)
  {
    $this->externalAccountId = $externalAccountId;
  }
  /** @return string */
  public function getExternalAccountId()
  {
    return $this->externalAccountId;
  }
}

class Error extends \Google\Model
{
  /** @var string */
  public $domain;
  /** @var string */
  public $message;
  /** @var string */
  public $reason;

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

class Errors extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var Error[] */
  public $errors;
  /** @var string */
  public $message;
  protected $collection_key = 'errors';
  protected $errorsType = Error::class;
  protected $errorsDataType = 'array';
  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
  /** @param Error[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return Error[] */
  public function getErrors()
  {
    return $this->errors;
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

class FreeListingsProgramStatus extends \Google\Collection
{
  /** @var string */
  public $globalState;
  /** @var FreeListingsProgramStatusRegionStatus[] */
  public $regionStatuses;
  protected $collection_key = 'regionStatuses';
  protected $regionStatusesType = FreeListingsProgramStatusRegionStatus::class;
  protected $regionStatusesDataType = 'array';
  /** @param string */
  public function setGlobalState($globalState)
  {
    $this->globalState = $globalState;
  }
  /** @return string */
  public function getGlobalState()
  {
    return $this->globalState;
  }
  /** @param FreeListingsProgramStatusRegionStatus[] */
  public function setRegionStatuses($regionStatuses)
  {
    $this->regionStatuses = $regionStatuses;
  }
  /** @return FreeListingsProgramStatusRegionStatus[] */
  public function getRegionStatuses()
  {
    return $this->regionStatuses;
  }
}

class FreeListingsProgramStatusRegionStatus extends \Google\Collection
{
  /** @var string */
  public $disapprovalDate;
  /** @var string */
  public $eligibilityStatus;
  /** @var string[] */
  public $onboardingIssues;
  /** @var string[] */
  public $regionCodes;
  /** @var string */
  public $reviewEligibilityStatus;
  /** @var string */
  public $reviewIneligibilityReason;
  /** @var string */
  public $reviewIneligibilityReasonDescription;
  /** @var FreeListingsProgramStatusReviewIneligibilityReasonDetails */
  public $reviewIneligibilityReasonDetails;
  /** @var string[] */
  public $reviewIssues;
  protected $collection_key = 'reviewIssues';
  protected $reviewIneligibilityReasonDetailsType = FreeListingsProgramStatusReviewIneligibilityReasonDetails::class;
  protected $reviewIneligibilityReasonDetailsDataType = '';
  /** @param string */
  public function setDisapprovalDate($disapprovalDate)
  {
    $this->disapprovalDate = $disapprovalDate;
  }
  /** @return string */
  public function getDisapprovalDate()
  {
    return $this->disapprovalDate;
  }
  /** @param string */
  public function setEligibilityStatus($eligibilityStatus)
  {
    $this->eligibilityStatus = $eligibilityStatus;
  }
  /** @return string */
  public function getEligibilityStatus()
  {
    return $this->eligibilityStatus;
  }
  /** @param string[] */
  public function setOnboardingIssues($onboardingIssues)
  {
    $this->onboardingIssues = $onboardingIssues;
  }
  /** @return string[] */
  public function getOnboardingIssues()
  {
    return $this->onboardingIssues;
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
  public function setReviewEligibilityStatus($reviewEligibilityStatus)
  {
    $this->reviewEligibilityStatus = $reviewEligibilityStatus;
  }
  /** @return string */
  public function getReviewEligibilityStatus()
  {
    return $this->reviewEligibilityStatus;
  }
  /** @param string */
  public function setReviewIneligibilityReason($reviewIneligibilityReason)
  {
    $this->reviewIneligibilityReason = $reviewIneligibilityReason;
  }
  /** @return string */
  public function getReviewIneligibilityReason()
  {
    return $this->reviewIneligibilityReason;
  }
  /** @param string */
  public function setReviewIneligibilityReasonDescription($reviewIneligibilityReasonDescription)
  {
    $this->reviewIneligibilityReasonDescription = $reviewIneligibilityReasonDescription;
  }
  /** @return string */
  public function getReviewIneligibilityReasonDescription()
  {
    return $this->reviewIneligibilityReasonDescription;
  }
  /** @param FreeListingsProgramStatusReviewIneligibilityReasonDetails */
  public function setReviewIneligibilityReasonDetails(FreeListingsProgramStatusReviewIneligibilityReasonDetails $reviewIneligibilityReasonDetails)
  {
    $this->reviewIneligibilityReasonDetails = $reviewIneligibilityReasonDetails;
  }
  /** @return FreeListingsProgramStatusReviewIneligibilityReasonDetails */
  public function getReviewIneligibilityReasonDetails()
  {
    return $this->reviewIneligibilityReasonDetails;
  }
  /** @param string[] */
  public function setReviewIssues($reviewIssues)
  {
    $this->reviewIssues = $reviewIssues;
  }
  /** @return string[] */
  public function getReviewIssues()
  {
    return $this->reviewIssues;
  }
}

class FreeListingsProgramStatusReviewIneligibilityReasonDetails extends \Google\Model
{
  /** @var string */
  public $cooldownTime;

  /** @param string */
  public function setCooldownTime($cooldownTime)
  {
    $this->cooldownTime = $cooldownTime;
  }
  /** @return string */
  public function getCooldownTime()
  {
    return $this->cooldownTime;
  }
}

class GmbAccounts extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var GmbAccountsGmbAccount[] */
  public $gmbAccounts;
  protected $collection_key = 'gmbAccounts';
  protected $gmbAccountsType = GmbAccountsGmbAccount::class;
  protected $gmbAccountsDataType = 'array';
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
  /** @param GmbAccountsGmbAccount[] */
  public function setGmbAccounts($gmbAccounts)
  {
    $this->gmbAccounts = $gmbAccounts;
  }
  /** @return GmbAccountsGmbAccount[] */
  public function getGmbAccounts()
  {
    return $this->gmbAccounts;
  }
}

class GmbAccountsGmbAccount extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $listingCount;
  /** @var string */
  public $name;
  /** @var string */
  public $type;

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
  public function setListingCount($listingCount)
  {
    $this->listingCount = $listingCount;
  }
  /** @return string */
  public function getListingCount()
  {
    return $this->listingCount;
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

class Headers extends \Google\Collection
{
  /** @var LocationIdSet[] */
  public $locations;
  /** @var string[] */
  public $numberOfItems;
  /** @var string[] */
  public $postalCodeGroupNames;
  /** @var Price[] */
  public $prices;
  /** @var Weight[] */
  public $weights;
  protected $collection_key = 'weights';
  protected $locationsType = LocationIdSet::class;
  protected $locationsDataType = 'array';
  protected $pricesType = Price::class;
  protected $pricesDataType = 'array';
  protected $weightsType = Weight::class;
  protected $weightsDataType = 'array';
  /** @param LocationIdSet[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return LocationIdSet[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param string[] */
  public function setNumberOfItems($numberOfItems)
  {
    $this->numberOfItems = $numberOfItems;
  }
  /** @return string[] */
  public function getNumberOfItems()
  {
    return $this->numberOfItems;
  }
  /** @param string[] */
  public function setPostalCodeGroupNames($postalCodeGroupNames)
  {
    $this->postalCodeGroupNames = $postalCodeGroupNames;
  }
  /** @return string[] */
  public function getPostalCodeGroupNames()
  {
    return $this->postalCodeGroupNames;
  }
  /** @param Price[] */
  public function setPrices($prices)
  {
    $this->prices = $prices;
  }
  /** @return Price[] */
  public function getPrices()
  {
    return $this->prices;
  }
  /** @param Weight[] */
  public function setWeights($weights)
  {
    $this->weights = $weights;
  }
  /** @return Weight[] */
  public function getWeights()
  {
    return $this->weights;
  }
}

class HolidayCutoff extends \Google\Model
{
  /** @var string */
  public $deadlineDate;
  /** @var string */
  public $deadlineHour;
  /** @var string */
  public $deadlineTimezone;
  /** @var string */
  public $holidayId;
  /** @var string */
  public $visibleFromDate;

  /** @param string */
  public function setDeadlineDate($deadlineDate)
  {
    $this->deadlineDate = $deadlineDate;
  }
  /** @return string */
  public function getDeadlineDate()
  {
    return $this->deadlineDate;
  }
  /** @param string */
  public function setDeadlineHour($deadlineHour)
  {
    $this->deadlineHour = $deadlineHour;
  }
  /** @return string */
  public function getDeadlineHour()
  {
    return $this->deadlineHour;
  }
  /** @param string */
  public function setDeadlineTimezone($deadlineTimezone)
  {
    $this->deadlineTimezone = $deadlineTimezone;
  }
  /** @return string */
  public function getDeadlineTimezone()
  {
    return $this->deadlineTimezone;
  }
  /** @param string */
  public function setHolidayId($holidayId)
  {
    $this->holidayId = $holidayId;
  }
  /** @return string */
  public function getHolidayId()
  {
    return $this->holidayId;
  }
  /** @param string */
  public function setVisibleFromDate($visibleFromDate)
  {
    $this->visibleFromDate = $visibleFromDate;
  }
  /** @return string */
  public function getVisibleFromDate()
  {
    return $this->visibleFromDate;
  }
}

class HolidaysHoliday extends \Google\Model
{
  /** @var string */
  public $countryCode;
  /** @var string */
  public $date;
  /** @var string */
  public $deliveryGuaranteeDate;
  /** @var string */
  public $deliveryGuaranteeHour;
  /** @var string */
  public $id;
  /** @var string */
  public $type;

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
  public function setDate($date)
  {
    $this->date = $date;
  }
  /** @return string */
  public function getDate()
  {
    return $this->date;
  }
  /** @param string */
  public function setDeliveryGuaranteeDate($deliveryGuaranteeDate)
  {
    $this->deliveryGuaranteeDate = $deliveryGuaranteeDate;
  }
  /** @return string */
  public function getDeliveryGuaranteeDate()
  {
    return $this->deliveryGuaranteeDate;
  }
  /** @param string */
  public function setDeliveryGuaranteeHour($deliveryGuaranteeHour)
  {
    $this->deliveryGuaranteeHour = $deliveryGuaranteeHour;
  }
  /** @return string */
  public function getDeliveryGuaranteeHour()
  {
    return $this->deliveryGuaranteeHour;
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

class InapplicabilityDetails extends \Google\Model
{
  /** @var string */
  public $inapplicableCount;
  /** @var string */
  public $inapplicableReason;

  /** @param string */
  public function setInapplicableCount($inapplicableCount)
  {
    $this->inapplicableCount = $inapplicableCount;
  }
  /** @return string */
  public function getInapplicableCount()
  {
    return $this->inapplicableCount;
  }
  /** @param string */
  public function setInapplicableReason($inapplicableReason)
  {
    $this->inapplicableReason = $inapplicableReason;
  }
  /** @return string */
  public function getInapplicableReason()
  {
    return $this->inapplicableReason;
  }
}

class Installment extends \Google\Model
{
  /** @var Price */
  public $amount;
  /** @var string */
  public $months;
  protected $amountType = Price::class;
  protected $amountDataType = '';
  /** @param Price */
  public function setAmount(Price $amount)
  {
    $this->amount = $amount;
  }
  /** @return Price */
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param string */
  public function setMonths($months)
  {
    $this->months = $months;
  }
  /** @return string */
  public function getMonths()
  {
    return $this->months;
  }
}

class InvoiceSummary extends \Google\Collection
{
  /** @var InvoiceSummaryAdditionalChargeSummary[] */
  public $additionalChargeSummaries;
  /** @var Amount */
  public $productTotal;
  protected $collection_key = 'additionalChargeSummaries';
  protected $additionalChargeSummariesType = InvoiceSummaryAdditionalChargeSummary::class;
  protected $additionalChargeSummariesDataType = 'array';
  protected $productTotalType = Amount::class;
  protected $productTotalDataType = '';
  /** @param InvoiceSummaryAdditionalChargeSummary[] */
  public function setAdditionalChargeSummaries($additionalChargeSummaries)
  {
    $this->additionalChargeSummaries = $additionalChargeSummaries;
  }
  /** @return InvoiceSummaryAdditionalChargeSummary[] */
  public function getAdditionalChargeSummaries()
  {
    return $this->additionalChargeSummaries;
  }
  /** @param Amount */
  public function setProductTotal(Amount $productTotal)
  {
    $this->productTotal = $productTotal;
  }
  /** @return Amount */
  public function getProductTotal()
  {
    return $this->productTotal;
  }
}

class InvoiceSummaryAdditionalChargeSummary extends \Google\Model
{
  /** @var Amount */
  public $totalAmount;
  /** @var string */
  public $type;
  protected $totalAmountType = Amount::class;
  protected $totalAmountDataType = '';
  /** @param Amount */
  public function setTotalAmount(Amount $totalAmount)
  {
    $this->totalAmount = $totalAmount;
  }
  /** @return Amount */
  public function getTotalAmount()
  {
    return $this->totalAmount;
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

class LabelIds extends \Google\Collection
{
  /** @var string[] */
  public $labelIds;
  protected $collection_key = 'labelIds';
  /** @param string[] */
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  /** @return string[] */
  public function getLabelIds()
  {
    return $this->labelIds;
  }
}

class LiaAboutPageSettings extends \Google\Model
{
  /** @var string */
  public $status;
  /** @var string */
  public $url;

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

class LiaCountrySettings extends \Google\Model
{
  /** @var LiaAboutPageSettings */
  public $about;
  /** @var string */
  public $country;
  /** @var bool */
  public $hostedLocalStorefrontActive;
  /** @var LiaInventorySettings */
  public $inventory;
  /** @var LiaOnDisplayToOrderSettings */
  public $onDisplayToOrder;
  /** @var LiaPosDataProvider */
  public $posDataProvider;
  /** @var bool */
  public $storePickupActive;
  protected $aboutType = LiaAboutPageSettings::class;
  protected $aboutDataType = '';
  protected $inventoryType = LiaInventorySettings::class;
  protected $inventoryDataType = '';
  protected $onDisplayToOrderType = LiaOnDisplayToOrderSettings::class;
  protected $onDisplayToOrderDataType = '';
  protected $posDataProviderType = LiaPosDataProvider::class;
  protected $posDataProviderDataType = '';
  /** @param LiaAboutPageSettings */
  public function setAbout(LiaAboutPageSettings $about)
  {
    $this->about = $about;
  }
  /** @return LiaAboutPageSettings */
  public function getAbout()
  {
    return $this->about;
  }
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param bool */
  public function setHostedLocalStorefrontActive($hostedLocalStorefrontActive)
  {
    $this->hostedLocalStorefrontActive = $hostedLocalStorefrontActive;
  }
  /** @return bool */
  public function getHostedLocalStorefrontActive()
  {
    return $this->hostedLocalStorefrontActive;
  }
  /** @param LiaInventorySettings */
  public function setInventory(LiaInventorySettings $inventory)
  {
    $this->inventory = $inventory;
  }
  /** @return LiaInventorySettings */
  public function getInventory()
  {
    return $this->inventory;
  }
  /** @param LiaOnDisplayToOrderSettings */
  public function setOnDisplayToOrder(LiaOnDisplayToOrderSettings $onDisplayToOrder)
  {
    $this->onDisplayToOrder = $onDisplayToOrder;
  }
  /** @return LiaOnDisplayToOrderSettings */
  public function getOnDisplayToOrder()
  {
    return $this->onDisplayToOrder;
  }
  /** @param LiaPosDataProvider */
  public function setPosDataProvider(LiaPosDataProvider $posDataProvider)
  {
    $this->posDataProvider = $posDataProvider;
  }
  /** @return LiaPosDataProvider */
  public function getPosDataProvider()
  {
    return $this->posDataProvider;
  }
  /** @param bool */
  public function setStorePickupActive($storePickupActive)
  {
    $this->storePickupActive = $storePickupActive;
  }
  /** @return bool */
  public function getStorePickupActive()
  {
    return $this->storePickupActive;
  }
}

class LiaInventorySettings extends \Google\Model
{
  /** @var string */
  public $inventoryVerificationContactEmail;
  /** @var string */
  public $inventoryVerificationContactName;
  /** @var string */
  public $inventoryVerificationContactStatus;
  /** @var string */
  public $status;

  /** @param string */
  public function setInventoryVerificationContactEmail($inventoryVerificationContactEmail)
  {
    $this->inventoryVerificationContactEmail = $inventoryVerificationContactEmail;
  }
  /** @return string */
  public function getInventoryVerificationContactEmail()
  {
    return $this->inventoryVerificationContactEmail;
  }
  /** @param string */
  public function setInventoryVerificationContactName($inventoryVerificationContactName)
  {
    $this->inventoryVerificationContactName = $inventoryVerificationContactName;
  }
  /** @return string */
  public function getInventoryVerificationContactName()
  {
    return $this->inventoryVerificationContactName;
  }
  /** @param string */
  public function setInventoryVerificationContactStatus($inventoryVerificationContactStatus)
  {
    $this->inventoryVerificationContactStatus = $inventoryVerificationContactStatus;
  }
  /** @return string */
  public function getInventoryVerificationContactStatus()
  {
    return $this->inventoryVerificationContactStatus;
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
}

class LiaOnDisplayToOrderSettings extends \Google\Model
{
  /** @var string */
  public $shippingCostPolicyUrl;
  /** @var string */
  public $status;

  /** @param string */
  public function setShippingCostPolicyUrl($shippingCostPolicyUrl)
  {
    $this->shippingCostPolicyUrl = $shippingCostPolicyUrl;
  }
  /** @return string */
  public function getShippingCostPolicyUrl()
  {
    return $this->shippingCostPolicyUrl;
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
}

class LiaPosDataProvider extends \Google\Model
{
  /** @var string */
  public $posDataProviderId;
  /** @var string */
  public $posExternalAccountId;

  /** @param string */
  public function setPosDataProviderId($posDataProviderId)
  {
    $this->posDataProviderId = $posDataProviderId;
  }
  /** @return string */
  public function getPosDataProviderId()
  {
    return $this->posDataProviderId;
  }
  /** @param string */
  public function setPosExternalAccountId($posExternalAccountId)
  {
    $this->posExternalAccountId = $posExternalAccountId;
  }
  /** @return string */
  public function getPosExternalAccountId()
  {
    return $this->posExternalAccountId;
  }
}

class LiaSettings extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var LiaCountrySettings[] */
  public $countrySettings;
  /** @var string */
  public $kind;
  protected $collection_key = 'countrySettings';
  protected $countrySettingsType = LiaCountrySettings::class;
  protected $countrySettingsDataType = 'array';
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
  /** @param LiaCountrySettings[] */
  public function setCountrySettings($countrySettings)
  {
    $this->countrySettings = $countrySettings;
  }
  /** @return LiaCountrySettings[] */
  public function getCountrySettings()
  {
    return $this->countrySettings;
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
}

class LiasettingsCustomBatchRequest extends \Google\Collection
{
  /** @var LiasettingsCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = LiasettingsCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param LiasettingsCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return LiasettingsCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class LiasettingsCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $batchId;
  /** @var string */
  public $contactEmail;
  /** @var string */
  public $contactName;
  /** @var string */
  public $country;
  /** @var string */
  public $gmbEmail;
  /** @var LiaSettings */
  public $liaSettings;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  /** @var string */
  public $posDataProviderId;
  /** @var string */
  public $posExternalAccountId;
  protected $liaSettingsType = LiaSettings::class;
  protected $liaSettingsDataType = '';
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
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param string */
  public function setContactEmail($contactEmail)
  {
    $this->contactEmail = $contactEmail;
  }
  /** @return string */
  public function getContactEmail()
  {
    return $this->contactEmail;
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
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setGmbEmail($gmbEmail)
  {
    $this->gmbEmail = $gmbEmail;
  }
  /** @return string */
  public function getGmbEmail()
  {
    return $this->gmbEmail;
  }
  /** @param LiaSettings */
  public function setLiaSettings(LiaSettings $liaSettings)
  {
    $this->liaSettings = $liaSettings;
  }
  /** @return LiaSettings */
  public function getLiaSettings()
  {
    return $this->liaSettings;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string */
  public function setPosDataProviderId($posDataProviderId)
  {
    $this->posDataProviderId = $posDataProviderId;
  }
  /** @return string */
  public function getPosDataProviderId()
  {
    return $this->posDataProviderId;
  }
  /** @param string */
  public function setPosExternalAccountId($posExternalAccountId)
  {
    $this->posExternalAccountId = $posExternalAccountId;
  }
  /** @return string */
  public function getPosExternalAccountId()
  {
    return $this->posExternalAccountId;
  }
}

class LiasettingsCustomBatchResponse extends \Google\Collection
{
  /** @var LiasettingsCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = LiasettingsCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param LiasettingsCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return LiasettingsCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class LiasettingsCustomBatchResponseEntry extends \Google\Collection
{
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var GmbAccounts */
  public $gmbAccounts;
  /** @var string */
  public $kind;
  /** @var LiaSettings */
  public $liaSettings;
  /** @var PosDataProviders[] */
  public $posDataProviders;
  protected $collection_key = 'posDataProviders';
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $gmbAccountsType = GmbAccounts::class;
  protected $gmbAccountsDataType = '';
  protected $liaSettingsType = LiaSettings::class;
  protected $liaSettingsDataType = '';
  protected $posDataProvidersType = PosDataProviders::class;
  protected $posDataProvidersDataType = 'array';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param GmbAccounts */
  public function setGmbAccounts(GmbAccounts $gmbAccounts)
  {
    $this->gmbAccounts = $gmbAccounts;
  }
  /** @return GmbAccounts */
  public function getGmbAccounts()
  {
    return $this->gmbAccounts;
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
  /** @param LiaSettings */
  public function setLiaSettings(LiaSettings $liaSettings)
  {
    $this->liaSettings = $liaSettings;
  }
  /** @return LiaSettings */
  public function getLiaSettings()
  {
    return $this->liaSettings;
  }
  /** @param PosDataProviders[] */
  public function setPosDataProviders($posDataProviders)
  {
    $this->posDataProviders = $posDataProviders;
  }
  /** @return PosDataProviders[] */
  public function getPosDataProviders()
  {
    return $this->posDataProviders;
  }
}

class LiasettingsGetAccessibleGmbAccountsResponse extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var GmbAccountsGmbAccount[] */
  public $gmbAccounts;
  /** @var string */
  public $kind;
  protected $collection_key = 'gmbAccounts';
  protected $gmbAccountsType = GmbAccountsGmbAccount::class;
  protected $gmbAccountsDataType = 'array';
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
  /** @param GmbAccountsGmbAccount[] */
  public function setGmbAccounts($gmbAccounts)
  {
    $this->gmbAccounts = $gmbAccounts;
  }
  /** @return GmbAccountsGmbAccount[] */
  public function getGmbAccounts()
  {
    return $this->gmbAccounts;
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
}

class LiasettingsListPosDataProvidersResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var PosDataProviders[] */
  public $posDataProviders;
  protected $collection_key = 'posDataProviders';
  protected $posDataProvidersType = PosDataProviders::class;
  protected $posDataProvidersDataType = 'array';
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
  /** @param PosDataProviders[] */
  public function setPosDataProviders($posDataProviders)
  {
    $this->posDataProviders = $posDataProviders;
  }
  /** @return PosDataProviders[] */
  public function getPosDataProviders()
  {
    return $this->posDataProviders;
  }
}

class LiasettingsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var LiaSettings[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = LiaSettings::class;
  protected $resourcesDataType = 'array';
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
  /** @param LiaSettings[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return LiaSettings[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class LiasettingsRequestGmbAccessResponse extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class LiasettingsRequestInventoryVerificationResponse extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class LiasettingsSetInventoryVerificationContactResponse extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class LiasettingsSetPosDataProviderResponse extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class LinkService extends \Google\Model
{
  /** @var string */
  public $service;
  /** @var string */
  public $status;

  /** @param string */
  public function setService($service)
  {
    $this->service = $service;
  }
  /** @return string */
  public function getService()
  {
    return $this->service;
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
}

class LinkedAccount extends \Google\Collection
{
  /** @var string */
  public $linkedAccountId;
  /** @var LinkService[] */
  public $services;
  protected $collection_key = 'services';
  protected $servicesType = LinkService::class;
  protected $servicesDataType = 'array';
  /** @param string */
  public function setLinkedAccountId($linkedAccountId)
  {
    $this->linkedAccountId = $linkedAccountId;
  }
  /** @return string */
  public function getLinkedAccountId()
  {
    return $this->linkedAccountId;
  }
  /** @param LinkService[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return LinkService[] */
  public function getServices()
  {
    return $this->services;
  }
}

class ListAccountLabelsResponse extends \Google\Collection
{
  /** @var AccountLabel[] */
  public $accountLabels;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accountLabels';
  protected $accountLabelsType = AccountLabel::class;
  protected $accountLabelsDataType = 'array';
  /** @param AccountLabel[] */
  public function setAccountLabels($accountLabels)
  {
    $this->accountLabels = $accountLabels;
  }
  /** @return AccountLabel[] */
  public function getAccountLabels()
  {
    return $this->accountLabels;
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

class ListAccountReturnCarrierResponse extends \Google\Collection
{
  /** @var AccountReturnCarrier[] */
  public $accountReturnCarriers;
  protected $collection_key = 'accountReturnCarriers';
  protected $accountReturnCarriersType = AccountReturnCarrier::class;
  protected $accountReturnCarriersDataType = 'array';
  /** @param AccountReturnCarrier[] */
  public function setAccountReturnCarriers($accountReturnCarriers)
  {
    $this->accountReturnCarriers = $accountReturnCarriers;
  }
  /** @return AccountReturnCarrier[] */
  public function getAccountReturnCarriers()
  {
    return $this->accountReturnCarriers;
  }
}

class ListCollectionStatusesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var CollectionStatus[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = CollectionStatus::class;
  protected $resourcesDataType = 'array';
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
  /** @param CollectionStatus[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return CollectionStatus[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class ListCollectionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Collection[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = Collection::class;
  protected $resourcesDataType = 'array';
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
  /** @param Collection[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return Collection[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class ListCssesResponse extends \Google\Collection
{
  /** @var Css[] */
  public $csses;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'csses';
  protected $cssesType = Css::class;
  protected $cssesDataType = 'array';
  /** @param Css[] */
  public function setCsses($csses)
  {
    $this->csses = $csses;
  }
  /** @return Css[] */
  public function getCsses()
  {
    return $this->csses;
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

class ListMethodQuotasResponse extends \Google\Collection
{
  /** @var MethodQuota[] */
  public $methodQuotas;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'methodQuotas';
  protected $methodQuotasType = MethodQuota::class;
  protected $methodQuotasDataType = 'array';
  /** @param MethodQuota[] */
  public function setMethodQuotas($methodQuotas)
  {
    $this->methodQuotas = $methodQuotas;
  }
  /** @return MethodQuota[] */
  public function getMethodQuotas()
  {
    return $this->methodQuotas;
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

class ListRegionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Region[] */
  public $regions;
  protected $collection_key = 'regions';
  protected $regionsType = Region::class;
  protected $regionsDataType = 'array';
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
  /** @param Region[] */
  public function setRegions($regions)
  {
    $this->regions = $regions;
  }
  /** @return Region[] */
  public function getRegions()
  {
    return $this->regions;
  }
}

class ListRepricingProductReportsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var RepricingProductReport[] */
  public $repricingProductReports;
  protected $collection_key = 'repricingProductReports';
  protected $repricingProductReportsType = RepricingProductReport::class;
  protected $repricingProductReportsDataType = 'array';
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
  /** @param RepricingProductReport[] */
  public function setRepricingProductReports($repricingProductReports)
  {
    $this->repricingProductReports = $repricingProductReports;
  }
  /** @return RepricingProductReport[] */
  public function getRepricingProductReports()
  {
    return $this->repricingProductReports;
  }
}

class ListRepricingRuleReportsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var RepricingRuleReport[] */
  public $repricingRuleReports;
  protected $collection_key = 'repricingRuleReports';
  protected $repricingRuleReportsType = RepricingRuleReport::class;
  protected $repricingRuleReportsDataType = 'array';
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
  /** @param RepricingRuleReport[] */
  public function setRepricingRuleReports($repricingRuleReports)
  {
    $this->repricingRuleReports = $repricingRuleReports;
  }
  /** @return RepricingRuleReport[] */
  public function getRepricingRuleReports()
  {
    return $this->repricingRuleReports;
  }
}

class ListRepricingRulesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var RepricingRule[] */
  public $repricingRules;
  protected $collection_key = 'repricingRules';
  protected $repricingRulesType = RepricingRule::class;
  protected $repricingRulesDataType = 'array';
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
  /** @param RepricingRule[] */
  public function setRepricingRules($repricingRules)
  {
    $this->repricingRules = $repricingRules;
  }
  /** @return RepricingRule[] */
  public function getRepricingRules()
  {
    return $this->repricingRules;
  }
}

class ListReturnPolicyOnlineResponse extends \Google\Collection
{
  /** @var ReturnPolicyOnline[] */
  public $returnPolicies;
  protected $collection_key = 'returnPolicies';
  protected $returnPoliciesType = ReturnPolicyOnline::class;
  protected $returnPoliciesDataType = 'array';
  /** @param ReturnPolicyOnline[] */
  public function setReturnPolicies($returnPolicies)
  {
    $this->returnPolicies = $returnPolicies;
  }
  /** @return ReturnPolicyOnline[] */
  public function getReturnPolicies()
  {
    return $this->returnPolicies;
  }
}

class LocalInventory extends \Google\Collection
{
  /** @var string */
  public $availability;
  /** @var CustomAttribute[] */
  public $customAttributes;
  /** @var string */
  public $instoreProductLocation;
  /** @var string */
  public $kind;
  /** @var string */
  public $pickupMethod;
  /** @var string */
  public $pickupSla;
  /** @var Price */
  public $price;
  /** @var string */
  public $quantity;
  /** @var Price */
  public $salePrice;
  /** @var string */
  public $salePriceEffectiveDate;
  /** @var string */
  public $storeCode;
  protected $collection_key = 'customAttributes';
  protected $customAttributesType = CustomAttribute::class;
  protected $customAttributesDataType = 'array';
  protected $priceType = Price::class;
  protected $priceDataType = '';
  protected $salePriceType = Price::class;
  protected $salePriceDataType = '';
  /** @param string */
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /** @return string */
  public function getAvailability()
  {
    return $this->availability;
  }
  /** @param CustomAttribute[] */
  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }
  /** @return CustomAttribute[] */
  public function getCustomAttributes()
  {
    return $this->customAttributes;
  }
  /** @param string */
  public function setInstoreProductLocation($instoreProductLocation)
  {
    $this->instoreProductLocation = $instoreProductLocation;
  }
  /** @return string */
  public function getInstoreProductLocation()
  {
    return $this->instoreProductLocation;
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
  public function setPickupMethod($pickupMethod)
  {
    $this->pickupMethod = $pickupMethod;
  }
  /** @return string */
  public function getPickupMethod()
  {
    return $this->pickupMethod;
  }
  /** @param string */
  public function setPickupSla($pickupSla)
  {
    $this->pickupSla = $pickupSla;
  }
  /** @return string */
  public function getPickupSla()
  {
    return $this->pickupSla;
  }
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /** @param Price */
  public function setSalePrice(Price $salePrice)
  {
    $this->salePrice = $salePrice;
  }
  /** @return Price */
  public function getSalePrice()
  {
    return $this->salePrice;
  }
  /** @param string */
  public function setSalePriceEffectiveDate($salePriceEffectiveDate)
  {
    $this->salePriceEffectiveDate = $salePriceEffectiveDate;
  }
  /** @return string */
  public function getSalePriceEffectiveDate()
  {
    return $this->salePriceEffectiveDate;
  }
  /** @param string */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
}

class LocalinventoryCustomBatchRequest extends \Google\Collection
{
  /** @var LocalinventoryCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = LocalinventoryCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param LocalinventoryCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return LocalinventoryCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class LocalinventoryCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var LocalInventory */
  public $localInventory;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  /** @var string */
  public $productId;
  protected $localInventoryType = LocalInventory::class;
  protected $localInventoryDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param LocalInventory */
  public function setLocalInventory(LocalInventory $localInventory)
  {
    $this->localInventory = $localInventory;
  }
  /** @return LocalInventory */
  public function getLocalInventory()
  {
    return $this->localInventory;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
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
}

class LocalinventoryCustomBatchResponse extends \Google\Collection
{
  /** @var LocalinventoryCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = LocalinventoryCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param LocalinventoryCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return LocalinventoryCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class LocalinventoryCustomBatchResponseEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $kind;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
}

class LocationIdSet extends \Google\Collection
{
  /** @var string[] */
  public $locationIds;
  protected $collection_key = 'locationIds';
  /** @param string[] */
  public function setLocationIds($locationIds)
  {
    $this->locationIds = $locationIds;
  }
  /** @return string[] */
  public function getLocationIds()
  {
    return $this->locationIds;
  }
}

class LoyaltyPoints extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $pointsValue;
  public $ratio;

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
  public function setPointsValue($pointsValue)
  {
    $this->pointsValue = $pointsValue;
  }
  /** @return string */
  public function getPointsValue()
  {
    return $this->pointsValue;
  }
  public function setRatio($ratio)
  {
    $this->ratio = $ratio;
  }
  public function getRatio()
  {
    return $this->ratio;
  }
}

class MerchantOrderReturn extends \Google\Collection
{
  /** @var string */
  public $creationDate;
  /** @var string */
  public $merchantOrderId;
  /** @var string */
  public $orderId;
  /** @var string */
  public $orderReturnId;
  /** @var MerchantOrderReturnItem[] */
  public $returnItems;
  /** @var ReturnPricingInfo */
  public $returnPricingInfo;
  /** @var ReturnShipment[] */
  public $returnShipments;
  protected $collection_key = 'returnShipments';
  protected $returnItemsType = MerchantOrderReturnItem::class;
  protected $returnItemsDataType = 'array';
  protected $returnPricingInfoType = ReturnPricingInfo::class;
  protected $returnPricingInfoDataType = '';
  protected $returnShipmentsType = ReturnShipment::class;
  protected $returnShipmentsDataType = 'array';
  /** @param string */
  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }
  /** @return string */
  public function getCreationDate()
  {
    return $this->creationDate;
  }
  /** @param string */
  public function setMerchantOrderId($merchantOrderId)
  {
    $this->merchantOrderId = $merchantOrderId;
  }
  /** @return string */
  public function getMerchantOrderId()
  {
    return $this->merchantOrderId;
  }
  /** @param string */
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  /** @return string */
  public function getOrderId()
  {
    return $this->orderId;
  }
  /** @param string */
  public function setOrderReturnId($orderReturnId)
  {
    $this->orderReturnId = $orderReturnId;
  }
  /** @return string */
  public function getOrderReturnId()
  {
    return $this->orderReturnId;
  }
  /** @param MerchantOrderReturnItem[] */
  public function setReturnItems($returnItems)
  {
    $this->returnItems = $returnItems;
  }
  /** @return MerchantOrderReturnItem[] */
  public function getReturnItems()
  {
    return $this->returnItems;
  }
  /** @param ReturnPricingInfo */
  public function setReturnPricingInfo(ReturnPricingInfo $returnPricingInfo)
  {
    $this->returnPricingInfo = $returnPricingInfo;
  }
  /** @return ReturnPricingInfo */
  public function getReturnPricingInfo()
  {
    return $this->returnPricingInfo;
  }
  /** @param ReturnShipment[] */
  public function setReturnShipments($returnShipments)
  {
    $this->returnShipments = $returnShipments;
  }
  /** @return ReturnShipment[] */
  public function getReturnShipments()
  {
    return $this->returnShipments;
  }
}

class MerchantOrderReturnItem extends \Google\Collection
{
  /** @var CustomerReturnReason */
  public $customerReturnReason;
  /** @var string */
  public $itemId;
  /** @var MerchantRejectionReason */
  public $merchantRejectionReason;
  /** @var RefundReason */
  public $merchantReturnReason;
  /** @var OrderLineItemProduct */
  public $product;
  /** @var MonetaryAmount */
  public $refundableAmount;
  /** @var string */
  public $returnItemId;
  /** @var string[] */
  public $returnShipmentIds;
  /** @var string */
  public $shipmentGroupId;
  /** @var string */
  public $shipmentUnitId;
  /** @var string */
  public $state;
  protected $collection_key = 'returnShipmentIds';
  protected $customerReturnReasonType = CustomerReturnReason::class;
  protected $customerReturnReasonDataType = '';
  protected $merchantRejectionReasonType = MerchantRejectionReason::class;
  protected $merchantRejectionReasonDataType = '';
  protected $merchantReturnReasonType = RefundReason::class;
  protected $merchantReturnReasonDataType = '';
  protected $productType = OrderLineItemProduct::class;
  protected $productDataType = '';
  protected $refundableAmountType = MonetaryAmount::class;
  protected $refundableAmountDataType = '';
  /** @param CustomerReturnReason */
  public function setCustomerReturnReason(CustomerReturnReason $customerReturnReason)
  {
    $this->customerReturnReason = $customerReturnReason;
  }
  /** @return CustomerReturnReason */
  public function getCustomerReturnReason()
  {
    return $this->customerReturnReason;
  }
  /** @param string */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string */
  public function getItemId()
  {
    return $this->itemId;
  }
  /** @param MerchantRejectionReason */
  public function setMerchantRejectionReason(MerchantRejectionReason $merchantRejectionReason)
  {
    $this->merchantRejectionReason = $merchantRejectionReason;
  }
  /** @return MerchantRejectionReason */
  public function getMerchantRejectionReason()
  {
    return $this->merchantRejectionReason;
  }
  /** @param RefundReason */
  public function setMerchantReturnReason(RefundReason $merchantReturnReason)
  {
    $this->merchantReturnReason = $merchantReturnReason;
  }
  /** @return RefundReason */
  public function getMerchantReturnReason()
  {
    return $this->merchantReturnReason;
  }
  /** @param OrderLineItemProduct */
  public function setProduct(OrderLineItemProduct $product)
  {
    $this->product = $product;
  }
  /** @return OrderLineItemProduct */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param MonetaryAmount */
  public function setRefundableAmount(MonetaryAmount $refundableAmount)
  {
    $this->refundableAmount = $refundableAmount;
  }
  /** @return MonetaryAmount */
  public function getRefundableAmount()
  {
    return $this->refundableAmount;
  }
  /** @param string */
  public function setReturnItemId($returnItemId)
  {
    $this->returnItemId = $returnItemId;
  }
  /** @return string */
  public function getReturnItemId()
  {
    return $this->returnItemId;
  }
  /** @param string[] */
  public function setReturnShipmentIds($returnShipmentIds)
  {
    $this->returnShipmentIds = $returnShipmentIds;
  }
  /** @return string[] */
  public function getReturnShipmentIds()
  {
    return $this->returnShipmentIds;
  }
  /** @param string */
  public function setShipmentGroupId($shipmentGroupId)
  {
    $this->shipmentGroupId = $shipmentGroupId;
  }
  /** @return string */
  public function getShipmentGroupId()
  {
    return $this->shipmentGroupId;
  }
  /** @param string */
  public function setShipmentUnitId($shipmentUnitId)
  {
    $this->shipmentUnitId = $shipmentUnitId;
  }
  /** @return string */
  public function getShipmentUnitId()
  {
    return $this->shipmentUnitId;
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

class MerchantRejectionReason extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $reasonCode;

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
  public function setReasonCode($reasonCode)
  {
    $this->reasonCode = $reasonCode;
  }
  /** @return string */
  public function getReasonCode()
  {
    return $this->reasonCode;
  }
}

class MethodQuota extends \Google\Model
{
  /** @var string */
  public $method;
  /** @var string */
  public $quotaLimit;
  /** @var string */
  public $quotaUsage;

  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string */
  public function setQuotaLimit($quotaLimit)
  {
    $this->quotaLimit = $quotaLimit;
  }
  /** @return string */
  public function getQuotaLimit()
  {
    return $this->quotaLimit;
  }
  /** @param string */
  public function setQuotaUsage($quotaUsage)
  {
    $this->quotaUsage = $quotaUsage;
  }
  /** @return string */
  public function getQuotaUsage()
  {
    return $this->quotaUsage;
  }
}

class Metrics extends \Google\Model
{
  public $aos;
  public $aovMicros;
  /** @var string */
  public $clicks;
  public $conversionRate;
  /** @var string */
  public $conversionValueMicros;
  public $conversions;
  public $ctr;
  public $daysToShip;
  /** @var string */
  public $impressions;
  public $itemDaysToShip;
  public $itemFillRate;
  /** @var string */
  public $orderedItemSalesMicros;
  /** @var string */
  public $orderedItems;
  /** @var string */
  public $orders;
  /** @var string */
  public $rejectedItems;
  public $returnRate;
  /** @var string */
  public $returnedItems;
  /** @var string */
  public $returnsMicros;
  /** @var string */
  public $shippedItemSalesMicros;
  /** @var string */
  public $shippedItems;
  /** @var string */
  public $shippedOrders;
  public $unshippedItems;
  public $unshippedOrders;

  public function setAos($aos)
  {
    $this->aos = $aos;
  }
  public function getAos()
  {
    return $this->aos;
  }
  public function setAovMicros($aovMicros)
  {
    $this->aovMicros = $aovMicros;
  }
  public function getAovMicros()
  {
    return $this->aovMicros;
  }
  /** @param string */
  public function setClicks($clicks)
  {
    $this->clicks = $clicks;
  }
  /** @return string */
  public function getClicks()
  {
    return $this->clicks;
  }
  public function setConversionRate($conversionRate)
  {
    $this->conversionRate = $conversionRate;
  }
  public function getConversionRate()
  {
    return $this->conversionRate;
  }
  /** @param string */
  public function setConversionValueMicros($conversionValueMicros)
  {
    $this->conversionValueMicros = $conversionValueMicros;
  }
  /** @return string */
  public function getConversionValueMicros()
  {
    return $this->conversionValueMicros;
  }
  public function setConversions($conversions)
  {
    $this->conversions = $conversions;
  }
  public function getConversions()
  {
    return $this->conversions;
  }
  public function setCtr($ctr)
  {
    $this->ctr = $ctr;
  }
  public function getCtr()
  {
    return $this->ctr;
  }
  public function setDaysToShip($daysToShip)
  {
    $this->daysToShip = $daysToShip;
  }
  public function getDaysToShip()
  {
    return $this->daysToShip;
  }
  /** @param string */
  public function setImpressions($impressions)
  {
    $this->impressions = $impressions;
  }
  /** @return string */
  public function getImpressions()
  {
    return $this->impressions;
  }
  public function setItemDaysToShip($itemDaysToShip)
  {
    $this->itemDaysToShip = $itemDaysToShip;
  }
  public function getItemDaysToShip()
  {
    return $this->itemDaysToShip;
  }
  public function setItemFillRate($itemFillRate)
  {
    $this->itemFillRate = $itemFillRate;
  }
  public function getItemFillRate()
  {
    return $this->itemFillRate;
  }
  /** @param string */
  public function setOrderedItemSalesMicros($orderedItemSalesMicros)
  {
    $this->orderedItemSalesMicros = $orderedItemSalesMicros;
  }
  /** @return string */
  public function getOrderedItemSalesMicros()
  {
    return $this->orderedItemSalesMicros;
  }
  /** @param string */
  public function setOrderedItems($orderedItems)
  {
    $this->orderedItems = $orderedItems;
  }
  /** @return string */
  public function getOrderedItems()
  {
    return $this->orderedItems;
  }
  /** @param string */
  public function setOrders($orders)
  {
    $this->orders = $orders;
  }
  /** @return string */
  public function getOrders()
  {
    return $this->orders;
  }
  /** @param string */
  public function setRejectedItems($rejectedItems)
  {
    $this->rejectedItems = $rejectedItems;
  }
  /** @return string */
  public function getRejectedItems()
  {
    return $this->rejectedItems;
  }
  public function setReturnRate($returnRate)
  {
    $this->returnRate = $returnRate;
  }
  public function getReturnRate()
  {
    return $this->returnRate;
  }
  /** @param string */
  public function setReturnedItems($returnedItems)
  {
    $this->returnedItems = $returnedItems;
  }
  /** @return string */
  public function getReturnedItems()
  {
    return $this->returnedItems;
  }
  /** @param string */
  public function setReturnsMicros($returnsMicros)
  {
    $this->returnsMicros = $returnsMicros;
  }
  /** @return string */
  public function getReturnsMicros()
  {
    return $this->returnsMicros;
  }
  /** @param string */
  public function setShippedItemSalesMicros($shippedItemSalesMicros)
  {
    $this->shippedItemSalesMicros = $shippedItemSalesMicros;
  }
  /** @return string */
  public function getShippedItemSalesMicros()
  {
    return $this->shippedItemSalesMicros;
  }
  /** @param string */
  public function setShippedItems($shippedItems)
  {
    $this->shippedItems = $shippedItems;
  }
  /** @return string */
  public function getShippedItems()
  {
    return $this->shippedItems;
  }
  /** @param string */
  public function setShippedOrders($shippedOrders)
  {
    $this->shippedOrders = $shippedOrders;
  }
  /** @return string */
  public function getShippedOrders()
  {
    return $this->shippedOrders;
  }
  public function setUnshippedItems($unshippedItems)
  {
    $this->unshippedItems = $unshippedItems;
  }
  public function getUnshippedItems()
  {
    return $this->unshippedItems;
  }
  public function setUnshippedOrders($unshippedOrders)
  {
    $this->unshippedOrders = $unshippedOrders;
  }
  public function getUnshippedOrders()
  {
    return $this->unshippedOrders;
  }
}

class MinimumOrderValueTable extends \Google\Collection
{
  /** @var MinimumOrderValueTableStoreCodeSetWithMov[] */
  public $storeCodeSetWithMovs;
  protected $collection_key = 'storeCodeSetWithMovs';
  protected $storeCodeSetWithMovsType = MinimumOrderValueTableStoreCodeSetWithMov::class;
  protected $storeCodeSetWithMovsDataType = 'array';
  /** @param MinimumOrderValueTableStoreCodeSetWithMov[] */
  public function setStoreCodeSetWithMovs($storeCodeSetWithMovs)
  {
    $this->storeCodeSetWithMovs = $storeCodeSetWithMovs;
  }
  /** @return MinimumOrderValueTableStoreCodeSetWithMov[] */
  public function getStoreCodeSetWithMovs()
  {
    return $this->storeCodeSetWithMovs;
  }
}

class MinimumOrderValueTableStoreCodeSetWithMov extends \Google\Collection
{
  /** @var string[] */
  public $storeCodes;
  /** @var Price */
  public $value;
  protected $collection_key = 'storeCodes';
  protected $valueType = Price::class;
  protected $valueDataType = '';
  /** @param string[] */
  public function setStoreCodes($storeCodes)
  {
    $this->storeCodes = $storeCodes;
  }
  /** @return string[] */
  public function getStoreCodes()
  {
    return $this->storeCodes;
  }
  /** @param Price */
  public function setValue(Price $value)
  {
    $this->value = $value;
  }
  /** @return Price */
  public function getValue()
  {
    return $this->value;
  }
}

class MonetaryAmount extends \Google\Model
{
  /** @var Price */
  public $priceAmount;
  /** @var Price */
  public $taxAmount;
  protected $priceAmountType = Price::class;
  protected $priceAmountDataType = '';
  protected $taxAmountType = Price::class;
  protected $taxAmountDataType = '';
  /** @param Price */
  public function setPriceAmount(Price $priceAmount)
  {
    $this->priceAmount = $priceAmount;
  }
  /** @return Price */
  public function getPriceAmount()
  {
    return $this->priceAmount;
  }
  /** @param Price */
  public function setTaxAmount(Price $taxAmount)
  {
    $this->taxAmount = $taxAmount;
  }
  /** @return Price */
  public function getTaxAmount()
  {
    return $this->taxAmount;
  }
}

class OnboardBuyOnGoogleProgramRequest extends \Google\Model
{
  /** @var string */
  public $customerServiceEmail;

  /** @param string */
  public function setCustomerServiceEmail($customerServiceEmail)
  {
    $this->customerServiceEmail = $customerServiceEmail;
  }
  /** @return string */
  public function getCustomerServiceEmail()
  {
    return $this->customerServiceEmail;
  }
}

class Order extends \Google\Collection
{
  /** @var bool */
  public $acknowledged;
  /** @var OrderOrderAnnotation[] */
  public $annotations;
  /** @var OrderAddress */
  public $billingAddress;
  /** @var OrderCustomer */
  public $customer;
  /** @var OrderDeliveryDetails */
  public $deliveryDetails;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var OrderLineItem[] */
  public $lineItems;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $merchantOrderId;
  /** @var Price */
  public $netPriceAmount;
  /** @var Price */
  public $netTaxAmount;
  /** @var string */
  public $paymentStatus;
  /** @var OrderPickupDetails */
  public $pickupDetails;
  /** @var string */
  public $placedDate;
  /** @var OrderPromotion[] */
  public $promotions;
  /** @var OrderRefund[] */
  public $refunds;
  /** @var OrderShipment[] */
  public $shipments;
  /** @var Price */
  public $shippingCost;
  /** @var Price */
  public $shippingCostTax;
  /** @var string */
  public $status;
  /** @var string */
  public $taxCollector;
  protected $collection_key = 'shipments';
  protected $annotationsType = OrderOrderAnnotation::class;
  protected $annotationsDataType = 'array';
  protected $billingAddressType = OrderAddress::class;
  protected $billingAddressDataType = '';
  protected $customerType = OrderCustomer::class;
  protected $customerDataType = '';
  protected $deliveryDetailsType = OrderDeliveryDetails::class;
  protected $deliveryDetailsDataType = '';
  protected $lineItemsType = OrderLineItem::class;
  protected $lineItemsDataType = 'array';
  protected $netPriceAmountType = Price::class;
  protected $netPriceAmountDataType = '';
  protected $netTaxAmountType = Price::class;
  protected $netTaxAmountDataType = '';
  protected $pickupDetailsType = OrderPickupDetails::class;
  protected $pickupDetailsDataType = '';
  protected $promotionsType = OrderPromotion::class;
  protected $promotionsDataType = 'array';
  protected $refundsType = OrderRefund::class;
  protected $refundsDataType = 'array';
  protected $shipmentsType = OrderShipment::class;
  protected $shipmentsDataType = 'array';
  protected $shippingCostType = Price::class;
  protected $shippingCostDataType = '';
  protected $shippingCostTaxType = Price::class;
  protected $shippingCostTaxDataType = '';
  /** @param bool */
  public function setAcknowledged($acknowledged)
  {
    $this->acknowledged = $acknowledged;
  }
  /** @return bool */
  public function getAcknowledged()
  {
    return $this->acknowledged;
  }
  /** @param OrderOrderAnnotation[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return OrderOrderAnnotation[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param OrderAddress */
  public function setBillingAddress(OrderAddress $billingAddress)
  {
    $this->billingAddress = $billingAddress;
  }
  /** @return OrderAddress */
  public function getBillingAddress()
  {
    return $this->billingAddress;
  }
  /** @param OrderCustomer */
  public function setCustomer(OrderCustomer $customer)
  {
    $this->customer = $customer;
  }
  /** @return OrderCustomer */
  public function getCustomer()
  {
    return $this->customer;
  }
  /** @param OrderDeliveryDetails */
  public function setDeliveryDetails(OrderDeliveryDetails $deliveryDetails)
  {
    $this->deliveryDetails = $deliveryDetails;
  }
  /** @return OrderDeliveryDetails */
  public function getDeliveryDetails()
  {
    return $this->deliveryDetails;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param OrderLineItem[] */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /** @return OrderLineItem[] */
  public function getLineItems()
  {
    return $this->lineItems;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMerchantOrderId($merchantOrderId)
  {
    $this->merchantOrderId = $merchantOrderId;
  }
  /** @return string */
  public function getMerchantOrderId()
  {
    return $this->merchantOrderId;
  }
  /** @param Price */
  public function setNetPriceAmount(Price $netPriceAmount)
  {
    $this->netPriceAmount = $netPriceAmount;
  }
  /** @return Price */
  public function getNetPriceAmount()
  {
    return $this->netPriceAmount;
  }
  /** @param Price */
  public function setNetTaxAmount(Price $netTaxAmount)
  {
    $this->netTaxAmount = $netTaxAmount;
  }
  /** @return Price */
  public function getNetTaxAmount()
  {
    return $this->netTaxAmount;
  }
  /** @param string */
  public function setPaymentStatus($paymentStatus)
  {
    $this->paymentStatus = $paymentStatus;
  }
  /** @return string */
  public function getPaymentStatus()
  {
    return $this->paymentStatus;
  }
  /** @param OrderPickupDetails */
  public function setPickupDetails(OrderPickupDetails $pickupDetails)
  {
    $this->pickupDetails = $pickupDetails;
  }
  /** @return OrderPickupDetails */
  public function getPickupDetails()
  {
    return $this->pickupDetails;
  }
  /** @param string */
  public function setPlacedDate($placedDate)
  {
    $this->placedDate = $placedDate;
  }
  /** @return string */
  public function getPlacedDate()
  {
    return $this->placedDate;
  }
  /** @param OrderPromotion[] */
  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  /** @return OrderPromotion[] */
  public function getPromotions()
  {
    return $this->promotions;
  }
  /** @param OrderRefund[] */
  public function setRefunds($refunds)
  {
    $this->refunds = $refunds;
  }
  /** @return OrderRefund[] */
  public function getRefunds()
  {
    return $this->refunds;
  }
  /** @param OrderShipment[] */
  public function setShipments($shipments)
  {
    $this->shipments = $shipments;
  }
  /** @return OrderShipment[] */
  public function getShipments()
  {
    return $this->shipments;
  }
  /** @param Price */
  public function setShippingCost(Price $shippingCost)
  {
    $this->shippingCost = $shippingCost;
  }
  /** @return Price */
  public function getShippingCost()
  {
    return $this->shippingCost;
  }
  /** @param Price */
  public function setShippingCostTax(Price $shippingCostTax)
  {
    $this->shippingCostTax = $shippingCostTax;
  }
  /** @return Price */
  public function getShippingCostTax()
  {
    return $this->shippingCostTax;
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
  public function setTaxCollector($taxCollector)
  {
    $this->taxCollector = $taxCollector;
  }
  /** @return string */
  public function getTaxCollector()
  {
    return $this->taxCollector;
  }
}

class OrderAddress extends \Google\Collection
{
  /** @var string */
  public $country;
  /** @var string[] */
  public $fullAddress;
  /** @var bool */
  public $isPostOfficeBox;
  /** @var string */
  public $locality;
  /** @var string */
  public $postalCode;
  /** @var string */
  public $recipientName;
  /** @var string */
  public $region;
  /** @var string[] */
  public $streetAddress;
  protected $collection_key = 'streetAddress';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string[] */
  public function setFullAddress($fullAddress)
  {
    $this->fullAddress = $fullAddress;
  }
  /** @return string[] */
  public function getFullAddress()
  {
    return $this->fullAddress;
  }
  /** @param bool */
  public function setIsPostOfficeBox($isPostOfficeBox)
  {
    $this->isPostOfficeBox = $isPostOfficeBox;
  }
  /** @return bool */
  public function getIsPostOfficeBox()
  {
    return $this->isPostOfficeBox;
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
  public function setRecipientName($recipientName)
  {
    $this->recipientName = $recipientName;
  }
  /** @return string */
  public function getRecipientName()
  {
    return $this->recipientName;
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
  /** @param string[] */
  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }
  /** @return string[] */
  public function getStreetAddress()
  {
    return $this->streetAddress;
  }
}

class OrderCancellation extends \Google\Model
{
  /** @var string */
  public $actor;
  /** @var string */
  public $creationDate;
  /** @var string */
  public $quantity;
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;

  /** @param string */
  public function setActor($actor)
  {
    $this->actor = $actor;
  }
  /** @return string */
  public function getActor()
  {
    return $this->actor;
  }
  /** @param string */
  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }
  /** @return string */
  public function getCreationDate()
  {
    return $this->creationDate;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
}

class OrderCustomer extends \Google\Model
{
  /** @var string */
  public $fullName;
  /** @var string */
  public $invoiceReceivingEmail;
  /** @var OrderCustomerLoyaltyInfo */
  public $loyaltyInfo;
  /** @var OrderCustomerMarketingRightsInfo */
  public $marketingRightsInfo;
  protected $loyaltyInfoType = OrderCustomerLoyaltyInfo::class;
  protected $loyaltyInfoDataType = '';
  protected $marketingRightsInfoType = OrderCustomerMarketingRightsInfo::class;
  protected $marketingRightsInfoDataType = '';
  /** @param string */
  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
  /** @return string */
  public function getFullName()
  {
    return $this->fullName;
  }
  /** @param string */
  public function setInvoiceReceivingEmail($invoiceReceivingEmail)
  {
    $this->invoiceReceivingEmail = $invoiceReceivingEmail;
  }
  /** @return string */
  public function getInvoiceReceivingEmail()
  {
    return $this->invoiceReceivingEmail;
  }
  /** @param OrderCustomerLoyaltyInfo */
  public function setLoyaltyInfo(OrderCustomerLoyaltyInfo $loyaltyInfo)
  {
    $this->loyaltyInfo = $loyaltyInfo;
  }
  /** @return OrderCustomerLoyaltyInfo */
  public function getLoyaltyInfo()
  {
    return $this->loyaltyInfo;
  }
  /** @param OrderCustomerMarketingRightsInfo */
  public function setMarketingRightsInfo(OrderCustomerMarketingRightsInfo $marketingRightsInfo)
  {
    $this->marketingRightsInfo = $marketingRightsInfo;
  }
  /** @return OrderCustomerMarketingRightsInfo */
  public function getMarketingRightsInfo()
  {
    return $this->marketingRightsInfo;
  }
}

class OrderCustomerLoyaltyInfo extends \Google\Model
{
  /** @var string */
  public $loyaltyNumber;
  /** @var string */
  public $name;

  /** @param string */
  public function setLoyaltyNumber($loyaltyNumber)
  {
    $this->loyaltyNumber = $loyaltyNumber;
  }
  /** @return string */
  public function getLoyaltyNumber()
  {
    return $this->loyaltyNumber;
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

class OrderCustomerMarketingRightsInfo extends \Google\Model
{
  /** @var string */
  public $explicitMarketingPreference;
  /** @var string */
  public $lastUpdatedTimestamp;
  /** @var string */
  public $marketingEmailAddress;

  /** @param string */
  public function setExplicitMarketingPreference($explicitMarketingPreference)
  {
    $this->explicitMarketingPreference = $explicitMarketingPreference;
  }
  /** @return string */
  public function getExplicitMarketingPreference()
  {
    return $this->explicitMarketingPreference;
  }
  /** @param string */
  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }
  /** @return string */
  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }
  /** @param string */
  public function setMarketingEmailAddress($marketingEmailAddress)
  {
    $this->marketingEmailAddress = $marketingEmailAddress;
  }
  /** @return string */
  public function getMarketingEmailAddress()
  {
    return $this->marketingEmailAddress;
  }
}

class OrderDeliveryDetails extends \Google\Model
{
  /** @var OrderAddress */
  public $address;
  /** @var string */
  public $phoneNumber;
  protected $addressType = OrderAddress::class;
  protected $addressDataType = '';
  /** @param OrderAddress */
  public function setAddress(OrderAddress $address)
  {
    $this->address = $address;
  }
  /** @return OrderAddress */
  public function getAddress()
  {
    return $this->address;
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
}

class OrderLineItem extends \Google\Collection
{
  /** @var OrderLineItemAdjustment[] */
  public $adjustments;
  /** @var OrderMerchantProvidedAnnotation[] */
  public $annotations;
  /** @var OrderCancellation[] */
  public $cancellations;
  /** @var string */
  public $id;
  /** @var Price */
  public $price;
  /** @var OrderLineItemProduct */
  public $product;
  /** @var string */
  public $quantityCanceled;
  /** @var string */
  public $quantityDelivered;
  /** @var string */
  public $quantityOrdered;
  /** @var string */
  public $quantityPending;
  /** @var string */
  public $quantityReadyForPickup;
  /** @var string */
  public $quantityReturned;
  /** @var string */
  public $quantityShipped;
  /** @var string */
  public $quantityUndeliverable;
  /** @var OrderLineItemReturnInfo */
  public $returnInfo;
  /** @var OrderReturn[] */
  public $returns;
  /** @var OrderLineItemShippingDetails */
  public $shippingDetails;
  /** @var Price */
  public $tax;
  protected $collection_key = 'returns';
  protected $adjustmentsType = OrderLineItemAdjustment::class;
  protected $adjustmentsDataType = 'array';
  protected $annotationsType = OrderMerchantProvidedAnnotation::class;
  protected $annotationsDataType = 'array';
  protected $cancellationsType = OrderCancellation::class;
  protected $cancellationsDataType = 'array';
  protected $priceType = Price::class;
  protected $priceDataType = '';
  protected $productType = OrderLineItemProduct::class;
  protected $productDataType = '';
  protected $returnInfoType = OrderLineItemReturnInfo::class;
  protected $returnInfoDataType = '';
  protected $returnsType = OrderReturn::class;
  protected $returnsDataType = 'array';
  protected $shippingDetailsType = OrderLineItemShippingDetails::class;
  protected $shippingDetailsDataType = '';
  protected $taxType = Price::class;
  protected $taxDataType = '';
  /** @param OrderLineItemAdjustment[] */
  public function setAdjustments($adjustments)
  {
    $this->adjustments = $adjustments;
  }
  /** @return OrderLineItemAdjustment[] */
  public function getAdjustments()
  {
    return $this->adjustments;
  }
  /** @param OrderMerchantProvidedAnnotation[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return OrderMerchantProvidedAnnotation[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param OrderCancellation[] */
  public function setCancellations($cancellations)
  {
    $this->cancellations = $cancellations;
  }
  /** @return OrderCancellation[] */
  public function getCancellations()
  {
    return $this->cancellations;
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
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param OrderLineItemProduct */
  public function setProduct(OrderLineItemProduct $product)
  {
    $this->product = $product;
  }
  /** @return OrderLineItemProduct */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param string */
  public function setQuantityCanceled($quantityCanceled)
  {
    $this->quantityCanceled = $quantityCanceled;
  }
  /** @return string */
  public function getQuantityCanceled()
  {
    return $this->quantityCanceled;
  }
  /** @param string */
  public function setQuantityDelivered($quantityDelivered)
  {
    $this->quantityDelivered = $quantityDelivered;
  }
  /** @return string */
  public function getQuantityDelivered()
  {
    return $this->quantityDelivered;
  }
  /** @param string */
  public function setQuantityOrdered($quantityOrdered)
  {
    $this->quantityOrdered = $quantityOrdered;
  }
  /** @return string */
  public function getQuantityOrdered()
  {
    return $this->quantityOrdered;
  }
  /** @param string */
  public function setQuantityPending($quantityPending)
  {
    $this->quantityPending = $quantityPending;
  }
  /** @return string */
  public function getQuantityPending()
  {
    return $this->quantityPending;
  }
  /** @param string */
  public function setQuantityReadyForPickup($quantityReadyForPickup)
  {
    $this->quantityReadyForPickup = $quantityReadyForPickup;
  }
  /** @return string */
  public function getQuantityReadyForPickup()
  {
    return $this->quantityReadyForPickup;
  }
  /** @param string */
  public function setQuantityReturned($quantityReturned)
  {
    $this->quantityReturned = $quantityReturned;
  }
  /** @return string */
  public function getQuantityReturned()
  {
    return $this->quantityReturned;
  }
  /** @param string */
  public function setQuantityShipped($quantityShipped)
  {
    $this->quantityShipped = $quantityShipped;
  }
  /** @return string */
  public function getQuantityShipped()
  {
    return $this->quantityShipped;
  }
  /** @param string */
  public function setQuantityUndeliverable($quantityUndeliverable)
  {
    $this->quantityUndeliverable = $quantityUndeliverable;
  }
  /** @return string */
  public function getQuantityUndeliverable()
  {
    return $this->quantityUndeliverable;
  }
  /** @param OrderLineItemReturnInfo */
  public function setReturnInfo(OrderLineItemReturnInfo $returnInfo)
  {
    $this->returnInfo = $returnInfo;
  }
  /** @return OrderLineItemReturnInfo */
  public function getReturnInfo()
  {
    return $this->returnInfo;
  }
  /** @param OrderReturn[] */
  public function setReturns($returns)
  {
    $this->returns = $returns;
  }
  /** @return OrderReturn[] */
  public function getReturns()
  {
    return $this->returns;
  }
  /** @param OrderLineItemShippingDetails */
  public function setShippingDetails(OrderLineItemShippingDetails $shippingDetails)
  {
    $this->shippingDetails = $shippingDetails;
  }
  /** @return OrderLineItemShippingDetails */
  public function getShippingDetails()
  {
    return $this->shippingDetails;
  }
  /** @param Price */
  public function setTax(Price $tax)
  {
    $this->tax = $tax;
  }
  /** @return Price */
  public function getTax()
  {
    return $this->tax;
  }
}

class OrderLineItemAdjustment extends \Google\Model
{
  /** @var Price */
  public $priceAdjustment;
  /** @var Price */
  public $taxAdjustment;
  /** @var string */
  public $type;
  protected $priceAdjustmentType = Price::class;
  protected $priceAdjustmentDataType = '';
  protected $taxAdjustmentType = Price::class;
  protected $taxAdjustmentDataType = '';
  /** @param Price */
  public function setPriceAdjustment(Price $priceAdjustment)
  {
    $this->priceAdjustment = $priceAdjustment;
  }
  /** @return Price */
  public function getPriceAdjustment()
  {
    return $this->priceAdjustment;
  }
  /** @param Price */
  public function setTaxAdjustment(Price $taxAdjustment)
  {
    $this->taxAdjustment = $taxAdjustment;
  }
  /** @return Price */
  public function getTaxAdjustment()
  {
    return $this->taxAdjustment;
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

class OrderLineItemProduct extends \Google\Collection
{
  /** @var string */
  public $brand;
  /** @var string */
  public $condition;
  /** @var string */
  public $contentLanguage;
  /** @var OrderLineItemProductFee[] */
  public $fees;
  /** @var string */
  public $gtin;
  /** @var string */
  public $id;
  /** @var string */
  public $imageLink;
  /** @var string */
  public $itemGroupId;
  /** @var string */
  public $mpn;
  /** @var string */
  public $offerId;
  /** @var Price */
  public $price;
  /** @var string */
  public $shownImage;
  /** @var string */
  public $targetCountry;
  /** @var string */
  public $title;
  /** @var OrderLineItemProductVariantAttribute[] */
  public $variantAttributes;
  protected $collection_key = 'variantAttributes';
  protected $feesType = OrderLineItemProductFee::class;
  protected $feesDataType = 'array';
  protected $priceType = Price::class;
  protected $priceDataType = '';
  protected $variantAttributesType = OrderLineItemProductVariantAttribute::class;
  protected $variantAttributesDataType = 'array';
  /** @param string */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param OrderLineItemProductFee[] */
  public function setFees($fees)
  {
    $this->fees = $fees;
  }
  /** @return OrderLineItemProductFee[] */
  public function getFees()
  {
    return $this->fees;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
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
  public function setImageLink($imageLink)
  {
    $this->imageLink = $imageLink;
  }
  /** @return string */
  public function getImageLink()
  {
    return $this->imageLink;
  }
  /** @param string */
  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }
  /** @return string */
  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }
  /** @param string */
  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }
  /** @return string */
  public function getMpn()
  {
    return $this->mpn;
  }
  /** @param string */
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  /** @return string */
  public function getOfferId()
  {
    return $this->offerId;
  }
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setShownImage($shownImage)
  {
    $this->shownImage = $shownImage;
  }
  /** @return string */
  public function getShownImage()
  {
    return $this->shownImage;
  }
  /** @param string */
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
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
  /** @param OrderLineItemProductVariantAttribute[] */
  public function setVariantAttributes($variantAttributes)
  {
    $this->variantAttributes = $variantAttributes;
  }
  /** @return OrderLineItemProductVariantAttribute[] */
  public function getVariantAttributes()
  {
    return $this->variantAttributes;
  }
}

class OrderLineItemProductFee extends \Google\Model
{
  /** @var Price */
  public $amount;
  /** @var string */
  public $name;
  protected $amountType = Price::class;
  protected $amountDataType = '';
  /** @param Price */
  public function setAmount(Price $amount)
  {
    $this->amount = $amount;
  }
  /** @return Price */
  public function getAmount()
  {
    return $this->amount;
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

class OrderLineItemProductVariantAttribute extends \Google\Model
{
  /** @var string */
  public $dimension;
  /** @var string */
  public $value;

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

class OrderLineItemReturnInfo extends \Google\Model
{
  /** @var int */
  public $daysToReturn;
  /** @var bool */
  public $isReturnable;
  /** @var string */
  public $policyUrl;

  /** @param int */
  public function setDaysToReturn($daysToReturn)
  {
    $this->daysToReturn = $daysToReturn;
  }
  /** @return int */
  public function getDaysToReturn()
  {
    return $this->daysToReturn;
  }
  /** @param bool */
  public function setIsReturnable($isReturnable)
  {
    $this->isReturnable = $isReturnable;
  }
  /** @return bool */
  public function getIsReturnable()
  {
    return $this->isReturnable;
  }
  /** @param string */
  public function setPolicyUrl($policyUrl)
  {
    $this->policyUrl = $policyUrl;
  }
  /** @return string */
  public function getPolicyUrl()
  {
    return $this->policyUrl;
  }
}

class OrderLineItemShippingDetails extends \Google\Model
{
  /** @var string */
  public $deliverByDate;
  /** @var OrderLineItemShippingDetailsMethod */
  public $method;
  /** @var string */
  public $pickupPromiseInMinutes;
  /** @var string */
  public $shipByDate;
  /** @var string */
  public $type;
  protected $methodType = OrderLineItemShippingDetailsMethod::class;
  protected $methodDataType = '';
  /** @param string */
  public function setDeliverByDate($deliverByDate)
  {
    $this->deliverByDate = $deliverByDate;
  }
  /** @return string */
  public function getDeliverByDate()
  {
    return $this->deliverByDate;
  }
  /** @param OrderLineItemShippingDetailsMethod */
  public function setMethod(OrderLineItemShippingDetailsMethod $method)
  {
    $this->method = $method;
  }
  /** @return OrderLineItemShippingDetailsMethod */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string */
  public function setPickupPromiseInMinutes($pickupPromiseInMinutes)
  {
    $this->pickupPromiseInMinutes = $pickupPromiseInMinutes;
  }
  /** @return string */
  public function getPickupPromiseInMinutes()
  {
    return $this->pickupPromiseInMinutes;
  }
  /** @param string */
  public function setShipByDate($shipByDate)
  {
    $this->shipByDate = $shipByDate;
  }
  /** @return string */
  public function getShipByDate()
  {
    return $this->shipByDate;
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

class OrderLineItemShippingDetailsMethod extends \Google\Model
{
  /** @var string */
  public $carrier;
  /** @var string */
  public $maxDaysInTransit;
  /** @var string */
  public $methodName;
  /** @var string */
  public $minDaysInTransit;

  /** @param string */
  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }
  /** @return string */
  public function getCarrier()
  {
    return $this->carrier;
  }
  /** @param string */
  public function setMaxDaysInTransit($maxDaysInTransit)
  {
    $this->maxDaysInTransit = $maxDaysInTransit;
  }
  /** @return string */
  public function getMaxDaysInTransit()
  {
    return $this->maxDaysInTransit;
  }
  /** @param string */
  public function setMethodName($methodName)
  {
    $this->methodName = $methodName;
  }
  /** @return string */
  public function getMethodName()
  {
    return $this->methodName;
  }
  /** @param string */
  public function setMinDaysInTransit($minDaysInTransit)
  {
    $this->minDaysInTransit = $minDaysInTransit;
  }
  /** @return string */
  public function getMinDaysInTransit()
  {
    return $this->minDaysInTransit;
  }
}

class OrderMerchantProvidedAnnotation extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
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

class OrderOrderAnnotation extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
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

class OrderPickupDetails extends \Google\Collection
{
  /** @var OrderAddress */
  public $address;
  /** @var OrderPickupDetailsCollector[] */
  public $collectors;
  /** @var string */
  public $locationId;
  /** @var string */
  public $pickupType;
  protected $collection_key = 'collectors';
  protected $addressType = OrderAddress::class;
  protected $addressDataType = '';
  protected $collectorsType = OrderPickupDetailsCollector::class;
  protected $collectorsDataType = 'array';
  /** @param OrderAddress */
  public function setAddress(OrderAddress $address)
  {
    $this->address = $address;
  }
  /** @return OrderAddress */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param OrderPickupDetailsCollector[] */
  public function setCollectors($collectors)
  {
    $this->collectors = $collectors;
  }
  /** @return OrderPickupDetailsCollector[] */
  public function getCollectors()
  {
    return $this->collectors;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
  /** @param string */
  public function setPickupType($pickupType)
  {
    $this->pickupType = $pickupType;
  }
  /** @return string */
  public function getPickupType()
  {
    return $this->pickupType;
  }
}

class OrderPickupDetailsCollector extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $phoneNumber;

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
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
}

class OrderPromotion extends \Google\Collection
{
  /** @var OrderPromotionItem[] */
  public $applicableItems;
  /** @var OrderPromotionItem[] */
  public $appliedItems;
  /** @var string */
  public $endTime;
  /** @var string */
  public $funder;
  /** @var string */
  public $merchantPromotionId;
  /** @var Price */
  public $priceValue;
  /** @var string */
  public $shortTitle;
  /** @var string */
  public $startTime;
  /** @var string */
  public $subtype;
  /** @var Price */
  public $taxValue;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  protected $collection_key = 'appliedItems';
  protected $applicableItemsType = OrderPromotionItem::class;
  protected $applicableItemsDataType = 'array';
  protected $appliedItemsType = OrderPromotionItem::class;
  protected $appliedItemsDataType = 'array';
  protected $priceValueType = Price::class;
  protected $priceValueDataType = '';
  protected $taxValueType = Price::class;
  protected $taxValueDataType = '';
  /** @param OrderPromotionItem[] */
  public function setApplicableItems($applicableItems)
  {
    $this->applicableItems = $applicableItems;
  }
  /** @return OrderPromotionItem[] */
  public function getApplicableItems()
  {
    return $this->applicableItems;
  }
  /** @param OrderPromotionItem[] */
  public function setAppliedItems($appliedItems)
  {
    $this->appliedItems = $appliedItems;
  }
  /** @return OrderPromotionItem[] */
  public function getAppliedItems()
  {
    return $this->appliedItems;
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
  /** @param string */
  public function setFunder($funder)
  {
    $this->funder = $funder;
  }
  /** @return string */
  public function getFunder()
  {
    return $this->funder;
  }
  /** @param string */
  public function setMerchantPromotionId($merchantPromotionId)
  {
    $this->merchantPromotionId = $merchantPromotionId;
  }
  /** @return string */
  public function getMerchantPromotionId()
  {
    return $this->merchantPromotionId;
  }
  /** @param Price */
  public function setPriceValue(Price $priceValue)
  {
    $this->priceValue = $priceValue;
  }
  /** @return Price */
  public function getPriceValue()
  {
    return $this->priceValue;
  }
  /** @param string */
  public function setShortTitle($shortTitle)
  {
    $this->shortTitle = $shortTitle;
  }
  /** @return string */
  public function getShortTitle()
  {
    return $this->shortTitle;
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
  public function setSubtype($subtype)
  {
    $this->subtype = $subtype;
  }
  /** @return string */
  public function getSubtype()
  {
    return $this->subtype;
  }
  /** @param Price */
  public function setTaxValue(Price $taxValue)
  {
    $this->taxValue = $taxValue;
  }
  /** @return Price */
  public function getTaxValue()
  {
    return $this->taxValue;
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

class OrderPromotionItem extends \Google\Model
{
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $offerId;
  /** @var string */
  public $productId;
  /** @var int */
  public $quantity;

  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  /** @param string */
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  /** @return string */
  public function getOfferId()
  {
    return $this->offerId;
  }
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
  /** @param int */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return int */
  public function getQuantity()
  {
    return $this->quantity;
  }
}

class OrderRefund extends \Google\Model
{
  /** @var string */
  public $actor;
  /** @var Price */
  public $amount;
  /** @var string */
  public $creationDate;
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;
  protected $amountType = Price::class;
  protected $amountDataType = '';
  /** @param string */
  public function setActor($actor)
  {
    $this->actor = $actor;
  }
  /** @return string */
  public function getActor()
  {
    return $this->actor;
  }
  /** @param Price */
  public function setAmount(Price $amount)
  {
    $this->amount = $amount;
  }
  /** @return Price */
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param string */
  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }
  /** @return string */
  public function getCreationDate()
  {
    return $this->creationDate;
  }
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
}

class OrderReportDisbursement extends \Google\Model
{
  /** @var Price */
  public $disbursementAmount;
  /** @var string */
  public $disbursementCreationDate;
  /** @var string */
  public $disbursementDate;
  /** @var string */
  public $disbursementId;
  /** @var string */
  public $merchantId;
  protected $disbursementAmountType = Price::class;
  protected $disbursementAmountDataType = '';
  /** @param Price */
  public function setDisbursementAmount(Price $disbursementAmount)
  {
    $this->disbursementAmount = $disbursementAmount;
  }
  /** @return Price */
  public function getDisbursementAmount()
  {
    return $this->disbursementAmount;
  }
  /** @param string */
  public function setDisbursementCreationDate($disbursementCreationDate)
  {
    $this->disbursementCreationDate = $disbursementCreationDate;
  }
  /** @return string */
  public function getDisbursementCreationDate()
  {
    return $this->disbursementCreationDate;
  }
  /** @param string */
  public function setDisbursementDate($disbursementDate)
  {
    $this->disbursementDate = $disbursementDate;
  }
  /** @return string */
  public function getDisbursementDate()
  {
    return $this->disbursementDate;
  }
  /** @param string */
  public function setDisbursementId($disbursementId)
  {
    $this->disbursementId = $disbursementId;
  }
  /** @return string */
  public function getDisbursementId()
  {
    return $this->disbursementId;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
}

class OrderReportTransaction extends \Google\Model
{
  /** @var Price */
  public $disbursementAmount;
  /** @var string */
  public $disbursementCreationDate;
  /** @var string */
  public $disbursementDate;
  /** @var string */
  public $disbursementId;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $merchantOrderId;
  /** @var string */
  public $orderId;
  /** @var ProductAmount */
  public $productAmount;
  /** @var string */
  public $transactionDate;
  protected $disbursementAmountType = Price::class;
  protected $disbursementAmountDataType = '';
  protected $productAmountType = ProductAmount::class;
  protected $productAmountDataType = '';
  /** @param Price */
  public function setDisbursementAmount(Price $disbursementAmount)
  {
    $this->disbursementAmount = $disbursementAmount;
  }
  /** @return Price */
  public function getDisbursementAmount()
  {
    return $this->disbursementAmount;
  }
  /** @param string */
  public function setDisbursementCreationDate($disbursementCreationDate)
  {
    $this->disbursementCreationDate = $disbursementCreationDate;
  }
  /** @return string */
  public function getDisbursementCreationDate()
  {
    return $this->disbursementCreationDate;
  }
  /** @param string */
  public function setDisbursementDate($disbursementDate)
  {
    $this->disbursementDate = $disbursementDate;
  }
  /** @return string */
  public function getDisbursementDate()
  {
    return $this->disbursementDate;
  }
  /** @param string */
  public function setDisbursementId($disbursementId)
  {
    $this->disbursementId = $disbursementId;
  }
  /** @return string */
  public function getDisbursementId()
  {
    return $this->disbursementId;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMerchantOrderId($merchantOrderId)
  {
    $this->merchantOrderId = $merchantOrderId;
  }
  /** @return string */
  public function getMerchantOrderId()
  {
    return $this->merchantOrderId;
  }
  /** @param string */
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  /** @return string */
  public function getOrderId()
  {
    return $this->orderId;
  }
  /** @param ProductAmount */
  public function setProductAmount(ProductAmount $productAmount)
  {
    $this->productAmount = $productAmount;
  }
  /** @return ProductAmount */
  public function getProductAmount()
  {
    return $this->productAmount;
  }
  /** @param string */
  public function setTransactionDate($transactionDate)
  {
    $this->transactionDate = $transactionDate;
  }
  /** @return string */
  public function getTransactionDate()
  {
    return $this->transactionDate;
  }
}

class OrderReturn extends \Google\Model
{
  /** @var string */
  public $actor;
  /** @var string */
  public $creationDate;
  /** @var string */
  public $quantity;
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;

  /** @param string */
  public function setActor($actor)
  {
    $this->actor = $actor;
  }
  /** @return string */
  public function getActor()
  {
    return $this->actor;
  }
  /** @param string */
  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }
  /** @return string */
  public function getCreationDate()
  {
    return $this->creationDate;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
}

class OrderShipment extends \Google\Collection
{
  /** @var string */
  public $carrier;
  /** @var string */
  public $creationDate;
  /** @var string */
  public $deliveryDate;
  /** @var string */
  public $id;
  /** @var OrderShipmentLineItemShipment[] */
  public $lineItems;
  /** @var OrderShipmentScheduledDeliveryDetails */
  public $scheduledDeliveryDetails;
  /** @var string */
  public $shipmentGroupId;
  /** @var string */
  public $status;
  /** @var string */
  public $trackingId;
  protected $collection_key = 'lineItems';
  protected $lineItemsType = OrderShipmentLineItemShipment::class;
  protected $lineItemsDataType = 'array';
  protected $scheduledDeliveryDetailsType = OrderShipmentScheduledDeliveryDetails::class;
  protected $scheduledDeliveryDetailsDataType = '';
  /** @param string */
  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }
  /** @return string */
  public function getCarrier()
  {
    return $this->carrier;
  }
  /** @param string */
  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }
  /** @return string */
  public function getCreationDate()
  {
    return $this->creationDate;
  }
  /** @param string */
  public function setDeliveryDate($deliveryDate)
  {
    $this->deliveryDate = $deliveryDate;
  }
  /** @return string */
  public function getDeliveryDate()
  {
    return $this->deliveryDate;
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
  /** @param OrderShipmentLineItemShipment[] */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /** @return OrderShipmentLineItemShipment[] */
  public function getLineItems()
  {
    return $this->lineItems;
  }
  /** @param OrderShipmentScheduledDeliveryDetails */
  public function setScheduledDeliveryDetails(OrderShipmentScheduledDeliveryDetails $scheduledDeliveryDetails)
  {
    $this->scheduledDeliveryDetails = $scheduledDeliveryDetails;
  }
  /** @return OrderShipmentScheduledDeliveryDetails */
  public function getScheduledDeliveryDetails()
  {
    return $this->scheduledDeliveryDetails;
  }
  /** @param string */
  public function setShipmentGroupId($shipmentGroupId)
  {
    $this->shipmentGroupId = $shipmentGroupId;
  }
  /** @return string */
  public function getShipmentGroupId()
  {
    return $this->shipmentGroupId;
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
  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
  /** @return string */
  public function getTrackingId()
  {
    return $this->trackingId;
  }
}

class OrderShipmentLineItemShipment extends \Google\Model
{
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $productId;
  /** @var string */
  public $quantity;

  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
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
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
}

class OrderShipmentScheduledDeliveryDetails extends \Google\Model
{
  /** @var string */
  public $carrierPhoneNumber;
  /** @var string */
  public $scheduledDate;

  /** @param string */
  public function setCarrierPhoneNumber($carrierPhoneNumber)
  {
    $this->carrierPhoneNumber = $carrierPhoneNumber;
  }
  /** @return string */
  public function getCarrierPhoneNumber()
  {
    return $this->carrierPhoneNumber;
  }
  /** @param string */
  public function setScheduledDate($scheduledDate)
  {
    $this->scheduledDate = $scheduledDate;
  }
  /** @return string */
  public function getScheduledDate()
  {
    return $this->scheduledDate;
  }
}

class OrderTrackingSignal extends \Google\Collection
{
  /** @var PriceAmount */
  public $customerShippingFee;
  /** @var string */
  public $deliveryPostalCode;
  /** @var string */
  public $deliveryRegionCode;
  /** @var OrderTrackingSignalLineItemDetails[] */
  public $lineItems;
  /** @var string */
  public $merchantId;
  /** @var DateTime */
  public $orderCreatedTime;
  /** @var string */
  public $orderId;
  /** @var string */
  public $orderTrackingSignalId;
  /** @var OrderTrackingSignalShipmentLineItemMapping[] */
  public $shipmentLineItemMapping;
  /** @var OrderTrackingSignalShippingInfo[] */
  public $shippingInfo;
  protected $collection_key = 'shippingInfo';
  protected $customerShippingFeeType = PriceAmount::class;
  protected $customerShippingFeeDataType = '';
  protected $lineItemsType = OrderTrackingSignalLineItemDetails::class;
  protected $lineItemsDataType = 'array';
  protected $orderCreatedTimeType = DateTime::class;
  protected $orderCreatedTimeDataType = '';
  protected $shipmentLineItemMappingType = OrderTrackingSignalShipmentLineItemMapping::class;
  protected $shipmentLineItemMappingDataType = 'array';
  protected $shippingInfoType = OrderTrackingSignalShippingInfo::class;
  protected $shippingInfoDataType = 'array';
  /** @param PriceAmount */
  public function setCustomerShippingFee(PriceAmount $customerShippingFee)
  {
    $this->customerShippingFee = $customerShippingFee;
  }
  /** @return PriceAmount */
  public function getCustomerShippingFee()
  {
    return $this->customerShippingFee;
  }
  /** @param string */
  public function setDeliveryPostalCode($deliveryPostalCode)
  {
    $this->deliveryPostalCode = $deliveryPostalCode;
  }
  /** @return string */
  public function getDeliveryPostalCode()
  {
    return $this->deliveryPostalCode;
  }
  /** @param string */
  public function setDeliveryRegionCode($deliveryRegionCode)
  {
    $this->deliveryRegionCode = $deliveryRegionCode;
  }
  /** @return string */
  public function getDeliveryRegionCode()
  {
    return $this->deliveryRegionCode;
  }
  /** @param OrderTrackingSignalLineItemDetails[] */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /** @return OrderTrackingSignalLineItemDetails[] */
  public function getLineItems()
  {
    return $this->lineItems;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param DateTime */
  public function setOrderCreatedTime(DateTime $orderCreatedTime)
  {
    $this->orderCreatedTime = $orderCreatedTime;
  }
  /** @return DateTime */
  public function getOrderCreatedTime()
  {
    return $this->orderCreatedTime;
  }
  /** @param string */
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  /** @return string */
  public function getOrderId()
  {
    return $this->orderId;
  }
  /** @param string */
  public function setOrderTrackingSignalId($orderTrackingSignalId)
  {
    $this->orderTrackingSignalId = $orderTrackingSignalId;
  }
  /** @return string */
  public function getOrderTrackingSignalId()
  {
    return $this->orderTrackingSignalId;
  }
  /** @param OrderTrackingSignalShipmentLineItemMapping[] */
  public function setShipmentLineItemMapping($shipmentLineItemMapping)
  {
    $this->shipmentLineItemMapping = $shipmentLineItemMapping;
  }
  /** @return OrderTrackingSignalShipmentLineItemMapping[] */
  public function getShipmentLineItemMapping()
  {
    return $this->shipmentLineItemMapping;
  }
  /** @param OrderTrackingSignalShippingInfo[] */
  public function setShippingInfo($shippingInfo)
  {
    $this->shippingInfo = $shippingInfo;
  }
  /** @return OrderTrackingSignalShippingInfo[] */
  public function getShippingInfo()
  {
    return $this->shippingInfo;
  }
}

class OrderTrackingSignalLineItemDetails extends \Google\Model
{
  /** @var string */
  public $brand;
  /** @var string */
  public $gtin;
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $mpn;
  /** @var string */
  public $productDescription;
  /** @var string */
  public $productId;
  /** @var string */
  public $productTitle;
  /** @var string */
  public $quantity;
  /** @var string */
  public $sku;
  /** @var string */
  public $upc;

  /** @param string */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
  }
  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  /** @param string */
  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }
  /** @return string */
  public function getMpn()
  {
    return $this->mpn;
  }
  /** @param string */
  public function setProductDescription($productDescription)
  {
    $this->productDescription = $productDescription;
  }
  /** @return string */
  public function getProductDescription()
  {
    return $this->productDescription;
  }
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
  public function setProductTitle($productTitle)
  {
    $this->productTitle = $productTitle;
  }
  /** @return string */
  public function getProductTitle()
  {
    return $this->productTitle;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
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
  /** @param string */
  public function setUpc($upc)
  {
    $this->upc = $upc;
  }
  /** @return string */
  public function getUpc()
  {
    return $this->upc;
  }
}

class OrderTrackingSignalShipmentLineItemMapping extends \Google\Model
{
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $quantity;
  /** @var string */
  public $shipmentId;

  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /** @param string */
  public function setShipmentId($shipmentId)
  {
    $this->shipmentId = $shipmentId;
  }
  /** @return string */
  public function getShipmentId()
  {
    return $this->shipmentId;
  }
}

class OrderTrackingSignalShippingInfo extends \Google\Model
{
  /** @var DateTime */
  public $actualDeliveryTime;
  /** @var string */
  public $carrierName;
  /** @var string */
  public $carrierServiceName;
  /** @var DateTime */
  public $earliestDeliveryPromiseTime;
  /** @var DateTime */
  public $latestDeliveryPromiseTime;
  /** @var string */
  public $originPostalCode;
  /** @var string */
  public $originRegionCode;
  /** @var string */
  public $shipmentId;
  /** @var DateTime */
  public $shippedTime;
  /** @var string */
  public $shippingStatus;
  /** @var string */
  public $trackingId;
  protected $actualDeliveryTimeType = DateTime::class;
  protected $actualDeliveryTimeDataType = '';
  protected $earliestDeliveryPromiseTimeType = DateTime::class;
  protected $earliestDeliveryPromiseTimeDataType = '';
  protected $latestDeliveryPromiseTimeType = DateTime::class;
  protected $latestDeliveryPromiseTimeDataType = '';
  protected $shippedTimeType = DateTime::class;
  protected $shippedTimeDataType = '';
  /** @param DateTime */
  public function setActualDeliveryTime(DateTime $actualDeliveryTime)
  {
    $this->actualDeliveryTime = $actualDeliveryTime;
  }
  /** @return DateTime */
  public function getActualDeliveryTime()
  {
    return $this->actualDeliveryTime;
  }
  /** @param string */
  public function setCarrierName($carrierName)
  {
    $this->carrierName = $carrierName;
  }
  /** @return string */
  public function getCarrierName()
  {
    return $this->carrierName;
  }
  /** @param string */
  public function setCarrierServiceName($carrierServiceName)
  {
    $this->carrierServiceName = $carrierServiceName;
  }
  /** @return string */
  public function getCarrierServiceName()
  {
    return $this->carrierServiceName;
  }
  /** @param DateTime */
  public function setEarliestDeliveryPromiseTime(DateTime $earliestDeliveryPromiseTime)
  {
    $this->earliestDeliveryPromiseTime = $earliestDeliveryPromiseTime;
  }
  /** @return DateTime */
  public function getEarliestDeliveryPromiseTime()
  {
    return $this->earliestDeliveryPromiseTime;
  }
  /** @param DateTime */
  public function setLatestDeliveryPromiseTime(DateTime $latestDeliveryPromiseTime)
  {
    $this->latestDeliveryPromiseTime = $latestDeliveryPromiseTime;
  }
  /** @return DateTime */
  public function getLatestDeliveryPromiseTime()
  {
    return $this->latestDeliveryPromiseTime;
  }
  /** @param string */
  public function setOriginPostalCode($originPostalCode)
  {
    $this->originPostalCode = $originPostalCode;
  }
  /** @return string */
  public function getOriginPostalCode()
  {
    return $this->originPostalCode;
  }
  /** @param string */
  public function setOriginRegionCode($originRegionCode)
  {
    $this->originRegionCode = $originRegionCode;
  }
  /** @return string */
  public function getOriginRegionCode()
  {
    return $this->originRegionCode;
  }
  /** @param string */
  public function setShipmentId($shipmentId)
  {
    $this->shipmentId = $shipmentId;
  }
  /** @return string */
  public function getShipmentId()
  {
    return $this->shipmentId;
  }
  /** @param DateTime */
  public function setShippedTime(DateTime $shippedTime)
  {
    $this->shippedTime = $shippedTime;
  }
  /** @return DateTime */
  public function getShippedTime()
  {
    return $this->shippedTime;
  }
  /** @param string */
  public function setShippingStatus($shippingStatus)
  {
    $this->shippingStatus = $shippingStatus;
  }
  /** @return string */
  public function getShippingStatus()
  {
    return $this->shippingStatus;
  }
  /** @param string */
  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
  /** @return string */
  public function getTrackingId()
  {
    return $this->trackingId;
  }
}

class OrderinvoicesCreateChargeInvoiceRequest extends \Google\Collection
{
  /** @var string */
  public $invoiceId;
  /** @var InvoiceSummary */
  public $invoiceSummary;
  /** @var ShipmentInvoiceLineItemInvoice[] */
  public $lineItemInvoices;
  /** @var string */
  public $operationId;
  /** @var string */
  public $shipmentGroupId;
  protected $collection_key = 'lineItemInvoices';
  protected $invoiceSummaryType = InvoiceSummary::class;
  protected $invoiceSummaryDataType = '';
  protected $lineItemInvoicesType = ShipmentInvoiceLineItemInvoice::class;
  protected $lineItemInvoicesDataType = 'array';
  /** @param string */
  public function setInvoiceId($invoiceId)
  {
    $this->invoiceId = $invoiceId;
  }
  /** @return string */
  public function getInvoiceId()
  {
    return $this->invoiceId;
  }
  /** @param InvoiceSummary */
  public function setInvoiceSummary(InvoiceSummary $invoiceSummary)
  {
    $this->invoiceSummary = $invoiceSummary;
  }
  /** @return InvoiceSummary */
  public function getInvoiceSummary()
  {
    return $this->invoiceSummary;
  }
  /** @param ShipmentInvoiceLineItemInvoice[] */
  public function setLineItemInvoices($lineItemInvoices)
  {
    $this->lineItemInvoices = $lineItemInvoices;
  }
  /** @return ShipmentInvoiceLineItemInvoice[] */
  public function getLineItemInvoices()
  {
    return $this->lineItemInvoices;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /** @param string */
  public function setShipmentGroupId($shipmentGroupId)
  {
    $this->shipmentGroupId = $shipmentGroupId;
  }
  /** @return string */
  public function getShipmentGroupId()
  {
    return $this->shipmentGroupId;
  }
}

class OrderinvoicesCreateChargeInvoiceResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrderinvoicesCreateRefundInvoiceRequest extends \Google\Collection
{
  /** @var string */
  public $invoiceId;
  /** @var string */
  public $operationId;
  /** @var OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceRefundOption */
  public $refundOnlyOption;
  /** @var OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceReturnOption */
  public $returnOption;
  /** @var ShipmentInvoice[] */
  public $shipmentInvoices;
  protected $collection_key = 'shipmentInvoices';
  protected $refundOnlyOptionType = OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceRefundOption::class;
  protected $refundOnlyOptionDataType = '';
  protected $returnOptionType = OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceReturnOption::class;
  protected $returnOptionDataType = '';
  protected $shipmentInvoicesType = ShipmentInvoice::class;
  protected $shipmentInvoicesDataType = 'array';
  /** @param string */
  public function setInvoiceId($invoiceId)
  {
    $this->invoiceId = $invoiceId;
  }
  /** @return string */
  public function getInvoiceId()
  {
    return $this->invoiceId;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /** @param OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceRefundOption */
  public function setRefundOnlyOption(OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceRefundOption $refundOnlyOption)
  {
    $this->refundOnlyOption = $refundOnlyOption;
  }
  /** @return OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceRefundOption */
  public function getRefundOnlyOption()
  {
    return $this->refundOnlyOption;
  }
  /** @param OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceReturnOption */
  public function setReturnOption(OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceReturnOption $returnOption)
  {
    $this->returnOption = $returnOption;
  }
  /** @return OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceReturnOption */
  public function getReturnOption()
  {
    return $this->returnOption;
  }
  /** @param ShipmentInvoice[] */
  public function setShipmentInvoices($shipmentInvoices)
  {
    $this->shipmentInvoices = $shipmentInvoices;
  }
  /** @return ShipmentInvoice[] */
  public function getShipmentInvoices()
  {
    return $this->shipmentInvoices;
  }
}

class OrderinvoicesCreateRefundInvoiceResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceRefundOption extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $reason;

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

class OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceReturnOption extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $reason;

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

class OrderreportsListDisbursementsResponse extends \Google\Collection
{
  /** @var OrderReportDisbursement[] */
  public $disbursements;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'disbursements';
  protected $disbursementsType = OrderReportDisbursement::class;
  protected $disbursementsDataType = 'array';
  /** @param OrderReportDisbursement[] */
  public function setDisbursements($disbursements)
  {
    $this->disbursements = $disbursements;
  }
  /** @return OrderReportDisbursement[] */
  public function getDisbursements()
  {
    return $this->disbursements;
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

class OrderreportsListTransactionsResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var OrderReportTransaction[] */
  public $transactions;
  protected $collection_key = 'transactions';
  protected $transactionsType = OrderReportTransaction::class;
  protected $transactionsDataType = 'array';
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
  /** @param OrderReportTransaction[] */
  public function setTransactions($transactions)
  {
    $this->transactions = $transactions;
  }
  /** @return OrderReportTransaction[] */
  public function getTransactions()
  {
    return $this->transactions;
  }
}

class OrderreturnsAcknowledgeRequest extends \Google\Model
{
  /** @var string */
  public $operationId;

  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
}

class OrderreturnsAcknowledgeResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrderreturnsCreateOrderReturnRequest extends \Google\Collection
{
  /** @var OrderreturnsLineItem[] */
  public $lineItems;
  /** @var string */
  public $operationId;
  /** @var string */
  public $orderId;
  /** @var string */
  public $returnMethodType;
  protected $collection_key = 'lineItems';
  protected $lineItemsType = OrderreturnsLineItem::class;
  protected $lineItemsDataType = 'array';
  /** @param OrderreturnsLineItem[] */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /** @return OrderreturnsLineItem[] */
  public function getLineItems()
  {
    return $this->lineItems;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /** @param string */
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  /** @return string */
  public function getOrderId()
  {
    return $this->orderId;
  }
  /** @param string */
  public function setReturnMethodType($returnMethodType)
  {
    $this->returnMethodType = $returnMethodType;
  }
  /** @return string */
  public function getReturnMethodType()
  {
    return $this->returnMethodType;
  }
}

class OrderreturnsCreateOrderReturnResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;
  /** @var MerchantOrderReturn */
  public $orderReturn;
  protected $orderReturnType = MerchantOrderReturn::class;
  protected $orderReturnDataType = '';
  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
  /** @param MerchantOrderReturn */
  public function setOrderReturn(MerchantOrderReturn $orderReturn)
  {
    $this->orderReturn = $orderReturn;
  }
  /** @return MerchantOrderReturn */
  public function getOrderReturn()
  {
    return $this->orderReturn;
  }
}

class OrderreturnsLineItem extends \Google\Model
{
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $productId;
  /** @var string */
  public $quantity;

  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
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
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
}

class OrderreturnsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var MerchantOrderReturn[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = MerchantOrderReturn::class;
  protected $resourcesDataType = 'array';
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
  /** @param MerchantOrderReturn[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return MerchantOrderReturn[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class OrderreturnsPartialRefund extends \Google\Model
{
  /** @var Price */
  public $priceAmount;
  /** @var Price */
  public $taxAmount;
  protected $priceAmountType = Price::class;
  protected $priceAmountDataType = '';
  protected $taxAmountType = Price::class;
  protected $taxAmountDataType = '';
  /** @param Price */
  public function setPriceAmount(Price $priceAmount)
  {
    $this->priceAmount = $priceAmount;
  }
  /** @return Price */
  public function getPriceAmount()
  {
    return $this->priceAmount;
  }
  /** @param Price */
  public function setTaxAmount(Price $taxAmount)
  {
    $this->taxAmount = $taxAmount;
  }
  /** @return Price */
  public function getTaxAmount()
  {
    return $this->taxAmount;
  }
}

class OrderreturnsProcessRequest extends \Google\Collection
{
  /** @var bool */
  public $fullChargeReturnShippingCost;
  /** @var string */
  public $operationId;
  /** @var OrderreturnsRefundOperation */
  public $refundShippingFee;
  /** @var OrderreturnsReturnItem[] */
  public $returnItems;
  protected $collection_key = 'returnItems';
  protected $refundShippingFeeType = OrderreturnsRefundOperation::class;
  protected $refundShippingFeeDataType = '';
  protected $returnItemsType = OrderreturnsReturnItem::class;
  protected $returnItemsDataType = 'array';
  /** @param bool */
  public function setFullChargeReturnShippingCost($fullChargeReturnShippingCost)
  {
    $this->fullChargeReturnShippingCost = $fullChargeReturnShippingCost;
  }
  /** @return bool */
  public function getFullChargeReturnShippingCost()
  {
    return $this->fullChargeReturnShippingCost;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /** @param OrderreturnsRefundOperation */
  public function setRefundShippingFee(OrderreturnsRefundOperation $refundShippingFee)
  {
    $this->refundShippingFee = $refundShippingFee;
  }
  /** @return OrderreturnsRefundOperation */
  public function getRefundShippingFee()
  {
    return $this->refundShippingFee;
  }
  /** @param OrderreturnsReturnItem[] */
  public function setReturnItems($returnItems)
  {
    $this->returnItems = $returnItems;
  }
  /** @return OrderreturnsReturnItem[] */
  public function getReturnItems()
  {
    return $this->returnItems;
  }
}

class OrderreturnsProcessResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrderreturnsRefundOperation extends \Google\Model
{
  /** @var bool */
  public $fullRefund;
  /** @var OrderreturnsPartialRefund */
  public $partialRefund;
  /** @var string */
  public $paymentType;
  /** @var string */
  public $reasonText;
  /** @var string */
  public $returnRefundReason;
  protected $partialRefundType = OrderreturnsPartialRefund::class;
  protected $partialRefundDataType = '';
  /** @param bool */
  public function setFullRefund($fullRefund)
  {
    $this->fullRefund = $fullRefund;
  }
  /** @return bool */
  public function getFullRefund()
  {
    return $this->fullRefund;
  }
  /** @param OrderreturnsPartialRefund */
  public function setPartialRefund(OrderreturnsPartialRefund $partialRefund)
  {
    $this->partialRefund = $partialRefund;
  }
  /** @return OrderreturnsPartialRefund */
  public function getPartialRefund()
  {
    return $this->partialRefund;
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
  /** @param string */
  public function setReturnRefundReason($returnRefundReason)
  {
    $this->returnRefundReason = $returnRefundReason;
  }
  /** @return string */
  public function getReturnRefundReason()
  {
    return $this->returnRefundReason;
  }
}

class OrderreturnsRejectOperation extends \Google\Model
{
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;

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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
}

class OrderreturnsReturnItem extends \Google\Model
{
  /** @var OrderreturnsRefundOperation */
  public $refund;
  /** @var OrderreturnsRejectOperation */
  public $reject;
  /** @var string */
  public $returnItemId;
  protected $refundType = OrderreturnsRefundOperation::class;
  protected $refundDataType = '';
  protected $rejectType = OrderreturnsRejectOperation::class;
  protected $rejectDataType = '';
  /** @param OrderreturnsRefundOperation */
  public function setRefund(OrderreturnsRefundOperation $refund)
  {
    $this->refund = $refund;
  }
  /** @return OrderreturnsRefundOperation */
  public function getRefund()
  {
    return $this->refund;
  }
  /** @param OrderreturnsRejectOperation */
  public function setReject(OrderreturnsRejectOperation $reject)
  {
    $this->reject = $reject;
  }
  /** @return OrderreturnsRejectOperation */
  public function getReject()
  {
    return $this->reject;
  }
  /** @param string */
  public function setReturnItemId($returnItemId)
  {
    $this->returnItemId = $returnItemId;
  }
  /** @return string */
  public function getReturnItemId()
  {
    return $this->returnItemId;
  }
}

class OrdersAcknowledgeRequest extends \Google\Model
{
  /** @var string */
  public $operationId;

  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
}

class OrdersAcknowledgeResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersAdvanceTestOrderResponse extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class OrdersCancelLineItemRequest extends \Google\Model
{
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $operationId;
  /** @var string */
  public $productId;
  /** @var string */
  public $quantity;
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;

  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
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
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
}

class OrdersCancelLineItemResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersCancelRequest extends \Google\Model
{
  /** @var string */
  public $operationId;
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;

  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
}

class OrdersCancelResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersCancelTestOrderByCustomerRequest extends \Google\Model
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

class OrdersCancelTestOrderByCustomerResponse extends \Google\Model
{
  /** @var string */
  public $kind;

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
}

class OrdersCreateTestOrderRequest extends \Google\Model
{
  /** @var string */
  public $country;
  /** @var string */
  public $templateName;
  /** @var TestOrder */
  public $testOrder;
  protected $testOrderType = TestOrder::class;
  protected $testOrderDataType = '';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setTemplateName($templateName)
  {
    $this->templateName = $templateName;
  }
  /** @return string */
  public function getTemplateName()
  {
    return $this->templateName;
  }
  /** @param TestOrder */
  public function setTestOrder(TestOrder $testOrder)
  {
    $this->testOrder = $testOrder;
  }
  /** @return TestOrder */
  public function getTestOrder()
  {
    return $this->testOrder;
  }
}

class OrdersCreateTestOrderResponse extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $orderId;

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
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  /** @return string */
  public function getOrderId()
  {
    return $this->orderId;
  }
}

class OrdersCreateTestReturnRequest extends \Google\Collection
{
  /** @var OrdersCustomBatchRequestEntryCreateTestReturnReturnItem[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = OrdersCustomBatchRequestEntryCreateTestReturnReturnItem::class;
  protected $itemsDataType = 'array';
  /** @param OrdersCustomBatchRequestEntryCreateTestReturnReturnItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return OrdersCustomBatchRequestEntryCreateTestReturnReturnItem[] */
  public function getItems()
  {
    return $this->items;
  }
}

class OrdersCreateTestReturnResponse extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $returnId;

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
  public function setReturnId($returnId)
  {
    $this->returnId = $returnId;
  }
  /** @return string */
  public function getReturnId()
  {
    return $this->returnId;
  }
}

class OrdersCustomBatchRequestEntryCreateTestReturnReturnItem extends \Google\Model
{
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $quantity;

  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
}

class OrdersCustomBatchRequestEntryRefundItemItem extends \Google\Model
{
  /** @var MonetaryAmount */
  public $amount;
  /** @var bool */
  public $fullRefund;
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $productId;
  /** @var int */
  public $quantity;
  protected $amountType = MonetaryAmount::class;
  protected $amountDataType = '';
  /** @param MonetaryAmount */
  public function setAmount(MonetaryAmount $amount)
  {
    $this->amount = $amount;
  }
  /** @return MonetaryAmount */
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param bool */
  public function setFullRefund($fullRefund)
  {
    $this->fullRefund = $fullRefund;
  }
  /** @return bool */
  public function getFullRefund()
  {
    return $this->fullRefund;
  }
  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
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
  /** @param int */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return int */
  public function getQuantity()
  {
    return $this->quantity;
  }
}

class OrdersCustomBatchRequestEntryRefundItemShipping extends \Google\Model
{
  /** @var Price */
  public $amount;
  /** @var bool */
  public $fullRefund;
  protected $amountType = Price::class;
  protected $amountDataType = '';
  /** @param Price */
  public function setAmount(Price $amount)
  {
    $this->amount = $amount;
  }
  /** @return Price */
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param bool */
  public function setFullRefund($fullRefund)
  {
    $this->fullRefund = $fullRefund;
  }
  /** @return bool */
  public function getFullRefund()
  {
    return $this->fullRefund;
  }
}

class OrdersCustomBatchRequestEntryShipLineItemsShipmentInfo extends \Google\Model
{
  /** @var string */
  public $carrier;
  /** @var string */
  public $shipmentId;
  /** @var string */
  public $trackingId;

  /** @param string */
  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }
  /** @return string */
  public function getCarrier()
  {
    return $this->carrier;
  }
  /** @param string */
  public function setShipmentId($shipmentId)
  {
    $this->shipmentId = $shipmentId;
  }
  /** @return string */
  public function getShipmentId()
  {
    return $this->shipmentId;
  }
  /** @param string */
  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
  /** @return string */
  public function getTrackingId()
  {
    return $this->trackingId;
  }
}

class OrdersCustomBatchRequestEntryUpdateShipmentScheduledDeliveryDetails extends \Google\Model
{
  /** @var string */
  public $carrierPhoneNumber;
  /** @var string */
  public $scheduledDate;

  /** @param string */
  public function setCarrierPhoneNumber($carrierPhoneNumber)
  {
    $this->carrierPhoneNumber = $carrierPhoneNumber;
  }
  /** @return string */
  public function getCarrierPhoneNumber()
  {
    return $this->carrierPhoneNumber;
  }
  /** @param string */
  public function setScheduledDate($scheduledDate)
  {
    $this->scheduledDate = $scheduledDate;
  }
  /** @return string */
  public function getScheduledDate()
  {
    return $this->scheduledDate;
  }
}

class OrdersGetByMerchantOrderIdResponse extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var Order */
  public $order;
  protected $orderType = Order::class;
  protected $orderDataType = '';
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
  /** @param Order */
  public function setOrder(Order $order)
  {
    $this->order = $order;
  }
  /** @return Order */
  public function getOrder()
  {
    return $this->order;
  }
}

class OrdersGetTestOrderTemplateResponse extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var TestOrder */
  public $template;
  protected $templateType = TestOrder::class;
  protected $templateDataType = '';
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
  /** @param TestOrder */
  public function setTemplate(TestOrder $template)
  {
    $this->template = $template;
  }
  /** @return TestOrder */
  public function getTemplate()
  {
    return $this->template;
  }
}

class OrdersInStoreRefundLineItemRequest extends \Google\Model
{
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $operationId;
  /** @var Price */
  public $priceAmount;
  /** @var string */
  public $productId;
  /** @var string */
  public $quantity;
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;
  /** @var Price */
  public $taxAmount;
  protected $priceAmountType = Price::class;
  protected $priceAmountDataType = '';
  protected $taxAmountType = Price::class;
  protected $taxAmountDataType = '';
  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /** @param Price */
  public function setPriceAmount(Price $priceAmount)
  {
    $this->priceAmount = $priceAmount;
  }
  /** @return Price */
  public function getPriceAmount()
  {
    return $this->priceAmount;
  }
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
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
  /** @param Price */
  public function setTaxAmount(Price $taxAmount)
  {
    $this->taxAmount = $taxAmount;
  }
  /** @return Price */
  public function getTaxAmount()
  {
    return $this->taxAmount;
  }
}

class OrdersInStoreRefundLineItemResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Order[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = Order::class;
  protected $resourcesDataType = 'array';
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
  /** @param Order[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return Order[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class OrdersRefundItemRequest extends \Google\Collection
{
  /** @var OrdersCustomBatchRequestEntryRefundItemItem[] */
  public $items;
  /** @var string */
  public $operationId;
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;
  /** @var OrdersCustomBatchRequestEntryRefundItemShipping */
  public $shipping;
  protected $collection_key = 'items';
  protected $itemsType = OrdersCustomBatchRequestEntryRefundItemItem::class;
  protected $itemsDataType = 'array';
  protected $shippingType = OrdersCustomBatchRequestEntryRefundItemShipping::class;
  protected $shippingDataType = '';
  /** @param OrdersCustomBatchRequestEntryRefundItemItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return OrdersCustomBatchRequestEntryRefundItemItem[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
  /** @param OrdersCustomBatchRequestEntryRefundItemShipping */
  public function setShipping(OrdersCustomBatchRequestEntryRefundItemShipping $shipping)
  {
    $this->shipping = $shipping;
  }
  /** @return OrdersCustomBatchRequestEntryRefundItemShipping */
  public function getShipping()
  {
    return $this->shipping;
  }
}

class OrdersRefundItemResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersRefundOrderRequest extends \Google\Model
{
  /** @var MonetaryAmount */
  public $amount;
  /** @var bool */
  public $fullRefund;
  /** @var string */
  public $operationId;
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;
  protected $amountType = MonetaryAmount::class;
  protected $amountDataType = '';
  /** @param MonetaryAmount */
  public function setAmount(MonetaryAmount $amount)
  {
    $this->amount = $amount;
  }
  /** @return MonetaryAmount */
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param bool */
  public function setFullRefund($fullRefund)
  {
    $this->fullRefund = $fullRefund;
  }
  /** @return bool */
  public function getFullRefund()
  {
    return $this->fullRefund;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
}

class OrdersRefundOrderResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersRejectReturnLineItemRequest extends \Google\Model
{
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $operationId;
  /** @var string */
  public $productId;
  /** @var string */
  public $quantity;
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;

  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
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
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
}

class OrdersRejectReturnLineItemResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersReturnRefundLineItemRequest extends \Google\Model
{
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $operationId;
  /** @var Price */
  public $priceAmount;
  /** @var string */
  public $productId;
  /** @var string */
  public $quantity;
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonText;
  /** @var Price */
  public $taxAmount;
  protected $priceAmountType = Price::class;
  protected $priceAmountDataType = '';
  protected $taxAmountType = Price::class;
  protected $taxAmountDataType = '';
  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /** @param Price */
  public function setPriceAmount(Price $priceAmount)
  {
    $this->priceAmount = $priceAmount;
  }
  /** @return Price */
  public function getPriceAmount()
  {
    return $this->priceAmount;
  }
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
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
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
  /** @param string */
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  /** @return string */
  public function getReasonText()
  {
    return $this->reasonText;
  }
  /** @param Price */
  public function setTaxAmount(Price $taxAmount)
  {
    $this->taxAmount = $taxAmount;
  }
  /** @return Price */
  public function getTaxAmount()
  {
    return $this->taxAmount;
  }
}

class OrdersReturnRefundLineItemResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersSetLineItemMetadataRequest extends \Google\Collection
{
  /** @var OrderMerchantProvidedAnnotation[] */
  public $annotations;
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $operationId;
  /** @var string */
  public $productId;
  protected $collection_key = 'annotations';
  protected $annotationsType = OrderMerchantProvidedAnnotation::class;
  protected $annotationsDataType = 'array';
  /** @param OrderMerchantProvidedAnnotation[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return OrderMerchantProvidedAnnotation[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
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
}

class OrdersSetLineItemMetadataResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersShipLineItemsRequest extends \Google\Collection
{
  /** @var OrderShipmentLineItemShipment[] */
  public $lineItems;
  /** @var string */
  public $operationId;
  /** @var string */
  public $shipmentGroupId;
  /** @var OrdersCustomBatchRequestEntryShipLineItemsShipmentInfo[] */
  public $shipmentInfos;
  protected $collection_key = 'shipmentInfos';
  protected $lineItemsType = OrderShipmentLineItemShipment::class;
  protected $lineItemsDataType = 'array';
  protected $shipmentInfosType = OrdersCustomBatchRequestEntryShipLineItemsShipmentInfo::class;
  protected $shipmentInfosDataType = 'array';
  /** @param OrderShipmentLineItemShipment[] */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /** @return OrderShipmentLineItemShipment[] */
  public function getLineItems()
  {
    return $this->lineItems;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /** @param string */
  public function setShipmentGroupId($shipmentGroupId)
  {
    $this->shipmentGroupId = $shipmentGroupId;
  }
  /** @return string */
  public function getShipmentGroupId()
  {
    return $this->shipmentGroupId;
  }
  /** @param OrdersCustomBatchRequestEntryShipLineItemsShipmentInfo[] */
  public function setShipmentInfos($shipmentInfos)
  {
    $this->shipmentInfos = $shipmentInfos;
  }
  /** @return OrdersCustomBatchRequestEntryShipLineItemsShipmentInfo[] */
  public function getShipmentInfos()
  {
    return $this->shipmentInfos;
  }
}

class OrdersShipLineItemsResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersUpdateLineItemShippingDetailsRequest extends \Google\Model
{
  /** @var string */
  public $deliverByDate;
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $operationId;
  /** @var string */
  public $productId;
  /** @var string */
  public $shipByDate;

  /** @param string */
  public function setDeliverByDate($deliverByDate)
  {
    $this->deliverByDate = $deliverByDate;
  }
  /** @return string */
  public function getDeliverByDate()
  {
    return $this->deliverByDate;
  }
  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
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
  public function setShipByDate($shipByDate)
  {
    $this->shipByDate = $shipByDate;
  }
  /** @return string */
  public function getShipByDate()
  {
    return $this->shipByDate;
  }
}

class OrdersUpdateLineItemShippingDetailsResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersUpdateMerchantOrderIdRequest extends \Google\Model
{
  /** @var string */
  public $merchantOrderId;
  /** @var string */
  public $operationId;

  /** @param string */
  public function setMerchantOrderId($merchantOrderId)
  {
    $this->merchantOrderId = $merchantOrderId;
  }
  /** @return string */
  public function getMerchantOrderId()
  {
    return $this->merchantOrderId;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
}

class OrdersUpdateMerchantOrderIdResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class OrdersUpdateShipmentRequest extends \Google\Model
{
  /** @var string */
  public $carrier;
  /** @var string */
  public $deliveryDate;
  /** @var string */
  public $lastPickupDate;
  /** @var string */
  public $operationId;
  /** @var string */
  public $readyPickupDate;
  /** @var OrdersCustomBatchRequestEntryUpdateShipmentScheduledDeliveryDetails */
  public $scheduledDeliveryDetails;
  /** @var string */
  public $shipmentId;
  /** @var string */
  public $status;
  /** @var string */
  public $trackingId;
  /** @var string */
  public $undeliveredDate;
  protected $scheduledDeliveryDetailsType = OrdersCustomBatchRequestEntryUpdateShipmentScheduledDeliveryDetails::class;
  protected $scheduledDeliveryDetailsDataType = '';
  /** @param string */
  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }
  /** @return string */
  public function getCarrier()
  {
    return $this->carrier;
  }
  /** @param string */
  public function setDeliveryDate($deliveryDate)
  {
    $this->deliveryDate = $deliveryDate;
  }
  /** @return string */
  public function getDeliveryDate()
  {
    return $this->deliveryDate;
  }
  /** @param string */
  public function setLastPickupDate($lastPickupDate)
  {
    $this->lastPickupDate = $lastPickupDate;
  }
  /** @return string */
  public function getLastPickupDate()
  {
    return $this->lastPickupDate;
  }
  /** @param string */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /** @param string */
  public function setReadyPickupDate($readyPickupDate)
  {
    $this->readyPickupDate = $readyPickupDate;
  }
  /** @return string */
  public function getReadyPickupDate()
  {
    return $this->readyPickupDate;
  }
  /** @param OrdersCustomBatchRequestEntryUpdateShipmentScheduledDeliveryDetails */
  public function setScheduledDeliveryDetails(OrdersCustomBatchRequestEntryUpdateShipmentScheduledDeliveryDetails $scheduledDeliveryDetails)
  {
    $this->scheduledDeliveryDetails = $scheduledDeliveryDetails;
  }
  /** @return OrdersCustomBatchRequestEntryUpdateShipmentScheduledDeliveryDetails */
  public function getScheduledDeliveryDetails()
  {
    return $this->scheduledDeliveryDetails;
  }
  /** @param string */
  public function setShipmentId($shipmentId)
  {
    $this->shipmentId = $shipmentId;
  }
  /** @return string */
  public function getShipmentId()
  {
    return $this->shipmentId;
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
  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
  /** @return string */
  public function getTrackingId()
  {
    return $this->trackingId;
  }
  /** @param string */
  public function setUndeliveredDate($undeliveredDate)
  {
    $this->undeliveredDate = $undeliveredDate;
  }
  /** @return string */
  public function getUndeliveredDate()
  {
    return $this->undeliveredDate;
  }
}

class OrdersUpdateShipmentResponse extends \Google\Model
{
  /** @var string */
  public $executionStatus;
  /** @var string */
  public $kind;

  /** @param string */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /** @return string */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
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
}

class PauseBuyOnGoogleProgramRequest extends \Google\Model
{
}

class PaymentServiceProviderLinkInfo extends \Google\Model
{
  /** @var string */
  public $externalAccountBusinessCountry;
  /** @var string */
  public $externalAccountId;

  /** @param string */
  public function setExternalAccountBusinessCountry($externalAccountBusinessCountry)
  {
    $this->externalAccountBusinessCountry = $externalAccountBusinessCountry;
  }
  /** @return string */
  public function getExternalAccountBusinessCountry()
  {
    return $this->externalAccountBusinessCountry;
  }
  /** @param string */
  public function setExternalAccountId($externalAccountId)
  {
    $this->externalAccountId = $externalAccountId;
  }
  /** @return string */
  public function getExternalAccountId()
  {
    return $this->externalAccountId;
  }
}

class PickupCarrierService extends \Google\Model
{
  /** @var string */
  public $carrierName;
  /** @var string */
  public $serviceName;

  /** @param string */
  public function setCarrierName($carrierName)
  {
    $this->carrierName = $carrierName;
  }
  /** @return string */
  public function getCarrierName()
  {
    return $this->carrierName;
  }
  /** @param string */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
  }
}

class PickupServicesPickupService extends \Google\Model
{
  /** @var string */
  public $carrierName;
  /** @var string */
  public $country;
  /** @var string */
  public $serviceName;

  /** @param string */
  public function setCarrierName($carrierName)
  {
    $this->carrierName = $carrierName;
  }
  /** @return string */
  public function getCarrierName()
  {
    return $this->carrierName;
  }
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
  }
}

class PosCustomBatchRequest extends \Google\Collection
{
  /** @var PosCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = PosCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param PosCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return PosCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class PosCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var PosInventory */
  public $inventory;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  /** @var PosSale */
  public $sale;
  /** @var PosStore */
  public $store;
  /** @var string */
  public $storeCode;
  /** @var string */
  public $targetMerchantId;
  protected $inventoryType = PosInventory::class;
  protected $inventoryDataType = '';
  protected $saleType = PosSale::class;
  protected $saleDataType = '';
  protected $storeType = PosStore::class;
  protected $storeDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param PosInventory */
  public function setInventory(PosInventory $inventory)
  {
    $this->inventory = $inventory;
  }
  /** @return PosInventory */
  public function getInventory()
  {
    return $this->inventory;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param PosSale */
  public function setSale(PosSale $sale)
  {
    $this->sale = $sale;
  }
  /** @return PosSale */
  public function getSale()
  {
    return $this->sale;
  }
  /** @param PosStore */
  public function setStore(PosStore $store)
  {
    $this->store = $store;
  }
  /** @return PosStore */
  public function getStore()
  {
    return $this->store;
  }
  /** @param string */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  /** @param string */
  public function setTargetMerchantId($targetMerchantId)
  {
    $this->targetMerchantId = $targetMerchantId;
  }
  /** @return string */
  public function getTargetMerchantId()
  {
    return $this->targetMerchantId;
  }
}

class PosCustomBatchResponse extends \Google\Collection
{
  /** @var PosCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = PosCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param PosCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return PosCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class PosCustomBatchResponseEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var PosInventory */
  public $inventory;
  /** @var string */
  public $kind;
  /** @var PosSale */
  public $sale;
  /** @var PosStore */
  public $store;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $inventoryType = PosInventory::class;
  protected $inventoryDataType = '';
  protected $saleType = PosSale::class;
  protected $saleDataType = '';
  protected $storeType = PosStore::class;
  protected $storeDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param PosInventory */
  public function setInventory(PosInventory $inventory)
  {
    $this->inventory = $inventory;
  }
  /** @return PosInventory */
  public function getInventory()
  {
    return $this->inventory;
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
  /** @param PosSale */
  public function setSale(PosSale $sale)
  {
    $this->sale = $sale;
  }
  /** @return PosSale */
  public function getSale()
  {
    return $this->sale;
  }
  /** @param PosStore */
  public function setStore(PosStore $store)
  {
    $this->store = $store;
  }
  /** @return PosStore */
  public function getStore()
  {
    return $this->store;
  }
}

class PosDataProviders extends \Google\Collection
{
  /** @var string */
  public $country;
  /** @var PosDataProvidersPosDataProvider[] */
  public $posDataProviders;
  protected $collection_key = 'posDataProviders';
  protected $posDataProvidersType = PosDataProvidersPosDataProvider::class;
  protected $posDataProvidersDataType = 'array';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param PosDataProvidersPosDataProvider[] */
  public function setPosDataProviders($posDataProviders)
  {
    $this->posDataProviders = $posDataProviders;
  }
  /** @return PosDataProvidersPosDataProvider[] */
  public function getPosDataProviders()
  {
    return $this->posDataProviders;
  }
}

class PosDataProvidersPosDataProvider extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $fullName;
  /** @var string */
  public $providerId;

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
  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
  /** @return string */
  public function getFullName()
  {
    return $this->fullName;
  }
  /** @param string */
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  /** @return string */
  public function getProviderId()
  {
    return $this->providerId;
  }
}

class PosInventory extends \Google\Model
{
  /** @var string */
  public $contentLanguage;
  /** @var string */
  public $gtin;
  /** @var string */
  public $itemId;
  /** @var string */
  public $kind;
  /** @var Price */
  public $price;
  /** @var string */
  public $quantity;
  /** @var string */
  public $storeCode;
  /** @var string */
  public $targetCountry;
  /** @var string */
  public $timestamp;
  protected $priceType = Price::class;
  protected $priceDataType = '';
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
  }
  /** @param string */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string */
  public function getItemId()
  {
    return $this->itemId;
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
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /** @param string */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  /** @param string */
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
}

class PosInventoryRequest extends \Google\Model
{
  /** @var string */
  public $contentLanguage;
  /** @var string */
  public $gtin;
  /** @var string */
  public $itemId;
  /** @var Price */
  public $price;
  /** @var string */
  public $quantity;
  /** @var string */
  public $storeCode;
  /** @var string */
  public $targetCountry;
  /** @var string */
  public $timestamp;
  protected $priceType = Price::class;
  protected $priceDataType = '';
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
  }
  /** @param string */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string */
  public function getItemId()
  {
    return $this->itemId;
  }
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /** @param string */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  /** @param string */
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
}

class PosInventoryResponse extends \Google\Model
{
  /** @var string */
  public $contentLanguage;
  /** @var string */
  public $gtin;
  /** @var string */
  public $itemId;
  /** @var string */
  public $kind;
  /** @var Price */
  public $price;
  /** @var string */
  public $quantity;
  /** @var string */
  public $storeCode;
  /** @var string */
  public $targetCountry;
  /** @var string */
  public $timestamp;
  protected $priceType = Price::class;
  protected $priceDataType = '';
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
  }
  /** @param string */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string */
  public function getItemId()
  {
    return $this->itemId;
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
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /** @param string */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  /** @param string */
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
}

class PosListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var PosStore[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = PosStore::class;
  protected $resourcesDataType = 'array';
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
  /** @param PosStore[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return PosStore[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class PosSale extends \Google\Model
{
  /** @var string */
  public $contentLanguage;
  /** @var string */
  public $gtin;
  /** @var string */
  public $itemId;
  /** @var string */
  public $kind;
  /** @var Price */
  public $price;
  /** @var string */
  public $quantity;
  /** @var string */
  public $saleId;
  /** @var string */
  public $storeCode;
  /** @var string */
  public $targetCountry;
  /** @var string */
  public $timestamp;
  protected $priceType = Price::class;
  protected $priceDataType = '';
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
  }
  /** @param string */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string */
  public function getItemId()
  {
    return $this->itemId;
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
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /** @param string */
  public function setSaleId($saleId)
  {
    $this->saleId = $saleId;
  }
  /** @return string */
  public function getSaleId()
  {
    return $this->saleId;
  }
  /** @param string */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  /** @param string */
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
}

class PosSaleRequest extends \Google\Model
{
  /** @var string */
  public $contentLanguage;
  /** @var string */
  public $gtin;
  /** @var string */
  public $itemId;
  /** @var Price */
  public $price;
  /** @var string */
  public $quantity;
  /** @var string */
  public $saleId;
  /** @var string */
  public $storeCode;
  /** @var string */
  public $targetCountry;
  /** @var string */
  public $timestamp;
  protected $priceType = Price::class;
  protected $priceDataType = '';
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
  }
  /** @param string */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string */
  public function getItemId()
  {
    return $this->itemId;
  }
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /** @param string */
  public function setSaleId($saleId)
  {
    $this->saleId = $saleId;
  }
  /** @return string */
  public function getSaleId()
  {
    return $this->saleId;
  }
  /** @param string */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  /** @param string */
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
}

class PosSaleResponse extends \Google\Model
{
  /** @var string */
  public $contentLanguage;
  /** @var string */
  public $gtin;
  /** @var string */
  public $itemId;
  /** @var string */
  public $kind;
  /** @var Price */
  public $price;
  /** @var string */
  public $quantity;
  /** @var string */
  public $saleId;
  /** @var string */
  public $storeCode;
  /** @var string */
  public $targetCountry;
  /** @var string */
  public $timestamp;
  protected $priceType = Price::class;
  protected $priceDataType = '';
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
  }
  /** @param string */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string */
  public function getItemId()
  {
    return $this->itemId;
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
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /** @return string */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /** @param string */
  public function setSaleId($saleId)
  {
    $this->saleId = $saleId;
  }
  /** @return string */
  public function getSaleId()
  {
    return $this->saleId;
  }
  /** @param string */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  /** @param string */
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
}

class PosStore extends \Google\Collection
{
  /** @var string[] */
  public $gcidCategory;
  /** @var string */
  public $kind;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $placeId;
  /** @var string */
  public $storeAddress;
  /** @var string */
  public $storeCode;
  /** @var string */
  public $storeName;
  /** @var string */
  public $websiteUrl;
  protected $collection_key = 'gcidCategory';
  /** @param string[] */
  public function setGcidCategory($gcidCategory)
  {
    $this->gcidCategory = $gcidCategory;
  }
  /** @return string[] */
  public function getGcidCategory()
  {
    return $this->gcidCategory;
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
  /** @param string */
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  /** @return string */
  public function getPlaceId()
  {
    return $this->placeId;
  }
  /** @param string */
  public function setStoreAddress($storeAddress)
  {
    $this->storeAddress = $storeAddress;
  }
  /** @return string */
  public function getStoreAddress()
  {
    return $this->storeAddress;
  }
  /** @param string */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  /** @param string */
  public function setStoreName($storeName)
  {
    $this->storeName = $storeName;
  }
  /** @return string */
  public function getStoreName()
  {
    return $this->storeName;
  }
  /** @param string */
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  /** @return string */
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}

class PostalCodeGroup extends \Google\Collection
{
  /** @var string */
  public $country;
  /** @var string */
  public $name;
  /** @var PostalCodeRange[] */
  public $postalCodeRanges;
  protected $collection_key = 'postalCodeRanges';
  protected $postalCodeRangesType = PostalCodeRange::class;
  protected $postalCodeRangesDataType = 'array';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
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
  /** @param PostalCodeRange[] */
  public function setPostalCodeRanges($postalCodeRanges)
  {
    $this->postalCodeRanges = $postalCodeRanges;
  }
  /** @return PostalCodeRange[] */
  public function getPostalCodeRanges()
  {
    return $this->postalCodeRanges;
  }
}

class PostalCodeRange extends \Google\Model
{
  /** @var string */
  public $postalCodeRangeBegin;
  /** @var string */
  public $postalCodeRangeEnd;

  /** @param string */
  public function setPostalCodeRangeBegin($postalCodeRangeBegin)
  {
    $this->postalCodeRangeBegin = $postalCodeRangeBegin;
  }
  /** @return string */
  public function getPostalCodeRangeBegin()
  {
    return $this->postalCodeRangeBegin;
  }
  /** @param string */
  public function setPostalCodeRangeEnd($postalCodeRangeEnd)
  {
    $this->postalCodeRangeEnd = $postalCodeRangeEnd;
  }
  /** @return string */
  public function getPostalCodeRangeEnd()
  {
    return $this->postalCodeRangeEnd;
  }
}

class Price extends \Google\Model
{
  /** @var string */
  public $currency;
  /** @var string */
  public $value;

  /** @param string */
  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }
  /** @return string */
  public function getCurrency()
  {
    return $this->currency;
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

class PriceAmount extends \Google\Model
{
  /** @var string */
  public $currency;
  /** @var string */
  public $value;

  /** @param string */
  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }
  /** @return string */
  public function getCurrency()
  {
    return $this->currency;
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

class PriceCompetitiveness extends \Google\Model
{
  /** @var string */
  public $benchmarkPriceCurrencyCode;
  /** @var string */
  public $benchmarkPriceMicros;
  /** @var string */
  public $countryCode;

  /** @param string */
  public function setBenchmarkPriceCurrencyCode($benchmarkPriceCurrencyCode)
  {
    $this->benchmarkPriceCurrencyCode = $benchmarkPriceCurrencyCode;
  }
  /** @return string */
  public function getBenchmarkPriceCurrencyCode()
  {
    return $this->benchmarkPriceCurrencyCode;
  }
  /** @param string */
  public function setBenchmarkPriceMicros($benchmarkPriceMicros)
  {
    $this->benchmarkPriceMicros = $benchmarkPriceMicros;
  }
  /** @return string */
  public function getBenchmarkPriceMicros()
  {
    return $this->benchmarkPriceMicros;
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
}

class PriceInsights extends \Google\Model
{
  public $predictedClicksChangeFraction;
  public $predictedConversionsChangeFraction;
  public $predictedGrossProfitChangeFraction;
  public $predictedImpressionsChangeFraction;
  /** @var string */
  public $predictedMonthlyGrossProfitChangeCurrencyCode;
  /** @var string */
  public $predictedMonthlyGrossProfitChangeMicros;
  /** @var string */
  public $suggestedPriceCurrencyCode;
  /** @var string */
  public $suggestedPriceMicros;

  public function setPredictedClicksChangeFraction($predictedClicksChangeFraction)
  {
    $this->predictedClicksChangeFraction = $predictedClicksChangeFraction;
  }
  public function getPredictedClicksChangeFraction()
  {
    return $this->predictedClicksChangeFraction;
  }
  public function setPredictedConversionsChangeFraction($predictedConversionsChangeFraction)
  {
    $this->predictedConversionsChangeFraction = $predictedConversionsChangeFraction;
  }
  public function getPredictedConversionsChangeFraction()
  {
    return $this->predictedConversionsChangeFraction;
  }
  public function setPredictedGrossProfitChangeFraction($predictedGrossProfitChangeFraction)
  {
    $this->predictedGrossProfitChangeFraction = $predictedGrossProfitChangeFraction;
  }
  public function getPredictedGrossProfitChangeFraction()
  {
    return $this->predictedGrossProfitChangeFraction;
  }
  public function setPredictedImpressionsChangeFraction($predictedImpressionsChangeFraction)
  {
    $this->predictedImpressionsChangeFraction = $predictedImpressionsChangeFraction;
  }
  public function getPredictedImpressionsChangeFraction()
  {
    return $this->predictedImpressionsChangeFraction;
  }
  /** @param string */
  public function setPredictedMonthlyGrossProfitChangeCurrencyCode($predictedMonthlyGrossProfitChangeCurrencyCode)
  {
    $this->predictedMonthlyGrossProfitChangeCurrencyCode = $predictedMonthlyGrossProfitChangeCurrencyCode;
  }
  /** @return string */
  public function getPredictedMonthlyGrossProfitChangeCurrencyCode()
  {
    return $this->predictedMonthlyGrossProfitChangeCurrencyCode;
  }
  /** @param string */
  public function setPredictedMonthlyGrossProfitChangeMicros($predictedMonthlyGrossProfitChangeMicros)
  {
    $this->predictedMonthlyGrossProfitChangeMicros = $predictedMonthlyGrossProfitChangeMicros;
  }
  /** @return string */
  public function getPredictedMonthlyGrossProfitChangeMicros()
  {
    return $this->predictedMonthlyGrossProfitChangeMicros;
  }
  /** @param string */
  public function setSuggestedPriceCurrencyCode($suggestedPriceCurrencyCode)
  {
    $this->suggestedPriceCurrencyCode = $suggestedPriceCurrencyCode;
  }
  /** @return string */
  public function getSuggestedPriceCurrencyCode()
  {
    return $this->suggestedPriceCurrencyCode;
  }
  /** @param string */
  public function setSuggestedPriceMicros($suggestedPriceMicros)
  {
    $this->suggestedPriceMicros = $suggestedPriceMicros;
  }
  /** @return string */
  public function getSuggestedPriceMicros()
  {
    return $this->suggestedPriceMicros;
  }
}

class Product extends \Google\Collection
{
  /** @var string[] */
  public $additionalImageLinks;
  /** @var string */
  public $additionalSizeType;
  /** @var string */
  public $adsGrouping;
  /** @var string[] */
  public $adsLabels;
  /** @var string */
  public $adsRedirect;
  /** @var bool */
  public $adult;
  /** @var string */
  public $ageGroup;
  /** @var string */
  public $availability;
  /** @var string */
  public $availabilityDate;
  /** @var string */
  public $brand;
  /** @var string */
  public $canonicalLink;
  /** @var string */
  public $channel;
  /** @var string */
  public $color;
  /** @var string */
  public $condition;
  /** @var string */
  public $contentLanguage;
  /** @var Price */
  public $costOfGoodsSold;
  /** @var CustomAttribute[] */
  public $customAttributes;
  /** @var string */
  public $customLabel0;
  /** @var string */
  public $customLabel1;
  /** @var string */
  public $customLabel2;
  /** @var string */
  public $customLabel3;
  /** @var string */
  public $customLabel4;
  /** @var string */
  public $description;
  /** @var string */
  public $displayAdsId;
  /** @var string */
  public $displayAdsLink;
  /** @var string[] */
  public $displayAdsSimilarIds;
  /** @var string */
  public $displayAdsTitle;
  public $displayAdsValue;
  /** @var string */
  public $energyEfficiencyClass;
  /** @var string[] */
  public $excludedDestinations;
  /** @var string */
  public $expirationDate;
  /** @var string */
  public $externalSellerId;
  /** @var string */
  public $feedLabel;
  /** @var string */
  public $gender;
  /** @var string */
  public $googleProductCategory;
  /** @var string */
  public $gtin;
  /** @var string */
  public $id;
  /** @var bool */
  public $identifierExists;
  /** @var string */
  public $imageLink;
  /** @var string[] */
  public $includedDestinations;
  /** @var Installment */
  public $installment;
  /** @var bool */
  public $isBundle;
  /** @var string */
  public $itemGroupId;
  /** @var string */
  public $kind;
  /** @var string */
  public $link;
  /** @var string */
  public $linkTemplate;
  /** @var LoyaltyPoints */
  public $loyaltyPoints;
  /** @var string */
  public $material;
  /** @var string */
  public $maxEnergyEfficiencyClass;
  /** @var string */
  public $maxHandlingTime;
  /** @var string */
  public $minEnergyEfficiencyClass;
  /** @var string */
  public $minHandlingTime;
  /** @var string */
  public $mobileLink;
  /** @var string */
  public $mobileLinkTemplate;
  /** @var string */
  public $mpn;
  /** @var string */
  public $multipack;
  /** @var string */
  public $offerId;
  /** @var string */
  public $pattern;
  /** @var string */
  public $pause;
  /** @var string */
  public $pickupMethod;
  /** @var string */
  public $pickupSla;
  /** @var Price */
  public $price;
  /** @var ProductProductDetail[] */
  public $productDetails;
  /** @var ProductDimension */
  public $productHeight;
  /** @var string[] */
  public $productHighlights;
  /** @var ProductDimension */
  public $productLength;
  /** @var string[] */
  public $productTypes;
  /** @var ProductWeight */
  public $productWeight;
  /** @var ProductDimension */
  public $productWidth;
  /** @var string[] */
  public $promotionIds;
  /** @var Price */
  public $salePrice;
  /** @var string */
  public $salePriceEffectiveDate;
  /** @var string */
  public $sellOnGoogleQuantity;
  /** @var ProductShipping[] */
  public $shipping;
  /** @var ProductShippingDimension */
  public $shippingHeight;
  /** @var string */
  public $shippingLabel;
  /** @var ProductShippingDimension */
  public $shippingLength;
  /** @var ProductShippingWeight */
  public $shippingWeight;
  /** @var ProductShippingDimension */
  public $shippingWidth;
  /** @var string[] */
  public $shoppingAdsExcludedCountries;
  /** @var string */
  public $sizeSystem;
  /** @var string */
  public $sizeType;
  /** @var string[] */
  public $sizes;
  /** @var string */
  public $source;
  /** @var ProductSubscriptionCost */
  public $subscriptionCost;
  /** @var string */
  public $targetCountry;
  /** @var string */
  public $taxCategory;
  /** @var ProductTax[] */
  public $taxes;
  /** @var string */
  public $title;
  /** @var string */
  public $transitTimeLabel;
  /** @var ProductUnitPricingBaseMeasure */
  public $unitPricingBaseMeasure;
  /** @var ProductUnitPricingMeasure */
  public $unitPricingMeasure;
  protected $collection_key = 'taxes';
  protected $costOfGoodsSoldType = Price::class;
  protected $costOfGoodsSoldDataType = '';
  protected $customAttributesType = CustomAttribute::class;
  protected $customAttributesDataType = 'array';
  protected $installmentType = Installment::class;
  protected $installmentDataType = '';
  protected $loyaltyPointsType = LoyaltyPoints::class;
  protected $loyaltyPointsDataType = '';
  protected $priceType = Price::class;
  protected $priceDataType = '';
  protected $productDetailsType = ProductProductDetail::class;
  protected $productDetailsDataType = 'array';
  protected $productHeightType = ProductDimension::class;
  protected $productHeightDataType = '';
  protected $productLengthType = ProductDimension::class;
  protected $productLengthDataType = '';
  protected $productWeightType = ProductWeight::class;
  protected $productWeightDataType = '';
  protected $productWidthType = ProductDimension::class;
  protected $productWidthDataType = '';
  protected $salePriceType = Price::class;
  protected $salePriceDataType = '';
  protected $shippingType = ProductShipping::class;
  protected $shippingDataType = 'array';
  protected $shippingHeightType = ProductShippingDimension::class;
  protected $shippingHeightDataType = '';
  protected $shippingLengthType = ProductShippingDimension::class;
  protected $shippingLengthDataType = '';
  protected $shippingWeightType = ProductShippingWeight::class;
  protected $shippingWeightDataType = '';
  protected $shippingWidthType = ProductShippingDimension::class;
  protected $shippingWidthDataType = '';
  protected $subscriptionCostType = ProductSubscriptionCost::class;
  protected $subscriptionCostDataType = '';
  protected $taxesType = ProductTax::class;
  protected $taxesDataType = 'array';
  protected $unitPricingBaseMeasureType = ProductUnitPricingBaseMeasure::class;
  protected $unitPricingBaseMeasureDataType = '';
  protected $unitPricingMeasureType = ProductUnitPricingMeasure::class;
  protected $unitPricingMeasureDataType = '';
  /** @param string[] */
  public function setAdditionalImageLinks($additionalImageLinks)
  {
    $this->additionalImageLinks = $additionalImageLinks;
  }
  /** @return string[] */
  public function getAdditionalImageLinks()
  {
    return $this->additionalImageLinks;
  }
  /** @param string */
  public function setAdditionalSizeType($additionalSizeType)
  {
    $this->additionalSizeType = $additionalSizeType;
  }
  /** @return string */
  public function getAdditionalSizeType()
  {
    return $this->additionalSizeType;
  }
  /** @param string */
  public function setAdsGrouping($adsGrouping)
  {
    $this->adsGrouping = $adsGrouping;
  }
  /** @return string */
  public function getAdsGrouping()
  {
    return $this->adsGrouping;
  }
  /** @param string[] */
  public function setAdsLabels($adsLabels)
  {
    $this->adsLabels = $adsLabels;
  }
  /** @return string[] */
  public function getAdsLabels()
  {
    return $this->adsLabels;
  }
  /** @param string */
  public function setAdsRedirect($adsRedirect)
  {
    $this->adsRedirect = $adsRedirect;
  }
  /** @return string */
  public function getAdsRedirect()
  {
    return $this->adsRedirect;
  }
  /** @param bool */
  public function setAdult($adult)
  {
    $this->adult = $adult;
  }
  /** @return bool */
  public function getAdult()
  {
    return $this->adult;
  }
  /** @param string */
  public function setAgeGroup($ageGroup)
  {
    $this->ageGroup = $ageGroup;
  }
  /** @return string */
  public function getAgeGroup()
  {
    return $this->ageGroup;
  }
  /** @param string */
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /** @return string */
  public function getAvailability()
  {
    return $this->availability;
  }
  /** @param string */
  public function setAvailabilityDate($availabilityDate)
  {
    $this->availabilityDate = $availabilityDate;
  }
  /** @return string */
  public function getAvailabilityDate()
  {
    return $this->availabilityDate;
  }
  /** @param string */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param string */
  public function setCanonicalLink($canonicalLink)
  {
    $this->canonicalLink = $canonicalLink;
  }
  /** @return string */
  public function getCanonicalLink()
  {
    return $this->canonicalLink;
  }
  /** @param string */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /** @return string */
  public function getChannel()
  {
    return $this->channel;
  }
  /** @param string */
  public function setColor($color)
  {
    $this->color = $color;
  }
  /** @return string */
  public function getColor()
  {
    return $this->color;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param Price */
  public function setCostOfGoodsSold(Price $costOfGoodsSold)
  {
    $this->costOfGoodsSold = $costOfGoodsSold;
  }
  /** @return Price */
  public function getCostOfGoodsSold()
  {
    return $this->costOfGoodsSold;
  }
  /** @param CustomAttribute[] */
  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }
  /** @return CustomAttribute[] */
  public function getCustomAttributes()
  {
    return $this->customAttributes;
  }
  /** @param string */
  public function setCustomLabel0($customLabel0)
  {
    $this->customLabel0 = $customLabel0;
  }
  /** @return string */
  public function getCustomLabel0()
  {
    return $this->customLabel0;
  }
  /** @param string */
  public function setCustomLabel1($customLabel1)
  {
    $this->customLabel1 = $customLabel1;
  }
  /** @return string */
  public function getCustomLabel1()
  {
    return $this->customLabel1;
  }
  /** @param string */
  public function setCustomLabel2($customLabel2)
  {
    $this->customLabel2 = $customLabel2;
  }
  /** @return string */
  public function getCustomLabel2()
  {
    return $this->customLabel2;
  }
  /** @param string */
  public function setCustomLabel3($customLabel3)
  {
    $this->customLabel3 = $customLabel3;
  }
  /** @return string */
  public function getCustomLabel3()
  {
    return $this->customLabel3;
  }
  /** @param string */
  public function setCustomLabel4($customLabel4)
  {
    $this->customLabel4 = $customLabel4;
  }
  /** @return string */
  public function getCustomLabel4()
  {
    return $this->customLabel4;
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
  public function setDisplayAdsId($displayAdsId)
  {
    $this->displayAdsId = $displayAdsId;
  }
  /** @return string */
  public function getDisplayAdsId()
  {
    return $this->displayAdsId;
  }
  /** @param string */
  public function setDisplayAdsLink($displayAdsLink)
  {
    $this->displayAdsLink = $displayAdsLink;
  }
  /** @return string */
  public function getDisplayAdsLink()
  {
    return $this->displayAdsLink;
  }
  /** @param string[] */
  public function setDisplayAdsSimilarIds($displayAdsSimilarIds)
  {
    $this->displayAdsSimilarIds = $displayAdsSimilarIds;
  }
  /** @return string[] */
  public function getDisplayAdsSimilarIds()
  {
    return $this->displayAdsSimilarIds;
  }
  /** @param string */
  public function setDisplayAdsTitle($displayAdsTitle)
  {
    $this->displayAdsTitle = $displayAdsTitle;
  }
  /** @return string */
  public function getDisplayAdsTitle()
  {
    return $this->displayAdsTitle;
  }
  public function setDisplayAdsValue($displayAdsValue)
  {
    $this->displayAdsValue = $displayAdsValue;
  }
  public function getDisplayAdsValue()
  {
    return $this->displayAdsValue;
  }
  /** @param string */
  public function setEnergyEfficiencyClass($energyEfficiencyClass)
  {
    $this->energyEfficiencyClass = $energyEfficiencyClass;
  }
  /** @return string */
  public function getEnergyEfficiencyClass()
  {
    return $this->energyEfficiencyClass;
  }
  /** @param string[] */
  public function setExcludedDestinations($excludedDestinations)
  {
    $this->excludedDestinations = $excludedDestinations;
  }
  /** @return string[] */
  public function getExcludedDestinations()
  {
    return $this->excludedDestinations;
  }
  /** @param string */
  public function setExpirationDate($expirationDate)
  {
    $this->expirationDate = $expirationDate;
  }
  /** @return string */
  public function getExpirationDate()
  {
    return $this->expirationDate;
  }
  /** @param string */
  public function setExternalSellerId($externalSellerId)
  {
    $this->externalSellerId = $externalSellerId;
  }
  /** @return string */
  public function getExternalSellerId()
  {
    return $this->externalSellerId;
  }
  /** @param string */
  public function setFeedLabel($feedLabel)
  {
    $this->feedLabel = $feedLabel;
  }
  /** @return string */
  public function getFeedLabel()
  {
    return $this->feedLabel;
  }
  /** @param string */
  public function setGender($gender)
  {
    $this->gender = $gender;
  }
  /** @return string */
  public function getGender()
  {
    return $this->gender;
  }
  /** @param string */
  public function setGoogleProductCategory($googleProductCategory)
  {
    $this->googleProductCategory = $googleProductCategory;
  }
  /** @return string */
  public function getGoogleProductCategory()
  {
    return $this->googleProductCategory;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
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
  /** @param bool */
  public function setIdentifierExists($identifierExists)
  {
    $this->identifierExists = $identifierExists;
  }
  /** @return bool */
  public function getIdentifierExists()
  {
    return $this->identifierExists;
  }
  /** @param string */
  public function setImageLink($imageLink)
  {
    $this->imageLink = $imageLink;
  }
  /** @return string */
  public function getImageLink()
  {
    return $this->imageLink;
  }
  /** @param string[] */
  public function setIncludedDestinations($includedDestinations)
  {
    $this->includedDestinations = $includedDestinations;
  }
  /** @return string[] */
  public function getIncludedDestinations()
  {
    return $this->includedDestinations;
  }
  /** @param Installment */
  public function setInstallment(Installment $installment)
  {
    $this->installment = $installment;
  }
  /** @return Installment */
  public function getInstallment()
  {
    return $this->installment;
  }
  /** @param bool */
  public function setIsBundle($isBundle)
  {
    $this->isBundle = $isBundle;
  }
  /** @return bool */
  public function getIsBundle()
  {
    return $this->isBundle;
  }
  /** @param string */
  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }
  /** @return string */
  public function getItemGroupId()
  {
    return $this->itemGroupId;
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
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
  }
  /** @param string */
  public function setLinkTemplate($linkTemplate)
  {
    $this->linkTemplate = $linkTemplate;
  }
  /** @return string */
  public function getLinkTemplate()
  {
    return $this->linkTemplate;
  }
  /** @param LoyaltyPoints */
  public function setLoyaltyPoints(LoyaltyPoints $loyaltyPoints)
  {
    $this->loyaltyPoints = $loyaltyPoints;
  }
  /** @return LoyaltyPoints */
  public function getLoyaltyPoints()
  {
    return $this->loyaltyPoints;
  }
  /** @param string */
  public function setMaterial($material)
  {
    $this->material = $material;
  }
  /** @return string */
  public function getMaterial()
  {
    return $this->material;
  }
  /** @param string */
  public function setMaxEnergyEfficiencyClass($maxEnergyEfficiencyClass)
  {
    $this->maxEnergyEfficiencyClass = $maxEnergyEfficiencyClass;
  }
  /** @return string */
  public function getMaxEnergyEfficiencyClass()
  {
    return $this->maxEnergyEfficiencyClass;
  }
  /** @param string */
  public function setMaxHandlingTime($maxHandlingTime)
  {
    $this->maxHandlingTime = $maxHandlingTime;
  }
  /** @return string */
  public function getMaxHandlingTime()
  {
    return $this->maxHandlingTime;
  }
  /** @param string */
  public function setMinEnergyEfficiencyClass($minEnergyEfficiencyClass)
  {
    $this->minEnergyEfficiencyClass = $minEnergyEfficiencyClass;
  }
  /** @return string */
  public function getMinEnergyEfficiencyClass()
  {
    return $this->minEnergyEfficiencyClass;
  }
  /** @param string */
  public function setMinHandlingTime($minHandlingTime)
  {
    $this->minHandlingTime = $minHandlingTime;
  }
  /** @return string */
  public function getMinHandlingTime()
  {
    return $this->minHandlingTime;
  }
  /** @param string */
  public function setMobileLink($mobileLink)
  {
    $this->mobileLink = $mobileLink;
  }
  /** @return string */
  public function getMobileLink()
  {
    return $this->mobileLink;
  }
  /** @param string */
  public function setMobileLinkTemplate($mobileLinkTemplate)
  {
    $this->mobileLinkTemplate = $mobileLinkTemplate;
  }
  /** @return string */
  public function getMobileLinkTemplate()
  {
    return $this->mobileLinkTemplate;
  }
  /** @param string */
  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }
  /** @return string */
  public function getMpn()
  {
    return $this->mpn;
  }
  /** @param string */
  public function setMultipack($multipack)
  {
    $this->multipack = $multipack;
  }
  /** @return string */
  public function getMultipack()
  {
    return $this->multipack;
  }
  /** @param string */
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  /** @return string */
  public function getOfferId()
  {
    return $this->offerId;
  }
  /** @param string */
  public function setPattern($pattern)
  {
    $this->pattern = $pattern;
  }
  /** @return string */
  public function getPattern()
  {
    return $this->pattern;
  }
  /** @param string */
  public function setPause($pause)
  {
    $this->pause = $pause;
  }
  /** @return string */
  public function getPause()
  {
    return $this->pause;
  }
  /** @param string */
  public function setPickupMethod($pickupMethod)
  {
    $this->pickupMethod = $pickupMethod;
  }
  /** @return string */
  public function getPickupMethod()
  {
    return $this->pickupMethod;
  }
  /** @param string */
  public function setPickupSla($pickupSla)
  {
    $this->pickupSla = $pickupSla;
  }
  /** @return string */
  public function getPickupSla()
  {
    return $this->pickupSla;
  }
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param ProductProductDetail[] */
  public function setProductDetails($productDetails)
  {
    $this->productDetails = $productDetails;
  }
  /** @return ProductProductDetail[] */
  public function getProductDetails()
  {
    return $this->productDetails;
  }
  /** @param ProductDimension */
  public function setProductHeight(ProductDimension $productHeight)
  {
    $this->productHeight = $productHeight;
  }
  /** @return ProductDimension */
  public function getProductHeight()
  {
    return $this->productHeight;
  }
  /** @param string[] */
  public function setProductHighlights($productHighlights)
  {
    $this->productHighlights = $productHighlights;
  }
  /** @return string[] */
  public function getProductHighlights()
  {
    return $this->productHighlights;
  }
  /** @param ProductDimension */
  public function setProductLength(ProductDimension $productLength)
  {
    $this->productLength = $productLength;
  }
  /** @return ProductDimension */
  public function getProductLength()
  {
    return $this->productLength;
  }
  /** @param string[] */
  public function setProductTypes($productTypes)
  {
    $this->productTypes = $productTypes;
  }
  /** @return string[] */
  public function getProductTypes()
  {
    return $this->productTypes;
  }
  /** @param ProductWeight */
  public function setProductWeight(ProductWeight $productWeight)
  {
    $this->productWeight = $productWeight;
  }
  /** @return ProductWeight */
  public function getProductWeight()
  {
    return $this->productWeight;
  }
  /** @param ProductDimension */
  public function setProductWidth(ProductDimension $productWidth)
  {
    $this->productWidth = $productWidth;
  }
  /** @return ProductDimension */
  public function getProductWidth()
  {
    return $this->productWidth;
  }
  /** @param string[] */
  public function setPromotionIds($promotionIds)
  {
    $this->promotionIds = $promotionIds;
  }
  /** @return string[] */
  public function getPromotionIds()
  {
    return $this->promotionIds;
  }
  /** @param Price */
  public function setSalePrice(Price $salePrice)
  {
    $this->salePrice = $salePrice;
  }
  /** @return Price */
  public function getSalePrice()
  {
    return $this->salePrice;
  }
  /** @param string */
  public function setSalePriceEffectiveDate($salePriceEffectiveDate)
  {
    $this->salePriceEffectiveDate = $salePriceEffectiveDate;
  }
  /** @return string */
  public function getSalePriceEffectiveDate()
  {
    return $this->salePriceEffectiveDate;
  }
  /** @param string */
  public function setSellOnGoogleQuantity($sellOnGoogleQuantity)
  {
    $this->sellOnGoogleQuantity = $sellOnGoogleQuantity;
  }
  /** @return string */
  public function getSellOnGoogleQuantity()
  {
    return $this->sellOnGoogleQuantity;
  }
  /** @param ProductShipping[] */
  public function setShipping($shipping)
  {
    $this->shipping = $shipping;
  }
  /** @return ProductShipping[] */
  public function getShipping()
  {
    return $this->shipping;
  }
  /** @param ProductShippingDimension */
  public function setShippingHeight(ProductShippingDimension $shippingHeight)
  {
    $this->shippingHeight = $shippingHeight;
  }
  /** @return ProductShippingDimension */
  public function getShippingHeight()
  {
    return $this->shippingHeight;
  }
  /** @param string */
  public function setShippingLabel($shippingLabel)
  {
    $this->shippingLabel = $shippingLabel;
  }
  /** @return string */
  public function getShippingLabel()
  {
    return $this->shippingLabel;
  }
  /** @param ProductShippingDimension */
  public function setShippingLength(ProductShippingDimension $shippingLength)
  {
    $this->shippingLength = $shippingLength;
  }
  /** @return ProductShippingDimension */
  public function getShippingLength()
  {
    return $this->shippingLength;
  }
  /** @param ProductShippingWeight */
  public function setShippingWeight(ProductShippingWeight $shippingWeight)
  {
    $this->shippingWeight = $shippingWeight;
  }
  /** @return ProductShippingWeight */
  public function getShippingWeight()
  {
    return $this->shippingWeight;
  }
  /** @param ProductShippingDimension */
  public function setShippingWidth(ProductShippingDimension $shippingWidth)
  {
    $this->shippingWidth = $shippingWidth;
  }
  /** @return ProductShippingDimension */
  public function getShippingWidth()
  {
    return $this->shippingWidth;
  }
  /** @param string[] */
  public function setShoppingAdsExcludedCountries($shoppingAdsExcludedCountries)
  {
    $this->shoppingAdsExcludedCountries = $shoppingAdsExcludedCountries;
  }
  /** @return string[] */
  public function getShoppingAdsExcludedCountries()
  {
    return $this->shoppingAdsExcludedCountries;
  }
  /** @param string */
  public function setSizeSystem($sizeSystem)
  {
    $this->sizeSystem = $sizeSystem;
  }
  /** @return string */
  public function getSizeSystem()
  {
    return $this->sizeSystem;
  }
  /** @param string */
  public function setSizeType($sizeType)
  {
    $this->sizeType = $sizeType;
  }
  /** @return string */
  public function getSizeType()
  {
    return $this->sizeType;
  }
  /** @param string[] */
  public function setSizes($sizes)
  {
    $this->sizes = $sizes;
  }
  /** @return string[] */
  public function getSizes()
  {
    return $this->sizes;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
  /** @param ProductSubscriptionCost */
  public function setSubscriptionCost(ProductSubscriptionCost $subscriptionCost)
  {
    $this->subscriptionCost = $subscriptionCost;
  }
  /** @return ProductSubscriptionCost */
  public function getSubscriptionCost()
  {
    return $this->subscriptionCost;
  }
  /** @param string */
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
  }
  /** @param string */
  public function setTaxCategory($taxCategory)
  {
    $this->taxCategory = $taxCategory;
  }
  /** @return string */
  public function getTaxCategory()
  {
    return $this->taxCategory;
  }
  /** @param ProductTax[] */
  public function setTaxes($taxes)
  {
    $this->taxes = $taxes;
  }
  /** @return ProductTax[] */
  public function getTaxes()
  {
    return $this->taxes;
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
  public function setTransitTimeLabel($transitTimeLabel)
  {
    $this->transitTimeLabel = $transitTimeLabel;
  }
  /** @return string */
  public function getTransitTimeLabel()
  {
    return $this->transitTimeLabel;
  }
  /** @param ProductUnitPricingBaseMeasure */
  public function setUnitPricingBaseMeasure(ProductUnitPricingBaseMeasure $unitPricingBaseMeasure)
  {
    $this->unitPricingBaseMeasure = $unitPricingBaseMeasure;
  }
  /** @return ProductUnitPricingBaseMeasure */
  public function getUnitPricingBaseMeasure()
  {
    return $this->unitPricingBaseMeasure;
  }
  /** @param ProductUnitPricingMeasure */
  public function setUnitPricingMeasure(ProductUnitPricingMeasure $unitPricingMeasure)
  {
    $this->unitPricingMeasure = $unitPricingMeasure;
  }
  /** @return ProductUnitPricingMeasure */
  public function getUnitPricingMeasure()
  {
    return $this->unitPricingMeasure;
  }
}

class ProductAmount extends \Google\Model
{
  /** @var Price */
  public $priceAmount;
  /** @var Price */
  public $remittedTaxAmount;
  /** @var Price */
  public $taxAmount;
  protected $priceAmountType = Price::class;
  protected $priceAmountDataType = '';
  protected $remittedTaxAmountType = Price::class;
  protected $remittedTaxAmountDataType = '';
  protected $taxAmountType = Price::class;
  protected $taxAmountDataType = '';
  /** @param Price */
  public function setPriceAmount(Price $priceAmount)
  {
    $this->priceAmount = $priceAmount;
  }
  /** @return Price */
  public function getPriceAmount()
  {
    return $this->priceAmount;
  }
  /** @param Price */
  public function setRemittedTaxAmount(Price $remittedTaxAmount)
  {
    $this->remittedTaxAmount = $remittedTaxAmount;
  }
  /** @return Price */
  public function getRemittedTaxAmount()
  {
    return $this->remittedTaxAmount;
  }
  /** @param Price */
  public function setTaxAmount(Price $taxAmount)
  {
    $this->taxAmount = $taxAmount;
  }
  /** @return Price */
  public function getTaxAmount()
  {
    return $this->taxAmount;
  }
}

class ProductCluster extends \Google\Collection
{
  /** @var string */
  public $brand;
  /** @var string */
  public $brandInventoryStatus;
  /** @var string */
  public $categoryL1;
  /** @var string */
  public $categoryL2;
  /** @var string */
  public $categoryL3;
  /** @var string */
  public $categoryL4;
  /** @var string */
  public $categoryL5;
  /** @var string */
  public $inventoryStatus;
  /** @var string */
  public $title;
  /** @var string[] */
  public $variantGtins;
  protected $collection_key = 'variantGtins';
  /** @param string */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param string */
  public function setBrandInventoryStatus($brandInventoryStatus)
  {
    $this->brandInventoryStatus = $brandInventoryStatus;
  }
  /** @return string */
  public function getBrandInventoryStatus()
  {
    return $this->brandInventoryStatus;
  }
  /** @param string */
  public function setCategoryL1($categoryL1)
  {
    $this->categoryL1 = $categoryL1;
  }
  /** @return string */
  public function getCategoryL1()
  {
    return $this->categoryL1;
  }
  /** @param string */
  public function setCategoryL2($categoryL2)
  {
    $this->categoryL2 = $categoryL2;
  }
  /** @return string */
  public function getCategoryL2()
  {
    return $this->categoryL2;
  }
  /** @param string */
  public function setCategoryL3($categoryL3)
  {
    $this->categoryL3 = $categoryL3;
  }
  /** @return string */
  public function getCategoryL3()
  {
    return $this->categoryL3;
  }
  /** @param string */
  public function setCategoryL4($categoryL4)
  {
    $this->categoryL4 = $categoryL4;
  }
  /** @return string */
  public function getCategoryL4()
  {
    return $this->categoryL4;
  }
  /** @param string */
  public function setCategoryL5($categoryL5)
  {
    $this->categoryL5 = $categoryL5;
  }
  /** @return string */
  public function getCategoryL5()
  {
    return $this->categoryL5;
  }
  /** @param string */
  public function setInventoryStatus($inventoryStatus)
  {
    $this->inventoryStatus = $inventoryStatus;
  }
  /** @return string */
  public function getInventoryStatus()
  {
    return $this->inventoryStatus;
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
  /** @param string[] */
  public function setVariantGtins($variantGtins)
  {
    $this->variantGtins = $variantGtins;
  }
  /** @return string[] */
  public function getVariantGtins()
  {
    return $this->variantGtins;
  }
}

class ProductDeliveryTime extends \Google\Collection
{
  /** @var ProductDeliveryTimeAreaDeliveryTime[] */
  public $areaDeliveryTimes;
  /** @var ProductId */
  public $productId;
  protected $collection_key = 'areaDeliveryTimes';
  protected $areaDeliveryTimesType = ProductDeliveryTimeAreaDeliveryTime::class;
  protected $areaDeliveryTimesDataType = 'array';
  protected $productIdType = ProductId::class;
  protected $productIdDataType = '';
  /** @param ProductDeliveryTimeAreaDeliveryTime[] */
  public function setAreaDeliveryTimes($areaDeliveryTimes)
  {
    $this->areaDeliveryTimes = $areaDeliveryTimes;
  }
  /** @return ProductDeliveryTimeAreaDeliveryTime[] */
  public function getAreaDeliveryTimes()
  {
    return $this->areaDeliveryTimes;
  }
  /** @param ProductId */
  public function setProductId(ProductId $productId)
  {
    $this->productId = $productId;
  }
  /** @return ProductId */
  public function getProductId()
  {
    return $this->productId;
  }
}

class ProductDeliveryTimeAreaDeliveryTime extends \Google\Model
{
  /** @var DeliveryArea */
  public $deliveryArea;
  /** @var ProductDeliveryTimeAreaDeliveryTimeDeliveryTime */
  public $deliveryTime;
  protected $deliveryAreaType = DeliveryArea::class;
  protected $deliveryAreaDataType = '';
  protected $deliveryTimeType = ProductDeliveryTimeAreaDeliveryTimeDeliveryTime::class;
  protected $deliveryTimeDataType = '';
  /** @param DeliveryArea */
  public function setDeliveryArea(DeliveryArea $deliveryArea)
  {
    $this->deliveryArea = $deliveryArea;
  }
  /** @return DeliveryArea */
  public function getDeliveryArea()
  {
    return $this->deliveryArea;
  }
  /** @param ProductDeliveryTimeAreaDeliveryTimeDeliveryTime */
  public function setDeliveryTime(ProductDeliveryTimeAreaDeliveryTimeDeliveryTime $deliveryTime)
  {
    $this->deliveryTime = $deliveryTime;
  }
  /** @return ProductDeliveryTimeAreaDeliveryTimeDeliveryTime */
  public function getDeliveryTime()
  {
    return $this->deliveryTime;
  }
}

class ProductDeliveryTimeAreaDeliveryTimeDeliveryTime extends \Google\Model
{
  /** @var int */
  public $maxHandlingTimeDays;
  /** @var int */
  public $maxTransitTimeDays;
  /** @var int */
  public $minHandlingTimeDays;
  /** @var int */
  public $minTransitTimeDays;

  /** @param int */
  public function setMaxHandlingTimeDays($maxHandlingTimeDays)
  {
    $this->maxHandlingTimeDays = $maxHandlingTimeDays;
  }
  /** @return int */
  public function getMaxHandlingTimeDays()
  {
    return $this->maxHandlingTimeDays;
  }
  /** @param int */
  public function setMaxTransitTimeDays($maxTransitTimeDays)
  {
    $this->maxTransitTimeDays = $maxTransitTimeDays;
  }
  /** @return int */
  public function getMaxTransitTimeDays()
  {
    return $this->maxTransitTimeDays;
  }
  /** @param int */
  public function setMinHandlingTimeDays($minHandlingTimeDays)
  {
    $this->minHandlingTimeDays = $minHandlingTimeDays;
  }
  /** @return int */
  public function getMinHandlingTimeDays()
  {
    return $this->minHandlingTimeDays;
  }
  /** @param int */
  public function setMinTransitTimeDays($minTransitTimeDays)
  {
    $this->minTransitTimeDays = $minTransitTimeDays;
  }
  /** @return int */
  public function getMinTransitTimeDays()
  {
    return $this->minTransitTimeDays;
  }
}

class ProductDimension extends \Google\Model
{
  /** @var string */
  public $unit;
  public $value;

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
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class ProductId extends \Google\Model
{
  /** @var string */
  public $productId;

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
}

class ProductProductDetail extends \Google\Model
{
  /** @var string */
  public $attributeName;
  /** @var string */
  public $attributeValue;
  /** @var string */
  public $sectionName;

  /** @param string */
  public function setAttributeName($attributeName)
  {
    $this->attributeName = $attributeName;
  }
  /** @return string */
  public function getAttributeName()
  {
    return $this->attributeName;
  }
  /** @param string */
  public function setAttributeValue($attributeValue)
  {
    $this->attributeValue = $attributeValue;
  }
  /** @return string */
  public function getAttributeValue()
  {
    return $this->attributeValue;
  }
  /** @param string */
  public function setSectionName($sectionName)
  {
    $this->sectionName = $sectionName;
  }
  /** @return string */
  public function getSectionName()
  {
    return $this->sectionName;
  }
}

class ProductShipping extends \Google\Model
{
  /** @var string */
  public $country;
  /** @var string */
  public $locationGroupName;
  /** @var string */
  public $locationId;
  /** @var string */
  public $maxHandlingTime;
  /** @var string */
  public $maxTransitTime;
  /** @var string */
  public $minHandlingTime;
  /** @var string */
  public $minTransitTime;
  /** @var string */
  public $postalCode;
  /** @var Price */
  public $price;
  /** @var string */
  public $region;
  /** @var string */
  public $service;
  protected $priceType = Price::class;
  protected $priceDataType = '';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setLocationGroupName($locationGroupName)
  {
    $this->locationGroupName = $locationGroupName;
  }
  /** @return string */
  public function getLocationGroupName()
  {
    return $this->locationGroupName;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
  /** @param string */
  public function setMaxHandlingTime($maxHandlingTime)
  {
    $this->maxHandlingTime = $maxHandlingTime;
  }
  /** @return string */
  public function getMaxHandlingTime()
  {
    return $this->maxHandlingTime;
  }
  /** @param string */
  public function setMaxTransitTime($maxTransitTime)
  {
    $this->maxTransitTime = $maxTransitTime;
  }
  /** @return string */
  public function getMaxTransitTime()
  {
    return $this->maxTransitTime;
  }
  /** @param string */
  public function setMinHandlingTime($minHandlingTime)
  {
    $this->minHandlingTime = $minHandlingTime;
  }
  /** @return string */
  public function getMinHandlingTime()
  {
    return $this->minHandlingTime;
  }
  /** @param string */
  public function setMinTransitTime($minTransitTime)
  {
    $this->minTransitTime = $minTransitTime;
  }
  /** @return string */
  public function getMinTransitTime()
  {
    return $this->minTransitTime;
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
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
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
  /** @param string */
  public function setService($service)
  {
    $this->service = $service;
  }
  /** @return string */
  public function getService()
  {
    return $this->service;
  }
}

class ProductShippingDimension extends \Google\Model
{
  /** @var string */
  public $unit;
  public $value;

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
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class ProductShippingWeight extends \Google\Model
{
  /** @var string */
  public $unit;
  public $value;

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
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class ProductStatus extends \Google\Collection
{
  /** @var string */
  public $creationDate;
  /** @var ProductStatusDestinationStatus[] */
  public $destinationStatuses;
  /** @var string */
  public $googleExpirationDate;
  /** @var ProductStatusItemLevelIssue[] */
  public $itemLevelIssues;
  /** @var string */
  public $kind;
  /** @var string */
  public $lastUpdateDate;
  /** @var string */
  public $link;
  /** @var string */
  public $productId;
  /** @var string */
  public $title;
  protected $collection_key = 'itemLevelIssues';
  protected $destinationStatusesType = ProductStatusDestinationStatus::class;
  protected $destinationStatusesDataType = 'array';
  protected $itemLevelIssuesType = ProductStatusItemLevelIssue::class;
  protected $itemLevelIssuesDataType = 'array';
  /** @param string */
  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }
  /** @return string */
  public function getCreationDate()
  {
    return $this->creationDate;
  }
  /** @param ProductStatusDestinationStatus[] */
  public function setDestinationStatuses($destinationStatuses)
  {
    $this->destinationStatuses = $destinationStatuses;
  }
  /** @return ProductStatusDestinationStatus[] */
  public function getDestinationStatuses()
  {
    return $this->destinationStatuses;
  }
  /** @param string */
  public function setGoogleExpirationDate($googleExpirationDate)
  {
    $this->googleExpirationDate = $googleExpirationDate;
  }
  /** @return string */
  public function getGoogleExpirationDate()
  {
    return $this->googleExpirationDate;
  }
  /** @param ProductStatusItemLevelIssue[] */
  public function setItemLevelIssues($itemLevelIssues)
  {
    $this->itemLevelIssues = $itemLevelIssues;
  }
  /** @return ProductStatusItemLevelIssue[] */
  public function getItemLevelIssues()
  {
    return $this->itemLevelIssues;
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
  public function setLastUpdateDate($lastUpdateDate)
  {
    $this->lastUpdateDate = $lastUpdateDate;
  }
  /** @return string */
  public function getLastUpdateDate()
  {
    return $this->lastUpdateDate;
  }
  /** @param string */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
  }
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

class ProductStatusDestinationStatus extends \Google\Collection
{
  /** @var string[] */
  public $approvedCountries;
  /** @var string */
  public $destination;
  /** @var string[] */
  public $disapprovedCountries;
  /** @var string[] */
  public $pendingCountries;
  /** @var string */
  public $status;
  protected $collection_key = 'pendingCountries';
  /** @param string[] */
  public function setApprovedCountries($approvedCountries)
  {
    $this->approvedCountries = $approvedCountries;
  }
  /** @return string[] */
  public function getApprovedCountries()
  {
    return $this->approvedCountries;
  }
  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string[] */
  public function setDisapprovedCountries($disapprovedCountries)
  {
    $this->disapprovedCountries = $disapprovedCountries;
  }
  /** @return string[] */
  public function getDisapprovedCountries()
  {
    return $this->disapprovedCountries;
  }
  /** @param string[] */
  public function setPendingCountries($pendingCountries)
  {
    $this->pendingCountries = $pendingCountries;
  }
  /** @return string[] */
  public function getPendingCountries()
  {
    return $this->pendingCountries;
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
}

class ProductStatusItemLevelIssue extends \Google\Collection
{
  /** @var string[] */
  public $applicableCountries;
  /** @var string */
  public $attributeName;
  /** @var string */
  public $code;
  /** @var string */
  public $description;
  /** @var string */
  public $destination;
  /** @var string */
  public $detail;
  /** @var string */
  public $documentation;
  /** @var string */
  public $resolution;
  /** @var string */
  public $servability;
  protected $collection_key = 'applicableCountries';
  /** @param string[] */
  public function setApplicableCountries($applicableCountries)
  {
    $this->applicableCountries = $applicableCountries;
  }
  /** @return string[] */
  public function getApplicableCountries()
  {
    return $this->applicableCountries;
  }
  /** @param string */
  public function setAttributeName($attributeName)
  {
    $this->attributeName = $attributeName;
  }
  /** @return string */
  public function getAttributeName()
  {
    return $this->attributeName;
  }
  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
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
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /** @return string */
  public function getDetail()
  {
    return $this->detail;
  }
  /** @param string */
  public function setDocumentation($documentation)
  {
    $this->documentation = $documentation;
  }
  /** @return string */
  public function getDocumentation()
  {
    return $this->documentation;
  }
  /** @param string */
  public function setResolution($resolution)
  {
    $this->resolution = $resolution;
  }
  /** @return string */
  public function getResolution()
  {
    return $this->resolution;
  }
  /** @param string */
  public function setServability($servability)
  {
    $this->servability = $servability;
  }
  /** @return string */
  public function getServability()
  {
    return $this->servability;
  }
}

class ProductSubscriptionCost extends \Google\Model
{
  /** @var Price */
  public $amount;
  /** @var string */
  public $period;
  /** @var string */
  public $periodLength;
  protected $amountType = Price::class;
  protected $amountDataType = '';
  /** @param Price */
  public function setAmount(Price $amount)
  {
    $this->amount = $amount;
  }
  /** @return Price */
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param string */
  public function setPeriod($period)
  {
    $this->period = $period;
  }
  /** @return string */
  public function getPeriod()
  {
    return $this->period;
  }
  /** @param string */
  public function setPeriodLength($periodLength)
  {
    $this->periodLength = $periodLength;
  }
  /** @return string */
  public function getPeriodLength()
  {
    return $this->periodLength;
  }
}

class ProductTax extends \Google\Model
{
  /** @var string */
  public $country;
  /** @var string */
  public $locationId;
  /** @var string */
  public $postalCode;
  public $rate;
  /** @var string */
  public $region;
  /** @var bool */
  public $taxShip;

  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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
  public function setRate($rate)
  {
    $this->rate = $rate;
  }
  public function getRate()
  {
    return $this->rate;
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
  /** @param bool */
  public function setTaxShip($taxShip)
  {
    $this->taxShip = $taxShip;
  }
  /** @return bool */
  public function getTaxShip()
  {
    return $this->taxShip;
  }
}

class ProductUnitPricingBaseMeasure extends \Google\Model
{
  /** @var string */
  public $unit;
  /** @var string */
  public $value;

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

class ProductUnitPricingMeasure extends \Google\Model
{
  /** @var string */
  public $unit;
  public $value;

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
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class ProductView extends \Google\Collection
{
  /** @var string */
  public $aggregatedDestinationStatus;
  /** @var string */
  public $availability;
  /** @var string */
  public $brand;
  /** @var string */
  public $channel;
  /** @var string */
  public $condition;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $currencyCode;
  /** @var Date */
  public $expirationDate;
  /** @var string[] */
  public $gtin;
  /** @var string */
  public $id;
  /** @var string */
  public $itemGroupId;
  /** @var ProductViewItemIssue[] */
  public $itemIssues;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $offerId;
  /** @var string */
  public $priceMicros;
  /** @var string */
  public $shippingLabel;
  /** @var string */
  public $title;
  protected $collection_key = 'itemIssues';
  protected $expirationDateType = Date::class;
  protected $expirationDateDataType = '';
  protected $itemIssuesType = ProductViewItemIssue::class;
  protected $itemIssuesDataType = 'array';
  /** @param string */
  public function setAggregatedDestinationStatus($aggregatedDestinationStatus)
  {
    $this->aggregatedDestinationStatus = $aggregatedDestinationStatus;
  }
  /** @return string */
  public function getAggregatedDestinationStatus()
  {
    return $this->aggregatedDestinationStatus;
  }
  /** @param string */
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /** @return string */
  public function getAvailability()
  {
    return $this->availability;
  }
  /** @param string */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param string */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /** @return string */
  public function getChannel()
  {
    return $this->channel;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
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
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /** @return string */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /** @param Date */
  public function setExpirationDate(Date $expirationDate)
  {
    $this->expirationDate = $expirationDate;
  }
  /** @return Date */
  public function getExpirationDate()
  {
    return $this->expirationDate;
  }
  /** @param string[] */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string[] */
  public function getGtin()
  {
    return $this->gtin;
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
  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }
  /** @return string */
  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }
  /** @param ProductViewItemIssue[] */
  public function setItemIssues($itemIssues)
  {
    $this->itemIssues = $itemIssues;
  }
  /** @return ProductViewItemIssue[] */
  public function getItemIssues()
  {
    return $this->itemIssues;
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
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  /** @return string */
  public function getOfferId()
  {
    return $this->offerId;
  }
  /** @param string */
  public function setPriceMicros($priceMicros)
  {
    $this->priceMicros = $priceMicros;
  }
  /** @return string */
  public function getPriceMicros()
  {
    return $this->priceMicros;
  }
  /** @param string */
  public function setShippingLabel($shippingLabel)
  {
    $this->shippingLabel = $shippingLabel;
  }
  /** @return string */
  public function getShippingLabel()
  {
    return $this->shippingLabel;
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

class ProductViewItemIssue extends \Google\Model
{
  /** @var ProductViewItemIssueItemIssueType */
  public $issueType;
  /** @var string */
  public $resolution;
  /** @var ProductViewItemIssueItemIssueSeverity */
  public $severity;
  protected $issueTypeType = ProductViewItemIssueItemIssueType::class;
  protected $issueTypeDataType = '';
  protected $severityType = ProductViewItemIssueItemIssueSeverity::class;
  protected $severityDataType = '';
  /** @param ProductViewItemIssueItemIssueType */
  public function setIssueType(ProductViewItemIssueItemIssueType $issueType)
  {
    $this->issueType = $issueType;
  }
  /** @return ProductViewItemIssueItemIssueType */
  public function getIssueType()
  {
    return $this->issueType;
  }
  /** @param string */
  public function setResolution($resolution)
  {
    $this->resolution = $resolution;
  }
  /** @return string */
  public function getResolution()
  {
    return $this->resolution;
  }
  /** @param ProductViewItemIssueItemIssueSeverity */
  public function setSeverity(ProductViewItemIssueItemIssueSeverity $severity)
  {
    $this->severity = $severity;
  }
  /** @return ProductViewItemIssueItemIssueSeverity */
  public function getSeverity()
  {
    return $this->severity;
  }
}

class ProductViewItemIssueIssueSeverityPerDestination extends \Google\Collection
{
  /** @var string[] */
  public $demotedCountries;
  /** @var string */
  public $destination;
  /** @var string[] */
  public $disapprovedCountries;
  protected $collection_key = 'disapprovedCountries';
  /** @param string[] */
  public function setDemotedCountries($demotedCountries)
  {
    $this->demotedCountries = $demotedCountries;
  }
  /** @return string[] */
  public function getDemotedCountries()
  {
    return $this->demotedCountries;
  }
  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string[] */
  public function setDisapprovedCountries($disapprovedCountries)
  {
    $this->disapprovedCountries = $disapprovedCountries;
  }
  /** @return string[] */
  public function getDisapprovedCountries()
  {
    return $this->disapprovedCountries;
  }
}

class ProductViewItemIssueItemIssueSeverity extends \Google\Collection
{
  /** @var string */
  public $aggregatedSeverity;
  /** @var ProductViewItemIssueIssueSeverityPerDestination[] */
  public $severityPerDestination;
  protected $collection_key = 'severityPerDestination';
  protected $severityPerDestinationType = ProductViewItemIssueIssueSeverityPerDestination::class;
  protected $severityPerDestinationDataType = 'array';
  /** @param string */
  public function setAggregatedSeverity($aggregatedSeverity)
  {
    $this->aggregatedSeverity = $aggregatedSeverity;
  }
  /** @return string */
  public function getAggregatedSeverity()
  {
    return $this->aggregatedSeverity;
  }
  /** @param ProductViewItemIssueIssueSeverityPerDestination[] */
  public function setSeverityPerDestination($severityPerDestination)
  {
    $this->severityPerDestination = $severityPerDestination;
  }
  /** @return ProductViewItemIssueIssueSeverityPerDestination[] */
  public function getSeverityPerDestination()
  {
    return $this->severityPerDestination;
  }
}

class ProductViewItemIssueItemIssueType extends \Google\Model
{
  /** @var string */
  public $canonicalAttribute;

  /** @param string */
  public function setCanonicalAttribute($canonicalAttribute)
  {
    $this->canonicalAttribute = $canonicalAttribute;
  }
  /** @return string */
  public function getCanonicalAttribute()
  {
    return $this->canonicalAttribute;
  }
}

class ProductWeight extends \Google\Model
{
  /** @var string */
  public $unit;
  public $value;

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
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class ProductsCustomBatchRequest extends \Google\Collection
{
  /** @var ProductsCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = ProductsCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param ProductsCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ProductsCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class ProductsCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var string */
  public $feedId;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  /** @var Product */
  public $product;
  /** @var string */
  public $productId;
  /** @var string */
  public $updateMask;
  protected $productType = Product::class;
  protected $productDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param string */
  public function setFeedId($feedId)
  {
    $this->feedId = $feedId;
  }
  /** @return string */
  public function getFeedId()
  {
    return $this->feedId;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param Product */
  public function setProduct(Product $product)
  {
    $this->product = $product;
  }
  /** @return Product */
  public function getProduct()
  {
    return $this->product;
  }
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

class ProductsCustomBatchResponse extends \Google\Collection
{
  /** @var ProductsCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = ProductsCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param ProductsCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ProductsCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class ProductsCustomBatchResponseEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $kind;
  /** @var Product */
  public $product;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $productType = Product::class;
  protected $productDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param Product */
  public function setProduct(Product $product)
  {
    $this->product = $product;
  }
  /** @return Product */
  public function getProduct()
  {
    return $this->product;
  }
}

class ProductsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Product[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = Product::class;
  protected $resourcesDataType = 'array';
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
  /** @param Product[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return Product[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class ProductstatusesCustomBatchRequest extends \Google\Collection
{
  /** @var ProductstatusesCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = ProductstatusesCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param ProductstatusesCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ProductstatusesCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class ProductstatusesCustomBatchRequestEntry extends \Google\Collection
{
  /** @var string */
  public $batchId;
  /** @var string[] */
  public $destinations;
  /** @var bool */
  public $includeAttributes;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  /** @var string */
  public $productId;
  protected $collection_key = 'destinations';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param string[] */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /** @return string[] */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /** @param bool */
  public function setIncludeAttributes($includeAttributes)
  {
    $this->includeAttributes = $includeAttributes;
  }
  /** @return bool */
  public function getIncludeAttributes()
  {
    return $this->includeAttributes;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
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
}

class ProductstatusesCustomBatchResponse extends \Google\Collection
{
  /** @var ProductstatusesCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = ProductstatusesCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param ProductstatusesCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ProductstatusesCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class ProductstatusesCustomBatchResponseEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $kind;
  /** @var ProductStatus */
  public $productStatus;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $productStatusType = ProductStatus::class;
  protected $productStatusDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param ProductStatus */
  public function setProductStatus(ProductStatus $productStatus)
  {
    $this->productStatus = $productStatus;
  }
  /** @return ProductStatus */
  public function getProductStatus()
  {
    return $this->productStatus;
  }
}

class ProductstatusesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var ProductStatus[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = ProductStatus::class;
  protected $resourcesDataType = 'array';
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
  /** @param ProductStatus[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return ProductStatus[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class Promotion extends \Google\Collection
{
  /** @var string[] */
  public $brand;
  /** @var string[] */
  public $brandExclusion;
  /** @var string */
  public $contentLanguage;
  /** @var string */
  public $couponValueType;
  /** @var string */
  public $freeGiftDescription;
  /** @var string */
  public $freeGiftItemId;
  /** @var PriceAmount */
  public $freeGiftValue;
  /** @var string */
  public $genericRedemptionCode;
  /** @var int */
  public $getThisQuantityDiscounted;
  /** @var string */
  public $id;
  /** @var string[] */
  public $itemGroupId;
  /** @var string[] */
  public $itemGroupIdExclusion;
  /** @var string[] */
  public $itemId;
  /** @var string[] */
  public $itemIdExclusion;
  /** @var int */
  public $limitQuantity;
  /** @var PriceAmount */
  public $limitValue;
  /** @var string */
  public $longTitle;
  /** @var PriceAmount */
  public $minimumPurchaseAmount;
  /** @var int */
  public $minimumPurchaseQuantity;
  /** @var PriceAmount */
  public $moneyBudget;
  /** @var PriceAmount */
  public $moneyOffAmount;
  /** @var string */
  public $offerType;
  /** @var int */
  public $orderLimit;
  /** @var int */
  public $percentOff;
  /** @var string */
  public $productApplicability;
  /** @var string[] */
  public $productType;
  /** @var string[] */
  public $productTypeExclusion;
  /** @var string[] */
  public $promotionDestinationIds;
  /** @var string */
  public $promotionDisplayDates;
  /** @var TimePeriod */
  public $promotionDisplayTimePeriod;
  /** @var string */
  public $promotionEffectiveDates;
  /** @var TimePeriod */
  public $promotionEffectiveTimePeriod;
  /** @var string */
  public $promotionId;
  /** @var string */
  public $promotionUrl;
  /** @var string[] */
  public $redemptionChannel;
  /** @var string[] */
  public $shippingServiceNames;
  /** @var string */
  public $storeApplicability;
  /** @var string[] */
  public $storeCode;
  /** @var string[] */
  public $storeCodeExclusion;
  /** @var string */
  public $targetCountry;
  protected $collection_key = 'storeCodeExclusion';
  protected $freeGiftValueType = PriceAmount::class;
  protected $freeGiftValueDataType = '';
  protected $limitValueType = PriceAmount::class;
  protected $limitValueDataType = '';
  protected $minimumPurchaseAmountType = PriceAmount::class;
  protected $minimumPurchaseAmountDataType = '';
  protected $moneyBudgetType = PriceAmount::class;
  protected $moneyBudgetDataType = '';
  protected $moneyOffAmountType = PriceAmount::class;
  protected $moneyOffAmountDataType = '';
  protected $promotionDisplayTimePeriodType = TimePeriod::class;
  protected $promotionDisplayTimePeriodDataType = '';
  protected $promotionEffectiveTimePeriodType = TimePeriod::class;
  protected $promotionEffectiveTimePeriodDataType = '';
  /** @param string[] */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string[] */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param string[] */
  public function setBrandExclusion($brandExclusion)
  {
    $this->brandExclusion = $brandExclusion;
  }
  /** @return string[] */
  public function getBrandExclusion()
  {
    return $this->brandExclusion;
  }
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param string */
  public function setCouponValueType($couponValueType)
  {
    $this->couponValueType = $couponValueType;
  }
  /** @return string */
  public function getCouponValueType()
  {
    return $this->couponValueType;
  }
  /** @param string */
  public function setFreeGiftDescription($freeGiftDescription)
  {
    $this->freeGiftDescription = $freeGiftDescription;
  }
  /** @return string */
  public function getFreeGiftDescription()
  {
    return $this->freeGiftDescription;
  }
  /** @param string */
  public function setFreeGiftItemId($freeGiftItemId)
  {
    $this->freeGiftItemId = $freeGiftItemId;
  }
  /** @return string */
  public function getFreeGiftItemId()
  {
    return $this->freeGiftItemId;
  }
  /** @param PriceAmount */
  public function setFreeGiftValue(PriceAmount $freeGiftValue)
  {
    $this->freeGiftValue = $freeGiftValue;
  }
  /** @return PriceAmount */
  public function getFreeGiftValue()
  {
    return $this->freeGiftValue;
  }
  /** @param string */
  public function setGenericRedemptionCode($genericRedemptionCode)
  {
    $this->genericRedemptionCode = $genericRedemptionCode;
  }
  /** @return string */
  public function getGenericRedemptionCode()
  {
    return $this->genericRedemptionCode;
  }
  /** @param int */
  public function setGetThisQuantityDiscounted($getThisQuantityDiscounted)
  {
    $this->getThisQuantityDiscounted = $getThisQuantityDiscounted;
  }
  /** @return int */
  public function getGetThisQuantityDiscounted()
  {
    return $this->getThisQuantityDiscounted;
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
  /** @param string[] */
  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }
  /** @return string[] */
  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }
  /** @param string[] */
  public function setItemGroupIdExclusion($itemGroupIdExclusion)
  {
    $this->itemGroupIdExclusion = $itemGroupIdExclusion;
  }
  /** @return string[] */
  public function getItemGroupIdExclusion()
  {
    return $this->itemGroupIdExclusion;
  }
  /** @param string[] */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /** @return string[] */
  public function getItemId()
  {
    return $this->itemId;
  }
  /** @param string[] */
  public function setItemIdExclusion($itemIdExclusion)
  {
    $this->itemIdExclusion = $itemIdExclusion;
  }
  /** @return string[] */
  public function getItemIdExclusion()
  {
    return $this->itemIdExclusion;
  }
  /** @param int */
  public function setLimitQuantity($limitQuantity)
  {
    $this->limitQuantity = $limitQuantity;
  }
  /** @return int */
  public function getLimitQuantity()
  {
    return $this->limitQuantity;
  }
  /** @param PriceAmount */
  public function setLimitValue(PriceAmount $limitValue)
  {
    $this->limitValue = $limitValue;
  }
  /** @return PriceAmount */
  public function getLimitValue()
  {
    return $this->limitValue;
  }
  /** @param string */
  public function setLongTitle($longTitle)
  {
    $this->longTitle = $longTitle;
  }
  /** @return string */
  public function getLongTitle()
  {
    return $this->longTitle;
  }
  /** @param PriceAmount */
  public function setMinimumPurchaseAmount(PriceAmount $minimumPurchaseAmount)
  {
    $this->minimumPurchaseAmount = $minimumPurchaseAmount;
  }
  /** @return PriceAmount */
  public function getMinimumPurchaseAmount()
  {
    return $this->minimumPurchaseAmount;
  }
  /** @param int */
  public function setMinimumPurchaseQuantity($minimumPurchaseQuantity)
  {
    $this->minimumPurchaseQuantity = $minimumPurchaseQuantity;
  }
  /** @return int */
  public function getMinimumPurchaseQuantity()
  {
    return $this->minimumPurchaseQuantity;
  }
  /** @param PriceAmount */
  public function setMoneyBudget(PriceAmount $moneyBudget)
  {
    $this->moneyBudget = $moneyBudget;
  }
  /** @return PriceAmount */
  public function getMoneyBudget()
  {
    return $this->moneyBudget;
  }
  /** @param PriceAmount */
  public function setMoneyOffAmount(PriceAmount $moneyOffAmount)
  {
    $this->moneyOffAmount = $moneyOffAmount;
  }
  /** @return PriceAmount */
  public function getMoneyOffAmount()
  {
    return $this->moneyOffAmount;
  }
  /** @param string */
  public function setOfferType($offerType)
  {
    $this->offerType = $offerType;
  }
  /** @return string */
  public function getOfferType()
  {
    return $this->offerType;
  }
  /** @param int */
  public function setOrderLimit($orderLimit)
  {
    $this->orderLimit = $orderLimit;
  }
  /** @return int */
  public function getOrderLimit()
  {
    return $this->orderLimit;
  }
  /** @param int */
  public function setPercentOff($percentOff)
  {
    $this->percentOff = $percentOff;
  }
  /** @return int */
  public function getPercentOff()
  {
    return $this->percentOff;
  }
  /** @param string */
  public function setProductApplicability($productApplicability)
  {
    $this->productApplicability = $productApplicability;
  }
  /** @return string */
  public function getProductApplicability()
  {
    return $this->productApplicability;
  }
  /** @param string[] */
  public function setProductType($productType)
  {
    $this->productType = $productType;
  }
  /** @return string[] */
  public function getProductType()
  {
    return $this->productType;
  }
  /** @param string[] */
  public function setProductTypeExclusion($productTypeExclusion)
  {
    $this->productTypeExclusion = $productTypeExclusion;
  }
  /** @return string[] */
  public function getProductTypeExclusion()
  {
    return $this->productTypeExclusion;
  }
  /** @param string[] */
  public function setPromotionDestinationIds($promotionDestinationIds)
  {
    $this->promotionDestinationIds = $promotionDestinationIds;
  }
  /** @return string[] */
  public function getPromotionDestinationIds()
  {
    return $this->promotionDestinationIds;
  }
  /** @param string */
  public function setPromotionDisplayDates($promotionDisplayDates)
  {
    $this->promotionDisplayDates = $promotionDisplayDates;
  }
  /** @return string */
  public function getPromotionDisplayDates()
  {
    return $this->promotionDisplayDates;
  }
  /** @param TimePeriod */
  public function setPromotionDisplayTimePeriod(TimePeriod $promotionDisplayTimePeriod)
  {
    $this->promotionDisplayTimePeriod = $promotionDisplayTimePeriod;
  }
  /** @return TimePeriod */
  public function getPromotionDisplayTimePeriod()
  {
    return $this->promotionDisplayTimePeriod;
  }
  /** @param string */
  public function setPromotionEffectiveDates($promotionEffectiveDates)
  {
    $this->promotionEffectiveDates = $promotionEffectiveDates;
  }
  /** @return string */
  public function getPromotionEffectiveDates()
  {
    return $this->promotionEffectiveDates;
  }
  /** @param TimePeriod */
  public function setPromotionEffectiveTimePeriod(TimePeriod $promotionEffectiveTimePeriod)
  {
    $this->promotionEffectiveTimePeriod = $promotionEffectiveTimePeriod;
  }
  /** @return TimePeriod */
  public function getPromotionEffectiveTimePeriod()
  {
    return $this->promotionEffectiveTimePeriod;
  }
  /** @param string */
  public function setPromotionId($promotionId)
  {
    $this->promotionId = $promotionId;
  }
  /** @return string */
  public function getPromotionId()
  {
    return $this->promotionId;
  }
  /** @param string */
  public function setPromotionUrl($promotionUrl)
  {
    $this->promotionUrl = $promotionUrl;
  }
  /** @return string */
  public function getPromotionUrl()
  {
    return $this->promotionUrl;
  }
  /** @param string[] */
  public function setRedemptionChannel($redemptionChannel)
  {
    $this->redemptionChannel = $redemptionChannel;
  }
  /** @return string[] */
  public function getRedemptionChannel()
  {
    return $this->redemptionChannel;
  }
  /** @param string[] */
  public function setShippingServiceNames($shippingServiceNames)
  {
    $this->shippingServiceNames = $shippingServiceNames;
  }
  /** @return string[] */
  public function getShippingServiceNames()
  {
    return $this->shippingServiceNames;
  }
  /** @param string */
  public function setStoreApplicability($storeApplicability)
  {
    $this->storeApplicability = $storeApplicability;
  }
  /** @return string */
  public function getStoreApplicability()
  {
    return $this->storeApplicability;
  }
  /** @param string[] */
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  /** @return string[] */
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  /** @param string[] */
  public function setStoreCodeExclusion($storeCodeExclusion)
  {
    $this->storeCodeExclusion = $storeCodeExclusion;
  }
  /** @return string[] */
  public function getStoreCodeExclusion()
  {
    return $this->storeCodeExclusion;
  }
  /** @param string */
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
  }
}

class PubsubNotificationSettings extends \Google\Collection
{
  /** @var string */
  public $cloudTopicName;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $registeredEvents;
  protected $collection_key = 'registeredEvents';
  /** @param string */
  public function setCloudTopicName($cloudTopicName)
  {
    $this->cloudTopicName = $cloudTopicName;
  }
  /** @return string */
  public function getCloudTopicName()
  {
    return $this->cloudTopicName;
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
  /** @param string[] */
  public function setRegisteredEvents($registeredEvents)
  {
    $this->registeredEvents = $registeredEvents;
  }
  /** @return string[] */
  public function getRegisteredEvents()
  {
    return $this->registeredEvents;
  }
}

class RateGroup extends \Google\Collection
{
  /** @var string[] */
  public $applicableShippingLabels;
  /** @var CarrierRate[] */
  public $carrierRates;
  /** @var Table */
  public $mainTable;
  /** @var string */
  public $name;
  /** @var Value */
  public $singleValue;
  /** @var Table[] */
  public $subtables;
  protected $collection_key = 'subtables';
  protected $carrierRatesType = CarrierRate::class;
  protected $carrierRatesDataType = 'array';
  protected $mainTableType = Table::class;
  protected $mainTableDataType = '';
  protected $singleValueType = Value::class;
  protected $singleValueDataType = '';
  protected $subtablesType = Table::class;
  protected $subtablesDataType = 'array';
  /** @param string[] */
  public function setApplicableShippingLabels($applicableShippingLabels)
  {
    $this->applicableShippingLabels = $applicableShippingLabels;
  }
  /** @return string[] */
  public function getApplicableShippingLabels()
  {
    return $this->applicableShippingLabels;
  }
  /** @param CarrierRate[] */
  public function setCarrierRates($carrierRates)
  {
    $this->carrierRates = $carrierRates;
  }
  /** @return CarrierRate[] */
  public function getCarrierRates()
  {
    return $this->carrierRates;
  }
  /** @param Table */
  public function setMainTable(Table $mainTable)
  {
    $this->mainTable = $mainTable;
  }
  /** @return Table */
  public function getMainTable()
  {
    return $this->mainTable;
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
  /** @param Value */
  public function setSingleValue(Value $singleValue)
  {
    $this->singleValue = $singleValue;
  }
  /** @return Value */
  public function getSingleValue()
  {
    return $this->singleValue;
  }
  /** @param Table[] */
  public function setSubtables($subtables)
  {
    $this->subtables = $subtables;
  }
  /** @return Table[] */
  public function getSubtables()
  {
    return $this->subtables;
  }
}

class RefundReason extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $reasonCode;

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
  public function setReasonCode($reasonCode)
  {
    $this->reasonCode = $reasonCode;
  }
  /** @return string */
  public function getReasonCode()
  {
    return $this->reasonCode;
  }
}

class Region extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var RegionGeoTargetArea */
  public $geotargetArea;
  /** @var string */
  public $merchantId;
  /** @var RegionPostalCodeArea */
  public $postalCodeArea;
  /** @var string */
  public $regionId;
  /** @var bool */
  public $regionalInventoryEligible;
  /** @var bool */
  public $shippingEligible;
  protected $geotargetAreaType = RegionGeoTargetArea::class;
  protected $geotargetAreaDataType = '';
  protected $postalCodeAreaType = RegionPostalCodeArea::class;
  protected $postalCodeAreaDataType = '';
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
  /** @param RegionGeoTargetArea */
  public function setGeotargetArea(RegionGeoTargetArea $geotargetArea)
  {
    $this->geotargetArea = $geotargetArea;
  }
  /** @return RegionGeoTargetArea */
  public function getGeotargetArea()
  {
    return $this->geotargetArea;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param RegionPostalCodeArea */
  public function setPostalCodeArea(RegionPostalCodeArea $postalCodeArea)
  {
    $this->postalCodeArea = $postalCodeArea;
  }
  /** @return RegionPostalCodeArea */
  public function getPostalCodeArea()
  {
    return $this->postalCodeArea;
  }
  /** @param string */
  public function setRegionId($regionId)
  {
    $this->regionId = $regionId;
  }
  /** @return string */
  public function getRegionId()
  {
    return $this->regionId;
  }
  /** @param bool */
  public function setRegionalInventoryEligible($regionalInventoryEligible)
  {
    $this->regionalInventoryEligible = $regionalInventoryEligible;
  }
  /** @return bool */
  public function getRegionalInventoryEligible()
  {
    return $this->regionalInventoryEligible;
  }
  /** @param bool */
  public function setShippingEligible($shippingEligible)
  {
    $this->shippingEligible = $shippingEligible;
  }
  /** @return bool */
  public function getShippingEligible()
  {
    return $this->shippingEligible;
  }
}

class RegionGeoTargetArea extends \Google\Collection
{
  /** @var string[] */
  public $geotargetCriteriaIds;
  protected $collection_key = 'geotargetCriteriaIds';
  /** @param string[] */
  public function setGeotargetCriteriaIds($geotargetCriteriaIds)
  {
    $this->geotargetCriteriaIds = $geotargetCriteriaIds;
  }
  /** @return string[] */
  public function getGeotargetCriteriaIds()
  {
    return $this->geotargetCriteriaIds;
  }
}

class RegionPostalCodeArea extends \Google\Collection
{
  /** @var RegionPostalCodeAreaPostalCodeRange[] */
  public $postalCodes;
  /** @var string */
  public $regionCode;
  protected $collection_key = 'postalCodes';
  protected $postalCodesType = RegionPostalCodeAreaPostalCodeRange::class;
  protected $postalCodesDataType = 'array';
  /** @param RegionPostalCodeAreaPostalCodeRange[] */
  public function setPostalCodes($postalCodes)
  {
    $this->postalCodes = $postalCodes;
  }
  /** @return RegionPostalCodeAreaPostalCodeRange[] */
  public function getPostalCodes()
  {
    return $this->postalCodes;
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

class RegionPostalCodeAreaPostalCodeRange extends \Google\Model
{
  /** @var string */
  public $begin;
  /** @var string */
  public $end;

  /** @param string */
  public function setBegin($begin)
  {
    $this->begin = $begin;
  }
  /** @return string */
  public function getBegin()
  {
    return $this->begin;
  }
  /** @param string */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return string */
  public function getEnd()
  {
    return $this->end;
  }
}

class RegionalInventory extends \Google\Collection
{
  /** @var string */
  public $availability;
  /** @var CustomAttribute[] */
  public $customAttributes;
  /** @var string */
  public $kind;
  /** @var Price */
  public $price;
  /** @var string */
  public $regionId;
  /** @var Price */
  public $salePrice;
  /** @var string */
  public $salePriceEffectiveDate;
  protected $collection_key = 'customAttributes';
  protected $customAttributesType = CustomAttribute::class;
  protected $customAttributesDataType = 'array';
  protected $priceType = Price::class;
  protected $priceDataType = '';
  protected $salePriceType = Price::class;
  protected $salePriceDataType = '';
  /** @param string */
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /** @return string */
  public function getAvailability()
  {
    return $this->availability;
  }
  /** @param CustomAttribute[] */
  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }
  /** @return CustomAttribute[] */
  public function getCustomAttributes()
  {
    return $this->customAttributes;
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
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setRegionId($regionId)
  {
    $this->regionId = $regionId;
  }
  /** @return string */
  public function getRegionId()
  {
    return $this->regionId;
  }
  /** @param Price */
  public function setSalePrice(Price $salePrice)
  {
    $this->salePrice = $salePrice;
  }
  /** @return Price */
  public function getSalePrice()
  {
    return $this->salePrice;
  }
  /** @param string */
  public function setSalePriceEffectiveDate($salePriceEffectiveDate)
  {
    $this->salePriceEffectiveDate = $salePriceEffectiveDate;
  }
  /** @return string */
  public function getSalePriceEffectiveDate()
  {
    return $this->salePriceEffectiveDate;
  }
}

class RegionalinventoryCustomBatchRequest extends \Google\Collection
{
  /** @var RegionalinventoryCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = RegionalinventoryCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param RegionalinventoryCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return RegionalinventoryCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class RegionalinventoryCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  /** @var string */
  public $productId;
  /** @var RegionalInventory */
  public $regionalInventory;
  protected $regionalInventoryType = RegionalInventory::class;
  protected $regionalInventoryDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
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
  /** @param RegionalInventory */
  public function setRegionalInventory(RegionalInventory $regionalInventory)
  {
    $this->regionalInventory = $regionalInventory;
  }
  /** @return RegionalInventory */
  public function getRegionalInventory()
  {
    return $this->regionalInventory;
  }
}

class RegionalinventoryCustomBatchResponse extends \Google\Collection
{
  /** @var RegionalinventoryCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = RegionalinventoryCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param RegionalinventoryCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return RegionalinventoryCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class RegionalinventoryCustomBatchResponseEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $kind;
  /** @var RegionalInventory */
  public $regionalInventory;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $regionalInventoryType = RegionalInventory::class;
  protected $regionalInventoryDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param RegionalInventory */
  public function setRegionalInventory(RegionalInventory $regionalInventory)
  {
    $this->regionalInventory = $regionalInventory;
  }
  /** @return RegionalInventory */
  public function getRegionalInventory()
  {
    return $this->regionalInventory;
  }
}

class ReportRow extends \Google\Model
{
  /** @var BestSellers */
  public $bestSellers;
  /** @var Brand */
  public $brand;
  /** @var Metrics */
  public $metrics;
  /** @var PriceCompetitiveness */
  public $priceCompetitiveness;
  /** @var PriceInsights */
  public $priceInsights;
  /** @var ProductCluster */
  public $productCluster;
  /** @var ProductView */
  public $productView;
  /** @var Segments */
  public $segments;
  protected $bestSellersType = BestSellers::class;
  protected $bestSellersDataType = '';
  protected $brandType = Brand::class;
  protected $brandDataType = '';
  protected $metricsType = Metrics::class;
  protected $metricsDataType = '';
  protected $priceCompetitivenessType = PriceCompetitiveness::class;
  protected $priceCompetitivenessDataType = '';
  protected $priceInsightsType = PriceInsights::class;
  protected $priceInsightsDataType = '';
  protected $productClusterType = ProductCluster::class;
  protected $productClusterDataType = '';
  protected $productViewType = ProductView::class;
  protected $productViewDataType = '';
  protected $segmentsType = Segments::class;
  protected $segmentsDataType = '';
  /** @param BestSellers */
  public function setBestSellers(BestSellers $bestSellers)
  {
    $this->bestSellers = $bestSellers;
  }
  /** @return BestSellers */
  public function getBestSellers()
  {
    return $this->bestSellers;
  }
  /** @param Brand */
  public function setBrand(Brand $brand)
  {
    $this->brand = $brand;
  }
  /** @return Brand */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param Metrics */
  public function setMetrics(Metrics $metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metrics */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param PriceCompetitiveness */
  public function setPriceCompetitiveness(PriceCompetitiveness $priceCompetitiveness)
  {
    $this->priceCompetitiveness = $priceCompetitiveness;
  }
  /** @return PriceCompetitiveness */
  public function getPriceCompetitiveness()
  {
    return $this->priceCompetitiveness;
  }
  /** @param PriceInsights */
  public function setPriceInsights(PriceInsights $priceInsights)
  {
    $this->priceInsights = $priceInsights;
  }
  /** @return PriceInsights */
  public function getPriceInsights()
  {
    return $this->priceInsights;
  }
  /** @param ProductCluster */
  public function setProductCluster(ProductCluster $productCluster)
  {
    $this->productCluster = $productCluster;
  }
  /** @return ProductCluster */
  public function getProductCluster()
  {
    return $this->productCluster;
  }
  /** @param ProductView */
  public function setProductView(ProductView $productView)
  {
    $this->productView = $productView;
  }
  /** @return ProductView */
  public function getProductView()
  {
    return $this->productView;
  }
  /** @param Segments */
  public function setSegments(Segments $segments)
  {
    $this->segments = $segments;
  }
  /** @return Segments */
  public function getSegments()
  {
    return $this->segments;
  }
}

class RepricingProductReport extends \Google\Collection
{
  /** @var string */
  public $applicationCount;
  /** @var RepricingProductReportBuyboxWinningProductStats */
  public $buyboxWinningProductStats;
  /** @var Date */
  public $date;
  /** @var PriceAmount */
  public $highWatermark;
  /** @var InapplicabilityDetails[] */
  public $inapplicabilityDetails;
  /** @var PriceAmount */
  public $lowWatermark;
  /** @var int */
  public $orderItemCount;
  /** @var string[] */
  public $ruleIds;
  /** @var PriceAmount */
  public $totalGmv;
  /** @var string */
  public $type;
  protected $collection_key = 'ruleIds';
  protected $buyboxWinningProductStatsType = RepricingProductReportBuyboxWinningProductStats::class;
  protected $buyboxWinningProductStatsDataType = '';
  protected $dateType = Date::class;
  protected $dateDataType = '';
  protected $highWatermarkType = PriceAmount::class;
  protected $highWatermarkDataType = '';
  protected $inapplicabilityDetailsType = InapplicabilityDetails::class;
  protected $inapplicabilityDetailsDataType = 'array';
  protected $lowWatermarkType = PriceAmount::class;
  protected $lowWatermarkDataType = '';
  protected $totalGmvType = PriceAmount::class;
  protected $totalGmvDataType = '';
  /** @param string */
  public function setApplicationCount($applicationCount)
  {
    $this->applicationCount = $applicationCount;
  }
  /** @return string */
  public function getApplicationCount()
  {
    return $this->applicationCount;
  }
  /** @param RepricingProductReportBuyboxWinningProductStats */
  public function setBuyboxWinningProductStats(RepricingProductReportBuyboxWinningProductStats $buyboxWinningProductStats)
  {
    $this->buyboxWinningProductStats = $buyboxWinningProductStats;
  }
  /** @return RepricingProductReportBuyboxWinningProductStats */
  public function getBuyboxWinningProductStats()
  {
    return $this->buyboxWinningProductStats;
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
  /** @param PriceAmount */
  public function setHighWatermark(PriceAmount $highWatermark)
  {
    $this->highWatermark = $highWatermark;
  }
  /** @return PriceAmount */
  public function getHighWatermark()
  {
    return $this->highWatermark;
  }
  /** @param InapplicabilityDetails[] */
  public function setInapplicabilityDetails($inapplicabilityDetails)
  {
    $this->inapplicabilityDetails = $inapplicabilityDetails;
  }
  /** @return InapplicabilityDetails[] */
  public function getInapplicabilityDetails()
  {
    return $this->inapplicabilityDetails;
  }
  /** @param PriceAmount */
  public function setLowWatermark(PriceAmount $lowWatermark)
  {
    $this->lowWatermark = $lowWatermark;
  }
  /** @return PriceAmount */
  public function getLowWatermark()
  {
    return $this->lowWatermark;
  }
  /** @param int */
  public function setOrderItemCount($orderItemCount)
  {
    $this->orderItemCount = $orderItemCount;
  }
  /** @return int */
  public function getOrderItemCount()
  {
    return $this->orderItemCount;
  }
  /** @param string[] */
  public function setRuleIds($ruleIds)
  {
    $this->ruleIds = $ruleIds;
  }
  /** @return string[] */
  public function getRuleIds()
  {
    return $this->ruleIds;
  }
  /** @param PriceAmount */
  public function setTotalGmv(PriceAmount $totalGmv)
  {
    $this->totalGmv = $totalGmv;
  }
  /** @return PriceAmount */
  public function getTotalGmv()
  {
    return $this->totalGmv;
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

class RepricingProductReportBuyboxWinningProductStats extends \Google\Model
{
  /** @var int */
  public $buyboxWinsCount;

  /** @param int */
  public function setBuyboxWinsCount($buyboxWinsCount)
  {
    $this->buyboxWinsCount = $buyboxWinsCount;
  }
  /** @return int */
  public function getBuyboxWinsCount()
  {
    return $this->buyboxWinsCount;
  }
}

class RepricingRule extends \Google\Model
{
  /** @var RepricingRuleCostOfGoodsSaleRule */
  public $cogsBasedRule;
  /** @var string */
  public $countryCode;
  /** @var RepricingRuleEffectiveTime */
  public $effectiveTimePeriod;
  /** @var RepricingRuleEligibleOfferMatcher */
  public $eligibleOfferMatcher;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $merchantId;
  /** @var bool */
  public $paused;
  /** @var RepricingRuleRestriction */
  public $restriction;
  /** @var string */
  public $ruleId;
  /** @var RepricingRuleStatsBasedRule */
  public $statsBasedRule;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  protected $cogsBasedRuleType = RepricingRuleCostOfGoodsSaleRule::class;
  protected $cogsBasedRuleDataType = '';
  protected $effectiveTimePeriodType = RepricingRuleEffectiveTime::class;
  protected $effectiveTimePeriodDataType = '';
  protected $eligibleOfferMatcherType = RepricingRuleEligibleOfferMatcher::class;
  protected $eligibleOfferMatcherDataType = '';
  protected $restrictionType = RepricingRuleRestriction::class;
  protected $restrictionDataType = '';
  protected $statsBasedRuleType = RepricingRuleStatsBasedRule::class;
  protected $statsBasedRuleDataType = '';
  /** @param RepricingRuleCostOfGoodsSaleRule */
  public function setCogsBasedRule(RepricingRuleCostOfGoodsSaleRule $cogsBasedRule)
  {
    $this->cogsBasedRule = $cogsBasedRule;
  }
  /** @return RepricingRuleCostOfGoodsSaleRule */
  public function getCogsBasedRule()
  {
    return $this->cogsBasedRule;
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
  /** @param RepricingRuleEffectiveTime */
  public function setEffectiveTimePeriod(RepricingRuleEffectiveTime $effectiveTimePeriod)
  {
    $this->effectiveTimePeriod = $effectiveTimePeriod;
  }
  /** @return RepricingRuleEffectiveTime */
  public function getEffectiveTimePeriod()
  {
    return $this->effectiveTimePeriod;
  }
  /** @param RepricingRuleEligibleOfferMatcher */
  public function setEligibleOfferMatcher(RepricingRuleEligibleOfferMatcher $eligibleOfferMatcher)
  {
    $this->eligibleOfferMatcher = $eligibleOfferMatcher;
  }
  /** @return RepricingRuleEligibleOfferMatcher */
  public function getEligibleOfferMatcher()
  {
    return $this->eligibleOfferMatcher;
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
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param bool */
  public function setPaused($paused)
  {
    $this->paused = $paused;
  }
  /** @return bool */
  public function getPaused()
  {
    return $this->paused;
  }
  /** @param RepricingRuleRestriction */
  public function setRestriction(RepricingRuleRestriction $restriction)
  {
    $this->restriction = $restriction;
  }
  /** @return RepricingRuleRestriction */
  public function getRestriction()
  {
    return $this->restriction;
  }
  /** @param string */
  public function setRuleId($ruleId)
  {
    $this->ruleId = $ruleId;
  }
  /** @return string */
  public function getRuleId()
  {
    return $this->ruleId;
  }
  /** @param RepricingRuleStatsBasedRule */
  public function setStatsBasedRule(RepricingRuleStatsBasedRule $statsBasedRule)
  {
    $this->statsBasedRule = $statsBasedRule;
  }
  /** @return RepricingRuleStatsBasedRule */
  public function getStatsBasedRule()
  {
    return $this->statsBasedRule;
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

class RepricingRuleCostOfGoodsSaleRule extends \Google\Model
{
  /** @var int */
  public $percentageDelta;
  /** @var string */
  public $priceDelta;

  /** @param int */
  public function setPercentageDelta($percentageDelta)
  {
    $this->percentageDelta = $percentageDelta;
  }
  /** @return int */
  public function getPercentageDelta()
  {
    return $this->percentageDelta;
  }
  /** @param string */
  public function setPriceDelta($priceDelta)
  {
    $this->priceDelta = $priceDelta;
  }
  /** @return string */
  public function getPriceDelta()
  {
    return $this->priceDelta;
  }
}

class RepricingRuleEffectiveTime extends \Google\Collection
{
  /** @var RepricingRuleEffectiveTimeFixedTimePeriod[] */
  public $fixedTimePeriods;
  protected $collection_key = 'fixedTimePeriods';
  protected $fixedTimePeriodsType = RepricingRuleEffectiveTimeFixedTimePeriod::class;
  protected $fixedTimePeriodsDataType = 'array';
  /** @param RepricingRuleEffectiveTimeFixedTimePeriod[] */
  public function setFixedTimePeriods($fixedTimePeriods)
  {
    $this->fixedTimePeriods = $fixedTimePeriods;
  }
  /** @return RepricingRuleEffectiveTimeFixedTimePeriod[] */
  public function getFixedTimePeriods()
  {
    return $this->fixedTimePeriods;
  }
}

class RepricingRuleEffectiveTimeFixedTimePeriod extends \Google\Model
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

class RepricingRuleEligibleOfferMatcher extends \Google\Model
{
  /** @var RepricingRuleEligibleOfferMatcherStringMatcher */
  public $brandMatcher;
  /** @var RepricingRuleEligibleOfferMatcherStringMatcher */
  public $itemGroupIdMatcher;
  /** @var string */
  public $matcherOption;
  /** @var RepricingRuleEligibleOfferMatcherStringMatcher */
  public $offerIdMatcher;
  /** @var bool */
  public $skipWhenOnPromotion;
  protected $brandMatcherType = RepricingRuleEligibleOfferMatcherStringMatcher::class;
  protected $brandMatcherDataType = '';
  protected $itemGroupIdMatcherType = RepricingRuleEligibleOfferMatcherStringMatcher::class;
  protected $itemGroupIdMatcherDataType = '';
  protected $offerIdMatcherType = RepricingRuleEligibleOfferMatcherStringMatcher::class;
  protected $offerIdMatcherDataType = '';
  /** @param RepricingRuleEligibleOfferMatcherStringMatcher */
  public function setBrandMatcher(RepricingRuleEligibleOfferMatcherStringMatcher $brandMatcher)
  {
    $this->brandMatcher = $brandMatcher;
  }
  /** @return RepricingRuleEligibleOfferMatcherStringMatcher */
  public function getBrandMatcher()
  {
    return $this->brandMatcher;
  }
  /** @param RepricingRuleEligibleOfferMatcherStringMatcher */
  public function setItemGroupIdMatcher(RepricingRuleEligibleOfferMatcherStringMatcher $itemGroupIdMatcher)
  {
    $this->itemGroupIdMatcher = $itemGroupIdMatcher;
  }
  /** @return RepricingRuleEligibleOfferMatcherStringMatcher */
  public function getItemGroupIdMatcher()
  {
    return $this->itemGroupIdMatcher;
  }
  /** @param string */
  public function setMatcherOption($matcherOption)
  {
    $this->matcherOption = $matcherOption;
  }
  /** @return string */
  public function getMatcherOption()
  {
    return $this->matcherOption;
  }
  /** @param RepricingRuleEligibleOfferMatcherStringMatcher */
  public function setOfferIdMatcher(RepricingRuleEligibleOfferMatcherStringMatcher $offerIdMatcher)
  {
    $this->offerIdMatcher = $offerIdMatcher;
  }
  /** @return RepricingRuleEligibleOfferMatcherStringMatcher */
  public function getOfferIdMatcher()
  {
    return $this->offerIdMatcher;
  }
  /** @param bool */
  public function setSkipWhenOnPromotion($skipWhenOnPromotion)
  {
    $this->skipWhenOnPromotion = $skipWhenOnPromotion;
  }
  /** @return bool */
  public function getSkipWhenOnPromotion()
  {
    return $this->skipWhenOnPromotion;
  }
}

class RepricingRuleEligibleOfferMatcherStringMatcher extends \Google\Collection
{
  /** @var string[] */
  public $strAttributes;
  protected $collection_key = 'strAttributes';
  /** @param string[] */
  public function setStrAttributes($strAttributes)
  {
    $this->strAttributes = $strAttributes;
  }
  /** @return string[] */
  public function getStrAttributes()
  {
    return $this->strAttributes;
  }
}

class RepricingRuleReport extends \Google\Collection
{
  /** @var RepricingRuleReportBuyboxWinningRuleStats */
  public $buyboxWinningRuleStats;
  /** @var Date */
  public $date;
  /** @var string[] */
  public $impactedProducts;
  /** @var InapplicabilityDetails[] */
  public $inapplicabilityDetails;
  /** @var string[] */
  public $inapplicableProducts;
  /** @var int */
  public $orderItemCount;
  /** @var string */
  public $ruleId;
  /** @var PriceAmount */
  public $totalGmv;
  /** @var string */
  public $type;
  protected $collection_key = 'inapplicableProducts';
  protected $buyboxWinningRuleStatsType = RepricingRuleReportBuyboxWinningRuleStats::class;
  protected $buyboxWinningRuleStatsDataType = '';
  protected $dateType = Date::class;
  protected $dateDataType = '';
  protected $inapplicabilityDetailsType = InapplicabilityDetails::class;
  protected $inapplicabilityDetailsDataType = 'array';
  protected $totalGmvType = PriceAmount::class;
  protected $totalGmvDataType = '';
  /** @param RepricingRuleReportBuyboxWinningRuleStats */
  public function setBuyboxWinningRuleStats(RepricingRuleReportBuyboxWinningRuleStats $buyboxWinningRuleStats)
  {
    $this->buyboxWinningRuleStats = $buyboxWinningRuleStats;
  }
  /** @return RepricingRuleReportBuyboxWinningRuleStats */
  public function getBuyboxWinningRuleStats()
  {
    return $this->buyboxWinningRuleStats;
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
  /** @param string[] */
  public function setImpactedProducts($impactedProducts)
  {
    $this->impactedProducts = $impactedProducts;
  }
  /** @return string[] */
  public function getImpactedProducts()
  {
    return $this->impactedProducts;
  }
  /** @param InapplicabilityDetails[] */
  public function setInapplicabilityDetails($inapplicabilityDetails)
  {
    $this->inapplicabilityDetails = $inapplicabilityDetails;
  }
  /** @return InapplicabilityDetails[] */
  public function getInapplicabilityDetails()
  {
    return $this->inapplicabilityDetails;
  }
  /** @param string[] */
  public function setInapplicableProducts($inapplicableProducts)
  {
    $this->inapplicableProducts = $inapplicableProducts;
  }
  /** @return string[] */
  public function getInapplicableProducts()
  {
    return $this->inapplicableProducts;
  }
  /** @param int */
  public function setOrderItemCount($orderItemCount)
  {
    $this->orderItemCount = $orderItemCount;
  }
  /** @return int */
  public function getOrderItemCount()
  {
    return $this->orderItemCount;
  }
  /** @param string */
  public function setRuleId($ruleId)
  {
    $this->ruleId = $ruleId;
  }
  /** @return string */
  public function getRuleId()
  {
    return $this->ruleId;
  }
  /** @param PriceAmount */
  public function setTotalGmv(PriceAmount $totalGmv)
  {
    $this->totalGmv = $totalGmv;
  }
  /** @return PriceAmount */
  public function getTotalGmv()
  {
    return $this->totalGmv;
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

class RepricingRuleReportBuyboxWinningRuleStats extends \Google\Model
{
  /** @var int */
  public $buyboxWonProductCount;

  /** @param int */
  public function setBuyboxWonProductCount($buyboxWonProductCount)
  {
    $this->buyboxWonProductCount = $buyboxWonProductCount;
  }
  /** @return int */
  public function getBuyboxWonProductCount()
  {
    return $this->buyboxWonProductCount;
  }
}

class RepricingRuleRestriction extends \Google\Model
{
  /** @var RepricingRuleRestrictionBoundary */
  public $floor;
  /** @var bool */
  public $useAutoPricingMinPrice;
  protected $floorType = RepricingRuleRestrictionBoundary::class;
  protected $floorDataType = '';
  /** @param RepricingRuleRestrictionBoundary */
  public function setFloor(RepricingRuleRestrictionBoundary $floor)
  {
    $this->floor = $floor;
  }
  /** @return RepricingRuleRestrictionBoundary */
  public function getFloor()
  {
    return $this->floor;
  }
  /** @param bool */
  public function setUseAutoPricingMinPrice($useAutoPricingMinPrice)
  {
    $this->useAutoPricingMinPrice = $useAutoPricingMinPrice;
  }
  /** @return bool */
  public function getUseAutoPricingMinPrice()
  {
    return $this->useAutoPricingMinPrice;
  }
}

class RepricingRuleRestrictionBoundary extends \Google\Model
{
  /** @var int */
  public $percentageDelta;
  /** @var string */
  public $priceDelta;

  /** @param int */
  public function setPercentageDelta($percentageDelta)
  {
    $this->percentageDelta = $percentageDelta;
  }
  /** @return int */
  public function getPercentageDelta()
  {
    return $this->percentageDelta;
  }
  /** @param string */
  public function setPriceDelta($priceDelta)
  {
    $this->priceDelta = $priceDelta;
  }
  /** @return string */
  public function getPriceDelta()
  {
    return $this->priceDelta;
  }
}

class RepricingRuleStatsBasedRule extends \Google\Model
{
  /** @var int */
  public $percentageDelta;
  /** @var string */
  public $priceDelta;

  /** @param int */
  public function setPercentageDelta($percentageDelta)
  {
    $this->percentageDelta = $percentageDelta;
  }
  /** @return int */
  public function getPercentageDelta()
  {
    return $this->percentageDelta;
  }
  /** @param string */
  public function setPriceDelta($priceDelta)
  {
    $this->priceDelta = $priceDelta;
  }
  /** @return string */
  public function getPriceDelta()
  {
    return $this->priceDelta;
  }
}

class RequestPhoneVerificationRequest extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $phoneRegionCode;
  /** @var string */
  public $phoneVerificationMethod;

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
  public function setPhoneRegionCode($phoneRegionCode)
  {
    $this->phoneRegionCode = $phoneRegionCode;
  }
  /** @return string */
  public function getPhoneRegionCode()
  {
    return $this->phoneRegionCode;
  }
  /** @param string */
  public function setPhoneVerificationMethod($phoneVerificationMethod)
  {
    $this->phoneVerificationMethod = $phoneVerificationMethod;
  }
  /** @return string */
  public function getPhoneVerificationMethod()
  {
    return $this->phoneVerificationMethod;
  }
}

class RequestPhoneVerificationResponse extends \Google\Model
{
  /** @var string */
  public $verificationId;

  /** @param string */
  public function setVerificationId($verificationId)
  {
    $this->verificationId = $verificationId;
  }
  /** @return string */
  public function getVerificationId()
  {
    return $this->verificationId;
  }
}

class RequestReviewBuyOnGoogleProgramRequest extends \Google\Model
{
}

class RequestReviewFreeListingsRequest extends \Google\Model
{
  /** @var string */
  public $regionCode;

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

class RequestReviewShoppingAdsRequest extends \Google\Model
{
  /** @var string */
  public $regionCode;

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

class ReturnAddress extends \Google\Model
{
  /** @var ReturnAddressAddress */
  public $address;
  /** @var string */
  public $country;
  /** @var string */
  public $kind;
  /** @var string */
  public $label;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $returnAddressId;
  protected $addressType = ReturnAddressAddress::class;
  protected $addressDataType = '';
  /** @param ReturnAddressAddress */
  public function setAddress(ReturnAddressAddress $address)
  {
    $this->address = $address;
  }
  /** @return ReturnAddressAddress */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
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
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
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
  public function setReturnAddressId($returnAddressId)
  {
    $this->returnAddressId = $returnAddressId;
  }
  /** @return string */
  public function getReturnAddressId()
  {
    return $this->returnAddressId;
  }
}

class ReturnAddressAddress extends \Google\Collection
{
  /** @var string */
  public $country;
  /** @var string */
  public $locality;
  /** @var string */
  public $postalCode;
  /** @var string */
  public $recipientName;
  /** @var string */
  public $region;
  /** @var string[] */
  public $streetAddress;
  protected $collection_key = 'streetAddress';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
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
  public function setRecipientName($recipientName)
  {
    $this->recipientName = $recipientName;
  }
  /** @return string */
  public function getRecipientName()
  {
    return $this->recipientName;
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
  /** @param string[] */
  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }
  /** @return string[] */
  public function getStreetAddress()
  {
    return $this->streetAddress;
  }
}

class ReturnPolicy extends \Google\Collection
{
  /** @var string */
  public $country;
  /** @var string */
  public $kind;
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var string[] */
  public $nonFreeReturnReasons;
  /** @var ReturnPolicyPolicy */
  public $policy;
  /** @var string */
  public $returnPolicyId;
  /** @var Price */
  public $returnShippingFee;
  /** @var ReturnPolicySeasonalOverride[] */
  public $seasonalOverrides;
  protected $collection_key = 'seasonalOverrides';
  protected $policyType = ReturnPolicyPolicy::class;
  protected $policyDataType = '';
  protected $returnShippingFeeType = Price::class;
  protected $returnShippingFeeDataType = '';
  protected $seasonalOverridesType = ReturnPolicySeasonalOverride::class;
  protected $seasonalOverridesDataType = 'array';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
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
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
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
  public function setNonFreeReturnReasons($nonFreeReturnReasons)
  {
    $this->nonFreeReturnReasons = $nonFreeReturnReasons;
  }
  /** @return string[] */
  public function getNonFreeReturnReasons()
  {
    return $this->nonFreeReturnReasons;
  }
  /** @param ReturnPolicyPolicy */
  public function setPolicy(ReturnPolicyPolicy $policy)
  {
    $this->policy = $policy;
  }
  /** @return ReturnPolicyPolicy */
  public function getPolicy()
  {
    return $this->policy;
  }
  /** @param string */
  public function setReturnPolicyId($returnPolicyId)
  {
    $this->returnPolicyId = $returnPolicyId;
  }
  /** @return string */
  public function getReturnPolicyId()
  {
    return $this->returnPolicyId;
  }
  /** @param Price */
  public function setReturnShippingFee(Price $returnShippingFee)
  {
    $this->returnShippingFee = $returnShippingFee;
  }
  /** @return Price */
  public function getReturnShippingFee()
  {
    return $this->returnShippingFee;
  }
  /** @param ReturnPolicySeasonalOverride[] */
  public function setSeasonalOverrides($seasonalOverrides)
  {
    $this->seasonalOverrides = $seasonalOverrides;
  }
  /** @return ReturnPolicySeasonalOverride[] */
  public function getSeasonalOverrides()
  {
    return $this->seasonalOverrides;
  }
}

class ReturnPolicyOnline extends \Google\Collection
{
  /** @var string[] */
  public $countries;
  /** @var string[] */
  public $itemConditions;
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var ReturnPolicyOnlinePolicy */
  public $policy;
  /** @var ReturnPolicyOnlineRestockingFee */
  public $restockingFee;
  /** @var string[] */
  public $returnMethods;
  /** @var string */
  public $returnPolicyId;
  /** @var string */
  public $returnPolicyUri;
  /** @var ReturnPolicyOnlineReturnReasonCategoryInfo[] */
  public $returnReasonCategoryInfo;
  protected $collection_key = 'returnReasonCategoryInfo';
  protected $policyType = ReturnPolicyOnlinePolicy::class;
  protected $policyDataType = '';
  protected $restockingFeeType = ReturnPolicyOnlineRestockingFee::class;
  protected $restockingFeeDataType = '';
  protected $returnReasonCategoryInfoType = ReturnPolicyOnlineReturnReasonCategoryInfo::class;
  protected $returnReasonCategoryInfoDataType = 'array';
  /** @param string[] */
  public function setCountries($countries)
  {
    $this->countries = $countries;
  }
  /** @return string[] */
  public function getCountries()
  {
    return $this->countries;
  }
  /** @param string[] */
  public function setItemConditions($itemConditions)
  {
    $this->itemConditions = $itemConditions;
  }
  /** @return string[] */
  public function getItemConditions()
  {
    return $this->itemConditions;
  }
  /** @param string */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
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
  /** @param ReturnPolicyOnlinePolicy */
  public function setPolicy(ReturnPolicyOnlinePolicy $policy)
  {
    $this->policy = $policy;
  }
  /** @return ReturnPolicyOnlinePolicy */
  public function getPolicy()
  {
    return $this->policy;
  }
  /** @param ReturnPolicyOnlineRestockingFee */
  public function setRestockingFee(ReturnPolicyOnlineRestockingFee $restockingFee)
  {
    $this->restockingFee = $restockingFee;
  }
  /** @return ReturnPolicyOnlineRestockingFee */
  public function getRestockingFee()
  {
    return $this->restockingFee;
  }
  /** @param string[] */
  public function setReturnMethods($returnMethods)
  {
    $this->returnMethods = $returnMethods;
  }
  /** @return string[] */
  public function getReturnMethods()
  {
    return $this->returnMethods;
  }
  /** @param string */
  public function setReturnPolicyId($returnPolicyId)
  {
    $this->returnPolicyId = $returnPolicyId;
  }
  /** @return string */
  public function getReturnPolicyId()
  {
    return $this->returnPolicyId;
  }
  /** @param string */
  public function setReturnPolicyUri($returnPolicyUri)
  {
    $this->returnPolicyUri = $returnPolicyUri;
  }
  /** @return string */
  public function getReturnPolicyUri()
  {
    return $this->returnPolicyUri;
  }
  /** @param ReturnPolicyOnlineReturnReasonCategoryInfo[] */
  public function setReturnReasonCategoryInfo($returnReasonCategoryInfo)
  {
    $this->returnReasonCategoryInfo = $returnReasonCategoryInfo;
  }
  /** @return ReturnPolicyOnlineReturnReasonCategoryInfo[] */
  public function getReturnReasonCategoryInfo()
  {
    return $this->returnReasonCategoryInfo;
  }
}

class ReturnPolicyOnlinePolicy extends \Google\Model
{
  /** @var string */
  public $days;
  /** @var string */
  public $type;

  /** @param string */
  public function setDays($days)
  {
    $this->days = $days;
  }
  /** @return string */
  public function getDays()
  {
    return $this->days;
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

class ReturnPolicyOnlineRestockingFee extends \Google\Model
{
  /** @var PriceAmount */
  public $fixedFee;
  /** @var int */
  public $microPercent;
  protected $fixedFeeType = PriceAmount::class;
  protected $fixedFeeDataType = '';
  /** @param PriceAmount */
  public function setFixedFee(PriceAmount $fixedFee)
  {
    $this->fixedFee = $fixedFee;
  }
  /** @return PriceAmount */
  public function getFixedFee()
  {
    return $this->fixedFee;
  }
  /** @param int */
  public function setMicroPercent($microPercent)
  {
    $this->microPercent = $microPercent;
  }
  /** @return int */
  public function getMicroPercent()
  {
    return $this->microPercent;
  }
}

class ReturnPolicyOnlineReturnReasonCategoryInfo extends \Google\Model
{
  /** @var string */
  public $returnLabelSource;
  /** @var string */
  public $returnReasonCategory;
  /** @var ReturnPolicyOnlineReturnShippingFee */
  public $returnShippingFee;
  protected $returnShippingFeeType = ReturnPolicyOnlineReturnShippingFee::class;
  protected $returnShippingFeeDataType = '';
  /** @param string */
  public function setReturnLabelSource($returnLabelSource)
  {
    $this->returnLabelSource = $returnLabelSource;
  }
  /** @return string */
  public function getReturnLabelSource()
  {
    return $this->returnLabelSource;
  }
  /** @param string */
  public function setReturnReasonCategory($returnReasonCategory)
  {
    $this->returnReasonCategory = $returnReasonCategory;
  }
  /** @return string */
  public function getReturnReasonCategory()
  {
    return $this->returnReasonCategory;
  }
  /** @param ReturnPolicyOnlineReturnShippingFee */
  public function setReturnShippingFee(ReturnPolicyOnlineReturnShippingFee $returnShippingFee)
  {
    $this->returnShippingFee = $returnShippingFee;
  }
  /** @return ReturnPolicyOnlineReturnShippingFee */
  public function getReturnShippingFee()
  {
    return $this->returnShippingFee;
  }
}

class ReturnPolicyOnlineReturnShippingFee extends \Google\Model
{
  /** @var PriceAmount */
  public $fixedFee;
  /** @var string */
  public $type;
  protected $fixedFeeType = PriceAmount::class;
  protected $fixedFeeDataType = '';
  /** @param PriceAmount */
  public function setFixedFee(PriceAmount $fixedFee)
  {
    $this->fixedFee = $fixedFee;
  }
  /** @return PriceAmount */
  public function getFixedFee()
  {
    return $this->fixedFee;
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

class ReturnPolicyPolicy extends \Google\Model
{
  /** @var string */
  public $lastReturnDate;
  /** @var string */
  public $numberOfDays;
  /** @var string */
  public $type;

  /** @param string */
  public function setLastReturnDate($lastReturnDate)
  {
    $this->lastReturnDate = $lastReturnDate;
  }
  /** @return string */
  public function getLastReturnDate()
  {
    return $this->lastReturnDate;
  }
  /** @param string */
  public function setNumberOfDays($numberOfDays)
  {
    $this->numberOfDays = $numberOfDays;
  }
  /** @return string */
  public function getNumberOfDays()
  {
    return $this->numberOfDays;
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

class ReturnPolicySeasonalOverride extends \Google\Model
{
  /** @var string */
  public $endDate;
  /** @var string */
  public $name;
  /** @var ReturnPolicyPolicy */
  public $policy;
  /** @var string */
  public $startDate;
  protected $policyType = ReturnPolicyPolicy::class;
  protected $policyDataType = '';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param ReturnPolicyPolicy */
  public function setPolicy(ReturnPolicyPolicy $policy)
  {
    $this->policy = $policy;
  }
  /** @return ReturnPolicyPolicy */
  public function getPolicy()
  {
    return $this->policy;
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

class ReturnPricingInfo extends \Google\Model
{
  /** @var bool */
  public $chargeReturnShippingFee;
  /** @var MonetaryAmount */
  public $maxReturnShippingFee;
  /** @var MonetaryAmount */
  public $refundableItemsTotalAmount;
  /** @var MonetaryAmount */
  public $refundableShippingAmount;
  /** @var MonetaryAmount */
  public $totalRefundedAmount;
  protected $maxReturnShippingFeeType = MonetaryAmount::class;
  protected $maxReturnShippingFeeDataType = '';
  protected $refundableItemsTotalAmountType = MonetaryAmount::class;
  protected $refundableItemsTotalAmountDataType = '';
  protected $refundableShippingAmountType = MonetaryAmount::class;
  protected $refundableShippingAmountDataType = '';
  protected $totalRefundedAmountType = MonetaryAmount::class;
  protected $totalRefundedAmountDataType = '';
  /** @param bool */
  public function setChargeReturnShippingFee($chargeReturnShippingFee)
  {
    $this->chargeReturnShippingFee = $chargeReturnShippingFee;
  }
  /** @return bool */
  public function getChargeReturnShippingFee()
  {
    return $this->chargeReturnShippingFee;
  }
  /** @param MonetaryAmount */
  public function setMaxReturnShippingFee(MonetaryAmount $maxReturnShippingFee)
  {
    $this->maxReturnShippingFee = $maxReturnShippingFee;
  }
  /** @return MonetaryAmount */
  public function getMaxReturnShippingFee()
  {
    return $this->maxReturnShippingFee;
  }
  /** @param MonetaryAmount */
  public function setRefundableItemsTotalAmount(MonetaryAmount $refundableItemsTotalAmount)
  {
    $this->refundableItemsTotalAmount = $refundableItemsTotalAmount;
  }
  /** @return MonetaryAmount */
  public function getRefundableItemsTotalAmount()
  {
    return $this->refundableItemsTotalAmount;
  }
  /** @param MonetaryAmount */
  public function setRefundableShippingAmount(MonetaryAmount $refundableShippingAmount)
  {
    $this->refundableShippingAmount = $refundableShippingAmount;
  }
  /** @return MonetaryAmount */
  public function getRefundableShippingAmount()
  {
    return $this->refundableShippingAmount;
  }
  /** @param MonetaryAmount */
  public function setTotalRefundedAmount(MonetaryAmount $totalRefundedAmount)
  {
    $this->totalRefundedAmount = $totalRefundedAmount;
  }
  /** @return MonetaryAmount */
  public function getTotalRefundedAmount()
  {
    return $this->totalRefundedAmount;
  }
}

class ReturnShipment extends \Google\Collection
{
  /** @var string */
  public $creationDate;
  /** @var string */
  public $deliveryDate;
  /** @var string */
  public $returnMethodType;
  /** @var string */
  public $shipmentId;
  /** @var ShipmentTrackingInfo[] */
  public $shipmentTrackingInfos;
  /** @var string */
  public $shippingDate;
  /** @var string */
  public $state;
  protected $collection_key = 'shipmentTrackingInfos';
  protected $shipmentTrackingInfosType = ShipmentTrackingInfo::class;
  protected $shipmentTrackingInfosDataType = 'array';
  /** @param string */
  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }
  /** @return string */
  public function getCreationDate()
  {
    return $this->creationDate;
  }
  /** @param string */
  public function setDeliveryDate($deliveryDate)
  {
    $this->deliveryDate = $deliveryDate;
  }
  /** @return string */
  public function getDeliveryDate()
  {
    return $this->deliveryDate;
  }
  /** @param string */
  public function setReturnMethodType($returnMethodType)
  {
    $this->returnMethodType = $returnMethodType;
  }
  /** @return string */
  public function getReturnMethodType()
  {
    return $this->returnMethodType;
  }
  /** @param string */
  public function setShipmentId($shipmentId)
  {
    $this->shipmentId = $shipmentId;
  }
  /** @return string */
  public function getShipmentId()
  {
    return $this->shipmentId;
  }
  /** @param ShipmentTrackingInfo[] */
  public function setShipmentTrackingInfos($shipmentTrackingInfos)
  {
    $this->shipmentTrackingInfos = $shipmentTrackingInfos;
  }
  /** @return ShipmentTrackingInfo[] */
  public function getShipmentTrackingInfos()
  {
    return $this->shipmentTrackingInfos;
  }
  /** @param string */
  public function setShippingDate($shippingDate)
  {
    $this->shippingDate = $shippingDate;
  }
  /** @return string */
  public function getShippingDate()
  {
    return $this->shippingDate;
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

class ReturnShippingLabel extends \Google\Model
{
  /** @var string */
  public $carrier;
  /** @var string */
  public $labelUri;
  /** @var string */
  public $trackingId;

  /** @param string */
  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }
  /** @return string */
  public function getCarrier()
  {
    return $this->carrier;
  }
  /** @param string */
  public function setLabelUri($labelUri)
  {
    $this->labelUri = $labelUri;
  }
  /** @return string */
  public function getLabelUri()
  {
    return $this->labelUri;
  }
  /** @param string */
  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
  /** @return string */
  public function getTrackingId()
  {
    return $this->trackingId;
  }
}

class ReturnaddressCustomBatchRequest extends \Google\Collection
{
  /** @var ReturnaddressCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = ReturnaddressCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param ReturnaddressCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ReturnaddressCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class ReturnaddressCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  /** @var ReturnAddress */
  public $returnAddress;
  /** @var string */
  public $returnAddressId;
  protected $returnAddressType = ReturnAddress::class;
  protected $returnAddressDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param ReturnAddress */
  public function setReturnAddress(ReturnAddress $returnAddress)
  {
    $this->returnAddress = $returnAddress;
  }
  /** @return ReturnAddress */
  public function getReturnAddress()
  {
    return $this->returnAddress;
  }
  /** @param string */
  public function setReturnAddressId($returnAddressId)
  {
    $this->returnAddressId = $returnAddressId;
  }
  /** @return string */
  public function getReturnAddressId()
  {
    return $this->returnAddressId;
  }
}

class ReturnaddressCustomBatchResponse extends \Google\Collection
{
  /** @var ReturnaddressCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = ReturnaddressCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param ReturnaddressCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ReturnaddressCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class ReturnaddressCustomBatchResponseEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $kind;
  /** @var ReturnAddress */
  public $returnAddress;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $returnAddressType = ReturnAddress::class;
  protected $returnAddressDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param ReturnAddress */
  public function setReturnAddress(ReturnAddress $returnAddress)
  {
    $this->returnAddress = $returnAddress;
  }
  /** @return ReturnAddress */
  public function getReturnAddress()
  {
    return $this->returnAddress;
  }
}

class ReturnaddressListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var ReturnAddress[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = ReturnAddress::class;
  protected $resourcesDataType = 'array';
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
  /** @param ReturnAddress[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return ReturnAddress[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class ReturnpolicyCustomBatchRequest extends \Google\Collection
{
  /** @var ReturnpolicyCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = ReturnpolicyCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param ReturnpolicyCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ReturnpolicyCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class ReturnpolicyCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  /** @var ReturnPolicy */
  public $returnPolicy;
  /** @var string */
  public $returnPolicyId;
  protected $returnPolicyType = ReturnPolicy::class;
  protected $returnPolicyDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param ReturnPolicy */
  public function setReturnPolicy(ReturnPolicy $returnPolicy)
  {
    $this->returnPolicy = $returnPolicy;
  }
  /** @return ReturnPolicy */
  public function getReturnPolicy()
  {
    return $this->returnPolicy;
  }
  /** @param string */
  public function setReturnPolicyId($returnPolicyId)
  {
    $this->returnPolicyId = $returnPolicyId;
  }
  /** @return string */
  public function getReturnPolicyId()
  {
    return $this->returnPolicyId;
  }
}

class ReturnpolicyCustomBatchResponse extends \Google\Collection
{
  /** @var ReturnpolicyCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = ReturnpolicyCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param ReturnpolicyCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ReturnpolicyCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class ReturnpolicyCustomBatchResponseEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $kind;
  /** @var ReturnPolicy */
  public $returnPolicy;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $returnPolicyType = ReturnPolicy::class;
  protected $returnPolicyDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param ReturnPolicy */
  public function setReturnPolicy(ReturnPolicy $returnPolicy)
  {
    $this->returnPolicy = $returnPolicy;
  }
  /** @return ReturnPolicy */
  public function getReturnPolicy()
  {
    return $this->returnPolicy;
  }
}

class ReturnpolicyListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var ReturnPolicy[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = ReturnPolicy::class;
  protected $resourcesDataType = 'array';
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
  /** @param ReturnPolicy[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return ReturnPolicy[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class Row extends \Google\Collection
{
  /** @var Value[] */
  public $cells;
  protected $collection_key = 'cells';
  protected $cellsType = Value::class;
  protected $cellsDataType = 'array';
  /** @param Value[] */
  public function setCells($cells)
  {
    $this->cells = $cells;
  }
  /** @return Value[] */
  public function getCells()
  {
    return $this->cells;
  }
}

class SearchRequest extends \Google\Model
{
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $query;

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
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
}

class SearchResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ReportRow[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = ReportRow::class;
  protected $resultsDataType = 'array';
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
  /** @param ReportRow[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return ReportRow[] */
  public function getResults()
  {
    return $this->results;
  }
}

class Segments extends \Google\Model
{
  /** @var string */
  public $brand;
  /** @var string */
  public $categoryL1;
  /** @var string */
  public $categoryL2;
  /** @var string */
  public $categoryL3;
  /** @var string */
  public $categoryL4;
  /** @var string */
  public $categoryL5;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $customLabel0;
  /** @var string */
  public $customLabel1;
  /** @var string */
  public $customLabel2;
  /** @var string */
  public $customLabel3;
  /** @var string */
  public $customLabel4;
  /** @var string */
  public $customerCountryCode;
  /** @var Date */
  public $date;
  /** @var string */
  public $offerId;
  /** @var string */
  public $productTypeL1;
  /** @var string */
  public $productTypeL2;
  /** @var string */
  public $productTypeL3;
  /** @var string */
  public $productTypeL4;
  /** @var string */
  public $productTypeL5;
  /** @var string */
  public $program;
  /** @var string */
  public $title;
  /** @var Date */
  public $week;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  protected $weekType = Date::class;
  protected $weekDataType = '';
  /** @param string */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param string */
  public function setCategoryL1($categoryL1)
  {
    $this->categoryL1 = $categoryL1;
  }
  /** @return string */
  public function getCategoryL1()
  {
    return $this->categoryL1;
  }
  /** @param string */
  public function setCategoryL2($categoryL2)
  {
    $this->categoryL2 = $categoryL2;
  }
  /** @return string */
  public function getCategoryL2()
  {
    return $this->categoryL2;
  }
  /** @param string */
  public function setCategoryL3($categoryL3)
  {
    $this->categoryL3 = $categoryL3;
  }
  /** @return string */
  public function getCategoryL3()
  {
    return $this->categoryL3;
  }
  /** @param string */
  public function setCategoryL4($categoryL4)
  {
    $this->categoryL4 = $categoryL4;
  }
  /** @return string */
  public function getCategoryL4()
  {
    return $this->categoryL4;
  }
  /** @param string */
  public function setCategoryL5($categoryL5)
  {
    $this->categoryL5 = $categoryL5;
  }
  /** @return string */
  public function getCategoryL5()
  {
    return $this->categoryL5;
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
  public function setCustomLabel0($customLabel0)
  {
    $this->customLabel0 = $customLabel0;
  }
  /** @return string */
  public function getCustomLabel0()
  {
    return $this->customLabel0;
  }
  /** @param string */
  public function setCustomLabel1($customLabel1)
  {
    $this->customLabel1 = $customLabel1;
  }
  /** @return string */
  public function getCustomLabel1()
  {
    return $this->customLabel1;
  }
  /** @param string */
  public function setCustomLabel2($customLabel2)
  {
    $this->customLabel2 = $customLabel2;
  }
  /** @return string */
  public function getCustomLabel2()
  {
    return $this->customLabel2;
  }
  /** @param string */
  public function setCustomLabel3($customLabel3)
  {
    $this->customLabel3 = $customLabel3;
  }
  /** @return string */
  public function getCustomLabel3()
  {
    return $this->customLabel3;
  }
  /** @param string */
  public function setCustomLabel4($customLabel4)
  {
    $this->customLabel4 = $customLabel4;
  }
  /** @return string */
  public function getCustomLabel4()
  {
    return $this->customLabel4;
  }
  /** @param string */
  public function setCustomerCountryCode($customerCountryCode)
  {
    $this->customerCountryCode = $customerCountryCode;
  }
  /** @return string */
  public function getCustomerCountryCode()
  {
    return $this->customerCountryCode;
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
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  /** @return string */
  public function getOfferId()
  {
    return $this->offerId;
  }
  /** @param string */
  public function setProductTypeL1($productTypeL1)
  {
    $this->productTypeL1 = $productTypeL1;
  }
  /** @return string */
  public function getProductTypeL1()
  {
    return $this->productTypeL1;
  }
  /** @param string */
  public function setProductTypeL2($productTypeL2)
  {
    $this->productTypeL2 = $productTypeL2;
  }
  /** @return string */
  public function getProductTypeL2()
  {
    return $this->productTypeL2;
  }
  /** @param string */
  public function setProductTypeL3($productTypeL3)
  {
    $this->productTypeL3 = $productTypeL3;
  }
  /** @return string */
  public function getProductTypeL3()
  {
    return $this->productTypeL3;
  }
  /** @param string */
  public function setProductTypeL4($productTypeL4)
  {
    $this->productTypeL4 = $productTypeL4;
  }
  /** @return string */
  public function getProductTypeL4()
  {
    return $this->productTypeL4;
  }
  /** @param string */
  public function setProductTypeL5($productTypeL5)
  {
    $this->productTypeL5 = $productTypeL5;
  }
  /** @return string */
  public function getProductTypeL5()
  {
    return $this->productTypeL5;
  }
  /** @param string */
  public function setProgram($program)
  {
    $this->program = $program;
  }
  /** @return string */
  public function getProgram()
  {
    return $this->program;
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
  /** @param Date */
  public function setWeek(Date $week)
  {
    $this->week = $week;
  }
  /** @return Date */
  public function getWeek()
  {
    return $this->week;
  }
}

class Service extends \Google\Collection
{
  /** @var bool */
  public $active;
  /** @var string */
  public $currency;
  /** @var string */
  public $deliveryCountry;
  /** @var DeliveryTime */
  public $deliveryTime;
  /** @var string */
  public $eligibility;
  /** @var Price */
  public $minimumOrderValue;
  /** @var MinimumOrderValueTable */
  public $minimumOrderValueTable;
  /** @var string */
  public $name;
  /** @var PickupCarrierService */
  public $pickupService;
  /** @var RateGroup[] */
  public $rateGroups;
  /** @var string */
  public $shipmentType;
  protected $collection_key = 'rateGroups';
  protected $deliveryTimeType = DeliveryTime::class;
  protected $deliveryTimeDataType = '';
  protected $minimumOrderValueType = Price::class;
  protected $minimumOrderValueDataType = '';
  protected $minimumOrderValueTableType = MinimumOrderValueTable::class;
  protected $minimumOrderValueTableDataType = '';
  protected $pickupServiceType = PickupCarrierService::class;
  protected $pickupServiceDataType = '';
  protected $rateGroupsType = RateGroup::class;
  protected $rateGroupsDataType = 'array';
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
  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }
  /** @return string */
  public function getCurrency()
  {
    return $this->currency;
  }
  /** @param string */
  public function setDeliveryCountry($deliveryCountry)
  {
    $this->deliveryCountry = $deliveryCountry;
  }
  /** @return string */
  public function getDeliveryCountry()
  {
    return $this->deliveryCountry;
  }
  /** @param DeliveryTime */
  public function setDeliveryTime(DeliveryTime $deliveryTime)
  {
    $this->deliveryTime = $deliveryTime;
  }
  /** @return DeliveryTime */
  public function getDeliveryTime()
  {
    return $this->deliveryTime;
  }
  /** @param string */
  public function setEligibility($eligibility)
  {
    $this->eligibility = $eligibility;
  }
  /** @return string */
  public function getEligibility()
  {
    return $this->eligibility;
  }
  /** @param Price */
  public function setMinimumOrderValue(Price $minimumOrderValue)
  {
    $this->minimumOrderValue = $minimumOrderValue;
  }
  /** @return Price */
  public function getMinimumOrderValue()
  {
    return $this->minimumOrderValue;
  }
  /** @param MinimumOrderValueTable */
  public function setMinimumOrderValueTable(MinimumOrderValueTable $minimumOrderValueTable)
  {
    $this->minimumOrderValueTable = $minimumOrderValueTable;
  }
  /** @return MinimumOrderValueTable */
  public function getMinimumOrderValueTable()
  {
    return $this->minimumOrderValueTable;
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
  /** @param PickupCarrierService */
  public function setPickupService(PickupCarrierService $pickupService)
  {
    $this->pickupService = $pickupService;
  }
  /** @return PickupCarrierService */
  public function getPickupService()
  {
    return $this->pickupService;
  }
  /** @param RateGroup[] */
  public function setRateGroups($rateGroups)
  {
    $this->rateGroups = $rateGroups;
  }
  /** @return RateGroup[] */
  public function getRateGroups()
  {
    return $this->rateGroups;
  }
  /** @param string */
  public function setShipmentType($shipmentType)
  {
    $this->shipmentType = $shipmentType;
  }
  /** @return string */
  public function getShipmentType()
  {
    return $this->shipmentType;
  }
}

class SettlementReport extends \Google\Collection
{
  /** @var string */
  public $endDate;
  /** @var string */
  public $kind;
  /** @var Price */
  public $previousBalance;
  /** @var string */
  public $settlementId;
  /** @var string */
  public $startDate;
  /** @var Price */
  public $transferAmount;
  /** @var string */
  public $transferDate;
  /** @var string[] */
  public $transferIds;
  protected $collection_key = 'transferIds';
  protected $previousBalanceType = Price::class;
  protected $previousBalanceDataType = '';
  protected $transferAmountType = Price::class;
  protected $transferAmountDataType = '';
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param Price */
  public function setPreviousBalance(Price $previousBalance)
  {
    $this->previousBalance = $previousBalance;
  }
  /** @return Price */
  public function getPreviousBalance()
  {
    return $this->previousBalance;
  }
  /** @param string */
  public function setSettlementId($settlementId)
  {
    $this->settlementId = $settlementId;
  }
  /** @return string */
  public function getSettlementId()
  {
    return $this->settlementId;
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
  /** @param Price */
  public function setTransferAmount(Price $transferAmount)
  {
    $this->transferAmount = $transferAmount;
  }
  /** @return Price */
  public function getTransferAmount()
  {
    return $this->transferAmount;
  }
  /** @param string */
  public function setTransferDate($transferDate)
  {
    $this->transferDate = $transferDate;
  }
  /** @return string */
  public function getTransferDate()
  {
    return $this->transferDate;
  }
  /** @param string[] */
  public function setTransferIds($transferIds)
  {
    $this->transferIds = $transferIds;
  }
  /** @return string[] */
  public function getTransferIds()
  {
    return $this->transferIds;
  }
}

class SettlementTransaction extends \Google\Model
{
  /** @var SettlementTransactionAmount */
  public $amount;
  /** @var SettlementTransactionIdentifiers */
  public $identifiers;
  /** @var string */
  public $kind;
  /** @var SettlementTransactionTransaction */
  public $transaction;
  protected $amountType = SettlementTransactionAmount::class;
  protected $amountDataType = '';
  protected $identifiersType = SettlementTransactionIdentifiers::class;
  protected $identifiersDataType = '';
  protected $transactionType = SettlementTransactionTransaction::class;
  protected $transactionDataType = '';
  /** @param SettlementTransactionAmount */
  public function setAmount(SettlementTransactionAmount $amount)
  {
    $this->amount = $amount;
  }
  /** @return SettlementTransactionAmount */
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param SettlementTransactionIdentifiers */
  public function setIdentifiers(SettlementTransactionIdentifiers $identifiers)
  {
    $this->identifiers = $identifiers;
  }
  /** @return SettlementTransactionIdentifiers */
  public function getIdentifiers()
  {
    return $this->identifiers;
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
  /** @param SettlementTransactionTransaction */
  public function setTransaction(SettlementTransactionTransaction $transaction)
  {
    $this->transaction = $transaction;
  }
  /** @return SettlementTransactionTransaction */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

class SettlementTransactionAmount extends \Google\Model
{
  /** @var SettlementTransactionAmountCommission */
  public $commission;
  /** @var string */
  public $description;
  /** @var Price */
  public $transactionAmount;
  /** @var string */
  public $type;
  protected $commissionType = SettlementTransactionAmountCommission::class;
  protected $commissionDataType = '';
  protected $transactionAmountType = Price::class;
  protected $transactionAmountDataType = '';
  /** @param SettlementTransactionAmountCommission */
  public function setCommission(SettlementTransactionAmountCommission $commission)
  {
    $this->commission = $commission;
  }
  /** @return SettlementTransactionAmountCommission */
  public function getCommission()
  {
    return $this->commission;
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
  /** @param Price */
  public function setTransactionAmount(Price $transactionAmount)
  {
    $this->transactionAmount = $transactionAmount;
  }
  /** @return Price */
  public function getTransactionAmount()
  {
    return $this->transactionAmount;
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

class SettlementTransactionAmountCommission extends \Google\Model
{
  /** @var string */
  public $category;
  /** @var string */
  public $rate;

  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param string */
  public function setRate($rate)
  {
    $this->rate = $rate;
  }
  /** @return string */
  public function getRate()
  {
    return $this->rate;
  }
}

class SettlementTransactionIdentifiers extends \Google\Collection
{
  /** @var string */
  public $adjustmentId;
  /** @var string */
  public $merchantOrderId;
  /** @var string */
  public $orderItemId;
  /** @var string */
  public $settlementEntryId;
  /** @var string[] */
  public $shipmentIds;
  /** @var string */
  public $transactionId;
  protected $collection_key = 'shipmentIds';
  /** @param string */
  public function setAdjustmentId($adjustmentId)
  {
    $this->adjustmentId = $adjustmentId;
  }
  /** @return string */
  public function getAdjustmentId()
  {
    return $this->adjustmentId;
  }
  /** @param string */
  public function setMerchantOrderId($merchantOrderId)
  {
    $this->merchantOrderId = $merchantOrderId;
  }
  /** @return string */
  public function getMerchantOrderId()
  {
    return $this->merchantOrderId;
  }
  /** @param string */
  public function setOrderItemId($orderItemId)
  {
    $this->orderItemId = $orderItemId;
  }
  /** @return string */
  public function getOrderItemId()
  {
    return $this->orderItemId;
  }
  /** @param string */
  public function setSettlementEntryId($settlementEntryId)
  {
    $this->settlementEntryId = $settlementEntryId;
  }
  /** @return string */
  public function getSettlementEntryId()
  {
    return $this->settlementEntryId;
  }
  /** @param string[] */
  public function setShipmentIds($shipmentIds)
  {
    $this->shipmentIds = $shipmentIds;
  }
  /** @return string[] */
  public function getShipmentIds()
  {
    return $this->shipmentIds;
  }
  /** @param string */
  public function setTransactionId($transactionId)
  {
    $this->transactionId = $transactionId;
  }
  /** @return string */
  public function getTransactionId()
  {
    return $this->transactionId;
  }
}

class SettlementTransactionTransaction extends \Google\Model
{
  /** @var string */
  public $postDate;
  /** @var string */
  public $type;

  /** @param string */
  public function setPostDate($postDate)
  {
    $this->postDate = $postDate;
  }
  /** @return string */
  public function getPostDate()
  {
    return $this->postDate;
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

class SettlementreportsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var SettlementReport[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = SettlementReport::class;
  protected $resourcesDataType = 'array';
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
  /** @param SettlementReport[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return SettlementReport[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class SettlementtransactionsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var SettlementTransaction[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = SettlementTransaction::class;
  protected $resourcesDataType = 'array';
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
  /** @param SettlementTransaction[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return SettlementTransaction[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class ShipmentInvoice extends \Google\Collection
{
  /** @var InvoiceSummary */
  public $invoiceSummary;
  /** @var ShipmentInvoiceLineItemInvoice[] */
  public $lineItemInvoices;
  /** @var string */
  public $shipmentGroupId;
  protected $collection_key = 'lineItemInvoices';
  protected $invoiceSummaryType = InvoiceSummary::class;
  protected $invoiceSummaryDataType = '';
  protected $lineItemInvoicesType = ShipmentInvoiceLineItemInvoice::class;
  protected $lineItemInvoicesDataType = 'array';
  /** @param InvoiceSummary */
  public function setInvoiceSummary(InvoiceSummary $invoiceSummary)
  {
    $this->invoiceSummary = $invoiceSummary;
  }
  /** @return InvoiceSummary */
  public function getInvoiceSummary()
  {
    return $this->invoiceSummary;
  }
  /** @param ShipmentInvoiceLineItemInvoice[] */
  public function setLineItemInvoices($lineItemInvoices)
  {
    $this->lineItemInvoices = $lineItemInvoices;
  }
  /** @return ShipmentInvoiceLineItemInvoice[] */
  public function getLineItemInvoices()
  {
    return $this->lineItemInvoices;
  }
  /** @param string */
  public function setShipmentGroupId($shipmentGroupId)
  {
    $this->shipmentGroupId = $shipmentGroupId;
  }
  /** @return string */
  public function getShipmentGroupId()
  {
    return $this->shipmentGroupId;
  }
}

class ShipmentInvoiceLineItemInvoice extends \Google\Collection
{
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $productId;
  /** @var string[] */
  public $shipmentUnitIds;
  /** @var UnitInvoice */
  public $unitInvoice;
  protected $collection_key = 'shipmentUnitIds';
  protected $unitInvoiceType = UnitInvoice::class;
  protected $unitInvoiceDataType = '';
  /** @param string */
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  /** @return string */
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
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
  /** @param string[] */
  public function setShipmentUnitIds($shipmentUnitIds)
  {
    $this->shipmentUnitIds = $shipmentUnitIds;
  }
  /** @return string[] */
  public function getShipmentUnitIds()
  {
    return $this->shipmentUnitIds;
  }
  /** @param UnitInvoice */
  public function setUnitInvoice(UnitInvoice $unitInvoice)
  {
    $this->unitInvoice = $unitInvoice;
  }
  /** @return UnitInvoice */
  public function getUnitInvoice()
  {
    return $this->unitInvoice;
  }
}

class ShipmentTrackingInfo extends \Google\Model
{
  /** @var string */
  public $carrier;
  /** @var string */
  public $trackingNumber;

  /** @param string */
  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }
  /** @return string */
  public function getCarrier()
  {
    return $this->carrier;
  }
  /** @param string */
  public function setTrackingNumber($trackingNumber)
  {
    $this->trackingNumber = $trackingNumber;
  }
  /** @return string */
  public function getTrackingNumber()
  {
    return $this->trackingNumber;
  }
}

class ShippingSettings extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var PostalCodeGroup[] */
  public $postalCodeGroups;
  /** @var Service[] */
  public $services;
  /** @var Warehouse[] */
  public $warehouses;
  protected $collection_key = 'warehouses';
  protected $postalCodeGroupsType = PostalCodeGroup::class;
  protected $postalCodeGroupsDataType = 'array';
  protected $servicesType = Service::class;
  protected $servicesDataType = 'array';
  protected $warehousesType = Warehouse::class;
  protected $warehousesDataType = 'array';
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
  /** @param PostalCodeGroup[] */
  public function setPostalCodeGroups($postalCodeGroups)
  {
    $this->postalCodeGroups = $postalCodeGroups;
  }
  /** @return PostalCodeGroup[] */
  public function getPostalCodeGroups()
  {
    return $this->postalCodeGroups;
  }
  /** @param Service[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return Service[] */
  public function getServices()
  {
    return $this->services;
  }
  /** @param Warehouse[] */
  public function setWarehouses($warehouses)
  {
    $this->warehouses = $warehouses;
  }
  /** @return Warehouse[] */
  public function getWarehouses()
  {
    return $this->warehouses;
  }
}

class ShippingsettingsCustomBatchRequest extends \Google\Collection
{
  /** @var ShippingsettingsCustomBatchRequestEntry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = ShippingsettingsCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';
  /** @param ShippingsettingsCustomBatchRequestEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ShippingsettingsCustomBatchRequestEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class ShippingsettingsCustomBatchRequestEntry extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $batchId;
  /** @var string */
  public $merchantId;
  /** @var string */
  public $method;
  /** @var ShippingSettings */
  public $shippingSettings;
  protected $shippingSettingsType = ShippingSettings::class;
  protected $shippingSettingsDataType = '';
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
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param string */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /** @return string */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param ShippingSettings */
  public function setShippingSettings(ShippingSettings $shippingSettings)
  {
    $this->shippingSettings = $shippingSettings;
  }
  /** @return ShippingSettings */
  public function getShippingSettings()
  {
    return $this->shippingSettings;
  }
}

class ShippingsettingsCustomBatchResponse extends \Google\Collection
{
  /** @var ShippingsettingsCustomBatchResponseEntry[] */
  public $entries;
  /** @var string */
  public $kind;
  protected $collection_key = 'entries';
  protected $entriesType = ShippingsettingsCustomBatchResponseEntry::class;
  protected $entriesDataType = 'array';
  /** @param ShippingsettingsCustomBatchResponseEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ShippingsettingsCustomBatchResponseEntry[] */
  public function getEntries()
  {
    return $this->entries;
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
}

class ShippingsettingsCustomBatchResponseEntry extends \Google\Model
{
  /** @var string */
  public $batchId;
  /** @var Errors */
  public $errors;
  /** @var string */
  public $kind;
  /** @var ShippingSettings */
  public $shippingSettings;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  protected $shippingSettingsType = ShippingSettings::class;
  protected $shippingSettingsDataType = '';
  /** @param string */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /** @return string */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /** @param Errors */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /** @return Errors */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param ShippingSettings */
  public function setShippingSettings(ShippingSettings $shippingSettings)
  {
    $this->shippingSettings = $shippingSettings;
  }
  /** @return ShippingSettings */
  public function getShippingSettings()
  {
    return $this->shippingSettings;
  }
}

class ShippingsettingsGetSupportedCarriersResponse extends \Google\Collection
{
  /** @var CarriersCarrier[] */
  public $carriers;
  /** @var string */
  public $kind;
  protected $collection_key = 'carriers';
  protected $carriersType = CarriersCarrier::class;
  protected $carriersDataType = 'array';
  /** @param CarriersCarrier[] */
  public function setCarriers($carriers)
  {
    $this->carriers = $carriers;
  }
  /** @return CarriersCarrier[] */
  public function getCarriers()
  {
    return $this->carriers;
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
}

class ShippingsettingsGetSupportedHolidaysResponse extends \Google\Collection
{
  /** @var HolidaysHoliday[] */
  public $holidays;
  /** @var string */
  public $kind;
  protected $collection_key = 'holidays';
  protected $holidaysType = HolidaysHoliday::class;
  protected $holidaysDataType = 'array';
  /** @param HolidaysHoliday[] */
  public function setHolidays($holidays)
  {
    $this->holidays = $holidays;
  }
  /** @return HolidaysHoliday[] */
  public function getHolidays()
  {
    return $this->holidays;
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
}

class ShippingsettingsGetSupportedPickupServicesResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var PickupServicesPickupService[] */
  public $pickupServices;
  protected $collection_key = 'pickupServices';
  protected $pickupServicesType = PickupServicesPickupService::class;
  protected $pickupServicesDataType = 'array';
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
  /** @param PickupServicesPickupService[] */
  public function setPickupServices($pickupServices)
  {
    $this->pickupServices = $pickupServices;
  }
  /** @return PickupServicesPickupService[] */
  public function getPickupServices()
  {
    return $this->pickupServices;
  }
}

class ShippingsettingsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var ShippingSettings[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = ShippingSettings::class;
  protected $resourcesDataType = 'array';
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
  /** @param ShippingSettings[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return ShippingSettings[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class ShoppingAdsProgramStatus extends \Google\Collection
{
  /** @var string */
  public $globalState;
  /** @var ShoppingAdsProgramStatusRegionStatus[] */
  public $regionStatuses;
  protected $collection_key = 'regionStatuses';
  protected $regionStatusesType = ShoppingAdsProgramStatusRegionStatus::class;
  protected $regionStatusesDataType = 'array';
  /** @param string */
  public function setGlobalState($globalState)
  {
    $this->globalState = $globalState;
  }
  /** @return string */
  public function getGlobalState()
  {
    return $this->globalState;
  }
  /** @param ShoppingAdsProgramStatusRegionStatus[] */
  public function setRegionStatuses($regionStatuses)
  {
    $this->regionStatuses = $regionStatuses;
  }
  /** @return ShoppingAdsProgramStatusRegionStatus[] */
  public function getRegionStatuses()
  {
    return $this->regionStatuses;
  }
}

class ShoppingAdsProgramStatusRegionStatus extends \Google\Collection
{
  /** @var string */
  public $disapprovalDate;
  /** @var string */
  public $eligibilityStatus;
  /** @var string[] */
  public $onboardingIssues;
  /** @var string[] */
  public $regionCodes;
  /** @var string */
  public $reviewEligibilityStatus;
  /** @var string */
  public $reviewIneligibilityReason;
  /** @var string */
  public $reviewIneligibilityReasonDescription;
  /** @var ShoppingAdsProgramStatusReviewIneligibilityReasonDetails */
  public $reviewIneligibilityReasonDetails;
  /** @var string[] */
  public $reviewIssues;
  protected $collection_key = 'reviewIssues';
  protected $reviewIneligibilityReasonDetailsType = ShoppingAdsProgramStatusReviewIneligibilityReasonDetails::class;
  protected $reviewIneligibilityReasonDetailsDataType = '';
  /** @param string */
  public function setDisapprovalDate($disapprovalDate)
  {
    $this->disapprovalDate = $disapprovalDate;
  }
  /** @return string */
  public function getDisapprovalDate()
  {
    return $this->disapprovalDate;
  }
  /** @param string */
  public function setEligibilityStatus($eligibilityStatus)
  {
    $this->eligibilityStatus = $eligibilityStatus;
  }
  /** @return string */
  public function getEligibilityStatus()
  {
    return $this->eligibilityStatus;
  }
  /** @param string[] */
  public function setOnboardingIssues($onboardingIssues)
  {
    $this->onboardingIssues = $onboardingIssues;
  }
  /** @return string[] */
  public function getOnboardingIssues()
  {
    return $this->onboardingIssues;
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
  public function setReviewEligibilityStatus($reviewEligibilityStatus)
  {
    $this->reviewEligibilityStatus = $reviewEligibilityStatus;
  }
  /** @return string */
  public function getReviewEligibilityStatus()
  {
    return $this->reviewEligibilityStatus;
  }
  /** @param string */
  public function setReviewIneligibilityReason($reviewIneligibilityReason)
  {
    $this->reviewIneligibilityReason = $reviewIneligibilityReason;
  }
  /** @return string */
  public function getReviewIneligibilityReason()
  {
    return $this->reviewIneligibilityReason;
  }
  /** @param string */
  public function setReviewIneligibilityReasonDescription($reviewIneligibilityReasonDescription)
  {
    $this->reviewIneligibilityReasonDescription = $reviewIneligibilityReasonDescription;
  }
  /** @return string */
  public function getReviewIneligibilityReasonDescription()
  {
    return $this->reviewIneligibilityReasonDescription;
  }
  /** @param ShoppingAdsProgramStatusReviewIneligibilityReasonDetails */
  public function setReviewIneligibilityReasonDetails(ShoppingAdsProgramStatusReviewIneligibilityReasonDetails $reviewIneligibilityReasonDetails)
  {
    $this->reviewIneligibilityReasonDetails = $reviewIneligibilityReasonDetails;
  }
  /** @return ShoppingAdsProgramStatusReviewIneligibilityReasonDetails */
  public function getReviewIneligibilityReasonDetails()
  {
    return $this->reviewIneligibilityReasonDetails;
  }
  /** @param string[] */
  public function setReviewIssues($reviewIssues)
  {
    $this->reviewIssues = $reviewIssues;
  }
  /** @return string[] */
  public function getReviewIssues()
  {
    return $this->reviewIssues;
  }
}

class ShoppingAdsProgramStatusReviewIneligibilityReasonDetails extends \Google\Model
{
  /** @var string */
  public $cooldownTime;

  /** @param string */
  public function setCooldownTime($cooldownTime)
  {
    $this->cooldownTime = $cooldownTime;
  }
  /** @return string */
  public function getCooldownTime()
  {
    return $this->cooldownTime;
  }
}

class Table extends \Google\Collection
{
  /** @var Headers */
  public $columnHeaders;
  /** @var string */
  public $name;
  /** @var Headers */
  public $rowHeaders;
  /** @var Row[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $columnHeadersType = Headers::class;
  protected $columnHeadersDataType = '';
  protected $rowHeadersType = Headers::class;
  protected $rowHeadersDataType = '';
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';
  /** @param Headers */
  public function setColumnHeaders(Headers $columnHeaders)
  {
    $this->columnHeaders = $columnHeaders;
  }
  /** @return Headers */
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
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
  /** @param Headers */
  public function setRowHeaders(Headers $rowHeaders)
  {
    $this->rowHeaders = $rowHeaders;
  }
  /** @return Headers */
  public function getRowHeaders()
  {
    return $this->rowHeaders;
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
}

class TestOrder extends \Google\Collection
{
  /** @var TestOrderDeliveryDetails */
  public $deliveryDetails;
  /** @var bool */
  public $enableOrderinvoices;
  /** @var string */
  public $kind;
  /** @var TestOrderLineItem[] */
  public $lineItems;
  /** @var string */
  public $notificationMode;
  /** @var TestOrderPickupDetails */
  public $pickupDetails;
  /** @var string */
  public $predefinedBillingAddress;
  /** @var string */
  public $predefinedDeliveryAddress;
  /** @var string */
  public $predefinedEmail;
  /** @var string */
  public $predefinedPickupDetails;
  /** @var OrderPromotion[] */
  public $promotions;
  /** @var Price */
  public $shippingCost;
  /** @var string */
  public $shippingOption;
  protected $collection_key = 'promotions';
  protected $deliveryDetailsType = TestOrderDeliveryDetails::class;
  protected $deliveryDetailsDataType = '';
  protected $lineItemsType = TestOrderLineItem::class;
  protected $lineItemsDataType = 'array';
  protected $pickupDetailsType = TestOrderPickupDetails::class;
  protected $pickupDetailsDataType = '';
  protected $promotionsType = OrderPromotion::class;
  protected $promotionsDataType = 'array';
  protected $shippingCostType = Price::class;
  protected $shippingCostDataType = '';
  /** @param TestOrderDeliveryDetails */
  public function setDeliveryDetails(TestOrderDeliveryDetails $deliveryDetails)
  {
    $this->deliveryDetails = $deliveryDetails;
  }
  /** @return TestOrderDeliveryDetails */
  public function getDeliveryDetails()
  {
    return $this->deliveryDetails;
  }
  /** @param bool */
  public function setEnableOrderinvoices($enableOrderinvoices)
  {
    $this->enableOrderinvoices = $enableOrderinvoices;
  }
  /** @return bool */
  public function getEnableOrderinvoices()
  {
    return $this->enableOrderinvoices;
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
  /** @param TestOrderLineItem[] */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /** @return TestOrderLineItem[] */
  public function getLineItems()
  {
    return $this->lineItems;
  }
  /** @param string */
  public function setNotificationMode($notificationMode)
  {
    $this->notificationMode = $notificationMode;
  }
  /** @return string */
  public function getNotificationMode()
  {
    return $this->notificationMode;
  }
  /** @param TestOrderPickupDetails */
  public function setPickupDetails(TestOrderPickupDetails $pickupDetails)
  {
    $this->pickupDetails = $pickupDetails;
  }
  /** @return TestOrderPickupDetails */
  public function getPickupDetails()
  {
    return $this->pickupDetails;
  }
  /** @param string */
  public function setPredefinedBillingAddress($predefinedBillingAddress)
  {
    $this->predefinedBillingAddress = $predefinedBillingAddress;
  }
  /** @return string */
  public function getPredefinedBillingAddress()
  {
    return $this->predefinedBillingAddress;
  }
  /** @param string */
  public function setPredefinedDeliveryAddress($predefinedDeliveryAddress)
  {
    $this->predefinedDeliveryAddress = $predefinedDeliveryAddress;
  }
  /** @return string */
  public function getPredefinedDeliveryAddress()
  {
    return $this->predefinedDeliveryAddress;
  }
  /** @param string */
  public function setPredefinedEmail($predefinedEmail)
  {
    $this->predefinedEmail = $predefinedEmail;
  }
  /** @return string */
  public function getPredefinedEmail()
  {
    return $this->predefinedEmail;
  }
  /** @param string */
  public function setPredefinedPickupDetails($predefinedPickupDetails)
  {
    $this->predefinedPickupDetails = $predefinedPickupDetails;
  }
  /** @return string */
  public function getPredefinedPickupDetails()
  {
    return $this->predefinedPickupDetails;
  }
  /** @param OrderPromotion[] */
  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  /** @return OrderPromotion[] */
  public function getPromotions()
  {
    return $this->promotions;
  }
  /** @param Price */
  public function setShippingCost(Price $shippingCost)
  {
    $this->shippingCost = $shippingCost;
  }
  /** @return Price */
  public function getShippingCost()
  {
    return $this->shippingCost;
  }
  /** @param string */
  public function setShippingOption($shippingOption)
  {
    $this->shippingOption = $shippingOption;
  }
  /** @return string */
  public function getShippingOption()
  {
    return $this->shippingOption;
  }
}

class TestOrderAddress extends \Google\Collection
{
  /** @var string */
  public $country;
  /** @var string[] */
  public $fullAddress;
  /** @var bool */
  public $isPostOfficeBox;
  /** @var string */
  public $locality;
  /** @var string */
  public $postalCode;
  /** @var string */
  public $recipientName;
  /** @var string */
  public $region;
  /** @var string[] */
  public $streetAddress;
  protected $collection_key = 'streetAddress';
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string[] */
  public function setFullAddress($fullAddress)
  {
    $this->fullAddress = $fullAddress;
  }
  /** @return string[] */
  public function getFullAddress()
  {
    return $this->fullAddress;
  }
  /** @param bool */
  public function setIsPostOfficeBox($isPostOfficeBox)
  {
    $this->isPostOfficeBox = $isPostOfficeBox;
  }
  /** @return bool */
  public function getIsPostOfficeBox()
  {
    return $this->isPostOfficeBox;
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
  public function setRecipientName($recipientName)
  {
    $this->recipientName = $recipientName;
  }
  /** @return string */
  public function getRecipientName()
  {
    return $this->recipientName;
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
  /** @param string[] */
  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }
  /** @return string[] */
  public function getStreetAddress()
  {
    return $this->streetAddress;
  }
}

class TestOrderDeliveryDetails extends \Google\Model
{
  /** @var TestOrderAddress */
  public $address;
  /** @var bool */
  public $isScheduledDelivery;
  /** @var string */
  public $phoneNumber;
  protected $addressType = TestOrderAddress::class;
  protected $addressDataType = '';
  /** @param TestOrderAddress */
  public function setAddress(TestOrderAddress $address)
  {
    $this->address = $address;
  }
  /** @return TestOrderAddress */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param bool */
  public function setIsScheduledDelivery($isScheduledDelivery)
  {
    $this->isScheduledDelivery = $isScheduledDelivery;
  }
  /** @return bool */
  public function getIsScheduledDelivery()
  {
    return $this->isScheduledDelivery;
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
}

class TestOrderLineItem extends \Google\Model
{
  /** @var TestOrderLineItemProduct */
  public $product;
  /** @var string */
  public $quantityOrdered;
  /** @var OrderLineItemReturnInfo */
  public $returnInfo;
  /** @var OrderLineItemShippingDetails */
  public $shippingDetails;
  protected $productType = TestOrderLineItemProduct::class;
  protected $productDataType = '';
  protected $returnInfoType = OrderLineItemReturnInfo::class;
  protected $returnInfoDataType = '';
  protected $shippingDetailsType = OrderLineItemShippingDetails::class;
  protected $shippingDetailsDataType = '';
  /** @param TestOrderLineItemProduct */
  public function setProduct(TestOrderLineItemProduct $product)
  {
    $this->product = $product;
  }
  /** @return TestOrderLineItemProduct */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param string */
  public function setQuantityOrdered($quantityOrdered)
  {
    $this->quantityOrdered = $quantityOrdered;
  }
  /** @return string */
  public function getQuantityOrdered()
  {
    return $this->quantityOrdered;
  }
  /** @param OrderLineItemReturnInfo */
  public function setReturnInfo(OrderLineItemReturnInfo $returnInfo)
  {
    $this->returnInfo = $returnInfo;
  }
  /** @return OrderLineItemReturnInfo */
  public function getReturnInfo()
  {
    return $this->returnInfo;
  }
  /** @param OrderLineItemShippingDetails */
  public function setShippingDetails(OrderLineItemShippingDetails $shippingDetails)
  {
    $this->shippingDetails = $shippingDetails;
  }
  /** @return OrderLineItemShippingDetails */
  public function getShippingDetails()
  {
    return $this->shippingDetails;
  }
}

class TestOrderLineItemProduct extends \Google\Collection
{
  /** @var string */
  public $brand;
  /** @var string */
  public $condition;
  /** @var string */
  public $contentLanguage;
  /** @var OrderLineItemProductFee[] */
  public $fees;
  /** @var string */
  public $gtin;
  /** @var string */
  public $imageLink;
  /** @var string */
  public $itemGroupId;
  /** @var string */
  public $mpn;
  /** @var string */
  public $offerId;
  /** @var Price */
  public $price;
  /** @var string */
  public $targetCountry;
  /** @var string */
  public $title;
  /** @var OrderLineItemProductVariantAttribute[] */
  public $variantAttributes;
  protected $collection_key = 'variantAttributes';
  protected $feesType = OrderLineItemProductFee::class;
  protected $feesDataType = 'array';
  protected $priceType = Price::class;
  protected $priceDataType = '';
  protected $variantAttributesType = OrderLineItemProductVariantAttribute::class;
  protected $variantAttributesDataType = 'array';
  /** @param string */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param OrderLineItemProductFee[] */
  public function setFees($fees)
  {
    $this->fees = $fees;
  }
  /** @return OrderLineItemProductFee[] */
  public function getFees()
  {
    return $this->fees;
  }
  /** @param string */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string */
  public function getGtin()
  {
    return $this->gtin;
  }
  /** @param string */
  public function setImageLink($imageLink)
  {
    $this->imageLink = $imageLink;
  }
  /** @return string */
  public function getImageLink()
  {
    return $this->imageLink;
  }
  /** @param string */
  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }
  /** @return string */
  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }
  /** @param string */
  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }
  /** @return string */
  public function getMpn()
  {
    return $this->mpn;
  }
  /** @param string */
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  /** @return string */
  public function getOfferId()
  {
    return $this->offerId;
  }
  /** @param Price */
  public function setPrice(Price $price)
  {
    $this->price = $price;
  }
  /** @return Price */
  public function getPrice()
  {
    return $this->price;
  }
  /** @param string */
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
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
  /** @param OrderLineItemProductVariantAttribute[] */
  public function setVariantAttributes($variantAttributes)
  {
    $this->variantAttributes = $variantAttributes;
  }
  /** @return OrderLineItemProductVariantAttribute[] */
  public function getVariantAttributes()
  {
    return $this->variantAttributes;
  }
}

class TestOrderPickupDetails extends \Google\Collection
{
  /** @var string */
  public $locationCode;
  /** @var TestOrderAddress */
  public $pickupLocationAddress;
  /** @var string */
  public $pickupLocationType;
  /** @var TestOrderPickupDetailsPickupPerson[] */
  public $pickupPersons;
  protected $collection_key = 'pickupPersons';
  protected $pickupLocationAddressType = TestOrderAddress::class;
  protected $pickupLocationAddressDataType = '';
  protected $pickupPersonsType = TestOrderPickupDetailsPickupPerson::class;
  protected $pickupPersonsDataType = 'array';
  /** @param string */
  public function setLocationCode($locationCode)
  {
    $this->locationCode = $locationCode;
  }
  /** @return string */
  public function getLocationCode()
  {
    return $this->locationCode;
  }
  /** @param TestOrderAddress */
  public function setPickupLocationAddress(TestOrderAddress $pickupLocationAddress)
  {
    $this->pickupLocationAddress = $pickupLocationAddress;
  }
  /** @return TestOrderAddress */
  public function getPickupLocationAddress()
  {
    return $this->pickupLocationAddress;
  }
  /** @param string */
  public function setPickupLocationType($pickupLocationType)
  {
    $this->pickupLocationType = $pickupLocationType;
  }
  /** @return string */
  public function getPickupLocationType()
  {
    return $this->pickupLocationType;
  }
  /** @param TestOrderPickupDetailsPickupPerson[] */
  public function setPickupPersons($pickupPersons)
  {
    $this->pickupPersons = $pickupPersons;
  }
  /** @return TestOrderPickupDetailsPickupPerson[] */
  public function getPickupPersons()
  {
    return $this->pickupPersons;
  }
}

class TestOrderPickupDetailsPickupPerson extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $phoneNumber;

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
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
}

class TimePeriod extends \Google\Model
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

class TransitTable extends \Google\Collection
{
  /** @var string[] */
  public $postalCodeGroupNames;
  /** @var TransitTableTransitTimeRow[] */
  public $rows;
  /** @var string[] */
  public $transitTimeLabels;
  protected $collection_key = 'transitTimeLabels';
  protected $rowsType = TransitTableTransitTimeRow::class;
  protected $rowsDataType = 'array';
  /** @param string[] */
  public function setPostalCodeGroupNames($postalCodeGroupNames)
  {
    $this->postalCodeGroupNames = $postalCodeGroupNames;
  }
  /** @return string[] */
  public function getPostalCodeGroupNames()
  {
    return $this->postalCodeGroupNames;
  }
  /** @param TransitTableTransitTimeRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return TransitTableTransitTimeRow[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param string[] */
  public function setTransitTimeLabels($transitTimeLabels)
  {
    $this->transitTimeLabels = $transitTimeLabels;
  }
  /** @return string[] */
  public function getTransitTimeLabels()
  {
    return $this->transitTimeLabels;
  }
}

class TransitTableTransitTimeRow extends \Google\Collection
{
  /** @var TransitTableTransitTimeRowTransitTimeValue[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = TransitTableTransitTimeRowTransitTimeValue::class;
  protected $valuesDataType = 'array';
  /** @param TransitTableTransitTimeRowTransitTimeValue[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return TransitTableTransitTimeRowTransitTimeValue[] */
  public function getValues()
  {
    return $this->values;
  }
}

class TransitTableTransitTimeRowTransitTimeValue extends \Google\Model
{
  /** @var string */
  public $maxTransitTimeInDays;
  /** @var string */
  public $minTransitTimeInDays;

  /** @param string */
  public function setMaxTransitTimeInDays($maxTransitTimeInDays)
  {
    $this->maxTransitTimeInDays = $maxTransitTimeInDays;
  }
  /** @return string */
  public function getMaxTransitTimeInDays()
  {
    return $this->maxTransitTimeInDays;
  }
  /** @param string */
  public function setMinTransitTimeInDays($minTransitTimeInDays)
  {
    $this->minTransitTimeInDays = $minTransitTimeInDays;
  }
  /** @return string */
  public function getMinTransitTimeInDays()
  {
    return $this->minTransitTimeInDays;
  }
}

class UnitInvoice extends \Google\Collection
{
  /** @var UnitInvoiceAdditionalCharge[] */
  public $additionalCharges;
  /** @var Price */
  public $unitPrice;
  /** @var UnitInvoiceTaxLine[] */
  public $unitPriceTaxes;
  protected $collection_key = 'unitPriceTaxes';
  protected $additionalChargesType = UnitInvoiceAdditionalCharge::class;
  protected $additionalChargesDataType = 'array';
  protected $unitPriceType = Price::class;
  protected $unitPriceDataType = '';
  protected $unitPriceTaxesType = UnitInvoiceTaxLine::class;
  protected $unitPriceTaxesDataType = 'array';
  /** @param UnitInvoiceAdditionalCharge[] */
  public function setAdditionalCharges($additionalCharges)
  {
    $this->additionalCharges = $additionalCharges;
  }
  /** @return UnitInvoiceAdditionalCharge[] */
  public function getAdditionalCharges()
  {
    return $this->additionalCharges;
  }
  /** @param Price */
  public function setUnitPrice(Price $unitPrice)
  {
    $this->unitPrice = $unitPrice;
  }
  /** @return Price */
  public function getUnitPrice()
  {
    return $this->unitPrice;
  }
  /** @param UnitInvoiceTaxLine[] */
  public function setUnitPriceTaxes($unitPriceTaxes)
  {
    $this->unitPriceTaxes = $unitPriceTaxes;
  }
  /** @return UnitInvoiceTaxLine[] */
  public function getUnitPriceTaxes()
  {
    return $this->unitPriceTaxes;
  }
}

class UnitInvoiceAdditionalCharge extends \Google\Model
{
  /** @var Amount */
  public $additionalChargeAmount;
  /** @var string */
  public $type;
  protected $additionalChargeAmountType = Amount::class;
  protected $additionalChargeAmountDataType = '';
  /** @param Amount */
  public function setAdditionalChargeAmount(Amount $additionalChargeAmount)
  {
    $this->additionalChargeAmount = $additionalChargeAmount;
  }
  /** @return Amount */
  public function getAdditionalChargeAmount()
  {
    return $this->additionalChargeAmount;
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

class UnitInvoiceTaxLine extends \Google\Model
{
  /** @var Price */
  public $taxAmount;
  /** @var string */
  public $taxName;
  /** @var string */
  public $taxType;
  protected $taxAmountType = Price::class;
  protected $taxAmountDataType = '';
  /** @param Price */
  public function setTaxAmount(Price $taxAmount)
  {
    $this->taxAmount = $taxAmount;
  }
  /** @return Price */
  public function getTaxAmount()
  {
    return $this->taxAmount;
  }
  /** @param string */
  public function setTaxName($taxName)
  {
    $this->taxName = $taxName;
  }
  /** @return string */
  public function getTaxName()
  {
    return $this->taxName;
  }
  /** @param string */
  public function setTaxType($taxType)
  {
    $this->taxType = $taxType;
  }
  /** @return string */
  public function getTaxType()
  {
    return $this->taxType;
  }
}

class Value extends \Google\Model
{
  /** @var string */
  public $carrierRateName;
  /** @var Price */
  public $flatRate;
  /** @var bool */
  public $noShipping;
  /** @var string */
  public $pricePercentage;
  /** @var string */
  public $subtableName;
  protected $flatRateType = Price::class;
  protected $flatRateDataType = '';
  /** @param string */
  public function setCarrierRateName($carrierRateName)
  {
    $this->carrierRateName = $carrierRateName;
  }
  /** @return string */
  public function getCarrierRateName()
  {
    return $this->carrierRateName;
  }
  /** @param Price */
  public function setFlatRate(Price $flatRate)
  {
    $this->flatRate = $flatRate;
  }
  /** @return Price */
  public function getFlatRate()
  {
    return $this->flatRate;
  }
  /** @param bool */
  public function setNoShipping($noShipping)
  {
    $this->noShipping = $noShipping;
  }
  /** @return bool */
  public function getNoShipping()
  {
    return $this->noShipping;
  }
  /** @param string */
  public function setPricePercentage($pricePercentage)
  {
    $this->pricePercentage = $pricePercentage;
  }
  /** @return string */
  public function getPricePercentage()
  {
    return $this->pricePercentage;
  }
  /** @param string */
  public function setSubtableName($subtableName)
  {
    $this->subtableName = $subtableName;
  }
  /** @return string */
  public function getSubtableName()
  {
    return $this->subtableName;
  }
}

class VerifyPhoneNumberRequest extends \Google\Model
{
  /** @var string */
  public $phoneVerificationMethod;
  /** @var string */
  public $verificationCode;
  /** @var string */
  public $verificationId;

  /** @param string */
  public function setPhoneVerificationMethod($phoneVerificationMethod)
  {
    $this->phoneVerificationMethod = $phoneVerificationMethod;
  }
  /** @return string */
  public function getPhoneVerificationMethod()
  {
    return $this->phoneVerificationMethod;
  }
  /** @param string */
  public function setVerificationCode($verificationCode)
  {
    $this->verificationCode = $verificationCode;
  }
  /** @return string */
  public function getVerificationCode()
  {
    return $this->verificationCode;
  }
  /** @param string */
  public function setVerificationId($verificationId)
  {
    $this->verificationId = $verificationId;
  }
  /** @return string */
  public function getVerificationId()
  {
    return $this->verificationId;
  }
}

class VerifyPhoneNumberResponse extends \Google\Model
{
  /** @var string */
  public $verifiedPhoneNumber;

  /** @param string */
  public function setVerifiedPhoneNumber($verifiedPhoneNumber)
  {
    $this->verifiedPhoneNumber = $verifiedPhoneNumber;
  }
  /** @return string */
  public function getVerifiedPhoneNumber()
  {
    return $this->verifiedPhoneNumber;
  }
}

class Warehouse extends \Google\Model
{
  /** @var BusinessDayConfig */
  public $businessDayConfig;
  /** @var WarehouseCutoffTime */
  public $cutoffTime;
  /** @var string */
  public $handlingDays;
  /** @var string */
  public $name;
  /** @var Address */
  public $shippingAddress;
  protected $businessDayConfigType = BusinessDayConfig::class;
  protected $businessDayConfigDataType = '';
  protected $cutoffTimeType = WarehouseCutoffTime::class;
  protected $cutoffTimeDataType = '';
  protected $shippingAddressType = Address::class;
  protected $shippingAddressDataType = '';
  /** @param BusinessDayConfig */
  public function setBusinessDayConfig(BusinessDayConfig $businessDayConfig)
  {
    $this->businessDayConfig = $businessDayConfig;
  }
  /** @return BusinessDayConfig */
  public function getBusinessDayConfig()
  {
    return $this->businessDayConfig;
  }
  /** @param WarehouseCutoffTime */
  public function setCutoffTime(WarehouseCutoffTime $cutoffTime)
  {
    $this->cutoffTime = $cutoffTime;
  }
  /** @return WarehouseCutoffTime */
  public function getCutoffTime()
  {
    return $this->cutoffTime;
  }
  /** @param string */
  public function setHandlingDays($handlingDays)
  {
    $this->handlingDays = $handlingDays;
  }
  /** @return string */
  public function getHandlingDays()
  {
    return $this->handlingDays;
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
  /** @param Address */
  public function setShippingAddress(Address $shippingAddress)
  {
    $this->shippingAddress = $shippingAddress;
  }
  /** @return Address */
  public function getShippingAddress()
  {
    return $this->shippingAddress;
  }
}

class WarehouseBasedDeliveryTime extends \Google\Model
{
  /** @var string */
  public $carrier;
  /** @var string */
  public $carrierService;
  /** @var string */
  public $originAdministrativeArea;
  /** @var string */
  public $originCity;
  /** @var string */
  public $originCountry;
  /** @var string */
  public $originPostalCode;
  /** @var string */
  public $originStreetAddress;
  /** @var string */
  public $warehouseName;

  /** @param string */
  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }
  /** @return string */
  public function getCarrier()
  {
    return $this->carrier;
  }
  /** @param string */
  public function setCarrierService($carrierService)
  {
    $this->carrierService = $carrierService;
  }
  /** @return string */
  public function getCarrierService()
  {
    return $this->carrierService;
  }
  /** @param string */
  public function setOriginAdministrativeArea($originAdministrativeArea)
  {
    $this->originAdministrativeArea = $originAdministrativeArea;
  }
  /** @return string */
  public function getOriginAdministrativeArea()
  {
    return $this->originAdministrativeArea;
  }
  /** @param string */
  public function setOriginCity($originCity)
  {
    $this->originCity = $originCity;
  }
  /** @return string */
  public function getOriginCity()
  {
    return $this->originCity;
  }
  /** @param string */
  public function setOriginCountry($originCountry)
  {
    $this->originCountry = $originCountry;
  }
  /** @return string */
  public function getOriginCountry()
  {
    return $this->originCountry;
  }
  /** @param string */
  public function setOriginPostalCode($originPostalCode)
  {
    $this->originPostalCode = $originPostalCode;
  }
  /** @return string */
  public function getOriginPostalCode()
  {
    return $this->originPostalCode;
  }
  /** @param string */
  public function setOriginStreetAddress($originStreetAddress)
  {
    $this->originStreetAddress = $originStreetAddress;
  }
  /** @return string */
  public function getOriginStreetAddress()
  {
    return $this->originStreetAddress;
  }
  /** @param string */
  public function setWarehouseName($warehouseName)
  {
    $this->warehouseName = $warehouseName;
  }
  /** @return string */
  public function getWarehouseName()
  {
    return $this->warehouseName;
  }
}

class WarehouseCutoffTime extends \Google\Model
{
  /** @var int */
  public $hour;
  /** @var int */
  public $minute;

  /** @param int */
  public function setHour($hour)
  {
    $this->hour = $hour;
  }
  /** @return int */
  public function getHour()
  {
    return $this->hour;
  }
  /** @param int */
  public function setMinute($minute)
  {
    $this->minute = $minute;
  }
  /** @return int */
  public function getMinute()
  {
    return $this->minute;
  }
}

class Weight extends \Google\Model
{
  /** @var string */
  public $unit;
  /** @var string */
  public $value;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Account::class, 'Google_Service_ShoppingContent_Account');
class_alias(AccountAddress::class, 'Google_Service_ShoppingContent_AccountAddress');
class_alias(AccountAdsLink::class, 'Google_Service_ShoppingContent_AccountAdsLink');
class_alias(AccountAutomaticImprovements::class, 'Google_Service_ShoppingContent_AccountAutomaticImprovements');
class_alias(AccountBusinessInformation::class, 'Google_Service_ShoppingContent_AccountBusinessInformation');
class_alias(AccountCredentials::class, 'Google_Service_ShoppingContent_AccountCredentials');
class_alias(AccountCustomerService::class, 'Google_Service_ShoppingContent_AccountCustomerService');
class_alias(AccountGoogleMyBusinessLink::class, 'Google_Service_ShoppingContent_AccountGoogleMyBusinessLink');
class_alias(AccountIdentifier::class, 'Google_Service_ShoppingContent_AccountIdentifier');
class_alias(AccountImageImprovements::class, 'Google_Service_ShoppingContent_AccountImageImprovements');
class_alias(AccountImageImprovementsSettings::class, 'Google_Service_ShoppingContent_AccountImageImprovementsSettings');
class_alias(AccountItemUpdates::class, 'Google_Service_ShoppingContent_AccountItemUpdates');
class_alias(AccountItemUpdatesSettings::class, 'Google_Service_ShoppingContent_AccountItemUpdatesSettings');
class_alias(AccountLabel::class, 'Google_Service_ShoppingContent_AccountLabel');
class_alias(AccountReturnCarrier::class, 'Google_Service_ShoppingContent_AccountReturnCarrier');
class_alias(AccountShippingImprovements::class, 'Google_Service_ShoppingContent_AccountShippingImprovements');
class_alias(AccountStatus::class, 'Google_Service_ShoppingContent_AccountStatus');
class_alias(AccountStatusAccountLevelIssue::class, 'Google_Service_ShoppingContent_AccountStatusAccountLevelIssue');
class_alias(AccountStatusItemLevelIssue::class, 'Google_Service_ShoppingContent_AccountStatusItemLevelIssue');
class_alias(AccountStatusProducts::class, 'Google_Service_ShoppingContent_AccountStatusProducts');
class_alias(AccountStatusStatistics::class, 'Google_Service_ShoppingContent_AccountStatusStatistics');
class_alias(AccountTax::class, 'Google_Service_ShoppingContent_AccountTax');
class_alias(AccountTaxTaxRule::class, 'Google_Service_ShoppingContent_AccountTaxTaxRule');
class_alias(AccountUser::class, 'Google_Service_ShoppingContent_AccountUser');
class_alias(AccountYouTubeChannelLink::class, 'Google_Service_ShoppingContent_AccountYouTubeChannelLink');
class_alias(AccountsAuthInfoResponse::class, 'Google_Service_ShoppingContent_AccountsAuthInfoResponse');
class_alias(AccountsClaimWebsiteResponse::class, 'Google_Service_ShoppingContent_AccountsClaimWebsiteResponse');
class_alias(AccountsCustomBatchRequest::class, 'Google_Service_ShoppingContent_AccountsCustomBatchRequest');
class_alias(AccountsCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_AccountsCustomBatchRequestEntry');
class_alias(AccountsCustomBatchRequestEntryLinkRequest::class, 'Google_Service_ShoppingContent_AccountsCustomBatchRequestEntryLinkRequest');
class_alias(AccountsCustomBatchResponse::class, 'Google_Service_ShoppingContent_AccountsCustomBatchResponse');
class_alias(AccountsCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_AccountsCustomBatchResponseEntry');
class_alias(AccountsLinkRequest::class, 'Google_Service_ShoppingContent_AccountsLinkRequest');
class_alias(AccountsLinkResponse::class, 'Google_Service_ShoppingContent_AccountsLinkResponse');
class_alias(AccountsListLinksResponse::class, 'Google_Service_ShoppingContent_AccountsListLinksResponse');
class_alias(AccountsListResponse::class, 'Google_Service_ShoppingContent_AccountsListResponse');
class_alias(AccountsUpdateLabelsRequest::class, 'Google_Service_ShoppingContent_AccountsUpdateLabelsRequest');
class_alias(AccountsUpdateLabelsResponse::class, 'Google_Service_ShoppingContent_AccountsUpdateLabelsResponse');
class_alias(AccountstatusesCustomBatchRequest::class, 'Google_Service_ShoppingContent_AccountstatusesCustomBatchRequest');
class_alias(AccountstatusesCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_AccountstatusesCustomBatchRequestEntry');
class_alias(AccountstatusesCustomBatchResponse::class, 'Google_Service_ShoppingContent_AccountstatusesCustomBatchResponse');
class_alias(AccountstatusesCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_AccountstatusesCustomBatchResponseEntry');
class_alias(AccountstatusesListResponse::class, 'Google_Service_ShoppingContent_AccountstatusesListResponse');
class_alias(AccounttaxCustomBatchRequest::class, 'Google_Service_ShoppingContent_AccounttaxCustomBatchRequest');
class_alias(AccounttaxCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_AccounttaxCustomBatchRequestEntry');
class_alias(AccounttaxCustomBatchResponse::class, 'Google_Service_ShoppingContent_AccounttaxCustomBatchResponse');
class_alias(AccounttaxCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_AccounttaxCustomBatchResponseEntry');
class_alias(AccounttaxListResponse::class, 'Google_Service_ShoppingContent_AccounttaxListResponse');
class_alias(ActivateBuyOnGoogleProgramRequest::class, 'Google_Service_ShoppingContent_ActivateBuyOnGoogleProgramRequest');
class_alias(Address::class, 'Google_Service_ShoppingContent_Address');
class_alias(Amount::class, 'Google_Service_ShoppingContent_Amount');
class_alias(BestSellers::class, 'Google_Service_ShoppingContent_BestSellers');
class_alias(Brand::class, 'Google_Service_ShoppingContent_Brand');
class_alias(BusinessDayConfig::class, 'Google_Service_ShoppingContent_BusinessDayConfig');
class_alias(BuyOnGoogleProgramStatus::class, 'Google_Service_ShoppingContent_BuyOnGoogleProgramStatus');
class_alias(CaptureOrderRequest::class, 'Google_Service_ShoppingContent_CaptureOrderRequest');
class_alias(CaptureOrderResponse::class, 'Google_Service_ShoppingContent_CaptureOrderResponse');
class_alias(CarrierRate::class, 'Google_Service_ShoppingContent_CarrierRate');
class_alias(CarriersCarrier::class, 'Google_Service_ShoppingContent_CarriersCarrier');
class_alias(Collection::class, 'Google_Service_ShoppingContent_Collection');
class_alias(CollectionFeaturedProduct::class, 'Google_Service_ShoppingContent_CollectionFeaturedProduct');
class_alias(CollectionStatus::class, 'Google_Service_ShoppingContent_CollectionStatus');
class_alias(CollectionStatusDestinationStatus::class, 'Google_Service_ShoppingContent_CollectionStatusDestinationStatus');
class_alias(CollectionStatusItemLevelIssue::class, 'Google_Service_ShoppingContent_CollectionStatusItemLevelIssue');
class_alias(Css::class, 'Google_Service_ShoppingContent_Css');
class_alias(CustomAttribute::class, 'Google_Service_ShoppingContent_CustomAttribute');
class_alias(CustomerReturnReason::class, 'Google_Service_ShoppingContent_CustomerReturnReason');
class_alias(CutoffTime::class, 'Google_Service_ShoppingContent_CutoffTime');
class_alias(Datafeed::class, 'Google_Service_ShoppingContent_Datafeed');
class_alias(DatafeedFetchSchedule::class, 'Google_Service_ShoppingContent_DatafeedFetchSchedule');
class_alias(DatafeedFormat::class, 'Google_Service_ShoppingContent_DatafeedFormat');
class_alias(DatafeedStatus::class, 'Google_Service_ShoppingContent_DatafeedStatus');
class_alias(DatafeedStatusError::class, 'Google_Service_ShoppingContent_DatafeedStatusError');
class_alias(DatafeedStatusExample::class, 'Google_Service_ShoppingContent_DatafeedStatusExample');
class_alias(DatafeedTarget::class, 'Google_Service_ShoppingContent_DatafeedTarget');
class_alias(DatafeedsCustomBatchRequest::class, 'Google_Service_ShoppingContent_DatafeedsCustomBatchRequest');
class_alias(DatafeedsCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_DatafeedsCustomBatchRequestEntry');
class_alias(DatafeedsCustomBatchResponse::class, 'Google_Service_ShoppingContent_DatafeedsCustomBatchResponse');
class_alias(DatafeedsCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_DatafeedsCustomBatchResponseEntry');
class_alias(DatafeedsFetchNowResponse::class, 'Google_Service_ShoppingContent_DatafeedsFetchNowResponse');
class_alias(DatafeedsListResponse::class, 'Google_Service_ShoppingContent_DatafeedsListResponse');
class_alias(DatafeedstatusesCustomBatchRequest::class, 'Google_Service_ShoppingContent_DatafeedstatusesCustomBatchRequest');
class_alias(DatafeedstatusesCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_DatafeedstatusesCustomBatchRequestEntry');
class_alias(DatafeedstatusesCustomBatchResponse::class, 'Google_Service_ShoppingContent_DatafeedstatusesCustomBatchResponse');
class_alias(DatafeedstatusesCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_DatafeedstatusesCustomBatchResponseEntry');
class_alias(DatafeedstatusesListResponse::class, 'Google_Service_ShoppingContent_DatafeedstatusesListResponse');
class_alias(Date::class, 'Google_Service_ShoppingContent_Date');
class_alias(DateTime::class, 'Google_Service_ShoppingContent_DateTime');
class_alias(DeliveryArea::class, 'Google_Service_ShoppingContent_DeliveryArea');
class_alias(DeliveryAreaPostalCodeRange::class, 'Google_Service_ShoppingContent_DeliveryAreaPostalCodeRange');
class_alias(DeliveryTime::class, 'Google_Service_ShoppingContent_DeliveryTime');
class_alias(ECommercePlatformLinkInfo::class, 'Google_Service_ShoppingContent_ECommercePlatformLinkInfo');
class_alias(Error::class, 'Google_Service_ShoppingContent_Error');
class_alias(Errors::class, 'Google_Service_ShoppingContent_Errors');
class_alias(FreeListingsProgramStatus::class, 'Google_Service_ShoppingContent_FreeListingsProgramStatus');
class_alias(FreeListingsProgramStatusRegionStatus::class, 'Google_Service_ShoppingContent_FreeListingsProgramStatusRegionStatus');
class_alias(FreeListingsProgramStatusReviewIneligibilityReasonDetails::class, 'Google_Service_ShoppingContent_FreeListingsProgramStatusReviewIneligibilityReasonDetails');
class_alias(GmbAccounts::class, 'Google_Service_ShoppingContent_GmbAccounts');
class_alias(GmbAccountsGmbAccount::class, 'Google_Service_ShoppingContent_GmbAccountsGmbAccount');
class_alias(Headers::class, 'Google_Service_ShoppingContent_Headers');
class_alias(HolidayCutoff::class, 'Google_Service_ShoppingContent_HolidayCutoff');
class_alias(HolidaysHoliday::class, 'Google_Service_ShoppingContent_HolidaysHoliday');
class_alias(InapplicabilityDetails::class, 'Google_Service_ShoppingContent_InapplicabilityDetails');
class_alias(Installment::class, 'Google_Service_ShoppingContent_Installment');
class_alias(InvoiceSummary::class, 'Google_Service_ShoppingContent_InvoiceSummary');
class_alias(InvoiceSummaryAdditionalChargeSummary::class, 'Google_Service_ShoppingContent_InvoiceSummaryAdditionalChargeSummary');
class_alias(LabelIds::class, 'Google_Service_ShoppingContent_LabelIds');
class_alias(LiaAboutPageSettings::class, 'Google_Service_ShoppingContent_LiaAboutPageSettings');
class_alias(LiaCountrySettings::class, 'Google_Service_ShoppingContent_LiaCountrySettings');
class_alias(LiaInventorySettings::class, 'Google_Service_ShoppingContent_LiaInventorySettings');
class_alias(LiaOnDisplayToOrderSettings::class, 'Google_Service_ShoppingContent_LiaOnDisplayToOrderSettings');
class_alias(LiaPosDataProvider::class, 'Google_Service_ShoppingContent_LiaPosDataProvider');
class_alias(LiaSettings::class, 'Google_Service_ShoppingContent_LiaSettings');
class_alias(LiasettingsCustomBatchRequest::class, 'Google_Service_ShoppingContent_LiasettingsCustomBatchRequest');
class_alias(LiasettingsCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_LiasettingsCustomBatchRequestEntry');
class_alias(LiasettingsCustomBatchResponse::class, 'Google_Service_ShoppingContent_LiasettingsCustomBatchResponse');
class_alias(LiasettingsCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_LiasettingsCustomBatchResponseEntry');
class_alias(LiasettingsGetAccessibleGmbAccountsResponse::class, 'Google_Service_ShoppingContent_LiasettingsGetAccessibleGmbAccountsResponse');
class_alias(LiasettingsListPosDataProvidersResponse::class, 'Google_Service_ShoppingContent_LiasettingsListPosDataProvidersResponse');
class_alias(LiasettingsListResponse::class, 'Google_Service_ShoppingContent_LiasettingsListResponse');
class_alias(LiasettingsRequestGmbAccessResponse::class, 'Google_Service_ShoppingContent_LiasettingsRequestGmbAccessResponse');
class_alias(LiasettingsRequestInventoryVerificationResponse::class, 'Google_Service_ShoppingContent_LiasettingsRequestInventoryVerificationResponse');
class_alias(LiasettingsSetInventoryVerificationContactResponse::class, 'Google_Service_ShoppingContent_LiasettingsSetInventoryVerificationContactResponse');
class_alias(LiasettingsSetPosDataProviderResponse::class, 'Google_Service_ShoppingContent_LiasettingsSetPosDataProviderResponse');
class_alias(LinkService::class, 'Google_Service_ShoppingContent_LinkService');
class_alias(LinkedAccount::class, 'Google_Service_ShoppingContent_LinkedAccount');
class_alias(ListAccountLabelsResponse::class, 'Google_Service_ShoppingContent_ListAccountLabelsResponse');
class_alias(ListAccountReturnCarrierResponse::class, 'Google_Service_ShoppingContent_ListAccountReturnCarrierResponse');
class_alias(ListCollectionStatusesResponse::class, 'Google_Service_ShoppingContent_ListCollectionStatusesResponse');
class_alias(ListCollectionsResponse::class, 'Google_Service_ShoppingContent_ListCollectionsResponse');
class_alias(ListCssesResponse::class, 'Google_Service_ShoppingContent_ListCssesResponse');
class_alias(ListMethodQuotasResponse::class, 'Google_Service_ShoppingContent_ListMethodQuotasResponse');
class_alias(ListRegionsResponse::class, 'Google_Service_ShoppingContent_ListRegionsResponse');
class_alias(ListRepricingProductReportsResponse::class, 'Google_Service_ShoppingContent_ListRepricingProductReportsResponse');
class_alias(ListRepricingRuleReportsResponse::class, 'Google_Service_ShoppingContent_ListRepricingRuleReportsResponse');
class_alias(ListRepricingRulesResponse::class, 'Google_Service_ShoppingContent_ListRepricingRulesResponse');
class_alias(ListReturnPolicyOnlineResponse::class, 'Google_Service_ShoppingContent_ListReturnPolicyOnlineResponse');
class_alias(LocalInventory::class, 'Google_Service_ShoppingContent_LocalInventory');
class_alias(LocalinventoryCustomBatchRequest::class, 'Google_Service_ShoppingContent_LocalinventoryCustomBatchRequest');
class_alias(LocalinventoryCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_LocalinventoryCustomBatchRequestEntry');
class_alias(LocalinventoryCustomBatchResponse::class, 'Google_Service_ShoppingContent_LocalinventoryCustomBatchResponse');
class_alias(LocalinventoryCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_LocalinventoryCustomBatchResponseEntry');
class_alias(LocationIdSet::class, 'Google_Service_ShoppingContent_LocationIdSet');
class_alias(LoyaltyPoints::class, 'Google_Service_ShoppingContent_LoyaltyPoints');
class_alias(MerchantOrderReturn::class, 'Google_Service_ShoppingContent_MerchantOrderReturn');
class_alias(MerchantOrderReturnItem::class, 'Google_Service_ShoppingContent_MerchantOrderReturnItem');
class_alias(MerchantRejectionReason::class, 'Google_Service_ShoppingContent_MerchantRejectionReason');
class_alias(MethodQuota::class, 'Google_Service_ShoppingContent_MethodQuota');
class_alias(Metrics::class, 'Google_Service_ShoppingContent_Metrics');
class_alias(MinimumOrderValueTable::class, 'Google_Service_ShoppingContent_MinimumOrderValueTable');
class_alias(MinimumOrderValueTableStoreCodeSetWithMov::class, 'Google_Service_ShoppingContent_MinimumOrderValueTableStoreCodeSetWithMov');
class_alias(MonetaryAmount::class, 'Google_Service_ShoppingContent_MonetaryAmount');
class_alias(OnboardBuyOnGoogleProgramRequest::class, 'Google_Service_ShoppingContent_OnboardBuyOnGoogleProgramRequest');
class_alias(Order::class, 'Google_Service_ShoppingContent_Order');
class_alias(OrderAddress::class, 'Google_Service_ShoppingContent_OrderAddress');
class_alias(OrderCancellation::class, 'Google_Service_ShoppingContent_OrderCancellation');
class_alias(OrderCustomer::class, 'Google_Service_ShoppingContent_OrderCustomer');
class_alias(OrderCustomerLoyaltyInfo::class, 'Google_Service_ShoppingContent_OrderCustomerLoyaltyInfo');
class_alias(OrderCustomerMarketingRightsInfo::class, 'Google_Service_ShoppingContent_OrderCustomerMarketingRightsInfo');
class_alias(OrderDeliveryDetails::class, 'Google_Service_ShoppingContent_OrderDeliveryDetails');
class_alias(OrderLineItem::class, 'Google_Service_ShoppingContent_OrderLineItem');
class_alias(OrderLineItemAdjustment::class, 'Google_Service_ShoppingContent_OrderLineItemAdjustment');
class_alias(OrderLineItemProduct::class, 'Google_Service_ShoppingContent_OrderLineItemProduct');
class_alias(OrderLineItemProductFee::class, 'Google_Service_ShoppingContent_OrderLineItemProductFee');
class_alias(OrderLineItemProductVariantAttribute::class, 'Google_Service_ShoppingContent_OrderLineItemProductVariantAttribute');
class_alias(OrderLineItemReturnInfo::class, 'Google_Service_ShoppingContent_OrderLineItemReturnInfo');
class_alias(OrderLineItemShippingDetails::class, 'Google_Service_ShoppingContent_OrderLineItemShippingDetails');
class_alias(OrderLineItemShippingDetailsMethod::class, 'Google_Service_ShoppingContent_OrderLineItemShippingDetailsMethod');
class_alias(OrderMerchantProvidedAnnotation::class, 'Google_Service_ShoppingContent_OrderMerchantProvidedAnnotation');
class_alias(OrderOrderAnnotation::class, 'Google_Service_ShoppingContent_OrderOrderAnnotation');
class_alias(OrderPickupDetails::class, 'Google_Service_ShoppingContent_OrderPickupDetails');
class_alias(OrderPickupDetailsCollector::class, 'Google_Service_ShoppingContent_OrderPickupDetailsCollector');
class_alias(OrderPromotion::class, 'Google_Service_ShoppingContent_OrderPromotion');
class_alias(OrderPromotionItem::class, 'Google_Service_ShoppingContent_OrderPromotionItem');
class_alias(OrderRefund::class, 'Google_Service_ShoppingContent_OrderRefund');
class_alias(OrderReportDisbursement::class, 'Google_Service_ShoppingContent_OrderReportDisbursement');
class_alias(OrderReportTransaction::class, 'Google_Service_ShoppingContent_OrderReportTransaction');
class_alias(OrderReturn::class, 'Google_Service_ShoppingContent_OrderReturn');
class_alias(OrderShipment::class, 'Google_Service_ShoppingContent_OrderShipment');
class_alias(OrderShipmentLineItemShipment::class, 'Google_Service_ShoppingContent_OrderShipmentLineItemShipment');
class_alias(OrderShipmentScheduledDeliveryDetails::class, 'Google_Service_ShoppingContent_OrderShipmentScheduledDeliveryDetails');
class_alias(OrderTrackingSignal::class, 'Google_Service_ShoppingContent_OrderTrackingSignal');
class_alias(OrderTrackingSignalLineItemDetails::class, 'Google_Service_ShoppingContent_OrderTrackingSignalLineItemDetails');
class_alias(OrderTrackingSignalShipmentLineItemMapping::class, 'Google_Service_ShoppingContent_OrderTrackingSignalShipmentLineItemMapping');
class_alias(OrderTrackingSignalShippingInfo::class, 'Google_Service_ShoppingContent_OrderTrackingSignalShippingInfo');
class_alias(OrderinvoicesCreateChargeInvoiceRequest::class, 'Google_Service_ShoppingContent_OrderinvoicesCreateChargeInvoiceRequest');
class_alias(OrderinvoicesCreateChargeInvoiceResponse::class, 'Google_Service_ShoppingContent_OrderinvoicesCreateChargeInvoiceResponse');
class_alias(OrderinvoicesCreateRefundInvoiceRequest::class, 'Google_Service_ShoppingContent_OrderinvoicesCreateRefundInvoiceRequest');
class_alias(OrderinvoicesCreateRefundInvoiceResponse::class, 'Google_Service_ShoppingContent_OrderinvoicesCreateRefundInvoiceResponse');
class_alias(OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceRefundOption::class, 'Google_Service_ShoppingContent_OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceRefundOption');
class_alias(OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceReturnOption::class, 'Google_Service_ShoppingContent_OrderinvoicesCustomBatchRequestEntryCreateRefundInvoiceReturnOption');
class_alias(OrderreportsListDisbursementsResponse::class, 'Google_Service_ShoppingContent_OrderreportsListDisbursementsResponse');
class_alias(OrderreportsListTransactionsResponse::class, 'Google_Service_ShoppingContent_OrderreportsListTransactionsResponse');
class_alias(OrderreturnsAcknowledgeRequest::class, 'Google_Service_ShoppingContent_OrderreturnsAcknowledgeRequest');
class_alias(OrderreturnsAcknowledgeResponse::class, 'Google_Service_ShoppingContent_OrderreturnsAcknowledgeResponse');
class_alias(OrderreturnsCreateOrderReturnRequest::class, 'Google_Service_ShoppingContent_OrderreturnsCreateOrderReturnRequest');
class_alias(OrderreturnsCreateOrderReturnResponse::class, 'Google_Service_ShoppingContent_OrderreturnsCreateOrderReturnResponse');
class_alias(OrderreturnsLineItem::class, 'Google_Service_ShoppingContent_OrderreturnsLineItem');
class_alias(OrderreturnsListResponse::class, 'Google_Service_ShoppingContent_OrderreturnsListResponse');
class_alias(OrderreturnsPartialRefund::class, 'Google_Service_ShoppingContent_OrderreturnsPartialRefund');
class_alias(OrderreturnsProcessRequest::class, 'Google_Service_ShoppingContent_OrderreturnsProcessRequest');
class_alias(OrderreturnsProcessResponse::class, 'Google_Service_ShoppingContent_OrderreturnsProcessResponse');
class_alias(OrderreturnsRefundOperation::class, 'Google_Service_ShoppingContent_OrderreturnsRefundOperation');
class_alias(OrderreturnsRejectOperation::class, 'Google_Service_ShoppingContent_OrderreturnsRejectOperation');
class_alias(OrderreturnsReturnItem::class, 'Google_Service_ShoppingContent_OrderreturnsReturnItem');
class_alias(OrdersAcknowledgeRequest::class, 'Google_Service_ShoppingContent_OrdersAcknowledgeRequest');
class_alias(OrdersAcknowledgeResponse::class, 'Google_Service_ShoppingContent_OrdersAcknowledgeResponse');
class_alias(OrdersAdvanceTestOrderResponse::class, 'Google_Service_ShoppingContent_OrdersAdvanceTestOrderResponse');
class_alias(OrdersCancelLineItemRequest::class, 'Google_Service_ShoppingContent_OrdersCancelLineItemRequest');
class_alias(OrdersCancelLineItemResponse::class, 'Google_Service_ShoppingContent_OrdersCancelLineItemResponse');
class_alias(OrdersCancelRequest::class, 'Google_Service_ShoppingContent_OrdersCancelRequest');
class_alias(OrdersCancelResponse::class, 'Google_Service_ShoppingContent_OrdersCancelResponse');
class_alias(OrdersCancelTestOrderByCustomerRequest::class, 'Google_Service_ShoppingContent_OrdersCancelTestOrderByCustomerRequest');
class_alias(OrdersCancelTestOrderByCustomerResponse::class, 'Google_Service_ShoppingContent_OrdersCancelTestOrderByCustomerResponse');
class_alias(OrdersCreateTestOrderRequest::class, 'Google_Service_ShoppingContent_OrdersCreateTestOrderRequest');
class_alias(OrdersCreateTestOrderResponse::class, 'Google_Service_ShoppingContent_OrdersCreateTestOrderResponse');
class_alias(OrdersCreateTestReturnRequest::class, 'Google_Service_ShoppingContent_OrdersCreateTestReturnRequest');
class_alias(OrdersCreateTestReturnResponse::class, 'Google_Service_ShoppingContent_OrdersCreateTestReturnResponse');
class_alias(OrdersCustomBatchRequestEntryCreateTestReturnReturnItem::class, 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCreateTestReturnReturnItem');
class_alias(OrdersCustomBatchRequestEntryRefundItemItem::class, 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryRefundItemItem');
class_alias(OrdersCustomBatchRequestEntryRefundItemShipping::class, 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryRefundItemShipping');
class_alias(OrdersCustomBatchRequestEntryShipLineItemsShipmentInfo::class, 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryShipLineItemsShipmentInfo');
class_alias(OrdersCustomBatchRequestEntryUpdateShipmentScheduledDeliveryDetails::class, 'Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryUpdateShipmentScheduledDeliveryDetails');
class_alias(OrdersGetByMerchantOrderIdResponse::class, 'Google_Service_ShoppingContent_OrdersGetByMerchantOrderIdResponse');
class_alias(OrdersGetTestOrderTemplateResponse::class, 'Google_Service_ShoppingContent_OrdersGetTestOrderTemplateResponse');
class_alias(OrdersInStoreRefundLineItemRequest::class, 'Google_Service_ShoppingContent_OrdersInStoreRefundLineItemRequest');
class_alias(OrdersInStoreRefundLineItemResponse::class, 'Google_Service_ShoppingContent_OrdersInStoreRefundLineItemResponse');
class_alias(OrdersListResponse::class, 'Google_Service_ShoppingContent_OrdersListResponse');
class_alias(OrdersRefundItemRequest::class, 'Google_Service_ShoppingContent_OrdersRefundItemRequest');
class_alias(OrdersRefundItemResponse::class, 'Google_Service_ShoppingContent_OrdersRefundItemResponse');
class_alias(OrdersRefundOrderRequest::class, 'Google_Service_ShoppingContent_OrdersRefundOrderRequest');
class_alias(OrdersRefundOrderResponse::class, 'Google_Service_ShoppingContent_OrdersRefundOrderResponse');
class_alias(OrdersRejectReturnLineItemRequest::class, 'Google_Service_ShoppingContent_OrdersRejectReturnLineItemRequest');
class_alias(OrdersRejectReturnLineItemResponse::class, 'Google_Service_ShoppingContent_OrdersRejectReturnLineItemResponse');
class_alias(OrdersReturnRefundLineItemRequest::class, 'Google_Service_ShoppingContent_OrdersReturnRefundLineItemRequest');
class_alias(OrdersReturnRefundLineItemResponse::class, 'Google_Service_ShoppingContent_OrdersReturnRefundLineItemResponse');
class_alias(OrdersSetLineItemMetadataRequest::class, 'Google_Service_ShoppingContent_OrdersSetLineItemMetadataRequest');
class_alias(OrdersSetLineItemMetadataResponse::class, 'Google_Service_ShoppingContent_OrdersSetLineItemMetadataResponse');
class_alias(OrdersShipLineItemsRequest::class, 'Google_Service_ShoppingContent_OrdersShipLineItemsRequest');
class_alias(OrdersShipLineItemsResponse::class, 'Google_Service_ShoppingContent_OrdersShipLineItemsResponse');
class_alias(OrdersUpdateLineItemShippingDetailsRequest::class, 'Google_Service_ShoppingContent_OrdersUpdateLineItemShippingDetailsRequest');
class_alias(OrdersUpdateLineItemShippingDetailsResponse::class, 'Google_Service_ShoppingContent_OrdersUpdateLineItemShippingDetailsResponse');
class_alias(OrdersUpdateMerchantOrderIdRequest::class, 'Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdRequest');
class_alias(OrdersUpdateMerchantOrderIdResponse::class, 'Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdResponse');
class_alias(OrdersUpdateShipmentRequest::class, 'Google_Service_ShoppingContent_OrdersUpdateShipmentRequest');
class_alias(OrdersUpdateShipmentResponse::class, 'Google_Service_ShoppingContent_OrdersUpdateShipmentResponse');
class_alias(PauseBuyOnGoogleProgramRequest::class, 'Google_Service_ShoppingContent_PauseBuyOnGoogleProgramRequest');
class_alias(PaymentServiceProviderLinkInfo::class, 'Google_Service_ShoppingContent_PaymentServiceProviderLinkInfo');
class_alias(PickupCarrierService::class, 'Google_Service_ShoppingContent_PickupCarrierService');
class_alias(PickupServicesPickupService::class, 'Google_Service_ShoppingContent_PickupServicesPickupService');
class_alias(PosCustomBatchRequest::class, 'Google_Service_ShoppingContent_PosCustomBatchRequest');
class_alias(PosCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_PosCustomBatchRequestEntry');
class_alias(PosCustomBatchResponse::class, 'Google_Service_ShoppingContent_PosCustomBatchResponse');
class_alias(PosCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_PosCustomBatchResponseEntry');
class_alias(PosDataProviders::class, 'Google_Service_ShoppingContent_PosDataProviders');
class_alias(PosDataProvidersPosDataProvider::class, 'Google_Service_ShoppingContent_PosDataProvidersPosDataProvider');
class_alias(PosInventory::class, 'Google_Service_ShoppingContent_PosInventory');
class_alias(PosInventoryRequest::class, 'Google_Service_ShoppingContent_PosInventoryRequest');
class_alias(PosInventoryResponse::class, 'Google_Service_ShoppingContent_PosInventoryResponse');
class_alias(PosListResponse::class, 'Google_Service_ShoppingContent_PosListResponse');
class_alias(PosSale::class, 'Google_Service_ShoppingContent_PosSale');
class_alias(PosSaleRequest::class, 'Google_Service_ShoppingContent_PosSaleRequest');
class_alias(PosSaleResponse::class, 'Google_Service_ShoppingContent_PosSaleResponse');
class_alias(PosStore::class, 'Google_Service_ShoppingContent_PosStore');
class_alias(PostalCodeGroup::class, 'Google_Service_ShoppingContent_PostalCodeGroup');
class_alias(PostalCodeRange::class, 'Google_Service_ShoppingContent_PostalCodeRange');
class_alias(Price::class, 'Google_Service_ShoppingContent_Price');
class_alias(PriceAmount::class, 'Google_Service_ShoppingContent_PriceAmount');
class_alias(PriceCompetitiveness::class, 'Google_Service_ShoppingContent_PriceCompetitiveness');
class_alias(PriceInsights::class, 'Google_Service_ShoppingContent_PriceInsights');
class_alias(Product::class, 'Google_Service_ShoppingContent_Product');
class_alias(ProductAmount::class, 'Google_Service_ShoppingContent_ProductAmount');
class_alias(ProductCluster::class, 'Google_Service_ShoppingContent_ProductCluster');
class_alias(ProductDeliveryTime::class, 'Google_Service_ShoppingContent_ProductDeliveryTime');
class_alias(ProductDeliveryTimeAreaDeliveryTime::class, 'Google_Service_ShoppingContent_ProductDeliveryTimeAreaDeliveryTime');
class_alias(ProductDeliveryTimeAreaDeliveryTimeDeliveryTime::class, 'Google_Service_ShoppingContent_ProductDeliveryTimeAreaDeliveryTimeDeliveryTime');
class_alias(ProductDimension::class, 'Google_Service_ShoppingContent_ProductDimension');
class_alias(ProductId::class, 'Google_Service_ShoppingContent_ProductId');
class_alias(ProductProductDetail::class, 'Google_Service_ShoppingContent_ProductProductDetail');
class_alias(ProductShipping::class, 'Google_Service_ShoppingContent_ProductShipping');
class_alias(ProductShippingDimension::class, 'Google_Service_ShoppingContent_ProductShippingDimension');
class_alias(ProductShippingWeight::class, 'Google_Service_ShoppingContent_ProductShippingWeight');
class_alias(ProductStatus::class, 'Google_Service_ShoppingContent_ProductStatus');
class_alias(ProductStatusDestinationStatus::class, 'Google_Service_ShoppingContent_ProductStatusDestinationStatus');
class_alias(ProductStatusItemLevelIssue::class, 'Google_Service_ShoppingContent_ProductStatusItemLevelIssue');
class_alias(ProductSubscriptionCost::class, 'Google_Service_ShoppingContent_ProductSubscriptionCost');
class_alias(ProductTax::class, 'Google_Service_ShoppingContent_ProductTax');
class_alias(ProductUnitPricingBaseMeasure::class, 'Google_Service_ShoppingContent_ProductUnitPricingBaseMeasure');
class_alias(ProductUnitPricingMeasure::class, 'Google_Service_ShoppingContent_ProductUnitPricingMeasure');
class_alias(ProductView::class, 'Google_Service_ShoppingContent_ProductView');
class_alias(ProductViewItemIssue::class, 'Google_Service_ShoppingContent_ProductViewItemIssue');
class_alias(ProductViewItemIssueIssueSeverityPerDestination::class, 'Google_Service_ShoppingContent_ProductViewItemIssueIssueSeverityPerDestination');
class_alias(ProductViewItemIssueItemIssueSeverity::class, 'Google_Service_ShoppingContent_ProductViewItemIssueItemIssueSeverity');
class_alias(ProductViewItemIssueItemIssueType::class, 'Google_Service_ShoppingContent_ProductViewItemIssueItemIssueType');
class_alias(ProductWeight::class, 'Google_Service_ShoppingContent_ProductWeight');
class_alias(ProductsCustomBatchRequest::class, 'Google_Service_ShoppingContent_ProductsCustomBatchRequest');
class_alias(ProductsCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_ProductsCustomBatchRequestEntry');
class_alias(ProductsCustomBatchResponse::class, 'Google_Service_ShoppingContent_ProductsCustomBatchResponse');
class_alias(ProductsCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_ProductsCustomBatchResponseEntry');
class_alias(ProductsListResponse::class, 'Google_Service_ShoppingContent_ProductsListResponse');
class_alias(ProductstatusesCustomBatchRequest::class, 'Google_Service_ShoppingContent_ProductstatusesCustomBatchRequest');
class_alias(ProductstatusesCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_ProductstatusesCustomBatchRequestEntry');
class_alias(ProductstatusesCustomBatchResponse::class, 'Google_Service_ShoppingContent_ProductstatusesCustomBatchResponse');
class_alias(ProductstatusesCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_ProductstatusesCustomBatchResponseEntry');
class_alias(ProductstatusesListResponse::class, 'Google_Service_ShoppingContent_ProductstatusesListResponse');
class_alias(Promotion::class, 'Google_Service_ShoppingContent_Promotion');
class_alias(PubsubNotificationSettings::class, 'Google_Service_ShoppingContent_PubsubNotificationSettings');
class_alias(RateGroup::class, 'Google_Service_ShoppingContent_RateGroup');
class_alias(RefundReason::class, 'Google_Service_ShoppingContent_RefundReason');
class_alias(Region::class, 'Google_Service_ShoppingContent_Region');
class_alias(RegionGeoTargetArea::class, 'Google_Service_ShoppingContent_RegionGeoTargetArea');
class_alias(RegionPostalCodeArea::class, 'Google_Service_ShoppingContent_RegionPostalCodeArea');
class_alias(RegionPostalCodeAreaPostalCodeRange::class, 'Google_Service_ShoppingContent_RegionPostalCodeAreaPostalCodeRange');
class_alias(RegionalInventory::class, 'Google_Service_ShoppingContent_RegionalInventory');
class_alias(RegionalinventoryCustomBatchRequest::class, 'Google_Service_ShoppingContent_RegionalinventoryCustomBatchRequest');
class_alias(RegionalinventoryCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_RegionalinventoryCustomBatchRequestEntry');
class_alias(RegionalinventoryCustomBatchResponse::class, 'Google_Service_ShoppingContent_RegionalinventoryCustomBatchResponse');
class_alias(RegionalinventoryCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_RegionalinventoryCustomBatchResponseEntry');
class_alias(ReportRow::class, 'Google_Service_ShoppingContent_ReportRow');
class_alias(RepricingProductReport::class, 'Google_Service_ShoppingContent_RepricingProductReport');
class_alias(RepricingProductReportBuyboxWinningProductStats::class, 'Google_Service_ShoppingContent_RepricingProductReportBuyboxWinningProductStats');
class_alias(RepricingRule::class, 'Google_Service_ShoppingContent_RepricingRule');
class_alias(RepricingRuleCostOfGoodsSaleRule::class, 'Google_Service_ShoppingContent_RepricingRuleCostOfGoodsSaleRule');
class_alias(RepricingRuleEffectiveTime::class, 'Google_Service_ShoppingContent_RepricingRuleEffectiveTime');
class_alias(RepricingRuleEffectiveTimeFixedTimePeriod::class, 'Google_Service_ShoppingContent_RepricingRuleEffectiveTimeFixedTimePeriod');
class_alias(RepricingRuleEligibleOfferMatcher::class, 'Google_Service_ShoppingContent_RepricingRuleEligibleOfferMatcher');
class_alias(RepricingRuleEligibleOfferMatcherStringMatcher::class, 'Google_Service_ShoppingContent_RepricingRuleEligibleOfferMatcherStringMatcher');
class_alias(RepricingRuleReport::class, 'Google_Service_ShoppingContent_RepricingRuleReport');
class_alias(RepricingRuleReportBuyboxWinningRuleStats::class, 'Google_Service_ShoppingContent_RepricingRuleReportBuyboxWinningRuleStats');
class_alias(RepricingRuleRestriction::class, 'Google_Service_ShoppingContent_RepricingRuleRestriction');
class_alias(RepricingRuleRestrictionBoundary::class, 'Google_Service_ShoppingContent_RepricingRuleRestrictionBoundary');
class_alias(RepricingRuleStatsBasedRule::class, 'Google_Service_ShoppingContent_RepricingRuleStatsBasedRule');
class_alias(RequestPhoneVerificationRequest::class, 'Google_Service_ShoppingContent_RequestPhoneVerificationRequest');
class_alias(RequestPhoneVerificationResponse::class, 'Google_Service_ShoppingContent_RequestPhoneVerificationResponse');
class_alias(RequestReviewBuyOnGoogleProgramRequest::class, 'Google_Service_ShoppingContent_RequestReviewBuyOnGoogleProgramRequest');
class_alias(RequestReviewFreeListingsRequest::class, 'Google_Service_ShoppingContent_RequestReviewFreeListingsRequest');
class_alias(RequestReviewShoppingAdsRequest::class, 'Google_Service_ShoppingContent_RequestReviewShoppingAdsRequest');
class_alias(ReturnAddress::class, 'Google_Service_ShoppingContent_ReturnAddress');
class_alias(ReturnAddressAddress::class, 'Google_Service_ShoppingContent_ReturnAddressAddress');
class_alias(ReturnPolicy::class, 'Google_Service_ShoppingContent_ReturnPolicy');
class_alias(ReturnPolicyOnline::class, 'Google_Service_ShoppingContent_ReturnPolicyOnline');
class_alias(ReturnPolicyOnlinePolicy::class, 'Google_Service_ShoppingContent_ReturnPolicyOnlinePolicy');
class_alias(ReturnPolicyOnlineRestockingFee::class, 'Google_Service_ShoppingContent_ReturnPolicyOnlineRestockingFee');
class_alias(ReturnPolicyOnlineReturnReasonCategoryInfo::class, 'Google_Service_ShoppingContent_ReturnPolicyOnlineReturnReasonCategoryInfo');
class_alias(ReturnPolicyOnlineReturnShippingFee::class, 'Google_Service_ShoppingContent_ReturnPolicyOnlineReturnShippingFee');
class_alias(ReturnPolicyPolicy::class, 'Google_Service_ShoppingContent_ReturnPolicyPolicy');
class_alias(ReturnPolicySeasonalOverride::class, 'Google_Service_ShoppingContent_ReturnPolicySeasonalOverride');
class_alias(ReturnPricingInfo::class, 'Google_Service_ShoppingContent_ReturnPricingInfo');
class_alias(ReturnShipment::class, 'Google_Service_ShoppingContent_ReturnShipment');
class_alias(ReturnShippingLabel::class, 'Google_Service_ShoppingContent_ReturnShippingLabel');
class_alias(ReturnaddressCustomBatchRequest::class, 'Google_Service_ShoppingContent_ReturnaddressCustomBatchRequest');
class_alias(ReturnaddressCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_ReturnaddressCustomBatchRequestEntry');
class_alias(ReturnaddressCustomBatchResponse::class, 'Google_Service_ShoppingContent_ReturnaddressCustomBatchResponse');
class_alias(ReturnaddressCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_ReturnaddressCustomBatchResponseEntry');
class_alias(ReturnaddressListResponse::class, 'Google_Service_ShoppingContent_ReturnaddressListResponse');
class_alias(ReturnpolicyCustomBatchRequest::class, 'Google_Service_ShoppingContent_ReturnpolicyCustomBatchRequest');
class_alias(ReturnpolicyCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_ReturnpolicyCustomBatchRequestEntry');
class_alias(ReturnpolicyCustomBatchResponse::class, 'Google_Service_ShoppingContent_ReturnpolicyCustomBatchResponse');
class_alias(ReturnpolicyCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_ReturnpolicyCustomBatchResponseEntry');
class_alias(ReturnpolicyListResponse::class, 'Google_Service_ShoppingContent_ReturnpolicyListResponse');
class_alias(Row::class, 'Google_Service_ShoppingContent_Row');
class_alias(SearchRequest::class, 'Google_Service_ShoppingContent_SearchRequest');
class_alias(SearchResponse::class, 'Google_Service_ShoppingContent_SearchResponse');
class_alias(Segments::class, 'Google_Service_ShoppingContent_Segments');
class_alias(Service::class, 'Google_Service_ShoppingContent_Service');
class_alias(SettlementReport::class, 'Google_Service_ShoppingContent_SettlementReport');
class_alias(SettlementTransaction::class, 'Google_Service_ShoppingContent_SettlementTransaction');
class_alias(SettlementTransactionAmount::class, 'Google_Service_ShoppingContent_SettlementTransactionAmount');
class_alias(SettlementTransactionAmountCommission::class, 'Google_Service_ShoppingContent_SettlementTransactionAmountCommission');
class_alias(SettlementTransactionIdentifiers::class, 'Google_Service_ShoppingContent_SettlementTransactionIdentifiers');
class_alias(SettlementTransactionTransaction::class, 'Google_Service_ShoppingContent_SettlementTransactionTransaction');
class_alias(SettlementreportsListResponse::class, 'Google_Service_ShoppingContent_SettlementreportsListResponse');
class_alias(SettlementtransactionsListResponse::class, 'Google_Service_ShoppingContent_SettlementtransactionsListResponse');
class_alias(ShipmentInvoice::class, 'Google_Service_ShoppingContent_ShipmentInvoice');
class_alias(ShipmentInvoiceLineItemInvoice::class, 'Google_Service_ShoppingContent_ShipmentInvoiceLineItemInvoice');
class_alias(ShipmentTrackingInfo::class, 'Google_Service_ShoppingContent_ShipmentTrackingInfo');
class_alias(ShippingSettings::class, 'Google_Service_ShoppingContent_ShippingSettings');
class_alias(ShippingsettingsCustomBatchRequest::class, 'Google_Service_ShoppingContent_ShippingsettingsCustomBatchRequest');
class_alias(ShippingsettingsCustomBatchRequestEntry::class, 'Google_Service_ShoppingContent_ShippingsettingsCustomBatchRequestEntry');
class_alias(ShippingsettingsCustomBatchResponse::class, 'Google_Service_ShoppingContent_ShippingsettingsCustomBatchResponse');
class_alias(ShippingsettingsCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_ShippingsettingsCustomBatchResponseEntry');
class_alias(ShippingsettingsGetSupportedCarriersResponse::class, 'Google_Service_ShoppingContent_ShippingsettingsGetSupportedCarriersResponse');
class_alias(ShippingsettingsGetSupportedHolidaysResponse::class, 'Google_Service_ShoppingContent_ShippingsettingsGetSupportedHolidaysResponse');
class_alias(ShippingsettingsGetSupportedPickupServicesResponse::class, 'Google_Service_ShoppingContent_ShippingsettingsGetSupportedPickupServicesResponse');
class_alias(ShippingsettingsListResponse::class, 'Google_Service_ShoppingContent_ShippingsettingsListResponse');
class_alias(ShoppingAdsProgramStatus::class, 'Google_Service_ShoppingContent_ShoppingAdsProgramStatus');
class_alias(ShoppingAdsProgramStatusRegionStatus::class, 'Google_Service_ShoppingContent_ShoppingAdsProgramStatusRegionStatus');
class_alias(ShoppingAdsProgramStatusReviewIneligibilityReasonDetails::class, 'Google_Service_ShoppingContent_ShoppingAdsProgramStatusReviewIneligibilityReasonDetails');
class_alias(Table::class, 'Google_Service_ShoppingContent_Table');
class_alias(TestOrder::class, 'Google_Service_ShoppingContent_TestOrder');
class_alias(TestOrderAddress::class, 'Google_Service_ShoppingContent_TestOrderAddress');
class_alias(TestOrderDeliveryDetails::class, 'Google_Service_ShoppingContent_TestOrderDeliveryDetails');
class_alias(TestOrderLineItem::class, 'Google_Service_ShoppingContent_TestOrderLineItem');
class_alias(TestOrderLineItemProduct::class, 'Google_Service_ShoppingContent_TestOrderLineItemProduct');
class_alias(TestOrderPickupDetails::class, 'Google_Service_ShoppingContent_TestOrderPickupDetails');
class_alias(TestOrderPickupDetailsPickupPerson::class, 'Google_Service_ShoppingContent_TestOrderPickupDetailsPickupPerson');
class_alias(TimePeriod::class, 'Google_Service_ShoppingContent_TimePeriod');
class_alias(TimeZone::class, 'Google_Service_ShoppingContent_TimeZone');
class_alias(TransitTable::class, 'Google_Service_ShoppingContent_TransitTable');
class_alias(TransitTableTransitTimeRow::class, 'Google_Service_ShoppingContent_TransitTableTransitTimeRow');
class_alias(TransitTableTransitTimeRowTransitTimeValue::class, 'Google_Service_ShoppingContent_TransitTableTransitTimeRowTransitTimeValue');
class_alias(UnitInvoice::class, 'Google_Service_ShoppingContent_UnitInvoice');
class_alias(UnitInvoiceAdditionalCharge::class, 'Google_Service_ShoppingContent_UnitInvoiceAdditionalCharge');
class_alias(UnitInvoiceTaxLine::class, 'Google_Service_ShoppingContent_UnitInvoiceTaxLine');
class_alias(Value::class, 'Google_Service_ShoppingContent_Value');
class_alias(VerifyPhoneNumberRequest::class, 'Google_Service_ShoppingContent_VerifyPhoneNumberRequest');
class_alias(VerifyPhoneNumberResponse::class, 'Google_Service_ShoppingContent_VerifyPhoneNumberResponse');
class_alias(Warehouse::class, 'Google_Service_ShoppingContent_Warehouse');
class_alias(WarehouseBasedDeliveryTime::class, 'Google_Service_ShoppingContent_WarehouseBasedDeliveryTime');
class_alias(WarehouseCutoffTime::class, 'Google_Service_ShoppingContent_WarehouseCutoffTime');
class_alias(Weight::class, 'Google_Service_ShoppingContent_Weight');
