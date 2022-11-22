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

namespace Google\Service\HomeGraphService;

class AgentDeviceId extends \Google\Model
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

class AgentOtherDeviceId extends \Google\Model
{
  /** @var string */
  public $agentId;
  /** @var string */
  public $deviceId;

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
  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
}

class Device extends \Google\Collection
{
  /** @var array[] */
  public $attributes;
  /** @var array[] */
  public $customData;
  /** @var DeviceInfo */
  public $deviceInfo;
  /** @var string */
  public $id;
  /** @var DeviceNames */
  public $name;
  /** @var bool */
  public $notificationSupportedByAgent;
  /** @var AgentOtherDeviceId[] */
  public $otherDeviceIds;
  /** @var string */
  public $roomHint;
  /** @var string */
  public $structureHint;
  /** @var string[] */
  public $traits;
  /** @var string */
  public $type;
  /** @var bool */
  public $willReportState;
  protected $collection_key = 'traits';
  protected $deviceInfoType = DeviceInfo::class;
  protected $deviceInfoDataType = '';
  protected $nameType = DeviceNames::class;
  protected $nameDataType = '';
  protected $otherDeviceIdsType = AgentOtherDeviceId::class;
  protected $otherDeviceIdsDataType = 'array';
  /** @param array[] */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return array[] */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param array[] */
  public function setCustomData($customData)
  {
    $this->customData = $customData;
  }
  /** @return array[] */
  public function getCustomData()
  {
    return $this->customData;
  }
  /** @param DeviceInfo */
  public function setDeviceInfo(DeviceInfo $deviceInfo)
  {
    $this->deviceInfo = $deviceInfo;
  }
  /** @return DeviceInfo */
  public function getDeviceInfo()
  {
    return $this->deviceInfo;
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
  /** @param DeviceNames */
  public function setName(DeviceNames $name)
  {
    $this->name = $name;
  }
  /** @return DeviceNames */
  public function getName()
  {
    return $this->name;
  }
  /** @param bool */
  public function setNotificationSupportedByAgent($notificationSupportedByAgent)
  {
    $this->notificationSupportedByAgent = $notificationSupportedByAgent;
  }
  /** @return bool */
  public function getNotificationSupportedByAgent()
  {
    return $this->notificationSupportedByAgent;
  }
  /** @param AgentOtherDeviceId[] */
  public function setOtherDeviceIds($otherDeviceIds)
  {
    $this->otherDeviceIds = $otherDeviceIds;
  }
  /** @return AgentOtherDeviceId[] */
  public function getOtherDeviceIds()
  {
    return $this->otherDeviceIds;
  }
  /** @param string */
  public function setRoomHint($roomHint)
  {
    $this->roomHint = $roomHint;
  }
  /** @return string */
  public function getRoomHint()
  {
    return $this->roomHint;
  }
  /** @param string */
  public function setStructureHint($structureHint)
  {
    $this->structureHint = $structureHint;
  }
  /** @return string */
  public function getStructureHint()
  {
    return $this->structureHint;
  }
  /** @param string[] */
  public function setTraits($traits)
  {
    $this->traits = $traits;
  }
  /** @return string[] */
  public function getTraits()
  {
    return $this->traits;
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
  /** @param bool */
  public function setWillReportState($willReportState)
  {
    $this->willReportState = $willReportState;
  }
  /** @return bool */
  public function getWillReportState()
  {
    return $this->willReportState;
  }
}

class DeviceInfo extends \Google\Model
{
  /** @var string */
  public $hwVersion;
  /** @var string */
  public $manufacturer;
  /** @var string */
  public $model;
  /** @var string */
  public $swVersion;

  /** @param string */
  public function setHwVersion($hwVersion)
  {
    $this->hwVersion = $hwVersion;
  }
  /** @return string */
  public function getHwVersion()
  {
    return $this->hwVersion;
  }
  /** @param string */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /** @return string */
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
  }
  /** @param string */
  public function setSwVersion($swVersion)
  {
    $this->swVersion = $swVersion;
  }
  /** @return string */
  public function getSwVersion()
  {
    return $this->swVersion;
  }
}

class DeviceNames extends \Google\Collection
{
  /** @var string[] */
  public $defaultNames;
  /** @var string */
  public $name;
  /** @var string[] */
  public $nicknames;
  protected $collection_key = 'nicknames';
  /** @param string[] */
  public function setDefaultNames($defaultNames)
  {
    $this->defaultNames = $defaultNames;
  }
  /** @return string[] */
  public function getDefaultNames()
  {
    return $this->defaultNames;
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
  public function setNicknames($nicknames)
  {
    $this->nicknames = $nicknames;
  }
  /** @return string[] */
  public function getNicknames()
  {
    return $this->nicknames;
  }
}

class HomegraphEmpty extends \Google\Model
{
}

class QueryRequest extends \Google\Collection
{
  /** @var string */
  public $agentUserId;
  /** @var QueryRequestInput[] */
  public $inputs;
  /** @var string */
  public $requestId;
  protected $collection_key = 'inputs';
  protected $inputsType = QueryRequestInput::class;
  protected $inputsDataType = 'array';
  /** @param string */
  public function setAgentUserId($agentUserId)
  {
    $this->agentUserId = $agentUserId;
  }
  /** @return string */
  public function getAgentUserId()
  {
    return $this->agentUserId;
  }
  /** @param QueryRequestInput[] */
  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  /** @return QueryRequestInput[] */
  public function getInputs()
  {
    return $this->inputs;
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
}

class QueryRequestInput extends \Google\Model
{
  /** @var QueryRequestPayload */
  public $payload;
  protected $payloadType = QueryRequestPayload::class;
  protected $payloadDataType = '';
  /** @param QueryRequestPayload */
  public function setPayload(QueryRequestPayload $payload)
  {
    $this->payload = $payload;
  }
  /** @return QueryRequestPayload */
  public function getPayload()
  {
    return $this->payload;
  }
}

class QueryRequestPayload extends \Google\Collection
{
  /** @var AgentDeviceId[] */
  public $devices;
  protected $collection_key = 'devices';
  protected $devicesType = AgentDeviceId::class;
  protected $devicesDataType = 'array';
  /** @param AgentDeviceId[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return AgentDeviceId[] */
  public function getDevices()
  {
    return $this->devices;
  }
}

class QueryResponse extends \Google\Model
{
  /** @var QueryResponsePayload */
  public $payload;
  /** @var string */
  public $requestId;
  protected $payloadType = QueryResponsePayload::class;
  protected $payloadDataType = '';
  /** @param QueryResponsePayload */
  public function setPayload(QueryResponsePayload $payload)
  {
    $this->payload = $payload;
  }
  /** @return QueryResponsePayload */
  public function getPayload()
  {
    return $this->payload;
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
}

class QueryResponsePayload extends \Google\Model
{
  /** @var array[] */
  public $devices;

  /** @param array[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return array[] */
  public function getDevices()
  {
    return $this->devices;
  }
}

class ReportStateAndNotificationDevice extends \Google\Model
{
  /** @var array[] */
  public $notifications;
  /** @var array[] */
  public $states;

  /** @param array[] */
  public function setNotifications($notifications)
  {
    $this->notifications = $notifications;
  }
  /** @return array[] */
  public function getNotifications()
  {
    return $this->notifications;
  }
  /** @param array[] */
  public function setStates($states)
  {
    $this->states = $states;
  }
  /** @return array[] */
  public function getStates()
  {
    return $this->states;
  }
}

class ReportStateAndNotificationRequest extends \Google\Model
{
  /** @var string */
  public $agentUserId;
  /** @var string */
  public $eventId;
  /** @var string */
  public $followUpToken;
  /** @var StateAndNotificationPayload */
  public $payload;
  /** @var string */
  public $requestId;
  protected $payloadType = StateAndNotificationPayload::class;
  protected $payloadDataType = '';
  /** @param string */
  public function setAgentUserId($agentUserId)
  {
    $this->agentUserId = $agentUserId;
  }
  /** @return string */
  public function getAgentUserId()
  {
    return $this->agentUserId;
  }
  /** @param string */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /** @return string */
  public function getEventId()
  {
    return $this->eventId;
  }
  /** @param string */
  public function setFollowUpToken($followUpToken)
  {
    $this->followUpToken = $followUpToken;
  }
  /** @return string */
  public function getFollowUpToken()
  {
    return $this->followUpToken;
  }
  /** @param StateAndNotificationPayload */
  public function setPayload(StateAndNotificationPayload $payload)
  {
    $this->payload = $payload;
  }
  /** @return StateAndNotificationPayload */
  public function getPayload()
  {
    return $this->payload;
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
}

class ReportStateAndNotificationResponse extends \Google\Model
{
  /** @var string */
  public $requestId;

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
}

class RequestSyncDevicesRequest extends \Google\Model
{
  /** @var string */
  public $agentUserId;
  /** @var bool */
  public $async;

  /** @param string */
  public function setAgentUserId($agentUserId)
  {
    $this->agentUserId = $agentUserId;
  }
  /** @return string */
  public function getAgentUserId()
  {
    return $this->agentUserId;
  }
  /** @param bool */
  public function setAsync($async)
  {
    $this->async = $async;
  }
  /** @return bool */
  public function getAsync()
  {
    return $this->async;
  }
}

class RequestSyncDevicesResponse extends \Google\Model
{
}

class StateAndNotificationPayload extends \Google\Model
{
  /** @var ReportStateAndNotificationDevice */
  public $devices;
  protected $devicesType = ReportStateAndNotificationDevice::class;
  protected $devicesDataType = '';
  /** @param ReportStateAndNotificationDevice */
  public function setDevices(ReportStateAndNotificationDevice $devices)
  {
    $this->devices = $devices;
  }
  /** @return ReportStateAndNotificationDevice */
  public function getDevices()
  {
    return $this->devices;
  }
}

class SyncRequest extends \Google\Model
{
  /** @var string */
  public $agentUserId;
  /** @var string */
  public $requestId;

  /** @param string */
  public function setAgentUserId($agentUserId)
  {
    $this->agentUserId = $agentUserId;
  }
  /** @return string */
  public function getAgentUserId()
  {
    return $this->agentUserId;
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
}

class SyncResponse extends \Google\Model
{
  /** @var SyncResponsePayload */
  public $payload;
  /** @var string */
  public $requestId;
  protected $payloadType = SyncResponsePayload::class;
  protected $payloadDataType = '';
  /** @param SyncResponsePayload */
  public function setPayload(SyncResponsePayload $payload)
  {
    $this->payload = $payload;
  }
  /** @return SyncResponsePayload */
  public function getPayload()
  {
    return $this->payload;
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
}

class SyncResponsePayload extends \Google\Collection
{
  /** @var string */
  public $agentUserId;
  /** @var Device[] */
  public $devices;
  protected $collection_key = 'devices';
  protected $devicesType = Device::class;
  protected $devicesDataType = 'array';
  /** @param string */
  public function setAgentUserId($agentUserId)
  {
    $this->agentUserId = $agentUserId;
  }
  /** @return string */
  public function getAgentUserId()
  {
    return $this->agentUserId;
  }
  /** @param Device[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return Device[] */
  public function getDevices()
  {
    return $this->devices;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentDeviceId::class, 'Google_Service_HomeGraphService_AgentDeviceId');
class_alias(AgentOtherDeviceId::class, 'Google_Service_HomeGraphService_AgentOtherDeviceId');
class_alias(Device::class, 'Google_Service_HomeGraphService_Device');
class_alias(DeviceInfo::class, 'Google_Service_HomeGraphService_DeviceInfo');
class_alias(DeviceNames::class, 'Google_Service_HomeGraphService_DeviceNames');
class_alias(HomegraphEmpty::class, 'Google_Service_HomeGraphService_HomegraphEmpty');
class_alias(QueryRequest::class, 'Google_Service_HomeGraphService_QueryRequest');
class_alias(QueryRequestInput::class, 'Google_Service_HomeGraphService_QueryRequestInput');
class_alias(QueryRequestPayload::class, 'Google_Service_HomeGraphService_QueryRequestPayload');
class_alias(QueryResponse::class, 'Google_Service_HomeGraphService_QueryResponse');
class_alias(QueryResponsePayload::class, 'Google_Service_HomeGraphService_QueryResponsePayload');
class_alias(ReportStateAndNotificationDevice::class, 'Google_Service_HomeGraphService_ReportStateAndNotificationDevice');
class_alias(ReportStateAndNotificationRequest::class, 'Google_Service_HomeGraphService_ReportStateAndNotificationRequest');
class_alias(ReportStateAndNotificationResponse::class, 'Google_Service_HomeGraphService_ReportStateAndNotificationResponse');
class_alias(RequestSyncDevicesRequest::class, 'Google_Service_HomeGraphService_RequestSyncDevicesRequest');
class_alias(RequestSyncDevicesResponse::class, 'Google_Service_HomeGraphService_RequestSyncDevicesResponse');
class_alias(StateAndNotificationPayload::class, 'Google_Service_HomeGraphService_StateAndNotificationPayload');
class_alias(SyncRequest::class, 'Google_Service_HomeGraphService_SyncRequest');
class_alias(SyncResponse::class, 'Google_Service_HomeGraphService_SyncResponse');
class_alias(SyncResponsePayload::class, 'Google_Service_HomeGraphService_SyncResponsePayload');
