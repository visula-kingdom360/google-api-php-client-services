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

namespace Google\Service\DisplayVideo;

class ActivateManualTriggerRequest extends \Google\Model
{
}

class ActiveViewVideoViewabilityMetricConfig extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $minimumDuration;
  /** @var string */
  public $minimumQuartile;
  /** @var string */
  public $minimumViewability;
  /** @var string */
  public $minimumVolume;

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
  public function setMinimumDuration($minimumDuration)
  {
    $this->minimumDuration = $minimumDuration;
  }
  /** @return string */
  public function getMinimumDuration()
  {
    return $this->minimumDuration;
  }
  /** @param string */
  public function setMinimumQuartile($minimumQuartile)
  {
    $this->minimumQuartile = $minimumQuartile;
  }
  /** @return string */
  public function getMinimumQuartile()
  {
    return $this->minimumQuartile;
  }
  /** @param string */
  public function setMinimumViewability($minimumViewability)
  {
    $this->minimumViewability = $minimumViewability;
  }
  /** @return string */
  public function getMinimumViewability()
  {
    return $this->minimumViewability;
  }
  /** @param string */
  public function setMinimumVolume($minimumVolume)
  {
    $this->minimumVolume = $minimumVolume;
  }
  /** @return string */
  public function getMinimumVolume()
  {
    return $this->minimumVolume;
  }
}

class Adloox extends \Google\Collection
{
  /** @var string[] */
  public $excludedAdlooxCategories;
  protected $collection_key = 'excludedAdlooxCategories';
  /** @param string[] */
  public function setExcludedAdlooxCategories($excludedAdlooxCategories)
  {
    $this->excludedAdlooxCategories = $excludedAdlooxCategories;
  }
  /** @return string[] */
  public function getExcludedAdlooxCategories()
  {
    return $this->excludedAdlooxCategories;
  }
}

class Advertiser extends \Google\Model
{
  /** @var AdvertiserAdServerConfig */
  public $adServerConfig;
  /** @var string */
  public $advertiserId;
  /** @var AdvertiserBillingConfig */
  public $billingConfig;
  /** @var AdvertiserCreativeConfig */
  public $creativeConfig;
  /** @var AdvertiserDataAccessConfig */
  public $dataAccessConfig;
  /** @var string */
  public $displayName;
  /** @var string */
  public $entityStatus;
  /** @var AdvertiserGeneralConfig */
  public $generalConfig;
  /** @var IntegrationDetails */
  public $integrationDetails;
  /** @var string */
  public $name;
  /** @var string */
  public $partnerId;
  /** @var bool */
  public $prismaEnabled;
  /** @var AdvertiserTargetingConfig */
  public $servingConfig;
  /** @var string */
  public $updateTime;
  protected $adServerConfigType = AdvertiserAdServerConfig::class;
  protected $adServerConfigDataType = '';
  protected $billingConfigType = AdvertiserBillingConfig::class;
  protected $billingConfigDataType = '';
  protected $creativeConfigType = AdvertiserCreativeConfig::class;
  protected $creativeConfigDataType = '';
  protected $dataAccessConfigType = AdvertiserDataAccessConfig::class;
  protected $dataAccessConfigDataType = '';
  protected $generalConfigType = AdvertiserGeneralConfig::class;
  protected $generalConfigDataType = '';
  protected $integrationDetailsType = IntegrationDetails::class;
  protected $integrationDetailsDataType = '';
  protected $servingConfigType = AdvertiserTargetingConfig::class;
  protected $servingConfigDataType = '';
  /** @param AdvertiserAdServerConfig */
  public function setAdServerConfig(AdvertiserAdServerConfig $adServerConfig)
  {
    $this->adServerConfig = $adServerConfig;
  }
  /** @return AdvertiserAdServerConfig */
  public function getAdServerConfig()
  {
    return $this->adServerConfig;
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
  /** @param AdvertiserBillingConfig */
  public function setBillingConfig(AdvertiserBillingConfig $billingConfig)
  {
    $this->billingConfig = $billingConfig;
  }
  /** @return AdvertiserBillingConfig */
  public function getBillingConfig()
  {
    return $this->billingConfig;
  }
  /** @param AdvertiserCreativeConfig */
  public function setCreativeConfig(AdvertiserCreativeConfig $creativeConfig)
  {
    $this->creativeConfig = $creativeConfig;
  }
  /** @return AdvertiserCreativeConfig */
  public function getCreativeConfig()
  {
    return $this->creativeConfig;
  }
  /** @param AdvertiserDataAccessConfig */
  public function setDataAccessConfig(AdvertiserDataAccessConfig $dataAccessConfig)
  {
    $this->dataAccessConfig = $dataAccessConfig;
  }
  /** @return AdvertiserDataAccessConfig */
  public function getDataAccessConfig()
  {
    return $this->dataAccessConfig;
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
  public function setEntityStatus($entityStatus)
  {
    $this->entityStatus = $entityStatus;
  }
  /** @return string */
  public function getEntityStatus()
  {
    return $this->entityStatus;
  }
  /** @param AdvertiserGeneralConfig */
  public function setGeneralConfig(AdvertiserGeneralConfig $generalConfig)
  {
    $this->generalConfig = $generalConfig;
  }
  /** @return AdvertiserGeneralConfig */
  public function getGeneralConfig()
  {
    return $this->generalConfig;
  }
  /** @param IntegrationDetails */
  public function setIntegrationDetails(IntegrationDetails $integrationDetails)
  {
    $this->integrationDetails = $integrationDetails;
  }
  /** @return IntegrationDetails */
  public function getIntegrationDetails()
  {
    return $this->integrationDetails;
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
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
  }
  /** @param bool */
  public function setPrismaEnabled($prismaEnabled)
  {
    $this->prismaEnabled = $prismaEnabled;
  }
  /** @return bool */
  public function getPrismaEnabled()
  {
    return $this->prismaEnabled;
  }
  /** @param AdvertiserTargetingConfig */
  public function setServingConfig(AdvertiserTargetingConfig $servingConfig)
  {
    $this->servingConfig = $servingConfig;
  }
  /** @return AdvertiserTargetingConfig */
  public function getServingConfig()
  {
    return $this->servingConfig;
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

class AdvertiserAdServerConfig extends \Google\Model
{
  /** @var CmHybridConfig */
  public $cmHybridConfig;
  /** @var ThirdPartyOnlyConfig */
  public $thirdPartyOnlyConfig;
  protected $cmHybridConfigType = CmHybridConfig::class;
  protected $cmHybridConfigDataType = '';
  protected $thirdPartyOnlyConfigType = ThirdPartyOnlyConfig::class;
  protected $thirdPartyOnlyConfigDataType = '';
  /** @param CmHybridConfig */
  public function setCmHybridConfig(CmHybridConfig $cmHybridConfig)
  {
    $this->cmHybridConfig = $cmHybridConfig;
  }
  /** @return CmHybridConfig */
  public function getCmHybridConfig()
  {
    return $this->cmHybridConfig;
  }
  /** @param ThirdPartyOnlyConfig */
  public function setThirdPartyOnlyConfig(ThirdPartyOnlyConfig $thirdPartyOnlyConfig)
  {
    $this->thirdPartyOnlyConfig = $thirdPartyOnlyConfig;
  }
  /** @return ThirdPartyOnlyConfig */
  public function getThirdPartyOnlyConfig()
  {
    return $this->thirdPartyOnlyConfig;
  }
}

class AdvertiserBillingConfig extends \Google\Model
{
  /** @var string */
  public $billingProfileId;

  /** @param string */
  public function setBillingProfileId($billingProfileId)
  {
    $this->billingProfileId = $billingProfileId;
  }
  /** @return string */
  public function getBillingProfileId()
  {
    return $this->billingProfileId;
  }
}

class AdvertiserCreativeConfig extends \Google\Model
{
  /** @var bool */
  public $dynamicCreativeEnabled;
  /** @var string */
  public $iasClientId;
  /** @var bool */
  public $obaComplianceDisabled;
  /** @var bool */
  public $videoCreativeDataSharingAuthorized;

  /** @param bool */
  public function setDynamicCreativeEnabled($dynamicCreativeEnabled)
  {
    $this->dynamicCreativeEnabled = $dynamicCreativeEnabled;
  }
  /** @return bool */
  public function getDynamicCreativeEnabled()
  {
    return $this->dynamicCreativeEnabled;
  }
  /** @param string */
  public function setIasClientId($iasClientId)
  {
    $this->iasClientId = $iasClientId;
  }
  /** @return string */
  public function getIasClientId()
  {
    return $this->iasClientId;
  }
  /** @param bool */
  public function setObaComplianceDisabled($obaComplianceDisabled)
  {
    $this->obaComplianceDisabled = $obaComplianceDisabled;
  }
  /** @return bool */
  public function getObaComplianceDisabled()
  {
    return $this->obaComplianceDisabled;
  }
  /** @param bool */
  public function setVideoCreativeDataSharingAuthorized($videoCreativeDataSharingAuthorized)
  {
    $this->videoCreativeDataSharingAuthorized = $videoCreativeDataSharingAuthorized;
  }
  /** @return bool */
  public function getVideoCreativeDataSharingAuthorized()
  {
    return $this->videoCreativeDataSharingAuthorized;
  }
}

class AdvertiserDataAccessConfig extends \Google\Model
{
  /** @var AdvertiserSdfConfig */
  public $sdfConfig;
  protected $sdfConfigType = AdvertiserSdfConfig::class;
  protected $sdfConfigDataType = '';
  /** @param AdvertiserSdfConfig */
  public function setSdfConfig(AdvertiserSdfConfig $sdfConfig)
  {
    $this->sdfConfig = $sdfConfig;
  }
  /** @return AdvertiserSdfConfig */
  public function getSdfConfig()
  {
    return $this->sdfConfig;
  }
}

class AdvertiserGeneralConfig extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $domainUrl;
  /** @var string */
  public $timeZone;

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
  public function setDomainUrl($domainUrl)
  {
    $this->domainUrl = $domainUrl;
  }
  /** @return string */
  public function getDomainUrl()
  {
    return $this->domainUrl;
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

class AdvertiserSdfConfig extends \Google\Model
{
  /** @var bool */
  public $overridePartnerSdfConfig;
  /** @var SdfConfig */
  public $sdfConfig;
  protected $sdfConfigType = SdfConfig::class;
  protected $sdfConfigDataType = '';
  /** @param bool */
  public function setOverridePartnerSdfConfig($overridePartnerSdfConfig)
  {
    $this->overridePartnerSdfConfig = $overridePartnerSdfConfig;
  }
  /** @return bool */
  public function getOverridePartnerSdfConfig()
  {
    return $this->overridePartnerSdfConfig;
  }
  /** @param SdfConfig */
  public function setSdfConfig(SdfConfig $sdfConfig)
  {
    $this->sdfConfig = $sdfConfig;
  }
  /** @return SdfConfig */
  public function getSdfConfig()
  {
    return $this->sdfConfig;
  }
}

class AdvertiserTargetingConfig extends \Google\Model
{
  /** @var bool */
  public $exemptTvFromViewabilityTargeting;

  /** @param bool */
  public function setExemptTvFromViewabilityTargeting($exemptTvFromViewabilityTargeting)
  {
    $this->exemptTvFromViewabilityTargeting = $exemptTvFromViewabilityTargeting;
  }
  /** @return bool */
  public function getExemptTvFromViewabilityTargeting()
  {
    return $this->exemptTvFromViewabilityTargeting;
  }
}

class AgeRangeAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $ageRange;

  /** @param string */
  public function setAgeRange($ageRange)
  {
    $this->ageRange = $ageRange;
  }
  /** @return string */
  public function getAgeRange()
  {
    return $this->ageRange;
  }
}

class AgeRangeTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $ageRange;

  /** @param string */
  public function setAgeRange($ageRange)
  {
    $this->ageRange = $ageRange;
  }
  /** @return string */
  public function getAgeRange()
  {
    return $this->ageRange;
  }
}

class AppAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $appId;
  /** @var string */
  public $appPlatform;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $negative;

  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
  }
  /** @param string */
  public function setAppPlatform($appPlatform)
  {
    $this->appPlatform = $appPlatform;
  }
  /** @return string */
  public function getAppPlatform()
  {
    return $this->appPlatform;
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
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
}

class AppCategoryAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $negative;
  /** @var string */
  public $targetingOptionId;

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
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class AppCategoryTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;

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

class Asset extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $mediaId;

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
  public function setMediaId($mediaId)
  {
    $this->mediaId = $mediaId;
  }
  /** @return string */
  public function getMediaId()
  {
    return $this->mediaId;
  }
}

class AssetAssociation extends \Google\Model
{
  /** @var Asset */
  public $asset;
  /** @var string */
  public $role;
  protected $assetType = Asset::class;
  protected $assetDataType = '';
  /** @param Asset */
  public function setAsset(Asset $asset)
  {
    $this->asset = $asset;
  }
  /** @return Asset */
  public function getAsset()
  {
    return $this->asset;
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
}

class AssignedInventorySource extends \Google\Model
{
  /** @var string */
  public $assignedInventorySourceId;
  /** @var string */
  public $inventorySourceId;
  /** @var string */
  public $name;

  /** @param string */
  public function setAssignedInventorySourceId($assignedInventorySourceId)
  {
    $this->assignedInventorySourceId = $assignedInventorySourceId;
  }
  /** @return string */
  public function getAssignedInventorySourceId()
  {
    return $this->assignedInventorySourceId;
  }
  /** @param string */
  public function setInventorySourceId($inventorySourceId)
  {
    $this->inventorySourceId = $inventorySourceId;
  }
  /** @return string */
  public function getInventorySourceId()
  {
    return $this->inventorySourceId;
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

class AssignedLocation extends \Google\Model
{
  /** @var string */
  public $assignedLocationId;
  /** @var string */
  public $name;
  /** @var string */
  public $targetingOptionId;

  /** @param string */
  public function setAssignedLocationId($assignedLocationId)
  {
    $this->assignedLocationId = $assignedLocationId;
  }
  /** @return string */
  public function getAssignedLocationId()
  {
    return $this->assignedLocationId;
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
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class AssignedTargetingOption extends \Google\Model
{
  /** @var AgeRangeAssignedTargetingOptionDetails */
  public $ageRangeDetails;
  /** @var AppCategoryAssignedTargetingOptionDetails */
  public $appCategoryDetails;
  /** @var AppAssignedTargetingOptionDetails */
  public $appDetails;
  /** @var string */
  public $assignedTargetingOptionId;
  /** @var AudienceGroupAssignedTargetingOptionDetails */
  public $audienceGroupDetails;
  /** @var AudioContentTypeAssignedTargetingOptionDetails */
  public $audioContentTypeDetails;
  /** @var AuthorizedSellerStatusAssignedTargetingOptionDetails */
  public $authorizedSellerStatusDetails;
  /** @var BrowserAssignedTargetingOptionDetails */
  public $browserDetails;
  /** @var BusinessChainAssignedTargetingOptionDetails */
  public $businessChainDetails;
  /** @var CarrierAndIspAssignedTargetingOptionDetails */
  public $carrierAndIspDetails;
  /** @var CategoryAssignedTargetingOptionDetails */
  public $categoryDetails;
  /** @var ChannelAssignedTargetingOptionDetails */
  public $channelDetails;
  /** @var ContentDurationAssignedTargetingOptionDetails */
  public $contentDurationDetails;
  /** @var ContentGenreAssignedTargetingOptionDetails */
  public $contentGenreDetails;
  /** @var ContentInstreamPositionAssignedTargetingOptionDetails */
  public $contentInstreamPositionDetails;
  /** @var ContentOutstreamPositionAssignedTargetingOptionDetails */
  public $contentOutstreamPositionDetails;
  /** @var ContentStreamTypeAssignedTargetingOptionDetails */
  public $contentStreamTypeDetails;
  /** @var DayAndTimeAssignedTargetingOptionDetails */
  public $dayAndTimeDetails;
  /** @var DeviceMakeModelAssignedTargetingOptionDetails */
  public $deviceMakeModelDetails;
  /** @var DeviceTypeAssignedTargetingOptionDetails */
  public $deviceTypeDetails;
  /** @var DigitalContentLabelAssignedTargetingOptionDetails */
  public $digitalContentLabelExclusionDetails;
  /** @var EnvironmentAssignedTargetingOptionDetails */
  public $environmentDetails;
  /** @var ExchangeAssignedTargetingOptionDetails */
  public $exchangeDetails;
  /** @var GenderAssignedTargetingOptionDetails */
  public $genderDetails;
  /** @var GeoRegionAssignedTargetingOptionDetails */
  public $geoRegionDetails;
  /** @var HouseholdIncomeAssignedTargetingOptionDetails */
  public $householdIncomeDetails;
  /** @var string */
  public $inheritance;
  /** @var InventorySourceAssignedTargetingOptionDetails */
  public $inventorySourceDetails;
  /** @var InventorySourceGroupAssignedTargetingOptionDetails */
  public $inventorySourceGroupDetails;
  /** @var KeywordAssignedTargetingOptionDetails */
  public $keywordDetails;
  /** @var LanguageAssignedTargetingOptionDetails */
  public $languageDetails;
  /** @var string */
  public $name;
  /** @var NativeContentPositionAssignedTargetingOptionDetails */
  public $nativeContentPositionDetails;
  /** @var NegativeKeywordListAssignedTargetingOptionDetails */
  public $negativeKeywordListDetails;
  /** @var OmidAssignedTargetingOptionDetails */
  public $omidDetails;
  /** @var OnScreenPositionAssignedTargetingOptionDetails */
  public $onScreenPositionDetails;
  /** @var OperatingSystemAssignedTargetingOptionDetails */
  public $operatingSystemDetails;
  /** @var ParentalStatusAssignedTargetingOptionDetails */
  public $parentalStatusDetails;
  /** @var PoiAssignedTargetingOptionDetails */
  public $poiDetails;
  /** @var ProximityLocationListAssignedTargetingOptionDetails */
  public $proximityLocationListDetails;
  /** @var RegionalLocationListAssignedTargetingOptionDetails */
  public $regionalLocationListDetails;
  /** @var SensitiveCategoryAssignedTargetingOptionDetails */
  public $sensitiveCategoryExclusionDetails;
  /** @var SubExchangeAssignedTargetingOptionDetails */
  public $subExchangeDetails;
  /** @var string */
  public $targetingType;
  /** @var ThirdPartyVerifierAssignedTargetingOptionDetails */
  public $thirdPartyVerifierDetails;
  /** @var UrlAssignedTargetingOptionDetails */
  public $urlDetails;
  /** @var UserRewardedContentAssignedTargetingOptionDetails */
  public $userRewardedContentDetails;
  /** @var VideoPlayerSizeAssignedTargetingOptionDetails */
  public $videoPlayerSizeDetails;
  /** @var ViewabilityAssignedTargetingOptionDetails */
  public $viewabilityDetails;
  protected $ageRangeDetailsType = AgeRangeAssignedTargetingOptionDetails::class;
  protected $ageRangeDetailsDataType = '';
  protected $appCategoryDetailsType = AppCategoryAssignedTargetingOptionDetails::class;
  protected $appCategoryDetailsDataType = '';
  protected $appDetailsType = AppAssignedTargetingOptionDetails::class;
  protected $appDetailsDataType = '';
  protected $audienceGroupDetailsType = AudienceGroupAssignedTargetingOptionDetails::class;
  protected $audienceGroupDetailsDataType = '';
  protected $audioContentTypeDetailsType = AudioContentTypeAssignedTargetingOptionDetails::class;
  protected $audioContentTypeDetailsDataType = '';
  protected $authorizedSellerStatusDetailsType = AuthorizedSellerStatusAssignedTargetingOptionDetails::class;
  protected $authorizedSellerStatusDetailsDataType = '';
  protected $browserDetailsType = BrowserAssignedTargetingOptionDetails::class;
  protected $browserDetailsDataType = '';
  protected $businessChainDetailsType = BusinessChainAssignedTargetingOptionDetails::class;
  protected $businessChainDetailsDataType = '';
  protected $carrierAndIspDetailsType = CarrierAndIspAssignedTargetingOptionDetails::class;
  protected $carrierAndIspDetailsDataType = '';
  protected $categoryDetailsType = CategoryAssignedTargetingOptionDetails::class;
  protected $categoryDetailsDataType = '';
  protected $channelDetailsType = ChannelAssignedTargetingOptionDetails::class;
  protected $channelDetailsDataType = '';
  protected $contentDurationDetailsType = ContentDurationAssignedTargetingOptionDetails::class;
  protected $contentDurationDetailsDataType = '';
  protected $contentGenreDetailsType = ContentGenreAssignedTargetingOptionDetails::class;
  protected $contentGenreDetailsDataType = '';
  protected $contentInstreamPositionDetailsType = ContentInstreamPositionAssignedTargetingOptionDetails::class;
  protected $contentInstreamPositionDetailsDataType = '';
  protected $contentOutstreamPositionDetailsType = ContentOutstreamPositionAssignedTargetingOptionDetails::class;
  protected $contentOutstreamPositionDetailsDataType = '';
  protected $contentStreamTypeDetailsType = ContentStreamTypeAssignedTargetingOptionDetails::class;
  protected $contentStreamTypeDetailsDataType = '';
  protected $dayAndTimeDetailsType = DayAndTimeAssignedTargetingOptionDetails::class;
  protected $dayAndTimeDetailsDataType = '';
  protected $deviceMakeModelDetailsType = DeviceMakeModelAssignedTargetingOptionDetails::class;
  protected $deviceMakeModelDetailsDataType = '';
  protected $deviceTypeDetailsType = DeviceTypeAssignedTargetingOptionDetails::class;
  protected $deviceTypeDetailsDataType = '';
  protected $digitalContentLabelExclusionDetailsType = DigitalContentLabelAssignedTargetingOptionDetails::class;
  protected $digitalContentLabelExclusionDetailsDataType = '';
  protected $environmentDetailsType = EnvironmentAssignedTargetingOptionDetails::class;
  protected $environmentDetailsDataType = '';
  protected $exchangeDetailsType = ExchangeAssignedTargetingOptionDetails::class;
  protected $exchangeDetailsDataType = '';
  protected $genderDetailsType = GenderAssignedTargetingOptionDetails::class;
  protected $genderDetailsDataType = '';
  protected $geoRegionDetailsType = GeoRegionAssignedTargetingOptionDetails::class;
  protected $geoRegionDetailsDataType = '';
  protected $householdIncomeDetailsType = HouseholdIncomeAssignedTargetingOptionDetails::class;
  protected $householdIncomeDetailsDataType = '';
  protected $inventorySourceDetailsType = InventorySourceAssignedTargetingOptionDetails::class;
  protected $inventorySourceDetailsDataType = '';
  protected $inventorySourceGroupDetailsType = InventorySourceGroupAssignedTargetingOptionDetails::class;
  protected $inventorySourceGroupDetailsDataType = '';
  protected $keywordDetailsType = KeywordAssignedTargetingOptionDetails::class;
  protected $keywordDetailsDataType = '';
  protected $languageDetailsType = LanguageAssignedTargetingOptionDetails::class;
  protected $languageDetailsDataType = '';
  protected $nativeContentPositionDetailsType = NativeContentPositionAssignedTargetingOptionDetails::class;
  protected $nativeContentPositionDetailsDataType = '';
  protected $negativeKeywordListDetailsType = NegativeKeywordListAssignedTargetingOptionDetails::class;
  protected $negativeKeywordListDetailsDataType = '';
  protected $omidDetailsType = OmidAssignedTargetingOptionDetails::class;
  protected $omidDetailsDataType = '';
  protected $onScreenPositionDetailsType = OnScreenPositionAssignedTargetingOptionDetails::class;
  protected $onScreenPositionDetailsDataType = '';
  protected $operatingSystemDetailsType = OperatingSystemAssignedTargetingOptionDetails::class;
  protected $operatingSystemDetailsDataType = '';
  protected $parentalStatusDetailsType = ParentalStatusAssignedTargetingOptionDetails::class;
  protected $parentalStatusDetailsDataType = '';
  protected $poiDetailsType = PoiAssignedTargetingOptionDetails::class;
  protected $poiDetailsDataType = '';
  protected $proximityLocationListDetailsType = ProximityLocationListAssignedTargetingOptionDetails::class;
  protected $proximityLocationListDetailsDataType = '';
  protected $regionalLocationListDetailsType = RegionalLocationListAssignedTargetingOptionDetails::class;
  protected $regionalLocationListDetailsDataType = '';
  protected $sensitiveCategoryExclusionDetailsType = SensitiveCategoryAssignedTargetingOptionDetails::class;
  protected $sensitiveCategoryExclusionDetailsDataType = '';
  protected $subExchangeDetailsType = SubExchangeAssignedTargetingOptionDetails::class;
  protected $subExchangeDetailsDataType = '';
  protected $thirdPartyVerifierDetailsType = ThirdPartyVerifierAssignedTargetingOptionDetails::class;
  protected $thirdPartyVerifierDetailsDataType = '';
  protected $urlDetailsType = UrlAssignedTargetingOptionDetails::class;
  protected $urlDetailsDataType = '';
  protected $userRewardedContentDetailsType = UserRewardedContentAssignedTargetingOptionDetails::class;
  protected $userRewardedContentDetailsDataType = '';
  protected $videoPlayerSizeDetailsType = VideoPlayerSizeAssignedTargetingOptionDetails::class;
  protected $videoPlayerSizeDetailsDataType = '';
  protected $viewabilityDetailsType = ViewabilityAssignedTargetingOptionDetails::class;
  protected $viewabilityDetailsDataType = '';
  /** @param AgeRangeAssignedTargetingOptionDetails */
  public function setAgeRangeDetails(AgeRangeAssignedTargetingOptionDetails $ageRangeDetails)
  {
    $this->ageRangeDetails = $ageRangeDetails;
  }
  /** @return AgeRangeAssignedTargetingOptionDetails */
  public function getAgeRangeDetails()
  {
    return $this->ageRangeDetails;
  }
  /** @param AppCategoryAssignedTargetingOptionDetails */
  public function setAppCategoryDetails(AppCategoryAssignedTargetingOptionDetails $appCategoryDetails)
  {
    $this->appCategoryDetails = $appCategoryDetails;
  }
  /** @return AppCategoryAssignedTargetingOptionDetails */
  public function getAppCategoryDetails()
  {
    return $this->appCategoryDetails;
  }
  /** @param AppAssignedTargetingOptionDetails */
  public function setAppDetails(AppAssignedTargetingOptionDetails $appDetails)
  {
    $this->appDetails = $appDetails;
  }
  /** @return AppAssignedTargetingOptionDetails */
  public function getAppDetails()
  {
    return $this->appDetails;
  }
  /** @param string */
  public function setAssignedTargetingOptionId($assignedTargetingOptionId)
  {
    $this->assignedTargetingOptionId = $assignedTargetingOptionId;
  }
  /** @return string */
  public function getAssignedTargetingOptionId()
  {
    return $this->assignedTargetingOptionId;
  }
  /** @param AudienceGroupAssignedTargetingOptionDetails */
  public function setAudienceGroupDetails(AudienceGroupAssignedTargetingOptionDetails $audienceGroupDetails)
  {
    $this->audienceGroupDetails = $audienceGroupDetails;
  }
  /** @return AudienceGroupAssignedTargetingOptionDetails */
  public function getAudienceGroupDetails()
  {
    return $this->audienceGroupDetails;
  }
  /** @param AudioContentTypeAssignedTargetingOptionDetails */
  public function setAudioContentTypeDetails(AudioContentTypeAssignedTargetingOptionDetails $audioContentTypeDetails)
  {
    $this->audioContentTypeDetails = $audioContentTypeDetails;
  }
  /** @return AudioContentTypeAssignedTargetingOptionDetails */
  public function getAudioContentTypeDetails()
  {
    return $this->audioContentTypeDetails;
  }
  /** @param AuthorizedSellerStatusAssignedTargetingOptionDetails */
  public function setAuthorizedSellerStatusDetails(AuthorizedSellerStatusAssignedTargetingOptionDetails $authorizedSellerStatusDetails)
  {
    $this->authorizedSellerStatusDetails = $authorizedSellerStatusDetails;
  }
  /** @return AuthorizedSellerStatusAssignedTargetingOptionDetails */
  public function getAuthorizedSellerStatusDetails()
  {
    return $this->authorizedSellerStatusDetails;
  }
  /** @param BrowserAssignedTargetingOptionDetails */
  public function setBrowserDetails(BrowserAssignedTargetingOptionDetails $browserDetails)
  {
    $this->browserDetails = $browserDetails;
  }
  /** @return BrowserAssignedTargetingOptionDetails */
  public function getBrowserDetails()
  {
    return $this->browserDetails;
  }
  /** @param BusinessChainAssignedTargetingOptionDetails */
  public function setBusinessChainDetails(BusinessChainAssignedTargetingOptionDetails $businessChainDetails)
  {
    $this->businessChainDetails = $businessChainDetails;
  }
  /** @return BusinessChainAssignedTargetingOptionDetails */
  public function getBusinessChainDetails()
  {
    return $this->businessChainDetails;
  }
  /** @param CarrierAndIspAssignedTargetingOptionDetails */
  public function setCarrierAndIspDetails(CarrierAndIspAssignedTargetingOptionDetails $carrierAndIspDetails)
  {
    $this->carrierAndIspDetails = $carrierAndIspDetails;
  }
  /** @return CarrierAndIspAssignedTargetingOptionDetails */
  public function getCarrierAndIspDetails()
  {
    return $this->carrierAndIspDetails;
  }
  /** @param CategoryAssignedTargetingOptionDetails */
  public function setCategoryDetails(CategoryAssignedTargetingOptionDetails $categoryDetails)
  {
    $this->categoryDetails = $categoryDetails;
  }
  /** @return CategoryAssignedTargetingOptionDetails */
  public function getCategoryDetails()
  {
    return $this->categoryDetails;
  }
  /** @param ChannelAssignedTargetingOptionDetails */
  public function setChannelDetails(ChannelAssignedTargetingOptionDetails $channelDetails)
  {
    $this->channelDetails = $channelDetails;
  }
  /** @return ChannelAssignedTargetingOptionDetails */
  public function getChannelDetails()
  {
    return $this->channelDetails;
  }
  /** @param ContentDurationAssignedTargetingOptionDetails */
  public function setContentDurationDetails(ContentDurationAssignedTargetingOptionDetails $contentDurationDetails)
  {
    $this->contentDurationDetails = $contentDurationDetails;
  }
  /** @return ContentDurationAssignedTargetingOptionDetails */
  public function getContentDurationDetails()
  {
    return $this->contentDurationDetails;
  }
  /** @param ContentGenreAssignedTargetingOptionDetails */
  public function setContentGenreDetails(ContentGenreAssignedTargetingOptionDetails $contentGenreDetails)
  {
    $this->contentGenreDetails = $contentGenreDetails;
  }
  /** @return ContentGenreAssignedTargetingOptionDetails */
  public function getContentGenreDetails()
  {
    return $this->contentGenreDetails;
  }
  /** @param ContentInstreamPositionAssignedTargetingOptionDetails */
  public function setContentInstreamPositionDetails(ContentInstreamPositionAssignedTargetingOptionDetails $contentInstreamPositionDetails)
  {
    $this->contentInstreamPositionDetails = $contentInstreamPositionDetails;
  }
  /** @return ContentInstreamPositionAssignedTargetingOptionDetails */
  public function getContentInstreamPositionDetails()
  {
    return $this->contentInstreamPositionDetails;
  }
  /** @param ContentOutstreamPositionAssignedTargetingOptionDetails */
  public function setContentOutstreamPositionDetails(ContentOutstreamPositionAssignedTargetingOptionDetails $contentOutstreamPositionDetails)
  {
    $this->contentOutstreamPositionDetails = $contentOutstreamPositionDetails;
  }
  /** @return ContentOutstreamPositionAssignedTargetingOptionDetails */
  public function getContentOutstreamPositionDetails()
  {
    return $this->contentOutstreamPositionDetails;
  }
  /** @param ContentStreamTypeAssignedTargetingOptionDetails */
  public function setContentStreamTypeDetails(ContentStreamTypeAssignedTargetingOptionDetails $contentStreamTypeDetails)
  {
    $this->contentStreamTypeDetails = $contentStreamTypeDetails;
  }
  /** @return ContentStreamTypeAssignedTargetingOptionDetails */
  public function getContentStreamTypeDetails()
  {
    return $this->contentStreamTypeDetails;
  }
  /** @param DayAndTimeAssignedTargetingOptionDetails */
  public function setDayAndTimeDetails(DayAndTimeAssignedTargetingOptionDetails $dayAndTimeDetails)
  {
    $this->dayAndTimeDetails = $dayAndTimeDetails;
  }
  /** @return DayAndTimeAssignedTargetingOptionDetails */
  public function getDayAndTimeDetails()
  {
    return $this->dayAndTimeDetails;
  }
  /** @param DeviceMakeModelAssignedTargetingOptionDetails */
  public function setDeviceMakeModelDetails(DeviceMakeModelAssignedTargetingOptionDetails $deviceMakeModelDetails)
  {
    $this->deviceMakeModelDetails = $deviceMakeModelDetails;
  }
  /** @return DeviceMakeModelAssignedTargetingOptionDetails */
  public function getDeviceMakeModelDetails()
  {
    return $this->deviceMakeModelDetails;
  }
  /** @param DeviceTypeAssignedTargetingOptionDetails */
  public function setDeviceTypeDetails(DeviceTypeAssignedTargetingOptionDetails $deviceTypeDetails)
  {
    $this->deviceTypeDetails = $deviceTypeDetails;
  }
  /** @return DeviceTypeAssignedTargetingOptionDetails */
  public function getDeviceTypeDetails()
  {
    return $this->deviceTypeDetails;
  }
  /** @param DigitalContentLabelAssignedTargetingOptionDetails */
  public function setDigitalContentLabelExclusionDetails(DigitalContentLabelAssignedTargetingOptionDetails $digitalContentLabelExclusionDetails)
  {
    $this->digitalContentLabelExclusionDetails = $digitalContentLabelExclusionDetails;
  }
  /** @return DigitalContentLabelAssignedTargetingOptionDetails */
  public function getDigitalContentLabelExclusionDetails()
  {
    return $this->digitalContentLabelExclusionDetails;
  }
  /** @param EnvironmentAssignedTargetingOptionDetails */
  public function setEnvironmentDetails(EnvironmentAssignedTargetingOptionDetails $environmentDetails)
  {
    $this->environmentDetails = $environmentDetails;
  }
  /** @return EnvironmentAssignedTargetingOptionDetails */
  public function getEnvironmentDetails()
  {
    return $this->environmentDetails;
  }
  /** @param ExchangeAssignedTargetingOptionDetails */
  public function setExchangeDetails(ExchangeAssignedTargetingOptionDetails $exchangeDetails)
  {
    $this->exchangeDetails = $exchangeDetails;
  }
  /** @return ExchangeAssignedTargetingOptionDetails */
  public function getExchangeDetails()
  {
    return $this->exchangeDetails;
  }
  /** @param GenderAssignedTargetingOptionDetails */
  public function setGenderDetails(GenderAssignedTargetingOptionDetails $genderDetails)
  {
    $this->genderDetails = $genderDetails;
  }
  /** @return GenderAssignedTargetingOptionDetails */
  public function getGenderDetails()
  {
    return $this->genderDetails;
  }
  /** @param GeoRegionAssignedTargetingOptionDetails */
  public function setGeoRegionDetails(GeoRegionAssignedTargetingOptionDetails $geoRegionDetails)
  {
    $this->geoRegionDetails = $geoRegionDetails;
  }
  /** @return GeoRegionAssignedTargetingOptionDetails */
  public function getGeoRegionDetails()
  {
    return $this->geoRegionDetails;
  }
  /** @param HouseholdIncomeAssignedTargetingOptionDetails */
  public function setHouseholdIncomeDetails(HouseholdIncomeAssignedTargetingOptionDetails $householdIncomeDetails)
  {
    $this->householdIncomeDetails = $householdIncomeDetails;
  }
  /** @return HouseholdIncomeAssignedTargetingOptionDetails */
  public function getHouseholdIncomeDetails()
  {
    return $this->householdIncomeDetails;
  }
  /** @param string */
  public function setInheritance($inheritance)
  {
    $this->inheritance = $inheritance;
  }
  /** @return string */
  public function getInheritance()
  {
    return $this->inheritance;
  }
  /** @param InventorySourceAssignedTargetingOptionDetails */
  public function setInventorySourceDetails(InventorySourceAssignedTargetingOptionDetails $inventorySourceDetails)
  {
    $this->inventorySourceDetails = $inventorySourceDetails;
  }
  /** @return InventorySourceAssignedTargetingOptionDetails */
  public function getInventorySourceDetails()
  {
    return $this->inventorySourceDetails;
  }
  /** @param InventorySourceGroupAssignedTargetingOptionDetails */
  public function setInventorySourceGroupDetails(InventorySourceGroupAssignedTargetingOptionDetails $inventorySourceGroupDetails)
  {
    $this->inventorySourceGroupDetails = $inventorySourceGroupDetails;
  }
  /** @return InventorySourceGroupAssignedTargetingOptionDetails */
  public function getInventorySourceGroupDetails()
  {
    return $this->inventorySourceGroupDetails;
  }
  /** @param KeywordAssignedTargetingOptionDetails */
  public function setKeywordDetails(KeywordAssignedTargetingOptionDetails $keywordDetails)
  {
    $this->keywordDetails = $keywordDetails;
  }
  /** @return KeywordAssignedTargetingOptionDetails */
  public function getKeywordDetails()
  {
    return $this->keywordDetails;
  }
  /** @param LanguageAssignedTargetingOptionDetails */
  public function setLanguageDetails(LanguageAssignedTargetingOptionDetails $languageDetails)
  {
    $this->languageDetails = $languageDetails;
  }
  /** @return LanguageAssignedTargetingOptionDetails */
  public function getLanguageDetails()
  {
    return $this->languageDetails;
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
  /** @param NativeContentPositionAssignedTargetingOptionDetails */
  public function setNativeContentPositionDetails(NativeContentPositionAssignedTargetingOptionDetails $nativeContentPositionDetails)
  {
    $this->nativeContentPositionDetails = $nativeContentPositionDetails;
  }
  /** @return NativeContentPositionAssignedTargetingOptionDetails */
  public function getNativeContentPositionDetails()
  {
    return $this->nativeContentPositionDetails;
  }
  /** @param NegativeKeywordListAssignedTargetingOptionDetails */
  public function setNegativeKeywordListDetails(NegativeKeywordListAssignedTargetingOptionDetails $negativeKeywordListDetails)
  {
    $this->negativeKeywordListDetails = $negativeKeywordListDetails;
  }
  /** @return NegativeKeywordListAssignedTargetingOptionDetails */
  public function getNegativeKeywordListDetails()
  {
    return $this->negativeKeywordListDetails;
  }
  /** @param OmidAssignedTargetingOptionDetails */
  public function setOmidDetails(OmidAssignedTargetingOptionDetails $omidDetails)
  {
    $this->omidDetails = $omidDetails;
  }
  /** @return OmidAssignedTargetingOptionDetails */
  public function getOmidDetails()
  {
    return $this->omidDetails;
  }
  /** @param OnScreenPositionAssignedTargetingOptionDetails */
  public function setOnScreenPositionDetails(OnScreenPositionAssignedTargetingOptionDetails $onScreenPositionDetails)
  {
    $this->onScreenPositionDetails = $onScreenPositionDetails;
  }
  /** @return OnScreenPositionAssignedTargetingOptionDetails */
  public function getOnScreenPositionDetails()
  {
    return $this->onScreenPositionDetails;
  }
  /** @param OperatingSystemAssignedTargetingOptionDetails */
  public function setOperatingSystemDetails(OperatingSystemAssignedTargetingOptionDetails $operatingSystemDetails)
  {
    $this->operatingSystemDetails = $operatingSystemDetails;
  }
  /** @return OperatingSystemAssignedTargetingOptionDetails */
  public function getOperatingSystemDetails()
  {
    return $this->operatingSystemDetails;
  }
  /** @param ParentalStatusAssignedTargetingOptionDetails */
  public function setParentalStatusDetails(ParentalStatusAssignedTargetingOptionDetails $parentalStatusDetails)
  {
    $this->parentalStatusDetails = $parentalStatusDetails;
  }
  /** @return ParentalStatusAssignedTargetingOptionDetails */
  public function getParentalStatusDetails()
  {
    return $this->parentalStatusDetails;
  }
  /** @param PoiAssignedTargetingOptionDetails */
  public function setPoiDetails(PoiAssignedTargetingOptionDetails $poiDetails)
  {
    $this->poiDetails = $poiDetails;
  }
  /** @return PoiAssignedTargetingOptionDetails */
  public function getPoiDetails()
  {
    return $this->poiDetails;
  }
  /** @param ProximityLocationListAssignedTargetingOptionDetails */
  public function setProximityLocationListDetails(ProximityLocationListAssignedTargetingOptionDetails $proximityLocationListDetails)
  {
    $this->proximityLocationListDetails = $proximityLocationListDetails;
  }
  /** @return ProximityLocationListAssignedTargetingOptionDetails */
  public function getProximityLocationListDetails()
  {
    return $this->proximityLocationListDetails;
  }
  /** @param RegionalLocationListAssignedTargetingOptionDetails */
  public function setRegionalLocationListDetails(RegionalLocationListAssignedTargetingOptionDetails $regionalLocationListDetails)
  {
    $this->regionalLocationListDetails = $regionalLocationListDetails;
  }
  /** @return RegionalLocationListAssignedTargetingOptionDetails */
  public function getRegionalLocationListDetails()
  {
    return $this->regionalLocationListDetails;
  }
  /** @param SensitiveCategoryAssignedTargetingOptionDetails */
  public function setSensitiveCategoryExclusionDetails(SensitiveCategoryAssignedTargetingOptionDetails $sensitiveCategoryExclusionDetails)
  {
    $this->sensitiveCategoryExclusionDetails = $sensitiveCategoryExclusionDetails;
  }
  /** @return SensitiveCategoryAssignedTargetingOptionDetails */
  public function getSensitiveCategoryExclusionDetails()
  {
    return $this->sensitiveCategoryExclusionDetails;
  }
  /** @param SubExchangeAssignedTargetingOptionDetails */
  public function setSubExchangeDetails(SubExchangeAssignedTargetingOptionDetails $subExchangeDetails)
  {
    $this->subExchangeDetails = $subExchangeDetails;
  }
  /** @return SubExchangeAssignedTargetingOptionDetails */
  public function getSubExchangeDetails()
  {
    return $this->subExchangeDetails;
  }
  /** @param string */
  public function setTargetingType($targetingType)
  {
    $this->targetingType = $targetingType;
  }
  /** @return string */
  public function getTargetingType()
  {
    return $this->targetingType;
  }
  /** @param ThirdPartyVerifierAssignedTargetingOptionDetails */
  public function setThirdPartyVerifierDetails(ThirdPartyVerifierAssignedTargetingOptionDetails $thirdPartyVerifierDetails)
  {
    $this->thirdPartyVerifierDetails = $thirdPartyVerifierDetails;
  }
  /** @return ThirdPartyVerifierAssignedTargetingOptionDetails */
  public function getThirdPartyVerifierDetails()
  {
    return $this->thirdPartyVerifierDetails;
  }
  /** @param UrlAssignedTargetingOptionDetails */
  public function setUrlDetails(UrlAssignedTargetingOptionDetails $urlDetails)
  {
    $this->urlDetails = $urlDetails;
  }
  /** @return UrlAssignedTargetingOptionDetails */
  public function getUrlDetails()
  {
    return $this->urlDetails;
  }
  /** @param UserRewardedContentAssignedTargetingOptionDetails */
  public function setUserRewardedContentDetails(UserRewardedContentAssignedTargetingOptionDetails $userRewardedContentDetails)
  {
    $this->userRewardedContentDetails = $userRewardedContentDetails;
  }
  /** @return UserRewardedContentAssignedTargetingOptionDetails */
  public function getUserRewardedContentDetails()
  {
    return $this->userRewardedContentDetails;
  }
  /** @param VideoPlayerSizeAssignedTargetingOptionDetails */
  public function setVideoPlayerSizeDetails(VideoPlayerSizeAssignedTargetingOptionDetails $videoPlayerSizeDetails)
  {
    $this->videoPlayerSizeDetails = $videoPlayerSizeDetails;
  }
  /** @return VideoPlayerSizeAssignedTargetingOptionDetails */
  public function getVideoPlayerSizeDetails()
  {
    return $this->videoPlayerSizeDetails;
  }
  /** @param ViewabilityAssignedTargetingOptionDetails */
  public function setViewabilityDetails(ViewabilityAssignedTargetingOptionDetails $viewabilityDetails)
  {
    $this->viewabilityDetails = $viewabilityDetails;
  }
  /** @return ViewabilityAssignedTargetingOptionDetails */
  public function getViewabilityDetails()
  {
    return $this->viewabilityDetails;
  }
}

class AssignedUserRole extends \Google\Model
{
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $assignedUserRoleId;
  /** @var string */
  public $partnerId;
  /** @var string */
  public $userRole;

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
  public function setAssignedUserRoleId($assignedUserRoleId)
  {
    $this->assignedUserRoleId = $assignedUserRoleId;
  }
  /** @return string */
  public function getAssignedUserRoleId()
  {
    return $this->assignedUserRoleId;
  }
  /** @param string */
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
  }
  /** @param string */
  public function setUserRole($userRole)
  {
    $this->userRole = $userRole;
  }
  /** @return string */
  public function getUserRole()
  {
    return $this->userRole;
  }
}

class AudienceGroupAssignedTargetingOptionDetails extends \Google\Collection
{
  /** @var FirstAndThirdPartyAudienceGroup */
  public $excludedFirstAndThirdPartyAudienceGroup;
  /** @var GoogleAudienceGroup */
  public $excludedGoogleAudienceGroup;
  /** @var CombinedAudienceGroup */
  public $includedCombinedAudienceGroup;
  /** @var CustomListGroup */
  public $includedCustomListGroup;
  /** @var FirstAndThirdPartyAudienceGroup[] */
  public $includedFirstAndThirdPartyAudienceGroups;
  /** @var GoogleAudienceGroup */
  public $includedGoogleAudienceGroup;
  protected $collection_key = 'includedFirstAndThirdPartyAudienceGroups';
  protected $excludedFirstAndThirdPartyAudienceGroupType = FirstAndThirdPartyAudienceGroup::class;
  protected $excludedFirstAndThirdPartyAudienceGroupDataType = '';
  protected $excludedGoogleAudienceGroupType = GoogleAudienceGroup::class;
  protected $excludedGoogleAudienceGroupDataType = '';
  protected $includedCombinedAudienceGroupType = CombinedAudienceGroup::class;
  protected $includedCombinedAudienceGroupDataType = '';
  protected $includedCustomListGroupType = CustomListGroup::class;
  protected $includedCustomListGroupDataType = '';
  protected $includedFirstAndThirdPartyAudienceGroupsType = FirstAndThirdPartyAudienceGroup::class;
  protected $includedFirstAndThirdPartyAudienceGroupsDataType = 'array';
  protected $includedGoogleAudienceGroupType = GoogleAudienceGroup::class;
  protected $includedGoogleAudienceGroupDataType = '';
  /** @param FirstAndThirdPartyAudienceGroup */
  public function setExcludedFirstAndThirdPartyAudienceGroup(FirstAndThirdPartyAudienceGroup $excludedFirstAndThirdPartyAudienceGroup)
  {
    $this->excludedFirstAndThirdPartyAudienceGroup = $excludedFirstAndThirdPartyAudienceGroup;
  }
  /** @return FirstAndThirdPartyAudienceGroup */
  public function getExcludedFirstAndThirdPartyAudienceGroup()
  {
    return $this->excludedFirstAndThirdPartyAudienceGroup;
  }
  /** @param GoogleAudienceGroup */
  public function setExcludedGoogleAudienceGroup(GoogleAudienceGroup $excludedGoogleAudienceGroup)
  {
    $this->excludedGoogleAudienceGroup = $excludedGoogleAudienceGroup;
  }
  /** @return GoogleAudienceGroup */
  public function getExcludedGoogleAudienceGroup()
  {
    return $this->excludedGoogleAudienceGroup;
  }
  /** @param CombinedAudienceGroup */
  public function setIncludedCombinedAudienceGroup(CombinedAudienceGroup $includedCombinedAudienceGroup)
  {
    $this->includedCombinedAudienceGroup = $includedCombinedAudienceGroup;
  }
  /** @return CombinedAudienceGroup */
  public function getIncludedCombinedAudienceGroup()
  {
    return $this->includedCombinedAudienceGroup;
  }
  /** @param CustomListGroup */
  public function setIncludedCustomListGroup(CustomListGroup $includedCustomListGroup)
  {
    $this->includedCustomListGroup = $includedCustomListGroup;
  }
  /** @return CustomListGroup */
  public function getIncludedCustomListGroup()
  {
    return $this->includedCustomListGroup;
  }
  /** @param FirstAndThirdPartyAudienceGroup[] */
  public function setIncludedFirstAndThirdPartyAudienceGroups($includedFirstAndThirdPartyAudienceGroups)
  {
    $this->includedFirstAndThirdPartyAudienceGroups = $includedFirstAndThirdPartyAudienceGroups;
  }
  /** @return FirstAndThirdPartyAudienceGroup[] */
  public function getIncludedFirstAndThirdPartyAudienceGroups()
  {
    return $this->includedFirstAndThirdPartyAudienceGroups;
  }
  /** @param GoogleAudienceGroup */
  public function setIncludedGoogleAudienceGroup(GoogleAudienceGroup $includedGoogleAudienceGroup)
  {
    $this->includedGoogleAudienceGroup = $includedGoogleAudienceGroup;
  }
  /** @return GoogleAudienceGroup */
  public function getIncludedGoogleAudienceGroup()
  {
    return $this->includedGoogleAudienceGroup;
  }
}

class AudioContentTypeAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $audioContentType;

  /** @param string */
  public function setAudioContentType($audioContentType)
  {
    $this->audioContentType = $audioContentType;
  }
  /** @return string */
  public function getAudioContentType()
  {
    return $this->audioContentType;
  }
}

class AudioContentTypeTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $audioContentType;

  /** @param string */
  public function setAudioContentType($audioContentType)
  {
    $this->audioContentType = $audioContentType;
  }
  /** @return string */
  public function getAudioContentType()
  {
    return $this->audioContentType;
  }
}

class AudioVideoOffset extends \Google\Model
{
  /** @var string */
  public $percentage;
  /** @var string */
  public $seconds;

  /** @param string */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  /** @return string */
  public function getPercentage()
  {
    return $this->percentage;
  }
  /** @param string */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return string */
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class AuditAdvertiserResponse extends \Google\Model
{
  /** @var string */
  public $adGroupCriteriaCount;
  /** @var string */
  public $campaignCriteriaCount;
  /** @var string */
  public $channelsCount;
  /** @var string */
  public $negativeKeywordListsCount;
  /** @var string */
  public $negativelyTargetedChannelsCount;
  /** @var string */
  public $usedCampaignsCount;
  /** @var string */
  public $usedInsertionOrdersCount;
  /** @var string */
  public $usedLineItemsCount;

  /** @param string */
  public function setAdGroupCriteriaCount($adGroupCriteriaCount)
  {
    $this->adGroupCriteriaCount = $adGroupCriteriaCount;
  }
  /** @return string */
  public function getAdGroupCriteriaCount()
  {
    return $this->adGroupCriteriaCount;
  }
  /** @param string */
  public function setCampaignCriteriaCount($campaignCriteriaCount)
  {
    $this->campaignCriteriaCount = $campaignCriteriaCount;
  }
  /** @return string */
  public function getCampaignCriteriaCount()
  {
    return $this->campaignCriteriaCount;
  }
  /** @param string */
  public function setChannelsCount($channelsCount)
  {
    $this->channelsCount = $channelsCount;
  }
  /** @return string */
  public function getChannelsCount()
  {
    return $this->channelsCount;
  }
  /** @param string */
  public function setNegativeKeywordListsCount($negativeKeywordListsCount)
  {
    $this->negativeKeywordListsCount = $negativeKeywordListsCount;
  }
  /** @return string */
  public function getNegativeKeywordListsCount()
  {
    return $this->negativeKeywordListsCount;
  }
  /** @param string */
  public function setNegativelyTargetedChannelsCount($negativelyTargetedChannelsCount)
  {
    $this->negativelyTargetedChannelsCount = $negativelyTargetedChannelsCount;
  }
  /** @return string */
  public function getNegativelyTargetedChannelsCount()
  {
    return $this->negativelyTargetedChannelsCount;
  }
  /** @param string */
  public function setUsedCampaignsCount($usedCampaignsCount)
  {
    $this->usedCampaignsCount = $usedCampaignsCount;
  }
  /** @return string */
  public function getUsedCampaignsCount()
  {
    return $this->usedCampaignsCount;
  }
  /** @param string */
  public function setUsedInsertionOrdersCount($usedInsertionOrdersCount)
  {
    $this->usedInsertionOrdersCount = $usedInsertionOrdersCount;
  }
  /** @return string */
  public function getUsedInsertionOrdersCount()
  {
    return $this->usedInsertionOrdersCount;
  }
  /** @param string */
  public function setUsedLineItemsCount($usedLineItemsCount)
  {
    $this->usedLineItemsCount = $usedLineItemsCount;
  }
  /** @return string */
  public function getUsedLineItemsCount()
  {
    return $this->usedLineItemsCount;
  }
}

class AuthorizedSellerStatusAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $authorizedSellerStatus;
  /** @var string */
  public $targetingOptionId;

  /** @param string */
  public function setAuthorizedSellerStatus($authorizedSellerStatus)
  {
    $this->authorizedSellerStatus = $authorizedSellerStatus;
  }
  /** @return string */
  public function getAuthorizedSellerStatus()
  {
    return $this->authorizedSellerStatus;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class AuthorizedSellerStatusTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $authorizedSellerStatus;

  /** @param string */
  public function setAuthorizedSellerStatus($authorizedSellerStatus)
  {
    $this->authorizedSellerStatus = $authorizedSellerStatus;
  }
  /** @return string */
  public function getAuthorizedSellerStatus()
  {
    return $this->authorizedSellerStatus;
  }
}

class BiddingStrategy extends \Google\Model
{
  /** @var FixedBidStrategy */
  public $fixedBid;
  /** @var MaximizeSpendBidStrategy */
  public $maximizeSpendAutoBid;
  /** @var PerformanceGoalBidStrategy */
  public $performanceGoalAutoBid;
  protected $fixedBidType = FixedBidStrategy::class;
  protected $fixedBidDataType = '';
  protected $maximizeSpendAutoBidType = MaximizeSpendBidStrategy::class;
  protected $maximizeSpendAutoBidDataType = '';
  protected $performanceGoalAutoBidType = PerformanceGoalBidStrategy::class;
  protected $performanceGoalAutoBidDataType = '';
  /** @param FixedBidStrategy */
  public function setFixedBid(FixedBidStrategy $fixedBid)
  {
    $this->fixedBid = $fixedBid;
  }
  /** @return FixedBidStrategy */
  public function getFixedBid()
  {
    return $this->fixedBid;
  }
  /** @param MaximizeSpendBidStrategy */
  public function setMaximizeSpendAutoBid(MaximizeSpendBidStrategy $maximizeSpendAutoBid)
  {
    $this->maximizeSpendAutoBid = $maximizeSpendAutoBid;
  }
  /** @return MaximizeSpendBidStrategy */
  public function getMaximizeSpendAutoBid()
  {
    return $this->maximizeSpendAutoBid;
  }
  /** @param PerformanceGoalBidStrategy */
  public function setPerformanceGoalAutoBid(PerformanceGoalBidStrategy $performanceGoalAutoBid)
  {
    $this->performanceGoalAutoBid = $performanceGoalAutoBid;
  }
  /** @return PerformanceGoalBidStrategy */
  public function getPerformanceGoalAutoBid()
  {
    return $this->performanceGoalAutoBid;
  }
}

class BrowserAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $negative;
  /** @var string */
  public $targetingOptionId;

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
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class BrowserTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;

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

class BudgetSummary extends \Google\Model
{
  /** @var string */
  public $externalBudgetId;
  /** @var string */
  public $preTaxAmountMicros;
  /** @var PrismaCpeCode */
  public $prismaCpeCode;
  /** @var string */
  public $taxAmountMicros;
  /** @var string */
  public $totalAmountMicros;
  protected $prismaCpeCodeType = PrismaCpeCode::class;
  protected $prismaCpeCodeDataType = '';
  /** @param string */
  public function setExternalBudgetId($externalBudgetId)
  {
    $this->externalBudgetId = $externalBudgetId;
  }
  /** @return string */
  public function getExternalBudgetId()
  {
    return $this->externalBudgetId;
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
  /** @param PrismaCpeCode */
  public function setPrismaCpeCode(PrismaCpeCode $prismaCpeCode)
  {
    $this->prismaCpeCode = $prismaCpeCode;
  }
  /** @return PrismaCpeCode */
  public function getPrismaCpeCode()
  {
    return $this->prismaCpeCode;
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

class BulkEditAdvertiserAssignedTargetingOptionsRequest extends \Google\Collection
{
  /** @var CreateAssignedTargetingOptionsRequest[] */
  public $createRequests;
  /** @var DeleteAssignedTargetingOptionsRequest[] */
  public $deleteRequests;
  protected $collection_key = 'deleteRequests';
  protected $createRequestsType = CreateAssignedTargetingOptionsRequest::class;
  protected $createRequestsDataType = 'array';
  protected $deleteRequestsType = DeleteAssignedTargetingOptionsRequest::class;
  protected $deleteRequestsDataType = 'array';
  /** @param CreateAssignedTargetingOptionsRequest[] */
  public function setCreateRequests($createRequests)
  {
    $this->createRequests = $createRequests;
  }
  /** @return CreateAssignedTargetingOptionsRequest[] */
  public function getCreateRequests()
  {
    return $this->createRequests;
  }
  /** @param DeleteAssignedTargetingOptionsRequest[] */
  public function setDeleteRequests($deleteRequests)
  {
    $this->deleteRequests = $deleteRequests;
  }
  /** @return DeleteAssignedTargetingOptionsRequest[] */
  public function getDeleteRequests()
  {
    return $this->deleteRequests;
  }
}

class BulkEditAdvertiserAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $createdAssignedTargetingOptions;
  protected $collection_key = 'createdAssignedTargetingOptions';
  protected $createdAssignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $createdAssignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setCreatedAssignedTargetingOptions($createdAssignedTargetingOptions)
  {
    $this->createdAssignedTargetingOptions = $createdAssignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getCreatedAssignedTargetingOptions()
  {
    return $this->createdAssignedTargetingOptions;
  }
}

class BulkEditAssignedInventorySourcesRequest extends \Google\Collection
{
  /** @var string */
  public $advertiserId;
  /** @var AssignedInventorySource[] */
  public $createdAssignedInventorySources;
  /** @var string[] */
  public $deletedAssignedInventorySources;
  /** @var string */
  public $partnerId;
  protected $collection_key = 'deletedAssignedInventorySources';
  protected $createdAssignedInventorySourcesType = AssignedInventorySource::class;
  protected $createdAssignedInventorySourcesDataType = 'array';
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
  /** @param AssignedInventorySource[] */
  public function setCreatedAssignedInventorySources($createdAssignedInventorySources)
  {
    $this->createdAssignedInventorySources = $createdAssignedInventorySources;
  }
  /** @return AssignedInventorySource[] */
  public function getCreatedAssignedInventorySources()
  {
    return $this->createdAssignedInventorySources;
  }
  /** @param string[] */
  public function setDeletedAssignedInventorySources($deletedAssignedInventorySources)
  {
    $this->deletedAssignedInventorySources = $deletedAssignedInventorySources;
  }
  /** @return string[] */
  public function getDeletedAssignedInventorySources()
  {
    return $this->deletedAssignedInventorySources;
  }
  /** @param string */
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
  }
}

class BulkEditAssignedInventorySourcesResponse extends \Google\Collection
{
  /** @var AssignedInventorySource[] */
  public $assignedInventorySources;
  protected $collection_key = 'assignedInventorySources';
  protected $assignedInventorySourcesType = AssignedInventorySource::class;
  protected $assignedInventorySourcesDataType = 'array';
  /** @param AssignedInventorySource[] */
  public function setAssignedInventorySources($assignedInventorySources)
  {
    $this->assignedInventorySources = $assignedInventorySources;
  }
  /** @return AssignedInventorySource[] */
  public function getAssignedInventorySources()
  {
    return $this->assignedInventorySources;
  }
}

class BulkEditAssignedLocationsRequest extends \Google\Collection
{
  /** @var AssignedLocation[] */
  public $createdAssignedLocations;
  /** @var string[] */
  public $deletedAssignedLocations;
  protected $collection_key = 'deletedAssignedLocations';
  protected $createdAssignedLocationsType = AssignedLocation::class;
  protected $createdAssignedLocationsDataType = 'array';
  /** @param AssignedLocation[] */
  public function setCreatedAssignedLocations($createdAssignedLocations)
  {
    $this->createdAssignedLocations = $createdAssignedLocations;
  }
  /** @return AssignedLocation[] */
  public function getCreatedAssignedLocations()
  {
    return $this->createdAssignedLocations;
  }
  /** @param string[] */
  public function setDeletedAssignedLocations($deletedAssignedLocations)
  {
    $this->deletedAssignedLocations = $deletedAssignedLocations;
  }
  /** @return string[] */
  public function getDeletedAssignedLocations()
  {
    return $this->deletedAssignedLocations;
  }
}

class BulkEditAssignedLocationsResponse extends \Google\Collection
{
  /** @var AssignedLocation[] */
  public $assignedLocations;
  protected $collection_key = 'assignedLocations';
  protected $assignedLocationsType = AssignedLocation::class;
  protected $assignedLocationsDataType = 'array';
  /** @param AssignedLocation[] */
  public function setAssignedLocations($assignedLocations)
  {
    $this->assignedLocations = $assignedLocations;
  }
  /** @return AssignedLocation[] */
  public function getAssignedLocations()
  {
    return $this->assignedLocations;
  }
}

class BulkEditAssignedTargetingOptionsRequest extends \Google\Collection
{
  /** @var CreateAssignedTargetingOptionsRequest[] */
  public $createRequests;
  /** @var DeleteAssignedTargetingOptionsRequest[] */
  public $deleteRequests;
  /** @var string[] */
  public $lineItemIds;
  protected $collection_key = 'lineItemIds';
  protected $createRequestsType = CreateAssignedTargetingOptionsRequest::class;
  protected $createRequestsDataType = 'array';
  protected $deleteRequestsType = DeleteAssignedTargetingOptionsRequest::class;
  protected $deleteRequestsDataType = 'array';
  /** @param CreateAssignedTargetingOptionsRequest[] */
  public function setCreateRequests($createRequests)
  {
    $this->createRequests = $createRequests;
  }
  /** @return CreateAssignedTargetingOptionsRequest[] */
  public function getCreateRequests()
  {
    return $this->createRequests;
  }
  /** @param DeleteAssignedTargetingOptionsRequest[] */
  public function setDeleteRequests($deleteRequests)
  {
    $this->deleteRequests = $deleteRequests;
  }
  /** @return DeleteAssignedTargetingOptionsRequest[] */
  public function getDeleteRequests()
  {
    return $this->deleteRequests;
  }
  /** @param string[] */
  public function setLineItemIds($lineItemIds)
  {
    $this->lineItemIds = $lineItemIds;
  }
  /** @return string[] */
  public function getLineItemIds()
  {
    return $this->lineItemIds;
  }
}

class BulkEditAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var Status[] */
  public $errors;
  /** @var string[] */
  public $failedLineItemIds;
  /** @var string[] */
  public $updatedLineItemIds;
  protected $collection_key = 'updatedLineItemIds';
  protected $errorsType = Status::class;
  protected $errorsDataType = 'array';
  /** @param Status[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return Status[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param string[] */
  public function setFailedLineItemIds($failedLineItemIds)
  {
    $this->failedLineItemIds = $failedLineItemIds;
  }
  /** @return string[] */
  public function getFailedLineItemIds()
  {
    return $this->failedLineItemIds;
  }
  /** @param string[] */
  public function setUpdatedLineItemIds($updatedLineItemIds)
  {
    $this->updatedLineItemIds = $updatedLineItemIds;
  }
  /** @return string[] */
  public function getUpdatedLineItemIds()
  {
    return $this->updatedLineItemIds;
  }
}

class BulkEditAssignedUserRolesRequest extends \Google\Collection
{
  /** @var AssignedUserRole[] */
  public $createdAssignedUserRoles;
  /** @var string[] */
  public $deletedAssignedUserRoles;
  protected $collection_key = 'deletedAssignedUserRoles';
  protected $createdAssignedUserRolesType = AssignedUserRole::class;
  protected $createdAssignedUserRolesDataType = 'array';
  /** @param AssignedUserRole[] */
  public function setCreatedAssignedUserRoles($createdAssignedUserRoles)
  {
    $this->createdAssignedUserRoles = $createdAssignedUserRoles;
  }
  /** @return AssignedUserRole[] */
  public function getCreatedAssignedUserRoles()
  {
    return $this->createdAssignedUserRoles;
  }
  /** @param string[] */
  public function setDeletedAssignedUserRoles($deletedAssignedUserRoles)
  {
    $this->deletedAssignedUserRoles = $deletedAssignedUserRoles;
  }
  /** @return string[] */
  public function getDeletedAssignedUserRoles()
  {
    return $this->deletedAssignedUserRoles;
  }
}

class BulkEditAssignedUserRolesResponse extends \Google\Collection
{
  /** @var AssignedUserRole[] */
  public $createdAssignedUserRoles;
  protected $collection_key = 'createdAssignedUserRoles';
  protected $createdAssignedUserRolesType = AssignedUserRole::class;
  protected $createdAssignedUserRolesDataType = 'array';
  /** @param AssignedUserRole[] */
  public function setCreatedAssignedUserRoles($createdAssignedUserRoles)
  {
    $this->createdAssignedUserRoles = $createdAssignedUserRoles;
  }
  /** @return AssignedUserRole[] */
  public function getCreatedAssignedUserRoles()
  {
    return $this->createdAssignedUserRoles;
  }
}

class BulkEditNegativeKeywordsRequest extends \Google\Collection
{
  /** @var NegativeKeyword[] */
  public $createdNegativeKeywords;
  /** @var string[] */
  public $deletedNegativeKeywords;
  protected $collection_key = 'deletedNegativeKeywords';
  protected $createdNegativeKeywordsType = NegativeKeyword::class;
  protected $createdNegativeKeywordsDataType = 'array';
  /** @param NegativeKeyword[] */
  public function setCreatedNegativeKeywords($createdNegativeKeywords)
  {
    $this->createdNegativeKeywords = $createdNegativeKeywords;
  }
  /** @return NegativeKeyword[] */
  public function getCreatedNegativeKeywords()
  {
    return $this->createdNegativeKeywords;
  }
  /** @param string[] */
  public function setDeletedNegativeKeywords($deletedNegativeKeywords)
  {
    $this->deletedNegativeKeywords = $deletedNegativeKeywords;
  }
  /** @return string[] */
  public function getDeletedNegativeKeywords()
  {
    return $this->deletedNegativeKeywords;
  }
}

class BulkEditNegativeKeywordsResponse extends \Google\Collection
{
  /** @var NegativeKeyword[] */
  public $negativeKeywords;
  protected $collection_key = 'negativeKeywords';
  protected $negativeKeywordsType = NegativeKeyword::class;
  protected $negativeKeywordsDataType = 'array';
  /** @param NegativeKeyword[] */
  public function setNegativeKeywords($negativeKeywords)
  {
    $this->negativeKeywords = $negativeKeywords;
  }
  /** @return NegativeKeyword[] */
  public function getNegativeKeywords()
  {
    return $this->negativeKeywords;
  }
}

class BulkEditPartnerAssignedTargetingOptionsRequest extends \Google\Collection
{
  /** @var CreateAssignedTargetingOptionsRequest[] */
  public $createRequests;
  /** @var DeleteAssignedTargetingOptionsRequest[] */
  public $deleteRequests;
  protected $collection_key = 'deleteRequests';
  protected $createRequestsType = CreateAssignedTargetingOptionsRequest::class;
  protected $createRequestsDataType = 'array';
  protected $deleteRequestsType = DeleteAssignedTargetingOptionsRequest::class;
  protected $deleteRequestsDataType = 'array';
  /** @param CreateAssignedTargetingOptionsRequest[] */
  public function setCreateRequests($createRequests)
  {
    $this->createRequests = $createRequests;
  }
  /** @return CreateAssignedTargetingOptionsRequest[] */
  public function getCreateRequests()
  {
    return $this->createRequests;
  }
  /** @param DeleteAssignedTargetingOptionsRequest[] */
  public function setDeleteRequests($deleteRequests)
  {
    $this->deleteRequests = $deleteRequests;
  }
  /** @return DeleteAssignedTargetingOptionsRequest[] */
  public function getDeleteRequests()
  {
    return $this->deleteRequests;
  }
}

class BulkEditPartnerAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $createdAssignedTargetingOptions;
  protected $collection_key = 'createdAssignedTargetingOptions';
  protected $createdAssignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $createdAssignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setCreatedAssignedTargetingOptions($createdAssignedTargetingOptions)
  {
    $this->createdAssignedTargetingOptions = $createdAssignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getCreatedAssignedTargetingOptions()
  {
    return $this->createdAssignedTargetingOptions;
  }
}

class BulkEditSitesRequest extends \Google\Collection
{
  /** @var string */
  public $advertiserId;
  /** @var Site[] */
  public $createdSites;
  /** @var string[] */
  public $deletedSites;
  /** @var string */
  public $partnerId;
  protected $collection_key = 'deletedSites';
  protected $createdSitesType = Site::class;
  protected $createdSitesDataType = 'array';
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
  /** @param Site[] */
  public function setCreatedSites($createdSites)
  {
    $this->createdSites = $createdSites;
  }
  /** @return Site[] */
  public function getCreatedSites()
  {
    return $this->createdSites;
  }
  /** @param string[] */
  public function setDeletedSites($deletedSites)
  {
    $this->deletedSites = $deletedSites;
  }
  /** @return string[] */
  public function getDeletedSites()
  {
    return $this->deletedSites;
  }
  /** @param string */
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
  }
}

class BulkEditSitesResponse extends \Google\Collection
{
  /** @var Site[] */
  public $sites;
  protected $collection_key = 'sites';
  protected $sitesType = Site::class;
  protected $sitesDataType = 'array';
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

class BulkListAdvertiserAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $assignedTargetingOptions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignedTargetingOptions';
  protected $assignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $assignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setAssignedTargetingOptions($assignedTargetingOptions)
  {
    $this->assignedTargetingOptions = $assignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getAssignedTargetingOptions()
  {
    return $this->assignedTargetingOptions;
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

class BulkListAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var LineItemAssignedTargetingOption[] */
  public $lineItemAssignedTargetingOptions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'lineItemAssignedTargetingOptions';
  protected $lineItemAssignedTargetingOptionsType = LineItemAssignedTargetingOption::class;
  protected $lineItemAssignedTargetingOptionsDataType = 'array';
  /** @param LineItemAssignedTargetingOption[] */
  public function setLineItemAssignedTargetingOptions($lineItemAssignedTargetingOptions)
  {
    $this->lineItemAssignedTargetingOptions = $lineItemAssignedTargetingOptions;
  }
  /** @return LineItemAssignedTargetingOption[] */
  public function getLineItemAssignedTargetingOptions()
  {
    return $this->lineItemAssignedTargetingOptions;
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

class BulkListCampaignAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $assignedTargetingOptions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignedTargetingOptions';
  protected $assignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $assignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setAssignedTargetingOptions($assignedTargetingOptions)
  {
    $this->assignedTargetingOptions = $assignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getAssignedTargetingOptions()
  {
    return $this->assignedTargetingOptions;
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

class BulkListInsertionOrderAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $assignedTargetingOptions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignedTargetingOptions';
  protected $assignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $assignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setAssignedTargetingOptions($assignedTargetingOptions)
  {
    $this->assignedTargetingOptions = $assignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getAssignedTargetingOptions()
  {
    return $this->assignedTargetingOptions;
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

class BulkUpdateLineItemsRequest extends \Google\Collection
{
  /** @var string[] */
  public $lineItemIds;
  /** @var LineItem */
  public $targetLineItem;
  /** @var string */
  public $updateMask;
  protected $collection_key = 'lineItemIds';
  protected $targetLineItemType = LineItem::class;
  protected $targetLineItemDataType = '';
  /** @param string[] */
  public function setLineItemIds($lineItemIds)
  {
    $this->lineItemIds = $lineItemIds;
  }
  /** @return string[] */
  public function getLineItemIds()
  {
    return $this->lineItemIds;
  }
  /** @param LineItem */
  public function setTargetLineItem(LineItem $targetLineItem)
  {
    $this->targetLineItem = $targetLineItem;
  }
  /** @return LineItem */
  public function getTargetLineItem()
  {
    return $this->targetLineItem;
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

class BulkUpdateLineItemsResponse extends \Google\Collection
{
  /** @var Status[] */
  public $errors;
  /** @var string[] */
  public $failedLineItemIds;
  /** @var string[] */
  public $skippedLineItemIds;
  /** @var string[] */
  public $updatedLineItemIds;
  protected $collection_key = 'updatedLineItemIds';
  protected $errorsType = Status::class;
  protected $errorsDataType = 'array';
  /** @param Status[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return Status[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param string[] */
  public function setFailedLineItemIds($failedLineItemIds)
  {
    $this->failedLineItemIds = $failedLineItemIds;
  }
  /** @return string[] */
  public function getFailedLineItemIds()
  {
    return $this->failedLineItemIds;
  }
  /** @param string[] */
  public function setSkippedLineItemIds($skippedLineItemIds)
  {
    $this->skippedLineItemIds = $skippedLineItemIds;
  }
  /** @return string[] */
  public function getSkippedLineItemIds()
  {
    return $this->skippedLineItemIds;
  }
  /** @param string[] */
  public function setUpdatedLineItemIds($updatedLineItemIds)
  {
    $this->updatedLineItemIds = $updatedLineItemIds;
  }
  /** @return string[] */
  public function getUpdatedLineItemIds()
  {
    return $this->updatedLineItemIds;
  }
}

class BusinessChainAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  public $proximityRadiusAmount;
  /** @var string */
  public $proximityRadiusUnit;
  /** @var string */
  public $targetingOptionId;

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
  public function setProximityRadiusAmount($proximityRadiusAmount)
  {
    $this->proximityRadiusAmount = $proximityRadiusAmount;
  }
  public function getProximityRadiusAmount()
  {
    return $this->proximityRadiusAmount;
  }
  /** @param string */
  public function setProximityRadiusUnit($proximityRadiusUnit)
  {
    $this->proximityRadiusUnit = $proximityRadiusUnit;
  }
  /** @return string */
  public function getProximityRadiusUnit()
  {
    return $this->proximityRadiusUnit;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class BusinessChainSearchTerms extends \Google\Model
{
  /** @var string */
  public $businessChainQuery;
  /** @var string */
  public $regionQuery;

  /** @param string */
  public function setBusinessChainQuery($businessChainQuery)
  {
    $this->businessChainQuery = $businessChainQuery;
  }
  /** @return string */
  public function getBusinessChainQuery()
  {
    return $this->businessChainQuery;
  }
  /** @param string */
  public function setRegionQuery($regionQuery)
  {
    $this->regionQuery = $regionQuery;
  }
  /** @return string */
  public function getRegionQuery()
  {
    return $this->regionQuery;
  }
}

class BusinessChainTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $businessChain;
  /** @var string */
  public $geoRegion;
  /** @var string */
  public $geoRegionType;

  /** @param string */
  public function setBusinessChain($businessChain)
  {
    $this->businessChain = $businessChain;
  }
  /** @return string */
  public function getBusinessChain()
  {
    return $this->businessChain;
  }
  /** @param string */
  public function setGeoRegion($geoRegion)
  {
    $this->geoRegion = $geoRegion;
  }
  /** @return string */
  public function getGeoRegion()
  {
    return $this->geoRegion;
  }
  /** @param string */
  public function setGeoRegionType($geoRegionType)
  {
    $this->geoRegionType = $geoRegionType;
  }
  /** @return string */
  public function getGeoRegionType()
  {
    return $this->geoRegionType;
  }
}

class Campaign extends \Google\Collection
{
  /** @var string */
  public $advertiserId;
  /** @var CampaignBudget[] */
  public $campaignBudgets;
  /** @var CampaignFlight */
  public $campaignFlight;
  /** @var CampaignGoal */
  public $campaignGoal;
  /** @var string */
  public $campaignId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $entityStatus;
  /** @var FrequencyCap */
  public $frequencyCap;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'campaignBudgets';
  protected $campaignBudgetsType = CampaignBudget::class;
  protected $campaignBudgetsDataType = 'array';
  protected $campaignFlightType = CampaignFlight::class;
  protected $campaignFlightDataType = '';
  protected $campaignGoalType = CampaignGoal::class;
  protected $campaignGoalDataType = '';
  protected $frequencyCapType = FrequencyCap::class;
  protected $frequencyCapDataType = '';
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
  /** @param CampaignBudget[] */
  public function setCampaignBudgets($campaignBudgets)
  {
    $this->campaignBudgets = $campaignBudgets;
  }
  /** @return CampaignBudget[] */
  public function getCampaignBudgets()
  {
    return $this->campaignBudgets;
  }
  /** @param CampaignFlight */
  public function setCampaignFlight(CampaignFlight $campaignFlight)
  {
    $this->campaignFlight = $campaignFlight;
  }
  /** @return CampaignFlight */
  public function getCampaignFlight()
  {
    return $this->campaignFlight;
  }
  /** @param CampaignGoal */
  public function setCampaignGoal(CampaignGoal $campaignGoal)
  {
    $this->campaignGoal = $campaignGoal;
  }
  /** @return CampaignGoal */
  public function getCampaignGoal()
  {
    return $this->campaignGoal;
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
  public function setEntityStatus($entityStatus)
  {
    $this->entityStatus = $entityStatus;
  }
  /** @return string */
  public function getEntityStatus()
  {
    return $this->entityStatus;
  }
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

class CampaignBudget extends \Google\Model
{
  /** @var string */
  public $budgetAmountMicros;
  /** @var string */
  public $budgetId;
  /** @var string */
  public $budgetUnit;
  /** @var DateRange */
  public $dateRange;
  /** @var string */
  public $displayName;
  /** @var string */
  public $externalBudgetId;
  /** @var string */
  public $externalBudgetSource;
  /** @var string */
  public $invoiceGroupingId;
  /** @var PrismaConfig */
  public $prismaConfig;
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $prismaConfigType = PrismaConfig::class;
  protected $prismaConfigDataType = '';
  /** @param string */
  public function setBudgetAmountMicros($budgetAmountMicros)
  {
    $this->budgetAmountMicros = $budgetAmountMicros;
  }
  /** @return string */
  public function getBudgetAmountMicros()
  {
    return $this->budgetAmountMicros;
  }
  /** @param string */
  public function setBudgetId($budgetId)
  {
    $this->budgetId = $budgetId;
  }
  /** @return string */
  public function getBudgetId()
  {
    return $this->budgetId;
  }
  /** @param string */
  public function setBudgetUnit($budgetUnit)
  {
    $this->budgetUnit = $budgetUnit;
  }
  /** @return string */
  public function getBudgetUnit()
  {
    return $this->budgetUnit;
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
  public function setExternalBudgetId($externalBudgetId)
  {
    $this->externalBudgetId = $externalBudgetId;
  }
  /** @return string */
  public function getExternalBudgetId()
  {
    return $this->externalBudgetId;
  }
  /** @param string */
  public function setExternalBudgetSource($externalBudgetSource)
  {
    $this->externalBudgetSource = $externalBudgetSource;
  }
  /** @return string */
  public function getExternalBudgetSource()
  {
    return $this->externalBudgetSource;
  }
  /** @param string */
  public function setInvoiceGroupingId($invoiceGroupingId)
  {
    $this->invoiceGroupingId = $invoiceGroupingId;
  }
  /** @return string */
  public function getInvoiceGroupingId()
  {
    return $this->invoiceGroupingId;
  }
  /** @param PrismaConfig */
  public function setPrismaConfig(PrismaConfig $prismaConfig)
  {
    $this->prismaConfig = $prismaConfig;
  }
  /** @return PrismaConfig */
  public function getPrismaConfig()
  {
    return $this->prismaConfig;
  }
}

class CampaignFlight extends \Google\Model
{
  /** @var DateRange */
  public $plannedDates;
  /** @var string */
  public $plannedSpendAmountMicros;
  protected $plannedDatesType = DateRange::class;
  protected $plannedDatesDataType = '';
  /** @param DateRange */
  public function setPlannedDates(DateRange $plannedDates)
  {
    $this->plannedDates = $plannedDates;
  }
  /** @return DateRange */
  public function getPlannedDates()
  {
    return $this->plannedDates;
  }
  /** @param string */
  public function setPlannedSpendAmountMicros($plannedSpendAmountMicros)
  {
    $this->plannedSpendAmountMicros = $plannedSpendAmountMicros;
  }
  /** @return string */
  public function getPlannedSpendAmountMicros()
  {
    return $this->plannedSpendAmountMicros;
  }
}

class CampaignGoal extends \Google\Model
{
  /** @var string */
  public $campaignGoalType;
  /** @var PerformanceGoal */
  public $performanceGoal;
  protected $performanceGoalType = PerformanceGoal::class;
  protected $performanceGoalDataType = '';
  /** @param string */
  public function setCampaignGoalType($campaignGoalType)
  {
    $this->campaignGoalType = $campaignGoalType;
  }
  /** @return string */
  public function getCampaignGoalType()
  {
    return $this->campaignGoalType;
  }
  /** @param PerformanceGoal */
  public function setPerformanceGoal(PerformanceGoal $performanceGoal)
  {
    $this->performanceGoal = $performanceGoal;
  }
  /** @return PerformanceGoal */
  public function getPerformanceGoal()
  {
    return $this->performanceGoal;
  }
}

class CarrierAndIspAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $negative;
  /** @var string */
  public $targetingOptionId;

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
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class CarrierAndIspTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $type;

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

class CategoryAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $negative;
  /** @var string */
  public $targetingOptionId;

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
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class CategoryTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;

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

class Channel extends \Google\Model
{
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $channelId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $negativelyTargetedLineItemCount;
  /** @var string */
  public $partnerId;
  /** @var string */
  public $positivelyTargetedLineItemCount;

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
  public function setNegativelyTargetedLineItemCount($negativelyTargetedLineItemCount)
  {
    $this->negativelyTargetedLineItemCount = $negativelyTargetedLineItemCount;
  }
  /** @return string */
  public function getNegativelyTargetedLineItemCount()
  {
    return $this->negativelyTargetedLineItemCount;
  }
  /** @param string */
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
  }
  /** @param string */
  public function setPositivelyTargetedLineItemCount($positivelyTargetedLineItemCount)
  {
    $this->positivelyTargetedLineItemCount = $positivelyTargetedLineItemCount;
  }
  /** @return string */
  public function getPositivelyTargetedLineItemCount()
  {
    return $this->positivelyTargetedLineItemCount;
  }
}

class ChannelAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $channelId;
  /** @var bool */
  public $negative;

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
  /** @param bool */
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
}

class CmHybridConfig extends \Google\Collection
{
  /** @var string */
  public $cmAccountId;
  /** @var string */
  public $cmFloodlightConfigId;
  /** @var bool */
  public $cmFloodlightLinkingAuthorized;
  /** @var string[] */
  public $cmSyncableSiteIds;
  /** @var bool */
  public $dv360ToCmCostReportingEnabled;
  /** @var bool */
  public $dv360ToCmDataSharingEnabled;
  protected $collection_key = 'cmSyncableSiteIds';
  /** @param string */
  public function setCmAccountId($cmAccountId)
  {
    $this->cmAccountId = $cmAccountId;
  }
  /** @return string */
  public function getCmAccountId()
  {
    return $this->cmAccountId;
  }
  /** @param string */
  public function setCmFloodlightConfigId($cmFloodlightConfigId)
  {
    $this->cmFloodlightConfigId = $cmFloodlightConfigId;
  }
  /** @return string */
  public function getCmFloodlightConfigId()
  {
    return $this->cmFloodlightConfigId;
  }
  /** @param bool */
  public function setCmFloodlightLinkingAuthorized($cmFloodlightLinkingAuthorized)
  {
    $this->cmFloodlightLinkingAuthorized = $cmFloodlightLinkingAuthorized;
  }
  /** @return bool */
  public function getCmFloodlightLinkingAuthorized()
  {
    return $this->cmFloodlightLinkingAuthorized;
  }
  /** @param string[] */
  public function setCmSyncableSiteIds($cmSyncableSiteIds)
  {
    $this->cmSyncableSiteIds = $cmSyncableSiteIds;
  }
  /** @return string[] */
  public function getCmSyncableSiteIds()
  {
    return $this->cmSyncableSiteIds;
  }
  /** @param bool */
  public function setDv360ToCmCostReportingEnabled($dv360ToCmCostReportingEnabled)
  {
    $this->dv360ToCmCostReportingEnabled = $dv360ToCmCostReportingEnabled;
  }
  /** @return bool */
  public function getDv360ToCmCostReportingEnabled()
  {
    return $this->dv360ToCmCostReportingEnabled;
  }
  /** @param bool */
  public function setDv360ToCmDataSharingEnabled($dv360ToCmDataSharingEnabled)
  {
    $this->dv360ToCmDataSharingEnabled = $dv360ToCmDataSharingEnabled;
  }
  /** @return bool */
  public function getDv360ToCmDataSharingEnabled()
  {
    return $this->dv360ToCmDataSharingEnabled;
  }
}

class CmTrackingAd extends \Google\Model
{
  /** @var string */
  public $cmAdId;
  /** @var string */
  public $cmCreativeId;
  /** @var string */
  public $cmPlacementId;

  /** @param string */
  public function setCmAdId($cmAdId)
  {
    $this->cmAdId = $cmAdId;
  }
  /** @return string */
  public function getCmAdId()
  {
    return $this->cmAdId;
  }
  /** @param string */
  public function setCmCreativeId($cmCreativeId)
  {
    $this->cmCreativeId = $cmCreativeId;
  }
  /** @return string */
  public function getCmCreativeId()
  {
    return $this->cmCreativeId;
  }
  /** @param string */
  public function setCmPlacementId($cmPlacementId)
  {
    $this->cmPlacementId = $cmPlacementId;
  }
  /** @return string */
  public function getCmPlacementId()
  {
    return $this->cmPlacementId;
  }
}

class CombinedAudience extends \Google\Model
{
  /** @var string */
  public $combinedAudienceId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;

  /** @param string */
  public function setCombinedAudienceId($combinedAudienceId)
  {
    $this->combinedAudienceId = $combinedAudienceId;
  }
  /** @return string */
  public function getCombinedAudienceId()
  {
    return $this->combinedAudienceId;
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

class CombinedAudienceGroup extends \Google\Collection
{
  /** @var CombinedAudienceTargetingSetting[] */
  public $settings;
  protected $collection_key = 'settings';
  protected $settingsType = CombinedAudienceTargetingSetting::class;
  protected $settingsDataType = 'array';
  /** @param CombinedAudienceTargetingSetting[] */
  public function setSettings($settings)
  {
    $this->settings = $settings;
  }
  /** @return CombinedAudienceTargetingSetting[] */
  public function getSettings()
  {
    return $this->settings;
  }
}

class CombinedAudienceTargetingSetting extends \Google\Model
{
  /** @var string */
  public $combinedAudienceId;

  /** @param string */
  public function setCombinedAudienceId($combinedAudienceId)
  {
    $this->combinedAudienceId = $combinedAudienceId;
  }
  /** @return string */
  public function getCombinedAudienceId()
  {
    return $this->combinedAudienceId;
  }
}

class ContactInfo extends \Google\Collection
{
  /** @var string */
  public $countryCode;
  /** @var string[] */
  public $hashedEmails;
  /** @var string */
  public $hashedFirstName;
  /** @var string */
  public $hashedLastName;
  /** @var string[] */
  public $hashedPhoneNumbers;
  /** @var string[] */
  public $zipCodes;
  protected $collection_key = 'zipCodes';
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
  /** @param string[] */
  public function setHashedEmails($hashedEmails)
  {
    $this->hashedEmails = $hashedEmails;
  }
  /** @return string[] */
  public function getHashedEmails()
  {
    return $this->hashedEmails;
  }
  /** @param string */
  public function setHashedFirstName($hashedFirstName)
  {
    $this->hashedFirstName = $hashedFirstName;
  }
  /** @return string */
  public function getHashedFirstName()
  {
    return $this->hashedFirstName;
  }
  /** @param string */
  public function setHashedLastName($hashedLastName)
  {
    $this->hashedLastName = $hashedLastName;
  }
  /** @return string */
  public function getHashedLastName()
  {
    return $this->hashedLastName;
  }
  /** @param string[] */
  public function setHashedPhoneNumbers($hashedPhoneNumbers)
  {
    $this->hashedPhoneNumbers = $hashedPhoneNumbers;
  }
  /** @return string[] */
  public function getHashedPhoneNumbers()
  {
    return $this->hashedPhoneNumbers;
  }
  /** @param string[] */
  public function setZipCodes($zipCodes)
  {
    $this->zipCodes = $zipCodes;
  }
  /** @return string[] */
  public function getZipCodes()
  {
    return $this->zipCodes;
  }
}

class ContactInfoList extends \Google\Collection
{
  /** @var ContactInfo[] */
  public $contactInfos;
  protected $collection_key = 'contactInfos';
  protected $contactInfosType = ContactInfo::class;
  protected $contactInfosDataType = 'array';
  /** @param ContactInfo[] */
  public function setContactInfos($contactInfos)
  {
    $this->contactInfos = $contactInfos;
  }
  /** @return ContactInfo[] */
  public function getContactInfos()
  {
    return $this->contactInfos;
  }
}

class ContentDurationAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $contentDuration;
  /** @var string */
  public $targetingOptionId;

  /** @param string */
  public function setContentDuration($contentDuration)
  {
    $this->contentDuration = $contentDuration;
  }
  /** @return string */
  public function getContentDuration()
  {
    return $this->contentDuration;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class ContentDurationTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $contentDuration;

  /** @param string */
  public function setContentDuration($contentDuration)
  {
    $this->contentDuration = $contentDuration;
  }
  /** @return string */
  public function getContentDuration()
  {
    return $this->contentDuration;
  }
}

class ContentGenreAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $negative;
  /** @var string */
  public $targetingOptionId;

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
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class ContentGenreTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;

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

class ContentInstreamPositionAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $adType;
  /** @var string */
  public $contentInstreamPosition;

  /** @param string */
  public function setAdType($adType)
  {
    $this->adType = $adType;
  }
  /** @return string */
  public function getAdType()
  {
    return $this->adType;
  }
  /** @param string */
  public function setContentInstreamPosition($contentInstreamPosition)
  {
    $this->contentInstreamPosition = $contentInstreamPosition;
  }
  /** @return string */
  public function getContentInstreamPosition()
  {
    return $this->contentInstreamPosition;
  }
}

class ContentInstreamPositionTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $contentInstreamPosition;

  /** @param string */
  public function setContentInstreamPosition($contentInstreamPosition)
  {
    $this->contentInstreamPosition = $contentInstreamPosition;
  }
  /** @return string */
  public function getContentInstreamPosition()
  {
    return $this->contentInstreamPosition;
  }
}

class ContentOutstreamPositionAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $adType;
  /** @var string */
  public $contentOutstreamPosition;

  /** @param string */
  public function setAdType($adType)
  {
    $this->adType = $adType;
  }
  /** @return string */
  public function getAdType()
  {
    return $this->adType;
  }
  /** @param string */
  public function setContentOutstreamPosition($contentOutstreamPosition)
  {
    $this->contentOutstreamPosition = $contentOutstreamPosition;
  }
  /** @return string */
  public function getContentOutstreamPosition()
  {
    return $this->contentOutstreamPosition;
  }
}

class ContentOutstreamPositionTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $contentOutstreamPosition;

  /** @param string */
  public function setContentOutstreamPosition($contentOutstreamPosition)
  {
    $this->contentOutstreamPosition = $contentOutstreamPosition;
  }
  /** @return string */
  public function getContentOutstreamPosition()
  {
    return $this->contentOutstreamPosition;
  }
}

class ContentStreamTypeAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $contentStreamType;
  /** @var string */
  public $targetingOptionId;

  /** @param string */
  public function setContentStreamType($contentStreamType)
  {
    $this->contentStreamType = $contentStreamType;
  }
  /** @return string */
  public function getContentStreamType()
  {
    return $this->contentStreamType;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class ContentStreamTypeTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $contentStreamType;

  /** @param string */
  public function setContentStreamType($contentStreamType)
  {
    $this->contentStreamType = $contentStreamType;
  }
  /** @return string */
  public function getContentStreamType()
  {
    return $this->contentStreamType;
  }
}

class ConversionCountingConfig extends \Google\Collection
{
  /** @var TrackingFloodlightActivityConfig[] */
  public $floodlightActivityConfigs;
  /** @var string */
  public $postViewCountPercentageMillis;
  protected $collection_key = 'floodlightActivityConfigs';
  protected $floodlightActivityConfigsType = TrackingFloodlightActivityConfig::class;
  protected $floodlightActivityConfigsDataType = 'array';
  /** @param TrackingFloodlightActivityConfig[] */
  public function setFloodlightActivityConfigs($floodlightActivityConfigs)
  {
    $this->floodlightActivityConfigs = $floodlightActivityConfigs;
  }
  /** @return TrackingFloodlightActivityConfig[] */
  public function getFloodlightActivityConfigs()
  {
    return $this->floodlightActivityConfigs;
  }
  /** @param string */
  public function setPostViewCountPercentageMillis($postViewCountPercentageMillis)
  {
    $this->postViewCountPercentageMillis = $postViewCountPercentageMillis;
  }
  /** @return string */
  public function getPostViewCountPercentageMillis()
  {
    return $this->postViewCountPercentageMillis;
  }
}

class CounterEvent extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $reportingName;

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
  public function setReportingName($reportingName)
  {
    $this->reportingName = $reportingName;
  }
  /** @return string */
  public function getReportingName()
  {
    return $this->reportingName;
  }
}

class CreateAssetRequest extends \Google\Model
{
  /** @var string */
  public $filename;

  /** @param string */
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  /** @return string */
  public function getFilename()
  {
    return $this->filename;
  }
}

class CreateAssetResponse extends \Google\Model
{
  /** @var Asset */
  public $asset;
  protected $assetType = Asset::class;
  protected $assetDataType = '';
  /** @param Asset */
  public function setAsset(Asset $asset)
  {
    $this->asset = $asset;
  }
  /** @return Asset */
  public function getAsset()
  {
    return $this->asset;
  }
}

class CreateAssignedTargetingOptionsRequest extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $assignedTargetingOptions;
  /** @var string */
  public $targetingType;
  protected $collection_key = 'assignedTargetingOptions';
  protected $assignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $assignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setAssignedTargetingOptions($assignedTargetingOptions)
  {
    $this->assignedTargetingOptions = $assignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getAssignedTargetingOptions()
  {
    return $this->assignedTargetingOptions;
  }
  /** @param string */
  public function setTargetingType($targetingType)
  {
    $this->targetingType = $targetingType;
  }
  /** @return string */
  public function getTargetingType()
  {
    return $this->targetingType;
  }
}

class CreateSdfDownloadTaskRequest extends \Google\Model
{
  /** @var string */
  public $advertiserId;
  /** @var IdFilter */
  public $idFilter;
  /** @var InventorySourceFilter */
  public $inventorySourceFilter;
  /** @var ParentEntityFilter */
  public $parentEntityFilter;
  /** @var string */
  public $partnerId;
  /** @var string */
  public $version;
  protected $idFilterType = IdFilter::class;
  protected $idFilterDataType = '';
  protected $inventorySourceFilterType = InventorySourceFilter::class;
  protected $inventorySourceFilterDataType = '';
  protected $parentEntityFilterType = ParentEntityFilter::class;
  protected $parentEntityFilterDataType = '';
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
  /** @param IdFilter */
  public function setIdFilter(IdFilter $idFilter)
  {
    $this->idFilter = $idFilter;
  }
  /** @return IdFilter */
  public function getIdFilter()
  {
    return $this->idFilter;
  }
  /** @param InventorySourceFilter */
  public function setInventorySourceFilter(InventorySourceFilter $inventorySourceFilter)
  {
    $this->inventorySourceFilter = $inventorySourceFilter;
  }
  /** @return InventorySourceFilter */
  public function getInventorySourceFilter()
  {
    return $this->inventorySourceFilter;
  }
  /** @param ParentEntityFilter */
  public function setParentEntityFilter(ParentEntityFilter $parentEntityFilter)
  {
    $this->parentEntityFilter = $parentEntityFilter;
  }
  /** @return ParentEntityFilter */
  public function getParentEntityFilter()
  {
    return $this->parentEntityFilter;
  }
  /** @param string */
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
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

class Creative extends \Google\Collection
{
  /** @var Dimensions[] */
  public $additionalDimensions;
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $appendedTag;
  /** @var AssetAssociation[] */
  public $assets;
  /** @var string */
  public $cmPlacementId;
  /** @var CmTrackingAd */
  public $cmTrackingAd;
  /** @var string[] */
  public $companionCreativeIds;
  /** @var CounterEvent[] */
  public $counterEvents;
  /** @var string */
  public $createTime;
  /** @var string[] */
  public $creativeAttributes;
  /** @var string */
  public $creativeId;
  /** @var string */
  public $creativeType;
  /** @var Dimensions */
  public $dimensions;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $dynamic;
  /** @var string */
  public $entityStatus;
  /** @var ExitEvent[] */
  public $exitEvents;
  /** @var bool */
  public $expandOnHover;
  /** @var string */
  public $expandingDirection;
  /** @var string */
  public $hostingSource;
  /** @var bool */
  public $html5Video;
  /** @var bool */
  public $iasCampaignMonitoring;
  /** @var string */
  public $integrationCode;
  /** @var string */
  public $jsTrackerUrl;
  /** @var string[] */
  public $lineItemIds;
  /** @var string */
  public $mediaDuration;
  /** @var bool */
  public $mp3Audio;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var ObaIcon */
  public $obaIcon;
  /** @var bool */
  public $oggAudio;
  /** @var AudioVideoOffset */
  public $progressOffset;
  /** @var bool */
  public $requireHtml5;
  /** @var bool */
  public $requireMraid;
  /** @var bool */
  public $requirePingForAttribution;
  /** @var ReviewStatusInfo */
  public $reviewStatus;
  /** @var AudioVideoOffset */
  public $skipOffset;
  /** @var bool */
  public $skippable;
  /** @var string */
  public $thirdPartyTag;
  /** @var ThirdPartyUrl[] */
  public $thirdPartyUrls;
  /** @var TimerEvent[] */
  public $timerEvents;
  /** @var string[] */
  public $trackerUrls;
  /** @var Transcode[] */
  public $transcodes;
  /** @var UniversalAdId */
  public $universalAdId;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $vastTagUrl;
  /** @var bool */
  public $vpaid;
  protected $collection_key = 'transcodes';
  protected $additionalDimensionsType = Dimensions::class;
  protected $additionalDimensionsDataType = 'array';
  protected $assetsType = AssetAssociation::class;
  protected $assetsDataType = 'array';
  protected $cmTrackingAdType = CmTrackingAd::class;
  protected $cmTrackingAdDataType = '';
  protected $counterEventsType = CounterEvent::class;
  protected $counterEventsDataType = 'array';
  protected $dimensionsType = Dimensions::class;
  protected $dimensionsDataType = '';
  protected $exitEventsType = ExitEvent::class;
  protected $exitEventsDataType = 'array';
  protected $obaIconType = ObaIcon::class;
  protected $obaIconDataType = '';
  protected $progressOffsetType = AudioVideoOffset::class;
  protected $progressOffsetDataType = '';
  protected $reviewStatusType = ReviewStatusInfo::class;
  protected $reviewStatusDataType = '';
  protected $skipOffsetType = AudioVideoOffset::class;
  protected $skipOffsetDataType = '';
  protected $thirdPartyUrlsType = ThirdPartyUrl::class;
  protected $thirdPartyUrlsDataType = 'array';
  protected $timerEventsType = TimerEvent::class;
  protected $timerEventsDataType = 'array';
  protected $transcodesType = Transcode::class;
  protected $transcodesDataType = 'array';
  protected $universalAdIdType = UniversalAdId::class;
  protected $universalAdIdDataType = '';
  /** @param Dimensions[] */
  public function setAdditionalDimensions($additionalDimensions)
  {
    $this->additionalDimensions = $additionalDimensions;
  }
  /** @return Dimensions[] */
  public function getAdditionalDimensions()
  {
    return $this->additionalDimensions;
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
  public function setAppendedTag($appendedTag)
  {
    $this->appendedTag = $appendedTag;
  }
  /** @return string */
  public function getAppendedTag()
  {
    return $this->appendedTag;
  }
  /** @param AssetAssociation[] */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /** @return AssetAssociation[] */
  public function getAssets()
  {
    return $this->assets;
  }
  /** @param string */
  public function setCmPlacementId($cmPlacementId)
  {
    $this->cmPlacementId = $cmPlacementId;
  }
  /** @return string */
  public function getCmPlacementId()
  {
    return $this->cmPlacementId;
  }
  /** @param CmTrackingAd */
  public function setCmTrackingAd(CmTrackingAd $cmTrackingAd)
  {
    $this->cmTrackingAd = $cmTrackingAd;
  }
  /** @return CmTrackingAd */
  public function getCmTrackingAd()
  {
    return $this->cmTrackingAd;
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
  /** @param CounterEvent[] */
  public function setCounterEvents($counterEvents)
  {
    $this->counterEvents = $counterEvents;
  }
  /** @return CounterEvent[] */
  public function getCounterEvents()
  {
    return $this->counterEvents;
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
  /** @param string[] */
  public function setCreativeAttributes($creativeAttributes)
  {
    $this->creativeAttributes = $creativeAttributes;
  }
  /** @return string[] */
  public function getCreativeAttributes()
  {
    return $this->creativeAttributes;
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
  public function setCreativeType($creativeType)
  {
    $this->creativeType = $creativeType;
  }
  /** @return string */
  public function getCreativeType()
  {
    return $this->creativeType;
  }
  /** @param Dimensions */
  public function setDimensions(Dimensions $dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimensions */
  public function getDimensions()
  {
    return $this->dimensions;
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
  public function setDynamic($dynamic)
  {
    $this->dynamic = $dynamic;
  }
  /** @return bool */
  public function getDynamic()
  {
    return $this->dynamic;
  }
  /** @param string */
  public function setEntityStatus($entityStatus)
  {
    $this->entityStatus = $entityStatus;
  }
  /** @return string */
  public function getEntityStatus()
  {
    return $this->entityStatus;
  }
  /** @param ExitEvent[] */
  public function setExitEvents($exitEvents)
  {
    $this->exitEvents = $exitEvents;
  }
  /** @return ExitEvent[] */
  public function getExitEvents()
  {
    return $this->exitEvents;
  }
  /** @param bool */
  public function setExpandOnHover($expandOnHover)
  {
    $this->expandOnHover = $expandOnHover;
  }
  /** @return bool */
  public function getExpandOnHover()
  {
    return $this->expandOnHover;
  }
  /** @param string */
  public function setExpandingDirection($expandingDirection)
  {
    $this->expandingDirection = $expandingDirection;
  }
  /** @return string */
  public function getExpandingDirection()
  {
    return $this->expandingDirection;
  }
  /** @param string */
  public function setHostingSource($hostingSource)
  {
    $this->hostingSource = $hostingSource;
  }
  /** @return string */
  public function getHostingSource()
  {
    return $this->hostingSource;
  }
  /** @param bool */
  public function setHtml5Video($html5Video)
  {
    $this->html5Video = $html5Video;
  }
  /** @return bool */
  public function getHtml5Video()
  {
    return $this->html5Video;
  }
  /** @param bool */
  public function setIasCampaignMonitoring($iasCampaignMonitoring)
  {
    $this->iasCampaignMonitoring = $iasCampaignMonitoring;
  }
  /** @return bool */
  public function getIasCampaignMonitoring()
  {
    return $this->iasCampaignMonitoring;
  }
  /** @param string */
  public function setIntegrationCode($integrationCode)
  {
    $this->integrationCode = $integrationCode;
  }
  /** @return string */
  public function getIntegrationCode()
  {
    return $this->integrationCode;
  }
  /** @param string */
  public function setJsTrackerUrl($jsTrackerUrl)
  {
    $this->jsTrackerUrl = $jsTrackerUrl;
  }
  /** @return string */
  public function getJsTrackerUrl()
  {
    return $this->jsTrackerUrl;
  }
  /** @param string[] */
  public function setLineItemIds($lineItemIds)
  {
    $this->lineItemIds = $lineItemIds;
  }
  /** @return string[] */
  public function getLineItemIds()
  {
    return $this->lineItemIds;
  }
  /** @param string */
  public function setMediaDuration($mediaDuration)
  {
    $this->mediaDuration = $mediaDuration;
  }
  /** @return string */
  public function getMediaDuration()
  {
    return $this->mediaDuration;
  }
  /** @param bool */
  public function setMp3Audio($mp3Audio)
  {
    $this->mp3Audio = $mp3Audio;
  }
  /** @return bool */
  public function getMp3Audio()
  {
    return $this->mp3Audio;
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
  /** @param bool */
  public function setOggAudio($oggAudio)
  {
    $this->oggAudio = $oggAudio;
  }
  /** @return bool */
  public function getOggAudio()
  {
    return $this->oggAudio;
  }
  /** @param AudioVideoOffset */
  public function setProgressOffset(AudioVideoOffset $progressOffset)
  {
    $this->progressOffset = $progressOffset;
  }
  /** @return AudioVideoOffset */
  public function getProgressOffset()
  {
    return $this->progressOffset;
  }
  /** @param bool */
  public function setRequireHtml5($requireHtml5)
  {
    $this->requireHtml5 = $requireHtml5;
  }
  /** @return bool */
  public function getRequireHtml5()
  {
    return $this->requireHtml5;
  }
  /** @param bool */
  public function setRequireMraid($requireMraid)
  {
    $this->requireMraid = $requireMraid;
  }
  /** @return bool */
  public function getRequireMraid()
  {
    return $this->requireMraid;
  }
  /** @param bool */
  public function setRequirePingForAttribution($requirePingForAttribution)
  {
    $this->requirePingForAttribution = $requirePingForAttribution;
  }
  /** @return bool */
  public function getRequirePingForAttribution()
  {
    return $this->requirePingForAttribution;
  }
  /** @param ReviewStatusInfo */
  public function setReviewStatus(ReviewStatusInfo $reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  /** @return ReviewStatusInfo */
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  /** @param AudioVideoOffset */
  public function setSkipOffset(AudioVideoOffset $skipOffset)
  {
    $this->skipOffset = $skipOffset;
  }
  /** @return AudioVideoOffset */
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
  /** @param string */
  public function setThirdPartyTag($thirdPartyTag)
  {
    $this->thirdPartyTag = $thirdPartyTag;
  }
  /** @return string */
  public function getThirdPartyTag()
  {
    return $this->thirdPartyTag;
  }
  /** @param ThirdPartyUrl[] */
  public function setThirdPartyUrls($thirdPartyUrls)
  {
    $this->thirdPartyUrls = $thirdPartyUrls;
  }
  /** @return ThirdPartyUrl[] */
  public function getThirdPartyUrls()
  {
    return $this->thirdPartyUrls;
  }
  /** @param TimerEvent[] */
  public function setTimerEvents($timerEvents)
  {
    $this->timerEvents = $timerEvents;
  }
  /** @return TimerEvent[] */
  public function getTimerEvents()
  {
    return $this->timerEvents;
  }
  /** @param string[] */
  public function setTrackerUrls($trackerUrls)
  {
    $this->trackerUrls = $trackerUrls;
  }
  /** @return string[] */
  public function getTrackerUrls()
  {
    return $this->trackerUrls;
  }
  /** @param Transcode[] */
  public function setTranscodes($transcodes)
  {
    $this->transcodes = $transcodes;
  }
  /** @return Transcode[] */
  public function getTranscodes()
  {
    return $this->transcodes;
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
  /** @param string */
  public function setVastTagUrl($vastTagUrl)
  {
    $this->vastTagUrl = $vastTagUrl;
  }
  /** @return string */
  public function getVastTagUrl()
  {
    return $this->vastTagUrl;
  }
  /** @param bool */
  public function setVpaid($vpaid)
  {
    $this->vpaid = $vpaid;
  }
  /** @return bool */
  public function getVpaid()
  {
    return $this->vpaid;
  }
}

class CreativeConfig extends \Google\Model
{
  /** @var string */
  public $creativeType;
  /** @var InventorySourceDisplayCreativeConfig */
  public $displayCreativeConfig;
  /** @var InventorySourceVideoCreativeConfig */
  public $videoCreativeConfig;
  protected $displayCreativeConfigType = InventorySourceDisplayCreativeConfig::class;
  protected $displayCreativeConfigDataType = '';
  protected $videoCreativeConfigType = InventorySourceVideoCreativeConfig::class;
  protected $videoCreativeConfigDataType = '';
  /** @param string */
  public function setCreativeType($creativeType)
  {
    $this->creativeType = $creativeType;
  }
  /** @return string */
  public function getCreativeType()
  {
    return $this->creativeType;
  }
  /** @param InventorySourceDisplayCreativeConfig */
  public function setDisplayCreativeConfig(InventorySourceDisplayCreativeConfig $displayCreativeConfig)
  {
    $this->displayCreativeConfig = $displayCreativeConfig;
  }
  /** @return InventorySourceDisplayCreativeConfig */
  public function getDisplayCreativeConfig()
  {
    return $this->displayCreativeConfig;
  }
  /** @param InventorySourceVideoCreativeConfig */
  public function setVideoCreativeConfig(InventorySourceVideoCreativeConfig $videoCreativeConfig)
  {
    $this->videoCreativeConfig = $videoCreativeConfig;
  }
  /** @return InventorySourceVideoCreativeConfig */
  public function getVideoCreativeConfig()
  {
    return $this->videoCreativeConfig;
  }
}

class CustomBiddingAlgorithm extends \Google\Collection
{
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $customBiddingAlgorithmId;
  /** @var string */
  public $customBiddingAlgorithmType;
  /** @var string */
  public $displayName;
  /** @var string */
  public $entityStatus;
  /** @var CustomBiddingModelDetails[] */
  public $modelDetails;
  /** @var string */
  public $name;
  /** @var string */
  public $partnerId;
  /** @var string[] */
  public $sharedAdvertiserIds;
  protected $collection_key = 'sharedAdvertiserIds';
  protected $modelDetailsType = CustomBiddingModelDetails::class;
  protected $modelDetailsDataType = 'array';
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
  public function setCustomBiddingAlgorithmId($customBiddingAlgorithmId)
  {
    $this->customBiddingAlgorithmId = $customBiddingAlgorithmId;
  }
  /** @return string */
  public function getCustomBiddingAlgorithmId()
  {
    return $this->customBiddingAlgorithmId;
  }
  /** @param string */
  public function setCustomBiddingAlgorithmType($customBiddingAlgorithmType)
  {
    $this->customBiddingAlgorithmType = $customBiddingAlgorithmType;
  }
  /** @return string */
  public function getCustomBiddingAlgorithmType()
  {
    return $this->customBiddingAlgorithmType;
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
  public function setEntityStatus($entityStatus)
  {
    $this->entityStatus = $entityStatus;
  }
  /** @return string */
  public function getEntityStatus()
  {
    return $this->entityStatus;
  }
  /** @param CustomBiddingModelDetails[] */
  public function setModelDetails($modelDetails)
  {
    $this->modelDetails = $modelDetails;
  }
  /** @return CustomBiddingModelDetails[] */
  public function getModelDetails()
  {
    return $this->modelDetails;
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
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
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

class CustomBiddingModelDetails extends \Google\Model
{
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $readinessState;
  /** @var string */
  public $suspensionState;

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
  public function setReadinessState($readinessState)
  {
    $this->readinessState = $readinessState;
  }
  /** @return string */
  public function getReadinessState()
  {
    return $this->readinessState;
  }
  /** @param string */
  public function setSuspensionState($suspensionState)
  {
    $this->suspensionState = $suspensionState;
  }
  /** @return string */
  public function getSuspensionState()
  {
    return $this->suspensionState;
  }
}

class CustomBiddingScript extends \Google\Collection
{
  /** @var bool */
  public $active;
  /** @var string */
  public $createTime;
  /** @var string */
  public $customBiddingAlgorithmId;
  /** @var string */
  public $customBiddingScriptId;
  /** @var ScriptError[] */
  public $errors;
  /** @var string */
  public $name;
  /** @var CustomBiddingScriptRef */
  public $script;
  /** @var string */
  public $state;
  protected $collection_key = 'errors';
  protected $errorsType = ScriptError::class;
  protected $errorsDataType = 'array';
  protected $scriptType = CustomBiddingScriptRef::class;
  protected $scriptDataType = '';
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
  public function setCustomBiddingAlgorithmId($customBiddingAlgorithmId)
  {
    $this->customBiddingAlgorithmId = $customBiddingAlgorithmId;
  }
  /** @return string */
  public function getCustomBiddingAlgorithmId()
  {
    return $this->customBiddingAlgorithmId;
  }
  /** @param string */
  public function setCustomBiddingScriptId($customBiddingScriptId)
  {
    $this->customBiddingScriptId = $customBiddingScriptId;
  }
  /** @return string */
  public function getCustomBiddingScriptId()
  {
    return $this->customBiddingScriptId;
  }
  /** @param ScriptError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ScriptError[] */
  public function getErrors()
  {
    return $this->errors;
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
  /** @param CustomBiddingScriptRef */
  public function setScript(CustomBiddingScriptRef $script)
  {
    $this->script = $script;
  }
  /** @return CustomBiddingScriptRef */
  public function getScript()
  {
    return $this->script;
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

class CustomBiddingScriptRef extends \Google\Model
{
  /** @var string */
  public $resourceName;

  /** @param string */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

class CustomList extends \Google\Model
{
  /** @var string */
  public $customListId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;

  /** @param string */
  public function setCustomListId($customListId)
  {
    $this->customListId = $customListId;
  }
  /** @return string */
  public function getCustomListId()
  {
    return $this->customListId;
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

class CustomListGroup extends \Google\Collection
{
  /** @var CustomListTargetingSetting[] */
  public $settings;
  protected $collection_key = 'settings';
  protected $settingsType = CustomListTargetingSetting::class;
  protected $settingsDataType = 'array';
  /** @param CustomListTargetingSetting[] */
  public function setSettings($settings)
  {
    $this->settings = $settings;
  }
  /** @return CustomListTargetingSetting[] */
  public function getSettings()
  {
    return $this->settings;
  }
}

class CustomListTargetingSetting extends \Google\Model
{
  /** @var string */
  public $customListId;

  /** @param string */
  public function setCustomListId($customListId)
  {
    $this->customListId = $customListId;
  }
  /** @return string */
  public function getCustomListId()
  {
    return $this->customListId;
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

class DateRange extends \Google\Model
{
  /** @var Date */
  public $endDate;
  /** @var Date */
  public $startDate;
  protected $endDateType = Date::class;
  protected $endDateDataType = '';
  protected $startDateType = Date::class;
  protected $startDateDataType = '';
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
}

class DayAndTimeAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $dayOfWeek;
  /** @var int */
  public $endHour;
  /** @var int */
  public $startHour;
  /** @var string */
  public $timeZoneResolution;

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
  /** @param int */
  public function setEndHour($endHour)
  {
    $this->endHour = $endHour;
  }
  /** @return int */
  public function getEndHour()
  {
    return $this->endHour;
  }
  /** @param int */
  public function setStartHour($startHour)
  {
    $this->startHour = $startHour;
  }
  /** @return int */
  public function getStartHour()
  {
    return $this->startHour;
  }
  /** @param string */
  public function setTimeZoneResolution($timeZoneResolution)
  {
    $this->timeZoneResolution = $timeZoneResolution;
  }
  /** @return string */
  public function getTimeZoneResolution()
  {
    return $this->timeZoneResolution;
  }
}

class DeactivateManualTriggerRequest extends \Google\Model
{
}

class DeleteAssignedTargetingOptionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $assignedTargetingOptionIds;
  /** @var string */
  public $targetingType;
  protected $collection_key = 'assignedTargetingOptionIds';
  /** @param string[] */
  public function setAssignedTargetingOptionIds($assignedTargetingOptionIds)
  {
    $this->assignedTargetingOptionIds = $assignedTargetingOptionIds;
  }
  /** @return string[] */
  public function getAssignedTargetingOptionIds()
  {
    return $this->assignedTargetingOptionIds;
  }
  /** @param string */
  public function setTargetingType($targetingType)
  {
    $this->targetingType = $targetingType;
  }
  /** @return string */
  public function getTargetingType()
  {
    return $this->targetingType;
  }
}

class DeviceMakeModelAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $negative;
  /** @var string */
  public $targetingOptionId;

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
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class DeviceMakeModelTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;

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

class DeviceTypeAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $deviceType;
  public $youtubeAndPartnersBidMultiplier;

  /** @param string */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /** @return string */
  public function getDeviceType()
  {
    return $this->deviceType;
  }
  public function setYoutubeAndPartnersBidMultiplier($youtubeAndPartnersBidMultiplier)
  {
    $this->youtubeAndPartnersBidMultiplier = $youtubeAndPartnersBidMultiplier;
  }
  public function getYoutubeAndPartnersBidMultiplier()
  {
    return $this->youtubeAndPartnersBidMultiplier;
  }
}

class DeviceTypeTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $deviceType;

  /** @param string */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /** @return string */
  public function getDeviceType()
  {
    return $this->deviceType;
  }
}

class DigitalContentLabelAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $excludedContentRatingTier;

  /** @param string */
  public function setExcludedContentRatingTier($excludedContentRatingTier)
  {
    $this->excludedContentRatingTier = $excludedContentRatingTier;
  }
  /** @return string */
  public function getExcludedContentRatingTier()
  {
    return $this->excludedContentRatingTier;
  }
}

class DigitalContentLabelTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $contentRatingTier;

  /** @param string */
  public function setContentRatingTier($contentRatingTier)
  {
    $this->contentRatingTier = $contentRatingTier;
  }
  /** @return string */
  public function getContentRatingTier()
  {
    return $this->contentRatingTier;
  }
}

class Dimensions extends \Google\Model
{
  /** @var int */
  public $heightPixels;
  /** @var int */
  public $widthPixels;

  /** @param int */
  public function setHeightPixels($heightPixels)
  {
    $this->heightPixels = $heightPixels;
  }
  /** @return int */
  public function getHeightPixels()
  {
    return $this->heightPixels;
  }
  /** @param int */
  public function setWidthPixels($widthPixels)
  {
    $this->widthPixels = $widthPixels;
  }
  /** @return int */
  public function getWidthPixels()
  {
    return $this->widthPixels;
  }
}

class DisplayvideoEmpty extends \Google\Model
{
}

class DoubleVerify extends \Google\Collection
{
  /** @var DoubleVerifyAppStarRating */
  public $appStarRating;
  /** @var string[] */
  public $avoidedAgeRatings;
  /** @var DoubleVerifyBrandSafetyCategories */
  public $brandSafetyCategories;
  /** @var string */
  public $customSegmentId;
  /** @var DoubleVerifyDisplayViewability */
  public $displayViewability;
  /** @var DoubleVerifyFraudInvalidTraffic */
  public $fraudInvalidTraffic;
  /** @var DoubleVerifyVideoViewability */
  public $videoViewability;
  protected $collection_key = 'avoidedAgeRatings';
  protected $appStarRatingType = DoubleVerifyAppStarRating::class;
  protected $appStarRatingDataType = '';
  protected $brandSafetyCategoriesType = DoubleVerifyBrandSafetyCategories::class;
  protected $brandSafetyCategoriesDataType = '';
  protected $displayViewabilityType = DoubleVerifyDisplayViewability::class;
  protected $displayViewabilityDataType = '';
  protected $fraudInvalidTrafficType = DoubleVerifyFraudInvalidTraffic::class;
  protected $fraudInvalidTrafficDataType = '';
  protected $videoViewabilityType = DoubleVerifyVideoViewability::class;
  protected $videoViewabilityDataType = '';
  /** @param DoubleVerifyAppStarRating */
  public function setAppStarRating(DoubleVerifyAppStarRating $appStarRating)
  {
    $this->appStarRating = $appStarRating;
  }
  /** @return DoubleVerifyAppStarRating */
  public function getAppStarRating()
  {
    return $this->appStarRating;
  }
  /** @param string[] */
  public function setAvoidedAgeRatings($avoidedAgeRatings)
  {
    $this->avoidedAgeRatings = $avoidedAgeRatings;
  }
  /** @return string[] */
  public function getAvoidedAgeRatings()
  {
    return $this->avoidedAgeRatings;
  }
  /** @param DoubleVerifyBrandSafetyCategories */
  public function setBrandSafetyCategories(DoubleVerifyBrandSafetyCategories $brandSafetyCategories)
  {
    $this->brandSafetyCategories = $brandSafetyCategories;
  }
  /** @return DoubleVerifyBrandSafetyCategories */
  public function getBrandSafetyCategories()
  {
    return $this->brandSafetyCategories;
  }
  /** @param string */
  public function setCustomSegmentId($customSegmentId)
  {
    $this->customSegmentId = $customSegmentId;
  }
  /** @return string */
  public function getCustomSegmentId()
  {
    return $this->customSegmentId;
  }
  /** @param DoubleVerifyDisplayViewability */
  public function setDisplayViewability(DoubleVerifyDisplayViewability $displayViewability)
  {
    $this->displayViewability = $displayViewability;
  }
  /** @return DoubleVerifyDisplayViewability */
  public function getDisplayViewability()
  {
    return $this->displayViewability;
  }
  /** @param DoubleVerifyFraudInvalidTraffic */
  public function setFraudInvalidTraffic(DoubleVerifyFraudInvalidTraffic $fraudInvalidTraffic)
  {
    $this->fraudInvalidTraffic = $fraudInvalidTraffic;
  }
  /** @return DoubleVerifyFraudInvalidTraffic */
  public function getFraudInvalidTraffic()
  {
    return $this->fraudInvalidTraffic;
  }
  /** @param DoubleVerifyVideoViewability */
  public function setVideoViewability(DoubleVerifyVideoViewability $videoViewability)
  {
    $this->videoViewability = $videoViewability;
  }
  /** @return DoubleVerifyVideoViewability */
  public function getVideoViewability()
  {
    return $this->videoViewability;
  }
}

class DoubleVerifyAppStarRating extends \Google\Model
{
  /** @var bool */
  public $avoidInsufficientStarRating;
  /** @var string */
  public $avoidedStarRating;

  /** @param bool */
  public function setAvoidInsufficientStarRating($avoidInsufficientStarRating)
  {
    $this->avoidInsufficientStarRating = $avoidInsufficientStarRating;
  }
  /** @return bool */
  public function getAvoidInsufficientStarRating()
  {
    return $this->avoidInsufficientStarRating;
  }
  /** @param string */
  public function setAvoidedStarRating($avoidedStarRating)
  {
    $this->avoidedStarRating = $avoidedStarRating;
  }
  /** @return string */
  public function getAvoidedStarRating()
  {
    return $this->avoidedStarRating;
  }
}

class DoubleVerifyBrandSafetyCategories extends \Google\Collection
{
  /** @var bool */
  public $avoidUnknownBrandSafetyCategory;
  /** @var string[] */
  public $avoidedHighSeverityCategories;
  /** @var string[] */
  public $avoidedMediumSeverityCategories;
  protected $collection_key = 'avoidedMediumSeverityCategories';
  /** @param bool */
  public function setAvoidUnknownBrandSafetyCategory($avoidUnknownBrandSafetyCategory)
  {
    $this->avoidUnknownBrandSafetyCategory = $avoidUnknownBrandSafetyCategory;
  }
  /** @return bool */
  public function getAvoidUnknownBrandSafetyCategory()
  {
    return $this->avoidUnknownBrandSafetyCategory;
  }
  /** @param string[] */
  public function setAvoidedHighSeverityCategories($avoidedHighSeverityCategories)
  {
    $this->avoidedHighSeverityCategories = $avoidedHighSeverityCategories;
  }
  /** @return string[] */
  public function getAvoidedHighSeverityCategories()
  {
    return $this->avoidedHighSeverityCategories;
  }
  /** @param string[] */
  public function setAvoidedMediumSeverityCategories($avoidedMediumSeverityCategories)
  {
    $this->avoidedMediumSeverityCategories = $avoidedMediumSeverityCategories;
  }
  /** @return string[] */
  public function getAvoidedMediumSeverityCategories()
  {
    return $this->avoidedMediumSeverityCategories;
  }
}

class DoubleVerifyDisplayViewability extends \Google\Model
{
  /** @var string */
  public $iab;
  /** @var string */
  public $viewableDuring;

  /** @param string */
  public function setIab($iab)
  {
    $this->iab = $iab;
  }
  /** @return string */
  public function getIab()
  {
    return $this->iab;
  }
  /** @param string */
  public function setViewableDuring($viewableDuring)
  {
    $this->viewableDuring = $viewableDuring;
  }
  /** @return string */
  public function getViewableDuring()
  {
    return $this->viewableDuring;
  }
}

class DoubleVerifyFraudInvalidTraffic extends \Google\Model
{
  /** @var bool */
  public $avoidInsufficientOption;
  /** @var string */
  public $avoidedFraudOption;

  /** @param bool */
  public function setAvoidInsufficientOption($avoidInsufficientOption)
  {
    $this->avoidInsufficientOption = $avoidInsufficientOption;
  }
  /** @return bool */
  public function getAvoidInsufficientOption()
  {
    return $this->avoidInsufficientOption;
  }
  /** @param string */
  public function setAvoidedFraudOption($avoidedFraudOption)
  {
    $this->avoidedFraudOption = $avoidedFraudOption;
  }
  /** @return string */
  public function getAvoidedFraudOption()
  {
    return $this->avoidedFraudOption;
  }
}

class DoubleVerifyVideoViewability extends \Google\Model
{
  /** @var string */
  public $playerImpressionRate;
  /** @var string */
  public $videoIab;
  /** @var string */
  public $videoViewableRate;

  /** @param string */
  public function setPlayerImpressionRate($playerImpressionRate)
  {
    $this->playerImpressionRate = $playerImpressionRate;
  }
  /** @return string */
  public function getPlayerImpressionRate()
  {
    return $this->playerImpressionRate;
  }
  /** @param string */
  public function setVideoIab($videoIab)
  {
    $this->videoIab = $videoIab;
  }
  /** @return string */
  public function getVideoIab()
  {
    return $this->videoIab;
  }
  /** @param string */
  public function setVideoViewableRate($videoViewableRate)
  {
    $this->videoViewableRate = $videoViewableRate;
  }
  /** @return string */
  public function getVideoViewableRate()
  {
    return $this->videoViewableRate;
  }
}

class DuplicateLineItemRequest extends \Google\Model
{
  /** @var string */
  public $targetDisplayName;

  /** @param string */
  public function setTargetDisplayName($targetDisplayName)
  {
    $this->targetDisplayName = $targetDisplayName;
  }
  /** @return string */
  public function getTargetDisplayName()
  {
    return $this->targetDisplayName;
  }
}

class DuplicateLineItemResponse extends \Google\Model
{
  /** @var string */
  public $duplicateLineItemId;

  /** @param string */
  public function setDuplicateLineItemId($duplicateLineItemId)
  {
    $this->duplicateLineItemId = $duplicateLineItemId;
  }
  /** @return string */
  public function getDuplicateLineItemId()
  {
    return $this->duplicateLineItemId;
  }
}

class EditCustomerMatchMembersRequest extends \Google\Model
{
  /** @var ContactInfoList */
  public $addedContactInfoList;
  /** @var MobileDeviceIdList */
  public $addedMobileDeviceIdList;
  /** @var string */
  public $advertiserId;
  protected $addedContactInfoListType = ContactInfoList::class;
  protected $addedContactInfoListDataType = '';
  protected $addedMobileDeviceIdListType = MobileDeviceIdList::class;
  protected $addedMobileDeviceIdListDataType = '';
  /** @param ContactInfoList */
  public function setAddedContactInfoList(ContactInfoList $addedContactInfoList)
  {
    $this->addedContactInfoList = $addedContactInfoList;
  }
  /** @return ContactInfoList */
  public function getAddedContactInfoList()
  {
    return $this->addedContactInfoList;
  }
  /** @param MobileDeviceIdList */
  public function setAddedMobileDeviceIdList(MobileDeviceIdList $addedMobileDeviceIdList)
  {
    $this->addedMobileDeviceIdList = $addedMobileDeviceIdList;
  }
  /** @return MobileDeviceIdList */
  public function getAddedMobileDeviceIdList()
  {
    return $this->addedMobileDeviceIdList;
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
}

class EditCustomerMatchMembersResponse extends \Google\Model
{
  /** @var string */
  public $firstAndThirdPartyAudienceId;

  /** @param string */
  public function setFirstAndThirdPartyAudienceId($firstAndThirdPartyAudienceId)
  {
    $this->firstAndThirdPartyAudienceId = $firstAndThirdPartyAudienceId;
  }
  /** @return string */
  public function getFirstAndThirdPartyAudienceId()
  {
    return $this->firstAndThirdPartyAudienceId;
  }
}

class EditGuaranteedOrderReadAccessorsRequest extends \Google\Collection
{
  /** @var string[] */
  public $addedAdvertisers;
  /** @var string */
  public $partnerId;
  /** @var bool */
  public $readAccessInherited;
  /** @var string[] */
  public $removedAdvertisers;
  protected $collection_key = 'removedAdvertisers';
  /** @param string[] */
  public function setAddedAdvertisers($addedAdvertisers)
  {
    $this->addedAdvertisers = $addedAdvertisers;
  }
  /** @return string[] */
  public function getAddedAdvertisers()
  {
    return $this->addedAdvertisers;
  }
  /** @param string */
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
  }
  /** @param bool */
  public function setReadAccessInherited($readAccessInherited)
  {
    $this->readAccessInherited = $readAccessInherited;
  }
  /** @return bool */
  public function getReadAccessInherited()
  {
    return $this->readAccessInherited;
  }
  /** @param string[] */
  public function setRemovedAdvertisers($removedAdvertisers)
  {
    $this->removedAdvertisers = $removedAdvertisers;
  }
  /** @return string[] */
  public function getRemovedAdvertisers()
  {
    return $this->removedAdvertisers;
  }
}

class EditGuaranteedOrderReadAccessorsResponse extends \Google\Collection
{
  /** @var bool */
  public $readAccessInherited;
  /** @var string[] */
  public $readAdvertiserIds;
  protected $collection_key = 'readAdvertiserIds';
  /** @param bool */
  public function setReadAccessInherited($readAccessInherited)
  {
    $this->readAccessInherited = $readAccessInherited;
  }
  /** @return bool */
  public function getReadAccessInherited()
  {
    return $this->readAccessInherited;
  }
  /** @param string[] */
  public function setReadAdvertiserIds($readAdvertiserIds)
  {
    $this->readAdvertiserIds = $readAdvertiserIds;
  }
  /** @return string[] */
  public function getReadAdvertiserIds()
  {
    return $this->readAdvertiserIds;
  }
}

class EditInventorySourceReadWriteAccessorsRequest extends \Google\Model
{
  /** @var EditInventorySourceReadWriteAccessorsRequestAdvertisersUpdate */
  public $advertisersUpdate;
  /** @var bool */
  public $assignPartner;
  /** @var string */
  public $partnerId;
  protected $advertisersUpdateType = EditInventorySourceReadWriteAccessorsRequestAdvertisersUpdate::class;
  protected $advertisersUpdateDataType = '';
  /** @param EditInventorySourceReadWriteAccessorsRequestAdvertisersUpdate */
  public function setAdvertisersUpdate(EditInventorySourceReadWriteAccessorsRequestAdvertisersUpdate $advertisersUpdate)
  {
    $this->advertisersUpdate = $advertisersUpdate;
  }
  /** @return EditInventorySourceReadWriteAccessorsRequestAdvertisersUpdate */
  public function getAdvertisersUpdate()
  {
    return $this->advertisersUpdate;
  }
  /** @param bool */
  public function setAssignPartner($assignPartner)
  {
    $this->assignPartner = $assignPartner;
  }
  /** @return bool */
  public function getAssignPartner()
  {
    return $this->assignPartner;
  }
  /** @param string */
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
  }
}

class EditInventorySourceReadWriteAccessorsRequestAdvertisersUpdate extends \Google\Collection
{
  /** @var string[] */
  public $addedAdvertisers;
  /** @var string[] */
  public $removedAdvertisers;
  protected $collection_key = 'removedAdvertisers';
  /** @param string[] */
  public function setAddedAdvertisers($addedAdvertisers)
  {
    $this->addedAdvertisers = $addedAdvertisers;
  }
  /** @return string[] */
  public function getAddedAdvertisers()
  {
    return $this->addedAdvertisers;
  }
  /** @param string[] */
  public function setRemovedAdvertisers($removedAdvertisers)
  {
    $this->removedAdvertisers = $removedAdvertisers;
  }
  /** @return string[] */
  public function getRemovedAdvertisers()
  {
    return $this->removedAdvertisers;
  }
}

class EnvironmentAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $environment;

  /** @param string */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return string */
  public function getEnvironment()
  {
    return $this->environment;
  }
}

class EnvironmentTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $environment;

  /** @param string */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return string */
  public function getEnvironment()
  {
    return $this->environment;
  }
}

class ExchangeAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $exchange;

  /** @param string */
  public function setExchange($exchange)
  {
    $this->exchange = $exchange;
  }
  /** @return string */
  public function getExchange()
  {
    return $this->exchange;
  }
}

class ExchangeConfig extends \Google\Collection
{
  /** @var ExchangeConfigEnabledExchange[] */
  public $enabledExchanges;
  protected $collection_key = 'enabledExchanges';
  protected $enabledExchangesType = ExchangeConfigEnabledExchange::class;
  protected $enabledExchangesDataType = 'array';
  /** @param ExchangeConfigEnabledExchange[] */
  public function setEnabledExchanges($enabledExchanges)
  {
    $this->enabledExchanges = $enabledExchanges;
  }
  /** @return ExchangeConfigEnabledExchange[] */
  public function getEnabledExchanges()
  {
    return $this->enabledExchanges;
  }
}

class ExchangeConfigEnabledExchange extends \Google\Model
{
  /** @var string */
  public $exchange;
  /** @var string */
  public $googleAdManagerAgencyId;
  /** @var string */
  public $googleAdManagerBuyerNetworkId;
  /** @var string */
  public $seatId;

  /** @param string */
  public function setExchange($exchange)
  {
    $this->exchange = $exchange;
  }
  /** @return string */
  public function getExchange()
  {
    return $this->exchange;
  }
  /** @param string */
  public function setGoogleAdManagerAgencyId($googleAdManagerAgencyId)
  {
    $this->googleAdManagerAgencyId = $googleAdManagerAgencyId;
  }
  /** @return string */
  public function getGoogleAdManagerAgencyId()
  {
    return $this->googleAdManagerAgencyId;
  }
  /** @param string */
  public function setGoogleAdManagerBuyerNetworkId($googleAdManagerBuyerNetworkId)
  {
    $this->googleAdManagerBuyerNetworkId = $googleAdManagerBuyerNetworkId;
  }
  /** @return string */
  public function getGoogleAdManagerBuyerNetworkId()
  {
    return $this->googleAdManagerBuyerNetworkId;
  }
  /** @param string */
  public function setSeatId($seatId)
  {
    $this->seatId = $seatId;
  }
  /** @return string */
  public function getSeatId()
  {
    return $this->seatId;
  }
}

class ExchangeReviewStatus extends \Google\Model
{
  /** @var string */
  public $exchange;
  /** @var string */
  public $status;

  /** @param string */
  public function setExchange($exchange)
  {
    $this->exchange = $exchange;
  }
  /** @return string */
  public function getExchange()
  {
    return $this->exchange;
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

class ExchangeTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $exchange;

  /** @param string */
  public function setExchange($exchange)
  {
    $this->exchange = $exchange;
  }
  /** @return string */
  public function getExchange()
  {
    return $this->exchange;
  }
}

class ExitEvent extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $reportingName;
  /** @var string */
  public $type;
  /** @var string */
  public $url;

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
  public function setReportingName($reportingName)
  {
    $this->reportingName = $reportingName;
  }
  /** @return string */
  public function getReportingName()
  {
    return $this->reportingName;
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
}

class FirstAndThirdPartyAudience extends \Google\Model
{
  /** @var string */
  public $activeDisplayAudienceSize;
  /** @var string */
  public $appId;
  /** @var string */
  public $audienceSource;
  /** @var string */
  public $audienceType;
  /** @var ContactInfoList */
  public $contactInfoList;
  /** @var string */
  public $description;
  /** @var string */
  public $displayAudienceSize;
  /** @var string */
  public $displayDesktopAudienceSize;
  /** @var string */
  public $displayMobileAppAudienceSize;
  /** @var string */
  public $displayMobileWebAudienceSize;
  /** @var string */
  public $displayName;
  /** @var string */
  public $firstAndThirdPartyAudienceId;
  /** @var string */
  public $firstAndThirdPartyAudienceType;
  /** @var string */
  public $gmailAudienceSize;
  /** @var string */
  public $membershipDurationDays;
  /** @var MobileDeviceIdList */
  public $mobileDeviceIdList;
  /** @var string */
  public $name;
  /** @var string */
  public $youtubeAudienceSize;
  protected $contactInfoListType = ContactInfoList::class;
  protected $contactInfoListDataType = '';
  protected $mobileDeviceIdListType = MobileDeviceIdList::class;
  protected $mobileDeviceIdListDataType = '';
  /** @param string */
  public function setActiveDisplayAudienceSize($activeDisplayAudienceSize)
  {
    $this->activeDisplayAudienceSize = $activeDisplayAudienceSize;
  }
  /** @return string */
  public function getActiveDisplayAudienceSize()
  {
    return $this->activeDisplayAudienceSize;
  }
  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
  }
  /** @param string */
  public function setAudienceSource($audienceSource)
  {
    $this->audienceSource = $audienceSource;
  }
  /** @return string */
  public function getAudienceSource()
  {
    return $this->audienceSource;
  }
  /** @param string */
  public function setAudienceType($audienceType)
  {
    $this->audienceType = $audienceType;
  }
  /** @return string */
  public function getAudienceType()
  {
    return $this->audienceType;
  }
  /** @param ContactInfoList */
  public function setContactInfoList(ContactInfoList $contactInfoList)
  {
    $this->contactInfoList = $contactInfoList;
  }
  /** @return ContactInfoList */
  public function getContactInfoList()
  {
    return $this->contactInfoList;
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
  public function setDisplayAudienceSize($displayAudienceSize)
  {
    $this->displayAudienceSize = $displayAudienceSize;
  }
  /** @return string */
  public function getDisplayAudienceSize()
  {
    return $this->displayAudienceSize;
  }
  /** @param string */
  public function setDisplayDesktopAudienceSize($displayDesktopAudienceSize)
  {
    $this->displayDesktopAudienceSize = $displayDesktopAudienceSize;
  }
  /** @return string */
  public function getDisplayDesktopAudienceSize()
  {
    return $this->displayDesktopAudienceSize;
  }
  /** @param string */
  public function setDisplayMobileAppAudienceSize($displayMobileAppAudienceSize)
  {
    $this->displayMobileAppAudienceSize = $displayMobileAppAudienceSize;
  }
  /** @return string */
  public function getDisplayMobileAppAudienceSize()
  {
    return $this->displayMobileAppAudienceSize;
  }
  /** @param string */
  public function setDisplayMobileWebAudienceSize($displayMobileWebAudienceSize)
  {
    $this->displayMobileWebAudienceSize = $displayMobileWebAudienceSize;
  }
  /** @return string */
  public function getDisplayMobileWebAudienceSize()
  {
    return $this->displayMobileWebAudienceSize;
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
  public function setFirstAndThirdPartyAudienceId($firstAndThirdPartyAudienceId)
  {
    $this->firstAndThirdPartyAudienceId = $firstAndThirdPartyAudienceId;
  }
  /** @return string */
  public function getFirstAndThirdPartyAudienceId()
  {
    return $this->firstAndThirdPartyAudienceId;
  }
  /** @param string */
  public function setFirstAndThirdPartyAudienceType($firstAndThirdPartyAudienceType)
  {
    $this->firstAndThirdPartyAudienceType = $firstAndThirdPartyAudienceType;
  }
  /** @return string */
  public function getFirstAndThirdPartyAudienceType()
  {
    return $this->firstAndThirdPartyAudienceType;
  }
  /** @param string */
  public function setGmailAudienceSize($gmailAudienceSize)
  {
    $this->gmailAudienceSize = $gmailAudienceSize;
  }
  /** @return string */
  public function getGmailAudienceSize()
  {
    return $this->gmailAudienceSize;
  }
  /** @param string */
  public function setMembershipDurationDays($membershipDurationDays)
  {
    $this->membershipDurationDays = $membershipDurationDays;
  }
  /** @return string */
  public function getMembershipDurationDays()
  {
    return $this->membershipDurationDays;
  }
  /** @param MobileDeviceIdList */
  public function setMobileDeviceIdList(MobileDeviceIdList $mobileDeviceIdList)
  {
    $this->mobileDeviceIdList = $mobileDeviceIdList;
  }
  /** @return MobileDeviceIdList */
  public function getMobileDeviceIdList()
  {
    return $this->mobileDeviceIdList;
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
  public function setYoutubeAudienceSize($youtubeAudienceSize)
  {
    $this->youtubeAudienceSize = $youtubeAudienceSize;
  }
  /** @return string */
  public function getYoutubeAudienceSize()
  {
    return $this->youtubeAudienceSize;
  }
}

class FirstAndThirdPartyAudienceGroup extends \Google\Collection
{
  /** @var FirstAndThirdPartyAudienceTargetingSetting[] */
  public $settings;
  protected $collection_key = 'settings';
  protected $settingsType = FirstAndThirdPartyAudienceTargetingSetting::class;
  protected $settingsDataType = 'array';
  /** @param FirstAndThirdPartyAudienceTargetingSetting[] */
  public function setSettings($settings)
  {
    $this->settings = $settings;
  }
  /** @return FirstAndThirdPartyAudienceTargetingSetting[] */
  public function getSettings()
  {
    return $this->settings;
  }
}

class FirstAndThirdPartyAudienceTargetingSetting extends \Google\Model
{
  /** @var string */
  public $firstAndThirdPartyAudienceId;
  /** @var string */
  public $recency;

  /** @param string */
  public function setFirstAndThirdPartyAudienceId($firstAndThirdPartyAudienceId)
  {
    $this->firstAndThirdPartyAudienceId = $firstAndThirdPartyAudienceId;
  }
  /** @return string */
  public function getFirstAndThirdPartyAudienceId()
  {
    return $this->firstAndThirdPartyAudienceId;
  }
  /** @param string */
  public function setRecency($recency)
  {
    $this->recency = $recency;
  }
  /** @return string */
  public function getRecency()
  {
    return $this->recency;
  }
}

class FixedBidStrategy extends \Google\Model
{
  /** @var string */
  public $bidAmountMicros;

  /** @param string */
  public function setBidAmountMicros($bidAmountMicros)
  {
    $this->bidAmountMicros = $bidAmountMicros;
  }
  /** @return string */
  public function getBidAmountMicros()
  {
    return $this->bidAmountMicros;
  }
}

class FloodlightGroup extends \Google\Model
{
  /** @var ActiveViewVideoViewabilityMetricConfig */
  public $activeViewConfig;
  /** @var array[] */
  public $customVariables;
  /** @var string */
  public $displayName;
  /** @var string */
  public $floodlightGroupId;
  /** @var LookbackWindow */
  public $lookbackWindow;
  /** @var string */
  public $name;
  /** @var string */
  public $webTagType;
  protected $activeViewConfigType = ActiveViewVideoViewabilityMetricConfig::class;
  protected $activeViewConfigDataType = '';
  protected $lookbackWindowType = LookbackWindow::class;
  protected $lookbackWindowDataType = '';
  /** @param ActiveViewVideoViewabilityMetricConfig */
  public function setActiveViewConfig(ActiveViewVideoViewabilityMetricConfig $activeViewConfig)
  {
    $this->activeViewConfig = $activeViewConfig;
  }
  /** @return ActiveViewVideoViewabilityMetricConfig */
  public function getActiveViewConfig()
  {
    return $this->activeViewConfig;
  }
  /** @param array[] */
  public function setCustomVariables($customVariables)
  {
    $this->customVariables = $customVariables;
  }
  /** @return array[] */
  public function getCustomVariables()
  {
    return $this->customVariables;
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
  public function setFloodlightGroupId($floodlightGroupId)
  {
    $this->floodlightGroupId = $floodlightGroupId;
  }
  /** @return string */
  public function getFloodlightGroupId()
  {
    return $this->floodlightGroupId;
  }
  /** @param LookbackWindow */
  public function setLookbackWindow(LookbackWindow $lookbackWindow)
  {
    $this->lookbackWindow = $lookbackWindow;
  }
  /** @return LookbackWindow */
  public function getLookbackWindow()
  {
    return $this->lookbackWindow;
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
  public function setWebTagType($webTagType)
  {
    $this->webTagType = $webTagType;
  }
  /** @return string */
  public function getWebTagType()
  {
    return $this->webTagType;
  }
}

class FrequencyCap extends \Google\Model
{
  /** @var int */
  public $maxImpressions;
  /** @var int */
  public $maxViews;
  /** @var string */
  public $timeUnit;
  /** @var int */
  public $timeUnitCount;
  /** @var bool */
  public $unlimited;

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
  /** @param int */
  public function setMaxViews($maxViews)
  {
    $this->maxViews = $maxViews;
  }
  /** @return int */
  public function getMaxViews()
  {
    return $this->maxViews;
  }
  /** @param string */
  public function setTimeUnit($timeUnit)
  {
    $this->timeUnit = $timeUnit;
  }
  /** @return string */
  public function getTimeUnit()
  {
    return $this->timeUnit;
  }
  /** @param int */
  public function setTimeUnitCount($timeUnitCount)
  {
    $this->timeUnitCount = $timeUnitCount;
  }
  /** @return int */
  public function getTimeUnitCount()
  {
    return $this->timeUnitCount;
  }
  /** @param bool */
  public function setUnlimited($unlimited)
  {
    $this->unlimited = $unlimited;
  }
  /** @return bool */
  public function getUnlimited()
  {
    return $this->unlimited;
  }
}

class GenderAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $gender;

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
}

class GenderTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $gender;

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
}

class GenerateDefaultLineItemRequest extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $insertionOrderId;
  /** @var string */
  public $lineItemType;
  /** @var MobileApp */
  public $mobileApp;
  protected $mobileAppType = MobileApp::class;
  protected $mobileAppDataType = '';
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
  public function setInsertionOrderId($insertionOrderId)
  {
    $this->insertionOrderId = $insertionOrderId;
  }
  /** @return string */
  public function getInsertionOrderId()
  {
    return $this->insertionOrderId;
  }
  /** @param string */
  public function setLineItemType($lineItemType)
  {
    $this->lineItemType = $lineItemType;
  }
  /** @return string */
  public function getLineItemType()
  {
    return $this->lineItemType;
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
}

class GeoRegionAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $geoRegionType;
  /** @var bool */
  public $negative;
  /** @var string */
  public $targetingOptionId;

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
  public function setGeoRegionType($geoRegionType)
  {
    $this->geoRegionType = $geoRegionType;
  }
  /** @return string */
  public function getGeoRegionType()
  {
    return $this->geoRegionType;
  }
  /** @param bool */
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class GeoRegionSearchTerms extends \Google\Model
{
  /** @var string */
  public $geoRegionQuery;

  /** @param string */
  public function setGeoRegionQuery($geoRegionQuery)
  {
    $this->geoRegionQuery = $geoRegionQuery;
  }
  /** @return string */
  public function getGeoRegionQuery()
  {
    return $this->geoRegionQuery;
  }
}

class GeoRegionTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $geoRegionType;

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
  public function setGeoRegionType($geoRegionType)
  {
    $this->geoRegionType = $geoRegionType;
  }
  /** @return string */
  public function getGeoRegionType()
  {
    return $this->geoRegionType;
  }
}

class GoogleAudience extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $googleAudienceId;
  /** @var string */
  public $googleAudienceType;
  /** @var string */
  public $name;

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
  public function setGoogleAudienceId($googleAudienceId)
  {
    $this->googleAudienceId = $googleAudienceId;
  }
  /** @return string */
  public function getGoogleAudienceId()
  {
    return $this->googleAudienceId;
  }
  /** @param string */
  public function setGoogleAudienceType($googleAudienceType)
  {
    $this->googleAudienceType = $googleAudienceType;
  }
  /** @return string */
  public function getGoogleAudienceType()
  {
    return $this->googleAudienceType;
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

class GoogleAudienceGroup extends \Google\Collection
{
  /** @var GoogleAudienceTargetingSetting[] */
  public $settings;
  protected $collection_key = 'settings';
  protected $settingsType = GoogleAudienceTargetingSetting::class;
  protected $settingsDataType = 'array';
  /** @param GoogleAudienceTargetingSetting[] */
  public function setSettings($settings)
  {
    $this->settings = $settings;
  }
  /** @return GoogleAudienceTargetingSetting[] */
  public function getSettings()
  {
    return $this->settings;
  }
}

class GoogleAudienceTargetingSetting extends \Google\Model
{
  /** @var string */
  public $googleAudienceId;

  /** @param string */
  public function setGoogleAudienceId($googleAudienceId)
  {
    $this->googleAudienceId = $googleAudienceId;
  }
  /** @return string */
  public function getGoogleAudienceId()
  {
    return $this->googleAudienceId;
  }
}

class GoogleBytestreamMedia extends \Google\Model
{
  /** @var string */
  public $resourceName;

  /** @param string */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

class GuaranteedOrder extends \Google\Collection
{
  /** @var string */
  public $defaultAdvertiserId;
  /** @var string */
  public $defaultCampaignId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $exchange;
  /** @var string */
  public $guaranteedOrderId;
  /** @var string */
  public $legacyGuaranteedOrderId;
  /** @var string */
  public $name;
  /** @var string */
  public $publisherName;
  /** @var bool */
  public $readAccessInherited;
  /** @var string[] */
  public $readAdvertiserIds;
  /** @var string */
  public $readWriteAdvertiserId;
  /** @var string */
  public $readWritePartnerId;
  /** @var GuaranteedOrderStatus */
  public $status;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'readAdvertiserIds';
  protected $statusType = GuaranteedOrderStatus::class;
  protected $statusDataType = '';
  /** @param string */
  public function setDefaultAdvertiserId($defaultAdvertiserId)
  {
    $this->defaultAdvertiserId = $defaultAdvertiserId;
  }
  /** @return string */
  public function getDefaultAdvertiserId()
  {
    return $this->defaultAdvertiserId;
  }
  /** @param string */
  public function setDefaultCampaignId($defaultCampaignId)
  {
    $this->defaultCampaignId = $defaultCampaignId;
  }
  /** @return string */
  public function getDefaultCampaignId()
  {
    return $this->defaultCampaignId;
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
  public function setExchange($exchange)
  {
    $this->exchange = $exchange;
  }
  /** @return string */
  public function getExchange()
  {
    return $this->exchange;
  }
  /** @param string */
  public function setGuaranteedOrderId($guaranteedOrderId)
  {
    $this->guaranteedOrderId = $guaranteedOrderId;
  }
  /** @return string */
  public function getGuaranteedOrderId()
  {
    return $this->guaranteedOrderId;
  }
  /** @param string */
  public function setLegacyGuaranteedOrderId($legacyGuaranteedOrderId)
  {
    $this->legacyGuaranteedOrderId = $legacyGuaranteedOrderId;
  }
  /** @return string */
  public function getLegacyGuaranteedOrderId()
  {
    return $this->legacyGuaranteedOrderId;
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
  public function setPublisherName($publisherName)
  {
    $this->publisherName = $publisherName;
  }
  /** @return string */
  public function getPublisherName()
  {
    return $this->publisherName;
  }
  /** @param bool */
  public function setReadAccessInherited($readAccessInherited)
  {
    $this->readAccessInherited = $readAccessInherited;
  }
  /** @return bool */
  public function getReadAccessInherited()
  {
    return $this->readAccessInherited;
  }
  /** @param string[] */
  public function setReadAdvertiserIds($readAdvertiserIds)
  {
    $this->readAdvertiserIds = $readAdvertiserIds;
  }
  /** @return string[] */
  public function getReadAdvertiserIds()
  {
    return $this->readAdvertiserIds;
  }
  /** @param string */
  public function setReadWriteAdvertiserId($readWriteAdvertiserId)
  {
    $this->readWriteAdvertiserId = $readWriteAdvertiserId;
  }
  /** @return string */
  public function getReadWriteAdvertiserId()
  {
    return $this->readWriteAdvertiserId;
  }
  /** @param string */
  public function setReadWritePartnerId($readWritePartnerId)
  {
    $this->readWritePartnerId = $readWritePartnerId;
  }
  /** @return string */
  public function getReadWritePartnerId()
  {
    return $this->readWritePartnerId;
  }
  /** @param GuaranteedOrderStatus */
  public function setStatus(GuaranteedOrderStatus $status)
  {
    $this->status = $status;
  }
  /** @return GuaranteedOrderStatus */
  public function getStatus()
  {
    return $this->status;
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

class GuaranteedOrderStatus extends \Google\Model
{
  /** @var string */
  public $configStatus;
  /** @var string */
  public $entityPauseReason;
  /** @var string */
  public $entityStatus;

  /** @param string */
  public function setConfigStatus($configStatus)
  {
    $this->configStatus = $configStatus;
  }
  /** @return string */
  public function getConfigStatus()
  {
    return $this->configStatus;
  }
  /** @param string */
  public function setEntityPauseReason($entityPauseReason)
  {
    $this->entityPauseReason = $entityPauseReason;
  }
  /** @return string */
  public function getEntityPauseReason()
  {
    return $this->entityPauseReason;
  }
  /** @param string */
  public function setEntityStatus($entityStatus)
  {
    $this->entityStatus = $entityStatus;
  }
  /** @return string */
  public function getEntityStatus()
  {
    return $this->entityStatus;
  }
}

class HouseholdIncomeAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $householdIncome;

  /** @param string */
  public function setHouseholdIncome($householdIncome)
  {
    $this->householdIncome = $householdIncome;
  }
  /** @return string */
  public function getHouseholdIncome()
  {
    return $this->householdIncome;
  }
}

class HouseholdIncomeTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $householdIncome;

  /** @param string */
  public function setHouseholdIncome($householdIncome)
  {
    $this->householdIncome = $householdIncome;
  }
  /** @return string */
  public function getHouseholdIncome()
  {
    return $this->householdIncome;
  }
}

class IdFilter extends \Google\Collection
{
  /** @var string[] */
  public $adGroupAdIds;
  /** @var string[] */
  public $adGroupIds;
  /** @var string[] */
  public $campaignIds;
  /** @var string[] */
  public $insertionOrderIds;
  /** @var string[] */
  public $lineItemIds;
  /** @var string[] */
  public $mediaProductIds;
  protected $collection_key = 'mediaProductIds';
  /** @param string[] */
  public function setAdGroupAdIds($adGroupAdIds)
  {
    $this->adGroupAdIds = $adGroupAdIds;
  }
  /** @return string[] */
  public function getAdGroupAdIds()
  {
    return $this->adGroupAdIds;
  }
  /** @param string[] */
  public function setAdGroupIds($adGroupIds)
  {
    $this->adGroupIds = $adGroupIds;
  }
  /** @return string[] */
  public function getAdGroupIds()
  {
    return $this->adGroupIds;
  }
  /** @param string[] */
  public function setCampaignIds($campaignIds)
  {
    $this->campaignIds = $campaignIds;
  }
  /** @return string[] */
  public function getCampaignIds()
  {
    return $this->campaignIds;
  }
  /** @param string[] */
  public function setInsertionOrderIds($insertionOrderIds)
  {
    $this->insertionOrderIds = $insertionOrderIds;
  }
  /** @return string[] */
  public function getInsertionOrderIds()
  {
    return $this->insertionOrderIds;
  }
  /** @param string[] */
  public function setLineItemIds($lineItemIds)
  {
    $this->lineItemIds = $lineItemIds;
  }
  /** @return string[] */
  public function getLineItemIds()
  {
    return $this->lineItemIds;
  }
  /** @param string[] */
  public function setMediaProductIds($mediaProductIds)
  {
    $this->mediaProductIds = $mediaProductIds;
  }
  /** @return string[] */
  public function getMediaProductIds()
  {
    return $this->mediaProductIds;
  }
}

class InsertionOrder extends \Google\Collection
{
  /** @var string */
  public $advertiserId;
  /** @var BiddingStrategy */
  public $bidStrategy;
  /** @var string */
  public $billableOutcome;
  /** @var InsertionOrderBudget */
  public $budget;
  /** @var string */
  public $campaignId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $entityStatus;
  /** @var FrequencyCap */
  public $frequencyCap;
  /** @var string */
  public $insertionOrderId;
  /** @var string */
  public $insertionOrderType;
  /** @var IntegrationDetails */
  public $integrationDetails;
  /** @var string */
  public $name;
  /** @var Pacing */
  public $pacing;
  /** @var PartnerCost[] */
  public $partnerCosts;
  /** @var PerformanceGoal */
  public $performanceGoal;
  /** @var string */
  public $reservationType;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'partnerCosts';
  protected $bidStrategyType = BiddingStrategy::class;
  protected $bidStrategyDataType = '';
  protected $budgetType = InsertionOrderBudget::class;
  protected $budgetDataType = '';
  protected $frequencyCapType = FrequencyCap::class;
  protected $frequencyCapDataType = '';
  protected $integrationDetailsType = IntegrationDetails::class;
  protected $integrationDetailsDataType = '';
  protected $pacingType = Pacing::class;
  protected $pacingDataType = '';
  protected $partnerCostsType = PartnerCost::class;
  protected $partnerCostsDataType = 'array';
  protected $performanceGoalType = PerformanceGoal::class;
  protected $performanceGoalDataType = '';
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
  /** @param BiddingStrategy */
  public function setBidStrategy(BiddingStrategy $bidStrategy)
  {
    $this->bidStrategy = $bidStrategy;
  }
  /** @return BiddingStrategy */
  public function getBidStrategy()
  {
    return $this->bidStrategy;
  }
  /** @param string */
  public function setBillableOutcome($billableOutcome)
  {
    $this->billableOutcome = $billableOutcome;
  }
  /** @return string */
  public function getBillableOutcome()
  {
    return $this->billableOutcome;
  }
  /** @param InsertionOrderBudget */
  public function setBudget(InsertionOrderBudget $budget)
  {
    $this->budget = $budget;
  }
  /** @return InsertionOrderBudget */
  public function getBudget()
  {
    return $this->budget;
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
  public function setEntityStatus($entityStatus)
  {
    $this->entityStatus = $entityStatus;
  }
  /** @return string */
  public function getEntityStatus()
  {
    return $this->entityStatus;
  }
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
  /** @param string */
  public function setInsertionOrderId($insertionOrderId)
  {
    $this->insertionOrderId = $insertionOrderId;
  }
  /** @return string */
  public function getInsertionOrderId()
  {
    return $this->insertionOrderId;
  }
  /** @param string */
  public function setInsertionOrderType($insertionOrderType)
  {
    $this->insertionOrderType = $insertionOrderType;
  }
  /** @return string */
  public function getInsertionOrderType()
  {
    return $this->insertionOrderType;
  }
  /** @param IntegrationDetails */
  public function setIntegrationDetails(IntegrationDetails $integrationDetails)
  {
    $this->integrationDetails = $integrationDetails;
  }
  /** @return IntegrationDetails */
  public function getIntegrationDetails()
  {
    return $this->integrationDetails;
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
  /** @param Pacing */
  public function setPacing(Pacing $pacing)
  {
    $this->pacing = $pacing;
  }
  /** @return Pacing */
  public function getPacing()
  {
    return $this->pacing;
  }
  /** @param PartnerCost[] */
  public function setPartnerCosts($partnerCosts)
  {
    $this->partnerCosts = $partnerCosts;
  }
  /** @return PartnerCost[] */
  public function getPartnerCosts()
  {
    return $this->partnerCosts;
  }
  /** @param PerformanceGoal */
  public function setPerformanceGoal(PerformanceGoal $performanceGoal)
  {
    $this->performanceGoal = $performanceGoal;
  }
  /** @return PerformanceGoal */
  public function getPerformanceGoal()
  {
    return $this->performanceGoal;
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

class InsertionOrderBudget extends \Google\Collection
{
  /** @var string */
  public $automationType;
  /** @var InsertionOrderBudgetSegment[] */
  public $budgetSegments;
  /** @var string */
  public $budgetUnit;
  protected $collection_key = 'budgetSegments';
  protected $budgetSegmentsType = InsertionOrderBudgetSegment::class;
  protected $budgetSegmentsDataType = 'array';
  /** @param string */
  public function setAutomationType($automationType)
  {
    $this->automationType = $automationType;
  }
  /** @return string */
  public function getAutomationType()
  {
    return $this->automationType;
  }
  /** @param InsertionOrderBudgetSegment[] */
  public function setBudgetSegments($budgetSegments)
  {
    $this->budgetSegments = $budgetSegments;
  }
  /** @return InsertionOrderBudgetSegment[] */
  public function getBudgetSegments()
  {
    return $this->budgetSegments;
  }
  /** @param string */
  public function setBudgetUnit($budgetUnit)
  {
    $this->budgetUnit = $budgetUnit;
  }
  /** @return string */
  public function getBudgetUnit()
  {
    return $this->budgetUnit;
  }
}

class InsertionOrderBudgetSegment extends \Google\Model
{
  /** @var string */
  public $budgetAmountMicros;
  /** @var string */
  public $campaignBudgetId;
  /** @var DateRange */
  public $dateRange;
  /** @var string */
  public $description;
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  /** @param string */
  public function setBudgetAmountMicros($budgetAmountMicros)
  {
    $this->budgetAmountMicros = $budgetAmountMicros;
  }
  /** @return string */
  public function getBudgetAmountMicros()
  {
    return $this->budgetAmountMicros;
  }
  /** @param string */
  public function setCampaignBudgetId($campaignBudgetId)
  {
    $this->campaignBudgetId = $campaignBudgetId;
  }
  /** @return string */
  public function getCampaignBudgetId()
  {
    return $this->campaignBudgetId;
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
}

class IntegralAdScience extends \Google\Collection
{
  /** @var string[] */
  public $customSegmentId;
  /** @var string */
  public $displayViewability;
  /** @var bool */
  public $excludeUnrateable;
  /** @var string */
  public $excludedAdFraudRisk;
  /** @var string */
  public $excludedAdultRisk;
  /** @var string */
  public $excludedAlcoholRisk;
  /** @var string */
  public $excludedDrugsRisk;
  /** @var string */
  public $excludedGamblingRisk;
  /** @var string */
  public $excludedHateSpeechRisk;
  /** @var string */
  public $excludedIllegalDownloadsRisk;
  /** @var string */
  public $excludedOffensiveLanguageRisk;
  /** @var string */
  public $excludedViolenceRisk;
  /** @var string */
  public $traqScoreOption;
  /** @var string */
  public $videoViewability;
  protected $collection_key = 'customSegmentId';
  /** @param string[] */
  public function setCustomSegmentId($customSegmentId)
  {
    $this->customSegmentId = $customSegmentId;
  }
  /** @return string[] */
  public function getCustomSegmentId()
  {
    return $this->customSegmentId;
  }
  /** @param string */
  public function setDisplayViewability($displayViewability)
  {
    $this->displayViewability = $displayViewability;
  }
  /** @return string */
  public function getDisplayViewability()
  {
    return $this->displayViewability;
  }
  /** @param bool */
  public function setExcludeUnrateable($excludeUnrateable)
  {
    $this->excludeUnrateable = $excludeUnrateable;
  }
  /** @return bool */
  public function getExcludeUnrateable()
  {
    return $this->excludeUnrateable;
  }
  /** @param string */
  public function setExcludedAdFraudRisk($excludedAdFraudRisk)
  {
    $this->excludedAdFraudRisk = $excludedAdFraudRisk;
  }
  /** @return string */
  public function getExcludedAdFraudRisk()
  {
    return $this->excludedAdFraudRisk;
  }
  /** @param string */
  public function setExcludedAdultRisk($excludedAdultRisk)
  {
    $this->excludedAdultRisk = $excludedAdultRisk;
  }
  /** @return string */
  public function getExcludedAdultRisk()
  {
    return $this->excludedAdultRisk;
  }
  /** @param string */
  public function setExcludedAlcoholRisk($excludedAlcoholRisk)
  {
    $this->excludedAlcoholRisk = $excludedAlcoholRisk;
  }
  /** @return string */
  public function getExcludedAlcoholRisk()
  {
    return $this->excludedAlcoholRisk;
  }
  /** @param string */
  public function setExcludedDrugsRisk($excludedDrugsRisk)
  {
    $this->excludedDrugsRisk = $excludedDrugsRisk;
  }
  /** @return string */
  public function getExcludedDrugsRisk()
  {
    return $this->excludedDrugsRisk;
  }
  /** @param string */
  public function setExcludedGamblingRisk($excludedGamblingRisk)
  {
    $this->excludedGamblingRisk = $excludedGamblingRisk;
  }
  /** @return string */
  public function getExcludedGamblingRisk()
  {
    return $this->excludedGamblingRisk;
  }
  /** @param string */
  public function setExcludedHateSpeechRisk($excludedHateSpeechRisk)
  {
    $this->excludedHateSpeechRisk = $excludedHateSpeechRisk;
  }
  /** @return string */
  public function getExcludedHateSpeechRisk()
  {
    return $this->excludedHateSpeechRisk;
  }
  /** @param string */
  public function setExcludedIllegalDownloadsRisk($excludedIllegalDownloadsRisk)
  {
    $this->excludedIllegalDownloadsRisk = $excludedIllegalDownloadsRisk;
  }
  /** @return string */
  public function getExcludedIllegalDownloadsRisk()
  {
    return $this->excludedIllegalDownloadsRisk;
  }
  /** @param string */
  public function setExcludedOffensiveLanguageRisk($excludedOffensiveLanguageRisk)
  {
    $this->excludedOffensiveLanguageRisk = $excludedOffensiveLanguageRisk;
  }
  /** @return string */
  public function getExcludedOffensiveLanguageRisk()
  {
    return $this->excludedOffensiveLanguageRisk;
  }
  /** @param string */
  public function setExcludedViolenceRisk($excludedViolenceRisk)
  {
    $this->excludedViolenceRisk = $excludedViolenceRisk;
  }
  /** @return string */
  public function getExcludedViolenceRisk()
  {
    return $this->excludedViolenceRisk;
  }
  /** @param string */
  public function setTraqScoreOption($traqScoreOption)
  {
    $this->traqScoreOption = $traqScoreOption;
  }
  /** @return string */
  public function getTraqScoreOption()
  {
    return $this->traqScoreOption;
  }
  /** @param string */
  public function setVideoViewability($videoViewability)
  {
    $this->videoViewability = $videoViewability;
  }
  /** @return string */
  public function getVideoViewability()
  {
    return $this->videoViewability;
  }
}

class IntegrationDetails extends \Google\Model
{
  /** @var string */
  public $details;
  /** @var string */
  public $integrationCode;

  /** @param string */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string */
  public function getDetails()
  {
    return $this->details;
  }
  /** @param string */
  public function setIntegrationCode($integrationCode)
  {
    $this->integrationCode = $integrationCode;
  }
  /** @return string */
  public function getIntegrationCode()
  {
    return $this->integrationCode;
  }
}

class InventorySource extends \Google\Collection
{
  /** @var string */
  public $commitment;
  /** @var CreativeConfig[] */
  public $creativeConfigs;
  /** @var string */
  public $dealId;
  /** @var string */
  public $deliveryMethod;
  /** @var string */
  public $displayName;
  /** @var string */
  public $exchange;
  /** @var string */
  public $guaranteedOrderId;
  /** @var string */
  public $inventorySourceId;
  /** @var string */
  public $inventorySourceProductType;
  /** @var string */
  public $inventorySourceType;
  /** @var string */
  public $name;
  /** @var string */
  public $publisherName;
  /** @var RateDetails */
  public $rateDetails;
  /** @var string[] */
  public $readAdvertiserIds;
  /** @var string[] */
  public $readPartnerIds;
  /** @var InventorySourceAccessors */
  public $readWriteAccessors;
  /** @var InventorySourceStatus */
  public $status;
  /** @var string */
  public $subSitePropertyId;
  /** @var TimeRange */
  public $timeRange;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'readPartnerIds';
  protected $creativeConfigsType = CreativeConfig::class;
  protected $creativeConfigsDataType = 'array';
  protected $rateDetailsType = RateDetails::class;
  protected $rateDetailsDataType = '';
  protected $readWriteAccessorsType = InventorySourceAccessors::class;
  protected $readWriteAccessorsDataType = '';
  protected $statusType = InventorySourceStatus::class;
  protected $statusDataType = '';
  protected $timeRangeType = TimeRange::class;
  protected $timeRangeDataType = '';
  /** @param string */
  public function setCommitment($commitment)
  {
    $this->commitment = $commitment;
  }
  /** @return string */
  public function getCommitment()
  {
    return $this->commitment;
  }
  /** @param CreativeConfig[] */
  public function setCreativeConfigs($creativeConfigs)
  {
    $this->creativeConfigs = $creativeConfigs;
  }
  /** @return CreativeConfig[] */
  public function getCreativeConfigs()
  {
    return $this->creativeConfigs;
  }
  /** @param string */
  public function setDealId($dealId)
  {
    $this->dealId = $dealId;
  }
  /** @return string */
  public function getDealId()
  {
    return $this->dealId;
  }
  /** @param string */
  public function setDeliveryMethod($deliveryMethod)
  {
    $this->deliveryMethod = $deliveryMethod;
  }
  /** @return string */
  public function getDeliveryMethod()
  {
    return $this->deliveryMethod;
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
  public function setExchange($exchange)
  {
    $this->exchange = $exchange;
  }
  /** @return string */
  public function getExchange()
  {
    return $this->exchange;
  }
  /** @param string */
  public function setGuaranteedOrderId($guaranteedOrderId)
  {
    $this->guaranteedOrderId = $guaranteedOrderId;
  }
  /** @return string */
  public function getGuaranteedOrderId()
  {
    return $this->guaranteedOrderId;
  }
  /** @param string */
  public function setInventorySourceId($inventorySourceId)
  {
    $this->inventorySourceId = $inventorySourceId;
  }
  /** @return string */
  public function getInventorySourceId()
  {
    return $this->inventorySourceId;
  }
  /** @param string */
  public function setInventorySourceProductType($inventorySourceProductType)
  {
    $this->inventorySourceProductType = $inventorySourceProductType;
  }
  /** @return string */
  public function getInventorySourceProductType()
  {
    return $this->inventorySourceProductType;
  }
  /** @param string */
  public function setInventorySourceType($inventorySourceType)
  {
    $this->inventorySourceType = $inventorySourceType;
  }
  /** @return string */
  public function getInventorySourceType()
  {
    return $this->inventorySourceType;
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
  public function setPublisherName($publisherName)
  {
    $this->publisherName = $publisherName;
  }
  /** @return string */
  public function getPublisherName()
  {
    return $this->publisherName;
  }
  /** @param RateDetails */
  public function setRateDetails(RateDetails $rateDetails)
  {
    $this->rateDetails = $rateDetails;
  }
  /** @return RateDetails */
  public function getRateDetails()
  {
    return $this->rateDetails;
  }
  /** @param string[] */
  public function setReadAdvertiserIds($readAdvertiserIds)
  {
    $this->readAdvertiserIds = $readAdvertiserIds;
  }
  /** @return string[] */
  public function getReadAdvertiserIds()
  {
    return $this->readAdvertiserIds;
  }
  /** @param string[] */
  public function setReadPartnerIds($readPartnerIds)
  {
    $this->readPartnerIds = $readPartnerIds;
  }
  /** @return string[] */
  public function getReadPartnerIds()
  {
    return $this->readPartnerIds;
  }
  /** @param InventorySourceAccessors */
  public function setReadWriteAccessors(InventorySourceAccessors $readWriteAccessors)
  {
    $this->readWriteAccessors = $readWriteAccessors;
  }
  /** @return InventorySourceAccessors */
  public function getReadWriteAccessors()
  {
    return $this->readWriteAccessors;
  }
  /** @param InventorySourceStatus */
  public function setStatus(InventorySourceStatus $status)
  {
    $this->status = $status;
  }
  /** @return InventorySourceStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setSubSitePropertyId($subSitePropertyId)
  {
    $this->subSitePropertyId = $subSitePropertyId;
  }
  /** @return string */
  public function getSubSitePropertyId()
  {
    return $this->subSitePropertyId;
  }
  /** @param TimeRange */
  public function setTimeRange(TimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  /** @return TimeRange */
  public function getTimeRange()
  {
    return $this->timeRange;
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

class InventorySourceAccessors extends \Google\Model
{
  /** @var InventorySourceAccessorsAdvertiserAccessors */
  public $advertisers;
  /** @var InventorySourceAccessorsPartnerAccessor */
  public $partner;
  protected $advertisersType = InventorySourceAccessorsAdvertiserAccessors::class;
  protected $advertisersDataType = '';
  protected $partnerType = InventorySourceAccessorsPartnerAccessor::class;
  protected $partnerDataType = '';
  /** @param InventorySourceAccessorsAdvertiserAccessors */
  public function setAdvertisers(InventorySourceAccessorsAdvertiserAccessors $advertisers)
  {
    $this->advertisers = $advertisers;
  }
  /** @return InventorySourceAccessorsAdvertiserAccessors */
  public function getAdvertisers()
  {
    return $this->advertisers;
  }
  /** @param InventorySourceAccessorsPartnerAccessor */
  public function setPartner(InventorySourceAccessorsPartnerAccessor $partner)
  {
    $this->partner = $partner;
  }
  /** @return InventorySourceAccessorsPartnerAccessor */
  public function getPartner()
  {
    return $this->partner;
  }
}

class InventorySourceAccessorsAdvertiserAccessors extends \Google\Collection
{
  /** @var string[] */
  public $advertiserIds;
  protected $collection_key = 'advertiserIds';
  /** @param string[] */
  public function setAdvertiserIds($advertiserIds)
  {
    $this->advertiserIds = $advertiserIds;
  }
  /** @return string[] */
  public function getAdvertiserIds()
  {
    return $this->advertiserIds;
  }
}

class InventorySourceAccessorsPartnerAccessor extends \Google\Model
{
  /** @var string */
  public $partnerId;

  /** @param string */
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
  }
}

class InventorySourceAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $inventorySourceId;

  /** @param string */
  public function setInventorySourceId($inventorySourceId)
  {
    $this->inventorySourceId = $inventorySourceId;
  }
  /** @return string */
  public function getInventorySourceId()
  {
    return $this->inventorySourceId;
  }
}

class InventorySourceDisplayCreativeConfig extends \Google\Model
{
  /** @var Dimensions */
  public $creativeSize;
  protected $creativeSizeType = Dimensions::class;
  protected $creativeSizeDataType = '';
  /** @param Dimensions */
  public function setCreativeSize(Dimensions $creativeSize)
  {
    $this->creativeSize = $creativeSize;
  }
  /** @return Dimensions */
  public function getCreativeSize()
  {
    return $this->creativeSize;
  }
}

class InventorySourceFilter extends \Google\Collection
{
  /** @var string[] */
  public $inventorySourceIds;
  protected $collection_key = 'inventorySourceIds';
  /** @param string[] */
  public function setInventorySourceIds($inventorySourceIds)
  {
    $this->inventorySourceIds = $inventorySourceIds;
  }
  /** @return string[] */
  public function getInventorySourceIds()
  {
    return $this->inventorySourceIds;
  }
}

class InventorySourceGroup extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $inventorySourceGroupId;
  /** @var string */
  public $name;

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
  public function setInventorySourceGroupId($inventorySourceGroupId)
  {
    $this->inventorySourceGroupId = $inventorySourceGroupId;
  }
  /** @return string */
  public function getInventorySourceGroupId()
  {
    return $this->inventorySourceGroupId;
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

class InventorySourceGroupAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $inventorySourceGroupId;

  /** @param string */
  public function setInventorySourceGroupId($inventorySourceGroupId)
  {
    $this->inventorySourceGroupId = $inventorySourceGroupId;
  }
  /** @return string */
  public function getInventorySourceGroupId()
  {
    return $this->inventorySourceGroupId;
  }
}

class InventorySourceStatus extends \Google\Model
{
  /** @var string */
  public $configStatus;
  /** @var string */
  public $entityPauseReason;
  /** @var string */
  public $entityStatus;
  /** @var string */
  public $sellerPauseReason;
  /** @var string */
  public $sellerStatus;

  /** @param string */
  public function setConfigStatus($configStatus)
  {
    $this->configStatus = $configStatus;
  }
  /** @return string */
  public function getConfigStatus()
  {
    return $this->configStatus;
  }
  /** @param string */
  public function setEntityPauseReason($entityPauseReason)
  {
    $this->entityPauseReason = $entityPauseReason;
  }
  /** @return string */
  public function getEntityPauseReason()
  {
    return $this->entityPauseReason;
  }
  /** @param string */
  public function setEntityStatus($entityStatus)
  {
    $this->entityStatus = $entityStatus;
  }
  /** @return string */
  public function getEntityStatus()
  {
    return $this->entityStatus;
  }
  /** @param string */
  public function setSellerPauseReason($sellerPauseReason)
  {
    $this->sellerPauseReason = $sellerPauseReason;
  }
  /** @return string */
  public function getSellerPauseReason()
  {
    return $this->sellerPauseReason;
  }
  /** @param string */
  public function setSellerStatus($sellerStatus)
  {
    $this->sellerStatus = $sellerStatus;
  }
  /** @return string */
  public function getSellerStatus()
  {
    return $this->sellerStatus;
  }
}

class InventorySourceVideoCreativeConfig extends \Google\Model
{
  /** @var string */
  public $duration;

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
}

class Invoice extends \Google\Collection
{
  /** @var string */
  public $budgetInvoiceGroupingId;
  /** @var BudgetSummary[] */
  public $budgetSummaries;
  /** @var string */
  public $correctedInvoiceId;
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $displayName;
  /** @var Date */
  public $dueDate;
  /** @var string */
  public $invoiceId;
  /** @var string */
  public $invoiceType;
  /** @var Date */
  public $issueDate;
  /** @var string */
  public $name;
  /** @var string */
  public $nonBudgetMicros;
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
  /** @var DateRange */
  public $serviceDateRange;
  /** @var string */
  public $subtotalAmountMicros;
  /** @var string */
  public $totalAmountMicros;
  /** @var string */
  public $totalTaxAmountMicros;
  protected $collection_key = 'replacedInvoiceIds';
  protected $budgetSummariesType = BudgetSummary::class;
  protected $budgetSummariesDataType = 'array';
  protected $dueDateType = Date::class;
  protected $dueDateDataType = '';
  protected $issueDateType = Date::class;
  protected $issueDateDataType = '';
  protected $serviceDateRangeType = DateRange::class;
  protected $serviceDateRangeDataType = '';
  /** @param string */
  public function setBudgetInvoiceGroupingId($budgetInvoiceGroupingId)
  {
    $this->budgetInvoiceGroupingId = $budgetInvoiceGroupingId;
  }
  /** @return string */
  public function getBudgetInvoiceGroupingId()
  {
    return $this->budgetInvoiceGroupingId;
  }
  /** @param BudgetSummary[] */
  public function setBudgetSummaries($budgetSummaries)
  {
    $this->budgetSummaries = $budgetSummaries;
  }
  /** @return BudgetSummary[] */
  public function getBudgetSummaries()
  {
    return $this->budgetSummaries;
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param Date */
  public function setDueDate(Date $dueDate)
  {
    $this->dueDate = $dueDate;
  }
  /** @return Date */
  public function getDueDate()
  {
    return $this->dueDate;
  }
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
  public function setInvoiceType($invoiceType)
  {
    $this->invoiceType = $invoiceType;
  }
  /** @return string */
  public function getInvoiceType()
  {
    return $this->invoiceType;
  }
  /** @param Date */
  public function setIssueDate(Date $issueDate)
  {
    $this->issueDate = $issueDate;
  }
  /** @return Date */
  public function getIssueDate()
  {
    return $this->issueDate;
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
  public function setNonBudgetMicros($nonBudgetMicros)
  {
    $this->nonBudgetMicros = $nonBudgetMicros;
  }
  /** @return string */
  public function getNonBudgetMicros()
  {
    return $this->nonBudgetMicros;
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
  /** @param DateRange */
  public function setServiceDateRange(DateRange $serviceDateRange)
  {
    $this->serviceDateRange = $serviceDateRange;
  }
  /** @return DateRange */
  public function getServiceDateRange()
  {
    return $this->serviceDateRange;
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

class KeywordAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $keyword;
  /** @var bool */
  public $negative;

  /** @param string */
  public function setKeyword($keyword)
  {
    $this->keyword = $keyword;
  }
  /** @return string */
  public function getKeyword()
  {
    return $this->keyword;
  }
  /** @param bool */
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
}

class LanguageAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $negative;
  /** @var string */
  public $targetingOptionId;

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
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class LanguageTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;

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

class LineItem extends \Google\Collection
{
  /** @var string */
  public $advertiserId;
  /** @var BiddingStrategy */
  public $bidStrategy;
  /** @var LineItemBudget */
  public $budget;
  /** @var string */
  public $campaignId;
  /** @var ConversionCountingConfig */
  public $conversionCounting;
  /** @var string[] */
  public $creativeIds;
  /** @var string */
  public $displayName;
  /** @var string */
  public $entityStatus;
  /** @var bool */
  public $excludeNewExchanges;
  /** @var LineItemFlight */
  public $flight;
  /** @var FrequencyCap */
  public $frequencyCap;
  /** @var string */
  public $insertionOrderId;
  /** @var IntegrationDetails */
  public $integrationDetails;
  /** @var string */
  public $lineItemId;
  /** @var string */
  public $lineItemType;
  /** @var MobileApp */
  public $mobileApp;
  /** @var string */
  public $name;
  /** @var Pacing */
  public $pacing;
  /** @var PartnerCost[] */
  public $partnerCosts;
  /** @var PartnerRevenueModel */
  public $partnerRevenueModel;
  /** @var string */
  public $reservationType;
  /** @var TargetingExpansionConfig */
  public $targetingExpansion;
  /** @var string */
  public $updateTime;
  /** @var string[] */
  public $warningMessages;
  /** @var YoutubeAndPartnersSettings */
  public $youtubeAndPartnersSettings;
  protected $collection_key = 'warningMessages';
  protected $bidStrategyType = BiddingStrategy::class;
  protected $bidStrategyDataType = '';
  protected $budgetType = LineItemBudget::class;
  protected $budgetDataType = '';
  protected $conversionCountingType = ConversionCountingConfig::class;
  protected $conversionCountingDataType = '';
  protected $flightType = LineItemFlight::class;
  protected $flightDataType = '';
  protected $frequencyCapType = FrequencyCap::class;
  protected $frequencyCapDataType = '';
  protected $integrationDetailsType = IntegrationDetails::class;
  protected $integrationDetailsDataType = '';
  protected $mobileAppType = MobileApp::class;
  protected $mobileAppDataType = '';
  protected $pacingType = Pacing::class;
  protected $pacingDataType = '';
  protected $partnerCostsType = PartnerCost::class;
  protected $partnerCostsDataType = 'array';
  protected $partnerRevenueModelType = PartnerRevenueModel::class;
  protected $partnerRevenueModelDataType = '';
  protected $targetingExpansionType = TargetingExpansionConfig::class;
  protected $targetingExpansionDataType = '';
  protected $youtubeAndPartnersSettingsType = YoutubeAndPartnersSettings::class;
  protected $youtubeAndPartnersSettingsDataType = '';
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
  /** @param BiddingStrategy */
  public function setBidStrategy(BiddingStrategy $bidStrategy)
  {
    $this->bidStrategy = $bidStrategy;
  }
  /** @return BiddingStrategy */
  public function getBidStrategy()
  {
    return $this->bidStrategy;
  }
  /** @param LineItemBudget */
  public function setBudget(LineItemBudget $budget)
  {
    $this->budget = $budget;
  }
  /** @return LineItemBudget */
  public function getBudget()
  {
    return $this->budget;
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
  /** @param ConversionCountingConfig */
  public function setConversionCounting(ConversionCountingConfig $conversionCounting)
  {
    $this->conversionCounting = $conversionCounting;
  }
  /** @return ConversionCountingConfig */
  public function getConversionCounting()
  {
    return $this->conversionCounting;
  }
  /** @param string[] */
  public function setCreativeIds($creativeIds)
  {
    $this->creativeIds = $creativeIds;
  }
  /** @return string[] */
  public function getCreativeIds()
  {
    return $this->creativeIds;
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
  public function setEntityStatus($entityStatus)
  {
    $this->entityStatus = $entityStatus;
  }
  /** @return string */
  public function getEntityStatus()
  {
    return $this->entityStatus;
  }
  /** @param bool */
  public function setExcludeNewExchanges($excludeNewExchanges)
  {
    $this->excludeNewExchanges = $excludeNewExchanges;
  }
  /** @return bool */
  public function getExcludeNewExchanges()
  {
    return $this->excludeNewExchanges;
  }
  /** @param LineItemFlight */
  public function setFlight(LineItemFlight $flight)
  {
    $this->flight = $flight;
  }
  /** @return LineItemFlight */
  public function getFlight()
  {
    return $this->flight;
  }
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
  /** @param string */
  public function setInsertionOrderId($insertionOrderId)
  {
    $this->insertionOrderId = $insertionOrderId;
  }
  /** @return string */
  public function getInsertionOrderId()
  {
    return $this->insertionOrderId;
  }
  /** @param IntegrationDetails */
  public function setIntegrationDetails(IntegrationDetails $integrationDetails)
  {
    $this->integrationDetails = $integrationDetails;
  }
  /** @return IntegrationDetails */
  public function getIntegrationDetails()
  {
    return $this->integrationDetails;
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
  public function setLineItemType($lineItemType)
  {
    $this->lineItemType = $lineItemType;
  }
  /** @return string */
  public function getLineItemType()
  {
    return $this->lineItemType;
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
  /** @param Pacing */
  public function setPacing(Pacing $pacing)
  {
    $this->pacing = $pacing;
  }
  /** @return Pacing */
  public function getPacing()
  {
    return $this->pacing;
  }
  /** @param PartnerCost[] */
  public function setPartnerCosts($partnerCosts)
  {
    $this->partnerCosts = $partnerCosts;
  }
  /** @return PartnerCost[] */
  public function getPartnerCosts()
  {
    return $this->partnerCosts;
  }
  /** @param PartnerRevenueModel */
  public function setPartnerRevenueModel(PartnerRevenueModel $partnerRevenueModel)
  {
    $this->partnerRevenueModel = $partnerRevenueModel;
  }
  /** @return PartnerRevenueModel */
  public function getPartnerRevenueModel()
  {
    return $this->partnerRevenueModel;
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
  /** @param TargetingExpansionConfig */
  public function setTargetingExpansion(TargetingExpansionConfig $targetingExpansion)
  {
    $this->targetingExpansion = $targetingExpansion;
  }
  /** @return TargetingExpansionConfig */
  public function getTargetingExpansion()
  {
    return $this->targetingExpansion;
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
  /** @param string[] */
  public function setWarningMessages($warningMessages)
  {
    $this->warningMessages = $warningMessages;
  }
  /** @return string[] */
  public function getWarningMessages()
  {
    return $this->warningMessages;
  }
  /** @param YoutubeAndPartnersSettings */
  public function setYoutubeAndPartnersSettings(YoutubeAndPartnersSettings $youtubeAndPartnersSettings)
  {
    $this->youtubeAndPartnersSettings = $youtubeAndPartnersSettings;
  }
  /** @return YoutubeAndPartnersSettings */
  public function getYoutubeAndPartnersSettings()
  {
    return $this->youtubeAndPartnersSettings;
  }
}

class LineItemAssignedTargetingOption extends \Google\Model
{
  /** @var AssignedTargetingOption */
  public $assignedTargetingOption;
  /** @var string */
  public $lineItemId;
  protected $assignedTargetingOptionType = AssignedTargetingOption::class;
  protected $assignedTargetingOptionDataType = '';
  /** @param AssignedTargetingOption */
  public function setAssignedTargetingOption(AssignedTargetingOption $assignedTargetingOption)
  {
    $this->assignedTargetingOption = $assignedTargetingOption;
  }
  /** @return AssignedTargetingOption */
  public function getAssignedTargetingOption()
  {
    return $this->assignedTargetingOption;
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
}

class LineItemBudget extends \Google\Model
{
  /** @var string */
  public $budgetAllocationType;
  /** @var string */
  public $budgetUnit;
  /** @var string */
  public $maxAmount;

  /** @param string */
  public function setBudgetAllocationType($budgetAllocationType)
  {
    $this->budgetAllocationType = $budgetAllocationType;
  }
  /** @return string */
  public function getBudgetAllocationType()
  {
    return $this->budgetAllocationType;
  }
  /** @param string */
  public function setBudgetUnit($budgetUnit)
  {
    $this->budgetUnit = $budgetUnit;
  }
  /** @return string */
  public function getBudgetUnit()
  {
    return $this->budgetUnit;
  }
  /** @param string */
  public function setMaxAmount($maxAmount)
  {
    $this->maxAmount = $maxAmount;
  }
  /** @return string */
  public function getMaxAmount()
  {
    return $this->maxAmount;
  }
}

class LineItemFlight extends \Google\Model
{
  /** @var DateRange */
  public $dateRange;
  /** @var string */
  public $flightDateType;
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
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
  public function setFlightDateType($flightDateType)
  {
    $this->flightDateType = $flightDateType;
  }
  /** @return string */
  public function getFlightDateType()
  {
    return $this->flightDateType;
  }
}

class ListAdvertiserAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $assignedTargetingOptions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignedTargetingOptions';
  protected $assignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $assignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setAssignedTargetingOptions($assignedTargetingOptions)
  {
    $this->assignedTargetingOptions = $assignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getAssignedTargetingOptions()
  {
    return $this->assignedTargetingOptions;
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

class ListAdvertisersResponse extends \Google\Collection
{
  /** @var Advertiser[] */
  public $advertisers;
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

class ListAssignedInventorySourcesResponse extends \Google\Collection
{
  /** @var AssignedInventorySource[] */
  public $assignedInventorySources;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignedInventorySources';
  protected $assignedInventorySourcesType = AssignedInventorySource::class;
  protected $assignedInventorySourcesDataType = 'array';
  /** @param AssignedInventorySource[] */
  public function setAssignedInventorySources($assignedInventorySources)
  {
    $this->assignedInventorySources = $assignedInventorySources;
  }
  /** @return AssignedInventorySource[] */
  public function getAssignedInventorySources()
  {
    return $this->assignedInventorySources;
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

class ListAssignedLocationsResponse extends \Google\Collection
{
  /** @var AssignedLocation[] */
  public $assignedLocations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignedLocations';
  protected $assignedLocationsType = AssignedLocation::class;
  protected $assignedLocationsDataType = 'array';
  /** @param AssignedLocation[] */
  public function setAssignedLocations($assignedLocations)
  {
    $this->assignedLocations = $assignedLocations;
  }
  /** @return AssignedLocation[] */
  public function getAssignedLocations()
  {
    return $this->assignedLocations;
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

class ListCampaignAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $assignedTargetingOptions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignedTargetingOptions';
  protected $assignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $assignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setAssignedTargetingOptions($assignedTargetingOptions)
  {
    $this->assignedTargetingOptions = $assignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getAssignedTargetingOptions()
  {
    return $this->assignedTargetingOptions;
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

class ListCampaignsResponse extends \Google\Collection
{
  /** @var Campaign[] */
  public $campaigns;
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

class ListChannelsResponse extends \Google\Collection
{
  /** @var Channel[] */
  public $channels;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'channels';
  protected $channelsType = Channel::class;
  protected $channelsDataType = 'array';
  /** @param Channel[] */
  public function setChannels($channels)
  {
    $this->channels = $channels;
  }
  /** @return Channel[] */
  public function getChannels()
  {
    return $this->channels;
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

class ListCombinedAudiencesResponse extends \Google\Collection
{
  /** @var CombinedAudience[] */
  public $combinedAudiences;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'combinedAudiences';
  protected $combinedAudiencesType = CombinedAudience::class;
  protected $combinedAudiencesDataType = 'array';
  /** @param CombinedAudience[] */
  public function setCombinedAudiences($combinedAudiences)
  {
    $this->combinedAudiences = $combinedAudiences;
  }
  /** @return CombinedAudience[] */
  public function getCombinedAudiences()
  {
    return $this->combinedAudiences;
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

class ListCreativesResponse extends \Google\Collection
{
  /** @var Creative[] */
  public $creatives;
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

class ListCustomBiddingAlgorithmsResponse extends \Google\Collection
{
  /** @var CustomBiddingAlgorithm[] */
  public $customBiddingAlgorithms;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customBiddingAlgorithms';
  protected $customBiddingAlgorithmsType = CustomBiddingAlgorithm::class;
  protected $customBiddingAlgorithmsDataType = 'array';
  /** @param CustomBiddingAlgorithm[] */
  public function setCustomBiddingAlgorithms($customBiddingAlgorithms)
  {
    $this->customBiddingAlgorithms = $customBiddingAlgorithms;
  }
  /** @return CustomBiddingAlgorithm[] */
  public function getCustomBiddingAlgorithms()
  {
    return $this->customBiddingAlgorithms;
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

class ListCustomBiddingScriptsResponse extends \Google\Collection
{
  /** @var CustomBiddingScript[] */
  public $customBiddingScripts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customBiddingScripts';
  protected $customBiddingScriptsType = CustomBiddingScript::class;
  protected $customBiddingScriptsDataType = 'array';
  /** @param CustomBiddingScript[] */
  public function setCustomBiddingScripts($customBiddingScripts)
  {
    $this->customBiddingScripts = $customBiddingScripts;
  }
  /** @return CustomBiddingScript[] */
  public function getCustomBiddingScripts()
  {
    return $this->customBiddingScripts;
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

class ListCustomListsResponse extends \Google\Collection
{
  /** @var CustomList[] */
  public $customLists;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customLists';
  protected $customListsType = CustomList::class;
  protected $customListsDataType = 'array';
  /** @param CustomList[] */
  public function setCustomLists($customLists)
  {
    $this->customLists = $customLists;
  }
  /** @return CustomList[] */
  public function getCustomLists()
  {
    return $this->customLists;
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

class ListFirstAndThirdPartyAudiencesResponse extends \Google\Collection
{
  /** @var FirstAndThirdPartyAudience[] */
  public $firstAndThirdPartyAudiences;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'firstAndThirdPartyAudiences';
  protected $firstAndThirdPartyAudiencesType = FirstAndThirdPartyAudience::class;
  protected $firstAndThirdPartyAudiencesDataType = 'array';
  /** @param FirstAndThirdPartyAudience[] */
  public function setFirstAndThirdPartyAudiences($firstAndThirdPartyAudiences)
  {
    $this->firstAndThirdPartyAudiences = $firstAndThirdPartyAudiences;
  }
  /** @return FirstAndThirdPartyAudience[] */
  public function getFirstAndThirdPartyAudiences()
  {
    return $this->firstAndThirdPartyAudiences;
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

class ListGoogleAudiencesResponse extends \Google\Collection
{
  /** @var GoogleAudience[] */
  public $googleAudiences;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'googleAudiences';
  protected $googleAudiencesType = GoogleAudience::class;
  protected $googleAudiencesDataType = 'array';
  /** @param GoogleAudience[] */
  public function setGoogleAudiences($googleAudiences)
  {
    $this->googleAudiences = $googleAudiences;
  }
  /** @return GoogleAudience[] */
  public function getGoogleAudiences()
  {
    return $this->googleAudiences;
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

class ListGuaranteedOrdersResponse extends \Google\Collection
{
  /** @var GuaranteedOrder[] */
  public $guaranteedOrders;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'guaranteedOrders';
  protected $guaranteedOrdersType = GuaranteedOrder::class;
  protected $guaranteedOrdersDataType = 'array';
  /** @param GuaranteedOrder[] */
  public function setGuaranteedOrders($guaranteedOrders)
  {
    $this->guaranteedOrders = $guaranteedOrders;
  }
  /** @return GuaranteedOrder[] */
  public function getGuaranteedOrders()
  {
    return $this->guaranteedOrders;
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

class ListInsertionOrderAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $assignedTargetingOptions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignedTargetingOptions';
  protected $assignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $assignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setAssignedTargetingOptions($assignedTargetingOptions)
  {
    $this->assignedTargetingOptions = $assignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getAssignedTargetingOptions()
  {
    return $this->assignedTargetingOptions;
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

class ListInsertionOrdersResponse extends \Google\Collection
{
  /** @var InsertionOrder[] */
  public $insertionOrders;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'insertionOrders';
  protected $insertionOrdersType = InsertionOrder::class;
  protected $insertionOrdersDataType = 'array';
  /** @param InsertionOrder[] */
  public function setInsertionOrders($insertionOrders)
  {
    $this->insertionOrders = $insertionOrders;
  }
  /** @return InsertionOrder[] */
  public function getInsertionOrders()
  {
    return $this->insertionOrders;
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

class ListInventorySourceGroupsResponse extends \Google\Collection
{
  /** @var InventorySourceGroup[] */
  public $inventorySourceGroups;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'inventorySourceGroups';
  protected $inventorySourceGroupsType = InventorySourceGroup::class;
  protected $inventorySourceGroupsDataType = 'array';
  /** @param InventorySourceGroup[] */
  public function setInventorySourceGroups($inventorySourceGroups)
  {
    $this->inventorySourceGroups = $inventorySourceGroups;
  }
  /** @return InventorySourceGroup[] */
  public function getInventorySourceGroups()
  {
    return $this->inventorySourceGroups;
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

class ListInventorySourcesResponse extends \Google\Collection
{
  /** @var InventorySource[] */
  public $inventorySources;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'inventorySources';
  protected $inventorySourcesType = InventorySource::class;
  protected $inventorySourcesDataType = 'array';
  /** @param InventorySource[] */
  public function setInventorySources($inventorySources)
  {
    $this->inventorySources = $inventorySources;
  }
  /** @return InventorySource[] */
  public function getInventorySources()
  {
    return $this->inventorySources;
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

class ListInvoicesResponse extends \Google\Collection
{
  /** @var Invoice[] */
  public $invoices;
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

class ListLineItemAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $assignedTargetingOptions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignedTargetingOptions';
  protected $assignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $assignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setAssignedTargetingOptions($assignedTargetingOptions)
  {
    $this->assignedTargetingOptions = $assignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getAssignedTargetingOptions()
  {
    return $this->assignedTargetingOptions;
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

class ListLineItemsResponse extends \Google\Collection
{
  /** @var LineItem[] */
  public $lineItems;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'lineItems';
  protected $lineItemsType = LineItem::class;
  protected $lineItemsDataType = 'array';
  /** @param LineItem[] */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /** @return LineItem[] */
  public function getLineItems()
  {
    return $this->lineItems;
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

class ListLocationListsResponse extends \Google\Collection
{
  /** @var LocationList[] */
  public $locationLists;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locationLists';
  protected $locationListsType = LocationList::class;
  protected $locationListsDataType = 'array';
  /** @param LocationList[] */
  public function setLocationLists($locationLists)
  {
    $this->locationLists = $locationLists;
  }
  /** @return LocationList[] */
  public function getLocationLists()
  {
    return $this->locationLists;
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

class ListManualTriggersResponse extends \Google\Collection
{
  /** @var ManualTrigger[] */
  public $manualTriggers;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'manualTriggers';
  protected $manualTriggersType = ManualTrigger::class;
  protected $manualTriggersDataType = 'array';
  /** @param ManualTrigger[] */
  public function setManualTriggers($manualTriggers)
  {
    $this->manualTriggers = $manualTriggers;
  }
  /** @return ManualTrigger[] */
  public function getManualTriggers()
  {
    return $this->manualTriggers;
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

class ListNegativeKeywordListsResponse extends \Google\Collection
{
  /** @var NegativeKeywordList[] */
  public $negativeKeywordLists;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'negativeKeywordLists';
  protected $negativeKeywordListsType = NegativeKeywordList::class;
  protected $negativeKeywordListsDataType = 'array';
  /** @param NegativeKeywordList[] */
  public function setNegativeKeywordLists($negativeKeywordLists)
  {
    $this->negativeKeywordLists = $negativeKeywordLists;
  }
  /** @return NegativeKeywordList[] */
  public function getNegativeKeywordLists()
  {
    return $this->negativeKeywordLists;
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

class ListNegativeKeywordsResponse extends \Google\Collection
{
  /** @var NegativeKeyword[] */
  public $negativeKeywords;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'negativeKeywords';
  protected $negativeKeywordsType = NegativeKeyword::class;
  protected $negativeKeywordsDataType = 'array';
  /** @param NegativeKeyword[] */
  public function setNegativeKeywords($negativeKeywords)
  {
    $this->negativeKeywords = $negativeKeywords;
  }
  /** @return NegativeKeyword[] */
  public function getNegativeKeywords()
  {
    return $this->negativeKeywords;
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

class ListPartnerAssignedTargetingOptionsResponse extends \Google\Collection
{
  /** @var AssignedTargetingOption[] */
  public $assignedTargetingOptions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'assignedTargetingOptions';
  protected $assignedTargetingOptionsType = AssignedTargetingOption::class;
  protected $assignedTargetingOptionsDataType = 'array';
  /** @param AssignedTargetingOption[] */
  public function setAssignedTargetingOptions($assignedTargetingOptions)
  {
    $this->assignedTargetingOptions = $assignedTargetingOptions;
  }
  /** @return AssignedTargetingOption[] */
  public function getAssignedTargetingOptions()
  {
    return $this->assignedTargetingOptions;
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

class ListPartnersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Partner[] */
  public $partners;
  protected $collection_key = 'partners';
  protected $partnersType = Partner::class;
  protected $partnersDataType = 'array';
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
  /** @param Partner[] */
  public function setPartners($partners)
  {
    $this->partners = $partners;
  }
  /** @return Partner[] */
  public function getPartners()
  {
    return $this->partners;
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

class ListTargetingOptionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TargetingOption[] */
  public $targetingOptions;
  protected $collection_key = 'targetingOptions';
  protected $targetingOptionsType = TargetingOption::class;
  protected $targetingOptionsDataType = 'array';
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
  /** @param TargetingOption[] */
  public function setTargetingOptions($targetingOptions)
  {
    $this->targetingOptions = $targetingOptions;
  }
  /** @return TargetingOption[] */
  public function getTargetingOptions()
  {
    return $this->targetingOptions;
  }
}

class ListUsersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var User[] */
  public $users;
  protected $collection_key = 'users';
  protected $usersType = User::class;
  protected $usersDataType = 'array';
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
  /** @param User[] */
  public function setUsers($users)
  {
    $this->users = $users;
  }
  /** @return User[] */
  public function getUsers()
  {
    return $this->users;
  }
}

class LocationList extends \Google\Model
{
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $locationListId;
  /** @var string */
  public $locationType;
  /** @var string */
  public $name;

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
  public function setLocationListId($locationListId)
  {
    $this->locationListId = $locationListId;
  }
  /** @return string */
  public function getLocationListId()
  {
    return $this->locationListId;
  }
  /** @param string */
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /** @return string */
  public function getLocationType()
  {
    return $this->locationType;
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

class LookbackWindow extends \Google\Model
{
  /** @var int */
  public $clickDays;
  /** @var int */
  public $impressionDays;

  /** @param int */
  public function setClickDays($clickDays)
  {
    $this->clickDays = $clickDays;
  }
  /** @return int */
  public function getClickDays()
  {
    return $this->clickDays;
  }
  /** @param int */
  public function setImpressionDays($impressionDays)
  {
    $this->impressionDays = $impressionDays;
  }
  /** @return int */
  public function getImpressionDays()
  {
    return $this->impressionDays;
  }
}

class LookupInvoiceCurrencyResponse extends \Google\Model
{
  /** @var string */
  public $currencyCode;

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

class ManualTrigger extends \Google\Model
{
  /** @var string */
  public $activationDurationMinutes;
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $latestActivationTime;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $triggerId;

  /** @param string */
  public function setActivationDurationMinutes($activationDurationMinutes)
  {
    $this->activationDurationMinutes = $activationDurationMinutes;
  }
  /** @return string */
  public function getActivationDurationMinutes()
  {
    return $this->activationDurationMinutes;
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
  public function setLatestActivationTime($latestActivationTime)
  {
    $this->latestActivationTime = $latestActivationTime;
  }
  /** @return string */
  public function getLatestActivationTime()
  {
    return $this->latestActivationTime;
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
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
}

class MaximizeSpendBidStrategy extends \Google\Model
{
  /** @var string */
  public $customBiddingAlgorithmId;
  /** @var string */
  public $maxAverageCpmBidAmountMicros;
  /** @var string */
  public $performanceGoalType;
  /** @var bool */
  public $raiseBidForDeals;

  /** @param string */
  public function setCustomBiddingAlgorithmId($customBiddingAlgorithmId)
  {
    $this->customBiddingAlgorithmId = $customBiddingAlgorithmId;
  }
  /** @return string */
  public function getCustomBiddingAlgorithmId()
  {
    return $this->customBiddingAlgorithmId;
  }
  /** @param string */
  public function setMaxAverageCpmBidAmountMicros($maxAverageCpmBidAmountMicros)
  {
    $this->maxAverageCpmBidAmountMicros = $maxAverageCpmBidAmountMicros;
  }
  /** @return string */
  public function getMaxAverageCpmBidAmountMicros()
  {
    return $this->maxAverageCpmBidAmountMicros;
  }
  /** @param string */
  public function setPerformanceGoalType($performanceGoalType)
  {
    $this->performanceGoalType = $performanceGoalType;
  }
  /** @return string */
  public function getPerformanceGoalType()
  {
    return $this->performanceGoalType;
  }
  /** @param bool */
  public function setRaiseBidForDeals($raiseBidForDeals)
  {
    $this->raiseBidForDeals = $raiseBidForDeals;
  }
  /** @return bool */
  public function getRaiseBidForDeals()
  {
    return $this->raiseBidForDeals;
  }
}

class MeasurementConfig extends \Google\Model
{
  /** @var bool */
  public $dv360ToCmCostReportingEnabled;
  /** @var bool */
  public $dv360ToCmDataSharingEnabled;

  /** @param bool */
  public function setDv360ToCmCostReportingEnabled($dv360ToCmCostReportingEnabled)
  {
    $this->dv360ToCmCostReportingEnabled = $dv360ToCmCostReportingEnabled;
  }
  /** @return bool */
  public function getDv360ToCmCostReportingEnabled()
  {
    return $this->dv360ToCmCostReportingEnabled;
  }
  /** @param bool */
  public function setDv360ToCmDataSharingEnabled($dv360ToCmDataSharingEnabled)
  {
    $this->dv360ToCmDataSharingEnabled = $dv360ToCmDataSharingEnabled;
  }
  /** @return bool */
  public function getDv360ToCmDataSharingEnabled()
  {
    return $this->dv360ToCmDataSharingEnabled;
  }
}

class MobileApp extends \Google\Model
{
  /** @var string */
  public $appId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $platform;
  /** @var string */
  public $publisher;

  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
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
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  /** @return string */
  public function getPlatform()
  {
    return $this->platform;
  }
  /** @param string */
  public function setPublisher($publisher)
  {
    $this->publisher = $publisher;
  }
  /** @return string */
  public function getPublisher()
  {
    return $this->publisher;
  }
}

class MobileDeviceIdList extends \Google\Collection
{
  /** @var string[] */
  public $mobileDeviceIds;
  protected $collection_key = 'mobileDeviceIds';
  /** @param string[] */
  public function setMobileDeviceIds($mobileDeviceIds)
  {
    $this->mobileDeviceIds = $mobileDeviceIds;
  }
  /** @return string[] */
  public function getMobileDeviceIds()
  {
    return $this->mobileDeviceIds;
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

class NativeContentPositionAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $contentPosition;

  /** @param string */
  public function setContentPosition($contentPosition)
  {
    $this->contentPosition = $contentPosition;
  }
  /** @return string */
  public function getContentPosition()
  {
    return $this->contentPosition;
  }
}

class NativeContentPositionTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $contentPosition;

  /** @param string */
  public function setContentPosition($contentPosition)
  {
    $this->contentPosition = $contentPosition;
  }
  /** @return string */
  public function getContentPosition()
  {
    return $this->contentPosition;
  }
}

class NegativeKeyword extends \Google\Model
{
  /** @var string */
  public $keywordValue;
  /** @var string */
  public $name;

  /** @param string */
  public function setKeywordValue($keywordValue)
  {
    $this->keywordValue = $keywordValue;
  }
  /** @return string */
  public function getKeywordValue()
  {
    return $this->keywordValue;
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

class NegativeKeywordList extends \Google\Model
{
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $negativeKeywordListId;
  /** @var string */
  public $targetedLineItemCount;

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
  public function setNegativeKeywordListId($negativeKeywordListId)
  {
    $this->negativeKeywordListId = $negativeKeywordListId;
  }
  /** @return string */
  public function getNegativeKeywordListId()
  {
    return $this->negativeKeywordListId;
  }
  /** @param string */
  public function setTargetedLineItemCount($targetedLineItemCount)
  {
    $this->targetedLineItemCount = $targetedLineItemCount;
  }
  /** @return string */
  public function getTargetedLineItemCount()
  {
    return $this->targetedLineItemCount;
  }
}

class NegativeKeywordListAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $negativeKeywordListId;

  /** @param string */
  public function setNegativeKeywordListId($negativeKeywordListId)
  {
    $this->negativeKeywordListId = $negativeKeywordListId;
  }
  /** @return string */
  public function getNegativeKeywordListId()
  {
    return $this->negativeKeywordListId;
  }
}

class ObaIcon extends \Google\Model
{
  /** @var string */
  public $clickTrackingUrl;
  /** @var Dimensions */
  public $dimensions;
  /** @var string */
  public $landingPageUrl;
  /** @var string */
  public $position;
  /** @var string */
  public $program;
  /** @var string */
  public $resourceMimeType;
  /** @var string */
  public $resourceUrl;
  /** @var string */
  public $viewTrackingUrl;
  protected $dimensionsType = Dimensions::class;
  protected $dimensionsDataType = '';
  /** @param string */
  public function setClickTrackingUrl($clickTrackingUrl)
  {
    $this->clickTrackingUrl = $clickTrackingUrl;
  }
  /** @return string */
  public function getClickTrackingUrl()
  {
    return $this->clickTrackingUrl;
  }
  /** @param Dimensions */
  public function setDimensions(Dimensions $dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimensions */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setLandingPageUrl($landingPageUrl)
  {
    $this->landingPageUrl = $landingPageUrl;
  }
  /** @return string */
  public function getLandingPageUrl()
  {
    return $this->landingPageUrl;
  }
  /** @param string */
  public function setPosition($position)
  {
    $this->position = $position;
  }
  /** @return string */
  public function getPosition()
  {
    return $this->position;
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
  public function setResourceMimeType($resourceMimeType)
  {
    $this->resourceMimeType = $resourceMimeType;
  }
  /** @return string */
  public function getResourceMimeType()
  {
    return $this->resourceMimeType;
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
  /** @param string */
  public function setViewTrackingUrl($viewTrackingUrl)
  {
    $this->viewTrackingUrl = $viewTrackingUrl;
  }
  /** @return string */
  public function getViewTrackingUrl()
  {
    return $this->viewTrackingUrl;
  }
}

class OmidAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $omid;

  /** @param string */
  public function setOmid($omid)
  {
    $this->omid = $omid;
  }
  /** @return string */
  public function getOmid()
  {
    return $this->omid;
  }
}

class OmidTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $omid;

  /** @param string */
  public function setOmid($omid)
  {
    $this->omid = $omid;
  }
  /** @return string */
  public function getOmid()
  {
    return $this->omid;
  }
}

class OnScreenPositionAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $adType;
  /** @var string */
  public $onScreenPosition;
  /** @var string */
  public $targetingOptionId;

  /** @param string */
  public function setAdType($adType)
  {
    $this->adType = $adType;
  }
  /** @return string */
  public function getAdType()
  {
    return $this->adType;
  }
  /** @param string */
  public function setOnScreenPosition($onScreenPosition)
  {
    $this->onScreenPosition = $onScreenPosition;
  }
  /** @return string */
  public function getOnScreenPosition()
  {
    return $this->onScreenPosition;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class OnScreenPositionTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $onScreenPosition;

  /** @param string */
  public function setOnScreenPosition($onScreenPosition)
  {
    $this->onScreenPosition = $onScreenPosition;
  }
  /** @return string */
  public function getOnScreenPosition()
  {
    return $this->onScreenPosition;
  }
}

class OperatingSystemAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $negative;
  /** @var string */
  public $targetingOptionId;

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
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class OperatingSystemTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;

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

class Operation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var Status */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = Status::class;
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
  /** @param Status */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /** @return Status */
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

class Pacing extends \Google\Model
{
  /** @var string */
  public $dailyMaxImpressions;
  /** @var string */
  public $dailyMaxMicros;
  /** @var string */
  public $pacingPeriod;
  /** @var string */
  public $pacingType;

  /** @param string */
  public function setDailyMaxImpressions($dailyMaxImpressions)
  {
    $this->dailyMaxImpressions = $dailyMaxImpressions;
  }
  /** @return string */
  public function getDailyMaxImpressions()
  {
    return $this->dailyMaxImpressions;
  }
  /** @param string */
  public function setDailyMaxMicros($dailyMaxMicros)
  {
    $this->dailyMaxMicros = $dailyMaxMicros;
  }
  /** @return string */
  public function getDailyMaxMicros()
  {
    return $this->dailyMaxMicros;
  }
  /** @param string */
  public function setPacingPeriod($pacingPeriod)
  {
    $this->pacingPeriod = $pacingPeriod;
  }
  /** @return string */
  public function getPacingPeriod()
  {
    return $this->pacingPeriod;
  }
  /** @param string */
  public function setPacingType($pacingType)
  {
    $this->pacingType = $pacingType;
  }
  /** @return string */
  public function getPacingType()
  {
    return $this->pacingType;
  }
}

class ParentEntityFilter extends \Google\Collection
{
  /** @var string[] */
  public $fileType;
  /** @var string[] */
  public $filterIds;
  /** @var string */
  public $filterType;
  protected $collection_key = 'filterIds';
  /** @param string[] */
  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }
  /** @return string[] */
  public function getFileType()
  {
    return $this->fileType;
  }
  /** @param string[] */
  public function setFilterIds($filterIds)
  {
    $this->filterIds = $filterIds;
  }
  /** @return string[] */
  public function getFilterIds()
  {
    return $this->filterIds;
  }
  /** @param string */
  public function setFilterType($filterType)
  {
    $this->filterType = $filterType;
  }
  /** @return string */
  public function getFilterType()
  {
    return $this->filterType;
  }
}

class ParentalStatusAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $parentalStatus;

  /** @param string */
  public function setParentalStatus($parentalStatus)
  {
    $this->parentalStatus = $parentalStatus;
  }
  /** @return string */
  public function getParentalStatus()
  {
    return $this->parentalStatus;
  }
}

class ParentalStatusTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $parentalStatus;

  /** @param string */
  public function setParentalStatus($parentalStatus)
  {
    $this->parentalStatus = $parentalStatus;
  }
  /** @return string */
  public function getParentalStatus()
  {
    return $this->parentalStatus;
  }
}

class Partner extends \Google\Model
{
  /** @var PartnerAdServerConfig */
  public $adServerConfig;
  /** @var PartnerDataAccessConfig */
  public $dataAccessConfig;
  /** @var string */
  public $displayName;
  /** @var string */
  public $entityStatus;
  /** @var ExchangeConfig */
  public $exchangeConfig;
  /** @var PartnerGeneralConfig */
  public $generalConfig;
  /** @var string */
  public $name;
  /** @var string */
  public $partnerId;
  /** @var string */
  public $updateTime;
  protected $adServerConfigType = PartnerAdServerConfig::class;
  protected $adServerConfigDataType = '';
  protected $dataAccessConfigType = PartnerDataAccessConfig::class;
  protected $dataAccessConfigDataType = '';
  protected $exchangeConfigType = ExchangeConfig::class;
  protected $exchangeConfigDataType = '';
  protected $generalConfigType = PartnerGeneralConfig::class;
  protected $generalConfigDataType = '';
  /** @param PartnerAdServerConfig */
  public function setAdServerConfig(PartnerAdServerConfig $adServerConfig)
  {
    $this->adServerConfig = $adServerConfig;
  }
  /** @return PartnerAdServerConfig */
  public function getAdServerConfig()
  {
    return $this->adServerConfig;
  }
  /** @param PartnerDataAccessConfig */
  public function setDataAccessConfig(PartnerDataAccessConfig $dataAccessConfig)
  {
    $this->dataAccessConfig = $dataAccessConfig;
  }
  /** @return PartnerDataAccessConfig */
  public function getDataAccessConfig()
  {
    return $this->dataAccessConfig;
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
  public function setEntityStatus($entityStatus)
  {
    $this->entityStatus = $entityStatus;
  }
  /** @return string */
  public function getEntityStatus()
  {
    return $this->entityStatus;
  }
  /** @param ExchangeConfig */
  public function setExchangeConfig(ExchangeConfig $exchangeConfig)
  {
    $this->exchangeConfig = $exchangeConfig;
  }
  /** @return ExchangeConfig */
  public function getExchangeConfig()
  {
    return $this->exchangeConfig;
  }
  /** @param PartnerGeneralConfig */
  public function setGeneralConfig(PartnerGeneralConfig $generalConfig)
  {
    $this->generalConfig = $generalConfig;
  }
  /** @return PartnerGeneralConfig */
  public function getGeneralConfig()
  {
    return $this->generalConfig;
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
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
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

class PartnerAdServerConfig extends \Google\Model
{
  /** @var MeasurementConfig */
  public $measurementConfig;
  protected $measurementConfigType = MeasurementConfig::class;
  protected $measurementConfigDataType = '';
  /** @param MeasurementConfig */
  public function setMeasurementConfig(MeasurementConfig $measurementConfig)
  {
    $this->measurementConfig = $measurementConfig;
  }
  /** @return MeasurementConfig */
  public function getMeasurementConfig()
  {
    return $this->measurementConfig;
  }
}

class PartnerCost extends \Google\Model
{
  /** @var string */
  public $costType;
  /** @var string */
  public $feeAmount;
  /** @var string */
  public $feePercentageMillis;
  /** @var string */
  public $feeType;
  /** @var string */
  public $invoiceType;

  /** @param string */
  public function setCostType($costType)
  {
    $this->costType = $costType;
  }
  /** @return string */
  public function getCostType()
  {
    return $this->costType;
  }
  /** @param string */
  public function setFeeAmount($feeAmount)
  {
    $this->feeAmount = $feeAmount;
  }
  /** @return string */
  public function getFeeAmount()
  {
    return $this->feeAmount;
  }
  /** @param string */
  public function setFeePercentageMillis($feePercentageMillis)
  {
    $this->feePercentageMillis = $feePercentageMillis;
  }
  /** @return string */
  public function getFeePercentageMillis()
  {
    return $this->feePercentageMillis;
  }
  /** @param string */
  public function setFeeType($feeType)
  {
    $this->feeType = $feeType;
  }
  /** @return string */
  public function getFeeType()
  {
    return $this->feeType;
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
}

class PartnerDataAccessConfig extends \Google\Model
{
  /** @var SdfConfig */
  public $sdfConfig;
  protected $sdfConfigType = SdfConfig::class;
  protected $sdfConfigDataType = '';
  /** @param SdfConfig */
  public function setSdfConfig(SdfConfig $sdfConfig)
  {
    $this->sdfConfig = $sdfConfig;
  }
  /** @return SdfConfig */
  public function getSdfConfig()
  {
    return $this->sdfConfig;
  }
}

class PartnerGeneralConfig extends \Google\Model
{
  /** @var string */
  public $currencyCode;
  /** @var string */
  public $timeZone;

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

class PartnerRevenueModel extends \Google\Model
{
  /** @var string */
  public $markupAmount;
  /** @var string */
  public $markupType;

  /** @param string */
  public function setMarkupAmount($markupAmount)
  {
    $this->markupAmount = $markupAmount;
  }
  /** @return string */
  public function getMarkupAmount()
  {
    return $this->markupAmount;
  }
  /** @param string */
  public function setMarkupType($markupType)
  {
    $this->markupType = $markupType;
  }
  /** @return string */
  public function getMarkupType()
  {
    return $this->markupType;
  }
}

class PerformanceGoal extends \Google\Model
{
  /** @var string */
  public $performanceGoalAmountMicros;
  /** @var string */
  public $performanceGoalPercentageMicros;
  /** @var string */
  public $performanceGoalString;
  /** @var string */
  public $performanceGoalType;

  /** @param string */
  public function setPerformanceGoalAmountMicros($performanceGoalAmountMicros)
  {
    $this->performanceGoalAmountMicros = $performanceGoalAmountMicros;
  }
  /** @return string */
  public function getPerformanceGoalAmountMicros()
  {
    return $this->performanceGoalAmountMicros;
  }
  /** @param string */
  public function setPerformanceGoalPercentageMicros($performanceGoalPercentageMicros)
  {
    $this->performanceGoalPercentageMicros = $performanceGoalPercentageMicros;
  }
  /** @return string */
  public function getPerformanceGoalPercentageMicros()
  {
    return $this->performanceGoalPercentageMicros;
  }
  /** @param string */
  public function setPerformanceGoalString($performanceGoalString)
  {
    $this->performanceGoalString = $performanceGoalString;
  }
  /** @return string */
  public function getPerformanceGoalString()
  {
    return $this->performanceGoalString;
  }
  /** @param string */
  public function setPerformanceGoalType($performanceGoalType)
  {
    $this->performanceGoalType = $performanceGoalType;
  }
  /** @return string */
  public function getPerformanceGoalType()
  {
    return $this->performanceGoalType;
  }
}

class PerformanceGoalBidStrategy extends \Google\Model
{
  /** @var string */
  public $customBiddingAlgorithmId;
  /** @var string */
  public $maxAverageCpmBidAmountMicros;
  /** @var string */
  public $performanceGoalAmountMicros;
  /** @var string */
  public $performanceGoalType;

  /** @param string */
  public function setCustomBiddingAlgorithmId($customBiddingAlgorithmId)
  {
    $this->customBiddingAlgorithmId = $customBiddingAlgorithmId;
  }
  /** @return string */
  public function getCustomBiddingAlgorithmId()
  {
    return $this->customBiddingAlgorithmId;
  }
  /** @param string */
  public function setMaxAverageCpmBidAmountMicros($maxAverageCpmBidAmountMicros)
  {
    $this->maxAverageCpmBidAmountMicros = $maxAverageCpmBidAmountMicros;
  }
  /** @return string */
  public function getMaxAverageCpmBidAmountMicros()
  {
    return $this->maxAverageCpmBidAmountMicros;
  }
  /** @param string */
  public function setPerformanceGoalAmountMicros($performanceGoalAmountMicros)
  {
    $this->performanceGoalAmountMicros = $performanceGoalAmountMicros;
  }
  /** @return string */
  public function getPerformanceGoalAmountMicros()
  {
    return $this->performanceGoalAmountMicros;
  }
  /** @param string */
  public function setPerformanceGoalType($performanceGoalType)
  {
    $this->performanceGoalType = $performanceGoalType;
  }
  /** @return string */
  public function getPerformanceGoalType()
  {
    return $this->performanceGoalType;
  }
}

class PoiAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  public $latitude;
  public $longitude;
  public $proximityRadiusAmount;
  /** @var string */
  public $proximityRadiusUnit;
  /** @var string */
  public $targetingOptionId;

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
  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
  public function setProximityRadiusAmount($proximityRadiusAmount)
  {
    $this->proximityRadiusAmount = $proximityRadiusAmount;
  }
  public function getProximityRadiusAmount()
  {
    return $this->proximityRadiusAmount;
  }
  /** @param string */
  public function setProximityRadiusUnit($proximityRadiusUnit)
  {
    $this->proximityRadiusUnit = $proximityRadiusUnit;
  }
  /** @return string */
  public function getProximityRadiusUnit()
  {
    return $this->proximityRadiusUnit;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class PoiSearchTerms extends \Google\Model
{
  /** @var string */
  public $poiQuery;

  /** @param string */
  public function setPoiQuery($poiQuery)
  {
    $this->poiQuery = $poiQuery;
  }
  /** @return string */
  public function getPoiQuery()
  {
    return $this->poiQuery;
  }
}

class PoiTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;
  public $latitude;
  public $longitude;

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
  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
}

class PrismaConfig extends \Google\Model
{
  /** @var PrismaCpeCode */
  public $prismaCpeCode;
  /** @var string */
  public $prismaType;
  /** @var string */
  public $supplier;
  protected $prismaCpeCodeType = PrismaCpeCode::class;
  protected $prismaCpeCodeDataType = '';
  /** @param PrismaCpeCode */
  public function setPrismaCpeCode(PrismaCpeCode $prismaCpeCode)
  {
    $this->prismaCpeCode = $prismaCpeCode;
  }
  /** @return PrismaCpeCode */
  public function getPrismaCpeCode()
  {
    return $this->prismaCpeCode;
  }
  /** @param string */
  public function setPrismaType($prismaType)
  {
    $this->prismaType = $prismaType;
  }
  /** @return string */
  public function getPrismaType()
  {
    return $this->prismaType;
  }
  /** @param string */
  public function setSupplier($supplier)
  {
    $this->supplier = $supplier;
  }
  /** @return string */
  public function getSupplier()
  {
    return $this->supplier;
  }
}

class PrismaCpeCode extends \Google\Model
{
  /** @var string */
  public $prismaClientCode;
  /** @var string */
  public $prismaEstimateCode;
  /** @var string */
  public $prismaProductCode;

  /** @param string */
  public function setPrismaClientCode($prismaClientCode)
  {
    $this->prismaClientCode = $prismaClientCode;
  }
  /** @return string */
  public function getPrismaClientCode()
  {
    return $this->prismaClientCode;
  }
  /** @param string */
  public function setPrismaEstimateCode($prismaEstimateCode)
  {
    $this->prismaEstimateCode = $prismaEstimateCode;
  }
  /** @return string */
  public function getPrismaEstimateCode()
  {
    return $this->prismaEstimateCode;
  }
  /** @param string */
  public function setPrismaProductCode($prismaProductCode)
  {
    $this->prismaProductCode = $prismaProductCode;
  }
  /** @return string */
  public function getPrismaProductCode()
  {
    return $this->prismaProductCode;
  }
}

class ProximityLocationListAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $proximityLocationListId;
  public $proximityRadius;
  /** @var string */
  public $proximityRadiusUnit;

  /** @param string */
  public function setProximityLocationListId($proximityLocationListId)
  {
    $this->proximityLocationListId = $proximityLocationListId;
  }
  /** @return string */
  public function getProximityLocationListId()
  {
    return $this->proximityLocationListId;
  }
  public function setProximityRadius($proximityRadius)
  {
    $this->proximityRadius = $proximityRadius;
  }
  public function getProximityRadius()
  {
    return $this->proximityRadius;
  }
  /** @param string */
  public function setProximityRadiusUnit($proximityRadiusUnit)
  {
    $this->proximityRadiusUnit = $proximityRadiusUnit;
  }
  /** @return string */
  public function getProximityRadiusUnit()
  {
    return $this->proximityRadiusUnit;
  }
}

class PublisherReviewStatus extends \Google\Model
{
  /** @var string */
  public $publisherName;
  /** @var string */
  public $status;

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

class RateDetails extends \Google\Model
{
  /** @var string */
  public $inventorySourceRateType;
  /** @var Money */
  public $minimumSpend;
  /** @var Money */
  public $rate;
  /** @var string */
  public $unitsPurchased;
  protected $minimumSpendType = Money::class;
  protected $minimumSpendDataType = '';
  protected $rateType = Money::class;
  protected $rateDataType = '';
  /** @param string */
  public function setInventorySourceRateType($inventorySourceRateType)
  {
    $this->inventorySourceRateType = $inventorySourceRateType;
  }
  /** @return string */
  public function getInventorySourceRateType()
  {
    return $this->inventorySourceRateType;
  }
  /** @param Money */
  public function setMinimumSpend(Money $minimumSpend)
  {
    $this->minimumSpend = $minimumSpend;
  }
  /** @return Money */
  public function getMinimumSpend()
  {
    return $this->minimumSpend;
  }
  /** @param Money */
  public function setRate(Money $rate)
  {
    $this->rate = $rate;
  }
  /** @return Money */
  public function getRate()
  {
    return $this->rate;
  }
  /** @param string */
  public function setUnitsPurchased($unitsPurchased)
  {
    $this->unitsPurchased = $unitsPurchased;
  }
  /** @return string */
  public function getUnitsPurchased()
  {
    return $this->unitsPurchased;
  }
}

class RegionalLocationListAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var bool */
  public $negative;
  /** @var string */
  public $regionalLocationListId;

  /** @param bool */
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
  }
  /** @param string */
  public function setRegionalLocationListId($regionalLocationListId)
  {
    $this->regionalLocationListId = $regionalLocationListId;
  }
  /** @return string */
  public function getRegionalLocationListId()
  {
    return $this->regionalLocationListId;
  }
}

class ReplaceNegativeKeywordsRequest extends \Google\Collection
{
  /** @var NegativeKeyword[] */
  public $newNegativeKeywords;
  protected $collection_key = 'newNegativeKeywords';
  protected $newNegativeKeywordsType = NegativeKeyword::class;
  protected $newNegativeKeywordsDataType = 'array';
  /** @param NegativeKeyword[] */
  public function setNewNegativeKeywords($newNegativeKeywords)
  {
    $this->newNegativeKeywords = $newNegativeKeywords;
  }
  /** @return NegativeKeyword[] */
  public function getNewNegativeKeywords()
  {
    return $this->newNegativeKeywords;
  }
}

class ReplaceNegativeKeywordsResponse extends \Google\Collection
{
  /** @var NegativeKeyword[] */
  public $negativeKeywords;
  protected $collection_key = 'negativeKeywords';
  protected $negativeKeywordsType = NegativeKeyword::class;
  protected $negativeKeywordsDataType = 'array';
  /** @param NegativeKeyword[] */
  public function setNegativeKeywords($negativeKeywords)
  {
    $this->negativeKeywords = $negativeKeywords;
  }
  /** @return NegativeKeyword[] */
  public function getNegativeKeywords()
  {
    return $this->negativeKeywords;
  }
}

class ReplaceSitesRequest extends \Google\Collection
{
  /** @var string */
  public $advertiserId;
  /** @var Site[] */
  public $newSites;
  /** @var string */
  public $partnerId;
  protected $collection_key = 'newSites';
  protected $newSitesType = Site::class;
  protected $newSitesDataType = 'array';
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
  /** @param Site[] */
  public function setNewSites($newSites)
  {
    $this->newSites = $newSites;
  }
  /** @return Site[] */
  public function getNewSites()
  {
    return $this->newSites;
  }
  /** @param string */
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  /** @return string */
  public function getPartnerId()
  {
    return $this->partnerId;
  }
}

class ReplaceSitesResponse extends \Google\Collection
{
  /** @var Site[] */
  public $sites;
  protected $collection_key = 'sites';
  protected $sitesType = Site::class;
  protected $sitesDataType = 'array';
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

class ReviewStatusInfo extends \Google\Collection
{
  /** @var string */
  public $approvalStatus;
  /** @var string */
  public $contentAndPolicyReviewStatus;
  /** @var string */
  public $creativeAndLandingPageReviewStatus;
  /** @var ExchangeReviewStatus[] */
  public $exchangeReviewStatuses;
  /** @var PublisherReviewStatus[] */
  public $publisherReviewStatuses;
  protected $collection_key = 'publisherReviewStatuses';
  protected $exchangeReviewStatusesType = ExchangeReviewStatus::class;
  protected $exchangeReviewStatusesDataType = 'array';
  protected $publisherReviewStatusesType = PublisherReviewStatus::class;
  protected $publisherReviewStatusesDataType = 'array';
  /** @param string */
  public function setApprovalStatus($approvalStatus)
  {
    $this->approvalStatus = $approvalStatus;
  }
  /** @return string */
  public function getApprovalStatus()
  {
    return $this->approvalStatus;
  }
  /** @param string */
  public function setContentAndPolicyReviewStatus($contentAndPolicyReviewStatus)
  {
    $this->contentAndPolicyReviewStatus = $contentAndPolicyReviewStatus;
  }
  /** @return string */
  public function getContentAndPolicyReviewStatus()
  {
    return $this->contentAndPolicyReviewStatus;
  }
  /** @param string */
  public function setCreativeAndLandingPageReviewStatus($creativeAndLandingPageReviewStatus)
  {
    $this->creativeAndLandingPageReviewStatus = $creativeAndLandingPageReviewStatus;
  }
  /** @return string */
  public function getCreativeAndLandingPageReviewStatus()
  {
    return $this->creativeAndLandingPageReviewStatus;
  }
  /** @param ExchangeReviewStatus[] */
  public function setExchangeReviewStatuses($exchangeReviewStatuses)
  {
    $this->exchangeReviewStatuses = $exchangeReviewStatuses;
  }
  /** @return ExchangeReviewStatus[] */
  public function getExchangeReviewStatuses()
  {
    return $this->exchangeReviewStatuses;
  }
  /** @param PublisherReviewStatus[] */
  public function setPublisherReviewStatuses($publisherReviewStatuses)
  {
    $this->publisherReviewStatuses = $publisherReviewStatuses;
  }
  /** @return PublisherReviewStatus[] */
  public function getPublisherReviewStatuses()
  {
    return $this->publisherReviewStatuses;
  }
}

class ScriptError extends \Google\Model
{
  /** @var string */
  public $column;
  /** @var string */
  public $errorCode;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $line;

  /** @param string */
  public function setColumn($column)
  {
    $this->column = $column;
  }
  /** @return string */
  public function getColumn()
  {
    return $this->column;
  }
  /** @param string */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return string */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param string */
  public function setLine($line)
  {
    $this->line = $line;
  }
  /** @return string */
  public function getLine()
  {
    return $this->line;
  }
}

class SdfConfig extends \Google\Model
{
  /** @var string */
  public $adminEmail;
  /** @var string */
  public $version;

  /** @param string */
  public function setAdminEmail($adminEmail)
  {
    $this->adminEmail = $adminEmail;
  }
  /** @return string */
  public function getAdminEmail()
  {
    return $this->adminEmail;
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

class SdfDownloadTask extends \Google\Model
{
  /** @var string */
  public $resourceName;

  /** @param string */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

class SdfDownloadTaskMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $version;

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

class SearchTargetingOptionsRequest extends \Google\Model
{
  /** @var string */
  public $advertiserId;
  /** @var BusinessChainSearchTerms */
  public $businessChainSearchTerms;
  /** @var GeoRegionSearchTerms */
  public $geoRegionSearchTerms;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var PoiSearchTerms */
  public $poiSearchTerms;
  protected $businessChainSearchTermsType = BusinessChainSearchTerms::class;
  protected $businessChainSearchTermsDataType = '';
  protected $geoRegionSearchTermsType = GeoRegionSearchTerms::class;
  protected $geoRegionSearchTermsDataType = '';
  protected $poiSearchTermsType = PoiSearchTerms::class;
  protected $poiSearchTermsDataType = '';
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
  /** @param BusinessChainSearchTerms */
  public function setBusinessChainSearchTerms(BusinessChainSearchTerms $businessChainSearchTerms)
  {
    $this->businessChainSearchTerms = $businessChainSearchTerms;
  }
  /** @return BusinessChainSearchTerms */
  public function getBusinessChainSearchTerms()
  {
    return $this->businessChainSearchTerms;
  }
  /** @param GeoRegionSearchTerms */
  public function setGeoRegionSearchTerms(GeoRegionSearchTerms $geoRegionSearchTerms)
  {
    $this->geoRegionSearchTerms = $geoRegionSearchTerms;
  }
  /** @return GeoRegionSearchTerms */
  public function getGeoRegionSearchTerms()
  {
    return $this->geoRegionSearchTerms;
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
  /** @param PoiSearchTerms */
  public function setPoiSearchTerms(PoiSearchTerms $poiSearchTerms)
  {
    $this->poiSearchTerms = $poiSearchTerms;
  }
  /** @return PoiSearchTerms */
  public function getPoiSearchTerms()
  {
    return $this->poiSearchTerms;
  }
}

class SearchTargetingOptionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TargetingOption[] */
  public $targetingOptions;
  protected $collection_key = 'targetingOptions';
  protected $targetingOptionsType = TargetingOption::class;
  protected $targetingOptionsDataType = 'array';
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
  /** @param TargetingOption[] */
  public function setTargetingOptions($targetingOptions)
  {
    $this->targetingOptions = $targetingOptions;
  }
  /** @return TargetingOption[] */
  public function getTargetingOptions()
  {
    return $this->targetingOptions;
  }
}

class SensitiveCategoryAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $excludedSensitiveCategory;

  /** @param string */
  public function setExcludedSensitiveCategory($excludedSensitiveCategory)
  {
    $this->excludedSensitiveCategory = $excludedSensitiveCategory;
  }
  /** @return string */
  public function getExcludedSensitiveCategory()
  {
    return $this->excludedSensitiveCategory;
  }
}

class SensitiveCategoryTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $sensitiveCategory;

  /** @param string */
  public function setSensitiveCategory($sensitiveCategory)
  {
    $this->sensitiveCategory = $sensitiveCategory;
  }
  /** @return string */
  public function getSensitiveCategory()
  {
    return $this->sensitiveCategory;
  }
}

class Site extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $urlOrAppId;

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
  public function setUrlOrAppId($urlOrAppId)
  {
    $this->urlOrAppId = $urlOrAppId;
  }
  /** @return string */
  public function getUrlOrAppId()
  {
    return $this->urlOrAppId;
  }
}

class Status extends \Google\Collection
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

class SubExchangeAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $targetingOptionId;

  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
}

class SubExchangeTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $displayName;

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

class TargetingExpansionConfig extends \Google\Model
{
  /** @var bool */
  public $excludeFirstPartyAudience;
  /** @var string */
  public $targetingExpansionLevel;

  /** @param bool */
  public function setExcludeFirstPartyAudience($excludeFirstPartyAudience)
  {
    $this->excludeFirstPartyAudience = $excludeFirstPartyAudience;
  }
  /** @return bool */
  public function getExcludeFirstPartyAudience()
  {
    return $this->excludeFirstPartyAudience;
  }
  /** @param string */
  public function setTargetingExpansionLevel($targetingExpansionLevel)
  {
    $this->targetingExpansionLevel = $targetingExpansionLevel;
  }
  /** @return string */
  public function getTargetingExpansionLevel()
  {
    return $this->targetingExpansionLevel;
  }
}

class TargetingOption extends \Google\Model
{
  /** @var AgeRangeTargetingOptionDetails */
  public $ageRangeDetails;
  /** @var AppCategoryTargetingOptionDetails */
  public $appCategoryDetails;
  /** @var AudioContentTypeTargetingOptionDetails */
  public $audioContentTypeDetails;
  /** @var AuthorizedSellerStatusTargetingOptionDetails */
  public $authorizedSellerStatusDetails;
  /** @var BrowserTargetingOptionDetails */
  public $browserDetails;
  /** @var BusinessChainTargetingOptionDetails */
  public $businessChainDetails;
  /** @var CarrierAndIspTargetingOptionDetails */
  public $carrierAndIspDetails;
  /** @var CategoryTargetingOptionDetails */
  public $categoryDetails;
  /** @var ContentDurationTargetingOptionDetails */
  public $contentDurationDetails;
  /** @var ContentGenreTargetingOptionDetails */
  public $contentGenreDetails;
  /** @var ContentInstreamPositionTargetingOptionDetails */
  public $contentInstreamPositionDetails;
  /** @var ContentOutstreamPositionTargetingOptionDetails */
  public $contentOutstreamPositionDetails;
  /** @var ContentStreamTypeTargetingOptionDetails */
  public $contentStreamTypeDetails;
  /** @var DeviceMakeModelTargetingOptionDetails */
  public $deviceMakeModelDetails;
  /** @var DeviceTypeTargetingOptionDetails */
  public $deviceTypeDetails;
  /** @var DigitalContentLabelTargetingOptionDetails */
  public $digitalContentLabelDetails;
  /** @var EnvironmentTargetingOptionDetails */
  public $environmentDetails;
  /** @var ExchangeTargetingOptionDetails */
  public $exchangeDetails;
  /** @var GenderTargetingOptionDetails */
  public $genderDetails;
  /** @var GeoRegionTargetingOptionDetails */
  public $geoRegionDetails;
  /** @var HouseholdIncomeTargetingOptionDetails */
  public $householdIncomeDetails;
  /** @var LanguageTargetingOptionDetails */
  public $languageDetails;
  /** @var string */
  public $name;
  /** @var NativeContentPositionTargetingOptionDetails */
  public $nativeContentPositionDetails;
  /** @var OmidTargetingOptionDetails */
  public $omidDetails;
  /** @var OnScreenPositionTargetingOptionDetails */
  public $onScreenPositionDetails;
  /** @var OperatingSystemTargetingOptionDetails */
  public $operatingSystemDetails;
  /** @var ParentalStatusTargetingOptionDetails */
  public $parentalStatusDetails;
  /** @var PoiTargetingOptionDetails */
  public $poiDetails;
  /** @var SensitiveCategoryTargetingOptionDetails */
  public $sensitiveCategoryDetails;
  /** @var SubExchangeTargetingOptionDetails */
  public $subExchangeDetails;
  /** @var string */
  public $targetingOptionId;
  /** @var string */
  public $targetingType;
  /** @var UserRewardedContentTargetingOptionDetails */
  public $userRewardedContentDetails;
  /** @var VideoPlayerSizeTargetingOptionDetails */
  public $videoPlayerSizeDetails;
  /** @var ViewabilityTargetingOptionDetails */
  public $viewabilityDetails;
  protected $ageRangeDetailsType = AgeRangeTargetingOptionDetails::class;
  protected $ageRangeDetailsDataType = '';
  protected $appCategoryDetailsType = AppCategoryTargetingOptionDetails::class;
  protected $appCategoryDetailsDataType = '';
  protected $audioContentTypeDetailsType = AudioContentTypeTargetingOptionDetails::class;
  protected $audioContentTypeDetailsDataType = '';
  protected $authorizedSellerStatusDetailsType = AuthorizedSellerStatusTargetingOptionDetails::class;
  protected $authorizedSellerStatusDetailsDataType = '';
  protected $browserDetailsType = BrowserTargetingOptionDetails::class;
  protected $browserDetailsDataType = '';
  protected $businessChainDetailsType = BusinessChainTargetingOptionDetails::class;
  protected $businessChainDetailsDataType = '';
  protected $carrierAndIspDetailsType = CarrierAndIspTargetingOptionDetails::class;
  protected $carrierAndIspDetailsDataType = '';
  protected $categoryDetailsType = CategoryTargetingOptionDetails::class;
  protected $categoryDetailsDataType = '';
  protected $contentDurationDetailsType = ContentDurationTargetingOptionDetails::class;
  protected $contentDurationDetailsDataType = '';
  protected $contentGenreDetailsType = ContentGenreTargetingOptionDetails::class;
  protected $contentGenreDetailsDataType = '';
  protected $contentInstreamPositionDetailsType = ContentInstreamPositionTargetingOptionDetails::class;
  protected $contentInstreamPositionDetailsDataType = '';
  protected $contentOutstreamPositionDetailsType = ContentOutstreamPositionTargetingOptionDetails::class;
  protected $contentOutstreamPositionDetailsDataType = '';
  protected $contentStreamTypeDetailsType = ContentStreamTypeTargetingOptionDetails::class;
  protected $contentStreamTypeDetailsDataType = '';
  protected $deviceMakeModelDetailsType = DeviceMakeModelTargetingOptionDetails::class;
  protected $deviceMakeModelDetailsDataType = '';
  protected $deviceTypeDetailsType = DeviceTypeTargetingOptionDetails::class;
  protected $deviceTypeDetailsDataType = '';
  protected $digitalContentLabelDetailsType = DigitalContentLabelTargetingOptionDetails::class;
  protected $digitalContentLabelDetailsDataType = '';
  protected $environmentDetailsType = EnvironmentTargetingOptionDetails::class;
  protected $environmentDetailsDataType = '';
  protected $exchangeDetailsType = ExchangeTargetingOptionDetails::class;
  protected $exchangeDetailsDataType = '';
  protected $genderDetailsType = GenderTargetingOptionDetails::class;
  protected $genderDetailsDataType = '';
  protected $geoRegionDetailsType = GeoRegionTargetingOptionDetails::class;
  protected $geoRegionDetailsDataType = '';
  protected $householdIncomeDetailsType = HouseholdIncomeTargetingOptionDetails::class;
  protected $householdIncomeDetailsDataType = '';
  protected $languageDetailsType = LanguageTargetingOptionDetails::class;
  protected $languageDetailsDataType = '';
  protected $nativeContentPositionDetailsType = NativeContentPositionTargetingOptionDetails::class;
  protected $nativeContentPositionDetailsDataType = '';
  protected $omidDetailsType = OmidTargetingOptionDetails::class;
  protected $omidDetailsDataType = '';
  protected $onScreenPositionDetailsType = OnScreenPositionTargetingOptionDetails::class;
  protected $onScreenPositionDetailsDataType = '';
  protected $operatingSystemDetailsType = OperatingSystemTargetingOptionDetails::class;
  protected $operatingSystemDetailsDataType = '';
  protected $parentalStatusDetailsType = ParentalStatusTargetingOptionDetails::class;
  protected $parentalStatusDetailsDataType = '';
  protected $poiDetailsType = PoiTargetingOptionDetails::class;
  protected $poiDetailsDataType = '';
  protected $sensitiveCategoryDetailsType = SensitiveCategoryTargetingOptionDetails::class;
  protected $sensitiveCategoryDetailsDataType = '';
  protected $subExchangeDetailsType = SubExchangeTargetingOptionDetails::class;
  protected $subExchangeDetailsDataType = '';
  protected $userRewardedContentDetailsType = UserRewardedContentTargetingOptionDetails::class;
  protected $userRewardedContentDetailsDataType = '';
  protected $videoPlayerSizeDetailsType = VideoPlayerSizeTargetingOptionDetails::class;
  protected $videoPlayerSizeDetailsDataType = '';
  protected $viewabilityDetailsType = ViewabilityTargetingOptionDetails::class;
  protected $viewabilityDetailsDataType = '';
  /** @param AgeRangeTargetingOptionDetails */
  public function setAgeRangeDetails(AgeRangeTargetingOptionDetails $ageRangeDetails)
  {
    $this->ageRangeDetails = $ageRangeDetails;
  }
  /** @return AgeRangeTargetingOptionDetails */
  public function getAgeRangeDetails()
  {
    return $this->ageRangeDetails;
  }
  /** @param AppCategoryTargetingOptionDetails */
  public function setAppCategoryDetails(AppCategoryTargetingOptionDetails $appCategoryDetails)
  {
    $this->appCategoryDetails = $appCategoryDetails;
  }
  /** @return AppCategoryTargetingOptionDetails */
  public function getAppCategoryDetails()
  {
    return $this->appCategoryDetails;
  }
  /** @param AudioContentTypeTargetingOptionDetails */
  public function setAudioContentTypeDetails(AudioContentTypeTargetingOptionDetails $audioContentTypeDetails)
  {
    $this->audioContentTypeDetails = $audioContentTypeDetails;
  }
  /** @return AudioContentTypeTargetingOptionDetails */
  public function getAudioContentTypeDetails()
  {
    return $this->audioContentTypeDetails;
  }
  /** @param AuthorizedSellerStatusTargetingOptionDetails */
  public function setAuthorizedSellerStatusDetails(AuthorizedSellerStatusTargetingOptionDetails $authorizedSellerStatusDetails)
  {
    $this->authorizedSellerStatusDetails = $authorizedSellerStatusDetails;
  }
  /** @return AuthorizedSellerStatusTargetingOptionDetails */
  public function getAuthorizedSellerStatusDetails()
  {
    return $this->authorizedSellerStatusDetails;
  }
  /** @param BrowserTargetingOptionDetails */
  public function setBrowserDetails(BrowserTargetingOptionDetails $browserDetails)
  {
    $this->browserDetails = $browserDetails;
  }
  /** @return BrowserTargetingOptionDetails */
  public function getBrowserDetails()
  {
    return $this->browserDetails;
  }
  /** @param BusinessChainTargetingOptionDetails */
  public function setBusinessChainDetails(BusinessChainTargetingOptionDetails $businessChainDetails)
  {
    $this->businessChainDetails = $businessChainDetails;
  }
  /** @return BusinessChainTargetingOptionDetails */
  public function getBusinessChainDetails()
  {
    return $this->businessChainDetails;
  }
  /** @param CarrierAndIspTargetingOptionDetails */
  public function setCarrierAndIspDetails(CarrierAndIspTargetingOptionDetails $carrierAndIspDetails)
  {
    $this->carrierAndIspDetails = $carrierAndIspDetails;
  }
  /** @return CarrierAndIspTargetingOptionDetails */
  public function getCarrierAndIspDetails()
  {
    return $this->carrierAndIspDetails;
  }
  /** @param CategoryTargetingOptionDetails */
  public function setCategoryDetails(CategoryTargetingOptionDetails $categoryDetails)
  {
    $this->categoryDetails = $categoryDetails;
  }
  /** @return CategoryTargetingOptionDetails */
  public function getCategoryDetails()
  {
    return $this->categoryDetails;
  }
  /** @param ContentDurationTargetingOptionDetails */
  public function setContentDurationDetails(ContentDurationTargetingOptionDetails $contentDurationDetails)
  {
    $this->contentDurationDetails = $contentDurationDetails;
  }
  /** @return ContentDurationTargetingOptionDetails */
  public function getContentDurationDetails()
  {
    return $this->contentDurationDetails;
  }
  /** @param ContentGenreTargetingOptionDetails */
  public function setContentGenreDetails(ContentGenreTargetingOptionDetails $contentGenreDetails)
  {
    $this->contentGenreDetails = $contentGenreDetails;
  }
  /** @return ContentGenreTargetingOptionDetails */
  public function getContentGenreDetails()
  {
    return $this->contentGenreDetails;
  }
  /** @param ContentInstreamPositionTargetingOptionDetails */
  public function setContentInstreamPositionDetails(ContentInstreamPositionTargetingOptionDetails $contentInstreamPositionDetails)
  {
    $this->contentInstreamPositionDetails = $contentInstreamPositionDetails;
  }
  /** @return ContentInstreamPositionTargetingOptionDetails */
  public function getContentInstreamPositionDetails()
  {
    return $this->contentInstreamPositionDetails;
  }
  /** @param ContentOutstreamPositionTargetingOptionDetails */
  public function setContentOutstreamPositionDetails(ContentOutstreamPositionTargetingOptionDetails $contentOutstreamPositionDetails)
  {
    $this->contentOutstreamPositionDetails = $contentOutstreamPositionDetails;
  }
  /** @return ContentOutstreamPositionTargetingOptionDetails */
  public function getContentOutstreamPositionDetails()
  {
    return $this->contentOutstreamPositionDetails;
  }
  /** @param ContentStreamTypeTargetingOptionDetails */
  public function setContentStreamTypeDetails(ContentStreamTypeTargetingOptionDetails $contentStreamTypeDetails)
  {
    $this->contentStreamTypeDetails = $contentStreamTypeDetails;
  }
  /** @return ContentStreamTypeTargetingOptionDetails */
  public function getContentStreamTypeDetails()
  {
    return $this->contentStreamTypeDetails;
  }
  /** @param DeviceMakeModelTargetingOptionDetails */
  public function setDeviceMakeModelDetails(DeviceMakeModelTargetingOptionDetails $deviceMakeModelDetails)
  {
    $this->deviceMakeModelDetails = $deviceMakeModelDetails;
  }
  /** @return DeviceMakeModelTargetingOptionDetails */
  public function getDeviceMakeModelDetails()
  {
    return $this->deviceMakeModelDetails;
  }
  /** @param DeviceTypeTargetingOptionDetails */
  public function setDeviceTypeDetails(DeviceTypeTargetingOptionDetails $deviceTypeDetails)
  {
    $this->deviceTypeDetails = $deviceTypeDetails;
  }
  /** @return DeviceTypeTargetingOptionDetails */
  public function getDeviceTypeDetails()
  {
    return $this->deviceTypeDetails;
  }
  /** @param DigitalContentLabelTargetingOptionDetails */
  public function setDigitalContentLabelDetails(DigitalContentLabelTargetingOptionDetails $digitalContentLabelDetails)
  {
    $this->digitalContentLabelDetails = $digitalContentLabelDetails;
  }
  /** @return DigitalContentLabelTargetingOptionDetails */
  public function getDigitalContentLabelDetails()
  {
    return $this->digitalContentLabelDetails;
  }
  /** @param EnvironmentTargetingOptionDetails */
  public function setEnvironmentDetails(EnvironmentTargetingOptionDetails $environmentDetails)
  {
    $this->environmentDetails = $environmentDetails;
  }
  /** @return EnvironmentTargetingOptionDetails */
  public function getEnvironmentDetails()
  {
    return $this->environmentDetails;
  }
  /** @param ExchangeTargetingOptionDetails */
  public function setExchangeDetails(ExchangeTargetingOptionDetails $exchangeDetails)
  {
    $this->exchangeDetails = $exchangeDetails;
  }
  /** @return ExchangeTargetingOptionDetails */
  public function getExchangeDetails()
  {
    return $this->exchangeDetails;
  }
  /** @param GenderTargetingOptionDetails */
  public function setGenderDetails(GenderTargetingOptionDetails $genderDetails)
  {
    $this->genderDetails = $genderDetails;
  }
  /** @return GenderTargetingOptionDetails */
  public function getGenderDetails()
  {
    return $this->genderDetails;
  }
  /** @param GeoRegionTargetingOptionDetails */
  public function setGeoRegionDetails(GeoRegionTargetingOptionDetails $geoRegionDetails)
  {
    $this->geoRegionDetails = $geoRegionDetails;
  }
  /** @return GeoRegionTargetingOptionDetails */
  public function getGeoRegionDetails()
  {
    return $this->geoRegionDetails;
  }
  /** @param HouseholdIncomeTargetingOptionDetails */
  public function setHouseholdIncomeDetails(HouseholdIncomeTargetingOptionDetails $householdIncomeDetails)
  {
    $this->householdIncomeDetails = $householdIncomeDetails;
  }
  /** @return HouseholdIncomeTargetingOptionDetails */
  public function getHouseholdIncomeDetails()
  {
    return $this->householdIncomeDetails;
  }
  /** @param LanguageTargetingOptionDetails */
  public function setLanguageDetails(LanguageTargetingOptionDetails $languageDetails)
  {
    $this->languageDetails = $languageDetails;
  }
  /** @return LanguageTargetingOptionDetails */
  public function getLanguageDetails()
  {
    return $this->languageDetails;
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
  /** @param NativeContentPositionTargetingOptionDetails */
  public function setNativeContentPositionDetails(NativeContentPositionTargetingOptionDetails $nativeContentPositionDetails)
  {
    $this->nativeContentPositionDetails = $nativeContentPositionDetails;
  }
  /** @return NativeContentPositionTargetingOptionDetails */
  public function getNativeContentPositionDetails()
  {
    return $this->nativeContentPositionDetails;
  }
  /** @param OmidTargetingOptionDetails */
  public function setOmidDetails(OmidTargetingOptionDetails $omidDetails)
  {
    $this->omidDetails = $omidDetails;
  }
  /** @return OmidTargetingOptionDetails */
  public function getOmidDetails()
  {
    return $this->omidDetails;
  }
  /** @param OnScreenPositionTargetingOptionDetails */
  public function setOnScreenPositionDetails(OnScreenPositionTargetingOptionDetails $onScreenPositionDetails)
  {
    $this->onScreenPositionDetails = $onScreenPositionDetails;
  }
  /** @return OnScreenPositionTargetingOptionDetails */
  public function getOnScreenPositionDetails()
  {
    return $this->onScreenPositionDetails;
  }
  /** @param OperatingSystemTargetingOptionDetails */
  public function setOperatingSystemDetails(OperatingSystemTargetingOptionDetails $operatingSystemDetails)
  {
    $this->operatingSystemDetails = $operatingSystemDetails;
  }
  /** @return OperatingSystemTargetingOptionDetails */
  public function getOperatingSystemDetails()
  {
    return $this->operatingSystemDetails;
  }
  /** @param ParentalStatusTargetingOptionDetails */
  public function setParentalStatusDetails(ParentalStatusTargetingOptionDetails $parentalStatusDetails)
  {
    $this->parentalStatusDetails = $parentalStatusDetails;
  }
  /** @return ParentalStatusTargetingOptionDetails */
  public function getParentalStatusDetails()
  {
    return $this->parentalStatusDetails;
  }
  /** @param PoiTargetingOptionDetails */
  public function setPoiDetails(PoiTargetingOptionDetails $poiDetails)
  {
    $this->poiDetails = $poiDetails;
  }
  /** @return PoiTargetingOptionDetails */
  public function getPoiDetails()
  {
    return $this->poiDetails;
  }
  /** @param SensitiveCategoryTargetingOptionDetails */
  public function setSensitiveCategoryDetails(SensitiveCategoryTargetingOptionDetails $sensitiveCategoryDetails)
  {
    $this->sensitiveCategoryDetails = $sensitiveCategoryDetails;
  }
  /** @return SensitiveCategoryTargetingOptionDetails */
  public function getSensitiveCategoryDetails()
  {
    return $this->sensitiveCategoryDetails;
  }
  /** @param SubExchangeTargetingOptionDetails */
  public function setSubExchangeDetails(SubExchangeTargetingOptionDetails $subExchangeDetails)
  {
    $this->subExchangeDetails = $subExchangeDetails;
  }
  /** @return SubExchangeTargetingOptionDetails */
  public function getSubExchangeDetails()
  {
    return $this->subExchangeDetails;
  }
  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
  /** @param string */
  public function setTargetingType($targetingType)
  {
    $this->targetingType = $targetingType;
  }
  /** @return string */
  public function getTargetingType()
  {
    return $this->targetingType;
  }
  /** @param UserRewardedContentTargetingOptionDetails */
  public function setUserRewardedContentDetails(UserRewardedContentTargetingOptionDetails $userRewardedContentDetails)
  {
    $this->userRewardedContentDetails = $userRewardedContentDetails;
  }
  /** @return UserRewardedContentTargetingOptionDetails */
  public function getUserRewardedContentDetails()
  {
    return $this->userRewardedContentDetails;
  }
  /** @param VideoPlayerSizeTargetingOptionDetails */
  public function setVideoPlayerSizeDetails(VideoPlayerSizeTargetingOptionDetails $videoPlayerSizeDetails)
  {
    $this->videoPlayerSizeDetails = $videoPlayerSizeDetails;
  }
  /** @return VideoPlayerSizeTargetingOptionDetails */
  public function getVideoPlayerSizeDetails()
  {
    return $this->videoPlayerSizeDetails;
  }
  /** @param ViewabilityTargetingOptionDetails */
  public function setViewabilityDetails(ViewabilityTargetingOptionDetails $viewabilityDetails)
  {
    $this->viewabilityDetails = $viewabilityDetails;
  }
  /** @return ViewabilityTargetingOptionDetails */
  public function getViewabilityDetails()
  {
    return $this->viewabilityDetails;
  }
}

class ThirdPartyOnlyConfig extends \Google\Model
{
  /** @var bool */
  public $pixelOrderIdReportingEnabled;

  /** @param bool */
  public function setPixelOrderIdReportingEnabled($pixelOrderIdReportingEnabled)
  {
    $this->pixelOrderIdReportingEnabled = $pixelOrderIdReportingEnabled;
  }
  /** @return bool */
  public function getPixelOrderIdReportingEnabled()
  {
    return $this->pixelOrderIdReportingEnabled;
  }
}

class ThirdPartyUrl extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $url;

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
}

class ThirdPartyVendorConfig extends \Google\Model
{
  /** @var string */
  public $placementId;
  /** @var string */
  public $vendor;

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
  /** @param string */
  public function setVendor($vendor)
  {
    $this->vendor = $vendor;
  }
  /** @return string */
  public function getVendor()
  {
    return $this->vendor;
  }
}

class ThirdPartyVerifierAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var Adloox */
  public $adloox;
  /** @var DoubleVerify */
  public $doubleVerify;
  /** @var IntegralAdScience */
  public $integralAdScience;
  protected $adlooxType = Adloox::class;
  protected $adlooxDataType = '';
  protected $doubleVerifyType = DoubleVerify::class;
  protected $doubleVerifyDataType = '';
  protected $integralAdScienceType = IntegralAdScience::class;
  protected $integralAdScienceDataType = '';
  /** @param Adloox */
  public function setAdloox(Adloox $adloox)
  {
    $this->adloox = $adloox;
  }
  /** @return Adloox */
  public function getAdloox()
  {
    return $this->adloox;
  }
  /** @param DoubleVerify */
  public function setDoubleVerify(DoubleVerify $doubleVerify)
  {
    $this->doubleVerify = $doubleVerify;
  }
  /** @return DoubleVerify */
  public function getDoubleVerify()
  {
    return $this->doubleVerify;
  }
  /** @param IntegralAdScience */
  public function setIntegralAdScience(IntegralAdScience $integralAdScience)
  {
    $this->integralAdScience = $integralAdScience;
  }
  /** @return IntegralAdScience */
  public function getIntegralAdScience()
  {
    return $this->integralAdScience;
  }
}

class TimeRange extends \Google\Model
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

class TimerEvent extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $reportingName;

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
  public function setReportingName($reportingName)
  {
    $this->reportingName = $reportingName;
  }
  /** @return string */
  public function getReportingName()
  {
    return $this->reportingName;
  }
}

class TrackingFloodlightActivityConfig extends \Google\Model
{
  /** @var string */
  public $floodlightActivityId;
  /** @var int */
  public $postClickLookbackWindowDays;
  /** @var int */
  public $postViewLookbackWindowDays;

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
  /** @param int */
  public function setPostClickLookbackWindowDays($postClickLookbackWindowDays)
  {
    $this->postClickLookbackWindowDays = $postClickLookbackWindowDays;
  }
  /** @return int */
  public function getPostClickLookbackWindowDays()
  {
    return $this->postClickLookbackWindowDays;
  }
  /** @param int */
  public function setPostViewLookbackWindowDays($postViewLookbackWindowDays)
  {
    $this->postViewLookbackWindowDays = $postViewLookbackWindowDays;
  }
  /** @return int */
  public function getPostViewLookbackWindowDays()
  {
    return $this->postViewLookbackWindowDays;
  }
}

class Transcode extends \Google\Model
{
  /** @var string */
  public $audioBitRateKbps;
  /** @var string */
  public $audioSampleRateHz;
  /** @var string */
  public $bitRateKbps;
  /** @var Dimensions */
  public $dimensions;
  /** @var string */
  public $fileSizeBytes;
  /** @var float */
  public $frameRate;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $name;
  /** @var bool */
  public $transcoded;
  protected $dimensionsType = Dimensions::class;
  protected $dimensionsDataType = '';
  /** @param string */
  public function setAudioBitRateKbps($audioBitRateKbps)
  {
    $this->audioBitRateKbps = $audioBitRateKbps;
  }
  /** @return string */
  public function getAudioBitRateKbps()
  {
    return $this->audioBitRateKbps;
  }
  /** @param string */
  public function setAudioSampleRateHz($audioSampleRateHz)
  {
    $this->audioSampleRateHz = $audioSampleRateHz;
  }
  /** @return string */
  public function getAudioSampleRateHz()
  {
    return $this->audioSampleRateHz;
  }
  /** @param string */
  public function setBitRateKbps($bitRateKbps)
  {
    $this->bitRateKbps = $bitRateKbps;
  }
  /** @return string */
  public function getBitRateKbps()
  {
    return $this->bitRateKbps;
  }
  /** @param Dimensions */
  public function setDimensions(Dimensions $dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return Dimensions */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /** @param string */
  public function setFileSizeBytes($fileSizeBytes)
  {
    $this->fileSizeBytes = $fileSizeBytes;
  }
  /** @return string */
  public function getFileSizeBytes()
  {
    return $this->fileSizeBytes;
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
  public function setTranscoded($transcoded)
  {
    $this->transcoded = $transcoded;
  }
  /** @return bool */
  public function getTranscoded()
  {
    return $this->transcoded;
  }
}

class UniversalAdId extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $registry;

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
  public function setRegistry($registry)
  {
    $this->registry = $registry;
  }
  /** @return string */
  public function getRegistry()
  {
    return $this->registry;
  }
}

class UrlAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var bool */
  public $negative;
  /** @var string */
  public $url;

  /** @param bool */
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /** @return bool */
  public function getNegative()
  {
    return $this->negative;
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

class User extends \Google\Collection
{
  /** @var AssignedUserRole[] */
  public $assignedUserRoles;
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var string */
  public $name;
  /** @var string */
  public $userId;
  protected $collection_key = 'assignedUserRoles';
  protected $assignedUserRolesType = AssignedUserRole::class;
  protected $assignedUserRolesDataType = 'array';
  /** @param AssignedUserRole[] */
  public function setAssignedUserRoles($assignedUserRoles)
  {
    $this->assignedUserRoles = $assignedUserRoles;
  }
  /** @return AssignedUserRole[] */
  public function getAssignedUserRoles()
  {
    return $this->assignedUserRoles;
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
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class UserRewardedContentAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $targetingOptionId;
  /** @var string */
  public $userRewardedContent;

  /** @param string */
  public function setTargetingOptionId($targetingOptionId)
  {
    $this->targetingOptionId = $targetingOptionId;
  }
  /** @return string */
  public function getTargetingOptionId()
  {
    return $this->targetingOptionId;
  }
  /** @param string */
  public function setUserRewardedContent($userRewardedContent)
  {
    $this->userRewardedContent = $userRewardedContent;
  }
  /** @return string */
  public function getUserRewardedContent()
  {
    return $this->userRewardedContent;
  }
}

class UserRewardedContentTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $userRewardedContent;

  /** @param string */
  public function setUserRewardedContent($userRewardedContent)
  {
    $this->userRewardedContent = $userRewardedContent;
  }
  /** @return string */
  public function getUserRewardedContent()
  {
    return $this->userRewardedContent;
  }
}

class VideoPlayerSizeAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $videoPlayerSize;

  /** @param string */
  public function setVideoPlayerSize($videoPlayerSize)
  {
    $this->videoPlayerSize = $videoPlayerSize;
  }
  /** @return string */
  public function getVideoPlayerSize()
  {
    return $this->videoPlayerSize;
  }
}

class VideoPlayerSizeTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $videoPlayerSize;

  /** @param string */
  public function setVideoPlayerSize($videoPlayerSize)
  {
    $this->videoPlayerSize = $videoPlayerSize;
  }
  /** @return string */
  public function getVideoPlayerSize()
  {
    return $this->videoPlayerSize;
  }
}

class ViewabilityAssignedTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $viewability;

  /** @param string */
  public function setViewability($viewability)
  {
    $this->viewability = $viewability;
  }
  /** @return string */
  public function getViewability()
  {
    return $this->viewability;
  }
}

class ViewabilityTargetingOptionDetails extends \Google\Model
{
  /** @var string */
  public $viewability;

  /** @param string */
  public function setViewability($viewability)
  {
    $this->viewability = $viewability;
  }
  /** @return string */
  public function getViewability()
  {
    return $this->viewability;
  }
}

class YoutubeAndPartnersBiddingStrategy extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $value;

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

class YoutubeAndPartnersInventorySourceConfig extends \Google\Model
{
  /** @var bool */
  public $includeYoutubeSearch;
  /** @var bool */
  public $includeYoutubeVideoPartners;
  /** @var bool */
  public $includeYoutubeVideos;

  /** @param bool */
  public function setIncludeYoutubeSearch($includeYoutubeSearch)
  {
    $this->includeYoutubeSearch = $includeYoutubeSearch;
  }
  /** @return bool */
  public function getIncludeYoutubeSearch()
  {
    return $this->includeYoutubeSearch;
  }
  /** @param bool */
  public function setIncludeYoutubeVideoPartners($includeYoutubeVideoPartners)
  {
    $this->includeYoutubeVideoPartners = $includeYoutubeVideoPartners;
  }
  /** @return bool */
  public function getIncludeYoutubeVideoPartners()
  {
    return $this->includeYoutubeVideoPartners;
  }
  /** @param bool */
  public function setIncludeYoutubeVideos($includeYoutubeVideos)
  {
    $this->includeYoutubeVideos = $includeYoutubeVideos;
  }
  /** @return bool */
  public function getIncludeYoutubeVideos()
  {
    return $this->includeYoutubeVideos;
  }
}

class YoutubeAndPartnersSettings extends \Google\Model
{
  /** @var YoutubeAndPartnersBiddingStrategy */
  public $biddingStrategy;
  /** @var string */
  public $contentCategory;
  /** @var YoutubeAndPartnersInventorySourceConfig */
  public $inventorySourceSettings;
  /** @var YoutubeAndPartnersThirdPartyMeasurementSettings */
  public $thirdPartyMeasurementSettings;
  /** @var FrequencyCap */
  public $viewFrequencyCap;
  protected $biddingStrategyType = YoutubeAndPartnersBiddingStrategy::class;
  protected $biddingStrategyDataType = '';
  protected $inventorySourceSettingsType = YoutubeAndPartnersInventorySourceConfig::class;
  protected $inventorySourceSettingsDataType = '';
  protected $thirdPartyMeasurementSettingsType = YoutubeAndPartnersThirdPartyMeasurementSettings::class;
  protected $thirdPartyMeasurementSettingsDataType = '';
  protected $viewFrequencyCapType = FrequencyCap::class;
  protected $viewFrequencyCapDataType = '';
  /** @param YoutubeAndPartnersBiddingStrategy */
  public function setBiddingStrategy(YoutubeAndPartnersBiddingStrategy $biddingStrategy)
  {
    $this->biddingStrategy = $biddingStrategy;
  }
  /** @return YoutubeAndPartnersBiddingStrategy */
  public function getBiddingStrategy()
  {
    return $this->biddingStrategy;
  }
  /** @param string */
  public function setContentCategory($contentCategory)
  {
    $this->contentCategory = $contentCategory;
  }
  /** @return string */
  public function getContentCategory()
  {
    return $this->contentCategory;
  }
  /** @param YoutubeAndPartnersInventorySourceConfig */
  public function setInventorySourceSettings(YoutubeAndPartnersInventorySourceConfig $inventorySourceSettings)
  {
    $this->inventorySourceSettings = $inventorySourceSettings;
  }
  /** @return YoutubeAndPartnersInventorySourceConfig */
  public function getInventorySourceSettings()
  {
    return $this->inventorySourceSettings;
  }
  /** @param YoutubeAndPartnersThirdPartyMeasurementSettings */
  public function setThirdPartyMeasurementSettings(YoutubeAndPartnersThirdPartyMeasurementSettings $thirdPartyMeasurementSettings)
  {
    $this->thirdPartyMeasurementSettings = $thirdPartyMeasurementSettings;
  }
  /** @return YoutubeAndPartnersThirdPartyMeasurementSettings */
  public function getThirdPartyMeasurementSettings()
  {
    return $this->thirdPartyMeasurementSettings;
  }
  /** @param FrequencyCap */
  public function setViewFrequencyCap(FrequencyCap $viewFrequencyCap)
  {
    $this->viewFrequencyCap = $viewFrequencyCap;
  }
  /** @return FrequencyCap */
  public function getViewFrequencyCap()
  {
    return $this->viewFrequencyCap;
  }
}

class YoutubeAndPartnersThirdPartyMeasurementSettings extends \Google\Collection
{
  /** @var ThirdPartyVendorConfig[] */
  public $brandLiftVendorConfigs;
  /** @var ThirdPartyVendorConfig[] */
  public $brandSafetyVendorConfigs;
  /** @var ThirdPartyVendorConfig[] */
  public $reachVendorConfigs;
  /** @var ThirdPartyVendorConfig[] */
  public $viewabilityVendorConfigs;
  protected $collection_key = 'viewabilityVendorConfigs';
  protected $brandLiftVendorConfigsType = ThirdPartyVendorConfig::class;
  protected $brandLiftVendorConfigsDataType = 'array';
  protected $brandSafetyVendorConfigsType = ThirdPartyVendorConfig::class;
  protected $brandSafetyVendorConfigsDataType = 'array';
  protected $reachVendorConfigsType = ThirdPartyVendorConfig::class;
  protected $reachVendorConfigsDataType = 'array';
  protected $viewabilityVendorConfigsType = ThirdPartyVendorConfig::class;
  protected $viewabilityVendorConfigsDataType = 'array';
  /** @param ThirdPartyVendorConfig[] */
  public function setBrandLiftVendorConfigs($brandLiftVendorConfigs)
  {
    $this->brandLiftVendorConfigs = $brandLiftVendorConfigs;
  }
  /** @return ThirdPartyVendorConfig[] */
  public function getBrandLiftVendorConfigs()
  {
    return $this->brandLiftVendorConfigs;
  }
  /** @param ThirdPartyVendorConfig[] */
  public function setBrandSafetyVendorConfigs($brandSafetyVendorConfigs)
  {
    $this->brandSafetyVendorConfigs = $brandSafetyVendorConfigs;
  }
  /** @return ThirdPartyVendorConfig[] */
  public function getBrandSafetyVendorConfigs()
  {
    return $this->brandSafetyVendorConfigs;
  }
  /** @param ThirdPartyVendorConfig[] */
  public function setReachVendorConfigs($reachVendorConfigs)
  {
    $this->reachVendorConfigs = $reachVendorConfigs;
  }
  /** @return ThirdPartyVendorConfig[] */
  public function getReachVendorConfigs()
  {
    return $this->reachVendorConfigs;
  }
  /** @param ThirdPartyVendorConfig[] */
  public function setViewabilityVendorConfigs($viewabilityVendorConfigs)
  {
    $this->viewabilityVendorConfigs = $viewabilityVendorConfigs;
  }
  /** @return ThirdPartyVendorConfig[] */
  public function getViewabilityVendorConfigs()
  {
    return $this->viewabilityVendorConfigs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActivateManualTriggerRequest::class, 'Google_Service_DisplayVideo_ActivateManualTriggerRequest');
class_alias(ActiveViewVideoViewabilityMetricConfig::class, 'Google_Service_DisplayVideo_ActiveViewVideoViewabilityMetricConfig');
class_alias(Adloox::class, 'Google_Service_DisplayVideo_Adloox');
class_alias(Advertiser::class, 'Google_Service_DisplayVideo_Advertiser');
class_alias(AdvertiserAdServerConfig::class, 'Google_Service_DisplayVideo_AdvertiserAdServerConfig');
class_alias(AdvertiserBillingConfig::class, 'Google_Service_DisplayVideo_AdvertiserBillingConfig');
class_alias(AdvertiserCreativeConfig::class, 'Google_Service_DisplayVideo_AdvertiserCreativeConfig');
class_alias(AdvertiserDataAccessConfig::class, 'Google_Service_DisplayVideo_AdvertiserDataAccessConfig');
class_alias(AdvertiserGeneralConfig::class, 'Google_Service_DisplayVideo_AdvertiserGeneralConfig');
class_alias(AdvertiserSdfConfig::class, 'Google_Service_DisplayVideo_AdvertiserSdfConfig');
class_alias(AdvertiserTargetingConfig::class, 'Google_Service_DisplayVideo_AdvertiserTargetingConfig');
class_alias(AgeRangeAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_AgeRangeAssignedTargetingOptionDetails');
class_alias(AgeRangeTargetingOptionDetails::class, 'Google_Service_DisplayVideo_AgeRangeTargetingOptionDetails');
class_alias(AppAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_AppAssignedTargetingOptionDetails');
class_alias(AppCategoryAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_AppCategoryAssignedTargetingOptionDetails');
class_alias(AppCategoryTargetingOptionDetails::class, 'Google_Service_DisplayVideo_AppCategoryTargetingOptionDetails');
class_alias(Asset::class, 'Google_Service_DisplayVideo_Asset');
class_alias(AssetAssociation::class, 'Google_Service_DisplayVideo_AssetAssociation');
class_alias(AssignedInventorySource::class, 'Google_Service_DisplayVideo_AssignedInventorySource');
class_alias(AssignedLocation::class, 'Google_Service_DisplayVideo_AssignedLocation');
class_alias(AssignedTargetingOption::class, 'Google_Service_DisplayVideo_AssignedTargetingOption');
class_alias(AssignedUserRole::class, 'Google_Service_DisplayVideo_AssignedUserRole');
class_alias(AudienceGroupAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_AudienceGroupAssignedTargetingOptionDetails');
class_alias(AudioContentTypeAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_AudioContentTypeAssignedTargetingOptionDetails');
class_alias(AudioContentTypeTargetingOptionDetails::class, 'Google_Service_DisplayVideo_AudioContentTypeTargetingOptionDetails');
class_alias(AudioVideoOffset::class, 'Google_Service_DisplayVideo_AudioVideoOffset');
class_alias(AuditAdvertiserResponse::class, 'Google_Service_DisplayVideo_AuditAdvertiserResponse');
class_alias(AuthorizedSellerStatusAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_AuthorizedSellerStatusAssignedTargetingOptionDetails');
class_alias(AuthorizedSellerStatusTargetingOptionDetails::class, 'Google_Service_DisplayVideo_AuthorizedSellerStatusTargetingOptionDetails');
class_alias(BiddingStrategy::class, 'Google_Service_DisplayVideo_BiddingStrategy');
class_alias(BrowserAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_BrowserAssignedTargetingOptionDetails');
class_alias(BrowserTargetingOptionDetails::class, 'Google_Service_DisplayVideo_BrowserTargetingOptionDetails');
class_alias(BudgetSummary::class, 'Google_Service_DisplayVideo_BudgetSummary');
class_alias(BulkEditAdvertiserAssignedTargetingOptionsRequest::class, 'Google_Service_DisplayVideo_BulkEditAdvertiserAssignedTargetingOptionsRequest');
class_alias(BulkEditAdvertiserAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_BulkEditAdvertiserAssignedTargetingOptionsResponse');
class_alias(BulkEditAssignedInventorySourcesRequest::class, 'Google_Service_DisplayVideo_BulkEditAssignedInventorySourcesRequest');
class_alias(BulkEditAssignedInventorySourcesResponse::class, 'Google_Service_DisplayVideo_BulkEditAssignedInventorySourcesResponse');
class_alias(BulkEditAssignedLocationsRequest::class, 'Google_Service_DisplayVideo_BulkEditAssignedLocationsRequest');
class_alias(BulkEditAssignedLocationsResponse::class, 'Google_Service_DisplayVideo_BulkEditAssignedLocationsResponse');
class_alias(BulkEditAssignedTargetingOptionsRequest::class, 'Google_Service_DisplayVideo_BulkEditAssignedTargetingOptionsRequest');
class_alias(BulkEditAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_BulkEditAssignedTargetingOptionsResponse');
class_alias(BulkEditAssignedUserRolesRequest::class, 'Google_Service_DisplayVideo_BulkEditAssignedUserRolesRequest');
class_alias(BulkEditAssignedUserRolesResponse::class, 'Google_Service_DisplayVideo_BulkEditAssignedUserRolesResponse');
class_alias(BulkEditNegativeKeywordsRequest::class, 'Google_Service_DisplayVideo_BulkEditNegativeKeywordsRequest');
class_alias(BulkEditNegativeKeywordsResponse::class, 'Google_Service_DisplayVideo_BulkEditNegativeKeywordsResponse');
class_alias(BulkEditPartnerAssignedTargetingOptionsRequest::class, 'Google_Service_DisplayVideo_BulkEditPartnerAssignedTargetingOptionsRequest');
class_alias(BulkEditPartnerAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_BulkEditPartnerAssignedTargetingOptionsResponse');
class_alias(BulkEditSitesRequest::class, 'Google_Service_DisplayVideo_BulkEditSitesRequest');
class_alias(BulkEditSitesResponse::class, 'Google_Service_DisplayVideo_BulkEditSitesResponse');
class_alias(BulkListAdvertiserAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_BulkListAdvertiserAssignedTargetingOptionsResponse');
class_alias(BulkListAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_BulkListAssignedTargetingOptionsResponse');
class_alias(BulkListCampaignAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_BulkListCampaignAssignedTargetingOptionsResponse');
class_alias(BulkListInsertionOrderAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_BulkListInsertionOrderAssignedTargetingOptionsResponse');
class_alias(BulkUpdateLineItemsRequest::class, 'Google_Service_DisplayVideo_BulkUpdateLineItemsRequest');
class_alias(BulkUpdateLineItemsResponse::class, 'Google_Service_DisplayVideo_BulkUpdateLineItemsResponse');
class_alias(BusinessChainAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_BusinessChainAssignedTargetingOptionDetails');
class_alias(BusinessChainSearchTerms::class, 'Google_Service_DisplayVideo_BusinessChainSearchTerms');
class_alias(BusinessChainTargetingOptionDetails::class, 'Google_Service_DisplayVideo_BusinessChainTargetingOptionDetails');
class_alias(Campaign::class, 'Google_Service_DisplayVideo_Campaign');
class_alias(CampaignBudget::class, 'Google_Service_DisplayVideo_CampaignBudget');
class_alias(CampaignFlight::class, 'Google_Service_DisplayVideo_CampaignFlight');
class_alias(CampaignGoal::class, 'Google_Service_DisplayVideo_CampaignGoal');
class_alias(CarrierAndIspAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_CarrierAndIspAssignedTargetingOptionDetails');
class_alias(CarrierAndIspTargetingOptionDetails::class, 'Google_Service_DisplayVideo_CarrierAndIspTargetingOptionDetails');
class_alias(CategoryAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_CategoryAssignedTargetingOptionDetails');
class_alias(CategoryTargetingOptionDetails::class, 'Google_Service_DisplayVideo_CategoryTargetingOptionDetails');
class_alias(Channel::class, 'Google_Service_DisplayVideo_Channel');
class_alias(ChannelAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ChannelAssignedTargetingOptionDetails');
class_alias(CmHybridConfig::class, 'Google_Service_DisplayVideo_CmHybridConfig');
class_alias(CmTrackingAd::class, 'Google_Service_DisplayVideo_CmTrackingAd');
class_alias(CombinedAudience::class, 'Google_Service_DisplayVideo_CombinedAudience');
class_alias(CombinedAudienceGroup::class, 'Google_Service_DisplayVideo_CombinedAudienceGroup');
class_alias(CombinedAudienceTargetingSetting::class, 'Google_Service_DisplayVideo_CombinedAudienceTargetingSetting');
class_alias(ContactInfo::class, 'Google_Service_DisplayVideo_ContactInfo');
class_alias(ContactInfoList::class, 'Google_Service_DisplayVideo_ContactInfoList');
class_alias(ContentDurationAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ContentDurationAssignedTargetingOptionDetails');
class_alias(ContentDurationTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ContentDurationTargetingOptionDetails');
class_alias(ContentGenreAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ContentGenreAssignedTargetingOptionDetails');
class_alias(ContentGenreTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ContentGenreTargetingOptionDetails');
class_alias(ContentInstreamPositionAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ContentInstreamPositionAssignedTargetingOptionDetails');
class_alias(ContentInstreamPositionTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ContentInstreamPositionTargetingOptionDetails');
class_alias(ContentOutstreamPositionAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ContentOutstreamPositionAssignedTargetingOptionDetails');
class_alias(ContentOutstreamPositionTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ContentOutstreamPositionTargetingOptionDetails');
class_alias(ContentStreamTypeAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ContentStreamTypeAssignedTargetingOptionDetails');
class_alias(ContentStreamTypeTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ContentStreamTypeTargetingOptionDetails');
class_alias(ConversionCountingConfig::class, 'Google_Service_DisplayVideo_ConversionCountingConfig');
class_alias(CounterEvent::class, 'Google_Service_DisplayVideo_CounterEvent');
class_alias(CreateAssetRequest::class, 'Google_Service_DisplayVideo_CreateAssetRequest');
class_alias(CreateAssetResponse::class, 'Google_Service_DisplayVideo_CreateAssetResponse');
class_alias(CreateAssignedTargetingOptionsRequest::class, 'Google_Service_DisplayVideo_CreateAssignedTargetingOptionsRequest');
class_alias(CreateSdfDownloadTaskRequest::class, 'Google_Service_DisplayVideo_CreateSdfDownloadTaskRequest');
class_alias(Creative::class, 'Google_Service_DisplayVideo_Creative');
class_alias(CreativeConfig::class, 'Google_Service_DisplayVideo_CreativeConfig');
class_alias(CustomBiddingAlgorithm::class, 'Google_Service_DisplayVideo_CustomBiddingAlgorithm');
class_alias(CustomBiddingModelDetails::class, 'Google_Service_DisplayVideo_CustomBiddingModelDetails');
class_alias(CustomBiddingScript::class, 'Google_Service_DisplayVideo_CustomBiddingScript');
class_alias(CustomBiddingScriptRef::class, 'Google_Service_DisplayVideo_CustomBiddingScriptRef');
class_alias(CustomList::class, 'Google_Service_DisplayVideo_CustomList');
class_alias(CustomListGroup::class, 'Google_Service_DisplayVideo_CustomListGroup');
class_alias(CustomListTargetingSetting::class, 'Google_Service_DisplayVideo_CustomListTargetingSetting');
class_alias(Date::class, 'Google_Service_DisplayVideo_Date');
class_alias(DateRange::class, 'Google_Service_DisplayVideo_DateRange');
class_alias(DayAndTimeAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_DayAndTimeAssignedTargetingOptionDetails');
class_alias(DeactivateManualTriggerRequest::class, 'Google_Service_DisplayVideo_DeactivateManualTriggerRequest');
class_alias(DeleteAssignedTargetingOptionsRequest::class, 'Google_Service_DisplayVideo_DeleteAssignedTargetingOptionsRequest');
class_alias(DeviceMakeModelAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_DeviceMakeModelAssignedTargetingOptionDetails');
class_alias(DeviceMakeModelTargetingOptionDetails::class, 'Google_Service_DisplayVideo_DeviceMakeModelTargetingOptionDetails');
class_alias(DeviceTypeAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_DeviceTypeAssignedTargetingOptionDetails');
class_alias(DeviceTypeTargetingOptionDetails::class, 'Google_Service_DisplayVideo_DeviceTypeTargetingOptionDetails');
class_alias(DigitalContentLabelAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_DigitalContentLabelAssignedTargetingOptionDetails');
class_alias(DigitalContentLabelTargetingOptionDetails::class, 'Google_Service_DisplayVideo_DigitalContentLabelTargetingOptionDetails');
class_alias(Dimensions::class, 'Google_Service_DisplayVideo_Dimensions');
class_alias(DisplayvideoEmpty::class, 'Google_Service_DisplayVideo_DisplayvideoEmpty');
class_alias(DoubleVerify::class, 'Google_Service_DisplayVideo_DoubleVerify');
class_alias(DoubleVerifyAppStarRating::class, 'Google_Service_DisplayVideo_DoubleVerifyAppStarRating');
class_alias(DoubleVerifyBrandSafetyCategories::class, 'Google_Service_DisplayVideo_DoubleVerifyBrandSafetyCategories');
class_alias(DoubleVerifyDisplayViewability::class, 'Google_Service_DisplayVideo_DoubleVerifyDisplayViewability');
class_alias(DoubleVerifyFraudInvalidTraffic::class, 'Google_Service_DisplayVideo_DoubleVerifyFraudInvalidTraffic');
class_alias(DoubleVerifyVideoViewability::class, 'Google_Service_DisplayVideo_DoubleVerifyVideoViewability');
class_alias(DuplicateLineItemRequest::class, 'Google_Service_DisplayVideo_DuplicateLineItemRequest');
class_alias(DuplicateLineItemResponse::class, 'Google_Service_DisplayVideo_DuplicateLineItemResponse');
class_alias(EditCustomerMatchMembersRequest::class, 'Google_Service_DisplayVideo_EditCustomerMatchMembersRequest');
class_alias(EditCustomerMatchMembersResponse::class, 'Google_Service_DisplayVideo_EditCustomerMatchMembersResponse');
class_alias(EditGuaranteedOrderReadAccessorsRequest::class, 'Google_Service_DisplayVideo_EditGuaranteedOrderReadAccessorsRequest');
class_alias(EditGuaranteedOrderReadAccessorsResponse::class, 'Google_Service_DisplayVideo_EditGuaranteedOrderReadAccessorsResponse');
class_alias(EditInventorySourceReadWriteAccessorsRequest::class, 'Google_Service_DisplayVideo_EditInventorySourceReadWriteAccessorsRequest');
class_alias(EditInventorySourceReadWriteAccessorsRequestAdvertisersUpdate::class, 'Google_Service_DisplayVideo_EditInventorySourceReadWriteAccessorsRequestAdvertisersUpdate');
class_alias(EnvironmentAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_EnvironmentAssignedTargetingOptionDetails');
class_alias(EnvironmentTargetingOptionDetails::class, 'Google_Service_DisplayVideo_EnvironmentTargetingOptionDetails');
class_alias(ExchangeAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ExchangeAssignedTargetingOptionDetails');
class_alias(ExchangeConfig::class, 'Google_Service_DisplayVideo_ExchangeConfig');
class_alias(ExchangeConfigEnabledExchange::class, 'Google_Service_DisplayVideo_ExchangeConfigEnabledExchange');
class_alias(ExchangeReviewStatus::class, 'Google_Service_DisplayVideo_ExchangeReviewStatus');
class_alias(ExchangeTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ExchangeTargetingOptionDetails');
class_alias(ExitEvent::class, 'Google_Service_DisplayVideo_ExitEvent');
class_alias(FirstAndThirdPartyAudience::class, 'Google_Service_DisplayVideo_FirstAndThirdPartyAudience');
class_alias(FirstAndThirdPartyAudienceGroup::class, 'Google_Service_DisplayVideo_FirstAndThirdPartyAudienceGroup');
class_alias(FirstAndThirdPartyAudienceTargetingSetting::class, 'Google_Service_DisplayVideo_FirstAndThirdPartyAudienceTargetingSetting');
class_alias(FixedBidStrategy::class, 'Google_Service_DisplayVideo_FixedBidStrategy');
class_alias(FloodlightGroup::class, 'Google_Service_DisplayVideo_FloodlightGroup');
class_alias(FrequencyCap::class, 'Google_Service_DisplayVideo_FrequencyCap');
class_alias(GenderAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_GenderAssignedTargetingOptionDetails');
class_alias(GenderTargetingOptionDetails::class, 'Google_Service_DisplayVideo_GenderTargetingOptionDetails');
class_alias(GenerateDefaultLineItemRequest::class, 'Google_Service_DisplayVideo_GenerateDefaultLineItemRequest');
class_alias(GeoRegionAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_GeoRegionAssignedTargetingOptionDetails');
class_alias(GeoRegionSearchTerms::class, 'Google_Service_DisplayVideo_GeoRegionSearchTerms');
class_alias(GeoRegionTargetingOptionDetails::class, 'Google_Service_DisplayVideo_GeoRegionTargetingOptionDetails');
class_alias(GoogleAudience::class, 'Google_Service_DisplayVideo_GoogleAudience');
class_alias(GoogleAudienceGroup::class, 'Google_Service_DisplayVideo_GoogleAudienceGroup');
class_alias(GoogleAudienceTargetingSetting::class, 'Google_Service_DisplayVideo_GoogleAudienceTargetingSetting');
class_alias(GoogleBytestreamMedia::class, 'Google_Service_DisplayVideo_GoogleBytestreamMedia');
class_alias(GuaranteedOrder::class, 'Google_Service_DisplayVideo_GuaranteedOrder');
class_alias(GuaranteedOrderStatus::class, 'Google_Service_DisplayVideo_GuaranteedOrderStatus');
class_alias(HouseholdIncomeAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_HouseholdIncomeAssignedTargetingOptionDetails');
class_alias(HouseholdIncomeTargetingOptionDetails::class, 'Google_Service_DisplayVideo_HouseholdIncomeTargetingOptionDetails');
class_alias(IdFilter::class, 'Google_Service_DisplayVideo_IdFilter');
class_alias(InsertionOrder::class, 'Google_Service_DisplayVideo_InsertionOrder');
class_alias(InsertionOrderBudget::class, 'Google_Service_DisplayVideo_InsertionOrderBudget');
class_alias(InsertionOrderBudgetSegment::class, 'Google_Service_DisplayVideo_InsertionOrderBudgetSegment');
class_alias(IntegralAdScience::class, 'Google_Service_DisplayVideo_IntegralAdScience');
class_alias(IntegrationDetails::class, 'Google_Service_DisplayVideo_IntegrationDetails');
class_alias(InventorySource::class, 'Google_Service_DisplayVideo_InventorySource');
class_alias(InventorySourceAccessors::class, 'Google_Service_DisplayVideo_InventorySourceAccessors');
class_alias(InventorySourceAccessorsAdvertiserAccessors::class, 'Google_Service_DisplayVideo_InventorySourceAccessorsAdvertiserAccessors');
class_alias(InventorySourceAccessorsPartnerAccessor::class, 'Google_Service_DisplayVideo_InventorySourceAccessorsPartnerAccessor');
class_alias(InventorySourceAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_InventorySourceAssignedTargetingOptionDetails');
class_alias(InventorySourceDisplayCreativeConfig::class, 'Google_Service_DisplayVideo_InventorySourceDisplayCreativeConfig');
class_alias(InventorySourceFilter::class, 'Google_Service_DisplayVideo_InventorySourceFilter');
class_alias(InventorySourceGroup::class, 'Google_Service_DisplayVideo_InventorySourceGroup');
class_alias(InventorySourceGroupAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_InventorySourceGroupAssignedTargetingOptionDetails');
class_alias(InventorySourceStatus::class, 'Google_Service_DisplayVideo_InventorySourceStatus');
class_alias(InventorySourceVideoCreativeConfig::class, 'Google_Service_DisplayVideo_InventorySourceVideoCreativeConfig');
class_alias(Invoice::class, 'Google_Service_DisplayVideo_Invoice');
class_alias(KeywordAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_KeywordAssignedTargetingOptionDetails');
class_alias(LanguageAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_LanguageAssignedTargetingOptionDetails');
class_alias(LanguageTargetingOptionDetails::class, 'Google_Service_DisplayVideo_LanguageTargetingOptionDetails');
class_alias(LineItem::class, 'Google_Service_DisplayVideo_LineItem');
class_alias(LineItemAssignedTargetingOption::class, 'Google_Service_DisplayVideo_LineItemAssignedTargetingOption');
class_alias(LineItemBudget::class, 'Google_Service_DisplayVideo_LineItemBudget');
class_alias(LineItemFlight::class, 'Google_Service_DisplayVideo_LineItemFlight');
class_alias(ListAdvertiserAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_ListAdvertiserAssignedTargetingOptionsResponse');
class_alias(ListAdvertisersResponse::class, 'Google_Service_DisplayVideo_ListAdvertisersResponse');
class_alias(ListAssignedInventorySourcesResponse::class, 'Google_Service_DisplayVideo_ListAssignedInventorySourcesResponse');
class_alias(ListAssignedLocationsResponse::class, 'Google_Service_DisplayVideo_ListAssignedLocationsResponse');
class_alias(ListCampaignAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_ListCampaignAssignedTargetingOptionsResponse');
class_alias(ListCampaignsResponse::class, 'Google_Service_DisplayVideo_ListCampaignsResponse');
class_alias(ListChannelsResponse::class, 'Google_Service_DisplayVideo_ListChannelsResponse');
class_alias(ListCombinedAudiencesResponse::class, 'Google_Service_DisplayVideo_ListCombinedAudiencesResponse');
class_alias(ListCreativesResponse::class, 'Google_Service_DisplayVideo_ListCreativesResponse');
class_alias(ListCustomBiddingAlgorithmsResponse::class, 'Google_Service_DisplayVideo_ListCustomBiddingAlgorithmsResponse');
class_alias(ListCustomBiddingScriptsResponse::class, 'Google_Service_DisplayVideo_ListCustomBiddingScriptsResponse');
class_alias(ListCustomListsResponse::class, 'Google_Service_DisplayVideo_ListCustomListsResponse');
class_alias(ListFirstAndThirdPartyAudiencesResponse::class, 'Google_Service_DisplayVideo_ListFirstAndThirdPartyAudiencesResponse');
class_alias(ListGoogleAudiencesResponse::class, 'Google_Service_DisplayVideo_ListGoogleAudiencesResponse');
class_alias(ListGuaranteedOrdersResponse::class, 'Google_Service_DisplayVideo_ListGuaranteedOrdersResponse');
class_alias(ListInsertionOrderAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_ListInsertionOrderAssignedTargetingOptionsResponse');
class_alias(ListInsertionOrdersResponse::class, 'Google_Service_DisplayVideo_ListInsertionOrdersResponse');
class_alias(ListInventorySourceGroupsResponse::class, 'Google_Service_DisplayVideo_ListInventorySourceGroupsResponse');
class_alias(ListInventorySourcesResponse::class, 'Google_Service_DisplayVideo_ListInventorySourcesResponse');
class_alias(ListInvoicesResponse::class, 'Google_Service_DisplayVideo_ListInvoicesResponse');
class_alias(ListLineItemAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_ListLineItemAssignedTargetingOptionsResponse');
class_alias(ListLineItemsResponse::class, 'Google_Service_DisplayVideo_ListLineItemsResponse');
class_alias(ListLocationListsResponse::class, 'Google_Service_DisplayVideo_ListLocationListsResponse');
class_alias(ListManualTriggersResponse::class, 'Google_Service_DisplayVideo_ListManualTriggersResponse');
class_alias(ListNegativeKeywordListsResponse::class, 'Google_Service_DisplayVideo_ListNegativeKeywordListsResponse');
class_alias(ListNegativeKeywordsResponse::class, 'Google_Service_DisplayVideo_ListNegativeKeywordsResponse');
class_alias(ListPartnerAssignedTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_ListPartnerAssignedTargetingOptionsResponse');
class_alias(ListPartnersResponse::class, 'Google_Service_DisplayVideo_ListPartnersResponse');
class_alias(ListSitesResponse::class, 'Google_Service_DisplayVideo_ListSitesResponse');
class_alias(ListTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_ListTargetingOptionsResponse');
class_alias(ListUsersResponse::class, 'Google_Service_DisplayVideo_ListUsersResponse');
class_alias(LocationList::class, 'Google_Service_DisplayVideo_LocationList');
class_alias(LookbackWindow::class, 'Google_Service_DisplayVideo_LookbackWindow');
class_alias(LookupInvoiceCurrencyResponse::class, 'Google_Service_DisplayVideo_LookupInvoiceCurrencyResponse');
class_alias(ManualTrigger::class, 'Google_Service_DisplayVideo_ManualTrigger');
class_alias(MaximizeSpendBidStrategy::class, 'Google_Service_DisplayVideo_MaximizeSpendBidStrategy');
class_alias(MeasurementConfig::class, 'Google_Service_DisplayVideo_MeasurementConfig');
class_alias(MobileApp::class, 'Google_Service_DisplayVideo_MobileApp');
class_alias(MobileDeviceIdList::class, 'Google_Service_DisplayVideo_MobileDeviceIdList');
class_alias(Money::class, 'Google_Service_DisplayVideo_Money');
class_alias(NativeContentPositionAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_NativeContentPositionAssignedTargetingOptionDetails');
class_alias(NativeContentPositionTargetingOptionDetails::class, 'Google_Service_DisplayVideo_NativeContentPositionTargetingOptionDetails');
class_alias(NegativeKeyword::class, 'Google_Service_DisplayVideo_NegativeKeyword');
class_alias(NegativeKeywordList::class, 'Google_Service_DisplayVideo_NegativeKeywordList');
class_alias(NegativeKeywordListAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_NegativeKeywordListAssignedTargetingOptionDetails');
class_alias(ObaIcon::class, 'Google_Service_DisplayVideo_ObaIcon');
class_alias(OmidAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_OmidAssignedTargetingOptionDetails');
class_alias(OmidTargetingOptionDetails::class, 'Google_Service_DisplayVideo_OmidTargetingOptionDetails');
class_alias(OnScreenPositionAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_OnScreenPositionAssignedTargetingOptionDetails');
class_alias(OnScreenPositionTargetingOptionDetails::class, 'Google_Service_DisplayVideo_OnScreenPositionTargetingOptionDetails');
class_alias(OperatingSystemAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_OperatingSystemAssignedTargetingOptionDetails');
class_alias(OperatingSystemTargetingOptionDetails::class, 'Google_Service_DisplayVideo_OperatingSystemTargetingOptionDetails');
class_alias(Operation::class, 'Google_Service_DisplayVideo_Operation');
class_alias(Pacing::class, 'Google_Service_DisplayVideo_Pacing');
class_alias(ParentEntityFilter::class, 'Google_Service_DisplayVideo_ParentEntityFilter');
class_alias(ParentalStatusAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ParentalStatusAssignedTargetingOptionDetails');
class_alias(ParentalStatusTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ParentalStatusTargetingOptionDetails');
class_alias(Partner::class, 'Google_Service_DisplayVideo_Partner');
class_alias(PartnerAdServerConfig::class, 'Google_Service_DisplayVideo_PartnerAdServerConfig');
class_alias(PartnerCost::class, 'Google_Service_DisplayVideo_PartnerCost');
class_alias(PartnerDataAccessConfig::class, 'Google_Service_DisplayVideo_PartnerDataAccessConfig');
class_alias(PartnerGeneralConfig::class, 'Google_Service_DisplayVideo_PartnerGeneralConfig');
class_alias(PartnerRevenueModel::class, 'Google_Service_DisplayVideo_PartnerRevenueModel');
class_alias(PerformanceGoal::class, 'Google_Service_DisplayVideo_PerformanceGoal');
class_alias(PerformanceGoalBidStrategy::class, 'Google_Service_DisplayVideo_PerformanceGoalBidStrategy');
class_alias(PoiAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_PoiAssignedTargetingOptionDetails');
class_alias(PoiSearchTerms::class, 'Google_Service_DisplayVideo_PoiSearchTerms');
class_alias(PoiTargetingOptionDetails::class, 'Google_Service_DisplayVideo_PoiTargetingOptionDetails');
class_alias(PrismaConfig::class, 'Google_Service_DisplayVideo_PrismaConfig');
class_alias(PrismaCpeCode::class, 'Google_Service_DisplayVideo_PrismaCpeCode');
class_alias(ProximityLocationListAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ProximityLocationListAssignedTargetingOptionDetails');
class_alias(PublisherReviewStatus::class, 'Google_Service_DisplayVideo_PublisherReviewStatus');
class_alias(RateDetails::class, 'Google_Service_DisplayVideo_RateDetails');
class_alias(RegionalLocationListAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_RegionalLocationListAssignedTargetingOptionDetails');
class_alias(ReplaceNegativeKeywordsRequest::class, 'Google_Service_DisplayVideo_ReplaceNegativeKeywordsRequest');
class_alias(ReplaceNegativeKeywordsResponse::class, 'Google_Service_DisplayVideo_ReplaceNegativeKeywordsResponse');
class_alias(ReplaceSitesRequest::class, 'Google_Service_DisplayVideo_ReplaceSitesRequest');
class_alias(ReplaceSitesResponse::class, 'Google_Service_DisplayVideo_ReplaceSitesResponse');
class_alias(ReviewStatusInfo::class, 'Google_Service_DisplayVideo_ReviewStatusInfo');
class_alias(ScriptError::class, 'Google_Service_DisplayVideo_ScriptError');
class_alias(SdfConfig::class, 'Google_Service_DisplayVideo_SdfConfig');
class_alias(SdfDownloadTask::class, 'Google_Service_DisplayVideo_SdfDownloadTask');
class_alias(SdfDownloadTaskMetadata::class, 'Google_Service_DisplayVideo_SdfDownloadTaskMetadata');
class_alias(SearchTargetingOptionsRequest::class, 'Google_Service_DisplayVideo_SearchTargetingOptionsRequest');
class_alias(SearchTargetingOptionsResponse::class, 'Google_Service_DisplayVideo_SearchTargetingOptionsResponse');
class_alias(SensitiveCategoryAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_SensitiveCategoryAssignedTargetingOptionDetails');
class_alias(SensitiveCategoryTargetingOptionDetails::class, 'Google_Service_DisplayVideo_SensitiveCategoryTargetingOptionDetails');
class_alias(Site::class, 'Google_Service_DisplayVideo_Site');
class_alias(Status::class, 'Google_Service_DisplayVideo_Status');
class_alias(SubExchangeAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_SubExchangeAssignedTargetingOptionDetails');
class_alias(SubExchangeTargetingOptionDetails::class, 'Google_Service_DisplayVideo_SubExchangeTargetingOptionDetails');
class_alias(TargetingExpansionConfig::class, 'Google_Service_DisplayVideo_TargetingExpansionConfig');
class_alias(TargetingOption::class, 'Google_Service_DisplayVideo_TargetingOption');
class_alias(ThirdPartyOnlyConfig::class, 'Google_Service_DisplayVideo_ThirdPartyOnlyConfig');
class_alias(ThirdPartyUrl::class, 'Google_Service_DisplayVideo_ThirdPartyUrl');
class_alias(ThirdPartyVendorConfig::class, 'Google_Service_DisplayVideo_ThirdPartyVendorConfig');
class_alias(ThirdPartyVerifierAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ThirdPartyVerifierAssignedTargetingOptionDetails');
class_alias(TimeRange::class, 'Google_Service_DisplayVideo_TimeRange');
class_alias(TimerEvent::class, 'Google_Service_DisplayVideo_TimerEvent');
class_alias(TrackingFloodlightActivityConfig::class, 'Google_Service_DisplayVideo_TrackingFloodlightActivityConfig');
class_alias(Transcode::class, 'Google_Service_DisplayVideo_Transcode');
class_alias(UniversalAdId::class, 'Google_Service_DisplayVideo_UniversalAdId');
class_alias(UrlAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_UrlAssignedTargetingOptionDetails');
class_alias(User::class, 'Google_Service_DisplayVideo_User');
class_alias(UserRewardedContentAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_UserRewardedContentAssignedTargetingOptionDetails');
class_alias(UserRewardedContentTargetingOptionDetails::class, 'Google_Service_DisplayVideo_UserRewardedContentTargetingOptionDetails');
class_alias(VideoPlayerSizeAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_VideoPlayerSizeAssignedTargetingOptionDetails');
class_alias(VideoPlayerSizeTargetingOptionDetails::class, 'Google_Service_DisplayVideo_VideoPlayerSizeTargetingOptionDetails');
class_alias(ViewabilityAssignedTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ViewabilityAssignedTargetingOptionDetails');
class_alias(ViewabilityTargetingOptionDetails::class, 'Google_Service_DisplayVideo_ViewabilityTargetingOptionDetails');
class_alias(YoutubeAndPartnersBiddingStrategy::class, 'Google_Service_DisplayVideo_YoutubeAndPartnersBiddingStrategy');
class_alias(YoutubeAndPartnersInventorySourceConfig::class, 'Google_Service_DisplayVideo_YoutubeAndPartnersInventorySourceConfig');
class_alias(YoutubeAndPartnersSettings::class, 'Google_Service_DisplayVideo_YoutubeAndPartnersSettings');
class_alias(YoutubeAndPartnersThirdPartyMeasurementSettings::class, 'Google_Service_DisplayVideo_YoutubeAndPartnersThirdPartyMeasurementSettings');
