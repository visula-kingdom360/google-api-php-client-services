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

namespace Google\Service\TPU;

class AcceleratorType extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $type;

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

class AccessConfig extends \Google\Model
{
  /** @var string */
  public $externalIp;

  /** @param string */
  public function setExternalIp($externalIp)
  {
    $this->externalIp = $externalIp;
  }
  /** @return string */
  public function getExternalIp()
  {
    return $this->externalIp;
  }
}

class AttachedDisk extends \Google\Model
{
  /** @var string */
  public $mode;
  /** @var string */
  public $sourceDisk;

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
  public function setSourceDisk($sourceDisk)
  {
    $this->sourceDisk = $sourceDisk;
  }
  /** @return string */
  public function getSourceDisk()
  {
    return $this->sourceDisk;
  }
}

class GenerateServiceIdentityRequest extends \Google\Model
{
}

class GenerateServiceIdentityResponse extends \Google\Model
{
  /** @var ServiceIdentity */
  public $identity;
  protected $identityType = ServiceIdentity::class;
  protected $identityDataType = '';
  /** @param ServiceIdentity */
  public function setIdentity(ServiceIdentity $identity)
  {
    $this->identity = $identity;
  }
  /** @return ServiceIdentity */
  public function getIdentity()
  {
    return $this->identity;
  }
}

class GetGuestAttributesRequest extends \Google\Collection
{
  /** @var string */
  public $queryPath;
  /** @var string[] */
  public $workerIds;
  protected $collection_key = 'workerIds';
  /** @param string */
  public function setQueryPath($queryPath)
  {
    $this->queryPath = $queryPath;
  }
  /** @return string */
  public function getQueryPath()
  {
    return $this->queryPath;
  }
  /** @param string[] */
  public function setWorkerIds($workerIds)
  {
    $this->workerIds = $workerIds;
  }
  /** @return string[] */
  public function getWorkerIds()
  {
    return $this->workerIds;
  }
}

class GetGuestAttributesResponse extends \Google\Collection
{
  /** @var GuestAttributes[] */
  public $guestAttributes;
  protected $collection_key = 'guestAttributes';
  protected $guestAttributesType = GuestAttributes::class;
  protected $guestAttributesDataType = 'array';
  /** @param GuestAttributes[] */
  public function setGuestAttributes($guestAttributes)
  {
    $this->guestAttributes = $guestAttributes;
  }
  /** @return GuestAttributes[] */
  public function getGuestAttributes()
  {
    return $this->guestAttributes;
  }
}

class GuestAttributes extends \Google\Model
{
  /** @var string */
  public $queryPath;
  /** @var GuestAttributesValue */
  public $queryValue;
  protected $queryValueType = GuestAttributesValue::class;
  protected $queryValueDataType = '';
  /** @param string */
  public function setQueryPath($queryPath)
  {
    $this->queryPath = $queryPath;
  }
  /** @return string */
  public function getQueryPath()
  {
    return $this->queryPath;
  }
  /** @param GuestAttributesValue */
  public function setQueryValue(GuestAttributesValue $queryValue)
  {
    $this->queryValue = $queryValue;
  }
  /** @return GuestAttributesValue */
  public function getQueryValue()
  {
    return $this->queryValue;
  }
}

class GuestAttributesEntry extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $namespace;
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
  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }
  /** @return string */
  public function getNamespace()
  {
    return $this->namespace;
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

class GuestAttributesValue extends \Google\Collection
{
  /** @var GuestAttributesEntry[] */
  public $items;
  protected $collection_key = 'items';
  protected $itemsType = GuestAttributesEntry::class;
  protected $itemsDataType = 'array';
  /** @param GuestAttributesEntry[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return GuestAttributesEntry[] */
  public function getItems()
  {
    return $this->items;
  }
}

class ListAcceleratorTypesResponse extends \Google\Collection
{
  /** @var AcceleratorType[] */
  public $acceleratorTypes;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $acceleratorTypesType = AcceleratorType::class;
  protected $acceleratorTypesDataType = 'array';
  /** @param AcceleratorType[] */
  public function setAcceleratorTypes($acceleratorTypes)
  {
    $this->acceleratorTypes = $acceleratorTypes;
  }
  /** @return AcceleratorType[] */
  public function getAcceleratorTypes()
  {
    return $this->acceleratorTypes;
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
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
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

class ListNodesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Node[] */
  public $nodes;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $nodesType = Node::class;
  protected $nodesDataType = 'array';
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
  /** @param Node[] */
  public function setNodes($nodes)
  {
    $this->nodes = $nodes;
  }
  /** @return Node[] */
  public function getNodes()
  {
    return $this->nodes;
  }
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
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

class ListRuntimeVersionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var RuntimeVersion[] */
  public $runtimeVersions;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $runtimeVersionsType = RuntimeVersion::class;
  protected $runtimeVersionsDataType = 'array';
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
  /** @param RuntimeVersion[] */
  public function setRuntimeVersions($runtimeVersions)
  {
    $this->runtimeVersions = $runtimeVersions;
  }
  /** @return RuntimeVersion[] */
  public function getRuntimeVersions()
  {
    return $this->runtimeVersions;
  }
  /** @param string[] */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /** @return string[] */
  public function getUnreachable()
  {
    return $this->unreachable;
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

class NetworkConfig extends \Google\Model
{
  /** @var bool */
  public $canIpForward;
  /** @var bool */
  public $enableExternalIps;
  /** @var string */
  public $network;
  /** @var string */
  public $subnetwork;

  /** @param bool */
  public function setCanIpForward($canIpForward)
  {
    $this->canIpForward = $canIpForward;
  }
  /** @return bool */
  public function getCanIpForward()
  {
    return $this->canIpForward;
  }
  /** @param bool */
  public function setEnableExternalIps($enableExternalIps)
  {
    $this->enableExternalIps = $enableExternalIps;
  }
  /** @return bool */
  public function getEnableExternalIps()
  {
    return $this->enableExternalIps;
  }
  /** @param string */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param string */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /** @return string */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
}

class NetworkEndpoint extends \Google\Model
{
  /** @var AccessConfig */
  public $accessConfig;
  /** @var string */
  public $ipAddress;
  /** @var int */
  public $port;
  protected $accessConfigType = AccessConfig::class;
  protected $accessConfigDataType = '';
  /** @param AccessConfig */
  public function setAccessConfig(AccessConfig $accessConfig)
  {
    $this->accessConfig = $accessConfig;
  }
  /** @return AccessConfig */
  public function getAccessConfig()
  {
    return $this->accessConfig;
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
  /** @param int */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return int */
  public function getPort()
  {
    return $this->port;
  }
}

class Node extends \Google\Collection
{
  /** @var string */
  public $acceleratorType;
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $cidrBlock;
  /** @var string */
  public $createTime;
  /** @var AttachedDisk[] */
  public $dataDisks;
  /** @var string */
  public $description;
  /** @var string */
  public $health;
  /** @var string */
  public $healthDescription;
  /** @var string */
  public $id;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var NetworkConfig */
  public $networkConfig;
  /** @var NetworkEndpoint[] */
  public $networkEndpoints;
  /** @var string */
  public $runtimeVersion;
  /** @var SchedulingConfig */
  public $schedulingConfig;
  /** @var ServiceAccount */
  public $serviceAccount;
  /** @var ShieldedInstanceConfig */
  public $shieldedInstanceConfig;
  /** @var string */
  public $state;
  /** @var Symptom[] */
  public $symptoms;
  /** @var string[] */
  public $tags;
  protected $collection_key = 'tags';
  protected $dataDisksType = AttachedDisk::class;
  protected $dataDisksDataType = 'array';
  protected $networkConfigType = NetworkConfig::class;
  protected $networkConfigDataType = '';
  protected $networkEndpointsType = NetworkEndpoint::class;
  protected $networkEndpointsDataType = 'array';
  protected $schedulingConfigType = SchedulingConfig::class;
  protected $schedulingConfigDataType = '';
  protected $serviceAccountType = ServiceAccount::class;
  protected $serviceAccountDataType = '';
  protected $shieldedInstanceConfigType = ShieldedInstanceConfig::class;
  protected $shieldedInstanceConfigDataType = '';
  protected $symptomsType = Symptom::class;
  protected $symptomsDataType = 'array';
  /** @param string */
  public function setAcceleratorType($acceleratorType)
  {
    $this->acceleratorType = $acceleratorType;
  }
  /** @return string */
  public function getAcceleratorType()
  {
    return $this->acceleratorType;
  }
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
  /** @param string */
  public function setCidrBlock($cidrBlock)
  {
    $this->cidrBlock = $cidrBlock;
  }
  /** @return string */
  public function getCidrBlock()
  {
    return $this->cidrBlock;
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
  /** @param AttachedDisk[] */
  public function setDataDisks($dataDisks)
  {
    $this->dataDisks = $dataDisks;
  }
  /** @return AttachedDisk[] */
  public function getDataDisks()
  {
    return $this->dataDisks;
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
  public function setHealth($health)
  {
    $this->health = $health;
  }
  /** @return string */
  public function getHealth()
  {
    return $this->health;
  }
  /** @param string */
  public function setHealthDescription($healthDescription)
  {
    $this->healthDescription = $healthDescription;
  }
  /** @return string */
  public function getHealthDescription()
  {
    return $this->healthDescription;
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
  /** @param NetworkConfig */
  public function setNetworkConfig(NetworkConfig $networkConfig)
  {
    $this->networkConfig = $networkConfig;
  }
  /** @return NetworkConfig */
  public function getNetworkConfig()
  {
    return $this->networkConfig;
  }
  /** @param NetworkEndpoint[] */
  public function setNetworkEndpoints($networkEndpoints)
  {
    $this->networkEndpoints = $networkEndpoints;
  }
  /** @return NetworkEndpoint[] */
  public function getNetworkEndpoints()
  {
    return $this->networkEndpoints;
  }
  /** @param string */
  public function setRuntimeVersion($runtimeVersion)
  {
    $this->runtimeVersion = $runtimeVersion;
  }
  /** @return string */
  public function getRuntimeVersion()
  {
    return $this->runtimeVersion;
  }
  /** @param SchedulingConfig */
  public function setSchedulingConfig(SchedulingConfig $schedulingConfig)
  {
    $this->schedulingConfig = $schedulingConfig;
  }
  /** @return SchedulingConfig */
  public function getSchedulingConfig()
  {
    return $this->schedulingConfig;
  }
  /** @param ServiceAccount */
  public function setServiceAccount(ServiceAccount $serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return ServiceAccount */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /** @param ShieldedInstanceConfig */
  public function setShieldedInstanceConfig(ShieldedInstanceConfig $shieldedInstanceConfig)
  {
    $this->shieldedInstanceConfig = $shieldedInstanceConfig;
  }
  /** @return ShieldedInstanceConfig */
  public function getShieldedInstanceConfig()
  {
    return $this->shieldedInstanceConfig;
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
  /** @param Symptom[] */
  public function setSymptoms($symptoms)
  {
    $this->symptoms = $symptoms;
  }
  /** @return Symptom[] */
  public function getSymptoms()
  {
    return $this->symptoms;
  }
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
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
  public $cancelRequested;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $statusDetail;
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
  public function setCancelRequested($cancelRequested)
  {
    $this->cancelRequested = $cancelRequested;
  }
  /** @return bool */
  public function getCancelRequested()
  {
    return $this->cancelRequested;
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
  public function setStatusDetail($statusDetail)
  {
    $this->statusDetail = $statusDetail;
  }
  /** @return string */
  public function getStatusDetail()
  {
    return $this->statusDetail;
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

class RuntimeVersion extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $version;

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

class SchedulingConfig extends \Google\Model
{
  /** @var bool */
  public $preemptible;
  /** @var bool */
  public $reserved;

  /** @param bool */
  public function setPreemptible($preemptible)
  {
    $this->preemptible = $preemptible;
  }
  /** @return bool */
  public function getPreemptible()
  {
    return $this->preemptible;
  }
  /** @param bool */
  public function setReserved($reserved)
  {
    $this->reserved = $reserved;
  }
  /** @return bool */
  public function getReserved()
  {
    return $this->reserved;
  }
}

class ServiceAccount extends \Google\Collection
{
  /** @var string */
  public $email;
  /** @var string[] */
  public $scope;
  protected $collection_key = 'scope';
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
  /** @param string[] */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string[] */
  public function getScope()
  {
    return $this->scope;
  }
}

class ServiceIdentity extends \Google\Model
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

class ShieldedInstanceConfig extends \Google\Model
{
  /** @var bool */
  public $enableSecureBoot;

  /** @param bool */
  public function setEnableSecureBoot($enableSecureBoot)
  {
    $this->enableSecureBoot = $enableSecureBoot;
  }
  /** @return bool */
  public function getEnableSecureBoot()
  {
    return $this->enableSecureBoot;
  }
}

class StartNodeRequest extends \Google\Model
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

class StopNodeRequest extends \Google\Model
{
}

class Symptom extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $details;
  /** @var string */
  public $symptomType;
  /** @var string */
  public $workerId;

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
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string */
  public function getDetails()
  {
    return $this->details;
  }
  /** @param string */
  public function setSymptomType($symptomType)
  {
    $this->symptomType = $symptomType;
  }
  /** @return string */
  public function getSymptomType()
  {
    return $this->symptomType;
  }
  /** @param string */
  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
  /** @return string */
  public function getWorkerId()
  {
    return $this->workerId;
  }
}

class TpuEmpty extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AcceleratorType::class, 'Google_Service_TPU_AcceleratorType');
class_alias(AccessConfig::class, 'Google_Service_TPU_AccessConfig');
class_alias(AttachedDisk::class, 'Google_Service_TPU_AttachedDisk');
class_alias(GenerateServiceIdentityRequest::class, 'Google_Service_TPU_GenerateServiceIdentityRequest');
class_alias(GenerateServiceIdentityResponse::class, 'Google_Service_TPU_GenerateServiceIdentityResponse');
class_alias(GetGuestAttributesRequest::class, 'Google_Service_TPU_GetGuestAttributesRequest');
class_alias(GetGuestAttributesResponse::class, 'Google_Service_TPU_GetGuestAttributesResponse');
class_alias(GuestAttributes::class, 'Google_Service_TPU_GuestAttributes');
class_alias(GuestAttributesEntry::class, 'Google_Service_TPU_GuestAttributesEntry');
class_alias(GuestAttributesValue::class, 'Google_Service_TPU_GuestAttributesValue');
class_alias(ListAcceleratorTypesResponse::class, 'Google_Service_TPU_ListAcceleratorTypesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_TPU_ListLocationsResponse');
class_alias(ListNodesResponse::class, 'Google_Service_TPU_ListNodesResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_TPU_ListOperationsResponse');
class_alias(ListRuntimeVersionsResponse::class, 'Google_Service_TPU_ListRuntimeVersionsResponse');
class_alias(Location::class, 'Google_Service_TPU_Location');
class_alias(NetworkConfig::class, 'Google_Service_TPU_NetworkConfig');
class_alias(NetworkEndpoint::class, 'Google_Service_TPU_NetworkEndpoint');
class_alias(Node::class, 'Google_Service_TPU_Node');
class_alias(Operation::class, 'Google_Service_TPU_Operation');
class_alias(OperationMetadata::class, 'Google_Service_TPU_OperationMetadata');
class_alias(RuntimeVersion::class, 'Google_Service_TPU_RuntimeVersion');
class_alias(SchedulingConfig::class, 'Google_Service_TPU_SchedulingConfig');
class_alias(ServiceAccount::class, 'Google_Service_TPU_ServiceAccount');
class_alias(ServiceIdentity::class, 'Google_Service_TPU_ServiceIdentity');
class_alias(ShieldedInstanceConfig::class, 'Google_Service_TPU_ShieldedInstanceConfig');
class_alias(StartNodeRequest::class, 'Google_Service_TPU_StartNodeRequest');
class_alias(Status::class, 'Google_Service_TPU_Status');
class_alias(StopNodeRequest::class, 'Google_Service_TPU_StopNodeRequest');
class_alias(Symptom::class, 'Google_Service_TPU_Symptom');
class_alias(TpuEmpty::class, 'Google_Service_TPU_TpuEmpty');
