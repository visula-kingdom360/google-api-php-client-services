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

namespace Google\Service\CloudTasks;

class AppEngineHttpRequest extends \Google\Model
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

class Attempt extends \Google\Model
{
  /** @var string */
  public $dispatchTime;
  /** @var Status */
  public $responseStatus;
  /** @var string */
  public $responseTime;
  /** @var string */
  public $scheduleTime;
  protected $responseStatusType = Status::class;
  protected $responseStatusDataType = '';
  /** @param string */
  public function setDispatchTime($dispatchTime)
  {
    $this->dispatchTime = $dispatchTime;
  }
  /** @return string */
  public function getDispatchTime()
  {
    return $this->dispatchTime;
  }
  /** @param Status */
  public function setResponseStatus(Status $responseStatus)
  {
    $this->responseStatus = $responseStatus;
  }
  /** @return Status */
  public function getResponseStatus()
  {
    return $this->responseStatus;
  }
  /** @param string */
  public function setResponseTime($responseTime)
  {
    $this->responseTime = $responseTime;
  }
  /** @return string */
  public function getResponseTime()
  {
    return $this->responseTime;
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

class CloudtasksEmpty extends \Google\Model
{
}

class CreateTaskRequest extends \Google\Model
{
  /** @var string */
  public $responseView;
  /** @var Task */
  public $task;
  protected $taskType = Task::class;
  protected $taskDataType = '';
  /** @param string */
  public function setResponseView($responseView)
  {
    $this->responseView = $responseView;
  }
  /** @return string */
  public function getResponseView()
  {
    return $this->responseView;
  }
  /** @param Task */
  public function setTask(Task $task)
  {
    $this->task = $task;
  }
  /** @return Task */
  public function getTask()
  {
    return $this->task;
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

class GetIamPolicyRequest extends \Google\Model
{
  /** @var GetPolicyOptions */
  public $options;
  protected $optionsType = GetPolicyOptions::class;
  protected $optionsDataType = '';
  /** @param GetPolicyOptions */
  public function setOptions(GetPolicyOptions $options)
  {
    $this->options = $options;
  }
  /** @return GetPolicyOptions */
  public function getOptions()
  {
    return $this->options;
  }
}

class GetPolicyOptions extends \Google\Model
{
  /** @var int */
  public $requestedPolicyVersion;

  /** @param int */
  public function setRequestedPolicyVersion($requestedPolicyVersion)
  {
    $this->requestedPolicyVersion = $requestedPolicyVersion;
  }
  /** @return int */
  public function getRequestedPolicyVersion()
  {
    return $this->requestedPolicyVersion;
  }
}

class HttpRequest extends \Google\Model
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
  public $url;
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

class ListQueuesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Queue[] */
  public $queues;
  protected $collection_key = 'queues';
  protected $queuesType = Queue::class;
  protected $queuesDataType = 'array';
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
  /** @param Queue[] */
  public function setQueues($queues)
  {
    $this->queues = $queues;
  }
  /** @return Queue[] */
  public function getQueues()
  {
    return $this->queues;
  }
}

class ListTasksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Task[] */
  public $tasks;
  protected $collection_key = 'tasks';
  protected $tasksType = Task::class;
  protected $tasksDataType = 'array';
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
  /** @param Task[] */
  public function setTasks($tasks)
  {
    $this->tasks = $tasks;
  }
  /** @return Task[] */
  public function getTasks()
  {
    return $this->tasks;
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

class PauseQueueRequest extends \Google\Model
{
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

class PurgeQueueRequest extends \Google\Model
{
}

class Queue extends \Google\Model
{
  /** @var AppEngineRouting */
  public $appEngineRoutingOverride;
  /** @var string */
  public $name;
  /** @var string */
  public $purgeTime;
  /** @var RateLimits */
  public $rateLimits;
  /** @var RetryConfig */
  public $retryConfig;
  /** @var StackdriverLoggingConfig */
  public $stackdriverLoggingConfig;
  /** @var string */
  public $state;
  protected $appEngineRoutingOverrideType = AppEngineRouting::class;
  protected $appEngineRoutingOverrideDataType = '';
  protected $rateLimitsType = RateLimits::class;
  protected $rateLimitsDataType = '';
  protected $retryConfigType = RetryConfig::class;
  protected $retryConfigDataType = '';
  protected $stackdriverLoggingConfigType = StackdriverLoggingConfig::class;
  protected $stackdriverLoggingConfigDataType = '';
  /** @param AppEngineRouting */
  public function setAppEngineRoutingOverride(AppEngineRouting $appEngineRoutingOverride)
  {
    $this->appEngineRoutingOverride = $appEngineRoutingOverride;
  }
  /** @return AppEngineRouting */
  public function getAppEngineRoutingOverride()
  {
    return $this->appEngineRoutingOverride;
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
  public function setPurgeTime($purgeTime)
  {
    $this->purgeTime = $purgeTime;
  }
  /** @return string */
  public function getPurgeTime()
  {
    return $this->purgeTime;
  }
  /** @param RateLimits */
  public function setRateLimits(RateLimits $rateLimits)
  {
    $this->rateLimits = $rateLimits;
  }
  /** @return RateLimits */
  public function getRateLimits()
  {
    return $this->rateLimits;
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
  /** @param StackdriverLoggingConfig */
  public function setStackdriverLoggingConfig(StackdriverLoggingConfig $stackdriverLoggingConfig)
  {
    $this->stackdriverLoggingConfig = $stackdriverLoggingConfig;
  }
  /** @return StackdriverLoggingConfig */
  public function getStackdriverLoggingConfig()
  {
    return $this->stackdriverLoggingConfig;
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

class RateLimits extends \Google\Model
{
  /** @var int */
  public $maxBurstSize;
  /** @var int */
  public $maxConcurrentDispatches;
  public $maxDispatchesPerSecond;

  /** @param int */
  public function setMaxBurstSize($maxBurstSize)
  {
    $this->maxBurstSize = $maxBurstSize;
  }
  /** @return int */
  public function getMaxBurstSize()
  {
    return $this->maxBurstSize;
  }
  /** @param int */
  public function setMaxConcurrentDispatches($maxConcurrentDispatches)
  {
    $this->maxConcurrentDispatches = $maxConcurrentDispatches;
  }
  /** @return int */
  public function getMaxConcurrentDispatches()
  {
    return $this->maxConcurrentDispatches;
  }
  public function setMaxDispatchesPerSecond($maxDispatchesPerSecond)
  {
    $this->maxDispatchesPerSecond = $maxDispatchesPerSecond;
  }
  public function getMaxDispatchesPerSecond()
  {
    return $this->maxDispatchesPerSecond;
  }
}

class ResumeQueueRequest extends \Google\Model
{
}

class RetryConfig extends \Google\Model
{
  /** @var int */
  public $maxAttempts;
  /** @var string */
  public $maxBackoff;
  /** @var int */
  public $maxDoublings;
  /** @var string */
  public $maxRetryDuration;
  /** @var string */
  public $minBackoff;

  /** @param int */
  public function setMaxAttempts($maxAttempts)
  {
    $this->maxAttempts = $maxAttempts;
  }
  /** @return int */
  public function getMaxAttempts()
  {
    return $this->maxAttempts;
  }
  /** @param string */
  public function setMaxBackoff($maxBackoff)
  {
    $this->maxBackoff = $maxBackoff;
  }
  /** @return string */
  public function getMaxBackoff()
  {
    return $this->maxBackoff;
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
  public function setMinBackoff($minBackoff)
  {
    $this->minBackoff = $minBackoff;
  }
  /** @return string */
  public function getMinBackoff()
  {
    return $this->minBackoff;
  }
}

class RunTaskRequest extends \Google\Model
{
  /** @var string */
  public $responseView;

  /** @param string */
  public function setResponseView($responseView)
  {
    $this->responseView = $responseView;
  }
  /** @return string */
  public function getResponseView()
  {
    return $this->responseView;
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

class StackdriverLoggingConfig extends \Google\Model
{
  public $samplingRatio;

  public function setSamplingRatio($samplingRatio)
  {
    $this->samplingRatio = $samplingRatio;
  }
  public function getSamplingRatio()
  {
    return $this->samplingRatio;
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

class Task extends \Google\Model
{
  /** @var AppEngineHttpRequest */
  public $appEngineHttpRequest;
  /** @var string */
  public $createTime;
  /** @var int */
  public $dispatchCount;
  /** @var string */
  public $dispatchDeadline;
  /** @var Attempt */
  public $firstAttempt;
  /** @var HttpRequest */
  public $httpRequest;
  /** @var Attempt */
  public $lastAttempt;
  /** @var string */
  public $name;
  /** @var int */
  public $responseCount;
  /** @var string */
  public $scheduleTime;
  /** @var string */
  public $view;
  protected $appEngineHttpRequestType = AppEngineHttpRequest::class;
  protected $appEngineHttpRequestDataType = '';
  protected $firstAttemptType = Attempt::class;
  protected $firstAttemptDataType = '';
  protected $httpRequestType = HttpRequest::class;
  protected $httpRequestDataType = '';
  protected $lastAttemptType = Attempt::class;
  protected $lastAttemptDataType = '';
  /** @param AppEngineHttpRequest */
  public function setAppEngineHttpRequest(AppEngineHttpRequest $appEngineHttpRequest)
  {
    $this->appEngineHttpRequest = $appEngineHttpRequest;
  }
  /** @return AppEngineHttpRequest */
  public function getAppEngineHttpRequest()
  {
    return $this->appEngineHttpRequest;
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
  /** @param int */
  public function setDispatchCount($dispatchCount)
  {
    $this->dispatchCount = $dispatchCount;
  }
  /** @return int */
  public function getDispatchCount()
  {
    return $this->dispatchCount;
  }
  /** @param string */
  public function setDispatchDeadline($dispatchDeadline)
  {
    $this->dispatchDeadline = $dispatchDeadline;
  }
  /** @return string */
  public function getDispatchDeadline()
  {
    return $this->dispatchDeadline;
  }
  /** @param Attempt */
  public function setFirstAttempt(Attempt $firstAttempt)
  {
    $this->firstAttempt = $firstAttempt;
  }
  /** @return Attempt */
  public function getFirstAttempt()
  {
    return $this->firstAttempt;
  }
  /** @param HttpRequest */
  public function setHttpRequest(HttpRequest $httpRequest)
  {
    $this->httpRequest = $httpRequest;
  }
  /** @return HttpRequest */
  public function getHttpRequest()
  {
    return $this->httpRequest;
  }
  /** @param Attempt */
  public function setLastAttempt(Attempt $lastAttempt)
  {
    $this->lastAttempt = $lastAttempt;
  }
  /** @return Attempt */
  public function getLastAttempt()
  {
    return $this->lastAttempt;
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
  public function setResponseCount($responseCount)
  {
    $this->responseCount = $responseCount;
  }
  /** @return int */
  public function getResponseCount()
  {
    return $this->responseCount;
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
  public function setView($view)
  {
    $this->view = $view;
  }
  /** @return string */
  public function getView()
  {
    return $this->view;
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
class_alias(AppEngineHttpRequest::class, 'Google_Service_CloudTasks_AppEngineHttpRequest');
class_alias(AppEngineRouting::class, 'Google_Service_CloudTasks_AppEngineRouting');
class_alias(Attempt::class, 'Google_Service_CloudTasks_Attempt');
class_alias(Binding::class, 'Google_Service_CloudTasks_Binding');
class_alias(CloudtasksEmpty::class, 'Google_Service_CloudTasks_CloudtasksEmpty');
class_alias(CreateTaskRequest::class, 'Google_Service_CloudTasks_CreateTaskRequest');
class_alias(Expr::class, 'Google_Service_CloudTasks_Expr');
class_alias(GetIamPolicyRequest::class, 'Google_Service_CloudTasks_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_CloudTasks_GetPolicyOptions');
class_alias(HttpRequest::class, 'Google_Service_CloudTasks_HttpRequest');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudTasks_ListLocationsResponse');
class_alias(ListQueuesResponse::class, 'Google_Service_CloudTasks_ListQueuesResponse');
class_alias(ListTasksResponse::class, 'Google_Service_CloudTasks_ListTasksResponse');
class_alias(Location::class, 'Google_Service_CloudTasks_Location');
class_alias(OAuthToken::class, 'Google_Service_CloudTasks_OAuthToken');
class_alias(OidcToken::class, 'Google_Service_CloudTasks_OidcToken');
class_alias(PauseQueueRequest::class, 'Google_Service_CloudTasks_PauseQueueRequest');
class_alias(Policy::class, 'Google_Service_CloudTasks_Policy');
class_alias(PurgeQueueRequest::class, 'Google_Service_CloudTasks_PurgeQueueRequest');
class_alias(Queue::class, 'Google_Service_CloudTasks_Queue');
class_alias(RateLimits::class, 'Google_Service_CloudTasks_RateLimits');
class_alias(ResumeQueueRequest::class, 'Google_Service_CloudTasks_ResumeQueueRequest');
class_alias(RetryConfig::class, 'Google_Service_CloudTasks_RetryConfig');
class_alias(RunTaskRequest::class, 'Google_Service_CloudTasks_RunTaskRequest');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CloudTasks_SetIamPolicyRequest');
class_alias(StackdriverLoggingConfig::class, 'Google_Service_CloudTasks_StackdriverLoggingConfig');
class_alias(Status::class, 'Google_Service_CloudTasks_Status');
class_alias(Task::class, 'Google_Service_CloudTasks_Task');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CloudTasks_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CloudTasks_TestIamPermissionsResponse');
