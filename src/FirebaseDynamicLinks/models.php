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

namespace Google\Service\FirebaseDynamicLinks;

class AnalyticsInfo extends \Google\Model
{
  /** @var GooglePlayAnalytics */
  public $googlePlayAnalytics;
  /** @var ITunesConnectAnalytics */
  public $itunesConnectAnalytics;
  protected $googlePlayAnalyticsType = GooglePlayAnalytics::class;
  protected $googlePlayAnalyticsDataType = '';
  protected $itunesConnectAnalyticsType = ITunesConnectAnalytics::class;
  protected $itunesConnectAnalyticsDataType = '';
  /** @param GooglePlayAnalytics */
  public function setGooglePlayAnalytics(GooglePlayAnalytics $googlePlayAnalytics)
  {
    $this->googlePlayAnalytics = $googlePlayAnalytics;
  }
  /** @return GooglePlayAnalytics */
  public function getGooglePlayAnalytics()
  {
    return $this->googlePlayAnalytics;
  }
  /** @param ITunesConnectAnalytics */
  public function setItunesConnectAnalytics(ITunesConnectAnalytics $itunesConnectAnalytics)
  {
    $this->itunesConnectAnalytics = $itunesConnectAnalytics;
  }
  /** @return ITunesConnectAnalytics */
  public function getItunesConnectAnalytics()
  {
    return $this->itunesConnectAnalytics;
  }
}

class AndroidInfo extends \Google\Model
{
  /** @var string */
  public $androidFallbackLink;
  /** @var string */
  public $androidLink;
  /** @var string */
  public $androidMinPackageVersionCode;
  /** @var string */
  public $androidPackageName;

  /** @param string */
  public function setAndroidFallbackLink($androidFallbackLink)
  {
    $this->androidFallbackLink = $androidFallbackLink;
  }
  /** @return string */
  public function getAndroidFallbackLink()
  {
    return $this->androidFallbackLink;
  }
  /** @param string */
  public function setAndroidLink($androidLink)
  {
    $this->androidLink = $androidLink;
  }
  /** @return string */
  public function getAndroidLink()
  {
    return $this->androidLink;
  }
  /** @param string */
  public function setAndroidMinPackageVersionCode($androidMinPackageVersionCode)
  {
    $this->androidMinPackageVersionCode = $androidMinPackageVersionCode;
  }
  /** @return string */
  public function getAndroidMinPackageVersionCode()
  {
    return $this->androidMinPackageVersionCode;
  }
  /** @param string */
  public function setAndroidPackageName($androidPackageName)
  {
    $this->androidPackageName = $androidPackageName;
  }
  /** @return string */
  public function getAndroidPackageName()
  {
    return $this->androidPackageName;
  }
}

class CreateManagedShortLinkRequest extends \Google\Model
{
  /** @var DynamicLinkInfo */
  public $dynamicLinkInfo;
  /** @var string */
  public $longDynamicLink;
  /** @var string */
  public $name;
  /** @var string */
  public $sdkVersion;
  /** @var Suffix */
  public $suffix;
  protected $dynamicLinkInfoType = DynamicLinkInfo::class;
  protected $dynamicLinkInfoDataType = '';
  protected $suffixType = Suffix::class;
  protected $suffixDataType = '';
  /** @param DynamicLinkInfo */
  public function setDynamicLinkInfo(DynamicLinkInfo $dynamicLinkInfo)
  {
    $this->dynamicLinkInfo = $dynamicLinkInfo;
  }
  /** @return DynamicLinkInfo */
  public function getDynamicLinkInfo()
  {
    return $this->dynamicLinkInfo;
  }
  /** @param string */
  public function setLongDynamicLink($longDynamicLink)
  {
    $this->longDynamicLink = $longDynamicLink;
  }
  /** @return string */
  public function getLongDynamicLink()
  {
    return $this->longDynamicLink;
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
  public function setSdkVersion($sdkVersion)
  {
    $this->sdkVersion = $sdkVersion;
  }
  /** @return string */
  public function getSdkVersion()
  {
    return $this->sdkVersion;
  }
  /** @param Suffix */
  public function setSuffix(Suffix $suffix)
  {
    $this->suffix = $suffix;
  }
  /** @return Suffix */
  public function getSuffix()
  {
    return $this->suffix;
  }
}

class CreateManagedShortLinkResponse extends \Google\Collection
{
  /** @var ManagedShortLink */
  public $managedShortLink;
  /** @var string */
  public $previewLink;
  /** @var DynamicLinkWarning[] */
  public $warning;
  protected $collection_key = 'warning';
  protected $managedShortLinkType = ManagedShortLink::class;
  protected $managedShortLinkDataType = '';
  protected $warningType = DynamicLinkWarning::class;
  protected $warningDataType = 'array';
  /** @param ManagedShortLink */
  public function setManagedShortLink(ManagedShortLink $managedShortLink)
  {
    $this->managedShortLink = $managedShortLink;
  }
  /** @return ManagedShortLink */
  public function getManagedShortLink()
  {
    return $this->managedShortLink;
  }
  /** @param string */
  public function setPreviewLink($previewLink)
  {
    $this->previewLink = $previewLink;
  }
  /** @return string */
  public function getPreviewLink()
  {
    return $this->previewLink;
  }
  /** @param DynamicLinkWarning[] */
  public function setWarning($warning)
  {
    $this->warning = $warning;
  }
  /** @return DynamicLinkWarning[] */
  public function getWarning()
  {
    return $this->warning;
  }
}

class CreateShortDynamicLinkRequest extends \Google\Model
{
  /** @var DynamicLinkInfo */
  public $dynamicLinkInfo;
  /** @var string */
  public $longDynamicLink;
  /** @var string */
  public $sdkVersion;
  /** @var Suffix */
  public $suffix;
  protected $dynamicLinkInfoType = DynamicLinkInfo::class;
  protected $dynamicLinkInfoDataType = '';
  protected $suffixType = Suffix::class;
  protected $suffixDataType = '';
  /** @param DynamicLinkInfo */
  public function setDynamicLinkInfo(DynamicLinkInfo $dynamicLinkInfo)
  {
    $this->dynamicLinkInfo = $dynamicLinkInfo;
  }
  /** @return DynamicLinkInfo */
  public function getDynamicLinkInfo()
  {
    return $this->dynamicLinkInfo;
  }
  /** @param string */
  public function setLongDynamicLink($longDynamicLink)
  {
    $this->longDynamicLink = $longDynamicLink;
  }
  /** @return string */
  public function getLongDynamicLink()
  {
    return $this->longDynamicLink;
  }
  /** @param string */
  public function setSdkVersion($sdkVersion)
  {
    $this->sdkVersion = $sdkVersion;
  }
  /** @return string */
  public function getSdkVersion()
  {
    return $this->sdkVersion;
  }
  /** @param Suffix */
  public function setSuffix(Suffix $suffix)
  {
    $this->suffix = $suffix;
  }
  /** @return Suffix */
  public function getSuffix()
  {
    return $this->suffix;
  }
}

class CreateShortDynamicLinkResponse extends \Google\Collection
{
  /** @var string */
  public $previewLink;
  /** @var string */
  public $shortLink;
  /** @var DynamicLinkWarning[] */
  public $warning;
  protected $collection_key = 'warning';
  protected $warningType = DynamicLinkWarning::class;
  protected $warningDataType = 'array';
  /** @param string */
  public function setPreviewLink($previewLink)
  {
    $this->previewLink = $previewLink;
  }
  /** @return string */
  public function getPreviewLink()
  {
    return $this->previewLink;
  }
  /** @param string */
  public function setShortLink($shortLink)
  {
    $this->shortLink = $shortLink;
  }
  /** @return string */
  public function getShortLink()
  {
    return $this->shortLink;
  }
  /** @param DynamicLinkWarning[] */
  public function setWarning($warning)
  {
    $this->warning = $warning;
  }
  /** @return DynamicLinkWarning[] */
  public function getWarning()
  {
    return $this->warning;
  }
}

class DesktopInfo extends \Google\Model
{
  /** @var string */
  public $desktopFallbackLink;

  /** @param string */
  public function setDesktopFallbackLink($desktopFallbackLink)
  {
    $this->desktopFallbackLink = $desktopFallbackLink;
  }
  /** @return string */
  public function getDesktopFallbackLink()
  {
    return $this->desktopFallbackLink;
  }
}

class DeviceInfo extends \Google\Model
{
  /** @var string */
  public $deviceModelName;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $languageCodeFromWebview;
  /** @var string */
  public $languageCodeRaw;
  /** @var string */
  public $screenResolutionHeight;
  /** @var string */
  public $screenResolutionWidth;
  /** @var string */
  public $timezone;

  /** @param string */
  public function setDeviceModelName($deviceModelName)
  {
    $this->deviceModelName = $deviceModelName;
  }
  /** @return string */
  public function getDeviceModelName()
  {
    return $this->deviceModelName;
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
  public function setLanguageCodeFromWebview($languageCodeFromWebview)
  {
    $this->languageCodeFromWebview = $languageCodeFromWebview;
  }
  /** @return string */
  public function getLanguageCodeFromWebview()
  {
    return $this->languageCodeFromWebview;
  }
  /** @param string */
  public function setLanguageCodeRaw($languageCodeRaw)
  {
    $this->languageCodeRaw = $languageCodeRaw;
  }
  /** @return string */
  public function getLanguageCodeRaw()
  {
    return $this->languageCodeRaw;
  }
  /** @param string */
  public function setScreenResolutionHeight($screenResolutionHeight)
  {
    $this->screenResolutionHeight = $screenResolutionHeight;
  }
  /** @return string */
  public function getScreenResolutionHeight()
  {
    return $this->screenResolutionHeight;
  }
  /** @param string */
  public function setScreenResolutionWidth($screenResolutionWidth)
  {
    $this->screenResolutionWidth = $screenResolutionWidth;
  }
  /** @return string */
  public function getScreenResolutionWidth()
  {
    return $this->screenResolutionWidth;
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

class DynamicLinkEventStat extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var string */
  public $event;
  /** @var string */
  public $platform;

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
  /** @param string */
  public function setEvent($event)
  {
    $this->event = $event;
  }
  /** @return string */
  public function getEvent()
  {
    return $this->event;
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
}

class DynamicLinkInfo extends \Google\Model
{
  /** @var AnalyticsInfo */
  public $analyticsInfo;
  /** @var AndroidInfo */
  public $androidInfo;
  /** @var DesktopInfo */
  public $desktopInfo;
  /** @var string */
  public $domainUriPrefix;
  /** @var string */
  public $dynamicLinkDomain;
  /** @var IosInfo */
  public $iosInfo;
  /** @var string */
  public $link;
  /** @var NavigationInfo */
  public $navigationInfo;
  /** @var SocialMetaTagInfo */
  public $socialMetaTagInfo;
  protected $analyticsInfoType = AnalyticsInfo::class;
  protected $analyticsInfoDataType = '';
  protected $androidInfoType = AndroidInfo::class;
  protected $androidInfoDataType = '';
  protected $desktopInfoType = DesktopInfo::class;
  protected $desktopInfoDataType = '';
  protected $iosInfoType = IosInfo::class;
  protected $iosInfoDataType = '';
  protected $navigationInfoType = NavigationInfo::class;
  protected $navigationInfoDataType = '';
  protected $socialMetaTagInfoType = SocialMetaTagInfo::class;
  protected $socialMetaTagInfoDataType = '';
  /** @param AnalyticsInfo */
  public function setAnalyticsInfo(AnalyticsInfo $analyticsInfo)
  {
    $this->analyticsInfo = $analyticsInfo;
  }
  /** @return AnalyticsInfo */
  public function getAnalyticsInfo()
  {
    return $this->analyticsInfo;
  }
  /** @param AndroidInfo */
  public function setAndroidInfo(AndroidInfo $androidInfo)
  {
    $this->androidInfo = $androidInfo;
  }
  /** @return AndroidInfo */
  public function getAndroidInfo()
  {
    return $this->androidInfo;
  }
  /** @param DesktopInfo */
  public function setDesktopInfo(DesktopInfo $desktopInfo)
  {
    $this->desktopInfo = $desktopInfo;
  }
  /** @return DesktopInfo */
  public function getDesktopInfo()
  {
    return $this->desktopInfo;
  }
  /** @param string */
  public function setDomainUriPrefix($domainUriPrefix)
  {
    $this->domainUriPrefix = $domainUriPrefix;
  }
  /** @return string */
  public function getDomainUriPrefix()
  {
    return $this->domainUriPrefix;
  }
  /** @param string */
  public function setDynamicLinkDomain($dynamicLinkDomain)
  {
    $this->dynamicLinkDomain = $dynamicLinkDomain;
  }
  /** @return string */
  public function getDynamicLinkDomain()
  {
    return $this->dynamicLinkDomain;
  }
  /** @param IosInfo */
  public function setIosInfo(IosInfo $iosInfo)
  {
    $this->iosInfo = $iosInfo;
  }
  /** @return IosInfo */
  public function getIosInfo()
  {
    return $this->iosInfo;
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
  /** @param NavigationInfo */
  public function setNavigationInfo(NavigationInfo $navigationInfo)
  {
    $this->navigationInfo = $navigationInfo;
  }
  /** @return NavigationInfo */
  public function getNavigationInfo()
  {
    return $this->navigationInfo;
  }
  /** @param SocialMetaTagInfo */
  public function setSocialMetaTagInfo(SocialMetaTagInfo $socialMetaTagInfo)
  {
    $this->socialMetaTagInfo = $socialMetaTagInfo;
  }
  /** @return SocialMetaTagInfo */
  public function getSocialMetaTagInfo()
  {
    return $this->socialMetaTagInfo;
  }
}

class DynamicLinkStats extends \Google\Collection
{
  /** @var DynamicLinkEventStat[] */
  public $linkEventStats;
  protected $collection_key = 'linkEventStats';
  protected $linkEventStatsType = DynamicLinkEventStat::class;
  protected $linkEventStatsDataType = 'array';
  /** @param DynamicLinkEventStat[] */
  public function setLinkEventStats($linkEventStats)
  {
    $this->linkEventStats = $linkEventStats;
  }
  /** @return DynamicLinkEventStat[] */
  public function getLinkEventStats()
  {
    return $this->linkEventStats;
  }
}

class DynamicLinkWarning extends \Google\Model
{
  /** @var string */
  public $warningCode;
  /** @var string */
  public $warningDocumentLink;
  /** @var string */
  public $warningMessage;

  /** @param string */
  public function setWarningCode($warningCode)
  {
    $this->warningCode = $warningCode;
  }
  /** @return string */
  public function getWarningCode()
  {
    return $this->warningCode;
  }
  /** @param string */
  public function setWarningDocumentLink($warningDocumentLink)
  {
    $this->warningDocumentLink = $warningDocumentLink;
  }
  /** @return string */
  public function getWarningDocumentLink()
  {
    return $this->warningDocumentLink;
  }
  /** @param string */
  public function setWarningMessage($warningMessage)
  {
    $this->warningMessage = $warningMessage;
  }
  /** @return string */
  public function getWarningMessage()
  {
    return $this->warningMessage;
  }
}

class GetIosPostInstallAttributionRequest extends \Google\Model
{
  /** @var string */
  public $appInstallationTime;
  /** @var string */
  public $bundleId;
  /** @var DeviceInfo */
  public $device;
  /** @var string */
  public $iosVersion;
  /** @var string */
  public $retrievalMethod;
  /** @var string */
  public $sdkVersion;
  /** @var string */
  public $uniqueMatchLinkToCheck;
  /** @var string */
  public $visualStyle;
  protected $deviceType = DeviceInfo::class;
  protected $deviceDataType = '';
  /** @param string */
  public function setAppInstallationTime($appInstallationTime)
  {
    $this->appInstallationTime = $appInstallationTime;
  }
  /** @return string */
  public function getAppInstallationTime()
  {
    return $this->appInstallationTime;
  }
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
  /** @param DeviceInfo */
  public function setDevice(DeviceInfo $device)
  {
    $this->device = $device;
  }
  /** @return DeviceInfo */
  public function getDevice()
  {
    return $this->device;
  }
  /** @param string */
  public function setIosVersion($iosVersion)
  {
    $this->iosVersion = $iosVersion;
  }
  /** @return string */
  public function getIosVersion()
  {
    return $this->iosVersion;
  }
  /** @param string */
  public function setRetrievalMethod($retrievalMethod)
  {
    $this->retrievalMethod = $retrievalMethod;
  }
  /** @return string */
  public function getRetrievalMethod()
  {
    return $this->retrievalMethod;
  }
  /** @param string */
  public function setSdkVersion($sdkVersion)
  {
    $this->sdkVersion = $sdkVersion;
  }
  /** @return string */
  public function getSdkVersion()
  {
    return $this->sdkVersion;
  }
  /** @param string */
  public function setUniqueMatchLinkToCheck($uniqueMatchLinkToCheck)
  {
    $this->uniqueMatchLinkToCheck = $uniqueMatchLinkToCheck;
  }
  /** @return string */
  public function getUniqueMatchLinkToCheck()
  {
    return $this->uniqueMatchLinkToCheck;
  }
  /** @param string */
  public function setVisualStyle($visualStyle)
  {
    $this->visualStyle = $visualStyle;
  }
  /** @return string */
  public function getVisualStyle()
  {
    return $this->visualStyle;
  }
}

class GetIosPostInstallAttributionResponse extends \Google\Model
{
  /** @var string */
  public $appMinimumVersion;
  /** @var string */
  public $attributionConfidence;
  /** @var string */
  public $deepLink;
  /** @var string */
  public $externalBrowserDestinationLink;
  /** @var string */
  public $fallbackLink;
  /** @var string */
  public $invitationId;
  /** @var bool */
  public $isStrongMatchExecutable;
  /** @var string */
  public $matchMessage;
  /** @var string */
  public $requestIpVersion;
  /** @var string */
  public $requestedLink;
  /** @var string */
  public $resolvedLink;
  /** @var string */
  public $utmCampaign;
  /** @var string */
  public $utmContent;
  /** @var string */
  public $utmMedium;
  /** @var string */
  public $utmSource;
  /** @var string */
  public $utmTerm;

  /** @param string */
  public function setAppMinimumVersion($appMinimumVersion)
  {
    $this->appMinimumVersion = $appMinimumVersion;
  }
  /** @return string */
  public function getAppMinimumVersion()
  {
    return $this->appMinimumVersion;
  }
  /** @param string */
  public function setAttributionConfidence($attributionConfidence)
  {
    $this->attributionConfidence = $attributionConfidence;
  }
  /** @return string */
  public function getAttributionConfidence()
  {
    return $this->attributionConfidence;
  }
  /** @param string */
  public function setDeepLink($deepLink)
  {
    $this->deepLink = $deepLink;
  }
  /** @return string */
  public function getDeepLink()
  {
    return $this->deepLink;
  }
  /** @param string */
  public function setExternalBrowserDestinationLink($externalBrowserDestinationLink)
  {
    $this->externalBrowserDestinationLink = $externalBrowserDestinationLink;
  }
  /** @return string */
  public function getExternalBrowserDestinationLink()
  {
    return $this->externalBrowserDestinationLink;
  }
  /** @param string */
  public function setFallbackLink($fallbackLink)
  {
    $this->fallbackLink = $fallbackLink;
  }
  /** @return string */
  public function getFallbackLink()
  {
    return $this->fallbackLink;
  }
  /** @param string */
  public function setInvitationId($invitationId)
  {
    $this->invitationId = $invitationId;
  }
  /** @return string */
  public function getInvitationId()
  {
    return $this->invitationId;
  }
  /** @param bool */
  public function setIsStrongMatchExecutable($isStrongMatchExecutable)
  {
    $this->isStrongMatchExecutable = $isStrongMatchExecutable;
  }
  /** @return bool */
  public function getIsStrongMatchExecutable()
  {
    return $this->isStrongMatchExecutable;
  }
  /** @param string */
  public function setMatchMessage($matchMessage)
  {
    $this->matchMessage = $matchMessage;
  }
  /** @return string */
  public function getMatchMessage()
  {
    return $this->matchMessage;
  }
  /** @param string */
  public function setRequestIpVersion($requestIpVersion)
  {
    $this->requestIpVersion = $requestIpVersion;
  }
  /** @return string */
  public function getRequestIpVersion()
  {
    return $this->requestIpVersion;
  }
  /** @param string */
  public function setRequestedLink($requestedLink)
  {
    $this->requestedLink = $requestedLink;
  }
  /** @return string */
  public function getRequestedLink()
  {
    return $this->requestedLink;
  }
  /** @param string */
  public function setResolvedLink($resolvedLink)
  {
    $this->resolvedLink = $resolvedLink;
  }
  /** @return string */
  public function getResolvedLink()
  {
    return $this->resolvedLink;
  }
  /** @param string */
  public function setUtmCampaign($utmCampaign)
  {
    $this->utmCampaign = $utmCampaign;
  }
  /** @return string */
  public function getUtmCampaign()
  {
    return $this->utmCampaign;
  }
  /** @param string */
  public function setUtmContent($utmContent)
  {
    $this->utmContent = $utmContent;
  }
  /** @return string */
  public function getUtmContent()
  {
    return $this->utmContent;
  }
  /** @param string */
  public function setUtmMedium($utmMedium)
  {
    $this->utmMedium = $utmMedium;
  }
  /** @return string */
  public function getUtmMedium()
  {
    return $this->utmMedium;
  }
  /** @param string */
  public function setUtmSource($utmSource)
  {
    $this->utmSource = $utmSource;
  }
  /** @return string */
  public function getUtmSource()
  {
    return $this->utmSource;
  }
  /** @param string */
  public function setUtmTerm($utmTerm)
  {
    $this->utmTerm = $utmTerm;
  }
  /** @return string */
  public function getUtmTerm()
  {
    return $this->utmTerm;
  }
}

class GetIosReopenAttributionRequest extends \Google\Model
{
  /** @var string */
  public $bundleId;
  /** @var string */
  public $requestedLink;
  /** @var string */
  public $sdkVersion;

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
  public function setRequestedLink($requestedLink)
  {
    $this->requestedLink = $requestedLink;
  }
  /** @return string */
  public function getRequestedLink()
  {
    return $this->requestedLink;
  }
  /** @param string */
  public function setSdkVersion($sdkVersion)
  {
    $this->sdkVersion = $sdkVersion;
  }
  /** @return string */
  public function getSdkVersion()
  {
    return $this->sdkVersion;
  }
}

class GetIosReopenAttributionResponse extends \Google\Model
{
  /** @var string */
  public $deepLink;
  /** @var string */
  public $invitationId;
  /** @var string */
  public $iosMinAppVersion;
  /** @var string */
  public $resolvedLink;
  /** @var string */
  public $utmCampaign;
  /** @var string */
  public $utmContent;
  /** @var string */
  public $utmMedium;
  /** @var string */
  public $utmSource;
  /** @var string */
  public $utmTerm;

  /** @param string */
  public function setDeepLink($deepLink)
  {
    $this->deepLink = $deepLink;
  }
  /** @return string */
  public function getDeepLink()
  {
    return $this->deepLink;
  }
  /** @param string */
  public function setInvitationId($invitationId)
  {
    $this->invitationId = $invitationId;
  }
  /** @return string */
  public function getInvitationId()
  {
    return $this->invitationId;
  }
  /** @param string */
  public function setIosMinAppVersion($iosMinAppVersion)
  {
    $this->iosMinAppVersion = $iosMinAppVersion;
  }
  /** @return string */
  public function getIosMinAppVersion()
  {
    return $this->iosMinAppVersion;
  }
  /** @param string */
  public function setResolvedLink($resolvedLink)
  {
    $this->resolvedLink = $resolvedLink;
  }
  /** @return string */
  public function getResolvedLink()
  {
    return $this->resolvedLink;
  }
  /** @param string */
  public function setUtmCampaign($utmCampaign)
  {
    $this->utmCampaign = $utmCampaign;
  }
  /** @return string */
  public function getUtmCampaign()
  {
    return $this->utmCampaign;
  }
  /** @param string */
  public function setUtmContent($utmContent)
  {
    $this->utmContent = $utmContent;
  }
  /** @return string */
  public function getUtmContent()
  {
    return $this->utmContent;
  }
  /** @param string */
  public function setUtmMedium($utmMedium)
  {
    $this->utmMedium = $utmMedium;
  }
  /** @return string */
  public function getUtmMedium()
  {
    return $this->utmMedium;
  }
  /** @param string */
  public function setUtmSource($utmSource)
  {
    $this->utmSource = $utmSource;
  }
  /** @return string */
  public function getUtmSource()
  {
    return $this->utmSource;
  }
  /** @param string */
  public function setUtmTerm($utmTerm)
  {
    $this->utmTerm = $utmTerm;
  }
  /** @return string */
  public function getUtmTerm()
  {
    return $this->utmTerm;
  }
}

class GooglePlayAnalytics extends \Google\Model
{
  /** @var string */
  public $gclid;
  /** @var string */
  public $utmCampaign;
  /** @var string */
  public $utmContent;
  /** @var string */
  public $utmMedium;
  /** @var string */
  public $utmSource;
  /** @var string */
  public $utmTerm;

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
  public function setUtmCampaign($utmCampaign)
  {
    $this->utmCampaign = $utmCampaign;
  }
  /** @return string */
  public function getUtmCampaign()
  {
    return $this->utmCampaign;
  }
  /** @param string */
  public function setUtmContent($utmContent)
  {
    $this->utmContent = $utmContent;
  }
  /** @return string */
  public function getUtmContent()
  {
    return $this->utmContent;
  }
  /** @param string */
  public function setUtmMedium($utmMedium)
  {
    $this->utmMedium = $utmMedium;
  }
  /** @return string */
  public function getUtmMedium()
  {
    return $this->utmMedium;
  }
  /** @param string */
  public function setUtmSource($utmSource)
  {
    $this->utmSource = $utmSource;
  }
  /** @return string */
  public function getUtmSource()
  {
    return $this->utmSource;
  }
  /** @param string */
  public function setUtmTerm($utmTerm)
  {
    $this->utmTerm = $utmTerm;
  }
  /** @return string */
  public function getUtmTerm()
  {
    return $this->utmTerm;
  }
}

class ITunesConnectAnalytics extends \Google\Model
{
  /** @var string */
  public $at;
  /** @var string */
  public $ct;
  /** @var string */
  public $mt;
  /** @var string */
  public $pt;

  /** @param string */
  public function setAt($at)
  {
    $this->at = $at;
  }
  /** @return string */
  public function getAt()
  {
    return $this->at;
  }
  /** @param string */
  public function setCt($ct)
  {
    $this->ct = $ct;
  }
  /** @return string */
  public function getCt()
  {
    return $this->ct;
  }
  /** @param string */
  public function setMt($mt)
  {
    $this->mt = $mt;
  }
  /** @return string */
  public function getMt()
  {
    return $this->mt;
  }
  /** @param string */
  public function setPt($pt)
  {
    $this->pt = $pt;
  }
  /** @return string */
  public function getPt()
  {
    return $this->pt;
  }
}

class IosInfo extends \Google\Model
{
  /** @var string */
  public $iosAppStoreId;
  /** @var string */
  public $iosBundleId;
  /** @var string */
  public $iosCustomScheme;
  /** @var string */
  public $iosFallbackLink;
  /** @var string */
  public $iosIpadBundleId;
  /** @var string */
  public $iosIpadFallbackLink;
  /** @var string */
  public $iosMinimumVersion;

  /** @param string */
  public function setIosAppStoreId($iosAppStoreId)
  {
    $this->iosAppStoreId = $iosAppStoreId;
  }
  /** @return string */
  public function getIosAppStoreId()
  {
    return $this->iosAppStoreId;
  }
  /** @param string */
  public function setIosBundleId($iosBundleId)
  {
    $this->iosBundleId = $iosBundleId;
  }
  /** @return string */
  public function getIosBundleId()
  {
    return $this->iosBundleId;
  }
  /** @param string */
  public function setIosCustomScheme($iosCustomScheme)
  {
    $this->iosCustomScheme = $iosCustomScheme;
  }
  /** @return string */
  public function getIosCustomScheme()
  {
    return $this->iosCustomScheme;
  }
  /** @param string */
  public function setIosFallbackLink($iosFallbackLink)
  {
    $this->iosFallbackLink = $iosFallbackLink;
  }
  /** @return string */
  public function getIosFallbackLink()
  {
    return $this->iosFallbackLink;
  }
  /** @param string */
  public function setIosIpadBundleId($iosIpadBundleId)
  {
    $this->iosIpadBundleId = $iosIpadBundleId;
  }
  /** @return string */
  public function getIosIpadBundleId()
  {
    return $this->iosIpadBundleId;
  }
  /** @param string */
  public function setIosIpadFallbackLink($iosIpadFallbackLink)
  {
    $this->iosIpadFallbackLink = $iosIpadFallbackLink;
  }
  /** @return string */
  public function getIosIpadFallbackLink()
  {
    return $this->iosIpadFallbackLink;
  }
  /** @param string */
  public function setIosMinimumVersion($iosMinimumVersion)
  {
    $this->iosMinimumVersion = $iosMinimumVersion;
  }
  /** @return string */
  public function getIosMinimumVersion()
  {
    return $this->iosMinimumVersion;
  }
}

class ManagedShortLink extends \Google\Collection
{
  /** @var string */
  public $creationTime;
  /** @var string[] */
  public $flaggedAttribute;
  /** @var DynamicLinkInfo */
  public $info;
  /** @var string */
  public $link;
  /** @var string */
  public $linkName;
  /** @var string */
  public $visibility;
  protected $collection_key = 'flaggedAttribute';
  protected $infoType = DynamicLinkInfo::class;
  protected $infoDataType = '';
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
  /** @param string[] */
  public function setFlaggedAttribute($flaggedAttribute)
  {
    $this->flaggedAttribute = $flaggedAttribute;
  }
  /** @return string[] */
  public function getFlaggedAttribute()
  {
    return $this->flaggedAttribute;
  }
  /** @param DynamicLinkInfo */
  public function setInfo(DynamicLinkInfo $info)
  {
    $this->info = $info;
  }
  /** @return DynamicLinkInfo */
  public function getInfo()
  {
    return $this->info;
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
  public function setLinkName($linkName)
  {
    $this->linkName = $linkName;
  }
  /** @return string */
  public function getLinkName()
  {
    return $this->linkName;
  }
  /** @param string */
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  /** @return string */
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class NavigationInfo extends \Google\Model
{
  /** @var bool */
  public $enableForcedRedirect;

  /** @param bool */
  public function setEnableForcedRedirect($enableForcedRedirect)
  {
    $this->enableForcedRedirect = $enableForcedRedirect;
  }
  /** @return bool */
  public function getEnableForcedRedirect()
  {
    return $this->enableForcedRedirect;
  }
}

class SocialMetaTagInfo extends \Google\Model
{
  /** @var string */
  public $socialDescription;
  /** @var string */
  public $socialImageLink;
  /** @var string */
  public $socialTitle;

  /** @param string */
  public function setSocialDescription($socialDescription)
  {
    $this->socialDescription = $socialDescription;
  }
  /** @return string */
  public function getSocialDescription()
  {
    return $this->socialDescription;
  }
  /** @param string */
  public function setSocialImageLink($socialImageLink)
  {
    $this->socialImageLink = $socialImageLink;
  }
  /** @return string */
  public function getSocialImageLink()
  {
    return $this->socialImageLink;
  }
  /** @param string */
  public function setSocialTitle($socialTitle)
  {
    $this->socialTitle = $socialTitle;
  }
  /** @return string */
  public function getSocialTitle()
  {
    return $this->socialTitle;
  }
}

class Suffix extends \Google\Model
{
  /** @var string */
  public $customSuffix;
  /** @var string */
  public $option;

  /** @param string */
  public function setCustomSuffix($customSuffix)
  {
    $this->customSuffix = $customSuffix;
  }
  /** @return string */
  public function getCustomSuffix()
  {
    return $this->customSuffix;
  }
  /** @param string */
  public function setOption($option)
  {
    $this->option = $option;
  }
  /** @return string */
  public function getOption()
  {
    return $this->option;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AnalyticsInfo::class, 'Google_Service_FirebaseDynamicLinks_AnalyticsInfo');
class_alias(AndroidInfo::class, 'Google_Service_FirebaseDynamicLinks_AndroidInfo');
class_alias(CreateManagedShortLinkRequest::class, 'Google_Service_FirebaseDynamicLinks_CreateManagedShortLinkRequest');
class_alias(CreateManagedShortLinkResponse::class, 'Google_Service_FirebaseDynamicLinks_CreateManagedShortLinkResponse');
class_alias(CreateShortDynamicLinkRequest::class, 'Google_Service_FirebaseDynamicLinks_CreateShortDynamicLinkRequest');
class_alias(CreateShortDynamicLinkResponse::class, 'Google_Service_FirebaseDynamicLinks_CreateShortDynamicLinkResponse');
class_alias(DesktopInfo::class, 'Google_Service_FirebaseDynamicLinks_DesktopInfo');
class_alias(DeviceInfo::class, 'Google_Service_FirebaseDynamicLinks_DeviceInfo');
class_alias(DynamicLinkEventStat::class, 'Google_Service_FirebaseDynamicLinks_DynamicLinkEventStat');
class_alias(DynamicLinkInfo::class, 'Google_Service_FirebaseDynamicLinks_DynamicLinkInfo');
class_alias(DynamicLinkStats::class, 'Google_Service_FirebaseDynamicLinks_DynamicLinkStats');
class_alias(DynamicLinkWarning::class, 'Google_Service_FirebaseDynamicLinks_DynamicLinkWarning');
class_alias(GetIosPostInstallAttributionRequest::class, 'Google_Service_FirebaseDynamicLinks_GetIosPostInstallAttributionRequest');
class_alias(GetIosPostInstallAttributionResponse::class, 'Google_Service_FirebaseDynamicLinks_GetIosPostInstallAttributionResponse');
class_alias(GetIosReopenAttributionRequest::class, 'Google_Service_FirebaseDynamicLinks_GetIosReopenAttributionRequest');
class_alias(GetIosReopenAttributionResponse::class, 'Google_Service_FirebaseDynamicLinks_GetIosReopenAttributionResponse');
class_alias(GooglePlayAnalytics::class, 'Google_Service_FirebaseDynamicLinks_GooglePlayAnalytics');
class_alias(ITunesConnectAnalytics::class, 'Google_Service_FirebaseDynamicLinks_ITunesConnectAnalytics');
class_alias(IosInfo::class, 'Google_Service_FirebaseDynamicLinks_IosInfo');
class_alias(ManagedShortLink::class, 'Google_Service_FirebaseDynamicLinks_ManagedShortLink');
class_alias(NavigationInfo::class, 'Google_Service_FirebaseDynamicLinks_NavigationInfo');
class_alias(SocialMetaTagInfo::class, 'Google_Service_FirebaseDynamicLinks_SocialMetaTagInfo');
class_alias(Suffix::class, 'Google_Service_FirebaseDynamicLinks_Suffix');
