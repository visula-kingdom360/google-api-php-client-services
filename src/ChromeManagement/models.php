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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementV1AndroidAppInfo extends \Google\Collection
{
  /** @var GoogleChromeManagementV1AndroidAppPermission[] */
  public $permissions;
  protected $collection_key = 'permissions';
  protected $permissionsType = GoogleChromeManagementV1AndroidAppPermission::class;
  protected $permissionsDataType = 'array';
  /** @param GoogleChromeManagementV1AndroidAppPermission[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return GoogleChromeManagementV1AndroidAppPermission[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class GoogleChromeManagementV1AndroidAppPermission extends \Google\Model
{
  /** @var string */
  public $type;

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

class GoogleChromeManagementV1AppDetails extends \Google\Model
{
  /** @var GoogleChromeManagementV1AndroidAppInfo */
  public $androidAppInfo;
  /** @var string */
  public $appId;
  /** @var GoogleChromeManagementV1ChromeAppInfo */
  public $chromeAppInfo;
  /** @var string */
  public $description;
  /** @var string */
  public $detailUri;
  /** @var string */
  public $displayName;
  /** @var string */
  public $firstPublishTime;
  /** @var string */
  public $homepageUri;
  /** @var string */
  public $iconUri;
  /** @var bool */
  public $isPaidApp;
  /** @var string */
  public $latestPublishTime;
  /** @var string */
  public $name;
  /** @var string */
  public $privacyPolicyUri;
  /** @var string */
  public $publisher;
  /** @var string */
  public $reviewNumber;
  /** @var float */
  public $reviewRating;
  /** @var string */
  public $revisionId;
  /** @var GoogleRpcStatus */
  public $serviceError;
  /** @var string */
  public $type;
  protected $androidAppInfoType = GoogleChromeManagementV1AndroidAppInfo::class;
  protected $androidAppInfoDataType = '';
  protected $chromeAppInfoType = GoogleChromeManagementV1ChromeAppInfo::class;
  protected $chromeAppInfoDataType = '';
  protected $serviceErrorType = GoogleRpcStatus::class;
  protected $serviceErrorDataType = '';
  /** @param GoogleChromeManagementV1AndroidAppInfo */
  public function setAndroidAppInfo(GoogleChromeManagementV1AndroidAppInfo $androidAppInfo)
  {
    $this->androidAppInfo = $androidAppInfo;
  }
  /** @return GoogleChromeManagementV1AndroidAppInfo */
  public function getAndroidAppInfo()
  {
    return $this->androidAppInfo;
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
  /** @param GoogleChromeManagementV1ChromeAppInfo */
  public function setChromeAppInfo(GoogleChromeManagementV1ChromeAppInfo $chromeAppInfo)
  {
    $this->chromeAppInfo = $chromeAppInfo;
  }
  /** @return GoogleChromeManagementV1ChromeAppInfo */
  public function getChromeAppInfo()
  {
    return $this->chromeAppInfo;
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
  public function setDetailUri($detailUri)
  {
    $this->detailUri = $detailUri;
  }
  /** @return string */
  public function getDetailUri()
  {
    return $this->detailUri;
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
  public function setFirstPublishTime($firstPublishTime)
  {
    $this->firstPublishTime = $firstPublishTime;
  }
  /** @return string */
  public function getFirstPublishTime()
  {
    return $this->firstPublishTime;
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
  /** @param string */
  public function setIconUri($iconUri)
  {
    $this->iconUri = $iconUri;
  }
  /** @return string */
  public function getIconUri()
  {
    return $this->iconUri;
  }
  /** @param bool */
  public function setIsPaidApp($isPaidApp)
  {
    $this->isPaidApp = $isPaidApp;
  }
  /** @return bool */
  public function getIsPaidApp()
  {
    return $this->isPaidApp;
  }
  /** @param string */
  public function setLatestPublishTime($latestPublishTime)
  {
    $this->latestPublishTime = $latestPublishTime;
  }
  /** @return string */
  public function getLatestPublishTime()
  {
    return $this->latestPublishTime;
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
  public function setPrivacyPolicyUri($privacyPolicyUri)
  {
    $this->privacyPolicyUri = $privacyPolicyUri;
  }
  /** @return string */
  public function getPrivacyPolicyUri()
  {
    return $this->privacyPolicyUri;
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
  /** @param string */
  public function setReviewNumber($reviewNumber)
  {
    $this->reviewNumber = $reviewNumber;
  }
  /** @return string */
  public function getReviewNumber()
  {
    return $this->reviewNumber;
  }
  /** @param float */
  public function setReviewRating($reviewRating)
  {
    $this->reviewRating = $reviewRating;
  }
  /** @return float */
  public function getReviewRating()
  {
    return $this->reviewRating;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
  /** @param GoogleRpcStatus */
  public function setServiceError(GoogleRpcStatus $serviceError)
  {
    $this->serviceError = $serviceError;
  }
  /** @return GoogleRpcStatus */
  public function getServiceError()
  {
    return $this->serviceError;
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

class GoogleChromeManagementV1AudioStatusReport extends \Google\Model
{
  /** @var string */
  public $inputDevice;
  /** @var int */
  public $inputGain;
  /** @var bool */
  public $inputMute;
  /** @var string */
  public $outputDevice;
  /** @var bool */
  public $outputMute;
  /** @var int */
  public $outputVolume;
  /** @var string */
  public $reportTime;

  /** @param string */
  public function setInputDevice($inputDevice)
  {
    $this->inputDevice = $inputDevice;
  }
  /** @return string */
  public function getInputDevice()
  {
    return $this->inputDevice;
  }
  /** @param int */
  public function setInputGain($inputGain)
  {
    $this->inputGain = $inputGain;
  }
  /** @return int */
  public function getInputGain()
  {
    return $this->inputGain;
  }
  /** @param bool */
  public function setInputMute($inputMute)
  {
    $this->inputMute = $inputMute;
  }
  /** @return bool */
  public function getInputMute()
  {
    return $this->inputMute;
  }
  /** @param string */
  public function setOutputDevice($outputDevice)
  {
    $this->outputDevice = $outputDevice;
  }
  /** @return string */
  public function getOutputDevice()
  {
    return $this->outputDevice;
  }
  /** @param bool */
  public function setOutputMute($outputMute)
  {
    $this->outputMute = $outputMute;
  }
  /** @return bool */
  public function getOutputMute()
  {
    return $this->outputMute;
  }
  /** @param int */
  public function setOutputVolume($outputVolume)
  {
    $this->outputVolume = $outputVolume;
  }
  /** @return int */
  public function getOutputVolume()
  {
    return $this->outputVolume;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
}

class GoogleChromeManagementV1BatteryInfo extends \Google\Model
{
  /** @var string */
  public $designCapacity;
  /** @var int */
  public $designMinVoltage;
  /** @var GoogleTypeDate */
  public $manufactureDate;
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $serialNumber;
  /** @var string */
  public $technology;
  protected $manufactureDateType = GoogleTypeDate::class;
  protected $manufactureDateDataType = '';
  /** @param string */
  public function setDesignCapacity($designCapacity)
  {
    $this->designCapacity = $designCapacity;
  }
  /** @return string */
  public function getDesignCapacity()
  {
    return $this->designCapacity;
  }
  /** @param int */
  public function setDesignMinVoltage($designMinVoltage)
  {
    $this->designMinVoltage = $designMinVoltage;
  }
  /** @return int */
  public function getDesignMinVoltage()
  {
    return $this->designMinVoltage;
  }
  /** @param GoogleTypeDate */
  public function setManufactureDate(GoogleTypeDate $manufactureDate)
  {
    $this->manufactureDate = $manufactureDate;
  }
  /** @return GoogleTypeDate */
  public function getManufactureDate()
  {
    return $this->manufactureDate;
  }
  /** @param string */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /** @return string */
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /** @param string */
  public function setTechnology($technology)
  {
    $this->technology = $technology;
  }
  /** @return string */
  public function getTechnology()
  {
    return $this->technology;
  }
}

class GoogleChromeManagementV1BatterySampleReport extends \Google\Model
{
  /** @var int */
  public $chargeRate;
  /** @var string */
  public $current;
  /** @var int */
  public $dischargeRate;
  /** @var string */
  public $remainingCapacity;
  /** @var string */
  public $reportTime;
  /** @var string */
  public $status;
  /** @var int */
  public $temperature;
  /** @var string */
  public $voltage;

  /** @param int */
  public function setChargeRate($chargeRate)
  {
    $this->chargeRate = $chargeRate;
  }
  /** @return int */
  public function getChargeRate()
  {
    return $this->chargeRate;
  }
  /** @param string */
  public function setCurrent($current)
  {
    $this->current = $current;
  }
  /** @return string */
  public function getCurrent()
  {
    return $this->current;
  }
  /** @param int */
  public function setDischargeRate($dischargeRate)
  {
    $this->dischargeRate = $dischargeRate;
  }
  /** @return int */
  public function getDischargeRate()
  {
    return $this->dischargeRate;
  }
  /** @param string */
  public function setRemainingCapacity($remainingCapacity)
  {
    $this->remainingCapacity = $remainingCapacity;
  }
  /** @return string */
  public function getRemainingCapacity()
  {
    return $this->remainingCapacity;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
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
  /** @param int */
  public function setTemperature($temperature)
  {
    $this->temperature = $temperature;
  }
  /** @return int */
  public function getTemperature()
  {
    return $this->temperature;
  }
  /** @param string */
  public function setVoltage($voltage)
  {
    $this->voltage = $voltage;
  }
  /** @return string */
  public function getVoltage()
  {
    return $this->voltage;
  }
}

class GoogleChromeManagementV1BatteryStatusReport extends \Google\Collection
{
  /** @var string */
  public $batteryHealth;
  /** @var int */
  public $cycleCount;
  /** @var string */
  public $fullChargeCapacity;
  /** @var string */
  public $reportTime;
  /** @var GoogleChromeManagementV1BatterySampleReport[] */
  public $sample;
  /** @var string */
  public $serialNumber;
  protected $collection_key = 'sample';
  protected $sampleType = GoogleChromeManagementV1BatterySampleReport::class;
  protected $sampleDataType = 'array';
  /** @param string */
  public function setBatteryHealth($batteryHealth)
  {
    $this->batteryHealth = $batteryHealth;
  }
  /** @return string */
  public function getBatteryHealth()
  {
    return $this->batteryHealth;
  }
  /** @param int */
  public function setCycleCount($cycleCount)
  {
    $this->cycleCount = $cycleCount;
  }
  /** @return int */
  public function getCycleCount()
  {
    return $this->cycleCount;
  }
  /** @param string */
  public function setFullChargeCapacity($fullChargeCapacity)
  {
    $this->fullChargeCapacity = $fullChargeCapacity;
  }
  /** @return string */
  public function getFullChargeCapacity()
  {
    return $this->fullChargeCapacity;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
  /** @param GoogleChromeManagementV1BatterySampleReport[] */
  public function setSample($sample)
  {
    $this->sample = $sample;
  }
  /** @return GoogleChromeManagementV1BatterySampleReport[] */
  public function getSample()
  {
    return $this->sample;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
}

class GoogleChromeManagementV1BootPerformanceReport extends \Google\Model
{
  /** @var string */
  public $bootUpDuration;
  /** @var string */
  public $bootUpTime;
  /** @var string */
  public $reportTime;
  /** @var string */
  public $shutdownDuration;
  /** @var string */
  public $shutdownReason;
  /** @var string */
  public $shutdownTime;

  /** @param string */
  public function setBootUpDuration($bootUpDuration)
  {
    $this->bootUpDuration = $bootUpDuration;
  }
  /** @return string */
  public function getBootUpDuration()
  {
    return $this->bootUpDuration;
  }
  /** @param string */
  public function setBootUpTime($bootUpTime)
  {
    $this->bootUpTime = $bootUpTime;
  }
  /** @return string */
  public function getBootUpTime()
  {
    return $this->bootUpTime;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
  /** @param string */
  public function setShutdownDuration($shutdownDuration)
  {
    $this->shutdownDuration = $shutdownDuration;
  }
  /** @return string */
  public function getShutdownDuration()
  {
    return $this->shutdownDuration;
  }
  /** @param string */
  public function setShutdownReason($shutdownReason)
  {
    $this->shutdownReason = $shutdownReason;
  }
  /** @return string */
  public function getShutdownReason()
  {
    return $this->shutdownReason;
  }
  /** @param string */
  public function setShutdownTime($shutdownTime)
  {
    $this->shutdownTime = $shutdownTime;
  }
  /** @return string */
  public function getShutdownTime()
  {
    return $this->shutdownTime;
  }
}

class GoogleChromeManagementV1BrowserVersion extends \Google\Model
{
  /** @var string */
  public $channel;
  /** @var string */
  public $count;
  /** @var string */
  public $deviceOsVersion;
  /** @var string */
  public $system;
  /** @var string */
  public $version;

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
  public function setDeviceOsVersion($deviceOsVersion)
  {
    $this->deviceOsVersion = $deviceOsVersion;
  }
  /** @return string */
  public function getDeviceOsVersion()
  {
    return $this->deviceOsVersion;
  }
  /** @param string */
  public function setSystem($system)
  {
    $this->system = $system;
  }
  /** @return string */
  public function getSystem()
  {
    return $this->system;
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

class GoogleChromeManagementV1ChromeAppInfo extends \Google\Collection
{
  /** @var bool */
  public $googleOwned;
  /** @var bool */
  public $isCwsHosted;
  /** @var bool */
  public $isExtensionPolicySupported;
  /** @var bool */
  public $isKioskOnly;
  /** @var bool */
  public $isTheme;
  /** @var bool */
  public $kioskEnabled;
  /** @var int */
  public $minUserCount;
  /** @var GoogleChromeManagementV1ChromeAppPermission[] */
  public $permissions;
  /** @var GoogleChromeManagementV1ChromeAppSiteAccess[] */
  public $siteAccess;
  /** @var bool */
  public $supportEnabled;
  protected $collection_key = 'siteAccess';
  protected $permissionsType = GoogleChromeManagementV1ChromeAppPermission::class;
  protected $permissionsDataType = 'array';
  protected $siteAccessType = GoogleChromeManagementV1ChromeAppSiteAccess::class;
  protected $siteAccessDataType = 'array';
  /** @param bool */
  public function setGoogleOwned($googleOwned)
  {
    $this->googleOwned = $googleOwned;
  }
  /** @return bool */
  public function getGoogleOwned()
  {
    return $this->googleOwned;
  }
  /** @param bool */
  public function setIsCwsHosted($isCwsHosted)
  {
    $this->isCwsHosted = $isCwsHosted;
  }
  /** @return bool */
  public function getIsCwsHosted()
  {
    return $this->isCwsHosted;
  }
  /** @param bool */
  public function setIsExtensionPolicySupported($isExtensionPolicySupported)
  {
    $this->isExtensionPolicySupported = $isExtensionPolicySupported;
  }
  /** @return bool */
  public function getIsExtensionPolicySupported()
  {
    return $this->isExtensionPolicySupported;
  }
  /** @param bool */
  public function setIsKioskOnly($isKioskOnly)
  {
    $this->isKioskOnly = $isKioskOnly;
  }
  /** @return bool */
  public function getIsKioskOnly()
  {
    return $this->isKioskOnly;
  }
  /** @param bool */
  public function setIsTheme($isTheme)
  {
    $this->isTheme = $isTheme;
  }
  /** @return bool */
  public function getIsTheme()
  {
    return $this->isTheme;
  }
  /** @param bool */
  public function setKioskEnabled($kioskEnabled)
  {
    $this->kioskEnabled = $kioskEnabled;
  }
  /** @return bool */
  public function getKioskEnabled()
  {
    return $this->kioskEnabled;
  }
  /** @param int */
  public function setMinUserCount($minUserCount)
  {
    $this->minUserCount = $minUserCount;
  }
  /** @return int */
  public function getMinUserCount()
  {
    return $this->minUserCount;
  }
  /** @param GoogleChromeManagementV1ChromeAppPermission[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return GoogleChromeManagementV1ChromeAppPermission[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /** @param GoogleChromeManagementV1ChromeAppSiteAccess[] */
  public function setSiteAccess($siteAccess)
  {
    $this->siteAccess = $siteAccess;
  }
  /** @return GoogleChromeManagementV1ChromeAppSiteAccess[] */
  public function getSiteAccess()
  {
    return $this->siteAccess;
  }
  /** @param bool */
  public function setSupportEnabled($supportEnabled)
  {
    $this->supportEnabled = $supportEnabled;
  }
  /** @return bool */
  public function getSupportEnabled()
  {
    return $this->supportEnabled;
  }
}

class GoogleChromeManagementV1ChromeAppPermission extends \Google\Model
{
  /** @var bool */
  public $accessUserData;
  /** @var string */
  public $documentationUri;
  /** @var string */
  public $type;

  /** @param bool */
  public function setAccessUserData($accessUserData)
  {
    $this->accessUserData = $accessUserData;
  }
  /** @return bool */
  public function getAccessUserData()
  {
    return $this->accessUserData;
  }
  /** @param string */
  public function setDocumentationUri($documentationUri)
  {
    $this->documentationUri = $documentationUri;
  }
  /** @return string */
  public function getDocumentationUri()
  {
    return $this->documentationUri;
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

class GoogleChromeManagementV1ChromeAppRequest extends \Google\Model
{
  /** @var string */
  public $appDetails;
  /** @var string */
  public $appId;
  /** @var string */
  public $detailUri;
  /** @var string */
  public $displayName;
  /** @var string */
  public $iconUri;
  /** @var string */
  public $latestRequestTime;
  /** @var string */
  public $requestCount;

  /** @param string */
  public function setAppDetails($appDetails)
  {
    $this->appDetails = $appDetails;
  }
  /** @return string */
  public function getAppDetails()
  {
    return $this->appDetails;
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
  public function setDetailUri($detailUri)
  {
    $this->detailUri = $detailUri;
  }
  /** @return string */
  public function getDetailUri()
  {
    return $this->detailUri;
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
  public function setIconUri($iconUri)
  {
    $this->iconUri = $iconUri;
  }
  /** @return string */
  public function getIconUri()
  {
    return $this->iconUri;
  }
  /** @param string */
  public function setLatestRequestTime($latestRequestTime)
  {
    $this->latestRequestTime = $latestRequestTime;
  }
  /** @return string */
  public function getLatestRequestTime()
  {
    return $this->latestRequestTime;
  }
  /** @param string */
  public function setRequestCount($requestCount)
  {
    $this->requestCount = $requestCount;
  }
  /** @return string */
  public function getRequestCount()
  {
    return $this->requestCount;
  }
}

class GoogleChromeManagementV1ChromeAppSiteAccess extends \Google\Model
{
  /** @var string */
  public $hostMatch;

  /** @param string */
  public function setHostMatch($hostMatch)
  {
    $this->hostMatch = $hostMatch;
  }
  /** @return string */
  public function getHostMatch()
  {
    return $this->hostMatch;
  }
}

class GoogleChromeManagementV1CountChromeAppRequestsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleChromeManagementV1ChromeAppRequest[] */
  public $requestedApps;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'requestedApps';
  protected $requestedAppsType = GoogleChromeManagementV1ChromeAppRequest::class;
  protected $requestedAppsDataType = 'array';
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
  /** @param GoogleChromeManagementV1ChromeAppRequest[] */
  public function setRequestedApps($requestedApps)
  {
    $this->requestedApps = $requestedApps;
  }
  /** @return GoogleChromeManagementV1ChromeAppRequest[] */
  public function getRequestedApps()
  {
    return $this->requestedApps;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class GoogleChromeManagementV1CountChromeDevicesReachingAutoExpirationDateResponse extends \Google\Collection
{
  /** @var GoogleChromeManagementV1DeviceAueCountReport[] */
  public $deviceAueCountReports;
  protected $collection_key = 'deviceAueCountReports';
  protected $deviceAueCountReportsType = GoogleChromeManagementV1DeviceAueCountReport::class;
  protected $deviceAueCountReportsDataType = 'array';
  /** @param GoogleChromeManagementV1DeviceAueCountReport[] */
  public function setDeviceAueCountReports($deviceAueCountReports)
  {
    $this->deviceAueCountReports = $deviceAueCountReports;
  }
  /** @return GoogleChromeManagementV1DeviceAueCountReport[] */
  public function getDeviceAueCountReports()
  {
    return $this->deviceAueCountReports;
  }
}

class GoogleChromeManagementV1CountChromeDevicesThatNeedAttentionResponse extends \Google\Model
{
  /** @var string */
  public $noRecentPolicySyncCount;
  /** @var string */
  public $noRecentUserActivityCount;
  /** @var string */
  public $osVersionNotCompliantCount;
  /** @var string */
  public $pendingUpdate;
  /** @var string */
  public $unsupportedPolicyCount;

  /** @param string */
  public function setNoRecentPolicySyncCount($noRecentPolicySyncCount)
  {
    $this->noRecentPolicySyncCount = $noRecentPolicySyncCount;
  }
  /** @return string */
  public function getNoRecentPolicySyncCount()
  {
    return $this->noRecentPolicySyncCount;
  }
  /** @param string */
  public function setNoRecentUserActivityCount($noRecentUserActivityCount)
  {
    $this->noRecentUserActivityCount = $noRecentUserActivityCount;
  }
  /** @return string */
  public function getNoRecentUserActivityCount()
  {
    return $this->noRecentUserActivityCount;
  }
  /** @param string */
  public function setOsVersionNotCompliantCount($osVersionNotCompliantCount)
  {
    $this->osVersionNotCompliantCount = $osVersionNotCompliantCount;
  }
  /** @return string */
  public function getOsVersionNotCompliantCount()
  {
    return $this->osVersionNotCompliantCount;
  }
  /** @param string */
  public function setPendingUpdate($pendingUpdate)
  {
    $this->pendingUpdate = $pendingUpdate;
  }
  /** @return string */
  public function getPendingUpdate()
  {
    return $this->pendingUpdate;
  }
  /** @param string */
  public function setUnsupportedPolicyCount($unsupportedPolicyCount)
  {
    $this->unsupportedPolicyCount = $unsupportedPolicyCount;
  }
  /** @return string */
  public function getUnsupportedPolicyCount()
  {
    return $this->unsupportedPolicyCount;
  }
}

class GoogleChromeManagementV1CountChromeHardwareFleetDevicesResponse extends \Google\Collection
{
  /** @var GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public $cpuReports;
  /** @var GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public $memoryReports;
  /** @var GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public $modelReports;
  /** @var GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public $storageReports;
  protected $collection_key = 'storageReports';
  protected $cpuReportsType = GoogleChromeManagementV1DeviceHardwareCountReport::class;
  protected $cpuReportsDataType = 'array';
  protected $memoryReportsType = GoogleChromeManagementV1DeviceHardwareCountReport::class;
  protected $memoryReportsDataType = 'array';
  protected $modelReportsType = GoogleChromeManagementV1DeviceHardwareCountReport::class;
  protected $modelReportsDataType = 'array';
  protected $storageReportsType = GoogleChromeManagementV1DeviceHardwareCountReport::class;
  protected $storageReportsDataType = 'array';
  /** @param GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public function setCpuReports($cpuReports)
  {
    $this->cpuReports = $cpuReports;
  }
  /** @return GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public function getCpuReports()
  {
    return $this->cpuReports;
  }
  /** @param GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public function setMemoryReports($memoryReports)
  {
    $this->memoryReports = $memoryReports;
  }
  /** @return GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public function getMemoryReports()
  {
    return $this->memoryReports;
  }
  /** @param GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public function setModelReports($modelReports)
  {
    $this->modelReports = $modelReports;
  }
  /** @return GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public function getModelReports()
  {
    return $this->modelReports;
  }
  /** @param GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public function setStorageReports($storageReports)
  {
    $this->storageReports = $storageReports;
  }
  /** @return GoogleChromeManagementV1DeviceHardwareCountReport[] */
  public function getStorageReports()
  {
    return $this->storageReports;
  }
}

class GoogleChromeManagementV1CountChromeVersionsResponse extends \Google\Collection
{
  /** @var GoogleChromeManagementV1BrowserVersion[] */
  public $browserVersions;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'browserVersions';
  protected $browserVersionsType = GoogleChromeManagementV1BrowserVersion::class;
  protected $browserVersionsDataType = 'array';
  /** @param GoogleChromeManagementV1BrowserVersion[] */
  public function setBrowserVersions($browserVersions)
  {
    $this->browserVersions = $browserVersions;
  }
  /** @return GoogleChromeManagementV1BrowserVersion[] */
  public function getBrowserVersions()
  {
    return $this->browserVersions;
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class GoogleChromeManagementV1CountInstalledAppsResponse extends \Google\Collection
{
  /** @var GoogleChromeManagementV1InstalledApp[] */
  public $installedApps;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'installedApps';
  protected $installedAppsType = GoogleChromeManagementV1InstalledApp::class;
  protected $installedAppsDataType = 'array';
  /** @param GoogleChromeManagementV1InstalledApp[] */
  public function setInstalledApps($installedApps)
  {
    $this->installedApps = $installedApps;
  }
  /** @return GoogleChromeManagementV1InstalledApp[] */
  public function getInstalledApps()
  {
    return $this->installedApps;
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class GoogleChromeManagementV1CpuInfo extends \Google\Model
{
  /** @var string */
  public $architecture;
  /** @var bool */
  public $keylockerConfigured;
  /** @var bool */
  public $keylockerSupported;
  /** @var int */
  public $maxClockSpeed;
  /** @var string */
  public $model;

  /** @param string */
  public function setArchitecture($architecture)
  {
    $this->architecture = $architecture;
  }
  /** @return string */
  public function getArchitecture()
  {
    return $this->architecture;
  }
  /** @param bool */
  public function setKeylockerConfigured($keylockerConfigured)
  {
    $this->keylockerConfigured = $keylockerConfigured;
  }
  /** @return bool */
  public function getKeylockerConfigured()
  {
    return $this->keylockerConfigured;
  }
  /** @param bool */
  public function setKeylockerSupported($keylockerSupported)
  {
    $this->keylockerSupported = $keylockerSupported;
  }
  /** @return bool */
  public function getKeylockerSupported()
  {
    return $this->keylockerSupported;
  }
  /** @param int */
  public function setMaxClockSpeed($maxClockSpeed)
  {
    $this->maxClockSpeed = $maxClockSpeed;
  }
  /** @return int */
  public function getMaxClockSpeed()
  {
    return $this->maxClockSpeed;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
}

class GoogleChromeManagementV1CpuStatusReport extends \Google\Collection
{
  /** @var GoogleChromeManagementV1CpuTemperatureInfo[] */
  public $cpuTemperatureInfo;
  /** @var int */
  public $cpuUtilizationPct;
  /** @var string */
  public $reportTime;
  /** @var string */
  public $sampleFrequency;
  protected $collection_key = 'cpuTemperatureInfo';
  protected $cpuTemperatureInfoType = GoogleChromeManagementV1CpuTemperatureInfo::class;
  protected $cpuTemperatureInfoDataType = 'array';
  /** @param GoogleChromeManagementV1CpuTemperatureInfo[] */
  public function setCpuTemperatureInfo($cpuTemperatureInfo)
  {
    $this->cpuTemperatureInfo = $cpuTemperatureInfo;
  }
  /** @return GoogleChromeManagementV1CpuTemperatureInfo[] */
  public function getCpuTemperatureInfo()
  {
    return $this->cpuTemperatureInfo;
  }
  /** @param int */
  public function setCpuUtilizationPct($cpuUtilizationPct)
  {
    $this->cpuUtilizationPct = $cpuUtilizationPct;
  }
  /** @return int */
  public function getCpuUtilizationPct()
  {
    return $this->cpuUtilizationPct;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
  /** @param string */
  public function setSampleFrequency($sampleFrequency)
  {
    $this->sampleFrequency = $sampleFrequency;
  }
  /** @return string */
  public function getSampleFrequency()
  {
    return $this->sampleFrequency;
  }
}

class GoogleChromeManagementV1CpuTemperatureInfo extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var int */
  public $temperatureCelsius;

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
  /** @param int */
  public function setTemperatureCelsius($temperatureCelsius)
  {
    $this->temperatureCelsius = $temperatureCelsius;
  }
  /** @return int */
  public function getTemperatureCelsius()
  {
    return $this->temperatureCelsius;
  }
}

class GoogleChromeManagementV1Device extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var string */
  public $machine;

  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param string */
  public function setMachine($machine)
  {
    $this->machine = $machine;
  }
  /** @return string */
  public function getMachine()
  {
    return $this->machine;
  }
}

class GoogleChromeManagementV1DeviceAueCountReport extends \Google\Model
{
  /** @var string */
  public $aueMonth;
  /** @var string */
  public $aueYear;
  /** @var string */
  public $count;
  /** @var bool */
  public $expired;
  /** @var string */
  public $model;

  /** @param string */
  public function setAueMonth($aueMonth)
  {
    $this->aueMonth = $aueMonth;
  }
  /** @return string */
  public function getAueMonth()
  {
    return $this->aueMonth;
  }
  /** @param string */
  public function setAueYear($aueYear)
  {
    $this->aueYear = $aueYear;
  }
  /** @return string */
  public function getAueYear()
  {
    return $this->aueYear;
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
  /** @param bool */
  public function setExpired($expired)
  {
    $this->expired = $expired;
  }
  /** @return bool */
  public function getExpired()
  {
    return $this->expired;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
}

class GoogleChromeManagementV1DeviceHardwareCountReport extends \Google\Model
{
  /** @var string */
  public $bucket;
  /** @var string */
  public $count;

  /** @param string */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /** @return string */
  public function getBucket()
  {
    return $this->bucket;
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
}

class GoogleChromeManagementV1DiskInfo extends \Google\Collection
{
  /** @var string */
  public $bytesReadThisSession;
  /** @var string */
  public $bytesWrittenThisSession;
  /** @var string */
  public $discardTimeThisSession;
  /** @var string */
  public $health;
  /** @var string */
  public $ioTimeThisSession;
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $model;
  /** @var string */
  public $readTimeThisSession;
  /** @var string */
  public $serialNumber;
  /** @var string */
  public $sizeBytes;
  /** @var string */
  public $type;
  /** @var string[] */
  public $volumeIds;
  /** @var string */
  public $writeTimeThisSession;
  protected $collection_key = 'volumeIds';
  /** @param string */
  public function setBytesReadThisSession($bytesReadThisSession)
  {
    $this->bytesReadThisSession = $bytesReadThisSession;
  }
  /** @return string */
  public function getBytesReadThisSession()
  {
    return $this->bytesReadThisSession;
  }
  /** @param string */
  public function setBytesWrittenThisSession($bytesWrittenThisSession)
  {
    $this->bytesWrittenThisSession = $bytesWrittenThisSession;
  }
  /** @return string */
  public function getBytesWrittenThisSession()
  {
    return $this->bytesWrittenThisSession;
  }
  /** @param string */
  public function setDiscardTimeThisSession($discardTimeThisSession)
  {
    $this->discardTimeThisSession = $discardTimeThisSession;
  }
  /** @return string */
  public function getDiscardTimeThisSession()
  {
    return $this->discardTimeThisSession;
  }
  /** @param string */
  public function setHealth($health)
  {
    $this->health = $health;
  }
  /** @return string */
  public function getHealth()
  {
    return $this->health;
  }
  /** @param string */
  public function setIoTimeThisSession($ioTimeThisSession)
  {
    $this->ioTimeThisSession = $ioTimeThisSession;
  }
  /** @return string */
  public function getIoTimeThisSession()
  {
    return $this->ioTimeThisSession;
  }
  /** @param string */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /** @return string */
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
  /** @param string */
  public function setReadTimeThisSession($readTimeThisSession)
  {
    $this->readTimeThisSession = $readTimeThisSession;
  }
  /** @return string */
  public function getReadTimeThisSession()
  {
    return $this->readTimeThisSession;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /** @param string */
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /** @return string */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
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
  /** @param string[] */
  public function setVolumeIds($volumeIds)
  {
    $this->volumeIds = $volumeIds;
  }
  /** @return string[] */
  public function getVolumeIds()
  {
    return $this->volumeIds;
  }
  /** @param string */
  public function setWriteTimeThisSession($writeTimeThisSession)
  {
    $this->writeTimeThisSession = $writeTimeThisSession;
  }
  /** @return string */
  public function getWriteTimeThisSession()
  {
    return $this->writeTimeThisSession;
  }
}

class GoogleChromeManagementV1DisplayInfo extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var bool */
  public $isInternal;
  /** @var int */
  public $refreshRate;
  /** @var int */
  public $resolutionHeight;
  /** @var int */
  public $resolutionWidth;

  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param bool */
  public function setIsInternal($isInternal)
  {
    $this->isInternal = $isInternal;
  }
  /** @return bool */
  public function getIsInternal()
  {
    return $this->isInternal;
  }
  /** @param int */
  public function setRefreshRate($refreshRate)
  {
    $this->refreshRate = $refreshRate;
  }
  /** @return int */
  public function getRefreshRate()
  {
    return $this->refreshRate;
  }
  /** @param int */
  public function setResolutionHeight($resolutionHeight)
  {
    $this->resolutionHeight = $resolutionHeight;
  }
  /** @return int */
  public function getResolutionHeight()
  {
    return $this->resolutionHeight;
  }
  /** @param int */
  public function setResolutionWidth($resolutionWidth)
  {
    $this->resolutionWidth = $resolutionWidth;
  }
  /** @return int */
  public function getResolutionWidth()
  {
    return $this->resolutionWidth;
  }
}

class GoogleChromeManagementV1FindInstalledAppDevicesResponse extends \Google\Collection
{
  /** @var GoogleChromeManagementV1Device[] */
  public $devices;
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'devices';
  protected $devicesType = GoogleChromeManagementV1Device::class;
  protected $devicesDataType = 'array';
  /** @param GoogleChromeManagementV1Device[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return GoogleChromeManagementV1Device[] */
  public function getDevices()
  {
    return $this->devices;
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class GoogleChromeManagementV1GraphicsAdapterInfo extends \Google\Model
{
  /** @var string */
  public $adapter;
  /** @var string */
  public $deviceId;
  /** @var string */
  public $driverVersion;

  /** @param string */
  public function setAdapter($adapter)
  {
    $this->adapter = $adapter;
  }
  /** @return string */
  public function getAdapter()
  {
    return $this->adapter;
  }
  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param string */
  public function setDriverVersion($driverVersion)
  {
    $this->driverVersion = $driverVersion;
  }
  /** @return string */
  public function getDriverVersion()
  {
    return $this->driverVersion;
  }
}

class GoogleChromeManagementV1GraphicsInfo extends \Google\Model
{
  /** @var GoogleChromeManagementV1GraphicsAdapterInfo */
  public $adapterInfo;
  protected $adapterInfoType = GoogleChromeManagementV1GraphicsAdapterInfo::class;
  protected $adapterInfoDataType = '';
  /** @param GoogleChromeManagementV1GraphicsAdapterInfo */
  public function setAdapterInfo(GoogleChromeManagementV1GraphicsAdapterInfo $adapterInfo)
  {
    $this->adapterInfo = $adapterInfo;
  }
  /** @return GoogleChromeManagementV1GraphicsAdapterInfo */
  public function getAdapterInfo()
  {
    return $this->adapterInfo;
  }
}

class GoogleChromeManagementV1GraphicsStatusReport extends \Google\Collection
{
  /** @var GoogleChromeManagementV1DisplayInfo[] */
  public $displays;
  /** @var string */
  public $reportTime;
  protected $collection_key = 'displays';
  protected $displaysType = GoogleChromeManagementV1DisplayInfo::class;
  protected $displaysDataType = 'array';
  /** @param GoogleChromeManagementV1DisplayInfo[] */
  public function setDisplays($displays)
  {
    $this->displays = $displays;
  }
  /** @return GoogleChromeManagementV1DisplayInfo[] */
  public function getDisplays()
  {
    return $this->displays;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
}

class GoogleChromeManagementV1HttpsLatencyRoutineData extends \Google\Model
{
  /** @var string */
  public $latency;
  /** @var string */
  public $problem;

  /** @param string */
  public function setLatency($latency)
  {
    $this->latency = $latency;
  }
  /** @return string */
  public function getLatency()
  {
    return $this->latency;
  }
  /** @param string */
  public function setProblem($problem)
  {
    $this->problem = $problem;
  }
  /** @return string */
  public function getProblem()
  {
    return $this->problem;
  }
}

class GoogleChromeManagementV1InstalledApp extends \Google\Collection
{
  /** @var string */
  public $appId;
  /** @var string */
  public $appInstallType;
  /** @var string */
  public $appSource;
  /** @var string */
  public $appType;
  /** @var string */
  public $browserDeviceCount;
  /** @var string */
  public $description;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $displayName;
  /** @var string */
  public $homepageUri;
  /** @var string */
  public $osUserCount;
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
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
  public function setAppInstallType($appInstallType)
  {
    $this->appInstallType = $appInstallType;
  }
  /** @return string */
  public function getAppInstallType()
  {
    return $this->appInstallType;
  }
  /** @param string */
  public function setAppSource($appSource)
  {
    $this->appSource = $appSource;
  }
  /** @return string */
  public function getAppSource()
  {
    return $this->appSource;
  }
  /** @param string */
  public function setAppType($appType)
  {
    $this->appType = $appType;
  }
  /** @return string */
  public function getAppType()
  {
    return $this->appType;
  }
  /** @param string */
  public function setBrowserDeviceCount($browserDeviceCount)
  {
    $this->browserDeviceCount = $browserDeviceCount;
  }
  /** @return string */
  public function getBrowserDeviceCount()
  {
    return $this->browserDeviceCount;
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
  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
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
  public function setHomepageUri($homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  /** @return string */
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  /** @param string */
  public function setOsUserCount($osUserCount)
  {
    $this->osUserCount = $osUserCount;
  }
  /** @return string */
  public function getOsUserCount()
  {
    return $this->osUserCount;
  }
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class GoogleChromeManagementV1ListTelemetryDevicesResponse extends \Google\Collection
{
  /** @var GoogleChromeManagementV1TelemetryDevice[] */
  public $devices;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'devices';
  protected $devicesType = GoogleChromeManagementV1TelemetryDevice::class;
  protected $devicesDataType = 'array';
  /** @param GoogleChromeManagementV1TelemetryDevice[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return GoogleChromeManagementV1TelemetryDevice[] */
  public function getDevices()
  {
    return $this->devices;
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

class GoogleChromeManagementV1MemoryInfo extends \Google\Model
{
  /** @var string */
  public $availableRamBytes;
  /** @var GoogleChromeManagementV1TotalMemoryEncryptionInfo */
  public $totalMemoryEncryption;
  /** @var string */
  public $totalRamBytes;
  protected $totalMemoryEncryptionType = GoogleChromeManagementV1TotalMemoryEncryptionInfo::class;
  protected $totalMemoryEncryptionDataType = '';
  /** @param string */
  public function setAvailableRamBytes($availableRamBytes)
  {
    $this->availableRamBytes = $availableRamBytes;
  }
  /** @return string */
  public function getAvailableRamBytes()
  {
    return $this->availableRamBytes;
  }
  /** @param GoogleChromeManagementV1TotalMemoryEncryptionInfo */
  public function setTotalMemoryEncryption(GoogleChromeManagementV1TotalMemoryEncryptionInfo $totalMemoryEncryption)
  {
    $this->totalMemoryEncryption = $totalMemoryEncryption;
  }
  /** @return GoogleChromeManagementV1TotalMemoryEncryptionInfo */
  public function getTotalMemoryEncryption()
  {
    return $this->totalMemoryEncryption;
  }
  /** @param string */
  public function setTotalRamBytes($totalRamBytes)
  {
    $this->totalRamBytes = $totalRamBytes;
  }
  /** @return string */
  public function getTotalRamBytes()
  {
    return $this->totalRamBytes;
  }
}

class GoogleChromeManagementV1MemoryStatusReport extends \Google\Model
{
  /** @var int */
  public $pageFaults;
  /** @var string */
  public $reportTime;
  /** @var string */
  public $sampleFrequency;
  /** @var string */
  public $systemRamFreeBytes;

  /** @param int */
  public function setPageFaults($pageFaults)
  {
    $this->pageFaults = $pageFaults;
  }
  /** @return int */
  public function getPageFaults()
  {
    return $this->pageFaults;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
  /** @param string */
  public function setSampleFrequency($sampleFrequency)
  {
    $this->sampleFrequency = $sampleFrequency;
  }
  /** @return string */
  public function getSampleFrequency()
  {
    return $this->sampleFrequency;
  }
  /** @param string */
  public function setSystemRamFreeBytes($systemRamFreeBytes)
  {
    $this->systemRamFreeBytes = $systemRamFreeBytes;
  }
  /** @return string */
  public function getSystemRamFreeBytes()
  {
    return $this->systemRamFreeBytes;
  }
}

class GoogleChromeManagementV1NetworkDevice extends \Google\Model
{
  /** @var string */
  public $iccid;
  /** @var string */
  public $imei;
  /** @var string */
  public $macAddress;
  /** @var string */
  public $mdn;
  /** @var string */
  public $meid;
  /** @var string */
  public $type;

  /** @param string */
  public function setIccid($iccid)
  {
    $this->iccid = $iccid;
  }
  /** @return string */
  public function getIccid()
  {
    return $this->iccid;
  }
  /** @param string */
  public function setImei($imei)
  {
    $this->imei = $imei;
  }
  /** @return string */
  public function getImei()
  {
    return $this->imei;
  }
  /** @param string */
  public function setMacAddress($macAddress)
  {
    $this->macAddress = $macAddress;
  }
  /** @return string */
  public function getMacAddress()
  {
    return $this->macAddress;
  }
  /** @param string */
  public function setMdn($mdn)
  {
    $this->mdn = $mdn;
  }
  /** @return string */
  public function getMdn()
  {
    return $this->mdn;
  }
  /** @param string */
  public function setMeid($meid)
  {
    $this->meid = $meid;
  }
  /** @return string */
  public function getMeid()
  {
    return $this->meid;
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

class GoogleChromeManagementV1NetworkDiagnosticsReport extends \Google\Model
{
  /** @var GoogleChromeManagementV1HttpsLatencyRoutineData */
  public $httpsLatencyData;
  /** @var string */
  public $reportTime;
  protected $httpsLatencyDataType = GoogleChromeManagementV1HttpsLatencyRoutineData::class;
  protected $httpsLatencyDataDataType = '';
  /** @param GoogleChromeManagementV1HttpsLatencyRoutineData */
  public function setHttpsLatencyData(GoogleChromeManagementV1HttpsLatencyRoutineData $httpsLatencyData)
  {
    $this->httpsLatencyData = $httpsLatencyData;
  }
  /** @return GoogleChromeManagementV1HttpsLatencyRoutineData */
  public function getHttpsLatencyData()
  {
    return $this->httpsLatencyData;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
}

class GoogleChromeManagementV1NetworkInfo extends \Google\Collection
{
  /** @var GoogleChromeManagementV1NetworkDevice[] */
  public $networkDevices;
  protected $collection_key = 'networkDevices';
  protected $networkDevicesType = GoogleChromeManagementV1NetworkDevice::class;
  protected $networkDevicesDataType = 'array';
  /** @param GoogleChromeManagementV1NetworkDevice[] */
  public function setNetworkDevices($networkDevices)
  {
    $this->networkDevices = $networkDevices;
  }
  /** @return GoogleChromeManagementV1NetworkDevice[] */
  public function getNetworkDevices()
  {
    return $this->networkDevices;
  }
}

class GoogleChromeManagementV1NetworkStatusReport extends \Google\Model
{
  /** @var string */
  public $connectionState;
  /** @var string */
  public $connectionType;
  /** @var bool */
  public $encryptionOn;
  /** @var string */
  public $gatewayIpAddress;
  /** @var string */
  public $guid;
  /** @var string */
  public $lanIpAddress;
  /** @var string */
  public $receivingBitRateMbps;
  /** @var string */
  public $reportTime;
  /** @var string */
  public $sampleFrequency;
  /** @var int */
  public $signalStrengthDbm;
  /** @var string */
  public $transmissionBitRateMbps;
  /** @var int */
  public $transmissionPowerDbm;
  /** @var string */
  public $wifiLinkQuality;
  /** @var bool */
  public $wifiPowerManagementEnabled;

  /** @param string */
  public function setConnectionState($connectionState)
  {
    $this->connectionState = $connectionState;
  }
  /** @return string */
  public function getConnectionState()
  {
    return $this->connectionState;
  }
  /** @param string */
  public function setConnectionType($connectionType)
  {
    $this->connectionType = $connectionType;
  }
  /** @return string */
  public function getConnectionType()
  {
    return $this->connectionType;
  }
  /** @param bool */
  public function setEncryptionOn($encryptionOn)
  {
    $this->encryptionOn = $encryptionOn;
  }
  /** @return bool */
  public function getEncryptionOn()
  {
    return $this->encryptionOn;
  }
  /** @param string */
  public function setGatewayIpAddress($gatewayIpAddress)
  {
    $this->gatewayIpAddress = $gatewayIpAddress;
  }
  /** @return string */
  public function getGatewayIpAddress()
  {
    return $this->gatewayIpAddress;
  }
  /** @param string */
  public function setGuid($guid)
  {
    $this->guid = $guid;
  }
  /** @return string */
  public function getGuid()
  {
    return $this->guid;
  }
  /** @param string */
  public function setLanIpAddress($lanIpAddress)
  {
    $this->lanIpAddress = $lanIpAddress;
  }
  /** @return string */
  public function getLanIpAddress()
  {
    return $this->lanIpAddress;
  }
  /** @param string */
  public function setReceivingBitRateMbps($receivingBitRateMbps)
  {
    $this->receivingBitRateMbps = $receivingBitRateMbps;
  }
  /** @return string */
  public function getReceivingBitRateMbps()
  {
    return $this->receivingBitRateMbps;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
  /** @param string */
  public function setSampleFrequency($sampleFrequency)
  {
    $this->sampleFrequency = $sampleFrequency;
  }
  /** @return string */
  public function getSampleFrequency()
  {
    return $this->sampleFrequency;
  }
  /** @param int */
  public function setSignalStrengthDbm($signalStrengthDbm)
  {
    $this->signalStrengthDbm = $signalStrengthDbm;
  }
  /** @return int */
  public function getSignalStrengthDbm()
  {
    return $this->signalStrengthDbm;
  }
  /** @param string */
  public function setTransmissionBitRateMbps($transmissionBitRateMbps)
  {
    $this->transmissionBitRateMbps = $transmissionBitRateMbps;
  }
  /** @return string */
  public function getTransmissionBitRateMbps()
  {
    return $this->transmissionBitRateMbps;
  }
  /** @param int */
  public function setTransmissionPowerDbm($transmissionPowerDbm)
  {
    $this->transmissionPowerDbm = $transmissionPowerDbm;
  }
  /** @return int */
  public function getTransmissionPowerDbm()
  {
    return $this->transmissionPowerDbm;
  }
  /** @param string */
  public function setWifiLinkQuality($wifiLinkQuality)
  {
    $this->wifiLinkQuality = $wifiLinkQuality;
  }
  /** @return string */
  public function getWifiLinkQuality()
  {
    return $this->wifiLinkQuality;
  }
  /** @param bool */
  public function setWifiPowerManagementEnabled($wifiPowerManagementEnabled)
  {
    $this->wifiPowerManagementEnabled = $wifiPowerManagementEnabled;
  }
  /** @return bool */
  public function getWifiPowerManagementEnabled()
  {
    return $this->wifiPowerManagementEnabled;
  }
}

class GoogleChromeManagementV1OsUpdateStatus extends \Google\Model
{
  /** @var string */
  public $lastRebootTime;
  /** @var string */
  public $lastUpdateCheckTime;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $newPlatformVersion;
  /** @var string */
  public $newRequestedPlatformVersion;
  /** @var string */
  public $updateState;

  /** @param string */
  public function setLastRebootTime($lastRebootTime)
  {
    $this->lastRebootTime = $lastRebootTime;
  }
  /** @return string */
  public function getLastRebootTime()
  {
    return $this->lastRebootTime;
  }
  /** @param string */
  public function setLastUpdateCheckTime($lastUpdateCheckTime)
  {
    $this->lastUpdateCheckTime = $lastUpdateCheckTime;
  }
  /** @return string */
  public function getLastUpdateCheckTime()
  {
    return $this->lastUpdateCheckTime;
  }
  /** @param string */
  public function setLastUpdateTime($lastUpdateTime)
  {
    $this->lastUpdateTime = $lastUpdateTime;
  }
  /** @return string */
  public function getLastUpdateTime()
  {
    return $this->lastUpdateTime;
  }
  /** @param string */
  public function setNewPlatformVersion($newPlatformVersion)
  {
    $this->newPlatformVersion = $newPlatformVersion;
  }
  /** @return string */
  public function getNewPlatformVersion()
  {
    return $this->newPlatformVersion;
  }
  /** @param string */
  public function setNewRequestedPlatformVersion($newRequestedPlatformVersion)
  {
    $this->newRequestedPlatformVersion = $newRequestedPlatformVersion;
  }
  /** @return string */
  public function getNewRequestedPlatformVersion()
  {
    return $this->newRequestedPlatformVersion;
  }
  /** @param string */
  public function setUpdateState($updateState)
  {
    $this->updateState = $updateState;
  }
  /** @return string */
  public function getUpdateState()
  {
    return $this->updateState;
  }
}

class GoogleChromeManagementV1StorageInfo extends \Google\Collection
{
  /** @var string */
  public $availableDiskBytes;
  /** @var string */
  public $totalDiskBytes;
  /** @var GoogleChromeManagementV1StorageInfoDiskVolume[] */
  public $volume;
  protected $collection_key = 'volume';
  protected $volumeType = GoogleChromeManagementV1StorageInfoDiskVolume::class;
  protected $volumeDataType = 'array';
  /** @param string */
  public function setAvailableDiskBytes($availableDiskBytes)
  {
    $this->availableDiskBytes = $availableDiskBytes;
  }
  /** @return string */
  public function getAvailableDiskBytes()
  {
    return $this->availableDiskBytes;
  }
  /** @param string */
  public function setTotalDiskBytes($totalDiskBytes)
  {
    $this->totalDiskBytes = $totalDiskBytes;
  }
  /** @return string */
  public function getTotalDiskBytes()
  {
    return $this->totalDiskBytes;
  }
  /** @param GoogleChromeManagementV1StorageInfoDiskVolume[] */
  public function setVolume($volume)
  {
    $this->volume = $volume;
  }
  /** @return GoogleChromeManagementV1StorageInfoDiskVolume[] */
  public function getVolume()
  {
    return $this->volume;
  }
}

class GoogleChromeManagementV1StorageInfoDiskVolume extends \Google\Model
{
  /** @var string */
  public $storageFreeBytes;
  /** @var string */
  public $storageTotalBytes;
  /** @var string */
  public $volumeId;

  /** @param string */
  public function setStorageFreeBytes($storageFreeBytes)
  {
    $this->storageFreeBytes = $storageFreeBytes;
  }
  /** @return string */
  public function getStorageFreeBytes()
  {
    return $this->storageFreeBytes;
  }
  /** @param string */
  public function setStorageTotalBytes($storageTotalBytes)
  {
    $this->storageTotalBytes = $storageTotalBytes;
  }
  /** @return string */
  public function getStorageTotalBytes()
  {
    return $this->storageTotalBytes;
  }
  /** @param string */
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /** @return string */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

class GoogleChromeManagementV1StorageStatusReport extends \Google\Collection
{
  /** @var GoogleChromeManagementV1DiskInfo[] */
  public $disk;
  /** @var string */
  public $reportTime;
  protected $collection_key = 'disk';
  protected $diskType = GoogleChromeManagementV1DiskInfo::class;
  protected $diskDataType = 'array';
  /** @param GoogleChromeManagementV1DiskInfo[] */
  public function setDisk($disk)
  {
    $this->disk = $disk;
  }
  /** @return GoogleChromeManagementV1DiskInfo[] */
  public function getDisk()
  {
    return $this->disk;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
  }
}

class GoogleChromeManagementV1TelemetryDevice extends \Google\Collection
{
  /** @var GoogleChromeManagementV1AudioStatusReport[] */
  public $audioStatusReport;
  /** @var GoogleChromeManagementV1BatteryInfo[] */
  public $batteryInfo;
  /** @var GoogleChromeManagementV1BatteryStatusReport[] */
  public $batteryStatusReport;
  /** @var GoogleChromeManagementV1BootPerformanceReport[] */
  public $bootPerformanceReport;
  /** @var GoogleChromeManagementV1CpuInfo[] */
  public $cpuInfo;
  /** @var GoogleChromeManagementV1CpuStatusReport[] */
  public $cpuStatusReport;
  /** @var string */
  public $customer;
  /** @var string */
  public $deviceId;
  /** @var GoogleChromeManagementV1GraphicsInfo */
  public $graphicsInfo;
  /** @var GoogleChromeManagementV1GraphicsStatusReport[] */
  public $graphicsStatusReport;
  /** @var GoogleChromeManagementV1MemoryInfo */
  public $memoryInfo;
  /** @var GoogleChromeManagementV1MemoryStatusReport[] */
  public $memoryStatusReport;
  /** @var string */
  public $name;
  /** @var GoogleChromeManagementV1NetworkDiagnosticsReport[] */
  public $networkDiagnosticsReport;
  /** @var GoogleChromeManagementV1NetworkInfo */
  public $networkInfo;
  /** @var GoogleChromeManagementV1NetworkStatusReport[] */
  public $networkStatusReport;
  /** @var string */
  public $orgUnitId;
  /** @var GoogleChromeManagementV1OsUpdateStatus[] */
  public $osUpdateStatus;
  /** @var string */
  public $serialNumber;
  /** @var GoogleChromeManagementV1StorageInfo */
  public $storageInfo;
  /** @var GoogleChromeManagementV1StorageStatusReport[] */
  public $storageStatusReport;
  /** @var GoogleChromeManagementV1ThunderboltInfo[] */
  public $thunderboltInfo;
  protected $collection_key = 'thunderboltInfo';
  protected $audioStatusReportType = GoogleChromeManagementV1AudioStatusReport::class;
  protected $audioStatusReportDataType = 'array';
  protected $batteryInfoType = GoogleChromeManagementV1BatteryInfo::class;
  protected $batteryInfoDataType = 'array';
  protected $batteryStatusReportType = GoogleChromeManagementV1BatteryStatusReport::class;
  protected $batteryStatusReportDataType = 'array';
  protected $bootPerformanceReportType = GoogleChromeManagementV1BootPerformanceReport::class;
  protected $bootPerformanceReportDataType = 'array';
  protected $cpuInfoType = GoogleChromeManagementV1CpuInfo::class;
  protected $cpuInfoDataType = 'array';
  protected $cpuStatusReportType = GoogleChromeManagementV1CpuStatusReport::class;
  protected $cpuStatusReportDataType = 'array';
  protected $graphicsInfoType = GoogleChromeManagementV1GraphicsInfo::class;
  protected $graphicsInfoDataType = '';
  protected $graphicsStatusReportType = GoogleChromeManagementV1GraphicsStatusReport::class;
  protected $graphicsStatusReportDataType = 'array';
  protected $memoryInfoType = GoogleChromeManagementV1MemoryInfo::class;
  protected $memoryInfoDataType = '';
  protected $memoryStatusReportType = GoogleChromeManagementV1MemoryStatusReport::class;
  protected $memoryStatusReportDataType = 'array';
  protected $networkDiagnosticsReportType = GoogleChromeManagementV1NetworkDiagnosticsReport::class;
  protected $networkDiagnosticsReportDataType = 'array';
  protected $networkInfoType = GoogleChromeManagementV1NetworkInfo::class;
  protected $networkInfoDataType = '';
  protected $networkStatusReportType = GoogleChromeManagementV1NetworkStatusReport::class;
  protected $networkStatusReportDataType = 'array';
  protected $osUpdateStatusType = GoogleChromeManagementV1OsUpdateStatus::class;
  protected $osUpdateStatusDataType = 'array';
  protected $storageInfoType = GoogleChromeManagementV1StorageInfo::class;
  protected $storageInfoDataType = '';
  protected $storageStatusReportType = GoogleChromeManagementV1StorageStatusReport::class;
  protected $storageStatusReportDataType = 'array';
  protected $thunderboltInfoType = GoogleChromeManagementV1ThunderboltInfo::class;
  protected $thunderboltInfoDataType = 'array';
  /** @param GoogleChromeManagementV1AudioStatusReport[] */
  public function setAudioStatusReport($audioStatusReport)
  {
    $this->audioStatusReport = $audioStatusReport;
  }
  /** @return GoogleChromeManagementV1AudioStatusReport[] */
  public function getAudioStatusReport()
  {
    return $this->audioStatusReport;
  }
  /** @param GoogleChromeManagementV1BatteryInfo[] */
  public function setBatteryInfo($batteryInfo)
  {
    $this->batteryInfo = $batteryInfo;
  }
  /** @return GoogleChromeManagementV1BatteryInfo[] */
  public function getBatteryInfo()
  {
    return $this->batteryInfo;
  }
  /** @param GoogleChromeManagementV1BatteryStatusReport[] */
  public function setBatteryStatusReport($batteryStatusReport)
  {
    $this->batteryStatusReport = $batteryStatusReport;
  }
  /** @return GoogleChromeManagementV1BatteryStatusReport[] */
  public function getBatteryStatusReport()
  {
    return $this->batteryStatusReport;
  }
  /** @param GoogleChromeManagementV1BootPerformanceReport[] */
  public function setBootPerformanceReport($bootPerformanceReport)
  {
    $this->bootPerformanceReport = $bootPerformanceReport;
  }
  /** @return GoogleChromeManagementV1BootPerformanceReport[] */
  public function getBootPerformanceReport()
  {
    return $this->bootPerformanceReport;
  }
  /** @param GoogleChromeManagementV1CpuInfo[] */
  public function setCpuInfo($cpuInfo)
  {
    $this->cpuInfo = $cpuInfo;
  }
  /** @return GoogleChromeManagementV1CpuInfo[] */
  public function getCpuInfo()
  {
    return $this->cpuInfo;
  }
  /** @param GoogleChromeManagementV1CpuStatusReport[] */
  public function setCpuStatusReport($cpuStatusReport)
  {
    $this->cpuStatusReport = $cpuStatusReport;
  }
  /** @return GoogleChromeManagementV1CpuStatusReport[] */
  public function getCpuStatusReport()
  {
    return $this->cpuStatusReport;
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
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param GoogleChromeManagementV1GraphicsInfo */
  public function setGraphicsInfo(GoogleChromeManagementV1GraphicsInfo $graphicsInfo)
  {
    $this->graphicsInfo = $graphicsInfo;
  }
  /** @return GoogleChromeManagementV1GraphicsInfo */
  public function getGraphicsInfo()
  {
    return $this->graphicsInfo;
  }
  /** @param GoogleChromeManagementV1GraphicsStatusReport[] */
  public function setGraphicsStatusReport($graphicsStatusReport)
  {
    $this->graphicsStatusReport = $graphicsStatusReport;
  }
  /** @return GoogleChromeManagementV1GraphicsStatusReport[] */
  public function getGraphicsStatusReport()
  {
    return $this->graphicsStatusReport;
  }
  /** @param GoogleChromeManagementV1MemoryInfo */
  public function setMemoryInfo(GoogleChromeManagementV1MemoryInfo $memoryInfo)
  {
    $this->memoryInfo = $memoryInfo;
  }
  /** @return GoogleChromeManagementV1MemoryInfo */
  public function getMemoryInfo()
  {
    return $this->memoryInfo;
  }
  /** @param GoogleChromeManagementV1MemoryStatusReport[] */
  public function setMemoryStatusReport($memoryStatusReport)
  {
    $this->memoryStatusReport = $memoryStatusReport;
  }
  /** @return GoogleChromeManagementV1MemoryStatusReport[] */
  public function getMemoryStatusReport()
  {
    return $this->memoryStatusReport;
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
  /** @param GoogleChromeManagementV1NetworkDiagnosticsReport[] */
  public function setNetworkDiagnosticsReport($networkDiagnosticsReport)
  {
    $this->networkDiagnosticsReport = $networkDiagnosticsReport;
  }
  /** @return GoogleChromeManagementV1NetworkDiagnosticsReport[] */
  public function getNetworkDiagnosticsReport()
  {
    return $this->networkDiagnosticsReport;
  }
  /** @param GoogleChromeManagementV1NetworkInfo */
  public function setNetworkInfo(GoogleChromeManagementV1NetworkInfo $networkInfo)
  {
    $this->networkInfo = $networkInfo;
  }
  /** @return GoogleChromeManagementV1NetworkInfo */
  public function getNetworkInfo()
  {
    return $this->networkInfo;
  }
  /** @param GoogleChromeManagementV1NetworkStatusReport[] */
  public function setNetworkStatusReport($networkStatusReport)
  {
    $this->networkStatusReport = $networkStatusReport;
  }
  /** @return GoogleChromeManagementV1NetworkStatusReport[] */
  public function getNetworkStatusReport()
  {
    return $this->networkStatusReport;
  }
  /** @param string */
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /** @return string */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /** @param GoogleChromeManagementV1OsUpdateStatus[] */
  public function setOsUpdateStatus($osUpdateStatus)
  {
    $this->osUpdateStatus = $osUpdateStatus;
  }
  /** @return GoogleChromeManagementV1OsUpdateStatus[] */
  public function getOsUpdateStatus()
  {
    return $this->osUpdateStatus;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /** @param GoogleChromeManagementV1StorageInfo */
  public function setStorageInfo(GoogleChromeManagementV1StorageInfo $storageInfo)
  {
    $this->storageInfo = $storageInfo;
  }
  /** @return GoogleChromeManagementV1StorageInfo */
  public function getStorageInfo()
  {
    return $this->storageInfo;
  }
  /** @param GoogleChromeManagementV1StorageStatusReport[] */
  public function setStorageStatusReport($storageStatusReport)
  {
    $this->storageStatusReport = $storageStatusReport;
  }
  /** @return GoogleChromeManagementV1StorageStatusReport[] */
  public function getStorageStatusReport()
  {
    return $this->storageStatusReport;
  }
  /** @param GoogleChromeManagementV1ThunderboltInfo[] */
  public function setThunderboltInfo($thunderboltInfo)
  {
    $this->thunderboltInfo = $thunderboltInfo;
  }
  /** @return GoogleChromeManagementV1ThunderboltInfo[] */
  public function getThunderboltInfo()
  {
    return $this->thunderboltInfo;
  }
}

class GoogleChromeManagementV1ThunderboltInfo extends \Google\Model
{
  /** @var string */
  public $securityLevel;

  /** @param string */
  public function setSecurityLevel($securityLevel)
  {
    $this->securityLevel = $securityLevel;
  }
  /** @return string */
  public function getSecurityLevel()
  {
    return $this->securityLevel;
  }
}

class GoogleChromeManagementV1TotalMemoryEncryptionInfo extends \Google\Model
{
  /** @var string */
  public $encryptionAlgorithm;
  /** @var string */
  public $encryptionState;
  /** @var string */
  public $keyLength;
  /** @var string */
  public $maxKeys;

  /** @param string */
  public function setEncryptionAlgorithm($encryptionAlgorithm)
  {
    $this->encryptionAlgorithm = $encryptionAlgorithm;
  }
  /** @return string */
  public function getEncryptionAlgorithm()
  {
    return $this->encryptionAlgorithm;
  }
  /** @param string */
  public function setEncryptionState($encryptionState)
  {
    $this->encryptionState = $encryptionState;
  }
  /** @return string */
  public function getEncryptionState()
  {
    return $this->encryptionState;
  }
  /** @param string */
  public function setKeyLength($keyLength)
  {
    $this->keyLength = $keyLength;
  }
  /** @return string */
  public function getKeyLength()
  {
    return $this->keyLength;
  }
  /** @param string */
  public function setMaxKeys($maxKeys)
  {
    $this->maxKeys = $maxKeys;
  }
  /** @return string */
  public function getMaxKeys()
  {
    return $this->maxKeys;
  }
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1AndroidAppInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1AndroidAppInfo');
class_alias(GoogleChromeManagementV1AndroidAppPermission::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1AndroidAppPermission');
class_alias(GoogleChromeManagementV1AppDetails::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1AppDetails');
class_alias(GoogleChromeManagementV1AudioStatusReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1AudioStatusReport');
class_alias(GoogleChromeManagementV1BatteryInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1BatteryInfo');
class_alias(GoogleChromeManagementV1BatterySampleReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1BatterySampleReport');
class_alias(GoogleChromeManagementV1BatteryStatusReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1BatteryStatusReport');
class_alias(GoogleChromeManagementV1BootPerformanceReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1BootPerformanceReport');
class_alias(GoogleChromeManagementV1BrowserVersion::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1BrowserVersion');
class_alias(GoogleChromeManagementV1ChromeAppInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1ChromeAppInfo');
class_alias(GoogleChromeManagementV1ChromeAppPermission::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1ChromeAppPermission');
class_alias(GoogleChromeManagementV1ChromeAppRequest::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1ChromeAppRequest');
class_alias(GoogleChromeManagementV1ChromeAppSiteAccess::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1ChromeAppSiteAccess');
class_alias(GoogleChromeManagementV1CountChromeAppRequestsResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CountChromeAppRequestsResponse');
class_alias(GoogleChromeManagementV1CountChromeDevicesReachingAutoExpirationDateResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CountChromeDevicesReachingAutoExpirationDateResponse');
class_alias(GoogleChromeManagementV1CountChromeDevicesThatNeedAttentionResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CountChromeDevicesThatNeedAttentionResponse');
class_alias(GoogleChromeManagementV1CountChromeHardwareFleetDevicesResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CountChromeHardwareFleetDevicesResponse');
class_alias(GoogleChromeManagementV1CountChromeVersionsResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CountChromeVersionsResponse');
class_alias(GoogleChromeManagementV1CountInstalledAppsResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CountInstalledAppsResponse');
class_alias(GoogleChromeManagementV1CpuInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CpuInfo');
class_alias(GoogleChromeManagementV1CpuStatusReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CpuStatusReport');
class_alias(GoogleChromeManagementV1CpuTemperatureInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CpuTemperatureInfo');
class_alias(GoogleChromeManagementV1Device::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1Device');
class_alias(GoogleChromeManagementV1DeviceAueCountReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1DeviceAueCountReport');
class_alias(GoogleChromeManagementV1DeviceHardwareCountReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1DeviceHardwareCountReport');
class_alias(GoogleChromeManagementV1DiskInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1DiskInfo');
class_alias(GoogleChromeManagementV1DisplayInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1DisplayInfo');
class_alias(GoogleChromeManagementV1FindInstalledAppDevicesResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1FindInstalledAppDevicesResponse');
class_alias(GoogleChromeManagementV1GraphicsAdapterInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1GraphicsAdapterInfo');
class_alias(GoogleChromeManagementV1GraphicsInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1GraphicsInfo');
class_alias(GoogleChromeManagementV1GraphicsStatusReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1GraphicsStatusReport');
class_alias(GoogleChromeManagementV1HttpsLatencyRoutineData::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1HttpsLatencyRoutineData');
class_alias(GoogleChromeManagementV1InstalledApp::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1InstalledApp');
class_alias(GoogleChromeManagementV1ListTelemetryDevicesResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1ListTelemetryDevicesResponse');
class_alias(GoogleChromeManagementV1MemoryInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1MemoryInfo');
class_alias(GoogleChromeManagementV1MemoryStatusReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1MemoryStatusReport');
class_alias(GoogleChromeManagementV1NetworkDevice::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1NetworkDevice');
class_alias(GoogleChromeManagementV1NetworkDiagnosticsReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1NetworkDiagnosticsReport');
class_alias(GoogleChromeManagementV1NetworkInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1NetworkInfo');
class_alias(GoogleChromeManagementV1NetworkStatusReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1NetworkStatusReport');
class_alias(GoogleChromeManagementV1OsUpdateStatus::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1OsUpdateStatus');
class_alias(GoogleChromeManagementV1StorageInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1StorageInfo');
class_alias(GoogleChromeManagementV1StorageInfoDiskVolume::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1StorageInfoDiskVolume');
class_alias(GoogleChromeManagementV1StorageStatusReport::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1StorageStatusReport');
class_alias(GoogleChromeManagementV1TelemetryDevice::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1TelemetryDevice');
class_alias(GoogleChromeManagementV1ThunderboltInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1ThunderboltInfo');
class_alias(GoogleChromeManagementV1TotalMemoryEncryptionInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1TotalMemoryEncryptionInfo');
class_alias(GoogleRpcStatus::class, 'Google_Service_ChromeManagement_GoogleRpcStatus');
class_alias(GoogleTypeDate::class, 'Google_Service_ChromeManagement_GoogleTypeDate');
