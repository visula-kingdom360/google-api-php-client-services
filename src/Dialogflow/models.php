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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowCxV3AdvancedSettings extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3AdvancedSettingsLoggingSettings */
  public $loggingSettings;
  protected $loggingSettingsType = GoogleCloudDialogflowCxV3AdvancedSettingsLoggingSettings::class;
  protected $loggingSettingsDataType = '';
  /** @param GoogleCloudDialogflowCxV3AdvancedSettingsLoggingSettings */
  public function setLoggingSettings(GoogleCloudDialogflowCxV3AdvancedSettingsLoggingSettings $loggingSettings)
  {
    $this->loggingSettings = $loggingSettings;
  }
  /** @return GoogleCloudDialogflowCxV3AdvancedSettingsLoggingSettings */
  public function getLoggingSettings()
  {
    return $this->loggingSettings;
  }
}

class GoogleCloudDialogflowCxV3AdvancedSettingsLoggingSettings extends \Google\Model
{
  /** @var bool */
  public $enableInteractionLogging;
  /** @var bool */
  public $enableStackdriverLogging;

  /** @param bool */
  public function setEnableInteractionLogging($enableInteractionLogging)
  {
    $this->enableInteractionLogging = $enableInteractionLogging;
  }
  /** @return bool */
  public function getEnableInteractionLogging()
  {
    return $this->enableInteractionLogging;
  }
  /** @param bool */
  public function setEnableStackdriverLogging($enableStackdriverLogging)
  {
    $this->enableStackdriverLogging = $enableStackdriverLogging;
  }
  /** @return bool */
  public function getEnableStackdriverLogging()
  {
    return $this->enableStackdriverLogging;
  }
}

class GoogleCloudDialogflowCxV3Agent extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3AdvancedSettings */
  public $advancedSettings;
  /** @var string */
  public $avatarUri;
  /** @var string */
  public $defaultLanguageCode;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $enableSpellCorrection;
  /** @var bool */
  public $enableStackdriverLogging;
  /** @var bool */
  public $locked;
  /** @var string */
  public $name;
  /** @var string */
  public $securitySettings;
  /** @var GoogleCloudDialogflowCxV3SpeechToTextSettings */
  public $speechToTextSettings;
  /** @var string */
  public $startFlow;
  /** @var string[] */
  public $supportedLanguageCodes;
  /** @var string */
  public $timeZone;
  protected $collection_key = 'supportedLanguageCodes';
  protected $advancedSettingsType = GoogleCloudDialogflowCxV3AdvancedSettings::class;
  protected $advancedSettingsDataType = '';
  protected $speechToTextSettingsType = GoogleCloudDialogflowCxV3SpeechToTextSettings::class;
  protected $speechToTextSettingsDataType = '';
  /** @param GoogleCloudDialogflowCxV3AdvancedSettings */
  public function setAdvancedSettings(GoogleCloudDialogflowCxV3AdvancedSettings $advancedSettings)
  {
    $this->advancedSettings = $advancedSettings;
  }
  /** @return GoogleCloudDialogflowCxV3AdvancedSettings */
  public function getAdvancedSettings()
  {
    return $this->advancedSettings;
  }
  /** @param string */
  public function setAvatarUri($avatarUri)
  {
    $this->avatarUri = $avatarUri;
  }
  /** @return string */
  public function getAvatarUri()
  {
    return $this->avatarUri;
  }
  /** @param string */
  public function setDefaultLanguageCode($defaultLanguageCode)
  {
    $this->defaultLanguageCode = $defaultLanguageCode;
  }
  /** @return string */
  public function getDefaultLanguageCode()
  {
    return $this->defaultLanguageCode;
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
  public function setEnableSpellCorrection($enableSpellCorrection)
  {
    $this->enableSpellCorrection = $enableSpellCorrection;
  }
  /** @return bool */
  public function getEnableSpellCorrection()
  {
    return $this->enableSpellCorrection;
  }
  /** @param bool */
  public function setEnableStackdriverLogging($enableStackdriverLogging)
  {
    $this->enableStackdriverLogging = $enableStackdriverLogging;
  }
  /** @return bool */
  public function getEnableStackdriverLogging()
  {
    return $this->enableStackdriverLogging;
  }
  /** @param bool */
  public function setLocked($locked)
  {
    $this->locked = $locked;
  }
  /** @return bool */
  public function getLocked()
  {
    return $this->locked;
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
  public function setSecuritySettings($securitySettings)
  {
    $this->securitySettings = $securitySettings;
  }
  /** @return string */
  public function getSecuritySettings()
  {
    return $this->securitySettings;
  }
  /** @param GoogleCloudDialogflowCxV3SpeechToTextSettings */
  public function setSpeechToTextSettings(GoogleCloudDialogflowCxV3SpeechToTextSettings $speechToTextSettings)
  {
    $this->speechToTextSettings = $speechToTextSettings;
  }
  /** @return GoogleCloudDialogflowCxV3SpeechToTextSettings */
  public function getSpeechToTextSettings()
  {
    return $this->speechToTextSettings;
  }
  /** @param string */
  public function setStartFlow($startFlow)
  {
    $this->startFlow = $startFlow;
  }
  /** @return string */
  public function getStartFlow()
  {
    return $this->startFlow;
  }
  /** @param string[] */
  public function setSupportedLanguageCodes($supportedLanguageCodes)
  {
    $this->supportedLanguageCodes = $supportedLanguageCodes;
  }
  /** @return string[] */
  public function getSupportedLanguageCodes()
  {
    return $this->supportedLanguageCodes;
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

class GoogleCloudDialogflowCxV3AgentValidationResult extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3FlowValidationResult[] */
  public $flowValidationResults;
  /** @var string */
  public $name;
  protected $collection_key = 'flowValidationResults';
  protected $flowValidationResultsType = GoogleCloudDialogflowCxV3FlowValidationResult::class;
  protected $flowValidationResultsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3FlowValidationResult[] */
  public function setFlowValidationResults($flowValidationResults)
  {
    $this->flowValidationResults = $flowValidationResults;
  }
  /** @return GoogleCloudDialogflowCxV3FlowValidationResult[] */
  public function getFlowValidationResults()
  {
    return $this->flowValidationResults;
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

class GoogleCloudDialogflowCxV3AudioInput extends \Google\Model
{
  /** @var string */
  public $audio;
  /** @var GoogleCloudDialogflowCxV3InputAudioConfig */
  public $config;
  protected $configType = GoogleCloudDialogflowCxV3InputAudioConfig::class;
  protected $configDataType = '';
  /** @param string */
  public function setAudio($audio)
  {
    $this->audio = $audio;
  }
  /** @return string */
  public function getAudio()
  {
    return $this->audio;
  }
  /** @param GoogleCloudDialogflowCxV3InputAudioConfig */
  public function setConfig(GoogleCloudDialogflowCxV3InputAudioConfig $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudDialogflowCxV3InputAudioConfig */
  public function getConfig()
  {
    return $this->config;
  }
}

class GoogleCloudDialogflowCxV3BatchDeleteTestCasesRequest extends \Google\Collection
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

class GoogleCloudDialogflowCxV3BatchRunTestCasesMetadata extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3TestError[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $errorsType = GoogleCloudDialogflowCxV3TestError::class;
  protected $errorsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3TestError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GoogleCloudDialogflowCxV3TestError[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class GoogleCloudDialogflowCxV3BatchRunTestCasesRequest extends \Google\Collection
{
  /** @var string */
  public $environment;
  /** @var string[] */
  public $testCases;
  protected $collection_key = 'testCases';
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
  /** @param string[] */
  public function setTestCases($testCases)
  {
    $this->testCases = $testCases;
  }
  /** @return string[] */
  public function getTestCases()
  {
    return $this->testCases;
  }
}

class GoogleCloudDialogflowCxV3BatchRunTestCasesResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3TestCaseResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = GoogleCloudDialogflowCxV3TestCaseResult::class;
  protected $resultsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3TestCaseResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudDialogflowCxV3TestCaseResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudDialogflowCxV3CalculateCoverageResponse extends \Google\Model
{
  /** @var string */
  public $agent;
  /** @var GoogleCloudDialogflowCxV3IntentCoverage */
  public $intentCoverage;
  /** @var GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage */
  public $routeGroupCoverage;
  /** @var GoogleCloudDialogflowCxV3TransitionCoverage */
  public $transitionCoverage;
  protected $intentCoverageType = GoogleCloudDialogflowCxV3IntentCoverage::class;
  protected $intentCoverageDataType = '';
  protected $routeGroupCoverageType = GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage::class;
  protected $routeGroupCoverageDataType = '';
  protected $transitionCoverageType = GoogleCloudDialogflowCxV3TransitionCoverage::class;
  protected $transitionCoverageDataType = '';
  /** @param string */
  public function setAgent($agent)
  {
    $this->agent = $agent;
  }
  /** @return string */
  public function getAgent()
  {
    return $this->agent;
  }
  /** @param GoogleCloudDialogflowCxV3IntentCoverage */
  public function setIntentCoverage(GoogleCloudDialogflowCxV3IntentCoverage $intentCoverage)
  {
    $this->intentCoverage = $intentCoverage;
  }
  /** @return GoogleCloudDialogflowCxV3IntentCoverage */
  public function getIntentCoverage()
  {
    return $this->intentCoverage;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage */
  public function setRouteGroupCoverage(GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage $routeGroupCoverage)
  {
    $this->routeGroupCoverage = $routeGroupCoverage;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage */
  public function getRouteGroupCoverage()
  {
    return $this->routeGroupCoverage;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionCoverage */
  public function setTransitionCoverage(GoogleCloudDialogflowCxV3TransitionCoverage $transitionCoverage)
  {
    $this->transitionCoverage = $transitionCoverage;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionCoverage */
  public function getTransitionCoverage()
  {
    return $this->transitionCoverage;
  }
}

class GoogleCloudDialogflowCxV3Changelog extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $resource;
  /** @var string */
  public $type;
  /** @var string */
  public $userEmail;

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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
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
  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }
  /** @return string */
  public function getUserEmail()
  {
    return $this->userEmail;
  }
}

class GoogleCloudDialogflowCxV3CompareVersionsRequest extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $targetVersion;

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
  public function setTargetVersion($targetVersion)
  {
    $this->targetVersion = $targetVersion;
  }
  /** @return string */
  public function getTargetVersion()
  {
    return $this->targetVersion;
  }
}

class GoogleCloudDialogflowCxV3CompareVersionsResponse extends \Google\Model
{
  /** @var string */
  public $baseVersionContentJson;
  /** @var string */
  public $compareTime;
  /** @var string */
  public $targetVersionContentJson;

  /** @param string */
  public function setBaseVersionContentJson($baseVersionContentJson)
  {
    $this->baseVersionContentJson = $baseVersionContentJson;
  }
  /** @return string */
  public function getBaseVersionContentJson()
  {
    return $this->baseVersionContentJson;
  }
  /** @param string */
  public function setCompareTime($compareTime)
  {
    $this->compareTime = $compareTime;
  }
  /** @return string */
  public function getCompareTime()
  {
    return $this->compareTime;
  }
  /** @param string */
  public function setTargetVersionContentJson($targetVersionContentJson)
  {
    $this->targetVersionContentJson = $targetVersionContentJson;
  }
  /** @return string */
  public function getTargetVersionContentJson()
  {
    return $this->targetVersionContentJson;
  }
}

class GoogleCloudDialogflowCxV3ContinuousTestResult extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string */
  public $result;
  /** @var string */
  public $runTime;
  /** @var string[] */
  public $testCaseResults;
  protected $collection_key = 'testCaseResults';
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
  public function setResult($result)
  {
    $this->result = $result;
  }
  /** @return string */
  public function getResult()
  {
    return $this->result;
  }
  /** @param string */
  public function setRunTime($runTime)
  {
    $this->runTime = $runTime;
  }
  /** @return string */
  public function getRunTime()
  {
    return $this->runTime;
  }
  /** @param string[] */
  public function setTestCaseResults($testCaseResults)
  {
    $this->testCaseResults = $testCaseResults;
  }
  /** @return string[] */
  public function getTestCaseResults()
  {
    return $this->testCaseResults;
  }
}

class GoogleCloudDialogflowCxV3ConversationTurn extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3ConversationTurnUserInput */
  public $userInput;
  /** @var GoogleCloudDialogflowCxV3ConversationTurnVirtualAgentOutput */
  public $virtualAgentOutput;
  protected $userInputType = GoogleCloudDialogflowCxV3ConversationTurnUserInput::class;
  protected $userInputDataType = '';
  protected $virtualAgentOutputType = GoogleCloudDialogflowCxV3ConversationTurnVirtualAgentOutput::class;
  protected $virtualAgentOutputDataType = '';
  /** @param GoogleCloudDialogflowCxV3ConversationTurnUserInput */
  public function setUserInput(GoogleCloudDialogflowCxV3ConversationTurnUserInput $userInput)
  {
    $this->userInput = $userInput;
  }
  /** @return GoogleCloudDialogflowCxV3ConversationTurnUserInput */
  public function getUserInput()
  {
    return $this->userInput;
  }
  /** @param GoogleCloudDialogflowCxV3ConversationTurnVirtualAgentOutput */
  public function setVirtualAgentOutput(GoogleCloudDialogflowCxV3ConversationTurnVirtualAgentOutput $virtualAgentOutput)
  {
    $this->virtualAgentOutput = $virtualAgentOutput;
  }
  /** @return GoogleCloudDialogflowCxV3ConversationTurnVirtualAgentOutput */
  public function getVirtualAgentOutput()
  {
    return $this->virtualAgentOutput;
  }
}

class GoogleCloudDialogflowCxV3ConversationTurnUserInput extends \Google\Model
{
  /** @var bool */
  public $enableSentimentAnalysis;
  /** @var array[] */
  public $injectedParameters;
  /** @var GoogleCloudDialogflowCxV3QueryInput */
  public $input;
  /** @var bool */
  public $isWebhookEnabled;
  protected $inputType = GoogleCloudDialogflowCxV3QueryInput::class;
  protected $inputDataType = '';
  /** @param bool */
  public function setEnableSentimentAnalysis($enableSentimentAnalysis)
  {
    $this->enableSentimentAnalysis = $enableSentimentAnalysis;
  }
  /** @return bool */
  public function getEnableSentimentAnalysis()
  {
    return $this->enableSentimentAnalysis;
  }
  /** @param array[] */
  public function setInjectedParameters($injectedParameters)
  {
    $this->injectedParameters = $injectedParameters;
  }
  /** @return array[] */
  public function getInjectedParameters()
  {
    return $this->injectedParameters;
  }
  /** @param GoogleCloudDialogflowCxV3QueryInput */
  public function setInput(GoogleCloudDialogflowCxV3QueryInput $input)
  {
    $this->input = $input;
  }
  /** @return GoogleCloudDialogflowCxV3QueryInput */
  public function getInput()
  {
    return $this->input;
  }
  /** @param bool */
  public function setIsWebhookEnabled($isWebhookEnabled)
  {
    $this->isWebhookEnabled = $isWebhookEnabled;
  }
  /** @return bool */
  public function getIsWebhookEnabled()
  {
    return $this->isWebhookEnabled;
  }
}

class GoogleCloudDialogflowCxV3ConversationTurnVirtualAgentOutput extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Page */
  public $currentPage;
  /** @var array[] */
  public $diagnosticInfo;
  /** @var GoogleCloudDialogflowCxV3TestRunDifference[] */
  public $differences;
  /** @var array[] */
  public $sessionParameters;
  /** @var GoogleRpcStatus */
  public $status;
  /** @var GoogleCloudDialogflowCxV3ResponseMessageText[] */
  public $textResponses;
  /** @var GoogleCloudDialogflowCxV3Intent */
  public $triggeredIntent;
  protected $collection_key = 'textResponses';
  protected $currentPageType = GoogleCloudDialogflowCxV3Page::class;
  protected $currentPageDataType = '';
  protected $differencesType = GoogleCloudDialogflowCxV3TestRunDifference::class;
  protected $differencesDataType = 'array';
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  protected $textResponsesType = GoogleCloudDialogflowCxV3ResponseMessageText::class;
  protected $textResponsesDataType = 'array';
  protected $triggeredIntentType = GoogleCloudDialogflowCxV3Intent::class;
  protected $triggeredIntentDataType = '';
  /** @param GoogleCloudDialogflowCxV3Page */
  public function setCurrentPage(GoogleCloudDialogflowCxV3Page $currentPage)
  {
    $this->currentPage = $currentPage;
  }
  /** @return GoogleCloudDialogflowCxV3Page */
  public function getCurrentPage()
  {
    return $this->currentPage;
  }
  /** @param array[] */
  public function setDiagnosticInfo($diagnosticInfo)
  {
    $this->diagnosticInfo = $diagnosticInfo;
  }
  /** @return array[] */
  public function getDiagnosticInfo()
  {
    return $this->diagnosticInfo;
  }
  /** @param GoogleCloudDialogflowCxV3TestRunDifference[] */
  public function setDifferences($differences)
  {
    $this->differences = $differences;
  }
  /** @return GoogleCloudDialogflowCxV3TestRunDifference[] */
  public function getDifferences()
  {
    return $this->differences;
  }
  /** @param array[] */
  public function setSessionParameters($sessionParameters)
  {
    $this->sessionParameters = $sessionParameters;
  }
  /** @return array[] */
  public function getSessionParameters()
  {
    return $this->sessionParameters;
  }
  /** @param GoogleRpcStatus */
  public function setStatus(GoogleRpcStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleRpcStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessageText[] */
  public function setTextResponses($textResponses)
  {
    $this->textResponses = $textResponses;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessageText[] */
  public function getTextResponses()
  {
    return $this->textResponses;
  }
  /** @param GoogleCloudDialogflowCxV3Intent */
  public function setTriggeredIntent(GoogleCloudDialogflowCxV3Intent $triggeredIntent)
  {
    $this->triggeredIntent = $triggeredIntent;
  }
  /** @return GoogleCloudDialogflowCxV3Intent */
  public function getTriggeredIntent()
  {
    return $this->triggeredIntent;
  }
}

class GoogleCloudDialogflowCxV3CreateDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowCxV3CreateVersionOperationMetadata extends \Google\Model
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

class GoogleCloudDialogflowCxV3DeleteDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowCxV3DeployFlowMetadata extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3TestError[] */
  public $testErrors;
  protected $collection_key = 'testErrors';
  protected $testErrorsType = GoogleCloudDialogflowCxV3TestError::class;
  protected $testErrorsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3TestError[] */
  public function setTestErrors($testErrors)
  {
    $this->testErrors = $testErrors;
  }
  /** @return GoogleCloudDialogflowCxV3TestError[] */
  public function getTestErrors()
  {
    return $this->testErrors;
  }
}

class GoogleCloudDialogflowCxV3DeployFlowRequest extends \Google\Model
{
  /** @var string */
  public $flowVersion;

  /** @param string */
  public function setFlowVersion($flowVersion)
  {
    $this->flowVersion = $flowVersion;
  }
  /** @return string */
  public function getFlowVersion()
  {
    return $this->flowVersion;
  }
}

class GoogleCloudDialogflowCxV3DeployFlowResponse extends \Google\Model
{
  /** @var string */
  public $deployment;
  /** @var GoogleCloudDialogflowCxV3Environment */
  public $environment;
  protected $environmentType = GoogleCloudDialogflowCxV3Environment::class;
  protected $environmentDataType = '';
  /** @param string */
  public function setDeployment($deployment)
  {
    $this->deployment = $deployment;
  }
  /** @return string */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /** @param GoogleCloudDialogflowCxV3Environment */
  public function setEnvironment(GoogleCloudDialogflowCxV3Environment $environment)
  {
    $this->environment = $environment;
  }
  /** @return GoogleCloudDialogflowCxV3Environment */
  public function getEnvironment()
  {
    return $this->environment;
  }
}

class GoogleCloudDialogflowCxV3Deployment extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $flowVersion;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3DeploymentResult */
  public $result;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  protected $resultType = GoogleCloudDialogflowCxV3DeploymentResult::class;
  protected $resultDataType = '';
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
  public function setFlowVersion($flowVersion)
  {
    $this->flowVersion = $flowVersion;
  }
  /** @return string */
  public function getFlowVersion()
  {
    return $this->flowVersion;
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
  /** @param GoogleCloudDialogflowCxV3DeploymentResult */
  public function setResult(GoogleCloudDialogflowCxV3DeploymentResult $result)
  {
    $this->result = $result;
  }
  /** @return GoogleCloudDialogflowCxV3DeploymentResult */
  public function getResult()
  {
    return $this->result;
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

class GoogleCloudDialogflowCxV3DeploymentResult extends \Google\Collection
{
  /** @var string[] */
  public $deploymentTestResults;
  /** @var string */
  public $experiment;
  protected $collection_key = 'deploymentTestResults';
  /** @param string[] */
  public function setDeploymentTestResults($deploymentTestResults)
  {
    $this->deploymentTestResults = $deploymentTestResults;
  }
  /** @return string[] */
  public function getDeploymentTestResults()
  {
    return $this->deploymentTestResults;
  }
  /** @param string */
  public function setExperiment($experiment)
  {
    $this->experiment = $experiment;
  }
  /** @return string */
  public function getExperiment()
  {
    return $this->experiment;
  }
}

class GoogleCloudDialogflowCxV3DetectIntentRequest extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3OutputAudioConfig */
  public $outputAudioConfig;
  /** @var GoogleCloudDialogflowCxV3QueryInput */
  public $queryInput;
  /** @var GoogleCloudDialogflowCxV3QueryParameters */
  public $queryParams;
  protected $outputAudioConfigType = GoogleCloudDialogflowCxV3OutputAudioConfig::class;
  protected $outputAudioConfigDataType = '';
  protected $queryInputType = GoogleCloudDialogflowCxV3QueryInput::class;
  protected $queryInputDataType = '';
  protected $queryParamsType = GoogleCloudDialogflowCxV3QueryParameters::class;
  protected $queryParamsDataType = '';
  /** @param GoogleCloudDialogflowCxV3OutputAudioConfig */
  public function setOutputAudioConfig(GoogleCloudDialogflowCxV3OutputAudioConfig $outputAudioConfig)
  {
    $this->outputAudioConfig = $outputAudioConfig;
  }
  /** @return GoogleCloudDialogflowCxV3OutputAudioConfig */
  public function getOutputAudioConfig()
  {
    return $this->outputAudioConfig;
  }
  /** @param GoogleCloudDialogflowCxV3QueryInput */
  public function setQueryInput(GoogleCloudDialogflowCxV3QueryInput $queryInput)
  {
    $this->queryInput = $queryInput;
  }
  /** @return GoogleCloudDialogflowCxV3QueryInput */
  public function getQueryInput()
  {
    return $this->queryInput;
  }
  /** @param GoogleCloudDialogflowCxV3QueryParameters */
  public function setQueryParams(GoogleCloudDialogflowCxV3QueryParameters $queryParams)
  {
    $this->queryParams = $queryParams;
  }
  /** @return GoogleCloudDialogflowCxV3QueryParameters */
  public function getQueryParams()
  {
    return $this->queryParams;
  }
}

class GoogleCloudDialogflowCxV3DetectIntentResponse extends \Google\Model
{
  /** @var bool */
  public $allowCancellation;
  /** @var string */
  public $outputAudio;
  /** @var GoogleCloudDialogflowCxV3OutputAudioConfig */
  public $outputAudioConfig;
  /** @var GoogleCloudDialogflowCxV3QueryResult */
  public $queryResult;
  /** @var string */
  public $responseId;
  /** @var string */
  public $responseType;
  protected $outputAudioConfigType = GoogleCloudDialogflowCxV3OutputAudioConfig::class;
  protected $outputAudioConfigDataType = '';
  protected $queryResultType = GoogleCloudDialogflowCxV3QueryResult::class;
  protected $queryResultDataType = '';
  /** @param bool */
  public function setAllowCancellation($allowCancellation)
  {
    $this->allowCancellation = $allowCancellation;
  }
  /** @return bool */
  public function getAllowCancellation()
  {
    return $this->allowCancellation;
  }
  /** @param string */
  public function setOutputAudio($outputAudio)
  {
    $this->outputAudio = $outputAudio;
  }
  /** @return string */
  public function getOutputAudio()
  {
    return $this->outputAudio;
  }
  /** @param GoogleCloudDialogflowCxV3OutputAudioConfig */
  public function setOutputAudioConfig(GoogleCloudDialogflowCxV3OutputAudioConfig $outputAudioConfig)
  {
    $this->outputAudioConfig = $outputAudioConfig;
  }
  /** @return GoogleCloudDialogflowCxV3OutputAudioConfig */
  public function getOutputAudioConfig()
  {
    return $this->outputAudioConfig;
  }
  /** @param GoogleCloudDialogflowCxV3QueryResult */
  public function setQueryResult(GoogleCloudDialogflowCxV3QueryResult $queryResult)
  {
    $this->queryResult = $queryResult;
  }
  /** @return GoogleCloudDialogflowCxV3QueryResult */
  public function getQueryResult()
  {
    return $this->queryResult;
  }
  /** @param string */
  public function setResponseId($responseId)
  {
    $this->responseId = $responseId;
  }
  /** @return string */
  public function getResponseId()
  {
    return $this->responseId;
  }
  /** @param string */
  public function setResponseType($responseType)
  {
    $this->responseType = $responseType;
  }
  /** @return string */
  public function getResponseType()
  {
    return $this->responseType;
  }
}

class GoogleCloudDialogflowCxV3DtmfInput extends \Google\Model
{
  /** @var string */
  public $digits;
  /** @var string */
  public $finishDigit;

  /** @param string */
  public function setDigits($digits)
  {
    $this->digits = $digits;
  }
  /** @return string */
  public function getDigits()
  {
    return $this->digits;
  }
  /** @param string */
  public function setFinishDigit($finishDigit)
  {
    $this->finishDigit = $finishDigit;
  }
  /** @return string */
  public function getFinishDigit()
  {
    return $this->finishDigit;
  }
}

class GoogleCloudDialogflowCxV3EntityType extends \Google\Collection
{
  /** @var string */
  public $autoExpansionMode;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $enableFuzzyExtraction;
  /** @var GoogleCloudDialogflowCxV3EntityTypeEntity[] */
  public $entities;
  /** @var GoogleCloudDialogflowCxV3EntityTypeExcludedPhrase[] */
  public $excludedPhrases;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var bool */
  public $redact;
  protected $collection_key = 'excludedPhrases';
  protected $entitiesType = GoogleCloudDialogflowCxV3EntityTypeEntity::class;
  protected $entitiesDataType = 'array';
  protected $excludedPhrasesType = GoogleCloudDialogflowCxV3EntityTypeExcludedPhrase::class;
  protected $excludedPhrasesDataType = 'array';
  /** @param string */
  public function setAutoExpansionMode($autoExpansionMode)
  {
    $this->autoExpansionMode = $autoExpansionMode;
  }
  /** @return string */
  public function getAutoExpansionMode()
  {
    return $this->autoExpansionMode;
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
  public function setEnableFuzzyExtraction($enableFuzzyExtraction)
  {
    $this->enableFuzzyExtraction = $enableFuzzyExtraction;
  }
  /** @return bool */
  public function getEnableFuzzyExtraction()
  {
    return $this->enableFuzzyExtraction;
  }
  /** @param GoogleCloudDialogflowCxV3EntityTypeEntity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudDialogflowCxV3EntityTypeEntity[] */
  public function getEntities()
  {
    return $this->entities;
  }
  /** @param GoogleCloudDialogflowCxV3EntityTypeExcludedPhrase[] */
  public function setExcludedPhrases($excludedPhrases)
  {
    $this->excludedPhrases = $excludedPhrases;
  }
  /** @return GoogleCloudDialogflowCxV3EntityTypeExcludedPhrase[] */
  public function getExcludedPhrases()
  {
    return $this->excludedPhrases;
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
  public function setRedact($redact)
  {
    $this->redact = $redact;
  }
  /** @return bool */
  public function getRedact()
  {
    return $this->redact;
  }
}

class GoogleCloudDialogflowCxV3EntityTypeEntity extends \Google\Collection
{
  /** @var string[] */
  public $synonyms;
  /** @var string */
  public $value;
  protected $collection_key = 'synonyms';
  /** @param string[] */
  public function setSynonyms($synonyms)
  {
    $this->synonyms = $synonyms;
  }
  /** @return string[] */
  public function getSynonyms()
  {
    return $this->synonyms;
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

class GoogleCloudDialogflowCxV3EntityTypeExcludedPhrase extends \Google\Model
{
  /** @var string */
  public $value;

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

class GoogleCloudDialogflowCxV3Environment extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3EnvironmentTestCasesConfig */
  public $testCasesConfig;
  /** @var string */
  public $updateTime;
  /** @var GoogleCloudDialogflowCxV3EnvironmentVersionConfig[] */
  public $versionConfigs;
  /** @var GoogleCloudDialogflowCxV3EnvironmentWebhookConfig */
  public $webhookConfig;
  protected $collection_key = 'versionConfigs';
  protected $testCasesConfigType = GoogleCloudDialogflowCxV3EnvironmentTestCasesConfig::class;
  protected $testCasesConfigDataType = '';
  protected $versionConfigsType = GoogleCloudDialogflowCxV3EnvironmentVersionConfig::class;
  protected $versionConfigsDataType = 'array';
  protected $webhookConfigType = GoogleCloudDialogflowCxV3EnvironmentWebhookConfig::class;
  protected $webhookConfigDataType = '';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param GoogleCloudDialogflowCxV3EnvironmentTestCasesConfig */
  public function setTestCasesConfig(GoogleCloudDialogflowCxV3EnvironmentTestCasesConfig $testCasesConfig)
  {
    $this->testCasesConfig = $testCasesConfig;
  }
  /** @return GoogleCloudDialogflowCxV3EnvironmentTestCasesConfig */
  public function getTestCasesConfig()
  {
    return $this->testCasesConfig;
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
  /** @param GoogleCloudDialogflowCxV3EnvironmentVersionConfig[] */
  public function setVersionConfigs($versionConfigs)
  {
    $this->versionConfigs = $versionConfigs;
  }
  /** @return GoogleCloudDialogflowCxV3EnvironmentVersionConfig[] */
  public function getVersionConfigs()
  {
    return $this->versionConfigs;
  }
  /** @param GoogleCloudDialogflowCxV3EnvironmentWebhookConfig */
  public function setWebhookConfig(GoogleCloudDialogflowCxV3EnvironmentWebhookConfig $webhookConfig)
  {
    $this->webhookConfig = $webhookConfig;
  }
  /** @return GoogleCloudDialogflowCxV3EnvironmentWebhookConfig */
  public function getWebhookConfig()
  {
    return $this->webhookConfig;
  }
}

class GoogleCloudDialogflowCxV3EnvironmentTestCasesConfig extends \Google\Collection
{
  /** @var bool */
  public $enableContinuousRun;
  /** @var bool */
  public $enablePredeploymentRun;
  /** @var string[] */
  public $testCases;
  protected $collection_key = 'testCases';
  /** @param bool */
  public function setEnableContinuousRun($enableContinuousRun)
  {
    $this->enableContinuousRun = $enableContinuousRun;
  }
  /** @return bool */
  public function getEnableContinuousRun()
  {
    return $this->enableContinuousRun;
  }
  /** @param bool */
  public function setEnablePredeploymentRun($enablePredeploymentRun)
  {
    $this->enablePredeploymentRun = $enablePredeploymentRun;
  }
  /** @return bool */
  public function getEnablePredeploymentRun()
  {
    return $this->enablePredeploymentRun;
  }
  /** @param string[] */
  public function setTestCases($testCases)
  {
    $this->testCases = $testCases;
  }
  /** @return string[] */
  public function getTestCases()
  {
    return $this->testCases;
  }
}

class GoogleCloudDialogflowCxV3EnvironmentVersionConfig extends \Google\Model
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

class GoogleCloudDialogflowCxV3EnvironmentWebhookConfig extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Webhook[] */
  public $webhookOverrides;
  protected $collection_key = 'webhookOverrides';
  protected $webhookOverridesType = GoogleCloudDialogflowCxV3Webhook::class;
  protected $webhookOverridesDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Webhook[] */
  public function setWebhookOverrides($webhookOverrides)
  {
    $this->webhookOverrides = $webhookOverrides;
  }
  /** @return GoogleCloudDialogflowCxV3Webhook[] */
  public function getWebhookOverrides()
  {
    return $this->webhookOverrides;
  }
}

class GoogleCloudDialogflowCxV3EventHandler extends \Google\Model
{
  /** @var string */
  public $event;
  /** @var string */
  public $name;
  /** @var string */
  public $targetFlow;
  /** @var string */
  public $targetPage;
  /** @var GoogleCloudDialogflowCxV3Fulfillment */
  public $triggerFulfillment;
  protected $triggerFulfillmentType = GoogleCloudDialogflowCxV3Fulfillment::class;
  protected $triggerFulfillmentDataType = '';
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
  public function setTargetFlow($targetFlow)
  {
    $this->targetFlow = $targetFlow;
  }
  /** @return string */
  public function getTargetFlow()
  {
    return $this->targetFlow;
  }
  /** @param string */
  public function setTargetPage($targetPage)
  {
    $this->targetPage = $targetPage;
  }
  /** @return string */
  public function getTargetPage()
  {
    return $this->targetPage;
  }
  /** @param GoogleCloudDialogflowCxV3Fulfillment */
  public function setTriggerFulfillment(GoogleCloudDialogflowCxV3Fulfillment $triggerFulfillment)
  {
    $this->triggerFulfillment = $triggerFulfillment;
  }
  /** @return GoogleCloudDialogflowCxV3Fulfillment */
  public function getTriggerFulfillment()
  {
    return $this->triggerFulfillment;
  }
}

class GoogleCloudDialogflowCxV3EventInput extends \Google\Model
{
  /** @var string */
  public $event;

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
}

class GoogleCloudDialogflowCxV3Experiment extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDialogflowCxV3ExperimentDefinition */
  public $definition;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $endTime;
  /** @var string */
  public $experimentLength;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3ExperimentResult */
  public $result;
  /** @var GoogleCloudDialogflowCxV3RolloutConfig */
  public $rolloutConfig;
  /** @var string */
  public $rolloutFailureReason;
  /** @var GoogleCloudDialogflowCxV3RolloutState */
  public $rolloutState;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var GoogleCloudDialogflowCxV3VariantsHistory[] */
  public $variantsHistory;
  protected $collection_key = 'variantsHistory';
  protected $definitionType = GoogleCloudDialogflowCxV3ExperimentDefinition::class;
  protected $definitionDataType = '';
  protected $resultType = GoogleCloudDialogflowCxV3ExperimentResult::class;
  protected $resultDataType = '';
  protected $rolloutConfigType = GoogleCloudDialogflowCxV3RolloutConfig::class;
  protected $rolloutConfigDataType = '';
  protected $rolloutStateType = GoogleCloudDialogflowCxV3RolloutState::class;
  protected $rolloutStateDataType = '';
  protected $variantsHistoryType = GoogleCloudDialogflowCxV3VariantsHistory::class;
  protected $variantsHistoryDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3ExperimentDefinition */
  public function setDefinition(GoogleCloudDialogflowCxV3ExperimentDefinition $definition)
  {
    $this->definition = $definition;
  }
  /** @return GoogleCloudDialogflowCxV3ExperimentDefinition */
  public function getDefinition()
  {
    return $this->definition;
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
  public function setExperimentLength($experimentLength)
  {
    $this->experimentLength = $experimentLength;
  }
  /** @return string */
  public function getExperimentLength()
  {
    return $this->experimentLength;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param GoogleCloudDialogflowCxV3ExperimentResult */
  public function setResult(GoogleCloudDialogflowCxV3ExperimentResult $result)
  {
    $this->result = $result;
  }
  /** @return GoogleCloudDialogflowCxV3ExperimentResult */
  public function getResult()
  {
    return $this->result;
  }
  /** @param GoogleCloudDialogflowCxV3RolloutConfig */
  public function setRolloutConfig(GoogleCloudDialogflowCxV3RolloutConfig $rolloutConfig)
  {
    $this->rolloutConfig = $rolloutConfig;
  }
  /** @return GoogleCloudDialogflowCxV3RolloutConfig */
  public function getRolloutConfig()
  {
    return $this->rolloutConfig;
  }
  /** @param string */
  public function setRolloutFailureReason($rolloutFailureReason)
  {
    $this->rolloutFailureReason = $rolloutFailureReason;
  }
  /** @return string */
  public function getRolloutFailureReason()
  {
    return $this->rolloutFailureReason;
  }
  /** @param GoogleCloudDialogflowCxV3RolloutState */
  public function setRolloutState(GoogleCloudDialogflowCxV3RolloutState $rolloutState)
  {
    $this->rolloutState = $rolloutState;
  }
  /** @return GoogleCloudDialogflowCxV3RolloutState */
  public function getRolloutState()
  {
    return $this->rolloutState;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param GoogleCloudDialogflowCxV3VariantsHistory[] */
  public function setVariantsHistory($variantsHistory)
  {
    $this->variantsHistory = $variantsHistory;
  }
  /** @return GoogleCloudDialogflowCxV3VariantsHistory[] */
  public function getVariantsHistory()
  {
    return $this->variantsHistory;
  }
}

class GoogleCloudDialogflowCxV3ExperimentDefinition extends \Google\Model
{
  /** @var string */
  public $condition;
  /** @var GoogleCloudDialogflowCxV3VersionVariants */
  public $versionVariants;
  protected $versionVariantsType = GoogleCloudDialogflowCxV3VersionVariants::class;
  protected $versionVariantsDataType = '';
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param GoogleCloudDialogflowCxV3VersionVariants */
  public function setVersionVariants(GoogleCloudDialogflowCxV3VersionVariants $versionVariants)
  {
    $this->versionVariants = $versionVariants;
  }
  /** @return GoogleCloudDialogflowCxV3VersionVariants */
  public function getVersionVariants()
  {
    return $this->versionVariants;
  }
}

class GoogleCloudDialogflowCxV3ExperimentResult extends \Google\Collection
{
  /** @var string */
  public $lastUpdateTime;
  /** @var GoogleCloudDialogflowCxV3ExperimentResultVersionMetrics[] */
  public $versionMetrics;
  protected $collection_key = 'versionMetrics';
  protected $versionMetricsType = GoogleCloudDialogflowCxV3ExperimentResultVersionMetrics::class;
  protected $versionMetricsDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3ExperimentResultVersionMetrics[] */
  public function setVersionMetrics($versionMetrics)
  {
    $this->versionMetrics = $versionMetrics;
  }
  /** @return GoogleCloudDialogflowCxV3ExperimentResultVersionMetrics[] */
  public function getVersionMetrics()
  {
    return $this->versionMetrics;
  }
}

class GoogleCloudDialogflowCxV3ExperimentResultConfidenceInterval extends \Google\Model
{
  public $confidenceLevel;
  public $lowerBound;
  public $ratio;
  public $upperBound;

  public function setConfidenceLevel($confidenceLevel)
  {
    $this->confidenceLevel = $confidenceLevel;
  }
  public function getConfidenceLevel()
  {
    return $this->confidenceLevel;
  }
  public function setLowerBound($lowerBound)
  {
    $this->lowerBound = $lowerBound;
  }
  public function getLowerBound()
  {
    return $this->lowerBound;
  }
  public function setRatio($ratio)
  {
    $this->ratio = $ratio;
  }
  public function getRatio()
  {
    return $this->ratio;
  }
  public function setUpperBound($upperBound)
  {
    $this->upperBound = $upperBound;
  }
  public function getUpperBound()
  {
    return $this->upperBound;
  }
}

class GoogleCloudDialogflowCxV3ExperimentResultMetric extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3ExperimentResultConfidenceInterval */
  public $confidenceInterval;
  public $count;
  /** @var string */
  public $countType;
  public $ratio;
  /** @var string */
  public $type;
  protected $confidenceIntervalType = GoogleCloudDialogflowCxV3ExperimentResultConfidenceInterval::class;
  protected $confidenceIntervalDataType = '';
  /** @param GoogleCloudDialogflowCxV3ExperimentResultConfidenceInterval */
  public function setConfidenceInterval(GoogleCloudDialogflowCxV3ExperimentResultConfidenceInterval $confidenceInterval)
  {
    $this->confidenceInterval = $confidenceInterval;
  }
  /** @return GoogleCloudDialogflowCxV3ExperimentResultConfidenceInterval */
  public function getConfidenceInterval()
  {
    return $this->confidenceInterval;
  }
  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  /** @param string */
  public function setCountType($countType)
  {
    $this->countType = $countType;
  }
  /** @return string */
  public function getCountType()
  {
    return $this->countType;
  }
  public function setRatio($ratio)
  {
    $this->ratio = $ratio;
  }
  public function getRatio()
  {
    return $this->ratio;
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

class GoogleCloudDialogflowCxV3ExperimentResultVersionMetrics extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3ExperimentResultMetric[] */
  public $metrics;
  /** @var int */
  public $sessionCount;
  /** @var string */
  public $version;
  protected $collection_key = 'metrics';
  protected $metricsType = GoogleCloudDialogflowCxV3ExperimentResultMetric::class;
  protected $metricsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3ExperimentResultMetric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudDialogflowCxV3ExperimentResultMetric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param int */
  public function setSessionCount($sessionCount)
  {
    $this->sessionCount = $sessionCount;
  }
  /** @return int */
  public function getSessionCount()
  {
    return $this->sessionCount;
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

class GoogleCloudDialogflowCxV3ExportAgentRequest extends \Google\Model
{
  /** @var string */
  public $agentUri;
  /** @var string */
  public $dataFormat;
  /** @var string */
  public $environment;

  /** @param string */
  public function setAgentUri($agentUri)
  {
    $this->agentUri = $agentUri;
  }
  /** @return string */
  public function getAgentUri()
  {
    return $this->agentUri;
  }
  /** @param string */
  public function setDataFormat($dataFormat)
  {
    $this->dataFormat = $dataFormat;
  }
  /** @return string */
  public function getDataFormat()
  {
    return $this->dataFormat;
  }
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

class GoogleCloudDialogflowCxV3ExportAgentResponse extends \Google\Model
{
  /** @var string */
  public $agentContent;
  /** @var string */
  public $agentUri;

  /** @param string */
  public function setAgentContent($agentContent)
  {
    $this->agentContent = $agentContent;
  }
  /** @return string */
  public function getAgentContent()
  {
    return $this->agentContent;
  }
  /** @param string */
  public function setAgentUri($agentUri)
  {
    $this->agentUri = $agentUri;
  }
  /** @return string */
  public function getAgentUri()
  {
    return $this->agentUri;
  }
}

class GoogleCloudDialogflowCxV3ExportFlowRequest extends \Google\Model
{
  /** @var string */
  public $flowUri;
  /** @var bool */
  public $includeReferencedFlows;

  /** @param string */
  public function setFlowUri($flowUri)
  {
    $this->flowUri = $flowUri;
  }
  /** @return string */
  public function getFlowUri()
  {
    return $this->flowUri;
  }
  /** @param bool */
  public function setIncludeReferencedFlows($includeReferencedFlows)
  {
    $this->includeReferencedFlows = $includeReferencedFlows;
  }
  /** @return bool */
  public function getIncludeReferencedFlows()
  {
    return $this->includeReferencedFlows;
  }
}

class GoogleCloudDialogflowCxV3ExportFlowResponse extends \Google\Model
{
  /** @var string */
  public $flowContent;
  /** @var string */
  public $flowUri;

  /** @param string */
  public function setFlowContent($flowContent)
  {
    $this->flowContent = $flowContent;
  }
  /** @return string */
  public function getFlowContent()
  {
    return $this->flowContent;
  }
  /** @param string */
  public function setFlowUri($flowUri)
  {
    $this->flowUri = $flowUri;
  }
  /** @return string */
  public function getFlowUri()
  {
    return $this->flowUri;
  }
}

class GoogleCloudDialogflowCxV3ExportTestCasesMetadata extends \Google\Model
{
}

class GoogleCloudDialogflowCxV3ExportTestCasesRequest extends \Google\Model
{
  /** @var string */
  public $dataFormat;
  /** @var string */
  public $filter;
  /** @var string */
  public $gcsUri;

  /** @param string */
  public function setDataFormat($dataFormat)
  {
    $this->dataFormat = $dataFormat;
  }
  /** @return string */
  public function getDataFormat()
  {
    return $this->dataFormat;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
}

class GoogleCloudDialogflowCxV3ExportTestCasesResponse extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $gcsUri;

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
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
}

class GoogleCloudDialogflowCxV3Flow extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDialogflowCxV3EventHandler[] */
  public $eventHandlers;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3NluSettings */
  public $nluSettings;
  /** @var string[] */
  public $transitionRouteGroups;
  /** @var GoogleCloudDialogflowCxV3TransitionRoute[] */
  public $transitionRoutes;
  protected $collection_key = 'transitionRoutes';
  protected $eventHandlersType = GoogleCloudDialogflowCxV3EventHandler::class;
  protected $eventHandlersDataType = 'array';
  protected $nluSettingsType = GoogleCloudDialogflowCxV3NluSettings::class;
  protected $nluSettingsDataType = '';
  protected $transitionRoutesType = GoogleCloudDialogflowCxV3TransitionRoute::class;
  protected $transitionRoutesDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3EventHandler[] */
  public function setEventHandlers($eventHandlers)
  {
    $this->eventHandlers = $eventHandlers;
  }
  /** @return GoogleCloudDialogflowCxV3EventHandler[] */
  public function getEventHandlers()
  {
    return $this->eventHandlers;
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
  /** @param GoogleCloudDialogflowCxV3NluSettings */
  public function setNluSettings(GoogleCloudDialogflowCxV3NluSettings $nluSettings)
  {
    $this->nluSettings = $nluSettings;
  }
  /** @return GoogleCloudDialogflowCxV3NluSettings */
  public function getNluSettings()
  {
    return $this->nluSettings;
  }
  /** @param string[] */
  public function setTransitionRouteGroups($transitionRouteGroups)
  {
    $this->transitionRouteGroups = $transitionRouteGroups;
  }
  /** @return string[] */
  public function getTransitionRouteGroups()
  {
    return $this->transitionRouteGroups;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionRoute[] */
  public function setTransitionRoutes($transitionRoutes)
  {
    $this->transitionRoutes = $transitionRoutes;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionRoute[] */
  public function getTransitionRoutes()
  {
    return $this->transitionRoutes;
  }
}

class GoogleCloudDialogflowCxV3FlowValidationResult extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  /** @var GoogleCloudDialogflowCxV3ValidationMessage[] */
  public $validationMessages;
  protected $collection_key = 'validationMessages';
  protected $validationMessagesType = GoogleCloudDialogflowCxV3ValidationMessage::class;
  protected $validationMessagesDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3ValidationMessage[] */
  public function setValidationMessages($validationMessages)
  {
    $this->validationMessages = $validationMessages;
  }
  /** @return GoogleCloudDialogflowCxV3ValidationMessage[] */
  public function getValidationMessages()
  {
    return $this->validationMessages;
  }
}

class GoogleCloudDialogflowCxV3Form extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3FormParameter[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = GoogleCloudDialogflowCxV3FormParameter::class;
  protected $parametersDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3FormParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudDialogflowCxV3FormParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleCloudDialogflowCxV3FormParameter extends \Google\Model
{
  /** @var array */
  public $defaultValue;
  /** @var string */
  public $displayName;
  /** @var string */
  public $entityType;
  /** @var GoogleCloudDialogflowCxV3FormParameterFillBehavior */
  public $fillBehavior;
  /** @var bool */
  public $isList;
  /** @var bool */
  public $redact;
  /** @var bool */
  public $required;
  protected $fillBehaviorType = GoogleCloudDialogflowCxV3FormParameterFillBehavior::class;
  protected $fillBehaviorDataType = '';
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
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /** @return string */
  public function getEntityType()
  {
    return $this->entityType;
  }
  /** @param GoogleCloudDialogflowCxV3FormParameterFillBehavior */
  public function setFillBehavior(GoogleCloudDialogflowCxV3FormParameterFillBehavior $fillBehavior)
  {
    $this->fillBehavior = $fillBehavior;
  }
  /** @return GoogleCloudDialogflowCxV3FormParameterFillBehavior */
  public function getFillBehavior()
  {
    return $this->fillBehavior;
  }
  /** @param bool */
  public function setIsList($isList)
  {
    $this->isList = $isList;
  }
  /** @return bool */
  public function getIsList()
  {
    return $this->isList;
  }
  /** @param bool */
  public function setRedact($redact)
  {
    $this->redact = $redact;
  }
  /** @return bool */
  public function getRedact()
  {
    return $this->redact;
  }
  /** @param bool */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /** @return bool */
  public function getRequired()
  {
    return $this->required;
  }
}

class GoogleCloudDialogflowCxV3FormParameterFillBehavior extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Fulfillment */
  public $initialPromptFulfillment;
  /** @var GoogleCloudDialogflowCxV3EventHandler[] */
  public $repromptEventHandlers;
  protected $collection_key = 'repromptEventHandlers';
  protected $initialPromptFulfillmentType = GoogleCloudDialogflowCxV3Fulfillment::class;
  protected $initialPromptFulfillmentDataType = '';
  protected $repromptEventHandlersType = GoogleCloudDialogflowCxV3EventHandler::class;
  protected $repromptEventHandlersDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Fulfillment */
  public function setInitialPromptFulfillment(GoogleCloudDialogflowCxV3Fulfillment $initialPromptFulfillment)
  {
    $this->initialPromptFulfillment = $initialPromptFulfillment;
  }
  /** @return GoogleCloudDialogflowCxV3Fulfillment */
  public function getInitialPromptFulfillment()
  {
    return $this->initialPromptFulfillment;
  }
  /** @param GoogleCloudDialogflowCxV3EventHandler[] */
  public function setRepromptEventHandlers($repromptEventHandlers)
  {
    $this->repromptEventHandlers = $repromptEventHandlers;
  }
  /** @return GoogleCloudDialogflowCxV3EventHandler[] */
  public function getRepromptEventHandlers()
  {
    return $this->repromptEventHandlers;
  }
}

class GoogleCloudDialogflowCxV3FulfillIntentRequest extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3Match */
  public $match;
  /** @var GoogleCloudDialogflowCxV3MatchIntentRequest */
  public $matchIntentRequest;
  /** @var GoogleCloudDialogflowCxV3OutputAudioConfig */
  public $outputAudioConfig;
  protected $matchType = GoogleCloudDialogflowCxV3Match::class;
  protected $matchDataType = '';
  protected $matchIntentRequestType = GoogleCloudDialogflowCxV3MatchIntentRequest::class;
  protected $matchIntentRequestDataType = '';
  protected $outputAudioConfigType = GoogleCloudDialogflowCxV3OutputAudioConfig::class;
  protected $outputAudioConfigDataType = '';
  /** @param GoogleCloudDialogflowCxV3Match */
  public function setMatch(GoogleCloudDialogflowCxV3Match $match)
  {
    $this->match = $match;
  }
  /** @return GoogleCloudDialogflowCxV3Match */
  public function getMatch()
  {
    return $this->match;
  }
  /** @param GoogleCloudDialogflowCxV3MatchIntentRequest */
  public function setMatchIntentRequest(GoogleCloudDialogflowCxV3MatchIntentRequest $matchIntentRequest)
  {
    $this->matchIntentRequest = $matchIntentRequest;
  }
  /** @return GoogleCloudDialogflowCxV3MatchIntentRequest */
  public function getMatchIntentRequest()
  {
    return $this->matchIntentRequest;
  }
  /** @param GoogleCloudDialogflowCxV3OutputAudioConfig */
  public function setOutputAudioConfig(GoogleCloudDialogflowCxV3OutputAudioConfig $outputAudioConfig)
  {
    $this->outputAudioConfig = $outputAudioConfig;
  }
  /** @return GoogleCloudDialogflowCxV3OutputAudioConfig */
  public function getOutputAudioConfig()
  {
    return $this->outputAudioConfig;
  }
}

class GoogleCloudDialogflowCxV3FulfillIntentResponse extends \Google\Model
{
  /** @var string */
  public $outputAudio;
  /** @var GoogleCloudDialogflowCxV3OutputAudioConfig */
  public $outputAudioConfig;
  /** @var GoogleCloudDialogflowCxV3QueryResult */
  public $queryResult;
  /** @var string */
  public $responseId;
  protected $outputAudioConfigType = GoogleCloudDialogflowCxV3OutputAudioConfig::class;
  protected $outputAudioConfigDataType = '';
  protected $queryResultType = GoogleCloudDialogflowCxV3QueryResult::class;
  protected $queryResultDataType = '';
  /** @param string */
  public function setOutputAudio($outputAudio)
  {
    $this->outputAudio = $outputAudio;
  }
  /** @return string */
  public function getOutputAudio()
  {
    return $this->outputAudio;
  }
  /** @param GoogleCloudDialogflowCxV3OutputAudioConfig */
  public function setOutputAudioConfig(GoogleCloudDialogflowCxV3OutputAudioConfig $outputAudioConfig)
  {
    $this->outputAudioConfig = $outputAudioConfig;
  }
  /** @return GoogleCloudDialogflowCxV3OutputAudioConfig */
  public function getOutputAudioConfig()
  {
    return $this->outputAudioConfig;
  }
  /** @param GoogleCloudDialogflowCxV3QueryResult */
  public function setQueryResult(GoogleCloudDialogflowCxV3QueryResult $queryResult)
  {
    $this->queryResult = $queryResult;
  }
  /** @return GoogleCloudDialogflowCxV3QueryResult */
  public function getQueryResult()
  {
    return $this->queryResult;
  }
  /** @param string */
  public function setResponseId($responseId)
  {
    $this->responseId = $responseId;
  }
  /** @return string */
  public function getResponseId()
  {
    return $this->responseId;
  }
}

class GoogleCloudDialogflowCxV3Fulfillment extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3FulfillmentConditionalCases[] */
  public $conditionalCases;
  /** @var GoogleCloudDialogflowCxV3ResponseMessage[] */
  public $messages;
  /** @var bool */
  public $returnPartialResponses;
  /** @var GoogleCloudDialogflowCxV3FulfillmentSetParameterAction[] */
  public $setParameterActions;
  /** @var string */
  public $tag;
  /** @var string */
  public $webhook;
  protected $collection_key = 'setParameterActions';
  protected $conditionalCasesType = GoogleCloudDialogflowCxV3FulfillmentConditionalCases::class;
  protected $conditionalCasesDataType = 'array';
  protected $messagesType = GoogleCloudDialogflowCxV3ResponseMessage::class;
  protected $messagesDataType = 'array';
  protected $setParameterActionsType = GoogleCloudDialogflowCxV3FulfillmentSetParameterAction::class;
  protected $setParameterActionsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3FulfillmentConditionalCases[] */
  public function setConditionalCases($conditionalCases)
  {
    $this->conditionalCases = $conditionalCases;
  }
  /** @return GoogleCloudDialogflowCxV3FulfillmentConditionalCases[] */
  public function getConditionalCases()
  {
    return $this->conditionalCases;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessage[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessage[] */
  public function getMessages()
  {
    return $this->messages;
  }
  /** @param bool */
  public function setReturnPartialResponses($returnPartialResponses)
  {
    $this->returnPartialResponses = $returnPartialResponses;
  }
  /** @return bool */
  public function getReturnPartialResponses()
  {
    return $this->returnPartialResponses;
  }
  /** @param GoogleCloudDialogflowCxV3FulfillmentSetParameterAction[] */
  public function setSetParameterActions($setParameterActions)
  {
    $this->setParameterActions = $setParameterActions;
  }
  /** @return GoogleCloudDialogflowCxV3FulfillmentSetParameterAction[] */
  public function getSetParameterActions()
  {
    return $this->setParameterActions;
  }
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
  /** @param string */
  public function setWebhook($webhook)
  {
    $this->webhook = $webhook;
  }
  /** @return string */
  public function getWebhook()
  {
    return $this->webhook;
  }
}

class GoogleCloudDialogflowCxV3FulfillmentConditionalCases extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCase[] */
  public $cases;
  protected $collection_key = 'cases';
  protected $casesType = GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCase::class;
  protected $casesDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCase[] */
  public function setCases($cases)
  {
    $this->cases = $cases;
  }
  /** @return GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCase[] */
  public function getCases()
  {
    return $this->cases;
  }
}

class GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCase extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCaseCaseContent[] */
  public $caseContent;
  /** @var string */
  public $condition;
  protected $collection_key = 'caseContent';
  protected $caseContentType = GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCaseCaseContent::class;
  protected $caseContentDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCaseCaseContent[] */
  public function setCaseContent($caseContent)
  {
    $this->caseContent = $caseContent;
  }
  /** @return GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCaseCaseContent[] */
  public function getCaseContent()
  {
    return $this->caseContent;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
}

class GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCaseCaseContent extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3FulfillmentConditionalCases */
  public $additionalCases;
  /** @var GoogleCloudDialogflowCxV3ResponseMessage */
  public $message;
  protected $additionalCasesType = GoogleCloudDialogflowCxV3FulfillmentConditionalCases::class;
  protected $additionalCasesDataType = '';
  protected $messageType = GoogleCloudDialogflowCxV3ResponseMessage::class;
  protected $messageDataType = '';
  /** @param GoogleCloudDialogflowCxV3FulfillmentConditionalCases */
  public function setAdditionalCases(GoogleCloudDialogflowCxV3FulfillmentConditionalCases $additionalCases)
  {
    $this->additionalCases = $additionalCases;
  }
  /** @return GoogleCloudDialogflowCxV3FulfillmentConditionalCases */
  public function getAdditionalCases()
  {
    return $this->additionalCases;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessage */
  public function setMessage(GoogleCloudDialogflowCxV3ResponseMessage $message)
  {
    $this->message = $message;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessage */
  public function getMessage()
  {
    return $this->message;
  }
}

class GoogleCloudDialogflowCxV3FulfillmentSetParameterAction extends \Google\Model
{
  /** @var string */
  public $parameter;
  /** @var array */
  public $value;

  /** @param string */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return string */
  public function getParameter()
  {
    return $this->parameter;
  }
  /** @param array */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata extends \Google\Model
{
  /** @var string */
  public $state;

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

class GoogleCloudDialogflowCxV3ImportDocumentsOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowCxV3ImportDocumentsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $warningsType = GoogleRpcStatus::class;
  protected $warningsDataType = 'array';
  /** @param GoogleRpcStatus[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return GoogleRpcStatus[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class GoogleCloudDialogflowCxV3ImportFlowRequest extends \Google\Model
{
  /** @var string */
  public $flowContent;
  /** @var string */
  public $flowUri;
  /** @var string */
  public $importOption;

  /** @param string */
  public function setFlowContent($flowContent)
  {
    $this->flowContent = $flowContent;
  }
  /** @return string */
  public function getFlowContent()
  {
    return $this->flowContent;
  }
  /** @param string */
  public function setFlowUri($flowUri)
  {
    $this->flowUri = $flowUri;
  }
  /** @return string */
  public function getFlowUri()
  {
    return $this->flowUri;
  }
  /** @param string */
  public function setImportOption($importOption)
  {
    $this->importOption = $importOption;
  }
  /** @return string */
  public function getImportOption()
  {
    return $this->importOption;
  }
}

class GoogleCloudDialogflowCxV3ImportFlowResponse extends \Google\Model
{
  /** @var string */
  public $flow;

  /** @param string */
  public function setFlow($flow)
  {
    $this->flow = $flow;
  }
  /** @return string */
  public function getFlow()
  {
    return $this->flow;
  }
}

class GoogleCloudDialogflowCxV3ImportTestCasesMetadata extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3TestCaseError[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $errorsType = GoogleCloudDialogflowCxV3TestCaseError::class;
  protected $errorsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3TestCaseError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GoogleCloudDialogflowCxV3TestCaseError[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class GoogleCloudDialogflowCxV3ImportTestCasesRequest extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $gcsUri;

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
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
}

class GoogleCloudDialogflowCxV3ImportTestCasesResponse extends \Google\Collection
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

class GoogleCloudDialogflowCxV3InputAudioConfig extends \Google\Collection
{
  /** @var string */
  public $audioEncoding;
  /** @var bool */
  public $enableWordInfo;
  /** @var string */
  public $model;
  /** @var string */
  public $modelVariant;
  /** @var string[] */
  public $phraseHints;
  /** @var int */
  public $sampleRateHertz;
  /** @var bool */
  public $singleUtterance;
  protected $collection_key = 'phraseHints';
  /** @param string */
  public function setAudioEncoding($audioEncoding)
  {
    $this->audioEncoding = $audioEncoding;
  }
  /** @return string */
  public function getAudioEncoding()
  {
    return $this->audioEncoding;
  }
  /** @param bool */
  public function setEnableWordInfo($enableWordInfo)
  {
    $this->enableWordInfo = $enableWordInfo;
  }
  /** @return bool */
  public function getEnableWordInfo()
  {
    return $this->enableWordInfo;
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
  public function setModelVariant($modelVariant)
  {
    $this->modelVariant = $modelVariant;
  }
  /** @return string */
  public function getModelVariant()
  {
    return $this->modelVariant;
  }
  /** @param string[] */
  public function setPhraseHints($phraseHints)
  {
    $this->phraseHints = $phraseHints;
  }
  /** @return string[] */
  public function getPhraseHints()
  {
    return $this->phraseHints;
  }
  /** @param int */
  public function setSampleRateHertz($sampleRateHertz)
  {
    $this->sampleRateHertz = $sampleRateHertz;
  }
  /** @return int */
  public function getSampleRateHertz()
  {
    return $this->sampleRateHertz;
  }
  /** @param bool */
  public function setSingleUtterance($singleUtterance)
  {
    $this->singleUtterance = $singleUtterance;
  }
  /** @return bool */
  public function getSingleUtterance()
  {
    return $this->singleUtterance;
  }
}

class GoogleCloudDialogflowCxV3Intent extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $isFallback;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3IntentParameter[] */
  public $parameters;
  /** @var int */
  public $priority;
  /** @var GoogleCloudDialogflowCxV3IntentTrainingPhrase[] */
  public $trainingPhrases;
  protected $collection_key = 'trainingPhrases';
  protected $parametersType = GoogleCloudDialogflowCxV3IntentParameter::class;
  protected $parametersDataType = 'array';
  protected $trainingPhrasesType = GoogleCloudDialogflowCxV3IntentTrainingPhrase::class;
  protected $trainingPhrasesDataType = 'array';
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
  /** @param bool */
  public function setIsFallback($isFallback)
  {
    $this->isFallback = $isFallback;
  }
  /** @return bool */
  public function getIsFallback()
  {
    return $this->isFallback;
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
  /** @param GoogleCloudDialogflowCxV3IntentParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudDialogflowCxV3IntentParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param int */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return int */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param GoogleCloudDialogflowCxV3IntentTrainingPhrase[] */
  public function setTrainingPhrases($trainingPhrases)
  {
    $this->trainingPhrases = $trainingPhrases;
  }
  /** @return GoogleCloudDialogflowCxV3IntentTrainingPhrase[] */
  public function getTrainingPhrases()
  {
    return $this->trainingPhrases;
  }
}

class GoogleCloudDialogflowCxV3IntentCoverage extends \Google\Collection
{
  /** @var float */
  public $coverageScore;
  /** @var GoogleCloudDialogflowCxV3IntentCoverageIntent[] */
  public $intents;
  protected $collection_key = 'intents';
  protected $intentsType = GoogleCloudDialogflowCxV3IntentCoverageIntent::class;
  protected $intentsDataType = 'array';
  /** @param float */
  public function setCoverageScore($coverageScore)
  {
    $this->coverageScore = $coverageScore;
  }
  /** @return float */
  public function getCoverageScore()
  {
    return $this->coverageScore;
  }
  /** @param GoogleCloudDialogflowCxV3IntentCoverageIntent[] */
  public function setIntents($intents)
  {
    $this->intents = $intents;
  }
  /** @return GoogleCloudDialogflowCxV3IntentCoverageIntent[] */
  public function getIntents()
  {
    return $this->intents;
  }
}

class GoogleCloudDialogflowCxV3IntentCoverageIntent extends \Google\Model
{
  /** @var bool */
  public $covered;
  /** @var string */
  public $intent;

  /** @param bool */
  public function setCovered($covered)
  {
    $this->covered = $covered;
  }
  /** @return bool */
  public function getCovered()
  {
    return $this->covered;
  }
  /** @param string */
  public function setIntent($intent)
  {
    $this->intent = $intent;
  }
  /** @return string */
  public function getIntent()
  {
    return $this->intent;
  }
}

class GoogleCloudDialogflowCxV3IntentInput extends \Google\Model
{
  /** @var string */
  public $intent;

  /** @param string */
  public function setIntent($intent)
  {
    $this->intent = $intent;
  }
  /** @return string */
  public function getIntent()
  {
    return $this->intent;
  }
}

class GoogleCloudDialogflowCxV3IntentParameter extends \Google\Model
{
  /** @var string */
  public $entityType;
  /** @var string */
  public $id;
  /** @var bool */
  public $isList;
  /** @var bool */
  public $redact;

  /** @param string */
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /** @return string */
  public function getEntityType()
  {
    return $this->entityType;
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
  public function setIsList($isList)
  {
    $this->isList = $isList;
  }
  /** @return bool */
  public function getIsList()
  {
    return $this->isList;
  }
  /** @param bool */
  public function setRedact($redact)
  {
    $this->redact = $redact;
  }
  /** @return bool */
  public function getRedact()
  {
    return $this->redact;
  }
}

class GoogleCloudDialogflowCxV3IntentTrainingPhrase extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var GoogleCloudDialogflowCxV3IntentTrainingPhrasePart[] */
  public $parts;
  /** @var int */
  public $repeatCount;
  protected $collection_key = 'parts';
  protected $partsType = GoogleCloudDialogflowCxV3IntentTrainingPhrasePart::class;
  protected $partsDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3IntentTrainingPhrasePart[] */
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  /** @return GoogleCloudDialogflowCxV3IntentTrainingPhrasePart[] */
  public function getParts()
  {
    return $this->parts;
  }
  /** @param int */
  public function setRepeatCount($repeatCount)
  {
    $this->repeatCount = $repeatCount;
  }
  /** @return int */
  public function getRepeatCount()
  {
    return $this->repeatCount;
  }
}

class GoogleCloudDialogflowCxV3IntentTrainingPhrasePart extends \Google\Model
{
  /** @var string */
  public $parameterId;
  /** @var string */
  public $text;

  /** @param string */
  public function setParameterId($parameterId)
  {
    $this->parameterId = $parameterId;
  }
  /** @return string */
  public function getParameterId()
  {
    return $this->parameterId;
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

class GoogleCloudDialogflowCxV3ListAgentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Agent[] */
  public $agents;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'agents';
  protected $agentsType = GoogleCloudDialogflowCxV3Agent::class;
  protected $agentsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Agent[] */
  public function setAgents($agents)
  {
    $this->agents = $agents;
  }
  /** @return GoogleCloudDialogflowCxV3Agent[] */
  public function getAgents()
  {
    return $this->agents;
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

class GoogleCloudDialogflowCxV3ListChangelogsResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Changelog[] */
  public $changelogs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'changelogs';
  protected $changelogsType = GoogleCloudDialogflowCxV3Changelog::class;
  protected $changelogsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Changelog[] */
  public function setChangelogs($changelogs)
  {
    $this->changelogs = $changelogs;
  }
  /** @return GoogleCloudDialogflowCxV3Changelog[] */
  public function getChangelogs()
  {
    return $this->changelogs;
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

class GoogleCloudDialogflowCxV3ListContinuousTestResultsResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3ContinuousTestResult[] */
  public $continuousTestResults;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'continuousTestResults';
  protected $continuousTestResultsType = GoogleCloudDialogflowCxV3ContinuousTestResult::class;
  protected $continuousTestResultsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3ContinuousTestResult[] */
  public function setContinuousTestResults($continuousTestResults)
  {
    $this->continuousTestResults = $continuousTestResults;
  }
  /** @return GoogleCloudDialogflowCxV3ContinuousTestResult[] */
  public function getContinuousTestResults()
  {
    return $this->continuousTestResults;
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

class GoogleCloudDialogflowCxV3ListDeploymentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Deployment[] */
  public $deployments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'deployments';
  protected $deploymentsType = GoogleCloudDialogflowCxV3Deployment::class;
  protected $deploymentsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Deployment[] */
  public function setDeployments($deployments)
  {
    $this->deployments = $deployments;
  }
  /** @return GoogleCloudDialogflowCxV3Deployment[] */
  public function getDeployments()
  {
    return $this->deployments;
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

class GoogleCloudDialogflowCxV3ListEntityTypesResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3EntityType[] */
  public $entityTypes;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'entityTypes';
  protected $entityTypesType = GoogleCloudDialogflowCxV3EntityType::class;
  protected $entityTypesDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3EntityType[] */
  public function setEntityTypes($entityTypes)
  {
    $this->entityTypes = $entityTypes;
  }
  /** @return GoogleCloudDialogflowCxV3EntityType[] */
  public function getEntityTypes()
  {
    return $this->entityTypes;
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

class GoogleCloudDialogflowCxV3ListEnvironmentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Environment[] */
  public $environments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'environments';
  protected $environmentsType = GoogleCloudDialogflowCxV3Environment::class;
  protected $environmentsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Environment[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return GoogleCloudDialogflowCxV3Environment[] */
  public function getEnvironments()
  {
    return $this->environments;
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

class GoogleCloudDialogflowCxV3ListExperimentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Experiment[] */
  public $experiments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'experiments';
  protected $experimentsType = GoogleCloudDialogflowCxV3Experiment::class;
  protected $experimentsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Experiment[] */
  public function setExperiments($experiments)
  {
    $this->experiments = $experiments;
  }
  /** @return GoogleCloudDialogflowCxV3Experiment[] */
  public function getExperiments()
  {
    return $this->experiments;
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

class GoogleCloudDialogflowCxV3ListFlowsResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Flow[] */
  public $flows;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'flows';
  protected $flowsType = GoogleCloudDialogflowCxV3Flow::class;
  protected $flowsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Flow[] */
  public function setFlows($flows)
  {
    $this->flows = $flows;
  }
  /** @return GoogleCloudDialogflowCxV3Flow[] */
  public function getFlows()
  {
    return $this->flows;
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

class GoogleCloudDialogflowCxV3ListIntentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Intent[] */
  public $intents;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'intents';
  protected $intentsType = GoogleCloudDialogflowCxV3Intent::class;
  protected $intentsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Intent[] */
  public function setIntents($intents)
  {
    $this->intents = $intents;
  }
  /** @return GoogleCloudDialogflowCxV3Intent[] */
  public function getIntents()
  {
    return $this->intents;
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

class GoogleCloudDialogflowCxV3ListPagesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDialogflowCxV3Page[] */
  public $pages;
  protected $collection_key = 'pages';
  protected $pagesType = GoogleCloudDialogflowCxV3Page::class;
  protected $pagesDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3Page[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return GoogleCloudDialogflowCxV3Page[] */
  public function getPages()
  {
    return $this->pages;
  }
}

class GoogleCloudDialogflowCxV3ListSecuritySettingsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDialogflowCxV3SecuritySettings[] */
  public $securitySettings;
  protected $collection_key = 'securitySettings';
  protected $securitySettingsType = GoogleCloudDialogflowCxV3SecuritySettings::class;
  protected $securitySettingsDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3SecuritySettings[] */
  public function setSecuritySettings($securitySettings)
  {
    $this->securitySettings = $securitySettings;
  }
  /** @return GoogleCloudDialogflowCxV3SecuritySettings[] */
  public function getSecuritySettings()
  {
    return $this->securitySettings;
  }
}

class GoogleCloudDialogflowCxV3ListSessionEntityTypesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDialogflowCxV3SessionEntityType[] */
  public $sessionEntityTypes;
  protected $collection_key = 'sessionEntityTypes';
  protected $sessionEntityTypesType = GoogleCloudDialogflowCxV3SessionEntityType::class;
  protected $sessionEntityTypesDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3SessionEntityType[] */
  public function setSessionEntityTypes($sessionEntityTypes)
  {
    $this->sessionEntityTypes = $sessionEntityTypes;
  }
  /** @return GoogleCloudDialogflowCxV3SessionEntityType[] */
  public function getSessionEntityTypes()
  {
    return $this->sessionEntityTypes;
  }
}

class GoogleCloudDialogflowCxV3ListTestCaseResultsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDialogflowCxV3TestCaseResult[] */
  public $testCaseResults;
  protected $collection_key = 'testCaseResults';
  protected $testCaseResultsType = GoogleCloudDialogflowCxV3TestCaseResult::class;
  protected $testCaseResultsDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3TestCaseResult[] */
  public function setTestCaseResults($testCaseResults)
  {
    $this->testCaseResults = $testCaseResults;
  }
  /** @return GoogleCloudDialogflowCxV3TestCaseResult[] */
  public function getTestCaseResults()
  {
    return $this->testCaseResults;
  }
}

class GoogleCloudDialogflowCxV3ListTestCasesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDialogflowCxV3TestCase[] */
  public $testCases;
  protected $collection_key = 'testCases';
  protected $testCasesType = GoogleCloudDialogflowCxV3TestCase::class;
  protected $testCasesDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3TestCase[] */
  public function setTestCases($testCases)
  {
    $this->testCases = $testCases;
  }
  /** @return GoogleCloudDialogflowCxV3TestCase[] */
  public function getTestCases()
  {
    return $this->testCases;
  }
}

class GoogleCloudDialogflowCxV3ListTransitionRouteGroupsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDialogflowCxV3TransitionRouteGroup[] */
  public $transitionRouteGroups;
  protected $collection_key = 'transitionRouteGroups';
  protected $transitionRouteGroupsType = GoogleCloudDialogflowCxV3TransitionRouteGroup::class;
  protected $transitionRouteGroupsDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3TransitionRouteGroup[] */
  public function setTransitionRouteGroups($transitionRouteGroups)
  {
    $this->transitionRouteGroups = $transitionRouteGroups;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionRouteGroup[] */
  public function getTransitionRouteGroups()
  {
    return $this->transitionRouteGroups;
  }
}

class GoogleCloudDialogflowCxV3ListVersionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDialogflowCxV3Version[] */
  public $versions;
  protected $collection_key = 'versions';
  protected $versionsType = GoogleCloudDialogflowCxV3Version::class;
  protected $versionsDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3Version[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return GoogleCloudDialogflowCxV3Version[] */
  public function getVersions()
  {
    return $this->versions;
  }
}

class GoogleCloudDialogflowCxV3ListWebhooksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudDialogflowCxV3Webhook[] */
  public $webhooks;
  protected $collection_key = 'webhooks';
  protected $webhooksType = GoogleCloudDialogflowCxV3Webhook::class;
  protected $webhooksDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3Webhook[] */
  public function setWebhooks($webhooks)
  {
    $this->webhooks = $webhooks;
  }
  /** @return GoogleCloudDialogflowCxV3Webhook[] */
  public function getWebhooks()
  {
    return $this->webhooks;
  }
}

class GoogleCloudDialogflowCxV3LoadVersionRequest extends \Google\Model
{
  /** @var bool */
  public $allowOverrideAgentResources;

  /** @param bool */
  public function setAllowOverrideAgentResources($allowOverrideAgentResources)
  {
    $this->allowOverrideAgentResources = $allowOverrideAgentResources;
  }
  /** @return bool */
  public function getAllowOverrideAgentResources()
  {
    return $this->allowOverrideAgentResources;
  }
}

class GoogleCloudDialogflowCxV3LookupEnvironmentHistoryResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Environment[] */
  public $environments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'environments';
  protected $environmentsType = GoogleCloudDialogflowCxV3Environment::class;
  protected $environmentsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Environment[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return GoogleCloudDialogflowCxV3Environment[] */
  public function getEnvironments()
  {
    return $this->environments;
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

class GoogleCloudDialogflowCxV3Match extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $event;
  /** @var GoogleCloudDialogflowCxV3Intent */
  public $intent;
  /** @var string */
  public $matchType;
  /** @var array[] */
  public $parameters;
  /** @var string */
  public $resolvedInput;
  protected $intentType = GoogleCloudDialogflowCxV3Intent::class;
  protected $intentDataType = '';
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  /** @param GoogleCloudDialogflowCxV3Intent */
  public function setIntent(GoogleCloudDialogflowCxV3Intent $intent)
  {
    $this->intent = $intent;
  }
  /** @return GoogleCloudDialogflowCxV3Intent */
  public function getIntent()
  {
    return $this->intent;
  }
  /** @param string */
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /** @return string */
  public function getMatchType()
  {
    return $this->matchType;
  }
  /** @param array[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setResolvedInput($resolvedInput)
  {
    $this->resolvedInput = $resolvedInput;
  }
  /** @return string */
  public function getResolvedInput()
  {
    return $this->resolvedInput;
  }
}

class GoogleCloudDialogflowCxV3MatchIntentRequest extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3QueryInput */
  public $queryInput;
  /** @var GoogleCloudDialogflowCxV3QueryParameters */
  public $queryParams;
  protected $queryInputType = GoogleCloudDialogflowCxV3QueryInput::class;
  protected $queryInputDataType = '';
  protected $queryParamsType = GoogleCloudDialogflowCxV3QueryParameters::class;
  protected $queryParamsDataType = '';
  /** @param GoogleCloudDialogflowCxV3QueryInput */
  public function setQueryInput(GoogleCloudDialogflowCxV3QueryInput $queryInput)
  {
    $this->queryInput = $queryInput;
  }
  /** @return GoogleCloudDialogflowCxV3QueryInput */
  public function getQueryInput()
  {
    return $this->queryInput;
  }
  /** @param GoogleCloudDialogflowCxV3QueryParameters */
  public function setQueryParams(GoogleCloudDialogflowCxV3QueryParameters $queryParams)
  {
    $this->queryParams = $queryParams;
  }
  /** @return GoogleCloudDialogflowCxV3QueryParameters */
  public function getQueryParams()
  {
    return $this->queryParams;
  }
}

class GoogleCloudDialogflowCxV3MatchIntentResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Page */
  public $currentPage;
  /** @var GoogleCloudDialogflowCxV3Match[] */
  public $matches;
  /** @var string */
  public $text;
  /** @var string */
  public $transcript;
  /** @var string */
  public $triggerEvent;
  /** @var string */
  public $triggerIntent;
  protected $collection_key = 'matches';
  protected $currentPageType = GoogleCloudDialogflowCxV3Page::class;
  protected $currentPageDataType = '';
  protected $matchesType = GoogleCloudDialogflowCxV3Match::class;
  protected $matchesDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Page */
  public function setCurrentPage(GoogleCloudDialogflowCxV3Page $currentPage)
  {
    $this->currentPage = $currentPage;
  }
  /** @return GoogleCloudDialogflowCxV3Page */
  public function getCurrentPage()
  {
    return $this->currentPage;
  }
  /** @param GoogleCloudDialogflowCxV3Match[] */
  public function setMatches($matches)
  {
    $this->matches = $matches;
  }
  /** @return GoogleCloudDialogflowCxV3Match[] */
  public function getMatches()
  {
    return $this->matches;
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
  /** @param string */
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return string */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param string */
  public function setTriggerEvent($triggerEvent)
  {
    $this->triggerEvent = $triggerEvent;
  }
  /** @return string */
  public function getTriggerEvent()
  {
    return $this->triggerEvent;
  }
  /** @param string */
  public function setTriggerIntent($triggerIntent)
  {
    $this->triggerIntent = $triggerIntent;
  }
  /** @return string */
  public function getTriggerIntent()
  {
    return $this->triggerIntent;
  }
}

class GoogleCloudDialogflowCxV3NluSettings extends \Google\Model
{
  /** @var float */
  public $classificationThreshold;
  /** @var string */
  public $modelTrainingMode;
  /** @var string */
  public $modelType;

  /** @param float */
  public function setClassificationThreshold($classificationThreshold)
  {
    $this->classificationThreshold = $classificationThreshold;
  }
  /** @return float */
  public function getClassificationThreshold()
  {
    return $this->classificationThreshold;
  }
  /** @param string */
  public function setModelTrainingMode($modelTrainingMode)
  {
    $this->modelTrainingMode = $modelTrainingMode;
  }
  /** @return string */
  public function getModelTrainingMode()
  {
    return $this->modelTrainingMode;
  }
  /** @param string */
  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }
  /** @return string */
  public function getModelType()
  {
    return $this->modelType;
  }
}

class GoogleCloudDialogflowCxV3OutputAudioConfig extends \Google\Model
{
  /** @var string */
  public $audioEncoding;
  /** @var int */
  public $sampleRateHertz;
  /** @var GoogleCloudDialogflowCxV3SynthesizeSpeechConfig */
  public $synthesizeSpeechConfig;
  protected $synthesizeSpeechConfigType = GoogleCloudDialogflowCxV3SynthesizeSpeechConfig::class;
  protected $synthesizeSpeechConfigDataType = '';
  /** @param string */
  public function setAudioEncoding($audioEncoding)
  {
    $this->audioEncoding = $audioEncoding;
  }
  /** @return string */
  public function getAudioEncoding()
  {
    return $this->audioEncoding;
  }
  /** @param int */
  public function setSampleRateHertz($sampleRateHertz)
  {
    $this->sampleRateHertz = $sampleRateHertz;
  }
  /** @return int */
  public function getSampleRateHertz()
  {
    return $this->sampleRateHertz;
  }
  /** @param GoogleCloudDialogflowCxV3SynthesizeSpeechConfig */
  public function setSynthesizeSpeechConfig(GoogleCloudDialogflowCxV3SynthesizeSpeechConfig $synthesizeSpeechConfig)
  {
    $this->synthesizeSpeechConfig = $synthesizeSpeechConfig;
  }
  /** @return GoogleCloudDialogflowCxV3SynthesizeSpeechConfig */
  public function getSynthesizeSpeechConfig()
  {
    return $this->synthesizeSpeechConfig;
  }
}

class GoogleCloudDialogflowCxV3Page extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDialogflowCxV3Fulfillment */
  public $entryFulfillment;
  /** @var GoogleCloudDialogflowCxV3EventHandler[] */
  public $eventHandlers;
  /** @var GoogleCloudDialogflowCxV3Form */
  public $form;
  /** @var string */
  public $name;
  /** @var string[] */
  public $transitionRouteGroups;
  /** @var GoogleCloudDialogflowCxV3TransitionRoute[] */
  public $transitionRoutes;
  protected $collection_key = 'transitionRoutes';
  protected $entryFulfillmentType = GoogleCloudDialogflowCxV3Fulfillment::class;
  protected $entryFulfillmentDataType = '';
  protected $eventHandlersType = GoogleCloudDialogflowCxV3EventHandler::class;
  protected $eventHandlersDataType = 'array';
  protected $formType = GoogleCloudDialogflowCxV3Form::class;
  protected $formDataType = '';
  protected $transitionRoutesType = GoogleCloudDialogflowCxV3TransitionRoute::class;
  protected $transitionRoutesDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3Fulfillment */
  public function setEntryFulfillment(GoogleCloudDialogflowCxV3Fulfillment $entryFulfillment)
  {
    $this->entryFulfillment = $entryFulfillment;
  }
  /** @return GoogleCloudDialogflowCxV3Fulfillment */
  public function getEntryFulfillment()
  {
    return $this->entryFulfillment;
  }
  /** @param GoogleCloudDialogflowCxV3EventHandler[] */
  public function setEventHandlers($eventHandlers)
  {
    $this->eventHandlers = $eventHandlers;
  }
  /** @return GoogleCloudDialogflowCxV3EventHandler[] */
  public function getEventHandlers()
  {
    return $this->eventHandlers;
  }
  /** @param GoogleCloudDialogflowCxV3Form */
  public function setForm(GoogleCloudDialogflowCxV3Form $form)
  {
    $this->form = $form;
  }
  /** @return GoogleCloudDialogflowCxV3Form */
  public function getForm()
  {
    return $this->form;
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
  public function setTransitionRouteGroups($transitionRouteGroups)
  {
    $this->transitionRouteGroups = $transitionRouteGroups;
  }
  /** @return string[] */
  public function getTransitionRouteGroups()
  {
    return $this->transitionRouteGroups;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionRoute[] */
  public function setTransitionRoutes($transitionRoutes)
  {
    $this->transitionRoutes = $transitionRoutes;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionRoute[] */
  public function getTransitionRoutes()
  {
    return $this->transitionRoutes;
  }
}

class GoogleCloudDialogflowCxV3PageInfo extends \Google\Model
{
  /** @var string */
  public $currentPage;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDialogflowCxV3PageInfoFormInfo */
  public $formInfo;
  protected $formInfoType = GoogleCloudDialogflowCxV3PageInfoFormInfo::class;
  protected $formInfoDataType = '';
  /** @param string */
  public function setCurrentPage($currentPage)
  {
    $this->currentPage = $currentPage;
  }
  /** @return string */
  public function getCurrentPage()
  {
    return $this->currentPage;
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
  /** @param GoogleCloudDialogflowCxV3PageInfoFormInfo */
  public function setFormInfo(GoogleCloudDialogflowCxV3PageInfoFormInfo $formInfo)
  {
    $this->formInfo = $formInfo;
  }
  /** @return GoogleCloudDialogflowCxV3PageInfoFormInfo */
  public function getFormInfo()
  {
    return $this->formInfo;
  }
}

class GoogleCloudDialogflowCxV3PageInfoFormInfo extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3PageInfoFormInfoParameterInfo[] */
  public $parameterInfo;
  protected $collection_key = 'parameterInfo';
  protected $parameterInfoType = GoogleCloudDialogflowCxV3PageInfoFormInfoParameterInfo::class;
  protected $parameterInfoDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3PageInfoFormInfoParameterInfo[] */
  public function setParameterInfo($parameterInfo)
  {
    $this->parameterInfo = $parameterInfo;
  }
  /** @return GoogleCloudDialogflowCxV3PageInfoFormInfoParameterInfo[] */
  public function getParameterInfo()
  {
    return $this->parameterInfo;
  }
}

class GoogleCloudDialogflowCxV3PageInfoFormInfoParameterInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $justCollected;
  /** @var bool */
  public $required;
  /** @var string */
  public $state;
  /** @var array */
  public $value;

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
  public function setJustCollected($justCollected)
  {
    $this->justCollected = $justCollected;
  }
  /** @return bool */
  public function getJustCollected()
  {
    return $this->justCollected;
  }
  /** @param bool */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /** @return bool */
  public function getRequired()
  {
    return $this->required;
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
  /** @param array */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudDialogflowCxV3QueryInput extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3AudioInput */
  public $audio;
  /** @var GoogleCloudDialogflowCxV3DtmfInput */
  public $dtmf;
  /** @var GoogleCloudDialogflowCxV3EventInput */
  public $event;
  /** @var GoogleCloudDialogflowCxV3IntentInput */
  public $intent;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudDialogflowCxV3TextInput */
  public $text;
  protected $audioType = GoogleCloudDialogflowCxV3AudioInput::class;
  protected $audioDataType = '';
  protected $dtmfType = GoogleCloudDialogflowCxV3DtmfInput::class;
  protected $dtmfDataType = '';
  protected $eventType = GoogleCloudDialogflowCxV3EventInput::class;
  protected $eventDataType = '';
  protected $intentType = GoogleCloudDialogflowCxV3IntentInput::class;
  protected $intentDataType = '';
  protected $textType = GoogleCloudDialogflowCxV3TextInput::class;
  protected $textDataType = '';
  /** @param GoogleCloudDialogflowCxV3AudioInput */
  public function setAudio(GoogleCloudDialogflowCxV3AudioInput $audio)
  {
    $this->audio = $audio;
  }
  /** @return GoogleCloudDialogflowCxV3AudioInput */
  public function getAudio()
  {
    return $this->audio;
  }
  /** @param GoogleCloudDialogflowCxV3DtmfInput */
  public function setDtmf(GoogleCloudDialogflowCxV3DtmfInput $dtmf)
  {
    $this->dtmf = $dtmf;
  }
  /** @return GoogleCloudDialogflowCxV3DtmfInput */
  public function getDtmf()
  {
    return $this->dtmf;
  }
  /** @param GoogleCloudDialogflowCxV3EventInput */
  public function setEvent(GoogleCloudDialogflowCxV3EventInput $event)
  {
    $this->event = $event;
  }
  /** @return GoogleCloudDialogflowCxV3EventInput */
  public function getEvent()
  {
    return $this->event;
  }
  /** @param GoogleCloudDialogflowCxV3IntentInput */
  public function setIntent(GoogleCloudDialogflowCxV3IntentInput $intent)
  {
    $this->intent = $intent;
  }
  /** @return GoogleCloudDialogflowCxV3IntentInput */
  public function getIntent()
  {
    return $this->intent;
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
  /** @param GoogleCloudDialogflowCxV3TextInput */
  public function setText(GoogleCloudDialogflowCxV3TextInput $text)
  {
    $this->text = $text;
  }
  /** @return GoogleCloudDialogflowCxV3TextInput */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDialogflowCxV3QueryParameters extends \Google\Collection
{
  /** @var bool */
  public $analyzeQueryTextSentiment;
  /** @var string */
  public $currentPage;
  /** @var bool */
  public $disableWebhook;
  /** @var string[] */
  public $flowVersions;
  /** @var GoogleTypeLatLng */
  public $geoLocation;
  /** @var array[] */
  public $parameters;
  /** @var array[] */
  public $payload;
  /** @var GoogleCloudDialogflowCxV3SessionEntityType[] */
  public $sessionEntityTypes;
  /** @var string */
  public $timeZone;
  /** @var string[] */
  public $webhookHeaders;
  protected $collection_key = 'sessionEntityTypes';
  protected $geoLocationType = GoogleTypeLatLng::class;
  protected $geoLocationDataType = '';
  protected $sessionEntityTypesType = GoogleCloudDialogflowCxV3SessionEntityType::class;
  protected $sessionEntityTypesDataType = 'array';
  /** @param bool */
  public function setAnalyzeQueryTextSentiment($analyzeQueryTextSentiment)
  {
    $this->analyzeQueryTextSentiment = $analyzeQueryTextSentiment;
  }
  /** @return bool */
  public function getAnalyzeQueryTextSentiment()
  {
    return $this->analyzeQueryTextSentiment;
  }
  /** @param string */
  public function setCurrentPage($currentPage)
  {
    $this->currentPage = $currentPage;
  }
  /** @return string */
  public function getCurrentPage()
  {
    return $this->currentPage;
  }
  /** @param bool */
  public function setDisableWebhook($disableWebhook)
  {
    $this->disableWebhook = $disableWebhook;
  }
  /** @return bool */
  public function getDisableWebhook()
  {
    return $this->disableWebhook;
  }
  /** @param string[] */
  public function setFlowVersions($flowVersions)
  {
    $this->flowVersions = $flowVersions;
  }
  /** @return string[] */
  public function getFlowVersions()
  {
    return $this->flowVersions;
  }
  /** @param GoogleTypeLatLng */
  public function setGeoLocation(GoogleTypeLatLng $geoLocation)
  {
    $this->geoLocation = $geoLocation;
  }
  /** @return GoogleTypeLatLng */
  public function getGeoLocation()
  {
    return $this->geoLocation;
  }
  /** @param array[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param GoogleCloudDialogflowCxV3SessionEntityType[] */
  public function setSessionEntityTypes($sessionEntityTypes)
  {
    $this->sessionEntityTypes = $sessionEntityTypes;
  }
  /** @return GoogleCloudDialogflowCxV3SessionEntityType[] */
  public function getSessionEntityTypes()
  {
    return $this->sessionEntityTypes;
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
  /** @param string[] */
  public function setWebhookHeaders($webhookHeaders)
  {
    $this->webhookHeaders = $webhookHeaders;
  }
  /** @return string[] */
  public function getWebhookHeaders()
  {
    return $this->webhookHeaders;
  }
}

class GoogleCloudDialogflowCxV3QueryResult extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3Page */
  public $currentPage;
  /** @var array[] */
  public $diagnosticInfo;
  /** @var GoogleCloudDialogflowCxV3DtmfInput */
  public $dtmf;
  /** @var GoogleCloudDialogflowCxV3Intent */
  public $intent;
  /** @var float */
  public $intentDetectionConfidence;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudDialogflowCxV3Match */
  public $match;
  /** @var array[] */
  public $parameters;
  /** @var GoogleCloudDialogflowCxV3ResponseMessage[] */
  public $responseMessages;
  /** @var GoogleCloudDialogflowCxV3SentimentAnalysisResult */
  public $sentimentAnalysisResult;
  /** @var string */
  public $text;
  /** @var string */
  public $transcript;
  /** @var string */
  public $triggerEvent;
  /** @var string */
  public $triggerIntent;
  /** @var array[] */
  public $webhookPayloads;
  /** @var GoogleRpcStatus[] */
  public $webhookStatuses;
  protected $collection_key = 'webhookStatuses';
  protected $currentPageType = GoogleCloudDialogflowCxV3Page::class;
  protected $currentPageDataType = '';
  protected $dtmfType = GoogleCloudDialogflowCxV3DtmfInput::class;
  protected $dtmfDataType = '';
  protected $intentType = GoogleCloudDialogflowCxV3Intent::class;
  protected $intentDataType = '';
  protected $matchType = GoogleCloudDialogflowCxV3Match::class;
  protected $matchDataType = '';
  protected $responseMessagesType = GoogleCloudDialogflowCxV3ResponseMessage::class;
  protected $responseMessagesDataType = 'array';
  protected $sentimentAnalysisResultType = GoogleCloudDialogflowCxV3SentimentAnalysisResult::class;
  protected $sentimentAnalysisResultDataType = '';
  protected $webhookStatusesType = GoogleRpcStatus::class;
  protected $webhookStatusesDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3Page */
  public function setCurrentPage(GoogleCloudDialogflowCxV3Page $currentPage)
  {
    $this->currentPage = $currentPage;
  }
  /** @return GoogleCloudDialogflowCxV3Page */
  public function getCurrentPage()
  {
    return $this->currentPage;
  }
  /** @param array[] */
  public function setDiagnosticInfo($diagnosticInfo)
  {
    $this->diagnosticInfo = $diagnosticInfo;
  }
  /** @return array[] */
  public function getDiagnosticInfo()
  {
    return $this->diagnosticInfo;
  }
  /** @param GoogleCloudDialogflowCxV3DtmfInput */
  public function setDtmf(GoogleCloudDialogflowCxV3DtmfInput $dtmf)
  {
    $this->dtmf = $dtmf;
  }
  /** @return GoogleCloudDialogflowCxV3DtmfInput */
  public function getDtmf()
  {
    return $this->dtmf;
  }
  /** @param GoogleCloudDialogflowCxV3Intent */
  public function setIntent(GoogleCloudDialogflowCxV3Intent $intent)
  {
    $this->intent = $intent;
  }
  /** @return GoogleCloudDialogflowCxV3Intent */
  public function getIntent()
  {
    return $this->intent;
  }
  /** @param float */
  public function setIntentDetectionConfidence($intentDetectionConfidence)
  {
    $this->intentDetectionConfidence = $intentDetectionConfidence;
  }
  /** @return float */
  public function getIntentDetectionConfidence()
  {
    return $this->intentDetectionConfidence;
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
  /** @param GoogleCloudDialogflowCxV3Match */
  public function setMatch(GoogleCloudDialogflowCxV3Match $match)
  {
    $this->match = $match;
  }
  /** @return GoogleCloudDialogflowCxV3Match */
  public function getMatch()
  {
    return $this->match;
  }
  /** @param array[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessage[] */
  public function setResponseMessages($responseMessages)
  {
    $this->responseMessages = $responseMessages;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessage[] */
  public function getResponseMessages()
  {
    return $this->responseMessages;
  }
  /** @param GoogleCloudDialogflowCxV3SentimentAnalysisResult */
  public function setSentimentAnalysisResult(GoogleCloudDialogflowCxV3SentimentAnalysisResult $sentimentAnalysisResult)
  {
    $this->sentimentAnalysisResult = $sentimentAnalysisResult;
  }
  /** @return GoogleCloudDialogflowCxV3SentimentAnalysisResult */
  public function getSentimentAnalysisResult()
  {
    return $this->sentimentAnalysisResult;
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
  /** @param string */
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return string */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param string */
  public function setTriggerEvent($triggerEvent)
  {
    $this->triggerEvent = $triggerEvent;
  }
  /** @return string */
  public function getTriggerEvent()
  {
    return $this->triggerEvent;
  }
  /** @param string */
  public function setTriggerIntent($triggerIntent)
  {
    $this->triggerIntent = $triggerIntent;
  }
  /** @return string */
  public function getTriggerIntent()
  {
    return $this->triggerIntent;
  }
  /** @param array[] */
  public function setWebhookPayloads($webhookPayloads)
  {
    $this->webhookPayloads = $webhookPayloads;
  }
  /** @return array[] */
  public function getWebhookPayloads()
  {
    return $this->webhookPayloads;
  }
  /** @param GoogleRpcStatus[] */
  public function setWebhookStatuses($webhookStatuses)
  {
    $this->webhookStatuses = $webhookStatuses;
  }
  /** @return GoogleRpcStatus[] */
  public function getWebhookStatuses()
  {
    return $this->webhookStatuses;
  }
}

class GoogleCloudDialogflowCxV3ReloadDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowCxV3ResourceName extends \Google\Model
{
  /** @var string */
  public $displayName;
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

class GoogleCloudDialogflowCxV3ResponseMessage extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3ResponseMessageConversationSuccess */
  public $conversationSuccess;
  /** @var GoogleCloudDialogflowCxV3ResponseMessageEndInteraction */
  public $endInteraction;
  /** @var GoogleCloudDialogflowCxV3ResponseMessageLiveAgentHandoff */
  public $liveAgentHandoff;
  /** @var GoogleCloudDialogflowCxV3ResponseMessageMixedAudio */
  public $mixedAudio;
  /** @var GoogleCloudDialogflowCxV3ResponseMessageOutputAudioText */
  public $outputAudioText;
  /** @var array[] */
  public $payload;
  /** @var GoogleCloudDialogflowCxV3ResponseMessagePlayAudio */
  public $playAudio;
  /** @var GoogleCloudDialogflowCxV3ResponseMessageTelephonyTransferCall */
  public $telephonyTransferCall;
  /** @var GoogleCloudDialogflowCxV3ResponseMessageText */
  public $text;
  protected $conversationSuccessType = GoogleCloudDialogflowCxV3ResponseMessageConversationSuccess::class;
  protected $conversationSuccessDataType = '';
  protected $endInteractionType = GoogleCloudDialogflowCxV3ResponseMessageEndInteraction::class;
  protected $endInteractionDataType = '';
  protected $liveAgentHandoffType = GoogleCloudDialogflowCxV3ResponseMessageLiveAgentHandoff::class;
  protected $liveAgentHandoffDataType = '';
  protected $mixedAudioType = GoogleCloudDialogflowCxV3ResponseMessageMixedAudio::class;
  protected $mixedAudioDataType = '';
  protected $outputAudioTextType = GoogleCloudDialogflowCxV3ResponseMessageOutputAudioText::class;
  protected $outputAudioTextDataType = '';
  protected $playAudioType = GoogleCloudDialogflowCxV3ResponseMessagePlayAudio::class;
  protected $playAudioDataType = '';
  protected $telephonyTransferCallType = GoogleCloudDialogflowCxV3ResponseMessageTelephonyTransferCall::class;
  protected $telephonyTransferCallDataType = '';
  protected $textType = GoogleCloudDialogflowCxV3ResponseMessageText::class;
  protected $textDataType = '';
  /** @param GoogleCloudDialogflowCxV3ResponseMessageConversationSuccess */
  public function setConversationSuccess(GoogleCloudDialogflowCxV3ResponseMessageConversationSuccess $conversationSuccess)
  {
    $this->conversationSuccess = $conversationSuccess;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessageConversationSuccess */
  public function getConversationSuccess()
  {
    return $this->conversationSuccess;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessageEndInteraction */
  public function setEndInteraction(GoogleCloudDialogflowCxV3ResponseMessageEndInteraction $endInteraction)
  {
    $this->endInteraction = $endInteraction;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessageEndInteraction */
  public function getEndInteraction()
  {
    return $this->endInteraction;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessageLiveAgentHandoff */
  public function setLiveAgentHandoff(GoogleCloudDialogflowCxV3ResponseMessageLiveAgentHandoff $liveAgentHandoff)
  {
    $this->liveAgentHandoff = $liveAgentHandoff;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessageLiveAgentHandoff */
  public function getLiveAgentHandoff()
  {
    return $this->liveAgentHandoff;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessageMixedAudio */
  public function setMixedAudio(GoogleCloudDialogflowCxV3ResponseMessageMixedAudio $mixedAudio)
  {
    $this->mixedAudio = $mixedAudio;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessageMixedAudio */
  public function getMixedAudio()
  {
    return $this->mixedAudio;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessageOutputAudioText */
  public function setOutputAudioText(GoogleCloudDialogflowCxV3ResponseMessageOutputAudioText $outputAudioText)
  {
    $this->outputAudioText = $outputAudioText;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessageOutputAudioText */
  public function getOutputAudioText()
  {
    return $this->outputAudioText;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessagePlayAudio */
  public function setPlayAudio(GoogleCloudDialogflowCxV3ResponseMessagePlayAudio $playAudio)
  {
    $this->playAudio = $playAudio;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessagePlayAudio */
  public function getPlayAudio()
  {
    return $this->playAudio;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessageTelephonyTransferCall */
  public function setTelephonyTransferCall(GoogleCloudDialogflowCxV3ResponseMessageTelephonyTransferCall $telephonyTransferCall)
  {
    $this->telephonyTransferCall = $telephonyTransferCall;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessageTelephonyTransferCall */
  public function getTelephonyTransferCall()
  {
    return $this->telephonyTransferCall;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessageText */
  public function setText(GoogleCloudDialogflowCxV3ResponseMessageText $text)
  {
    $this->text = $text;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessageText */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDialogflowCxV3ResponseMessageConversationSuccess extends \Google\Model
{
  /** @var array[] */
  public $metadata;

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
}

class GoogleCloudDialogflowCxV3ResponseMessageEndInteraction extends \Google\Model
{
}

class GoogleCloudDialogflowCxV3ResponseMessageLiveAgentHandoff extends \Google\Model
{
  /** @var array[] */
  public $metadata;

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
}

class GoogleCloudDialogflowCxV3ResponseMessageMixedAudio extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3ResponseMessageMixedAudioSegment[] */
  public $segments;
  protected $collection_key = 'segments';
  protected $segmentsType = GoogleCloudDialogflowCxV3ResponseMessageMixedAudioSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3ResponseMessageMixedAudioSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessageMixedAudioSegment[] */
  public function getSegments()
  {
    return $this->segments;
  }
}

class GoogleCloudDialogflowCxV3ResponseMessageMixedAudioSegment extends \Google\Model
{
  /** @var bool */
  public $allowPlaybackInterruption;
  /** @var string */
  public $audio;
  /** @var string */
  public $uri;

  /** @param bool */
  public function setAllowPlaybackInterruption($allowPlaybackInterruption)
  {
    $this->allowPlaybackInterruption = $allowPlaybackInterruption;
  }
  /** @return bool */
  public function getAllowPlaybackInterruption()
  {
    return $this->allowPlaybackInterruption;
  }
  /** @param string */
  public function setAudio($audio)
  {
    $this->audio = $audio;
  }
  /** @return string */
  public function getAudio()
  {
    return $this->audio;
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

class GoogleCloudDialogflowCxV3ResponseMessageOutputAudioText extends \Google\Model
{
  /** @var bool */
  public $allowPlaybackInterruption;
  /** @var string */
  public $ssml;
  /** @var string */
  public $text;

  /** @param bool */
  public function setAllowPlaybackInterruption($allowPlaybackInterruption)
  {
    $this->allowPlaybackInterruption = $allowPlaybackInterruption;
  }
  /** @return bool */
  public function getAllowPlaybackInterruption()
  {
    return $this->allowPlaybackInterruption;
  }
  /** @param string */
  public function setSsml($ssml)
  {
    $this->ssml = $ssml;
  }
  /** @return string */
  public function getSsml()
  {
    return $this->ssml;
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

class GoogleCloudDialogflowCxV3ResponseMessagePlayAudio extends \Google\Model
{
  /** @var bool */
  public $allowPlaybackInterruption;
  /** @var string */
  public $audioUri;

  /** @param bool */
  public function setAllowPlaybackInterruption($allowPlaybackInterruption)
  {
    $this->allowPlaybackInterruption = $allowPlaybackInterruption;
  }
  /** @return bool */
  public function getAllowPlaybackInterruption()
  {
    return $this->allowPlaybackInterruption;
  }
  /** @param string */
  public function setAudioUri($audioUri)
  {
    $this->audioUri = $audioUri;
  }
  /** @return string */
  public function getAudioUri()
  {
    return $this->audioUri;
  }
}

class GoogleCloudDialogflowCxV3ResponseMessageTelephonyTransferCall extends \Google\Model
{
  /** @var string */
  public $phoneNumber;

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

class GoogleCloudDialogflowCxV3ResponseMessageText extends \Google\Collection
{
  /** @var bool */
  public $allowPlaybackInterruption;
  /** @var string[] */
  public $text;
  protected $collection_key = 'text';
  /** @param bool */
  public function setAllowPlaybackInterruption($allowPlaybackInterruption)
  {
    $this->allowPlaybackInterruption = $allowPlaybackInterruption;
  }
  /** @return bool */
  public function getAllowPlaybackInterruption()
  {
    return $this->allowPlaybackInterruption;
  }
  /** @param string[] */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string[] */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDialogflowCxV3RestoreAgentRequest extends \Google\Model
{
  /** @var string */
  public $agentContent;
  /** @var string */
  public $agentUri;
  /** @var string */
  public $restoreOption;

  /** @param string */
  public function setAgentContent($agentContent)
  {
    $this->agentContent = $agentContent;
  }
  /** @return string */
  public function getAgentContent()
  {
    return $this->agentContent;
  }
  /** @param string */
  public function setAgentUri($agentUri)
  {
    $this->agentUri = $agentUri;
  }
  /** @return string */
  public function getAgentUri()
  {
    return $this->agentUri;
  }
  /** @param string */
  public function setRestoreOption($restoreOption)
  {
    $this->restoreOption = $restoreOption;
  }
  /** @return string */
  public function getRestoreOption()
  {
    return $this->restoreOption;
  }
}

class GoogleCloudDialogflowCxV3RolloutConfig extends \Google\Collection
{
  /** @var string */
  public $failureCondition;
  /** @var string */
  public $rolloutCondition;
  /** @var GoogleCloudDialogflowCxV3RolloutConfigRolloutStep[] */
  public $rolloutSteps;
  protected $collection_key = 'rolloutSteps';
  protected $rolloutStepsType = GoogleCloudDialogflowCxV3RolloutConfigRolloutStep::class;
  protected $rolloutStepsDataType = 'array';
  /** @param string */
  public function setFailureCondition($failureCondition)
  {
    $this->failureCondition = $failureCondition;
  }
  /** @return string */
  public function getFailureCondition()
  {
    return $this->failureCondition;
  }
  /** @param string */
  public function setRolloutCondition($rolloutCondition)
  {
    $this->rolloutCondition = $rolloutCondition;
  }
  /** @return string */
  public function getRolloutCondition()
  {
    return $this->rolloutCondition;
  }
  /** @param GoogleCloudDialogflowCxV3RolloutConfigRolloutStep[] */
  public function setRolloutSteps($rolloutSteps)
  {
    $this->rolloutSteps = $rolloutSteps;
  }
  /** @return GoogleCloudDialogflowCxV3RolloutConfigRolloutStep[] */
  public function getRolloutSteps()
  {
    return $this->rolloutSteps;
  }
}

class GoogleCloudDialogflowCxV3RolloutConfigRolloutStep extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $minDuration;
  /** @var int */
  public $trafficPercent;

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
  public function setMinDuration($minDuration)
  {
    $this->minDuration = $minDuration;
  }
  /** @return string */
  public function getMinDuration()
  {
    return $this->minDuration;
  }
  /** @param int */
  public function setTrafficPercent($trafficPercent)
  {
    $this->trafficPercent = $trafficPercent;
  }
  /** @return int */
  public function getTrafficPercent()
  {
    return $this->trafficPercent;
  }
}

class GoogleCloudDialogflowCxV3RolloutState extends \Google\Model
{
  /** @var string */
  public $startTime;
  /** @var string */
  public $step;
  /** @var int */
  public $stepIndex;

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
  public function setStep($step)
  {
    $this->step = $step;
  }
  /** @return string */
  public function getStep()
  {
    return $this->step;
  }
  /** @param int */
  public function setStepIndex($stepIndex)
  {
    $this->stepIndex = $stepIndex;
  }
  /** @return int */
  public function getStepIndex()
  {
    return $this->stepIndex;
  }
}

class GoogleCloudDialogflowCxV3RunContinuousTestMetadata extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3TestError[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $errorsType = GoogleCloudDialogflowCxV3TestError::class;
  protected $errorsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3TestError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GoogleCloudDialogflowCxV3TestError[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class GoogleCloudDialogflowCxV3RunContinuousTestRequest extends \Google\Model
{
}

class GoogleCloudDialogflowCxV3RunContinuousTestResponse extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3ContinuousTestResult */
  public $continuousTestResult;
  protected $continuousTestResultType = GoogleCloudDialogflowCxV3ContinuousTestResult::class;
  protected $continuousTestResultDataType = '';
  /** @param GoogleCloudDialogflowCxV3ContinuousTestResult */
  public function setContinuousTestResult(GoogleCloudDialogflowCxV3ContinuousTestResult $continuousTestResult)
  {
    $this->continuousTestResult = $continuousTestResult;
  }
  /** @return GoogleCloudDialogflowCxV3ContinuousTestResult */
  public function getContinuousTestResult()
  {
    return $this->continuousTestResult;
  }
}

class GoogleCloudDialogflowCxV3RunTestCaseMetadata extends \Google\Model
{
}

class GoogleCloudDialogflowCxV3RunTestCaseRequest extends \Google\Model
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

class GoogleCloudDialogflowCxV3RunTestCaseResponse extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3TestCaseResult */
  public $result;
  protected $resultType = GoogleCloudDialogflowCxV3TestCaseResult::class;
  protected $resultDataType = '';
  /** @param GoogleCloudDialogflowCxV3TestCaseResult */
  public function setResult(GoogleCloudDialogflowCxV3TestCaseResult $result)
  {
    $this->result = $result;
  }
  /** @return GoogleCloudDialogflowCxV3TestCaseResult */
  public function getResult()
  {
    return $this->result;
  }
}

class GoogleCloudDialogflowCxV3SecuritySettings extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3SecuritySettingsAudioExportSettings */
  public $audioExportSettings;
  /** @var string */
  public $deidentifyTemplate;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDialogflowCxV3SecuritySettingsInsightsExportSettings */
  public $insightsExportSettings;
  /** @var string */
  public $inspectTemplate;
  /** @var string */
  public $name;
  /** @var string[] */
  public $purgeDataTypes;
  /** @var string */
  public $redactionScope;
  /** @var string */
  public $redactionStrategy;
  /** @var int */
  public $retentionWindowDays;
  protected $collection_key = 'purgeDataTypes';
  protected $audioExportSettingsType = GoogleCloudDialogflowCxV3SecuritySettingsAudioExportSettings::class;
  protected $audioExportSettingsDataType = '';
  protected $insightsExportSettingsType = GoogleCloudDialogflowCxV3SecuritySettingsInsightsExportSettings::class;
  protected $insightsExportSettingsDataType = '';
  /** @param GoogleCloudDialogflowCxV3SecuritySettingsAudioExportSettings */
  public function setAudioExportSettings(GoogleCloudDialogflowCxV3SecuritySettingsAudioExportSettings $audioExportSettings)
  {
    $this->audioExportSettings = $audioExportSettings;
  }
  /** @return GoogleCloudDialogflowCxV3SecuritySettingsAudioExportSettings */
  public function getAudioExportSettings()
  {
    return $this->audioExportSettings;
  }
  /** @param string */
  public function setDeidentifyTemplate($deidentifyTemplate)
  {
    $this->deidentifyTemplate = $deidentifyTemplate;
  }
  /** @return string */
  public function getDeidentifyTemplate()
  {
    return $this->deidentifyTemplate;
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
  /** @param GoogleCloudDialogflowCxV3SecuritySettingsInsightsExportSettings */
  public function setInsightsExportSettings(GoogleCloudDialogflowCxV3SecuritySettingsInsightsExportSettings $insightsExportSettings)
  {
    $this->insightsExportSettings = $insightsExportSettings;
  }
  /** @return GoogleCloudDialogflowCxV3SecuritySettingsInsightsExportSettings */
  public function getInsightsExportSettings()
  {
    return $this->insightsExportSettings;
  }
  /** @param string */
  public function setInspectTemplate($inspectTemplate)
  {
    $this->inspectTemplate = $inspectTemplate;
  }
  /** @return string */
  public function getInspectTemplate()
  {
    return $this->inspectTemplate;
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
  public function setPurgeDataTypes($purgeDataTypes)
  {
    $this->purgeDataTypes = $purgeDataTypes;
  }
  /** @return string[] */
  public function getPurgeDataTypes()
  {
    return $this->purgeDataTypes;
  }
  /** @param string */
  public function setRedactionScope($redactionScope)
  {
    $this->redactionScope = $redactionScope;
  }
  /** @return string */
  public function getRedactionScope()
  {
    return $this->redactionScope;
  }
  /** @param string */
  public function setRedactionStrategy($redactionStrategy)
  {
    $this->redactionStrategy = $redactionStrategy;
  }
  /** @return string */
  public function getRedactionStrategy()
  {
    return $this->redactionStrategy;
  }
  /** @param int */
  public function setRetentionWindowDays($retentionWindowDays)
  {
    $this->retentionWindowDays = $retentionWindowDays;
  }
  /** @return int */
  public function getRetentionWindowDays()
  {
    return $this->retentionWindowDays;
  }
}

class GoogleCloudDialogflowCxV3SecuritySettingsAudioExportSettings extends \Google\Model
{
  /** @var string */
  public $audioExportPattern;
  /** @var string */
  public $audioFormat;
  /** @var bool */
  public $enableAudioRedaction;
  /** @var string */
  public $gcsBucket;

  /** @param string */
  public function setAudioExportPattern($audioExportPattern)
  {
    $this->audioExportPattern = $audioExportPattern;
  }
  /** @return string */
  public function getAudioExportPattern()
  {
    return $this->audioExportPattern;
  }
  /** @param string */
  public function setAudioFormat($audioFormat)
  {
    $this->audioFormat = $audioFormat;
  }
  /** @return string */
  public function getAudioFormat()
  {
    return $this->audioFormat;
  }
  /** @param bool */
  public function setEnableAudioRedaction($enableAudioRedaction)
  {
    $this->enableAudioRedaction = $enableAudioRedaction;
  }
  /** @return bool */
  public function getEnableAudioRedaction()
  {
    return $this->enableAudioRedaction;
  }
  /** @param string */
  public function setGcsBucket($gcsBucket)
  {
    $this->gcsBucket = $gcsBucket;
  }
  /** @return string */
  public function getGcsBucket()
  {
    return $this->gcsBucket;
  }
}

class GoogleCloudDialogflowCxV3SecuritySettingsInsightsExportSettings extends \Google\Model
{
  /** @var bool */
  public $enableInsightsExport;

  /** @param bool */
  public function setEnableInsightsExport($enableInsightsExport)
  {
    $this->enableInsightsExport = $enableInsightsExport;
  }
  /** @return bool */
  public function getEnableInsightsExport()
  {
    return $this->enableInsightsExport;
  }
}

class GoogleCloudDialogflowCxV3SentimentAnalysisResult extends \Google\Model
{
  /** @var float */
  public $magnitude;
  /** @var float */
  public $score;

  /** @param float */
  public function setMagnitude($magnitude)
  {
    $this->magnitude = $magnitude;
  }
  /** @return float */
  public function getMagnitude()
  {
    return $this->magnitude;
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

class GoogleCloudDialogflowCxV3SessionEntityType extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3EntityTypeEntity[] */
  public $entities;
  /** @var string */
  public $entityOverrideMode;
  /** @var string */
  public $name;
  protected $collection_key = 'entities';
  protected $entitiesType = GoogleCloudDialogflowCxV3EntityTypeEntity::class;
  protected $entitiesDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3EntityTypeEntity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudDialogflowCxV3EntityTypeEntity[] */
  public function getEntities()
  {
    return $this->entities;
  }
  /** @param string */
  public function setEntityOverrideMode($entityOverrideMode)
  {
    $this->entityOverrideMode = $entityOverrideMode;
  }
  /** @return string */
  public function getEntityOverrideMode()
  {
    return $this->entityOverrideMode;
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

class GoogleCloudDialogflowCxV3SessionInfo extends \Google\Model
{
  /** @var array[] */
  public $parameters;
  /** @var string */
  public $session;

  /** @param array[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setSession($session)
  {
    $this->session = $session;
  }
  /** @return string */
  public function getSession()
  {
    return $this->session;
  }
}

class GoogleCloudDialogflowCxV3SpeechToTextSettings extends \Google\Model
{
  /** @var bool */
  public $enableSpeechAdaptation;

  /** @param bool */
  public function setEnableSpeechAdaptation($enableSpeechAdaptation)
  {
    $this->enableSpeechAdaptation = $enableSpeechAdaptation;
  }
  /** @return bool */
  public function getEnableSpeechAdaptation()
  {
    return $this->enableSpeechAdaptation;
  }
}

class GoogleCloudDialogflowCxV3StartExperimentRequest extends \Google\Model
{
}

class GoogleCloudDialogflowCxV3StopExperimentRequest extends \Google\Model
{
}

class GoogleCloudDialogflowCxV3SynthesizeSpeechConfig extends \Google\Collection
{
  /** @var string[] */
  public $effectsProfileId;
  public $pitch;
  public $speakingRate;
  /** @var GoogleCloudDialogflowCxV3VoiceSelectionParams */
  public $voice;
  public $volumeGainDb;
  protected $collection_key = 'effectsProfileId';
  protected $voiceType = GoogleCloudDialogflowCxV3VoiceSelectionParams::class;
  protected $voiceDataType = '';
  /** @param string[] */
  public function setEffectsProfileId($effectsProfileId)
  {
    $this->effectsProfileId = $effectsProfileId;
  }
  /** @return string[] */
  public function getEffectsProfileId()
  {
    return $this->effectsProfileId;
  }
  public function setPitch($pitch)
  {
    $this->pitch = $pitch;
  }
  public function getPitch()
  {
    return $this->pitch;
  }
  public function setSpeakingRate($speakingRate)
  {
    $this->speakingRate = $speakingRate;
  }
  public function getSpeakingRate()
  {
    return $this->speakingRate;
  }
  /** @param GoogleCloudDialogflowCxV3VoiceSelectionParams */
  public function setVoice(GoogleCloudDialogflowCxV3VoiceSelectionParams $voice)
  {
    $this->voice = $voice;
  }
  /** @return GoogleCloudDialogflowCxV3VoiceSelectionParams */
  public function getVoice()
  {
    return $this->voice;
  }
  public function setVolumeGainDb($volumeGainDb)
  {
    $this->volumeGainDb = $volumeGainDb;
  }
  public function getVolumeGainDb()
  {
    return $this->volumeGainDb;
  }
}

class GoogleCloudDialogflowCxV3TestCase extends \Google\Collection
{
  /** @var string */
  public $creationTime;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDialogflowCxV3TestCaseResult */
  public $lastTestResult;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var string[] */
  public $tags;
  /** @var GoogleCloudDialogflowCxV3ConversationTurn[] */
  public $testCaseConversationTurns;
  /** @var GoogleCloudDialogflowCxV3TestConfig */
  public $testConfig;
  protected $collection_key = 'testCaseConversationTurns';
  protected $lastTestResultType = GoogleCloudDialogflowCxV3TestCaseResult::class;
  protected $lastTestResultDataType = '';
  protected $testCaseConversationTurnsType = GoogleCloudDialogflowCxV3ConversationTurn::class;
  protected $testCaseConversationTurnsDataType = 'array';
  protected $testConfigType = GoogleCloudDialogflowCxV3TestConfig::class;
  protected $testConfigDataType = '';
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
  /** @param GoogleCloudDialogflowCxV3TestCaseResult */
  public function setLastTestResult(GoogleCloudDialogflowCxV3TestCaseResult $lastTestResult)
  {
    $this->lastTestResult = $lastTestResult;
  }
  /** @return GoogleCloudDialogflowCxV3TestCaseResult */
  public function getLastTestResult()
  {
    return $this->lastTestResult;
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
  /** @param GoogleCloudDialogflowCxV3ConversationTurn[] */
  public function setTestCaseConversationTurns($testCaseConversationTurns)
  {
    $this->testCaseConversationTurns = $testCaseConversationTurns;
  }
  /** @return GoogleCloudDialogflowCxV3ConversationTurn[] */
  public function getTestCaseConversationTurns()
  {
    return $this->testCaseConversationTurns;
  }
  /** @param GoogleCloudDialogflowCxV3TestConfig */
  public function setTestConfig(GoogleCloudDialogflowCxV3TestConfig $testConfig)
  {
    $this->testConfig = $testConfig;
  }
  /** @return GoogleCloudDialogflowCxV3TestConfig */
  public function getTestConfig()
  {
    return $this->testConfig;
  }
}

class GoogleCloudDialogflowCxV3TestCaseError extends \Google\Model
{
  /** @var GoogleRpcStatus */
  public $status;
  /** @var GoogleCloudDialogflowCxV3TestCase */
  public $testCase;
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  protected $testCaseType = GoogleCloudDialogflowCxV3TestCase::class;
  protected $testCaseDataType = '';
  /** @param GoogleRpcStatus */
  public function setStatus(GoogleRpcStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleRpcStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param GoogleCloudDialogflowCxV3TestCase */
  public function setTestCase(GoogleCloudDialogflowCxV3TestCase $testCase)
  {
    $this->testCase = $testCase;
  }
  /** @return GoogleCloudDialogflowCxV3TestCase */
  public function getTestCase()
  {
    return $this->testCase;
  }
}

class GoogleCloudDialogflowCxV3TestCaseResult extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3ConversationTurn[] */
  public $conversationTurns;
  /** @var string */
  public $environment;
  /** @var string */
  public $name;
  /** @var string */
  public $testResult;
  /** @var string */
  public $testTime;
  protected $collection_key = 'conversationTurns';
  protected $conversationTurnsType = GoogleCloudDialogflowCxV3ConversationTurn::class;
  protected $conversationTurnsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3ConversationTurn[] */
  public function setConversationTurns($conversationTurns)
  {
    $this->conversationTurns = $conversationTurns;
  }
  /** @return GoogleCloudDialogflowCxV3ConversationTurn[] */
  public function getConversationTurns()
  {
    return $this->conversationTurns;
  }
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
  public function setTestResult($testResult)
  {
    $this->testResult = $testResult;
  }
  /** @return string */
  public function getTestResult()
  {
    return $this->testResult;
  }
  /** @param string */
  public function setTestTime($testTime)
  {
    $this->testTime = $testTime;
  }
  /** @return string */
  public function getTestTime()
  {
    return $this->testTime;
  }
}

class GoogleCloudDialogflowCxV3TestConfig extends \Google\Collection
{
  /** @var string */
  public $flow;
  /** @var string */
  public $page;
  /** @var string[] */
  public $trackingParameters;
  protected $collection_key = 'trackingParameters';
  /** @param string */
  public function setFlow($flow)
  {
    $this->flow = $flow;
  }
  /** @return string */
  public function getFlow()
  {
    return $this->flow;
  }
  /** @param string */
  public function setPage($page)
  {
    $this->page = $page;
  }
  /** @return string */
  public function getPage()
  {
    return $this->page;
  }
  /** @param string[] */
  public function setTrackingParameters($trackingParameters)
  {
    $this->trackingParameters = $trackingParameters;
  }
  /** @return string[] */
  public function getTrackingParameters()
  {
    return $this->trackingParameters;
  }
}

class GoogleCloudDialogflowCxV3TestError extends \Google\Model
{
  /** @var GoogleRpcStatus */
  public $status;
  /** @var string */
  public $testCase;
  /** @var string */
  public $testTime;
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param GoogleRpcStatus */
  public function setStatus(GoogleRpcStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleRpcStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setTestCase($testCase)
  {
    $this->testCase = $testCase;
  }
  /** @return string */
  public function getTestCase()
  {
    return $this->testCase;
  }
  /** @param string */
  public function setTestTime($testTime)
  {
    $this->testTime = $testTime;
  }
  /** @return string */
  public function getTestTime()
  {
    return $this->testTime;
  }
}

class GoogleCloudDialogflowCxV3TestRunDifference extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $type;

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

class GoogleCloudDialogflowCxV3TextInput extends \Google\Model
{
  /** @var string */
  public $text;

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

class GoogleCloudDialogflowCxV3TrainFlowRequest extends \Google\Model
{
}

class GoogleCloudDialogflowCxV3TransitionCoverage extends \Google\Collection
{
  /** @var float */
  public $coverageScore;
  /** @var GoogleCloudDialogflowCxV3TransitionCoverageTransition[] */
  public $transitions;
  protected $collection_key = 'transitions';
  protected $transitionsType = GoogleCloudDialogflowCxV3TransitionCoverageTransition::class;
  protected $transitionsDataType = 'array';
  /** @param float */
  public function setCoverageScore($coverageScore)
  {
    $this->coverageScore = $coverageScore;
  }
  /** @return float */
  public function getCoverageScore()
  {
    return $this->coverageScore;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionCoverageTransition[] */
  public function setTransitions($transitions)
  {
    $this->transitions = $transitions;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionCoverageTransition[] */
  public function getTransitions()
  {
    return $this->transitions;
  }
}

class GoogleCloudDialogflowCxV3TransitionCoverageTransition extends \Google\Model
{
  /** @var bool */
  public $covered;
  /** @var GoogleCloudDialogflowCxV3EventHandler */
  public $eventHandler;
  /** @var int */
  public $index;
  /** @var GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode */
  public $source;
  /** @var GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode */
  public $target;
  /** @var GoogleCloudDialogflowCxV3TransitionRoute */
  public $transitionRoute;
  protected $eventHandlerType = GoogleCloudDialogflowCxV3EventHandler::class;
  protected $eventHandlerDataType = '';
  protected $sourceType = GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode::class;
  protected $sourceDataType = '';
  protected $targetType = GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode::class;
  protected $targetDataType = '';
  protected $transitionRouteType = GoogleCloudDialogflowCxV3TransitionRoute::class;
  protected $transitionRouteDataType = '';
  /** @param bool */
  public function setCovered($covered)
  {
    $this->covered = $covered;
  }
  /** @return bool */
  public function getCovered()
  {
    return $this->covered;
  }
  /** @param GoogleCloudDialogflowCxV3EventHandler */
  public function setEventHandler(GoogleCloudDialogflowCxV3EventHandler $eventHandler)
  {
    $this->eventHandler = $eventHandler;
  }
  /** @return GoogleCloudDialogflowCxV3EventHandler */
  public function getEventHandler()
  {
    return $this->eventHandler;
  }
  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode */
  public function setSource(GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode $source)
  {
    $this->source = $source;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode */
  public function getSource()
  {
    return $this->source;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode */
  public function setTarget(GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode $target)
  {
    $this->target = $target;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionRoute */
  public function setTransitionRoute(GoogleCloudDialogflowCxV3TransitionRoute $transitionRoute)
  {
    $this->transitionRoute = $transitionRoute;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionRoute */
  public function getTransitionRoute()
  {
    return $this->transitionRoute;
  }
}

class GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3Flow */
  public $flow;
  /** @var GoogleCloudDialogflowCxV3Page */
  public $page;
  protected $flowType = GoogleCloudDialogflowCxV3Flow::class;
  protected $flowDataType = '';
  protected $pageType = GoogleCloudDialogflowCxV3Page::class;
  protected $pageDataType = '';
  /** @param GoogleCloudDialogflowCxV3Flow */
  public function setFlow(GoogleCloudDialogflowCxV3Flow $flow)
  {
    $this->flow = $flow;
  }
  /** @return GoogleCloudDialogflowCxV3Flow */
  public function getFlow()
  {
    return $this->flow;
  }
  /** @param GoogleCloudDialogflowCxV3Page */
  public function setPage(GoogleCloudDialogflowCxV3Page $page)
  {
    $this->page = $page;
  }
  /** @return GoogleCloudDialogflowCxV3Page */
  public function getPage()
  {
    return $this->page;
  }
}

class GoogleCloudDialogflowCxV3TransitionRoute extends \Google\Model
{
  /** @var string */
  public $condition;
  /** @var string */
  public $intent;
  /** @var string */
  public $name;
  /** @var string */
  public $targetFlow;
  /** @var string */
  public $targetPage;
  /** @var GoogleCloudDialogflowCxV3Fulfillment */
  public $triggerFulfillment;
  protected $triggerFulfillmentType = GoogleCloudDialogflowCxV3Fulfillment::class;
  protected $triggerFulfillmentDataType = '';
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string */
  public function setIntent($intent)
  {
    $this->intent = $intent;
  }
  /** @return string */
  public function getIntent()
  {
    return $this->intent;
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
  public function setTargetFlow($targetFlow)
  {
    $this->targetFlow = $targetFlow;
  }
  /** @return string */
  public function getTargetFlow()
  {
    return $this->targetFlow;
  }
  /** @param string */
  public function setTargetPage($targetPage)
  {
    $this->targetPage = $targetPage;
  }
  /** @return string */
  public function getTargetPage()
  {
    return $this->targetPage;
  }
  /** @param GoogleCloudDialogflowCxV3Fulfillment */
  public function setTriggerFulfillment(GoogleCloudDialogflowCxV3Fulfillment $triggerFulfillment)
  {
    $this->triggerFulfillment = $triggerFulfillment;
  }
  /** @return GoogleCloudDialogflowCxV3Fulfillment */
  public function getTriggerFulfillment()
  {
    return $this->triggerFulfillment;
  }
}

class GoogleCloudDialogflowCxV3TransitionRouteGroup extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3TransitionRoute[] */
  public $transitionRoutes;
  protected $collection_key = 'transitionRoutes';
  protected $transitionRoutesType = GoogleCloudDialogflowCxV3TransitionRoute::class;
  protected $transitionRoutesDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3TransitionRoute[] */
  public function setTransitionRoutes($transitionRoutes)
  {
    $this->transitionRoutes = $transitionRoutes;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionRoute[] */
  public function getTransitionRoutes()
  {
    return $this->transitionRoutes;
  }
}

class GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage extends \Google\Collection
{
  /** @var float */
  public $coverageScore;
  /** @var GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage[] */
  public $coverages;
  protected $collection_key = 'coverages';
  protected $coveragesType = GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage::class;
  protected $coveragesDataType = 'array';
  /** @param float */
  public function setCoverageScore($coverageScore)
  {
    $this->coverageScore = $coverageScore;
  }
  /** @return float */
  public function getCoverageScore()
  {
    return $this->coverageScore;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage[] */
  public function setCoverages($coverages)
  {
    $this->coverages = $coverages;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage[] */
  public function getCoverages()
  {
    return $this->coverages;
  }
}

class GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage extends \Google\Collection
{
  /** @var float */
  public $coverageScore;
  /** @var GoogleCloudDialogflowCxV3TransitionRouteGroup */
  public $routeGroup;
  /** @var GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverageTransition[] */
  public $transitions;
  protected $collection_key = 'transitions';
  protected $routeGroupType = GoogleCloudDialogflowCxV3TransitionRouteGroup::class;
  protected $routeGroupDataType = '';
  protected $transitionsType = GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverageTransition::class;
  protected $transitionsDataType = 'array';
  /** @param float */
  public function setCoverageScore($coverageScore)
  {
    $this->coverageScore = $coverageScore;
  }
  /** @return float */
  public function getCoverageScore()
  {
    return $this->coverageScore;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionRouteGroup */
  public function setRouteGroup(GoogleCloudDialogflowCxV3TransitionRouteGroup $routeGroup)
  {
    $this->routeGroup = $routeGroup;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionRouteGroup */
  public function getRouteGroup()
  {
    return $this->routeGroup;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverageTransition[] */
  public function setTransitions($transitions)
  {
    $this->transitions = $transitions;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverageTransition[] */
  public function getTransitions()
  {
    return $this->transitions;
  }
}

class GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverageTransition extends \Google\Model
{
  /** @var bool */
  public $covered;
  /** @var GoogleCloudDialogflowCxV3TransitionRoute */
  public $transitionRoute;
  protected $transitionRouteType = GoogleCloudDialogflowCxV3TransitionRoute::class;
  protected $transitionRouteDataType = '';
  /** @param bool */
  public function setCovered($covered)
  {
    $this->covered = $covered;
  }
  /** @return bool */
  public function getCovered()
  {
    return $this->covered;
  }
  /** @param GoogleCloudDialogflowCxV3TransitionRoute */
  public function setTransitionRoute(GoogleCloudDialogflowCxV3TransitionRoute $transitionRoute)
  {
    $this->transitionRoute = $transitionRoute;
  }
  /** @return GoogleCloudDialogflowCxV3TransitionRoute */
  public function getTransitionRoute()
  {
    return $this->transitionRoute;
  }
}

class GoogleCloudDialogflowCxV3UpdateDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowCxV3ValidateAgentRequest extends \Google\Model
{
  /** @var string */
  public $languageCode;

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
}

class GoogleCloudDialogflowCxV3ValidateFlowRequest extends \Google\Model
{
  /** @var string */
  public $languageCode;

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
}

class GoogleCloudDialogflowCxV3ValidationMessage extends \Google\Collection
{
  /** @var string */
  public $detail;
  /** @var GoogleCloudDialogflowCxV3ResourceName[] */
  public $resourceNames;
  /** @var string */
  public $resourceType;
  /** @var string[] */
  public $resources;
  /** @var string */
  public $severity;
  protected $collection_key = 'resources';
  protected $resourceNamesType = GoogleCloudDialogflowCxV3ResourceName::class;
  protected $resourceNamesDataType = 'array';
  /** @param string */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /** @return string */
  public function getDetail()
  {
    return $this->detail;
  }
  /** @param GoogleCloudDialogflowCxV3ResourceName[] */
  public function setResourceNames($resourceNames)
  {
    $this->resourceNames = $resourceNames;
  }
  /** @return GoogleCloudDialogflowCxV3ResourceName[] */
  public function getResourceNames()
  {
    return $this->resourceNames;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /** @param string[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return string[] */
  public function getResources()
  {
    return $this->resources;
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

class GoogleCloudDialogflowCxV3VariantsHistory extends \Google\Model
{
  /** @var string */
  public $updateTime;
  /** @var GoogleCloudDialogflowCxV3VersionVariants */
  public $versionVariants;
  protected $versionVariantsType = GoogleCloudDialogflowCxV3VersionVariants::class;
  protected $versionVariantsDataType = '';
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
  /** @param GoogleCloudDialogflowCxV3VersionVariants */
  public function setVersionVariants(GoogleCloudDialogflowCxV3VersionVariants $versionVariants)
  {
    $this->versionVariants = $versionVariants;
  }
  /** @return GoogleCloudDialogflowCxV3VersionVariants */
  public function getVersionVariants()
  {
    return $this->versionVariants;
  }
}

class GoogleCloudDialogflowCxV3Version extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3NluSettings */
  public $nluSettings;
  /** @var string */
  public $state;
  protected $nluSettingsType = GoogleCloudDialogflowCxV3NluSettings::class;
  protected $nluSettingsDataType = '';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param GoogleCloudDialogflowCxV3NluSettings */
  public function setNluSettings(GoogleCloudDialogflowCxV3NluSettings $nluSettings)
  {
    $this->nluSettings = $nluSettings;
  }
  /** @return GoogleCloudDialogflowCxV3NluSettings */
  public function getNluSettings()
  {
    return $this->nluSettings;
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

class GoogleCloudDialogflowCxV3VersionVariants extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3VersionVariantsVariant[] */
  public $variants;
  protected $collection_key = 'variants';
  protected $variantsType = GoogleCloudDialogflowCxV3VersionVariantsVariant::class;
  protected $variantsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3VersionVariantsVariant[] */
  public function setVariants($variants)
  {
    $this->variants = $variants;
  }
  /** @return GoogleCloudDialogflowCxV3VersionVariantsVariant[] */
  public function getVariants()
  {
    return $this->variants;
  }
}

class GoogleCloudDialogflowCxV3VersionVariantsVariant extends \Google\Model
{
  /** @var bool */
  public $isControlGroup;
  /** @var float */
  public $trafficAllocation;
  /** @var string */
  public $version;

  /** @param bool */
  public function setIsControlGroup($isControlGroup)
  {
    $this->isControlGroup = $isControlGroup;
  }
  /** @return bool */
  public function getIsControlGroup()
  {
    return $this->isControlGroup;
  }
  /** @param float */
  public function setTrafficAllocation($trafficAllocation)
  {
    $this->trafficAllocation = $trafficAllocation;
  }
  /** @return float */
  public function getTrafficAllocation()
  {
    return $this->trafficAllocation;
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

class GoogleCloudDialogflowCxV3VoiceSelectionParams extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $ssmlGender;

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
  public function setSsmlGender($ssmlGender)
  {
    $this->ssmlGender = $ssmlGender;
  }
  /** @return string */
  public function getSsmlGender()
  {
    return $this->ssmlGender;
  }
}

class GoogleCloudDialogflowCxV3Webhook extends \Google\Model
{
  /** @var bool */
  public $disabled;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDialogflowCxV3WebhookGenericWebService */
  public $genericWebService;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3WebhookServiceDirectoryConfig */
  public $serviceDirectory;
  /** @var string */
  public $timeout;
  protected $genericWebServiceType = GoogleCloudDialogflowCxV3WebhookGenericWebService::class;
  protected $genericWebServiceDataType = '';
  protected $serviceDirectoryType = GoogleCloudDialogflowCxV3WebhookServiceDirectoryConfig::class;
  protected $serviceDirectoryDataType = '';
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
  /** @param GoogleCloudDialogflowCxV3WebhookGenericWebService */
  public function setGenericWebService(GoogleCloudDialogflowCxV3WebhookGenericWebService $genericWebService)
  {
    $this->genericWebService = $genericWebService;
  }
  /** @return GoogleCloudDialogflowCxV3WebhookGenericWebService */
  public function getGenericWebService()
  {
    return $this->genericWebService;
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
  /** @param GoogleCloudDialogflowCxV3WebhookServiceDirectoryConfig */
  public function setServiceDirectory(GoogleCloudDialogflowCxV3WebhookServiceDirectoryConfig $serviceDirectory)
  {
    $this->serviceDirectory = $serviceDirectory;
  }
  /** @return GoogleCloudDialogflowCxV3WebhookServiceDirectoryConfig */
  public function getServiceDirectory()
  {
    return $this->serviceDirectory;
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

class GoogleCloudDialogflowCxV3WebhookGenericWebService extends \Google\Collection
{
  /** @var string[] */
  public $allowedCaCerts;
  /** @var string */
  public $password;
  /** @var string[] */
  public $requestHeaders;
  /** @var string */
  public $uri;
  /** @var string */
  public $username;
  protected $collection_key = 'allowedCaCerts';
  /** @param string[] */
  public function setAllowedCaCerts($allowedCaCerts)
  {
    $this->allowedCaCerts = $allowedCaCerts;
  }
  /** @return string[] */
  public function getAllowedCaCerts()
  {
    return $this->allowedCaCerts;
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
  /** @param string[] */
  public function setRequestHeaders($requestHeaders)
  {
    $this->requestHeaders = $requestHeaders;
  }
  /** @return string[] */
  public function getRequestHeaders()
  {
    return $this->requestHeaders;
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

class GoogleCloudDialogflowCxV3WebhookRequest extends \Google\Collection
{
  /** @var string */
  public $detectIntentResponseId;
  /** @var GoogleCloudDialogflowCxV3WebhookRequestFulfillmentInfo */
  public $fulfillmentInfo;
  /** @var GoogleCloudDialogflowCxV3WebhookRequestIntentInfo */
  public $intentInfo;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudDialogflowCxV3ResponseMessage[] */
  public $messages;
  /** @var GoogleCloudDialogflowCxV3PageInfo */
  public $pageInfo;
  /** @var array[] */
  public $payload;
  /** @var GoogleCloudDialogflowCxV3WebhookRequestSentimentAnalysisResult */
  public $sentimentAnalysisResult;
  /** @var GoogleCloudDialogflowCxV3SessionInfo */
  public $sessionInfo;
  /** @var string */
  public $text;
  /** @var string */
  public $transcript;
  /** @var string */
  public $triggerEvent;
  /** @var string */
  public $triggerIntent;
  protected $collection_key = 'messages';
  protected $fulfillmentInfoType = GoogleCloudDialogflowCxV3WebhookRequestFulfillmentInfo::class;
  protected $fulfillmentInfoDataType = '';
  protected $intentInfoType = GoogleCloudDialogflowCxV3WebhookRequestIntentInfo::class;
  protected $intentInfoDataType = '';
  protected $messagesType = GoogleCloudDialogflowCxV3ResponseMessage::class;
  protected $messagesDataType = 'array';
  protected $pageInfoType = GoogleCloudDialogflowCxV3PageInfo::class;
  protected $pageInfoDataType = '';
  protected $sentimentAnalysisResultType = GoogleCloudDialogflowCxV3WebhookRequestSentimentAnalysisResult::class;
  protected $sentimentAnalysisResultDataType = '';
  protected $sessionInfoType = GoogleCloudDialogflowCxV3SessionInfo::class;
  protected $sessionInfoDataType = '';
  /** @param string */
  public function setDetectIntentResponseId($detectIntentResponseId)
  {
    $this->detectIntentResponseId = $detectIntentResponseId;
  }
  /** @return string */
  public function getDetectIntentResponseId()
  {
    return $this->detectIntentResponseId;
  }
  /** @param GoogleCloudDialogflowCxV3WebhookRequestFulfillmentInfo */
  public function setFulfillmentInfo(GoogleCloudDialogflowCxV3WebhookRequestFulfillmentInfo $fulfillmentInfo)
  {
    $this->fulfillmentInfo = $fulfillmentInfo;
  }
  /** @return GoogleCloudDialogflowCxV3WebhookRequestFulfillmentInfo */
  public function getFulfillmentInfo()
  {
    return $this->fulfillmentInfo;
  }
  /** @param GoogleCloudDialogflowCxV3WebhookRequestIntentInfo */
  public function setIntentInfo(GoogleCloudDialogflowCxV3WebhookRequestIntentInfo $intentInfo)
  {
    $this->intentInfo = $intentInfo;
  }
  /** @return GoogleCloudDialogflowCxV3WebhookRequestIntentInfo */
  public function getIntentInfo()
  {
    return $this->intentInfo;
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
  /** @param GoogleCloudDialogflowCxV3ResponseMessage[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessage[] */
  public function getMessages()
  {
    return $this->messages;
  }
  /** @param GoogleCloudDialogflowCxV3PageInfo */
  public function setPageInfo(GoogleCloudDialogflowCxV3PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return GoogleCloudDialogflowCxV3PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param GoogleCloudDialogflowCxV3WebhookRequestSentimentAnalysisResult */
  public function setSentimentAnalysisResult(GoogleCloudDialogflowCxV3WebhookRequestSentimentAnalysisResult $sentimentAnalysisResult)
  {
    $this->sentimentAnalysisResult = $sentimentAnalysisResult;
  }
  /** @return GoogleCloudDialogflowCxV3WebhookRequestSentimentAnalysisResult */
  public function getSentimentAnalysisResult()
  {
    return $this->sentimentAnalysisResult;
  }
  /** @param GoogleCloudDialogflowCxV3SessionInfo */
  public function setSessionInfo(GoogleCloudDialogflowCxV3SessionInfo $sessionInfo)
  {
    $this->sessionInfo = $sessionInfo;
  }
  /** @return GoogleCloudDialogflowCxV3SessionInfo */
  public function getSessionInfo()
  {
    return $this->sessionInfo;
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
  /** @param string */
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return string */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param string */
  public function setTriggerEvent($triggerEvent)
  {
    $this->triggerEvent = $triggerEvent;
  }
  /** @return string */
  public function getTriggerEvent()
  {
    return $this->triggerEvent;
  }
  /** @param string */
  public function setTriggerIntent($triggerIntent)
  {
    $this->triggerIntent = $triggerIntent;
  }
  /** @return string */
  public function getTriggerIntent()
  {
    return $this->triggerIntent;
  }
}

class GoogleCloudDialogflowCxV3WebhookRequestFulfillmentInfo extends \Google\Model
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

class GoogleCloudDialogflowCxV3WebhookRequestIntentInfo extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $displayName;
  /** @var string */
  public $lastMatchedIntent;
  /** @var GoogleCloudDialogflowCxV3WebhookRequestIntentInfoIntentParameterValue[] */
  public $parameters;
  protected $parametersType = GoogleCloudDialogflowCxV3WebhookRequestIntentInfoIntentParameterValue::class;
  protected $parametersDataType = 'map';
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  public function setLastMatchedIntent($lastMatchedIntent)
  {
    $this->lastMatchedIntent = $lastMatchedIntent;
  }
  /** @return string */
  public function getLastMatchedIntent()
  {
    return $this->lastMatchedIntent;
  }
  /** @param GoogleCloudDialogflowCxV3WebhookRequestIntentInfoIntentParameterValue[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudDialogflowCxV3WebhookRequestIntentInfoIntentParameterValue[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleCloudDialogflowCxV3WebhookRequestIntentInfoIntentParameterValue extends \Google\Model
{
  /** @var string */
  public $originalValue;
  /** @var array */
  public $resolvedValue;

  /** @param string */
  public function setOriginalValue($originalValue)
  {
    $this->originalValue = $originalValue;
  }
  /** @return string */
  public function getOriginalValue()
  {
    return $this->originalValue;
  }
  /** @param array */
  public function setResolvedValue($resolvedValue)
  {
    $this->resolvedValue = $resolvedValue;
  }
  /** @return array */
  public function getResolvedValue()
  {
    return $this->resolvedValue;
  }
}

class GoogleCloudDialogflowCxV3WebhookRequestSentimentAnalysisResult extends \Google\Model
{
  /** @var float */
  public $magnitude;
  /** @var float */
  public $score;

  /** @param float */
  public function setMagnitude($magnitude)
  {
    $this->magnitude = $magnitude;
  }
  /** @return float */
  public function getMagnitude()
  {
    return $this->magnitude;
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

class GoogleCloudDialogflowCxV3WebhookResponse extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3WebhookResponseFulfillmentResponse */
  public $fulfillmentResponse;
  /** @var GoogleCloudDialogflowCxV3PageInfo */
  public $pageInfo;
  /** @var array[] */
  public $payload;
  /** @var GoogleCloudDialogflowCxV3SessionInfo */
  public $sessionInfo;
  /** @var string */
  public $targetFlow;
  /** @var string */
  public $targetPage;
  protected $fulfillmentResponseType = GoogleCloudDialogflowCxV3WebhookResponseFulfillmentResponse::class;
  protected $fulfillmentResponseDataType = '';
  protected $pageInfoType = GoogleCloudDialogflowCxV3PageInfo::class;
  protected $pageInfoDataType = '';
  protected $sessionInfoType = GoogleCloudDialogflowCxV3SessionInfo::class;
  protected $sessionInfoDataType = '';
  /** @param GoogleCloudDialogflowCxV3WebhookResponseFulfillmentResponse */
  public function setFulfillmentResponse(GoogleCloudDialogflowCxV3WebhookResponseFulfillmentResponse $fulfillmentResponse)
  {
    $this->fulfillmentResponse = $fulfillmentResponse;
  }
  /** @return GoogleCloudDialogflowCxV3WebhookResponseFulfillmentResponse */
  public function getFulfillmentResponse()
  {
    return $this->fulfillmentResponse;
  }
  /** @param GoogleCloudDialogflowCxV3PageInfo */
  public function setPageInfo(GoogleCloudDialogflowCxV3PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return GoogleCloudDialogflowCxV3PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param GoogleCloudDialogflowCxV3SessionInfo */
  public function setSessionInfo(GoogleCloudDialogflowCxV3SessionInfo $sessionInfo)
  {
    $this->sessionInfo = $sessionInfo;
  }
  /** @return GoogleCloudDialogflowCxV3SessionInfo */
  public function getSessionInfo()
  {
    return $this->sessionInfo;
  }
  /** @param string */
  public function setTargetFlow($targetFlow)
  {
    $this->targetFlow = $targetFlow;
  }
  /** @return string */
  public function getTargetFlow()
  {
    return $this->targetFlow;
  }
  /** @param string */
  public function setTargetPage($targetPage)
  {
    $this->targetPage = $targetPage;
  }
  /** @return string */
  public function getTargetPage()
  {
    return $this->targetPage;
  }
}

class GoogleCloudDialogflowCxV3WebhookResponseFulfillmentResponse extends \Google\Collection
{
  /** @var string */
  public $mergeBehavior;
  /** @var GoogleCloudDialogflowCxV3ResponseMessage[] */
  public $messages;
  protected $collection_key = 'messages';
  protected $messagesType = GoogleCloudDialogflowCxV3ResponseMessage::class;
  protected $messagesDataType = 'array';
  /** @param string */
  public function setMergeBehavior($mergeBehavior)
  {
    $this->mergeBehavior = $mergeBehavior;
  }
  /** @return string */
  public function getMergeBehavior()
  {
    return $this->mergeBehavior;
  }
  /** @param GoogleCloudDialogflowCxV3ResponseMessage[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GoogleCloudDialogflowCxV3ResponseMessage[] */
  public function getMessages()
  {
    return $this->messages;
  }
}

class GoogleCloudDialogflowCxV3WebhookServiceDirectoryConfig extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3WebhookGenericWebService */
  public $genericWebService;
  /** @var string */
  public $service;
  protected $genericWebServiceType = GoogleCloudDialogflowCxV3WebhookGenericWebService::class;
  protected $genericWebServiceDataType = '';
  /** @param GoogleCloudDialogflowCxV3WebhookGenericWebService */
  public function setGenericWebService(GoogleCloudDialogflowCxV3WebhookGenericWebService $genericWebService)
  {
    $this->genericWebService = $genericWebService;
  }
  /** @return GoogleCloudDialogflowCxV3WebhookGenericWebService */
  public function getGenericWebService()
  {
    return $this->genericWebService;
  }
  /** @param string */
  public function setService($service)
  {
    $this->service = $service;
  }
  /** @return string */
  public function getService()
  {
    return $this->service;
  }
}

class GoogleCloudDialogflowCxV3beta1AudioInput extends \Google\Model
{
  /** @var string */
  public $audio;
  /** @var GoogleCloudDialogflowCxV3beta1InputAudioConfig */
  public $config;
  protected $configType = GoogleCloudDialogflowCxV3beta1InputAudioConfig::class;
  protected $configDataType = '';
  /** @param string */
  public function setAudio($audio)
  {
    $this->audio = $audio;
  }
  /** @return string */
  public function getAudio()
  {
    return $this->audio;
  }
  /** @param GoogleCloudDialogflowCxV3beta1InputAudioConfig */
  public function setConfig(GoogleCloudDialogflowCxV3beta1InputAudioConfig $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudDialogflowCxV3beta1InputAudioConfig */
  public function getConfig()
  {
    return $this->config;
  }
}

class GoogleCloudDialogflowCxV3beta1BatchRunTestCasesMetadata extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1TestError[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $errorsType = GoogleCloudDialogflowCxV3beta1TestError::class;
  protected $errorsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1TestError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TestError[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class GoogleCloudDialogflowCxV3beta1BatchRunTestCasesResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1TestCaseResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = GoogleCloudDialogflowCxV3beta1TestCaseResult::class;
  protected $resultsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1TestCaseResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TestCaseResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudDialogflowCxV3beta1ContinuousTestResult extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string */
  public $result;
  /** @var string */
  public $runTime;
  /** @var string[] */
  public $testCaseResults;
  protected $collection_key = 'testCaseResults';
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
  public function setResult($result)
  {
    $this->result = $result;
  }
  /** @return string */
  public function getResult()
  {
    return $this->result;
  }
  /** @param string */
  public function setRunTime($runTime)
  {
    $this->runTime = $runTime;
  }
  /** @return string */
  public function getRunTime()
  {
    return $this->runTime;
  }
  /** @param string[] */
  public function setTestCaseResults($testCaseResults)
  {
    $this->testCaseResults = $testCaseResults;
  }
  /** @return string[] */
  public function getTestCaseResults()
  {
    return $this->testCaseResults;
  }
}

class GoogleCloudDialogflowCxV3beta1ConversationTurn extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1ConversationTurnUserInput */
  public $userInput;
  /** @var GoogleCloudDialogflowCxV3beta1ConversationTurnVirtualAgentOutput */
  public $virtualAgentOutput;
  protected $userInputType = GoogleCloudDialogflowCxV3beta1ConversationTurnUserInput::class;
  protected $userInputDataType = '';
  protected $virtualAgentOutputType = GoogleCloudDialogflowCxV3beta1ConversationTurnVirtualAgentOutput::class;
  protected $virtualAgentOutputDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1ConversationTurnUserInput */
  public function setUserInput(GoogleCloudDialogflowCxV3beta1ConversationTurnUserInput $userInput)
  {
    $this->userInput = $userInput;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ConversationTurnUserInput */
  public function getUserInput()
  {
    return $this->userInput;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ConversationTurnVirtualAgentOutput */
  public function setVirtualAgentOutput(GoogleCloudDialogflowCxV3beta1ConversationTurnVirtualAgentOutput $virtualAgentOutput)
  {
    $this->virtualAgentOutput = $virtualAgentOutput;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ConversationTurnVirtualAgentOutput */
  public function getVirtualAgentOutput()
  {
    return $this->virtualAgentOutput;
  }
}

class GoogleCloudDialogflowCxV3beta1ConversationTurnUserInput extends \Google\Model
{
  /** @var bool */
  public $enableSentimentAnalysis;
  /** @var array[] */
  public $injectedParameters;
  /** @var GoogleCloudDialogflowCxV3beta1QueryInput */
  public $input;
  /** @var bool */
  public $isWebhookEnabled;
  protected $inputType = GoogleCloudDialogflowCxV3beta1QueryInput::class;
  protected $inputDataType = '';
  /** @param bool */
  public function setEnableSentimentAnalysis($enableSentimentAnalysis)
  {
    $this->enableSentimentAnalysis = $enableSentimentAnalysis;
  }
  /** @return bool */
  public function getEnableSentimentAnalysis()
  {
    return $this->enableSentimentAnalysis;
  }
  /** @param array[] */
  public function setInjectedParameters($injectedParameters)
  {
    $this->injectedParameters = $injectedParameters;
  }
  /** @return array[] */
  public function getInjectedParameters()
  {
    return $this->injectedParameters;
  }
  /** @param GoogleCloudDialogflowCxV3beta1QueryInput */
  public function setInput(GoogleCloudDialogflowCxV3beta1QueryInput $input)
  {
    $this->input = $input;
  }
  /** @return GoogleCloudDialogflowCxV3beta1QueryInput */
  public function getInput()
  {
    return $this->input;
  }
  /** @param bool */
  public function setIsWebhookEnabled($isWebhookEnabled)
  {
    $this->isWebhookEnabled = $isWebhookEnabled;
  }
  /** @return bool */
  public function getIsWebhookEnabled()
  {
    return $this->isWebhookEnabled;
  }
}

class GoogleCloudDialogflowCxV3beta1ConversationTurnVirtualAgentOutput extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1Page */
  public $currentPage;
  /** @var array[] */
  public $diagnosticInfo;
  /** @var GoogleCloudDialogflowCxV3beta1TestRunDifference[] */
  public $differences;
  /** @var array[] */
  public $sessionParameters;
  /** @var GoogleRpcStatus */
  public $status;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessageText[] */
  public $textResponses;
  /** @var GoogleCloudDialogflowCxV3beta1Intent */
  public $triggeredIntent;
  protected $collection_key = 'textResponses';
  protected $currentPageType = GoogleCloudDialogflowCxV3beta1Page::class;
  protected $currentPageDataType = '';
  protected $differencesType = GoogleCloudDialogflowCxV3beta1TestRunDifference::class;
  protected $differencesDataType = 'array';
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  protected $textResponsesType = GoogleCloudDialogflowCxV3beta1ResponseMessageText::class;
  protected $textResponsesDataType = 'array';
  protected $triggeredIntentType = GoogleCloudDialogflowCxV3beta1Intent::class;
  protected $triggeredIntentDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1Page */
  public function setCurrentPage(GoogleCloudDialogflowCxV3beta1Page $currentPage)
  {
    $this->currentPage = $currentPage;
  }
  /** @return GoogleCloudDialogflowCxV3beta1Page */
  public function getCurrentPage()
  {
    return $this->currentPage;
  }
  /** @param array[] */
  public function setDiagnosticInfo($diagnosticInfo)
  {
    $this->diagnosticInfo = $diagnosticInfo;
  }
  /** @return array[] */
  public function getDiagnosticInfo()
  {
    return $this->diagnosticInfo;
  }
  /** @param GoogleCloudDialogflowCxV3beta1TestRunDifference[] */
  public function setDifferences($differences)
  {
    $this->differences = $differences;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TestRunDifference[] */
  public function getDifferences()
  {
    return $this->differences;
  }
  /** @param array[] */
  public function setSessionParameters($sessionParameters)
  {
    $this->sessionParameters = $sessionParameters;
  }
  /** @return array[] */
  public function getSessionParameters()
  {
    return $this->sessionParameters;
  }
  /** @param GoogleRpcStatus */
  public function setStatus(GoogleRpcStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleRpcStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessageText[] */
  public function setTextResponses($textResponses)
  {
    $this->textResponses = $textResponses;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessageText[] */
  public function getTextResponses()
  {
    return $this->textResponses;
  }
  /** @param GoogleCloudDialogflowCxV3beta1Intent */
  public function setTriggeredIntent(GoogleCloudDialogflowCxV3beta1Intent $triggeredIntent)
  {
    $this->triggeredIntent = $triggeredIntent;
  }
  /** @return GoogleCloudDialogflowCxV3beta1Intent */
  public function getTriggeredIntent()
  {
    return $this->triggeredIntent;
  }
}

class GoogleCloudDialogflowCxV3beta1CreateDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowCxV3beta1CreateVersionOperationMetadata extends \Google\Model
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

class GoogleCloudDialogflowCxV3beta1DeleteDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowCxV3beta1DeployFlowMetadata extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1TestError[] */
  public $testErrors;
  protected $collection_key = 'testErrors';
  protected $testErrorsType = GoogleCloudDialogflowCxV3beta1TestError::class;
  protected $testErrorsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1TestError[] */
  public function setTestErrors($testErrors)
  {
    $this->testErrors = $testErrors;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TestError[] */
  public function getTestErrors()
  {
    return $this->testErrors;
  }
}

class GoogleCloudDialogflowCxV3beta1DeployFlowResponse extends \Google\Model
{
  /** @var string */
  public $deployment;
  /** @var GoogleCloudDialogflowCxV3beta1Environment */
  public $environment;
  protected $environmentType = GoogleCloudDialogflowCxV3beta1Environment::class;
  protected $environmentDataType = '';
  /** @param string */
  public function setDeployment($deployment)
  {
    $this->deployment = $deployment;
  }
  /** @return string */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /** @param GoogleCloudDialogflowCxV3beta1Environment */
  public function setEnvironment(GoogleCloudDialogflowCxV3beta1Environment $environment)
  {
    $this->environment = $environment;
  }
  /** @return GoogleCloudDialogflowCxV3beta1Environment */
  public function getEnvironment()
  {
    return $this->environment;
  }
}

class GoogleCloudDialogflowCxV3beta1DtmfInput extends \Google\Model
{
  /** @var string */
  public $digits;
  /** @var string */
  public $finishDigit;

  /** @param string */
  public function setDigits($digits)
  {
    $this->digits = $digits;
  }
  /** @return string */
  public function getDigits()
  {
    return $this->digits;
  }
  /** @param string */
  public function setFinishDigit($finishDigit)
  {
    $this->finishDigit = $finishDigit;
  }
  /** @return string */
  public function getFinishDigit()
  {
    return $this->finishDigit;
  }
}

class GoogleCloudDialogflowCxV3beta1Environment extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3beta1EnvironmentTestCasesConfig */
  public $testCasesConfig;
  /** @var string */
  public $updateTime;
  /** @var GoogleCloudDialogflowCxV3beta1EnvironmentVersionConfig[] */
  public $versionConfigs;
  /** @var GoogleCloudDialogflowCxV3beta1EnvironmentWebhookConfig */
  public $webhookConfig;
  protected $collection_key = 'versionConfigs';
  protected $testCasesConfigType = GoogleCloudDialogflowCxV3beta1EnvironmentTestCasesConfig::class;
  protected $testCasesConfigDataType = '';
  protected $versionConfigsType = GoogleCloudDialogflowCxV3beta1EnvironmentVersionConfig::class;
  protected $versionConfigsDataType = 'array';
  protected $webhookConfigType = GoogleCloudDialogflowCxV3beta1EnvironmentWebhookConfig::class;
  protected $webhookConfigDataType = '';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param GoogleCloudDialogflowCxV3beta1EnvironmentTestCasesConfig */
  public function setTestCasesConfig(GoogleCloudDialogflowCxV3beta1EnvironmentTestCasesConfig $testCasesConfig)
  {
    $this->testCasesConfig = $testCasesConfig;
  }
  /** @return GoogleCloudDialogflowCxV3beta1EnvironmentTestCasesConfig */
  public function getTestCasesConfig()
  {
    return $this->testCasesConfig;
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
  /** @param GoogleCloudDialogflowCxV3beta1EnvironmentVersionConfig[] */
  public function setVersionConfigs($versionConfigs)
  {
    $this->versionConfigs = $versionConfigs;
  }
  /** @return GoogleCloudDialogflowCxV3beta1EnvironmentVersionConfig[] */
  public function getVersionConfigs()
  {
    return $this->versionConfigs;
  }
  /** @param GoogleCloudDialogflowCxV3beta1EnvironmentWebhookConfig */
  public function setWebhookConfig(GoogleCloudDialogflowCxV3beta1EnvironmentWebhookConfig $webhookConfig)
  {
    $this->webhookConfig = $webhookConfig;
  }
  /** @return GoogleCloudDialogflowCxV3beta1EnvironmentWebhookConfig */
  public function getWebhookConfig()
  {
    return $this->webhookConfig;
  }
}

class GoogleCloudDialogflowCxV3beta1EnvironmentTestCasesConfig extends \Google\Collection
{
  /** @var bool */
  public $enableContinuousRun;
  /** @var bool */
  public $enablePredeploymentRun;
  /** @var string[] */
  public $testCases;
  protected $collection_key = 'testCases';
  /** @param bool */
  public function setEnableContinuousRun($enableContinuousRun)
  {
    $this->enableContinuousRun = $enableContinuousRun;
  }
  /** @return bool */
  public function getEnableContinuousRun()
  {
    return $this->enableContinuousRun;
  }
  /** @param bool */
  public function setEnablePredeploymentRun($enablePredeploymentRun)
  {
    $this->enablePredeploymentRun = $enablePredeploymentRun;
  }
  /** @return bool */
  public function getEnablePredeploymentRun()
  {
    return $this->enablePredeploymentRun;
  }
  /** @param string[] */
  public function setTestCases($testCases)
  {
    $this->testCases = $testCases;
  }
  /** @return string[] */
  public function getTestCases()
  {
    return $this->testCases;
  }
}

class GoogleCloudDialogflowCxV3beta1EnvironmentVersionConfig extends \Google\Model
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

class GoogleCloudDialogflowCxV3beta1EnvironmentWebhookConfig extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1Webhook[] */
  public $webhookOverrides;
  protected $collection_key = 'webhookOverrides';
  protected $webhookOverridesType = GoogleCloudDialogflowCxV3beta1Webhook::class;
  protected $webhookOverridesDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1Webhook[] */
  public function setWebhookOverrides($webhookOverrides)
  {
    $this->webhookOverrides = $webhookOverrides;
  }
  /** @return GoogleCloudDialogflowCxV3beta1Webhook[] */
  public function getWebhookOverrides()
  {
    return $this->webhookOverrides;
  }
}

class GoogleCloudDialogflowCxV3beta1EventHandler extends \Google\Model
{
  /** @var string */
  public $event;
  /** @var string */
  public $name;
  /** @var string */
  public $targetFlow;
  /** @var string */
  public $targetPage;
  /** @var GoogleCloudDialogflowCxV3beta1Fulfillment */
  public $triggerFulfillment;
  protected $triggerFulfillmentType = GoogleCloudDialogflowCxV3beta1Fulfillment::class;
  protected $triggerFulfillmentDataType = '';
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
  public function setTargetFlow($targetFlow)
  {
    $this->targetFlow = $targetFlow;
  }
  /** @return string */
  public function getTargetFlow()
  {
    return $this->targetFlow;
  }
  /** @param string */
  public function setTargetPage($targetPage)
  {
    $this->targetPage = $targetPage;
  }
  /** @return string */
  public function getTargetPage()
  {
    return $this->targetPage;
  }
  /** @param GoogleCloudDialogflowCxV3beta1Fulfillment */
  public function setTriggerFulfillment(GoogleCloudDialogflowCxV3beta1Fulfillment $triggerFulfillment)
  {
    $this->triggerFulfillment = $triggerFulfillment;
  }
  /** @return GoogleCloudDialogflowCxV3beta1Fulfillment */
  public function getTriggerFulfillment()
  {
    return $this->triggerFulfillment;
  }
}

class GoogleCloudDialogflowCxV3beta1EventInput extends \Google\Model
{
  /** @var string */
  public $event;

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
}

class GoogleCloudDialogflowCxV3beta1ExportAgentResponse extends \Google\Model
{
  /** @var string */
  public $agentContent;
  /** @var string */
  public $agentUri;

  /** @param string */
  public function setAgentContent($agentContent)
  {
    $this->agentContent = $agentContent;
  }
  /** @return string */
  public function getAgentContent()
  {
    return $this->agentContent;
  }
  /** @param string */
  public function setAgentUri($agentUri)
  {
    $this->agentUri = $agentUri;
  }
  /** @return string */
  public function getAgentUri()
  {
    return $this->agentUri;
  }
}

class GoogleCloudDialogflowCxV3beta1ExportFlowResponse extends \Google\Model
{
  /** @var string */
  public $flowContent;
  /** @var string */
  public $flowUri;

  /** @param string */
  public function setFlowContent($flowContent)
  {
    $this->flowContent = $flowContent;
  }
  /** @return string */
  public function getFlowContent()
  {
    return $this->flowContent;
  }
  /** @param string */
  public function setFlowUri($flowUri)
  {
    $this->flowUri = $flowUri;
  }
  /** @return string */
  public function getFlowUri()
  {
    return $this->flowUri;
  }
}

class GoogleCloudDialogflowCxV3beta1ExportTestCasesMetadata extends \Google\Model
{
}

class GoogleCloudDialogflowCxV3beta1ExportTestCasesResponse extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $gcsUri;

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
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
}

class GoogleCloudDialogflowCxV3beta1Form extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1FormParameter[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = GoogleCloudDialogflowCxV3beta1FormParameter::class;
  protected $parametersDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1FormParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudDialogflowCxV3beta1FormParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleCloudDialogflowCxV3beta1FormParameter extends \Google\Model
{
  /** @var array */
  public $defaultValue;
  /** @var string */
  public $displayName;
  /** @var string */
  public $entityType;
  /** @var GoogleCloudDialogflowCxV3beta1FormParameterFillBehavior */
  public $fillBehavior;
  /** @var bool */
  public $isList;
  /** @var bool */
  public $redact;
  /** @var bool */
  public $required;
  protected $fillBehaviorType = GoogleCloudDialogflowCxV3beta1FormParameterFillBehavior::class;
  protected $fillBehaviorDataType = '';
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
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /** @return string */
  public function getEntityType()
  {
    return $this->entityType;
  }
  /** @param GoogleCloudDialogflowCxV3beta1FormParameterFillBehavior */
  public function setFillBehavior(GoogleCloudDialogflowCxV3beta1FormParameterFillBehavior $fillBehavior)
  {
    $this->fillBehavior = $fillBehavior;
  }
  /** @return GoogleCloudDialogflowCxV3beta1FormParameterFillBehavior */
  public function getFillBehavior()
  {
    return $this->fillBehavior;
  }
  /** @param bool */
  public function setIsList($isList)
  {
    $this->isList = $isList;
  }
  /** @return bool */
  public function getIsList()
  {
    return $this->isList;
  }
  /** @param bool */
  public function setRedact($redact)
  {
    $this->redact = $redact;
  }
  /** @return bool */
  public function getRedact()
  {
    return $this->redact;
  }
  /** @param bool */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /** @return bool */
  public function getRequired()
  {
    return $this->required;
  }
}

class GoogleCloudDialogflowCxV3beta1FormParameterFillBehavior extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1Fulfillment */
  public $initialPromptFulfillment;
  /** @var GoogleCloudDialogflowCxV3beta1EventHandler[] */
  public $repromptEventHandlers;
  protected $collection_key = 'repromptEventHandlers';
  protected $initialPromptFulfillmentType = GoogleCloudDialogflowCxV3beta1Fulfillment::class;
  protected $initialPromptFulfillmentDataType = '';
  protected $repromptEventHandlersType = GoogleCloudDialogflowCxV3beta1EventHandler::class;
  protected $repromptEventHandlersDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1Fulfillment */
  public function setInitialPromptFulfillment(GoogleCloudDialogflowCxV3beta1Fulfillment $initialPromptFulfillment)
  {
    $this->initialPromptFulfillment = $initialPromptFulfillment;
  }
  /** @return GoogleCloudDialogflowCxV3beta1Fulfillment */
  public function getInitialPromptFulfillment()
  {
    return $this->initialPromptFulfillment;
  }
  /** @param GoogleCloudDialogflowCxV3beta1EventHandler[] */
  public function setRepromptEventHandlers($repromptEventHandlers)
  {
    $this->repromptEventHandlers = $repromptEventHandlers;
  }
  /** @return GoogleCloudDialogflowCxV3beta1EventHandler[] */
  public function getRepromptEventHandlers()
  {
    return $this->repromptEventHandlers;
  }
}

class GoogleCloudDialogflowCxV3beta1Fulfillment extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases[] */
  public $conditionalCases;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessage[] */
  public $messages;
  /** @var bool */
  public $returnPartialResponses;
  /** @var GoogleCloudDialogflowCxV3beta1FulfillmentSetParameterAction[] */
  public $setParameterActions;
  /** @var string */
  public $tag;
  /** @var string */
  public $webhook;
  protected $collection_key = 'setParameterActions';
  protected $conditionalCasesType = GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases::class;
  protected $conditionalCasesDataType = 'array';
  protected $messagesType = GoogleCloudDialogflowCxV3beta1ResponseMessage::class;
  protected $messagesDataType = 'array';
  protected $setParameterActionsType = GoogleCloudDialogflowCxV3beta1FulfillmentSetParameterAction::class;
  protected $setParameterActionsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases[] */
  public function setConditionalCases($conditionalCases)
  {
    $this->conditionalCases = $conditionalCases;
  }
  /** @return GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases[] */
  public function getConditionalCases()
  {
    return $this->conditionalCases;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessage[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessage[] */
  public function getMessages()
  {
    return $this->messages;
  }
  /** @param bool */
  public function setReturnPartialResponses($returnPartialResponses)
  {
    $this->returnPartialResponses = $returnPartialResponses;
  }
  /** @return bool */
  public function getReturnPartialResponses()
  {
    return $this->returnPartialResponses;
  }
  /** @param GoogleCloudDialogflowCxV3beta1FulfillmentSetParameterAction[] */
  public function setSetParameterActions($setParameterActions)
  {
    $this->setParameterActions = $setParameterActions;
  }
  /** @return GoogleCloudDialogflowCxV3beta1FulfillmentSetParameterAction[] */
  public function getSetParameterActions()
  {
    return $this->setParameterActions;
  }
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
  /** @param string */
  public function setWebhook($webhook)
  {
    $this->webhook = $webhook;
  }
  /** @return string */
  public function getWebhook()
  {
    return $this->webhook;
  }
}

class GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCase[] */
  public $cases;
  protected $collection_key = 'cases';
  protected $casesType = GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCase::class;
  protected $casesDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCase[] */
  public function setCases($cases)
  {
    $this->cases = $cases;
  }
  /** @return GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCase[] */
  public function getCases()
  {
    return $this->cases;
  }
}

class GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCase extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCaseCaseContent[] */
  public $caseContent;
  /** @var string */
  public $condition;
  protected $collection_key = 'caseContent';
  protected $caseContentType = GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCaseCaseContent::class;
  protected $caseContentDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCaseCaseContent[] */
  public function setCaseContent($caseContent)
  {
    $this->caseContent = $caseContent;
  }
  /** @return GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCaseCaseContent[] */
  public function getCaseContent()
  {
    return $this->caseContent;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
}

class GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCaseCaseContent extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases */
  public $additionalCases;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessage */
  public $message;
  protected $additionalCasesType = GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases::class;
  protected $additionalCasesDataType = '';
  protected $messageType = GoogleCloudDialogflowCxV3beta1ResponseMessage::class;
  protected $messageDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases */
  public function setAdditionalCases(GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases $additionalCases)
  {
    $this->additionalCases = $additionalCases;
  }
  /** @return GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases */
  public function getAdditionalCases()
  {
    return $this->additionalCases;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessage */
  public function setMessage(GoogleCloudDialogflowCxV3beta1ResponseMessage $message)
  {
    $this->message = $message;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessage */
  public function getMessage()
  {
    return $this->message;
  }
}

class GoogleCloudDialogflowCxV3beta1FulfillmentSetParameterAction extends \Google\Model
{
  /** @var string */
  public $parameter;
  /** @var array */
  public $value;

  /** @param string */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return string */
  public function getParameter()
  {
    return $this->parameter;
  }
  /** @param array */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata extends \Google\Model
{
  /** @var string */
  public $state;

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

class GoogleCloudDialogflowCxV3beta1ImportDocumentsOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowCxV3beta1ImportDocumentsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $warningsType = GoogleRpcStatus::class;
  protected $warningsDataType = 'array';
  /** @param GoogleRpcStatus[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return GoogleRpcStatus[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class GoogleCloudDialogflowCxV3beta1ImportFlowResponse extends \Google\Model
{
  /** @var string */
  public $flow;

  /** @param string */
  public function setFlow($flow)
  {
    $this->flow = $flow;
  }
  /** @return string */
  public function getFlow()
  {
    return $this->flow;
  }
}

class GoogleCloudDialogflowCxV3beta1ImportTestCasesMetadata extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1TestCaseError[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $errorsType = GoogleCloudDialogflowCxV3beta1TestCaseError::class;
  protected $errorsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1TestCaseError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TestCaseError[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class GoogleCloudDialogflowCxV3beta1ImportTestCasesResponse extends \Google\Collection
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

class GoogleCloudDialogflowCxV3beta1InputAudioConfig extends \Google\Collection
{
  /** @var string */
  public $audioEncoding;
  /** @var bool */
  public $enableWordInfo;
  /** @var string */
  public $model;
  /** @var string */
  public $modelVariant;
  /** @var string[] */
  public $phraseHints;
  /** @var int */
  public $sampleRateHertz;
  /** @var bool */
  public $singleUtterance;
  protected $collection_key = 'phraseHints';
  /** @param string */
  public function setAudioEncoding($audioEncoding)
  {
    $this->audioEncoding = $audioEncoding;
  }
  /** @return string */
  public function getAudioEncoding()
  {
    return $this->audioEncoding;
  }
  /** @param bool */
  public function setEnableWordInfo($enableWordInfo)
  {
    $this->enableWordInfo = $enableWordInfo;
  }
  /** @return bool */
  public function getEnableWordInfo()
  {
    return $this->enableWordInfo;
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
  public function setModelVariant($modelVariant)
  {
    $this->modelVariant = $modelVariant;
  }
  /** @return string */
  public function getModelVariant()
  {
    return $this->modelVariant;
  }
  /** @param string[] */
  public function setPhraseHints($phraseHints)
  {
    $this->phraseHints = $phraseHints;
  }
  /** @return string[] */
  public function getPhraseHints()
  {
    return $this->phraseHints;
  }
  /** @param int */
  public function setSampleRateHertz($sampleRateHertz)
  {
    $this->sampleRateHertz = $sampleRateHertz;
  }
  /** @return int */
  public function getSampleRateHertz()
  {
    return $this->sampleRateHertz;
  }
  /** @param bool */
  public function setSingleUtterance($singleUtterance)
  {
    $this->singleUtterance = $singleUtterance;
  }
  /** @return bool */
  public function getSingleUtterance()
  {
    return $this->singleUtterance;
  }
}

class GoogleCloudDialogflowCxV3beta1Intent extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $isFallback;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3beta1IntentParameter[] */
  public $parameters;
  /** @var int */
  public $priority;
  /** @var GoogleCloudDialogflowCxV3beta1IntentTrainingPhrase[] */
  public $trainingPhrases;
  protected $collection_key = 'trainingPhrases';
  protected $parametersType = GoogleCloudDialogflowCxV3beta1IntentParameter::class;
  protected $parametersDataType = 'array';
  protected $trainingPhrasesType = GoogleCloudDialogflowCxV3beta1IntentTrainingPhrase::class;
  protected $trainingPhrasesDataType = 'array';
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
  /** @param bool */
  public function setIsFallback($isFallback)
  {
    $this->isFallback = $isFallback;
  }
  /** @return bool */
  public function getIsFallback()
  {
    return $this->isFallback;
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
  /** @param GoogleCloudDialogflowCxV3beta1IntentParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudDialogflowCxV3beta1IntentParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param int */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return int */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param GoogleCloudDialogflowCxV3beta1IntentTrainingPhrase[] */
  public function setTrainingPhrases($trainingPhrases)
  {
    $this->trainingPhrases = $trainingPhrases;
  }
  /** @return GoogleCloudDialogflowCxV3beta1IntentTrainingPhrase[] */
  public function getTrainingPhrases()
  {
    return $this->trainingPhrases;
  }
}

class GoogleCloudDialogflowCxV3beta1IntentInput extends \Google\Model
{
  /** @var string */
  public $intent;

  /** @param string */
  public function setIntent($intent)
  {
    $this->intent = $intent;
  }
  /** @return string */
  public function getIntent()
  {
    return $this->intent;
  }
}

class GoogleCloudDialogflowCxV3beta1IntentParameter extends \Google\Model
{
  /** @var string */
  public $entityType;
  /** @var string */
  public $id;
  /** @var bool */
  public $isList;
  /** @var bool */
  public $redact;

  /** @param string */
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /** @return string */
  public function getEntityType()
  {
    return $this->entityType;
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
  public function setIsList($isList)
  {
    $this->isList = $isList;
  }
  /** @return bool */
  public function getIsList()
  {
    return $this->isList;
  }
  /** @param bool */
  public function setRedact($redact)
  {
    $this->redact = $redact;
  }
  /** @return bool */
  public function getRedact()
  {
    return $this->redact;
  }
}

class GoogleCloudDialogflowCxV3beta1IntentTrainingPhrase extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var GoogleCloudDialogflowCxV3beta1IntentTrainingPhrasePart[] */
  public $parts;
  /** @var int */
  public $repeatCount;
  protected $collection_key = 'parts';
  protected $partsType = GoogleCloudDialogflowCxV3beta1IntentTrainingPhrasePart::class;
  protected $partsDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3beta1IntentTrainingPhrasePart[] */
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  /** @return GoogleCloudDialogflowCxV3beta1IntentTrainingPhrasePart[] */
  public function getParts()
  {
    return $this->parts;
  }
  /** @param int */
  public function setRepeatCount($repeatCount)
  {
    $this->repeatCount = $repeatCount;
  }
  /** @return int */
  public function getRepeatCount()
  {
    return $this->repeatCount;
  }
}

class GoogleCloudDialogflowCxV3beta1IntentTrainingPhrasePart extends \Google\Model
{
  /** @var string */
  public $parameterId;
  /** @var string */
  public $text;

  /** @param string */
  public function setParameterId($parameterId)
  {
    $this->parameterId = $parameterId;
  }
  /** @return string */
  public function getParameterId()
  {
    return $this->parameterId;
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

class GoogleCloudDialogflowCxV3beta1Page extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDialogflowCxV3beta1Fulfillment */
  public $entryFulfillment;
  /** @var GoogleCloudDialogflowCxV3beta1EventHandler[] */
  public $eventHandlers;
  /** @var GoogleCloudDialogflowCxV3beta1Form */
  public $form;
  /** @var string */
  public $name;
  /** @var string[] */
  public $transitionRouteGroups;
  /** @var GoogleCloudDialogflowCxV3beta1TransitionRoute[] */
  public $transitionRoutes;
  protected $collection_key = 'transitionRoutes';
  protected $entryFulfillmentType = GoogleCloudDialogflowCxV3beta1Fulfillment::class;
  protected $entryFulfillmentDataType = '';
  protected $eventHandlersType = GoogleCloudDialogflowCxV3beta1EventHandler::class;
  protected $eventHandlersDataType = 'array';
  protected $formType = GoogleCloudDialogflowCxV3beta1Form::class;
  protected $formDataType = '';
  protected $transitionRoutesType = GoogleCloudDialogflowCxV3beta1TransitionRoute::class;
  protected $transitionRoutesDataType = 'array';
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
  /** @param GoogleCloudDialogflowCxV3beta1Fulfillment */
  public function setEntryFulfillment(GoogleCloudDialogflowCxV3beta1Fulfillment $entryFulfillment)
  {
    $this->entryFulfillment = $entryFulfillment;
  }
  /** @return GoogleCloudDialogflowCxV3beta1Fulfillment */
  public function getEntryFulfillment()
  {
    return $this->entryFulfillment;
  }
  /** @param GoogleCloudDialogflowCxV3beta1EventHandler[] */
  public function setEventHandlers($eventHandlers)
  {
    $this->eventHandlers = $eventHandlers;
  }
  /** @return GoogleCloudDialogflowCxV3beta1EventHandler[] */
  public function getEventHandlers()
  {
    return $this->eventHandlers;
  }
  /** @param GoogleCloudDialogflowCxV3beta1Form */
  public function setForm(GoogleCloudDialogflowCxV3beta1Form $form)
  {
    $this->form = $form;
  }
  /** @return GoogleCloudDialogflowCxV3beta1Form */
  public function getForm()
  {
    return $this->form;
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
  public function setTransitionRouteGroups($transitionRouteGroups)
  {
    $this->transitionRouteGroups = $transitionRouteGroups;
  }
  /** @return string[] */
  public function getTransitionRouteGroups()
  {
    return $this->transitionRouteGroups;
  }
  /** @param GoogleCloudDialogflowCxV3beta1TransitionRoute[] */
  public function setTransitionRoutes($transitionRoutes)
  {
    $this->transitionRoutes = $transitionRoutes;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TransitionRoute[] */
  public function getTransitionRoutes()
  {
    return $this->transitionRoutes;
  }
}

class GoogleCloudDialogflowCxV3beta1PageInfo extends \Google\Model
{
  /** @var string */
  public $currentPage;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDialogflowCxV3beta1PageInfoFormInfo */
  public $formInfo;
  protected $formInfoType = GoogleCloudDialogflowCxV3beta1PageInfoFormInfo::class;
  protected $formInfoDataType = '';
  /** @param string */
  public function setCurrentPage($currentPage)
  {
    $this->currentPage = $currentPage;
  }
  /** @return string */
  public function getCurrentPage()
  {
    return $this->currentPage;
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
  /** @param GoogleCloudDialogflowCxV3beta1PageInfoFormInfo */
  public function setFormInfo(GoogleCloudDialogflowCxV3beta1PageInfoFormInfo $formInfo)
  {
    $this->formInfo = $formInfo;
  }
  /** @return GoogleCloudDialogflowCxV3beta1PageInfoFormInfo */
  public function getFormInfo()
  {
    return $this->formInfo;
  }
}

class GoogleCloudDialogflowCxV3beta1PageInfoFormInfo extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1PageInfoFormInfoParameterInfo[] */
  public $parameterInfo;
  protected $collection_key = 'parameterInfo';
  protected $parameterInfoType = GoogleCloudDialogflowCxV3beta1PageInfoFormInfoParameterInfo::class;
  protected $parameterInfoDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1PageInfoFormInfoParameterInfo[] */
  public function setParameterInfo($parameterInfo)
  {
    $this->parameterInfo = $parameterInfo;
  }
  /** @return GoogleCloudDialogflowCxV3beta1PageInfoFormInfoParameterInfo[] */
  public function getParameterInfo()
  {
    return $this->parameterInfo;
  }
}

class GoogleCloudDialogflowCxV3beta1PageInfoFormInfoParameterInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var bool */
  public $justCollected;
  /** @var bool */
  public $required;
  /** @var string */
  public $state;
  /** @var array */
  public $value;

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
  public function setJustCollected($justCollected)
  {
    $this->justCollected = $justCollected;
  }
  /** @return bool */
  public function getJustCollected()
  {
    return $this->justCollected;
  }
  /** @param bool */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /** @return bool */
  public function getRequired()
  {
    return $this->required;
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
  /** @param array */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleCloudDialogflowCxV3beta1QueryInput extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1AudioInput */
  public $audio;
  /** @var GoogleCloudDialogflowCxV3beta1DtmfInput */
  public $dtmf;
  /** @var GoogleCloudDialogflowCxV3beta1EventInput */
  public $event;
  /** @var GoogleCloudDialogflowCxV3beta1IntentInput */
  public $intent;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudDialogflowCxV3beta1TextInput */
  public $text;
  protected $audioType = GoogleCloudDialogflowCxV3beta1AudioInput::class;
  protected $audioDataType = '';
  protected $dtmfType = GoogleCloudDialogflowCxV3beta1DtmfInput::class;
  protected $dtmfDataType = '';
  protected $eventType = GoogleCloudDialogflowCxV3beta1EventInput::class;
  protected $eventDataType = '';
  protected $intentType = GoogleCloudDialogflowCxV3beta1IntentInput::class;
  protected $intentDataType = '';
  protected $textType = GoogleCloudDialogflowCxV3beta1TextInput::class;
  protected $textDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1AudioInput */
  public function setAudio(GoogleCloudDialogflowCxV3beta1AudioInput $audio)
  {
    $this->audio = $audio;
  }
  /** @return GoogleCloudDialogflowCxV3beta1AudioInput */
  public function getAudio()
  {
    return $this->audio;
  }
  /** @param GoogleCloudDialogflowCxV3beta1DtmfInput */
  public function setDtmf(GoogleCloudDialogflowCxV3beta1DtmfInput $dtmf)
  {
    $this->dtmf = $dtmf;
  }
  /** @return GoogleCloudDialogflowCxV3beta1DtmfInput */
  public function getDtmf()
  {
    return $this->dtmf;
  }
  /** @param GoogleCloudDialogflowCxV3beta1EventInput */
  public function setEvent(GoogleCloudDialogflowCxV3beta1EventInput $event)
  {
    $this->event = $event;
  }
  /** @return GoogleCloudDialogflowCxV3beta1EventInput */
  public function getEvent()
  {
    return $this->event;
  }
  /** @param GoogleCloudDialogflowCxV3beta1IntentInput */
  public function setIntent(GoogleCloudDialogflowCxV3beta1IntentInput $intent)
  {
    $this->intent = $intent;
  }
  /** @return GoogleCloudDialogflowCxV3beta1IntentInput */
  public function getIntent()
  {
    return $this->intent;
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
  /** @param GoogleCloudDialogflowCxV3beta1TextInput */
  public function setText(GoogleCloudDialogflowCxV3beta1TextInput $text)
  {
    $this->text = $text;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TextInput */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDialogflowCxV3beta1ReloadDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowCxV3beta1ResponseMessage extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessageConversationSuccess */
  public $conversationSuccess;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessageEndInteraction */
  public $endInteraction;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessageLiveAgentHandoff */
  public $liveAgentHandoff;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudio */
  public $mixedAudio;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessageOutputAudioText */
  public $outputAudioText;
  /** @var array[] */
  public $payload;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio */
  public $playAudio;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessageTelephonyTransferCall */
  public $telephonyTransferCall;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessageText */
  public $text;
  protected $conversationSuccessType = GoogleCloudDialogflowCxV3beta1ResponseMessageConversationSuccess::class;
  protected $conversationSuccessDataType = '';
  protected $endInteractionType = GoogleCloudDialogflowCxV3beta1ResponseMessageEndInteraction::class;
  protected $endInteractionDataType = '';
  protected $liveAgentHandoffType = GoogleCloudDialogflowCxV3beta1ResponseMessageLiveAgentHandoff::class;
  protected $liveAgentHandoffDataType = '';
  protected $mixedAudioType = GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudio::class;
  protected $mixedAudioDataType = '';
  protected $outputAudioTextType = GoogleCloudDialogflowCxV3beta1ResponseMessageOutputAudioText::class;
  protected $outputAudioTextDataType = '';
  protected $playAudioType = GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio::class;
  protected $playAudioDataType = '';
  protected $telephonyTransferCallType = GoogleCloudDialogflowCxV3beta1ResponseMessageTelephonyTransferCall::class;
  protected $telephonyTransferCallDataType = '';
  protected $textType = GoogleCloudDialogflowCxV3beta1ResponseMessageText::class;
  protected $textDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessageConversationSuccess */
  public function setConversationSuccess(GoogleCloudDialogflowCxV3beta1ResponseMessageConversationSuccess $conversationSuccess)
  {
    $this->conversationSuccess = $conversationSuccess;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessageConversationSuccess */
  public function getConversationSuccess()
  {
    return $this->conversationSuccess;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessageEndInteraction */
  public function setEndInteraction(GoogleCloudDialogflowCxV3beta1ResponseMessageEndInteraction $endInteraction)
  {
    $this->endInteraction = $endInteraction;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessageEndInteraction */
  public function getEndInteraction()
  {
    return $this->endInteraction;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessageLiveAgentHandoff */
  public function setLiveAgentHandoff(GoogleCloudDialogflowCxV3beta1ResponseMessageLiveAgentHandoff $liveAgentHandoff)
  {
    $this->liveAgentHandoff = $liveAgentHandoff;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessageLiveAgentHandoff */
  public function getLiveAgentHandoff()
  {
    return $this->liveAgentHandoff;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudio */
  public function setMixedAudio(GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudio $mixedAudio)
  {
    $this->mixedAudio = $mixedAudio;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudio */
  public function getMixedAudio()
  {
    return $this->mixedAudio;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessageOutputAudioText */
  public function setOutputAudioText(GoogleCloudDialogflowCxV3beta1ResponseMessageOutputAudioText $outputAudioText)
  {
    $this->outputAudioText = $outputAudioText;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessageOutputAudioText */
  public function getOutputAudioText()
  {
    return $this->outputAudioText;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio */
  public function setPlayAudio(GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio $playAudio)
  {
    $this->playAudio = $playAudio;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio */
  public function getPlayAudio()
  {
    return $this->playAudio;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessageTelephonyTransferCall */
  public function setTelephonyTransferCall(GoogleCloudDialogflowCxV3beta1ResponseMessageTelephonyTransferCall $telephonyTransferCall)
  {
    $this->telephonyTransferCall = $telephonyTransferCall;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessageTelephonyTransferCall */
  public function getTelephonyTransferCall()
  {
    return $this->telephonyTransferCall;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessageText */
  public function setText(GoogleCloudDialogflowCxV3beta1ResponseMessageText $text)
  {
    $this->text = $text;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessageText */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDialogflowCxV3beta1ResponseMessageConversationSuccess extends \Google\Model
{
  /** @var array[] */
  public $metadata;

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
}

class GoogleCloudDialogflowCxV3beta1ResponseMessageEndInteraction extends \Google\Model
{
}

class GoogleCloudDialogflowCxV3beta1ResponseMessageLiveAgentHandoff extends \Google\Model
{
  /** @var array[] */
  public $metadata;

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
}

class GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudio extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudioSegment[] */
  public $segments;
  protected $collection_key = 'segments';
  protected $segmentsType = GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudioSegment::class;
  protected $segmentsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudioSegment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudioSegment[] */
  public function getSegments()
  {
    return $this->segments;
  }
}

class GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudioSegment extends \Google\Model
{
  /** @var bool */
  public $allowPlaybackInterruption;
  /** @var string */
  public $audio;
  /** @var string */
  public $uri;

  /** @param bool */
  public function setAllowPlaybackInterruption($allowPlaybackInterruption)
  {
    $this->allowPlaybackInterruption = $allowPlaybackInterruption;
  }
  /** @return bool */
  public function getAllowPlaybackInterruption()
  {
    return $this->allowPlaybackInterruption;
  }
  /** @param string */
  public function setAudio($audio)
  {
    $this->audio = $audio;
  }
  /** @return string */
  public function getAudio()
  {
    return $this->audio;
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

class GoogleCloudDialogflowCxV3beta1ResponseMessageOutputAudioText extends \Google\Model
{
  /** @var bool */
  public $allowPlaybackInterruption;
  /** @var string */
  public $ssml;
  /** @var string */
  public $text;

  /** @param bool */
  public function setAllowPlaybackInterruption($allowPlaybackInterruption)
  {
    $this->allowPlaybackInterruption = $allowPlaybackInterruption;
  }
  /** @return bool */
  public function getAllowPlaybackInterruption()
  {
    return $this->allowPlaybackInterruption;
  }
  /** @param string */
  public function setSsml($ssml)
  {
    $this->ssml = $ssml;
  }
  /** @return string */
  public function getSsml()
  {
    return $this->ssml;
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

class GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio extends \Google\Model
{
  /** @var bool */
  public $allowPlaybackInterruption;
  /** @var string */
  public $audioUri;

  /** @param bool */
  public function setAllowPlaybackInterruption($allowPlaybackInterruption)
  {
    $this->allowPlaybackInterruption = $allowPlaybackInterruption;
  }
  /** @return bool */
  public function getAllowPlaybackInterruption()
  {
    return $this->allowPlaybackInterruption;
  }
  /** @param string */
  public function setAudioUri($audioUri)
  {
    $this->audioUri = $audioUri;
  }
  /** @return string */
  public function getAudioUri()
  {
    return $this->audioUri;
  }
}

class GoogleCloudDialogflowCxV3beta1ResponseMessageTelephonyTransferCall extends \Google\Model
{
  /** @var string */
  public $phoneNumber;

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

class GoogleCloudDialogflowCxV3beta1ResponseMessageText extends \Google\Collection
{
  /** @var bool */
  public $allowPlaybackInterruption;
  /** @var string[] */
  public $text;
  protected $collection_key = 'text';
  /** @param bool */
  public function setAllowPlaybackInterruption($allowPlaybackInterruption)
  {
    $this->allowPlaybackInterruption = $allowPlaybackInterruption;
  }
  /** @return bool */
  public function getAllowPlaybackInterruption()
  {
    return $this->allowPlaybackInterruption;
  }
  /** @param string[] */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string[] */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDialogflowCxV3beta1RunContinuousTestMetadata extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1TestError[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $errorsType = GoogleCloudDialogflowCxV3beta1TestError::class;
  protected $errorsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1TestError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TestError[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class GoogleCloudDialogflowCxV3beta1RunContinuousTestResponse extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1ContinuousTestResult */
  public $continuousTestResult;
  protected $continuousTestResultType = GoogleCloudDialogflowCxV3beta1ContinuousTestResult::class;
  protected $continuousTestResultDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1ContinuousTestResult */
  public function setContinuousTestResult(GoogleCloudDialogflowCxV3beta1ContinuousTestResult $continuousTestResult)
  {
    $this->continuousTestResult = $continuousTestResult;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ContinuousTestResult */
  public function getContinuousTestResult()
  {
    return $this->continuousTestResult;
  }
}

class GoogleCloudDialogflowCxV3beta1RunTestCaseMetadata extends \Google\Model
{
}

class GoogleCloudDialogflowCxV3beta1RunTestCaseResponse extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1TestCaseResult */
  public $result;
  protected $resultType = GoogleCloudDialogflowCxV3beta1TestCaseResult::class;
  protected $resultDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1TestCaseResult */
  public function setResult(GoogleCloudDialogflowCxV3beta1TestCaseResult $result)
  {
    $this->result = $result;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TestCaseResult */
  public function getResult()
  {
    return $this->result;
  }
}

class GoogleCloudDialogflowCxV3beta1SessionInfo extends \Google\Model
{
  /** @var array[] */
  public $parameters;
  /** @var string */
  public $session;

  /** @param array[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setSession($session)
  {
    $this->session = $session;
  }
  /** @return string */
  public function getSession()
  {
    return $this->session;
  }
}

class GoogleCloudDialogflowCxV3beta1TestCase extends \Google\Collection
{
  /** @var string */
  public $creationTime;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDialogflowCxV3beta1TestCaseResult */
  public $lastTestResult;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var string[] */
  public $tags;
  /** @var GoogleCloudDialogflowCxV3beta1ConversationTurn[] */
  public $testCaseConversationTurns;
  /** @var GoogleCloudDialogflowCxV3beta1TestConfig */
  public $testConfig;
  protected $collection_key = 'testCaseConversationTurns';
  protected $lastTestResultType = GoogleCloudDialogflowCxV3beta1TestCaseResult::class;
  protected $lastTestResultDataType = '';
  protected $testCaseConversationTurnsType = GoogleCloudDialogflowCxV3beta1ConversationTurn::class;
  protected $testCaseConversationTurnsDataType = 'array';
  protected $testConfigType = GoogleCloudDialogflowCxV3beta1TestConfig::class;
  protected $testConfigDataType = '';
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
  /** @param GoogleCloudDialogflowCxV3beta1TestCaseResult */
  public function setLastTestResult(GoogleCloudDialogflowCxV3beta1TestCaseResult $lastTestResult)
  {
    $this->lastTestResult = $lastTestResult;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TestCaseResult */
  public function getLastTestResult()
  {
    return $this->lastTestResult;
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
  /** @param GoogleCloudDialogflowCxV3beta1ConversationTurn[] */
  public function setTestCaseConversationTurns($testCaseConversationTurns)
  {
    $this->testCaseConversationTurns = $testCaseConversationTurns;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ConversationTurn[] */
  public function getTestCaseConversationTurns()
  {
    return $this->testCaseConversationTurns;
  }
  /** @param GoogleCloudDialogflowCxV3beta1TestConfig */
  public function setTestConfig(GoogleCloudDialogflowCxV3beta1TestConfig $testConfig)
  {
    $this->testConfig = $testConfig;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TestConfig */
  public function getTestConfig()
  {
    return $this->testConfig;
  }
}

class GoogleCloudDialogflowCxV3beta1TestCaseError extends \Google\Model
{
  /** @var GoogleRpcStatus */
  public $status;
  /** @var GoogleCloudDialogflowCxV3beta1TestCase */
  public $testCase;
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  protected $testCaseType = GoogleCloudDialogflowCxV3beta1TestCase::class;
  protected $testCaseDataType = '';
  /** @param GoogleRpcStatus */
  public function setStatus(GoogleRpcStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleRpcStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param GoogleCloudDialogflowCxV3beta1TestCase */
  public function setTestCase(GoogleCloudDialogflowCxV3beta1TestCase $testCase)
  {
    $this->testCase = $testCase;
  }
  /** @return GoogleCloudDialogflowCxV3beta1TestCase */
  public function getTestCase()
  {
    return $this->testCase;
  }
}

class GoogleCloudDialogflowCxV3beta1TestCaseResult extends \Google\Collection
{
  /** @var GoogleCloudDialogflowCxV3beta1ConversationTurn[] */
  public $conversationTurns;
  /** @var string */
  public $environment;
  /** @var string */
  public $name;
  /** @var string */
  public $testResult;
  /** @var string */
  public $testTime;
  protected $collection_key = 'conversationTurns';
  protected $conversationTurnsType = GoogleCloudDialogflowCxV3beta1ConversationTurn::class;
  protected $conversationTurnsDataType = 'array';
  /** @param GoogleCloudDialogflowCxV3beta1ConversationTurn[] */
  public function setConversationTurns($conversationTurns)
  {
    $this->conversationTurns = $conversationTurns;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ConversationTurn[] */
  public function getConversationTurns()
  {
    return $this->conversationTurns;
  }
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
  public function setTestResult($testResult)
  {
    $this->testResult = $testResult;
  }
  /** @return string */
  public function getTestResult()
  {
    return $this->testResult;
  }
  /** @param string */
  public function setTestTime($testTime)
  {
    $this->testTime = $testTime;
  }
  /** @return string */
  public function getTestTime()
  {
    return $this->testTime;
  }
}

class GoogleCloudDialogflowCxV3beta1TestConfig extends \Google\Collection
{
  /** @var string */
  public $flow;
  /** @var string */
  public $page;
  /** @var string[] */
  public $trackingParameters;
  protected $collection_key = 'trackingParameters';
  /** @param string */
  public function setFlow($flow)
  {
    $this->flow = $flow;
  }
  /** @return string */
  public function getFlow()
  {
    return $this->flow;
  }
  /** @param string */
  public function setPage($page)
  {
    $this->page = $page;
  }
  /** @return string */
  public function getPage()
  {
    return $this->page;
  }
  /** @param string[] */
  public function setTrackingParameters($trackingParameters)
  {
    $this->trackingParameters = $trackingParameters;
  }
  /** @return string[] */
  public function getTrackingParameters()
  {
    return $this->trackingParameters;
  }
}

class GoogleCloudDialogflowCxV3beta1TestError extends \Google\Model
{
  /** @var GoogleRpcStatus */
  public $status;
  /** @var string */
  public $testCase;
  /** @var string */
  public $testTime;
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param GoogleRpcStatus */
  public function setStatus(GoogleRpcStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleRpcStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setTestCase($testCase)
  {
    $this->testCase = $testCase;
  }
  /** @return string */
  public function getTestCase()
  {
    return $this->testCase;
  }
  /** @param string */
  public function setTestTime($testTime)
  {
    $this->testTime = $testTime;
  }
  /** @return string */
  public function getTestTime()
  {
    return $this->testTime;
  }
}

class GoogleCloudDialogflowCxV3beta1TestRunDifference extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $type;

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

class GoogleCloudDialogflowCxV3beta1TextInput extends \Google\Model
{
  /** @var string */
  public $text;

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

class GoogleCloudDialogflowCxV3beta1TransitionRoute extends \Google\Model
{
  /** @var string */
  public $condition;
  /** @var string */
  public $intent;
  /** @var string */
  public $name;
  /** @var string */
  public $targetFlow;
  /** @var string */
  public $targetPage;
  /** @var GoogleCloudDialogflowCxV3beta1Fulfillment */
  public $triggerFulfillment;
  protected $triggerFulfillmentType = GoogleCloudDialogflowCxV3beta1Fulfillment::class;
  protected $triggerFulfillmentDataType = '';
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string */
  public function setIntent($intent)
  {
    $this->intent = $intent;
  }
  /** @return string */
  public function getIntent()
  {
    return $this->intent;
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
  public function setTargetFlow($targetFlow)
  {
    $this->targetFlow = $targetFlow;
  }
  /** @return string */
  public function getTargetFlow()
  {
    return $this->targetFlow;
  }
  /** @param string */
  public function setTargetPage($targetPage)
  {
    $this->targetPage = $targetPage;
  }
  /** @return string */
  public function getTargetPage()
  {
    return $this->targetPage;
  }
  /** @param GoogleCloudDialogflowCxV3beta1Fulfillment */
  public function setTriggerFulfillment(GoogleCloudDialogflowCxV3beta1Fulfillment $triggerFulfillment)
  {
    $this->triggerFulfillment = $triggerFulfillment;
  }
  /** @return GoogleCloudDialogflowCxV3beta1Fulfillment */
  public function getTriggerFulfillment()
  {
    return $this->triggerFulfillment;
  }
}

class GoogleCloudDialogflowCxV3beta1UpdateDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowCxV3beta1Webhook extends \Google\Model
{
  /** @var bool */
  public $disabled;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudDialogflowCxV3beta1WebhookGenericWebService */
  public $genericWebService;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowCxV3beta1WebhookServiceDirectoryConfig */
  public $serviceDirectory;
  /** @var string */
  public $timeout;
  protected $genericWebServiceType = GoogleCloudDialogflowCxV3beta1WebhookGenericWebService::class;
  protected $genericWebServiceDataType = '';
  protected $serviceDirectoryType = GoogleCloudDialogflowCxV3beta1WebhookServiceDirectoryConfig::class;
  protected $serviceDirectoryDataType = '';
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
  /** @param GoogleCloudDialogflowCxV3beta1WebhookGenericWebService */
  public function setGenericWebService(GoogleCloudDialogflowCxV3beta1WebhookGenericWebService $genericWebService)
  {
    $this->genericWebService = $genericWebService;
  }
  /** @return GoogleCloudDialogflowCxV3beta1WebhookGenericWebService */
  public function getGenericWebService()
  {
    return $this->genericWebService;
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
  /** @param GoogleCloudDialogflowCxV3beta1WebhookServiceDirectoryConfig */
  public function setServiceDirectory(GoogleCloudDialogflowCxV3beta1WebhookServiceDirectoryConfig $serviceDirectory)
  {
    $this->serviceDirectory = $serviceDirectory;
  }
  /** @return GoogleCloudDialogflowCxV3beta1WebhookServiceDirectoryConfig */
  public function getServiceDirectory()
  {
    return $this->serviceDirectory;
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

class GoogleCloudDialogflowCxV3beta1WebhookGenericWebService extends \Google\Collection
{
  /** @var string[] */
  public $allowedCaCerts;
  /** @var string */
  public $password;
  /** @var string[] */
  public $requestHeaders;
  /** @var string */
  public $uri;
  /** @var string */
  public $username;
  protected $collection_key = 'allowedCaCerts';
  /** @param string[] */
  public function setAllowedCaCerts($allowedCaCerts)
  {
    $this->allowedCaCerts = $allowedCaCerts;
  }
  /** @return string[] */
  public function getAllowedCaCerts()
  {
    return $this->allowedCaCerts;
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
  /** @param string[] */
  public function setRequestHeaders($requestHeaders)
  {
    $this->requestHeaders = $requestHeaders;
  }
  /** @return string[] */
  public function getRequestHeaders()
  {
    return $this->requestHeaders;
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

class GoogleCloudDialogflowCxV3beta1WebhookRequest extends \Google\Collection
{
  /** @var string */
  public $detectIntentResponseId;
  /** @var GoogleCloudDialogflowCxV3beta1WebhookRequestFulfillmentInfo */
  public $fulfillmentInfo;
  /** @var GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfo */
  public $intentInfo;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessage[] */
  public $messages;
  /** @var GoogleCloudDialogflowCxV3beta1PageInfo */
  public $pageInfo;
  /** @var array[] */
  public $payload;
  /** @var GoogleCloudDialogflowCxV3beta1WebhookRequestSentimentAnalysisResult */
  public $sentimentAnalysisResult;
  /** @var GoogleCloudDialogflowCxV3beta1SessionInfo */
  public $sessionInfo;
  /** @var string */
  public $text;
  /** @var string */
  public $transcript;
  /** @var string */
  public $triggerEvent;
  /** @var string */
  public $triggerIntent;
  protected $collection_key = 'messages';
  protected $fulfillmentInfoType = GoogleCloudDialogflowCxV3beta1WebhookRequestFulfillmentInfo::class;
  protected $fulfillmentInfoDataType = '';
  protected $intentInfoType = GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfo::class;
  protected $intentInfoDataType = '';
  protected $messagesType = GoogleCloudDialogflowCxV3beta1ResponseMessage::class;
  protected $messagesDataType = 'array';
  protected $pageInfoType = GoogleCloudDialogflowCxV3beta1PageInfo::class;
  protected $pageInfoDataType = '';
  protected $sentimentAnalysisResultType = GoogleCloudDialogflowCxV3beta1WebhookRequestSentimentAnalysisResult::class;
  protected $sentimentAnalysisResultDataType = '';
  protected $sessionInfoType = GoogleCloudDialogflowCxV3beta1SessionInfo::class;
  protected $sessionInfoDataType = '';
  /** @param string */
  public function setDetectIntentResponseId($detectIntentResponseId)
  {
    $this->detectIntentResponseId = $detectIntentResponseId;
  }
  /** @return string */
  public function getDetectIntentResponseId()
  {
    return $this->detectIntentResponseId;
  }
  /** @param GoogleCloudDialogflowCxV3beta1WebhookRequestFulfillmentInfo */
  public function setFulfillmentInfo(GoogleCloudDialogflowCxV3beta1WebhookRequestFulfillmentInfo $fulfillmentInfo)
  {
    $this->fulfillmentInfo = $fulfillmentInfo;
  }
  /** @return GoogleCloudDialogflowCxV3beta1WebhookRequestFulfillmentInfo */
  public function getFulfillmentInfo()
  {
    return $this->fulfillmentInfo;
  }
  /** @param GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfo */
  public function setIntentInfo(GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfo $intentInfo)
  {
    $this->intentInfo = $intentInfo;
  }
  /** @return GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfo */
  public function getIntentInfo()
  {
    return $this->intentInfo;
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
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessage[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessage[] */
  public function getMessages()
  {
    return $this->messages;
  }
  /** @param GoogleCloudDialogflowCxV3beta1PageInfo */
  public function setPageInfo(GoogleCloudDialogflowCxV3beta1PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return GoogleCloudDialogflowCxV3beta1PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param GoogleCloudDialogflowCxV3beta1WebhookRequestSentimentAnalysisResult */
  public function setSentimentAnalysisResult(GoogleCloudDialogflowCxV3beta1WebhookRequestSentimentAnalysisResult $sentimentAnalysisResult)
  {
    $this->sentimentAnalysisResult = $sentimentAnalysisResult;
  }
  /** @return GoogleCloudDialogflowCxV3beta1WebhookRequestSentimentAnalysisResult */
  public function getSentimentAnalysisResult()
  {
    return $this->sentimentAnalysisResult;
  }
  /** @param GoogleCloudDialogflowCxV3beta1SessionInfo */
  public function setSessionInfo(GoogleCloudDialogflowCxV3beta1SessionInfo $sessionInfo)
  {
    $this->sessionInfo = $sessionInfo;
  }
  /** @return GoogleCloudDialogflowCxV3beta1SessionInfo */
  public function getSessionInfo()
  {
    return $this->sessionInfo;
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
  /** @param string */
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return string */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param string */
  public function setTriggerEvent($triggerEvent)
  {
    $this->triggerEvent = $triggerEvent;
  }
  /** @return string */
  public function getTriggerEvent()
  {
    return $this->triggerEvent;
  }
  /** @param string */
  public function setTriggerIntent($triggerIntent)
  {
    $this->triggerIntent = $triggerIntent;
  }
  /** @return string */
  public function getTriggerIntent()
  {
    return $this->triggerIntent;
  }
}

class GoogleCloudDialogflowCxV3beta1WebhookRequestFulfillmentInfo extends \Google\Model
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

class GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfo extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $displayName;
  /** @var string */
  public $lastMatchedIntent;
  /** @var GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfoIntentParameterValue[] */
  public $parameters;
  protected $parametersType = GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfoIntentParameterValue::class;
  protected $parametersDataType = 'map';
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  public function setLastMatchedIntent($lastMatchedIntent)
  {
    $this->lastMatchedIntent = $lastMatchedIntent;
  }
  /** @return string */
  public function getLastMatchedIntent()
  {
    return $this->lastMatchedIntent;
  }
  /** @param GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfoIntentParameterValue[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfoIntentParameterValue[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfoIntentParameterValue extends \Google\Model
{
  /** @var string */
  public $originalValue;
  /** @var array */
  public $resolvedValue;

  /** @param string */
  public function setOriginalValue($originalValue)
  {
    $this->originalValue = $originalValue;
  }
  /** @return string */
  public function getOriginalValue()
  {
    return $this->originalValue;
  }
  /** @param array */
  public function setResolvedValue($resolvedValue)
  {
    $this->resolvedValue = $resolvedValue;
  }
  /** @return array */
  public function getResolvedValue()
  {
    return $this->resolvedValue;
  }
}

class GoogleCloudDialogflowCxV3beta1WebhookRequestSentimentAnalysisResult extends \Google\Model
{
  /** @var float */
  public $magnitude;
  /** @var float */
  public $score;

  /** @param float */
  public function setMagnitude($magnitude)
  {
    $this->magnitude = $magnitude;
  }
  /** @return float */
  public function getMagnitude()
  {
    return $this->magnitude;
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

class GoogleCloudDialogflowCxV3beta1WebhookResponse extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1WebhookResponseFulfillmentResponse */
  public $fulfillmentResponse;
  /** @var GoogleCloudDialogflowCxV3beta1PageInfo */
  public $pageInfo;
  /** @var array[] */
  public $payload;
  /** @var GoogleCloudDialogflowCxV3beta1SessionInfo */
  public $sessionInfo;
  /** @var string */
  public $targetFlow;
  /** @var string */
  public $targetPage;
  protected $fulfillmentResponseType = GoogleCloudDialogflowCxV3beta1WebhookResponseFulfillmentResponse::class;
  protected $fulfillmentResponseDataType = '';
  protected $pageInfoType = GoogleCloudDialogflowCxV3beta1PageInfo::class;
  protected $pageInfoDataType = '';
  protected $sessionInfoType = GoogleCloudDialogflowCxV3beta1SessionInfo::class;
  protected $sessionInfoDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1WebhookResponseFulfillmentResponse */
  public function setFulfillmentResponse(GoogleCloudDialogflowCxV3beta1WebhookResponseFulfillmentResponse $fulfillmentResponse)
  {
    $this->fulfillmentResponse = $fulfillmentResponse;
  }
  /** @return GoogleCloudDialogflowCxV3beta1WebhookResponseFulfillmentResponse */
  public function getFulfillmentResponse()
  {
    return $this->fulfillmentResponse;
  }
  /** @param GoogleCloudDialogflowCxV3beta1PageInfo */
  public function setPageInfo(GoogleCloudDialogflowCxV3beta1PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return GoogleCloudDialogflowCxV3beta1PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param GoogleCloudDialogflowCxV3beta1SessionInfo */
  public function setSessionInfo(GoogleCloudDialogflowCxV3beta1SessionInfo $sessionInfo)
  {
    $this->sessionInfo = $sessionInfo;
  }
  /** @return GoogleCloudDialogflowCxV3beta1SessionInfo */
  public function getSessionInfo()
  {
    return $this->sessionInfo;
  }
  /** @param string */
  public function setTargetFlow($targetFlow)
  {
    $this->targetFlow = $targetFlow;
  }
  /** @return string */
  public function getTargetFlow()
  {
    return $this->targetFlow;
  }
  /** @param string */
  public function setTargetPage($targetPage)
  {
    $this->targetPage = $targetPage;
  }
  /** @return string */
  public function getTargetPage()
  {
    return $this->targetPage;
  }
}

class GoogleCloudDialogflowCxV3beta1WebhookResponseFulfillmentResponse extends \Google\Collection
{
  /** @var string */
  public $mergeBehavior;
  /** @var GoogleCloudDialogflowCxV3beta1ResponseMessage[] */
  public $messages;
  protected $collection_key = 'messages';
  protected $messagesType = GoogleCloudDialogflowCxV3beta1ResponseMessage::class;
  protected $messagesDataType = 'array';
  /** @param string */
  public function setMergeBehavior($mergeBehavior)
  {
    $this->mergeBehavior = $mergeBehavior;
  }
  /** @return string */
  public function getMergeBehavior()
  {
    return $this->mergeBehavior;
  }
  /** @param GoogleCloudDialogflowCxV3beta1ResponseMessage[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GoogleCloudDialogflowCxV3beta1ResponseMessage[] */
  public function getMessages()
  {
    return $this->messages;
  }
}

class GoogleCloudDialogflowCxV3beta1WebhookServiceDirectoryConfig extends \Google\Model
{
  /** @var GoogleCloudDialogflowCxV3beta1WebhookGenericWebService */
  public $genericWebService;
  /** @var string */
  public $service;
  protected $genericWebServiceType = GoogleCloudDialogflowCxV3beta1WebhookGenericWebService::class;
  protected $genericWebServiceDataType = '';
  /** @param GoogleCloudDialogflowCxV3beta1WebhookGenericWebService */
  public function setGenericWebService(GoogleCloudDialogflowCxV3beta1WebhookGenericWebService $genericWebService)
  {
    $this->genericWebService = $genericWebService;
  }
  /** @return GoogleCloudDialogflowCxV3beta1WebhookGenericWebService */
  public function getGenericWebService()
  {
    return $this->genericWebService;
  }
  /** @param string */
  public function setService($service)
  {
    $this->service = $service;
  }
  /** @return string */
  public function getService()
  {
    return $this->service;
  }
}

class GoogleCloudDialogflowV2AnnotatedMessagePart extends \Google\Model
{
  /** @var string */
  public $entityType;
  /** @var array */
  public $formattedValue;
  /** @var string */
  public $text;

  /** @param string */
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /** @return string */
  public function getEntityType()
  {
    return $this->entityType;
  }
  /** @param array */
  public function setFormattedValue($formattedValue)
  {
    $this->formattedValue = $formattedValue;
  }
  /** @return array */
  public function getFormattedValue()
  {
    return $this->formattedValue;
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

class GoogleCloudDialogflowV2ArticleAnswer extends \Google\Collection
{
  /** @var string */
  public $answerRecord;
  /** @var float */
  public $confidence;
  /** @var string[] */
  public $metadata;
  /** @var string[] */
  public $snippets;
  /** @var string */
  public $title;
  /** @var string */
  public $uri;
  protected $collection_key = 'snippets';
  /** @param string */
  public function setAnswerRecord($answerRecord)
  {
    $this->answerRecord = $answerRecord;
  }
  /** @return string */
  public function getAnswerRecord()
  {
    return $this->answerRecord;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string[] */
  public function setSnippets($snippets)
  {
    $this->snippets = $snippets;
  }
  /** @return string[] */
  public function getSnippets()
  {
    return $this->snippets;
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

class GoogleCloudDialogflowV2ArticleSuggestionModelMetadata extends \Google\Model
{
  /** @var string */
  public $trainingModelType;

  /** @param string */
  public function setTrainingModelType($trainingModelType)
  {
    $this->trainingModelType = $trainingModelType;
  }
  /** @return string */
  public function getTrainingModelType()
  {
    return $this->trainingModelType;
  }
}

class GoogleCloudDialogflowV2BatchUpdateEntityTypesResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2EntityType[] */
  public $entityTypes;
  protected $collection_key = 'entityTypes';
  protected $entityTypesType = GoogleCloudDialogflowV2EntityType::class;
  protected $entityTypesDataType = 'array';
  /** @param GoogleCloudDialogflowV2EntityType[] */
  public function setEntityTypes($entityTypes)
  {
    $this->entityTypes = $entityTypes;
  }
  /** @return GoogleCloudDialogflowV2EntityType[] */
  public function getEntityTypes()
  {
    return $this->entityTypes;
  }
}

class GoogleCloudDialogflowV2BatchUpdateIntentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2Intent[] */
  public $intents;
  protected $collection_key = 'intents';
  protected $intentsType = GoogleCloudDialogflowV2Intent::class;
  protected $intentsDataType = 'array';
  /** @param GoogleCloudDialogflowV2Intent[] */
  public function setIntents($intents)
  {
    $this->intents = $intents;
  }
  /** @return GoogleCloudDialogflowV2Intent[] */
  public function getIntents()
  {
    return $this->intents;
  }
}

class GoogleCloudDialogflowV2ClearSuggestionFeatureConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversationProfile;
  /** @var string */
  public $createTime;
  /** @var string */
  public $participantRole;
  /** @var string */
  public $suggestionFeatureType;

  /** @param string */
  public function setConversationProfile($conversationProfile)
  {
    $this->conversationProfile = $conversationProfile;
  }
  /** @return string */
  public function getConversationProfile()
  {
    return $this->conversationProfile;
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
  public function setParticipantRole($participantRole)
  {
    $this->participantRole = $participantRole;
  }
  /** @return string */
  public function getParticipantRole()
  {
    return $this->participantRole;
  }
  /** @param string */
  public function setSuggestionFeatureType($suggestionFeatureType)
  {
    $this->suggestionFeatureType = $suggestionFeatureType;
  }
  /** @return string */
  public function getSuggestionFeatureType()
  {
    return $this->suggestionFeatureType;
  }
}

class GoogleCloudDialogflowV2Context extends \Google\Model
{
  /** @var int */
  public $lifespanCount;
  /** @var string */
  public $name;
  /** @var array[] */
  public $parameters;

  /** @param int */
  public function setLifespanCount($lifespanCount)
  {
    $this->lifespanCount = $lifespanCount;
  }
  /** @return int */
  public function getLifespanCount()
  {
    return $this->lifespanCount;
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
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleCloudDialogflowV2ConversationEvent extends \Google\Model
{
  /** @var string */
  public $conversation;
  /** @var GoogleRpcStatus */
  public $errorStatus;
  /** @var GoogleCloudDialogflowV2Message */
  public $newMessagePayload;
  /** @var string */
  public $type;
  protected $errorStatusType = GoogleRpcStatus::class;
  protected $errorStatusDataType = '';
  protected $newMessagePayloadType = GoogleCloudDialogflowV2Message::class;
  protected $newMessagePayloadDataType = '';
  /** @param string */
  public function setConversation($conversation)
  {
    $this->conversation = $conversation;
  }
  /** @return string */
  public function getConversation()
  {
    return $this->conversation;
  }
  /** @param GoogleRpcStatus */
  public function setErrorStatus(GoogleRpcStatus $errorStatus)
  {
    $this->errorStatus = $errorStatus;
  }
  /** @return GoogleRpcStatus */
  public function getErrorStatus()
  {
    return $this->errorStatus;
  }
  /** @param GoogleCloudDialogflowV2Message */
  public function setNewMessagePayload(GoogleCloudDialogflowV2Message $newMessagePayload)
  {
    $this->newMessagePayload = $newMessagePayload;
  }
  /** @return GoogleCloudDialogflowV2Message */
  public function getNewMessagePayload()
  {
    return $this->newMessagePayload;
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

class GoogleCloudDialogflowV2ConversationModel extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2ArticleSuggestionModelMetadata */
  public $articleSuggestionModelMetadata;
  /** @var string */
  public $createTime;
  /** @var GoogleCloudDialogflowV2InputDataset[] */
  public $datasets;
  /** @var string */
  public $displayName;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowV2SmartReplyModelMetadata */
  public $smartReplyModelMetadata;
  /** @var string */
  public $state;
  protected $collection_key = 'datasets';
  protected $articleSuggestionModelMetadataType = GoogleCloudDialogflowV2ArticleSuggestionModelMetadata::class;
  protected $articleSuggestionModelMetadataDataType = '';
  protected $datasetsType = GoogleCloudDialogflowV2InputDataset::class;
  protected $datasetsDataType = 'array';
  protected $smartReplyModelMetadataType = GoogleCloudDialogflowV2SmartReplyModelMetadata::class;
  protected $smartReplyModelMetadataDataType = '';
  /** @param GoogleCloudDialogflowV2ArticleSuggestionModelMetadata */
  public function setArticleSuggestionModelMetadata(GoogleCloudDialogflowV2ArticleSuggestionModelMetadata $articleSuggestionModelMetadata)
  {
    $this->articleSuggestionModelMetadata = $articleSuggestionModelMetadata;
  }
  /** @return GoogleCloudDialogflowV2ArticleSuggestionModelMetadata */
  public function getArticleSuggestionModelMetadata()
  {
    return $this->articleSuggestionModelMetadata;
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
  /** @param GoogleCloudDialogflowV2InputDataset[] */
  public function setDatasets($datasets)
  {
    $this->datasets = $datasets;
  }
  /** @return GoogleCloudDialogflowV2InputDataset[] */
  public function getDatasets()
  {
    return $this->datasets;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param GoogleCloudDialogflowV2SmartReplyModelMetadata */
  public function setSmartReplyModelMetadata(GoogleCloudDialogflowV2SmartReplyModelMetadata $smartReplyModelMetadata)
  {
    $this->smartReplyModelMetadata = $smartReplyModelMetadata;
  }
  /** @return GoogleCloudDialogflowV2SmartReplyModelMetadata */
  public function getSmartReplyModelMetadata()
  {
    return $this->smartReplyModelMetadata;
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

class GoogleCloudDialogflowV2CreateConversationDatasetOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversationDataset;

  /** @param string */
  public function setConversationDataset($conversationDataset)
  {
    $this->conversationDataset = $conversationDataset;
  }
  /** @return string */
  public function getConversationDataset()
  {
    return $this->conversationDataset;
  }
}

class GoogleCloudDialogflowV2CreateConversationModelEvaluationOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversationModel;
  /** @var string */
  public $conversationModelEvaluation;
  /** @var string */
  public $createTime;
  /** @var string */
  public $state;

  /** @param string */
  public function setConversationModel($conversationModel)
  {
    $this->conversationModel = $conversationModel;
  }
  /** @return string */
  public function getConversationModel()
  {
    return $this->conversationModel;
  }
  /** @param string */
  public function setConversationModelEvaluation($conversationModelEvaluation)
  {
    $this->conversationModelEvaluation = $conversationModelEvaluation;
  }
  /** @return string */
  public function getConversationModelEvaluation()
  {
    return $this->conversationModelEvaluation;
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

class GoogleCloudDialogflowV2CreateConversationModelOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversationModel;
  /** @var string */
  public $createTime;
  /** @var string */
  public $state;

  /** @param string */
  public function setConversationModel($conversationModel)
  {
    $this->conversationModel = $conversationModel;
  }
  /** @return string */
  public function getConversationModel()
  {
    return $this->conversationModel;
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

class GoogleCloudDialogflowV2DeleteConversationDatasetOperationMetadata extends \Google\Model
{
}

class GoogleCloudDialogflowV2DeleteConversationModelOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversationModel;
  /** @var string */
  public $createTime;

  /** @param string */
  public function setConversationModel($conversationModel)
  {
    $this->conversationModel = $conversationModel;
  }
  /** @return string */
  public function getConversationModel()
  {
    return $this->conversationModel;
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
}

class GoogleCloudDialogflowV2DeployConversationModelOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversationModel;
  /** @var string */
  public $createTime;

  /** @param string */
  public function setConversationModel($conversationModel)
  {
    $this->conversationModel = $conversationModel;
  }
  /** @return string */
  public function getConversationModel()
  {
    return $this->conversationModel;
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
}

class GoogleCloudDialogflowV2EntityType extends \Google\Collection
{
  /** @var string */
  public $autoExpansionMode;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $enableFuzzyExtraction;
  /** @var GoogleCloudDialogflowV2EntityTypeEntity[] */
  public $entities;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  protected $collection_key = 'entities';
  protected $entitiesType = GoogleCloudDialogflowV2EntityTypeEntity::class;
  protected $entitiesDataType = 'array';
  /** @param string */
  public function setAutoExpansionMode($autoExpansionMode)
  {
    $this->autoExpansionMode = $autoExpansionMode;
  }
  /** @return string */
  public function getAutoExpansionMode()
  {
    return $this->autoExpansionMode;
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
  public function setEnableFuzzyExtraction($enableFuzzyExtraction)
  {
    $this->enableFuzzyExtraction = $enableFuzzyExtraction;
  }
  /** @return bool */
  public function getEnableFuzzyExtraction()
  {
    return $this->enableFuzzyExtraction;
  }
  /** @param GoogleCloudDialogflowV2EntityTypeEntity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudDialogflowV2EntityTypeEntity[] */
  public function getEntities()
  {
    return $this->entities;
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

class GoogleCloudDialogflowV2EntityTypeEntity extends \Google\Collection
{
  /** @var string[] */
  public $synonyms;
  /** @var string */
  public $value;
  protected $collection_key = 'synonyms';
  /** @param string[] */
  public function setSynonyms($synonyms)
  {
    $this->synonyms = $synonyms;
  }
  /** @return string[] */
  public function getSynonyms()
  {
    return $this->synonyms;
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

class GoogleCloudDialogflowV2EventInput extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $name;
  /** @var array[] */
  public $parameters;

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
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleCloudDialogflowV2ExportAgentResponse extends \Google\Model
{
  /** @var string */
  public $agentContent;
  /** @var string */
  public $agentUri;

  /** @param string */
  public function setAgentContent($agentContent)
  {
    $this->agentContent = $agentContent;
  }
  /** @return string */
  public function getAgentContent()
  {
    return $this->agentContent;
  }
  /** @param string */
  public function setAgentUri($agentUri)
  {
    $this->agentUri = $agentUri;
  }
  /** @return string */
  public function getAgentUri()
  {
    return $this->agentUri;
  }
}

class GoogleCloudDialogflowV2ExportOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2GcsDestination */
  public $exportedGcsDestination;
  protected $exportedGcsDestinationType = GoogleCloudDialogflowV2GcsDestination::class;
  protected $exportedGcsDestinationDataType = '';
  /** @param GoogleCloudDialogflowV2GcsDestination */
  public function setExportedGcsDestination(GoogleCloudDialogflowV2GcsDestination $exportedGcsDestination)
  {
    $this->exportedGcsDestination = $exportedGcsDestination;
  }
  /** @return GoogleCloudDialogflowV2GcsDestination */
  public function getExportedGcsDestination()
  {
    return $this->exportedGcsDestination;
  }
}

class GoogleCloudDialogflowV2FaqAnswer extends \Google\Model
{
  /** @var string */
  public $answer;
  /** @var string */
  public $answerRecord;
  /** @var float */
  public $confidence;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $question;
  /** @var string */
  public $source;

  /** @param string */
  public function setAnswer($answer)
  {
    $this->answer = $answer;
  }
  /** @return string */
  public function getAnswer()
  {
    return $this->answer;
  }
  /** @param string */
  public function setAnswerRecord($answerRecord)
  {
    $this->answerRecord = $answerRecord;
  }
  /** @return string */
  public function getAnswerRecord()
  {
    return $this->answerRecord;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setQuestion($question)
  {
    $this->question = $question;
  }
  /** @return string */
  public function getQuestion()
  {
    return $this->question;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
}

class GoogleCloudDialogflowV2GcsDestination extends \Google\Model
{
  /** @var string */
  public $uri;

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

class GoogleCloudDialogflowV2HumanAgentAssistantEvent extends \Google\Collection
{
  /** @var string */
  public $conversation;
  /** @var string */
  public $participant;
  /** @var GoogleCloudDialogflowV2SuggestionResult[] */
  public $suggestionResults;
  protected $collection_key = 'suggestionResults';
  protected $suggestionResultsType = GoogleCloudDialogflowV2SuggestionResult::class;
  protected $suggestionResultsDataType = 'array';
  /** @param string */
  public function setConversation($conversation)
  {
    $this->conversation = $conversation;
  }
  /** @return string */
  public function getConversation()
  {
    return $this->conversation;
  }
  /** @param string */
  public function setParticipant($participant)
  {
    $this->participant = $participant;
  }
  /** @return string */
  public function getParticipant()
  {
    return $this->participant;
  }
  /** @param GoogleCloudDialogflowV2SuggestionResult[] */
  public function setSuggestionResults($suggestionResults)
  {
    $this->suggestionResults = $suggestionResults;
  }
  /** @return GoogleCloudDialogflowV2SuggestionResult[] */
  public function getSuggestionResults()
  {
    return $this->suggestionResults;
  }
}

class GoogleCloudDialogflowV2ImportConversationDataOperationMetadata extends \Google\Collection
{
  /** @var string */
  public $conversationDataset;
  /** @var string */
  public $createTime;
  /** @var GoogleRpcStatus[] */
  public $partialFailures;
  protected $collection_key = 'partialFailures';
  protected $partialFailuresType = GoogleRpcStatus::class;
  protected $partialFailuresDataType = 'array';
  /** @param string */
  public function setConversationDataset($conversationDataset)
  {
    $this->conversationDataset = $conversationDataset;
  }
  /** @return string */
  public function getConversationDataset()
  {
    return $this->conversationDataset;
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
  /** @param GoogleRpcStatus[] */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}

class GoogleCloudDialogflowV2ImportConversationDataOperationResponse extends \Google\Model
{
  /** @var string */
  public $conversationDataset;
  /** @var int */
  public $importCount;

  /** @param string */
  public function setConversationDataset($conversationDataset)
  {
    $this->conversationDataset = $conversationDataset;
  }
  /** @return string */
  public function getConversationDataset()
  {
    return $this->conversationDataset;
  }
  /** @param int */
  public function setImportCount($importCount)
  {
    $this->importCount = $importCount;
  }
  /** @return int */
  public function getImportCount()
  {
    return $this->importCount;
  }
}

class GoogleCloudDialogflowV2ImportDocumentsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $warningsType = GoogleRpcStatus::class;
  protected $warningsDataType = 'array';
  /** @param GoogleRpcStatus[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return GoogleRpcStatus[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class GoogleCloudDialogflowV2InputDataset extends \Google\Model
{
  /** @var string */
  public $dataset;

  /** @param string */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
}

class GoogleCloudDialogflowV2Intent extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var string[] */
  public $defaultResponsePlatforms;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $endInteraction;
  /** @var string[] */
  public $events;
  /** @var GoogleCloudDialogflowV2IntentFollowupIntentInfo[] */
  public $followupIntentInfo;
  /** @var string[] */
  public $inputContextNames;
  /** @var bool */
  public $isFallback;
  /** @var bool */
  public $liveAgentHandoff;
  /** @var GoogleCloudDialogflowV2IntentMessage[] */
  public $messages;
  /** @var bool */
  public $mlDisabled;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowV2Context[] */
  public $outputContexts;
  /** @var GoogleCloudDialogflowV2IntentParameter[] */
  public $parameters;
  /** @var string */
  public $parentFollowupIntentName;
  /** @var int */
  public $priority;
  /** @var bool */
  public $resetContexts;
  /** @var string */
  public $rootFollowupIntentName;
  /** @var GoogleCloudDialogflowV2IntentTrainingPhrase[] */
  public $trainingPhrases;
  /** @var string */
  public $webhookState;
  protected $collection_key = 'trainingPhrases';
  protected $followupIntentInfoType = GoogleCloudDialogflowV2IntentFollowupIntentInfo::class;
  protected $followupIntentInfoDataType = 'array';
  protected $messagesType = GoogleCloudDialogflowV2IntentMessage::class;
  protected $messagesDataType = 'array';
  protected $outputContextsType = GoogleCloudDialogflowV2Context::class;
  protected $outputContextsDataType = 'array';
  protected $parametersType = GoogleCloudDialogflowV2IntentParameter::class;
  protected $parametersDataType = 'array';
  protected $trainingPhrasesType = GoogleCloudDialogflowV2IntentTrainingPhrase::class;
  protected $trainingPhrasesDataType = 'array';
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
  public function setDefaultResponsePlatforms($defaultResponsePlatforms)
  {
    $this->defaultResponsePlatforms = $defaultResponsePlatforms;
  }
  /** @return string[] */
  public function getDefaultResponsePlatforms()
  {
    return $this->defaultResponsePlatforms;
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
  public function setEndInteraction($endInteraction)
  {
    $this->endInteraction = $endInteraction;
  }
  /** @return bool */
  public function getEndInteraction()
  {
    return $this->endInteraction;
  }
  /** @param string[] */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /** @return string[] */
  public function getEvents()
  {
    return $this->events;
  }
  /** @param GoogleCloudDialogflowV2IntentFollowupIntentInfo[] */
  public function setFollowupIntentInfo($followupIntentInfo)
  {
    $this->followupIntentInfo = $followupIntentInfo;
  }
  /** @return GoogleCloudDialogflowV2IntentFollowupIntentInfo[] */
  public function getFollowupIntentInfo()
  {
    return $this->followupIntentInfo;
  }
  /** @param string[] */
  public function setInputContextNames($inputContextNames)
  {
    $this->inputContextNames = $inputContextNames;
  }
  /** @return string[] */
  public function getInputContextNames()
  {
    return $this->inputContextNames;
  }
  /** @param bool */
  public function setIsFallback($isFallback)
  {
    $this->isFallback = $isFallback;
  }
  /** @return bool */
  public function getIsFallback()
  {
    return $this->isFallback;
  }
  /** @param bool */
  public function setLiveAgentHandoff($liveAgentHandoff)
  {
    $this->liveAgentHandoff = $liveAgentHandoff;
  }
  /** @return bool */
  public function getLiveAgentHandoff()
  {
    return $this->liveAgentHandoff;
  }
  /** @param GoogleCloudDialogflowV2IntentMessage[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GoogleCloudDialogflowV2IntentMessage[] */
  public function getMessages()
  {
    return $this->messages;
  }
  /** @param bool */
  public function setMlDisabled($mlDisabled)
  {
    $this->mlDisabled = $mlDisabled;
  }
  /** @return bool */
  public function getMlDisabled()
  {
    return $this->mlDisabled;
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
  /** @param GoogleCloudDialogflowV2Context[] */
  public function setOutputContexts($outputContexts)
  {
    $this->outputContexts = $outputContexts;
  }
  /** @return GoogleCloudDialogflowV2Context[] */
  public function getOutputContexts()
  {
    return $this->outputContexts;
  }
  /** @param GoogleCloudDialogflowV2IntentParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudDialogflowV2IntentParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setParentFollowupIntentName($parentFollowupIntentName)
  {
    $this->parentFollowupIntentName = $parentFollowupIntentName;
  }
  /** @return string */
  public function getParentFollowupIntentName()
  {
    return $this->parentFollowupIntentName;
  }
  /** @param int */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return int */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param bool */
  public function setResetContexts($resetContexts)
  {
    $this->resetContexts = $resetContexts;
  }
  /** @return bool */
  public function getResetContexts()
  {
    return $this->resetContexts;
  }
  /** @param string */
  public function setRootFollowupIntentName($rootFollowupIntentName)
  {
    $this->rootFollowupIntentName = $rootFollowupIntentName;
  }
  /** @return string */
  public function getRootFollowupIntentName()
  {
    return $this->rootFollowupIntentName;
  }
  /** @param GoogleCloudDialogflowV2IntentTrainingPhrase[] */
  public function setTrainingPhrases($trainingPhrases)
  {
    $this->trainingPhrases = $trainingPhrases;
  }
  /** @return GoogleCloudDialogflowV2IntentTrainingPhrase[] */
  public function getTrainingPhrases()
  {
    return $this->trainingPhrases;
  }
  /** @param string */
  public function setWebhookState($webhookState)
  {
    $this->webhookState = $webhookState;
  }
  /** @return string */
  public function getWebhookState()
  {
    return $this->webhookState;
  }
}

class GoogleCloudDialogflowV2IntentFollowupIntentInfo extends \Google\Model
{
  /** @var string */
  public $followupIntentName;
  /** @var string */
  public $parentFollowupIntentName;

  /** @param string */
  public function setFollowupIntentName($followupIntentName)
  {
    $this->followupIntentName = $followupIntentName;
  }
  /** @return string */
  public function getFollowupIntentName()
  {
    return $this->followupIntentName;
  }
  /** @param string */
  public function setParentFollowupIntentName($parentFollowupIntentName)
  {
    $this->parentFollowupIntentName = $parentFollowupIntentName;
  }
  /** @return string */
  public function getParentFollowupIntentName()
  {
    return $this->parentFollowupIntentName;
  }
}

class GoogleCloudDialogflowV2IntentMessage extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2IntentMessageBasicCard */
  public $basicCard;
  /** @var GoogleCloudDialogflowV2IntentMessageBrowseCarouselCard */
  public $browseCarouselCard;
  /** @var GoogleCloudDialogflowV2IntentMessageCard */
  public $card;
  /** @var GoogleCloudDialogflowV2IntentMessageCarouselSelect */
  public $carouselSelect;
  /** @var GoogleCloudDialogflowV2IntentMessageImage */
  public $image;
  /** @var GoogleCloudDialogflowV2IntentMessageLinkOutSuggestion */
  public $linkOutSuggestion;
  /** @var GoogleCloudDialogflowV2IntentMessageListSelect */
  public $listSelect;
  /** @var GoogleCloudDialogflowV2IntentMessageMediaContent */
  public $mediaContent;
  /** @var array[] */
  public $payload;
  /** @var string */
  public $platform;
  /** @var GoogleCloudDialogflowV2IntentMessageQuickReplies */
  public $quickReplies;
  /** @var GoogleCloudDialogflowV2IntentMessageSimpleResponses */
  public $simpleResponses;
  /** @var GoogleCloudDialogflowV2IntentMessageSuggestions */
  public $suggestions;
  /** @var GoogleCloudDialogflowV2IntentMessageTableCard */
  public $tableCard;
  /** @var GoogleCloudDialogflowV2IntentMessageText */
  public $text;
  protected $basicCardType = GoogleCloudDialogflowV2IntentMessageBasicCard::class;
  protected $basicCardDataType = '';
  protected $browseCarouselCardType = GoogleCloudDialogflowV2IntentMessageBrowseCarouselCard::class;
  protected $browseCarouselCardDataType = '';
  protected $cardType = GoogleCloudDialogflowV2IntentMessageCard::class;
  protected $cardDataType = '';
  protected $carouselSelectType = GoogleCloudDialogflowV2IntentMessageCarouselSelect::class;
  protected $carouselSelectDataType = '';
  protected $imageType = GoogleCloudDialogflowV2IntentMessageImage::class;
  protected $imageDataType = '';
  protected $linkOutSuggestionType = GoogleCloudDialogflowV2IntentMessageLinkOutSuggestion::class;
  protected $linkOutSuggestionDataType = '';
  protected $listSelectType = GoogleCloudDialogflowV2IntentMessageListSelect::class;
  protected $listSelectDataType = '';
  protected $mediaContentType = GoogleCloudDialogflowV2IntentMessageMediaContent::class;
  protected $mediaContentDataType = '';
  protected $quickRepliesType = GoogleCloudDialogflowV2IntentMessageQuickReplies::class;
  protected $quickRepliesDataType = '';
  protected $simpleResponsesType = GoogleCloudDialogflowV2IntentMessageSimpleResponses::class;
  protected $simpleResponsesDataType = '';
  protected $suggestionsType = GoogleCloudDialogflowV2IntentMessageSuggestions::class;
  protected $suggestionsDataType = '';
  protected $tableCardType = GoogleCloudDialogflowV2IntentMessageTableCard::class;
  protected $tableCardDataType = '';
  protected $textType = GoogleCloudDialogflowV2IntentMessageText::class;
  protected $textDataType = '';
  /** @param GoogleCloudDialogflowV2IntentMessageBasicCard */
  public function setBasicCard(GoogleCloudDialogflowV2IntentMessageBasicCard $basicCard)
  {
    $this->basicCard = $basicCard;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageBasicCard */
  public function getBasicCard()
  {
    return $this->basicCard;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageBrowseCarouselCard */
  public function setBrowseCarouselCard(GoogleCloudDialogflowV2IntentMessageBrowseCarouselCard $browseCarouselCard)
  {
    $this->browseCarouselCard = $browseCarouselCard;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageBrowseCarouselCard */
  public function getBrowseCarouselCard()
  {
    return $this->browseCarouselCard;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageCard */
  public function setCard(GoogleCloudDialogflowV2IntentMessageCard $card)
  {
    $this->card = $card;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageCard */
  public function getCard()
  {
    return $this->card;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageCarouselSelect */
  public function setCarouselSelect(GoogleCloudDialogflowV2IntentMessageCarouselSelect $carouselSelect)
  {
    $this->carouselSelect = $carouselSelect;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageCarouselSelect */
  public function getCarouselSelect()
  {
    return $this->carouselSelect;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageLinkOutSuggestion */
  public function setLinkOutSuggestion(GoogleCloudDialogflowV2IntentMessageLinkOutSuggestion $linkOutSuggestion)
  {
    $this->linkOutSuggestion = $linkOutSuggestion;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageLinkOutSuggestion */
  public function getLinkOutSuggestion()
  {
    return $this->linkOutSuggestion;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageListSelect */
  public function setListSelect(GoogleCloudDialogflowV2IntentMessageListSelect $listSelect)
  {
    $this->listSelect = $listSelect;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageListSelect */
  public function getListSelect()
  {
    return $this->listSelect;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageMediaContent */
  public function setMediaContent(GoogleCloudDialogflowV2IntentMessageMediaContent $mediaContent)
  {
    $this->mediaContent = $mediaContent;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageMediaContent */
  public function getMediaContent()
  {
    return $this->mediaContent;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
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
  /** @param GoogleCloudDialogflowV2IntentMessageQuickReplies */
  public function setQuickReplies(GoogleCloudDialogflowV2IntentMessageQuickReplies $quickReplies)
  {
    $this->quickReplies = $quickReplies;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageQuickReplies */
  public function getQuickReplies()
  {
    return $this->quickReplies;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageSimpleResponses */
  public function setSimpleResponses(GoogleCloudDialogflowV2IntentMessageSimpleResponses $simpleResponses)
  {
    $this->simpleResponses = $simpleResponses;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageSimpleResponses */
  public function getSimpleResponses()
  {
    return $this->simpleResponses;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageSuggestions */
  public function setSuggestions(GoogleCloudDialogflowV2IntentMessageSuggestions $suggestions)
  {
    $this->suggestions = $suggestions;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageSuggestions */
  public function getSuggestions()
  {
    return $this->suggestions;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageTableCard */
  public function setTableCard(GoogleCloudDialogflowV2IntentMessageTableCard $tableCard)
  {
    $this->tableCard = $tableCard;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageTableCard */
  public function getTableCard()
  {
    return $this->tableCard;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageText */
  public function setText(GoogleCloudDialogflowV2IntentMessageText $text)
  {
    $this->text = $text;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageText */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDialogflowV2IntentMessageBasicCard extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2IntentMessageBasicCardButton[] */
  public $buttons;
  /** @var string */
  public $formattedText;
  /** @var GoogleCloudDialogflowV2IntentMessageImage */
  public $image;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;
  protected $collection_key = 'buttons';
  protected $buttonsType = GoogleCloudDialogflowV2IntentMessageBasicCardButton::class;
  protected $buttonsDataType = 'array';
  protected $imageType = GoogleCloudDialogflowV2IntentMessageImage::class;
  protected $imageDataType = '';
  /** @param GoogleCloudDialogflowV2IntentMessageBasicCardButton[] */
  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageBasicCardButton[] */
  public function getButtons()
  {
    return $this->buttons;
  }
  /** @param string */
  public function setFormattedText($formattedText)
  {
    $this->formattedText = $formattedText;
  }
  /** @return string */
  public function getFormattedText()
  {
    return $this->formattedText;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class GoogleCloudDialogflowV2IntentMessageBasicCardButton extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2IntentMessageBasicCardButtonOpenUriAction */
  public $openUriAction;
  /** @var string */
  public $title;
  protected $openUriActionType = GoogleCloudDialogflowV2IntentMessageBasicCardButtonOpenUriAction::class;
  protected $openUriActionDataType = '';
  /** @param GoogleCloudDialogflowV2IntentMessageBasicCardButtonOpenUriAction */
  public function setOpenUriAction(GoogleCloudDialogflowV2IntentMessageBasicCardButtonOpenUriAction $openUriAction)
  {
    $this->openUriAction = $openUriAction;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageBasicCardButtonOpenUriAction */
  public function getOpenUriAction()
  {
    return $this->openUriAction;
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

class GoogleCloudDialogflowV2IntentMessageBasicCardButtonOpenUriAction extends \Google\Model
{
  /** @var string */
  public $uri;

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

class GoogleCloudDialogflowV2IntentMessageBrowseCarouselCard extends \Google\Collection
{
  /** @var string */
  public $imageDisplayOptions;
  /** @var GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItem[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItem::class;
  protected $itemsDataType = 'array';
  /** @param string */
  public function setImageDisplayOptions($imageDisplayOptions)
  {
    $this->imageDisplayOptions = $imageDisplayOptions;
  }
  /** @return string */
  public function getImageDisplayOptions()
  {
    return $this->imageDisplayOptions;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItem[] */
  public function getItems()
  {
    return $this->items;
  }
}

class GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItem extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $footer;
  /** @var GoogleCloudDialogflowV2IntentMessageImage */
  public $image;
  /** @var GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction */
  public $openUriAction;
  /** @var string */
  public $title;
  protected $imageType = GoogleCloudDialogflowV2IntentMessageImage::class;
  protected $imageDataType = '';
  protected $openUriActionType = GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction::class;
  protected $openUriActionDataType = '';
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
  public function setFooter($footer)
  {
    $this->footer = $footer;
  }
  /** @return string */
  public function getFooter()
  {
    return $this->footer;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction */
  public function setOpenUriAction(GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction $openUriAction)
  {
    $this->openUriAction = $openUriAction;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction */
  public function getOpenUriAction()
  {
    return $this->openUriAction;
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

class GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction extends \Google\Model
{
  /** @var string */
  public $url;
  /** @var string */
  public $urlTypeHint;

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
  /** @param string */
  public function setUrlTypeHint($urlTypeHint)
  {
    $this->urlTypeHint = $urlTypeHint;
  }
  /** @return string */
  public function getUrlTypeHint()
  {
    return $this->urlTypeHint;
  }
}

class GoogleCloudDialogflowV2IntentMessageCard extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2IntentMessageCardButton[] */
  public $buttons;
  /** @var string */
  public $imageUri;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;
  protected $collection_key = 'buttons';
  protected $buttonsType = GoogleCloudDialogflowV2IntentMessageCardButton::class;
  protected $buttonsDataType = 'array';
  /** @param GoogleCloudDialogflowV2IntentMessageCardButton[] */
  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageCardButton[] */
  public function getButtons()
  {
    return $this->buttons;
  }
  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class GoogleCloudDialogflowV2IntentMessageCardButton extends \Google\Model
{
  /** @var string */
  public $postback;
  /** @var string */
  public $text;

  /** @param string */
  public function setPostback($postback)
  {
    $this->postback = $postback;
  }
  /** @return string */
  public function getPostback()
  {
    return $this->postback;
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

class GoogleCloudDialogflowV2IntentMessageCarouselSelect extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2IntentMessageCarouselSelectItem[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = GoogleCloudDialogflowV2IntentMessageCarouselSelectItem::class;
  protected $itemsDataType = 'array';
  /** @param GoogleCloudDialogflowV2IntentMessageCarouselSelectItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageCarouselSelectItem[] */
  public function getItems()
  {
    return $this->items;
  }
}

class GoogleCloudDialogflowV2IntentMessageCarouselSelectItem extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var GoogleCloudDialogflowV2IntentMessageImage */
  public $image;
  /** @var GoogleCloudDialogflowV2IntentMessageSelectItemInfo */
  public $info;
  /** @var string */
  public $title;
  protected $imageType = GoogleCloudDialogflowV2IntentMessageImage::class;
  protected $imageDataType = '';
  protected $infoType = GoogleCloudDialogflowV2IntentMessageSelectItemInfo::class;
  protected $infoDataType = '';
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
  /** @param GoogleCloudDialogflowV2IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageSelectItemInfo */
  public function setInfo(GoogleCloudDialogflowV2IntentMessageSelectItemInfo $info)
  {
    $this->info = $info;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageSelectItemInfo */
  public function getInfo()
  {
    return $this->info;
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

class GoogleCloudDialogflowV2IntentMessageColumnProperties extends \Google\Model
{
  /** @var string */
  public $header;
  /** @var string */
  public $horizontalAlignment;

  /** @param string */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /** @return string */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param string */
  public function setHorizontalAlignment($horizontalAlignment)
  {
    $this->horizontalAlignment = $horizontalAlignment;
  }
  /** @return string */
  public function getHorizontalAlignment()
  {
    return $this->horizontalAlignment;
  }
}

class GoogleCloudDialogflowV2IntentMessageImage extends \Google\Model
{
  /** @var string */
  public $accessibilityText;
  /** @var string */
  public $imageUri;

  /** @param string */
  public function setAccessibilityText($accessibilityText)
  {
    $this->accessibilityText = $accessibilityText;
  }
  /** @return string */
  public function getAccessibilityText()
  {
    return $this->accessibilityText;
  }
  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
  }
}

class GoogleCloudDialogflowV2IntentMessageLinkOutSuggestion extends \Google\Model
{
  /** @var string */
  public $destinationName;
  /** @var string */
  public $uri;

  /** @param string */
  public function setDestinationName($destinationName)
  {
    $this->destinationName = $destinationName;
  }
  /** @return string */
  public function getDestinationName()
  {
    return $this->destinationName;
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

class GoogleCloudDialogflowV2IntentMessageListSelect extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2IntentMessageListSelectItem[] */
  public $items;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;
  protected $collection_key = 'items';
  protected $itemsType = GoogleCloudDialogflowV2IntentMessageListSelectItem::class;
  protected $itemsDataType = 'array';
  /** @param GoogleCloudDialogflowV2IntentMessageListSelectItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageListSelectItem[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class GoogleCloudDialogflowV2IntentMessageListSelectItem extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var GoogleCloudDialogflowV2IntentMessageImage */
  public $image;
  /** @var GoogleCloudDialogflowV2IntentMessageSelectItemInfo */
  public $info;
  /** @var string */
  public $title;
  protected $imageType = GoogleCloudDialogflowV2IntentMessageImage::class;
  protected $imageDataType = '';
  protected $infoType = GoogleCloudDialogflowV2IntentMessageSelectItemInfo::class;
  protected $infoDataType = '';
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
  /** @param GoogleCloudDialogflowV2IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageSelectItemInfo */
  public function setInfo(GoogleCloudDialogflowV2IntentMessageSelectItemInfo $info)
  {
    $this->info = $info;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageSelectItemInfo */
  public function getInfo()
  {
    return $this->info;
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

class GoogleCloudDialogflowV2IntentMessageMediaContent extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject[] */
  public $mediaObjects;
  /** @var string */
  public $mediaType;
  protected $collection_key = 'mediaObjects';
  protected $mediaObjectsType = GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject::class;
  protected $mediaObjectsDataType = 'array';
  /** @param GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject[] */
  public function setMediaObjects($mediaObjects)
  {
    $this->mediaObjects = $mediaObjects;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject[] */
  public function getMediaObjects()
  {
    return $this->mediaObjects;
  }
  /** @param string */
  public function setMediaType($mediaType)
  {
    $this->mediaType = $mediaType;
  }
  /** @return string */
  public function getMediaType()
  {
    return $this->mediaType;
  }
}

class GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject extends \Google\Model
{
  /** @var string */
  public $contentUrl;
  /** @var string */
  public $description;
  /** @var GoogleCloudDialogflowV2IntentMessageImage */
  public $icon;
  /** @var GoogleCloudDialogflowV2IntentMessageImage */
  public $largeImage;
  /** @var string */
  public $name;
  protected $iconType = GoogleCloudDialogflowV2IntentMessageImage::class;
  protected $iconDataType = '';
  protected $largeImageType = GoogleCloudDialogflowV2IntentMessageImage::class;
  protected $largeImageDataType = '';
  /** @param string */
  public function setContentUrl($contentUrl)
  {
    $this->contentUrl = $contentUrl;
  }
  /** @return string */
  public function getContentUrl()
  {
    return $this->contentUrl;
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
  /** @param GoogleCloudDialogflowV2IntentMessageImage */
  public function setIcon(GoogleCloudDialogflowV2IntentMessageImage $icon)
  {
    $this->icon = $icon;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageImage */
  public function getIcon()
  {
    return $this->icon;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageImage */
  public function setLargeImage(GoogleCloudDialogflowV2IntentMessageImage $largeImage)
  {
    $this->largeImage = $largeImage;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageImage */
  public function getLargeImage()
  {
    return $this->largeImage;
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

class GoogleCloudDialogflowV2IntentMessageQuickReplies extends \Google\Collection
{
  /** @var string[] */
  public $quickReplies;
  /** @var string */
  public $title;
  protected $collection_key = 'quickReplies';
  /** @param string[] */
  public function setQuickReplies($quickReplies)
  {
    $this->quickReplies = $quickReplies;
  }
  /** @return string[] */
  public function getQuickReplies()
  {
    return $this->quickReplies;
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

class GoogleCloudDialogflowV2IntentMessageSelectItemInfo extends \Google\Collection
{
  /** @var string */
  public $key;
  /** @var string[] */
  public $synonyms;
  protected $collection_key = 'synonyms';
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
  /** @param string[] */
  public function setSynonyms($synonyms)
  {
    $this->synonyms = $synonyms;
  }
  /** @return string[] */
  public function getSynonyms()
  {
    return $this->synonyms;
  }
}

class GoogleCloudDialogflowV2IntentMessageSimpleResponse extends \Google\Model
{
  /** @var string */
  public $displayText;
  /** @var string */
  public $ssml;
  /** @var string */
  public $textToSpeech;

  /** @param string */
  public function setDisplayText($displayText)
  {
    $this->displayText = $displayText;
  }
  /** @return string */
  public function getDisplayText()
  {
    return $this->displayText;
  }
  /** @param string */
  public function setSsml($ssml)
  {
    $this->ssml = $ssml;
  }
  /** @return string */
  public function getSsml()
  {
    return $this->ssml;
  }
  /** @param string */
  public function setTextToSpeech($textToSpeech)
  {
    $this->textToSpeech = $textToSpeech;
  }
  /** @return string */
  public function getTextToSpeech()
  {
    return $this->textToSpeech;
  }
}

class GoogleCloudDialogflowV2IntentMessageSimpleResponses extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2IntentMessageSimpleResponse[] */
  public $simpleResponses;
  protected $collection_key = 'simpleResponses';
  protected $simpleResponsesType = GoogleCloudDialogflowV2IntentMessageSimpleResponse::class;
  protected $simpleResponsesDataType = 'array';
  /** @param GoogleCloudDialogflowV2IntentMessageSimpleResponse[] */
  public function setSimpleResponses($simpleResponses)
  {
    $this->simpleResponses = $simpleResponses;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageSimpleResponse[] */
  public function getSimpleResponses()
  {
    return $this->simpleResponses;
  }
}

class GoogleCloudDialogflowV2IntentMessageSuggestion extends \Google\Model
{
  /** @var string */
  public $title;

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

class GoogleCloudDialogflowV2IntentMessageSuggestions extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2IntentMessageSuggestion[] */
  public $suggestions;
  protected $collection_key = 'suggestions';
  protected $suggestionsType = GoogleCloudDialogflowV2IntentMessageSuggestion::class;
  protected $suggestionsDataType = 'array';
  /** @param GoogleCloudDialogflowV2IntentMessageSuggestion[] */
  public function setSuggestions($suggestions)
  {
    $this->suggestions = $suggestions;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageSuggestion[] */
  public function getSuggestions()
  {
    return $this->suggestions;
  }
}

class GoogleCloudDialogflowV2IntentMessageTableCard extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2IntentMessageBasicCardButton[] */
  public $buttons;
  /** @var GoogleCloudDialogflowV2IntentMessageColumnProperties[] */
  public $columnProperties;
  /** @var GoogleCloudDialogflowV2IntentMessageImage */
  public $image;
  /** @var GoogleCloudDialogflowV2IntentMessageTableCardRow[] */
  public $rows;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;
  protected $collection_key = 'rows';
  protected $buttonsType = GoogleCloudDialogflowV2IntentMessageBasicCardButton::class;
  protected $buttonsDataType = 'array';
  protected $columnPropertiesType = GoogleCloudDialogflowV2IntentMessageColumnProperties::class;
  protected $columnPropertiesDataType = 'array';
  protected $imageType = GoogleCloudDialogflowV2IntentMessageImage::class;
  protected $imageDataType = '';
  protected $rowsType = GoogleCloudDialogflowV2IntentMessageTableCardRow::class;
  protected $rowsDataType = 'array';
  /** @param GoogleCloudDialogflowV2IntentMessageBasicCardButton[] */
  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageBasicCardButton[] */
  public function getButtons()
  {
    return $this->buttons;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageColumnProperties[] */
  public function setColumnProperties($columnProperties)
  {
    $this->columnProperties = $columnProperties;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageColumnProperties[] */
  public function getColumnProperties()
  {
    return $this->columnProperties;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDialogflowV2IntentMessageTableCardRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageTableCardRow[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class GoogleCloudDialogflowV2IntentMessageTableCardCell extends \Google\Model
{
  /** @var string */
  public $text;

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

class GoogleCloudDialogflowV2IntentMessageTableCardRow extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2IntentMessageTableCardCell[] */
  public $cells;
  /** @var bool */
  public $dividerAfter;
  protected $collection_key = 'cells';
  protected $cellsType = GoogleCloudDialogflowV2IntentMessageTableCardCell::class;
  protected $cellsDataType = 'array';
  /** @param GoogleCloudDialogflowV2IntentMessageTableCardCell[] */
  public function setCells($cells)
  {
    $this->cells = $cells;
  }
  /** @return GoogleCloudDialogflowV2IntentMessageTableCardCell[] */
  public function getCells()
  {
    return $this->cells;
  }
  /** @param bool */
  public function setDividerAfter($dividerAfter)
  {
    $this->dividerAfter = $dividerAfter;
  }
  /** @return bool */
  public function getDividerAfter()
  {
    return $this->dividerAfter;
  }
}

class GoogleCloudDialogflowV2IntentMessageText extends \Google\Collection
{
  /** @var string[] */
  public $text;
  protected $collection_key = 'text';
  /** @param string[] */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string[] */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDialogflowV2IntentParameter extends \Google\Collection
{
  /** @var string */
  public $defaultValue;
  /** @var string */
  public $displayName;
  /** @var string */
  public $entityTypeDisplayName;
  /** @var bool */
  public $isList;
  /** @var bool */
  public $mandatory;
  /** @var string */
  public $name;
  /** @var string[] */
  public $prompts;
  /** @var string */
  public $value;
  protected $collection_key = 'prompts';
  /** @param string */
  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return string */
  public function getDefaultValue()
  {
    return $this->defaultValue;
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
  public function setEntityTypeDisplayName($entityTypeDisplayName)
  {
    $this->entityTypeDisplayName = $entityTypeDisplayName;
  }
  /** @return string */
  public function getEntityTypeDisplayName()
  {
    return $this->entityTypeDisplayName;
  }
  /** @param bool */
  public function setIsList($isList)
  {
    $this->isList = $isList;
  }
  /** @return bool */
  public function getIsList()
  {
    return $this->isList;
  }
  /** @param bool */
  public function setMandatory($mandatory)
  {
    $this->mandatory = $mandatory;
  }
  /** @return bool */
  public function getMandatory()
  {
    return $this->mandatory;
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
  public function setPrompts($prompts)
  {
    $this->prompts = $prompts;
  }
  /** @return string[] */
  public function getPrompts()
  {
    return $this->prompts;
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

class GoogleCloudDialogflowV2IntentTrainingPhrase extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowV2IntentTrainingPhrasePart[] */
  public $parts;
  /** @var int */
  public $timesAddedCount;
  /** @var string */
  public $type;
  protected $collection_key = 'parts';
  protected $partsType = GoogleCloudDialogflowV2IntentTrainingPhrasePart::class;
  protected $partsDataType = 'array';
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
  /** @param GoogleCloudDialogflowV2IntentTrainingPhrasePart[] */
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  /** @return GoogleCloudDialogflowV2IntentTrainingPhrasePart[] */
  public function getParts()
  {
    return $this->parts;
  }
  /** @param int */
  public function setTimesAddedCount($timesAddedCount)
  {
    $this->timesAddedCount = $timesAddedCount;
  }
  /** @return int */
  public function getTimesAddedCount()
  {
    return $this->timesAddedCount;
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

class GoogleCloudDialogflowV2IntentTrainingPhrasePart extends \Google\Model
{
  /** @var string */
  public $alias;
  /** @var string */
  public $entityType;
  /** @var string */
  public $text;
  /** @var bool */
  public $userDefined;

  /** @param string */
  public function setAlias($alias)
  {
    $this->alias = $alias;
  }
  /** @return string */
  public function getAlias()
  {
    return $this->alias;
  }
  /** @param string */
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /** @return string */
  public function getEntityType()
  {
    return $this->entityType;
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
  /** @param bool */
  public function setUserDefined($userDefined)
  {
    $this->userDefined = $userDefined;
  }
  /** @return bool */
  public function getUserDefined()
  {
    return $this->userDefined;
  }
}

class GoogleCloudDialogflowV2KnowledgeOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2ExportOperationMetadata */
  public $exportOperationMetadata;
  /** @var string */
  public $knowledgeBase;
  /** @var string */
  public $state;
  protected $exportOperationMetadataType = GoogleCloudDialogflowV2ExportOperationMetadata::class;
  protected $exportOperationMetadataDataType = '';
  /** @param GoogleCloudDialogflowV2ExportOperationMetadata */
  public function setExportOperationMetadata(GoogleCloudDialogflowV2ExportOperationMetadata $exportOperationMetadata)
  {
    $this->exportOperationMetadata = $exportOperationMetadata;
  }
  /** @return GoogleCloudDialogflowV2ExportOperationMetadata */
  public function getExportOperationMetadata()
  {
    return $this->exportOperationMetadata;
  }
  /** @param string */
  public function setKnowledgeBase($knowledgeBase)
  {
    $this->knowledgeBase = $knowledgeBase;
  }
  /** @return string */
  public function getKnowledgeBase()
  {
    return $this->knowledgeBase;
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

class GoogleCloudDialogflowV2Message extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $createTime;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudDialogflowV2MessageAnnotation */
  public $messageAnnotation;
  /** @var string */
  public $name;
  /** @var string */
  public $participant;
  /** @var string */
  public $participantRole;
  /** @var string */
  public $sendTime;
  /** @var GoogleCloudDialogflowV2SentimentAnalysisResult */
  public $sentimentAnalysis;
  protected $messageAnnotationType = GoogleCloudDialogflowV2MessageAnnotation::class;
  protected $messageAnnotationDataType = '';
  protected $sentimentAnalysisType = GoogleCloudDialogflowV2SentimentAnalysisResult::class;
  protected $sentimentAnalysisDataType = '';
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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param GoogleCloudDialogflowV2MessageAnnotation */
  public function setMessageAnnotation(GoogleCloudDialogflowV2MessageAnnotation $messageAnnotation)
  {
    $this->messageAnnotation = $messageAnnotation;
  }
  /** @return GoogleCloudDialogflowV2MessageAnnotation */
  public function getMessageAnnotation()
  {
    return $this->messageAnnotation;
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
  public function setParticipant($participant)
  {
    $this->participant = $participant;
  }
  /** @return string */
  public function getParticipant()
  {
    return $this->participant;
  }
  /** @param string */
  public function setParticipantRole($participantRole)
  {
    $this->participantRole = $participantRole;
  }
  /** @return string */
  public function getParticipantRole()
  {
    return $this->participantRole;
  }
  /** @param string */
  public function setSendTime($sendTime)
  {
    $this->sendTime = $sendTime;
  }
  /** @return string */
  public function getSendTime()
  {
    return $this->sendTime;
  }
  /** @param GoogleCloudDialogflowV2SentimentAnalysisResult */
  public function setSentimentAnalysis(GoogleCloudDialogflowV2SentimentAnalysisResult $sentimentAnalysis)
  {
    $this->sentimentAnalysis = $sentimentAnalysis;
  }
  /** @return GoogleCloudDialogflowV2SentimentAnalysisResult */
  public function getSentimentAnalysis()
  {
    return $this->sentimentAnalysis;
  }
}

class GoogleCloudDialogflowV2MessageAnnotation extends \Google\Collection
{
  /** @var bool */
  public $containEntities;
  /** @var GoogleCloudDialogflowV2AnnotatedMessagePart[] */
  public $parts;
  protected $collection_key = 'parts';
  protected $partsType = GoogleCloudDialogflowV2AnnotatedMessagePart::class;
  protected $partsDataType = 'array';
  /** @param bool */
  public function setContainEntities($containEntities)
  {
    $this->containEntities = $containEntities;
  }
  /** @return bool */
  public function getContainEntities()
  {
    return $this->containEntities;
  }
  /** @param GoogleCloudDialogflowV2AnnotatedMessagePart[] */
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  /** @return GoogleCloudDialogflowV2AnnotatedMessagePart[] */
  public function getParts()
  {
    return $this->parts;
  }
}

class GoogleCloudDialogflowV2OriginalDetectIntentRequest extends \Google\Model
{
  /** @var array[] */
  public $payload;
  /** @var string */
  public $source;
  /** @var string */
  public $version;

  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
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

class GoogleCloudDialogflowV2QueryResult extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var bool */
  public $allRequiredParamsPresent;
  /** @var bool */
  public $cancelsSlotFilling;
  /** @var array[] */
  public $diagnosticInfo;
  /** @var GoogleCloudDialogflowV2IntentMessage[] */
  public $fulfillmentMessages;
  /** @var string */
  public $fulfillmentText;
  /** @var GoogleCloudDialogflowV2Intent */
  public $intent;
  /** @var float */
  public $intentDetectionConfidence;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudDialogflowV2Context[] */
  public $outputContexts;
  /** @var array[] */
  public $parameters;
  /** @var string */
  public $queryText;
  /** @var GoogleCloudDialogflowV2SentimentAnalysisResult */
  public $sentimentAnalysisResult;
  /** @var float */
  public $speechRecognitionConfidence;
  /** @var array[] */
  public $webhookPayload;
  /** @var string */
  public $webhookSource;
  protected $collection_key = 'outputContexts';
  protected $fulfillmentMessagesType = GoogleCloudDialogflowV2IntentMessage::class;
  protected $fulfillmentMessagesDataType = 'array';
  protected $intentType = GoogleCloudDialogflowV2Intent::class;
  protected $intentDataType = '';
  protected $outputContextsType = GoogleCloudDialogflowV2Context::class;
  protected $outputContextsDataType = 'array';
  protected $sentimentAnalysisResultType = GoogleCloudDialogflowV2SentimentAnalysisResult::class;
  protected $sentimentAnalysisResultDataType = '';
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
  /** @param bool */
  public function setAllRequiredParamsPresent($allRequiredParamsPresent)
  {
    $this->allRequiredParamsPresent = $allRequiredParamsPresent;
  }
  /** @return bool */
  public function getAllRequiredParamsPresent()
  {
    return $this->allRequiredParamsPresent;
  }
  /** @param bool */
  public function setCancelsSlotFilling($cancelsSlotFilling)
  {
    $this->cancelsSlotFilling = $cancelsSlotFilling;
  }
  /** @return bool */
  public function getCancelsSlotFilling()
  {
    return $this->cancelsSlotFilling;
  }
  /** @param array[] */
  public function setDiagnosticInfo($diagnosticInfo)
  {
    $this->diagnosticInfo = $diagnosticInfo;
  }
  /** @return array[] */
  public function getDiagnosticInfo()
  {
    return $this->diagnosticInfo;
  }
  /** @param GoogleCloudDialogflowV2IntentMessage[] */
  public function setFulfillmentMessages($fulfillmentMessages)
  {
    $this->fulfillmentMessages = $fulfillmentMessages;
  }
  /** @return GoogleCloudDialogflowV2IntentMessage[] */
  public function getFulfillmentMessages()
  {
    return $this->fulfillmentMessages;
  }
  /** @param string */
  public function setFulfillmentText($fulfillmentText)
  {
    $this->fulfillmentText = $fulfillmentText;
  }
  /** @return string */
  public function getFulfillmentText()
  {
    return $this->fulfillmentText;
  }
  /** @param GoogleCloudDialogflowV2Intent */
  public function setIntent(GoogleCloudDialogflowV2Intent $intent)
  {
    $this->intent = $intent;
  }
  /** @return GoogleCloudDialogflowV2Intent */
  public function getIntent()
  {
    return $this->intent;
  }
  /** @param float */
  public function setIntentDetectionConfidence($intentDetectionConfidence)
  {
    $this->intentDetectionConfidence = $intentDetectionConfidence;
  }
  /** @return float */
  public function getIntentDetectionConfidence()
  {
    return $this->intentDetectionConfidence;
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
  /** @param GoogleCloudDialogflowV2Context[] */
  public function setOutputContexts($outputContexts)
  {
    $this->outputContexts = $outputContexts;
  }
  /** @return GoogleCloudDialogflowV2Context[] */
  public function getOutputContexts()
  {
    return $this->outputContexts;
  }
  /** @param array[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setQueryText($queryText)
  {
    $this->queryText = $queryText;
  }
  /** @return string */
  public function getQueryText()
  {
    return $this->queryText;
  }
  /** @param GoogleCloudDialogflowV2SentimentAnalysisResult */
  public function setSentimentAnalysisResult(GoogleCloudDialogflowV2SentimentAnalysisResult $sentimentAnalysisResult)
  {
    $this->sentimentAnalysisResult = $sentimentAnalysisResult;
  }
  /** @return GoogleCloudDialogflowV2SentimentAnalysisResult */
  public function getSentimentAnalysisResult()
  {
    return $this->sentimentAnalysisResult;
  }
  /** @param float */
  public function setSpeechRecognitionConfidence($speechRecognitionConfidence)
  {
    $this->speechRecognitionConfidence = $speechRecognitionConfidence;
  }
  /** @return float */
  public function getSpeechRecognitionConfidence()
  {
    return $this->speechRecognitionConfidence;
  }
  /** @param array[] */
  public function setWebhookPayload($webhookPayload)
  {
    $this->webhookPayload = $webhookPayload;
  }
  /** @return array[] */
  public function getWebhookPayload()
  {
    return $this->webhookPayload;
  }
  /** @param string */
  public function setWebhookSource($webhookSource)
  {
    $this->webhookSource = $webhookSource;
  }
  /** @return string */
  public function getWebhookSource()
  {
    return $this->webhookSource;
  }
}

class GoogleCloudDialogflowV2Sentiment extends \Google\Model
{
  /** @var float */
  public $magnitude;
  /** @var float */
  public $score;

  /** @param float */
  public function setMagnitude($magnitude)
  {
    $this->magnitude = $magnitude;
  }
  /** @return float */
  public function getMagnitude()
  {
    return $this->magnitude;
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

class GoogleCloudDialogflowV2SentimentAnalysisResult extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2Sentiment */
  public $queryTextSentiment;
  protected $queryTextSentimentType = GoogleCloudDialogflowV2Sentiment::class;
  protected $queryTextSentimentDataType = '';
  /** @param GoogleCloudDialogflowV2Sentiment */
  public function setQueryTextSentiment(GoogleCloudDialogflowV2Sentiment $queryTextSentiment)
  {
    $this->queryTextSentiment = $queryTextSentiment;
  }
  /** @return GoogleCloudDialogflowV2Sentiment */
  public function getQueryTextSentiment()
  {
    return $this->queryTextSentiment;
  }
}

class GoogleCloudDialogflowV2SessionEntityType extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2EntityTypeEntity[] */
  public $entities;
  /** @var string */
  public $entityOverrideMode;
  /** @var string */
  public $name;
  protected $collection_key = 'entities';
  protected $entitiesType = GoogleCloudDialogflowV2EntityTypeEntity::class;
  protected $entitiesDataType = 'array';
  /** @param GoogleCloudDialogflowV2EntityTypeEntity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudDialogflowV2EntityTypeEntity[] */
  public function getEntities()
  {
    return $this->entities;
  }
  /** @param string */
  public function setEntityOverrideMode($entityOverrideMode)
  {
    $this->entityOverrideMode = $entityOverrideMode;
  }
  /** @return string */
  public function getEntityOverrideMode()
  {
    return $this->entityOverrideMode;
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

class GoogleCloudDialogflowV2SetSuggestionFeatureConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversationProfile;
  /** @var string */
  public $createTime;
  /** @var string */
  public $participantRole;
  /** @var string */
  public $suggestionFeatureType;

  /** @param string */
  public function setConversationProfile($conversationProfile)
  {
    $this->conversationProfile = $conversationProfile;
  }
  /** @return string */
  public function getConversationProfile()
  {
    return $this->conversationProfile;
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
  public function setParticipantRole($participantRole)
  {
    $this->participantRole = $participantRole;
  }
  /** @return string */
  public function getParticipantRole()
  {
    return $this->participantRole;
  }
  /** @param string */
  public function setSuggestionFeatureType($suggestionFeatureType)
  {
    $this->suggestionFeatureType = $suggestionFeatureType;
  }
  /** @return string */
  public function getSuggestionFeatureType()
  {
    return $this->suggestionFeatureType;
  }
}

class GoogleCloudDialogflowV2SmartReplyAnswer extends \Google\Model
{
  /** @var string */
  public $answerRecord;
  /** @var float */
  public $confidence;
  /** @var string */
  public $reply;

  /** @param string */
  public function setAnswerRecord($answerRecord)
  {
    $this->answerRecord = $answerRecord;
  }
  /** @return string */
  public function getAnswerRecord()
  {
    return $this->answerRecord;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setReply($reply)
  {
    $this->reply = $reply;
  }
  /** @return string */
  public function getReply()
  {
    return $this->reply;
  }
}

class GoogleCloudDialogflowV2SmartReplyModelMetadata extends \Google\Model
{
  /** @var string */
  public $trainingModelType;

  /** @param string */
  public function setTrainingModelType($trainingModelType)
  {
    $this->trainingModelType = $trainingModelType;
  }
  /** @return string */
  public function getTrainingModelType()
  {
    return $this->trainingModelType;
  }
}

class GoogleCloudDialogflowV2SuggestArticlesResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2ArticleAnswer[] */
  public $articleAnswers;
  /** @var int */
  public $contextSize;
  /** @var string */
  public $latestMessage;
  protected $collection_key = 'articleAnswers';
  protected $articleAnswersType = GoogleCloudDialogflowV2ArticleAnswer::class;
  protected $articleAnswersDataType = 'array';
  /** @param GoogleCloudDialogflowV2ArticleAnswer[] */
  public function setArticleAnswers($articleAnswers)
  {
    $this->articleAnswers = $articleAnswers;
  }
  /** @return GoogleCloudDialogflowV2ArticleAnswer[] */
  public function getArticleAnswers()
  {
    return $this->articleAnswers;
  }
  /** @param int */
  public function setContextSize($contextSize)
  {
    $this->contextSize = $contextSize;
  }
  /** @return int */
  public function getContextSize()
  {
    return $this->contextSize;
  }
  /** @param string */
  public function setLatestMessage($latestMessage)
  {
    $this->latestMessage = $latestMessage;
  }
  /** @return string */
  public function getLatestMessage()
  {
    return $this->latestMessage;
  }
}

class GoogleCloudDialogflowV2SuggestFaqAnswersResponse extends \Google\Collection
{
  /** @var int */
  public $contextSize;
  /** @var GoogleCloudDialogflowV2FaqAnswer[] */
  public $faqAnswers;
  /** @var string */
  public $latestMessage;
  protected $collection_key = 'faqAnswers';
  protected $faqAnswersType = GoogleCloudDialogflowV2FaqAnswer::class;
  protected $faqAnswersDataType = 'array';
  /** @param int */
  public function setContextSize($contextSize)
  {
    $this->contextSize = $contextSize;
  }
  /** @return int */
  public function getContextSize()
  {
    return $this->contextSize;
  }
  /** @param GoogleCloudDialogflowV2FaqAnswer[] */
  public function setFaqAnswers($faqAnswers)
  {
    $this->faqAnswers = $faqAnswers;
  }
  /** @return GoogleCloudDialogflowV2FaqAnswer[] */
  public function getFaqAnswers()
  {
    return $this->faqAnswers;
  }
  /** @param string */
  public function setLatestMessage($latestMessage)
  {
    $this->latestMessage = $latestMessage;
  }
  /** @return string */
  public function getLatestMessage()
  {
    return $this->latestMessage;
  }
}

class GoogleCloudDialogflowV2SuggestSmartRepliesResponse extends \Google\Collection
{
  /** @var int */
  public $contextSize;
  /** @var string */
  public $latestMessage;
  /** @var GoogleCloudDialogflowV2SmartReplyAnswer[] */
  public $smartReplyAnswers;
  protected $collection_key = 'smartReplyAnswers';
  protected $smartReplyAnswersType = GoogleCloudDialogflowV2SmartReplyAnswer::class;
  protected $smartReplyAnswersDataType = 'array';
  /** @param int */
  public function setContextSize($contextSize)
  {
    $this->contextSize = $contextSize;
  }
  /** @return int */
  public function getContextSize()
  {
    return $this->contextSize;
  }
  /** @param string */
  public function setLatestMessage($latestMessage)
  {
    $this->latestMessage = $latestMessage;
  }
  /** @return string */
  public function getLatestMessage()
  {
    return $this->latestMessage;
  }
  /** @param GoogleCloudDialogflowV2SmartReplyAnswer[] */
  public function setSmartReplyAnswers($smartReplyAnswers)
  {
    $this->smartReplyAnswers = $smartReplyAnswers;
  }
  /** @return GoogleCloudDialogflowV2SmartReplyAnswer[] */
  public function getSmartReplyAnswers()
  {
    return $this->smartReplyAnswers;
  }
}

class GoogleCloudDialogflowV2SuggestionResult extends \Google\Model
{
  /** @var GoogleRpcStatus */
  public $error;
  /** @var GoogleCloudDialogflowV2SuggestArticlesResponse */
  public $suggestArticlesResponse;
  /** @var GoogleCloudDialogflowV2SuggestFaqAnswersResponse */
  public $suggestFaqAnswersResponse;
  /** @var GoogleCloudDialogflowV2SuggestSmartRepliesResponse */
  public $suggestSmartRepliesResponse;
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $suggestArticlesResponseType = GoogleCloudDialogflowV2SuggestArticlesResponse::class;
  protected $suggestArticlesResponseDataType = '';
  protected $suggestFaqAnswersResponseType = GoogleCloudDialogflowV2SuggestFaqAnswersResponse::class;
  protected $suggestFaqAnswersResponseDataType = '';
  protected $suggestSmartRepliesResponseType = GoogleCloudDialogflowV2SuggestSmartRepliesResponse::class;
  protected $suggestSmartRepliesResponseDataType = '';
  /** @param GoogleRpcStatus */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /** @return GoogleRpcStatus */
  public function getError()
  {
    return $this->error;
  }
  /** @param GoogleCloudDialogflowV2SuggestArticlesResponse */
  public function setSuggestArticlesResponse(GoogleCloudDialogflowV2SuggestArticlesResponse $suggestArticlesResponse)
  {
    $this->suggestArticlesResponse = $suggestArticlesResponse;
  }
  /** @return GoogleCloudDialogflowV2SuggestArticlesResponse */
  public function getSuggestArticlesResponse()
  {
    return $this->suggestArticlesResponse;
  }
  /** @param GoogleCloudDialogflowV2SuggestFaqAnswersResponse */
  public function setSuggestFaqAnswersResponse(GoogleCloudDialogflowV2SuggestFaqAnswersResponse $suggestFaqAnswersResponse)
  {
    $this->suggestFaqAnswersResponse = $suggestFaqAnswersResponse;
  }
  /** @return GoogleCloudDialogflowV2SuggestFaqAnswersResponse */
  public function getSuggestFaqAnswersResponse()
  {
    return $this->suggestFaqAnswersResponse;
  }
  /** @param GoogleCloudDialogflowV2SuggestSmartRepliesResponse */
  public function setSuggestSmartRepliesResponse(GoogleCloudDialogflowV2SuggestSmartRepliesResponse $suggestSmartRepliesResponse)
  {
    $this->suggestSmartRepliesResponse = $suggestSmartRepliesResponse;
  }
  /** @return GoogleCloudDialogflowV2SuggestSmartRepliesResponse */
  public function getSuggestSmartRepliesResponse()
  {
    return $this->suggestSmartRepliesResponse;
  }
}

class GoogleCloudDialogflowV2UndeployConversationModelOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversationModel;
  /** @var string */
  public $createTime;

  /** @param string */
  public function setConversationModel($conversationModel)
  {
    $this->conversationModel = $conversationModel;
  }
  /** @return string */
  public function getConversationModel()
  {
    return $this->conversationModel;
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
}

class GoogleCloudDialogflowV2WebhookRequest extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2OriginalDetectIntentRequest */
  public $originalDetectIntentRequest;
  /** @var GoogleCloudDialogflowV2QueryResult */
  public $queryResult;
  /** @var string */
  public $responseId;
  /** @var string */
  public $session;
  protected $originalDetectIntentRequestType = GoogleCloudDialogflowV2OriginalDetectIntentRequest::class;
  protected $originalDetectIntentRequestDataType = '';
  protected $queryResultType = GoogleCloudDialogflowV2QueryResult::class;
  protected $queryResultDataType = '';
  /** @param GoogleCloudDialogflowV2OriginalDetectIntentRequest */
  public function setOriginalDetectIntentRequest(GoogleCloudDialogflowV2OriginalDetectIntentRequest $originalDetectIntentRequest)
  {
    $this->originalDetectIntentRequest = $originalDetectIntentRequest;
  }
  /** @return GoogleCloudDialogflowV2OriginalDetectIntentRequest */
  public function getOriginalDetectIntentRequest()
  {
    return $this->originalDetectIntentRequest;
  }
  /** @param GoogleCloudDialogflowV2QueryResult */
  public function setQueryResult(GoogleCloudDialogflowV2QueryResult $queryResult)
  {
    $this->queryResult = $queryResult;
  }
  /** @return GoogleCloudDialogflowV2QueryResult */
  public function getQueryResult()
  {
    return $this->queryResult;
  }
  /** @param string */
  public function setResponseId($responseId)
  {
    $this->responseId = $responseId;
  }
  /** @return string */
  public function getResponseId()
  {
    return $this->responseId;
  }
  /** @param string */
  public function setSession($session)
  {
    $this->session = $session;
  }
  /** @return string */
  public function getSession()
  {
    return $this->session;
  }
}

class GoogleCloudDialogflowV2WebhookResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2EventInput */
  public $followupEventInput;
  /** @var GoogleCloudDialogflowV2IntentMessage[] */
  public $fulfillmentMessages;
  /** @var string */
  public $fulfillmentText;
  /** @var GoogleCloudDialogflowV2Context[] */
  public $outputContexts;
  /** @var array[] */
  public $payload;
  /** @var GoogleCloudDialogflowV2SessionEntityType[] */
  public $sessionEntityTypes;
  /** @var string */
  public $source;
  protected $collection_key = 'sessionEntityTypes';
  protected $followupEventInputType = GoogleCloudDialogflowV2EventInput::class;
  protected $followupEventInputDataType = '';
  protected $fulfillmentMessagesType = GoogleCloudDialogflowV2IntentMessage::class;
  protected $fulfillmentMessagesDataType = 'array';
  protected $outputContextsType = GoogleCloudDialogflowV2Context::class;
  protected $outputContextsDataType = 'array';
  protected $sessionEntityTypesType = GoogleCloudDialogflowV2SessionEntityType::class;
  protected $sessionEntityTypesDataType = 'array';
  /** @param GoogleCloudDialogflowV2EventInput */
  public function setFollowupEventInput(GoogleCloudDialogflowV2EventInput $followupEventInput)
  {
    $this->followupEventInput = $followupEventInput;
  }
  /** @return GoogleCloudDialogflowV2EventInput */
  public function getFollowupEventInput()
  {
    return $this->followupEventInput;
  }
  /** @param GoogleCloudDialogflowV2IntentMessage[] */
  public function setFulfillmentMessages($fulfillmentMessages)
  {
    $this->fulfillmentMessages = $fulfillmentMessages;
  }
  /** @return GoogleCloudDialogflowV2IntentMessage[] */
  public function getFulfillmentMessages()
  {
    return $this->fulfillmentMessages;
  }
  /** @param string */
  public function setFulfillmentText($fulfillmentText)
  {
    $this->fulfillmentText = $fulfillmentText;
  }
  /** @return string */
  public function getFulfillmentText()
  {
    return $this->fulfillmentText;
  }
  /** @param GoogleCloudDialogflowV2Context[] */
  public function setOutputContexts($outputContexts)
  {
    $this->outputContexts = $outputContexts;
  }
  /** @return GoogleCloudDialogflowV2Context[] */
  public function getOutputContexts()
  {
    return $this->outputContexts;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param GoogleCloudDialogflowV2SessionEntityType[] */
  public function setSessionEntityTypes($sessionEntityTypes)
  {
    $this->sessionEntityTypes = $sessionEntityTypes;
  }
  /** @return GoogleCloudDialogflowV2SessionEntityType[] */
  public function getSessionEntityTypes()
  {
    return $this->sessionEntityTypes;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
}

class GoogleCloudDialogflowV2beta1AnnotatedMessagePart extends \Google\Model
{
  /** @var string */
  public $entityType;
  /** @var array */
  public $formattedValue;
  /** @var string */
  public $text;

  /** @param string */
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /** @return string */
  public function getEntityType()
  {
    return $this->entityType;
  }
  /** @param array */
  public function setFormattedValue($formattedValue)
  {
    $this->formattedValue = $formattedValue;
  }
  /** @return array */
  public function getFormattedValue()
  {
    return $this->formattedValue;
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

class GoogleCloudDialogflowV2beta1ArticleAnswer extends \Google\Collection
{
  /** @var string */
  public $answerRecord;
  /** @var string[] */
  public $metadata;
  /** @var string[] */
  public $snippets;
  /** @var string */
  public $title;
  /** @var string */
  public $uri;
  protected $collection_key = 'snippets';
  /** @param string */
  public function setAnswerRecord($answerRecord)
  {
    $this->answerRecord = $answerRecord;
  }
  /** @return string */
  public function getAnswerRecord()
  {
    return $this->answerRecord;
  }
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string[] */
  public function setSnippets($snippets)
  {
    $this->snippets = $snippets;
  }
  /** @return string[] */
  public function getSnippets()
  {
    return $this->snippets;
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

class GoogleCloudDialogflowV2beta1BatchUpdateEntityTypesResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1EntityType[] */
  public $entityTypes;
  protected $collection_key = 'entityTypes';
  protected $entityTypesType = GoogleCloudDialogflowV2beta1EntityType::class;
  protected $entityTypesDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1EntityType[] */
  public function setEntityTypes($entityTypes)
  {
    $this->entityTypes = $entityTypes;
  }
  /** @return GoogleCloudDialogflowV2beta1EntityType[] */
  public function getEntityTypes()
  {
    return $this->entityTypes;
  }
}

class GoogleCloudDialogflowV2beta1BatchUpdateIntentsResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1Intent[] */
  public $intents;
  protected $collection_key = 'intents';
  protected $intentsType = GoogleCloudDialogflowV2beta1Intent::class;
  protected $intentsDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1Intent[] */
  public function setIntents($intents)
  {
    $this->intents = $intents;
  }
  /** @return GoogleCloudDialogflowV2beta1Intent[] */
  public function getIntents()
  {
    return $this->intents;
  }
}

class GoogleCloudDialogflowV2beta1ClearSuggestionFeatureConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversationProfile;
  /** @var string */
  public $createTime;
  /** @var string */
  public $participantRole;
  /** @var string */
  public $suggestionFeatureType;

  /** @param string */
  public function setConversationProfile($conversationProfile)
  {
    $this->conversationProfile = $conversationProfile;
  }
  /** @return string */
  public function getConversationProfile()
  {
    return $this->conversationProfile;
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
  public function setParticipantRole($participantRole)
  {
    $this->participantRole = $participantRole;
  }
  /** @return string */
  public function getParticipantRole()
  {
    return $this->participantRole;
  }
  /** @param string */
  public function setSuggestionFeatureType($suggestionFeatureType)
  {
    $this->suggestionFeatureType = $suggestionFeatureType;
  }
  /** @return string */
  public function getSuggestionFeatureType()
  {
    return $this->suggestionFeatureType;
  }
}

class GoogleCloudDialogflowV2beta1Context extends \Google\Model
{
  /** @var int */
  public $lifespanCount;
  /** @var string */
  public $name;
  /** @var array[] */
  public $parameters;

  /** @param int */
  public function setLifespanCount($lifespanCount)
  {
    $this->lifespanCount = $lifespanCount;
  }
  /** @return int */
  public function getLifespanCount()
  {
    return $this->lifespanCount;
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
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleCloudDialogflowV2beta1ConversationEvent extends \Google\Model
{
  /** @var string */
  public $conversation;
  /** @var GoogleRpcStatus */
  public $errorStatus;
  /** @var GoogleCloudDialogflowV2beta1Message */
  public $newMessagePayload;
  /** @var string */
  public $type;
  protected $errorStatusType = GoogleRpcStatus::class;
  protected $errorStatusDataType = '';
  protected $newMessagePayloadType = GoogleCloudDialogflowV2beta1Message::class;
  protected $newMessagePayloadDataType = '';
  /** @param string */
  public function setConversation($conversation)
  {
    $this->conversation = $conversation;
  }
  /** @return string */
  public function getConversation()
  {
    return $this->conversation;
  }
  /** @param GoogleRpcStatus */
  public function setErrorStatus(GoogleRpcStatus $errorStatus)
  {
    $this->errorStatus = $errorStatus;
  }
  /** @return GoogleRpcStatus */
  public function getErrorStatus()
  {
    return $this->errorStatus;
  }
  /** @param GoogleCloudDialogflowV2beta1Message */
  public function setNewMessagePayload(GoogleCloudDialogflowV2beta1Message $newMessagePayload)
  {
    $this->newMessagePayload = $newMessagePayload;
  }
  /** @return GoogleCloudDialogflowV2beta1Message */
  public function getNewMessagePayload()
  {
    return $this->newMessagePayload;
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

class GoogleCloudDialogflowV2beta1EntityType extends \Google\Collection
{
  /** @var string */
  public $autoExpansionMode;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $enableFuzzyExtraction;
  /** @var GoogleCloudDialogflowV2beta1EntityTypeEntity[] */
  public $entities;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  protected $collection_key = 'entities';
  protected $entitiesType = GoogleCloudDialogflowV2beta1EntityTypeEntity::class;
  protected $entitiesDataType = 'array';
  /** @param string */
  public function setAutoExpansionMode($autoExpansionMode)
  {
    $this->autoExpansionMode = $autoExpansionMode;
  }
  /** @return string */
  public function getAutoExpansionMode()
  {
    return $this->autoExpansionMode;
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
  public function setEnableFuzzyExtraction($enableFuzzyExtraction)
  {
    $this->enableFuzzyExtraction = $enableFuzzyExtraction;
  }
  /** @return bool */
  public function getEnableFuzzyExtraction()
  {
    return $this->enableFuzzyExtraction;
  }
  /** @param GoogleCloudDialogflowV2beta1EntityTypeEntity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudDialogflowV2beta1EntityTypeEntity[] */
  public function getEntities()
  {
    return $this->entities;
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

class GoogleCloudDialogflowV2beta1EntityTypeEntity extends \Google\Collection
{
  /** @var string[] */
  public $synonyms;
  /** @var string */
  public $value;
  protected $collection_key = 'synonyms';
  /** @param string[] */
  public function setSynonyms($synonyms)
  {
    $this->synonyms = $synonyms;
  }
  /** @return string[] */
  public function getSynonyms()
  {
    return $this->synonyms;
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

class GoogleCloudDialogflowV2beta1EventInput extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $name;
  /** @var array[] */
  public $parameters;

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
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleCloudDialogflowV2beta1ExportAgentResponse extends \Google\Model
{
  /** @var string */
  public $agentContent;
  /** @var string */
  public $agentUri;

  /** @param string */
  public function setAgentContent($agentContent)
  {
    $this->agentContent = $agentContent;
  }
  /** @return string */
  public function getAgentContent()
  {
    return $this->agentContent;
  }
  /** @param string */
  public function setAgentUri($agentUri)
  {
    $this->agentUri = $agentUri;
  }
  /** @return string */
  public function getAgentUri()
  {
    return $this->agentUri;
  }
}

class GoogleCloudDialogflowV2beta1ExportOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2beta1GcsDestination */
  public $exportedGcsDestination;
  protected $exportedGcsDestinationType = GoogleCloudDialogflowV2beta1GcsDestination::class;
  protected $exportedGcsDestinationDataType = '';
  /** @param GoogleCloudDialogflowV2beta1GcsDestination */
  public function setExportedGcsDestination(GoogleCloudDialogflowV2beta1GcsDestination $exportedGcsDestination)
  {
    $this->exportedGcsDestination = $exportedGcsDestination;
  }
  /** @return GoogleCloudDialogflowV2beta1GcsDestination */
  public function getExportedGcsDestination()
  {
    return $this->exportedGcsDestination;
  }
}

class GoogleCloudDialogflowV2beta1FaqAnswer extends \Google\Model
{
  /** @var string */
  public $answer;
  /** @var string */
  public $answerRecord;
  /** @var float */
  public $confidence;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $question;
  /** @var string */
  public $source;

  /** @param string */
  public function setAnswer($answer)
  {
    $this->answer = $answer;
  }
  /** @return string */
  public function getAnswer()
  {
    return $this->answer;
  }
  /** @param string */
  public function setAnswerRecord($answerRecord)
  {
    $this->answerRecord = $answerRecord;
  }
  /** @return string */
  public function getAnswerRecord()
  {
    return $this->answerRecord;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setQuestion($question)
  {
    $this->question = $question;
  }
  /** @return string */
  public function getQuestion()
  {
    return $this->question;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
}

class GoogleCloudDialogflowV2beta1GcsDestination extends \Google\Model
{
  /** @var string */
  public $uri;

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

class GoogleCloudDialogflowV2beta1HumanAgentAssistantEvent extends \Google\Collection
{
  /** @var string */
  public $conversation;
  /** @var string */
  public $participant;
  /** @var GoogleCloudDialogflowV2beta1SuggestionResult[] */
  public $suggestionResults;
  protected $collection_key = 'suggestionResults';
  protected $suggestionResultsType = GoogleCloudDialogflowV2beta1SuggestionResult::class;
  protected $suggestionResultsDataType = 'array';
  /** @param string */
  public function setConversation($conversation)
  {
    $this->conversation = $conversation;
  }
  /** @return string */
  public function getConversation()
  {
    return $this->conversation;
  }
  /** @param string */
  public function setParticipant($participant)
  {
    $this->participant = $participant;
  }
  /** @return string */
  public function getParticipant()
  {
    return $this->participant;
  }
  /** @param GoogleCloudDialogflowV2beta1SuggestionResult[] */
  public function setSuggestionResults($suggestionResults)
  {
    $this->suggestionResults = $suggestionResults;
  }
  /** @return GoogleCloudDialogflowV2beta1SuggestionResult[] */
  public function getSuggestionResults()
  {
    return $this->suggestionResults;
  }
}

class GoogleCloudDialogflowV2beta1ImportDocumentsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $warningsType = GoogleRpcStatus::class;
  protected $warningsDataType = 'array';
  /** @param GoogleRpcStatus[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return GoogleRpcStatus[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class GoogleCloudDialogflowV2beta1Intent extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var string[] */
  public $defaultResponsePlatforms;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $endInteraction;
  /** @var string[] */
  public $events;
  /** @var GoogleCloudDialogflowV2beta1IntentFollowupIntentInfo[] */
  public $followupIntentInfo;
  /** @var string[] */
  public $inputContextNames;
  /** @var bool */
  public $isFallback;
  /** @var bool */
  public $liveAgentHandoff;
  /** @var GoogleCloudDialogflowV2beta1IntentMessage[] */
  public $messages;
  /** @var bool */
  public $mlDisabled;
  /** @var bool */
  public $mlEnabled;
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowV2beta1Context[] */
  public $outputContexts;
  /** @var GoogleCloudDialogflowV2beta1IntentParameter[] */
  public $parameters;
  /** @var string */
  public $parentFollowupIntentName;
  /** @var int */
  public $priority;
  /** @var bool */
  public $resetContexts;
  /** @var string */
  public $rootFollowupIntentName;
  /** @var GoogleCloudDialogflowV2beta1IntentTrainingPhrase[] */
  public $trainingPhrases;
  /** @var string */
  public $webhookState;
  protected $collection_key = 'trainingPhrases';
  protected $followupIntentInfoType = GoogleCloudDialogflowV2beta1IntentFollowupIntentInfo::class;
  protected $followupIntentInfoDataType = 'array';
  protected $messagesType = GoogleCloudDialogflowV2beta1IntentMessage::class;
  protected $messagesDataType = 'array';
  protected $outputContextsType = GoogleCloudDialogflowV2beta1Context::class;
  protected $outputContextsDataType = 'array';
  protected $parametersType = GoogleCloudDialogflowV2beta1IntentParameter::class;
  protected $parametersDataType = 'array';
  protected $trainingPhrasesType = GoogleCloudDialogflowV2beta1IntentTrainingPhrase::class;
  protected $trainingPhrasesDataType = 'array';
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
  public function setDefaultResponsePlatforms($defaultResponsePlatforms)
  {
    $this->defaultResponsePlatforms = $defaultResponsePlatforms;
  }
  /** @return string[] */
  public function getDefaultResponsePlatforms()
  {
    return $this->defaultResponsePlatforms;
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
  public function setEndInteraction($endInteraction)
  {
    $this->endInteraction = $endInteraction;
  }
  /** @return bool */
  public function getEndInteraction()
  {
    return $this->endInteraction;
  }
  /** @param string[] */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /** @return string[] */
  public function getEvents()
  {
    return $this->events;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentFollowupIntentInfo[] */
  public function setFollowupIntentInfo($followupIntentInfo)
  {
    $this->followupIntentInfo = $followupIntentInfo;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentFollowupIntentInfo[] */
  public function getFollowupIntentInfo()
  {
    return $this->followupIntentInfo;
  }
  /** @param string[] */
  public function setInputContextNames($inputContextNames)
  {
    $this->inputContextNames = $inputContextNames;
  }
  /** @return string[] */
  public function getInputContextNames()
  {
    return $this->inputContextNames;
  }
  /** @param bool */
  public function setIsFallback($isFallback)
  {
    $this->isFallback = $isFallback;
  }
  /** @return bool */
  public function getIsFallback()
  {
    return $this->isFallback;
  }
  /** @param bool */
  public function setLiveAgentHandoff($liveAgentHandoff)
  {
    $this->liveAgentHandoff = $liveAgentHandoff;
  }
  /** @return bool */
  public function getLiveAgentHandoff()
  {
    return $this->liveAgentHandoff;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessage[] */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessage[] */
  public function getMessages()
  {
    return $this->messages;
  }
  /** @param bool */
  public function setMlDisabled($mlDisabled)
  {
    $this->mlDisabled = $mlDisabled;
  }
  /** @return bool */
  public function getMlDisabled()
  {
    return $this->mlDisabled;
  }
  /** @param bool */
  public function setMlEnabled($mlEnabled)
  {
    $this->mlEnabled = $mlEnabled;
  }
  /** @return bool */
  public function getMlEnabled()
  {
    return $this->mlEnabled;
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
  /** @param GoogleCloudDialogflowV2beta1Context[] */
  public function setOutputContexts($outputContexts)
  {
    $this->outputContexts = $outputContexts;
  }
  /** @return GoogleCloudDialogflowV2beta1Context[] */
  public function getOutputContexts()
  {
    return $this->outputContexts;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setParentFollowupIntentName($parentFollowupIntentName)
  {
    $this->parentFollowupIntentName = $parentFollowupIntentName;
  }
  /** @return string */
  public function getParentFollowupIntentName()
  {
    return $this->parentFollowupIntentName;
  }
  /** @param int */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return int */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param bool */
  public function setResetContexts($resetContexts)
  {
    $this->resetContexts = $resetContexts;
  }
  /** @return bool */
  public function getResetContexts()
  {
    return $this->resetContexts;
  }
  /** @param string */
  public function setRootFollowupIntentName($rootFollowupIntentName)
  {
    $this->rootFollowupIntentName = $rootFollowupIntentName;
  }
  /** @return string */
  public function getRootFollowupIntentName()
  {
    return $this->rootFollowupIntentName;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentTrainingPhrase[] */
  public function setTrainingPhrases($trainingPhrases)
  {
    $this->trainingPhrases = $trainingPhrases;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentTrainingPhrase[] */
  public function getTrainingPhrases()
  {
    return $this->trainingPhrases;
  }
  /** @param string */
  public function setWebhookState($webhookState)
  {
    $this->webhookState = $webhookState;
  }
  /** @return string */
  public function getWebhookState()
  {
    return $this->webhookState;
  }
}

class GoogleCloudDialogflowV2beta1IntentFollowupIntentInfo extends \Google\Model
{
  /** @var string */
  public $followupIntentName;
  /** @var string */
  public $parentFollowupIntentName;

  /** @param string */
  public function setFollowupIntentName($followupIntentName)
  {
    $this->followupIntentName = $followupIntentName;
  }
  /** @return string */
  public function getFollowupIntentName()
  {
    return $this->followupIntentName;
  }
  /** @param string */
  public function setParentFollowupIntentName($parentFollowupIntentName)
  {
    $this->parentFollowupIntentName = $parentFollowupIntentName;
  }
  /** @return string */
  public function getParentFollowupIntentName()
  {
    return $this->parentFollowupIntentName;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessage extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageBasicCard */
  public $basicCard;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCard */
  public $browseCarouselCard;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageCard */
  public $card;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageCarouselSelect */
  public $carouselSelect;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageImage */
  public $image;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageLinkOutSuggestion */
  public $linkOutSuggestion;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageListSelect */
  public $listSelect;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageMediaContent */
  public $mediaContent;
  /** @var array[] */
  public $payload;
  /** @var string */
  public $platform;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageQuickReplies */
  public $quickReplies;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmCarouselCard */
  public $rbmCarouselRichCard;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmStandaloneCard */
  public $rbmStandaloneRichCard;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmText */
  public $rbmText;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageSimpleResponses */
  public $simpleResponses;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageSuggestions */
  public $suggestions;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageTableCard */
  public $tableCard;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageTelephonyPlayAudio */
  public $telephonyPlayAudio;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageTelephonySynthesizeSpeech */
  public $telephonySynthesizeSpeech;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageTelephonyTransferCall */
  public $telephonyTransferCall;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageText */
  public $text;
  protected $basicCardType = GoogleCloudDialogflowV2beta1IntentMessageBasicCard::class;
  protected $basicCardDataType = '';
  protected $browseCarouselCardType = GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCard::class;
  protected $browseCarouselCardDataType = '';
  protected $cardType = GoogleCloudDialogflowV2beta1IntentMessageCard::class;
  protected $cardDataType = '';
  protected $carouselSelectType = GoogleCloudDialogflowV2beta1IntentMessageCarouselSelect::class;
  protected $carouselSelectDataType = '';
  protected $imageType = GoogleCloudDialogflowV2beta1IntentMessageImage::class;
  protected $imageDataType = '';
  protected $linkOutSuggestionType = GoogleCloudDialogflowV2beta1IntentMessageLinkOutSuggestion::class;
  protected $linkOutSuggestionDataType = '';
  protected $listSelectType = GoogleCloudDialogflowV2beta1IntentMessageListSelect::class;
  protected $listSelectDataType = '';
  protected $mediaContentType = GoogleCloudDialogflowV2beta1IntentMessageMediaContent::class;
  protected $mediaContentDataType = '';
  protected $quickRepliesType = GoogleCloudDialogflowV2beta1IntentMessageQuickReplies::class;
  protected $quickRepliesDataType = '';
  protected $rbmCarouselRichCardType = GoogleCloudDialogflowV2beta1IntentMessageRbmCarouselCard::class;
  protected $rbmCarouselRichCardDataType = '';
  protected $rbmStandaloneRichCardType = GoogleCloudDialogflowV2beta1IntentMessageRbmStandaloneCard::class;
  protected $rbmStandaloneRichCardDataType = '';
  protected $rbmTextType = GoogleCloudDialogflowV2beta1IntentMessageRbmText::class;
  protected $rbmTextDataType = '';
  protected $simpleResponsesType = GoogleCloudDialogflowV2beta1IntentMessageSimpleResponses::class;
  protected $simpleResponsesDataType = '';
  protected $suggestionsType = GoogleCloudDialogflowV2beta1IntentMessageSuggestions::class;
  protected $suggestionsDataType = '';
  protected $tableCardType = GoogleCloudDialogflowV2beta1IntentMessageTableCard::class;
  protected $tableCardDataType = '';
  protected $telephonyPlayAudioType = GoogleCloudDialogflowV2beta1IntentMessageTelephonyPlayAudio::class;
  protected $telephonyPlayAudioDataType = '';
  protected $telephonySynthesizeSpeechType = GoogleCloudDialogflowV2beta1IntentMessageTelephonySynthesizeSpeech::class;
  protected $telephonySynthesizeSpeechDataType = '';
  protected $telephonyTransferCallType = GoogleCloudDialogflowV2beta1IntentMessageTelephonyTransferCall::class;
  protected $telephonyTransferCallDataType = '';
  protected $textType = GoogleCloudDialogflowV2beta1IntentMessageText::class;
  protected $textDataType = '';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageBasicCard */
  public function setBasicCard(GoogleCloudDialogflowV2beta1IntentMessageBasicCard $basicCard)
  {
    $this->basicCard = $basicCard;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageBasicCard */
  public function getBasicCard()
  {
    return $this->basicCard;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCard */
  public function setBrowseCarouselCard(GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCard $browseCarouselCard)
  {
    $this->browseCarouselCard = $browseCarouselCard;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCard */
  public function getBrowseCarouselCard()
  {
    return $this->browseCarouselCard;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageCard */
  public function setCard(GoogleCloudDialogflowV2beta1IntentMessageCard $card)
  {
    $this->card = $card;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageCard */
  public function getCard()
  {
    return $this->card;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageCarouselSelect */
  public function setCarouselSelect(GoogleCloudDialogflowV2beta1IntentMessageCarouselSelect $carouselSelect)
  {
    $this->carouselSelect = $carouselSelect;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageCarouselSelect */
  public function getCarouselSelect()
  {
    return $this->carouselSelect;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2beta1IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageLinkOutSuggestion */
  public function setLinkOutSuggestion(GoogleCloudDialogflowV2beta1IntentMessageLinkOutSuggestion $linkOutSuggestion)
  {
    $this->linkOutSuggestion = $linkOutSuggestion;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageLinkOutSuggestion */
  public function getLinkOutSuggestion()
  {
    return $this->linkOutSuggestion;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageListSelect */
  public function setListSelect(GoogleCloudDialogflowV2beta1IntentMessageListSelect $listSelect)
  {
    $this->listSelect = $listSelect;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageListSelect */
  public function getListSelect()
  {
    return $this->listSelect;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageMediaContent */
  public function setMediaContent(GoogleCloudDialogflowV2beta1IntentMessageMediaContent $mediaContent)
  {
    $this->mediaContent = $mediaContent;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageMediaContent */
  public function getMediaContent()
  {
    return $this->mediaContent;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
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
  /** @param GoogleCloudDialogflowV2beta1IntentMessageQuickReplies */
  public function setQuickReplies(GoogleCloudDialogflowV2beta1IntentMessageQuickReplies $quickReplies)
  {
    $this->quickReplies = $quickReplies;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageQuickReplies */
  public function getQuickReplies()
  {
    return $this->quickReplies;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmCarouselCard */
  public function setRbmCarouselRichCard(GoogleCloudDialogflowV2beta1IntentMessageRbmCarouselCard $rbmCarouselRichCard)
  {
    $this->rbmCarouselRichCard = $rbmCarouselRichCard;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmCarouselCard */
  public function getRbmCarouselRichCard()
  {
    return $this->rbmCarouselRichCard;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmStandaloneCard */
  public function setRbmStandaloneRichCard(GoogleCloudDialogflowV2beta1IntentMessageRbmStandaloneCard $rbmStandaloneRichCard)
  {
    $this->rbmStandaloneRichCard = $rbmStandaloneRichCard;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmStandaloneCard */
  public function getRbmStandaloneRichCard()
  {
    return $this->rbmStandaloneRichCard;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmText */
  public function setRbmText(GoogleCloudDialogflowV2beta1IntentMessageRbmText $rbmText)
  {
    $this->rbmText = $rbmText;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmText */
  public function getRbmText()
  {
    return $this->rbmText;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageSimpleResponses */
  public function setSimpleResponses(GoogleCloudDialogflowV2beta1IntentMessageSimpleResponses $simpleResponses)
  {
    $this->simpleResponses = $simpleResponses;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageSimpleResponses */
  public function getSimpleResponses()
  {
    return $this->simpleResponses;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageSuggestions */
  public function setSuggestions(GoogleCloudDialogflowV2beta1IntentMessageSuggestions $suggestions)
  {
    $this->suggestions = $suggestions;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageSuggestions */
  public function getSuggestions()
  {
    return $this->suggestions;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageTableCard */
  public function setTableCard(GoogleCloudDialogflowV2beta1IntentMessageTableCard $tableCard)
  {
    $this->tableCard = $tableCard;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageTableCard */
  public function getTableCard()
  {
    return $this->tableCard;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageTelephonyPlayAudio */
  public function setTelephonyPlayAudio(GoogleCloudDialogflowV2beta1IntentMessageTelephonyPlayAudio $telephonyPlayAudio)
  {
    $this->telephonyPlayAudio = $telephonyPlayAudio;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageTelephonyPlayAudio */
  public function getTelephonyPlayAudio()
  {
    return $this->telephonyPlayAudio;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageTelephonySynthesizeSpeech */
  public function setTelephonySynthesizeSpeech(GoogleCloudDialogflowV2beta1IntentMessageTelephonySynthesizeSpeech $telephonySynthesizeSpeech)
  {
    $this->telephonySynthesizeSpeech = $telephonySynthesizeSpeech;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageTelephonySynthesizeSpeech */
  public function getTelephonySynthesizeSpeech()
  {
    return $this->telephonySynthesizeSpeech;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageTelephonyTransferCall */
  public function setTelephonyTransferCall(GoogleCloudDialogflowV2beta1IntentMessageTelephonyTransferCall $telephonyTransferCall)
  {
    $this->telephonyTransferCall = $telephonyTransferCall;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageTelephonyTransferCall */
  public function getTelephonyTransferCall()
  {
    return $this->telephonyTransferCall;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageText */
  public function setText(GoogleCloudDialogflowV2beta1IntentMessageText $text)
  {
    $this->text = $text;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageText */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageBasicCard extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton[] */
  public $buttons;
  /** @var string */
  public $formattedText;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageImage */
  public $image;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;
  protected $collection_key = 'buttons';
  protected $buttonsType = GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton::class;
  protected $buttonsDataType = 'array';
  protected $imageType = GoogleCloudDialogflowV2beta1IntentMessageImage::class;
  protected $imageDataType = '';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton[] */
  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton[] */
  public function getButtons()
  {
    return $this->buttons;
  }
  /** @param string */
  public function setFormattedText($formattedText)
  {
    $this->formattedText = $formattedText;
  }
  /** @return string */
  public function getFormattedText()
  {
    return $this->formattedText;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2beta1IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageBasicCardButtonOpenUriAction */
  public $openUriAction;
  /** @var string */
  public $title;
  protected $openUriActionType = GoogleCloudDialogflowV2beta1IntentMessageBasicCardButtonOpenUriAction::class;
  protected $openUriActionDataType = '';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageBasicCardButtonOpenUriAction */
  public function setOpenUriAction(GoogleCloudDialogflowV2beta1IntentMessageBasicCardButtonOpenUriAction $openUriAction)
  {
    $this->openUriAction = $openUriAction;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageBasicCardButtonOpenUriAction */
  public function getOpenUriAction()
  {
    return $this->openUriAction;
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

class GoogleCloudDialogflowV2beta1IntentMessageBasicCardButtonOpenUriAction extends \Google\Model
{
  /** @var string */
  public $uri;

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

class GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCard extends \Google\Collection
{
  /** @var string */
  public $imageDisplayOptions;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItem[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItem::class;
  protected $itemsDataType = 'array';
  /** @param string */
  public function setImageDisplayOptions($imageDisplayOptions)
  {
    $this->imageDisplayOptions = $imageDisplayOptions;
  }
  /** @return string */
  public function getImageDisplayOptions()
  {
    return $this->imageDisplayOptions;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItem[] */
  public function getItems()
  {
    return $this->items;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItem extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $footer;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageImage */
  public $image;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction */
  public $openUriAction;
  /** @var string */
  public $title;
  protected $imageType = GoogleCloudDialogflowV2beta1IntentMessageImage::class;
  protected $imageDataType = '';
  protected $openUriActionType = GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction::class;
  protected $openUriActionDataType = '';
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
  public function setFooter($footer)
  {
    $this->footer = $footer;
  }
  /** @return string */
  public function getFooter()
  {
    return $this->footer;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2beta1IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction */
  public function setOpenUriAction(GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction $openUriAction)
  {
    $this->openUriAction = $openUriAction;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction */
  public function getOpenUriAction()
  {
    return $this->openUriAction;
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

class GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction extends \Google\Model
{
  /** @var string */
  public $url;
  /** @var string */
  public $urlTypeHint;

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
  /** @param string */
  public function setUrlTypeHint($urlTypeHint)
  {
    $this->urlTypeHint = $urlTypeHint;
  }
  /** @return string */
  public function getUrlTypeHint()
  {
    return $this->urlTypeHint;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageCard extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageCardButton[] */
  public $buttons;
  /** @var string */
  public $imageUri;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;
  protected $collection_key = 'buttons';
  protected $buttonsType = GoogleCloudDialogflowV2beta1IntentMessageCardButton::class;
  protected $buttonsDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageCardButton[] */
  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageCardButton[] */
  public function getButtons()
  {
    return $this->buttons;
  }
  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class GoogleCloudDialogflowV2beta1IntentMessageCardButton extends \Google\Model
{
  /** @var string */
  public $postback;
  /** @var string */
  public $text;

  /** @param string */
  public function setPostback($postback)
  {
    $this->postback = $postback;
  }
  /** @return string */
  public function getPostback()
  {
    return $this->postback;
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

class GoogleCloudDialogflowV2beta1IntentMessageCarouselSelect extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageCarouselSelectItem[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = GoogleCloudDialogflowV2beta1IntentMessageCarouselSelectItem::class;
  protected $itemsDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageCarouselSelectItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageCarouselSelectItem[] */
  public function getItems()
  {
    return $this->items;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageCarouselSelectItem extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageImage */
  public $image;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo */
  public $info;
  /** @var string */
  public $title;
  protected $imageType = GoogleCloudDialogflowV2beta1IntentMessageImage::class;
  protected $imageDataType = '';
  protected $infoType = GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo::class;
  protected $infoDataType = '';
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
  /** @param GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2beta1IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo */
  public function setInfo(GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo $info)
  {
    $this->info = $info;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo */
  public function getInfo()
  {
    return $this->info;
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

class GoogleCloudDialogflowV2beta1IntentMessageColumnProperties extends \Google\Model
{
  /** @var string */
  public $header;
  /** @var string */
  public $horizontalAlignment;

  /** @param string */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /** @return string */
  public function getHeader()
  {
    return $this->header;
  }
  /** @param string */
  public function setHorizontalAlignment($horizontalAlignment)
  {
    $this->horizontalAlignment = $horizontalAlignment;
  }
  /** @return string */
  public function getHorizontalAlignment()
  {
    return $this->horizontalAlignment;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageImage extends \Google\Model
{
  /** @var string */
  public $accessibilityText;
  /** @var string */
  public $imageUri;

  /** @param string */
  public function setAccessibilityText($accessibilityText)
  {
    $this->accessibilityText = $accessibilityText;
  }
  /** @return string */
  public function getAccessibilityText()
  {
    return $this->accessibilityText;
  }
  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageLinkOutSuggestion extends \Google\Model
{
  /** @var string */
  public $destinationName;
  /** @var string */
  public $uri;

  /** @param string */
  public function setDestinationName($destinationName)
  {
    $this->destinationName = $destinationName;
  }
  /** @return string */
  public function getDestinationName()
  {
    return $this->destinationName;
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

class GoogleCloudDialogflowV2beta1IntentMessageListSelect extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageListSelectItem[] */
  public $items;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;
  protected $collection_key = 'items';
  protected $itemsType = GoogleCloudDialogflowV2beta1IntentMessageListSelectItem::class;
  protected $itemsDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageListSelectItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageListSelectItem[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class GoogleCloudDialogflowV2beta1IntentMessageListSelectItem extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageImage */
  public $image;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo */
  public $info;
  /** @var string */
  public $title;
  protected $imageType = GoogleCloudDialogflowV2beta1IntentMessageImage::class;
  protected $imageDataType = '';
  protected $infoType = GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo::class;
  protected $infoDataType = '';
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
  /** @param GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2beta1IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo */
  public function setInfo(GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo $info)
  {
    $this->info = $info;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo */
  public function getInfo()
  {
    return $this->info;
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

class GoogleCloudDialogflowV2beta1IntentMessageMediaContent extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageMediaContentResponseMediaObject[] */
  public $mediaObjects;
  /** @var string */
  public $mediaType;
  protected $collection_key = 'mediaObjects';
  protected $mediaObjectsType = GoogleCloudDialogflowV2beta1IntentMessageMediaContentResponseMediaObject::class;
  protected $mediaObjectsDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageMediaContentResponseMediaObject[] */
  public function setMediaObjects($mediaObjects)
  {
    $this->mediaObjects = $mediaObjects;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageMediaContentResponseMediaObject[] */
  public function getMediaObjects()
  {
    return $this->mediaObjects;
  }
  /** @param string */
  public function setMediaType($mediaType)
  {
    $this->mediaType = $mediaType;
  }
  /** @return string */
  public function getMediaType()
  {
    return $this->mediaType;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageMediaContentResponseMediaObject extends \Google\Model
{
  /** @var string */
  public $contentUrl;
  /** @var string */
  public $description;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageImage */
  public $icon;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageImage */
  public $largeImage;
  /** @var string */
  public $name;
  protected $iconType = GoogleCloudDialogflowV2beta1IntentMessageImage::class;
  protected $iconDataType = '';
  protected $largeImageType = GoogleCloudDialogflowV2beta1IntentMessageImage::class;
  protected $largeImageDataType = '';
  /** @param string */
  public function setContentUrl($contentUrl)
  {
    $this->contentUrl = $contentUrl;
  }
  /** @return string */
  public function getContentUrl()
  {
    return $this->contentUrl;
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
  /** @param GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function setIcon(GoogleCloudDialogflowV2beta1IntentMessageImage $icon)
  {
    $this->icon = $icon;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function getIcon()
  {
    return $this->icon;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function setLargeImage(GoogleCloudDialogflowV2beta1IntentMessageImage $largeImage)
  {
    $this->largeImage = $largeImage;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function getLargeImage()
  {
    return $this->largeImage;
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

class GoogleCloudDialogflowV2beta1IntentMessageQuickReplies extends \Google\Collection
{
  /** @var string[] */
  public $quickReplies;
  /** @var string */
  public $title;
  protected $collection_key = 'quickReplies';
  /** @param string[] */
  public function setQuickReplies($quickReplies)
  {
    $this->quickReplies = $quickReplies;
  }
  /** @return string[] */
  public function getQuickReplies()
  {
    return $this->quickReplies;
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

class GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia */
  public $media;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion[] */
  public $suggestions;
  /** @var string */
  public $title;
  protected $collection_key = 'suggestions';
  protected $mediaType = GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia::class;
  protected $mediaDataType = '';
  protected $suggestionsType = GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion::class;
  protected $suggestionsDataType = 'array';
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
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia */
  public function setMedia(GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia $media)
  {
    $this->media = $media;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia */
  public function getMedia()
  {
    return $this->media;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion[] */
  public function setSuggestions($suggestions)
  {
    $this->suggestions = $suggestions;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion[] */
  public function getSuggestions()
  {
    return $this->suggestions;
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

class GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia extends \Google\Model
{
  /** @var string */
  public $fileUri;
  /** @var string */
  public $height;
  /** @var string */
  public $thumbnailUri;

  /** @param string */
  public function setFileUri($fileUri)
  {
    $this->fileUri = $fileUri;
  }
  /** @return string */
  public function getFileUri()
  {
    return $this->fileUri;
  }
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
  public function setThumbnailUri($thumbnailUri)
  {
    $this->thumbnailUri = $thumbnailUri;
  }
  /** @return string */
  public function getThumbnailUri()
  {
    return $this->thumbnailUri;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageRbmCarouselCard extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent[] */
  public $cardContents;
  /** @var string */
  public $cardWidth;
  protected $collection_key = 'cardContents';
  protected $cardContentsType = GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent::class;
  protected $cardContentsDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent[] */
  public function setCardContents($cardContents)
  {
    $this->cardContents = $cardContents;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent[] */
  public function getCardContents()
  {
    return $this->cardContents;
  }
  /** @param string */
  public function setCardWidth($cardWidth)
  {
    $this->cardWidth = $cardWidth;
  }
  /** @return string */
  public function getCardWidth()
  {
    return $this->cardWidth;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageRbmStandaloneCard extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent */
  public $cardContent;
  /** @var string */
  public $cardOrientation;
  /** @var string */
  public $thumbnailImageAlignment;
  protected $cardContentType = GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent::class;
  protected $cardContentDataType = '';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent */
  public function setCardContent(GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent $cardContent)
  {
    $this->cardContent = $cardContent;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent */
  public function getCardContent()
  {
    return $this->cardContent;
  }
  /** @param string */
  public function setCardOrientation($cardOrientation)
  {
    $this->cardOrientation = $cardOrientation;
  }
  /** @return string */
  public function getCardOrientation()
  {
    return $this->cardOrientation;
  }
  /** @param string */
  public function setThumbnailImageAlignment($thumbnailImageAlignment)
  {
    $this->thumbnailImageAlignment = $thumbnailImageAlignment;
  }
  /** @return string */
  public function getThumbnailImageAlignment()
  {
    return $this->thumbnailImageAlignment;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedAction extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionDial */
  public $dial;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionOpenUri */
  public $openUrl;
  /** @var string */
  public $postbackData;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionShareLocation */
  public $shareLocation;
  /** @var string */
  public $text;
  protected $dialType = GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionDial::class;
  protected $dialDataType = '';
  protected $openUrlType = GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionOpenUri::class;
  protected $openUrlDataType = '';
  protected $shareLocationType = GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionShareLocation::class;
  protected $shareLocationDataType = '';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionDial */
  public function setDial(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionDial $dial)
  {
    $this->dial = $dial;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionDial */
  public function getDial()
  {
    return $this->dial;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionOpenUri */
  public function setOpenUrl(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionOpenUri $openUrl)
  {
    $this->openUrl = $openUrl;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionOpenUri */
  public function getOpenUrl()
  {
    return $this->openUrl;
  }
  /** @param string */
  public function setPostbackData($postbackData)
  {
    $this->postbackData = $postbackData;
  }
  /** @return string */
  public function getPostbackData()
  {
    return $this->postbackData;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionShareLocation */
  public function setShareLocation(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionShareLocation $shareLocation)
  {
    $this->shareLocation = $shareLocation;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionShareLocation */
  public function getShareLocation()
  {
    return $this->shareLocation;
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

class GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionDial extends \Google\Model
{
  /** @var string */
  public $phoneNumber;

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

class GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionOpenUri extends \Google\Model
{
  /** @var string */
  public $uri;

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

class GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionShareLocation extends \Google\Model
{
}

class GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedReply extends \Google\Model
{
  /** @var string */
  public $postbackData;
  /** @var string */
  public $text;

  /** @param string */
  public function setPostbackData($postbackData)
  {
    $this->postbackData = $postbackData;
  }
  /** @return string */
  public function getPostbackData()
  {
    return $this->postbackData;
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

class GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedAction */
  public $action;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedReply */
  public $reply;
  protected $actionType = GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedAction::class;
  protected $actionDataType = '';
  protected $replyType = GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedReply::class;
  protected $replyDataType = '';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedAction */
  public function setAction(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedAction $action)
  {
    $this->action = $action;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedReply */
  public function setReply(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedReply $reply)
  {
    $this->reply = $reply;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedReply */
  public function getReply()
  {
    return $this->reply;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageRbmText extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion[] */
  public $rbmSuggestion;
  /** @var string */
  public $text;
  protected $collection_key = 'rbmSuggestion';
  protected $rbmSuggestionType = GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion::class;
  protected $rbmSuggestionDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion[] */
  public function setRbmSuggestion($rbmSuggestion)
  {
    $this->rbmSuggestion = $rbmSuggestion;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion[] */
  public function getRbmSuggestion()
  {
    return $this->rbmSuggestion;
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

class GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo extends \Google\Collection
{
  /** @var string */
  public $key;
  /** @var string[] */
  public $synonyms;
  protected $collection_key = 'synonyms';
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
  /** @param string[] */
  public function setSynonyms($synonyms)
  {
    $this->synonyms = $synonyms;
  }
  /** @return string[] */
  public function getSynonyms()
  {
    return $this->synonyms;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageSimpleResponse extends \Google\Model
{
  /** @var string */
  public $displayText;
  /** @var string */
  public $ssml;
  /** @var string */
  public $textToSpeech;

  /** @param string */
  public function setDisplayText($displayText)
  {
    $this->displayText = $displayText;
  }
  /** @return string */
  public function getDisplayText()
  {
    return $this->displayText;
  }
  /** @param string */
  public function setSsml($ssml)
  {
    $this->ssml = $ssml;
  }
  /** @return string */
  public function getSsml()
  {
    return $this->ssml;
  }
  /** @param string */
  public function setTextToSpeech($textToSpeech)
  {
    $this->textToSpeech = $textToSpeech;
  }
  /** @return string */
  public function getTextToSpeech()
  {
    return $this->textToSpeech;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageSimpleResponses extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageSimpleResponse[] */
  public $simpleResponses;
  protected $collection_key = 'simpleResponses';
  protected $simpleResponsesType = GoogleCloudDialogflowV2beta1IntentMessageSimpleResponse::class;
  protected $simpleResponsesDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageSimpleResponse[] */
  public function setSimpleResponses($simpleResponses)
  {
    $this->simpleResponses = $simpleResponses;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageSimpleResponse[] */
  public function getSimpleResponses()
  {
    return $this->simpleResponses;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageSuggestion extends \Google\Model
{
  /** @var string */
  public $title;

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

class GoogleCloudDialogflowV2beta1IntentMessageSuggestions extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageSuggestion[] */
  public $suggestions;
  protected $collection_key = 'suggestions';
  protected $suggestionsType = GoogleCloudDialogflowV2beta1IntentMessageSuggestion::class;
  protected $suggestionsDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageSuggestion[] */
  public function setSuggestions($suggestions)
  {
    $this->suggestions = $suggestions;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageSuggestion[] */
  public function getSuggestions()
  {
    return $this->suggestions;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageTableCard extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton[] */
  public $buttons;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageColumnProperties[] */
  public $columnProperties;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageImage */
  public $image;
  /** @var GoogleCloudDialogflowV2beta1IntentMessageTableCardRow[] */
  public $rows;
  /** @var string */
  public $subtitle;
  /** @var string */
  public $title;
  protected $collection_key = 'rows';
  protected $buttonsType = GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton::class;
  protected $buttonsDataType = 'array';
  protected $columnPropertiesType = GoogleCloudDialogflowV2beta1IntentMessageColumnProperties::class;
  protected $columnPropertiesDataType = 'array';
  protected $imageType = GoogleCloudDialogflowV2beta1IntentMessageImage::class;
  protected $imageDataType = '';
  protected $rowsType = GoogleCloudDialogflowV2beta1IntentMessageTableCardRow::class;
  protected $rowsDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton[] */
  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton[] */
  public function getButtons()
  {
    return $this->buttons;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageColumnProperties[] */
  public function setColumnProperties($columnProperties)
  {
    $this->columnProperties = $columnProperties;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageColumnProperties[] */
  public function getColumnProperties()
  {
    return $this->columnProperties;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function setImage(GoogleCloudDialogflowV2beta1IntentMessageImage $image)
  {
    $this->image = $image;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageImage */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessageTableCardRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageTableCardRow[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
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

class GoogleCloudDialogflowV2beta1IntentMessageTableCardCell extends \Google\Model
{
  /** @var string */
  public $text;

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

class GoogleCloudDialogflowV2beta1IntentMessageTableCardRow extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1IntentMessageTableCardCell[] */
  public $cells;
  /** @var bool */
  public $dividerAfter;
  protected $collection_key = 'cells';
  protected $cellsType = GoogleCloudDialogflowV2beta1IntentMessageTableCardCell::class;
  protected $cellsDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1IntentMessageTableCardCell[] */
  public function setCells($cells)
  {
    $this->cells = $cells;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessageTableCardCell[] */
  public function getCells()
  {
    return $this->cells;
  }
  /** @param bool */
  public function setDividerAfter($dividerAfter)
  {
    $this->dividerAfter = $dividerAfter;
  }
  /** @return bool */
  public function getDividerAfter()
  {
    return $this->dividerAfter;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageTelephonyPlayAudio extends \Google\Model
{
  /** @var string */
  public $audioUri;

  /** @param string */
  public function setAudioUri($audioUri)
  {
    $this->audioUri = $audioUri;
  }
  /** @return string */
  public function getAudioUri()
  {
    return $this->audioUri;
  }
}

class GoogleCloudDialogflowV2beta1IntentMessageTelephonySynthesizeSpeech extends \Google\Model
{
  /** @var string */
  public $ssml;
  /** @var string */
  public $text;

  /** @param string */
  public function setSsml($ssml)
  {
    $this->ssml = $ssml;
  }
  /** @return string */
  public function getSsml()
  {
    return $this->ssml;
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

class GoogleCloudDialogflowV2beta1IntentMessageTelephonyTransferCall extends \Google\Model
{
  /** @var string */
  public $phoneNumber;

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

class GoogleCloudDialogflowV2beta1IntentMessageText extends \Google\Collection
{
  /** @var string[] */
  public $text;
  protected $collection_key = 'text';
  /** @param string[] */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string[] */
  public function getText()
  {
    return $this->text;
  }
}

class GoogleCloudDialogflowV2beta1IntentParameter extends \Google\Collection
{
  /** @var string */
  public $defaultValue;
  /** @var string */
  public $displayName;
  /** @var string */
  public $entityTypeDisplayName;
  /** @var bool */
  public $isList;
  /** @var bool */
  public $mandatory;
  /** @var string */
  public $name;
  /** @var string[] */
  public $prompts;
  /** @var string */
  public $value;
  protected $collection_key = 'prompts';
  /** @param string */
  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return string */
  public function getDefaultValue()
  {
    return $this->defaultValue;
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
  public function setEntityTypeDisplayName($entityTypeDisplayName)
  {
    $this->entityTypeDisplayName = $entityTypeDisplayName;
  }
  /** @return string */
  public function getEntityTypeDisplayName()
  {
    return $this->entityTypeDisplayName;
  }
  /** @param bool */
  public function setIsList($isList)
  {
    $this->isList = $isList;
  }
  /** @return bool */
  public function getIsList()
  {
    return $this->isList;
  }
  /** @param bool */
  public function setMandatory($mandatory)
  {
    $this->mandatory = $mandatory;
  }
  /** @return bool */
  public function getMandatory()
  {
    return $this->mandatory;
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
  public function setPrompts($prompts)
  {
    $this->prompts = $prompts;
  }
  /** @return string[] */
  public function getPrompts()
  {
    return $this->prompts;
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

class GoogleCloudDialogflowV2beta1IntentTrainingPhrase extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart[] */
  public $parts;
  /** @var int */
  public $timesAddedCount;
  /** @var string */
  public $type;
  protected $collection_key = 'parts';
  protected $partsType = GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart::class;
  protected $partsDataType = 'array';
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
  /** @param GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart[] */
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart[] */
  public function getParts()
  {
    return $this->parts;
  }
  /** @param int */
  public function setTimesAddedCount($timesAddedCount)
  {
    $this->timesAddedCount = $timesAddedCount;
  }
  /** @return int */
  public function getTimesAddedCount()
  {
    return $this->timesAddedCount;
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

class GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart extends \Google\Model
{
  /** @var string */
  public $alias;
  /** @var string */
  public $entityType;
  /** @var string */
  public $text;
  /** @var bool */
  public $userDefined;

  /** @param string */
  public function setAlias($alias)
  {
    $this->alias = $alias;
  }
  /** @return string */
  public function getAlias()
  {
    return $this->alias;
  }
  /** @param string */
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /** @return string */
  public function getEntityType()
  {
    return $this->entityType;
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
  /** @param bool */
  public function setUserDefined($userDefined)
  {
    $this->userDefined = $userDefined;
  }
  /** @return bool */
  public function getUserDefined()
  {
    return $this->userDefined;
  }
}

class GoogleCloudDialogflowV2beta1KnowledgeAnswers extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1KnowledgeAnswersAnswer[] */
  public $answers;
  protected $collection_key = 'answers';
  protected $answersType = GoogleCloudDialogflowV2beta1KnowledgeAnswersAnswer::class;
  protected $answersDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1KnowledgeAnswersAnswer[] */
  public function setAnswers($answers)
  {
    $this->answers = $answers;
  }
  /** @return GoogleCloudDialogflowV2beta1KnowledgeAnswersAnswer[] */
  public function getAnswers()
  {
    return $this->answers;
  }
}

class GoogleCloudDialogflowV2beta1KnowledgeAnswersAnswer extends \Google\Model
{
  /** @var string */
  public $answer;
  /** @var string */
  public $faqQuestion;
  /** @var float */
  public $matchConfidence;
  /** @var string */
  public $matchConfidenceLevel;
  /** @var string */
  public $source;

  /** @param string */
  public function setAnswer($answer)
  {
    $this->answer = $answer;
  }
  /** @return string */
  public function getAnswer()
  {
    return $this->answer;
  }
  /** @param string */
  public function setFaqQuestion($faqQuestion)
  {
    $this->faqQuestion = $faqQuestion;
  }
  /** @return string */
  public function getFaqQuestion()
  {
    return $this->faqQuestion;
  }
  /** @param float */
  public function setMatchConfidence($matchConfidence)
  {
    $this->matchConfidence = $matchConfidence;
  }
  /** @return float */
  public function getMatchConfidence()
  {
    return $this->matchConfidence;
  }
  /** @param string */
  public function setMatchConfidenceLevel($matchConfidenceLevel)
  {
    $this->matchConfidenceLevel = $matchConfidenceLevel;
  }
  /** @return string */
  public function getMatchConfidenceLevel()
  {
    return $this->matchConfidenceLevel;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
}

class GoogleCloudDialogflowV2beta1KnowledgeOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2beta1ExportOperationMetadata */
  public $exportOperationMetadata;
  /** @var string */
  public $knowledgeBase;
  /** @var string */
  public $state;
  protected $exportOperationMetadataType = GoogleCloudDialogflowV2beta1ExportOperationMetadata::class;
  protected $exportOperationMetadataDataType = '';
  /** @param GoogleCloudDialogflowV2beta1ExportOperationMetadata */
  public function setExportOperationMetadata(GoogleCloudDialogflowV2beta1ExportOperationMetadata $exportOperationMetadata)
  {
    $this->exportOperationMetadata = $exportOperationMetadata;
  }
  /** @return GoogleCloudDialogflowV2beta1ExportOperationMetadata */
  public function getExportOperationMetadata()
  {
    return $this->exportOperationMetadata;
  }
  /** @param string */
  public function setKnowledgeBase($knowledgeBase)
  {
    $this->knowledgeBase = $knowledgeBase;
  }
  /** @return string */
  public function getKnowledgeBase()
  {
    return $this->knowledgeBase;
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

class GoogleCloudDialogflowV2beta1Message extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $createTime;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudDialogflowV2beta1MessageAnnotation */
  public $messageAnnotation;
  /** @var string */
  public $name;
  /** @var string */
  public $participant;
  /** @var string */
  public $participantRole;
  /** @var string */
  public $sendTime;
  /** @var GoogleCloudDialogflowV2beta1SentimentAnalysisResult */
  public $sentimentAnalysis;
  protected $messageAnnotationType = GoogleCloudDialogflowV2beta1MessageAnnotation::class;
  protected $messageAnnotationDataType = '';
  protected $sentimentAnalysisType = GoogleCloudDialogflowV2beta1SentimentAnalysisResult::class;
  protected $sentimentAnalysisDataType = '';
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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param GoogleCloudDialogflowV2beta1MessageAnnotation */
  public function setMessageAnnotation(GoogleCloudDialogflowV2beta1MessageAnnotation $messageAnnotation)
  {
    $this->messageAnnotation = $messageAnnotation;
  }
  /** @return GoogleCloudDialogflowV2beta1MessageAnnotation */
  public function getMessageAnnotation()
  {
    return $this->messageAnnotation;
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
  public function setParticipant($participant)
  {
    $this->participant = $participant;
  }
  /** @return string */
  public function getParticipant()
  {
    return $this->participant;
  }
  /** @param string */
  public function setParticipantRole($participantRole)
  {
    $this->participantRole = $participantRole;
  }
  /** @return string */
  public function getParticipantRole()
  {
    return $this->participantRole;
  }
  /** @param string */
  public function setSendTime($sendTime)
  {
    $this->sendTime = $sendTime;
  }
  /** @return string */
  public function getSendTime()
  {
    return $this->sendTime;
  }
  /** @param GoogleCloudDialogflowV2beta1SentimentAnalysisResult */
  public function setSentimentAnalysis(GoogleCloudDialogflowV2beta1SentimentAnalysisResult $sentimentAnalysis)
  {
    $this->sentimentAnalysis = $sentimentAnalysis;
  }
  /** @return GoogleCloudDialogflowV2beta1SentimentAnalysisResult */
  public function getSentimentAnalysis()
  {
    return $this->sentimentAnalysis;
  }
}

class GoogleCloudDialogflowV2beta1MessageAnnotation extends \Google\Collection
{
  /** @var bool */
  public $containEntities;
  /** @var GoogleCloudDialogflowV2beta1AnnotatedMessagePart[] */
  public $parts;
  protected $collection_key = 'parts';
  protected $partsType = GoogleCloudDialogflowV2beta1AnnotatedMessagePart::class;
  protected $partsDataType = 'array';
  /** @param bool */
  public function setContainEntities($containEntities)
  {
    $this->containEntities = $containEntities;
  }
  /** @return bool */
  public function getContainEntities()
  {
    return $this->containEntities;
  }
  /** @param GoogleCloudDialogflowV2beta1AnnotatedMessagePart[] */
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  /** @return GoogleCloudDialogflowV2beta1AnnotatedMessagePart[] */
  public function getParts()
  {
    return $this->parts;
  }
}

class GoogleCloudDialogflowV2beta1OriginalDetectIntentRequest extends \Google\Model
{
  /** @var array[] */
  public $payload;
  /** @var string */
  public $source;
  /** @var string */
  public $version;

  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
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

class GoogleCloudDialogflowV2beta1QueryResult extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var bool */
  public $allRequiredParamsPresent;
  /** @var bool */
  public $cancelsSlotFilling;
  /** @var array[] */
  public $diagnosticInfo;
  /** @var GoogleCloudDialogflowV2beta1IntentMessage[] */
  public $fulfillmentMessages;
  /** @var string */
  public $fulfillmentText;
  /** @var GoogleCloudDialogflowV2beta1Intent */
  public $intent;
  /** @var float */
  public $intentDetectionConfidence;
  /** @var GoogleCloudDialogflowV2beta1KnowledgeAnswers */
  public $knowledgeAnswers;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudDialogflowV2beta1Context[] */
  public $outputContexts;
  /** @var array[] */
  public $parameters;
  /** @var string */
  public $queryText;
  /** @var GoogleCloudDialogflowV2beta1SentimentAnalysisResult */
  public $sentimentAnalysisResult;
  /** @var float */
  public $speechRecognitionConfidence;
  /** @var array[] */
  public $webhookPayload;
  /** @var string */
  public $webhookSource;
  protected $collection_key = 'outputContexts';
  protected $fulfillmentMessagesType = GoogleCloudDialogflowV2beta1IntentMessage::class;
  protected $fulfillmentMessagesDataType = 'array';
  protected $intentType = GoogleCloudDialogflowV2beta1Intent::class;
  protected $intentDataType = '';
  protected $knowledgeAnswersType = GoogleCloudDialogflowV2beta1KnowledgeAnswers::class;
  protected $knowledgeAnswersDataType = '';
  protected $outputContextsType = GoogleCloudDialogflowV2beta1Context::class;
  protected $outputContextsDataType = 'array';
  protected $sentimentAnalysisResultType = GoogleCloudDialogflowV2beta1SentimentAnalysisResult::class;
  protected $sentimentAnalysisResultDataType = '';
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
  /** @param bool */
  public function setAllRequiredParamsPresent($allRequiredParamsPresent)
  {
    $this->allRequiredParamsPresent = $allRequiredParamsPresent;
  }
  /** @return bool */
  public function getAllRequiredParamsPresent()
  {
    return $this->allRequiredParamsPresent;
  }
  /** @param bool */
  public function setCancelsSlotFilling($cancelsSlotFilling)
  {
    $this->cancelsSlotFilling = $cancelsSlotFilling;
  }
  /** @return bool */
  public function getCancelsSlotFilling()
  {
    return $this->cancelsSlotFilling;
  }
  /** @param array[] */
  public function setDiagnosticInfo($diagnosticInfo)
  {
    $this->diagnosticInfo = $diagnosticInfo;
  }
  /** @return array[] */
  public function getDiagnosticInfo()
  {
    return $this->diagnosticInfo;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessage[] */
  public function setFulfillmentMessages($fulfillmentMessages)
  {
    $this->fulfillmentMessages = $fulfillmentMessages;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessage[] */
  public function getFulfillmentMessages()
  {
    return $this->fulfillmentMessages;
  }
  /** @param string */
  public function setFulfillmentText($fulfillmentText)
  {
    $this->fulfillmentText = $fulfillmentText;
  }
  /** @return string */
  public function getFulfillmentText()
  {
    return $this->fulfillmentText;
  }
  /** @param GoogleCloudDialogflowV2beta1Intent */
  public function setIntent(GoogleCloudDialogflowV2beta1Intent $intent)
  {
    $this->intent = $intent;
  }
  /** @return GoogleCloudDialogflowV2beta1Intent */
  public function getIntent()
  {
    return $this->intent;
  }
  /** @param float */
  public function setIntentDetectionConfidence($intentDetectionConfidence)
  {
    $this->intentDetectionConfidence = $intentDetectionConfidence;
  }
  /** @return float */
  public function getIntentDetectionConfidence()
  {
    return $this->intentDetectionConfidence;
  }
  /** @param GoogleCloudDialogflowV2beta1KnowledgeAnswers */
  public function setKnowledgeAnswers(GoogleCloudDialogflowV2beta1KnowledgeAnswers $knowledgeAnswers)
  {
    $this->knowledgeAnswers = $knowledgeAnswers;
  }
  /** @return GoogleCloudDialogflowV2beta1KnowledgeAnswers */
  public function getKnowledgeAnswers()
  {
    return $this->knowledgeAnswers;
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
  /** @param GoogleCloudDialogflowV2beta1Context[] */
  public function setOutputContexts($outputContexts)
  {
    $this->outputContexts = $outputContexts;
  }
  /** @return GoogleCloudDialogflowV2beta1Context[] */
  public function getOutputContexts()
  {
    return $this->outputContexts;
  }
  /** @param array[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setQueryText($queryText)
  {
    $this->queryText = $queryText;
  }
  /** @return string */
  public function getQueryText()
  {
    return $this->queryText;
  }
  /** @param GoogleCloudDialogflowV2beta1SentimentAnalysisResult */
  public function setSentimentAnalysisResult(GoogleCloudDialogflowV2beta1SentimentAnalysisResult $sentimentAnalysisResult)
  {
    $this->sentimentAnalysisResult = $sentimentAnalysisResult;
  }
  /** @return GoogleCloudDialogflowV2beta1SentimentAnalysisResult */
  public function getSentimentAnalysisResult()
  {
    return $this->sentimentAnalysisResult;
  }
  /** @param float */
  public function setSpeechRecognitionConfidence($speechRecognitionConfidence)
  {
    $this->speechRecognitionConfidence = $speechRecognitionConfidence;
  }
  /** @return float */
  public function getSpeechRecognitionConfidence()
  {
    return $this->speechRecognitionConfidence;
  }
  /** @param array[] */
  public function setWebhookPayload($webhookPayload)
  {
    $this->webhookPayload = $webhookPayload;
  }
  /** @return array[] */
  public function getWebhookPayload()
  {
    return $this->webhookPayload;
  }
  /** @param string */
  public function setWebhookSource($webhookSource)
  {
    $this->webhookSource = $webhookSource;
  }
  /** @return string */
  public function getWebhookSource()
  {
    return $this->webhookSource;
  }
}

class GoogleCloudDialogflowV2beta1Sentiment extends \Google\Model
{
  /** @var float */
  public $magnitude;
  /** @var float */
  public $score;

  /** @param float */
  public function setMagnitude($magnitude)
  {
    $this->magnitude = $magnitude;
  }
  /** @return float */
  public function getMagnitude()
  {
    return $this->magnitude;
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

class GoogleCloudDialogflowV2beta1SentimentAnalysisResult extends \Google\Model
{
  /** @var GoogleCloudDialogflowV2beta1Sentiment */
  public $queryTextSentiment;
  protected $queryTextSentimentType = GoogleCloudDialogflowV2beta1Sentiment::class;
  protected $queryTextSentimentDataType = '';
  /** @param GoogleCloudDialogflowV2beta1Sentiment */
  public function setQueryTextSentiment(GoogleCloudDialogflowV2beta1Sentiment $queryTextSentiment)
  {
    $this->queryTextSentiment = $queryTextSentiment;
  }
  /** @return GoogleCloudDialogflowV2beta1Sentiment */
  public function getQueryTextSentiment()
  {
    return $this->queryTextSentiment;
  }
}

class GoogleCloudDialogflowV2beta1SessionEntityType extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1EntityTypeEntity[] */
  public $entities;
  /** @var string */
  public $entityOverrideMode;
  /** @var string */
  public $name;
  protected $collection_key = 'entities';
  protected $entitiesType = GoogleCloudDialogflowV2beta1EntityTypeEntity::class;
  protected $entitiesDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1EntityTypeEntity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudDialogflowV2beta1EntityTypeEntity[] */
  public function getEntities()
  {
    return $this->entities;
  }
  /** @param string */
  public function setEntityOverrideMode($entityOverrideMode)
  {
    $this->entityOverrideMode = $entityOverrideMode;
  }
  /** @return string */
  public function getEntityOverrideMode()
  {
    return $this->entityOverrideMode;
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

class GoogleCloudDialogflowV2beta1SetSuggestionFeatureConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversationProfile;
  /** @var string */
  public $createTime;
  /** @var string */
  public $participantRole;
  /** @var string */
  public $suggestionFeatureType;

  /** @param string */
  public function setConversationProfile($conversationProfile)
  {
    $this->conversationProfile = $conversationProfile;
  }
  /** @return string */
  public function getConversationProfile()
  {
    return $this->conversationProfile;
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
  public function setParticipantRole($participantRole)
  {
    $this->participantRole = $participantRole;
  }
  /** @return string */
  public function getParticipantRole()
  {
    return $this->participantRole;
  }
  /** @param string */
  public function setSuggestionFeatureType($suggestionFeatureType)
  {
    $this->suggestionFeatureType = $suggestionFeatureType;
  }
  /** @return string */
  public function getSuggestionFeatureType()
  {
    return $this->suggestionFeatureType;
  }
}

class GoogleCloudDialogflowV2beta1SmartReplyAnswer extends \Google\Model
{
  /** @var string */
  public $answerRecord;
  /** @var float */
  public $confidence;
  /** @var string */
  public $reply;

  /** @param string */
  public function setAnswerRecord($answerRecord)
  {
    $this->answerRecord = $answerRecord;
  }
  /** @return string */
  public function getAnswerRecord()
  {
    return $this->answerRecord;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setReply($reply)
  {
    $this->reply = $reply;
  }
  /** @return string */
  public function getReply()
  {
    return $this->reply;
  }
}

class GoogleCloudDialogflowV2beta1SuggestArticlesResponse extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1ArticleAnswer[] */
  public $articleAnswers;
  /** @var int */
  public $contextSize;
  /** @var string */
  public $latestMessage;
  protected $collection_key = 'articleAnswers';
  protected $articleAnswersType = GoogleCloudDialogflowV2beta1ArticleAnswer::class;
  protected $articleAnswersDataType = 'array';
  /** @param GoogleCloudDialogflowV2beta1ArticleAnswer[] */
  public function setArticleAnswers($articleAnswers)
  {
    $this->articleAnswers = $articleAnswers;
  }
  /** @return GoogleCloudDialogflowV2beta1ArticleAnswer[] */
  public function getArticleAnswers()
  {
    return $this->articleAnswers;
  }
  /** @param int */
  public function setContextSize($contextSize)
  {
    $this->contextSize = $contextSize;
  }
  /** @return int */
  public function getContextSize()
  {
    return $this->contextSize;
  }
  /** @param string */
  public function setLatestMessage($latestMessage)
  {
    $this->latestMessage = $latestMessage;
  }
  /** @return string */
  public function getLatestMessage()
  {
    return $this->latestMessage;
  }
}

class GoogleCloudDialogflowV2beta1SuggestFaqAnswersResponse extends \Google\Collection
{
  /** @var int */
  public $contextSize;
  /** @var GoogleCloudDialogflowV2beta1FaqAnswer[] */
  public $faqAnswers;
  /** @var string */
  public $latestMessage;
  protected $collection_key = 'faqAnswers';
  protected $faqAnswersType = GoogleCloudDialogflowV2beta1FaqAnswer::class;
  protected $faqAnswersDataType = 'array';
  /** @param int */
  public function setContextSize($contextSize)
  {
    $this->contextSize = $contextSize;
  }
  /** @return int */
  public function getContextSize()
  {
    return $this->contextSize;
  }
  /** @param GoogleCloudDialogflowV2beta1FaqAnswer[] */
  public function setFaqAnswers($faqAnswers)
  {
    $this->faqAnswers = $faqAnswers;
  }
  /** @return GoogleCloudDialogflowV2beta1FaqAnswer[] */
  public function getFaqAnswers()
  {
    return $this->faqAnswers;
  }
  /** @param string */
  public function setLatestMessage($latestMessage)
  {
    $this->latestMessage = $latestMessage;
  }
  /** @return string */
  public function getLatestMessage()
  {
    return $this->latestMessage;
  }
}

class GoogleCloudDialogflowV2beta1SuggestSmartRepliesResponse extends \Google\Collection
{
  /** @var int */
  public $contextSize;
  /** @var string */
  public $latestMessage;
  /** @var GoogleCloudDialogflowV2beta1SmartReplyAnswer[] */
  public $smartReplyAnswers;
  protected $collection_key = 'smartReplyAnswers';
  protected $smartReplyAnswersType = GoogleCloudDialogflowV2beta1SmartReplyAnswer::class;
  protected $smartReplyAnswersDataType = 'array';
  /** @param int */
  public function setContextSize($contextSize)
  {
    $this->contextSize = $contextSize;
  }
  /** @return int */
  public function getContextSize()
  {
    return $this->contextSize;
  }
  /** @param string */
  public function setLatestMessage($latestMessage)
  {
    $this->latestMessage = $latestMessage;
  }
  /** @return string */
  public function getLatestMessage()
  {
    return $this->latestMessage;
  }
  /** @param GoogleCloudDialogflowV2beta1SmartReplyAnswer[] */
  public function setSmartReplyAnswers($smartReplyAnswers)
  {
    $this->smartReplyAnswers = $smartReplyAnswers;
  }
  /** @return GoogleCloudDialogflowV2beta1SmartReplyAnswer[] */
  public function getSmartReplyAnswers()
  {
    return $this->smartReplyAnswers;
  }
}

class GoogleCloudDialogflowV2beta1SuggestionResult extends \Google\Model
{
  /** @var GoogleRpcStatus */
  public $error;
  /** @var GoogleCloudDialogflowV2beta1SuggestArticlesResponse */
  public $suggestArticlesResponse;
  /** @var GoogleCloudDialogflowV2beta1SuggestFaqAnswersResponse */
  public $suggestFaqAnswersResponse;
  /** @var GoogleCloudDialogflowV2beta1SuggestSmartRepliesResponse */
  public $suggestSmartRepliesResponse;
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $suggestArticlesResponseType = GoogleCloudDialogflowV2beta1SuggestArticlesResponse::class;
  protected $suggestArticlesResponseDataType = '';
  protected $suggestFaqAnswersResponseType = GoogleCloudDialogflowV2beta1SuggestFaqAnswersResponse::class;
  protected $suggestFaqAnswersResponseDataType = '';
  protected $suggestSmartRepliesResponseType = GoogleCloudDialogflowV2beta1SuggestSmartRepliesResponse::class;
  protected $suggestSmartRepliesResponseDataType = '';
  /** @param GoogleRpcStatus */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /** @return GoogleRpcStatus */
  public function getError()
  {
    return $this->error;
  }
  /** @param GoogleCloudDialogflowV2beta1SuggestArticlesResponse */
  public function setSuggestArticlesResponse(GoogleCloudDialogflowV2beta1SuggestArticlesResponse $suggestArticlesResponse)
  {
    $this->suggestArticlesResponse = $suggestArticlesResponse;
  }
  /** @return GoogleCloudDialogflowV2beta1SuggestArticlesResponse */
  public function getSuggestArticlesResponse()
  {
    return $this->suggestArticlesResponse;
  }
  /** @param GoogleCloudDialogflowV2beta1SuggestFaqAnswersResponse */
  public function setSuggestFaqAnswersResponse(GoogleCloudDialogflowV2beta1SuggestFaqAnswersResponse $suggestFaqAnswersResponse)
  {
    $this->suggestFaqAnswersResponse = $suggestFaqAnswersResponse;
  }
  /** @return GoogleCloudDialogflowV2beta1SuggestFaqAnswersResponse */
  public function getSuggestFaqAnswersResponse()
  {
    return $this->suggestFaqAnswersResponse;
  }
  /** @param GoogleCloudDialogflowV2beta1SuggestSmartRepliesResponse */
  public function setSuggestSmartRepliesResponse(GoogleCloudDialogflowV2beta1SuggestSmartRepliesResponse $suggestSmartRepliesResponse)
  {
    $this->suggestSmartRepliesResponse = $suggestSmartRepliesResponse;
  }
  /** @return GoogleCloudDialogflowV2beta1SuggestSmartRepliesResponse */
  public function getSuggestSmartRepliesResponse()
  {
    return $this->suggestSmartRepliesResponse;
  }
}

class GoogleCloudDialogflowV2beta1WebhookRequest extends \Google\Collection
{
  /** @var GoogleCloudDialogflowV2beta1QueryResult[] */
  public $alternativeQueryResults;
  /** @var GoogleCloudDialogflowV2beta1OriginalDetectIntentRequest */
  public $originalDetectIntentRequest;
  /** @var GoogleCloudDialogflowV2beta1QueryResult */
  public $queryResult;
  /** @var string */
  public $responseId;
  /** @var string */
  public $session;
  protected $collection_key = 'alternativeQueryResults';
  protected $alternativeQueryResultsType = GoogleCloudDialogflowV2beta1QueryResult::class;
  protected $alternativeQueryResultsDataType = 'array';
  protected $originalDetectIntentRequestType = GoogleCloudDialogflowV2beta1OriginalDetectIntentRequest::class;
  protected $originalDetectIntentRequestDataType = '';
  protected $queryResultType = GoogleCloudDialogflowV2beta1QueryResult::class;
  protected $queryResultDataType = '';
  /** @param GoogleCloudDialogflowV2beta1QueryResult[] */
  public function setAlternativeQueryResults($alternativeQueryResults)
  {
    $this->alternativeQueryResults = $alternativeQueryResults;
  }
  /** @return GoogleCloudDialogflowV2beta1QueryResult[] */
  public function getAlternativeQueryResults()
  {
    return $this->alternativeQueryResults;
  }
  /** @param GoogleCloudDialogflowV2beta1OriginalDetectIntentRequest */
  public function setOriginalDetectIntentRequest(GoogleCloudDialogflowV2beta1OriginalDetectIntentRequest $originalDetectIntentRequest)
  {
    $this->originalDetectIntentRequest = $originalDetectIntentRequest;
  }
  /** @return GoogleCloudDialogflowV2beta1OriginalDetectIntentRequest */
  public function getOriginalDetectIntentRequest()
  {
    return $this->originalDetectIntentRequest;
  }
  /** @param GoogleCloudDialogflowV2beta1QueryResult */
  public function setQueryResult(GoogleCloudDialogflowV2beta1QueryResult $queryResult)
  {
    $this->queryResult = $queryResult;
  }
  /** @return GoogleCloudDialogflowV2beta1QueryResult */
  public function getQueryResult()
  {
    return $this->queryResult;
  }
  /** @param string */
  public function setResponseId($responseId)
  {
    $this->responseId = $responseId;
  }
  /** @return string */
  public function getResponseId()
  {
    return $this->responseId;
  }
  /** @param string */
  public function setSession($session)
  {
    $this->session = $session;
  }
  /** @return string */
  public function getSession()
  {
    return $this->session;
  }
}

class GoogleCloudDialogflowV2beta1WebhookResponse extends \Google\Collection
{
  /** @var bool */
  public $endInteraction;
  /** @var GoogleCloudDialogflowV2beta1EventInput */
  public $followupEventInput;
  /** @var GoogleCloudDialogflowV2beta1IntentMessage[] */
  public $fulfillmentMessages;
  /** @var string */
  public $fulfillmentText;
  /** @var bool */
  public $liveAgentHandoff;
  /** @var GoogleCloudDialogflowV2beta1Context[] */
  public $outputContexts;
  /** @var array[] */
  public $payload;
  /** @var GoogleCloudDialogflowV2beta1SessionEntityType[] */
  public $sessionEntityTypes;
  /** @var string */
  public $source;
  protected $collection_key = 'sessionEntityTypes';
  protected $followupEventInputType = GoogleCloudDialogflowV2beta1EventInput::class;
  protected $followupEventInputDataType = '';
  protected $fulfillmentMessagesType = GoogleCloudDialogflowV2beta1IntentMessage::class;
  protected $fulfillmentMessagesDataType = 'array';
  protected $outputContextsType = GoogleCloudDialogflowV2beta1Context::class;
  protected $outputContextsDataType = 'array';
  protected $sessionEntityTypesType = GoogleCloudDialogflowV2beta1SessionEntityType::class;
  protected $sessionEntityTypesDataType = 'array';
  /** @param bool */
  public function setEndInteraction($endInteraction)
  {
    $this->endInteraction = $endInteraction;
  }
  /** @return bool */
  public function getEndInteraction()
  {
    return $this->endInteraction;
  }
  /** @param GoogleCloudDialogflowV2beta1EventInput */
  public function setFollowupEventInput(GoogleCloudDialogflowV2beta1EventInput $followupEventInput)
  {
    $this->followupEventInput = $followupEventInput;
  }
  /** @return GoogleCloudDialogflowV2beta1EventInput */
  public function getFollowupEventInput()
  {
    return $this->followupEventInput;
  }
  /** @param GoogleCloudDialogflowV2beta1IntentMessage[] */
  public function setFulfillmentMessages($fulfillmentMessages)
  {
    $this->fulfillmentMessages = $fulfillmentMessages;
  }
  /** @return GoogleCloudDialogflowV2beta1IntentMessage[] */
  public function getFulfillmentMessages()
  {
    return $this->fulfillmentMessages;
  }
  /** @param string */
  public function setFulfillmentText($fulfillmentText)
  {
    $this->fulfillmentText = $fulfillmentText;
  }
  /** @return string */
  public function getFulfillmentText()
  {
    return $this->fulfillmentText;
  }
  /** @param bool */
  public function setLiveAgentHandoff($liveAgentHandoff)
  {
    $this->liveAgentHandoff = $liveAgentHandoff;
  }
  /** @return bool */
  public function getLiveAgentHandoff()
  {
    return $this->liveAgentHandoff;
  }
  /** @param GoogleCloudDialogflowV2beta1Context[] */
  public function setOutputContexts($outputContexts)
  {
    $this->outputContexts = $outputContexts;
  }
  /** @return GoogleCloudDialogflowV2beta1Context[] */
  public function getOutputContexts()
  {
    return $this->outputContexts;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param GoogleCloudDialogflowV2beta1SessionEntityType[] */
  public function setSessionEntityTypes($sessionEntityTypes)
  {
    $this->sessionEntityTypes = $sessionEntityTypes;
  }
  /** @return GoogleCloudDialogflowV2beta1SessionEntityType[] */
  public function getSessionEntityTypes()
  {
    return $this->sessionEntityTypes;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
}

class GoogleCloudDialogflowV3alpha1CreateDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowV3alpha1DeleteDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata extends \Google\Model
{
  /** @var string */
  public $state;

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

class GoogleCloudDialogflowV3alpha1ImportDocumentsOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowV3alpha1ImportDocumentsResponse extends \Google\Collection
{
  /** @var GoogleRpcStatus[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $warningsType = GoogleRpcStatus::class;
  protected $warningsDataType = 'array';
  /** @param GoogleRpcStatus[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return GoogleRpcStatus[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class GoogleCloudDialogflowV3alpha1ReloadDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudDialogflowV3alpha1UpdateDocumentOperationMetadata extends \Google\Model
{
  /** @var GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /** @param GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public function setGenericMetadata(GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /** @return GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
}

class GoogleCloudLocationListLocationsResponse extends \Google\Collection
{
  /** @var GoogleCloudLocationLocation[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = GoogleCloudLocationLocation::class;
  protected $locationsDataType = 'array';
  /** @param GoogleCloudLocationLocation[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return GoogleCloudLocationLocation[] */
  public function getLocations()
  {
    return $this->locations;
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

class GoogleCloudLocationLocation extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $locationId;
  /** @var array[] */
  public $metadata;
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
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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
}

class GoogleLongrunningListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleLongrunningOperation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = GoogleLongrunningOperation::class;
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
  /** @param GoogleLongrunningOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleLongrunningOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class GoogleLongrunningOperation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = GoogleRpcStatus::class;
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
  /** @param GoogleRpcStatus */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /** @return GoogleRpcStatus */
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

class GoogleProtobufEmpty extends \Google\Model
{
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

class GoogleTypeLatLng extends \Google\Model
{
  public $latitude;
  public $longitude;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowCxV3AdvancedSettings::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3AdvancedSettings');
class_alias(GoogleCloudDialogflowCxV3AdvancedSettingsLoggingSettings::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3AdvancedSettingsLoggingSettings');
class_alias(GoogleCloudDialogflowCxV3Agent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Agent');
class_alias(GoogleCloudDialogflowCxV3AgentValidationResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3AgentValidationResult');
class_alias(GoogleCloudDialogflowCxV3AudioInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3AudioInput');
class_alias(GoogleCloudDialogflowCxV3BatchDeleteTestCasesRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3BatchDeleteTestCasesRequest');
class_alias(GoogleCloudDialogflowCxV3BatchRunTestCasesMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3BatchRunTestCasesMetadata');
class_alias(GoogleCloudDialogflowCxV3BatchRunTestCasesRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3BatchRunTestCasesRequest');
class_alias(GoogleCloudDialogflowCxV3BatchRunTestCasesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3BatchRunTestCasesResponse');
class_alias(GoogleCloudDialogflowCxV3CalculateCoverageResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3CalculateCoverageResponse');
class_alias(GoogleCloudDialogflowCxV3Changelog::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Changelog');
class_alias(GoogleCloudDialogflowCxV3CompareVersionsRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3CompareVersionsRequest');
class_alias(GoogleCloudDialogflowCxV3CompareVersionsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3CompareVersionsResponse');
class_alias(GoogleCloudDialogflowCxV3ContinuousTestResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ContinuousTestResult');
class_alias(GoogleCloudDialogflowCxV3ConversationTurn::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ConversationTurn');
class_alias(GoogleCloudDialogflowCxV3ConversationTurnUserInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ConversationTurnUserInput');
class_alias(GoogleCloudDialogflowCxV3ConversationTurnVirtualAgentOutput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ConversationTurnVirtualAgentOutput');
class_alias(GoogleCloudDialogflowCxV3CreateDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3CreateDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3CreateVersionOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3CreateVersionOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3DeleteDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3DeleteDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3DeployFlowMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3DeployFlowMetadata');
class_alias(GoogleCloudDialogflowCxV3DeployFlowRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3DeployFlowRequest');
class_alias(GoogleCloudDialogflowCxV3DeployFlowResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3DeployFlowResponse');
class_alias(GoogleCloudDialogflowCxV3Deployment::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Deployment');
class_alias(GoogleCloudDialogflowCxV3DeploymentResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3DeploymentResult');
class_alias(GoogleCloudDialogflowCxV3DetectIntentRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3DetectIntentRequest');
class_alias(GoogleCloudDialogflowCxV3DetectIntentResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3DetectIntentResponse');
class_alias(GoogleCloudDialogflowCxV3DtmfInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3DtmfInput');
class_alias(GoogleCloudDialogflowCxV3EntityType::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3EntityType');
class_alias(GoogleCloudDialogflowCxV3EntityTypeEntity::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3EntityTypeEntity');
class_alias(GoogleCloudDialogflowCxV3EntityTypeExcludedPhrase::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3EntityTypeExcludedPhrase');
class_alias(GoogleCloudDialogflowCxV3Environment::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Environment');
class_alias(GoogleCloudDialogflowCxV3EnvironmentTestCasesConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3EnvironmentTestCasesConfig');
class_alias(GoogleCloudDialogflowCxV3EnvironmentVersionConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3EnvironmentVersionConfig');
class_alias(GoogleCloudDialogflowCxV3EnvironmentWebhookConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3EnvironmentWebhookConfig');
class_alias(GoogleCloudDialogflowCxV3EventHandler::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3EventHandler');
class_alias(GoogleCloudDialogflowCxV3EventInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3EventInput');
class_alias(GoogleCloudDialogflowCxV3Experiment::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Experiment');
class_alias(GoogleCloudDialogflowCxV3ExperimentDefinition::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExperimentDefinition');
class_alias(GoogleCloudDialogflowCxV3ExperimentResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExperimentResult');
class_alias(GoogleCloudDialogflowCxV3ExperimentResultConfidenceInterval::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExperimentResultConfidenceInterval');
class_alias(GoogleCloudDialogflowCxV3ExperimentResultMetric::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExperimentResultMetric');
class_alias(GoogleCloudDialogflowCxV3ExperimentResultVersionMetrics::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExperimentResultVersionMetrics');
class_alias(GoogleCloudDialogflowCxV3ExportAgentRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExportAgentRequest');
class_alias(GoogleCloudDialogflowCxV3ExportAgentResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExportAgentResponse');
class_alias(GoogleCloudDialogflowCxV3ExportFlowRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExportFlowRequest');
class_alias(GoogleCloudDialogflowCxV3ExportFlowResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExportFlowResponse');
class_alias(GoogleCloudDialogflowCxV3ExportTestCasesMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExportTestCasesMetadata');
class_alias(GoogleCloudDialogflowCxV3ExportTestCasesRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExportTestCasesRequest');
class_alias(GoogleCloudDialogflowCxV3ExportTestCasesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExportTestCasesResponse');
class_alias(GoogleCloudDialogflowCxV3Flow::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Flow');
class_alias(GoogleCloudDialogflowCxV3FlowValidationResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3FlowValidationResult');
class_alias(GoogleCloudDialogflowCxV3Form::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Form');
class_alias(GoogleCloudDialogflowCxV3FormParameter::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3FormParameter');
class_alias(GoogleCloudDialogflowCxV3FormParameterFillBehavior::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3FormParameterFillBehavior');
class_alias(GoogleCloudDialogflowCxV3FulfillIntentRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3FulfillIntentRequest');
class_alias(GoogleCloudDialogflowCxV3FulfillIntentResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3FulfillIntentResponse');
class_alias(GoogleCloudDialogflowCxV3Fulfillment::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Fulfillment');
class_alias(GoogleCloudDialogflowCxV3FulfillmentConditionalCases::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3FulfillmentConditionalCases');
class_alias(GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCase::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCase');
class_alias(GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCaseCaseContent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3FulfillmentConditionalCasesCaseCaseContent');
class_alias(GoogleCloudDialogflowCxV3FulfillmentSetParameterAction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3FulfillmentSetParameterAction');
class_alias(GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3GenericKnowledgeOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3ImportDocumentsOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ImportDocumentsOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3ImportDocumentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ImportDocumentsResponse');
class_alias(GoogleCloudDialogflowCxV3ImportFlowRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ImportFlowRequest');
class_alias(GoogleCloudDialogflowCxV3ImportFlowResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ImportFlowResponse');
class_alias(GoogleCloudDialogflowCxV3ImportTestCasesMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ImportTestCasesMetadata');
class_alias(GoogleCloudDialogflowCxV3ImportTestCasesRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ImportTestCasesRequest');
class_alias(GoogleCloudDialogflowCxV3ImportTestCasesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ImportTestCasesResponse');
class_alias(GoogleCloudDialogflowCxV3InputAudioConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3InputAudioConfig');
class_alias(GoogleCloudDialogflowCxV3Intent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Intent');
class_alias(GoogleCloudDialogflowCxV3IntentCoverage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3IntentCoverage');
class_alias(GoogleCloudDialogflowCxV3IntentCoverageIntent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3IntentCoverageIntent');
class_alias(GoogleCloudDialogflowCxV3IntentInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3IntentInput');
class_alias(GoogleCloudDialogflowCxV3IntentParameter::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3IntentParameter');
class_alias(GoogleCloudDialogflowCxV3IntentTrainingPhrase::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3IntentTrainingPhrase');
class_alias(GoogleCloudDialogflowCxV3IntentTrainingPhrasePart::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3IntentTrainingPhrasePart');
class_alias(GoogleCloudDialogflowCxV3ListAgentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListAgentsResponse');
class_alias(GoogleCloudDialogflowCxV3ListChangelogsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListChangelogsResponse');
class_alias(GoogleCloudDialogflowCxV3ListContinuousTestResultsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListContinuousTestResultsResponse');
class_alias(GoogleCloudDialogflowCxV3ListDeploymentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListDeploymentsResponse');
class_alias(GoogleCloudDialogflowCxV3ListEntityTypesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListEntityTypesResponse');
class_alias(GoogleCloudDialogflowCxV3ListEnvironmentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListEnvironmentsResponse');
class_alias(GoogleCloudDialogflowCxV3ListExperimentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListExperimentsResponse');
class_alias(GoogleCloudDialogflowCxV3ListFlowsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListFlowsResponse');
class_alias(GoogleCloudDialogflowCxV3ListIntentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListIntentsResponse');
class_alias(GoogleCloudDialogflowCxV3ListPagesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListPagesResponse');
class_alias(GoogleCloudDialogflowCxV3ListSecuritySettingsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListSecuritySettingsResponse');
class_alias(GoogleCloudDialogflowCxV3ListSessionEntityTypesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListSessionEntityTypesResponse');
class_alias(GoogleCloudDialogflowCxV3ListTestCaseResultsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListTestCaseResultsResponse');
class_alias(GoogleCloudDialogflowCxV3ListTestCasesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListTestCasesResponse');
class_alias(GoogleCloudDialogflowCxV3ListTransitionRouteGroupsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListTransitionRouteGroupsResponse');
class_alias(GoogleCloudDialogflowCxV3ListVersionsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListVersionsResponse');
class_alias(GoogleCloudDialogflowCxV3ListWebhooksResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListWebhooksResponse');
class_alias(GoogleCloudDialogflowCxV3LoadVersionRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3LoadVersionRequest');
class_alias(GoogleCloudDialogflowCxV3LookupEnvironmentHistoryResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3LookupEnvironmentHistoryResponse');
class_alias(GoogleCloudDialogflowCxV3Match::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Match');
class_alias(GoogleCloudDialogflowCxV3MatchIntentRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3MatchIntentRequest');
class_alias(GoogleCloudDialogflowCxV3MatchIntentResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3MatchIntentResponse');
class_alias(GoogleCloudDialogflowCxV3NluSettings::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3NluSettings');
class_alias(GoogleCloudDialogflowCxV3OutputAudioConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3OutputAudioConfig');
class_alias(GoogleCloudDialogflowCxV3Page::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Page');
class_alias(GoogleCloudDialogflowCxV3PageInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3PageInfo');
class_alias(GoogleCloudDialogflowCxV3PageInfoFormInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3PageInfoFormInfo');
class_alias(GoogleCloudDialogflowCxV3PageInfoFormInfoParameterInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3PageInfoFormInfoParameterInfo');
class_alias(GoogleCloudDialogflowCxV3QueryInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3QueryInput');
class_alias(GoogleCloudDialogflowCxV3QueryParameters::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3QueryParameters');
class_alias(GoogleCloudDialogflowCxV3QueryResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3QueryResult');
class_alias(GoogleCloudDialogflowCxV3ReloadDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ReloadDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3ResourceName::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResourceName');
class_alias(GoogleCloudDialogflowCxV3ResponseMessage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResponseMessage');
class_alias(GoogleCloudDialogflowCxV3ResponseMessageConversationSuccess::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResponseMessageConversationSuccess');
class_alias(GoogleCloudDialogflowCxV3ResponseMessageEndInteraction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResponseMessageEndInteraction');
class_alias(GoogleCloudDialogflowCxV3ResponseMessageLiveAgentHandoff::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResponseMessageLiveAgentHandoff');
class_alias(GoogleCloudDialogflowCxV3ResponseMessageMixedAudio::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResponseMessageMixedAudio');
class_alias(GoogleCloudDialogflowCxV3ResponseMessageMixedAudioSegment::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResponseMessageMixedAudioSegment');
class_alias(GoogleCloudDialogflowCxV3ResponseMessageOutputAudioText::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResponseMessageOutputAudioText');
class_alias(GoogleCloudDialogflowCxV3ResponseMessagePlayAudio::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResponseMessagePlayAudio');
class_alias(GoogleCloudDialogflowCxV3ResponseMessageTelephonyTransferCall::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResponseMessageTelephonyTransferCall');
class_alias(GoogleCloudDialogflowCxV3ResponseMessageText::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ResponseMessageText');
class_alias(GoogleCloudDialogflowCxV3RestoreAgentRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RestoreAgentRequest');
class_alias(GoogleCloudDialogflowCxV3RolloutConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RolloutConfig');
class_alias(GoogleCloudDialogflowCxV3RolloutConfigRolloutStep::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RolloutConfigRolloutStep');
class_alias(GoogleCloudDialogflowCxV3RolloutState::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RolloutState');
class_alias(GoogleCloudDialogflowCxV3RunContinuousTestMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RunContinuousTestMetadata');
class_alias(GoogleCloudDialogflowCxV3RunContinuousTestRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RunContinuousTestRequest');
class_alias(GoogleCloudDialogflowCxV3RunContinuousTestResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RunContinuousTestResponse');
class_alias(GoogleCloudDialogflowCxV3RunTestCaseMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RunTestCaseMetadata');
class_alias(GoogleCloudDialogflowCxV3RunTestCaseRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RunTestCaseRequest');
class_alias(GoogleCloudDialogflowCxV3RunTestCaseResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RunTestCaseResponse');
class_alias(GoogleCloudDialogflowCxV3SecuritySettings::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SecuritySettings');
class_alias(GoogleCloudDialogflowCxV3SecuritySettingsAudioExportSettings::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SecuritySettingsAudioExportSettings');
class_alias(GoogleCloudDialogflowCxV3SecuritySettingsInsightsExportSettings::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SecuritySettingsInsightsExportSettings');
class_alias(GoogleCloudDialogflowCxV3SentimentAnalysisResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SentimentAnalysisResult');
class_alias(GoogleCloudDialogflowCxV3SessionEntityType::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SessionEntityType');
class_alias(GoogleCloudDialogflowCxV3SessionInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SessionInfo');
class_alias(GoogleCloudDialogflowCxV3SpeechToTextSettings::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SpeechToTextSettings');
class_alias(GoogleCloudDialogflowCxV3StartExperimentRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3StartExperimentRequest');
class_alias(GoogleCloudDialogflowCxV3StopExperimentRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3StopExperimentRequest');
class_alias(GoogleCloudDialogflowCxV3SynthesizeSpeechConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SynthesizeSpeechConfig');
class_alias(GoogleCloudDialogflowCxV3TestCase::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestCase');
class_alias(GoogleCloudDialogflowCxV3TestCaseError::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestCaseError');
class_alias(GoogleCloudDialogflowCxV3TestCaseResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestCaseResult');
class_alias(GoogleCloudDialogflowCxV3TestConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestConfig');
class_alias(GoogleCloudDialogflowCxV3TestError::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestError');
class_alias(GoogleCloudDialogflowCxV3TestRunDifference::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestRunDifference');
class_alias(GoogleCloudDialogflowCxV3TextInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TextInput');
class_alias(GoogleCloudDialogflowCxV3TrainFlowRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TrainFlowRequest');
class_alias(GoogleCloudDialogflowCxV3TransitionCoverage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionCoverage');
class_alias(GoogleCloudDialogflowCxV3TransitionCoverageTransition::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionCoverageTransition');
class_alias(GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionCoverageTransitionNode');
class_alias(GoogleCloudDialogflowCxV3TransitionRoute::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRoute');
class_alias(GoogleCloudDialogflowCxV3TransitionRouteGroup::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRouteGroup');
class_alias(GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRouteGroupCoverage');
class_alias(GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverage');
class_alias(GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverageTransition::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRouteGroupCoverageCoverageTransition');
class_alias(GoogleCloudDialogflowCxV3UpdateDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3UpdateDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3ValidateAgentRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ValidateAgentRequest');
class_alias(GoogleCloudDialogflowCxV3ValidateFlowRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ValidateFlowRequest');
class_alias(GoogleCloudDialogflowCxV3ValidationMessage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ValidationMessage');
class_alias(GoogleCloudDialogflowCxV3VariantsHistory::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3VariantsHistory');
class_alias(GoogleCloudDialogflowCxV3Version::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Version');
class_alias(GoogleCloudDialogflowCxV3VersionVariants::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3VersionVariants');
class_alias(GoogleCloudDialogflowCxV3VersionVariantsVariant::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3VersionVariantsVariant');
class_alias(GoogleCloudDialogflowCxV3VoiceSelectionParams::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3VoiceSelectionParams');
class_alias(GoogleCloudDialogflowCxV3Webhook::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Webhook');
class_alias(GoogleCloudDialogflowCxV3WebhookGenericWebService::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3WebhookGenericWebService');
class_alias(GoogleCloudDialogflowCxV3WebhookRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3WebhookRequest');
class_alias(GoogleCloudDialogflowCxV3WebhookRequestFulfillmentInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3WebhookRequestFulfillmentInfo');
class_alias(GoogleCloudDialogflowCxV3WebhookRequestIntentInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3WebhookRequestIntentInfo');
class_alias(GoogleCloudDialogflowCxV3WebhookRequestIntentInfoIntentParameterValue::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3WebhookRequestIntentInfoIntentParameterValue');
class_alias(GoogleCloudDialogflowCxV3WebhookRequestSentimentAnalysisResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3WebhookRequestSentimentAnalysisResult');
class_alias(GoogleCloudDialogflowCxV3WebhookResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3WebhookResponse');
class_alias(GoogleCloudDialogflowCxV3WebhookResponseFulfillmentResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3WebhookResponseFulfillmentResponse');
class_alias(GoogleCloudDialogflowCxV3WebhookServiceDirectoryConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3WebhookServiceDirectoryConfig');
class_alias(GoogleCloudDialogflowCxV3beta1AudioInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1AudioInput');
class_alias(GoogleCloudDialogflowCxV3beta1BatchRunTestCasesMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1BatchRunTestCasesMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1BatchRunTestCasesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1BatchRunTestCasesResponse');
class_alias(GoogleCloudDialogflowCxV3beta1ContinuousTestResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ContinuousTestResult');
class_alias(GoogleCloudDialogflowCxV3beta1ConversationTurn::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ConversationTurn');
class_alias(GoogleCloudDialogflowCxV3beta1ConversationTurnUserInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ConversationTurnUserInput');
class_alias(GoogleCloudDialogflowCxV3beta1ConversationTurnVirtualAgentOutput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ConversationTurnVirtualAgentOutput');
class_alias(GoogleCloudDialogflowCxV3beta1CreateDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1CreateDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1CreateVersionOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1CreateVersionOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1DeleteDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1DeleteDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1DeployFlowMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1DeployFlowMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1DeployFlowResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1DeployFlowResponse');
class_alias(GoogleCloudDialogflowCxV3beta1DtmfInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1DtmfInput');
class_alias(GoogleCloudDialogflowCxV3beta1Environment::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Environment');
class_alias(GoogleCloudDialogflowCxV3beta1EnvironmentTestCasesConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1EnvironmentTestCasesConfig');
class_alias(GoogleCloudDialogflowCxV3beta1EnvironmentVersionConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1EnvironmentVersionConfig');
class_alias(GoogleCloudDialogflowCxV3beta1EnvironmentWebhookConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1EnvironmentWebhookConfig');
class_alias(GoogleCloudDialogflowCxV3beta1EventHandler::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1EventHandler');
class_alias(GoogleCloudDialogflowCxV3beta1EventInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1EventInput');
class_alias(GoogleCloudDialogflowCxV3beta1ExportAgentResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ExportAgentResponse');
class_alias(GoogleCloudDialogflowCxV3beta1ExportFlowResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ExportFlowResponse');
class_alias(GoogleCloudDialogflowCxV3beta1ExportTestCasesMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ExportTestCasesMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1ExportTestCasesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ExportTestCasesResponse');
class_alias(GoogleCloudDialogflowCxV3beta1Form::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Form');
class_alias(GoogleCloudDialogflowCxV3beta1FormParameter::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1FormParameter');
class_alias(GoogleCloudDialogflowCxV3beta1FormParameterFillBehavior::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1FormParameterFillBehavior');
class_alias(GoogleCloudDialogflowCxV3beta1Fulfillment::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Fulfillment');
class_alias(GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCases');
class_alias(GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCase::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCase');
class_alias(GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCaseCaseContent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1FulfillmentConditionalCasesCaseCaseContent');
class_alias(GoogleCloudDialogflowCxV3beta1FulfillmentSetParameterAction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1FulfillmentSetParameterAction');
class_alias(GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1GenericKnowledgeOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1ImportDocumentsOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ImportDocumentsOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1ImportDocumentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ImportDocumentsResponse');
class_alias(GoogleCloudDialogflowCxV3beta1ImportFlowResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ImportFlowResponse');
class_alias(GoogleCloudDialogflowCxV3beta1ImportTestCasesMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ImportTestCasesMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1ImportTestCasesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ImportTestCasesResponse');
class_alias(GoogleCloudDialogflowCxV3beta1InputAudioConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1InputAudioConfig');
class_alias(GoogleCloudDialogflowCxV3beta1Intent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Intent');
class_alias(GoogleCloudDialogflowCxV3beta1IntentInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1IntentInput');
class_alias(GoogleCloudDialogflowCxV3beta1IntentParameter::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1IntentParameter');
class_alias(GoogleCloudDialogflowCxV3beta1IntentTrainingPhrase::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1IntentTrainingPhrase');
class_alias(GoogleCloudDialogflowCxV3beta1IntentTrainingPhrasePart::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1IntentTrainingPhrasePart');
class_alias(GoogleCloudDialogflowCxV3beta1Page::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Page');
class_alias(GoogleCloudDialogflowCxV3beta1PageInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1PageInfo');
class_alias(GoogleCloudDialogflowCxV3beta1PageInfoFormInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1PageInfoFormInfo');
class_alias(GoogleCloudDialogflowCxV3beta1PageInfoFormInfoParameterInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1PageInfoFormInfoParameterInfo');
class_alias(GoogleCloudDialogflowCxV3beta1QueryInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1QueryInput');
class_alias(GoogleCloudDialogflowCxV3beta1ReloadDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ReloadDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessage');
class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessageConversationSuccess::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessageConversationSuccess');
class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessageEndInteraction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessageEndInteraction');
class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessageLiveAgentHandoff::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessageLiveAgentHandoff');
class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudio::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudio');
class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudioSegment::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessageMixedAudioSegment');
class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessageOutputAudioText::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessageOutputAudioText');
class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio');
class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessageTelephonyTransferCall::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessageTelephonyTransferCall');
class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessageText::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessageText');
class_alias(GoogleCloudDialogflowCxV3beta1RunContinuousTestMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1RunContinuousTestMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1RunContinuousTestResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1RunContinuousTestResponse');
class_alias(GoogleCloudDialogflowCxV3beta1RunTestCaseMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1RunTestCaseMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1RunTestCaseResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1RunTestCaseResponse');
class_alias(GoogleCloudDialogflowCxV3beta1SessionInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1SessionInfo');
class_alias(GoogleCloudDialogflowCxV3beta1TestCase::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1TestCase');
class_alias(GoogleCloudDialogflowCxV3beta1TestCaseError::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1TestCaseError');
class_alias(GoogleCloudDialogflowCxV3beta1TestCaseResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1TestCaseResult');
class_alias(GoogleCloudDialogflowCxV3beta1TestConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1TestConfig');
class_alias(GoogleCloudDialogflowCxV3beta1TestError::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1TestError');
class_alias(GoogleCloudDialogflowCxV3beta1TestRunDifference::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1TestRunDifference');
class_alias(GoogleCloudDialogflowCxV3beta1TextInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1TextInput');
class_alias(GoogleCloudDialogflowCxV3beta1TransitionRoute::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1TransitionRoute');
class_alias(GoogleCloudDialogflowCxV3beta1UpdateDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1UpdateDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowCxV3beta1Webhook::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Webhook');
class_alias(GoogleCloudDialogflowCxV3beta1WebhookGenericWebService::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1WebhookGenericWebService');
class_alias(GoogleCloudDialogflowCxV3beta1WebhookRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1WebhookRequest');
class_alias(GoogleCloudDialogflowCxV3beta1WebhookRequestFulfillmentInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1WebhookRequestFulfillmentInfo');
class_alias(GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfo');
class_alias(GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfoIntentParameterValue::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1WebhookRequestIntentInfoIntentParameterValue');
class_alias(GoogleCloudDialogflowCxV3beta1WebhookRequestSentimentAnalysisResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1WebhookRequestSentimentAnalysisResult');
class_alias(GoogleCloudDialogflowCxV3beta1WebhookResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1WebhookResponse');
class_alias(GoogleCloudDialogflowCxV3beta1WebhookResponseFulfillmentResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1WebhookResponseFulfillmentResponse');
class_alias(GoogleCloudDialogflowCxV3beta1WebhookServiceDirectoryConfig::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1WebhookServiceDirectoryConfig');
class_alias(GoogleCloudDialogflowV2AnnotatedMessagePart::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2AnnotatedMessagePart');
class_alias(GoogleCloudDialogflowV2ArticleAnswer::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ArticleAnswer');
class_alias(GoogleCloudDialogflowV2ArticleSuggestionModelMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ArticleSuggestionModelMetadata');
class_alias(GoogleCloudDialogflowV2BatchUpdateEntityTypesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2BatchUpdateEntityTypesResponse');
class_alias(GoogleCloudDialogflowV2BatchUpdateIntentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2BatchUpdateIntentsResponse');
class_alias(GoogleCloudDialogflowV2ClearSuggestionFeatureConfigOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ClearSuggestionFeatureConfigOperationMetadata');
class_alias(GoogleCloudDialogflowV2Context::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2Context');
class_alias(GoogleCloudDialogflowV2ConversationEvent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ConversationEvent');
class_alias(GoogleCloudDialogflowV2ConversationModel::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ConversationModel');
class_alias(GoogleCloudDialogflowV2CreateConversationDatasetOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2CreateConversationDatasetOperationMetadata');
class_alias(GoogleCloudDialogflowV2CreateConversationModelEvaluationOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2CreateConversationModelEvaluationOperationMetadata');
class_alias(GoogleCloudDialogflowV2CreateConversationModelOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2CreateConversationModelOperationMetadata');
class_alias(GoogleCloudDialogflowV2DeleteConversationDatasetOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2DeleteConversationDatasetOperationMetadata');
class_alias(GoogleCloudDialogflowV2DeleteConversationModelOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2DeleteConversationModelOperationMetadata');
class_alias(GoogleCloudDialogflowV2DeployConversationModelOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2DeployConversationModelOperationMetadata');
class_alias(GoogleCloudDialogflowV2EntityType::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2EntityType');
class_alias(GoogleCloudDialogflowV2EntityTypeEntity::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2EntityTypeEntity');
class_alias(GoogleCloudDialogflowV2EventInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2EventInput');
class_alias(GoogleCloudDialogflowV2ExportAgentResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ExportAgentResponse');
class_alias(GoogleCloudDialogflowV2ExportOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ExportOperationMetadata');
class_alias(GoogleCloudDialogflowV2FaqAnswer::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2FaqAnswer');
class_alias(GoogleCloudDialogflowV2GcsDestination::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2GcsDestination');
class_alias(GoogleCloudDialogflowV2HumanAgentAssistantEvent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2HumanAgentAssistantEvent');
class_alias(GoogleCloudDialogflowV2ImportConversationDataOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ImportConversationDataOperationMetadata');
class_alias(GoogleCloudDialogflowV2ImportConversationDataOperationResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ImportConversationDataOperationResponse');
class_alias(GoogleCloudDialogflowV2ImportDocumentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2ImportDocumentsResponse');
class_alias(GoogleCloudDialogflowV2InputDataset::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2InputDataset');
class_alias(GoogleCloudDialogflowV2Intent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent');
class_alias(GoogleCloudDialogflowV2IntentFollowupIntentInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentFollowupIntentInfo');
class_alias(GoogleCloudDialogflowV2IntentMessage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessage');
class_alias(GoogleCloudDialogflowV2IntentMessageBasicCard::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageBasicCard');
class_alias(GoogleCloudDialogflowV2IntentMessageBasicCardButton::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageBasicCardButton');
class_alias(GoogleCloudDialogflowV2IntentMessageBasicCardButtonOpenUriAction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageBasicCardButtonOpenUriAction');
class_alias(GoogleCloudDialogflowV2IntentMessageBrowseCarouselCard::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageBrowseCarouselCard');
class_alias(GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItem::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItem');
class_alias(GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction');
class_alias(GoogleCloudDialogflowV2IntentMessageCard::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageCard');
class_alias(GoogleCloudDialogflowV2IntentMessageCardButton::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageCardButton');
class_alias(GoogleCloudDialogflowV2IntentMessageCarouselSelect::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageCarouselSelect');
class_alias(GoogleCloudDialogflowV2IntentMessageCarouselSelectItem::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageCarouselSelectItem');
class_alias(GoogleCloudDialogflowV2IntentMessageColumnProperties::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageColumnProperties');
class_alias(GoogleCloudDialogflowV2IntentMessageImage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageImage');
class_alias(GoogleCloudDialogflowV2IntentMessageLinkOutSuggestion::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageLinkOutSuggestion');
class_alias(GoogleCloudDialogflowV2IntentMessageListSelect::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageListSelect');
class_alias(GoogleCloudDialogflowV2IntentMessageListSelectItem::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageListSelectItem');
class_alias(GoogleCloudDialogflowV2IntentMessageMediaContent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageMediaContent');
class_alias(GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject');
class_alias(GoogleCloudDialogflowV2IntentMessageQuickReplies::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageQuickReplies');
class_alias(GoogleCloudDialogflowV2IntentMessageSelectItemInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageSelectItemInfo');
class_alias(GoogleCloudDialogflowV2IntentMessageSimpleResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageSimpleResponse');
class_alias(GoogleCloudDialogflowV2IntentMessageSimpleResponses::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageSimpleResponses');
class_alias(GoogleCloudDialogflowV2IntentMessageSuggestion::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageSuggestion');
class_alias(GoogleCloudDialogflowV2IntentMessageSuggestions::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageSuggestions');
class_alias(GoogleCloudDialogflowV2IntentMessageTableCard::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageTableCard');
class_alias(GoogleCloudDialogflowV2IntentMessageTableCardCell::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageTableCardCell');
class_alias(GoogleCloudDialogflowV2IntentMessageTableCardRow::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageTableCardRow');
class_alias(GoogleCloudDialogflowV2IntentMessageText::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageText');
class_alias(GoogleCloudDialogflowV2IntentParameter::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentParameter');
class_alias(GoogleCloudDialogflowV2IntentTrainingPhrase::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentTrainingPhrase');
class_alias(GoogleCloudDialogflowV2IntentTrainingPhrasePart::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentTrainingPhrasePart');
class_alias(GoogleCloudDialogflowV2KnowledgeOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2KnowledgeOperationMetadata');
class_alias(GoogleCloudDialogflowV2Message::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2Message');
class_alias(GoogleCloudDialogflowV2MessageAnnotation::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2MessageAnnotation');
class_alias(GoogleCloudDialogflowV2OriginalDetectIntentRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2OriginalDetectIntentRequest');
class_alias(GoogleCloudDialogflowV2QueryResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2QueryResult');
class_alias(GoogleCloudDialogflowV2Sentiment::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2Sentiment');
class_alias(GoogleCloudDialogflowV2SentimentAnalysisResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2SentimentAnalysisResult');
class_alias(GoogleCloudDialogflowV2SessionEntityType::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType');
class_alias(GoogleCloudDialogflowV2SetSuggestionFeatureConfigOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2SetSuggestionFeatureConfigOperationMetadata');
class_alias(GoogleCloudDialogflowV2SmartReplyAnswer::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2SmartReplyAnswer');
class_alias(GoogleCloudDialogflowV2SmartReplyModelMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2SmartReplyModelMetadata');
class_alias(GoogleCloudDialogflowV2SuggestArticlesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2SuggestArticlesResponse');
class_alias(GoogleCloudDialogflowV2SuggestFaqAnswersResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2SuggestFaqAnswersResponse');
class_alias(GoogleCloudDialogflowV2SuggestSmartRepliesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2SuggestSmartRepliesResponse');
class_alias(GoogleCloudDialogflowV2SuggestionResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2SuggestionResult');
class_alias(GoogleCloudDialogflowV2UndeployConversationModelOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2UndeployConversationModelOperationMetadata');
class_alias(GoogleCloudDialogflowV2WebhookRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2WebhookRequest');
class_alias(GoogleCloudDialogflowV2WebhookResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2WebhookResponse');
class_alias(GoogleCloudDialogflowV2beta1AnnotatedMessagePart::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1AnnotatedMessagePart');
class_alias(GoogleCloudDialogflowV2beta1ArticleAnswer::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1ArticleAnswer');
class_alias(GoogleCloudDialogflowV2beta1BatchUpdateEntityTypesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1BatchUpdateEntityTypesResponse');
class_alias(GoogleCloudDialogflowV2beta1BatchUpdateIntentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1BatchUpdateIntentsResponse');
class_alias(GoogleCloudDialogflowV2beta1ClearSuggestionFeatureConfigOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1ClearSuggestionFeatureConfigOperationMetadata');
class_alias(GoogleCloudDialogflowV2beta1Context::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1Context');
class_alias(GoogleCloudDialogflowV2beta1ConversationEvent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1ConversationEvent');
class_alias(GoogleCloudDialogflowV2beta1EntityType::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1EntityType');
class_alias(GoogleCloudDialogflowV2beta1EntityTypeEntity::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1EntityTypeEntity');
class_alias(GoogleCloudDialogflowV2beta1EventInput::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1EventInput');
class_alias(GoogleCloudDialogflowV2beta1ExportAgentResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1ExportAgentResponse');
class_alias(GoogleCloudDialogflowV2beta1ExportOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1ExportOperationMetadata');
class_alias(GoogleCloudDialogflowV2beta1FaqAnswer::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1FaqAnswer');
class_alias(GoogleCloudDialogflowV2beta1GcsDestination::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1GcsDestination');
class_alias(GoogleCloudDialogflowV2beta1HumanAgentAssistantEvent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1HumanAgentAssistantEvent');
class_alias(GoogleCloudDialogflowV2beta1ImportDocumentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1ImportDocumentsResponse');
class_alias(GoogleCloudDialogflowV2beta1Intent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1Intent');
class_alias(GoogleCloudDialogflowV2beta1IntentFollowupIntentInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentFollowupIntentInfo');
class_alias(GoogleCloudDialogflowV2beta1IntentMessage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessage');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageBasicCard::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageBasicCard');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageBasicCardButton');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageBasicCardButtonOpenUriAction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageBasicCardButtonOpenUriAction');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCard::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCard');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItem::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItem');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageBrowseCarouselCardBrowseCarouselCardItemOpenUrlAction');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageCard::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageCard');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageCardButton::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageCardButton');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageCarouselSelect::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageCarouselSelect');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageCarouselSelectItem::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageCarouselSelectItem');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageColumnProperties::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageColumnProperties');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageImage::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageImage');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageLinkOutSuggestion::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageLinkOutSuggestion');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageListSelect::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageListSelect');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageListSelectItem::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageListSelectItem');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageMediaContent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageMediaContent');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageMediaContentResponseMediaObject::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageMediaContentResponseMediaObject');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageQuickReplies::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageQuickReplies');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmCarouselCard::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmCarouselCard');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmStandaloneCard::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmStandaloneCard');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedAction::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedAction');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionDial::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionDial');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionOpenUri::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionOpenUri');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionShareLocation::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedActionRbmSuggestedActionShareLocation');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedReply::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestedReply');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageRbmText::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmText');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageSelectItemInfo');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageSimpleResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageSimpleResponse');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageSimpleResponses::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageSimpleResponses');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageSuggestion::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageSuggestion');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageSuggestions::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageSuggestions');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageTableCard::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageTableCard');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageTableCardCell::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageTableCardCell');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageTableCardRow::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageTableCardRow');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageTelephonyPlayAudio::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageTelephonyPlayAudio');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageTelephonySynthesizeSpeech::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageTelephonySynthesizeSpeech');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageTelephonyTransferCall::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageTelephonyTransferCall');
class_alias(GoogleCloudDialogflowV2beta1IntentMessageText::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageText');
class_alias(GoogleCloudDialogflowV2beta1IntentParameter::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentParameter');
class_alias(GoogleCloudDialogflowV2beta1IntentTrainingPhrase::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentTrainingPhrase');
class_alias(GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart');
class_alias(GoogleCloudDialogflowV2beta1KnowledgeAnswers::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1KnowledgeAnswers');
class_alias(GoogleCloudDialogflowV2beta1KnowledgeAnswersAnswer::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1KnowledgeAnswersAnswer');
class_alias(GoogleCloudDialogflowV2beta1KnowledgeOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1KnowledgeOperationMetadata');
class_alias(GoogleCloudDialogflowV2beta1Message::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1Message');
class_alias(GoogleCloudDialogflowV2beta1MessageAnnotation::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1MessageAnnotation');
class_alias(GoogleCloudDialogflowV2beta1OriginalDetectIntentRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1OriginalDetectIntentRequest');
class_alias(GoogleCloudDialogflowV2beta1QueryResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1QueryResult');
class_alias(GoogleCloudDialogflowV2beta1Sentiment::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1Sentiment');
class_alias(GoogleCloudDialogflowV2beta1SentimentAnalysisResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1SentimentAnalysisResult');
class_alias(GoogleCloudDialogflowV2beta1SessionEntityType::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1SessionEntityType');
class_alias(GoogleCloudDialogflowV2beta1SetSuggestionFeatureConfigOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1SetSuggestionFeatureConfigOperationMetadata');
class_alias(GoogleCloudDialogflowV2beta1SmartReplyAnswer::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1SmartReplyAnswer');
class_alias(GoogleCloudDialogflowV2beta1SuggestArticlesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1SuggestArticlesResponse');
class_alias(GoogleCloudDialogflowV2beta1SuggestFaqAnswersResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1SuggestFaqAnswersResponse');
class_alias(GoogleCloudDialogflowV2beta1SuggestSmartRepliesResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1SuggestSmartRepliesResponse');
class_alias(GoogleCloudDialogflowV2beta1SuggestionResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1SuggestionResult');
class_alias(GoogleCloudDialogflowV2beta1WebhookRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1WebhookRequest');
class_alias(GoogleCloudDialogflowV2beta1WebhookResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1WebhookResponse');
class_alias(GoogleCloudDialogflowV3alpha1CreateDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV3alpha1CreateDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowV3alpha1DeleteDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV3alpha1DeleteDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV3alpha1GenericKnowledgeOperationMetadata');
class_alias(GoogleCloudDialogflowV3alpha1ImportDocumentsOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV3alpha1ImportDocumentsOperationMetadata');
class_alias(GoogleCloudDialogflowV3alpha1ImportDocumentsResponse::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV3alpha1ImportDocumentsResponse');
class_alias(GoogleCloudDialogflowV3alpha1ReloadDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV3alpha1ReloadDocumentOperationMetadata');
class_alias(GoogleCloudDialogflowV3alpha1UpdateDocumentOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV3alpha1UpdateDocumentOperationMetadata');
class_alias(GoogleCloudLocationListLocationsResponse::class, 'Google_Service_Dialogflow_GoogleCloudLocationListLocationsResponse');
class_alias(GoogleCloudLocationLocation::class, 'Google_Service_Dialogflow_GoogleCloudLocationLocation');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_Dialogflow_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_Dialogflow_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_Dialogflow_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_Dialogflow_GoogleRpcStatus');
class_alias(GoogleTypeLatLng::class, 'Google_Service_Dialogflow_GoogleTypeLatLng');
