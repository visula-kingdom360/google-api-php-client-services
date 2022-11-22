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

namespace Google\Service\CloudRedis;

class ExportInstanceRequest extends \Google\Model
{
  /** @var OutputConfig */
  public $outputConfig;
  protected $outputConfigType = OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param OutputConfig */
  public function setOutputConfig(OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class FailoverInstanceRequest extends \Google\Model
{
  /** @var string */
  public $dataProtectionMode;

  /** @param string */
  public function setDataProtectionMode($dataProtectionMode)
  {
    $this->dataProtectionMode = $dataProtectionMode;
  }
  /** @return string */
  public function getDataProtectionMode()
  {
    return $this->dataProtectionMode;
  }
}

class GcsDestination extends \Google\Model
{
  /** @var string */
  public $uri;

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

class GcsSource extends \Google\Model
{
  /** @var string */
  public $uri;

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

class GoogleCloudRedisV1LocationMetadata extends \Google\Model
{
  /** @var GoogleCloudRedisV1ZoneMetadata[] */
  public $availableZones;
  protected $availableZonesType = GoogleCloudRedisV1ZoneMetadata::class;
  protected $availableZonesDataType = 'map';
  /** @param GoogleCloudRedisV1ZoneMetadata[] */
  public function setAvailableZones($availableZones)
  {
    $this->availableZones = $availableZones;
  }
  /** @return GoogleCloudRedisV1ZoneMetadata[] */
  public function getAvailableZones()
  {
    return $this->availableZones;
  }
}

class GoogleCloudRedisV1OperationMetadata extends \Google\Model
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

class GoogleCloudRedisV1ZoneMetadata extends \Google\Model
{
}

class ImportInstanceRequest extends \Google\Model
{
  /** @var InputConfig */
  public $inputConfig;
  protected $inputConfigType = InputConfig::class;
  protected $inputConfigDataType = '';
  /** @param InputConfig */
  public function setInputConfig(InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
}

class InputConfig extends \Google\Model
{
  /** @var GcsSource */
  public $gcsSource;
  protected $gcsSourceType = GcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param GcsSource */
  public function setGcsSource(GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class Instance extends \Google\Collection
{
  /** @var string */
  public $alternativeLocationId;
  /** @var bool */
  public $authEnabled;
  /** @var string */
  public $authorizedNetwork;
  /** @var string */
  public $connectMode;
  /** @var string */
  public $createTime;
  /** @var string */
  public $currentLocationId;
  /** @var string */
  public $customerManagedKey;
  /** @var string */
  public $displayName;
  /** @var string */
  public $host;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $locationId;
  /** @var MaintenancePolicy */
  public $maintenancePolicy;
  /** @var MaintenanceSchedule */
  public $maintenanceSchedule;
  /** @var int */
  public $memorySizeGb;
  /** @var string */
  public $name;
  /** @var NodeInfo[] */
  public $nodes;
  /** @var PersistenceConfig */
  public $persistenceConfig;
  /** @var string */
  public $persistenceIamIdentity;
  /** @var int */
  public $port;
  /** @var string */
  public $readEndpoint;
  /** @var int */
  public $readEndpointPort;
  /** @var string */
  public $readReplicasMode;
  /** @var string[] */
  public $redisConfigs;
  /** @var string */
  public $redisVersion;
  /** @var int */
  public $replicaCount;
  /** @var string */
  public $reservedIpRange;
  /** @var string */
  public $secondaryIpRange;
  /** @var TlsCertificate[] */
  public $serverCaCerts;
  /** @var string */
  public $state;
  /** @var string */
  public $statusMessage;
  /** @var string[] */
  public $suspensionReasons;
  /** @var string */
  public $tier;
  /** @var string */
  public $transitEncryptionMode;
  protected $collection_key = 'suspensionReasons';
  protected $maintenancePolicyType = MaintenancePolicy::class;
  protected $maintenancePolicyDataType = '';
  protected $maintenanceScheduleType = MaintenanceSchedule::class;
  protected $maintenanceScheduleDataType = '';
  protected $nodesType = NodeInfo::class;
  protected $nodesDataType = 'array';
  protected $persistenceConfigType = PersistenceConfig::class;
  protected $persistenceConfigDataType = '';
  protected $serverCaCertsType = TlsCertificate::class;
  protected $serverCaCertsDataType = 'array';
  /** @param string */
  public function setAlternativeLocationId($alternativeLocationId)
  {
    $this->alternativeLocationId = $alternativeLocationId;
  }
  /** @return string */
  public function getAlternativeLocationId()
  {
    return $this->alternativeLocationId;
  }
  /** @param bool */
  public function setAuthEnabled($authEnabled)
  {
    $this->authEnabled = $authEnabled;
  }
  /** @return bool */
  public function getAuthEnabled()
  {
    return $this->authEnabled;
  }
  /** @param string */
  public function setAuthorizedNetwork($authorizedNetwork)
  {
    $this->authorizedNetwork = $authorizedNetwork;
  }
  /** @return string */
  public function getAuthorizedNetwork()
  {
    return $this->authorizedNetwork;
  }
  /** @param string */
  public function setConnectMode($connectMode)
  {
    $this->connectMode = $connectMode;
  }
  /** @return string */
  public function getConnectMode()
  {
    return $this->connectMode;
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
  public function setCurrentLocationId($currentLocationId)
  {
    $this->currentLocationId = $currentLocationId;
  }
  /** @return string */
  public function getCurrentLocationId()
  {
    return $this->currentLocationId;
  }
  /** @param string */
  public function setCustomerManagedKey($customerManagedKey)
  {
    $this->customerManagedKey = $customerManagedKey;
  }
  /** @return string */
  public function getCustomerManagedKey()
  {
    return $this->customerManagedKey;
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
  public function setHost($host)
  {
    $this->host = $host;
  }
  /** @return string */
  public function getHost()
  {
    return $this->host;
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
  /** @param MaintenancePolicy */
  public function setMaintenancePolicy(MaintenancePolicy $maintenancePolicy)
  {
    $this->maintenancePolicy = $maintenancePolicy;
  }
  /** @return MaintenancePolicy */
  public function getMaintenancePolicy()
  {
    return $this->maintenancePolicy;
  }
  /** @param MaintenanceSchedule */
  public function setMaintenanceSchedule(MaintenanceSchedule $maintenanceSchedule)
  {
    $this->maintenanceSchedule = $maintenanceSchedule;
  }
  /** @return MaintenanceSchedule */
  public function getMaintenanceSchedule()
  {
    return $this->maintenanceSchedule;
  }
  /** @param int */
  public function setMemorySizeGb($memorySizeGb)
  {
    $this->memorySizeGb = $memorySizeGb;
  }
  /** @return int */
  public function getMemorySizeGb()
  {
    return $this->memorySizeGb;
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
  /** @param NodeInfo[] */
  public function setNodes($nodes)
  {
    $this->nodes = $nodes;
  }
  /** @return NodeInfo[] */
  public function getNodes()
  {
    return $this->nodes;
  }
  /** @param PersistenceConfig */
  public function setPersistenceConfig(PersistenceConfig $persistenceConfig)
  {
    $this->persistenceConfig = $persistenceConfig;
  }
  /** @return PersistenceConfig */
  public function getPersistenceConfig()
  {
    return $this->persistenceConfig;
  }
  /** @param string */
  public function setPersistenceIamIdentity($persistenceIamIdentity)
  {
    $this->persistenceIamIdentity = $persistenceIamIdentity;
  }
  /** @return string */
  public function getPersistenceIamIdentity()
  {
    return $this->persistenceIamIdentity;
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
  /** @param string */
  public function setReadEndpoint($readEndpoint)
  {
    $this->readEndpoint = $readEndpoint;
  }
  /** @return string */
  public function getReadEndpoint()
  {
    return $this->readEndpoint;
  }
  /** @param int */
  public function setReadEndpointPort($readEndpointPort)
  {
    $this->readEndpointPort = $readEndpointPort;
  }
  /** @return int */
  public function getReadEndpointPort()
  {
    return $this->readEndpointPort;
  }
  /** @param string */
  public function setReadReplicasMode($readReplicasMode)
  {
    $this->readReplicasMode = $readReplicasMode;
  }
  /** @return string */
  public function getReadReplicasMode()
  {
    return $this->readReplicasMode;
  }
  /** @param string[] */
  public function setRedisConfigs($redisConfigs)
  {
    $this->redisConfigs = $redisConfigs;
  }
  /** @return string[] */
  public function getRedisConfigs()
  {
    return $this->redisConfigs;
  }
  /** @param string */
  public function setRedisVersion($redisVersion)
  {
    $this->redisVersion = $redisVersion;
  }
  /** @return string */
  public function getRedisVersion()
  {
    return $this->redisVersion;
  }
  /** @param int */
  public function setReplicaCount($replicaCount)
  {
    $this->replicaCount = $replicaCount;
  }
  /** @return int */
  public function getReplicaCount()
  {
    return $this->replicaCount;
  }
  /** @param string */
  public function setReservedIpRange($reservedIpRange)
  {
    $this->reservedIpRange = $reservedIpRange;
  }
  /** @return string */
  public function getReservedIpRange()
  {
    return $this->reservedIpRange;
  }
  /** @param string */
  public function setSecondaryIpRange($secondaryIpRange)
  {
    $this->secondaryIpRange = $secondaryIpRange;
  }
  /** @return string */
  public function getSecondaryIpRange()
  {
    return $this->secondaryIpRange;
  }
  /** @param TlsCertificate[] */
  public function setServerCaCerts($serverCaCerts)
  {
    $this->serverCaCerts = $serverCaCerts;
  }
  /** @return TlsCertificate[] */
  public function getServerCaCerts()
  {
    return $this->serverCaCerts;
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
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /** @return string */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /** @param string[] */
  public function setSuspensionReasons($suspensionReasons)
  {
    $this->suspensionReasons = $suspensionReasons;
  }
  /** @return string[] */
  public function getSuspensionReasons()
  {
    return $this->suspensionReasons;
  }
  /** @param string */
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  /** @return string */
  public function getTier()
  {
    return $this->tier;
  }
  /** @param string */
  public function setTransitEncryptionMode($transitEncryptionMode)
  {
    $this->transitEncryptionMode = $transitEncryptionMode;
  }
  /** @return string */
  public function getTransitEncryptionMode()
  {
    return $this->transitEncryptionMode;
  }
}

class InstanceAuthString extends \Google\Model
{
  /** @var string */
  public $authString;

  /** @param string */
  public function setAuthString($authString)
  {
    $this->authString = $authString;
  }
  /** @return string */
  public function getAuthString()
  {
    return $this->authString;
  }
}

class ListInstancesResponse extends \Google\Collection
{
  /** @var Instance[] */
  public $instances;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $instancesType = Instance::class;
  protected $instancesDataType = 'array';
  /** @param Instance[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return Instance[] */
  public function getInstances()
  {
    return $this->instances;
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

class MaintenancePolicy extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $updateTime;
  /** @var WeeklyMaintenanceWindow[] */
  public $weeklyMaintenanceWindow;
  protected $collection_key = 'weeklyMaintenanceWindow';
  protected $weeklyMaintenanceWindowType = WeeklyMaintenanceWindow::class;
  protected $weeklyMaintenanceWindowDataType = 'array';
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /** @param WeeklyMaintenanceWindow[] */
  public function setWeeklyMaintenanceWindow($weeklyMaintenanceWindow)
  {
    $this->weeklyMaintenanceWindow = $weeklyMaintenanceWindow;
  }
  /** @return WeeklyMaintenanceWindow[] */
  public function getWeeklyMaintenanceWindow()
  {
    return $this->weeklyMaintenanceWindow;
  }
}

class MaintenanceSchedule extends \Google\Model
{
  /** @var bool */
  public $canReschedule;
  /** @var string */
  public $endTime;
  /** @var string */
  public $scheduleDeadlineTime;
  /** @var string */
  public $startTime;

  /** @param bool */
  public function setCanReschedule($canReschedule)
  {
    $this->canReschedule = $canReschedule;
  }
  /** @return bool */
  public function getCanReschedule()
  {
    return $this->canReschedule;
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
  public function setScheduleDeadlineTime($scheduleDeadlineTime)
  {
    $this->scheduleDeadlineTime = $scheduleDeadlineTime;
  }
  /** @return string */
  public function getScheduleDeadlineTime()
  {
    return $this->scheduleDeadlineTime;
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

class NodeInfo extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $zone;

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
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /** @return string */
  public function getZone()
  {
    return $this->zone;
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

class OutputConfig extends \Google\Model
{
  /** @var GcsDestination */
  public $gcsDestination;
  protected $gcsDestinationType = GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param GcsDestination */
  public function setGcsDestination(GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
}

class PersistenceConfig extends \Google\Model
{
  /** @var string */
  public $persistenceMode;
  /** @var string */
  public $rdbNextSnapshotTime;
  /** @var string */
  public $rdbSnapshotPeriod;
  /** @var string */
  public $rdbSnapshotStartTime;

  /** @param string */
  public function setPersistenceMode($persistenceMode)
  {
    $this->persistenceMode = $persistenceMode;
  }
  /** @return string */
  public function getPersistenceMode()
  {
    return $this->persistenceMode;
  }
  /** @param string */
  public function setRdbNextSnapshotTime($rdbNextSnapshotTime)
  {
    $this->rdbNextSnapshotTime = $rdbNextSnapshotTime;
  }
  /** @return string */
  public function getRdbNextSnapshotTime()
  {
    return $this->rdbNextSnapshotTime;
  }
  /** @param string */
  public function setRdbSnapshotPeriod($rdbSnapshotPeriod)
  {
    $this->rdbSnapshotPeriod = $rdbSnapshotPeriod;
  }
  /** @return string */
  public function getRdbSnapshotPeriod()
  {
    return $this->rdbSnapshotPeriod;
  }
  /** @param string */
  public function setRdbSnapshotStartTime($rdbSnapshotStartTime)
  {
    $this->rdbSnapshotStartTime = $rdbSnapshotStartTime;
  }
  /** @return string */
  public function getRdbSnapshotStartTime()
  {
    return $this->rdbSnapshotStartTime;
  }
}

class ReconciliationOperationMetadata extends \Google\Model
{
  /** @var bool */
  public $deleteResource;
  /** @var string */
  public $exclusiveAction;

  /** @param bool */
  public function setDeleteResource($deleteResource)
  {
    $this->deleteResource = $deleteResource;
  }
  /** @return bool */
  public function getDeleteResource()
  {
    return $this->deleteResource;
  }
  /** @param string */
  public function setExclusiveAction($exclusiveAction)
  {
    $this->exclusiveAction = $exclusiveAction;
  }
  /** @return string */
  public function getExclusiveAction()
  {
    return $this->exclusiveAction;
  }
}

class RedisEmpty extends \Google\Model
{
}

class RescheduleMaintenanceRequest extends \Google\Model
{
  /** @var string */
  public $rescheduleType;
  /** @var string */
  public $scheduleTime;

  /** @param string */
  public function setRescheduleType($rescheduleType)
  {
    $this->rescheduleType = $rescheduleType;
  }
  /** @return string */
  public function getRescheduleType()
  {
    return $this->rescheduleType;
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

class TlsCertificate extends \Google\Model
{
  /** @var string */
  public $cert;
  /** @var string */
  public $createTime;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $serialNumber;
  /** @var string */
  public $sha1Fingerprint;

  /** @param string */
  public function setCert($cert)
  {
    $this->cert = $cert;
  }
  /** @return string */
  public function getCert()
  {
    return $this->cert;
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
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /** @param string */
  public function setSha1Fingerprint($sha1Fingerprint)
  {
    $this->sha1Fingerprint = $sha1Fingerprint;
  }
  /** @return string */
  public function getSha1Fingerprint()
  {
    return $this->sha1Fingerprint;
  }
}

class UpgradeInstanceRequest extends \Google\Model
{
  /** @var string */
  public $redisVersion;

  /** @param string */
  public function setRedisVersion($redisVersion)
  {
    $this->redisVersion = $redisVersion;
  }
  /** @return string */
  public function getRedisVersion()
  {
    return $this->redisVersion;
  }
}

class WeeklyMaintenanceWindow extends \Google\Model
{
  /** @var string */
  public $day;
  /** @var string */
  public $duration;
  /** @var TimeOfDay */
  public $startTime;
  protected $startTimeType = TimeOfDay::class;
  protected $startTimeDataType = '';
  /** @param string */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return string */
  public function getDay()
  {
    return $this->day;
  }
  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param TimeOfDay */
  public function setStartTime(TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return TimeOfDay */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportInstanceRequest::class, 'Google_Service_CloudRedis_ExportInstanceRequest');
class_alias(FailoverInstanceRequest::class, 'Google_Service_CloudRedis_FailoverInstanceRequest');
class_alias(GcsDestination::class, 'Google_Service_CloudRedis_GcsDestination');
class_alias(GcsSource::class, 'Google_Service_CloudRedis_GcsSource');
class_alias(GoogleCloudRedisV1LocationMetadata::class, 'Google_Service_CloudRedis_GoogleCloudRedisV1LocationMetadata');
class_alias(GoogleCloudRedisV1OperationMetadata::class, 'Google_Service_CloudRedis_GoogleCloudRedisV1OperationMetadata');
class_alias(GoogleCloudRedisV1ZoneMetadata::class, 'Google_Service_CloudRedis_GoogleCloudRedisV1ZoneMetadata');
class_alias(ImportInstanceRequest::class, 'Google_Service_CloudRedis_ImportInstanceRequest');
class_alias(InputConfig::class, 'Google_Service_CloudRedis_InputConfig');
class_alias(Instance::class, 'Google_Service_CloudRedis_Instance');
class_alias(InstanceAuthString::class, 'Google_Service_CloudRedis_InstanceAuthString');
class_alias(ListInstancesResponse::class, 'Google_Service_CloudRedis_ListInstancesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudRedis_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudRedis_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_CloudRedis_Location');
class_alias(MaintenancePolicy::class, 'Google_Service_CloudRedis_MaintenancePolicy');
class_alias(MaintenanceSchedule::class, 'Google_Service_CloudRedis_MaintenanceSchedule');
class_alias(NodeInfo::class, 'Google_Service_CloudRedis_NodeInfo');
class_alias(Operation::class, 'Google_Service_CloudRedis_Operation');
class_alias(OutputConfig::class, 'Google_Service_CloudRedis_OutputConfig');
class_alias(PersistenceConfig::class, 'Google_Service_CloudRedis_PersistenceConfig');
class_alias(ReconciliationOperationMetadata::class, 'Google_Service_CloudRedis_ReconciliationOperationMetadata');
class_alias(RedisEmpty::class, 'Google_Service_CloudRedis_RedisEmpty');
class_alias(RescheduleMaintenanceRequest::class, 'Google_Service_CloudRedis_RescheduleMaintenanceRequest');
class_alias(Status::class, 'Google_Service_CloudRedis_Status');
class_alias(TimeOfDay::class, 'Google_Service_CloudRedis_TimeOfDay');
class_alias(TlsCertificate::class, 'Google_Service_CloudRedis_TlsCertificate');
class_alias(UpgradeInstanceRequest::class, 'Google_Service_CloudRedis_UpgradeInstanceRequest');
class_alias(WeeklyMaintenanceWindow::class, 'Google_Service_CloudRedis_WeeklyMaintenanceWindow');
