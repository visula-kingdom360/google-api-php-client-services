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

namespace Google\Service\CloudIot;

class BindDeviceToGatewayRequest extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var string */
  public $gatewayId;

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
  /** @param string */
  public function setGatewayId($gatewayId)
  {
    $this->gatewayId = $gatewayId;
  }
  /** @return string */
  public function getGatewayId()
  {
    return $this->gatewayId;
  }
}

class BindDeviceToGatewayResponse extends \Google\Model
{
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

class CloudiotEmpty extends \Google\Model
{
}

class Device extends \Google\Collection
{
  /** @var bool */
  public $blocked;
  /** @var DeviceConfig */
  public $config;
  /** @var DeviceCredential[] */
  public $credentials;
  /** @var GatewayConfig */
  public $gatewayConfig;
  /** @var string */
  public $id;
  /** @var string */
  public $lastConfigAckTime;
  /** @var string */
  public $lastConfigSendTime;
  /** @var Status */
  public $lastErrorStatus;
  /** @var string */
  public $lastErrorTime;
  /** @var string */
  public $lastEventTime;
  /** @var string */
  public $lastHeartbeatTime;
  /** @var string */
  public $lastStateTime;
  /** @var string */
  public $logLevel;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var string */
  public $numId;
  /** @var DeviceState */
  public $state;
  protected $collection_key = 'credentials';
  protected $configType = DeviceConfig::class;
  protected $configDataType = '';
  protected $credentialsType = DeviceCredential::class;
  protected $credentialsDataType = 'array';
  protected $gatewayConfigType = GatewayConfig::class;
  protected $gatewayConfigDataType = '';
  protected $lastErrorStatusType = Status::class;
  protected $lastErrorStatusDataType = '';
  protected $stateType = DeviceState::class;
  protected $stateDataType = '';
  /** @param bool */
  public function setBlocked($blocked)
  {
    $this->blocked = $blocked;
  }
  /** @return bool */
  public function getBlocked()
  {
    return $this->blocked;
  }
  /** @param DeviceConfig */
  public function setConfig(DeviceConfig $config)
  {
    $this->config = $config;
  }
  /** @return DeviceConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param DeviceCredential[] */
  public function setCredentials($credentials)
  {
    $this->credentials = $credentials;
  }
  /** @return DeviceCredential[] */
  public function getCredentials()
  {
    return $this->credentials;
  }
  /** @param GatewayConfig */
  public function setGatewayConfig(GatewayConfig $gatewayConfig)
  {
    $this->gatewayConfig = $gatewayConfig;
  }
  /** @return GatewayConfig */
  public function getGatewayConfig()
  {
    return $this->gatewayConfig;
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
  public function setLastConfigAckTime($lastConfigAckTime)
  {
    $this->lastConfigAckTime = $lastConfigAckTime;
  }
  /** @return string */
  public function getLastConfigAckTime()
  {
    return $this->lastConfigAckTime;
  }
  /** @param string */
  public function setLastConfigSendTime($lastConfigSendTime)
  {
    $this->lastConfigSendTime = $lastConfigSendTime;
  }
  /** @return string */
  public function getLastConfigSendTime()
  {
    return $this->lastConfigSendTime;
  }
  /** @param Status */
  public function setLastErrorStatus(Status $lastErrorStatus)
  {
    $this->lastErrorStatus = $lastErrorStatus;
  }
  /** @return Status */
  public function getLastErrorStatus()
  {
    return $this->lastErrorStatus;
  }
  /** @param string */
  public function setLastErrorTime($lastErrorTime)
  {
    $this->lastErrorTime = $lastErrorTime;
  }
  /** @return string */
  public function getLastErrorTime()
  {
    return $this->lastErrorTime;
  }
  /** @param string */
  public function setLastEventTime($lastEventTime)
  {
    $this->lastEventTime = $lastEventTime;
  }
  /** @return string */
  public function getLastEventTime()
  {
    return $this->lastEventTime;
  }
  /** @param string */
  public function setLastHeartbeatTime($lastHeartbeatTime)
  {
    $this->lastHeartbeatTime = $lastHeartbeatTime;
  }
  /** @return string */
  public function getLastHeartbeatTime()
  {
    return $this->lastHeartbeatTime;
  }
  /** @param string */
  public function setLastStateTime($lastStateTime)
  {
    $this->lastStateTime = $lastStateTime;
  }
  /** @return string */
  public function getLastStateTime()
  {
    return $this->lastStateTime;
  }
  /** @param string */
  public function setLogLevel($logLevel)
  {
    $this->logLevel = $logLevel;
  }
  /** @return string */
  public function getLogLevel()
  {
    return $this->logLevel;
  }
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
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
  /** @param string */
  public function setNumId($numId)
  {
    $this->numId = $numId;
  }
  /** @return string */
  public function getNumId()
  {
    return $this->numId;
  }
  /** @param DeviceState */
  public function setState(DeviceState $state)
  {
    $this->state = $state;
  }
  /** @return DeviceState */
  public function getState()
  {
    return $this->state;
  }
}

class DeviceConfig extends \Google\Model
{
  /** @var string */
  public $binaryData;
  /** @var string */
  public $cloudUpdateTime;
  /** @var string */
  public $deviceAckTime;
  /** @var string */
  public $version;

  /** @param string */
  public function setBinaryData($binaryData)
  {
    $this->binaryData = $binaryData;
  }
  /** @return string */
  public function getBinaryData()
  {
    return $this->binaryData;
  }
  /** @param string */
  public function setCloudUpdateTime($cloudUpdateTime)
  {
    $this->cloudUpdateTime = $cloudUpdateTime;
  }
  /** @return string */
  public function getCloudUpdateTime()
  {
    return $this->cloudUpdateTime;
  }
  /** @param string */
  public function setDeviceAckTime($deviceAckTime)
  {
    $this->deviceAckTime = $deviceAckTime;
  }
  /** @return string */
  public function getDeviceAckTime()
  {
    return $this->deviceAckTime;
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

class DeviceCredential extends \Google\Model
{
  /** @var string */
  public $expirationTime;
  /** @var PublicKeyCredential */
  public $publicKey;
  protected $publicKeyType = PublicKeyCredential::class;
  protected $publicKeyDataType = '';
  /** @param string */
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
  /** @param PublicKeyCredential */
  public function setPublicKey(PublicKeyCredential $publicKey)
  {
    $this->publicKey = $publicKey;
  }
  /** @return PublicKeyCredential */
  public function getPublicKey()
  {
    return $this->publicKey;
  }
}

class DeviceRegistry extends \Google\Collection
{
  /** @var RegistryCredential[] */
  public $credentials;
  /** @var EventNotificationConfig[] */
  public $eventNotificationConfigs;
  /** @var HttpConfig */
  public $httpConfig;
  /** @var string */
  public $id;
  /** @var string */
  public $logLevel;
  /** @var MqttConfig */
  public $mqttConfig;
  /** @var string */
  public $name;
  /** @var StateNotificationConfig */
  public $stateNotificationConfig;
  protected $collection_key = 'eventNotificationConfigs';
  protected $credentialsType = RegistryCredential::class;
  protected $credentialsDataType = 'array';
  protected $eventNotificationConfigsType = EventNotificationConfig::class;
  protected $eventNotificationConfigsDataType = 'array';
  protected $httpConfigType = HttpConfig::class;
  protected $httpConfigDataType = '';
  protected $mqttConfigType = MqttConfig::class;
  protected $mqttConfigDataType = '';
  protected $stateNotificationConfigType = StateNotificationConfig::class;
  protected $stateNotificationConfigDataType = '';
  /** @param RegistryCredential[] */
  public function setCredentials($credentials)
  {
    $this->credentials = $credentials;
  }
  /** @return RegistryCredential[] */
  public function getCredentials()
  {
    return $this->credentials;
  }
  /** @param EventNotificationConfig[] */
  public function setEventNotificationConfigs($eventNotificationConfigs)
  {
    $this->eventNotificationConfigs = $eventNotificationConfigs;
  }
  /** @return EventNotificationConfig[] */
  public function getEventNotificationConfigs()
  {
    return $this->eventNotificationConfigs;
  }
  /** @param HttpConfig */
  public function setHttpConfig(HttpConfig $httpConfig)
  {
    $this->httpConfig = $httpConfig;
  }
  /** @return HttpConfig */
  public function getHttpConfig()
  {
    return $this->httpConfig;
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
  public function setLogLevel($logLevel)
  {
    $this->logLevel = $logLevel;
  }
  /** @return string */
  public function getLogLevel()
  {
    return $this->logLevel;
  }
  /** @param MqttConfig */
  public function setMqttConfig(MqttConfig $mqttConfig)
  {
    $this->mqttConfig = $mqttConfig;
  }
  /** @return MqttConfig */
  public function getMqttConfig()
  {
    return $this->mqttConfig;
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
  /** @param StateNotificationConfig */
  public function setStateNotificationConfig(StateNotificationConfig $stateNotificationConfig)
  {
    $this->stateNotificationConfig = $stateNotificationConfig;
  }
  /** @return StateNotificationConfig */
  public function getStateNotificationConfig()
  {
    return $this->stateNotificationConfig;
  }
}

class DeviceState extends \Google\Model
{
  /** @var string */
  public $binaryData;
  /** @var string */
  public $updateTime;

  /** @param string */
  public function setBinaryData($binaryData)
  {
    $this->binaryData = $binaryData;
  }
  /** @return string */
  public function getBinaryData()
  {
    return $this->binaryData;
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

class EventNotificationConfig extends \Google\Model
{
  /** @var string */
  public $pubsubTopicName;
  /** @var string */
  public $subfolderMatches;

  /** @param string */
  public function setPubsubTopicName($pubsubTopicName)
  {
    $this->pubsubTopicName = $pubsubTopicName;
  }
  /** @return string */
  public function getPubsubTopicName()
  {
    return $this->pubsubTopicName;
  }
  /** @param string */
  public function setSubfolderMatches($subfolderMatches)
  {
    $this->subfolderMatches = $subfolderMatches;
  }
  /** @return string */
  public function getSubfolderMatches()
  {
    return $this->subfolderMatches;
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

class GatewayConfig extends \Google\Model
{
  /** @var string */
  public $gatewayAuthMethod;
  /** @var string */
  public $gatewayType;
  /** @var string */
  public $lastAccessedGatewayId;
  /** @var string */
  public $lastAccessedGatewayTime;

  /** @param string */
  public function setGatewayAuthMethod($gatewayAuthMethod)
  {
    $this->gatewayAuthMethod = $gatewayAuthMethod;
  }
  /** @return string */
  public function getGatewayAuthMethod()
  {
    return $this->gatewayAuthMethod;
  }
  /** @param string */
  public function setGatewayType($gatewayType)
  {
    $this->gatewayType = $gatewayType;
  }
  /** @return string */
  public function getGatewayType()
  {
    return $this->gatewayType;
  }
  /** @param string */
  public function setLastAccessedGatewayId($lastAccessedGatewayId)
  {
    $this->lastAccessedGatewayId = $lastAccessedGatewayId;
  }
  /** @return string */
  public function getLastAccessedGatewayId()
  {
    return $this->lastAccessedGatewayId;
  }
  /** @param string */
  public function setLastAccessedGatewayTime($lastAccessedGatewayTime)
  {
    $this->lastAccessedGatewayTime = $lastAccessedGatewayTime;
  }
  /** @return string */
  public function getLastAccessedGatewayTime()
  {
    return $this->lastAccessedGatewayTime;
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

class HttpConfig extends \Google\Model
{
  /** @var string */
  public $httpEnabledState;

  /** @param string */
  public function setHttpEnabledState($httpEnabledState)
  {
    $this->httpEnabledState = $httpEnabledState;
  }
  /** @return string */
  public function getHttpEnabledState()
  {
    return $this->httpEnabledState;
  }
}

class ListDeviceConfigVersionsResponse extends \Google\Collection
{
  /** @var DeviceConfig[] */
  public $deviceConfigs;
  protected $collection_key = 'deviceConfigs';
  protected $deviceConfigsType = DeviceConfig::class;
  protected $deviceConfigsDataType = 'array';
  /** @param DeviceConfig[] */
  public function setDeviceConfigs($deviceConfigs)
  {
    $this->deviceConfigs = $deviceConfigs;
  }
  /** @return DeviceConfig[] */
  public function getDeviceConfigs()
  {
    return $this->deviceConfigs;
  }
}

class ListDeviceRegistriesResponse extends \Google\Collection
{
  /** @var DeviceRegistry[] */
  public $deviceRegistries;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'deviceRegistries';
  protected $deviceRegistriesType = DeviceRegistry::class;
  protected $deviceRegistriesDataType = 'array';
  /** @param DeviceRegistry[] */
  public function setDeviceRegistries($deviceRegistries)
  {
    $this->deviceRegistries = $deviceRegistries;
  }
  /** @return DeviceRegistry[] */
  public function getDeviceRegistries()
  {
    return $this->deviceRegistries;
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

class ListDeviceStatesResponse extends \Google\Collection
{
  /** @var DeviceState[] */
  public $deviceStates;
  protected $collection_key = 'deviceStates';
  protected $deviceStatesType = DeviceState::class;
  protected $deviceStatesDataType = 'array';
  /** @param DeviceState[] */
  public function setDeviceStates($deviceStates)
  {
    $this->deviceStates = $deviceStates;
  }
  /** @return DeviceState[] */
  public function getDeviceStates()
  {
    return $this->deviceStates;
  }
}

class ListDevicesResponse extends \Google\Collection
{
  /** @var Device[] */
  public $devices;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'devices';
  protected $devicesType = Device::class;
  protected $devicesDataType = 'array';
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

class ModifyCloudToDeviceConfigRequest extends \Google\Model
{
  /** @var string */
  public $binaryData;
  /** @var string */
  public $versionToUpdate;

  /** @param string */
  public function setBinaryData($binaryData)
  {
    $this->binaryData = $binaryData;
  }
  /** @return string */
  public function getBinaryData()
  {
    return $this->binaryData;
  }
  /** @param string */
  public function setVersionToUpdate($versionToUpdate)
  {
    $this->versionToUpdate = $versionToUpdate;
  }
  /** @return string */
  public function getVersionToUpdate()
  {
    return $this->versionToUpdate;
  }
}

class MqttConfig extends \Google\Model
{
  /** @var string */
  public $mqttEnabledState;

  /** @param string */
  public function setMqttEnabledState($mqttEnabledState)
  {
    $this->mqttEnabledState = $mqttEnabledState;
  }
  /** @return string */
  public function getMqttEnabledState()
  {
    return $this->mqttEnabledState;
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

class PublicKeyCertificate extends \Google\Model
{
  /** @var string */
  public $certificate;
  /** @var string */
  public $format;
  /** @var X509CertificateDetails */
  public $x509Details;
  protected $x509DetailsType = X509CertificateDetails::class;
  protected $x509DetailsDataType = '';
  /** @param string */
  public function setCertificate($certificate)
  {
    $this->certificate = $certificate;
  }
  /** @return string */
  public function getCertificate()
  {
    return $this->certificate;
  }
  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
  }
  /** @param X509CertificateDetails */
  public function setX509Details(X509CertificateDetails $x509Details)
  {
    $this->x509Details = $x509Details;
  }
  /** @return X509CertificateDetails */
  public function getX509Details()
  {
    return $this->x509Details;
  }
}

class PublicKeyCredential extends \Google\Model
{
  /** @var string */
  public $format;
  /** @var string */
  public $key;

  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
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
}

class RegistryCredential extends \Google\Model
{
  /** @var PublicKeyCertificate */
  public $publicKeyCertificate;
  protected $publicKeyCertificateType = PublicKeyCertificate::class;
  protected $publicKeyCertificateDataType = '';
  /** @param PublicKeyCertificate */
  public function setPublicKeyCertificate(PublicKeyCertificate $publicKeyCertificate)
  {
    $this->publicKeyCertificate = $publicKeyCertificate;
  }
  /** @return PublicKeyCertificate */
  public function getPublicKeyCertificate()
  {
    return $this->publicKeyCertificate;
  }
}

class SendCommandToDeviceRequest extends \Google\Model
{
  /** @var string */
  public $binaryData;
  /** @var string */
  public $subfolder;

  /** @param string */
  public function setBinaryData($binaryData)
  {
    $this->binaryData = $binaryData;
  }
  /** @return string */
  public function getBinaryData()
  {
    return $this->binaryData;
  }
  /** @param string */
  public function setSubfolder($subfolder)
  {
    $this->subfolder = $subfolder;
  }
  /** @return string */
  public function getSubfolder()
  {
    return $this->subfolder;
  }
}

class SendCommandToDeviceResponse extends \Google\Model
{
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

class StateNotificationConfig extends \Google\Model
{
  /** @var string */
  public $pubsubTopicName;

  /** @param string */
  public function setPubsubTopicName($pubsubTopicName)
  {
    $this->pubsubTopicName = $pubsubTopicName;
  }
  /** @return string */
  public function getPubsubTopicName()
  {
    return $this->pubsubTopicName;
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

class UnbindDeviceFromGatewayRequest extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var string */
  public $gatewayId;

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
  /** @param string */
  public function setGatewayId($gatewayId)
  {
    $this->gatewayId = $gatewayId;
  }
  /** @return string */
  public function getGatewayId()
  {
    return $this->gatewayId;
  }
}

class UnbindDeviceFromGatewayResponse extends \Google\Model
{
}

class X509CertificateDetails extends \Google\Model
{
  /** @var string */
  public $expiryTime;
  /** @var string */
  public $issuer;
  /** @var string */
  public $publicKeyType;
  /** @var string */
  public $signatureAlgorithm;
  /** @var string */
  public $startTime;
  /** @var string */
  public $subject;

  /** @param string */
  public function setExpiryTime($expiryTime)
  {
    $this->expiryTime = $expiryTime;
  }
  /** @return string */
  public function getExpiryTime()
  {
    return $this->expiryTime;
  }
  /** @param string */
  public function setIssuer($issuer)
  {
    $this->issuer = $issuer;
  }
  /** @return string */
  public function getIssuer()
  {
    return $this->issuer;
  }
  /** @param string */
  public function setPublicKeyType($publicKeyType)
  {
    $this->publicKeyType = $publicKeyType;
  }
  /** @return string */
  public function getPublicKeyType()
  {
    return $this->publicKeyType;
  }
  /** @param string */
  public function setSignatureAlgorithm($signatureAlgorithm)
  {
    $this->signatureAlgorithm = $signatureAlgorithm;
  }
  /** @return string */
  public function getSignatureAlgorithm()
  {
    return $this->signatureAlgorithm;
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
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /** @return string */
  public function getSubject()
  {
    return $this->subject;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BindDeviceToGatewayRequest::class, 'Google_Service_CloudIot_BindDeviceToGatewayRequest');
class_alias(BindDeviceToGatewayResponse::class, 'Google_Service_CloudIot_BindDeviceToGatewayResponse');
class_alias(Binding::class, 'Google_Service_CloudIot_Binding');
class_alias(CloudiotEmpty::class, 'Google_Service_CloudIot_CloudiotEmpty');
class_alias(Device::class, 'Google_Service_CloudIot_Device');
class_alias(DeviceConfig::class, 'Google_Service_CloudIot_DeviceConfig');
class_alias(DeviceCredential::class, 'Google_Service_CloudIot_DeviceCredential');
class_alias(DeviceRegistry::class, 'Google_Service_CloudIot_DeviceRegistry');
class_alias(DeviceState::class, 'Google_Service_CloudIot_DeviceState');
class_alias(EventNotificationConfig::class, 'Google_Service_CloudIot_EventNotificationConfig');
class_alias(Expr::class, 'Google_Service_CloudIot_Expr');
class_alias(GatewayConfig::class, 'Google_Service_CloudIot_GatewayConfig');
class_alias(GetIamPolicyRequest::class, 'Google_Service_CloudIot_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_CloudIot_GetPolicyOptions');
class_alias(HttpConfig::class, 'Google_Service_CloudIot_HttpConfig');
class_alias(ListDeviceConfigVersionsResponse::class, 'Google_Service_CloudIot_ListDeviceConfigVersionsResponse');
class_alias(ListDeviceRegistriesResponse::class, 'Google_Service_CloudIot_ListDeviceRegistriesResponse');
class_alias(ListDeviceStatesResponse::class, 'Google_Service_CloudIot_ListDeviceStatesResponse');
class_alias(ListDevicesResponse::class, 'Google_Service_CloudIot_ListDevicesResponse');
class_alias(ModifyCloudToDeviceConfigRequest::class, 'Google_Service_CloudIot_ModifyCloudToDeviceConfigRequest');
class_alias(MqttConfig::class, 'Google_Service_CloudIot_MqttConfig');
class_alias(Policy::class, 'Google_Service_CloudIot_Policy');
class_alias(PublicKeyCertificate::class, 'Google_Service_CloudIot_PublicKeyCertificate');
class_alias(PublicKeyCredential::class, 'Google_Service_CloudIot_PublicKeyCredential');
class_alias(RegistryCredential::class, 'Google_Service_CloudIot_RegistryCredential');
class_alias(SendCommandToDeviceRequest::class, 'Google_Service_CloudIot_SendCommandToDeviceRequest');
class_alias(SendCommandToDeviceResponse::class, 'Google_Service_CloudIot_SendCommandToDeviceResponse');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CloudIot_SetIamPolicyRequest');
class_alias(StateNotificationConfig::class, 'Google_Service_CloudIot_StateNotificationConfig');
class_alias(Status::class, 'Google_Service_CloudIot_Status');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CloudIot_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CloudIot_TestIamPermissionsResponse');
class_alias(UnbindDeviceFromGatewayRequest::class, 'Google_Service_CloudIot_UnbindDeviceFromGatewayRequest');
class_alias(UnbindDeviceFromGatewayResponse::class, 'Google_Service_CloudIot_UnbindDeviceFromGatewayResponse');
class_alias(X509CertificateDetails::class, 'Google_Service_CloudIot_X509CertificateDetails');
