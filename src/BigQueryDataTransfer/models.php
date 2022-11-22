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

namespace Google\Service\BigQueryDataTransfer;

class BigquerydatatransferEmpty extends \Google\Model
{
}

class CheckValidCredsRequest extends \Google\Model
{
}

class CheckValidCredsResponse extends \Google\Model
{
  /** @var bool */
  public $hasValidCreds;

  /** @param bool */
  public function setHasValidCreds($hasValidCreds)
  {
    $this->hasValidCreds = $hasValidCreds;
  }
  /** @return bool */
  public function getHasValidCreds()
  {
    return $this->hasValidCreds;
  }
}

class DataSource extends \Google\Collection
{
  /** @var string */
  public $authorizationType;
  /** @var string */
  public $clientId;
  /** @var string */
  public $dataRefreshType;
  /** @var string */
  public $dataSourceId;
  /** @var int */
  public $defaultDataRefreshWindowDays;
  /** @var string */
  public $defaultSchedule;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $helpUrl;
  /** @var bool */
  public $manualRunsDisabled;
  /** @var string */
  public $minimumScheduleInterval;
  /** @var string */
  public $name;
  /** @var DataSourceParameter[] */
  public $parameters;
  /** @var string[] */
  public $scopes;
  /** @var bool */
  public $supportsCustomSchedule;
  /** @var bool */
  public $supportsMultipleTransfers;
  /** @var string */
  public $transferType;
  /** @var int */
  public $updateDeadlineSeconds;
  protected $collection_key = 'scopes';
  protected $parametersType = DataSourceParameter::class;
  protected $parametersDataType = 'array';
  /** @param string */
  public function setAuthorizationType($authorizationType)
  {
    $this->authorizationType = $authorizationType;
  }
  /** @return string */
  public function getAuthorizationType()
  {
    return $this->authorizationType;
  }
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setDataRefreshType($dataRefreshType)
  {
    $this->dataRefreshType = $dataRefreshType;
  }
  /** @return string */
  public function getDataRefreshType()
  {
    return $this->dataRefreshType;
  }
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
  /** @param int */
  public function setDefaultDataRefreshWindowDays($defaultDataRefreshWindowDays)
  {
    $this->defaultDataRefreshWindowDays = $defaultDataRefreshWindowDays;
  }
  /** @return int */
  public function getDefaultDataRefreshWindowDays()
  {
    return $this->defaultDataRefreshWindowDays;
  }
  /** @param string */
  public function setDefaultSchedule($defaultSchedule)
  {
    $this->defaultSchedule = $defaultSchedule;
  }
  /** @return string */
  public function getDefaultSchedule()
  {
    return $this->defaultSchedule;
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
  public function setHelpUrl($helpUrl)
  {
    $this->helpUrl = $helpUrl;
  }
  /** @return string */
  public function getHelpUrl()
  {
    return $this->helpUrl;
  }
  /** @param bool */
  public function setManualRunsDisabled($manualRunsDisabled)
  {
    $this->manualRunsDisabled = $manualRunsDisabled;
  }
  /** @return bool */
  public function getManualRunsDisabled()
  {
    return $this->manualRunsDisabled;
  }
  /** @param string */
  public function setMinimumScheduleInterval($minimumScheduleInterval)
  {
    $this->minimumScheduleInterval = $minimumScheduleInterval;
  }
  /** @return string */
  public function getMinimumScheduleInterval()
  {
    return $this->minimumScheduleInterval;
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
  /** @param DataSourceParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return DataSourceParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string[] */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /** @return string[] */
  public function getScopes()
  {
    return $this->scopes;
  }
  /** @param bool */
  public function setSupportsCustomSchedule($supportsCustomSchedule)
  {
    $this->supportsCustomSchedule = $supportsCustomSchedule;
  }
  /** @return bool */
  public function getSupportsCustomSchedule()
  {
    return $this->supportsCustomSchedule;
  }
  /** @param bool */
  public function setSupportsMultipleTransfers($supportsMultipleTransfers)
  {
    $this->supportsMultipleTransfers = $supportsMultipleTransfers;
  }
  /** @return bool */
  public function getSupportsMultipleTransfers()
  {
    return $this->supportsMultipleTransfers;
  }
  /** @param string */
  public function setTransferType($transferType)
  {
    $this->transferType = $transferType;
  }
  /** @return string */
  public function getTransferType()
  {
    return $this->transferType;
  }
  /** @param int */
  public function setUpdateDeadlineSeconds($updateDeadlineSeconds)
  {
    $this->updateDeadlineSeconds = $updateDeadlineSeconds;
  }
  /** @return int */
  public function getUpdateDeadlineSeconds()
  {
    return $this->updateDeadlineSeconds;
  }
}

class DataSourceParameter extends \Google\Collection
{
  /** @var string[] */
  public $allowedValues;
  /** @var bool */
  public $deprecated;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var DataSourceParameter[] */
  public $fields;
  /** @var bool */
  public $immutable;
  public $maxValue;
  public $minValue;
  /** @var string */
  public $paramId;
  /** @var bool */
  public $recurse;
  /** @var bool */
  public $repeated;
  /** @var bool */
  public $required;
  /** @var string */
  public $type;
  /** @var string */
  public $validationDescription;
  /** @var string */
  public $validationHelpUrl;
  /** @var string */
  public $validationRegex;
  protected $collection_key = 'fields';
  protected $fieldsType = DataSourceParameter::class;
  protected $fieldsDataType = 'array';
  /** @param string[] */
  public function setAllowedValues($allowedValues)
  {
    $this->allowedValues = $allowedValues;
  }
  /** @return string[] */
  public function getAllowedValues()
  {
    return $this->allowedValues;
  }
  /** @param bool */
  public function setDeprecated($deprecated)
  {
    $this->deprecated = $deprecated;
  }
  /** @return bool */
  public function getDeprecated()
  {
    return $this->deprecated;
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
  /** @param DataSourceParameter[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return DataSourceParameter[] */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param bool */
  public function setImmutable($immutable)
  {
    $this->immutable = $immutable;
  }
  /** @return bool */
  public function getImmutable()
  {
    return $this->immutable;
  }
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  public function getMinValue()
  {
    return $this->minValue;
  }
  /** @param string */
  public function setParamId($paramId)
  {
    $this->paramId = $paramId;
  }
  /** @return string */
  public function getParamId()
  {
    return $this->paramId;
  }
  /** @param bool */
  public function setRecurse($recurse)
  {
    $this->recurse = $recurse;
  }
  /** @return bool */
  public function getRecurse()
  {
    return $this->recurse;
  }
  /** @param bool */
  public function setRepeated($repeated)
  {
    $this->repeated = $repeated;
  }
  /** @return bool */
  public function getRepeated()
  {
    return $this->repeated;
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
  public function setValidationDescription($validationDescription)
  {
    $this->validationDescription = $validationDescription;
  }
  /** @return string */
  public function getValidationDescription()
  {
    return $this->validationDescription;
  }
  /** @param string */
  public function setValidationHelpUrl($validationHelpUrl)
  {
    $this->validationHelpUrl = $validationHelpUrl;
  }
  /** @return string */
  public function getValidationHelpUrl()
  {
    return $this->validationHelpUrl;
  }
  /** @param string */
  public function setValidationRegex($validationRegex)
  {
    $this->validationRegex = $validationRegex;
  }
  /** @return string */
  public function getValidationRegex()
  {
    return $this->validationRegex;
  }
}

class EmailPreferences extends \Google\Model
{
  /** @var bool */
  public $enableFailureEmail;

  /** @param bool */
  public function setEnableFailureEmail($enableFailureEmail)
  {
    $this->enableFailureEmail = $enableFailureEmail;
  }
  /** @return bool */
  public function getEnableFailureEmail()
  {
    return $this->enableFailureEmail;
  }
}

class EnrollDataSourcesRequest extends \Google\Collection
{
  /** @var string[] */
  public $dataSourceIds;
  protected $collection_key = 'dataSourceIds';
  /** @param string[] */
  public function setDataSourceIds($dataSourceIds)
  {
    $this->dataSourceIds = $dataSourceIds;
  }
  /** @return string[] */
  public function getDataSourceIds()
  {
    return $this->dataSourceIds;
  }
}

class ListDataSourcesResponse extends \Google\Collection
{
  /** @var DataSource[] */
  public $dataSources;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dataSources';
  protected $dataSourcesType = DataSource::class;
  protected $dataSourcesDataType = 'array';
  /** @param DataSource[] */
  public function setDataSources($dataSources)
  {
    $this->dataSources = $dataSources;
  }
  /** @return DataSource[] */
  public function getDataSources()
  {
    return $this->dataSources;
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

class ListTransferConfigsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TransferConfig[] */
  public $transferConfigs;
  protected $collection_key = 'transferConfigs';
  protected $transferConfigsType = TransferConfig::class;
  protected $transferConfigsDataType = 'array';
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
  /** @param TransferConfig[] */
  public function setTransferConfigs($transferConfigs)
  {
    $this->transferConfigs = $transferConfigs;
  }
  /** @return TransferConfig[] */
  public function getTransferConfigs()
  {
    return $this->transferConfigs;
  }
}

class ListTransferLogsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TransferMessage[] */
  public $transferMessages;
  protected $collection_key = 'transferMessages';
  protected $transferMessagesType = TransferMessage::class;
  protected $transferMessagesDataType = 'array';
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
  /** @param TransferMessage[] */
  public function setTransferMessages($transferMessages)
  {
    $this->transferMessages = $transferMessages;
  }
  /** @return TransferMessage[] */
  public function getTransferMessages()
  {
    return $this->transferMessages;
  }
}

class ListTransferRunsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TransferRun[] */
  public $transferRuns;
  protected $collection_key = 'transferRuns';
  protected $transferRunsType = TransferRun::class;
  protected $transferRunsDataType = 'array';
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
  /** @param TransferRun[] */
  public function setTransferRuns($transferRuns)
  {
    $this->transferRuns = $transferRuns;
  }
  /** @return TransferRun[] */
  public function getTransferRuns()
  {
    return $this->transferRuns;
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

class ScheduleOptions extends \Google\Model
{
  /** @var bool */
  public $disableAutoScheduling;
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

  /** @param bool */
  public function setDisableAutoScheduling($disableAutoScheduling)
  {
    $this->disableAutoScheduling = $disableAutoScheduling;
  }
  /** @return bool */
  public function getDisableAutoScheduling()
  {
    return $this->disableAutoScheduling;
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

class ScheduleTransferRunsRequest extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

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

class ScheduleTransferRunsResponse extends \Google\Collection
{
  /** @var TransferRun[] */
  public $runs;
  protected $collection_key = 'runs';
  protected $runsType = TransferRun::class;
  protected $runsDataType = 'array';
  /** @param TransferRun[] */
  public function setRuns($runs)
  {
    $this->runs = $runs;
  }
  /** @return TransferRun[] */
  public function getRuns()
  {
    return $this->runs;
  }
}

class StartManualTransferRunsRequest extends \Google\Model
{
  /** @var string */
  public $requestedRunTime;
  /** @var TimeRange */
  public $requestedTimeRange;
  protected $requestedTimeRangeType = TimeRange::class;
  protected $requestedTimeRangeDataType = '';
  /** @param string */
  public function setRequestedRunTime($requestedRunTime)
  {
    $this->requestedRunTime = $requestedRunTime;
  }
  /** @return string */
  public function getRequestedRunTime()
  {
    return $this->requestedRunTime;
  }
  /** @param TimeRange */
  public function setRequestedTimeRange(TimeRange $requestedTimeRange)
  {
    $this->requestedTimeRange = $requestedTimeRange;
  }
  /** @return TimeRange */
  public function getRequestedTimeRange()
  {
    return $this->requestedTimeRange;
  }
}

class StartManualTransferRunsResponse extends \Google\Collection
{
  /** @var TransferRun[] */
  public $runs;
  protected $collection_key = 'runs';
  protected $runsType = TransferRun::class;
  protected $runsDataType = 'array';
  /** @param TransferRun[] */
  public function setRuns($runs)
  {
    $this->runs = $runs;
  }
  /** @return TransferRun[] */
  public function getRuns()
  {
    return $this->runs;
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

class TimeRange extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

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

class TransferConfig extends \Google\Model
{
  /** @var int */
  public $dataRefreshWindowDays;
  /** @var string */
  public $dataSourceId;
  /** @var string */
  public $datasetRegion;
  /** @var string */
  public $destinationDatasetId;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $displayName;
  /** @var EmailPreferences */
  public $emailPreferences;
  /** @var string */
  public $name;
  /** @var string */
  public $nextRunTime;
  /** @var string */
  public $notificationPubsubTopic;
  /** @var UserInfo */
  public $ownerInfo;
  /** @var array[] */
  public $params;
  /** @var string */
  public $schedule;
  /** @var ScheduleOptions */
  public $scheduleOptions;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $userId;
  protected $emailPreferencesType = EmailPreferences::class;
  protected $emailPreferencesDataType = '';
  protected $ownerInfoType = UserInfo::class;
  protected $ownerInfoDataType = '';
  protected $scheduleOptionsType = ScheduleOptions::class;
  protected $scheduleOptionsDataType = '';
  /** @param int */
  public function setDataRefreshWindowDays($dataRefreshWindowDays)
  {
    $this->dataRefreshWindowDays = $dataRefreshWindowDays;
  }
  /** @return int */
  public function getDataRefreshWindowDays()
  {
    return $this->dataRefreshWindowDays;
  }
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
  /** @param string */
  public function setDatasetRegion($datasetRegion)
  {
    $this->datasetRegion = $datasetRegion;
  }
  /** @return string */
  public function getDatasetRegion()
  {
    return $this->datasetRegion;
  }
  /** @param string */
  public function setDestinationDatasetId($destinationDatasetId)
  {
    $this->destinationDatasetId = $destinationDatasetId;
  }
  /** @return string */
  public function getDestinationDatasetId()
  {
    return $this->destinationDatasetId;
  }
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
  /** @param EmailPreferences */
  public function setEmailPreferences(EmailPreferences $emailPreferences)
  {
    $this->emailPreferences = $emailPreferences;
  }
  /** @return EmailPreferences */
  public function getEmailPreferences()
  {
    return $this->emailPreferences;
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
  public function setNextRunTime($nextRunTime)
  {
    $this->nextRunTime = $nextRunTime;
  }
  /** @return string */
  public function getNextRunTime()
  {
    return $this->nextRunTime;
  }
  /** @param string */
  public function setNotificationPubsubTopic($notificationPubsubTopic)
  {
    $this->notificationPubsubTopic = $notificationPubsubTopic;
  }
  /** @return string */
  public function getNotificationPubsubTopic()
  {
    return $this->notificationPubsubTopic;
  }
  /** @param UserInfo */
  public function setOwnerInfo(UserInfo $ownerInfo)
  {
    $this->ownerInfo = $ownerInfo;
  }
  /** @return UserInfo */
  public function getOwnerInfo()
  {
    return $this->ownerInfo;
  }
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
  /** @param ScheduleOptions */
  public function setScheduleOptions(ScheduleOptions $scheduleOptions)
  {
    $this->scheduleOptions = $scheduleOptions;
  }
  /** @return ScheduleOptions */
  public function getScheduleOptions()
  {
    return $this->scheduleOptions;
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

class TransferMessage extends \Google\Model
{
  /** @var string */
  public $messageText;
  /** @var string */
  public $messageTime;
  /** @var string */
  public $severity;

  /** @param string */
  public function setMessageText($messageText)
  {
    $this->messageText = $messageText;
  }
  /** @return string */
  public function getMessageText()
  {
    return $this->messageText;
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

class TransferRun extends \Google\Model
{
  /** @var string */
  public $dataSourceId;
  /** @var string */
  public $destinationDatasetId;
  /** @var EmailPreferences */
  public $emailPreferences;
  /** @var string */
  public $endTime;
  /** @var Status */
  public $errorStatus;
  /** @var string */
  public $name;
  /** @var string */
  public $notificationPubsubTopic;
  /** @var array[] */
  public $params;
  /** @var string */
  public $runTime;
  /** @var string */
  public $schedule;
  /** @var string */
  public $scheduleTime;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $userId;
  protected $emailPreferencesType = EmailPreferences::class;
  protected $emailPreferencesDataType = '';
  protected $errorStatusType = Status::class;
  protected $errorStatusDataType = '';
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
  /** @param string */
  public function setDestinationDatasetId($destinationDatasetId)
  {
    $this->destinationDatasetId = $destinationDatasetId;
  }
  /** @return string */
  public function getDestinationDatasetId()
  {
    return $this->destinationDatasetId;
  }
  /** @param EmailPreferences */
  public function setEmailPreferences(EmailPreferences $emailPreferences)
  {
    $this->emailPreferences = $emailPreferences;
  }
  /** @return EmailPreferences */
  public function getEmailPreferences()
  {
    return $this->emailPreferences;
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
  /** @param Status */
  public function setErrorStatus(Status $errorStatus)
  {
    $this->errorStatus = $errorStatus;
  }
  /** @return Status */
  public function getErrorStatus()
  {
    return $this->errorStatus;
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
  public function setNotificationPubsubTopic($notificationPubsubTopic)
  {
    $this->notificationPubsubTopic = $notificationPubsubTopic;
  }
  /** @return string */
  public function getNotificationPubsubTopic()
  {
    return $this->notificationPubsubTopic;
  }
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

class UserInfo extends \Google\Model
{
  /** @var string */
  public $email;

  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BigquerydatatransferEmpty::class, 'Google_Service_BigQueryDataTransfer_BigquerydatatransferEmpty');
class_alias(CheckValidCredsRequest::class, 'Google_Service_BigQueryDataTransfer_CheckValidCredsRequest');
class_alias(CheckValidCredsResponse::class, 'Google_Service_BigQueryDataTransfer_CheckValidCredsResponse');
class_alias(DataSource::class, 'Google_Service_BigQueryDataTransfer_DataSource');
class_alias(DataSourceParameter::class, 'Google_Service_BigQueryDataTransfer_DataSourceParameter');
class_alias(EmailPreferences::class, 'Google_Service_BigQueryDataTransfer_EmailPreferences');
class_alias(EnrollDataSourcesRequest::class, 'Google_Service_BigQueryDataTransfer_EnrollDataSourcesRequest');
class_alias(ListDataSourcesResponse::class, 'Google_Service_BigQueryDataTransfer_ListDataSourcesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_BigQueryDataTransfer_ListLocationsResponse');
class_alias(ListTransferConfigsResponse::class, 'Google_Service_BigQueryDataTransfer_ListTransferConfigsResponse');
class_alias(ListTransferLogsResponse::class, 'Google_Service_BigQueryDataTransfer_ListTransferLogsResponse');
class_alias(ListTransferRunsResponse::class, 'Google_Service_BigQueryDataTransfer_ListTransferRunsResponse');
class_alias(Location::class, 'Google_Service_BigQueryDataTransfer_Location');
class_alias(ScheduleOptions::class, 'Google_Service_BigQueryDataTransfer_ScheduleOptions');
class_alias(ScheduleTransferRunsRequest::class, 'Google_Service_BigQueryDataTransfer_ScheduleTransferRunsRequest');
class_alias(ScheduleTransferRunsResponse::class, 'Google_Service_BigQueryDataTransfer_ScheduleTransferRunsResponse');
class_alias(StartManualTransferRunsRequest::class, 'Google_Service_BigQueryDataTransfer_StartManualTransferRunsRequest');
class_alias(StartManualTransferRunsResponse::class, 'Google_Service_BigQueryDataTransfer_StartManualTransferRunsResponse');
class_alias(Status::class, 'Google_Service_BigQueryDataTransfer_Status');
class_alias(TimeRange::class, 'Google_Service_BigQueryDataTransfer_TimeRange');
class_alias(TransferConfig::class, 'Google_Service_BigQueryDataTransfer_TransferConfig');
class_alias(TransferMessage::class, 'Google_Service_BigQueryDataTransfer_TransferMessage');
class_alias(TransferRun::class, 'Google_Service_BigQueryDataTransfer_TransferRun');
class_alias(UserInfo::class, 'Google_Service_BigQueryDataTransfer_UserInfo');
