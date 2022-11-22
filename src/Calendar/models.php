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

namespace Google\Service\Calendar;

class Acl extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var AclRule[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $nextSyncToken;
  protected $collection_key = 'items';
  protected $itemsType = AclRule::class;
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
  /** @param AclRule[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return AclRule[] */
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
  /** @param string */
  public function setNextSyncToken($nextSyncToken)
  {
    $this->nextSyncToken = $nextSyncToken;
  }
  /** @return string */
  public function getNextSyncToken()
  {
    return $this->nextSyncToken;
  }
}

class AclRule extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $role;
  /** @var AclRuleScope */
  public $scope;
  protected $scopeType = AclRuleScope::class;
  protected $scopeDataType = '';
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
  /** @param AclRuleScope */
  public function setScope(AclRuleScope $scope)
  {
    $this->scope = $scope;
  }
  /** @return AclRuleScope */
  public function getScope()
  {
    return $this->scope;
  }
}

class AclRuleScope extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $value;

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

class Calendar extends \Google\Model
{
  /** @var ConferenceProperties */
  public $conferenceProperties;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $location;
  /** @var string */
  public $summary;
  /** @var string */
  public $timeZone;
  protected $conferencePropertiesType = ConferenceProperties::class;
  protected $conferencePropertiesDataType = '';
  /** @param ConferenceProperties */
  public function setConferenceProperties(ConferenceProperties $conferenceProperties)
  {
    $this->conferenceProperties = $conferenceProperties;
  }
  /** @return ConferenceProperties */
  public function getConferenceProperties()
  {
    return $this->conferenceProperties;
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
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  /** @return string */
  public function getSummary()
  {
    return $this->summary;
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
}

class CalendarList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var CalendarListEntry[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $nextSyncToken;
  protected $collection_key = 'items';
  protected $itemsType = CalendarListEntry::class;
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
  /** @param CalendarListEntry[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return CalendarListEntry[] */
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
  /** @param string */
  public function setNextSyncToken($nextSyncToken)
  {
    $this->nextSyncToken = $nextSyncToken;
  }
  /** @return string */
  public function getNextSyncToken()
  {
    return $this->nextSyncToken;
  }
}

class CalendarListEntry extends \Google\Collection
{
  /** @var string */
  public $accessRole;
  /** @var string */
  public $backgroundColor;
  /** @var string */
  public $colorId;
  /** @var ConferenceProperties */
  public $conferenceProperties;
  /** @var EventReminder[] */
  public $defaultReminders;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $foregroundColor;
  /** @var bool */
  public $hidden;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $location;
  /** @var CalendarListEntryNotificationSettings */
  public $notificationSettings;
  /** @var bool */
  public $primary;
  /** @var bool */
  public $selected;
  /** @var string */
  public $summary;
  /** @var string */
  public $summaryOverride;
  /** @var string */
  public $timeZone;
  protected $collection_key = 'defaultReminders';
  protected $conferencePropertiesType = ConferenceProperties::class;
  protected $conferencePropertiesDataType = '';
  protected $defaultRemindersType = EventReminder::class;
  protected $defaultRemindersDataType = 'array';
  protected $notificationSettingsType = CalendarListEntryNotificationSettings::class;
  protected $notificationSettingsDataType = '';
  /** @param string */
  public function setAccessRole($accessRole)
  {
    $this->accessRole = $accessRole;
  }
  /** @return string */
  public function getAccessRole()
  {
    return $this->accessRole;
  }
  /** @param string */
  public function setBackgroundColor($backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return string */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param string */
  public function setColorId($colorId)
  {
    $this->colorId = $colorId;
  }
  /** @return string */
  public function getColorId()
  {
    return $this->colorId;
  }
  /** @param ConferenceProperties */
  public function setConferenceProperties(ConferenceProperties $conferenceProperties)
  {
    $this->conferenceProperties = $conferenceProperties;
  }
  /** @return ConferenceProperties */
  public function getConferenceProperties()
  {
    return $this->conferenceProperties;
  }
  /** @param EventReminder[] */
  public function setDefaultReminders($defaultReminders)
  {
    $this->defaultReminders = $defaultReminders;
  }
  /** @return EventReminder[] */
  public function getDefaultReminders()
  {
    return $this->defaultReminders;
  }
  /** @param bool */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return bool */
  public function getDeleted()
  {
    return $this->deleted;
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
  public function setForegroundColor($foregroundColor)
  {
    $this->foregroundColor = $foregroundColor;
  }
  /** @return string */
  public function getForegroundColor()
  {
    return $this->foregroundColor;
  }
  /** @param bool */
  public function setHidden($hidden)
  {
    $this->hidden = $hidden;
  }
  /** @return bool */
  public function getHidden()
  {
    return $this->hidden;
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
  /** @param CalendarListEntryNotificationSettings */
  public function setNotificationSettings(CalendarListEntryNotificationSettings $notificationSettings)
  {
    $this->notificationSettings = $notificationSettings;
  }
  /** @return CalendarListEntryNotificationSettings */
  public function getNotificationSettings()
  {
    return $this->notificationSettings;
  }
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param bool */
  public function setSelected($selected)
  {
    $this->selected = $selected;
  }
  /** @return bool */
  public function getSelected()
  {
    return $this->selected;
  }
  /** @param string */
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  /** @return string */
  public function getSummary()
  {
    return $this->summary;
  }
  /** @param string */
  public function setSummaryOverride($summaryOverride)
  {
    $this->summaryOverride = $summaryOverride;
  }
  /** @return string */
  public function getSummaryOverride()
  {
    return $this->summaryOverride;
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
}

class CalendarListEntryNotificationSettings extends \Google\Collection
{
  /** @var CalendarNotification[] */
  public $notifications;
  protected $collection_key = 'notifications';
  protected $notificationsType = CalendarNotification::class;
  protected $notificationsDataType = 'array';
  /** @param CalendarNotification[] */
  public function setNotifications($notifications)
  {
    $this->notifications = $notifications;
  }
  /** @return CalendarNotification[] */
  public function getNotifications()
  {
    return $this->notifications;
  }
}

class CalendarNotification extends \Google\Model
{
  /** @var string */
  public $method;
  /** @var string */
  public $type;

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

class ColorDefinition extends \Google\Model
{
  /** @var string */
  public $background;
  /** @var string */
  public $foreground;

  /** @param string */
  public function setBackground($background)
  {
    $this->background = $background;
  }
  /** @return string */
  public function getBackground()
  {
    return $this->background;
  }
  /** @param string */
  public function setForeground($foreground)
  {
    $this->foreground = $foreground;
  }
  /** @return string */
  public function getForeground()
  {
    return $this->foreground;
  }
}

class Colors extends \Google\Model
{
  /** @var ColorDefinition[] */
  public $calendar;
  /** @var ColorDefinition[] */
  public $event;
  /** @var string */
  public $kind;
  /** @var string */
  public $updated;
  protected $calendarType = ColorDefinition::class;
  protected $calendarDataType = 'map';
  protected $eventType = ColorDefinition::class;
  protected $eventDataType = 'map';
  /** @param ColorDefinition[] */
  public function setCalendar($calendar)
  {
    $this->calendar = $calendar;
  }
  /** @return ColorDefinition[] */
  public function getCalendar()
  {
    return $this->calendar;
  }
  /** @param ColorDefinition[] */
  public function setEvent($event)
  {
    $this->event = $event;
  }
  /** @return ColorDefinition[] */
  public function getEvent()
  {
    return $this->event;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class ConferenceData extends \Google\Collection
{
  /** @var string */
  public $conferenceId;
  /** @var ConferenceSolution */
  public $conferenceSolution;
  /** @var CreateConferenceRequest */
  public $createRequest;
  /** @var EntryPoint[] */
  public $entryPoints;
  /** @var string */
  public $notes;
  /** @var ConferenceParameters */
  public $parameters;
  /** @var string */
  public $signature;
  protected $collection_key = 'entryPoints';
  protected $conferenceSolutionType = ConferenceSolution::class;
  protected $conferenceSolutionDataType = '';
  protected $createRequestType = CreateConferenceRequest::class;
  protected $createRequestDataType = '';
  protected $entryPointsType = EntryPoint::class;
  protected $entryPointsDataType = 'array';
  protected $parametersType = ConferenceParameters::class;
  protected $parametersDataType = '';
  /** @param string */
  public function setConferenceId($conferenceId)
  {
    $this->conferenceId = $conferenceId;
  }
  /** @return string */
  public function getConferenceId()
  {
    return $this->conferenceId;
  }
  /** @param ConferenceSolution */
  public function setConferenceSolution(ConferenceSolution $conferenceSolution)
  {
    $this->conferenceSolution = $conferenceSolution;
  }
  /** @return ConferenceSolution */
  public function getConferenceSolution()
  {
    return $this->conferenceSolution;
  }
  /** @param CreateConferenceRequest */
  public function setCreateRequest(CreateConferenceRequest $createRequest)
  {
    $this->createRequest = $createRequest;
  }
  /** @return CreateConferenceRequest */
  public function getCreateRequest()
  {
    return $this->createRequest;
  }
  /** @param EntryPoint[] */
  public function setEntryPoints($entryPoints)
  {
    $this->entryPoints = $entryPoints;
  }
  /** @return EntryPoint[] */
  public function getEntryPoints()
  {
    return $this->entryPoints;
  }
  /** @param string */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param ConferenceParameters */
  public function setParameters(ConferenceParameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return ConferenceParameters */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setSignature($signature)
  {
    $this->signature = $signature;
  }
  /** @return string */
  public function getSignature()
  {
    return $this->signature;
  }
}

class ConferenceParameters extends \Google\Model
{
  /** @var ConferenceParametersAddOnParameters */
  public $addOnParameters;
  protected $addOnParametersType = ConferenceParametersAddOnParameters::class;
  protected $addOnParametersDataType = '';
  /** @param ConferenceParametersAddOnParameters */
  public function setAddOnParameters(ConferenceParametersAddOnParameters $addOnParameters)
  {
    $this->addOnParameters = $addOnParameters;
  }
  /** @return ConferenceParametersAddOnParameters */
  public function getAddOnParameters()
  {
    return $this->addOnParameters;
  }
}

class ConferenceParametersAddOnParameters extends \Google\Model
{
  /** @var string[] */
  public $parameters;

  /** @param string[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return string[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class ConferenceProperties extends \Google\Collection
{
  /** @var string[] */
  public $allowedConferenceSolutionTypes;
  protected $collection_key = 'allowedConferenceSolutionTypes';
  /** @param string[] */
  public function setAllowedConferenceSolutionTypes($allowedConferenceSolutionTypes)
  {
    $this->allowedConferenceSolutionTypes = $allowedConferenceSolutionTypes;
  }
  /** @return string[] */
  public function getAllowedConferenceSolutionTypes()
  {
    return $this->allowedConferenceSolutionTypes;
  }
}

class ConferenceRequestStatus extends \Google\Model
{
  /** @var string */
  public $statusCode;

  /** @param string */
  public function setStatusCode($statusCode)
  {
    $this->statusCode = $statusCode;
  }
  /** @return string */
  public function getStatusCode()
  {
    return $this->statusCode;
  }
}

class ConferenceSolution extends \Google\Model
{
  /** @var string */
  public $iconUri;
  /** @var ConferenceSolutionKey */
  public $key;
  /** @var string */
  public $name;
  protected $keyType = ConferenceSolutionKey::class;
  protected $keyDataType = '';
  /** @param string */
  public function setIconUri($iconUri)
  {
    $this->iconUri = $iconUri;
  }
  /** @return string */
  public function getIconUri()
  {
    return $this->iconUri;
  }
  /** @param ConferenceSolutionKey */
  public function setKey(ConferenceSolutionKey $key)
  {
    $this->key = $key;
  }
  /** @return ConferenceSolutionKey */
  public function getKey()
  {
    return $this->key;
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

class ConferenceSolutionKey extends \Google\Model
{
  /** @var string */
  public $type;

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

class CreateConferenceRequest extends \Google\Model
{
  /** @var ConferenceSolutionKey */
  public $conferenceSolutionKey;
  /** @var string */
  public $requestId;
  /** @var ConferenceRequestStatus */
  public $status;
  protected $conferenceSolutionKeyType = ConferenceSolutionKey::class;
  protected $conferenceSolutionKeyDataType = '';
  protected $statusType = ConferenceRequestStatus::class;
  protected $statusDataType = '';
  /** @param ConferenceSolutionKey */
  public function setConferenceSolutionKey(ConferenceSolutionKey $conferenceSolutionKey)
  {
    $this->conferenceSolutionKey = $conferenceSolutionKey;
  }
  /** @return ConferenceSolutionKey */
  public function getConferenceSolutionKey()
  {
    return $this->conferenceSolutionKey;
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
  /** @param ConferenceRequestStatus */
  public function setStatus(ConferenceRequestStatus $status)
  {
    $this->status = $status;
  }
  /** @return ConferenceRequestStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class EntryPoint extends \Google\Collection
{
  /** @var string */
  public $accessCode;
  /** @var string[] */
  public $entryPointFeatures;
  /** @var string */
  public $entryPointType;
  /** @var string */
  public $label;
  /** @var string */
  public $meetingCode;
  /** @var string */
  public $passcode;
  /** @var string */
  public $password;
  /** @var string */
  public $pin;
  /** @var string */
  public $regionCode;
  /** @var string */
  public $uri;
  protected $collection_key = 'entryPointFeatures';
  /** @param string */
  public function setAccessCode($accessCode)
  {
    $this->accessCode = $accessCode;
  }
  /** @return string */
  public function getAccessCode()
  {
    return $this->accessCode;
  }
  /** @param string[] */
  public function setEntryPointFeatures($entryPointFeatures)
  {
    $this->entryPointFeatures = $entryPointFeatures;
  }
  /** @return string[] */
  public function getEntryPointFeatures()
  {
    return $this->entryPointFeatures;
  }
  /** @param string */
  public function setEntryPointType($entryPointType)
  {
    $this->entryPointType = $entryPointType;
  }
  /** @return string */
  public function getEntryPointType()
  {
    return $this->entryPointType;
  }
  /** @param string */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
  }
  /** @param string */
  public function setMeetingCode($meetingCode)
  {
    $this->meetingCode = $meetingCode;
  }
  /** @return string */
  public function getMeetingCode()
  {
    return $this->meetingCode;
  }
  /** @param string */
  public function setPasscode($passcode)
  {
    $this->passcode = $passcode;
  }
  /** @return string */
  public function getPasscode()
  {
    return $this->passcode;
  }
  /** @param string */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /** @return string */
  public function getPassword()
  {
    return $this->password;
  }
  /** @param string */
  public function setPin($pin)
  {
    $this->pin = $pin;
  }
  /** @return string */
  public function getPin()
  {
    return $this->pin;
  }
  /** @param string */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /** @return string */
  public function getRegionCode()
  {
    return $this->regionCode;
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

class Error extends \Google\Model
{
  /** @var string */
  public $domain;
  /** @var string */
  public $reason;

  /** @param string */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /** @return string */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param string */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
  }
}

class Event extends \Google\Collection
{
  /** @var bool */
  public $anyoneCanAddSelf;
  /** @var EventAttachment[] */
  public $attachments;
  /** @var EventAttendee[] */
  public $attendees;
  /** @var bool */
  public $attendeesOmitted;
  /** @var string */
  public $colorId;
  /** @var ConferenceData */
  public $conferenceData;
  /** @var string */
  public $created;
  /** @var EventCreator */
  public $creator;
  /** @var string */
  public $description;
  /** @var EventDateTime */
  public $end;
  /** @var bool */
  public $endTimeUnspecified;
  /** @var string */
  public $etag;
  /** @var string */
  public $eventType;
  /** @var EventExtendedProperties */
  public $extendedProperties;
  /** @var EventGadget */
  public $gadget;
  /** @var bool */
  public $guestsCanInviteOthers;
  /** @var bool */
  public $guestsCanModify;
  /** @var bool */
  public $guestsCanSeeOtherGuests;
  /** @var string */
  public $hangoutLink;
  /** @var string */
  public $htmlLink;
  /** @var string */
  public $iCalUID;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $location;
  /** @var bool */
  public $locked;
  /** @var EventOrganizer */
  public $organizer;
  /** @var EventDateTime */
  public $originalStartTime;
  /** @var bool */
  public $privateCopy;
  /** @var string[] */
  public $recurrence;
  /** @var string */
  public $recurringEventId;
  /** @var EventReminders */
  public $reminders;
  /** @var int */
  public $sequence;
  /** @var EventSource */
  public $source;
  /** @var EventDateTime */
  public $start;
  /** @var string */
  public $status;
  /** @var string */
  public $summary;
  /** @var string */
  public $transparency;
  /** @var string */
  public $updated;
  /** @var string */
  public $visibility;
  protected $collection_key = 'recurrence';
  protected $attachmentsType = EventAttachment::class;
  protected $attachmentsDataType = 'array';
  protected $attendeesType = EventAttendee::class;
  protected $attendeesDataType = 'array';
  protected $conferenceDataType = ConferenceData::class;
  protected $conferenceDataDataType = '';
  protected $creatorType = EventCreator::class;
  protected $creatorDataType = '';
  protected $endType = EventDateTime::class;
  protected $endDataType = '';
  protected $extendedPropertiesType = EventExtendedProperties::class;
  protected $extendedPropertiesDataType = '';
  protected $gadgetType = EventGadget::class;
  protected $gadgetDataType = '';
  protected $organizerType = EventOrganizer::class;
  protected $organizerDataType = '';
  protected $originalStartTimeType = EventDateTime::class;
  protected $originalStartTimeDataType = '';
  protected $remindersType = EventReminders::class;
  protected $remindersDataType = '';
  protected $sourceType = EventSource::class;
  protected $sourceDataType = '';
  protected $startType = EventDateTime::class;
  protected $startDataType = '';
  /** @param bool */
  public function setAnyoneCanAddSelf($anyoneCanAddSelf)
  {
    $this->anyoneCanAddSelf = $anyoneCanAddSelf;
  }
  /** @return bool */
  public function getAnyoneCanAddSelf()
  {
    return $this->anyoneCanAddSelf;
  }
  /** @param EventAttachment[] */
  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }
  /** @return EventAttachment[] */
  public function getAttachments()
  {
    return $this->attachments;
  }
  /** @param EventAttendee[] */
  public function setAttendees($attendees)
  {
    $this->attendees = $attendees;
  }
  /** @return EventAttendee[] */
  public function getAttendees()
  {
    return $this->attendees;
  }
  /** @param bool */
  public function setAttendeesOmitted($attendeesOmitted)
  {
    $this->attendeesOmitted = $attendeesOmitted;
  }
  /** @return bool */
  public function getAttendeesOmitted()
  {
    return $this->attendeesOmitted;
  }
  /** @param string */
  public function setColorId($colorId)
  {
    $this->colorId = $colorId;
  }
  /** @return string */
  public function getColorId()
  {
    return $this->colorId;
  }
  /** @param ConferenceData */
  public function setConferenceData(ConferenceData $conferenceData)
  {
    $this->conferenceData = $conferenceData;
  }
  /** @return ConferenceData */
  public function getConferenceData()
  {
    return $this->conferenceData;
  }
  /** @param string */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /** @return string */
  public function getCreated()
  {
    return $this->created;
  }
  /** @param EventCreator */
  public function setCreator(EventCreator $creator)
  {
    $this->creator = $creator;
  }
  /** @return EventCreator */
  public function getCreator()
  {
    return $this->creator;
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
  /** @param EventDateTime */
  public function setEnd(EventDateTime $end)
  {
    $this->end = $end;
  }
  /** @return EventDateTime */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param bool */
  public function setEndTimeUnspecified($endTimeUnspecified)
  {
    $this->endTimeUnspecified = $endTimeUnspecified;
  }
  /** @return bool */
  public function getEndTimeUnspecified()
  {
    return $this->endTimeUnspecified;
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
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string */
  public function getEventType()
  {
    return $this->eventType;
  }
  /** @param EventExtendedProperties */
  public function setExtendedProperties(EventExtendedProperties $extendedProperties)
  {
    $this->extendedProperties = $extendedProperties;
  }
  /** @return EventExtendedProperties */
  public function getExtendedProperties()
  {
    return $this->extendedProperties;
  }
  /** @param EventGadget */
  public function setGadget(EventGadget $gadget)
  {
    $this->gadget = $gadget;
  }
  /** @return EventGadget */
  public function getGadget()
  {
    return $this->gadget;
  }
  /** @param bool */
  public function setGuestsCanInviteOthers($guestsCanInviteOthers)
  {
    $this->guestsCanInviteOthers = $guestsCanInviteOthers;
  }
  /** @return bool */
  public function getGuestsCanInviteOthers()
  {
    return $this->guestsCanInviteOthers;
  }
  /** @param bool */
  public function setGuestsCanModify($guestsCanModify)
  {
    $this->guestsCanModify = $guestsCanModify;
  }
  /** @return bool */
  public function getGuestsCanModify()
  {
    return $this->guestsCanModify;
  }
  /** @param bool */
  public function setGuestsCanSeeOtherGuests($guestsCanSeeOtherGuests)
  {
    $this->guestsCanSeeOtherGuests = $guestsCanSeeOtherGuests;
  }
  /** @return bool */
  public function getGuestsCanSeeOtherGuests()
  {
    return $this->guestsCanSeeOtherGuests;
  }
  /** @param string */
  public function setHangoutLink($hangoutLink)
  {
    $this->hangoutLink = $hangoutLink;
  }
  /** @return string */
  public function getHangoutLink()
  {
    return $this->hangoutLink;
  }
  /** @param string */
  public function setHtmlLink($htmlLink)
  {
    $this->htmlLink = $htmlLink;
  }
  /** @return string */
  public function getHtmlLink()
  {
    return $this->htmlLink;
  }
  /** @param string */
  public function setICalUID($iCalUID)
  {
    $this->iCalUID = $iCalUID;
  }
  /** @return string */
  public function getICalUID()
  {
    return $this->iCalUID;
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
  /** @param bool */
  public function setLocked($locked)
  {
    $this->locked = $locked;
  }
  /** @return bool */
  public function getLocked()
  {
    return $this->locked;
  }
  /** @param EventOrganizer */
  public function setOrganizer(EventOrganizer $organizer)
  {
    $this->organizer = $organizer;
  }
  /** @return EventOrganizer */
  public function getOrganizer()
  {
    return $this->organizer;
  }
  /** @param EventDateTime */
  public function setOriginalStartTime(EventDateTime $originalStartTime)
  {
    $this->originalStartTime = $originalStartTime;
  }
  /** @return EventDateTime */
  public function getOriginalStartTime()
  {
    return $this->originalStartTime;
  }
  /** @param bool */
  public function setPrivateCopy($privateCopy)
  {
    $this->privateCopy = $privateCopy;
  }
  /** @return bool */
  public function getPrivateCopy()
  {
    return $this->privateCopy;
  }
  /** @param string[] */
  public function setRecurrence($recurrence)
  {
    $this->recurrence = $recurrence;
  }
  /** @return string[] */
  public function getRecurrence()
  {
    return $this->recurrence;
  }
  /** @param string */
  public function setRecurringEventId($recurringEventId)
  {
    $this->recurringEventId = $recurringEventId;
  }
  /** @return string */
  public function getRecurringEventId()
  {
    return $this->recurringEventId;
  }
  /** @param EventReminders */
  public function setReminders(EventReminders $reminders)
  {
    $this->reminders = $reminders;
  }
  /** @return EventReminders */
  public function getReminders()
  {
    return $this->reminders;
  }
  /** @param int */
  public function setSequence($sequence)
  {
    $this->sequence = $sequence;
  }
  /** @return int */
  public function getSequence()
  {
    return $this->sequence;
  }
  /** @param EventSource */
  public function setSource(EventSource $source)
  {
    $this->source = $source;
  }
  /** @return EventSource */
  public function getSource()
  {
    return $this->source;
  }
  /** @param EventDateTime */
  public function setStart(EventDateTime $start)
  {
    $this->start = $start;
  }
  /** @return EventDateTime */
  public function getStart()
  {
    return $this->start;
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
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  /** @return string */
  public function getSummary()
  {
    return $this->summary;
  }
  /** @param string */
  public function setTransparency($transparency)
  {
    $this->transparency = $transparency;
  }
  /** @return string */
  public function getTransparency()
  {
    return $this->transparency;
  }
  /** @param string */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param string */
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  /** @return string */
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class EventAttachment extends \Google\Model
{
  /** @var string */
  public $fileId;
  /** @var string */
  public $fileUrl;
  /** @var string */
  public $iconLink;
  /** @var string */
  public $mimeType;
  /** @var string */
  public $title;

  /** @param string */
  public function setFileId($fileId)
  {
    $this->fileId = $fileId;
  }
  /** @return string */
  public function getFileId()
  {
    return $this->fileId;
  }
  /** @param string */
  public function setFileUrl($fileUrl)
  {
    $this->fileUrl = $fileUrl;
  }
  /** @return string */
  public function getFileUrl()
  {
    return $this->fileUrl;
  }
  /** @param string */
  public function setIconLink($iconLink)
  {
    $this->iconLink = $iconLink;
  }
  /** @return string */
  public function getIconLink()
  {
    return $this->iconLink;
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

class EventAttendee extends \Google\Model
{
  /** @var int */
  public $additionalGuests;
  /** @var string */
  public $comment;
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var string */
  public $id;
  /** @var bool */
  public $optional;
  /** @var bool */
  public $organizer;
  /** @var bool */
  public $resource;
  /** @var string */
  public $responseStatus;
  /** @var bool */
  public $self;

  /** @param int */
  public function setAdditionalGuests($additionalGuests)
  {
    $this->additionalGuests = $additionalGuests;
  }
  /** @return int */
  public function getAdditionalGuests()
  {
    return $this->additionalGuests;
  }
  /** @param string */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /** @return string */
  public function getComment()
  {
    return $this->comment;
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param bool */
  public function setOptional($optional)
  {
    $this->optional = $optional;
  }
  /** @return bool */
  public function getOptional()
  {
    return $this->optional;
  }
  /** @param bool */
  public function setOrganizer($organizer)
  {
    $this->organizer = $organizer;
  }
  /** @return bool */
  public function getOrganizer()
  {
    return $this->organizer;
  }
  /** @param bool */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return bool */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setResponseStatus($responseStatus)
  {
    $this->responseStatus = $responseStatus;
  }
  /** @return string */
  public function getResponseStatus()
  {
    return $this->responseStatus;
  }
  /** @param bool */
  public function setSelf($self)
  {
    $this->self = $self;
  }
  /** @return bool */
  public function getSelf()
  {
    return $this->self;
  }
}

class EventCreator extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var string */
  public $id;
  /** @var bool */
  public $self;

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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param bool */
  public function setSelf($self)
  {
    $this->self = $self;
  }
  /** @return bool */
  public function getSelf()
  {
    return $this->self;
  }
}

class EventDateTime extends \Google\Model
{
  /** @var string */
  public $date;
  /** @var string */
  public $dateTime;
  /** @var string */
  public $timeZone;

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
  /** @param string */
  public function setDateTime($dateTime)
  {
    $this->dateTime = $dateTime;
  }
  /** @return string */
  public function getDateTime()
  {
    return $this->dateTime;
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
}

class EventExtendedProperties extends \Google\Model
{
  /** @var string[] */
  public $private;
  /** @var string[] */
  public $shared;

  /** @param string[] */
  public function setPrivate($private)
  {
    $this->private = $private;
  }
  /** @return string[] */
  public function getPrivate()
  {
    return $this->private;
  }
  /** @param string[] */
  public function setShared($shared)
  {
    $this->shared = $shared;
  }
  /** @return string[] */
  public function getShared()
  {
    return $this->shared;
  }
}

class EventGadget extends \Google\Model
{
  /** @var string */
  public $display;
  /** @var int */
  public $height;
  /** @var string */
  public $iconLink;
  /** @var string */
  public $link;
  /** @var string[] */
  public $preferences;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  /** @var int */
  public $width;

  /** @param string */
  public function setDisplay($display)
  {
    $this->display = $display;
  }
  /** @return string */
  public function getDisplay()
  {
    return $this->display;
  }
  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param string */
  public function setIconLink($iconLink)
  {
    $this->iconLink = $iconLink;
  }
  /** @return string */
  public function getIconLink()
  {
    return $this->iconLink;
  }
  /** @param string */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
  }
  /** @param string[] */
  public function setPreferences($preferences)
  {
    $this->preferences = $preferences;
  }
  /** @return string[] */
  public function getPreferences()
  {
    return $this->preferences;
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
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class EventOrganizer extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var string */
  public $id;
  /** @var bool */
  public $self;

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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param bool */
  public function setSelf($self)
  {
    $this->self = $self;
  }
  /** @return bool */
  public function getSelf()
  {
    return $this->self;
  }
}

class EventReminder extends \Google\Model
{
  /** @var string */
  public $method;
  /** @var int */
  public $minutes;

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
}

class EventReminders extends \Google\Collection
{
  /** @var EventReminder[] */
  public $overrides;
  /** @var bool */
  public $useDefault;
  protected $collection_key = 'overrides';
  protected $overridesType = EventReminder::class;
  protected $overridesDataType = 'array';
  /** @param EventReminder[] */
  public function setOverrides($overrides)
  {
    $this->overrides = $overrides;
  }
  /** @return EventReminder[] */
  public function getOverrides()
  {
    return $this->overrides;
  }
  /** @param bool */
  public function setUseDefault($useDefault)
  {
    $this->useDefault = $useDefault;
  }
  /** @return bool */
  public function getUseDefault()
  {
    return $this->useDefault;
  }
}

class EventSource extends \Google\Model
{
  /** @var string */
  public $title;
  /** @var string */
  public $url;

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

class Events extends \Google\Collection
{
  /** @var string */
  public $accessRole;
  /** @var EventReminder[] */
  public $defaultReminders;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var Event[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $nextSyncToken;
  /** @var string */
  public $summary;
  /** @var string */
  public $timeZone;
  /** @var string */
  public $updated;
  protected $collection_key = 'items';
  protected $defaultRemindersType = EventReminder::class;
  protected $defaultRemindersDataType = 'array';
  protected $itemsType = Event::class;
  protected $itemsDataType = 'array';
  /** @param string */
  public function setAccessRole($accessRole)
  {
    $this->accessRole = $accessRole;
  }
  /** @return string */
  public function getAccessRole()
  {
    return $this->accessRole;
  }
  /** @param EventReminder[] */
  public function setDefaultReminders($defaultReminders)
  {
    $this->defaultReminders = $defaultReminders;
  }
  /** @return EventReminder[] */
  public function getDefaultReminders()
  {
    return $this->defaultReminders;
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
  /** @param Event[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Event[] */
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
  /** @param string */
  public function setNextSyncToken($nextSyncToken)
  {
    $this->nextSyncToken = $nextSyncToken;
  }
  /** @return string */
  public function getNextSyncToken()
  {
    return $this->nextSyncToken;
  }
  /** @param string */
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  /** @return string */
  public function getSummary()
  {
    return $this->summary;
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
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class FreeBusyCalendar extends \Google\Collection
{
  /** @var TimePeriod[] */
  public $busy;
  /** @var Error[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $busyType = TimePeriod::class;
  protected $busyDataType = 'array';
  protected $errorsType = Error::class;
  protected $errorsDataType = 'array';
  /** @param TimePeriod[] */
  public function setBusy($busy)
  {
    $this->busy = $busy;
  }
  /** @return TimePeriod[] */
  public function getBusy()
  {
    return $this->busy;
  }
  /** @param Error[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return Error[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class FreeBusyGroup extends \Google\Collection
{
  /** @var string[] */
  public $calendars;
  /** @var Error[] */
  public $errors;
  protected $collection_key = 'errors';
  protected $errorsType = Error::class;
  protected $errorsDataType = 'array';
  /** @param string[] */
  public function setCalendars($calendars)
  {
    $this->calendars = $calendars;
  }
  /** @return string[] */
  public function getCalendars()
  {
    return $this->calendars;
  }
  /** @param Error[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return Error[] */
  public function getErrors()
  {
    return $this->errors;
  }
}

class FreeBusyRequest extends \Google\Collection
{
  /** @var int */
  public $calendarExpansionMax;
  /** @var int */
  public $groupExpansionMax;
  /** @var FreeBusyRequestItem[] */
  public $items;
  /** @var string */
  public $timeMax;
  /** @var string */
  public $timeMin;
  /** @var string */
  public $timeZone;
  protected $collection_key = 'items';
  protected $itemsType = FreeBusyRequestItem::class;
  protected $itemsDataType = 'array';
  /** @param int */
  public function setCalendarExpansionMax($calendarExpansionMax)
  {
    $this->calendarExpansionMax = $calendarExpansionMax;
  }
  /** @return int */
  public function getCalendarExpansionMax()
  {
    return $this->calendarExpansionMax;
  }
  /** @param int */
  public function setGroupExpansionMax($groupExpansionMax)
  {
    $this->groupExpansionMax = $groupExpansionMax;
  }
  /** @return int */
  public function getGroupExpansionMax()
  {
    return $this->groupExpansionMax;
  }
  /** @param FreeBusyRequestItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return FreeBusyRequestItem[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setTimeMax($timeMax)
  {
    $this->timeMax = $timeMax;
  }
  /** @return string */
  public function getTimeMax()
  {
    return $this->timeMax;
  }
  /** @param string */
  public function setTimeMin($timeMin)
  {
    $this->timeMin = $timeMin;
  }
  /** @return string */
  public function getTimeMin()
  {
    return $this->timeMin;
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
}

class FreeBusyRequestItem extends \Google\Model
{
  /** @var string */
  public $id;

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

class FreeBusyResponse extends \Google\Model
{
  /** @var FreeBusyCalendar[] */
  public $calendars;
  /** @var FreeBusyGroup[] */
  public $groups;
  /** @var string */
  public $kind;
  /** @var string */
  public $timeMax;
  /** @var string */
  public $timeMin;
  protected $calendarsType = FreeBusyCalendar::class;
  protected $calendarsDataType = 'map';
  protected $groupsType = FreeBusyGroup::class;
  protected $groupsDataType = 'map';
  /** @param FreeBusyCalendar[] */
  public function setCalendars($calendars)
  {
    $this->calendars = $calendars;
  }
  /** @return FreeBusyCalendar[] */
  public function getCalendars()
  {
    return $this->calendars;
  }
  /** @param FreeBusyGroup[] */
  public function setGroups($groups)
  {
    $this->groups = $groups;
  }
  /** @return FreeBusyGroup[] */
  public function getGroups()
  {
    return $this->groups;
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
  public function setTimeMax($timeMax)
  {
    $this->timeMax = $timeMax;
  }
  /** @return string */
  public function getTimeMax()
  {
    return $this->timeMax;
  }
  /** @param string */
  public function setTimeMin($timeMin)
  {
    $this->timeMin = $timeMin;
  }
  /** @return string */
  public function getTimeMin()
  {
    return $this->timeMin;
  }
}

class Setting extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $value;

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

class Settings extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var Setting[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $nextSyncToken;
  protected $collection_key = 'items';
  protected $itemsType = Setting::class;
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
  /** @param Setting[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Setting[] */
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
  /** @param string */
  public function setNextSyncToken($nextSyncToken)
  {
    $this->nextSyncToken = $nextSyncToken;
  }
  /** @return string */
  public function getNextSyncToken()
  {
    return $this->nextSyncToken;
  }
}

class TimePeriod extends \Google\Model
{
  /** @var string */
  public $end;
  /** @var string */
  public $start;

  /** @param string */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return string */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param string */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return string */
  public function getStart()
  {
    return $this->start;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Acl::class, 'Google_Service_Calendar_Acl');
class_alias(AclRule::class, 'Google_Service_Calendar_AclRule');
class_alias(AclRuleScope::class, 'Google_Service_Calendar_AclRuleScope');
class_alias(Calendar::class, 'Google_Service_Calendar_Calendar');
class_alias(CalendarList::class, 'Google_Service_Calendar_CalendarList');
class_alias(CalendarListEntry::class, 'Google_Service_Calendar_CalendarListEntry');
class_alias(CalendarListEntryNotificationSettings::class, 'Google_Service_Calendar_CalendarListEntryNotificationSettings');
class_alias(CalendarNotification::class, 'Google_Service_Calendar_CalendarNotification');
class_alias(Channel::class, 'Google_Service_Calendar_Channel');
class_alias(ColorDefinition::class, 'Google_Service_Calendar_ColorDefinition');
class_alias(Colors::class, 'Google_Service_Calendar_Colors');
class_alias(ConferenceData::class, 'Google_Service_Calendar_ConferenceData');
class_alias(ConferenceParameters::class, 'Google_Service_Calendar_ConferenceParameters');
class_alias(ConferenceParametersAddOnParameters::class, 'Google_Service_Calendar_ConferenceParametersAddOnParameters');
class_alias(ConferenceProperties::class, 'Google_Service_Calendar_ConferenceProperties');
class_alias(ConferenceRequestStatus::class, 'Google_Service_Calendar_ConferenceRequestStatus');
class_alias(ConferenceSolution::class, 'Google_Service_Calendar_ConferenceSolution');
class_alias(ConferenceSolutionKey::class, 'Google_Service_Calendar_ConferenceSolutionKey');
class_alias(CreateConferenceRequest::class, 'Google_Service_Calendar_CreateConferenceRequest');
class_alias(EntryPoint::class, 'Google_Service_Calendar_EntryPoint');
class_alias(Error::class, 'Google_Service_Calendar_Error');
class_alias(Event::class, 'Google_Service_Calendar_Event');
class_alias(EventAttachment::class, 'Google_Service_Calendar_EventAttachment');
class_alias(EventAttendee::class, 'Google_Service_Calendar_EventAttendee');
class_alias(EventCreator::class, 'Google_Service_Calendar_EventCreator');
class_alias(EventDateTime::class, 'Google_Service_Calendar_EventDateTime');
class_alias(EventExtendedProperties::class, 'Google_Service_Calendar_EventExtendedProperties');
class_alias(EventGadget::class, 'Google_Service_Calendar_EventGadget');
class_alias(EventOrganizer::class, 'Google_Service_Calendar_EventOrganizer');
class_alias(EventReminder::class, 'Google_Service_Calendar_EventReminder');
class_alias(EventReminders::class, 'Google_Service_Calendar_EventReminders');
class_alias(EventSource::class, 'Google_Service_Calendar_EventSource');
class_alias(Events::class, 'Google_Service_Calendar_Events');
class_alias(FreeBusyCalendar::class, 'Google_Service_Calendar_FreeBusyCalendar');
class_alias(FreeBusyGroup::class, 'Google_Service_Calendar_FreeBusyGroup');
class_alias(FreeBusyRequest::class, 'Google_Service_Calendar_FreeBusyRequest');
class_alias(FreeBusyRequestItem::class, 'Google_Service_Calendar_FreeBusyRequestItem');
class_alias(FreeBusyResponse::class, 'Google_Service_Calendar_FreeBusyResponse');
class_alias(Setting::class, 'Google_Service_Calendar_Setting');
class_alias(Settings::class, 'Google_Service_Calendar_Settings');
class_alias(TimePeriod::class, 'Google_Service_Calendar_TimePeriod');
