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

namespace Google\Service\Speech;

class ClassItem extends \Google\Model
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

class CreateCustomClassRequest extends \Google\Model
{
  /** @var CustomClass */
  public $customClass;
  /** @var string */
  public $customClassId;
  protected $customClassType = CustomClass::class;
  protected $customClassDataType = '';
  /** @param CustomClass */
  public function setCustomClass(CustomClass $customClass)
  {
    $this->customClass = $customClass;
  }
  /** @return CustomClass */
  public function getCustomClass()
  {
    return $this->customClass;
  }
  /** @param string */
  public function setCustomClassId($customClassId)
  {
    $this->customClassId = $customClassId;
  }
  /** @return string */
  public function getCustomClassId()
  {
    return $this->customClassId;
  }
}

class CreatePhraseSetRequest extends \Google\Model
{
  /** @var PhraseSet */
  public $phraseSet;
  /** @var string */
  public $phraseSetId;
  protected $phraseSetType = PhraseSet::class;
  protected $phraseSetDataType = '';
  /** @param PhraseSet */
  public function setPhraseSet(PhraseSet $phraseSet)
  {
    $this->phraseSet = $phraseSet;
  }
  /** @return PhraseSet */
  public function getPhraseSet()
  {
    return $this->phraseSet;
  }
  /** @param string */
  public function setPhraseSetId($phraseSetId)
  {
    $this->phraseSetId = $phraseSetId;
  }
  /** @return string */
  public function getPhraseSetId()
  {
    return $this->phraseSetId;
  }
}

class CustomClass extends \Google\Collection
{
  /** @var string */
  public $customClassId;
  /** @var ClassItem[] */
  public $items;
  /** @var string */
  public $name;
  protected $collection_key = 'items';
  protected $itemsType = ClassItem::class;
  protected $itemsDataType = 'array';
  /** @param string */
  public function setCustomClassId($customClassId)
  {
    $this->customClassId = $customClassId;
  }
  /** @return string */
  public function getCustomClassId()
  {
    return $this->customClassId;
  }
  /** @param ClassItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return ClassItem[] */
  public function getItems()
  {
    return $this->items;
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

class ListCustomClassesResponse extends \Google\Collection
{
  /** @var CustomClass[] */
  public $customClasses;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customClasses';
  protected $customClassesType = CustomClass::class;
  protected $customClassesDataType = 'array';
  /** @param CustomClass[] */
  public function setCustomClasses($customClasses)
  {
    $this->customClasses = $customClasses;
  }
  /** @return CustomClass[] */
  public function getCustomClasses()
  {
    return $this->customClasses;
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

class ListPhraseSetResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PhraseSet[] */
  public $phraseSets;
  protected $collection_key = 'phraseSets';
  protected $phraseSetsType = PhraseSet::class;
  protected $phraseSetsDataType = 'array';
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
  /** @param PhraseSet[] */
  public function setPhraseSets($phraseSets)
  {
    $this->phraseSets = $phraseSets;
  }
  /** @return PhraseSet[] */
  public function getPhraseSets()
  {
    return $this->phraseSets;
  }
}

class LongRunningRecognizeMetadata extends \Google\Model
{
  /** @var string */
  public $lastUpdateTime;
  /** @var int */
  public $progressPercent;
  /** @var string */
  public $startTime;
  /** @var string */
  public $uri;

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

class LongRunningRecognizeRequest extends \Google\Model
{
  /** @var RecognitionAudio */
  public $audio;
  /** @var RecognitionConfig */
  public $config;
  /** @var TranscriptOutputConfig */
  public $outputConfig;
  protected $audioType = RecognitionAudio::class;
  protected $audioDataType = '';
  protected $configType = RecognitionConfig::class;
  protected $configDataType = '';
  protected $outputConfigType = TranscriptOutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param RecognitionAudio */
  public function setAudio(RecognitionAudio $audio)
  {
    $this->audio = $audio;
  }
  /** @return RecognitionAudio */
  public function getAudio()
  {
    return $this->audio;
  }
  /** @param RecognitionConfig */
  public function setConfig(RecognitionConfig $config)
  {
    $this->config = $config;
  }
  /** @return RecognitionConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param TranscriptOutputConfig */
  public function setOutputConfig(TranscriptOutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return TranscriptOutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class LongRunningRecognizeResponse extends \Google\Collection
{
  /** @var TranscriptOutputConfig */
  public $outputConfig;
  /** @var Status */
  public $outputError;
  /** @var string */
  public $requestId;
  /** @var SpeechRecognitionResult[] */
  public $results;
  /** @var SpeechAdaptationInfo */
  public $speechAdaptationInfo;
  /** @var string */
  public $totalBilledTime;
  protected $collection_key = 'results';
  protected $outputConfigType = TranscriptOutputConfig::class;
  protected $outputConfigDataType = '';
  protected $outputErrorType = Status::class;
  protected $outputErrorDataType = '';
  protected $resultsType = SpeechRecognitionResult::class;
  protected $resultsDataType = 'array';
  protected $speechAdaptationInfoType = SpeechAdaptationInfo::class;
  protected $speechAdaptationInfoDataType = '';
  /** @param TranscriptOutputConfig */
  public function setOutputConfig(TranscriptOutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return TranscriptOutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
  /** @param Status */
  public function setOutputError(Status $outputError)
  {
    $this->outputError = $outputError;
  }
  /** @return Status */
  public function getOutputError()
  {
    return $this->outputError;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param SpeechRecognitionResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return SpeechRecognitionResult[] */
  public function getResults()
  {
    return $this->results;
  }
  /** @param SpeechAdaptationInfo */
  public function setSpeechAdaptationInfo(SpeechAdaptationInfo $speechAdaptationInfo)
  {
    $this->speechAdaptationInfo = $speechAdaptationInfo;
  }
  /** @return SpeechAdaptationInfo */
  public function getSpeechAdaptationInfo()
  {
    return $this->speechAdaptationInfo;
  }
  /** @param string */
  public function setTotalBilledTime($totalBilledTime)
  {
    $this->totalBilledTime = $totalBilledTime;
  }
  /** @return string */
  public function getTotalBilledTime()
  {
    return $this->totalBilledTime;
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

class Phrase extends \Google\Model
{
  /** @var float */
  public $boost;
  /** @var string */
  public $value;

  /** @param float */
  public function setBoost($boost)
  {
    $this->boost = $boost;
  }
  /** @return float */
  public function getBoost()
  {
    return $this->boost;
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

class PhraseSet extends \Google\Collection
{
  /** @var float */
  public $boost;
  /** @var string */
  public $name;
  /** @var Phrase[] */
  public $phrases;
  protected $collection_key = 'phrases';
  protected $phrasesType = Phrase::class;
  protected $phrasesDataType = 'array';
  /** @param float */
  public function setBoost($boost)
  {
    $this->boost = $boost;
  }
  /** @return float */
  public function getBoost()
  {
    return $this->boost;
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
  /** @param Phrase[] */
  public function setPhrases($phrases)
  {
    $this->phrases = $phrases;
  }
  /** @return Phrase[] */
  public function getPhrases()
  {
    return $this->phrases;
  }
}

class RecognitionAudio extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var string */
  public $uri;

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

class RecognitionConfig extends \Google\Collection
{
  /** @var SpeechAdaptation */
  public $adaptation;
  /** @var string[] */
  public $alternativeLanguageCodes;
  /** @var int */
  public $audioChannelCount;
  /** @var SpeakerDiarizationConfig */
  public $diarizationConfig;
  /** @var bool */
  public $enableAutomaticPunctuation;
  /** @var bool */
  public $enableSeparateRecognitionPerChannel;
  /** @var bool */
  public $enableSpokenEmojis;
  /** @var bool */
  public $enableSpokenPunctuation;
  /** @var bool */
  public $enableWordConfidence;
  /** @var bool */
  public $enableWordTimeOffsets;
  /** @var string */
  public $encoding;
  /** @var string */
  public $languageCode;
  /** @var int */
  public $maxAlternatives;
  /** @var RecognitionMetadata */
  public $metadata;
  /** @var string */
  public $model;
  /** @var bool */
  public $profanityFilter;
  /** @var int */
  public $sampleRateHertz;
  /** @var SpeechContext[] */
  public $speechContexts;
  /** @var bool */
  public $useEnhanced;
  protected $collection_key = 'speechContexts';
  protected $adaptationType = SpeechAdaptation::class;
  protected $adaptationDataType = '';
  protected $diarizationConfigType = SpeakerDiarizationConfig::class;
  protected $diarizationConfigDataType = '';
  protected $metadataType = RecognitionMetadata::class;
  protected $metadataDataType = '';
  protected $speechContextsType = SpeechContext::class;
  protected $speechContextsDataType = 'array';
  /** @param SpeechAdaptation */
  public function setAdaptation(SpeechAdaptation $adaptation)
  {
    $this->adaptation = $adaptation;
  }
  /** @return SpeechAdaptation */
  public function getAdaptation()
  {
    return $this->adaptation;
  }
  /** @param string[] */
  public function setAlternativeLanguageCodes($alternativeLanguageCodes)
  {
    $this->alternativeLanguageCodes = $alternativeLanguageCodes;
  }
  /** @return string[] */
  public function getAlternativeLanguageCodes()
  {
    return $this->alternativeLanguageCodes;
  }
  /** @param int */
  public function setAudioChannelCount($audioChannelCount)
  {
    $this->audioChannelCount = $audioChannelCount;
  }
  /** @return int */
  public function getAudioChannelCount()
  {
    return $this->audioChannelCount;
  }
  /** @param SpeakerDiarizationConfig */
  public function setDiarizationConfig(SpeakerDiarizationConfig $diarizationConfig)
  {
    $this->diarizationConfig = $diarizationConfig;
  }
  /** @return SpeakerDiarizationConfig */
  public function getDiarizationConfig()
  {
    return $this->diarizationConfig;
  }
  /** @param bool */
  public function setEnableAutomaticPunctuation($enableAutomaticPunctuation)
  {
    $this->enableAutomaticPunctuation = $enableAutomaticPunctuation;
  }
  /** @return bool */
  public function getEnableAutomaticPunctuation()
  {
    return $this->enableAutomaticPunctuation;
  }
  /** @param bool */
  public function setEnableSeparateRecognitionPerChannel($enableSeparateRecognitionPerChannel)
  {
    $this->enableSeparateRecognitionPerChannel = $enableSeparateRecognitionPerChannel;
  }
  /** @return bool */
  public function getEnableSeparateRecognitionPerChannel()
  {
    return $this->enableSeparateRecognitionPerChannel;
  }
  /** @param bool */
  public function setEnableSpokenEmojis($enableSpokenEmojis)
  {
    $this->enableSpokenEmojis = $enableSpokenEmojis;
  }
  /** @return bool */
  public function getEnableSpokenEmojis()
  {
    return $this->enableSpokenEmojis;
  }
  /** @param bool */
  public function setEnableSpokenPunctuation($enableSpokenPunctuation)
  {
    $this->enableSpokenPunctuation = $enableSpokenPunctuation;
  }
  /** @return bool */
  public function getEnableSpokenPunctuation()
  {
    return $this->enableSpokenPunctuation;
  }
  /** @param bool */
  public function setEnableWordConfidence($enableWordConfidence)
  {
    $this->enableWordConfidence = $enableWordConfidence;
  }
  /** @return bool */
  public function getEnableWordConfidence()
  {
    return $this->enableWordConfidence;
  }
  /** @param bool */
  public function setEnableWordTimeOffsets($enableWordTimeOffsets)
  {
    $this->enableWordTimeOffsets = $enableWordTimeOffsets;
  }
  /** @return bool */
  public function getEnableWordTimeOffsets()
  {
    return $this->enableWordTimeOffsets;
  }
  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
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
  /** @param int */
  public function setMaxAlternatives($maxAlternatives)
  {
    $this->maxAlternatives = $maxAlternatives;
  }
  /** @return int */
  public function getMaxAlternatives()
  {
    return $this->maxAlternatives;
  }
  /** @param RecognitionMetadata */
  public function setMetadata(RecognitionMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return RecognitionMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  /** @param bool */
  public function setProfanityFilter($profanityFilter)
  {
    $this->profanityFilter = $profanityFilter;
  }
  /** @return bool */
  public function getProfanityFilter()
  {
    return $this->profanityFilter;
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
  /** @param SpeechContext[] */
  public function setSpeechContexts($speechContexts)
  {
    $this->speechContexts = $speechContexts;
  }
  /** @return SpeechContext[] */
  public function getSpeechContexts()
  {
    return $this->speechContexts;
  }
  /** @param bool */
  public function setUseEnhanced($useEnhanced)
  {
    $this->useEnhanced = $useEnhanced;
  }
  /** @return bool */
  public function getUseEnhanced()
  {
    return $this->useEnhanced;
  }
}

class RecognitionMetadata extends \Google\Model
{
  /** @var string */
  public $audioTopic;
  /** @var string */
  public $industryNaicsCodeOfAudio;
  /** @var string */
  public $interactionType;
  /** @var string */
  public $microphoneDistance;
  /** @var string */
  public $originalMediaType;
  /** @var string */
  public $originalMimeType;
  /** @var string */
  public $recordingDeviceName;
  /** @var string */
  public $recordingDeviceType;

  /** @param string */
  public function setAudioTopic($audioTopic)
  {
    $this->audioTopic = $audioTopic;
  }
  /** @return string */
  public function getAudioTopic()
  {
    return $this->audioTopic;
  }
  /** @param string */
  public function setIndustryNaicsCodeOfAudio($industryNaicsCodeOfAudio)
  {
    $this->industryNaicsCodeOfAudio = $industryNaicsCodeOfAudio;
  }
  /** @return string */
  public function getIndustryNaicsCodeOfAudio()
  {
    return $this->industryNaicsCodeOfAudio;
  }
  /** @param string */
  public function setInteractionType($interactionType)
  {
    $this->interactionType = $interactionType;
  }
  /** @return string */
  public function getInteractionType()
  {
    return $this->interactionType;
  }
  /** @param string */
  public function setMicrophoneDistance($microphoneDistance)
  {
    $this->microphoneDistance = $microphoneDistance;
  }
  /** @return string */
  public function getMicrophoneDistance()
  {
    return $this->microphoneDistance;
  }
  /** @param string */
  public function setOriginalMediaType($originalMediaType)
  {
    $this->originalMediaType = $originalMediaType;
  }
  /** @return string */
  public function getOriginalMediaType()
  {
    return $this->originalMediaType;
  }
  /** @param string */
  public function setOriginalMimeType($originalMimeType)
  {
    $this->originalMimeType = $originalMimeType;
  }
  /** @return string */
  public function getOriginalMimeType()
  {
    return $this->originalMimeType;
  }
  /** @param string */
  public function setRecordingDeviceName($recordingDeviceName)
  {
    $this->recordingDeviceName = $recordingDeviceName;
  }
  /** @return string */
  public function getRecordingDeviceName()
  {
    return $this->recordingDeviceName;
  }
  /** @param string */
  public function setRecordingDeviceType($recordingDeviceType)
  {
    $this->recordingDeviceType = $recordingDeviceType;
  }
  /** @return string */
  public function getRecordingDeviceType()
  {
    return $this->recordingDeviceType;
  }
}

class RecognizeRequest extends \Google\Model
{
  /** @var RecognitionAudio */
  public $audio;
  /** @var RecognitionConfig */
  public $config;
  protected $audioType = RecognitionAudio::class;
  protected $audioDataType = '';
  protected $configType = RecognitionConfig::class;
  protected $configDataType = '';
  /** @param RecognitionAudio */
  public function setAudio(RecognitionAudio $audio)
  {
    $this->audio = $audio;
  }
  /** @return RecognitionAudio */
  public function getAudio()
  {
    return $this->audio;
  }
  /** @param RecognitionConfig */
  public function setConfig(RecognitionConfig $config)
  {
    $this->config = $config;
  }
  /** @return RecognitionConfig */
  public function getConfig()
  {
    return $this->config;
  }
}

class RecognizeResponse extends \Google\Collection
{
  /** @var string */
  public $requestId;
  /** @var SpeechRecognitionResult[] */
  public $results;
  /** @var SpeechAdaptationInfo */
  public $speechAdaptationInfo;
  /** @var string */
  public $totalBilledTime;
  protected $collection_key = 'results';
  protected $resultsType = SpeechRecognitionResult::class;
  protected $resultsDataType = 'array';
  protected $speechAdaptationInfoType = SpeechAdaptationInfo::class;
  protected $speechAdaptationInfoDataType = '';
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param SpeechRecognitionResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return SpeechRecognitionResult[] */
  public function getResults()
  {
    return $this->results;
  }
  /** @param SpeechAdaptationInfo */
  public function setSpeechAdaptationInfo(SpeechAdaptationInfo $speechAdaptationInfo)
  {
    $this->speechAdaptationInfo = $speechAdaptationInfo;
  }
  /** @return SpeechAdaptationInfo */
  public function getSpeechAdaptationInfo()
  {
    return $this->speechAdaptationInfo;
  }
  /** @param string */
  public function setTotalBilledTime($totalBilledTime)
  {
    $this->totalBilledTime = $totalBilledTime;
  }
  /** @return string */
  public function getTotalBilledTime()
  {
    return $this->totalBilledTime;
  }
}

class SpeakerDiarizationConfig extends \Google\Model
{
  /** @var bool */
  public $enableSpeakerDiarization;
  /** @var int */
  public $maxSpeakerCount;
  /** @var int */
  public $minSpeakerCount;
  /** @var int */
  public $speakerTag;

  /** @param bool */
  public function setEnableSpeakerDiarization($enableSpeakerDiarization)
  {
    $this->enableSpeakerDiarization = $enableSpeakerDiarization;
  }
  /** @return bool */
  public function getEnableSpeakerDiarization()
  {
    return $this->enableSpeakerDiarization;
  }
  /** @param int */
  public function setMaxSpeakerCount($maxSpeakerCount)
  {
    $this->maxSpeakerCount = $maxSpeakerCount;
  }
  /** @return int */
  public function getMaxSpeakerCount()
  {
    return $this->maxSpeakerCount;
  }
  /** @param int */
  public function setMinSpeakerCount($minSpeakerCount)
  {
    $this->minSpeakerCount = $minSpeakerCount;
  }
  /** @return int */
  public function getMinSpeakerCount()
  {
    return $this->minSpeakerCount;
  }
  /** @param int */
  public function setSpeakerTag($speakerTag)
  {
    $this->speakerTag = $speakerTag;
  }
  /** @return int */
  public function getSpeakerTag()
  {
    return $this->speakerTag;
  }
}

class SpeechAdaptation extends \Google\Collection
{
  /** @var CustomClass[] */
  public $customClasses;
  /** @var string[] */
  public $phraseSetReferences;
  /** @var PhraseSet[] */
  public $phraseSets;
  protected $collection_key = 'phraseSets';
  protected $customClassesType = CustomClass::class;
  protected $customClassesDataType = 'array';
  protected $phraseSetsType = PhraseSet::class;
  protected $phraseSetsDataType = 'array';
  /** @param CustomClass[] */
  public function setCustomClasses($customClasses)
  {
    $this->customClasses = $customClasses;
  }
  /** @return CustomClass[] */
  public function getCustomClasses()
  {
    return $this->customClasses;
  }
  /** @param string[] */
  public function setPhraseSetReferences($phraseSetReferences)
  {
    $this->phraseSetReferences = $phraseSetReferences;
  }
  /** @return string[] */
  public function getPhraseSetReferences()
  {
    return $this->phraseSetReferences;
  }
  /** @param PhraseSet[] */
  public function setPhraseSets($phraseSets)
  {
    $this->phraseSets = $phraseSets;
  }
  /** @return PhraseSet[] */
  public function getPhraseSets()
  {
    return $this->phraseSets;
  }
}

class SpeechAdaptationInfo extends \Google\Model
{
  /** @var bool */
  public $adaptationTimeout;
  /** @var string */
  public $timeoutMessage;

  /** @param bool */
  public function setAdaptationTimeout($adaptationTimeout)
  {
    $this->adaptationTimeout = $adaptationTimeout;
  }
  /** @return bool */
  public function getAdaptationTimeout()
  {
    return $this->adaptationTimeout;
  }
  /** @param string */
  public function setTimeoutMessage($timeoutMessage)
  {
    $this->timeoutMessage = $timeoutMessage;
  }
  /** @return string */
  public function getTimeoutMessage()
  {
    return $this->timeoutMessage;
  }
}

class SpeechContext extends \Google\Collection
{
  /** @var float */
  public $boost;
  /** @var string[] */
  public $phrases;
  protected $collection_key = 'phrases';
  /** @param float */
  public function setBoost($boost)
  {
    $this->boost = $boost;
  }
  /** @return float */
  public function getBoost()
  {
    return $this->boost;
  }
  /** @param string[] */
  public function setPhrases($phrases)
  {
    $this->phrases = $phrases;
  }
  /** @return string[] */
  public function getPhrases()
  {
    return $this->phrases;
  }
}

class SpeechEmpty extends \Google\Model
{
}

class SpeechRecognitionAlternative extends \Google\Collection
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $transcript;
  /** @var WordInfo[] */
  public $words;
  protected $collection_key = 'words';
  protected $wordsType = WordInfo::class;
  protected $wordsDataType = 'array';
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
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return string */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param WordInfo[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return WordInfo[] */
  public function getWords()
  {
    return $this->words;
  }
}

class SpeechRecognitionResult extends \Google\Collection
{
  /** @var SpeechRecognitionAlternative[] */
  public $alternatives;
  /** @var int */
  public $channelTag;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $resultEndTime;
  protected $collection_key = 'alternatives';
  protected $alternativesType = SpeechRecognitionAlternative::class;
  protected $alternativesDataType = 'array';
  /** @param SpeechRecognitionAlternative[] */
  public function setAlternatives($alternatives)
  {
    $this->alternatives = $alternatives;
  }
  /** @return SpeechRecognitionAlternative[] */
  public function getAlternatives()
  {
    return $this->alternatives;
  }
  /** @param int */
  public function setChannelTag($channelTag)
  {
    $this->channelTag = $channelTag;
  }
  /** @return int */
  public function getChannelTag()
  {
    return $this->channelTag;
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
  public function setResultEndTime($resultEndTime)
  {
    $this->resultEndTime = $resultEndTime;
  }
  /** @return string */
  public function getResultEndTime()
  {
    return $this->resultEndTime;
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

class TranscriptOutputConfig extends \Google\Model
{
  /** @var string */
  public $gcsUri;

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

class WordInfo extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $endTime;
  /** @var int */
  public $speakerTag;
  /** @var string */
  public $startTime;
  /** @var string */
  public $word;

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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param int */
  public function setSpeakerTag($speakerTag)
  {
    $this->speakerTag = $speakerTag;
  }
  /** @return int */
  public function getSpeakerTag()
  {
    return $this->speakerTag;
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
  public function setWord($word)
  {
    $this->word = $word;
  }
  /** @return string */
  public function getWord()
  {
    return $this->word;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClassItem::class, 'Google_Service_Speech_ClassItem');
class_alias(CreateCustomClassRequest::class, 'Google_Service_Speech_CreateCustomClassRequest');
class_alias(CreatePhraseSetRequest::class, 'Google_Service_Speech_CreatePhraseSetRequest');
class_alias(CustomClass::class, 'Google_Service_Speech_CustomClass');
class_alias(ListCustomClassesResponse::class, 'Google_Service_Speech_ListCustomClassesResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Speech_ListOperationsResponse');
class_alias(ListPhraseSetResponse::class, 'Google_Service_Speech_ListPhraseSetResponse');
class_alias(LongRunningRecognizeMetadata::class, 'Google_Service_Speech_LongRunningRecognizeMetadata');
class_alias(LongRunningRecognizeRequest::class, 'Google_Service_Speech_LongRunningRecognizeRequest');
class_alias(LongRunningRecognizeResponse::class, 'Google_Service_Speech_LongRunningRecognizeResponse');
class_alias(Operation::class, 'Google_Service_Speech_Operation');
class_alias(Phrase::class, 'Google_Service_Speech_Phrase');
class_alias(PhraseSet::class, 'Google_Service_Speech_PhraseSet');
class_alias(RecognitionAudio::class, 'Google_Service_Speech_RecognitionAudio');
class_alias(RecognitionConfig::class, 'Google_Service_Speech_RecognitionConfig');
class_alias(RecognitionMetadata::class, 'Google_Service_Speech_RecognitionMetadata');
class_alias(RecognizeRequest::class, 'Google_Service_Speech_RecognizeRequest');
class_alias(RecognizeResponse::class, 'Google_Service_Speech_RecognizeResponse');
class_alias(SpeakerDiarizationConfig::class, 'Google_Service_Speech_SpeakerDiarizationConfig');
class_alias(SpeechAdaptation::class, 'Google_Service_Speech_SpeechAdaptation');
class_alias(SpeechAdaptationInfo::class, 'Google_Service_Speech_SpeechAdaptationInfo');
class_alias(SpeechContext::class, 'Google_Service_Speech_SpeechContext');
class_alias(SpeechEmpty::class, 'Google_Service_Speech_SpeechEmpty');
class_alias(SpeechRecognitionAlternative::class, 'Google_Service_Speech_SpeechRecognitionAlternative');
class_alias(SpeechRecognitionResult::class, 'Google_Service_Speech_SpeechRecognitionResult');
class_alias(Status::class, 'Google_Service_Speech_Status');
class_alias(TranscriptOutputConfig::class, 'Google_Service_Speech_TranscriptOutputConfig');
class_alias(WordInfo::class, 'Google_Service_Speech_WordInfo');
