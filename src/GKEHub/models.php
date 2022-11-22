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

namespace Google\Service\GKEHub;

class AppDevExperienceFeatureSpec extends \Google\Model
{
}

class AppDevExperienceFeatureState extends \Google\Model
{
  /** @var Status */
  public $networkingInstallSucceeded;
  protected $networkingInstallSucceededType = Status::class;
  protected $networkingInstallSucceededDataType = '';
  /** @param Status */
  public function setNetworkingInstallSucceeded(Status $networkingInstallSucceeded)
  {
    $this->networkingInstallSucceeded = $networkingInstallSucceeded;
  }
  /** @return Status */
  public function getNetworkingInstallSucceeded()
  {
    return $this->networkingInstallSucceeded;
  }
}

class ApplianceCluster extends \Google\Model
{
  /** @var string */
  public $resourceLink;

  /** @param string */
  public function setResourceLink($resourceLink)
  {
    $this->resourceLink = $resourceLink;
  }
  /** @return string */
  public function getResourceLink()
  {
    return $this->resourceLink;
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

class Authority extends \Google\Model
{
  /** @var string */
  public $identityProvider;
  /** @var string */
  public $issuer;
  /** @var string */
  public $oidcJwks;
  /** @var string */
  public $workloadIdentityPool;

  /** @param string */
  public function setIdentityProvider($identityProvider)
  {
    $this->identityProvider = $identityProvider;
  }
  /** @return string */
  public function getIdentityProvider()
  {
    return $this->identityProvider;
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
  public function setOidcJwks($oidcJwks)
  {
    $this->oidcJwks = $oidcJwks;
  }
  /** @return string */
  public function getOidcJwks()
  {
    return $this->oidcJwks;
  }
  /** @param string */
  public function setWorkloadIdentityPool($workloadIdentityPool)
  {
    $this->workloadIdentityPool = $workloadIdentityPool;
  }
  /** @return string */
  public function getWorkloadIdentityPool()
  {
    return $this->workloadIdentityPool;
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

class CancelOperationRequest extends \Google\Model
{
}

class CommonFeatureSpec extends \Google\Model
{
  /** @var AppDevExperienceFeatureSpec */
  public $appdevexperience;
  /** @var FleetObservabilityFeatureSpec */
  public $fleetobservability;
  /** @var MultiClusterIngressFeatureSpec */
  public $multiclusteringress;
  protected $appdevexperienceType = AppDevExperienceFeatureSpec::class;
  protected $appdevexperienceDataType = '';
  protected $fleetobservabilityType = FleetObservabilityFeatureSpec::class;
  protected $fleetobservabilityDataType = '';
  protected $multiclusteringressType = MultiClusterIngressFeatureSpec::class;
  protected $multiclusteringressDataType = '';
  /** @param AppDevExperienceFeatureSpec */
  public function setAppdevexperience(AppDevExperienceFeatureSpec $appdevexperience)
  {
    $this->appdevexperience = $appdevexperience;
  }
  /** @return AppDevExperienceFeatureSpec */
  public function getAppdevexperience()
  {
    return $this->appdevexperience;
  }
  /** @param FleetObservabilityFeatureSpec */
  public function setFleetobservability(FleetObservabilityFeatureSpec $fleetobservability)
  {
    $this->fleetobservability = $fleetobservability;
  }
  /** @return FleetObservabilityFeatureSpec */
  public function getFleetobservability()
  {
    return $this->fleetobservability;
  }
  /** @param MultiClusterIngressFeatureSpec */
  public function setMulticlusteringress(MultiClusterIngressFeatureSpec $multiclusteringress)
  {
    $this->multiclusteringress = $multiclusteringress;
  }
  /** @return MultiClusterIngressFeatureSpec */
  public function getMulticlusteringress()
  {
    return $this->multiclusteringress;
  }
}

class CommonFeatureState extends \Google\Model
{
  /** @var AppDevExperienceFeatureState */
  public $appdevexperience;
  /** @var FleetObservabilityFeatureState */
  public $fleetobservability;
  /** @var FeatureState */
  public $state;
  protected $appdevexperienceType = AppDevExperienceFeatureState::class;
  protected $appdevexperienceDataType = '';
  protected $fleetobservabilityType = FleetObservabilityFeatureState::class;
  protected $fleetobservabilityDataType = '';
  protected $stateType = FeatureState::class;
  protected $stateDataType = '';
  /** @param AppDevExperienceFeatureState */
  public function setAppdevexperience(AppDevExperienceFeatureState $appdevexperience)
  {
    $this->appdevexperience = $appdevexperience;
  }
  /** @return AppDevExperienceFeatureState */
  public function getAppdevexperience()
  {
    return $this->appdevexperience;
  }
  /** @param FleetObservabilityFeatureState */
  public function setFleetobservability(FleetObservabilityFeatureState $fleetobservability)
  {
    $this->fleetobservability = $fleetobservability;
  }
  /** @return FleetObservabilityFeatureState */
  public function getFleetobservability()
  {
    return $this->fleetobservability;
  }
  /** @param FeatureState */
  public function setState(FeatureState $state)
  {
    $this->state = $state;
  }
  /** @return FeatureState */
  public function getState()
  {
    return $this->state;
  }
}

class ConfigManagementConfigSync extends \Google\Model
{
  /** @var bool */
  public $allowVerticalScale;
  /** @var bool */
  public $enabled;
  /** @var ConfigManagementGitConfig */
  public $git;
  /** @var ConfigManagementOciConfig */
  public $oci;
  /** @var bool */
  public $preventDrift;
  /** @var string */
  public $sourceFormat;
  protected $gitType = ConfigManagementGitConfig::class;
  protected $gitDataType = '';
  protected $ociType = ConfigManagementOciConfig::class;
  protected $ociDataType = '';
  /** @param bool */
  public function setAllowVerticalScale($allowVerticalScale)
  {
    $this->allowVerticalScale = $allowVerticalScale;
  }
  /** @return bool */
  public function getAllowVerticalScale()
  {
    return $this->allowVerticalScale;
  }
  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /** @param ConfigManagementGitConfig */
  public function setGit(ConfigManagementGitConfig $git)
  {
    $this->git = $git;
  }
  /** @return ConfigManagementGitConfig */
  public function getGit()
  {
    return $this->git;
  }
  /** @param ConfigManagementOciConfig */
  public function setOci(ConfigManagementOciConfig $oci)
  {
    $this->oci = $oci;
  }
  /** @return ConfigManagementOciConfig */
  public function getOci()
  {
    return $this->oci;
  }
  /** @param bool */
  public function setPreventDrift($preventDrift)
  {
    $this->preventDrift = $preventDrift;
  }
  /** @return bool */
  public function getPreventDrift()
  {
    return $this->preventDrift;
  }
  /** @param string */
  public function setSourceFormat($sourceFormat)
  {
    $this->sourceFormat = $sourceFormat;
  }
  /** @return string */
  public function getSourceFormat()
  {
    return $this->sourceFormat;
  }
}

class ConfigManagementConfigSyncDeploymentState extends \Google\Model
{
  /** @var string */
  public $admissionWebhook;
  /** @var string */
  public $gitSync;
  /** @var string */
  public $importer;
  /** @var string */
  public $monitor;
  /** @var string */
  public $reconcilerManager;
  /** @var string */
  public $rootReconciler;
  /** @var string */
  public $syncer;

  /** @param string */
  public function setAdmissionWebhook($admissionWebhook)
  {
    $this->admissionWebhook = $admissionWebhook;
  }
  /** @return string */
  public function getAdmissionWebhook()
  {
    return $this->admissionWebhook;
  }
  /** @param string */
  public function setGitSync($gitSync)
  {
    $this->gitSync = $gitSync;
  }
  /** @return string */
  public function getGitSync()
  {
    return $this->gitSync;
  }
  /** @param string */
  public function setImporter($importer)
  {
    $this->importer = $importer;
  }
  /** @return string */
  public function getImporter()
  {
    return $this->importer;
  }
  /** @param string */
  public function setMonitor($monitor)
  {
    $this->monitor = $monitor;
  }
  /** @return string */
  public function getMonitor()
  {
    return $this->monitor;
  }
  /** @param string */
  public function setReconcilerManager($reconcilerManager)
  {
    $this->reconcilerManager = $reconcilerManager;
  }
  /** @return string */
  public function getReconcilerManager()
  {
    return $this->reconcilerManager;
  }
  /** @param string */
  public function setRootReconciler($rootReconciler)
  {
    $this->rootReconciler = $rootReconciler;
  }
  /** @return string */
  public function getRootReconciler()
  {
    return $this->rootReconciler;
  }
  /** @param string */
  public function setSyncer($syncer)
  {
    $this->syncer = $syncer;
  }
  /** @return string */
  public function getSyncer()
  {
    return $this->syncer;
  }
}

class ConfigManagementConfigSyncState extends \Google\Model
{
  /** @var ConfigManagementConfigSyncDeploymentState */
  public $deploymentState;
  /** @var ConfigManagementSyncState */
  public $syncState;
  /** @var ConfigManagementConfigSyncVersion */
  public $version;
  protected $deploymentStateType = ConfigManagementConfigSyncDeploymentState::class;
  protected $deploymentStateDataType = '';
  protected $syncStateType = ConfigManagementSyncState::class;
  protected $syncStateDataType = '';
  protected $versionType = ConfigManagementConfigSyncVersion::class;
  protected $versionDataType = '';
  /** @param ConfigManagementConfigSyncDeploymentState */
  public function setDeploymentState(ConfigManagementConfigSyncDeploymentState $deploymentState)
  {
    $this->deploymentState = $deploymentState;
  }
  /** @return ConfigManagementConfigSyncDeploymentState */
  public function getDeploymentState()
  {
    return $this->deploymentState;
  }
  /** @param ConfigManagementSyncState */
  public function setSyncState(ConfigManagementSyncState $syncState)
  {
    $this->syncState = $syncState;
  }
  /** @return ConfigManagementSyncState */
  public function getSyncState()
  {
    return $this->syncState;
  }
  /** @param ConfigManagementConfigSyncVersion */
  public function setVersion(ConfigManagementConfigSyncVersion $version)
  {
    $this->version = $version;
  }
  /** @return ConfigManagementConfigSyncVersion */
  public function getVersion()
  {
    return $this->version;
  }
}

class ConfigManagementConfigSyncVersion extends \Google\Model
{
  /** @var string */
  public $admissionWebhook;
  /** @var string */
  public $gitSync;
  /** @var string */
  public $importer;
  /** @var string */
  public $monitor;
  /** @var string */
  public $reconcilerManager;
  /** @var string */
  public $rootReconciler;
  /** @var string */
  public $syncer;

  /** @param string */
  public function setAdmissionWebhook($admissionWebhook)
  {
    $this->admissionWebhook = $admissionWebhook;
  }
  /** @return string */
  public function getAdmissionWebhook()
  {
    return $this->admissionWebhook;
  }
  /** @param string */
  public function setGitSync($gitSync)
  {
    $this->gitSync = $gitSync;
  }
  /** @return string */
  public function getGitSync()
  {
    return $this->gitSync;
  }
  /** @param string */
  public function setImporter($importer)
  {
    $this->importer = $importer;
  }
  /** @return string */
  public function getImporter()
  {
    return $this->importer;
  }
  /** @param string */
  public function setMonitor($monitor)
  {
    $this->monitor = $monitor;
  }
  /** @return string */
  public function getMonitor()
  {
    return $this->monitor;
  }
  /** @param string */
  public function setReconcilerManager($reconcilerManager)
  {
    $this->reconcilerManager = $reconcilerManager;
  }
  /** @return string */
  public function getReconcilerManager()
  {
    return $this->reconcilerManager;
  }
  /** @param string */
  public function setRootReconciler($rootReconciler)
  {
    $this->rootReconciler = $rootReconciler;
  }
  /** @return string */
  public function getRootReconciler()
  {
    return $this->rootReconciler;
  }
  /** @param string */
  public function setSyncer($syncer)
  {
    $this->syncer = $syncer;
  }
  /** @return string */
  public function getSyncer()
  {
    return $this->syncer;
  }
}

class ConfigManagementErrorResource extends \Google\Model
{
  /** @var ConfigManagementGroupVersionKind */
  public $resourceGvk;
  /** @var string */
  public $resourceName;
  /** @var string */
  public $resourceNamespace;
  /** @var string */
  public $sourcePath;
  protected $resourceGvkType = ConfigManagementGroupVersionKind::class;
  protected $resourceGvkDataType = '';
  /** @param ConfigManagementGroupVersionKind */
  public function setResourceGvk(ConfigManagementGroupVersionKind $resourceGvk)
  {
    $this->resourceGvk = $resourceGvk;
  }
  /** @return ConfigManagementGroupVersionKind */
  public function getResourceGvk()
  {
    return $this->resourceGvk;
  }
  /** @param string */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /** @param string */
  public function setResourceNamespace($resourceNamespace)
  {
    $this->resourceNamespace = $resourceNamespace;
  }
  /** @return string */
  public function getResourceNamespace()
  {
    return $this->resourceNamespace;
  }
  /** @param string */
  public function setSourcePath($sourcePath)
  {
    $this->sourcePath = $sourcePath;
  }
  /** @return string */
  public function getSourcePath()
  {
    return $this->sourcePath;
  }
}

class ConfigManagementGatekeeperDeploymentState extends \Google\Model
{
  /** @var string */
  public $gatekeeperAudit;
  /** @var string */
  public $gatekeeperControllerManagerState;
  /** @var string */
  public $gatekeeperMutation;

  /** @param string */
  public function setGatekeeperAudit($gatekeeperAudit)
  {
    $this->gatekeeperAudit = $gatekeeperAudit;
  }
  /** @return string */
  public function getGatekeeperAudit()
  {
    return $this->gatekeeperAudit;
  }
  /** @param string */
  public function setGatekeeperControllerManagerState($gatekeeperControllerManagerState)
  {
    $this->gatekeeperControllerManagerState = $gatekeeperControllerManagerState;
  }
  /** @return string */
  public function getGatekeeperControllerManagerState()
  {
    return $this->gatekeeperControllerManagerState;
  }
  /** @param string */
  public function setGatekeeperMutation($gatekeeperMutation)
  {
    $this->gatekeeperMutation = $gatekeeperMutation;
  }
  /** @return string */
  public function getGatekeeperMutation()
  {
    return $this->gatekeeperMutation;
  }
}

class ConfigManagementGitConfig extends \Google\Model
{
  /** @var string */
  public $gcpServiceAccountEmail;
  /** @var string */
  public $httpsProxy;
  /** @var string */
  public $policyDir;
  /** @var string */
  public $secretType;
  /** @var string */
  public $syncBranch;
  /** @var string */
  public $syncRepo;
  /** @var string */
  public $syncRev;
  /** @var string */
  public $syncWaitSecs;

  /** @param string */
  public function setGcpServiceAccountEmail($gcpServiceAccountEmail)
  {
    $this->gcpServiceAccountEmail = $gcpServiceAccountEmail;
  }
  /** @return string */
  public function getGcpServiceAccountEmail()
  {
    return $this->gcpServiceAccountEmail;
  }
  /** @param string */
  public function setHttpsProxy($httpsProxy)
  {
    $this->httpsProxy = $httpsProxy;
  }
  /** @return string */
  public function getHttpsProxy()
  {
    return $this->httpsProxy;
  }
  /** @param string */
  public function setPolicyDir($policyDir)
  {
    $this->policyDir = $policyDir;
  }
  /** @return string */
  public function getPolicyDir()
  {
    return $this->policyDir;
  }
  /** @param string */
  public function setSecretType($secretType)
  {
    $this->secretType = $secretType;
  }
  /** @return string */
  public function getSecretType()
  {
    return $this->secretType;
  }
  /** @param string */
  public function setSyncBranch($syncBranch)
  {
    $this->syncBranch = $syncBranch;
  }
  /** @return string */
  public function getSyncBranch()
  {
    return $this->syncBranch;
  }
  /** @param string */
  public function setSyncRepo($syncRepo)
  {
    $this->syncRepo = $syncRepo;
  }
  /** @return string */
  public function getSyncRepo()
  {
    return $this->syncRepo;
  }
  /** @param string */
  public function setSyncRev($syncRev)
  {
    $this->syncRev = $syncRev;
  }
  /** @return string */
  public function getSyncRev()
  {
    return $this->syncRev;
  }
  /** @param string */
  public function setSyncWaitSecs($syncWaitSecs)
  {
    $this->syncWaitSecs = $syncWaitSecs;
  }
  /** @return string */
  public function getSyncWaitSecs()
  {
    return $this->syncWaitSecs;
  }
}

class ConfigManagementGroupVersionKind extends \Google\Model
{
  /** @var string */
  public $group;
  /** @var string */
  public $kind;
  /** @var string */
  public $version;

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

class ConfigManagementHierarchyControllerConfig extends \Google\Model
{
  /** @var bool */
  public $enableHierarchicalResourceQuota;
  /** @var bool */
  public $enablePodTreeLabels;
  /** @var bool */
  public $enabled;

  /** @param bool */
  public function setEnableHierarchicalResourceQuota($enableHierarchicalResourceQuota)
  {
    $this->enableHierarchicalResourceQuota = $enableHierarchicalResourceQuota;
  }
  /** @return bool */
  public function getEnableHierarchicalResourceQuota()
  {
    return $this->enableHierarchicalResourceQuota;
  }
  /** @param bool */
  public function setEnablePodTreeLabels($enablePodTreeLabels)
  {
    $this->enablePodTreeLabels = $enablePodTreeLabels;
  }
  /** @return bool */
  public function getEnablePodTreeLabels()
  {
    return $this->enablePodTreeLabels;
  }
  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
  }
}

class ConfigManagementHierarchyControllerDeploymentState extends \Google\Model
{
  /** @var string */
  public $extension;
  /** @var string */
  public $hnc;

  /** @param string */
  public function setExtension($extension)
  {
    $this->extension = $extension;
  }
  /** @return string */
  public function getExtension()
  {
    return $this->extension;
  }
  /** @param string */
  public function setHnc($hnc)
  {
    $this->hnc = $hnc;
  }
  /** @return string */
  public function getHnc()
  {
    return $this->hnc;
  }
}

class ConfigManagementHierarchyControllerState extends \Google\Model
{
  /** @var ConfigManagementHierarchyControllerDeploymentState */
  public $state;
  /** @var ConfigManagementHierarchyControllerVersion */
  public $version;
  protected $stateType = ConfigManagementHierarchyControllerDeploymentState::class;
  protected $stateDataType = '';
  protected $versionType = ConfigManagementHierarchyControllerVersion::class;
  protected $versionDataType = '';
  /** @param ConfigManagementHierarchyControllerDeploymentState */
  public function setState(ConfigManagementHierarchyControllerDeploymentState $state)
  {
    $this->state = $state;
  }
  /** @return ConfigManagementHierarchyControllerDeploymentState */
  public function getState()
  {
    return $this->state;
  }
  /** @param ConfigManagementHierarchyControllerVersion */
  public function setVersion(ConfigManagementHierarchyControllerVersion $version)
  {
    $this->version = $version;
  }
  /** @return ConfigManagementHierarchyControllerVersion */
  public function getVersion()
  {
    return $this->version;
  }
}

class ConfigManagementHierarchyControllerVersion extends \Google\Model
{
  /** @var string */
  public $extension;
  /** @var string */
  public $hnc;

  /** @param string */
  public function setExtension($extension)
  {
    $this->extension = $extension;
  }
  /** @return string */
  public function getExtension()
  {
    return $this->extension;
  }
  /** @param string */
  public function setHnc($hnc)
  {
    $this->hnc = $hnc;
  }
  /** @return string */
  public function getHnc()
  {
    return $this->hnc;
  }
}

class ConfigManagementInstallError extends \Google\Model
{
  /** @var string */
  public $errorMessage;

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
}

class ConfigManagementMembershipSpec extends \Google\Model
{
  /** @var ConfigManagementConfigSync */
  public $configSync;
  /** @var ConfigManagementHierarchyControllerConfig */
  public $hierarchyController;
  /** @var ConfigManagementPolicyController */
  public $policyController;
  /** @var string */
  public $version;
  protected $configSyncType = ConfigManagementConfigSync::class;
  protected $configSyncDataType = '';
  protected $hierarchyControllerType = ConfigManagementHierarchyControllerConfig::class;
  protected $hierarchyControllerDataType = '';
  protected $policyControllerType = ConfigManagementPolicyController::class;
  protected $policyControllerDataType = '';
  /** @param ConfigManagementConfigSync */
  public function setConfigSync(ConfigManagementConfigSync $configSync)
  {
    $this->configSync = $configSync;
  }
  /** @return ConfigManagementConfigSync */
  public function getConfigSync()
  {
    return $this->configSync;
  }
  /** @param ConfigManagementHierarchyControllerConfig */
  public function setHierarchyController(ConfigManagementHierarchyControllerConfig $hierarchyController)
  {
    $this->hierarchyController = $hierarchyController;
  }
  /** @return ConfigManagementHierarchyControllerConfig */
  public function getHierarchyController()
  {
    return $this->hierarchyController;
  }
  /** @param ConfigManagementPolicyController */
  public function setPolicyController(ConfigManagementPolicyController $policyController)
  {
    $this->policyController = $policyController;
  }
  /** @return ConfigManagementPolicyController */
  public function getPolicyController()
  {
    return $this->policyController;
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

class ConfigManagementMembershipState extends \Google\Model
{
  /** @var string */
  public $clusterName;
  /** @var ConfigManagementConfigSyncState */
  public $configSyncState;
  /** @var ConfigManagementHierarchyControllerState */
  public $hierarchyControllerState;
  /** @var ConfigManagementMembershipSpec */
  public $membershipSpec;
  /** @var ConfigManagementOperatorState */
  public $operatorState;
  /** @var ConfigManagementPolicyControllerState */
  public $policyControllerState;
  protected $configSyncStateType = ConfigManagementConfigSyncState::class;
  protected $configSyncStateDataType = '';
  protected $hierarchyControllerStateType = ConfigManagementHierarchyControllerState::class;
  protected $hierarchyControllerStateDataType = '';
  protected $membershipSpecType = ConfigManagementMembershipSpec::class;
  protected $membershipSpecDataType = '';
  protected $operatorStateType = ConfigManagementOperatorState::class;
  protected $operatorStateDataType = '';
  protected $policyControllerStateType = ConfigManagementPolicyControllerState::class;
  protected $policyControllerStateDataType = '';
  /** @param string */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /** @return string */
  public function getClusterName()
  {
    return $this->clusterName;
  }
  /** @param ConfigManagementConfigSyncState */
  public function setConfigSyncState(ConfigManagementConfigSyncState $configSyncState)
  {
    $this->configSyncState = $configSyncState;
  }
  /** @return ConfigManagementConfigSyncState */
  public function getConfigSyncState()
  {
    return $this->configSyncState;
  }
  /** @param ConfigManagementHierarchyControllerState */
  public function setHierarchyControllerState(ConfigManagementHierarchyControllerState $hierarchyControllerState)
  {
    $this->hierarchyControllerState = $hierarchyControllerState;
  }
  /** @return ConfigManagementHierarchyControllerState */
  public function getHierarchyControllerState()
  {
    return $this->hierarchyControllerState;
  }
  /** @param ConfigManagementMembershipSpec */
  public function setMembershipSpec(ConfigManagementMembershipSpec $membershipSpec)
  {
    $this->membershipSpec = $membershipSpec;
  }
  /** @return ConfigManagementMembershipSpec */
  public function getMembershipSpec()
  {
    return $this->membershipSpec;
  }
  /** @param ConfigManagementOperatorState */
  public function setOperatorState(ConfigManagementOperatorState $operatorState)
  {
    $this->operatorState = $operatorState;
  }
  /** @return ConfigManagementOperatorState */
  public function getOperatorState()
  {
    return $this->operatorState;
  }
  /** @param ConfigManagementPolicyControllerState */
  public function setPolicyControllerState(ConfigManagementPolicyControllerState $policyControllerState)
  {
    $this->policyControllerState = $policyControllerState;
  }
  /** @return ConfigManagementPolicyControllerState */
  public function getPolicyControllerState()
  {
    return $this->policyControllerState;
  }
}

class ConfigManagementOciConfig extends \Google\Model
{
  /** @var string */
  public $gcpServiceAccountEmail;
  /** @var string */
  public $policyDir;
  /** @var string */
  public $secretType;
  /** @var string */
  public $syncRepo;
  /** @var string */
  public $syncWaitSecs;

  /** @param string */
  public function setGcpServiceAccountEmail($gcpServiceAccountEmail)
  {
    $this->gcpServiceAccountEmail = $gcpServiceAccountEmail;
  }
  /** @return string */
  public function getGcpServiceAccountEmail()
  {
    return $this->gcpServiceAccountEmail;
  }
  /** @param string */
  public function setPolicyDir($policyDir)
  {
    $this->policyDir = $policyDir;
  }
  /** @return string */
  public function getPolicyDir()
  {
    return $this->policyDir;
  }
  /** @param string */
  public function setSecretType($secretType)
  {
    $this->secretType = $secretType;
  }
  /** @return string */
  public function getSecretType()
  {
    return $this->secretType;
  }
  /** @param string */
  public function setSyncRepo($syncRepo)
  {
    $this->syncRepo = $syncRepo;
  }
  /** @return string */
  public function getSyncRepo()
  {
    return $this->syncRepo;
  }
  /** @param string */
  public function setSyncWaitSecs($syncWaitSecs)
  {
    $this->syncWaitSecs = $syncWaitSecs;
  }
  /** @return string */
  public function getSyncWaitSecs()
  {
    return $this->syncWaitSecs;
  }
}

class ConfigManagementOperatorState extends \Google\Collection
{
  /** @var string */
  public $deploymentState;
  /** @var ConfigManagementInstallError[] */
  public $errors;
  /** @var string */
  public $version;
  protected $collection_key = 'errors';
  protected $errorsType = ConfigManagementInstallError::class;
  protected $errorsDataType = 'array';
  /** @param string */
  public function setDeploymentState($deploymentState)
  {
    $this->deploymentState = $deploymentState;
  }
  /** @return string */
  public function getDeploymentState()
  {
    return $this->deploymentState;
  }
  /** @param ConfigManagementInstallError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ConfigManagementInstallError[] */
  public function getErrors()
  {
    return $this->errors;
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

class ConfigManagementPolicyController extends \Google\Collection
{
  /** @var string */
  public $auditIntervalSeconds;
  /** @var bool */
  public $enabled;
  /** @var string[] */
  public $exemptableNamespaces;
  /** @var bool */
  public $logDeniesEnabled;
  /** @var ConfigManagementPolicyControllerMonitoring */
  public $monitoring;
  /** @var bool */
  public $mutationEnabled;
  /** @var bool */
  public $referentialRulesEnabled;
  /** @var bool */
  public $templateLibraryInstalled;
  protected $collection_key = 'exemptableNamespaces';
  protected $monitoringType = ConfigManagementPolicyControllerMonitoring::class;
  protected $monitoringDataType = '';
  /** @param string */
  public function setAuditIntervalSeconds($auditIntervalSeconds)
  {
    $this->auditIntervalSeconds = $auditIntervalSeconds;
  }
  /** @return string */
  public function getAuditIntervalSeconds()
  {
    return $this->auditIntervalSeconds;
  }
  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /** @param string[] */
  public function setExemptableNamespaces($exemptableNamespaces)
  {
    $this->exemptableNamespaces = $exemptableNamespaces;
  }
  /** @return string[] */
  public function getExemptableNamespaces()
  {
    return $this->exemptableNamespaces;
  }
  /** @param bool */
  public function setLogDeniesEnabled($logDeniesEnabled)
  {
    $this->logDeniesEnabled = $logDeniesEnabled;
  }
  /** @return bool */
  public function getLogDeniesEnabled()
  {
    return $this->logDeniesEnabled;
  }
  /** @param ConfigManagementPolicyControllerMonitoring */
  public function setMonitoring(ConfigManagementPolicyControllerMonitoring $monitoring)
  {
    $this->monitoring = $monitoring;
  }
  /** @return ConfigManagementPolicyControllerMonitoring */
  public function getMonitoring()
  {
    return $this->monitoring;
  }
  /** @param bool */
  public function setMutationEnabled($mutationEnabled)
  {
    $this->mutationEnabled = $mutationEnabled;
  }
  /** @return bool */
  public function getMutationEnabled()
  {
    return $this->mutationEnabled;
  }
  /** @param bool */
  public function setReferentialRulesEnabled($referentialRulesEnabled)
  {
    $this->referentialRulesEnabled = $referentialRulesEnabled;
  }
  /** @return bool */
  public function getReferentialRulesEnabled()
  {
    return $this->referentialRulesEnabled;
  }
  /** @param bool */
  public function setTemplateLibraryInstalled($templateLibraryInstalled)
  {
    $this->templateLibraryInstalled = $templateLibraryInstalled;
  }
  /** @return bool */
  public function getTemplateLibraryInstalled()
  {
    return $this->templateLibraryInstalled;
  }
}

class ConfigManagementPolicyControllerMonitoring extends \Google\Collection
{
  /** @var string[] */
  public $backends;
  protected $collection_key = 'backends';
  /** @param string[] */
  public function setBackends($backends)
  {
    $this->backends = $backends;
  }
  /** @return string[] */
  public function getBackends()
  {
    return $this->backends;
  }
}

class ConfigManagementPolicyControllerState extends \Google\Model
{
  /** @var ConfigManagementGatekeeperDeploymentState */
  public $deploymentState;
  /** @var ConfigManagementPolicyControllerVersion */
  public $version;
  protected $deploymentStateType = ConfigManagementGatekeeperDeploymentState::class;
  protected $deploymentStateDataType = '';
  protected $versionType = ConfigManagementPolicyControllerVersion::class;
  protected $versionDataType = '';
  /** @param ConfigManagementGatekeeperDeploymentState */
  public function setDeploymentState(ConfigManagementGatekeeperDeploymentState $deploymentState)
  {
    $this->deploymentState = $deploymentState;
  }
  /** @return ConfigManagementGatekeeperDeploymentState */
  public function getDeploymentState()
  {
    return $this->deploymentState;
  }
  /** @param ConfigManagementPolicyControllerVersion */
  public function setVersion(ConfigManagementPolicyControllerVersion $version)
  {
    $this->version = $version;
  }
  /** @return ConfigManagementPolicyControllerVersion */
  public function getVersion()
  {
    return $this->version;
  }
}

class ConfigManagementPolicyControllerVersion extends \Google\Model
{
  /** @var string */
  public $version;

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

class ConfigManagementSyncError extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var string */
  public $errorMessage;
  /** @var ConfigManagementErrorResource[] */
  public $errorResources;
  protected $collection_key = 'errorResources';
  protected $errorResourcesType = ConfigManagementErrorResource::class;
  protected $errorResourcesDataType = 'array';
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
  /** @param ConfigManagementErrorResource[] */
  public function setErrorResources($errorResources)
  {
    $this->errorResources = $errorResources;
  }
  /** @return ConfigManagementErrorResource[] */
  public function getErrorResources()
  {
    return $this->errorResources;
  }
}

class ConfigManagementSyncState extends \Google\Collection
{
  /** @var string */
  public $code;
  /** @var ConfigManagementSyncError[] */
  public $errors;
  /** @var string */
  public $importToken;
  /** @var string */
  public $lastSync;
  /** @var string */
  public $lastSyncTime;
  /** @var string */
  public $sourceToken;
  /** @var string */
  public $syncToken;
  protected $collection_key = 'errors';
  protected $errorsType = ConfigManagementSyncError::class;
  protected $errorsDataType = 'array';
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
  /** @param ConfigManagementSyncError[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ConfigManagementSyncError[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param string */
  public function setImportToken($importToken)
  {
    $this->importToken = $importToken;
  }
  /** @return string */
  public function getImportToken()
  {
    return $this->importToken;
  }
  /** @param string */
  public function setLastSync($lastSync)
  {
    $this->lastSync = $lastSync;
  }
  /** @return string */
  public function getLastSync()
  {
    return $this->lastSync;
  }
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
  /** @param string */
  public function setSourceToken($sourceToken)
  {
    $this->sourceToken = $sourceToken;
  }
  /** @return string */
  public function getSourceToken()
  {
    return $this->sourceToken;
  }
  /** @param string */
  public function setSyncToken($syncToken)
  {
    $this->syncToken = $syncToken;
  }
  /** @return string */
  public function getSyncToken()
  {
    return $this->syncToken;
  }
}

class ConnectAgentResource extends \Google\Model
{
  /** @var string */
  public $manifest;
  /** @var TypeMeta */
  public $type;
  protected $typeType = TypeMeta::class;
  protected $typeDataType = '';
  /** @param string */
  public function setManifest($manifest)
  {
    $this->manifest = $manifest;
  }
  /** @return string */
  public function getManifest()
  {
    return $this->manifest;
  }
  /** @param TypeMeta */
  public function setType(TypeMeta $type)
  {
    $this->type = $type;
  }
  /** @return TypeMeta */
  public function getType()
  {
    return $this->type;
  }
}

class EdgeCluster extends \Google\Model
{
  /** @var string */
  public $resourceLink;

  /** @param string */
  public function setResourceLink($resourceLink)
  {
    $this->resourceLink = $resourceLink;
  }
  /** @return string */
  public function getResourceLink()
  {
    return $this->resourceLink;
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

class Feature extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string[] */
  public $labels;
  /** @var MembershipFeatureSpec[] */
  public $membershipSpecs;
  /** @var MembershipFeatureState[] */
  public $membershipStates;
  /** @var string */
  public $name;
  /** @var FeatureResourceState */
  public $resourceState;
  /** @var ScopeFeatureSpec[] */
  public $scopeSpecs;
  /** @var ScopeFeatureState[] */
  public $scopeStates;
  /** @var CommonFeatureSpec */
  public $spec;
  /** @var CommonFeatureState */
  public $state;
  /** @var string */
  public $updateTime;
  protected $membershipSpecsType = MembershipFeatureSpec::class;
  protected $membershipSpecsDataType = 'map';
  protected $membershipStatesType = MembershipFeatureState::class;
  protected $membershipStatesDataType = 'map';
  protected $resourceStateType = FeatureResourceState::class;
  protected $resourceStateDataType = '';
  protected $scopeSpecsType = ScopeFeatureSpec::class;
  protected $scopeSpecsDataType = 'map';
  protected $scopeStatesType = ScopeFeatureState::class;
  protected $scopeStatesDataType = 'map';
  protected $specType = CommonFeatureSpec::class;
  protected $specDataType = '';
  protected $stateType = CommonFeatureState::class;
  protected $stateDataType = '';
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
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
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
  /** @param MembershipFeatureSpec[] */
  public function setMembershipSpecs($membershipSpecs)
  {
    $this->membershipSpecs = $membershipSpecs;
  }
  /** @return MembershipFeatureSpec[] */
  public function getMembershipSpecs()
  {
    return $this->membershipSpecs;
  }
  /** @param MembershipFeatureState[] */
  public function setMembershipStates($membershipStates)
  {
    $this->membershipStates = $membershipStates;
  }
  /** @return MembershipFeatureState[] */
  public function getMembershipStates()
  {
    return $this->membershipStates;
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
  /** @param FeatureResourceState */
  public function setResourceState(FeatureResourceState $resourceState)
  {
    $this->resourceState = $resourceState;
  }
  /** @return FeatureResourceState */
  public function getResourceState()
  {
    return $this->resourceState;
  }
  /** @param ScopeFeatureSpec[] */
  public function setScopeSpecs($scopeSpecs)
  {
    $this->scopeSpecs = $scopeSpecs;
  }
  /** @return ScopeFeatureSpec[] */
  public function getScopeSpecs()
  {
    return $this->scopeSpecs;
  }
  /** @param ScopeFeatureState[] */
  public function setScopeStates($scopeStates)
  {
    $this->scopeStates = $scopeStates;
  }
  /** @return ScopeFeatureState[] */
  public function getScopeStates()
  {
    return $this->scopeStates;
  }
  /** @param CommonFeatureSpec */
  public function setSpec(CommonFeatureSpec $spec)
  {
    $this->spec = $spec;
  }
  /** @return CommonFeatureSpec */
  public function getSpec()
  {
    return $this->spec;
  }
  /** @param CommonFeatureState */
  public function setState(CommonFeatureState $state)
  {
    $this->state = $state;
  }
  /** @return CommonFeatureState */
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

class FeatureResourceState extends \Google\Model
{
  /** @var string */
  public $state;

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

class FeatureState extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $description;
  /** @var string */
  public $updateTime;

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
}

class FleetObservabilityFeatureSpec extends \Google\Model
{
}

class FleetObservabilityFeatureState extends \Google\Model
{
}

class FleetObservabilityMembershipSpec extends \Google\Model
{
}

class FleetObservabilityMembershipState extends \Google\Model
{
}

class GenerateConnectManifestResponse extends \Google\Collection
{
  /** @var ConnectAgentResource[] */
  public $manifest;
  protected $collection_key = 'manifest';
  protected $manifestType = ConnectAgentResource::class;
  protected $manifestDataType = 'array';
  /** @param ConnectAgentResource[] */
  public function setManifest($manifest)
  {
    $this->manifest = $manifest;
  }
  /** @return ConnectAgentResource[] */
  public function getManifest()
  {
    return $this->manifest;
  }
}

class GkeCluster extends \Google\Model
{
  /** @var bool */
  public $clusterMissing;
  /** @var string */
  public $resourceLink;

  /** @param bool */
  public function setClusterMissing($clusterMissing)
  {
    $this->clusterMissing = $clusterMissing;
  }
  /** @return bool */
  public function getClusterMissing()
  {
    return $this->clusterMissing;
  }
  /** @param string */
  public function setResourceLink($resourceLink)
  {
    $this->resourceLink = $resourceLink;
  }
  /** @return string */
  public function getResourceLink()
  {
    return $this->resourceLink;
  }
}

class GkehubEmpty extends \Google\Model
{
}

class GoogleRpcStatus extends \Google\Collection
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

class IdentityServiceAuthMethod extends \Google\Model
{
  /** @var IdentityServiceAzureADConfig */
  public $azureadConfig;
  /** @var IdentityServiceGoogleConfig */
  public $googleConfig;
  /** @var string */
  public $name;
  /** @var IdentityServiceOidcConfig */
  public $oidcConfig;
  /** @var string */
  public $proxy;
  protected $azureadConfigType = IdentityServiceAzureADConfig::class;
  protected $azureadConfigDataType = '';
  protected $googleConfigType = IdentityServiceGoogleConfig::class;
  protected $googleConfigDataType = '';
  protected $oidcConfigType = IdentityServiceOidcConfig::class;
  protected $oidcConfigDataType = '';
  /** @param IdentityServiceAzureADConfig */
  public function setAzureadConfig(IdentityServiceAzureADConfig $azureadConfig)
  {
    $this->azureadConfig = $azureadConfig;
  }
  /** @return IdentityServiceAzureADConfig */
  public function getAzureadConfig()
  {
    return $this->azureadConfig;
  }
  /** @param IdentityServiceGoogleConfig */
  public function setGoogleConfig(IdentityServiceGoogleConfig $googleConfig)
  {
    $this->googleConfig = $googleConfig;
  }
  /** @return IdentityServiceGoogleConfig */
  public function getGoogleConfig()
  {
    return $this->googleConfig;
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
  /** @param IdentityServiceOidcConfig */
  public function setOidcConfig(IdentityServiceOidcConfig $oidcConfig)
  {
    $this->oidcConfig = $oidcConfig;
  }
  /** @return IdentityServiceOidcConfig */
  public function getOidcConfig()
  {
    return $this->oidcConfig;
  }
  /** @param string */
  public function setProxy($proxy)
  {
    $this->proxy = $proxy;
  }
  /** @return string */
  public function getProxy()
  {
    return $this->proxy;
  }
}

class IdentityServiceAzureADConfig extends \Google\Model
{
  /** @var string */
  public $clientId;
  /** @var string */
  public $clientSecret;
  /** @var string */
  public $encryptedClientSecret;
  /** @var string */
  public $kubectlRedirectUri;
  /** @var string */
  public $tenant;

  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setClientSecret($clientSecret)
  {
    $this->clientSecret = $clientSecret;
  }
  /** @return string */
  public function getClientSecret()
  {
    return $this->clientSecret;
  }
  /** @param string */
  public function setEncryptedClientSecret($encryptedClientSecret)
  {
    $this->encryptedClientSecret = $encryptedClientSecret;
  }
  /** @return string */
  public function getEncryptedClientSecret()
  {
    return $this->encryptedClientSecret;
  }
  /** @param string */
  public function setKubectlRedirectUri($kubectlRedirectUri)
  {
    $this->kubectlRedirectUri = $kubectlRedirectUri;
  }
  /** @return string */
  public function getKubectlRedirectUri()
  {
    return $this->kubectlRedirectUri;
  }
  /** @param string */
  public function setTenant($tenant)
  {
    $this->tenant = $tenant;
  }
  /** @return string */
  public function getTenant()
  {
    return $this->tenant;
  }
}

class IdentityServiceGoogleConfig extends \Google\Model
{
  /** @var bool */
  public $disable;

  /** @param bool */
  public function setDisable($disable)
  {
    $this->disable = $disable;
  }
  /** @return bool */
  public function getDisable()
  {
    return $this->disable;
  }
}

class IdentityServiceMembershipSpec extends \Google\Collection
{
  /** @var IdentityServiceAuthMethod[] */
  public $authMethods;
  protected $collection_key = 'authMethods';
  protected $authMethodsType = IdentityServiceAuthMethod::class;
  protected $authMethodsDataType = 'array';
  /** @param IdentityServiceAuthMethod[] */
  public function setAuthMethods($authMethods)
  {
    $this->authMethods = $authMethods;
  }
  /** @return IdentityServiceAuthMethod[] */
  public function getAuthMethods()
  {
    return $this->authMethods;
  }
}

class IdentityServiceMembershipState extends \Google\Model
{
  /** @var string */
  public $failureReason;
  /** @var string */
  public $installedVersion;
  /** @var IdentityServiceMembershipSpec */
  public $memberConfig;
  /** @var string */
  public $state;
  protected $memberConfigType = IdentityServiceMembershipSpec::class;
  protected $memberConfigDataType = '';
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
  public function setInstalledVersion($installedVersion)
  {
    $this->installedVersion = $installedVersion;
  }
  /** @return string */
  public function getInstalledVersion()
  {
    return $this->installedVersion;
  }
  /** @param IdentityServiceMembershipSpec */
  public function setMemberConfig(IdentityServiceMembershipSpec $memberConfig)
  {
    $this->memberConfig = $memberConfig;
  }
  /** @return IdentityServiceMembershipSpec */
  public function getMemberConfig()
  {
    return $this->memberConfig;
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

class IdentityServiceOidcConfig extends \Google\Model
{
  /** @var string */
  public $certificateAuthorityData;
  /** @var string */
  public $clientId;
  /** @var string */
  public $clientSecret;
  /** @var bool */
  public $deployCloudConsoleProxy;
  /** @var bool */
  public $enableAccessToken;
  /** @var string */
  public $encryptedClientSecret;
  /** @var string */
  public $extraParams;
  /** @var string */
  public $groupPrefix;
  /** @var string */
  public $groupsClaim;
  /** @var string */
  public $issuerUri;
  /** @var string */
  public $kubectlRedirectUri;
  /** @var string */
  public $scopes;
  /** @var string */
  public $userClaim;
  /** @var string */
  public $userPrefix;

  /** @param string */
  public function setCertificateAuthorityData($certificateAuthorityData)
  {
    $this->certificateAuthorityData = $certificateAuthorityData;
  }
  /** @return string */
  public function getCertificateAuthorityData()
  {
    return $this->certificateAuthorityData;
  }
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setClientSecret($clientSecret)
  {
    $this->clientSecret = $clientSecret;
  }
  /** @return string */
  public function getClientSecret()
  {
    return $this->clientSecret;
  }
  /** @param bool */
  public function setDeployCloudConsoleProxy($deployCloudConsoleProxy)
  {
    $this->deployCloudConsoleProxy = $deployCloudConsoleProxy;
  }
  /** @return bool */
  public function getDeployCloudConsoleProxy()
  {
    return $this->deployCloudConsoleProxy;
  }
  /** @param bool */
  public function setEnableAccessToken($enableAccessToken)
  {
    $this->enableAccessToken = $enableAccessToken;
  }
  /** @return bool */
  public function getEnableAccessToken()
  {
    return $this->enableAccessToken;
  }
  /** @param string */
  public function setEncryptedClientSecret($encryptedClientSecret)
  {
    $this->encryptedClientSecret = $encryptedClientSecret;
  }
  /** @return string */
  public function getEncryptedClientSecret()
  {
    return $this->encryptedClientSecret;
  }
  /** @param string */
  public function setExtraParams($extraParams)
  {
    $this->extraParams = $extraParams;
  }
  /** @return string */
  public function getExtraParams()
  {
    return $this->extraParams;
  }
  /** @param string */
  public function setGroupPrefix($groupPrefix)
  {
    $this->groupPrefix = $groupPrefix;
  }
  /** @return string */
  public function getGroupPrefix()
  {
    return $this->groupPrefix;
  }
  /** @param string */
  public function setGroupsClaim($groupsClaim)
  {
    $this->groupsClaim = $groupsClaim;
  }
  /** @return string */
  public function getGroupsClaim()
  {
    return $this->groupsClaim;
  }
  /** @param string */
  public function setIssuerUri($issuerUri)
  {
    $this->issuerUri = $issuerUri;
  }
  /** @return string */
  public function getIssuerUri()
  {
    return $this->issuerUri;
  }
  /** @param string */
  public function setKubectlRedirectUri($kubectlRedirectUri)
  {
    $this->kubectlRedirectUri = $kubectlRedirectUri;
  }
  /** @return string */
  public function getKubectlRedirectUri()
  {
    return $this->kubectlRedirectUri;
  }
  /** @param string */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /** @return string */
  public function getScopes()
  {
    return $this->scopes;
  }
  /** @param string */
  public function setUserClaim($userClaim)
  {
    $this->userClaim = $userClaim;
  }
  /** @return string */
  public function getUserClaim()
  {
    return $this->userClaim;
  }
  /** @param string */
  public function setUserPrefix($userPrefix)
  {
    $this->userPrefix = $userPrefix;
  }
  /** @return string */
  public function getUserPrefix()
  {
    return $this->userPrefix;
  }
}

class KubernetesMetadata extends \Google\Model
{
  /** @var string */
  public $kubernetesApiServerVersion;
  /** @var int */
  public $memoryMb;
  /** @var int */
  public $nodeCount;
  /** @var string */
  public $nodeProviderId;
  /** @var string */
  public $updateTime;
  /** @var int */
  public $vcpuCount;

  /** @param string */
  public function setKubernetesApiServerVersion($kubernetesApiServerVersion)
  {
    $this->kubernetesApiServerVersion = $kubernetesApiServerVersion;
  }
  /** @return string */
  public function getKubernetesApiServerVersion()
  {
    return $this->kubernetesApiServerVersion;
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
  /** @param int */
  public function setNodeCount($nodeCount)
  {
    $this->nodeCount = $nodeCount;
  }
  /** @return int */
  public function getNodeCount()
  {
    return $this->nodeCount;
  }
  /** @param string */
  public function setNodeProviderId($nodeProviderId)
  {
    $this->nodeProviderId = $nodeProviderId;
  }
  /** @return string */
  public function getNodeProviderId()
  {
    return $this->nodeProviderId;
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
  /** @param int */
  public function setVcpuCount($vcpuCount)
  {
    $this->vcpuCount = $vcpuCount;
  }
  /** @return int */
  public function getVcpuCount()
  {
    return $this->vcpuCount;
  }
}

class KubernetesResource extends \Google\Collection
{
  /** @var ResourceManifest[] */
  public $connectResources;
  /** @var string */
  public $membershipCrManifest;
  /** @var ResourceManifest[] */
  public $membershipResources;
  /** @var ResourceOptions */
  public $resourceOptions;
  protected $collection_key = 'membershipResources';
  protected $connectResourcesType = ResourceManifest::class;
  protected $connectResourcesDataType = 'array';
  protected $membershipResourcesType = ResourceManifest::class;
  protected $membershipResourcesDataType = 'array';
  protected $resourceOptionsType = ResourceOptions::class;
  protected $resourceOptionsDataType = '';
  /** @param ResourceManifest[] */
  public function setConnectResources($connectResources)
  {
    $this->connectResources = $connectResources;
  }
  /** @return ResourceManifest[] */
  public function getConnectResources()
  {
    return $this->connectResources;
  }
  /** @param string */
  public function setMembershipCrManifest($membershipCrManifest)
  {
    $this->membershipCrManifest = $membershipCrManifest;
  }
  /** @return string */
  public function getMembershipCrManifest()
  {
    return $this->membershipCrManifest;
  }
  /** @param ResourceManifest[] */
  public function setMembershipResources($membershipResources)
  {
    $this->membershipResources = $membershipResources;
  }
  /** @return ResourceManifest[] */
  public function getMembershipResources()
  {
    return $this->membershipResources;
  }
  /** @param ResourceOptions */
  public function setResourceOptions(ResourceOptions $resourceOptions)
  {
    $this->resourceOptions = $resourceOptions;
  }
  /** @return ResourceOptions */
  public function getResourceOptions()
  {
    return $this->resourceOptions;
  }
}

class ListFeaturesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Feature[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $resourcesType = Feature::class;
  protected $resourcesDataType = 'array';
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
  /** @param Feature[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return Feature[] */
  public function getResources()
  {
    return $this->resources;
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

class ListMembershipsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Membership[] */
  public $resources;
  /** @var string[] */
  public $unreachable;
  protected $collection_key = 'unreachable';
  protected $resourcesType = Membership::class;
  protected $resourcesDataType = 'array';
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
  /** @param Membership[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return Membership[] */
  public function getResources()
  {
    return $this->resources;
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

class Membership extends \Google\Model
{
  /** @var Authority */
  public $authority;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $description;
  /** @var MembershipEndpoint */
  public $endpoint;
  /** @var string */
  public $externalId;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lastConnectionTime;
  /** @var string */
  public $name;
  /** @var MembershipState */
  public $state;
  /** @var string */
  public $uniqueId;
  /** @var string */
  public $updateTime;
  protected $authorityType = Authority::class;
  protected $authorityDataType = '';
  protected $endpointType = MembershipEndpoint::class;
  protected $endpointDataType = '';
  protected $stateType = MembershipState::class;
  protected $stateDataType = '';
  /** @param Authority */
  public function setAuthority(Authority $authority)
  {
    $this->authority = $authority;
  }
  /** @return Authority */
  public function getAuthority()
  {
    return $this->authority;
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
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /** @return string */
  public function getDeleteTime()
  {
    return $this->deleteTime;
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
  /** @param MembershipEndpoint */
  public function setEndpoint(MembershipEndpoint $endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /** @return MembershipEndpoint */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /** @param string */
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  /** @return string */
  public function getExternalId()
  {
    return $this->externalId;
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
  public function setLastConnectionTime($lastConnectionTime)
  {
    $this->lastConnectionTime = $lastConnectionTime;
  }
  /** @return string */
  public function getLastConnectionTime()
  {
    return $this->lastConnectionTime;
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
  /** @param MembershipState */
  public function setState(MembershipState $state)
  {
    $this->state = $state;
  }
  /** @return MembershipState */
  public function getState()
  {
    return $this->state;
  }
  /** @param string */
  public function setUniqueId($uniqueId)
  {
    $this->uniqueId = $uniqueId;
  }
  /** @return string */
  public function getUniqueId()
  {
    return $this->uniqueId;
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

class MembershipEndpoint extends \Google\Model
{
  /** @var ApplianceCluster */
  public $applianceCluster;
  /** @var EdgeCluster */
  public $edgeCluster;
  /** @var GkeCluster */
  public $gkeCluster;
  /** @var KubernetesMetadata */
  public $kubernetesMetadata;
  /** @var KubernetesResource */
  public $kubernetesResource;
  /** @var MultiCloudCluster */
  public $multiCloudCluster;
  /** @var OnPremCluster */
  public $onPremCluster;
  protected $applianceClusterType = ApplianceCluster::class;
  protected $applianceClusterDataType = '';
  protected $edgeClusterType = EdgeCluster::class;
  protected $edgeClusterDataType = '';
  protected $gkeClusterType = GkeCluster::class;
  protected $gkeClusterDataType = '';
  protected $kubernetesMetadataType = KubernetesMetadata::class;
  protected $kubernetesMetadataDataType = '';
  protected $kubernetesResourceType = KubernetesResource::class;
  protected $kubernetesResourceDataType = '';
  protected $multiCloudClusterType = MultiCloudCluster::class;
  protected $multiCloudClusterDataType = '';
  protected $onPremClusterType = OnPremCluster::class;
  protected $onPremClusterDataType = '';
  /** @param ApplianceCluster */
  public function setApplianceCluster(ApplianceCluster $applianceCluster)
  {
    $this->applianceCluster = $applianceCluster;
  }
  /** @return ApplianceCluster */
  public function getApplianceCluster()
  {
    return $this->applianceCluster;
  }
  /** @param EdgeCluster */
  public function setEdgeCluster(EdgeCluster $edgeCluster)
  {
    $this->edgeCluster = $edgeCluster;
  }
  /** @return EdgeCluster */
  public function getEdgeCluster()
  {
    return $this->edgeCluster;
  }
  /** @param GkeCluster */
  public function setGkeCluster(GkeCluster $gkeCluster)
  {
    $this->gkeCluster = $gkeCluster;
  }
  /** @return GkeCluster */
  public function getGkeCluster()
  {
    return $this->gkeCluster;
  }
  /** @param KubernetesMetadata */
  public function setKubernetesMetadata(KubernetesMetadata $kubernetesMetadata)
  {
    $this->kubernetesMetadata = $kubernetesMetadata;
  }
  /** @return KubernetesMetadata */
  public function getKubernetesMetadata()
  {
    return $this->kubernetesMetadata;
  }
  /** @param KubernetesResource */
  public function setKubernetesResource(KubernetesResource $kubernetesResource)
  {
    $this->kubernetesResource = $kubernetesResource;
  }
  /** @return KubernetesResource */
  public function getKubernetesResource()
  {
    return $this->kubernetesResource;
  }
  /** @param MultiCloudCluster */
  public function setMultiCloudCluster(MultiCloudCluster $multiCloudCluster)
  {
    $this->multiCloudCluster = $multiCloudCluster;
  }
  /** @return MultiCloudCluster */
  public function getMultiCloudCluster()
  {
    return $this->multiCloudCluster;
  }
  /** @param OnPremCluster */
  public function setOnPremCluster(OnPremCluster $onPremCluster)
  {
    $this->onPremCluster = $onPremCluster;
  }
  /** @return OnPremCluster */
  public function getOnPremCluster()
  {
    return $this->onPremCluster;
  }
}

class MembershipFeatureSpec extends \Google\Model
{
  /** @var ConfigManagementMembershipSpec */
  public $configmanagement;
  /** @var FleetObservabilityMembershipSpec */
  public $fleetobservability;
  /** @var IdentityServiceMembershipSpec */
  public $identityservice;
  /** @var ServiceMeshMembershipSpec */
  public $mesh;
  protected $configmanagementType = ConfigManagementMembershipSpec::class;
  protected $configmanagementDataType = '';
  protected $fleetobservabilityType = FleetObservabilityMembershipSpec::class;
  protected $fleetobservabilityDataType = '';
  protected $identityserviceType = IdentityServiceMembershipSpec::class;
  protected $identityserviceDataType = '';
  protected $meshType = ServiceMeshMembershipSpec::class;
  protected $meshDataType = '';
  /** @param ConfigManagementMembershipSpec */
  public function setConfigmanagement(ConfigManagementMembershipSpec $configmanagement)
  {
    $this->configmanagement = $configmanagement;
  }
  /** @return ConfigManagementMembershipSpec */
  public function getConfigmanagement()
  {
    return $this->configmanagement;
  }
  /** @param FleetObservabilityMembershipSpec */
  public function setFleetobservability(FleetObservabilityMembershipSpec $fleetobservability)
  {
    $this->fleetobservability = $fleetobservability;
  }
  /** @return FleetObservabilityMembershipSpec */
  public function getFleetobservability()
  {
    return $this->fleetobservability;
  }
  /** @param IdentityServiceMembershipSpec */
  public function setIdentityservice(IdentityServiceMembershipSpec $identityservice)
  {
    $this->identityservice = $identityservice;
  }
  /** @return IdentityServiceMembershipSpec */
  public function getIdentityservice()
  {
    return $this->identityservice;
  }
  /** @param ServiceMeshMembershipSpec */
  public function setMesh(ServiceMeshMembershipSpec $mesh)
  {
    $this->mesh = $mesh;
  }
  /** @return ServiceMeshMembershipSpec */
  public function getMesh()
  {
    return $this->mesh;
  }
}

class MembershipFeatureState extends \Google\Model
{
  /** @var AppDevExperienceFeatureState */
  public $appdevexperience;
  /** @var ConfigManagementMembershipState */
  public $configmanagement;
  /** @var FleetObservabilityMembershipState */
  public $fleetobservability;
  /** @var IdentityServiceMembershipState */
  public $identityservice;
  /** @var ServiceMeshMembershipState */
  public $servicemesh;
  /** @var FeatureState */
  public $state;
  protected $appdevexperienceType = AppDevExperienceFeatureState::class;
  protected $appdevexperienceDataType = '';
  protected $configmanagementType = ConfigManagementMembershipState::class;
  protected $configmanagementDataType = '';
  protected $fleetobservabilityType = FleetObservabilityMembershipState::class;
  protected $fleetobservabilityDataType = '';
  protected $identityserviceType = IdentityServiceMembershipState::class;
  protected $identityserviceDataType = '';
  protected $servicemeshType = ServiceMeshMembershipState::class;
  protected $servicemeshDataType = '';
  protected $stateType = FeatureState::class;
  protected $stateDataType = '';
  /** @param AppDevExperienceFeatureState */
  public function setAppdevexperience(AppDevExperienceFeatureState $appdevexperience)
  {
    $this->appdevexperience = $appdevexperience;
  }
  /** @return AppDevExperienceFeatureState */
  public function getAppdevexperience()
  {
    return $this->appdevexperience;
  }
  /** @param ConfigManagementMembershipState */
  public function setConfigmanagement(ConfigManagementMembershipState $configmanagement)
  {
    $this->configmanagement = $configmanagement;
  }
  /** @return ConfigManagementMembershipState */
  public function getConfigmanagement()
  {
    return $this->configmanagement;
  }
  /** @param FleetObservabilityMembershipState */
  public function setFleetobservability(FleetObservabilityMembershipState $fleetobservability)
  {
    $this->fleetobservability = $fleetobservability;
  }
  /** @return FleetObservabilityMembershipState */
  public function getFleetobservability()
  {
    return $this->fleetobservability;
  }
  /** @param IdentityServiceMembershipState */
  public function setIdentityservice(IdentityServiceMembershipState $identityservice)
  {
    $this->identityservice = $identityservice;
  }
  /** @return IdentityServiceMembershipState */
  public function getIdentityservice()
  {
    return $this->identityservice;
  }
  /** @param ServiceMeshMembershipState */
  public function setServicemesh(ServiceMeshMembershipState $servicemesh)
  {
    $this->servicemesh = $servicemesh;
  }
  /** @return ServiceMeshMembershipState */
  public function getServicemesh()
  {
    return $this->servicemesh;
  }
  /** @param FeatureState */
  public function setState(FeatureState $state)
  {
    $this->state = $state;
  }
  /** @return FeatureState */
  public function getState()
  {
    return $this->state;
  }
}

class MembershipState extends \Google\Model
{
  /** @var string */
  public $code;

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

class MultiCloudCluster extends \Google\Model
{
  /** @var bool */
  public $clusterMissing;
  /** @var string */
  public $resourceLink;

  /** @param bool */
  public function setClusterMissing($clusterMissing)
  {
    $this->clusterMissing = $clusterMissing;
  }
  /** @return bool */
  public function getClusterMissing()
  {
    return $this->clusterMissing;
  }
  /** @param string */
  public function setResourceLink($resourceLink)
  {
    $this->resourceLink = $resourceLink;
  }
  /** @return string */
  public function getResourceLink()
  {
    return $this->resourceLink;
  }
}

class MultiClusterIngressFeatureSpec extends \Google\Model
{
  /** @var string */
  public $configMembership;

  /** @param string */
  public function setConfigMembership($configMembership)
  {
    $this->configMembership = $configMembership;
  }
  /** @return string */
  public function getConfigMembership()
  {
    return $this->configMembership;
  }
}

class OnPremCluster extends \Google\Model
{
  /** @var bool */
  public $adminCluster;
  /** @var bool */
  public $clusterMissing;
  /** @var string */
  public $clusterType;
  /** @var string */
  public $resourceLink;

  /** @param bool */
  public function setAdminCluster($adminCluster)
  {
    $this->adminCluster = $adminCluster;
  }
  /** @return bool */
  public function getAdminCluster()
  {
    return $this->adminCluster;
  }
  /** @param bool */
  public function setClusterMissing($clusterMissing)
  {
    $this->clusterMissing = $clusterMissing;
  }
  /** @return bool */
  public function getClusterMissing()
  {
    return $this->clusterMissing;
  }
  /** @param string */
  public function setClusterType($clusterType)
  {
    $this->clusterType = $clusterType;
  }
  /** @return string */
  public function getClusterType()
  {
    return $this->clusterType;
  }
  /** @param string */
  public function setResourceLink($resourceLink)
  {
    $this->resourceLink = $resourceLink;
  }
  /** @return string */
  public function getResourceLink()
  {
    return $this->resourceLink;
  }
}

class Operation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = GoogleRpcStatus::class;
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
  /** @param GoogleRpcStatus */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /** @return GoogleRpcStatus */
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

class ResourceManifest extends \Google\Model
{
  /** @var bool */
  public $clusterScoped;
  /** @var string */
  public $manifest;

  /** @param bool */
  public function setClusterScoped($clusterScoped)
  {
    $this->clusterScoped = $clusterScoped;
  }
  /** @return bool */
  public function getClusterScoped()
  {
    return $this->clusterScoped;
  }
  /** @param string */
  public function setManifest($manifest)
  {
    $this->manifest = $manifest;
  }
  /** @return string */
  public function getManifest()
  {
    return $this->manifest;
  }
}

class ResourceOptions extends \Google\Model
{
  /** @var string */
  public $connectVersion;
  /** @var string */
  public $k8sVersion;
  /** @var bool */
  public $v1beta1Crd;

  /** @param string */
  public function setConnectVersion($connectVersion)
  {
    $this->connectVersion = $connectVersion;
  }
  /** @return string */
  public function getConnectVersion()
  {
    return $this->connectVersion;
  }
  /** @param string */
  public function setK8sVersion($k8sVersion)
  {
    $this->k8sVersion = $k8sVersion;
  }
  /** @return string */
  public function getK8sVersion()
  {
    return $this->k8sVersion;
  }
  /** @param bool */
  public function setV1beta1Crd($v1beta1Crd)
  {
    $this->v1beta1Crd = $v1beta1Crd;
  }
  /** @return bool */
  public function getV1beta1Crd()
  {
    return $this->v1beta1Crd;
  }
}

class ScopeFeatureSpec extends \Google\Model
{
}

class ScopeFeatureState extends \Google\Model
{
  /** @var FeatureState */
  public $state;
  protected $stateType = FeatureState::class;
  protected $stateDataType = '';
  /** @param FeatureState */
  public function setState(FeatureState $state)
  {
    $this->state = $state;
  }
  /** @return FeatureState */
  public function getState()
  {
    return $this->state;
  }
}

class ServiceMeshControlPlaneManagement extends \Google\Collection
{
  /** @var ServiceMeshStatusDetails[] */
  public $details;
  /** @var string */
  public $state;
  protected $collection_key = 'details';
  protected $detailsType = ServiceMeshStatusDetails::class;
  protected $detailsDataType = 'array';
  /** @param ServiceMeshStatusDetails[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return ServiceMeshStatusDetails[] */
  public function getDetails()
  {
    return $this->details;
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

class ServiceMeshDataPlaneManagement extends \Google\Collection
{
  /** @var ServiceMeshStatusDetails[] */
  public $details;
  /** @var string */
  public $state;
  protected $collection_key = 'details';
  protected $detailsType = ServiceMeshStatusDetails::class;
  protected $detailsDataType = 'array';
  /** @param ServiceMeshStatusDetails[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return ServiceMeshStatusDetails[] */
  public function getDetails()
  {
    return $this->details;
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

class ServiceMeshMembershipSpec extends \Google\Model
{
  /** @var string */
  public $controlPlane;
  /** @var string */
  public $management;

  /** @param string */
  public function setControlPlane($controlPlane)
  {
    $this->controlPlane = $controlPlane;
  }
  /** @return string */
  public function getControlPlane()
  {
    return $this->controlPlane;
  }
  /** @param string */
  public function setManagement($management)
  {
    $this->management = $management;
  }
  /** @return string */
  public function getManagement()
  {
    return $this->management;
  }
}

class ServiceMeshMembershipState extends \Google\Model
{
  /** @var ServiceMeshControlPlaneManagement */
  public $controlPlaneManagement;
  /** @var ServiceMeshDataPlaneManagement */
  public $dataPlaneManagement;
  protected $controlPlaneManagementType = ServiceMeshControlPlaneManagement::class;
  protected $controlPlaneManagementDataType = '';
  protected $dataPlaneManagementType = ServiceMeshDataPlaneManagement::class;
  protected $dataPlaneManagementDataType = '';
  /** @param ServiceMeshControlPlaneManagement */
  public function setControlPlaneManagement(ServiceMeshControlPlaneManagement $controlPlaneManagement)
  {
    $this->controlPlaneManagement = $controlPlaneManagement;
  }
  /** @return ServiceMeshControlPlaneManagement */
  public function getControlPlaneManagement()
  {
    return $this->controlPlaneManagement;
  }
  /** @param ServiceMeshDataPlaneManagement */
  public function setDataPlaneManagement(ServiceMeshDataPlaneManagement $dataPlaneManagement)
  {
    $this->dataPlaneManagement = $dataPlaneManagement;
  }
  /** @return ServiceMeshDataPlaneManagement */
  public function getDataPlaneManagement()
  {
    return $this->dataPlaneManagement;
  }
}

class ServiceMeshStatusDetails extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $details;

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

class Status extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $description;

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

class TypeMeta extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $kind;

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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppDevExperienceFeatureSpec::class, 'Google_Service_GKEHub_AppDevExperienceFeatureSpec');
class_alias(AppDevExperienceFeatureState::class, 'Google_Service_GKEHub_AppDevExperienceFeatureState');
class_alias(ApplianceCluster::class, 'Google_Service_GKEHub_ApplianceCluster');
class_alias(AuditConfig::class, 'Google_Service_GKEHub_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_GKEHub_AuditLogConfig');
class_alias(Authority::class, 'Google_Service_GKEHub_Authority');
class_alias(Binding::class, 'Google_Service_GKEHub_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_GKEHub_CancelOperationRequest');
class_alias(CommonFeatureSpec::class, 'Google_Service_GKEHub_CommonFeatureSpec');
class_alias(CommonFeatureState::class, 'Google_Service_GKEHub_CommonFeatureState');
class_alias(ConfigManagementConfigSync::class, 'Google_Service_GKEHub_ConfigManagementConfigSync');
class_alias(ConfigManagementConfigSyncDeploymentState::class, 'Google_Service_GKEHub_ConfigManagementConfigSyncDeploymentState');
class_alias(ConfigManagementConfigSyncState::class, 'Google_Service_GKEHub_ConfigManagementConfigSyncState');
class_alias(ConfigManagementConfigSyncVersion::class, 'Google_Service_GKEHub_ConfigManagementConfigSyncVersion');
class_alias(ConfigManagementErrorResource::class, 'Google_Service_GKEHub_ConfigManagementErrorResource');
class_alias(ConfigManagementGatekeeperDeploymentState::class, 'Google_Service_GKEHub_ConfigManagementGatekeeperDeploymentState');
class_alias(ConfigManagementGitConfig::class, 'Google_Service_GKEHub_ConfigManagementGitConfig');
class_alias(ConfigManagementGroupVersionKind::class, 'Google_Service_GKEHub_ConfigManagementGroupVersionKind');
class_alias(ConfigManagementHierarchyControllerConfig::class, 'Google_Service_GKEHub_ConfigManagementHierarchyControllerConfig');
class_alias(ConfigManagementHierarchyControllerDeploymentState::class, 'Google_Service_GKEHub_ConfigManagementHierarchyControllerDeploymentState');
class_alias(ConfigManagementHierarchyControllerState::class, 'Google_Service_GKEHub_ConfigManagementHierarchyControllerState');
class_alias(ConfigManagementHierarchyControllerVersion::class, 'Google_Service_GKEHub_ConfigManagementHierarchyControllerVersion');
class_alias(ConfigManagementInstallError::class, 'Google_Service_GKEHub_ConfigManagementInstallError');
class_alias(ConfigManagementMembershipSpec::class, 'Google_Service_GKEHub_ConfigManagementMembershipSpec');
class_alias(ConfigManagementMembershipState::class, 'Google_Service_GKEHub_ConfigManagementMembershipState');
class_alias(ConfigManagementOciConfig::class, 'Google_Service_GKEHub_ConfigManagementOciConfig');
class_alias(ConfigManagementOperatorState::class, 'Google_Service_GKEHub_ConfigManagementOperatorState');
class_alias(ConfigManagementPolicyController::class, 'Google_Service_GKEHub_ConfigManagementPolicyController');
class_alias(ConfigManagementPolicyControllerMonitoring::class, 'Google_Service_GKEHub_ConfigManagementPolicyControllerMonitoring');
class_alias(ConfigManagementPolicyControllerState::class, 'Google_Service_GKEHub_ConfigManagementPolicyControllerState');
class_alias(ConfigManagementPolicyControllerVersion::class, 'Google_Service_GKEHub_ConfigManagementPolicyControllerVersion');
class_alias(ConfigManagementSyncError::class, 'Google_Service_GKEHub_ConfigManagementSyncError');
class_alias(ConfigManagementSyncState::class, 'Google_Service_GKEHub_ConfigManagementSyncState');
class_alias(ConnectAgentResource::class, 'Google_Service_GKEHub_ConnectAgentResource');
class_alias(EdgeCluster::class, 'Google_Service_GKEHub_EdgeCluster');
class_alias(Expr::class, 'Google_Service_GKEHub_Expr');
class_alias(Feature::class, 'Google_Service_GKEHub_Feature');
class_alias(FeatureResourceState::class, 'Google_Service_GKEHub_FeatureResourceState');
class_alias(FeatureState::class, 'Google_Service_GKEHub_FeatureState');
class_alias(FleetObservabilityFeatureSpec::class, 'Google_Service_GKEHub_FleetObservabilityFeatureSpec');
class_alias(FleetObservabilityFeatureState::class, 'Google_Service_GKEHub_FleetObservabilityFeatureState');
class_alias(FleetObservabilityMembershipSpec::class, 'Google_Service_GKEHub_FleetObservabilityMembershipSpec');
class_alias(FleetObservabilityMembershipState::class, 'Google_Service_GKEHub_FleetObservabilityMembershipState');
class_alias(GenerateConnectManifestResponse::class, 'Google_Service_GKEHub_GenerateConnectManifestResponse');
class_alias(GkeCluster::class, 'Google_Service_GKEHub_GkeCluster');
class_alias(GkehubEmpty::class, 'Google_Service_GKEHub_GkehubEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_GKEHub_GoogleRpcStatus');
class_alias(IdentityServiceAuthMethod::class, 'Google_Service_GKEHub_IdentityServiceAuthMethod');
class_alias(IdentityServiceAzureADConfig::class, 'Google_Service_GKEHub_IdentityServiceAzureADConfig');
class_alias(IdentityServiceGoogleConfig::class, 'Google_Service_GKEHub_IdentityServiceGoogleConfig');
class_alias(IdentityServiceMembershipSpec::class, 'Google_Service_GKEHub_IdentityServiceMembershipSpec');
class_alias(IdentityServiceMembershipState::class, 'Google_Service_GKEHub_IdentityServiceMembershipState');
class_alias(IdentityServiceOidcConfig::class, 'Google_Service_GKEHub_IdentityServiceOidcConfig');
class_alias(KubernetesMetadata::class, 'Google_Service_GKEHub_KubernetesMetadata');
class_alias(KubernetesResource::class, 'Google_Service_GKEHub_KubernetesResource');
class_alias(ListFeaturesResponse::class, 'Google_Service_GKEHub_ListFeaturesResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_GKEHub_ListLocationsResponse');
class_alias(ListMembershipsResponse::class, 'Google_Service_GKEHub_ListMembershipsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_GKEHub_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_GKEHub_Location');
class_alias(Membership::class, 'Google_Service_GKEHub_Membership');
class_alias(MembershipEndpoint::class, 'Google_Service_GKEHub_MembershipEndpoint');
class_alias(MembershipFeatureSpec::class, 'Google_Service_GKEHub_MembershipFeatureSpec');
class_alias(MembershipFeatureState::class, 'Google_Service_GKEHub_MembershipFeatureState');
class_alias(MembershipState::class, 'Google_Service_GKEHub_MembershipState');
class_alias(MultiCloudCluster::class, 'Google_Service_GKEHub_MultiCloudCluster');
class_alias(MultiClusterIngressFeatureSpec::class, 'Google_Service_GKEHub_MultiClusterIngressFeatureSpec');
class_alias(OnPremCluster::class, 'Google_Service_GKEHub_OnPremCluster');
class_alias(Operation::class, 'Google_Service_GKEHub_Operation');
class_alias(OperationMetadata::class, 'Google_Service_GKEHub_OperationMetadata');
class_alias(Policy::class, 'Google_Service_GKEHub_Policy');
class_alias(ResourceManifest::class, 'Google_Service_GKEHub_ResourceManifest');
class_alias(ResourceOptions::class, 'Google_Service_GKEHub_ResourceOptions');
class_alias(ScopeFeatureSpec::class, 'Google_Service_GKEHub_ScopeFeatureSpec');
class_alias(ScopeFeatureState::class, 'Google_Service_GKEHub_ScopeFeatureState');
class_alias(ServiceMeshControlPlaneManagement::class, 'Google_Service_GKEHub_ServiceMeshControlPlaneManagement');
class_alias(ServiceMeshDataPlaneManagement::class, 'Google_Service_GKEHub_ServiceMeshDataPlaneManagement');
class_alias(ServiceMeshMembershipSpec::class, 'Google_Service_GKEHub_ServiceMeshMembershipSpec');
class_alias(ServiceMeshMembershipState::class, 'Google_Service_GKEHub_ServiceMeshMembershipState');
class_alias(ServiceMeshStatusDetails::class, 'Google_Service_GKEHub_ServiceMeshStatusDetails');
class_alias(SetIamPolicyRequest::class, 'Google_Service_GKEHub_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_GKEHub_Status');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_GKEHub_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_GKEHub_TestIamPermissionsResponse');
class_alias(TypeMeta::class, 'Google_Service_GKEHub_TypeMeta');
