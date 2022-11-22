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

namespace Google\Service\Testing;

class Account extends \Google\Model
{
  /** @var GoogleAuto */
  public $googleAuto;
  protected $googleAutoType = GoogleAuto::class;
  protected $googleAutoDataType = '';
  /** @param GoogleAuto */
  public function setGoogleAuto(GoogleAuto $googleAuto)
  {
    $this->googleAuto = $googleAuto;
  }
  /** @return GoogleAuto */
  public function getGoogleAuto()
  {
    return $this->googleAuto;
  }
}

class AndroidDevice extends \Google\Model
{
  /** @var string */
  public $androidModelId;
  /** @var string */
  public $androidVersionId;
  /** @var string */
  public $locale;
  /** @var string */
  public $orientation;

  /** @param string */
  public function setAndroidModelId($androidModelId)
  {
    $this->androidModelId = $androidModelId;
  }
  /** @return string */
  public function getAndroidModelId()
  {
    return $this->androidModelId;
  }
  /** @param string */
  public function setAndroidVersionId($androidVersionId)
  {
    $this->androidVersionId = $androidVersionId;
  }
  /** @return string */
  public function getAndroidVersionId()
  {
    return $this->androidVersionId;
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
  public function setOrientation($orientation)
  {
    $this->orientation = $orientation;
  }
  /** @return string */
  public function getOrientation()
  {
    return $this->orientation;
  }
}

class AndroidDeviceCatalog extends \Google\Collection
{
  /** @var AndroidModel[] */
  public $models;
  /** @var AndroidRuntimeConfiguration */
  public $runtimeConfiguration;
  /** @var AndroidVersion[] */
  public $versions;
  protected $collection_key = 'versions';
  protected $modelsType = AndroidModel::class;
  protected $modelsDataType = 'array';
  protected $runtimeConfigurationType = AndroidRuntimeConfiguration::class;
  protected $runtimeConfigurationDataType = '';
  protected $versionsType = AndroidVersion::class;
  protected $versionsDataType = 'array';
  /** @param AndroidModel[] */
  public function setModels($models)
  {
    $this->models = $models;
  }
  /** @return AndroidModel[] */
  public function getModels()
  {
    return $this->models;
  }
  /** @param AndroidRuntimeConfiguration */
  public function setRuntimeConfiguration(AndroidRuntimeConfiguration $runtimeConfiguration)
  {
    $this->runtimeConfiguration = $runtimeConfiguration;
  }
  /** @return AndroidRuntimeConfiguration */
  public function getRuntimeConfiguration()
  {
    return $this->runtimeConfiguration;
  }
  /** @param AndroidVersion[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return AndroidVersion[] */
  public function getVersions()
  {
    return $this->versions;
  }
}

class AndroidDeviceList extends \Google\Collection
{
  /** @var AndroidDevice[] */
  public $androidDevices;
  protected $collection_key = 'androidDevices';
  protected $androidDevicesType = AndroidDevice::class;
  protected $androidDevicesDataType = 'array';
  /** @param AndroidDevice[] */
  public function setAndroidDevices($androidDevices)
  {
    $this->androidDevices = $androidDevices;
  }
  /** @return AndroidDevice[] */
  public function getAndroidDevices()
  {
    return $this->androidDevices;
  }
}

class AndroidInstrumentationTest extends \Google\Collection
{
  /** @var FileReference */
  public $appApk;
  /** @var AppBundle */
  public $appBundle;
  /** @var string */
  public $appPackageId;
  /** @var string */
  public $orchestratorOption;
  /** @var ShardingOption */
  public $shardingOption;
  /** @var FileReference */
  public $testApk;
  /** @var string */
  public $testPackageId;
  /** @var string */
  public $testRunnerClass;
  /** @var string[] */
  public $testTargets;
  protected $collection_key = 'testTargets';
  protected $appApkType = FileReference::class;
  protected $appApkDataType = '';
  protected $appBundleType = AppBundle::class;
  protected $appBundleDataType = '';
  protected $shardingOptionType = ShardingOption::class;
  protected $shardingOptionDataType = '';
  protected $testApkType = FileReference::class;
  protected $testApkDataType = '';
  /** @param FileReference */
  public function setAppApk(FileReference $appApk)
  {
    $this->appApk = $appApk;
  }
  /** @return FileReference */
  public function getAppApk()
  {
    return $this->appApk;
  }
  /** @param AppBundle */
  public function setAppBundle(AppBundle $appBundle)
  {
    $this->appBundle = $appBundle;
  }
  /** @return AppBundle */
  public function getAppBundle()
  {
    return $this->appBundle;
  }
  /** @param string */
  public function setAppPackageId($appPackageId)
  {
    $this->appPackageId = $appPackageId;
  }
  /** @return string */
  public function getAppPackageId()
  {
    return $this->appPackageId;
  }
  /** @param string */
  public function setOrchestratorOption($orchestratorOption)
  {
    $this->orchestratorOption = $orchestratorOption;
  }
  /** @return string */
  public function getOrchestratorOption()
  {
    return $this->orchestratorOption;
  }
  /** @param ShardingOption */
  public function setShardingOption(ShardingOption $shardingOption)
  {
    $this->shardingOption = $shardingOption;
  }
  /** @return ShardingOption */
  public function getShardingOption()
  {
    return $this->shardingOption;
  }
  /** @param FileReference */
  public function setTestApk(FileReference $testApk)
  {
    $this->testApk = $testApk;
  }
  /** @return FileReference */
  public function getTestApk()
  {
    return $this->testApk;
  }
  /** @param string */
  public function setTestPackageId($testPackageId)
  {
    $this->testPackageId = $testPackageId;
  }
  /** @return string */
  public function getTestPackageId()
  {
    return $this->testPackageId;
  }
  /** @param string */
  public function setTestRunnerClass($testRunnerClass)
  {
    $this->testRunnerClass = $testRunnerClass;
  }
  /** @return string */
  public function getTestRunnerClass()
  {
    return $this->testRunnerClass;
  }
  /** @param string[] */
  public function setTestTargets($testTargets)
  {
    $this->testTargets = $testTargets;
  }
  /** @return string[] */
  public function getTestTargets()
  {
    return $this->testTargets;
  }
}

class AndroidMatrix extends \Google\Collection
{
  /** @var string[] */
  public $androidModelIds;
  /** @var string[] */
  public $androidVersionIds;
  /** @var string[] */
  public $locales;
  /** @var string[] */
  public $orientations;
  protected $collection_key = 'orientations';
  /** @param string[] */
  public function setAndroidModelIds($androidModelIds)
  {
    $this->androidModelIds = $androidModelIds;
  }
  /** @return string[] */
  public function getAndroidModelIds()
  {
    return $this->androidModelIds;
  }
  /** @param string[] */
  public function setAndroidVersionIds($androidVersionIds)
  {
    $this->androidVersionIds = $androidVersionIds;
  }
  /** @return string[] */
  public function getAndroidVersionIds()
  {
    return $this->androidVersionIds;
  }
  /** @param string[] */
  public function setLocales($locales)
  {
    $this->locales = $locales;
  }
  /** @return string[] */
  public function getLocales()
  {
    return $this->locales;
  }
  /** @param string[] */
  public function setOrientations($orientations)
  {
    $this->orientations = $orientations;
  }
  /** @return string[] */
  public function getOrientations()
  {
    return $this->orientations;
  }
}

class AndroidModel extends \Google\Collection
{
  /** @var string */
  public $brand;
  /** @var string */
  public $codename;
  /** @var string */
  public $form;
  /** @var string */
  public $formFactor;
  /** @var string */
  public $id;
  /** @var bool */
  public $lowFpsVideoRecording;
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $name;
  /** @var int */
  public $screenDensity;
  /** @var int */
  public $screenX;
  /** @var int */
  public $screenY;
  /** @var string[] */
  public $supportedAbis;
  /** @var string[] */
  public $supportedVersionIds;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $thumbnailUrl;
  protected $collection_key = 'tags';
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
  public function setCodename($codename)
  {
    $this->codename = $codename;
  }
  /** @return string */
  public function getCodename()
  {
    return $this->codename;
  }
  /** @param string */
  public function setForm($form)
  {
    $this->form = $form;
  }
  /** @return string */
  public function getForm()
  {
    return $this->form;
  }
  /** @param string */
  public function setFormFactor($formFactor)
  {
    $this->formFactor = $formFactor;
  }
  /** @return string */
  public function getFormFactor()
  {
    return $this->formFactor;
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
  public function setLowFpsVideoRecording($lowFpsVideoRecording)
  {
    $this->lowFpsVideoRecording = $lowFpsVideoRecording;
  }
  /** @return bool */
  public function getLowFpsVideoRecording()
  {
    return $this->lowFpsVideoRecording;
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
  public function setScreenDensity($screenDensity)
  {
    $this->screenDensity = $screenDensity;
  }
  /** @return int */
  public function getScreenDensity()
  {
    return $this->screenDensity;
  }
  /** @param int */
  public function setScreenX($screenX)
  {
    $this->screenX = $screenX;
  }
  /** @return int */
  public function getScreenX()
  {
    return $this->screenX;
  }
  /** @param int */
  public function setScreenY($screenY)
  {
    $this->screenY = $screenY;
  }
  /** @return int */
  public function getScreenY()
  {
    return $this->screenY;
  }
  /** @param string[] */
  public function setSupportedAbis($supportedAbis)
  {
    $this->supportedAbis = $supportedAbis;
  }
  /** @return string[] */
  public function getSupportedAbis()
  {
    return $this->supportedAbis;
  }
  /** @param string[] */
  public function setSupportedVersionIds($supportedVersionIds)
  {
    $this->supportedVersionIds = $supportedVersionIds;
  }
  /** @return string[] */
  public function getSupportedVersionIds()
  {
    return $this->supportedVersionIds;
  }
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
  /** @param string */
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /** @return string */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
  }
}

class AndroidRoboTest extends \Google\Collection
{
  /** @var FileReference */
  public $appApk;
  /** @var AppBundle */
  public $appBundle;
  /** @var string */
  public $appInitialActivity;
  /** @var string */
  public $appPackageId;
  /** @var int */
  public $maxDepth;
  /** @var int */
  public $maxSteps;
  /** @var RoboDirective[] */
  public $roboDirectives;
  /** @var string */
  public $roboMode;
  /** @var FileReference */
  public $roboScript;
  /** @var RoboStartingIntent[] */
  public $startingIntents;
  protected $collection_key = 'startingIntents';
  protected $appApkType = FileReference::class;
  protected $appApkDataType = '';
  protected $appBundleType = AppBundle::class;
  protected $appBundleDataType = '';
  protected $roboDirectivesType = RoboDirective::class;
  protected $roboDirectivesDataType = 'array';
  protected $roboScriptType = FileReference::class;
  protected $roboScriptDataType = '';
  protected $startingIntentsType = RoboStartingIntent::class;
  protected $startingIntentsDataType = 'array';
  /** @param FileReference */
  public function setAppApk(FileReference $appApk)
  {
    $this->appApk = $appApk;
  }
  /** @return FileReference */
  public function getAppApk()
  {
    return $this->appApk;
  }
  /** @param AppBundle */
  public function setAppBundle(AppBundle $appBundle)
  {
    $this->appBundle = $appBundle;
  }
  /** @return AppBundle */
  public function getAppBundle()
  {
    return $this->appBundle;
  }
  /** @param string */
  public function setAppInitialActivity($appInitialActivity)
  {
    $this->appInitialActivity = $appInitialActivity;
  }
  /** @return string */
  public function getAppInitialActivity()
  {
    return $this->appInitialActivity;
  }
  /** @param string */
  public function setAppPackageId($appPackageId)
  {
    $this->appPackageId = $appPackageId;
  }
  /** @return string */
  public function getAppPackageId()
  {
    return $this->appPackageId;
  }
  /** @param int */
  public function setMaxDepth($maxDepth)
  {
    $this->maxDepth = $maxDepth;
  }
  /** @return int */
  public function getMaxDepth()
  {
    return $this->maxDepth;
  }
  /** @param int */
  public function setMaxSteps($maxSteps)
  {
    $this->maxSteps = $maxSteps;
  }
  /** @return int */
  public function getMaxSteps()
  {
    return $this->maxSteps;
  }
  /** @param RoboDirective[] */
  public function setRoboDirectives($roboDirectives)
  {
    $this->roboDirectives = $roboDirectives;
  }
  /** @return RoboDirective[] */
  public function getRoboDirectives()
  {
    return $this->roboDirectives;
  }
  /** @param string */
  public function setRoboMode($roboMode)
  {
    $this->roboMode = $roboMode;
  }
  /** @return string */
  public function getRoboMode()
  {
    return $this->roboMode;
  }
  /** @param FileReference */
  public function setRoboScript(FileReference $roboScript)
  {
    $this->roboScript = $roboScript;
  }
  /** @return FileReference */
  public function getRoboScript()
  {
    return $this->roboScript;
  }
  /** @param RoboStartingIntent[] */
  public function setStartingIntents($startingIntents)
  {
    $this->startingIntents = $startingIntents;
  }
  /** @return RoboStartingIntent[] */
  public function getStartingIntents()
  {
    return $this->startingIntents;
  }
}

class AndroidRuntimeConfiguration extends \Google\Collection
{
  /** @var Locale[] */
  public $locales;
  /** @var Orientation[] */
  public $orientations;
  protected $collection_key = 'orientations';
  protected $localesType = Locale::class;
  protected $localesDataType = 'array';
  protected $orientationsType = Orientation::class;
  protected $orientationsDataType = 'array';
  /** @param Locale[] */
  public function setLocales($locales)
  {
    $this->locales = $locales;
  }
  /** @return Locale[] */
  public function getLocales()
  {
    return $this->locales;
  }
  /** @param Orientation[] */
  public function setOrientations($orientations)
  {
    $this->orientations = $orientations;
  }
  /** @return Orientation[] */
  public function getOrientations()
  {
    return $this->orientations;
  }
}

class AndroidTestLoop extends \Google\Collection
{
  /** @var FileReference */
  public $appApk;
  /** @var AppBundle */
  public $appBundle;
  /** @var string */
  public $appPackageId;
  /** @var string[] */
  public $scenarioLabels;
  /** @var int[] */
  public $scenarios;
  protected $collection_key = 'scenarios';
  protected $appApkType = FileReference::class;
  protected $appApkDataType = '';
  protected $appBundleType = AppBundle::class;
  protected $appBundleDataType = '';
  /** @param FileReference */
  public function setAppApk(FileReference $appApk)
  {
    $this->appApk = $appApk;
  }
  /** @return FileReference */
  public function getAppApk()
  {
    return $this->appApk;
  }
  /** @param AppBundle */
  public function setAppBundle(AppBundle $appBundle)
  {
    $this->appBundle = $appBundle;
  }
  /** @return AppBundle */
  public function getAppBundle()
  {
    return $this->appBundle;
  }
  /** @param string */
  public function setAppPackageId($appPackageId)
  {
    $this->appPackageId = $appPackageId;
  }
  /** @return string */
  public function getAppPackageId()
  {
    return $this->appPackageId;
  }
  /** @param string[] */
  public function setScenarioLabels($scenarioLabels)
  {
    $this->scenarioLabels = $scenarioLabels;
  }
  /** @return string[] */
  public function getScenarioLabels()
  {
    return $this->scenarioLabels;
  }
  /** @param int[] */
  public function setScenarios($scenarios)
  {
    $this->scenarios = $scenarios;
  }
  /** @return int[] */
  public function getScenarios()
  {
    return $this->scenarios;
  }
}

class AndroidVersion extends \Google\Collection
{
  /** @var int */
  public $apiLevel;
  /** @var string */
  public $codeName;
  /** @var Distribution */
  public $distribution;
  /** @var string */
  public $id;
  /** @var Date */
  public $releaseDate;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $versionString;
  protected $collection_key = 'tags';
  protected $distributionType = Distribution::class;
  protected $distributionDataType = '';
  protected $releaseDateType = Date::class;
  protected $releaseDateDataType = '';
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
  /** @param string */
  public function setCodeName($codeName)
  {
    $this->codeName = $codeName;
  }
  /** @return string */
  public function getCodeName()
  {
    return $this->codeName;
  }
  /** @param Distribution */
  public function setDistribution(Distribution $distribution)
  {
    $this->distribution = $distribution;
  }
  /** @return Distribution */
  public function getDistribution()
  {
    return $this->distribution;
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
  /** @param Date */
  public function setReleaseDate(Date $releaseDate)
  {
    $this->releaseDate = $releaseDate;
  }
  /** @return Date */
  public function getReleaseDate()
  {
    return $this->releaseDate;
  }
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
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

class Apk extends \Google\Model
{
  /** @var FileReference */
  public $location;
  /** @var string */
  public $packageName;
  protected $locationType = FileReference::class;
  protected $locationDataType = '';
  /** @param FileReference */
  public function setLocation(FileReference $location)
  {
    $this->location = $location;
  }
  /** @return FileReference */
  public function getLocation()
  {
    return $this->location;
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

class ApkDetail extends \Google\Model
{
  /** @var ApkManifest */
  public $apkManifest;
  protected $apkManifestType = ApkManifest::class;
  protected $apkManifestDataType = '';
  /** @param ApkManifest */
  public function setApkManifest(ApkManifest $apkManifest)
  {
    $this->apkManifest = $apkManifest;
  }
  /** @return ApkManifest */
  public function getApkManifest()
  {
    return $this->apkManifest;
  }
}

class ApkManifest extends \Google\Collection
{
  /** @var string */
  public $applicationLabel;
  /** @var IntentFilter[] */
  public $intentFilters;
  /** @var int */
  public $maxSdkVersion;
  /** @var Metadata[] */
  public $metadata;
  /** @var int */
  public $minSdkVersion;
  /** @var string */
  public $packageName;
  /** @var int */
  public $targetSdkVersion;
  /** @var UsesFeature[] */
  public $usesFeature;
  /** @var string[] */
  public $usesPermission;
  /** @var string */
  public $versionCode;
  /** @var string */
  public $versionName;
  protected $collection_key = 'usesPermission';
  protected $intentFiltersType = IntentFilter::class;
  protected $intentFiltersDataType = 'array';
  protected $metadataType = Metadata::class;
  protected $metadataDataType = 'array';
  protected $usesFeatureType = UsesFeature::class;
  protected $usesFeatureDataType = 'array';
  /** @param string */
  public function setApplicationLabel($applicationLabel)
  {
    $this->applicationLabel = $applicationLabel;
  }
  /** @return string */
  public function getApplicationLabel()
  {
    return $this->applicationLabel;
  }
  /** @param IntentFilter[] */
  public function setIntentFilters($intentFilters)
  {
    $this->intentFilters = $intentFilters;
  }
  /** @return IntentFilter[] */
  public function getIntentFilters()
  {
    return $this->intentFilters;
  }
  /** @param int */
  public function setMaxSdkVersion($maxSdkVersion)
  {
    $this->maxSdkVersion = $maxSdkVersion;
  }
  /** @return int */
  public function getMaxSdkVersion()
  {
    return $this->maxSdkVersion;
  }
  /** @param Metadata[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return Metadata[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param int */
  public function setMinSdkVersion($minSdkVersion)
  {
    $this->minSdkVersion = $minSdkVersion;
  }
  /** @return int */
  public function getMinSdkVersion()
  {
    return $this->minSdkVersion;
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
  /** @param int */
  public function setTargetSdkVersion($targetSdkVersion)
  {
    $this->targetSdkVersion = $targetSdkVersion;
  }
  /** @return int */
  public function getTargetSdkVersion()
  {
    return $this->targetSdkVersion;
  }
  /** @param UsesFeature[] */
  public function setUsesFeature($usesFeature)
  {
    $this->usesFeature = $usesFeature;
  }
  /** @return UsesFeature[] */
  public function getUsesFeature()
  {
    return $this->usesFeature;
  }
  /** @param string[] */
  public function setUsesPermission($usesPermission)
  {
    $this->usesPermission = $usesPermission;
  }
  /** @return string[] */
  public function getUsesPermission()
  {
    return $this->usesPermission;
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

class AppBundle extends \Google\Model
{
  /** @var FileReference */
  public $bundleLocation;
  protected $bundleLocationType = FileReference::class;
  protected $bundleLocationDataType = '';
  /** @param FileReference */
  public function setBundleLocation(FileReference $bundleLocation)
  {
    $this->bundleLocation = $bundleLocation;
  }
  /** @return FileReference */
  public function getBundleLocation()
  {
    return $this->bundleLocation;
  }
}

class CancelTestMatrixResponse extends \Google\Model
{
  /** @var string */
  public $testState;

  /** @param string */
  public function setTestState($testState)
  {
    $this->testState = $testState;
  }
  /** @return string */
  public function getTestState()
  {
    return $this->testState;
  }
}

class ClientInfo extends \Google\Collection
{
  /** @var ClientInfoDetail[] */
  public $clientInfoDetails;
  /** @var string */
  public $name;
  protected $collection_key = 'clientInfoDetails';
  protected $clientInfoDetailsType = ClientInfoDetail::class;
  protected $clientInfoDetailsDataType = 'array';
  /** @param ClientInfoDetail[] */
  public function setClientInfoDetails($clientInfoDetails)
  {
    $this->clientInfoDetails = $clientInfoDetails;
  }
  /** @return ClientInfoDetail[] */
  public function getClientInfoDetails()
  {
    return $this->clientInfoDetails;
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

class ClientInfoDetail extends \Google\Model
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

class DeviceFile extends \Google\Model
{
  /** @var ObbFile */
  public $obbFile;
  /** @var RegularFile */
  public $regularFile;
  protected $obbFileType = ObbFile::class;
  protected $obbFileDataType = '';
  protected $regularFileType = RegularFile::class;
  protected $regularFileDataType = '';
  /** @param ObbFile */
  public function setObbFile(ObbFile $obbFile)
  {
    $this->obbFile = $obbFile;
  }
  /** @return ObbFile */
  public function getObbFile()
  {
    return $this->obbFile;
  }
  /** @param RegularFile */
  public function setRegularFile(RegularFile $regularFile)
  {
    $this->regularFile = $regularFile;
  }
  /** @return RegularFile */
  public function getRegularFile()
  {
    return $this->regularFile;
  }
}

class DeviceIpBlock extends \Google\Model
{
  /** @var Date */
  public $addedDate;
  /** @var string */
  public $block;
  /** @var string */
  public $form;
  protected $addedDateType = Date::class;
  protected $addedDateDataType = '';
  /** @param Date */
  public function setAddedDate(Date $addedDate)
  {
    $this->addedDate = $addedDate;
  }
  /** @return Date */
  public function getAddedDate()
  {
    return $this->addedDate;
  }
  /** @param string */
  public function setBlock($block)
  {
    $this->block = $block;
  }
  /** @return string */
  public function getBlock()
  {
    return $this->block;
  }
  /** @param string */
  public function setForm($form)
  {
    $this->form = $form;
  }
  /** @return string */
  public function getForm()
  {
    return $this->form;
  }
}

class DeviceIpBlockCatalog extends \Google\Collection
{
  /** @var DeviceIpBlock[] */
  public $ipBlocks;
  protected $collection_key = 'ipBlocks';
  protected $ipBlocksType = DeviceIpBlock::class;
  protected $ipBlocksDataType = 'array';
  /** @param DeviceIpBlock[] */
  public function setIpBlocks($ipBlocks)
  {
    $this->ipBlocks = $ipBlocks;
  }
  /** @return DeviceIpBlock[] */
  public function getIpBlocks()
  {
    return $this->ipBlocks;
  }
}

class Distribution extends \Google\Model
{
  public $marketShare;
  /** @var string */
  public $measurementTime;

  public function setMarketShare($marketShare)
  {
    $this->marketShare = $marketShare;
  }
  public function getMarketShare()
  {
    return $this->marketShare;
  }
  /** @param string */
  public function setMeasurementTime($measurementTime)
  {
    $this->measurementTime = $measurementTime;
  }
  /** @return string */
  public function getMeasurementTime()
  {
    return $this->measurementTime;
  }
}

class Environment extends \Google\Model
{
  /** @var AndroidDevice */
  public $androidDevice;
  /** @var IosDevice */
  public $iosDevice;
  protected $androidDeviceType = AndroidDevice::class;
  protected $androidDeviceDataType = '';
  protected $iosDeviceType = IosDevice::class;
  protected $iosDeviceDataType = '';
  /** @param AndroidDevice */
  public function setAndroidDevice(AndroidDevice $androidDevice)
  {
    $this->androidDevice = $androidDevice;
  }
  /** @return AndroidDevice */
  public function getAndroidDevice()
  {
    return $this->androidDevice;
  }
  /** @param IosDevice */
  public function setIosDevice(IosDevice $iosDevice)
  {
    $this->iosDevice = $iosDevice;
  }
  /** @return IosDevice */
  public function getIosDevice()
  {
    return $this->iosDevice;
  }
}

class EnvironmentMatrix extends \Google\Model
{
  /** @var AndroidDeviceList */
  public $androidDeviceList;
  /** @var AndroidMatrix */
  public $androidMatrix;
  /** @var IosDeviceList */
  public $iosDeviceList;
  protected $androidDeviceListType = AndroidDeviceList::class;
  protected $androidDeviceListDataType = '';
  protected $androidMatrixType = AndroidMatrix::class;
  protected $androidMatrixDataType = '';
  protected $iosDeviceListType = IosDeviceList::class;
  protected $iosDeviceListDataType = '';
  /** @param AndroidDeviceList */
  public function setAndroidDeviceList(AndroidDeviceList $androidDeviceList)
  {
    $this->androidDeviceList = $androidDeviceList;
  }
  /** @return AndroidDeviceList */
  public function getAndroidDeviceList()
  {
    return $this->androidDeviceList;
  }
  /** @param AndroidMatrix */
  public function setAndroidMatrix(AndroidMatrix $androidMatrix)
  {
    $this->androidMatrix = $androidMatrix;
  }
  /** @return AndroidMatrix */
  public function getAndroidMatrix()
  {
    return $this->androidMatrix;
  }
  /** @param IosDeviceList */
  public function setIosDeviceList(IosDeviceList $iosDeviceList)
  {
    $this->iosDeviceList = $iosDeviceList;
  }
  /** @return IosDeviceList */
  public function getIosDeviceList()
  {
    return $this->iosDeviceList;
  }
}

class EnvironmentVariable extends \Google\Model
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

class FileReference extends \Google\Model
{
  /** @var string */
  public $gcsPath;

  /** @param string */
  public function setGcsPath($gcsPath)
  {
    $this->gcsPath = $gcsPath;
  }
  /** @return string */
  public function getGcsPath()
  {
    return $this->gcsPath;
  }
}

class GetApkDetailsResponse extends \Google\Model
{
  /** @var ApkDetail */
  public $apkDetail;
  protected $apkDetailType = ApkDetail::class;
  protected $apkDetailDataType = '';
  /** @param ApkDetail */
  public function setApkDetail(ApkDetail $apkDetail)
  {
    $this->apkDetail = $apkDetail;
  }
  /** @return ApkDetail */
  public function getApkDetail()
  {
    return $this->apkDetail;
  }
}

class GoogleAuto extends \Google\Model
{
}

class GoogleCloudStorage extends \Google\Model
{
  /** @var string */
  public $gcsPath;

  /** @param string */
  public function setGcsPath($gcsPath)
  {
    $this->gcsPath = $gcsPath;
  }
  /** @return string */
  public function getGcsPath()
  {
    return $this->gcsPath;
  }
}

class IntentFilter extends \Google\Collection
{
  /** @var string[] */
  public $actionNames;
  /** @var string[] */
  public $categoryNames;
  /** @var string */
  public $mimeType;
  protected $collection_key = 'categoryNames';
  /** @param string[] */
  public function setActionNames($actionNames)
  {
    $this->actionNames = $actionNames;
  }
  /** @return string[] */
  public function getActionNames()
  {
    return $this->actionNames;
  }
  /** @param string[] */
  public function setCategoryNames($categoryNames)
  {
    $this->categoryNames = $categoryNames;
  }
  /** @return string[] */
  public function getCategoryNames()
  {
    return $this->categoryNames;
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

class IosDevice extends \Google\Model
{
  /** @var string */
  public $iosModelId;
  /** @var string */
  public $iosVersionId;
  /** @var string */
  public $locale;
  /** @var string */
  public $orientation;

  /** @param string */
  public function setIosModelId($iosModelId)
  {
    $this->iosModelId = $iosModelId;
  }
  /** @return string */
  public function getIosModelId()
  {
    return $this->iosModelId;
  }
  /** @param string */
  public function setIosVersionId($iosVersionId)
  {
    $this->iosVersionId = $iosVersionId;
  }
  /** @return string */
  public function getIosVersionId()
  {
    return $this->iosVersionId;
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
  public function setOrientation($orientation)
  {
    $this->orientation = $orientation;
  }
  /** @return string */
  public function getOrientation()
  {
    return $this->orientation;
  }
}

class IosDeviceCatalog extends \Google\Collection
{
  /** @var IosModel[] */
  public $models;
  /** @var IosRuntimeConfiguration */
  public $runtimeConfiguration;
  /** @var IosVersion[] */
  public $versions;
  /** @var XcodeVersion[] */
  public $xcodeVersions;
  protected $collection_key = 'xcodeVersions';
  protected $modelsType = IosModel::class;
  protected $modelsDataType = 'array';
  protected $runtimeConfigurationType = IosRuntimeConfiguration::class;
  protected $runtimeConfigurationDataType = '';
  protected $versionsType = IosVersion::class;
  protected $versionsDataType = 'array';
  protected $xcodeVersionsType = XcodeVersion::class;
  protected $xcodeVersionsDataType = 'array';
  /** @param IosModel[] */
  public function setModels($models)
  {
    $this->models = $models;
  }
  /** @return IosModel[] */
  public function getModels()
  {
    return $this->models;
  }
  /** @param IosRuntimeConfiguration */
  public function setRuntimeConfiguration(IosRuntimeConfiguration $runtimeConfiguration)
  {
    $this->runtimeConfiguration = $runtimeConfiguration;
  }
  /** @return IosRuntimeConfiguration */
  public function getRuntimeConfiguration()
  {
    return $this->runtimeConfiguration;
  }
  /** @param IosVersion[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return IosVersion[] */
  public function getVersions()
  {
    return $this->versions;
  }
  /** @param XcodeVersion[] */
  public function setXcodeVersions($xcodeVersions)
  {
    $this->xcodeVersions = $xcodeVersions;
  }
  /** @return XcodeVersion[] */
  public function getXcodeVersions()
  {
    return $this->xcodeVersions;
  }
}

class IosDeviceFile extends \Google\Model
{
  /** @var string */
  public $bundleId;
  /** @var FileReference */
  public $content;
  /** @var string */
  public $devicePath;
  protected $contentType = FileReference::class;
  protected $contentDataType = '';
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
  /** @param FileReference */
  public function setContent(FileReference $content)
  {
    $this->content = $content;
  }
  /** @return FileReference */
  public function getContent()
  {
    return $this->content;
  }
  /** @param string */
  public function setDevicePath($devicePath)
  {
    $this->devicePath = $devicePath;
  }
  /** @return string */
  public function getDevicePath()
  {
    return $this->devicePath;
  }
}

class IosDeviceList extends \Google\Collection
{
  /** @var IosDevice[] */
  public $iosDevices;
  protected $collection_key = 'iosDevices';
  protected $iosDevicesType = IosDevice::class;
  protected $iosDevicesDataType = 'array';
  /** @param IosDevice[] */
  public function setIosDevices($iosDevices)
  {
    $this->iosDevices = $iosDevices;
  }
  /** @return IosDevice[] */
  public function getIosDevices()
  {
    return $this->iosDevices;
  }
}

class IosModel extends \Google\Collection
{
  /** @var string[] */
  public $deviceCapabilities;
  /** @var string */
  public $formFactor;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var int */
  public $screenDensity;
  /** @var int */
  public $screenX;
  /** @var int */
  public $screenY;
  /** @var string[] */
  public $supportedVersionIds;
  /** @var string[] */
  public $tags;
  protected $collection_key = 'tags';
  /** @param string[] */
  public function setDeviceCapabilities($deviceCapabilities)
  {
    $this->deviceCapabilities = $deviceCapabilities;
  }
  /** @return string[] */
  public function getDeviceCapabilities()
  {
    return $this->deviceCapabilities;
  }
  /** @param string */
  public function setFormFactor($formFactor)
  {
    $this->formFactor = $formFactor;
  }
  /** @return string */
  public function getFormFactor()
  {
    return $this->formFactor;
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
  /** @param int */
  public function setScreenDensity($screenDensity)
  {
    $this->screenDensity = $screenDensity;
  }
  /** @return int */
  public function getScreenDensity()
  {
    return $this->screenDensity;
  }
  /** @param int */
  public function setScreenX($screenX)
  {
    $this->screenX = $screenX;
  }
  /** @return int */
  public function getScreenX()
  {
    return $this->screenX;
  }
  /** @param int */
  public function setScreenY($screenY)
  {
    $this->screenY = $screenY;
  }
  /** @return int */
  public function getScreenY()
  {
    return $this->screenY;
  }
  /** @param string[] */
  public function setSupportedVersionIds($supportedVersionIds)
  {
    $this->supportedVersionIds = $supportedVersionIds;
  }
  /** @return string[] */
  public function getSupportedVersionIds()
  {
    return $this->supportedVersionIds;
  }
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
}

class IosRuntimeConfiguration extends \Google\Collection
{
  /** @var Locale[] */
  public $locales;
  /** @var Orientation[] */
  public $orientations;
  protected $collection_key = 'orientations';
  protected $localesType = Locale::class;
  protected $localesDataType = 'array';
  protected $orientationsType = Orientation::class;
  protected $orientationsDataType = 'array';
  /** @param Locale[] */
  public function setLocales($locales)
  {
    $this->locales = $locales;
  }
  /** @return Locale[] */
  public function getLocales()
  {
    return $this->locales;
  }
  /** @param Orientation[] */
  public function setOrientations($orientations)
  {
    $this->orientations = $orientations;
  }
  /** @return Orientation[] */
  public function getOrientations()
  {
    return $this->orientations;
  }
}

class IosTestLoop extends \Google\Collection
{
  /** @var string */
  public $appBundleId;
  /** @var FileReference */
  public $appIpa;
  /** @var int[] */
  public $scenarios;
  protected $collection_key = 'scenarios';
  protected $appIpaType = FileReference::class;
  protected $appIpaDataType = '';
  /** @param string */
  public function setAppBundleId($appBundleId)
  {
    $this->appBundleId = $appBundleId;
  }
  /** @return string */
  public function getAppBundleId()
  {
    return $this->appBundleId;
  }
  /** @param FileReference */
  public function setAppIpa(FileReference $appIpa)
  {
    $this->appIpa = $appIpa;
  }
  /** @return FileReference */
  public function getAppIpa()
  {
    return $this->appIpa;
  }
  /** @param int[] */
  public function setScenarios($scenarios)
  {
    $this->scenarios = $scenarios;
  }
  /** @return int[] */
  public function getScenarios()
  {
    return $this->scenarios;
  }
}

class IosTestSetup extends \Google\Collection
{
  /** @var FileReference[] */
  public $additionalIpas;
  /** @var string */
  public $networkProfile;
  /** @var IosDeviceFile[] */
  public $pullDirectories;
  /** @var IosDeviceFile[] */
  public $pushFiles;
  protected $collection_key = 'pushFiles';
  protected $additionalIpasType = FileReference::class;
  protected $additionalIpasDataType = 'array';
  protected $pullDirectoriesType = IosDeviceFile::class;
  protected $pullDirectoriesDataType = 'array';
  protected $pushFilesType = IosDeviceFile::class;
  protected $pushFilesDataType = 'array';
  /** @param FileReference[] */
  public function setAdditionalIpas($additionalIpas)
  {
    $this->additionalIpas = $additionalIpas;
  }
  /** @return FileReference[] */
  public function getAdditionalIpas()
  {
    return $this->additionalIpas;
  }
  /** @param string */
  public function setNetworkProfile($networkProfile)
  {
    $this->networkProfile = $networkProfile;
  }
  /** @return string */
  public function getNetworkProfile()
  {
    return $this->networkProfile;
  }
  /** @param IosDeviceFile[] */
  public function setPullDirectories($pullDirectories)
  {
    $this->pullDirectories = $pullDirectories;
  }
  /** @return IosDeviceFile[] */
  public function getPullDirectories()
  {
    return $this->pullDirectories;
  }
  /** @param IosDeviceFile[] */
  public function setPushFiles($pushFiles)
  {
    $this->pushFiles = $pushFiles;
  }
  /** @return IosDeviceFile[] */
  public function getPushFiles()
  {
    return $this->pushFiles;
  }
}

class IosVersion extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var int */
  public $majorVersion;
  /** @var int */
  public $minorVersion;
  /** @var string[] */
  public $supportedXcodeVersionIds;
  /** @var string[] */
  public $tags;
  protected $collection_key = 'tags';
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
  /** @param int */
  public function setMajorVersion($majorVersion)
  {
    $this->majorVersion = $majorVersion;
  }
  /** @return int */
  public function getMajorVersion()
  {
    return $this->majorVersion;
  }
  /** @param int */
  public function setMinorVersion($minorVersion)
  {
    $this->minorVersion = $minorVersion;
  }
  /** @return int */
  public function getMinorVersion()
  {
    return $this->minorVersion;
  }
  /** @param string[] */
  public function setSupportedXcodeVersionIds($supportedXcodeVersionIds)
  {
    $this->supportedXcodeVersionIds = $supportedXcodeVersionIds;
  }
  /** @return string[] */
  public function getSupportedXcodeVersionIds()
  {
    return $this->supportedXcodeVersionIds;
  }
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
}

class IosXcTest extends \Google\Model
{
  /** @var string */
  public $appBundleId;
  /** @var bool */
  public $testSpecialEntitlements;
  /** @var FileReference */
  public $testsZip;
  /** @var string */
  public $xcodeVersion;
  /** @var FileReference */
  public $xctestrun;
  protected $testsZipType = FileReference::class;
  protected $testsZipDataType = '';
  protected $xctestrunType = FileReference::class;
  protected $xctestrunDataType = '';
  /** @param string */
  public function setAppBundleId($appBundleId)
  {
    $this->appBundleId = $appBundleId;
  }
  /** @return string */
  public function getAppBundleId()
  {
    return $this->appBundleId;
  }
  /** @param bool */
  public function setTestSpecialEntitlements($testSpecialEntitlements)
  {
    $this->testSpecialEntitlements = $testSpecialEntitlements;
  }
  /** @return bool */
  public function getTestSpecialEntitlements()
  {
    return $this->testSpecialEntitlements;
  }
  /** @param FileReference */
  public function setTestsZip(FileReference $testsZip)
  {
    $this->testsZip = $testsZip;
  }
  /** @return FileReference */
  public function getTestsZip()
  {
    return $this->testsZip;
  }
  /** @param string */
  public function setXcodeVersion($xcodeVersion)
  {
    $this->xcodeVersion = $xcodeVersion;
  }
  /** @return string */
  public function getXcodeVersion()
  {
    return $this->xcodeVersion;
  }
  /** @param FileReference */
  public function setXctestrun(FileReference $xctestrun)
  {
    $this->xctestrun = $xctestrun;
  }
  /** @return FileReference */
  public function getXctestrun()
  {
    return $this->xctestrun;
  }
}

class LauncherActivityIntent extends \Google\Model
{
}

class Locale extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $region;
  /** @var string[] */
  public $tags;
  protected $collection_key = 'tags';
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
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
}

class ManualSharding extends \Google\Collection
{
  /** @var TestTargetsForShard[] */
  public $testTargetsForShard;
  protected $collection_key = 'testTargetsForShard';
  protected $testTargetsForShardType = TestTargetsForShard::class;
  protected $testTargetsForShardDataType = 'array';
  /** @param TestTargetsForShard[] */
  public function setTestTargetsForShard($testTargetsForShard)
  {
    $this->testTargetsForShard = $testTargetsForShard;
  }
  /** @return TestTargetsForShard[] */
  public function getTestTargetsForShard()
  {
    return $this->testTargetsForShard;
  }
}

class Metadata extends \Google\Model
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

class NetworkConfiguration extends \Google\Model
{
  /** @var TrafficRule */
  public $downRule;
  /** @var string */
  public $id;
  /** @var TrafficRule */
  public $upRule;
  protected $downRuleType = TrafficRule::class;
  protected $downRuleDataType = '';
  protected $upRuleType = TrafficRule::class;
  protected $upRuleDataType = '';
  /** @param TrafficRule */
  public function setDownRule(TrafficRule $downRule)
  {
    $this->downRule = $downRule;
  }
  /** @return TrafficRule */
  public function getDownRule()
  {
    return $this->downRule;
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
  /** @param TrafficRule */
  public function setUpRule(TrafficRule $upRule)
  {
    $this->upRule = $upRule;
  }
  /** @return TrafficRule */
  public function getUpRule()
  {
    return $this->upRule;
  }
}

class NetworkConfigurationCatalog extends \Google\Collection
{
  /** @var NetworkConfiguration[] */
  public $configurations;
  protected $collection_key = 'configurations';
  protected $configurationsType = NetworkConfiguration::class;
  protected $configurationsDataType = 'array';
  /** @param NetworkConfiguration[] */
  public function setConfigurations($configurations)
  {
    $this->configurations = $configurations;
  }
  /** @return NetworkConfiguration[] */
  public function getConfigurations()
  {
    return $this->configurations;
  }
}

class ObbFile extends \Google\Model
{
  /** @var FileReference */
  public $obb;
  /** @var string */
  public $obbFileName;
  protected $obbType = FileReference::class;
  protected $obbDataType = '';
  /** @param FileReference */
  public function setObb(FileReference $obb)
  {
    $this->obb = $obb;
  }
  /** @return FileReference */
  public function getObb()
  {
    return $this->obb;
  }
  /** @param string */
  public function setObbFileName($obbFileName)
  {
    $this->obbFileName = $obbFileName;
  }
  /** @return string */
  public function getObbFileName()
  {
    return $this->obbFileName;
  }
}

class Orientation extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string[] */
  public $tags;
  protected $collection_key = 'tags';
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
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
}

class ProvidedSoftwareCatalog extends \Google\Model
{
  /** @var string */
  public $androidxOrchestratorVersion;
  /** @var string */
  public $orchestratorVersion;

  /** @param string */
  public function setAndroidxOrchestratorVersion($androidxOrchestratorVersion)
  {
    $this->androidxOrchestratorVersion = $androidxOrchestratorVersion;
  }
  /** @return string */
  public function getAndroidxOrchestratorVersion()
  {
    return $this->androidxOrchestratorVersion;
  }
  /** @param string */
  public function setOrchestratorVersion($orchestratorVersion)
  {
    $this->orchestratorVersion = $orchestratorVersion;
  }
  /** @return string */
  public function getOrchestratorVersion()
  {
    return $this->orchestratorVersion;
  }
}

class RegularFile extends \Google\Model
{
  /** @var FileReference */
  public $content;
  /** @var string */
  public $devicePath;
  protected $contentType = FileReference::class;
  protected $contentDataType = '';
  /** @param FileReference */
  public function setContent(FileReference $content)
  {
    $this->content = $content;
  }
  /** @return FileReference */
  public function getContent()
  {
    return $this->content;
  }
  /** @param string */
  public function setDevicePath($devicePath)
  {
    $this->devicePath = $devicePath;
  }
  /** @return string */
  public function getDevicePath()
  {
    return $this->devicePath;
  }
}

class ResultStorage extends \Google\Model
{
  /** @var GoogleCloudStorage */
  public $googleCloudStorage;
  /** @var string */
  public $resultsUrl;
  /** @var ToolResultsExecution */
  public $toolResultsExecution;
  /** @var ToolResultsHistory */
  public $toolResultsHistory;
  protected $googleCloudStorageType = GoogleCloudStorage::class;
  protected $googleCloudStorageDataType = '';
  protected $toolResultsExecutionType = ToolResultsExecution::class;
  protected $toolResultsExecutionDataType = '';
  protected $toolResultsHistoryType = ToolResultsHistory::class;
  protected $toolResultsHistoryDataType = '';
  /** @param GoogleCloudStorage */
  public function setGoogleCloudStorage(GoogleCloudStorage $googleCloudStorage)
  {
    $this->googleCloudStorage = $googleCloudStorage;
  }
  /** @return GoogleCloudStorage */
  public function getGoogleCloudStorage()
  {
    return $this->googleCloudStorage;
  }
  /** @param string */
  public function setResultsUrl($resultsUrl)
  {
    $this->resultsUrl = $resultsUrl;
  }
  /** @return string */
  public function getResultsUrl()
  {
    return $this->resultsUrl;
  }
  /** @param ToolResultsExecution */
  public function setToolResultsExecution(ToolResultsExecution $toolResultsExecution)
  {
    $this->toolResultsExecution = $toolResultsExecution;
  }
  /** @return ToolResultsExecution */
  public function getToolResultsExecution()
  {
    return $this->toolResultsExecution;
  }
  /** @param ToolResultsHistory */
  public function setToolResultsHistory(ToolResultsHistory $toolResultsHistory)
  {
    $this->toolResultsHistory = $toolResultsHistory;
  }
  /** @return ToolResultsHistory */
  public function getToolResultsHistory()
  {
    return $this->toolResultsHistory;
  }
}

class RoboDirective extends \Google\Model
{
  /** @var string */
  public $actionType;
  /** @var string */
  public $inputText;
  /** @var string */
  public $resourceName;

  /** @param string */
  public function setActionType($actionType)
  {
    $this->actionType = $actionType;
  }
  /** @return string */
  public function getActionType()
  {
    return $this->actionType;
  }
  /** @param string */
  public function setInputText($inputText)
  {
    $this->inputText = $inputText;
  }
  /** @return string */
  public function getInputText()
  {
    return $this->inputText;
  }
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

class RoboStartingIntent extends \Google\Model
{
  /** @var LauncherActivityIntent */
  public $launcherActivity;
  /** @var StartActivityIntent */
  public $startActivity;
  /** @var string */
  public $timeout;
  protected $launcherActivityType = LauncherActivityIntent::class;
  protected $launcherActivityDataType = '';
  protected $startActivityType = StartActivityIntent::class;
  protected $startActivityDataType = '';
  /** @param LauncherActivityIntent */
  public function setLauncherActivity(LauncherActivityIntent $launcherActivity)
  {
    $this->launcherActivity = $launcherActivity;
  }
  /** @return LauncherActivityIntent */
  public function getLauncherActivity()
  {
    return $this->launcherActivity;
  }
  /** @param StartActivityIntent */
  public function setStartActivity(StartActivityIntent $startActivity)
  {
    $this->startActivity = $startActivity;
  }
  /** @return StartActivityIntent */
  public function getStartActivity()
  {
    return $this->startActivity;
  }
  /** @param string */
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
  }
}

class Shard extends \Google\Model
{
  /** @var int */
  public $numShards;
  /** @var int */
  public $shardIndex;
  /** @var TestTargetsForShard */
  public $testTargetsForShard;
  protected $testTargetsForShardType = TestTargetsForShard::class;
  protected $testTargetsForShardDataType = '';
  /** @param int */
  public function setNumShards($numShards)
  {
    $this->numShards = $numShards;
  }
  /** @return int */
  public function getNumShards()
  {
    return $this->numShards;
  }
  /** @param int */
  public function setShardIndex($shardIndex)
  {
    $this->shardIndex = $shardIndex;
  }
  /** @return int */
  public function getShardIndex()
  {
    return $this->shardIndex;
  }
  /** @param TestTargetsForShard */
  public function setTestTargetsForShard(TestTargetsForShard $testTargetsForShard)
  {
    $this->testTargetsForShard = $testTargetsForShard;
  }
  /** @return TestTargetsForShard */
  public function getTestTargetsForShard()
  {
    return $this->testTargetsForShard;
  }
}

class ShardingOption extends \Google\Model
{
  /** @var ManualSharding */
  public $manualSharding;
  /** @var UniformSharding */
  public $uniformSharding;
  protected $manualShardingType = ManualSharding::class;
  protected $manualShardingDataType = '';
  protected $uniformShardingType = UniformSharding::class;
  protected $uniformShardingDataType = '';
  /** @param ManualSharding */
  public function setManualSharding(ManualSharding $manualSharding)
  {
    $this->manualSharding = $manualSharding;
  }
  /** @return ManualSharding */
  public function getManualSharding()
  {
    return $this->manualSharding;
  }
  /** @param UniformSharding */
  public function setUniformSharding(UniformSharding $uniformSharding)
  {
    $this->uniformSharding = $uniformSharding;
  }
  /** @return UniformSharding */
  public function getUniformSharding()
  {
    return $this->uniformSharding;
  }
}

class StartActivityIntent extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var string[] */
  public $categories;
  /** @var string */
  public $uri;
  protected $collection_key = 'categories';
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

class SystraceSetup extends \Google\Model
{
  /** @var int */
  public $durationSeconds;

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
}

class TestDetails extends \Google\Collection
{
  /** @var string */
  public $errorMessage;
  /** @var string[] */
  public $progressMessages;
  protected $collection_key = 'progressMessages';
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
  /** @param string[] */
  public function setProgressMessages($progressMessages)
  {
    $this->progressMessages = $progressMessages;
  }
  /** @return string[] */
  public function getProgressMessages()
  {
    return $this->progressMessages;
  }
}

class TestEnvironmentCatalog extends \Google\Model
{
  /** @var AndroidDeviceCatalog */
  public $androidDeviceCatalog;
  /** @var DeviceIpBlockCatalog */
  public $deviceIpBlockCatalog;
  /** @var IosDeviceCatalog */
  public $iosDeviceCatalog;
  /** @var NetworkConfigurationCatalog */
  public $networkConfigurationCatalog;
  /** @var ProvidedSoftwareCatalog */
  public $softwareCatalog;
  protected $androidDeviceCatalogType = AndroidDeviceCatalog::class;
  protected $androidDeviceCatalogDataType = '';
  protected $deviceIpBlockCatalogType = DeviceIpBlockCatalog::class;
  protected $deviceIpBlockCatalogDataType = '';
  protected $iosDeviceCatalogType = IosDeviceCatalog::class;
  protected $iosDeviceCatalogDataType = '';
  protected $networkConfigurationCatalogType = NetworkConfigurationCatalog::class;
  protected $networkConfigurationCatalogDataType = '';
  protected $softwareCatalogType = ProvidedSoftwareCatalog::class;
  protected $softwareCatalogDataType = '';
  /** @param AndroidDeviceCatalog */
  public function setAndroidDeviceCatalog(AndroidDeviceCatalog $androidDeviceCatalog)
  {
    $this->androidDeviceCatalog = $androidDeviceCatalog;
  }
  /** @return AndroidDeviceCatalog */
  public function getAndroidDeviceCatalog()
  {
    return $this->androidDeviceCatalog;
  }
  /** @param DeviceIpBlockCatalog */
  public function setDeviceIpBlockCatalog(DeviceIpBlockCatalog $deviceIpBlockCatalog)
  {
    $this->deviceIpBlockCatalog = $deviceIpBlockCatalog;
  }
  /** @return DeviceIpBlockCatalog */
  public function getDeviceIpBlockCatalog()
  {
    return $this->deviceIpBlockCatalog;
  }
  /** @param IosDeviceCatalog */
  public function setIosDeviceCatalog(IosDeviceCatalog $iosDeviceCatalog)
  {
    $this->iosDeviceCatalog = $iosDeviceCatalog;
  }
  /** @return IosDeviceCatalog */
  public function getIosDeviceCatalog()
  {
    return $this->iosDeviceCatalog;
  }
  /** @param NetworkConfigurationCatalog */
  public function setNetworkConfigurationCatalog(NetworkConfigurationCatalog $networkConfigurationCatalog)
  {
    $this->networkConfigurationCatalog = $networkConfigurationCatalog;
  }
  /** @return NetworkConfigurationCatalog */
  public function getNetworkConfigurationCatalog()
  {
    return $this->networkConfigurationCatalog;
  }
  /** @param ProvidedSoftwareCatalog */
  public function setSoftwareCatalog(ProvidedSoftwareCatalog $softwareCatalog)
  {
    $this->softwareCatalog = $softwareCatalog;
  }
  /** @return ProvidedSoftwareCatalog */
  public function getSoftwareCatalog()
  {
    return $this->softwareCatalog;
  }
}

class TestExecution extends \Google\Model
{
  /** @var Environment */
  public $environment;
  /** @var string */
  public $id;
  /** @var string */
  public $matrixId;
  /** @var string */
  public $projectId;
  /** @var Shard */
  public $shard;
  /** @var string */
  public $state;
  /** @var TestDetails */
  public $testDetails;
  /** @var TestSpecification */
  public $testSpecification;
  /** @var string */
  public $timestamp;
  /** @var ToolResultsStep */
  public $toolResultsStep;
  protected $environmentType = Environment::class;
  protected $environmentDataType = '';
  protected $shardType = Shard::class;
  protected $shardDataType = '';
  protected $testDetailsType = TestDetails::class;
  protected $testDetailsDataType = '';
  protected $testSpecificationType = TestSpecification::class;
  protected $testSpecificationDataType = '';
  protected $toolResultsStepType = ToolResultsStep::class;
  protected $toolResultsStepDataType = '';
  /** @param Environment */
  public function setEnvironment(Environment $environment)
  {
    $this->environment = $environment;
  }
  /** @return Environment */
  public function getEnvironment()
  {
    return $this->environment;
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
  public function setMatrixId($matrixId)
  {
    $this->matrixId = $matrixId;
  }
  /** @return string */
  public function getMatrixId()
  {
    return $this->matrixId;
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
  /** @param Shard */
  public function setShard(Shard $shard)
  {
    $this->shard = $shard;
  }
  /** @return Shard */
  public function getShard()
  {
    return $this->shard;
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
  /** @param TestDetails */
  public function setTestDetails(TestDetails $testDetails)
  {
    $this->testDetails = $testDetails;
  }
  /** @return TestDetails */
  public function getTestDetails()
  {
    return $this->testDetails;
  }
  /** @param TestSpecification */
  public function setTestSpecification(TestSpecification $testSpecification)
  {
    $this->testSpecification = $testSpecification;
  }
  /** @return TestSpecification */
  public function getTestSpecification()
  {
    return $this->testSpecification;
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
  /** @param ToolResultsStep */
  public function setToolResultsStep(ToolResultsStep $toolResultsStep)
  {
    $this->toolResultsStep = $toolResultsStep;
  }
  /** @return ToolResultsStep */
  public function getToolResultsStep()
  {
    return $this->toolResultsStep;
  }
}

class TestMatrix extends \Google\Collection
{
  /** @var ClientInfo */
  public $clientInfo;
  /** @var EnvironmentMatrix */
  public $environmentMatrix;
  /** @var bool */
  public $failFast;
  /** @var int */
  public $flakyTestAttempts;
  /** @var string */
  public $invalidMatrixDetails;
  /** @var string */
  public $outcomeSummary;
  /** @var string */
  public $projectId;
  /** @var ResultStorage */
  public $resultStorage;
  /** @var string */
  public $state;
  /** @var TestExecution[] */
  public $testExecutions;
  /** @var string */
  public $testMatrixId;
  /** @var TestSpecification */
  public $testSpecification;
  /** @var string */
  public $timestamp;
  protected $collection_key = 'testExecutions';
  protected $clientInfoType = ClientInfo::class;
  protected $clientInfoDataType = '';
  protected $environmentMatrixType = EnvironmentMatrix::class;
  protected $environmentMatrixDataType = '';
  protected $resultStorageType = ResultStorage::class;
  protected $resultStorageDataType = '';
  protected $testExecutionsType = TestExecution::class;
  protected $testExecutionsDataType = 'array';
  protected $testSpecificationType = TestSpecification::class;
  protected $testSpecificationDataType = '';
  /** @param ClientInfo */
  public function setClientInfo(ClientInfo $clientInfo)
  {
    $this->clientInfo = $clientInfo;
  }
  /** @return ClientInfo */
  public function getClientInfo()
  {
    return $this->clientInfo;
  }
  /** @param EnvironmentMatrix */
  public function setEnvironmentMatrix(EnvironmentMatrix $environmentMatrix)
  {
    $this->environmentMatrix = $environmentMatrix;
  }
  /** @return EnvironmentMatrix */
  public function getEnvironmentMatrix()
  {
    return $this->environmentMatrix;
  }
  /** @param bool */
  public function setFailFast($failFast)
  {
    $this->failFast = $failFast;
  }
  /** @return bool */
  public function getFailFast()
  {
    return $this->failFast;
  }
  /** @param int */
  public function setFlakyTestAttempts($flakyTestAttempts)
  {
    $this->flakyTestAttempts = $flakyTestAttempts;
  }
  /** @return int */
  public function getFlakyTestAttempts()
  {
    return $this->flakyTestAttempts;
  }
  /** @param string */
  public function setInvalidMatrixDetails($invalidMatrixDetails)
  {
    $this->invalidMatrixDetails = $invalidMatrixDetails;
  }
  /** @return string */
  public function getInvalidMatrixDetails()
  {
    return $this->invalidMatrixDetails;
  }
  /** @param string */
  public function setOutcomeSummary($outcomeSummary)
  {
    $this->outcomeSummary = $outcomeSummary;
  }
  /** @return string */
  public function getOutcomeSummary()
  {
    return $this->outcomeSummary;
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
  /** @param ResultStorage */
  public function setResultStorage(ResultStorage $resultStorage)
  {
    $this->resultStorage = $resultStorage;
  }
  /** @return ResultStorage */
  public function getResultStorage()
  {
    return $this->resultStorage;
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
  /** @param TestExecution[] */
  public function setTestExecutions($testExecutions)
  {
    $this->testExecutions = $testExecutions;
  }
  /** @return TestExecution[] */
  public function getTestExecutions()
  {
    return $this->testExecutions;
  }
  /** @param string */
  public function setTestMatrixId($testMatrixId)
  {
    $this->testMatrixId = $testMatrixId;
  }
  /** @return string */
  public function getTestMatrixId()
  {
    return $this->testMatrixId;
  }
  /** @param TestSpecification */
  public function setTestSpecification(TestSpecification $testSpecification)
  {
    $this->testSpecification = $testSpecification;
  }
  /** @return TestSpecification */
  public function getTestSpecification()
  {
    return $this->testSpecification;
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

class TestSetup extends \Google\Collection
{
  /** @var Account */
  public $account;
  /** @var Apk[] */
  public $additionalApks;
  /** @var string[] */
  public $directoriesToPull;
  /** @var bool */
  public $dontAutograntPermissions;
  /** @var EnvironmentVariable[] */
  public $environmentVariables;
  /** @var DeviceFile[] */
  public $filesToPush;
  /** @var string */
  public $networkProfile;
  /** @var SystraceSetup */
  public $systrace;
  protected $collection_key = 'filesToPush';
  protected $accountType = Account::class;
  protected $accountDataType = '';
  protected $additionalApksType = Apk::class;
  protected $additionalApksDataType = 'array';
  protected $environmentVariablesType = EnvironmentVariable::class;
  protected $environmentVariablesDataType = 'array';
  protected $filesToPushType = DeviceFile::class;
  protected $filesToPushDataType = 'array';
  protected $systraceType = SystraceSetup::class;
  protected $systraceDataType = '';
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
  /** @param Apk[] */
  public function setAdditionalApks($additionalApks)
  {
    $this->additionalApks = $additionalApks;
  }
  /** @return Apk[] */
  public function getAdditionalApks()
  {
    return $this->additionalApks;
  }
  /** @param string[] */
  public function setDirectoriesToPull($directoriesToPull)
  {
    $this->directoriesToPull = $directoriesToPull;
  }
  /** @return string[] */
  public function getDirectoriesToPull()
  {
    return $this->directoriesToPull;
  }
  /** @param bool */
  public function setDontAutograntPermissions($dontAutograntPermissions)
  {
    $this->dontAutograntPermissions = $dontAutograntPermissions;
  }
  /** @return bool */
  public function getDontAutograntPermissions()
  {
    return $this->dontAutograntPermissions;
  }
  /** @param EnvironmentVariable[] */
  public function setEnvironmentVariables($environmentVariables)
  {
    $this->environmentVariables = $environmentVariables;
  }
  /** @return EnvironmentVariable[] */
  public function getEnvironmentVariables()
  {
    return $this->environmentVariables;
  }
  /** @param DeviceFile[] */
  public function setFilesToPush($filesToPush)
  {
    $this->filesToPush = $filesToPush;
  }
  /** @return DeviceFile[] */
  public function getFilesToPush()
  {
    return $this->filesToPush;
  }
  /** @param string */
  public function setNetworkProfile($networkProfile)
  {
    $this->networkProfile = $networkProfile;
  }
  /** @return string */
  public function getNetworkProfile()
  {
    return $this->networkProfile;
  }
  /** @param SystraceSetup */
  public function setSystrace(SystraceSetup $systrace)
  {
    $this->systrace = $systrace;
  }
  /** @return SystraceSetup */
  public function getSystrace()
  {
    return $this->systrace;
  }
}

class TestSpecification extends \Google\Model
{
  /** @var AndroidInstrumentationTest */
  public $androidInstrumentationTest;
  /** @var AndroidRoboTest */
  public $androidRoboTest;
  /** @var AndroidTestLoop */
  public $androidTestLoop;
  /** @var bool */
  public $disablePerformanceMetrics;
  /** @var bool */
  public $disableVideoRecording;
  /** @var IosTestLoop */
  public $iosTestLoop;
  /** @var IosTestSetup */
  public $iosTestSetup;
  /** @var IosXcTest */
  public $iosXcTest;
  /** @var TestSetup */
  public $testSetup;
  /** @var string */
  public $testTimeout;
  protected $androidInstrumentationTestType = AndroidInstrumentationTest::class;
  protected $androidInstrumentationTestDataType = '';
  protected $androidRoboTestType = AndroidRoboTest::class;
  protected $androidRoboTestDataType = '';
  protected $androidTestLoopType = AndroidTestLoop::class;
  protected $androidTestLoopDataType = '';
  protected $iosTestLoopType = IosTestLoop::class;
  protected $iosTestLoopDataType = '';
  protected $iosTestSetupType = IosTestSetup::class;
  protected $iosTestSetupDataType = '';
  protected $iosXcTestType = IosXcTest::class;
  protected $iosXcTestDataType = '';
  protected $testSetupType = TestSetup::class;
  protected $testSetupDataType = '';
  /** @param AndroidInstrumentationTest */
  public function setAndroidInstrumentationTest(AndroidInstrumentationTest $androidInstrumentationTest)
  {
    $this->androidInstrumentationTest = $androidInstrumentationTest;
  }
  /** @return AndroidInstrumentationTest */
  public function getAndroidInstrumentationTest()
  {
    return $this->androidInstrumentationTest;
  }
  /** @param AndroidRoboTest */
  public function setAndroidRoboTest(AndroidRoboTest $androidRoboTest)
  {
    $this->androidRoboTest = $androidRoboTest;
  }
  /** @return AndroidRoboTest */
  public function getAndroidRoboTest()
  {
    return $this->androidRoboTest;
  }
  /** @param AndroidTestLoop */
  public function setAndroidTestLoop(AndroidTestLoop $androidTestLoop)
  {
    $this->androidTestLoop = $androidTestLoop;
  }
  /** @return AndroidTestLoop */
  public function getAndroidTestLoop()
  {
    return $this->androidTestLoop;
  }
  /** @param bool */
  public function setDisablePerformanceMetrics($disablePerformanceMetrics)
  {
    $this->disablePerformanceMetrics = $disablePerformanceMetrics;
  }
  /** @return bool */
  public function getDisablePerformanceMetrics()
  {
    return $this->disablePerformanceMetrics;
  }
  /** @param bool */
  public function setDisableVideoRecording($disableVideoRecording)
  {
    $this->disableVideoRecording = $disableVideoRecording;
  }
  /** @return bool */
  public function getDisableVideoRecording()
  {
    return $this->disableVideoRecording;
  }
  /** @param IosTestLoop */
  public function setIosTestLoop(IosTestLoop $iosTestLoop)
  {
    $this->iosTestLoop = $iosTestLoop;
  }
  /** @return IosTestLoop */
  public function getIosTestLoop()
  {
    return $this->iosTestLoop;
  }
  /** @param IosTestSetup */
  public function setIosTestSetup(IosTestSetup $iosTestSetup)
  {
    $this->iosTestSetup = $iosTestSetup;
  }
  /** @return IosTestSetup */
  public function getIosTestSetup()
  {
    return $this->iosTestSetup;
  }
  /** @param IosXcTest */
  public function setIosXcTest(IosXcTest $iosXcTest)
  {
    $this->iosXcTest = $iosXcTest;
  }
  /** @return IosXcTest */
  public function getIosXcTest()
  {
    return $this->iosXcTest;
  }
  /** @param TestSetup */
  public function setTestSetup(TestSetup $testSetup)
  {
    $this->testSetup = $testSetup;
  }
  /** @return TestSetup */
  public function getTestSetup()
  {
    return $this->testSetup;
  }
  /** @param string */
  public function setTestTimeout($testTimeout)
  {
    $this->testTimeout = $testTimeout;
  }
  /** @return string */
  public function getTestTimeout()
  {
    return $this->testTimeout;
  }
}

class TestTargetsForShard extends \Google\Collection
{
  /** @var string[] */
  public $testTargets;
  protected $collection_key = 'testTargets';
  /** @param string[] */
  public function setTestTargets($testTargets)
  {
    $this->testTargets = $testTargets;
  }
  /** @return string[] */
  public function getTestTargets()
  {
    return $this->testTargets;
  }
}

class ToolResultsExecution extends \Google\Model
{
  /** @var string */
  public $executionId;
  /** @var string */
  public $historyId;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /** @return string */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
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
}

class ToolResultsHistory extends \Google\Model
{
  /** @var string */
  public $historyId;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
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
}

class ToolResultsStep extends \Google\Model
{
  /** @var string */
  public $executionId;
  /** @var string */
  public $historyId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $stepId;

  /** @param string */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /** @return string */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
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
  public function setStepId($stepId)
  {
    $this->stepId = $stepId;
  }
  /** @return string */
  public function getStepId()
  {
    return $this->stepId;
  }
}

class TrafficRule extends \Google\Model
{
  /** @var float */
  public $bandwidth;
  /** @var float */
  public $burst;
  /** @var string */
  public $delay;
  /** @var float */
  public $packetDuplicationRatio;
  /** @var float */
  public $packetLossRatio;

  /** @param float */
  public function setBandwidth($bandwidth)
  {
    $this->bandwidth = $bandwidth;
  }
  /** @return float */
  public function getBandwidth()
  {
    return $this->bandwidth;
  }
  /** @param float */
  public function setBurst($burst)
  {
    $this->burst = $burst;
  }
  /** @return float */
  public function getBurst()
  {
    return $this->burst;
  }
  /** @param string */
  public function setDelay($delay)
  {
    $this->delay = $delay;
  }
  /** @return string */
  public function getDelay()
  {
    return $this->delay;
  }
  /** @param float */
  public function setPacketDuplicationRatio($packetDuplicationRatio)
  {
    $this->packetDuplicationRatio = $packetDuplicationRatio;
  }
  /** @return float */
  public function getPacketDuplicationRatio()
  {
    return $this->packetDuplicationRatio;
  }
  /** @param float */
  public function setPacketLossRatio($packetLossRatio)
  {
    $this->packetLossRatio = $packetLossRatio;
  }
  /** @return float */
  public function getPacketLossRatio()
  {
    return $this->packetLossRatio;
  }
}

class UniformSharding extends \Google\Model
{
  /** @var int */
  public $numShards;

  /** @param int */
  public function setNumShards($numShards)
  {
    $this->numShards = $numShards;
  }
  /** @return int */
  public function getNumShards()
  {
    return $this->numShards;
  }
}

class UsesFeature extends \Google\Model
{
  /** @var bool */
  public $isRequired;
  /** @var string */
  public $name;

  /** @param bool */
  public function setIsRequired($isRequired)
  {
    $this->isRequired = $isRequired;
  }
  /** @return bool */
  public function getIsRequired()
  {
    return $this->isRequired;
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

class XcodeVersion extends \Google\Collection
{
  /** @var string[] */
  public $tags;
  /** @var string */
  public $version;
  protected $collection_key = 'tags';
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
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
class_alias(Account::class, 'Google_Service_Testing_Account');
class_alias(AndroidDevice::class, 'Google_Service_Testing_AndroidDevice');
class_alias(AndroidDeviceCatalog::class, 'Google_Service_Testing_AndroidDeviceCatalog');
class_alias(AndroidDeviceList::class, 'Google_Service_Testing_AndroidDeviceList');
class_alias(AndroidInstrumentationTest::class, 'Google_Service_Testing_AndroidInstrumentationTest');
class_alias(AndroidMatrix::class, 'Google_Service_Testing_AndroidMatrix');
class_alias(AndroidModel::class, 'Google_Service_Testing_AndroidModel');
class_alias(AndroidRoboTest::class, 'Google_Service_Testing_AndroidRoboTest');
class_alias(AndroidRuntimeConfiguration::class, 'Google_Service_Testing_AndroidRuntimeConfiguration');
class_alias(AndroidTestLoop::class, 'Google_Service_Testing_AndroidTestLoop');
class_alias(AndroidVersion::class, 'Google_Service_Testing_AndroidVersion');
class_alias(Apk::class, 'Google_Service_Testing_Apk');
class_alias(ApkDetail::class, 'Google_Service_Testing_ApkDetail');
class_alias(ApkManifest::class, 'Google_Service_Testing_ApkManifest');
class_alias(AppBundle::class, 'Google_Service_Testing_AppBundle');
class_alias(CancelTestMatrixResponse::class, 'Google_Service_Testing_CancelTestMatrixResponse');
class_alias(ClientInfo::class, 'Google_Service_Testing_ClientInfo');
class_alias(ClientInfoDetail::class, 'Google_Service_Testing_ClientInfoDetail');
class_alias(Date::class, 'Google_Service_Testing_Date');
class_alias(DeviceFile::class, 'Google_Service_Testing_DeviceFile');
class_alias(DeviceIpBlock::class, 'Google_Service_Testing_DeviceIpBlock');
class_alias(DeviceIpBlockCatalog::class, 'Google_Service_Testing_DeviceIpBlockCatalog');
class_alias(Distribution::class, 'Google_Service_Testing_Distribution');
class_alias(Environment::class, 'Google_Service_Testing_Environment');
class_alias(EnvironmentMatrix::class, 'Google_Service_Testing_EnvironmentMatrix');
class_alias(EnvironmentVariable::class, 'Google_Service_Testing_EnvironmentVariable');
class_alias(FileReference::class, 'Google_Service_Testing_FileReference');
class_alias(GetApkDetailsResponse::class, 'Google_Service_Testing_GetApkDetailsResponse');
class_alias(GoogleAuto::class, 'Google_Service_Testing_GoogleAuto');
class_alias(GoogleCloudStorage::class, 'Google_Service_Testing_GoogleCloudStorage');
class_alias(IntentFilter::class, 'Google_Service_Testing_IntentFilter');
class_alias(IosDevice::class, 'Google_Service_Testing_IosDevice');
class_alias(IosDeviceCatalog::class, 'Google_Service_Testing_IosDeviceCatalog');
class_alias(IosDeviceFile::class, 'Google_Service_Testing_IosDeviceFile');
class_alias(IosDeviceList::class, 'Google_Service_Testing_IosDeviceList');
class_alias(IosModel::class, 'Google_Service_Testing_IosModel');
class_alias(IosRuntimeConfiguration::class, 'Google_Service_Testing_IosRuntimeConfiguration');
class_alias(IosTestLoop::class, 'Google_Service_Testing_IosTestLoop');
class_alias(IosTestSetup::class, 'Google_Service_Testing_IosTestSetup');
class_alias(IosVersion::class, 'Google_Service_Testing_IosVersion');
class_alias(IosXcTest::class, 'Google_Service_Testing_IosXcTest');
class_alias(LauncherActivityIntent::class, 'Google_Service_Testing_LauncherActivityIntent');
class_alias(Locale::class, 'Google_Service_Testing_Locale');
class_alias(ManualSharding::class, 'Google_Service_Testing_ManualSharding');
class_alias(Metadata::class, 'Google_Service_Testing_Metadata');
class_alias(NetworkConfiguration::class, 'Google_Service_Testing_NetworkConfiguration');
class_alias(NetworkConfigurationCatalog::class, 'Google_Service_Testing_NetworkConfigurationCatalog');
class_alias(ObbFile::class, 'Google_Service_Testing_ObbFile');
class_alias(Orientation::class, 'Google_Service_Testing_Orientation');
class_alias(ProvidedSoftwareCatalog::class, 'Google_Service_Testing_ProvidedSoftwareCatalog');
class_alias(RegularFile::class, 'Google_Service_Testing_RegularFile');
class_alias(ResultStorage::class, 'Google_Service_Testing_ResultStorage');
class_alias(RoboDirective::class, 'Google_Service_Testing_RoboDirective');
class_alias(RoboStartingIntent::class, 'Google_Service_Testing_RoboStartingIntent');
class_alias(Shard::class, 'Google_Service_Testing_Shard');
class_alias(ShardingOption::class, 'Google_Service_Testing_ShardingOption');
class_alias(StartActivityIntent::class, 'Google_Service_Testing_StartActivityIntent');
class_alias(SystraceSetup::class, 'Google_Service_Testing_SystraceSetup');
class_alias(TestDetails::class, 'Google_Service_Testing_TestDetails');
class_alias(TestEnvironmentCatalog::class, 'Google_Service_Testing_TestEnvironmentCatalog');
class_alias(TestExecution::class, 'Google_Service_Testing_TestExecution');
class_alias(TestMatrix::class, 'Google_Service_Testing_TestMatrix');
class_alias(TestSetup::class, 'Google_Service_Testing_TestSetup');
class_alias(TestSpecification::class, 'Google_Service_Testing_TestSpecification');
class_alias(TestTargetsForShard::class, 'Google_Service_Testing_TestTargetsForShard');
class_alias(ToolResultsExecution::class, 'Google_Service_Testing_ToolResultsExecution');
class_alias(ToolResultsHistory::class, 'Google_Service_Testing_ToolResultsHistory');
class_alias(ToolResultsStep::class, 'Google_Service_Testing_ToolResultsStep');
class_alias(TrafficRule::class, 'Google_Service_Testing_TrafficRule');
class_alias(UniformSharding::class, 'Google_Service_Testing_UniformSharding');
class_alias(UsesFeature::class, 'Google_Service_Testing_UsesFeature');
class_alias(XcodeVersion::class, 'Google_Service_Testing_XcodeVersion');
