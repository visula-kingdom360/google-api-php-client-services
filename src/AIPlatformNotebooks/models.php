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

namespace Google\Service\AIPlatformNotebooks;

class AcceleratorConfig extends \Google\Model
{
  /** @var string */
  public $coreCount;
  /** @var string */
  public $type;

  /** @param string */
  public function setCoreCount($coreCount)
  {
    $this->coreCount = $coreCount;
  }
  /** @return string */
  public function getCoreCount()
  {
    return $this->coreCount;
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

class BootImage extends \Google\Model
{
}

class CancelOperationRequest extends \Google\Model
{
}

class ContainerImage extends \Google\Model
{
  /** @var string */
  public $repository;
  /** @var string */
  public $tag;

  /** @param string */
  public function setRepository($repository)
  {
    $this->repository = $repository;
  }
  /** @return string */
  public function getRepository()
  {
    return $this->repository;
  }
  /** @param string */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return string */
  public function getTag()
  {
    return $this->tag;
  }
}

class DataprocParameters extends \Google\Model
{
  /** @var string */
  public $cluster;

  /** @param string */
  public function setCluster($cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return string */
  public function getCluster()
  {
    return $this->cluster;
  }
}

class DiagnoseInstanceRequest extends \Google\Model
{
  /** @var DiagnosticConfig */
  public $diagnosticConfig;
  protected $diagnosticConfigType = DiagnosticConfig::class;
  protected $diagnosticConfigDataType = '';
  /** @param DiagnosticConfig */
  public function setDiagnosticConfig(DiagnosticConfig $diagnosticConfig)
  {
    $this->diagnosticConfig = $diagnosticConfig;
  }
  /** @return DiagnosticConfig */
  public function getDiagnosticConfig()
  {
    return $this->diagnosticConfig;
  }
}

class DiagnoseRuntimeRequest extends \Google\Model
{
  /** @var DiagnosticConfig */
  public $diagnosticConfig;
  protected $diagnosticConfigType = DiagnosticConfig::class;
  protected $diagnosticConfigDataType = '';
  /** @param DiagnosticConfig */
  public function setDiagnosticConfig(DiagnosticConfig $diagnosticConfig)
  {
    $this->diagnosticConfig = $diagnosticConfig;
  }
  /** @return DiagnosticConfig */
  public function getDiagnosticConfig()
  {
    return $this->diagnosticConfig;
  }
}

class DiagnosticConfig extends \Google\Model
{
  /** @var bool */
  public $copyHomeFilesFlagEnabled;
  /** @var string */
  public $gcsBucket;
  /** @var bool */
  public $packetCaptureFlagEnabled;
  /** @var string */
  public $relativePath;
  /** @var bool */
  public $repairFlagEnabled;

  /** @param bool */
  public function setCopyHomeFilesFlagEnabled($copyHomeFilesFlagEnabled)
  {
    $this->copyHomeFilesFlagEnabled = $copyHomeFilesFlagEnabled;
  }
  /** @return bool */
  public function getCopyHomeFilesFlagEnabled()
  {
    return $this->copyHomeFilesFlagEnabled;
  }
  /** @param string */
  public function setGcsBucket($gcsBucket)
  {
    $this->gcsBucket = $gcsBucket;
  }
  /** @return string */
  public function getGcsBucket()
  {
    return $this->gcsBucket;
  }
  /** @param bool */
  public function setPacketCaptureFlagEnabled($packetCaptureFlagEnabled)
  {
    $this->packetCaptureFlagEnabled = $packetCaptureFlagEnabled;
  }
  /** @return bool */
  public function getPacketCaptureFlagEnabled()
  {
    return $this->packetCaptureFlagEnabled;
  }
  /** @param string */
  public function setRelativePath($relativePath)
  {
    $this->relativePath = $relativePath;
  }
  /** @return string */
  public function getRelativePath()
  {
    return $this->relativePath;
  }
  /** @param bool */
  public function setRepairFlagEnabled($repairFlagEnabled)
  {
    $this->repairFlagEnabled = $repairFlagEnabled;
  }
  /** @return bool */
  public function getRepairFlagEnabled()
  {
    return $this->repairFlagEnabled;
  }
}

class Disk extends \Google\Collection
{
  /** @var bool */
  public $autoDelete;
  /** @var bool */
  public $boot;
  /** @var string */
  public $deviceName;
  /** @var string */
  public $diskSizeGb;
  /** @var GuestOsFeature[] */
  public $guestOsFeatures;
  /** @var string */
  public $index;
  /** @var string */
  public $interface;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $licenses;
  /** @var string */
  public $mode;
  /** @var string */
  public $source;
  /** @var string */
  public $type;
  protected $collection_key = 'licenses';
  protected $guestOsFeaturesType = GuestOsFeature::class;
  protected $guestOsFeaturesDataType = 'array';
  /** @param bool */
  public function setAutoDelete($autoDelete)
  {
    $this->autoDelete = $autoDelete;
  }
  /** @return bool */
  public function getAutoDelete()
  {
    return $this->autoDelete;
  }
  /** @param bool */
  public function setBoot($boot)
  {
    $this->boot = $boot;
  }
  /** @return bool */
  public function getBoot()
  {
    return $this->boot;
  }
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
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  /** @return string */
  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }
  /** @param GuestOsFeature[] */
  public function setGuestOsFeatures($guestOsFeatures)
  {
    $this->guestOsFeatures = $guestOsFeatures;
  }
  /** @return GuestOsFeature[] */
  public function getGuestOsFeatures()
  {
    return $this->guestOsFeatures;
  }
  /** @param string */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return string */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param string */
  public function setInterface($interface)
  {
    $this->interface = $interface;
  }
  /** @return string */
  public function getInterface()
  {
    return $this->interface;
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
  public function setLicenses($licenses)
  {
    $this->licenses = $licenses;
  }
  /** @return string[] */
  public function getLicenses()
  {
    return $this->licenses;
  }
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
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
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

class EncryptionConfig extends \Google\Model
{
  /** @var string */
  public $kmsKey;

  /** @param string */
  public function setKmsKey($kmsKey)
  {
    $this->kmsKey = $kmsKey;
  }
  /** @return string */
  public function getKmsKey()
  {
    return $this->kmsKey;
  }
}

class Environment extends \Google\Model
{
  /** @var ContainerImage */
  public $containerImage;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $postStartupScript;
  /** @var VmImage */
  public $vmImage;
  protected $containerImageType = ContainerImage::class;
  protected $containerImageDataType = '';
  protected $vmImageType = VmImage::class;
  protected $vmImageDataType = '';
  /** @param ContainerImage */
  public function setContainerImage(ContainerImage $containerImage)
  {
    $this->containerImage = $containerImage;
  }
  /** @return ContainerImage */
  public function getContainerImage()
  {
    return $this->containerImage;
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
  public function setPostStartupScript($postStartupScript)
  {
    $this->postStartupScript = $postStartupScript;
  }
  /** @return string */
  public function getPostStartupScript()
  {
    return $this->postStartupScript;
  }
  /** @param VmImage */
  public function setVmImage(VmImage $vmImage)
  {
    $this->vmImage = $vmImage;
  }
  /** @return VmImage */
  public function getVmImage()
  {
    return $this->vmImage;
  }
}

class Event extends \Google\Model
{
  /** @var string[] */
  public $details;
  /** @var string */
  public $reportTime;
  /** @var string */
  public $type;

  /** @param string[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string[] */
  public function getDetails()
  {
    return $this->details;
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

class Execution extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var ExecutionTemplate */
  public $executionTemplate;
  /** @var string */
  public $jobUri;
  /** @var string */
  public $name;
  /** @var string */
  public $outputNotebookFile;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $executionTemplateType = ExecutionTemplate::class;
  protected $executionTemplateDataType = '';
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
  /** @param ExecutionTemplate */
  public function setExecutionTemplate(ExecutionTemplate $executionTemplate)
  {
    $this->executionTemplate = $executionTemplate;
  }
  /** @return ExecutionTemplate */
  public function getExecutionTemplate()
  {
    return $this->executionTemplate;
  }
  /** @param string */
  public function setJobUri($jobUri)
  {
    $this->jobUri = $jobUri;
  }
  /** @return string */
  public function getJobUri()
  {
    return $this->jobUri;
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
  public function setOutputNotebookFile($outputNotebookFile)
  {
    $this->outputNotebookFile = $outputNotebookFile;
  }
  /** @return string */
  public function getOutputNotebookFile()
  {
    return $this->outputNotebookFile;
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
}

class ExecutionTemplate extends \Google\Model
{
  /** @var SchedulerAcceleratorConfig */
  public $acceleratorConfig;
  /** @var string */
  public $containerImageUri;
  /** @var DataprocParameters */
  public $dataprocParameters;
  /** @var string */
  public $inputNotebookFile;
  /** @var string */
  public $jobType;
  /** @var string */
  public $kernelSpec;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $masterType;
  /** @var string */
  public $outputNotebookFolder;
  /** @var string */
  public $parameters;
  /** @var string */
  public $paramsYamlFile;
  /** @var string */
  public $scaleTier;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $tensorboard;
  /** @var VertexAIParameters */
  public $vertexAiParameters;
  protected $acceleratorConfigType = SchedulerAcceleratorConfig::class;
  protected $acceleratorConfigDataType = '';
  protected $dataprocParametersType = DataprocParameters::class;
  protected $dataprocParametersDataType = '';
  protected $vertexAiParametersType = VertexAIParameters::class;
  protected $vertexAiParametersDataType = '';
  /** @param SchedulerAcceleratorConfig */
  public function setAcceleratorConfig(SchedulerAcceleratorConfig $acceleratorConfig)
  {
    $this->acceleratorConfig = $acceleratorConfig;
  }
  /** @return SchedulerAcceleratorConfig */
  public function getAcceleratorConfig()
  {
    return $this->acceleratorConfig;
  }
  /** @param string */
  public function setContainerImageUri($containerImageUri)
  {
    $this->containerImageUri = $containerImageUri;
  }
  /** @return string */
  public function getContainerImageUri()
  {
    return $this->containerImageUri;
  }
  /** @param DataprocParameters */
  public function setDataprocParameters(DataprocParameters $dataprocParameters)
  {
    $this->dataprocParameters = $dataprocParameters;
  }
  /** @return DataprocParameters */
  public function getDataprocParameters()
  {
    return $this->dataprocParameters;
  }
  /** @param string */
  public function setInputNotebookFile($inputNotebookFile)
  {
    $this->inputNotebookFile = $inputNotebookFile;
  }
  /** @return string */
  public function getInputNotebookFile()
  {
    return $this->inputNotebookFile;
  }
  /** @param string */
  public function setJobType($jobType)
  {
    $this->jobType = $jobType;
  }
  /** @return string */
  public function getJobType()
  {
    return $this->jobType;
  }
  /** @param string */
  public function setKernelSpec($kernelSpec)
  {
    $this->kernelSpec = $kernelSpec;
  }
  /** @return string */
  public function getKernelSpec()
  {
    return $this->kernelSpec;
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
  public function setMasterType($masterType)
  {
    $this->masterType = $masterType;
  }
  /** @return string */
  public function getMasterType()
  {
    return $this->masterType;
  }
  /** @param string */
  public function setOutputNotebookFolder($outputNotebookFolder)
  {
    $this->outputNotebookFolder = $outputNotebookFolder;
  }
  /** @return string */
  public function getOutputNotebookFolder()
  {
    return $this->outputNotebookFolder;
  }
  /** @param string */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return string */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param string */
  public function setParamsYamlFile($paramsYamlFile)
  {
    $this->paramsYamlFile = $paramsYamlFile;
  }
  /** @return string */
  public function getParamsYamlFile()
  {
    return $this->paramsYamlFile;
  }
  /** @param string */
  public function setScaleTier($scaleTier)
  {
    $this->scaleTier = $scaleTier;
  }
  /** @return string */
  public function getScaleTier()
  {
    return $this->scaleTier;
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
  public function setTensorboard($tensorboard)
  {
    $this->tensorboard = $tensorboard;
  }
  /** @return string */
  public function getTensorboard()
  {
    return $this->tensorboard;
  }
  /** @param VertexAIParameters */
  public function setVertexAiParameters(VertexAIParameters $vertexAiParameters)
  {
    $this->vertexAiParameters = $vertexAiParameters;
  }
  /** @return VertexAIParameters */
  public function getVertexAiParameters()
  {
    return $this->vertexAiParameters;
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

class GetInstanceHealthResponse extends \Google\Model
{
  /** @var string[] */
  public $healthInfo;
  /** @var string */
  public $healthState;

  /** @param string[] */
  public function setHealthInfo($healthInfo)
  {
    $this->healthInfo = $healthInfo;
  }
  /** @return string[] */
  public function getHealthInfo()
  {
    return $this->healthInfo;
  }
  /** @param string */
  public function setHealthState($healthState)
  {
    $this->healthState = $healthState;
  }
  /** @return string */
  public function getHealthState()
  {
    return $this->healthState;
  }
}

class GuestOsFeature extends \Google\Model
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

class Instance extends \Google\Collection
{
  /** @var AcceleratorConfig */
  public $acceleratorConfig;
  /** @var string */
  public $bootDiskSizeGb;
  /** @var string */
  public $bootDiskType;
  /** @var bool */
  public $canIpForward;
  /** @var ContainerImage */
  public $containerImage;
  /** @var string */
  public $createTime;
  /** @var string */
  public $creator;
  /** @var string */
  public $customGpuDriverPath;
  /** @var string */
  public $dataDiskSizeGb;
  /** @var string */
  public $dataDiskType;
  /** @var string */
  public $diskEncryption;
  /** @var Disk[] */
  public $disks;
  /** @var bool */
  public $installGpuDriver;
  /** @var string[] */
  public $instanceOwners;
  /** @var string */
  public $kmsKey;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $machineType;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var string */
  public $network;
  /** @var string */
  public $nicType;
  /** @var bool */
  public $noProxyAccess;
  /** @var bool */
  public $noPublicIp;
  /** @var bool */
  public $noRemoveDataDisk;
  /** @var string */
  public $postStartupScript;
  /** @var string */
  public $proxyUri;
  /** @var ReservationAffinity */
  public $reservationAffinity;
  /** @var string */
  public $serviceAccount;
  /** @var string[] */
  public $serviceAccountScopes;
  /** @var ShieldedInstanceConfig */
  public $shieldedInstanceConfig;
  /** @var string */
  public $state;
  /** @var string */
  public $subnet;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $updateTime;
  /** @var UpgradeHistoryEntry[] */
  public $upgradeHistory;
  /** @var VmImage */
  public $vmImage;
  protected $collection_key = 'upgradeHistory';
  protected $acceleratorConfigType = AcceleratorConfig::class;
  protected $acceleratorConfigDataType = '';
  protected $containerImageType = ContainerImage::class;
  protected $containerImageDataType = '';
  protected $disksType = Disk::class;
  protected $disksDataType = 'array';
  protected $reservationAffinityType = ReservationAffinity::class;
  protected $reservationAffinityDataType = '';
  protected $shieldedInstanceConfigType = ShieldedInstanceConfig::class;
  protected $shieldedInstanceConfigDataType = '';
  protected $upgradeHistoryType = UpgradeHistoryEntry::class;
  protected $upgradeHistoryDataType = 'array';
  protected $vmImageType = VmImage::class;
  protected $vmImageDataType = '';
  /** @param AcceleratorConfig */
  public function setAcceleratorConfig(AcceleratorConfig $acceleratorConfig)
  {
    $this->acceleratorConfig = $acceleratorConfig;
  }
  /** @return AcceleratorConfig */
  public function getAcceleratorConfig()
  {
    return $this->acceleratorConfig;
  }
  /** @param string */
  public function setBootDiskSizeGb($bootDiskSizeGb)
  {
    $this->bootDiskSizeGb = $bootDiskSizeGb;
  }
  /** @return string */
  public function getBootDiskSizeGb()
  {
    return $this->bootDiskSizeGb;
  }
  /** @param string */
  public function setBootDiskType($bootDiskType)
  {
    $this->bootDiskType = $bootDiskType;
  }
  /** @return string */
  public function getBootDiskType()
  {
    return $this->bootDiskType;
  }
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
  /** @param ContainerImage */
  public function setContainerImage(ContainerImage $containerImage)
  {
    $this->containerImage = $containerImage;
  }
  /** @return ContainerImage */
  public function getContainerImage()
  {
    return $this->containerImage;
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
  public function setCustomGpuDriverPath($customGpuDriverPath)
  {
    $this->customGpuDriverPath = $customGpuDriverPath;
  }
  /** @return string */
  public function getCustomGpuDriverPath()
  {
    return $this->customGpuDriverPath;
  }
  /** @param string */
  public function setDataDiskSizeGb($dataDiskSizeGb)
  {
    $this->dataDiskSizeGb = $dataDiskSizeGb;
  }
  /** @return string */
  public function getDataDiskSizeGb()
  {
    return $this->dataDiskSizeGb;
  }
  /** @param string */
  public function setDataDiskType($dataDiskType)
  {
    $this->dataDiskType = $dataDiskType;
  }
  /** @return string */
  public function getDataDiskType()
  {
    return $this->dataDiskType;
  }
  /** @param string */
  public function setDiskEncryption($diskEncryption)
  {
    $this->diskEncryption = $diskEncryption;
  }
  /** @return string */
  public function getDiskEncryption()
  {
    return $this->diskEncryption;
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
  /** @param bool */
  public function setInstallGpuDriver($installGpuDriver)
  {
    $this->installGpuDriver = $installGpuDriver;
  }
  /** @return bool */
  public function getInstallGpuDriver()
  {
    return $this->installGpuDriver;
  }
  /** @param string[] */
  public function setInstanceOwners($instanceOwners)
  {
    $this->instanceOwners = $instanceOwners;
  }
  /** @return string[] */
  public function getInstanceOwners()
  {
    return $this->instanceOwners;
  }
  /** @param string */
  public function setKmsKey($kmsKey)
  {
    $this->kmsKey = $kmsKey;
  }
  /** @return string */
  public function getKmsKey()
  {
    return $this->kmsKey;
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
  public function setNicType($nicType)
  {
    $this->nicType = $nicType;
  }
  /** @return string */
  public function getNicType()
  {
    return $this->nicType;
  }
  /** @param bool */
  public function setNoProxyAccess($noProxyAccess)
  {
    $this->noProxyAccess = $noProxyAccess;
  }
  /** @return bool */
  public function getNoProxyAccess()
  {
    return $this->noProxyAccess;
  }
  /** @param bool */
  public function setNoPublicIp($noPublicIp)
  {
    $this->noPublicIp = $noPublicIp;
  }
  /** @return bool */
  public function getNoPublicIp()
  {
    return $this->noPublicIp;
  }
  /** @param bool */
  public function setNoRemoveDataDisk($noRemoveDataDisk)
  {
    $this->noRemoveDataDisk = $noRemoveDataDisk;
  }
  /** @return bool */
  public function getNoRemoveDataDisk()
  {
    return $this->noRemoveDataDisk;
  }
  /** @param string */
  public function setPostStartupScript($postStartupScript)
  {
    $this->postStartupScript = $postStartupScript;
  }
  /** @return string */
  public function getPostStartupScript()
  {
    return $this->postStartupScript;
  }
  /** @param string */
  public function setProxyUri($proxyUri)
  {
    $this->proxyUri = $proxyUri;
  }
  /** @return string */
  public function getProxyUri()
  {
    return $this->proxyUri;
  }
  /** @param ReservationAffinity */
  public function setReservationAffinity(ReservationAffinity $reservationAffinity)
  {
    $this->reservationAffinity = $reservationAffinity;
  }
  /** @return ReservationAffinity */
  public function getReservationAffinity()
  {
    return $this->reservationAffinity;
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
  /** @param string[] */
  public function setServiceAccountScopes($serviceAccountScopes)
  {
    $this->serviceAccountScopes = $serviceAccountScopes;
  }
  /** @return string[] */
  public function getServiceAccountScopes()
  {
    return $this->serviceAccountScopes;
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
  /** @param string */
  public function setSubnet($subnet)
  {
    $this->subnet = $subnet;
  }
  /** @return string */
  public function getSubnet()
  {
    return $this->subnet;
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
  /** @param UpgradeHistoryEntry[] */
  public function setUpgradeHistory($upgradeHistory)
  {
    $this->upgradeHistory = $upgradeHistory;
  }
  /** @return UpgradeHistoryEntry[] */
  public function getUpgradeHistory()
  {
    return $this->upgradeHistory;
  }
  /** @param VmImage */
  public function setVmImage(VmImage $vmImage)
  {
    $this->vmImage = $vmImage;
  }
  /** @return VmImage */
  public function getVmImage()
  {
    return $this->vmImage;
  }
}

class InstanceConfig extends \Google\Model
{
  /** @var bool */
  public $enableHealthMonitoring;
  /** @var string */
  public $notebookUpgradeSchedule;

  /** @param bool */
  public function setEnableHealthMonitoring($enableHealthMonitoring)
  {
    $this->enableHealthMonitoring = $enableHealthMonitoring;
  }
  /** @return bool */
  public function getEnableHealthMonitoring()
  {
    return $this->enableHealthMonitoring;
  }
  /** @param string */
  public function setNotebookUpgradeSchedule($notebookUpgradeSchedule)
  {
    $this->notebookUpgradeSchedule = $notebookUpgradeSchedule;
  }
  /** @return string */
  public function getNotebookUpgradeSchedule()
  {
    return $this->notebookUpgradeSchedule;
  }
}

class IsInstanceUpgradeableResponse extends \Google\Model
{
  /** @var string */
  public $upgradeImage;
  /** @var string */
  public $upgradeInfo;
  /** @var string */
  public $upgradeVersion;
  /** @var bool */
  public $upgradeable;

  /** @param string */
  public function setUpgradeImage($upgradeImage)
  {
    $this->upgradeImage = $upgradeImage;
  }
  /** @return string */
  public function getUpgradeImage()
  {
    return $this->upgradeImage;
  }
  /** @param string */
  public function setUpgradeInfo($upgradeInfo)
  {
    $this->upgradeInfo = $upgradeInfo;
  }
  /** @return string */
  public function getUpgradeInfo()
  {
    return $this->upgradeInfo;
  }
  /** @param string */
  public function setUpgradeVersion($upgradeVersion)
  {
    $this->upgradeVersion = $upgradeVersion;
  }
  /** @return string */
  public function getUpgradeVersion()
  {
    return $this->upgradeVersion;
  }
  /** @param bool */
  public function setUpgradeable($upgradeable)
  {
    $this->upgradeable = $upgradeable;
  }
  /** @return bool */
  public function getUpgradeable()
  {
    return $this->upgradeable;
  }
}

class ListEnvironmentsResponse extends \Google\Collection
{
  /** @var Environment[] */
  public $environments;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $environmentsType = Environment::class;
  protected $environmentsDataType = 'array';
  /** @param Environment[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return Environment[] */
  public function getEnvironments()
  {
    return $this->environments;
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

class ListExecutionsResponse extends \Google\Collection
{
  /** @var Execution[] */
  public $executions;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $executionsType = Execution::class;
  protected $executionsDataType = 'array';
  /** @param Execution[] */
  public function setExecutions($executions)
  {
    $this->executions = $executions;
  }
  /** @return Execution[] */
  public function getExecutions()
  {
    return $this->executions;
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

class ListRuntimesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Runtime[] */
  public $runtimes;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $runtimesType = Runtime::class;
  protected $runtimesDataType = 'array';
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
  /** @param Runtime[] */
  public function setRuntimes($runtimes)
  {
    $this->runtimes = $runtimes;
  }
  /** @return Runtime[] */
  public function getRuntimes()
  {
    return $this->runtimes;
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

class ListSchedulesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Schedule[] */
  public $schedules;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $schedulesType = Schedule::class;
  protected $schedulesDataType = 'array';
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
  /** @param Schedule[] */
  public function setSchedules($schedules)
  {
    $this->schedules = $schedules;
  }
  /** @return Schedule[] */
  public function getSchedules()
  {
    return $this->schedules;
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

class LocalDisk extends \Google\Collection
{
  /** @var bool */
  public $autoDelete;
  /** @var bool */
  public $boot;
  /** @var string */
  public $deviceName;
  /** @var RuntimeGuestOsFeature[] */
  public $guestOsFeatures;
  /** @var int */
  public $index;
  /** @var LocalDiskInitializeParams */
  public $initializeParams;
  /** @var string */
  public $interface;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $licenses;
  /** @var string */
  public $mode;
  /** @var string */
  public $source;
  /** @var string */
  public $type;
  protected $collection_key = 'licenses';
  protected $guestOsFeaturesType = RuntimeGuestOsFeature::class;
  protected $guestOsFeaturesDataType = 'array';
  protected $initializeParamsType = LocalDiskInitializeParams::class;
  protected $initializeParamsDataType = '';
  /** @param bool */
  public function setAutoDelete($autoDelete)
  {
    $this->autoDelete = $autoDelete;
  }
  /** @return bool */
  public function getAutoDelete()
  {
    return $this->autoDelete;
  }
  /** @param bool */
  public function setBoot($boot)
  {
    $this->boot = $boot;
  }
  /** @return bool */
  public function getBoot()
  {
    return $this->boot;
  }
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
  /** @param RuntimeGuestOsFeature[] */
  public function setGuestOsFeatures($guestOsFeatures)
  {
    $this->guestOsFeatures = $guestOsFeatures;
  }
  /** @return RuntimeGuestOsFeature[] */
  public function getGuestOsFeatures()
  {
    return $this->guestOsFeatures;
  }
  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param LocalDiskInitializeParams */
  public function setInitializeParams(LocalDiskInitializeParams $initializeParams)
  {
    $this->initializeParams = $initializeParams;
  }
  /** @return LocalDiskInitializeParams */
  public function getInitializeParams()
  {
    return $this->initializeParams;
  }
  /** @param string */
  public function setInterface($interface)
  {
    $this->interface = $interface;
  }
  /** @return string */
  public function getInterface()
  {
    return $this->interface;
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
  public function setLicenses($licenses)
  {
    $this->licenses = $licenses;
  }
  /** @return string[] */
  public function getLicenses()
  {
    return $this->licenses;
  }
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
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
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

class LocalDiskInitializeParams extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $diskName;
  /** @var string */
  public $diskSizeGb;
  /** @var string */
  public $diskType;
  /** @var string[] */
  public $labels;

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
  public function setDiskName($diskName)
  {
    $this->diskName = $diskName;
  }
  /** @return string */
  public function getDiskName()
  {
    return $this->diskName;
  }
  /** @param string */
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  /** @return string */
  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
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

class NotebooksEmpty extends \Google\Model
{
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
  /** @var string */
  public $endpoint;
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
  /** @param string */
  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /** @return string */
  public function getEndpoint()
  {
    return $this->endpoint;
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

class RefreshRuntimeTokenInternalRequest extends \Google\Model
{
  /** @var string */
  public $vmId;

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

class RefreshRuntimeTokenInternalResponse extends \Google\Model
{
  /** @var string */
  public $accessToken;
  /** @var string */
  public $expireTime;

  /** @param string */
  public function setAccessToken($accessToken)
  {
    $this->accessToken = $accessToken;
  }
  /** @return string */
  public function getAccessToken()
  {
    return $this->accessToken;
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
}

class RegisterInstanceRequest extends \Google\Model
{
  /** @var string */
  public $instanceId;

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
}

class ReportInstanceInfoRequest extends \Google\Model
{
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $vmId;

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

class ReportRuntimeEventRequest extends \Google\Model
{
  /** @var Event */
  public $event;
  /** @var string */
  public $vmId;
  protected $eventType = Event::class;
  protected $eventDataType = '';
  /** @param Event */
  public function setEvent(Event $event)
  {
    $this->event = $event;
  }
  /** @return Event */
  public function getEvent()
  {
    return $this->event;
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

class ReservationAffinity extends \Google\Collection
{
  /** @var string */
  public $consumeReservationType;
  /** @var string */
  public $key;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string */
  public function setConsumeReservationType($consumeReservationType)
  {
    $this->consumeReservationType = $consumeReservationType;
  }
  /** @return string */
  public function getConsumeReservationType()
  {
    return $this->consumeReservationType;
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

class ResetInstanceRequest extends \Google\Model
{
}

class ResetRuntimeRequest extends \Google\Model
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

class RollbackInstanceRequest extends \Google\Model
{
  /** @var string */
  public $targetSnapshot;

  /** @param string */
  public function setTargetSnapshot($targetSnapshot)
  {
    $this->targetSnapshot = $targetSnapshot;
  }
  /** @return string */
  public function getTargetSnapshot()
  {
    return $this->targetSnapshot;
  }
}

class Runtime extends \Google\Model
{
  /** @var RuntimeAccessConfig */
  public $accessConfig;
  /** @var string */
  public $createTime;
  /** @var string */
  public $healthState;
  /** @var RuntimeMetrics */
  public $metrics;
  /** @var string */
  public $name;
  /** @var RuntimeSoftwareConfig */
  public $softwareConfig;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  /** @var VirtualMachine */
  public $virtualMachine;
  protected $accessConfigType = RuntimeAccessConfig::class;
  protected $accessConfigDataType = '';
  protected $metricsType = RuntimeMetrics::class;
  protected $metricsDataType = '';
  protected $softwareConfigType = RuntimeSoftwareConfig::class;
  protected $softwareConfigDataType = '';
  protected $virtualMachineType = VirtualMachine::class;
  protected $virtualMachineDataType = '';
  /** @param RuntimeAccessConfig */
  public function setAccessConfig(RuntimeAccessConfig $accessConfig)
  {
    $this->accessConfig = $accessConfig;
  }
  /** @return RuntimeAccessConfig */
  public function getAccessConfig()
  {
    return $this->accessConfig;
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
  public function setHealthState($healthState)
  {
    $this->healthState = $healthState;
  }
  /** @return string */
  public function getHealthState()
  {
    return $this->healthState;
  }
  /** @param RuntimeMetrics */
  public function setMetrics(RuntimeMetrics $metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return RuntimeMetrics */
  public function getMetrics()
  {
    return $this->metrics;
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
  /** @param RuntimeSoftwareConfig */
  public function setSoftwareConfig(RuntimeSoftwareConfig $softwareConfig)
  {
    $this->softwareConfig = $softwareConfig;
  }
  /** @return RuntimeSoftwareConfig */
  public function getSoftwareConfig()
  {
    return $this->softwareConfig;
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
}

class RuntimeAcceleratorConfig extends \Google\Model
{
  /** @var string */
  public $coreCount;
  /** @var string */
  public $type;

  /** @param string */
  public function setCoreCount($coreCount)
  {
    $this->coreCount = $coreCount;
  }
  /** @return string */
  public function getCoreCount()
  {
    return $this->coreCount;
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

class RuntimeAccessConfig extends \Google\Model
{
  /** @var string */
  public $accessType;
  /** @var string */
  public $proxyUri;
  /** @var string */
  public $runtimeOwner;

  /** @param string */
  public function setAccessType($accessType)
  {
    $this->accessType = $accessType;
  }
  /** @return string */
  public function getAccessType()
  {
    return $this->accessType;
  }
  /** @param string */
  public function setProxyUri($proxyUri)
  {
    $this->proxyUri = $proxyUri;
  }
  /** @return string */
  public function getProxyUri()
  {
    return $this->proxyUri;
  }
  /** @param string */
  public function setRuntimeOwner($runtimeOwner)
  {
    $this->runtimeOwner = $runtimeOwner;
  }
  /** @return string */
  public function getRuntimeOwner()
  {
    return $this->runtimeOwner;
  }
}

class RuntimeGuestOsFeature extends \Google\Model
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

class RuntimeMetrics extends \Google\Model
{
  /** @var string[] */
  public $systemMetrics;

  /** @param string[] */
  public function setSystemMetrics($systemMetrics)
  {
    $this->systemMetrics = $systemMetrics;
  }
  /** @return string[] */
  public function getSystemMetrics()
  {
    return $this->systemMetrics;
  }
}

class RuntimeShieldedInstanceConfig extends \Google\Model
{
  /** @var bool */
  public $enableIntegrityMonitoring;
  /** @var bool */
  public $enableSecureBoot;
  /** @var bool */
  public $enableVtpm;

  /** @param bool */
  public function setEnableIntegrityMonitoring($enableIntegrityMonitoring)
  {
    $this->enableIntegrityMonitoring = $enableIntegrityMonitoring;
  }
  /** @return bool */
  public function getEnableIntegrityMonitoring()
  {
    return $this->enableIntegrityMonitoring;
  }
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
  /** @param bool */
  public function setEnableVtpm($enableVtpm)
  {
    $this->enableVtpm = $enableVtpm;
  }
  /** @return bool */
  public function getEnableVtpm()
  {
    return $this->enableVtpm;
  }
}

class RuntimeSoftwareConfig extends \Google\Collection
{
  /** @var string */
  public $customGpuDriverPath;
  /** @var bool */
  public $disableTerminal;
  /** @var bool */
  public $enableHealthMonitoring;
  /** @var bool */
  public $idleShutdown;
  /** @var int */
  public $idleShutdownTimeout;
  /** @var bool */
  public $installGpuDriver;
  /** @var ContainerImage[] */
  public $kernels;
  /** @var string */
  public $notebookUpgradeSchedule;
  /** @var string */
  public $postStartupScript;
  /** @var string */
  public $postStartupScriptBehavior;
  /** @var bool */
  public $upgradeable;
  protected $collection_key = 'kernels';
  protected $kernelsType = ContainerImage::class;
  protected $kernelsDataType = 'array';
  /** @param string */
  public function setCustomGpuDriverPath($customGpuDriverPath)
  {
    $this->customGpuDriverPath = $customGpuDriverPath;
  }
  /** @return string */
  public function getCustomGpuDriverPath()
  {
    return $this->customGpuDriverPath;
  }
  /** @param bool */
  public function setDisableTerminal($disableTerminal)
  {
    $this->disableTerminal = $disableTerminal;
  }
  /** @return bool */
  public function getDisableTerminal()
  {
    return $this->disableTerminal;
  }
  /** @param bool */
  public function setEnableHealthMonitoring($enableHealthMonitoring)
  {
    $this->enableHealthMonitoring = $enableHealthMonitoring;
  }
  /** @return bool */
  public function getEnableHealthMonitoring()
  {
    return $this->enableHealthMonitoring;
  }
  /** @param bool */
  public function setIdleShutdown($idleShutdown)
  {
    $this->idleShutdown = $idleShutdown;
  }
  /** @return bool */
  public function getIdleShutdown()
  {
    return $this->idleShutdown;
  }
  /** @param int */
  public function setIdleShutdownTimeout($idleShutdownTimeout)
  {
    $this->idleShutdownTimeout = $idleShutdownTimeout;
  }
  /** @return int */
  public function getIdleShutdownTimeout()
  {
    return $this->idleShutdownTimeout;
  }
  /** @param bool */
  public function setInstallGpuDriver($installGpuDriver)
  {
    $this->installGpuDriver = $installGpuDriver;
  }
  /** @return bool */
  public function getInstallGpuDriver()
  {
    return $this->installGpuDriver;
  }
  /** @param ContainerImage[] */
  public function setKernels($kernels)
  {
    $this->kernels = $kernels;
  }
  /** @return ContainerImage[] */
  public function getKernels()
  {
    return $this->kernels;
  }
  /** @param string */
  public function setNotebookUpgradeSchedule($notebookUpgradeSchedule)
  {
    $this->notebookUpgradeSchedule = $notebookUpgradeSchedule;
  }
  /** @return string */
  public function getNotebookUpgradeSchedule()
  {
    return $this->notebookUpgradeSchedule;
  }
  /** @param string */
  public function setPostStartupScript($postStartupScript)
  {
    $this->postStartupScript = $postStartupScript;
  }
  /** @return string */
  public function getPostStartupScript()
  {
    return $this->postStartupScript;
  }
  /** @param string */
  public function setPostStartupScriptBehavior($postStartupScriptBehavior)
  {
    $this->postStartupScriptBehavior = $postStartupScriptBehavior;
  }
  /** @return string */
  public function getPostStartupScriptBehavior()
  {
    return $this->postStartupScriptBehavior;
  }
  /** @param bool */
  public function setUpgradeable($upgradeable)
  {
    $this->upgradeable = $upgradeable;
  }
  /** @return bool */
  public function getUpgradeable()
  {
    return $this->upgradeable;
  }
}

class Schedule extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $cronSchedule;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var ExecutionTemplate */
  public $executionTemplate;
  /** @var string */
  public $name;
  /** @var Execution[] */
  public $recentExecutions;
  /** @var string */
  public $state;
  /** @var string */
  public $timeZone;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'recentExecutions';
  protected $executionTemplateType = ExecutionTemplate::class;
  protected $executionTemplateDataType = '';
  protected $recentExecutionsType = Execution::class;
  protected $recentExecutionsDataType = 'array';
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
  public function setCronSchedule($cronSchedule)
  {
    $this->cronSchedule = $cronSchedule;
  }
  /** @return string */
  public function getCronSchedule()
  {
    return $this->cronSchedule;
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
  /** @param ExecutionTemplate */
  public function setExecutionTemplate(ExecutionTemplate $executionTemplate)
  {
    $this->executionTemplate = $executionTemplate;
  }
  /** @return ExecutionTemplate */
  public function getExecutionTemplate()
  {
    return $this->executionTemplate;
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
  /** @param Execution[] */
  public function setRecentExecutions($recentExecutions)
  {
    $this->recentExecutions = $recentExecutions;
  }
  /** @return Execution[] */
  public function getRecentExecutions()
  {
    return $this->recentExecutions;
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

class SchedulerAcceleratorConfig extends \Google\Model
{
  /** @var string */
  public $coreCount;
  /** @var string */
  public $type;

  /** @param string */
  public function setCoreCount($coreCount)
  {
    $this->coreCount = $coreCount;
  }
  /** @return string */
  public function getCoreCount()
  {
    return $this->coreCount;
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

class SetInstanceAcceleratorRequest extends \Google\Model
{
  /** @var string */
  public $coreCount;
  /** @var string */
  public $type;

  /** @param string */
  public function setCoreCount($coreCount)
  {
    $this->coreCount = $coreCount;
  }
  /** @return string */
  public function getCoreCount()
  {
    return $this->coreCount;
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

class SetInstanceLabelsRequest extends \Google\Model
{
  /** @var string[] */
  public $labels;

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
}

class SetInstanceMachineTypeRequest extends \Google\Model
{
  /** @var string */
  public $machineType;

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
}

class ShieldedInstanceConfig extends \Google\Model
{
  /** @var bool */
  public $enableIntegrityMonitoring;
  /** @var bool */
  public $enableSecureBoot;
  /** @var bool */
  public $enableVtpm;

  /** @param bool */
  public function setEnableIntegrityMonitoring($enableIntegrityMonitoring)
  {
    $this->enableIntegrityMonitoring = $enableIntegrityMonitoring;
  }
  /** @return bool */
  public function getEnableIntegrityMonitoring()
  {
    return $this->enableIntegrityMonitoring;
  }
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
  /** @param bool */
  public function setEnableVtpm($enableVtpm)
  {
    $this->enableVtpm = $enableVtpm;
  }
  /** @return bool */
  public function getEnableVtpm()
  {
    return $this->enableVtpm;
  }
}

class StartInstanceRequest extends \Google\Model
{
}

class StartRuntimeRequest extends \Google\Model
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

class StopInstanceRequest extends \Google\Model
{
}

class StopRuntimeRequest extends \Google\Model
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

class SwitchRuntimeRequest extends \Google\Model
{
  /** @var RuntimeAcceleratorConfig */
  public $acceleratorConfig;
  /** @var string */
  public $machineType;
  /** @var string */
  public $requestId;
  protected $acceleratorConfigType = RuntimeAcceleratorConfig::class;
  protected $acceleratorConfigDataType = '';
  /** @param RuntimeAcceleratorConfig */
  public function setAcceleratorConfig(RuntimeAcceleratorConfig $acceleratorConfig)
  {
    $this->acceleratorConfig = $acceleratorConfig;
  }
  /** @return RuntimeAcceleratorConfig */
  public function getAcceleratorConfig()
  {
    return $this->acceleratorConfig;
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

class TriggerScheduleRequest extends \Google\Model
{
}

class UpdateInstanceConfigRequest extends \Google\Model
{
  /** @var InstanceConfig */
  public $config;
  protected $configType = InstanceConfig::class;
  protected $configDataType = '';
  /** @param InstanceConfig */
  public function setConfig(InstanceConfig $config)
  {
    $this->config = $config;
  }
  /** @return InstanceConfig */
  public function getConfig()
  {
    return $this->config;
  }
}

class UpdateInstanceMetadataItemsRequest extends \Google\Model
{
  /** @var string[] */
  public $items;

  /** @param string[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return string[] */
  public function getItems()
  {
    return $this->items;
  }
}

class UpdateInstanceMetadataItemsResponse extends \Google\Model
{
  /** @var string[] */
  public $items;

  /** @param string[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return string[] */
  public function getItems()
  {
    return $this->items;
  }
}

class UpdateShieldedInstanceConfigRequest extends \Google\Model
{
  /** @var ShieldedInstanceConfig */
  public $shieldedInstanceConfig;
  protected $shieldedInstanceConfigType = ShieldedInstanceConfig::class;
  protected $shieldedInstanceConfigDataType = '';
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
}

class UpgradeHistoryEntry extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $containerImage;
  /** @var string */
  public $createTime;
  /** @var string */
  public $framework;
  /** @var string */
  public $snapshot;
  /** @var string */
  public $state;
  /** @var string */
  public $targetImage;
  /** @var string */
  public $targetVersion;
  /** @var string */
  public $version;
  /** @var string */
  public $vmImage;

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
  /** @param string */
  public function setContainerImage($containerImage)
  {
    $this->containerImage = $containerImage;
  }
  /** @return string */
  public function getContainerImage()
  {
    return $this->containerImage;
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
  public function setFramework($framework)
  {
    $this->framework = $framework;
  }
  /** @return string */
  public function getFramework()
  {
    return $this->framework;
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
  public function setTargetImage($targetImage)
  {
    $this->targetImage = $targetImage;
  }
  /** @return string */
  public function getTargetImage()
  {
    return $this->targetImage;
  }
  /** @param string */
  public function setTargetVersion($targetVersion)
  {
    $this->targetVersion = $targetVersion;
  }
  /** @return string */
  public function getTargetVersion()
  {
    return $this->targetVersion;
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
  public function setVmImage($vmImage)
  {
    $this->vmImage = $vmImage;
  }
  /** @return string */
  public function getVmImage()
  {
    return $this->vmImage;
  }
}

class UpgradeInstanceInternalRequest extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $vmId;

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

class UpgradeInstanceRequest extends \Google\Model
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

class UpgradeRuntimeRequest extends \Google\Model
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

class VertexAIParameters extends \Google\Model
{
  /** @var string[] */
  public $env;
  /** @var string */
  public $network;

  /** @param string[] */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /** @return string[] */
  public function getEnv()
  {
    return $this->env;
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
}

class VirtualMachine extends \Google\Model
{
  /** @var string */
  public $instanceId;
  /** @var string */
  public $instanceName;
  /** @var VirtualMachineConfig */
  public $virtualMachineConfig;
  protected $virtualMachineConfigType = VirtualMachineConfig::class;
  protected $virtualMachineConfigDataType = '';
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
  /** @param string */
  public function setInstanceName($instanceName)
  {
    $this->instanceName = $instanceName;
  }
  /** @return string */
  public function getInstanceName()
  {
    return $this->instanceName;
  }
  /** @param VirtualMachineConfig */
  public function setVirtualMachineConfig(VirtualMachineConfig $virtualMachineConfig)
  {
    $this->virtualMachineConfig = $virtualMachineConfig;
  }
  /** @return VirtualMachineConfig */
  public function getVirtualMachineConfig()
  {
    return $this->virtualMachineConfig;
  }
}

class VirtualMachineConfig extends \Google\Collection
{
  /** @var RuntimeAcceleratorConfig */
  public $acceleratorConfig;
  /** @var BootImage */
  public $bootImage;
  /** @var ContainerImage[] */
  public $containerImages;
  /** @var LocalDisk */
  public $dataDisk;
  /** @var EncryptionConfig */
  public $encryptionConfig;
  /** @var string[] */
  public $guestAttributes;
  /** @var bool */
  public $internalIpOnly;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $machineType;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $network;
  /** @var string */
  public $nicType;
  /** @var string */
  public $reservedIpRange;
  /** @var RuntimeShieldedInstanceConfig */
  public $shieldedInstanceConfig;
  /** @var string */
  public $subnet;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $zone;
  protected $collection_key = 'tags';
  protected $acceleratorConfigType = RuntimeAcceleratorConfig::class;
  protected $acceleratorConfigDataType = '';
  protected $bootImageType = BootImage::class;
  protected $bootImageDataType = '';
  protected $containerImagesType = ContainerImage::class;
  protected $containerImagesDataType = 'array';
  protected $dataDiskType = LocalDisk::class;
  protected $dataDiskDataType = '';
  protected $encryptionConfigType = EncryptionConfig::class;
  protected $encryptionConfigDataType = '';
  protected $shieldedInstanceConfigType = RuntimeShieldedInstanceConfig::class;
  protected $shieldedInstanceConfigDataType = '';
  /** @param RuntimeAcceleratorConfig */
  public function setAcceleratorConfig(RuntimeAcceleratorConfig $acceleratorConfig)
  {
    $this->acceleratorConfig = $acceleratorConfig;
  }
  /** @return RuntimeAcceleratorConfig */
  public function getAcceleratorConfig()
  {
    return $this->acceleratorConfig;
  }
  /** @param BootImage */
  public function setBootImage(BootImage $bootImage)
  {
    $this->bootImage = $bootImage;
  }
  /** @return BootImage */
  public function getBootImage()
  {
    return $this->bootImage;
  }
  /** @param ContainerImage[] */
  public function setContainerImages($containerImages)
  {
    $this->containerImages = $containerImages;
  }
  /** @return ContainerImage[] */
  public function getContainerImages()
  {
    return $this->containerImages;
  }
  /** @param LocalDisk */
  public function setDataDisk(LocalDisk $dataDisk)
  {
    $this->dataDisk = $dataDisk;
  }
  /** @return LocalDisk */
  public function getDataDisk()
  {
    return $this->dataDisk;
  }
  /** @param EncryptionConfig */
  public function setEncryptionConfig(EncryptionConfig $encryptionConfig)
  {
    $this->encryptionConfig = $encryptionConfig;
  }
  /** @return EncryptionConfig */
  public function getEncryptionConfig()
  {
    return $this->encryptionConfig;
  }
  /** @param string[] */
  public function setGuestAttributes($guestAttributes)
  {
    $this->guestAttributes = $guestAttributes;
  }
  /** @return string[] */
  public function getGuestAttributes()
  {
    return $this->guestAttributes;
  }
  /** @param bool */
  public function setInternalIpOnly($internalIpOnly)
  {
    $this->internalIpOnly = $internalIpOnly;
  }
  /** @return bool */
  public function getInternalIpOnly()
  {
    return $this->internalIpOnly;
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
  public function setNicType($nicType)
  {
    $this->nicType = $nicType;
  }
  /** @return string */
  public function getNicType()
  {
    return $this->nicType;
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
  /** @param RuntimeShieldedInstanceConfig */
  public function setShieldedInstanceConfig(RuntimeShieldedInstanceConfig $shieldedInstanceConfig)
  {
    $this->shieldedInstanceConfig = $shieldedInstanceConfig;
  }
  /** @return RuntimeShieldedInstanceConfig */
  public function getShieldedInstanceConfig()
  {
    return $this->shieldedInstanceConfig;
  }
  /** @param string */
  public function setSubnet($subnet)
  {
    $this->subnet = $subnet;
  }
  /** @return string */
  public function getSubnet()
  {
    return $this->subnet;
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

class VmImage extends \Google\Model
{
  /** @var string */
  public $imageFamily;
  /** @var string */
  public $imageName;
  /** @var string */
  public $project;

  /** @param string */
  public function setImageFamily($imageFamily)
  {
    $this->imageFamily = $imageFamily;
  }
  /** @return string */
  public function getImageFamily()
  {
    return $this->imageFamily;
  }
  /** @param string */
  public function setImageName($imageName)
  {
    $this->imageName = $imageName;
  }
  /** @return string */
  public function getImageName()
  {
    return $this->imageName;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AcceleratorConfig::class, 'Google_Service_AIPlatformNotebooks_AcceleratorConfig');
class_alias(Binding::class, 'Google_Service_AIPlatformNotebooks_Binding');
class_alias(BootImage::class, 'Google_Service_AIPlatformNotebooks_BootImage');
class_alias(CancelOperationRequest::class, 'Google_Service_AIPlatformNotebooks_CancelOperationRequest');
class_alias(ContainerImage::class, 'Google_Service_AIPlatformNotebooks_ContainerImage');
class_alias(DataprocParameters::class, 'Google_Service_AIPlatformNotebooks_DataprocParameters');
class_alias(DiagnoseInstanceRequest::class, 'Google_Service_AIPlatformNotebooks_DiagnoseInstanceRequest');
class_alias(DiagnoseRuntimeRequest::class, 'Google_Service_AIPlatformNotebooks_DiagnoseRuntimeRequest');
class_alias(DiagnosticConfig::class, 'Google_Service_AIPlatformNotebooks_DiagnosticConfig');
class_alias(Disk::class, 'Google_Service_AIPlatformNotebooks_Disk');
class_alias(EncryptionConfig::class, 'Google_Service_AIPlatformNotebooks_EncryptionConfig');
class_alias(Environment::class, 'Google_Service_AIPlatformNotebooks_Environment');
class_alias(Event::class, 'Google_Service_AIPlatformNotebooks_Event');
class_alias(Execution::class, 'Google_Service_AIPlatformNotebooks_Execution');
class_alias(ExecutionTemplate::class, 'Google_Service_AIPlatformNotebooks_ExecutionTemplate');
class_alias(Expr::class, 'Google_Service_AIPlatformNotebooks_Expr');
class_alias(GetInstanceHealthResponse::class, 'Google_Service_AIPlatformNotebooks_GetInstanceHealthResponse');
class_alias(GuestOsFeature::class, 'Google_Service_AIPlatformNotebooks_GuestOsFeature');
class_alias(Instance::class, 'Google_Service_AIPlatformNotebooks_Instance');
class_alias(InstanceConfig::class, 'Google_Service_AIPlatformNotebooks_InstanceConfig');
class_alias(IsInstanceUpgradeableResponse::class, 'Google_Service_AIPlatformNotebooks_IsInstanceUpgradeableResponse');
class_alias(ListEnvironmentsResponse::class, 'Google_Service_AIPlatformNotebooks_ListEnvironmentsResponse');
class_alias(ListExecutionsResponse::class, 'Google_Service_AIPlatformNotebooks_ListExecutionsResponse');
class_alias(ListInstancesResponse::class, 'Google_Service_AIPlatformNotebooks_ListInstancesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_AIPlatformNotebooks_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_AIPlatformNotebooks_ListOperationsResponse');
class_alias(ListRuntimesResponse::class, 'Google_Service_AIPlatformNotebooks_ListRuntimesResponse');
class_alias(ListSchedulesResponse::class, 'Google_Service_AIPlatformNotebooks_ListSchedulesResponse');
class_alias(LocalDisk::class, 'Google_Service_AIPlatformNotebooks_LocalDisk');
class_alias(LocalDiskInitializeParams::class, 'Google_Service_AIPlatformNotebooks_LocalDiskInitializeParams');
class_alias(Location::class, 'Google_Service_AIPlatformNotebooks_Location');
class_alias(NotebooksEmpty::class, 'Google_Service_AIPlatformNotebooks_NotebooksEmpty');
class_alias(Operation::class, 'Google_Service_AIPlatformNotebooks_Operation');
class_alias(OperationMetadata::class, 'Google_Service_AIPlatformNotebooks_OperationMetadata');
class_alias(Policy::class, 'Google_Service_AIPlatformNotebooks_Policy');
class_alias(RefreshRuntimeTokenInternalRequest::class, 'Google_Service_AIPlatformNotebooks_RefreshRuntimeTokenInternalRequest');
class_alias(RefreshRuntimeTokenInternalResponse::class, 'Google_Service_AIPlatformNotebooks_RefreshRuntimeTokenInternalResponse');
class_alias(RegisterInstanceRequest::class, 'Google_Service_AIPlatformNotebooks_RegisterInstanceRequest');
class_alias(ReportInstanceInfoRequest::class, 'Google_Service_AIPlatformNotebooks_ReportInstanceInfoRequest');
class_alias(ReportRuntimeEventRequest::class, 'Google_Service_AIPlatformNotebooks_ReportRuntimeEventRequest');
class_alias(ReservationAffinity::class, 'Google_Service_AIPlatformNotebooks_ReservationAffinity');
class_alias(ResetInstanceRequest::class, 'Google_Service_AIPlatformNotebooks_ResetInstanceRequest');
class_alias(ResetRuntimeRequest::class, 'Google_Service_AIPlatformNotebooks_ResetRuntimeRequest');
class_alias(RollbackInstanceRequest::class, 'Google_Service_AIPlatformNotebooks_RollbackInstanceRequest');
class_alias(Runtime::class, 'Google_Service_AIPlatformNotebooks_Runtime');
class_alias(RuntimeAcceleratorConfig::class, 'Google_Service_AIPlatformNotebooks_RuntimeAcceleratorConfig');
class_alias(RuntimeAccessConfig::class, 'Google_Service_AIPlatformNotebooks_RuntimeAccessConfig');
class_alias(RuntimeGuestOsFeature::class, 'Google_Service_AIPlatformNotebooks_RuntimeGuestOsFeature');
class_alias(RuntimeMetrics::class, 'Google_Service_AIPlatformNotebooks_RuntimeMetrics');
class_alias(RuntimeShieldedInstanceConfig::class, 'Google_Service_AIPlatformNotebooks_RuntimeShieldedInstanceConfig');
class_alias(RuntimeSoftwareConfig::class, 'Google_Service_AIPlatformNotebooks_RuntimeSoftwareConfig');
class_alias(Schedule::class, 'Google_Service_AIPlatformNotebooks_Schedule');
class_alias(SchedulerAcceleratorConfig::class, 'Google_Service_AIPlatformNotebooks_SchedulerAcceleratorConfig');
class_alias(SetIamPolicyRequest::class, 'Google_Service_AIPlatformNotebooks_SetIamPolicyRequest');
class_alias(SetInstanceAcceleratorRequest::class, 'Google_Service_AIPlatformNotebooks_SetInstanceAcceleratorRequest');
class_alias(SetInstanceLabelsRequest::class, 'Google_Service_AIPlatformNotebooks_SetInstanceLabelsRequest');
class_alias(SetInstanceMachineTypeRequest::class, 'Google_Service_AIPlatformNotebooks_SetInstanceMachineTypeRequest');
class_alias(ShieldedInstanceConfig::class, 'Google_Service_AIPlatformNotebooks_ShieldedInstanceConfig');
class_alias(StartInstanceRequest::class, 'Google_Service_AIPlatformNotebooks_StartInstanceRequest');
class_alias(StartRuntimeRequest::class, 'Google_Service_AIPlatformNotebooks_StartRuntimeRequest');
class_alias(Status::class, 'Google_Service_AIPlatformNotebooks_Status');
class_alias(StopInstanceRequest::class, 'Google_Service_AIPlatformNotebooks_StopInstanceRequest');
class_alias(StopRuntimeRequest::class, 'Google_Service_AIPlatformNotebooks_StopRuntimeRequest');
class_alias(SwitchRuntimeRequest::class, 'Google_Service_AIPlatformNotebooks_SwitchRuntimeRequest');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_AIPlatformNotebooks_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_AIPlatformNotebooks_TestIamPermissionsResponse');
class_alias(TriggerScheduleRequest::class, 'Google_Service_AIPlatformNotebooks_TriggerScheduleRequest');
class_alias(UpdateInstanceConfigRequest::class, 'Google_Service_AIPlatformNotebooks_UpdateInstanceConfigRequest');
class_alias(UpdateInstanceMetadataItemsRequest::class, 'Google_Service_AIPlatformNotebooks_UpdateInstanceMetadataItemsRequest');
class_alias(UpdateInstanceMetadataItemsResponse::class, 'Google_Service_AIPlatformNotebooks_UpdateInstanceMetadataItemsResponse');
class_alias(UpdateShieldedInstanceConfigRequest::class, 'Google_Service_AIPlatformNotebooks_UpdateShieldedInstanceConfigRequest');
class_alias(UpgradeHistoryEntry::class, 'Google_Service_AIPlatformNotebooks_UpgradeHistoryEntry');
class_alias(UpgradeInstanceInternalRequest::class, 'Google_Service_AIPlatformNotebooks_UpgradeInstanceInternalRequest');
class_alias(UpgradeInstanceRequest::class, 'Google_Service_AIPlatformNotebooks_UpgradeInstanceRequest');
class_alias(UpgradeRuntimeRequest::class, 'Google_Service_AIPlatformNotebooks_UpgradeRuntimeRequest');
class_alias(VertexAIParameters::class, 'Google_Service_AIPlatformNotebooks_VertexAIParameters');
class_alias(VirtualMachine::class, 'Google_Service_AIPlatformNotebooks_VirtualMachine');
class_alias(VirtualMachineConfig::class, 'Google_Service_AIPlatformNotebooks_VirtualMachineConfig');
class_alias(VmImage::class, 'Google_Service_AIPlatformNotebooks_VmImage');
