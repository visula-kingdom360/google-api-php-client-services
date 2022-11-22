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

namespace Google\Service\Storagetransfer;

class AgentPool extends \Google\Model
{
  /** @var BandwidthLimit */
  public $bandwidthLimit;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  protected $bandwidthLimitType = BandwidthLimit::class;
  protected $bandwidthLimitDataType = '';
  /** @param BandwidthLimit */
  public function setBandwidthLimit(BandwidthLimit $bandwidthLimit)
  {
    $this->bandwidthLimit = $bandwidthLimit;
  }
  /** @return BandwidthLimit */
  public function getBandwidthLimit()
  {
    return $this->bandwidthLimit;
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

class AwsAccessKey extends \Google\Model
{
  /** @var string */
  public $accessKeyId;
  /** @var string */
  public $secretAccessKey;

  /** @param string */
  public function setAccessKeyId($accessKeyId)
  {
    $this->accessKeyId = $accessKeyId;
  }
  /** @return string */
  public function getAccessKeyId()
  {
    return $this->accessKeyId;
  }
  /** @param string */
  public function setSecretAccessKey($secretAccessKey)
  {
    $this->secretAccessKey = $secretAccessKey;
  }
  /** @return string */
  public function getSecretAccessKey()
  {
    return $this->secretAccessKey;
  }
}

class AwsS3CompatibleData extends \Google\Model
{
  /** @var string */
  public $bucketName;
  /** @var string */
  public $endpoint;
  /** @var string */
  public $path;
  /** @var string */
  public $region;
  /** @var S3CompatibleMetadata */
  public $s3Metadata;
  protected $s3MetadataType = S3CompatibleMetadata::class;
  protected $s3MetadataDataType = '';
  /** @param string */
  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  /** @return string */
  public function getBucketName()
  {
    return $this->bucketName;
  }
  /** @param string */
  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /** @return string */
  public function getEndpoint()
  {
    return $this->endpoint;
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
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
  /** @param S3CompatibleMetadata */
  public function setS3Metadata(S3CompatibleMetadata $s3Metadata)
  {
    $this->s3Metadata = $s3Metadata;
  }
  /** @return S3CompatibleMetadata */
  public function getS3Metadata()
  {
    return $this->s3Metadata;
  }
}

class AwsS3Data extends \Google\Model
{
  /** @var AwsAccessKey */
  public $awsAccessKey;
  /** @var string */
  public $bucketName;
  /** @var string */
  public $path;
  /** @var string */
  public $roleArn;
  protected $awsAccessKeyType = AwsAccessKey::class;
  protected $awsAccessKeyDataType = '';
  /** @param AwsAccessKey */
  public function setAwsAccessKey(AwsAccessKey $awsAccessKey)
  {
    $this->awsAccessKey = $awsAccessKey;
  }
  /** @return AwsAccessKey */
  public function getAwsAccessKey()
  {
    return $this->awsAccessKey;
  }
  /** @param string */
  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  /** @return string */
  public function getBucketName()
  {
    return $this->bucketName;
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
  /** @param string */
  public function setRoleArn($roleArn)
  {
    $this->roleArn = $roleArn;
  }
  /** @return string */
  public function getRoleArn()
  {
    return $this->roleArn;
  }
}

class AzureBlobStorageData extends \Google\Model
{
  /** @var AzureCredentials */
  public $azureCredentials;
  /** @var string */
  public $container;
  /** @var string */
  public $path;
  /** @var string */
  public $storageAccount;
  protected $azureCredentialsType = AzureCredentials::class;
  protected $azureCredentialsDataType = '';
  /** @param AzureCredentials */
  public function setAzureCredentials(AzureCredentials $azureCredentials)
  {
    $this->azureCredentials = $azureCredentials;
  }
  /** @return AzureCredentials */
  public function getAzureCredentials()
  {
    return $this->azureCredentials;
  }
  /** @param string */
  public function setContainer($container)
  {
    $this->container = $container;
  }
  /** @return string */
  public function getContainer()
  {
    return $this->container;
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
  /** @param string */
  public function setStorageAccount($storageAccount)
  {
    $this->storageAccount = $storageAccount;
  }
  /** @return string */
  public function getStorageAccount()
  {
    return $this->storageAccount;
  }
}

class AzureCredentials extends \Google\Model
{
  /** @var string */
  public $sasToken;

  /** @param string */
  public function setSasToken($sasToken)
  {
    $this->sasToken = $sasToken;
  }
  /** @return string */
  public function getSasToken()
  {
    return $this->sasToken;
  }
}

class BandwidthLimit extends \Google\Model
{
  /** @var string */
  public $limitMbps;

  /** @param string */
  public function setLimitMbps($limitMbps)
  {
    $this->limitMbps = $limitMbps;
  }
  /** @return string */
  public function getLimitMbps()
  {
    return $this->limitMbps;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class Date extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $month;
  /** @var int */
  public $year;

  /** @param int */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return int */
  public function getDay()
  {
    return $this->day;
  }
  /** @param int */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /** @return int */
  public function getMonth()
  {
    return $this->month;
  }
  /** @param int */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /** @return int */
  public function getYear()
  {
    return $this->year;
  }
}

class ErrorLogEntry extends \Google\Collection
{
  /** @var string[] */
  public $errorDetails;
  /** @var string */
  public $url;
  protected $collection_key = 'errorDetails';
  /** @param string[] */
  public function setErrorDetails($errorDetails)
  {
    $this->errorDetails = $errorDetails;
  }
  /** @return string[] */
  public function getErrorDetails()
  {
    return $this->errorDetails;
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

class ErrorSummary extends \Google\Collection
{
  /** @var string */
  public $errorCode;
  /** @var string */
  public $errorCount;
  /** @var ErrorLogEntry[] */
  public $errorLogEntries;
  protected $collection_key = 'errorLogEntries';
  protected $errorLogEntriesType = ErrorLogEntry::class;
  protected $errorLogEntriesDataType = 'array';
  /** @param string */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return string */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param string */
  public function setErrorCount($errorCount)
  {
    $this->errorCount = $errorCount;
  }
  /** @return string */
  public function getErrorCount()
  {
    return $this->errorCount;
  }
  /** @param ErrorLogEntry[] */
  public function setErrorLogEntries($errorLogEntries)
  {
    $this->errorLogEntries = $errorLogEntries;
  }
  /** @return ErrorLogEntry[] */
  public function getErrorLogEntries()
  {
    return $this->errorLogEntries;
  }
}

class GcsData extends \Google\Model
{
  /** @var string */
  public $bucketName;
  /** @var string */
  public $path;

  /** @param string */
  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  /** @return string */
  public function getBucketName()
  {
    return $this->bucketName;
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
}

class GoogleServiceAccount extends \Google\Model
{
  /** @var string */
  public $accountEmail;
  /** @var string */
  public $subjectId;

  /** @param string */
  public function setAccountEmail($accountEmail)
  {
    $this->accountEmail = $accountEmail;
  }
  /** @return string */
  public function getAccountEmail()
  {
    return $this->accountEmail;
  }
  /** @param string */
  public function setSubjectId($subjectId)
  {
    $this->subjectId = $subjectId;
  }
  /** @return string */
  public function getSubjectId()
  {
    return $this->subjectId;
  }
}

class HttpData extends \Google\Model
{
  /** @var string */
  public $listUrl;

  /** @param string */
  public function setListUrl($listUrl)
  {
    $this->listUrl = $listUrl;
  }
  /** @return string */
  public function getListUrl()
  {
    return $this->listUrl;
  }
}

class ListAgentPoolsResponse extends \Google\Collection
{
  /** @var AgentPool[] */
  public $agentPools;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'agentPools';
  protected $agentPoolsType = AgentPool::class;
  protected $agentPoolsDataType = 'array';
  /** @param AgentPool[] */
  public function setAgentPools($agentPools)
  {
    $this->agentPools = $agentPools;
  }
  /** @return AgentPool[] */
  public function getAgentPools()
  {
    return $this->agentPools;
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

class ListTransferJobsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TransferJob[] */
  public $transferJobs;
  protected $collection_key = 'transferJobs';
  protected $transferJobsType = TransferJob::class;
  protected $transferJobsDataType = 'array';
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
  /** @param TransferJob[] */
  public function setTransferJobs($transferJobs)
  {
    $this->transferJobs = $transferJobs;
  }
  /** @return TransferJob[] */
  public function getTransferJobs()
  {
    return $this->transferJobs;
  }
}

class LoggingConfig extends \Google\Collection
{
  /** @var bool */
  public $enableOnpremGcsTransferLogs;
  /** @var string[] */
  public $logActionStates;
  /** @var string[] */
  public $logActions;
  protected $collection_key = 'logActions';
  /** @param bool */
  public function setEnableOnpremGcsTransferLogs($enableOnpremGcsTransferLogs)
  {
    $this->enableOnpremGcsTransferLogs = $enableOnpremGcsTransferLogs;
  }
  /** @return bool */
  public function getEnableOnpremGcsTransferLogs()
  {
    return $this->enableOnpremGcsTransferLogs;
  }
  /** @param string[] */
  public function setLogActionStates($logActionStates)
  {
    $this->logActionStates = $logActionStates;
  }
  /** @return string[] */
  public function getLogActionStates()
  {
    return $this->logActionStates;
  }
  /** @param string[] */
  public function setLogActions($logActions)
  {
    $this->logActions = $logActions;
  }
  /** @return string[] */
  public function getLogActions()
  {
    return $this->logActions;
  }
}

class MetadataOptions extends \Google\Model
{
  /** @var string */
  public $acl;
  /** @var string */
  public $gid;
  /** @var string */
  public $kmsKey;
  /** @var string */
  public $mode;
  /** @var string */
  public $storageClass;
  /** @var string */
  public $symlink;
  /** @var string */
  public $temporaryHold;
  /** @var string */
  public $timeCreated;
  /** @var string */
  public $uid;

  /** @param string */
  public function setAcl($acl)
  {
    $this->acl = $acl;
  }
  /** @return string */
  public function getAcl()
  {
    return $this->acl;
  }
  /** @param string */
  public function setGid($gid)
  {
    $this->gid = $gid;
  }
  /** @return string */
  public function getGid()
  {
    return $this->gid;
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
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
  }
  /** @param string */
  public function setStorageClass($storageClass)
  {
    $this->storageClass = $storageClass;
  }
  /** @return string */
  public function getStorageClass()
  {
    return $this->storageClass;
  }
  /** @param string */
  public function setSymlink($symlink)
  {
    $this->symlink = $symlink;
  }
  /** @return string */
  public function getSymlink()
  {
    return $this->symlink;
  }
  /** @param string */
  public function setTemporaryHold($temporaryHold)
  {
    $this->temporaryHold = $temporaryHold;
  }
  /** @return string */
  public function getTemporaryHold()
  {
    return $this->temporaryHold;
  }
  /** @param string */
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  /** @return string */
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  /** @param string */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
  }
}

class NotificationConfig extends \Google\Collection
{
  /** @var string[] */
  public $eventTypes;
  /** @var string */
  public $payloadFormat;
  /** @var string */
  public $pubsubTopic;
  protected $collection_key = 'eventTypes';
  /** @param string[] */
  public function setEventTypes($eventTypes)
  {
    $this->eventTypes = $eventTypes;
  }
  /** @return string[] */
  public function getEventTypes()
  {
    return $this->eventTypes;
  }
  /** @param string */
  public function setPayloadFormat($payloadFormat)
  {
    $this->payloadFormat = $payloadFormat;
  }
  /** @return string */
  public function getPayloadFormat()
  {
    return $this->payloadFormat;
  }
  /** @param string */
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /** @return string */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
}

class ObjectConditions extends \Google\Collection
{
  /** @var string[] */
  public $excludePrefixes;
  /** @var string[] */
  public $includePrefixes;
  /** @var string */
  public $lastModifiedBefore;
  /** @var string */
  public $lastModifiedSince;
  /** @var string */
  public $maxTimeElapsedSinceLastModification;
  /** @var string */
  public $minTimeElapsedSinceLastModification;
  protected $collection_key = 'includePrefixes';
  /** @param string[] */
  public function setExcludePrefixes($excludePrefixes)
  {
    $this->excludePrefixes = $excludePrefixes;
  }
  /** @return string[] */
  public function getExcludePrefixes()
  {
    return $this->excludePrefixes;
  }
  /** @param string[] */
  public function setIncludePrefixes($includePrefixes)
  {
    $this->includePrefixes = $includePrefixes;
  }
  /** @return string[] */
  public function getIncludePrefixes()
  {
    return $this->includePrefixes;
  }
  /** @param string */
  public function setLastModifiedBefore($lastModifiedBefore)
  {
    $this->lastModifiedBefore = $lastModifiedBefore;
  }
  /** @return string */
  public function getLastModifiedBefore()
  {
    return $this->lastModifiedBefore;
  }
  /** @param string */
  public function setLastModifiedSince($lastModifiedSince)
  {
    $this->lastModifiedSince = $lastModifiedSince;
  }
  /** @return string */
  public function getLastModifiedSince()
  {
    return $this->lastModifiedSince;
  }
  /** @param string */
  public function setMaxTimeElapsedSinceLastModification($maxTimeElapsedSinceLastModification)
  {
    $this->maxTimeElapsedSinceLastModification = $maxTimeElapsedSinceLastModification;
  }
  /** @return string */
  public function getMaxTimeElapsedSinceLastModification()
  {
    return $this->maxTimeElapsedSinceLastModification;
  }
  /** @param string */
  public function setMinTimeElapsedSinceLastModification($minTimeElapsedSinceLastModification)
  {
    $this->minTimeElapsedSinceLastModification = $minTimeElapsedSinceLastModification;
  }
  /** @return string */
  public function getMinTimeElapsedSinceLastModification()
  {
    return $this->minTimeElapsedSinceLastModification;
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

class PauseTransferOperationRequest extends \Google\Model
{
}

class PosixFilesystem extends \Google\Model
{
  /** @var string */
  public $rootDirectory;

  /** @param string */
  public function setRootDirectory($rootDirectory)
  {
    $this->rootDirectory = $rootDirectory;
  }
  /** @return string */
  public function getRootDirectory()
  {
    return $this->rootDirectory;
  }
}

class ResumeTransferOperationRequest extends \Google\Model
{
}

class RunTransferJobRequest extends \Google\Model
{
  /** @var string */
  public $projectId;

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
}

class S3CompatibleMetadata extends \Google\Model
{
  /** @var string */
  public $authMethod;
  /** @var string */
  public $listApi;
  /** @var string */
  public $protocol;
  /** @var string */
  public $requestModel;

  /** @param string */
  public function setAuthMethod($authMethod)
  {
    $this->authMethod = $authMethod;
  }
  /** @return string */
  public function getAuthMethod()
  {
    return $this->authMethod;
  }
  /** @param string */
  public function setListApi($listApi)
  {
    $this->listApi = $listApi;
  }
  /** @return string */
  public function getListApi()
  {
    return $this->listApi;
  }
  /** @param string */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /** @return string */
  public function getProtocol()
  {
    return $this->protocol;
  }
  /** @param string */
  public function setRequestModel($requestModel)
  {
    $this->requestModel = $requestModel;
  }
  /** @return string */
  public function getRequestModel()
  {
    return $this->requestModel;
  }
}

class Schedule extends \Google\Model
{
  /** @var TimeOfDay */
  public $endTimeOfDay;
  /** @var string */
  public $repeatInterval;
  /** @var Date */
  public $scheduleEndDate;
  /** @var Date */
  public $scheduleStartDate;
  /** @var TimeOfDay */
  public $startTimeOfDay;
  protected $endTimeOfDayType = TimeOfDay::class;
  protected $endTimeOfDayDataType = '';
  protected $scheduleEndDateType = Date::class;
  protected $scheduleEndDateDataType = '';
  protected $scheduleStartDateType = Date::class;
  protected $scheduleStartDateDataType = '';
  protected $startTimeOfDayType = TimeOfDay::class;
  protected $startTimeOfDayDataType = '';
  /** @param TimeOfDay */
  public function setEndTimeOfDay(TimeOfDay $endTimeOfDay)
  {
    $this->endTimeOfDay = $endTimeOfDay;
  }
  /** @return TimeOfDay */
  public function getEndTimeOfDay()
  {
    return $this->endTimeOfDay;
  }
  /** @param string */
  public function setRepeatInterval($repeatInterval)
  {
    $this->repeatInterval = $repeatInterval;
  }
  /** @return string */
  public function getRepeatInterval()
  {
    return $this->repeatInterval;
  }
  /** @param Date */
  public function setScheduleEndDate(Date $scheduleEndDate)
  {
    $this->scheduleEndDate = $scheduleEndDate;
  }
  /** @return Date */
  public function getScheduleEndDate()
  {
    return $this->scheduleEndDate;
  }
  /** @param Date */
  public function setScheduleStartDate(Date $scheduleStartDate)
  {
    $this->scheduleStartDate = $scheduleStartDate;
  }
  /** @return Date */
  public function getScheduleStartDate()
  {
    return $this->scheduleStartDate;
  }
  /** @param TimeOfDay */
  public function setStartTimeOfDay(TimeOfDay $startTimeOfDay)
  {
    $this->startTimeOfDay = $startTimeOfDay;
  }
  /** @return TimeOfDay */
  public function getStartTimeOfDay()
  {
    return $this->startTimeOfDay;
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

class StoragetransferEmpty extends \Google\Model
{
}

class TimeOfDay extends \Google\Model
{
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;

  /** @param int */
  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  /** @return int */
  public function getHours()
  {
    return $this->hours;
  }
  /** @param int */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  /** @return int */
  public function getMinutes()
  {
    return $this->minutes;
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
  /** @param int */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return int */
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class TransferCounters extends \Google\Model
{
  /** @var string */
  public $bytesCopiedToSink;
  /** @var string */
  public $bytesDeletedFromSink;
  /** @var string */
  public $bytesDeletedFromSource;
  /** @var string */
  public $bytesFailedToDeleteFromSink;
  /** @var string */
  public $bytesFoundFromSource;
  /** @var string */
  public $bytesFoundOnlyFromSink;
  /** @var string */
  public $bytesFromSourceFailed;
  /** @var string */
  public $bytesFromSourceSkippedBySync;
  /** @var string */
  public $directoriesFailedToListFromSource;
  /** @var string */
  public $directoriesFoundFromSource;
  /** @var string */
  public $directoriesSuccessfullyListedFromSource;
  /** @var string */
  public $intermediateObjectsCleanedUp;
  /** @var string */
  public $intermediateObjectsFailedCleanedUp;
  /** @var string */
  public $objectsCopiedToSink;
  /** @var string */
  public $objectsDeletedFromSink;
  /** @var string */
  public $objectsDeletedFromSource;
  /** @var string */
  public $objectsFailedToDeleteFromSink;
  /** @var string */
  public $objectsFoundFromSource;
  /** @var string */
  public $objectsFoundOnlyFromSink;
  /** @var string */
  public $objectsFromSourceFailed;
  /** @var string */
  public $objectsFromSourceSkippedBySync;

  /** @param string */
  public function setBytesCopiedToSink($bytesCopiedToSink)
  {
    $this->bytesCopiedToSink = $bytesCopiedToSink;
  }
  /** @return string */
  public function getBytesCopiedToSink()
  {
    return $this->bytesCopiedToSink;
  }
  /** @param string */
  public function setBytesDeletedFromSink($bytesDeletedFromSink)
  {
    $this->bytesDeletedFromSink = $bytesDeletedFromSink;
  }
  /** @return string */
  public function getBytesDeletedFromSink()
  {
    return $this->bytesDeletedFromSink;
  }
  /** @param string */
  public function setBytesDeletedFromSource($bytesDeletedFromSource)
  {
    $this->bytesDeletedFromSource = $bytesDeletedFromSource;
  }
  /** @return string */
  public function getBytesDeletedFromSource()
  {
    return $this->bytesDeletedFromSource;
  }
  /** @param string */
  public function setBytesFailedToDeleteFromSink($bytesFailedToDeleteFromSink)
  {
    $this->bytesFailedToDeleteFromSink = $bytesFailedToDeleteFromSink;
  }
  /** @return string */
  public function getBytesFailedToDeleteFromSink()
  {
    return $this->bytesFailedToDeleteFromSink;
  }
  /** @param string */
  public function setBytesFoundFromSource($bytesFoundFromSource)
  {
    $this->bytesFoundFromSource = $bytesFoundFromSource;
  }
  /** @return string */
  public function getBytesFoundFromSource()
  {
    return $this->bytesFoundFromSource;
  }
  /** @param string */
  public function setBytesFoundOnlyFromSink($bytesFoundOnlyFromSink)
  {
    $this->bytesFoundOnlyFromSink = $bytesFoundOnlyFromSink;
  }
  /** @return string */
  public function getBytesFoundOnlyFromSink()
  {
    return $this->bytesFoundOnlyFromSink;
  }
  /** @param string */
  public function setBytesFromSourceFailed($bytesFromSourceFailed)
  {
    $this->bytesFromSourceFailed = $bytesFromSourceFailed;
  }
  /** @return string */
  public function getBytesFromSourceFailed()
  {
    return $this->bytesFromSourceFailed;
  }
  /** @param string */
  public function setBytesFromSourceSkippedBySync($bytesFromSourceSkippedBySync)
  {
    $this->bytesFromSourceSkippedBySync = $bytesFromSourceSkippedBySync;
  }
  /** @return string */
  public function getBytesFromSourceSkippedBySync()
  {
    return $this->bytesFromSourceSkippedBySync;
  }
  /** @param string */
  public function setDirectoriesFailedToListFromSource($directoriesFailedToListFromSource)
  {
    $this->directoriesFailedToListFromSource = $directoriesFailedToListFromSource;
  }
  /** @return string */
  public function getDirectoriesFailedToListFromSource()
  {
    return $this->directoriesFailedToListFromSource;
  }
  /** @param string */
  public function setDirectoriesFoundFromSource($directoriesFoundFromSource)
  {
    $this->directoriesFoundFromSource = $directoriesFoundFromSource;
  }
  /** @return string */
  public function getDirectoriesFoundFromSource()
  {
    return $this->directoriesFoundFromSource;
  }
  /** @param string */
  public function setDirectoriesSuccessfullyListedFromSource($directoriesSuccessfullyListedFromSource)
  {
    $this->directoriesSuccessfullyListedFromSource = $directoriesSuccessfullyListedFromSource;
  }
  /** @return string */
  public function getDirectoriesSuccessfullyListedFromSource()
  {
    return $this->directoriesSuccessfullyListedFromSource;
  }
  /** @param string */
  public function setIntermediateObjectsCleanedUp($intermediateObjectsCleanedUp)
  {
    $this->intermediateObjectsCleanedUp = $intermediateObjectsCleanedUp;
  }
  /** @return string */
  public function getIntermediateObjectsCleanedUp()
  {
    return $this->intermediateObjectsCleanedUp;
  }
  /** @param string */
  public function setIntermediateObjectsFailedCleanedUp($intermediateObjectsFailedCleanedUp)
  {
    $this->intermediateObjectsFailedCleanedUp = $intermediateObjectsFailedCleanedUp;
  }
  /** @return string */
  public function getIntermediateObjectsFailedCleanedUp()
  {
    return $this->intermediateObjectsFailedCleanedUp;
  }
  /** @param string */
  public function setObjectsCopiedToSink($objectsCopiedToSink)
  {
    $this->objectsCopiedToSink = $objectsCopiedToSink;
  }
  /** @return string */
  public function getObjectsCopiedToSink()
  {
    return $this->objectsCopiedToSink;
  }
  /** @param string */
  public function setObjectsDeletedFromSink($objectsDeletedFromSink)
  {
    $this->objectsDeletedFromSink = $objectsDeletedFromSink;
  }
  /** @return string */
  public function getObjectsDeletedFromSink()
  {
    return $this->objectsDeletedFromSink;
  }
  /** @param string */
  public function setObjectsDeletedFromSource($objectsDeletedFromSource)
  {
    $this->objectsDeletedFromSource = $objectsDeletedFromSource;
  }
  /** @return string */
  public function getObjectsDeletedFromSource()
  {
    return $this->objectsDeletedFromSource;
  }
  /** @param string */
  public function setObjectsFailedToDeleteFromSink($objectsFailedToDeleteFromSink)
  {
    $this->objectsFailedToDeleteFromSink = $objectsFailedToDeleteFromSink;
  }
  /** @return string */
  public function getObjectsFailedToDeleteFromSink()
  {
    return $this->objectsFailedToDeleteFromSink;
  }
  /** @param string */
  public function setObjectsFoundFromSource($objectsFoundFromSource)
  {
    $this->objectsFoundFromSource = $objectsFoundFromSource;
  }
  /** @return string */
  public function getObjectsFoundFromSource()
  {
    return $this->objectsFoundFromSource;
  }
  /** @param string */
  public function setObjectsFoundOnlyFromSink($objectsFoundOnlyFromSink)
  {
    $this->objectsFoundOnlyFromSink = $objectsFoundOnlyFromSink;
  }
  /** @return string */
  public function getObjectsFoundOnlyFromSink()
  {
    return $this->objectsFoundOnlyFromSink;
  }
  /** @param string */
  public function setObjectsFromSourceFailed($objectsFromSourceFailed)
  {
    $this->objectsFromSourceFailed = $objectsFromSourceFailed;
  }
  /** @return string */
  public function getObjectsFromSourceFailed()
  {
    return $this->objectsFromSourceFailed;
  }
  /** @param string */
  public function setObjectsFromSourceSkippedBySync($objectsFromSourceSkippedBySync)
  {
    $this->objectsFromSourceSkippedBySync = $objectsFromSourceSkippedBySync;
  }
  /** @return string */
  public function getObjectsFromSourceSkippedBySync()
  {
    return $this->objectsFromSourceSkippedBySync;
  }
}

class TransferJob extends \Google\Model
{
  /** @var string */
  public $creationTime;
  /** @var string */
  public $deletionTime;
  /** @var string */
  public $description;
  /** @var string */
  public $lastModificationTime;
  /** @var string */
  public $latestOperationName;
  /** @var LoggingConfig */
  public $loggingConfig;
  /** @var string */
  public $name;
  /** @var NotificationConfig */
  public $notificationConfig;
  /** @var string */
  public $projectId;
  /** @var Schedule */
  public $schedule;
  /** @var string */
  public $status;
  /** @var TransferSpec */
  public $transferSpec;
  protected $loggingConfigType = LoggingConfig::class;
  protected $loggingConfigDataType = '';
  protected $notificationConfigType = NotificationConfig::class;
  protected $notificationConfigDataType = '';
  protected $scheduleType = Schedule::class;
  protected $scheduleDataType = '';
  protected $transferSpecType = TransferSpec::class;
  protected $transferSpecDataType = '';
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
  public function setDeletionTime($deletionTime)
  {
    $this->deletionTime = $deletionTime;
  }
  /** @return string */
  public function getDeletionTime()
  {
    return $this->deletionTime;
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
  public function setLastModificationTime($lastModificationTime)
  {
    $this->lastModificationTime = $lastModificationTime;
  }
  /** @return string */
  public function getLastModificationTime()
  {
    return $this->lastModificationTime;
  }
  /** @param string */
  public function setLatestOperationName($latestOperationName)
  {
    $this->latestOperationName = $latestOperationName;
  }
  /** @return string */
  public function getLatestOperationName()
  {
    return $this->latestOperationName;
  }
  /** @param LoggingConfig */
  public function setLoggingConfig(LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return LoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
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
  /** @param NotificationConfig */
  public function setNotificationConfig(NotificationConfig $notificationConfig)
  {
    $this->notificationConfig = $notificationConfig;
  }
  /** @return NotificationConfig */
  public function getNotificationConfig()
  {
    return $this->notificationConfig;
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
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param TransferSpec */
  public function setTransferSpec(TransferSpec $transferSpec)
  {
    $this->transferSpec = $transferSpec;
  }
  /** @return TransferSpec */
  public function getTransferSpec()
  {
    return $this->transferSpec;
  }
}

class TransferManifest extends \Google\Model
{
  /** @var string */
  public $location;

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

class TransferOperation extends \Google\Collection
{
  /** @var TransferCounters */
  public $counters;
  /** @var string */
  public $endTime;
  /** @var ErrorSummary[] */
  public $errorBreakdowns;
  /** @var string */
  public $name;
  /** @var NotificationConfig */
  public $notificationConfig;
  /** @var string */
  public $projectId;
  /** @var string */
  public $startTime;
  /** @var string */
  public $status;
  /** @var string */
  public $transferJobName;
  /** @var TransferSpec */
  public $transferSpec;
  protected $collection_key = 'errorBreakdowns';
  protected $countersType = TransferCounters::class;
  protected $countersDataType = '';
  protected $errorBreakdownsType = ErrorSummary::class;
  protected $errorBreakdownsDataType = 'array';
  protected $notificationConfigType = NotificationConfig::class;
  protected $notificationConfigDataType = '';
  protected $transferSpecType = TransferSpec::class;
  protected $transferSpecDataType = '';
  /** @param TransferCounters */
  public function setCounters(TransferCounters $counters)
  {
    $this->counters = $counters;
  }
  /** @return TransferCounters */
  public function getCounters()
  {
    return $this->counters;
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
  /** @param ErrorSummary[] */
  public function setErrorBreakdowns($errorBreakdowns)
  {
    $this->errorBreakdowns = $errorBreakdowns;
  }
  /** @return ErrorSummary[] */
  public function getErrorBreakdowns()
  {
    return $this->errorBreakdowns;
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
  /** @param NotificationConfig */
  public function setNotificationConfig(NotificationConfig $notificationConfig)
  {
    $this->notificationConfig = $notificationConfig;
  }
  /** @return NotificationConfig */
  public function getNotificationConfig()
  {
    return $this->notificationConfig;
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
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setTransferJobName($transferJobName)
  {
    $this->transferJobName = $transferJobName;
  }
  /** @return string */
  public function getTransferJobName()
  {
    return $this->transferJobName;
  }
  /** @param TransferSpec */
  public function setTransferSpec(TransferSpec $transferSpec)
  {
    $this->transferSpec = $transferSpec;
  }
  /** @return TransferSpec */
  public function getTransferSpec()
  {
    return $this->transferSpec;
  }
}

class TransferOptions extends \Google\Model
{
  /** @var bool */
  public $deleteObjectsFromSourceAfterTransfer;
  /** @var bool */
  public $deleteObjectsUniqueInSink;
  /** @var MetadataOptions */
  public $metadataOptions;
  /** @var bool */
  public $overwriteObjectsAlreadyExistingInSink;
  /** @var string */
  public $overwriteWhen;
  protected $metadataOptionsType = MetadataOptions::class;
  protected $metadataOptionsDataType = '';
  /** @param bool */
  public function setDeleteObjectsFromSourceAfterTransfer($deleteObjectsFromSourceAfterTransfer)
  {
    $this->deleteObjectsFromSourceAfterTransfer = $deleteObjectsFromSourceAfterTransfer;
  }
  /** @return bool */
  public function getDeleteObjectsFromSourceAfterTransfer()
  {
    return $this->deleteObjectsFromSourceAfterTransfer;
  }
  /** @param bool */
  public function setDeleteObjectsUniqueInSink($deleteObjectsUniqueInSink)
  {
    $this->deleteObjectsUniqueInSink = $deleteObjectsUniqueInSink;
  }
  /** @return bool */
  public function getDeleteObjectsUniqueInSink()
  {
    return $this->deleteObjectsUniqueInSink;
  }
  /** @param MetadataOptions */
  public function setMetadataOptions(MetadataOptions $metadataOptions)
  {
    $this->metadataOptions = $metadataOptions;
  }
  /** @return MetadataOptions */
  public function getMetadataOptions()
  {
    return $this->metadataOptions;
  }
  /** @param bool */
  public function setOverwriteObjectsAlreadyExistingInSink($overwriteObjectsAlreadyExistingInSink)
  {
    $this->overwriteObjectsAlreadyExistingInSink = $overwriteObjectsAlreadyExistingInSink;
  }
  /** @return bool */
  public function getOverwriteObjectsAlreadyExistingInSink()
  {
    return $this->overwriteObjectsAlreadyExistingInSink;
  }
  /** @param string */
  public function setOverwriteWhen($overwriteWhen)
  {
    $this->overwriteWhen = $overwriteWhen;
  }
  /** @return string */
  public function getOverwriteWhen()
  {
    return $this->overwriteWhen;
  }
}

class TransferSpec extends \Google\Model
{
  /** @var AwsS3CompatibleData */
  public $awsS3CompatibleDataSource;
  /** @var AwsS3Data */
  public $awsS3DataSource;
  /** @var AzureBlobStorageData */
  public $azureBlobStorageDataSource;
  /** @var GcsData */
  public $gcsDataSink;
  /** @var GcsData */
  public $gcsDataSource;
  /** @var GcsData */
  public $gcsIntermediateDataLocation;
  /** @var HttpData */
  public $httpDataSource;
  /** @var ObjectConditions */
  public $objectConditions;
  /** @var PosixFilesystem */
  public $posixDataSink;
  /** @var PosixFilesystem */
  public $posixDataSource;
  /** @var string */
  public $sinkAgentPoolName;
  /** @var string */
  public $sourceAgentPoolName;
  /** @var TransferManifest */
  public $transferManifest;
  /** @var TransferOptions */
  public $transferOptions;
  protected $awsS3CompatibleDataSourceType = AwsS3CompatibleData::class;
  protected $awsS3CompatibleDataSourceDataType = '';
  protected $awsS3DataSourceType = AwsS3Data::class;
  protected $awsS3DataSourceDataType = '';
  protected $azureBlobStorageDataSourceType = AzureBlobStorageData::class;
  protected $azureBlobStorageDataSourceDataType = '';
  protected $gcsDataSinkType = GcsData::class;
  protected $gcsDataSinkDataType = '';
  protected $gcsDataSourceType = GcsData::class;
  protected $gcsDataSourceDataType = '';
  protected $gcsIntermediateDataLocationType = GcsData::class;
  protected $gcsIntermediateDataLocationDataType = '';
  protected $httpDataSourceType = HttpData::class;
  protected $httpDataSourceDataType = '';
  protected $objectConditionsType = ObjectConditions::class;
  protected $objectConditionsDataType = '';
  protected $posixDataSinkType = PosixFilesystem::class;
  protected $posixDataSinkDataType = '';
  protected $posixDataSourceType = PosixFilesystem::class;
  protected $posixDataSourceDataType = '';
  protected $transferManifestType = TransferManifest::class;
  protected $transferManifestDataType = '';
  protected $transferOptionsType = TransferOptions::class;
  protected $transferOptionsDataType = '';
  /** @param AwsS3CompatibleData */
  public function setAwsS3CompatibleDataSource(AwsS3CompatibleData $awsS3CompatibleDataSource)
  {
    $this->awsS3CompatibleDataSource = $awsS3CompatibleDataSource;
  }
  /** @return AwsS3CompatibleData */
  public function getAwsS3CompatibleDataSource()
  {
    return $this->awsS3CompatibleDataSource;
  }
  /** @param AwsS3Data */
  public function setAwsS3DataSource(AwsS3Data $awsS3DataSource)
  {
    $this->awsS3DataSource = $awsS3DataSource;
  }
  /** @return AwsS3Data */
  public function getAwsS3DataSource()
  {
    return $this->awsS3DataSource;
  }
  /** @param AzureBlobStorageData */
  public function setAzureBlobStorageDataSource(AzureBlobStorageData $azureBlobStorageDataSource)
  {
    $this->azureBlobStorageDataSource = $azureBlobStorageDataSource;
  }
  /** @return AzureBlobStorageData */
  public function getAzureBlobStorageDataSource()
  {
    return $this->azureBlobStorageDataSource;
  }
  /** @param GcsData */
  public function setGcsDataSink(GcsData $gcsDataSink)
  {
    $this->gcsDataSink = $gcsDataSink;
  }
  /** @return GcsData */
  public function getGcsDataSink()
  {
    return $this->gcsDataSink;
  }
  /** @param GcsData */
  public function setGcsDataSource(GcsData $gcsDataSource)
  {
    $this->gcsDataSource = $gcsDataSource;
  }
  /** @return GcsData */
  public function getGcsDataSource()
  {
    return $this->gcsDataSource;
  }
  /** @param GcsData */
  public function setGcsIntermediateDataLocation(GcsData $gcsIntermediateDataLocation)
  {
    $this->gcsIntermediateDataLocation = $gcsIntermediateDataLocation;
  }
  /** @return GcsData */
  public function getGcsIntermediateDataLocation()
  {
    return $this->gcsIntermediateDataLocation;
  }
  /** @param HttpData */
  public function setHttpDataSource(HttpData $httpDataSource)
  {
    $this->httpDataSource = $httpDataSource;
  }
  /** @return HttpData */
  public function getHttpDataSource()
  {
    return $this->httpDataSource;
  }
  /** @param ObjectConditions */
  public function setObjectConditions(ObjectConditions $objectConditions)
  {
    $this->objectConditions = $objectConditions;
  }
  /** @return ObjectConditions */
  public function getObjectConditions()
  {
    return $this->objectConditions;
  }
  /** @param PosixFilesystem */
  public function setPosixDataSink(PosixFilesystem $posixDataSink)
  {
    $this->posixDataSink = $posixDataSink;
  }
  /** @return PosixFilesystem */
  public function getPosixDataSink()
  {
    return $this->posixDataSink;
  }
  /** @param PosixFilesystem */
  public function setPosixDataSource(PosixFilesystem $posixDataSource)
  {
    $this->posixDataSource = $posixDataSource;
  }
  /** @return PosixFilesystem */
  public function getPosixDataSource()
  {
    return $this->posixDataSource;
  }
  /** @param string */
  public function setSinkAgentPoolName($sinkAgentPoolName)
  {
    $this->sinkAgentPoolName = $sinkAgentPoolName;
  }
  /** @return string */
  public function getSinkAgentPoolName()
  {
    return $this->sinkAgentPoolName;
  }
  /** @param string */
  public function setSourceAgentPoolName($sourceAgentPoolName)
  {
    $this->sourceAgentPoolName = $sourceAgentPoolName;
  }
  /** @return string */
  public function getSourceAgentPoolName()
  {
    return $this->sourceAgentPoolName;
  }
  /** @param TransferManifest */
  public function setTransferManifest(TransferManifest $transferManifest)
  {
    $this->transferManifest = $transferManifest;
  }
  /** @return TransferManifest */
  public function getTransferManifest()
  {
    return $this->transferManifest;
  }
  /** @param TransferOptions */
  public function setTransferOptions(TransferOptions $transferOptions)
  {
    $this->transferOptions = $transferOptions;
  }
  /** @return TransferOptions */
  public function getTransferOptions()
  {
    return $this->transferOptions;
  }
}

class UpdateTransferJobRequest extends \Google\Model
{
  /** @var string */
  public $projectId;
  /** @var TransferJob */
  public $transferJob;
  /** @var string */
  public $updateTransferJobFieldMask;
  protected $transferJobType = TransferJob::class;
  protected $transferJobDataType = '';
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
  /** @param TransferJob */
  public function setTransferJob(TransferJob $transferJob)
  {
    $this->transferJob = $transferJob;
  }
  /** @return TransferJob */
  public function getTransferJob()
  {
    return $this->transferJob;
  }
  /** @param string */
  public function setUpdateTransferJobFieldMask($updateTransferJobFieldMask)
  {
    $this->updateTransferJobFieldMask = $updateTransferJobFieldMask;
  }
  /** @return string */
  public function getUpdateTransferJobFieldMask()
  {
    return $this->updateTransferJobFieldMask;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentPool::class, 'Google_Service_Storagetransfer_AgentPool');
class_alias(AwsAccessKey::class, 'Google_Service_Storagetransfer_AwsAccessKey');
class_alias(AwsS3CompatibleData::class, 'Google_Service_Storagetransfer_AwsS3CompatibleData');
class_alias(AwsS3Data::class, 'Google_Service_Storagetransfer_AwsS3Data');
class_alias(AzureBlobStorageData::class, 'Google_Service_Storagetransfer_AzureBlobStorageData');
class_alias(AzureCredentials::class, 'Google_Service_Storagetransfer_AzureCredentials');
class_alias(BandwidthLimit::class, 'Google_Service_Storagetransfer_BandwidthLimit');
class_alias(CancelOperationRequest::class, 'Google_Service_Storagetransfer_CancelOperationRequest');
class_alias(Date::class, 'Google_Service_Storagetransfer_Date');
class_alias(ErrorLogEntry::class, 'Google_Service_Storagetransfer_ErrorLogEntry');
class_alias(ErrorSummary::class, 'Google_Service_Storagetransfer_ErrorSummary');
class_alias(GcsData::class, 'Google_Service_Storagetransfer_GcsData');
class_alias(GoogleServiceAccount::class, 'Google_Service_Storagetransfer_GoogleServiceAccount');
class_alias(HttpData::class, 'Google_Service_Storagetransfer_HttpData');
class_alias(ListAgentPoolsResponse::class, 'Google_Service_Storagetransfer_ListAgentPoolsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Storagetransfer_ListOperationsResponse');
class_alias(ListTransferJobsResponse::class, 'Google_Service_Storagetransfer_ListTransferJobsResponse');
class_alias(LoggingConfig::class, 'Google_Service_Storagetransfer_LoggingConfig');
class_alias(MetadataOptions::class, 'Google_Service_Storagetransfer_MetadataOptions');
class_alias(NotificationConfig::class, 'Google_Service_Storagetransfer_NotificationConfig');
class_alias(ObjectConditions::class, 'Google_Service_Storagetransfer_ObjectConditions');
class_alias(Operation::class, 'Google_Service_Storagetransfer_Operation');
class_alias(PauseTransferOperationRequest::class, 'Google_Service_Storagetransfer_PauseTransferOperationRequest');
class_alias(PosixFilesystem::class, 'Google_Service_Storagetransfer_PosixFilesystem');
class_alias(ResumeTransferOperationRequest::class, 'Google_Service_Storagetransfer_ResumeTransferOperationRequest');
class_alias(RunTransferJobRequest::class, 'Google_Service_Storagetransfer_RunTransferJobRequest');
class_alias(S3CompatibleMetadata::class, 'Google_Service_Storagetransfer_S3CompatibleMetadata');
class_alias(Schedule::class, 'Google_Service_Storagetransfer_Schedule');
class_alias(Status::class, 'Google_Service_Storagetransfer_Status');
class_alias(StoragetransferEmpty::class, 'Google_Service_Storagetransfer_StoragetransferEmpty');
class_alias(TimeOfDay::class, 'Google_Service_Storagetransfer_TimeOfDay');
class_alias(TransferCounters::class, 'Google_Service_Storagetransfer_TransferCounters');
class_alias(TransferJob::class, 'Google_Service_Storagetransfer_TransferJob');
class_alias(TransferManifest::class, 'Google_Service_Storagetransfer_TransferManifest');
class_alias(TransferOperation::class, 'Google_Service_Storagetransfer_TransferOperation');
class_alias(TransferOptions::class, 'Google_Service_Storagetransfer_TransferOptions');
class_alias(TransferSpec::class, 'Google_Service_Storagetransfer_TransferSpec');
class_alias(UpdateTransferJobRequest::class, 'Google_Service_Storagetransfer_UpdateTransferJobRequest');
