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

namespace Google\Service\WebSecurityScanner;

class Authentication extends \Google\Model
{
  /** @var CustomAccount */
  public $customAccount;
  /** @var GoogleAccount */
  public $googleAccount;
  /** @var IapCredential */
  public $iapCredential;
  protected $customAccountType = CustomAccount::class;
  protected $customAccountDataType = '';
  protected $googleAccountType = GoogleAccount::class;
  protected $googleAccountDataType = '';
  protected $iapCredentialType = IapCredential::class;
  protected $iapCredentialDataType = '';
  /** @param CustomAccount */
  public function setCustomAccount(CustomAccount $customAccount)
  {
    $this->customAccount = $customAccount;
  }
  /** @return CustomAccount */
  public function getCustomAccount()
  {
    return $this->customAccount;
  }
  /** @param GoogleAccount */
  public function setGoogleAccount(GoogleAccount $googleAccount)
  {
    $this->googleAccount = $googleAccount;
  }
  /** @return GoogleAccount */
  public function getGoogleAccount()
  {
    return $this->googleAccount;
  }
  /** @param IapCredential */
  public function setIapCredential(IapCredential $iapCredential)
  {
    $this->iapCredential = $iapCredential;
  }
  /** @return IapCredential */
  public function getIapCredential()
  {
    return $this->iapCredential;
  }
}

class CrawledUrl extends \Google\Model
{
  /** @var string */
  public $body;
  /** @var string */
  public $httpMethod;
  /** @var string */
  public $url;

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
  public function setHttpMethod($httpMethod)
  {
    $this->httpMethod = $httpMethod;
  }
  /** @return string */
  public function getHttpMethod()
  {
    return $this->httpMethod;
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

class CustomAccount extends \Google\Model
{
  /** @var string */
  public $loginUrl;
  /** @var string */
  public $password;
  /** @var string */
  public $username;

  /** @param string */
  public function setLoginUrl($loginUrl)
  {
    $this->loginUrl = $loginUrl;
  }
  /** @return string */
  public function getLoginUrl()
  {
    return $this->loginUrl;
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
}

class Finding extends \Google\Model
{
  /** @var string */
  public $body;
  /** @var string */
  public $description;
  /** @var string */
  public $finalUrl;
  /** @var string */
  public $findingType;
  /** @var Form */
  public $form;
  /** @var string */
  public $frameUrl;
  /** @var string */
  public $fuzzedUrl;
  /** @var string */
  public $httpMethod;
  /** @var string */
  public $name;
  /** @var OutdatedLibrary */
  public $outdatedLibrary;
  /** @var string */
  public $reproductionUrl;
  /** @var string */
  public $severity;
  /** @var string */
  public $trackingId;
  /** @var ViolatingResource */
  public $violatingResource;
  /** @var VulnerableHeaders */
  public $vulnerableHeaders;
  /** @var VulnerableParameters */
  public $vulnerableParameters;
  /** @var Xss */
  public $xss;
  /** @var Xxe */
  public $xxe;
  protected $formType = Form::class;
  protected $formDataType = '';
  protected $outdatedLibraryType = OutdatedLibrary::class;
  protected $outdatedLibraryDataType = '';
  protected $violatingResourceType = ViolatingResource::class;
  protected $violatingResourceDataType = '';
  protected $vulnerableHeadersType = VulnerableHeaders::class;
  protected $vulnerableHeadersDataType = '';
  protected $vulnerableParametersType = VulnerableParameters::class;
  protected $vulnerableParametersDataType = '';
  protected $xssType = Xss::class;
  protected $xssDataType = '';
  protected $xxeType = Xxe::class;
  protected $xxeDataType = '';
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
  public function setFinalUrl($finalUrl)
  {
    $this->finalUrl = $finalUrl;
  }
  /** @return string */
  public function getFinalUrl()
  {
    return $this->finalUrl;
  }
  /** @param string */
  public function setFindingType($findingType)
  {
    $this->findingType = $findingType;
  }
  /** @return string */
  public function getFindingType()
  {
    return $this->findingType;
  }
  /** @param Form */
  public function setForm(Form $form)
  {
    $this->form = $form;
  }
  /** @return Form */
  public function getForm()
  {
    return $this->form;
  }
  /** @param string */
  public function setFrameUrl($frameUrl)
  {
    $this->frameUrl = $frameUrl;
  }
  /** @return string */
  public function getFrameUrl()
  {
    return $this->frameUrl;
  }
  /** @param string */
  public function setFuzzedUrl($fuzzedUrl)
  {
    $this->fuzzedUrl = $fuzzedUrl;
  }
  /** @return string */
  public function getFuzzedUrl()
  {
    return $this->fuzzedUrl;
  }
  /** @param string */
  public function setHttpMethod($httpMethod)
  {
    $this->httpMethod = $httpMethod;
  }
  /** @return string */
  public function getHttpMethod()
  {
    return $this->httpMethod;
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
  /** @param OutdatedLibrary */
  public function setOutdatedLibrary(OutdatedLibrary $outdatedLibrary)
  {
    $this->outdatedLibrary = $outdatedLibrary;
  }
  /** @return OutdatedLibrary */
  public function getOutdatedLibrary()
  {
    return $this->outdatedLibrary;
  }
  /** @param string */
  public function setReproductionUrl($reproductionUrl)
  {
    $this->reproductionUrl = $reproductionUrl;
  }
  /** @return string */
  public function getReproductionUrl()
  {
    return $this->reproductionUrl;
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
  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
  /** @return string */
  public function getTrackingId()
  {
    return $this->trackingId;
  }
  /** @param ViolatingResource */
  public function setViolatingResource(ViolatingResource $violatingResource)
  {
    $this->violatingResource = $violatingResource;
  }
  /** @return ViolatingResource */
  public function getViolatingResource()
  {
    return $this->violatingResource;
  }
  /** @param VulnerableHeaders */
  public function setVulnerableHeaders(VulnerableHeaders $vulnerableHeaders)
  {
    $this->vulnerableHeaders = $vulnerableHeaders;
  }
  /** @return VulnerableHeaders */
  public function getVulnerableHeaders()
  {
    return $this->vulnerableHeaders;
  }
  /** @param VulnerableParameters */
  public function setVulnerableParameters(VulnerableParameters $vulnerableParameters)
  {
    $this->vulnerableParameters = $vulnerableParameters;
  }
  /** @return VulnerableParameters */
  public function getVulnerableParameters()
  {
    return $this->vulnerableParameters;
  }
  /** @param Xss */
  public function setXss(Xss $xss)
  {
    $this->xss = $xss;
  }
  /** @return Xss */
  public function getXss()
  {
    return $this->xss;
  }
  /** @param Xxe */
  public function setXxe(Xxe $xxe)
  {
    $this->xxe = $xxe;
  }
  /** @return Xxe */
  public function getXxe()
  {
    return $this->xxe;
  }
}

class FindingTypeStats extends \Google\Model
{
  /** @var int */
  public $findingCount;
  /** @var string */
  public $findingType;

  /** @param int */
  public function setFindingCount($findingCount)
  {
    $this->findingCount = $findingCount;
  }
  /** @return int */
  public function getFindingCount()
  {
    return $this->findingCount;
  }
  /** @param string */
  public function setFindingType($findingType)
  {
    $this->findingType = $findingType;
  }
  /** @return string */
  public function getFindingType()
  {
    return $this->findingType;
  }
}

class Form extends \Google\Collection
{
  /** @var string */
  public $actionUri;
  /** @var string[] */
  public $fields;
  protected $collection_key = 'fields';
  /** @param string */
  public function setActionUri($actionUri)
  {
    $this->actionUri = $actionUri;
  }
  /** @return string */
  public function getActionUri()
  {
    return $this->actionUri;
  }
  /** @param string[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string[] */
  public function getFields()
  {
    return $this->fields;
  }
}

class GoogleAccount extends \Google\Model
{
  /** @var string */
  public $password;
  /** @var string */
  public $username;

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
}

class Header extends \Google\Model
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

class IapCredential extends \Google\Model
{
  /** @var IapTestServiceAccountInfo */
  public $iapTestServiceAccountInfo;
  protected $iapTestServiceAccountInfoType = IapTestServiceAccountInfo::class;
  protected $iapTestServiceAccountInfoDataType = '';
  /** @param IapTestServiceAccountInfo */
  public function setIapTestServiceAccountInfo(IapTestServiceAccountInfo $iapTestServiceAccountInfo)
  {
    $this->iapTestServiceAccountInfo = $iapTestServiceAccountInfo;
  }
  /** @return IapTestServiceAccountInfo */
  public function getIapTestServiceAccountInfo()
  {
    return $this->iapTestServiceAccountInfo;
  }
}

class IapTestServiceAccountInfo extends \Google\Model
{
  /** @var string */
  public $targetAudienceClientId;

  /** @param string */
  public function setTargetAudienceClientId($targetAudienceClientId)
  {
    $this->targetAudienceClientId = $targetAudienceClientId;
  }
  /** @return string */
  public function getTargetAudienceClientId()
  {
    return $this->targetAudienceClientId;
  }
}

class ListCrawledUrlsResponse extends \Google\Collection
{
  /** @var CrawledUrl[] */
  public $crawledUrls;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'crawledUrls';
  protected $crawledUrlsType = CrawledUrl::class;
  protected $crawledUrlsDataType = 'array';
  /** @param CrawledUrl[] */
  public function setCrawledUrls($crawledUrls)
  {
    $this->crawledUrls = $crawledUrls;
  }
  /** @return CrawledUrl[] */
  public function getCrawledUrls()
  {
    return $this->crawledUrls;
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

class ListFindingTypeStatsResponse extends \Google\Collection
{
  /** @var FindingTypeStats[] */
  public $findingTypeStats;
  protected $collection_key = 'findingTypeStats';
  protected $findingTypeStatsType = FindingTypeStats::class;
  protected $findingTypeStatsDataType = 'array';
  /** @param FindingTypeStats[] */
  public function setFindingTypeStats($findingTypeStats)
  {
    $this->findingTypeStats = $findingTypeStats;
  }
  /** @return FindingTypeStats[] */
  public function getFindingTypeStats()
  {
    return $this->findingTypeStats;
  }
}

class ListFindingsResponse extends \Google\Collection
{
  /** @var Finding[] */
  public $findings;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'findings';
  protected $findingsType = Finding::class;
  protected $findingsDataType = 'array';
  /** @param Finding[] */
  public function setFindings($findings)
  {
    $this->findings = $findings;
  }
  /** @return Finding[] */
  public function getFindings()
  {
    return $this->findings;
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

class ListScanConfigsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ScanConfig[] */
  public $scanConfigs;
  protected $collection_key = 'scanConfigs';
  protected $scanConfigsType = ScanConfig::class;
  protected $scanConfigsDataType = 'array';
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
  /** @param ScanConfig[] */
  public function setScanConfigs($scanConfigs)
  {
    $this->scanConfigs = $scanConfigs;
  }
  /** @return ScanConfig[] */
  public function getScanConfigs()
  {
    return $this->scanConfigs;
  }
}

class ListScanRunsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ScanRun[] */
  public $scanRuns;
  protected $collection_key = 'scanRuns';
  protected $scanRunsType = ScanRun::class;
  protected $scanRunsDataType = 'array';
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
  /** @param ScanRun[] */
  public function setScanRuns($scanRuns)
  {
    $this->scanRuns = $scanRuns;
  }
  /** @return ScanRun[] */
  public function getScanRuns()
  {
    return $this->scanRuns;
  }
}

class OutdatedLibrary extends \Google\Collection
{
  /** @var string[] */
  public $learnMoreUrls;
  /** @var string */
  public $libraryName;
  /** @var string */
  public $version;
  protected $collection_key = 'learnMoreUrls';
  /** @param string[] */
  public function setLearnMoreUrls($learnMoreUrls)
  {
    $this->learnMoreUrls = $learnMoreUrls;
  }
  /** @return string[] */
  public function getLearnMoreUrls()
  {
    return $this->learnMoreUrls;
  }
  /** @param string */
  public function setLibraryName($libraryName)
  {
    $this->libraryName = $libraryName;
  }
  /** @return string */
  public function getLibraryName()
  {
    return $this->libraryName;
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

class ScanConfig extends \Google\Collection
{
  /** @var Authentication */
  public $authentication;
  /** @var string[] */
  public $blacklistPatterns;
  /** @var string */
  public $displayName;
  /** @var string */
  public $exportToSecurityCommandCenter;
  /** @var bool */
  public $ignoreHttpStatusErrors;
  /** @var bool */
  public $managedScan;
  /** @var int */
  public $maxQps;
  /** @var string */
  public $name;
  /** @var string */
  public $riskLevel;
  /** @var Schedule */
  public $schedule;
  /** @var string[] */
  public $startingUrls;
  /** @var bool */
  public $staticIpScan;
  /** @var string */
  public $userAgent;
  protected $collection_key = 'startingUrls';
  protected $authenticationType = Authentication::class;
  protected $authenticationDataType = '';
  protected $scheduleType = Schedule::class;
  protected $scheduleDataType = '';
  /** @param Authentication */
  public function setAuthentication(Authentication $authentication)
  {
    $this->authentication = $authentication;
  }
  /** @return Authentication */
  public function getAuthentication()
  {
    return $this->authentication;
  }
  /** @param string[] */
  public function setBlacklistPatterns($blacklistPatterns)
  {
    $this->blacklistPatterns = $blacklistPatterns;
  }
  /** @return string[] */
  public function getBlacklistPatterns()
  {
    return $this->blacklistPatterns;
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
  public function setExportToSecurityCommandCenter($exportToSecurityCommandCenter)
  {
    $this->exportToSecurityCommandCenter = $exportToSecurityCommandCenter;
  }
  /** @return string */
  public function getExportToSecurityCommandCenter()
  {
    return $this->exportToSecurityCommandCenter;
  }
  /** @param bool */
  public function setIgnoreHttpStatusErrors($ignoreHttpStatusErrors)
  {
    $this->ignoreHttpStatusErrors = $ignoreHttpStatusErrors;
  }
  /** @return bool */
  public function getIgnoreHttpStatusErrors()
  {
    return $this->ignoreHttpStatusErrors;
  }
  /** @param bool */
  public function setManagedScan($managedScan)
  {
    $this->managedScan = $managedScan;
  }
  /** @return bool */
  public function getManagedScan()
  {
    return $this->managedScan;
  }
  /** @param int */
  public function setMaxQps($maxQps)
  {
    $this->maxQps = $maxQps;
  }
  /** @return int */
  public function getMaxQps()
  {
    return $this->maxQps;
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
  public function setRiskLevel($riskLevel)
  {
    $this->riskLevel = $riskLevel;
  }
  /** @return string */
  public function getRiskLevel()
  {
    return $this->riskLevel;
  }
  /** @param Schedule */
  public function setSchedule(Schedule $schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return Schedule */
  public function getSchedule()
  {
    return $this->schedule;
  }
  /** @param string[] */
  public function setStartingUrls($startingUrls)
  {
    $this->startingUrls = $startingUrls;
  }
  /** @return string[] */
  public function getStartingUrls()
  {
    return $this->startingUrls;
  }
  /** @param bool */
  public function setStaticIpScan($staticIpScan)
  {
    $this->staticIpScan = $staticIpScan;
  }
  /** @return bool */
  public function getStaticIpScan()
  {
    return $this->staticIpScan;
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

class ScanConfigError extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $fieldName;

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
  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /** @return string */
  public function getFieldName()
  {
    return $this->fieldName;
  }
}

class ScanRun extends \Google\Collection
{
  /** @var string */
  public $endTime;
  /** @var ScanRunErrorTrace */
  public $errorTrace;
  /** @var string */
  public $executionState;
  /** @var bool */
  public $hasVulnerabilities;
  /** @var string */
  public $name;
  /** @var int */
  public $progressPercent;
  /** @var string */
  public $resultState;
  /** @var string */
  public $startTime;
  /** @var string */
  public $urlsCrawledCount;
  /** @var string */
  public $urlsTestedCount;
  /** @var ScanRunWarningTrace[] */
  public $warningTraces;
  protected $collection_key = 'warningTraces';
  protected $errorTraceType = ScanRunErrorTrace::class;
  protected $errorTraceDataType = '';
  protected $warningTracesType = ScanRunWarningTrace::class;
  protected $warningTracesDataType = 'array';
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
  /** @param ScanRunErrorTrace */
  public function setErrorTrace(ScanRunErrorTrace $errorTrace)
  {
    $this->errorTrace = $errorTrace;
  }
  /** @return ScanRunErrorTrace */
  public function getErrorTrace()
  {
    return $this->errorTrace;
  }
  /** @param string */
  public function setExecutionState($executionState)
  {
    $this->executionState = $executionState;
  }
  /** @return string */
  public function getExecutionState()
  {
    return $this->executionState;
  }
  /** @param bool */
  public function setHasVulnerabilities($hasVulnerabilities)
  {
    $this->hasVulnerabilities = $hasVulnerabilities;
  }
  /** @return bool */
  public function getHasVulnerabilities()
  {
    return $this->hasVulnerabilities;
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
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /** @return int */
  public function getProgressPercent()
  {
    return $this->progressPercent;
  }
  /** @param string */
  public function setResultState($resultState)
  {
    $this->resultState = $resultState;
  }
  /** @return string */
  public function getResultState()
  {
    return $this->resultState;
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
  public function setUrlsCrawledCount($urlsCrawledCount)
  {
    $this->urlsCrawledCount = $urlsCrawledCount;
  }
  /** @return string */
  public function getUrlsCrawledCount()
  {
    return $this->urlsCrawledCount;
  }
  /** @param string */
  public function setUrlsTestedCount($urlsTestedCount)
  {
    $this->urlsTestedCount = $urlsTestedCount;
  }
  /** @return string */
  public function getUrlsTestedCount()
  {
    return $this->urlsTestedCount;
  }
  /** @param ScanRunWarningTrace[] */
  public function setWarningTraces($warningTraces)
  {
    $this->warningTraces = $warningTraces;
  }
  /** @return ScanRunWarningTrace[] */
  public function getWarningTraces()
  {
    return $this->warningTraces;
  }
}

class ScanRunErrorTrace extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var int */
  public $mostCommonHttpErrorCode;
  /** @var ScanConfigError */
  public $scanConfigError;
  protected $scanConfigErrorType = ScanConfigError::class;
  protected $scanConfigErrorDataType = '';
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
  /** @param int */
  public function setMostCommonHttpErrorCode($mostCommonHttpErrorCode)
  {
    $this->mostCommonHttpErrorCode = $mostCommonHttpErrorCode;
  }
  /** @return int */
  public function getMostCommonHttpErrorCode()
  {
    return $this->mostCommonHttpErrorCode;
  }
  /** @param ScanConfigError */
  public function setScanConfigError(ScanConfigError $scanConfigError)
  {
    $this->scanConfigError = $scanConfigError;
  }
  /** @return ScanConfigError */
  public function getScanConfigError()
  {
    return $this->scanConfigError;
  }
}

class ScanRunWarningTrace extends \Google\Model
{
  /** @var string */
  public $code;

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
}

class Schedule extends \Google\Model
{
  /** @var int */
  public $intervalDurationDays;
  /** @var string */
  public $scheduleTime;

  /** @param int */
  public function setIntervalDurationDays($intervalDurationDays)
  {
    $this->intervalDurationDays = $intervalDurationDays;
  }
  /** @return int */
  public function getIntervalDurationDays()
  {
    return $this->intervalDurationDays;
  }
  /** @param string */
  public function setScheduleTime($scheduleTime)
  {
    $this->scheduleTime = $scheduleTime;
  }
  /** @return string */
  public function getScheduleTime()
  {
    return $this->scheduleTime;
  }
}

class StartScanRunRequest extends \Google\Model
{
}

class StopScanRunRequest extends \Google\Model
{
}

class ViolatingResource extends \Google\Model
{
  /** @var string */
  public $contentType;
  /** @var string */
  public $resourceUrl;

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
}

class VulnerableHeaders extends \Google\Collection
{
  /** @var Header[] */
  public $headers;
  /** @var Header[] */
  public $missingHeaders;
  protected $collection_key = 'missingHeaders';
  protected $headersType = Header::class;
  protected $headersDataType = 'array';
  protected $missingHeadersType = Header::class;
  protected $missingHeadersDataType = 'array';
  /** @param Header[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return Header[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param Header[] */
  public function setMissingHeaders($missingHeaders)
  {
    $this->missingHeaders = $missingHeaders;
  }
  /** @return Header[] */
  public function getMissingHeaders()
  {
    return $this->missingHeaders;
  }
}

class VulnerableParameters extends \Google\Collection
{
  /** @var string[] */
  public $parameterNames;
  protected $collection_key = 'parameterNames';
  /** @param string[] */
  public function setParameterNames($parameterNames)
  {
    $this->parameterNames = $parameterNames;
  }
  /** @return string[] */
  public function getParameterNames()
  {
    return $this->parameterNames;
  }
}

class WebsecurityscannerEmpty extends \Google\Model
{
}

class Xss extends \Google\Collection
{
  /** @var string */
  public $attackVector;
  /** @var string */
  public $errorMessage;
  /** @var string[] */
  public $stackTraces;
  /** @var string */
  public $storedXssSeedingUrl;
  protected $collection_key = 'stackTraces';
  /** @param string */
  public function setAttackVector($attackVector)
  {
    $this->attackVector = $attackVector;
  }
  /** @return string */
  public function getAttackVector()
  {
    return $this->attackVector;
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
  /** @param string[] */
  public function setStackTraces($stackTraces)
  {
    $this->stackTraces = $stackTraces;
  }
  /** @return string[] */
  public function getStackTraces()
  {
    return $this->stackTraces;
  }
  /** @param string */
  public function setStoredXssSeedingUrl($storedXssSeedingUrl)
  {
    $this->storedXssSeedingUrl = $storedXssSeedingUrl;
  }
  /** @return string */
  public function getStoredXssSeedingUrl()
  {
    return $this->storedXssSeedingUrl;
  }
}

class Xxe extends \Google\Model
{
  /** @var string */
  public $payloadLocation;
  /** @var string */
  public $payloadValue;

  /** @param string */
  public function setPayloadLocation($payloadLocation)
  {
    $this->payloadLocation = $payloadLocation;
  }
  /** @return string */
  public function getPayloadLocation()
  {
    return $this->payloadLocation;
  }
  /** @param string */
  public function setPayloadValue($payloadValue)
  {
    $this->payloadValue = $payloadValue;
  }
  /** @return string */
  public function getPayloadValue()
  {
    return $this->payloadValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Authentication::class, 'Google_Service_WebSecurityScanner_Authentication');
class_alias(CrawledUrl::class, 'Google_Service_WebSecurityScanner_CrawledUrl');
class_alias(CustomAccount::class, 'Google_Service_WebSecurityScanner_CustomAccount');
class_alias(Finding::class, 'Google_Service_WebSecurityScanner_Finding');
class_alias(FindingTypeStats::class, 'Google_Service_WebSecurityScanner_FindingTypeStats');
class_alias(Form::class, 'Google_Service_WebSecurityScanner_Form');
class_alias(GoogleAccount::class, 'Google_Service_WebSecurityScanner_GoogleAccount');
class_alias(Header::class, 'Google_Service_WebSecurityScanner_Header');
class_alias(IapCredential::class, 'Google_Service_WebSecurityScanner_IapCredential');
class_alias(IapTestServiceAccountInfo::class, 'Google_Service_WebSecurityScanner_IapTestServiceAccountInfo');
class_alias(ListCrawledUrlsResponse::class, 'Google_Service_WebSecurityScanner_ListCrawledUrlsResponse');
class_alias(ListFindingTypeStatsResponse::class, 'Google_Service_WebSecurityScanner_ListFindingTypeStatsResponse');
class_alias(ListFindingsResponse::class, 'Google_Service_WebSecurityScanner_ListFindingsResponse');
class_alias(ListScanConfigsResponse::class, 'Google_Service_WebSecurityScanner_ListScanConfigsResponse');
class_alias(ListScanRunsResponse::class, 'Google_Service_WebSecurityScanner_ListScanRunsResponse');
class_alias(OutdatedLibrary::class, 'Google_Service_WebSecurityScanner_OutdatedLibrary');
class_alias(ScanConfig::class, 'Google_Service_WebSecurityScanner_ScanConfig');
class_alias(ScanConfigError::class, 'Google_Service_WebSecurityScanner_ScanConfigError');
class_alias(ScanRun::class, 'Google_Service_WebSecurityScanner_ScanRun');
class_alias(ScanRunErrorTrace::class, 'Google_Service_WebSecurityScanner_ScanRunErrorTrace');
class_alias(ScanRunWarningTrace::class, 'Google_Service_WebSecurityScanner_ScanRunWarningTrace');
class_alias(Schedule::class, 'Google_Service_WebSecurityScanner_Schedule');
class_alias(StartScanRunRequest::class, 'Google_Service_WebSecurityScanner_StartScanRunRequest');
class_alias(StopScanRunRequest::class, 'Google_Service_WebSecurityScanner_StopScanRunRequest');
class_alias(ViolatingResource::class, 'Google_Service_WebSecurityScanner_ViolatingResource');
class_alias(VulnerableHeaders::class, 'Google_Service_WebSecurityScanner_VulnerableHeaders');
class_alias(VulnerableParameters::class, 'Google_Service_WebSecurityScanner_VulnerableParameters');
class_alias(WebsecurityscannerEmpty::class, 'Google_Service_WebSecurityScanner_WebsecurityscannerEmpty');
class_alias(Xss::class, 'Google_Service_WebSecurityScanner_Xss');
class_alias(Xxe::class, 'Google_Service_WebSecurityScanner_Xxe');
