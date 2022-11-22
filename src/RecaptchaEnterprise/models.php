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

namespace Google\Service\RecaptchaEnterprise;

class GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment extends \Google\Collection
{
  /** @var string[] */
  public $labels;
  protected $collection_key = 'labels';
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
}

class GoogleCloudRecaptchaenterpriseV1AndroidKeySettings extends \Google\Collection
{
  /** @var bool */
  public $allowAllPackageNames;
  /** @var string[] */
  public $allowedPackageNames;
  protected $collection_key = 'allowedPackageNames';
  /** @param bool */
  public function setAllowAllPackageNames($allowAllPackageNames)
  {
    $this->allowAllPackageNames = $allowAllPackageNames;
  }
  /** @return bool */
  public function getAllowAllPackageNames()
  {
    return $this->allowAllPackageNames;
  }
  /** @param string[] */
  public function setAllowedPackageNames($allowedPackageNames)
  {
    $this->allowedPackageNames = $allowedPackageNames;
  }
  /** @return string[] */
  public function getAllowedPackageNames()
  {
    return $this->allowedPackageNames;
  }
}

class GoogleCloudRecaptchaenterpriseV1AnnotateAssessmentRequest extends \Google\Collection
{
  /** @var string */
  public $annotation;
  /** @var string */
  public $hashedAccountId;
  /** @var string[] */
  public $reasons;
  protected $collection_key = 'reasons';
  /** @param string */
  public function setAnnotation($annotation)
  {
    $this->annotation = $annotation;
  }
  /** @return string */
  public function getAnnotation()
  {
    return $this->annotation;
  }
  /** @param string */
  public function setHashedAccountId($hashedAccountId)
  {
    $this->hashedAccountId = $hashedAccountId;
  }
  /** @return string */
  public function getHashedAccountId()
  {
    return $this->hashedAccountId;
  }
  /** @param string[] */
  public function setReasons($reasons)
  {
    $this->reasons = $reasons;
  }
  /** @return string[] */
  public function getReasons()
  {
    return $this->reasons;
  }
}

class GoogleCloudRecaptchaenterpriseV1AnnotateAssessmentResponse extends \Google\Model
{
}

class GoogleCloudRecaptchaenterpriseV1Assessment extends \Google\Model
{
  /** @var GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment */
  public $accountDefenderAssessment;
  /** @var GoogleCloudRecaptchaenterpriseV1Event */
  public $event;
  /** @var string */
  public $name;
  /** @var GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification */
  public $privatePasswordLeakVerification;
  /** @var GoogleCloudRecaptchaenterpriseV1RiskAnalysis */
  public $riskAnalysis;
  /** @var GoogleCloudRecaptchaenterpriseV1TokenProperties */
  public $tokenProperties;
  protected $accountDefenderAssessmentType = GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment::class;
  protected $accountDefenderAssessmentDataType = '';
  protected $eventType = GoogleCloudRecaptchaenterpriseV1Event::class;
  protected $eventDataType = '';
  protected $privatePasswordLeakVerificationType = GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification::class;
  protected $privatePasswordLeakVerificationDataType = '';
  protected $riskAnalysisType = GoogleCloudRecaptchaenterpriseV1RiskAnalysis::class;
  protected $riskAnalysisDataType = '';
  protected $tokenPropertiesType = GoogleCloudRecaptchaenterpriseV1TokenProperties::class;
  protected $tokenPropertiesDataType = '';
  /** @param GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment */
  public function setAccountDefenderAssessment(GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment $accountDefenderAssessment)
  {
    $this->accountDefenderAssessment = $accountDefenderAssessment;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment */
  public function getAccountDefenderAssessment()
  {
    return $this->accountDefenderAssessment;
  }
  /** @param GoogleCloudRecaptchaenterpriseV1Event */
  public function setEvent(GoogleCloudRecaptchaenterpriseV1Event $event)
  {
    $this->event = $event;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1Event */
  public function getEvent()
  {
    return $this->event;
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
  /** @param GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification */
  public function setPrivatePasswordLeakVerification(GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification $privatePasswordLeakVerification)
  {
    $this->privatePasswordLeakVerification = $privatePasswordLeakVerification;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification */
  public function getPrivatePasswordLeakVerification()
  {
    return $this->privatePasswordLeakVerification;
  }
  /** @param GoogleCloudRecaptchaenterpriseV1RiskAnalysis */
  public function setRiskAnalysis(GoogleCloudRecaptchaenterpriseV1RiskAnalysis $riskAnalysis)
  {
    $this->riskAnalysis = $riskAnalysis;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1RiskAnalysis */
  public function getRiskAnalysis()
  {
    return $this->riskAnalysis;
  }
  /** @param GoogleCloudRecaptchaenterpriseV1TokenProperties */
  public function setTokenProperties(GoogleCloudRecaptchaenterpriseV1TokenProperties $tokenProperties)
  {
    $this->tokenProperties = $tokenProperties;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1TokenProperties */
  public function getTokenProperties()
  {
    return $this->tokenProperties;
  }
}

class GoogleCloudRecaptchaenterpriseV1ChallengeMetrics extends \Google\Model
{
  /** @var string */
  public $failedCount;
  /** @var string */
  public $nocaptchaCount;
  /** @var string */
  public $pageloadCount;
  /** @var string */
  public $passedCount;

  /** @param string */
  public function setFailedCount($failedCount)
  {
    $this->failedCount = $failedCount;
  }
  /** @return string */
  public function getFailedCount()
  {
    return $this->failedCount;
  }
  /** @param string */
  public function setNocaptchaCount($nocaptchaCount)
  {
    $this->nocaptchaCount = $nocaptchaCount;
  }
  /** @return string */
  public function getNocaptchaCount()
  {
    return $this->nocaptchaCount;
  }
  /** @param string */
  public function setPageloadCount($pageloadCount)
  {
    $this->pageloadCount = $pageloadCount;
  }
  /** @return string */
  public function getPageloadCount()
  {
    return $this->pageloadCount;
  }
  /** @param string */
  public function setPassedCount($passedCount)
  {
    $this->passedCount = $passedCount;
  }
  /** @return string */
  public function getPassedCount()
  {
    return $this->passedCount;
  }
}

class GoogleCloudRecaptchaenterpriseV1Event extends \Google\Model
{
  /** @var string */
  public $expectedAction;
  /** @var string */
  public $hashedAccountId;
  /** @var string */
  public $siteKey;
  /** @var string */
  public $token;
  /** @var string */
  public $userAgent;
  /** @var string */
  public $userIpAddress;

  /** @param string */
  public function setExpectedAction($expectedAction)
  {
    $this->expectedAction = $expectedAction;
  }
  /** @return string */
  public function getExpectedAction()
  {
    return $this->expectedAction;
  }
  /** @param string */
  public function setHashedAccountId($hashedAccountId)
  {
    $this->hashedAccountId = $hashedAccountId;
  }
  /** @return string */
  public function getHashedAccountId()
  {
    return $this->hashedAccountId;
  }
  /** @param string */
  public function setSiteKey($siteKey)
  {
    $this->siteKey = $siteKey;
  }
  /** @return string */
  public function getSiteKey()
  {
    return $this->siteKey;
  }
  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
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
  /** @param string */
  public function setUserIpAddress($userIpAddress)
  {
    $this->userIpAddress = $userIpAddress;
  }
  /** @return string */
  public function getUserIpAddress()
  {
    return $this->userIpAddress;
  }
}

class GoogleCloudRecaptchaenterpriseV1IOSKeySettings extends \Google\Collection
{
  /** @var bool */
  public $allowAllBundleIds;
  /** @var string[] */
  public $allowedBundleIds;
  protected $collection_key = 'allowedBundleIds';
  /** @param bool */
  public function setAllowAllBundleIds($allowAllBundleIds)
  {
    $this->allowAllBundleIds = $allowAllBundleIds;
  }
  /** @return bool */
  public function getAllowAllBundleIds()
  {
    return $this->allowAllBundleIds;
  }
  /** @param string[] */
  public function setAllowedBundleIds($allowedBundleIds)
  {
    $this->allowedBundleIds = $allowedBundleIds;
  }
  /** @return string[] */
  public function getAllowedBundleIds()
  {
    return $this->allowedBundleIds;
  }
}

class GoogleCloudRecaptchaenterpriseV1Key extends \Google\Model
{
  /** @var GoogleCloudRecaptchaenterpriseV1AndroidKeySettings */
  public $androidSettings;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudRecaptchaenterpriseV1IOSKeySettings */
  public $iosSettings;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var GoogleCloudRecaptchaenterpriseV1TestingOptions */
  public $testingOptions;
  /** @var GoogleCloudRecaptchaenterpriseV1WafSettings */
  public $wafSettings;
  /** @var GoogleCloudRecaptchaenterpriseV1WebKeySettings */
  public $webSettings;
  protected $androidSettingsType = GoogleCloudRecaptchaenterpriseV1AndroidKeySettings::class;
  protected $androidSettingsDataType = '';
  protected $iosSettingsType = GoogleCloudRecaptchaenterpriseV1IOSKeySettings::class;
  protected $iosSettingsDataType = '';
  protected $testingOptionsType = GoogleCloudRecaptchaenterpriseV1TestingOptions::class;
  protected $testingOptionsDataType = '';
  protected $wafSettingsType = GoogleCloudRecaptchaenterpriseV1WafSettings::class;
  protected $wafSettingsDataType = '';
  protected $webSettingsType = GoogleCloudRecaptchaenterpriseV1WebKeySettings::class;
  protected $webSettingsDataType = '';
  /** @param GoogleCloudRecaptchaenterpriseV1AndroidKeySettings */
  public function setAndroidSettings(GoogleCloudRecaptchaenterpriseV1AndroidKeySettings $androidSettings)
  {
    $this->androidSettings = $androidSettings;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1AndroidKeySettings */
  public function getAndroidSettings()
  {
    return $this->androidSettings;
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
  /** @param GoogleCloudRecaptchaenterpriseV1IOSKeySettings */
  public function setIosSettings(GoogleCloudRecaptchaenterpriseV1IOSKeySettings $iosSettings)
  {
    $this->iosSettings = $iosSettings;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1IOSKeySettings */
  public function getIosSettings()
  {
    return $this->iosSettings;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
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
  /** @param GoogleCloudRecaptchaenterpriseV1TestingOptions */
  public function setTestingOptions(GoogleCloudRecaptchaenterpriseV1TestingOptions $testingOptions)
  {
    $this->testingOptions = $testingOptions;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1TestingOptions */
  public function getTestingOptions()
  {
    return $this->testingOptions;
  }
  /** @param GoogleCloudRecaptchaenterpriseV1WafSettings */
  public function setWafSettings(GoogleCloudRecaptchaenterpriseV1WafSettings $wafSettings)
  {
    $this->wafSettings = $wafSettings;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1WafSettings */
  public function getWafSettings()
  {
    return $this->wafSettings;
  }
  /** @param GoogleCloudRecaptchaenterpriseV1WebKeySettings */
  public function setWebSettings(GoogleCloudRecaptchaenterpriseV1WebKeySettings $webSettings)
  {
    $this->webSettings = $webSettings;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1WebKeySettings */
  public function getWebSettings()
  {
    return $this->webSettings;
  }
}

class GoogleCloudRecaptchaenterpriseV1ListKeysResponse extends \Google\Collection
{
  /** @var GoogleCloudRecaptchaenterpriseV1Key[] */
  public $keys;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'keys';
  protected $keysType = GoogleCloudRecaptchaenterpriseV1Key::class;
  protected $keysDataType = 'array';
  /** @param GoogleCloudRecaptchaenterpriseV1Key[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1Key[] */
  public function getKeys()
  {
    return $this->keys;
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

class GoogleCloudRecaptchaenterpriseV1ListRelatedAccountGroupMembershipsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership[] */
  public $relatedAccountGroupMemberships;
  protected $collection_key = 'relatedAccountGroupMemberships';
  protected $relatedAccountGroupMembershipsType = GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership::class;
  protected $relatedAccountGroupMembershipsDataType = 'array';
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
  /** @param GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership[] */
  public function setRelatedAccountGroupMemberships($relatedAccountGroupMemberships)
  {
    $this->relatedAccountGroupMemberships = $relatedAccountGroupMemberships;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership[] */
  public function getRelatedAccountGroupMemberships()
  {
    return $this->relatedAccountGroupMemberships;
  }
}

class GoogleCloudRecaptchaenterpriseV1ListRelatedAccountGroupsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRecaptchaenterpriseV1RelatedAccountGroup[] */
  public $relatedAccountGroups;
  protected $collection_key = 'relatedAccountGroups';
  protected $relatedAccountGroupsType = GoogleCloudRecaptchaenterpriseV1RelatedAccountGroup::class;
  protected $relatedAccountGroupsDataType = 'array';
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
  /** @param GoogleCloudRecaptchaenterpriseV1RelatedAccountGroup[] */
  public function setRelatedAccountGroups($relatedAccountGroups)
  {
    $this->relatedAccountGroups = $relatedAccountGroups;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1RelatedAccountGroup[] */
  public function getRelatedAccountGroups()
  {
    return $this->relatedAccountGroups;
  }
}

class GoogleCloudRecaptchaenterpriseV1Metrics extends \Google\Collection
{
  /** @var GoogleCloudRecaptchaenterpriseV1ChallengeMetrics[] */
  public $challengeMetrics;
  /** @var string */
  public $name;
  /** @var GoogleCloudRecaptchaenterpriseV1ScoreMetrics[] */
  public $scoreMetrics;
  /** @var string */
  public $startTime;
  protected $collection_key = 'scoreMetrics';
  protected $challengeMetricsType = GoogleCloudRecaptchaenterpriseV1ChallengeMetrics::class;
  protected $challengeMetricsDataType = 'array';
  protected $scoreMetricsType = GoogleCloudRecaptchaenterpriseV1ScoreMetrics::class;
  protected $scoreMetricsDataType = 'array';
  /** @param GoogleCloudRecaptchaenterpriseV1ChallengeMetrics[] */
  public function setChallengeMetrics($challengeMetrics)
  {
    $this->challengeMetrics = $challengeMetrics;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1ChallengeMetrics[] */
  public function getChallengeMetrics()
  {
    return $this->challengeMetrics;
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
  /** @param GoogleCloudRecaptchaenterpriseV1ScoreMetrics[] */
  public function setScoreMetrics($scoreMetrics)
  {
    $this->scoreMetrics = $scoreMetrics;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1ScoreMetrics[] */
  public function getScoreMetrics()
  {
    return $this->scoreMetrics;
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

class GoogleCloudRecaptchaenterpriseV1MigrateKeyRequest extends \Google\Model
{
}

class GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification extends \Google\Collection
{
  /** @var string[] */
  public $encryptedLeakMatchPrefixes;
  /** @var string */
  public $encryptedUserCredentialsHash;
  /** @var string */
  public $lookupHashPrefix;
  /** @var string */
  public $reencryptedUserCredentialsHash;
  protected $collection_key = 'encryptedLeakMatchPrefixes';
  /** @param string[] */
  public function setEncryptedLeakMatchPrefixes($encryptedLeakMatchPrefixes)
  {
    $this->encryptedLeakMatchPrefixes = $encryptedLeakMatchPrefixes;
  }
  /** @return string[] */
  public function getEncryptedLeakMatchPrefixes()
  {
    return $this->encryptedLeakMatchPrefixes;
  }
  /** @param string */
  public function setEncryptedUserCredentialsHash($encryptedUserCredentialsHash)
  {
    $this->encryptedUserCredentialsHash = $encryptedUserCredentialsHash;
  }
  /** @return string */
  public function getEncryptedUserCredentialsHash()
  {
    return $this->encryptedUserCredentialsHash;
  }
  /** @param string */
  public function setLookupHashPrefix($lookupHashPrefix)
  {
    $this->lookupHashPrefix = $lookupHashPrefix;
  }
  /** @return string */
  public function getLookupHashPrefix()
  {
    return $this->lookupHashPrefix;
  }
  /** @param string */
  public function setReencryptedUserCredentialsHash($reencryptedUserCredentialsHash)
  {
    $this->reencryptedUserCredentialsHash = $reencryptedUserCredentialsHash;
  }
  /** @return string */
  public function getReencryptedUserCredentialsHash()
  {
    return $this->reencryptedUserCredentialsHash;
  }
}

class GoogleCloudRecaptchaenterpriseV1RelatedAccountGroup extends \Google\Model
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

class GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership extends \Google\Model
{
  /** @var string */
  public $hashedAccountId;
  /** @var string */
  public $name;

  /** @param string */
  public function setHashedAccountId($hashedAccountId)
  {
    $this->hashedAccountId = $hashedAccountId;
  }
  /** @return string */
  public function getHashedAccountId()
  {
    return $this->hashedAccountId;
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

class GoogleCloudRecaptchaenterpriseV1RetrieveLegacySecretKeyResponse extends \Google\Model
{
  /** @var string */
  public $legacySecretKey;

  /** @param string */
  public function setLegacySecretKey($legacySecretKey)
  {
    $this->legacySecretKey = $legacySecretKey;
  }
  /** @return string */
  public function getLegacySecretKey()
  {
    return $this->legacySecretKey;
  }
}

class GoogleCloudRecaptchaenterpriseV1RiskAnalysis extends \Google\Collection
{
  /** @var string[] */
  public $reasons;
  /** @var float */
  public $score;
  protected $collection_key = 'reasons';
  /** @param string[] */
  public function setReasons($reasons)
  {
    $this->reasons = $reasons;
  }
  /** @return string[] */
  public function getReasons()
  {
    return $this->reasons;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudRecaptchaenterpriseV1ScoreDistribution extends \Google\Model
{
  /** @var string[] */
  public $scoreBuckets;

  /** @param string[] */
  public function setScoreBuckets($scoreBuckets)
  {
    $this->scoreBuckets = $scoreBuckets;
  }
  /** @return string[] */
  public function getScoreBuckets()
  {
    return $this->scoreBuckets;
  }
}

class GoogleCloudRecaptchaenterpriseV1ScoreMetrics extends \Google\Model
{
  /** @var GoogleCloudRecaptchaenterpriseV1ScoreDistribution[] */
  public $actionMetrics;
  /** @var GoogleCloudRecaptchaenterpriseV1ScoreDistribution */
  public $overallMetrics;
  protected $actionMetricsType = GoogleCloudRecaptchaenterpriseV1ScoreDistribution::class;
  protected $actionMetricsDataType = 'map';
  protected $overallMetricsType = GoogleCloudRecaptchaenterpriseV1ScoreDistribution::class;
  protected $overallMetricsDataType = '';
  /** @param GoogleCloudRecaptchaenterpriseV1ScoreDistribution[] */
  public function setActionMetrics($actionMetrics)
  {
    $this->actionMetrics = $actionMetrics;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1ScoreDistribution[] */
  public function getActionMetrics()
  {
    return $this->actionMetrics;
  }
  /** @param GoogleCloudRecaptchaenterpriseV1ScoreDistribution */
  public function setOverallMetrics(GoogleCloudRecaptchaenterpriseV1ScoreDistribution $overallMetrics)
  {
    $this->overallMetrics = $overallMetrics;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1ScoreDistribution */
  public function getOverallMetrics()
  {
    return $this->overallMetrics;
  }
}

class GoogleCloudRecaptchaenterpriseV1SearchRelatedAccountGroupMembershipsRequest extends \Google\Model
{
  /** @var string */
  public $hashedAccountId;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;

  /** @param string */
  public function setHashedAccountId($hashedAccountId)
  {
    $this->hashedAccountId = $hashedAccountId;
  }
  /** @return string */
  public function getHashedAccountId()
  {
    return $this->hashedAccountId;
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
}

class GoogleCloudRecaptchaenterpriseV1SearchRelatedAccountGroupMembershipsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership[] */
  public $relatedAccountGroupMemberships;
  protected $collection_key = 'relatedAccountGroupMemberships';
  protected $relatedAccountGroupMembershipsType = GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership::class;
  protected $relatedAccountGroupMembershipsDataType = 'array';
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
  /** @param GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership[] */
  public function setRelatedAccountGroupMemberships($relatedAccountGroupMemberships)
  {
    $this->relatedAccountGroupMemberships = $relatedAccountGroupMemberships;
  }
  /** @return GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership[] */
  public function getRelatedAccountGroupMemberships()
  {
    return $this->relatedAccountGroupMemberships;
  }
}

class GoogleCloudRecaptchaenterpriseV1TestingOptions extends \Google\Model
{
  /** @var string */
  public $testingChallenge;
  /** @var float */
  public $testingScore;

  /** @param string */
  public function setTestingChallenge($testingChallenge)
  {
    $this->testingChallenge = $testingChallenge;
  }
  /** @return string */
  public function getTestingChallenge()
  {
    return $this->testingChallenge;
  }
  /** @param float */
  public function setTestingScore($testingScore)
  {
    $this->testingScore = $testingScore;
  }
  /** @return float */
  public function getTestingScore()
  {
    return $this->testingScore;
  }
}

class GoogleCloudRecaptchaenterpriseV1TokenProperties extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $androidPackageName;
  /** @var string */
  public $createTime;
  /** @var string */
  public $hostname;
  /** @var string */
  public $invalidReason;
  /** @var string */
  public $iosBundleId;
  /** @var bool */
  public $valid;

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
  public function setAndroidPackageName($androidPackageName)
  {
    $this->androidPackageName = $androidPackageName;
  }
  /** @return string */
  public function getAndroidPackageName()
  {
    return $this->androidPackageName;
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
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /** @return string */
  public function getHostname()
  {
    return $this->hostname;
  }
  /** @param string */
  public function setInvalidReason($invalidReason)
  {
    $this->invalidReason = $invalidReason;
  }
  /** @return string */
  public function getInvalidReason()
  {
    return $this->invalidReason;
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
  /** @param bool */
  public function setValid($valid)
  {
    $this->valid = $valid;
  }
  /** @return bool */
  public function getValid()
  {
    return $this->valid;
  }
}

class GoogleCloudRecaptchaenterpriseV1WafSettings extends \Google\Model
{
  /** @var string */
  public $wafFeature;
  /** @var string */
  public $wafService;

  /** @param string */
  public function setWafFeature($wafFeature)
  {
    $this->wafFeature = $wafFeature;
  }
  /** @return string */
  public function getWafFeature()
  {
    return $this->wafFeature;
  }
  /** @param string */
  public function setWafService($wafService)
  {
    $this->wafService = $wafService;
  }
  /** @return string */
  public function getWafService()
  {
    return $this->wafService;
  }
}

class GoogleCloudRecaptchaenterpriseV1WebKeySettings extends \Google\Collection
{
  /** @var bool */
  public $allowAllDomains;
  /** @var bool */
  public $allowAmpTraffic;
  /** @var string[] */
  public $allowedDomains;
  /** @var string */
  public $challengeSecurityPreference;
  /** @var string */
  public $integrationType;
  protected $collection_key = 'allowedDomains';
  /** @param bool */
  public function setAllowAllDomains($allowAllDomains)
  {
    $this->allowAllDomains = $allowAllDomains;
  }
  /** @return bool */
  public function getAllowAllDomains()
  {
    return $this->allowAllDomains;
  }
  /** @param bool */
  public function setAllowAmpTraffic($allowAmpTraffic)
  {
    $this->allowAmpTraffic = $allowAmpTraffic;
  }
  /** @return bool */
  public function getAllowAmpTraffic()
  {
    return $this->allowAmpTraffic;
  }
  /** @param string[] */
  public function setAllowedDomains($allowedDomains)
  {
    $this->allowedDomains = $allowedDomains;
  }
  /** @return string[] */
  public function getAllowedDomains()
  {
    return $this->allowedDomains;
  }
  /** @param string */
  public function setChallengeSecurityPreference($challengeSecurityPreference)
  {
    $this->challengeSecurityPreference = $challengeSecurityPreference;
  }
  /** @return string */
  public function getChallengeSecurityPreference()
  {
    return $this->challengeSecurityPreference;
  }
  /** @param string */
  public function setIntegrationType($integrationType)
  {
    $this->integrationType = $integrationType;
  }
  /** @return string */
  public function getIntegrationType()
  {
    return $this->integrationType;
  }
}

class GoogleProtobufEmpty extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment');
class_alias(GoogleCloudRecaptchaenterpriseV1AndroidKeySettings::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1AndroidKeySettings');
class_alias(GoogleCloudRecaptchaenterpriseV1AnnotateAssessmentRequest::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1AnnotateAssessmentRequest');
class_alias(GoogleCloudRecaptchaenterpriseV1AnnotateAssessmentResponse::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1AnnotateAssessmentResponse');
class_alias(GoogleCloudRecaptchaenterpriseV1Assessment::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1Assessment');
class_alias(GoogleCloudRecaptchaenterpriseV1ChallengeMetrics::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ChallengeMetrics');
class_alias(GoogleCloudRecaptchaenterpriseV1Event::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1Event');
class_alias(GoogleCloudRecaptchaenterpriseV1IOSKeySettings::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1IOSKeySettings');
class_alias(GoogleCloudRecaptchaenterpriseV1Key::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1Key');
class_alias(GoogleCloudRecaptchaenterpriseV1ListKeysResponse::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ListKeysResponse');
class_alias(GoogleCloudRecaptchaenterpriseV1ListRelatedAccountGroupMembershipsResponse::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ListRelatedAccountGroupMembershipsResponse');
class_alias(GoogleCloudRecaptchaenterpriseV1ListRelatedAccountGroupsResponse::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ListRelatedAccountGroupsResponse');
class_alias(GoogleCloudRecaptchaenterpriseV1Metrics::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1Metrics');
class_alias(GoogleCloudRecaptchaenterpriseV1MigrateKeyRequest::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1MigrateKeyRequest');
class_alias(GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification');
class_alias(GoogleCloudRecaptchaenterpriseV1RelatedAccountGroup::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1RelatedAccountGroup');
class_alias(GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership');
class_alias(GoogleCloudRecaptchaenterpriseV1RetrieveLegacySecretKeyResponse::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1RetrieveLegacySecretKeyResponse');
class_alias(GoogleCloudRecaptchaenterpriseV1RiskAnalysis::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1RiskAnalysis');
class_alias(GoogleCloudRecaptchaenterpriseV1ScoreDistribution::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ScoreDistribution');
class_alias(GoogleCloudRecaptchaenterpriseV1ScoreMetrics::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ScoreMetrics');
class_alias(GoogleCloudRecaptchaenterpriseV1SearchRelatedAccountGroupMembershipsRequest::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1SearchRelatedAccountGroupMembershipsRequest');
class_alias(GoogleCloudRecaptchaenterpriseV1SearchRelatedAccountGroupMembershipsResponse::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1SearchRelatedAccountGroupMembershipsResponse');
class_alias(GoogleCloudRecaptchaenterpriseV1TestingOptions::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1TestingOptions');
class_alias(GoogleCloudRecaptchaenterpriseV1TokenProperties::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1TokenProperties');
class_alias(GoogleCloudRecaptchaenterpriseV1WafSettings::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1WafSettings');
class_alias(GoogleCloudRecaptchaenterpriseV1WebKeySettings::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1WebKeySettings');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_RecaptchaEnterprise_GoogleProtobufEmpty');
