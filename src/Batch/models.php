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

namespace Google\Service\Batch;

class Accelerator extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var bool */
  public $installGpuDrivers;
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
  /** @param bool */
  public function setInstallGpuDrivers($installGpuDrivers)
  {
    $this->installGpuDrivers = $installGpuDrivers;
  }
  /** @return bool */
  public function getInstallGpuDrivers()
  {
    return $this->installGpuDrivers;
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

class ActionCondition extends \Google\Collection
{
  /** @var int[] */
  public $exitCodes;
  protected $collection_key = 'exitCodes';
  /** @param int[] */
  public function setExitCodes($exitCodes)
  {
    $this->exitCodes = $exitCodes;
  }
  /** @return int[] */
  public function getExitCodes()
  {
    return $this->exitCodes;
  }
}

class AgentInfo extends \Google\Collection
{
  /** @var string */
  public $jobId;
  /** @var string */
  public $reportTime;
  /** @var string */
  public $state;
  /** @var string */
  public $taskGroupId;
  /** @var AgentTaskInfo[] */
  public $tasks;
  protected $collection_key = 'tasks';
  protected $tasksType = AgentTaskInfo::class;
  protected $tasksDataType = 'array';
  /** @param string */
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /** @return string */
  public function getJobId()
  {
    return $this->jobId;
  }
  /** @param string */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /** @return string */
  public function getReportTime()
  {
    return $this->reportTime;
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
  public function setTaskGroupId($taskGroupId)
  {
    $this->taskGroupId = $taskGroupId;
  }
  /** @return string */
  public function getTaskGroupId()
  {
    return $this->taskGroupId;
  }
  /** @param AgentTaskInfo[] */
  public function setTasks($tasks)
  {
    $this->tasks = $tasks;
  }
  /** @return AgentTaskInfo[] */
  public function getTasks()
  {
    return $this->tasks;
  }
}

class AgentMetadata extends \Google\Model
{
  /** @var string */
  public $creationTime;
  /** @var string */
  public $creator;
  /** @var string */
  public $instance;
  /** @var string */
  public $instanceId;
  /** @var string[] */
  public $osRelease;
  /** @var string */
  public $version;
  /** @var string */
  public $zone;

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
  public function setCreator($creator)
  {
    $this->creator = $creator;
  }
  /** @return string */
  public function getCreator()
  {
    return $this->creator;
  }
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
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /** @param string[] */
  public function setOsRelease($osRelease)
  {
    $this->osRelease = $osRelease;
  }
  /** @return string[] */
  public function getOsRelease()
  {
    return $this->osRelease;
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

class AgentTask extends \Google\Model
{
  /** @var string */
  public $intendedState;
  /** @var string */
  public $reachedBarrier;
  /** @var TaskSpec */
  public $spec;
  /** @var TaskStatus */
  public $status;
  /** @var string */
  public $task;
  protected $specType = TaskSpec::class;
  protected $specDataType = '';
  protected $statusType = TaskStatus::class;
  protected $statusDataType = '';
  /** @param string */
  public function setIntendedState($intendedState)
  {
    $this->intendedState = $intendedState;
  }
  /** @return string */
  public function getIntendedState()
  {
    return $this->intendedState;
  }
  /** @param string */
  public function setReachedBarrier($reachedBarrier)
  {
    $this->reachedBarrier = $reachedBarrier;
  }
  /** @return string */
  public function getReachedBarrier()
  {
    return $this->reachedBarrier;
  }
  /** @param TaskSpec */
  public function setSpec(TaskSpec $spec)
  {
    $this->spec = $spec;
  }
  /** @return TaskSpec */
  public function getSpec()
  {
    return $this->spec;
  }
  /** @param TaskStatus */
  public function setStatus(TaskStatus $status)
  {
    $this->status = $status;
  }
  /** @return TaskStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setTask($task)
  {
    $this->task = $task;
  }
  /** @return string */
  public function getTask()
  {
    return $this->task;
  }
}

class AgentTaskInfo extends \Google\Model
{
  /** @var string */
  public $runnable;
  /** @var string */
  public $taskId;
  /** @var TaskStatus */
  public $taskStatus;
  protected $taskStatusType = TaskStatus::class;
  protected $taskStatusDataType = '';
  /** @param string */
  public function setRunnable($runnable)
  {
    $this->runnable = $runnable;
  }
  /** @return string */
  public function getRunnable()
  {
    return $this->runnable;
  }
  /** @param string */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /** @return string */
  public function getTaskId()
  {
    return $this->taskId;
  }
  /** @param TaskStatus */
  public function setTaskStatus(TaskStatus $taskStatus)
  {
    $this->taskStatus = $taskStatus;
  }
  /** @return TaskStatus */
  public function getTaskStatus()
  {
    return $this->taskStatus;
  }
}

class AllocationPolicy extends \Google\Collection
{
  /** @var InstancePolicyOrTemplate[] */
  public $instances;
  /** @var string[] */
  public $labels;
  /** @var LocationPolicy */
  public $location;
  /** @var NetworkPolicy */
  public $network;
  /** @var ServiceAccount */
  public $serviceAccount;
  protected $collection_key = 'instances';
  protected $instancesType = InstancePolicyOrTemplate::class;
  protected $instancesDataType = 'array';
  protected $locationType = LocationPolicy::class;
  protected $locationDataType = '';
  protected $networkType = NetworkPolicy::class;
  protected $networkDataType = '';
  protected $serviceAccountType = ServiceAccount::class;
  protected $serviceAccountDataType = '';
  /** @param InstancePolicyOrTemplate[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return InstancePolicyOrTemplate[] */
  public function getInstances()
  {
    return $this->instances;
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
  /** @param LocationPolicy */
  public function setLocation(LocationPolicy $location)
  {
    $this->location = $location;
  }
  /** @return LocationPolicy */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param NetworkPolicy */
  public function setNetwork(NetworkPolicy $network)
  {
    $this->network = $network;
  }
  /** @return NetworkPolicy */
  public function getNetwork()
  {
    return $this->network;
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
}

class AttachedDisk extends \Google\Model
{
  /** @var string */
  public $deviceName;
  /** @var string */
  public $existingDisk;
  /** @var Disk */
  public $newDisk;
  protected $newDiskType = Disk::class;
  protected $newDiskDataType = '';
  /** @param string */
  public function setDeviceName($deviceName)
  {
    $this->deviceName = $deviceName;
  }
  /** @return string */
  public function getDeviceName()
  {
    return $this->deviceName;
  }
  /** @param string */
  public function setExistingDisk($existingDisk)
  {
    $this->existingDisk = $existingDisk;
  }
  /** @return string */
  public function getExistingDisk()
  {
    return $this->existingDisk;
  }
  /** @param Disk */
  public function setNewDisk(Disk $newDisk)
  {
    $this->newDisk = $newDisk;
  }
  /** @return Disk */
  public function getNewDisk()
  {
    return $this->newDisk;
  }
}

class AuditConfig extends \Google\Collection
{
  /** @var AuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = AuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param AuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return AuditLogConfig[] */
  public function getAuditLogConfigs()
  {
    return $this->auditLogConfigs;
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
}

class AuditLogConfig extends \Google\Collection
{
  /** @var string[] */
  public $exemptedMembers;
  /** @var string */
  public $logType;
  protected $collection_key = 'exemptedMembers';
  /** @param string[] */
  public function setExemptedMembers($exemptedMembers)
  {
    $this->exemptedMembers = $exemptedMembers;
  }
  /** @return string[] */
  public function getExemptedMembers()
  {
    return $this->exemptedMembers;
  }
  /** @param string */
  public function setLogType($logType)
  {
    $this->logType = $logType;
  }
  /** @return string */
  public function getLogType()
  {
    return $this->logType;
  }
}

class Barrier extends \Google\Model
{
  /** @var string */
  public $name;

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

class BatchEmpty extends \Google\Model
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

class CancelOperationRequest extends \Google\Model
{
}

class ComputeResource extends \Google\Model
{
  /** @var string */
  public $bootDiskMib;
  /** @var string */
  public $cpuMilli;
  /** @var string */
  public $memoryMib;

  /** @param string */
  public function setBootDiskMib($bootDiskMib)
  {
    $this->bootDiskMib = $bootDiskMib;
  }
  /** @return string */
  public function getBootDiskMib()
  {
    return $this->bootDiskMib;
  }
  /** @param string */
  public function setCpuMilli($cpuMilli)
  {
    $this->cpuMilli = $cpuMilli;
  }
  /** @return string */
  public function getCpuMilli()
  {
    return $this->cpuMilli;
  }
  /** @param string */
  public function setMemoryMib($memoryMib)
  {
    $this->memoryMib = $memoryMib;
  }
  /** @return string */
  public function getMemoryMib()
  {
    return $this->memoryMib;
  }
}

class Container extends \Google\Collection
{
  /** @var bool */
  public $blockExternalNetwork;
  /** @var string[] */
  public $commands;
  /** @var string */
  public $entrypoint;
  /** @var string */
  public $imageUri;
  /** @var string */
  public $options;
  /** @var string */
  public $password;
  /** @var string */
  public $username;
  /** @var string[] */
  public $volumes;
  protected $collection_key = 'volumes';
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
  public function setEntrypoint($entrypoint)
  {
    $this->entrypoint = $entrypoint;
  }
  /** @return string */
  public function getEntrypoint()
  {
    return $this->entrypoint;
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
  /** @param string */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return string */
  public function getOptions()
  {
    return $this->options;
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
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /** @return string */
  public function getUsername()
  {
    return $this->username;
  }
  /** @param string[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return string[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
}

class Disk extends \Google\Model
{
  /** @var string */
  public $diskInterface;
  /** @var string */
  public $image;
  /** @var string */
  public $sizeGb;
  /** @var string */
  public $snapshot;
  /** @var string */
  public $type;

  /** @param string */
  public function setDiskInterface($diskInterface)
  {
    $this->diskInterface = $diskInterface;
  }
  /** @return string */
  public function getDiskInterface()
  {
    return $this->diskInterface;
  }
  /** @param string */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return string */
  public function getImage()
  {
    return $this->image;
  }
  /** @param string */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /** @return string */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
  /** @param string */
  public function setSnapshot($snapshot)
  {
    $this->snapshot = $snapshot;
  }
  /** @return string */
  public function getSnapshot()
  {
    return $this->snapshot;
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

class Environment extends \Google\Model
{
  /** @var string[] */
  public $variables;

  /** @param string[] */
  public function setVariables($variables)
  {
    $this->variables = $variables;
  }
  /** @return string[] */
  public function getVariables()
  {
    return $this->variables;
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

class GCS extends \Google\Model
{
  /** @var string */
  public $remotePath;

  /** @param string */
  public function setRemotePath($remotePath)
  {
    $this->remotePath = $remotePath;
  }
  /** @return string */
  public function getRemotePath()
  {
    return $this->remotePath;
  }
}

class InstancePolicy extends \Google\Collection
{
  /** @var Accelerator[] */
  public $accelerators;
  /** @var AttachedDisk[] */
  public $disks;
  /** @var string */
  public $machineType;
  /** @var string */
  public $minCpuPlatform;
  /** @var string */
  public $provisioningModel;
  protected $collection_key = 'disks';
  protected $acceleratorsType = Accelerator::class;
  protected $acceleratorsDataType = 'array';
  protected $disksType = AttachedDisk::class;
  protected $disksDataType = 'array';
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
  /** @param AttachedDisk[] */
  public function setDisks($disks)
  {
    $this->disks = $disks;
  }
  /** @return AttachedDisk[] */
  public function getDisks()
  {
    return $this->disks;
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
  public function setMinCpuPlatform($minCpuPlatform)
  {
    $this->minCpuPlatform = $minCpuPlatform;
  }
  /** @return string */
  public function getMinCpuPlatform()
  {
    return $this->minCpuPlatform;
  }
  /** @param string */
  public function setProvisioningModel($provisioningModel)
  {
    $this->provisioningModel = $provisioningModel;
  }
  /** @return string */
  public function getProvisioningModel()
  {
    return $this->provisioningModel;
  }
}

class InstancePolicyOrTemplate extends \Google\Model
{
  /** @var bool */
  public $installGpuDrivers;
  /** @var string */
  public $instanceTemplate;
  /** @var InstancePolicy */
  public $policy;
  protected $policyType = InstancePolicy::class;
  protected $policyDataType = '';
  /** @param bool */
  public function setInstallGpuDrivers($installGpuDrivers)
  {
    $this->installGpuDrivers = $installGpuDrivers;
  }
  /** @return bool */
  public function getInstallGpuDrivers()
  {
    return $this->installGpuDrivers;
  }
  /** @param string */
  public function setInstanceTemplate($instanceTemplate)
  {
    $this->instanceTemplate = $instanceTemplate;
  }
  /** @return string */
  public function getInstanceTemplate()
  {
    return $this->instanceTemplate;
  }
  /** @param InstancePolicy */
  public function setPolicy(InstancePolicy $policy)
  {
    $this->policy = $policy;
  }
  /** @return InstancePolicy */
  public function getPolicy()
  {
    return $this->policy;
  }
}

class InstanceStatus extends \Google\Model
{
  /** @var string */
  public $machineType;
  /** @var string */
  public $provisioningModel;
  /** @var string */
  public $taskPack;

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
  public function setProvisioningModel($provisioningModel)
  {
    $this->provisioningModel = $provisioningModel;
  }
  /** @return string */
  public function getProvisioningModel()
  {
    return $this->provisioningModel;
  }
  /** @param string */
  public function setTaskPack($taskPack)
  {
    $this->taskPack = $taskPack;
  }
  /** @return string */
  public function getTaskPack()
  {
    return $this->taskPack;
  }
}

class Job extends \Google\Collection
{
  /** @var AllocationPolicy */
  public $allocationPolicy;
  /** @var string */
  public $createTime;
  /** @var string[] */
  public $labels;
  /** @var LogsPolicy */
  public $logsPolicy;
  /** @var string */
  public $name;
  /** @var JobNotification[] */
  public $notifications;
  /** @var string */
  public $priority;
  /** @var JobStatus */
  public $status;
  /** @var TaskGroup[] */
  public $taskGroups;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'taskGroups';
  protected $allocationPolicyType = AllocationPolicy::class;
  protected $allocationPolicyDataType = '';
  protected $logsPolicyType = LogsPolicy::class;
  protected $logsPolicyDataType = '';
  protected $notificationsType = JobNotification::class;
  protected $notificationsDataType = 'array';
  protected $statusType = JobStatus::class;
  protected $statusDataType = '';
  protected $taskGroupsType = TaskGroup::class;
  protected $taskGroupsDataType = 'array';
  /** @param AllocationPolicy */
  public function setAllocationPolicy(AllocationPolicy $allocationPolicy)
  {
    $this->allocationPolicy = $allocationPolicy;
  }
  /** @return AllocationPolicy */
  public function getAllocationPolicy()
  {
    return $this->allocationPolicy;
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
  /** @param LogsPolicy */
  public function setLogsPolicy(LogsPolicy $logsPolicy)
  {
    $this->logsPolicy = $logsPolicy;
  }
  /** @return LogsPolicy */
  public function getLogsPolicy()
  {
    return $this->logsPolicy;
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
  /** @param JobNotification[] */
  public function setNotifications($notifications)
  {
    $this->notifications = $notifications;
  }
  /** @return JobNotification[] */
  public function getNotifications()
  {
    return $this->notifications;
  }
  /** @param string */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return string */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param JobStatus */
  public function setStatus(JobStatus $status)
  {
    $this->status = $status;
  }
  /** @return JobStatus */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param TaskGroup[] */
  public function setTaskGroups($taskGroups)
  {
    $this->taskGroups = $taskGroups;
  }
  /** @return TaskGroup[] */
  public function getTaskGroups()
  {
    return $this->taskGroups;
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

class JobNotification extends \Google\Model
{
  /** @var Message */
  public $message;
  /** @var string */
  public $pubsubTopic;
  protected $messageType = Message::class;
  protected $messageDataType = '';
  /** @param Message */
  public function setMessage(Message $message)
  {
    $this->message = $message;
  }
  /** @return Message */
  public function getMessage()
  {
    return $this->message;
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

class JobStatus extends \Google\Collection
{
  /** @var string */
  public $runDuration;
  /** @var string */
  public $state;
  /** @var StatusEvent[] */
  public $statusEvents;
  /** @var TaskGroupStatus[] */
  public $taskGroups;
  protected $collection_key = 'statusEvents';
  protected $statusEventsType = StatusEvent::class;
  protected $statusEventsDataType = 'array';
  protected $taskGroupsType = TaskGroupStatus::class;
  protected $taskGroupsDataType = 'map';
  /** @param string */
  public function setRunDuration($runDuration)
  {
    $this->runDuration = $runDuration;
  }
  /** @return string */
  public function getRunDuration()
  {
    return $this->runDuration;
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
  /** @param StatusEvent[] */
  public function setStatusEvents($statusEvents)
  {
    $this->statusEvents = $statusEvents;
  }
  /** @return StatusEvent[] */
  public function getStatusEvents()
  {
    return $this->statusEvents;
  }
  /** @param TaskGroupStatus[] */
  public function setTaskGroups($taskGroups)
  {
    $this->taskGroups = $taskGroups;
  }
  /** @return TaskGroupStatus[] */
  public function getTaskGroups()
  {
    return $this->taskGroups;
  }
}

class LifecyclePolicy extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var ActionCondition */
  public $actionCondition;
  protected $actionConditionType = ActionCondition::class;
  protected $actionConditionDataType = '';
  /** @param string */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /** @return string */
  public function getAction()
  {
    return $this->action;
  }
  /** @param ActionCondition */
  public function setActionCondition(ActionCondition $actionCondition)
  {
    $this->actionCondition = $actionCondition;
  }
  /** @return ActionCondition */
  public function getActionCondition()
  {
    return $this->actionCondition;
  }
}

class ListJobsResponse extends \Google\Collection
{
  /** @var Job[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $jobsType = Job::class;
  protected $jobsDataType = 'array';
  /** @param Job[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return Job[] */
  public function getJobs()
  {
    return $this->jobs;
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

class ListTasksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Task[] */
  public $tasks;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $tasksType = Task::class;
  protected $tasksDataType = 'array';
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
  /** @param Task[] */
  public function setTasks($tasks)
  {
    $this->tasks = $tasks;
  }
  /** @return Task[] */
  public function getTasks()
  {
    return $this->tasks;
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

class LocationPolicy extends \Google\Collection
{
  /** @var string[] */
  public $allowedLocations;
  protected $collection_key = 'allowedLocations';
  /** @param string[] */
  public function setAllowedLocations($allowedLocations)
  {
    $this->allowedLocations = $allowedLocations;
  }
  /** @return string[] */
  public function getAllowedLocations()
  {
    return $this->allowedLocations;
  }
}

class LogsPolicy extends \Google\Model
{
  /** @var string */
  public $destination;
  /** @var string */
  public $logsPath;

  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string */
  public function setLogsPath($logsPath)
  {
    $this->logsPath = $logsPath;
  }
  /** @return string */
  public function getLogsPath()
  {
    return $this->logsPath;
  }
}

class Message extends \Google\Model
{
  /** @var string */
  public $newJobState;
  /** @var string */
  public $newTaskState;
  /** @var string */
  public $type;

  /** @param string */
  public function setNewJobState($newJobState)
  {
    $this->newJobState = $newJobState;
  }
  /** @return string */
  public function getNewJobState()
  {
    return $this->newJobState;
  }
  /** @param string */
  public function setNewTaskState($newTaskState)
  {
    $this->newTaskState = $newTaskState;
  }
  /** @return string */
  public function getNewTaskState()
  {
    return $this->newTaskState;
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

class NFS extends \Google\Model
{
  /** @var string */
  public $remotePath;
  /** @var string */
  public $server;

  /** @param string */
  public function setRemotePath($remotePath)
  {
    $this->remotePath = $remotePath;
  }
  /** @return string */
  public function getRemotePath()
  {
    return $this->remotePath;
  }
  /** @param string */
  public function setServer($server)
  {
    $this->server = $server;
  }
  /** @return string */
  public function getServer()
  {
    return $this->server;
  }
}

class NetworkInterface extends \Google\Model
{
  /** @var string */
  public $network;
  /** @var bool */
  public $noExternalIpAddress;
  /** @var string */
  public $subnetwork;

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
  /** @param bool */
  public function setNoExternalIpAddress($noExternalIpAddress)
  {
    $this->noExternalIpAddress = $noExternalIpAddress;
  }
  /** @return bool */
  public function getNoExternalIpAddress()
  {
    return $this->noExternalIpAddress;
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

class NetworkPolicy extends \Google\Collection
{
  /** @var NetworkInterface[] */
  public $networkInterfaces;
  protected $collection_key = 'networkInterfaces';
  protected $networkInterfacesType = NetworkInterface::class;
  protected $networkInterfacesDataType = 'array';
  /** @param NetworkInterface[] */
  public function setNetworkInterfaces($networkInterfaces)
  {
    $this->networkInterfaces = $networkInterfaces;
  }
  /** @return NetworkInterface[] */
  public function getNetworkInterfaces()
  {
    return $this->networkInterfaces;
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
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $requestedCancellation;
  /** @var string */
  public $statusMessage;
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
  /** @param bool */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /** @return bool */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
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

class Policy extends \Google\Collection
{
  /** @var AuditConfig[] */
  public $auditConfigs;
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  /** @param AuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return AuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
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

class ReportAgentStateRequest extends \Google\Model
{
  /** @var AgentInfo */
  public $agentInfo;
  /** @var AgentMetadata */
  public $metadata;
  protected $agentInfoType = AgentInfo::class;
  protected $agentInfoDataType = '';
  protected $metadataType = AgentMetadata::class;
  protected $metadataDataType = '';
  /** @param AgentInfo */
  public function setAgentInfo(AgentInfo $agentInfo)
  {
    $this->agentInfo = $agentInfo;
  }
  /** @return AgentInfo */
  public function getAgentInfo()
  {
    return $this->agentInfo;
  }
  /** @param AgentMetadata */
  public function setMetadata(AgentMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return AgentMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

class ReportAgentStateResponse extends \Google\Collection
{
  /** @var string */
  public $minReportInterval;
  /** @var AgentTask[] */
  public $tasks;
  protected $collection_key = 'tasks';
  protected $tasksType = AgentTask::class;
  protected $tasksDataType = 'array';
  /** @param string */
  public function setMinReportInterval($minReportInterval)
  {
    $this->minReportInterval = $minReportInterval;
  }
  /** @return string */
  public function getMinReportInterval()
  {
    return $this->minReportInterval;
  }
  /** @param AgentTask[] */
  public function setTasks($tasks)
  {
    $this->tasks = $tasks;
  }
  /** @return AgentTask[] */
  public function getTasks()
  {
    return $this->tasks;
  }
}

class Runnable extends \Google\Model
{
  /** @var bool */
  public $alwaysRun;
  /** @var bool */
  public $background;
  /** @var Barrier */
  public $barrier;
  /** @var Container */
  public $container;
  /** @var Environment */
  public $environment;
  /** @var bool */
  public $ignoreExitStatus;
  /** @var Script */
  public $script;
  /** @var string */
  public $timeout;
  protected $barrierType = Barrier::class;
  protected $barrierDataType = '';
  protected $containerType = Container::class;
  protected $containerDataType = '';
  protected $environmentType = Environment::class;
  protected $environmentDataType = '';
  protected $scriptType = Script::class;
  protected $scriptDataType = '';
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
  public function setBackground($background)
  {
    $this->background = $background;
  }
  /** @return bool */
  public function getBackground()
  {
    return $this->background;
  }
  /** @param Barrier */
  public function setBarrier(Barrier $barrier)
  {
    $this->barrier = $barrier;
  }
  /** @return Barrier */
  public function getBarrier()
  {
    return $this->barrier;
  }
  /** @param Container */
  public function setContainer(Container $container)
  {
    $this->container = $container;
  }
  /** @return Container */
  public function getContainer()
  {
    return $this->container;
  }
  /** @param Environment */
  public function setEnvironment(Environment $environment)
  {
    $this->environment = $environment;
  }
  /** @return Environment */
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
  /** @param Script */
  public function setScript(Script $script)
  {
    $this->script = $script;
  }
  /** @return Script */
  public function getScript()
  {
    return $this->script;
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

class Script extends \Google\Model
{
  /** @var string */
  public $path;
  /** @var string */
  public $text;

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
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

class ServiceAccount extends \Google\Model
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

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
  /** @var string */
  public $updateMask;
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
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
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

class StatusEvent extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $eventTime;
  /** @var TaskExecution */
  public $taskExecution;
  /** @var string */
  public $type;
  protected $taskExecutionType = TaskExecution::class;
  protected $taskExecutionDataType = '';
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
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /** @param TaskExecution */
  public function setTaskExecution(TaskExecution $taskExecution)
  {
    $this->taskExecution = $taskExecution;
  }
  /** @return TaskExecution */
  public function getTaskExecution()
  {
    return $this->taskExecution;
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

class Task extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var TaskStatus */
  public $status;
  protected $statusType = TaskStatus::class;
  protected $statusDataType = '';
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
  /** @param TaskStatus */
  public function setStatus(TaskStatus $status)
  {
    $this->status = $status;
  }
  /** @return TaskStatus */
  public function getStatus()
  {
    return $this->status;
  }
}

class TaskExecution extends \Google\Model
{
  /** @var int */
  public $exitCode;

  /** @param int */
  public function setExitCode($exitCode)
  {
    $this->exitCode = $exitCode;
  }
  /** @return int */
  public function getExitCode()
  {
    return $this->exitCode;
  }
}

class TaskGroup extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string */
  public $parallelism;
  /** @var bool */
  public $permissiveSsh;
  /** @var bool */
  public $requireHostsFile;
  /** @var string */
  public $taskCount;
  /** @var string */
  public $taskCountPerNode;
  /** @var Environment[] */
  public $taskEnvironments;
  /** @var TaskSpec */
  public $taskSpec;
  protected $collection_key = 'taskEnvironments';
  protected $taskEnvironmentsType = Environment::class;
  protected $taskEnvironmentsDataType = 'array';
  protected $taskSpecType = TaskSpec::class;
  protected $taskSpecDataType = '';
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
  public function setParallelism($parallelism)
  {
    $this->parallelism = $parallelism;
  }
  /** @return string */
  public function getParallelism()
  {
    return $this->parallelism;
  }
  /** @param bool */
  public function setPermissiveSsh($permissiveSsh)
  {
    $this->permissiveSsh = $permissiveSsh;
  }
  /** @return bool */
  public function getPermissiveSsh()
  {
    return $this->permissiveSsh;
  }
  /** @param bool */
  public function setRequireHostsFile($requireHostsFile)
  {
    $this->requireHostsFile = $requireHostsFile;
  }
  /** @return bool */
  public function getRequireHostsFile()
  {
    return $this->requireHostsFile;
  }
  /** @param string */
  public function setTaskCount($taskCount)
  {
    $this->taskCount = $taskCount;
  }
  /** @return string */
  public function getTaskCount()
  {
    return $this->taskCount;
  }
  /** @param string */
  public function setTaskCountPerNode($taskCountPerNode)
  {
    $this->taskCountPerNode = $taskCountPerNode;
  }
  /** @return string */
  public function getTaskCountPerNode()
  {
    return $this->taskCountPerNode;
  }
  /** @param Environment[] */
  public function setTaskEnvironments($taskEnvironments)
  {
    $this->taskEnvironments = $taskEnvironments;
  }
  /** @return Environment[] */
  public function getTaskEnvironments()
  {
    return $this->taskEnvironments;
  }
  /** @param TaskSpec */
  public function setTaskSpec(TaskSpec $taskSpec)
  {
    $this->taskSpec = $taskSpec;
  }
  /** @return TaskSpec */
  public function getTaskSpec()
  {
    return $this->taskSpec;
  }
}

class TaskGroupStatus extends \Google\Collection
{
  /** @var string[] */
  public $counts;
  /** @var InstanceStatus[] */
  public $instances;
  protected $collection_key = 'instances';
  protected $instancesType = InstanceStatus::class;
  protected $instancesDataType = 'array';
  /** @param string[] */
  public function setCounts($counts)
  {
    $this->counts = $counts;
  }
  /** @return string[] */
  public function getCounts()
  {
    return $this->counts;
  }
  /** @param InstanceStatus[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return InstanceStatus[] */
  public function getInstances()
  {
    return $this->instances;
  }
}

class TaskSpec extends \Google\Collection
{
  /** @var ComputeResource */
  public $computeResource;
  /** @var Environment */
  public $environment;
  /** @var string[] */
  public $environments;
  /** @var LifecyclePolicy[] */
  public $lifecyclePolicies;
  /** @var int */
  public $maxRetryCount;
  /** @var string */
  public $maxRunDuration;
  /** @var Runnable[] */
  public $runnables;
  /** @var Volume[] */
  public $volumes;
  protected $collection_key = 'volumes';
  protected $computeResourceType = ComputeResource::class;
  protected $computeResourceDataType = '';
  protected $environmentType = Environment::class;
  protected $environmentDataType = '';
  protected $lifecyclePoliciesType = LifecyclePolicy::class;
  protected $lifecyclePoliciesDataType = 'array';
  protected $runnablesType = Runnable::class;
  protected $runnablesDataType = 'array';
  protected $volumesType = Volume::class;
  protected $volumesDataType = 'array';
  /** @param ComputeResource */
  public function setComputeResource(ComputeResource $computeResource)
  {
    $this->computeResource = $computeResource;
  }
  /** @return ComputeResource */
  public function getComputeResource()
  {
    return $this->computeResource;
  }
  /** @param Environment */
  public function setEnvironment(Environment $environment)
  {
    $this->environment = $environment;
  }
  /** @return Environment */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param string[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return string[] */
  public function getEnvironments()
  {
    return $this->environments;
  }
  /** @param LifecyclePolicy[] */
  public function setLifecyclePolicies($lifecyclePolicies)
  {
    $this->lifecyclePolicies = $lifecyclePolicies;
  }
  /** @return LifecyclePolicy[] */
  public function getLifecyclePolicies()
  {
    return $this->lifecyclePolicies;
  }
  /** @param int */
  public function setMaxRetryCount($maxRetryCount)
  {
    $this->maxRetryCount = $maxRetryCount;
  }
  /** @return int */
  public function getMaxRetryCount()
  {
    return $this->maxRetryCount;
  }
  /** @param string */
  public function setMaxRunDuration($maxRunDuration)
  {
    $this->maxRunDuration = $maxRunDuration;
  }
  /** @return string */
  public function getMaxRunDuration()
  {
    return $this->maxRunDuration;
  }
  /** @param Runnable[] */
  public function setRunnables($runnables)
  {
    $this->runnables = $runnables;
  }
  /** @return Runnable[] */
  public function getRunnables()
  {
    return $this->runnables;
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

class TaskStatus extends \Google\Collection
{
  /** @var string */
  public $state;
  /** @var StatusEvent[] */
  public $statusEvents;
  protected $collection_key = 'statusEvents';
  protected $statusEventsType = StatusEvent::class;
  protected $statusEventsDataType = 'array';
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
  /** @param StatusEvent[] */
  public function setStatusEvents($statusEvents)
  {
    $this->statusEvents = $statusEvents;
  }
  /** @return StatusEvent[] */
  public function getStatusEvents()
  {
    return $this->statusEvents;
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

class Volume extends \Google\Collection
{
  /** @var string */
  public $deviceName;
  /** @var GCS */
  public $gcs;
  /** @var string[] */
  public $mountOptions;
  /** @var string */
  public $mountPath;
  /** @var NFS */
  public $nfs;
  protected $collection_key = 'mountOptions';
  protected $gcsType = GCS::class;
  protected $gcsDataType = '';
  protected $nfsType = NFS::class;
  protected $nfsDataType = '';
  /** @param string */
  public function setDeviceName($deviceName)
  {
    $this->deviceName = $deviceName;
  }
  /** @return string */
  public function getDeviceName()
  {
    return $this->deviceName;
  }
  /** @param GCS */
  public function setGcs(GCS $gcs)
  {
    $this->gcs = $gcs;
  }
  /** @return GCS */
  public function getGcs()
  {
    return $this->gcs;
  }
  /** @param string[] */
  public function setMountOptions($mountOptions)
  {
    $this->mountOptions = $mountOptions;
  }
  /** @return string[] */
  public function getMountOptions()
  {
    return $this->mountOptions;
  }
  /** @param string */
  public function setMountPath($mountPath)
  {
    $this->mountPath = $mountPath;
  }
  /** @return string */
  public function getMountPath()
  {
    return $this->mountPath;
  }
  /** @param NFS */
  public function setNfs(NFS $nfs)
  {
    $this->nfs = $nfs;
  }
  /** @return NFS */
  public function getNfs()
  {
    return $this->nfs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Accelerator::class, 'Google_Service_Batch_Accelerator');
class_alias(ActionCondition::class, 'Google_Service_Batch_ActionCondition');
class_alias(AgentInfo::class, 'Google_Service_Batch_AgentInfo');
class_alias(AgentMetadata::class, 'Google_Service_Batch_AgentMetadata');
class_alias(AgentTask::class, 'Google_Service_Batch_AgentTask');
class_alias(AgentTaskInfo::class, 'Google_Service_Batch_AgentTaskInfo');
class_alias(AllocationPolicy::class, 'Google_Service_Batch_AllocationPolicy');
class_alias(AttachedDisk::class, 'Google_Service_Batch_AttachedDisk');
class_alias(AuditConfig::class, 'Google_Service_Batch_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_Batch_AuditLogConfig');
class_alias(Barrier::class, 'Google_Service_Batch_Barrier');
class_alias(BatchEmpty::class, 'Google_Service_Batch_BatchEmpty');
class_alias(Binding::class, 'Google_Service_Batch_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_Batch_CancelOperationRequest');
class_alias(ComputeResource::class, 'Google_Service_Batch_ComputeResource');
class_alias(Container::class, 'Google_Service_Batch_Container');
class_alias(Disk::class, 'Google_Service_Batch_Disk');
class_alias(Environment::class, 'Google_Service_Batch_Environment');
class_alias(Expr::class, 'Google_Service_Batch_Expr');
class_alias(GCS::class, 'Google_Service_Batch_GCS');
class_alias(InstancePolicy::class, 'Google_Service_Batch_InstancePolicy');
class_alias(InstancePolicyOrTemplate::class, 'Google_Service_Batch_InstancePolicyOrTemplate');
class_alias(InstanceStatus::class, 'Google_Service_Batch_InstanceStatus');
class_alias(Job::class, 'Google_Service_Batch_Job');
class_alias(JobNotification::class, 'Google_Service_Batch_JobNotification');
class_alias(JobStatus::class, 'Google_Service_Batch_JobStatus');
class_alias(LifecyclePolicy::class, 'Google_Service_Batch_LifecyclePolicy');
class_alias(ListJobsResponse::class, 'Google_Service_Batch_ListJobsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_Batch_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Batch_ListOperationsResponse');
class_alias(ListTasksResponse::class, 'Google_Service_Batch_ListTasksResponse');
class_alias(Location::class, 'Google_Service_Batch_Location');
class_alias(LocationPolicy::class, 'Google_Service_Batch_LocationPolicy');
class_alias(LogsPolicy::class, 'Google_Service_Batch_LogsPolicy');
class_alias(Message::class, 'Google_Service_Batch_Message');
class_alias(NFS::class, 'Google_Service_Batch_NFS');
class_alias(NetworkInterface::class, 'Google_Service_Batch_NetworkInterface');
class_alias(NetworkPolicy::class, 'Google_Service_Batch_NetworkPolicy');
class_alias(Operation::class, 'Google_Service_Batch_Operation');
class_alias(OperationMetadata::class, 'Google_Service_Batch_OperationMetadata');
class_alias(Policy::class, 'Google_Service_Batch_Policy');
class_alias(ReportAgentStateRequest::class, 'Google_Service_Batch_ReportAgentStateRequest');
class_alias(ReportAgentStateResponse::class, 'Google_Service_Batch_ReportAgentStateResponse');
class_alias(Runnable::class, 'Google_Service_Batch_Runnable');
class_alias(Script::class, 'Google_Service_Batch_Script');
class_alias(ServiceAccount::class, 'Google_Service_Batch_ServiceAccount');
class_alias(SetIamPolicyRequest::class, 'Google_Service_Batch_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_Batch_Status');
class_alias(StatusEvent::class, 'Google_Service_Batch_StatusEvent');
class_alias(Task::class, 'Google_Service_Batch_Task');
class_alias(TaskExecution::class, 'Google_Service_Batch_TaskExecution');
class_alias(TaskGroup::class, 'Google_Service_Batch_TaskGroup');
class_alias(TaskGroupStatus::class, 'Google_Service_Batch_TaskGroupStatus');
class_alias(TaskSpec::class, 'Google_Service_Batch_TaskSpec');
class_alias(TaskStatus::class, 'Google_Service_Batch_TaskStatus');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_Batch_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_Batch_TestIamPermissionsResponse');
class_alias(Volume::class, 'Google_Service_Batch_Volume');
