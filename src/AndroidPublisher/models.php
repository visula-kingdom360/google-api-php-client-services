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

namespace Google\Service\AndroidPublisher;

class AcquisitionTargetingRule extends \Google\Model
{
  /** @var TargetingRuleScope */
  public $scope;
  protected $scopeType = TargetingRuleScope::class;
  protected $scopeDataType = '';
  /** @param TargetingRuleScope */
  public function setScope(TargetingRuleScope $scope)
  {
    $this->scope = $scope;
  }
  /** @return TargetingRuleScope */
  public function getScope()
  {
    return $this->scope;
  }
}

class ActivateBasePlanRequest extends \Google\Model
{
}

class ActivateSubscriptionOfferRequest extends \Google\Model
{
}

class Apk extends \Google\Model
{
  /** @var ApkBinary */
  public $binary;
  /** @var int */
  public $versionCode;
  protected $binaryType = ApkBinary::class;
  protected $binaryDataType = '';
  /** @param ApkBinary */
  public function setBinary(ApkBinary $binary)
  {
    $this->binary = $binary;
  }
  /** @return ApkBinary */
  public function getBinary()
  {
    return $this->binary;
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
}

class ApkBinary extends \Google\Model
{
  /** @var string */
  public $sha1;
  /** @var string */
  public $sha256;

  /** @param string */
  public function setSha1($sha1)
  {
    $this->sha1 = $sha1;
  }
  /** @return string */
  public function getSha1()
  {
    return $this->sha1;
  }
  /** @param string */
  public function setSha256($sha256)
  {
    $this->sha256 = $sha256;
  }
  /** @return string */
  public function getSha256()
  {
    return $this->sha256;
  }
}

class ApksAddExternallyHostedRequest extends \Google\Model
{
  /** @var ExternallyHostedApk */
  public $externallyHostedApk;
  protected $externallyHostedApkType = ExternallyHostedApk::class;
  protected $externallyHostedApkDataType = '';
  /** @param ExternallyHostedApk */
  public function setExternallyHostedApk(ExternallyHostedApk $externallyHostedApk)
  {
    $this->externallyHostedApk = $externallyHostedApk;
  }
  /** @return ExternallyHostedApk */
  public function getExternallyHostedApk()
  {
    return $this->externallyHostedApk;
  }
}

class ApksAddExternallyHostedResponse extends \Google\Model
{
  /** @var ExternallyHostedApk */
  public $externallyHostedApk;
  protected $externallyHostedApkType = ExternallyHostedApk::class;
  protected $externallyHostedApkDataType = '';
  /** @param ExternallyHostedApk */
  public function setExternallyHostedApk(ExternallyHostedApk $externallyHostedApk)
  {
    $this->externallyHostedApk = $externallyHostedApk;
  }
  /** @return ExternallyHostedApk */
  public function getExternallyHostedApk()
  {
    return $this->externallyHostedApk;
  }
}

class ApksListResponse extends \Google\Collection
{
  /** @var Apk[] */
  public $apks;
  /** @var string */
  public $kind;
  protected $collection_key = 'apks';
  protected $apksType = Apk::class;
  protected $apksDataType = 'array';
  /** @param Apk[] */
  public function setApks($apks)
  {
    $this->apks = $apks;
  }
  /** @return Apk[] */
  public function getApks()
  {
    return $this->apks;
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

class AppDetails extends \Google\Model
{
  /** @var string */
  public $contactEmail;
  /** @var string */
  public $contactPhone;
  /** @var string */
  public $contactWebsite;
  /** @var string */
  public $defaultLanguage;

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
  public function setContactPhone($contactPhone)
  {
    $this->contactPhone = $contactPhone;
  }
  /** @return string */
  public function getContactPhone()
  {
    return $this->contactPhone;
  }
  /** @param string */
  public function setContactWebsite($contactWebsite)
  {
    $this->contactWebsite = $contactWebsite;
  }
  /** @return string */
  public function getContactWebsite()
  {
    return $this->contactWebsite;
  }
  /** @param string */
  public function setDefaultLanguage($defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }
  /** @return string */
  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
  }
}

class AppEdit extends \Google\Model
{
  /** @var string */
  public $expiryTimeSeconds;
  /** @var string */
  public $id;

  /** @param string */
  public function setExpiryTimeSeconds($expiryTimeSeconds)
  {
    $this->expiryTimeSeconds = $expiryTimeSeconds;
  }
  /** @return string */
  public function getExpiryTimeSeconds()
  {
    return $this->expiryTimeSeconds;
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

class ArchiveSubscriptionRequest extends \Google\Model
{
}

class AutoRenewingBasePlanType extends \Google\Model
{
  /** @var string */
  public $billingPeriodDuration;
  /** @var string */
  public $gracePeriodDuration;
  /** @var bool */
  public $legacyCompatible;
  /** @var string */
  public $legacyCompatibleSubscriptionOfferId;
  /** @var string */
  public $prorationMode;
  /** @var string */
  public $resubscribeState;

  /** @param string */
  public function setBillingPeriodDuration($billingPeriodDuration)
  {
    $this->billingPeriodDuration = $billingPeriodDuration;
  }
  /** @return string */
  public function getBillingPeriodDuration()
  {
    return $this->billingPeriodDuration;
  }
  /** @param string */
  public function setGracePeriodDuration($gracePeriodDuration)
  {
    $this->gracePeriodDuration = $gracePeriodDuration;
  }
  /** @return string */
  public function getGracePeriodDuration()
  {
    return $this->gracePeriodDuration;
  }
  /** @param bool */
  public function setLegacyCompatible($legacyCompatible)
  {
    $this->legacyCompatible = $legacyCompatible;
  }
  /** @return bool */
  public function getLegacyCompatible()
  {
    return $this->legacyCompatible;
  }
  /** @param string */
  public function setLegacyCompatibleSubscriptionOfferId($legacyCompatibleSubscriptionOfferId)
  {
    $this->legacyCompatibleSubscriptionOfferId = $legacyCompatibleSubscriptionOfferId;
  }
  /** @return string */
  public function getLegacyCompatibleSubscriptionOfferId()
  {
    return $this->legacyCompatibleSubscriptionOfferId;
  }
  /** @param string */
  public function setProrationMode($prorationMode)
  {
    $this->prorationMode = $prorationMode;
  }
  /** @return string */
  public function getProrationMode()
  {
    return $this->prorationMode;
  }
  /** @param string */
  public function setResubscribeState($resubscribeState)
  {
    $this->resubscribeState = $resubscribeState;
  }
  /** @return string */
  public function getResubscribeState()
  {
    return $this->resubscribeState;
  }
}

class AutoRenewingPlan extends \Google\Model
{
  /** @var bool */
  public $autoRenewEnabled;
  /** @var SubscriptionItemPriceChangeDetails */
  public $priceChangeDetails;
  protected $priceChangeDetailsType = SubscriptionItemPriceChangeDetails::class;
  protected $priceChangeDetailsDataType = '';
  /** @param bool */
  public function setAutoRenewEnabled($autoRenewEnabled)
  {
    $this->autoRenewEnabled = $autoRenewEnabled;
  }
  /** @return bool */
  public function getAutoRenewEnabled()
  {
    return $this->autoRenewEnabled;
  }
  /** @param SubscriptionItemPriceChangeDetails */
  public function setPriceChangeDetails(SubscriptionItemPriceChangeDetails $priceChangeDetails)
  {
    $this->priceChangeDetails = $priceChangeDetails;
  }
  /** @return SubscriptionItemPriceChangeDetails */
  public function getPriceChangeDetails()
  {
    return $this->priceChangeDetails;
  }
}

class BasePlan extends \Google\Collection
{
  /** @var AutoRenewingBasePlanType */
  public $autoRenewingBasePlanType;
  /** @var string */
  public $basePlanId;
  /** @var OfferTag[] */
  public $offerTags;
  /** @var OtherRegionsBasePlanConfig */
  public $otherRegionsConfig;
  /** @var PrepaidBasePlanType */
  public $prepaidBasePlanType;
  /** @var RegionalBasePlanConfig[] */
  public $regionalConfigs;
  /** @var string */
  public $state;
  protected $collection_key = 'regionalConfigs';
  protected $autoRenewingBasePlanTypeType = AutoRenewingBasePlanType::class;
  protected $autoRenewingBasePlanTypeDataType = '';
  protected $offerTagsType = OfferTag::class;
  protected $offerTagsDataType = 'array';
  protected $otherRegionsConfigType = OtherRegionsBasePlanConfig::class;
  protected $otherRegionsConfigDataType = '';
  protected $prepaidBasePlanTypeType = PrepaidBasePlanType::class;
  protected $prepaidBasePlanTypeDataType = '';
  protected $regionalConfigsType = RegionalBasePlanConfig::class;
  protected $regionalConfigsDataType = 'array';
  /** @param AutoRenewingBasePlanType */
  public function setAutoRenewingBasePlanType(AutoRenewingBasePlanType $autoRenewingBasePlanType)
  {
    $this->autoRenewingBasePlanType = $autoRenewingBasePlanType;
  }
  /** @return AutoRenewingBasePlanType */
  public function getAutoRenewingBasePlanType()
  {
    return $this->autoRenewingBasePlanType;
  }
  /** @param string */
  public function setBasePlanId($basePlanId)
  {
    $this->basePlanId = $basePlanId;
  }
  /** @return string */
  public function getBasePlanId()
  {
    return $this->basePlanId;
  }
  /** @param OfferTag[] */
  public function setOfferTags($offerTags)
  {
    $this->offerTags = $offerTags;
  }
  /** @return OfferTag[] */
  public function getOfferTags()
  {
    return $this->offerTags;
  }
  /** @param OtherRegionsBasePlanConfig */
  public function setOtherRegionsConfig(OtherRegionsBasePlanConfig $otherRegionsConfig)
  {
    $this->otherRegionsConfig = $otherRegionsConfig;
  }
  /** @return OtherRegionsBasePlanConfig */
  public function getOtherRegionsConfig()
  {
    return $this->otherRegionsConfig;
  }
  /** @param PrepaidBasePlanType */
  public function setPrepaidBasePlanType(PrepaidBasePlanType $prepaidBasePlanType)
  {
    $this->prepaidBasePlanType = $prepaidBasePlanType;
  }
  /** @return PrepaidBasePlanType */
  public function getPrepaidBasePlanType()
  {
    return $this->prepaidBasePlanType;
  }
  /** @param RegionalBasePlanConfig[] */
  public function setRegionalConfigs($regionalConfigs)
  {
    $this->regionalConfigs = $regionalConfigs;
  }
  /** @return RegionalBasePlanConfig[] */
  public function getRegionalConfigs()
  {
    return $this->regionalConfigs;
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

class Bundle extends \Google\Model
{
  /** @var string */
  public $sha1;
  /** @var string */
  public $sha256;
  /** @var int */
  public $versionCode;

  /** @param string */
  public function setSha1($sha1)
  {
    $this->sha1 = $sha1;
  }
  /** @return string */
  public function getSha1()
  {
    return $this->sha1;
  }
  /** @param string */
  public function setSha256($sha256)
  {
    $this->sha256 = $sha256;
  }
  /** @return string */
  public function getSha256()
  {
    return $this->sha256;
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
}

class BundlesListResponse extends \Google\Collection
{
  /** @var Bundle[] */
  public $bundles;
  /** @var string */
  public $kind;
  protected $collection_key = 'bundles';
  protected $bundlesType = Bundle::class;
  protected $bundlesDataType = 'array';
  /** @param Bundle[] */
  public function setBundles($bundles)
  {
    $this->bundles = $bundles;
  }
  /** @return Bundle[] */
  public function getBundles()
  {
    return $this->bundles;
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

class CancelSurveyResult extends \Google\Model
{
  /** @var string */
  public $reason;
  /** @var string */
  public $reasonUserInput;

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
  public function setReasonUserInput($reasonUserInput)
  {
    $this->reasonUserInput = $reasonUserInput;
  }
  /** @return string */
  public function getReasonUserInput()
  {
    return $this->reasonUserInput;
  }
}

class CanceledStateContext extends \Google\Model
{
  /** @var DeveloperInitiatedCancellation */
  public $developerInitiatedCancellation;
  /** @var ReplacementCancellation */
  public $replacementCancellation;
  /** @var SystemInitiatedCancellation */
  public $systemInitiatedCancellation;
  /** @var UserInitiatedCancellation */
  public $userInitiatedCancellation;
  protected $developerInitiatedCancellationType = DeveloperInitiatedCancellation::class;
  protected $developerInitiatedCancellationDataType = '';
  protected $replacementCancellationType = ReplacementCancellation::class;
  protected $replacementCancellationDataType = '';
  protected $systemInitiatedCancellationType = SystemInitiatedCancellation::class;
  protected $systemInitiatedCancellationDataType = '';
  protected $userInitiatedCancellationType = UserInitiatedCancellation::class;
  protected $userInitiatedCancellationDataType = '';
  /** @param DeveloperInitiatedCancellation */
  public function setDeveloperInitiatedCancellation(DeveloperInitiatedCancellation $developerInitiatedCancellation)
  {
    $this->developerInitiatedCancellation = $developerInitiatedCancellation;
  }
  /** @return DeveloperInitiatedCancellation */
  public function getDeveloperInitiatedCancellation()
  {
    return $this->developerInitiatedCancellation;
  }
  /** @param ReplacementCancellation */
  public function setReplacementCancellation(ReplacementCancellation $replacementCancellation)
  {
    $this->replacementCancellation = $replacementCancellation;
  }
  /** @return ReplacementCancellation */
  public function getReplacementCancellation()
  {
    return $this->replacementCancellation;
  }
  /** @param SystemInitiatedCancellation */
  public function setSystemInitiatedCancellation(SystemInitiatedCancellation $systemInitiatedCancellation)
  {
    $this->systemInitiatedCancellation = $systemInitiatedCancellation;
  }
  /** @return SystemInitiatedCancellation */
  public function getSystemInitiatedCancellation()
  {
    return $this->systemInitiatedCancellation;
  }
  /** @param UserInitiatedCancellation */
  public function setUserInitiatedCancellation(UserInitiatedCancellation $userInitiatedCancellation)
  {
    $this->userInitiatedCancellation = $userInitiatedCancellation;
  }
  /** @return UserInitiatedCancellation */
  public function getUserInitiatedCancellation()
  {
    return $this->userInitiatedCancellation;
  }
}

class Comment extends \Google\Model
{
  /** @var DeveloperComment */
  public $developerComment;
  /** @var UserComment */
  public $userComment;
  protected $developerCommentType = DeveloperComment::class;
  protected $developerCommentDataType = '';
  protected $userCommentType = UserComment::class;
  protected $userCommentDataType = '';
  /** @param DeveloperComment */
  public function setDeveloperComment(DeveloperComment $developerComment)
  {
    $this->developerComment = $developerComment;
  }
  /** @return DeveloperComment */
  public function getDeveloperComment()
  {
    return $this->developerComment;
  }
  /** @param UserComment */
  public function setUserComment(UserComment $userComment)
  {
    $this->userComment = $userComment;
  }
  /** @return UserComment */
  public function getUserComment()
  {
    return $this->userComment;
  }
}

class ConvertRegionPricesRequest extends \Google\Model
{
  /** @var Money */
  public $price;
  protected $priceType = Money::class;
  protected $priceDataType = '';
  /** @param Money */
  public function setPrice(Money $price)
  {
    $this->price = $price;
  }
  /** @return Money */
  public function getPrice()
  {
    return $this->price;
  }
}

class ConvertRegionPricesResponse extends \Google\Model
{
  /** @var ConvertedOtherRegionsPrice */
  public $convertedOtherRegionsPrice;
  /** @var ConvertedRegionPrice[] */
  public $convertedRegionPrices;
  protected $convertedOtherRegionsPriceType = ConvertedOtherRegionsPrice::class;
  protected $convertedOtherRegionsPriceDataType = '';
  protected $convertedRegionPricesType = ConvertedRegionPrice::class;
  protected $convertedRegionPricesDataType = 'map';
  /** @param ConvertedOtherRegionsPrice */
  public function setConvertedOtherRegionsPrice(ConvertedOtherRegionsPrice $convertedOtherRegionsPrice)
  {
    $this->convertedOtherRegionsPrice = $convertedOtherRegionsPrice;
  }
  /** @return ConvertedOtherRegionsPrice */
  public function getConvertedOtherRegionsPrice()
  {
    return $this->convertedOtherRegionsPrice;
  }
  /** @param ConvertedRegionPrice[] */
  public function setConvertedRegionPrices($convertedRegionPrices)
  {
    $this->convertedRegionPrices = $convertedRegionPrices;
  }
  /** @return ConvertedRegionPrice[] */
  public function getConvertedRegionPrices()
  {
    return $this->convertedRegionPrices;
  }
}

class ConvertedOtherRegionsPrice extends \Google\Model
{
  /** @var Money */
  public $eurPrice;
  /** @var Money */
  public $usdPrice;
  protected $eurPriceType = Money::class;
  protected $eurPriceDataType = '';
  protected $usdPriceType = Money::class;
  protected $usdPriceDataType = '';
  /** @param Money */
  public function setEurPrice(Money $eurPrice)
  {
    $this->eurPrice = $eurPrice;
  }
  /** @return Money */
  public function getEurPrice()
  {
    return $this->eurPrice;
  }
  /** @param Money */
  public function setUsdPrice(Money $usdPrice)
  {
    $this->usdPrice = $usdPrice;
  }
  /** @return Money */
  public function getUsdPrice()
  {
    return $this->usdPrice;
  }
}

class ConvertedRegionPrice extends \Google\Model
{
  /** @var Money */
  public $price;
  /** @var string */
  public $regionCode;
  /** @var Money */
  public $taxAmount;
  protected $priceType = Money::class;
  protected $priceDataType = '';
  protected $taxAmountType = Money::class;
  protected $taxAmountDataType = '';
  /** @param Money */
  public function setPrice(Money $price)
  {
    $this->price = $price;
  }
  /** @return Money */
  public function getPrice()
  {
    return $this->price;
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
  /** @param Money */
  public function setTaxAmount(Money $taxAmount)
  {
    $this->taxAmount = $taxAmount;
  }
  /** @return Money */
  public function getTaxAmount()
  {
    return $this->taxAmount;
  }
}

class CountryTargeting extends \Google\Collection
{
  /** @var string[] */
  public $countries;
  /** @var bool */
  public $includeRestOfWorld;
  protected $collection_key = 'countries';
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
  /** @param bool */
  public function setIncludeRestOfWorld($includeRestOfWorld)
  {
    $this->includeRestOfWorld = $includeRestOfWorld;
  }
  /** @return bool */
  public function getIncludeRestOfWorld()
  {
    return $this->includeRestOfWorld;
  }
}

class DeactivateBasePlanRequest extends \Google\Model
{
}

class DeactivateSubscriptionOfferRequest extends \Google\Model
{
}

class DeobfuscationFile extends \Google\Model
{
  /** @var string */
  public $symbolType;

  /** @param string */
  public function setSymbolType($symbolType)
  {
    $this->symbolType = $symbolType;
  }
  /** @return string */
  public function getSymbolType()
  {
    return $this->symbolType;
  }
}

class DeobfuscationFilesUploadResponse extends \Google\Model
{
  /** @var DeobfuscationFile */
  public $deobfuscationFile;
  protected $deobfuscationFileType = DeobfuscationFile::class;
  protected $deobfuscationFileDataType = '';
  /** @param DeobfuscationFile */
  public function setDeobfuscationFile(DeobfuscationFile $deobfuscationFile)
  {
    $this->deobfuscationFile = $deobfuscationFile;
  }
  /** @return DeobfuscationFile */
  public function getDeobfuscationFile()
  {
    return $this->deobfuscationFile;
  }
}

class DeveloperComment extends \Google\Model
{
  /** @var Timestamp */
  public $lastModified;
  /** @var string */
  public $text;
  protected $lastModifiedType = Timestamp::class;
  protected $lastModifiedDataType = '';
  /** @param Timestamp */
  public function setLastModified(Timestamp $lastModified)
  {
    $this->lastModified = $lastModified;
  }
  /** @return Timestamp */
  public function getLastModified()
  {
    return $this->lastModified;
  }
  /** @param string */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

class DeveloperInitiatedCancellation extends \Google\Model
{
}

class DeviceGroup extends \Google\Collection
{
  /** @var DeviceSelector[] */
  public $deviceSelectors;
  /** @var string */
  public $name;
  protected $collection_key = 'deviceSelectors';
  protected $deviceSelectorsType = DeviceSelector::class;
  protected $deviceSelectorsDataType = 'array';
  /** @param DeviceSelector[] */
  public function setDeviceSelectors($deviceSelectors)
  {
    $this->deviceSelectors = $deviceSelectors;
  }
  /** @return DeviceSelector[] */
  public function getDeviceSelectors()
  {
    return $this->deviceSelectors;
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

class DeviceId extends \Google\Model
{
  /** @var string */
  public $buildBrand;
  /** @var string */
  public $buildDevice;

  /** @param string */
  public function setBuildBrand($buildBrand)
  {
    $this->buildBrand = $buildBrand;
  }
  /** @return string */
  public function getBuildBrand()
  {
    return $this->buildBrand;
  }
  /** @param string */
  public function setBuildDevice($buildDevice)
  {
    $this->buildDevice = $buildDevice;
  }
  /** @return string */
  public function getBuildDevice()
  {
    return $this->buildDevice;
  }
}

class DeviceMetadata extends \Google\Model
{
  /** @var string */
  public $cpuMake;
  /** @var string */
  public $cpuModel;
  /** @var string */
  public $deviceClass;
  /** @var int */
  public $glEsVersion;
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $nativePlatform;
  /** @var string */
  public $productName;
  /** @var int */
  public $ramMb;
  /** @var int */
  public $screenDensityDpi;
  /** @var int */
  public $screenHeightPx;
  /** @var int */
  public $screenWidthPx;

  /** @param string */
  public function setCpuMake($cpuMake)
  {
    $this->cpuMake = $cpuMake;
  }
  /** @return string */
  public function getCpuMake()
  {
    return $this->cpuMake;
  }
  /** @param string */
  public function setCpuModel($cpuModel)
  {
    $this->cpuModel = $cpuModel;
  }
  /** @return string */
  public function getCpuModel()
  {
    return $this->cpuModel;
  }
  /** @param string */
  public function setDeviceClass($deviceClass)
  {
    $this->deviceClass = $deviceClass;
  }
  /** @return string */
  public function getDeviceClass()
  {
    return $this->deviceClass;
  }
  /** @param int */
  public function setGlEsVersion($glEsVersion)
  {
    $this->glEsVersion = $glEsVersion;
  }
  /** @return int */
  public function getGlEsVersion()
  {
    return $this->glEsVersion;
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
  public function setNativePlatform($nativePlatform)
  {
    $this->nativePlatform = $nativePlatform;
  }
  /** @return string */
  public function getNativePlatform()
  {
    return $this->nativePlatform;
  }
  /** @param string */
  public function setProductName($productName)
  {
    $this->productName = $productName;
  }
  /** @return string */
  public function getProductName()
  {
    return $this->productName;
  }
  /** @param int */
  public function setRamMb($ramMb)
  {
    $this->ramMb = $ramMb;
  }
  /** @return int */
  public function getRamMb()
  {
    return $this->ramMb;
  }
  /** @param int */
  public function setScreenDensityDpi($screenDensityDpi)
  {
    $this->screenDensityDpi = $screenDensityDpi;
  }
  /** @return int */
  public function getScreenDensityDpi()
  {
    return $this->screenDensityDpi;
  }
  /** @param int */
  public function setScreenHeightPx($screenHeightPx)
  {
    $this->screenHeightPx = $screenHeightPx;
  }
  /** @return int */
  public function getScreenHeightPx()
  {
    return $this->screenHeightPx;
  }
  /** @param int */
  public function setScreenWidthPx($screenWidthPx)
  {
    $this->screenWidthPx = $screenWidthPx;
  }
  /** @return int */
  public function getScreenWidthPx()
  {
    return $this->screenWidthPx;
  }
}

class DeviceRam extends \Google\Model
{
  /** @var string */
  public $maxBytes;
  /** @var string */
  public $minBytes;

  /** @param string */
  public function setMaxBytes($maxBytes)
  {
    $this->maxBytes = $maxBytes;
  }
  /** @return string */
  public function getMaxBytes()
  {
    return $this->maxBytes;
  }
  /** @param string */
  public function setMinBytes($minBytes)
  {
    $this->minBytes = $minBytes;
  }
  /** @return string */
  public function getMinBytes()
  {
    return $this->minBytes;
  }
}

class DeviceSelector extends \Google\Collection
{
  /** @var DeviceRam */
  public $deviceRam;
  /** @var DeviceId[] */
  public $excludedDeviceIds;
  /** @var SystemFeature[] */
  public $forbiddenSystemFeatures;
  /** @var DeviceId[] */
  public $includedDeviceIds;
  /** @var SystemFeature[] */
  public $requiredSystemFeatures;
  protected $collection_key = 'requiredSystemFeatures';
  protected $deviceRamType = DeviceRam::class;
  protected $deviceRamDataType = '';
  protected $excludedDeviceIdsType = DeviceId::class;
  protected $excludedDeviceIdsDataType = 'array';
  protected $forbiddenSystemFeaturesType = SystemFeature::class;
  protected $forbiddenSystemFeaturesDataType = 'array';
  protected $includedDeviceIdsType = DeviceId::class;
  protected $includedDeviceIdsDataType = 'array';
  protected $requiredSystemFeaturesType = SystemFeature::class;
  protected $requiredSystemFeaturesDataType = 'array';
  /** @param DeviceRam */
  public function setDeviceRam(DeviceRam $deviceRam)
  {
    $this->deviceRam = $deviceRam;
  }
  /** @return DeviceRam */
  public function getDeviceRam()
  {
    return $this->deviceRam;
  }
  /** @param DeviceId[] */
  public function setExcludedDeviceIds($excludedDeviceIds)
  {
    $this->excludedDeviceIds = $excludedDeviceIds;
  }
  /** @return DeviceId[] */
  public function getExcludedDeviceIds()
  {
    return $this->excludedDeviceIds;
  }
  /** @param SystemFeature[] */
  public function setForbiddenSystemFeatures($forbiddenSystemFeatures)
  {
    $this->forbiddenSystemFeatures = $forbiddenSystemFeatures;
  }
  /** @return SystemFeature[] */
  public function getForbiddenSystemFeatures()
  {
    return $this->forbiddenSystemFeatures;
  }
  /** @param DeviceId[] */
  public function setIncludedDeviceIds($includedDeviceIds)
  {
    $this->includedDeviceIds = $includedDeviceIds;
  }
  /** @return DeviceId[] */
  public function getIncludedDeviceIds()
  {
    return $this->includedDeviceIds;
  }
  /** @param SystemFeature[] */
  public function setRequiredSystemFeatures($requiredSystemFeatures)
  {
    $this->requiredSystemFeatures = $requiredSystemFeatures;
  }
  /** @return SystemFeature[] */
  public function getRequiredSystemFeatures()
  {
    return $this->requiredSystemFeatures;
  }
}

class DeviceSpec extends \Google\Collection
{
  /** @var string */
  public $screenDensity;
  /** @var string[] */
  public $supportedAbis;
  /** @var string[] */
  public $supportedLocales;
  protected $collection_key = 'supportedLocales';
  /** @param string */
  public function setScreenDensity($screenDensity)
  {
    $this->screenDensity = $screenDensity;
  }
  /** @return string */
  public function getScreenDensity()
  {
    return $this->screenDensity;
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
  public function setSupportedLocales($supportedLocales)
  {
    $this->supportedLocales = $supportedLocales;
  }
  /** @return string[] */
  public function getSupportedLocales()
  {
    return $this->supportedLocales;
  }
}

class DeviceTier extends \Google\Collection
{
  /** @var string[] */
  public $deviceGroupNames;
  /** @var int */
  public $level;
  protected $collection_key = 'deviceGroupNames';
  /** @param string[] */
  public function setDeviceGroupNames($deviceGroupNames)
  {
    $this->deviceGroupNames = $deviceGroupNames;
  }
  /** @return string[] */
  public function getDeviceGroupNames()
  {
    return $this->deviceGroupNames;
  }
  /** @param int */
  public function setLevel($level)
  {
    $this->level = $level;
  }
  /** @return int */
  public function getLevel()
  {
    return $this->level;
  }
}

class DeviceTierConfig extends \Google\Collection
{
  /** @var DeviceGroup[] */
  public $deviceGroups;
  /** @var string */
  public $deviceTierConfigId;
  /** @var DeviceTierSet */
  public $deviceTierSet;
  protected $collection_key = 'deviceGroups';
  protected $deviceGroupsType = DeviceGroup::class;
  protected $deviceGroupsDataType = 'array';
  protected $deviceTierSetType = DeviceTierSet::class;
  protected $deviceTierSetDataType = '';
  /** @param DeviceGroup[] */
  public function setDeviceGroups($deviceGroups)
  {
    $this->deviceGroups = $deviceGroups;
  }
  /** @return DeviceGroup[] */
  public function getDeviceGroups()
  {
    return $this->deviceGroups;
  }
  /** @param string */
  public function setDeviceTierConfigId($deviceTierConfigId)
  {
    $this->deviceTierConfigId = $deviceTierConfigId;
  }
  /** @return string */
  public function getDeviceTierConfigId()
  {
    return $this->deviceTierConfigId;
  }
  /** @param DeviceTierSet */
  public function setDeviceTierSet(DeviceTierSet $deviceTierSet)
  {
    $this->deviceTierSet = $deviceTierSet;
  }
  /** @return DeviceTierSet */
  public function getDeviceTierSet()
  {
    return $this->deviceTierSet;
  }
}

class DeviceTierSet extends \Google\Collection
{
  /** @var DeviceTier[] */
  public $deviceTiers;
  protected $collection_key = 'deviceTiers';
  protected $deviceTiersType = DeviceTier::class;
  protected $deviceTiersDataType = 'array';
  /** @param DeviceTier[] */
  public function setDeviceTiers($deviceTiers)
  {
    $this->deviceTiers = $deviceTiers;
  }
  /** @return DeviceTier[] */
  public function getDeviceTiers()
  {
    return $this->deviceTiers;
  }
}

class ExpansionFile extends \Google\Model
{
  /** @var string */
  public $fileSize;
  /** @var int */
  public $referencesVersion;

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
  public function setReferencesVersion($referencesVersion)
  {
    $this->referencesVersion = $referencesVersion;
  }
  /** @return int */
  public function getReferencesVersion()
  {
    return $this->referencesVersion;
  }
}

class ExpansionFilesUploadResponse extends \Google\Model
{
  /** @var ExpansionFile */
  public $expansionFile;
  protected $expansionFileType = ExpansionFile::class;
  protected $expansionFileDataType = '';
  /** @param ExpansionFile */
  public function setExpansionFile(ExpansionFile $expansionFile)
  {
    $this->expansionFile = $expansionFile;
  }
  /** @return ExpansionFile */
  public function getExpansionFile()
  {
    return $this->expansionFile;
  }
}

class ExternalAccountIdentifiers extends \Google\Model
{
  /** @var string */
  public $externalAccountId;
  /** @var string */
  public $obfuscatedExternalAccountId;
  /** @var string */
  public $obfuscatedExternalProfileId;

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
  /** @param string */
  public function setObfuscatedExternalAccountId($obfuscatedExternalAccountId)
  {
    $this->obfuscatedExternalAccountId = $obfuscatedExternalAccountId;
  }
  /** @return string */
  public function getObfuscatedExternalAccountId()
  {
    return $this->obfuscatedExternalAccountId;
  }
  /** @param string */
  public function setObfuscatedExternalProfileId($obfuscatedExternalProfileId)
  {
    $this->obfuscatedExternalProfileId = $obfuscatedExternalProfileId;
  }
  /** @return string */
  public function getObfuscatedExternalProfileId()
  {
    return $this->obfuscatedExternalProfileId;
  }
}

class ExternallyHostedApk extends \Google\Collection
{
  /** @var string */
  public $applicationLabel;
  /** @var string[] */
  public $certificateBase64s;
  /** @var string */
  public $externallyHostedUrl;
  /** @var string */
  public $fileSha1Base64;
  /** @var string */
  public $fileSha256Base64;
  /** @var string */
  public $fileSize;
  /** @var string */
  public $iconBase64;
  /** @var int */
  public $maximumSdk;
  /** @var int */
  public $minimumSdk;
  /** @var string[] */
  public $nativeCodes;
  /** @var string */
  public $packageName;
  /** @var string[] */
  public $usesFeatures;
  /** @var UsesPermission[] */
  public $usesPermissions;
  /** @var int */
  public $versionCode;
  /** @var string */
  public $versionName;
  protected $collection_key = 'usesPermissions';
  protected $usesPermissionsType = UsesPermission::class;
  protected $usesPermissionsDataType = 'array';
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
  /** @param string[] */
  public function setCertificateBase64s($certificateBase64s)
  {
    $this->certificateBase64s = $certificateBase64s;
  }
  /** @return string[] */
  public function getCertificateBase64s()
  {
    return $this->certificateBase64s;
  }
  /** @param string */
  public function setExternallyHostedUrl($externallyHostedUrl)
  {
    $this->externallyHostedUrl = $externallyHostedUrl;
  }
  /** @return string */
  public function getExternallyHostedUrl()
  {
    return $this->externallyHostedUrl;
  }
  /** @param string */
  public function setFileSha1Base64($fileSha1Base64)
  {
    $this->fileSha1Base64 = $fileSha1Base64;
  }
  /** @return string */
  public function getFileSha1Base64()
  {
    return $this->fileSha1Base64;
  }
  /** @param string */
  public function setFileSha256Base64($fileSha256Base64)
  {
    $this->fileSha256Base64 = $fileSha256Base64;
  }
  /** @return string */
  public function getFileSha256Base64()
  {
    return $this->fileSha256Base64;
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
  /** @param string */
  public function setIconBase64($iconBase64)
  {
    $this->iconBase64 = $iconBase64;
  }
  /** @return string */
  public function getIconBase64()
  {
    return $this->iconBase64;
  }
  /** @param int */
  public function setMaximumSdk($maximumSdk)
  {
    $this->maximumSdk = $maximumSdk;
  }
  /** @return int */
  public function getMaximumSdk()
  {
    return $this->maximumSdk;
  }
  /** @param int */
  public function setMinimumSdk($minimumSdk)
  {
    $this->minimumSdk = $minimumSdk;
  }
  /** @return int */
  public function getMinimumSdk()
  {
    return $this->minimumSdk;
  }
  /** @param string[] */
  public function setNativeCodes($nativeCodes)
  {
    $this->nativeCodes = $nativeCodes;
  }
  /** @return string[] */
  public function getNativeCodes()
  {
    return $this->nativeCodes;
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
  /** @param string[] */
  public function setUsesFeatures($usesFeatures)
  {
    $this->usesFeatures = $usesFeatures;
  }
  /** @return string[] */
  public function getUsesFeatures()
  {
    return $this->usesFeatures;
  }
  /** @param UsesPermission[] */
  public function setUsesPermissions($usesPermissions)
  {
    $this->usesPermissions = $usesPermissions;
  }
  /** @return UsesPermission[] */
  public function getUsesPermissions()
  {
    return $this->usesPermissions;
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

class GeneratedApksListResponse extends \Google\Collection
{
  /** @var GeneratedApksPerSigningKey[] */
  public $generatedApks;
  protected $collection_key = 'generatedApks';
  protected $generatedApksType = GeneratedApksPerSigningKey::class;
  protected $generatedApksDataType = 'array';
  /** @param GeneratedApksPerSigningKey[] */
  public function setGeneratedApks($generatedApks)
  {
    $this->generatedApks = $generatedApks;
  }
  /** @return GeneratedApksPerSigningKey[] */
  public function getGeneratedApks()
  {
    return $this->generatedApks;
  }
}

class GeneratedApksPerSigningKey extends \Google\Collection
{
  /** @var string */
  public $certificateSha256Hash;
  /** @var GeneratedAssetPackSlice[] */
  public $generatedAssetPackSlices;
  /** @var GeneratedSplitApk[] */
  public $generatedSplitApks;
  /** @var GeneratedStandaloneApk[] */
  public $generatedStandaloneApks;
  /** @var GeneratedUniversalApk */
  public $generatedUniversalApk;
  protected $collection_key = 'generatedStandaloneApks';
  protected $generatedAssetPackSlicesType = GeneratedAssetPackSlice::class;
  protected $generatedAssetPackSlicesDataType = 'array';
  protected $generatedSplitApksType = GeneratedSplitApk::class;
  protected $generatedSplitApksDataType = 'array';
  protected $generatedStandaloneApksType = GeneratedStandaloneApk::class;
  protected $generatedStandaloneApksDataType = 'array';
  protected $generatedUniversalApkType = GeneratedUniversalApk::class;
  protected $generatedUniversalApkDataType = '';
  /** @param string */
  public function setCertificateSha256Hash($certificateSha256Hash)
  {
    $this->certificateSha256Hash = $certificateSha256Hash;
  }
  /** @return string */
  public function getCertificateSha256Hash()
  {
    return $this->certificateSha256Hash;
  }
  /** @param GeneratedAssetPackSlice[] */
  public function setGeneratedAssetPackSlices($generatedAssetPackSlices)
  {
    $this->generatedAssetPackSlices = $generatedAssetPackSlices;
  }
  /** @return GeneratedAssetPackSlice[] */
  public function getGeneratedAssetPackSlices()
  {
    return $this->generatedAssetPackSlices;
  }
  /** @param GeneratedSplitApk[] */
  public function setGeneratedSplitApks($generatedSplitApks)
  {
    $this->generatedSplitApks = $generatedSplitApks;
  }
  /** @return GeneratedSplitApk[] */
  public function getGeneratedSplitApks()
  {
    return $this->generatedSplitApks;
  }
  /** @param GeneratedStandaloneApk[] */
  public function setGeneratedStandaloneApks($generatedStandaloneApks)
  {
    $this->generatedStandaloneApks = $generatedStandaloneApks;
  }
  /** @return GeneratedStandaloneApk[] */
  public function getGeneratedStandaloneApks()
  {
    return $this->generatedStandaloneApks;
  }
  /** @param GeneratedUniversalApk */
  public function setGeneratedUniversalApk(GeneratedUniversalApk $generatedUniversalApk)
  {
    $this->generatedUniversalApk = $generatedUniversalApk;
  }
  /** @return GeneratedUniversalApk */
  public function getGeneratedUniversalApk()
  {
    return $this->generatedUniversalApk;
  }
}

class GeneratedAssetPackSlice extends \Google\Model
{
  /** @var string */
  public $downloadId;
  /** @var string */
  public $moduleName;
  /** @var string */
  public $sliceId;
  /** @var string */
  public $version;

  /** @param string */
  public function setDownloadId($downloadId)
  {
    $this->downloadId = $downloadId;
  }
  /** @return string */
  public function getDownloadId()
  {
    return $this->downloadId;
  }
  /** @param string */
  public function setModuleName($moduleName)
  {
    $this->moduleName = $moduleName;
  }
  /** @return string */
  public function getModuleName()
  {
    return $this->moduleName;
  }
  /** @param string */
  public function setSliceId($sliceId)
  {
    $this->sliceId = $sliceId;
  }
  /** @return string */
  public function getSliceId()
  {
    return $this->sliceId;
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

class GeneratedSplitApk extends \Google\Model
{
  /** @var string */
  public $downloadId;
  /** @var string */
  public $moduleName;
  /** @var string */
  public $splitId;
  /** @var int */
  public $variantId;

  /** @param string */
  public function setDownloadId($downloadId)
  {
    $this->downloadId = $downloadId;
  }
  /** @return string */
  public function getDownloadId()
  {
    return $this->downloadId;
  }
  /** @param string */
  public function setModuleName($moduleName)
  {
    $this->moduleName = $moduleName;
  }
  /** @return string */
  public function getModuleName()
  {
    return $this->moduleName;
  }
  /** @param string */
  public function setSplitId($splitId)
  {
    $this->splitId = $splitId;
  }
  /** @return string */
  public function getSplitId()
  {
    return $this->splitId;
  }
  /** @param int */
  public function setVariantId($variantId)
  {
    $this->variantId = $variantId;
  }
  /** @return int */
  public function getVariantId()
  {
    return $this->variantId;
  }
}

class GeneratedStandaloneApk extends \Google\Model
{
  /** @var string */
  public $downloadId;
  /** @var int */
  public $variantId;

  /** @param string */
  public function setDownloadId($downloadId)
  {
    $this->downloadId = $downloadId;
  }
  /** @return string */
  public function getDownloadId()
  {
    return $this->downloadId;
  }
  /** @param int */
  public function setVariantId($variantId)
  {
    $this->variantId = $variantId;
  }
  /** @return int */
  public function getVariantId()
  {
    return $this->variantId;
  }
}

class GeneratedUniversalApk extends \Google\Model
{
  /** @var string */
  public $downloadId;

  /** @param string */
  public function setDownloadId($downloadId)
  {
    $this->downloadId = $downloadId;
  }
  /** @return string */
  public function getDownloadId()
  {
    return $this->downloadId;
  }
}

class Grant extends \Google\Collection
{
  /** @var string[] */
  public $appLevelPermissions;
  /** @var string */
  public $name;
  /** @var string */
  public $packageName;
  protected $collection_key = 'appLevelPermissions';
  /** @param string[] */
  public function setAppLevelPermissions($appLevelPermissions)
  {
    $this->appLevelPermissions = $appLevelPermissions;
  }
  /** @return string[] */
  public function getAppLevelPermissions()
  {
    return $this->appLevelPermissions;
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

class Image extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $sha1;
  /** @var string */
  public $sha256;
  /** @var string */
  public $url;

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
  public function setSha1($sha1)
  {
    $this->sha1 = $sha1;
  }
  /** @return string */
  public function getSha1()
  {
    return $this->sha1;
  }
  /** @param string */
  public function setSha256($sha256)
  {
    $this->sha256 = $sha256;
  }
  /** @return string */
  public function getSha256()
  {
    return $this->sha256;
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

class ImagesDeleteAllResponse extends \Google\Collection
{
  /** @var Image[] */
  public $deleted;
  protected $collection_key = 'deleted';
  protected $deletedType = Image::class;
  protected $deletedDataType = 'array';
  /** @param Image[] */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return Image[] */
  public function getDeleted()
  {
    return $this->deleted;
  }
}

class ImagesListResponse extends \Google\Collection
{
  /** @var Image[] */
  public $images;
  protected $collection_key = 'images';
  protected $imagesType = Image::class;
  protected $imagesDataType = 'array';
  /** @param Image[] */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /** @return Image[] */
  public function getImages()
  {
    return $this->images;
  }
}

class ImagesUploadResponse extends \Google\Model
{
  /** @var Image */
  public $image;
  protected $imageType = Image::class;
  protected $imageDataType = '';
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
}

class InAppProduct extends \Google\Model
{
  /** @var string */
  public $defaultLanguage;
  /** @var Price */
  public $defaultPrice;
  /** @var string */
  public $gracePeriod;
  /** @var InAppProductListing[] */
  public $listings;
  /** @var ManagedProductTaxAndComplianceSettings */
  public $managedProductTaxesAndComplianceSettings;
  /** @var string */
  public $packageName;
  /** @var Price[] */
  public $prices;
  /** @var string */
  public $purchaseType;
  /** @var string */
  public $sku;
  /** @var string */
  public $status;
  /** @var string */
  public $subscriptionPeriod;
  /** @var SubscriptionTaxAndComplianceSettings */
  public $subscriptionTaxesAndComplianceSettings;
  /** @var string */
  public $trialPeriod;
  protected $defaultPriceType = Price::class;
  protected $defaultPriceDataType = '';
  protected $listingsType = InAppProductListing::class;
  protected $listingsDataType = 'map';
  protected $managedProductTaxesAndComplianceSettingsType = ManagedProductTaxAndComplianceSettings::class;
  protected $managedProductTaxesAndComplianceSettingsDataType = '';
  protected $pricesType = Price::class;
  protected $pricesDataType = 'map';
  protected $subscriptionTaxesAndComplianceSettingsType = SubscriptionTaxAndComplianceSettings::class;
  protected $subscriptionTaxesAndComplianceSettingsDataType = '';
  /** @param string */
  public function setDefaultLanguage($defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }
  /** @return string */
  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
  }
  /** @param Price */
  public function setDefaultPrice(Price $defaultPrice)
  {
    $this->defaultPrice = $defaultPrice;
  }
  /** @return Price */
  public function getDefaultPrice()
  {
    return $this->defaultPrice;
  }
  /** @param string */
  public function setGracePeriod($gracePeriod)
  {
    $this->gracePeriod = $gracePeriod;
  }
  /** @return string */
  public function getGracePeriod()
  {
    return $this->gracePeriod;
  }
  /** @param InAppProductListing[] */
  public function setListings($listings)
  {
    $this->listings = $listings;
  }
  /** @return InAppProductListing[] */
  public function getListings()
  {
    return $this->listings;
  }
  /** @param ManagedProductTaxAndComplianceSettings */
  public function setManagedProductTaxesAndComplianceSettings(ManagedProductTaxAndComplianceSettings $managedProductTaxesAndComplianceSettings)
  {
    $this->managedProductTaxesAndComplianceSettings = $managedProductTaxesAndComplianceSettings;
  }
  /** @return ManagedProductTaxAndComplianceSettings */
  public function getManagedProductTaxesAndComplianceSettings()
  {
    return $this->managedProductTaxesAndComplianceSettings;
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
  /** @param string */
  public function setPurchaseType($purchaseType)
  {
    $this->purchaseType = $purchaseType;
  }
  /** @return string */
  public function getPurchaseType()
  {
    return $this->purchaseType;
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
  public function setSubscriptionPeriod($subscriptionPeriod)
  {
    $this->subscriptionPeriod = $subscriptionPeriod;
  }
  /** @return string */
  public function getSubscriptionPeriod()
  {
    return $this->subscriptionPeriod;
  }
  /** @param SubscriptionTaxAndComplianceSettings */
  public function setSubscriptionTaxesAndComplianceSettings(SubscriptionTaxAndComplianceSettings $subscriptionTaxesAndComplianceSettings)
  {
    $this->subscriptionTaxesAndComplianceSettings = $subscriptionTaxesAndComplianceSettings;
  }
  /** @return SubscriptionTaxAndComplianceSettings */
  public function getSubscriptionTaxesAndComplianceSettings()
  {
    return $this->subscriptionTaxesAndComplianceSettings;
  }
  /** @param string */
  public function setTrialPeriod($trialPeriod)
  {
    $this->trialPeriod = $trialPeriod;
  }
  /** @return string */
  public function getTrialPeriod()
  {
    return $this->trialPeriod;
  }
}

class InAppProductListing extends \Google\Collection
{
  /** @var string[] */
  public $benefits;
  /** @var string */
  public $description;
  /** @var string */
  public $title;
  protected $collection_key = 'benefits';
  /** @param string[] */
  public function setBenefits($benefits)
  {
    $this->benefits = $benefits;
  }
  /** @return string[] */
  public function getBenefits()
  {
    return $this->benefits;
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

class InappproductsListResponse extends \Google\Collection
{
  /** @var InAppProduct[] */
  public $inappproduct;
  /** @var string */
  public $kind;
  /** @var PageInfo */
  public $pageInfo;
  /** @var TokenPagination */
  public $tokenPagination;
  protected $collection_key = 'inappproduct';
  protected $inappproductType = InAppProduct::class;
  protected $inappproductDataType = 'array';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
  /** @param InAppProduct[] */
  public function setInappproduct($inappproduct)
  {
    $this->inappproduct = $inappproduct;
  }
  /** @return InAppProduct[] */
  public function getInappproduct()
  {
    return $this->inappproduct;
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
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
}

class InternalAppSharingArtifact extends \Google\Model
{
  /** @var string */
  public $certificateFingerprint;
  /** @var string */
  public $downloadUrl;
  /** @var string */
  public $sha256;

  /** @param string */
  public function setCertificateFingerprint($certificateFingerprint)
  {
    $this->certificateFingerprint = $certificateFingerprint;
  }
  /** @return string */
  public function getCertificateFingerprint()
  {
    return $this->certificateFingerprint;
  }
  /** @param string */
  public function setDownloadUrl($downloadUrl)
  {
    $this->downloadUrl = $downloadUrl;
  }
  /** @return string */
  public function getDownloadUrl()
  {
    return $this->downloadUrl;
  }
  /** @param string */
  public function setSha256($sha256)
  {
    $this->sha256 = $sha256;
  }
  /** @return string */
  public function getSha256()
  {
    return $this->sha256;
  }
}

class IntroductoryPriceInfo extends \Google\Model
{
  /** @var string */
  public $introductoryPriceAmountMicros;
  /** @var string */
  public $introductoryPriceCurrencyCode;
  /** @var int */
  public $introductoryPriceCycles;
  /** @var string */
  public $introductoryPricePeriod;

  /** @param string */
  public function setIntroductoryPriceAmountMicros($introductoryPriceAmountMicros)
  {
    $this->introductoryPriceAmountMicros = $introductoryPriceAmountMicros;
  }
  /** @return string */
  public function getIntroductoryPriceAmountMicros()
  {
    return $this->introductoryPriceAmountMicros;
  }
  /** @param string */
  public function setIntroductoryPriceCurrencyCode($introductoryPriceCurrencyCode)
  {
    $this->introductoryPriceCurrencyCode = $introductoryPriceCurrencyCode;
  }
  /** @return string */
  public function getIntroductoryPriceCurrencyCode()
  {
    return $this->introductoryPriceCurrencyCode;
  }
  /** @param int */
  public function setIntroductoryPriceCycles($introductoryPriceCycles)
  {
    $this->introductoryPriceCycles = $introductoryPriceCycles;
  }
  /** @return int */
  public function getIntroductoryPriceCycles()
  {
    return $this->introductoryPriceCycles;
  }
  /** @param string */
  public function setIntroductoryPricePeriod($introductoryPricePeriod)
  {
    $this->introductoryPricePeriod = $introductoryPricePeriod;
  }
  /** @return string */
  public function getIntroductoryPricePeriod()
  {
    return $this->introductoryPricePeriod;
  }
}

class ListDeviceTierConfigsResponse extends \Google\Collection
{
  /** @var DeviceTierConfig[] */
  public $deviceTierConfigs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'deviceTierConfigs';
  protected $deviceTierConfigsType = DeviceTierConfig::class;
  protected $deviceTierConfigsDataType = 'array';
  /** @param DeviceTierConfig[] */
  public function setDeviceTierConfigs($deviceTierConfigs)
  {
    $this->deviceTierConfigs = $deviceTierConfigs;
  }
  /** @return DeviceTierConfig[] */
  public function getDeviceTierConfigs()
  {
    return $this->deviceTierConfigs;
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

class ListSubscriptionOffersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var SubscriptionOffer[] */
  public $subscriptionOffers;
  protected $collection_key = 'subscriptionOffers';
  protected $subscriptionOffersType = SubscriptionOffer::class;
  protected $subscriptionOffersDataType = 'array';
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
  /** @param SubscriptionOffer[] */
  public function setSubscriptionOffers($subscriptionOffers)
  {
    $this->subscriptionOffers = $subscriptionOffers;
  }
  /** @return SubscriptionOffer[] */
  public function getSubscriptionOffers()
  {
    return $this->subscriptionOffers;
  }
}

class ListSubscriptionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Subscription[] */
  public $subscriptions;
  protected $collection_key = 'subscriptions';
  protected $subscriptionsType = Subscription::class;
  protected $subscriptionsDataType = 'array';
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

class Listing extends \Google\Model
{
  /** @var string */
  public $fullDescription;
  /** @var string */
  public $language;
  /** @var string */
  public $shortDescription;
  /** @var string */
  public $title;
  /** @var string */
  public $video;

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
  public function setShortDescription($shortDescription)
  {
    $this->shortDescription = $shortDescription;
  }
  /** @return string */
  public function getShortDescription()
  {
    return $this->shortDescription;
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
  public function setVideo($video)
  {
    $this->video = $video;
  }
  /** @return string */
  public function getVideo()
  {
    return $this->video;
  }
}

class ListingsListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var Listing[] */
  public $listings;
  protected $collection_key = 'listings';
  protected $listingsType = Listing::class;
  protected $listingsDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param Listing[] */
  public function setListings($listings)
  {
    $this->listings = $listings;
  }
  /** @return Listing[] */
  public function getListings()
  {
    return $this->listings;
  }
}

class LocalizedText extends \Google\Model
{
  /** @var string */
  public $language;
  /** @var string */
  public $text;

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
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

class ManagedProductTaxAndComplianceSettings extends \Google\Model
{
  /** @var string */
  public $eeaWithdrawalRightType;
  /** @var RegionalTaxRateInfo[] */
  public $taxRateInfoByRegionCode;
  protected $taxRateInfoByRegionCodeType = RegionalTaxRateInfo::class;
  protected $taxRateInfoByRegionCodeDataType = 'map';
  /** @param string */
  public function setEeaWithdrawalRightType($eeaWithdrawalRightType)
  {
    $this->eeaWithdrawalRightType = $eeaWithdrawalRightType;
  }
  /** @return string */
  public function getEeaWithdrawalRightType()
  {
    return $this->eeaWithdrawalRightType;
  }
  /** @param RegionalTaxRateInfo[] */
  public function setTaxRateInfoByRegionCode($taxRateInfoByRegionCode)
  {
    $this->taxRateInfoByRegionCode = $taxRateInfoByRegionCode;
  }
  /** @return RegionalTaxRateInfo[] */
  public function getTaxRateInfoByRegionCode()
  {
    return $this->taxRateInfoByRegionCode;
  }
}

class MigrateBasePlanPricesRequest extends \Google\Collection
{
  /** @var RegionalPriceMigrationConfig[] */
  public $regionalPriceMigrations;
  /** @var RegionsVersion */
  public $regionsVersion;
  protected $collection_key = 'regionalPriceMigrations';
  protected $regionalPriceMigrationsType = RegionalPriceMigrationConfig::class;
  protected $regionalPriceMigrationsDataType = 'array';
  protected $regionsVersionType = RegionsVersion::class;
  protected $regionsVersionDataType = '';
  /** @param RegionalPriceMigrationConfig[] */
  public function setRegionalPriceMigrations($regionalPriceMigrations)
  {
    $this->regionalPriceMigrations = $regionalPriceMigrations;
  }
  /** @return RegionalPriceMigrationConfig[] */
  public function getRegionalPriceMigrations()
  {
    return $this->regionalPriceMigrations;
  }
  /** @param RegionsVersion */
  public function setRegionsVersion(RegionsVersion $regionsVersion)
  {
    $this->regionsVersion = $regionsVersion;
  }
  /** @return RegionsVersion */
  public function getRegionsVersion()
  {
    return $this->regionsVersion;
  }
}

class MigrateBasePlanPricesResponse extends \Google\Model
{
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

class OfferDetails extends \Google\Collection
{
  /** @var string */
  public $basePlanId;
  /** @var string */
  public $offerId;
  /** @var string[] */
  public $offerTags;
  protected $collection_key = 'offerTags';
  /** @param string */
  public function setBasePlanId($basePlanId)
  {
    $this->basePlanId = $basePlanId;
  }
  /** @return string */
  public function getBasePlanId()
  {
    return $this->basePlanId;
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
  /** @param string[] */
  public function setOfferTags($offerTags)
  {
    $this->offerTags = $offerTags;
  }
  /** @return string[] */
  public function getOfferTags()
  {
    return $this->offerTags;
  }
}

class OfferTag extends \Google\Model
{
  /** @var string */
  public $tag;

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

class OtherRegionsBasePlanConfig extends \Google\Model
{
  /** @var Money */
  public $eurPrice;
  /** @var bool */
  public $newSubscriberAvailability;
  /** @var Money */
  public $usdPrice;
  protected $eurPriceType = Money::class;
  protected $eurPriceDataType = '';
  protected $usdPriceType = Money::class;
  protected $usdPriceDataType = '';
  /** @param Money */
  public function setEurPrice(Money $eurPrice)
  {
    $this->eurPrice = $eurPrice;
  }
  /** @return Money */
  public function getEurPrice()
  {
    return $this->eurPrice;
  }
  /** @param bool */
  public function setNewSubscriberAvailability($newSubscriberAvailability)
  {
    $this->newSubscriberAvailability = $newSubscriberAvailability;
  }
  /** @return bool */
  public function getNewSubscriberAvailability()
  {
    return $this->newSubscriberAvailability;
  }
  /** @param Money */
  public function setUsdPrice(Money $usdPrice)
  {
    $this->usdPrice = $usdPrice;
  }
  /** @return Money */
  public function getUsdPrice()
  {
    return $this->usdPrice;
  }
}

class OtherRegionsSubscriptionOfferConfig extends \Google\Model
{
  /** @var bool */
  public $otherRegionsNewSubscriberAvailability;

  /** @param bool */
  public function setOtherRegionsNewSubscriberAvailability($otherRegionsNewSubscriberAvailability)
  {
    $this->otherRegionsNewSubscriberAvailability = $otherRegionsNewSubscriberAvailability;
  }
  /** @return bool */
  public function getOtherRegionsNewSubscriberAvailability()
  {
    return $this->otherRegionsNewSubscriberAvailability;
  }
}

class OtherRegionsSubscriptionOfferPhaseConfig extends \Google\Model
{
  /** @var OtherRegionsSubscriptionOfferPhasePrices */
  public $absoluteDiscounts;
  /** @var OtherRegionsSubscriptionOfferPhasePrices */
  public $otherRegionsPrices;
  public $relativeDiscount;
  protected $absoluteDiscountsType = OtherRegionsSubscriptionOfferPhasePrices::class;
  protected $absoluteDiscountsDataType = '';
  protected $otherRegionsPricesType = OtherRegionsSubscriptionOfferPhasePrices::class;
  protected $otherRegionsPricesDataType = '';
  /** @param OtherRegionsSubscriptionOfferPhasePrices */
  public function setAbsoluteDiscounts(OtherRegionsSubscriptionOfferPhasePrices $absoluteDiscounts)
  {
    $this->absoluteDiscounts = $absoluteDiscounts;
  }
  /** @return OtherRegionsSubscriptionOfferPhasePrices */
  public function getAbsoluteDiscounts()
  {
    return $this->absoluteDiscounts;
  }
  /** @param OtherRegionsSubscriptionOfferPhasePrices */
  public function setOtherRegionsPrices(OtherRegionsSubscriptionOfferPhasePrices $otherRegionsPrices)
  {
    $this->otherRegionsPrices = $otherRegionsPrices;
  }
  /** @return OtherRegionsSubscriptionOfferPhasePrices */
  public function getOtherRegionsPrices()
  {
    return $this->otherRegionsPrices;
  }
  public function setRelativeDiscount($relativeDiscount)
  {
    $this->relativeDiscount = $relativeDiscount;
  }
  public function getRelativeDiscount()
  {
    return $this->relativeDiscount;
  }
}

class OtherRegionsSubscriptionOfferPhasePrices extends \Google\Model
{
  /** @var Money */
  public $eurPrice;
  /** @var Money */
  public $usdPrice;
  protected $eurPriceType = Money::class;
  protected $eurPriceDataType = '';
  protected $usdPriceType = Money::class;
  protected $usdPriceDataType = '';
  /** @param Money */
  public function setEurPrice(Money $eurPrice)
  {
    $this->eurPrice = $eurPrice;
  }
  /** @return Money */
  public function getEurPrice()
  {
    return $this->eurPrice;
  }
  /** @param Money */
  public function setUsdPrice(Money $usdPrice)
  {
    $this->usdPrice = $usdPrice;
  }
  /** @return Money */
  public function getUsdPrice()
  {
    return $this->usdPrice;
  }
}

class PageInfo extends \Google\Model
{
  /** @var int */
  public $resultPerPage;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;

  /** @param int */
  public function setResultPerPage($resultPerPage)
  {
    $this->resultPerPage = $resultPerPage;
  }
  /** @return int */
  public function getResultPerPage()
  {
    return $this->resultPerPage;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class PausedStateContext extends \Google\Model
{
  /** @var string */
  public $autoResumeTime;

  /** @param string */
  public function setAutoResumeTime($autoResumeTime)
  {
    $this->autoResumeTime = $autoResumeTime;
  }
  /** @return string */
  public function getAutoResumeTime()
  {
    return $this->autoResumeTime;
  }
}

class PrepaidBasePlanType extends \Google\Model
{
  /** @var string */
  public $billingPeriodDuration;
  /** @var string */
  public $timeExtension;

  /** @param string */
  public function setBillingPeriodDuration($billingPeriodDuration)
  {
    $this->billingPeriodDuration = $billingPeriodDuration;
  }
  /** @return string */
  public function getBillingPeriodDuration()
  {
    return $this->billingPeriodDuration;
  }
  /** @param string */
  public function setTimeExtension($timeExtension)
  {
    $this->timeExtension = $timeExtension;
  }
  /** @return string */
  public function getTimeExtension()
  {
    return $this->timeExtension;
  }
}

class PrepaidPlan extends \Google\Model
{
  /** @var string */
  public $allowExtendAfterTime;

  /** @param string */
  public function setAllowExtendAfterTime($allowExtendAfterTime)
  {
    $this->allowExtendAfterTime = $allowExtendAfterTime;
  }
  /** @return string */
  public function getAllowExtendAfterTime()
  {
    return $this->allowExtendAfterTime;
  }
}

class Price extends \Google\Model
{
  /** @var string */
  public $currency;
  /** @var string */
  public $priceMicros;

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
  public function setPriceMicros($priceMicros)
  {
    $this->priceMicros = $priceMicros;
  }
  /** @return string */
  public function getPriceMicros()
  {
    return $this->priceMicros;
  }
}

class ProductPurchase extends \Google\Model
{
  /** @var int */
  public $acknowledgementState;
  /** @var int */
  public $consumptionState;
  /** @var string */
  public $developerPayload;
  /** @var string */
  public $kind;
  /** @var string */
  public $obfuscatedExternalAccountId;
  /** @var string */
  public $obfuscatedExternalProfileId;
  /** @var string */
  public $orderId;
  /** @var string */
  public $productId;
  /** @var int */
  public $purchaseState;
  /** @var string */
  public $purchaseTimeMillis;
  /** @var string */
  public $purchaseToken;
  /** @var int */
  public $purchaseType;
  /** @var int */
  public $quantity;
  /** @var string */
  public $regionCode;

  /** @param int */
  public function setAcknowledgementState($acknowledgementState)
  {
    $this->acknowledgementState = $acknowledgementState;
  }
  /** @return int */
  public function getAcknowledgementState()
  {
    return $this->acknowledgementState;
  }
  /** @param int */
  public function setConsumptionState($consumptionState)
  {
    $this->consumptionState = $consumptionState;
  }
  /** @return int */
  public function getConsumptionState()
  {
    return $this->consumptionState;
  }
  /** @param string */
  public function setDeveloperPayload($developerPayload)
  {
    $this->developerPayload = $developerPayload;
  }
  /** @return string */
  public function getDeveloperPayload()
  {
    return $this->developerPayload;
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
  public function setObfuscatedExternalAccountId($obfuscatedExternalAccountId)
  {
    $this->obfuscatedExternalAccountId = $obfuscatedExternalAccountId;
  }
  /** @return string */
  public function getObfuscatedExternalAccountId()
  {
    return $this->obfuscatedExternalAccountId;
  }
  /** @param string */
  public function setObfuscatedExternalProfileId($obfuscatedExternalProfileId)
  {
    $this->obfuscatedExternalProfileId = $obfuscatedExternalProfileId;
  }
  /** @return string */
  public function getObfuscatedExternalProfileId()
  {
    return $this->obfuscatedExternalProfileId;
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
  public function setPurchaseState($purchaseState)
  {
    $this->purchaseState = $purchaseState;
  }
  /** @return int */
  public function getPurchaseState()
  {
    return $this->purchaseState;
  }
  /** @param string */
  public function setPurchaseTimeMillis($purchaseTimeMillis)
  {
    $this->purchaseTimeMillis = $purchaseTimeMillis;
  }
  /** @return string */
  public function getPurchaseTimeMillis()
  {
    return $this->purchaseTimeMillis;
  }
  /** @param string */
  public function setPurchaseToken($purchaseToken)
  {
    $this->purchaseToken = $purchaseToken;
  }
  /** @return string */
  public function getPurchaseToken()
  {
    return $this->purchaseToken;
  }
  /** @param int */
  public function setPurchaseType($purchaseType)
  {
    $this->purchaseType = $purchaseType;
  }
  /** @return int */
  public function getPurchaseType()
  {
    return $this->purchaseType;
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

class ProductPurchasesAcknowledgeRequest extends \Google\Model
{
  /** @var string */
  public $developerPayload;

  /** @param string */
  public function setDeveloperPayload($developerPayload)
  {
    $this->developerPayload = $developerPayload;
  }
  /** @return string */
  public function getDeveloperPayload()
  {
    return $this->developerPayload;
  }
}

class RegionalBasePlanConfig extends \Google\Model
{
  /** @var bool */
  public $newSubscriberAvailability;
  /** @var Money */
  public $price;
  /** @var string */
  public $regionCode;
  protected $priceType = Money::class;
  protected $priceDataType = '';
  /** @param bool */
  public function setNewSubscriberAvailability($newSubscriberAvailability)
  {
    $this->newSubscriberAvailability = $newSubscriberAvailability;
  }
  /** @return bool */
  public function getNewSubscriberAvailability()
  {
    return $this->newSubscriberAvailability;
  }
  /** @param Money */
  public function setPrice(Money $price)
  {
    $this->price = $price;
  }
  /** @return Money */
  public function getPrice()
  {
    return $this->price;
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

class RegionalPriceMigrationConfig extends \Google\Model
{
  /** @var string */
  public $oldestAllowedPriceVersionTime;
  /** @var string */
  public $regionCode;

  /** @param string */
  public function setOldestAllowedPriceVersionTime($oldestAllowedPriceVersionTime)
  {
    $this->oldestAllowedPriceVersionTime = $oldestAllowedPriceVersionTime;
  }
  /** @return string */
  public function getOldestAllowedPriceVersionTime()
  {
    return $this->oldestAllowedPriceVersionTime;
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

class RegionalSubscriptionOfferConfig extends \Google\Model
{
  /** @var bool */
  public $newSubscriberAvailability;
  /** @var string */
  public $regionCode;

  /** @param bool */
  public function setNewSubscriberAvailability($newSubscriberAvailability)
  {
    $this->newSubscriberAvailability = $newSubscriberAvailability;
  }
  /** @return bool */
  public function getNewSubscriberAvailability()
  {
    return $this->newSubscriberAvailability;
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

class RegionalSubscriptionOfferPhaseConfig extends \Google\Model
{
  /** @var Money */
  public $absoluteDiscount;
  /** @var Money */
  public $price;
  /** @var string */
  public $regionCode;
  public $relativeDiscount;
  protected $absoluteDiscountType = Money::class;
  protected $absoluteDiscountDataType = '';
  protected $priceType = Money::class;
  protected $priceDataType = '';
  /** @param Money */
  public function setAbsoluteDiscount(Money $absoluteDiscount)
  {
    $this->absoluteDiscount = $absoluteDiscount;
  }
  /** @return Money */
  public function getAbsoluteDiscount()
  {
    return $this->absoluteDiscount;
  }
  /** @param Money */
  public function setPrice(Money $price)
  {
    $this->price = $price;
  }
  /** @return Money */
  public function getPrice()
  {
    return $this->price;
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
  public function setRelativeDiscount($relativeDiscount)
  {
    $this->relativeDiscount = $relativeDiscount;
  }
  public function getRelativeDiscount()
  {
    return $this->relativeDiscount;
  }
}

class RegionalTaxRateInfo extends \Google\Model
{
  /** @var bool */
  public $eligibleForStreamingServiceTaxRate;
  /** @var string */
  public $streamingTaxType;
  /** @var string */
  public $taxTier;

  /** @param bool */
  public function setEligibleForStreamingServiceTaxRate($eligibleForStreamingServiceTaxRate)
  {
    $this->eligibleForStreamingServiceTaxRate = $eligibleForStreamingServiceTaxRate;
  }
  /** @return bool */
  public function getEligibleForStreamingServiceTaxRate()
  {
    return $this->eligibleForStreamingServiceTaxRate;
  }
  /** @param string */
  public function setStreamingTaxType($streamingTaxType)
  {
    $this->streamingTaxType = $streamingTaxType;
  }
  /** @return string */
  public function getStreamingTaxType()
  {
    return $this->streamingTaxType;
  }
  /** @param string */
  public function setTaxTier($taxTier)
  {
    $this->taxTier = $taxTier;
  }
  /** @return string */
  public function getTaxTier()
  {
    return $this->taxTier;
  }
}

class RegionsVersion extends \Google\Model
{
  /** @var string */
  public $version;

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

class ReplacementCancellation extends \Google\Model
{
}

class Review extends \Google\Collection
{
  /** @var string */
  public $authorName;
  /** @var Comment[] */
  public $comments;
  /** @var string */
  public $reviewId;
  protected $collection_key = 'comments';
  protected $commentsType = Comment::class;
  protected $commentsDataType = 'array';
  /** @param string */
  public function setAuthorName($authorName)
  {
    $this->authorName = $authorName;
  }
  /** @return string */
  public function getAuthorName()
  {
    return $this->authorName;
  }
  /** @param Comment[] */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  /** @return Comment[] */
  public function getComments()
  {
    return $this->comments;
  }
  /** @param string */
  public function setReviewId($reviewId)
  {
    $this->reviewId = $reviewId;
  }
  /** @return string */
  public function getReviewId()
  {
    return $this->reviewId;
  }
}

class ReviewReplyResult extends \Google\Model
{
  /** @var Timestamp */
  public $lastEdited;
  /** @var string */
  public $replyText;
  protected $lastEditedType = Timestamp::class;
  protected $lastEditedDataType = '';
  /** @param Timestamp */
  public function setLastEdited(Timestamp $lastEdited)
  {
    $this->lastEdited = $lastEdited;
  }
  /** @return Timestamp */
  public function getLastEdited()
  {
    return $this->lastEdited;
  }
  /** @param string */
  public function setReplyText($replyText)
  {
    $this->replyText = $replyText;
  }
  /** @return string */
  public function getReplyText()
  {
    return $this->replyText;
  }
}

class ReviewsListResponse extends \Google\Collection
{
  /** @var PageInfo */
  public $pageInfo;
  /** @var Review[] */
  public $reviews;
  /** @var TokenPagination */
  public $tokenPagination;
  protected $collection_key = 'reviews';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $reviewsType = Review::class;
  protected $reviewsDataType = 'array';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param Review[] */
  public function setReviews($reviews)
  {
    $this->reviews = $reviews;
  }
  /** @return Review[] */
  public function getReviews()
  {
    return $this->reviews;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
}

class ReviewsReplyRequest extends \Google\Model
{
  /** @var string */
  public $replyText;

  /** @param string */
  public function setReplyText($replyText)
  {
    $this->replyText = $replyText;
  }
  /** @return string */
  public function getReplyText()
  {
    return $this->replyText;
  }
}

class ReviewsReplyResponse extends \Google\Model
{
  /** @var ReviewReplyResult */
  public $result;
  protected $resultType = ReviewReplyResult::class;
  protected $resultDataType = '';
  /** @param ReviewReplyResult */
  public function setResult(ReviewReplyResult $result)
  {
    $this->result = $result;
  }
  /** @return ReviewReplyResult */
  public function getResult()
  {
    return $this->result;
  }
}

class SubscribeWithGoogleInfo extends \Google\Model
{
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $familyName;
  /** @var string */
  public $givenName;
  /** @var string */
  public $profileId;
  /** @var string */
  public $profileName;

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
  public function setProfileName($profileName)
  {
    $this->profileName = $profileName;
  }
  /** @return string */
  public function getProfileName()
  {
    return $this->profileName;
  }
}

class Subscription extends \Google\Collection
{
  /** @var bool */
  public $archived;
  /** @var BasePlan[] */
  public $basePlans;
  /** @var SubscriptionListing[] */
  public $listings;
  /** @var string */
  public $packageName;
  /** @var string */
  public $productId;
  /** @var SubscriptionTaxAndComplianceSettings */
  public $taxAndComplianceSettings;
  protected $collection_key = 'listings';
  protected $basePlansType = BasePlan::class;
  protected $basePlansDataType = 'array';
  protected $listingsType = SubscriptionListing::class;
  protected $listingsDataType = 'array';
  protected $taxAndComplianceSettingsType = SubscriptionTaxAndComplianceSettings::class;
  protected $taxAndComplianceSettingsDataType = '';
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
  /** @param BasePlan[] */
  public function setBasePlans($basePlans)
  {
    $this->basePlans = $basePlans;
  }
  /** @return BasePlan[] */
  public function getBasePlans()
  {
    return $this->basePlans;
  }
  /** @param SubscriptionListing[] */
  public function setListings($listings)
  {
    $this->listings = $listings;
  }
  /** @return SubscriptionListing[] */
  public function getListings()
  {
    return $this->listings;
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
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param SubscriptionTaxAndComplianceSettings */
  public function setTaxAndComplianceSettings(SubscriptionTaxAndComplianceSettings $taxAndComplianceSettings)
  {
    $this->taxAndComplianceSettings = $taxAndComplianceSettings;
  }
  /** @return SubscriptionTaxAndComplianceSettings */
  public function getTaxAndComplianceSettings()
  {
    return $this->taxAndComplianceSettings;
  }
}

class SubscriptionCancelSurveyResult extends \Google\Model
{
  /** @var int */
  public $cancelSurveyReason;
  /** @var string */
  public $userInputCancelReason;

  /** @param int */
  public function setCancelSurveyReason($cancelSurveyReason)
  {
    $this->cancelSurveyReason = $cancelSurveyReason;
  }
  /** @return int */
  public function getCancelSurveyReason()
  {
    return $this->cancelSurveyReason;
  }
  /** @param string */
  public function setUserInputCancelReason($userInputCancelReason)
  {
    $this->userInputCancelReason = $userInputCancelReason;
  }
  /** @return string */
  public function getUserInputCancelReason()
  {
    return $this->userInputCancelReason;
  }
}

class SubscriptionDeferralInfo extends \Google\Model
{
  /** @var string */
  public $desiredExpiryTimeMillis;
  /** @var string */
  public $expectedExpiryTimeMillis;

  /** @param string */
  public function setDesiredExpiryTimeMillis($desiredExpiryTimeMillis)
  {
    $this->desiredExpiryTimeMillis = $desiredExpiryTimeMillis;
  }
  /** @return string */
  public function getDesiredExpiryTimeMillis()
  {
    return $this->desiredExpiryTimeMillis;
  }
  /** @param string */
  public function setExpectedExpiryTimeMillis($expectedExpiryTimeMillis)
  {
    $this->expectedExpiryTimeMillis = $expectedExpiryTimeMillis;
  }
  /** @return string */
  public function getExpectedExpiryTimeMillis()
  {
    return $this->expectedExpiryTimeMillis;
  }
}

class SubscriptionItemPriceChangeDetails extends \Google\Model
{
  /** @var string */
  public $expectedNewPriceChargeTime;
  /** @var Money */
  public $newPrice;
  /** @var string */
  public $priceChangeMode;
  /** @var string */
  public $priceChangeState;
  protected $newPriceType = Money::class;
  protected $newPriceDataType = '';
  /** @param string */
  public function setExpectedNewPriceChargeTime($expectedNewPriceChargeTime)
  {
    $this->expectedNewPriceChargeTime = $expectedNewPriceChargeTime;
  }
  /** @return string */
  public function getExpectedNewPriceChargeTime()
  {
    return $this->expectedNewPriceChargeTime;
  }
  /** @param Money */
  public function setNewPrice(Money $newPrice)
  {
    $this->newPrice = $newPrice;
  }
  /** @return Money */
  public function getNewPrice()
  {
    return $this->newPrice;
  }
  /** @param string */
  public function setPriceChangeMode($priceChangeMode)
  {
    $this->priceChangeMode = $priceChangeMode;
  }
  /** @return string */
  public function getPriceChangeMode()
  {
    return $this->priceChangeMode;
  }
  /** @param string */
  public function setPriceChangeState($priceChangeState)
  {
    $this->priceChangeState = $priceChangeState;
  }
  /** @return string */
  public function getPriceChangeState()
  {
    return $this->priceChangeState;
  }
}

class SubscriptionListing extends \Google\Collection
{
  /** @var string[] */
  public $benefits;
  /** @var string */
  public $description;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $title;
  protected $collection_key = 'benefits';
  /** @param string[] */
  public function setBenefits($benefits)
  {
    $this->benefits = $benefits;
  }
  /** @return string[] */
  public function getBenefits()
  {
    return $this->benefits;
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

class SubscriptionOffer extends \Google\Collection
{
  /** @var string */
  public $basePlanId;
  /** @var string */
  public $offerId;
  /** @var OfferTag[] */
  public $offerTags;
  /** @var OtherRegionsSubscriptionOfferConfig */
  public $otherRegionsConfig;
  /** @var string */
  public $packageName;
  /** @var SubscriptionOfferPhase[] */
  public $phases;
  /** @var string */
  public $productId;
  /** @var RegionalSubscriptionOfferConfig[] */
  public $regionalConfigs;
  /** @var string */
  public $state;
  /** @var SubscriptionOfferTargeting */
  public $targeting;
  protected $collection_key = 'regionalConfigs';
  protected $offerTagsType = OfferTag::class;
  protected $offerTagsDataType = 'array';
  protected $otherRegionsConfigType = OtherRegionsSubscriptionOfferConfig::class;
  protected $otherRegionsConfigDataType = '';
  protected $phasesType = SubscriptionOfferPhase::class;
  protected $phasesDataType = 'array';
  protected $regionalConfigsType = RegionalSubscriptionOfferConfig::class;
  protected $regionalConfigsDataType = 'array';
  protected $targetingType = SubscriptionOfferTargeting::class;
  protected $targetingDataType = '';
  /** @param string */
  public function setBasePlanId($basePlanId)
  {
    $this->basePlanId = $basePlanId;
  }
  /** @return string */
  public function getBasePlanId()
  {
    return $this->basePlanId;
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
  /** @param OfferTag[] */
  public function setOfferTags($offerTags)
  {
    $this->offerTags = $offerTags;
  }
  /** @return OfferTag[] */
  public function getOfferTags()
  {
    return $this->offerTags;
  }
  /** @param OtherRegionsSubscriptionOfferConfig */
  public function setOtherRegionsConfig(OtherRegionsSubscriptionOfferConfig $otherRegionsConfig)
  {
    $this->otherRegionsConfig = $otherRegionsConfig;
  }
  /** @return OtherRegionsSubscriptionOfferConfig */
  public function getOtherRegionsConfig()
  {
    return $this->otherRegionsConfig;
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
  /** @param SubscriptionOfferPhase[] */
  public function setPhases($phases)
  {
    $this->phases = $phases;
  }
  /** @return SubscriptionOfferPhase[] */
  public function getPhases()
  {
    return $this->phases;
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
  /** @param RegionalSubscriptionOfferConfig[] */
  public function setRegionalConfigs($regionalConfigs)
  {
    $this->regionalConfigs = $regionalConfigs;
  }
  /** @return RegionalSubscriptionOfferConfig[] */
  public function getRegionalConfigs()
  {
    return $this->regionalConfigs;
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
  /** @param SubscriptionOfferTargeting */
  public function setTargeting(SubscriptionOfferTargeting $targeting)
  {
    $this->targeting = $targeting;
  }
  /** @return SubscriptionOfferTargeting */
  public function getTargeting()
  {
    return $this->targeting;
  }
}

class SubscriptionOfferPhase extends \Google\Collection
{
  /** @var string */
  public $duration;
  /** @var OtherRegionsSubscriptionOfferPhaseConfig */
  public $otherRegionsConfig;
  /** @var int */
  public $recurrenceCount;
  /** @var RegionalSubscriptionOfferPhaseConfig[] */
  public $regionalConfigs;
  protected $collection_key = 'regionalConfigs';
  protected $otherRegionsConfigType = OtherRegionsSubscriptionOfferPhaseConfig::class;
  protected $otherRegionsConfigDataType = '';
  protected $regionalConfigsType = RegionalSubscriptionOfferPhaseConfig::class;
  protected $regionalConfigsDataType = 'array';
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
  /** @param OtherRegionsSubscriptionOfferPhaseConfig */
  public function setOtherRegionsConfig(OtherRegionsSubscriptionOfferPhaseConfig $otherRegionsConfig)
  {
    $this->otherRegionsConfig = $otherRegionsConfig;
  }
  /** @return OtherRegionsSubscriptionOfferPhaseConfig */
  public function getOtherRegionsConfig()
  {
    return $this->otherRegionsConfig;
  }
  /** @param int */
  public function setRecurrenceCount($recurrenceCount)
  {
    $this->recurrenceCount = $recurrenceCount;
  }
  /** @return int */
  public function getRecurrenceCount()
  {
    return $this->recurrenceCount;
  }
  /** @param RegionalSubscriptionOfferPhaseConfig[] */
  public function setRegionalConfigs($regionalConfigs)
  {
    $this->regionalConfigs = $regionalConfigs;
  }
  /** @return RegionalSubscriptionOfferPhaseConfig[] */
  public function getRegionalConfigs()
  {
    return $this->regionalConfigs;
  }
}

class SubscriptionOfferTargeting extends \Google\Model
{
  /** @var AcquisitionTargetingRule */
  public $acquisitionRule;
  /** @var UpgradeTargetingRule */
  public $upgradeRule;
  protected $acquisitionRuleType = AcquisitionTargetingRule::class;
  protected $acquisitionRuleDataType = '';
  protected $upgradeRuleType = UpgradeTargetingRule::class;
  protected $upgradeRuleDataType = '';
  /** @param AcquisitionTargetingRule */
  public function setAcquisitionRule(AcquisitionTargetingRule $acquisitionRule)
  {
    $this->acquisitionRule = $acquisitionRule;
  }
  /** @return AcquisitionTargetingRule */
  public function getAcquisitionRule()
  {
    return $this->acquisitionRule;
  }
  /** @param UpgradeTargetingRule */
  public function setUpgradeRule(UpgradeTargetingRule $upgradeRule)
  {
    $this->upgradeRule = $upgradeRule;
  }
  /** @return UpgradeTargetingRule */
  public function getUpgradeRule()
  {
    return $this->upgradeRule;
  }
}

class SubscriptionPriceChange extends \Google\Model
{
  /** @var Price */
  public $newPrice;
  /** @var int */
  public $state;
  protected $newPriceType = Price::class;
  protected $newPriceDataType = '';
  /** @param Price */
  public function setNewPrice(Price $newPrice)
  {
    $this->newPrice = $newPrice;
  }
  /** @return Price */
  public function getNewPrice()
  {
    return $this->newPrice;
  }
  /** @param int */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return int */
  public function getState()
  {
    return $this->state;
  }
}

class SubscriptionPurchase extends \Google\Model
{
  /** @var int */
  public $acknowledgementState;
  /** @var bool */
  public $autoRenewing;
  /** @var string */
  public $autoResumeTimeMillis;
  /** @var int */
  public $cancelReason;
  /** @var SubscriptionCancelSurveyResult */
  public $cancelSurveyResult;
  /** @var string */
  public $countryCode;
  /** @var string */
  public $developerPayload;
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $expiryTimeMillis;
  /** @var string */
  public $externalAccountId;
  /** @var string */
  public $familyName;
  /** @var string */
  public $givenName;
  /** @var IntroductoryPriceInfo */
  public $introductoryPriceInfo;
  /** @var string */
  public $kind;
  /** @var string */
  public $linkedPurchaseToken;
  /** @var string */
  public $obfuscatedExternalAccountId;
  /** @var string */
  public $obfuscatedExternalProfileId;
  /** @var string */
  public $orderId;
  /** @var int */
  public $paymentState;
  /** @var string */
  public $priceAmountMicros;
  /** @var SubscriptionPriceChange */
  public $priceChange;
  /** @var string */
  public $priceCurrencyCode;
  /** @var string */
  public $profileId;
  /** @var string */
  public $profileName;
  /** @var string */
  public $promotionCode;
  /** @var int */
  public $promotionType;
  /** @var int */
  public $purchaseType;
  /** @var string */
  public $startTimeMillis;
  /** @var string */
  public $userCancellationTimeMillis;
  protected $cancelSurveyResultType = SubscriptionCancelSurveyResult::class;
  protected $cancelSurveyResultDataType = '';
  protected $introductoryPriceInfoType = IntroductoryPriceInfo::class;
  protected $introductoryPriceInfoDataType = '';
  protected $priceChangeType = SubscriptionPriceChange::class;
  protected $priceChangeDataType = '';
  /** @param int */
  public function setAcknowledgementState($acknowledgementState)
  {
    $this->acknowledgementState = $acknowledgementState;
  }
  /** @return int */
  public function getAcknowledgementState()
  {
    return $this->acknowledgementState;
  }
  /** @param bool */
  public function setAutoRenewing($autoRenewing)
  {
    $this->autoRenewing = $autoRenewing;
  }
  /** @return bool */
  public function getAutoRenewing()
  {
    return $this->autoRenewing;
  }
  /** @param string */
  public function setAutoResumeTimeMillis($autoResumeTimeMillis)
  {
    $this->autoResumeTimeMillis = $autoResumeTimeMillis;
  }
  /** @return string */
  public function getAutoResumeTimeMillis()
  {
    return $this->autoResumeTimeMillis;
  }
  /** @param int */
  public function setCancelReason($cancelReason)
  {
    $this->cancelReason = $cancelReason;
  }
  /** @return int */
  public function getCancelReason()
  {
    return $this->cancelReason;
  }
  /** @param SubscriptionCancelSurveyResult */
  public function setCancelSurveyResult(SubscriptionCancelSurveyResult $cancelSurveyResult)
  {
    $this->cancelSurveyResult = $cancelSurveyResult;
  }
  /** @return SubscriptionCancelSurveyResult */
  public function getCancelSurveyResult()
  {
    return $this->cancelSurveyResult;
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
  public function setDeveloperPayload($developerPayload)
  {
    $this->developerPayload = $developerPayload;
  }
  /** @return string */
  public function getDeveloperPayload()
  {
    return $this->developerPayload;
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
  /** @param string */
  public function setExpiryTimeMillis($expiryTimeMillis)
  {
    $this->expiryTimeMillis = $expiryTimeMillis;
  }
  /** @return string */
  public function getExpiryTimeMillis()
  {
    return $this->expiryTimeMillis;
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
  /** @param IntroductoryPriceInfo */
  public function setIntroductoryPriceInfo(IntroductoryPriceInfo $introductoryPriceInfo)
  {
    $this->introductoryPriceInfo = $introductoryPriceInfo;
  }
  /** @return IntroductoryPriceInfo */
  public function getIntroductoryPriceInfo()
  {
    return $this->introductoryPriceInfo;
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
  public function setLinkedPurchaseToken($linkedPurchaseToken)
  {
    $this->linkedPurchaseToken = $linkedPurchaseToken;
  }
  /** @return string */
  public function getLinkedPurchaseToken()
  {
    return $this->linkedPurchaseToken;
  }
  /** @param string */
  public function setObfuscatedExternalAccountId($obfuscatedExternalAccountId)
  {
    $this->obfuscatedExternalAccountId = $obfuscatedExternalAccountId;
  }
  /** @return string */
  public function getObfuscatedExternalAccountId()
  {
    return $this->obfuscatedExternalAccountId;
  }
  /** @param string */
  public function setObfuscatedExternalProfileId($obfuscatedExternalProfileId)
  {
    $this->obfuscatedExternalProfileId = $obfuscatedExternalProfileId;
  }
  /** @return string */
  public function getObfuscatedExternalProfileId()
  {
    return $this->obfuscatedExternalProfileId;
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
  /** @param int */
  public function setPaymentState($paymentState)
  {
    $this->paymentState = $paymentState;
  }
  /** @return int */
  public function getPaymentState()
  {
    return $this->paymentState;
  }
  /** @param string */
  public function setPriceAmountMicros($priceAmountMicros)
  {
    $this->priceAmountMicros = $priceAmountMicros;
  }
  /** @return string */
  public function getPriceAmountMicros()
  {
    return $this->priceAmountMicros;
  }
  /** @param SubscriptionPriceChange */
  public function setPriceChange(SubscriptionPriceChange $priceChange)
  {
    $this->priceChange = $priceChange;
  }
  /** @return SubscriptionPriceChange */
  public function getPriceChange()
  {
    return $this->priceChange;
  }
  /** @param string */
  public function setPriceCurrencyCode($priceCurrencyCode)
  {
    $this->priceCurrencyCode = $priceCurrencyCode;
  }
  /** @return string */
  public function getPriceCurrencyCode()
  {
    return $this->priceCurrencyCode;
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
  public function setProfileName($profileName)
  {
    $this->profileName = $profileName;
  }
  /** @return string */
  public function getProfileName()
  {
    return $this->profileName;
  }
  /** @param string */
  public function setPromotionCode($promotionCode)
  {
    $this->promotionCode = $promotionCode;
  }
  /** @return string */
  public function getPromotionCode()
  {
    return $this->promotionCode;
  }
  /** @param int */
  public function setPromotionType($promotionType)
  {
    $this->promotionType = $promotionType;
  }
  /** @return int */
  public function getPromotionType()
  {
    return $this->promotionType;
  }
  /** @param int */
  public function setPurchaseType($purchaseType)
  {
    $this->purchaseType = $purchaseType;
  }
  /** @return int */
  public function getPurchaseType()
  {
    return $this->purchaseType;
  }
  /** @param string */
  public function setStartTimeMillis($startTimeMillis)
  {
    $this->startTimeMillis = $startTimeMillis;
  }
  /** @return string */
  public function getStartTimeMillis()
  {
    return $this->startTimeMillis;
  }
  /** @param string */
  public function setUserCancellationTimeMillis($userCancellationTimeMillis)
  {
    $this->userCancellationTimeMillis = $userCancellationTimeMillis;
  }
  /** @return string */
  public function getUserCancellationTimeMillis()
  {
    return $this->userCancellationTimeMillis;
  }
}

class SubscriptionPurchaseLineItem extends \Google\Model
{
  /** @var AutoRenewingPlan */
  public $autoRenewingPlan;
  /** @var string */
  public $expiryTime;
  /** @var OfferDetails */
  public $offerDetails;
  /** @var PrepaidPlan */
  public $prepaidPlan;
  /** @var string */
  public $productId;
  protected $autoRenewingPlanType = AutoRenewingPlan::class;
  protected $autoRenewingPlanDataType = '';
  protected $offerDetailsType = OfferDetails::class;
  protected $offerDetailsDataType = '';
  protected $prepaidPlanType = PrepaidPlan::class;
  protected $prepaidPlanDataType = '';
  /** @param AutoRenewingPlan */
  public function setAutoRenewingPlan(AutoRenewingPlan $autoRenewingPlan)
  {
    $this->autoRenewingPlan = $autoRenewingPlan;
  }
  /** @return AutoRenewingPlan */
  public function getAutoRenewingPlan()
  {
    return $this->autoRenewingPlan;
  }
  /** @param string */
  public function setExpiryTime($expiryTime)
  {
    $this->expiryTime = $expiryTime;
  }
  /** @return string */
  public function getExpiryTime()
  {
    return $this->expiryTime;
  }
  /** @param OfferDetails */
  public function setOfferDetails(OfferDetails $offerDetails)
  {
    $this->offerDetails = $offerDetails;
  }
  /** @return OfferDetails */
  public function getOfferDetails()
  {
    return $this->offerDetails;
  }
  /** @param PrepaidPlan */
  public function setPrepaidPlan(PrepaidPlan $prepaidPlan)
  {
    $this->prepaidPlan = $prepaidPlan;
  }
  /** @return PrepaidPlan */
  public function getPrepaidPlan()
  {
    return $this->prepaidPlan;
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

class SubscriptionPurchaseV2 extends \Google\Collection
{
  /** @var string */
  public $acknowledgementState;
  /** @var CanceledStateContext */
  public $canceledStateContext;
  /** @var ExternalAccountIdentifiers */
  public $externalAccountIdentifiers;
  /** @var string */
  public $kind;
  /** @var string */
  public $latestOrderId;
  /** @var SubscriptionPurchaseLineItem[] */
  public $lineItems;
  /** @var string */
  public $linkedPurchaseToken;
  /** @var PausedStateContext */
  public $pausedStateContext;
  /** @var string */
  public $regionCode;
  /** @var string */
  public $startTime;
  /** @var SubscribeWithGoogleInfo */
  public $subscribeWithGoogleInfo;
  /** @var string */
  public $subscriptionState;
  /** @var TestPurchase */
  public $testPurchase;
  protected $collection_key = 'lineItems';
  protected $canceledStateContextType = CanceledStateContext::class;
  protected $canceledStateContextDataType = '';
  protected $externalAccountIdentifiersType = ExternalAccountIdentifiers::class;
  protected $externalAccountIdentifiersDataType = '';
  protected $lineItemsType = SubscriptionPurchaseLineItem::class;
  protected $lineItemsDataType = 'array';
  protected $pausedStateContextType = PausedStateContext::class;
  protected $pausedStateContextDataType = '';
  protected $subscribeWithGoogleInfoType = SubscribeWithGoogleInfo::class;
  protected $subscribeWithGoogleInfoDataType = '';
  protected $testPurchaseType = TestPurchase::class;
  protected $testPurchaseDataType = '';
  /** @param string */
  public function setAcknowledgementState($acknowledgementState)
  {
    $this->acknowledgementState = $acknowledgementState;
  }
  /** @return string */
  public function getAcknowledgementState()
  {
    return $this->acknowledgementState;
  }
  /** @param CanceledStateContext */
  public function setCanceledStateContext(CanceledStateContext $canceledStateContext)
  {
    $this->canceledStateContext = $canceledStateContext;
  }
  /** @return CanceledStateContext */
  public function getCanceledStateContext()
  {
    return $this->canceledStateContext;
  }
  /** @param ExternalAccountIdentifiers */
  public function setExternalAccountIdentifiers(ExternalAccountIdentifiers $externalAccountIdentifiers)
  {
    $this->externalAccountIdentifiers = $externalAccountIdentifiers;
  }
  /** @return ExternalAccountIdentifiers */
  public function getExternalAccountIdentifiers()
  {
    return $this->externalAccountIdentifiers;
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
  public function setLatestOrderId($latestOrderId)
  {
    $this->latestOrderId = $latestOrderId;
  }
  /** @return string */
  public function getLatestOrderId()
  {
    return $this->latestOrderId;
  }
  /** @param SubscriptionPurchaseLineItem[] */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /** @return SubscriptionPurchaseLineItem[] */
  public function getLineItems()
  {
    return $this->lineItems;
  }
  /** @param string */
  public function setLinkedPurchaseToken($linkedPurchaseToken)
  {
    $this->linkedPurchaseToken = $linkedPurchaseToken;
  }
  /** @return string */
  public function getLinkedPurchaseToken()
  {
    return $this->linkedPurchaseToken;
  }
  /** @param PausedStateContext */
  public function setPausedStateContext(PausedStateContext $pausedStateContext)
  {
    $this->pausedStateContext = $pausedStateContext;
  }
  /** @return PausedStateContext */
  public function getPausedStateContext()
  {
    return $this->pausedStateContext;
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
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /** @param SubscribeWithGoogleInfo */
  public function setSubscribeWithGoogleInfo(SubscribeWithGoogleInfo $subscribeWithGoogleInfo)
  {
    $this->subscribeWithGoogleInfo = $subscribeWithGoogleInfo;
  }
  /** @return SubscribeWithGoogleInfo */
  public function getSubscribeWithGoogleInfo()
  {
    return $this->subscribeWithGoogleInfo;
  }
  /** @param string */
  public function setSubscriptionState($subscriptionState)
  {
    $this->subscriptionState = $subscriptionState;
  }
  /** @return string */
  public function getSubscriptionState()
  {
    return $this->subscriptionState;
  }
  /** @param TestPurchase */
  public function setTestPurchase(TestPurchase $testPurchase)
  {
    $this->testPurchase = $testPurchase;
  }
  /** @return TestPurchase */
  public function getTestPurchase()
  {
    return $this->testPurchase;
  }
}

class SubscriptionPurchasesAcknowledgeRequest extends \Google\Model
{
  /** @var string */
  public $developerPayload;

  /** @param string */
  public function setDeveloperPayload($developerPayload)
  {
    $this->developerPayload = $developerPayload;
  }
  /** @return string */
  public function getDeveloperPayload()
  {
    return $this->developerPayload;
  }
}

class SubscriptionPurchasesDeferRequest extends \Google\Model
{
  /** @var SubscriptionDeferralInfo */
  public $deferralInfo;
  protected $deferralInfoType = SubscriptionDeferralInfo::class;
  protected $deferralInfoDataType = '';
  /** @param SubscriptionDeferralInfo */
  public function setDeferralInfo(SubscriptionDeferralInfo $deferralInfo)
  {
    $this->deferralInfo = $deferralInfo;
  }
  /** @return SubscriptionDeferralInfo */
  public function getDeferralInfo()
  {
    return $this->deferralInfo;
  }
}

class SubscriptionPurchasesDeferResponse extends \Google\Model
{
  /** @var string */
  public $newExpiryTimeMillis;

  /** @param string */
  public function setNewExpiryTimeMillis($newExpiryTimeMillis)
  {
    $this->newExpiryTimeMillis = $newExpiryTimeMillis;
  }
  /** @return string */
  public function getNewExpiryTimeMillis()
  {
    return $this->newExpiryTimeMillis;
  }
}

class SubscriptionTaxAndComplianceSettings extends \Google\Model
{
  /** @var string */
  public $eeaWithdrawalRightType;
  /** @var RegionalTaxRateInfo[] */
  public $taxRateInfoByRegionCode;
  protected $taxRateInfoByRegionCodeType = RegionalTaxRateInfo::class;
  protected $taxRateInfoByRegionCodeDataType = 'map';
  /** @param string */
  public function setEeaWithdrawalRightType($eeaWithdrawalRightType)
  {
    $this->eeaWithdrawalRightType = $eeaWithdrawalRightType;
  }
  /** @return string */
  public function getEeaWithdrawalRightType()
  {
    return $this->eeaWithdrawalRightType;
  }
  /** @param RegionalTaxRateInfo[] */
  public function setTaxRateInfoByRegionCode($taxRateInfoByRegionCode)
  {
    $this->taxRateInfoByRegionCode = $taxRateInfoByRegionCode;
  }
  /** @return RegionalTaxRateInfo[] */
  public function getTaxRateInfoByRegionCode()
  {
    return $this->taxRateInfoByRegionCode;
  }
}

class SystemApksListResponse extends \Google\Collection
{
  /** @var Variant[] */
  public $variants;
  protected $collection_key = 'variants';
  protected $variantsType = Variant::class;
  protected $variantsDataType = 'array';
  /** @param Variant[] */
  public function setVariants($variants)
  {
    $this->variants = $variants;
  }
  /** @return Variant[] */
  public function getVariants()
  {
    return $this->variants;
  }
}

class SystemFeature extends \Google\Model
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

class SystemInitiatedCancellation extends \Google\Model
{
}

class TargetingRuleScope extends \Google\Model
{
  /** @var string */
  public $specificSubscriptionInApp;

  /** @param string */
  public function setSpecificSubscriptionInApp($specificSubscriptionInApp)
  {
    $this->specificSubscriptionInApp = $specificSubscriptionInApp;
  }
  /** @return string */
  public function getSpecificSubscriptionInApp()
  {
    return $this->specificSubscriptionInApp;
  }
}

class TestPurchase extends \Google\Model
{
}

class Testers extends \Google\Collection
{
  /** @var string[] */
  public $googleGroups;
  protected $collection_key = 'googleGroups';
  /** @param string[] */
  public function setGoogleGroups($googleGroups)
  {
    $this->googleGroups = $googleGroups;
  }
  /** @return string[] */
  public function getGoogleGroups()
  {
    return $this->googleGroups;
  }
}

class Timestamp extends \Google\Model
{
  /** @var int */
  public $nanos;
  /** @var string */
  public $seconds;

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

class TokenPagination extends \Google\Model
{
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $previousPageToken;

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
  /** @param string */
  public function setPreviousPageToken($previousPageToken)
  {
    $this->previousPageToken = $previousPageToken;
  }
  /** @return string */
  public function getPreviousPageToken()
  {
    return $this->previousPageToken;
  }
}

class Track extends \Google\Collection
{
  /** @var TrackRelease[] */
  public $releases;
  /** @var string */
  public $track;
  protected $collection_key = 'releases';
  protected $releasesType = TrackRelease::class;
  protected $releasesDataType = 'array';
  /** @param TrackRelease[] */
  public function setReleases($releases)
  {
    $this->releases = $releases;
  }
  /** @return TrackRelease[] */
  public function getReleases()
  {
    return $this->releases;
  }
  /** @param string */
  public function setTrack($track)
  {
    $this->track = $track;
  }
  /** @return string */
  public function getTrack()
  {
    return $this->track;
  }
}

class TrackCountryAvailability extends \Google\Collection
{
  /** @var TrackTargetedCountry[] */
  public $countries;
  /** @var bool */
  public $restOfWorld;
  /** @var bool */
  public $syncWithProduction;
  protected $collection_key = 'countries';
  protected $countriesType = TrackTargetedCountry::class;
  protected $countriesDataType = 'array';
  /** @param TrackTargetedCountry[] */
  public function setCountries($countries)
  {
    $this->countries = $countries;
  }
  /** @return TrackTargetedCountry[] */
  public function getCountries()
  {
    return $this->countries;
  }
  /** @param bool */
  public function setRestOfWorld($restOfWorld)
  {
    $this->restOfWorld = $restOfWorld;
  }
  /** @return bool */
  public function getRestOfWorld()
  {
    return $this->restOfWorld;
  }
  /** @param bool */
  public function setSyncWithProduction($syncWithProduction)
  {
    $this->syncWithProduction = $syncWithProduction;
  }
  /** @return bool */
  public function getSyncWithProduction()
  {
    return $this->syncWithProduction;
  }
}

class TrackRelease extends \Google\Collection
{
  /** @var CountryTargeting */
  public $countryTargeting;
  /** @var int */
  public $inAppUpdatePriority;
  /** @var string */
  public $name;
  /** @var LocalizedText[] */
  public $releaseNotes;
  /** @var string */
  public $status;
  public $userFraction;
  /** @var string[] */
  public $versionCodes;
  protected $collection_key = 'versionCodes';
  protected $countryTargetingType = CountryTargeting::class;
  protected $countryTargetingDataType = '';
  protected $releaseNotesType = LocalizedText::class;
  protected $releaseNotesDataType = 'array';
  /** @param CountryTargeting */
  public function setCountryTargeting(CountryTargeting $countryTargeting)
  {
    $this->countryTargeting = $countryTargeting;
  }
  /** @return CountryTargeting */
  public function getCountryTargeting()
  {
    return $this->countryTargeting;
  }
  /** @param int */
  public function setInAppUpdatePriority($inAppUpdatePriority)
  {
    $this->inAppUpdatePriority = $inAppUpdatePriority;
  }
  /** @return int */
  public function getInAppUpdatePriority()
  {
    return $this->inAppUpdatePriority;
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
  /** @param LocalizedText[] */
  public function setReleaseNotes($releaseNotes)
  {
    $this->releaseNotes = $releaseNotes;
  }
  /** @return LocalizedText[] */
  public function getReleaseNotes()
  {
    return $this->releaseNotes;
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
  public function setUserFraction($userFraction)
  {
    $this->userFraction = $userFraction;
  }
  public function getUserFraction()
  {
    return $this->userFraction;
  }
  /** @param string[] */
  public function setVersionCodes($versionCodes)
  {
    $this->versionCodes = $versionCodes;
  }
  /** @return string[] */
  public function getVersionCodes()
  {
    return $this->versionCodes;
  }
}

class TrackTargetedCountry extends \Google\Model
{
  /** @var string */
  public $countryCode;

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

class TracksListResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var Track[] */
  public $tracks;
  protected $collection_key = 'tracks';
  protected $tracksType = Track::class;
  protected $tracksDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param Track[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return Track[] */
  public function getTracks()
  {
    return $this->tracks;
  }
}

class UpgradeTargetingRule extends \Google\Model
{
  /** @var string */
  public $billingPeriodDuration;
  /** @var bool */
  public $oncePerUser;
  /** @var TargetingRuleScope */
  public $scope;
  protected $scopeType = TargetingRuleScope::class;
  protected $scopeDataType = '';
  /** @param string */
  public function setBillingPeriodDuration($billingPeriodDuration)
  {
    $this->billingPeriodDuration = $billingPeriodDuration;
  }
  /** @return string */
  public function getBillingPeriodDuration()
  {
    return $this->billingPeriodDuration;
  }
  /** @param bool */
  public function setOncePerUser($oncePerUser)
  {
    $this->oncePerUser = $oncePerUser;
  }
  /** @return bool */
  public function getOncePerUser()
  {
    return $this->oncePerUser;
  }
  /** @param TargetingRuleScope */
  public function setScope(TargetingRuleScope $scope)
  {
    $this->scope = $scope;
  }
  /** @return TargetingRuleScope */
  public function getScope()
  {
    return $this->scope;
  }
}

class User extends \Google\Collection
{
  /** @var string */
  public $accessState;
  /** @var string[] */
  public $developerAccountPermissions;
  /** @var string */
  public $email;
  /** @var string */
  public $expirationTime;
  /** @var Grant[] */
  public $grants;
  /** @var string */
  public $name;
  /** @var bool */
  public $partial;
  protected $collection_key = 'grants';
  protected $grantsType = Grant::class;
  protected $grantsDataType = 'array';
  /** @param string */
  public function setAccessState($accessState)
  {
    $this->accessState = $accessState;
  }
  /** @return string */
  public function getAccessState()
  {
    return $this->accessState;
  }
  /** @param string[] */
  public function setDeveloperAccountPermissions($developerAccountPermissions)
  {
    $this->developerAccountPermissions = $developerAccountPermissions;
  }
  /** @return string[] */
  public function getDeveloperAccountPermissions()
  {
    return $this->developerAccountPermissions;
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
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
  /** @param Grant[] */
  public function setGrants($grants)
  {
    $this->grants = $grants;
  }
  /** @return Grant[] */
  public function getGrants()
  {
    return $this->grants;
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
  public function setPartial($partial)
  {
    $this->partial = $partial;
  }
  /** @return bool */
  public function getPartial()
  {
    return $this->partial;
  }
}

class UserComment extends \Google\Model
{
  /** @var int */
  public $androidOsVersion;
  /** @var int */
  public $appVersionCode;
  /** @var string */
  public $appVersionName;
  /** @var string */
  public $device;
  /** @var DeviceMetadata */
  public $deviceMetadata;
  /** @var Timestamp */
  public $lastModified;
  /** @var string */
  public $originalText;
  /** @var string */
  public $reviewerLanguage;
  /** @var int */
  public $starRating;
  /** @var string */
  public $text;
  /** @var int */
  public $thumbsDownCount;
  /** @var int */
  public $thumbsUpCount;
  protected $deviceMetadataType = DeviceMetadata::class;
  protected $deviceMetadataDataType = '';
  protected $lastModifiedType = Timestamp::class;
  protected $lastModifiedDataType = '';
  /** @param int */
  public function setAndroidOsVersion($androidOsVersion)
  {
    $this->androidOsVersion = $androidOsVersion;
  }
  /** @return int */
  public function getAndroidOsVersion()
  {
    return $this->androidOsVersion;
  }
  /** @param int */
  public function setAppVersionCode($appVersionCode)
  {
    $this->appVersionCode = $appVersionCode;
  }
  /** @return int */
  public function getAppVersionCode()
  {
    return $this->appVersionCode;
  }
  /** @param string */
  public function setAppVersionName($appVersionName)
  {
    $this->appVersionName = $appVersionName;
  }
  /** @return string */
  public function getAppVersionName()
  {
    return $this->appVersionName;
  }
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
  /** @param DeviceMetadata */
  public function setDeviceMetadata(DeviceMetadata $deviceMetadata)
  {
    $this->deviceMetadata = $deviceMetadata;
  }
  /** @return DeviceMetadata */
  public function getDeviceMetadata()
  {
    return $this->deviceMetadata;
  }
  /** @param Timestamp */
  public function setLastModified(Timestamp $lastModified)
  {
    $this->lastModified = $lastModified;
  }
  /** @return Timestamp */
  public function getLastModified()
  {
    return $this->lastModified;
  }
  /** @param string */
  public function setOriginalText($originalText)
  {
    $this->originalText = $originalText;
  }
  /** @return string */
  public function getOriginalText()
  {
    return $this->originalText;
  }
  /** @param string */
  public function setReviewerLanguage($reviewerLanguage)
  {
    $this->reviewerLanguage = $reviewerLanguage;
  }
  /** @return string */
  public function getReviewerLanguage()
  {
    return $this->reviewerLanguage;
  }
  /** @param int */
  public function setStarRating($starRating)
  {
    $this->starRating = $starRating;
  }
  /** @return int */
  public function getStarRating()
  {
    return $this->starRating;
  }
  /** @param string */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
  /** @param int */
  public function setThumbsDownCount($thumbsDownCount)
  {
    $this->thumbsDownCount = $thumbsDownCount;
  }
  /** @return int */
  public function getThumbsDownCount()
  {
    return $this->thumbsDownCount;
  }
  /** @param int */
  public function setThumbsUpCount($thumbsUpCount)
  {
    $this->thumbsUpCount = $thumbsUpCount;
  }
  /** @return int */
  public function getThumbsUpCount()
  {
    return $this->thumbsUpCount;
  }
}

class UserInitiatedCancellation extends \Google\Model
{
  /** @var CancelSurveyResult */
  public $cancelSurveyResult;
  /** @var string */
  public $cancelTime;
  protected $cancelSurveyResultType = CancelSurveyResult::class;
  protected $cancelSurveyResultDataType = '';
  /** @param CancelSurveyResult */
  public function setCancelSurveyResult(CancelSurveyResult $cancelSurveyResult)
  {
    $this->cancelSurveyResult = $cancelSurveyResult;
  }
  /** @return CancelSurveyResult */
  public function getCancelSurveyResult()
  {
    return $this->cancelSurveyResult;
  }
  /** @param string */
  public function setCancelTime($cancelTime)
  {
    $this->cancelTime = $cancelTime;
  }
  /** @return string */
  public function getCancelTime()
  {
    return $this->cancelTime;
  }
}

class UsesPermission extends \Google\Model
{
  /** @var int */
  public $maxSdkVersion;
  /** @var string */
  public $name;

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

class Variant extends \Google\Model
{
  /** @var DeviceSpec */
  public $deviceSpec;
  /** @var string */
  public $variantId;
  protected $deviceSpecType = DeviceSpec::class;
  protected $deviceSpecDataType = '';
  /** @param DeviceSpec */
  public function setDeviceSpec(DeviceSpec $deviceSpec)
  {
    $this->deviceSpec = $deviceSpec;
  }
  /** @return DeviceSpec */
  public function getDeviceSpec()
  {
    return $this->deviceSpec;
  }
  /** @param string */
  public function setVariantId($variantId)
  {
    $this->variantId = $variantId;
  }
  /** @return string */
  public function getVariantId()
  {
    return $this->variantId;
  }
}

class VoidedPurchase extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $orderId;
  /** @var string */
  public $purchaseTimeMillis;
  /** @var string */
  public $purchaseToken;
  /** @var int */
  public $voidedReason;
  /** @var int */
  public $voidedSource;
  /** @var string */
  public $voidedTimeMillis;

  /** @param string */
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
  /** @param string */
  public function setPurchaseTimeMillis($purchaseTimeMillis)
  {
    $this->purchaseTimeMillis = $purchaseTimeMillis;
  }
  /** @return string */
  public function getPurchaseTimeMillis()
  {
    return $this->purchaseTimeMillis;
  }
  /** @param string */
  public function setPurchaseToken($purchaseToken)
  {
    $this->purchaseToken = $purchaseToken;
  }
  /** @return string */
  public function getPurchaseToken()
  {
    return $this->purchaseToken;
  }
  /** @param int */
  public function setVoidedReason($voidedReason)
  {
    $this->voidedReason = $voidedReason;
  }
  /** @return int */
  public function getVoidedReason()
  {
    return $this->voidedReason;
  }
  /** @param int */
  public function setVoidedSource($voidedSource)
  {
    $this->voidedSource = $voidedSource;
  }
  /** @return int */
  public function getVoidedSource()
  {
    return $this->voidedSource;
  }
  /** @param string */
  public function setVoidedTimeMillis($voidedTimeMillis)
  {
    $this->voidedTimeMillis = $voidedTimeMillis;
  }
  /** @return string */
  public function getVoidedTimeMillis()
  {
    return $this->voidedTimeMillis;
  }
}

class VoidedPurchasesListResponse extends \Google\Collection
{
  /** @var PageInfo */
  public $pageInfo;
  /** @var TokenPagination */
  public $tokenPagination;
  /** @var VoidedPurchase[] */
  public $voidedPurchases;
  protected $collection_key = 'voidedPurchases';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
  protected $voidedPurchasesType = VoidedPurchase::class;
  protected $voidedPurchasesDataType = 'array';
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  /** @param VoidedPurchase[] */
  public function setVoidedPurchases($voidedPurchases)
  {
    $this->voidedPurchases = $voidedPurchases;
  }
  /** @return VoidedPurchase[] */
  public function getVoidedPurchases()
  {
    return $this->voidedPurchases;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AcquisitionTargetingRule::class, 'Google_Service_AndroidPublisher_AcquisitionTargetingRule');
class_alias(ActivateBasePlanRequest::class, 'Google_Service_AndroidPublisher_ActivateBasePlanRequest');
class_alias(ActivateSubscriptionOfferRequest::class, 'Google_Service_AndroidPublisher_ActivateSubscriptionOfferRequest');
class_alias(Apk::class, 'Google_Service_AndroidPublisher_Apk');
class_alias(ApkBinary::class, 'Google_Service_AndroidPublisher_ApkBinary');
class_alias(ApksAddExternallyHostedRequest::class, 'Google_Service_AndroidPublisher_ApksAddExternallyHostedRequest');
class_alias(ApksAddExternallyHostedResponse::class, 'Google_Service_AndroidPublisher_ApksAddExternallyHostedResponse');
class_alias(ApksListResponse::class, 'Google_Service_AndroidPublisher_ApksListResponse');
class_alias(AppDetails::class, 'Google_Service_AndroidPublisher_AppDetails');
class_alias(AppEdit::class, 'Google_Service_AndroidPublisher_AppEdit');
class_alias(ArchiveSubscriptionRequest::class, 'Google_Service_AndroidPublisher_ArchiveSubscriptionRequest');
class_alias(AutoRenewingBasePlanType::class, 'Google_Service_AndroidPublisher_AutoRenewingBasePlanType');
class_alias(AutoRenewingPlan::class, 'Google_Service_AndroidPublisher_AutoRenewingPlan');
class_alias(BasePlan::class, 'Google_Service_AndroidPublisher_BasePlan');
class_alias(Bundle::class, 'Google_Service_AndroidPublisher_Bundle');
class_alias(BundlesListResponse::class, 'Google_Service_AndroidPublisher_BundlesListResponse');
class_alias(CancelSurveyResult::class, 'Google_Service_AndroidPublisher_CancelSurveyResult');
class_alias(CanceledStateContext::class, 'Google_Service_AndroidPublisher_CanceledStateContext');
class_alias(Comment::class, 'Google_Service_AndroidPublisher_Comment');
class_alias(ConvertRegionPricesRequest::class, 'Google_Service_AndroidPublisher_ConvertRegionPricesRequest');
class_alias(ConvertRegionPricesResponse::class, 'Google_Service_AndroidPublisher_ConvertRegionPricesResponse');
class_alias(ConvertedOtherRegionsPrice::class, 'Google_Service_AndroidPublisher_ConvertedOtherRegionsPrice');
class_alias(ConvertedRegionPrice::class, 'Google_Service_AndroidPublisher_ConvertedRegionPrice');
class_alias(CountryTargeting::class, 'Google_Service_AndroidPublisher_CountryTargeting');
class_alias(DeactivateBasePlanRequest::class, 'Google_Service_AndroidPublisher_DeactivateBasePlanRequest');
class_alias(DeactivateSubscriptionOfferRequest::class, 'Google_Service_AndroidPublisher_DeactivateSubscriptionOfferRequest');
class_alias(DeobfuscationFile::class, 'Google_Service_AndroidPublisher_DeobfuscationFile');
class_alias(DeobfuscationFilesUploadResponse::class, 'Google_Service_AndroidPublisher_DeobfuscationFilesUploadResponse');
class_alias(DeveloperComment::class, 'Google_Service_AndroidPublisher_DeveloperComment');
class_alias(DeveloperInitiatedCancellation::class, 'Google_Service_AndroidPublisher_DeveloperInitiatedCancellation');
class_alias(DeviceGroup::class, 'Google_Service_AndroidPublisher_DeviceGroup');
class_alias(DeviceId::class, 'Google_Service_AndroidPublisher_DeviceId');
class_alias(DeviceMetadata::class, 'Google_Service_AndroidPublisher_DeviceMetadata');
class_alias(DeviceRam::class, 'Google_Service_AndroidPublisher_DeviceRam');
class_alias(DeviceSelector::class, 'Google_Service_AndroidPublisher_DeviceSelector');
class_alias(DeviceSpec::class, 'Google_Service_AndroidPublisher_DeviceSpec');
class_alias(DeviceTier::class, 'Google_Service_AndroidPublisher_DeviceTier');
class_alias(DeviceTierConfig::class, 'Google_Service_AndroidPublisher_DeviceTierConfig');
class_alias(DeviceTierSet::class, 'Google_Service_AndroidPublisher_DeviceTierSet');
class_alias(ExpansionFile::class, 'Google_Service_AndroidPublisher_ExpansionFile');
class_alias(ExpansionFilesUploadResponse::class, 'Google_Service_AndroidPublisher_ExpansionFilesUploadResponse');
class_alias(ExternalAccountIdentifiers::class, 'Google_Service_AndroidPublisher_ExternalAccountIdentifiers');
class_alias(ExternallyHostedApk::class, 'Google_Service_AndroidPublisher_ExternallyHostedApk');
class_alias(GeneratedApksListResponse::class, 'Google_Service_AndroidPublisher_GeneratedApksListResponse');
class_alias(GeneratedApksPerSigningKey::class, 'Google_Service_AndroidPublisher_GeneratedApksPerSigningKey');
class_alias(GeneratedAssetPackSlice::class, 'Google_Service_AndroidPublisher_GeneratedAssetPackSlice');
class_alias(GeneratedSplitApk::class, 'Google_Service_AndroidPublisher_GeneratedSplitApk');
class_alias(GeneratedStandaloneApk::class, 'Google_Service_AndroidPublisher_GeneratedStandaloneApk');
class_alias(GeneratedUniversalApk::class, 'Google_Service_AndroidPublisher_GeneratedUniversalApk');
class_alias(Grant::class, 'Google_Service_AndroidPublisher_Grant');
class_alias(Image::class, 'Google_Service_AndroidPublisher_Image');
class_alias(ImagesDeleteAllResponse::class, 'Google_Service_AndroidPublisher_ImagesDeleteAllResponse');
class_alias(ImagesListResponse::class, 'Google_Service_AndroidPublisher_ImagesListResponse');
class_alias(ImagesUploadResponse::class, 'Google_Service_AndroidPublisher_ImagesUploadResponse');
class_alias(InAppProduct::class, 'Google_Service_AndroidPublisher_InAppProduct');
class_alias(InAppProductListing::class, 'Google_Service_AndroidPublisher_InAppProductListing');
class_alias(InappproductsListResponse::class, 'Google_Service_AndroidPublisher_InappproductsListResponse');
class_alias(InternalAppSharingArtifact::class, 'Google_Service_AndroidPublisher_InternalAppSharingArtifact');
class_alias(IntroductoryPriceInfo::class, 'Google_Service_AndroidPublisher_IntroductoryPriceInfo');
class_alias(ListDeviceTierConfigsResponse::class, 'Google_Service_AndroidPublisher_ListDeviceTierConfigsResponse');
class_alias(ListSubscriptionOffersResponse::class, 'Google_Service_AndroidPublisher_ListSubscriptionOffersResponse');
class_alias(ListSubscriptionsResponse::class, 'Google_Service_AndroidPublisher_ListSubscriptionsResponse');
class_alias(ListUsersResponse::class, 'Google_Service_AndroidPublisher_ListUsersResponse');
class_alias(Listing::class, 'Google_Service_AndroidPublisher_Listing');
class_alias(ListingsListResponse::class, 'Google_Service_AndroidPublisher_ListingsListResponse');
class_alias(LocalizedText::class, 'Google_Service_AndroidPublisher_LocalizedText');
class_alias(ManagedProductTaxAndComplianceSettings::class, 'Google_Service_AndroidPublisher_ManagedProductTaxAndComplianceSettings');
class_alias(MigrateBasePlanPricesRequest::class, 'Google_Service_AndroidPublisher_MigrateBasePlanPricesRequest');
class_alias(MigrateBasePlanPricesResponse::class, 'Google_Service_AndroidPublisher_MigrateBasePlanPricesResponse');
class_alias(Money::class, 'Google_Service_AndroidPublisher_Money');
class_alias(OfferDetails::class, 'Google_Service_AndroidPublisher_OfferDetails');
class_alias(OfferTag::class, 'Google_Service_AndroidPublisher_OfferTag');
class_alias(OtherRegionsBasePlanConfig::class, 'Google_Service_AndroidPublisher_OtherRegionsBasePlanConfig');
class_alias(OtherRegionsSubscriptionOfferConfig::class, 'Google_Service_AndroidPublisher_OtherRegionsSubscriptionOfferConfig');
class_alias(OtherRegionsSubscriptionOfferPhaseConfig::class, 'Google_Service_AndroidPublisher_OtherRegionsSubscriptionOfferPhaseConfig');
class_alias(OtherRegionsSubscriptionOfferPhasePrices::class, 'Google_Service_AndroidPublisher_OtherRegionsSubscriptionOfferPhasePrices');
class_alias(PageInfo::class, 'Google_Service_AndroidPublisher_PageInfo');
class_alias(PausedStateContext::class, 'Google_Service_AndroidPublisher_PausedStateContext');
class_alias(PrepaidBasePlanType::class, 'Google_Service_AndroidPublisher_PrepaidBasePlanType');
class_alias(PrepaidPlan::class, 'Google_Service_AndroidPublisher_PrepaidPlan');
class_alias(Price::class, 'Google_Service_AndroidPublisher_Price');
class_alias(ProductPurchase::class, 'Google_Service_AndroidPublisher_ProductPurchase');
class_alias(ProductPurchasesAcknowledgeRequest::class, 'Google_Service_AndroidPublisher_ProductPurchasesAcknowledgeRequest');
class_alias(RegionalBasePlanConfig::class, 'Google_Service_AndroidPublisher_RegionalBasePlanConfig');
class_alias(RegionalPriceMigrationConfig::class, 'Google_Service_AndroidPublisher_RegionalPriceMigrationConfig');
class_alias(RegionalSubscriptionOfferConfig::class, 'Google_Service_AndroidPublisher_RegionalSubscriptionOfferConfig');
class_alias(RegionalSubscriptionOfferPhaseConfig::class, 'Google_Service_AndroidPublisher_RegionalSubscriptionOfferPhaseConfig');
class_alias(RegionalTaxRateInfo::class, 'Google_Service_AndroidPublisher_RegionalTaxRateInfo');
class_alias(RegionsVersion::class, 'Google_Service_AndroidPublisher_RegionsVersion');
class_alias(ReplacementCancellation::class, 'Google_Service_AndroidPublisher_ReplacementCancellation');
class_alias(Review::class, 'Google_Service_AndroidPublisher_Review');
class_alias(ReviewReplyResult::class, 'Google_Service_AndroidPublisher_ReviewReplyResult');
class_alias(ReviewsListResponse::class, 'Google_Service_AndroidPublisher_ReviewsListResponse');
class_alias(ReviewsReplyRequest::class, 'Google_Service_AndroidPublisher_ReviewsReplyRequest');
class_alias(ReviewsReplyResponse::class, 'Google_Service_AndroidPublisher_ReviewsReplyResponse');
class_alias(SubscribeWithGoogleInfo::class, 'Google_Service_AndroidPublisher_SubscribeWithGoogleInfo');
class_alias(Subscription::class, 'Google_Service_AndroidPublisher_Subscription');
class_alias(SubscriptionCancelSurveyResult::class, 'Google_Service_AndroidPublisher_SubscriptionCancelSurveyResult');
class_alias(SubscriptionDeferralInfo::class, 'Google_Service_AndroidPublisher_SubscriptionDeferralInfo');
class_alias(SubscriptionItemPriceChangeDetails::class, 'Google_Service_AndroidPublisher_SubscriptionItemPriceChangeDetails');
class_alias(SubscriptionListing::class, 'Google_Service_AndroidPublisher_SubscriptionListing');
class_alias(SubscriptionOffer::class, 'Google_Service_AndroidPublisher_SubscriptionOffer');
class_alias(SubscriptionOfferPhase::class, 'Google_Service_AndroidPublisher_SubscriptionOfferPhase');
class_alias(SubscriptionOfferTargeting::class, 'Google_Service_AndroidPublisher_SubscriptionOfferTargeting');
class_alias(SubscriptionPriceChange::class, 'Google_Service_AndroidPublisher_SubscriptionPriceChange');
class_alias(SubscriptionPurchase::class, 'Google_Service_AndroidPublisher_SubscriptionPurchase');
class_alias(SubscriptionPurchaseLineItem::class, 'Google_Service_AndroidPublisher_SubscriptionPurchaseLineItem');
class_alias(SubscriptionPurchaseV2::class, 'Google_Service_AndroidPublisher_SubscriptionPurchaseV2');
class_alias(SubscriptionPurchasesAcknowledgeRequest::class, 'Google_Service_AndroidPublisher_SubscriptionPurchasesAcknowledgeRequest');
class_alias(SubscriptionPurchasesDeferRequest::class, 'Google_Service_AndroidPublisher_SubscriptionPurchasesDeferRequest');
class_alias(SubscriptionPurchasesDeferResponse::class, 'Google_Service_AndroidPublisher_SubscriptionPurchasesDeferResponse');
class_alias(SubscriptionTaxAndComplianceSettings::class, 'Google_Service_AndroidPublisher_SubscriptionTaxAndComplianceSettings');
class_alias(SystemApksListResponse::class, 'Google_Service_AndroidPublisher_SystemApksListResponse');
class_alias(SystemFeature::class, 'Google_Service_AndroidPublisher_SystemFeature');
class_alias(SystemInitiatedCancellation::class, 'Google_Service_AndroidPublisher_SystemInitiatedCancellation');
class_alias(TargetingRuleScope::class, 'Google_Service_AndroidPublisher_TargetingRuleScope');
class_alias(TestPurchase::class, 'Google_Service_AndroidPublisher_TestPurchase');
class_alias(Testers::class, 'Google_Service_AndroidPublisher_Testers');
class_alias(Timestamp::class, 'Google_Service_AndroidPublisher_Timestamp');
class_alias(TokenPagination::class, 'Google_Service_AndroidPublisher_TokenPagination');
class_alias(Track::class, 'Google_Service_AndroidPublisher_Track');
class_alias(TrackCountryAvailability::class, 'Google_Service_AndroidPublisher_TrackCountryAvailability');
class_alias(TrackRelease::class, 'Google_Service_AndroidPublisher_TrackRelease');
class_alias(TrackTargetedCountry::class, 'Google_Service_AndroidPublisher_TrackTargetedCountry');
class_alias(TracksListResponse::class, 'Google_Service_AndroidPublisher_TracksListResponse');
class_alias(UpgradeTargetingRule::class, 'Google_Service_AndroidPublisher_UpgradeTargetingRule');
class_alias(User::class, 'Google_Service_AndroidPublisher_User');
class_alias(UserComment::class, 'Google_Service_AndroidPublisher_UserComment');
class_alias(UserInitiatedCancellation::class, 'Google_Service_AndroidPublisher_UserInitiatedCancellation');
class_alias(UsesPermission::class, 'Google_Service_AndroidPublisher_UsesPermission');
class_alias(Variant::class, 'Google_Service_AndroidPublisher_Variant');
class_alias(VoidedPurchase::class, 'Google_Service_AndroidPublisher_VoidedPurchase');
class_alias(VoidedPurchasesListResponse::class, 'Google_Service_AndroidPublisher_VoidedPurchasesListResponse');
