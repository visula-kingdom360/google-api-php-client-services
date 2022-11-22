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

namespace Google\Service\Dfareporting;

class Account extends \Google\Collection
{
  /** @var string[] */
  public $accountPermissionIds;
  /** @var string */
  public $accountProfile;
  /** @var bool */
  public $active;
  /** @var string */
  public $activeAdsLimitTier;
  /** @var bool */
  public $activeViewOptOut;
  /** @var string[] */
  public $availablePermissionIds;
  /** @var string */
  public $countryId;
  /** @var string */
  public $currencyId;
  /** @var string */
  public $defaultCreativeSizeId;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $locale;
  /** @var string */
  public $maximumImageSize;
  /** @var string */
  public $name;
  /** @var bool */
  public $nielsenOcrEnabled;
  /** @var ReportsConfiguration */
  public $reportsConfiguration;
  /** @var bool */
  public $shareReportsWithTwitter;
  /** @var string */
  public $teaserSizeLimit;
  protected $collection_key = 'availablePermissionIds';
  protected $reportsConfigurationType = ReportsConfiguration::class;
  protected $reportsConfigurationDataType = '';
  /** @param string[] */
  public function setAccountPermissionIds($accountPermissionIds)
  {
    $this->accountPermissionIds = $accountPermissionIds;
  }
  /** @return string[] */
  public function getAccountPermissionIds()
  {
    return $this->accountPermissionIds;
  }
  /** @param string */
  public function setAccountProfile($accountProfile)
  {
    $this->accountProfile = $accountProfile;
  }
  /** @return string */
  public function getAccountProfile()
  {
    return $this->accountProfile;
  }
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
  public function setActiveAdsLimitTier($activeAdsLimitTier)
  {
    $this->activeAdsLimitTier = $activeAdsLimitTier;
  }
  /** @return string */
  public function getActiveAdsLimitTier()
  {
    return $this->activeAdsLimitTier;
  }
  /** @param bool */
  public function setActiveViewOptOut($activeViewOptOut)
  {
    $this->activeViewOptOut = $activeViewOptOut;
  }
  /** @return bool */
  public function getActiveViewOptOut()
  {
    return $this->activeViewOptOut;
  }
  /** @param string[] */
  public function setAvailablePermissionIds($availablePermissionIds)
  {
    $this->availablePermissionIds = $availablePermissionIds;
  }
  /** @return string[] */
  public function getAvailablePermissionIds()
  {
    return $this->availablePermissionIds;
  }
  /** @param string */
  public function setCountryId($countryId)
  {
    $this->countryId = $countryId;
  }
  /** @return string */
  public function getCountryId()
  {
    return $this->countryId;
  }
  /** @param string */
  public function setCurrencyId($currencyId)
  {
    $this->currencyId = $currencyId;
  }
  /** @return string */
  public function getCurrencyId()
  {
    return $this->currencyId;
  }
  /** @param string */
  public function setDefaultCreativeSizeId($defaultCreativeSizeId)
  {
    $this->defaultCreativeSizeId = $defaultCreativeSizeId;
  }
  /** @return string */
  public function getDefaultCreativeSizeId()
  {
    return $this->defaultCreativeSizeId;
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
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
  }
  /** @param string */
  public function setMaximumImageSize($maximumImageSize)
  {
    $this->maximumImageSize = $maximumImageSize;
  }
  /** @return string */
  public function getMaximumImageSize()
  {
    return $this->maximumImageSize;
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
  public function setNielsenOcrEnabled($nielsenOcrEnabled)
  {
    $this->nielsenOcrEnabled = $nielsenOcrEnabled;
  }
  /** @return bool */
  public function getNielsenOcrEnabled()
  {
    return $this->nielsenOcrEnabled;
  }
  /** @param ReportsConfiguration */
  public function setReportsConfiguration(ReportsConfiguration $reportsConfiguration)
  {
    $this->reportsConfiguration = $reportsConfiguration;
  }
  /** @return ReportsConfiguration */
  public function getReportsConfiguration()
  {
    return $this->reportsConfiguration;
  }
  /** @param bool */
  public function setShareReportsWithTwitter($shareReportsWithTwitter)
  {
    $this->shareReportsWithTwitter = $shareReportsWithTwitter;
  }
  /** @return bool */
  public function getShareReportsWithTwitter()
  {
    return $this->shareReportsWithTwitter;
  }
  /** @param string */
  public function setTeaserSizeLimit($teaserSizeLimit)
  {
    $this->teaserSizeLimit = $teaserSizeLimit;
  }
  /** @return string */
  public function getTeaserSizeLimit()
  {
    return $this->teaserSizeLimit;
  }
}

class AccountActiveAdSummary extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $activeAds;
  /** @var string */
  public $activeAdsLimitTier;
  /** @var string */
  public $availableAds;
  /** @var string */
  public $kind;

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
  public function setActiveAds($activeAds)
  {
    $this->activeAds = $activeAds;
  }
  /** @return string */
  public function getActiveAds()
  {
    return $this->activeAds;
  }
  /** @param string */
  public function setActiveAdsLimitTier($activeAdsLimitTier)
  {
    $this->activeAdsLimitTier = $activeAdsLimitTier;
  }
  /** @return string */
  public function getActiveAdsLimitTier()
  {
    return $this->activeAdsLimitTier;
  }
  /** @param string */
  public function setAvailableAds($availableAds)
  {
    $this->availableAds = $availableAds;
  }
  /** @return string */
  public function getAvailableAds()
  {
    return $this->availableAds;
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

class AccountPermission extends \Google\Collection
{
  /** @var string[] */
  public $accountProfiles;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $level;
  /** @var string */
  public $name;
  /** @var string */
  public $permissionGroupId;
  protected $collection_key = 'accountProfiles';
  /** @param string[] */
  public function setAccountProfiles($accountProfiles)
  {
    $this->accountProfiles = $accountProfiles;
  }
  /** @return string[] */
  public function getAccountProfiles()
  {
    return $this->accountProfiles;
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
  public function setLevel($level)
  {
    $this->level = $level;
  }
  /** @return string */
  public function getLevel()
  {
    return $this->level;
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
  public function setPermissionGroupId($permissionGroupId)
  {
    $this->permissionGroupId = $permissionGroupId;
  }
  /** @return string */
  public function getPermissionGroupId()
  {
    return $this->permissionGroupId;
  }
}

class AccountPermissionGroup extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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
}

class AccountPermissionGroupsListResponse extends \Google\Collection
{
  /** @var AccountPermissionGroup[] */
  public $accountPermissionGroups;
  /** @var string */
  public $kind;
  protected $collection_key = 'accountPermissionGroups';
  protected $accountPermissionGroupsType = AccountPermissionGroup::class;
  protected $accountPermissionGroupsDataType = 'array';
  /** @param AccountPermissionGroup[] */
  public function setAccountPermissionGroups($accountPermissionGroups)
  {
    $this->accountPermissionGroups = $accountPermissionGroups;
  }
  /** @return AccountPermissionGroup[] */
  public function getAccountPermissionGroups()
  {
    return $this->accountPermissionGroups;
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

class AccountPermissionsListResponse extends \Google\Collection
{
  /** @var AccountPermission[] */
  public $accountPermissions;
  /** @var string */
  public $kind;
  protected $collection_key = 'accountPermissions';
  protected $accountPermissionsType = AccountPermission::class;
  protected $accountPermissionsDataType = 'array';
  /** @param AccountPermission[] */
  public function setAccountPermissions($accountPermissions)
  {
    $this->accountPermissions = $accountPermissions;
  }
  /** @return AccountPermission[] */
  public function getAccountPermissions()
  {
    return $this->accountPermissions;
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

class AccountUserProfile extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $active;
  /** @var ObjectFilter */
  public $advertiserFilter;
  /** @var ObjectFilter */
  public $campaignFilter;
  /** @var string */
  public $comments;
  /** @var string */
  public $email;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $locale;
  /** @var string */
  public $name;
  /** @var ObjectFilter */
  public $siteFilter;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $traffickerType;
  /** @var string */
  public $userAccessType;
  /** @var ObjectFilter */
  public $userRoleFilter;
  /** @var string */
  public $userRoleId;
  protected $advertiserFilterType = ObjectFilter::class;
  protected $advertiserFilterDataType = '';
  protected $campaignFilterType = ObjectFilter::class;
  protected $campaignFilterDataType = '';
  protected $siteFilterType = ObjectFilter::class;
  protected $siteFilterDataType = '';
  protected $userRoleFilterType = ObjectFilter::class;
  protected $userRoleFilterDataType = '';
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
  /** @param ObjectFilter */
  public function setAdvertiserFilter(ObjectFilter $advertiserFilter)
  {
    $this->advertiserFilter = $advertiserFilter;
  }
  /** @return ObjectFilter */
  public function getAdvertiserFilter()
  {
    return $this->advertiserFilter;
  }
  /** @param ObjectFilter */
  public function setCampaignFilter(ObjectFilter $campaignFilter)
  {
    $this->campaignFilter = $campaignFilter;
  }
  /** @return ObjectFilter */
  public function getCampaignFilter()
  {
    return $this->campaignFilter;
  }
  /** @param string */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  /** @return string */
  public function getComments()
  {
    return $this->comments;
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
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
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
  /** @param ObjectFilter */
  public function setSiteFilter(ObjectFilter $siteFilter)
  {
    $this->siteFilter = $siteFilter;
  }
  /** @return ObjectFilter */
  public function getSiteFilter()
  {
    return $this->siteFilter;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  /** @param string */
  public function setTraffickerType($traffickerType)
  {
    $this->traffickerType = $traffickerType;
  }
  /** @return string */
  public function getTraffickerType()
  {
    return $this->traffickerType;
  }
  /** @param string */
  public function setUserAccessType($userAccessType)
  {
    $this->userAccessType = $userAccessType;
  }
  /** @return string */
  public function getUserAccessType()
  {
    return $this->userAccessType;
  }
  /** @param ObjectFilter */
  public function setUserRoleFilter(ObjectFilter $userRoleFilter)
  {
    $this->userRoleFilter = $userRoleFilter;
  }
  /** @return ObjectFilter */
  public function getUserRoleFilter()
  {
    return $this->userRoleFilter;
  }
  /** @param string */
  public function setUserRoleId($userRoleId)
  {
    $this->userRoleId = $userRoleId;
  }
  /** @return string */
  public function getUserRoleId()
  {
    return $this->userRoleId;
  }
}

class AccountUserProfilesListResponse extends \Google\Collection
{
  /** @var AccountUserProfile[] */
  public $accountUserProfiles;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accountUserProfiles';
  protected $accountUserProfilesType = AccountUserProfile::class;
  protected $accountUserProfilesDataType = 'array';
  /** @param AccountUserProfile[] */
  public function setAccountUserProfiles($accountUserProfiles)
  {
    $this->accountUserProfiles = $accountUserProfiles;
  }
  /** @return AccountUserProfile[] */
  public function getAccountUserProfiles()
  {
    return $this->accountUserProfiles;
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

class AccountsListResponse extends \Google\Collection
{
  /** @var Account[] */
  public $accounts;
  /** @var string */
  public $kind;
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

class Activities extends \Google\Collection
{
  /** @var DimensionValue[] */
  public $filters;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $metricNames;
  protected $collection_key = 'metricNames';
  protected $filtersType = DimensionValue::class;
  protected $filtersDataType = 'array';
  /** @param DimensionValue[] */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return DimensionValue[] */
  public function getFilters()
  {
    return $this->filters;
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
  public function setMetricNames($metricNames)
  {
    $this->metricNames = $metricNames;
  }
  /** @return string[] */
  public function getMetricNames()
  {
    return $this->metricNames;
  }
}

class Ad extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $active;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var bool */
  public $archived;
  /** @var string */
  public $audienceSegmentId;
  /** @var string */
  public $campaignId;
  /** @var DimensionValue */
  public $campaignIdDimensionValue;
  /** @var ClickThroughUrl */
  public $clickThroughUrl;
  /** @var ClickThroughUrlSuffixProperties */
  public $clickThroughUrlSuffixProperties;
  /** @var string */
  public $comments;
  /** @var string */
  public $compatibility;
  /** @var LastModifiedInfo */
  public $createInfo;
  /** @var CreativeGroupAssignment[] */
  public $creativeGroupAssignments;
  /** @var CreativeRotation */
  public $creativeRotation;
  /** @var DayPartTargeting */
  public $dayPartTargeting;
  /** @var DefaultClickThroughEventTagProperties */
  public $defaultClickThroughEventTagProperties;
  /** @var DeliverySchedule */
  public $deliverySchedule;
  /** @var bool */
  public $dynamicClickTracker;
  /** @var string */
  public $endTime;
  /** @var EventTagOverride[] */
  public $eventTagOverrides;
  /** @var GeoTargeting */
  public $geoTargeting;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var KeyValueTargetingExpression */
  public $keyValueTargetingExpression;
  /** @var string */
  public $kind;
  /** @var LanguageTargeting */
  public $languageTargeting;
  /** @var LastModifiedInfo */
  public $lastModifiedInfo;
  /** @var string */
  public $name;
  /** @var PlacementAssignment[] */
  public $placementAssignments;
  /** @var ListTargetingExpression */
  public $remarketingListExpression;
  /** @var Size */
  public $size;
  /** @var bool */
  public $sslCompliant;
  /** @var bool */
  public $sslRequired;
  /** @var string */
  public $startTime;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $targetingTemplateId;
  /** @var TechnologyTargeting */
  public $technologyTargeting;
  /** @var string */
  public $type;
  protected $collection_key = 'placementAssignments';
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
  protected $campaignIdDimensionValueType = DimensionValue::class;
  protected $campaignIdDimensionValueDataType = '';
  protected $clickThroughUrlType = ClickThroughUrl::class;
  protected $clickThroughUrlDataType = '';
  protected $clickThroughUrlSuffixPropertiesType = ClickThroughUrlSuffixProperties::class;
  protected $clickThroughUrlSuffixPropertiesDataType = '';
  protected $createInfoType = LastModifiedInfo::class;
  protected $createInfoDataType = '';
  protected $creativeGroupAssignmentsType = CreativeGroupAssignment::class;
  protected $creativeGroupAssignmentsDataType = 'array';
  protected $creativeRotationType = CreativeRotation::class;
  protected $creativeRotationDataType = '';
  protected $dayPartTargetingType = DayPartTargeting::class;
  protected $dayPartTargetingDataType = '';
  protected $defaultClickThroughEventTagPropertiesType = DefaultClickThroughEventTagProperties::class;
  protected $defaultClickThroughEventTagPropertiesDataType = '';
  protected $deliveryScheduleType = DeliverySchedule::class;
  protected $deliveryScheduleDataType = '';
  protected $eventTagOverridesType = EventTagOverride::class;
  protected $eventTagOverridesDataType = 'array';
  protected $geoTargetingType = GeoTargeting::class;
  protected $geoTargetingDataType = '';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $keyValueTargetingExpressionType = KeyValueTargetingExpression::class;
  protected $keyValueTargetingExpressionDataType = '';
  protected $languageTargetingType = LanguageTargeting::class;
  protected $languageTargetingDataType = '';
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
  protected $placementAssignmentsType = PlacementAssignment::class;
  protected $placementAssignmentsDataType = 'array';
  protected $remarketingListExpressionType = ListTargetingExpression::class;
  protected $remarketingListExpressionDataType = '';
  protected $sizeType = Size::class;
  protected $sizeDataType = '';
  protected $technologyTargetingType = TechnologyTargeting::class;
  protected $technologyTargetingDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  /** @param bool */
  public function setArchived($archived)
  {
    $this->archived = $archived;
  }
  /** @return bool */
  public function getArchived()
  {
    return $this->archived;
  }
  /** @param string */
  public function setAudienceSegmentId($audienceSegmentId)
  {
    $this->audienceSegmentId = $audienceSegmentId;
  }
  /** @return string */
  public function getAudienceSegmentId()
  {
    return $this->audienceSegmentId;
  }
  /** @param string */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /** @return string */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /** @param DimensionValue */
  public function setCampaignIdDimensionValue(DimensionValue $campaignIdDimensionValue)
  {
    $this->campaignIdDimensionValue = $campaignIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getCampaignIdDimensionValue()
  {
    return $this->campaignIdDimensionValue;
  }
  /** @param ClickThroughUrl */
  public function setClickThroughUrl(ClickThroughUrl $clickThroughUrl)
  {
    $this->clickThroughUrl = $clickThroughUrl;
  }
  /** @return ClickThroughUrl */
  public function getClickThroughUrl()
  {
    return $this->clickThroughUrl;
  }
  /** @param ClickThroughUrlSuffixProperties */
  public function setClickThroughUrlSuffixProperties(ClickThroughUrlSuffixProperties $clickThroughUrlSuffixProperties)
  {
    $this->clickThroughUrlSuffixProperties = $clickThroughUrlSuffixProperties;
  }
  /** @return ClickThroughUrlSuffixProperties */
  public function getClickThroughUrlSuffixProperties()
  {
    return $this->clickThroughUrlSuffixProperties;
  }
  /** @param string */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  /** @return string */
  public function getComments()
  {
    return $this->comments;
  }
  /** @param string */
  public function setCompatibility($compatibility)
  {
    $this->compatibility = $compatibility;
  }
  /** @return string */
  public function getCompatibility()
  {
    return $this->compatibility;
  }
  /** @param LastModifiedInfo */
  public function setCreateInfo(LastModifiedInfo $createInfo)
  {
    $this->createInfo = $createInfo;
  }
  /** @return LastModifiedInfo */
  public function getCreateInfo()
  {
    return $this->createInfo;
  }
  /** @param CreativeGroupAssignment[] */
  public function setCreativeGroupAssignments($creativeGroupAssignments)
  {
    $this->creativeGroupAssignments = $creativeGroupAssignments;
  }
  /** @return CreativeGroupAssignment[] */
  public function getCreativeGroupAssignments()
  {
    return $this->creativeGroupAssignments;
  }
  /** @param CreativeRotation */
  public function setCreativeRotation(CreativeRotation $creativeRotation)
  {
    $this->creativeRotation = $creativeRotation;
  }
  /** @return CreativeRotation */
  public function getCreativeRotation()
  {
    return $this->creativeRotation;
  }
  /** @param DayPartTargeting */
  public function setDayPartTargeting(DayPartTargeting $dayPartTargeting)
  {
    $this->dayPartTargeting = $dayPartTargeting;
  }
  /** @return DayPartTargeting */
  public function getDayPartTargeting()
  {
    return $this->dayPartTargeting;
  }
  /** @param DefaultClickThroughEventTagProperties */
  public function setDefaultClickThroughEventTagProperties(DefaultClickThroughEventTagProperties $defaultClickThroughEventTagProperties)
  {
    $this->defaultClickThroughEventTagProperties = $defaultClickThroughEventTagProperties;
  }
  /** @return DefaultClickThroughEventTagProperties */
  public function getDefaultClickThroughEventTagProperties()
  {
    return $this->defaultClickThroughEventTagProperties;
  }
  /** @param DeliverySchedule */
  public function setDeliverySchedule(DeliverySchedule $deliverySchedule)
  {
    $this->deliverySchedule = $deliverySchedule;
  }
  /** @return DeliverySchedule */
  public function getDeliverySchedule()
  {
    return $this->deliverySchedule;
  }
  /** @param bool */
  public function setDynamicClickTracker($dynamicClickTracker)
  {
    $this->dynamicClickTracker = $dynamicClickTracker;
  }
  /** @return bool */
  public function getDynamicClickTracker()
  {
    return $this->dynamicClickTracker;
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
  /** @param EventTagOverride[] */
  public function setEventTagOverrides($eventTagOverrides)
  {
    $this->eventTagOverrides = $eventTagOverrides;
  }
  /** @return EventTagOverride[] */
  public function getEventTagOverrides()
  {
    return $this->eventTagOverrides;
  }
  /** @param GeoTargeting */
  public function setGeoTargeting(GeoTargeting $geoTargeting)
  {
    $this->geoTargeting = $geoTargeting;
  }
  /** @return GeoTargeting */
  public function getGeoTargeting()
  {
    return $this->geoTargeting;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
  }
  /** @param KeyValueTargetingExpression */
  public function setKeyValueTargetingExpression(KeyValueTargetingExpression $keyValueTargetingExpression)
  {
    $this->keyValueTargetingExpression = $keyValueTargetingExpression;
  }
  /** @return KeyValueTargetingExpression */
  public function getKeyValueTargetingExpression()
  {
    return $this->keyValueTargetingExpression;
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
  /** @param LanguageTargeting */
  public function setLanguageTargeting(LanguageTargeting $languageTargeting)
  {
    $this->languageTargeting = $languageTargeting;
  }
  /** @return LanguageTargeting */
  public function getLanguageTargeting()
  {
    return $this->languageTargeting;
  }
  /** @param LastModifiedInfo */
  public function setLastModifiedInfo(LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  /** @return LastModifiedInfo */
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
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
  /** @param PlacementAssignment[] */
  public function setPlacementAssignments($placementAssignments)
  {
    $this->placementAssignments = $placementAssignments;
  }
  /** @return PlacementAssignment[] */
  public function getPlacementAssignments()
  {
    return $this->placementAssignments;
  }
  /** @param ListTargetingExpression */
  public function setRemarketingListExpression(ListTargetingExpression $remarketingListExpression)
  {
    $this->remarketingListExpression = $remarketingListExpression;
  }
  /** @return ListTargetingExpression */
  public function getRemarketingListExpression()
  {
    return $this->remarketingListExpression;
  }
  /** @param Size */
  public function setSize(Size $size)
  {
    $this->size = $size;
  }
  /** @return Size */
  public function getSize()
  {
    return $this->size;
  }
  /** @param bool */
  public function setSslCompliant($sslCompliant)
  {
    $this->sslCompliant = $sslCompliant;
  }
  /** @return bool */
  public function getSslCompliant()
  {
    return $this->sslCompliant;
  }
  /** @param bool */
  public function setSslRequired($sslRequired)
  {
    $this->sslRequired = $sslRequired;
  }
  /** @return bool */
  public function getSslRequired()
  {
    return $this->sslRequired;
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
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  /** @param string */
  public function setTargetingTemplateId($targetingTemplateId)
  {
    $this->targetingTemplateId = $targetingTemplateId;
  }
  /** @return string */
  public function getTargetingTemplateId()
  {
    return $this->targetingTemplateId;
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

class AdBlockingConfiguration extends \Google\Model
{
  /** @var bool */
  public $enabled;

  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
  }
}

class AdSlot extends \Google\Model
{
  /** @var string */
  public $comment;
  /** @var string */
  public $compatibility;
  /** @var string */
  public $height;
  /** @var string */
  public $linkedPlacementId;
  /** @var string */
  public $name;
  /** @var string */
  public $paymentSourceType;
  /** @var bool */
  public $primary;
  /** @var string */
  public $width;

  /** @param string */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /** @return string */
  public function getComment()
  {
    return $this->comment;
  }
  /** @param string */
  public function setCompatibility($compatibility)
  {
    $this->compatibility = $compatibility;
  }
  /** @return string */
  public function getCompatibility()
  {
    return $this->compatibility;
  }
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
  public function setLinkedPlacementId($linkedPlacementId)
  {
    $this->linkedPlacementId = $linkedPlacementId;
  }
  /** @return string */
  public function getLinkedPlacementId()
  {
    return $this->linkedPlacementId;
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
  public function setPaymentSourceType($paymentSourceType)
  {
    $this->paymentSourceType = $paymentSourceType;
  }
  /** @return string */
  public function getPaymentSourceType()
  {
    return $this->paymentSourceType;
  }
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
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

class AdsListResponse extends \Google\Collection
{
  /** @var Ad[] */
  public $ads;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'ads';
  protected $adsType = Ad::class;
  protected $adsDataType = 'array';
  /** @param Ad[] */
  public function setAds($ads)
  {
    $this->ads = $ads;
  }
  /** @return Ad[] */
  public function getAds()
  {
    return $this->ads;
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

class Advertiser extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserGroupId;
  /** @var string */
  public $clickThroughUrlSuffix;
  /** @var string */
  public $defaultClickThroughEventTagId;
  /** @var string */
  public $defaultEmail;
  /** @var string */
  public $floodlightConfigurationId;
  /** @var DimensionValue */
  public $floodlightConfigurationIdDimensionValue;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var string */
  public $kind;
  /** @var MeasurementPartnerAdvertiserLink */
  public $measurementPartnerLink;
  /** @var string */
  public $name;
  /** @var string */
  public $originalFloodlightConfigurationId;
  /** @var string */
  public $status;
  /** @var string */
  public $subaccountId;
  /** @var bool */
  public $suspended;
  protected $floodlightConfigurationIdDimensionValueType = DimensionValue::class;
  protected $floodlightConfigurationIdDimensionValueDataType = '';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $measurementPartnerLinkType = MeasurementPartnerAdvertiserLink::class;
  protected $measurementPartnerLinkDataType = '';
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
  public function setAdvertiserGroupId($advertiserGroupId)
  {
    $this->advertiserGroupId = $advertiserGroupId;
  }
  /** @return string */
  public function getAdvertiserGroupId()
  {
    return $this->advertiserGroupId;
  }
  /** @param string */
  public function setClickThroughUrlSuffix($clickThroughUrlSuffix)
  {
    $this->clickThroughUrlSuffix = $clickThroughUrlSuffix;
  }
  /** @return string */
  public function getClickThroughUrlSuffix()
  {
    return $this->clickThroughUrlSuffix;
  }
  /** @param string */
  public function setDefaultClickThroughEventTagId($defaultClickThroughEventTagId)
  {
    $this->defaultClickThroughEventTagId = $defaultClickThroughEventTagId;
  }
  /** @return string */
  public function getDefaultClickThroughEventTagId()
  {
    return $this->defaultClickThroughEventTagId;
  }
  /** @param string */
  public function setDefaultEmail($defaultEmail)
  {
    $this->defaultEmail = $defaultEmail;
  }
  /** @return string */
  public function getDefaultEmail()
  {
    return $this->defaultEmail;
  }
  /** @param string */
  public function setFloodlightConfigurationId($floodlightConfigurationId)
  {
    $this->floodlightConfigurationId = $floodlightConfigurationId;
  }
  /** @return string */
  public function getFloodlightConfigurationId()
  {
    return $this->floodlightConfigurationId;
  }
  /** @param DimensionValue */
  public function setFloodlightConfigurationIdDimensionValue(DimensionValue $floodlightConfigurationIdDimensionValue)
  {
    $this->floodlightConfigurationIdDimensionValue = $floodlightConfigurationIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getFloodlightConfigurationIdDimensionValue()
  {
    return $this->floodlightConfigurationIdDimensionValue;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
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
  /** @param MeasurementPartnerAdvertiserLink */
  public function setMeasurementPartnerLink(MeasurementPartnerAdvertiserLink $measurementPartnerLink)
  {
    $this->measurementPartnerLink = $measurementPartnerLink;
  }
  /** @return MeasurementPartnerAdvertiserLink */
  public function getMeasurementPartnerLink()
  {
    return $this->measurementPartnerLink;
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
  public function setOriginalFloodlightConfigurationId($originalFloodlightConfigurationId)
  {
    $this->originalFloodlightConfigurationId = $originalFloodlightConfigurationId;
  }
  /** @return string */
  public function getOriginalFloodlightConfigurationId()
  {
    return $this->originalFloodlightConfigurationId;
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
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  /** @param bool */
  public function setSuspended($suspended)
  {
    $this->suspended = $suspended;
  }
  /** @return bool */
  public function getSuspended()
  {
    return $this->suspended;
  }
}

class AdvertiserGroup extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
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
}

class AdvertiserGroupsListResponse extends \Google\Collection
{
  /** @var AdvertiserGroup[] */
  public $advertiserGroups;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'advertiserGroups';
  protected $advertiserGroupsType = AdvertiserGroup::class;
  protected $advertiserGroupsDataType = 'array';
  /** @param AdvertiserGroup[] */
  public function setAdvertiserGroups($advertiserGroups)
  {
    $this->advertiserGroups = $advertiserGroups;
  }
  /** @return AdvertiserGroup[] */
  public function getAdvertiserGroups()
  {
    return $this->advertiserGroups;
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

class AdvertiserInvoicesListResponse extends \Google\Collection
{
  /** @var Invoice[] */
  public $invoices;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'invoices';
  protected $invoicesType = Invoice::class;
  protected $invoicesDataType = 'array';
  /** @param Invoice[] */
  public function setInvoices($invoices)
  {
    $this->invoices = $invoices;
  }
  /** @return Invoice[] */
  public function getInvoices()
  {
    return $this->invoices;
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

class AdvertiserLandingPagesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var LandingPage[] */
  public $landingPages;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'landingPages';
  protected $landingPagesType = LandingPage::class;
  protected $landingPagesDataType = 'array';
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
  /** @param LandingPage[] */
  public function setLandingPages($landingPages)
  {
    $this->landingPages = $landingPages;
  }
  /** @return LandingPage[] */
  public function getLandingPages()
  {
    return $this->landingPages;
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

class AdvertisersListResponse extends \Google\Collection
{
  /** @var Advertiser[] */
  public $advertisers;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'advertisers';
  protected $advertisersType = Advertiser::class;
  protected $advertisersDataType = 'array';
  /** @param Advertiser[] */
  public function setAdvertisers($advertisers)
  {
    $this->advertisers = $advertisers;
  }
  /** @return Advertiser[] */
  public function getAdvertisers()
  {
    return $this->advertisers;
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

class AudienceSegment extends \Google\Model
{
  /** @var int */
  public $allocation;
  /** @var string */
  public $id;
  /** @var string */
  public $name;

  /** @param int */
  public function setAllocation($allocation)
  {
    $this->allocation = $allocation;
  }
  /** @return int */
  public function getAllocation()
  {
    return $this->allocation;
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

class AudienceSegmentGroup extends \Google\Collection
{
  /** @var AudienceSegment[] */
  public $audienceSegments;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  protected $collection_key = 'audienceSegments';
  protected $audienceSegmentsType = AudienceSegment::class;
  protected $audienceSegmentsDataType = 'array';
  /** @param AudienceSegment[] */
  public function setAudienceSegments($audienceSegments)
  {
    $this->audienceSegments = $audienceSegments;
  }
  /** @return AudienceSegment[] */
  public function getAudienceSegments()
  {
    return $this->audienceSegments;
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

class BillingAssignment extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $campaignId;
  /** @var string */
  public $kind;
  /** @var string */
  public $subaccountId;

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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param string */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /** @return string */
  public function getCampaignId()
  {
    return $this->campaignId;
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
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
}

class BillingAssignmentsListResponse extends \Google\Collection
{
  /** @var BillingAssignment[] */
  public $billingAssignments;
  /** @var string */
  public $kind;
  protected $collection_key = 'billingAssignments';
  protected $billingAssignmentsType = BillingAssignment::class;
  protected $billingAssignmentsDataType = 'array';
  /** @param BillingAssignment[] */
  public function setBillingAssignments($billingAssignments)
  {
    $this->billingAssignments = $billingAssignments;
  }
  /** @return BillingAssignment[] */
  public function getBillingAssignments()
  {
    return $this->billingAssignments;
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

class BillingProfile extends \Google\Model
{
  /** @var bool */
  public $consolidatedInvoice;
  /** @var string */
  public $countryCode;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $id;
  /** @var string */
  public $invoiceLevel;
  /** @var bool */
  public $isDefault;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $paymentsAccountId;
  /** @var string */
  public $paymentsCustomerId;
  /** @var string */
  public $purchaseOrder;
  /** @var string */
  public $secondaryPaymentsCustomerId;
  /** @var string */
  public $status;

  /** @param bool */
  public function setConsolidatedInvoice($consolidatedInvoice)
  {
    $this->consolidatedInvoice = $consolidatedInvoice;
  }
  /** @return bool */
  public function getConsolidatedInvoice()
  {
    return $this->consolidatedInvoice;
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
  public function setInvoiceLevel($invoiceLevel)
  {
    $this->invoiceLevel = $invoiceLevel;
  }
  /** @return string */
  public function getInvoiceLevel()
  {
    return $this->invoiceLevel;
  }
  /** @param bool */
  public function setIsDefault($isDefault)
  {
    $this->isDefault = $isDefault;
  }
  /** @return bool */
  public function getIsDefault()
  {
    return $this->isDefault;
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
  /** @param string */
  public function setPaymentsAccountId($paymentsAccountId)
  {
    $this->paymentsAccountId = $paymentsAccountId;
  }
  /** @return string */
  public function getPaymentsAccountId()
  {
    return $this->paymentsAccountId;
  }
  /** @param string */
  public function setPaymentsCustomerId($paymentsCustomerId)
  {
    $this->paymentsCustomerId = $paymentsCustomerId;
  }
  /** @return string */
  public function getPaymentsCustomerId()
  {
    return $this->paymentsCustomerId;
  }
  /** @param string */
  public function setPurchaseOrder($purchaseOrder)
  {
    $this->purchaseOrder = $purchaseOrder;
  }
  /** @return string */
  public function getPurchaseOrder()
  {
    return $this->purchaseOrder;
  }
  /** @param string */
  public function setSecondaryPaymentsCustomerId($secondaryPaymentsCustomerId)
  {
    $this->secondaryPaymentsCustomerId = $secondaryPaymentsCustomerId;
  }
  /** @return string */
  public function getSecondaryPaymentsCustomerId()
  {
    return $this->secondaryPaymentsCustomerId;
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

class BillingProfilesListResponse extends \Google\Collection
{
  /** @var BillingProfile[] */
  public $billingProfiles;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'billingProfiles';
  protected $billingProfilesType = BillingProfile::class;
  protected $billingProfilesDataType = 'array';
  /** @param BillingProfile[] */
  public function setBillingProfiles($billingProfiles)
  {
    $this->billingProfiles = $billingProfiles;
  }
  /** @return BillingProfile[] */
  public function getBillingProfiles()
  {
    return $this->billingProfiles;
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

class BillingRate extends \Google\Collection
{
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $endDate;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $rateInMicros;
  /** @var string */
  public $startDate;
  /** @var BillingRateTieredRate[] */
  public $tieredRates;
  /** @var string */
  public $type;
  /** @var string */
  public $unitOfMeasure;
  protected $collection_key = 'tieredRates';
  protected $tieredRatesType = BillingRateTieredRate::class;
  protected $tieredRatesDataType = 'array';
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
  public function setRateInMicros($rateInMicros)
  {
    $this->rateInMicros = $rateInMicros;
  }
  /** @return string */
  public function getRateInMicros()
  {
    return $this->rateInMicros;
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
  /** @param BillingRateTieredRate[] */
  public function setTieredRates($tieredRates)
  {
    $this->tieredRates = $tieredRates;
  }
  /** @return BillingRateTieredRate[] */
  public function getTieredRates()
  {
    return $this->tieredRates;
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
  public function setUnitOfMeasure($unitOfMeasure)
  {
    $this->unitOfMeasure = $unitOfMeasure;
  }
  /** @return string */
  public function getUnitOfMeasure()
  {
    return $this->unitOfMeasure;
  }
}

class BillingRateTieredRate extends \Google\Model
{
  /** @var string */
  public $highValue;
  /** @var string */
  public $lowValue;
  /** @var string */
  public $rateInMicros;

  /** @param string */
  public function setHighValue($highValue)
  {
    $this->highValue = $highValue;
  }
  /** @return string */
  public function getHighValue()
  {
    return $this->highValue;
  }
  /** @param string */
  public function setLowValue($lowValue)
  {
    $this->lowValue = $lowValue;
  }
  /** @return string */
  public function getLowValue()
  {
    return $this->lowValue;
  }
  /** @param string */
  public function setRateInMicros($rateInMicros)
  {
    $this->rateInMicros = $rateInMicros;
  }
  /** @return string */
  public function getRateInMicros()
  {
    return $this->rateInMicros;
  }
}

class BillingRatesListResponse extends \Google\Collection
{
  /** @var BillingRate[] */
  public $billingRates;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'billingRates';
  protected $billingRatesType = BillingRate::class;
  protected $billingRatesDataType = 'array';
  /** @param BillingRate[] */
  public function setBillingRates($billingRates)
  {
    $this->billingRates = $billingRates;
  }
  /** @return BillingRate[] */
  public function getBillingRates()
  {
    return $this->billingRates;
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

class Browser extends \Google\Model
{
  /** @var string */
  public $browserVersionId;
  /** @var string */
  public $dartId;
  /** @var string */
  public $kind;
  /** @var string */
  public $majorVersion;
  /** @var string */
  public $minorVersion;
  /** @var string */
  public $name;

  /** @param string */
  public function setBrowserVersionId($browserVersionId)
  {
    $this->browserVersionId = $browserVersionId;
  }
  /** @return string */
  public function getBrowserVersionId()
  {
    return $this->browserVersionId;
  }
  /** @param string */
  public function setDartId($dartId)
  {
    $this->dartId = $dartId;
  }
  /** @return string */
  public function getDartId()
  {
    return $this->dartId;
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
  public function setMajorVersion($majorVersion)
  {
    $this->majorVersion = $majorVersion;
  }
  /** @return string */
  public function getMajorVersion()
  {
    return $this->majorVersion;
  }
  /** @param string */
  public function setMinorVersion($minorVersion)
  {
    $this->minorVersion = $minorVersion;
  }
  /** @return string */
  public function getMinorVersion()
  {
    return $this->minorVersion;
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

class BrowsersListResponse extends \Google\Collection
{
  /** @var Browser[] */
  public $browsers;
  /** @var string */
  public $kind;
  protected $collection_key = 'browsers';
  protected $browsersType = Browser::class;
  protected $browsersDataType = 'array';
  /** @param Browser[] */
  public function setBrowsers($browsers)
  {
    $this->browsers = $browsers;
  }
  /** @return Browser[] */
  public function getBrowsers()
  {
    return $this->browsers;
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

class Campaign extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var AdBlockingConfiguration */
  public $adBlockingConfiguration;
  /** @var CreativeOptimizationConfiguration[] */
  public $additionalCreativeOptimizationConfigurations;
  /** @var string */
  public $advertiserGroupId;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var bool */
  public $archived;
  /** @var AudienceSegmentGroup[] */
  public $audienceSegmentGroups;
  /** @var string */
  public $billingInvoiceCode;
  /** @var ClickThroughUrlSuffixProperties */
  public $clickThroughUrlSuffixProperties;
  /** @var string */
  public $comment;
  /** @var LastModifiedInfo */
  public $createInfo;
  /** @var string[] */
  public $creativeGroupIds;
  /** @var CreativeOptimizationConfiguration */
  public $creativeOptimizationConfiguration;
  /** @var DefaultClickThroughEventTagProperties */
  public $defaultClickThroughEventTagProperties;
  /** @var string */
  public $defaultLandingPageId;
  /** @var string */
  public $endDate;
  /** @var EventTagOverride[] */
  public $eventTagOverrides;
  /** @var string */
  public $externalId;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var string */
  public $kind;
  /** @var LastModifiedInfo */
  public $lastModifiedInfo;
  /** @var MeasurementPartnerCampaignLink */
  public $measurementPartnerLink;
  /** @var string */
  public $name;
  /** @var string */
  public $startDate;
  /** @var string */
  public $subaccountId;
  protected $collection_key = 'eventTagOverrides';
  protected $adBlockingConfigurationType = AdBlockingConfiguration::class;
  protected $adBlockingConfigurationDataType = '';
  protected $additionalCreativeOptimizationConfigurationsType = CreativeOptimizationConfiguration::class;
  protected $additionalCreativeOptimizationConfigurationsDataType = 'array';
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
  protected $audienceSegmentGroupsType = AudienceSegmentGroup::class;
  protected $audienceSegmentGroupsDataType = 'array';
  protected $clickThroughUrlSuffixPropertiesType = ClickThroughUrlSuffixProperties::class;
  protected $clickThroughUrlSuffixPropertiesDataType = '';
  protected $createInfoType = LastModifiedInfo::class;
  protected $createInfoDataType = '';
  protected $creativeOptimizationConfigurationType = CreativeOptimizationConfiguration::class;
  protected $creativeOptimizationConfigurationDataType = '';
  protected $defaultClickThroughEventTagPropertiesType = DefaultClickThroughEventTagProperties::class;
  protected $defaultClickThroughEventTagPropertiesDataType = '';
  protected $eventTagOverridesType = EventTagOverride::class;
  protected $eventTagOverridesDataType = 'array';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
  protected $measurementPartnerLinkType = MeasurementPartnerCampaignLink::class;
  protected $measurementPartnerLinkDataType = '';
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
  /** @param AdBlockingConfiguration */
  public function setAdBlockingConfiguration(AdBlockingConfiguration $adBlockingConfiguration)
  {
    $this->adBlockingConfiguration = $adBlockingConfiguration;
  }
  /** @return AdBlockingConfiguration */
  public function getAdBlockingConfiguration()
  {
    return $this->adBlockingConfiguration;
  }
  /** @param CreativeOptimizationConfiguration[] */
  public function setAdditionalCreativeOptimizationConfigurations($additionalCreativeOptimizationConfigurations)
  {
    $this->additionalCreativeOptimizationConfigurations = $additionalCreativeOptimizationConfigurations;
  }
  /** @return CreativeOptimizationConfiguration[] */
  public function getAdditionalCreativeOptimizationConfigurations()
  {
    return $this->additionalCreativeOptimizationConfigurations;
  }
  /** @param string */
  public function setAdvertiserGroupId($advertiserGroupId)
  {
    $this->advertiserGroupId = $advertiserGroupId;
  }
  /** @return string */
  public function getAdvertiserGroupId()
  {
    return $this->advertiserGroupId;
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
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  /** @param bool */
  public function setArchived($archived)
  {
    $this->archived = $archived;
  }
  /** @return bool */
  public function getArchived()
  {
    return $this->archived;
  }
  /** @param AudienceSegmentGroup[] */
  public function setAudienceSegmentGroups($audienceSegmentGroups)
  {
    $this->audienceSegmentGroups = $audienceSegmentGroups;
  }
  /** @return AudienceSegmentGroup[] */
  public function getAudienceSegmentGroups()
  {
    return $this->audienceSegmentGroups;
  }
  /** @param string */
  public function setBillingInvoiceCode($billingInvoiceCode)
  {
    $this->billingInvoiceCode = $billingInvoiceCode;
  }
  /** @return string */
  public function getBillingInvoiceCode()
  {
    return $this->billingInvoiceCode;
  }
  /** @param ClickThroughUrlSuffixProperties */
  public function setClickThroughUrlSuffixProperties(ClickThroughUrlSuffixProperties $clickThroughUrlSuffixProperties)
  {
    $this->clickThroughUrlSuffixProperties = $clickThroughUrlSuffixProperties;
  }
  /** @return ClickThroughUrlSuffixProperties */
  public function getClickThroughUrlSuffixProperties()
  {
    return $this->clickThroughUrlSuffixProperties;
  }
  /** @param string */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /** @return string */
  public function getComment()
  {
    return $this->comment;
  }
  /** @param LastModifiedInfo */
  public function setCreateInfo(LastModifiedInfo $createInfo)
  {
    $this->createInfo = $createInfo;
  }
  /** @return LastModifiedInfo */
  public function getCreateInfo()
  {
    return $this->createInfo;
  }
  /** @param string[] */
  public function setCreativeGroupIds($creativeGroupIds)
  {
    $this->creativeGroupIds = $creativeGroupIds;
  }
  /** @return string[] */
  public function getCreativeGroupIds()
  {
    return $this->creativeGroupIds;
  }
  /** @param CreativeOptimizationConfiguration */
  public function setCreativeOptimizationConfiguration(CreativeOptimizationConfiguration $creativeOptimizationConfiguration)
  {
    $this->creativeOptimizationConfiguration = $creativeOptimizationConfiguration;
  }
  /** @return CreativeOptimizationConfiguration */
  public function getCreativeOptimizationConfiguration()
  {
    return $this->creativeOptimizationConfiguration;
  }
  /** @param DefaultClickThroughEventTagProperties */
  public function setDefaultClickThroughEventTagProperties(DefaultClickThroughEventTagProperties $defaultClickThroughEventTagProperties)
  {
    $this->defaultClickThroughEventTagProperties = $defaultClickThroughEventTagProperties;
  }
  /** @return DefaultClickThroughEventTagProperties */
  public function getDefaultClickThroughEventTagProperties()
  {
    return $this->defaultClickThroughEventTagProperties;
  }
  /** @param string */
  public function setDefaultLandingPageId($defaultLandingPageId)
  {
    $this->defaultLandingPageId = $defaultLandingPageId;
  }
  /** @return string */
  public function getDefaultLandingPageId()
  {
    return $this->defaultLandingPageId;
  }
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
  /** @param EventTagOverride[] */
  public function setEventTagOverrides($eventTagOverrides)
  {
    $this->eventTagOverrides = $eventTagOverrides;
  }
  /** @return EventTagOverride[] */
  public function getEventTagOverrides()
  {
    return $this->eventTagOverrides;
  }
  /** @param string */
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  /** @return string */
  public function getExternalId()
  {
    return $this->externalId;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
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
  /** @param LastModifiedInfo */
  public function setLastModifiedInfo(LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  /** @return LastModifiedInfo */
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
  }
  /** @param MeasurementPartnerCampaignLink */
  public function setMeasurementPartnerLink(MeasurementPartnerCampaignLink $measurementPartnerLink)
  {
    $this->measurementPartnerLink = $measurementPartnerLink;
  }
  /** @return MeasurementPartnerCampaignLink */
  public function getMeasurementPartnerLink()
  {
    return $this->measurementPartnerLink;
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
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return string */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
}

class CampaignCreativeAssociation extends \Google\Model
{
  /** @var string */
  public $creativeId;
  /** @var string */
  public $kind;

  /** @param string */
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  /** @return string */
  public function getCreativeId()
  {
    return $this->creativeId;
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

class CampaignCreativeAssociationsListResponse extends \Google\Collection
{
  /** @var CampaignCreativeAssociation[] */
  public $campaignCreativeAssociations;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'campaignCreativeAssociations';
  protected $campaignCreativeAssociationsType = CampaignCreativeAssociation::class;
  protected $campaignCreativeAssociationsDataType = 'array';
  /** @param CampaignCreativeAssociation[] */
  public function setCampaignCreativeAssociations($campaignCreativeAssociations)
  {
    $this->campaignCreativeAssociations = $campaignCreativeAssociations;
  }
  /** @return CampaignCreativeAssociation[] */
  public function getCampaignCreativeAssociations()
  {
    return $this->campaignCreativeAssociations;
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

class CampaignSummary extends \Google\Model
{
  /** @var string */
  public $billingInvoiceCode;
  /** @var string */
  public $campaignId;
  /** @var string */
  public $preTaxAmountMicros;
  /** @var string */
  public $taxAmountMicros;
  /** @var string */
  public $totalAmountMicros;

  /** @param string */
  public function setBillingInvoiceCode($billingInvoiceCode)
  {
    $this->billingInvoiceCode = $billingInvoiceCode;
  }
  /** @return string */
  public function getBillingInvoiceCode()
  {
    return $this->billingInvoiceCode;
  }
  /** @param string */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /** @return string */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /** @param string */
  public function setPreTaxAmountMicros($preTaxAmountMicros)
  {
    $this->preTaxAmountMicros = $preTaxAmountMicros;
  }
  /** @return string */
  public function getPreTaxAmountMicros()
  {
    return $this->preTaxAmountMicros;
  }
  /** @param string */
  public function setTaxAmountMicros($taxAmountMicros)
  {
    $this->taxAmountMicros = $taxAmountMicros;
  }
  /** @return string */
  public function getTaxAmountMicros()
  {
    return $this->taxAmountMicros;
  }
  /** @param string */
  public function setTotalAmountMicros($totalAmountMicros)
  {
    $this->totalAmountMicros = $totalAmountMicros;
  }
  /** @return string */
  public function getTotalAmountMicros()
  {
    return $this->totalAmountMicros;
  }
}

class CampaignsListResponse extends \Google\Collection
{
  /** @var Campaign[] */
  public $campaigns;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'campaigns';
  protected $campaignsType = Campaign::class;
  protected $campaignsDataType = 'array';
  /** @param Campaign[] */
  public function setCampaigns($campaigns)
  {
    $this->campaigns = $campaigns;
  }
  /** @return Campaign[] */
  public function getCampaigns()
  {
    return $this->campaigns;
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

class ChangeLog extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $action;
  /** @var string */
  public $changeTime;
  /** @var string */
  public $fieldName;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $newValue;
  /** @var string */
  public $objectId;
  /** @var string */
  public $objectType;
  /** @var string */
  public $oldValue;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $transactionId;
  /** @var string */
  public $userProfileId;
  /** @var string */
  public $userProfileName;

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
  public function setChangeTime($changeTime)
  {
    $this->changeTime = $changeTime;
  }
  /** @return string */
  public function getChangeTime()
  {
    return $this->changeTime;
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
  public function setNewValue($newValue)
  {
    $this->newValue = $newValue;
  }
  /** @return string */
  public function getNewValue()
  {
    return $this->newValue;
  }
  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }
  /** @return string */
  public function getObjectType()
  {
    return $this->objectType;
  }
  /** @param string */
  public function setOldValue($oldValue)
  {
    $this->oldValue = $oldValue;
  }
  /** @return string */
  public function getOldValue()
  {
    return $this->oldValue;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
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
  /** @param string */
  public function setUserProfileId($userProfileId)
  {
    $this->userProfileId = $userProfileId;
  }
  /** @return string */
  public function getUserProfileId()
  {
    return $this->userProfileId;
  }
  /** @param string */
  public function setUserProfileName($userProfileName)
  {
    $this->userProfileName = $userProfileName;
  }
  /** @return string */
  public function getUserProfileName()
  {
    return $this->userProfileName;
  }
}

class ChangeLogsListResponse extends \Google\Collection
{
  /** @var ChangeLog[] */
  public $changeLogs;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'changeLogs';
  protected $changeLogsType = ChangeLog::class;
  protected $changeLogsDataType = 'array';
  /** @param ChangeLog[] */
  public function setChangeLogs($changeLogs)
  {
    $this->changeLogs = $changeLogs;
  }
  /** @return ChangeLog[] */
  public function getChangeLogs()
  {
    return $this->changeLogs;
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

class ChannelGrouping extends \Google\Collection
{
  /** @var string */
  public $fallbackName;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var ChannelGroupingRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = ChannelGroupingRule::class;
  protected $rulesDataType = 'array';
  /** @param string */
  public function setFallbackName($fallbackName)
  {
    $this->fallbackName = $fallbackName;
  }
  /** @return string */
  public function getFallbackName()
  {
    return $this->fallbackName;
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
  /** @param ChannelGroupingRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return ChannelGroupingRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class ChannelGroupingRule extends \Google\Collection
{
  /** @var DisjunctiveMatchStatement[] */
  public $disjunctiveMatchStatements;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  protected $collection_key = 'disjunctiveMatchStatements';
  protected $disjunctiveMatchStatementsType = DisjunctiveMatchStatement::class;
  protected $disjunctiveMatchStatementsDataType = 'array';
  /** @param DisjunctiveMatchStatement[] */
  public function setDisjunctiveMatchStatements($disjunctiveMatchStatements)
  {
    $this->disjunctiveMatchStatements = $disjunctiveMatchStatements;
  }
  /** @return DisjunctiveMatchStatement[] */
  public function getDisjunctiveMatchStatements()
  {
    return $this->disjunctiveMatchStatements;
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
}

class CitiesListResponse extends \Google\Collection
{
  /** @var City[] */
  public $cities;
  /** @var string */
  public $kind;
  protected $collection_key = 'cities';
  protected $citiesType = City::class;
  protected $citiesDataType = 'array';
  /** @param City[] */
  public function setCities($cities)
  {
    $this->cities = $cities;
  }
  /** @return City[] */
  public function getCities()
  {
    return $this->cities;
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

class City extends \Google\Model
{
  /** @var string */
  public $countryCode;
  /** @var string */
  public $countryDartId;
  /** @var string */
  public $dartId;
  /** @var string */
  public $kind;
  /** @var string */
  public $metroCode;
  /** @var string */
  public $metroDmaId;
  /** @var string */
  public $name;
  /** @var string */
  public $regionCode;
  /** @var string */
  public $regionDartId;

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
  public function setCountryDartId($countryDartId)
  {
    $this->countryDartId = $countryDartId;
  }
  /** @return string */
  public function getCountryDartId()
  {
    return $this->countryDartId;
  }
  /** @param string */
  public function setDartId($dartId)
  {
    $this->dartId = $dartId;
  }
  /** @return string */
  public function getDartId()
  {
    return $this->dartId;
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
  public function setMetroCode($metroCode)
  {
    $this->metroCode = $metroCode;
  }
  /** @return string */
  public function getMetroCode()
  {
    return $this->metroCode;
  }
  /** @param string */
  public function setMetroDmaId($metroDmaId)
  {
    $this->metroDmaId = $metroDmaId;
  }
  /** @return string */
  public function getMetroDmaId()
  {
    return $this->metroDmaId;
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
  public function setRegionDartId($regionDartId)
  {
    $this->regionDartId = $regionDartId;
  }
  /** @return string */
  public function getRegionDartId()
  {
    return $this->regionDartId;
  }
}

class ClickTag extends \Google\Model
{
  /** @var CreativeClickThroughUrl */
  public $clickThroughUrl;
  /** @var string */
  public $eventName;
  /** @var string */
  public $name;
  protected $clickThroughUrlType = CreativeClickThroughUrl::class;
  protected $clickThroughUrlDataType = '';
  /** @param CreativeClickThroughUrl */
  public function setClickThroughUrl(CreativeClickThroughUrl $clickThroughUrl)
  {
    $this->clickThroughUrl = $clickThroughUrl;
  }
  /** @return CreativeClickThroughUrl */
  public function getClickThroughUrl()
  {
    return $this->clickThroughUrl;
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

class ClickThroughUrl extends \Google\Model
{
  /** @var string */
  public $computedClickThroughUrl;
  /** @var string */
  public $customClickThroughUrl;
  /** @var bool */
  public $defaultLandingPage;
  /** @var string */
  public $landingPageId;

  /** @param string */
  public function setComputedClickThroughUrl($computedClickThroughUrl)
  {
    $this->computedClickThroughUrl = $computedClickThroughUrl;
  }
  /** @return string */
  public function getComputedClickThroughUrl()
  {
    return $this->computedClickThroughUrl;
  }
  /** @param string */
  public function setCustomClickThroughUrl($customClickThroughUrl)
  {
    $this->customClickThroughUrl = $customClickThroughUrl;
  }
  /** @return string */
  public function getCustomClickThroughUrl()
  {
    return $this->customClickThroughUrl;
  }
  /** @param bool */
  public function setDefaultLandingPage($defaultLandingPage)
  {
    $this->defaultLandingPage = $defaultLandingPage;
  }
  /** @return bool */
  public function getDefaultLandingPage()
  {
    return $this->defaultLandingPage;
  }
  /** @param string */
  public function setLandingPageId($landingPageId)
  {
    $this->landingPageId = $landingPageId;
  }
  /** @return string */
  public function getLandingPageId()
  {
    return $this->landingPageId;
  }
}

class ClickThroughUrlSuffixProperties extends \Google\Model
{
  /** @var string */
  public $clickThroughUrlSuffix;
  /** @var bool */
  public $overrideInheritedSuffix;

  /** @param string */
  public function setClickThroughUrlSuffix($clickThroughUrlSuffix)
  {
    $this->clickThroughUrlSuffix = $clickThroughUrlSuffix;
  }
  /** @return string */
  public function getClickThroughUrlSuffix()
  {
    return $this->clickThroughUrlSuffix;
  }
  /** @param bool */
  public function setOverrideInheritedSuffix($overrideInheritedSuffix)
  {
    $this->overrideInheritedSuffix = $overrideInheritedSuffix;
  }
  /** @return bool */
  public function getOverrideInheritedSuffix()
  {
    return $this->overrideInheritedSuffix;
  }
}

class CompanionClickThroughOverride extends \Google\Model
{
  /** @var ClickThroughUrl */
  public $clickThroughUrl;
  /** @var string */
  public $creativeId;
  protected $clickThroughUrlType = ClickThroughUrl::class;
  protected $clickThroughUrlDataType = '';
  /** @param ClickThroughUrl */
  public function setClickThroughUrl(ClickThroughUrl $clickThroughUrl)
  {
    $this->clickThroughUrl = $clickThroughUrl;
  }
  /** @return ClickThroughUrl */
  public function getClickThroughUrl()
  {
    return $this->clickThroughUrl;
  }
  /** @param string */
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  /** @return string */
  public function getCreativeId()
  {
    return $this->creativeId;
  }
}

class CompanionSetting extends \Google\Collection
{
  /** @var bool */
  public $companionsDisabled;
  /** @var Size[] */
  public $enabledSizes;
  /** @var bool */
  public $imageOnly;
  /** @var string */
  public $kind;
  protected $collection_key = 'enabledSizes';
  protected $enabledSizesType = Size::class;
  protected $enabledSizesDataType = 'array';
  /** @param bool */
  public function setCompanionsDisabled($companionsDisabled)
  {
    $this->companionsDisabled = $companionsDisabled;
  }
  /** @return bool */
  public function getCompanionsDisabled()
  {
    return $this->companionsDisabled;
  }
  /** @param Size[] */
  public function setEnabledSizes($enabledSizes)
  {
    $this->enabledSizes = $enabledSizes;
  }
  /** @return Size[] */
  public function getEnabledSizes()
  {
    return $this->enabledSizes;
  }
  /** @param bool */
  public function setImageOnly($imageOnly)
  {
    $this->imageOnly = $imageOnly;
  }
  /** @return bool */
  public function getImageOnly()
  {
    return $this->imageOnly;
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

class CompatibleFields extends \Google\Model
{
  /** @var CrossDimensionReachReportCompatibleFields */
  public $crossDimensionReachReportCompatibleFields;
  /** @var FloodlightReportCompatibleFields */
  public $floodlightReportCompatibleFields;
  /** @var string */
  public $kind;
  /** @var PathReportCompatibleFields */
  public $pathAttributionReportCompatibleFields;
  /** @var PathReportCompatibleFields */
  public $pathReportCompatibleFields;
  /** @var PathToConversionReportCompatibleFields */
  public $pathToConversionReportCompatibleFields;
  /** @var ReachReportCompatibleFields */
  public $reachReportCompatibleFields;
  /** @var ReportCompatibleFields */
  public $reportCompatibleFields;
  protected $crossDimensionReachReportCompatibleFieldsType = CrossDimensionReachReportCompatibleFields::class;
  protected $crossDimensionReachReportCompatibleFieldsDataType = '';
  protected $floodlightReportCompatibleFieldsType = FloodlightReportCompatibleFields::class;
  protected $floodlightReportCompatibleFieldsDataType = '';
  protected $pathAttributionReportCompatibleFieldsType = PathReportCompatibleFields::class;
  protected $pathAttributionReportCompatibleFieldsDataType = '';
  protected $pathReportCompatibleFieldsType = PathReportCompatibleFields::class;
  protected $pathReportCompatibleFieldsDataType = '';
  protected $pathToConversionReportCompatibleFieldsType = PathToConversionReportCompatibleFields::class;
  protected $pathToConversionReportCompatibleFieldsDataType = '';
  protected $reachReportCompatibleFieldsType = ReachReportCompatibleFields::class;
  protected $reachReportCompatibleFieldsDataType = '';
  protected $reportCompatibleFieldsType = ReportCompatibleFields::class;
  protected $reportCompatibleFieldsDataType = '';
  /** @param CrossDimensionReachReportCompatibleFields */
  public function setCrossDimensionReachReportCompatibleFields(CrossDimensionReachReportCompatibleFields $crossDimensionReachReportCompatibleFields)
  {
    $this->crossDimensionReachReportCompatibleFields = $crossDimensionReachReportCompatibleFields;
  }
  /** @return CrossDimensionReachReportCompatibleFields */
  public function getCrossDimensionReachReportCompatibleFields()
  {
    return $this->crossDimensionReachReportCompatibleFields;
  }
  /** @param FloodlightReportCompatibleFields */
  public function setFloodlightReportCompatibleFields(FloodlightReportCompatibleFields $floodlightReportCompatibleFields)
  {
    $this->floodlightReportCompatibleFields = $floodlightReportCompatibleFields;
  }
  /** @return FloodlightReportCompatibleFields */
  public function getFloodlightReportCompatibleFields()
  {
    return $this->floodlightReportCompatibleFields;
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
  /** @param PathReportCompatibleFields */
  public function setPathAttributionReportCompatibleFields(PathReportCompatibleFields $pathAttributionReportCompatibleFields)
  {
    $this->pathAttributionReportCompatibleFields = $pathAttributionReportCompatibleFields;
  }
  /** @return PathReportCompatibleFields */
  public function getPathAttributionReportCompatibleFields()
  {
    return $this->pathAttributionReportCompatibleFields;
  }
  /** @param PathReportCompatibleFields */
  public function setPathReportCompatibleFields(PathReportCompatibleFields $pathReportCompatibleFields)
  {
    $this->pathReportCompatibleFields = $pathReportCompatibleFields;
  }
  /** @return PathReportCompatibleFields */
  public function getPathReportCompatibleFields()
  {
    return $this->pathReportCompatibleFields;
  }
  /** @param PathToConversionReportCompatibleFields */
  public function setPathToConversionReportCompatibleFields(PathToConversionReportCompatibleFields $pathToConversionReportCompatibleFields)
  {
    $this->pathToConversionReportCompatibleFields = $pathToConversionReportCompatibleFields;
  }
  /** @return PathToConversionReportCompatibleFields */
  public function getPathToConversionReportCompatibleFields()
  {
    return $this->pathToConversionReportCompatibleFields;
  }
  /** @param ReachReportCompatibleFields */
  public function setReachReportCompatibleFields(ReachReportCompatibleFields $reachReportCompatibleFields)
  {
    $this->reachReportCompatibleFields = $reachReportCompatibleFields;
  }
  /** @return ReachReportCompatibleFields */
  public function getReachReportCompatibleFields()
  {
    return $this->reachReportCompatibleFields;
  }
  /** @param ReportCompatibleFields */
  public function setReportCompatibleFields(ReportCompatibleFields $reportCompatibleFields)
  {
    $this->reportCompatibleFields = $reportCompatibleFields;
  }
  /** @return ReportCompatibleFields */
  public function getReportCompatibleFields()
  {
    return $this->reportCompatibleFields;
  }
}

class ConnectionType extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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
}

class ConnectionTypesListResponse extends \Google\Collection
{
  /** @var ConnectionType[] */
  public $connectionTypes;
  /** @var string */
  public $kind;
  protected $collection_key = 'connectionTypes';
  protected $connectionTypesType = ConnectionType::class;
  protected $connectionTypesDataType = 'array';
  /** @param ConnectionType[] */
  public function setConnectionTypes($connectionTypes)
  {
    $this->connectionTypes = $connectionTypes;
  }
  /** @return ConnectionType[] */
  public function getConnectionTypes()
  {
    return $this->connectionTypes;
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

class ContentCategoriesListResponse extends \Google\Collection
{
  /** @var ContentCategory[] */
  public $contentCategories;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'contentCategories';
  protected $contentCategoriesType = ContentCategory::class;
  protected $contentCategoriesDataType = 'array';
  /** @param ContentCategory[] */
  public function setContentCategories($contentCategories)
  {
    $this->contentCategories = $contentCategories;
  }
  /** @return ContentCategory[] */
  public function getContentCategories()
  {
    return $this->contentCategories;
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

class ContentCategory extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
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
}

class Conversion extends \Google\Collection
{
  /** @var bool */
  public $childDirectedTreatment;
  /** @var CustomFloodlightVariable[] */
  public $customVariables;
  /** @var string */
  public $dclid;
  /** @var string */
  public $encryptedUserId;
  /** @var string[] */
  public $encryptedUserIdCandidates;
  /** @var string */
  public $floodlightActivityId;
  /** @var string */
  public $floodlightConfigurationId;
  /** @var string */
  public $gclid;
  /** @var string */
  public $impressionId;
  /** @var string */
  public $kind;
  /** @var bool */
  public $limitAdTracking;
  /** @var string */
  public $matchId;
  /** @var string */
  public $mobileDeviceId;
  /** @var bool */
  public $nonPersonalizedAd;
  /** @var string */
  public $ordinal;
  /** @var string */
  public $quantity;
  /** @var string */
  public $timestampMicros;
  /** @var bool */
  public $treatmentForUnderage;
  public $value;
  protected $collection_key = 'encryptedUserIdCandidates';
  protected $customVariablesType = CustomFloodlightVariable::class;
  protected $customVariablesDataType = 'array';
  /** @param bool */
  public function setChildDirectedTreatment($childDirectedTreatment)
  {
    $this->childDirectedTreatment = $childDirectedTreatment;
  }
  /** @return bool */
  public function getChildDirectedTreatment()
  {
    return $this->childDirectedTreatment;
  }
  /** @param CustomFloodlightVariable[] */
  public function setCustomVariables($customVariables)
  {
    $this->customVariables = $customVariables;
  }
  /** @return CustomFloodlightVariable[] */
  public function getCustomVariables()
  {
    return $this->customVariables;
  }
  /** @param string */
  public function setDclid($dclid)
  {
    $this->dclid = $dclid;
  }
  /** @return string */
  public function getDclid()
  {
    return $this->dclid;
  }
  /** @param string */
  public function setEncryptedUserId($encryptedUserId)
  {
    $this->encryptedUserId = $encryptedUserId;
  }
  /** @return string */
  public function getEncryptedUserId()
  {
    return $this->encryptedUserId;
  }
  /** @param string[] */
  public function setEncryptedUserIdCandidates($encryptedUserIdCandidates)
  {
    $this->encryptedUserIdCandidates = $encryptedUserIdCandidates;
  }
  /** @return string[] */
  public function getEncryptedUserIdCandidates()
  {
    return $this->encryptedUserIdCandidates;
  }
  /** @param string */
  public function setFloodlightActivityId($floodlightActivityId)
  {
    $this->floodlightActivityId = $floodlightActivityId;
  }
  /** @return string */
  public function getFloodlightActivityId()
  {
    return $this->floodlightActivityId;
  }
  /** @param string */
  public function setFloodlightConfigurationId($floodlightConfigurationId)
  {
    $this->floodlightConfigurationId = $floodlightConfigurationId;
  }
  /** @return string */
  public function getFloodlightConfigurationId()
  {
    return $this->floodlightConfigurationId;
  }
  /** @param string */
  public function setGclid($gclid)
  {
    $this->gclid = $gclid;
  }
  /** @return string */
  public function getGclid()
  {
    return $this->gclid;
  }
  /** @param string */
  public function setImpressionId($impressionId)
  {
    $this->impressionId = $impressionId;
  }
  /** @return string */
  public function getImpressionId()
  {
    return $this->impressionId;
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
  /** @param bool */
  public function setLimitAdTracking($limitAdTracking)
  {
    $this->limitAdTracking = $limitAdTracking;
  }
  /** @return bool */
  public function getLimitAdTracking()
  {
    return $this->limitAdTracking;
  }
  /** @param string */
  public function setMatchId($matchId)
  {
    $this->matchId = $matchId;
  }
  /** @return string */
  public function getMatchId()
  {
    return $this->matchId;
  }
  /** @param string */
  public function setMobileDeviceId($mobileDeviceId)
  {
    $this->mobileDeviceId = $mobileDeviceId;
  }
  /** @return string */
  public function getMobileDeviceId()
  {
    return $this->mobileDeviceId;
  }
  /** @param bool */
  public function setNonPersonalizedAd($nonPersonalizedAd)
  {
    $this->nonPersonalizedAd = $nonPersonalizedAd;
  }
  /** @return bool */
  public function getNonPersonalizedAd()
  {
    return $this->nonPersonalizedAd;
  }
  /** @param string */
  public function setOrdinal($ordinal)
  {
    $this->ordinal = $ordinal;
  }
  /** @return string */
  public function getOrdinal()
  {
    return $this->ordinal;
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
  public function setTimestampMicros($timestampMicros)
  {
    $this->timestampMicros = $timestampMicros;
  }
  /** @return string */
  public function getTimestampMicros()
  {
    return $this->timestampMicros;
  }
  /** @param bool */
  public function setTreatmentForUnderage($treatmentForUnderage)
  {
    $this->treatmentForUnderage = $treatmentForUnderage;
  }
  /** @return bool */
  public function getTreatmentForUnderage()
  {
    return $this->treatmentForUnderage;
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

class ConversionError extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $kind;
  /** @var string */
  public $message;

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

class ConversionStatus extends \Google\Collection
{
  /** @var Conversion */
  public $conversion;
  /** @var ConversionError[] */
  public $errors;
  /** @var string */
  public $kind;
  protected $collection_key = 'errors';
  protected $conversionType = Conversion::class;
  protected $conversionDataType = '';
  protected $errorsType = ConversionError::class;
  protected $errorsDataType = 'array';
  /** @param Conversion */
  public function setConversion(Conversion $conversion)
  {
    $this->conversion = $conversion;
  }
  /** @return Conversion */
  public function getConversion()
  {
    return $this->conversion;
  }
  /** @param ConversionError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ConversionError[] */
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

class ConversionsBatchInsertRequest extends \Google\Collection
{
  /** @var Conversion[] */
  public $conversions;
  /** @var EncryptionInfo */
  public $encryptionInfo;
  /** @var string */
  public $kind;
  protected $collection_key = 'conversions';
  protected $conversionsType = Conversion::class;
  protected $conversionsDataType = 'array';
  protected $encryptionInfoType = EncryptionInfo::class;
  protected $encryptionInfoDataType = '';
  /** @param Conversion[] */
  public function setConversions($conversions)
  {
    $this->conversions = $conversions;
  }
  /** @return Conversion[] */
  public function getConversions()
  {
    return $this->conversions;
  }
  /** @param EncryptionInfo */
  public function setEncryptionInfo(EncryptionInfo $encryptionInfo)
  {
    $this->encryptionInfo = $encryptionInfo;
  }
  /** @return EncryptionInfo */
  public function getEncryptionInfo()
  {
    return $this->encryptionInfo;
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

class ConversionsBatchInsertResponse extends \Google\Collection
{
  /** @var bool */
  public $hasFailures;
  /** @var string */
  public $kind;
  /** @var ConversionStatus[] */
  public $status;
  protected $collection_key = 'status';
  protected $statusType = ConversionStatus::class;
  protected $statusDataType = 'array';
  /** @param bool */
  public function setHasFailures($hasFailures)
  {
    $this->hasFailures = $hasFailures;
  }
  /** @return bool */
  public function getHasFailures()
  {
    return $this->hasFailures;
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
  /** @param ConversionStatus[] */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return ConversionStatus[] */
  public function getStatus()
  {
    return $this->status;
  }
}

class ConversionsBatchUpdateRequest extends \Google\Collection
{
  /** @var Conversion[] */
  public $conversions;
  /** @var EncryptionInfo */
  public $encryptionInfo;
  /** @var string */
  public $kind;
  protected $collection_key = 'conversions';
  protected $conversionsType = Conversion::class;
  protected $conversionsDataType = 'array';
  protected $encryptionInfoType = EncryptionInfo::class;
  protected $encryptionInfoDataType = '';
  /** @param Conversion[] */
  public function setConversions($conversions)
  {
    $this->conversions = $conversions;
  }
  /** @return Conversion[] */
  public function getConversions()
  {
    return $this->conversions;
  }
  /** @param EncryptionInfo */
  public function setEncryptionInfo(EncryptionInfo $encryptionInfo)
  {
    $this->encryptionInfo = $encryptionInfo;
  }
  /** @return EncryptionInfo */
  public function getEncryptionInfo()
  {
    return $this->encryptionInfo;
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

class ConversionsBatchUpdateResponse extends \Google\Collection
{
  /** @var bool */
  public $hasFailures;
  /** @var string */
  public $kind;
  /** @var ConversionStatus[] */
  public $status;
  protected $collection_key = 'status';
  protected $statusType = ConversionStatus::class;
  protected $statusDataType = 'array';
  /** @param bool */
  public function setHasFailures($hasFailures)
  {
    $this->hasFailures = $hasFailures;
  }
  /** @return bool */
  public function getHasFailures()
  {
    return $this->hasFailures;
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
  /** @param ConversionStatus[] */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return ConversionStatus[] */
  public function getStatus()
  {
    return $this->status;
  }
}

class CountriesListResponse extends \Google\Collection
{
  /** @var Country[] */
  public $countries;
  /** @var string */
  public $kind;
  protected $collection_key = 'countries';
  protected $countriesType = Country::class;
  protected $countriesDataType = 'array';
  /** @param Country[] */
  public function setCountries($countries)
  {
    $this->countries = $countries;
  }
  /** @return Country[] */
  public function getCountries()
  {
    return $this->countries;
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

class Country extends \Google\Model
{
  /** @var string */
  public $countryCode;
  /** @var string */
  public $dartId;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var bool */
  public $sslEnabled;

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
  public function setDartId($dartId)
  {
    $this->dartId = $dartId;
  }
  /** @return string */
  public function getDartId()
  {
    return $this->dartId;
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
  /** @param bool */
  public function setSslEnabled($sslEnabled)
  {
    $this->sslEnabled = $sslEnabled;
  }
  /** @return bool */
  public function getSslEnabled()
  {
    return $this->sslEnabled;
  }
}

class Creative extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $active;
  /** @var string */
  public $adParameters;
  /** @var string[] */
  public $adTagKeys;
  /** @var Size[] */
  public $additionalSizes;
  /** @var string */
  public $advertiserId;
  /** @var bool */
  public $allowScriptAccess;
  /** @var bool */
  public $archived;
  /** @var string */
  public $artworkType;
  /** @var string */
  public $authoringSource;
  /** @var string */
  public $authoringTool;
  /** @var bool */
  public $autoAdvanceImages;
  /** @var string */
  public $backgroundColor;
  /** @var CreativeClickThroughUrl */
  public $backupImageClickThroughUrl;
  /** @var string[] */
  public $backupImageFeatures;
  /** @var string */
  public $backupImageReportingLabel;
  /** @var TargetWindow */
  public $backupImageTargetWindow;
  /** @var ClickTag[] */
  public $clickTags;
  /** @var string */
  public $commercialId;
  /** @var string[] */
  public $companionCreatives;
  /** @var string[] */
  public $compatibility;
  /** @var bool */
  public $convertFlashToHtml5;
  /** @var CreativeCustomEvent[] */
  public $counterCustomEvents;
  /** @var CreativeAssetSelection */
  public $creativeAssetSelection;
  /** @var CreativeAsset[] */
  public $creativeAssets;
  /** @var CreativeFieldAssignment[] */
  public $creativeFieldAssignments;
  /** @var string[] */
  public $customKeyValues;
  /** @var bool */
  public $dynamicAssetSelection;
  /** @var CreativeCustomEvent[] */
  public $exitCustomEvents;
  /** @var FsCommand */
  public $fsCommand;
  /** @var string */
  public $htmlCode;
  /** @var bool */
  public $htmlCodeLocked;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var string */
  public $kind;
  /** @var LastModifiedInfo */
  public $lastModifiedInfo;
  /** @var string */
  public $latestTraffickedCreativeId;
  /** @var string */
  public $mediaDescription;
  /** @var float */
  public $mediaDuration;
  /** @var string */
  public $name;
  /** @var ObaIcon */
  public $obaIcon;
  /** @var string */
  public $overrideCss;
  /** @var VideoOffset */
  public $progressOffset;
  /** @var string */
  public $redirectUrl;
  /** @var string */
  public $renderingId;
  /** @var DimensionValue */
  public $renderingIdDimensionValue;
  /** @var string */
  public $requiredFlashPluginVersion;
  /** @var int */
  public $requiredFlashVersion;
  /** @var Size */
  public $size;
  /** @var VideoOffset */
  public $skipOffset;
  /** @var bool */
  public $skippable;
  /** @var bool */
  public $sslCompliant;
  /** @var bool */
  public $sslOverride;
  /** @var string */
  public $studioAdvertiserId;
  /** @var string */
  public $studioCreativeId;
  /** @var string */
  public $studioTraffickedCreativeId;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $thirdPartyBackupImageImpressionsUrl;
  /** @var string */
  public $thirdPartyRichMediaImpressionsUrl;
  /** @var ThirdPartyTrackingUrl[] */
  public $thirdPartyUrls;
  /** @var CreativeCustomEvent[] */
  public $timerCustomEvents;
  /** @var string */
  public $totalFileSize;
  /** @var string */
  public $type;
  /** @var UniversalAdId */
  public $universalAdId;
  /** @var int */
  public $version;
  protected $collection_key = 'timerCustomEvents';
  protected $additionalSizesType = Size::class;
  protected $additionalSizesDataType = 'array';
  protected $backupImageClickThroughUrlType = CreativeClickThroughUrl::class;
  protected $backupImageClickThroughUrlDataType = '';
  protected $backupImageTargetWindowType = TargetWindow::class;
  protected $backupImageTargetWindowDataType = '';
  protected $clickTagsType = ClickTag::class;
  protected $clickTagsDataType = 'array';
  protected $counterCustomEventsType = CreativeCustomEvent::class;
  protected $counterCustomEventsDataType = 'array';
  protected $creativeAssetSelectionType = CreativeAssetSelection::class;
  protected $creativeAssetSelectionDataType = '';
  protected $creativeAssetsType = CreativeAsset::class;
  protected $creativeAssetsDataType = 'array';
  protected $creativeFieldAssignmentsType = CreativeFieldAssignment::class;
  protected $creativeFieldAssignmentsDataType = 'array';
  protected $exitCustomEventsType = CreativeCustomEvent::class;
  protected $exitCustomEventsDataType = 'array';
  protected $fsCommandType = FsCommand::class;
  protected $fsCommandDataType = '';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
  protected $obaIconType = ObaIcon::class;
  protected $obaIconDataType = '';
  protected $progressOffsetType = VideoOffset::class;
  protected $progressOffsetDataType = '';
  protected $renderingIdDimensionValueType = DimensionValue::class;
  protected $renderingIdDimensionValueDataType = '';
  protected $sizeType = Size::class;
  protected $sizeDataType = '';
  protected $skipOffsetType = VideoOffset::class;
  protected $skipOffsetDataType = '';
  protected $thirdPartyUrlsType = ThirdPartyTrackingUrl::class;
  protected $thirdPartyUrlsDataType = 'array';
  protected $timerCustomEventsType = CreativeCustomEvent::class;
  protected $timerCustomEventsDataType = 'array';
  protected $universalAdIdType = UniversalAdId::class;
  protected $universalAdIdDataType = '';
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
  public function setAdParameters($adParameters)
  {
    $this->adParameters = $adParameters;
  }
  /** @return string */
  public function getAdParameters()
  {
    return $this->adParameters;
  }
  /** @param string[] */
  public function setAdTagKeys($adTagKeys)
  {
    $this->adTagKeys = $adTagKeys;
  }
  /** @return string[] */
  public function getAdTagKeys()
  {
    return $this->adTagKeys;
  }
  /** @param Size[] */
  public function setAdditionalSizes($additionalSizes)
  {
    $this->additionalSizes = $additionalSizes;
  }
  /** @return Size[] */
  public function getAdditionalSizes()
  {
    return $this->additionalSizes;
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
  public function setAllowScriptAccess($allowScriptAccess)
  {
    $this->allowScriptAccess = $allowScriptAccess;
  }
  /** @return bool */
  public function getAllowScriptAccess()
  {
    return $this->allowScriptAccess;
  }
  /** @param bool */
  public function setArchived($archived)
  {
    $this->archived = $archived;
  }
  /** @return bool */
  public function getArchived()
  {
    return $this->archived;
  }
  /** @param string */
  public function setArtworkType($artworkType)
  {
    $this->artworkType = $artworkType;
  }
  /** @return string */
  public function getArtworkType()
  {
    return $this->artworkType;
  }
  /** @param string */
  public function setAuthoringSource($authoringSource)
  {
    $this->authoringSource = $authoringSource;
  }
  /** @return string */
  public function getAuthoringSource()
  {
    return $this->authoringSource;
  }
  /** @param string */
  public function setAuthoringTool($authoringTool)
  {
    $this->authoringTool = $authoringTool;
  }
  /** @return string */
  public function getAuthoringTool()
  {
    return $this->authoringTool;
  }
  /** @param bool */
  public function setAutoAdvanceImages($autoAdvanceImages)
  {
    $this->autoAdvanceImages = $autoAdvanceImages;
  }
  /** @return bool */
  public function getAutoAdvanceImages()
  {
    return $this->autoAdvanceImages;
  }
  /** @param string */
  public function setBackgroundColor($backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return string */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param CreativeClickThroughUrl */
  public function setBackupImageClickThroughUrl(CreativeClickThroughUrl $backupImageClickThroughUrl)
  {
    $this->backupImageClickThroughUrl = $backupImageClickThroughUrl;
  }
  /** @return CreativeClickThroughUrl */
  public function getBackupImageClickThroughUrl()
  {
    return $this->backupImageClickThroughUrl;
  }
  /** @param string[] */
  public function setBackupImageFeatures($backupImageFeatures)
  {
    $this->backupImageFeatures = $backupImageFeatures;
  }
  /** @return string[] */
  public function getBackupImageFeatures()
  {
    return $this->backupImageFeatures;
  }
  /** @param string */
  public function setBackupImageReportingLabel($backupImageReportingLabel)
  {
    $this->backupImageReportingLabel = $backupImageReportingLabel;
  }
  /** @return string */
  public function getBackupImageReportingLabel()
  {
    return $this->backupImageReportingLabel;
  }
  /** @param TargetWindow */
  public function setBackupImageTargetWindow(TargetWindow $backupImageTargetWindow)
  {
    $this->backupImageTargetWindow = $backupImageTargetWindow;
  }
  /** @return TargetWindow */
  public function getBackupImageTargetWindow()
  {
    return $this->backupImageTargetWindow;
  }
  /** @param ClickTag[] */
  public function setClickTags($clickTags)
  {
    $this->clickTags = $clickTags;
  }
  /** @return ClickTag[] */
  public function getClickTags()
  {
    return $this->clickTags;
  }
  /** @param string */
  public function setCommercialId($commercialId)
  {
    $this->commercialId = $commercialId;
  }
  /** @return string */
  public function getCommercialId()
  {
    return $this->commercialId;
  }
  /** @param string[] */
  public function setCompanionCreatives($companionCreatives)
  {
    $this->companionCreatives = $companionCreatives;
  }
  /** @return string[] */
  public function getCompanionCreatives()
  {
    return $this->companionCreatives;
  }
  /** @param string[] */
  public function setCompatibility($compatibility)
  {
    $this->compatibility = $compatibility;
  }
  /** @return string[] */
  public function getCompatibility()
  {
    return $this->compatibility;
  }
  /** @param bool */
  public function setConvertFlashToHtml5($convertFlashToHtml5)
  {
    $this->convertFlashToHtml5 = $convertFlashToHtml5;
  }
  /** @return bool */
  public function getConvertFlashToHtml5()
  {
    return $this->convertFlashToHtml5;
  }
  /** @param CreativeCustomEvent[] */
  public function setCounterCustomEvents($counterCustomEvents)
  {
    $this->counterCustomEvents = $counterCustomEvents;
  }
  /** @return CreativeCustomEvent[] */
  public function getCounterCustomEvents()
  {
    return $this->counterCustomEvents;
  }
  /** @param CreativeAssetSelection */
  public function setCreativeAssetSelection(CreativeAssetSelection $creativeAssetSelection)
  {
    $this->creativeAssetSelection = $creativeAssetSelection;
  }
  /** @return CreativeAssetSelection */
  public function getCreativeAssetSelection()
  {
    return $this->creativeAssetSelection;
  }
  /** @param CreativeAsset[] */
  public function setCreativeAssets($creativeAssets)
  {
    $this->creativeAssets = $creativeAssets;
  }
  /** @return CreativeAsset[] */
  public function getCreativeAssets()
  {
    return $this->creativeAssets;
  }
  /** @param CreativeFieldAssignment[] */
  public function setCreativeFieldAssignments($creativeFieldAssignments)
  {
    $this->creativeFieldAssignments = $creativeFieldAssignments;
  }
  /** @return CreativeFieldAssignment[] */
  public function getCreativeFieldAssignments()
  {
    return $this->creativeFieldAssignments;
  }
  /** @param string[] */
  public function setCustomKeyValues($customKeyValues)
  {
    $this->customKeyValues = $customKeyValues;
  }
  /** @return string[] */
  public function getCustomKeyValues()
  {
    return $this->customKeyValues;
  }
  /** @param bool */
  public function setDynamicAssetSelection($dynamicAssetSelection)
  {
    $this->dynamicAssetSelection = $dynamicAssetSelection;
  }
  /** @return bool */
  public function getDynamicAssetSelection()
  {
    return $this->dynamicAssetSelection;
  }
  /** @param CreativeCustomEvent[] */
  public function setExitCustomEvents($exitCustomEvents)
  {
    $this->exitCustomEvents = $exitCustomEvents;
  }
  /** @return CreativeCustomEvent[] */
  public function getExitCustomEvents()
  {
    return $this->exitCustomEvents;
  }
  /** @param FsCommand */
  public function setFsCommand(FsCommand $fsCommand)
  {
    $this->fsCommand = $fsCommand;
  }
  /** @return FsCommand */
  public function getFsCommand()
  {
    return $this->fsCommand;
  }
  /** @param string */
  public function setHtmlCode($htmlCode)
  {
    $this->htmlCode = $htmlCode;
  }
  /** @return string */
  public function getHtmlCode()
  {
    return $this->htmlCode;
  }
  /** @param bool */
  public function setHtmlCodeLocked($htmlCodeLocked)
  {
    $this->htmlCodeLocked = $htmlCodeLocked;
  }
  /** @return bool */
  public function getHtmlCodeLocked()
  {
    return $this->htmlCodeLocked;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
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
  /** @param LastModifiedInfo */
  public function setLastModifiedInfo(LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  /** @return LastModifiedInfo */
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
  }
  /** @param string */
  public function setLatestTraffickedCreativeId($latestTraffickedCreativeId)
  {
    $this->latestTraffickedCreativeId = $latestTraffickedCreativeId;
  }
  /** @return string */
  public function getLatestTraffickedCreativeId()
  {
    return $this->latestTraffickedCreativeId;
  }
  /** @param string */
  public function setMediaDescription($mediaDescription)
  {
    $this->mediaDescription = $mediaDescription;
  }
  /** @return string */
  public function getMediaDescription()
  {
    return $this->mediaDescription;
  }
  /** @param float */
  public function setMediaDuration($mediaDuration)
  {
    $this->mediaDuration = $mediaDuration;
  }
  /** @return float */
  public function getMediaDuration()
  {
    return $this->mediaDuration;
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
  /** @param ObaIcon */
  public function setObaIcon(ObaIcon $obaIcon)
  {
    $this->obaIcon = $obaIcon;
  }
  /** @return ObaIcon */
  public function getObaIcon()
  {
    return $this->obaIcon;
  }
  /** @param string */
  public function setOverrideCss($overrideCss)
  {
    $this->overrideCss = $overrideCss;
  }
  /** @return string */
  public function getOverrideCss()
  {
    return $this->overrideCss;
  }
  /** @param VideoOffset */
  public function setProgressOffset(VideoOffset $progressOffset)
  {
    $this->progressOffset = $progressOffset;
  }
  /** @return VideoOffset */
  public function getProgressOffset()
  {
    return $this->progressOffset;
  }
  /** @param string */
  public function setRedirectUrl($redirectUrl)
  {
    $this->redirectUrl = $redirectUrl;
  }
  /** @return string */
  public function getRedirectUrl()
  {
    return $this->redirectUrl;
  }
  /** @param string */
  public function setRenderingId($renderingId)
  {
    $this->renderingId = $renderingId;
  }
  /** @return string */
  public function getRenderingId()
  {
    return $this->renderingId;
  }
  /** @param DimensionValue */
  public function setRenderingIdDimensionValue(DimensionValue $renderingIdDimensionValue)
  {
    $this->renderingIdDimensionValue = $renderingIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getRenderingIdDimensionValue()
  {
    return $this->renderingIdDimensionValue;
  }
  /** @param string */
  public function setRequiredFlashPluginVersion($requiredFlashPluginVersion)
  {
    $this->requiredFlashPluginVersion = $requiredFlashPluginVersion;
  }
  /** @return string */
  public function getRequiredFlashPluginVersion()
  {
    return $this->requiredFlashPluginVersion;
  }
  /** @param int */
  public function setRequiredFlashVersion($requiredFlashVersion)
  {
    $this->requiredFlashVersion = $requiredFlashVersion;
  }
  /** @return int */
  public function getRequiredFlashVersion()
  {
    return $this->requiredFlashVersion;
  }
  /** @param Size */
  public function setSize(Size $size)
  {
    $this->size = $size;
  }
  /** @return Size */
  public function getSize()
  {
    return $this->size;
  }
  /** @param VideoOffset */
  public function setSkipOffset(VideoOffset $skipOffset)
  {
    $this->skipOffset = $skipOffset;
  }
  /** @return VideoOffset */
  public function getSkipOffset()
  {
    return $this->skipOffset;
  }
  /** @param bool */
  public function setSkippable($skippable)
  {
    $this->skippable = $skippable;
  }
  /** @return bool */
  public function getSkippable()
  {
    return $this->skippable;
  }
  /** @param bool */
  public function setSslCompliant($sslCompliant)
  {
    $this->sslCompliant = $sslCompliant;
  }
  /** @return bool */
  public function getSslCompliant()
  {
    return $this->sslCompliant;
  }
  /** @param bool */
  public function setSslOverride($sslOverride)
  {
    $this->sslOverride = $sslOverride;
  }
  /** @return bool */
  public function getSslOverride()
  {
    return $this->sslOverride;
  }
  /** @param string */
  public function setStudioAdvertiserId($studioAdvertiserId)
  {
    $this->studioAdvertiserId = $studioAdvertiserId;
  }
  /** @return string */
  public function getStudioAdvertiserId()
  {
    return $this->studioAdvertiserId;
  }
  /** @param string */
  public function setStudioCreativeId($studioCreativeId)
  {
    $this->studioCreativeId = $studioCreativeId;
  }
  /** @return string */
  public function getStudioCreativeId()
  {
    return $this->studioCreativeId;
  }
  /** @param string */
  public function setStudioTraffickedCreativeId($studioTraffickedCreativeId)
  {
    $this->studioTraffickedCreativeId = $studioTraffickedCreativeId;
  }
  /** @return string */
  public function getStudioTraffickedCreativeId()
  {
    return $this->studioTraffickedCreativeId;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  /** @param string */
  public function setThirdPartyBackupImageImpressionsUrl($thirdPartyBackupImageImpressionsUrl)
  {
    $this->thirdPartyBackupImageImpressionsUrl = $thirdPartyBackupImageImpressionsUrl;
  }
  /** @return string */
  public function getThirdPartyBackupImageImpressionsUrl()
  {
    return $this->thirdPartyBackupImageImpressionsUrl;
  }
  /** @param string */
  public function setThirdPartyRichMediaImpressionsUrl($thirdPartyRichMediaImpressionsUrl)
  {
    $this->thirdPartyRichMediaImpressionsUrl = $thirdPartyRichMediaImpressionsUrl;
  }
  /** @return string */
  public function getThirdPartyRichMediaImpressionsUrl()
  {
    return $this->thirdPartyRichMediaImpressionsUrl;
  }
  /** @param ThirdPartyTrackingUrl[] */
  public function setThirdPartyUrls($thirdPartyUrls)
  {
    $this->thirdPartyUrls = $thirdPartyUrls;
  }
  /** @return ThirdPartyTrackingUrl[] */
  public function getThirdPartyUrls()
  {
    return $this->thirdPartyUrls;
  }
  /** @param CreativeCustomEvent[] */
  public function setTimerCustomEvents($timerCustomEvents)
  {
    $this->timerCustomEvents = $timerCustomEvents;
  }
  /** @return CreativeCustomEvent[] */
  public function getTimerCustomEvents()
  {
    return $this->timerCustomEvents;
  }
  /** @param string */
  public function setTotalFileSize($totalFileSize)
  {
    $this->totalFileSize = $totalFileSize;
  }
  /** @return string */
  public function getTotalFileSize()
  {
    return $this->totalFileSize;
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
  /** @param UniversalAdId */
  public function setUniversalAdId(UniversalAdId $universalAdId)
  {
    $this->universalAdId = $universalAdId;
  }
  /** @return UniversalAdId */
  public function getUniversalAdId()
  {
    return $this->universalAdId;
  }
  /** @param int */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return int */
  public function getVersion()
  {
    return $this->version;
  }
}

class CreativeAsset extends \Google\Collection
{
  /** @var bool */
  public $actionScript3;
  /** @var bool */
  public $active;
  /** @var Size[] */
  public $additionalSizes;
  /** @var string */
  public $alignment;
  /** @var string */
  public $artworkType;
  /** @var CreativeAssetId */
  public $assetIdentifier;
  /** @var int */
  public $audioBitRate;
  /** @var int */
  public $audioSampleRate;
  /** @var CreativeCustomEvent */
  public $backupImageExit;
  /** @var int */
  public $bitRate;
  /** @var string */
  public $childAssetType;
  /** @var Size */
  public $collapsedSize;
  /** @var string[] */
  public $companionCreativeIds;
  /** @var int */
  public $customStartTimeValue;
  /** @var string[] */
  public $detectedFeatures;
  /** @var string */
  public $displayType;
  /** @var int */
  public $duration;
  /** @var string */
  public $durationType;
  /** @var Size */
  public $expandedDimension;
  /** @var string */
  public $fileSize;
  /** @var int */
  public $flashVersion;
  /** @var float */
  public $frameRate;
  /** @var bool */
  public $hideFlashObjects;
  /** @var bool */
  public $hideSelectionBoxes;
  /** @var bool */
  public $horizontallyLocked;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var float */
  public $mediaDuration;
  /** @var string */
  public $mimeType;
  /** @var OffsetPosition */
  public $offset;
  /** @var string */
  public $orientation;
  /** @var bool */
  public $originalBackup;
  /** @var bool */
  public $politeLoad;
  /** @var OffsetPosition */
  public $position;
  /** @var string */
  public $positionLeftUnit;
  /** @var string */
  public $positionTopUnit;
  /** @var string */
  public $progressiveServingUrl;
  /** @var bool */
  public $pushdown;
  /** @var float */
  public $pushdownDuration;
  /** @var string */
  public $role;
  /** @var Size */
  public $size;
  /** @var bool */
  public $sslCompliant;
  /** @var string */
  public $startTimeType;
  /** @var string */
  public $streamingServingUrl;
  /** @var bool */
  public $transparency;
  /** @var bool */
  public $verticallyLocked;
  /** @var string */
  public $windowMode;
  /** @var int */
  public $zIndex;
  /** @var string */
  public $zipFilename;
  /** @var string */
  public $zipFilesize;
  protected $collection_key = 'detectedFeatures';
  protected $additionalSizesType = Size::class;
  protected $additionalSizesDataType = 'array';
  protected $assetIdentifierType = CreativeAssetId::class;
  protected $assetIdentifierDataType = '';
  protected $backupImageExitType = CreativeCustomEvent::class;
  protected $backupImageExitDataType = '';
  protected $collapsedSizeType = Size::class;
  protected $collapsedSizeDataType = '';
  protected $expandedDimensionType = Size::class;
  protected $expandedDimensionDataType = '';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $offsetType = OffsetPosition::class;
  protected $offsetDataType = '';
  protected $positionType = OffsetPosition::class;
  protected $positionDataType = '';
  protected $sizeType = Size::class;
  protected $sizeDataType = '';
  /** @param bool */
  public function setActionScript3($actionScript3)
  {
    $this->actionScript3 = $actionScript3;
  }
  /** @return bool */
  public function getActionScript3()
  {
    return $this->actionScript3;
  }
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
  /** @param Size[] */
  public function setAdditionalSizes($additionalSizes)
  {
    $this->additionalSizes = $additionalSizes;
  }
  /** @return Size[] */
  public function getAdditionalSizes()
  {
    return $this->additionalSizes;
  }
  /** @param string */
  public function setAlignment($alignment)
  {
    $this->alignment = $alignment;
  }
  /** @return string */
  public function getAlignment()
  {
    return $this->alignment;
  }
  /** @param string */
  public function setArtworkType($artworkType)
  {
    $this->artworkType = $artworkType;
  }
  /** @return string */
  public function getArtworkType()
  {
    return $this->artworkType;
  }
  /** @param CreativeAssetId */
  public function setAssetIdentifier(CreativeAssetId $assetIdentifier)
  {
    $this->assetIdentifier = $assetIdentifier;
  }
  /** @return CreativeAssetId */
  public function getAssetIdentifier()
  {
    return $this->assetIdentifier;
  }
  /** @param int */
  public function setAudioBitRate($audioBitRate)
  {
    $this->audioBitRate = $audioBitRate;
  }
  /** @return int */
  public function getAudioBitRate()
  {
    return $this->audioBitRate;
  }
  /** @param int */
  public function setAudioSampleRate($audioSampleRate)
  {
    $this->audioSampleRate = $audioSampleRate;
  }
  /** @return int */
  public function getAudioSampleRate()
  {
    return $this->audioSampleRate;
  }
  /** @param CreativeCustomEvent */
  public function setBackupImageExit(CreativeCustomEvent $backupImageExit)
  {
    $this->backupImageExit = $backupImageExit;
  }
  /** @return CreativeCustomEvent */
  public function getBackupImageExit()
  {
    return $this->backupImageExit;
  }
  /** @param int */
  public function setBitRate($bitRate)
  {
    $this->bitRate = $bitRate;
  }
  /** @return int */
  public function getBitRate()
  {
    return $this->bitRate;
  }
  /** @param string */
  public function setChildAssetType($childAssetType)
  {
    $this->childAssetType = $childAssetType;
  }
  /** @return string */
  public function getChildAssetType()
  {
    return $this->childAssetType;
  }
  /** @param Size */
  public function setCollapsedSize(Size $collapsedSize)
  {
    $this->collapsedSize = $collapsedSize;
  }
  /** @return Size */
  public function getCollapsedSize()
  {
    return $this->collapsedSize;
  }
  /** @param string[] */
  public function setCompanionCreativeIds($companionCreativeIds)
  {
    $this->companionCreativeIds = $companionCreativeIds;
  }
  /** @return string[] */
  public function getCompanionCreativeIds()
  {
    return $this->companionCreativeIds;
  }
  /** @param int */
  public function setCustomStartTimeValue($customStartTimeValue)
  {
    $this->customStartTimeValue = $customStartTimeValue;
  }
  /** @return int */
  public function getCustomStartTimeValue()
  {
    return $this->customStartTimeValue;
  }
  /** @param string[] */
  public function setDetectedFeatures($detectedFeatures)
  {
    $this->detectedFeatures = $detectedFeatures;
  }
  /** @return string[] */
  public function getDetectedFeatures()
  {
    return $this->detectedFeatures;
  }
  /** @param string */
  public function setDisplayType($displayType)
  {
    $this->displayType = $displayType;
  }
  /** @return string */
  public function getDisplayType()
  {
    return $this->displayType;
  }
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
  public function setDurationType($durationType)
  {
    $this->durationType = $durationType;
  }
  /** @return string */
  public function getDurationType()
  {
    return $this->durationType;
  }
  /** @param Size */
  public function setExpandedDimension(Size $expandedDimension)
  {
    $this->expandedDimension = $expandedDimension;
  }
  /** @return Size */
  public function getExpandedDimension()
  {
    return $this->expandedDimension;
  }
  /** @param string */
  public function setFileSize($fileSize)
  {
    $this->fileSize = $fileSize;
  }
  /** @return string */
  public function getFileSize()
  {
    return $this->fileSize;
  }
  /** @param int */
  public function setFlashVersion($flashVersion)
  {
    $this->flashVersion = $flashVersion;
  }
  /** @return int */
  public function getFlashVersion()
  {
    return $this->flashVersion;
  }
  /** @param float */
  public function setFrameRate($frameRate)
  {
    $this->frameRate = $frameRate;
  }
  /** @return float */
  public function getFrameRate()
  {
    return $this->frameRate;
  }
  /** @param bool */
  public function setHideFlashObjects($hideFlashObjects)
  {
    $this->hideFlashObjects = $hideFlashObjects;
  }
  /** @return bool */
  public function getHideFlashObjects()
  {
    return $this->hideFlashObjects;
  }
  /** @param bool */
  public function setHideSelectionBoxes($hideSelectionBoxes)
  {
    $this->hideSelectionBoxes = $hideSelectionBoxes;
  }
  /** @return bool */
  public function getHideSelectionBoxes()
  {
    return $this->hideSelectionBoxes;
  }
  /** @param bool */
  public function setHorizontallyLocked($horizontallyLocked)
  {
    $this->horizontallyLocked = $horizontallyLocked;
  }
  /** @return bool */
  public function getHorizontallyLocked()
  {
    return $this->horizontallyLocked;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
  }
  /** @param float */
  public function setMediaDuration($mediaDuration)
  {
    $this->mediaDuration = $mediaDuration;
  }
  /** @return float */
  public function getMediaDuration()
  {
    return $this->mediaDuration;
  }
  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param OffsetPosition */
  public function setOffset(OffsetPosition $offset)
  {
    $this->offset = $offset;
  }
  /** @return OffsetPosition */
  public function getOffset()
  {
    return $this->offset;
  }
  /** @param string */
  public function setOrientation($orientation)
  {
    $this->orientation = $orientation;
  }
  /** @return string */
  public function getOrientation()
  {
    return $this->orientation;
  }
  /** @param bool */
  public function setOriginalBackup($originalBackup)
  {
    $this->originalBackup = $originalBackup;
  }
  /** @return bool */
  public function getOriginalBackup()
  {
    return $this->originalBackup;
  }
  /** @param bool */
  public function setPoliteLoad($politeLoad)
  {
    $this->politeLoad = $politeLoad;
  }
  /** @return bool */
  public function getPoliteLoad()
  {
    return $this->politeLoad;
  }
  /** @param OffsetPosition */
  public function setPosition(OffsetPosition $position)
  {
    $this->position = $position;
  }
  /** @return OffsetPosition */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param string */
  public function setPositionLeftUnit($positionLeftUnit)
  {
    $this->positionLeftUnit = $positionLeftUnit;
  }
  /** @return string */
  public function getPositionLeftUnit()
  {
    return $this->positionLeftUnit;
  }
  /** @param string */
  public function setPositionTopUnit($positionTopUnit)
  {
    $this->positionTopUnit = $positionTopUnit;
  }
  /** @return string */
  public function getPositionTopUnit()
  {
    return $this->positionTopUnit;
  }
  /** @param string */
  public function setProgressiveServingUrl($progressiveServingUrl)
  {
    $this->progressiveServingUrl = $progressiveServingUrl;
  }
  /** @return string */
  public function getProgressiveServingUrl()
  {
    return $this->progressiveServingUrl;
  }
  /** @param bool */
  public function setPushdown($pushdown)
  {
    $this->pushdown = $pushdown;
  }
  /** @return bool */
  public function getPushdown()
  {
    return $this->pushdown;
  }
  /** @param float */
  public function setPushdownDuration($pushdownDuration)
  {
    $this->pushdownDuration = $pushdownDuration;
  }
  /** @return float */
  public function getPushdownDuration()
  {
    return $this->pushdownDuration;
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
  /** @param Size */
  public function setSize(Size $size)
  {
    $this->size = $size;
  }
  /** @return Size */
  public function getSize()
  {
    return $this->size;
  }
  /** @param bool */
  public function setSslCompliant($sslCompliant)
  {
    $this->sslCompliant = $sslCompliant;
  }
  /** @return bool */
  public function getSslCompliant()
  {
    return $this->sslCompliant;
  }
  /** @param string */
  public function setStartTimeType($startTimeType)
  {
    $this->startTimeType = $startTimeType;
  }
  /** @return string */
  public function getStartTimeType()
  {
    return $this->startTimeType;
  }
  /** @param string */
  public function setStreamingServingUrl($streamingServingUrl)
  {
    $this->streamingServingUrl = $streamingServingUrl;
  }
  /** @return string */
  public function getStreamingServingUrl()
  {
    return $this->streamingServingUrl;
  }
  /** @param bool */
  public function setTransparency($transparency)
  {
    $this->transparency = $transparency;
  }
  /** @return bool */
  public function getTransparency()
  {
    return $this->transparency;
  }
  /** @param bool */
  public function setVerticallyLocked($verticallyLocked)
  {
    $this->verticallyLocked = $verticallyLocked;
  }
  /** @return bool */
  public function getVerticallyLocked()
  {
    return $this->verticallyLocked;
  }
  /** @param string */
  public function setWindowMode($windowMode)
  {
    $this->windowMode = $windowMode;
  }
  /** @return string */
  public function getWindowMode()
  {
    return $this->windowMode;
  }
  /** @param int */
  public function setZIndex($zIndex)
  {
    $this->zIndex = $zIndex;
  }
  /** @return int */
  public function getZIndex()
  {
    return $this->zIndex;
  }
  /** @param string */
  public function setZipFilename($zipFilename)
  {
    $this->zipFilename = $zipFilename;
  }
  /** @return string */
  public function getZipFilename()
  {
    return $this->zipFilename;
  }
  /** @param string */
  public function setZipFilesize($zipFilesize)
  {
    $this->zipFilesize = $zipFilesize;
  }
  /** @return string */
  public function getZipFilesize()
  {
    return $this->zipFilesize;
  }
}

class CreativeAssetId extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $type;

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

class CreativeAssetMetadata extends \Google\Collection
{
  /** @var CreativeAssetId */
  public $assetIdentifier;
  /** @var ClickTag[] */
  public $clickTags;
  /** @var CreativeCustomEvent[] */
  public $counterCustomEvents;
  /** @var string[] */
  public $detectedFeatures;
  /** @var CreativeCustomEvent[] */
  public $exitCustomEvents;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var string */
  public $kind;
  /** @var bool */
  public $richMedia;
  /** @var CreativeCustomEvent[] */
  public $timerCustomEvents;
  /** @var string[] */
  public $warnedValidationRules;
  protected $collection_key = 'warnedValidationRules';
  protected $assetIdentifierType = CreativeAssetId::class;
  protected $assetIdentifierDataType = '';
  protected $clickTagsType = ClickTag::class;
  protected $clickTagsDataType = 'array';
  protected $counterCustomEventsType = CreativeCustomEvent::class;
  protected $counterCustomEventsDataType = 'array';
  protected $exitCustomEventsType = CreativeCustomEvent::class;
  protected $exitCustomEventsDataType = 'array';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $timerCustomEventsType = CreativeCustomEvent::class;
  protected $timerCustomEventsDataType = 'array';
  /** @param CreativeAssetId */
  public function setAssetIdentifier(CreativeAssetId $assetIdentifier)
  {
    $this->assetIdentifier = $assetIdentifier;
  }
  /** @return CreativeAssetId */
  public function getAssetIdentifier()
  {
    return $this->assetIdentifier;
  }
  /** @param ClickTag[] */
  public function setClickTags($clickTags)
  {
    $this->clickTags = $clickTags;
  }
  /** @return ClickTag[] */
  public function getClickTags()
  {
    return $this->clickTags;
  }
  /** @param CreativeCustomEvent[] */
  public function setCounterCustomEvents($counterCustomEvents)
  {
    $this->counterCustomEvents = $counterCustomEvents;
  }
  /** @return CreativeCustomEvent[] */
  public function getCounterCustomEvents()
  {
    return $this->counterCustomEvents;
  }
  /** @param string[] */
  public function setDetectedFeatures($detectedFeatures)
  {
    $this->detectedFeatures = $detectedFeatures;
  }
  /** @return string[] */
  public function getDetectedFeatures()
  {
    return $this->detectedFeatures;
  }
  /** @param CreativeCustomEvent[] */
  public function setExitCustomEvents($exitCustomEvents)
  {
    $this->exitCustomEvents = $exitCustomEvents;
  }
  /** @return CreativeCustomEvent[] */
  public function getExitCustomEvents()
  {
    return $this->exitCustomEvents;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
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
  /** @param bool */
  public function setRichMedia($richMedia)
  {
    $this->richMedia = $richMedia;
  }
  /** @return bool */
  public function getRichMedia()
  {
    return $this->richMedia;
  }
  /** @param CreativeCustomEvent[] */
  public function setTimerCustomEvents($timerCustomEvents)
  {
    $this->timerCustomEvents = $timerCustomEvents;
  }
  /** @return CreativeCustomEvent[] */
  public function getTimerCustomEvents()
  {
    return $this->timerCustomEvents;
  }
  /** @param string[] */
  public function setWarnedValidationRules($warnedValidationRules)
  {
    $this->warnedValidationRules = $warnedValidationRules;
  }
  /** @return string[] */
  public function getWarnedValidationRules()
  {
    return $this->warnedValidationRules;
  }
}

class CreativeAssetSelection extends \Google\Collection
{
  /** @var string */
  public $defaultAssetId;
  /** @var Rule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = Rule::class;
  protected $rulesDataType = 'array';
  /** @param string */
  public function setDefaultAssetId($defaultAssetId)
  {
    $this->defaultAssetId = $defaultAssetId;
  }
  /** @return string */
  public function getDefaultAssetId()
  {
    return $this->defaultAssetId;
  }
  /** @param Rule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return Rule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class CreativeAssignment extends \Google\Collection
{
  /** @var bool */
  public $active;
  /** @var bool */
  public $applyEventTags;
  /** @var ClickThroughUrl */
  public $clickThroughUrl;
  /** @var CompanionClickThroughOverride[] */
  public $companionCreativeOverrides;
  /** @var CreativeGroupAssignment[] */
  public $creativeGroupAssignments;
  /** @var string */
  public $creativeId;
  /** @var DimensionValue */
  public $creativeIdDimensionValue;
  /** @var string */
  public $endTime;
  /** @var RichMediaExitOverride[] */
  public $richMediaExitOverrides;
  /** @var int */
  public $sequence;
  /** @var bool */
  public $sslCompliant;
  /** @var string */
  public $startTime;
  /** @var int */
  public $weight;
  protected $collection_key = 'richMediaExitOverrides';
  protected $clickThroughUrlType = ClickThroughUrl::class;
  protected $clickThroughUrlDataType = '';
  protected $companionCreativeOverridesType = CompanionClickThroughOverride::class;
  protected $companionCreativeOverridesDataType = 'array';
  protected $creativeGroupAssignmentsType = CreativeGroupAssignment::class;
  protected $creativeGroupAssignmentsDataType = 'array';
  protected $creativeIdDimensionValueType = DimensionValue::class;
  protected $creativeIdDimensionValueDataType = '';
  protected $richMediaExitOverridesType = RichMediaExitOverride::class;
  protected $richMediaExitOverridesDataType = 'array';
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
  /** @param bool */
  public function setApplyEventTags($applyEventTags)
  {
    $this->applyEventTags = $applyEventTags;
  }
  /** @return bool */
  public function getApplyEventTags()
  {
    return $this->applyEventTags;
  }
  /** @param ClickThroughUrl */
  public function setClickThroughUrl(ClickThroughUrl $clickThroughUrl)
  {
    $this->clickThroughUrl = $clickThroughUrl;
  }
  /** @return ClickThroughUrl */
  public function getClickThroughUrl()
  {
    return $this->clickThroughUrl;
  }
  /** @param CompanionClickThroughOverride[] */
  public function setCompanionCreativeOverrides($companionCreativeOverrides)
  {
    $this->companionCreativeOverrides = $companionCreativeOverrides;
  }
  /** @return CompanionClickThroughOverride[] */
  public function getCompanionCreativeOverrides()
  {
    return $this->companionCreativeOverrides;
  }
  /** @param CreativeGroupAssignment[] */
  public function setCreativeGroupAssignments($creativeGroupAssignments)
  {
    $this->creativeGroupAssignments = $creativeGroupAssignments;
  }
  /** @return CreativeGroupAssignment[] */
  public function getCreativeGroupAssignments()
  {
    return $this->creativeGroupAssignments;
  }
  /** @param string */
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  /** @return string */
  public function getCreativeId()
  {
    return $this->creativeId;
  }
  /** @param DimensionValue */
  public function setCreativeIdDimensionValue(DimensionValue $creativeIdDimensionValue)
  {
    $this->creativeIdDimensionValue = $creativeIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getCreativeIdDimensionValue()
  {
    return $this->creativeIdDimensionValue;
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
  /** @param RichMediaExitOverride[] */
  public function setRichMediaExitOverrides($richMediaExitOverrides)
  {
    $this->richMediaExitOverrides = $richMediaExitOverrides;
  }
  /** @return RichMediaExitOverride[] */
  public function getRichMediaExitOverrides()
  {
    return $this->richMediaExitOverrides;
  }
  /** @param int */
  public function setSequence($sequence)
  {
    $this->sequence = $sequence;
  }
  /** @return int */
  public function getSequence()
  {
    return $this->sequence;
  }
  /** @param bool */
  public function setSslCompliant($sslCompliant)
  {
    $this->sslCompliant = $sslCompliant;
  }
  /** @return bool */
  public function getSslCompliant()
  {
    return $this->sslCompliant;
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
  /** @param int */
  public function setWeight($weight)
  {
    $this->weight = $weight;
  }
  /** @return int */
  public function getWeight()
  {
    return $this->weight;
  }
}

class CreativeClickThroughUrl extends \Google\Model
{
  /** @var string */
  public $computedClickThroughUrl;
  /** @var string */
  public $customClickThroughUrl;
  /** @var string */
  public $landingPageId;

  /** @param string */
  public function setComputedClickThroughUrl($computedClickThroughUrl)
  {
    $this->computedClickThroughUrl = $computedClickThroughUrl;
  }
  /** @return string */
  public function getComputedClickThroughUrl()
  {
    return $this->computedClickThroughUrl;
  }
  /** @param string */
  public function setCustomClickThroughUrl($customClickThroughUrl)
  {
    $this->customClickThroughUrl = $customClickThroughUrl;
  }
  /** @return string */
  public function getCustomClickThroughUrl()
  {
    return $this->customClickThroughUrl;
  }
  /** @param string */
  public function setLandingPageId($landingPageId)
  {
    $this->landingPageId = $landingPageId;
  }
  /** @return string */
  public function getLandingPageId()
  {
    return $this->landingPageId;
  }
}

class CreativeCustomEvent extends \Google\Model
{
  /** @var string */
  public $advertiserCustomEventId;
  /** @var string */
  public $advertiserCustomEventName;
  /** @var string */
  public $advertiserCustomEventType;
  /** @var string */
  public $artworkLabel;
  /** @var string */
  public $artworkType;
  /** @var CreativeClickThroughUrl */
  public $exitClickThroughUrl;
  /** @var string */
  public $id;
  /** @var PopupWindowProperties */
  public $popupWindowProperties;
  /** @var string */
  public $targetType;
  /** @var string */
  public $videoReportingId;
  protected $exitClickThroughUrlType = CreativeClickThroughUrl::class;
  protected $exitClickThroughUrlDataType = '';
  protected $popupWindowPropertiesType = PopupWindowProperties::class;
  protected $popupWindowPropertiesDataType = '';
  /** @param string */
  public function setAdvertiserCustomEventId($advertiserCustomEventId)
  {
    $this->advertiserCustomEventId = $advertiserCustomEventId;
  }
  /** @return string */
  public function getAdvertiserCustomEventId()
  {
    return $this->advertiserCustomEventId;
  }
  /** @param string */
  public function setAdvertiserCustomEventName($advertiserCustomEventName)
  {
    $this->advertiserCustomEventName = $advertiserCustomEventName;
  }
  /** @return string */
  public function getAdvertiserCustomEventName()
  {
    return $this->advertiserCustomEventName;
  }
  /** @param string */
  public function setAdvertiserCustomEventType($advertiserCustomEventType)
  {
    $this->advertiserCustomEventType = $advertiserCustomEventType;
  }
  /** @return string */
  public function getAdvertiserCustomEventType()
  {
    return $this->advertiserCustomEventType;
  }
  /** @param string */
  public function setArtworkLabel($artworkLabel)
  {
    $this->artworkLabel = $artworkLabel;
  }
  /** @return string */
  public function getArtworkLabel()
  {
    return $this->artworkLabel;
  }
  /** @param string */
  public function setArtworkType($artworkType)
  {
    $this->artworkType = $artworkType;
  }
  /** @return string */
  public function getArtworkType()
  {
    return $this->artworkType;
  }
  /** @param CreativeClickThroughUrl */
  public function setExitClickThroughUrl(CreativeClickThroughUrl $exitClickThroughUrl)
  {
    $this->exitClickThroughUrl = $exitClickThroughUrl;
  }
  /** @return CreativeClickThroughUrl */
  public function getExitClickThroughUrl()
  {
    return $this->exitClickThroughUrl;
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
  /** @param PopupWindowProperties */
  public function setPopupWindowProperties(PopupWindowProperties $popupWindowProperties)
  {
    $this->popupWindowProperties = $popupWindowProperties;
  }
  /** @return PopupWindowProperties */
  public function getPopupWindowProperties()
  {
    return $this->popupWindowProperties;
  }
  /** @param string */
  public function setTargetType($targetType)
  {
    $this->targetType = $targetType;
  }
  /** @return string */
  public function getTargetType()
  {
    return $this->targetType;
  }
  /** @param string */
  public function setVideoReportingId($videoReportingId)
  {
    $this->videoReportingId = $videoReportingId;
  }
  /** @return string */
  public function getVideoReportingId()
  {
    return $this->videoReportingId;
  }
}

class CreativeField extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $subaccountId;
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
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
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
}

class CreativeFieldAssignment extends \Google\Model
{
  /** @var string */
  public $creativeFieldId;
  /** @var string */
  public $creativeFieldValueId;

  /** @param string */
  public function setCreativeFieldId($creativeFieldId)
  {
    $this->creativeFieldId = $creativeFieldId;
  }
  /** @return string */
  public function getCreativeFieldId()
  {
    return $this->creativeFieldId;
  }
  /** @param string */
  public function setCreativeFieldValueId($creativeFieldValueId)
  {
    $this->creativeFieldValueId = $creativeFieldValueId;
  }
  /** @return string */
  public function getCreativeFieldValueId()
  {
    return $this->creativeFieldValueId;
  }
}

class CreativeFieldValue extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $value;

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

class CreativeFieldValuesListResponse extends \Google\Collection
{
  /** @var CreativeFieldValue[] */
  public $creativeFieldValues;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'creativeFieldValues';
  protected $creativeFieldValuesType = CreativeFieldValue::class;
  protected $creativeFieldValuesDataType = 'array';
  /** @param CreativeFieldValue[] */
  public function setCreativeFieldValues($creativeFieldValues)
  {
    $this->creativeFieldValues = $creativeFieldValues;
  }
  /** @return CreativeFieldValue[] */
  public function getCreativeFieldValues()
  {
    return $this->creativeFieldValues;
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

class CreativeFieldsListResponse extends \Google\Collection
{
  /** @var CreativeField[] */
  public $creativeFields;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'creativeFields';
  protected $creativeFieldsType = CreativeField::class;
  protected $creativeFieldsDataType = 'array';
  /** @param CreativeField[] */
  public function setCreativeFields($creativeFields)
  {
    $this->creativeFields = $creativeFields;
  }
  /** @return CreativeField[] */
  public function getCreativeFields()
  {
    return $this->creativeFields;
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

class CreativeGroup extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var int */
  public $groupNumber;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $subaccountId;
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  /** @param int */
  public function setGroupNumber($groupNumber)
  {
    $this->groupNumber = $groupNumber;
  }
  /** @return int */
  public function getGroupNumber()
  {
    return $this->groupNumber;
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
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
}

class CreativeGroupAssignment extends \Google\Model
{
  /** @var string */
  public $creativeGroupId;
  /** @var string */
  public $creativeGroupNumber;

  /** @param string */
  public function setCreativeGroupId($creativeGroupId)
  {
    $this->creativeGroupId = $creativeGroupId;
  }
  /** @return string */
  public function getCreativeGroupId()
  {
    return $this->creativeGroupId;
  }
  /** @param string */
  public function setCreativeGroupNumber($creativeGroupNumber)
  {
    $this->creativeGroupNumber = $creativeGroupNumber;
  }
  /** @return string */
  public function getCreativeGroupNumber()
  {
    return $this->creativeGroupNumber;
  }
}

class CreativeGroupsListResponse extends \Google\Collection
{
  /** @var CreativeGroup[] */
  public $creativeGroups;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'creativeGroups';
  protected $creativeGroupsType = CreativeGroup::class;
  protected $creativeGroupsDataType = 'array';
  /** @param CreativeGroup[] */
  public function setCreativeGroups($creativeGroups)
  {
    $this->creativeGroups = $creativeGroups;
  }
  /** @return CreativeGroup[] */
  public function getCreativeGroups()
  {
    return $this->creativeGroups;
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

class CreativeOptimizationConfiguration extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var OptimizationActivity[] */
  public $optimizationActivitys;
  /** @var string */
  public $optimizationModel;
  protected $collection_key = 'optimizationActivitys';
  protected $optimizationActivitysType = OptimizationActivity::class;
  protected $optimizationActivitysDataType = 'array';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param OptimizationActivity[] */
  public function setOptimizationActivitys($optimizationActivitys)
  {
    $this->optimizationActivitys = $optimizationActivitys;
  }
  /** @return OptimizationActivity[] */
  public function getOptimizationActivitys()
  {
    return $this->optimizationActivitys;
  }
  /** @param string */
  public function setOptimizationModel($optimizationModel)
  {
    $this->optimizationModel = $optimizationModel;
  }
  /** @return string */
  public function getOptimizationModel()
  {
    return $this->optimizationModel;
  }
}

class CreativeRotation extends \Google\Collection
{
  /** @var CreativeAssignment[] */
  public $creativeAssignments;
  /** @var string */
  public $creativeOptimizationConfigurationId;
  /** @var string */
  public $type;
  /** @var string */
  public $weightCalculationStrategy;
  protected $collection_key = 'creativeAssignments';
  protected $creativeAssignmentsType = CreativeAssignment::class;
  protected $creativeAssignmentsDataType = 'array';
  /** @param CreativeAssignment[] */
  public function setCreativeAssignments($creativeAssignments)
  {
    $this->creativeAssignments = $creativeAssignments;
  }
  /** @return CreativeAssignment[] */
  public function getCreativeAssignments()
  {
    return $this->creativeAssignments;
  }
  /** @param string */
  public function setCreativeOptimizationConfigurationId($creativeOptimizationConfigurationId)
  {
    $this->creativeOptimizationConfigurationId = $creativeOptimizationConfigurationId;
  }
  /** @return string */
  public function getCreativeOptimizationConfigurationId()
  {
    return $this->creativeOptimizationConfigurationId;
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
  public function setWeightCalculationStrategy($weightCalculationStrategy)
  {
    $this->weightCalculationStrategy = $weightCalculationStrategy;
  }
  /** @return string */
  public function getWeightCalculationStrategy()
  {
    return $this->weightCalculationStrategy;
  }
}

class CreativesListResponse extends \Google\Collection
{
  /** @var Creative[] */
  public $creatives;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'creatives';
  protected $creativesType = Creative::class;
  protected $creativesDataType = 'array';
  /** @param Creative[] */
  public function setCreatives($creatives)
  {
    $this->creatives = $creatives;
  }
  /** @return Creative[] */
  public function getCreatives()
  {
    return $this->creatives;
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

class CrossDimensionReachReportCompatibleFields extends \Google\Collection
{
  /** @var Dimension[] */
  public $breakdown;
  /** @var Dimension[] */
  public $dimensionFilters;
  /** @var string */
  public $kind;
  /** @var Metric[] */
  public $metrics;
  /** @var Metric[] */
  public $overlapMetrics;
  protected $collection_key = 'overlapMetrics';
  protected $breakdownType = Dimension::class;
  protected $breakdownDataType = 'array';
  protected $dimensionFiltersType = Dimension::class;
  protected $dimensionFiltersDataType = 'array';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $overlapMetricsType = Metric::class;
  protected $overlapMetricsDataType = 'array';
  /** @param Dimension[] */
  public function setBreakdown($breakdown)
  {
    $this->breakdown = $breakdown;
  }
  /** @return Dimension[] */
  public function getBreakdown()
  {
    return $this->breakdown;
  }
  /** @param Dimension[] */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /** @return Dimension[] */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
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
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param Metric[] */
  public function setOverlapMetrics($overlapMetrics)
  {
    $this->overlapMetrics = $overlapMetrics;
  }
  /** @return Metric[] */
  public function getOverlapMetrics()
  {
    return $this->overlapMetrics;
  }
}

class CustomFloodlightVariable extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $type;
  /** @var string */
  public $value;

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

class CustomRichMediaEvents extends \Google\Collection
{
  /** @var DimensionValue[] */
  public $filteredEventIds;
  /** @var string */
  public $kind;
  protected $collection_key = 'filteredEventIds';
  protected $filteredEventIdsType = DimensionValue::class;
  protected $filteredEventIdsDataType = 'array';
  /** @param DimensionValue[] */
  public function setFilteredEventIds($filteredEventIds)
  {
    $this->filteredEventIds = $filteredEventIds;
  }
  /** @return DimensionValue[] */
  public function getFilteredEventIds()
  {
    return $this->filteredEventIds;
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

class CustomViewabilityMetric extends \Google\Model
{
  /** @var CustomViewabilityMetricConfiguration */
  public $configuration;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  protected $configurationType = CustomViewabilityMetricConfiguration::class;
  protected $configurationDataType = '';
  /** @param CustomViewabilityMetricConfiguration */
  public function setConfiguration(CustomViewabilityMetricConfiguration $configuration)
  {
    $this->configuration = $configuration;
  }
  /** @return CustomViewabilityMetricConfiguration */
  public function getConfiguration()
  {
    return $this->configuration;
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

class CustomViewabilityMetricConfiguration extends \Google\Model
{
  /** @var bool */
  public $audible;
  /** @var int */
  public $timeMillis;
  /** @var int */
  public $timePercent;
  /** @var int */
  public $viewabilityPercent;

  /** @param bool */
  public function setAudible($audible)
  {
    $this->audible = $audible;
  }
  /** @return bool */
  public function getAudible()
  {
    return $this->audible;
  }
  /** @param int */
  public function setTimeMillis($timeMillis)
  {
    $this->timeMillis = $timeMillis;
  }
  /** @return int */
  public function getTimeMillis()
  {
    return $this->timeMillis;
  }
  /** @param int */
  public function setTimePercent($timePercent)
  {
    $this->timePercent = $timePercent;
  }
  /** @return int */
  public function getTimePercent()
  {
    return $this->timePercent;
  }
  /** @param int */
  public function setViewabilityPercent($viewabilityPercent)
  {
    $this->viewabilityPercent = $viewabilityPercent;
  }
  /** @return int */
  public function getViewabilityPercent()
  {
    return $this->viewabilityPercent;
  }
}

class DateRange extends \Google\Model
{
  /** @var string */
  public $endDate;
  /** @var string */
  public $kind;
  /** @var string */
  public $relativeDateRange;
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
  public function setRelativeDateRange($relativeDateRange)
  {
    $this->relativeDateRange = $relativeDateRange;
  }
  /** @return string */
  public function getRelativeDateRange()
  {
    return $this->relativeDateRange;
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

class DayPartTargeting extends \Google\Collection
{
  /** @var string[] */
  public $daysOfWeek;
  /** @var int[] */
  public $hoursOfDay;
  /** @var bool */
  public $userLocalTime;
  protected $collection_key = 'hoursOfDay';
  /** @param string[] */
  public function setDaysOfWeek($daysOfWeek)
  {
    $this->daysOfWeek = $daysOfWeek;
  }
  /** @return string[] */
  public function getDaysOfWeek()
  {
    return $this->daysOfWeek;
  }
  /** @param int[] */
  public function setHoursOfDay($hoursOfDay)
  {
    $this->hoursOfDay = $hoursOfDay;
  }
  /** @return int[] */
  public function getHoursOfDay()
  {
    return $this->hoursOfDay;
  }
  /** @param bool */
  public function setUserLocalTime($userLocalTime)
  {
    $this->userLocalTime = $userLocalTime;
  }
  /** @return bool */
  public function getUserLocalTime()
  {
    return $this->userLocalTime;
  }
}

class DeepLink extends \Google\Collection
{
  /** @var string */
  public $appUrl;
  /** @var string */
  public $fallbackUrl;
  /** @var string */
  public $kind;
  /** @var MobileApp */
  public $mobileApp;
  /** @var string[] */
  public $remarketingListIds;
  protected $collection_key = 'remarketingListIds';
  protected $mobileAppType = MobileApp::class;
  protected $mobileAppDataType = '';
  /** @param string */
  public function setAppUrl($appUrl)
  {
    $this->appUrl = $appUrl;
  }
  /** @return string */
  public function getAppUrl()
  {
    return $this->appUrl;
  }
  /** @param string */
  public function setFallbackUrl($fallbackUrl)
  {
    $this->fallbackUrl = $fallbackUrl;
  }
  /** @return string */
  public function getFallbackUrl()
  {
    return $this->fallbackUrl;
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
  /** @param MobileApp */
  public function setMobileApp(MobileApp $mobileApp)
  {
    $this->mobileApp = $mobileApp;
  }
  /** @return MobileApp */
  public function getMobileApp()
  {
    return $this->mobileApp;
  }
  /** @param string[] */
  public function setRemarketingListIds($remarketingListIds)
  {
    $this->remarketingListIds = $remarketingListIds;
  }
  /** @return string[] */
  public function getRemarketingListIds()
  {
    return $this->remarketingListIds;
  }
}

class DefaultClickThroughEventTagProperties extends \Google\Model
{
  /** @var string */
  public $defaultClickThroughEventTagId;
  /** @var bool */
  public $overrideInheritedEventTag;

  /** @param string */
  public function setDefaultClickThroughEventTagId($defaultClickThroughEventTagId)
  {
    $this->defaultClickThroughEventTagId = $defaultClickThroughEventTagId;
  }
  /** @return string */
  public function getDefaultClickThroughEventTagId()
  {
    return $this->defaultClickThroughEventTagId;
  }
  /** @param bool */
  public function setOverrideInheritedEventTag($overrideInheritedEventTag)
  {
    $this->overrideInheritedEventTag = $overrideInheritedEventTag;
  }
  /** @return bool */
  public function getOverrideInheritedEventTag()
  {
    return $this->overrideInheritedEventTag;
  }
}

class DeliverySchedule extends \Google\Model
{
  /** @var FrequencyCap */
  public $frequencyCap;
  /** @var bool */
  public $hardCutoff;
  /** @var string */
  public $impressionRatio;
  /** @var string */
  public $priority;
  protected $frequencyCapType = FrequencyCap::class;
  protected $frequencyCapDataType = '';
  /** @param FrequencyCap */
  public function setFrequencyCap(FrequencyCap $frequencyCap)
  {
    $this->frequencyCap = $frequencyCap;
  }
  /** @return FrequencyCap */
  public function getFrequencyCap()
  {
    return $this->frequencyCap;
  }
  /** @param bool */
  public function setHardCutoff($hardCutoff)
  {
    $this->hardCutoff = $hardCutoff;
  }
  /** @return bool */
  public function getHardCutoff()
  {
    return $this->hardCutoff;
  }
  /** @param string */
  public function setImpressionRatio($impressionRatio)
  {
    $this->impressionRatio = $impressionRatio;
  }
  /** @return string */
  public function getImpressionRatio()
  {
    return $this->impressionRatio;
  }
  /** @param string */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return string */
  public function getPriority()
  {
    return $this->priority;
  }
}

class DfareportingFile extends \Google\Model
{
  /** @var DateRange */
  public $dateRange;
  /** @var string */
  public $etag;
  /** @var string */
  public $fileName;
  /** @var string */
  public $format;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $lastModifiedTime;
  /** @var string */
  public $reportId;
  /** @var string */
  public $status;
  /** @var DfareportingFileUrls */
  public $urls;
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $urlsType = DfareportingFileUrls::class;
  protected $urlsDataType = '';
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
  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }
  /** @return string */
  public function getFileName()
  {
    return $this->fileName;
  }
  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
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
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  /** @param string */
  public function setReportId($reportId)
  {
    $this->reportId = $reportId;
  }
  /** @return string */
  public function getReportId()
  {
    return $this->reportId;
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
  /** @param DfareportingFileUrls */
  public function setUrls(DfareportingFileUrls $urls)
  {
    $this->urls = $urls;
  }
  /** @return DfareportingFileUrls */
  public function getUrls()
  {
    return $this->urls;
  }
}

class DfareportingFileUrls extends \Google\Model
{
  /** @var string */
  public $apiUrl;
  /** @var string */
  public $browserUrl;

  /** @param string */
  public function setApiUrl($apiUrl)
  {
    $this->apiUrl = $apiUrl;
  }
  /** @return string */
  public function getApiUrl()
  {
    return $this->apiUrl;
  }
  /** @param string */
  public function setBrowserUrl($browserUrl)
  {
    $this->browserUrl = $browserUrl;
  }
  /** @return string */
  public function getBrowserUrl()
  {
    return $this->browserUrl;
  }
}

class DfpSettings extends \Google\Model
{
  /** @var string */
  public $dfpNetworkCode;
  /** @var string */
  public $dfpNetworkName;
  /** @var bool */
  public $programmaticPlacementAccepted;
  /** @var bool */
  public $pubPaidPlacementAccepted;
  /** @var bool */
  public $publisherPortalOnly;

  /** @param string */
  public function setDfpNetworkCode($dfpNetworkCode)
  {
    $this->dfpNetworkCode = $dfpNetworkCode;
  }
  /** @return string */
  public function getDfpNetworkCode()
  {
    return $this->dfpNetworkCode;
  }
  /** @param string */
  public function setDfpNetworkName($dfpNetworkName)
  {
    $this->dfpNetworkName = $dfpNetworkName;
  }
  /** @return string */
  public function getDfpNetworkName()
  {
    return $this->dfpNetworkName;
  }
  /** @param bool */
  public function setProgrammaticPlacementAccepted($programmaticPlacementAccepted)
  {
    $this->programmaticPlacementAccepted = $programmaticPlacementAccepted;
  }
  /** @return bool */
  public function getProgrammaticPlacementAccepted()
  {
    return $this->programmaticPlacementAccepted;
  }
  /** @param bool */
  public function setPubPaidPlacementAccepted($pubPaidPlacementAccepted)
  {
    $this->pubPaidPlacementAccepted = $pubPaidPlacementAccepted;
  }
  /** @return bool */
  public function getPubPaidPlacementAccepted()
  {
    return $this->pubPaidPlacementAccepted;
  }
  /** @param bool */
  public function setPublisherPortalOnly($publisherPortalOnly)
  {
    $this->publisherPortalOnly = $publisherPortalOnly;
  }
  /** @return bool */
  public function getPublisherPortalOnly()
  {
    return $this->publisherPortalOnly;
  }
}

class Dimension extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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
}

class DimensionFilter extends \Google\Model
{
  /** @var string */
  public $dimensionName;
  /** @var string */
  public $kind;
  /** @var string */
  public $value;

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

class DimensionValue extends \Google\Model
{
  /** @var string */
  public $dimensionName;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $matchType;
  /** @var string */
  public $value;

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

class DimensionValueList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var DimensionValue[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = DimensionValue::class;
  protected $itemsDataType = 'array';
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
  /** @param DimensionValue[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return DimensionValue[] */
  public function getItems()
  {
    return $this->items;
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

class DimensionValueRequest extends \Google\Collection
{
  /** @var string */
  public $dimensionName;
  /** @var string */
  public $endDate;
  /** @var DimensionFilter[] */
  public $filters;
  /** @var string */
  public $kind;
  /** @var string */
  public $startDate;
  protected $collection_key = 'filters';
  protected $filtersType = DimensionFilter::class;
  protected $filtersDataType = 'array';
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
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return string */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param DimensionFilter[] */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /** @return DimensionFilter[] */
  public function getFilters()
  {
    return $this->filters;
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

class DirectorySite extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var string[] */
  public $inpageTagFormats;
  /** @var string[] */
  public $interstitialTagFormats;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var DirectorySiteSettings */
  public $settings;
  /** @var string */
  public $url;
  protected $collection_key = 'interstitialTagFormats';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $settingsType = DirectorySiteSettings::class;
  protected $settingsDataType = '';
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
  }
  /** @param string[] */
  public function setInpageTagFormats($inpageTagFormats)
  {
    $this->inpageTagFormats = $inpageTagFormats;
  }
  /** @return string[] */
  public function getInpageTagFormats()
  {
    return $this->inpageTagFormats;
  }
  /** @param string[] */
  public function setInterstitialTagFormats($interstitialTagFormats)
  {
    $this->interstitialTagFormats = $interstitialTagFormats;
  }
  /** @return string[] */
  public function getInterstitialTagFormats()
  {
    return $this->interstitialTagFormats;
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
  /** @param DirectorySiteSettings */
  public function setSettings(DirectorySiteSettings $settings)
  {
    $this->settings = $settings;
  }
  /** @return DirectorySiteSettings */
  public function getSettings()
  {
    return $this->settings;
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

class DirectorySiteSettings extends \Google\Model
{
  /** @var bool */
  public $activeViewOptOut;
  /** @var DfpSettings */
  public $dfpSettings;
  /** @var bool */
  public $instreamVideoPlacementAccepted;
  /** @var bool */
  public $interstitialPlacementAccepted;
  protected $dfpSettingsType = DfpSettings::class;
  protected $dfpSettingsDataType = '';
  /** @param bool */
  public function setActiveViewOptOut($activeViewOptOut)
  {
    $this->activeViewOptOut = $activeViewOptOut;
  }
  /** @return bool */
  public function getActiveViewOptOut()
  {
    return $this->activeViewOptOut;
  }
  /** @param DfpSettings */
  public function setDfpSettings(DfpSettings $dfpSettings)
  {
    $this->dfpSettings = $dfpSettings;
  }
  /** @return DfpSettings */
  public function getDfpSettings()
  {
    return $this->dfpSettings;
  }
  /** @param bool */
  public function setInstreamVideoPlacementAccepted($instreamVideoPlacementAccepted)
  {
    $this->instreamVideoPlacementAccepted = $instreamVideoPlacementAccepted;
  }
  /** @return bool */
  public function getInstreamVideoPlacementAccepted()
  {
    return $this->instreamVideoPlacementAccepted;
  }
  /** @param bool */
  public function setInterstitialPlacementAccepted($interstitialPlacementAccepted)
  {
    $this->interstitialPlacementAccepted = $interstitialPlacementAccepted;
  }
  /** @return bool */
  public function getInterstitialPlacementAccepted()
  {
    return $this->interstitialPlacementAccepted;
  }
}

class DirectorySitesListResponse extends \Google\Collection
{
  /** @var DirectorySite[] */
  public $directorySites;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'directorySites';
  protected $directorySitesType = DirectorySite::class;
  protected $directorySitesDataType = 'array';
  /** @param DirectorySite[] */
  public function setDirectorySites($directorySites)
  {
    $this->directorySites = $directorySites;
  }
  /** @return DirectorySite[] */
  public function getDirectorySites()
  {
    return $this->directorySites;
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

class DisjunctiveMatchStatement extends \Google\Collection
{
  /** @var EventFilter[] */
  public $eventFilters;
  /** @var string */
  public $kind;
  protected $collection_key = 'eventFilters';
  protected $eventFiltersType = EventFilter::class;
  protected $eventFiltersDataType = 'array';
  /** @param EventFilter[] */
  public function setEventFilters($eventFilters)
  {
    $this->eventFilters = $eventFilters;
  }
  /** @return EventFilter[] */
  public function getEventFilters()
  {
    return $this->eventFilters;
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

class DynamicTargetingKey extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $objectId;
  /** @var string */
  public $objectType;

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
  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }
  /** @return string */
  public function getObjectType()
  {
    return $this->objectType;
  }
}

class DynamicTargetingKeysListResponse extends \Google\Collection
{
  /** @var DynamicTargetingKey[] */
  public $dynamicTargetingKeys;
  /** @var string */
  public $kind;
  protected $collection_key = 'dynamicTargetingKeys';
  protected $dynamicTargetingKeysType = DynamicTargetingKey::class;
  protected $dynamicTargetingKeysDataType = 'array';
  /** @param DynamicTargetingKey[] */
  public function setDynamicTargetingKeys($dynamicTargetingKeys)
  {
    $this->dynamicTargetingKeys = $dynamicTargetingKeys;
  }
  /** @return DynamicTargetingKey[] */
  public function getDynamicTargetingKeys()
  {
    return $this->dynamicTargetingKeys;
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

class EncryptionInfo extends \Google\Model
{
  /** @var string */
  public $encryptionEntityId;
  /** @var string */
  public $encryptionEntityType;
  /** @var string */
  public $encryptionSource;
  /** @var string */
  public $kind;

  /** @param string */
  public function setEncryptionEntityId($encryptionEntityId)
  {
    $this->encryptionEntityId = $encryptionEntityId;
  }
  /** @return string */
  public function getEncryptionEntityId()
  {
    return $this->encryptionEntityId;
  }
  /** @param string */
  public function setEncryptionEntityType($encryptionEntityType)
  {
    $this->encryptionEntityType = $encryptionEntityType;
  }
  /** @return string */
  public function getEncryptionEntityType()
  {
    return $this->encryptionEntityType;
  }
  /** @param string */
  public function setEncryptionSource($encryptionSource)
  {
    $this->encryptionSource = $encryptionSource;
  }
  /** @return string */
  public function getEncryptionSource()
  {
    return $this->encryptionSource;
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

class EventFilter extends \Google\Model
{
  /** @var PathReportDimensionValue */
  public $dimensionFilter;
  /** @var string */
  public $kind;
  /** @var UvarFilter */
  public $uvarFilter;
  protected $dimensionFilterType = PathReportDimensionValue::class;
  protected $dimensionFilterDataType = '';
  protected $uvarFilterType = UvarFilter::class;
  protected $uvarFilterDataType = '';
  /** @param PathReportDimensionValue */
  public function setDimensionFilter(PathReportDimensionValue $dimensionFilter)
  {
    $this->dimensionFilter = $dimensionFilter;
  }
  /** @return PathReportDimensionValue */
  public function getDimensionFilter()
  {
    return $this->dimensionFilter;
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
  /** @param UvarFilter */
  public function setUvarFilter(UvarFilter $uvarFilter)
  {
    $this->uvarFilter = $uvarFilter;
  }
  /** @return UvarFilter */
  public function getUvarFilter()
  {
    return $this->uvarFilter;
  }
}

class EventTag extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var string */
  public $campaignId;
  /** @var DimensionValue */
  public $campaignIdDimensionValue;
  /** @var bool */
  public $enabledByDefault;
  /** @var bool */
  public $excludeFromAdxRequests;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $siteFilterType;
  /** @var string[] */
  public $siteIds;
  /** @var bool */
  public $sslCompliant;
  /** @var string */
  public $status;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $type;
  /** @var string */
  public $url;
  /** @var int */
  public $urlEscapeLevels;
  protected $collection_key = 'siteIds';
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
  protected $campaignIdDimensionValueType = DimensionValue::class;
  protected $campaignIdDimensionValueDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  /** @param string */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /** @return string */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /** @param DimensionValue */
  public function setCampaignIdDimensionValue(DimensionValue $campaignIdDimensionValue)
  {
    $this->campaignIdDimensionValue = $campaignIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getCampaignIdDimensionValue()
  {
    return $this->campaignIdDimensionValue;
  }
  /** @param bool */
  public function setEnabledByDefault($enabledByDefault)
  {
    $this->enabledByDefault = $enabledByDefault;
  }
  /** @return bool */
  public function getEnabledByDefault()
  {
    return $this->enabledByDefault;
  }
  /** @param bool */
  public function setExcludeFromAdxRequests($excludeFromAdxRequests)
  {
    $this->excludeFromAdxRequests = $excludeFromAdxRequests;
  }
  /** @return bool */
  public function getExcludeFromAdxRequests()
  {
    return $this->excludeFromAdxRequests;
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
  /** @param string */
  public function setSiteFilterType($siteFilterType)
  {
    $this->siteFilterType = $siteFilterType;
  }
  /** @return string */
  public function getSiteFilterType()
  {
    return $this->siteFilterType;
  }
  /** @param string[] */
  public function setSiteIds($siteIds)
  {
    $this->siteIds = $siteIds;
  }
  /** @return string[] */
  public function getSiteIds()
  {
    return $this->siteIds;
  }
  /** @param bool */
  public function setSslCompliant($sslCompliant)
  {
    $this->sslCompliant = $sslCompliant;
  }
  /** @return bool */
  public function getSslCompliant()
  {
    return $this->sslCompliant;
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
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
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
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
  /** @param int */
  public function setUrlEscapeLevels($urlEscapeLevels)
  {
    $this->urlEscapeLevels = $urlEscapeLevels;
  }
  /** @return int */
  public function getUrlEscapeLevels()
  {
    return $this->urlEscapeLevels;
  }
}

class EventTagOverride extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $id;

  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
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
}

class EventTagsListResponse extends \Google\Collection
{
  /** @var EventTag[] */
  public $eventTags;
  /** @var string */
  public $kind;
  protected $collection_key = 'eventTags';
  protected $eventTagsType = EventTag::class;
  protected $eventTagsDataType = 'array';
  /** @param EventTag[] */
  public function setEventTags($eventTags)
  {
    $this->eventTags = $eventTags;
  }
  /** @return EventTag[] */
  public function getEventTags()
  {
    return $this->eventTags;
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

class FileList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var DfareportingFile[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = DfareportingFile::class;
  protected $itemsDataType = 'array';
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
  /** @param DfareportingFile[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return DfareportingFile[] */
  public function getItems()
  {
    return $this->items;
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

class Flight extends \Google\Model
{
  /** @var string */
  public $endDate;
  /** @var string */
  public $rateOrCost;
  /** @var string */
  public $startDate;
  /** @var string */
  public $units;

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
  public function setRateOrCost($rateOrCost)
  {
    $this->rateOrCost = $rateOrCost;
  }
  /** @return string */
  public function getRateOrCost()
  {
    return $this->rateOrCost;
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

class FloodlightActivitiesGenerateTagResponse extends \Google\Model
{
  /** @var string */
  public $floodlightActivityTag;
  /** @var string */
  public $globalSiteTagGlobalSnippet;
  /** @var string */
  public $kind;

  /** @param string */
  public function setFloodlightActivityTag($floodlightActivityTag)
  {
    $this->floodlightActivityTag = $floodlightActivityTag;
  }
  /** @return string */
  public function getFloodlightActivityTag()
  {
    return $this->floodlightActivityTag;
  }
  /** @param string */
  public function setGlobalSiteTagGlobalSnippet($globalSiteTagGlobalSnippet)
  {
    $this->globalSiteTagGlobalSnippet = $globalSiteTagGlobalSnippet;
  }
  /** @return string */
  public function getGlobalSiteTagGlobalSnippet()
  {
    return $this->globalSiteTagGlobalSnippet;
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

class FloodlightActivitiesListResponse extends \Google\Collection
{
  /** @var FloodlightActivity[] */
  public $floodlightActivities;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'floodlightActivities';
  protected $floodlightActivitiesType = FloodlightActivity::class;
  protected $floodlightActivitiesDataType = 'array';
  /** @param FloodlightActivity[] */
  public function setFloodlightActivities($floodlightActivities)
  {
    $this->floodlightActivities = $floodlightActivities;
  }
  /** @return FloodlightActivity[] */
  public function getFloodlightActivities()
  {
    return $this->floodlightActivities;
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

class FloodlightActivity extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var bool */
  public $attributionEnabled;
  /** @var string */
  public $cacheBustingType;
  /** @var string */
  public $countingMethod;
  /** @var FloodlightActivityDynamicTag[] */
  public $defaultTags;
  /** @var string */
  public $expectedUrl;
  /** @var string */
  public $floodlightActivityGroupId;
  /** @var string */
  public $floodlightActivityGroupName;
  /** @var string */
  public $floodlightActivityGroupTagString;
  /** @var string */
  public $floodlightActivityGroupType;
  /** @var string */
  public $floodlightConfigurationId;
  /** @var DimensionValue */
  public $floodlightConfigurationIdDimensionValue;
  /** @var string */
  public $floodlightTagType;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var FloodlightActivityPublisherDynamicTag[] */
  public $publisherTags;
  /** @var bool */
  public $secure;
  /** @var bool */
  public $sslCompliant;
  /** @var bool */
  public $sslRequired;
  /** @var string */
  public $status;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $tagFormat;
  /** @var string */
  public $tagString;
  /** @var string[] */
  public $userDefinedVariableTypes;
  protected $collection_key = 'userDefinedVariableTypes';
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
  protected $defaultTagsType = FloodlightActivityDynamicTag::class;
  protected $defaultTagsDataType = 'array';
  protected $floodlightConfigurationIdDimensionValueType = DimensionValue::class;
  protected $floodlightConfigurationIdDimensionValueDataType = '';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $publisherTagsType = FloodlightActivityPublisherDynamicTag::class;
  protected $publisherTagsDataType = 'array';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  /** @param bool */
  public function setAttributionEnabled($attributionEnabled)
  {
    $this->attributionEnabled = $attributionEnabled;
  }
  /** @return bool */
  public function getAttributionEnabled()
  {
    return $this->attributionEnabled;
  }
  /** @param string */
  public function setCacheBustingType($cacheBustingType)
  {
    $this->cacheBustingType = $cacheBustingType;
  }
  /** @return string */
  public function getCacheBustingType()
  {
    return $this->cacheBustingType;
  }
  /** @param string */
  public function setCountingMethod($countingMethod)
  {
    $this->countingMethod = $countingMethod;
  }
  /** @return string */
  public function getCountingMethod()
  {
    return $this->countingMethod;
  }
  /** @param FloodlightActivityDynamicTag[] */
  public function setDefaultTags($defaultTags)
  {
    $this->defaultTags = $defaultTags;
  }
  /** @return FloodlightActivityDynamicTag[] */
  public function getDefaultTags()
  {
    return $this->defaultTags;
  }
  /** @param string */
  public function setExpectedUrl($expectedUrl)
  {
    $this->expectedUrl = $expectedUrl;
  }
  /** @return string */
  public function getExpectedUrl()
  {
    return $this->expectedUrl;
  }
  /** @param string */
  public function setFloodlightActivityGroupId($floodlightActivityGroupId)
  {
    $this->floodlightActivityGroupId = $floodlightActivityGroupId;
  }
  /** @return string */
  public function getFloodlightActivityGroupId()
  {
    return $this->floodlightActivityGroupId;
  }
  /** @param string */
  public function setFloodlightActivityGroupName($floodlightActivityGroupName)
  {
    $this->floodlightActivityGroupName = $floodlightActivityGroupName;
  }
  /** @return string */
  public function getFloodlightActivityGroupName()
  {
    return $this->floodlightActivityGroupName;
  }
  /** @param string */
  public function setFloodlightActivityGroupTagString($floodlightActivityGroupTagString)
  {
    $this->floodlightActivityGroupTagString = $floodlightActivityGroupTagString;
  }
  /** @return string */
  public function getFloodlightActivityGroupTagString()
  {
    return $this->floodlightActivityGroupTagString;
  }
  /** @param string */
  public function setFloodlightActivityGroupType($floodlightActivityGroupType)
  {
    $this->floodlightActivityGroupType = $floodlightActivityGroupType;
  }
  /** @return string */
  public function getFloodlightActivityGroupType()
  {
    return $this->floodlightActivityGroupType;
  }
  /** @param string */
  public function setFloodlightConfigurationId($floodlightConfigurationId)
  {
    $this->floodlightConfigurationId = $floodlightConfigurationId;
  }
  /** @return string */
  public function getFloodlightConfigurationId()
  {
    return $this->floodlightConfigurationId;
  }
  /** @param DimensionValue */
  public function setFloodlightConfigurationIdDimensionValue(DimensionValue $floodlightConfigurationIdDimensionValue)
  {
    $this->floodlightConfigurationIdDimensionValue = $floodlightConfigurationIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getFloodlightConfigurationIdDimensionValue()
  {
    return $this->floodlightConfigurationIdDimensionValue;
  }
  /** @param string */
  public function setFloodlightTagType($floodlightTagType)
  {
    $this->floodlightTagType = $floodlightTagType;
  }
  /** @return string */
  public function getFloodlightTagType()
  {
    return $this->floodlightTagType;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
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
  /** @param string */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param FloodlightActivityPublisherDynamicTag[] */
  public function setPublisherTags($publisherTags)
  {
    $this->publisherTags = $publisherTags;
  }
  /** @return FloodlightActivityPublisherDynamicTag[] */
  public function getPublisherTags()
  {
    return $this->publisherTags;
  }
  /** @param bool */
  public function setSecure($secure)
  {
    $this->secure = $secure;
  }
  /** @return bool */
  public function getSecure()
  {
    return $this->secure;
  }
  /** @param bool */
  public function setSslCompliant($sslCompliant)
  {
    $this->sslCompliant = $sslCompliant;
  }
  /** @return bool */
  public function getSslCompliant()
  {
    return $this->sslCompliant;
  }
  /** @param bool */
  public function setSslRequired($sslRequired)
  {
    $this->sslRequired = $sslRequired;
  }
  /** @return bool */
  public function getSslRequired()
  {
    return $this->sslRequired;
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
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  /** @param string */
  public function setTagFormat($tagFormat)
  {
    $this->tagFormat = $tagFormat;
  }
  /** @return string */
  public function getTagFormat()
  {
    return $this->tagFormat;
  }
  /** @param string */
  public function setTagString($tagString)
  {
    $this->tagString = $tagString;
  }
  /** @return string */
  public function getTagString()
  {
    return $this->tagString;
  }
  /** @param string[] */
  public function setUserDefinedVariableTypes($userDefinedVariableTypes)
  {
    $this->userDefinedVariableTypes = $userDefinedVariableTypes;
  }
  /** @return string[] */
  public function getUserDefinedVariableTypes()
  {
    return $this->userDefinedVariableTypes;
  }
}

class FloodlightActivityDynamicTag extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $tag;

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

class FloodlightActivityGroup extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var string */
  public $floodlightConfigurationId;
  /** @var DimensionValue */
  public $floodlightConfigurationIdDimensionValue;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $tagString;
  /** @var string */
  public $type;
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
  protected $floodlightConfigurationIdDimensionValueType = DimensionValue::class;
  protected $floodlightConfigurationIdDimensionValueDataType = '';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  /** @param string */
  public function setFloodlightConfigurationId($floodlightConfigurationId)
  {
    $this->floodlightConfigurationId = $floodlightConfigurationId;
  }
  /** @return string */
  public function getFloodlightConfigurationId()
  {
    return $this->floodlightConfigurationId;
  }
  /** @param DimensionValue */
  public function setFloodlightConfigurationIdDimensionValue(DimensionValue $floodlightConfigurationIdDimensionValue)
  {
    $this->floodlightConfigurationIdDimensionValue = $floodlightConfigurationIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getFloodlightConfigurationIdDimensionValue()
  {
    return $this->floodlightConfigurationIdDimensionValue;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
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
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  /** @param string */
  public function setTagString($tagString)
  {
    $this->tagString = $tagString;
  }
  /** @return string */
  public function getTagString()
  {
    return $this->tagString;
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

class FloodlightActivityGroupsListResponse extends \Google\Collection
{
  /** @var FloodlightActivityGroup[] */
  public $floodlightActivityGroups;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'floodlightActivityGroups';
  protected $floodlightActivityGroupsType = FloodlightActivityGroup::class;
  protected $floodlightActivityGroupsDataType = 'array';
  /** @param FloodlightActivityGroup[] */
  public function setFloodlightActivityGroups($floodlightActivityGroups)
  {
    $this->floodlightActivityGroups = $floodlightActivityGroups;
  }
  /** @return FloodlightActivityGroup[] */
  public function getFloodlightActivityGroups()
  {
    return $this->floodlightActivityGroups;
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

class FloodlightActivityPublisherDynamicTag extends \Google\Model
{
  /** @var bool */
  public $clickThrough;
  /** @var string */
  public $directorySiteId;
  /** @var FloodlightActivityDynamicTag */
  public $dynamicTag;
  /** @var string */
  public $siteId;
  /** @var DimensionValue */
  public $siteIdDimensionValue;
  /** @var bool */
  public $viewThrough;
  protected $dynamicTagType = FloodlightActivityDynamicTag::class;
  protected $dynamicTagDataType = '';
  protected $siteIdDimensionValueType = DimensionValue::class;
  protected $siteIdDimensionValueDataType = '';
  /** @param bool */
  public function setClickThrough($clickThrough)
  {
    $this->clickThrough = $clickThrough;
  }
  /** @return bool */
  public function getClickThrough()
  {
    return $this->clickThrough;
  }
  /** @param string */
  public function setDirectorySiteId($directorySiteId)
  {
    $this->directorySiteId = $directorySiteId;
  }
  /** @return string */
  public function getDirectorySiteId()
  {
    return $this->directorySiteId;
  }
  /** @param FloodlightActivityDynamicTag */
  public function setDynamicTag(FloodlightActivityDynamicTag $dynamicTag)
  {
    $this->dynamicTag = $dynamicTag;
  }
  /** @return FloodlightActivityDynamicTag */
  public function getDynamicTag()
  {
    return $this->dynamicTag;
  }
  /** @param string */
  public function setSiteId($siteId)
  {
    $this->siteId = $siteId;
  }
  /** @return string */
  public function getSiteId()
  {
    return $this->siteId;
  }
  /** @param DimensionValue */
  public function setSiteIdDimensionValue(DimensionValue $siteIdDimensionValue)
  {
    $this->siteIdDimensionValue = $siteIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getSiteIdDimensionValue()
  {
    return $this->siteIdDimensionValue;
  }
  /** @param bool */
  public function setViewThrough($viewThrough)
  {
    $this->viewThrough = $viewThrough;
  }
  /** @return bool */
  public function getViewThrough()
  {
    return $this->viewThrough;
  }
}

class FloodlightConfiguration extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var bool */
  public $analyticsDataSharingEnabled;
  /** @var CustomViewabilityMetric */
  public $customViewabilityMetric;
  /** @var bool */
  public $exposureToConversionEnabled;
  /** @var string */
  public $firstDayOfWeek;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var bool */
  public $inAppAttributionTrackingEnabled;
  /** @var string */
  public $kind;
  /** @var LookbackConfiguration */
  public $lookbackConfiguration;
  /** @var string */
  public $naturalSearchConversionAttributionOption;
  /** @var OmnitureSettings */
  public $omnitureSettings;
  /** @var string */
  public $subaccountId;
  /** @var TagSettings */
  public $tagSettings;
  /** @var ThirdPartyAuthenticationToken[] */
  public $thirdPartyAuthenticationTokens;
  /** @var UserDefinedVariableConfiguration[] */
  public $userDefinedVariableConfigurations;
  protected $collection_key = 'userDefinedVariableConfigurations';
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
  protected $customViewabilityMetricType = CustomViewabilityMetric::class;
  protected $customViewabilityMetricDataType = '';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $lookbackConfigurationType = LookbackConfiguration::class;
  protected $lookbackConfigurationDataType = '';
  protected $omnitureSettingsType = OmnitureSettings::class;
  protected $omnitureSettingsDataType = '';
  protected $tagSettingsType = TagSettings::class;
  protected $tagSettingsDataType = '';
  protected $thirdPartyAuthenticationTokensType = ThirdPartyAuthenticationToken::class;
  protected $thirdPartyAuthenticationTokensDataType = 'array';
  protected $userDefinedVariableConfigurationsType = UserDefinedVariableConfiguration::class;
  protected $userDefinedVariableConfigurationsDataType = 'array';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  /** @param bool */
  public function setAnalyticsDataSharingEnabled($analyticsDataSharingEnabled)
  {
    $this->analyticsDataSharingEnabled = $analyticsDataSharingEnabled;
  }
  /** @return bool */
  public function getAnalyticsDataSharingEnabled()
  {
    return $this->analyticsDataSharingEnabled;
  }
  /** @param CustomViewabilityMetric */
  public function setCustomViewabilityMetric(CustomViewabilityMetric $customViewabilityMetric)
  {
    $this->customViewabilityMetric = $customViewabilityMetric;
  }
  /** @return CustomViewabilityMetric */
  public function getCustomViewabilityMetric()
  {
    return $this->customViewabilityMetric;
  }
  /** @param bool */
  public function setExposureToConversionEnabled($exposureToConversionEnabled)
  {
    $this->exposureToConversionEnabled = $exposureToConversionEnabled;
  }
  /** @return bool */
  public function getExposureToConversionEnabled()
  {
    return $this->exposureToConversionEnabled;
  }
  /** @param string */
  public function setFirstDayOfWeek($firstDayOfWeek)
  {
    $this->firstDayOfWeek = $firstDayOfWeek;
  }
  /** @return string */
  public function getFirstDayOfWeek()
  {
    return $this->firstDayOfWeek;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
  }
  /** @param bool */
  public function setInAppAttributionTrackingEnabled($inAppAttributionTrackingEnabled)
  {
    $this->inAppAttributionTrackingEnabled = $inAppAttributionTrackingEnabled;
  }
  /** @return bool */
  public function getInAppAttributionTrackingEnabled()
  {
    return $this->inAppAttributionTrackingEnabled;
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
  /** @param LookbackConfiguration */
  public function setLookbackConfiguration(LookbackConfiguration $lookbackConfiguration)
  {
    $this->lookbackConfiguration = $lookbackConfiguration;
  }
  /** @return LookbackConfiguration */
  public function getLookbackConfiguration()
  {
    return $this->lookbackConfiguration;
  }
  /** @param string */
  public function setNaturalSearchConversionAttributionOption($naturalSearchConversionAttributionOption)
  {
    $this->naturalSearchConversionAttributionOption = $naturalSearchConversionAttributionOption;
  }
  /** @return string */
  public function getNaturalSearchConversionAttributionOption()
  {
    return $this->naturalSearchConversionAttributionOption;
  }
  /** @param OmnitureSettings */
  public function setOmnitureSettings(OmnitureSettings $omnitureSettings)
  {
    $this->omnitureSettings = $omnitureSettings;
  }
  /** @return OmnitureSettings */
  public function getOmnitureSettings()
  {
    return $this->omnitureSettings;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  /** @param TagSettings */
  public function setTagSettings(TagSettings $tagSettings)
  {
    $this->tagSettings = $tagSettings;
  }
  /** @return TagSettings */
  public function getTagSettings()
  {
    return $this->tagSettings;
  }
  /** @param ThirdPartyAuthenticationToken[] */
  public function setThirdPartyAuthenticationTokens($thirdPartyAuthenticationTokens)
  {
    $this->thirdPartyAuthenticationTokens = $thirdPartyAuthenticationTokens;
  }
  /** @return ThirdPartyAuthenticationToken[] */
  public function getThirdPartyAuthenticationTokens()
  {
    return $this->thirdPartyAuthenticationTokens;
  }
  /** @param UserDefinedVariableConfiguration[] */
  public function setUserDefinedVariableConfigurations($userDefinedVariableConfigurations)
  {
    $this->userDefinedVariableConfigurations = $userDefinedVariableConfigurations;
  }
  /** @return UserDefinedVariableConfiguration[] */
  public function getUserDefinedVariableConfigurations()
  {
    return $this->userDefinedVariableConfigurations;
  }
}

class FloodlightConfigurationsListResponse extends \Google\Collection
{
  /** @var FloodlightConfiguration[] */
  public $floodlightConfigurations;
  /** @var string */
  public $kind;
  protected $collection_key = 'floodlightConfigurations';
  protected $floodlightConfigurationsType = FloodlightConfiguration::class;
  protected $floodlightConfigurationsDataType = 'array';
  /** @param FloodlightConfiguration[] */
  public function setFloodlightConfigurations($floodlightConfigurations)
  {
    $this->floodlightConfigurations = $floodlightConfigurations;
  }
  /** @return FloodlightConfiguration[] */
  public function getFloodlightConfigurations()
  {
    return $this->floodlightConfigurations;
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

class FloodlightReportCompatibleFields extends \Google\Collection
{
  /** @var Dimension[] */
  public $dimensionFilters;
  /** @var Dimension[] */
  public $dimensions;
  /** @var string */
  public $kind;
  /** @var Metric[] */
  public $metrics;
  protected $collection_key = 'metrics';
  protected $dimensionFiltersType = Dimension::class;
  protected $dimensionFiltersDataType = 'array';
  protected $dimensionsType = Dimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  /** @param Dimension[] */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /** @return Dimension[] */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  /** @param Dimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
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
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
}

class FrequencyCap extends \Google\Model
{
  /** @var string */
  public $duration;
  /** @var string */
  public $impressions;

  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
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
}

class FsCommand extends \Google\Model
{
  /** @var int */
  public $left;
  /** @var string */
  public $positionOption;
  /** @var int */
  public $top;
  /** @var int */
  public $windowHeight;
  /** @var int */
  public $windowWidth;

  /** @param int */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /** @return int */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param string */
  public function setPositionOption($positionOption)
  {
    $this->positionOption = $positionOption;
  }
  /** @return string */
  public function getPositionOption()
  {
    return $this->positionOption;
  }
  /** @param int */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /** @return int */
  public function getTop()
  {
    return $this->top;
  }
  /** @param int */
  public function setWindowHeight($windowHeight)
  {
    $this->windowHeight = $windowHeight;
  }
  /** @return int */
  public function getWindowHeight()
  {
    return $this->windowHeight;
  }
  /** @param int */
  public function setWindowWidth($windowWidth)
  {
    $this->windowWidth = $windowWidth;
  }
  /** @return int */
  public function getWindowWidth()
  {
    return $this->windowWidth;
  }
}

class GeoTargeting extends \Google\Collection
{
  /** @var City[] */
  public $cities;
  /** @var Country[] */
  public $countries;
  /** @var bool */
  public $excludeCountries;
  /** @var Metro[] */
  public $metros;
  /** @var PostalCode[] */
  public $postalCodes;
  /** @var Region[] */
  public $regions;
  protected $collection_key = 'regions';
  protected $citiesType = City::class;
  protected $citiesDataType = 'array';
  protected $countriesType = Country::class;
  protected $countriesDataType = 'array';
  protected $metrosType = Metro::class;
  protected $metrosDataType = 'array';
  protected $postalCodesType = PostalCode::class;
  protected $postalCodesDataType = 'array';
  protected $regionsType = Region::class;
  protected $regionsDataType = 'array';
  /** @param City[] */
  public function setCities($cities)
  {
    $this->cities = $cities;
  }
  /** @return City[] */
  public function getCities()
  {
    return $this->cities;
  }
  /** @param Country[] */
  public function setCountries($countries)
  {
    $this->countries = $countries;
  }
  /** @return Country[] */
  public function getCountries()
  {
    return $this->countries;
  }
  /** @param bool */
  public function setExcludeCountries($excludeCountries)
  {
    $this->excludeCountries = $excludeCountries;
  }
  /** @return bool */
  public function getExcludeCountries()
  {
    return $this->excludeCountries;
  }
  /** @param Metro[] */
  public function setMetros($metros)
  {
    $this->metros = $metros;
  }
  /** @return Metro[] */
  public function getMetros()
  {
    return $this->metros;
  }
  /** @param PostalCode[] */
  public function setPostalCodes($postalCodes)
  {
    $this->postalCodes = $postalCodes;
  }
  /** @return PostalCode[] */
  public function getPostalCodes()
  {
    return $this->postalCodes;
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

class InventoryItem extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var AdSlot[] */
  public $adSlots;
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $contentCategoryId;
  /** @var string */
  public $estimatedClickThroughRate;
  /** @var string */
  public $estimatedConversionRate;
  /** @var string */
  public $id;
  /** @var bool */
  public $inPlan;
  /** @var string */
  public $kind;
  /** @var LastModifiedInfo */
  public $lastModifiedInfo;
  /** @var string */
  public $name;
  /** @var string */
  public $negotiationChannelId;
  /** @var string */
  public $orderId;
  /** @var string */
  public $placementStrategyId;
  /** @var Pricing */
  public $pricing;
  /** @var string */
  public $projectId;
  /** @var string */
  public $rfpId;
  /** @var string */
  public $siteId;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $type;
  protected $collection_key = 'adSlots';
  protected $adSlotsType = AdSlot::class;
  protected $adSlotsDataType = 'array';
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
  protected $pricingType = Pricing::class;
  protected $pricingDataType = '';
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
  /** @param AdSlot[] */
  public function setAdSlots($adSlots)
  {
    $this->adSlots = $adSlots;
  }
  /** @return AdSlot[] */
  public function getAdSlots()
  {
    return $this->adSlots;
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
  /** @param string */
  public function setContentCategoryId($contentCategoryId)
  {
    $this->contentCategoryId = $contentCategoryId;
  }
  /** @return string */
  public function getContentCategoryId()
  {
    return $this->contentCategoryId;
  }
  /** @param string */
  public function setEstimatedClickThroughRate($estimatedClickThroughRate)
  {
    $this->estimatedClickThroughRate = $estimatedClickThroughRate;
  }
  /** @return string */
  public function getEstimatedClickThroughRate()
  {
    return $this->estimatedClickThroughRate;
  }
  /** @param string */
  public function setEstimatedConversionRate($estimatedConversionRate)
  {
    $this->estimatedConversionRate = $estimatedConversionRate;
  }
  /** @return string */
  public function getEstimatedConversionRate()
  {
    return $this->estimatedConversionRate;
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
  public function setInPlan($inPlan)
  {
    $this->inPlan = $inPlan;
  }
  /** @return bool */
  public function getInPlan()
  {
    return $this->inPlan;
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
  /** @param LastModifiedInfo */
  public function setLastModifiedInfo(LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  /** @return LastModifiedInfo */
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
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
  public function setNegotiationChannelId($negotiationChannelId)
  {
    $this->negotiationChannelId = $negotiationChannelId;
  }
  /** @return string */
  public function getNegotiationChannelId()
  {
    return $this->negotiationChannelId;
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
  public function setPlacementStrategyId($placementStrategyId)
  {
    $this->placementStrategyId = $placementStrategyId;
  }
  /** @return string */
  public function getPlacementStrategyId()
  {
    return $this->placementStrategyId;
  }
  /** @param Pricing */
  public function setPricing(Pricing $pricing)
  {
    $this->pricing = $pricing;
  }
  /** @return Pricing */
  public function getPricing()
  {
    return $this->pricing;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param string */
  public function setRfpId($rfpId)
  {
    $this->rfpId = $rfpId;
  }
  /** @return string */
  public function getRfpId()
  {
    return $this->rfpId;
  }
  /** @param string */
  public function setSiteId($siteId)
  {
    $this->siteId = $siteId;
  }
  /** @return string */
  public function getSiteId()
  {
    return $this->siteId;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
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

class InventoryItemsListResponse extends \Google\Collection
{
  /** @var InventoryItem[] */
  public $inventoryItems;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'inventoryItems';
  protected $inventoryItemsType = InventoryItem::class;
  protected $inventoryItemsDataType = 'array';
  /** @param InventoryItem[] */
  public function setInventoryItems($inventoryItems)
  {
    $this->inventoryItems = $inventoryItems;
  }
  /** @return InventoryItem[] */
  public function getInventoryItems()
  {
    return $this->inventoryItems;
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

class Invoice extends \Google\Collection
{
  /** @var CampaignSummary[] */
  public $campaignSummaries;
  /** @var string */
  public $correctedInvoiceId;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $dueDate;
  /** @var string */
  public $id;
  /** @var string */
  public $invoiceType;
  /** @var string */
  public $issueDate;
  /** @var string */
  public $kind;
  /** @var string */
  public $paymentsAccountId;
  /** @var string */
  public $paymentsProfileId;
  /** @var string */
  public $pdfUrl;
  /** @var string */
  public $purchaseOrderNumber;
  /** @var string[] */
  public $replacedInvoiceIds;
  /** @var string */
  public $serviceEndDate;
  /** @var string */
  public $serviceStartDate;
  /** @var string */
  public $subtotalAmountMicros;
  /** @var string */
  public $totalAmountMicros;
  /** @var string */
  public $totalTaxAmountMicros;
  protected $collection_key = 'replacedInvoiceIds';
  protected $internal_gapi_mappings = [
        "campaignSummaries" => "campaign_summaries",
  ];
  protected $campaignSummariesType = CampaignSummary::class;
  protected $campaignSummariesDataType = 'array';
  /** @param CampaignSummary[] */
  public function setCampaignSummaries($campaignSummaries)
  {
    $this->campaignSummaries = $campaignSummaries;
  }
  /** @return CampaignSummary[] */
  public function getCampaignSummaries()
  {
    return $this->campaignSummaries;
  }
  /** @param string */
  public function setCorrectedInvoiceId($correctedInvoiceId)
  {
    $this->correctedInvoiceId = $correctedInvoiceId;
  }
  /** @return string */
  public function getCorrectedInvoiceId()
  {
    return $this->correctedInvoiceId;
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
  public function setDueDate($dueDate)
  {
    $this->dueDate = $dueDate;
  }
  /** @return string */
  public function getDueDate()
  {
    return $this->dueDate;
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
  public function setInvoiceType($invoiceType)
  {
    $this->invoiceType = $invoiceType;
  }
  /** @return string */
  public function getInvoiceType()
  {
    return $this->invoiceType;
  }
  /** @param string */
  public function setIssueDate($issueDate)
  {
    $this->issueDate = $issueDate;
  }
  /** @return string */
  public function getIssueDate()
  {
    return $this->issueDate;
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
  public function setPaymentsAccountId($paymentsAccountId)
  {
    $this->paymentsAccountId = $paymentsAccountId;
  }
  /** @return string */
  public function getPaymentsAccountId()
  {
    return $this->paymentsAccountId;
  }
  /** @param string */
  public function setPaymentsProfileId($paymentsProfileId)
  {
    $this->paymentsProfileId = $paymentsProfileId;
  }
  /** @return string */
  public function getPaymentsProfileId()
  {
    return $this->paymentsProfileId;
  }
  /** @param string */
  public function setPdfUrl($pdfUrl)
  {
    $this->pdfUrl = $pdfUrl;
  }
  /** @return string */
  public function getPdfUrl()
  {
    return $this->pdfUrl;
  }
  /** @param string */
  public function setPurchaseOrderNumber($purchaseOrderNumber)
  {
    $this->purchaseOrderNumber = $purchaseOrderNumber;
  }
  /** @return string */
  public function getPurchaseOrderNumber()
  {
    return $this->purchaseOrderNumber;
  }
  /** @param string[] */
  public function setReplacedInvoiceIds($replacedInvoiceIds)
  {
    $this->replacedInvoiceIds = $replacedInvoiceIds;
  }
  /** @return string[] */
  public function getReplacedInvoiceIds()
  {
    return $this->replacedInvoiceIds;
  }
  /** @param string */
  public function setServiceEndDate($serviceEndDate)
  {
    $this->serviceEndDate = $serviceEndDate;
  }
  /** @return string */
  public function getServiceEndDate()
  {
    return $this->serviceEndDate;
  }
  /** @param string */
  public function setServiceStartDate($serviceStartDate)
  {
    $this->serviceStartDate = $serviceStartDate;
  }
  /** @return string */
  public function getServiceStartDate()
  {
    return $this->serviceStartDate;
  }
  /** @param string */
  public function setSubtotalAmountMicros($subtotalAmountMicros)
  {
    $this->subtotalAmountMicros = $subtotalAmountMicros;
  }
  /** @return string */
  public function getSubtotalAmountMicros()
  {
    return $this->subtotalAmountMicros;
  }
  /** @param string */
  public function setTotalAmountMicros($totalAmountMicros)
  {
    $this->totalAmountMicros = $totalAmountMicros;
  }
  /** @return string */
  public function getTotalAmountMicros()
  {
    return $this->totalAmountMicros;
  }
  /** @param string */
  public function setTotalTaxAmountMicros($totalTaxAmountMicros)
  {
    $this->totalTaxAmountMicros = $totalTaxAmountMicros;
  }
  /** @return string */
  public function getTotalTaxAmountMicros()
  {
    return $this->totalTaxAmountMicros;
  }
}

class KeyValueTargetingExpression extends \Google\Model
{
  /** @var string */
  public $expression;

  /** @param string */
  public function setExpression($expression)
  {
    $this->expression = $expression;
  }
  /** @return string */
  public function getExpression()
  {
    return $this->expression;
  }
}

class LandingPage extends \Google\Collection
{
  /** @var string */
  public $advertiserId;
  /** @var bool */
  public $archived;
  /** @var DeepLink[] */
  public $deepLinks;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $url;
  protected $collection_key = 'deepLinks';
  protected $deepLinksType = DeepLink::class;
  protected $deepLinksDataType = 'array';
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
  public function setArchived($archived)
  {
    $this->archived = $archived;
  }
  /** @return bool */
  public function getArchived()
  {
    return $this->archived;
  }
  /** @param DeepLink[] */
  public function setDeepLinks($deepLinks)
  {
    $this->deepLinks = $deepLinks;
  }
  /** @return DeepLink[] */
  public function getDeepLinks()
  {
    return $this->deepLinks;
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

class Language extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $name;

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
}

class LanguageTargeting extends \Google\Collection
{
  /** @var Language[] */
  public $languages;
  protected $collection_key = 'languages';
  protected $languagesType = Language::class;
  protected $languagesDataType = 'array';
  /** @param Language[] */
  public function setLanguages($languages)
  {
    $this->languages = $languages;
  }
  /** @return Language[] */
  public function getLanguages()
  {
    return $this->languages;
  }
}

class LanguagesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var Language[] */
  public $languages;
  protected $collection_key = 'languages';
  protected $languagesType = Language::class;
  protected $languagesDataType = 'array';
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
  /** @param Language[] */
  public function setLanguages($languages)
  {
    $this->languages = $languages;
  }
  /** @return Language[] */
  public function getLanguages()
  {
    return $this->languages;
  }
}

class LastModifiedInfo extends \Google\Model
{
  /** @var string */
  public $time;

  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
  }
}

class ListPopulationClause extends \Google\Collection
{
  /** @var ListPopulationTerm[] */
  public $terms;
  protected $collection_key = 'terms';
  protected $termsType = ListPopulationTerm::class;
  protected $termsDataType = 'array';
  /** @param ListPopulationTerm[] */
  public function setTerms($terms)
  {
    $this->terms = $terms;
  }
  /** @return ListPopulationTerm[] */
  public function getTerms()
  {
    return $this->terms;
  }
}

class ListPopulationRule extends \Google\Collection
{
  /** @var string */
  public $floodlightActivityId;
  /** @var string */
  public $floodlightActivityName;
  /** @var ListPopulationClause[] */
  public $listPopulationClauses;
  protected $collection_key = 'listPopulationClauses';
  protected $listPopulationClausesType = ListPopulationClause::class;
  protected $listPopulationClausesDataType = 'array';
  /** @param string */
  public function setFloodlightActivityId($floodlightActivityId)
  {
    $this->floodlightActivityId = $floodlightActivityId;
  }
  /** @return string */
  public function getFloodlightActivityId()
  {
    return $this->floodlightActivityId;
  }
  /** @param string */
  public function setFloodlightActivityName($floodlightActivityName)
  {
    $this->floodlightActivityName = $floodlightActivityName;
  }
  /** @return string */
  public function getFloodlightActivityName()
  {
    return $this->floodlightActivityName;
  }
  /** @param ListPopulationClause[] */
  public function setListPopulationClauses($listPopulationClauses)
  {
    $this->listPopulationClauses = $listPopulationClauses;
  }
  /** @return ListPopulationClause[] */
  public function getListPopulationClauses()
  {
    return $this->listPopulationClauses;
  }
}

class ListPopulationTerm extends \Google\Model
{
  /** @var bool */
  public $contains;
  /** @var bool */
  public $negation;
  /** @var string */
  public $operator;
  /** @var string */
  public $remarketingListId;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  /** @var string */
  public $variableFriendlyName;
  /** @var string */
  public $variableName;

  /** @param bool */
  public function setContains($contains)
  {
    $this->contains = $contains;
  }
  /** @return bool */
  public function getContains()
  {
    return $this->contains;
  }
  /** @param bool */
  public function setNegation($negation)
  {
    $this->negation = $negation;
  }
  /** @return bool */
  public function getNegation()
  {
    return $this->negation;
  }
  /** @param string */
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /** @return string */
  public function getOperator()
  {
    return $this->operator;
  }
  /** @param string */
  public function setRemarketingListId($remarketingListId)
  {
    $this->remarketingListId = $remarketingListId;
  }
  /** @return string */
  public function getRemarketingListId()
  {
    return $this->remarketingListId;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
  /** @param string */
  public function setVariableFriendlyName($variableFriendlyName)
  {
    $this->variableFriendlyName = $variableFriendlyName;
  }
  /** @return string */
  public function getVariableFriendlyName()
  {
    return $this->variableFriendlyName;
  }
  /** @param string */
  public function setVariableName($variableName)
  {
    $this->variableName = $variableName;
  }
  /** @return string */
  public function getVariableName()
  {
    return $this->variableName;
  }
}

class ListTargetingExpression extends \Google\Model
{
  /** @var string */
  public $expression;

  /** @param string */
  public function setExpression($expression)
  {
    $this->expression = $expression;
  }
  /** @return string */
  public function getExpression()
  {
    return $this->expression;
  }
}

class LookbackConfiguration extends \Google\Model
{
  /** @var int */
  public $clickDuration;
  /** @var int */
  public $postImpressionActivitiesDuration;

  /** @param int */
  public function setClickDuration($clickDuration)
  {
    $this->clickDuration = $clickDuration;
  }
  /** @return int */
  public function getClickDuration()
  {
    return $this->clickDuration;
  }
  /** @param int */
  public function setPostImpressionActivitiesDuration($postImpressionActivitiesDuration)
  {
    $this->postImpressionActivitiesDuration = $postImpressionActivitiesDuration;
  }
  /** @return int */
  public function getPostImpressionActivitiesDuration()
  {
    return $this->postImpressionActivitiesDuration;
  }
}

class MeasurementPartnerAdvertiserLink extends \Google\Model
{
  /** @var string */
  public $linkStatus;
  /** @var string */
  public $measurementPartner;
  /** @var string */
  public $partnerAdvertiserId;

  /** @param string */
  public function setLinkStatus($linkStatus)
  {
    $this->linkStatus = $linkStatus;
  }
  /** @return string */
  public function getLinkStatus()
  {
    return $this->linkStatus;
  }
  /** @param string */
  public function setMeasurementPartner($measurementPartner)
  {
    $this->measurementPartner = $measurementPartner;
  }
  /** @return string */
  public function getMeasurementPartner()
  {
    return $this->measurementPartner;
  }
  /** @param string */
  public function setPartnerAdvertiserId($partnerAdvertiserId)
  {
    $this->partnerAdvertiserId = $partnerAdvertiserId;
  }
  /** @return string */
  public function getPartnerAdvertiserId()
  {
    return $this->partnerAdvertiserId;
  }
}

class MeasurementPartnerCampaignLink extends \Google\Model
{
  /** @var string */
  public $linkStatus;
  /** @var string */
  public $measurementPartner;
  /** @var string */
  public $partnerCampaignId;

  /** @param string */
  public function setLinkStatus($linkStatus)
  {
    $this->linkStatus = $linkStatus;
  }
  /** @return string */
  public function getLinkStatus()
  {
    return $this->linkStatus;
  }
  /** @param string */
  public function setMeasurementPartner($measurementPartner)
  {
    $this->measurementPartner = $measurementPartner;
  }
  /** @return string */
  public function getMeasurementPartner()
  {
    return $this->measurementPartner;
  }
  /** @param string */
  public function setPartnerCampaignId($partnerCampaignId)
  {
    $this->partnerCampaignId = $partnerCampaignId;
  }
  /** @return string */
  public function getPartnerCampaignId()
  {
    return $this->partnerCampaignId;
  }
}

class MeasurementPartnerWrappingData extends \Google\Model
{
  /** @var string */
  public $linkStatus;
  /** @var string */
  public $measurementPartner;
  /** @var string */
  public $tagWrappingMode;
  /** @var string */
  public $wrappedTag;

  /** @param string */
  public function setLinkStatus($linkStatus)
  {
    $this->linkStatus = $linkStatus;
  }
  /** @return string */
  public function getLinkStatus()
  {
    return $this->linkStatus;
  }
  /** @param string */
  public function setMeasurementPartner($measurementPartner)
  {
    $this->measurementPartner = $measurementPartner;
  }
  /** @return string */
  public function getMeasurementPartner()
  {
    return $this->measurementPartner;
  }
  /** @param string */
  public function setTagWrappingMode($tagWrappingMode)
  {
    $this->tagWrappingMode = $tagWrappingMode;
  }
  /** @return string */
  public function getTagWrappingMode()
  {
    return $this->tagWrappingMode;
  }
  /** @param string */
  public function setWrappedTag($wrappedTag)
  {
    $this->wrappedTag = $wrappedTag;
  }
  /** @return string */
  public function getWrappedTag()
  {
    return $this->wrappedTag;
  }
}

class Metric extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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
}

class Metro extends \Google\Model
{
  /** @var string */
  public $countryCode;
  /** @var string */
  public $countryDartId;
  /** @var string */
  public $dartId;
  /** @var string */
  public $dmaId;
  /** @var string */
  public $kind;
  /** @var string */
  public $metroCode;
  /** @var string */
  public $name;

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
  public function setCountryDartId($countryDartId)
  {
    $this->countryDartId = $countryDartId;
  }
  /** @return string */
  public function getCountryDartId()
  {
    return $this->countryDartId;
  }
  /** @param string */
  public function setDartId($dartId)
  {
    $this->dartId = $dartId;
  }
  /** @return string */
  public function getDartId()
  {
    return $this->dartId;
  }
  /** @param string */
  public function setDmaId($dmaId)
  {
    $this->dmaId = $dmaId;
  }
  /** @return string */
  public function getDmaId()
  {
    return $this->dmaId;
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
  public function setMetroCode($metroCode)
  {
    $this->metroCode = $metroCode;
  }
  /** @return string */
  public function getMetroCode()
  {
    return $this->metroCode;
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

class MetrosListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var Metro[] */
  public $metros;
  protected $collection_key = 'metros';
  protected $metrosType = Metro::class;
  protected $metrosDataType = 'array';
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
  /** @param Metro[] */
  public function setMetros($metros)
  {
    $this->metros = $metros;
  }
  /** @return Metro[] */
  public function getMetros()
  {
    return $this->metros;
  }
}

class MobileApp extends \Google\Model
{
  /** @var string */
  public $directory;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $publisherName;
  /** @var string */
  public $title;

  /** @param string */
  public function setDirectory($directory)
  {
    $this->directory = $directory;
  }
  /** @return string */
  public function getDirectory()
  {
    return $this->directory;
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
  public function setPublisherName($publisherName)
  {
    $this->publisherName = $publisherName;
  }
  /** @return string */
  public function getPublisherName()
  {
    return $this->publisherName;
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

class MobileAppsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var MobileApp[] */
  public $mobileApps;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'mobileApps';
  protected $mobileAppsType = MobileApp::class;
  protected $mobileAppsDataType = 'array';
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
  /** @param MobileApp[] */
  public function setMobileApps($mobileApps)
  {
    $this->mobileApps = $mobileApps;
  }
  /** @return MobileApp[] */
  public function getMobileApps()
  {
    return $this->mobileApps;
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

class MobileCarrier extends \Google\Model
{
  /** @var string */
  public $countryCode;
  /** @var string */
  public $countryDartId;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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
  public function setCountryDartId($countryDartId)
  {
    $this->countryDartId = $countryDartId;
  }
  /** @return string */
  public function getCountryDartId()
  {
    return $this->countryDartId;
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
}

class MobileCarriersListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var MobileCarrier[] */
  public $mobileCarriers;
  protected $collection_key = 'mobileCarriers';
  protected $mobileCarriersType = MobileCarrier::class;
  protected $mobileCarriersDataType = 'array';
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
  /** @param MobileCarrier[] */
  public function setMobileCarriers($mobileCarriers)
  {
    $this->mobileCarriers = $mobileCarriers;
  }
  /** @return MobileCarrier[] */
  public function getMobileCarriers()
  {
    return $this->mobileCarriers;
  }
}

class ObaIcon extends \Google\Model
{
  /** @var string */
  public $iconClickThroughUrl;
  /** @var string */
  public $iconClickTrackingUrl;
  /** @var string */
  public $iconViewTrackingUrl;
  /** @var string */
  public $program;
  /** @var string */
  public $resourceUrl;
  /** @var Size */
  public $size;
  /** @var string */
  public $xPosition;
  /** @var string */
  public $yPosition;
  protected $sizeType = Size::class;
  protected $sizeDataType = '';
  /** @param string */
  public function setIconClickThroughUrl($iconClickThroughUrl)
  {
    $this->iconClickThroughUrl = $iconClickThroughUrl;
  }
  /** @return string */
  public function getIconClickThroughUrl()
  {
    return $this->iconClickThroughUrl;
  }
  /** @param string */
  public function setIconClickTrackingUrl($iconClickTrackingUrl)
  {
    $this->iconClickTrackingUrl = $iconClickTrackingUrl;
  }
  /** @return string */
  public function getIconClickTrackingUrl()
  {
    return $this->iconClickTrackingUrl;
  }
  /** @param string */
  public function setIconViewTrackingUrl($iconViewTrackingUrl)
  {
    $this->iconViewTrackingUrl = $iconViewTrackingUrl;
  }
  /** @return string */
  public function getIconViewTrackingUrl()
  {
    return $this->iconViewTrackingUrl;
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
  public function setResourceUrl($resourceUrl)
  {
    $this->resourceUrl = $resourceUrl;
  }
  /** @return string */
  public function getResourceUrl()
  {
    return $this->resourceUrl;
  }
  /** @param Size */
  public function setSize(Size $size)
  {
    $this->size = $size;
  }
  /** @return Size */
  public function getSize()
  {
    return $this->size;
  }
  /** @param string */
  public function setXPosition($xPosition)
  {
    $this->xPosition = $xPosition;
  }
  /** @return string */
  public function getXPosition()
  {
    return $this->xPosition;
  }
  /** @param string */
  public function setYPosition($yPosition)
  {
    $this->yPosition = $yPosition;
  }
  /** @return string */
  public function getYPosition()
  {
    return $this->yPosition;
  }
}

class ObjectFilter extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string[] */
  public $objectIds;
  /** @var string */
  public $status;
  protected $collection_key = 'objectIds';
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
  public function setObjectIds($objectIds)
  {
    $this->objectIds = $objectIds;
  }
  /** @return string[] */
  public function getObjectIds()
  {
    return $this->objectIds;
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

class OffsetPosition extends \Google\Model
{
  /** @var int */
  public $left;
  /** @var int */
  public $top;

  /** @param int */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /** @return int */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param int */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /** @return int */
  public function getTop()
  {
    return $this->top;
  }
}

class OmnitureSettings extends \Google\Model
{
  /** @var bool */
  public $omnitureCostDataEnabled;
  /** @var bool */
  public $omnitureIntegrationEnabled;

  /** @param bool */
  public function setOmnitureCostDataEnabled($omnitureCostDataEnabled)
  {
    $this->omnitureCostDataEnabled = $omnitureCostDataEnabled;
  }
  /** @return bool */
  public function getOmnitureCostDataEnabled()
  {
    return $this->omnitureCostDataEnabled;
  }
  /** @param bool */
  public function setOmnitureIntegrationEnabled($omnitureIntegrationEnabled)
  {
    $this->omnitureIntegrationEnabled = $omnitureIntegrationEnabled;
  }
  /** @return bool */
  public function getOmnitureIntegrationEnabled()
  {
    return $this->omnitureIntegrationEnabled;
  }
}

class OperatingSystem extends \Google\Model
{
  /** @var string */
  public $dartId;
  /** @var bool */
  public $desktop;
  /** @var string */
  public $kind;
  /** @var bool */
  public $mobile;
  /** @var string */
  public $name;

  /** @param string */
  public function setDartId($dartId)
  {
    $this->dartId = $dartId;
  }
  /** @return string */
  public function getDartId()
  {
    return $this->dartId;
  }
  /** @param bool */
  public function setDesktop($desktop)
  {
    $this->desktop = $desktop;
  }
  /** @return bool */
  public function getDesktop()
  {
    return $this->desktop;
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
  /** @param bool */
  public function setMobile($mobile)
  {
    $this->mobile = $mobile;
  }
  /** @return bool */
  public function getMobile()
  {
    return $this->mobile;
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

class OperatingSystemVersion extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $majorVersion;
  /** @var string */
  public $minorVersion;
  /** @var string */
  public $name;
  /** @var OperatingSystem */
  public $operatingSystem;
  protected $operatingSystemType = OperatingSystem::class;
  protected $operatingSystemDataType = '';
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
  public function setMajorVersion($majorVersion)
  {
    $this->majorVersion = $majorVersion;
  }
  /** @return string */
  public function getMajorVersion()
  {
    return $this->majorVersion;
  }
  /** @param string */
  public function setMinorVersion($minorVersion)
  {
    $this->minorVersion = $minorVersion;
  }
  /** @return string */
  public function getMinorVersion()
  {
    return $this->minorVersion;
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
  /** @param OperatingSystem */
  public function setOperatingSystem(OperatingSystem $operatingSystem)
  {
    $this->operatingSystem = $operatingSystem;
  }
  /** @return OperatingSystem */
  public function getOperatingSystem()
  {
    return $this->operatingSystem;
  }
}

class OperatingSystemVersionsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var OperatingSystemVersion[] */
  public $operatingSystemVersions;
  protected $collection_key = 'operatingSystemVersions';
  protected $operatingSystemVersionsType = OperatingSystemVersion::class;
  protected $operatingSystemVersionsDataType = 'array';
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
  /** @param OperatingSystemVersion[] */
  public function setOperatingSystemVersions($operatingSystemVersions)
  {
    $this->operatingSystemVersions = $operatingSystemVersions;
  }
  /** @return OperatingSystemVersion[] */
  public function getOperatingSystemVersions()
  {
    return $this->operatingSystemVersions;
  }
}

class OperatingSystemsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var OperatingSystem[] */
  public $operatingSystems;
  protected $collection_key = 'operatingSystems';
  protected $operatingSystemsType = OperatingSystem::class;
  protected $operatingSystemsDataType = 'array';
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
  /** @param OperatingSystem[] */
  public function setOperatingSystems($operatingSystems)
  {
    $this->operatingSystems = $operatingSystems;
  }
  /** @return OperatingSystem[] */
  public function getOperatingSystems()
  {
    return $this->operatingSystems;
  }
}

class OptimizationActivity extends \Google\Model
{
  /** @var string */
  public $floodlightActivityId;
  /** @var DimensionValue */
  public $floodlightActivityIdDimensionValue;
  /** @var int */
  public $weight;
  protected $floodlightActivityIdDimensionValueType = DimensionValue::class;
  protected $floodlightActivityIdDimensionValueDataType = '';
  /** @param string */
  public function setFloodlightActivityId($floodlightActivityId)
  {
    $this->floodlightActivityId = $floodlightActivityId;
  }
  /** @return string */
  public function getFloodlightActivityId()
  {
    return $this->floodlightActivityId;
  }
  /** @param DimensionValue */
  public function setFloodlightActivityIdDimensionValue(DimensionValue $floodlightActivityIdDimensionValue)
  {
    $this->floodlightActivityIdDimensionValue = $floodlightActivityIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getFloodlightActivityIdDimensionValue()
  {
    return $this->floodlightActivityIdDimensionValue;
  }
  /** @param int */
  public function setWeight($weight)
  {
    $this->weight = $weight;
  }
  /** @return int */
  public function getWeight()
  {
    return $this->weight;
  }
}

class Order extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var string[] */
  public $approverUserProfileIds;
  /** @var string */
  public $buyerInvoiceId;
  /** @var string */
  public $buyerOrganizationName;
  /** @var string */
  public $comments;
  /** @var OrderContact[] */
  public $contacts;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var LastModifiedInfo */
  public $lastModifiedInfo;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var string */
  public $planningTermId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $sellerOrderId;
  /** @var string */
  public $sellerOrganizationName;
  /** @var string[] */
  public $siteId;
  /** @var string[] */
  public $siteNames;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $termsAndConditions;
  protected $collection_key = 'siteNames';
  protected $contactsType = OrderContact::class;
  protected $contactsDataType = 'array';
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param string[] */
  public function setApproverUserProfileIds($approverUserProfileIds)
  {
    $this->approverUserProfileIds = $approverUserProfileIds;
  }
  /** @return string[] */
  public function getApproverUserProfileIds()
  {
    return $this->approverUserProfileIds;
  }
  /** @param string */
  public function setBuyerInvoiceId($buyerInvoiceId)
  {
    $this->buyerInvoiceId = $buyerInvoiceId;
  }
  /** @return string */
  public function getBuyerInvoiceId()
  {
    return $this->buyerInvoiceId;
  }
  /** @param string */
  public function setBuyerOrganizationName($buyerOrganizationName)
  {
    $this->buyerOrganizationName = $buyerOrganizationName;
  }
  /** @return string */
  public function getBuyerOrganizationName()
  {
    return $this->buyerOrganizationName;
  }
  /** @param string */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  /** @return string */
  public function getComments()
  {
    return $this->comments;
  }
  /** @param OrderContact[] */
  public function setContacts($contacts)
  {
    $this->contacts = $contacts;
  }
  /** @return OrderContact[] */
  public function getContacts()
  {
    return $this->contacts;
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
  /** @param LastModifiedInfo */
  public function setLastModifiedInfo(LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  /** @return LastModifiedInfo */
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param string */
  public function setPlanningTermId($planningTermId)
  {
    $this->planningTermId = $planningTermId;
  }
  /** @return string */
  public function getPlanningTermId()
  {
    return $this->planningTermId;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param string */
  public function setSellerOrderId($sellerOrderId)
  {
    $this->sellerOrderId = $sellerOrderId;
  }
  /** @return string */
  public function getSellerOrderId()
  {
    return $this->sellerOrderId;
  }
  /** @param string */
  public function setSellerOrganizationName($sellerOrganizationName)
  {
    $this->sellerOrganizationName = $sellerOrganizationName;
  }
  /** @return string */
  public function getSellerOrganizationName()
  {
    return $this->sellerOrganizationName;
  }
  /** @param string[] */
  public function setSiteId($siteId)
  {
    $this->siteId = $siteId;
  }
  /** @return string[] */
  public function getSiteId()
  {
    return $this->siteId;
  }
  /** @param string[] */
  public function setSiteNames($siteNames)
  {
    $this->siteNames = $siteNames;
  }
  /** @return string[] */
  public function getSiteNames()
  {
    return $this->siteNames;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
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
}

class OrderContact extends \Google\Model
{
  /** @var string */
  public $contactInfo;
  /** @var string */
  public $contactName;
  /** @var string */
  public $contactTitle;
  /** @var string */
  public $contactType;
  /** @var string */
  public $signatureUserProfileId;

  /** @param string */
  public function setContactInfo($contactInfo)
  {
    $this->contactInfo = $contactInfo;
  }
  /** @return string */
  public function getContactInfo()
  {
    return $this->contactInfo;
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
  public function setContactTitle($contactTitle)
  {
    $this->contactTitle = $contactTitle;
  }
  /** @return string */
  public function getContactTitle()
  {
    return $this->contactTitle;
  }
  /** @param string */
  public function setContactType($contactType)
  {
    $this->contactType = $contactType;
  }
  /** @return string */
  public function getContactType()
  {
    return $this->contactType;
  }
  /** @param string */
  public function setSignatureUserProfileId($signatureUserProfileId)
  {
    $this->signatureUserProfileId = $signatureUserProfileId;
  }
  /** @return string */
  public function getSignatureUserProfileId()
  {
    return $this->signatureUserProfileId;
  }
}

class OrderDocument extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $amendedOrderDocumentId;
  /** @var string[] */
  public $approvedByUserProfileIds;
  /** @var bool */
  public $cancelled;
  /** @var LastModifiedInfo */
  public $createdInfo;
  /** @var string */
  public $effectiveDate;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $lastSentRecipients;
  /** @var string */
  public $lastSentTime;
  /** @var string */
  public $orderId;
  /** @var string */
  public $projectId;
  /** @var bool */
  public $signed;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  protected $collection_key = 'lastSentRecipients';
  protected $createdInfoType = LastModifiedInfo::class;
  protected $createdInfoDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param string */
  public function setAmendedOrderDocumentId($amendedOrderDocumentId)
  {
    $this->amendedOrderDocumentId = $amendedOrderDocumentId;
  }
  /** @return string */
  public function getAmendedOrderDocumentId()
  {
    return $this->amendedOrderDocumentId;
  }
  /** @param string[] */
  public function setApprovedByUserProfileIds($approvedByUserProfileIds)
  {
    $this->approvedByUserProfileIds = $approvedByUserProfileIds;
  }
  /** @return string[] */
  public function getApprovedByUserProfileIds()
  {
    return $this->approvedByUserProfileIds;
  }
  /** @param bool */
  public function setCancelled($cancelled)
  {
    $this->cancelled = $cancelled;
  }
  /** @return bool */
  public function getCancelled()
  {
    return $this->cancelled;
  }
  /** @param LastModifiedInfo */
  public function setCreatedInfo(LastModifiedInfo $createdInfo)
  {
    $this->createdInfo = $createdInfo;
  }
  /** @return LastModifiedInfo */
  public function getCreatedInfo()
  {
    return $this->createdInfo;
  }
  /** @param string */
  public function setEffectiveDate($effectiveDate)
  {
    $this->effectiveDate = $effectiveDate;
  }
  /** @return string */
  public function getEffectiveDate()
  {
    return $this->effectiveDate;
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
  public function setLastSentRecipients($lastSentRecipients)
  {
    $this->lastSentRecipients = $lastSentRecipients;
  }
  /** @return string[] */
  public function getLastSentRecipients()
  {
    return $this->lastSentRecipients;
  }
  /** @param string */
  public function setLastSentTime($lastSentTime)
  {
    $this->lastSentTime = $lastSentTime;
  }
  /** @return string */
  public function getLastSentTime()
  {
    return $this->lastSentTime;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param bool */
  public function setSigned($signed)
  {
    $this->signed = $signed;
  }
  /** @return bool */
  public function getSigned()
  {
    return $this->signed;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
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

class OrderDocumentsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var OrderDocument[] */
  public $orderDocuments;
  protected $collection_key = 'orderDocuments';
  protected $orderDocumentsType = OrderDocument::class;
  protected $orderDocumentsDataType = 'array';
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
  /** @param OrderDocument[] */
  public function setOrderDocuments($orderDocuments)
  {
    $this->orderDocuments = $orderDocuments;
  }
  /** @return OrderDocument[] */
  public function getOrderDocuments()
  {
    return $this->orderDocuments;
  }
}

class OrdersListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Order[] */
  public $orders;
  protected $collection_key = 'orders';
  protected $ordersType = Order::class;
  protected $ordersDataType = 'array';
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
  public function setOrders($orders)
  {
    $this->orders = $orders;
  }
  /** @return Order[] */
  public function getOrders()
  {
    return $this->orders;
  }
}

class PathFilter extends \Google\Collection
{
  /** @var EventFilter[] */
  public $eventFilters;
  /** @var string */
  public $kind;
  /** @var string */
  public $pathMatchPosition;
  protected $collection_key = 'eventFilters';
  protected $eventFiltersType = EventFilter::class;
  protected $eventFiltersDataType = 'array';
  /** @param EventFilter[] */
  public function setEventFilters($eventFilters)
  {
    $this->eventFilters = $eventFilters;
  }
  /** @return EventFilter[] */
  public function getEventFilters()
  {
    return $this->eventFilters;
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
  public function setPathMatchPosition($pathMatchPosition)
  {
    $this->pathMatchPosition = $pathMatchPosition;
  }
  /** @return string */
  public function getPathMatchPosition()
  {
    return $this->pathMatchPosition;
  }
}

class PathReportCompatibleFields extends \Google\Collection
{
  /** @var Dimension[] */
  public $channelGroupings;
  /** @var Dimension[] */
  public $dimensions;
  /** @var string */
  public $kind;
  /** @var Metric[] */
  public $metrics;
  /** @var Dimension[] */
  public $pathFilters;
  protected $collection_key = 'pathFilters';
  protected $channelGroupingsType = Dimension::class;
  protected $channelGroupingsDataType = 'array';
  protected $dimensionsType = Dimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $pathFiltersType = Dimension::class;
  protected $pathFiltersDataType = 'array';
  /** @param Dimension[] */
  public function setChannelGroupings($channelGroupings)
  {
    $this->channelGroupings = $channelGroupings;
  }
  /** @return Dimension[] */
  public function getChannelGroupings()
  {
    return $this->channelGroupings;
  }
  /** @param Dimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
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
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param Dimension[] */
  public function setPathFilters($pathFilters)
  {
    $this->pathFilters = $pathFilters;
  }
  /** @return Dimension[] */
  public function getPathFilters()
  {
    return $this->pathFilters;
  }
}

class PathReportDimensionValue extends \Google\Collection
{
  /** @var string */
  public $dimensionName;
  /** @var string[] */
  public $ids;
  /** @var string */
  public $kind;
  /** @var string */
  public $matchType;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
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
  /** @param string[] */
  public function setIds($ids)
  {
    $this->ids = $ids;
  }
  /** @return string[] */
  public function getIds()
  {
    return $this->ids;
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
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /** @return string */
  public function getMatchType()
  {
    return $this->matchType;
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

class PathToConversionReportCompatibleFields extends \Google\Collection
{
  /** @var Dimension[] */
  public $conversionDimensions;
  /** @var Dimension[] */
  public $customFloodlightVariables;
  /** @var string */
  public $kind;
  /** @var Metric[] */
  public $metrics;
  /** @var Dimension[] */
  public $perInteractionDimensions;
  protected $collection_key = 'perInteractionDimensions';
  protected $conversionDimensionsType = Dimension::class;
  protected $conversionDimensionsDataType = 'array';
  protected $customFloodlightVariablesType = Dimension::class;
  protected $customFloodlightVariablesDataType = 'array';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $perInteractionDimensionsType = Dimension::class;
  protected $perInteractionDimensionsDataType = 'array';
  /** @param Dimension[] */
  public function setConversionDimensions($conversionDimensions)
  {
    $this->conversionDimensions = $conversionDimensions;
  }
  /** @return Dimension[] */
  public function getConversionDimensions()
  {
    return $this->conversionDimensions;
  }
  /** @param Dimension[] */
  public function setCustomFloodlightVariables($customFloodlightVariables)
  {
    $this->customFloodlightVariables = $customFloodlightVariables;
  }
  /** @return Dimension[] */
  public function getCustomFloodlightVariables()
  {
    return $this->customFloodlightVariables;
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
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param Dimension[] */
  public function setPerInteractionDimensions($perInteractionDimensions)
  {
    $this->perInteractionDimensions = $perInteractionDimensions;
  }
  /** @return Dimension[] */
  public function getPerInteractionDimensions()
  {
    return $this->perInteractionDimensions;
  }
}

class Placement extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $activeStatus;
  /** @var bool */
  public $adBlockingOptOut;
  /** @var Size[] */
  public $additionalSizes;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var string */
  public $campaignId;
  /** @var DimensionValue */
  public $campaignIdDimensionValue;
  /** @var string */
  public $comment;
  /** @var string */
  public $compatibility;
  /** @var string */
  public $contentCategoryId;
  /** @var LastModifiedInfo */
  public $createInfo;
  /** @var string */
  public $directorySiteId;
  /** @var DimensionValue */
  public $directorySiteIdDimensionValue;
  /** @var string */
  public $externalId;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var string */
  public $keyName;
  /** @var string */
  public $kind;
  /** @var LastModifiedInfo */
  public $lastModifiedInfo;
  /** @var LookbackConfiguration */
  public $lookbackConfiguration;
  /** @var string */
  public $name;
  /** @var MeasurementPartnerWrappingData */
  public $partnerWrappingData;
  /** @var bool */
  public $paymentApproved;
  /** @var string */
  public $paymentSource;
  /** @var string */
  public $placementGroupId;
  /** @var DimensionValue */
  public $placementGroupIdDimensionValue;
  /** @var string */
  public $placementStrategyId;
  /** @var PricingSchedule */
  public $pricingSchedule;
  /** @var bool */
  public $primary;
  /** @var LastModifiedInfo */
  public $publisherUpdateInfo;
  /** @var string */
  public $siteId;
  /** @var DimensionValue */
  public $siteIdDimensionValue;
  /** @var Size */
  public $size;
  /** @var bool */
  public $sslRequired;
  /** @var string */
  public $status;
  /** @var string */
  public $subaccountId;
  /** @var string[] */
  public $tagFormats;
  /** @var TagSetting */
  public $tagSetting;
  /** @var bool */
  public $videoActiveViewOptOut;
  /** @var VideoSettings */
  public $videoSettings;
  /** @var string */
  public $vpaidAdapterChoice;
  /** @var bool */
  public $wrappingOptOut;
  protected $collection_key = 'tagFormats';
  protected $additionalSizesType = Size::class;
  protected $additionalSizesDataType = 'array';
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
  protected $campaignIdDimensionValueType = DimensionValue::class;
  protected $campaignIdDimensionValueDataType = '';
  protected $createInfoType = LastModifiedInfo::class;
  protected $createInfoDataType = '';
  protected $directorySiteIdDimensionValueType = DimensionValue::class;
  protected $directorySiteIdDimensionValueDataType = '';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
  protected $lookbackConfigurationType = LookbackConfiguration::class;
  protected $lookbackConfigurationDataType = '';
  protected $partnerWrappingDataType = MeasurementPartnerWrappingData::class;
  protected $partnerWrappingDataDataType = '';
  protected $placementGroupIdDimensionValueType = DimensionValue::class;
  protected $placementGroupIdDimensionValueDataType = '';
  protected $pricingScheduleType = PricingSchedule::class;
  protected $pricingScheduleDataType = '';
  protected $publisherUpdateInfoType = LastModifiedInfo::class;
  protected $publisherUpdateInfoDataType = '';
  protected $siteIdDimensionValueType = DimensionValue::class;
  protected $siteIdDimensionValueDataType = '';
  protected $sizeType = Size::class;
  protected $sizeDataType = '';
  protected $tagSettingType = TagSetting::class;
  protected $tagSettingDataType = '';
  protected $videoSettingsType = VideoSettings::class;
  protected $videoSettingsDataType = '';
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
  public function setActiveStatus($activeStatus)
  {
    $this->activeStatus = $activeStatus;
  }
  /** @return string */
  public function getActiveStatus()
  {
    return $this->activeStatus;
  }
  /** @param bool */
  public function setAdBlockingOptOut($adBlockingOptOut)
  {
    $this->adBlockingOptOut = $adBlockingOptOut;
  }
  /** @return bool */
  public function getAdBlockingOptOut()
  {
    return $this->adBlockingOptOut;
  }
  /** @param Size[] */
  public function setAdditionalSizes($additionalSizes)
  {
    $this->additionalSizes = $additionalSizes;
  }
  /** @return Size[] */
  public function getAdditionalSizes()
  {
    return $this->additionalSizes;
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
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  /** @param string */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /** @return string */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /** @param DimensionValue */
  public function setCampaignIdDimensionValue(DimensionValue $campaignIdDimensionValue)
  {
    $this->campaignIdDimensionValue = $campaignIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getCampaignIdDimensionValue()
  {
    return $this->campaignIdDimensionValue;
  }
  /** @param string */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /** @return string */
  public function getComment()
  {
    return $this->comment;
  }
  /** @param string */
  public function setCompatibility($compatibility)
  {
    $this->compatibility = $compatibility;
  }
  /** @return string */
  public function getCompatibility()
  {
    return $this->compatibility;
  }
  /** @param string */
  public function setContentCategoryId($contentCategoryId)
  {
    $this->contentCategoryId = $contentCategoryId;
  }
  /** @return string */
  public function getContentCategoryId()
  {
    return $this->contentCategoryId;
  }
  /** @param LastModifiedInfo */
  public function setCreateInfo(LastModifiedInfo $createInfo)
  {
    $this->createInfo = $createInfo;
  }
  /** @return LastModifiedInfo */
  public function getCreateInfo()
  {
    return $this->createInfo;
  }
  /** @param string */
  public function setDirectorySiteId($directorySiteId)
  {
    $this->directorySiteId = $directorySiteId;
  }
  /** @return string */
  public function getDirectorySiteId()
  {
    return $this->directorySiteId;
  }
  /** @param DimensionValue */
  public function setDirectorySiteIdDimensionValue(DimensionValue $directorySiteIdDimensionValue)
  {
    $this->directorySiteIdDimensionValue = $directorySiteIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getDirectorySiteIdDimensionValue()
  {
    return $this->directorySiteIdDimensionValue;
  }
  /** @param string */
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  /** @return string */
  public function getExternalId()
  {
    return $this->externalId;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
  }
  /** @param string */
  public function setKeyName($keyName)
  {
    $this->keyName = $keyName;
  }
  /** @return string */
  public function getKeyName()
  {
    return $this->keyName;
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
  /** @param LastModifiedInfo */
  public function setLastModifiedInfo(LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  /** @return LastModifiedInfo */
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
  }
  /** @param LookbackConfiguration */
  public function setLookbackConfiguration(LookbackConfiguration $lookbackConfiguration)
  {
    $this->lookbackConfiguration = $lookbackConfiguration;
  }
  /** @return LookbackConfiguration */
  public function getLookbackConfiguration()
  {
    return $this->lookbackConfiguration;
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
  /** @param MeasurementPartnerWrappingData */
  public function setPartnerWrappingData(MeasurementPartnerWrappingData $partnerWrappingData)
  {
    $this->partnerWrappingData = $partnerWrappingData;
  }
  /** @return MeasurementPartnerWrappingData */
  public function getPartnerWrappingData()
  {
    return $this->partnerWrappingData;
  }
  /** @param bool */
  public function setPaymentApproved($paymentApproved)
  {
    $this->paymentApproved = $paymentApproved;
  }
  /** @return bool */
  public function getPaymentApproved()
  {
    return $this->paymentApproved;
  }
  /** @param string */
  public function setPaymentSource($paymentSource)
  {
    $this->paymentSource = $paymentSource;
  }
  /** @return string */
  public function getPaymentSource()
  {
    return $this->paymentSource;
  }
  /** @param string */
  public function setPlacementGroupId($placementGroupId)
  {
    $this->placementGroupId = $placementGroupId;
  }
  /** @return string */
  public function getPlacementGroupId()
  {
    return $this->placementGroupId;
  }
  /** @param DimensionValue */
  public function setPlacementGroupIdDimensionValue(DimensionValue $placementGroupIdDimensionValue)
  {
    $this->placementGroupIdDimensionValue = $placementGroupIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getPlacementGroupIdDimensionValue()
  {
    return $this->placementGroupIdDimensionValue;
  }
  /** @param string */
  public function setPlacementStrategyId($placementStrategyId)
  {
    $this->placementStrategyId = $placementStrategyId;
  }
  /** @return string */
  public function getPlacementStrategyId()
  {
    return $this->placementStrategyId;
  }
  /** @param PricingSchedule */
  public function setPricingSchedule(PricingSchedule $pricingSchedule)
  {
    $this->pricingSchedule = $pricingSchedule;
  }
  /** @return PricingSchedule */
  public function getPricingSchedule()
  {
    return $this->pricingSchedule;
  }
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param LastModifiedInfo */
  public function setPublisherUpdateInfo(LastModifiedInfo $publisherUpdateInfo)
  {
    $this->publisherUpdateInfo = $publisherUpdateInfo;
  }
  /** @return LastModifiedInfo */
  public function getPublisherUpdateInfo()
  {
    return $this->publisherUpdateInfo;
  }
  /** @param string */
  public function setSiteId($siteId)
  {
    $this->siteId = $siteId;
  }
  /** @return string */
  public function getSiteId()
  {
    return $this->siteId;
  }
  /** @param DimensionValue */
  public function setSiteIdDimensionValue(DimensionValue $siteIdDimensionValue)
  {
    $this->siteIdDimensionValue = $siteIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getSiteIdDimensionValue()
  {
    return $this->siteIdDimensionValue;
  }
  /** @param Size */
  public function setSize(Size $size)
  {
    $this->size = $size;
  }
  /** @return Size */
  public function getSize()
  {
    return $this->size;
  }
  /** @param bool */
  public function setSslRequired($sslRequired)
  {
    $this->sslRequired = $sslRequired;
  }
  /** @return bool */
  public function getSslRequired()
  {
    return $this->sslRequired;
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
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  /** @param string[] */
  public function setTagFormats($tagFormats)
  {
    $this->tagFormats = $tagFormats;
  }
  /** @return string[] */
  public function getTagFormats()
  {
    return $this->tagFormats;
  }
  /** @param TagSetting */
  public function setTagSetting(TagSetting $tagSetting)
  {
    $this->tagSetting = $tagSetting;
  }
  /** @return TagSetting */
  public function getTagSetting()
  {
    return $this->tagSetting;
  }
  /** @param bool */
  public function setVideoActiveViewOptOut($videoActiveViewOptOut)
  {
    $this->videoActiveViewOptOut = $videoActiveViewOptOut;
  }
  /** @return bool */
  public function getVideoActiveViewOptOut()
  {
    return $this->videoActiveViewOptOut;
  }
  /** @param VideoSettings */
  public function setVideoSettings(VideoSettings $videoSettings)
  {
    $this->videoSettings = $videoSettings;
  }
  /** @return VideoSettings */
  public function getVideoSettings()
  {
    return $this->videoSettings;
  }
  /** @param string */
  public function setVpaidAdapterChoice($vpaidAdapterChoice)
  {
    $this->vpaidAdapterChoice = $vpaidAdapterChoice;
  }
  /** @return string */
  public function getVpaidAdapterChoice()
  {
    return $this->vpaidAdapterChoice;
  }
  /** @param bool */
  public function setWrappingOptOut($wrappingOptOut)
  {
    $this->wrappingOptOut = $wrappingOptOut;
  }
  /** @return bool */
  public function getWrappingOptOut()
  {
    return $this->wrappingOptOut;
  }
}

class PlacementAssignment extends \Google\Model
{
  /** @var bool */
  public $active;
  /** @var string */
  public $placementId;
  /** @var DimensionValue */
  public $placementIdDimensionValue;
  /** @var bool */
  public $sslRequired;
  protected $placementIdDimensionValueType = DimensionValue::class;
  protected $placementIdDimensionValueDataType = '';
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
  public function setPlacementId($placementId)
  {
    $this->placementId = $placementId;
  }
  /** @return string */
  public function getPlacementId()
  {
    return $this->placementId;
  }
  /** @param DimensionValue */
  public function setPlacementIdDimensionValue(DimensionValue $placementIdDimensionValue)
  {
    $this->placementIdDimensionValue = $placementIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getPlacementIdDimensionValue()
  {
    return $this->placementIdDimensionValue;
  }
  /** @param bool */
  public function setSslRequired($sslRequired)
  {
    $this->sslRequired = $sslRequired;
  }
  /** @return bool */
  public function getSslRequired()
  {
    return $this->sslRequired;
  }
}

class PlacementGroup extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $activeStatus;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var string */
  public $campaignId;
  /** @var DimensionValue */
  public $campaignIdDimensionValue;
  /** @var string[] */
  public $childPlacementIds;
  /** @var string */
  public $comment;
  /** @var string */
  public $contentCategoryId;
  /** @var LastModifiedInfo */
  public $createInfo;
  /** @var string */
  public $directorySiteId;
  /** @var DimensionValue */
  public $directorySiteIdDimensionValue;
  /** @var string */
  public $externalId;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var string */
  public $kind;
  /** @var LastModifiedInfo */
  public $lastModifiedInfo;
  /** @var string */
  public $name;
  /** @var string */
  public $placementGroupType;
  /** @var string */
  public $placementStrategyId;
  /** @var PricingSchedule */
  public $pricingSchedule;
  /** @var string */
  public $primaryPlacementId;
  /** @var DimensionValue */
  public $primaryPlacementIdDimensionValue;
  /** @var string */
  public $siteId;
  /** @var DimensionValue */
  public $siteIdDimensionValue;
  /** @var string */
  public $subaccountId;
  protected $collection_key = 'childPlacementIds';
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
  protected $campaignIdDimensionValueType = DimensionValue::class;
  protected $campaignIdDimensionValueDataType = '';
  protected $createInfoType = LastModifiedInfo::class;
  protected $createInfoDataType = '';
  protected $directorySiteIdDimensionValueType = DimensionValue::class;
  protected $directorySiteIdDimensionValueDataType = '';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
  protected $pricingScheduleType = PricingSchedule::class;
  protected $pricingScheduleDataType = '';
  protected $primaryPlacementIdDimensionValueType = DimensionValue::class;
  protected $primaryPlacementIdDimensionValueDataType = '';
  protected $siteIdDimensionValueType = DimensionValue::class;
  protected $siteIdDimensionValueDataType = '';
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
  public function setActiveStatus($activeStatus)
  {
    $this->activeStatus = $activeStatus;
  }
  /** @return string */
  public function getActiveStatus()
  {
    return $this->activeStatus;
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
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  /** @param string */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /** @return string */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /** @param DimensionValue */
  public function setCampaignIdDimensionValue(DimensionValue $campaignIdDimensionValue)
  {
    $this->campaignIdDimensionValue = $campaignIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getCampaignIdDimensionValue()
  {
    return $this->campaignIdDimensionValue;
  }
  /** @param string[] */
  public function setChildPlacementIds($childPlacementIds)
  {
    $this->childPlacementIds = $childPlacementIds;
  }
  /** @return string[] */
  public function getChildPlacementIds()
  {
    return $this->childPlacementIds;
  }
  /** @param string */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /** @return string */
  public function getComment()
  {
    return $this->comment;
  }
  /** @param string */
  public function setContentCategoryId($contentCategoryId)
  {
    $this->contentCategoryId = $contentCategoryId;
  }
  /** @return string */
  public function getContentCategoryId()
  {
    return $this->contentCategoryId;
  }
  /** @param LastModifiedInfo */
  public function setCreateInfo(LastModifiedInfo $createInfo)
  {
    $this->createInfo = $createInfo;
  }
  /** @return LastModifiedInfo */
  public function getCreateInfo()
  {
    return $this->createInfo;
  }
  /** @param string */
  public function setDirectorySiteId($directorySiteId)
  {
    $this->directorySiteId = $directorySiteId;
  }
  /** @return string */
  public function getDirectorySiteId()
  {
    return $this->directorySiteId;
  }
  /** @param DimensionValue */
  public function setDirectorySiteIdDimensionValue(DimensionValue $directorySiteIdDimensionValue)
  {
    $this->directorySiteIdDimensionValue = $directorySiteIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getDirectorySiteIdDimensionValue()
  {
    return $this->directorySiteIdDimensionValue;
  }
  /** @param string */
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  /** @return string */
  public function getExternalId()
  {
    return $this->externalId;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
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
  /** @param LastModifiedInfo */
  public function setLastModifiedInfo(LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  /** @return LastModifiedInfo */
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
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
  public function setPlacementGroupType($placementGroupType)
  {
    $this->placementGroupType = $placementGroupType;
  }
  /** @return string */
  public function getPlacementGroupType()
  {
    return $this->placementGroupType;
  }
  /** @param string */
  public function setPlacementStrategyId($placementStrategyId)
  {
    $this->placementStrategyId = $placementStrategyId;
  }
  /** @return string */
  public function getPlacementStrategyId()
  {
    return $this->placementStrategyId;
  }
  /** @param PricingSchedule */
  public function setPricingSchedule(PricingSchedule $pricingSchedule)
  {
    $this->pricingSchedule = $pricingSchedule;
  }
  /** @return PricingSchedule */
  public function getPricingSchedule()
  {
    return $this->pricingSchedule;
  }
  /** @param string */
  public function setPrimaryPlacementId($primaryPlacementId)
  {
    $this->primaryPlacementId = $primaryPlacementId;
  }
  /** @return string */
  public function getPrimaryPlacementId()
  {
    return $this->primaryPlacementId;
  }
  /** @param DimensionValue */
  public function setPrimaryPlacementIdDimensionValue(DimensionValue $primaryPlacementIdDimensionValue)
  {
    $this->primaryPlacementIdDimensionValue = $primaryPlacementIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getPrimaryPlacementIdDimensionValue()
  {
    return $this->primaryPlacementIdDimensionValue;
  }
  /** @param string */
  public function setSiteId($siteId)
  {
    $this->siteId = $siteId;
  }
  /** @return string */
  public function getSiteId()
  {
    return $this->siteId;
  }
  /** @param DimensionValue */
  public function setSiteIdDimensionValue(DimensionValue $siteIdDimensionValue)
  {
    $this->siteIdDimensionValue = $siteIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getSiteIdDimensionValue()
  {
    return $this->siteIdDimensionValue;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
}

class PlacementGroupsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PlacementGroup[] */
  public $placementGroups;
  protected $collection_key = 'placementGroups';
  protected $placementGroupsType = PlacementGroup::class;
  protected $placementGroupsDataType = 'array';
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
  /** @param PlacementGroup[] */
  public function setPlacementGroups($placementGroups)
  {
    $this->placementGroups = $placementGroups;
  }
  /** @return PlacementGroup[] */
  public function getPlacementGroups()
  {
    return $this->placementGroups;
  }
}

class PlacementStrategiesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var PlacementStrategy[] */
  public $placementStrategies;
  protected $collection_key = 'placementStrategies';
  protected $placementStrategiesType = PlacementStrategy::class;
  protected $placementStrategiesDataType = 'array';
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
  /** @param PlacementStrategy[] */
  public function setPlacementStrategies($placementStrategies)
  {
    $this->placementStrategies = $placementStrategies;
  }
  /** @return PlacementStrategy[] */
  public function getPlacementStrategies()
  {
    return $this->placementStrategies;
  }
}

class PlacementStrategy extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
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
}

class PlacementTag extends \Google\Collection
{
  /** @var string */
  public $placementId;
  /** @var TagData[] */
  public $tagDatas;
  protected $collection_key = 'tagDatas';
  protected $tagDatasType = TagData::class;
  protected $tagDatasDataType = 'array';
  /** @param string */
  public function setPlacementId($placementId)
  {
    $this->placementId = $placementId;
  }
  /** @return string */
  public function getPlacementId()
  {
    return $this->placementId;
  }
  /** @param TagData[] */
  public function setTagDatas($tagDatas)
  {
    $this->tagDatas = $tagDatas;
  }
  /** @return TagData[] */
  public function getTagDatas()
  {
    return $this->tagDatas;
  }
}

class PlacementsGenerateTagsResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var PlacementTag[] */
  public $placementTags;
  protected $collection_key = 'placementTags';
  protected $placementTagsType = PlacementTag::class;
  protected $placementTagsDataType = 'array';
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
  /** @param PlacementTag[] */
  public function setPlacementTags($placementTags)
  {
    $this->placementTags = $placementTags;
  }
  /** @return PlacementTag[] */
  public function getPlacementTags()
  {
    return $this->placementTags;
  }
}

class PlacementsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Placement[] */
  public $placements;
  protected $collection_key = 'placements';
  protected $placementsType = Placement::class;
  protected $placementsDataType = 'array';
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
  /** @param Placement[] */
  public function setPlacements($placements)
  {
    $this->placements = $placements;
  }
  /** @return Placement[] */
  public function getPlacements()
  {
    return $this->placements;
  }
}

class PlatformType extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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
}

class PlatformTypesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var PlatformType[] */
  public $platformTypes;
  protected $collection_key = 'platformTypes';
  protected $platformTypesType = PlatformType::class;
  protected $platformTypesDataType = 'array';
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
  /** @param PlatformType[] */
  public function setPlatformTypes($platformTypes)
  {
    $this->platformTypes = $platformTypes;
  }
  /** @return PlatformType[] */
  public function getPlatformTypes()
  {
    return $this->platformTypes;
  }
}

class PopupWindowProperties extends \Google\Model
{
  /** @var Size */
  public $dimension;
  /** @var OffsetPosition */
  public $offset;
  /** @var string */
  public $positionType;
  /** @var bool */
  public $showAddressBar;
  /** @var bool */
  public $showMenuBar;
  /** @var bool */
  public $showScrollBar;
  /** @var bool */
  public $showStatusBar;
  /** @var bool */
  public $showToolBar;
  /** @var string */
  public $title;
  protected $dimensionType = Size::class;
  protected $dimensionDataType = '';
  protected $offsetType = OffsetPosition::class;
  protected $offsetDataType = '';
  /** @param Size */
  public function setDimension(Size $dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return Size */
  public function getDimension()
  {
    return $this->dimension;
  }
  /** @param OffsetPosition */
  public function setOffset(OffsetPosition $offset)
  {
    $this->offset = $offset;
  }
  /** @return OffsetPosition */
  public function getOffset()
  {
    return $this->offset;
  }
  /** @param string */
  public function setPositionType($positionType)
  {
    $this->positionType = $positionType;
  }
  /** @return string */
  public function getPositionType()
  {
    return $this->positionType;
  }
  /** @param bool */
  public function setShowAddressBar($showAddressBar)
  {
    $this->showAddressBar = $showAddressBar;
  }
  /** @return bool */
  public function getShowAddressBar()
  {
    return $this->showAddressBar;
  }
  /** @param bool */
  public function setShowMenuBar($showMenuBar)
  {
    $this->showMenuBar = $showMenuBar;
  }
  /** @return bool */
  public function getShowMenuBar()
  {
    return $this->showMenuBar;
  }
  /** @param bool */
  public function setShowScrollBar($showScrollBar)
  {
    $this->showScrollBar = $showScrollBar;
  }
  /** @return bool */
  public function getShowScrollBar()
  {
    return $this->showScrollBar;
  }
  /** @param bool */
  public function setShowStatusBar($showStatusBar)
  {
    $this->showStatusBar = $showStatusBar;
  }
  /** @return bool */
  public function getShowStatusBar()
  {
    return $this->showStatusBar;
  }
  /** @param bool */
  public function setShowToolBar($showToolBar)
  {
    $this->showToolBar = $showToolBar;
  }
  /** @return bool */
  public function getShowToolBar()
  {
    return $this->showToolBar;
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

class PostalCode extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $countryCode;
  /** @var string */
  public $countryDartId;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;

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
  public function setCountryDartId($countryDartId)
  {
    $this->countryDartId = $countryDartId;
  }
  /** @return string */
  public function getCountryDartId()
  {
    return $this->countryDartId;
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
}

class PostalCodesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var PostalCode[] */
  public $postalCodes;
  protected $collection_key = 'postalCodes';
  protected $postalCodesType = PostalCode::class;
  protected $postalCodesDataType = 'array';
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
  /** @param PostalCode[] */
  public function setPostalCodes($postalCodes)
  {
    $this->postalCodes = $postalCodes;
  }
  /** @return PostalCode[] */
  public function getPostalCodes()
  {
    return $this->postalCodes;
  }
}

class Pricing extends \Google\Collection
{
  /** @var string */
  public $capCostType;
  /** @var string */
  public $endDate;
  /** @var Flight[] */
  public $flights;
  /** @var string */
  public $groupType;
  /** @var string */
  public $pricingType;
  /** @var string */
  public $startDate;
  protected $collection_key = 'flights';
  protected $flightsType = Flight::class;
  protected $flightsDataType = 'array';
  /** @param string */
  public function setCapCostType($capCostType)
  {
    $this->capCostType = $capCostType;
  }
  /** @return string */
  public function getCapCostType()
  {
    return $this->capCostType;
  }
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
  /** @param Flight[] */
  public function setFlights($flights)
  {
    $this->flights = $flights;
  }
  /** @return Flight[] */
  public function getFlights()
  {
    return $this->flights;
  }
  /** @param string */
  public function setGroupType($groupType)
  {
    $this->groupType = $groupType;
  }
  /** @return string */
  public function getGroupType()
  {
    return $this->groupType;
  }
  /** @param string */
  public function setPricingType($pricingType)
  {
    $this->pricingType = $pricingType;
  }
  /** @return string */
  public function getPricingType()
  {
    return $this->pricingType;
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

class PricingSchedule extends \Google\Collection
{
  /** @var string */
  public $capCostOption;
  /** @var string */
  public $endDate;
  /** @var bool */
  public $flighted;
  /** @var string */
  public $floodlightActivityId;
  /** @var PricingSchedulePricingPeriod[] */
  public $pricingPeriods;
  /** @var string */
  public $pricingType;
  /** @var string */
  public $startDate;
  /** @var string */
  public $testingStartDate;
  protected $collection_key = 'pricingPeriods';
  protected $pricingPeriodsType = PricingSchedulePricingPeriod::class;
  protected $pricingPeriodsDataType = 'array';
  /** @param string */
  public function setCapCostOption($capCostOption)
  {
    $this->capCostOption = $capCostOption;
  }
  /** @return string */
  public function getCapCostOption()
  {
    return $this->capCostOption;
  }
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
  /** @param bool */
  public function setFlighted($flighted)
  {
    $this->flighted = $flighted;
  }
  /** @return bool */
  public function getFlighted()
  {
    return $this->flighted;
  }
  /** @param string */
  public function setFloodlightActivityId($floodlightActivityId)
  {
    $this->floodlightActivityId = $floodlightActivityId;
  }
  /** @return string */
  public function getFloodlightActivityId()
  {
    return $this->floodlightActivityId;
  }
  /** @param PricingSchedulePricingPeriod[] */
  public function setPricingPeriods($pricingPeriods)
  {
    $this->pricingPeriods = $pricingPeriods;
  }
  /** @return PricingSchedulePricingPeriod[] */
  public function getPricingPeriods()
  {
    return $this->pricingPeriods;
  }
  /** @param string */
  public function setPricingType($pricingType)
  {
    $this->pricingType = $pricingType;
  }
  /** @return string */
  public function getPricingType()
  {
    return $this->pricingType;
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
  /** @param string */
  public function setTestingStartDate($testingStartDate)
  {
    $this->testingStartDate = $testingStartDate;
  }
  /** @return string */
  public function getTestingStartDate()
  {
    return $this->testingStartDate;
  }
}

class PricingSchedulePricingPeriod extends \Google\Model
{
  /** @var string */
  public $endDate;
  /** @var string */
  public $pricingComment;
  /** @var string */
  public $rateOrCostNanos;
  /** @var string */
  public $startDate;
  /** @var string */
  public $units;

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
  public function setPricingComment($pricingComment)
  {
    $this->pricingComment = $pricingComment;
  }
  /** @return string */
  public function getPricingComment()
  {
    return $this->pricingComment;
  }
  /** @param string */
  public function setRateOrCostNanos($rateOrCostNanos)
  {
    $this->rateOrCostNanos = $rateOrCostNanos;
  }
  /** @return string */
  public function getRateOrCostNanos()
  {
    return $this->rateOrCostNanos;
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

class Project extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $audienceAgeGroup;
  /** @var string */
  public $audienceGender;
  /** @var string */
  public $budget;
  /** @var string */
  public $clientBillingCode;
  /** @var string */
  public $clientName;
  /** @var string */
  public $endDate;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var LastModifiedInfo */
  public $lastModifiedInfo;
  /** @var string */
  public $name;
  /** @var string */
  public $overview;
  /** @var string */
  public $startDate;
  /** @var string */
  public $subaccountId;
  /** @var string */
  public $targetClicks;
  /** @var string */
  public $targetConversions;
  /** @var string */
  public $targetCpaNanos;
  /** @var string */
  public $targetCpcNanos;
  /** @var string */
  public $targetCpmActiveViewNanos;
  /** @var string */
  public $targetCpmNanos;
  /** @var string */
  public $targetImpressions;
  protected $lastModifiedInfoType = LastModifiedInfo::class;
  protected $lastModifiedInfoDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param string */
  public function setAudienceAgeGroup($audienceAgeGroup)
  {
    $this->audienceAgeGroup = $audienceAgeGroup;
  }
  /** @return string */
  public function getAudienceAgeGroup()
  {
    return $this->audienceAgeGroup;
  }
  /** @param string */
  public function setAudienceGender($audienceGender)
  {
    $this->audienceGender = $audienceGender;
  }
  /** @return string */
  public function getAudienceGender()
  {
    return $this->audienceGender;
  }
  /** @param string */
  public function setBudget($budget)
  {
    $this->budget = $budget;
  }
  /** @return string */
  public function getBudget()
  {
    return $this->budget;
  }
  /** @param string */
  public function setClientBillingCode($clientBillingCode)
  {
    $this->clientBillingCode = $clientBillingCode;
  }
  /** @return string */
  public function getClientBillingCode()
  {
    return $this->clientBillingCode;
  }
  /** @param string */
  public function setClientName($clientName)
  {
    $this->clientName = $clientName;
  }
  /** @return string */
  public function getClientName()
  {
    return $this->clientName;
  }
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
  /** @param LastModifiedInfo */
  public function setLastModifiedInfo(LastModifiedInfo $lastModifiedInfo)
  {
    $this->lastModifiedInfo = $lastModifiedInfo;
  }
  /** @return LastModifiedInfo */
  public function getLastModifiedInfo()
  {
    return $this->lastModifiedInfo;
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
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return string */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  /** @param string */
  public function setTargetClicks($targetClicks)
  {
    $this->targetClicks = $targetClicks;
  }
  /** @return string */
  public function getTargetClicks()
  {
    return $this->targetClicks;
  }
  /** @param string */
  public function setTargetConversions($targetConversions)
  {
    $this->targetConversions = $targetConversions;
  }
  /** @return string */
  public function getTargetConversions()
  {
    return $this->targetConversions;
  }
  /** @param string */
  public function setTargetCpaNanos($targetCpaNanos)
  {
    $this->targetCpaNanos = $targetCpaNanos;
  }
  /** @return string */
  public function getTargetCpaNanos()
  {
    return $this->targetCpaNanos;
  }
  /** @param string */
  public function setTargetCpcNanos($targetCpcNanos)
  {
    $this->targetCpcNanos = $targetCpcNanos;
  }
  /** @return string */
  public function getTargetCpcNanos()
  {
    return $this->targetCpcNanos;
  }
  /** @param string */
  public function setTargetCpmActiveViewNanos($targetCpmActiveViewNanos)
  {
    $this->targetCpmActiveViewNanos = $targetCpmActiveViewNanos;
  }
  /** @return string */
  public function getTargetCpmActiveViewNanos()
  {
    return $this->targetCpmActiveViewNanos;
  }
  /** @param string */
  public function setTargetCpmNanos($targetCpmNanos)
  {
    $this->targetCpmNanos = $targetCpmNanos;
  }
  /** @return string */
  public function getTargetCpmNanos()
  {
    return $this->targetCpmNanos;
  }
  /** @param string */
  public function setTargetImpressions($targetImpressions)
  {
    $this->targetImpressions = $targetImpressions;
  }
  /** @return string */
  public function getTargetImpressions()
  {
    return $this->targetImpressions;
  }
}

class ProjectsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Project[] */
  public $projects;
  protected $collection_key = 'projects';
  protected $projectsType = Project::class;
  protected $projectsDataType = 'array';
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
  /** @param Project[] */
  public function setProjects($projects)
  {
    $this->projects = $projects;
  }
  /** @return Project[] */
  public function getProjects()
  {
    return $this->projects;
  }
}

class ReachReportCompatibleFields extends \Google\Collection
{
  /** @var Dimension[] */
  public $dimensionFilters;
  /** @var Dimension[] */
  public $dimensions;
  /** @var string */
  public $kind;
  /** @var Metric[] */
  public $metrics;
  /** @var Metric[] */
  public $pivotedActivityMetrics;
  /** @var Metric[] */
  public $reachByFrequencyMetrics;
  protected $collection_key = 'reachByFrequencyMetrics';
  protected $dimensionFiltersType = Dimension::class;
  protected $dimensionFiltersDataType = 'array';
  protected $dimensionsType = Dimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $pivotedActivityMetricsType = Metric::class;
  protected $pivotedActivityMetricsDataType = 'array';
  protected $reachByFrequencyMetricsType = Metric::class;
  protected $reachByFrequencyMetricsDataType = 'array';
  /** @param Dimension[] */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /** @return Dimension[] */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  /** @param Dimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
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
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param Metric[] */
  public function setPivotedActivityMetrics($pivotedActivityMetrics)
  {
    $this->pivotedActivityMetrics = $pivotedActivityMetrics;
  }
  /** @return Metric[] */
  public function getPivotedActivityMetrics()
  {
    return $this->pivotedActivityMetrics;
  }
  /** @param Metric[] */
  public function setReachByFrequencyMetrics($reachByFrequencyMetrics)
  {
    $this->reachByFrequencyMetrics = $reachByFrequencyMetrics;
  }
  /** @return Metric[] */
  public function getReachByFrequencyMetrics()
  {
    return $this->reachByFrequencyMetrics;
  }
}

class Recipient extends \Google\Model
{
  /** @var string */
  public $deliveryType;
  /** @var string */
  public $email;
  /** @var string */
  public $kind;

  /** @param string */
  public function setDeliveryType($deliveryType)
  {
    $this->deliveryType = $deliveryType;
  }
  /** @return string */
  public function getDeliveryType()
  {
    return $this->deliveryType;
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

class Region extends \Google\Model
{
  /** @var string */
  public $countryCode;
  /** @var string */
  public $countryDartId;
  /** @var string */
  public $dartId;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $regionCode;

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
  public function setCountryDartId($countryDartId)
  {
    $this->countryDartId = $countryDartId;
  }
  /** @return string */
  public function getCountryDartId()
  {
    return $this->countryDartId;
  }
  /** @param string */
  public function setDartId($dartId)
  {
    $this->dartId = $dartId;
  }
  /** @return string */
  public function getDartId()
  {
    return $this->dartId;
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

class RegionsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var Region[] */
  public $regions;
  protected $collection_key = 'regions';
  protected $regionsType = Region::class;
  protected $regionsDataType = 'array';
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

class RemarketingList extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $active;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $lifeSpan;
  /** @var ListPopulationRule */
  public $listPopulationRule;
  /** @var string */
  public $listSize;
  /** @var string */
  public $listSource;
  /** @var string */
  public $name;
  /** @var string */
  public $subaccountId;
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
  protected $listPopulationRuleType = ListPopulationRule::class;
  protected $listPopulationRuleDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
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
  public function setLifeSpan($lifeSpan)
  {
    $this->lifeSpan = $lifeSpan;
  }
  /** @return string */
  public function getLifeSpan()
  {
    return $this->lifeSpan;
  }
  /** @param ListPopulationRule */
  public function setListPopulationRule(ListPopulationRule $listPopulationRule)
  {
    $this->listPopulationRule = $listPopulationRule;
  }
  /** @return ListPopulationRule */
  public function getListPopulationRule()
  {
    return $this->listPopulationRule;
  }
  /** @param string */
  public function setListSize($listSize)
  {
    $this->listSize = $listSize;
  }
  /** @return string */
  public function getListSize()
  {
    return $this->listSize;
  }
  /** @param string */
  public function setListSource($listSource)
  {
    $this->listSource = $listSource;
  }
  /** @return string */
  public function getListSource()
  {
    return $this->listSource;
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
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
}

class RemarketingListShare extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $remarketingListId;
  /** @var string[] */
  public $sharedAccountIds;
  /** @var string[] */
  public $sharedAdvertiserIds;
  protected $collection_key = 'sharedAdvertiserIds';
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
  public function setRemarketingListId($remarketingListId)
  {
    $this->remarketingListId = $remarketingListId;
  }
  /** @return string */
  public function getRemarketingListId()
  {
    return $this->remarketingListId;
  }
  /** @param string[] */
  public function setSharedAccountIds($sharedAccountIds)
  {
    $this->sharedAccountIds = $sharedAccountIds;
  }
  /** @return string[] */
  public function getSharedAccountIds()
  {
    return $this->sharedAccountIds;
  }
  /** @param string[] */
  public function setSharedAdvertiserIds($sharedAdvertiserIds)
  {
    $this->sharedAdvertiserIds = $sharedAdvertiserIds;
  }
  /** @return string[] */
  public function getSharedAdvertiserIds()
  {
    return $this->sharedAdvertiserIds;
  }
}

class RemarketingListsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var RemarketingList[] */
  public $remarketingLists;
  protected $collection_key = 'remarketingLists';
  protected $remarketingListsType = RemarketingList::class;
  protected $remarketingListsDataType = 'array';
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
  /** @param RemarketingList[] */
  public function setRemarketingLists($remarketingLists)
  {
    $this->remarketingLists = $remarketingLists;
  }
  /** @return RemarketingList[] */
  public function getRemarketingLists()
  {
    return $this->remarketingLists;
  }
}

class Report extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var ReportCriteria */
  public $criteria;
  /** @var ReportCrossDimensionReachCriteria */
  public $crossDimensionReachCriteria;
  /** @var ReportDelivery */
  public $delivery;
  /** @var string */
  public $etag;
  /** @var string */
  public $fileName;
  /** @var ReportFloodlightCriteria */
  public $floodlightCriteria;
  /** @var string */
  public $format;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $lastModifiedTime;
  /** @var string */
  public $name;
  /** @var string */
  public $ownerProfileId;
  /** @var ReportPathAttributionCriteria */
  public $pathAttributionCriteria;
  /** @var ReportPathCriteria */
  public $pathCriteria;
  /** @var ReportPathToConversionCriteria */
  public $pathToConversionCriteria;
  /** @var ReportReachCriteria */
  public $reachCriteria;
  /** @var ReportSchedule */
  public $schedule;
  /** @var string */
  public $subAccountId;
  /** @var string */
  public $type;
  protected $criteriaType = ReportCriteria::class;
  protected $criteriaDataType = '';
  protected $crossDimensionReachCriteriaType = ReportCrossDimensionReachCriteria::class;
  protected $crossDimensionReachCriteriaDataType = '';
  protected $deliveryType = ReportDelivery::class;
  protected $deliveryDataType = '';
  protected $floodlightCriteriaType = ReportFloodlightCriteria::class;
  protected $floodlightCriteriaDataType = '';
  protected $pathAttributionCriteriaType = ReportPathAttributionCriteria::class;
  protected $pathAttributionCriteriaDataType = '';
  protected $pathCriteriaType = ReportPathCriteria::class;
  protected $pathCriteriaDataType = '';
  protected $pathToConversionCriteriaType = ReportPathToConversionCriteria::class;
  protected $pathToConversionCriteriaDataType = '';
  protected $reachCriteriaType = ReportReachCriteria::class;
  protected $reachCriteriaDataType = '';
  protected $scheduleType = ReportSchedule::class;
  protected $scheduleDataType = '';
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
  /** @param ReportCriteria */
  public function setCriteria(ReportCriteria $criteria)
  {
    $this->criteria = $criteria;
  }
  /** @return ReportCriteria */
  public function getCriteria()
  {
    return $this->criteria;
  }
  /** @param ReportCrossDimensionReachCriteria */
  public function setCrossDimensionReachCriteria(ReportCrossDimensionReachCriteria $crossDimensionReachCriteria)
  {
    $this->crossDimensionReachCriteria = $crossDimensionReachCriteria;
  }
  /** @return ReportCrossDimensionReachCriteria */
  public function getCrossDimensionReachCriteria()
  {
    return $this->crossDimensionReachCriteria;
  }
  /** @param ReportDelivery */
  public function setDelivery(ReportDelivery $delivery)
  {
    $this->delivery = $delivery;
  }
  /** @return ReportDelivery */
  public function getDelivery()
  {
    return $this->delivery;
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
  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }
  /** @return string */
  public function getFileName()
  {
    return $this->fileName;
  }
  /** @param ReportFloodlightCriteria */
  public function setFloodlightCriteria(ReportFloodlightCriteria $floodlightCriteria)
  {
    $this->floodlightCriteria = $floodlightCriteria;
  }
  /** @return ReportFloodlightCriteria */
  public function getFloodlightCriteria()
  {
    return $this->floodlightCriteria;
  }
  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
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
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
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
  public function setOwnerProfileId($ownerProfileId)
  {
    $this->ownerProfileId = $ownerProfileId;
  }
  /** @return string */
  public function getOwnerProfileId()
  {
    return $this->ownerProfileId;
  }
  /** @param ReportPathAttributionCriteria */
  public function setPathAttributionCriteria(ReportPathAttributionCriteria $pathAttributionCriteria)
  {
    $this->pathAttributionCriteria = $pathAttributionCriteria;
  }
  /** @return ReportPathAttributionCriteria */
  public function getPathAttributionCriteria()
  {
    return $this->pathAttributionCriteria;
  }
  /** @param ReportPathCriteria */
  public function setPathCriteria(ReportPathCriteria $pathCriteria)
  {
    $this->pathCriteria = $pathCriteria;
  }
  /** @return ReportPathCriteria */
  public function getPathCriteria()
  {
    return $this->pathCriteria;
  }
  /** @param ReportPathToConversionCriteria */
  public function setPathToConversionCriteria(ReportPathToConversionCriteria $pathToConversionCriteria)
  {
    $this->pathToConversionCriteria = $pathToConversionCriteria;
  }
  /** @return ReportPathToConversionCriteria */
  public function getPathToConversionCriteria()
  {
    return $this->pathToConversionCriteria;
  }
  /** @param ReportReachCriteria */
  public function setReachCriteria(ReportReachCriteria $reachCriteria)
  {
    $this->reachCriteria = $reachCriteria;
  }
  /** @return ReportReachCriteria */
  public function getReachCriteria()
  {
    return $this->reachCriteria;
  }
  /** @param ReportSchedule */
  public function setSchedule(ReportSchedule $schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return ReportSchedule */
  public function getSchedule()
  {
    return $this->schedule;
  }
  /** @param string */
  public function setSubAccountId($subAccountId)
  {
    $this->subAccountId = $subAccountId;
  }
  /** @return string */
  public function getSubAccountId()
  {
    return $this->subAccountId;
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

class ReportCompatibleFields extends \Google\Collection
{
  /** @var Dimension[] */
  public $dimensionFilters;
  /** @var Dimension[] */
  public $dimensions;
  /** @var string */
  public $kind;
  /** @var Metric[] */
  public $metrics;
  /** @var Metric[] */
  public $pivotedActivityMetrics;
  protected $collection_key = 'pivotedActivityMetrics';
  protected $dimensionFiltersType = Dimension::class;
  protected $dimensionFiltersDataType = 'array';
  protected $dimensionsType = Dimension::class;
  protected $dimensionsDataType = 'array';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $pivotedActivityMetricsType = Metric::class;
  protected $pivotedActivityMetricsDataType = 'array';
  /** @param Dimension[] */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /** @return Dimension[] */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  /** @param Dimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
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
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param Metric[] */
  public function setPivotedActivityMetrics($pivotedActivityMetrics)
  {
    $this->pivotedActivityMetrics = $pivotedActivityMetrics;
  }
  /** @return Metric[] */
  public function getPivotedActivityMetrics()
  {
    return $this->pivotedActivityMetrics;
  }
}

class ReportCriteria extends \Google\Collection
{
  /** @var Activities */
  public $activities;
  /** @var CustomRichMediaEvents */
  public $customRichMediaEvents;
  /** @var DateRange */
  public $dateRange;
  /** @var DimensionValue[] */
  public $dimensionFilters;
  /** @var SortedDimension[] */
  public $dimensions;
  /** @var string[] */
  public $metricNames;
  protected $collection_key = 'metricNames';
  protected $activitiesType = Activities::class;
  protected $activitiesDataType = '';
  protected $customRichMediaEventsType = CustomRichMediaEvents::class;
  protected $customRichMediaEventsDataType = '';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $dimensionFiltersType = DimensionValue::class;
  protected $dimensionFiltersDataType = 'array';
  protected $dimensionsType = SortedDimension::class;
  protected $dimensionsDataType = 'array';
  /** @param Activities */
  public function setActivities(Activities $activities)
  {
    $this->activities = $activities;
  }
  /** @return Activities */
  public function getActivities()
  {
    return $this->activities;
  }
  /** @param CustomRichMediaEvents */
  public function setCustomRichMediaEvents(CustomRichMediaEvents $customRichMediaEvents)
  {
    $this->customRichMediaEvents = $customRichMediaEvents;
  }
  /** @return CustomRichMediaEvents */
  public function getCustomRichMediaEvents()
  {
    return $this->customRichMediaEvents;
  }
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
  /** @param DimensionValue[] */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /** @return DimensionValue[] */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  /** @param SortedDimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return SortedDimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
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
}

class ReportCrossDimensionReachCriteria extends \Google\Collection
{
  /** @var SortedDimension[] */
  public $breakdown;
  /** @var DateRange */
  public $dateRange;
  /** @var string */
  public $dimension;
  /** @var DimensionValue[] */
  public $dimensionFilters;
  /** @var string[] */
  public $metricNames;
  /** @var string[] */
  public $overlapMetricNames;
  /** @var bool */
  public $pivoted;
  protected $collection_key = 'overlapMetricNames';
  protected $breakdownType = SortedDimension::class;
  protected $breakdownDataType = 'array';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $dimensionFiltersType = DimensionValue::class;
  protected $dimensionFiltersDataType = 'array';
  /** @param SortedDimension[] */
  public function setBreakdown($breakdown)
  {
    $this->breakdown = $breakdown;
  }
  /** @return SortedDimension[] */
  public function getBreakdown()
  {
    return $this->breakdown;
  }
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
  /** @param DimensionValue[] */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /** @return DimensionValue[] */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
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
  /** @param string[] */
  public function setOverlapMetricNames($overlapMetricNames)
  {
    $this->overlapMetricNames = $overlapMetricNames;
  }
  /** @return string[] */
  public function getOverlapMetricNames()
  {
    return $this->overlapMetricNames;
  }
  /** @param bool */
  public function setPivoted($pivoted)
  {
    $this->pivoted = $pivoted;
  }
  /** @return bool */
  public function getPivoted()
  {
    return $this->pivoted;
  }
}

class ReportDelivery extends \Google\Collection
{
  /** @var bool */
  public $emailOwner;
  /** @var string */
  public $emailOwnerDeliveryType;
  /** @var string */
  public $message;
  /** @var Recipient[] */
  public $recipients;
  protected $collection_key = 'recipients';
  protected $recipientsType = Recipient::class;
  protected $recipientsDataType = 'array';
  /** @param bool */
  public function setEmailOwner($emailOwner)
  {
    $this->emailOwner = $emailOwner;
  }
  /** @return bool */
  public function getEmailOwner()
  {
    return $this->emailOwner;
  }
  /** @param string */
  public function setEmailOwnerDeliveryType($emailOwnerDeliveryType)
  {
    $this->emailOwnerDeliveryType = $emailOwnerDeliveryType;
  }
  /** @return string */
  public function getEmailOwnerDeliveryType()
  {
    return $this->emailOwnerDeliveryType;
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
  /** @param Recipient[] */
  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }
  /** @return Recipient[] */
  public function getRecipients()
  {
    return $this->recipients;
  }
}

class ReportFloodlightCriteria extends \Google\Collection
{
  /** @var DimensionValue[] */
  public $customRichMediaEvents;
  /** @var DateRange */
  public $dateRange;
  /** @var DimensionValue[] */
  public $dimensionFilters;
  /** @var SortedDimension[] */
  public $dimensions;
  /** @var DimensionValue */
  public $floodlightConfigId;
  /** @var string[] */
  public $metricNames;
  /** @var ReportFloodlightCriteriaReportProperties */
  public $reportProperties;
  protected $collection_key = 'metricNames';
  protected $customRichMediaEventsType = DimensionValue::class;
  protected $customRichMediaEventsDataType = 'array';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $dimensionFiltersType = DimensionValue::class;
  protected $dimensionFiltersDataType = 'array';
  protected $dimensionsType = SortedDimension::class;
  protected $dimensionsDataType = 'array';
  protected $floodlightConfigIdType = DimensionValue::class;
  protected $floodlightConfigIdDataType = '';
  protected $reportPropertiesType = ReportFloodlightCriteriaReportProperties::class;
  protected $reportPropertiesDataType = '';
  /** @param DimensionValue[] */
  public function setCustomRichMediaEvents($customRichMediaEvents)
  {
    $this->customRichMediaEvents = $customRichMediaEvents;
  }
  /** @return DimensionValue[] */
  public function getCustomRichMediaEvents()
  {
    return $this->customRichMediaEvents;
  }
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
  /** @param DimensionValue[] */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /** @return DimensionValue[] */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  /** @param SortedDimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return SortedDimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param DimensionValue */
  public function setFloodlightConfigId(DimensionValue $floodlightConfigId)
  {
    $this->floodlightConfigId = $floodlightConfigId;
  }
  /** @return DimensionValue */
  public function getFloodlightConfigId()
  {
    return $this->floodlightConfigId;
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
  /** @param ReportFloodlightCriteriaReportProperties */
  public function setReportProperties(ReportFloodlightCriteriaReportProperties $reportProperties)
  {
    $this->reportProperties = $reportProperties;
  }
  /** @return ReportFloodlightCriteriaReportProperties */
  public function getReportProperties()
  {
    return $this->reportProperties;
  }
}

class ReportFloodlightCriteriaReportProperties extends \Google\Model
{
  /** @var bool */
  public $includeAttributedIPConversions;
  /** @var bool */
  public $includeUnattributedCookieConversions;
  /** @var bool */
  public $includeUnattributedIPConversions;

  /** @param bool */
  public function setIncludeAttributedIPConversions($includeAttributedIPConversions)
  {
    $this->includeAttributedIPConversions = $includeAttributedIPConversions;
  }
  /** @return bool */
  public function getIncludeAttributedIPConversions()
  {
    return $this->includeAttributedIPConversions;
  }
  /** @param bool */
  public function setIncludeUnattributedCookieConversions($includeUnattributedCookieConversions)
  {
    $this->includeUnattributedCookieConversions = $includeUnattributedCookieConversions;
  }
  /** @return bool */
  public function getIncludeUnattributedCookieConversions()
  {
    return $this->includeUnattributedCookieConversions;
  }
  /** @param bool */
  public function setIncludeUnattributedIPConversions($includeUnattributedIPConversions)
  {
    $this->includeUnattributedIPConversions = $includeUnattributedIPConversions;
  }
  /** @return bool */
  public function getIncludeUnattributedIPConversions()
  {
    return $this->includeUnattributedIPConversions;
  }
}

class ReportList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Report[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Report::class;
  protected $itemsDataType = 'array';
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
  /** @param Report[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Report[] */
  public function getItems()
  {
    return $this->items;
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

class ReportPathAttributionCriteria extends \Google\Collection
{
  /** @var DimensionValue[] */
  public $activityFilters;
  /** @var ChannelGrouping */
  public $customChannelGrouping;
  /** @var DateRange */
  public $dateRange;
  /** @var SortedDimension[] */
  public $dimensions;
  /** @var DimensionValue */
  public $floodlightConfigId;
  /** @var string[] */
  public $metricNames;
  /** @var PathFilter[] */
  public $pathFilters;
  protected $collection_key = 'pathFilters';
  protected $activityFiltersType = DimensionValue::class;
  protected $activityFiltersDataType = 'array';
  protected $customChannelGroupingType = ChannelGrouping::class;
  protected $customChannelGroupingDataType = '';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $dimensionsType = SortedDimension::class;
  protected $dimensionsDataType = 'array';
  protected $floodlightConfigIdType = DimensionValue::class;
  protected $floodlightConfigIdDataType = '';
  protected $pathFiltersType = PathFilter::class;
  protected $pathFiltersDataType = 'array';
  /** @param DimensionValue[] */
  public function setActivityFilters($activityFilters)
  {
    $this->activityFilters = $activityFilters;
  }
  /** @return DimensionValue[] */
  public function getActivityFilters()
  {
    return $this->activityFilters;
  }
  /** @param ChannelGrouping */
  public function setCustomChannelGrouping(ChannelGrouping $customChannelGrouping)
  {
    $this->customChannelGrouping = $customChannelGrouping;
  }
  /** @return ChannelGrouping */
  public function getCustomChannelGrouping()
  {
    return $this->customChannelGrouping;
  }
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
  /** @param SortedDimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return SortedDimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param DimensionValue */
  public function setFloodlightConfigId(DimensionValue $floodlightConfigId)
  {
    $this->floodlightConfigId = $floodlightConfigId;
  }
  /** @return DimensionValue */
  public function getFloodlightConfigId()
  {
    return $this->floodlightConfigId;
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
  /** @param PathFilter[] */
  public function setPathFilters($pathFilters)
  {
    $this->pathFilters = $pathFilters;
  }
  /** @return PathFilter[] */
  public function getPathFilters()
  {
    return $this->pathFilters;
  }
}

class ReportPathCriteria extends \Google\Collection
{
  /** @var DimensionValue[] */
  public $activityFilters;
  /** @var ChannelGrouping */
  public $customChannelGrouping;
  /** @var DateRange */
  public $dateRange;
  /** @var SortedDimension[] */
  public $dimensions;
  /** @var DimensionValue */
  public $floodlightConfigId;
  /** @var string[] */
  public $metricNames;
  /** @var PathFilter[] */
  public $pathFilters;
  protected $collection_key = 'pathFilters';
  protected $activityFiltersType = DimensionValue::class;
  protected $activityFiltersDataType = 'array';
  protected $customChannelGroupingType = ChannelGrouping::class;
  protected $customChannelGroupingDataType = '';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $dimensionsType = SortedDimension::class;
  protected $dimensionsDataType = 'array';
  protected $floodlightConfigIdType = DimensionValue::class;
  protected $floodlightConfigIdDataType = '';
  protected $pathFiltersType = PathFilter::class;
  protected $pathFiltersDataType = 'array';
  /** @param DimensionValue[] */
  public function setActivityFilters($activityFilters)
  {
    $this->activityFilters = $activityFilters;
  }
  /** @return DimensionValue[] */
  public function getActivityFilters()
  {
    return $this->activityFilters;
  }
  /** @param ChannelGrouping */
  public function setCustomChannelGrouping(ChannelGrouping $customChannelGrouping)
  {
    $this->customChannelGrouping = $customChannelGrouping;
  }
  /** @return ChannelGrouping */
  public function getCustomChannelGrouping()
  {
    return $this->customChannelGrouping;
  }
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
  /** @param SortedDimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return SortedDimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param DimensionValue */
  public function setFloodlightConfigId(DimensionValue $floodlightConfigId)
  {
    $this->floodlightConfigId = $floodlightConfigId;
  }
  /** @return DimensionValue */
  public function getFloodlightConfigId()
  {
    return $this->floodlightConfigId;
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
  /** @param PathFilter[] */
  public function setPathFilters($pathFilters)
  {
    $this->pathFilters = $pathFilters;
  }
  /** @return PathFilter[] */
  public function getPathFilters()
  {
    return $this->pathFilters;
  }
}

class ReportPathToConversionCriteria extends \Google\Collection
{
  /** @var DimensionValue[] */
  public $activityFilters;
  /** @var SortedDimension[] */
  public $conversionDimensions;
  /** @var SortedDimension[] */
  public $customFloodlightVariables;
  /** @var DimensionValue[] */
  public $customRichMediaEvents;
  /** @var DateRange */
  public $dateRange;
  /** @var DimensionValue */
  public $floodlightConfigId;
  /** @var string[] */
  public $metricNames;
  /** @var SortedDimension[] */
  public $perInteractionDimensions;
  /** @var ReportPathToConversionCriteriaReportProperties */
  public $reportProperties;
  protected $collection_key = 'perInteractionDimensions';
  protected $activityFiltersType = DimensionValue::class;
  protected $activityFiltersDataType = 'array';
  protected $conversionDimensionsType = SortedDimension::class;
  protected $conversionDimensionsDataType = 'array';
  protected $customFloodlightVariablesType = SortedDimension::class;
  protected $customFloodlightVariablesDataType = 'array';
  protected $customRichMediaEventsType = DimensionValue::class;
  protected $customRichMediaEventsDataType = 'array';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $floodlightConfigIdType = DimensionValue::class;
  protected $floodlightConfigIdDataType = '';
  protected $perInteractionDimensionsType = SortedDimension::class;
  protected $perInteractionDimensionsDataType = 'array';
  protected $reportPropertiesType = ReportPathToConversionCriteriaReportProperties::class;
  protected $reportPropertiesDataType = '';
  /** @param DimensionValue[] */
  public function setActivityFilters($activityFilters)
  {
    $this->activityFilters = $activityFilters;
  }
  /** @return DimensionValue[] */
  public function getActivityFilters()
  {
    return $this->activityFilters;
  }
  /** @param SortedDimension[] */
  public function setConversionDimensions($conversionDimensions)
  {
    $this->conversionDimensions = $conversionDimensions;
  }
  /** @return SortedDimension[] */
  public function getConversionDimensions()
  {
    return $this->conversionDimensions;
  }
  /** @param SortedDimension[] */
  public function setCustomFloodlightVariables($customFloodlightVariables)
  {
    $this->customFloodlightVariables = $customFloodlightVariables;
  }
  /** @return SortedDimension[] */
  public function getCustomFloodlightVariables()
  {
    return $this->customFloodlightVariables;
  }
  /** @param DimensionValue[] */
  public function setCustomRichMediaEvents($customRichMediaEvents)
  {
    $this->customRichMediaEvents = $customRichMediaEvents;
  }
  /** @return DimensionValue[] */
  public function getCustomRichMediaEvents()
  {
    return $this->customRichMediaEvents;
  }
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
  /** @param DimensionValue */
  public function setFloodlightConfigId(DimensionValue $floodlightConfigId)
  {
    $this->floodlightConfigId = $floodlightConfigId;
  }
  /** @return DimensionValue */
  public function getFloodlightConfigId()
  {
    return $this->floodlightConfigId;
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
  /** @param SortedDimension[] */
  public function setPerInteractionDimensions($perInteractionDimensions)
  {
    $this->perInteractionDimensions = $perInteractionDimensions;
  }
  /** @return SortedDimension[] */
  public function getPerInteractionDimensions()
  {
    return $this->perInteractionDimensions;
  }
  /** @param ReportPathToConversionCriteriaReportProperties */
  public function setReportProperties(ReportPathToConversionCriteriaReportProperties $reportProperties)
  {
    $this->reportProperties = $reportProperties;
  }
  /** @return ReportPathToConversionCriteriaReportProperties */
  public function getReportProperties()
  {
    return $this->reportProperties;
  }
}

class ReportPathToConversionCriteriaReportProperties extends \Google\Model
{
  /** @var int */
  public $clicksLookbackWindow;
  /** @var int */
  public $impressionsLookbackWindow;
  /** @var bool */
  public $includeAttributedIPConversions;
  /** @var bool */
  public $includeUnattributedCookieConversions;
  /** @var bool */
  public $includeUnattributedIPConversions;
  /** @var int */
  public $maximumClickInteractions;
  /** @var int */
  public $maximumImpressionInteractions;
  /** @var int */
  public $maximumInteractionGap;
  /** @var bool */
  public $pivotOnInteractionPath;

  /** @param int */
  public function setClicksLookbackWindow($clicksLookbackWindow)
  {
    $this->clicksLookbackWindow = $clicksLookbackWindow;
  }
  /** @return int */
  public function getClicksLookbackWindow()
  {
    return $this->clicksLookbackWindow;
  }
  /** @param int */
  public function setImpressionsLookbackWindow($impressionsLookbackWindow)
  {
    $this->impressionsLookbackWindow = $impressionsLookbackWindow;
  }
  /** @return int */
  public function getImpressionsLookbackWindow()
  {
    return $this->impressionsLookbackWindow;
  }
  /** @param bool */
  public function setIncludeAttributedIPConversions($includeAttributedIPConversions)
  {
    $this->includeAttributedIPConversions = $includeAttributedIPConversions;
  }
  /** @return bool */
  public function getIncludeAttributedIPConversions()
  {
    return $this->includeAttributedIPConversions;
  }
  /** @param bool */
  public function setIncludeUnattributedCookieConversions($includeUnattributedCookieConversions)
  {
    $this->includeUnattributedCookieConversions = $includeUnattributedCookieConversions;
  }
  /** @return bool */
  public function getIncludeUnattributedCookieConversions()
  {
    return $this->includeUnattributedCookieConversions;
  }
  /** @param bool */
  public function setIncludeUnattributedIPConversions($includeUnattributedIPConversions)
  {
    $this->includeUnattributedIPConversions = $includeUnattributedIPConversions;
  }
  /** @return bool */
  public function getIncludeUnattributedIPConversions()
  {
    return $this->includeUnattributedIPConversions;
  }
  /** @param int */
  public function setMaximumClickInteractions($maximumClickInteractions)
  {
    $this->maximumClickInteractions = $maximumClickInteractions;
  }
  /** @return int */
  public function getMaximumClickInteractions()
  {
    return $this->maximumClickInteractions;
  }
  /** @param int */
  public function setMaximumImpressionInteractions($maximumImpressionInteractions)
  {
    $this->maximumImpressionInteractions = $maximumImpressionInteractions;
  }
  /** @return int */
  public function getMaximumImpressionInteractions()
  {
    return $this->maximumImpressionInteractions;
  }
  /** @param int */
  public function setMaximumInteractionGap($maximumInteractionGap)
  {
    $this->maximumInteractionGap = $maximumInteractionGap;
  }
  /** @return int */
  public function getMaximumInteractionGap()
  {
    return $this->maximumInteractionGap;
  }
  /** @param bool */
  public function setPivotOnInteractionPath($pivotOnInteractionPath)
  {
    $this->pivotOnInteractionPath = $pivotOnInteractionPath;
  }
  /** @return bool */
  public function getPivotOnInteractionPath()
  {
    return $this->pivotOnInteractionPath;
  }
}

class ReportReachCriteria extends \Google\Collection
{
  /** @var Activities */
  public $activities;
  /** @var CustomRichMediaEvents */
  public $customRichMediaEvents;
  /** @var DateRange */
  public $dateRange;
  /** @var DimensionValue[] */
  public $dimensionFilters;
  /** @var SortedDimension[] */
  public $dimensions;
  /** @var bool */
  public $enableAllDimensionCombinations;
  /** @var string[] */
  public $metricNames;
  /** @var string[] */
  public $reachByFrequencyMetricNames;
  protected $collection_key = 'reachByFrequencyMetricNames';
  protected $activitiesType = Activities::class;
  protected $activitiesDataType = '';
  protected $customRichMediaEventsType = CustomRichMediaEvents::class;
  protected $customRichMediaEventsDataType = '';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $dimensionFiltersType = DimensionValue::class;
  protected $dimensionFiltersDataType = 'array';
  protected $dimensionsType = SortedDimension::class;
  protected $dimensionsDataType = 'array';
  /** @param Activities */
  public function setActivities(Activities $activities)
  {
    $this->activities = $activities;
  }
  /** @return Activities */
  public function getActivities()
  {
    return $this->activities;
  }
  /** @param CustomRichMediaEvents */
  public function setCustomRichMediaEvents(CustomRichMediaEvents $customRichMediaEvents)
  {
    $this->customRichMediaEvents = $customRichMediaEvents;
  }
  /** @return CustomRichMediaEvents */
  public function getCustomRichMediaEvents()
  {
    return $this->customRichMediaEvents;
  }
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
  /** @param DimensionValue[] */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /** @return DimensionValue[] */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  /** @param SortedDimension[] */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return SortedDimension[] */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param bool */
  public function setEnableAllDimensionCombinations($enableAllDimensionCombinations)
  {
    $this->enableAllDimensionCombinations = $enableAllDimensionCombinations;
  }
  /** @return bool */
  public function getEnableAllDimensionCombinations()
  {
    return $this->enableAllDimensionCombinations;
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
  /** @param string[] */
  public function setReachByFrequencyMetricNames($reachByFrequencyMetricNames)
  {
    $this->reachByFrequencyMetricNames = $reachByFrequencyMetricNames;
  }
  /** @return string[] */
  public function getReachByFrequencyMetricNames()
  {
    return $this->reachByFrequencyMetricNames;
  }
}

class ReportSchedule extends \Google\Collection
{
  /** @var bool */
  public $active;
  /** @var int */
  public $every;
  /** @var string */
  public $expirationDate;
  /** @var string */
  public $repeats;
  /** @var string[] */
  public $repeatsOnWeekDays;
  /** @var string */
  public $runsOnDayOfMonth;
  /** @var string */
  public $startDate;
  protected $collection_key = 'repeatsOnWeekDays';
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
  /** @param int */
  public function setEvery($every)
  {
    $this->every = $every;
  }
  /** @return int */
  public function getEvery()
  {
    return $this->every;
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
  public function setRepeats($repeats)
  {
    $this->repeats = $repeats;
  }
  /** @return string */
  public function getRepeats()
  {
    return $this->repeats;
  }
  /** @param string[] */
  public function setRepeatsOnWeekDays($repeatsOnWeekDays)
  {
    $this->repeatsOnWeekDays = $repeatsOnWeekDays;
  }
  /** @return string[] */
  public function getRepeatsOnWeekDays()
  {
    return $this->repeatsOnWeekDays;
  }
  /** @param string */
  public function setRunsOnDayOfMonth($runsOnDayOfMonth)
  {
    $this->runsOnDayOfMonth = $runsOnDayOfMonth;
  }
  /** @return string */
  public function getRunsOnDayOfMonth()
  {
    return $this->runsOnDayOfMonth;
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

class ReportsConfiguration extends \Google\Model
{
  /** @var bool */
  public $exposureToConversionEnabled;
  /** @var LookbackConfiguration */
  public $lookbackConfiguration;
  /** @var string */
  public $reportGenerationTimeZoneId;
  protected $lookbackConfigurationType = LookbackConfiguration::class;
  protected $lookbackConfigurationDataType = '';
  /** @param bool */
  public function setExposureToConversionEnabled($exposureToConversionEnabled)
  {
    $this->exposureToConversionEnabled = $exposureToConversionEnabled;
  }
  /** @return bool */
  public function getExposureToConversionEnabled()
  {
    return $this->exposureToConversionEnabled;
  }
  /** @param LookbackConfiguration */
  public function setLookbackConfiguration(LookbackConfiguration $lookbackConfiguration)
  {
    $this->lookbackConfiguration = $lookbackConfiguration;
  }
  /** @return LookbackConfiguration */
  public function getLookbackConfiguration()
  {
    return $this->lookbackConfiguration;
  }
  /** @param string */
  public function setReportGenerationTimeZoneId($reportGenerationTimeZoneId)
  {
    $this->reportGenerationTimeZoneId = $reportGenerationTimeZoneId;
  }
  /** @return string */
  public function getReportGenerationTimeZoneId()
  {
    return $this->reportGenerationTimeZoneId;
  }
}

class RichMediaExitOverride extends \Google\Model
{
  /** @var ClickThroughUrl */
  public $clickThroughUrl;
  /** @var bool */
  public $enabled;
  /** @var string */
  public $exitId;
  protected $clickThroughUrlType = ClickThroughUrl::class;
  protected $clickThroughUrlDataType = '';
  /** @param ClickThroughUrl */
  public function setClickThroughUrl(ClickThroughUrl $clickThroughUrl)
  {
    $this->clickThroughUrl = $clickThroughUrl;
  }
  /** @return ClickThroughUrl */
  public function getClickThroughUrl()
  {
    return $this->clickThroughUrl;
  }
  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /** @param string */
  public function setExitId($exitId)
  {
    $this->exitId = $exitId;
  }
  /** @return string */
  public function getExitId()
  {
    return $this->exitId;
  }
}

class Rule extends \Google\Model
{
  /** @var string */
  public $assetId;
  /** @var string */
  public $name;
  /** @var string */
  public $targetingTemplateId;

  /** @param string */
  public function setAssetId($assetId)
  {
    $this->assetId = $assetId;
  }
  /** @return string */
  public function getAssetId()
  {
    return $this->assetId;
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
  public function setTargetingTemplateId($targetingTemplateId)
  {
    $this->targetingTemplateId = $targetingTemplateId;
  }
  /** @return string */
  public function getTargetingTemplateId()
  {
    return $this->targetingTemplateId;
  }
}

class Site extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $approved;
  /** @var string */
  public $directorySiteId;
  /** @var DimensionValue */
  public $directorySiteIdDimensionValue;
  /** @var string */
  public $id;
  /** @var DimensionValue */
  public $idDimensionValue;
  /** @var string */
  public $keyName;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var SiteContact[] */
  public $siteContacts;
  /** @var SiteSettings */
  public $siteSettings;
  /** @var string */
  public $subaccountId;
  /** @var SiteVideoSettings */
  public $videoSettings;
  protected $collection_key = 'siteContacts';
  protected $directorySiteIdDimensionValueType = DimensionValue::class;
  protected $directorySiteIdDimensionValueDataType = '';
  protected $idDimensionValueType = DimensionValue::class;
  protected $idDimensionValueDataType = '';
  protected $siteContactsType = SiteContact::class;
  protected $siteContactsDataType = 'array';
  protected $siteSettingsType = SiteSettings::class;
  protected $siteSettingsDataType = '';
  protected $videoSettingsType = SiteVideoSettings::class;
  protected $videoSettingsDataType = '';
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
  /** @param bool */
  public function setApproved($approved)
  {
    $this->approved = $approved;
  }
  /** @return bool */
  public function getApproved()
  {
    return $this->approved;
  }
  /** @param string */
  public function setDirectorySiteId($directorySiteId)
  {
    $this->directorySiteId = $directorySiteId;
  }
  /** @return string */
  public function getDirectorySiteId()
  {
    return $this->directorySiteId;
  }
  /** @param DimensionValue */
  public function setDirectorySiteIdDimensionValue(DimensionValue $directorySiteIdDimensionValue)
  {
    $this->directorySiteIdDimensionValue = $directorySiteIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getDirectorySiteIdDimensionValue()
  {
    return $this->directorySiteIdDimensionValue;
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
  /** @param DimensionValue */
  public function setIdDimensionValue(DimensionValue $idDimensionValue)
  {
    $this->idDimensionValue = $idDimensionValue;
  }
  /** @return DimensionValue */
  public function getIdDimensionValue()
  {
    return $this->idDimensionValue;
  }
  /** @param string */
  public function setKeyName($keyName)
  {
    $this->keyName = $keyName;
  }
  /** @return string */
  public function getKeyName()
  {
    return $this->keyName;
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
  /** @param SiteContact[] */
  public function setSiteContacts($siteContacts)
  {
    $this->siteContacts = $siteContacts;
  }
  /** @return SiteContact[] */
  public function getSiteContacts()
  {
    return $this->siteContacts;
  }
  /** @param SiteSettings */
  public function setSiteSettings(SiteSettings $siteSettings)
  {
    $this->siteSettings = $siteSettings;
  }
  /** @return SiteSettings */
  public function getSiteSettings()
  {
    return $this->siteSettings;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
  /** @param SiteVideoSettings */
  public function setVideoSettings(SiteVideoSettings $videoSettings)
  {
    $this->videoSettings = $videoSettings;
  }
  /** @return SiteVideoSettings */
  public function getVideoSettings()
  {
    return $this->videoSettings;
  }
}

class SiteCompanionSetting extends \Google\Collection
{
  /** @var bool */
  public $companionsDisabled;
  /** @var Size[] */
  public $enabledSizes;
  /** @var bool */
  public $imageOnly;
  /** @var string */
  public $kind;
  protected $collection_key = 'enabledSizes';
  protected $enabledSizesType = Size::class;
  protected $enabledSizesDataType = 'array';
  /** @param bool */
  public function setCompanionsDisabled($companionsDisabled)
  {
    $this->companionsDisabled = $companionsDisabled;
  }
  /** @return bool */
  public function getCompanionsDisabled()
  {
    return $this->companionsDisabled;
  }
  /** @param Size[] */
  public function setEnabledSizes($enabledSizes)
  {
    $this->enabledSizes = $enabledSizes;
  }
  /** @return Size[] */
  public function getEnabledSizes()
  {
    return $this->enabledSizes;
  }
  /** @param bool */
  public function setImageOnly($imageOnly)
  {
    $this->imageOnly = $imageOnly;
  }
  /** @return bool */
  public function getImageOnly()
  {
    return $this->imageOnly;
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

class SiteContact extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string */
  public $contactType;
  /** @var string */
  public $email;
  /** @var string */
  public $firstName;
  /** @var string */
  public $id;
  /** @var string */
  public $lastName;
  /** @var string */
  public $phone;
  /** @var string */
  public $title;

  /** @param string */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /** @return string */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param string */
  public function setContactType($contactType)
  {
    $this->contactType = $contactType;
  }
  /** @return string */
  public function getContactType()
  {
    return $this->contactType;
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

class SiteSettings extends \Google\Model
{
  /** @var bool */
  public $activeViewOptOut;
  /** @var bool */
  public $adBlockingOptOut;
  /** @var bool */
  public $disableNewCookie;
  /** @var TagSetting */
  public $tagSetting;
  /** @var bool */
  public $videoActiveViewOptOutTemplate;
  /** @var string */
  public $vpaidAdapterChoiceTemplate;
  protected $tagSettingType = TagSetting::class;
  protected $tagSettingDataType = '';
  /** @param bool */
  public function setActiveViewOptOut($activeViewOptOut)
  {
    $this->activeViewOptOut = $activeViewOptOut;
  }
  /** @return bool */
  public function getActiveViewOptOut()
  {
    return $this->activeViewOptOut;
  }
  /** @param bool */
  public function setAdBlockingOptOut($adBlockingOptOut)
  {
    $this->adBlockingOptOut = $adBlockingOptOut;
  }
  /** @return bool */
  public function getAdBlockingOptOut()
  {
    return $this->adBlockingOptOut;
  }
  /** @param bool */
  public function setDisableNewCookie($disableNewCookie)
  {
    $this->disableNewCookie = $disableNewCookie;
  }
  /** @return bool */
  public function getDisableNewCookie()
  {
    return $this->disableNewCookie;
  }
  /** @param TagSetting */
  public function setTagSetting(TagSetting $tagSetting)
  {
    $this->tagSetting = $tagSetting;
  }
  /** @return TagSetting */
  public function getTagSetting()
  {
    return $this->tagSetting;
  }
  /** @param bool */
  public function setVideoActiveViewOptOutTemplate($videoActiveViewOptOutTemplate)
  {
    $this->videoActiveViewOptOutTemplate = $videoActiveViewOptOutTemplate;
  }
  /** @return bool */
  public function getVideoActiveViewOptOutTemplate()
  {
    return $this->videoActiveViewOptOutTemplate;
  }
  /** @param string */
  public function setVpaidAdapterChoiceTemplate($vpaidAdapterChoiceTemplate)
  {
    $this->vpaidAdapterChoiceTemplate = $vpaidAdapterChoiceTemplate;
  }
  /** @return string */
  public function getVpaidAdapterChoiceTemplate()
  {
    return $this->vpaidAdapterChoiceTemplate;
  }
}

class SiteSkippableSetting extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var VideoOffset */
  public $progressOffset;
  /** @var VideoOffset */
  public $skipOffset;
  /** @var bool */
  public $skippable;
  protected $progressOffsetType = VideoOffset::class;
  protected $progressOffsetDataType = '';
  protected $skipOffsetType = VideoOffset::class;
  protected $skipOffsetDataType = '';
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
  /** @param VideoOffset */
  public function setProgressOffset(VideoOffset $progressOffset)
  {
    $this->progressOffset = $progressOffset;
  }
  /** @return VideoOffset */
  public function getProgressOffset()
  {
    return $this->progressOffset;
  }
  /** @param VideoOffset */
  public function setSkipOffset(VideoOffset $skipOffset)
  {
    $this->skipOffset = $skipOffset;
  }
  /** @return VideoOffset */
  public function getSkipOffset()
  {
    return $this->skipOffset;
  }
  /** @param bool */
  public function setSkippable($skippable)
  {
    $this->skippable = $skippable;
  }
  /** @return bool */
  public function getSkippable()
  {
    return $this->skippable;
  }
}

class SiteTranscodeSetting extends \Google\Collection
{
  /** @var int[] */
  public $enabledVideoFormats;
  /** @var string */
  public $kind;
  protected $collection_key = 'enabledVideoFormats';
  /** @param int[] */
  public function setEnabledVideoFormats($enabledVideoFormats)
  {
    $this->enabledVideoFormats = $enabledVideoFormats;
  }
  /** @return int[] */
  public function getEnabledVideoFormats()
  {
    return $this->enabledVideoFormats;
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

class SiteVideoSettings extends \Google\Model
{
  /** @var SiteCompanionSetting */
  public $companionSettings;
  /** @var string */
  public $kind;
  /** @var bool */
  public $obaEnabled;
  /** @var ObaIcon */
  public $obaSettings;
  /** @var string */
  public $orientation;
  /** @var string */
  public $publisherSpecificationId;
  /** @var SiteSkippableSetting */
  public $skippableSettings;
  /** @var SiteTranscodeSetting */
  public $transcodeSettings;
  protected $companionSettingsType = SiteCompanionSetting::class;
  protected $companionSettingsDataType = '';
  protected $obaSettingsType = ObaIcon::class;
  protected $obaSettingsDataType = '';
  protected $skippableSettingsType = SiteSkippableSetting::class;
  protected $skippableSettingsDataType = '';
  protected $transcodeSettingsType = SiteTranscodeSetting::class;
  protected $transcodeSettingsDataType = '';
  /** @param SiteCompanionSetting */
  public function setCompanionSettings(SiteCompanionSetting $companionSettings)
  {
    $this->companionSettings = $companionSettings;
  }
  /** @return SiteCompanionSetting */
  public function getCompanionSettings()
  {
    return $this->companionSettings;
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
  /** @param bool */
  public function setObaEnabled($obaEnabled)
  {
    $this->obaEnabled = $obaEnabled;
  }
  /** @return bool */
  public function getObaEnabled()
  {
    return $this->obaEnabled;
  }
  /** @param ObaIcon */
  public function setObaSettings(ObaIcon $obaSettings)
  {
    $this->obaSettings = $obaSettings;
  }
  /** @return ObaIcon */
  public function getObaSettings()
  {
    return $this->obaSettings;
  }
  /** @param string */
  public function setOrientation($orientation)
  {
    $this->orientation = $orientation;
  }
  /** @return string */
  public function getOrientation()
  {
    return $this->orientation;
  }
  /** @param string */
  public function setPublisherSpecificationId($publisherSpecificationId)
  {
    $this->publisherSpecificationId = $publisherSpecificationId;
  }
  /** @return string */
  public function getPublisherSpecificationId()
  {
    return $this->publisherSpecificationId;
  }
  /** @param SiteSkippableSetting */
  public function setSkippableSettings(SiteSkippableSetting $skippableSettings)
  {
    $this->skippableSettings = $skippableSettings;
  }
  /** @return SiteSkippableSetting */
  public function getSkippableSettings()
  {
    return $this->skippableSettings;
  }
  /** @param SiteTranscodeSetting */
  public function setTranscodeSettings(SiteTranscodeSetting $transcodeSettings)
  {
    $this->transcodeSettings = $transcodeSettings;
  }
  /** @return SiteTranscodeSetting */
  public function getTranscodeSettings()
  {
    return $this->transcodeSettings;
  }
}

class SitesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Site[] */
  public $sites;
  protected $collection_key = 'sites';
  protected $sitesType = Site::class;
  protected $sitesDataType = 'array';
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

class Size extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var bool */
  public $iab;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var int */
  public $width;

  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param bool */
  public function setIab($iab)
  {
    $this->iab = $iab;
  }
  /** @return bool */
  public function getIab()
  {
    return $this->iab;
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
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class SizesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var Size[] */
  public $sizes;
  protected $collection_key = 'sizes';
  protected $sizesType = Size::class;
  protected $sizesDataType = 'array';
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
  /** @param Size[] */
  public function setSizes($sizes)
  {
    $this->sizes = $sizes;
  }
  /** @return Size[] */
  public function getSizes()
  {
    return $this->sizes;
  }
}

class SkippableSetting extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var VideoOffset */
  public $progressOffset;
  /** @var VideoOffset */
  public $skipOffset;
  /** @var bool */
  public $skippable;
  protected $progressOffsetType = VideoOffset::class;
  protected $progressOffsetDataType = '';
  protected $skipOffsetType = VideoOffset::class;
  protected $skipOffsetDataType = '';
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
  /** @param VideoOffset */
  public function setProgressOffset(VideoOffset $progressOffset)
  {
    $this->progressOffset = $progressOffset;
  }
  /** @return VideoOffset */
  public function getProgressOffset()
  {
    return $this->progressOffset;
  }
  /** @param VideoOffset */
  public function setSkipOffset(VideoOffset $skipOffset)
  {
    $this->skipOffset = $skipOffset;
  }
  /** @return VideoOffset */
  public function getSkipOffset()
  {
    return $this->skipOffset;
  }
  /** @param bool */
  public function setSkippable($skippable)
  {
    $this->skippable = $skippable;
  }
  /** @return bool */
  public function getSkippable()
  {
    return $this->skippable;
  }
}

class SortedDimension extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $sortOrder;

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
  /** @param string */
  public function setSortOrder($sortOrder)
  {
    $this->sortOrder = $sortOrder;
  }
  /** @return string */
  public function getSortOrder()
  {
    return $this->sortOrder;
  }
}

class Subaccount extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string[] */
  public $availablePermissionIds;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  protected $collection_key = 'availablePermissionIds';
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
  /** @param string[] */
  public function setAvailablePermissionIds($availablePermissionIds)
  {
    $this->availablePermissionIds = $availablePermissionIds;
  }
  /** @return string[] */
  public function getAvailablePermissionIds()
  {
    return $this->availablePermissionIds;
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
}

class SubaccountsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var Subaccount[] */
  public $subaccounts;
  protected $collection_key = 'subaccounts';
  protected $subaccountsType = Subaccount::class;
  protected $subaccountsDataType = 'array';
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
  /** @param Subaccount[] */
  public function setSubaccounts($subaccounts)
  {
    $this->subaccounts = $subaccounts;
  }
  /** @return Subaccount[] */
  public function getSubaccounts()
  {
    return $this->subaccounts;
  }
}

class TagData extends \Google\Model
{
  /** @var string */
  public $adId;
  /** @var string */
  public $clickTag;
  /** @var string */
  public $creativeId;
  /** @var string */
  public $format;
  /** @var string */
  public $impressionTag;

  /** @param string */
  public function setAdId($adId)
  {
    $this->adId = $adId;
  }
  /** @return string */
  public function getAdId()
  {
    return $this->adId;
  }
  /** @param string */
  public function setClickTag($clickTag)
  {
    $this->clickTag = $clickTag;
  }
  /** @return string */
  public function getClickTag()
  {
    return $this->clickTag;
  }
  /** @param string */
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  /** @return string */
  public function getCreativeId()
  {
    return $this->creativeId;
  }
  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
  }
  /** @param string */
  public function setImpressionTag($impressionTag)
  {
    $this->impressionTag = $impressionTag;
  }
  /** @return string */
  public function getImpressionTag()
  {
    return $this->impressionTag;
  }
}

class TagSetting extends \Google\Model
{
  /** @var string */
  public $additionalKeyValues;
  /** @var bool */
  public $includeClickThroughUrls;
  /** @var bool */
  public $includeClickTracking;
  /** @var string */
  public $keywordOption;

  /** @param string */
  public function setAdditionalKeyValues($additionalKeyValues)
  {
    $this->additionalKeyValues = $additionalKeyValues;
  }
  /** @return string */
  public function getAdditionalKeyValues()
  {
    return $this->additionalKeyValues;
  }
  /** @param bool */
  public function setIncludeClickThroughUrls($includeClickThroughUrls)
  {
    $this->includeClickThroughUrls = $includeClickThroughUrls;
  }
  /** @return bool */
  public function getIncludeClickThroughUrls()
  {
    return $this->includeClickThroughUrls;
  }
  /** @param bool */
  public function setIncludeClickTracking($includeClickTracking)
  {
    $this->includeClickTracking = $includeClickTracking;
  }
  /** @return bool */
  public function getIncludeClickTracking()
  {
    return $this->includeClickTracking;
  }
  /** @param string */
  public function setKeywordOption($keywordOption)
  {
    $this->keywordOption = $keywordOption;
  }
  /** @return string */
  public function getKeywordOption()
  {
    return $this->keywordOption;
  }
}

class TagSettings extends \Google\Model
{
  /** @var bool */
  public $dynamicTagEnabled;
  /** @var bool */
  public $imageTagEnabled;

  /** @param bool */
  public function setDynamicTagEnabled($dynamicTagEnabled)
  {
    $this->dynamicTagEnabled = $dynamicTagEnabled;
  }
  /** @return bool */
  public function getDynamicTagEnabled()
  {
    return $this->dynamicTagEnabled;
  }
  /** @param bool */
  public function setImageTagEnabled($imageTagEnabled)
  {
    $this->imageTagEnabled = $imageTagEnabled;
  }
  /** @return bool */
  public function getImageTagEnabled()
  {
    return $this->imageTagEnabled;
  }
}

class TargetWindow extends \Google\Model
{
  /** @var string */
  public $customHtml;
  /** @var string */
  public $targetWindowOption;

  /** @param string */
  public function setCustomHtml($customHtml)
  {
    $this->customHtml = $customHtml;
  }
  /** @return string */
  public function getCustomHtml()
  {
    return $this->customHtml;
  }
  /** @param string */
  public function setTargetWindowOption($targetWindowOption)
  {
    $this->targetWindowOption = $targetWindowOption;
  }
  /** @return string */
  public function getTargetWindowOption()
  {
    return $this->targetWindowOption;
  }
}

class TargetableRemarketingList extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $active;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $lifeSpan;
  /** @var string */
  public $listSize;
  /** @var string */
  public $listSource;
  /** @var string */
  public $name;
  /** @var string */
  public $subaccountId;
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
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
  public function setLifeSpan($lifeSpan)
  {
    $this->lifeSpan = $lifeSpan;
  }
  /** @return string */
  public function getLifeSpan()
  {
    return $this->lifeSpan;
  }
  /** @param string */
  public function setListSize($listSize)
  {
    $this->listSize = $listSize;
  }
  /** @return string */
  public function getListSize()
  {
    return $this->listSize;
  }
  /** @param string */
  public function setListSource($listSource)
  {
    $this->listSource = $listSource;
  }
  /** @return string */
  public function getListSource()
  {
    return $this->listSource;
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
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
}

class TargetableRemarketingListsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var TargetableRemarketingList[] */
  public $targetableRemarketingLists;
  protected $collection_key = 'targetableRemarketingLists';
  protected $targetableRemarketingListsType = TargetableRemarketingList::class;
  protected $targetableRemarketingListsDataType = 'array';
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
  /** @param TargetableRemarketingList[] */
  public function setTargetableRemarketingLists($targetableRemarketingLists)
  {
    $this->targetableRemarketingLists = $targetableRemarketingLists;
  }
  /** @return TargetableRemarketingList[] */
  public function getTargetableRemarketingLists()
  {
    return $this->targetableRemarketingLists;
  }
}

class TargetingTemplate extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $advertiserId;
  /** @var DimensionValue */
  public $advertiserIdDimensionValue;
  /** @var DayPartTargeting */
  public $dayPartTargeting;
  /** @var GeoTargeting */
  public $geoTargeting;
  /** @var string */
  public $id;
  /** @var KeyValueTargetingExpression */
  public $keyValueTargetingExpression;
  /** @var string */
  public $kind;
  /** @var LanguageTargeting */
  public $languageTargeting;
  /** @var ListTargetingExpression */
  public $listTargetingExpression;
  /** @var string */
  public $name;
  /** @var string */
  public $subaccountId;
  /** @var TechnologyTargeting */
  public $technologyTargeting;
  protected $advertiserIdDimensionValueType = DimensionValue::class;
  protected $advertiserIdDimensionValueDataType = '';
  protected $dayPartTargetingType = DayPartTargeting::class;
  protected $dayPartTargetingDataType = '';
  protected $geoTargetingType = GeoTargeting::class;
  protected $geoTargetingDataType = '';
  protected $keyValueTargetingExpressionType = KeyValueTargetingExpression::class;
  protected $keyValueTargetingExpressionDataType = '';
  protected $languageTargetingType = LanguageTargeting::class;
  protected $languageTargetingDataType = '';
  protected $listTargetingExpressionType = ListTargetingExpression::class;
  protected $listTargetingExpressionDataType = '';
  protected $technologyTargetingType = TechnologyTargeting::class;
  protected $technologyTargetingDataType = '';
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
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /** @return string */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /** @param DimensionValue */
  public function setAdvertiserIdDimensionValue(DimensionValue $advertiserIdDimensionValue)
  {
    $this->advertiserIdDimensionValue = $advertiserIdDimensionValue;
  }
  /** @return DimensionValue */
  public function getAdvertiserIdDimensionValue()
  {
    return $this->advertiserIdDimensionValue;
  }
  /** @param DayPartTargeting */
  public function setDayPartTargeting(DayPartTargeting $dayPartTargeting)
  {
    $this->dayPartTargeting = $dayPartTargeting;
  }
  /** @return DayPartTargeting */
  public function getDayPartTargeting()
  {
    return $this->dayPartTargeting;
  }
  /** @param GeoTargeting */
  public function setGeoTargeting(GeoTargeting $geoTargeting)
  {
    $this->geoTargeting = $geoTargeting;
  }
  /** @return GeoTargeting */
  public function getGeoTargeting()
  {
    return $this->geoTargeting;
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
  /** @param KeyValueTargetingExpression */
  public function setKeyValueTargetingExpression(KeyValueTargetingExpression $keyValueTargetingExpression)
  {
    $this->keyValueTargetingExpression = $keyValueTargetingExpression;
  }
  /** @return KeyValueTargetingExpression */
  public function getKeyValueTargetingExpression()
  {
    return $this->keyValueTargetingExpression;
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
  /** @param LanguageTargeting */
  public function setLanguageTargeting(LanguageTargeting $languageTargeting)
  {
    $this->languageTargeting = $languageTargeting;
  }
  /** @return LanguageTargeting */
  public function getLanguageTargeting()
  {
    return $this->languageTargeting;
  }
  /** @param ListTargetingExpression */
  public function setListTargetingExpression(ListTargetingExpression $listTargetingExpression)
  {
    $this->listTargetingExpression = $listTargetingExpression;
  }
  /** @return ListTargetingExpression */
  public function getListTargetingExpression()
  {
    return $this->listTargetingExpression;
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
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
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
}

class TargetingTemplatesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var TargetingTemplate[] */
  public $targetingTemplates;
  protected $collection_key = 'targetingTemplates';
  protected $targetingTemplatesType = TargetingTemplate::class;
  protected $targetingTemplatesDataType = 'array';
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
  /** @param TargetingTemplate[] */
  public function setTargetingTemplates($targetingTemplates)
  {
    $this->targetingTemplates = $targetingTemplates;
  }
  /** @return TargetingTemplate[] */
  public function getTargetingTemplates()
  {
    return $this->targetingTemplates;
  }
}

class TechnologyTargeting extends \Google\Collection
{
  /** @var Browser[] */
  public $browsers;
  /** @var ConnectionType[] */
  public $connectionTypes;
  /** @var MobileCarrier[] */
  public $mobileCarriers;
  /** @var OperatingSystemVersion[] */
  public $operatingSystemVersions;
  /** @var OperatingSystem[] */
  public $operatingSystems;
  /** @var PlatformType[] */
  public $platformTypes;
  protected $collection_key = 'platformTypes';
  protected $browsersType = Browser::class;
  protected $browsersDataType = 'array';
  protected $connectionTypesType = ConnectionType::class;
  protected $connectionTypesDataType = 'array';
  protected $mobileCarriersType = MobileCarrier::class;
  protected $mobileCarriersDataType = 'array';
  protected $operatingSystemVersionsType = OperatingSystemVersion::class;
  protected $operatingSystemVersionsDataType = 'array';
  protected $operatingSystemsType = OperatingSystem::class;
  protected $operatingSystemsDataType = 'array';
  protected $platformTypesType = PlatformType::class;
  protected $platformTypesDataType = 'array';
  /** @param Browser[] */
  public function setBrowsers($browsers)
  {
    $this->browsers = $browsers;
  }
  /** @return Browser[] */
  public function getBrowsers()
  {
    return $this->browsers;
  }
  /** @param ConnectionType[] */
  public function setConnectionTypes($connectionTypes)
  {
    $this->connectionTypes = $connectionTypes;
  }
  /** @return ConnectionType[] */
  public function getConnectionTypes()
  {
    return $this->connectionTypes;
  }
  /** @param MobileCarrier[] */
  public function setMobileCarriers($mobileCarriers)
  {
    $this->mobileCarriers = $mobileCarriers;
  }
  /** @return MobileCarrier[] */
  public function getMobileCarriers()
  {
    return $this->mobileCarriers;
  }
  /** @param OperatingSystemVersion[] */
  public function setOperatingSystemVersions($operatingSystemVersions)
  {
    $this->operatingSystemVersions = $operatingSystemVersions;
  }
  /** @return OperatingSystemVersion[] */
  public function getOperatingSystemVersions()
  {
    return $this->operatingSystemVersions;
  }
  /** @param OperatingSystem[] */
  public function setOperatingSystems($operatingSystems)
  {
    $this->operatingSystems = $operatingSystems;
  }
  /** @return OperatingSystem[] */
  public function getOperatingSystems()
  {
    return $this->operatingSystems;
  }
  /** @param PlatformType[] */
  public function setPlatformTypes($platformTypes)
  {
    $this->platformTypes = $platformTypes;
  }
  /** @return PlatformType[] */
  public function getPlatformTypes()
  {
    return $this->platformTypes;
  }
}

class ThirdPartyAuthenticationToken extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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

class ThirdPartyTrackingUrl extends \Google\Model
{
  /** @var string */
  public $thirdPartyUrlType;
  /** @var string */
  public $url;

  /** @param string */
  public function setThirdPartyUrlType($thirdPartyUrlType)
  {
    $this->thirdPartyUrlType = $thirdPartyUrlType;
  }
  /** @return string */
  public function getThirdPartyUrlType()
  {
    return $this->thirdPartyUrlType;
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

class TranscodeSetting extends \Google\Collection
{
  /** @var int[] */
  public $enabledVideoFormats;
  /** @var string */
  public $kind;
  protected $collection_key = 'enabledVideoFormats';
  /** @param int[] */
  public function setEnabledVideoFormats($enabledVideoFormats)
  {
    $this->enabledVideoFormats = $enabledVideoFormats;
  }
  /** @return int[] */
  public function getEnabledVideoFormats()
  {
    return $this->enabledVideoFormats;
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

class UniversalAdId extends \Google\Model
{
  /** @var string */
  public $registry;
  /** @var string */
  public $value;

  /** @param string */
  public function setRegistry($registry)
  {
    $this->registry = $registry;
  }
  /** @return string */
  public function getRegistry()
  {
    return $this->registry;
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

class UserDefinedVariableConfiguration extends \Google\Model
{
  /** @var string */
  public $dataType;
  /** @var string */
  public $reportName;
  /** @var string */
  public $variableType;

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
  public function setReportName($reportName)
  {
    $this->reportName = $reportName;
  }
  /** @return string */
  public function getReportName()
  {
    return $this->reportName;
  }
  /** @param string */
  public function setVariableType($variableType)
  {
    $this->variableType = $variableType;
  }
  /** @return string */
  public function getVariableType()
  {
    return $this->variableType;
  }
}

class UserProfile extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $accountName;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $profileId;
  /** @var string */
  public $subAccountId;
  /** @var string */
  public $subAccountName;
  /** @var string */
  public $userName;

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
  public function setAccountName($accountName)
  {
    $this->accountName = $accountName;
  }
  /** @return string */
  public function getAccountName()
  {
    return $this->accountName;
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
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  /** @return string */
  public function getProfileId()
  {
    return $this->profileId;
  }
  /** @param string */
  public function setSubAccountId($subAccountId)
  {
    $this->subAccountId = $subAccountId;
  }
  /** @return string */
  public function getSubAccountId()
  {
    return $this->subAccountId;
  }
  /** @param string */
  public function setSubAccountName($subAccountName)
  {
    $this->subAccountName = $subAccountName;
  }
  /** @return string */
  public function getSubAccountName()
  {
    return $this->subAccountName;
  }
  /** @param string */
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  /** @return string */
  public function getUserName()
  {
    return $this->userName;
  }
}

class UserProfileList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var UserProfile[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = UserProfile::class;
  protected $itemsDataType = 'array';
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
  /** @param UserProfile[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return UserProfile[] */
  public function getItems()
  {
    return $this->items;
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

class UserRole extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var bool */
  public $defaultUserRole;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $parentUserRoleId;
  /** @var UserRolePermission[] */
  public $permissions;
  /** @var string */
  public $subaccountId;
  protected $collection_key = 'permissions';
  protected $permissionsType = UserRolePermission::class;
  protected $permissionsDataType = 'array';
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
  /** @param bool */
  public function setDefaultUserRole($defaultUserRole)
  {
    $this->defaultUserRole = $defaultUserRole;
  }
  /** @return bool */
  public function getDefaultUserRole()
  {
    return $this->defaultUserRole;
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
  /** @param string */
  public function setParentUserRoleId($parentUserRoleId)
  {
    $this->parentUserRoleId = $parentUserRoleId;
  }
  /** @return string */
  public function getParentUserRoleId()
  {
    return $this->parentUserRoleId;
  }
  /** @param UserRolePermission[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return UserRolePermission[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /** @param string */
  public function setSubaccountId($subaccountId)
  {
    $this->subaccountId = $subaccountId;
  }
  /** @return string */
  public function getSubaccountId()
  {
    return $this->subaccountId;
  }
}

class UserRolePermission extends \Google\Model
{
  /** @var string */
  public $availability;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $permissionGroupId;

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
  /** @param string */
  public function setPermissionGroupId($permissionGroupId)
  {
    $this->permissionGroupId = $permissionGroupId;
  }
  /** @return string */
  public function getPermissionGroupId()
  {
    return $this->permissionGroupId;
  }
}

class UserRolePermissionGroup extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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
}

class UserRolePermissionGroupsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var UserRolePermissionGroup[] */
  public $userRolePermissionGroups;
  protected $collection_key = 'userRolePermissionGroups';
  protected $userRolePermissionGroupsType = UserRolePermissionGroup::class;
  protected $userRolePermissionGroupsDataType = 'array';
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
  /** @param UserRolePermissionGroup[] */
  public function setUserRolePermissionGroups($userRolePermissionGroups)
  {
    $this->userRolePermissionGroups = $userRolePermissionGroups;
  }
  /** @return UserRolePermissionGroup[] */
  public function getUserRolePermissionGroups()
  {
    return $this->userRolePermissionGroups;
  }
}

class UserRolePermissionsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var UserRolePermission[] */
  public $userRolePermissions;
  protected $collection_key = 'userRolePermissions';
  protected $userRolePermissionsType = UserRolePermission::class;
  protected $userRolePermissionsDataType = 'array';
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
  /** @param UserRolePermission[] */
  public function setUserRolePermissions($userRolePermissions)
  {
    $this->userRolePermissions = $userRolePermissions;
  }
  /** @return UserRolePermission[] */
  public function getUserRolePermissions()
  {
    return $this->userRolePermissions;
  }
}

class UserRolesListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var UserRole[] */
  public $userRoles;
  protected $collection_key = 'userRoles';
  protected $userRolesType = UserRole::class;
  protected $userRolesDataType = 'array';
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
  /** @param UserRole[] */
  public function setUserRoles($userRoles)
  {
    $this->userRoles = $userRoles;
  }
  /** @return UserRole[] */
  public function getUserRoles()
  {
    return $this->userRoles;
  }
}

class UvarFilter extends \Google\Collection
{
  /** @var bool */
  public $complement;
  /** @var string */
  public $index;
  /** @var string */
  public $kind;
  /** @var string */
  public $match;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param bool */
  public function setComplement($complement)
  {
    $this->complement = $complement;
  }
  /** @return bool */
  public function getComplement()
  {
    return $this->complement;
  }
  /** @param string */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return string */
  public function getIndex()
  {
    return $this->index;
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
  public function setMatch($match)
  {
    $this->match = $match;
  }
  /** @return string */
  public function getMatch()
  {
    return $this->match;
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

class VideoFormat extends \Google\Model
{
  /** @var string */
  public $fileType;
  /** @var int */
  public $id;
  /** @var string */
  public $kind;
  /** @var Size */
  public $resolution;
  /** @var int */
  public $targetBitRate;
  protected $resolutionType = Size::class;
  protected $resolutionDataType = '';
  /** @param string */
  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }
  /** @return string */
  public function getFileType()
  {
    return $this->fileType;
  }
  /** @param int */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return int */
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
  /** @param Size */
  public function setResolution(Size $resolution)
  {
    $this->resolution = $resolution;
  }
  /** @return Size */
  public function getResolution()
  {
    return $this->resolution;
  }
  /** @param int */
  public function setTargetBitRate($targetBitRate)
  {
    $this->targetBitRate = $targetBitRate;
  }
  /** @return int */
  public function getTargetBitRate()
  {
    return $this->targetBitRate;
  }
}

class VideoFormatsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var VideoFormat[] */
  public $videoFormats;
  protected $collection_key = 'videoFormats';
  protected $videoFormatsType = VideoFormat::class;
  protected $videoFormatsDataType = 'array';
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
  /** @param VideoFormat[] */
  public function setVideoFormats($videoFormats)
  {
    $this->videoFormats = $videoFormats;
  }
  /** @return VideoFormat[] */
  public function getVideoFormats()
  {
    return $this->videoFormats;
  }
}

class VideoOffset extends \Google\Model
{
  /** @var int */
  public $offsetPercentage;
  /** @var int */
  public $offsetSeconds;

  /** @param int */
  public function setOffsetPercentage($offsetPercentage)
  {
    $this->offsetPercentage = $offsetPercentage;
  }
  /** @return int */
  public function getOffsetPercentage()
  {
    return $this->offsetPercentage;
  }
  /** @param int */
  public function setOffsetSeconds($offsetSeconds)
  {
    $this->offsetSeconds = $offsetSeconds;
  }
  /** @return int */
  public function getOffsetSeconds()
  {
    return $this->offsetSeconds;
  }
}

class VideoSettings extends \Google\Model
{
  /** @var CompanionSetting */
  public $companionSettings;
  /** @var int */
  public $durationSeconds;
  /** @var string */
  public $kind;
  /** @var bool */
  public $obaEnabled;
  /** @var ObaIcon */
  public $obaSettings;
  /** @var string */
  public $orientation;
  /** @var string */
  public $publisherSpecificationId;
  /** @var SkippableSetting */
  public $skippableSettings;
  /** @var TranscodeSetting */
  public $transcodeSettings;
  protected $companionSettingsType = CompanionSetting::class;
  protected $companionSettingsDataType = '';
  protected $obaSettingsType = ObaIcon::class;
  protected $obaSettingsDataType = '';
  protected $skippableSettingsType = SkippableSetting::class;
  protected $skippableSettingsDataType = '';
  protected $transcodeSettingsType = TranscodeSetting::class;
  protected $transcodeSettingsDataType = '';
  /** @param CompanionSetting */
  public function setCompanionSettings(CompanionSetting $companionSettings)
  {
    $this->companionSettings = $companionSettings;
  }
  /** @return CompanionSetting */
  public function getCompanionSettings()
  {
    return $this->companionSettings;
  }
  /** @param int */
  public function setDurationSeconds($durationSeconds)
  {
    $this->durationSeconds = $durationSeconds;
  }
  /** @return int */
  public function getDurationSeconds()
  {
    return $this->durationSeconds;
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
  /** @param bool */
  public function setObaEnabled($obaEnabled)
  {
    $this->obaEnabled = $obaEnabled;
  }
  /** @return bool */
  public function getObaEnabled()
  {
    return $this->obaEnabled;
  }
  /** @param ObaIcon */
  public function setObaSettings(ObaIcon $obaSettings)
  {
    $this->obaSettings = $obaSettings;
  }
  /** @return ObaIcon */
  public function getObaSettings()
  {
    return $this->obaSettings;
  }
  /** @param string */
  public function setOrientation($orientation)
  {
    $this->orientation = $orientation;
  }
  /** @return string */
  public function getOrientation()
  {
    return $this->orientation;
  }
  /** @param string */
  public function setPublisherSpecificationId($publisherSpecificationId)
  {
    $this->publisherSpecificationId = $publisherSpecificationId;
  }
  /** @return string */
  public function getPublisherSpecificationId()
  {
    return $this->publisherSpecificationId;
  }
  /** @param SkippableSetting */
  public function setSkippableSettings(SkippableSetting $skippableSettings)
  {
    $this->skippableSettings = $skippableSettings;
  }
  /** @return SkippableSetting */
  public function getSkippableSettings()
  {
    return $this->skippableSettings;
  }
  /** @param TranscodeSetting */
  public function setTranscodeSettings(TranscodeSetting $transcodeSettings)
  {
    $this->transcodeSettings = $transcodeSettings;
  }
  /** @return TranscodeSetting */
  public function getTranscodeSettings()
  {
    return $this->transcodeSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Account::class, 'Google_Service_Dfareporting_Account');
class_alias(AccountActiveAdSummary::class, 'Google_Service_Dfareporting_AccountActiveAdSummary');
class_alias(AccountPermission::class, 'Google_Service_Dfareporting_AccountPermission');
class_alias(AccountPermissionGroup::class, 'Google_Service_Dfareporting_AccountPermissionGroup');
class_alias(AccountPermissionGroupsListResponse::class, 'Google_Service_Dfareporting_AccountPermissionGroupsListResponse');
class_alias(AccountPermissionsListResponse::class, 'Google_Service_Dfareporting_AccountPermissionsListResponse');
class_alias(AccountUserProfile::class, 'Google_Service_Dfareporting_AccountUserProfile');
class_alias(AccountUserProfilesListResponse::class, 'Google_Service_Dfareporting_AccountUserProfilesListResponse');
class_alias(AccountsListResponse::class, 'Google_Service_Dfareporting_AccountsListResponse');
class_alias(Activities::class, 'Google_Service_Dfareporting_Activities');
class_alias(Ad::class, 'Google_Service_Dfareporting_Ad');
class_alias(AdBlockingConfiguration::class, 'Google_Service_Dfareporting_AdBlockingConfiguration');
class_alias(AdSlot::class, 'Google_Service_Dfareporting_AdSlot');
class_alias(AdsListResponse::class, 'Google_Service_Dfareporting_AdsListResponse');
class_alias(Advertiser::class, 'Google_Service_Dfareporting_Advertiser');
class_alias(AdvertiserGroup::class, 'Google_Service_Dfareporting_AdvertiserGroup');
class_alias(AdvertiserGroupsListResponse::class, 'Google_Service_Dfareporting_AdvertiserGroupsListResponse');
class_alias(AdvertiserInvoicesListResponse::class, 'Google_Service_Dfareporting_AdvertiserInvoicesListResponse');
class_alias(AdvertiserLandingPagesListResponse::class, 'Google_Service_Dfareporting_AdvertiserLandingPagesListResponse');
class_alias(AdvertisersListResponse::class, 'Google_Service_Dfareporting_AdvertisersListResponse');
class_alias(AudienceSegment::class, 'Google_Service_Dfareporting_AudienceSegment');
class_alias(AudienceSegmentGroup::class, 'Google_Service_Dfareporting_AudienceSegmentGroup');
class_alias(BillingAssignment::class, 'Google_Service_Dfareporting_BillingAssignment');
class_alias(BillingAssignmentsListResponse::class, 'Google_Service_Dfareporting_BillingAssignmentsListResponse');
class_alias(BillingProfile::class, 'Google_Service_Dfareporting_BillingProfile');
class_alias(BillingProfilesListResponse::class, 'Google_Service_Dfareporting_BillingProfilesListResponse');
class_alias(BillingRate::class, 'Google_Service_Dfareporting_BillingRate');
class_alias(BillingRateTieredRate::class, 'Google_Service_Dfareporting_BillingRateTieredRate');
class_alias(BillingRatesListResponse::class, 'Google_Service_Dfareporting_BillingRatesListResponse');
class_alias(Browser::class, 'Google_Service_Dfareporting_Browser');
class_alias(BrowsersListResponse::class, 'Google_Service_Dfareporting_BrowsersListResponse');
class_alias(Campaign::class, 'Google_Service_Dfareporting_Campaign');
class_alias(CampaignCreativeAssociation::class, 'Google_Service_Dfareporting_CampaignCreativeAssociation');
class_alias(CampaignCreativeAssociationsListResponse::class, 'Google_Service_Dfareporting_CampaignCreativeAssociationsListResponse');
class_alias(CampaignSummary::class, 'Google_Service_Dfareporting_CampaignSummary');
class_alias(CampaignsListResponse::class, 'Google_Service_Dfareporting_CampaignsListResponse');
class_alias(ChangeLog::class, 'Google_Service_Dfareporting_ChangeLog');
class_alias(ChangeLogsListResponse::class, 'Google_Service_Dfareporting_ChangeLogsListResponse');
class_alias(ChannelGrouping::class, 'Google_Service_Dfareporting_ChannelGrouping');
class_alias(ChannelGroupingRule::class, 'Google_Service_Dfareporting_ChannelGroupingRule');
class_alias(CitiesListResponse::class, 'Google_Service_Dfareporting_CitiesListResponse');
class_alias(City::class, 'Google_Service_Dfareporting_City');
class_alias(ClickTag::class, 'Google_Service_Dfareporting_ClickTag');
class_alias(ClickThroughUrl::class, 'Google_Service_Dfareporting_ClickThroughUrl');
class_alias(ClickThroughUrlSuffixProperties::class, 'Google_Service_Dfareporting_ClickThroughUrlSuffixProperties');
class_alias(CompanionClickThroughOverride::class, 'Google_Service_Dfareporting_CompanionClickThroughOverride');
class_alias(CompanionSetting::class, 'Google_Service_Dfareporting_CompanionSetting');
class_alias(CompatibleFields::class, 'Google_Service_Dfareporting_CompatibleFields');
class_alias(ConnectionType::class, 'Google_Service_Dfareporting_ConnectionType');
class_alias(ConnectionTypesListResponse::class, 'Google_Service_Dfareporting_ConnectionTypesListResponse');
class_alias(ContentCategoriesListResponse::class, 'Google_Service_Dfareporting_ContentCategoriesListResponse');
class_alias(ContentCategory::class, 'Google_Service_Dfareporting_ContentCategory');
class_alias(Conversion::class, 'Google_Service_Dfareporting_Conversion');
class_alias(ConversionError::class, 'Google_Service_Dfareporting_ConversionError');
class_alias(ConversionStatus::class, 'Google_Service_Dfareporting_ConversionStatus');
class_alias(ConversionsBatchInsertRequest::class, 'Google_Service_Dfareporting_ConversionsBatchInsertRequest');
class_alias(ConversionsBatchInsertResponse::class, 'Google_Service_Dfareporting_ConversionsBatchInsertResponse');
class_alias(ConversionsBatchUpdateRequest::class, 'Google_Service_Dfareporting_ConversionsBatchUpdateRequest');
class_alias(ConversionsBatchUpdateResponse::class, 'Google_Service_Dfareporting_ConversionsBatchUpdateResponse');
class_alias(CountriesListResponse::class, 'Google_Service_Dfareporting_CountriesListResponse');
class_alias(Country::class, 'Google_Service_Dfareporting_Country');
class_alias(Creative::class, 'Google_Service_Dfareporting_Creative');
class_alias(CreativeAsset::class, 'Google_Service_Dfareporting_CreativeAsset');
class_alias(CreativeAssetId::class, 'Google_Service_Dfareporting_CreativeAssetId');
class_alias(CreativeAssetMetadata::class, 'Google_Service_Dfareporting_CreativeAssetMetadata');
class_alias(CreativeAssetSelection::class, 'Google_Service_Dfareporting_CreativeAssetSelection');
class_alias(CreativeAssignment::class, 'Google_Service_Dfareporting_CreativeAssignment');
class_alias(CreativeClickThroughUrl::class, 'Google_Service_Dfareporting_CreativeClickThroughUrl');
class_alias(CreativeCustomEvent::class, 'Google_Service_Dfareporting_CreativeCustomEvent');
class_alias(CreativeField::class, 'Google_Service_Dfareporting_CreativeField');
class_alias(CreativeFieldAssignment::class, 'Google_Service_Dfareporting_CreativeFieldAssignment');
class_alias(CreativeFieldValue::class, 'Google_Service_Dfareporting_CreativeFieldValue');
class_alias(CreativeFieldValuesListResponse::class, 'Google_Service_Dfareporting_CreativeFieldValuesListResponse');
class_alias(CreativeFieldsListResponse::class, 'Google_Service_Dfareporting_CreativeFieldsListResponse');
class_alias(CreativeGroup::class, 'Google_Service_Dfareporting_CreativeGroup');
class_alias(CreativeGroupAssignment::class, 'Google_Service_Dfareporting_CreativeGroupAssignment');
class_alias(CreativeGroupsListResponse::class, 'Google_Service_Dfareporting_CreativeGroupsListResponse');
class_alias(CreativeOptimizationConfiguration::class, 'Google_Service_Dfareporting_CreativeOptimizationConfiguration');
class_alias(CreativeRotation::class, 'Google_Service_Dfareporting_CreativeRotation');
class_alias(CreativesListResponse::class, 'Google_Service_Dfareporting_CreativesListResponse');
class_alias(CrossDimensionReachReportCompatibleFields::class, 'Google_Service_Dfareporting_CrossDimensionReachReportCompatibleFields');
class_alias(CustomFloodlightVariable::class, 'Google_Service_Dfareporting_CustomFloodlightVariable');
class_alias(CustomRichMediaEvents::class, 'Google_Service_Dfareporting_CustomRichMediaEvents');
class_alias(CustomViewabilityMetric::class, 'Google_Service_Dfareporting_CustomViewabilityMetric');
class_alias(CustomViewabilityMetricConfiguration::class, 'Google_Service_Dfareporting_CustomViewabilityMetricConfiguration');
class_alias(DateRange::class, 'Google_Service_Dfareporting_DateRange');
class_alias(DayPartTargeting::class, 'Google_Service_Dfareporting_DayPartTargeting');
class_alias(DeepLink::class, 'Google_Service_Dfareporting_DeepLink');
class_alias(DefaultClickThroughEventTagProperties::class, 'Google_Service_Dfareporting_DefaultClickThroughEventTagProperties');
class_alias(DeliverySchedule::class, 'Google_Service_Dfareporting_DeliverySchedule');
class_alias(DfareportingFile::class, 'Google_Service_Dfareporting_DfareportingFile');
class_alias(DfareportingFileUrls::class, 'Google_Service_Dfareporting_DfareportingFileUrls');
class_alias(DfpSettings::class, 'Google_Service_Dfareporting_DfpSettings');
class_alias(Dimension::class, 'Google_Service_Dfareporting_Dimension');
class_alias(DimensionFilter::class, 'Google_Service_Dfareporting_DimensionFilter');
class_alias(DimensionValue::class, 'Google_Service_Dfareporting_DimensionValue');
class_alias(DimensionValueList::class, 'Google_Service_Dfareporting_DimensionValueList');
class_alias(DimensionValueRequest::class, 'Google_Service_Dfareporting_DimensionValueRequest');
class_alias(DirectorySite::class, 'Google_Service_Dfareporting_DirectorySite');
class_alias(DirectorySiteSettings::class, 'Google_Service_Dfareporting_DirectorySiteSettings');
class_alias(DirectorySitesListResponse::class, 'Google_Service_Dfareporting_DirectorySitesListResponse');
class_alias(DisjunctiveMatchStatement::class, 'Google_Service_Dfareporting_DisjunctiveMatchStatement');
class_alias(DynamicTargetingKey::class, 'Google_Service_Dfareporting_DynamicTargetingKey');
class_alias(DynamicTargetingKeysListResponse::class, 'Google_Service_Dfareporting_DynamicTargetingKeysListResponse');
class_alias(EncryptionInfo::class, 'Google_Service_Dfareporting_EncryptionInfo');
class_alias(EventFilter::class, 'Google_Service_Dfareporting_EventFilter');
class_alias(EventTag::class, 'Google_Service_Dfareporting_EventTag');
class_alias(EventTagOverride::class, 'Google_Service_Dfareporting_EventTagOverride');
class_alias(EventTagsListResponse::class, 'Google_Service_Dfareporting_EventTagsListResponse');
class_alias(FileList::class, 'Google_Service_Dfareporting_FileList');
class_alias(Flight::class, 'Google_Service_Dfareporting_Flight');
class_alias(FloodlightActivitiesGenerateTagResponse::class, 'Google_Service_Dfareporting_FloodlightActivitiesGenerateTagResponse');
class_alias(FloodlightActivitiesListResponse::class, 'Google_Service_Dfareporting_FloodlightActivitiesListResponse');
class_alias(FloodlightActivity::class, 'Google_Service_Dfareporting_FloodlightActivity');
class_alias(FloodlightActivityDynamicTag::class, 'Google_Service_Dfareporting_FloodlightActivityDynamicTag');
class_alias(FloodlightActivityGroup::class, 'Google_Service_Dfareporting_FloodlightActivityGroup');
class_alias(FloodlightActivityGroupsListResponse::class, 'Google_Service_Dfareporting_FloodlightActivityGroupsListResponse');
class_alias(FloodlightActivityPublisherDynamicTag::class, 'Google_Service_Dfareporting_FloodlightActivityPublisherDynamicTag');
class_alias(FloodlightConfiguration::class, 'Google_Service_Dfareporting_FloodlightConfiguration');
class_alias(FloodlightConfigurationsListResponse::class, 'Google_Service_Dfareporting_FloodlightConfigurationsListResponse');
class_alias(FloodlightReportCompatibleFields::class, 'Google_Service_Dfareporting_FloodlightReportCompatibleFields');
class_alias(FrequencyCap::class, 'Google_Service_Dfareporting_FrequencyCap');
class_alias(FsCommand::class, 'Google_Service_Dfareporting_FsCommand');
class_alias(GeoTargeting::class, 'Google_Service_Dfareporting_GeoTargeting');
class_alias(InventoryItem::class, 'Google_Service_Dfareporting_InventoryItem');
class_alias(InventoryItemsListResponse::class, 'Google_Service_Dfareporting_InventoryItemsListResponse');
class_alias(Invoice::class, 'Google_Service_Dfareporting_Invoice');
class_alias(KeyValueTargetingExpression::class, 'Google_Service_Dfareporting_KeyValueTargetingExpression');
class_alias(LandingPage::class, 'Google_Service_Dfareporting_LandingPage');
class_alias(Language::class, 'Google_Service_Dfareporting_Language');
class_alias(LanguageTargeting::class, 'Google_Service_Dfareporting_LanguageTargeting');
class_alias(LanguagesListResponse::class, 'Google_Service_Dfareporting_LanguagesListResponse');
class_alias(LastModifiedInfo::class, 'Google_Service_Dfareporting_LastModifiedInfo');
class_alias(ListPopulationClause::class, 'Google_Service_Dfareporting_ListPopulationClause');
class_alias(ListPopulationRule::class, 'Google_Service_Dfareporting_ListPopulationRule');
class_alias(ListPopulationTerm::class, 'Google_Service_Dfareporting_ListPopulationTerm');
class_alias(ListTargetingExpression::class, 'Google_Service_Dfareporting_ListTargetingExpression');
class_alias(LookbackConfiguration::class, 'Google_Service_Dfareporting_LookbackConfiguration');
class_alias(MeasurementPartnerAdvertiserLink::class, 'Google_Service_Dfareporting_MeasurementPartnerAdvertiserLink');
class_alias(MeasurementPartnerCampaignLink::class, 'Google_Service_Dfareporting_MeasurementPartnerCampaignLink');
class_alias(MeasurementPartnerWrappingData::class, 'Google_Service_Dfareporting_MeasurementPartnerWrappingData');
class_alias(Metric::class, 'Google_Service_Dfareporting_Metric');
class_alias(Metro::class, 'Google_Service_Dfareporting_Metro');
class_alias(MetrosListResponse::class, 'Google_Service_Dfareporting_MetrosListResponse');
class_alias(MobileApp::class, 'Google_Service_Dfareporting_MobileApp');
class_alias(MobileAppsListResponse::class, 'Google_Service_Dfareporting_MobileAppsListResponse');
class_alias(MobileCarrier::class, 'Google_Service_Dfareporting_MobileCarrier');
class_alias(MobileCarriersListResponse::class, 'Google_Service_Dfareporting_MobileCarriersListResponse');
class_alias(ObaIcon::class, 'Google_Service_Dfareporting_ObaIcon');
class_alias(ObjectFilter::class, 'Google_Service_Dfareporting_ObjectFilter');
class_alias(OffsetPosition::class, 'Google_Service_Dfareporting_OffsetPosition');
class_alias(OmnitureSettings::class, 'Google_Service_Dfareporting_OmnitureSettings');
class_alias(OperatingSystem::class, 'Google_Service_Dfareporting_OperatingSystem');
class_alias(OperatingSystemVersion::class, 'Google_Service_Dfareporting_OperatingSystemVersion');
class_alias(OperatingSystemVersionsListResponse::class, 'Google_Service_Dfareporting_OperatingSystemVersionsListResponse');
class_alias(OperatingSystemsListResponse::class, 'Google_Service_Dfareporting_OperatingSystemsListResponse');
class_alias(OptimizationActivity::class, 'Google_Service_Dfareporting_OptimizationActivity');
class_alias(Order::class, 'Google_Service_Dfareporting_Order');
class_alias(OrderContact::class, 'Google_Service_Dfareporting_OrderContact');
class_alias(OrderDocument::class, 'Google_Service_Dfareporting_OrderDocument');
class_alias(OrderDocumentsListResponse::class, 'Google_Service_Dfareporting_OrderDocumentsListResponse');
class_alias(OrdersListResponse::class, 'Google_Service_Dfareporting_OrdersListResponse');
class_alias(PathFilter::class, 'Google_Service_Dfareporting_PathFilter');
class_alias(PathReportCompatibleFields::class, 'Google_Service_Dfareporting_PathReportCompatibleFields');
class_alias(PathReportDimensionValue::class, 'Google_Service_Dfareporting_PathReportDimensionValue');
class_alias(PathToConversionReportCompatibleFields::class, 'Google_Service_Dfareporting_PathToConversionReportCompatibleFields');
class_alias(Placement::class, 'Google_Service_Dfareporting_Placement');
class_alias(PlacementAssignment::class, 'Google_Service_Dfareporting_PlacementAssignment');
class_alias(PlacementGroup::class, 'Google_Service_Dfareporting_PlacementGroup');
class_alias(PlacementGroupsListResponse::class, 'Google_Service_Dfareporting_PlacementGroupsListResponse');
class_alias(PlacementStrategiesListResponse::class, 'Google_Service_Dfareporting_PlacementStrategiesListResponse');
class_alias(PlacementStrategy::class, 'Google_Service_Dfareporting_PlacementStrategy');
class_alias(PlacementTag::class, 'Google_Service_Dfareporting_PlacementTag');
class_alias(PlacementsGenerateTagsResponse::class, 'Google_Service_Dfareporting_PlacementsGenerateTagsResponse');
class_alias(PlacementsListResponse::class, 'Google_Service_Dfareporting_PlacementsListResponse');
class_alias(PlatformType::class, 'Google_Service_Dfareporting_PlatformType');
class_alias(PlatformTypesListResponse::class, 'Google_Service_Dfareporting_PlatformTypesListResponse');
class_alias(PopupWindowProperties::class, 'Google_Service_Dfareporting_PopupWindowProperties');
class_alias(PostalCode::class, 'Google_Service_Dfareporting_PostalCode');
class_alias(PostalCodesListResponse::class, 'Google_Service_Dfareporting_PostalCodesListResponse');
class_alias(Pricing::class, 'Google_Service_Dfareporting_Pricing');
class_alias(PricingSchedule::class, 'Google_Service_Dfareporting_PricingSchedule');
class_alias(PricingSchedulePricingPeriod::class, 'Google_Service_Dfareporting_PricingSchedulePricingPeriod');
class_alias(Project::class, 'Google_Service_Dfareporting_Project');
class_alias(ProjectsListResponse::class, 'Google_Service_Dfareporting_ProjectsListResponse');
class_alias(ReachReportCompatibleFields::class, 'Google_Service_Dfareporting_ReachReportCompatibleFields');
class_alias(Recipient::class, 'Google_Service_Dfareporting_Recipient');
class_alias(Region::class, 'Google_Service_Dfareporting_Region');
class_alias(RegionsListResponse::class, 'Google_Service_Dfareporting_RegionsListResponse');
class_alias(RemarketingList::class, 'Google_Service_Dfareporting_RemarketingList');
class_alias(RemarketingListShare::class, 'Google_Service_Dfareporting_RemarketingListShare');
class_alias(RemarketingListsListResponse::class, 'Google_Service_Dfareporting_RemarketingListsListResponse');
class_alias(Report::class, 'Google_Service_Dfareporting_Report');
class_alias(ReportCompatibleFields::class, 'Google_Service_Dfareporting_ReportCompatibleFields');
class_alias(ReportCriteria::class, 'Google_Service_Dfareporting_ReportCriteria');
class_alias(ReportCrossDimensionReachCriteria::class, 'Google_Service_Dfareporting_ReportCrossDimensionReachCriteria');
class_alias(ReportDelivery::class, 'Google_Service_Dfareporting_ReportDelivery');
class_alias(ReportFloodlightCriteria::class, 'Google_Service_Dfareporting_ReportFloodlightCriteria');
class_alias(ReportFloodlightCriteriaReportProperties::class, 'Google_Service_Dfareporting_ReportFloodlightCriteriaReportProperties');
class_alias(ReportList::class, 'Google_Service_Dfareporting_ReportList');
class_alias(ReportPathAttributionCriteria::class, 'Google_Service_Dfareporting_ReportPathAttributionCriteria');
class_alias(ReportPathCriteria::class, 'Google_Service_Dfareporting_ReportPathCriteria');
class_alias(ReportPathToConversionCriteria::class, 'Google_Service_Dfareporting_ReportPathToConversionCriteria');
class_alias(ReportPathToConversionCriteriaReportProperties::class, 'Google_Service_Dfareporting_ReportPathToConversionCriteriaReportProperties');
class_alias(ReportReachCriteria::class, 'Google_Service_Dfareporting_ReportReachCriteria');
class_alias(ReportSchedule::class, 'Google_Service_Dfareporting_ReportSchedule');
class_alias(ReportsConfiguration::class, 'Google_Service_Dfareporting_ReportsConfiguration');
class_alias(RichMediaExitOverride::class, 'Google_Service_Dfareporting_RichMediaExitOverride');
class_alias(Rule::class, 'Google_Service_Dfareporting_Rule');
class_alias(Site::class, 'Google_Service_Dfareporting_Site');
class_alias(SiteCompanionSetting::class, 'Google_Service_Dfareporting_SiteCompanionSetting');
class_alias(SiteContact::class, 'Google_Service_Dfareporting_SiteContact');
class_alias(SiteSettings::class, 'Google_Service_Dfareporting_SiteSettings');
class_alias(SiteSkippableSetting::class, 'Google_Service_Dfareporting_SiteSkippableSetting');
class_alias(SiteTranscodeSetting::class, 'Google_Service_Dfareporting_SiteTranscodeSetting');
class_alias(SiteVideoSettings::class, 'Google_Service_Dfareporting_SiteVideoSettings');
class_alias(SitesListResponse::class, 'Google_Service_Dfareporting_SitesListResponse');
class_alias(Size::class, 'Google_Service_Dfareporting_Size');
class_alias(SizesListResponse::class, 'Google_Service_Dfareporting_SizesListResponse');
class_alias(SkippableSetting::class, 'Google_Service_Dfareporting_SkippableSetting');
class_alias(SortedDimension::class, 'Google_Service_Dfareporting_SortedDimension');
class_alias(Subaccount::class, 'Google_Service_Dfareporting_Subaccount');
class_alias(SubaccountsListResponse::class, 'Google_Service_Dfareporting_SubaccountsListResponse');
class_alias(TagData::class, 'Google_Service_Dfareporting_TagData');
class_alias(TagSetting::class, 'Google_Service_Dfareporting_TagSetting');
class_alias(TagSettings::class, 'Google_Service_Dfareporting_TagSettings');
class_alias(TargetWindow::class, 'Google_Service_Dfareporting_TargetWindow');
class_alias(TargetableRemarketingList::class, 'Google_Service_Dfareporting_TargetableRemarketingList');
class_alias(TargetableRemarketingListsListResponse::class, 'Google_Service_Dfareporting_TargetableRemarketingListsListResponse');
class_alias(TargetingTemplate::class, 'Google_Service_Dfareporting_TargetingTemplate');
class_alias(TargetingTemplatesListResponse::class, 'Google_Service_Dfareporting_TargetingTemplatesListResponse');
class_alias(TechnologyTargeting::class, 'Google_Service_Dfareporting_TechnologyTargeting');
class_alias(ThirdPartyAuthenticationToken::class, 'Google_Service_Dfareporting_ThirdPartyAuthenticationToken');
class_alias(ThirdPartyTrackingUrl::class, 'Google_Service_Dfareporting_ThirdPartyTrackingUrl');
class_alias(TranscodeSetting::class, 'Google_Service_Dfareporting_TranscodeSetting');
class_alias(UniversalAdId::class, 'Google_Service_Dfareporting_UniversalAdId');
class_alias(UserDefinedVariableConfiguration::class, 'Google_Service_Dfareporting_UserDefinedVariableConfiguration');
class_alias(UserProfile::class, 'Google_Service_Dfareporting_UserProfile');
class_alias(UserProfileList::class, 'Google_Service_Dfareporting_UserProfileList');
class_alias(UserRole::class, 'Google_Service_Dfareporting_UserRole');
class_alias(UserRolePermission::class, 'Google_Service_Dfareporting_UserRolePermission');
class_alias(UserRolePermissionGroup::class, 'Google_Service_Dfareporting_UserRolePermissionGroup');
class_alias(UserRolePermissionGroupsListResponse::class, 'Google_Service_Dfareporting_UserRolePermissionGroupsListResponse');
class_alias(UserRolePermissionsListResponse::class, 'Google_Service_Dfareporting_UserRolePermissionsListResponse');
class_alias(UserRolesListResponse::class, 'Google_Service_Dfareporting_UserRolesListResponse');
class_alias(UvarFilter::class, 'Google_Service_Dfareporting_UvarFilter');
class_alias(VideoFormat::class, 'Google_Service_Dfareporting_VideoFormat');
class_alias(VideoFormatsListResponse::class, 'Google_Service_Dfareporting_VideoFormatsListResponse');
class_alias(VideoOffset::class, 'Google_Service_Dfareporting_VideoOffset');
class_alias(VideoSettings::class, 'Google_Service_Dfareporting_VideoSettings');
