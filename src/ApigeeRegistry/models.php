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

namespace Google\Service\ApigeeRegistry;

class Api extends \Google\Model
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $availability;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $recommendedDeployment;
  /** @var string */
  public $recommendedVersion;
  /** @var string */
  public $updateTime;

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
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /** @return string */
  public function getAvailability()
  {
    return $this->availability;
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
  /** @param string */
  public function setRecommendedDeployment($recommendedDeployment)
  {
    $this->recommendedDeployment = $recommendedDeployment;
  }
  /** @return string */
  public function getRecommendedDeployment()
  {
    return $this->recommendedDeployment;
  }
  /** @param string */
  public function setRecommendedVersion($recommendedVersion)
  {
    $this->recommendedVersion = $recommendedVersion;
  }
  /** @return string */
  public function getRecommendedVersion()
  {
    return $this->recommendedVersion;
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

class ApiDeployment extends \Google\Model
{
  /** @var string */
  public $accessGuidance;
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $apiSpecRevision;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $endpointUri;
  /** @var string */
  public $externalChannelUri;
  /** @var string */
  public $intendedAudience;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $revisionCreateTime;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $revisionUpdateTime;

  /** @param string */
  public function setAccessGuidance($accessGuidance)
  {
    $this->accessGuidance = $accessGuidance;
  }
  /** @return string */
  public function getAccessGuidance()
  {
    return $this->accessGuidance;
  }
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
  public function setApiSpecRevision($apiSpecRevision)
  {
    $this->apiSpecRevision = $apiSpecRevision;
  }
  /** @return string */
  public function getApiSpecRevision()
  {
    return $this->apiSpecRevision;
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
  public function setEndpointUri($endpointUri)
  {
    $this->endpointUri = $endpointUri;
  }
  /** @return string */
  public function getEndpointUri()
  {
    return $this->endpointUri;
  }
  /** @param string */
  public function setExternalChannelUri($externalChannelUri)
  {
    $this->externalChannelUri = $externalChannelUri;
  }
  /** @return string */
  public function getExternalChannelUri()
  {
    return $this->externalChannelUri;
  }
  /** @param string */
  public function setIntendedAudience($intendedAudience)
  {
    $this->intendedAudience = $intendedAudience;
  }
  /** @return string */
  public function getIntendedAudience()
  {
    return $this->intendedAudience;
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
  public function setRevisionUpdateTime($revisionUpdateTime)
  {
    $this->revisionUpdateTime = $revisionUpdateTime;
  }
  /** @return string */
  public function getRevisionUpdateTime()
  {
    return $this->revisionUpdateTime;
  }
}

class ApiSpec extends \Google\Model
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $contents;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $filename;
  /** @var string */
  public $hash;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $name;
  /** @var string */
  public $revisionCreateTime;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $revisionUpdateTime;
  /** @var int */
  public $sizeBytes;
  /** @var string */
  public $sourceUri;

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
  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  /** @return string */
  public function getContents()
  {
    return $this->contents;
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
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  /** @return string */
  public function getFilename()
  {
    return $this->filename;
  }
  /** @param string */
  public function setHash($hash)
  {
    $this->hash = $hash;
  }
  /** @return string */
  public function getHash()
  {
    return $this->hash;
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
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
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
  public function setRevisionUpdateTime($revisionUpdateTime)
  {
    $this->revisionUpdateTime = $revisionUpdateTime;
  }
  /** @return string */
  public function getRevisionUpdateTime()
  {
    return $this->revisionUpdateTime;
  }
  /** @param int */
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /** @return int */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
  /** @param string */
  public function setSourceUri($sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
  /** @return string */
  public function getSourceUri()
  {
    return $this->sourceUri;
  }
}

class ApiVersion extends \Google\Model
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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

class ApigeeregistryEmpty extends \Google\Model
{
}

class Artifact extends \Google\Model
{
  /** @var string */
  public $contents;
  /** @var string */
  public $createTime;
  /** @var string */
  public $hash;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $name;
  /** @var int */
  public $sizeBytes;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  /** @return string */
  public function getContents()
  {
    return $this->contents;
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
  public function setHash($hash)
  {
    $this->hash = $hash;
  }
  /** @return string */
  public function getHash()
  {
    return $this->hash;
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
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /** @return int */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
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

class Binding extends \Google\Collection
{
  /** @var Expr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = Expr::class;
  protected $conditionDataType = '';
  /** @param Expr */
  public function setCondition(Expr $condition)
  {
    $this->condition = $condition;
  }
  /** @return Expr */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string[] */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /** @return string[] */
  public function getMembers()
  {
    return $this->members;
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
}

class CancelOperationRequest extends \Google\Model
{
}

class Config extends \Google\Model
{
  /** @var string */
  public $cmekKeyName;
  /** @var string */
  public $location;

  /** @param string */
  public function setCmekKeyName($cmekKeyName)
  {
    $this->cmekKeyName = $cmekKeyName;
  }
  /** @return string */
  public function getCmekKeyName()
  {
    return $this->cmekKeyName;
  }
  /** @param string */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
  }
}

class Expr extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $expression;
  /** @var string */
  public $location;
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
  public function setExpression($expression)
  {
    $this->expression = $expression;
  }
  /** @return string */
  public function getExpression()
  {
    return $this->expression;
  }
  /** @param string */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
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

class HttpBody extends \Google\Collection
{
  /** @var string */
  public $contentType;
  /** @var string */
  public $data;
  /** @var array[] */
  public $extensions;
  protected $collection_key = 'extensions';
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
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param array[] */
  public function setExtensions($extensions)
  {
    $this->extensions = $extensions;
  }
  /** @return array[] */
  public function getExtensions()
  {
    return $this->extensions;
  }
}

class Instance extends \Google\Model
{
  /** @var Config */
  public $config;
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $updateTime;
  protected $configType = Config::class;
  protected $configDataType = '';
  /** @param Config */
  public function setConfig(Config $config)
  {
    $this->config = $config;
  }
  /** @return Config */
  public function getConfig()
  {
    return $this->config;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param string */
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
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

class ListApiDeploymentRevisionsResponse extends \Google\Collection
{
  /** @var ApiDeployment[] */
  public $apiDeployments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apiDeployments';
  protected $apiDeploymentsType = ApiDeployment::class;
  protected $apiDeploymentsDataType = 'array';
  /** @param ApiDeployment[] */
  public function setApiDeployments($apiDeployments)
  {
    $this->apiDeployments = $apiDeployments;
  }
  /** @return ApiDeployment[] */
  public function getApiDeployments()
  {
    return $this->apiDeployments;
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

class ListApiDeploymentsResponse extends \Google\Collection
{
  /** @var ApiDeployment[] */
  public $apiDeployments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apiDeployments';
  protected $apiDeploymentsType = ApiDeployment::class;
  protected $apiDeploymentsDataType = 'array';
  /** @param ApiDeployment[] */
  public function setApiDeployments($apiDeployments)
  {
    $this->apiDeployments = $apiDeployments;
  }
  /** @return ApiDeployment[] */
  public function getApiDeployments()
  {
    return $this->apiDeployments;
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

class ListApiSpecRevisionsResponse extends \Google\Collection
{
  /** @var ApiSpec[] */
  public $apiSpecs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apiSpecs';
  protected $apiSpecsType = ApiSpec::class;
  protected $apiSpecsDataType = 'array';
  /** @param ApiSpec[] */
  public function setApiSpecs($apiSpecs)
  {
    $this->apiSpecs = $apiSpecs;
  }
  /** @return ApiSpec[] */
  public function getApiSpecs()
  {
    return $this->apiSpecs;
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

class ListApiSpecsResponse extends \Google\Collection
{
  /** @var ApiSpec[] */
  public $apiSpecs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apiSpecs';
  protected $apiSpecsType = ApiSpec::class;
  protected $apiSpecsDataType = 'array';
  /** @param ApiSpec[] */
  public function setApiSpecs($apiSpecs)
  {
    $this->apiSpecs = $apiSpecs;
  }
  /** @return ApiSpec[] */
  public function getApiSpecs()
  {
    return $this->apiSpecs;
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

class ListApiVersionsResponse extends \Google\Collection
{
  /** @var ApiVersion[] */
  public $apiVersions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apiVersions';
  protected $apiVersionsType = ApiVersion::class;
  protected $apiVersionsDataType = 'array';
  /** @param ApiVersion[] */
  public function setApiVersions($apiVersions)
  {
    $this->apiVersions = $apiVersions;
  }
  /** @return ApiVersion[] */
  public function getApiVersions()
  {
    return $this->apiVersions;
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

class ListApisResponse extends \Google\Collection
{
  /** @var Api[] */
  public $apis;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'apis';
  protected $apisType = Api::class;
  protected $apisDataType = 'array';
  /** @param Api[] */
  public function setApis($apis)
  {
    $this->apis = $apis;
  }
  /** @return Api[] */
  public function getApis()
  {
    return $this->apis;
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

class ListArtifactsResponse extends \Google\Collection
{
  /** @var Artifact[] */
  public $artifacts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'artifacts';
  protected $artifactsType = Artifact::class;
  protected $artifactsDataType = 'array';
  /** @param Artifact[] */
  public function setArtifacts($artifacts)
  {
    $this->artifacts = $artifacts;
  }
  /** @return Artifact[] */
  public function getArtifacts()
  {
    return $this->artifacts;
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

class ListLocationsResponse extends \Google\Collection
{
  /** @var Location[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = Location::class;
  protected $locationsDataType = 'array';
  /** @param Location[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return Location[] */
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

class Location extends \Google\Model
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

class OperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var bool */
  public $cancellationRequested;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
  }
  /** @param bool */
  public function setCancellationRequested($cancellationRequested)
  {
    $this->cancellationRequested = $cancellationRequested;
  }
  /** @return bool */
  public function getCancellationRequested()
  {
    return $this->cancellationRequested;
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
  /** @param string */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class Policy extends \Google\Collection
{
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  /** @param Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return Binding[] */
  public function getBindings()
  {
    return $this->bindings;
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
  /** @param int */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return int */
  public function getVersion()
  {
    return $this->version;
  }
}

class RollbackApiDeploymentRequest extends \Google\Model
{
  /** @var string */
  public $revisionId;

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
}

class RollbackApiSpecRequest extends \Google\Model
{
  /** @var string */
  public $revisionId;

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
}

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param Policy */
  public function setPolicy(Policy $policy)
  {
    $this->policy = $policy;
  }
  /** @return Policy */
  public function getPolicy()
  {
    return $this->policy;
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

class TagApiDeploymentRevisionRequest extends \Google\Model
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

class TagApiSpecRevisionRequest extends \Google\Model
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

class TestIamPermissionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
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
}

class TestIamPermissionsResponse extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Api::class, 'Google_Service_ApigeeRegistry_Api');
class_alias(ApiDeployment::class, 'Google_Service_ApigeeRegistry_ApiDeployment');
class_alias(ApiSpec::class, 'Google_Service_ApigeeRegistry_ApiSpec');
class_alias(ApiVersion::class, 'Google_Service_ApigeeRegistry_ApiVersion');
class_alias(ApigeeregistryEmpty::class, 'Google_Service_ApigeeRegistry_ApigeeregistryEmpty');
class_alias(Artifact::class, 'Google_Service_ApigeeRegistry_Artifact');
class_alias(Binding::class, 'Google_Service_ApigeeRegistry_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_ApigeeRegistry_CancelOperationRequest');
class_alias(Config::class, 'Google_Service_ApigeeRegistry_Config');
class_alias(Expr::class, 'Google_Service_ApigeeRegistry_Expr');
class_alias(HttpBody::class, 'Google_Service_ApigeeRegistry_HttpBody');
class_alias(Instance::class, 'Google_Service_ApigeeRegistry_Instance');
class_alias(ListApiDeploymentRevisionsResponse::class, 'Google_Service_ApigeeRegistry_ListApiDeploymentRevisionsResponse');
class_alias(ListApiDeploymentsResponse::class, 'Google_Service_ApigeeRegistry_ListApiDeploymentsResponse');
class_alias(ListApiSpecRevisionsResponse::class, 'Google_Service_ApigeeRegistry_ListApiSpecRevisionsResponse');
class_alias(ListApiSpecsResponse::class, 'Google_Service_ApigeeRegistry_ListApiSpecsResponse');
class_alias(ListApiVersionsResponse::class, 'Google_Service_ApigeeRegistry_ListApiVersionsResponse');
class_alias(ListApisResponse::class, 'Google_Service_ApigeeRegistry_ListApisResponse');
class_alias(ListArtifactsResponse::class, 'Google_Service_ApigeeRegistry_ListArtifactsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_ApigeeRegistry_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_ApigeeRegistry_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_ApigeeRegistry_Location');
class_alias(Operation::class, 'Google_Service_ApigeeRegistry_Operation');
class_alias(OperationMetadata::class, 'Google_Service_ApigeeRegistry_OperationMetadata');
class_alias(Policy::class, 'Google_Service_ApigeeRegistry_Policy');
class_alias(RollbackApiDeploymentRequest::class, 'Google_Service_ApigeeRegistry_RollbackApiDeploymentRequest');
class_alias(RollbackApiSpecRequest::class, 'Google_Service_ApigeeRegistry_RollbackApiSpecRequest');
class_alias(SetIamPolicyRequest::class, 'Google_Service_ApigeeRegistry_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_ApigeeRegistry_Status');
class_alias(TagApiDeploymentRevisionRequest::class, 'Google_Service_ApigeeRegistry_TagApiDeploymentRevisionRequest');
class_alias(TagApiSpecRevisionRequest::class, 'Google_Service_ApigeeRegistry_TagApiSpecRevisionRequest');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_ApigeeRegistry_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_ApigeeRegistry_TestIamPermissionsResponse');
