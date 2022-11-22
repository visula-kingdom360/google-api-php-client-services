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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1Analysis extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1AnalysisResult */
  public $analysisResult;
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $requestTime;
  protected $analysisResultType = GoogleCloudContactcenterinsightsV1AnalysisResult::class;
  protected $analysisResultDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1AnalysisResult */
  public function setAnalysisResult(GoogleCloudContactcenterinsightsV1AnalysisResult $analysisResult)
  {
    $this->analysisResult = $analysisResult;
  }
  /** @return GoogleCloudContactcenterinsightsV1AnalysisResult */
  public function getAnalysisResult()
  {
    return $this->analysisResult;
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
  public function setRequestTime($requestTime)
  {
    $this->requestTime = $requestTime;
  }
  /** @return string */
  public function getRequestTime()
  {
    return $this->requestTime;
  }
}

class GoogleCloudContactcenterinsightsV1AnalysisResult extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1AnalysisResultCallAnalysisMetadata */
  public $callAnalysisMetadata;
  /** @var string */
  public $endTime;
  protected $callAnalysisMetadataType = GoogleCloudContactcenterinsightsV1AnalysisResultCallAnalysisMetadata::class;
  protected $callAnalysisMetadataDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1AnalysisResultCallAnalysisMetadata */
  public function setCallAnalysisMetadata(GoogleCloudContactcenterinsightsV1AnalysisResultCallAnalysisMetadata $callAnalysisMetadata)
  {
    $this->callAnalysisMetadata = $callAnalysisMetadata;
  }
  /** @return GoogleCloudContactcenterinsightsV1AnalysisResultCallAnalysisMetadata */
  public function getCallAnalysisMetadata()
  {
    return $this->callAnalysisMetadata;
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
}

class GoogleCloudContactcenterinsightsV1AnalysisResultCallAnalysisMetadata extends \Google\Collection
{
  /** @var GoogleCloudContactcenterinsightsV1CallAnnotation[] */
  public $annotations;
  /** @var GoogleCloudContactcenterinsightsV1Entity[] */
  public $entities;
  /** @var GoogleCloudContactcenterinsightsV1Intent[] */
  public $intents;
  /** @var GoogleCloudContactcenterinsightsV1IssueModelResult */
  public $issueModelResult;
  /** @var GoogleCloudContactcenterinsightsV1PhraseMatchData[] */
  public $phraseMatchers;
  /** @var GoogleCloudContactcenterinsightsV1ConversationLevelSentiment[] */
  public $sentiments;
  protected $collection_key = 'sentiments';
  protected $annotationsType = GoogleCloudContactcenterinsightsV1CallAnnotation::class;
  protected $annotationsDataType = 'array';
  protected $entitiesType = GoogleCloudContactcenterinsightsV1Entity::class;
  protected $entitiesDataType = 'map';
  protected $intentsType = GoogleCloudContactcenterinsightsV1Intent::class;
  protected $intentsDataType = 'map';
  protected $issueModelResultType = GoogleCloudContactcenterinsightsV1IssueModelResult::class;
  protected $issueModelResultDataType = '';
  protected $phraseMatchersType = GoogleCloudContactcenterinsightsV1PhraseMatchData::class;
  protected $phraseMatchersDataType = 'map';
  protected $sentimentsType = GoogleCloudContactcenterinsightsV1ConversationLevelSentiment::class;
  protected $sentimentsDataType = 'array';
  /** @param GoogleCloudContactcenterinsightsV1CallAnnotation[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return GoogleCloudContactcenterinsightsV1CallAnnotation[] */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /** @param GoogleCloudContactcenterinsightsV1Entity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return GoogleCloudContactcenterinsightsV1Entity[] */
  public function getEntities()
  {
    return $this->entities;
  }
  /** @param GoogleCloudContactcenterinsightsV1Intent[] */
  public function setIntents($intents)
  {
    $this->intents = $intents;
  }
  /** @return GoogleCloudContactcenterinsightsV1Intent[] */
  public function getIntents()
  {
    return $this->intents;
  }
  /** @param GoogleCloudContactcenterinsightsV1IssueModelResult */
  public function setIssueModelResult(GoogleCloudContactcenterinsightsV1IssueModelResult $issueModelResult)
  {
    $this->issueModelResult = $issueModelResult;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueModelResult */
  public function getIssueModelResult()
  {
    return $this->issueModelResult;
  }
  /** @param GoogleCloudContactcenterinsightsV1PhraseMatchData[] */
  public function setPhraseMatchers($phraseMatchers)
  {
    $this->phraseMatchers = $phraseMatchers;
  }
  /** @return GoogleCloudContactcenterinsightsV1PhraseMatchData[] */
  public function getPhraseMatchers()
  {
    return $this->phraseMatchers;
  }
  /** @param GoogleCloudContactcenterinsightsV1ConversationLevelSentiment[] */
  public function setSentiments($sentiments)
  {
    $this->sentiments = $sentiments;
  }
  /** @return GoogleCloudContactcenterinsightsV1ConversationLevelSentiment[] */
  public function getSentiments()
  {
    return $this->sentiments;
  }
}

class GoogleCloudContactcenterinsightsV1AnnotationBoundary extends \Google\Model
{
  /** @var int */
  public $transcriptIndex;
  /** @var int */
  public $wordIndex;

  /** @param int */
  public function setTranscriptIndex($transcriptIndex)
  {
    $this->transcriptIndex = $transcriptIndex;
  }
  /** @return int */
  public function getTranscriptIndex()
  {
    return $this->transcriptIndex;
  }
  /** @param int */
  public function setWordIndex($wordIndex)
  {
    $this->wordIndex = $wordIndex;
  }
  /** @return int */
  public function getWordIndex()
  {
    return $this->wordIndex;
  }
}

class GoogleCloudContactcenterinsightsV1AnswerFeedback extends \Google\Model
{
  /** @var bool */
  public $clicked;
  /** @var string */
  public $correctnessLevel;
  /** @var bool */
  public $displayed;

  /** @param bool */
  public function setClicked($clicked)
  {
    $this->clicked = $clicked;
  }
  /** @return bool */
  public function getClicked()
  {
    return $this->clicked;
  }
  /** @param string */
  public function setCorrectnessLevel($correctnessLevel)
  {
    $this->correctnessLevel = $correctnessLevel;
  }
  /** @return string */
  public function getCorrectnessLevel()
  {
    return $this->correctnessLevel;
  }
  /** @param bool */
  public function setDisplayed($displayed)
  {
    $this->displayed = $displayed;
  }
  /** @return bool */
  public function getDisplayed()
  {
    return $this->displayed;
  }
}

class GoogleCloudContactcenterinsightsV1ArticleSuggestionData extends \Google\Model
{
  /** @var float */
  public $confidenceScore;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $queryRecord;
  /** @var string */
  public $source;
  /** @var string */
  public $title;
  /** @var string */
  public $uri;

  /** @param float */
  public function setConfidenceScore($confidenceScore)
  {
    $this->confidenceScore = $confidenceScore;
  }
  /** @return float */
  public function getConfidenceScore()
  {
    return $this->confidenceScore;
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
  public function setQueryRecord($queryRecord)
  {
    $this->queryRecord = $queryRecord;
  }
  /** @return string */
  public function getQueryRecord()
  {
    return $this->queryRecord;
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

class GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsMetadata extends \Google\Model
{
  /** @var int */
  public $completedAnalysesCount;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var int */
  public $failedAnalysesCount;
  /** @var GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsRequest */
  public $request;
  /** @var int */
  public $totalRequestedAnalysesCount;
  protected $requestType = GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsRequest::class;
  protected $requestDataType = '';
  /** @param int */
  public function setCompletedAnalysesCount($completedAnalysesCount)
  {
    $this->completedAnalysesCount = $completedAnalysesCount;
  }
  /** @return int */
  public function getCompletedAnalysesCount()
  {
    return $this->completedAnalysesCount;
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
  public function setFailedAnalysesCount($failedAnalysesCount)
  {
    $this->failedAnalysesCount = $failedAnalysesCount;
  }
  /** @return int */
  public function getFailedAnalysesCount()
  {
    return $this->failedAnalysesCount;
  }
  /** @param GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsRequest */
  public function getRequest()
  {
    return $this->request;
  }
  /** @param int */
  public function setTotalRequestedAnalysesCount($totalRequestedAnalysesCount)
  {
    $this->totalRequestedAnalysesCount = $totalRequestedAnalysesCount;
  }
  /** @return int */
  public function getTotalRequestedAnalysesCount()
  {
    return $this->totalRequestedAnalysesCount;
  }
}

class GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsRequest extends \Google\Model
{
  /** @var float */
  public $analysisPercentage;
  /** @var string */
  public $filter;
  /** @var string */
  public $parent;

  /** @param float */
  public function setAnalysisPercentage($analysisPercentage)
  {
    $this->analysisPercentage = $analysisPercentage;
  }
  /** @return float */
  public function getAnalysisPercentage()
  {
    return $this->analysisPercentage;
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
}

class GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsResponse extends \Google\Model
{
  /** @var int */
  public $failedAnalysisCount;
  /** @var int */
  public $successfulAnalysisCount;

  /** @param int */
  public function setFailedAnalysisCount($failedAnalysisCount)
  {
    $this->failedAnalysisCount = $failedAnalysisCount;
  }
  /** @return int */
  public function getFailedAnalysisCount()
  {
    return $this->failedAnalysisCount;
  }
  /** @param int */
  public function setSuccessfulAnalysisCount($successfulAnalysisCount)
  {
    $this->successfulAnalysisCount = $successfulAnalysisCount;
  }
  /** @return int */
  public function getSuccessfulAnalysisCount()
  {
    return $this->successfulAnalysisCount;
  }
}

class GoogleCloudContactcenterinsightsV1CalculateIssueModelStatsResponse extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1IssueModelLabelStats */
  public $currentStats;
  protected $currentStatsType = GoogleCloudContactcenterinsightsV1IssueModelLabelStats::class;
  protected $currentStatsDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1IssueModelLabelStats */
  public function setCurrentStats(GoogleCloudContactcenterinsightsV1IssueModelLabelStats $currentStats)
  {
    $this->currentStats = $currentStats;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueModelLabelStats */
  public function getCurrentStats()
  {
    return $this->currentStats;
  }
}

class GoogleCloudContactcenterinsightsV1CalculateStatsResponse extends \Google\Model
{
  /** @var string */
  public $averageDuration;
  /** @var int */
  public $averageTurnCount;
  /** @var int */
  public $conversationCount;
  /** @var GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeries */
  public $conversationCountTimeSeries;
  /** @var int[] */
  public $customHighlighterMatches;
  /** @var int[] */
  public $issueMatches;
  /** @var GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats[] */
  public $issueMatchesStats;
  /** @var int[] */
  public $smartHighlighterMatches;
  protected $conversationCountTimeSeriesType = GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeries::class;
  protected $conversationCountTimeSeriesDataType = '';
  protected $issueMatchesStatsType = GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats::class;
  protected $issueMatchesStatsDataType = 'map';
  /** @param string */
  public function setAverageDuration($averageDuration)
  {
    $this->averageDuration = $averageDuration;
  }
  /** @return string */
  public function getAverageDuration()
  {
    return $this->averageDuration;
  }
  /** @param int */
  public function setAverageTurnCount($averageTurnCount)
  {
    $this->averageTurnCount = $averageTurnCount;
  }
  /** @return int */
  public function getAverageTurnCount()
  {
    return $this->averageTurnCount;
  }
  /** @param int */
  public function setConversationCount($conversationCount)
  {
    $this->conversationCount = $conversationCount;
  }
  /** @return int */
  public function getConversationCount()
  {
    return $this->conversationCount;
  }
  /** @param GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeries */
  public function setConversationCountTimeSeries(GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeries $conversationCountTimeSeries)
  {
    $this->conversationCountTimeSeries = $conversationCountTimeSeries;
  }
  /** @return GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeries */
  public function getConversationCountTimeSeries()
  {
    return $this->conversationCountTimeSeries;
  }
  /** @param int[] */
  public function setCustomHighlighterMatches($customHighlighterMatches)
  {
    $this->customHighlighterMatches = $customHighlighterMatches;
  }
  /** @return int[] */
  public function getCustomHighlighterMatches()
  {
    return $this->customHighlighterMatches;
  }
  /** @param int[] */
  public function setIssueMatches($issueMatches)
  {
    $this->issueMatches = $issueMatches;
  }
  /** @return int[] */
  public function getIssueMatches()
  {
    return $this->issueMatches;
  }
  /** @param GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats[] */
  public function setIssueMatchesStats($issueMatchesStats)
  {
    $this->issueMatchesStats = $issueMatchesStats;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats[] */
  public function getIssueMatchesStats()
  {
    return $this->issueMatchesStats;
  }
  /** @param int[] */
  public function setSmartHighlighterMatches($smartHighlighterMatches)
  {
    $this->smartHighlighterMatches = $smartHighlighterMatches;
  }
  /** @return int[] */
  public function getSmartHighlighterMatches()
  {
    return $this->smartHighlighterMatches;
  }
}

class GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeries extends \Google\Collection
{
  /** @var string */
  public $intervalDuration;
  /** @var GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeriesInterval[] */
  public $points;
  protected $collection_key = 'points';
  protected $pointsType = GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeriesInterval::class;
  protected $pointsDataType = 'array';
  /** @param string */
  public function setIntervalDuration($intervalDuration)
  {
    $this->intervalDuration = $intervalDuration;
  }
  /** @return string */
  public function getIntervalDuration()
  {
    return $this->intervalDuration;
  }
  /** @param GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeriesInterval[] */
  public function setPoints($points)
  {
    $this->points = $points;
  }
  /** @return GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeriesInterval[] */
  public function getPoints()
  {
    return $this->points;
  }
}

class GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeriesInterval extends \Google\Model
{
  /** @var int */
  public $conversationCount;
  /** @var string */
  public $startTime;

  /** @param int */
  public function setConversationCount($conversationCount)
  {
    $this->conversationCount = $conversationCount;
  }
  /** @return int */
  public function getConversationCount()
  {
    return $this->conversationCount;
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

class GoogleCloudContactcenterinsightsV1CallAnnotation extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public $annotationEndBoundary;
  /** @var GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public $annotationStartBoundary;
  /** @var int */
  public $channelTag;
  /** @var GoogleCloudContactcenterinsightsV1EntityMentionData */
  public $entityMentionData;
  /** @var GoogleCloudContactcenterinsightsV1HoldData */
  public $holdData;
  /** @var GoogleCloudContactcenterinsightsV1IntentMatchData */
  public $intentMatchData;
  /** @var GoogleCloudContactcenterinsightsV1InterruptionData */
  public $interruptionData;
  /** @var GoogleCloudContactcenterinsightsV1IssueMatchData */
  public $issueMatchData;
  /** @var GoogleCloudContactcenterinsightsV1PhraseMatchData */
  public $phraseMatchData;
  /** @var GoogleCloudContactcenterinsightsV1SentimentData */
  public $sentimentData;
  /** @var GoogleCloudContactcenterinsightsV1SilenceData */
  public $silenceData;
  protected $annotationEndBoundaryType = GoogleCloudContactcenterinsightsV1AnnotationBoundary::class;
  protected $annotationEndBoundaryDataType = '';
  protected $annotationStartBoundaryType = GoogleCloudContactcenterinsightsV1AnnotationBoundary::class;
  protected $annotationStartBoundaryDataType = '';
  protected $entityMentionDataType = GoogleCloudContactcenterinsightsV1EntityMentionData::class;
  protected $entityMentionDataDataType = '';
  protected $holdDataType = GoogleCloudContactcenterinsightsV1HoldData::class;
  protected $holdDataDataType = '';
  protected $intentMatchDataType = GoogleCloudContactcenterinsightsV1IntentMatchData::class;
  protected $intentMatchDataDataType = '';
  protected $interruptionDataType = GoogleCloudContactcenterinsightsV1InterruptionData::class;
  protected $interruptionDataDataType = '';
  protected $issueMatchDataType = GoogleCloudContactcenterinsightsV1IssueMatchData::class;
  protected $issueMatchDataDataType = '';
  protected $phraseMatchDataType = GoogleCloudContactcenterinsightsV1PhraseMatchData::class;
  protected $phraseMatchDataDataType = '';
  protected $sentimentDataType = GoogleCloudContactcenterinsightsV1SentimentData::class;
  protected $sentimentDataDataType = '';
  protected $silenceDataType = GoogleCloudContactcenterinsightsV1SilenceData::class;
  protected $silenceDataDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public function setAnnotationEndBoundary(GoogleCloudContactcenterinsightsV1AnnotationBoundary $annotationEndBoundary)
  {
    $this->annotationEndBoundary = $annotationEndBoundary;
  }
  /** @return GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public function getAnnotationEndBoundary()
  {
    return $this->annotationEndBoundary;
  }
  /** @param GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public function setAnnotationStartBoundary(GoogleCloudContactcenterinsightsV1AnnotationBoundary $annotationStartBoundary)
  {
    $this->annotationStartBoundary = $annotationStartBoundary;
  }
  /** @return GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public function getAnnotationStartBoundary()
  {
    return $this->annotationStartBoundary;
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
  /** @param GoogleCloudContactcenterinsightsV1EntityMentionData */
  public function setEntityMentionData(GoogleCloudContactcenterinsightsV1EntityMentionData $entityMentionData)
  {
    $this->entityMentionData = $entityMentionData;
  }
  /** @return GoogleCloudContactcenterinsightsV1EntityMentionData */
  public function getEntityMentionData()
  {
    return $this->entityMentionData;
  }
  /** @param GoogleCloudContactcenterinsightsV1HoldData */
  public function setHoldData(GoogleCloudContactcenterinsightsV1HoldData $holdData)
  {
    $this->holdData = $holdData;
  }
  /** @return GoogleCloudContactcenterinsightsV1HoldData */
  public function getHoldData()
  {
    return $this->holdData;
  }
  /** @param GoogleCloudContactcenterinsightsV1IntentMatchData */
  public function setIntentMatchData(GoogleCloudContactcenterinsightsV1IntentMatchData $intentMatchData)
  {
    $this->intentMatchData = $intentMatchData;
  }
  /** @return GoogleCloudContactcenterinsightsV1IntentMatchData */
  public function getIntentMatchData()
  {
    return $this->intentMatchData;
  }
  /** @param GoogleCloudContactcenterinsightsV1InterruptionData */
  public function setInterruptionData(GoogleCloudContactcenterinsightsV1InterruptionData $interruptionData)
  {
    $this->interruptionData = $interruptionData;
  }
  /** @return GoogleCloudContactcenterinsightsV1InterruptionData */
  public function getInterruptionData()
  {
    return $this->interruptionData;
  }
  /** @param GoogleCloudContactcenterinsightsV1IssueMatchData */
  public function setIssueMatchData(GoogleCloudContactcenterinsightsV1IssueMatchData $issueMatchData)
  {
    $this->issueMatchData = $issueMatchData;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueMatchData */
  public function getIssueMatchData()
  {
    return $this->issueMatchData;
  }
  /** @param GoogleCloudContactcenterinsightsV1PhraseMatchData */
  public function setPhraseMatchData(GoogleCloudContactcenterinsightsV1PhraseMatchData $phraseMatchData)
  {
    $this->phraseMatchData = $phraseMatchData;
  }
  /** @return GoogleCloudContactcenterinsightsV1PhraseMatchData */
  public function getPhraseMatchData()
  {
    return $this->phraseMatchData;
  }
  /** @param GoogleCloudContactcenterinsightsV1SentimentData */
  public function setSentimentData(GoogleCloudContactcenterinsightsV1SentimentData $sentimentData)
  {
    $this->sentimentData = $sentimentData;
  }
  /** @return GoogleCloudContactcenterinsightsV1SentimentData */
  public function getSentimentData()
  {
    return $this->sentimentData;
  }
  /** @param GoogleCloudContactcenterinsightsV1SilenceData */
  public function setSilenceData(GoogleCloudContactcenterinsightsV1SilenceData $silenceData)
  {
    $this->silenceData = $silenceData;
  }
  /** @return GoogleCloudContactcenterinsightsV1SilenceData */
  public function getSilenceData()
  {
    return $this->silenceData;
  }
}

class GoogleCloudContactcenterinsightsV1Conversation extends \Google\Collection
{
  /** @var string */
  public $agentId;
  /** @var GoogleCloudContactcenterinsightsV1ConversationCallMetadata */
  public $callMetadata;
  /** @var string */
  public $createTime;
  /** @var GoogleCloudContactcenterinsightsV1ConversationDataSource */
  public $dataSource;
  /** @var GoogleCloudContactcenterinsightsV1DialogflowIntent[] */
  public $dialogflowIntents;
  /** @var string */
  public $duration;
  /** @var string */
  public $expireTime;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $languageCode;
  /** @var GoogleCloudContactcenterinsightsV1Analysis */
  public $latestAnalysis;
  /** @var string */
  public $medium;
  /** @var string */
  public $name;
  /** @var string */
  public $obfuscatedUserId;
  /** @var GoogleCloudContactcenterinsightsV1RuntimeAnnotation[] */
  public $runtimeAnnotations;
  /** @var string */
  public $startTime;
  /** @var GoogleCloudContactcenterinsightsV1ConversationTranscript */
  public $transcript;
  /** @var string */
  public $ttl;
  /** @var int */
  public $turnCount;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'runtimeAnnotations';
  protected $callMetadataType = GoogleCloudContactcenterinsightsV1ConversationCallMetadata::class;
  protected $callMetadataDataType = '';
  protected $dataSourceType = GoogleCloudContactcenterinsightsV1ConversationDataSource::class;
  protected $dataSourceDataType = '';
  protected $dialogflowIntentsType = GoogleCloudContactcenterinsightsV1DialogflowIntent::class;
  protected $dialogflowIntentsDataType = 'map';
  protected $latestAnalysisType = GoogleCloudContactcenterinsightsV1Analysis::class;
  protected $latestAnalysisDataType = '';
  protected $runtimeAnnotationsType = GoogleCloudContactcenterinsightsV1RuntimeAnnotation::class;
  protected $runtimeAnnotationsDataType = 'array';
  protected $transcriptType = GoogleCloudContactcenterinsightsV1ConversationTranscript::class;
  protected $transcriptDataType = '';
  /** @param string */
  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  /** @return string */
  public function getAgentId()
  {
    return $this->agentId;
  }
  /** @param GoogleCloudContactcenterinsightsV1ConversationCallMetadata */
  public function setCallMetadata(GoogleCloudContactcenterinsightsV1ConversationCallMetadata $callMetadata)
  {
    $this->callMetadata = $callMetadata;
  }
  /** @return GoogleCloudContactcenterinsightsV1ConversationCallMetadata */
  public function getCallMetadata()
  {
    return $this->callMetadata;
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
  /** @param GoogleCloudContactcenterinsightsV1ConversationDataSource */
  public function setDataSource(GoogleCloudContactcenterinsightsV1ConversationDataSource $dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /** @return GoogleCloudContactcenterinsightsV1ConversationDataSource */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /** @param GoogleCloudContactcenterinsightsV1DialogflowIntent[] */
  public function setDialogflowIntents($dialogflowIntents)
  {
    $this->dialogflowIntents = $dialogflowIntents;
  }
  /** @return GoogleCloudContactcenterinsightsV1DialogflowIntent[] */
  public function getDialogflowIntents()
  {
    return $this->dialogflowIntents;
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
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param GoogleCloudContactcenterinsightsV1Analysis */
  public function setLatestAnalysis(GoogleCloudContactcenterinsightsV1Analysis $latestAnalysis)
  {
    $this->latestAnalysis = $latestAnalysis;
  }
  /** @return GoogleCloudContactcenterinsightsV1Analysis */
  public function getLatestAnalysis()
  {
    return $this->latestAnalysis;
  }
  /** @param string */
  public function setMedium($medium)
  {
    $this->medium = $medium;
  }
  /** @return string */
  public function getMedium()
  {
    return $this->medium;
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
  public function setObfuscatedUserId($obfuscatedUserId)
  {
    $this->obfuscatedUserId = $obfuscatedUserId;
  }
  /** @return string */
  public function getObfuscatedUserId()
  {
    return $this->obfuscatedUserId;
  }
  /** @param GoogleCloudContactcenterinsightsV1RuntimeAnnotation[] */
  public function setRuntimeAnnotations($runtimeAnnotations)
  {
    $this->runtimeAnnotations = $runtimeAnnotations;
  }
  /** @return GoogleCloudContactcenterinsightsV1RuntimeAnnotation[] */
  public function getRuntimeAnnotations()
  {
    return $this->runtimeAnnotations;
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
  /** @param GoogleCloudContactcenterinsightsV1ConversationTranscript */
  public function setTranscript(GoogleCloudContactcenterinsightsV1ConversationTranscript $transcript)
  {
    $this->transcript = $transcript;
  }
  /** @return GoogleCloudContactcenterinsightsV1ConversationTranscript */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /** @param string */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
  }
  /** @param int */
  public function setTurnCount($turnCount)
  {
    $this->turnCount = $turnCount;
  }
  /** @return int */
  public function getTurnCount()
  {
    return $this->turnCount;
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

class GoogleCloudContactcenterinsightsV1ConversationCallMetadata extends \Google\Model
{
  /** @var int */
  public $agentChannel;
  /** @var int */
  public $customerChannel;

  /** @param int */
  public function setAgentChannel($agentChannel)
  {
    $this->agentChannel = $agentChannel;
  }
  /** @return int */
  public function getAgentChannel()
  {
    return $this->agentChannel;
  }
  /** @param int */
  public function setCustomerChannel($customerChannel)
  {
    $this->customerChannel = $customerChannel;
  }
  /** @return int */
  public function getCustomerChannel()
  {
    return $this->customerChannel;
  }
}

class GoogleCloudContactcenterinsightsV1ConversationDataSource extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1DialogflowSource */
  public $dialogflowSource;
  /** @var GoogleCloudContactcenterinsightsV1GcsSource */
  public $gcsSource;
  protected $dialogflowSourceType = GoogleCloudContactcenterinsightsV1DialogflowSource::class;
  protected $dialogflowSourceDataType = '';
  protected $gcsSourceType = GoogleCloudContactcenterinsightsV1GcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1DialogflowSource */
  public function setDialogflowSource(GoogleCloudContactcenterinsightsV1DialogflowSource $dialogflowSource)
  {
    $this->dialogflowSource = $dialogflowSource;
  }
  /** @return GoogleCloudContactcenterinsightsV1DialogflowSource */
  public function getDialogflowSource()
  {
    return $this->dialogflowSource;
  }
  /** @param GoogleCloudContactcenterinsightsV1GcsSource */
  public function setGcsSource(GoogleCloudContactcenterinsightsV1GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudContactcenterinsightsV1GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class GoogleCloudContactcenterinsightsV1ConversationLevelSentiment extends \Google\Model
{
  /** @var int */
  public $channelTag;
  /** @var GoogleCloudContactcenterinsightsV1SentimentData */
  public $sentimentData;
  protected $sentimentDataType = GoogleCloudContactcenterinsightsV1SentimentData::class;
  protected $sentimentDataDataType = '';
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
  /** @param GoogleCloudContactcenterinsightsV1SentimentData */
  public function setSentimentData(GoogleCloudContactcenterinsightsV1SentimentData $sentimentData)
  {
    $this->sentimentData = $sentimentData;
  }
  /** @return GoogleCloudContactcenterinsightsV1SentimentData */
  public function getSentimentData()
  {
    return $this->sentimentData;
  }
}

class GoogleCloudContactcenterinsightsV1ConversationParticipant extends \Google\Model
{
  /** @var string */
  public $dialogflowParticipant;
  /** @var string */
  public $dialogflowParticipantName;
  /** @var string */
  public $obfuscatedExternalUserId;
  /** @var string */
  public $role;
  /** @var string */
  public $userId;

  /** @param string */
  public function setDialogflowParticipant($dialogflowParticipant)
  {
    $this->dialogflowParticipant = $dialogflowParticipant;
  }
  /** @return string */
  public function getDialogflowParticipant()
  {
    return $this->dialogflowParticipant;
  }
  /** @param string */
  public function setDialogflowParticipantName($dialogflowParticipantName)
  {
    $this->dialogflowParticipantName = $dialogflowParticipantName;
  }
  /** @return string */
  public function getDialogflowParticipantName()
  {
    return $this->dialogflowParticipantName;
  }
  /** @param string */
  public function setObfuscatedExternalUserId($obfuscatedExternalUserId)
  {
    $this->obfuscatedExternalUserId = $obfuscatedExternalUserId;
  }
  /** @return string */
  public function getObfuscatedExternalUserId()
  {
    return $this->obfuscatedExternalUserId;
  }
  /** @param string */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /** @return string */
  public function getRole()
  {
    return $this->role;
  }
  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class GoogleCloudContactcenterinsightsV1ConversationTranscript extends \Google\Collection
{
  /** @var GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegment[] */
  public $transcriptSegments;
  protected $collection_key = 'transcriptSegments';
  protected $transcriptSegmentsType = GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegment::class;
  protected $transcriptSegmentsDataType = 'array';
  /** @param GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegment[] */
  public function setTranscriptSegments($transcriptSegments)
  {
    $this->transcriptSegments = $transcriptSegments;
  }
  /** @return GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegment[] */
  public function getTranscriptSegments()
  {
    return $this->transcriptSegments;
  }
}

class GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegment extends \Google\Collection
{
  /** @var int */
  public $channelTag;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentDialogflowSegmentMetadata */
  public $dialogflowSegmentMetadata;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $messageTime;
  /** @var GoogleCloudContactcenterinsightsV1ConversationParticipant */
  public $segmentParticipant;
  /** @var GoogleCloudContactcenterinsightsV1SentimentData */
  public $sentiment;
  /** @var string */
  public $text;
  /** @var GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentWordInfo[] */
  public $words;
  protected $collection_key = 'words';
  protected $dialogflowSegmentMetadataType = GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentDialogflowSegmentMetadata::class;
  protected $dialogflowSegmentMetadataDataType = '';
  protected $segmentParticipantType = GoogleCloudContactcenterinsightsV1ConversationParticipant::class;
  protected $segmentParticipantDataType = '';
  protected $sentimentType = GoogleCloudContactcenterinsightsV1SentimentData::class;
  protected $sentimentDataType = '';
  protected $wordsType = GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentWordInfo::class;
  protected $wordsDataType = 'array';
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
  /** @param GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentDialogflowSegmentMetadata */
  public function setDialogflowSegmentMetadata(GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentDialogflowSegmentMetadata $dialogflowSegmentMetadata)
  {
    $this->dialogflowSegmentMetadata = $dialogflowSegmentMetadata;
  }
  /** @return GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentDialogflowSegmentMetadata */
  public function getDialogflowSegmentMetadata()
  {
    return $this->dialogflowSegmentMetadata;
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
  public function setMessageTime($messageTime)
  {
    $this->messageTime = $messageTime;
  }
  /** @return string */
  public function getMessageTime()
  {
    return $this->messageTime;
  }
  /** @param GoogleCloudContactcenterinsightsV1ConversationParticipant */
  public function setSegmentParticipant(GoogleCloudContactcenterinsightsV1ConversationParticipant $segmentParticipant)
  {
    $this->segmentParticipant = $segmentParticipant;
  }
  /** @return GoogleCloudContactcenterinsightsV1ConversationParticipant */
  public function getSegmentParticipant()
  {
    return $this->segmentParticipant;
  }
  /** @param GoogleCloudContactcenterinsightsV1SentimentData */
  public function setSentiment(GoogleCloudContactcenterinsightsV1SentimentData $sentiment)
  {
    $this->sentiment = $sentiment;
  }
  /** @return GoogleCloudContactcenterinsightsV1SentimentData */
  public function getSentiment()
  {
    return $this->sentiment;
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
  /** @param GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentWordInfo[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentWordInfo[] */
  public function getWords()
  {
    return $this->words;
  }
}

class GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentDialogflowSegmentMetadata extends \Google\Model
{
  /** @var bool */
  public $smartReplyAllowlistCovered;

  /** @param bool */
  public function setSmartReplyAllowlistCovered($smartReplyAllowlistCovered)
  {
    $this->smartReplyAllowlistCovered = $smartReplyAllowlistCovered;
  }
  /** @return bool */
  public function getSmartReplyAllowlistCovered()
  {
    return $this->smartReplyAllowlistCovered;
  }
}

class GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentWordInfo extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $endOffset;
  /** @var string */
  public $startOffset;
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
  public function setEndOffset($endOffset)
  {
    $this->endOffset = $endOffset;
  }
  /** @return string */
  public function getEndOffset()
  {
    return $this->endOffset;
  }
  /** @param string */
  public function setStartOffset($startOffset)
  {
    $this->startOffset = $startOffset;
  }
  /** @return string */
  public function getStartOffset()
  {
    return $this->startOffset;
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

class GoogleCloudContactcenterinsightsV1CreateAnalysisOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversation;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;

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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
}

class GoogleCloudContactcenterinsightsV1CreateIssueModelMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudContactcenterinsightsV1CreateIssueModelRequest */
  public $request;
  protected $requestType = GoogleCloudContactcenterinsightsV1CreateIssueModelRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudContactcenterinsightsV1CreateIssueModelRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1CreateIssueModelRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1CreateIssueModelRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1CreateIssueModelRequest extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1IssueModel */
  public $issueModel;
  /** @var string */
  public $parent;
  protected $issueModelType = GoogleCloudContactcenterinsightsV1IssueModel::class;
  protected $issueModelDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1IssueModel */
  public function setIssueModel(GoogleCloudContactcenterinsightsV1IssueModel $issueModel)
  {
    $this->issueModel = $issueModel;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueModel */
  public function getIssueModel()
  {
    return $this->issueModel;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
}

class GoogleCloudContactcenterinsightsV1DeleteIssueModelMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudContactcenterinsightsV1DeleteIssueModelRequest */
  public $request;
  protected $requestType = GoogleCloudContactcenterinsightsV1DeleteIssueModelRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudContactcenterinsightsV1DeleteIssueModelRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1DeleteIssueModelRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1DeleteIssueModelRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1DeleteIssueModelRequest extends \Google\Model
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

class GoogleCloudContactcenterinsightsV1DeployIssueModelMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudContactcenterinsightsV1DeployIssueModelRequest */
  public $request;
  protected $requestType = GoogleCloudContactcenterinsightsV1DeployIssueModelRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudContactcenterinsightsV1DeployIssueModelRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1DeployIssueModelRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1DeployIssueModelRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1DeployIssueModelRequest extends \Google\Model
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

class GoogleCloudContactcenterinsightsV1DeployIssueModelResponse extends \Google\Model
{
}

class GoogleCloudContactcenterinsightsV1DialogflowIntent extends \Google\Model
{
  /** @var string */
  public $displayName;

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
}

class GoogleCloudContactcenterinsightsV1DialogflowInteractionData extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $dialogflowIntentId;

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
  public function setDialogflowIntentId($dialogflowIntentId)
  {
    $this->dialogflowIntentId = $dialogflowIntentId;
  }
  /** @return string */
  public function getDialogflowIntentId()
  {
    return $this->dialogflowIntentId;
  }
}

class GoogleCloudContactcenterinsightsV1DialogflowSource extends \Google\Model
{
  /** @var string */
  public $audioUri;
  /** @var string */
  public $dialogflowConversation;

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
  /** @param string */
  public function setDialogflowConversation($dialogflowConversation)
  {
    $this->dialogflowConversation = $dialogflowConversation;
  }
  /** @return string */
  public function getDialogflowConversation()
  {
    return $this->dialogflowConversation;
  }
}

class GoogleCloudContactcenterinsightsV1Entity extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $metadata;
  /** @var float */
  public $salience;
  /** @var GoogleCloudContactcenterinsightsV1SentimentData */
  public $sentiment;
  /** @var string */
  public $type;
  protected $sentimentType = GoogleCloudContactcenterinsightsV1SentimentData::class;
  protected $sentimentDataType = '';
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
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param float */
  public function setSalience($salience)
  {
    $this->salience = $salience;
  }
  /** @return float */
  public function getSalience()
  {
    return $this->salience;
  }
  /** @param GoogleCloudContactcenterinsightsV1SentimentData */
  public function setSentiment(GoogleCloudContactcenterinsightsV1SentimentData $sentiment)
  {
    $this->sentiment = $sentiment;
  }
  /** @return GoogleCloudContactcenterinsightsV1SentimentData */
  public function getSentiment()
  {
    return $this->sentiment;
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

class GoogleCloudContactcenterinsightsV1EntityMentionData extends \Google\Model
{
  /** @var string */
  public $entityUniqueId;
  /** @var GoogleCloudContactcenterinsightsV1SentimentData */
  public $sentiment;
  /** @var string */
  public $type;
  protected $sentimentType = GoogleCloudContactcenterinsightsV1SentimentData::class;
  protected $sentimentDataType = '';
  /** @param string */
  public function setEntityUniqueId($entityUniqueId)
  {
    $this->entityUniqueId = $entityUniqueId;
  }
  /** @return string */
  public function getEntityUniqueId()
  {
    return $this->entityUniqueId;
  }
  /** @param GoogleCloudContactcenterinsightsV1SentimentData */
  public function setSentiment(GoogleCloudContactcenterinsightsV1SentimentData $sentiment)
  {
    $this->sentiment = $sentiment;
  }
  /** @return GoogleCloudContactcenterinsightsV1SentimentData */
  public function getSentiment()
  {
    return $this->sentiment;
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

class GoogleCloudContactcenterinsightsV1ExactMatchConfig extends \Google\Model
{
  /** @var bool */
  public $caseSensitive;

  /** @param bool */
  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }
  /** @return bool */
  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }
}

class GoogleCloudContactcenterinsightsV1ExportInsightsDataMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleRpcStatus[] */
  public $partialErrors;
  /** @var GoogleCloudContactcenterinsightsV1ExportInsightsDataRequest */
  public $request;
  protected $collection_key = 'partialErrors';
  protected $partialErrorsType = GoogleRpcStatus::class;
  protected $partialErrorsDataType = 'array';
  protected $requestType = GoogleCloudContactcenterinsightsV1ExportInsightsDataRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialErrors($partialErrors)
  {
    $this->partialErrors = $partialErrors;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialErrors()
  {
    return $this->partialErrors;
  }
  /** @param GoogleCloudContactcenterinsightsV1ExportInsightsDataRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1ExportInsightsDataRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1ExportInsightsDataRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1ExportInsightsDataRequest extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1ExportInsightsDataRequestBigQueryDestination */
  public $bigQueryDestination;
  /** @var string */
  public $filter;
  /** @var string */
  public $kmsKey;
  /** @var string */
  public $parent;
  /** @var string */
  public $writeDisposition;
  protected $bigQueryDestinationType = GoogleCloudContactcenterinsightsV1ExportInsightsDataRequestBigQueryDestination::class;
  protected $bigQueryDestinationDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1ExportInsightsDataRequestBigQueryDestination */
  public function setBigQueryDestination(GoogleCloudContactcenterinsightsV1ExportInsightsDataRequestBigQueryDestination $bigQueryDestination)
  {
    $this->bigQueryDestination = $bigQueryDestination;
  }
  /** @return GoogleCloudContactcenterinsightsV1ExportInsightsDataRequestBigQueryDestination */
  public function getBigQueryDestination()
  {
    return $this->bigQueryDestination;
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
  public function setKmsKey($kmsKey)
  {
    $this->kmsKey = $kmsKey;
  }
  /** @return string */
  public function getKmsKey()
  {
    return $this->kmsKey;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string */
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  /** @return string */
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}

class GoogleCloudContactcenterinsightsV1ExportInsightsDataRequestBigQueryDestination extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var string */
  public $projectId;
  /** @var string */
  public $table;

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
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
}

class GoogleCloudContactcenterinsightsV1ExportInsightsDataResponse extends \Google\Model
{
}

class GoogleCloudContactcenterinsightsV1FaqAnswerData extends \Google\Model
{
  /** @var string */
  public $answer;
  /** @var float */
  public $confidenceScore;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $queryRecord;
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
  /** @param float */
  public function setConfidenceScore($confidenceScore)
  {
    $this->confidenceScore = $confidenceScore;
  }
  /** @return float */
  public function getConfidenceScore()
  {
    return $this->confidenceScore;
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
  public function setQueryRecord($queryRecord)
  {
    $this->queryRecord = $queryRecord;
  }
  /** @return string */
  public function getQueryRecord()
  {
    return $this->queryRecord;
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

class GoogleCloudContactcenterinsightsV1GcsSource extends \Google\Model
{
  /** @var string */
  public $audioUri;
  /** @var string */
  public $transcriptUri;

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
  /** @param string */
  public function setTranscriptUri($transcriptUri)
  {
    $this->transcriptUri = $transcriptUri;
  }
  /** @return string */
  public function getTranscriptUri()
  {
    return $this->transcriptUri;
  }
}

class GoogleCloudContactcenterinsightsV1HoldData extends \Google\Model
{
}

class GoogleCloudContactcenterinsightsV1IngestConversationsMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleRpcStatus[] */
  public $partialErrors;
  /** @var GoogleCloudContactcenterinsightsV1IngestConversationsRequest */
  public $request;
  protected $collection_key = 'partialErrors';
  protected $partialErrorsType = GoogleRpcStatus::class;
  protected $partialErrorsDataType = 'array';
  protected $requestType = GoogleCloudContactcenterinsightsV1IngestConversationsRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialErrors($partialErrors)
  {
    $this->partialErrors = $partialErrors;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialErrors()
  {
    return $this->partialErrors;
  }
  /** @param GoogleCloudContactcenterinsightsV1IngestConversationsRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1IngestConversationsRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1IngestConversationsRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1IngestConversationsRequest extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1IngestConversationsRequestConversationConfig */
  public $conversationConfig;
  /** @var GoogleCloudContactcenterinsightsV1IngestConversationsRequestGcsSource */
  public $gcsSource;
  /** @var string */
  public $parent;
  /** @var GoogleCloudContactcenterinsightsV1IngestConversationsRequestTranscriptObjectConfig */
  public $transcriptObjectConfig;
  protected $conversationConfigType = GoogleCloudContactcenterinsightsV1IngestConversationsRequestConversationConfig::class;
  protected $conversationConfigDataType = '';
  protected $gcsSourceType = GoogleCloudContactcenterinsightsV1IngestConversationsRequestGcsSource::class;
  protected $gcsSourceDataType = '';
  protected $transcriptObjectConfigType = GoogleCloudContactcenterinsightsV1IngestConversationsRequestTranscriptObjectConfig::class;
  protected $transcriptObjectConfigDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1IngestConversationsRequestConversationConfig */
  public function setConversationConfig(GoogleCloudContactcenterinsightsV1IngestConversationsRequestConversationConfig $conversationConfig)
  {
    $this->conversationConfig = $conversationConfig;
  }
  /** @return GoogleCloudContactcenterinsightsV1IngestConversationsRequestConversationConfig */
  public function getConversationConfig()
  {
    return $this->conversationConfig;
  }
  /** @param GoogleCloudContactcenterinsightsV1IngestConversationsRequestGcsSource */
  public function setGcsSource(GoogleCloudContactcenterinsightsV1IngestConversationsRequestGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudContactcenterinsightsV1IngestConversationsRequestGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param GoogleCloudContactcenterinsightsV1IngestConversationsRequestTranscriptObjectConfig */
  public function setTranscriptObjectConfig(GoogleCloudContactcenterinsightsV1IngestConversationsRequestTranscriptObjectConfig $transcriptObjectConfig)
  {
    $this->transcriptObjectConfig = $transcriptObjectConfig;
  }
  /** @return GoogleCloudContactcenterinsightsV1IngestConversationsRequestTranscriptObjectConfig */
  public function getTranscriptObjectConfig()
  {
    return $this->transcriptObjectConfig;
  }
}

class GoogleCloudContactcenterinsightsV1IngestConversationsRequestConversationConfig extends \Google\Model
{
  /** @var string */
  public $agentId;

  /** @param string */
  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  /** @return string */
  public function getAgentId()
  {
    return $this->agentId;
  }
}

class GoogleCloudContactcenterinsightsV1IngestConversationsRequestGcsSource extends \Google\Model
{
  /** @var string */
  public $bucketUri;

  /** @param string */
  public function setBucketUri($bucketUri)
  {
    $this->bucketUri = $bucketUri;
  }
  /** @return string */
  public function getBucketUri()
  {
    return $this->bucketUri;
  }
}

class GoogleCloudContactcenterinsightsV1IngestConversationsRequestTranscriptObjectConfig extends \Google\Model
{
  /** @var string */
  public $medium;

  /** @param string */
  public function setMedium($medium)
  {
    $this->medium = $medium;
  }
  /** @return string */
  public function getMedium()
  {
    return $this->medium;
  }
}

class GoogleCloudContactcenterinsightsV1IngestConversationsResponse extends \Google\Model
{
}

class GoogleCloudContactcenterinsightsV1Intent extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;

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

class GoogleCloudContactcenterinsightsV1IntentMatchData extends \Google\Model
{
  /** @var string */
  public $intentUniqueId;

  /** @param string */
  public function setIntentUniqueId($intentUniqueId)
  {
    $this->intentUniqueId = $intentUniqueId;
  }
  /** @return string */
  public function getIntentUniqueId()
  {
    return $this->intentUniqueId;
  }
}

class GoogleCloudContactcenterinsightsV1InterruptionData extends \Google\Model
{
}

class GoogleCloudContactcenterinsightsV1Issue extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string[] */
  public $sampleUtterances;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'sampleUtterances';
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
  /** @param string[] */
  public function setSampleUtterances($sampleUtterances)
  {
    $this->sampleUtterances = $sampleUtterances;
  }
  /** @return string[] */
  public function getSampleUtterances()
  {
    return $this->sampleUtterances;
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

class GoogleCloudContactcenterinsightsV1IssueAssignment extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $issue;
  public $score;

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
  public function setIssue($issue)
  {
    $this->issue = $issue;
  }
  /** @return string */
  public function getIssue()
  {
    return $this->issue;
  }
  public function setScore($score)
  {
    $this->score = $score;
  }
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudContactcenterinsightsV1IssueMatchData extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1IssueAssignment */
  public $issueAssignment;
  protected $issueAssignmentType = GoogleCloudContactcenterinsightsV1IssueAssignment::class;
  protected $issueAssignmentDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1IssueAssignment */
  public function setIssueAssignment(GoogleCloudContactcenterinsightsV1IssueAssignment $issueAssignment)
  {
    $this->issueAssignment = $issueAssignment;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueAssignment */
  public function getIssueAssignment()
  {
    return $this->issueAssignment;
  }
}

class GoogleCloudContactcenterinsightsV1IssueModel extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudContactcenterinsightsV1IssueModelInputDataConfig */
  public $inputDataConfig;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var GoogleCloudContactcenterinsightsV1IssueModelLabelStats */
  public $trainingStats;
  /** @var string */
  public $updateTime;
  protected $inputDataConfigType = GoogleCloudContactcenterinsightsV1IssueModelInputDataConfig::class;
  protected $inputDataConfigDataType = '';
  protected $trainingStatsType = GoogleCloudContactcenterinsightsV1IssueModelLabelStats::class;
  protected $trainingStatsDataType = '';
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
  /** @param GoogleCloudContactcenterinsightsV1IssueModelInputDataConfig */
  public function setInputDataConfig(GoogleCloudContactcenterinsightsV1IssueModelInputDataConfig $inputDataConfig)
  {
    $this->inputDataConfig = $inputDataConfig;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueModelInputDataConfig */
  public function getInputDataConfig()
  {
    return $this->inputDataConfig;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param GoogleCloudContactcenterinsightsV1IssueModelLabelStats */
  public function setTrainingStats(GoogleCloudContactcenterinsightsV1IssueModelLabelStats $trainingStats)
  {
    $this->trainingStats = $trainingStats;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueModelLabelStats */
  public function getTrainingStats()
  {
    return $this->trainingStats;
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

class GoogleCloudContactcenterinsightsV1IssueModelInputDataConfig extends \Google\Model
{
  /** @var string */
  public $filter;
  /** @var string */
  public $medium;
  /** @var string */
  public $trainingConversationsCount;

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
  public function setMedium($medium)
  {
    $this->medium = $medium;
  }
  /** @return string */
  public function getMedium()
  {
    return $this->medium;
  }
  /** @param string */
  public function setTrainingConversationsCount($trainingConversationsCount)
  {
    $this->trainingConversationsCount = $trainingConversationsCount;
  }
  /** @return string */
  public function getTrainingConversationsCount()
  {
    return $this->trainingConversationsCount;
  }
}

class GoogleCloudContactcenterinsightsV1IssueModelLabelStats extends \Google\Model
{
  /** @var string */
  public $analyzedConversationsCount;
  /** @var GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats[] */
  public $issueStats;
  /** @var string */
  public $unclassifiedConversationsCount;
  protected $issueStatsType = GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats::class;
  protected $issueStatsDataType = 'map';
  /** @param string */
  public function setAnalyzedConversationsCount($analyzedConversationsCount)
  {
    $this->analyzedConversationsCount = $analyzedConversationsCount;
  }
  /** @return string */
  public function getAnalyzedConversationsCount()
  {
    return $this->analyzedConversationsCount;
  }
  /** @param GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats[] */
  public function setIssueStats($issueStats)
  {
    $this->issueStats = $issueStats;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats[] */
  public function getIssueStats()
  {
    return $this->issueStats;
  }
  /** @param string */
  public function setUnclassifiedConversationsCount($unclassifiedConversationsCount)
  {
    $this->unclassifiedConversationsCount = $unclassifiedConversationsCount;
  }
  /** @return string */
  public function getUnclassifiedConversationsCount()
  {
    return $this->unclassifiedConversationsCount;
  }
}

class GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $issue;
  /** @var string */
  public $labeledConversationsCount;

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
  public function setIssue($issue)
  {
    $this->issue = $issue;
  }
  /** @return string */
  public function getIssue()
  {
    return $this->issue;
  }
  /** @param string */
  public function setLabeledConversationsCount($labeledConversationsCount)
  {
    $this->labeledConversationsCount = $labeledConversationsCount;
  }
  /** @return string */
  public function getLabeledConversationsCount()
  {
    return $this->labeledConversationsCount;
  }
}

class GoogleCloudContactcenterinsightsV1IssueModelResult extends \Google\Collection
{
  /** @var string */
  public $issueModel;
  /** @var GoogleCloudContactcenterinsightsV1IssueAssignment[] */
  public $issues;
  protected $collection_key = 'issues';
  protected $issuesType = GoogleCloudContactcenterinsightsV1IssueAssignment::class;
  protected $issuesDataType = 'array';
  /** @param string */
  public function setIssueModel($issueModel)
  {
    $this->issueModel = $issueModel;
  }
  /** @return string */
  public function getIssueModel()
  {
    return $this->issueModel;
  }
  /** @param GoogleCloudContactcenterinsightsV1IssueAssignment[] */
  public function setIssues($issues)
  {
    $this->issues = $issues;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueAssignment[] */
  public function getIssues()
  {
    return $this->issues;
  }
}

class GoogleCloudContactcenterinsightsV1ListAnalysesResponse extends \Google\Collection
{
  /** @var GoogleCloudContactcenterinsightsV1Analysis[] */
  public $analyses;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'analyses';
  protected $analysesType = GoogleCloudContactcenterinsightsV1Analysis::class;
  protected $analysesDataType = 'array';
  /** @param GoogleCloudContactcenterinsightsV1Analysis[] */
  public function setAnalyses($analyses)
  {
    $this->analyses = $analyses;
  }
  /** @return GoogleCloudContactcenterinsightsV1Analysis[] */
  public function getAnalyses()
  {
    return $this->analyses;
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

class GoogleCloudContactcenterinsightsV1ListConversationsResponse extends \Google\Collection
{
  /** @var GoogleCloudContactcenterinsightsV1Conversation[] */
  public $conversations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'conversations';
  protected $conversationsType = GoogleCloudContactcenterinsightsV1Conversation::class;
  protected $conversationsDataType = 'array';
  /** @param GoogleCloudContactcenterinsightsV1Conversation[] */
  public function setConversations($conversations)
  {
    $this->conversations = $conversations;
  }
  /** @return GoogleCloudContactcenterinsightsV1Conversation[] */
  public function getConversations()
  {
    return $this->conversations;
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

class GoogleCloudContactcenterinsightsV1ListIssueModelsResponse extends \Google\Collection
{
  /** @var GoogleCloudContactcenterinsightsV1IssueModel[] */
  public $issueModels;
  protected $collection_key = 'issueModels';
  protected $issueModelsType = GoogleCloudContactcenterinsightsV1IssueModel::class;
  protected $issueModelsDataType = 'array';
  /** @param GoogleCloudContactcenterinsightsV1IssueModel[] */
  public function setIssueModels($issueModels)
  {
    $this->issueModels = $issueModels;
  }
  /** @return GoogleCloudContactcenterinsightsV1IssueModel[] */
  public function getIssueModels()
  {
    return $this->issueModels;
  }
}

class GoogleCloudContactcenterinsightsV1ListIssuesResponse extends \Google\Collection
{
  /** @var GoogleCloudContactcenterinsightsV1Issue[] */
  public $issues;
  protected $collection_key = 'issues';
  protected $issuesType = GoogleCloudContactcenterinsightsV1Issue::class;
  protected $issuesDataType = 'array';
  /** @param GoogleCloudContactcenterinsightsV1Issue[] */
  public function setIssues($issues)
  {
    $this->issues = $issues;
  }
  /** @return GoogleCloudContactcenterinsightsV1Issue[] */
  public function getIssues()
  {
    return $this->issues;
  }
}

class GoogleCloudContactcenterinsightsV1ListPhraseMatchersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudContactcenterinsightsV1PhraseMatcher[] */
  public $phraseMatchers;
  protected $collection_key = 'phraseMatchers';
  protected $phraseMatchersType = GoogleCloudContactcenterinsightsV1PhraseMatcher::class;
  protected $phraseMatchersDataType = 'array';
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
  /** @param GoogleCloudContactcenterinsightsV1PhraseMatcher[] */
  public function setPhraseMatchers($phraseMatchers)
  {
    $this->phraseMatchers = $phraseMatchers;
  }
  /** @return GoogleCloudContactcenterinsightsV1PhraseMatcher[] */
  public function getPhraseMatchers()
  {
    return $this->phraseMatchers;
  }
}

class GoogleCloudContactcenterinsightsV1ListViewsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudContactcenterinsightsV1View[] */
  public $views;
  protected $collection_key = 'views';
  protected $viewsType = GoogleCloudContactcenterinsightsV1View::class;
  protected $viewsDataType = 'array';
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
  /** @param GoogleCloudContactcenterinsightsV1View[] */
  public function setViews($views)
  {
    $this->views = $views;
  }
  /** @return GoogleCloudContactcenterinsightsV1View[] */
  public function getViews()
  {
    return $this->views;
  }
}

class GoogleCloudContactcenterinsightsV1PhraseMatchData extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $phraseMatcher;

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
  public function setPhraseMatcher($phraseMatcher)
  {
    $this->phraseMatcher = $phraseMatcher;
  }
  /** @return string */
  public function getPhraseMatcher()
  {
    return $this->phraseMatcher;
  }
}

class GoogleCloudContactcenterinsightsV1PhraseMatchRule extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1PhraseMatchRuleConfig */
  public $config;
  /** @var bool */
  public $negated;
  /** @var string */
  public $query;
  protected $configType = GoogleCloudContactcenterinsightsV1PhraseMatchRuleConfig::class;
  protected $configDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1PhraseMatchRuleConfig */
  public function setConfig(GoogleCloudContactcenterinsightsV1PhraseMatchRuleConfig $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudContactcenterinsightsV1PhraseMatchRuleConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param bool */
  public function setNegated($negated)
  {
    $this->negated = $negated;
  }
  /** @return bool */
  public function getNegated()
  {
    return $this->negated;
  }
  /** @param string */
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
}

class GoogleCloudContactcenterinsightsV1PhraseMatchRuleConfig extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1ExactMatchConfig */
  public $exactMatchConfig;
  protected $exactMatchConfigType = GoogleCloudContactcenterinsightsV1ExactMatchConfig::class;
  protected $exactMatchConfigDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1ExactMatchConfig */
  public function setExactMatchConfig(GoogleCloudContactcenterinsightsV1ExactMatchConfig $exactMatchConfig)
  {
    $this->exactMatchConfig = $exactMatchConfig;
  }
  /** @return GoogleCloudContactcenterinsightsV1ExactMatchConfig */
  public function getExactMatchConfig()
  {
    return $this->exactMatchConfig;
  }
}

class GoogleCloudContactcenterinsightsV1PhraseMatchRuleGroup extends \Google\Collection
{
  /** @var GoogleCloudContactcenterinsightsV1PhraseMatchRule[] */
  public $phraseMatchRules;
  /** @var string */
  public $type;
  protected $collection_key = 'phraseMatchRules';
  protected $phraseMatchRulesType = GoogleCloudContactcenterinsightsV1PhraseMatchRule::class;
  protected $phraseMatchRulesDataType = 'array';
  /** @param GoogleCloudContactcenterinsightsV1PhraseMatchRule[] */
  public function setPhraseMatchRules($phraseMatchRules)
  {
    $this->phraseMatchRules = $phraseMatchRules;
  }
  /** @return GoogleCloudContactcenterinsightsV1PhraseMatchRule[] */
  public function getPhraseMatchRules()
  {
    return $this->phraseMatchRules;
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

class GoogleCloudContactcenterinsightsV1PhraseMatcher extends \Google\Collection
{
  /** @var string */
  public $activationUpdateTime;
  /** @var bool */
  public $active;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GoogleCloudContactcenterinsightsV1PhraseMatchRuleGroup[] */
  public $phraseMatchRuleGroups;
  /** @var string */
  public $revisionCreateTime;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $roleMatch;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $versionTag;
  protected $collection_key = 'phraseMatchRuleGroups';
  protected $phraseMatchRuleGroupsType = GoogleCloudContactcenterinsightsV1PhraseMatchRuleGroup::class;
  protected $phraseMatchRuleGroupsDataType = 'array';
  /** @param string */
  public function setActivationUpdateTime($activationUpdateTime)
  {
    $this->activationUpdateTime = $activationUpdateTime;
  }
  /** @return string */
  public function getActivationUpdateTime()
  {
    return $this->activationUpdateTime;
  }
  /** @param bool */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /** @return bool */
  public function getActive()
  {
    return $this->active;
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
  /** @param GoogleCloudContactcenterinsightsV1PhraseMatchRuleGroup[] */
  public function setPhraseMatchRuleGroups($phraseMatchRuleGroups)
  {
    $this->phraseMatchRuleGroups = $phraseMatchRuleGroups;
  }
  /** @return GoogleCloudContactcenterinsightsV1PhraseMatchRuleGroup[] */
  public function getPhraseMatchRuleGroups()
  {
    return $this->phraseMatchRuleGroups;
  }
  /** @param string */
  public function setRevisionCreateTime($revisionCreateTime)
  {
    $this->revisionCreateTime = $revisionCreateTime;
  }
  /** @return string */
  public function getRevisionCreateTime()
  {
    return $this->revisionCreateTime;
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
  /** @param string */
  public function setRoleMatch($roleMatch)
  {
    $this->roleMatch = $roleMatch;
  }
  /** @return string */
  public function getRoleMatch()
  {
    return $this->roleMatch;
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /** @param string */
  public function setVersionTag($versionTag)
  {
    $this->versionTag = $versionTag;
  }
  /** @return string */
  public function getVersionTag()
  {
    return $this->versionTag;
  }
}

class GoogleCloudContactcenterinsightsV1RuntimeAnnotation extends \Google\Model
{
  /** @var string */
  public $annotationId;
  /** @var GoogleCloudContactcenterinsightsV1AnswerFeedback */
  public $answerFeedback;
  /** @var GoogleCloudContactcenterinsightsV1ArticleSuggestionData */
  public $articleSuggestion;
  /** @var string */
  public $createTime;
  /** @var GoogleCloudContactcenterinsightsV1DialogflowInteractionData */
  public $dialogflowInteraction;
  /** @var GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public $endBoundary;
  /** @var GoogleCloudContactcenterinsightsV1FaqAnswerData */
  public $faqAnswer;
  /** @var GoogleCloudContactcenterinsightsV1SmartComposeSuggestionData */
  public $smartComposeSuggestion;
  /** @var GoogleCloudContactcenterinsightsV1SmartReplyData */
  public $smartReply;
  /** @var GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public $startBoundary;
  protected $answerFeedbackType = GoogleCloudContactcenterinsightsV1AnswerFeedback::class;
  protected $answerFeedbackDataType = '';
  protected $articleSuggestionType = GoogleCloudContactcenterinsightsV1ArticleSuggestionData::class;
  protected $articleSuggestionDataType = '';
  protected $dialogflowInteractionType = GoogleCloudContactcenterinsightsV1DialogflowInteractionData::class;
  protected $dialogflowInteractionDataType = '';
  protected $endBoundaryType = GoogleCloudContactcenterinsightsV1AnnotationBoundary::class;
  protected $endBoundaryDataType = '';
  protected $faqAnswerType = GoogleCloudContactcenterinsightsV1FaqAnswerData::class;
  protected $faqAnswerDataType = '';
  protected $smartComposeSuggestionType = GoogleCloudContactcenterinsightsV1SmartComposeSuggestionData::class;
  protected $smartComposeSuggestionDataType = '';
  protected $smartReplyType = GoogleCloudContactcenterinsightsV1SmartReplyData::class;
  protected $smartReplyDataType = '';
  protected $startBoundaryType = GoogleCloudContactcenterinsightsV1AnnotationBoundary::class;
  protected $startBoundaryDataType = '';
  /** @param string */
  public function setAnnotationId($annotationId)
  {
    $this->annotationId = $annotationId;
  }
  /** @return string */
  public function getAnnotationId()
  {
    return $this->annotationId;
  }
  /** @param GoogleCloudContactcenterinsightsV1AnswerFeedback */
  public function setAnswerFeedback(GoogleCloudContactcenterinsightsV1AnswerFeedback $answerFeedback)
  {
    $this->answerFeedback = $answerFeedback;
  }
  /** @return GoogleCloudContactcenterinsightsV1AnswerFeedback */
  public function getAnswerFeedback()
  {
    return $this->answerFeedback;
  }
  /** @param GoogleCloudContactcenterinsightsV1ArticleSuggestionData */
  public function setArticleSuggestion(GoogleCloudContactcenterinsightsV1ArticleSuggestionData $articleSuggestion)
  {
    $this->articleSuggestion = $articleSuggestion;
  }
  /** @return GoogleCloudContactcenterinsightsV1ArticleSuggestionData */
  public function getArticleSuggestion()
  {
    return $this->articleSuggestion;
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
  /** @param GoogleCloudContactcenterinsightsV1DialogflowInteractionData */
  public function setDialogflowInteraction(GoogleCloudContactcenterinsightsV1DialogflowInteractionData $dialogflowInteraction)
  {
    $this->dialogflowInteraction = $dialogflowInteraction;
  }
  /** @return GoogleCloudContactcenterinsightsV1DialogflowInteractionData */
  public function getDialogflowInteraction()
  {
    return $this->dialogflowInteraction;
  }
  /** @param GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public function setEndBoundary(GoogleCloudContactcenterinsightsV1AnnotationBoundary $endBoundary)
  {
    $this->endBoundary = $endBoundary;
  }
  /** @return GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public function getEndBoundary()
  {
    return $this->endBoundary;
  }
  /** @param GoogleCloudContactcenterinsightsV1FaqAnswerData */
  public function setFaqAnswer(GoogleCloudContactcenterinsightsV1FaqAnswerData $faqAnswer)
  {
    $this->faqAnswer = $faqAnswer;
  }
  /** @return GoogleCloudContactcenterinsightsV1FaqAnswerData */
  public function getFaqAnswer()
  {
    return $this->faqAnswer;
  }
  /** @param GoogleCloudContactcenterinsightsV1SmartComposeSuggestionData */
  public function setSmartComposeSuggestion(GoogleCloudContactcenterinsightsV1SmartComposeSuggestionData $smartComposeSuggestion)
  {
    $this->smartComposeSuggestion = $smartComposeSuggestion;
  }
  /** @return GoogleCloudContactcenterinsightsV1SmartComposeSuggestionData */
  public function getSmartComposeSuggestion()
  {
    return $this->smartComposeSuggestion;
  }
  /** @param GoogleCloudContactcenterinsightsV1SmartReplyData */
  public function setSmartReply(GoogleCloudContactcenterinsightsV1SmartReplyData $smartReply)
  {
    $this->smartReply = $smartReply;
  }
  /** @return GoogleCloudContactcenterinsightsV1SmartReplyData */
  public function getSmartReply()
  {
    return $this->smartReply;
  }
  /** @param GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public function setStartBoundary(GoogleCloudContactcenterinsightsV1AnnotationBoundary $startBoundary)
  {
    $this->startBoundary = $startBoundary;
  }
  /** @return GoogleCloudContactcenterinsightsV1AnnotationBoundary */
  public function getStartBoundary()
  {
    return $this->startBoundary;
  }
}

class GoogleCloudContactcenterinsightsV1SentimentData extends \Google\Model
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

class GoogleCloudContactcenterinsightsV1Settings extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1SettingsAnalysisConfig */
  public $analysisConfig;
  /** @var string */
  public $conversationTtl;
  /** @var string */
  public $createTime;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $name;
  /** @var string[] */
  public $pubsubNotificationSettings;
  /** @var string */
  public $updateTime;
  protected $analysisConfigType = GoogleCloudContactcenterinsightsV1SettingsAnalysisConfig::class;
  protected $analysisConfigDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1SettingsAnalysisConfig */
  public function setAnalysisConfig(GoogleCloudContactcenterinsightsV1SettingsAnalysisConfig $analysisConfig)
  {
    $this->analysisConfig = $analysisConfig;
  }
  /** @return GoogleCloudContactcenterinsightsV1SettingsAnalysisConfig */
  public function getAnalysisConfig()
  {
    return $this->analysisConfig;
  }
  /** @param string */
  public function setConversationTtl($conversationTtl)
  {
    $this->conversationTtl = $conversationTtl;
  }
  /** @return string */
  public function getConversationTtl()
  {
    return $this->conversationTtl;
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
  public function setPubsubNotificationSettings($pubsubNotificationSettings)
  {
    $this->pubsubNotificationSettings = $pubsubNotificationSettings;
  }
  /** @return string[] */
  public function getPubsubNotificationSettings()
  {
    return $this->pubsubNotificationSettings;
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

class GoogleCloudContactcenterinsightsV1SettingsAnalysisConfig extends \Google\Model
{
  public $runtimeIntegrationAnalysisPercentage;

  public function setRuntimeIntegrationAnalysisPercentage($runtimeIntegrationAnalysisPercentage)
  {
    $this->runtimeIntegrationAnalysisPercentage = $runtimeIntegrationAnalysisPercentage;
  }
  public function getRuntimeIntegrationAnalysisPercentage()
  {
    return $this->runtimeIntegrationAnalysisPercentage;
  }
}

class GoogleCloudContactcenterinsightsV1SilenceData extends \Google\Model
{
}

class GoogleCloudContactcenterinsightsV1SmartComposeSuggestionData extends \Google\Model
{
  public $confidenceScore;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $queryRecord;
  /** @var string */
  public $suggestion;

  public function setConfidenceScore($confidenceScore)
  {
    $this->confidenceScore = $confidenceScore;
  }
  public function getConfidenceScore()
  {
    return $this->confidenceScore;
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
  public function setQueryRecord($queryRecord)
  {
    $this->queryRecord = $queryRecord;
  }
  /** @return string */
  public function getQueryRecord()
  {
    return $this->queryRecord;
  }
  /** @param string */
  public function setSuggestion($suggestion)
  {
    $this->suggestion = $suggestion;
  }
  /** @return string */
  public function getSuggestion()
  {
    return $this->suggestion;
  }
}

class GoogleCloudContactcenterinsightsV1SmartReplyData extends \Google\Model
{
  public $confidenceScore;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $queryRecord;
  /** @var string */
  public $reply;

  public function setConfidenceScore($confidenceScore)
  {
    $this->confidenceScore = $confidenceScore;
  }
  public function getConfidenceScore()
  {
    return $this->confidenceScore;
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
  public function setQueryRecord($queryRecord)
  {
    $this->queryRecord = $queryRecord;
  }
  /** @return string */
  public function getQueryRecord()
  {
    return $this->queryRecord;
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

class GoogleCloudContactcenterinsightsV1UndeployIssueModelMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudContactcenterinsightsV1UndeployIssueModelRequest */
  public $request;
  protected $requestType = GoogleCloudContactcenterinsightsV1UndeployIssueModelRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudContactcenterinsightsV1UndeployIssueModelRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1UndeployIssueModelRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1UndeployIssueModelRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1UndeployIssueModelRequest extends \Google\Model
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

class GoogleCloudContactcenterinsightsV1UndeployIssueModelResponse extends \Google\Model
{
}

class GoogleCloudContactcenterinsightsV1View extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $value;

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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
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

class GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsMetadata extends \Google\Model
{
  /** @var int */
  public $completedAnalysesCount;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var int */
  public $failedAnalysesCount;
  /** @var GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsRequest */
  public $request;
  /** @var int */
  public $totalRequestedAnalysesCount;
  protected $requestType = GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsRequest::class;
  protected $requestDataType = '';
  /** @param int */
  public function setCompletedAnalysesCount($completedAnalysesCount)
  {
    $this->completedAnalysesCount = $completedAnalysesCount;
  }
  /** @return int */
  public function getCompletedAnalysesCount()
  {
    return $this->completedAnalysesCount;
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
  public function setFailedAnalysesCount($failedAnalysesCount)
  {
    $this->failedAnalysesCount = $failedAnalysesCount;
  }
  /** @return int */
  public function getFailedAnalysesCount()
  {
    return $this->failedAnalysesCount;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsRequest */
  public function getRequest()
  {
    return $this->request;
  }
  /** @param int */
  public function setTotalRequestedAnalysesCount($totalRequestedAnalysesCount)
  {
    $this->totalRequestedAnalysesCount = $totalRequestedAnalysesCount;
  }
  /** @return int */
  public function getTotalRequestedAnalysesCount()
  {
    return $this->totalRequestedAnalysesCount;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsRequest extends \Google\Model
{
  /** @var float */
  public $analysisPercentage;
  /** @var string */
  public $filter;
  /** @var string */
  public $parent;

  /** @param float */
  public function setAnalysisPercentage($analysisPercentage)
  {
    $this->analysisPercentage = $analysisPercentage;
  }
  /** @return float */
  public function getAnalysisPercentage()
  {
    return $this->analysisPercentage;
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsResponse extends \Google\Model
{
  /** @var int */
  public $failedAnalysisCount;
  /** @var int */
  public $successfulAnalysisCount;

  /** @param int */
  public function setFailedAnalysisCount($failedAnalysisCount)
  {
    $this->failedAnalysisCount = $failedAnalysisCount;
  }
  /** @return int */
  public function getFailedAnalysisCount()
  {
    return $this->failedAnalysisCount;
  }
  /** @param int */
  public function setSuccessfulAnalysisCount($successfulAnalysisCount)
  {
    $this->successfulAnalysisCount = $successfulAnalysisCount;
  }
  /** @return int */
  public function getSuccessfulAnalysisCount()
  {
    return $this->successfulAnalysisCount;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1CreateAnalysisOperationMetadata extends \Google\Model
{
  /** @var string */
  public $conversation;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;

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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelRequest */
  public $request;
  protected $requestType = GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelRequest extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1alpha1IssueModel */
  public $issueModel;
  /** @var string */
  public $parent;
  protected $issueModelType = GoogleCloudContactcenterinsightsV1alpha1IssueModel::class;
  protected $issueModelDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1alpha1IssueModel */
  public function setIssueModel(GoogleCloudContactcenterinsightsV1alpha1IssueModel $issueModel)
  {
    $this->issueModel = $issueModel;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1IssueModel */
  public function getIssueModel()
  {
    return $this->issueModel;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelRequest */
  public $request;
  protected $requestType = GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelRequest extends \Google\Model
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

class GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelRequest */
  public $request;
  protected $requestType = GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelRequest extends \Google\Model
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

class GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelResponse extends \Google\Model
{
}

class GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleRpcStatus[] */
  public $partialErrors;
  /** @var GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequest */
  public $request;
  protected $collection_key = 'partialErrors';
  protected $partialErrorsType = GoogleRpcStatus::class;
  protected $partialErrorsDataType = 'array';
  protected $requestType = GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialErrors($partialErrors)
  {
    $this->partialErrors = $partialErrors;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialErrors()
  {
    return $this->partialErrors;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequest extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequestBigQueryDestination */
  public $bigQueryDestination;
  /** @var string */
  public $filter;
  /** @var string */
  public $kmsKey;
  /** @var string */
  public $parent;
  /** @var string */
  public $writeDisposition;
  protected $bigQueryDestinationType = GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequestBigQueryDestination::class;
  protected $bigQueryDestinationDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequestBigQueryDestination */
  public function setBigQueryDestination(GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequestBigQueryDestination $bigQueryDestination)
  {
    $this->bigQueryDestination = $bigQueryDestination;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequestBigQueryDestination */
  public function getBigQueryDestination()
  {
    return $this->bigQueryDestination;
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
  public function setKmsKey($kmsKey)
  {
    $this->kmsKey = $kmsKey;
  }
  /** @return string */
  public function getKmsKey()
  {
    return $this->kmsKey;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string */
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  /** @return string */
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequestBigQueryDestination extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var string */
  public $projectId;
  /** @var string */
  public $table;

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
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataResponse extends \Google\Model
{
}

class GoogleCloudContactcenterinsightsV1alpha1IngestConversationsMetadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleRpcStatus[] */
  public $partialErrors;
  /** @var GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequest */
  public $request;
  protected $collection_key = 'partialErrors';
  protected $partialErrorsType = GoogleRpcStatus::class;
  protected $partialErrorsDataType = 'array';
  protected $requestType = GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleRpcStatus[] */
  public function setPartialErrors($partialErrors)
  {
    $this->partialErrors = $partialErrors;
  }
  /** @return GoogleRpcStatus[] */
  public function getPartialErrors()
  {
    return $this->partialErrors;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequest extends \Google\Model
{
  /** @var GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestConversationConfig */
  public $conversationConfig;
  /** @var GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestGcsSource */
  public $gcsSource;
  /** @var string */
  public $parent;
  /** @var GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestTranscriptObjectConfig */
  public $transcriptObjectConfig;
  protected $conversationConfigType = GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestConversationConfig::class;
  protected $conversationConfigDataType = '';
  protected $gcsSourceType = GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestGcsSource::class;
  protected $gcsSourceDataType = '';
  protected $transcriptObjectConfigType = GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestTranscriptObjectConfig::class;
  protected $transcriptObjectConfigDataType = '';
  /** @param GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestConversationConfig */
  public function setConversationConfig(GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestConversationConfig $conversationConfig)
  {
    $this->conversationConfig = $conversationConfig;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestConversationConfig */
  public function getConversationConfig()
  {
    return $this->conversationConfig;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestGcsSource */
  public function setGcsSource(GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestTranscriptObjectConfig */
  public function setTranscriptObjectConfig(GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestTranscriptObjectConfig $transcriptObjectConfig)
  {
    $this->transcriptObjectConfig = $transcriptObjectConfig;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestTranscriptObjectConfig */
  public function getTranscriptObjectConfig()
  {
    return $this->transcriptObjectConfig;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestConversationConfig extends \Google\Model
{
  /** @var string */
  public $agentId;

  /** @param string */
  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  /** @return string */
  public function getAgentId()
  {
    return $this->agentId;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestGcsSource extends \Google\Model
{
  /** @var string */
  public $bucketUri;

  /** @param string */
  public function setBucketUri($bucketUri)
  {
    $this->bucketUri = $bucketUri;
  }
  /** @return string */
  public function getBucketUri()
  {
    return $this->bucketUri;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestTranscriptObjectConfig extends \Google\Model
{
  /** @var string */
  public $medium;

  /** @param string */
  public function setMedium($medium)
  {
    $this->medium = $medium;
  }
  /** @return string */
  public function getMedium()
  {
    return $this->medium;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1IngestConversationsResponse extends \Google\Model
{
}

class GoogleCloudContactcenterinsightsV1alpha1IssueModel extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudContactcenterinsightsV1alpha1IssueModelInputDataConfig */
  public $inputDataConfig;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStats */
  public $trainingStats;
  /** @var string */
  public $updateTime;
  protected $inputDataConfigType = GoogleCloudContactcenterinsightsV1alpha1IssueModelInputDataConfig::class;
  protected $inputDataConfigDataType = '';
  protected $trainingStatsType = GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStats::class;
  protected $trainingStatsDataType = '';
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
  /** @param GoogleCloudContactcenterinsightsV1alpha1IssueModelInputDataConfig */
  public function setInputDataConfig(GoogleCloudContactcenterinsightsV1alpha1IssueModelInputDataConfig $inputDataConfig)
  {
    $this->inputDataConfig = $inputDataConfig;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1IssueModelInputDataConfig */
  public function getInputDataConfig()
  {
    return $this->inputDataConfig;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStats */
  public function setTrainingStats(GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStats $trainingStats)
  {
    $this->trainingStats = $trainingStats;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStats */
  public function getTrainingStats()
  {
    return $this->trainingStats;
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

class GoogleCloudContactcenterinsightsV1alpha1IssueModelInputDataConfig extends \Google\Model
{
  /** @var string */
  public $filter;
  /** @var string */
  public $medium;
  /** @var string */
  public $trainingConversationsCount;

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
  public function setMedium($medium)
  {
    $this->medium = $medium;
  }
  /** @return string */
  public function getMedium()
  {
    return $this->medium;
  }
  /** @param string */
  public function setTrainingConversationsCount($trainingConversationsCount)
  {
    $this->trainingConversationsCount = $trainingConversationsCount;
  }
  /** @return string */
  public function getTrainingConversationsCount()
  {
    return $this->trainingConversationsCount;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStats extends \Google\Model
{
  /** @var string */
  public $analyzedConversationsCount;
  /** @var GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStatsIssueStats[] */
  public $issueStats;
  /** @var string */
  public $unclassifiedConversationsCount;
  protected $issueStatsType = GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStatsIssueStats::class;
  protected $issueStatsDataType = 'map';
  /** @param string */
  public function setAnalyzedConversationsCount($analyzedConversationsCount)
  {
    $this->analyzedConversationsCount = $analyzedConversationsCount;
  }
  /** @return string */
  public function getAnalyzedConversationsCount()
  {
    return $this->analyzedConversationsCount;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStatsIssueStats[] */
  public function setIssueStats($issueStats)
  {
    $this->issueStats = $issueStats;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStatsIssueStats[] */
  public function getIssueStats()
  {
    return $this->issueStats;
  }
  /** @param string */
  public function setUnclassifiedConversationsCount($unclassifiedConversationsCount)
  {
    $this->unclassifiedConversationsCount = $unclassifiedConversationsCount;
  }
  /** @return string */
  public function getUnclassifiedConversationsCount()
  {
    return $this->unclassifiedConversationsCount;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStatsIssueStats extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $issue;
  /** @var string */
  public $labeledConversationsCount;

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
  public function setIssue($issue)
  {
    $this->issue = $issue;
  }
  /** @return string */
  public function getIssue()
  {
    return $this->issue;
  }
  /** @param string */
  public function setLabeledConversationsCount($labeledConversationsCount)
  {
    $this->labeledConversationsCount = $labeledConversationsCount;
  }
  /** @return string */
  public function getLabeledConversationsCount()
  {
    return $this->labeledConversationsCount;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelRequest */
  public $request;
  protected $requestType = GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelRequest::class;
  protected $requestDataType = '';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelRequest */
  public function setRequest(GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelRequest $request)
  {
    $this->request = $request;
  }
  /** @return GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelRequest */
  public function getRequest()
  {
    return $this->request;
  }
}

class GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelRequest extends \Google\Model
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

class GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelResponse extends \Google\Model
{
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1Analysis::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1Analysis');
class_alias(GoogleCloudContactcenterinsightsV1AnalysisResult::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1AnalysisResult');
class_alias(GoogleCloudContactcenterinsightsV1AnalysisResultCallAnalysisMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1AnalysisResultCallAnalysisMetadata');
class_alias(GoogleCloudContactcenterinsightsV1AnnotationBoundary::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1AnnotationBoundary');
class_alias(GoogleCloudContactcenterinsightsV1AnswerFeedback::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1AnswerFeedback');
class_alias(GoogleCloudContactcenterinsightsV1ArticleSuggestionData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ArticleSuggestionData');
class_alias(GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsMetadata');
class_alias(GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsRequest');
class_alias(GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1BulkAnalyzeConversationsResponse');
class_alias(GoogleCloudContactcenterinsightsV1CalculateIssueModelStatsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1CalculateIssueModelStatsResponse');
class_alias(GoogleCloudContactcenterinsightsV1CalculateStatsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1CalculateStatsResponse');
class_alias(GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeries::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeries');
class_alias(GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeriesInterval::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1CalculateStatsResponseTimeSeriesInterval');
class_alias(GoogleCloudContactcenterinsightsV1CallAnnotation::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1CallAnnotation');
class_alias(GoogleCloudContactcenterinsightsV1Conversation::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1Conversation');
class_alias(GoogleCloudContactcenterinsightsV1ConversationCallMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationCallMetadata');
class_alias(GoogleCloudContactcenterinsightsV1ConversationDataSource::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationDataSource');
class_alias(GoogleCloudContactcenterinsightsV1ConversationLevelSentiment::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationLevelSentiment');
class_alias(GoogleCloudContactcenterinsightsV1ConversationParticipant::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationParticipant');
class_alias(GoogleCloudContactcenterinsightsV1ConversationTranscript::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationTranscript');
class_alias(GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegment::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegment');
class_alias(GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentDialogflowSegmentMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentDialogflowSegmentMetadata');
class_alias(GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentWordInfo::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationTranscriptTranscriptSegmentWordInfo');
class_alias(GoogleCloudContactcenterinsightsV1CreateAnalysisOperationMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1CreateAnalysisOperationMetadata');
class_alias(GoogleCloudContactcenterinsightsV1CreateIssueModelMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1CreateIssueModelMetadata');
class_alias(GoogleCloudContactcenterinsightsV1CreateIssueModelRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1CreateIssueModelRequest');
class_alias(GoogleCloudContactcenterinsightsV1DeleteIssueModelMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DeleteIssueModelMetadata');
class_alias(GoogleCloudContactcenterinsightsV1DeleteIssueModelRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DeleteIssueModelRequest');
class_alias(GoogleCloudContactcenterinsightsV1DeployIssueModelMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DeployIssueModelMetadata');
class_alias(GoogleCloudContactcenterinsightsV1DeployIssueModelRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DeployIssueModelRequest');
class_alias(GoogleCloudContactcenterinsightsV1DeployIssueModelResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DeployIssueModelResponse');
class_alias(GoogleCloudContactcenterinsightsV1DialogflowIntent::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DialogflowIntent');
class_alias(GoogleCloudContactcenterinsightsV1DialogflowInteractionData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DialogflowInteractionData');
class_alias(GoogleCloudContactcenterinsightsV1DialogflowSource::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DialogflowSource');
class_alias(GoogleCloudContactcenterinsightsV1Entity::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1Entity');
class_alias(GoogleCloudContactcenterinsightsV1EntityMentionData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1EntityMentionData');
class_alias(GoogleCloudContactcenterinsightsV1ExactMatchConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ExactMatchConfig');
class_alias(GoogleCloudContactcenterinsightsV1ExportInsightsDataMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ExportInsightsDataMetadata');
class_alias(GoogleCloudContactcenterinsightsV1ExportInsightsDataRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ExportInsightsDataRequest');
class_alias(GoogleCloudContactcenterinsightsV1ExportInsightsDataRequestBigQueryDestination::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ExportInsightsDataRequestBigQueryDestination');
class_alias(GoogleCloudContactcenterinsightsV1ExportInsightsDataResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ExportInsightsDataResponse');
class_alias(GoogleCloudContactcenterinsightsV1FaqAnswerData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1FaqAnswerData');
class_alias(GoogleCloudContactcenterinsightsV1GcsSource::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1GcsSource');
class_alias(GoogleCloudContactcenterinsightsV1HoldData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1HoldData');
class_alias(GoogleCloudContactcenterinsightsV1IngestConversationsMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IngestConversationsMetadata');
class_alias(GoogleCloudContactcenterinsightsV1IngestConversationsRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IngestConversationsRequest');
class_alias(GoogleCloudContactcenterinsightsV1IngestConversationsRequestConversationConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IngestConversationsRequestConversationConfig');
class_alias(GoogleCloudContactcenterinsightsV1IngestConversationsRequestGcsSource::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IngestConversationsRequestGcsSource');
class_alias(GoogleCloudContactcenterinsightsV1IngestConversationsRequestTranscriptObjectConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IngestConversationsRequestTranscriptObjectConfig');
class_alias(GoogleCloudContactcenterinsightsV1IngestConversationsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IngestConversationsResponse');
class_alias(GoogleCloudContactcenterinsightsV1Intent::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1Intent');
class_alias(GoogleCloudContactcenterinsightsV1IntentMatchData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IntentMatchData');
class_alias(GoogleCloudContactcenterinsightsV1InterruptionData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1InterruptionData');
class_alias(GoogleCloudContactcenterinsightsV1Issue::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1Issue');
class_alias(GoogleCloudContactcenterinsightsV1IssueAssignment::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IssueAssignment');
class_alias(GoogleCloudContactcenterinsightsV1IssueMatchData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IssueMatchData');
class_alias(GoogleCloudContactcenterinsightsV1IssueModel::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IssueModel');
class_alias(GoogleCloudContactcenterinsightsV1IssueModelInputDataConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IssueModelInputDataConfig');
class_alias(GoogleCloudContactcenterinsightsV1IssueModelLabelStats::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IssueModelLabelStats');
class_alias(GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IssueModelLabelStatsIssueStats');
class_alias(GoogleCloudContactcenterinsightsV1IssueModelResult::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1IssueModelResult');
class_alias(GoogleCloudContactcenterinsightsV1ListAnalysesResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ListAnalysesResponse');
class_alias(GoogleCloudContactcenterinsightsV1ListConversationsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ListConversationsResponse');
class_alias(GoogleCloudContactcenterinsightsV1ListIssueModelsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ListIssueModelsResponse');
class_alias(GoogleCloudContactcenterinsightsV1ListIssuesResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ListIssuesResponse');
class_alias(GoogleCloudContactcenterinsightsV1ListPhraseMatchersResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ListPhraseMatchersResponse');
class_alias(GoogleCloudContactcenterinsightsV1ListViewsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ListViewsResponse');
class_alias(GoogleCloudContactcenterinsightsV1PhraseMatchData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1PhraseMatchData');
class_alias(GoogleCloudContactcenterinsightsV1PhraseMatchRule::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1PhraseMatchRule');
class_alias(GoogleCloudContactcenterinsightsV1PhraseMatchRuleConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1PhraseMatchRuleConfig');
class_alias(GoogleCloudContactcenterinsightsV1PhraseMatchRuleGroup::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1PhraseMatchRuleGroup');
class_alias(GoogleCloudContactcenterinsightsV1PhraseMatcher::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1PhraseMatcher');
class_alias(GoogleCloudContactcenterinsightsV1RuntimeAnnotation::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1RuntimeAnnotation');
class_alias(GoogleCloudContactcenterinsightsV1SentimentData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1SentimentData');
class_alias(GoogleCloudContactcenterinsightsV1Settings::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1Settings');
class_alias(GoogleCloudContactcenterinsightsV1SettingsAnalysisConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1SettingsAnalysisConfig');
class_alias(GoogleCloudContactcenterinsightsV1SilenceData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1SilenceData');
class_alias(GoogleCloudContactcenterinsightsV1SmartComposeSuggestionData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1SmartComposeSuggestionData');
class_alias(GoogleCloudContactcenterinsightsV1SmartReplyData::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1SmartReplyData');
class_alias(GoogleCloudContactcenterinsightsV1UndeployIssueModelMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1UndeployIssueModelMetadata');
class_alias(GoogleCloudContactcenterinsightsV1UndeployIssueModelRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1UndeployIssueModelRequest');
class_alias(GoogleCloudContactcenterinsightsV1UndeployIssueModelResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1UndeployIssueModelResponse');
class_alias(GoogleCloudContactcenterinsightsV1View::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1View');
class_alias(GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsMetadata');
class_alias(GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsRequest');
class_alias(GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1BulkAnalyzeConversationsResponse');
class_alias(GoogleCloudContactcenterinsightsV1alpha1CreateAnalysisOperationMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1CreateAnalysisOperationMetadata');
class_alias(GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelMetadata');
class_alias(GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1CreateIssueModelRequest');
class_alias(GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelMetadata');
class_alias(GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1DeleteIssueModelRequest');
class_alias(GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelMetadata');
class_alias(GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelRequest');
class_alias(GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1DeployIssueModelResponse');
class_alias(GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataMetadata');
class_alias(GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequest');
class_alias(GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequestBigQueryDestination::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataRequestBigQueryDestination');
class_alias(GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1ExportInsightsDataResponse');
class_alias(GoogleCloudContactcenterinsightsV1alpha1IngestConversationsMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1IngestConversationsMetadata');
class_alias(GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequest');
class_alias(GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestConversationConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestConversationConfig');
class_alias(GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestGcsSource::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestGcsSource');
class_alias(GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestTranscriptObjectConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1IngestConversationsRequestTranscriptObjectConfig');
class_alias(GoogleCloudContactcenterinsightsV1alpha1IngestConversationsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1IngestConversationsResponse');
class_alias(GoogleCloudContactcenterinsightsV1alpha1IssueModel::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1IssueModel');
class_alias(GoogleCloudContactcenterinsightsV1alpha1IssueModelInputDataConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1IssueModelInputDataConfig');
class_alias(GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStats::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStats');
class_alias(GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStatsIssueStats::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1IssueModelLabelStatsIssueStats');
class_alias(GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelMetadata');
class_alias(GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelRequest');
class_alias(GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1UndeployIssueModelResponse');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_Contactcenterinsights_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_Contactcenterinsights_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_Contactcenterinsights_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_Contactcenterinsights_GoogleRpcStatus');
