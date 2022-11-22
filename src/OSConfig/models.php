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

namespace Google\Service\OSConfig;

class AptSettings extends \Google\Collection
{
  /** @var string[] */
  public $excludes;
  /** @var string[] */
  public $exclusivePackages;
  /** @var string */
  public $type;
  protected $collection_key = 'exclusivePackages';
  /** @param string[] */
  public function setExcludes($excludes)
  {
    $this->excludes = $excludes;
  }
  /** @return string[] */
  public function getExcludes()
  {
    return $this->excludes;
  }
  /** @param string[] */
  public function setExclusivePackages($exclusivePackages)
  {
    $this->exclusivePackages = $exclusivePackages;
  }
  /** @return string[] */
  public function getExclusivePackages()
  {
    return $this->exclusivePackages;
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

class CVSSv3 extends \Google\Model
{
  /** @var string */
  public $attackComplexity;
  /** @var string */
  public $attackVector;
  /** @var string */
  public $availabilityImpact;
  /** @var float */
  public $baseScore;
  /** @var string */
  public $confidentialityImpact;
  /** @var float */
  public $exploitabilityScore;
  /** @var float */
  public $impactScore;
  /** @var string */
  public $integrityImpact;
  /** @var string */
  public $privilegesRequired;
  /** @var string */
  public $scope;
  /** @var string */
  public $userInteraction;

  /** @param string */
  public function setAttackComplexity($attackComplexity)
  {
    $this->attackComplexity = $attackComplexity;
  }
  /** @return string */
  public function getAttackComplexity()
  {
    return $this->attackComplexity;
  }
  /** @param string */
  public function setAttackVector($attackVector)
  {
    $this->attackVector = $attackVector;
  }
  /** @return string */
  public function getAttackVector()
  {
    return $this->attackVector;
  }
  /** @param string */
  public function setAvailabilityImpact($availabilityImpact)
  {
    $this->availabilityImpact = $availabilityImpact;
  }
  /** @return string */
  public function getAvailabilityImpact()
  {
    return $this->availabilityImpact;
  }
  /** @param float */
  public function setBaseScore($baseScore)
  {
    $this->baseScore = $baseScore;
  }
  /** @return float */
  public function getBaseScore()
  {
    return $this->baseScore;
  }
  /** @param string */
  public function setConfidentialityImpact($confidentialityImpact)
  {
    $this->confidentialityImpact = $confidentialityImpact;
  }
  /** @return string */
  public function getConfidentialityImpact()
  {
    return $this->confidentialityImpact;
  }
  /** @param float */
  public function setExploitabilityScore($exploitabilityScore)
  {
    $this->exploitabilityScore = $exploitabilityScore;
  }
  /** @return float */
  public function getExploitabilityScore()
  {
    return $this->exploitabilityScore;
  }
  /** @param float */
  public function setImpactScore($impactScore)
  {
    $this->impactScore = $impactScore;
  }
  /** @return float */
  public function getImpactScore()
  {
    return $this->impactScore;
  }
  /** @param string */
  public function setIntegrityImpact($integrityImpact)
  {
    $this->integrityImpact = $integrityImpact;
  }
  /** @return string */
  public function getIntegrityImpact()
  {
    return $this->integrityImpact;
  }
  /** @param string */
  public function setPrivilegesRequired($privilegesRequired)
  {
    $this->privilegesRequired = $privilegesRequired;
  }
  /** @return string */
  public function getPrivilegesRequired()
  {
    return $this->privilegesRequired;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param string */
  public function setUserInteraction($userInteraction)
  {
    $this->userInteraction = $userInteraction;
  }
  /** @return string */
  public function getUserInteraction()
  {
    return $this->userInteraction;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class CancelPatchJobRequest extends \Google\Model
{
}

class Date extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $month;
  /** @var int */
  public $year;

  /** @param int */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return int */
  public function getDay()
  {
    return $this->day;
  }
  /** @param int */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /** @return int */
  public function getMonth()
  {
    return $this->month;
  }
  /** @param int */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /** @return int */
  public function getYear()
  {
    return $this->year;
  }
}

class ExecStep extends \Google\Model
{
  /** @var ExecStepConfig */
  public $linuxExecStepConfig;
  /** @var ExecStepConfig */
  public $windowsExecStepConfig;
  protected $linuxExecStepConfigType = ExecStepConfig::class;
  protected $linuxExecStepConfigDataType = '';
  protected $windowsExecStepConfigType = ExecStepConfig::class;
  protected $windowsExecStepConfigDataType = '';
  /** @param ExecStepConfig */
  public function setLinuxExecStepConfig(ExecStepConfig $linuxExecStepConfig)
  {
    $this->linuxExecStepConfig = $linuxExecStepConfig;
  }
  /** @return ExecStepConfig */
  public function getLinuxExecStepConfig()
  {
    return $this->linuxExecStepConfig;
  }
  /** @param ExecStepConfig */
  public function setWindowsExecStepConfig(ExecStepConfig $windowsExecStepConfig)
  {
    $this->windowsExecStepConfig = $windowsExecStepConfig;
  }
  /** @return ExecStepConfig */
  public function getWindowsExecStepConfig()
  {
    return $this->windowsExecStepConfig;
  }
}

class ExecStepConfig extends \Google\Collection
{
  /** @var int[] */
  public $allowedSuccessCodes;
  /** @var GcsObject */
  public $gcsObject;
  /** @var string */
  public $interpreter;
  /** @var string */
  public $localPath;
  protected $collection_key = 'allowedSuccessCodes';
  protected $gcsObjectType = GcsObject::class;
  protected $gcsObjectDataType = '';
  /** @param int[] */
  public function setAllowedSuccessCodes($allowedSuccessCodes)
  {
    $this->allowedSuccessCodes = $allowedSuccessCodes;
  }
  /** @return int[] */
  public function getAllowedSuccessCodes()
  {
    return $this->allowedSuccessCodes;
  }
  /** @param GcsObject */
  public function setGcsObject(GcsObject $gcsObject)
  {
    $this->gcsObject = $gcsObject;
  }
  /** @return GcsObject */
  public function getGcsObject()
  {
    return $this->gcsObject;
  }
  /** @param string */
  public function setInterpreter($interpreter)
  {
    $this->interpreter = $interpreter;
  }
  /** @return string */
  public function getInterpreter()
  {
    return $this->interpreter;
  }
  /** @param string */
  public function setLocalPath($localPath)
  {
    $this->localPath = $localPath;
  }
  /** @return string */
  public function getLocalPath()
  {
    return $this->localPath;
  }
}

class ExecutePatchJobRequest extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $dryRun;
  /** @var string */
  public $duration;
  /** @var PatchInstanceFilter */
  public $instanceFilter;
  /** @var PatchConfig */
  public $patchConfig;
  /** @var PatchRollout */
  public $rollout;
  protected $instanceFilterType = PatchInstanceFilter::class;
  protected $instanceFilterDataType = '';
  protected $patchConfigType = PatchConfig::class;
  protected $patchConfigDataType = '';
  protected $rolloutType = PatchRollout::class;
  protected $rolloutDataType = '';
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
  /** @param bool */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /** @return bool */
  public function getDryRun()
  {
    return $this->dryRun;
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
  /** @param PatchInstanceFilter */
  public function setInstanceFilter(PatchInstanceFilter $instanceFilter)
  {
    $this->instanceFilter = $instanceFilter;
  }
  /** @return PatchInstanceFilter */
  public function getInstanceFilter()
  {
    return $this->instanceFilter;
  }
  /** @param PatchConfig */
  public function setPatchConfig(PatchConfig $patchConfig)
  {
    $this->patchConfig = $patchConfig;
  }
  /** @return PatchConfig */
  public function getPatchConfig()
  {
    return $this->patchConfig;
  }
  /** @param PatchRollout */
  public function setRollout(PatchRollout $rollout)
  {
    $this->rollout = $rollout;
  }
  /** @return PatchRollout */
  public function getRollout()
  {
    return $this->rollout;
  }
}

class FixedOrPercent extends \Google\Model
{
  /** @var int */
  public $fixed;
  /** @var int */
  public $percent;

  /** @param int */
  public function setFixed($fixed)
  {
    $this->fixed = $fixed;
  }
  /** @return int */
  public function getFixed()
  {
    return $this->fixed;
  }
  /** @param int */
  public function setPercent($percent)
  {
    $this->percent = $percent;
  }
  /** @return int */
  public function getPercent()
  {
    return $this->percent;
  }
}

class GcsObject extends \Google\Model
{
  /** @var string */
  public $bucket;
  /** @var string */
  public $generationNumber;
  /** @var string */
  public $object;

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
  public function setGenerationNumber($generationNumber)
  {
    $this->generationNumber = $generationNumber;
  }
  /** @return string */
  public function getGenerationNumber()
  {
    return $this->generationNumber;
  }
  /** @param string */
  public function setObject($object)
  {
    $this->object = $object;
  }
  /** @return string */
  public function getObject()
  {
    return $this->object;
  }
}

class GooSettings extends \Google\Model
{
}

class GoogleCloudOsconfigV1OSPolicyAssignmentOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiMethod;
  /** @var string */
  public $osPolicyAssignment;
  /** @var string */
  public $rolloutStartTime;
  /** @var string */
  public $rolloutState;
  /** @var string */
  public $rolloutUpdateTime;

  /** @param string */
  public function setApiMethod($apiMethod)
  {
    $this->apiMethod = $apiMethod;
  }
  /** @return string */
  public function getApiMethod()
  {
    return $this->apiMethod;
  }
  /** @param string */
  public function setOsPolicyAssignment($osPolicyAssignment)
  {
    $this->osPolicyAssignment = $osPolicyAssignment;
  }
  /** @return string */
  public function getOsPolicyAssignment()
  {
    return $this->osPolicyAssignment;
  }
  /** @param string */
  public function setRolloutStartTime($rolloutStartTime)
  {
    $this->rolloutStartTime = $rolloutStartTime;
  }
  /** @return string */
  public function getRolloutStartTime()
  {
    return $this->rolloutStartTime;
  }
  /** @param string */
  public function setRolloutState($rolloutState)
  {
    $this->rolloutState = $rolloutState;
  }
  /** @return string */
  public function getRolloutState()
  {
    return $this->rolloutState;
  }
  /** @param string */
  public function setRolloutUpdateTime($rolloutUpdateTime)
  {
    $this->rolloutUpdateTime = $rolloutUpdateTime;
  }
  /** @return string */
  public function getRolloutUpdateTime()
  {
    return $this->rolloutUpdateTime;
  }
}

class Inventory extends \Google\Model
{
  /** @var InventoryItem[] */
  public $items;
  /** @var string */
  public $name;
  /** @var InventoryOsInfo */
  public $osInfo;
  /** @var string */
  public $updateTime;
  protected $itemsType = InventoryItem::class;
  protected $itemsDataType = 'map';
  protected $osInfoType = InventoryOsInfo::class;
  protected $osInfoDataType = '';
  /** @param InventoryItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return InventoryItem[] */
  public function getItems()
  {
    return $this->items;
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
  /** @param InventoryOsInfo */
  public function setOsInfo(InventoryOsInfo $osInfo)
  {
    $this->osInfo = $osInfo;
  }
  /** @return InventoryOsInfo */
  public function getOsInfo()
  {
    return $this->osInfo;
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

class InventoryItem extends \Google\Model
{
  /** @var InventorySoftwarePackage */
  public $availablePackage;
  /** @var string */
  public $createTime;
  /** @var string */
  public $id;
  /** @var InventorySoftwarePackage */
  public $installedPackage;
  /** @var string */
  public $originType;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $availablePackageType = InventorySoftwarePackage::class;
  protected $availablePackageDataType = '';
  protected $installedPackageType = InventorySoftwarePackage::class;
  protected $installedPackageDataType = '';
  /** @param InventorySoftwarePackage */
  public function setAvailablePackage(InventorySoftwarePackage $availablePackage)
  {
    $this->availablePackage = $availablePackage;
  }
  /** @return InventorySoftwarePackage */
  public function getAvailablePackage()
  {
    return $this->availablePackage;
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param InventorySoftwarePackage */
  public function setInstalledPackage(InventorySoftwarePackage $installedPackage)
  {
    $this->installedPackage = $installedPackage;
  }
  /** @return InventorySoftwarePackage */
  public function getInstalledPackage()
  {
    return $this->installedPackage;
  }
  /** @param string */
  public function setOriginType($originType)
  {
    $this->originType = $originType;
  }
  /** @return string */
  public function getOriginType()
  {
    return $this->originType;
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

class InventoryOsInfo extends \Google\Model
{
  /** @var string */
  public $architecture;
  /** @var string */
  public $hostname;
  /** @var string */
  public $kernelRelease;
  /** @var string */
  public $kernelVersion;
  /** @var string */
  public $longName;
  /** @var string */
  public $osconfigAgentVersion;
  /** @var string */
  public $shortName;
  /** @var string */
  public $version;

  /** @param string */
  public function setArchitecture($architecture)
  {
    $this->architecture = $architecture;
  }
  /** @return string */
  public function getArchitecture()
  {
    return $this->architecture;
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
  /** @param string */
  public function setKernelRelease($kernelRelease)
  {
    $this->kernelRelease = $kernelRelease;
  }
  /** @return string */
  public function getKernelRelease()
  {
    return $this->kernelRelease;
  }
  /** @param string */
  public function setKernelVersion($kernelVersion)
  {
    $this->kernelVersion = $kernelVersion;
  }
  /** @return string */
  public function getKernelVersion()
  {
    return $this->kernelVersion;
  }
  /** @param string */
  public function setLongName($longName)
  {
    $this->longName = $longName;
  }
  /** @return string */
  public function getLongName()
  {
    return $this->longName;
  }
  /** @param string */
  public function setOsconfigAgentVersion($osconfigAgentVersion)
  {
    $this->osconfigAgentVersion = $osconfigAgentVersion;
  }
  /** @return string */
  public function getOsconfigAgentVersion()
  {
    return $this->osconfigAgentVersion;
  }
  /** @param string */
  public function setShortName($shortName)
  {
    $this->shortName = $shortName;
  }
  /** @return string */
  public function getShortName()
  {
    return $this->shortName;
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

class InventorySoftwarePackage extends \Google\Model
{
  /** @var InventoryVersionedPackage */
  public $aptPackage;
  /** @var InventoryVersionedPackage */
  public $cosPackage;
  /** @var InventoryVersionedPackage */
  public $googetPackage;
  /** @var InventoryWindowsQuickFixEngineeringPackage */
  public $qfePackage;
  /** @var InventoryWindowsApplication */
  public $windowsApplication;
  /** @var InventoryWindowsUpdatePackage */
  public $wuaPackage;
  /** @var InventoryVersionedPackage */
  public $yumPackage;
  /** @var InventoryVersionedPackage */
  public $zypperPackage;
  /** @var InventoryZypperPatch */
  public $zypperPatch;
  protected $aptPackageType = InventoryVersionedPackage::class;
  protected $aptPackageDataType = '';
  protected $cosPackageType = InventoryVersionedPackage::class;
  protected $cosPackageDataType = '';
  protected $googetPackageType = InventoryVersionedPackage::class;
  protected $googetPackageDataType = '';
  protected $qfePackageType = InventoryWindowsQuickFixEngineeringPackage::class;
  protected $qfePackageDataType = '';
  protected $windowsApplicationType = InventoryWindowsApplication::class;
  protected $windowsApplicationDataType = '';
  protected $wuaPackageType = InventoryWindowsUpdatePackage::class;
  protected $wuaPackageDataType = '';
  protected $yumPackageType = InventoryVersionedPackage::class;
  protected $yumPackageDataType = '';
  protected $zypperPackageType = InventoryVersionedPackage::class;
  protected $zypperPackageDataType = '';
  protected $zypperPatchType = InventoryZypperPatch::class;
  protected $zypperPatchDataType = '';
  /** @param InventoryVersionedPackage */
  public function setAptPackage(InventoryVersionedPackage $aptPackage)
  {
    $this->aptPackage = $aptPackage;
  }
  /** @return InventoryVersionedPackage */
  public function getAptPackage()
  {
    return $this->aptPackage;
  }
  /** @param InventoryVersionedPackage */
  public function setCosPackage(InventoryVersionedPackage $cosPackage)
  {
    $this->cosPackage = $cosPackage;
  }
  /** @return InventoryVersionedPackage */
  public function getCosPackage()
  {
    return $this->cosPackage;
  }
  /** @param InventoryVersionedPackage */
  public function setGoogetPackage(InventoryVersionedPackage $googetPackage)
  {
    $this->googetPackage = $googetPackage;
  }
  /** @return InventoryVersionedPackage */
  public function getGoogetPackage()
  {
    return $this->googetPackage;
  }
  /** @param InventoryWindowsQuickFixEngineeringPackage */
  public function setQfePackage(InventoryWindowsQuickFixEngineeringPackage $qfePackage)
  {
    $this->qfePackage = $qfePackage;
  }
  /** @return InventoryWindowsQuickFixEngineeringPackage */
  public function getQfePackage()
  {
    return $this->qfePackage;
  }
  /** @param InventoryWindowsApplication */
  public function setWindowsApplication(InventoryWindowsApplication $windowsApplication)
  {
    $this->windowsApplication = $windowsApplication;
  }
  /** @return InventoryWindowsApplication */
  public function getWindowsApplication()
  {
    return $this->windowsApplication;
  }
  /** @param InventoryWindowsUpdatePackage */
  public function setWuaPackage(InventoryWindowsUpdatePackage $wuaPackage)
  {
    $this->wuaPackage = $wuaPackage;
  }
  /** @return InventoryWindowsUpdatePackage */
  public function getWuaPackage()
  {
    return $this->wuaPackage;
  }
  /** @param InventoryVersionedPackage */
  public function setYumPackage(InventoryVersionedPackage $yumPackage)
  {
    $this->yumPackage = $yumPackage;
  }
  /** @return InventoryVersionedPackage */
  public function getYumPackage()
  {
    return $this->yumPackage;
  }
  /** @param InventoryVersionedPackage */
  public function setZypperPackage(InventoryVersionedPackage $zypperPackage)
  {
    $this->zypperPackage = $zypperPackage;
  }
  /** @return InventoryVersionedPackage */
  public function getZypperPackage()
  {
    return $this->zypperPackage;
  }
  /** @param InventoryZypperPatch */
  public function setZypperPatch(InventoryZypperPatch $zypperPatch)
  {
    $this->zypperPatch = $zypperPatch;
  }
  /** @return InventoryZypperPatch */
  public function getZypperPatch()
  {
    return $this->zypperPatch;
  }
}

class InventoryVersionedPackage extends \Google\Model
{
  /** @var string */
  public $architecture;
  /** @var string */
  public $packageName;
  /** @var string */
  public $version;

  /** @param string */
  public function setArchitecture($architecture)
  {
    $this->architecture = $architecture;
  }
  /** @return string */
  public function getArchitecture()
  {
    return $this->architecture;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
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

class InventoryWindowsApplication extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $displayVersion;
  /** @var string */
  public $helpLink;
  /** @var Date */
  public $installDate;
  /** @var string */
  public $publisher;
  protected $installDateType = Date::class;
  protected $installDateDataType = '';
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
  public function setDisplayVersion($displayVersion)
  {
    $this->displayVersion = $displayVersion;
  }
  /** @return string */
  public function getDisplayVersion()
  {
    return $this->displayVersion;
  }
  /** @param string */
  public function setHelpLink($helpLink)
  {
    $this->helpLink = $helpLink;
  }
  /** @return string */
  public function getHelpLink()
  {
    return $this->helpLink;
  }
  /** @param Date */
  public function setInstallDate(Date $installDate)
  {
    $this->installDate = $installDate;
  }
  /** @return Date */
  public function getInstallDate()
  {
    return $this->installDate;
  }
  /** @param string */
  public function setPublisher($publisher)
  {
    $this->publisher = $publisher;
  }
  /** @return string */
  public function getPublisher()
  {
    return $this->publisher;
  }
}

class InventoryWindowsQuickFixEngineeringPackage extends \Google\Model
{
  /** @var string */
  public $caption;
  /** @var string */
  public $description;
  /** @var string */
  public $hotFixId;
  /** @var string */
  public $installTime;

  /** @param string */
  public function setCaption($caption)
  {
    $this->caption = $caption;
  }
  /** @return string */
  public function getCaption()
  {
    return $this->caption;
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
  public function setHotFixId($hotFixId)
  {
    $this->hotFixId = $hotFixId;
  }
  /** @return string */
  public function getHotFixId()
  {
    return $this->hotFixId;
  }
  /** @param string */
  public function setInstallTime($installTime)
  {
    $this->installTime = $installTime;
  }
  /** @return string */
  public function getInstallTime()
  {
    return $this->installTime;
  }
}

class InventoryWindowsUpdatePackage extends \Google\Collection
{
  /** @var InventoryWindowsUpdatePackageWindowsUpdateCategory[] */
  public $categories;
  /** @var string */
  public $description;
  /** @var string[] */
  public $kbArticleIds;
  /** @var string */
  public $lastDeploymentChangeTime;
  /** @var string[] */
  public $moreInfoUrls;
  /** @var int */
  public $revisionNumber;
  /** @var string */
  public $supportUrl;
  /** @var string */
  public $title;
  /** @var string */
  public $updateId;
  protected $collection_key = 'moreInfoUrls';
  protected $categoriesType = InventoryWindowsUpdatePackageWindowsUpdateCategory::class;
  protected $categoriesDataType = 'array';
  /** @param InventoryWindowsUpdatePackageWindowsUpdateCategory[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return InventoryWindowsUpdatePackageWindowsUpdateCategory[] */
  public function getCategories()
  {
    return $this->categories;
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
  public function setKbArticleIds($kbArticleIds)
  {
    $this->kbArticleIds = $kbArticleIds;
  }
  /** @return string[] */
  public function getKbArticleIds()
  {
    return $this->kbArticleIds;
  }
  /** @param string */
  public function setLastDeploymentChangeTime($lastDeploymentChangeTime)
  {
    $this->lastDeploymentChangeTime = $lastDeploymentChangeTime;
  }
  /** @return string */
  public function getLastDeploymentChangeTime()
  {
    return $this->lastDeploymentChangeTime;
  }
  /** @param string[] */
  public function setMoreInfoUrls($moreInfoUrls)
  {
    $this->moreInfoUrls = $moreInfoUrls;
  }
  /** @return string[] */
  public function getMoreInfoUrls()
  {
    return $this->moreInfoUrls;
  }
  /** @param int */
  public function setRevisionNumber($revisionNumber)
  {
    $this->revisionNumber = $revisionNumber;
  }
  /** @return int */
  public function getRevisionNumber()
  {
    return $this->revisionNumber;
  }
  /** @param string */
  public function setSupportUrl($supportUrl)
  {
    $this->supportUrl = $supportUrl;
  }
  /** @return string */
  public function getSupportUrl()
  {
    return $this->supportUrl;
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
  public function setUpdateId($updateId)
  {
    $this->updateId = $updateId;
  }
  /** @return string */
  public function getUpdateId()
  {
    return $this->updateId;
  }
}

class InventoryWindowsUpdatePackageWindowsUpdateCategory extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;

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

class InventoryZypperPatch extends \Google\Model
{
  /** @var string */
  public $category;
  /** @var string */
  public $patchName;
  /** @var string */
  public $severity;
  /** @var string */
  public $summary;

  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param string */
  public function setPatchName($patchName)
  {
    $this->patchName = $patchName;
  }
  /** @return string */
  public function getPatchName()
  {
    return $this->patchName;
  }
  /** @param string */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
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
}

class ListInventoriesResponse extends \Google\Collection
{
  /** @var Inventory[] */
  public $inventories;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'inventories';
  protected $inventoriesType = Inventory::class;
  protected $inventoriesDataType = 'array';
  /** @param Inventory[] */
  public function setInventories($inventories)
  {
    $this->inventories = $inventories;
  }
  /** @return Inventory[] */
  public function getInventories()
  {
    return $this->inventories;
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

class ListOSPolicyAssignmentReportsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var OSPolicyAssignmentReport[] */
  public $osPolicyAssignmentReports;
  protected $collection_key = 'osPolicyAssignmentReports';
  protected $osPolicyAssignmentReportsType = OSPolicyAssignmentReport::class;
  protected $osPolicyAssignmentReportsDataType = 'array';
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
  /** @param OSPolicyAssignmentReport[] */
  public function setOsPolicyAssignmentReports($osPolicyAssignmentReports)
  {
    $this->osPolicyAssignmentReports = $osPolicyAssignmentReports;
  }
  /** @return OSPolicyAssignmentReport[] */
  public function getOsPolicyAssignmentReports()
  {
    return $this->osPolicyAssignmentReports;
  }
}

class ListOSPolicyAssignmentRevisionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var OSPolicyAssignment[] */
  public $osPolicyAssignments;
  protected $collection_key = 'osPolicyAssignments';
  protected $osPolicyAssignmentsType = OSPolicyAssignment::class;
  protected $osPolicyAssignmentsDataType = 'array';
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
  /** @param OSPolicyAssignment[] */
  public function setOsPolicyAssignments($osPolicyAssignments)
  {
    $this->osPolicyAssignments = $osPolicyAssignments;
  }
  /** @return OSPolicyAssignment[] */
  public function getOsPolicyAssignments()
  {
    return $this->osPolicyAssignments;
  }
}

class ListOSPolicyAssignmentsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var OSPolicyAssignment[] */
  public $osPolicyAssignments;
  protected $collection_key = 'osPolicyAssignments';
  protected $osPolicyAssignmentsType = OSPolicyAssignment::class;
  protected $osPolicyAssignmentsDataType = 'array';
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
  /** @param OSPolicyAssignment[] */
  public function setOsPolicyAssignments($osPolicyAssignments)
  {
    $this->osPolicyAssignments = $osPolicyAssignments;
  }
  /** @return OSPolicyAssignment[] */
  public function getOsPolicyAssignments()
  {
    return $this->osPolicyAssignments;
  }
}

class ListPatchDeploymentsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PatchDeployment[] */
  public $patchDeployments;
  protected $collection_key = 'patchDeployments';
  protected $patchDeploymentsType = PatchDeployment::class;
  protected $patchDeploymentsDataType = 'array';
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
  /** @param PatchDeployment[] */
  public function setPatchDeployments($patchDeployments)
  {
    $this->patchDeployments = $patchDeployments;
  }
  /** @return PatchDeployment[] */
  public function getPatchDeployments()
  {
    return $this->patchDeployments;
  }
}

class ListPatchJobInstanceDetailsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PatchJobInstanceDetails[] */
  public $patchJobInstanceDetails;
  protected $collection_key = 'patchJobInstanceDetails';
  protected $patchJobInstanceDetailsType = PatchJobInstanceDetails::class;
  protected $patchJobInstanceDetailsDataType = 'array';
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
  /** @param PatchJobInstanceDetails[] */
  public function setPatchJobInstanceDetails($patchJobInstanceDetails)
  {
    $this->patchJobInstanceDetails = $patchJobInstanceDetails;
  }
  /** @return PatchJobInstanceDetails[] */
  public function getPatchJobInstanceDetails()
  {
    return $this->patchJobInstanceDetails;
  }
}

class ListPatchJobsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PatchJob[] */
  public $patchJobs;
  protected $collection_key = 'patchJobs';
  protected $patchJobsType = PatchJob::class;
  protected $patchJobsDataType = 'array';
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
  /** @param PatchJob[] */
  public function setPatchJobs($patchJobs)
  {
    $this->patchJobs = $patchJobs;
  }
  /** @return PatchJob[] */
  public function getPatchJobs()
  {
    return $this->patchJobs;
  }
}

class ListVulnerabilityReportsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var VulnerabilityReport[] */
  public $vulnerabilityReports;
  protected $collection_key = 'vulnerabilityReports';
  protected $vulnerabilityReportsType = VulnerabilityReport::class;
  protected $vulnerabilityReportsDataType = 'array';
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
  /** @param VulnerabilityReport[] */
  public function setVulnerabilityReports($vulnerabilityReports)
  {
    $this->vulnerabilityReports = $vulnerabilityReports;
  }
  /** @return VulnerabilityReport[] */
  public function getVulnerabilityReports()
  {
    return $this->vulnerabilityReports;
  }
}

class MonthlySchedule extends \Google\Model
{
  /** @var int */
  public $monthDay;
  /** @var WeekDayOfMonth */
  public $weekDayOfMonth;
  protected $weekDayOfMonthType = WeekDayOfMonth::class;
  protected $weekDayOfMonthDataType = '';
  /** @param int */
  public function setMonthDay($monthDay)
  {
    $this->monthDay = $monthDay;
  }
  /** @return int */
  public function getMonthDay()
  {
    return $this->monthDay;
  }
  /** @param WeekDayOfMonth */
  public function setWeekDayOfMonth(WeekDayOfMonth $weekDayOfMonth)
  {
    $this->weekDayOfMonth = $weekDayOfMonth;
  }
  /** @return WeekDayOfMonth */
  public function getWeekDayOfMonth()
  {
    return $this->weekDayOfMonth;
  }
}

class OSPolicy extends \Google\Collection
{
  /** @var bool */
  public $allowNoResourceGroupMatch;
  /** @var string */
  public $description;
  /** @var string */
  public $id;
  /** @var string */
  public $mode;
  /** @var OSPolicyResourceGroup[] */
  public $resourceGroups;
  protected $collection_key = 'resourceGroups';
  protected $resourceGroupsType = OSPolicyResourceGroup::class;
  protected $resourceGroupsDataType = 'array';
  /** @param bool */
  public function setAllowNoResourceGroupMatch($allowNoResourceGroupMatch)
  {
    $this->allowNoResourceGroupMatch = $allowNoResourceGroupMatch;
  }
  /** @return bool */
  public function getAllowNoResourceGroupMatch()
  {
    return $this->allowNoResourceGroupMatch;
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
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
  }
  /** @param OSPolicyResourceGroup[] */
  public function setResourceGroups($resourceGroups)
  {
    $this->resourceGroups = $resourceGroups;
  }
  /** @return OSPolicyResourceGroup[] */
  public function getResourceGroups()
  {
    return $this->resourceGroups;
  }
}

class OSPolicyAssignment extends \Google\Collection
{
  /** @var bool */
  public $baseline;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var OSPolicyAssignmentInstanceFilter */
  public $instanceFilter;
  /** @var string */
  public $name;
  /** @var OSPolicy[] */
  public $osPolicies;
  /** @var bool */
  public $reconciling;
  /** @var string */
  public $revisionCreateTime;
  /** @var string */
  public $revisionId;
  /** @var OSPolicyAssignmentRollout */
  public $rollout;
  /** @var string */
  public $rolloutState;
  /** @var string */
  public $uid;
  protected $collection_key = 'osPolicies';
  protected $instanceFilterType = OSPolicyAssignmentInstanceFilter::class;
  protected $instanceFilterDataType = '';
  protected $osPoliciesType = OSPolicy::class;
  protected $osPoliciesDataType = 'array';
  protected $rolloutType = OSPolicyAssignmentRollout::class;
  protected $rolloutDataType = '';
  /** @param bool */
  public function setBaseline($baseline)
  {
    $this->baseline = $baseline;
  }
  /** @return bool */
  public function getBaseline()
  {
    return $this->baseline;
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
  /** @param OSPolicyAssignmentInstanceFilter */
  public function setInstanceFilter(OSPolicyAssignmentInstanceFilter $instanceFilter)
  {
    $this->instanceFilter = $instanceFilter;
  }
  /** @return OSPolicyAssignmentInstanceFilter */
  public function getInstanceFilter()
  {
    return $this->instanceFilter;
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
  /** @param OSPolicy[] */
  public function setOsPolicies($osPolicies)
  {
    $this->osPolicies = $osPolicies;
  }
  /** @return OSPolicy[] */
  public function getOsPolicies()
  {
    return $this->osPolicies;
  }
  /** @param bool */
  public function setReconciling($reconciling)
  {
    $this->reconciling = $reconciling;
  }
  /** @return bool */
  public function getReconciling()
  {
    return $this->reconciling;
  }
  /** @param string */
  public function setRevisionCreateTime($revisionCreateTime)
  {
    $this->revisionCreateTime = $revisionCreateTime;
  }
  /** @return string */
  public function getRevisionCreateTime()
  {
    return $this->revisionCreateTime;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
  /** @param OSPolicyAssignmentRollout */
  public function setRollout(OSPolicyAssignmentRollout $rollout)
  {
    $this->rollout = $rollout;
  }
  /** @return OSPolicyAssignmentRollout */
  public function getRollout()
  {
    return $this->rollout;
  }
  /** @param string */
  public function setRolloutState($rolloutState)
  {
    $this->rolloutState = $rolloutState;
  }
  /** @return string */
  public function getRolloutState()
  {
    return $this->rolloutState;
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
}

class OSPolicyAssignmentInstanceFilter extends \Google\Collection
{
  /** @var bool */
  public $all;
  /** @var OSPolicyAssignmentLabelSet[] */
  public $exclusionLabels;
  /** @var OSPolicyAssignmentLabelSet[] */
  public $inclusionLabels;
  /** @var OSPolicyAssignmentInstanceFilterInventory[] */
  public $inventories;
  protected $collection_key = 'inventories';
  protected $exclusionLabelsType = OSPolicyAssignmentLabelSet::class;
  protected $exclusionLabelsDataType = 'array';
  protected $inclusionLabelsType = OSPolicyAssignmentLabelSet::class;
  protected $inclusionLabelsDataType = 'array';
  protected $inventoriesType = OSPolicyAssignmentInstanceFilterInventory::class;
  protected $inventoriesDataType = 'array';
  /** @param bool */
  public function setAll($all)
  {
    $this->all = $all;
  }
  /** @return bool */
  public function getAll()
  {
    return $this->all;
  }
  /** @param OSPolicyAssignmentLabelSet[] */
  public function setExclusionLabels($exclusionLabels)
  {
    $this->exclusionLabels = $exclusionLabels;
  }
  /** @return OSPolicyAssignmentLabelSet[] */
  public function getExclusionLabels()
  {
    return $this->exclusionLabels;
  }
  /** @param OSPolicyAssignmentLabelSet[] */
  public function setInclusionLabels($inclusionLabels)
  {
    $this->inclusionLabels = $inclusionLabels;
  }
  /** @return OSPolicyAssignmentLabelSet[] */
  public function getInclusionLabels()
  {
    return $this->inclusionLabels;
  }
  /** @param OSPolicyAssignmentInstanceFilterInventory[] */
  public function setInventories($inventories)
  {
    $this->inventories = $inventories;
  }
  /** @return OSPolicyAssignmentInstanceFilterInventory[] */
  public function getInventories()
  {
    return $this->inventories;
  }
}

class OSPolicyAssignmentInstanceFilterInventory extends \Google\Model
{
  /** @var string */
  public $osShortName;
  /** @var string */
  public $osVersion;

  /** @param string */
  public function setOsShortName($osShortName)
  {
    $this->osShortName = $osShortName;
  }
  /** @return string */
  public function getOsShortName()
  {
    return $this->osShortName;
  }
  /** @param string */
  public function setOsVersion($osVersion)
  {
    $this->osVersion = $osVersion;
  }
  /** @return string */
  public function getOsVersion()
  {
    return $this->osVersion;
  }
}

class OSPolicyAssignmentLabelSet extends \Google\Model
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

class OSPolicyAssignmentOperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiMethod;
  /** @var string */
  public $osPolicyAssignment;
  /** @var string */
  public $rolloutStartTime;
  /** @var string */
  public $rolloutState;
  /** @var string */
  public $rolloutUpdateTime;

  /** @param string */
  public function setApiMethod($apiMethod)
  {
    $this->apiMethod = $apiMethod;
  }
  /** @return string */
  public function getApiMethod()
  {
    return $this->apiMethod;
  }
  /** @param string */
  public function setOsPolicyAssignment($osPolicyAssignment)
  {
    $this->osPolicyAssignment = $osPolicyAssignment;
  }
  /** @return string */
  public function getOsPolicyAssignment()
  {
    return $this->osPolicyAssignment;
  }
  /** @param string */
  public function setRolloutStartTime($rolloutStartTime)
  {
    $this->rolloutStartTime = $rolloutStartTime;
  }
  /** @return string */
  public function getRolloutStartTime()
  {
    return $this->rolloutStartTime;
  }
  /** @param string */
  public function setRolloutState($rolloutState)
  {
    $this->rolloutState = $rolloutState;
  }
  /** @return string */
  public function getRolloutState()
  {
    return $this->rolloutState;
  }
  /** @param string */
  public function setRolloutUpdateTime($rolloutUpdateTime)
  {
    $this->rolloutUpdateTime = $rolloutUpdateTime;
  }
  /** @return string */
  public function getRolloutUpdateTime()
  {
    return $this->rolloutUpdateTime;
  }
}

class OSPolicyAssignmentReport extends \Google\Collection
{
  /** @var string */
  public $instance;
  /** @var string */
  public $lastRunId;
  /** @var string */
  public $name;
  /** @var string */
  public $osPolicyAssignment;
  /** @var OSPolicyAssignmentReportOSPolicyCompliance[] */
  public $osPolicyCompliances;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'osPolicyCompliances';
  protected $osPolicyCompliancesType = OSPolicyAssignmentReportOSPolicyCompliance::class;
  protected $osPolicyCompliancesDataType = 'array';
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
  public function setLastRunId($lastRunId)
  {
    $this->lastRunId = $lastRunId;
  }
  /** @return string */
  public function getLastRunId()
  {
    return $this->lastRunId;
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
  public function setOsPolicyAssignment($osPolicyAssignment)
  {
    $this->osPolicyAssignment = $osPolicyAssignment;
  }
  /** @return string */
  public function getOsPolicyAssignment()
  {
    return $this->osPolicyAssignment;
  }
  /** @param OSPolicyAssignmentReportOSPolicyCompliance[] */
  public function setOsPolicyCompliances($osPolicyCompliances)
  {
    $this->osPolicyCompliances = $osPolicyCompliances;
  }
  /** @return OSPolicyAssignmentReportOSPolicyCompliance[] */
  public function getOsPolicyCompliances()
  {
    return $this->osPolicyCompliances;
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

class OSPolicyAssignmentReportOSPolicyCompliance extends \Google\Collection
{
  /** @var string */
  public $complianceState;
  /** @var string */
  public $complianceStateReason;
  /** @var string */
  public $osPolicyId;
  /** @var OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceCompliance[] */
  public $osPolicyResourceCompliances;
  protected $collection_key = 'osPolicyResourceCompliances';
  protected $osPolicyResourceCompliancesType = OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceCompliance::class;
  protected $osPolicyResourceCompliancesDataType = 'array';
  /** @param string */
  public function setComplianceState($complianceState)
  {
    $this->complianceState = $complianceState;
  }
  /** @return string */
  public function getComplianceState()
  {
    return $this->complianceState;
  }
  /** @param string */
  public function setComplianceStateReason($complianceStateReason)
  {
    $this->complianceStateReason = $complianceStateReason;
  }
  /** @return string */
  public function getComplianceStateReason()
  {
    return $this->complianceStateReason;
  }
  /** @param string */
  public function setOsPolicyId($osPolicyId)
  {
    $this->osPolicyId = $osPolicyId;
  }
  /** @return string */
  public function getOsPolicyId()
  {
    return $this->osPolicyId;
  }
  /** @param OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceCompliance[] */
  public function setOsPolicyResourceCompliances($osPolicyResourceCompliances)
  {
    $this->osPolicyResourceCompliances = $osPolicyResourceCompliances;
  }
  /** @return OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceCompliance[] */
  public function getOsPolicyResourceCompliances()
  {
    return $this->osPolicyResourceCompliances;
  }
}

class OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceCompliance extends \Google\Collection
{
  /** @var string */
  public $complianceState;
  /** @var string */
  public $complianceStateReason;
  /** @var OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceOSPolicyResourceConfigStep[] */
  public $configSteps;
  /** @var OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput */
  public $execResourceOutput;
  /** @var string */
  public $osPolicyResourceId;
  protected $collection_key = 'configSteps';
  protected $configStepsType = OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceOSPolicyResourceConfigStep::class;
  protected $configStepsDataType = 'array';
  protected $execResourceOutputType = OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput::class;
  protected $execResourceOutputDataType = '';
  /** @param string */
  public function setComplianceState($complianceState)
  {
    $this->complianceState = $complianceState;
  }
  /** @return string */
  public function getComplianceState()
  {
    return $this->complianceState;
  }
  /** @param string */
  public function setComplianceStateReason($complianceStateReason)
  {
    $this->complianceStateReason = $complianceStateReason;
  }
  /** @return string */
  public function getComplianceStateReason()
  {
    return $this->complianceStateReason;
  }
  /** @param OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceOSPolicyResourceConfigStep[] */
  public function setConfigSteps($configSteps)
  {
    $this->configSteps = $configSteps;
  }
  /** @return OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceOSPolicyResourceConfigStep[] */
  public function getConfigSteps()
  {
    return $this->configSteps;
  }
  /** @param OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput */
  public function setExecResourceOutput(OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput $execResourceOutput)
  {
    $this->execResourceOutput = $execResourceOutput;
  }
  /** @return OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput */
  public function getExecResourceOutput()
  {
    return $this->execResourceOutput;
  }
  /** @param string */
  public function setOsPolicyResourceId($osPolicyResourceId)
  {
    $this->osPolicyResourceId = $osPolicyResourceId;
  }
  /** @return string */
  public function getOsPolicyResourceId()
  {
    return $this->osPolicyResourceId;
  }
}

class OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput extends \Google\Model
{
  /** @var string */
  public $enforcementOutput;

  /** @param string */
  public function setEnforcementOutput($enforcementOutput)
  {
    $this->enforcementOutput = $enforcementOutput;
  }
  /** @return string */
  public function getEnforcementOutput()
  {
    return $this->enforcementOutput;
  }
}

class OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceOSPolicyResourceConfigStep extends \Google\Model
{
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $type;

  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
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

class OSPolicyAssignmentRollout extends \Google\Model
{
  /** @var FixedOrPercent */
  public $disruptionBudget;
  /** @var string */
  public $minWaitDuration;
  protected $disruptionBudgetType = FixedOrPercent::class;
  protected $disruptionBudgetDataType = '';
  /** @param FixedOrPercent */
  public function setDisruptionBudget(FixedOrPercent $disruptionBudget)
  {
    $this->disruptionBudget = $disruptionBudget;
  }
  /** @return FixedOrPercent */
  public function getDisruptionBudget()
  {
    return $this->disruptionBudget;
  }
  /** @param string */
  public function setMinWaitDuration($minWaitDuration)
  {
    $this->minWaitDuration = $minWaitDuration;
  }
  /** @return string */
  public function getMinWaitDuration()
  {
    return $this->minWaitDuration;
  }
}

class OSPolicyInventoryFilter extends \Google\Model
{
  /** @var string */
  public $osShortName;
  /** @var string */
  public $osVersion;

  /** @param string */
  public function setOsShortName($osShortName)
  {
    $this->osShortName = $osShortName;
  }
  /** @return string */
  public function getOsShortName()
  {
    return $this->osShortName;
  }
  /** @param string */
  public function setOsVersion($osVersion)
  {
    $this->osVersion = $osVersion;
  }
  /** @return string */
  public function getOsVersion()
  {
    return $this->osVersion;
  }
}

class OSPolicyResource extends \Google\Model
{
  /** @var OSPolicyResourceExecResource */
  public $exec;
  /** @var OSPolicyResourceFileResource */
  public $file;
  /** @var string */
  public $id;
  /** @var OSPolicyResourcePackageResource */
  public $pkg;
  /** @var OSPolicyResourceRepositoryResource */
  public $repository;
  protected $execType = OSPolicyResourceExecResource::class;
  protected $execDataType = '';
  protected $fileType = OSPolicyResourceFileResource::class;
  protected $fileDataType = '';
  protected $pkgType = OSPolicyResourcePackageResource::class;
  protected $pkgDataType = '';
  protected $repositoryType = OSPolicyResourceRepositoryResource::class;
  protected $repositoryDataType = '';
  /** @param OSPolicyResourceExecResource */
  public function setExec(OSPolicyResourceExecResource $exec)
  {
    $this->exec = $exec;
  }
  /** @return OSPolicyResourceExecResource */
  public function getExec()
  {
    return $this->exec;
  }
  /** @param OSPolicyResourceFileResource */
  public function setFile(OSPolicyResourceFileResource $file)
  {
    $this->file = $file;
  }
  /** @return OSPolicyResourceFileResource */
  public function getFile()
  {
    return $this->file;
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
  /** @param OSPolicyResourcePackageResource */
  public function setPkg(OSPolicyResourcePackageResource $pkg)
  {
    $this->pkg = $pkg;
  }
  /** @return OSPolicyResourcePackageResource */
  public function getPkg()
  {
    return $this->pkg;
  }
  /** @param OSPolicyResourceRepositoryResource */
  public function setRepository(OSPolicyResourceRepositoryResource $repository)
  {
    $this->repository = $repository;
  }
  /** @return OSPolicyResourceRepositoryResource */
  public function getRepository()
  {
    return $this->repository;
  }
}

class OSPolicyResourceExecResource extends \Google\Model
{
  /** @var OSPolicyResourceExecResourceExec */
  public $enforce;
  /** @var OSPolicyResourceExecResourceExec */
  public $validate;
  protected $enforceType = OSPolicyResourceExecResourceExec::class;
  protected $enforceDataType = '';
  protected $validateType = OSPolicyResourceExecResourceExec::class;
  protected $validateDataType = '';
  /** @param OSPolicyResourceExecResourceExec */
  public function setEnforce(OSPolicyResourceExecResourceExec $enforce)
  {
    $this->enforce = $enforce;
  }
  /** @return OSPolicyResourceExecResourceExec */
  public function getEnforce()
  {
    return $this->enforce;
  }
  /** @param OSPolicyResourceExecResourceExec */
  public function setValidate(OSPolicyResourceExecResourceExec $validate)
  {
    $this->validate = $validate;
  }
  /** @return OSPolicyResourceExecResourceExec */
  public function getValidate()
  {
    return $this->validate;
  }
}

class OSPolicyResourceExecResourceExec extends \Google\Collection
{
  /** @var string[] */
  public $args;
  /** @var OSPolicyResourceFile */
  public $file;
  /** @var string */
  public $interpreter;
  /** @var string */
  public $outputFilePath;
  /** @var string */
  public $script;
  protected $collection_key = 'args';
  protected $fileType = OSPolicyResourceFile::class;
  protected $fileDataType = '';
  /** @param string[] */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /** @return string[] */
  public function getArgs()
  {
    return $this->args;
  }
  /** @param OSPolicyResourceFile */
  public function setFile(OSPolicyResourceFile $file)
  {
    $this->file = $file;
  }
  /** @return OSPolicyResourceFile */
  public function getFile()
  {
    return $this->file;
  }
  /** @param string */
  public function setInterpreter($interpreter)
  {
    $this->interpreter = $interpreter;
  }
  /** @return string */
  public function getInterpreter()
  {
    return $this->interpreter;
  }
  /** @param string */
  public function setOutputFilePath($outputFilePath)
  {
    $this->outputFilePath = $outputFilePath;
  }
  /** @return string */
  public function getOutputFilePath()
  {
    return $this->outputFilePath;
  }
  /** @param string */
  public function setScript($script)
  {
    $this->script = $script;
  }
  /** @return string */
  public function getScript()
  {
    return $this->script;
  }
}

class OSPolicyResourceFile extends \Google\Model
{
  /** @var bool */
  public $allowInsecure;
  /** @var OSPolicyResourceFileGcs */
  public $gcs;
  /** @var string */
  public $localPath;
  /** @var OSPolicyResourceFileRemote */
  public $remote;
  protected $gcsType = OSPolicyResourceFileGcs::class;
  protected $gcsDataType = '';
  protected $remoteType = OSPolicyResourceFileRemote::class;
  protected $remoteDataType = '';
  /** @param bool */
  public function setAllowInsecure($allowInsecure)
  {
    $this->allowInsecure = $allowInsecure;
  }
  /** @return bool */
  public function getAllowInsecure()
  {
    return $this->allowInsecure;
  }
  /** @param OSPolicyResourceFileGcs */
  public function setGcs(OSPolicyResourceFileGcs $gcs)
  {
    $this->gcs = $gcs;
  }
  /** @return OSPolicyResourceFileGcs */
  public function getGcs()
  {
    return $this->gcs;
  }
  /** @param string */
  public function setLocalPath($localPath)
  {
    $this->localPath = $localPath;
  }
  /** @return string */
  public function getLocalPath()
  {
    return $this->localPath;
  }
  /** @param OSPolicyResourceFileRemote */
  public function setRemote(OSPolicyResourceFileRemote $remote)
  {
    $this->remote = $remote;
  }
  /** @return OSPolicyResourceFileRemote */
  public function getRemote()
  {
    return $this->remote;
  }
}

class OSPolicyResourceFileGcs extends \Google\Model
{
  /** @var string */
  public $bucket;
  /** @var string */
  public $generation;
  /** @var string */
  public $object;

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
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /** @return string */
  public function getGeneration()
  {
    return $this->generation;
  }
  /** @param string */
  public function setObject($object)
  {
    $this->object = $object;
  }
  /** @return string */
  public function getObject()
  {
    return $this->object;
  }
}

class OSPolicyResourceFileRemote extends \Google\Model
{
  /** @var string */
  public $sha256Checksum;
  /** @var string */
  public $uri;

  /** @param string */
  public function setSha256Checksum($sha256Checksum)
  {
    $this->sha256Checksum = $sha256Checksum;
  }
  /** @return string */
  public function getSha256Checksum()
  {
    return $this->sha256Checksum;
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

class OSPolicyResourceFileResource extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var OSPolicyResourceFile */
  public $file;
  /** @var string */
  public $path;
  /** @var string */
  public $permissions;
  /** @var string */
  public $state;
  protected $fileType = OSPolicyResourceFile::class;
  protected $fileDataType = '';
  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
  /** @param OSPolicyResourceFile */
  public function setFile(OSPolicyResourceFile $file)
  {
    $this->file = $file;
  }
  /** @return OSPolicyResourceFile */
  public function getFile()
  {
    return $this->file;
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
  /** @param string */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string */
  public function getPermissions()
  {
    return $this->permissions;
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
}

class OSPolicyResourceGroup extends \Google\Collection
{
  /** @var OSPolicyInventoryFilter[] */
  public $inventoryFilters;
  /** @var OSPolicyResource[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $inventoryFiltersType = OSPolicyInventoryFilter::class;
  protected $inventoryFiltersDataType = 'array';
  protected $resourcesType = OSPolicyResource::class;
  protected $resourcesDataType = 'array';
  /** @param OSPolicyInventoryFilter[] */
  public function setInventoryFilters($inventoryFilters)
  {
    $this->inventoryFilters = $inventoryFilters;
  }
  /** @return OSPolicyInventoryFilter[] */
  public function getInventoryFilters()
  {
    return $this->inventoryFilters;
  }
  /** @param OSPolicyResource[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return OSPolicyResource[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class OSPolicyResourcePackageResource extends \Google\Model
{
  /** @var OSPolicyResourcePackageResourceAPT */
  public $apt;
  /** @var OSPolicyResourcePackageResourceDeb */
  public $deb;
  /** @var string */
  public $desiredState;
  /** @var OSPolicyResourcePackageResourceGooGet */
  public $googet;
  /** @var OSPolicyResourcePackageResourceMSI */
  public $msi;
  /** @var OSPolicyResourcePackageResourceRPM */
  public $rpm;
  /** @var OSPolicyResourcePackageResourceYUM */
  public $yum;
  /** @var OSPolicyResourcePackageResourceZypper */
  public $zypper;
  protected $aptType = OSPolicyResourcePackageResourceAPT::class;
  protected $aptDataType = '';
  protected $debType = OSPolicyResourcePackageResourceDeb::class;
  protected $debDataType = '';
  protected $googetType = OSPolicyResourcePackageResourceGooGet::class;
  protected $googetDataType = '';
  protected $msiType = OSPolicyResourcePackageResourceMSI::class;
  protected $msiDataType = '';
  protected $rpmType = OSPolicyResourcePackageResourceRPM::class;
  protected $rpmDataType = '';
  protected $yumType = OSPolicyResourcePackageResourceYUM::class;
  protected $yumDataType = '';
  protected $zypperType = OSPolicyResourcePackageResourceZypper::class;
  protected $zypperDataType = '';
  /** @param OSPolicyResourcePackageResourceAPT */
  public function setApt(OSPolicyResourcePackageResourceAPT $apt)
  {
    $this->apt = $apt;
  }
  /** @return OSPolicyResourcePackageResourceAPT */
  public function getApt()
  {
    return $this->apt;
  }
  /** @param OSPolicyResourcePackageResourceDeb */
  public function setDeb(OSPolicyResourcePackageResourceDeb $deb)
  {
    $this->deb = $deb;
  }
  /** @return OSPolicyResourcePackageResourceDeb */
  public function getDeb()
  {
    return $this->deb;
  }
  /** @param string */
  public function setDesiredState($desiredState)
  {
    $this->desiredState = $desiredState;
  }
  /** @return string */
  public function getDesiredState()
  {
    return $this->desiredState;
  }
  /** @param OSPolicyResourcePackageResourceGooGet */
  public function setGooget(OSPolicyResourcePackageResourceGooGet $googet)
  {
    $this->googet = $googet;
  }
  /** @return OSPolicyResourcePackageResourceGooGet */
  public function getGooget()
  {
    return $this->googet;
  }
  /** @param OSPolicyResourcePackageResourceMSI */
  public function setMsi(OSPolicyResourcePackageResourceMSI $msi)
  {
    $this->msi = $msi;
  }
  /** @return OSPolicyResourcePackageResourceMSI */
  public function getMsi()
  {
    return $this->msi;
  }
  /** @param OSPolicyResourcePackageResourceRPM */
  public function setRpm(OSPolicyResourcePackageResourceRPM $rpm)
  {
    $this->rpm = $rpm;
  }
  /** @return OSPolicyResourcePackageResourceRPM */
  public function getRpm()
  {
    return $this->rpm;
  }
  /** @param OSPolicyResourcePackageResourceYUM */
  public function setYum(OSPolicyResourcePackageResourceYUM $yum)
  {
    $this->yum = $yum;
  }
  /** @return OSPolicyResourcePackageResourceYUM */
  public function getYum()
  {
    return $this->yum;
  }
  /** @param OSPolicyResourcePackageResourceZypper */
  public function setZypper(OSPolicyResourcePackageResourceZypper $zypper)
  {
    $this->zypper = $zypper;
  }
  /** @return OSPolicyResourcePackageResourceZypper */
  public function getZypper()
  {
    return $this->zypper;
  }
}

class OSPolicyResourcePackageResourceAPT extends \Google\Model
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

class OSPolicyResourcePackageResourceDeb extends \Google\Model
{
  /** @var bool */
  public $pullDeps;
  /** @var OSPolicyResourceFile */
  public $source;
  protected $sourceType = OSPolicyResourceFile::class;
  protected $sourceDataType = '';
  /** @param bool */
  public function setPullDeps($pullDeps)
  {
    $this->pullDeps = $pullDeps;
  }
  /** @return bool */
  public function getPullDeps()
  {
    return $this->pullDeps;
  }
  /** @param OSPolicyResourceFile */
  public function setSource(OSPolicyResourceFile $source)
  {
    $this->source = $source;
  }
  /** @return OSPolicyResourceFile */
  public function getSource()
  {
    return $this->source;
  }
}

class OSPolicyResourcePackageResourceGooGet extends \Google\Model
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

class OSPolicyResourcePackageResourceMSI extends \Google\Collection
{
  /** @var string[] */
  public $properties;
  /** @var OSPolicyResourceFile */
  public $source;
  protected $collection_key = 'properties';
  protected $sourceType = OSPolicyResourceFile::class;
  protected $sourceDataType = '';
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param OSPolicyResourceFile */
  public function setSource(OSPolicyResourceFile $source)
  {
    $this->source = $source;
  }
  /** @return OSPolicyResourceFile */
  public function getSource()
  {
    return $this->source;
  }
}

class OSPolicyResourcePackageResourceRPM extends \Google\Model
{
  /** @var bool */
  public $pullDeps;
  /** @var OSPolicyResourceFile */
  public $source;
  protected $sourceType = OSPolicyResourceFile::class;
  protected $sourceDataType = '';
  /** @param bool */
  public function setPullDeps($pullDeps)
  {
    $this->pullDeps = $pullDeps;
  }
  /** @return bool */
  public function getPullDeps()
  {
    return $this->pullDeps;
  }
  /** @param OSPolicyResourceFile */
  public function setSource(OSPolicyResourceFile $source)
  {
    $this->source = $source;
  }
  /** @return OSPolicyResourceFile */
  public function getSource()
  {
    return $this->source;
  }
}

class OSPolicyResourcePackageResourceYUM extends \Google\Model
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

class OSPolicyResourcePackageResourceZypper extends \Google\Model
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

class OSPolicyResourceRepositoryResource extends \Google\Model
{
  /** @var OSPolicyResourceRepositoryResourceAptRepository */
  public $apt;
  /** @var OSPolicyResourceRepositoryResourceGooRepository */
  public $goo;
  /** @var OSPolicyResourceRepositoryResourceYumRepository */
  public $yum;
  /** @var OSPolicyResourceRepositoryResourceZypperRepository */
  public $zypper;
  protected $aptType = OSPolicyResourceRepositoryResourceAptRepository::class;
  protected $aptDataType = '';
  protected $gooType = OSPolicyResourceRepositoryResourceGooRepository::class;
  protected $gooDataType = '';
  protected $yumType = OSPolicyResourceRepositoryResourceYumRepository::class;
  protected $yumDataType = '';
  protected $zypperType = OSPolicyResourceRepositoryResourceZypperRepository::class;
  protected $zypperDataType = '';
  /** @param OSPolicyResourceRepositoryResourceAptRepository */
  public function setApt(OSPolicyResourceRepositoryResourceAptRepository $apt)
  {
    $this->apt = $apt;
  }
  /** @return OSPolicyResourceRepositoryResourceAptRepository */
  public function getApt()
  {
    return $this->apt;
  }
  /** @param OSPolicyResourceRepositoryResourceGooRepository */
  public function setGoo(OSPolicyResourceRepositoryResourceGooRepository $goo)
  {
    $this->goo = $goo;
  }
  /** @return OSPolicyResourceRepositoryResourceGooRepository */
  public function getGoo()
  {
    return $this->goo;
  }
  /** @param OSPolicyResourceRepositoryResourceYumRepository */
  public function setYum(OSPolicyResourceRepositoryResourceYumRepository $yum)
  {
    $this->yum = $yum;
  }
  /** @return OSPolicyResourceRepositoryResourceYumRepository */
  public function getYum()
  {
    return $this->yum;
  }
  /** @param OSPolicyResourceRepositoryResourceZypperRepository */
  public function setZypper(OSPolicyResourceRepositoryResourceZypperRepository $zypper)
  {
    $this->zypper = $zypper;
  }
  /** @return OSPolicyResourceRepositoryResourceZypperRepository */
  public function getZypper()
  {
    return $this->zypper;
  }
}

class OSPolicyResourceRepositoryResourceAptRepository extends \Google\Collection
{
  /** @var string */
  public $archiveType;
  /** @var string[] */
  public $components;
  /** @var string */
  public $distribution;
  /** @var string */
  public $gpgKey;
  /** @var string */
  public $uri;
  protected $collection_key = 'components';
  /** @param string */
  public function setArchiveType($archiveType)
  {
    $this->archiveType = $archiveType;
  }
  /** @return string */
  public function getArchiveType()
  {
    return $this->archiveType;
  }
  /** @param string[] */
  public function setComponents($components)
  {
    $this->components = $components;
  }
  /** @return string[] */
  public function getComponents()
  {
    return $this->components;
  }
  /** @param string */
  public function setDistribution($distribution)
  {
    $this->distribution = $distribution;
  }
  /** @return string */
  public function getDistribution()
  {
    return $this->distribution;
  }
  /** @param string */
  public function setGpgKey($gpgKey)
  {
    $this->gpgKey = $gpgKey;
  }
  /** @return string */
  public function getGpgKey()
  {
    return $this->gpgKey;
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

class OSPolicyResourceRepositoryResourceGooRepository extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $url;

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

class OSPolicyResourceRepositoryResourceYumRepository extends \Google\Collection
{
  /** @var string */
  public $baseUrl;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $gpgKeys;
  /** @var string */
  public $id;
  protected $collection_key = 'gpgKeys';
  /** @param string */
  public function setBaseUrl($baseUrl)
  {
    $this->baseUrl = $baseUrl;
  }
  /** @return string */
  public function getBaseUrl()
  {
    return $this->baseUrl;
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
  /** @param string[] */
  public function setGpgKeys($gpgKeys)
  {
    $this->gpgKeys = $gpgKeys;
  }
  /** @return string[] */
  public function getGpgKeys()
  {
    return $this->gpgKeys;
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
}

class OSPolicyResourceRepositoryResourceZypperRepository extends \Google\Collection
{
  /** @var string */
  public $baseUrl;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $gpgKeys;
  /** @var string */
  public $id;
  protected $collection_key = 'gpgKeys';
  /** @param string */
  public function setBaseUrl($baseUrl)
  {
    $this->baseUrl = $baseUrl;
  }
  /** @return string */
  public function getBaseUrl()
  {
    return $this->baseUrl;
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
  /** @param string[] */
  public function setGpgKeys($gpgKeys)
  {
    $this->gpgKeys = $gpgKeys;
  }
  /** @return string[] */
  public function getGpgKeys()
  {
    return $this->gpgKeys;
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
}

class OneTimeSchedule extends \Google\Model
{
  /** @var string */
  public $executeTime;

  /** @param string */
  public function setExecuteTime($executeTime)
  {
    $this->executeTime = $executeTime;
  }
  /** @return string */
  public function getExecuteTime()
  {
    return $this->executeTime;
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

class OsconfigEmpty extends \Google\Model
{
}

class PatchConfig extends \Google\Model
{
  /** @var AptSettings */
  public $apt;
  /** @var GooSettings */
  public $goo;
  /** @var bool */
  public $migInstancesAllowed;
  /** @var ExecStep */
  public $postStep;
  /** @var ExecStep */
  public $preStep;
  /** @var string */
  public $rebootConfig;
  /** @var WindowsUpdateSettings */
  public $windowsUpdate;
  /** @var YumSettings */
  public $yum;
  /** @var ZypperSettings */
  public $zypper;
  protected $aptType = AptSettings::class;
  protected $aptDataType = '';
  protected $gooType = GooSettings::class;
  protected $gooDataType = '';
  protected $postStepType = ExecStep::class;
  protected $postStepDataType = '';
  protected $preStepType = ExecStep::class;
  protected $preStepDataType = '';
  protected $windowsUpdateType = WindowsUpdateSettings::class;
  protected $windowsUpdateDataType = '';
  protected $yumType = YumSettings::class;
  protected $yumDataType = '';
  protected $zypperType = ZypperSettings::class;
  protected $zypperDataType = '';
  /** @param AptSettings */
  public function setApt(AptSettings $apt)
  {
    $this->apt = $apt;
  }
  /** @return AptSettings */
  public function getApt()
  {
    return $this->apt;
  }
  /** @param GooSettings */
  public function setGoo(GooSettings $goo)
  {
    $this->goo = $goo;
  }
  /** @return GooSettings */
  public function getGoo()
  {
    return $this->goo;
  }
  /** @param bool */
  public function setMigInstancesAllowed($migInstancesAllowed)
  {
    $this->migInstancesAllowed = $migInstancesAllowed;
  }
  /** @return bool */
  public function getMigInstancesAllowed()
  {
    return $this->migInstancesAllowed;
  }
  /** @param ExecStep */
  public function setPostStep(ExecStep $postStep)
  {
    $this->postStep = $postStep;
  }
  /** @return ExecStep */
  public function getPostStep()
  {
    return $this->postStep;
  }
  /** @param ExecStep */
  public function setPreStep(ExecStep $preStep)
  {
    $this->preStep = $preStep;
  }
  /** @return ExecStep */
  public function getPreStep()
  {
    return $this->preStep;
  }
  /** @param string */
  public function setRebootConfig($rebootConfig)
  {
    $this->rebootConfig = $rebootConfig;
  }
  /** @return string */
  public function getRebootConfig()
  {
    return $this->rebootConfig;
  }
  /** @param WindowsUpdateSettings */
  public function setWindowsUpdate(WindowsUpdateSettings $windowsUpdate)
  {
    $this->windowsUpdate = $windowsUpdate;
  }
  /** @return WindowsUpdateSettings */
  public function getWindowsUpdate()
  {
    return $this->windowsUpdate;
  }
  /** @param YumSettings */
  public function setYum(YumSettings $yum)
  {
    $this->yum = $yum;
  }
  /** @return YumSettings */
  public function getYum()
  {
    return $this->yum;
  }
  /** @param ZypperSettings */
  public function setZypper(ZypperSettings $zypper)
  {
    $this->zypper = $zypper;
  }
  /** @return ZypperSettings */
  public function getZypper()
  {
    return $this->zypper;
  }
}

class PatchDeployment extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $duration;
  /** @var PatchInstanceFilter */
  public $instanceFilter;
  /** @var string */
  public $lastExecuteTime;
  /** @var string */
  public $name;
  /** @var OneTimeSchedule */
  public $oneTimeSchedule;
  /** @var PatchConfig */
  public $patchConfig;
  /** @var RecurringSchedule */
  public $recurringSchedule;
  /** @var PatchRollout */
  public $rollout;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $instanceFilterType = PatchInstanceFilter::class;
  protected $instanceFilterDataType = '';
  protected $oneTimeScheduleType = OneTimeSchedule::class;
  protected $oneTimeScheduleDataType = '';
  protected $patchConfigType = PatchConfig::class;
  protected $patchConfigDataType = '';
  protected $recurringScheduleType = RecurringSchedule::class;
  protected $recurringScheduleDataType = '';
  protected $rolloutType = PatchRollout::class;
  protected $rolloutDataType = '';
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
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param PatchInstanceFilter */
  public function setInstanceFilter(PatchInstanceFilter $instanceFilter)
  {
    $this->instanceFilter = $instanceFilter;
  }
  /** @return PatchInstanceFilter */
  public function getInstanceFilter()
  {
    return $this->instanceFilter;
  }
  /** @param string */
  public function setLastExecuteTime($lastExecuteTime)
  {
    $this->lastExecuteTime = $lastExecuteTime;
  }
  /** @return string */
  public function getLastExecuteTime()
  {
    return $this->lastExecuteTime;
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
  /** @param OneTimeSchedule */
  public function setOneTimeSchedule(OneTimeSchedule $oneTimeSchedule)
  {
    $this->oneTimeSchedule = $oneTimeSchedule;
  }
  /** @return OneTimeSchedule */
  public function getOneTimeSchedule()
  {
    return $this->oneTimeSchedule;
  }
  /** @param PatchConfig */
  public function setPatchConfig(PatchConfig $patchConfig)
  {
    $this->patchConfig = $patchConfig;
  }
  /** @return PatchConfig */
  public function getPatchConfig()
  {
    return $this->patchConfig;
  }
  /** @param RecurringSchedule */
  public function setRecurringSchedule(RecurringSchedule $recurringSchedule)
  {
    $this->recurringSchedule = $recurringSchedule;
  }
  /** @return RecurringSchedule */
  public function getRecurringSchedule()
  {
    return $this->recurringSchedule;
  }
  /** @param PatchRollout */
  public function setRollout(PatchRollout $rollout)
  {
    $this->rollout = $rollout;
  }
  /** @return PatchRollout */
  public function getRollout()
  {
    return $this->rollout;
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

class PatchInstanceFilter extends \Google\Collection
{
  /** @var bool */
  public $all;
  /** @var PatchInstanceFilterGroupLabel[] */
  public $groupLabels;
  /** @var string[] */
  public $instanceNamePrefixes;
  /** @var string[] */
  public $instances;
  /** @var string[] */
  public $zones;
  protected $collection_key = 'zones';
  protected $groupLabelsType = PatchInstanceFilterGroupLabel::class;
  protected $groupLabelsDataType = 'array';
  /** @param bool */
  public function setAll($all)
  {
    $this->all = $all;
  }
  /** @return bool */
  public function getAll()
  {
    return $this->all;
  }
  /** @param PatchInstanceFilterGroupLabel[] */
  public function setGroupLabels($groupLabels)
  {
    $this->groupLabels = $groupLabels;
  }
  /** @return PatchInstanceFilterGroupLabel[] */
  public function getGroupLabels()
  {
    return $this->groupLabels;
  }
  /** @param string[] */
  public function setInstanceNamePrefixes($instanceNamePrefixes)
  {
    $this->instanceNamePrefixes = $instanceNamePrefixes;
  }
  /** @return string[] */
  public function getInstanceNamePrefixes()
  {
    return $this->instanceNamePrefixes;
  }
  /** @param string[] */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /** @return string[] */
  public function getInstances()
  {
    return $this->instances;
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

class PatchInstanceFilterGroupLabel extends \Google\Model
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

class PatchJob extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var bool */
  public $dryRun;
  /** @var string */
  public $duration;
  /** @var string */
  public $errorMessage;
  /** @var PatchJobInstanceDetailsSummary */
  public $instanceDetailsSummary;
  /** @var PatchInstanceFilter */
  public $instanceFilter;
  /** @var string */
  public $name;
  /** @var PatchConfig */
  public $patchConfig;
  /** @var string */
  public $patchDeployment;
  public $percentComplete;
  /** @var PatchRollout */
  public $rollout;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  protected $instanceDetailsSummaryType = PatchJobInstanceDetailsSummary::class;
  protected $instanceDetailsSummaryDataType = '';
  protected $instanceFilterType = PatchInstanceFilter::class;
  protected $instanceFilterDataType = '';
  protected $patchConfigType = PatchConfig::class;
  protected $patchConfigDataType = '';
  protected $rolloutType = PatchRollout::class;
  protected $rolloutDataType = '';
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
  /** @param bool */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /** @return bool */
  public function getDryRun()
  {
    return $this->dryRun;
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
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param PatchJobInstanceDetailsSummary */
  public function setInstanceDetailsSummary(PatchJobInstanceDetailsSummary $instanceDetailsSummary)
  {
    $this->instanceDetailsSummary = $instanceDetailsSummary;
  }
  /** @return PatchJobInstanceDetailsSummary */
  public function getInstanceDetailsSummary()
  {
    return $this->instanceDetailsSummary;
  }
  /** @param PatchInstanceFilter */
  public function setInstanceFilter(PatchInstanceFilter $instanceFilter)
  {
    $this->instanceFilter = $instanceFilter;
  }
  /** @return PatchInstanceFilter */
  public function getInstanceFilter()
  {
    return $this->instanceFilter;
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
  /** @param PatchConfig */
  public function setPatchConfig(PatchConfig $patchConfig)
  {
    $this->patchConfig = $patchConfig;
  }
  /** @return PatchConfig */
  public function getPatchConfig()
  {
    return $this->patchConfig;
  }
  /** @param string */
  public function setPatchDeployment($patchDeployment)
  {
    $this->patchDeployment = $patchDeployment;
  }
  /** @return string */
  public function getPatchDeployment()
  {
    return $this->patchDeployment;
  }
  public function setPercentComplete($percentComplete)
  {
    $this->percentComplete = $percentComplete;
  }
  public function getPercentComplete()
  {
    return $this->percentComplete;
  }
  /** @param PatchRollout */
  public function setRollout(PatchRollout $rollout)
  {
    $this->rollout = $rollout;
  }
  /** @return PatchRollout */
  public function getRollout()
  {
    return $this->rollout;
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

class PatchJobInstanceDetails extends \Google\Model
{
  /** @var string */
  public $attemptCount;
  /** @var string */
  public $failureReason;
  /** @var string */
  public $instanceSystemId;
  /** @var string */
  public $name;
  /** @var string */
  public $state;

  /** @param string */
  public function setAttemptCount($attemptCount)
  {
    $this->attemptCount = $attemptCount;
  }
  /** @return string */
  public function getAttemptCount()
  {
    return $this->attemptCount;
  }
  /** @param string */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /** @return string */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /** @param string */
  public function setInstanceSystemId($instanceSystemId)
  {
    $this->instanceSystemId = $instanceSystemId;
  }
  /** @return string */
  public function getInstanceSystemId()
  {
    return $this->instanceSystemId;
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
}

class PatchJobInstanceDetailsSummary extends \Google\Model
{
  /** @var string */
  public $ackedInstanceCount;
  /** @var string */
  public $applyingPatchesInstanceCount;
  /** @var string */
  public $downloadingPatchesInstanceCount;
  /** @var string */
  public $failedInstanceCount;
  /** @var string */
  public $inactiveInstanceCount;
  /** @var string */
  public $noAgentDetectedInstanceCount;
  /** @var string */
  public $notifiedInstanceCount;
  /** @var string */
  public $pendingInstanceCount;
  /** @var string */
  public $postPatchStepInstanceCount;
  /** @var string */
  public $prePatchStepInstanceCount;
  /** @var string */
  public $rebootingInstanceCount;
  /** @var string */
  public $startedInstanceCount;
  /** @var string */
  public $succeededInstanceCount;
  /** @var string */
  public $succeededRebootRequiredInstanceCount;
  /** @var string */
  public $timedOutInstanceCount;

  /** @param string */
  public function setAckedInstanceCount($ackedInstanceCount)
  {
    $this->ackedInstanceCount = $ackedInstanceCount;
  }
  /** @return string */
  public function getAckedInstanceCount()
  {
    return $this->ackedInstanceCount;
  }
  /** @param string */
  public function setApplyingPatchesInstanceCount($applyingPatchesInstanceCount)
  {
    $this->applyingPatchesInstanceCount = $applyingPatchesInstanceCount;
  }
  /** @return string */
  public function getApplyingPatchesInstanceCount()
  {
    return $this->applyingPatchesInstanceCount;
  }
  /** @param string */
  public function setDownloadingPatchesInstanceCount($downloadingPatchesInstanceCount)
  {
    $this->downloadingPatchesInstanceCount = $downloadingPatchesInstanceCount;
  }
  /** @return string */
  public function getDownloadingPatchesInstanceCount()
  {
    return $this->downloadingPatchesInstanceCount;
  }
  /** @param string */
  public function setFailedInstanceCount($failedInstanceCount)
  {
    $this->failedInstanceCount = $failedInstanceCount;
  }
  /** @return string */
  public function getFailedInstanceCount()
  {
    return $this->failedInstanceCount;
  }
  /** @param string */
  public function setInactiveInstanceCount($inactiveInstanceCount)
  {
    $this->inactiveInstanceCount = $inactiveInstanceCount;
  }
  /** @return string */
  public function getInactiveInstanceCount()
  {
    return $this->inactiveInstanceCount;
  }
  /** @param string */
  public function setNoAgentDetectedInstanceCount($noAgentDetectedInstanceCount)
  {
    $this->noAgentDetectedInstanceCount = $noAgentDetectedInstanceCount;
  }
  /** @return string */
  public function getNoAgentDetectedInstanceCount()
  {
    return $this->noAgentDetectedInstanceCount;
  }
  /** @param string */
  public function setNotifiedInstanceCount($notifiedInstanceCount)
  {
    $this->notifiedInstanceCount = $notifiedInstanceCount;
  }
  /** @return string */
  public function getNotifiedInstanceCount()
  {
    return $this->notifiedInstanceCount;
  }
  /** @param string */
  public function setPendingInstanceCount($pendingInstanceCount)
  {
    $this->pendingInstanceCount = $pendingInstanceCount;
  }
  /** @return string */
  public function getPendingInstanceCount()
  {
    return $this->pendingInstanceCount;
  }
  /** @param string */
  public function setPostPatchStepInstanceCount($postPatchStepInstanceCount)
  {
    $this->postPatchStepInstanceCount = $postPatchStepInstanceCount;
  }
  /** @return string */
  public function getPostPatchStepInstanceCount()
  {
    return $this->postPatchStepInstanceCount;
  }
  /** @param string */
  public function setPrePatchStepInstanceCount($prePatchStepInstanceCount)
  {
    $this->prePatchStepInstanceCount = $prePatchStepInstanceCount;
  }
  /** @return string */
  public function getPrePatchStepInstanceCount()
  {
    return $this->prePatchStepInstanceCount;
  }
  /** @param string */
  public function setRebootingInstanceCount($rebootingInstanceCount)
  {
    $this->rebootingInstanceCount = $rebootingInstanceCount;
  }
  /** @return string */
  public function getRebootingInstanceCount()
  {
    return $this->rebootingInstanceCount;
  }
  /** @param string */
  public function setStartedInstanceCount($startedInstanceCount)
  {
    $this->startedInstanceCount = $startedInstanceCount;
  }
  /** @return string */
  public function getStartedInstanceCount()
  {
    return $this->startedInstanceCount;
  }
  /** @param string */
  public function setSucceededInstanceCount($succeededInstanceCount)
  {
    $this->succeededInstanceCount = $succeededInstanceCount;
  }
  /** @return string */
  public function getSucceededInstanceCount()
  {
    return $this->succeededInstanceCount;
  }
  /** @param string */
  public function setSucceededRebootRequiredInstanceCount($succeededRebootRequiredInstanceCount)
  {
    $this->succeededRebootRequiredInstanceCount = $succeededRebootRequiredInstanceCount;
  }
  /** @return string */
  public function getSucceededRebootRequiredInstanceCount()
  {
    return $this->succeededRebootRequiredInstanceCount;
  }
  /** @param string */
  public function setTimedOutInstanceCount($timedOutInstanceCount)
  {
    $this->timedOutInstanceCount = $timedOutInstanceCount;
  }
  /** @return string */
  public function getTimedOutInstanceCount()
  {
    return $this->timedOutInstanceCount;
  }
}

class PatchRollout extends \Google\Model
{
  /** @var FixedOrPercent */
  public $disruptionBudget;
  /** @var string */
  public $mode;
  protected $disruptionBudgetType = FixedOrPercent::class;
  protected $disruptionBudgetDataType = '';
  /** @param FixedOrPercent */
  public function setDisruptionBudget(FixedOrPercent $disruptionBudget)
  {
    $this->disruptionBudget = $disruptionBudget;
  }
  /** @return FixedOrPercent */
  public function getDisruptionBudget()
  {
    return $this->disruptionBudget;
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
}

class PausePatchDeploymentRequest extends \Google\Model
{
}

class RecurringSchedule extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $frequency;
  /** @var string */
  public $lastExecuteTime;
  /** @var MonthlySchedule */
  public $monthly;
  /** @var string */
  public $nextExecuteTime;
  /** @var string */
  public $startTime;
  /** @var TimeOfDay */
  public $timeOfDay;
  /** @var TimeZone */
  public $timeZone;
  /** @var WeeklySchedule */
  public $weekly;
  protected $monthlyType = MonthlySchedule::class;
  protected $monthlyDataType = '';
  protected $timeOfDayType = TimeOfDay::class;
  protected $timeOfDayDataType = '';
  protected $timeZoneType = TimeZone::class;
  protected $timeZoneDataType = '';
  protected $weeklyType = WeeklySchedule::class;
  protected $weeklyDataType = '';
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
  public function setFrequency($frequency)
  {
    $this->frequency = $frequency;
  }
  /** @return string */
  public function getFrequency()
  {
    return $this->frequency;
  }
  /** @param string */
  public function setLastExecuteTime($lastExecuteTime)
  {
    $this->lastExecuteTime = $lastExecuteTime;
  }
  /** @return string */
  public function getLastExecuteTime()
  {
    return $this->lastExecuteTime;
  }
  /** @param MonthlySchedule */
  public function setMonthly(MonthlySchedule $monthly)
  {
    $this->monthly = $monthly;
  }
  /** @return MonthlySchedule */
  public function getMonthly()
  {
    return $this->monthly;
  }
  /** @param string */
  public function setNextExecuteTime($nextExecuteTime)
  {
    $this->nextExecuteTime = $nextExecuteTime;
  }
  /** @return string */
  public function getNextExecuteTime()
  {
    return $this->nextExecuteTime;
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
  /** @param TimeOfDay */
  public function setTimeOfDay(TimeOfDay $timeOfDay)
  {
    $this->timeOfDay = $timeOfDay;
  }
  /** @return TimeOfDay */
  public function getTimeOfDay()
  {
    return $this->timeOfDay;
  }
  /** @param TimeZone */
  public function setTimeZone(TimeZone $timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return TimeZone */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /** @param WeeklySchedule */
  public function setWeekly(WeeklySchedule $weekly)
  {
    $this->weekly = $weekly;
  }
  /** @return WeeklySchedule */
  public function getWeekly()
  {
    return $this->weekly;
  }
}

class ResumePatchDeploymentRequest extends \Google\Model
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

class TimeZone extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $version;

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

class VulnerabilityReport extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  /** @var VulnerabilityReportVulnerability[] */
  public $vulnerabilities;
  protected $collection_key = 'vulnerabilities';
  protected $vulnerabilitiesType = VulnerabilityReportVulnerability::class;
  protected $vulnerabilitiesDataType = 'array';
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
  /** @param VulnerabilityReportVulnerability[] */
  public function setVulnerabilities($vulnerabilities)
  {
    $this->vulnerabilities = $vulnerabilities;
  }
  /** @return VulnerabilityReportVulnerability[] */
  public function getVulnerabilities()
  {
    return $this->vulnerabilities;
  }
}

class VulnerabilityReportVulnerability extends \Google\Collection
{
  /** @var string[] */
  public $availableInventoryItemIds;
  /** @var string */
  public $createTime;
  /** @var VulnerabilityReportVulnerabilityDetails */
  public $details;
  /** @var string[] */
  public $installedInventoryItemIds;
  /** @var VulnerabilityReportVulnerabilityItem[] */
  public $items;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'items';
  protected $detailsType = VulnerabilityReportVulnerabilityDetails::class;
  protected $detailsDataType = '';
  protected $itemsType = VulnerabilityReportVulnerabilityItem::class;
  protected $itemsDataType = 'array';
  /** @param string[] */
  public function setAvailableInventoryItemIds($availableInventoryItemIds)
  {
    $this->availableInventoryItemIds = $availableInventoryItemIds;
  }
  /** @return string[] */
  public function getAvailableInventoryItemIds()
  {
    return $this->availableInventoryItemIds;
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
  /** @param VulnerabilityReportVulnerabilityDetails */
  public function setDetails(VulnerabilityReportVulnerabilityDetails $details)
  {
    $this->details = $details;
  }
  /** @return VulnerabilityReportVulnerabilityDetails */
  public function getDetails()
  {
    return $this->details;
  }
  /** @param string[] */
  public function setInstalledInventoryItemIds($installedInventoryItemIds)
  {
    $this->installedInventoryItemIds = $installedInventoryItemIds;
  }
  /** @return string[] */
  public function getInstalledInventoryItemIds()
  {
    return $this->installedInventoryItemIds;
  }
  /** @param VulnerabilityReportVulnerabilityItem[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return VulnerabilityReportVulnerabilityItem[] */
  public function getItems()
  {
    return $this->items;
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

class VulnerabilityReportVulnerabilityDetails extends \Google\Collection
{
  /** @var string */
  public $cve;
  /** @var float */
  public $cvssV2Score;
  /** @var CVSSv3 */
  public $cvssV3;
  /** @var string */
  public $description;
  /** @var VulnerabilityReportVulnerabilityDetailsReference[] */
  public $references;
  /** @var string */
  public $severity;
  protected $collection_key = 'references';
  protected $cvssV3Type = CVSSv3::class;
  protected $cvssV3DataType = '';
  protected $referencesType = VulnerabilityReportVulnerabilityDetailsReference::class;
  protected $referencesDataType = 'array';
  /** @param string */
  public function setCve($cve)
  {
    $this->cve = $cve;
  }
  /** @return string */
  public function getCve()
  {
    return $this->cve;
  }
  /** @param float */
  public function setCvssV2Score($cvssV2Score)
  {
    $this->cvssV2Score = $cvssV2Score;
  }
  /** @return float */
  public function getCvssV2Score()
  {
    return $this->cvssV2Score;
  }
  /** @param CVSSv3 */
  public function setCvssV3(CVSSv3 $cvssV3)
  {
    $this->cvssV3 = $cvssV3;
  }
  /** @return CVSSv3 */
  public function getCvssV3()
  {
    return $this->cvssV3;
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
  /** @param VulnerabilityReportVulnerabilityDetailsReference[] */
  public function setReferences($references)
  {
    $this->references = $references;
  }
  /** @return VulnerabilityReportVulnerabilityDetailsReference[] */
  public function getReferences()
  {
    return $this->references;
  }
  /** @param string */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
}

class VulnerabilityReportVulnerabilityDetailsReference extends \Google\Model
{
  /** @var string */
  public $source;
  /** @var string */
  public $url;

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

class VulnerabilityReportVulnerabilityItem extends \Google\Model
{
  /** @var string */
  public $availableInventoryItemId;
  /** @var string */
  public $fixedCpeUri;
  /** @var string */
  public $installedInventoryItemId;
  /** @var string */
  public $upstreamFix;

  /** @param string */
  public function setAvailableInventoryItemId($availableInventoryItemId)
  {
    $this->availableInventoryItemId = $availableInventoryItemId;
  }
  /** @return string */
  public function getAvailableInventoryItemId()
  {
    return $this->availableInventoryItemId;
  }
  /** @param string */
  public function setFixedCpeUri($fixedCpeUri)
  {
    $this->fixedCpeUri = $fixedCpeUri;
  }
  /** @return string */
  public function getFixedCpeUri()
  {
    return $this->fixedCpeUri;
  }
  /** @param string */
  public function setInstalledInventoryItemId($installedInventoryItemId)
  {
    $this->installedInventoryItemId = $installedInventoryItemId;
  }
  /** @return string */
  public function getInstalledInventoryItemId()
  {
    return $this->installedInventoryItemId;
  }
  /** @param string */
  public function setUpstreamFix($upstreamFix)
  {
    $this->upstreamFix = $upstreamFix;
  }
  /** @return string */
  public function getUpstreamFix()
  {
    return $this->upstreamFix;
  }
}

class WeekDayOfMonth extends \Google\Model
{
  /** @var string */
  public $dayOfWeek;
  /** @var int */
  public $dayOffset;
  /** @var int */
  public $weekOrdinal;

  /** @param string */
  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  /** @return string */
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
  /** @param int */
  public function setDayOffset($dayOffset)
  {
    $this->dayOffset = $dayOffset;
  }
  /** @return int */
  public function getDayOffset()
  {
    return $this->dayOffset;
  }
  /** @param int */
  public function setWeekOrdinal($weekOrdinal)
  {
    $this->weekOrdinal = $weekOrdinal;
  }
  /** @return int */
  public function getWeekOrdinal()
  {
    return $this->weekOrdinal;
  }
}

class WeeklySchedule extends \Google\Model
{
  /** @var string */
  public $dayOfWeek;

  /** @param string */
  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  /** @return string */
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
}

class WindowsUpdateSettings extends \Google\Collection
{
  /** @var string[] */
  public $classifications;
  /** @var string[] */
  public $excludes;
  /** @var string[] */
  public $exclusivePatches;
  protected $collection_key = 'exclusivePatches';
  /** @param string[] */
  public function setClassifications($classifications)
  {
    $this->classifications = $classifications;
  }
  /** @return string[] */
  public function getClassifications()
  {
    return $this->classifications;
  }
  /** @param string[] */
  public function setExcludes($excludes)
  {
    $this->excludes = $excludes;
  }
  /** @return string[] */
  public function getExcludes()
  {
    return $this->excludes;
  }
  /** @param string[] */
  public function setExclusivePatches($exclusivePatches)
  {
    $this->exclusivePatches = $exclusivePatches;
  }
  /** @return string[] */
  public function getExclusivePatches()
  {
    return $this->exclusivePatches;
  }
}

class YumSettings extends \Google\Collection
{
  /** @var string[] */
  public $excludes;
  /** @var string[] */
  public $exclusivePackages;
  /** @var bool */
  public $minimal;
  /** @var bool */
  public $security;
  protected $collection_key = 'exclusivePackages';
  /** @param string[] */
  public function setExcludes($excludes)
  {
    $this->excludes = $excludes;
  }
  /** @return string[] */
  public function getExcludes()
  {
    return $this->excludes;
  }
  /** @param string[] */
  public function setExclusivePackages($exclusivePackages)
  {
    $this->exclusivePackages = $exclusivePackages;
  }
  /** @return string[] */
  public function getExclusivePackages()
  {
    return $this->exclusivePackages;
  }
  /** @param bool */
  public function setMinimal($minimal)
  {
    $this->minimal = $minimal;
  }
  /** @return bool */
  public function getMinimal()
  {
    return $this->minimal;
  }
  /** @param bool */
  public function setSecurity($security)
  {
    $this->security = $security;
  }
  /** @return bool */
  public function getSecurity()
  {
    return $this->security;
  }
}

class ZypperSettings extends \Google\Collection
{
  /** @var string[] */
  public $categories;
  /** @var string[] */
  public $excludes;
  /** @var string[] */
  public $exclusivePatches;
  /** @var string[] */
  public $severities;
  /** @var bool */
  public $withOptional;
  /** @var bool */
  public $withUpdate;
  protected $collection_key = 'severities';
  /** @param string[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return string[] */
  public function getCategories()
  {
    return $this->categories;
  }
  /** @param string[] */
  public function setExcludes($excludes)
  {
    $this->excludes = $excludes;
  }
  /** @return string[] */
  public function getExcludes()
  {
    return $this->excludes;
  }
  /** @param string[] */
  public function setExclusivePatches($exclusivePatches)
  {
    $this->exclusivePatches = $exclusivePatches;
  }
  /** @return string[] */
  public function getExclusivePatches()
  {
    return $this->exclusivePatches;
  }
  /** @param string[] */
  public function setSeverities($severities)
  {
    $this->severities = $severities;
  }
  /** @return string[] */
  public function getSeverities()
  {
    return $this->severities;
  }
  /** @param bool */
  public function setWithOptional($withOptional)
  {
    $this->withOptional = $withOptional;
  }
  /** @return bool */
  public function getWithOptional()
  {
    return $this->withOptional;
  }
  /** @param bool */
  public function setWithUpdate($withUpdate)
  {
    $this->withUpdate = $withUpdate;
  }
  /** @return bool */
  public function getWithUpdate()
  {
    return $this->withUpdate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AptSettings::class, 'Google_Service_OSConfig_AptSettings');
class_alias(CVSSv3::class, 'Google_Service_OSConfig_CVSSv3');
class_alias(CancelOperationRequest::class, 'Google_Service_OSConfig_CancelOperationRequest');
class_alias(CancelPatchJobRequest::class, 'Google_Service_OSConfig_CancelPatchJobRequest');
class_alias(Date::class, 'Google_Service_OSConfig_Date');
class_alias(ExecStep::class, 'Google_Service_OSConfig_ExecStep');
class_alias(ExecStepConfig::class, 'Google_Service_OSConfig_ExecStepConfig');
class_alias(ExecutePatchJobRequest::class, 'Google_Service_OSConfig_ExecutePatchJobRequest');
class_alias(FixedOrPercent::class, 'Google_Service_OSConfig_FixedOrPercent');
class_alias(GcsObject::class, 'Google_Service_OSConfig_GcsObject');
class_alias(GooSettings::class, 'Google_Service_OSConfig_GooSettings');
class_alias(GoogleCloudOsconfigV1OSPolicyAssignmentOperationMetadata::class, 'Google_Service_OSConfig_GoogleCloudOsconfigV1OSPolicyAssignmentOperationMetadata');
class_alias(Inventory::class, 'Google_Service_OSConfig_Inventory');
class_alias(InventoryItem::class, 'Google_Service_OSConfig_InventoryItem');
class_alias(InventoryOsInfo::class, 'Google_Service_OSConfig_InventoryOsInfo');
class_alias(InventorySoftwarePackage::class, 'Google_Service_OSConfig_InventorySoftwarePackage');
class_alias(InventoryVersionedPackage::class, 'Google_Service_OSConfig_InventoryVersionedPackage');
class_alias(InventoryWindowsApplication::class, 'Google_Service_OSConfig_InventoryWindowsApplication');
class_alias(InventoryWindowsQuickFixEngineeringPackage::class, 'Google_Service_OSConfig_InventoryWindowsQuickFixEngineeringPackage');
class_alias(InventoryWindowsUpdatePackage::class, 'Google_Service_OSConfig_InventoryWindowsUpdatePackage');
class_alias(InventoryWindowsUpdatePackageWindowsUpdateCategory::class, 'Google_Service_OSConfig_InventoryWindowsUpdatePackageWindowsUpdateCategory');
class_alias(InventoryZypperPatch::class, 'Google_Service_OSConfig_InventoryZypperPatch');
class_alias(ListInventoriesResponse::class, 'Google_Service_OSConfig_ListInventoriesResponse');
class_alias(ListOSPolicyAssignmentReportsResponse::class, 'Google_Service_OSConfig_ListOSPolicyAssignmentReportsResponse');
class_alias(ListOSPolicyAssignmentRevisionsResponse::class, 'Google_Service_OSConfig_ListOSPolicyAssignmentRevisionsResponse');
class_alias(ListOSPolicyAssignmentsResponse::class, 'Google_Service_OSConfig_ListOSPolicyAssignmentsResponse');
class_alias(ListPatchDeploymentsResponse::class, 'Google_Service_OSConfig_ListPatchDeploymentsResponse');
class_alias(ListPatchJobInstanceDetailsResponse::class, 'Google_Service_OSConfig_ListPatchJobInstanceDetailsResponse');
class_alias(ListPatchJobsResponse::class, 'Google_Service_OSConfig_ListPatchJobsResponse');
class_alias(ListVulnerabilityReportsResponse::class, 'Google_Service_OSConfig_ListVulnerabilityReportsResponse');
class_alias(MonthlySchedule::class, 'Google_Service_OSConfig_MonthlySchedule');
class_alias(OSPolicy::class, 'Google_Service_OSConfig_OSPolicy');
class_alias(OSPolicyAssignment::class, 'Google_Service_OSConfig_OSPolicyAssignment');
class_alias(OSPolicyAssignmentInstanceFilter::class, 'Google_Service_OSConfig_OSPolicyAssignmentInstanceFilter');
class_alias(OSPolicyAssignmentInstanceFilterInventory::class, 'Google_Service_OSConfig_OSPolicyAssignmentInstanceFilterInventory');
class_alias(OSPolicyAssignmentLabelSet::class, 'Google_Service_OSConfig_OSPolicyAssignmentLabelSet');
class_alias(OSPolicyAssignmentOperationMetadata::class, 'Google_Service_OSConfig_OSPolicyAssignmentOperationMetadata');
class_alias(OSPolicyAssignmentReport::class, 'Google_Service_OSConfig_OSPolicyAssignmentReport');
class_alias(OSPolicyAssignmentReportOSPolicyCompliance::class, 'Google_Service_OSConfig_OSPolicyAssignmentReportOSPolicyCompliance');
class_alias(OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceCompliance::class, 'Google_Service_OSConfig_OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceCompliance');
class_alias(OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput::class, 'Google_Service_OSConfig_OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput');
class_alias(OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceOSPolicyResourceConfigStep::class, 'Google_Service_OSConfig_OSPolicyAssignmentReportOSPolicyComplianceOSPolicyResourceComplianceOSPolicyResourceConfigStep');
class_alias(OSPolicyAssignmentRollout::class, 'Google_Service_OSConfig_OSPolicyAssignmentRollout');
class_alias(OSPolicyInventoryFilter::class, 'Google_Service_OSConfig_OSPolicyInventoryFilter');
class_alias(OSPolicyResource::class, 'Google_Service_OSConfig_OSPolicyResource');
class_alias(OSPolicyResourceExecResource::class, 'Google_Service_OSConfig_OSPolicyResourceExecResource');
class_alias(OSPolicyResourceExecResourceExec::class, 'Google_Service_OSConfig_OSPolicyResourceExecResourceExec');
class_alias(OSPolicyResourceFile::class, 'Google_Service_OSConfig_OSPolicyResourceFile');
class_alias(OSPolicyResourceFileGcs::class, 'Google_Service_OSConfig_OSPolicyResourceFileGcs');
class_alias(OSPolicyResourceFileRemote::class, 'Google_Service_OSConfig_OSPolicyResourceFileRemote');
class_alias(OSPolicyResourceFileResource::class, 'Google_Service_OSConfig_OSPolicyResourceFileResource');
class_alias(OSPolicyResourceGroup::class, 'Google_Service_OSConfig_OSPolicyResourceGroup');
class_alias(OSPolicyResourcePackageResource::class, 'Google_Service_OSConfig_OSPolicyResourcePackageResource');
class_alias(OSPolicyResourcePackageResourceAPT::class, 'Google_Service_OSConfig_OSPolicyResourcePackageResourceAPT');
class_alias(OSPolicyResourcePackageResourceDeb::class, 'Google_Service_OSConfig_OSPolicyResourcePackageResourceDeb');
class_alias(OSPolicyResourcePackageResourceGooGet::class, 'Google_Service_OSConfig_OSPolicyResourcePackageResourceGooGet');
class_alias(OSPolicyResourcePackageResourceMSI::class, 'Google_Service_OSConfig_OSPolicyResourcePackageResourceMSI');
class_alias(OSPolicyResourcePackageResourceRPM::class, 'Google_Service_OSConfig_OSPolicyResourcePackageResourceRPM');
class_alias(OSPolicyResourcePackageResourceYUM::class, 'Google_Service_OSConfig_OSPolicyResourcePackageResourceYUM');
class_alias(OSPolicyResourcePackageResourceZypper::class, 'Google_Service_OSConfig_OSPolicyResourcePackageResourceZypper');
class_alias(OSPolicyResourceRepositoryResource::class, 'Google_Service_OSConfig_OSPolicyResourceRepositoryResource');
class_alias(OSPolicyResourceRepositoryResourceAptRepository::class, 'Google_Service_OSConfig_OSPolicyResourceRepositoryResourceAptRepository');
class_alias(OSPolicyResourceRepositoryResourceGooRepository::class, 'Google_Service_OSConfig_OSPolicyResourceRepositoryResourceGooRepository');
class_alias(OSPolicyResourceRepositoryResourceYumRepository::class, 'Google_Service_OSConfig_OSPolicyResourceRepositoryResourceYumRepository');
class_alias(OSPolicyResourceRepositoryResourceZypperRepository::class, 'Google_Service_OSConfig_OSPolicyResourceRepositoryResourceZypperRepository');
class_alias(OneTimeSchedule::class, 'Google_Service_OSConfig_OneTimeSchedule');
class_alias(Operation::class, 'Google_Service_OSConfig_Operation');
class_alias(OsconfigEmpty::class, 'Google_Service_OSConfig_OsconfigEmpty');
class_alias(PatchConfig::class, 'Google_Service_OSConfig_PatchConfig');
class_alias(PatchDeployment::class, 'Google_Service_OSConfig_PatchDeployment');
class_alias(PatchInstanceFilter::class, 'Google_Service_OSConfig_PatchInstanceFilter');
class_alias(PatchInstanceFilterGroupLabel::class, 'Google_Service_OSConfig_PatchInstanceFilterGroupLabel');
class_alias(PatchJob::class, 'Google_Service_OSConfig_PatchJob');
class_alias(PatchJobInstanceDetails::class, 'Google_Service_OSConfig_PatchJobInstanceDetails');
class_alias(PatchJobInstanceDetailsSummary::class, 'Google_Service_OSConfig_PatchJobInstanceDetailsSummary');
class_alias(PatchRollout::class, 'Google_Service_OSConfig_PatchRollout');
class_alias(PausePatchDeploymentRequest::class, 'Google_Service_OSConfig_PausePatchDeploymentRequest');
class_alias(RecurringSchedule::class, 'Google_Service_OSConfig_RecurringSchedule');
class_alias(ResumePatchDeploymentRequest::class, 'Google_Service_OSConfig_ResumePatchDeploymentRequest');
class_alias(Status::class, 'Google_Service_OSConfig_Status');
class_alias(TimeOfDay::class, 'Google_Service_OSConfig_TimeOfDay');
class_alias(TimeZone::class, 'Google_Service_OSConfig_TimeZone');
class_alias(VulnerabilityReport::class, 'Google_Service_OSConfig_VulnerabilityReport');
class_alias(VulnerabilityReportVulnerability::class, 'Google_Service_OSConfig_VulnerabilityReportVulnerability');
class_alias(VulnerabilityReportVulnerabilityDetails::class, 'Google_Service_OSConfig_VulnerabilityReportVulnerabilityDetails');
class_alias(VulnerabilityReportVulnerabilityDetailsReference::class, 'Google_Service_OSConfig_VulnerabilityReportVulnerabilityDetailsReference');
class_alias(VulnerabilityReportVulnerabilityItem::class, 'Google_Service_OSConfig_VulnerabilityReportVulnerabilityItem');
class_alias(WeekDayOfMonth::class, 'Google_Service_OSConfig_WeekDayOfMonth');
class_alias(WeeklySchedule::class, 'Google_Service_OSConfig_WeeklySchedule');
class_alias(WindowsUpdateSettings::class, 'Google_Service_OSConfig_WindowsUpdateSettings');
class_alias(YumSettings::class, 'Google_Service_OSConfig_YumSettings');
class_alias(ZypperSettings::class, 'Google_Service_OSConfig_ZypperSettings');
