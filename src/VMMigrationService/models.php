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

namespace Google\Service\VMMigrationService;

class AdaptingOSStep extends \Google\Model
{
}

class AddGroupMigrationRequest extends \Google\Model
{
  /** @var string */
  public $migratingVm;

  /** @param string */
  public function setMigratingVm($migratingVm)
  {
    $this->migratingVm = $migratingVm;
  }
  /** @return string */
  public function getMigratingVm()
  {
    return $this->migratingVm;
  }
}

class ApplianceVersion extends \Google\Model
{
  /** @var bool */
  public $critical;
  /** @var string */
  public $releaseNotesUri;
  /** @var string */
  public $uri;
  /** @var string */
  public $version;

  /** @param bool */
  public function setCritical($critical)
  {
    $this->critical = $critical;
  }
  /** @return bool */
  public function getCritical()
  {
    return $this->critical;
  }
  /** @param string */
  public function setReleaseNotesUri($releaseNotesUri)
  {
    $this->releaseNotesUri = $releaseNotesUri;
  }
  /** @return string */
  public function getReleaseNotesUri()
  {
    return $this->releaseNotesUri;
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

class AppliedLicense extends \Google\Model
{
  /** @var string */
  public $osLicense;
  /** @var string */
  public $type;

  /** @param string */
  public function setOsLicense($osLicense)
  {
    $this->osLicense = $osLicense;
  }
  /** @return string */
  public function getOsLicense()
  {
    return $this->osLicense;
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

class AvailableUpdates extends \Google\Model
{
  /** @var ApplianceVersion */
  public $inPlaceUpdate;
  /** @var ApplianceVersion */
  public $newDeployableAppliance;
  protected $inPlaceUpdateType = ApplianceVersion::class;
  protected $inPlaceUpdateDataType = '';
  protected $newDeployableApplianceType = ApplianceVersion::class;
  protected $newDeployableApplianceDataType = '';
  /** @param ApplianceVersion */
  public function setInPlaceUpdate(ApplianceVersion $inPlaceUpdate)
  {
    $this->inPlaceUpdate = $inPlaceUpdate;
  }
  /** @return ApplianceVersion */
  public function getInPlaceUpdate()
  {
    return $this->inPlaceUpdate;
  }
  /** @param ApplianceVersion */
  public function setNewDeployableAppliance(ApplianceVersion $newDeployableAppliance)
  {
    $this->newDeployableAppliance = $newDeployableAppliance;
  }
  /** @return ApplianceVersion */
  public function getNewDeployableAppliance()
  {
    return $this->newDeployableAppliance;
  }
}

class CancelCloneJobRequest extends \Google\Model
{
}

class CancelCutoverJobRequest extends \Google\Model
{
}

class CancelOperationRequest extends \Google\Model
{
}

class CloneJob extends \Google\Collection
{
  /** @var ComputeEngineTargetDetails */
  public $computeEngineTargetDetails;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var Status */
  public $error;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $stateTime;
  /** @var CloneStep[] */
  public $steps;
  protected $collection_key = 'steps';
  protected $computeEngineTargetDetailsType = ComputeEngineTargetDetails::class;
  protected $computeEngineTargetDetailsDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $stepsType = CloneStep::class;
  protected $stepsDataType = 'array';
  /** @param ComputeEngineTargetDetails */
  public function setComputeEngineTargetDetails(ComputeEngineTargetDetails $computeEngineTargetDetails)
  {
    $this->computeEngineTargetDetails = $computeEngineTargetDetails;
  }
  /** @return ComputeEngineTargetDetails */
  public function getComputeEngineTargetDetails()
  {
    return $this->computeEngineTargetDetails;
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
  /** @param string */
  public function setStateTime($stateTime)
  {
    $this->stateTime = $stateTime;
  }
  /** @return string */
  public function getStateTime()
  {
    return $this->stateTime;
  }
  /** @param CloneStep[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return CloneStep[] */
  public function getSteps()
  {
    return $this->steps;
  }
}

class CloneStep extends \Google\Model
{
  /** @var AdaptingOSStep */
  public $adaptingOs;
  /** @var string */
  public $endTime;
  /** @var InstantiatingMigratedVMStep */
  public $instantiatingMigratedVm;
  /** @var PreparingVMDisksStep */
  public $preparingVmDisks;
  /** @var string */
  public $startTime;
  protected $adaptingOsType = AdaptingOSStep::class;
  protected $adaptingOsDataType = '';
  protected $instantiatingMigratedVmType = InstantiatingMigratedVMStep::class;
  protected $instantiatingMigratedVmDataType = '';
  protected $preparingVmDisksType = PreparingVMDisksStep::class;
  protected $preparingVmDisksDataType = '';
  /** @param AdaptingOSStep */
  public function setAdaptingOs(AdaptingOSStep $adaptingOs)
  {
    $this->adaptingOs = $adaptingOs;
  }
  /** @return AdaptingOSStep */
  public function getAdaptingOs()
  {
    return $this->adaptingOs;
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
  /** @param InstantiatingMigratedVMStep */
  public function setInstantiatingMigratedVm(InstantiatingMigratedVMStep $instantiatingMigratedVm)
  {
    $this->instantiatingMigratedVm = $instantiatingMigratedVm;
  }
  /** @return InstantiatingMigratedVMStep */
  public function getInstantiatingMigratedVm()
  {
    return $this->instantiatingMigratedVm;
  }
  /** @param PreparingVMDisksStep */
  public function setPreparingVmDisks(PreparingVMDisksStep $preparingVmDisks)
  {
    $this->preparingVmDisks = $preparingVmDisks;
  }
  /** @return PreparingVMDisksStep */
  public function getPreparingVmDisks()
  {
    return $this->preparingVmDisks;
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

class ComputeEngineTargetDefaults extends \Google\Collection
{
  /** @var string[] */
  public $additionalLicenses;
  /** @var AppliedLicense */
  public $appliedLicense;
  /** @var string */
  public $bootOption;
  /** @var ComputeScheduling */
  public $computeScheduling;
  /** @var string */
  public $diskType;
  /** @var string */
  public $hostname;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $licenseType;
  /** @var string */
  public $machineType;
  /** @var string */
  public $machineTypeSeries;
  /** @var string[] */
  public $metadata;
  /** @var NetworkInterface[] */
  public $networkInterfaces;
  /** @var string[] */
  public $networkTags;
  /** @var bool */
  public $secureBoot;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $targetProject;
  /** @var string */
  public $vmName;
  /** @var string */
  public $zone;
  protected $collection_key = 'networkTags';
  protected $appliedLicenseType = AppliedLicense::class;
  protected $appliedLicenseDataType = '';
  protected $computeSchedulingType = ComputeScheduling::class;
  protected $computeSchedulingDataType = '';
  protected $networkInterfacesType = NetworkInterface::class;
  protected $networkInterfacesDataType = 'array';
  /** @param string[] */
  public function setAdditionalLicenses($additionalLicenses)
  {
    $this->additionalLicenses = $additionalLicenses;
  }
  /** @return string[] */
  public function getAdditionalLicenses()
  {
    return $this->additionalLicenses;
  }
  /** @param AppliedLicense */
  public function setAppliedLicense(AppliedLicense $appliedLicense)
  {
    $this->appliedLicense = $appliedLicense;
  }
  /** @return AppliedLicense */
  public function getAppliedLicense()
  {
    return $this->appliedLicense;
  }
  /** @param string */
  public function setBootOption($bootOption)
  {
    $this->bootOption = $bootOption;
  }
  /** @return string */
  public function getBootOption()
  {
    return $this->bootOption;
  }
  /** @param ComputeScheduling */
  public function setComputeScheduling(ComputeScheduling $computeScheduling)
  {
    $this->computeScheduling = $computeScheduling;
  }
  /** @return ComputeScheduling */
  public function getComputeScheduling()
  {
    return $this->computeScheduling;
  }
  /** @param string */
  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  /** @return string */
  public function getDiskType()
  {
    return $this->diskType;
  }
  /** @param string */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /** @return string */
  public function getHostname()
  {
    return $this->hostname;
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
  public function setLicenseType($licenseType)
  {
    $this->licenseType = $licenseType;
  }
  /** @return string */
  public function getLicenseType()
  {
    return $this->licenseType;
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
  public function setMachineTypeSeries($machineTypeSeries)
  {
    $this->machineTypeSeries = $machineTypeSeries;
  }
  /** @return string */
  public function getMachineTypeSeries()
  {
    return $this->machineTypeSeries;
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
  /** @param string[] */
  public function setNetworkTags($networkTags)
  {
    $this->networkTags = $networkTags;
  }
  /** @return string[] */
  public function getNetworkTags()
  {
    return $this->networkTags;
  }
  /** @param bool */
  public function setSecureBoot($secureBoot)
  {
    $this->secureBoot = $secureBoot;
  }
  /** @return bool */
  public function getSecureBoot()
  {
    return $this->secureBoot;
  }
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /** @param string */
  public function setTargetProject($targetProject)
  {
    $this->targetProject = $targetProject;
  }
  /** @return string */
  public function getTargetProject()
  {
    return $this->targetProject;
  }
  /** @param string */
  public function setVmName($vmName)
  {
    $this->vmName = $vmName;
  }
  /** @return string */
  public function getVmName()
  {
    return $this->vmName;
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

class ComputeEngineTargetDetails extends \Google\Collection
{
  /** @var string[] */
  public $additionalLicenses;
  /** @var AppliedLicense */
  public $appliedLicense;
  /** @var string */
  public $bootOption;
  /** @var ComputeScheduling */
  public $computeScheduling;
  /** @var string */
  public $diskType;
  /** @var string */
  public $hostname;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $licenseType;
  /** @var string */
  public $machineType;
  /** @var string */
  public $machineTypeSeries;
  /** @var string[] */
  public $metadata;
  /** @var NetworkInterface[] */
  public $networkInterfaces;
  /** @var string[] */
  public $networkTags;
  /** @var string */
  public $project;
  /** @var bool */
  public $secureBoot;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $vmName;
  /** @var string */
  public $zone;
  protected $collection_key = 'networkTags';
  protected $appliedLicenseType = AppliedLicense::class;
  protected $appliedLicenseDataType = '';
  protected $computeSchedulingType = ComputeScheduling::class;
  protected $computeSchedulingDataType = '';
  protected $networkInterfacesType = NetworkInterface::class;
  protected $networkInterfacesDataType = 'array';
  /** @param string[] */
  public function setAdditionalLicenses($additionalLicenses)
  {
    $this->additionalLicenses = $additionalLicenses;
  }
  /** @return string[] */
  public function getAdditionalLicenses()
  {
    return $this->additionalLicenses;
  }
  /** @param AppliedLicense */
  public function setAppliedLicense(AppliedLicense $appliedLicense)
  {
    $this->appliedLicense = $appliedLicense;
  }
  /** @return AppliedLicense */
  public function getAppliedLicense()
  {
    return $this->appliedLicense;
  }
  /** @param string */
  public function setBootOption($bootOption)
  {
    $this->bootOption = $bootOption;
  }
  /** @return string */
  public function getBootOption()
  {
    return $this->bootOption;
  }
  /** @param ComputeScheduling */
  public function setComputeScheduling(ComputeScheduling $computeScheduling)
  {
    $this->computeScheduling = $computeScheduling;
  }
  /** @return ComputeScheduling */
  public function getComputeScheduling()
  {
    return $this->computeScheduling;
  }
  /** @param string */
  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  /** @return string */
  public function getDiskType()
  {
    return $this->diskType;
  }
  /** @param string */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /** @return string */
  public function getHostname()
  {
    return $this->hostname;
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
  public function setLicenseType($licenseType)
  {
    $this->licenseType = $licenseType;
  }
  /** @return string */
  public function getLicenseType()
  {
    return $this->licenseType;
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
  public function setMachineTypeSeries($machineTypeSeries)
  {
    $this->machineTypeSeries = $machineTypeSeries;
  }
  /** @return string */
  public function getMachineTypeSeries()
  {
    return $this->machineTypeSeries;
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
  /** @param string[] */
  public function setNetworkTags($networkTags)
  {
    $this->networkTags = $networkTags;
  }
  /** @return string[] */
  public function getNetworkTags()
  {
    return $this->networkTags;
  }
  /** @param string */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
  /** @param bool */
  public function setSecureBoot($secureBoot)
  {
    $this->secureBoot = $secureBoot;
  }
  /** @return bool */
  public function getSecureBoot()
  {
    return $this->secureBoot;
  }
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /** @param string */
  public function setVmName($vmName)
  {
    $this->vmName = $vmName;
  }
  /** @return string */
  public function getVmName()
  {
    return $this->vmName;
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

class ComputeScheduling extends \Google\Collection
{
  /** @var int */
  public $minNodeCpus;
  /** @var SchedulingNodeAffinity[] */
  public $nodeAffinities;
  /** @var string */
  public $onHostMaintenance;
  /** @var string */
  public $restartType;
  protected $collection_key = 'nodeAffinities';
  protected $nodeAffinitiesType = SchedulingNodeAffinity::class;
  protected $nodeAffinitiesDataType = 'array';
  /** @param int */
  public function setMinNodeCpus($minNodeCpus)
  {
    $this->minNodeCpus = $minNodeCpus;
  }
  /** @return int */
  public function getMinNodeCpus()
  {
    return $this->minNodeCpus;
  }
  /** @param SchedulingNodeAffinity[] */
  public function setNodeAffinities($nodeAffinities)
  {
    $this->nodeAffinities = $nodeAffinities;
  }
  /** @return SchedulingNodeAffinity[] */
  public function getNodeAffinities()
  {
    return $this->nodeAffinities;
  }
  /** @param string */
  public function setOnHostMaintenance($onHostMaintenance)
  {
    $this->onHostMaintenance = $onHostMaintenance;
  }
  /** @return string */
  public function getOnHostMaintenance()
  {
    return $this->onHostMaintenance;
  }
  /** @param string */
  public function setRestartType($restartType)
  {
    $this->restartType = $restartType;
  }
  /** @return string */
  public function getRestartType()
  {
    return $this->restartType;
  }
}

class CutoverJob extends \Google\Collection
{
  /** @var ComputeEngineTargetDetails */
  public $computeEngineTargetDetails;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var Status */
  public $error;
  /** @var string */
  public $name;
  /** @var int */
  public $progressPercent;
  /** @var string */
  public $state;
  /** @var string */
  public $stateMessage;
  /** @var string */
  public $stateTime;
  /** @var CutoverStep[] */
  public $steps;
  protected $collection_key = 'steps';
  protected $computeEngineTargetDetailsType = ComputeEngineTargetDetails::class;
  protected $computeEngineTargetDetailsDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $stepsType = CutoverStep::class;
  protected $stepsDataType = 'array';
  /** @param ComputeEngineTargetDetails */
  public function setComputeEngineTargetDetails(ComputeEngineTargetDetails $computeEngineTargetDetails)
  {
    $this->computeEngineTargetDetails = $computeEngineTargetDetails;
  }
  /** @return ComputeEngineTargetDetails */
  public function getComputeEngineTargetDetails()
  {
    return $this->computeEngineTargetDetails;
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
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /** @return int */
  public function getProgressPercent()
  {
    return $this->progressPercent;
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
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  /** @return string */
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
  /** @param string */
  public function setStateTime($stateTime)
  {
    $this->stateTime = $stateTime;
  }
  /** @return string */
  public function getStateTime()
  {
    return $this->stateTime;
  }
  /** @param CutoverStep[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return CutoverStep[] */
  public function getSteps()
  {
    return $this->steps;
  }
}

class CutoverStep extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var ReplicationCycle */
  public $finalSync;
  /** @var InstantiatingMigratedVMStep */
  public $instantiatingMigratedVm;
  /** @var PreparingVMDisksStep */
  public $preparingVmDisks;
  /** @var ReplicationCycle */
  public $previousReplicationCycle;
  /** @var ShuttingDownSourceVMStep */
  public $shuttingDownSourceVm;
  /** @var string */
  public $startTime;
  protected $finalSyncType = ReplicationCycle::class;
  protected $finalSyncDataType = '';
  protected $instantiatingMigratedVmType = InstantiatingMigratedVMStep::class;
  protected $instantiatingMigratedVmDataType = '';
  protected $preparingVmDisksType = PreparingVMDisksStep::class;
  protected $preparingVmDisksDataType = '';
  protected $previousReplicationCycleType = ReplicationCycle::class;
  protected $previousReplicationCycleDataType = '';
  protected $shuttingDownSourceVmType = ShuttingDownSourceVMStep::class;
  protected $shuttingDownSourceVmDataType = '';
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
  /** @param ReplicationCycle */
  public function setFinalSync(ReplicationCycle $finalSync)
  {
    $this->finalSync = $finalSync;
  }
  /** @return ReplicationCycle */
  public function getFinalSync()
  {
    return $this->finalSync;
  }
  /** @param InstantiatingMigratedVMStep */
  public function setInstantiatingMigratedVm(InstantiatingMigratedVMStep $instantiatingMigratedVm)
  {
    $this->instantiatingMigratedVm = $instantiatingMigratedVm;
  }
  /** @return InstantiatingMigratedVMStep */
  public function getInstantiatingMigratedVm()
  {
    return $this->instantiatingMigratedVm;
  }
  /** @param PreparingVMDisksStep */
  public function setPreparingVmDisks(PreparingVMDisksStep $preparingVmDisks)
  {
    $this->preparingVmDisks = $preparingVmDisks;
  }
  /** @return PreparingVMDisksStep */
  public function getPreparingVmDisks()
  {
    return $this->preparingVmDisks;
  }
  /** @param ReplicationCycle */
  public function setPreviousReplicationCycle(ReplicationCycle $previousReplicationCycle)
  {
    $this->previousReplicationCycle = $previousReplicationCycle;
  }
  /** @return ReplicationCycle */
  public function getPreviousReplicationCycle()
  {
    return $this->previousReplicationCycle;
  }
  /** @param ShuttingDownSourceVMStep */
  public function setShuttingDownSourceVm(ShuttingDownSourceVMStep $shuttingDownSourceVm)
  {
    $this->shuttingDownSourceVm = $shuttingDownSourceVm;
  }
  /** @return ShuttingDownSourceVMStep */
  public function getShuttingDownSourceVm()
  {
    return $this->shuttingDownSourceVm;
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

class CycleStep extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var InitializingReplicationStep */
  public $initializingReplication;
  /** @var PostProcessingStep */
  public $postProcessing;
  /** @var ReplicatingStep */
  public $replicating;
  /** @var string */
  public $startTime;
  protected $initializingReplicationType = InitializingReplicationStep::class;
  protected $initializingReplicationDataType = '';
  protected $postProcessingType = PostProcessingStep::class;
  protected $postProcessingDataType = '';
  protected $replicatingType = ReplicatingStep::class;
  protected $replicatingDataType = '';
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
  /** @param InitializingReplicationStep */
  public function setInitializingReplication(InitializingReplicationStep $initializingReplication)
  {
    $this->initializingReplication = $initializingReplication;
  }
  /** @return InitializingReplicationStep */
  public function getInitializingReplication()
  {
    return $this->initializingReplication;
  }
  /** @param PostProcessingStep */
  public function setPostProcessing(PostProcessingStep $postProcessing)
  {
    $this->postProcessing = $postProcessing;
  }
  /** @return PostProcessingStep */
  public function getPostProcessing()
  {
    return $this->postProcessing;
  }
  /** @param ReplicatingStep */
  public function setReplicating(ReplicatingStep $replicating)
  {
    $this->replicating = $replicating;
  }
  /** @return ReplicatingStep */
  public function getReplicating()
  {
    return $this->replicating;
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

class DatacenterConnector extends \Google\Model
{
  /** @var string */
  public $applianceInfrastructureVersion;
  /** @var string */
  public $applianceSoftwareVersion;
  /** @var AvailableUpdates */
  public $availableVersions;
  /** @var string */
  public $bucket;
  /** @var string */
  public $createTime;
  /** @var Status */
  public $error;
  /** @var string */
  public $name;
  /** @var string */
  public $registrationId;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $state;
  /** @var string */
  public $stateTime;
  /** @var string */
  public $updateTime;
  /** @var UpgradeStatus */
  public $upgradeStatus;
  /** @var string */
  public $version;
  protected $availableVersionsType = AvailableUpdates::class;
  protected $availableVersionsDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $upgradeStatusType = UpgradeStatus::class;
  protected $upgradeStatusDataType = '';
  /** @param string */
  public function setApplianceInfrastructureVersion($applianceInfrastructureVersion)
  {
    $this->applianceInfrastructureVersion = $applianceInfrastructureVersion;
  }
  /** @return string */
  public function getApplianceInfrastructureVersion()
  {
    return $this->applianceInfrastructureVersion;
  }
  /** @param string */
  public function setApplianceSoftwareVersion($applianceSoftwareVersion)
  {
    $this->applianceSoftwareVersion = $applianceSoftwareVersion;
  }
  /** @return string */
  public function getApplianceSoftwareVersion()
  {
    return $this->applianceSoftwareVersion;
  }
  /** @param AvailableUpdates */
  public function setAvailableVersions(AvailableUpdates $availableVersions)
  {
    $this->availableVersions = $availableVersions;
  }
  /** @return AvailableUpdates */
  public function getAvailableVersions()
  {
    return $this->availableVersions;
  }
  /** @param string */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /** @return string */
  public function getBucket()
  {
    return $this->bucket;
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
  public function setRegistrationId($registrationId)
  {
    $this->registrationId = $registrationId;
  }
  /** @return string */
  public function getRegistrationId()
  {
    return $this->registrationId;
  }
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
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
  public function setStateTime($stateTime)
  {
    $this->stateTime = $stateTime;
  }
  /** @return string */
  public function getStateTime()
  {
    return $this->stateTime;
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
  /** @param UpgradeStatus */
  public function setUpgradeStatus(UpgradeStatus $upgradeStatus)
  {
    $this->upgradeStatus = $upgradeStatus;
  }
  /** @return UpgradeStatus */
  public function getUpgradeStatus()
  {
    return $this->upgradeStatus;
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

class FetchInventoryResponse extends \Google\Model
{
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $updateTime;
  /** @var VmwareVmsDetails */
  public $vmwareVms;
  protected $vmwareVmsType = VmwareVmsDetails::class;
  protected $vmwareVmsDataType = '';
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /** @param VmwareVmsDetails */
  public function setVmwareVms(VmwareVmsDetails $vmwareVms)
  {
    $this->vmwareVms = $vmwareVms;
  }
  /** @return VmwareVmsDetails */
  public function getVmwareVms()
  {
    return $this->vmwareVms;
  }
}

class FinalizeMigrationRequest extends \Google\Model
{
}

class Group extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;

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

class InitializingReplicationStep extends \Google\Model
{
}

class InstantiatingMigratedVMStep extends \Google\Model
{
}

class Link extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $url;

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

class ListCloneJobsResponse extends \Google\Collection
{
  /** @var CloneJob[] */
  public $cloneJobs;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $cloneJobsType = CloneJob::class;
  protected $cloneJobsDataType = 'array';
  /** @param CloneJob[] */
  public function setCloneJobs($cloneJobs)
  {
    $this->cloneJobs = $cloneJobs;
  }
  /** @return CloneJob[] */
  public function getCloneJobs()
  {
    return $this->cloneJobs;
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

class ListCutoverJobsResponse extends \Google\Collection
{
  /** @var CutoverJob[] */
  public $cutoverJobs;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $cutoverJobsType = CutoverJob::class;
  protected $cutoverJobsDataType = 'array';
  /** @param CutoverJob[] */
  public function setCutoverJobs($cutoverJobs)
  {
    $this->cutoverJobs = $cutoverJobs;
  }
  /** @return CutoverJob[] */
  public function getCutoverJobs()
  {
    return $this->cutoverJobs;
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

class ListDatacenterConnectorsResponse extends \Google\Collection
{
  /** @var DatacenterConnector[] */
  public $datacenterConnectors;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $datacenterConnectorsType = DatacenterConnector::class;
  protected $datacenterConnectorsDataType = 'array';
  /** @param DatacenterConnector[] */
  public function setDatacenterConnectors($datacenterConnectors)
  {
    $this->datacenterConnectors = $datacenterConnectors;
  }
  /** @return DatacenterConnector[] */
  public function getDatacenterConnectors()
  {
    return $this->datacenterConnectors;
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

class ListGroupsResponse extends \Google\Collection
{
  /** @var Group[] */
  public $groups;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $groupsType = Group::class;
  protected $groupsDataType = 'array';
  /** @param Group[] */
  public function setGroups($groups)
  {
    $this->groups = $groups;
  }
  /** @return Group[] */
  public function getGroups()
  {
    return $this->groups;
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

class ListMigratingVmsResponse extends \Google\Collection
{
  /** @var MigratingVm[] */
  public $migratingVms;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $migratingVmsType = MigratingVm::class;
  protected $migratingVmsDataType = 'array';
  /** @param MigratingVm[] */
  public function setMigratingVms($migratingVms)
  {
    $this->migratingVms = $migratingVms;
  }
  /** @return MigratingVm[] */
  public function getMigratingVms()
  {
    return $this->migratingVms;
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

class ListReplicationCyclesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ReplicationCycle[] */
  public $replicationCycles;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $replicationCyclesType = ReplicationCycle::class;
  protected $replicationCyclesDataType = 'array';
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
  /** @param ReplicationCycle[] */
  public function setReplicationCycles($replicationCycles)
  {
    $this->replicationCycles = $replicationCycles;
  }
  /** @return ReplicationCycle[] */
  public function getReplicationCycles()
  {
    return $this->replicationCycles;
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

class ListSourcesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Source[] */
  public $sources;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $sourcesType = Source::class;
  protected $sourcesDataType = 'array';
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
  /** @param Source[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return Source[] */
  public function getSources()
  {
    return $this->sources;
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

class ListTargetProjectsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TargetProject[] */
  public $targetProjects;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $targetProjectsType = TargetProject::class;
  protected $targetProjectsDataType = 'array';
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
  /** @param TargetProject[] */
  public function setTargetProjects($targetProjects)
  {
    $this->targetProjects = $targetProjects;
  }
  /** @return TargetProject[] */
  public function getTargetProjects()
  {
    return $this->targetProjects;
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

class ListUtilizationReportsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  /** @var UtilizationReport[] */
  public $utilizationReports;
  protected $collection_key = 'utilizationReports';
  protected $utilizationReportsType = UtilizationReport::class;
  protected $utilizationReportsDataType = 'array';
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
  /** @param UtilizationReport[] */
  public function setUtilizationReports($utilizationReports)
  {
    $this->utilizationReports = $utilizationReports;
  }
  /** @return UtilizationReport[] */
  public function getUtilizationReports()
  {
    return $this->utilizationReports;
  }
}

class LocalizedMessage extends \Google\Model
{
  /** @var string */
  public $locale;
  /** @var string */
  public $message;

  /** @param string */
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
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

class MigratingVm extends \Google\Collection
{
  /** @var ComputeEngineTargetDefaults */
  public $computeEngineTargetDefaults;
  /** @var string */
  public $createTime;
  /** @var ReplicationCycle */
  public $currentSyncInfo;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var Status */
  public $error;
  /** @var string */
  public $group;
  /** @var string[] */
  public $labels;
  /** @var ReplicationSync */
  public $lastSync;
  /** @var string */
  public $name;
  /** @var SchedulePolicy */
  public $policy;
  /** @var CloneJob[] */
  public $recentCloneJobs;
  /** @var CutoverJob[] */
  public $recentCutoverJobs;
  /** @var string */
  public $sourceVmId;
  /** @var string */
  public $state;
  /** @var string */
  public $stateTime;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'recentCutoverJobs';
  protected $computeEngineTargetDefaultsType = ComputeEngineTargetDefaults::class;
  protected $computeEngineTargetDefaultsDataType = '';
  protected $currentSyncInfoType = ReplicationCycle::class;
  protected $currentSyncInfoDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $lastSyncType = ReplicationSync::class;
  protected $lastSyncDataType = '';
  protected $policyType = SchedulePolicy::class;
  protected $policyDataType = '';
  protected $recentCloneJobsType = CloneJob::class;
  protected $recentCloneJobsDataType = 'array';
  protected $recentCutoverJobsType = CutoverJob::class;
  protected $recentCutoverJobsDataType = 'array';
  /** @param ComputeEngineTargetDefaults */
  public function setComputeEngineTargetDefaults(ComputeEngineTargetDefaults $computeEngineTargetDefaults)
  {
    $this->computeEngineTargetDefaults = $computeEngineTargetDefaults;
  }
  /** @return ComputeEngineTargetDefaults */
  public function getComputeEngineTargetDefaults()
  {
    return $this->computeEngineTargetDefaults;
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
  /** @param ReplicationCycle */
  public function setCurrentSyncInfo(ReplicationCycle $currentSyncInfo)
  {
    $this->currentSyncInfo = $currentSyncInfo;
  }
  /** @return ReplicationCycle */
  public function getCurrentSyncInfo()
  {
    return $this->currentSyncInfo;
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
  /** @param string */
  public function setGroup($group)
  {
    $this->group = $group;
  }
  /** @return string */
  public function getGroup()
  {
    return $this->group;
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
  /** @param ReplicationSync */
  public function setLastSync(ReplicationSync $lastSync)
  {
    $this->lastSync = $lastSync;
  }
  /** @return ReplicationSync */
  public function getLastSync()
  {
    return $this->lastSync;
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
  /** @param SchedulePolicy */
  public function setPolicy(SchedulePolicy $policy)
  {
    $this->policy = $policy;
  }
  /** @return SchedulePolicy */
  public function getPolicy()
  {
    return $this->policy;
  }
  /** @param CloneJob[] */
  public function setRecentCloneJobs($recentCloneJobs)
  {
    $this->recentCloneJobs = $recentCloneJobs;
  }
  /** @return CloneJob[] */
  public function getRecentCloneJobs()
  {
    return $this->recentCloneJobs;
  }
  /** @param CutoverJob[] */
  public function setRecentCutoverJobs($recentCutoverJobs)
  {
    $this->recentCutoverJobs = $recentCutoverJobs;
  }
  /** @return CutoverJob[] */
  public function getRecentCutoverJobs()
  {
    return $this->recentCutoverJobs;
  }
  /** @param string */
  public function setSourceVmId($sourceVmId)
  {
    $this->sourceVmId = $sourceVmId;
  }
  /** @return string */
  public function getSourceVmId()
  {
    return $this->sourceVmId;
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
  public function setStateTime($stateTime)
  {
    $this->stateTime = $stateTime;
  }
  /** @return string */
  public function getStateTime()
  {
    return $this->stateTime;
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

class MigrationError extends \Google\Collection
{
  /** @var LocalizedMessage */
  public $actionItem;
  /** @var string */
  public $code;
  /** @var LocalizedMessage */
  public $errorMessage;
  /** @var string */
  public $errorTime;
  /** @var Link[] */
  public $helpLinks;
  protected $collection_key = 'helpLinks';
  protected $actionItemType = LocalizedMessage::class;
  protected $actionItemDataType = '';
  protected $errorMessageType = LocalizedMessage::class;
  protected $errorMessageDataType = '';
  protected $helpLinksType = Link::class;
  protected $helpLinksDataType = 'array';
  /** @param LocalizedMessage */
  public function setActionItem(LocalizedMessage $actionItem)
  {
    $this->actionItem = $actionItem;
  }
  /** @return LocalizedMessage */
  public function getActionItem()
  {
    return $this->actionItem;
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
  /** @param LocalizedMessage */
  public function setErrorMessage(LocalizedMessage $errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return LocalizedMessage */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param string */
  public function setErrorTime($errorTime)
  {
    $this->errorTime = $errorTime;
  }
  /** @return string */
  public function getErrorTime()
  {
    return $this->errorTime;
  }
  /** @param Link[] */
  public function setHelpLinks($helpLinks)
  {
    $this->helpLinks = $helpLinks;
  }
  /** @return Link[] */
  public function getHelpLinks()
  {
    return $this->helpLinks;
  }
}

class NetworkInterface extends \Google\Model
{
  /** @var string */
  public $externalIp;
  /** @var string */
  public $internalIp;
  /** @var string */
  public $network;
  /** @var string */
  public $subnetwork;

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
  /** @param string */
  public function setInternalIp($internalIp)
  {
    $this->internalIp = $internalIp;
  }
  /** @return string */
  public function getInternalIp()
  {
    return $this->internalIp;
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

class PauseMigrationRequest extends \Google\Model
{
}

class PostProcessingStep extends \Google\Model
{
}

class PreparingVMDisksStep extends \Google\Model
{
}

class RemoveGroupMigrationRequest extends \Google\Model
{
  /** @var string */
  public $migratingVm;

  /** @param string */
  public function setMigratingVm($migratingVm)
  {
    $this->migratingVm = $migratingVm;
  }
  /** @return string */
  public function getMigratingVm()
  {
    return $this->migratingVm;
  }
}

class ReplicatingStep extends \Google\Model
{
  /** @var string */
  public $lastThirtyMinutesAverageBytesPerSecond;
  /** @var string */
  public $lastTwoMinutesAverageBytesPerSecond;
  /** @var string */
  public $replicatedBytes;
  /** @var string */
  public $totalBytes;

  /** @param string */
  public function setLastThirtyMinutesAverageBytesPerSecond($lastThirtyMinutesAverageBytesPerSecond)
  {
    $this->lastThirtyMinutesAverageBytesPerSecond = $lastThirtyMinutesAverageBytesPerSecond;
  }
  /** @return string */
  public function getLastThirtyMinutesAverageBytesPerSecond()
  {
    return $this->lastThirtyMinutesAverageBytesPerSecond;
  }
  /** @param string */
  public function setLastTwoMinutesAverageBytesPerSecond($lastTwoMinutesAverageBytesPerSecond)
  {
    $this->lastTwoMinutesAverageBytesPerSecond = $lastTwoMinutesAverageBytesPerSecond;
  }
  /** @return string */
  public function getLastTwoMinutesAverageBytesPerSecond()
  {
    return $this->lastTwoMinutesAverageBytesPerSecond;
  }
  /** @param string */
  public function setReplicatedBytes($replicatedBytes)
  {
    $this->replicatedBytes = $replicatedBytes;
  }
  /** @return string */
  public function getReplicatedBytes()
  {
    return $this->replicatedBytes;
  }
  /** @param string */
  public function setTotalBytes($totalBytes)
  {
    $this->totalBytes = $totalBytes;
  }
  /** @return string */
  public function getTotalBytes()
  {
    return $this->totalBytes;
  }
}

class ReplicationCycle extends \Google\Collection
{
  /** @var int */
  public $cycleNumber;
  /** @var string */
  public $endTime;
  /** @var Status */
  public $error;
  /** @var string */
  public $name;
  /** @var int */
  public $progressPercent;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var CycleStep[] */
  public $steps;
  /** @var string */
  public $totalPauseDuration;
  protected $collection_key = 'steps';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $stepsType = CycleStep::class;
  protected $stepsDataType = 'array';
  /** @param int */
  public function setCycleNumber($cycleNumber)
  {
    $this->cycleNumber = $cycleNumber;
  }
  /** @return int */
  public function getCycleNumber()
  {
    return $this->cycleNumber;
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
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /** @return Status */
  public function getError()
  {
    return $this->error;
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
  /** @param int */
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /** @return int */
  public function getProgressPercent()
  {
    return $this->progressPercent;
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
  /** @param CycleStep[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return CycleStep[] */
  public function getSteps()
  {
    return $this->steps;
  }
  /** @param string */
  public function setTotalPauseDuration($totalPauseDuration)
  {
    $this->totalPauseDuration = $totalPauseDuration;
  }
  /** @return string */
  public function getTotalPauseDuration()
  {
    return $this->totalPauseDuration;
  }
}

class ReplicationSync extends \Google\Model
{
  /** @var string */
  public $lastSyncTime;

  /** @param string */
  public function setLastSyncTime($lastSyncTime)
  {
    $this->lastSyncTime = $lastSyncTime;
  }
  /** @return string */
  public function getLastSyncTime()
  {
    return $this->lastSyncTime;
  }
}

class ResumeMigrationRequest extends \Google\Model
{
}

class SchedulePolicy extends \Google\Model
{
  /** @var string */
  public $idleDuration;
  /** @var bool */
  public $skipOsAdaptation;

  /** @param string */
  public function setIdleDuration($idleDuration)
  {
    $this->idleDuration = $idleDuration;
  }
  /** @return string */
  public function getIdleDuration()
  {
    return $this->idleDuration;
  }
  /** @param bool */
  public function setSkipOsAdaptation($skipOsAdaptation)
  {
    $this->skipOsAdaptation = $skipOsAdaptation;
  }
  /** @return bool */
  public function getSkipOsAdaptation()
  {
    return $this->skipOsAdaptation;
  }
}

class SchedulingNodeAffinity extends \Google\Collection
{
  /** @var string */
  public $key;
  /** @var string */
  public $operator;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
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
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /** @return string */
  public function getOperator()
  {
    return $this->operator;
  }
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class ShuttingDownSourceVMStep extends \Google\Model
{
}

class Source extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  /** @var VmwareSourceDetails */
  public $vmware;
  protected $vmwareType = VmwareSourceDetails::class;
  protected $vmwareDataType = '';
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /** @param VmwareSourceDetails */
  public function setVmware(VmwareSourceDetails $vmware)
  {
    $this->vmware = $vmware;
  }
  /** @return VmwareSourceDetails */
  public function getVmware()
  {
    return $this->vmware;
  }
}

class StartMigrationRequest extends \Google\Model
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

class TargetProject extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $project;
  /** @var string */
  public $updateTime;

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
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
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

class UpgradeApplianceRequest extends \Google\Model
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

class UpgradeStatus extends \Google\Model
{
  /** @var Status */
  public $error;
  /** @var string */
  public $previousVersion;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $version;
  protected $errorType = Status::class;
  protected $errorDataType = '';
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
  /** @param string */
  public function setPreviousVersion($previousVersion)
  {
    $this->previousVersion = $previousVersion;
  }
  /** @return string */
  public function getPreviousVersion()
  {
    return $this->previousVersion;
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

class UtilizationReport extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var Status */
  public $error;
  /** @var string */
  public $frameEndTime;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $stateTime;
  /** @var string */
  public $timeFrame;
  /** @var int */
  public $vmCount;
  /** @var VmUtilizationInfo[] */
  public $vms;
  protected $collection_key = 'vms';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $vmsType = VmUtilizationInfo::class;
  protected $vmsDataType = 'array';
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
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
  /** @param string */
  public function setFrameEndTime($frameEndTime)
  {
    $this->frameEndTime = $frameEndTime;
  }
  /** @return string */
  public function getFrameEndTime()
  {
    return $this->frameEndTime;
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
  /** @param string */
  public function setStateTime($stateTime)
  {
    $this->stateTime = $stateTime;
  }
  /** @return string */
  public function getStateTime()
  {
    return $this->stateTime;
  }
  /** @param string */
  public function setTimeFrame($timeFrame)
  {
    $this->timeFrame = $timeFrame;
  }
  /** @return string */
  public function getTimeFrame()
  {
    return $this->timeFrame;
  }
  /** @param int */
  public function setVmCount($vmCount)
  {
    $this->vmCount = $vmCount;
  }
  /** @return int */
  public function getVmCount()
  {
    return $this->vmCount;
  }
  /** @param VmUtilizationInfo[] */
  public function setVms($vms)
  {
    $this->vms = $vms;
  }
  /** @return VmUtilizationInfo[] */
  public function getVms()
  {
    return $this->vms;
  }
}

class VmUtilizationInfo extends \Google\Model
{
  /** @var VmUtilizationMetrics */
  public $utilization;
  /** @var string */
  public $vmId;
  /** @var VmwareVmDetails */
  public $vmwareVmDetails;
  protected $utilizationType = VmUtilizationMetrics::class;
  protected $utilizationDataType = '';
  protected $vmwareVmDetailsType = VmwareVmDetails::class;
  protected $vmwareVmDetailsDataType = '';
  /** @param VmUtilizationMetrics */
  public function setUtilization(VmUtilizationMetrics $utilization)
  {
    $this->utilization = $utilization;
  }
  /** @return VmUtilizationMetrics */
  public function getUtilization()
  {
    return $this->utilization;
  }
  /** @param string */
  public function setVmId($vmId)
  {
    $this->vmId = $vmId;
  }
  /** @return string */
  public function getVmId()
  {
    return $this->vmId;
  }
  /** @param VmwareVmDetails */
  public function setVmwareVmDetails(VmwareVmDetails $vmwareVmDetails)
  {
    $this->vmwareVmDetails = $vmwareVmDetails;
  }
  /** @return VmwareVmDetails */
  public function getVmwareVmDetails()
  {
    return $this->vmwareVmDetails;
  }
}

class VmUtilizationMetrics extends \Google\Model
{
  /** @var int */
  public $cpuAveragePercent;
  /** @var int */
  public $cpuMaxPercent;
  /** @var string */
  public $diskIoRateAverageKbps;
  /** @var string */
  public $diskIoRateMaxKbps;
  /** @var int */
  public $memoryAveragePercent;
  /** @var int */
  public $memoryMaxPercent;
  /** @var string */
  public $networkThroughputAverageKbps;
  /** @var string */
  public $networkThroughputMaxKbps;

  /** @param int */
  public function setCpuAveragePercent($cpuAveragePercent)
  {
    $this->cpuAveragePercent = $cpuAveragePercent;
  }
  /** @return int */
  public function getCpuAveragePercent()
  {
    return $this->cpuAveragePercent;
  }
  /** @param int */
  public function setCpuMaxPercent($cpuMaxPercent)
  {
    $this->cpuMaxPercent = $cpuMaxPercent;
  }
  /** @return int */
  public function getCpuMaxPercent()
  {
    return $this->cpuMaxPercent;
  }
  /** @param string */
  public function setDiskIoRateAverageKbps($diskIoRateAverageKbps)
  {
    $this->diskIoRateAverageKbps = $diskIoRateAverageKbps;
  }
  /** @return string */
  public function getDiskIoRateAverageKbps()
  {
    return $this->diskIoRateAverageKbps;
  }
  /** @param string */
  public function setDiskIoRateMaxKbps($diskIoRateMaxKbps)
  {
    $this->diskIoRateMaxKbps = $diskIoRateMaxKbps;
  }
  /** @return string */
  public function getDiskIoRateMaxKbps()
  {
    return $this->diskIoRateMaxKbps;
  }
  /** @param int */
  public function setMemoryAveragePercent($memoryAveragePercent)
  {
    $this->memoryAveragePercent = $memoryAveragePercent;
  }
  /** @return int */
  public function getMemoryAveragePercent()
  {
    return $this->memoryAveragePercent;
  }
  /** @param int */
  public function setMemoryMaxPercent($memoryMaxPercent)
  {
    $this->memoryMaxPercent = $memoryMaxPercent;
  }
  /** @return int */
  public function getMemoryMaxPercent()
  {
    return $this->memoryMaxPercent;
  }
  /** @param string */
  public function setNetworkThroughputAverageKbps($networkThroughputAverageKbps)
  {
    $this->networkThroughputAverageKbps = $networkThroughputAverageKbps;
  }
  /** @return string */
  public function getNetworkThroughputAverageKbps()
  {
    return $this->networkThroughputAverageKbps;
  }
  /** @param string */
  public function setNetworkThroughputMaxKbps($networkThroughputMaxKbps)
  {
    $this->networkThroughputMaxKbps = $networkThroughputMaxKbps;
  }
  /** @return string */
  public function getNetworkThroughputMaxKbps()
  {
    return $this->networkThroughputMaxKbps;
  }
}

class VmmigrationEmpty extends \Google\Model
{
}

class VmwareSourceDetails extends \Google\Model
{
  /** @var string */
  public $password;
  /** @var string */
  public $thumbprint;
  /** @var string */
  public $username;
  /** @var string */
  public $vcenterIp;

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
  public function setThumbprint($thumbprint)
  {
    $this->thumbprint = $thumbprint;
  }
  /** @return string */
  public function getThumbprint()
  {
    return $this->thumbprint;
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
  /** @param string */
  public function setVcenterIp($vcenterIp)
  {
    $this->vcenterIp = $vcenterIp;
  }
  /** @return string */
  public function getVcenterIp()
  {
    return $this->vcenterIp;
  }
}

class VmwareVmDetails extends \Google\Model
{
  /** @var string */
  public $bootOption;
  /** @var string */
  public $committedStorageMb;
  /** @var int */
  public $cpuCount;
  /** @var string */
  public $datacenterDescription;
  /** @var string */
  public $datacenterId;
  /** @var int */
  public $diskCount;
  /** @var string */
  public $displayName;
  /** @var string */
  public $guestDescription;
  /** @var int */
  public $memoryMb;
  /** @var string */
  public $powerState;
  /** @var string */
  public $uuid;
  /** @var string */
  public $vmId;

  /** @param string */
  public function setBootOption($bootOption)
  {
    $this->bootOption = $bootOption;
  }
  /** @return string */
  public function getBootOption()
  {
    return $this->bootOption;
  }
  /** @param string */
  public function setCommittedStorageMb($committedStorageMb)
  {
    $this->committedStorageMb = $committedStorageMb;
  }
  /** @return string */
  public function getCommittedStorageMb()
  {
    return $this->committedStorageMb;
  }
  /** @param int */
  public function setCpuCount($cpuCount)
  {
    $this->cpuCount = $cpuCount;
  }
  /** @return int */
  public function getCpuCount()
  {
    return $this->cpuCount;
  }
  /** @param string */
  public function setDatacenterDescription($datacenterDescription)
  {
    $this->datacenterDescription = $datacenterDescription;
  }
  /** @return string */
  public function getDatacenterDescription()
  {
    return $this->datacenterDescription;
  }
  /** @param string */
  public function setDatacenterId($datacenterId)
  {
    $this->datacenterId = $datacenterId;
  }
  /** @return string */
  public function getDatacenterId()
  {
    return $this->datacenterId;
  }
  /** @param int */
  public function setDiskCount($diskCount)
  {
    $this->diskCount = $diskCount;
  }
  /** @return int */
  public function getDiskCount()
  {
    return $this->diskCount;
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
  public function setGuestDescription($guestDescription)
  {
    $this->guestDescription = $guestDescription;
  }
  /** @return string */
  public function getGuestDescription()
  {
    return $this->guestDescription;
  }
  /** @param int */
  public function setMemoryMb($memoryMb)
  {
    $this->memoryMb = $memoryMb;
  }
  /** @return int */
  public function getMemoryMb()
  {
    return $this->memoryMb;
  }
  /** @param string */
  public function setPowerState($powerState)
  {
    $this->powerState = $powerState;
  }
  /** @return string */
  public function getPowerState()
  {
    return $this->powerState;
  }
  /** @param string */
  public function setUuid($uuid)
  {
    $this->uuid = $uuid;
  }
  /** @return string */
  public function getUuid()
  {
    return $this->uuid;
  }
  /** @param string */
  public function setVmId($vmId)
  {
    $this->vmId = $vmId;
  }
  /** @return string */
  public function getVmId()
  {
    return $this->vmId;
  }
}

class VmwareVmsDetails extends \Google\Collection
{
  /** @var VmwareVmDetails[] */
  public $details;
  protected $collection_key = 'details';
  protected $detailsType = VmwareVmDetails::class;
  protected $detailsDataType = 'array';
  /** @param VmwareVmDetails[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return VmwareVmDetails[] */
  public function getDetails()
  {
    return $this->details;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdaptingOSStep::class, 'Google_Service_VMMigrationService_AdaptingOSStep');
class_alias(AddGroupMigrationRequest::class, 'Google_Service_VMMigrationService_AddGroupMigrationRequest');
class_alias(ApplianceVersion::class, 'Google_Service_VMMigrationService_ApplianceVersion');
class_alias(AppliedLicense::class, 'Google_Service_VMMigrationService_AppliedLicense');
class_alias(AvailableUpdates::class, 'Google_Service_VMMigrationService_AvailableUpdates');
class_alias(CancelCloneJobRequest::class, 'Google_Service_VMMigrationService_CancelCloneJobRequest');
class_alias(CancelCutoverJobRequest::class, 'Google_Service_VMMigrationService_CancelCutoverJobRequest');
class_alias(CancelOperationRequest::class, 'Google_Service_VMMigrationService_CancelOperationRequest');
class_alias(CloneJob::class, 'Google_Service_VMMigrationService_CloneJob');
class_alias(CloneStep::class, 'Google_Service_VMMigrationService_CloneStep');
class_alias(ComputeEngineTargetDefaults::class, 'Google_Service_VMMigrationService_ComputeEngineTargetDefaults');
class_alias(ComputeEngineTargetDetails::class, 'Google_Service_VMMigrationService_ComputeEngineTargetDetails');
class_alias(ComputeScheduling::class, 'Google_Service_VMMigrationService_ComputeScheduling');
class_alias(CutoverJob::class, 'Google_Service_VMMigrationService_CutoverJob');
class_alias(CutoverStep::class, 'Google_Service_VMMigrationService_CutoverStep');
class_alias(CycleStep::class, 'Google_Service_VMMigrationService_CycleStep');
class_alias(DatacenterConnector::class, 'Google_Service_VMMigrationService_DatacenterConnector');
class_alias(FetchInventoryResponse::class, 'Google_Service_VMMigrationService_FetchInventoryResponse');
class_alias(FinalizeMigrationRequest::class, 'Google_Service_VMMigrationService_FinalizeMigrationRequest');
class_alias(Group::class, 'Google_Service_VMMigrationService_Group');
class_alias(InitializingReplicationStep::class, 'Google_Service_VMMigrationService_InitializingReplicationStep');
class_alias(InstantiatingMigratedVMStep::class, 'Google_Service_VMMigrationService_InstantiatingMigratedVMStep');
class_alias(Link::class, 'Google_Service_VMMigrationService_Link');
class_alias(ListCloneJobsResponse::class, 'Google_Service_VMMigrationService_ListCloneJobsResponse');
class_alias(ListCutoverJobsResponse::class, 'Google_Service_VMMigrationService_ListCutoverJobsResponse');
class_alias(ListDatacenterConnectorsResponse::class, 'Google_Service_VMMigrationService_ListDatacenterConnectorsResponse');
class_alias(ListGroupsResponse::class, 'Google_Service_VMMigrationService_ListGroupsResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_VMMigrationService_ListLocationsResponse');
class_alias(ListMigratingVmsResponse::class, 'Google_Service_VMMigrationService_ListMigratingVmsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_VMMigrationService_ListOperationsResponse');
class_alias(ListReplicationCyclesResponse::class, 'Google_Service_VMMigrationService_ListReplicationCyclesResponse');
class_alias(ListSourcesResponse::class, 'Google_Service_VMMigrationService_ListSourcesResponse');
class_alias(ListTargetProjectsResponse::class, 'Google_Service_VMMigrationService_ListTargetProjectsResponse');
class_alias(ListUtilizationReportsResponse::class, 'Google_Service_VMMigrationService_ListUtilizationReportsResponse');
class_alias(LocalizedMessage::class, 'Google_Service_VMMigrationService_LocalizedMessage');
class_alias(Location::class, 'Google_Service_VMMigrationService_Location');
class_alias(MigratingVm::class, 'Google_Service_VMMigrationService_MigratingVm');
class_alias(MigrationError::class, 'Google_Service_VMMigrationService_MigrationError');
class_alias(NetworkInterface::class, 'Google_Service_VMMigrationService_NetworkInterface');
class_alias(Operation::class, 'Google_Service_VMMigrationService_Operation');
class_alias(OperationMetadata::class, 'Google_Service_VMMigrationService_OperationMetadata');
class_alias(PauseMigrationRequest::class, 'Google_Service_VMMigrationService_PauseMigrationRequest');
class_alias(PostProcessingStep::class, 'Google_Service_VMMigrationService_PostProcessingStep');
class_alias(PreparingVMDisksStep::class, 'Google_Service_VMMigrationService_PreparingVMDisksStep');
class_alias(RemoveGroupMigrationRequest::class, 'Google_Service_VMMigrationService_RemoveGroupMigrationRequest');
class_alias(ReplicatingStep::class, 'Google_Service_VMMigrationService_ReplicatingStep');
class_alias(ReplicationCycle::class, 'Google_Service_VMMigrationService_ReplicationCycle');
class_alias(ReplicationSync::class, 'Google_Service_VMMigrationService_ReplicationSync');
class_alias(ResumeMigrationRequest::class, 'Google_Service_VMMigrationService_ResumeMigrationRequest');
class_alias(SchedulePolicy::class, 'Google_Service_VMMigrationService_SchedulePolicy');
class_alias(SchedulingNodeAffinity::class, 'Google_Service_VMMigrationService_SchedulingNodeAffinity');
class_alias(ShuttingDownSourceVMStep::class, 'Google_Service_VMMigrationService_ShuttingDownSourceVMStep');
class_alias(Source::class, 'Google_Service_VMMigrationService_Source');
class_alias(StartMigrationRequest::class, 'Google_Service_VMMigrationService_StartMigrationRequest');
class_alias(Status::class, 'Google_Service_VMMigrationService_Status');
class_alias(TargetProject::class, 'Google_Service_VMMigrationService_TargetProject');
class_alias(UpgradeApplianceRequest::class, 'Google_Service_VMMigrationService_UpgradeApplianceRequest');
class_alias(UpgradeStatus::class, 'Google_Service_VMMigrationService_UpgradeStatus');
class_alias(UtilizationReport::class, 'Google_Service_VMMigrationService_UtilizationReport');
class_alias(VmUtilizationInfo::class, 'Google_Service_VMMigrationService_VmUtilizationInfo');
class_alias(VmUtilizationMetrics::class, 'Google_Service_VMMigrationService_VmUtilizationMetrics');
class_alias(VmmigrationEmpty::class, 'Google_Service_VMMigrationService_VmmigrationEmpty');
class_alias(VmwareSourceDetails::class, 'Google_Service_VMMigrationService_VmwareSourceDetails');
class_alias(VmwareVmDetails::class, 'Google_Service_VMMigrationService_VmwareVmDetails');
class_alias(VmwareVmsDetails::class, 'Google_Service_VMMigrationService_VmwareVmsDetails');
