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

namespace Google\Service\RealTimeBidding;

class ActivatePretargetingConfigRequest extends \Google\Model
{
}

class AdTechnologyProviders extends \Google\Collection
{
  /** @var string[] */
  public $detectedGvlIds;
  /** @var string[] */
  public $detectedProviderIds;
  /** @var string[] */
  public $unidentifiedProviderDomains;
  protected $collection_key = 'unidentifiedProviderDomains';
  /** @param string[] */
  public function setDetectedGvlIds($detectedGvlIds)
  {
    $this->detectedGvlIds = $detectedGvlIds;
  }
  /** @return string[] */
  public function getDetectedGvlIds()
  {
    return $this->detectedGvlIds;
  }
  /** @param string[] */
  public function setDetectedProviderIds($detectedProviderIds)
  {
    $this->detectedProviderIds = $detectedProviderIds;
  }
  /** @return string[] */
  public function getDetectedProviderIds()
  {
    return $this->detectedProviderIds;
  }
  /** @param string[] */
  public function setUnidentifiedProviderDomains($unidentifiedProviderDomains)
  {
    $this->unidentifiedProviderDomains = $unidentifiedProviderDomains;
  }
  /** @return string[] */
  public function getUnidentifiedProviderDomains()
  {
    return $this->unidentifiedProviderDomains;
  }
}

class AddTargetedAppsRequest extends \Google\Collection
{
  /** @var string[] */
  public $appIds;
  /** @var string */
  public $targetingMode;
  protected $collection_key = 'appIds';
  /** @param string[] */
  public function setAppIds($appIds)
  {
    $this->appIds = $appIds;
  }
  /** @return string[] */
  public function getAppIds()
  {
    return $this->appIds;
  }
  /** @param string */
  public function setTargetingMode($targetingMode)
  {
    $this->targetingMode = $targetingMode;
  }
  /** @return string */
  public function getTargetingMode()
  {
    return $this->targetingMode;
  }
}

class AddTargetedPublishersRequest extends \Google\Collection
{
  /** @var string[] */
  public $publisherIds;
  /** @var string */
  public $targetingMode;
  protected $collection_key = 'publisherIds';
  /** @param string[] */
  public function setPublisherIds($publisherIds)
  {
    $this->publisherIds = $publisherIds;
  }
  /** @return string[] */
  public function getPublisherIds()
  {
    return $this->publisherIds;
  }
  /** @param string */
  public function setTargetingMode($targetingMode)
  {
    $this->targetingMode = $targetingMode;
  }
  /** @return string */
  public function getTargetingMode()
  {
    return $this->targetingMode;
  }
}

class AddTargetedSitesRequest extends \Google\Collection
{
  /** @var string[] */
  public $sites;
  /** @var string */
  public $targetingMode;
  protected $collection_key = 'sites';
  /** @param string[] */
  public function setSites($sites)
  {
    $this->sites = $sites;
  }
  /** @return string[] */
  public function getSites()
  {
    return $this->sites;
  }
  /** @param string */
  public function setTargetingMode($targetingMode)
  {
    $this->targetingMode = $targetingMode;
  }
  /** @return string */
  public function getTargetingMode()
  {
    return $this->targetingMode;
  }
}

class AdvertiserAndBrand extends \Google\Model
{
  /** @var string */
  public $advertiserId;
  /** @var string */
  public $advertiserName;
  /** @var string */
  public $brandId;
  /** @var string */
  public $brandName;

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
  public function setAdvertiserName($advertiserName)
  {
    $this->advertiserName = $advertiserName;
  }
  /** @return string */
  public function getAdvertiserName()
  {
    return $this->advertiserName;
  }
  /** @param string */
  public function setBrandId($brandId)
  {
    $this->brandId = $brandId;
  }
  /** @return string */
  public function getBrandId()
  {
    return $this->brandId;
  }
  /** @param string */
  public function setBrandName($brandName)
  {
    $this->brandName = $brandName;
  }
  /** @return string */
  public function getBrandName()
  {
    return $this->brandName;
  }
}

class AppTargeting extends \Google\Model
{
  /** @var NumericTargetingDimension */
  public $mobileAppCategoryTargeting;
  /** @var StringTargetingDimension */
  public $mobileAppTargeting;
  protected $mobileAppCategoryTargetingType = NumericTargetingDimension::class;
  protected $mobileAppCategoryTargetingDataType = '';
  protected $mobileAppTargetingType = StringTargetingDimension::class;
  protected $mobileAppTargetingDataType = '';
  /** @param NumericTargetingDimension */
  public function setMobileAppCategoryTargeting(NumericTargetingDimension $mobileAppCategoryTargeting)
  {
    $this->mobileAppCategoryTargeting = $mobileAppCategoryTargeting;
  }
  /** @return NumericTargetingDimension */
  public function getMobileAppCategoryTargeting()
  {
    return $this->mobileAppCategoryTargeting;
  }
  /** @param StringTargetingDimension */
  public function setMobileAppTargeting(StringTargetingDimension $mobileAppTargeting)
  {
    $this->mobileAppTargeting = $mobileAppTargeting;
  }
  /** @return StringTargetingDimension */
  public function getMobileAppTargeting()
  {
    return $this->mobileAppTargeting;
  }
}

class BatchApprovePublisherConnectionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $names;
  protected $collection_key = 'names';
  /** @param string[] */
  public function setNames($names)
  {
    $this->names = $names;
  }
  /** @return string[] */
  public function getNames()
  {
    return $this->names;
  }
}

class BatchApprovePublisherConnectionsResponse extends \Google\Collection
{
  /** @var PublisherConnection[] */
  public $publisherConnections;
  protected $collection_key = 'publisherConnections';
  protected $publisherConnectionsType = PublisherConnection::class;
  protected $publisherConnectionsDataType = 'array';
  /** @param PublisherConnection[] */
  public function setPublisherConnections($publisherConnections)
  {
    $this->publisherConnections = $publisherConnections;
  }
  /** @return PublisherConnection[] */
  public function getPublisherConnections()
  {
    return $this->publisherConnections;
  }
}

class BatchRejectPublisherConnectionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $names;
  protected $collection_key = 'names';
  /** @param string[] */
  public function setNames($names)
  {
    $this->names = $names;
  }
  /** @return string[] */
  public function getNames()
  {
    return $this->names;
  }
}

class BatchRejectPublisherConnectionsResponse extends \Google\Collection
{
  /** @var PublisherConnection[] */
  public $publisherConnections;
  protected $collection_key = 'publisherConnections';
  protected $publisherConnectionsType = PublisherConnection::class;
  protected $publisherConnectionsDataType = 'array';
  /** @param PublisherConnection[] */
  public function setPublisherConnections($publisherConnections)
  {
    $this->publisherConnections = $publisherConnections;
  }
  /** @return PublisherConnection[] */
  public function getPublisherConnections()
  {
    return $this->publisherConnections;
  }
}

class Bidder extends \Google\Model
{
  /** @var bool */
  public $bypassNonguaranteedDealsPretargeting;
  /** @var string */
  public $cookieMatchingNetworkId;
  /** @var string */
  public $cookieMatchingUrl;
  /** @var string */
  public $dealsBillingId;
  /** @var string */
  public $name;

  /** @param bool */
  public function setBypassNonguaranteedDealsPretargeting($bypassNonguaranteedDealsPretargeting)
  {
    $this->bypassNonguaranteedDealsPretargeting = $bypassNonguaranteedDealsPretargeting;
  }
  /** @return bool */
  public function getBypassNonguaranteedDealsPretargeting()
  {
    return $this->bypassNonguaranteedDealsPretargeting;
  }
  /** @param string */
  public function setCookieMatchingNetworkId($cookieMatchingNetworkId)
  {
    $this->cookieMatchingNetworkId = $cookieMatchingNetworkId;
  }
  /** @return string */
  public function getCookieMatchingNetworkId()
  {
    return $this->cookieMatchingNetworkId;
  }
  /** @param string */
  public function setCookieMatchingUrl($cookieMatchingUrl)
  {
    $this->cookieMatchingUrl = $cookieMatchingUrl;
  }
  /** @return string */
  public function getCookieMatchingUrl()
  {
    return $this->cookieMatchingUrl;
  }
  /** @param string */
  public function setDealsBillingId($dealsBillingId)
  {
    $this->dealsBillingId = $dealsBillingId;
  }
  /** @return string */
  public function getDealsBillingId()
  {
    return $this->dealsBillingId;
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

class Buyer extends \Google\Collection
{
  /** @var string */
  public $activeCreativeCount;
  /** @var string */
  public $bidder;
  /** @var string[] */
  public $billingIds;
  /** @var string */
  public $displayName;
  /** @var string */
  public $maximumActiveCreativeCount;
  /** @var string */
  public $name;
  protected $collection_key = 'billingIds';
  /** @param string */
  public function setActiveCreativeCount($activeCreativeCount)
  {
    $this->activeCreativeCount = $activeCreativeCount;
  }
  /** @return string */
  public function getActiveCreativeCount()
  {
    return $this->activeCreativeCount;
  }
  /** @param string */
  public function setBidder($bidder)
  {
    $this->bidder = $bidder;
  }
  /** @return string */
  public function getBidder()
  {
    return $this->bidder;
  }
  /** @param string[] */
  public function setBillingIds($billingIds)
  {
    $this->billingIds = $billingIds;
  }
  /** @return string[] */
  public function getBillingIds()
  {
    return $this->billingIds;
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
  public function setMaximumActiveCreativeCount($maximumActiveCreativeCount)
  {
    $this->maximumActiveCreativeCount = $maximumActiveCreativeCount;
  }
  /** @return string */
  public function getMaximumActiveCreativeCount()
  {
    return $this->maximumActiveCreativeCount;
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

class CloseUserListRequest extends \Google\Model
{
}

class Creative extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $adChoicesDestinationUrl;
  /** @var string */
  public $advertiserName;
  /** @var string */
  public $agencyId;
  /** @var string */
  public $apiUpdateTime;
  /** @var string */
  public $creativeFormat;
  /** @var string */
  public $creativeId;
  /** @var CreativeServingDecision */
  public $creativeServingDecision;
  /** @var string[] */
  public $dealIds;
  /** @var string[] */
  public $declaredAttributes;
  /** @var string[] */
  public $declaredClickThroughUrls;
  /** @var string[] */
  public $declaredRestrictedCategories;
  /** @var int[] */
  public $declaredVendorIds;
  /** @var HtmlContent */
  public $html;
  /** @var string[] */
  public $impressionTrackingUrls;
  /** @var string */
  public $name;
  /** @var NativeContent */
  public $native;
  /** @var string */
  public $renderUrl;
  /** @var string[] */
  public $restrictedCategories;
  /** @var int */
  public $version;
  /** @var VideoContent */
  public $video;
  protected $collection_key = 'restrictedCategories';
  protected $creativeServingDecisionType = CreativeServingDecision::class;
  protected $creativeServingDecisionDataType = '';
  protected $htmlType = HtmlContent::class;
  protected $htmlDataType = '';
  protected $nativeType = NativeContent::class;
  protected $nativeDataType = '';
  protected $videoType = VideoContent::class;
  protected $videoDataType = '';
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
  public function setAdChoicesDestinationUrl($adChoicesDestinationUrl)
  {
    $this->adChoicesDestinationUrl = $adChoicesDestinationUrl;
  }
  /** @return string */
  public function getAdChoicesDestinationUrl()
  {
    return $this->adChoicesDestinationUrl;
  }
  /** @param string */
  public function setAdvertiserName($advertiserName)
  {
    $this->advertiserName = $advertiserName;
  }
  /** @return string */
  public function getAdvertiserName()
  {
    return $this->advertiserName;
  }
  /** @param string */
  public function setAgencyId($agencyId)
  {
    $this->agencyId = $agencyId;
  }
  /** @return string */
  public function getAgencyId()
  {
    return $this->agencyId;
  }
  /** @param string */
  public function setApiUpdateTime($apiUpdateTime)
  {
    $this->apiUpdateTime = $apiUpdateTime;
  }
  /** @return string */
  public function getApiUpdateTime()
  {
    return $this->apiUpdateTime;
  }
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
  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }
  /** @return string */
  public function getCreativeId()
  {
    return $this->creativeId;
  }
  /** @param CreativeServingDecision */
  public function setCreativeServingDecision(CreativeServingDecision $creativeServingDecision)
  {
    $this->creativeServingDecision = $creativeServingDecision;
  }
  /** @return CreativeServingDecision */
  public function getCreativeServingDecision()
  {
    return $this->creativeServingDecision;
  }
  /** @param string[] */
  public function setDealIds($dealIds)
  {
    $this->dealIds = $dealIds;
  }
  /** @return string[] */
  public function getDealIds()
  {
    return $this->dealIds;
  }
  /** @param string[] */
  public function setDeclaredAttributes($declaredAttributes)
  {
    $this->declaredAttributes = $declaredAttributes;
  }
  /** @return string[] */
  public function getDeclaredAttributes()
  {
    return $this->declaredAttributes;
  }
  /** @param string[] */
  public function setDeclaredClickThroughUrls($declaredClickThroughUrls)
  {
    $this->declaredClickThroughUrls = $declaredClickThroughUrls;
  }
  /** @return string[] */
  public function getDeclaredClickThroughUrls()
  {
    return $this->declaredClickThroughUrls;
  }
  /** @param string[] */
  public function setDeclaredRestrictedCategories($declaredRestrictedCategories)
  {
    $this->declaredRestrictedCategories = $declaredRestrictedCategories;
  }
  /** @return string[] */
  public function getDeclaredRestrictedCategories()
  {
    return $this->declaredRestrictedCategories;
  }
  /** @param int[] */
  public function setDeclaredVendorIds($declaredVendorIds)
  {
    $this->declaredVendorIds = $declaredVendorIds;
  }
  /** @return int[] */
  public function getDeclaredVendorIds()
  {
    return $this->declaredVendorIds;
  }
  /** @param HtmlContent */
  public function setHtml(HtmlContent $html)
  {
    $this->html = $html;
  }
  /** @return HtmlContent */
  public function getHtml()
  {
    return $this->html;
  }
  /** @param string[] */
  public function setImpressionTrackingUrls($impressionTrackingUrls)
  {
    $this->impressionTrackingUrls = $impressionTrackingUrls;
  }
  /** @return string[] */
  public function getImpressionTrackingUrls()
  {
    return $this->impressionTrackingUrls;
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
  /** @param NativeContent */
  public function setNative(NativeContent $native)
  {
    $this->native = $native;
  }
  /** @return NativeContent */
  public function getNative()
  {
    return $this->native;
  }
  /** @param string */
  public function setRenderUrl($renderUrl)
  {
    $this->renderUrl = $renderUrl;
  }
  /** @return string */
  public function getRenderUrl()
  {
    return $this->renderUrl;
  }
  /** @param string[] */
  public function setRestrictedCategories($restrictedCategories)
  {
    $this->restrictedCategories = $restrictedCategories;
  }
  /** @return string[] */
  public function getRestrictedCategories()
  {
    return $this->restrictedCategories;
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
  /** @param VideoContent */
  public function setVideo(VideoContent $video)
  {
    $this->video = $video;
  }
  /** @return VideoContent */
  public function getVideo()
  {
    return $this->video;
  }
}

class CreativeDimensions extends \Google\Model
{
  /** @var string */
  public $height;
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

class CreativeServingDecision extends \Google\Collection
{
  /** @var AdTechnologyProviders */
  public $adTechnologyProviders;
  /** @var PolicyCompliance */
  public $chinaPolicyCompliance;
  /** @var PolicyCompliance */
  public $dealsPolicyCompliance;
  /** @var AdvertiserAndBrand[] */
  public $detectedAdvertisers;
  /** @var string[] */
  public $detectedAttributes;
  /** @var string[] */
  public $detectedClickThroughUrls;
  /** @var string[] */
  public $detectedDomains;
  /** @var string[] */
  public $detectedLanguages;
  /** @var int[] */
  public $detectedProductCategories;
  /** @var int[] */
  public $detectedSensitiveCategories;
  /** @var int[] */
  public $detectedVendorIds;
  /** @var string */
  public $lastStatusUpdate;
  /** @var PolicyCompliance */
  public $networkPolicyCompliance;
  /** @var PolicyCompliance */
  public $platformPolicyCompliance;
  /** @var PolicyCompliance */
  public $russiaPolicyCompliance;
  protected $collection_key = 'detectedVendorIds';
  protected $adTechnologyProvidersType = AdTechnologyProviders::class;
  protected $adTechnologyProvidersDataType = '';
  protected $chinaPolicyComplianceType = PolicyCompliance::class;
  protected $chinaPolicyComplianceDataType = '';
  protected $dealsPolicyComplianceType = PolicyCompliance::class;
  protected $dealsPolicyComplianceDataType = '';
  protected $detectedAdvertisersType = AdvertiserAndBrand::class;
  protected $detectedAdvertisersDataType = 'array';
  protected $networkPolicyComplianceType = PolicyCompliance::class;
  protected $networkPolicyComplianceDataType = '';
  protected $platformPolicyComplianceType = PolicyCompliance::class;
  protected $platformPolicyComplianceDataType = '';
  protected $russiaPolicyComplianceType = PolicyCompliance::class;
  protected $russiaPolicyComplianceDataType = '';
  /** @param AdTechnologyProviders */
  public function setAdTechnologyProviders(AdTechnologyProviders $adTechnologyProviders)
  {
    $this->adTechnologyProviders = $adTechnologyProviders;
  }
  /** @return AdTechnologyProviders */
  public function getAdTechnologyProviders()
  {
    return $this->adTechnologyProviders;
  }
  /** @param PolicyCompliance */
  public function setChinaPolicyCompliance(PolicyCompliance $chinaPolicyCompliance)
  {
    $this->chinaPolicyCompliance = $chinaPolicyCompliance;
  }
  /** @return PolicyCompliance */
  public function getChinaPolicyCompliance()
  {
    return $this->chinaPolicyCompliance;
  }
  /** @param PolicyCompliance */
  public function setDealsPolicyCompliance(PolicyCompliance $dealsPolicyCompliance)
  {
    $this->dealsPolicyCompliance = $dealsPolicyCompliance;
  }
  /** @return PolicyCompliance */
  public function getDealsPolicyCompliance()
  {
    return $this->dealsPolicyCompliance;
  }
  /** @param AdvertiserAndBrand[] */
  public function setDetectedAdvertisers($detectedAdvertisers)
  {
    $this->detectedAdvertisers = $detectedAdvertisers;
  }
  /** @return AdvertiserAndBrand[] */
  public function getDetectedAdvertisers()
  {
    return $this->detectedAdvertisers;
  }
  /** @param string[] */
  public function setDetectedAttributes($detectedAttributes)
  {
    $this->detectedAttributes = $detectedAttributes;
  }
  /** @return string[] */
  public function getDetectedAttributes()
  {
    return $this->detectedAttributes;
  }
  /** @param string[] */
  public function setDetectedClickThroughUrls($detectedClickThroughUrls)
  {
    $this->detectedClickThroughUrls = $detectedClickThroughUrls;
  }
  /** @return string[] */
  public function getDetectedClickThroughUrls()
  {
    return $this->detectedClickThroughUrls;
  }
  /** @param string[] */
  public function setDetectedDomains($detectedDomains)
  {
    $this->detectedDomains = $detectedDomains;
  }
  /** @return string[] */
  public function getDetectedDomains()
  {
    return $this->detectedDomains;
  }
  /** @param string[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return string[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
  /** @param int[] */
  public function setDetectedProductCategories($detectedProductCategories)
  {
    $this->detectedProductCategories = $detectedProductCategories;
  }
  /** @return int[] */
  public function getDetectedProductCategories()
  {
    return $this->detectedProductCategories;
  }
  /** @param int[] */
  public function setDetectedSensitiveCategories($detectedSensitiveCategories)
  {
    $this->detectedSensitiveCategories = $detectedSensitiveCategories;
  }
  /** @return int[] */
  public function getDetectedSensitiveCategories()
  {
    return $this->detectedSensitiveCategories;
  }
  /** @param int[] */
  public function setDetectedVendorIds($detectedVendorIds)
  {
    $this->detectedVendorIds = $detectedVendorIds;
  }
  /** @return int[] */
  public function getDetectedVendorIds()
  {
    return $this->detectedVendorIds;
  }
  /** @param string */
  public function setLastStatusUpdate($lastStatusUpdate)
  {
    $this->lastStatusUpdate = $lastStatusUpdate;
  }
  /** @return string */
  public function getLastStatusUpdate()
  {
    return $this->lastStatusUpdate;
  }
  /** @param PolicyCompliance */
  public function setNetworkPolicyCompliance(PolicyCompliance $networkPolicyCompliance)
  {
    $this->networkPolicyCompliance = $networkPolicyCompliance;
  }
  /** @return PolicyCompliance */
  public function getNetworkPolicyCompliance()
  {
    return $this->networkPolicyCompliance;
  }
  /** @param PolicyCompliance */
  public function setPlatformPolicyCompliance(PolicyCompliance $platformPolicyCompliance)
  {
    $this->platformPolicyCompliance = $platformPolicyCompliance;
  }
  /** @return PolicyCompliance */
  public function getPlatformPolicyCompliance()
  {
    return $this->platformPolicyCompliance;
  }
  /** @param PolicyCompliance */
  public function setRussiaPolicyCompliance(PolicyCompliance $russiaPolicyCompliance)
  {
    $this->russiaPolicyCompliance = $russiaPolicyCompliance;
  }
  /** @return PolicyCompliance */
  public function getRussiaPolicyCompliance()
  {
    return $this->russiaPolicyCompliance;
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

class DestinationNotCrawlableEvidence extends \Google\Model
{
  /** @var string */
  public $crawlTime;
  /** @var string */
  public $crawledUrl;
  /** @var string */
  public $reason;

  /** @param string */
  public function setCrawlTime($crawlTime)
  {
    $this->crawlTime = $crawlTime;
  }
  /** @return string */
  public function getCrawlTime()
  {
    return $this->crawlTime;
  }
  /** @param string */
  public function setCrawledUrl($crawledUrl)
  {
    $this->crawledUrl = $crawledUrl;
  }
  /** @return string */
  public function getCrawledUrl()
  {
    return $this->crawledUrl;
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

class DestinationNotWorkingEvidence extends \Google\Model
{
  /** @var string */
  public $dnsError;
  /** @var string */
  public $expandedUrl;
  /** @var int */
  public $httpError;
  /** @var string */
  public $invalidPage;
  /** @var string */
  public $lastCheckTime;
  /** @var string */
  public $platform;
  /** @var string */
  public $redirectionError;
  /** @var string */
  public $urlRejected;

  /** @param string */
  public function setDnsError($dnsError)
  {
    $this->dnsError = $dnsError;
  }
  /** @return string */
  public function getDnsError()
  {
    return $this->dnsError;
  }
  /** @param string */
  public function setExpandedUrl($expandedUrl)
  {
    $this->expandedUrl = $expandedUrl;
  }
  /** @return string */
  public function getExpandedUrl()
  {
    return $this->expandedUrl;
  }
  /** @param int */
  public function setHttpError($httpError)
  {
    $this->httpError = $httpError;
  }
  /** @return int */
  public function getHttpError()
  {
    return $this->httpError;
  }
  /** @param string */
  public function setInvalidPage($invalidPage)
  {
    $this->invalidPage = $invalidPage;
  }
  /** @return string */
  public function getInvalidPage()
  {
    return $this->invalidPage;
  }
  /** @param string */
  public function setLastCheckTime($lastCheckTime)
  {
    $this->lastCheckTime = $lastCheckTime;
  }
  /** @return string */
  public function getLastCheckTime()
  {
    return $this->lastCheckTime;
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
  public function setRedirectionError($redirectionError)
  {
    $this->redirectionError = $redirectionError;
  }
  /** @return string */
  public function getRedirectionError()
  {
    return $this->redirectionError;
  }
  /** @param string */
  public function setUrlRejected($urlRejected)
  {
    $this->urlRejected = $urlRejected;
  }
  /** @return string */
  public function getUrlRejected()
  {
    return $this->urlRejected;
  }
}

class DestinationUrlEvidence extends \Google\Model
{
  /** @var string */
  public $destinationUrl;

  /** @param string */
  public function setDestinationUrl($destinationUrl)
  {
    $this->destinationUrl = $destinationUrl;
  }
  /** @return string */
  public function getDestinationUrl()
  {
    return $this->destinationUrl;
  }
}

class DomainCallEvidence extends \Google\Collection
{
  /** @var DomainCalls[] */
  public $topHttpCallDomains;
  /** @var int */
  public $totalHttpCallCount;
  protected $collection_key = 'topHttpCallDomains';
  protected $topHttpCallDomainsType = DomainCalls::class;
  protected $topHttpCallDomainsDataType = 'array';
  /** @param DomainCalls[] */
  public function setTopHttpCallDomains($topHttpCallDomains)
  {
    $this->topHttpCallDomains = $topHttpCallDomains;
  }
  /** @return DomainCalls[] */
  public function getTopHttpCallDomains()
  {
    return $this->topHttpCallDomains;
  }
  /** @param int */
  public function setTotalHttpCallCount($totalHttpCallCount)
  {
    $this->totalHttpCallCount = $totalHttpCallCount;
  }
  /** @return int */
  public function getTotalHttpCallCount()
  {
    return $this->totalHttpCallCount;
  }
}

class DomainCalls extends \Google\Model
{
  /** @var string */
  public $domain;
  /** @var int */
  public $httpCallCount;

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
  /** @param int */
  public function setHttpCallCount($httpCallCount)
  {
    $this->httpCallCount = $httpCallCount;
  }
  /** @return int */
  public function getHttpCallCount()
  {
    return $this->httpCallCount;
  }
}

class DownloadSizeEvidence extends \Google\Collection
{
  /** @var UrlDownloadSize[] */
  public $topUrlDownloadSizeBreakdowns;
  /** @var int */
  public $totalDownloadSizeKb;
  protected $collection_key = 'topUrlDownloadSizeBreakdowns';
  protected $topUrlDownloadSizeBreakdownsType = UrlDownloadSize::class;
  protected $topUrlDownloadSizeBreakdownsDataType = 'array';
  /** @param UrlDownloadSize[] */
  public function setTopUrlDownloadSizeBreakdowns($topUrlDownloadSizeBreakdowns)
  {
    $this->topUrlDownloadSizeBreakdowns = $topUrlDownloadSizeBreakdowns;
  }
  /** @return UrlDownloadSize[] */
  public function getTopUrlDownloadSizeBreakdowns()
  {
    return $this->topUrlDownloadSizeBreakdowns;
  }
  /** @param int */
  public function setTotalDownloadSizeKb($totalDownloadSizeKb)
  {
    $this->totalDownloadSizeKb = $totalDownloadSizeKb;
  }
  /** @return int */
  public function getTotalDownloadSizeKb()
  {
    return $this->totalDownloadSizeKb;
  }
}

class Endpoint extends \Google\Model
{
  /** @var string */
  public $bidProtocol;
  /** @var string */
  public $maximumQps;
  /** @var string */
  public $name;
  /** @var string */
  public $tradingLocation;
  /** @var string */
  public $url;

  /** @param string */
  public function setBidProtocol($bidProtocol)
  {
    $this->bidProtocol = $bidProtocol;
  }
  /** @return string */
  public function getBidProtocol()
  {
    return $this->bidProtocol;
  }
  /** @param string */
  public function setMaximumQps($maximumQps)
  {
    $this->maximumQps = $maximumQps;
  }
  /** @return string */
  public function getMaximumQps()
  {
    return $this->maximumQps;
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
  public function setTradingLocation($tradingLocation)
  {
    $this->tradingLocation = $tradingLocation;
  }
  /** @return string */
  public function getTradingLocation()
  {
    return $this->tradingLocation;
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

class GetRemarketingTagResponse extends \Google\Model
{
  /** @var string */
  public $snippet;

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

class HtmlContent extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var string */
  public $snippet;
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

class HttpCallEvidence extends \Google\Collection
{
  /** @var string[] */
  public $urls;
  protected $collection_key = 'urls';
  /** @param string[] */
  public function setUrls($urls)
  {
    $this->urls = $urls;
  }
  /** @return string[] */
  public function getUrls()
  {
    return $this->urls;
  }
}

class HttpCookieEvidence extends \Google\Collection
{
  /** @var string[] */
  public $cookieNames;
  /** @var int */
  public $maxCookieCount;
  protected $collection_key = 'cookieNames';
  /** @param string[] */
  public function setCookieNames($cookieNames)
  {
    $this->cookieNames = $cookieNames;
  }
  /** @return string[] */
  public function getCookieNames()
  {
    return $this->cookieNames;
  }
  /** @param int */
  public function setMaxCookieCount($maxCookieCount)
  {
    $this->maxCookieCount = $maxCookieCount;
  }
  /** @return int */
  public function getMaxCookieCount()
  {
    return $this->maxCookieCount;
  }
}

class Image extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var string */
  public $url;
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

class ListBiddersResponse extends \Google\Collection
{
  /** @var Bidder[] */
  public $bidders;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'bidders';
  protected $biddersType = Bidder::class;
  protected $biddersDataType = 'array';
  /** @param Bidder[] */
  public function setBidders($bidders)
  {
    $this->bidders = $bidders;
  }
  /** @return Bidder[] */
  public function getBidders()
  {
    return $this->bidders;
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

class ListBuyersResponse extends \Google\Collection
{
  /** @var Buyer[] */
  public $buyers;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'buyers';
  protected $buyersType = Buyer::class;
  protected $buyersDataType = 'array';
  /** @param Buyer[] */
  public function setBuyers($buyers)
  {
    $this->buyers = $buyers;
  }
  /** @return Buyer[] */
  public function getBuyers()
  {
    return $this->buyers;
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

class ListEndpointsResponse extends \Google\Collection
{
  /** @var Endpoint[] */
  public $endpoints;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'endpoints';
  protected $endpointsType = Endpoint::class;
  protected $endpointsDataType = 'array';
  /** @param Endpoint[] */
  public function setEndpoints($endpoints)
  {
    $this->endpoints = $endpoints;
  }
  /** @return Endpoint[] */
  public function getEndpoints()
  {
    return $this->endpoints;
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

class ListPretargetingConfigsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PretargetingConfig[] */
  public $pretargetingConfigs;
  protected $collection_key = 'pretargetingConfigs';
  protected $pretargetingConfigsType = PretargetingConfig::class;
  protected $pretargetingConfigsDataType = 'array';
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
  /** @param PretargetingConfig[] */
  public function setPretargetingConfigs($pretargetingConfigs)
  {
    $this->pretargetingConfigs = $pretargetingConfigs;
  }
  /** @return PretargetingConfig[] */
  public function getPretargetingConfigs()
  {
    return $this->pretargetingConfigs;
  }
}

class ListPublisherConnectionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PublisherConnection[] */
  public $publisherConnections;
  protected $collection_key = 'publisherConnections';
  protected $publisherConnectionsType = PublisherConnection::class;
  protected $publisherConnectionsDataType = 'array';
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
  /** @param PublisherConnection[] */
  public function setPublisherConnections($publisherConnections)
  {
    $this->publisherConnections = $publisherConnections;
  }
  /** @return PublisherConnection[] */
  public function getPublisherConnections()
  {
    return $this->publisherConnections;
  }
}

class ListUserListsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var UserList[] */
  public $userLists;
  protected $collection_key = 'userLists';
  protected $userListsType = UserList::class;
  protected $userListsDataType = 'array';
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
  /** @param UserList[] */
  public function setUserLists($userLists)
  {
    $this->userLists = $userLists;
  }
  /** @return UserList[] */
  public function getUserLists()
  {
    return $this->userLists;
  }
}

class MediaFile extends \Google\Model
{
  /** @var string */
  public $bitrate;
  /** @var string */
  public $mimeType;

  /** @param string */
  public function setBitrate($bitrate)
  {
    $this->bitrate = $bitrate;
  }
  /** @return string */
  public function getBitrate()
  {
    return $this->bitrate;
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
}

class NativeContent extends \Google\Model
{
  /** @var string */
  public $advertiserName;
  /** @var Image */
  public $appIcon;
  /** @var string */
  public $body;
  /** @var string */
  public $callToAction;
  /** @var string */
  public $clickLinkUrl;
  /** @var string */
  public $clickTrackingUrl;
  /** @var string */
  public $headline;
  /** @var Image */
  public $image;
  /** @var Image */
  public $logo;
  /** @var string */
  public $priceDisplayText;
  public $starRating;
  /** @var string */
  public $videoUrl;
  /** @var string */
  public $videoVastXml;
  protected $appIconType = Image::class;
  protected $appIconDataType = '';
  protected $imageType = Image::class;
  protected $imageDataType = '';
  protected $logoType = Image::class;
  protected $logoDataType = '';
  /** @param string */
  public function setAdvertiserName($advertiserName)
  {
    $this->advertiserName = $advertiserName;
  }
  /** @return string */
  public function getAdvertiserName()
  {
    return $this->advertiserName;
  }
  /** @param Image */
  public function setAppIcon(Image $appIcon)
  {
    $this->appIcon = $appIcon;
  }
  /** @return Image */
  public function getAppIcon()
  {
    return $this->appIcon;
  }
  /** @param string */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /** @return string */
  public function getBody()
  {
    return $this->body;
  }
  /** @param string */
  public function setCallToAction($callToAction)
  {
    $this->callToAction = $callToAction;
  }
  /** @return string */
  public function getCallToAction()
  {
    return $this->callToAction;
  }
  /** @param string */
  public function setClickLinkUrl($clickLinkUrl)
  {
    $this->clickLinkUrl = $clickLinkUrl;
  }
  /** @return string */
  public function getClickLinkUrl()
  {
    return $this->clickLinkUrl;
  }
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
  /** @param string */
  public function setHeadline($headline)
  {
    $this->headline = $headline;
  }
  /** @return string */
  public function getHeadline()
  {
    return $this->headline;
  }
  /** @param Image */
  public function setImage(Image $image)
  {
    $this->image = $image;
  }
  /** @return Image */
  public function getImage()
  {
    return $this->image;
  }
  /** @param Image */
  public function setLogo(Image $logo)
  {
    $this->logo = $logo;
  }
  /** @return Image */
  public function getLogo()
  {
    return $this->logo;
  }
  /** @param string */
  public function setPriceDisplayText($priceDisplayText)
  {
    $this->priceDisplayText = $priceDisplayText;
  }
  /** @return string */
  public function getPriceDisplayText()
  {
    return $this->priceDisplayText;
  }
  public function setStarRating($starRating)
  {
    $this->starRating = $starRating;
  }
  public function getStarRating()
  {
    return $this->starRating;
  }
  /** @param string */
  public function setVideoUrl($videoUrl)
  {
    $this->videoUrl = $videoUrl;
  }
  /** @return string */
  public function getVideoUrl()
  {
    return $this->videoUrl;
  }
  /** @param string */
  public function setVideoVastXml($videoVastXml)
  {
    $this->videoVastXml = $videoVastXml;
  }
  /** @return string */
  public function getVideoVastXml()
  {
    return $this->videoVastXml;
  }
}

class NumericTargetingDimension extends \Google\Collection
{
  /** @var string[] */
  public $excludedIds;
  /** @var string[] */
  public $includedIds;
  protected $collection_key = 'includedIds';
  /** @param string[] */
  public function setExcludedIds($excludedIds)
  {
    $this->excludedIds = $excludedIds;
  }
  /** @return string[] */
  public function getExcludedIds()
  {
    return $this->excludedIds;
  }
  /** @param string[] */
  public function setIncludedIds($includedIds)
  {
    $this->includedIds = $includedIds;
  }
  /** @return string[] */
  public function getIncludedIds()
  {
    return $this->includedIds;
  }
}

class OpenUserListRequest extends \Google\Model
{
}

class PolicyCompliance extends \Google\Collection
{
  /** @var string */
  public $status;
  /** @var PolicyTopicEntry[] */
  public $topics;
  protected $collection_key = 'topics';
  protected $topicsType = PolicyTopicEntry::class;
  protected $topicsDataType = 'array';
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
  /** @param PolicyTopicEntry[] */
  public function setTopics($topics)
  {
    $this->topics = $topics;
  }
  /** @return PolicyTopicEntry[] */
  public function getTopics()
  {
    return $this->topics;
  }
}

class PolicyTopicEntry extends \Google\Collection
{
  /** @var PolicyTopicEvidence[] */
  public $evidences;
  /** @var string */
  public $helpCenterUrl;
  /** @var string */
  public $policyTopic;
  protected $collection_key = 'evidences';
  protected $evidencesType = PolicyTopicEvidence::class;
  protected $evidencesDataType = 'array';
  /** @param PolicyTopicEvidence[] */
  public function setEvidences($evidences)
  {
    $this->evidences = $evidences;
  }
  /** @return PolicyTopicEvidence[] */
  public function getEvidences()
  {
    return $this->evidences;
  }
  /** @param string */
  public function setHelpCenterUrl($helpCenterUrl)
  {
    $this->helpCenterUrl = $helpCenterUrl;
  }
  /** @return string */
  public function getHelpCenterUrl()
  {
    return $this->helpCenterUrl;
  }
  /** @param string */
  public function setPolicyTopic($policyTopic)
  {
    $this->policyTopic = $policyTopic;
  }
  /** @return string */
  public function getPolicyTopic()
  {
    return $this->policyTopic;
  }
}

class PolicyTopicEvidence extends \Google\Model
{
  /** @var DestinationNotCrawlableEvidence */
  public $destinationNotCrawlable;
  /** @var DestinationNotWorkingEvidence */
  public $destinationNotWorking;
  /** @var DestinationUrlEvidence */
  public $destinationUrl;
  /** @var DomainCallEvidence */
  public $domainCall;
  /** @var DownloadSizeEvidence */
  public $downloadSize;
  /** @var HttpCallEvidence */
  public $httpCall;
  /** @var HttpCookieEvidence */
  public $httpCookie;
  protected $destinationNotCrawlableType = DestinationNotCrawlableEvidence::class;
  protected $destinationNotCrawlableDataType = '';
  protected $destinationNotWorkingType = DestinationNotWorkingEvidence::class;
  protected $destinationNotWorkingDataType = '';
  protected $destinationUrlType = DestinationUrlEvidence::class;
  protected $destinationUrlDataType = '';
  protected $domainCallType = DomainCallEvidence::class;
  protected $domainCallDataType = '';
  protected $downloadSizeType = DownloadSizeEvidence::class;
  protected $downloadSizeDataType = '';
  protected $httpCallType = HttpCallEvidence::class;
  protected $httpCallDataType = '';
  protected $httpCookieType = HttpCookieEvidence::class;
  protected $httpCookieDataType = '';
  /** @param DestinationNotCrawlableEvidence */
  public function setDestinationNotCrawlable(DestinationNotCrawlableEvidence $destinationNotCrawlable)
  {
    $this->destinationNotCrawlable = $destinationNotCrawlable;
  }
  /** @return DestinationNotCrawlableEvidence */
  public function getDestinationNotCrawlable()
  {
    return $this->destinationNotCrawlable;
  }
  /** @param DestinationNotWorkingEvidence */
  public function setDestinationNotWorking(DestinationNotWorkingEvidence $destinationNotWorking)
  {
    $this->destinationNotWorking = $destinationNotWorking;
  }
  /** @return DestinationNotWorkingEvidence */
  public function getDestinationNotWorking()
  {
    return $this->destinationNotWorking;
  }
  /** @param DestinationUrlEvidence */
  public function setDestinationUrl(DestinationUrlEvidence $destinationUrl)
  {
    $this->destinationUrl = $destinationUrl;
  }
  /** @return DestinationUrlEvidence */
  public function getDestinationUrl()
  {
    return $this->destinationUrl;
  }
  /** @param DomainCallEvidence */
  public function setDomainCall(DomainCallEvidence $domainCall)
  {
    $this->domainCall = $domainCall;
  }
  /** @return DomainCallEvidence */
  public function getDomainCall()
  {
    return $this->domainCall;
  }
  /** @param DownloadSizeEvidence */
  public function setDownloadSize(DownloadSizeEvidence $downloadSize)
  {
    $this->downloadSize = $downloadSize;
  }
  /** @return DownloadSizeEvidence */
  public function getDownloadSize()
  {
    return $this->downloadSize;
  }
  /** @param HttpCallEvidence */
  public function setHttpCall(HttpCallEvidence $httpCall)
  {
    $this->httpCall = $httpCall;
  }
  /** @return HttpCallEvidence */
  public function getHttpCall()
  {
    return $this->httpCall;
  }
  /** @param HttpCookieEvidence */
  public function setHttpCookie(HttpCookieEvidence $httpCookie)
  {
    $this->httpCookie = $httpCookie;
  }
  /** @return HttpCookieEvidence */
  public function getHttpCookie()
  {
    return $this->httpCookie;
  }
}

class PretargetingConfig extends \Google\Collection
{
  /** @var string[] */
  public $allowedUserTargetingModes;
  /** @var AppTargeting */
  public $appTargeting;
  /** @var string */
  public $billingId;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $excludedContentLabelIds;
  /** @var NumericTargetingDimension */
  public $geoTargeting;
  /** @var CreativeDimensions[] */
  public $includedCreativeDimensions;
  /** @var string[] */
  public $includedEnvironments;
  /** @var string[] */
  public $includedFormats;
  /** @var string[] */
  public $includedLanguages;
  /** @var string[] */
  public $includedMobileOperatingSystemIds;
  /** @var string[] */
  public $includedPlatforms;
  /** @var string[] */
  public $includedUserIdTypes;
  /** @var string */
  public $interstitialTargeting;
  /** @var string[] */
  public $invalidGeoIds;
  /** @var string */
  public $maximumQps;
  /** @var int */
  public $minimumViewabilityDecile;
  /** @var string */
  public $name;
  /** @var StringTargetingDimension */
  public $publisherTargeting;
  /** @var string */
  public $state;
  /** @var NumericTargetingDimension */
  public $userListTargeting;
  /** @var NumericTargetingDimension */
  public $verticalTargeting;
  /** @var StringTargetingDimension */
  public $webTargeting;
  protected $collection_key = 'invalidGeoIds';
  protected $appTargetingType = AppTargeting::class;
  protected $appTargetingDataType = '';
  protected $geoTargetingType = NumericTargetingDimension::class;
  protected $geoTargetingDataType = '';
  protected $includedCreativeDimensionsType = CreativeDimensions::class;
  protected $includedCreativeDimensionsDataType = 'array';
  protected $publisherTargetingType = StringTargetingDimension::class;
  protected $publisherTargetingDataType = '';
  protected $userListTargetingType = NumericTargetingDimension::class;
  protected $userListTargetingDataType = '';
  protected $verticalTargetingType = NumericTargetingDimension::class;
  protected $verticalTargetingDataType = '';
  protected $webTargetingType = StringTargetingDimension::class;
  protected $webTargetingDataType = '';
  /** @param string[] */
  public function setAllowedUserTargetingModes($allowedUserTargetingModes)
  {
    $this->allowedUserTargetingModes = $allowedUserTargetingModes;
  }
  /** @return string[] */
  public function getAllowedUserTargetingModes()
  {
    return $this->allowedUserTargetingModes;
  }
  /** @param AppTargeting */
  public function setAppTargeting(AppTargeting $appTargeting)
  {
    $this->appTargeting = $appTargeting;
  }
  /** @return AppTargeting */
  public function getAppTargeting()
  {
    return $this->appTargeting;
  }
  /** @param string */
  public function setBillingId($billingId)
  {
    $this->billingId = $billingId;
  }
  /** @return string */
  public function getBillingId()
  {
    return $this->billingId;
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
  public function setExcludedContentLabelIds($excludedContentLabelIds)
  {
    $this->excludedContentLabelIds = $excludedContentLabelIds;
  }
  /** @return string[] */
  public function getExcludedContentLabelIds()
  {
    return $this->excludedContentLabelIds;
  }
  /** @param NumericTargetingDimension */
  public function setGeoTargeting(NumericTargetingDimension $geoTargeting)
  {
    $this->geoTargeting = $geoTargeting;
  }
  /** @return NumericTargetingDimension */
  public function getGeoTargeting()
  {
    return $this->geoTargeting;
  }
  /** @param CreativeDimensions[] */
  public function setIncludedCreativeDimensions($includedCreativeDimensions)
  {
    $this->includedCreativeDimensions = $includedCreativeDimensions;
  }
  /** @return CreativeDimensions[] */
  public function getIncludedCreativeDimensions()
  {
    return $this->includedCreativeDimensions;
  }
  /** @param string[] */
  public function setIncludedEnvironments($includedEnvironments)
  {
    $this->includedEnvironments = $includedEnvironments;
  }
  /** @return string[] */
  public function getIncludedEnvironments()
  {
    return $this->includedEnvironments;
  }
  /** @param string[] */
  public function setIncludedFormats($includedFormats)
  {
    $this->includedFormats = $includedFormats;
  }
  /** @return string[] */
  public function getIncludedFormats()
  {
    return $this->includedFormats;
  }
  /** @param string[] */
  public function setIncludedLanguages($includedLanguages)
  {
    $this->includedLanguages = $includedLanguages;
  }
  /** @return string[] */
  public function getIncludedLanguages()
  {
    return $this->includedLanguages;
  }
  /** @param string[] */
  public function setIncludedMobileOperatingSystemIds($includedMobileOperatingSystemIds)
  {
    $this->includedMobileOperatingSystemIds = $includedMobileOperatingSystemIds;
  }
  /** @return string[] */
  public function getIncludedMobileOperatingSystemIds()
  {
    return $this->includedMobileOperatingSystemIds;
  }
  /** @param string[] */
  public function setIncludedPlatforms($includedPlatforms)
  {
    $this->includedPlatforms = $includedPlatforms;
  }
  /** @return string[] */
  public function getIncludedPlatforms()
  {
    return $this->includedPlatforms;
  }
  /** @param string[] */
  public function setIncludedUserIdTypes($includedUserIdTypes)
  {
    $this->includedUserIdTypes = $includedUserIdTypes;
  }
  /** @return string[] */
  public function getIncludedUserIdTypes()
  {
    return $this->includedUserIdTypes;
  }
  /** @param string */
  public function setInterstitialTargeting($interstitialTargeting)
  {
    $this->interstitialTargeting = $interstitialTargeting;
  }
  /** @return string */
  public function getInterstitialTargeting()
  {
    return $this->interstitialTargeting;
  }
  /** @param string[] */
  public function setInvalidGeoIds($invalidGeoIds)
  {
    $this->invalidGeoIds = $invalidGeoIds;
  }
  /** @return string[] */
  public function getInvalidGeoIds()
  {
    return $this->invalidGeoIds;
  }
  /** @param string */
  public function setMaximumQps($maximumQps)
  {
    $this->maximumQps = $maximumQps;
  }
  /** @return string */
  public function getMaximumQps()
  {
    return $this->maximumQps;
  }
  /** @param int */
  public function setMinimumViewabilityDecile($minimumViewabilityDecile)
  {
    $this->minimumViewabilityDecile = $minimumViewabilityDecile;
  }
  /** @return int */
  public function getMinimumViewabilityDecile()
  {
    return $this->minimumViewabilityDecile;
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
  /** @param StringTargetingDimension */
  public function setPublisherTargeting(StringTargetingDimension $publisherTargeting)
  {
    $this->publisherTargeting = $publisherTargeting;
  }
  /** @return StringTargetingDimension */
  public function getPublisherTargeting()
  {
    return $this->publisherTargeting;
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
  /** @param NumericTargetingDimension */
  public function setUserListTargeting(NumericTargetingDimension $userListTargeting)
  {
    $this->userListTargeting = $userListTargeting;
  }
  /** @return NumericTargetingDimension */
  public function getUserListTargeting()
  {
    return $this->userListTargeting;
  }
  /** @param NumericTargetingDimension */
  public function setVerticalTargeting(NumericTargetingDimension $verticalTargeting)
  {
    $this->verticalTargeting = $verticalTargeting;
  }
  /** @return NumericTargetingDimension */
  public function getVerticalTargeting()
  {
    return $this->verticalTargeting;
  }
  /** @param StringTargetingDimension */
  public function setWebTargeting(StringTargetingDimension $webTargeting)
  {
    $this->webTargeting = $webTargeting;
  }
  /** @return StringTargetingDimension */
  public function getWebTargeting()
  {
    return $this->webTargeting;
  }
}

class PublisherConnection extends \Google\Model
{
  /** @var string */
  public $biddingState;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $publisherPlatform;

  /** @param string */
  public function setBiddingState($biddingState)
  {
    $this->biddingState = $biddingState;
  }
  /** @return string */
  public function getBiddingState()
  {
    return $this->biddingState;
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
  public function setPublisherPlatform($publisherPlatform)
  {
    $this->publisherPlatform = $publisherPlatform;
  }
  /** @return string */
  public function getPublisherPlatform()
  {
    return $this->publisherPlatform;
  }
}

class RealtimebiddingEmpty extends \Google\Model
{
}

class RemoveTargetedAppsRequest extends \Google\Collection
{
  /** @var string[] */
  public $appIds;
  protected $collection_key = 'appIds';
  /** @param string[] */
  public function setAppIds($appIds)
  {
    $this->appIds = $appIds;
  }
  /** @return string[] */
  public function getAppIds()
  {
    return $this->appIds;
  }
}

class RemoveTargetedPublishersRequest extends \Google\Collection
{
  /** @var string[] */
  public $publisherIds;
  protected $collection_key = 'publisherIds';
  /** @param string[] */
  public function setPublisherIds($publisherIds)
  {
    $this->publisherIds = $publisherIds;
  }
  /** @return string[] */
  public function getPublisherIds()
  {
    return $this->publisherIds;
  }
}

class RemoveTargetedSitesRequest extends \Google\Collection
{
  /** @var string[] */
  public $sites;
  protected $collection_key = 'sites';
  /** @param string[] */
  public function setSites($sites)
  {
    $this->sites = $sites;
  }
  /** @return string[] */
  public function getSites()
  {
    return $this->sites;
  }
}

class StringTargetingDimension extends \Google\Collection
{
  /** @var string */
  public $targetingMode;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string */
  public function setTargetingMode($targetingMode)
  {
    $this->targetingMode = $targetingMode;
  }
  /** @return string */
  public function getTargetingMode()
  {
    return $this->targetingMode;
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

class SuspendPretargetingConfigRequest extends \Google\Model
{
}

class UrlDownloadSize extends \Google\Model
{
  /** @var int */
  public $downloadSizeKb;
  /** @var string */
  public $normalizedUrl;

  /** @param int */
  public function setDownloadSizeKb($downloadSizeKb)
  {
    $this->downloadSizeKb = $downloadSizeKb;
  }
  /** @return int */
  public function getDownloadSizeKb()
  {
    return $this->downloadSizeKb;
  }
  /** @param string */
  public function setNormalizedUrl($normalizedUrl)
  {
    $this->normalizedUrl = $normalizedUrl;
  }
  /** @return string */
  public function getNormalizedUrl()
  {
    return $this->normalizedUrl;
  }
}

class UrlRestriction extends \Google\Model
{
  /** @var Date */
  public $endDate;
  /** @var string */
  public $restrictionType;
  /** @var Date */
  public $startDate;
  /** @var string */
  public $url;
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
  /** @param string */
  public function setRestrictionType($restrictionType)
  {
    $this->restrictionType = $restrictionType;
  }
  /** @return string */
  public function getRestrictionType()
  {
    return $this->restrictionType;
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

class UserList extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $membershipDurationDays;
  /** @var string */
  public $name;
  /** @var string */
  public $status;
  /** @var UrlRestriction */
  public $urlRestriction;
  protected $urlRestrictionType = UrlRestriction::class;
  protected $urlRestrictionDataType = '';
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
  public function setMembershipDurationDays($membershipDurationDays)
  {
    $this->membershipDurationDays = $membershipDurationDays;
  }
  /** @return string */
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
  /** @param UrlRestriction */
  public function setUrlRestriction(UrlRestriction $urlRestriction)
  {
    $this->urlRestriction = $urlRestriction;
  }
  /** @return UrlRestriction */
  public function getUrlRestriction()
  {
    return $this->urlRestriction;
  }
}

class VideoContent extends \Google\Model
{
  /** @var VideoMetadata */
  public $videoMetadata;
  /** @var string */
  public $videoUrl;
  /** @var string */
  public $videoVastXml;
  protected $videoMetadataType = VideoMetadata::class;
  protected $videoMetadataDataType = '';
  /** @param VideoMetadata */
  public function setVideoMetadata(VideoMetadata $videoMetadata)
  {
    $this->videoMetadata = $videoMetadata;
  }
  /** @return VideoMetadata */
  public function getVideoMetadata()
  {
    return $this->videoMetadata;
  }
  /** @param string */
  public function setVideoUrl($videoUrl)
  {
    $this->videoUrl = $videoUrl;
  }
  /** @return string */
  public function getVideoUrl()
  {
    return $this->videoUrl;
  }
  /** @param string */
  public function setVideoVastXml($videoVastXml)
  {
    $this->videoVastXml = $videoVastXml;
  }
  /** @return string */
  public function getVideoVastXml()
  {
    return $this->videoVastXml;
  }
}

class VideoMetadata extends \Google\Collection
{
  /** @var string */
  public $duration;
  /** @var bool */
  public $isValidVast;
  /** @var bool */
  public $isVpaid;
  /** @var MediaFile[] */
  public $mediaFiles;
  /** @var string */
  public $skipOffset;
  /** @var string */
  public $vastVersion;
  protected $collection_key = 'mediaFiles';
  protected $mediaFilesType = MediaFile::class;
  protected $mediaFilesDataType = 'array';
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
  /** @param bool */
  public function setIsValidVast($isValidVast)
  {
    $this->isValidVast = $isValidVast;
  }
  /** @return bool */
  public function getIsValidVast()
  {
    return $this->isValidVast;
  }
  /** @param bool */
  public function setIsVpaid($isVpaid)
  {
    $this->isVpaid = $isVpaid;
  }
  /** @return bool */
  public function getIsVpaid()
  {
    return $this->isVpaid;
  }
  /** @param MediaFile[] */
  public function setMediaFiles($mediaFiles)
  {
    $this->mediaFiles = $mediaFiles;
  }
  /** @return MediaFile[] */
  public function getMediaFiles()
  {
    return $this->mediaFiles;
  }
  /** @param string */
  public function setSkipOffset($skipOffset)
  {
    $this->skipOffset = $skipOffset;
  }
  /** @return string */
  public function getSkipOffset()
  {
    return $this->skipOffset;
  }
  /** @param string */
  public function setVastVersion($vastVersion)
  {
    $this->vastVersion = $vastVersion;
  }
  /** @return string */
  public function getVastVersion()
  {
    return $this->vastVersion;
  }
}

class WatchCreativesRequest extends \Google\Model
{
}

class WatchCreativesResponse extends \Google\Model
{
  /** @var string */
  public $subscription;
  /** @var string */
  public $topic;

  /** @param string */
  public function setSubscription($subscription)
  {
    $this->subscription = $subscription;
  }
  /** @return string */
  public function getSubscription()
  {
    return $this->subscription;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActivatePretargetingConfigRequest::class, 'Google_Service_RealTimeBidding_ActivatePretargetingConfigRequest');
class_alias(AdTechnologyProviders::class, 'Google_Service_RealTimeBidding_AdTechnologyProviders');
class_alias(AddTargetedAppsRequest::class, 'Google_Service_RealTimeBidding_AddTargetedAppsRequest');
class_alias(AddTargetedPublishersRequest::class, 'Google_Service_RealTimeBidding_AddTargetedPublishersRequest');
class_alias(AddTargetedSitesRequest::class, 'Google_Service_RealTimeBidding_AddTargetedSitesRequest');
class_alias(AdvertiserAndBrand::class, 'Google_Service_RealTimeBidding_AdvertiserAndBrand');
class_alias(AppTargeting::class, 'Google_Service_RealTimeBidding_AppTargeting');
class_alias(BatchApprovePublisherConnectionsRequest::class, 'Google_Service_RealTimeBidding_BatchApprovePublisherConnectionsRequest');
class_alias(BatchApprovePublisherConnectionsResponse::class, 'Google_Service_RealTimeBidding_BatchApprovePublisherConnectionsResponse');
class_alias(BatchRejectPublisherConnectionsRequest::class, 'Google_Service_RealTimeBidding_BatchRejectPublisherConnectionsRequest');
class_alias(BatchRejectPublisherConnectionsResponse::class, 'Google_Service_RealTimeBidding_BatchRejectPublisherConnectionsResponse');
class_alias(Bidder::class, 'Google_Service_RealTimeBidding_Bidder');
class_alias(Buyer::class, 'Google_Service_RealTimeBidding_Buyer');
class_alias(CloseUserListRequest::class, 'Google_Service_RealTimeBidding_CloseUserListRequest');
class_alias(Creative::class, 'Google_Service_RealTimeBidding_Creative');
class_alias(CreativeDimensions::class, 'Google_Service_RealTimeBidding_CreativeDimensions');
class_alias(CreativeServingDecision::class, 'Google_Service_RealTimeBidding_CreativeServingDecision');
class_alias(Date::class, 'Google_Service_RealTimeBidding_Date');
class_alias(DestinationNotCrawlableEvidence::class, 'Google_Service_RealTimeBidding_DestinationNotCrawlableEvidence');
class_alias(DestinationNotWorkingEvidence::class, 'Google_Service_RealTimeBidding_DestinationNotWorkingEvidence');
class_alias(DestinationUrlEvidence::class, 'Google_Service_RealTimeBidding_DestinationUrlEvidence');
class_alias(DomainCallEvidence::class, 'Google_Service_RealTimeBidding_DomainCallEvidence');
class_alias(DomainCalls::class, 'Google_Service_RealTimeBidding_DomainCalls');
class_alias(DownloadSizeEvidence::class, 'Google_Service_RealTimeBidding_DownloadSizeEvidence');
class_alias(Endpoint::class, 'Google_Service_RealTimeBidding_Endpoint');
class_alias(GetRemarketingTagResponse::class, 'Google_Service_RealTimeBidding_GetRemarketingTagResponse');
class_alias(HtmlContent::class, 'Google_Service_RealTimeBidding_HtmlContent');
class_alias(HttpCallEvidence::class, 'Google_Service_RealTimeBidding_HttpCallEvidence');
class_alias(HttpCookieEvidence::class, 'Google_Service_RealTimeBidding_HttpCookieEvidence');
class_alias(Image::class, 'Google_Service_RealTimeBidding_Image');
class_alias(ListBiddersResponse::class, 'Google_Service_RealTimeBidding_ListBiddersResponse');
class_alias(ListBuyersResponse::class, 'Google_Service_RealTimeBidding_ListBuyersResponse');
class_alias(ListCreativesResponse::class, 'Google_Service_RealTimeBidding_ListCreativesResponse');
class_alias(ListEndpointsResponse::class, 'Google_Service_RealTimeBidding_ListEndpointsResponse');
class_alias(ListPretargetingConfigsResponse::class, 'Google_Service_RealTimeBidding_ListPretargetingConfigsResponse');
class_alias(ListPublisherConnectionsResponse::class, 'Google_Service_RealTimeBidding_ListPublisherConnectionsResponse');
class_alias(ListUserListsResponse::class, 'Google_Service_RealTimeBidding_ListUserListsResponse');
class_alias(MediaFile::class, 'Google_Service_RealTimeBidding_MediaFile');
class_alias(NativeContent::class, 'Google_Service_RealTimeBidding_NativeContent');
class_alias(NumericTargetingDimension::class, 'Google_Service_RealTimeBidding_NumericTargetingDimension');
class_alias(OpenUserListRequest::class, 'Google_Service_RealTimeBidding_OpenUserListRequest');
class_alias(PolicyCompliance::class, 'Google_Service_RealTimeBidding_PolicyCompliance');
class_alias(PolicyTopicEntry::class, 'Google_Service_RealTimeBidding_PolicyTopicEntry');
class_alias(PolicyTopicEvidence::class, 'Google_Service_RealTimeBidding_PolicyTopicEvidence');
class_alias(PretargetingConfig::class, 'Google_Service_RealTimeBidding_PretargetingConfig');
class_alias(PublisherConnection::class, 'Google_Service_RealTimeBidding_PublisherConnection');
class_alias(RealtimebiddingEmpty::class, 'Google_Service_RealTimeBidding_RealtimebiddingEmpty');
class_alias(RemoveTargetedAppsRequest::class, 'Google_Service_RealTimeBidding_RemoveTargetedAppsRequest');
class_alias(RemoveTargetedPublishersRequest::class, 'Google_Service_RealTimeBidding_RemoveTargetedPublishersRequest');
class_alias(RemoveTargetedSitesRequest::class, 'Google_Service_RealTimeBidding_RemoveTargetedSitesRequest');
class_alias(StringTargetingDimension::class, 'Google_Service_RealTimeBidding_StringTargetingDimension');
class_alias(SuspendPretargetingConfigRequest::class, 'Google_Service_RealTimeBidding_SuspendPretargetingConfigRequest');
class_alias(UrlDownloadSize::class, 'Google_Service_RealTimeBidding_UrlDownloadSize');
class_alias(UrlRestriction::class, 'Google_Service_RealTimeBidding_UrlRestriction');
class_alias(UserList::class, 'Google_Service_RealTimeBidding_UserList');
class_alias(VideoContent::class, 'Google_Service_RealTimeBidding_VideoContent');
class_alias(VideoMetadata::class, 'Google_Service_RealTimeBidding_VideoMetadata');
class_alias(WatchCreativesRequest::class, 'Google_Service_RealTimeBidding_WatchCreativesRequest');
class_alias(WatchCreativesResponse::class, 'Google_Service_RealTimeBidding_WatchCreativesResponse');
