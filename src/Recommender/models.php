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

namespace Google\Service\Recommender;

class GoogleCloudRecommenderV1CostProjection extends \Google\Model
{
  /** @var GoogleTypeMoney */
  public $cost;
  /** @var string */
  public $duration;
  protected $costType = GoogleTypeMoney::class;
  protected $costDataType = '';
  /** @param GoogleTypeMoney */
  public function setCost(GoogleTypeMoney $cost)
  {
    $this->cost = $cost;
  }
  /** @return GoogleTypeMoney */
  public function getCost()
  {
    return $this->cost;
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
}

class GoogleCloudRecommenderV1Impact extends \Google\Model
{
  /** @var string */
  public $category;
  /** @var GoogleCloudRecommenderV1CostProjection */
  public $costProjection;
  /** @var GoogleCloudRecommenderV1ReliabilityProjection */
  public $reliabilityProjection;
  /** @var GoogleCloudRecommenderV1SecurityProjection */
  public $securityProjection;
  /** @var GoogleCloudRecommenderV1SustainabilityProjection */
  public $sustainabilityProjection;
  protected $costProjectionType = GoogleCloudRecommenderV1CostProjection::class;
  protected $costProjectionDataType = '';
  protected $reliabilityProjectionType = GoogleCloudRecommenderV1ReliabilityProjection::class;
  protected $reliabilityProjectionDataType = '';
  protected $securityProjectionType = GoogleCloudRecommenderV1SecurityProjection::class;
  protected $securityProjectionDataType = '';
  protected $sustainabilityProjectionType = GoogleCloudRecommenderV1SustainabilityProjection::class;
  protected $sustainabilityProjectionDataType = '';
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
  /** @param GoogleCloudRecommenderV1CostProjection */
  public function setCostProjection(GoogleCloudRecommenderV1CostProjection $costProjection)
  {
    $this->costProjection = $costProjection;
  }
  /** @return GoogleCloudRecommenderV1CostProjection */
  public function getCostProjection()
  {
    return $this->costProjection;
  }
  /** @param GoogleCloudRecommenderV1ReliabilityProjection */
  public function setReliabilityProjection(GoogleCloudRecommenderV1ReliabilityProjection $reliabilityProjection)
  {
    $this->reliabilityProjection = $reliabilityProjection;
  }
  /** @return GoogleCloudRecommenderV1ReliabilityProjection */
  public function getReliabilityProjection()
  {
    return $this->reliabilityProjection;
  }
  /** @param GoogleCloudRecommenderV1SecurityProjection */
  public function setSecurityProjection(GoogleCloudRecommenderV1SecurityProjection $securityProjection)
  {
    $this->securityProjection = $securityProjection;
  }
  /** @return GoogleCloudRecommenderV1SecurityProjection */
  public function getSecurityProjection()
  {
    return $this->securityProjection;
  }
  /** @param GoogleCloudRecommenderV1SustainabilityProjection */
  public function setSustainabilityProjection(GoogleCloudRecommenderV1SustainabilityProjection $sustainabilityProjection)
  {
    $this->sustainabilityProjection = $sustainabilityProjection;
  }
  /** @return GoogleCloudRecommenderV1SustainabilityProjection */
  public function getSustainabilityProjection()
  {
    return $this->sustainabilityProjection;
  }
}

class GoogleCloudRecommenderV1Insight extends \Google\Collection
{
  /** @var GoogleCloudRecommenderV1InsightRecommendationReference[] */
  public $associatedRecommendations;
  /** @var string */
  public $category;
  /** @var array[] */
  public $content;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $insightSubtype;
  /** @var string */
  public $lastRefreshTime;
  /** @var string */
  public $name;
  /** @var string */
  public $observationPeriod;
  /** @var string */
  public $severity;
  /** @var GoogleCloudRecommenderV1InsightStateInfo */
  public $stateInfo;
  /** @var string[] */
  public $targetResources;
  protected $collection_key = 'targetResources';
  protected $associatedRecommendationsType = GoogleCloudRecommenderV1InsightRecommendationReference::class;
  protected $associatedRecommendationsDataType = 'array';
  protected $stateInfoType = GoogleCloudRecommenderV1InsightStateInfo::class;
  protected $stateInfoDataType = '';
  /** @param GoogleCloudRecommenderV1InsightRecommendationReference[] */
  public function setAssociatedRecommendations($associatedRecommendations)
  {
    $this->associatedRecommendations = $associatedRecommendations;
  }
  /** @return GoogleCloudRecommenderV1InsightRecommendationReference[] */
  public function getAssociatedRecommendations()
  {
    return $this->associatedRecommendations;
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
  /** @param array[] */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return array[] */
  public function getContent()
  {
    return $this->content;
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string */
  public function setInsightSubtype($insightSubtype)
  {
    $this->insightSubtype = $insightSubtype;
  }
  /** @return string */
  public function getInsightSubtype()
  {
    return $this->insightSubtype;
  }
  /** @param string */
  public function setLastRefreshTime($lastRefreshTime)
  {
    $this->lastRefreshTime = $lastRefreshTime;
  }
  /** @return string */
  public function getLastRefreshTime()
  {
    return $this->lastRefreshTime;
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
  public function setObservationPeriod($observationPeriod)
  {
    $this->observationPeriod = $observationPeriod;
  }
  /** @return string */
  public function getObservationPeriod()
  {
    return $this->observationPeriod;
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
  /** @param GoogleCloudRecommenderV1InsightStateInfo */
  public function setStateInfo(GoogleCloudRecommenderV1InsightStateInfo $stateInfo)
  {
    $this->stateInfo = $stateInfo;
  }
  /** @return GoogleCloudRecommenderV1InsightStateInfo */
  public function getStateInfo()
  {
    return $this->stateInfo;
  }
  /** @param string[] */
  public function setTargetResources($targetResources)
  {
    $this->targetResources = $targetResources;
  }
  /** @return string[] */
  public function getTargetResources()
  {
    return $this->targetResources;
  }
}

class GoogleCloudRecommenderV1InsightRecommendationReference extends \Google\Model
{
  /** @var string */
  public $recommendation;

  /** @param string */
  public function setRecommendation($recommendation)
  {
    $this->recommendation = $recommendation;
  }
  /** @return string */
  public function getRecommendation()
  {
    return $this->recommendation;
  }
}

class GoogleCloudRecommenderV1InsightStateInfo extends \Google\Model
{
  /** @var string */
  public $state;
  /** @var string[] */
  public $stateMetadata;

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
  public function setStateMetadata($stateMetadata)
  {
    $this->stateMetadata = $stateMetadata;
  }
  /** @return string[] */
  public function getStateMetadata()
  {
    return $this->stateMetadata;
  }
}

class GoogleCloudRecommenderV1InsightTypeConfig extends \Google\Model
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var GoogleCloudRecommenderV1InsightTypeGenerationConfig */
  public $insightTypeGenerationConfig;
  /** @var string */
  public $name;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $updateTime;
  protected $insightTypeGenerationConfigType = GoogleCloudRecommenderV1InsightTypeGenerationConfig::class;
  protected $insightTypeGenerationConfigDataType = '';
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param GoogleCloudRecommenderV1InsightTypeGenerationConfig */
  public function setInsightTypeGenerationConfig(GoogleCloudRecommenderV1InsightTypeGenerationConfig $insightTypeGenerationConfig)
  {
    $this->insightTypeGenerationConfig = $insightTypeGenerationConfig;
  }
  /** @return GoogleCloudRecommenderV1InsightTypeGenerationConfig */
  public function getInsightTypeGenerationConfig()
  {
    return $this->insightTypeGenerationConfig;
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

class GoogleCloudRecommenderV1InsightTypeGenerationConfig extends \Google\Model
{
  /** @var array[] */
  public $params;

  /** @param array[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return array[] */
  public function getParams()
  {
    return $this->params;
  }
}

class GoogleCloudRecommenderV1ListInsightsResponse extends \Google\Collection
{
  /** @var GoogleCloudRecommenderV1Insight[] */
  public $insights;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'insights';
  protected $insightsType = GoogleCloudRecommenderV1Insight::class;
  protected $insightsDataType = 'array';
  /** @param GoogleCloudRecommenderV1Insight[] */
  public function setInsights($insights)
  {
    $this->insights = $insights;
  }
  /** @return GoogleCloudRecommenderV1Insight[] */
  public function getInsights()
  {
    return $this->insights;
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

class GoogleCloudRecommenderV1ListRecommendationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudRecommenderV1Recommendation[] */
  public $recommendations;
  protected $collection_key = 'recommendations';
  protected $recommendationsType = GoogleCloudRecommenderV1Recommendation::class;
  protected $recommendationsDataType = 'array';
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
  /** @param GoogleCloudRecommenderV1Recommendation[] */
  public function setRecommendations($recommendations)
  {
    $this->recommendations = $recommendations;
  }
  /** @return GoogleCloudRecommenderV1Recommendation[] */
  public function getRecommendations()
  {
    return $this->recommendations;
  }
}

class GoogleCloudRecommenderV1MarkInsightAcceptedRequest extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string[] */
  public $stateMetadata;

  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string[] */
  public function setStateMetadata($stateMetadata)
  {
    $this->stateMetadata = $stateMetadata;
  }
  /** @return string[] */
  public function getStateMetadata()
  {
    return $this->stateMetadata;
  }
}

class GoogleCloudRecommenderV1MarkRecommendationClaimedRequest extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string[] */
  public $stateMetadata;

  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string[] */
  public function setStateMetadata($stateMetadata)
  {
    $this->stateMetadata = $stateMetadata;
  }
  /** @return string[] */
  public function getStateMetadata()
  {
    return $this->stateMetadata;
  }
}

class GoogleCloudRecommenderV1MarkRecommendationFailedRequest extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string[] */
  public $stateMetadata;

  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string[] */
  public function setStateMetadata($stateMetadata)
  {
    $this->stateMetadata = $stateMetadata;
  }
  /** @return string[] */
  public function getStateMetadata()
  {
    return $this->stateMetadata;
  }
}

class GoogleCloudRecommenderV1MarkRecommendationSucceededRequest extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string[] */
  public $stateMetadata;

  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string[] */
  public function setStateMetadata($stateMetadata)
  {
    $this->stateMetadata = $stateMetadata;
  }
  /** @return string[] */
  public function getStateMetadata()
  {
    return $this->stateMetadata;
  }
}

class GoogleCloudRecommenderV1Operation extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $path;
  /** @var array[] */
  public $pathFilters;
  /** @var GoogleCloudRecommenderV1ValueMatcher[] */
  public $pathValueMatchers;
  /** @var string */
  public $resource;
  /** @var string */
  public $resourceType;
  /** @var string */
  public $sourcePath;
  /** @var string */
  public $sourceResource;
  /** @var array */
  public $value;
  /** @var GoogleCloudRecommenderV1ValueMatcher */
  public $valueMatcher;
  protected $pathValueMatchersType = GoogleCloudRecommenderV1ValueMatcher::class;
  protected $pathValueMatchersDataType = 'map';
  protected $valueMatcherType = GoogleCloudRecommenderV1ValueMatcher::class;
  protected $valueMatcherDataType = '';
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
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param array[] */
  public function setPathFilters($pathFilters)
  {
    $this->pathFilters = $pathFilters;
  }
  /** @return array[] */
  public function getPathFilters()
  {
    return $this->pathFilters;
  }
  /** @param GoogleCloudRecommenderV1ValueMatcher[] */
  public function setPathValueMatchers($pathValueMatchers)
  {
    $this->pathValueMatchers = $pathValueMatchers;
  }
  /** @return GoogleCloudRecommenderV1ValueMatcher[] */
  public function getPathValueMatchers()
  {
    return $this->pathValueMatchers;
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
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /** @param string */
  public function setSourcePath($sourcePath)
  {
    $this->sourcePath = $sourcePath;
  }
  /** @return string */
  public function getSourcePath()
  {
    return $this->sourcePath;
  }
  /** @param string */
  public function setSourceResource($sourceResource)
  {
    $this->sourceResource = $sourceResource;
  }
  /** @return string */
  public function getSourceResource()
  {
    return $this->sourceResource;
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
  /** @param GoogleCloudRecommenderV1ValueMatcher */
  public function setValueMatcher(GoogleCloudRecommenderV1ValueMatcher $valueMatcher)
  {
    $this->valueMatcher = $valueMatcher;
  }
  /** @return GoogleCloudRecommenderV1ValueMatcher */
  public function getValueMatcher()
  {
    return $this->valueMatcher;
  }
}

class GoogleCloudRecommenderV1OperationGroup extends \Google\Collection
{
  /** @var GoogleCloudRecommenderV1Operation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = GoogleCloudRecommenderV1Operation::class;
  protected $operationsDataType = 'array';
  /** @param GoogleCloudRecommenderV1Operation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleCloudRecommenderV1Operation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class GoogleCloudRecommenderV1Recommendation extends \Google\Collection
{
  /** @var GoogleCloudRecommenderV1Impact[] */
  public $additionalImpact;
  /** @var GoogleCloudRecommenderV1RecommendationInsightReference[] */
  public $associatedInsights;
  /** @var GoogleCloudRecommenderV1RecommendationContent */
  public $content;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $lastRefreshTime;
  /** @var string */
  public $name;
  /** @var GoogleCloudRecommenderV1Impact */
  public $primaryImpact;
  /** @var string */
  public $priority;
  /** @var string */
  public $recommenderSubtype;
  /** @var GoogleCloudRecommenderV1RecommendationStateInfo */
  public $stateInfo;
  /** @var string */
  public $xorGroupId;
  protected $collection_key = 'associatedInsights';
  protected $additionalImpactType = GoogleCloudRecommenderV1Impact::class;
  protected $additionalImpactDataType = 'array';
  protected $associatedInsightsType = GoogleCloudRecommenderV1RecommendationInsightReference::class;
  protected $associatedInsightsDataType = 'array';
  protected $contentType = GoogleCloudRecommenderV1RecommendationContent::class;
  protected $contentDataType = '';
  protected $primaryImpactType = GoogleCloudRecommenderV1Impact::class;
  protected $primaryImpactDataType = '';
  protected $stateInfoType = GoogleCloudRecommenderV1RecommendationStateInfo::class;
  protected $stateInfoDataType = '';
  /** @param GoogleCloudRecommenderV1Impact[] */
  public function setAdditionalImpact($additionalImpact)
  {
    $this->additionalImpact = $additionalImpact;
  }
  /** @return GoogleCloudRecommenderV1Impact[] */
  public function getAdditionalImpact()
  {
    return $this->additionalImpact;
  }
  /** @param GoogleCloudRecommenderV1RecommendationInsightReference[] */
  public function setAssociatedInsights($associatedInsights)
  {
    $this->associatedInsights = $associatedInsights;
  }
  /** @return GoogleCloudRecommenderV1RecommendationInsightReference[] */
  public function getAssociatedInsights()
  {
    return $this->associatedInsights;
  }
  /** @param GoogleCloudRecommenderV1RecommendationContent */
  public function setContent(GoogleCloudRecommenderV1RecommendationContent $content)
  {
    $this->content = $content;
  }
  /** @return GoogleCloudRecommenderV1RecommendationContent */
  public function getContent()
  {
    return $this->content;
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string */
  public function setLastRefreshTime($lastRefreshTime)
  {
    $this->lastRefreshTime = $lastRefreshTime;
  }
  /** @return string */
  public function getLastRefreshTime()
  {
    return $this->lastRefreshTime;
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
  /** @param GoogleCloudRecommenderV1Impact */
  public function setPrimaryImpact(GoogleCloudRecommenderV1Impact $primaryImpact)
  {
    $this->primaryImpact = $primaryImpact;
  }
  /** @return GoogleCloudRecommenderV1Impact */
  public function getPrimaryImpact()
  {
    return $this->primaryImpact;
  }
  /** @param string */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return string */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string */
  public function setRecommenderSubtype($recommenderSubtype)
  {
    $this->recommenderSubtype = $recommenderSubtype;
  }
  /** @return string */
  public function getRecommenderSubtype()
  {
    return $this->recommenderSubtype;
  }
  /** @param GoogleCloudRecommenderV1RecommendationStateInfo */
  public function setStateInfo(GoogleCloudRecommenderV1RecommendationStateInfo $stateInfo)
  {
    $this->stateInfo = $stateInfo;
  }
  /** @return GoogleCloudRecommenderV1RecommendationStateInfo */
  public function getStateInfo()
  {
    return $this->stateInfo;
  }
  /** @param string */
  public function setXorGroupId($xorGroupId)
  {
    $this->xorGroupId = $xorGroupId;
  }
  /** @return string */
  public function getXorGroupId()
  {
    return $this->xorGroupId;
  }
}

class GoogleCloudRecommenderV1RecommendationContent extends \Google\Collection
{
  /** @var GoogleCloudRecommenderV1OperationGroup[] */
  public $operationGroups;
  /** @var array[] */
  public $overview;
  protected $collection_key = 'operationGroups';
  protected $operationGroupsType = GoogleCloudRecommenderV1OperationGroup::class;
  protected $operationGroupsDataType = 'array';
  /** @param GoogleCloudRecommenderV1OperationGroup[] */
  public function setOperationGroups($operationGroups)
  {
    $this->operationGroups = $operationGroups;
  }
  /** @return GoogleCloudRecommenderV1OperationGroup[] */
  public function getOperationGroups()
  {
    return $this->operationGroups;
  }
  /** @param array[] */
  public function setOverview($overview)
  {
    $this->overview = $overview;
  }
  /** @return array[] */
  public function getOverview()
  {
    return $this->overview;
  }
}

class GoogleCloudRecommenderV1RecommendationInsightReference extends \Google\Model
{
  /** @var string */
  public $insight;

  /** @param string */
  public function setInsight($insight)
  {
    $this->insight = $insight;
  }
  /** @return string */
  public function getInsight()
  {
    return $this->insight;
  }
}

class GoogleCloudRecommenderV1RecommendationStateInfo extends \Google\Model
{
  /** @var string */
  public $state;
  /** @var string[] */
  public $stateMetadata;

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
  public function setStateMetadata($stateMetadata)
  {
    $this->stateMetadata = $stateMetadata;
  }
  /** @return string[] */
  public function getStateMetadata()
  {
    return $this->stateMetadata;
  }
}

class GoogleCloudRecommenderV1RecommenderConfig extends \Google\Model
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var GoogleCloudRecommenderV1RecommenderGenerationConfig */
  public $recommenderGenerationConfig;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $updateTime;
  protected $recommenderGenerationConfigType = GoogleCloudRecommenderV1RecommenderGenerationConfig::class;
  protected $recommenderGenerationConfigDataType = '';
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
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
  /** @param GoogleCloudRecommenderV1RecommenderGenerationConfig */
  public function setRecommenderGenerationConfig(GoogleCloudRecommenderV1RecommenderGenerationConfig $recommenderGenerationConfig)
  {
    $this->recommenderGenerationConfig = $recommenderGenerationConfig;
  }
  /** @return GoogleCloudRecommenderV1RecommenderGenerationConfig */
  public function getRecommenderGenerationConfig()
  {
    return $this->recommenderGenerationConfig;
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

class GoogleCloudRecommenderV1RecommenderGenerationConfig extends \Google\Model
{
  /** @var array[] */
  public $params;

  /** @param array[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return array[] */
  public function getParams()
  {
    return $this->params;
  }
}

class GoogleCloudRecommenderV1ReliabilityProjection extends \Google\Collection
{
  /** @var array[] */
  public $details;
  /** @var string[] */
  public $risks;
  protected $collection_key = 'risks';
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
  /** @param string[] */
  public function setRisks($risks)
  {
    $this->risks = $risks;
  }
  /** @return string[] */
  public function getRisks()
  {
    return $this->risks;
  }
}

class GoogleCloudRecommenderV1SecurityProjection extends \Google\Model
{
  /** @var array[] */
  public $details;

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
}

class GoogleCloudRecommenderV1SustainabilityProjection extends \Google\Model
{
  /** @var string */
  public $duration;
  public $kgCO2e;

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
  public function setKgCO2e($kgCO2e)
  {
    $this->kgCO2e = $kgCO2e;
  }
  public function getKgCO2e()
  {
    return $this->kgCO2e;
  }
}

class GoogleCloudRecommenderV1ValueMatcher extends \Google\Model
{
  /** @var string */
  public $matchesPattern;

  /** @param string */
  public function setMatchesPattern($matchesPattern)
  {
    $this->matchesPattern = $matchesPattern;
  }
  /** @return string */
  public function getMatchesPattern()
  {
    return $this->matchesPattern;
  }
}

class GoogleTypeMoney extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecommenderV1CostProjection::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1CostProjection');
class_alias(GoogleCloudRecommenderV1Impact::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1Impact');
class_alias(GoogleCloudRecommenderV1Insight::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1Insight');
class_alias(GoogleCloudRecommenderV1InsightRecommendationReference::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1InsightRecommendationReference');
class_alias(GoogleCloudRecommenderV1InsightStateInfo::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1InsightStateInfo');
class_alias(GoogleCloudRecommenderV1InsightTypeConfig::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1InsightTypeConfig');
class_alias(GoogleCloudRecommenderV1InsightTypeGenerationConfig::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1InsightTypeGenerationConfig');
class_alias(GoogleCloudRecommenderV1ListInsightsResponse::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1ListInsightsResponse');
class_alias(GoogleCloudRecommenderV1ListRecommendationsResponse::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1ListRecommendationsResponse');
class_alias(GoogleCloudRecommenderV1MarkInsightAcceptedRequest::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1MarkInsightAcceptedRequest');
class_alias(GoogleCloudRecommenderV1MarkRecommendationClaimedRequest::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1MarkRecommendationClaimedRequest');
class_alias(GoogleCloudRecommenderV1MarkRecommendationFailedRequest::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1MarkRecommendationFailedRequest');
class_alias(GoogleCloudRecommenderV1MarkRecommendationSucceededRequest::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1MarkRecommendationSucceededRequest');
class_alias(GoogleCloudRecommenderV1Operation::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1Operation');
class_alias(GoogleCloudRecommenderV1OperationGroup::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1OperationGroup');
class_alias(GoogleCloudRecommenderV1Recommendation::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1Recommendation');
class_alias(GoogleCloudRecommenderV1RecommendationContent::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1RecommendationContent');
class_alias(GoogleCloudRecommenderV1RecommendationInsightReference::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1RecommendationInsightReference');
class_alias(GoogleCloudRecommenderV1RecommendationStateInfo::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1RecommendationStateInfo');
class_alias(GoogleCloudRecommenderV1RecommenderConfig::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1RecommenderConfig');
class_alias(GoogleCloudRecommenderV1RecommenderGenerationConfig::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1RecommenderGenerationConfig');
class_alias(GoogleCloudRecommenderV1ReliabilityProjection::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1ReliabilityProjection');
class_alias(GoogleCloudRecommenderV1SecurityProjection::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1SecurityProjection');
class_alias(GoogleCloudRecommenderV1SustainabilityProjection::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1SustainabilityProjection');
class_alias(GoogleCloudRecommenderV1ValueMatcher::class, 'Google_Service_Recommender_GoogleCloudRecommenderV1ValueMatcher');
class_alias(GoogleTypeMoney::class, 'Google_Service_Recommender_GoogleTypeMoney');
