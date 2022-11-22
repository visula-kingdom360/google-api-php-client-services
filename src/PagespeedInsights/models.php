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

namespace Google\Service\PagespeedInsights;

class AuditRefs extends \Google\Collection
{
  /** @var string */
  public $acronym;
  /** @var string */
  public $group;
  /** @var string */
  public $id;
  /** @var string[] */
  public $relevantAudits;
  public $weight;
  protected $collection_key = 'relevantAudits';
  /** @param string */
  public function setAcronym($acronym)
  {
    $this->acronym = $acronym;
  }
  /** @return string */
  public function getAcronym()
  {
    return $this->acronym;
  }
  /** @param string */
  public function setGroup($group)
  {
    $this->group = $group;
  }
  /** @return string */
  public function getGroup()
  {
    return $this->group;
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
  public function setRelevantAudits($relevantAudits)
  {
    $this->relevantAudits = $relevantAudits;
  }
  /** @return string[] */
  public function getRelevantAudits()
  {
    return $this->relevantAudits;
  }
  public function setWeight($weight)
  {
    $this->weight = $weight;
  }
  public function getWeight()
  {
    return $this->weight;
  }
}

class Bucket extends \Google\Model
{
  /** @var int */
  public $max;
  /** @var int */
  public $min;
  public $proportion;

  /** @param int */
  public function setMax($max)
  {
    $this->max = $max;
  }
  /** @return int */
  public function getMax()
  {
    return $this->max;
  }
  /** @param int */
  public function setMin($min)
  {
    $this->min = $min;
  }
  /** @return int */
  public function getMin()
  {
    return $this->min;
  }
  public function setProportion($proportion)
  {
    $this->proportion = $proportion;
  }
  public function getProportion()
  {
    return $this->proportion;
  }
}

class Categories extends \Google\Model
{
  /** @var LighthouseCategoryV5 */
  public $accessibility;
  /** @var LighthouseCategoryV5 */
  public $bestPractices;
  /** @var LighthouseCategoryV5 */
  public $performance;
  /** @var LighthouseCategoryV5 */
  public $pwa;
  /** @var LighthouseCategoryV5 */
  public $seo;
  protected $internal_gapi_mappings = [
        "bestPractices" => "best-practices",
  ];
  protected $accessibilityType = LighthouseCategoryV5::class;
  protected $accessibilityDataType = '';
  protected $bestPracticesType = LighthouseCategoryV5::class;
  protected $bestPracticesDataType = '';
  protected $performanceType = LighthouseCategoryV5::class;
  protected $performanceDataType = '';
  protected $pwaType = LighthouseCategoryV5::class;
  protected $pwaDataType = '';
  protected $seoType = LighthouseCategoryV5::class;
  protected $seoDataType = '';
  /** @param LighthouseCategoryV5 */
  public function setAccessibility(LighthouseCategoryV5 $accessibility)
  {
    $this->accessibility = $accessibility;
  }
  /** @return LighthouseCategoryV5 */
  public function getAccessibility()
  {
    return $this->accessibility;
  }
  /** @param LighthouseCategoryV5 */
  public function setBestPractices(LighthouseCategoryV5 $bestPractices)
  {
    $this->bestPractices = $bestPractices;
  }
  /** @return LighthouseCategoryV5 */
  public function getBestPractices()
  {
    return $this->bestPractices;
  }
  /** @param LighthouseCategoryV5 */
  public function setPerformance(LighthouseCategoryV5 $performance)
  {
    $this->performance = $performance;
  }
  /** @return LighthouseCategoryV5 */
  public function getPerformance()
  {
    return $this->performance;
  }
  /** @param LighthouseCategoryV5 */
  public function setPwa(LighthouseCategoryV5 $pwa)
  {
    $this->pwa = $pwa;
  }
  /** @return LighthouseCategoryV5 */
  public function getPwa()
  {
    return $this->pwa;
  }
  /** @param LighthouseCategoryV5 */
  public function setSeo(LighthouseCategoryV5 $seo)
  {
    $this->seo = $seo;
  }
  /** @return LighthouseCategoryV5 */
  public function getSeo()
  {
    return $this->seo;
  }
}

class CategoryGroupV5 extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $title;

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

class ConfigSettings extends \Google\Model
{
  /** @var string */
  public $channel;
  /** @var string */
  public $emulatedFormFactor;
  /** @var string */
  public $formFactor;
  /** @var string */
  public $locale;
  /** @var array */
  public $onlyCategories;

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
  public function setEmulatedFormFactor($emulatedFormFactor)
  {
    $this->emulatedFormFactor = $emulatedFormFactor;
  }
  /** @return string */
  public function getEmulatedFormFactor()
  {
    return $this->emulatedFormFactor;
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
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
  }
  /** @param array */
  public function setOnlyCategories($onlyCategories)
  {
    $this->onlyCategories = $onlyCategories;
  }
  /** @return array */
  public function getOnlyCategories()
  {
    return $this->onlyCategories;
  }
}

class Environment extends \Google\Model
{
  public $benchmarkIndex;
  /** @var string */
  public $hostUserAgent;
  /** @var string */
  public $networkUserAgent;

  public function setBenchmarkIndex($benchmarkIndex)
  {
    $this->benchmarkIndex = $benchmarkIndex;
  }
  public function getBenchmarkIndex()
  {
    return $this->benchmarkIndex;
  }
  /** @param string */
  public function setHostUserAgent($hostUserAgent)
  {
    $this->hostUserAgent = $hostUserAgent;
  }
  /** @return string */
  public function getHostUserAgent()
  {
    return $this->hostUserAgent;
  }
  /** @param string */
  public function setNetworkUserAgent($networkUserAgent)
  {
    $this->networkUserAgent = $networkUserAgent;
  }
  /** @return string */
  public function getNetworkUserAgent()
  {
    return $this->networkUserAgent;
  }
}

class I18n extends \Google\Model
{
  /** @var RendererFormattedStrings */
  public $rendererFormattedStrings;
  protected $rendererFormattedStringsType = RendererFormattedStrings::class;
  protected $rendererFormattedStringsDataType = '';
  /** @param RendererFormattedStrings */
  public function setRendererFormattedStrings(RendererFormattedStrings $rendererFormattedStrings)
  {
    $this->rendererFormattedStrings = $rendererFormattedStrings;
  }
  /** @return RendererFormattedStrings */
  public function getRendererFormattedStrings()
  {
    return $this->rendererFormattedStrings;
  }
}

class LighthouseAuditResultV5 extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var array[] */
  public $details;
  /** @var string */
  public $displayValue;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $explanation;
  /** @var string */
  public $id;
  /** @var string */
  public $numericUnit;
  public $numericValue;
  /** @var array */
  public $score;
  /** @var string */
  public $scoreDisplayMode;
  /** @var string */
  public $title;
  /** @var array */
  public $warnings;

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
  public function setDisplayValue($displayValue)
  {
    $this->displayValue = $displayValue;
  }
  /** @return string */
  public function getDisplayValue()
  {
    return $this->displayValue;
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
  public function setExplanation($explanation)
  {
    $this->explanation = $explanation;
  }
  /** @return string */
  public function getExplanation()
  {
    return $this->explanation;
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
  public function setNumericUnit($numericUnit)
  {
    $this->numericUnit = $numericUnit;
  }
  /** @return string */
  public function getNumericUnit()
  {
    return $this->numericUnit;
  }
  public function setNumericValue($numericValue)
  {
    $this->numericValue = $numericValue;
  }
  public function getNumericValue()
  {
    return $this->numericValue;
  }
  /** @param array */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return array */
  public function getScore()
  {
    return $this->score;
  }
  /** @param string */
  public function setScoreDisplayMode($scoreDisplayMode)
  {
    $this->scoreDisplayMode = $scoreDisplayMode;
  }
  /** @return string */
  public function getScoreDisplayMode()
  {
    return $this->scoreDisplayMode;
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
  /** @param array */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return array */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class LighthouseCategoryV5 extends \Google\Collection
{
  /** @var AuditRefs[] */
  public $auditRefs;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var string */
  public $manualDescription;
  /** @var array */
  public $score;
  /** @var string */
  public $title;
  protected $collection_key = 'auditRefs';
  protected $auditRefsType = AuditRefs::class;
  protected $auditRefsDataType = 'array';
  /** @param AuditRefs[] */
  public function setAuditRefs($auditRefs)
  {
    $this->auditRefs = $auditRefs;
  }
  /** @return AuditRefs[] */
  public function getAuditRefs()
  {
    return $this->auditRefs;
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
  public function setManualDescription($manualDescription)
  {
    $this->manualDescription = $manualDescription;
  }
  /** @return string */
  public function getManualDescription()
  {
    return $this->manualDescription;
  }
  /** @param array */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return array */
  public function getScore()
  {
    return $this->score;
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

class LighthouseResultV5 extends \Google\Collection
{
  /** @var LighthouseAuditResultV5[] */
  public $audits;
  /** @var Categories */
  public $categories;
  /** @var CategoryGroupV5[] */
  public $categoryGroups;
  /** @var ConfigSettings */
  public $configSettings;
  /** @var Environment */
  public $environment;
  /** @var string */
  public $fetchTime;
  /** @var string */
  public $finalUrl;
  /** @var I18n */
  public $i18n;
  /** @var string */
  public $lighthouseVersion;
  /** @var string */
  public $requestedUrl;
  /** @var array[] */
  public $runWarnings;
  /** @var RuntimeError */
  public $runtimeError;
  /** @var StackPack[] */
  public $stackPacks;
  /** @var Timing */
  public $timing;
  /** @var string */
  public $userAgent;
  protected $collection_key = 'stackPacks';
  protected $auditsType = LighthouseAuditResultV5::class;
  protected $auditsDataType = 'map';
  protected $categoriesType = Categories::class;
  protected $categoriesDataType = '';
  protected $categoryGroupsType = CategoryGroupV5::class;
  protected $categoryGroupsDataType = 'map';
  protected $configSettingsType = ConfigSettings::class;
  protected $configSettingsDataType = '';
  protected $environmentType = Environment::class;
  protected $environmentDataType = '';
  protected $i18nType = I18n::class;
  protected $i18nDataType = '';
  protected $runtimeErrorType = RuntimeError::class;
  protected $runtimeErrorDataType = '';
  protected $stackPacksType = StackPack::class;
  protected $stackPacksDataType = 'array';
  protected $timingType = Timing::class;
  protected $timingDataType = '';
  /** @param LighthouseAuditResultV5[] */
  public function setAudits($audits)
  {
    $this->audits = $audits;
  }
  /** @return LighthouseAuditResultV5[] */
  public function getAudits()
  {
    return $this->audits;
  }
  /** @param Categories */
  public function setCategories(Categories $categories)
  {
    $this->categories = $categories;
  }
  /** @return Categories */
  public function getCategories()
  {
    return $this->categories;
  }
  /** @param CategoryGroupV5[] */
  public function setCategoryGroups($categoryGroups)
  {
    $this->categoryGroups = $categoryGroups;
  }
  /** @return CategoryGroupV5[] */
  public function getCategoryGroups()
  {
    return $this->categoryGroups;
  }
  /** @param ConfigSettings */
  public function setConfigSettings(ConfigSettings $configSettings)
  {
    $this->configSettings = $configSettings;
  }
  /** @return ConfigSettings */
  public function getConfigSettings()
  {
    return $this->configSettings;
  }
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
  public function setFetchTime($fetchTime)
  {
    $this->fetchTime = $fetchTime;
  }
  /** @return string */
  public function getFetchTime()
  {
    return $this->fetchTime;
  }
  /** @param string */
  public function setFinalUrl($finalUrl)
  {
    $this->finalUrl = $finalUrl;
  }
  /** @return string */
  public function getFinalUrl()
  {
    return $this->finalUrl;
  }
  /** @param I18n */
  public function setI18n(I18n $i18n)
  {
    $this->i18n = $i18n;
  }
  /** @return I18n */
  public function getI18n()
  {
    return $this->i18n;
  }
  /** @param string */
  public function setLighthouseVersion($lighthouseVersion)
  {
    $this->lighthouseVersion = $lighthouseVersion;
  }
  /** @return string */
  public function getLighthouseVersion()
  {
    return $this->lighthouseVersion;
  }
  /** @param string */
  public function setRequestedUrl($requestedUrl)
  {
    $this->requestedUrl = $requestedUrl;
  }
  /** @return string */
  public function getRequestedUrl()
  {
    return $this->requestedUrl;
  }
  /** @param array[] */
  public function setRunWarnings($runWarnings)
  {
    $this->runWarnings = $runWarnings;
  }
  /** @return array[] */
  public function getRunWarnings()
  {
    return $this->runWarnings;
  }
  /** @param RuntimeError */
  public function setRuntimeError(RuntimeError $runtimeError)
  {
    $this->runtimeError = $runtimeError;
  }
  /** @return RuntimeError */
  public function getRuntimeError()
  {
    return $this->runtimeError;
  }
  /** @param StackPack[] */
  public function setStackPacks($stackPacks)
  {
    $this->stackPacks = $stackPacks;
  }
  /** @return StackPack[] */
  public function getStackPacks()
  {
    return $this->stackPacks;
  }
  /** @param Timing */
  public function setTiming(Timing $timing)
  {
    $this->timing = $timing;
  }
  /** @return Timing */
  public function getTiming()
  {
    return $this->timing;
  }
  /** @param string */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /** @return string */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
}

class PagespeedApiLoadingExperienceV5 extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $initialUrl;
  /** @var UserPageLoadMetricV5[] */
  public $metrics;
  /** @var bool */
  public $originFallback;
  /** @var string */
  public $overallCategory;
  protected $internal_gapi_mappings = [
        "initialUrl" => "initial_url",
        "originFallback" => "origin_fallback",
        "overallCategory" => "overall_category",
  ];
  protected $metricsType = UserPageLoadMetricV5::class;
  protected $metricsDataType = 'map';
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
  public function setInitialUrl($initialUrl)
  {
    $this->initialUrl = $initialUrl;
  }
  /** @return string */
  public function getInitialUrl()
  {
    return $this->initialUrl;
  }
  /** @param UserPageLoadMetricV5[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return UserPageLoadMetricV5[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param bool */
  public function setOriginFallback($originFallback)
  {
    $this->originFallback = $originFallback;
  }
  /** @return bool */
  public function getOriginFallback()
  {
    return $this->originFallback;
  }
  /** @param string */
  public function setOverallCategory($overallCategory)
  {
    $this->overallCategory = $overallCategory;
  }
  /** @return string */
  public function getOverallCategory()
  {
    return $this->overallCategory;
  }
}

class PagespeedApiPagespeedResponseV5 extends \Google\Model
{
  /** @var string */
  public $analysisUTCTimestamp;
  /** @var string */
  public $captchaResult;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var LighthouseResultV5 */
  public $lighthouseResult;
  /** @var PagespeedApiLoadingExperienceV5 */
  public $loadingExperience;
  /** @var PagespeedApiLoadingExperienceV5 */
  public $originLoadingExperience;
  /** @var PagespeedVersion */
  public $version;
  protected $lighthouseResultType = LighthouseResultV5::class;
  protected $lighthouseResultDataType = '';
  protected $loadingExperienceType = PagespeedApiLoadingExperienceV5::class;
  protected $loadingExperienceDataType = '';
  protected $originLoadingExperienceType = PagespeedApiLoadingExperienceV5::class;
  protected $originLoadingExperienceDataType = '';
  protected $versionType = PagespeedVersion::class;
  protected $versionDataType = '';
  /** @param string */
  public function setAnalysisUTCTimestamp($analysisUTCTimestamp)
  {
    $this->analysisUTCTimestamp = $analysisUTCTimestamp;
  }
  /** @return string */
  public function getAnalysisUTCTimestamp()
  {
    return $this->analysisUTCTimestamp;
  }
  /** @param string */
  public function setCaptchaResult($captchaResult)
  {
    $this->captchaResult = $captchaResult;
  }
  /** @return string */
  public function getCaptchaResult()
  {
    return $this->captchaResult;
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
  /** @param LighthouseResultV5 */
  public function setLighthouseResult(LighthouseResultV5 $lighthouseResult)
  {
    $this->lighthouseResult = $lighthouseResult;
  }
  /** @return LighthouseResultV5 */
  public function getLighthouseResult()
  {
    return $this->lighthouseResult;
  }
  /** @param PagespeedApiLoadingExperienceV5 */
  public function setLoadingExperience(PagespeedApiLoadingExperienceV5 $loadingExperience)
  {
    $this->loadingExperience = $loadingExperience;
  }
  /** @return PagespeedApiLoadingExperienceV5 */
  public function getLoadingExperience()
  {
    return $this->loadingExperience;
  }
  /** @param PagespeedApiLoadingExperienceV5 */
  public function setOriginLoadingExperience(PagespeedApiLoadingExperienceV5 $originLoadingExperience)
  {
    $this->originLoadingExperience = $originLoadingExperience;
  }
  /** @return PagespeedApiLoadingExperienceV5 */
  public function getOriginLoadingExperience()
  {
    return $this->originLoadingExperience;
  }
  /** @param PagespeedVersion */
  public function setVersion(PagespeedVersion $version)
  {
    $this->version = $version;
  }
  /** @return PagespeedVersion */
  public function getVersion()
  {
    return $this->version;
  }
}

class PagespeedVersion extends \Google\Model
{
  /** @var string */
  public $major;
  /** @var string */
  public $minor;

  /** @param string */
  public function setMajor($major)
  {
    $this->major = $major;
  }
  /** @return string */
  public function getMajor()
  {
    return $this->major;
  }
  /** @param string */
  public function setMinor($minor)
  {
    $this->minor = $minor;
  }
  /** @return string */
  public function getMinor()
  {
    return $this->minor;
  }
}

class RendererFormattedStrings extends \Google\Model
{
  /** @var string */
  public $auditGroupExpandTooltip;
  /** @var string */
  public $calculatorLink;
  /** @var string */
  public $crcInitialNavigation;
  /** @var string */
  public $crcLongestDurationLabel;
  /** @var string */
  public $dropdownCopyJSON;
  /** @var string */
  public $dropdownDarkTheme;
  /** @var string */
  public $dropdownPrintExpanded;
  /** @var string */
  public $dropdownPrintSummary;
  /** @var string */
  public $dropdownSaveGist;
  /** @var string */
  public $dropdownSaveHTML;
  /** @var string */
  public $dropdownSaveJSON;
  /** @var string */
  public $dropdownViewer;
  /** @var string */
  public $errorLabel;
  /** @var string */
  public $errorMissingAuditInfo;
  /** @var string */
  public $footerIssue;
  /** @var string */
  public $labDataTitle;
  /** @var string */
  public $lsPerformanceCategoryDescription;
  /** @var string */
  public $manualAuditsGroupTitle;
  /** @var string */
  public $notApplicableAuditsGroupTitle;
  /** @var string */
  public $opportunityResourceColumnLabel;
  /** @var string */
  public $opportunitySavingsColumnLabel;
  /** @var string */
  public $passedAuditsGroupTitle;
  /** @var string */
  public $runtimeDesktopEmulation;
  /** @var string */
  public $runtimeMobileEmulation;
  /** @var string */
  public $runtimeNoEmulation;
  /** @var string */
  public $runtimeSettingsAxeVersion;
  /** @var string */
  public $runtimeSettingsBenchmark;
  /** @var string */
  public $runtimeSettingsCPUThrottling;
  /** @var string */
  public $runtimeSettingsChannel;
  /** @var string */
  public $runtimeSettingsDevice;
  /** @var string */
  public $runtimeSettingsFetchTime;
  /** @var string */
  public $runtimeSettingsNetworkThrottling;
  /** @var string */
  public $runtimeSettingsTitle;
  /** @var string */
  public $runtimeSettingsUA;
  /** @var string */
  public $runtimeSettingsUANetwork;
  /** @var string */
  public $runtimeSettingsUrl;
  /** @var string */
  public $runtimeUnknown;
  /** @var string */
  public $scorescaleLabel;
  /** @var string */
  public $showRelevantAudits;
  /** @var string */
  public $snippetCollapseButtonLabel;
  /** @var string */
  public $snippetExpandButtonLabel;
  /** @var string */
  public $thirdPartyResourcesLabel;
  /** @var string */
  public $throttlingProvided;
  /** @var string */
  public $toplevelWarningsMessage;
  /** @var string */
  public $varianceDisclaimer;
  /** @var string */
  public $viewTreemapLabel;
  /** @var string */
  public $warningAuditsGroupTitle;
  /** @var string */
  public $warningHeader;

  /** @param string */
  public function setAuditGroupExpandTooltip($auditGroupExpandTooltip)
  {
    $this->auditGroupExpandTooltip = $auditGroupExpandTooltip;
  }
  /** @return string */
  public function getAuditGroupExpandTooltip()
  {
    return $this->auditGroupExpandTooltip;
  }
  /** @param string */
  public function setCalculatorLink($calculatorLink)
  {
    $this->calculatorLink = $calculatorLink;
  }
  /** @return string */
  public function getCalculatorLink()
  {
    return $this->calculatorLink;
  }
  /** @param string */
  public function setCrcInitialNavigation($crcInitialNavigation)
  {
    $this->crcInitialNavigation = $crcInitialNavigation;
  }
  /** @return string */
  public function getCrcInitialNavigation()
  {
    return $this->crcInitialNavigation;
  }
  /** @param string */
  public function setCrcLongestDurationLabel($crcLongestDurationLabel)
  {
    $this->crcLongestDurationLabel = $crcLongestDurationLabel;
  }
  /** @return string */
  public function getCrcLongestDurationLabel()
  {
    return $this->crcLongestDurationLabel;
  }
  /** @param string */
  public function setDropdownCopyJSON($dropdownCopyJSON)
  {
    $this->dropdownCopyJSON = $dropdownCopyJSON;
  }
  /** @return string */
  public function getDropdownCopyJSON()
  {
    return $this->dropdownCopyJSON;
  }
  /** @param string */
  public function setDropdownDarkTheme($dropdownDarkTheme)
  {
    $this->dropdownDarkTheme = $dropdownDarkTheme;
  }
  /** @return string */
  public function getDropdownDarkTheme()
  {
    return $this->dropdownDarkTheme;
  }
  /** @param string */
  public function setDropdownPrintExpanded($dropdownPrintExpanded)
  {
    $this->dropdownPrintExpanded = $dropdownPrintExpanded;
  }
  /** @return string */
  public function getDropdownPrintExpanded()
  {
    return $this->dropdownPrintExpanded;
  }
  /** @param string */
  public function setDropdownPrintSummary($dropdownPrintSummary)
  {
    $this->dropdownPrintSummary = $dropdownPrintSummary;
  }
  /** @return string */
  public function getDropdownPrintSummary()
  {
    return $this->dropdownPrintSummary;
  }
  /** @param string */
  public function setDropdownSaveGist($dropdownSaveGist)
  {
    $this->dropdownSaveGist = $dropdownSaveGist;
  }
  /** @return string */
  public function getDropdownSaveGist()
  {
    return $this->dropdownSaveGist;
  }
  /** @param string */
  public function setDropdownSaveHTML($dropdownSaveHTML)
  {
    $this->dropdownSaveHTML = $dropdownSaveHTML;
  }
  /** @return string */
  public function getDropdownSaveHTML()
  {
    return $this->dropdownSaveHTML;
  }
  /** @param string */
  public function setDropdownSaveJSON($dropdownSaveJSON)
  {
    $this->dropdownSaveJSON = $dropdownSaveJSON;
  }
  /** @return string */
  public function getDropdownSaveJSON()
  {
    return $this->dropdownSaveJSON;
  }
  /** @param string */
  public function setDropdownViewer($dropdownViewer)
  {
    $this->dropdownViewer = $dropdownViewer;
  }
  /** @return string */
  public function getDropdownViewer()
  {
    return $this->dropdownViewer;
  }
  /** @param string */
  public function setErrorLabel($errorLabel)
  {
    $this->errorLabel = $errorLabel;
  }
  /** @return string */
  public function getErrorLabel()
  {
    return $this->errorLabel;
  }
  /** @param string */
  public function setErrorMissingAuditInfo($errorMissingAuditInfo)
  {
    $this->errorMissingAuditInfo = $errorMissingAuditInfo;
  }
  /** @return string */
  public function getErrorMissingAuditInfo()
  {
    return $this->errorMissingAuditInfo;
  }
  /** @param string */
  public function setFooterIssue($footerIssue)
  {
    $this->footerIssue = $footerIssue;
  }
  /** @return string */
  public function getFooterIssue()
  {
    return $this->footerIssue;
  }
  /** @param string */
  public function setLabDataTitle($labDataTitle)
  {
    $this->labDataTitle = $labDataTitle;
  }
  /** @return string */
  public function getLabDataTitle()
  {
    return $this->labDataTitle;
  }
  /** @param string */
  public function setLsPerformanceCategoryDescription($lsPerformanceCategoryDescription)
  {
    $this->lsPerformanceCategoryDescription = $lsPerformanceCategoryDescription;
  }
  /** @return string */
  public function getLsPerformanceCategoryDescription()
  {
    return $this->lsPerformanceCategoryDescription;
  }
  /** @param string */
  public function setManualAuditsGroupTitle($manualAuditsGroupTitle)
  {
    $this->manualAuditsGroupTitle = $manualAuditsGroupTitle;
  }
  /** @return string */
  public function getManualAuditsGroupTitle()
  {
    return $this->manualAuditsGroupTitle;
  }
  /** @param string */
  public function setNotApplicableAuditsGroupTitle($notApplicableAuditsGroupTitle)
  {
    $this->notApplicableAuditsGroupTitle = $notApplicableAuditsGroupTitle;
  }
  /** @return string */
  public function getNotApplicableAuditsGroupTitle()
  {
    return $this->notApplicableAuditsGroupTitle;
  }
  /** @param string */
  public function setOpportunityResourceColumnLabel($opportunityResourceColumnLabel)
  {
    $this->opportunityResourceColumnLabel = $opportunityResourceColumnLabel;
  }
  /** @return string */
  public function getOpportunityResourceColumnLabel()
  {
    return $this->opportunityResourceColumnLabel;
  }
  /** @param string */
  public function setOpportunitySavingsColumnLabel($opportunitySavingsColumnLabel)
  {
    $this->opportunitySavingsColumnLabel = $opportunitySavingsColumnLabel;
  }
  /** @return string */
  public function getOpportunitySavingsColumnLabel()
  {
    return $this->opportunitySavingsColumnLabel;
  }
  /** @param string */
  public function setPassedAuditsGroupTitle($passedAuditsGroupTitle)
  {
    $this->passedAuditsGroupTitle = $passedAuditsGroupTitle;
  }
  /** @return string */
  public function getPassedAuditsGroupTitle()
  {
    return $this->passedAuditsGroupTitle;
  }
  /** @param string */
  public function setRuntimeDesktopEmulation($runtimeDesktopEmulation)
  {
    $this->runtimeDesktopEmulation = $runtimeDesktopEmulation;
  }
  /** @return string */
  public function getRuntimeDesktopEmulation()
  {
    return $this->runtimeDesktopEmulation;
  }
  /** @param string */
  public function setRuntimeMobileEmulation($runtimeMobileEmulation)
  {
    $this->runtimeMobileEmulation = $runtimeMobileEmulation;
  }
  /** @return string */
  public function getRuntimeMobileEmulation()
  {
    return $this->runtimeMobileEmulation;
  }
  /** @param string */
  public function setRuntimeNoEmulation($runtimeNoEmulation)
  {
    $this->runtimeNoEmulation = $runtimeNoEmulation;
  }
  /** @return string */
  public function getRuntimeNoEmulation()
  {
    return $this->runtimeNoEmulation;
  }
  /** @param string */
  public function setRuntimeSettingsAxeVersion($runtimeSettingsAxeVersion)
  {
    $this->runtimeSettingsAxeVersion = $runtimeSettingsAxeVersion;
  }
  /** @return string */
  public function getRuntimeSettingsAxeVersion()
  {
    return $this->runtimeSettingsAxeVersion;
  }
  /** @param string */
  public function setRuntimeSettingsBenchmark($runtimeSettingsBenchmark)
  {
    $this->runtimeSettingsBenchmark = $runtimeSettingsBenchmark;
  }
  /** @return string */
  public function getRuntimeSettingsBenchmark()
  {
    return $this->runtimeSettingsBenchmark;
  }
  /** @param string */
  public function setRuntimeSettingsCPUThrottling($runtimeSettingsCPUThrottling)
  {
    $this->runtimeSettingsCPUThrottling = $runtimeSettingsCPUThrottling;
  }
  /** @return string */
  public function getRuntimeSettingsCPUThrottling()
  {
    return $this->runtimeSettingsCPUThrottling;
  }
  /** @param string */
  public function setRuntimeSettingsChannel($runtimeSettingsChannel)
  {
    $this->runtimeSettingsChannel = $runtimeSettingsChannel;
  }
  /** @return string */
  public function getRuntimeSettingsChannel()
  {
    return $this->runtimeSettingsChannel;
  }
  /** @param string */
  public function setRuntimeSettingsDevice($runtimeSettingsDevice)
  {
    $this->runtimeSettingsDevice = $runtimeSettingsDevice;
  }
  /** @return string */
  public function getRuntimeSettingsDevice()
  {
    return $this->runtimeSettingsDevice;
  }
  /** @param string */
  public function setRuntimeSettingsFetchTime($runtimeSettingsFetchTime)
  {
    $this->runtimeSettingsFetchTime = $runtimeSettingsFetchTime;
  }
  /** @return string */
  public function getRuntimeSettingsFetchTime()
  {
    return $this->runtimeSettingsFetchTime;
  }
  /** @param string */
  public function setRuntimeSettingsNetworkThrottling($runtimeSettingsNetworkThrottling)
  {
    $this->runtimeSettingsNetworkThrottling = $runtimeSettingsNetworkThrottling;
  }
  /** @return string */
  public function getRuntimeSettingsNetworkThrottling()
  {
    return $this->runtimeSettingsNetworkThrottling;
  }
  /** @param string */
  public function setRuntimeSettingsTitle($runtimeSettingsTitle)
  {
    $this->runtimeSettingsTitle = $runtimeSettingsTitle;
  }
  /** @return string */
  public function getRuntimeSettingsTitle()
  {
    return $this->runtimeSettingsTitle;
  }
  /** @param string */
  public function setRuntimeSettingsUA($runtimeSettingsUA)
  {
    $this->runtimeSettingsUA = $runtimeSettingsUA;
  }
  /** @return string */
  public function getRuntimeSettingsUA()
  {
    return $this->runtimeSettingsUA;
  }
  /** @param string */
  public function setRuntimeSettingsUANetwork($runtimeSettingsUANetwork)
  {
    $this->runtimeSettingsUANetwork = $runtimeSettingsUANetwork;
  }
  /** @return string */
  public function getRuntimeSettingsUANetwork()
  {
    return $this->runtimeSettingsUANetwork;
  }
  /** @param string */
  public function setRuntimeSettingsUrl($runtimeSettingsUrl)
  {
    $this->runtimeSettingsUrl = $runtimeSettingsUrl;
  }
  /** @return string */
  public function getRuntimeSettingsUrl()
  {
    return $this->runtimeSettingsUrl;
  }
  /** @param string */
  public function setRuntimeUnknown($runtimeUnknown)
  {
    $this->runtimeUnknown = $runtimeUnknown;
  }
  /** @return string */
  public function getRuntimeUnknown()
  {
    return $this->runtimeUnknown;
  }
  /** @param string */
  public function setScorescaleLabel($scorescaleLabel)
  {
    $this->scorescaleLabel = $scorescaleLabel;
  }
  /** @return string */
  public function getScorescaleLabel()
  {
    return $this->scorescaleLabel;
  }
  /** @param string */
  public function setShowRelevantAudits($showRelevantAudits)
  {
    $this->showRelevantAudits = $showRelevantAudits;
  }
  /** @return string */
  public function getShowRelevantAudits()
  {
    return $this->showRelevantAudits;
  }
  /** @param string */
  public function setSnippetCollapseButtonLabel($snippetCollapseButtonLabel)
  {
    $this->snippetCollapseButtonLabel = $snippetCollapseButtonLabel;
  }
  /** @return string */
  public function getSnippetCollapseButtonLabel()
  {
    return $this->snippetCollapseButtonLabel;
  }
  /** @param string */
  public function setSnippetExpandButtonLabel($snippetExpandButtonLabel)
  {
    $this->snippetExpandButtonLabel = $snippetExpandButtonLabel;
  }
  /** @return string */
  public function getSnippetExpandButtonLabel()
  {
    return $this->snippetExpandButtonLabel;
  }
  /** @param string */
  public function setThirdPartyResourcesLabel($thirdPartyResourcesLabel)
  {
    $this->thirdPartyResourcesLabel = $thirdPartyResourcesLabel;
  }
  /** @return string */
  public function getThirdPartyResourcesLabel()
  {
    return $this->thirdPartyResourcesLabel;
  }
  /** @param string */
  public function setThrottlingProvided($throttlingProvided)
  {
    $this->throttlingProvided = $throttlingProvided;
  }
  /** @return string */
  public function getThrottlingProvided()
  {
    return $this->throttlingProvided;
  }
  /** @param string */
  public function setToplevelWarningsMessage($toplevelWarningsMessage)
  {
    $this->toplevelWarningsMessage = $toplevelWarningsMessage;
  }
  /** @return string */
  public function getToplevelWarningsMessage()
  {
    return $this->toplevelWarningsMessage;
  }
  /** @param string */
  public function setVarianceDisclaimer($varianceDisclaimer)
  {
    $this->varianceDisclaimer = $varianceDisclaimer;
  }
  /** @return string */
  public function getVarianceDisclaimer()
  {
    return $this->varianceDisclaimer;
  }
  /** @param string */
  public function setViewTreemapLabel($viewTreemapLabel)
  {
    $this->viewTreemapLabel = $viewTreemapLabel;
  }
  /** @return string */
  public function getViewTreemapLabel()
  {
    return $this->viewTreemapLabel;
  }
  /** @param string */
  public function setWarningAuditsGroupTitle($warningAuditsGroupTitle)
  {
    $this->warningAuditsGroupTitle = $warningAuditsGroupTitle;
  }
  /** @return string */
  public function getWarningAuditsGroupTitle()
  {
    return $this->warningAuditsGroupTitle;
  }
  /** @param string */
  public function setWarningHeader($warningHeader)
  {
    $this->warningHeader = $warningHeader;
  }
  /** @return string */
  public function getWarningHeader()
  {
    return $this->warningHeader;
  }
}

class RuntimeError extends \Google\Model
{
  /** @var string */
  public $code;
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

class StackPack extends \Google\Model
{
  /** @var string[] */
  public $descriptions;
  /** @var string */
  public $iconDataURL;
  /** @var string */
  public $id;
  /** @var string */
  public $title;

  /** @param string[] */
  public function setDescriptions($descriptions)
  {
    $this->descriptions = $descriptions;
  }
  /** @return string[] */
  public function getDescriptions()
  {
    return $this->descriptions;
  }
  /** @param string */
  public function setIconDataURL($iconDataURL)
  {
    $this->iconDataURL = $iconDataURL;
  }
  /** @return string */
  public function getIconDataURL()
  {
    return $this->iconDataURL;
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

class Timing extends \Google\Model
{
  public $total;

  public function setTotal($total)
  {
    $this->total = $total;
  }
  public function getTotal()
  {
    return $this->total;
  }
}

class UserPageLoadMetricV5 extends \Google\Collection
{
  /** @var string */
  public $category;
  /** @var Bucket[] */
  public $distributions;
  /** @var string */
  public $formFactor;
  /** @var int */
  public $median;
  /** @var string */
  public $metricId;
  /** @var int */
  public $percentile;
  protected $collection_key = 'distributions';
  protected $distributionsType = Bucket::class;
  protected $distributionsDataType = 'array';
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
  /** @param Bucket[] */
  public function setDistributions($distributions)
  {
    $this->distributions = $distributions;
  }
  /** @return Bucket[] */
  public function getDistributions()
  {
    return $this->distributions;
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
  /** @param int */
  public function setMedian($median)
  {
    $this->median = $median;
  }
  /** @return int */
  public function getMedian()
  {
    return $this->median;
  }
  /** @param string */
  public function setMetricId($metricId)
  {
    $this->metricId = $metricId;
  }
  /** @return string */
  public function getMetricId()
  {
    return $this->metricId;
  }
  /** @param int */
  public function setPercentile($percentile)
  {
    $this->percentile = $percentile;
  }
  /** @return int */
  public function getPercentile()
  {
    return $this->percentile;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditRefs::class, 'Google_Service_PagespeedInsights_AuditRefs');
class_alias(Bucket::class, 'Google_Service_PagespeedInsights_Bucket');
class_alias(Categories::class, 'Google_Service_PagespeedInsights_Categories');
class_alias(CategoryGroupV5::class, 'Google_Service_PagespeedInsights_CategoryGroupV5');
class_alias(ConfigSettings::class, 'Google_Service_PagespeedInsights_ConfigSettings');
class_alias(Environment::class, 'Google_Service_PagespeedInsights_Environment');
class_alias(I18n::class, 'Google_Service_PagespeedInsights_I18n');
class_alias(LighthouseAuditResultV5::class, 'Google_Service_PagespeedInsights_LighthouseAuditResultV5');
class_alias(LighthouseCategoryV5::class, 'Google_Service_PagespeedInsights_LighthouseCategoryV5');
class_alias(LighthouseResultV5::class, 'Google_Service_PagespeedInsights_LighthouseResultV5');
class_alias(PagespeedApiLoadingExperienceV5::class, 'Google_Service_PagespeedInsights_PagespeedApiLoadingExperienceV5');
class_alias(PagespeedApiPagespeedResponseV5::class, 'Google_Service_PagespeedInsights_PagespeedApiPagespeedResponseV5');
class_alias(PagespeedVersion::class, 'Google_Service_PagespeedInsights_PagespeedVersion');
class_alias(RendererFormattedStrings::class, 'Google_Service_PagespeedInsights_RendererFormattedStrings');
class_alias(RuntimeError::class, 'Google_Service_PagespeedInsights_RuntimeError');
class_alias(StackPack::class, 'Google_Service_PagespeedInsights_StackPack');
class_alias(Timing::class, 'Google_Service_PagespeedInsights_Timing');
class_alias(UserPageLoadMetricV5::class, 'Google_Service_PagespeedInsights_UserPageLoadMetricV5');
