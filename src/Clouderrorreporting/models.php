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

namespace Google\Service\Clouderrorreporting;

class DeleteEventsResponse extends \Google\Model
{
}

class ErrorContext extends \Google\Collection
{
  /** @var HttpRequestContext */
  public $httpRequest;
  /** @var SourceLocation */
  public $reportLocation;
  /** @var SourceReference[] */
  public $sourceReferences;
  /** @var string */
  public $user;
  protected $collection_key = 'sourceReferences';
  protected $httpRequestType = HttpRequestContext::class;
  protected $httpRequestDataType = '';
  protected $reportLocationType = SourceLocation::class;
  protected $reportLocationDataType = '';
  protected $sourceReferencesType = SourceReference::class;
  protected $sourceReferencesDataType = 'array';
  /** @param HttpRequestContext */
  public function setHttpRequest(HttpRequestContext $httpRequest)
  {
    $this->httpRequest = $httpRequest;
  }
  /** @return HttpRequestContext */
  public function getHttpRequest()
  {
    return $this->httpRequest;
  }
  /** @param SourceLocation */
  public function setReportLocation(SourceLocation $reportLocation)
  {
    $this->reportLocation = $reportLocation;
  }
  /** @return SourceLocation */
  public function getReportLocation()
  {
    return $this->reportLocation;
  }
  /** @param SourceReference[] */
  public function setSourceReferences($sourceReferences)
  {
    $this->sourceReferences = $sourceReferences;
  }
  /** @return SourceReference[] */
  public function getSourceReferences()
  {
    return $this->sourceReferences;
  }
  /** @param string */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return string */
  public function getUser()
  {
    return $this->user;
  }
}

class ErrorEvent extends \Google\Model
{
  /** @var ErrorContext */
  public $context;
  /** @var string */
  public $eventTime;
  /** @var string */
  public $message;
  /** @var ServiceContext */
  public $serviceContext;
  protected $contextType = ErrorContext::class;
  protected $contextDataType = '';
  protected $serviceContextType = ServiceContext::class;
  protected $serviceContextDataType = '';
  /** @param ErrorContext */
  public function setContext(ErrorContext $context)
  {
    $this->context = $context;
  }
  /** @return ErrorContext */
  public function getContext()
  {
    return $this->context;
  }
  /** @param string */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
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
  /** @param ServiceContext */
  public function setServiceContext(ServiceContext $serviceContext)
  {
    $this->serviceContext = $serviceContext;
  }
  /** @return ServiceContext */
  public function getServiceContext()
  {
    return $this->serviceContext;
  }
}

class ErrorGroup extends \Google\Collection
{
  /** @var string */
  public $groupId;
  /** @var string */
  public $name;
  /** @var string */
  public $resolutionStatus;
  /** @var TrackingIssue[] */
  public $trackingIssues;
  protected $collection_key = 'trackingIssues';
  protected $trackingIssuesType = TrackingIssue::class;
  protected $trackingIssuesDataType = 'array';
  /** @param string */
  public function setGroupId($groupId)
  {
    $this->groupId = $groupId;
  }
  /** @return string */
  public function getGroupId()
  {
    return $this->groupId;
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
  public function setResolutionStatus($resolutionStatus)
  {
    $this->resolutionStatus = $resolutionStatus;
  }
  /** @return string */
  public function getResolutionStatus()
  {
    return $this->resolutionStatus;
  }
  /** @param TrackingIssue[] */
  public function setTrackingIssues($trackingIssues)
  {
    $this->trackingIssues = $trackingIssues;
  }
  /** @return TrackingIssue[] */
  public function getTrackingIssues()
  {
    return $this->trackingIssues;
  }
}

class ErrorGroupStats extends \Google\Collection
{
  /** @var ServiceContext[] */
  public $affectedServices;
  /** @var string */
  public $affectedUsersCount;
  /** @var string */
  public $count;
  /** @var string */
  public $firstSeenTime;
  /** @var ErrorGroup */
  public $group;
  /** @var string */
  public $lastSeenTime;
  /** @var int */
  public $numAffectedServices;
  /** @var ErrorEvent */
  public $representative;
  /** @var TimedCount[] */
  public $timedCounts;
  protected $collection_key = 'timedCounts';
  protected $affectedServicesType = ServiceContext::class;
  protected $affectedServicesDataType = 'array';
  protected $groupType = ErrorGroup::class;
  protected $groupDataType = '';
  protected $representativeType = ErrorEvent::class;
  protected $representativeDataType = '';
  protected $timedCountsType = TimedCount::class;
  protected $timedCountsDataType = 'array';
  /** @param ServiceContext[] */
  public function setAffectedServices($affectedServices)
  {
    $this->affectedServices = $affectedServices;
  }
  /** @return ServiceContext[] */
  public function getAffectedServices()
  {
    return $this->affectedServices;
  }
  /** @param string */
  public function setAffectedUsersCount($affectedUsersCount)
  {
    $this->affectedUsersCount = $affectedUsersCount;
  }
  /** @return string */
  public function getAffectedUsersCount()
  {
    return $this->affectedUsersCount;
  }
  /** @param string */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return string */
  public function getCount()
  {
    return $this->count;
  }
  /** @param string */
  public function setFirstSeenTime($firstSeenTime)
  {
    $this->firstSeenTime = $firstSeenTime;
  }
  /** @return string */
  public function getFirstSeenTime()
  {
    return $this->firstSeenTime;
  }
  /** @param ErrorGroup */
  public function setGroup(ErrorGroup $group)
  {
    $this->group = $group;
  }
  /** @return ErrorGroup */
  public function getGroup()
  {
    return $this->group;
  }
  /** @param string */
  public function setLastSeenTime($lastSeenTime)
  {
    $this->lastSeenTime = $lastSeenTime;
  }
  /** @return string */
  public function getLastSeenTime()
  {
    return $this->lastSeenTime;
  }
  /** @param int */
  public function setNumAffectedServices($numAffectedServices)
  {
    $this->numAffectedServices = $numAffectedServices;
  }
  /** @return int */
  public function getNumAffectedServices()
  {
    return $this->numAffectedServices;
  }
  /** @param ErrorEvent */
  public function setRepresentative(ErrorEvent $representative)
  {
    $this->representative = $representative;
  }
  /** @return ErrorEvent */
  public function getRepresentative()
  {
    return $this->representative;
  }
  /** @param TimedCount[] */
  public function setTimedCounts($timedCounts)
  {
    $this->timedCounts = $timedCounts;
  }
  /** @return TimedCount[] */
  public function getTimedCounts()
  {
    return $this->timedCounts;
  }
}

class HttpRequestContext extends \Google\Model
{
  /** @var string */
  public $method;
  /** @var string */
  public $referrer;
  /** @var string */
  public $remoteIp;
  /** @var int */
  public $responseStatusCode;
  /** @var string */
  public $url;
  /** @var string */
  public $userAgent;

  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string */
  public function setReferrer($referrer)
  {
    $this->referrer = $referrer;
  }
  /** @return string */
  public function getReferrer()
  {
    return $this->referrer;
  }
  /** @param string */
  public function setRemoteIp($remoteIp)
  {
    $this->remoteIp = $remoteIp;
  }
  /** @return string */
  public function getRemoteIp()
  {
    return $this->remoteIp;
  }
  /** @param int */
  public function setResponseStatusCode($responseStatusCode)
  {
    $this->responseStatusCode = $responseStatusCode;
  }
  /** @return int */
  public function getResponseStatusCode()
  {
    return $this->responseStatusCode;
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

class ListEventsResponse extends \Google\Collection
{
  /** @var ErrorEvent[] */
  public $errorEvents;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $timeRangeBegin;
  protected $collection_key = 'errorEvents';
  protected $errorEventsType = ErrorEvent::class;
  protected $errorEventsDataType = 'array';
  /** @param ErrorEvent[] */
  public function setErrorEvents($errorEvents)
  {
    $this->errorEvents = $errorEvents;
  }
  /** @return ErrorEvent[] */
  public function getErrorEvents()
  {
    return $this->errorEvents;
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
  /** @param string */
  public function setTimeRangeBegin($timeRangeBegin)
  {
    $this->timeRangeBegin = $timeRangeBegin;
  }
  /** @return string */
  public function getTimeRangeBegin()
  {
    return $this->timeRangeBegin;
  }
}

class ListGroupStatsResponse extends \Google\Collection
{
  /** @var ErrorGroupStats[] */
  public $errorGroupStats;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $timeRangeBegin;
  protected $collection_key = 'errorGroupStats';
  protected $errorGroupStatsType = ErrorGroupStats::class;
  protected $errorGroupStatsDataType = 'array';
  /** @param ErrorGroupStats[] */
  public function setErrorGroupStats($errorGroupStats)
  {
    $this->errorGroupStats = $errorGroupStats;
  }
  /** @return ErrorGroupStats[] */
  public function getErrorGroupStats()
  {
    return $this->errorGroupStats;
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
  /** @param string */
  public function setTimeRangeBegin($timeRangeBegin)
  {
    $this->timeRangeBegin = $timeRangeBegin;
  }
  /** @return string */
  public function getTimeRangeBegin()
  {
    return $this->timeRangeBegin;
  }
}

class ReportErrorEventResponse extends \Google\Model
{
}

class ReportedErrorEvent extends \Google\Model
{
  /** @var ErrorContext */
  public $context;
  /** @var string */
  public $eventTime;
  /** @var string */
  public $message;
  /** @var ServiceContext */
  public $serviceContext;
  protected $contextType = ErrorContext::class;
  protected $contextDataType = '';
  protected $serviceContextType = ServiceContext::class;
  protected $serviceContextDataType = '';
  /** @param ErrorContext */
  public function setContext(ErrorContext $context)
  {
    $this->context = $context;
  }
  /** @return ErrorContext */
  public function getContext()
  {
    return $this->context;
  }
  /** @param string */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
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
  /** @param ServiceContext */
  public function setServiceContext(ServiceContext $serviceContext)
  {
    $this->serviceContext = $serviceContext;
  }
  /** @return ServiceContext */
  public function getServiceContext()
  {
    return $this->serviceContext;
  }
}

class ServiceContext extends \Google\Model
{
  /** @var string */
  public $resourceType;
  /** @var string */
  public $service;
  /** @var string */
  public $version;

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

class SourceLocation extends \Google\Model
{
  /** @var string */
  public $filePath;
  /** @var string */
  public $functionName;
  /** @var int */
  public $lineNumber;

  /** @param string */
  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  /** @return string */
  public function getFilePath()
  {
    return $this->filePath;
  }
  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
  /** @param int */
  public function setLineNumber($lineNumber)
  {
    $this->lineNumber = $lineNumber;
  }
  /** @return int */
  public function getLineNumber()
  {
    return $this->lineNumber;
  }
}

class SourceReference extends \Google\Model
{
  /** @var string */
  public $repository;
  /** @var string */
  public $revisionId;

  /** @param string */
  public function setRepository($repository)
  {
    $this->repository = $repository;
  }
  /** @return string */
  public function getRepository()
  {
    return $this->repository;
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
}

class TimedCount extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

  /** @param string */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return string */
  public function getCount()
  {
    return $this->count;
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

class TrackingIssue extends \Google\Model
{
  /** @var string */
  public $url;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeleteEventsResponse::class, 'Google_Service_Clouderrorreporting_DeleteEventsResponse');
class_alias(ErrorContext::class, 'Google_Service_Clouderrorreporting_ErrorContext');
class_alias(ErrorEvent::class, 'Google_Service_Clouderrorreporting_ErrorEvent');
class_alias(ErrorGroup::class, 'Google_Service_Clouderrorreporting_ErrorGroup');
class_alias(ErrorGroupStats::class, 'Google_Service_Clouderrorreporting_ErrorGroupStats');
class_alias(HttpRequestContext::class, 'Google_Service_Clouderrorreporting_HttpRequestContext');
class_alias(ListEventsResponse::class, 'Google_Service_Clouderrorreporting_ListEventsResponse');
class_alias(ListGroupStatsResponse::class, 'Google_Service_Clouderrorreporting_ListGroupStatsResponse');
class_alias(ReportErrorEventResponse::class, 'Google_Service_Clouderrorreporting_ReportErrorEventResponse');
class_alias(ReportedErrorEvent::class, 'Google_Service_Clouderrorreporting_ReportedErrorEvent');
class_alias(ServiceContext::class, 'Google_Service_Clouderrorreporting_ServiceContext');
class_alias(SourceLocation::class, 'Google_Service_Clouderrorreporting_SourceLocation');
class_alias(SourceReference::class, 'Google_Service_Clouderrorreporting_SourceReference');
class_alias(TimedCount::class, 'Google_Service_Clouderrorreporting_TimedCount');
class_alias(TrackingIssue::class, 'Google_Service_Clouderrorreporting_TrackingIssue');
