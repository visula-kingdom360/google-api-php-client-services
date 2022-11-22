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

namespace Google\Service\AndroidManagement;

class AdbShellCommandEvent extends \Google\Model
{
  /** @var string */
  public $shellCmd;

  /** @param string */
  public function setShellCmd($shellCmd)
  {
    $this->shellCmd = $shellCmd;
  }
  /** @return string */
  public function getShellCmd()
  {
    return $this->shellCmd;
  }
}

class AdbShellInteractiveEvent extends \Google\Model
{
}

class AdvancedSecurityOverrides extends \Google\Collection
{
  /** @var string */
  public $commonCriteriaMode;
  /** @var string */
  public $developerSettings;
  /** @var string */
  public $googlePlayProtectVerifyApps;
  /** @var string[] */
  public $personalAppsThatCanReadWorkNotifications;
  /** @var string */
  public $untrustedAppsPolicy;
  protected $collection_key = 'personalAppsThatCanReadWorkNotifications';
  /** @param string */
  public function setCommonCriteriaMode($commonCriteriaMode)
  {
    $this->commonCriteriaMode = $commonCriteriaMode;
  }
  /** @return string */
  public function getCommonCriteriaMode()
  {
    return $this->commonCriteriaMode;
  }
  /** @param string */
  public function setDeveloperSettings($developerSettings)
  {
    $this->developerSettings = $developerSettings;
  }
  /** @return string */
  public function getDeveloperSettings()
  {
    return $this->developerSettings;
  }
  /** @param string */
  public function setGooglePlayProtectVerifyApps($googlePlayProtectVerifyApps)
  {
    $this->googlePlayProtectVerifyApps = $googlePlayProtectVerifyApps;
  }
  /** @return string */
  public function getGooglePlayProtectVerifyApps()
  {
    return $this->googlePlayProtectVerifyApps;
  }
  /** @param string[] */
  public function setPersonalAppsThatCanReadWorkNotifications($personalAppsThatCanReadWorkNotifications)
  {
    $this->personalAppsThatCanReadWorkNotifications = $personalAppsThatCanReadWorkNotifications;
  }
  /** @return string[] */
  public function getPersonalAppsThatCanReadWorkNotifications()
  {
    return $this->personalAppsThatCanReadWorkNotifications;
  }
  /** @param string */
  public function setUntrustedAppsPolicy($untrustedAppsPolicy)
  {
    $this->untrustedAppsPolicy = $untrustedAppsPolicy;
  }
  /** @return string */
  public function getUntrustedAppsPolicy()
  {
    return $this->untrustedAppsPolicy;
  }
}

class AlwaysOnVpnPackage extends \Google\Model
{
  /** @var bool */
  public $lockdownEnabled;
  /** @var string */
  public $packageName;

  /** @param bool */
  public function setLockdownEnabled($lockdownEnabled)
  {
    $this->lockdownEnabled = $lockdownEnabled;
  }
  /** @return bool */
  public function getLockdownEnabled()
  {
    return $this->lockdownEnabled;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
}

class AndroidmanagementEmpty extends \Google\Model
{
}

class ApiLevelCondition extends \Google\Model
{
  /** @var int */
  public $minApiLevel;

  /** @param int */
  public function setMinApiLevel($minApiLevel)
  {
    $this->minApiLevel = $minApiLevel;
  }
  /** @return int */
  public function getMinApiLevel()
  {
    return $this->minApiLevel;
  }
}

class AppProcessInfo extends \Google\Collection
{
  /** @var string */
  public $apkSha256Hash;
  /** @var string[] */
  public $packageNames;
  /** @var int */
  public $pid;
  /** @var string */
  public $processName;
  /** @var string */
  public $seinfo;
  /** @var string */
  public $startTime;
  /** @var int */
  public $uid;
  protected $collection_key = 'packageNames';
  /** @param string */
  public function setApkSha256Hash($apkSha256Hash)
  {
    $this->apkSha256Hash = $apkSha256Hash;
  }
  /** @return string */
  public function getApkSha256Hash()
  {
    return $this->apkSha256Hash;
  }
  /** @param string[] */
  public function setPackageNames($packageNames)
  {
    $this->packageNames = $packageNames;
  }
  /** @return string[] */
  public function getPackageNames()
  {
    return $this->packageNames;
  }
  /** @param int */
  public function setPid($pid)
  {
    $this->pid = $pid;
  }
  /** @return int */
  public function getPid()
  {
    return $this->pid;
  }
  /** @param string */
  public function setProcessName($processName)
  {
    $this->processName = $processName;
  }
  /** @return string */
  public function getProcessName()
  {
    return $this->processName;
  }
  /** @param string */
  public function setSeinfo($seinfo)
  {
    $this->seinfo = $seinfo;
  }
  /** @return string */
  public function getSeinfo()
  {
    return $this->seinfo;
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
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return int */
  public function getUid()
  {
    return $this->uid;
  }
}

class AppProcessStartEvent extends \Google\Model
{
  /** @var AppProcessInfo */
  public $processInfo;
  protected $processInfoType = AppProcessInfo::class;
  protected $processInfoDataType = '';
  /** @param AppProcessInfo */
  public function setProcessInfo(AppProcessInfo $processInfo)
  {
    $this->processInfo = $processInfo;
  }
  /** @return AppProcessInfo */
  public function getProcessInfo()
  {
    return $this->processInfo;
  }
}

class AppTrackInfo extends \Google\Model
{
  /** @var string */
  public $trackAlias;
  /** @var string */
  public $trackId;

  /** @param string */
  public function setTrackAlias($trackAlias)
  {
    $this->trackAlias = $trackAlias;
  }
  /** @return string */
  public function getTrackAlias()
  {
    return $this->trackAlias;
  }
  /** @param string */
  public function setTrackId($trackId)
  {
    $this->trackId = $trackId;
  }
  /** @return string */
  public function getTrackId()
  {
    return $this->trackId;
  }
}

class AppVersion extends \Google\Collection
{
  /** @var bool */
  public $production;
  /** @var string[] */
  public $trackIds;
  /** @var int */
  public $versionCode;
  /** @var string */
  public $versionString;
  protected $collection_key = 'trackIds';
  /** @param bool */
  public function setProduction($production)
  {
    $this->production = $production;
  }
  /** @return bool */
  public function getProduction()
  {
    return $this->production;
  }
  /** @param string[] */
  public function setTrackIds($trackIds)
  {
    $this->trackIds = $trackIds;
  }
  /** @return string[] */
  public function getTrackIds()
  {
    return $this->trackIds;
  }
  /** @param int */
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /** @return int */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
  /** @param string */
  public function setVersionString($versionString)
  {
    $this->versionString = $versionString;
  }
  /** @return string */
  public function getVersionString()
  {
    return $this->versionString;
  }
}

class Application extends \Google\Collection
{
  /** @var string */
  public $appPricing;
  /** @var AppTrackInfo[] */
  public $appTracks;
  /** @var AppVersion[] */
  public $appVersions;
  /** @var string */
  public $author;
  /** @var string[] */
  public $availableCountries;
  /** @var string */
  public $category;
  /** @var string */
  public $contentRating;
  /** @var string */
  public $description;
  /** @var string */
  public $distributionChannel;
  /** @var string[] */
  public $features;
  /** @var string */
  public $fullDescription;
  /** @var string */
  public $iconUrl;
  /** @var ManagedProperty[] */
  public $managedProperties;
  /** @var int */
  public $minAndroidSdkVersion;
  /** @var string */
  public $name;
  /** @var ApplicationPermission[] */
  public $permissions;
  /** @var string */
  public $playStoreUrl;
  /** @var string */
  public $recentChanges;
  /** @var string[] */
  public $screenshotUrls;
  /** @var string */
  public $smallIconUrl;
  /** @var string */
  public $title;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'screenshotUrls';
  protected $appTracksType = AppTrackInfo::class;
  protected $appTracksDataType = 'array';
  protected $appVersionsType = AppVersion::class;
  protected $appVersionsDataType = 'array';
  protected $managedPropertiesType = ManagedProperty::class;
  protected $managedPropertiesDataType = 'array';
  protected $permissionsType = ApplicationPermission::class;
  protected $permissionsDataType = 'array';
  /** @param string */
  public function setAppPricing($appPricing)
  {
    $this->appPricing = $appPricing;
  }
  /** @return string */
  public function getAppPricing()
  {
    return $this->appPricing;
  }
  /** @param AppTrackInfo[] */
  public function setAppTracks($appTracks)
  {
    $this->appTracks = $appTracks;
  }
  /** @return AppTrackInfo[] */
  public function getAppTracks()
  {
    return $this->appTracks;
  }
  /** @param AppVersion[] */
  public function setAppVersions($appVersions)
  {
    $this->appVersions = $appVersions;
  }
  /** @return AppVersion[] */
  public function getAppVersions()
  {
    return $this->appVersions;
  }
  /** @param string */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /** @return string */
  public function getAuthor()
  {
    return $this->author;
  }
  /** @param string[] */
  public function setAvailableCountries($availableCountries)
  {
    $this->availableCountries = $availableCountries;
  }
  /** @return string[] */
  public function getAvailableCountries()
  {
    return $this->availableCountries;
  }
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
  public function setContentRating($contentRating)
  {
    $this->contentRating = $contentRating;
  }
  /** @return string */
  public function getContentRating()
  {
    return $this->contentRating;
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
  public function setDistributionChannel($distributionChannel)
  {
    $this->distributionChannel = $distributionChannel;
  }
  /** @return string */
  public function getDistributionChannel()
  {
    return $this->distributionChannel;
  }
  /** @param string[] */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /** @return string[] */
  public function getFeatures()
  {
    return $this->features;
  }
  /** @param string */
  public function setFullDescription($fullDescription)
  {
    $this->fullDescription = $fullDescription;
  }
  /** @return string */
  public function getFullDescription()
  {
    return $this->fullDescription;
  }
  /** @param string */
  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }
  /** @return string */
  public function getIconUrl()
  {
    return $this->iconUrl;
  }
  /** @param ManagedProperty[] */
  public function setManagedProperties($managedProperties)
  {
    $this->managedProperties = $managedProperties;
  }
  /** @return ManagedProperty[] */
  public function getManagedProperties()
  {
    return $this->managedProperties;
  }
  /** @param int */
  public function setMinAndroidSdkVersion($minAndroidSdkVersion)
  {
    $this->minAndroidSdkVersion = $minAndroidSdkVersion;
  }
  /** @return int */
  public function getMinAndroidSdkVersion()
  {
    return $this->minAndroidSdkVersion;
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
  /** @param ApplicationPermission[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return ApplicationPermission[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /** @param string */
  public function setPlayStoreUrl($playStoreUrl)
  {
    $this->playStoreUrl = $playStoreUrl;
  }
  /** @return string */
  public function getPlayStoreUrl()
  {
    return $this->playStoreUrl;
  }
  /** @param string */
  public function setRecentChanges($recentChanges)
  {
    $this->recentChanges = $recentChanges;
  }
  /** @return string */
  public function getRecentChanges()
  {
    return $this->recentChanges;
  }
  /** @param string[] */
  public function setScreenshotUrls($screenshotUrls)
  {
    $this->screenshotUrls = $screenshotUrls;
  }
  /** @return string[] */
  public function getScreenshotUrls()
  {
    return $this->screenshotUrls;
  }
  /** @param string */
  public function setSmallIconUrl($smallIconUrl)
  {
    $this->smallIconUrl = $smallIconUrl;
  }
  /** @return string */
  public function getSmallIconUrl()
  {
    return $this->smallIconUrl;
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

class ApplicationEvent extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $eventType;

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

class ApplicationPermission extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $permissionId;

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
  public function setPermissionId($permissionId)
  {
    $this->permissionId = $permissionId;
  }
  /** @return string */
  public function getPermissionId()
  {
    return $this->permissionId;
  }
}

class ApplicationPolicy extends \Google\Collection
{
  /** @var string[] */
  public $accessibleTrackIds;
  /** @var string */
  public $alwaysOnVpnLockdownExemption;
  /** @var string */
  public $autoUpdateMode;
  /** @var string */
  public $connectedWorkAndPersonalApp;
  /** @var string */
  public $defaultPermissionPolicy;
  /** @var string[] */
  public $delegatedScopes;
  /** @var bool */
  public $disabled;
  /** @var ExtensionConfig */
  public $extensionConfig;
  /** @var string */
  public $installType;
  /** @var bool */
  public $lockTaskAllowed;
  /** @var array[] */
  public $managedConfiguration;
  /** @var ManagedConfigurationTemplate */
  public $managedConfigurationTemplate;
  /** @var int */
  public $minimumVersionCode;
  /** @var string */
  public $packageName;
  /** @var PermissionGrant[] */
  public $permissionGrants;
  /** @var string */
  public $workProfileWidgets;
  protected $collection_key = 'permissionGrants';
  protected $extensionConfigType = ExtensionConfig::class;
  protected $extensionConfigDataType = '';
  protected $managedConfigurationTemplateType = ManagedConfigurationTemplate::class;
  protected $managedConfigurationTemplateDataType = '';
  protected $permissionGrantsType = PermissionGrant::class;
  protected $permissionGrantsDataType = 'array';
  /** @param string[] */
  public function setAccessibleTrackIds($accessibleTrackIds)
  {
    $this->accessibleTrackIds = $accessibleTrackIds;
  }
  /** @return string[] */
  public function getAccessibleTrackIds()
  {
    return $this->accessibleTrackIds;
  }
  /** @param string */
  public function setAlwaysOnVpnLockdownExemption($alwaysOnVpnLockdownExemption)
  {
    $this->alwaysOnVpnLockdownExemption = $alwaysOnVpnLockdownExemption;
  }
  /** @return string */
  public function getAlwaysOnVpnLockdownExemption()
  {
    return $this->alwaysOnVpnLockdownExemption;
  }
  /** @param string */
  public function setAutoUpdateMode($autoUpdateMode)
  {
    $this->autoUpdateMode = $autoUpdateMode;
  }
  /** @return string */
  public function getAutoUpdateMode()
  {
    return $this->autoUpdateMode;
  }
  /** @param string */
  public function setConnectedWorkAndPersonalApp($connectedWorkAndPersonalApp)
  {
    $this->connectedWorkAndPersonalApp = $connectedWorkAndPersonalApp;
  }
  /** @return string */
  public function getConnectedWorkAndPersonalApp()
  {
    return $this->connectedWorkAndPersonalApp;
  }
  /** @param string */
  public function setDefaultPermissionPolicy($defaultPermissionPolicy)
  {
    $this->defaultPermissionPolicy = $defaultPermissionPolicy;
  }
  /** @return string */
  public function getDefaultPermissionPolicy()
  {
    return $this->defaultPermissionPolicy;
  }
  /** @param string[] */
  public function setDelegatedScopes($delegatedScopes)
  {
    $this->delegatedScopes = $delegatedScopes;
  }
  /** @return string[] */
  public function getDelegatedScopes()
  {
    return $this->delegatedScopes;
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
  /** @param ExtensionConfig */
  public function setExtensionConfig(ExtensionConfig $extensionConfig)
  {
    $this->extensionConfig = $extensionConfig;
  }
  /** @return ExtensionConfig */
  public function getExtensionConfig()
  {
    return $this->extensionConfig;
  }
  /** @param string */
  public function setInstallType($installType)
  {
    $this->installType = $installType;
  }
  /** @return string */
  public function getInstallType()
  {
    return $this->installType;
  }
  /** @param bool */
  public function setLockTaskAllowed($lockTaskAllowed)
  {
    $this->lockTaskAllowed = $lockTaskAllowed;
  }
  /** @return bool */
  public function getLockTaskAllowed()
  {
    return $this->lockTaskAllowed;
  }
  /** @param array[] */
  public function setManagedConfiguration($managedConfiguration)
  {
    $this->managedConfiguration = $managedConfiguration;
  }
  /** @return array[] */
  public function getManagedConfiguration()
  {
    return $this->managedConfiguration;
  }
  /** @param ManagedConfigurationTemplate */
  public function setManagedConfigurationTemplate(ManagedConfigurationTemplate $managedConfigurationTemplate)
  {
    $this->managedConfigurationTemplate = $managedConfigurationTemplate;
  }
  /** @return ManagedConfigurationTemplate */
  public function getManagedConfigurationTemplate()
  {
    return $this->managedConfigurationTemplate;
  }
  /** @param int */
  public function setMinimumVersionCode($minimumVersionCode)
  {
    $this->minimumVersionCode = $minimumVersionCode;
  }
  /** @return int */
  public function getMinimumVersionCode()
  {
    return $this->minimumVersionCode;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param PermissionGrant[] */
  public function setPermissionGrants($permissionGrants)
  {
    $this->permissionGrants = $permissionGrants;
  }
  /** @return PermissionGrant[] */
  public function getPermissionGrants()
  {
    return $this->permissionGrants;
  }
  /** @param string */
  public function setWorkProfileWidgets($workProfileWidgets)
  {
    $this->workProfileWidgets = $workProfileWidgets;
  }
  /** @return string */
  public function getWorkProfileWidgets()
  {
    return $this->workProfileWidgets;
  }
}

class ApplicationReport extends \Google\Collection
{
  /** @var string */
  public $applicationSource;
  /** @var string */
  public $displayName;
  /** @var ApplicationEvent[] */
  public $events;
  /** @var string */
  public $installerPackageName;
  /** @var KeyedAppState[] */
  public $keyedAppStates;
  /** @var string */
  public $packageName;
  /** @var string */
  public $packageSha256Hash;
  /** @var string[] */
  public $signingKeyCertFingerprints;
  /** @var string */
  public $state;
  /** @var int */
  public $versionCode;
  /** @var string */
  public $versionName;
  protected $collection_key = 'signingKeyCertFingerprints';
  protected $eventsType = ApplicationEvent::class;
  protected $eventsDataType = 'array';
  protected $keyedAppStatesType = KeyedAppState::class;
  protected $keyedAppStatesDataType = 'array';
  /** @param string */
  public function setApplicationSource($applicationSource)
  {
    $this->applicationSource = $applicationSource;
  }
  /** @return string */
  public function getApplicationSource()
  {
    return $this->applicationSource;
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
  /** @param ApplicationEvent[] */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /** @return ApplicationEvent[] */
  public function getEvents()
  {
    return $this->events;
  }
  /** @param string */
  public function setInstallerPackageName($installerPackageName)
  {
    $this->installerPackageName = $installerPackageName;
  }
  /** @return string */
  public function getInstallerPackageName()
  {
    return $this->installerPackageName;
  }
  /** @param KeyedAppState[] */
  public function setKeyedAppStates($keyedAppStates)
  {
    $this->keyedAppStates = $keyedAppStates;
  }
  /** @return KeyedAppState[] */
  public function getKeyedAppStates()
  {
    return $this->keyedAppStates;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string */
  public function setPackageSha256Hash($packageSha256Hash)
  {
    $this->packageSha256Hash = $packageSha256Hash;
  }
  /** @return string */
  public function getPackageSha256Hash()
  {
    return $this->packageSha256Hash;
  }
  /** @param string[] */
  public function setSigningKeyCertFingerprints($signingKeyCertFingerprints)
  {
    $this->signingKeyCertFingerprints = $signingKeyCertFingerprints;
  }
  /** @return string[] */
  public function getSigningKeyCertFingerprints()
  {
    return $this->signingKeyCertFingerprints;
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
  /** @param int */
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /** @return int */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
  /** @param string */
  public function setVersionName($versionName)
  {
    $this->versionName = $versionName;
  }
  /** @return string */
  public function getVersionName()
  {
    return $this->versionName;
  }
}

class ApplicationReportingSettings extends \Google\Model
{
  /** @var bool */
  public $includeRemovedApps;

  /** @param bool */
  public function setIncludeRemovedApps($includeRemovedApps)
  {
    $this->includeRemovedApps = $includeRemovedApps;
  }
  /** @return bool */
  public function getIncludeRemovedApps()
  {
    return $this->includeRemovedApps;
  }
}

class BatchUsageLogEvents extends \Google\Collection
{
  /** @var string */
  public $device;
  /** @var string */
  public $retrievalTime;
  /** @var UsageLogEvent[] */
  public $usageLogEvents;
  /** @var string */
  public $user;
  protected $collection_key = 'usageLogEvents';
  protected $usageLogEventsType = UsageLogEvent::class;
  protected $usageLogEventsDataType = 'array';
  /** @param string */
  public function setDevice($device)
  {
    $this->device = $device;
  }
  /** @return string */
  public function getDevice()
  {
    return $this->device;
  }
  /** @param string */
  public function setRetrievalTime($retrievalTime)
  {
    $this->retrievalTime = $retrievalTime;
  }
  /** @return string */
  public function getRetrievalTime()
  {
    return $this->retrievalTime;
  }
  /** @param UsageLogEvent[] */
  public function setUsageLogEvents($usageLogEvents)
  {
    $this->usageLogEvents = $usageLogEvents;
  }
  /** @return UsageLogEvent[] */
  public function getUsageLogEvents()
  {
    return $this->usageLogEvents;
  }
  /** @param string */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return string */
  public function getUser()
  {
    return $this->user;
  }
}

class BlockAction extends \Google\Model
{
  /** @var int */
  public $blockAfterDays;
  /** @var string */
  public $blockScope;

  /** @param int */
  public function setBlockAfterDays($blockAfterDays)
  {
    $this->blockAfterDays = $blockAfterDays;
  }
  /** @return int */
  public function getBlockAfterDays()
  {
    return $this->blockAfterDays;
  }
  /** @param string */
  public function setBlockScope($blockScope)
  {
    $this->blockScope = $blockScope;
  }
  /** @return string */
  public function getBlockScope()
  {
    return $this->blockScope;
  }
}

class CertAuthorityInstalledEvent extends \Google\Model
{
  /** @var string */
  public $certificate;
  /** @var bool */
  public $success;
  /** @var int */
  public $userId;

  /** @param string */
  public function setCertificate($certificate)
  {
    $this->certificate = $certificate;
  }
  /** @return string */
  public function getCertificate()
  {
    return $this->certificate;
  }
  /** @param bool */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return bool */
  public function getSuccess()
  {
    return $this->success;
  }
  /** @param int */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return int */
  public function getUserId()
  {
    return $this->userId;
  }
}

class CertAuthorityRemovedEvent extends \Google\Model
{
  /** @var string */
  public $certificate;
  /** @var bool */
  public $success;
  /** @var int */
  public $userId;

  /** @param string */
  public function setCertificate($certificate)
  {
    $this->certificate = $certificate;
  }
  /** @return string */
  public function getCertificate()
  {
    return $this->certificate;
  }
  /** @param bool */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return bool */
  public function getSuccess()
  {
    return $this->success;
  }
  /** @param int */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return int */
  public function getUserId()
  {
    return $this->userId;
  }
}

class CertValidationFailureEvent extends \Google\Model
{
  /** @var string */
  public $failureReason;

  /** @param string */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /** @return string */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
}

class ChoosePrivateKeyRule extends \Google\Collection
{
  /** @var string[] */
  public $packageNames;
  /** @var string */
  public $privateKeyAlias;
  /** @var string */
  public $urlPattern;
  protected $collection_key = 'packageNames';
  /** @param string[] */
  public function setPackageNames($packageNames)
  {
    $this->packageNames = $packageNames;
  }
  /** @return string[] */
  public function getPackageNames()
  {
    return $this->packageNames;
  }
  /** @param string */
  public function setPrivateKeyAlias($privateKeyAlias)
  {
    $this->privateKeyAlias = $privateKeyAlias;
  }
  /** @return string */
  public function getPrivateKeyAlias()
  {
    return $this->privateKeyAlias;
  }
  /** @param string */
  public function setUrlPattern($urlPattern)
  {
    $this->urlPattern = $urlPattern;
  }
  /** @return string */
  public function getUrlPattern()
  {
    return $this->urlPattern;
  }
}

class ClearAppsDataParams extends \Google\Collection
{
  /** @var string[] */
  public $packageNames;
  protected $collection_key = 'packageNames';
  /** @param string[] */
  public function setPackageNames($packageNames)
  {
    $this->packageNames = $packageNames;
  }
  /** @return string[] */
  public function getPackageNames()
  {
    return $this->packageNames;
  }
}

class ClearAppsDataStatus extends \Google\Model
{
  /** @var PerAppResult[] */
  public $results;
  protected $resultsType = PerAppResult::class;
  protected $resultsDataType = 'map';
  /** @param PerAppResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return PerAppResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class Command extends \Google\Collection
{
  /** @var ClearAppsDataParams */
  public $clearAppsDataParams;
  /** @var ClearAppsDataStatus */
  public $clearAppsDataStatus;
  /** @var string */
  public $createTime;
  /** @var string */
  public $duration;
  /** @var string */
  public $errorCode;
  /** @var string */
  public $newPassword;
  /** @var string[] */
  public $resetPasswordFlags;
  /** @var string */
  public $type;
  /** @var string */
  public $userName;
  protected $collection_key = 'resetPasswordFlags';
  protected $clearAppsDataParamsType = ClearAppsDataParams::class;
  protected $clearAppsDataParamsDataType = '';
  protected $clearAppsDataStatusType = ClearAppsDataStatus::class;
  protected $clearAppsDataStatusDataType = '';
  /** @param ClearAppsDataParams */
  public function setClearAppsDataParams(ClearAppsDataParams $clearAppsDataParams)
  {
    $this->clearAppsDataParams = $clearAppsDataParams;
  }
  /** @return ClearAppsDataParams */
  public function getClearAppsDataParams()
  {
    return $this->clearAppsDataParams;
  }
  /** @param ClearAppsDataStatus */
  public function setClearAppsDataStatus(ClearAppsDataStatus $clearAppsDataStatus)
  {
    $this->clearAppsDataStatus = $clearAppsDataStatus;
  }
  /** @return ClearAppsDataStatus */
  public function getClearAppsDataStatus()
  {
    return $this->clearAppsDataStatus;
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
  public function setNewPassword($newPassword)
  {
    $this->newPassword = $newPassword;
  }
  /** @return string */
  public function getNewPassword()
  {
    return $this->newPassword;
  }
  /** @param string[] */
  public function setResetPasswordFlags($resetPasswordFlags)
  {
    $this->resetPasswordFlags = $resetPasswordFlags;
  }
  /** @return string[] */
  public function getResetPasswordFlags()
  {
    return $this->resetPasswordFlags;
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

class CommonCriteriaModeInfo extends \Google\Model
{
  /** @var string */
  public $commonCriteriaModeStatus;

  /** @param string */
  public function setCommonCriteriaModeStatus($commonCriteriaModeStatus)
  {
    $this->commonCriteriaModeStatus = $commonCriteriaModeStatus;
  }
  /** @return string */
  public function getCommonCriteriaModeStatus()
  {
    return $this->commonCriteriaModeStatus;
  }
}

class ComplianceRule extends \Google\Collection
{
  /** @var ApiLevelCondition */
  public $apiLevelCondition;
  /** @var bool */
  public $disableApps;
  /** @var NonComplianceDetailCondition */
  public $nonComplianceDetailCondition;
  /** @var string[] */
  public $packageNamesToDisable;
  protected $collection_key = 'packageNamesToDisable';
  protected $apiLevelConditionType = ApiLevelCondition::class;
  protected $apiLevelConditionDataType = '';
  protected $nonComplianceDetailConditionType = NonComplianceDetailCondition::class;
  protected $nonComplianceDetailConditionDataType = '';
  /** @param ApiLevelCondition */
  public function setApiLevelCondition(ApiLevelCondition $apiLevelCondition)
  {
    $this->apiLevelCondition = $apiLevelCondition;
  }
  /** @return ApiLevelCondition */
  public function getApiLevelCondition()
  {
    return $this->apiLevelCondition;
  }
  /** @param bool */
  public function setDisableApps($disableApps)
  {
    $this->disableApps = $disableApps;
  }
  /** @return bool */
  public function getDisableApps()
  {
    return $this->disableApps;
  }
  /** @param NonComplianceDetailCondition */
  public function setNonComplianceDetailCondition(NonComplianceDetailCondition $nonComplianceDetailCondition)
  {
    $this->nonComplianceDetailCondition = $nonComplianceDetailCondition;
  }
  /** @return NonComplianceDetailCondition */
  public function getNonComplianceDetailCondition()
  {
    return $this->nonComplianceDetailCondition;
  }
  /** @param string[] */
  public function setPackageNamesToDisable($packageNamesToDisable)
  {
    $this->packageNamesToDisable = $packageNamesToDisable;
  }
  /** @return string[] */
  public function getPackageNamesToDisable()
  {
    return $this->packageNamesToDisable;
  }
}

class ConnectEvent extends \Google\Model
{
  /** @var string */
  public $destinationIpAddress;
  /** @var int */
  public $destinationPort;
  /** @var string */
  public $packageName;

  /** @param string */
  public function setDestinationIpAddress($destinationIpAddress)
  {
    $this->destinationIpAddress = $destinationIpAddress;
  }
  /** @return string */
  public function getDestinationIpAddress()
  {
    return $this->destinationIpAddress;
  }
  /** @param int */
  public function setDestinationPort($destinationPort)
  {
    $this->destinationPort = $destinationPort;
  }
  /** @return int */
  public function getDestinationPort()
  {
    return $this->destinationPort;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
}

class ContactInfo extends \Google\Model
{
  /** @var string */
  public $contactEmail;
  /** @var string */
  public $dataProtectionOfficerEmail;
  /** @var string */
  public $dataProtectionOfficerName;
  /** @var string */
  public $dataProtectionOfficerPhone;
  /** @var string */
  public $euRepresentativeEmail;
  /** @var string */
  public $euRepresentativeName;
  /** @var string */
  public $euRepresentativePhone;

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
  public function setDataProtectionOfficerEmail($dataProtectionOfficerEmail)
  {
    $this->dataProtectionOfficerEmail = $dataProtectionOfficerEmail;
  }
  /** @return string */
  public function getDataProtectionOfficerEmail()
  {
    return $this->dataProtectionOfficerEmail;
  }
  /** @param string */
  public function setDataProtectionOfficerName($dataProtectionOfficerName)
  {
    $this->dataProtectionOfficerName = $dataProtectionOfficerName;
  }
  /** @return string */
  public function getDataProtectionOfficerName()
  {
    return $this->dataProtectionOfficerName;
  }
  /** @param string */
  public function setDataProtectionOfficerPhone($dataProtectionOfficerPhone)
  {
    $this->dataProtectionOfficerPhone = $dataProtectionOfficerPhone;
  }
  /** @return string */
  public function getDataProtectionOfficerPhone()
  {
    return $this->dataProtectionOfficerPhone;
  }
  /** @param string */
  public function setEuRepresentativeEmail($euRepresentativeEmail)
  {
    $this->euRepresentativeEmail = $euRepresentativeEmail;
  }
  /** @return string */
  public function getEuRepresentativeEmail()
  {
    return $this->euRepresentativeEmail;
  }
  /** @param string */
  public function setEuRepresentativeName($euRepresentativeName)
  {
    $this->euRepresentativeName = $euRepresentativeName;
  }
  /** @return string */
  public function getEuRepresentativeName()
  {
    return $this->euRepresentativeName;
  }
  /** @param string */
  public function setEuRepresentativePhone($euRepresentativePhone)
  {
    $this->euRepresentativePhone = $euRepresentativePhone;
  }
  /** @return string */
  public function getEuRepresentativePhone()
  {
    return $this->euRepresentativePhone;
  }
}

class ContentProviderEndpoint extends \Google\Collection
{
  /** @var string */
  public $packageName;
  /** @var string[] */
  public $signingCertsSha256;
  /** @var string */
  public $uri;
  protected $collection_key = 'signingCertsSha256';
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string[] */
  public function setSigningCertsSha256($signingCertsSha256)
  {
    $this->signingCertsSha256 = $signingCertsSha256;
  }
  /** @return string[] */
  public function getSigningCertsSha256()
  {
    return $this->signingCertsSha256;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class CrossProfilePolicies extends \Google\Model
{
  /** @var string */
  public $crossProfileCopyPaste;
  /** @var string */
  public $crossProfileDataSharing;
  /** @var string */
  public $showWorkContactsInPersonalProfile;
  /** @var string */
  public $workProfileWidgetsDefault;

  /** @param string */
  public function setCrossProfileCopyPaste($crossProfileCopyPaste)
  {
    $this->crossProfileCopyPaste = $crossProfileCopyPaste;
  }
  /** @return string */
  public function getCrossProfileCopyPaste()
  {
    return $this->crossProfileCopyPaste;
  }
  /** @param string */
  public function setCrossProfileDataSharing($crossProfileDataSharing)
  {
    $this->crossProfileDataSharing = $crossProfileDataSharing;
  }
  /** @return string */
  public function getCrossProfileDataSharing()
  {
    return $this->crossProfileDataSharing;
  }
  /** @param string */
  public function setShowWorkContactsInPersonalProfile($showWorkContactsInPersonalProfile)
  {
    $this->showWorkContactsInPersonalProfile = $showWorkContactsInPersonalProfile;
  }
  /** @return string */
  public function getShowWorkContactsInPersonalProfile()
  {
    return $this->showWorkContactsInPersonalProfile;
  }
  /** @param string */
  public function setWorkProfileWidgetsDefault($workProfileWidgetsDefault)
  {
    $this->workProfileWidgetsDefault = $workProfileWidgetsDefault;
  }
  /** @return string */
  public function getWorkProfileWidgetsDefault()
  {
    return $this->workProfileWidgetsDefault;
  }
}

class CryptoSelfTestCompletedEvent extends \Google\Model
{
  /** @var bool */
  public $success;

  /** @param bool */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return bool */
  public function getSuccess()
  {
    return $this->success;
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

class Device extends \Google\Collection
{
  /** @var int */
  public $apiLevel;
  /** @var ApplicationReport[] */
  public $applicationReports;
  /** @var PasswordRequirements[] */
  public $appliedPasswordPolicies;
  /** @var string */
  public $appliedPolicyName;
  /** @var string */
  public $appliedPolicyVersion;
  /** @var string */
  public $appliedState;
  /** @var CommonCriteriaModeInfo */
  public $commonCriteriaModeInfo;
  /** @var DeviceSettings */
  public $deviceSettings;
  /** @var UserFacingMessage */
  public $disabledReason;
  /** @var Display[] */
  public $displays;
  /** @var string */
  public $enrollmentTime;
  /** @var string */
  public $enrollmentTokenData;
  /** @var string */
  public $enrollmentTokenName;
  /** @var HardwareInfo */
  public $hardwareInfo;
  /** @var HardwareStatus[] */
  public $hardwareStatusSamples;
  /** @var string */
  public $lastPolicyComplianceReportTime;
  /** @var string */
  public $lastPolicySyncTime;
  /** @var string */
  public $lastStatusReportTime;
  /** @var string */
  public $managementMode;
  /** @var MemoryEvent[] */
  public $memoryEvents;
  /** @var MemoryInfo */
  public $memoryInfo;
  /** @var string */
  public $name;
  /** @var NetworkInfo */
  public $networkInfo;
  /** @var NonComplianceDetail[] */
  public $nonComplianceDetails;
  /** @var string */
  public $ownership;
  /** @var bool */
  public $policyCompliant;
  /** @var string */
  public $policyName;
  /** @var PowerManagementEvent[] */
  public $powerManagementEvents;
  /** @var string[] */
  public $previousDeviceNames;
  /** @var SecurityPosture */
  public $securityPosture;
  /** @var SoftwareInfo */
  public $softwareInfo;
  /** @var string */
  public $state;
  /** @var string[] */
  public $systemProperties;
  /** @var User */
  public $user;
  /** @var string */
  public $userName;
  protected $collection_key = 'previousDeviceNames';
  protected $applicationReportsType = ApplicationReport::class;
  protected $applicationReportsDataType = 'array';
  protected $appliedPasswordPoliciesType = PasswordRequirements::class;
  protected $appliedPasswordPoliciesDataType = 'array';
  protected $commonCriteriaModeInfoType = CommonCriteriaModeInfo::class;
  protected $commonCriteriaModeInfoDataType = '';
  protected $deviceSettingsType = DeviceSettings::class;
  protected $deviceSettingsDataType = '';
  protected $disabledReasonType = UserFacingMessage::class;
  protected $disabledReasonDataType = '';
  protected $displaysType = Display::class;
  protected $displaysDataType = 'array';
  protected $hardwareInfoType = HardwareInfo::class;
  protected $hardwareInfoDataType = '';
  protected $hardwareStatusSamplesType = HardwareStatus::class;
  protected $hardwareStatusSamplesDataType = 'array';
  protected $memoryEventsType = MemoryEvent::class;
  protected $memoryEventsDataType = 'array';
  protected $memoryInfoType = MemoryInfo::class;
  protected $memoryInfoDataType = '';
  protected $networkInfoType = NetworkInfo::class;
  protected $networkInfoDataType = '';
  protected $nonComplianceDetailsType = NonComplianceDetail::class;
  protected $nonComplianceDetailsDataType = 'array';
  protected $powerManagementEventsType = PowerManagementEvent::class;
  protected $powerManagementEventsDataType = 'array';
  protected $securityPostureType = SecurityPosture::class;
  protected $securityPostureDataType = '';
  protected $softwareInfoType = SoftwareInfo::class;
  protected $softwareInfoDataType = '';
  protected $userType = User::class;
  protected $userDataType = '';
  /** @param int */
  public function setApiLevel($apiLevel)
  {
    $this->apiLevel = $apiLevel;
  }
  /** @return int */
  public function getApiLevel()
  {
    return $this->apiLevel;
  }
  /** @param ApplicationReport[] */
  public function setApplicationReports($applicationReports)
  {
    $this->applicationReports = $applicationReports;
  }
  /** @return ApplicationReport[] */
  public function getApplicationReports()
  {
    return $this->applicationReports;
  }
  /** @param PasswordRequirements[] */
  public function setAppliedPasswordPolicies($appliedPasswordPolicies)
  {
    $this->appliedPasswordPolicies = $appliedPasswordPolicies;
  }
  /** @return PasswordRequirements[] */
  public function getAppliedPasswordPolicies()
  {
    return $this->appliedPasswordPolicies;
  }
  /** @param string */
  public function setAppliedPolicyName($appliedPolicyName)
  {
    $this->appliedPolicyName = $appliedPolicyName;
  }
  /** @return string */
  public function getAppliedPolicyName()
  {
    return $this->appliedPolicyName;
  }
  /** @param string */
  public function setAppliedPolicyVersion($appliedPolicyVersion)
  {
    $this->appliedPolicyVersion = $appliedPolicyVersion;
  }
  /** @return string */
  public function getAppliedPolicyVersion()
  {
    return $this->appliedPolicyVersion;
  }
  /** @param string */
  public function setAppliedState($appliedState)
  {
    $this->appliedState = $appliedState;
  }
  /** @return string */
  public function getAppliedState()
  {
    return $this->appliedState;
  }
  /** @param CommonCriteriaModeInfo */
  public function setCommonCriteriaModeInfo(CommonCriteriaModeInfo $commonCriteriaModeInfo)
  {
    $this->commonCriteriaModeInfo = $commonCriteriaModeInfo;
  }
  /** @return CommonCriteriaModeInfo */
  public function getCommonCriteriaModeInfo()
  {
    return $this->commonCriteriaModeInfo;
  }
  /** @param DeviceSettings */
  public function setDeviceSettings(DeviceSettings $deviceSettings)
  {
    $this->deviceSettings = $deviceSettings;
  }
  /** @return DeviceSettings */
  public function getDeviceSettings()
  {
    return $this->deviceSettings;
  }
  /** @param UserFacingMessage */
  public function setDisabledReason(UserFacingMessage $disabledReason)
  {
    $this->disabledReason = $disabledReason;
  }
  /** @return UserFacingMessage */
  public function getDisabledReason()
  {
    return $this->disabledReason;
  }
  /** @param Display[] */
  public function setDisplays($displays)
  {
    $this->displays = $displays;
  }
  /** @return Display[] */
  public function getDisplays()
  {
    return $this->displays;
  }
  /** @param string */
  public function setEnrollmentTime($enrollmentTime)
  {
    $this->enrollmentTime = $enrollmentTime;
  }
  /** @return string */
  public function getEnrollmentTime()
  {
    return $this->enrollmentTime;
  }
  /** @param string */
  public function setEnrollmentTokenData($enrollmentTokenData)
  {
    $this->enrollmentTokenData = $enrollmentTokenData;
  }
  /** @return string */
  public function getEnrollmentTokenData()
  {
    return $this->enrollmentTokenData;
  }
  /** @param string */
  public function setEnrollmentTokenName($enrollmentTokenName)
  {
    $this->enrollmentTokenName = $enrollmentTokenName;
  }
  /** @return string */
  public function getEnrollmentTokenName()
  {
    return $this->enrollmentTokenName;
  }
  /** @param HardwareInfo */
  public function setHardwareInfo(HardwareInfo $hardwareInfo)
  {
    $this->hardwareInfo = $hardwareInfo;
  }
  /** @return HardwareInfo */
  public function getHardwareInfo()
  {
    return $this->hardwareInfo;
  }
  /** @param HardwareStatus[] */
  public function setHardwareStatusSamples($hardwareStatusSamples)
  {
    $this->hardwareStatusSamples = $hardwareStatusSamples;
  }
  /** @return HardwareStatus[] */
  public function getHardwareStatusSamples()
  {
    return $this->hardwareStatusSamples;
  }
  /** @param string */
  public function setLastPolicyComplianceReportTime($lastPolicyComplianceReportTime)
  {
    $this->lastPolicyComplianceReportTime = $lastPolicyComplianceReportTime;
  }
  /** @return string */
  public function getLastPolicyComplianceReportTime()
  {
    return $this->lastPolicyComplianceReportTime;
  }
  /** @param string */
  public function setLastPolicySyncTime($lastPolicySyncTime)
  {
    $this->lastPolicySyncTime = $lastPolicySyncTime;
  }
  /** @return string */
  public function getLastPolicySyncTime()
  {
    return $this->lastPolicySyncTime;
  }
  /** @param string */
  public function setLastStatusReportTime($lastStatusReportTime)
  {
    $this->lastStatusReportTime = $lastStatusReportTime;
  }
  /** @return string */
  public function getLastStatusReportTime()
  {
    return $this->lastStatusReportTime;
  }
  /** @param string */
  public function setManagementMode($managementMode)
  {
    $this->managementMode = $managementMode;
  }
  /** @return string */
  public function getManagementMode()
  {
    return $this->managementMode;
  }
  /** @param MemoryEvent[] */
  public function setMemoryEvents($memoryEvents)
  {
    $this->memoryEvents = $memoryEvents;
  }
  /** @return MemoryEvent[] */
  public function getMemoryEvents()
  {
    return $this->memoryEvents;
  }
  /** @param MemoryInfo */
  public function setMemoryInfo(MemoryInfo $memoryInfo)
  {
    $this->memoryInfo = $memoryInfo;
  }
  /** @return MemoryInfo */
  public function getMemoryInfo()
  {
    return $this->memoryInfo;
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
  /** @param NetworkInfo */
  public function setNetworkInfo(NetworkInfo $networkInfo)
  {
    $this->networkInfo = $networkInfo;
  }
  /** @return NetworkInfo */
  public function getNetworkInfo()
  {
    return $this->networkInfo;
  }
  /** @param NonComplianceDetail[] */
  public function setNonComplianceDetails($nonComplianceDetails)
  {
    $this->nonComplianceDetails = $nonComplianceDetails;
  }
  /** @return NonComplianceDetail[] */
  public function getNonComplianceDetails()
  {
    return $this->nonComplianceDetails;
  }
  /** @param string */
  public function setOwnership($ownership)
  {
    $this->ownership = $ownership;
  }
  /** @return string */
  public function getOwnership()
  {
    return $this->ownership;
  }
  /** @param bool */
  public function setPolicyCompliant($policyCompliant)
  {
    $this->policyCompliant = $policyCompliant;
  }
  /** @return bool */
  public function getPolicyCompliant()
  {
    return $this->policyCompliant;
  }
  /** @param string */
  public function setPolicyName($policyName)
  {
    $this->policyName = $policyName;
  }
  /** @return string */
  public function getPolicyName()
  {
    return $this->policyName;
  }
  /** @param PowerManagementEvent[] */
  public function setPowerManagementEvents($powerManagementEvents)
  {
    $this->powerManagementEvents = $powerManagementEvents;
  }
  /** @return PowerManagementEvent[] */
  public function getPowerManagementEvents()
  {
    return $this->powerManagementEvents;
  }
  /** @param string[] */
  public function setPreviousDeviceNames($previousDeviceNames)
  {
    $this->previousDeviceNames = $previousDeviceNames;
  }
  /** @return string[] */
  public function getPreviousDeviceNames()
  {
    return $this->previousDeviceNames;
  }
  /** @param SecurityPosture */
  public function setSecurityPosture(SecurityPosture $securityPosture)
  {
    $this->securityPosture = $securityPosture;
  }
  /** @return SecurityPosture */
  public function getSecurityPosture()
  {
    return $this->securityPosture;
  }
  /** @param SoftwareInfo */
  public function setSoftwareInfo(SoftwareInfo $softwareInfo)
  {
    $this->softwareInfo = $softwareInfo;
  }
  /** @return SoftwareInfo */
  public function getSoftwareInfo()
  {
    return $this->softwareInfo;
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
  /** @param string[] */
  public function setSystemProperties($systemProperties)
  {
    $this->systemProperties = $systemProperties;
  }
  /** @return string[] */
  public function getSystemProperties()
  {
    return $this->systemProperties;
  }
  /** @param User */
  public function setUser(User $user)
  {
    $this->user = $user;
  }
  /** @return User */
  public function getUser()
  {
    return $this->user;
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

class DeviceSettings extends \Google\Model
{
  /** @var bool */
  public $adbEnabled;
  /** @var bool */
  public $developmentSettingsEnabled;
  /** @var string */
  public $encryptionStatus;
  /** @var bool */
  public $isDeviceSecure;
  /** @var bool */
  public $isEncrypted;
  /** @var bool */
  public $unknownSourcesEnabled;
  /** @var bool */
  public $verifyAppsEnabled;

  /** @param bool */
  public function setAdbEnabled($adbEnabled)
  {
    $this->adbEnabled = $adbEnabled;
  }
  /** @return bool */
  public function getAdbEnabled()
  {
    return $this->adbEnabled;
  }
  /** @param bool */
  public function setDevelopmentSettingsEnabled($developmentSettingsEnabled)
  {
    $this->developmentSettingsEnabled = $developmentSettingsEnabled;
  }
  /** @return bool */
  public function getDevelopmentSettingsEnabled()
  {
    return $this->developmentSettingsEnabled;
  }
  /** @param string */
  public function setEncryptionStatus($encryptionStatus)
  {
    $this->encryptionStatus = $encryptionStatus;
  }
  /** @return string */
  public function getEncryptionStatus()
  {
    return $this->encryptionStatus;
  }
  /** @param bool */
  public function setIsDeviceSecure($isDeviceSecure)
  {
    $this->isDeviceSecure = $isDeviceSecure;
  }
  /** @return bool */
  public function getIsDeviceSecure()
  {
    return $this->isDeviceSecure;
  }
  /** @param bool */
  public function setIsEncrypted($isEncrypted)
  {
    $this->isEncrypted = $isEncrypted;
  }
  /** @return bool */
  public function getIsEncrypted()
  {
    return $this->isEncrypted;
  }
  /** @param bool */
  public function setUnknownSourcesEnabled($unknownSourcesEnabled)
  {
    $this->unknownSourcesEnabled = $unknownSourcesEnabled;
  }
  /** @return bool */
  public function getUnknownSourcesEnabled()
  {
    return $this->unknownSourcesEnabled;
  }
  /** @param bool */
  public function setVerifyAppsEnabled($verifyAppsEnabled)
  {
    $this->verifyAppsEnabled = $verifyAppsEnabled;
  }
  /** @return bool */
  public function getVerifyAppsEnabled()
  {
    return $this->verifyAppsEnabled;
  }
}

class Display extends \Google\Model
{
  /** @var int */
  public $density;
  /** @var int */
  public $displayId;
  /** @var int */
  public $height;
  /** @var string */
  public $name;
  /** @var int */
  public $refreshRate;
  /** @var string */
  public $state;
  /** @var int */
  public $width;

  /** @param int */
  public function setDensity($density)
  {
    $this->density = $density;
  }
  /** @return int */
  public function getDensity()
  {
    return $this->density;
  }
  /** @param int */
  public function setDisplayId($displayId)
  {
    $this->displayId = $displayId;
  }
  /** @return int */
  public function getDisplayId()
  {
    return $this->displayId;
  }
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
  public function setRefreshRate($refreshRate)
  {
    $this->refreshRate = $refreshRate;
  }
  /** @return int */
  public function getRefreshRate()
  {
    return $this->refreshRate;
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

class DnsEvent extends \Google\Collection
{
  /** @var string */
  public $hostname;
  /** @var string[] */
  public $ipAddresses;
  /** @var string */
  public $packageName;
  /** @var string */
  public $totalIpAddressesReturned;
  protected $collection_key = 'ipAddresses';
  /** @param string */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /** @return string */
  public function getHostname()
  {
    return $this->hostname;
  }
  /** @param string[] */
  public function setIpAddresses($ipAddresses)
  {
    $this->ipAddresses = $ipAddresses;
  }
  /** @return string[] */
  public function getIpAddresses()
  {
    return $this->ipAddresses;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string */
  public function setTotalIpAddressesReturned($totalIpAddressesReturned)
  {
    $this->totalIpAddressesReturned = $totalIpAddressesReturned;
  }
  /** @return string */
  public function getTotalIpAddressesReturned()
  {
    return $this->totalIpAddressesReturned;
  }
}

class EnrollmentToken extends \Google\Model
{
  /** @var string */
  public $additionalData;
  /** @var string */
  public $allowPersonalUsage;
  /** @var string */
  public $duration;
  /** @var string */
  public $expirationTimestamp;
  /** @var string */
  public $name;
  /** @var bool */
  public $oneTimeOnly;
  /** @var string */
  public $policyName;
  /** @var string */
  public $qrCode;
  /** @var User */
  public $user;
  /** @var string */
  public $value;
  protected $userType = User::class;
  protected $userDataType = '';
  /** @param string */
  public function setAdditionalData($additionalData)
  {
    $this->additionalData = $additionalData;
  }
  /** @return string */
  public function getAdditionalData()
  {
    return $this->additionalData;
  }
  /** @param string */
  public function setAllowPersonalUsage($allowPersonalUsage)
  {
    $this->allowPersonalUsage = $allowPersonalUsage;
  }
  /** @return string */
  public function getAllowPersonalUsage()
  {
    return $this->allowPersonalUsage;
  }
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
  public function setExpirationTimestamp($expirationTimestamp)
  {
    $this->expirationTimestamp = $expirationTimestamp;
  }
  /** @return string */
  public function getExpirationTimestamp()
  {
    return $this->expirationTimestamp;
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
  public function setOneTimeOnly($oneTimeOnly)
  {
    $this->oneTimeOnly = $oneTimeOnly;
  }
  /** @return bool */
  public function getOneTimeOnly()
  {
    return $this->oneTimeOnly;
  }
  /** @param string */
  public function setPolicyName($policyName)
  {
    $this->policyName = $policyName;
  }
  /** @return string */
  public function getPolicyName()
  {
    return $this->policyName;
  }
  /** @param string */
  public function setQrCode($qrCode)
  {
    $this->qrCode = $qrCode;
  }
  /** @return string */
  public function getQrCode()
  {
    return $this->qrCode;
  }
  /** @param User */
  public function setUser(User $user)
  {
    $this->user = $user;
  }
  /** @return User */
  public function getUser()
  {
    return $this->user;
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

class Enterprise extends \Google\Collection
{
  /** @var bool */
  public $appAutoApprovalEnabled;
  /** @var ContactInfo */
  public $contactInfo;
  /** @var string[] */
  public $enabledNotificationTypes;
  /** @var string */
  public $enterpriseDisplayName;
  /** @var ExternalData */
  public $logo;
  /** @var string */
  public $name;
  /** @var int */
  public $primaryColor;
  /** @var string */
  public $pubsubTopic;
  /** @var SigninDetail[] */
  public $signinDetails;
  /** @var TermsAndConditions[] */
  public $termsAndConditions;
  protected $collection_key = 'termsAndConditions';
  protected $contactInfoType = ContactInfo::class;
  protected $contactInfoDataType = '';
  protected $logoType = ExternalData::class;
  protected $logoDataType = '';
  protected $signinDetailsType = SigninDetail::class;
  protected $signinDetailsDataType = 'array';
  protected $termsAndConditionsType = TermsAndConditions::class;
  protected $termsAndConditionsDataType = 'array';
  /** @param bool */
  public function setAppAutoApprovalEnabled($appAutoApprovalEnabled)
  {
    $this->appAutoApprovalEnabled = $appAutoApprovalEnabled;
  }
  /** @return bool */
  public function getAppAutoApprovalEnabled()
  {
    return $this->appAutoApprovalEnabled;
  }
  /** @param ContactInfo */
  public function setContactInfo(ContactInfo $contactInfo)
  {
    $this->contactInfo = $contactInfo;
  }
  /** @return ContactInfo */
  public function getContactInfo()
  {
    return $this->contactInfo;
  }
  /** @param string[] */
  public function setEnabledNotificationTypes($enabledNotificationTypes)
  {
    $this->enabledNotificationTypes = $enabledNotificationTypes;
  }
  /** @return string[] */
  public function getEnabledNotificationTypes()
  {
    return $this->enabledNotificationTypes;
  }
  /** @param string */
  public function setEnterpriseDisplayName($enterpriseDisplayName)
  {
    $this->enterpriseDisplayName = $enterpriseDisplayName;
  }
  /** @return string */
  public function getEnterpriseDisplayName()
  {
    return $this->enterpriseDisplayName;
  }
  /** @param ExternalData */
  public function setLogo(ExternalData $logo)
  {
    $this->logo = $logo;
  }
  /** @return ExternalData */
  public function getLogo()
  {
    return $this->logo;
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
  public function setPrimaryColor($primaryColor)
  {
    $this->primaryColor = $primaryColor;
  }
  /** @return int */
  public function getPrimaryColor()
  {
    return $this->primaryColor;
  }
  /** @param string */
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /** @return string */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
  /** @param SigninDetail[] */
  public function setSigninDetails($signinDetails)
  {
    $this->signinDetails = $signinDetails;
  }
  /** @return SigninDetail[] */
  public function getSigninDetails()
  {
    return $this->signinDetails;
  }
  /** @param TermsAndConditions[] */
  public function setTermsAndConditions($termsAndConditions)
  {
    $this->termsAndConditions = $termsAndConditions;
  }
  /** @return TermsAndConditions[] */
  public function getTermsAndConditions()
  {
    return $this->termsAndConditions;
  }
}

class ExtensionConfig extends \Google\Collection
{
  /** @var string */
  public $notificationReceiver;
  /** @var string[] */
  public $signingKeyFingerprintsSha256;
  protected $collection_key = 'signingKeyFingerprintsSha256';
  /** @param string */
  public function setNotificationReceiver($notificationReceiver)
  {
    $this->notificationReceiver = $notificationReceiver;
  }
  /** @return string */
  public function getNotificationReceiver()
  {
    return $this->notificationReceiver;
  }
  /** @param string[] */
  public function setSigningKeyFingerprintsSha256($signingKeyFingerprintsSha256)
  {
    $this->signingKeyFingerprintsSha256 = $signingKeyFingerprintsSha256;
  }
  /** @return string[] */
  public function getSigningKeyFingerprintsSha256()
  {
    return $this->signingKeyFingerprintsSha256;
  }
}

class ExternalData extends \Google\Model
{
  /** @var string */
  public $sha256Hash;
  /** @var string */
  public $url;

  /** @param string */
  public function setSha256Hash($sha256Hash)
  {
    $this->sha256Hash = $sha256Hash;
  }
  /** @return string */
  public function getSha256Hash()
  {
    return $this->sha256Hash;
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

class FilePulledEvent extends \Google\Model
{
  /** @var string */
  public $filePath;

  /** @param string */
  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  /** @return string */
  public function getFilePath()
  {
    return $this->filePath;
  }
}

class FilePushedEvent extends \Google\Model
{
  /** @var string */
  public $filePath;

  /** @param string */
  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  /** @return string */
  public function getFilePath()
  {
    return $this->filePath;
  }
}

class FreezePeriod extends \Google\Model
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

class HardwareInfo extends \Google\Collection
{
  /** @var float[] */
  public $batteryShutdownTemperatures;
  /** @var float[] */
  public $batteryThrottlingTemperatures;
  /** @var string */
  public $brand;
  /** @var float[] */
  public $cpuShutdownTemperatures;
  /** @var float[] */
  public $cpuThrottlingTemperatures;
  /** @var string */
  public $deviceBasebandVersion;
  /** @var string */
  public $enterpriseSpecificId;
  /** @var float[] */
  public $gpuShutdownTemperatures;
  /** @var float[] */
  public $gpuThrottlingTemperatures;
  /** @var string */
  public $hardware;
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $model;
  /** @var string */
  public $serialNumber;
  /** @var float[] */
  public $skinShutdownTemperatures;
  /** @var float[] */
  public $skinThrottlingTemperatures;
  protected $collection_key = 'skinThrottlingTemperatures';
  /** @param float[] */
  public function setBatteryShutdownTemperatures($batteryShutdownTemperatures)
  {
    $this->batteryShutdownTemperatures = $batteryShutdownTemperatures;
  }
  /** @return float[] */
  public function getBatteryShutdownTemperatures()
  {
    return $this->batteryShutdownTemperatures;
  }
  /** @param float[] */
  public function setBatteryThrottlingTemperatures($batteryThrottlingTemperatures)
  {
    $this->batteryThrottlingTemperatures = $batteryThrottlingTemperatures;
  }
  /** @return float[] */
  public function getBatteryThrottlingTemperatures()
  {
    return $this->batteryThrottlingTemperatures;
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
  /** @param float[] */
  public function setCpuShutdownTemperatures($cpuShutdownTemperatures)
  {
    $this->cpuShutdownTemperatures = $cpuShutdownTemperatures;
  }
  /** @return float[] */
  public function getCpuShutdownTemperatures()
  {
    return $this->cpuShutdownTemperatures;
  }
  /** @param float[] */
  public function setCpuThrottlingTemperatures($cpuThrottlingTemperatures)
  {
    $this->cpuThrottlingTemperatures = $cpuThrottlingTemperatures;
  }
  /** @return float[] */
  public function getCpuThrottlingTemperatures()
  {
    return $this->cpuThrottlingTemperatures;
  }
  /** @param string */
  public function setDeviceBasebandVersion($deviceBasebandVersion)
  {
    $this->deviceBasebandVersion = $deviceBasebandVersion;
  }
  /** @return string */
  public function getDeviceBasebandVersion()
  {
    return $this->deviceBasebandVersion;
  }
  /** @param string */
  public function setEnterpriseSpecificId($enterpriseSpecificId)
  {
    $this->enterpriseSpecificId = $enterpriseSpecificId;
  }
  /** @return string */
  public function getEnterpriseSpecificId()
  {
    return $this->enterpriseSpecificId;
  }
  /** @param float[] */
  public function setGpuShutdownTemperatures($gpuShutdownTemperatures)
  {
    $this->gpuShutdownTemperatures = $gpuShutdownTemperatures;
  }
  /** @return float[] */
  public function getGpuShutdownTemperatures()
  {
    return $this->gpuShutdownTemperatures;
  }
  /** @param float[] */
  public function setGpuThrottlingTemperatures($gpuThrottlingTemperatures)
  {
    $this->gpuThrottlingTemperatures = $gpuThrottlingTemperatures;
  }
  /** @return float[] */
  public function getGpuThrottlingTemperatures()
  {
    return $this->gpuThrottlingTemperatures;
  }
  /** @param string */
  public function setHardware($hardware)
  {
    $this->hardware = $hardware;
  }
  /** @return string */
  public function getHardware()
  {
    return $this->hardware;
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
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /** @param float[] */
  public function setSkinShutdownTemperatures($skinShutdownTemperatures)
  {
    $this->skinShutdownTemperatures = $skinShutdownTemperatures;
  }
  /** @return float[] */
  public function getSkinShutdownTemperatures()
  {
    return $this->skinShutdownTemperatures;
  }
  /** @param float[] */
  public function setSkinThrottlingTemperatures($skinThrottlingTemperatures)
  {
    $this->skinThrottlingTemperatures = $skinThrottlingTemperatures;
  }
  /** @return float[] */
  public function getSkinThrottlingTemperatures()
  {
    return $this->skinThrottlingTemperatures;
  }
}

class HardwareStatus extends \Google\Collection
{
  /** @var float[] */
  public $batteryTemperatures;
  /** @var float[] */
  public $cpuTemperatures;
  /** @var float[] */
  public $cpuUsages;
  /** @var string */
  public $createTime;
  /** @var float[] */
  public $fanSpeeds;
  /** @var float[] */
  public $gpuTemperatures;
  /** @var float[] */
  public $skinTemperatures;
  protected $collection_key = 'skinTemperatures';
  /** @param float[] */
  public function setBatteryTemperatures($batteryTemperatures)
  {
    $this->batteryTemperatures = $batteryTemperatures;
  }
  /** @return float[] */
  public function getBatteryTemperatures()
  {
    return $this->batteryTemperatures;
  }
  /** @param float[] */
  public function setCpuTemperatures($cpuTemperatures)
  {
    $this->cpuTemperatures = $cpuTemperatures;
  }
  /** @return float[] */
  public function getCpuTemperatures()
  {
    return $this->cpuTemperatures;
  }
  /** @param float[] */
  public function setCpuUsages($cpuUsages)
  {
    $this->cpuUsages = $cpuUsages;
  }
  /** @return float[] */
  public function getCpuUsages()
  {
    return $this->cpuUsages;
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
  /** @param float[] */
  public function setFanSpeeds($fanSpeeds)
  {
    $this->fanSpeeds = $fanSpeeds;
  }
  /** @return float[] */
  public function getFanSpeeds()
  {
    return $this->fanSpeeds;
  }
  /** @param float[] */
  public function setGpuTemperatures($gpuTemperatures)
  {
    $this->gpuTemperatures = $gpuTemperatures;
  }
  /** @return float[] */
  public function getGpuTemperatures()
  {
    return $this->gpuTemperatures;
  }
  /** @param float[] */
  public function setSkinTemperatures($skinTemperatures)
  {
    $this->skinTemperatures = $skinTemperatures;
  }
  /** @return float[] */
  public function getSkinTemperatures()
  {
    return $this->skinTemperatures;
  }
}

class IssueCommandResponse extends \Google\Model
{
}

class KeyDestructionEvent extends \Google\Model
{
  /** @var int */
  public $applicationUid;
  /** @var string */
  public $keyAlias;
  /** @var bool */
  public $success;

  /** @param int */
  public function setApplicationUid($applicationUid)
  {
    $this->applicationUid = $applicationUid;
  }
  /** @return int */
  public function getApplicationUid()
  {
    return $this->applicationUid;
  }
  /** @param string */
  public function setKeyAlias($keyAlias)
  {
    $this->keyAlias = $keyAlias;
  }
  /** @return string */
  public function getKeyAlias()
  {
    return $this->keyAlias;
  }
  /** @param bool */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return bool */
  public function getSuccess()
  {
    return $this->success;
  }
}

class KeyGeneratedEvent extends \Google\Model
{
  /** @var int */
  public $applicationUid;
  /** @var string */
  public $keyAlias;
  /** @var bool */
  public $success;

  /** @param int */
  public function setApplicationUid($applicationUid)
  {
    $this->applicationUid = $applicationUid;
  }
  /** @return int */
  public function getApplicationUid()
  {
    return $this->applicationUid;
  }
  /** @param string */
  public function setKeyAlias($keyAlias)
  {
    $this->keyAlias = $keyAlias;
  }
  /** @return string */
  public function getKeyAlias()
  {
    return $this->keyAlias;
  }
  /** @param bool */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return bool */
  public function getSuccess()
  {
    return $this->success;
  }
}

class KeyImportEvent extends \Google\Model
{
  /** @var int */
  public $applicationUid;
  /** @var string */
  public $keyAlias;
  /** @var bool */
  public $success;

  /** @param int */
  public function setApplicationUid($applicationUid)
  {
    $this->applicationUid = $applicationUid;
  }
  /** @return int */
  public function getApplicationUid()
  {
    return $this->applicationUid;
  }
  /** @param string */
  public function setKeyAlias($keyAlias)
  {
    $this->keyAlias = $keyAlias;
  }
  /** @return string */
  public function getKeyAlias()
  {
    return $this->keyAlias;
  }
  /** @param bool */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return bool */
  public function getSuccess()
  {
    return $this->success;
  }
}

class KeyIntegrityViolationEvent extends \Google\Model
{
  /** @var int */
  public $applicationUid;
  /** @var string */
  public $keyAlias;

  /** @param int */
  public function setApplicationUid($applicationUid)
  {
    $this->applicationUid = $applicationUid;
  }
  /** @return int */
  public function getApplicationUid()
  {
    return $this->applicationUid;
  }
  /** @param string */
  public function setKeyAlias($keyAlias)
  {
    $this->keyAlias = $keyAlias;
  }
  /** @return string */
  public function getKeyAlias()
  {
    return $this->keyAlias;
  }
}

class KeyedAppState extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $data;
  /** @var string */
  public $key;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $message;
  /** @var string */
  public $severity;

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
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
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
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
}

class KeyguardDismissAuthAttemptEvent extends \Google\Model
{
  /** @var bool */
  public $strongAuthMethodUsed;
  /** @var bool */
  public $success;

  /** @param bool */
  public function setStrongAuthMethodUsed($strongAuthMethodUsed)
  {
    $this->strongAuthMethodUsed = $strongAuthMethodUsed;
  }
  /** @return bool */
  public function getStrongAuthMethodUsed()
  {
    return $this->strongAuthMethodUsed;
  }
  /** @param bool */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return bool */
  public function getSuccess()
  {
    return $this->success;
  }
}

class KeyguardDismissedEvent extends \Google\Model
{
}

class KeyguardSecuredEvent extends \Google\Model
{
}

class KioskCustomization extends \Google\Model
{
  /** @var string */
  public $deviceSettings;
  /** @var string */
  public $powerButtonActions;
  /** @var string */
  public $statusBar;
  /** @var string */
  public $systemErrorWarnings;
  /** @var string */
  public $systemNavigation;

  /** @param string */
  public function setDeviceSettings($deviceSettings)
  {
    $this->deviceSettings = $deviceSettings;
  }
  /** @return string */
  public function getDeviceSettings()
  {
    return $this->deviceSettings;
  }
  /** @param string */
  public function setPowerButtonActions($powerButtonActions)
  {
    $this->powerButtonActions = $powerButtonActions;
  }
  /** @return string */
  public function getPowerButtonActions()
  {
    return $this->powerButtonActions;
  }
  /** @param string */
  public function setStatusBar($statusBar)
  {
    $this->statusBar = $statusBar;
  }
  /** @return string */
  public function getStatusBar()
  {
    return $this->statusBar;
  }
  /** @param string */
  public function setSystemErrorWarnings($systemErrorWarnings)
  {
    $this->systemErrorWarnings = $systemErrorWarnings;
  }
  /** @return string */
  public function getSystemErrorWarnings()
  {
    return $this->systemErrorWarnings;
  }
  /** @param string */
  public function setSystemNavigation($systemNavigation)
  {
    $this->systemNavigation = $systemNavigation;
  }
  /** @return string */
  public function getSystemNavigation()
  {
    return $this->systemNavigation;
  }
}

class LaunchAppAction extends \Google\Model
{
  /** @var string */
  public $packageName;

  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
}

class ListDevicesResponse extends \Google\Collection
{
  /** @var Device[] */
  public $devices;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'devices';
  protected $devicesType = Device::class;
  protected $devicesDataType = 'array';
  /** @param Device[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return Device[] */
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

class ListEnrollmentTokensResponse extends \Google\Collection
{
  /** @var EnrollmentToken[] */
  public $enrollmentTokens;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'enrollmentTokens';
  protected $enrollmentTokensType = EnrollmentToken::class;
  protected $enrollmentTokensDataType = 'array';
  /** @param EnrollmentToken[] */
  public function setEnrollmentTokens($enrollmentTokens)
  {
    $this->enrollmentTokens = $enrollmentTokens;
  }
  /** @return EnrollmentToken[] */
  public function getEnrollmentTokens()
  {
    return $this->enrollmentTokens;
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

class ListEnterprisesResponse extends \Google\Collection
{
  /** @var Enterprise[] */
  public $enterprises;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'enterprises';
  protected $enterprisesType = Enterprise::class;
  protected $enterprisesDataType = 'array';
  /** @param Enterprise[] */
  public function setEnterprises($enterprises)
  {
    $this->enterprises = $enterprises;
  }
  /** @return Enterprise[] */
  public function getEnterprises()
  {
    return $this->enterprises;
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

class ListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Operation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = Operation::class;
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
  /** @param Operation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return Operation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class ListPoliciesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Policy[] */
  public $policies;
  protected $collection_key = 'policies';
  protected $policiesType = Policy::class;
  protected $policiesDataType = 'array';
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
  /** @param Policy[] */
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /** @return Policy[] */
  public function getPolicies()
  {
    return $this->policies;
  }
}

class ListWebAppsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var WebApp[] */
  public $webApps;
  protected $collection_key = 'webApps';
  protected $webAppsType = WebApp::class;
  protected $webAppsDataType = 'array';
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
  /** @param WebApp[] */
  public function setWebApps($webApps)
  {
    $this->webApps = $webApps;
  }
  /** @return WebApp[] */
  public function getWebApps()
  {
    return $this->webApps;
  }
}

class LogBufferSizeCriticalEvent extends \Google\Model
{
}

class LoggingStartedEvent extends \Google\Model
{
}

class LoggingStoppedEvent extends \Google\Model
{
}

class ManagedConfigurationTemplate extends \Google\Model
{
  /** @var string[] */
  public $configurationVariables;
  /** @var string */
  public $templateId;

  /** @param string[] */
  public function setConfigurationVariables($configurationVariables)
  {
    $this->configurationVariables = $configurationVariables;
  }
  /** @return string[] */
  public function getConfigurationVariables()
  {
    return $this->configurationVariables;
  }
  /** @param string */
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  /** @return string */
  public function getTemplateId()
  {
    return $this->templateId;
  }
}

class ManagedProperty extends \Google\Collection
{
  /** @var array */
  public $defaultValue;
  /** @var string */
  public $description;
  /** @var ManagedPropertyEntry[] */
  public $entries;
  /** @var string */
  public $key;
  /** @var ManagedProperty[] */
  public $nestedProperties;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  protected $collection_key = 'nestedProperties';
  protected $entriesType = ManagedPropertyEntry::class;
  protected $entriesDataType = 'array';
  protected $nestedPropertiesType = ManagedProperty::class;
  protected $nestedPropertiesDataType = 'array';
  /** @param array */
  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return array */
  public function getDefaultValue()
  {
    return $this->defaultValue;
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
  /** @param ManagedPropertyEntry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return ManagedPropertyEntry[] */
  public function getEntries()
  {
    return $this->entries;
  }
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
  /** @param ManagedProperty[] */
  public function setNestedProperties($nestedProperties)
  {
    $this->nestedProperties = $nestedProperties;
  }
  /** @return ManagedProperty[] */
  public function getNestedProperties()
  {
    return $this->nestedProperties;
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

class ManagedPropertyEntry extends \Google\Model
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

class MediaMountEvent extends \Google\Model
{
  /** @var string */
  public $mountPoint;
  /** @var string */
  public $volumeLabel;

  /** @param string */
  public function setMountPoint($mountPoint)
  {
    $this->mountPoint = $mountPoint;
  }
  /** @return string */
  public function getMountPoint()
  {
    return $this->mountPoint;
  }
  /** @param string */
  public function setVolumeLabel($volumeLabel)
  {
    $this->volumeLabel = $volumeLabel;
  }
  /** @return string */
  public function getVolumeLabel()
  {
    return $this->volumeLabel;
  }
}

class MediaUnmountEvent extends \Google\Model
{
  /** @var string */
  public $mountPoint;
  /** @var string */
  public $volumeLabel;

  /** @param string */
  public function setMountPoint($mountPoint)
  {
    $this->mountPoint = $mountPoint;
  }
  /** @return string */
  public function getMountPoint()
  {
    return $this->mountPoint;
  }
  /** @param string */
  public function setVolumeLabel($volumeLabel)
  {
    $this->volumeLabel = $volumeLabel;
  }
  /** @return string */
  public function getVolumeLabel()
  {
    return $this->volumeLabel;
  }
}

class MemoryEvent extends \Google\Model
{
  /** @var string */
  public $byteCount;
  /** @var string */
  public $createTime;
  /** @var string */
  public $eventType;

  /** @param string */
  public function setByteCount($byteCount)
  {
    $this->byteCount = $byteCount;
  }
  /** @return string */
  public function getByteCount()
  {
    return $this->byteCount;
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

class MemoryInfo extends \Google\Model
{
  /** @var string */
  public $totalInternalStorage;
  /** @var string */
  public $totalRam;

  /** @param string */
  public function setTotalInternalStorage($totalInternalStorage)
  {
    $this->totalInternalStorage = $totalInternalStorage;
  }
  /** @return string */
  public function getTotalInternalStorage()
  {
    return $this->totalInternalStorage;
  }
  /** @param string */
  public function setTotalRam($totalRam)
  {
    $this->totalRam = $totalRam;
  }
  /** @return string */
  public function getTotalRam()
  {
    return $this->totalRam;
  }
}

class NetworkInfo extends \Google\Collection
{
  /** @var string */
  public $imei;
  /** @var string */
  public $meid;
  /** @var string */
  public $networkOperatorName;
  /** @var TelephonyInfo[] */
  public $telephonyInfos;
  /** @var string */
  public $wifiMacAddress;
  protected $collection_key = 'telephonyInfos';
  protected $telephonyInfosType = TelephonyInfo::class;
  protected $telephonyInfosDataType = 'array';
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
  public function setNetworkOperatorName($networkOperatorName)
  {
    $this->networkOperatorName = $networkOperatorName;
  }
  /** @return string */
  public function getNetworkOperatorName()
  {
    return $this->networkOperatorName;
  }
  /** @param TelephonyInfo[] */
  public function setTelephonyInfos($telephonyInfos)
  {
    $this->telephonyInfos = $telephonyInfos;
  }
  /** @return TelephonyInfo[] */
  public function getTelephonyInfos()
  {
    return $this->telephonyInfos;
  }
  /** @param string */
  public function setWifiMacAddress($wifiMacAddress)
  {
    $this->wifiMacAddress = $wifiMacAddress;
  }
  /** @return string */
  public function getWifiMacAddress()
  {
    return $this->wifiMacAddress;
  }
}

class NonComplianceDetail extends \Google\Model
{
  /** @var array */
  public $currentValue;
  /** @var string */
  public $fieldPath;
  /** @var string */
  public $installationFailureReason;
  /** @var string */
  public $nonComplianceReason;
  /** @var string */
  public $packageName;
  /** @var string */
  public $settingName;
  /** @var SpecificNonComplianceContext */
  public $specificNonComplianceContext;
  /** @var string */
  public $specificNonComplianceReason;
  protected $specificNonComplianceContextType = SpecificNonComplianceContext::class;
  protected $specificNonComplianceContextDataType = '';
  /** @param array */
  public function setCurrentValue($currentValue)
  {
    $this->currentValue = $currentValue;
  }
  /** @return array */
  public function getCurrentValue()
  {
    return $this->currentValue;
  }
  /** @param string */
  public function setFieldPath($fieldPath)
  {
    $this->fieldPath = $fieldPath;
  }
  /** @return string */
  public function getFieldPath()
  {
    return $this->fieldPath;
  }
  /** @param string */
  public function setInstallationFailureReason($installationFailureReason)
  {
    $this->installationFailureReason = $installationFailureReason;
  }
  /** @return string */
  public function getInstallationFailureReason()
  {
    return $this->installationFailureReason;
  }
  /** @param string */
  public function setNonComplianceReason($nonComplianceReason)
  {
    $this->nonComplianceReason = $nonComplianceReason;
  }
  /** @return string */
  public function getNonComplianceReason()
  {
    return $this->nonComplianceReason;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string */
  public function setSettingName($settingName)
  {
    $this->settingName = $settingName;
  }
  /** @return string */
  public function getSettingName()
  {
    return $this->settingName;
  }
  /** @param SpecificNonComplianceContext */
  public function setSpecificNonComplianceContext(SpecificNonComplianceContext $specificNonComplianceContext)
  {
    $this->specificNonComplianceContext = $specificNonComplianceContext;
  }
  /** @return SpecificNonComplianceContext */
  public function getSpecificNonComplianceContext()
  {
    return $this->specificNonComplianceContext;
  }
  /** @param string */
  public function setSpecificNonComplianceReason($specificNonComplianceReason)
  {
    $this->specificNonComplianceReason = $specificNonComplianceReason;
  }
  /** @return string */
  public function getSpecificNonComplianceReason()
  {
    return $this->specificNonComplianceReason;
  }
}

class NonComplianceDetailCondition extends \Google\Model
{
  /** @var string */
  public $nonComplianceReason;
  /** @var string */
  public $packageName;
  /** @var string */
  public $settingName;

  /** @param string */
  public function setNonComplianceReason($nonComplianceReason)
  {
    $this->nonComplianceReason = $nonComplianceReason;
  }
  /** @return string */
  public function getNonComplianceReason()
  {
    return $this->nonComplianceReason;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string */
  public function setSettingName($settingName)
  {
    $this->settingName = $settingName;
  }
  /** @return string */
  public function getSettingName()
  {
    return $this->settingName;
  }
}

class OncCertificateProvider extends \Google\Collection
{
  /** @var string[] */
  public $certificateReferences;
  /** @var ContentProviderEndpoint */
  public $contentProviderEndpoint;
  protected $collection_key = 'certificateReferences';
  protected $contentProviderEndpointType = ContentProviderEndpoint::class;
  protected $contentProviderEndpointDataType = '';
  /** @param string[] */
  public function setCertificateReferences($certificateReferences)
  {
    $this->certificateReferences = $certificateReferences;
  }
  /** @return string[] */
  public function getCertificateReferences()
  {
    return $this->certificateReferences;
  }
  /** @param ContentProviderEndpoint */
  public function setContentProviderEndpoint(ContentProviderEndpoint $contentProviderEndpoint)
  {
    $this->contentProviderEndpoint = $contentProviderEndpoint;
  }
  /** @return ContentProviderEndpoint */
  public function getContentProviderEndpoint()
  {
    return $this->contentProviderEndpoint;
  }
}

class OncWifiContext extends \Google\Model
{
  /** @var string */
  public $wifiGuid;

  /** @param string */
  public function setWifiGuid($wifiGuid)
  {
    $this->wifiGuid = $wifiGuid;
  }
  /** @return string */
  public function getWifiGuid()
  {
    return $this->wifiGuid;
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

class OsShutdownEvent extends \Google\Model
{
}

class OsStartupEvent extends \Google\Model
{
  /** @var string */
  public $verifiedBootState;
  /** @var string */
  public $verityMode;

  /** @param string */
  public function setVerifiedBootState($verifiedBootState)
  {
    $this->verifiedBootState = $verifiedBootState;
  }
  /** @return string */
  public function getVerifiedBootState()
  {
    return $this->verifiedBootState;
  }
  /** @param string */
  public function setVerityMode($verityMode)
  {
    $this->verityMode = $verityMode;
  }
  /** @return string */
  public function getVerityMode()
  {
    return $this->verityMode;
  }
}

class PackageNameList extends \Google\Collection
{
  /** @var string[] */
  public $packageNames;
  protected $collection_key = 'packageNames';
  /** @param string[] */
  public function setPackageNames($packageNames)
  {
    $this->packageNames = $packageNames;
  }
  /** @return string[] */
  public function getPackageNames()
  {
    return $this->packageNames;
  }
}

class PasswordPoliciesContext extends \Google\Model
{
  /** @var string */
  public $passwordPolicyScope;

  /** @param string */
  public function setPasswordPolicyScope($passwordPolicyScope)
  {
    $this->passwordPolicyScope = $passwordPolicyScope;
  }
  /** @return string */
  public function getPasswordPolicyScope()
  {
    return $this->passwordPolicyScope;
  }
}

class PasswordRequirements extends \Google\Model
{
  /** @var int */
  public $maximumFailedPasswordsForWipe;
  /** @var string */
  public $passwordExpirationTimeout;
  /** @var int */
  public $passwordHistoryLength;
  /** @var int */
  public $passwordMinimumLength;
  /** @var int */
  public $passwordMinimumLetters;
  /** @var int */
  public $passwordMinimumLowerCase;
  /** @var int */
  public $passwordMinimumNonLetter;
  /** @var int */
  public $passwordMinimumNumeric;
  /** @var int */
  public $passwordMinimumSymbols;
  /** @var int */
  public $passwordMinimumUpperCase;
  /** @var string */
  public $passwordQuality;
  /** @var string */
  public $passwordScope;
  /** @var string */
  public $requirePasswordUnlock;
  /** @var string */
  public $unifiedLockSettings;

  /** @param int */
  public function setMaximumFailedPasswordsForWipe($maximumFailedPasswordsForWipe)
  {
    $this->maximumFailedPasswordsForWipe = $maximumFailedPasswordsForWipe;
  }
  /** @return int */
  public function getMaximumFailedPasswordsForWipe()
  {
    return $this->maximumFailedPasswordsForWipe;
  }
  /** @param string */
  public function setPasswordExpirationTimeout($passwordExpirationTimeout)
  {
    $this->passwordExpirationTimeout = $passwordExpirationTimeout;
  }
  /** @return string */
  public function getPasswordExpirationTimeout()
  {
    return $this->passwordExpirationTimeout;
  }
  /** @param int */
  public function setPasswordHistoryLength($passwordHistoryLength)
  {
    $this->passwordHistoryLength = $passwordHistoryLength;
  }
  /** @return int */
  public function getPasswordHistoryLength()
  {
    return $this->passwordHistoryLength;
  }
  /** @param int */
  public function setPasswordMinimumLength($passwordMinimumLength)
  {
    $this->passwordMinimumLength = $passwordMinimumLength;
  }
  /** @return int */
  public function getPasswordMinimumLength()
  {
    return $this->passwordMinimumLength;
  }
  /** @param int */
  public function setPasswordMinimumLetters($passwordMinimumLetters)
  {
    $this->passwordMinimumLetters = $passwordMinimumLetters;
  }
  /** @return int */
  public function getPasswordMinimumLetters()
  {
    return $this->passwordMinimumLetters;
  }
  /** @param int */
  public function setPasswordMinimumLowerCase($passwordMinimumLowerCase)
  {
    $this->passwordMinimumLowerCase = $passwordMinimumLowerCase;
  }
  /** @return int */
  public function getPasswordMinimumLowerCase()
  {
    return $this->passwordMinimumLowerCase;
  }
  /** @param int */
  public function setPasswordMinimumNonLetter($passwordMinimumNonLetter)
  {
    $this->passwordMinimumNonLetter = $passwordMinimumNonLetter;
  }
  /** @return int */
  public function getPasswordMinimumNonLetter()
  {
    return $this->passwordMinimumNonLetter;
  }
  /** @param int */
  public function setPasswordMinimumNumeric($passwordMinimumNumeric)
  {
    $this->passwordMinimumNumeric = $passwordMinimumNumeric;
  }
  /** @return int */
  public function getPasswordMinimumNumeric()
  {
    return $this->passwordMinimumNumeric;
  }
  /** @param int */
  public function setPasswordMinimumSymbols($passwordMinimumSymbols)
  {
    $this->passwordMinimumSymbols = $passwordMinimumSymbols;
  }
  /** @return int */
  public function getPasswordMinimumSymbols()
  {
    return $this->passwordMinimumSymbols;
  }
  /** @param int */
  public function setPasswordMinimumUpperCase($passwordMinimumUpperCase)
  {
    $this->passwordMinimumUpperCase = $passwordMinimumUpperCase;
  }
  /** @return int */
  public function getPasswordMinimumUpperCase()
  {
    return $this->passwordMinimumUpperCase;
  }
  /** @param string */
  public function setPasswordQuality($passwordQuality)
  {
    $this->passwordQuality = $passwordQuality;
  }
  /** @return string */
  public function getPasswordQuality()
  {
    return $this->passwordQuality;
  }
  /** @param string */
  public function setPasswordScope($passwordScope)
  {
    $this->passwordScope = $passwordScope;
  }
  /** @return string */
  public function getPasswordScope()
  {
    return $this->passwordScope;
  }
  /** @param string */
  public function setRequirePasswordUnlock($requirePasswordUnlock)
  {
    $this->requirePasswordUnlock = $requirePasswordUnlock;
  }
  /** @return string */
  public function getRequirePasswordUnlock()
  {
    return $this->requirePasswordUnlock;
  }
  /** @param string */
  public function setUnifiedLockSettings($unifiedLockSettings)
  {
    $this->unifiedLockSettings = $unifiedLockSettings;
  }
  /** @return string */
  public function getUnifiedLockSettings()
  {
    return $this->unifiedLockSettings;
  }
}

class PerAppResult extends \Google\Model
{
  /** @var string */
  public $clearingResult;

  /** @param string */
  public function setClearingResult($clearingResult)
  {
    $this->clearingResult = $clearingResult;
  }
  /** @return string */
  public function getClearingResult()
  {
    return $this->clearingResult;
  }
}

class PermissionGrant extends \Google\Model
{
  /** @var string */
  public $permission;
  /** @var string */
  public $policy;

  /** @param string */
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /** @return string */
  public function getPermission()
  {
    return $this->permission;
  }
  /** @param string */
  public function setPolicy($policy)
  {
    $this->policy = $policy;
  }
  /** @return string */
  public function getPolicy()
  {
    return $this->policy;
  }
}

class PersistentPreferredActivity extends \Google\Collection
{
  /** @var string[] */
  public $actions;
  /** @var string[] */
  public $categories;
  /** @var string */
  public $receiverActivity;
  protected $collection_key = 'categories';
  /** @param string[] */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /** @return string[] */
  public function getActions()
  {
    return $this->actions;
  }
  /** @param string[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return string[] */
  public function getCategories()
  {
    return $this->categories;
  }
  /** @param string */
  public function setReceiverActivity($receiverActivity)
  {
    $this->receiverActivity = $receiverActivity;
  }
  /** @return string */
  public function getReceiverActivity()
  {
    return $this->receiverActivity;
  }
}

class PersonalApplicationPolicy extends \Google\Model
{
  /** @var string */
  public $installType;
  /** @var string */
  public $packageName;

  /** @param string */
  public function setInstallType($installType)
  {
    $this->installType = $installType;
  }
  /** @return string */
  public function getInstallType()
  {
    return $this->installType;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
}

class PersonalUsagePolicies extends \Google\Collection
{
  /** @var string[] */
  public $accountTypesWithManagementDisabled;
  /** @var bool */
  public $cameraDisabled;
  /** @var int */
  public $maxDaysWithWorkOff;
  /** @var PersonalApplicationPolicy[] */
  public $personalApplications;
  /** @var string */
  public $personalPlayStoreMode;
  /** @var bool */
  public $screenCaptureDisabled;
  protected $collection_key = 'personalApplications';
  protected $personalApplicationsType = PersonalApplicationPolicy::class;
  protected $personalApplicationsDataType = 'array';
  /** @param string[] */
  public function setAccountTypesWithManagementDisabled($accountTypesWithManagementDisabled)
  {
    $this->accountTypesWithManagementDisabled = $accountTypesWithManagementDisabled;
  }
  /** @return string[] */
  public function getAccountTypesWithManagementDisabled()
  {
    return $this->accountTypesWithManagementDisabled;
  }
  /** @param bool */
  public function setCameraDisabled($cameraDisabled)
  {
    $this->cameraDisabled = $cameraDisabled;
  }
  /** @return bool */
  public function getCameraDisabled()
  {
    return $this->cameraDisabled;
  }
  /** @param int */
  public function setMaxDaysWithWorkOff($maxDaysWithWorkOff)
  {
    $this->maxDaysWithWorkOff = $maxDaysWithWorkOff;
  }
  /** @return int */
  public function getMaxDaysWithWorkOff()
  {
    return $this->maxDaysWithWorkOff;
  }
  /** @param PersonalApplicationPolicy[] */
  public function setPersonalApplications($personalApplications)
  {
    $this->personalApplications = $personalApplications;
  }
  /** @return PersonalApplicationPolicy[] */
  public function getPersonalApplications()
  {
    return $this->personalApplications;
  }
  /** @param string */
  public function setPersonalPlayStoreMode($personalPlayStoreMode)
  {
    $this->personalPlayStoreMode = $personalPlayStoreMode;
  }
  /** @return string */
  public function getPersonalPlayStoreMode()
  {
    return $this->personalPlayStoreMode;
  }
  /** @param bool */
  public function setScreenCaptureDisabled($screenCaptureDisabled)
  {
    $this->screenCaptureDisabled = $screenCaptureDisabled;
  }
  /** @return bool */
  public function getScreenCaptureDisabled()
  {
    return $this->screenCaptureDisabled;
  }
}

class Policy extends \Google\Collection
{
  /** @var string[] */
  public $accountTypesWithManagementDisabled;
  /** @var bool */
  public $addUserDisabled;
  /** @var bool */
  public $adjustVolumeDisabled;
  /** @var AdvancedSecurityOverrides */
  public $advancedSecurityOverrides;
  /** @var AlwaysOnVpnPackage */
  public $alwaysOnVpnPackage;
  /** @var string[] */
  public $androidDevicePolicyTracks;
  /** @var string */
  public $appAutoUpdatePolicy;
  /** @var ApplicationPolicy[] */
  public $applications;
  /** @var string */
  public $autoDateAndTimeZone;
  /** @var bool */
  public $autoTimeRequired;
  /** @var bool */
  public $blockApplicationsEnabled;
  /** @var bool */
  public $bluetoothConfigDisabled;
  /** @var bool */
  public $bluetoothContactSharingDisabled;
  /** @var bool */
  public $bluetoothDisabled;
  /** @var string */
  public $cameraAccess;
  /** @var bool */
  public $cameraDisabled;
  /** @var bool */
  public $cellBroadcastsConfigDisabled;
  /** @var ChoosePrivateKeyRule[] */
  public $choosePrivateKeyRules;
  /** @var ComplianceRule[] */
  public $complianceRules;
  /** @var bool */
  public $createWindowsDisabled;
  /** @var bool */
  public $credentialsConfigDisabled;
  /** @var CrossProfilePolicies */
  public $crossProfilePolicies;
  /** @var bool */
  public $dataRoamingDisabled;
  /** @var bool */
  public $debuggingFeaturesAllowed;
  /** @var string */
  public $defaultPermissionPolicy;
  /** @var UserFacingMessage */
  public $deviceOwnerLockScreenInfo;
  /** @var string */
  public $encryptionPolicy;
  /** @var bool */
  public $ensureVerifyAppsEnabled;
  /** @var bool */
  public $factoryResetDisabled;
  /** @var string[] */
  public $frpAdminEmails;
  /** @var bool */
  public $funDisabled;
  /** @var bool */
  public $installAppsDisabled;
  /** @var bool */
  public $installUnknownSourcesAllowed;
  /** @var bool */
  public $keyguardDisabled;
  /** @var string[] */
  public $keyguardDisabledFeatures;
  /** @var bool */
  public $kioskCustomLauncherEnabled;
  /** @var KioskCustomization */
  public $kioskCustomization;
  /** @var string */
  public $locationMode;
  /** @var UserFacingMessage */
  public $longSupportMessage;
  /** @var string */
  public $maximumTimeToLock;
  /** @var string */
  public $microphoneAccess;
  /** @var int */
  public $minimumApiLevel;
  /** @var bool */
  public $mobileNetworksConfigDisabled;
  /** @var bool */
  public $modifyAccountsDisabled;
  /** @var bool */
  public $mountPhysicalMediaDisabled;
  /** @var string */
  public $name;
  /** @var bool */
  public $networkEscapeHatchEnabled;
  /** @var bool */
  public $networkResetDisabled;
  /** @var OncCertificateProvider[] */
  public $oncCertificateProviders;
  /** @var array[] */
  public $openNetworkConfiguration;
  /** @var bool */
  public $outgoingBeamDisabled;
  /** @var bool */
  public $outgoingCallsDisabled;
  /** @var PasswordRequirements[] */
  public $passwordPolicies;
  /** @var PasswordRequirements */
  public $passwordRequirements;
  /** @var PermissionGrant[] */
  public $permissionGrants;
  /** @var PackageNameList */
  public $permittedAccessibilityServices;
  /** @var PackageNameList */
  public $permittedInputMethods;
  /** @var PersistentPreferredActivity[] */
  public $persistentPreferredActivities;
  /** @var PersonalUsagePolicies */
  public $personalUsagePolicies;
  /** @var string */
  public $playStoreMode;
  /** @var PolicyEnforcementRule[] */
  public $policyEnforcementRules;
  /** @var string */
  public $preferentialNetworkService;
  /** @var bool */
  public $privateKeySelectionEnabled;
  /** @var ProxyInfo */
  public $recommendedGlobalProxy;
  /** @var bool */
  public $removeUserDisabled;
  /** @var bool */
  public $safeBootDisabled;
  /** @var bool */
  public $screenCaptureDisabled;
  /** @var bool */
  public $setUserIconDisabled;
  /** @var bool */
  public $setWallpaperDisabled;
  /** @var SetupAction[] */
  public $setupActions;
  /** @var bool */
  public $shareLocationDisabled;
  /** @var UserFacingMessage */
  public $shortSupportMessage;
  /** @var bool */
  public $skipFirstUseHintsEnabled;
  /** @var bool */
  public $smsDisabled;
  /** @var bool */
  public $statusBarDisabled;
  /** @var StatusReportingSettings */
  public $statusReportingSettings;
  /** @var string[] */
  public $stayOnPluggedModes;
  /** @var SystemUpdate */
  public $systemUpdate;
  /** @var bool */
  public $tetheringConfigDisabled;
  /** @var bool */
  public $uninstallAppsDisabled;
  /** @var bool */
  public $unmuteMicrophoneDisabled;
  /** @var UsageLog */
  public $usageLog;
  /** @var bool */
  public $usbFileTransferDisabled;
  /** @var bool */
  public $usbMassStorageEnabled;
  /** @var string */
  public $version;
  /** @var bool */
  public $vpnConfigDisabled;
  /** @var bool */
  public $wifiConfigDisabled;
  /** @var bool */
  public $wifiConfigsLockdownEnabled;
  protected $collection_key = 'stayOnPluggedModes';
  protected $advancedSecurityOverridesType = AdvancedSecurityOverrides::class;
  protected $advancedSecurityOverridesDataType = '';
  protected $alwaysOnVpnPackageType = AlwaysOnVpnPackage::class;
  protected $alwaysOnVpnPackageDataType = '';
  protected $applicationsType = ApplicationPolicy::class;
  protected $applicationsDataType = 'array';
  protected $choosePrivateKeyRulesType = ChoosePrivateKeyRule::class;
  protected $choosePrivateKeyRulesDataType = 'array';
  protected $complianceRulesType = ComplianceRule::class;
  protected $complianceRulesDataType = 'array';
  protected $crossProfilePoliciesType = CrossProfilePolicies::class;
  protected $crossProfilePoliciesDataType = '';
  protected $deviceOwnerLockScreenInfoType = UserFacingMessage::class;
  protected $deviceOwnerLockScreenInfoDataType = '';
  protected $kioskCustomizationType = KioskCustomization::class;
  protected $kioskCustomizationDataType = '';
  protected $longSupportMessageType = UserFacingMessage::class;
  protected $longSupportMessageDataType = '';
  protected $oncCertificateProvidersType = OncCertificateProvider::class;
  protected $oncCertificateProvidersDataType = 'array';
  protected $passwordPoliciesType = PasswordRequirements::class;
  protected $passwordPoliciesDataType = 'array';
  protected $passwordRequirementsType = PasswordRequirements::class;
  protected $passwordRequirementsDataType = '';
  protected $permissionGrantsType = PermissionGrant::class;
  protected $permissionGrantsDataType = 'array';
  protected $permittedAccessibilityServicesType = PackageNameList::class;
  protected $permittedAccessibilityServicesDataType = '';
  protected $permittedInputMethodsType = PackageNameList::class;
  protected $permittedInputMethodsDataType = '';
  protected $persistentPreferredActivitiesType = PersistentPreferredActivity::class;
  protected $persistentPreferredActivitiesDataType = 'array';
  protected $personalUsagePoliciesType = PersonalUsagePolicies::class;
  protected $personalUsagePoliciesDataType = '';
  protected $policyEnforcementRulesType = PolicyEnforcementRule::class;
  protected $policyEnforcementRulesDataType = 'array';
  protected $recommendedGlobalProxyType = ProxyInfo::class;
  protected $recommendedGlobalProxyDataType = '';
  protected $setupActionsType = SetupAction::class;
  protected $setupActionsDataType = 'array';
  protected $shortSupportMessageType = UserFacingMessage::class;
  protected $shortSupportMessageDataType = '';
  protected $statusReportingSettingsType = StatusReportingSettings::class;
  protected $statusReportingSettingsDataType = '';
  protected $systemUpdateType = SystemUpdate::class;
  protected $systemUpdateDataType = '';
  protected $usageLogType = UsageLog::class;
  protected $usageLogDataType = '';
  /** @param string[] */
  public function setAccountTypesWithManagementDisabled($accountTypesWithManagementDisabled)
  {
    $this->accountTypesWithManagementDisabled = $accountTypesWithManagementDisabled;
  }
  /** @return string[] */
  public function getAccountTypesWithManagementDisabled()
  {
    return $this->accountTypesWithManagementDisabled;
  }
  /** @param bool */
  public function setAddUserDisabled($addUserDisabled)
  {
    $this->addUserDisabled = $addUserDisabled;
  }
  /** @return bool */
  public function getAddUserDisabled()
  {
    return $this->addUserDisabled;
  }
  /** @param bool */
  public function setAdjustVolumeDisabled($adjustVolumeDisabled)
  {
    $this->adjustVolumeDisabled = $adjustVolumeDisabled;
  }
  /** @return bool */
  public function getAdjustVolumeDisabled()
  {
    return $this->adjustVolumeDisabled;
  }
  /** @param AdvancedSecurityOverrides */
  public function setAdvancedSecurityOverrides(AdvancedSecurityOverrides $advancedSecurityOverrides)
  {
    $this->advancedSecurityOverrides = $advancedSecurityOverrides;
  }
  /** @return AdvancedSecurityOverrides */
  public function getAdvancedSecurityOverrides()
  {
    return $this->advancedSecurityOverrides;
  }
  /** @param AlwaysOnVpnPackage */
  public function setAlwaysOnVpnPackage(AlwaysOnVpnPackage $alwaysOnVpnPackage)
  {
    $this->alwaysOnVpnPackage = $alwaysOnVpnPackage;
  }
  /** @return AlwaysOnVpnPackage */
  public function getAlwaysOnVpnPackage()
  {
    return $this->alwaysOnVpnPackage;
  }
  /** @param string[] */
  public function setAndroidDevicePolicyTracks($androidDevicePolicyTracks)
  {
    $this->androidDevicePolicyTracks = $androidDevicePolicyTracks;
  }
  /** @return string[] */
  public function getAndroidDevicePolicyTracks()
  {
    return $this->androidDevicePolicyTracks;
  }
  /** @param string */
  public function setAppAutoUpdatePolicy($appAutoUpdatePolicy)
  {
    $this->appAutoUpdatePolicy = $appAutoUpdatePolicy;
  }
  /** @return string */
  public function getAppAutoUpdatePolicy()
  {
    return $this->appAutoUpdatePolicy;
  }
  /** @param ApplicationPolicy[] */
  public function setApplications($applications)
  {
    $this->applications = $applications;
  }
  /** @return ApplicationPolicy[] */
  public function getApplications()
  {
    return $this->applications;
  }
  /** @param string */
  public function setAutoDateAndTimeZone($autoDateAndTimeZone)
  {
    $this->autoDateAndTimeZone = $autoDateAndTimeZone;
  }
  /** @return string */
  public function getAutoDateAndTimeZone()
  {
    return $this->autoDateAndTimeZone;
  }
  /** @param bool */
  public function setAutoTimeRequired($autoTimeRequired)
  {
    $this->autoTimeRequired = $autoTimeRequired;
  }
  /** @return bool */
  public function getAutoTimeRequired()
  {
    return $this->autoTimeRequired;
  }
  /** @param bool */
  public function setBlockApplicationsEnabled($blockApplicationsEnabled)
  {
    $this->blockApplicationsEnabled = $blockApplicationsEnabled;
  }
  /** @return bool */
  public function getBlockApplicationsEnabled()
  {
    return $this->blockApplicationsEnabled;
  }
  /** @param bool */
  public function setBluetoothConfigDisabled($bluetoothConfigDisabled)
  {
    $this->bluetoothConfigDisabled = $bluetoothConfigDisabled;
  }
  /** @return bool */
  public function getBluetoothConfigDisabled()
  {
    return $this->bluetoothConfigDisabled;
  }
  /** @param bool */
  public function setBluetoothContactSharingDisabled($bluetoothContactSharingDisabled)
  {
    $this->bluetoothContactSharingDisabled = $bluetoothContactSharingDisabled;
  }
  /** @return bool */
  public function getBluetoothContactSharingDisabled()
  {
    return $this->bluetoothContactSharingDisabled;
  }
  /** @param bool */
  public function setBluetoothDisabled($bluetoothDisabled)
  {
    $this->bluetoothDisabled = $bluetoothDisabled;
  }
  /** @return bool */
  public function getBluetoothDisabled()
  {
    return $this->bluetoothDisabled;
  }
  /** @param string */
  public function setCameraAccess($cameraAccess)
  {
    $this->cameraAccess = $cameraAccess;
  }
  /** @return string */
  public function getCameraAccess()
  {
    return $this->cameraAccess;
  }
  /** @param bool */
  public function setCameraDisabled($cameraDisabled)
  {
    $this->cameraDisabled = $cameraDisabled;
  }
  /** @return bool */
  public function getCameraDisabled()
  {
    return $this->cameraDisabled;
  }
  /** @param bool */
  public function setCellBroadcastsConfigDisabled($cellBroadcastsConfigDisabled)
  {
    $this->cellBroadcastsConfigDisabled = $cellBroadcastsConfigDisabled;
  }
  /** @return bool */
  public function getCellBroadcastsConfigDisabled()
  {
    return $this->cellBroadcastsConfigDisabled;
  }
  /** @param ChoosePrivateKeyRule[] */
  public function setChoosePrivateKeyRules($choosePrivateKeyRules)
  {
    $this->choosePrivateKeyRules = $choosePrivateKeyRules;
  }
  /** @return ChoosePrivateKeyRule[] */
  public function getChoosePrivateKeyRules()
  {
    return $this->choosePrivateKeyRules;
  }
  /** @param ComplianceRule[] */
  public function setComplianceRules($complianceRules)
  {
    $this->complianceRules = $complianceRules;
  }
  /** @return ComplianceRule[] */
  public function getComplianceRules()
  {
    return $this->complianceRules;
  }
  /** @param bool */
  public function setCreateWindowsDisabled($createWindowsDisabled)
  {
    $this->createWindowsDisabled = $createWindowsDisabled;
  }
  /** @return bool */
  public function getCreateWindowsDisabled()
  {
    return $this->createWindowsDisabled;
  }
  /** @param bool */
  public function setCredentialsConfigDisabled($credentialsConfigDisabled)
  {
    $this->credentialsConfigDisabled = $credentialsConfigDisabled;
  }
  /** @return bool */
  public function getCredentialsConfigDisabled()
  {
    return $this->credentialsConfigDisabled;
  }
  /** @param CrossProfilePolicies */
  public function setCrossProfilePolicies(CrossProfilePolicies $crossProfilePolicies)
  {
    $this->crossProfilePolicies = $crossProfilePolicies;
  }
  /** @return CrossProfilePolicies */
  public function getCrossProfilePolicies()
  {
    return $this->crossProfilePolicies;
  }
  /** @param bool */
  public function setDataRoamingDisabled($dataRoamingDisabled)
  {
    $this->dataRoamingDisabled = $dataRoamingDisabled;
  }
  /** @return bool */
  public function getDataRoamingDisabled()
  {
    return $this->dataRoamingDisabled;
  }
  /** @param bool */
  public function setDebuggingFeaturesAllowed($debuggingFeaturesAllowed)
  {
    $this->debuggingFeaturesAllowed = $debuggingFeaturesAllowed;
  }
  /** @return bool */
  public function getDebuggingFeaturesAllowed()
  {
    return $this->debuggingFeaturesAllowed;
  }
  /** @param string */
  public function setDefaultPermissionPolicy($defaultPermissionPolicy)
  {
    $this->defaultPermissionPolicy = $defaultPermissionPolicy;
  }
  /** @return string */
  public function getDefaultPermissionPolicy()
  {
    return $this->defaultPermissionPolicy;
  }
  /** @param UserFacingMessage */
  public function setDeviceOwnerLockScreenInfo(UserFacingMessage $deviceOwnerLockScreenInfo)
  {
    $this->deviceOwnerLockScreenInfo = $deviceOwnerLockScreenInfo;
  }
  /** @return UserFacingMessage */
  public function getDeviceOwnerLockScreenInfo()
  {
    return $this->deviceOwnerLockScreenInfo;
  }
  /** @param string */
  public function setEncryptionPolicy($encryptionPolicy)
  {
    $this->encryptionPolicy = $encryptionPolicy;
  }
  /** @return string */
  public function getEncryptionPolicy()
  {
    return $this->encryptionPolicy;
  }
  /** @param bool */
  public function setEnsureVerifyAppsEnabled($ensureVerifyAppsEnabled)
  {
    $this->ensureVerifyAppsEnabled = $ensureVerifyAppsEnabled;
  }
  /** @return bool */
  public function getEnsureVerifyAppsEnabled()
  {
    return $this->ensureVerifyAppsEnabled;
  }
  /** @param bool */
  public function setFactoryResetDisabled($factoryResetDisabled)
  {
    $this->factoryResetDisabled = $factoryResetDisabled;
  }
  /** @return bool */
  public function getFactoryResetDisabled()
  {
    return $this->factoryResetDisabled;
  }
  /** @param string[] */
  public function setFrpAdminEmails($frpAdminEmails)
  {
    $this->frpAdminEmails = $frpAdminEmails;
  }
  /** @return string[] */
  public function getFrpAdminEmails()
  {
    return $this->frpAdminEmails;
  }
  /** @param bool */
  public function setFunDisabled($funDisabled)
  {
    $this->funDisabled = $funDisabled;
  }
  /** @return bool */
  public function getFunDisabled()
  {
    return $this->funDisabled;
  }
  /** @param bool */
  public function setInstallAppsDisabled($installAppsDisabled)
  {
    $this->installAppsDisabled = $installAppsDisabled;
  }
  /** @return bool */
  public function getInstallAppsDisabled()
  {
    return $this->installAppsDisabled;
  }
  /** @param bool */
  public function setInstallUnknownSourcesAllowed($installUnknownSourcesAllowed)
  {
    $this->installUnknownSourcesAllowed = $installUnknownSourcesAllowed;
  }
  /** @return bool */
  public function getInstallUnknownSourcesAllowed()
  {
    return $this->installUnknownSourcesAllowed;
  }
  /** @param bool */
  public function setKeyguardDisabled($keyguardDisabled)
  {
    $this->keyguardDisabled = $keyguardDisabled;
  }
  /** @return bool */
  public function getKeyguardDisabled()
  {
    return $this->keyguardDisabled;
  }
  /** @param string[] */
  public function setKeyguardDisabledFeatures($keyguardDisabledFeatures)
  {
    $this->keyguardDisabledFeatures = $keyguardDisabledFeatures;
  }
  /** @return string[] */
  public function getKeyguardDisabledFeatures()
  {
    return $this->keyguardDisabledFeatures;
  }
  /** @param bool */
  public function setKioskCustomLauncherEnabled($kioskCustomLauncherEnabled)
  {
    $this->kioskCustomLauncherEnabled = $kioskCustomLauncherEnabled;
  }
  /** @return bool */
  public function getKioskCustomLauncherEnabled()
  {
    return $this->kioskCustomLauncherEnabled;
  }
  /** @param KioskCustomization */
  public function setKioskCustomization(KioskCustomization $kioskCustomization)
  {
    $this->kioskCustomization = $kioskCustomization;
  }
  /** @return KioskCustomization */
  public function getKioskCustomization()
  {
    return $this->kioskCustomization;
  }
  /** @param string */
  public function setLocationMode($locationMode)
  {
    $this->locationMode = $locationMode;
  }
  /** @return string */
  public function getLocationMode()
  {
    return $this->locationMode;
  }
  /** @param UserFacingMessage */
  public function setLongSupportMessage(UserFacingMessage $longSupportMessage)
  {
    $this->longSupportMessage = $longSupportMessage;
  }
  /** @return UserFacingMessage */
  public function getLongSupportMessage()
  {
    return $this->longSupportMessage;
  }
  /** @param string */
  public function setMaximumTimeToLock($maximumTimeToLock)
  {
    $this->maximumTimeToLock = $maximumTimeToLock;
  }
  /** @return string */
  public function getMaximumTimeToLock()
  {
    return $this->maximumTimeToLock;
  }
  /** @param string */
  public function setMicrophoneAccess($microphoneAccess)
  {
    $this->microphoneAccess = $microphoneAccess;
  }
  /** @return string */
  public function getMicrophoneAccess()
  {
    return $this->microphoneAccess;
  }
  /** @param int */
  public function setMinimumApiLevel($minimumApiLevel)
  {
    $this->minimumApiLevel = $minimumApiLevel;
  }
  /** @return int */
  public function getMinimumApiLevel()
  {
    return $this->minimumApiLevel;
  }
  /** @param bool */
  public function setMobileNetworksConfigDisabled($mobileNetworksConfigDisabled)
  {
    $this->mobileNetworksConfigDisabled = $mobileNetworksConfigDisabled;
  }
  /** @return bool */
  public function getMobileNetworksConfigDisabled()
  {
    return $this->mobileNetworksConfigDisabled;
  }
  /** @param bool */
  public function setModifyAccountsDisabled($modifyAccountsDisabled)
  {
    $this->modifyAccountsDisabled = $modifyAccountsDisabled;
  }
  /** @return bool */
  public function getModifyAccountsDisabled()
  {
    return $this->modifyAccountsDisabled;
  }
  /** @param bool */
  public function setMountPhysicalMediaDisabled($mountPhysicalMediaDisabled)
  {
    $this->mountPhysicalMediaDisabled = $mountPhysicalMediaDisabled;
  }
  /** @return bool */
  public function getMountPhysicalMediaDisabled()
  {
    return $this->mountPhysicalMediaDisabled;
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
  public function setNetworkEscapeHatchEnabled($networkEscapeHatchEnabled)
  {
    $this->networkEscapeHatchEnabled = $networkEscapeHatchEnabled;
  }
  /** @return bool */
  public function getNetworkEscapeHatchEnabled()
  {
    return $this->networkEscapeHatchEnabled;
  }
  /** @param bool */
  public function setNetworkResetDisabled($networkResetDisabled)
  {
    $this->networkResetDisabled = $networkResetDisabled;
  }
  /** @return bool */
  public function getNetworkResetDisabled()
  {
    return $this->networkResetDisabled;
  }
  /** @param OncCertificateProvider[] */
  public function setOncCertificateProviders($oncCertificateProviders)
  {
    $this->oncCertificateProviders = $oncCertificateProviders;
  }
  /** @return OncCertificateProvider[] */
  public function getOncCertificateProviders()
  {
    return $this->oncCertificateProviders;
  }
  /** @param array[] */
  public function setOpenNetworkConfiguration($openNetworkConfiguration)
  {
    $this->openNetworkConfiguration = $openNetworkConfiguration;
  }
  /** @return array[] */
  public function getOpenNetworkConfiguration()
  {
    return $this->openNetworkConfiguration;
  }
  /** @param bool */
  public function setOutgoingBeamDisabled($outgoingBeamDisabled)
  {
    $this->outgoingBeamDisabled = $outgoingBeamDisabled;
  }
  /** @return bool */
  public function getOutgoingBeamDisabled()
  {
    return $this->outgoingBeamDisabled;
  }
  /** @param bool */
  public function setOutgoingCallsDisabled($outgoingCallsDisabled)
  {
    $this->outgoingCallsDisabled = $outgoingCallsDisabled;
  }
  /** @return bool */
  public function getOutgoingCallsDisabled()
  {
    return $this->outgoingCallsDisabled;
  }
  /** @param PasswordRequirements[] */
  public function setPasswordPolicies($passwordPolicies)
  {
    $this->passwordPolicies = $passwordPolicies;
  }
  /** @return PasswordRequirements[] */
  public function getPasswordPolicies()
  {
    return $this->passwordPolicies;
  }
  /** @param PasswordRequirements */
  public function setPasswordRequirements(PasswordRequirements $passwordRequirements)
  {
    $this->passwordRequirements = $passwordRequirements;
  }
  /** @return PasswordRequirements */
  public function getPasswordRequirements()
  {
    return $this->passwordRequirements;
  }
  /** @param PermissionGrant[] */
  public function setPermissionGrants($permissionGrants)
  {
    $this->permissionGrants = $permissionGrants;
  }
  /** @return PermissionGrant[] */
  public function getPermissionGrants()
  {
    return $this->permissionGrants;
  }
  /** @param PackageNameList */
  public function setPermittedAccessibilityServices(PackageNameList $permittedAccessibilityServices)
  {
    $this->permittedAccessibilityServices = $permittedAccessibilityServices;
  }
  /** @return PackageNameList */
  public function getPermittedAccessibilityServices()
  {
    return $this->permittedAccessibilityServices;
  }
  /** @param PackageNameList */
  public function setPermittedInputMethods(PackageNameList $permittedInputMethods)
  {
    $this->permittedInputMethods = $permittedInputMethods;
  }
  /** @return PackageNameList */
  public function getPermittedInputMethods()
  {
    return $this->permittedInputMethods;
  }
  /** @param PersistentPreferredActivity[] */
  public function setPersistentPreferredActivities($persistentPreferredActivities)
  {
    $this->persistentPreferredActivities = $persistentPreferredActivities;
  }
  /** @return PersistentPreferredActivity[] */
  public function getPersistentPreferredActivities()
  {
    return $this->persistentPreferredActivities;
  }
  /** @param PersonalUsagePolicies */
  public function setPersonalUsagePolicies(PersonalUsagePolicies $personalUsagePolicies)
  {
    $this->personalUsagePolicies = $personalUsagePolicies;
  }
  /** @return PersonalUsagePolicies */
  public function getPersonalUsagePolicies()
  {
    return $this->personalUsagePolicies;
  }
  /** @param string */
  public function setPlayStoreMode($playStoreMode)
  {
    $this->playStoreMode = $playStoreMode;
  }
  /** @return string */
  public function getPlayStoreMode()
  {
    return $this->playStoreMode;
  }
  /** @param PolicyEnforcementRule[] */
  public function setPolicyEnforcementRules($policyEnforcementRules)
  {
    $this->policyEnforcementRules = $policyEnforcementRules;
  }
  /** @return PolicyEnforcementRule[] */
  public function getPolicyEnforcementRules()
  {
    return $this->policyEnforcementRules;
  }
  /** @param string */
  public function setPreferentialNetworkService($preferentialNetworkService)
  {
    $this->preferentialNetworkService = $preferentialNetworkService;
  }
  /** @return string */
  public function getPreferentialNetworkService()
  {
    return $this->preferentialNetworkService;
  }
  /** @param bool */
  public function setPrivateKeySelectionEnabled($privateKeySelectionEnabled)
  {
    $this->privateKeySelectionEnabled = $privateKeySelectionEnabled;
  }
  /** @return bool */
  public function getPrivateKeySelectionEnabled()
  {
    return $this->privateKeySelectionEnabled;
  }
  /** @param ProxyInfo */
  public function setRecommendedGlobalProxy(ProxyInfo $recommendedGlobalProxy)
  {
    $this->recommendedGlobalProxy = $recommendedGlobalProxy;
  }
  /** @return ProxyInfo */
  public function getRecommendedGlobalProxy()
  {
    return $this->recommendedGlobalProxy;
  }
  /** @param bool */
  public function setRemoveUserDisabled($removeUserDisabled)
  {
    $this->removeUserDisabled = $removeUserDisabled;
  }
  /** @return bool */
  public function getRemoveUserDisabled()
  {
    return $this->removeUserDisabled;
  }
  /** @param bool */
  public function setSafeBootDisabled($safeBootDisabled)
  {
    $this->safeBootDisabled = $safeBootDisabled;
  }
  /** @return bool */
  public function getSafeBootDisabled()
  {
    return $this->safeBootDisabled;
  }
  /** @param bool */
  public function setScreenCaptureDisabled($screenCaptureDisabled)
  {
    $this->screenCaptureDisabled = $screenCaptureDisabled;
  }
  /** @return bool */
  public function getScreenCaptureDisabled()
  {
    return $this->screenCaptureDisabled;
  }
  /** @param bool */
  public function setSetUserIconDisabled($setUserIconDisabled)
  {
    $this->setUserIconDisabled = $setUserIconDisabled;
  }
  /** @return bool */
  public function getSetUserIconDisabled()
  {
    return $this->setUserIconDisabled;
  }
  /** @param bool */
  public function setSetWallpaperDisabled($setWallpaperDisabled)
  {
    $this->setWallpaperDisabled = $setWallpaperDisabled;
  }
  /** @return bool */
  public function getSetWallpaperDisabled()
  {
    return $this->setWallpaperDisabled;
  }
  /** @param SetupAction[] */
  public function setSetupActions($setupActions)
  {
    $this->setupActions = $setupActions;
  }
  /** @return SetupAction[] */
  public function getSetupActions()
  {
    return $this->setupActions;
  }
  /** @param bool */
  public function setShareLocationDisabled($shareLocationDisabled)
  {
    $this->shareLocationDisabled = $shareLocationDisabled;
  }
  /** @return bool */
  public function getShareLocationDisabled()
  {
    return $this->shareLocationDisabled;
  }
  /** @param UserFacingMessage */
  public function setShortSupportMessage(UserFacingMessage $shortSupportMessage)
  {
    $this->shortSupportMessage = $shortSupportMessage;
  }
  /** @return UserFacingMessage */
  public function getShortSupportMessage()
  {
    return $this->shortSupportMessage;
  }
  /** @param bool */
  public function setSkipFirstUseHintsEnabled($skipFirstUseHintsEnabled)
  {
    $this->skipFirstUseHintsEnabled = $skipFirstUseHintsEnabled;
  }
  /** @return bool */
  public function getSkipFirstUseHintsEnabled()
  {
    return $this->skipFirstUseHintsEnabled;
  }
  /** @param bool */
  public function setSmsDisabled($smsDisabled)
  {
    $this->smsDisabled = $smsDisabled;
  }
  /** @return bool */
  public function getSmsDisabled()
  {
    return $this->smsDisabled;
  }
  /** @param bool */
  public function setStatusBarDisabled($statusBarDisabled)
  {
    $this->statusBarDisabled = $statusBarDisabled;
  }
  /** @return bool */
  public function getStatusBarDisabled()
  {
    return $this->statusBarDisabled;
  }
  /** @param StatusReportingSettings */
  public function setStatusReportingSettings(StatusReportingSettings $statusReportingSettings)
  {
    $this->statusReportingSettings = $statusReportingSettings;
  }
  /** @return StatusReportingSettings */
  public function getStatusReportingSettings()
  {
    return $this->statusReportingSettings;
  }
  /** @param string[] */
  public function setStayOnPluggedModes($stayOnPluggedModes)
  {
    $this->stayOnPluggedModes = $stayOnPluggedModes;
  }
  /** @return string[] */
  public function getStayOnPluggedModes()
  {
    return $this->stayOnPluggedModes;
  }
  /** @param SystemUpdate */
  public function setSystemUpdate(SystemUpdate $systemUpdate)
  {
    $this->systemUpdate = $systemUpdate;
  }
  /** @return SystemUpdate */
  public function getSystemUpdate()
  {
    return $this->systemUpdate;
  }
  /** @param bool */
  public function setTetheringConfigDisabled($tetheringConfigDisabled)
  {
    $this->tetheringConfigDisabled = $tetheringConfigDisabled;
  }
  /** @return bool */
  public function getTetheringConfigDisabled()
  {
    return $this->tetheringConfigDisabled;
  }
  /** @param bool */
  public function setUninstallAppsDisabled($uninstallAppsDisabled)
  {
    $this->uninstallAppsDisabled = $uninstallAppsDisabled;
  }
  /** @return bool */
  public function getUninstallAppsDisabled()
  {
    return $this->uninstallAppsDisabled;
  }
  /** @param bool */
  public function setUnmuteMicrophoneDisabled($unmuteMicrophoneDisabled)
  {
    $this->unmuteMicrophoneDisabled = $unmuteMicrophoneDisabled;
  }
  /** @return bool */
  public function getUnmuteMicrophoneDisabled()
  {
    return $this->unmuteMicrophoneDisabled;
  }
  /** @param UsageLog */
  public function setUsageLog(UsageLog $usageLog)
  {
    $this->usageLog = $usageLog;
  }
  /** @return UsageLog */
  public function getUsageLog()
  {
    return $this->usageLog;
  }
  /** @param bool */
  public function setUsbFileTransferDisabled($usbFileTransferDisabled)
  {
    $this->usbFileTransferDisabled = $usbFileTransferDisabled;
  }
  /** @return bool */
  public function getUsbFileTransferDisabled()
  {
    return $this->usbFileTransferDisabled;
  }
  /** @param bool */
  public function setUsbMassStorageEnabled($usbMassStorageEnabled)
  {
    $this->usbMassStorageEnabled = $usbMassStorageEnabled;
  }
  /** @return bool */
  public function getUsbMassStorageEnabled()
  {
    return $this->usbMassStorageEnabled;
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
  /** @param bool */
  public function setVpnConfigDisabled($vpnConfigDisabled)
  {
    $this->vpnConfigDisabled = $vpnConfigDisabled;
  }
  /** @return bool */
  public function getVpnConfigDisabled()
  {
    return $this->vpnConfigDisabled;
  }
  /** @param bool */
  public function setWifiConfigDisabled($wifiConfigDisabled)
  {
    $this->wifiConfigDisabled = $wifiConfigDisabled;
  }
  /** @return bool */
  public function getWifiConfigDisabled()
  {
    return $this->wifiConfigDisabled;
  }
  /** @param bool */
  public function setWifiConfigsLockdownEnabled($wifiConfigsLockdownEnabled)
  {
    $this->wifiConfigsLockdownEnabled = $wifiConfigsLockdownEnabled;
  }
  /** @return bool */
  public function getWifiConfigsLockdownEnabled()
  {
    return $this->wifiConfigsLockdownEnabled;
  }
}

class PolicyEnforcementRule extends \Google\Model
{
  /** @var BlockAction */
  public $blockAction;
  /** @var string */
  public $settingName;
  /** @var WipeAction */
  public $wipeAction;
  protected $blockActionType = BlockAction::class;
  protected $blockActionDataType = '';
  protected $wipeActionType = WipeAction::class;
  protected $wipeActionDataType = '';
  /** @param BlockAction */
  public function setBlockAction(BlockAction $blockAction)
  {
    $this->blockAction = $blockAction;
  }
  /** @return BlockAction */
  public function getBlockAction()
  {
    return $this->blockAction;
  }
  /** @param string */
  public function setSettingName($settingName)
  {
    $this->settingName = $settingName;
  }
  /** @return string */
  public function getSettingName()
  {
    return $this->settingName;
  }
  /** @param WipeAction */
  public function setWipeAction(WipeAction $wipeAction)
  {
    $this->wipeAction = $wipeAction;
  }
  /** @return WipeAction */
  public function getWipeAction()
  {
    return $this->wipeAction;
  }
}

class PostureDetail extends \Google\Collection
{
  /** @var UserFacingMessage[] */
  public $advice;
  /** @var string */
  public $securityRisk;
  protected $collection_key = 'advice';
  protected $adviceType = UserFacingMessage::class;
  protected $adviceDataType = 'array';
  /** @param UserFacingMessage[] */
  public function setAdvice($advice)
  {
    $this->advice = $advice;
  }
  /** @return UserFacingMessage[] */
  public function getAdvice()
  {
    return $this->advice;
  }
  /** @param string */
  public function setSecurityRisk($securityRisk)
  {
    $this->securityRisk = $securityRisk;
  }
  /** @return string */
  public function getSecurityRisk()
  {
    return $this->securityRisk;
  }
}

class PowerManagementEvent extends \Google\Model
{
  /** @var float */
  public $batteryLevel;
  /** @var string */
  public $createTime;
  /** @var string */
  public $eventType;

  /** @param float */
  public function setBatteryLevel($batteryLevel)
  {
    $this->batteryLevel = $batteryLevel;
  }
  /** @return float */
  public function getBatteryLevel()
  {
    return $this->batteryLevel;
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

class ProxyInfo extends \Google\Collection
{
  /** @var string[] */
  public $excludedHosts;
  /** @var string */
  public $host;
  /** @var string */
  public $pacUri;
  /** @var int */
  public $port;
  protected $collection_key = 'excludedHosts';
  /** @param string[] */
  public function setExcludedHosts($excludedHosts)
  {
    $this->excludedHosts = $excludedHosts;
  }
  /** @return string[] */
  public function getExcludedHosts()
  {
    return $this->excludedHosts;
  }
  /** @param string */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /** @return string */
  public function getHost()
  {
    return $this->host;
  }
  /** @param string */
  public function setPacUri($pacUri)
  {
    $this->pacUri = $pacUri;
  }
  /** @return string */
  public function getPacUri()
  {
    return $this->pacUri;
  }
  /** @param int */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
  }
}

class RemoteLockEvent extends \Google\Model
{
  /** @var string */
  public $adminPackageName;
  /** @var int */
  public $adminUserId;
  /** @var int */
  public $targetUserId;

  /** @param string */
  public function setAdminPackageName($adminPackageName)
  {
    $this->adminPackageName = $adminPackageName;
  }
  /** @return string */
  public function getAdminPackageName()
  {
    return $this->adminPackageName;
  }
  /** @param int */
  public function setAdminUserId($adminUserId)
  {
    $this->adminUserId = $adminUserId;
  }
  /** @return int */
  public function getAdminUserId()
  {
    return $this->adminUserId;
  }
  /** @param int */
  public function setTargetUserId($targetUserId)
  {
    $this->targetUserId = $targetUserId;
  }
  /** @return int */
  public function getTargetUserId()
  {
    return $this->targetUserId;
  }
}

class SecurityPosture extends \Google\Collection
{
  /** @var string */
  public $devicePosture;
  /** @var PostureDetail[] */
  public $postureDetails;
  protected $collection_key = 'postureDetails';
  protected $postureDetailsType = PostureDetail::class;
  protected $postureDetailsDataType = 'array';
  /** @param string */
  public function setDevicePosture($devicePosture)
  {
    $this->devicePosture = $devicePosture;
  }
  /** @return string */
  public function getDevicePosture()
  {
    return $this->devicePosture;
  }
  /** @param PostureDetail[] */
  public function setPostureDetails($postureDetails)
  {
    $this->postureDetails = $postureDetails;
  }
  /** @return PostureDetail[] */
  public function getPostureDetails()
  {
    return $this->postureDetails;
  }
}

class SetupAction extends \Google\Model
{
  /** @var UserFacingMessage */
  public $description;
  /** @var LaunchAppAction */
  public $launchApp;
  /** @var UserFacingMessage */
  public $title;
  protected $descriptionType = UserFacingMessage::class;
  protected $descriptionDataType = '';
  protected $launchAppType = LaunchAppAction::class;
  protected $launchAppDataType = '';
  protected $titleType = UserFacingMessage::class;
  protected $titleDataType = '';
  /** @param UserFacingMessage */
  public function setDescription(UserFacingMessage $description)
  {
    $this->description = $description;
  }
  /** @return UserFacingMessage */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param LaunchAppAction */
  public function setLaunchApp(LaunchAppAction $launchApp)
  {
    $this->launchApp = $launchApp;
  }
  /** @return LaunchAppAction */
  public function getLaunchApp()
  {
    return $this->launchApp;
  }
  /** @param UserFacingMessage */
  public function setTitle(UserFacingMessage $title)
  {
    $this->title = $title;
  }
  /** @return UserFacingMessage */
  public function getTitle()
  {
    return $this->title;
  }
}

class SigninDetail extends \Google\Model
{
  /** @var string */
  public $allowPersonalUsage;
  /** @var string */
  public $qrCode;
  /** @var string */
  public $signinEnrollmentToken;
  /** @var string */
  public $signinUrl;

  /** @param string */
  public function setAllowPersonalUsage($allowPersonalUsage)
  {
    $this->allowPersonalUsage = $allowPersonalUsage;
  }
  /** @return string */
  public function getAllowPersonalUsage()
  {
    return $this->allowPersonalUsage;
  }
  /** @param string */
  public function setQrCode($qrCode)
  {
    $this->qrCode = $qrCode;
  }
  /** @return string */
  public function getQrCode()
  {
    return $this->qrCode;
  }
  /** @param string */
  public function setSigninEnrollmentToken($signinEnrollmentToken)
  {
    $this->signinEnrollmentToken = $signinEnrollmentToken;
  }
  /** @return string */
  public function getSigninEnrollmentToken()
  {
    return $this->signinEnrollmentToken;
  }
  /** @param string */
  public function setSigninUrl($signinUrl)
  {
    $this->signinUrl = $signinUrl;
  }
  /** @return string */
  public function getSigninUrl()
  {
    return $this->signinUrl;
  }
}

class SignupUrl extends \Google\Model
{
  /** @var string */
  public $name;
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

class SoftwareInfo extends \Google\Model
{
  /** @var string */
  public $androidBuildNumber;
  /** @var string */
  public $androidBuildTime;
  /** @var int */
  public $androidDevicePolicyVersionCode;
  /** @var string */
  public $androidDevicePolicyVersionName;
  /** @var string */
  public $androidVersion;
  /** @var string */
  public $bootloaderVersion;
  /** @var string */
  public $deviceBuildSignature;
  /** @var string */
  public $deviceKernelVersion;
  /** @var string */
  public $primaryLanguageCode;
  /** @var string */
  public $securityPatchLevel;
  /** @var SystemUpdateInfo */
  public $systemUpdateInfo;
  protected $systemUpdateInfoType = SystemUpdateInfo::class;
  protected $systemUpdateInfoDataType = '';
  /** @param string */
  public function setAndroidBuildNumber($androidBuildNumber)
  {
    $this->androidBuildNumber = $androidBuildNumber;
  }
  /** @return string */
  public function getAndroidBuildNumber()
  {
    return $this->androidBuildNumber;
  }
  /** @param string */
  public function setAndroidBuildTime($androidBuildTime)
  {
    $this->androidBuildTime = $androidBuildTime;
  }
  /** @return string */
  public function getAndroidBuildTime()
  {
    return $this->androidBuildTime;
  }
  /** @param int */
  public function setAndroidDevicePolicyVersionCode($androidDevicePolicyVersionCode)
  {
    $this->androidDevicePolicyVersionCode = $androidDevicePolicyVersionCode;
  }
  /** @return int */
  public function getAndroidDevicePolicyVersionCode()
  {
    return $this->androidDevicePolicyVersionCode;
  }
  /** @param string */
  public function setAndroidDevicePolicyVersionName($androidDevicePolicyVersionName)
  {
    $this->androidDevicePolicyVersionName = $androidDevicePolicyVersionName;
  }
  /** @return string */
  public function getAndroidDevicePolicyVersionName()
  {
    return $this->androidDevicePolicyVersionName;
  }
  /** @param string */
  public function setAndroidVersion($androidVersion)
  {
    $this->androidVersion = $androidVersion;
  }
  /** @return string */
  public function getAndroidVersion()
  {
    return $this->androidVersion;
  }
  /** @param string */
  public function setBootloaderVersion($bootloaderVersion)
  {
    $this->bootloaderVersion = $bootloaderVersion;
  }
  /** @return string */
  public function getBootloaderVersion()
  {
    return $this->bootloaderVersion;
  }
  /** @param string */
  public function setDeviceBuildSignature($deviceBuildSignature)
  {
    $this->deviceBuildSignature = $deviceBuildSignature;
  }
  /** @return string */
  public function getDeviceBuildSignature()
  {
    return $this->deviceBuildSignature;
  }
  /** @param string */
  public function setDeviceKernelVersion($deviceKernelVersion)
  {
    $this->deviceKernelVersion = $deviceKernelVersion;
  }
  /** @return string */
  public function getDeviceKernelVersion()
  {
    return $this->deviceKernelVersion;
  }
  /** @param string */
  public function setPrimaryLanguageCode($primaryLanguageCode)
  {
    $this->primaryLanguageCode = $primaryLanguageCode;
  }
  /** @return string */
  public function getPrimaryLanguageCode()
  {
    return $this->primaryLanguageCode;
  }
  /** @param string */
  public function setSecurityPatchLevel($securityPatchLevel)
  {
    $this->securityPatchLevel = $securityPatchLevel;
  }
  /** @return string */
  public function getSecurityPatchLevel()
  {
    return $this->securityPatchLevel;
  }
  /** @param SystemUpdateInfo */
  public function setSystemUpdateInfo(SystemUpdateInfo $systemUpdateInfo)
  {
    $this->systemUpdateInfo = $systemUpdateInfo;
  }
  /** @return SystemUpdateInfo */
  public function getSystemUpdateInfo()
  {
    return $this->systemUpdateInfo;
  }
}

class SpecificNonComplianceContext extends \Google\Model
{
  /** @var OncWifiContext */
  public $oncWifiContext;
  /** @var PasswordPoliciesContext */
  public $passwordPoliciesContext;
  protected $oncWifiContextType = OncWifiContext::class;
  protected $oncWifiContextDataType = '';
  protected $passwordPoliciesContextType = PasswordPoliciesContext::class;
  protected $passwordPoliciesContextDataType = '';
  /** @param OncWifiContext */
  public function setOncWifiContext(OncWifiContext $oncWifiContext)
  {
    $this->oncWifiContext = $oncWifiContext;
  }
  /** @return OncWifiContext */
  public function getOncWifiContext()
  {
    return $this->oncWifiContext;
  }
  /** @param PasswordPoliciesContext */
  public function setPasswordPoliciesContext(PasswordPoliciesContext $passwordPoliciesContext)
  {
    $this->passwordPoliciesContext = $passwordPoliciesContext;
  }
  /** @return PasswordPoliciesContext */
  public function getPasswordPoliciesContext()
  {
    return $this->passwordPoliciesContext;
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

class StatusReportingSettings extends \Google\Model
{
  /** @var ApplicationReportingSettings */
  public $applicationReportingSettings;
  /** @var bool */
  public $applicationReportsEnabled;
  /** @var bool */
  public $commonCriteriaModeEnabled;
  /** @var bool */
  public $deviceSettingsEnabled;
  /** @var bool */
  public $displayInfoEnabled;
  /** @var bool */
  public $hardwareStatusEnabled;
  /** @var bool */
  public $memoryInfoEnabled;
  /** @var bool */
  public $networkInfoEnabled;
  /** @var bool */
  public $powerManagementEventsEnabled;
  /** @var bool */
  public $softwareInfoEnabled;
  /** @var bool */
  public $systemPropertiesEnabled;
  protected $applicationReportingSettingsType = ApplicationReportingSettings::class;
  protected $applicationReportingSettingsDataType = '';
  /** @param ApplicationReportingSettings */
  public function setApplicationReportingSettings(ApplicationReportingSettings $applicationReportingSettings)
  {
    $this->applicationReportingSettings = $applicationReportingSettings;
  }
  /** @return ApplicationReportingSettings */
  public function getApplicationReportingSettings()
  {
    return $this->applicationReportingSettings;
  }
  /** @param bool */
  public function setApplicationReportsEnabled($applicationReportsEnabled)
  {
    $this->applicationReportsEnabled = $applicationReportsEnabled;
  }
  /** @return bool */
  public function getApplicationReportsEnabled()
  {
    return $this->applicationReportsEnabled;
  }
  /** @param bool */
  public function setCommonCriteriaModeEnabled($commonCriteriaModeEnabled)
  {
    $this->commonCriteriaModeEnabled = $commonCriteriaModeEnabled;
  }
  /** @return bool */
  public function getCommonCriteriaModeEnabled()
  {
    return $this->commonCriteriaModeEnabled;
  }
  /** @param bool */
  public function setDeviceSettingsEnabled($deviceSettingsEnabled)
  {
    $this->deviceSettingsEnabled = $deviceSettingsEnabled;
  }
  /** @return bool */
  public function getDeviceSettingsEnabled()
  {
    return $this->deviceSettingsEnabled;
  }
  /** @param bool */
  public function setDisplayInfoEnabled($displayInfoEnabled)
  {
    $this->displayInfoEnabled = $displayInfoEnabled;
  }
  /** @return bool */
  public function getDisplayInfoEnabled()
  {
    return $this->displayInfoEnabled;
  }
  /** @param bool */
  public function setHardwareStatusEnabled($hardwareStatusEnabled)
  {
    $this->hardwareStatusEnabled = $hardwareStatusEnabled;
  }
  /** @return bool */
  public function getHardwareStatusEnabled()
  {
    return $this->hardwareStatusEnabled;
  }
  /** @param bool */
  public function setMemoryInfoEnabled($memoryInfoEnabled)
  {
    $this->memoryInfoEnabled = $memoryInfoEnabled;
  }
  /** @return bool */
  public function getMemoryInfoEnabled()
  {
    return $this->memoryInfoEnabled;
  }
  /** @param bool */
  public function setNetworkInfoEnabled($networkInfoEnabled)
  {
    $this->networkInfoEnabled = $networkInfoEnabled;
  }
  /** @return bool */
  public function getNetworkInfoEnabled()
  {
    return $this->networkInfoEnabled;
  }
  /** @param bool */
  public function setPowerManagementEventsEnabled($powerManagementEventsEnabled)
  {
    $this->powerManagementEventsEnabled = $powerManagementEventsEnabled;
  }
  /** @return bool */
  public function getPowerManagementEventsEnabled()
  {
    return $this->powerManagementEventsEnabled;
  }
  /** @param bool */
  public function setSoftwareInfoEnabled($softwareInfoEnabled)
  {
    $this->softwareInfoEnabled = $softwareInfoEnabled;
  }
  /** @return bool */
  public function getSoftwareInfoEnabled()
  {
    return $this->softwareInfoEnabled;
  }
  /** @param bool */
  public function setSystemPropertiesEnabled($systemPropertiesEnabled)
  {
    $this->systemPropertiesEnabled = $systemPropertiesEnabled;
  }
  /** @return bool */
  public function getSystemPropertiesEnabled()
  {
    return $this->systemPropertiesEnabled;
  }
}

class SystemUpdate extends \Google\Collection
{
  /** @var int */
  public $endMinutes;
  /** @var FreezePeriod[] */
  public $freezePeriods;
  /** @var int */
  public $startMinutes;
  /** @var string */
  public $type;
  protected $collection_key = 'freezePeriods';
  protected $freezePeriodsType = FreezePeriod::class;
  protected $freezePeriodsDataType = 'array';
  /** @param int */
  public function setEndMinutes($endMinutes)
  {
    $this->endMinutes = $endMinutes;
  }
  /** @return int */
  public function getEndMinutes()
  {
    return $this->endMinutes;
  }
  /** @param FreezePeriod[] */
  public function setFreezePeriods($freezePeriods)
  {
    $this->freezePeriods = $freezePeriods;
  }
  /** @return FreezePeriod[] */
  public function getFreezePeriods()
  {
    return $this->freezePeriods;
  }
  /** @param int */
  public function setStartMinutes($startMinutes)
  {
    $this->startMinutes = $startMinutes;
  }
  /** @return int */
  public function getStartMinutes()
  {
    return $this->startMinutes;
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

class SystemUpdateInfo extends \Google\Model
{
  /** @var string */
  public $updateReceivedTime;
  /** @var string */
  public $updateStatus;

  /** @param string */
  public function setUpdateReceivedTime($updateReceivedTime)
  {
    $this->updateReceivedTime = $updateReceivedTime;
  }
  /** @return string */
  public function getUpdateReceivedTime()
  {
    return $this->updateReceivedTime;
  }
  /** @param string */
  public function setUpdateStatus($updateStatus)
  {
    $this->updateStatus = $updateStatus;
  }
  /** @return string */
  public function getUpdateStatus()
  {
    return $this->updateStatus;
  }
}

class TelephonyInfo extends \Google\Model
{
  /** @var string */
  public $carrierName;
  /** @var string */
  public $phoneNumber;

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

class TermsAndConditions extends \Google\Model
{
  /** @var UserFacingMessage */
  public $content;
  /** @var UserFacingMessage */
  public $header;
  protected $contentType = UserFacingMessage::class;
  protected $contentDataType = '';
  protected $headerType = UserFacingMessage::class;
  protected $headerDataType = '';
  /** @param UserFacingMessage */
  public function setContent(UserFacingMessage $content)
  {
    $this->content = $content;
  }
  /** @return UserFacingMessage */
  public function getContent()
  {
    return $this->content;
  }
  /** @param UserFacingMessage */
  public function setHeader(UserFacingMessage $header)
  {
    $this->header = $header;
  }
  /** @return UserFacingMessage */
  public function getHeader()
  {
    return $this->header;
  }
}

class UsageLog extends \Google\Collection
{
  /** @var string[] */
  public $enabledLogTypes;
  /** @var string[] */
  public $uploadOnCellularAllowed;
  protected $collection_key = 'uploadOnCellularAllowed';
  /** @param string[] */
  public function setEnabledLogTypes($enabledLogTypes)
  {
    $this->enabledLogTypes = $enabledLogTypes;
  }
  /** @return string[] */
  public function getEnabledLogTypes()
  {
    return $this->enabledLogTypes;
  }
  /** @param string[] */
  public function setUploadOnCellularAllowed($uploadOnCellularAllowed)
  {
    $this->uploadOnCellularAllowed = $uploadOnCellularAllowed;
  }
  /** @return string[] */
  public function getUploadOnCellularAllowed()
  {
    return $this->uploadOnCellularAllowed;
  }
}

class UsageLogEvent extends \Google\Model
{
  /** @var AdbShellCommandEvent */
  public $adbShellCommandEvent;
  /** @var AdbShellInteractiveEvent */
  public $adbShellInteractiveEvent;
  /** @var AppProcessStartEvent */
  public $appProcessStartEvent;
  /** @var CertAuthorityInstalledEvent */
  public $certAuthorityInstalledEvent;
  /** @var CertAuthorityRemovedEvent */
  public $certAuthorityRemovedEvent;
  /** @var CertValidationFailureEvent */
  public $certValidationFailureEvent;
  /** @var ConnectEvent */
  public $connectEvent;
  /** @var CryptoSelfTestCompletedEvent */
  public $cryptoSelfTestCompletedEvent;
  /** @var DnsEvent */
  public $dnsEvent;
  /** @var string */
  public $eventId;
  /** @var string */
  public $eventTime;
  /** @var string */
  public $eventType;
  /** @var FilePulledEvent */
  public $filePulledEvent;
  /** @var FilePushedEvent */
  public $filePushedEvent;
  /** @var KeyDestructionEvent */
  public $keyDestructionEvent;
  /** @var KeyGeneratedEvent */
  public $keyGeneratedEvent;
  /** @var KeyImportEvent */
  public $keyImportEvent;
  /** @var KeyIntegrityViolationEvent */
  public $keyIntegrityViolationEvent;
  /** @var KeyguardDismissAuthAttemptEvent */
  public $keyguardDismissAuthAttemptEvent;
  /** @var KeyguardDismissedEvent */
  public $keyguardDismissedEvent;
  /** @var KeyguardSecuredEvent */
  public $keyguardSecuredEvent;
  /** @var LogBufferSizeCriticalEvent */
  public $logBufferSizeCriticalEvent;
  /** @var LoggingStartedEvent */
  public $loggingStartedEvent;
  /** @var LoggingStoppedEvent */
  public $loggingStoppedEvent;
  /** @var MediaMountEvent */
  public $mediaMountEvent;
  /** @var MediaUnmountEvent */
  public $mediaUnmountEvent;
  /** @var OsShutdownEvent */
  public $osShutdownEvent;
  /** @var OsStartupEvent */
  public $osStartupEvent;
  /** @var RemoteLockEvent */
  public $remoteLockEvent;
  /** @var WipeFailureEvent */
  public $wipeFailureEvent;
  protected $adbShellCommandEventType = AdbShellCommandEvent::class;
  protected $adbShellCommandEventDataType = '';
  protected $adbShellInteractiveEventType = AdbShellInteractiveEvent::class;
  protected $adbShellInteractiveEventDataType = '';
  protected $appProcessStartEventType = AppProcessStartEvent::class;
  protected $appProcessStartEventDataType = '';
  protected $certAuthorityInstalledEventType = CertAuthorityInstalledEvent::class;
  protected $certAuthorityInstalledEventDataType = '';
  protected $certAuthorityRemovedEventType = CertAuthorityRemovedEvent::class;
  protected $certAuthorityRemovedEventDataType = '';
  protected $certValidationFailureEventType = CertValidationFailureEvent::class;
  protected $certValidationFailureEventDataType = '';
  protected $connectEventType = ConnectEvent::class;
  protected $connectEventDataType = '';
  protected $cryptoSelfTestCompletedEventType = CryptoSelfTestCompletedEvent::class;
  protected $cryptoSelfTestCompletedEventDataType = '';
  protected $dnsEventType = DnsEvent::class;
  protected $dnsEventDataType = '';
  protected $filePulledEventType = FilePulledEvent::class;
  protected $filePulledEventDataType = '';
  protected $filePushedEventType = FilePushedEvent::class;
  protected $filePushedEventDataType = '';
  protected $keyDestructionEventType = KeyDestructionEvent::class;
  protected $keyDestructionEventDataType = '';
  protected $keyGeneratedEventType = KeyGeneratedEvent::class;
  protected $keyGeneratedEventDataType = '';
  protected $keyImportEventType = KeyImportEvent::class;
  protected $keyImportEventDataType = '';
  protected $keyIntegrityViolationEventType = KeyIntegrityViolationEvent::class;
  protected $keyIntegrityViolationEventDataType = '';
  protected $keyguardDismissAuthAttemptEventType = KeyguardDismissAuthAttemptEvent::class;
  protected $keyguardDismissAuthAttemptEventDataType = '';
  protected $keyguardDismissedEventType = KeyguardDismissedEvent::class;
  protected $keyguardDismissedEventDataType = '';
  protected $keyguardSecuredEventType = KeyguardSecuredEvent::class;
  protected $keyguardSecuredEventDataType = '';
  protected $logBufferSizeCriticalEventType = LogBufferSizeCriticalEvent::class;
  protected $logBufferSizeCriticalEventDataType = '';
  protected $loggingStartedEventType = LoggingStartedEvent::class;
  protected $loggingStartedEventDataType = '';
  protected $loggingStoppedEventType = LoggingStoppedEvent::class;
  protected $loggingStoppedEventDataType = '';
  protected $mediaMountEventType = MediaMountEvent::class;
  protected $mediaMountEventDataType = '';
  protected $mediaUnmountEventType = MediaUnmountEvent::class;
  protected $mediaUnmountEventDataType = '';
  protected $osShutdownEventType = OsShutdownEvent::class;
  protected $osShutdownEventDataType = '';
  protected $osStartupEventType = OsStartupEvent::class;
  protected $osStartupEventDataType = '';
  protected $remoteLockEventType = RemoteLockEvent::class;
  protected $remoteLockEventDataType = '';
  protected $wipeFailureEventType = WipeFailureEvent::class;
  protected $wipeFailureEventDataType = '';
  /** @param AdbShellCommandEvent */
  public function setAdbShellCommandEvent(AdbShellCommandEvent $adbShellCommandEvent)
  {
    $this->adbShellCommandEvent = $adbShellCommandEvent;
  }
  /** @return AdbShellCommandEvent */
  public function getAdbShellCommandEvent()
  {
    return $this->adbShellCommandEvent;
  }
  /** @param AdbShellInteractiveEvent */
  public function setAdbShellInteractiveEvent(AdbShellInteractiveEvent $adbShellInteractiveEvent)
  {
    $this->adbShellInteractiveEvent = $adbShellInteractiveEvent;
  }
  /** @return AdbShellInteractiveEvent */
  public function getAdbShellInteractiveEvent()
  {
    return $this->adbShellInteractiveEvent;
  }
  /** @param AppProcessStartEvent */
  public function setAppProcessStartEvent(AppProcessStartEvent $appProcessStartEvent)
  {
    $this->appProcessStartEvent = $appProcessStartEvent;
  }
  /** @return AppProcessStartEvent */
  public function getAppProcessStartEvent()
  {
    return $this->appProcessStartEvent;
  }
  /** @param CertAuthorityInstalledEvent */
  public function setCertAuthorityInstalledEvent(CertAuthorityInstalledEvent $certAuthorityInstalledEvent)
  {
    $this->certAuthorityInstalledEvent = $certAuthorityInstalledEvent;
  }
  /** @return CertAuthorityInstalledEvent */
  public function getCertAuthorityInstalledEvent()
  {
    return $this->certAuthorityInstalledEvent;
  }
  /** @param CertAuthorityRemovedEvent */
  public function setCertAuthorityRemovedEvent(CertAuthorityRemovedEvent $certAuthorityRemovedEvent)
  {
    $this->certAuthorityRemovedEvent = $certAuthorityRemovedEvent;
  }
  /** @return CertAuthorityRemovedEvent */
  public function getCertAuthorityRemovedEvent()
  {
    return $this->certAuthorityRemovedEvent;
  }
  /** @param CertValidationFailureEvent */
  public function setCertValidationFailureEvent(CertValidationFailureEvent $certValidationFailureEvent)
  {
    $this->certValidationFailureEvent = $certValidationFailureEvent;
  }
  /** @return CertValidationFailureEvent */
  public function getCertValidationFailureEvent()
  {
    return $this->certValidationFailureEvent;
  }
  /** @param ConnectEvent */
  public function setConnectEvent(ConnectEvent $connectEvent)
  {
    $this->connectEvent = $connectEvent;
  }
  /** @return ConnectEvent */
  public function getConnectEvent()
  {
    return $this->connectEvent;
  }
  /** @param CryptoSelfTestCompletedEvent */
  public function setCryptoSelfTestCompletedEvent(CryptoSelfTestCompletedEvent $cryptoSelfTestCompletedEvent)
  {
    $this->cryptoSelfTestCompletedEvent = $cryptoSelfTestCompletedEvent;
  }
  /** @return CryptoSelfTestCompletedEvent */
  public function getCryptoSelfTestCompletedEvent()
  {
    return $this->cryptoSelfTestCompletedEvent;
  }
  /** @param DnsEvent */
  public function setDnsEvent(DnsEvent $dnsEvent)
  {
    $this->dnsEvent = $dnsEvent;
  }
  /** @return DnsEvent */
  public function getDnsEvent()
  {
    return $this->dnsEvent;
  }
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param string */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
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
  /** @param FilePulledEvent */
  public function setFilePulledEvent(FilePulledEvent $filePulledEvent)
  {
    $this->filePulledEvent = $filePulledEvent;
  }
  /** @return FilePulledEvent */
  public function getFilePulledEvent()
  {
    return $this->filePulledEvent;
  }
  /** @param FilePushedEvent */
  public function setFilePushedEvent(FilePushedEvent $filePushedEvent)
  {
    $this->filePushedEvent = $filePushedEvent;
  }
  /** @return FilePushedEvent */
  public function getFilePushedEvent()
  {
    return $this->filePushedEvent;
  }
  /** @param KeyDestructionEvent */
  public function setKeyDestructionEvent(KeyDestructionEvent $keyDestructionEvent)
  {
    $this->keyDestructionEvent = $keyDestructionEvent;
  }
  /** @return KeyDestructionEvent */
  public function getKeyDestructionEvent()
  {
    return $this->keyDestructionEvent;
  }
  /** @param KeyGeneratedEvent */
  public function setKeyGeneratedEvent(KeyGeneratedEvent $keyGeneratedEvent)
  {
    $this->keyGeneratedEvent = $keyGeneratedEvent;
  }
  /** @return KeyGeneratedEvent */
  public function getKeyGeneratedEvent()
  {
    return $this->keyGeneratedEvent;
  }
  /** @param KeyImportEvent */
  public function setKeyImportEvent(KeyImportEvent $keyImportEvent)
  {
    $this->keyImportEvent = $keyImportEvent;
  }
  /** @return KeyImportEvent */
  public function getKeyImportEvent()
  {
    return $this->keyImportEvent;
  }
  /** @param KeyIntegrityViolationEvent */
  public function setKeyIntegrityViolationEvent(KeyIntegrityViolationEvent $keyIntegrityViolationEvent)
  {
    $this->keyIntegrityViolationEvent = $keyIntegrityViolationEvent;
  }
  /** @return KeyIntegrityViolationEvent */
  public function getKeyIntegrityViolationEvent()
  {
    return $this->keyIntegrityViolationEvent;
  }
  /** @param KeyguardDismissAuthAttemptEvent */
  public function setKeyguardDismissAuthAttemptEvent(KeyguardDismissAuthAttemptEvent $keyguardDismissAuthAttemptEvent)
  {
    $this->keyguardDismissAuthAttemptEvent = $keyguardDismissAuthAttemptEvent;
  }
  /** @return KeyguardDismissAuthAttemptEvent */
  public function getKeyguardDismissAuthAttemptEvent()
  {
    return $this->keyguardDismissAuthAttemptEvent;
  }
  /** @param KeyguardDismissedEvent */
  public function setKeyguardDismissedEvent(KeyguardDismissedEvent $keyguardDismissedEvent)
  {
    $this->keyguardDismissedEvent = $keyguardDismissedEvent;
  }
  /** @return KeyguardDismissedEvent */
  public function getKeyguardDismissedEvent()
  {
    return $this->keyguardDismissedEvent;
  }
  /** @param KeyguardSecuredEvent */
  public function setKeyguardSecuredEvent(KeyguardSecuredEvent $keyguardSecuredEvent)
  {
    $this->keyguardSecuredEvent = $keyguardSecuredEvent;
  }
  /** @return KeyguardSecuredEvent */
  public function getKeyguardSecuredEvent()
  {
    return $this->keyguardSecuredEvent;
  }
  /** @param LogBufferSizeCriticalEvent */
  public function setLogBufferSizeCriticalEvent(LogBufferSizeCriticalEvent $logBufferSizeCriticalEvent)
  {
    $this->logBufferSizeCriticalEvent = $logBufferSizeCriticalEvent;
  }
  /** @return LogBufferSizeCriticalEvent */
  public function getLogBufferSizeCriticalEvent()
  {
    return $this->logBufferSizeCriticalEvent;
  }
  /** @param LoggingStartedEvent */
  public function setLoggingStartedEvent(LoggingStartedEvent $loggingStartedEvent)
  {
    $this->loggingStartedEvent = $loggingStartedEvent;
  }
  /** @return LoggingStartedEvent */
  public function getLoggingStartedEvent()
  {
    return $this->loggingStartedEvent;
  }
  /** @param LoggingStoppedEvent */
  public function setLoggingStoppedEvent(LoggingStoppedEvent $loggingStoppedEvent)
  {
    $this->loggingStoppedEvent = $loggingStoppedEvent;
  }
  /** @return LoggingStoppedEvent */
  public function getLoggingStoppedEvent()
  {
    return $this->loggingStoppedEvent;
  }
  /** @param MediaMountEvent */
  public function setMediaMountEvent(MediaMountEvent $mediaMountEvent)
  {
    $this->mediaMountEvent = $mediaMountEvent;
  }
  /** @return MediaMountEvent */
  public function getMediaMountEvent()
  {
    return $this->mediaMountEvent;
  }
  /** @param MediaUnmountEvent */
  public function setMediaUnmountEvent(MediaUnmountEvent $mediaUnmountEvent)
  {
    $this->mediaUnmountEvent = $mediaUnmountEvent;
  }
  /** @return MediaUnmountEvent */
  public function getMediaUnmountEvent()
  {
    return $this->mediaUnmountEvent;
  }
  /** @param OsShutdownEvent */
  public function setOsShutdownEvent(OsShutdownEvent $osShutdownEvent)
  {
    $this->osShutdownEvent = $osShutdownEvent;
  }
  /** @return OsShutdownEvent */
  public function getOsShutdownEvent()
  {
    return $this->osShutdownEvent;
  }
  /** @param OsStartupEvent */
  public function setOsStartupEvent(OsStartupEvent $osStartupEvent)
  {
    $this->osStartupEvent = $osStartupEvent;
  }
  /** @return OsStartupEvent */
  public function getOsStartupEvent()
  {
    return $this->osStartupEvent;
  }
  /** @param RemoteLockEvent */
  public function setRemoteLockEvent(RemoteLockEvent $remoteLockEvent)
  {
    $this->remoteLockEvent = $remoteLockEvent;
  }
  /** @return RemoteLockEvent */
  public function getRemoteLockEvent()
  {
    return $this->remoteLockEvent;
  }
  /** @param WipeFailureEvent */
  public function setWipeFailureEvent(WipeFailureEvent $wipeFailureEvent)
  {
    $this->wipeFailureEvent = $wipeFailureEvent;
  }
  /** @return WipeFailureEvent */
  public function getWipeFailureEvent()
  {
    return $this->wipeFailureEvent;
  }
}

class User extends \Google\Model
{
  /** @var string */
  public $accountIdentifier;

  /** @param string */
  public function setAccountIdentifier($accountIdentifier)
  {
    $this->accountIdentifier = $accountIdentifier;
  }
  /** @return string */
  public function getAccountIdentifier()
  {
    return $this->accountIdentifier;
  }
}

class UserFacingMessage extends \Google\Model
{
  /** @var string */
  public $defaultMessage;
  /** @var string[] */
  public $localizedMessages;

  /** @param string */
  public function setDefaultMessage($defaultMessage)
  {
    $this->defaultMessage = $defaultMessage;
  }
  /** @return string */
  public function getDefaultMessage()
  {
    return $this->defaultMessage;
  }
  /** @param string[] */
  public function setLocalizedMessages($localizedMessages)
  {
    $this->localizedMessages = $localizedMessages;
  }
  /** @return string[] */
  public function getLocalizedMessages()
  {
    return $this->localizedMessages;
  }
}

class WebApp extends \Google\Collection
{
  /** @var string */
  public $displayMode;
  /** @var WebAppIcon[] */
  public $icons;
  /** @var string */
  public $name;
  /** @var string */
  public $startUrl;
  /** @var string */
  public $title;
  /** @var string */
  public $versionCode;
  protected $collection_key = 'icons';
  protected $iconsType = WebAppIcon::class;
  protected $iconsDataType = 'array';
  /** @param string */
  public function setDisplayMode($displayMode)
  {
    $this->displayMode = $displayMode;
  }
  /** @return string */
  public function getDisplayMode()
  {
    return $this->displayMode;
  }
  /** @param WebAppIcon[] */
  public function setIcons($icons)
  {
    $this->icons = $icons;
  }
  /** @return WebAppIcon[] */
  public function getIcons()
  {
    return $this->icons;
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
  public function setStartUrl($startUrl)
  {
    $this->startUrl = $startUrl;
  }
  /** @return string */
  public function getStartUrl()
  {
    return $this->startUrl;
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
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /** @return string */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
}

class WebAppIcon extends \Google\Model
{
  /** @var string */
  public $imageData;

  /** @param string */
  public function setImageData($imageData)
  {
    $this->imageData = $imageData;
  }
  /** @return string */
  public function getImageData()
  {
    return $this->imageData;
  }
}

class WebToken extends \Google\Collection
{
  /** @var string[] */
  public $enabledFeatures;
  /** @var string */
  public $name;
  /** @var string */
  public $parentFrameUrl;
  /** @var string[] */
  public $permissions;
  /** @var string */
  public $value;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setEnabledFeatures($enabledFeatures)
  {
    $this->enabledFeatures = $enabledFeatures;
  }
  /** @return string[] */
  public function getEnabledFeatures()
  {
    return $this->enabledFeatures;
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
  public function setParentFrameUrl($parentFrameUrl)
  {
    $this->parentFrameUrl = $parentFrameUrl;
  }
  /** @return string */
  public function getParentFrameUrl()
  {
    return $this->parentFrameUrl;
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

class WipeAction extends \Google\Model
{
  /** @var bool */
  public $preserveFrp;
  /** @var int */
  public $wipeAfterDays;

  /** @param bool */
  public function setPreserveFrp($preserveFrp)
  {
    $this->preserveFrp = $preserveFrp;
  }
  /** @return bool */
  public function getPreserveFrp()
  {
    return $this->preserveFrp;
  }
  /** @param int */
  public function setWipeAfterDays($wipeAfterDays)
  {
    $this->wipeAfterDays = $wipeAfterDays;
  }
  /** @return int */
  public function getWipeAfterDays()
  {
    return $this->wipeAfterDays;
  }
}

class WipeFailureEvent extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdbShellCommandEvent::class, 'Google_Service_AndroidManagement_AdbShellCommandEvent');
class_alias(AdbShellInteractiveEvent::class, 'Google_Service_AndroidManagement_AdbShellInteractiveEvent');
class_alias(AdvancedSecurityOverrides::class, 'Google_Service_AndroidManagement_AdvancedSecurityOverrides');
class_alias(AlwaysOnVpnPackage::class, 'Google_Service_AndroidManagement_AlwaysOnVpnPackage');
class_alias(AndroidmanagementEmpty::class, 'Google_Service_AndroidManagement_AndroidmanagementEmpty');
class_alias(ApiLevelCondition::class, 'Google_Service_AndroidManagement_ApiLevelCondition');
class_alias(AppProcessInfo::class, 'Google_Service_AndroidManagement_AppProcessInfo');
class_alias(AppProcessStartEvent::class, 'Google_Service_AndroidManagement_AppProcessStartEvent');
class_alias(AppTrackInfo::class, 'Google_Service_AndroidManagement_AppTrackInfo');
class_alias(AppVersion::class, 'Google_Service_AndroidManagement_AppVersion');
class_alias(Application::class, 'Google_Service_AndroidManagement_Application');
class_alias(ApplicationEvent::class, 'Google_Service_AndroidManagement_ApplicationEvent');
class_alias(ApplicationPermission::class, 'Google_Service_AndroidManagement_ApplicationPermission');
class_alias(ApplicationPolicy::class, 'Google_Service_AndroidManagement_ApplicationPolicy');
class_alias(ApplicationReport::class, 'Google_Service_AndroidManagement_ApplicationReport');
class_alias(ApplicationReportingSettings::class, 'Google_Service_AndroidManagement_ApplicationReportingSettings');
class_alias(BatchUsageLogEvents::class, 'Google_Service_AndroidManagement_BatchUsageLogEvents');
class_alias(BlockAction::class, 'Google_Service_AndroidManagement_BlockAction');
class_alias(CertAuthorityInstalledEvent::class, 'Google_Service_AndroidManagement_CertAuthorityInstalledEvent');
class_alias(CertAuthorityRemovedEvent::class, 'Google_Service_AndroidManagement_CertAuthorityRemovedEvent');
class_alias(CertValidationFailureEvent::class, 'Google_Service_AndroidManagement_CertValidationFailureEvent');
class_alias(ChoosePrivateKeyRule::class, 'Google_Service_AndroidManagement_ChoosePrivateKeyRule');
class_alias(ClearAppsDataParams::class, 'Google_Service_AndroidManagement_ClearAppsDataParams');
class_alias(ClearAppsDataStatus::class, 'Google_Service_AndroidManagement_ClearAppsDataStatus');
class_alias(Command::class, 'Google_Service_AndroidManagement_Command');
class_alias(CommonCriteriaModeInfo::class, 'Google_Service_AndroidManagement_CommonCriteriaModeInfo');
class_alias(ComplianceRule::class, 'Google_Service_AndroidManagement_ComplianceRule');
class_alias(ConnectEvent::class, 'Google_Service_AndroidManagement_ConnectEvent');
class_alias(ContactInfo::class, 'Google_Service_AndroidManagement_ContactInfo');
class_alias(ContentProviderEndpoint::class, 'Google_Service_AndroidManagement_ContentProviderEndpoint');
class_alias(CrossProfilePolicies::class, 'Google_Service_AndroidManagement_CrossProfilePolicies');
class_alias(CryptoSelfTestCompletedEvent::class, 'Google_Service_AndroidManagement_CryptoSelfTestCompletedEvent');
class_alias(Date::class, 'Google_Service_AndroidManagement_Date');
class_alias(Device::class, 'Google_Service_AndroidManagement_Device');
class_alias(DeviceSettings::class, 'Google_Service_AndroidManagement_DeviceSettings');
class_alias(Display::class, 'Google_Service_AndroidManagement_Display');
class_alias(DnsEvent::class, 'Google_Service_AndroidManagement_DnsEvent');
class_alias(EnrollmentToken::class, 'Google_Service_AndroidManagement_EnrollmentToken');
class_alias(Enterprise::class, 'Google_Service_AndroidManagement_Enterprise');
class_alias(ExtensionConfig::class, 'Google_Service_AndroidManagement_ExtensionConfig');
class_alias(ExternalData::class, 'Google_Service_AndroidManagement_ExternalData');
class_alias(FilePulledEvent::class, 'Google_Service_AndroidManagement_FilePulledEvent');
class_alias(FilePushedEvent::class, 'Google_Service_AndroidManagement_FilePushedEvent');
class_alias(FreezePeriod::class, 'Google_Service_AndroidManagement_FreezePeriod');
class_alias(HardwareInfo::class, 'Google_Service_AndroidManagement_HardwareInfo');
class_alias(HardwareStatus::class, 'Google_Service_AndroidManagement_HardwareStatus');
class_alias(IssueCommandResponse::class, 'Google_Service_AndroidManagement_IssueCommandResponse');
class_alias(KeyDestructionEvent::class, 'Google_Service_AndroidManagement_KeyDestructionEvent');
class_alias(KeyGeneratedEvent::class, 'Google_Service_AndroidManagement_KeyGeneratedEvent');
class_alias(KeyImportEvent::class, 'Google_Service_AndroidManagement_KeyImportEvent');
class_alias(KeyIntegrityViolationEvent::class, 'Google_Service_AndroidManagement_KeyIntegrityViolationEvent');
class_alias(KeyedAppState::class, 'Google_Service_AndroidManagement_KeyedAppState');
class_alias(KeyguardDismissAuthAttemptEvent::class, 'Google_Service_AndroidManagement_KeyguardDismissAuthAttemptEvent');
class_alias(KeyguardDismissedEvent::class, 'Google_Service_AndroidManagement_KeyguardDismissedEvent');
class_alias(KeyguardSecuredEvent::class, 'Google_Service_AndroidManagement_KeyguardSecuredEvent');
class_alias(KioskCustomization::class, 'Google_Service_AndroidManagement_KioskCustomization');
class_alias(LaunchAppAction::class, 'Google_Service_AndroidManagement_LaunchAppAction');
class_alias(ListDevicesResponse::class, 'Google_Service_AndroidManagement_ListDevicesResponse');
class_alias(ListEnrollmentTokensResponse::class, 'Google_Service_AndroidManagement_ListEnrollmentTokensResponse');
class_alias(ListEnterprisesResponse::class, 'Google_Service_AndroidManagement_ListEnterprisesResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_AndroidManagement_ListOperationsResponse');
class_alias(ListPoliciesResponse::class, 'Google_Service_AndroidManagement_ListPoliciesResponse');
class_alias(ListWebAppsResponse::class, 'Google_Service_AndroidManagement_ListWebAppsResponse');
class_alias(LogBufferSizeCriticalEvent::class, 'Google_Service_AndroidManagement_LogBufferSizeCriticalEvent');
class_alias(LoggingStartedEvent::class, 'Google_Service_AndroidManagement_LoggingStartedEvent');
class_alias(LoggingStoppedEvent::class, 'Google_Service_AndroidManagement_LoggingStoppedEvent');
class_alias(ManagedConfigurationTemplate::class, 'Google_Service_AndroidManagement_ManagedConfigurationTemplate');
class_alias(ManagedProperty::class, 'Google_Service_AndroidManagement_ManagedProperty');
class_alias(ManagedPropertyEntry::class, 'Google_Service_AndroidManagement_ManagedPropertyEntry');
class_alias(MediaMountEvent::class, 'Google_Service_AndroidManagement_MediaMountEvent');
class_alias(MediaUnmountEvent::class, 'Google_Service_AndroidManagement_MediaUnmountEvent');
class_alias(MemoryEvent::class, 'Google_Service_AndroidManagement_MemoryEvent');
class_alias(MemoryInfo::class, 'Google_Service_AndroidManagement_MemoryInfo');
class_alias(NetworkInfo::class, 'Google_Service_AndroidManagement_NetworkInfo');
class_alias(NonComplianceDetail::class, 'Google_Service_AndroidManagement_NonComplianceDetail');
class_alias(NonComplianceDetailCondition::class, 'Google_Service_AndroidManagement_NonComplianceDetailCondition');
class_alias(OncCertificateProvider::class, 'Google_Service_AndroidManagement_OncCertificateProvider');
class_alias(OncWifiContext::class, 'Google_Service_AndroidManagement_OncWifiContext');
class_alias(Operation::class, 'Google_Service_AndroidManagement_Operation');
class_alias(OsShutdownEvent::class, 'Google_Service_AndroidManagement_OsShutdownEvent');
class_alias(OsStartupEvent::class, 'Google_Service_AndroidManagement_OsStartupEvent');
class_alias(PackageNameList::class, 'Google_Service_AndroidManagement_PackageNameList');
class_alias(PasswordPoliciesContext::class, 'Google_Service_AndroidManagement_PasswordPoliciesContext');
class_alias(PasswordRequirements::class, 'Google_Service_AndroidManagement_PasswordRequirements');
class_alias(PerAppResult::class, 'Google_Service_AndroidManagement_PerAppResult');
class_alias(PermissionGrant::class, 'Google_Service_AndroidManagement_PermissionGrant');
class_alias(PersistentPreferredActivity::class, 'Google_Service_AndroidManagement_PersistentPreferredActivity');
class_alias(PersonalApplicationPolicy::class, 'Google_Service_AndroidManagement_PersonalApplicationPolicy');
class_alias(PersonalUsagePolicies::class, 'Google_Service_AndroidManagement_PersonalUsagePolicies');
class_alias(Policy::class, 'Google_Service_AndroidManagement_Policy');
class_alias(PolicyEnforcementRule::class, 'Google_Service_AndroidManagement_PolicyEnforcementRule');
class_alias(PostureDetail::class, 'Google_Service_AndroidManagement_PostureDetail');
class_alias(PowerManagementEvent::class, 'Google_Service_AndroidManagement_PowerManagementEvent');
class_alias(ProxyInfo::class, 'Google_Service_AndroidManagement_ProxyInfo');
class_alias(RemoteLockEvent::class, 'Google_Service_AndroidManagement_RemoteLockEvent');
class_alias(SecurityPosture::class, 'Google_Service_AndroidManagement_SecurityPosture');
class_alias(SetupAction::class, 'Google_Service_AndroidManagement_SetupAction');
class_alias(SigninDetail::class, 'Google_Service_AndroidManagement_SigninDetail');
class_alias(SignupUrl::class, 'Google_Service_AndroidManagement_SignupUrl');
class_alias(SoftwareInfo::class, 'Google_Service_AndroidManagement_SoftwareInfo');
class_alias(SpecificNonComplianceContext::class, 'Google_Service_AndroidManagement_SpecificNonComplianceContext');
class_alias(Status::class, 'Google_Service_AndroidManagement_Status');
class_alias(StatusReportingSettings::class, 'Google_Service_AndroidManagement_StatusReportingSettings');
class_alias(SystemUpdate::class, 'Google_Service_AndroidManagement_SystemUpdate');
class_alias(SystemUpdateInfo::class, 'Google_Service_AndroidManagement_SystemUpdateInfo');
class_alias(TelephonyInfo::class, 'Google_Service_AndroidManagement_TelephonyInfo');
class_alias(TermsAndConditions::class, 'Google_Service_AndroidManagement_TermsAndConditions');
class_alias(UsageLog::class, 'Google_Service_AndroidManagement_UsageLog');
class_alias(UsageLogEvent::class, 'Google_Service_AndroidManagement_UsageLogEvent');
class_alias(User::class, 'Google_Service_AndroidManagement_User');
class_alias(UserFacingMessage::class, 'Google_Service_AndroidManagement_UserFacingMessage');
class_alias(WebApp::class, 'Google_Service_AndroidManagement_WebApp');
class_alias(WebAppIcon::class, 'Google_Service_AndroidManagement_WebAppIcon');
class_alias(WebToken::class, 'Google_Service_AndroidManagement_WebToken');
class_alias(WipeAction::class, 'Google_Service_AndroidManagement_WipeAction');
class_alias(WipeFailureEvent::class, 'Google_Service_AndroidManagement_WipeFailureEvent');
