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

namespace Google\Service\CloudScheduler;

class AppEngineHttpTarget extends \Google\Model
{
  /** @var AppEngineRouting */
  public $appEngineRouting;
  /** @var string */
  public $body;
  /** @var string[] */
  public $headers;
  /** @var string */
  public $httpMethod;
  /** @var string */
  public $relativeUri;
  protected $appEngineRoutingType = AppEngineRouting::class;
  protected $appEngineRoutingDataType = '';
  /** @param AppEngineRouting */
  public function setAppEngineRouting(AppEngineRouting $appEngineRouting)
  {
    $this->appEngineRouting = $appEngineRouting;
  }
  /** @return AppEngineRouting */
  public function getAppEngineRouting()
  {
    return $this->appEngineRouting;
  }
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
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
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
  public function setRelativeUri($relativeUri)
  {
    $this->relativeUri = $relativeUri;
  }
  /** @return string */
  public function getRelativeUri()
  {
    return $this->relativeUri;
  }
}

class AppEngineRouting extends \Google\Model
{
  /** @var string */
  public $host;
  /** @var string */
  public $instance;
  /** @var string */
  public $service;
  /** @var string */
  public $version;

  /** @param string */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /** @return string */
  public function getHost()
  {
    return $this->host;
  }
  /** @param string */
  public function setInstance($instance)
  {
    $this->instance = $instance;
  }
  /** @return string */
  public function getInstance()
  {
    return $this->instance;
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

class CloudschedulerEmpty extends \Google\Model
{
}

class HttpTarget extends \Google\Model
{
  /** @var string */
  public $body;
  /** @var string[] */
  public $headers;
  /** @var string */
  public $httpMethod;
  /** @var OAuthToken */
  public $oauthToken;
  /** @var OidcToken */
  public $oidcToken;
  /** @var string */
  public $uri;
  protected $oauthTokenType = OAuthToken::class;
  protected $oauthTokenDataType = '';
  protected $oidcTokenType = OidcToken::class;
  protected $oidcTokenDataType = '';
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
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
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
  /** @param OAuthToken */
  public function setOauthToken(OAuthToken $oauthToken)
  {
    $this->oauthToken = $oauthToken;
  }
  /** @return OAuthToken */
  public function getOauthToken()
  {
    return $this->oauthToken;
  }
  /** @param OidcToken */
  public function setOidcToken(OidcToken $oidcToken)
  {
    $this->oidcToken = $oidcToken;
  }
  /** @return OidcToken */
  public function getOidcToken()
  {
    return $this->oidcToken;
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

class Job extends \Google\Model
{
  /** @var AppEngineHttpTarget */
  public $appEngineHttpTarget;
  /** @var string */
  public $attemptDeadline;
  /** @var string */
  public $description;
  /** @var HttpTarget */
  public $httpTarget;
  /** @var string */
  public $lastAttemptTime;
  /** @var string */
  public $name;
  /** @var PubsubTarget */
  public $pubsubTarget;
  /** @var RetryConfig */
  public $retryConfig;
  /** @var string */
  public $schedule;
  /** @var string */
  public $scheduleTime;
  /** @var string */
  public $state;
  /** @var Status */
  public $status;
  /** @var string */
  public $timeZone;
  /** @var string */
  public $userUpdateTime;
  protected $appEngineHttpTargetType = AppEngineHttpTarget::class;
  protected $appEngineHttpTargetDataType = '';
  protected $httpTargetType = HttpTarget::class;
  protected $httpTargetDataType = '';
  protected $pubsubTargetType = PubsubTarget::class;
  protected $pubsubTargetDataType = '';
  protected $retryConfigType = RetryConfig::class;
  protected $retryConfigDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param AppEngineHttpTarget */
  public function setAppEngineHttpTarget(AppEngineHttpTarget $appEngineHttpTarget)
  {
    $this->appEngineHttpTarget = $appEngineHttpTarget;
  }
  /** @return AppEngineHttpTarget */
  public function getAppEngineHttpTarget()
  {
    return $this->appEngineHttpTarget;
  }
  /** @param string */
  public function setAttemptDeadline($attemptDeadline)
  {
    $this->attemptDeadline = $attemptDeadline;
  }
  /** @return string */
  public function getAttemptDeadline()
  {
    return $this->attemptDeadline;
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
  /** @param HttpTarget */
  public function setHttpTarget(HttpTarget $httpTarget)
  {
    $this->httpTarget = $httpTarget;
  }
  /** @return HttpTarget */
  public function getHttpTarget()
  {
    return $this->httpTarget;
  }
  /** @param string */
  public function setLastAttemptTime($lastAttemptTime)
  {
    $this->lastAttemptTime = $lastAttemptTime;
  }
  /** @return string */
  public function getLastAttemptTime()
  {
    return $this->lastAttemptTime;
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
  /** @param PubsubTarget */
  public function setPubsubTarget(PubsubTarget $pubsubTarget)
  {
    $this->pubsubTarget = $pubsubTarget;
  }
  /** @return PubsubTarget */
  public function getPubsubTarget()
  {
    return $this->pubsubTarget;
  }
  /** @param RetryConfig */
  public function setRetryConfig(RetryConfig $retryConfig)
  {
    $this->retryConfig = $retryConfig;
  }
  /** @return RetryConfig */
  public function getRetryConfig()
  {
    return $this->retryConfig;
  }
  /** @param string */
  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return string */
  public function getSchedule()
  {
    return $this->schedule;
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
  /** @param Status */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /** @return Status */
  public function getStatus()
  {
    return $this->status;
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
  /** @param string */
  public function setUserUpdateTime($userUpdateTime)
  {
    $this->userUpdateTime = $userUpdateTime;
  }
  /** @return string */
  public function getUserUpdateTime()
  {
    return $this->userUpdateTime;
  }
}

class ListJobsResponse extends \Google\Collection
{
  /** @var Job[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
  protected $jobsType = Job::class;
  protected $jobsDataType = 'array';
  /** @param Job[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return Job[] */
  public function getJobs()
  {
    return $this->jobs;
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

class OAuthToken extends \Google\Model
{
  /** @var string */
  public $scope;
  /** @var string */
  public $serviceAccountEmail;

  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param string */
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  /** @return string */
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
  }
}

class OidcToken extends \Google\Model
{
  /** @var string */
  public $audience;
  /** @var string */
  public $serviceAccountEmail;

  /** @param string */
  public function setAudience($audience)
  {
    $this->audience = $audience;
  }
  /** @return string */
  public function getAudience()
  {
    return $this->audience;
  }
  /** @param string */
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  /** @return string */
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
  }
}

class PauseJobRequest extends \Google\Model
{
}

class PubsubMessage extends \Google\Model
{
  /** @var string[] */
  public $attributes;
  /** @var string */
  public $data;
  /** @var string */
  public $messageId;
  /** @var string */
  public $orderingKey;
  /** @var string */
  public $publishTime;

  /** @param string[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return string[] */
  public function getAttributes()
  {
    return $this->attributes;
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
  /** @param string */
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  /** @return string */
  public function getMessageId()
  {
    return $this->messageId;
  }
  /** @param string */
  public function setOrderingKey($orderingKey)
  {
    $this->orderingKey = $orderingKey;
  }
  /** @return string */
  public function getOrderingKey()
  {
    return $this->orderingKey;
  }
  /** @param string */
  public function setPublishTime($publishTime)
  {
    $this->publishTime = $publishTime;
  }
  /** @return string */
  public function getPublishTime()
  {
    return $this->publishTime;
  }
}

class PubsubTarget extends \Google\Model
{
  /** @var string[] */
  public $attributes;
  /** @var string */
  public $data;
  /** @var string */
  public $topicName;

  /** @param string[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return string[] */
  public function getAttributes()
  {
    return $this->attributes;
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
  /** @param string */
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  /** @return string */
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class ResumeJobRequest extends \Google\Model
{
}

class RetryConfig extends \Google\Model
{
  /** @var string */
  public $maxBackoffDuration;
  /** @var int */
  public $maxDoublings;
  /** @var string */
  public $maxRetryDuration;
  /** @var string */
  public $minBackoffDuration;
  /** @var int */
  public $retryCount;

  /** @param string */
  public function setMaxBackoffDuration($maxBackoffDuration)
  {
    $this->maxBackoffDuration = $maxBackoffDuration;
  }
  /** @return string */
  public function getMaxBackoffDuration()
  {
    return $this->maxBackoffDuration;
  }
  /** @param int */
  public function setMaxDoublings($maxDoublings)
  {
    $this->maxDoublings = $maxDoublings;
  }
  /** @return int */
  public function getMaxDoublings()
  {
    return $this->maxDoublings;
  }
  /** @param string */
  public function setMaxRetryDuration($maxRetryDuration)
  {
    $this->maxRetryDuration = $maxRetryDuration;
  }
  /** @return string */
  public function getMaxRetryDuration()
  {
    return $this->maxRetryDuration;
  }
  /** @param string */
  public function setMinBackoffDuration($minBackoffDuration)
  {
    $this->minBackoffDuration = $minBackoffDuration;
  }
  /** @return string */
  public function getMinBackoffDuration()
  {
    return $this->minBackoffDuration;
  }
  /** @param int */
  public function setRetryCount($retryCount)
  {
    $this->retryCount = $retryCount;
  }
  /** @return int */
  public function getRetryCount()
  {
    return $this->retryCount;
  }
}

class RunJobRequest extends \Google\Model
{
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppEngineHttpTarget::class, 'Google_Service_CloudScheduler_AppEngineHttpTarget');
class_alias(AppEngineRouting::class, 'Google_Service_CloudScheduler_AppEngineRouting');
class_alias(CloudschedulerEmpty::class, 'Google_Service_CloudScheduler_CloudschedulerEmpty');
class_alias(HttpTarget::class, 'Google_Service_CloudScheduler_HttpTarget');
class_alias(Job::class, 'Google_Service_CloudScheduler_Job');
class_alias(ListJobsResponse::class, 'Google_Service_CloudScheduler_ListJobsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudScheduler_ListLocationsResponse');
class_alias(Location::class, 'Google_Service_CloudScheduler_Location');
class_alias(OAuthToken::class, 'Google_Service_CloudScheduler_OAuthToken');
class_alias(OidcToken::class, 'Google_Service_CloudScheduler_OidcToken');
class_alias(PauseJobRequest::class, 'Google_Service_CloudScheduler_PauseJobRequest');
class_alias(PubsubMessage::class, 'Google_Service_CloudScheduler_PubsubMessage');
class_alias(PubsubTarget::class, 'Google_Service_CloudScheduler_PubsubTarget');
class_alias(ResumeJobRequest::class, 'Google_Service_CloudScheduler_ResumeJobRequest');
class_alias(RetryConfig::class, 'Google_Service_CloudScheduler_RetryConfig');
class_alias(RunJobRequest::class, 'Google_Service_CloudScheduler_RunJobRequest');
class_alias(Status::class, 'Google_Service_CloudScheduler_Status');
