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

namespace Google\Service\Container;

class AcceleratorConfig extends \Google\Model
{
  /** @var string */
  public $acceleratorCount;
  /** @var string */
  public $acceleratorType;
  /** @var string */
  public $gpuPartitionSize;
  /** @var GPUSharingConfig */
  public $gpuSharingConfig;
  protected $gpuSharingConfigType = GPUSharingConfig::class;
  protected $gpuSharingConfigDataType = '';
  /** @param string */
  public function setAcceleratorCount($acceleratorCount)
  {
    $this->acceleratorCount = $acceleratorCount;
  }
  /** @return string */
  public function getAcceleratorCount()
  {
    return $this->acceleratorCount;
  }
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
  public function setGpuPartitionSize($gpuPartitionSize)
  {
    $this->gpuPartitionSize = $gpuPartitionSize;
  }
  /** @return string */
  public function getGpuPartitionSize()
  {
    return $this->gpuPartitionSize;
  }
  /** @param GPUSharingConfig */
  public function setGpuSharingConfig(GPUSharingConfig $gpuSharingConfig)
  {
    $this->gpuSharingConfig = $gpuSharingConfig;
  }
  /** @return GPUSharingConfig */
  public function getGpuSharingConfig()
  {
    return $this->gpuSharingConfig;
  }
}

class AddonsConfig extends \Google\Model
{
  /** @var CloudRunConfig */
  public $cloudRunConfig;
  /** @var ConfigConnectorConfig */
  public $configConnectorConfig;
  /** @var DnsCacheConfig */
  public $dnsCacheConfig;
  /** @var GcePersistentDiskCsiDriverConfig */
  public $gcePersistentDiskCsiDriverConfig;
  /** @var GcpFilestoreCsiDriverConfig */
  public $gcpFilestoreCsiDriverConfig;
  /** @var GkeBackupAgentConfig */
  public $gkeBackupAgentConfig;
  /** @var HorizontalPodAutoscaling */
  public $horizontalPodAutoscaling;
  /** @var HttpLoadBalancing */
  public $httpLoadBalancing;
  /** @var KubernetesDashboard */
  public $kubernetesDashboard;
  /** @var NetworkPolicyConfig */
  public $networkPolicyConfig;
  protected $cloudRunConfigType = CloudRunConfig::class;
  protected $cloudRunConfigDataType = '';
  protected $configConnectorConfigType = ConfigConnectorConfig::class;
  protected $configConnectorConfigDataType = '';
  protected $dnsCacheConfigType = DnsCacheConfig::class;
  protected $dnsCacheConfigDataType = '';
  protected $gcePersistentDiskCsiDriverConfigType = GcePersistentDiskCsiDriverConfig::class;
  protected $gcePersistentDiskCsiDriverConfigDataType = '';
  protected $gcpFilestoreCsiDriverConfigType = GcpFilestoreCsiDriverConfig::class;
  protected $gcpFilestoreCsiDriverConfigDataType = '';
  protected $gkeBackupAgentConfigType = GkeBackupAgentConfig::class;
  protected $gkeBackupAgentConfigDataType = '';
  protected $horizontalPodAutoscalingType = HorizontalPodAutoscaling::class;
  protected $horizontalPodAutoscalingDataType = '';
  protected $httpLoadBalancingType = HttpLoadBalancing::class;
  protected $httpLoadBalancingDataType = '';
  protected $kubernetesDashboardType = KubernetesDashboard::class;
  protected $kubernetesDashboardDataType = '';
  protected $networkPolicyConfigType = NetworkPolicyConfig::class;
  protected $networkPolicyConfigDataType = '';
  /** @param CloudRunConfig */
  public function setCloudRunConfig(CloudRunConfig $cloudRunConfig)
  {
    $this->cloudRunConfig = $cloudRunConfig;
  }
  /** @return CloudRunConfig */
  public function getCloudRunConfig()
  {
    return $this->cloudRunConfig;
  }
  /** @param ConfigConnectorConfig */
  public function setConfigConnectorConfig(ConfigConnectorConfig $configConnectorConfig)
  {
    $this->configConnectorConfig = $configConnectorConfig;
  }
  /** @return ConfigConnectorConfig */
  public function getConfigConnectorConfig()
  {
    return $this->configConnectorConfig;
  }
  /** @param DnsCacheConfig */
  public function setDnsCacheConfig(DnsCacheConfig $dnsCacheConfig)
  {
    $this->dnsCacheConfig = $dnsCacheConfig;
  }
  /** @return DnsCacheConfig */
  public function getDnsCacheConfig()
  {
    return $this->dnsCacheConfig;
  }
  /** @param GcePersistentDiskCsiDriverConfig */
  public function setGcePersistentDiskCsiDriverConfig(GcePersistentDiskCsiDriverConfig $gcePersistentDiskCsiDriverConfig)
  {
    $this->gcePersistentDiskCsiDriverConfig = $gcePersistentDiskCsiDriverConfig;
  }
  /** @return GcePersistentDiskCsiDriverConfig */
  public function getGcePersistentDiskCsiDriverConfig()
  {
    return $this->gcePersistentDiskCsiDriverConfig;
  }
  /** @param GcpFilestoreCsiDriverConfig */
  public function setGcpFilestoreCsiDriverConfig(GcpFilestoreCsiDriverConfig $gcpFilestoreCsiDriverConfig)
  {
    $this->gcpFilestoreCsiDriverConfig = $gcpFilestoreCsiDriverConfig;
  }
  /** @return GcpFilestoreCsiDriverConfig */
  public function getGcpFilestoreCsiDriverConfig()
  {
    return $this->gcpFilestoreCsiDriverConfig;
  }
  /** @param GkeBackupAgentConfig */
  public function setGkeBackupAgentConfig(GkeBackupAgentConfig $gkeBackupAgentConfig)
  {
    $this->gkeBackupAgentConfig = $gkeBackupAgentConfig;
  }
  /** @return GkeBackupAgentConfig */
  public function getGkeBackupAgentConfig()
  {
    return $this->gkeBackupAgentConfig;
  }
  /** @param HorizontalPodAutoscaling */
  public function setHorizontalPodAutoscaling(HorizontalPodAutoscaling $horizontalPodAutoscaling)
  {
    $this->horizontalPodAutoscaling = $horizontalPodAutoscaling;
  }
  /** @return HorizontalPodAutoscaling */
  public function getHorizontalPodAutoscaling()
  {
    return $this->horizontalPodAutoscaling;
  }
  /** @param HttpLoadBalancing */
  public function setHttpLoadBalancing(HttpLoadBalancing $httpLoadBalancing)
  {
    $this->httpLoadBalancing = $httpLoadBalancing;
  }
  /** @return HttpLoadBalancing */
  public function getHttpLoadBalancing()
  {
    return $this->httpLoadBalancing;
  }
  /** @param KubernetesDashboard */
  public function setKubernetesDashboard(KubernetesDashboard $kubernetesDashboard)
  {
    $this->kubernetesDashboard = $kubernetesDashboard;
  }
  /** @return KubernetesDashboard */
  public function getKubernetesDashboard()
  {
    return $this->kubernetesDashboard;
  }
  /** @param NetworkPolicyConfig */
  public function setNetworkPolicyConfig(NetworkPolicyConfig $networkPolicyConfig)
  {
    $this->networkPolicyConfig = $networkPolicyConfig;
  }
  /** @return NetworkPolicyConfig */
  public function getNetworkPolicyConfig()
  {
    return $this->networkPolicyConfig;
  }
}

class AdvancedMachineFeatures extends \Google\Model
{
  /** @var string */
  public $threadsPerCore;

  /** @param string */
  public function setThreadsPerCore($threadsPerCore)
  {
    $this->threadsPerCore = $threadsPerCore;
  }
  /** @return string */
  public function getThreadsPerCore()
  {
    return $this->threadsPerCore;
  }
}

class AuthenticatorGroupsConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $securityGroup;

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
  /** @param string */
  public function setSecurityGroup($securityGroup)
  {
    $this->securityGroup = $securityGroup;
  }
  /** @return string */
  public function getSecurityGroup()
  {
    return $this->securityGroup;
  }
}

class AutoUpgradeOptions extends \Google\Model
{
  /** @var string */
  public $autoUpgradeStartTime;
  /** @var string */
  public $description;

  /** @param string */
  public function setAutoUpgradeStartTime($autoUpgradeStartTime)
  {
    $this->autoUpgradeStartTime = $autoUpgradeStartTime;
  }
  /** @return string */
  public function getAutoUpgradeStartTime()
  {
    return $this->autoUpgradeStartTime;
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

class Autopilot extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class AutoprovisioningNodePoolDefaults extends \Google\Collection
{
  /** @var string */
  public $bootDiskKmsKey;
  /** @var int */
  public $diskSizeGb;
  /** @var string */
  public $diskType;
  /** @var string */
  public $imageType;
  /** @var NodeManagement */
  public $management;
  /** @var string */
  public $minCpuPlatform;
  /** @var string[] */
  public $oauthScopes;
  /** @var string */
  public $serviceAccount;
  /** @var ShieldedInstanceConfig */
  public $shieldedInstanceConfig;
  /** @var UpgradeSettings */
  public $upgradeSettings;
  protected $collection_key = 'oauthScopes';
  protected $managementType = NodeManagement::class;
  protected $managementDataType = '';
  protected $shieldedInstanceConfigType = ShieldedInstanceConfig::class;
  protected $shieldedInstanceConfigDataType = '';
  protected $upgradeSettingsType = UpgradeSettings::class;
  protected $upgradeSettingsDataType = '';
  /** @param string */
  public function setBootDiskKmsKey($bootDiskKmsKey)
  {
    $this->bootDiskKmsKey = $bootDiskKmsKey;
  }
  /** @return string */
  public function getBootDiskKmsKey()
  {
    return $this->bootDiskKmsKey;
  }
  /** @param int */
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  /** @return int */
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
  /** @param string */
  public function setImageType($imageType)
  {
    $this->imageType = $imageType;
  }
  /** @return string */
  public function getImageType()
  {
    return $this->imageType;
  }
  /** @param NodeManagement */
  public function setManagement(NodeManagement $management)
  {
    $this->management = $management;
  }
  /** @return NodeManagement */
  public function getManagement()
  {
    return $this->management;
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
  /** @param string[] */
  public function setOauthScopes($oauthScopes)
  {
    $this->oauthScopes = $oauthScopes;
  }
  /** @return string[] */
  public function getOauthScopes()
  {
    return $this->oauthScopes;
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
  /** @param UpgradeSettings */
  public function setUpgradeSettings(UpgradeSettings $upgradeSettings)
  {
    $this->upgradeSettings = $upgradeSettings;
  }
  /** @return UpgradeSettings */
  public function getUpgradeSettings()
  {
    return $this->upgradeSettings;
  }
}

class BigQueryDestination extends \Google\Model
{
  /** @var string */
  public $datasetId;

  /** @param string */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /** @return string */
  public function getDatasetId()
  {
    return $this->datasetId;
  }
}

class BinaryAuthorization extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $evaluationMode;

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
  /** @param string */
  public function setEvaluationMode($evaluationMode)
  {
    $this->evaluationMode = $evaluationMode;
  }
  /** @return string */
  public function getEvaluationMode()
  {
    return $this->evaluationMode;
  }
}

class BlueGreenInfo extends \Google\Collection
{
  /** @var string[] */
  public $blueInstanceGroupUrls;
  /** @var string */
  public $bluePoolDeletionStartTime;
  /** @var string[] */
  public $greenInstanceGroupUrls;
  /** @var string */
  public $greenPoolVersion;
  /** @var string */
  public $phase;
  protected $collection_key = 'greenInstanceGroupUrls';
  /** @param string[] */
  public function setBlueInstanceGroupUrls($blueInstanceGroupUrls)
  {
    $this->blueInstanceGroupUrls = $blueInstanceGroupUrls;
  }
  /** @return string[] */
  public function getBlueInstanceGroupUrls()
  {
    return $this->blueInstanceGroupUrls;
  }
  /** @param string */
  public function setBluePoolDeletionStartTime($bluePoolDeletionStartTime)
  {
    $this->bluePoolDeletionStartTime = $bluePoolDeletionStartTime;
  }
  /** @return string */
  public function getBluePoolDeletionStartTime()
  {
    return $this->bluePoolDeletionStartTime;
  }
  /** @param string[] */
  public function setGreenInstanceGroupUrls($greenInstanceGroupUrls)
  {
    $this->greenInstanceGroupUrls = $greenInstanceGroupUrls;
  }
  /** @return string[] */
  public function getGreenInstanceGroupUrls()
  {
    return $this->greenInstanceGroupUrls;
  }
  /** @param string */
  public function setGreenPoolVersion($greenPoolVersion)
  {
    $this->greenPoolVersion = $greenPoolVersion;
  }
  /** @return string */
  public function getGreenPoolVersion()
  {
    return $this->greenPoolVersion;
  }
  /** @param string */
  public function setPhase($phase)
  {
    $this->phase = $phase;
  }
  /** @return string */
  public function getPhase()
  {
    return $this->phase;
  }
}

class BlueGreenSettings extends \Google\Model
{
  /** @var string */
  public $nodePoolSoakDuration;
  /** @var StandardRolloutPolicy */
  public $standardRolloutPolicy;
  protected $standardRolloutPolicyType = StandardRolloutPolicy::class;
  protected $standardRolloutPolicyDataType = '';
  /** @param string */
  public function setNodePoolSoakDuration($nodePoolSoakDuration)
  {
    $this->nodePoolSoakDuration = $nodePoolSoakDuration;
  }
  /** @return string */
  public function getNodePoolSoakDuration()
  {
    return $this->nodePoolSoakDuration;
  }
  /** @param StandardRolloutPolicy */
  public function setStandardRolloutPolicy(StandardRolloutPolicy $standardRolloutPolicy)
  {
    $this->standardRolloutPolicy = $standardRolloutPolicy;
  }
  /** @return StandardRolloutPolicy */
  public function getStandardRolloutPolicy()
  {
    return $this->standardRolloutPolicy;
  }
}

class CancelOperationRequest extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $operationId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;

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
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /** @return string */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class CidrBlock extends \Google\Model
{
  /** @var string */
  public $cidrBlock;
  /** @var string */
  public $displayName;

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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
}

class ClientCertificateConfig extends \Google\Model
{
  /** @var bool */
  public $issueClientCertificate;

  /** @param bool */
  public function setIssueClientCertificate($issueClientCertificate)
  {
    $this->issueClientCertificate = $issueClientCertificate;
  }
  /** @return bool */
  public function getIssueClientCertificate()
  {
    return $this->issueClientCertificate;
  }
}

class CloudRunConfig extends \Google\Model
{
  /** @var bool */
  public $disabled;
  /** @var string */
  public $loadBalancerType;

  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /** @param string */
  public function setLoadBalancerType($loadBalancerType)
  {
    $this->loadBalancerType = $loadBalancerType;
  }
  /** @return string */
  public function getLoadBalancerType()
  {
    return $this->loadBalancerType;
  }
}

class Cluster extends \Google\Collection
{
  /** @var AddonsConfig */
  public $addonsConfig;
  /** @var AuthenticatorGroupsConfig */
  public $authenticatorGroupsConfig;
  /** @var Autopilot */
  public $autopilot;
  /** @var ClusterAutoscaling */
  public $autoscaling;
  /** @var BinaryAuthorization */
  public $binaryAuthorization;
  /** @var string */
  public $clusterIpv4Cidr;
  /** @var StatusCondition[] */
  public $conditions;
  /** @var ConfidentialNodes */
  public $confidentialNodes;
  /** @var CostManagementConfig */
  public $costManagementConfig;
  /** @var string */
  public $createTime;
  /** @var string */
  public $currentMasterVersion;
  /** @var int */
  public $currentNodeCount;
  /** @var string */
  public $currentNodeVersion;
  /** @var DatabaseEncryption */
  public $databaseEncryption;
  /** @var MaxPodsConstraint */
  public $defaultMaxPodsConstraint;
  /** @var string */
  public $description;
  /** @var bool */
  public $enableKubernetesAlpha;
  /** @var bool */
  public $enableTpu;
  /** @var string */
  public $endpoint;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $id;
  /** @var IdentityServiceConfig */
  public $identityServiceConfig;
  /** @var string */
  public $initialClusterVersion;
  /** @var int */
  public $initialNodeCount;
  /** @var string[] */
  public $instanceGroupUrls;
  /** @var IPAllocationPolicy */
  public $ipAllocationPolicy;
  /** @var string */
  public $labelFingerprint;
  /** @var LegacyAbac */
  public $legacyAbac;
  /** @var string */
  public $location;
  /** @var string[] */
  public $locations;
  /** @var LoggingConfig */
  public $loggingConfig;
  /** @var string */
  public $loggingService;
  /** @var MaintenancePolicy */
  public $maintenancePolicy;
  /** @var MasterAuth */
  public $masterAuth;
  /** @var MasterAuthorizedNetworksConfig */
  public $masterAuthorizedNetworksConfig;
  /** @var MeshCertificates */
  public $meshCertificates;
  /** @var MonitoringConfig */
  public $monitoringConfig;
  /** @var string */
  public $monitoringService;
  /** @var string */
  public $name;
  /** @var string */
  public $network;
  /** @var NetworkConfig */
  public $networkConfig;
  /** @var NetworkPolicy */
  public $networkPolicy;
  /** @var NodeConfig */
  public $nodeConfig;
  /** @var int */
  public $nodeIpv4CidrSize;
  /** @var NodePoolAutoConfig */
  public $nodePoolAutoConfig;
  /** @var NodePoolDefaults */
  public $nodePoolDefaults;
  /** @var NodePool[] */
  public $nodePools;
  /** @var NotificationConfig */
  public $notificationConfig;
  /** @var PrivateClusterConfig */
  public $privateClusterConfig;
  /** @var ReleaseChannel */
  public $releaseChannel;
  /** @var string[] */
  public $resourceLabels;
  /** @var ResourceUsageExportConfig */
  public $resourceUsageExportConfig;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $servicesIpv4Cidr;
  /** @var ShieldedNodes */
  public $shieldedNodes;
  /** @var string */
  public $status;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $subnetwork;
  /** @var string */
  public $tpuIpv4CidrBlock;
  /** @var VerticalPodAutoscaling */
  public $verticalPodAutoscaling;
  /** @var WorkloadIdentityConfig */
  public $workloadIdentityConfig;
  /** @var string */
  public $zone;
  protected $collection_key = 'nodePools';
  protected $addonsConfigType = AddonsConfig::class;
  protected $addonsConfigDataType = '';
  protected $authenticatorGroupsConfigType = AuthenticatorGroupsConfig::class;
  protected $authenticatorGroupsConfigDataType = '';
  protected $autopilotType = Autopilot::class;
  protected $autopilotDataType = '';
  protected $autoscalingType = ClusterAutoscaling::class;
  protected $autoscalingDataType = '';
  protected $binaryAuthorizationType = BinaryAuthorization::class;
  protected $binaryAuthorizationDataType = '';
  protected $conditionsType = StatusCondition::class;
  protected $conditionsDataType = 'array';
  protected $confidentialNodesType = ConfidentialNodes::class;
  protected $confidentialNodesDataType = '';
  protected $costManagementConfigType = CostManagementConfig::class;
  protected $costManagementConfigDataType = '';
  protected $databaseEncryptionType = DatabaseEncryption::class;
  protected $databaseEncryptionDataType = '';
  protected $defaultMaxPodsConstraintType = MaxPodsConstraint::class;
  protected $defaultMaxPodsConstraintDataType = '';
  protected $identityServiceConfigType = IdentityServiceConfig::class;
  protected $identityServiceConfigDataType = '';
  protected $ipAllocationPolicyType = IPAllocationPolicy::class;
  protected $ipAllocationPolicyDataType = '';
  protected $legacyAbacType = LegacyAbac::class;
  protected $legacyAbacDataType = '';
  protected $loggingConfigType = LoggingConfig::class;
  protected $loggingConfigDataType = '';
  protected $maintenancePolicyType = MaintenancePolicy::class;
  protected $maintenancePolicyDataType = '';
  protected $masterAuthType = MasterAuth::class;
  protected $masterAuthDataType = '';
  protected $masterAuthorizedNetworksConfigType = MasterAuthorizedNetworksConfig::class;
  protected $masterAuthorizedNetworksConfigDataType = '';
  protected $meshCertificatesType = MeshCertificates::class;
  protected $meshCertificatesDataType = '';
  protected $monitoringConfigType = MonitoringConfig::class;
  protected $monitoringConfigDataType = '';
  protected $networkConfigType = NetworkConfig::class;
  protected $networkConfigDataType = '';
  protected $networkPolicyType = NetworkPolicy::class;
  protected $networkPolicyDataType = '';
  protected $nodeConfigType = NodeConfig::class;
  protected $nodeConfigDataType = '';
  protected $nodePoolAutoConfigType = NodePoolAutoConfig::class;
  protected $nodePoolAutoConfigDataType = '';
  protected $nodePoolDefaultsType = NodePoolDefaults::class;
  protected $nodePoolDefaultsDataType = '';
  protected $nodePoolsType = NodePool::class;
  protected $nodePoolsDataType = 'array';
  protected $notificationConfigType = NotificationConfig::class;
  protected $notificationConfigDataType = '';
  protected $privateClusterConfigType = PrivateClusterConfig::class;
  protected $privateClusterConfigDataType = '';
  protected $releaseChannelType = ReleaseChannel::class;
  protected $releaseChannelDataType = '';
  protected $resourceUsageExportConfigType = ResourceUsageExportConfig::class;
  protected $resourceUsageExportConfigDataType = '';
  protected $shieldedNodesType = ShieldedNodes::class;
  protected $shieldedNodesDataType = '';
  protected $verticalPodAutoscalingType = VerticalPodAutoscaling::class;
  protected $verticalPodAutoscalingDataType = '';
  protected $workloadIdentityConfigType = WorkloadIdentityConfig::class;
  protected $workloadIdentityConfigDataType = '';
  /** @param AddonsConfig */
  public function setAddonsConfig(AddonsConfig $addonsConfig)
  {
    $this->addonsConfig = $addonsConfig;
  }
  /** @return AddonsConfig */
  public function getAddonsConfig()
  {
    return $this->addonsConfig;
  }
  /** @param AuthenticatorGroupsConfig */
  public function setAuthenticatorGroupsConfig(AuthenticatorGroupsConfig $authenticatorGroupsConfig)
  {
    $this->authenticatorGroupsConfig = $authenticatorGroupsConfig;
  }
  /** @return AuthenticatorGroupsConfig */
  public function getAuthenticatorGroupsConfig()
  {
    return $this->authenticatorGroupsConfig;
  }
  /** @param Autopilot */
  public function setAutopilot(Autopilot $autopilot)
  {
    $this->autopilot = $autopilot;
  }
  /** @return Autopilot */
  public function getAutopilot()
  {
    return $this->autopilot;
  }
  /** @param ClusterAutoscaling */
  public function setAutoscaling(ClusterAutoscaling $autoscaling)
  {
    $this->autoscaling = $autoscaling;
  }
  /** @return ClusterAutoscaling */
  public function getAutoscaling()
  {
    return $this->autoscaling;
  }
  /** @param BinaryAuthorization */
  public function setBinaryAuthorization(BinaryAuthorization $binaryAuthorization)
  {
    $this->binaryAuthorization = $binaryAuthorization;
  }
  /** @return BinaryAuthorization */
  public function getBinaryAuthorization()
  {
    return $this->binaryAuthorization;
  }
  /** @param string */
  public function setClusterIpv4Cidr($clusterIpv4Cidr)
  {
    $this->clusterIpv4Cidr = $clusterIpv4Cidr;
  }
  /** @return string */
  public function getClusterIpv4Cidr()
  {
    return $this->clusterIpv4Cidr;
  }
  /** @param StatusCondition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return StatusCondition[] */
  public function getConditions()
  {
    return $this->conditions;
  }
  /** @param ConfidentialNodes */
  public function setConfidentialNodes(ConfidentialNodes $confidentialNodes)
  {
    $this->confidentialNodes = $confidentialNodes;
  }
  /** @return ConfidentialNodes */
  public function getConfidentialNodes()
  {
    return $this->confidentialNodes;
  }
  /** @param CostManagementConfig */
  public function setCostManagementConfig(CostManagementConfig $costManagementConfig)
  {
    $this->costManagementConfig = $costManagementConfig;
  }
  /** @return CostManagementConfig */
  public function getCostManagementConfig()
  {
    return $this->costManagementConfig;
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
  public function setCurrentMasterVersion($currentMasterVersion)
  {
    $this->currentMasterVersion = $currentMasterVersion;
  }
  /** @return string */
  public function getCurrentMasterVersion()
  {
    return $this->currentMasterVersion;
  }
  /** @param int */
  public function setCurrentNodeCount($currentNodeCount)
  {
    $this->currentNodeCount = $currentNodeCount;
  }
  /** @return int */
  public function getCurrentNodeCount()
  {
    return $this->currentNodeCount;
  }
  /** @param string */
  public function setCurrentNodeVersion($currentNodeVersion)
  {
    $this->currentNodeVersion = $currentNodeVersion;
  }
  /** @return string */
  public function getCurrentNodeVersion()
  {
    return $this->currentNodeVersion;
  }
  /** @param DatabaseEncryption */
  public function setDatabaseEncryption(DatabaseEncryption $databaseEncryption)
  {
    $this->databaseEncryption = $databaseEncryption;
  }
  /** @return DatabaseEncryption */
  public function getDatabaseEncryption()
  {
    return $this->databaseEncryption;
  }
  /** @param MaxPodsConstraint */
  public function setDefaultMaxPodsConstraint(MaxPodsConstraint $defaultMaxPodsConstraint)
  {
    $this->defaultMaxPodsConstraint = $defaultMaxPodsConstraint;
  }
  /** @return MaxPodsConstraint */
  public function getDefaultMaxPodsConstraint()
  {
    return $this->defaultMaxPodsConstraint;
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
  /** @param bool */
  public function setEnableKubernetesAlpha($enableKubernetesAlpha)
  {
    $this->enableKubernetesAlpha = $enableKubernetesAlpha;
  }
  /** @return bool */
  public function getEnableKubernetesAlpha()
  {
    return $this->enableKubernetesAlpha;
  }
  /** @param bool */
  public function setEnableTpu($enableTpu)
  {
    $this->enableTpu = $enableTpu;
  }
  /** @return bool */
  public function getEnableTpu()
  {
    return $this->enableTpu;
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
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param IdentityServiceConfig */
  public function setIdentityServiceConfig(IdentityServiceConfig $identityServiceConfig)
  {
    $this->identityServiceConfig = $identityServiceConfig;
  }
  /** @return IdentityServiceConfig */
  public function getIdentityServiceConfig()
  {
    return $this->identityServiceConfig;
  }
  /** @param string */
  public function setInitialClusterVersion($initialClusterVersion)
  {
    $this->initialClusterVersion = $initialClusterVersion;
  }
  /** @return string */
  public function getInitialClusterVersion()
  {
    return $this->initialClusterVersion;
  }
  /** @param int */
  public function setInitialNodeCount($initialNodeCount)
  {
    $this->initialNodeCount = $initialNodeCount;
  }
  /** @return int */
  public function getInitialNodeCount()
  {
    return $this->initialNodeCount;
  }
  /** @param string[] */
  public function setInstanceGroupUrls($instanceGroupUrls)
  {
    $this->instanceGroupUrls = $instanceGroupUrls;
  }
  /** @return string[] */
  public function getInstanceGroupUrls()
  {
    return $this->instanceGroupUrls;
  }
  /** @param IPAllocationPolicy */
  public function setIpAllocationPolicy(IPAllocationPolicy $ipAllocationPolicy)
  {
    $this->ipAllocationPolicy = $ipAllocationPolicy;
  }
  /** @return IPAllocationPolicy */
  public function getIpAllocationPolicy()
  {
    return $this->ipAllocationPolicy;
  }
  /** @param string */
  public function setLabelFingerprint($labelFingerprint)
  {
    $this->labelFingerprint = $labelFingerprint;
  }
  /** @return string */
  public function getLabelFingerprint()
  {
    return $this->labelFingerprint;
  }
  /** @param LegacyAbac */
  public function setLegacyAbac(LegacyAbac $legacyAbac)
  {
    $this->legacyAbac = $legacyAbac;
  }
  /** @return LegacyAbac */
  public function getLegacyAbac()
  {
    return $this->legacyAbac;
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
  /** @param string[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return string[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param LoggingConfig */
  public function setLoggingConfig(LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return LoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
  /** @param string */
  public function setLoggingService($loggingService)
  {
    $this->loggingService = $loggingService;
  }
  /** @return string */
  public function getLoggingService()
  {
    return $this->loggingService;
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
  /** @param MasterAuth */
  public function setMasterAuth(MasterAuth $masterAuth)
  {
    $this->masterAuth = $masterAuth;
  }
  /** @return MasterAuth */
  public function getMasterAuth()
  {
    return $this->masterAuth;
  }
  /** @param MasterAuthorizedNetworksConfig */
  public function setMasterAuthorizedNetworksConfig(MasterAuthorizedNetworksConfig $masterAuthorizedNetworksConfig)
  {
    $this->masterAuthorizedNetworksConfig = $masterAuthorizedNetworksConfig;
  }
  /** @return MasterAuthorizedNetworksConfig */
  public function getMasterAuthorizedNetworksConfig()
  {
    return $this->masterAuthorizedNetworksConfig;
  }
  /** @param MeshCertificates */
  public function setMeshCertificates(MeshCertificates $meshCertificates)
  {
    $this->meshCertificates = $meshCertificates;
  }
  /** @return MeshCertificates */
  public function getMeshCertificates()
  {
    return $this->meshCertificates;
  }
  /** @param MonitoringConfig */
  public function setMonitoringConfig(MonitoringConfig $monitoringConfig)
  {
    $this->monitoringConfig = $monitoringConfig;
  }
  /** @return MonitoringConfig */
  public function getMonitoringConfig()
  {
    return $this->monitoringConfig;
  }
  /** @param string */
  public function setMonitoringService($monitoringService)
  {
    $this->monitoringService = $monitoringService;
  }
  /** @return string */
  public function getMonitoringService()
  {
    return $this->monitoringService;
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
  /** @param NetworkPolicy */
  public function setNetworkPolicy(NetworkPolicy $networkPolicy)
  {
    $this->networkPolicy = $networkPolicy;
  }
  /** @return NetworkPolicy */
  public function getNetworkPolicy()
  {
    return $this->networkPolicy;
  }
  /** @param NodeConfig */
  public function setNodeConfig(NodeConfig $nodeConfig)
  {
    $this->nodeConfig = $nodeConfig;
  }
  /** @return NodeConfig */
  public function getNodeConfig()
  {
    return $this->nodeConfig;
  }
  /** @param int */
  public function setNodeIpv4CidrSize($nodeIpv4CidrSize)
  {
    $this->nodeIpv4CidrSize = $nodeIpv4CidrSize;
  }
  /** @return int */
  public function getNodeIpv4CidrSize()
  {
    return $this->nodeIpv4CidrSize;
  }
  /** @param NodePoolAutoConfig */
  public function setNodePoolAutoConfig(NodePoolAutoConfig $nodePoolAutoConfig)
  {
    $this->nodePoolAutoConfig = $nodePoolAutoConfig;
  }
  /** @return NodePoolAutoConfig */
  public function getNodePoolAutoConfig()
  {
    return $this->nodePoolAutoConfig;
  }
  /** @param NodePoolDefaults */
  public function setNodePoolDefaults(NodePoolDefaults $nodePoolDefaults)
  {
    $this->nodePoolDefaults = $nodePoolDefaults;
  }
  /** @return NodePoolDefaults */
  public function getNodePoolDefaults()
  {
    return $this->nodePoolDefaults;
  }
  /** @param NodePool[] */
  public function setNodePools($nodePools)
  {
    $this->nodePools = $nodePools;
  }
  /** @return NodePool[] */
  public function getNodePools()
  {
    return $this->nodePools;
  }
  /** @param NotificationConfig */
  public function setNotificationConfig(NotificationConfig $notificationConfig)
  {
    $this->notificationConfig = $notificationConfig;
  }
  /** @return NotificationConfig */
  public function getNotificationConfig()
  {
    return $this->notificationConfig;
  }
  /** @param PrivateClusterConfig */
  public function setPrivateClusterConfig(PrivateClusterConfig $privateClusterConfig)
  {
    $this->privateClusterConfig = $privateClusterConfig;
  }
  /** @return PrivateClusterConfig */
  public function getPrivateClusterConfig()
  {
    return $this->privateClusterConfig;
  }
  /** @param ReleaseChannel */
  public function setReleaseChannel(ReleaseChannel $releaseChannel)
  {
    $this->releaseChannel = $releaseChannel;
  }
  /** @return ReleaseChannel */
  public function getReleaseChannel()
  {
    return $this->releaseChannel;
  }
  /** @param string[] */
  public function setResourceLabels($resourceLabels)
  {
    $this->resourceLabels = $resourceLabels;
  }
  /** @return string[] */
  public function getResourceLabels()
  {
    return $this->resourceLabels;
  }
  /** @param ResourceUsageExportConfig */
  public function setResourceUsageExportConfig(ResourceUsageExportConfig $resourceUsageExportConfig)
  {
    $this->resourceUsageExportConfig = $resourceUsageExportConfig;
  }
  /** @return ResourceUsageExportConfig */
  public function getResourceUsageExportConfig()
  {
    return $this->resourceUsageExportConfig;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param string */
  public function setServicesIpv4Cidr($servicesIpv4Cidr)
  {
    $this->servicesIpv4Cidr = $servicesIpv4Cidr;
  }
  /** @return string */
  public function getServicesIpv4Cidr()
  {
    return $this->servicesIpv4Cidr;
  }
  /** @param ShieldedNodes */
  public function setShieldedNodes(ShieldedNodes $shieldedNodes)
  {
    $this->shieldedNodes = $shieldedNodes;
  }
  /** @return ShieldedNodes */
  public function getShieldedNodes()
  {
    return $this->shieldedNodes;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
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
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /** @return string */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
  /** @param string */
  public function setTpuIpv4CidrBlock($tpuIpv4CidrBlock)
  {
    $this->tpuIpv4CidrBlock = $tpuIpv4CidrBlock;
  }
  /** @return string */
  public function getTpuIpv4CidrBlock()
  {
    return $this->tpuIpv4CidrBlock;
  }
  /** @param VerticalPodAutoscaling */
  public function setVerticalPodAutoscaling(VerticalPodAutoscaling $verticalPodAutoscaling)
  {
    $this->verticalPodAutoscaling = $verticalPodAutoscaling;
  }
  /** @return VerticalPodAutoscaling */
  public function getVerticalPodAutoscaling()
  {
    return $this->verticalPodAutoscaling;
  }
  /** @param WorkloadIdentityConfig */
  public function setWorkloadIdentityConfig(WorkloadIdentityConfig $workloadIdentityConfig)
  {
    $this->workloadIdentityConfig = $workloadIdentityConfig;
  }
  /** @return WorkloadIdentityConfig */
  public function getWorkloadIdentityConfig()
  {
    return $this->workloadIdentityConfig;
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

class ClusterAutoscaling extends \Google\Collection
{
  /** @var string[] */
  public $autoprovisioningLocations;
  /** @var AutoprovisioningNodePoolDefaults */
  public $autoprovisioningNodePoolDefaults;
  /** @var string */
  public $autoscalingProfile;
  /** @var bool */
  public $enableNodeAutoprovisioning;
  /** @var ResourceLimit[] */
  public $resourceLimits;
  protected $collection_key = 'resourceLimits';
  protected $autoprovisioningNodePoolDefaultsType = AutoprovisioningNodePoolDefaults::class;
  protected $autoprovisioningNodePoolDefaultsDataType = '';
  protected $resourceLimitsType = ResourceLimit::class;
  protected $resourceLimitsDataType = 'array';
  /** @param string[] */
  public function setAutoprovisioningLocations($autoprovisioningLocations)
  {
    $this->autoprovisioningLocations = $autoprovisioningLocations;
  }
  /** @return string[] */
  public function getAutoprovisioningLocations()
  {
    return $this->autoprovisioningLocations;
  }
  /** @param AutoprovisioningNodePoolDefaults */
  public function setAutoprovisioningNodePoolDefaults(AutoprovisioningNodePoolDefaults $autoprovisioningNodePoolDefaults)
  {
    $this->autoprovisioningNodePoolDefaults = $autoprovisioningNodePoolDefaults;
  }
  /** @return AutoprovisioningNodePoolDefaults */
  public function getAutoprovisioningNodePoolDefaults()
  {
    return $this->autoprovisioningNodePoolDefaults;
  }
  /** @param string */
  public function setAutoscalingProfile($autoscalingProfile)
  {
    $this->autoscalingProfile = $autoscalingProfile;
  }
  /** @return string */
  public function getAutoscalingProfile()
  {
    return $this->autoscalingProfile;
  }
  /** @param bool */
  public function setEnableNodeAutoprovisioning($enableNodeAutoprovisioning)
  {
    $this->enableNodeAutoprovisioning = $enableNodeAutoprovisioning;
  }
  /** @return bool */
  public function getEnableNodeAutoprovisioning()
  {
    return $this->enableNodeAutoprovisioning;
  }
  /** @param ResourceLimit[] */
  public function setResourceLimits($resourceLimits)
  {
    $this->resourceLimits = $resourceLimits;
  }
  /** @return ResourceLimit[] */
  public function getResourceLimits()
  {
    return $this->resourceLimits;
  }
}

class ClusterUpdate extends \Google\Collection
{
  /** @var AddonsConfig */
  public $desiredAddonsConfig;
  /** @var AuthenticatorGroupsConfig */
  public $desiredAuthenticatorGroupsConfig;
  /** @var BinaryAuthorization */
  public $desiredBinaryAuthorization;
  /** @var ClusterAutoscaling */
  public $desiredClusterAutoscaling;
  /** @var CostManagementConfig */
  public $desiredCostManagementConfig;
  /** @var DatabaseEncryption */
  public $desiredDatabaseEncryption;
  /** @var string */
  public $desiredDatapathProvider;
  /** @var DefaultSnatStatus */
  public $desiredDefaultSnatStatus;
  /** @var DNSConfig */
  public $desiredDnsConfig;
  /** @var bool */
  public $desiredEnablePrivateEndpoint;
  /** @var GatewayAPIConfig */
  public $desiredGatewayApiConfig;
  /** @var GcfsConfig */
  public $desiredGcfsConfig;
  /** @var IdentityServiceConfig */
  public $desiredIdentityServiceConfig;
  /** @var string */
  public $desiredImageType;
  /** @var IntraNodeVisibilityConfig */
  public $desiredIntraNodeVisibilityConfig;
  /** @var ILBSubsettingConfig */
  public $desiredL4ilbSubsettingConfig;
  /** @var string[] */
  public $desiredLocations;
  /** @var LoggingConfig */
  public $desiredLoggingConfig;
  /** @var string */
  public $desiredLoggingService;
  /** @var MasterAuthorizedNetworksConfig */
  public $desiredMasterAuthorizedNetworksConfig;
  /** @var string */
  public $desiredMasterVersion;
  /** @var MeshCertificates */
  public $desiredMeshCertificates;
  /** @var MonitoringConfig */
  public $desiredMonitoringConfig;
  /** @var string */
  public $desiredMonitoringService;
  /** @var NetworkTags */
  public $desiredNodePoolAutoConfigNetworkTags;
  /** @var NodePoolAutoscaling */
  public $desiredNodePoolAutoscaling;
  /** @var string */
  public $desiredNodePoolId;
  /** @var NodePoolLoggingConfig */
  public $desiredNodePoolLoggingConfig;
  /** @var string */
  public $desiredNodeVersion;
  /** @var NotificationConfig */
  public $desiredNotificationConfig;
  /** @var PrivateClusterConfig */
  public $desiredPrivateClusterConfig;
  /** @var string */
  public $desiredPrivateIpv6GoogleAccess;
  /** @var ReleaseChannel */
  public $desiredReleaseChannel;
  /** @var ResourceUsageExportConfig */
  public $desiredResourceUsageExportConfig;
  /** @var ServiceExternalIPsConfig */
  public $desiredServiceExternalIpsConfig;
  /** @var ShieldedNodes */
  public $desiredShieldedNodes;
  /** @var VerticalPodAutoscaling */
  public $desiredVerticalPodAutoscaling;
  /** @var WorkloadIdentityConfig */
  public $desiredWorkloadIdentityConfig;
  protected $collection_key = 'desiredLocations';
  protected $desiredAddonsConfigType = AddonsConfig::class;
  protected $desiredAddonsConfigDataType = '';
  protected $desiredAuthenticatorGroupsConfigType = AuthenticatorGroupsConfig::class;
  protected $desiredAuthenticatorGroupsConfigDataType = '';
  protected $desiredBinaryAuthorizationType = BinaryAuthorization::class;
  protected $desiredBinaryAuthorizationDataType = '';
  protected $desiredClusterAutoscalingType = ClusterAutoscaling::class;
  protected $desiredClusterAutoscalingDataType = '';
  protected $desiredCostManagementConfigType = CostManagementConfig::class;
  protected $desiredCostManagementConfigDataType = '';
  protected $desiredDatabaseEncryptionType = DatabaseEncryption::class;
  protected $desiredDatabaseEncryptionDataType = '';
  protected $desiredDefaultSnatStatusType = DefaultSnatStatus::class;
  protected $desiredDefaultSnatStatusDataType = '';
  protected $desiredDnsConfigType = DNSConfig::class;
  protected $desiredDnsConfigDataType = '';
  protected $desiredGatewayApiConfigType = GatewayAPIConfig::class;
  protected $desiredGatewayApiConfigDataType = '';
  protected $desiredGcfsConfigType = GcfsConfig::class;
  protected $desiredGcfsConfigDataType = '';
  protected $desiredIdentityServiceConfigType = IdentityServiceConfig::class;
  protected $desiredIdentityServiceConfigDataType = '';
  protected $desiredIntraNodeVisibilityConfigType = IntraNodeVisibilityConfig::class;
  protected $desiredIntraNodeVisibilityConfigDataType = '';
  protected $desiredL4ilbSubsettingConfigType = ILBSubsettingConfig::class;
  protected $desiredL4ilbSubsettingConfigDataType = '';
  protected $desiredLoggingConfigType = LoggingConfig::class;
  protected $desiredLoggingConfigDataType = '';
  protected $desiredMasterAuthorizedNetworksConfigType = MasterAuthorizedNetworksConfig::class;
  protected $desiredMasterAuthorizedNetworksConfigDataType = '';
  protected $desiredMeshCertificatesType = MeshCertificates::class;
  protected $desiredMeshCertificatesDataType = '';
  protected $desiredMonitoringConfigType = MonitoringConfig::class;
  protected $desiredMonitoringConfigDataType = '';
  protected $desiredNodePoolAutoConfigNetworkTagsType = NetworkTags::class;
  protected $desiredNodePoolAutoConfigNetworkTagsDataType = '';
  protected $desiredNodePoolAutoscalingType = NodePoolAutoscaling::class;
  protected $desiredNodePoolAutoscalingDataType = '';
  protected $desiredNodePoolLoggingConfigType = NodePoolLoggingConfig::class;
  protected $desiredNodePoolLoggingConfigDataType = '';
  protected $desiredNotificationConfigType = NotificationConfig::class;
  protected $desiredNotificationConfigDataType = '';
  protected $desiredPrivateClusterConfigType = PrivateClusterConfig::class;
  protected $desiredPrivateClusterConfigDataType = '';
  protected $desiredReleaseChannelType = ReleaseChannel::class;
  protected $desiredReleaseChannelDataType = '';
  protected $desiredResourceUsageExportConfigType = ResourceUsageExportConfig::class;
  protected $desiredResourceUsageExportConfigDataType = '';
  protected $desiredServiceExternalIpsConfigType = ServiceExternalIPsConfig::class;
  protected $desiredServiceExternalIpsConfigDataType = '';
  protected $desiredShieldedNodesType = ShieldedNodes::class;
  protected $desiredShieldedNodesDataType = '';
  protected $desiredVerticalPodAutoscalingType = VerticalPodAutoscaling::class;
  protected $desiredVerticalPodAutoscalingDataType = '';
  protected $desiredWorkloadIdentityConfigType = WorkloadIdentityConfig::class;
  protected $desiredWorkloadIdentityConfigDataType = '';
  /** @param AddonsConfig */
  public function setDesiredAddonsConfig(AddonsConfig $desiredAddonsConfig)
  {
    $this->desiredAddonsConfig = $desiredAddonsConfig;
  }
  /** @return AddonsConfig */
  public function getDesiredAddonsConfig()
  {
    return $this->desiredAddonsConfig;
  }
  /** @param AuthenticatorGroupsConfig */
  public function setDesiredAuthenticatorGroupsConfig(AuthenticatorGroupsConfig $desiredAuthenticatorGroupsConfig)
  {
    $this->desiredAuthenticatorGroupsConfig = $desiredAuthenticatorGroupsConfig;
  }
  /** @return AuthenticatorGroupsConfig */
  public function getDesiredAuthenticatorGroupsConfig()
  {
    return $this->desiredAuthenticatorGroupsConfig;
  }
  /** @param BinaryAuthorization */
  public function setDesiredBinaryAuthorization(BinaryAuthorization $desiredBinaryAuthorization)
  {
    $this->desiredBinaryAuthorization = $desiredBinaryAuthorization;
  }
  /** @return BinaryAuthorization */
  public function getDesiredBinaryAuthorization()
  {
    return $this->desiredBinaryAuthorization;
  }
  /** @param ClusterAutoscaling */
  public function setDesiredClusterAutoscaling(ClusterAutoscaling $desiredClusterAutoscaling)
  {
    $this->desiredClusterAutoscaling = $desiredClusterAutoscaling;
  }
  /** @return ClusterAutoscaling */
  public function getDesiredClusterAutoscaling()
  {
    return $this->desiredClusterAutoscaling;
  }
  /** @param CostManagementConfig */
  public function setDesiredCostManagementConfig(CostManagementConfig $desiredCostManagementConfig)
  {
    $this->desiredCostManagementConfig = $desiredCostManagementConfig;
  }
  /** @return CostManagementConfig */
  public function getDesiredCostManagementConfig()
  {
    return $this->desiredCostManagementConfig;
  }
  /** @param DatabaseEncryption */
  public function setDesiredDatabaseEncryption(DatabaseEncryption $desiredDatabaseEncryption)
  {
    $this->desiredDatabaseEncryption = $desiredDatabaseEncryption;
  }
  /** @return DatabaseEncryption */
  public function getDesiredDatabaseEncryption()
  {
    return $this->desiredDatabaseEncryption;
  }
  /** @param string */
  public function setDesiredDatapathProvider($desiredDatapathProvider)
  {
    $this->desiredDatapathProvider = $desiredDatapathProvider;
  }
  /** @return string */
  public function getDesiredDatapathProvider()
  {
    return $this->desiredDatapathProvider;
  }
  /** @param DefaultSnatStatus */
  public function setDesiredDefaultSnatStatus(DefaultSnatStatus $desiredDefaultSnatStatus)
  {
    $this->desiredDefaultSnatStatus = $desiredDefaultSnatStatus;
  }
  /** @return DefaultSnatStatus */
  public function getDesiredDefaultSnatStatus()
  {
    return $this->desiredDefaultSnatStatus;
  }
  /** @param DNSConfig */
  public function setDesiredDnsConfig(DNSConfig $desiredDnsConfig)
  {
    $this->desiredDnsConfig = $desiredDnsConfig;
  }
  /** @return DNSConfig */
  public function getDesiredDnsConfig()
  {
    return $this->desiredDnsConfig;
  }
  /** @param bool */
  public function setDesiredEnablePrivateEndpoint($desiredEnablePrivateEndpoint)
  {
    $this->desiredEnablePrivateEndpoint = $desiredEnablePrivateEndpoint;
  }
  /** @return bool */
  public function getDesiredEnablePrivateEndpoint()
  {
    return $this->desiredEnablePrivateEndpoint;
  }
  /** @param GatewayAPIConfig */
  public function setDesiredGatewayApiConfig(GatewayAPIConfig $desiredGatewayApiConfig)
  {
    $this->desiredGatewayApiConfig = $desiredGatewayApiConfig;
  }
  /** @return GatewayAPIConfig */
  public function getDesiredGatewayApiConfig()
  {
    return $this->desiredGatewayApiConfig;
  }
  /** @param GcfsConfig */
  public function setDesiredGcfsConfig(GcfsConfig $desiredGcfsConfig)
  {
    $this->desiredGcfsConfig = $desiredGcfsConfig;
  }
  /** @return GcfsConfig */
  public function getDesiredGcfsConfig()
  {
    return $this->desiredGcfsConfig;
  }
  /** @param IdentityServiceConfig */
  public function setDesiredIdentityServiceConfig(IdentityServiceConfig $desiredIdentityServiceConfig)
  {
    $this->desiredIdentityServiceConfig = $desiredIdentityServiceConfig;
  }
  /** @return IdentityServiceConfig */
  public function getDesiredIdentityServiceConfig()
  {
    return $this->desiredIdentityServiceConfig;
  }
  /** @param string */
  public function setDesiredImageType($desiredImageType)
  {
    $this->desiredImageType = $desiredImageType;
  }
  /** @return string */
  public function getDesiredImageType()
  {
    return $this->desiredImageType;
  }
  /** @param IntraNodeVisibilityConfig */
  public function setDesiredIntraNodeVisibilityConfig(IntraNodeVisibilityConfig $desiredIntraNodeVisibilityConfig)
  {
    $this->desiredIntraNodeVisibilityConfig = $desiredIntraNodeVisibilityConfig;
  }
  /** @return IntraNodeVisibilityConfig */
  public function getDesiredIntraNodeVisibilityConfig()
  {
    return $this->desiredIntraNodeVisibilityConfig;
  }
  /** @param ILBSubsettingConfig */
  public function setDesiredL4ilbSubsettingConfig(ILBSubsettingConfig $desiredL4ilbSubsettingConfig)
  {
    $this->desiredL4ilbSubsettingConfig = $desiredL4ilbSubsettingConfig;
  }
  /** @return ILBSubsettingConfig */
  public function getDesiredL4ilbSubsettingConfig()
  {
    return $this->desiredL4ilbSubsettingConfig;
  }
  /** @param string[] */
  public function setDesiredLocations($desiredLocations)
  {
    $this->desiredLocations = $desiredLocations;
  }
  /** @return string[] */
  public function getDesiredLocations()
  {
    return $this->desiredLocations;
  }
  /** @param LoggingConfig */
  public function setDesiredLoggingConfig(LoggingConfig $desiredLoggingConfig)
  {
    $this->desiredLoggingConfig = $desiredLoggingConfig;
  }
  /** @return LoggingConfig */
  public function getDesiredLoggingConfig()
  {
    return $this->desiredLoggingConfig;
  }
  /** @param string */
  public function setDesiredLoggingService($desiredLoggingService)
  {
    $this->desiredLoggingService = $desiredLoggingService;
  }
  /** @return string */
  public function getDesiredLoggingService()
  {
    return $this->desiredLoggingService;
  }
  /** @param MasterAuthorizedNetworksConfig */
  public function setDesiredMasterAuthorizedNetworksConfig(MasterAuthorizedNetworksConfig $desiredMasterAuthorizedNetworksConfig)
  {
    $this->desiredMasterAuthorizedNetworksConfig = $desiredMasterAuthorizedNetworksConfig;
  }
  /** @return MasterAuthorizedNetworksConfig */
  public function getDesiredMasterAuthorizedNetworksConfig()
  {
    return $this->desiredMasterAuthorizedNetworksConfig;
  }
  /** @param string */
  public function setDesiredMasterVersion($desiredMasterVersion)
  {
    $this->desiredMasterVersion = $desiredMasterVersion;
  }
  /** @return string */
  public function getDesiredMasterVersion()
  {
    return $this->desiredMasterVersion;
  }
  /** @param MeshCertificates */
  public function setDesiredMeshCertificates(MeshCertificates $desiredMeshCertificates)
  {
    $this->desiredMeshCertificates = $desiredMeshCertificates;
  }
  /** @return MeshCertificates */
  public function getDesiredMeshCertificates()
  {
    return $this->desiredMeshCertificates;
  }
  /** @param MonitoringConfig */
  public function setDesiredMonitoringConfig(MonitoringConfig $desiredMonitoringConfig)
  {
    $this->desiredMonitoringConfig = $desiredMonitoringConfig;
  }
  /** @return MonitoringConfig */
  public function getDesiredMonitoringConfig()
  {
    return $this->desiredMonitoringConfig;
  }
  /** @param string */
  public function setDesiredMonitoringService($desiredMonitoringService)
  {
    $this->desiredMonitoringService = $desiredMonitoringService;
  }
  /** @return string */
  public function getDesiredMonitoringService()
  {
    return $this->desiredMonitoringService;
  }
  /** @param NetworkTags */
  public function setDesiredNodePoolAutoConfigNetworkTags(NetworkTags $desiredNodePoolAutoConfigNetworkTags)
  {
    $this->desiredNodePoolAutoConfigNetworkTags = $desiredNodePoolAutoConfigNetworkTags;
  }
  /** @return NetworkTags */
  public function getDesiredNodePoolAutoConfigNetworkTags()
  {
    return $this->desiredNodePoolAutoConfigNetworkTags;
  }
  /** @param NodePoolAutoscaling */
  public function setDesiredNodePoolAutoscaling(NodePoolAutoscaling $desiredNodePoolAutoscaling)
  {
    $this->desiredNodePoolAutoscaling = $desiredNodePoolAutoscaling;
  }
  /** @return NodePoolAutoscaling */
  public function getDesiredNodePoolAutoscaling()
  {
    return $this->desiredNodePoolAutoscaling;
  }
  /** @param string */
  public function setDesiredNodePoolId($desiredNodePoolId)
  {
    $this->desiredNodePoolId = $desiredNodePoolId;
  }
  /** @return string */
  public function getDesiredNodePoolId()
  {
    return $this->desiredNodePoolId;
  }
  /** @param NodePoolLoggingConfig */
  public function setDesiredNodePoolLoggingConfig(NodePoolLoggingConfig $desiredNodePoolLoggingConfig)
  {
    $this->desiredNodePoolLoggingConfig = $desiredNodePoolLoggingConfig;
  }
  /** @return NodePoolLoggingConfig */
  public function getDesiredNodePoolLoggingConfig()
  {
    return $this->desiredNodePoolLoggingConfig;
  }
  /** @param string */
  public function setDesiredNodeVersion($desiredNodeVersion)
  {
    $this->desiredNodeVersion = $desiredNodeVersion;
  }
  /** @return string */
  public function getDesiredNodeVersion()
  {
    return $this->desiredNodeVersion;
  }
  /** @param NotificationConfig */
  public function setDesiredNotificationConfig(NotificationConfig $desiredNotificationConfig)
  {
    $this->desiredNotificationConfig = $desiredNotificationConfig;
  }
  /** @return NotificationConfig */
  public function getDesiredNotificationConfig()
  {
    return $this->desiredNotificationConfig;
  }
  /** @param PrivateClusterConfig */
  public function setDesiredPrivateClusterConfig(PrivateClusterConfig $desiredPrivateClusterConfig)
  {
    $this->desiredPrivateClusterConfig = $desiredPrivateClusterConfig;
  }
  /** @return PrivateClusterConfig */
  public function getDesiredPrivateClusterConfig()
  {
    return $this->desiredPrivateClusterConfig;
  }
  /** @param string */
  public function setDesiredPrivateIpv6GoogleAccess($desiredPrivateIpv6GoogleAccess)
  {
    $this->desiredPrivateIpv6GoogleAccess = $desiredPrivateIpv6GoogleAccess;
  }
  /** @return string */
  public function getDesiredPrivateIpv6GoogleAccess()
  {
    return $this->desiredPrivateIpv6GoogleAccess;
  }
  /** @param ReleaseChannel */
  public function setDesiredReleaseChannel(ReleaseChannel $desiredReleaseChannel)
  {
    $this->desiredReleaseChannel = $desiredReleaseChannel;
  }
  /** @return ReleaseChannel */
  public function getDesiredReleaseChannel()
  {
    return $this->desiredReleaseChannel;
  }
  /** @param ResourceUsageExportConfig */
  public function setDesiredResourceUsageExportConfig(ResourceUsageExportConfig $desiredResourceUsageExportConfig)
  {
    $this->desiredResourceUsageExportConfig = $desiredResourceUsageExportConfig;
  }
  /** @return ResourceUsageExportConfig */
  public function getDesiredResourceUsageExportConfig()
  {
    return $this->desiredResourceUsageExportConfig;
  }
  /** @param ServiceExternalIPsConfig */
  public function setDesiredServiceExternalIpsConfig(ServiceExternalIPsConfig $desiredServiceExternalIpsConfig)
  {
    $this->desiredServiceExternalIpsConfig = $desiredServiceExternalIpsConfig;
  }
  /** @return ServiceExternalIPsConfig */
  public function getDesiredServiceExternalIpsConfig()
  {
    return $this->desiredServiceExternalIpsConfig;
  }
  /** @param ShieldedNodes */
  public function setDesiredShieldedNodes(ShieldedNodes $desiredShieldedNodes)
  {
    $this->desiredShieldedNodes = $desiredShieldedNodes;
  }
  /** @return ShieldedNodes */
  public function getDesiredShieldedNodes()
  {
    return $this->desiredShieldedNodes;
  }
  /** @param VerticalPodAutoscaling */
  public function setDesiredVerticalPodAutoscaling(VerticalPodAutoscaling $desiredVerticalPodAutoscaling)
  {
    $this->desiredVerticalPodAutoscaling = $desiredVerticalPodAutoscaling;
  }
  /** @return VerticalPodAutoscaling */
  public function getDesiredVerticalPodAutoscaling()
  {
    return $this->desiredVerticalPodAutoscaling;
  }
  /** @param WorkloadIdentityConfig */
  public function setDesiredWorkloadIdentityConfig(WorkloadIdentityConfig $desiredWorkloadIdentityConfig)
  {
    $this->desiredWorkloadIdentityConfig = $desiredWorkloadIdentityConfig;
  }
  /** @return WorkloadIdentityConfig */
  public function getDesiredWorkloadIdentityConfig()
  {
    return $this->desiredWorkloadIdentityConfig;
  }
}

class CompleteIPRotationRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;

  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class CompleteNodePoolUpgradeRequest extends \Google\Model
{
}

class ConfidentialNodes extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class ConfigConnectorConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class ConsumptionMeteringConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class ContainerEmpty extends \Google\Model
{
}

class CostManagementConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class CreateClusterRequest extends \Google\Model
{
  /** @var Cluster */
  public $cluster;
  /** @var string */
  public $parent;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;
  protected $clusterType = Cluster::class;
  protected $clusterDataType = '';
  /** @param Cluster */
  public function setCluster(Cluster $cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return Cluster */
  public function getCluster()
  {
    return $this->cluster;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class CreateNodePoolRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var NodePool */
  public $nodePool;
  /** @var string */
  public $parent;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;
  protected $nodePoolType = NodePool::class;
  protected $nodePoolDataType = '';
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param NodePool */
  public function setNodePool(NodePool $nodePool)
  {
    $this->nodePool = $nodePool;
  }
  /** @return NodePool */
  public function getNodePool()
  {
    return $this->nodePool;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class DNSConfig extends \Google\Model
{
  /** @var string */
  public $clusterDns;
  /** @var string */
  public $clusterDnsDomain;
  /** @var string */
  public $clusterDnsScope;

  /** @param string */
  public function setClusterDns($clusterDns)
  {
    $this->clusterDns = $clusterDns;
  }
  /** @return string */
  public function getClusterDns()
  {
    return $this->clusterDns;
  }
  /** @param string */
  public function setClusterDnsDomain($clusterDnsDomain)
  {
    $this->clusterDnsDomain = $clusterDnsDomain;
  }
  /** @return string */
  public function getClusterDnsDomain()
  {
    return $this->clusterDnsDomain;
  }
  /** @param string */
  public function setClusterDnsScope($clusterDnsScope)
  {
    $this->clusterDnsScope = $clusterDnsScope;
  }
  /** @return string */
  public function getClusterDnsScope()
  {
    return $this->clusterDnsScope;
  }
}

class DailyMaintenanceWindow extends \Google\Model
{
  /** @var string */
  public $duration;
  /** @var string */
  public $startTime;

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

class DatabaseEncryption extends \Google\Model
{
  /** @var string */
  public $keyName;
  /** @var string */
  public $state;

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

class DefaultSnatStatus extends \Google\Model
{
  /** @var bool */
  public $disabled;

  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
}

class DnsCacheConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class FastSocket extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class Filter extends \Google\Collection
{
  /** @var string[] */
  public $eventType;
  protected $collection_key = 'eventType';
  /** @param string[] */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string[] */
  public function getEventType()
  {
    return $this->eventType;
  }
}

class GPUSharingConfig extends \Google\Model
{
  /** @var string */
  public $gpuSharingStrategy;
  /** @var string */
  public $maxSharedClientsPerGpu;

  /** @param string */
  public function setGpuSharingStrategy($gpuSharingStrategy)
  {
    $this->gpuSharingStrategy = $gpuSharingStrategy;
  }
  /** @return string */
  public function getGpuSharingStrategy()
  {
    return $this->gpuSharingStrategy;
  }
  /** @param string */
  public function setMaxSharedClientsPerGpu($maxSharedClientsPerGpu)
  {
    $this->maxSharedClientsPerGpu = $maxSharedClientsPerGpu;
  }
  /** @return string */
  public function getMaxSharedClientsPerGpu()
  {
    return $this->maxSharedClientsPerGpu;
  }
}

class GatewayAPIConfig extends \Google\Model
{
  /** @var string */
  public $channel;

  /** @param string */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /** @return string */
  public function getChannel()
  {
    return $this->channel;
  }
}

class GcePersistentDiskCsiDriverConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class GcfsConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class GcpFilestoreCsiDriverConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class GetJSONWebKeysResponse extends \Google\Collection
{
  /** @var HttpCacheControlResponseHeader */
  public $cacheHeader;
  /** @var Jwk[] */
  public $keys;
  protected $collection_key = 'keys';
  protected $cacheHeaderType = HttpCacheControlResponseHeader::class;
  protected $cacheHeaderDataType = '';
  protected $keysType = Jwk::class;
  protected $keysDataType = 'array';
  /** @param HttpCacheControlResponseHeader */
  public function setCacheHeader(HttpCacheControlResponseHeader $cacheHeader)
  {
    $this->cacheHeader = $cacheHeader;
  }
  /** @return HttpCacheControlResponseHeader */
  public function getCacheHeader()
  {
    return $this->cacheHeader;
  }
  /** @param Jwk[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return Jwk[] */
  public function getKeys()
  {
    return $this->keys;
  }
}

class GetOpenIDConfigResponse extends \Google\Collection
{
  /** @var HttpCacheControlResponseHeader */
  public $cacheHeader;
  /** @var string[] */
  public $claimsSupported;
  /** @var string[] */
  public $grantTypes;
  /** @var string[] */
  public $idTokenSigningAlgValuesSupported;
  /** @var string */
  public $issuer;
  /** @var string */
  public $jwksUri;
  /** @var string[] */
  public $responseTypesSupported;
  /** @var string[] */
  public $subjectTypesSupported;
  protected $collection_key = 'subject_types_supported';
  protected $internal_gapi_mappings = [
        "claimsSupported" => "claims_supported",
        "grantTypes" => "grant_types",
        "idTokenSigningAlgValuesSupported" => "id_token_signing_alg_values_supported",
        "jwksUri" => "jwks_uri",
        "responseTypesSupported" => "response_types_supported",
        "subjectTypesSupported" => "subject_types_supported",
  ];
  protected $cacheHeaderType = HttpCacheControlResponseHeader::class;
  protected $cacheHeaderDataType = '';
  /** @param HttpCacheControlResponseHeader */
  public function setCacheHeader(HttpCacheControlResponseHeader $cacheHeader)
  {
    $this->cacheHeader = $cacheHeader;
  }
  /** @return HttpCacheControlResponseHeader */
  public function getCacheHeader()
  {
    return $this->cacheHeader;
  }
  /** @param string[] */
  public function setClaimsSupported($claimsSupported)
  {
    $this->claimsSupported = $claimsSupported;
  }
  /** @return string[] */
  public function getClaimsSupported()
  {
    return $this->claimsSupported;
  }
  /** @param string[] */
  public function setGrantTypes($grantTypes)
  {
    $this->grantTypes = $grantTypes;
  }
  /** @return string[] */
  public function getGrantTypes()
  {
    return $this->grantTypes;
  }
  /** @param string[] */
  public function setIdTokenSigningAlgValuesSupported($idTokenSigningAlgValuesSupported)
  {
    $this->idTokenSigningAlgValuesSupported = $idTokenSigningAlgValuesSupported;
  }
  /** @return string[] */
  public function getIdTokenSigningAlgValuesSupported()
  {
    return $this->idTokenSigningAlgValuesSupported;
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
  public function setJwksUri($jwksUri)
  {
    $this->jwksUri = $jwksUri;
  }
  /** @return string */
  public function getJwksUri()
  {
    return $this->jwksUri;
  }
  /** @param string[] */
  public function setResponseTypesSupported($responseTypesSupported)
  {
    $this->responseTypesSupported = $responseTypesSupported;
  }
  /** @return string[] */
  public function getResponseTypesSupported()
  {
    return $this->responseTypesSupported;
  }
  /** @param string[] */
  public function setSubjectTypesSupported($subjectTypesSupported)
  {
    $this->subjectTypesSupported = $subjectTypesSupported;
  }
  /** @return string[] */
  public function getSubjectTypesSupported()
  {
    return $this->subjectTypesSupported;
  }
}

class GkeBackupAgentConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class HorizontalPodAutoscaling extends \Google\Model
{
  /** @var bool */
  public $disabled;

  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
}

class HttpCacheControlResponseHeader extends \Google\Model
{
  /** @var string */
  public $age;
  /** @var string */
  public $directive;
  /** @var string */
  public $expires;

  /** @param string */
  public function setAge($age)
  {
    $this->age = $age;
  }
  /** @return string */
  public function getAge()
  {
    return $this->age;
  }
  /** @param string */
  public function setDirective($directive)
  {
    $this->directive = $directive;
  }
  /** @return string */
  public function getDirective()
  {
    return $this->directive;
  }
  /** @param string */
  public function setExpires($expires)
  {
    $this->expires = $expires;
  }
  /** @return string */
  public function getExpires()
  {
    return $this->expires;
  }
}

class HttpLoadBalancing extends \Google\Model
{
  /** @var bool */
  public $disabled;

  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
}

class ILBSubsettingConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class IPAllocationPolicy extends \Google\Model
{
  /** @var string */
  public $clusterIpv4Cidr;
  /** @var string */
  public $clusterIpv4CidrBlock;
  /** @var string */
  public $clusterSecondaryRangeName;
  /** @var bool */
  public $createSubnetwork;
  /** @var string */
  public $ipv6AccessType;
  /** @var string */
  public $nodeIpv4Cidr;
  /** @var string */
  public $nodeIpv4CidrBlock;
  /** @var string */
  public $servicesIpv4Cidr;
  /** @var string */
  public $servicesIpv4CidrBlock;
  /** @var string */
  public $servicesSecondaryRangeName;
  /** @var string */
  public $stackType;
  /** @var string */
  public $subnetworkName;
  /** @var string */
  public $tpuIpv4CidrBlock;
  /** @var bool */
  public $useIpAliases;
  /** @var bool */
  public $useRoutes;

  /** @param string */
  public function setClusterIpv4Cidr($clusterIpv4Cidr)
  {
    $this->clusterIpv4Cidr = $clusterIpv4Cidr;
  }
  /** @return string */
  public function getClusterIpv4Cidr()
  {
    return $this->clusterIpv4Cidr;
  }
  /** @param string */
  public function setClusterIpv4CidrBlock($clusterIpv4CidrBlock)
  {
    $this->clusterIpv4CidrBlock = $clusterIpv4CidrBlock;
  }
  /** @return string */
  public function getClusterIpv4CidrBlock()
  {
    return $this->clusterIpv4CidrBlock;
  }
  /** @param string */
  public function setClusterSecondaryRangeName($clusterSecondaryRangeName)
  {
    $this->clusterSecondaryRangeName = $clusterSecondaryRangeName;
  }
  /** @return string */
  public function getClusterSecondaryRangeName()
  {
    return $this->clusterSecondaryRangeName;
  }
  /** @param bool */
  public function setCreateSubnetwork($createSubnetwork)
  {
    $this->createSubnetwork = $createSubnetwork;
  }
  /** @return bool */
  public function getCreateSubnetwork()
  {
    return $this->createSubnetwork;
  }
  /** @param string */
  public function setIpv6AccessType($ipv6AccessType)
  {
    $this->ipv6AccessType = $ipv6AccessType;
  }
  /** @return string */
  public function getIpv6AccessType()
  {
    return $this->ipv6AccessType;
  }
  /** @param string */
  public function setNodeIpv4Cidr($nodeIpv4Cidr)
  {
    $this->nodeIpv4Cidr = $nodeIpv4Cidr;
  }
  /** @return string */
  public function getNodeIpv4Cidr()
  {
    return $this->nodeIpv4Cidr;
  }
  /** @param string */
  public function setNodeIpv4CidrBlock($nodeIpv4CidrBlock)
  {
    $this->nodeIpv4CidrBlock = $nodeIpv4CidrBlock;
  }
  /** @return string */
  public function getNodeIpv4CidrBlock()
  {
    return $this->nodeIpv4CidrBlock;
  }
  /** @param string */
  public function setServicesIpv4Cidr($servicesIpv4Cidr)
  {
    $this->servicesIpv4Cidr = $servicesIpv4Cidr;
  }
  /** @return string */
  public function getServicesIpv4Cidr()
  {
    return $this->servicesIpv4Cidr;
  }
  /** @param string */
  public function setServicesIpv4CidrBlock($servicesIpv4CidrBlock)
  {
    $this->servicesIpv4CidrBlock = $servicesIpv4CidrBlock;
  }
  /** @return string */
  public function getServicesIpv4CidrBlock()
  {
    return $this->servicesIpv4CidrBlock;
  }
  /** @param string */
  public function setServicesSecondaryRangeName($servicesSecondaryRangeName)
  {
    $this->servicesSecondaryRangeName = $servicesSecondaryRangeName;
  }
  /** @return string */
  public function getServicesSecondaryRangeName()
  {
    return $this->servicesSecondaryRangeName;
  }
  /** @param string */
  public function setStackType($stackType)
  {
    $this->stackType = $stackType;
  }
  /** @return string */
  public function getStackType()
  {
    return $this->stackType;
  }
  /** @param string */
  public function setSubnetworkName($subnetworkName)
  {
    $this->subnetworkName = $subnetworkName;
  }
  /** @return string */
  public function getSubnetworkName()
  {
    return $this->subnetworkName;
  }
  /** @param string */
  public function setTpuIpv4CidrBlock($tpuIpv4CidrBlock)
  {
    $this->tpuIpv4CidrBlock = $tpuIpv4CidrBlock;
  }
  /** @return string */
  public function getTpuIpv4CidrBlock()
  {
    return $this->tpuIpv4CidrBlock;
  }
  /** @param bool */
  public function setUseIpAliases($useIpAliases)
  {
    $this->useIpAliases = $useIpAliases;
  }
  /** @return bool */
  public function getUseIpAliases()
  {
    return $this->useIpAliases;
  }
  /** @param bool */
  public function setUseRoutes($useRoutes)
  {
    $this->useRoutes = $useRoutes;
  }
  /** @return bool */
  public function getUseRoutes()
  {
    return $this->useRoutes;
  }
}

class IdentityServiceConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class IntraNodeVisibilityConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class Jwk extends \Google\Model
{
  /** @var string */
  public $alg;
  /** @var string */
  public $crv;
  /** @var string */
  public $e;
  /** @var string */
  public $kid;
  /** @var string */
  public $kty;
  /** @var string */
  public $n;
  /** @var string */
  public $use;
  /** @var string */
  public $x;
  /** @var string */
  public $y;

  /** @param string */
  public function setAlg($alg)
  {
    $this->alg = $alg;
  }
  /** @return string */
  public function getAlg()
  {
    return $this->alg;
  }
  /** @param string */
  public function setCrv($crv)
  {
    $this->crv = $crv;
  }
  /** @return string */
  public function getCrv()
  {
    return $this->crv;
  }
  /** @param string */
  public function setE($e)
  {
    $this->e = $e;
  }
  /** @return string */
  public function getE()
  {
    return $this->e;
  }
  /** @param string */
  public function setKid($kid)
  {
    $this->kid = $kid;
  }
  /** @return string */
  public function getKid()
  {
    return $this->kid;
  }
  /** @param string */
  public function setKty($kty)
  {
    $this->kty = $kty;
  }
  /** @return string */
  public function getKty()
  {
    return $this->kty;
  }
  /** @param string */
  public function setN($n)
  {
    $this->n = $n;
  }
  /** @return string */
  public function getN()
  {
    return $this->n;
  }
  /** @param string */
  public function setUse($use)
  {
    $this->use = $use;
  }
  /** @return string */
  public function getUse()
  {
    return $this->use;
  }
  /** @param string */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return string */
  public function getX()
  {
    return $this->x;
  }
  /** @param string */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return string */
  public function getY()
  {
    return $this->y;
  }
}

class KubernetesDashboard extends \Google\Model
{
  /** @var bool */
  public $disabled;

  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
}

class LegacyAbac extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class LinuxNodeConfig extends \Google\Model
{
  /** @var string */
  public $cgroupMode;
  /** @var string[] */
  public $sysctls;

  /** @param string */
  public function setCgroupMode($cgroupMode)
  {
    $this->cgroupMode = $cgroupMode;
  }
  /** @return string */
  public function getCgroupMode()
  {
    return $this->cgroupMode;
  }
  /** @param string[] */
  public function setSysctls($sysctls)
  {
    $this->sysctls = $sysctls;
  }
  /** @return string[] */
  public function getSysctls()
  {
    return $this->sysctls;
  }
}

class ListClustersResponse extends \Google\Collection
{
  /** @var Cluster[] */
  public $clusters;
  /** @var string[] */
  public $missingZones;
  protected $collection_key = 'missingZones';
  protected $clustersType = Cluster::class;
  protected $clustersDataType = 'array';
  /** @param Cluster[] */
  public function setClusters($clusters)
  {
    $this->clusters = $clusters;
  }
  /** @return Cluster[] */
  public function getClusters()
  {
    return $this->clusters;
  }
  /** @param string[] */
  public function setMissingZones($missingZones)
  {
    $this->missingZones = $missingZones;
  }
  /** @return string[] */
  public function getMissingZones()
  {
    return $this->missingZones;
  }
}

class ListNodePoolsResponse extends \Google\Collection
{
  /** @var NodePool[] */
  public $nodePools;
  protected $collection_key = 'nodePools';
  protected $nodePoolsType = NodePool::class;
  protected $nodePoolsDataType = 'array';
  /** @param NodePool[] */
  public function setNodePools($nodePools)
  {
    $this->nodePools = $nodePools;
  }
  /** @return NodePool[] */
  public function getNodePools()
  {
    return $this->nodePools;
  }
}

class ListOperationsResponse extends \Google\Collection
{
  /** @var string[] */
  public $missingZones;
  /** @var Operation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = Operation::class;
  protected $operationsDataType = 'array';
  /** @param string[] */
  public function setMissingZones($missingZones)
  {
    $this->missingZones = $missingZones;
  }
  /** @return string[] */
  public function getMissingZones()
  {
    return $this->missingZones;
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

class ListUsableSubnetworksResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var UsableSubnetwork[] */
  public $subnetworks;
  protected $collection_key = 'subnetworks';
  protected $subnetworksType = UsableSubnetwork::class;
  protected $subnetworksDataType = 'array';
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
  /** @param UsableSubnetwork[] */
  public function setSubnetworks($subnetworks)
  {
    $this->subnetworks = $subnetworks;
  }
  /** @return UsableSubnetwork[] */
  public function getSubnetworks()
  {
    return $this->subnetworks;
  }
}

class LoggingComponentConfig extends \Google\Collection
{
  /** @var string[] */
  public $enableComponents;
  protected $collection_key = 'enableComponents';
  /** @param string[] */
  public function setEnableComponents($enableComponents)
  {
    $this->enableComponents = $enableComponents;
  }
  /** @return string[] */
  public function getEnableComponents()
  {
    return $this->enableComponents;
  }
}

class LoggingConfig extends \Google\Model
{
  /** @var LoggingComponentConfig */
  public $componentConfig;
  protected $componentConfigType = LoggingComponentConfig::class;
  protected $componentConfigDataType = '';
  /** @param LoggingComponentConfig */
  public function setComponentConfig(LoggingComponentConfig $componentConfig)
  {
    $this->componentConfig = $componentConfig;
  }
  /** @return LoggingComponentConfig */
  public function getComponentConfig()
  {
    return $this->componentConfig;
  }
}

class LoggingVariantConfig extends \Google\Model
{
  /** @var string */
  public $variant;

  /** @param string */
  public function setVariant($variant)
  {
    $this->variant = $variant;
  }
  /** @return string */
  public function getVariant()
  {
    return $this->variant;
  }
}

class MaintenanceExclusionOptions extends \Google\Model
{
  /** @var string */
  public $scope;

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
}

class MaintenancePolicy extends \Google\Model
{
  /** @var string */
  public $resourceVersion;
  /** @var MaintenanceWindow */
  public $window;
  protected $windowType = MaintenanceWindow::class;
  protected $windowDataType = '';
  /** @param string */
  public function setResourceVersion($resourceVersion)
  {
    $this->resourceVersion = $resourceVersion;
  }
  /** @return string */
  public function getResourceVersion()
  {
    return $this->resourceVersion;
  }
  /** @param MaintenanceWindow */
  public function setWindow(MaintenanceWindow $window)
  {
    $this->window = $window;
  }
  /** @return MaintenanceWindow */
  public function getWindow()
  {
    return $this->window;
  }
}

class MaintenanceWindow extends \Google\Model
{
  /** @var DailyMaintenanceWindow */
  public $dailyMaintenanceWindow;
  /** @var TimeWindow[] */
  public $maintenanceExclusions;
  /** @var RecurringTimeWindow */
  public $recurringWindow;
  protected $dailyMaintenanceWindowType = DailyMaintenanceWindow::class;
  protected $dailyMaintenanceWindowDataType = '';
  protected $maintenanceExclusionsType = TimeWindow::class;
  protected $maintenanceExclusionsDataType = 'map';
  protected $recurringWindowType = RecurringTimeWindow::class;
  protected $recurringWindowDataType = '';
  /** @param DailyMaintenanceWindow */
  public function setDailyMaintenanceWindow(DailyMaintenanceWindow $dailyMaintenanceWindow)
  {
    $this->dailyMaintenanceWindow = $dailyMaintenanceWindow;
  }
  /** @return DailyMaintenanceWindow */
  public function getDailyMaintenanceWindow()
  {
    return $this->dailyMaintenanceWindow;
  }
  /** @param TimeWindow[] */
  public function setMaintenanceExclusions($maintenanceExclusions)
  {
    $this->maintenanceExclusions = $maintenanceExclusions;
  }
  /** @return TimeWindow[] */
  public function getMaintenanceExclusions()
  {
    return $this->maintenanceExclusions;
  }
  /** @param RecurringTimeWindow */
  public function setRecurringWindow(RecurringTimeWindow $recurringWindow)
  {
    $this->recurringWindow = $recurringWindow;
  }
  /** @return RecurringTimeWindow */
  public function getRecurringWindow()
  {
    return $this->recurringWindow;
  }
}

class ManagedPrometheusConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class MasterAuth extends \Google\Model
{
  /** @var string */
  public $clientCertificate;
  /** @var ClientCertificateConfig */
  public $clientCertificateConfig;
  /** @var string */
  public $clientKey;
  /** @var string */
  public $clusterCaCertificate;
  /** @var string */
  public $password;
  /** @var string */
  public $username;
  protected $clientCertificateConfigType = ClientCertificateConfig::class;
  protected $clientCertificateConfigDataType = '';
  /** @param string */
  public function setClientCertificate($clientCertificate)
  {
    $this->clientCertificate = $clientCertificate;
  }
  /** @return string */
  public function getClientCertificate()
  {
    return $this->clientCertificate;
  }
  /** @param ClientCertificateConfig */
  public function setClientCertificateConfig(ClientCertificateConfig $clientCertificateConfig)
  {
    $this->clientCertificateConfig = $clientCertificateConfig;
  }
  /** @return ClientCertificateConfig */
  public function getClientCertificateConfig()
  {
    return $this->clientCertificateConfig;
  }
  /** @param string */
  public function setClientKey($clientKey)
  {
    $this->clientKey = $clientKey;
  }
  /** @return string */
  public function getClientKey()
  {
    return $this->clientKey;
  }
  /** @param string */
  public function setClusterCaCertificate($clusterCaCertificate)
  {
    $this->clusterCaCertificate = $clusterCaCertificate;
  }
  /** @return string */
  public function getClusterCaCertificate()
  {
    return $this->clusterCaCertificate;
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
}

class MasterAuthorizedNetworksConfig extends \Google\Collection
{
  /** @var CidrBlock[] */
  public $cidrBlocks;
  /** @var bool */
  public $enabled;
  /** @var bool */
  public $gcpPublicCidrsAccessEnabled;
  protected $collection_key = 'cidrBlocks';
  protected $cidrBlocksType = CidrBlock::class;
  protected $cidrBlocksDataType = 'array';
  /** @param CidrBlock[] */
  public function setCidrBlocks($cidrBlocks)
  {
    $this->cidrBlocks = $cidrBlocks;
  }
  /** @return CidrBlock[] */
  public function getCidrBlocks()
  {
    return $this->cidrBlocks;
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
  /** @param bool */
  public function setGcpPublicCidrsAccessEnabled($gcpPublicCidrsAccessEnabled)
  {
    $this->gcpPublicCidrsAccessEnabled = $gcpPublicCidrsAccessEnabled;
  }
  /** @return bool */
  public function getGcpPublicCidrsAccessEnabled()
  {
    return $this->gcpPublicCidrsAccessEnabled;
  }
}

class MaxPodsConstraint extends \Google\Model
{
  /** @var string */
  public $maxPodsPerNode;

  /** @param string */
  public function setMaxPodsPerNode($maxPodsPerNode)
  {
    $this->maxPodsPerNode = $maxPodsPerNode;
  }
  /** @return string */
  public function getMaxPodsPerNode()
  {
    return $this->maxPodsPerNode;
  }
}

class MeshCertificates extends \Google\Model
{
  /** @var bool */
  public $enableCertificates;

  /** @param bool */
  public function setEnableCertificates($enableCertificates)
  {
    $this->enableCertificates = $enableCertificates;
  }
  /** @return bool */
  public function getEnableCertificates()
  {
    return $this->enableCertificates;
  }
}

class Metric extends \Google\Model
{
  public $doubleValue;
  /** @var string */
  public $intValue;
  /** @var string */
  public $name;
  /** @var string */
  public $stringValue;

  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
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
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class MonitoringComponentConfig extends \Google\Collection
{
  /** @var string[] */
  public $enableComponents;
  protected $collection_key = 'enableComponents';
  /** @param string[] */
  public function setEnableComponents($enableComponents)
  {
    $this->enableComponents = $enableComponents;
  }
  /** @return string[] */
  public function getEnableComponents()
  {
    return $this->enableComponents;
  }
}

class MonitoringConfig extends \Google\Model
{
  /** @var MonitoringComponentConfig */
  public $componentConfig;
  /** @var ManagedPrometheusConfig */
  public $managedPrometheusConfig;
  protected $componentConfigType = MonitoringComponentConfig::class;
  protected $componentConfigDataType = '';
  protected $managedPrometheusConfigType = ManagedPrometheusConfig::class;
  protected $managedPrometheusConfigDataType = '';
  /** @param MonitoringComponentConfig */
  public function setComponentConfig(MonitoringComponentConfig $componentConfig)
  {
    $this->componentConfig = $componentConfig;
  }
  /** @return MonitoringComponentConfig */
  public function getComponentConfig()
  {
    return $this->componentConfig;
  }
  /** @param ManagedPrometheusConfig */
  public function setManagedPrometheusConfig(ManagedPrometheusConfig $managedPrometheusConfig)
  {
    $this->managedPrometheusConfig = $managedPrometheusConfig;
  }
  /** @return ManagedPrometheusConfig */
  public function getManagedPrometheusConfig()
  {
    return $this->managedPrometheusConfig;
  }
}

class NetworkConfig extends \Google\Model
{
  /** @var string */
  public $datapathProvider;
  /** @var DefaultSnatStatus */
  public $defaultSnatStatus;
  /** @var DNSConfig */
  public $dnsConfig;
  /** @var bool */
  public $enableIntraNodeVisibility;
  /** @var bool */
  public $enableL4ilbSubsetting;
  /** @var GatewayAPIConfig */
  public $gatewayApiConfig;
  /** @var string */
  public $network;
  /** @var string */
  public $privateIpv6GoogleAccess;
  /** @var ServiceExternalIPsConfig */
  public $serviceExternalIpsConfig;
  /** @var string */
  public $subnetwork;
  protected $defaultSnatStatusType = DefaultSnatStatus::class;
  protected $defaultSnatStatusDataType = '';
  protected $dnsConfigType = DNSConfig::class;
  protected $dnsConfigDataType = '';
  protected $gatewayApiConfigType = GatewayAPIConfig::class;
  protected $gatewayApiConfigDataType = '';
  protected $serviceExternalIpsConfigType = ServiceExternalIPsConfig::class;
  protected $serviceExternalIpsConfigDataType = '';
  /** @param string */
  public function setDatapathProvider($datapathProvider)
  {
    $this->datapathProvider = $datapathProvider;
  }
  /** @return string */
  public function getDatapathProvider()
  {
    return $this->datapathProvider;
  }
  /** @param DefaultSnatStatus */
  public function setDefaultSnatStatus(DefaultSnatStatus $defaultSnatStatus)
  {
    $this->defaultSnatStatus = $defaultSnatStatus;
  }
  /** @return DefaultSnatStatus */
  public function getDefaultSnatStatus()
  {
    return $this->defaultSnatStatus;
  }
  /** @param DNSConfig */
  public function setDnsConfig(DNSConfig $dnsConfig)
  {
    $this->dnsConfig = $dnsConfig;
  }
  /** @return DNSConfig */
  public function getDnsConfig()
  {
    return $this->dnsConfig;
  }
  /** @param bool */
  public function setEnableIntraNodeVisibility($enableIntraNodeVisibility)
  {
    $this->enableIntraNodeVisibility = $enableIntraNodeVisibility;
  }
  /** @return bool */
  public function getEnableIntraNodeVisibility()
  {
    return $this->enableIntraNodeVisibility;
  }
  /** @param bool */
  public function setEnableL4ilbSubsetting($enableL4ilbSubsetting)
  {
    $this->enableL4ilbSubsetting = $enableL4ilbSubsetting;
  }
  /** @return bool */
  public function getEnableL4ilbSubsetting()
  {
    return $this->enableL4ilbSubsetting;
  }
  /** @param GatewayAPIConfig */
  public function setGatewayApiConfig(GatewayAPIConfig $gatewayApiConfig)
  {
    $this->gatewayApiConfig = $gatewayApiConfig;
  }
  /** @return GatewayAPIConfig */
  public function getGatewayApiConfig()
  {
    return $this->gatewayApiConfig;
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
  public function setPrivateIpv6GoogleAccess($privateIpv6GoogleAccess)
  {
    $this->privateIpv6GoogleAccess = $privateIpv6GoogleAccess;
  }
  /** @return string */
  public function getPrivateIpv6GoogleAccess()
  {
    return $this->privateIpv6GoogleAccess;
  }
  /** @param ServiceExternalIPsConfig */
  public function setServiceExternalIpsConfig(ServiceExternalIPsConfig $serviceExternalIpsConfig)
  {
    $this->serviceExternalIpsConfig = $serviceExternalIpsConfig;
  }
  /** @return ServiceExternalIPsConfig */
  public function getServiceExternalIpsConfig()
  {
    return $this->serviceExternalIpsConfig;
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

class NetworkPerformanceConfig extends \Google\Model
{
  /** @var string */
  public $totalEgressBandwidthTier;

  /** @param string */
  public function setTotalEgressBandwidthTier($totalEgressBandwidthTier)
  {
    $this->totalEgressBandwidthTier = $totalEgressBandwidthTier;
  }
  /** @return string */
  public function getTotalEgressBandwidthTier()
  {
    return $this->totalEgressBandwidthTier;
  }
}

class NetworkPolicy extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $provider;

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
  /** @param string */
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  /** @return string */
  public function getProvider()
  {
    return $this->provider;
  }
}

class NetworkPolicyConfig extends \Google\Model
{
  /** @var bool */
  public $disabled;

  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
}

class NetworkTags extends \Google\Collection
{
  /** @var string[] */
  public $tags;
  protected $collection_key = 'tags';
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

class NodeConfig extends \Google\Collection
{
  /** @var AcceleratorConfig[] */
  public $accelerators;
  /** @var AdvancedMachineFeatures */
  public $advancedMachineFeatures;
  /** @var string */
  public $bootDiskKmsKey;
  /** @var ConfidentialNodes */
  public $confidentialNodes;
  /** @var int */
  public $diskSizeGb;
  /** @var string */
  public $diskType;
  /** @var FastSocket */
  public $fastSocket;
  /** @var GcfsConfig */
  public $gcfsConfig;
  /** @var VirtualNIC */
  public $gvnic;
  /** @var string */
  public $imageType;
  /** @var NodeKubeletConfig */
  public $kubeletConfig;
  /** @var string[] */
  public $labels;
  /** @var LinuxNodeConfig */
  public $linuxNodeConfig;
  /** @var int */
  public $localSsdCount;
  /** @var NodePoolLoggingConfig */
  public $loggingConfig;
  /** @var string */
  public $machineType;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $minCpuPlatform;
  /** @var string */
  public $nodeGroup;
  /** @var string[] */
  public $oauthScopes;
  /** @var bool */
  public $preemptible;
  /** @var ReservationAffinity */
  public $reservationAffinity;
  /** @var string[] */
  public $resourceLabels;
  /** @var SandboxConfig */
  public $sandboxConfig;
  /** @var string */
  public $serviceAccount;
  /** @var ShieldedInstanceConfig */
  public $shieldedInstanceConfig;
  /** @var bool */
  public $spot;
  /** @var string[] */
  public $tags;
  /** @var NodeTaint[] */
  public $taints;
  /** @var WorkloadMetadataConfig */
  public $workloadMetadataConfig;
  protected $collection_key = 'taints';
  protected $acceleratorsType = AcceleratorConfig::class;
  protected $acceleratorsDataType = 'array';
  protected $advancedMachineFeaturesType = AdvancedMachineFeatures::class;
  protected $advancedMachineFeaturesDataType = '';
  protected $confidentialNodesType = ConfidentialNodes::class;
  protected $confidentialNodesDataType = '';
  protected $fastSocketType = FastSocket::class;
  protected $fastSocketDataType = '';
  protected $gcfsConfigType = GcfsConfig::class;
  protected $gcfsConfigDataType = '';
  protected $gvnicType = VirtualNIC::class;
  protected $gvnicDataType = '';
  protected $kubeletConfigType = NodeKubeletConfig::class;
  protected $kubeletConfigDataType = '';
  protected $linuxNodeConfigType = LinuxNodeConfig::class;
  protected $linuxNodeConfigDataType = '';
  protected $loggingConfigType = NodePoolLoggingConfig::class;
  protected $loggingConfigDataType = '';
  protected $reservationAffinityType = ReservationAffinity::class;
  protected $reservationAffinityDataType = '';
  protected $sandboxConfigType = SandboxConfig::class;
  protected $sandboxConfigDataType = '';
  protected $shieldedInstanceConfigType = ShieldedInstanceConfig::class;
  protected $shieldedInstanceConfigDataType = '';
  protected $taintsType = NodeTaint::class;
  protected $taintsDataType = 'array';
  protected $workloadMetadataConfigType = WorkloadMetadataConfig::class;
  protected $workloadMetadataConfigDataType = '';
  /** @param AcceleratorConfig[] */
  public function setAccelerators($accelerators)
  {
    $this->accelerators = $accelerators;
  }
  /** @return AcceleratorConfig[] */
  public function getAccelerators()
  {
    return $this->accelerators;
  }
  /** @param AdvancedMachineFeatures */
  public function setAdvancedMachineFeatures(AdvancedMachineFeatures $advancedMachineFeatures)
  {
    $this->advancedMachineFeatures = $advancedMachineFeatures;
  }
  /** @return AdvancedMachineFeatures */
  public function getAdvancedMachineFeatures()
  {
    return $this->advancedMachineFeatures;
  }
  /** @param string */
  public function setBootDiskKmsKey($bootDiskKmsKey)
  {
    $this->bootDiskKmsKey = $bootDiskKmsKey;
  }
  /** @return string */
  public function getBootDiskKmsKey()
  {
    return $this->bootDiskKmsKey;
  }
  /** @param ConfidentialNodes */
  public function setConfidentialNodes(ConfidentialNodes $confidentialNodes)
  {
    $this->confidentialNodes = $confidentialNodes;
  }
  /** @return ConfidentialNodes */
  public function getConfidentialNodes()
  {
    return $this->confidentialNodes;
  }
  /** @param int */
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  /** @return int */
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
  /** @param FastSocket */
  public function setFastSocket(FastSocket $fastSocket)
  {
    $this->fastSocket = $fastSocket;
  }
  /** @return FastSocket */
  public function getFastSocket()
  {
    return $this->fastSocket;
  }
  /** @param GcfsConfig */
  public function setGcfsConfig(GcfsConfig $gcfsConfig)
  {
    $this->gcfsConfig = $gcfsConfig;
  }
  /** @return GcfsConfig */
  public function getGcfsConfig()
  {
    return $this->gcfsConfig;
  }
  /** @param VirtualNIC */
  public function setGvnic(VirtualNIC $gvnic)
  {
    $this->gvnic = $gvnic;
  }
  /** @return VirtualNIC */
  public function getGvnic()
  {
    return $this->gvnic;
  }
  /** @param string */
  public function setImageType($imageType)
  {
    $this->imageType = $imageType;
  }
  /** @return string */
  public function getImageType()
  {
    return $this->imageType;
  }
  /** @param NodeKubeletConfig */
  public function setKubeletConfig(NodeKubeletConfig $kubeletConfig)
  {
    $this->kubeletConfig = $kubeletConfig;
  }
  /** @return NodeKubeletConfig */
  public function getKubeletConfig()
  {
    return $this->kubeletConfig;
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
  /** @param LinuxNodeConfig */
  public function setLinuxNodeConfig(LinuxNodeConfig $linuxNodeConfig)
  {
    $this->linuxNodeConfig = $linuxNodeConfig;
  }
  /** @return LinuxNodeConfig */
  public function getLinuxNodeConfig()
  {
    return $this->linuxNodeConfig;
  }
  /** @param int */
  public function setLocalSsdCount($localSsdCount)
  {
    $this->localSsdCount = $localSsdCount;
  }
  /** @return int */
  public function getLocalSsdCount()
  {
    return $this->localSsdCount;
  }
  /** @param NodePoolLoggingConfig */
  public function setLoggingConfig(NodePoolLoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return NodePoolLoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
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
  public function setNodeGroup($nodeGroup)
  {
    $this->nodeGroup = $nodeGroup;
  }
  /** @return string */
  public function getNodeGroup()
  {
    return $this->nodeGroup;
  }
  /** @param string[] */
  public function setOauthScopes($oauthScopes)
  {
    $this->oauthScopes = $oauthScopes;
  }
  /** @return string[] */
  public function getOauthScopes()
  {
    return $this->oauthScopes;
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
  /** @param string[] */
  public function setResourceLabels($resourceLabels)
  {
    $this->resourceLabels = $resourceLabels;
  }
  /** @return string[] */
  public function getResourceLabels()
  {
    return $this->resourceLabels;
  }
  /** @param SandboxConfig */
  public function setSandboxConfig(SandboxConfig $sandboxConfig)
  {
    $this->sandboxConfig = $sandboxConfig;
  }
  /** @return SandboxConfig */
  public function getSandboxConfig()
  {
    return $this->sandboxConfig;
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
  /** @param bool */
  public function setSpot($spot)
  {
    $this->spot = $spot;
  }
  /** @return bool */
  public function getSpot()
  {
    return $this->spot;
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
  /** @param NodeTaint[] */
  public function setTaints($taints)
  {
    $this->taints = $taints;
  }
  /** @return NodeTaint[] */
  public function getTaints()
  {
    return $this->taints;
  }
  /** @param WorkloadMetadataConfig */
  public function setWorkloadMetadataConfig(WorkloadMetadataConfig $workloadMetadataConfig)
  {
    $this->workloadMetadataConfig = $workloadMetadataConfig;
  }
  /** @return WorkloadMetadataConfig */
  public function getWorkloadMetadataConfig()
  {
    return $this->workloadMetadataConfig;
  }
}

class NodeConfigDefaults extends \Google\Model
{
  /** @var GcfsConfig */
  public $gcfsConfig;
  /** @var NodePoolLoggingConfig */
  public $loggingConfig;
  protected $gcfsConfigType = GcfsConfig::class;
  protected $gcfsConfigDataType = '';
  protected $loggingConfigType = NodePoolLoggingConfig::class;
  protected $loggingConfigDataType = '';
  /** @param GcfsConfig */
  public function setGcfsConfig(GcfsConfig $gcfsConfig)
  {
    $this->gcfsConfig = $gcfsConfig;
  }
  /** @return GcfsConfig */
  public function getGcfsConfig()
  {
    return $this->gcfsConfig;
  }
  /** @param NodePoolLoggingConfig */
  public function setLoggingConfig(NodePoolLoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return NodePoolLoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
}

class NodeKubeletConfig extends \Google\Model
{
  /** @var bool */
  public $cpuCfsQuota;
  /** @var string */
  public $cpuCfsQuotaPeriod;
  /** @var string */
  public $cpuManagerPolicy;
  /** @var string */
  public $podPidsLimit;

  /** @param bool */
  public function setCpuCfsQuota($cpuCfsQuota)
  {
    $this->cpuCfsQuota = $cpuCfsQuota;
  }
  /** @return bool */
  public function getCpuCfsQuota()
  {
    return $this->cpuCfsQuota;
  }
  /** @param string */
  public function setCpuCfsQuotaPeriod($cpuCfsQuotaPeriod)
  {
    $this->cpuCfsQuotaPeriod = $cpuCfsQuotaPeriod;
  }
  /** @return string */
  public function getCpuCfsQuotaPeriod()
  {
    return $this->cpuCfsQuotaPeriod;
  }
  /** @param string */
  public function setCpuManagerPolicy($cpuManagerPolicy)
  {
    $this->cpuManagerPolicy = $cpuManagerPolicy;
  }
  /** @return string */
  public function getCpuManagerPolicy()
  {
    return $this->cpuManagerPolicy;
  }
  /** @param string */
  public function setPodPidsLimit($podPidsLimit)
  {
    $this->podPidsLimit = $podPidsLimit;
  }
  /** @return string */
  public function getPodPidsLimit()
  {
    return $this->podPidsLimit;
  }
}

class NodeLabels extends \Google\Model
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

class NodeManagement extends \Google\Model
{
  /** @var bool */
  public $autoRepair;
  /** @var bool */
  public $autoUpgrade;
  /** @var AutoUpgradeOptions */
  public $upgradeOptions;
  protected $upgradeOptionsType = AutoUpgradeOptions::class;
  protected $upgradeOptionsDataType = '';
  /** @param bool */
  public function setAutoRepair($autoRepair)
  {
    $this->autoRepair = $autoRepair;
  }
  /** @return bool */
  public function getAutoRepair()
  {
    return $this->autoRepair;
  }
  /** @param bool */
  public function setAutoUpgrade($autoUpgrade)
  {
    $this->autoUpgrade = $autoUpgrade;
  }
  /** @return bool */
  public function getAutoUpgrade()
  {
    return $this->autoUpgrade;
  }
  /** @param AutoUpgradeOptions */
  public function setUpgradeOptions(AutoUpgradeOptions $upgradeOptions)
  {
    $this->upgradeOptions = $upgradeOptions;
  }
  /** @return AutoUpgradeOptions */
  public function getUpgradeOptions()
  {
    return $this->upgradeOptions;
  }
}

class NodeNetworkConfig extends \Google\Model
{
  /** @var bool */
  public $createPodRange;
  /** @var bool */
  public $enablePrivateNodes;
  /** @var NetworkPerformanceConfig */
  public $networkPerformanceConfig;
  /** @var string */
  public $podIpv4CidrBlock;
  /** @var string */
  public $podRange;
  protected $networkPerformanceConfigType = NetworkPerformanceConfig::class;
  protected $networkPerformanceConfigDataType = '';
  /** @param bool */
  public function setCreatePodRange($createPodRange)
  {
    $this->createPodRange = $createPodRange;
  }
  /** @return bool */
  public function getCreatePodRange()
  {
    return $this->createPodRange;
  }
  /** @param bool */
  public function setEnablePrivateNodes($enablePrivateNodes)
  {
    $this->enablePrivateNodes = $enablePrivateNodes;
  }
  /** @return bool */
  public function getEnablePrivateNodes()
  {
    return $this->enablePrivateNodes;
  }
  /** @param NetworkPerformanceConfig */
  public function setNetworkPerformanceConfig(NetworkPerformanceConfig $networkPerformanceConfig)
  {
    $this->networkPerformanceConfig = $networkPerformanceConfig;
  }
  /** @return NetworkPerformanceConfig */
  public function getNetworkPerformanceConfig()
  {
    return $this->networkPerformanceConfig;
  }
  /** @param string */
  public function setPodIpv4CidrBlock($podIpv4CidrBlock)
  {
    $this->podIpv4CidrBlock = $podIpv4CidrBlock;
  }
  /** @return string */
  public function getPodIpv4CidrBlock()
  {
    return $this->podIpv4CidrBlock;
  }
  /** @param string */
  public function setPodRange($podRange)
  {
    $this->podRange = $podRange;
  }
  /** @return string */
  public function getPodRange()
  {
    return $this->podRange;
  }
}

class NodePool extends \Google\Collection
{
  /** @var NodePoolAutoscaling */
  public $autoscaling;
  /** @var StatusCondition[] */
  public $conditions;
  /** @var NodeConfig */
  public $config;
  /** @var int */
  public $initialNodeCount;
  /** @var string[] */
  public $instanceGroupUrls;
  /** @var string[] */
  public $locations;
  /** @var NodeManagement */
  public $management;
  /** @var MaxPodsConstraint */
  public $maxPodsConstraint;
  /** @var string */
  public $name;
  /** @var NodeNetworkConfig */
  public $networkConfig;
  /** @var PlacementPolicy */
  public $placementPolicy;
  /** @var int */
  public $podIpv4CidrSize;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $status;
  /** @var string */
  public $statusMessage;
  /** @var UpdateInfo */
  public $updateInfo;
  /** @var UpgradeSettings */
  public $upgradeSettings;
  /** @var string */
  public $version;
  protected $collection_key = 'locations';
  protected $autoscalingType = NodePoolAutoscaling::class;
  protected $autoscalingDataType = '';
  protected $conditionsType = StatusCondition::class;
  protected $conditionsDataType = 'array';
  protected $configType = NodeConfig::class;
  protected $configDataType = '';
  protected $managementType = NodeManagement::class;
  protected $managementDataType = '';
  protected $maxPodsConstraintType = MaxPodsConstraint::class;
  protected $maxPodsConstraintDataType = '';
  protected $networkConfigType = NodeNetworkConfig::class;
  protected $networkConfigDataType = '';
  protected $placementPolicyType = PlacementPolicy::class;
  protected $placementPolicyDataType = '';
  protected $updateInfoType = UpdateInfo::class;
  protected $updateInfoDataType = '';
  protected $upgradeSettingsType = UpgradeSettings::class;
  protected $upgradeSettingsDataType = '';
  /** @param NodePoolAutoscaling */
  public function setAutoscaling(NodePoolAutoscaling $autoscaling)
  {
    $this->autoscaling = $autoscaling;
  }
  /** @return NodePoolAutoscaling */
  public function getAutoscaling()
  {
    return $this->autoscaling;
  }
  /** @param StatusCondition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return StatusCondition[] */
  public function getConditions()
  {
    return $this->conditions;
  }
  /** @param NodeConfig */
  public function setConfig(NodeConfig $config)
  {
    $this->config = $config;
  }
  /** @return NodeConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param int */
  public function setInitialNodeCount($initialNodeCount)
  {
    $this->initialNodeCount = $initialNodeCount;
  }
  /** @return int */
  public function getInitialNodeCount()
  {
    return $this->initialNodeCount;
  }
  /** @param string[] */
  public function setInstanceGroupUrls($instanceGroupUrls)
  {
    $this->instanceGroupUrls = $instanceGroupUrls;
  }
  /** @return string[] */
  public function getInstanceGroupUrls()
  {
    return $this->instanceGroupUrls;
  }
  /** @param string[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return string[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param NodeManagement */
  public function setManagement(NodeManagement $management)
  {
    $this->management = $management;
  }
  /** @return NodeManagement */
  public function getManagement()
  {
    return $this->management;
  }
  /** @param MaxPodsConstraint */
  public function setMaxPodsConstraint(MaxPodsConstraint $maxPodsConstraint)
  {
    $this->maxPodsConstraint = $maxPodsConstraint;
  }
  /** @return MaxPodsConstraint */
  public function getMaxPodsConstraint()
  {
    return $this->maxPodsConstraint;
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
  /** @param NodeNetworkConfig */
  public function setNetworkConfig(NodeNetworkConfig $networkConfig)
  {
    $this->networkConfig = $networkConfig;
  }
  /** @return NodeNetworkConfig */
  public function getNetworkConfig()
  {
    return $this->networkConfig;
  }
  /** @param PlacementPolicy */
  public function setPlacementPolicy(PlacementPolicy $placementPolicy)
  {
    $this->placementPolicy = $placementPolicy;
  }
  /** @return PlacementPolicy */
  public function getPlacementPolicy()
  {
    return $this->placementPolicy;
  }
  /** @param int */
  public function setPodIpv4CidrSize($podIpv4CidrSize)
  {
    $this->podIpv4CidrSize = $podIpv4CidrSize;
  }
  /** @return int */
  public function getPodIpv4CidrSize()
  {
    return $this->podIpv4CidrSize;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
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
  /** @param UpdateInfo */
  public function setUpdateInfo(UpdateInfo $updateInfo)
  {
    $this->updateInfo = $updateInfo;
  }
  /** @return UpdateInfo */
  public function getUpdateInfo()
  {
    return $this->updateInfo;
  }
  /** @param UpgradeSettings */
  public function setUpgradeSettings(UpgradeSettings $upgradeSettings)
  {
    $this->upgradeSettings = $upgradeSettings;
  }
  /** @return UpgradeSettings */
  public function getUpgradeSettings()
  {
    return $this->upgradeSettings;
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

class NodePoolAutoConfig extends \Google\Model
{
  /** @var NetworkTags */
  public $networkTags;
  protected $networkTagsType = NetworkTags::class;
  protected $networkTagsDataType = '';
  /** @param NetworkTags */
  public function setNetworkTags(NetworkTags $networkTags)
  {
    $this->networkTags = $networkTags;
  }
  /** @return NetworkTags */
  public function getNetworkTags()
  {
    return $this->networkTags;
  }
}

class NodePoolAutoscaling extends \Google\Model
{
  /** @var bool */
  public $autoprovisioned;
  /** @var bool */
  public $enabled;
  /** @var string */
  public $locationPolicy;
  /** @var int */
  public $maxNodeCount;
  /** @var int */
  public $minNodeCount;
  /** @var int */
  public $totalMaxNodeCount;
  /** @var int */
  public $totalMinNodeCount;

  /** @param bool */
  public function setAutoprovisioned($autoprovisioned)
  {
    $this->autoprovisioned = $autoprovisioned;
  }
  /** @return bool */
  public function getAutoprovisioned()
  {
    return $this->autoprovisioned;
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
  /** @param string */
  public function setLocationPolicy($locationPolicy)
  {
    $this->locationPolicy = $locationPolicy;
  }
  /** @return string */
  public function getLocationPolicy()
  {
    return $this->locationPolicy;
  }
  /** @param int */
  public function setMaxNodeCount($maxNodeCount)
  {
    $this->maxNodeCount = $maxNodeCount;
  }
  /** @return int */
  public function getMaxNodeCount()
  {
    return $this->maxNodeCount;
  }
  /** @param int */
  public function setMinNodeCount($minNodeCount)
  {
    $this->minNodeCount = $minNodeCount;
  }
  /** @return int */
  public function getMinNodeCount()
  {
    return $this->minNodeCount;
  }
  /** @param int */
  public function setTotalMaxNodeCount($totalMaxNodeCount)
  {
    $this->totalMaxNodeCount = $totalMaxNodeCount;
  }
  /** @return int */
  public function getTotalMaxNodeCount()
  {
    return $this->totalMaxNodeCount;
  }
  /** @param int */
  public function setTotalMinNodeCount($totalMinNodeCount)
  {
    $this->totalMinNodeCount = $totalMinNodeCount;
  }
  /** @return int */
  public function getTotalMinNodeCount()
  {
    return $this->totalMinNodeCount;
  }
}

class NodePoolDefaults extends \Google\Model
{
  /** @var NodeConfigDefaults */
  public $nodeConfigDefaults;
  protected $nodeConfigDefaultsType = NodeConfigDefaults::class;
  protected $nodeConfigDefaultsDataType = '';
  /** @param NodeConfigDefaults */
  public function setNodeConfigDefaults(NodeConfigDefaults $nodeConfigDefaults)
  {
    $this->nodeConfigDefaults = $nodeConfigDefaults;
  }
  /** @return NodeConfigDefaults */
  public function getNodeConfigDefaults()
  {
    return $this->nodeConfigDefaults;
  }
}

class NodePoolLoggingConfig extends \Google\Model
{
  /** @var LoggingVariantConfig */
  public $variantConfig;
  protected $variantConfigType = LoggingVariantConfig::class;
  protected $variantConfigDataType = '';
  /** @param LoggingVariantConfig */
  public function setVariantConfig(LoggingVariantConfig $variantConfig)
  {
    $this->variantConfig = $variantConfig;
  }
  /** @return LoggingVariantConfig */
  public function getVariantConfig()
  {
    return $this->variantConfig;
  }
}

class NodeTaint extends \Google\Model
{
  /** @var string */
  public $effect;
  /** @var string */
  public $key;
  /** @var string */
  public $value;

  /** @param string */
  public function setEffect($effect)
  {
    $this->effect = $effect;
  }
  /** @return string */
  public function getEffect()
  {
    return $this->effect;
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

class NodeTaints extends \Google\Collection
{
  /** @var NodeTaint[] */
  public $taints;
  protected $collection_key = 'taints';
  protected $taintsType = NodeTaint::class;
  protected $taintsDataType = 'array';
  /** @param NodeTaint[] */
  public function setTaints($taints)
  {
    $this->taints = $taints;
  }
  /** @return NodeTaint[] */
  public function getTaints()
  {
    return $this->taints;
  }
}

class NotificationConfig extends \Google\Model
{
  /** @var PubSub */
  public $pubsub;
  protected $pubsubType = PubSub::class;
  protected $pubsubDataType = '';
  /** @param PubSub */
  public function setPubsub(PubSub $pubsub)
  {
    $this->pubsub = $pubsub;
  }
  /** @return PubSub */
  public function getPubsub()
  {
    return $this->pubsub;
  }
}

class Operation extends \Google\Collection
{
  /** @var StatusCondition[] */
  public $clusterConditions;
  /** @var string */
  public $detail;
  /** @var string */
  public $endTime;
  /** @var Status */
  public $error;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var StatusCondition[] */
  public $nodepoolConditions;
  /** @var string */
  public $operationType;
  /** @var OperationProgress */
  public $progress;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $startTime;
  /** @var string */
  public $status;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $targetLink;
  /** @var string */
  public $zone;
  protected $collection_key = 'nodepoolConditions';
  protected $clusterConditionsType = StatusCondition::class;
  protected $clusterConditionsDataType = 'array';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $nodepoolConditionsType = StatusCondition::class;
  protected $nodepoolConditionsDataType = 'array';
  protected $progressType = OperationProgress::class;
  protected $progressDataType = '';
  /** @param StatusCondition[] */
  public function setClusterConditions($clusterConditions)
  {
    $this->clusterConditions = $clusterConditions;
  }
  /** @return StatusCondition[] */
  public function getClusterConditions()
  {
    return $this->clusterConditions;
  }
  /** @param string */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /** @return string */
  public function getDetail()
  {
    return $this->detail;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param StatusCondition[] */
  public function setNodepoolConditions($nodepoolConditions)
  {
    $this->nodepoolConditions = $nodepoolConditions;
  }
  /** @return StatusCondition[] */
  public function getNodepoolConditions()
  {
    return $this->nodepoolConditions;
  }
  /** @param string */
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /** @param OperationProgress */
  public function setProgress(OperationProgress $progress)
  {
    $this->progress = $progress;
  }
  /** @return OperationProgress */
  public function getProgress()
  {
    return $this->progress;
  }
  /** @param string */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
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
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
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
  public function setTargetLink($targetLink)
  {
    $this->targetLink = $targetLink;
  }
  /** @return string */
  public function getTargetLink()
  {
    return $this->targetLink;
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

class OperationProgress extends \Google\Collection
{
  /** @var Metric[] */
  public $metrics;
  /** @var string */
  public $name;
  /** @var OperationProgress[] */
  public $stages;
  /** @var string */
  public $status;
  protected $collection_key = 'stages';
  protected $metricsType = Metric::class;
  protected $metricsDataType = 'array';
  protected $stagesType = OperationProgress::class;
  protected $stagesDataType = 'array';
  /** @param Metric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return Metric[] */
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
  /** @param OperationProgress[] */
  public function setStages($stages)
  {
    $this->stages = $stages;
  }
  /** @return OperationProgress[] */
  public function getStages()
  {
    return $this->stages;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
}

class PlacementPolicy extends \Google\Model
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

class PrivateClusterConfig extends \Google\Model
{
  /** @var bool */
  public $enablePrivateEndpoint;
  /** @var bool */
  public $enablePrivateNodes;
  /** @var PrivateClusterMasterGlobalAccessConfig */
  public $masterGlobalAccessConfig;
  /** @var string */
  public $masterIpv4CidrBlock;
  /** @var string */
  public $peeringName;
  /** @var string */
  public $privateEndpoint;
  /** @var string */
  public $privateEndpointSubnetwork;
  /** @var string */
  public $publicEndpoint;
  protected $masterGlobalAccessConfigType = PrivateClusterMasterGlobalAccessConfig::class;
  protected $masterGlobalAccessConfigDataType = '';
  /** @param bool */
  public function setEnablePrivateEndpoint($enablePrivateEndpoint)
  {
    $this->enablePrivateEndpoint = $enablePrivateEndpoint;
  }
  /** @return bool */
  public function getEnablePrivateEndpoint()
  {
    return $this->enablePrivateEndpoint;
  }
  /** @param bool */
  public function setEnablePrivateNodes($enablePrivateNodes)
  {
    $this->enablePrivateNodes = $enablePrivateNodes;
  }
  /** @return bool */
  public function getEnablePrivateNodes()
  {
    return $this->enablePrivateNodes;
  }
  /** @param PrivateClusterMasterGlobalAccessConfig */
  public function setMasterGlobalAccessConfig(PrivateClusterMasterGlobalAccessConfig $masterGlobalAccessConfig)
  {
    $this->masterGlobalAccessConfig = $masterGlobalAccessConfig;
  }
  /** @return PrivateClusterMasterGlobalAccessConfig */
  public function getMasterGlobalAccessConfig()
  {
    return $this->masterGlobalAccessConfig;
  }
  /** @param string */
  public function setMasterIpv4CidrBlock($masterIpv4CidrBlock)
  {
    $this->masterIpv4CidrBlock = $masterIpv4CidrBlock;
  }
  /** @return string */
  public function getMasterIpv4CidrBlock()
  {
    return $this->masterIpv4CidrBlock;
  }
  /** @param string */
  public function setPeeringName($peeringName)
  {
    $this->peeringName = $peeringName;
  }
  /** @return string */
  public function getPeeringName()
  {
    return $this->peeringName;
  }
  /** @param string */
  public function setPrivateEndpoint($privateEndpoint)
  {
    $this->privateEndpoint = $privateEndpoint;
  }
  /** @return string */
  public function getPrivateEndpoint()
  {
    return $this->privateEndpoint;
  }
  /** @param string */
  public function setPrivateEndpointSubnetwork($privateEndpointSubnetwork)
  {
    $this->privateEndpointSubnetwork = $privateEndpointSubnetwork;
  }
  /** @return string */
  public function getPrivateEndpointSubnetwork()
  {
    return $this->privateEndpointSubnetwork;
  }
  /** @param string */
  public function setPublicEndpoint($publicEndpoint)
  {
    $this->publicEndpoint = $publicEndpoint;
  }
  /** @return string */
  public function getPublicEndpoint()
  {
    return $this->publicEndpoint;
  }
}

class PrivateClusterMasterGlobalAccessConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class PubSub extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var Filter */
  public $filter;
  /** @var string */
  public $topic;
  protected $filterType = Filter::class;
  protected $filterDataType = '';
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
  /** @param Filter */
  public function setFilter(Filter $filter)
  {
    $this->filter = $filter;
  }
  /** @return Filter */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /** @return string */
  public function getTopic()
  {
    return $this->topic;
  }
}

class RecurringTimeWindow extends \Google\Model
{
  /** @var string */
  public $recurrence;
  /** @var TimeWindow */
  public $window;
  protected $windowType = TimeWindow::class;
  protected $windowDataType = '';
  /** @param string */
  public function setRecurrence($recurrence)
  {
    $this->recurrence = $recurrence;
  }
  /** @return string */
  public function getRecurrence()
  {
    return $this->recurrence;
  }
  /** @param TimeWindow */
  public function setWindow(TimeWindow $window)
  {
    $this->window = $window;
  }
  /** @return TimeWindow */
  public function getWindow()
  {
    return $this->window;
  }
}

class ReleaseChannel extends \Google\Model
{
  /** @var string */
  public $channel;

  /** @param string */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /** @return string */
  public function getChannel()
  {
    return $this->channel;
  }
}

class ReleaseChannelConfig extends \Google\Collection
{
  /** @var string */
  public $channel;
  /** @var string */
  public $defaultVersion;
  /** @var string[] */
  public $validVersions;
  protected $collection_key = 'validVersions';
  /** @param string */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /** @return string */
  public function getChannel()
  {
    return $this->channel;
  }
  /** @param string */
  public function setDefaultVersion($defaultVersion)
  {
    $this->defaultVersion = $defaultVersion;
  }
  /** @return string */
  public function getDefaultVersion()
  {
    return $this->defaultVersion;
  }
  /** @param string[] */
  public function setValidVersions($validVersions)
  {
    $this->validVersions = $validVersions;
  }
  /** @return string[] */
  public function getValidVersions()
  {
    return $this->validVersions;
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

class ResourceLabels extends \Google\Model
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

class ResourceLimit extends \Google\Model
{
  /** @var string */
  public $maximum;
  /** @var string */
  public $minimum;
  /** @var string */
  public $resourceType;

  /** @param string */
  public function setMaximum($maximum)
  {
    $this->maximum = $maximum;
  }
  /** @return string */
  public function getMaximum()
  {
    return $this->maximum;
  }
  /** @param string */
  public function setMinimum($minimum)
  {
    $this->minimum = $minimum;
  }
  /** @return string */
  public function getMinimum()
  {
    return $this->minimum;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

class ResourceUsageExportConfig extends \Google\Model
{
  /** @var BigQueryDestination */
  public $bigqueryDestination;
  /** @var ConsumptionMeteringConfig */
  public $consumptionMeteringConfig;
  /** @var bool */
  public $enableNetworkEgressMetering;
  protected $bigqueryDestinationType = BigQueryDestination::class;
  protected $bigqueryDestinationDataType = '';
  protected $consumptionMeteringConfigType = ConsumptionMeteringConfig::class;
  protected $consumptionMeteringConfigDataType = '';
  /** @param BigQueryDestination */
  public function setBigqueryDestination(BigQueryDestination $bigqueryDestination)
  {
    $this->bigqueryDestination = $bigqueryDestination;
  }
  /** @return BigQueryDestination */
  public function getBigqueryDestination()
  {
    return $this->bigqueryDestination;
  }
  /** @param ConsumptionMeteringConfig */
  public function setConsumptionMeteringConfig(ConsumptionMeteringConfig $consumptionMeteringConfig)
  {
    $this->consumptionMeteringConfig = $consumptionMeteringConfig;
  }
  /** @return ConsumptionMeteringConfig */
  public function getConsumptionMeteringConfig()
  {
    return $this->consumptionMeteringConfig;
  }
  /** @param bool */
  public function setEnableNetworkEgressMetering($enableNetworkEgressMetering)
  {
    $this->enableNetworkEgressMetering = $enableNetworkEgressMetering;
  }
  /** @return bool */
  public function getEnableNetworkEgressMetering()
  {
    return $this->enableNetworkEgressMetering;
  }
}

class RollbackNodePoolUpgradeRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $name;
  /** @var string */
  public $nodePoolId;
  /** @var string */
  public $projectId;
  /** @var bool */
  public $respectPdb;
  /** @var string */
  public $zone;

  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  public function setNodePoolId($nodePoolId)
  {
    $this->nodePoolId = $nodePoolId;
  }
  /** @return string */
  public function getNodePoolId()
  {
    return $this->nodePoolId;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param bool */
  public function setRespectPdb($respectPdb)
  {
    $this->respectPdb = $respectPdb;
  }
  /** @return bool */
  public function getRespectPdb()
  {
    return $this->respectPdb;
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

class SandboxConfig extends \Google\Model
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

class SecurityBulletinEvent extends \Google\Collection
{
  /** @var string[] */
  public $affectedSupportedMinors;
  /** @var string */
  public $briefDescription;
  /** @var string */
  public $bulletinId;
  /** @var string */
  public $bulletinUri;
  /** @var string[] */
  public $cveIds;
  /** @var bool */
  public $manualStepsRequired;
  /** @var string[] */
  public $patchedVersions;
  /** @var string */
  public $resourceTypeAffected;
  /** @var string */
  public $severity;
  /** @var string */
  public $suggestedUpgradeTarget;
  protected $collection_key = 'patchedVersions';
  /** @param string[] */
  public function setAffectedSupportedMinors($affectedSupportedMinors)
  {
    $this->affectedSupportedMinors = $affectedSupportedMinors;
  }
  /** @return string[] */
  public function getAffectedSupportedMinors()
  {
    return $this->affectedSupportedMinors;
  }
  /** @param string */
  public function setBriefDescription($briefDescription)
  {
    $this->briefDescription = $briefDescription;
  }
  /** @return string */
  public function getBriefDescription()
  {
    return $this->briefDescription;
  }
  /** @param string */
  public function setBulletinId($bulletinId)
  {
    $this->bulletinId = $bulletinId;
  }
  /** @return string */
  public function getBulletinId()
  {
    return $this->bulletinId;
  }
  /** @param string */
  public function setBulletinUri($bulletinUri)
  {
    $this->bulletinUri = $bulletinUri;
  }
  /** @return string */
  public function getBulletinUri()
  {
    return $this->bulletinUri;
  }
  /** @param string[] */
  public function setCveIds($cveIds)
  {
    $this->cveIds = $cveIds;
  }
  /** @return string[] */
  public function getCveIds()
  {
    return $this->cveIds;
  }
  /** @param bool */
  public function setManualStepsRequired($manualStepsRequired)
  {
    $this->manualStepsRequired = $manualStepsRequired;
  }
  /** @return bool */
  public function getManualStepsRequired()
  {
    return $this->manualStepsRequired;
  }
  /** @param string[] */
  public function setPatchedVersions($patchedVersions)
  {
    $this->patchedVersions = $patchedVersions;
  }
  /** @return string[] */
  public function getPatchedVersions()
  {
    return $this->patchedVersions;
  }
  /** @param string */
  public function setResourceTypeAffected($resourceTypeAffected)
  {
    $this->resourceTypeAffected = $resourceTypeAffected;
  }
  /** @return string */
  public function getResourceTypeAffected()
  {
    return $this->resourceTypeAffected;
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
  public function setSuggestedUpgradeTarget($suggestedUpgradeTarget)
  {
    $this->suggestedUpgradeTarget = $suggestedUpgradeTarget;
  }
  /** @return string */
  public function getSuggestedUpgradeTarget()
  {
    return $this->suggestedUpgradeTarget;
  }
}

class ServerConfig extends \Google\Collection
{
  /** @var ReleaseChannelConfig[] */
  public $channels;
  /** @var string */
  public $defaultClusterVersion;
  /** @var string */
  public $defaultImageType;
  /** @var string[] */
  public $validImageTypes;
  /** @var string[] */
  public $validMasterVersions;
  /** @var string[] */
  public $validNodeVersions;
  protected $collection_key = 'validNodeVersions';
  protected $channelsType = ReleaseChannelConfig::class;
  protected $channelsDataType = 'array';
  /** @param ReleaseChannelConfig[] */
  public function setChannels($channels)
  {
    $this->channels = $channels;
  }
  /** @return ReleaseChannelConfig[] */
  public function getChannels()
  {
    return $this->channels;
  }
  /** @param string */
  public function setDefaultClusterVersion($defaultClusterVersion)
  {
    $this->defaultClusterVersion = $defaultClusterVersion;
  }
  /** @return string */
  public function getDefaultClusterVersion()
  {
    return $this->defaultClusterVersion;
  }
  /** @param string */
  public function setDefaultImageType($defaultImageType)
  {
    $this->defaultImageType = $defaultImageType;
  }
  /** @return string */
  public function getDefaultImageType()
  {
    return $this->defaultImageType;
  }
  /** @param string[] */
  public function setValidImageTypes($validImageTypes)
  {
    $this->validImageTypes = $validImageTypes;
  }
  /** @return string[] */
  public function getValidImageTypes()
  {
    return $this->validImageTypes;
  }
  /** @param string[] */
  public function setValidMasterVersions($validMasterVersions)
  {
    $this->validMasterVersions = $validMasterVersions;
  }
  /** @return string[] */
  public function getValidMasterVersions()
  {
    return $this->validMasterVersions;
  }
  /** @param string[] */
  public function setValidNodeVersions($validNodeVersions)
  {
    $this->validNodeVersions = $validNodeVersions;
  }
  /** @return string[] */
  public function getValidNodeVersions()
  {
    return $this->validNodeVersions;
  }
}

class ServiceExternalIPsConfig extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class SetAddonsConfigRequest extends \Google\Model
{
  /** @var AddonsConfig */
  public $addonsConfig;
  /** @var string */
  public $clusterId;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;
  protected $addonsConfigType = AddonsConfig::class;
  protected $addonsConfigDataType = '';
  /** @param AddonsConfig */
  public function setAddonsConfig(AddonsConfig $addonsConfig)
  {
    $this->addonsConfig = $addonsConfig;
  }
  /** @return AddonsConfig */
  public function getAddonsConfig()
  {
    return $this->addonsConfig;
  }
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class SetLabelsRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $labelFingerprint;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string[] */
  public $resourceLabels;
  /** @var string */
  public $zone;

  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param string */
  public function setLabelFingerprint($labelFingerprint)
  {
    $this->labelFingerprint = $labelFingerprint;
  }
  /** @return string */
  public function getLabelFingerprint()
  {
    return $this->labelFingerprint;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param string[] */
  public function setResourceLabels($resourceLabels)
  {
    $this->resourceLabels = $resourceLabels;
  }
  /** @return string[] */
  public function getResourceLabels()
  {
    return $this->resourceLabels;
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

class SetLegacyAbacRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var bool */
  public $enabled;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;

  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class SetLocationsRequest extends \Google\Collection
{
  /** @var string */
  public $clusterId;
  /** @var string[] */
  public $locations;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;
  protected $collection_key = 'locations';
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param string[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return string[] */
  public function getLocations()
  {
    return $this->locations;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class SetLoggingServiceRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $loggingService;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;

  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param string */
  public function setLoggingService($loggingService)
  {
    $this->loggingService = $loggingService;
  }
  /** @return string */
  public function getLoggingService()
  {
    return $this->loggingService;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class SetMaintenancePolicyRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var MaintenancePolicy */
  public $maintenancePolicy;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;
  protected $maintenancePolicyType = MaintenancePolicy::class;
  protected $maintenancePolicyDataType = '';
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class SetMasterAuthRequest extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $clusterId;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var MasterAuth */
  public $update;
  /** @var string */
  public $zone;
  protected $updateType = MasterAuth::class;
  protected $updateDataType = '';
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
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param MasterAuth */
  public function setUpdate(MasterAuth $update)
  {
    $this->update = $update;
  }
  /** @return MasterAuth */
  public function getUpdate()
  {
    return $this->update;
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

class SetMonitoringServiceRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $monitoringService;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;

  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param string */
  public function setMonitoringService($monitoringService)
  {
    $this->monitoringService = $monitoringService;
  }
  /** @return string */
  public function getMonitoringService()
  {
    return $this->monitoringService;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class SetNetworkPolicyRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $name;
  /** @var NetworkPolicy */
  public $networkPolicy;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;
  protected $networkPolicyType = NetworkPolicy::class;
  protected $networkPolicyDataType = '';
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  /** @param NetworkPolicy */
  public function setNetworkPolicy(NetworkPolicy $networkPolicy)
  {
    $this->networkPolicy = $networkPolicy;
  }
  /** @return NetworkPolicy */
  public function getNetworkPolicy()
  {
    return $this->networkPolicy;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class SetNodePoolAutoscalingRequest extends \Google\Model
{
  /** @var NodePoolAutoscaling */
  public $autoscaling;
  /** @var string */
  public $clusterId;
  /** @var string */
  public $name;
  /** @var string */
  public $nodePoolId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;
  protected $autoscalingType = NodePoolAutoscaling::class;
  protected $autoscalingDataType = '';
  /** @param NodePoolAutoscaling */
  public function setAutoscaling(NodePoolAutoscaling $autoscaling)
  {
    $this->autoscaling = $autoscaling;
  }
  /** @return NodePoolAutoscaling */
  public function getAutoscaling()
  {
    return $this->autoscaling;
  }
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  public function setNodePoolId($nodePoolId)
  {
    $this->nodePoolId = $nodePoolId;
  }
  /** @return string */
  public function getNodePoolId()
  {
    return $this->nodePoolId;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class SetNodePoolManagementRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var NodeManagement */
  public $management;
  /** @var string */
  public $name;
  /** @var string */
  public $nodePoolId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;
  protected $managementType = NodeManagement::class;
  protected $managementDataType = '';
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param NodeManagement */
  public function setManagement(NodeManagement $management)
  {
    $this->management = $management;
  }
  /** @return NodeManagement */
  public function getManagement()
  {
    return $this->management;
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
  public function setNodePoolId($nodePoolId)
  {
    $this->nodePoolId = $nodePoolId;
  }
  /** @return string */
  public function getNodePoolId()
  {
    return $this->nodePoolId;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class SetNodePoolSizeRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $name;
  /** @var int */
  public $nodeCount;
  /** @var string */
  public $nodePoolId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;

  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  public function setNodePoolId($nodePoolId)
  {
    $this->nodePoolId = $nodePoolId;
  }
  /** @return string */
  public function getNodePoolId()
  {
    return $this->nodePoolId;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class ShieldedInstanceConfig extends \Google\Model
{
  /** @var bool */
  public $enableIntegrityMonitoring;
  /** @var bool */
  public $enableSecureBoot;

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
}

class ShieldedNodes extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class StandardRolloutPolicy extends \Google\Model
{
  /** @var int */
  public $batchNodeCount;
  /** @var float */
  public $batchPercentage;
  /** @var string */
  public $batchSoakDuration;

  /** @param int */
  public function setBatchNodeCount($batchNodeCount)
  {
    $this->batchNodeCount = $batchNodeCount;
  }
  /** @return int */
  public function getBatchNodeCount()
  {
    return $this->batchNodeCount;
  }
  /** @param float */
  public function setBatchPercentage($batchPercentage)
  {
    $this->batchPercentage = $batchPercentage;
  }
  /** @return float */
  public function getBatchPercentage()
  {
    return $this->batchPercentage;
  }
  /** @param string */
  public function setBatchSoakDuration($batchSoakDuration)
  {
    $this->batchSoakDuration = $batchSoakDuration;
  }
  /** @return string */
  public function getBatchSoakDuration()
  {
    return $this->batchSoakDuration;
  }
}

class StartIPRotationRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var bool */
  public $rotateCredentials;
  /** @var string */
  public $zone;

  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param bool */
  public function setRotateCredentials($rotateCredentials)
  {
    $this->rotateCredentials = $rotateCredentials;
  }
  /** @return bool */
  public function getRotateCredentials()
  {
    return $this->rotateCredentials;
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

class StatusCondition extends \Google\Model
{
  /** @var string */
  public $canonicalCode;
  /** @var string */
  public $code;
  /** @var string */
  public $message;

  /** @param string */
  public function setCanonicalCode($canonicalCode)
  {
    $this->canonicalCode = $canonicalCode;
  }
  /** @return string */
  public function getCanonicalCode()
  {
    return $this->canonicalCode;
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

class TimeWindow extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var MaintenanceExclusionOptions */
  public $maintenanceExclusionOptions;
  /** @var string */
  public $startTime;
  protected $maintenanceExclusionOptionsType = MaintenanceExclusionOptions::class;
  protected $maintenanceExclusionOptionsDataType = '';
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
  /** @param MaintenanceExclusionOptions */
  public function setMaintenanceExclusionOptions(MaintenanceExclusionOptions $maintenanceExclusionOptions)
  {
    $this->maintenanceExclusionOptions = $maintenanceExclusionOptions;
  }
  /** @return MaintenanceExclusionOptions */
  public function getMaintenanceExclusionOptions()
  {
    return $this->maintenanceExclusionOptions;
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

class UpdateClusterRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var ClusterUpdate */
  public $update;
  /** @var string */
  public $zone;
  protected $updateType = ClusterUpdate::class;
  protected $updateDataType = '';
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param ClusterUpdate */
  public function setUpdate(ClusterUpdate $update)
  {
    $this->update = $update;
  }
  /** @return ClusterUpdate */
  public function getUpdate()
  {
    return $this->update;
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

class UpdateInfo extends \Google\Model
{
  /** @var BlueGreenInfo */
  public $blueGreenInfo;
  protected $blueGreenInfoType = BlueGreenInfo::class;
  protected $blueGreenInfoDataType = '';
  /** @param BlueGreenInfo */
  public function setBlueGreenInfo(BlueGreenInfo $blueGreenInfo)
  {
    $this->blueGreenInfo = $blueGreenInfo;
  }
  /** @return BlueGreenInfo */
  public function getBlueGreenInfo()
  {
    return $this->blueGreenInfo;
  }
}

class UpdateMasterRequest extends \Google\Model
{
  /** @var string */
  public $clusterId;
  /** @var string */
  public $masterVersion;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;
  /** @var string */
  public $zone;

  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param string */
  public function setMasterVersion($masterVersion)
  {
    $this->masterVersion = $masterVersion;
  }
  /** @return string */
  public function getMasterVersion()
  {
    return $this->masterVersion;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
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

class UpdateNodePoolRequest extends \Google\Collection
{
  /** @var string */
  public $clusterId;
  /** @var ConfidentialNodes */
  public $confidentialNodes;
  /** @var FastSocket */
  public $fastSocket;
  /** @var GcfsConfig */
  public $gcfsConfig;
  /** @var VirtualNIC */
  public $gvnic;
  /** @var string */
  public $imageType;
  /** @var NodeKubeletConfig */
  public $kubeletConfig;
  /** @var NodeLabels */
  public $labels;
  /** @var LinuxNodeConfig */
  public $linuxNodeConfig;
  /** @var string[] */
  public $locations;
  /** @var NodePoolLoggingConfig */
  public $loggingConfig;
  /** @var string */
  public $name;
  /** @var NodeNetworkConfig */
  public $nodeNetworkConfig;
  /** @var string */
  public $nodePoolId;
  /** @var string */
  public $nodeVersion;
  /** @var string */
  public $projectId;
  /** @var ResourceLabels */
  public $resourceLabels;
  /** @var NetworkTags */
  public $tags;
  /** @var NodeTaints */
  public $taints;
  /** @var UpgradeSettings */
  public $upgradeSettings;
  /** @var WorkloadMetadataConfig */
  public $workloadMetadataConfig;
  /** @var string */
  public $zone;
  protected $collection_key = 'locations';
  protected $confidentialNodesType = ConfidentialNodes::class;
  protected $confidentialNodesDataType = '';
  protected $fastSocketType = FastSocket::class;
  protected $fastSocketDataType = '';
  protected $gcfsConfigType = GcfsConfig::class;
  protected $gcfsConfigDataType = '';
  protected $gvnicType = VirtualNIC::class;
  protected $gvnicDataType = '';
  protected $kubeletConfigType = NodeKubeletConfig::class;
  protected $kubeletConfigDataType = '';
  protected $labelsType = NodeLabels::class;
  protected $labelsDataType = '';
  protected $linuxNodeConfigType = LinuxNodeConfig::class;
  protected $linuxNodeConfigDataType = '';
  protected $loggingConfigType = NodePoolLoggingConfig::class;
  protected $loggingConfigDataType = '';
  protected $nodeNetworkConfigType = NodeNetworkConfig::class;
  protected $nodeNetworkConfigDataType = '';
  protected $resourceLabelsType = ResourceLabels::class;
  protected $resourceLabelsDataType = '';
  protected $tagsType = NetworkTags::class;
  protected $tagsDataType = '';
  protected $taintsType = NodeTaints::class;
  protected $taintsDataType = '';
  protected $upgradeSettingsType = UpgradeSettings::class;
  protected $upgradeSettingsDataType = '';
  protected $workloadMetadataConfigType = WorkloadMetadataConfig::class;
  protected $workloadMetadataConfigDataType = '';
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param ConfidentialNodes */
  public function setConfidentialNodes(ConfidentialNodes $confidentialNodes)
  {
    $this->confidentialNodes = $confidentialNodes;
  }
  /** @return ConfidentialNodes */
  public function getConfidentialNodes()
  {
    return $this->confidentialNodes;
  }
  /** @param FastSocket */
  public function setFastSocket(FastSocket $fastSocket)
  {
    $this->fastSocket = $fastSocket;
  }
  /** @return FastSocket */
  public function getFastSocket()
  {
    return $this->fastSocket;
  }
  /** @param GcfsConfig */
  public function setGcfsConfig(GcfsConfig $gcfsConfig)
  {
    $this->gcfsConfig = $gcfsConfig;
  }
  /** @return GcfsConfig */
  public function getGcfsConfig()
  {
    return $this->gcfsConfig;
  }
  /** @param VirtualNIC */
  public function setGvnic(VirtualNIC $gvnic)
  {
    $this->gvnic = $gvnic;
  }
  /** @return VirtualNIC */
  public function getGvnic()
  {
    return $this->gvnic;
  }
  /** @param string */
  public function setImageType($imageType)
  {
    $this->imageType = $imageType;
  }
  /** @return string */
  public function getImageType()
  {
    return $this->imageType;
  }
  /** @param NodeKubeletConfig */
  public function setKubeletConfig(NodeKubeletConfig $kubeletConfig)
  {
    $this->kubeletConfig = $kubeletConfig;
  }
  /** @return NodeKubeletConfig */
  public function getKubeletConfig()
  {
    return $this->kubeletConfig;
  }
  /** @param NodeLabels */
  public function setLabels(NodeLabels $labels)
  {
    $this->labels = $labels;
  }
  /** @return NodeLabels */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param LinuxNodeConfig */
  public function setLinuxNodeConfig(LinuxNodeConfig $linuxNodeConfig)
  {
    $this->linuxNodeConfig = $linuxNodeConfig;
  }
  /** @return LinuxNodeConfig */
  public function getLinuxNodeConfig()
  {
    return $this->linuxNodeConfig;
  }
  /** @param string[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return string[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param NodePoolLoggingConfig */
  public function setLoggingConfig(NodePoolLoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /** @return NodePoolLoggingConfig */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
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
  /** @param NodeNetworkConfig */
  public function setNodeNetworkConfig(NodeNetworkConfig $nodeNetworkConfig)
  {
    $this->nodeNetworkConfig = $nodeNetworkConfig;
  }
  /** @return NodeNetworkConfig */
  public function getNodeNetworkConfig()
  {
    return $this->nodeNetworkConfig;
  }
  /** @param string */
  public function setNodePoolId($nodePoolId)
  {
    $this->nodePoolId = $nodePoolId;
  }
  /** @return string */
  public function getNodePoolId()
  {
    return $this->nodePoolId;
  }
  /** @param string */
  public function setNodeVersion($nodeVersion)
  {
    $this->nodeVersion = $nodeVersion;
  }
  /** @return string */
  public function getNodeVersion()
  {
    return $this->nodeVersion;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param ResourceLabels */
  public function setResourceLabels(ResourceLabels $resourceLabels)
  {
    $this->resourceLabels = $resourceLabels;
  }
  /** @return ResourceLabels */
  public function getResourceLabels()
  {
    return $this->resourceLabels;
  }
  /** @param NetworkTags */
  public function setTags(NetworkTags $tags)
  {
    $this->tags = $tags;
  }
  /** @return NetworkTags */
  public function getTags()
  {
    return $this->tags;
  }
  /** @param NodeTaints */
  public function setTaints(NodeTaints $taints)
  {
    $this->taints = $taints;
  }
  /** @return NodeTaints */
  public function getTaints()
  {
    return $this->taints;
  }
  /** @param UpgradeSettings */
  public function setUpgradeSettings(UpgradeSettings $upgradeSettings)
  {
    $this->upgradeSettings = $upgradeSettings;
  }
  /** @return UpgradeSettings */
  public function getUpgradeSettings()
  {
    return $this->upgradeSettings;
  }
  /** @param WorkloadMetadataConfig */
  public function setWorkloadMetadataConfig(WorkloadMetadataConfig $workloadMetadataConfig)
  {
    $this->workloadMetadataConfig = $workloadMetadataConfig;
  }
  /** @return WorkloadMetadataConfig */
  public function getWorkloadMetadataConfig()
  {
    return $this->workloadMetadataConfig;
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

class UpgradeAvailableEvent extends \Google\Model
{
  /** @var ReleaseChannel */
  public $releaseChannel;
  /** @var string */
  public $resource;
  /** @var string */
  public $resourceType;
  /** @var string */
  public $version;
  protected $releaseChannelType = ReleaseChannel::class;
  protected $releaseChannelDataType = '';
  /** @param ReleaseChannel */
  public function setReleaseChannel(ReleaseChannel $releaseChannel)
  {
    $this->releaseChannel = $releaseChannel;
  }
  /** @return ReleaseChannel */
  public function getReleaseChannel()
  {
    return $this->releaseChannel;
  }
  /** @param string */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
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

class UpgradeEvent extends \Google\Model
{
  /** @var string */
  public $currentVersion;
  /** @var string */
  public $operation;
  /** @var string */
  public $operationStartTime;
  /** @var string */
  public $resource;
  /** @var string */
  public $resourceType;
  /** @var string */
  public $targetVersion;

  /** @param string */
  public function setCurrentVersion($currentVersion)
  {
    $this->currentVersion = $currentVersion;
  }
  /** @return string */
  public function getCurrentVersion()
  {
    return $this->currentVersion;
  }
  /** @param string */
  public function setOperation($operation)
  {
    $this->operation = $operation;
  }
  /** @return string */
  public function getOperation()
  {
    return $this->operation;
  }
  /** @param string */
  public function setOperationStartTime($operationStartTime)
  {
    $this->operationStartTime = $operationStartTime;
  }
  /** @return string */
  public function getOperationStartTime()
  {
    return $this->operationStartTime;
  }
  /** @param string */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
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
}

class UpgradeSettings extends \Google\Model
{
  /** @var BlueGreenSettings */
  public $blueGreenSettings;
  /** @var int */
  public $maxSurge;
  /** @var int */
  public $maxUnavailable;
  /** @var string */
  public $strategy;
  protected $blueGreenSettingsType = BlueGreenSettings::class;
  protected $blueGreenSettingsDataType = '';
  /** @param BlueGreenSettings */
  public function setBlueGreenSettings(BlueGreenSettings $blueGreenSettings)
  {
    $this->blueGreenSettings = $blueGreenSettings;
  }
  /** @return BlueGreenSettings */
  public function getBlueGreenSettings()
  {
    return $this->blueGreenSettings;
  }
  /** @param int */
  public function setMaxSurge($maxSurge)
  {
    $this->maxSurge = $maxSurge;
  }
  /** @return int */
  public function getMaxSurge()
  {
    return $this->maxSurge;
  }
  /** @param int */
  public function setMaxUnavailable($maxUnavailable)
  {
    $this->maxUnavailable = $maxUnavailable;
  }
  /** @return int */
  public function getMaxUnavailable()
  {
    return $this->maxUnavailable;
  }
  /** @param string */
  public function setStrategy($strategy)
  {
    $this->strategy = $strategy;
  }
  /** @return string */
  public function getStrategy()
  {
    return $this->strategy;
  }
}

class UsableSubnetwork extends \Google\Collection
{
  /** @var string */
  public $ipCidrRange;
  /** @var string */
  public $network;
  /** @var UsableSubnetworkSecondaryRange[] */
  public $secondaryIpRanges;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $subnetwork;
  protected $collection_key = 'secondaryIpRanges';
  protected $secondaryIpRangesType = UsableSubnetworkSecondaryRange::class;
  protected $secondaryIpRangesDataType = 'array';
  /** @param string */
  public function setIpCidrRange($ipCidrRange)
  {
    $this->ipCidrRange = $ipCidrRange;
  }
  /** @return string */
  public function getIpCidrRange()
  {
    return $this->ipCidrRange;
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
  /** @param UsableSubnetworkSecondaryRange[] */
  public function setSecondaryIpRanges($secondaryIpRanges)
  {
    $this->secondaryIpRanges = $secondaryIpRanges;
  }
  /** @return UsableSubnetworkSecondaryRange[] */
  public function getSecondaryIpRanges()
  {
    return $this->secondaryIpRanges;
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

class UsableSubnetworkSecondaryRange extends \Google\Model
{
  /** @var string */
  public $ipCidrRange;
  /** @var string */
  public $rangeName;
  /** @var string */
  public $status;

  /** @param string */
  public function setIpCidrRange($ipCidrRange)
  {
    $this->ipCidrRange = $ipCidrRange;
  }
  /** @return string */
  public function getIpCidrRange()
  {
    return $this->ipCidrRange;
  }
  /** @param string */
  public function setRangeName($rangeName)
  {
    $this->rangeName = $rangeName;
  }
  /** @return string */
  public function getRangeName()
  {
    return $this->rangeName;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
}

class VerticalPodAutoscaling extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class VirtualNIC extends \Google\Model
{
  /** @var bool */
  public $enabled;

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

class WorkloadIdentityConfig extends \Google\Model
{
  /** @var string */
  public $workloadPool;

  /** @param string */
  public function setWorkloadPool($workloadPool)
  {
    $this->workloadPool = $workloadPool;
  }
  /** @return string */
  public function getWorkloadPool()
  {
    return $this->workloadPool;
  }
}

class WorkloadMetadataConfig extends \Google\Model
{
  /** @var string */
  public $mode;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AcceleratorConfig::class, 'Google_Service_Container_AcceleratorConfig');
class_alias(AddonsConfig::class, 'Google_Service_Container_AddonsConfig');
class_alias(AdvancedMachineFeatures::class, 'Google_Service_Container_AdvancedMachineFeatures');
class_alias(AuthenticatorGroupsConfig::class, 'Google_Service_Container_AuthenticatorGroupsConfig');
class_alias(AutoUpgradeOptions::class, 'Google_Service_Container_AutoUpgradeOptions');
class_alias(Autopilot::class, 'Google_Service_Container_Autopilot');
class_alias(AutoprovisioningNodePoolDefaults::class, 'Google_Service_Container_AutoprovisioningNodePoolDefaults');
class_alias(BigQueryDestination::class, 'Google_Service_Container_BigQueryDestination');
class_alias(BinaryAuthorization::class, 'Google_Service_Container_BinaryAuthorization');
class_alias(BlueGreenInfo::class, 'Google_Service_Container_BlueGreenInfo');
class_alias(BlueGreenSettings::class, 'Google_Service_Container_BlueGreenSettings');
class_alias(CancelOperationRequest::class, 'Google_Service_Container_CancelOperationRequest');
class_alias(CidrBlock::class, 'Google_Service_Container_CidrBlock');
class_alias(ClientCertificateConfig::class, 'Google_Service_Container_ClientCertificateConfig');
class_alias(CloudRunConfig::class, 'Google_Service_Container_CloudRunConfig');
class_alias(Cluster::class, 'Google_Service_Container_Cluster');
class_alias(ClusterAutoscaling::class, 'Google_Service_Container_ClusterAutoscaling');
class_alias(ClusterUpdate::class, 'Google_Service_Container_ClusterUpdate');
class_alias(CompleteIPRotationRequest::class, 'Google_Service_Container_CompleteIPRotationRequest');
class_alias(CompleteNodePoolUpgradeRequest::class, 'Google_Service_Container_CompleteNodePoolUpgradeRequest');
class_alias(ConfidentialNodes::class, 'Google_Service_Container_ConfidentialNodes');
class_alias(ConfigConnectorConfig::class, 'Google_Service_Container_ConfigConnectorConfig');
class_alias(ConsumptionMeteringConfig::class, 'Google_Service_Container_ConsumptionMeteringConfig');
class_alias(ContainerEmpty::class, 'Google_Service_Container_ContainerEmpty');
class_alias(CostManagementConfig::class, 'Google_Service_Container_CostManagementConfig');
class_alias(CreateClusterRequest::class, 'Google_Service_Container_CreateClusterRequest');
class_alias(CreateNodePoolRequest::class, 'Google_Service_Container_CreateNodePoolRequest');
class_alias(DNSConfig::class, 'Google_Service_Container_DNSConfig');
class_alias(DailyMaintenanceWindow::class, 'Google_Service_Container_DailyMaintenanceWindow');
class_alias(DatabaseEncryption::class, 'Google_Service_Container_DatabaseEncryption');
class_alias(DefaultSnatStatus::class, 'Google_Service_Container_DefaultSnatStatus');
class_alias(DnsCacheConfig::class, 'Google_Service_Container_DnsCacheConfig');
class_alias(FastSocket::class, 'Google_Service_Container_FastSocket');
class_alias(Filter::class, 'Google_Service_Container_Filter');
class_alias(GPUSharingConfig::class, 'Google_Service_Container_GPUSharingConfig');
class_alias(GatewayAPIConfig::class, 'Google_Service_Container_GatewayAPIConfig');
class_alias(GcePersistentDiskCsiDriverConfig::class, 'Google_Service_Container_GcePersistentDiskCsiDriverConfig');
class_alias(GcfsConfig::class, 'Google_Service_Container_GcfsConfig');
class_alias(GcpFilestoreCsiDriverConfig::class, 'Google_Service_Container_GcpFilestoreCsiDriverConfig');
class_alias(GetJSONWebKeysResponse::class, 'Google_Service_Container_GetJSONWebKeysResponse');
class_alias(GetOpenIDConfigResponse::class, 'Google_Service_Container_GetOpenIDConfigResponse');
class_alias(GkeBackupAgentConfig::class, 'Google_Service_Container_GkeBackupAgentConfig');
class_alias(HorizontalPodAutoscaling::class, 'Google_Service_Container_HorizontalPodAutoscaling');
class_alias(HttpCacheControlResponseHeader::class, 'Google_Service_Container_HttpCacheControlResponseHeader');
class_alias(HttpLoadBalancing::class, 'Google_Service_Container_HttpLoadBalancing');
class_alias(ILBSubsettingConfig::class, 'Google_Service_Container_ILBSubsettingConfig');
class_alias(IPAllocationPolicy::class, 'Google_Service_Container_IPAllocationPolicy');
class_alias(IdentityServiceConfig::class, 'Google_Service_Container_IdentityServiceConfig');
class_alias(IntraNodeVisibilityConfig::class, 'Google_Service_Container_IntraNodeVisibilityConfig');
class_alias(Jwk::class, 'Google_Service_Container_Jwk');
class_alias(KubernetesDashboard::class, 'Google_Service_Container_KubernetesDashboard');
class_alias(LegacyAbac::class, 'Google_Service_Container_LegacyAbac');
class_alias(LinuxNodeConfig::class, 'Google_Service_Container_LinuxNodeConfig');
class_alias(ListClustersResponse::class, 'Google_Service_Container_ListClustersResponse');
class_alias(ListNodePoolsResponse::class, 'Google_Service_Container_ListNodePoolsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_Container_ListOperationsResponse');
class_alias(ListUsableSubnetworksResponse::class, 'Google_Service_Container_ListUsableSubnetworksResponse');
class_alias(LoggingComponentConfig::class, 'Google_Service_Container_LoggingComponentConfig');
class_alias(LoggingConfig::class, 'Google_Service_Container_LoggingConfig');
class_alias(LoggingVariantConfig::class, 'Google_Service_Container_LoggingVariantConfig');
class_alias(MaintenanceExclusionOptions::class, 'Google_Service_Container_MaintenanceExclusionOptions');
class_alias(MaintenancePolicy::class, 'Google_Service_Container_MaintenancePolicy');
class_alias(MaintenanceWindow::class, 'Google_Service_Container_MaintenanceWindow');
class_alias(ManagedPrometheusConfig::class, 'Google_Service_Container_ManagedPrometheusConfig');
class_alias(MasterAuth::class, 'Google_Service_Container_MasterAuth');
class_alias(MasterAuthorizedNetworksConfig::class, 'Google_Service_Container_MasterAuthorizedNetworksConfig');
class_alias(MaxPodsConstraint::class, 'Google_Service_Container_MaxPodsConstraint');
class_alias(MeshCertificates::class, 'Google_Service_Container_MeshCertificates');
class_alias(Metric::class, 'Google_Service_Container_Metric');
class_alias(MonitoringComponentConfig::class, 'Google_Service_Container_MonitoringComponentConfig');
class_alias(MonitoringConfig::class, 'Google_Service_Container_MonitoringConfig');
class_alias(NetworkConfig::class, 'Google_Service_Container_NetworkConfig');
class_alias(NetworkPerformanceConfig::class, 'Google_Service_Container_NetworkPerformanceConfig');
class_alias(NetworkPolicy::class, 'Google_Service_Container_NetworkPolicy');
class_alias(NetworkPolicyConfig::class, 'Google_Service_Container_NetworkPolicyConfig');
class_alias(NetworkTags::class, 'Google_Service_Container_NetworkTags');
class_alias(NodeConfig::class, 'Google_Service_Container_NodeConfig');
class_alias(NodeConfigDefaults::class, 'Google_Service_Container_NodeConfigDefaults');
class_alias(NodeKubeletConfig::class, 'Google_Service_Container_NodeKubeletConfig');
class_alias(NodeLabels::class, 'Google_Service_Container_NodeLabels');
class_alias(NodeManagement::class, 'Google_Service_Container_NodeManagement');
class_alias(NodeNetworkConfig::class, 'Google_Service_Container_NodeNetworkConfig');
class_alias(NodePool::class, 'Google_Service_Container_NodePool');
class_alias(NodePoolAutoConfig::class, 'Google_Service_Container_NodePoolAutoConfig');
class_alias(NodePoolAutoscaling::class, 'Google_Service_Container_NodePoolAutoscaling');
class_alias(NodePoolDefaults::class, 'Google_Service_Container_NodePoolDefaults');
class_alias(NodePoolLoggingConfig::class, 'Google_Service_Container_NodePoolLoggingConfig');
class_alias(NodeTaint::class, 'Google_Service_Container_NodeTaint');
class_alias(NodeTaints::class, 'Google_Service_Container_NodeTaints');
class_alias(NotificationConfig::class, 'Google_Service_Container_NotificationConfig');
class_alias(Operation::class, 'Google_Service_Container_Operation');
class_alias(OperationProgress::class, 'Google_Service_Container_OperationProgress');
class_alias(PlacementPolicy::class, 'Google_Service_Container_PlacementPolicy');
class_alias(PrivateClusterConfig::class, 'Google_Service_Container_PrivateClusterConfig');
class_alias(PrivateClusterMasterGlobalAccessConfig::class, 'Google_Service_Container_PrivateClusterMasterGlobalAccessConfig');
class_alias(PubSub::class, 'Google_Service_Container_PubSub');
class_alias(RecurringTimeWindow::class, 'Google_Service_Container_RecurringTimeWindow');
class_alias(ReleaseChannel::class, 'Google_Service_Container_ReleaseChannel');
class_alias(ReleaseChannelConfig::class, 'Google_Service_Container_ReleaseChannelConfig');
class_alias(ReservationAffinity::class, 'Google_Service_Container_ReservationAffinity');
class_alias(ResourceLabels::class, 'Google_Service_Container_ResourceLabels');
class_alias(ResourceLimit::class, 'Google_Service_Container_ResourceLimit');
class_alias(ResourceUsageExportConfig::class, 'Google_Service_Container_ResourceUsageExportConfig');
class_alias(RollbackNodePoolUpgradeRequest::class, 'Google_Service_Container_RollbackNodePoolUpgradeRequest');
class_alias(SandboxConfig::class, 'Google_Service_Container_SandboxConfig');
class_alias(SecurityBulletinEvent::class, 'Google_Service_Container_SecurityBulletinEvent');
class_alias(ServerConfig::class, 'Google_Service_Container_ServerConfig');
class_alias(ServiceExternalIPsConfig::class, 'Google_Service_Container_ServiceExternalIPsConfig');
class_alias(SetAddonsConfigRequest::class, 'Google_Service_Container_SetAddonsConfigRequest');
class_alias(SetLabelsRequest::class, 'Google_Service_Container_SetLabelsRequest');
class_alias(SetLegacyAbacRequest::class, 'Google_Service_Container_SetLegacyAbacRequest');
class_alias(SetLocationsRequest::class, 'Google_Service_Container_SetLocationsRequest');
class_alias(SetLoggingServiceRequest::class, 'Google_Service_Container_SetLoggingServiceRequest');
class_alias(SetMaintenancePolicyRequest::class, 'Google_Service_Container_SetMaintenancePolicyRequest');
class_alias(SetMasterAuthRequest::class, 'Google_Service_Container_SetMasterAuthRequest');
class_alias(SetMonitoringServiceRequest::class, 'Google_Service_Container_SetMonitoringServiceRequest');
class_alias(SetNetworkPolicyRequest::class, 'Google_Service_Container_SetNetworkPolicyRequest');
class_alias(SetNodePoolAutoscalingRequest::class, 'Google_Service_Container_SetNodePoolAutoscalingRequest');
class_alias(SetNodePoolManagementRequest::class, 'Google_Service_Container_SetNodePoolManagementRequest');
class_alias(SetNodePoolSizeRequest::class, 'Google_Service_Container_SetNodePoolSizeRequest');
class_alias(ShieldedInstanceConfig::class, 'Google_Service_Container_ShieldedInstanceConfig');
class_alias(ShieldedNodes::class, 'Google_Service_Container_ShieldedNodes');
class_alias(StandardRolloutPolicy::class, 'Google_Service_Container_StandardRolloutPolicy');
class_alias(StartIPRotationRequest::class, 'Google_Service_Container_StartIPRotationRequest');
class_alias(Status::class, 'Google_Service_Container_Status');
class_alias(StatusCondition::class, 'Google_Service_Container_StatusCondition');
class_alias(TimeWindow::class, 'Google_Service_Container_TimeWindow');
class_alias(UpdateClusterRequest::class, 'Google_Service_Container_UpdateClusterRequest');
class_alias(UpdateInfo::class, 'Google_Service_Container_UpdateInfo');
class_alias(UpdateMasterRequest::class, 'Google_Service_Container_UpdateMasterRequest');
class_alias(UpdateNodePoolRequest::class, 'Google_Service_Container_UpdateNodePoolRequest');
class_alias(UpgradeAvailableEvent::class, 'Google_Service_Container_UpgradeAvailableEvent');
class_alias(UpgradeEvent::class, 'Google_Service_Container_UpgradeEvent');
class_alias(UpgradeSettings::class, 'Google_Service_Container_UpgradeSettings');
class_alias(UsableSubnetwork::class, 'Google_Service_Container_UsableSubnetwork');
class_alias(UsableSubnetworkSecondaryRange::class, 'Google_Service_Container_UsableSubnetworkSecondaryRange');
class_alias(VerticalPodAutoscaling::class, 'Google_Service_Container_VerticalPodAutoscaling');
class_alias(VirtualNIC::class, 'Google_Service_Container_VirtualNIC');
class_alias(WorkloadIdentityConfig::class, 'Google_Service_Container_WorkloadIdentityConfig');
class_alias(WorkloadMetadataConfig::class, 'Google_Service_Container_WorkloadMetadataConfig');
