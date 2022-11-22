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

namespace Google\Service\Reports;

class Activities extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Activity[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Activity::class;
  protected $itemsDataType = 'array';
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
  /** @param Activity[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Activity[] */
  public function getItems()
  {
    return $this->items;
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

class Activity extends \Google\Collection
{
  /** @var ActivityActor */
  public $actor;
  /** @var string */
  public $etag;
  /** @var ActivityEvents[] */
  public $events;
  /** @var ActivityId */
  public $id;
  /** @var string */
  public $ipAddress;
  /** @var string */
  public $kind;
  /** @var string */
  public $ownerDomain;
  protected $collection_key = 'events';
  protected $actorType = ActivityActor::class;
  protected $actorDataType = '';
  protected $eventsType = ActivityEvents::class;
  protected $eventsDataType = 'array';
  protected $idType = ActivityId::class;
  protected $idDataType = '';
  /** @param ActivityActor */
  public function setActor(ActivityActor $actor)
  {
    $this->actor = $actor;
  }
  /** @return ActivityActor */
  public function getActor()
  {
    return $this->actor;
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
  /** @param ActivityEvents[] */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /** @return ActivityEvents[] */
  public function getEvents()
  {
    return $this->events;
  }
  /** @param ActivityId */
  public function setId(ActivityId $id)
  {
    $this->id = $id;
  }
  /** @return ActivityId */
  public function getId()
  {
    return $this->id;
  }
  /** @param string */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /** @return string */
  public function getIpAddress()
  {
    return $this->ipAddress;
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
  public function setOwnerDomain($ownerDomain)
  {
    $this->ownerDomain = $ownerDomain;
  }
  /** @return string */
  public function getOwnerDomain()
  {
    return $this->ownerDomain;
  }
}

class ActivityActor extends \Google\Model
{
  /** @var string */
  public $callerType;
  /** @var string */
  public $email;
  /** @var string */
  public $key;
  /** @var string */
  public $profileId;

  /** @param string */
  public function setCallerType($callerType)
  {
    $this->callerType = $callerType;
  }
  /** @return string */
  public function getCallerType()
  {
    return $this->callerType;
  }
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
  /** @param string */
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  /** @return string */
  public function getProfileId()
  {
    return $this->profileId;
  }
}

class ActivityEvents extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var ActivityEventsParameters[] */
  public $parameters;
  /** @var string */
  public $type;
  protected $collection_key = 'parameters';
  protected $parametersType = ActivityEventsParameters::class;
  protected $parametersDataType = 'array';
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
  /** @param ActivityEventsParameters[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return ActivityEventsParameters[] */
  public function getParameters()
  {
    return $this->parameters;
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

class ActivityEventsParameters extends \Google\Collection
{
  /** @var bool */
  public $boolValue;
  /** @var string */
  public $intValue;
  /** @var ActivityEventsParametersMessageValue */
  public $messageValue;
  /** @var string[] */
  public $multiIntValue;
  /** @var ActivityEventsParametersMultiMessageValue[] */
  public $multiMessageValue;
  /** @var string[] */
  public $multiValue;
  /** @var string */
  public $name;
  /** @var string */
  public $value;
  protected $collection_key = 'multiValue';
  protected $messageValueType = ActivityEventsParametersMessageValue::class;
  protected $messageValueDataType = '';
  protected $multiMessageValueType = ActivityEventsParametersMultiMessageValue::class;
  protected $multiMessageValueDataType = 'array';
  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param ActivityEventsParametersMessageValue */
  public function setMessageValue(ActivityEventsParametersMessageValue $messageValue)
  {
    $this->messageValue = $messageValue;
  }
  /** @return ActivityEventsParametersMessageValue */
  public function getMessageValue()
  {
    return $this->messageValue;
  }
  /** @param string[] */
  public function setMultiIntValue($multiIntValue)
  {
    $this->multiIntValue = $multiIntValue;
  }
  /** @return string[] */
  public function getMultiIntValue()
  {
    return $this->multiIntValue;
  }
  /** @param ActivityEventsParametersMultiMessageValue[] */
  public function setMultiMessageValue($multiMessageValue)
  {
    $this->multiMessageValue = $multiMessageValue;
  }
  /** @return ActivityEventsParametersMultiMessageValue[] */
  public function getMultiMessageValue()
  {
    return $this->multiMessageValue;
  }
  /** @param string[] */
  public function setMultiValue($multiValue)
  {
    $this->multiValue = $multiValue;
  }
  /** @return string[] */
  public function getMultiValue()
  {
    return $this->multiValue;
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

class ActivityEventsParametersMessageValue extends \Google\Collection
{
  /** @var NestedParameter[] */
  public $parameter;
  protected $collection_key = 'parameter';
  protected $parameterType = NestedParameter::class;
  protected $parameterDataType = 'array';
  /** @param NestedParameter[] */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return NestedParameter[] */
  public function getParameter()
  {
    return $this->parameter;
  }
}

class ActivityEventsParametersMultiMessageValue extends \Google\Collection
{
  /** @var NestedParameter[] */
  public $parameter;
  protected $collection_key = 'parameter';
  protected $parameterType = NestedParameter::class;
  protected $parameterDataType = 'array';
  /** @param NestedParameter[] */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return NestedParameter[] */
  public function getParameter()
  {
    return $this->parameter;
  }
}

class ActivityId extends \Google\Model
{
  /** @var string */
  public $applicationName;
  /** @var string */
  public $customerId;
  /** @var string */
  public $time;
  /** @var string */
  public $uniqueQualifier;

  /** @param string */
  public function setApplicationName($applicationName)
  {
    $this->applicationName = $applicationName;
  }
  /** @return string */
  public function getApplicationName()
  {
    return $this->applicationName;
  }
  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
  }
  /** @param string */
  public function setUniqueQualifier($uniqueQualifier)
  {
    $this->uniqueQualifier = $uniqueQualifier;
  }
  /** @return string */
  public function getUniqueQualifier()
  {
    return $this->uniqueQualifier;
  }
}

class Channel extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string */
  public $expiration;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $params;
  /** @var bool */
  public $payload;
  /** @var string */
  public $resourceId;
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $token;
  /** @var string */
  public $type;

  /** @param string */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /** @return string */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param string */
  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
  }
  /** @return string */
  public function getExpiration()
  {
    return $this->expiration;
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
  /** @param string[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return string[] */
  public function getParams()
  {
    return $this->params;
  }
  /** @param bool */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return bool */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param string */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return string */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param string */
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /** @return string */
  public function getResourceUri()
  {
    return $this->resourceUri;
  }
  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
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

class NestedParameter extends \Google\Collection
{
  /** @var bool */
  public $boolValue;
  /** @var string */
  public $intValue;
  /** @var bool[] */
  public $multiBoolValue;
  /** @var string[] */
  public $multiIntValue;
  /** @var string[] */
  public $multiValue;
  /** @var string */
  public $name;
  /** @var string */
  public $value;
  protected $collection_key = 'multiValue';
  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param bool[] */
  public function setMultiBoolValue($multiBoolValue)
  {
    $this->multiBoolValue = $multiBoolValue;
  }
  /** @return bool[] */
  public function getMultiBoolValue()
  {
    return $this->multiBoolValue;
  }
  /** @param string[] */
  public function setMultiIntValue($multiIntValue)
  {
    $this->multiIntValue = $multiIntValue;
  }
  /** @return string[] */
  public function getMultiIntValue()
  {
    return $this->multiIntValue;
  }
  /** @param string[] */
  public function setMultiValue($multiValue)
  {
    $this->multiValue = $multiValue;
  }
  /** @return string[] */
  public function getMultiValue()
  {
    return $this->multiValue;
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

class UsageReport extends \Google\Collection
{
  /** @var string */
  public $date;
  /** @var UsageReportEntity */
  public $entity;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var UsageReportParameters[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $entityType = UsageReportEntity::class;
  protected $entityDataType = '';
  protected $parametersType = UsageReportParameters::class;
  protected $parametersDataType = 'array';
  /** @param string */
  public function setDate($date)
  {
    $this->date = $date;
  }
  /** @return string */
  public function getDate()
  {
    return $this->date;
  }
  /** @param UsageReportEntity */
  public function setEntity(UsageReportEntity $entity)
  {
    $this->entity = $entity;
  }
  /** @return UsageReportEntity */
  public function getEntity()
  {
    return $this->entity;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param UsageReportParameters[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return UsageReportParameters[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class UsageReportEntity extends \Google\Model
{
  /** @var string */
  public $customerId;
  /** @var string */
  public $entityId;
  /** @var string */
  public $profileId;
  /** @var string */
  public $type;
  /** @var string */
  public $userEmail;

  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param string */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /** @param string */
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  /** @return string */
  public function getProfileId()
  {
    return $this->profileId;
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

class UsageReportParameters extends \Google\Collection
{
  /** @var bool */
  public $boolValue;
  /** @var string */
  public $datetimeValue;
  /** @var string */
  public $intValue;
  /** @var array[] */
  public $msgValue;
  /** @var string */
  public $name;
  /** @var string */
  public $stringValue;
  protected $collection_key = 'msgValue';
  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /** @param string */
  public function setDatetimeValue($datetimeValue)
  {
    $this->datetimeValue = $datetimeValue;
  }
  /** @return string */
  public function getDatetimeValue()
  {
    return $this->datetimeValue;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param array[] */
  public function setMsgValue($msgValue)
  {
    $this->msgValue = $msgValue;
  }
  /** @return array[] */
  public function getMsgValue()
  {
    return $this->msgValue;
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
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class UsageReports extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var UsageReport[] */
  public $usageReports;
  /** @var UsageReportsWarnings[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $usageReportsType = UsageReport::class;
  protected $usageReportsDataType = 'array';
  protected $warningsType = UsageReportsWarnings::class;
  protected $warningsDataType = 'array';
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
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param UsageReport[] */
  public function setUsageReports($usageReports)
  {
    $this->usageReports = $usageReports;
  }
  /** @return UsageReport[] */
  public function getUsageReports()
  {
    return $this->usageReports;
  }
  /** @param UsageReportsWarnings[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return UsageReportsWarnings[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class UsageReportsWarnings extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var UsageReportsWarningsData[] */
  public $data;
  /** @var string */
  public $message;
  protected $collection_key = 'data';
  protected $dataType = UsageReportsWarningsData::class;
  protected $dataDataType = 'array';
  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
  /** @param UsageReportsWarningsData[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return UsageReportsWarningsData[] */
  public function getData()
  {
    return $this->data;
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

class UsageReportsWarningsData extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Activities::class, 'Google_Service_Reports_Activities');
class_alias(Activity::class, 'Google_Service_Reports_Activity');
class_alias(ActivityActor::class, 'Google_Service_Reports_ActivityActor');
class_alias(ActivityEvents::class, 'Google_Service_Reports_ActivityEvents');
class_alias(ActivityEventsParameters::class, 'Google_Service_Reports_ActivityEventsParameters');
class_alias(ActivityEventsParametersMessageValue::class, 'Google_Service_Reports_ActivityEventsParametersMessageValue');
class_alias(ActivityEventsParametersMultiMessageValue::class, 'Google_Service_Reports_ActivityEventsParametersMultiMessageValue');
class_alias(ActivityId::class, 'Google_Service_Reports_ActivityId');
class_alias(Channel::class, 'Google_Service_Reports_Channel');
class_alias(NestedParameter::class, 'Google_Service_Reports_NestedParameter');
class_alias(UsageReport::class, 'Google_Service_Reports_UsageReport');
class_alias(UsageReportEntity::class, 'Google_Service_Reports_UsageReportEntity');
class_alias(UsageReportParameters::class, 'Google_Service_Reports_UsageReportParameters');
class_alias(UsageReports::class, 'Google_Service_Reports_UsageReports');
class_alias(UsageReportsWarnings::class, 'Google_Service_Reports_UsageReportsWarnings');
class_alias(UsageReportsWarningsData::class, 'Google_Service_Reports_UsageReportsWarningsData');
