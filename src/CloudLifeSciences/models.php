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

namespace Google\Service\CloudLifeSciences;

class Accelerator extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var string */
  public $type;

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

class Action extends \Google\Collection
{
  /** @var bool */
  public $alwaysRun;
  /** @var bool */
  public $blockExternalNetwork;
  /** @var string[] */
  public $commands;
  /** @var string */
  public $containerName;
  /** @var Secret */
  public $credentials;
  /** @var bool */
  public $disableImagePrefetch;
  /** @var bool */
  public $disableStandardErrorCapture;
  /** @var bool */
  public $enableFuse;
  /** @var Secret */
  public $encryptedEnvironment;
  /** @var string */
  public $entrypoint;
  /** @var string[] */
  public $environment;
  /** @var bool */
  public $ignoreExitStatus;
  /** @var string */
  public $imageUri;
  /** @var string[] */
  public $labels;
  /** @var Mount[] */
  public $mounts;
  /** @var string */
  public $pidNamespace;
  /** @var int[] */
  public $portMappings;
  /** @var bool */
  public $publishExposedPorts;
  /** @var bool */
  public $runInBackground;
  /** @var string */
  public $timeout;
  protected $collection_key = 'mounts';
  protected $credentialsType = Secret::class;
  protected $credentialsDataType = '';
  protected $encryptedEnvironmentType = Secret::class;
  protected $encryptedEnvironmentDataType = '';
  protected $mountsType = Mount::class;
  protected $mountsDataType = 'array';
  /** @param bool */
  public function setAlwaysRun($alwaysRun)
  {
    $this->alwaysRun = $alwaysRun;
  }
  /** @return bool */
  public function getAlwaysRun()
  {
    return $this->alwaysRun;
  }
  /** @param bool */
  public function setBlockExternalNetwork($blockExternalNetwork)
  {
    $this->blockExternalNetwork = $blockExternalNetwork;
  }
  /** @return bool */
  public function getBlockExternalNetwork()
  {
    return $this->blockExternalNetwork;
  }
  /** @param string[] */
  public function setCommands($commands)
  {
    $this->commands = $commands;
  }
  /** @return string[] */
  public function getCommands()
  {
    return $this->commands;
  }
  /** @param string */
  public function setContainerName($containerName)
  {
    $this->containerName = $containerName;
  }
  /** @return string */
  public function getContainerName()
  {
    return $this->containerName;
  }
  /** @param Secret */
  public function setCredentials(Secret $credentials)
  {
    $this->credentials = $credentials;
  }
  /** @return Secret */
  public function getCredentials()
  {
    return $this->credentials;
  }
  /** @param bool */
  public function setDisableImagePrefetch($disableImagePrefetch)
  {
    $this->disableImagePrefetch = $disableImagePrefetch;
  }
  /** @return bool */
  public function getDisableImagePrefetch()
  {
    return $this->disableImagePrefetch;
  }
  /** @param bool */
  public function setDisableStandardErrorCapture($disableStandardErrorCapture)
  {
    $this->disableStandardErrorCapture = $disableStandardErrorCapture;
  }
  /** @return bool */
  public function getDisableStandardErrorCapture()
  {
    return $this->disableStandardErrorCapture;
  }
  /** @param bool */
  public function setEnableFuse($enableFuse)
  {
    $this->enableFuse = $enableFuse;
  }
  /** @return bool */
  public function getEnableFuse()
  {
    return $this->enableFuse;
  }
  /** @param Secret */
  public function setEncryptedEnvironment(Secret $encryptedEnvironment)
  {
    $this->encryptedEnvironment = $encryptedEnvironment;
  }
  /** @return Secret */
  public function getEncryptedEnvironment()
  {
    return $this->encryptedEnvironment;
  }
  /** @param string */
  public function setEntrypoint($entrypoint)
  {
    $this->entrypoint = $entrypoint;
  }
  /** @return string */
  public function getEntrypoint()
  {
    return $this->entrypoint;
  }
  /** @param string[] */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return string[] */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param bool */
  public function setIgnoreExitStatus($ignoreExitStatus)
  {
    $this->ignoreExitStatus = $ignoreExitStatus;
  }
  /** @return bool */
  public function getIgnoreExitStatus()
  {
    return $this->ignoreExitStatus;
  }
  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
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
  /** @param Mount[] */
  public function setMounts($mounts)
  {
    $this->mounts = $mounts;
  }
  /** @return Mount[] */
  public function getMounts()
  {
    return $this->mounts;
  }
  /** @param string */
  public function setPidNamespace($pidNamespace)
  {
    $this->pidNamespace = $pidNamespace;
  }
  /** @return string */
  public function getPidNamespace()
  {
    return $this->pidNamespace;
  }
  /** @param int[] */
  public function setPortMappings($portMappings)
  {
    $this->portMappings = $portMappings;
  }
  /** @return int[] */
  public function getPortMappings()
  {
    return $this->portMappings;
  }
  /** @param bool */
  public function setPublishExposedPorts($publishExposedPorts)
  {
    $this->publishExposedPorts = $publishExposedPorts;
  }
  /** @return bool */
  public function getPublishExposedPorts()
  {
    return $this->publishExposedPorts;
  }
  /** @param bool */
  public function setRunInBackground($runInBackground)
  {
    $this->runInBackground = $runInBackground;
  }
  /** @return bool */
  public function getRunInBackground()
  {
    return $this->runInBackground;
  }
  /** @param string */
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class ContainerKilledEvent extends \Google\Model
{
  /** @var int */
  public $actionId;

  /** @param int */
  public function setActionId($actionId)
  {
    $this->actionId = $actionId;
  }
  /** @return int */
  public function getActionId()
  {
    return $this->actionId;
  }
}

class ContainerStartedEvent extends \Google\Model
{
  /** @var int */
  public $actionId;
  /** @var string */
  public $ipAddress;
  /** @var int[] */
  public $portMappings;

  /** @param int */
  public function setActionId($actionId)
  {
    $this->actionId = $actionId;
  }
  /** @return int */
  public function getActionId()
  {
    return $this->actionId;
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
  /** @param int[] */
  public function setPortMappings($portMappings)
  {
    $this->portMappings = $portMappings;
  }
  /** @return int[] */
  public function getPortMappings()
  {
    return $this->portMappings;
  }
}

class ContainerStoppedEvent extends \Google\Model
{
  /** @var int */
  public $actionId;
  /** @var int */
  public $exitStatus;
  /** @var string */
  public $stderr;

  /** @param int */
  public function setActionId($actionId)
  {
    $this->actionId = $actionId;
  }
  /** @return int */
  public function getActionId()
  {
    return $this->actionId;
  }
  /** @param int */
  public function setExitStatus($exitStatus)
  {
    $this->exitStatus = $exitStatus;
  }
  /** @return int */
  public function getExitStatus()
  {
    return $this->exitStatus;
  }
  /** @param string */
  public function setStderr($stderr)
  {
    $this->stderr = $stderr;
  }
  /** @return string */
  public function getStderr()
  {
    return $this->stderr;
  }
}

class DelayedEvent extends \Google\Collection
{
  /** @var string */
  public $cause;
  /** @var string[] */
  public $metrics;
  protected $collection_key = 'metrics';
  /** @param string */
  public function setCause($cause)
  {
    $this->cause = $cause;
  }
  /** @return string */
  public function getCause()
  {
    return $this->cause;
  }
  /** @param string[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return string[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
}

class Disk extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var int */
  public $sizeGb;
  /** @var string */
  public $sourceImage;
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
  /** @param int */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /** @return int */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
  /** @param string */
  public function setSourceImage($sourceImage)
  {
    $this->sourceImage = $sourceImage;
  }
  /** @return string */
  public function getSourceImage()
  {
    return $this->sourceImage;
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

class Event extends \Google\Model
{
  /** @var ContainerKilledEvent */
  public $containerKilled;
  /** @var ContainerStartedEvent */
  public $containerStarted;
  /** @var ContainerStoppedEvent */
  public $containerStopped;
  /** @var DelayedEvent */
  public $delayed;
  /** @var string */
  public $description;
  /** @var FailedEvent */
  public $failed;
  /** @var PullStartedEvent */
  public $pullStarted;
  /** @var PullStoppedEvent */
  public $pullStopped;
  /** @var string */
  public $timestamp;
  /** @var UnexpectedExitStatusEvent */
  public $unexpectedExitStatus;
  /** @var WorkerAssignedEvent */
  public $workerAssigned;
  /** @var WorkerReleasedEvent */
  public $workerReleased;
  protected $containerKilledType = ContainerKilledEvent::class;
  protected $containerKilledDataType = '';
  protected $containerStartedType = ContainerStartedEvent::class;
  protected $containerStartedDataType = '';
  protected $containerStoppedType = ContainerStoppedEvent::class;
  protected $containerStoppedDataType = '';
  protected $delayedType = DelayedEvent::class;
  protected $delayedDataType = '';
  protected $failedType = FailedEvent::class;
  protected $failedDataType = '';
  protected $pullStartedType = PullStartedEvent::class;
  protected $pullStartedDataType = '';
  protected $pullStoppedType = PullStoppedEvent::class;
  protected $pullStoppedDataType = '';
  protected $unexpectedExitStatusType = UnexpectedExitStatusEvent::class;
  protected $unexpectedExitStatusDataType = '';
  protected $workerAssignedType = WorkerAssignedEvent::class;
  protected $workerAssignedDataType = '';
  protected $workerReleasedType = WorkerReleasedEvent::class;
  protected $workerReleasedDataType = '';
  /** @param ContainerKilledEvent */
  public function setContainerKilled(ContainerKilledEvent $containerKilled)
  {
    $this->containerKilled = $containerKilled;
  }
  /** @return ContainerKilledEvent */
  public function getContainerKilled()
  {
    return $this->containerKilled;
  }
  /** @param ContainerStartedEvent */
  public function setContainerStarted(ContainerStartedEvent $containerStarted)
  {
    $this->containerStarted = $containerStarted;
  }
  /** @return ContainerStartedEvent */
  public function getContainerStarted()
  {
    return $this->containerStarted;
  }
  /** @param ContainerStoppedEvent */
  public function setContainerStopped(ContainerStoppedEvent $containerStopped)
  {
    $this->containerStopped = $containerStopped;
  }
  /** @return ContainerStoppedEvent */
  public function getContainerStopped()
  {
    return $this->containerStopped;
  }
  /** @param DelayedEvent */
  public function setDelayed(DelayedEvent $delayed)
  {
    $this->delayed = $delayed;
  }
  /** @return DelayedEvent */
  public function getDelayed()
  {
    return $this->delayed;
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
  /** @param FailedEvent */
  public function setFailed(FailedEvent $failed)
  {
    $this->failed = $failed;
  }
  /** @return FailedEvent */
  public function getFailed()
  {
    return $this->failed;
  }
  /** @param PullStartedEvent */
  public function setPullStarted(PullStartedEvent $pullStarted)
  {
    $this->pullStarted = $pullStarted;
  }
  /** @return PullStartedEvent */
  public function getPullStarted()
  {
    return $this->pullStarted;
  }
  /** @param PullStoppedEvent */
  public function setPullStopped(PullStoppedEvent $pullStopped)
  {
    $this->pullStopped = $pullStopped;
  }
  /** @return PullStoppedEvent */
  public function getPullStopped()
  {
    return $this->pullStopped;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
  /** @param UnexpectedExitStatusEvent */
  public function setUnexpectedExitStatus(UnexpectedExitStatusEvent $unexpectedExitStatus)
  {
    $this->unexpectedExitStatus = $unexpectedExitStatus;
  }
  /** @return UnexpectedExitStatusEvent */
  public function getUnexpectedExitStatus()
  {
    return $this->unexpectedExitStatus;
  }
  /** @param WorkerAssignedEvent */
  public function setWorkerAssigned(WorkerAssignedEvent $workerAssigned)
  {
    $this->workerAssigned = $workerAssigned;
  }
  /** @return WorkerAssignedEvent */
  public function getWorkerAssigned()
  {
    return $this->workerAssigned;
  }
  /** @param WorkerReleasedEvent */
  public function setWorkerReleased(WorkerReleasedEvent $workerReleased)
  {
    $this->workerReleased = $workerReleased;
  }
  /** @return WorkerReleasedEvent */
  public function getWorkerReleased()
  {
    return $this->workerReleased;
  }
}

class ExistingDisk extends \Google\Model
{
  /** @var string */
  public $disk;

  /** @param string */
  public function setDisk($disk)
  {
    $this->disk = $disk;
  }
  /** @return string */
  public function getDisk()
  {
    return $this->disk;
  }
}

class FailedEvent extends \Google\Model
{
  /** @var string */
  public $cause;
  /** @var string */
  public $code;

  /** @param string */
  public function setCause($cause)
  {
    $this->cause = $cause;
  }
  /** @return string */
  public function getCause()
  {
    return $this->cause;
  }
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
}

class LifesciencesEmpty extends \Google\Model
{
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

class Metadata extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var Event[] */
  public $events;
  /** @var string[] */
  public $labels;
  /** @var Pipeline */
  public $pipeline;
  /** @var string */
  public $pubSubTopic;
  /** @var string */
  public $startTime;
  protected $collection_key = 'events';
  protected $eventsType = Event::class;
  protected $eventsDataType = 'array';
  protected $pipelineType = Pipeline::class;
  protected $pipelineDataType = '';
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
  /** @param Event[] */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /** @return Event[] */
  public function getEvents()
  {
    return $this->events;
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
  /** @param Pipeline */
  public function setPipeline(Pipeline $pipeline)
  {
    $this->pipeline = $pipeline;
  }
  /** @return Pipeline */
  public function getPipeline()
  {
    return $this->pipeline;
  }
  /** @param string */
  public function setPubSubTopic($pubSubTopic)
  {
    $this->pubSubTopic = $pubSubTopic;
  }
  /** @return string */
  public function getPubSubTopic()
  {
    return $this->pubSubTopic;
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

class Mount extends \Google\Model
{
  /** @var string */
  public $disk;
  /** @var string */
  public $path;
  /** @var bool */
  public $readOnly;

  /** @param string */
  public function setDisk($disk)
  {
    $this->disk = $disk;
  }
  /** @return string */
  public function getDisk()
  {
    return $this->disk;
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
  /** @param bool */
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /** @return bool */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
}

class NFSMount extends \Google\Model
{
  /** @var string */
  public $target;

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
}

class Network extends \Google\Model
{
  /** @var string */
  public $network;
  /** @var string */
  public $subnetwork;
  /** @var bool */
  public $usePrivateAddress;

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
  /** @param bool */
  public function setUsePrivateAddress($usePrivateAddress)
  {
    $this->usePrivateAddress = $usePrivateAddress;
  }
  /** @return bool */
  public function getUsePrivateAddress()
  {
    return $this->usePrivateAddress;
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

class PersistentDisk extends \Google\Model
{
  /** @var int */
  public $sizeGb;
  /** @var string */
  public $sourceImage;
  /** @var string */
  public $type;

  /** @param int */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /** @return int */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
  /** @param string */
  public function setSourceImage($sourceImage)
  {
    $this->sourceImage = $sourceImage;
  }
  /** @return string */
  public function getSourceImage()
  {
    return $this->sourceImage;
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

class Pipeline extends \Google\Collection
{
  /** @var Action[] */
  public $actions;
  /** @var Secret */
  public $encryptedEnvironment;
  /** @var string[] */
  public $environment;
  /** @var Resources */
  public $resources;
  /** @var string */
  public $timeout;
  protected $collection_key = 'actions';
  protected $actionsType = Action::class;
  protected $actionsDataType = 'array';
  protected $encryptedEnvironmentType = Secret::class;
  protected $encryptedEnvironmentDataType = '';
  protected $resourcesType = Resources::class;
  protected $resourcesDataType = '';
  /** @param Action[] */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /** @return Action[] */
  public function getActions()
  {
    return $this->actions;
  }
  /** @param Secret */
  public function setEncryptedEnvironment(Secret $encryptedEnvironment)
  {
    $this->encryptedEnvironment = $encryptedEnvironment;
  }
  /** @return Secret */
  public function getEncryptedEnvironment()
  {
    return $this->encryptedEnvironment;
  }
  /** @param string[] */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return string[] */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param Resources */
  public function setResources(Resources $resources)
  {
    $this->resources = $resources;
  }
  /** @return Resources */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param string */
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
  }
}

class PullStartedEvent extends \Google\Model
{
  /** @var string */
  public $imageUri;

  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
  }
}

class PullStoppedEvent extends \Google\Model
{
  /** @var string */
  public $imageUri;

  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
  }
}

class Resources extends \Google\Collection
{
  /** @var string[] */
  public $regions;
  /** @var VirtualMachine */
  public $virtualMachine;
  /** @var string[] */
  public $zones;
  protected $collection_key = 'zones';
  protected $virtualMachineType = VirtualMachine::class;
  protected $virtualMachineDataType = '';
  /** @param string[] */
  public function setRegions($regions)
  {
    $this->regions = $regions;
  }
  /** @return string[] */
  public function getRegions()
  {
    return $this->regions;
  }
  /** @param VirtualMachine */
  public function setVirtualMachine(VirtualMachine $virtualMachine)
  {
    $this->virtualMachine = $virtualMachine;
  }
  /** @return VirtualMachine */
  public function getVirtualMachine()
  {
    return $this->virtualMachine;
  }
  /** @param string[] */
  public function setZones($zones)
  {
    $this->zones = $zones;
  }
  /** @return string[] */
  public function getZones()
  {
    return $this->zones;
  }
}

class RunPipelineRequest extends \Google\Model
{
  /** @var string[] */
  public $labels;
  /** @var Pipeline */
  public $pipeline;
  /** @var string */
  public $pubSubTopic;
  protected $pipelineType = Pipeline::class;
  protected $pipelineDataType = '';
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
  /** @param Pipeline */
  public function setPipeline(Pipeline $pipeline)
  {
    $this->pipeline = $pipeline;
  }
  /** @return Pipeline */
  public function getPipeline()
  {
    return $this->pipeline;
  }
  /** @param string */
  public function setPubSubTopic($pubSubTopic)
  {
    $this->pubSubTopic = $pubSubTopic;
  }
  /** @return string */
  public function getPubSubTopic()
  {
    return $this->pubSubTopic;
  }
}

class RunPipelineResponse extends \Google\Model
{
}

class Secret extends \Google\Model
{
  /** @var string */
  public $cipherText;
  /** @var string */
  public $keyName;

  /** @param string */
  public function setCipherText($cipherText)
  {
    $this->cipherText = $cipherText;
  }
  /** @return string */
  public function getCipherText()
  {
    return $this->cipherText;
  }
  /** @param string */
  public function setKeyName($keyName)
  {
    $this->keyName = $keyName;
  }
  /** @return string */
  public function getKeyName()
  {
    return $this->keyName;
  }
}

class ServiceAccount extends \Google\Collection
{
  /** @var string */
  public $email;
  /** @var string[] */
  public $scopes;
  protected $collection_key = 'scopes';
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
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /** @return string[] */
  public function getScopes()
  {
    return $this->scopes;
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

class UnexpectedExitStatusEvent extends \Google\Model
{
  /** @var int */
  public $actionId;
  /** @var int */
  public $exitStatus;

  /** @param int */
  public function setActionId($actionId)
  {
    $this->actionId = $actionId;
  }
  /** @return int */
  public function getActionId()
  {
    return $this->actionId;
  }
  /** @param int */
  public function setExitStatus($exitStatus)
  {
    $this->exitStatus = $exitStatus;
  }
  /** @return int */
  public function getExitStatus()
  {
    return $this->exitStatus;
  }
}

class VirtualMachine extends \Google\Collection
{
  /** @var Accelerator[] */
  public $accelerators;
  /** @var int */
  public $bootDiskSizeGb;
  /** @var string */
  public $bootImage;
  /** @var string */
  public $cpuPlatform;
  /** @var Disk[] */
  public $disks;
  /** @var string[] */
  public $dockerCacheImages;
  /** @var bool */
  public $enableStackdriverMonitoring;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $machineType;
  /** @var Network */
  public $network;
  /** @var string */
  public $nvidiaDriverVersion;
  /** @var bool */
  public $preemptible;
  /** @var string */
  public $reservation;
  /** @var ServiceAccount */
  public $serviceAccount;
  /** @var Volume[] */
  public $volumes;
  protected $collection_key = 'volumes';
  protected $acceleratorsType = Accelerator::class;
  protected $acceleratorsDataType = 'array';
  protected $disksType = Disk::class;
  protected $disksDataType = 'array';
  protected $networkType = Network::class;
  protected $networkDataType = '';
  protected $serviceAccountType = ServiceAccount::class;
  protected $serviceAccountDataType = '';
  protected $volumesType = Volume::class;
  protected $volumesDataType = 'array';
  /** @param Accelerator[] */
  public function setAccelerators($accelerators)
  {
    $this->accelerators = $accelerators;
  }
  /** @return Accelerator[] */
  public function getAccelerators()
  {
    return $this->accelerators;
  }
  /** @param int */
  public function setBootDiskSizeGb($bootDiskSizeGb)
  {
    $this->bootDiskSizeGb = $bootDiskSizeGb;
  }
  /** @return int */
  public function getBootDiskSizeGb()
  {
    return $this->bootDiskSizeGb;
  }
  /** @param string */
  public function setBootImage($bootImage)
  {
    $this->bootImage = $bootImage;
  }
  /** @return string */
  public function getBootImage()
  {
    return $this->bootImage;
  }
  /** @param string */
  public function setCpuPlatform($cpuPlatform)
  {
    $this->cpuPlatform = $cpuPlatform;
  }
  /** @return string */
  public function getCpuPlatform()
  {
    return $this->cpuPlatform;
  }
  /** @param Disk[] */
  public function setDisks($disks)
  {
    $this->disks = $disks;
  }
  /** @return Disk[] */
  public function getDisks()
  {
    return $this->disks;
  }
  /** @param string[] */
  public function setDockerCacheImages($dockerCacheImages)
  {
    $this->dockerCacheImages = $dockerCacheImages;
  }
  /** @return string[] */
  public function getDockerCacheImages()
  {
    return $this->dockerCacheImages;
  }
  /** @param bool */
  public function setEnableStackdriverMonitoring($enableStackdriverMonitoring)
  {
    $this->enableStackdriverMonitoring = $enableStackdriverMonitoring;
  }
  /** @return bool */
  public function getEnableStackdriverMonitoring()
  {
    return $this->enableStackdriverMonitoring;
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
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /** @param Network */
  public function setNetwork(Network $network)
  {
    $this->network = $network;
  }
  /** @return Network */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param string */
  public function setNvidiaDriverVersion($nvidiaDriverVersion)
  {
    $this->nvidiaDriverVersion = $nvidiaDriverVersion;
  }
  /** @return string */
  public function getNvidiaDriverVersion()
  {
    return $this->nvidiaDriverVersion;
  }
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
  /** @param string */
  public function setReservation($reservation)
  {
    $this->reservation = $reservation;
  }
  /** @return string */
  public function getReservation()
  {
    return $this->reservation;
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
  /** @param Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
}

class Volume extends \Google\Model
{
  /** @var ExistingDisk */
  public $existingDisk;
  /** @var NFSMount */
  public $nfsMount;
  /** @var PersistentDisk */
  public $persistentDisk;
  /** @var string */
  public $volume;
  protected $existingDiskType = ExistingDisk::class;
  protected $existingDiskDataType = '';
  protected $nfsMountType = NFSMount::class;
  protected $nfsMountDataType = '';
  protected $persistentDiskType = PersistentDisk::class;
  protected $persistentDiskDataType = '';
  /** @param ExistingDisk */
  public function setExistingDisk(ExistingDisk $existingDisk)
  {
    $this->existingDisk = $existingDisk;
  }
  /** @return ExistingDisk */
  public function getExistingDisk()
  {
    return $this->existingDisk;
  }
  /** @param NFSMount */
  public function setNfsMount(NFSMount $nfsMount)
  {
    $this->nfsMount = $nfsMount;
  }
  /** @return NFSMount */
  public function getNfsMount()
  {
    return $this->nfsMount;
  }
  /** @param PersistentDisk */
  public function setPersistentDisk(PersistentDisk $persistentDisk)
  {
    $this->persistentDisk = $persistentDisk;
  }
  /** @return PersistentDisk */
  public function getPersistentDisk()
  {
    return $this->persistentDisk;
  }
  /** @param string */
  public function setVolume($volume)
  {
    $this->volume = $volume;
  }
  /** @return string */
  public function getVolume()
  {
    return $this->volume;
  }
}

class WorkerAssignedEvent extends \Google\Model
{
  /** @var string */
  public $instance;
  /** @var string */
  public $machineType;
  /** @var string */
  public $zone;

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
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
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

class WorkerReleasedEvent extends \Google\Model
{
  /** @var string */
  public $instance;
  /** @var string */
  public $zone;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Accelerator::class, 'Google_Service_CloudLifeSciences_Accelerator');
class_alias(Action::class, 'Google_Service_CloudLifeSciences_Action');
class_alias(CancelOperationRequest::class, 'Google_Service_CloudLifeSciences_CancelOperationRequest');
class_alias(ContainerKilledEvent::class, 'Google_Service_CloudLifeSciences_ContainerKilledEvent');
class_alias(ContainerStartedEvent::class, 'Google_Service_CloudLifeSciences_ContainerStartedEvent');
class_alias(ContainerStoppedEvent::class, 'Google_Service_CloudLifeSciences_ContainerStoppedEvent');
class_alias(DelayedEvent::class, 'Google_Service_CloudLifeSciences_DelayedEvent');
class_alias(Disk::class, 'Google_Service_CloudLifeSciences_Disk');
class_alias(Event::class, 'Google_Service_CloudLifeSciences_Event');
class_alias(ExistingDisk::class, 'Google_Service_CloudLifeSciences_ExistingDisk');
class_alias(FailedEvent::class, 'Google_Service_CloudLifeSciences_FailedEvent');
class_alias(LifesciencesEmpty::class, 'Google_Service_CloudLifeSciences_LifesciencesEmpty');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudLifeSciences_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudLifeSciences_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_CloudLifeSciences_Location');
class_alias(Metadata::class, 'Google_Service_CloudLifeSciences_Metadata');
class_alias(Mount::class, 'Google_Service_CloudLifeSciences_Mount');
class_alias(NFSMount::class, 'Google_Service_CloudLifeSciences_NFSMount');
class_alias(Network::class, 'Google_Service_CloudLifeSciences_Network');
class_alias(Operation::class, 'Google_Service_CloudLifeSciences_Operation');
class_alias(PersistentDisk::class, 'Google_Service_CloudLifeSciences_PersistentDisk');
class_alias(Pipeline::class, 'Google_Service_CloudLifeSciences_Pipeline');
class_alias(PullStartedEvent::class, 'Google_Service_CloudLifeSciences_PullStartedEvent');
class_alias(PullStoppedEvent::class, 'Google_Service_CloudLifeSciences_PullStoppedEvent');
class_alias(Resources::class, 'Google_Service_CloudLifeSciences_Resources');
class_alias(RunPipelineRequest::class, 'Google_Service_CloudLifeSciences_RunPipelineRequest');
class_alias(RunPipelineResponse::class, 'Google_Service_CloudLifeSciences_RunPipelineResponse');
class_alias(Secret::class, 'Google_Service_CloudLifeSciences_Secret');
class_alias(ServiceAccount::class, 'Google_Service_CloudLifeSciences_ServiceAccount');
class_alias(Status::class, 'Google_Service_CloudLifeSciences_Status');
class_alias(UnexpectedExitStatusEvent::class, 'Google_Service_CloudLifeSciences_UnexpectedExitStatusEvent');
class_alias(VirtualMachine::class, 'Google_Service_CloudLifeSciences_VirtualMachine');
class_alias(Volume::class, 'Google_Service_CloudLifeSciences_Volume');
class_alias(WorkerAssignedEvent::class, 'Google_Service_CloudLifeSciences_WorkerAssignedEvent');
class_alias(WorkerReleasedEvent::class, 'Google_Service_CloudLifeSciences_WorkerReleasedEvent');
