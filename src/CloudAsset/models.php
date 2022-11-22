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

namespace Google\Service\CloudAsset;

class AccessSelector extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  /** @var string[] */
  public $roles;
  protected $collection_key = 'roles';
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
  /** @param string[] */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /** @return string[] */
  public function getRoles()
  {
    return $this->roles;
  }
}

class AnalyzeIamPolicyLongrunningMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;

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
}

class AnalyzeIamPolicyLongrunningRequest extends \Google\Model
{
  /** @var IamPolicyAnalysisQuery */
  public $analysisQuery;
  /** @var IamPolicyAnalysisOutputConfig */
  public $outputConfig;
  /** @var string */
  public $savedAnalysisQuery;
  protected $analysisQueryType = IamPolicyAnalysisQuery::class;
  protected $analysisQueryDataType = '';
  protected $outputConfigType = IamPolicyAnalysisOutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param IamPolicyAnalysisQuery */
  public function setAnalysisQuery(IamPolicyAnalysisQuery $analysisQuery)
  {
    $this->analysisQuery = $analysisQuery;
  }
  /** @return IamPolicyAnalysisQuery */
  public function getAnalysisQuery()
  {
    return $this->analysisQuery;
  }
  /** @param IamPolicyAnalysisOutputConfig */
  public function setOutputConfig(IamPolicyAnalysisOutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return IamPolicyAnalysisOutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
  /** @param string */
  public function setSavedAnalysisQuery($savedAnalysisQuery)
  {
    $this->savedAnalysisQuery = $savedAnalysisQuery;
  }
  /** @return string */
  public function getSavedAnalysisQuery()
  {
    return $this->savedAnalysisQuery;
  }
}

class AnalyzeIamPolicyLongrunningResponse extends \Google\Model
{
}

class AnalyzeIamPolicyResponse extends \Google\Collection
{
  /** @var bool */
  public $fullyExplored;
  /** @var IamPolicyAnalysis */
  public $mainAnalysis;
  /** @var IamPolicyAnalysis[] */
  public $serviceAccountImpersonationAnalysis;
  protected $collection_key = 'serviceAccountImpersonationAnalysis';
  protected $mainAnalysisType = IamPolicyAnalysis::class;
  protected $mainAnalysisDataType = '';
  protected $serviceAccountImpersonationAnalysisType = IamPolicyAnalysis::class;
  protected $serviceAccountImpersonationAnalysisDataType = 'array';
  /** @param bool */
  public function setFullyExplored($fullyExplored)
  {
    $this->fullyExplored = $fullyExplored;
  }
  /** @return bool */
  public function getFullyExplored()
  {
    return $this->fullyExplored;
  }
  /** @param IamPolicyAnalysis */
  public function setMainAnalysis(IamPolicyAnalysis $mainAnalysis)
  {
    $this->mainAnalysis = $mainAnalysis;
  }
  /** @return IamPolicyAnalysis */
  public function getMainAnalysis()
  {
    return $this->mainAnalysis;
  }
  /** @param IamPolicyAnalysis[] */
  public function setServiceAccountImpersonationAnalysis($serviceAccountImpersonationAnalysis)
  {
    $this->serviceAccountImpersonationAnalysis = $serviceAccountImpersonationAnalysis;
  }
  /** @return IamPolicyAnalysis[] */
  public function getServiceAccountImpersonationAnalysis()
  {
    return $this->serviceAccountImpersonationAnalysis;
  }
}

class AnalyzeMoveResponse extends \Google\Collection
{
  /** @var MoveAnalysis[] */
  public $moveAnalysis;
  protected $collection_key = 'moveAnalysis';
  protected $moveAnalysisType = MoveAnalysis::class;
  protected $moveAnalysisDataType = 'array';
  /** @param MoveAnalysis[] */
  public function setMoveAnalysis($moveAnalysis)
  {
    $this->moveAnalysis = $moveAnalysis;
  }
  /** @return MoveAnalysis[] */
  public function getMoveAnalysis()
  {
    return $this->moveAnalysis;
  }
}

class AnalyzeOrgPoliciesResponse extends \Google\Collection
{
  /** @var AnalyzerOrgPolicyConstraint */
  public $constraint;
  /** @var string */
  public $nextPageToken;
  /** @var OrgPolicyResult[] */
  public $orgPolicyResults;
  protected $collection_key = 'orgPolicyResults';
  protected $constraintType = AnalyzerOrgPolicyConstraint::class;
  protected $constraintDataType = '';
  protected $orgPolicyResultsType = OrgPolicyResult::class;
  protected $orgPolicyResultsDataType = 'array';
  /** @param AnalyzerOrgPolicyConstraint */
  public function setConstraint(AnalyzerOrgPolicyConstraint $constraint)
  {
    $this->constraint = $constraint;
  }
  /** @return AnalyzerOrgPolicyConstraint */
  public function getConstraint()
  {
    return $this->constraint;
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
  /** @param OrgPolicyResult[] */
  public function setOrgPolicyResults($orgPolicyResults)
  {
    $this->orgPolicyResults = $orgPolicyResults;
  }
  /** @return OrgPolicyResult[] */
  public function getOrgPolicyResults()
  {
    return $this->orgPolicyResults;
  }
}

class AnalyzeOrgPolicyGovernedAssetsResponse extends \Google\Collection
{
  /** @var AnalyzerOrgPolicyConstraint */
  public $constraint;
  /** @var GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedAsset[] */
  public $governedAssets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'governedAssets';
  protected $constraintType = AnalyzerOrgPolicyConstraint::class;
  protected $constraintDataType = '';
  protected $governedAssetsType = GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedAsset::class;
  protected $governedAssetsDataType = 'array';
  /** @param AnalyzerOrgPolicyConstraint */
  public function setConstraint(AnalyzerOrgPolicyConstraint $constraint)
  {
    $this->constraint = $constraint;
  }
  /** @return AnalyzerOrgPolicyConstraint */
  public function getConstraint()
  {
    return $this->constraint;
  }
  /** @param GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedAsset[] */
  public function setGovernedAssets($governedAssets)
  {
    $this->governedAssets = $governedAssets;
  }
  /** @return GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedAsset[] */
  public function getGovernedAssets()
  {
    return $this->governedAssets;
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

class AnalyzeOrgPolicyGovernedContainersResponse extends \Google\Collection
{
  /** @var AnalyzerOrgPolicyConstraint */
  public $constraint;
  /** @var GoogleCloudAssetV1GovernedContainer[] */
  public $governedContainers;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'governedContainers';
  protected $constraintType = AnalyzerOrgPolicyConstraint::class;
  protected $constraintDataType = '';
  protected $governedContainersType = GoogleCloudAssetV1GovernedContainer::class;
  protected $governedContainersDataType = 'array';
  /** @param AnalyzerOrgPolicyConstraint */
  public function setConstraint(AnalyzerOrgPolicyConstraint $constraint)
  {
    $this->constraint = $constraint;
  }
  /** @return AnalyzerOrgPolicyConstraint */
  public function getConstraint()
  {
    return $this->constraint;
  }
  /** @param GoogleCloudAssetV1GovernedContainer[] */
  public function setGovernedContainers($governedContainers)
  {
    $this->governedContainers = $governedContainers;
  }
  /** @return GoogleCloudAssetV1GovernedContainer[] */
  public function getGovernedContainers()
  {
    return $this->governedContainers;
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

class AnalyzerOrgPolicy extends \Google\Collection
{
  /** @var string */
  public $appliedResource;
  /** @var string */
  public $attachedResource;
  /** @var bool */
  public $inheritFromParent;
  /** @var bool */
  public $reset;
  /** @var GoogleCloudAssetV1Rule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $rulesType = GoogleCloudAssetV1Rule::class;
  protected $rulesDataType = 'array';
  /** @param string */
  public function setAppliedResource($appliedResource)
  {
    $this->appliedResource = $appliedResource;
  }
  /** @return string */
  public function getAppliedResource()
  {
    return $this->appliedResource;
  }
  /** @param string */
  public function setAttachedResource($attachedResource)
  {
    $this->attachedResource = $attachedResource;
  }
  /** @return string */
  public function getAttachedResource()
  {
    return $this->attachedResource;
  }
  /** @param bool */
  public function setInheritFromParent($inheritFromParent)
  {
    $this->inheritFromParent = $inheritFromParent;
  }
  /** @return bool */
  public function getInheritFromParent()
  {
    return $this->inheritFromParent;
  }
  /** @param bool */
  public function setReset($reset)
  {
    $this->reset = $reset;
  }
  /** @return bool */
  public function getReset()
  {
    return $this->reset;
  }
  /** @param GoogleCloudAssetV1Rule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return GoogleCloudAssetV1Rule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class AnalyzerOrgPolicyConstraint extends \Google\Model
{
  /** @var GoogleCloudAssetV1CustomConstraint */
  public $customConstraint;
  /** @var GoogleCloudAssetV1Constraint */
  public $googleDefinedConstraint;
  protected $customConstraintType = GoogleCloudAssetV1CustomConstraint::class;
  protected $customConstraintDataType = '';
  protected $googleDefinedConstraintType = GoogleCloudAssetV1Constraint::class;
  protected $googleDefinedConstraintDataType = '';
  /** @param GoogleCloudAssetV1CustomConstraint */
  public function setCustomConstraint(GoogleCloudAssetV1CustomConstraint $customConstraint)
  {
    $this->customConstraint = $customConstraint;
  }
  /** @return GoogleCloudAssetV1CustomConstraint */
  public function getCustomConstraint()
  {
    return $this->customConstraint;
  }
  /** @param GoogleCloudAssetV1Constraint */
  public function setGoogleDefinedConstraint(GoogleCloudAssetV1Constraint $googleDefinedConstraint)
  {
    $this->googleDefinedConstraint = $googleDefinedConstraint;
  }
  /** @return GoogleCloudAssetV1Constraint */
  public function getGoogleDefinedConstraint()
  {
    return $this->googleDefinedConstraint;
  }
}

class Asset extends \Google\Collection
{
  /** @var GoogleIdentityAccesscontextmanagerV1AccessLevel */
  public $accessLevel;
  /** @var GoogleIdentityAccesscontextmanagerV1AccessPolicy */
  public $accessPolicy;
  /** @var string[] */
  public $ancestors;
  /** @var string */
  public $assetType;
  /** @var Policy */
  public $iamPolicy;
  /** @var string */
  public $name;
  /** @var GoogleCloudOrgpolicyV1Policy[] */
  public $orgPolicy;
  /** @var Inventory */
  public $osInventory;
  /** @var RelatedAsset */
  public $relatedAsset;
  /** @var RelatedAssets */
  public $relatedAssets;
  /** @var CloudassetResource */
  public $resource;
  /** @var GoogleIdentityAccesscontextmanagerV1ServicePerimeter */
  public $servicePerimeter;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'orgPolicy';
  protected $accessLevelType = GoogleIdentityAccesscontextmanagerV1AccessLevel::class;
  protected $accessLevelDataType = '';
  protected $accessPolicyType = GoogleIdentityAccesscontextmanagerV1AccessPolicy::class;
  protected $accessPolicyDataType = '';
  protected $iamPolicyType = Policy::class;
  protected $iamPolicyDataType = '';
  protected $orgPolicyType = GoogleCloudOrgpolicyV1Policy::class;
  protected $orgPolicyDataType = 'array';
  protected $osInventoryType = Inventory::class;
  protected $osInventoryDataType = '';
  protected $relatedAssetType = RelatedAsset::class;
  protected $relatedAssetDataType = '';
  protected $relatedAssetsType = RelatedAssets::class;
  protected $relatedAssetsDataType = '';
  protected $resourceType = CloudassetResource::class;
  protected $resourceDataType = '';
  protected $servicePerimeterType = GoogleIdentityAccesscontextmanagerV1ServicePerimeter::class;
  protected $servicePerimeterDataType = '';
  /** @param GoogleIdentityAccesscontextmanagerV1AccessLevel */
  public function setAccessLevel(GoogleIdentityAccesscontextmanagerV1AccessLevel $accessLevel)
  {
    $this->accessLevel = $accessLevel;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1AccessLevel */
  public function getAccessLevel()
  {
    return $this->accessLevel;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1AccessPolicy */
  public function setAccessPolicy(GoogleIdentityAccesscontextmanagerV1AccessPolicy $accessPolicy)
  {
    $this->accessPolicy = $accessPolicy;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1AccessPolicy */
  public function getAccessPolicy()
  {
    return $this->accessPolicy;
  }
  /** @param string[] */
  public function setAncestors($ancestors)
  {
    $this->ancestors = $ancestors;
  }
  /** @return string[] */
  public function getAncestors()
  {
    return $this->ancestors;
  }
  /** @param string */
  public function setAssetType($assetType)
  {
    $this->assetType = $assetType;
  }
  /** @return string */
  public function getAssetType()
  {
    return $this->assetType;
  }
  /** @param Policy */
  public function setIamPolicy(Policy $iamPolicy)
  {
    $this->iamPolicy = $iamPolicy;
  }
  /** @return Policy */
  public function getIamPolicy()
  {
    return $this->iamPolicy;
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
  /** @param GoogleCloudOrgpolicyV1Policy[] */
  public function setOrgPolicy($orgPolicy)
  {
    $this->orgPolicy = $orgPolicy;
  }
  /** @return GoogleCloudOrgpolicyV1Policy[] */
  public function getOrgPolicy()
  {
    return $this->orgPolicy;
  }
  /** @param Inventory */
  public function setOsInventory(Inventory $osInventory)
  {
    $this->osInventory = $osInventory;
  }
  /** @return Inventory */
  public function getOsInventory()
  {
    return $this->osInventory;
  }
  /** @param RelatedAsset */
  public function setRelatedAsset(RelatedAsset $relatedAsset)
  {
    $this->relatedAsset = $relatedAsset;
  }
  /** @return RelatedAsset */
  public function getRelatedAsset()
  {
    return $this->relatedAsset;
  }
  /** @param RelatedAssets */
  public function setRelatedAssets(RelatedAssets $relatedAssets)
  {
    $this->relatedAssets = $relatedAssets;
  }
  /** @return RelatedAssets */
  public function getRelatedAssets()
  {
    return $this->relatedAssets;
  }
  /** @param CloudassetResource */
  public function setResource(CloudassetResource $resource)
  {
    $this->resource = $resource;
  }
  /** @return CloudassetResource */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1ServicePerimeter */
  public function setServicePerimeter(GoogleIdentityAccesscontextmanagerV1ServicePerimeter $servicePerimeter)
  {
    $this->servicePerimeter = $servicePerimeter;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1ServicePerimeter */
  public function getServicePerimeter()
  {
    return $this->servicePerimeter;
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

class AttachedResource extends \Google\Collection
{
  /** @var string */
  public $assetType;
  /** @var VersionedResource[] */
  public $versionedResources;
  protected $collection_key = 'versionedResources';
  protected $versionedResourcesType = VersionedResource::class;
  protected $versionedResourcesDataType = 'array';
  /** @param string */
  public function setAssetType($assetType)
  {
    $this->assetType = $assetType;
  }
  /** @return string */
  public function getAssetType()
  {
    return $this->assetType;
  }
  /** @param VersionedResource[] */
  public function setVersionedResources($versionedResources)
  {
    $this->versionedResources = $versionedResources;
  }
  /** @return VersionedResource[] */
  public function getVersionedResources()
  {
    return $this->versionedResources;
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

class BatchGetAssetsHistoryResponse extends \Google\Collection
{
  /** @var TemporalAsset[] */
  public $assets;
  protected $collection_key = 'assets';
  protected $assetsType = TemporalAsset::class;
  protected $assetsDataType = 'array';
  /** @param TemporalAsset[] */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /** @return TemporalAsset[] */
  public function getAssets()
  {
    return $this->assets;
  }
}

class BatchGetEffectiveIamPoliciesResponse extends \Google\Collection
{
  /** @var EffectiveIamPolicy[] */
  public $policyResults;
  protected $collection_key = 'policyResults';
  protected $policyResultsType = EffectiveIamPolicy::class;
  protected $policyResultsDataType = 'array';
  /** @param EffectiveIamPolicy[] */
  public function setPolicyResults($policyResults)
  {
    $this->policyResults = $policyResults;
  }
  /** @return EffectiveIamPolicy[] */
  public function getPolicyResults()
  {
    return $this->policyResults;
  }
}

class BigQueryDestination extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var bool */
  public $force;
  /** @var PartitionSpec */
  public $partitionSpec;
  /** @var bool */
  public $separateTablesPerAssetType;
  /** @var string */
  public $table;
  protected $partitionSpecType = PartitionSpec::class;
  protected $partitionSpecDataType = '';
  /** @param string */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param bool */
  public function setForce($force)
  {
    $this->force = $force;
  }
  /** @return bool */
  public function getForce()
  {
    return $this->force;
  }
  /** @param PartitionSpec */
  public function setPartitionSpec(PartitionSpec $partitionSpec)
  {
    $this->partitionSpec = $partitionSpec;
  }
  /** @return PartitionSpec */
  public function getPartitionSpec()
  {
    return $this->partitionSpec;
  }
  /** @param bool */
  public function setSeparateTablesPerAssetType($separateTablesPerAssetType)
  {
    $this->separateTablesPerAssetType = $separateTablesPerAssetType;
  }
  /** @return bool */
  public function getSeparateTablesPerAssetType()
  {
    return $this->separateTablesPerAssetType;
  }
  /** @param string */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
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

class CloudassetEmpty extends \Google\Model
{
}

class CloudassetResource extends \Google\Model
{
  /** @var array[] */
  public $data;
  /** @var string */
  public $discoveryDocumentUri;
  /** @var string */
  public $discoveryName;
  /** @var string */
  public $location;
  /** @var string */
  public $parent;
  /** @var string */
  public $resourceUrl;
  /** @var string */
  public $version;

  /** @param array[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return array[] */
  public function getData()
  {
    return $this->data;
  }
  /** @param string */
  public function setDiscoveryDocumentUri($discoveryDocumentUri)
  {
    $this->discoveryDocumentUri = $discoveryDocumentUri;
  }
  /** @return string */
  public function getDiscoveryDocumentUri()
  {
    return $this->discoveryDocumentUri;
  }
  /** @param string */
  public function setDiscoveryName($discoveryName)
  {
    $this->discoveryName = $discoveryName;
  }
  /** @return string */
  public function getDiscoveryName()
  {
    return $this->discoveryName;
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
  public function setResourceUrl($resourceUrl)
  {
    $this->resourceUrl = $resourceUrl;
  }
  /** @return string */
  public function getResourceUrl()
  {
    return $this->resourceUrl;
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

class ConditionContext extends \Google\Model
{
  /** @var string */
  public $accessTime;

  /** @param string */
  public function setAccessTime($accessTime)
  {
    $this->accessTime = $accessTime;
  }
  /** @return string */
  public function getAccessTime()
  {
    return $this->accessTime;
  }
}

class ConditionEvaluation extends \Google\Model
{
  /** @var string */
  public $evaluationValue;

  /** @param string */
  public function setEvaluationValue($evaluationValue)
  {
    $this->evaluationValue = $evaluationValue;
  }
  /** @return string */
  public function getEvaluationValue()
  {
    return $this->evaluationValue;
  }
}

class CreateFeedRequest extends \Google\Model
{
  /** @var Feed */
  public $feed;
  /** @var string */
  public $feedId;
  protected $feedType = Feed::class;
  protected $feedDataType = '';
  /** @param Feed */
  public function setFeed(Feed $feed)
  {
    $this->feed = $feed;
  }
  /** @return Feed */
  public function getFeed()
  {
    return $this->feed;
  }
  /** @param string */
  public function setFeedId($feedId)
  {
    $this->feedId = $feedId;
  }
  /** @return string */
  public function getFeedId()
  {
    return $this->feedId;
  }
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

class EffectiveIamPolicy extends \Google\Collection
{
  /** @var string */
  public $fullResourceName;
  /** @var PolicyInfo[] */
  public $policies;
  protected $collection_key = 'policies';
  protected $policiesType = PolicyInfo::class;
  protected $policiesDataType = 'array';
  /** @param string */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /** @return string */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
  /** @param PolicyInfo[] */
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /** @return PolicyInfo[] */
  public function getPolicies()
  {
    return $this->policies;
  }
}

class Explanation extends \Google\Model
{
  /** @var Permissions[] */
  public $matchedPermissions;
  protected $matchedPermissionsType = Permissions::class;
  protected $matchedPermissionsDataType = 'map';
  /** @param Permissions[] */
  public function setMatchedPermissions($matchedPermissions)
  {
    $this->matchedPermissions = $matchedPermissions;
  }
  /** @return Permissions[] */
  public function getMatchedPermissions()
  {
    return $this->matchedPermissions;
  }
}

class ExportAssetsRequest extends \Google\Collection
{
  /** @var string[] */
  public $assetTypes;
  /** @var string */
  public $contentType;
  /** @var OutputConfig */
  public $outputConfig;
  /** @var string */
  public $readTime;
  /** @var string[] */
  public $relationshipTypes;
  protected $collection_key = 'relationshipTypes';
  protected $outputConfigType = OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param string[] */
  public function setAssetTypes($assetTypes)
  {
    $this->assetTypes = $assetTypes;
  }
  /** @return string[] */
  public function getAssetTypes()
  {
    return $this->assetTypes;
  }
  /** @param string */
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  /** @return string */
  public function getContentType()
  {
    return $this->contentType;
  }
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
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
  /** @param string[] */
  public function setRelationshipTypes($relationshipTypes)
  {
    $this->relationshipTypes = $relationshipTypes;
  }
  /** @return string[] */
  public function getRelationshipTypes()
  {
    return $this->relationshipTypes;
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

class Feed extends \Google\Collection
{
  /** @var string[] */
  public $assetNames;
  /** @var string[] */
  public $assetTypes;
  /** @var Expr */
  public $condition;
  /** @var string */
  public $contentType;
  /** @var FeedOutputConfig */
  public $feedOutputConfig;
  /** @var string */
  public $name;
  /** @var string[] */
  public $relationshipTypes;
  protected $collection_key = 'relationshipTypes';
  protected $conditionType = Expr::class;
  protected $conditionDataType = '';
  protected $feedOutputConfigType = FeedOutputConfig::class;
  protected $feedOutputConfigDataType = '';
  /** @param string[] */
  public function setAssetNames($assetNames)
  {
    $this->assetNames = $assetNames;
  }
  /** @return string[] */
  public function getAssetNames()
  {
    return $this->assetNames;
  }
  /** @param string[] */
  public function setAssetTypes($assetTypes)
  {
    $this->assetTypes = $assetTypes;
  }
  /** @return string[] */
  public function getAssetTypes()
  {
    return $this->assetTypes;
  }
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
  /** @param string */
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  /** @return string */
  public function getContentType()
  {
    return $this->contentType;
  }
  /** @param FeedOutputConfig */
  public function setFeedOutputConfig(FeedOutputConfig $feedOutputConfig)
  {
    $this->feedOutputConfig = $feedOutputConfig;
  }
  /** @return FeedOutputConfig */
  public function getFeedOutputConfig()
  {
    return $this->feedOutputConfig;
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
  /** @param string[] */
  public function setRelationshipTypes($relationshipTypes)
  {
    $this->relationshipTypes = $relationshipTypes;
  }
  /** @return string[] */
  public function getRelationshipTypes()
  {
    return $this->relationshipTypes;
  }
}

class FeedOutputConfig extends \Google\Model
{
  /** @var PubsubDestination */
  public $pubsubDestination;
  protected $pubsubDestinationType = PubsubDestination::class;
  protected $pubsubDestinationDataType = '';
  /** @param PubsubDestination */
  public function setPubsubDestination(PubsubDestination $pubsubDestination)
  {
    $this->pubsubDestination = $pubsubDestination;
  }
  /** @return PubsubDestination */
  public function getPubsubDestination()
  {
    return $this->pubsubDestination;
  }
}

class GcsDestination extends \Google\Model
{
  /** @var string */
  public $uri;
  /** @var string */
  public $uriPrefix;

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
  public function setUriPrefix($uriPrefix)
  {
    $this->uriPrefix = $uriPrefix;
  }
  /** @return string */
  public function getUriPrefix()
  {
    return $this->uriPrefix;
  }
}

class GoogleCloudAssetV1Access extends \Google\Model
{
  /** @var IamPolicyAnalysisState */
  public $analysisState;
  /** @var string */
  public $permission;
  /** @var string */
  public $role;
  protected $analysisStateType = IamPolicyAnalysisState::class;
  protected $analysisStateDataType = '';
  /** @param IamPolicyAnalysisState */
  public function setAnalysisState(IamPolicyAnalysisState $analysisState)
  {
    $this->analysisState = $analysisState;
  }
  /** @return IamPolicyAnalysisState */
  public function getAnalysisState()
  {
    return $this->analysisState;
  }
  /** @param string */
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /** @return string */
  public function getPermission()
  {
    return $this->permission;
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

class GoogleCloudAssetV1AccessControlList extends \Google\Collection
{
  /** @var GoogleCloudAssetV1Access[] */
  public $accesses;
  /** @var ConditionEvaluation */
  public $conditionEvaluation;
  /** @var GoogleCloudAssetV1Edge[] */
  public $resourceEdges;
  /** @var GoogleCloudAssetV1Resource[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $accessesType = GoogleCloudAssetV1Access::class;
  protected $accessesDataType = 'array';
  protected $conditionEvaluationType = ConditionEvaluation::class;
  protected $conditionEvaluationDataType = '';
  protected $resourceEdgesType = GoogleCloudAssetV1Edge::class;
  protected $resourceEdgesDataType = 'array';
  protected $resourcesType = GoogleCloudAssetV1Resource::class;
  protected $resourcesDataType = 'array';
  /** @param GoogleCloudAssetV1Access[] */
  public function setAccesses($accesses)
  {
    $this->accesses = $accesses;
  }
  /** @return GoogleCloudAssetV1Access[] */
  public function getAccesses()
  {
    return $this->accesses;
  }
  /** @param ConditionEvaluation */
  public function setConditionEvaluation(ConditionEvaluation $conditionEvaluation)
  {
    $this->conditionEvaluation = $conditionEvaluation;
  }
  /** @return ConditionEvaluation */
  public function getConditionEvaluation()
  {
    return $this->conditionEvaluation;
  }
  /** @param GoogleCloudAssetV1Edge[] */
  public function setResourceEdges($resourceEdges)
  {
    $this->resourceEdges = $resourceEdges;
  }
  /** @return GoogleCloudAssetV1Edge[] */
  public function getResourceEdges()
  {
    return $this->resourceEdges;
  }
  /** @param GoogleCloudAssetV1Resource[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return GoogleCloudAssetV1Resource[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedAsset extends \Google\Collection
{
  /** @var AnalyzerOrgPolicy */
  public $consolidatedPolicy;
  /** @var GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedIamPolicy */
  public $governedIamPolicy;
  /** @var GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedResource */
  public $governedResource;
  /** @var AnalyzerOrgPolicy[] */
  public $policyBundle;
  protected $collection_key = 'policyBundle';
  protected $consolidatedPolicyType = AnalyzerOrgPolicy::class;
  protected $consolidatedPolicyDataType = '';
  protected $governedIamPolicyType = GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedIamPolicy::class;
  protected $governedIamPolicyDataType = '';
  protected $governedResourceType = GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedResource::class;
  protected $governedResourceDataType = '';
  protected $policyBundleType = AnalyzerOrgPolicy::class;
  protected $policyBundleDataType = 'array';
  /** @param AnalyzerOrgPolicy */
  public function setConsolidatedPolicy(AnalyzerOrgPolicy $consolidatedPolicy)
  {
    $this->consolidatedPolicy = $consolidatedPolicy;
  }
  /** @return AnalyzerOrgPolicy */
  public function getConsolidatedPolicy()
  {
    return $this->consolidatedPolicy;
  }
  /** @param GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedIamPolicy */
  public function setGovernedIamPolicy(GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedIamPolicy $governedIamPolicy)
  {
    $this->governedIamPolicy = $governedIamPolicy;
  }
  /** @return GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedIamPolicy */
  public function getGovernedIamPolicy()
  {
    return $this->governedIamPolicy;
  }
  /** @param GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedResource */
  public function setGovernedResource(GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedResource $governedResource)
  {
    $this->governedResource = $governedResource;
  }
  /** @return GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedResource */
  public function getGovernedResource()
  {
    return $this->governedResource;
  }
  /** @param AnalyzerOrgPolicy[] */
  public function setPolicyBundle($policyBundle)
  {
    $this->policyBundle = $policyBundle;
  }
  /** @return AnalyzerOrgPolicy[] */
  public function getPolicyBundle()
  {
    return $this->policyBundle;
  }
}

class GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedIamPolicy extends \Google\Collection
{
  /** @var string */
  public $attachedResource;
  /** @var string[] */
  public $folders;
  /** @var string */
  public $organization;
  /** @var Policy */
  public $policy;
  /** @var string */
  public $project;
  protected $collection_key = 'folders';
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param string */
  public function setAttachedResource($attachedResource)
  {
    $this->attachedResource = $attachedResource;
  }
  /** @return string */
  public function getAttachedResource()
  {
    return $this->attachedResource;
  }
  /** @param string[] */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /** @return string[] */
  public function getFolders()
  {
    return $this->folders;
  }
  /** @param string */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
  }
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

class GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedResource extends \Google\Collection
{
  /** @var string[] */
  public $folders;
  /** @var string */
  public $fullResourceName;
  /** @var string */
  public $organization;
  /** @var string */
  public $parent;
  /** @var string */
  public $project;
  protected $collection_key = 'folders';
  /** @param string[] */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /** @return string[] */
  public function getFolders()
  {
    return $this->folders;
  }
  /** @param string */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /** @return string */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
  /** @param string */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
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

class GoogleCloudAssetV1BigQueryDestination extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var string */
  public $partitionKey;
  /** @var string */
  public $tablePrefix;
  /** @var string */
  public $writeDisposition;

  /** @param string */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param string */
  public function setPartitionKey($partitionKey)
  {
    $this->partitionKey = $partitionKey;
  }
  /** @return string */
  public function getPartitionKey()
  {
    return $this->partitionKey;
  }
  /** @param string */
  public function setTablePrefix($tablePrefix)
  {
    $this->tablePrefix = $tablePrefix;
  }
  /** @return string */
  public function getTablePrefix()
  {
    return $this->tablePrefix;
  }
  /** @param string */
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  /** @return string */
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}

class GoogleCloudAssetV1BooleanConstraint extends \Google\Model
{
}

class GoogleCloudAssetV1Constraint extends \Google\Model
{
  /** @var GoogleCloudAssetV1BooleanConstraint */
  public $booleanConstraint;
  /** @var string */
  public $constraintDefault;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GoogleCloudAssetV1ListConstraint */
  public $listConstraint;
  /** @var string */
  public $name;
  protected $booleanConstraintType = GoogleCloudAssetV1BooleanConstraint::class;
  protected $booleanConstraintDataType = '';
  protected $listConstraintType = GoogleCloudAssetV1ListConstraint::class;
  protected $listConstraintDataType = '';
  /** @param GoogleCloudAssetV1BooleanConstraint */
  public function setBooleanConstraint(GoogleCloudAssetV1BooleanConstraint $booleanConstraint)
  {
    $this->booleanConstraint = $booleanConstraint;
  }
  /** @return GoogleCloudAssetV1BooleanConstraint */
  public function getBooleanConstraint()
  {
    return $this->booleanConstraint;
  }
  /** @param string */
  public function setConstraintDefault($constraintDefault)
  {
    $this->constraintDefault = $constraintDefault;
  }
  /** @return string */
  public function getConstraintDefault()
  {
    return $this->constraintDefault;
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
  /** @param GoogleCloudAssetV1ListConstraint */
  public function setListConstraint(GoogleCloudAssetV1ListConstraint $listConstraint)
  {
    $this->listConstraint = $listConstraint;
  }
  /** @return GoogleCloudAssetV1ListConstraint */
  public function getListConstraint()
  {
    return $this->listConstraint;
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

class GoogleCloudAssetV1CustomConstraint extends \Google\Collection
{
  /** @var string */
  public $actionType;
  /** @var string */
  public $condition;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $methodTypes;
  /** @var string */
  public $name;
  /** @var string[] */
  public $resourceTypes;
  protected $collection_key = 'resourceTypes';
  /** @param string */
  public function setActionType($actionType)
  {
    $this->actionType = $actionType;
  }
  /** @return string */
  public function getActionType()
  {
    return $this->actionType;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
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
  /** @param string[] */
  public function setMethodTypes($methodTypes)
  {
    $this->methodTypes = $methodTypes;
  }
  /** @return string[] */
  public function getMethodTypes()
  {
    return $this->methodTypes;
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
  /** @param string[] */
  public function setResourceTypes($resourceTypes)
  {
    $this->resourceTypes = $resourceTypes;
  }
  /** @return string[] */
  public function getResourceTypes()
  {
    return $this->resourceTypes;
  }
}

class GoogleCloudAssetV1Edge extends \Google\Model
{
  /** @var string */
  public $sourceNode;
  /** @var string */
  public $targetNode;

  /** @param string */
  public function setSourceNode($sourceNode)
  {
    $this->sourceNode = $sourceNode;
  }
  /** @return string */
  public function getSourceNode()
  {
    return $this->sourceNode;
  }
  /** @param string */
  public function setTargetNode($targetNode)
  {
    $this->targetNode = $targetNode;
  }
  /** @return string */
  public function getTargetNode()
  {
    return $this->targetNode;
  }
}

class GoogleCloudAssetV1GcsDestination extends \Google\Model
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

class GoogleCloudAssetV1GovernedContainer extends \Google\Collection
{
  /** @var AnalyzerOrgPolicy */
  public $consolidatedPolicy;
  /** @var string */
  public $fullResourceName;
  /** @var string */
  public $parent;
  /** @var AnalyzerOrgPolicy[] */
  public $policyBundle;
  protected $collection_key = 'policyBundle';
  protected $consolidatedPolicyType = AnalyzerOrgPolicy::class;
  protected $consolidatedPolicyDataType = '';
  protected $policyBundleType = AnalyzerOrgPolicy::class;
  protected $policyBundleDataType = 'array';
  /** @param AnalyzerOrgPolicy */
  public function setConsolidatedPolicy(AnalyzerOrgPolicy $consolidatedPolicy)
  {
    $this->consolidatedPolicy = $consolidatedPolicy;
  }
  /** @return AnalyzerOrgPolicy */
  public function getConsolidatedPolicy()
  {
    return $this->consolidatedPolicy;
  }
  /** @param string */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /** @return string */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
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
  /** @param AnalyzerOrgPolicy[] */
  public function setPolicyBundle($policyBundle)
  {
    $this->policyBundle = $policyBundle;
  }
  /** @return AnalyzerOrgPolicy[] */
  public function getPolicyBundle()
  {
    return $this->policyBundle;
  }
}

class GoogleCloudAssetV1Identity extends \Google\Model
{
  /** @var IamPolicyAnalysisState */
  public $analysisState;
  /** @var string */
  public $name;
  protected $analysisStateType = IamPolicyAnalysisState::class;
  protected $analysisStateDataType = '';
  /** @param IamPolicyAnalysisState */
  public function setAnalysisState(IamPolicyAnalysisState $analysisState)
  {
    $this->analysisState = $analysisState;
  }
  /** @return IamPolicyAnalysisState */
  public function getAnalysisState()
  {
    return $this->analysisState;
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

class GoogleCloudAssetV1IdentityList extends \Google\Collection
{
  /** @var GoogleCloudAssetV1Edge[] */
  public $groupEdges;
  /** @var GoogleCloudAssetV1Identity[] */
  public $identities;
  protected $collection_key = 'identities';
  protected $groupEdgesType = GoogleCloudAssetV1Edge::class;
  protected $groupEdgesDataType = 'array';
  protected $identitiesType = GoogleCloudAssetV1Identity::class;
  protected $identitiesDataType = 'array';
  /** @param GoogleCloudAssetV1Edge[] */
  public function setGroupEdges($groupEdges)
  {
    $this->groupEdges = $groupEdges;
  }
  /** @return GoogleCloudAssetV1Edge[] */
  public function getGroupEdges()
  {
    return $this->groupEdges;
  }
  /** @param GoogleCloudAssetV1Identity[] */
  public function setIdentities($identities)
  {
    $this->identities = $identities;
  }
  /** @return GoogleCloudAssetV1Identity[] */
  public function getIdentities()
  {
    return $this->identities;
  }
}

class GoogleCloudAssetV1ListConstraint extends \Google\Model
{
  /** @var bool */
  public $supportsIn;
  /** @var bool */
  public $supportsUnder;

  /** @param bool */
  public function setSupportsIn($supportsIn)
  {
    $this->supportsIn = $supportsIn;
  }
  /** @return bool */
  public function getSupportsIn()
  {
    return $this->supportsIn;
  }
  /** @param bool */
  public function setSupportsUnder($supportsUnder)
  {
    $this->supportsUnder = $supportsUnder;
  }
  /** @return bool */
  public function getSupportsUnder()
  {
    return $this->supportsUnder;
  }
}

class GoogleCloudAssetV1QueryAssetsOutputConfigBigQueryDestination extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var string */
  public $table;
  /** @var string */
  public $writeDisposition;

  /** @param string */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param string */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
  /** @param string */
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  /** @return string */
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}

class GoogleCloudAssetV1Resource extends \Google\Model
{
  /** @var IamPolicyAnalysisState */
  public $analysisState;
  /** @var string */
  public $fullResourceName;
  protected $analysisStateType = IamPolicyAnalysisState::class;
  protected $analysisStateDataType = '';
  /** @param IamPolicyAnalysisState */
  public function setAnalysisState(IamPolicyAnalysisState $analysisState)
  {
    $this->analysisState = $analysisState;
  }
  /** @return IamPolicyAnalysisState */
  public function getAnalysisState()
  {
    return $this->analysisState;
  }
  /** @param string */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /** @return string */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
}

class GoogleCloudAssetV1Rule extends \Google\Model
{
  /** @var bool */
  public $allowAll;
  /** @var Expr */
  public $condition;
  /** @var bool */
  public $denyAll;
  /** @var bool */
  public $enforce;
  /** @var GoogleCloudAssetV1StringValues */
  public $values;
  protected $conditionType = Expr::class;
  protected $conditionDataType = '';
  protected $valuesType = GoogleCloudAssetV1StringValues::class;
  protected $valuesDataType = '';
  /** @param bool */
  public function setAllowAll($allowAll)
  {
    $this->allowAll = $allowAll;
  }
  /** @return bool */
  public function getAllowAll()
  {
    return $this->allowAll;
  }
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
  /** @param bool */
  public function setDenyAll($denyAll)
  {
    $this->denyAll = $denyAll;
  }
  /** @return bool */
  public function getDenyAll()
  {
    return $this->denyAll;
  }
  /** @param bool */
  public function setEnforce($enforce)
  {
    $this->enforce = $enforce;
  }
  /** @return bool */
  public function getEnforce()
  {
    return $this->enforce;
  }
  /** @param GoogleCloudAssetV1StringValues */
  public function setValues(GoogleCloudAssetV1StringValues $values)
  {
    $this->values = $values;
  }
  /** @return GoogleCloudAssetV1StringValues */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudAssetV1StringValues extends \Google\Collection
{
  /** @var string[] */
  public $allowedValues;
  /** @var string[] */
  public $deniedValues;
  protected $collection_key = 'deniedValues';
  /** @param string[] */
  public function setAllowedValues($allowedValues)
  {
    $this->allowedValues = $allowedValues;
  }
  /** @return string[] */
  public function getAllowedValues()
  {
    return $this->allowedValues;
  }
  /** @param string[] */
  public function setDeniedValues($deniedValues)
  {
    $this->deniedValues = $deniedValues;
  }
  /** @return string[] */
  public function getDeniedValues()
  {
    return $this->deniedValues;
  }
}

class GoogleCloudAssetV1p7beta1Asset extends \Google\Collection
{
  /** @var GoogleIdentityAccesscontextmanagerV1AccessLevel */
  public $accessLevel;
  /** @var GoogleIdentityAccesscontextmanagerV1AccessPolicy */
  public $accessPolicy;
  /** @var string[] */
  public $ancestors;
  /** @var string */
  public $assetType;
  /** @var Policy */
  public $iamPolicy;
  /** @var string */
  public $name;
  /** @var GoogleCloudOrgpolicyV1Policy[] */
  public $orgPolicy;
  /** @var GoogleCloudAssetV1p7beta1RelatedAssets */
  public $relatedAssets;
  /** @var GoogleCloudAssetV1p7beta1Resource */
  public $resource;
  /** @var GoogleIdentityAccesscontextmanagerV1ServicePerimeter */
  public $servicePerimeter;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'orgPolicy';
  protected $accessLevelType = GoogleIdentityAccesscontextmanagerV1AccessLevel::class;
  protected $accessLevelDataType = '';
  protected $accessPolicyType = GoogleIdentityAccesscontextmanagerV1AccessPolicy::class;
  protected $accessPolicyDataType = '';
  protected $iamPolicyType = Policy::class;
  protected $iamPolicyDataType = '';
  protected $orgPolicyType = GoogleCloudOrgpolicyV1Policy::class;
  protected $orgPolicyDataType = 'array';
  protected $relatedAssetsType = GoogleCloudAssetV1p7beta1RelatedAssets::class;
  protected $relatedAssetsDataType = '';
  protected $resourceType = GoogleCloudAssetV1p7beta1Resource::class;
  protected $resourceDataType = '';
  protected $servicePerimeterType = GoogleIdentityAccesscontextmanagerV1ServicePerimeter::class;
  protected $servicePerimeterDataType = '';
  /** @param GoogleIdentityAccesscontextmanagerV1AccessLevel */
  public function setAccessLevel(GoogleIdentityAccesscontextmanagerV1AccessLevel $accessLevel)
  {
    $this->accessLevel = $accessLevel;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1AccessLevel */
  public function getAccessLevel()
  {
    return $this->accessLevel;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1AccessPolicy */
  public function setAccessPolicy(GoogleIdentityAccesscontextmanagerV1AccessPolicy $accessPolicy)
  {
    $this->accessPolicy = $accessPolicy;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1AccessPolicy */
  public function getAccessPolicy()
  {
    return $this->accessPolicy;
  }
  /** @param string[] */
  public function setAncestors($ancestors)
  {
    $this->ancestors = $ancestors;
  }
  /** @return string[] */
  public function getAncestors()
  {
    return $this->ancestors;
  }
  /** @param string */
  public function setAssetType($assetType)
  {
    $this->assetType = $assetType;
  }
  /** @return string */
  public function getAssetType()
  {
    return $this->assetType;
  }
  /** @param Policy */
  public function setIamPolicy(Policy $iamPolicy)
  {
    $this->iamPolicy = $iamPolicy;
  }
  /** @return Policy */
  public function getIamPolicy()
  {
    return $this->iamPolicy;
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
  /** @param GoogleCloudOrgpolicyV1Policy[] */
  public function setOrgPolicy($orgPolicy)
  {
    $this->orgPolicy = $orgPolicy;
  }
  /** @return GoogleCloudOrgpolicyV1Policy[] */
  public function getOrgPolicy()
  {
    return $this->orgPolicy;
  }
  /** @param GoogleCloudAssetV1p7beta1RelatedAssets */
  public function setRelatedAssets(GoogleCloudAssetV1p7beta1RelatedAssets $relatedAssets)
  {
    $this->relatedAssets = $relatedAssets;
  }
  /** @return GoogleCloudAssetV1p7beta1RelatedAssets */
  public function getRelatedAssets()
  {
    return $this->relatedAssets;
  }
  /** @param GoogleCloudAssetV1p7beta1Resource */
  public function setResource(GoogleCloudAssetV1p7beta1Resource $resource)
  {
    $this->resource = $resource;
  }
  /** @return GoogleCloudAssetV1p7beta1Resource */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1ServicePerimeter */
  public function setServicePerimeter(GoogleIdentityAccesscontextmanagerV1ServicePerimeter $servicePerimeter)
  {
    $this->servicePerimeter = $servicePerimeter;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1ServicePerimeter */
  public function getServicePerimeter()
  {
    return $this->servicePerimeter;
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

class GoogleCloudAssetV1p7beta1RelatedAsset extends \Google\Collection
{
  /** @var string[] */
  public $ancestors;
  /** @var string */
  public $asset;
  /** @var string */
  public $assetType;
  protected $collection_key = 'ancestors';
  /** @param string[] */
  public function setAncestors($ancestors)
  {
    $this->ancestors = $ancestors;
  }
  /** @return string[] */
  public function getAncestors()
  {
    return $this->ancestors;
  }
  /** @param string */
  public function setAsset($asset)
  {
    $this->asset = $asset;
  }
  /** @return string */
  public function getAsset()
  {
    return $this->asset;
  }
  /** @param string */
  public function setAssetType($assetType)
  {
    $this->assetType = $assetType;
  }
  /** @return string */
  public function getAssetType()
  {
    return $this->assetType;
  }
}

class GoogleCloudAssetV1p7beta1RelatedAssets extends \Google\Collection
{
  /** @var GoogleCloudAssetV1p7beta1RelatedAsset[] */
  public $assets;
  /** @var GoogleCloudAssetV1p7beta1RelationshipAttributes */
  public $relationshipAttributes;
  protected $collection_key = 'assets';
  protected $assetsType = GoogleCloudAssetV1p7beta1RelatedAsset::class;
  protected $assetsDataType = 'array';
  protected $relationshipAttributesType = GoogleCloudAssetV1p7beta1RelationshipAttributes::class;
  protected $relationshipAttributesDataType = '';
  /** @param GoogleCloudAssetV1p7beta1RelatedAsset[] */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /** @return GoogleCloudAssetV1p7beta1RelatedAsset[] */
  public function getAssets()
  {
    return $this->assets;
  }
  /** @param GoogleCloudAssetV1p7beta1RelationshipAttributes */
  public function setRelationshipAttributes(GoogleCloudAssetV1p7beta1RelationshipAttributes $relationshipAttributes)
  {
    $this->relationshipAttributes = $relationshipAttributes;
  }
  /** @return GoogleCloudAssetV1p7beta1RelationshipAttributes */
  public function getRelationshipAttributes()
  {
    return $this->relationshipAttributes;
  }
}

class GoogleCloudAssetV1p7beta1RelationshipAttributes extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $sourceResourceType;
  /** @var string */
  public $targetResourceType;
  /** @var string */
  public $type;

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
  public function setSourceResourceType($sourceResourceType)
  {
    $this->sourceResourceType = $sourceResourceType;
  }
  /** @return string */
  public function getSourceResourceType()
  {
    return $this->sourceResourceType;
  }
  /** @param string */
  public function setTargetResourceType($targetResourceType)
  {
    $this->targetResourceType = $targetResourceType;
  }
  /** @return string */
  public function getTargetResourceType()
  {
    return $this->targetResourceType;
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

class GoogleCloudAssetV1p7beta1Resource extends \Google\Model
{
  /** @var array[] */
  public $data;
  /** @var string */
  public $discoveryDocumentUri;
  /** @var string */
  public $discoveryName;
  /** @var string */
  public $location;
  /** @var string */
  public $parent;
  /** @var string */
  public $resourceUrl;
  /** @var string */
  public $version;

  /** @param array[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return array[] */
  public function getData()
  {
    return $this->data;
  }
  /** @param string */
  public function setDiscoveryDocumentUri($discoveryDocumentUri)
  {
    $this->discoveryDocumentUri = $discoveryDocumentUri;
  }
  /** @return string */
  public function getDiscoveryDocumentUri()
  {
    return $this->discoveryDocumentUri;
  }
  /** @param string */
  public function setDiscoveryName($discoveryName)
  {
    $this->discoveryName = $discoveryName;
  }
  /** @return string */
  public function getDiscoveryName()
  {
    return $this->discoveryName;
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
  public function setResourceUrl($resourceUrl)
  {
    $this->resourceUrl = $resourceUrl;
  }
  /** @return string */
  public function getResourceUrl()
  {
    return $this->resourceUrl;
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

class GoogleCloudOrgpolicyV1BooleanPolicy extends \Google\Model
{
  /** @var bool */
  public $enforced;

  /** @param bool */
  public function setEnforced($enforced)
  {
    $this->enforced = $enforced;
  }
  /** @return bool */
  public function getEnforced()
  {
    return $this->enforced;
  }
}

class GoogleCloudOrgpolicyV1ListPolicy extends \Google\Collection
{
  /** @var string */
  public $allValues;
  /** @var string[] */
  public $allowedValues;
  /** @var string[] */
  public $deniedValues;
  /** @var bool */
  public $inheritFromParent;
  /** @var string */
  public $suggestedValue;
  protected $collection_key = 'deniedValues';
  /** @param string */
  public function setAllValues($allValues)
  {
    $this->allValues = $allValues;
  }
  /** @return string */
  public function getAllValues()
  {
    return $this->allValues;
  }
  /** @param string[] */
  public function setAllowedValues($allowedValues)
  {
    $this->allowedValues = $allowedValues;
  }
  /** @return string[] */
  public function getAllowedValues()
  {
    return $this->allowedValues;
  }
  /** @param string[] */
  public function setDeniedValues($deniedValues)
  {
    $this->deniedValues = $deniedValues;
  }
  /** @return string[] */
  public function getDeniedValues()
  {
    return $this->deniedValues;
  }
  /** @param bool */
  public function setInheritFromParent($inheritFromParent)
  {
    $this->inheritFromParent = $inheritFromParent;
  }
  /** @return bool */
  public function getInheritFromParent()
  {
    return $this->inheritFromParent;
  }
  /** @param string */
  public function setSuggestedValue($suggestedValue)
  {
    $this->suggestedValue = $suggestedValue;
  }
  /** @return string */
  public function getSuggestedValue()
  {
    return $this->suggestedValue;
  }
}

class GoogleCloudOrgpolicyV1Policy extends \Google\Model
{
  /** @var GoogleCloudOrgpolicyV1BooleanPolicy */
  public $booleanPolicy;
  /** @var string */
  public $constraint;
  /** @var string */
  public $etag;
  /** @var GoogleCloudOrgpolicyV1ListPolicy */
  public $listPolicy;
  /** @var GoogleCloudOrgpolicyV1RestoreDefault */
  public $restoreDefault;
  /** @var string */
  public $updateTime;
  /** @var int */
  public $version;
  protected $booleanPolicyType = GoogleCloudOrgpolicyV1BooleanPolicy::class;
  protected $booleanPolicyDataType = '';
  protected $listPolicyType = GoogleCloudOrgpolicyV1ListPolicy::class;
  protected $listPolicyDataType = '';
  protected $restoreDefaultType = GoogleCloudOrgpolicyV1RestoreDefault::class;
  protected $restoreDefaultDataType = '';
  /** @param GoogleCloudOrgpolicyV1BooleanPolicy */
  public function setBooleanPolicy(GoogleCloudOrgpolicyV1BooleanPolicy $booleanPolicy)
  {
    $this->booleanPolicy = $booleanPolicy;
  }
  /** @return GoogleCloudOrgpolicyV1BooleanPolicy */
  public function getBooleanPolicy()
  {
    return $this->booleanPolicy;
  }
  /** @param string */
  public function setConstraint($constraint)
  {
    $this->constraint = $constraint;
  }
  /** @return string */
  public function getConstraint()
  {
    return $this->constraint;
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
  /** @param GoogleCloudOrgpolicyV1ListPolicy */
  public function setListPolicy(GoogleCloudOrgpolicyV1ListPolicy $listPolicy)
  {
    $this->listPolicy = $listPolicy;
  }
  /** @return GoogleCloudOrgpolicyV1ListPolicy */
  public function getListPolicy()
  {
    return $this->listPolicy;
  }
  /** @param GoogleCloudOrgpolicyV1RestoreDefault */
  public function setRestoreDefault(GoogleCloudOrgpolicyV1RestoreDefault $restoreDefault)
  {
    $this->restoreDefault = $restoreDefault;
  }
  /** @return GoogleCloudOrgpolicyV1RestoreDefault */
  public function getRestoreDefault()
  {
    return $this->restoreDefault;
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

class GoogleCloudOrgpolicyV1RestoreDefault extends \Google\Model
{
}

class GoogleIdentityAccesscontextmanagerV1AccessLevel extends \Google\Model
{
  /** @var GoogleIdentityAccesscontextmanagerV1BasicLevel */
  public $basic;
  /** @var GoogleIdentityAccesscontextmanagerV1CustomLevel */
  public $custom;
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $title;
  protected $basicType = GoogleIdentityAccesscontextmanagerV1BasicLevel::class;
  protected $basicDataType = '';
  protected $customType = GoogleIdentityAccesscontextmanagerV1CustomLevel::class;
  protected $customDataType = '';
  /** @param GoogleIdentityAccesscontextmanagerV1BasicLevel */
  public function setBasic(GoogleIdentityAccesscontextmanagerV1BasicLevel $basic)
  {
    $this->basic = $basic;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1BasicLevel */
  public function getBasic()
  {
    return $this->basic;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1CustomLevel */
  public function setCustom(GoogleIdentityAccesscontextmanagerV1CustomLevel $custom)
  {
    $this->custom = $custom;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1CustomLevel */
  public function getCustom()
  {
    return $this->custom;
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

class GoogleIdentityAccesscontextmanagerV1AccessPolicy extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string[] */
  public $scopes;
  /** @var string */
  public $title;
  protected $collection_key = 'scopes';
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
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

class GoogleIdentityAccesscontextmanagerV1ApiOperation extends \Google\Collection
{
  /** @var GoogleIdentityAccesscontextmanagerV1MethodSelector[] */
  public $methodSelectors;
  /** @var string */
  public $serviceName;
  protected $collection_key = 'methodSelectors';
  protected $methodSelectorsType = GoogleIdentityAccesscontextmanagerV1MethodSelector::class;
  protected $methodSelectorsDataType = 'array';
  /** @param GoogleIdentityAccesscontextmanagerV1MethodSelector[] */
  public function setMethodSelectors($methodSelectors)
  {
    $this->methodSelectors = $methodSelectors;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1MethodSelector[] */
  public function getMethodSelectors()
  {
    return $this->methodSelectors;
  }
  /** @param string */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /** @return string */
  public function getServiceName()
  {
    return $this->serviceName;
  }
}

class GoogleIdentityAccesscontextmanagerV1BasicLevel extends \Google\Collection
{
  /** @var string */
  public $combiningFunction;
  /** @var GoogleIdentityAccesscontextmanagerV1Condition[] */
  public $conditions;
  protected $collection_key = 'conditions';
  protected $conditionsType = GoogleIdentityAccesscontextmanagerV1Condition::class;
  protected $conditionsDataType = 'array';
  /** @param string */
  public function setCombiningFunction($combiningFunction)
  {
    $this->combiningFunction = $combiningFunction;
  }
  /** @return string */
  public function getCombiningFunction()
  {
    return $this->combiningFunction;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1Condition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1Condition[] */
  public function getConditions()
  {
    return $this->conditions;
  }
}

class GoogleIdentityAccesscontextmanagerV1Condition extends \Google\Collection
{
  /** @var GoogleIdentityAccesscontextmanagerV1DevicePolicy */
  public $devicePolicy;
  /** @var string[] */
  public $ipSubnetworks;
  /** @var string[] */
  public $members;
  /** @var bool */
  public $negate;
  /** @var string[] */
  public $regions;
  /** @var string[] */
  public $requiredAccessLevels;
  protected $collection_key = 'requiredAccessLevels';
  protected $devicePolicyType = GoogleIdentityAccesscontextmanagerV1DevicePolicy::class;
  protected $devicePolicyDataType = '';
  /** @param GoogleIdentityAccesscontextmanagerV1DevicePolicy */
  public function setDevicePolicy(GoogleIdentityAccesscontextmanagerV1DevicePolicy $devicePolicy)
  {
    $this->devicePolicy = $devicePolicy;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1DevicePolicy */
  public function getDevicePolicy()
  {
    return $this->devicePolicy;
  }
  /** @param string[] */
  public function setIpSubnetworks($ipSubnetworks)
  {
    $this->ipSubnetworks = $ipSubnetworks;
  }
  /** @return string[] */
  public function getIpSubnetworks()
  {
    return $this->ipSubnetworks;
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
  /** @param bool */
  public function setNegate($negate)
  {
    $this->negate = $negate;
  }
  /** @return bool */
  public function getNegate()
  {
    return $this->negate;
  }
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
  /** @param string[] */
  public function setRequiredAccessLevels($requiredAccessLevels)
  {
    $this->requiredAccessLevels = $requiredAccessLevels;
  }
  /** @return string[] */
  public function getRequiredAccessLevels()
  {
    return $this->requiredAccessLevels;
  }
}

class GoogleIdentityAccesscontextmanagerV1CustomLevel extends \Google\Model
{
  /** @var Expr */
  public $expr;
  protected $exprType = Expr::class;
  protected $exprDataType = '';
  /** @param Expr */
  public function setExpr(Expr $expr)
  {
    $this->expr = $expr;
  }
  /** @return Expr */
  public function getExpr()
  {
    return $this->expr;
  }
}

class GoogleIdentityAccesscontextmanagerV1DevicePolicy extends \Google\Collection
{
  /** @var string[] */
  public $allowedDeviceManagementLevels;
  /** @var string[] */
  public $allowedEncryptionStatuses;
  /** @var GoogleIdentityAccesscontextmanagerV1OsConstraint[] */
  public $osConstraints;
  /** @var bool */
  public $requireAdminApproval;
  /** @var bool */
  public $requireCorpOwned;
  /** @var bool */
  public $requireScreenlock;
  protected $collection_key = 'osConstraints';
  protected $osConstraintsType = GoogleIdentityAccesscontextmanagerV1OsConstraint::class;
  protected $osConstraintsDataType = 'array';
  /** @param string[] */
  public function setAllowedDeviceManagementLevels($allowedDeviceManagementLevels)
  {
    $this->allowedDeviceManagementLevels = $allowedDeviceManagementLevels;
  }
  /** @return string[] */
  public function getAllowedDeviceManagementLevels()
  {
    return $this->allowedDeviceManagementLevels;
  }
  /** @param string[] */
  public function setAllowedEncryptionStatuses($allowedEncryptionStatuses)
  {
    $this->allowedEncryptionStatuses = $allowedEncryptionStatuses;
  }
  /** @return string[] */
  public function getAllowedEncryptionStatuses()
  {
    return $this->allowedEncryptionStatuses;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1OsConstraint[] */
  public function setOsConstraints($osConstraints)
  {
    $this->osConstraints = $osConstraints;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1OsConstraint[] */
  public function getOsConstraints()
  {
    return $this->osConstraints;
  }
  /** @param bool */
  public function setRequireAdminApproval($requireAdminApproval)
  {
    $this->requireAdminApproval = $requireAdminApproval;
  }
  /** @return bool */
  public function getRequireAdminApproval()
  {
    return $this->requireAdminApproval;
  }
  /** @param bool */
  public function setRequireCorpOwned($requireCorpOwned)
  {
    $this->requireCorpOwned = $requireCorpOwned;
  }
  /** @return bool */
  public function getRequireCorpOwned()
  {
    return $this->requireCorpOwned;
  }
  /** @param bool */
  public function setRequireScreenlock($requireScreenlock)
  {
    $this->requireScreenlock = $requireScreenlock;
  }
  /** @return bool */
  public function getRequireScreenlock()
  {
    return $this->requireScreenlock;
  }
}

class GoogleIdentityAccesscontextmanagerV1EgressFrom extends \Google\Collection
{
  /** @var string[] */
  public $identities;
  /** @var string */
  public $identityType;
  protected $collection_key = 'identities';
  /** @param string[] */
  public function setIdentities($identities)
  {
    $this->identities = $identities;
  }
  /** @return string[] */
  public function getIdentities()
  {
    return $this->identities;
  }
  /** @param string */
  public function setIdentityType($identityType)
  {
    $this->identityType = $identityType;
  }
  /** @return string */
  public function getIdentityType()
  {
    return $this->identityType;
  }
}

class GoogleIdentityAccesscontextmanagerV1EgressPolicy extends \Google\Model
{
  /** @var GoogleIdentityAccesscontextmanagerV1EgressFrom */
  public $egressFrom;
  /** @var GoogleIdentityAccesscontextmanagerV1EgressTo */
  public $egressTo;
  protected $egressFromType = GoogleIdentityAccesscontextmanagerV1EgressFrom::class;
  protected $egressFromDataType = '';
  protected $egressToType = GoogleIdentityAccesscontextmanagerV1EgressTo::class;
  protected $egressToDataType = '';
  /** @param GoogleIdentityAccesscontextmanagerV1EgressFrom */
  public function setEgressFrom(GoogleIdentityAccesscontextmanagerV1EgressFrom $egressFrom)
  {
    $this->egressFrom = $egressFrom;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1EgressFrom */
  public function getEgressFrom()
  {
    return $this->egressFrom;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1EgressTo */
  public function setEgressTo(GoogleIdentityAccesscontextmanagerV1EgressTo $egressTo)
  {
    $this->egressTo = $egressTo;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1EgressTo */
  public function getEgressTo()
  {
    return $this->egressTo;
  }
}

class GoogleIdentityAccesscontextmanagerV1EgressTo extends \Google\Collection
{
  /** @var string[] */
  public $externalResources;
  /** @var GoogleIdentityAccesscontextmanagerV1ApiOperation[] */
  public $operations;
  /** @var string[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $operationsType = GoogleIdentityAccesscontextmanagerV1ApiOperation::class;
  protected $operationsDataType = 'array';
  /** @param string[] */
  public function setExternalResources($externalResources)
  {
    $this->externalResources = $externalResources;
  }
  /** @return string[] */
  public function getExternalResources()
  {
    return $this->externalResources;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1ApiOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1ApiOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
  /** @param string[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return string[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class GoogleIdentityAccesscontextmanagerV1IngressFrom extends \Google\Collection
{
  /** @var string[] */
  public $identities;
  /** @var string */
  public $identityType;
  /** @var GoogleIdentityAccesscontextmanagerV1IngressSource[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $sourcesType = GoogleIdentityAccesscontextmanagerV1IngressSource::class;
  protected $sourcesDataType = 'array';
  /** @param string[] */
  public function setIdentities($identities)
  {
    $this->identities = $identities;
  }
  /** @return string[] */
  public function getIdentities()
  {
    return $this->identities;
  }
  /** @param string */
  public function setIdentityType($identityType)
  {
    $this->identityType = $identityType;
  }
  /** @return string */
  public function getIdentityType()
  {
    return $this->identityType;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1IngressSource[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1IngressSource[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class GoogleIdentityAccesscontextmanagerV1IngressPolicy extends \Google\Model
{
  /** @var GoogleIdentityAccesscontextmanagerV1IngressFrom */
  public $ingressFrom;
  /** @var GoogleIdentityAccesscontextmanagerV1IngressTo */
  public $ingressTo;
  protected $ingressFromType = GoogleIdentityAccesscontextmanagerV1IngressFrom::class;
  protected $ingressFromDataType = '';
  protected $ingressToType = GoogleIdentityAccesscontextmanagerV1IngressTo::class;
  protected $ingressToDataType = '';
  /** @param GoogleIdentityAccesscontextmanagerV1IngressFrom */
  public function setIngressFrom(GoogleIdentityAccesscontextmanagerV1IngressFrom $ingressFrom)
  {
    $this->ingressFrom = $ingressFrom;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1IngressFrom */
  public function getIngressFrom()
  {
    return $this->ingressFrom;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1IngressTo */
  public function setIngressTo(GoogleIdentityAccesscontextmanagerV1IngressTo $ingressTo)
  {
    $this->ingressTo = $ingressTo;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1IngressTo */
  public function getIngressTo()
  {
    return $this->ingressTo;
  }
}

class GoogleIdentityAccesscontextmanagerV1IngressSource extends \Google\Model
{
  /** @var string */
  public $accessLevel;
  /** @var string */
  public $resource;

  /** @param string */
  public function setAccessLevel($accessLevel)
  {
    $this->accessLevel = $accessLevel;
  }
  /** @return string */
  public function getAccessLevel()
  {
    return $this->accessLevel;
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
}

class GoogleIdentityAccesscontextmanagerV1IngressTo extends \Google\Collection
{
  /** @var GoogleIdentityAccesscontextmanagerV1ApiOperation[] */
  public $operations;
  /** @var string[] */
  public $resources;
  protected $collection_key = 'resources';
  protected $operationsType = GoogleIdentityAccesscontextmanagerV1ApiOperation::class;
  protected $operationsDataType = 'array';
  /** @param GoogleIdentityAccesscontextmanagerV1ApiOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1ApiOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
  /** @param string[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return string[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class GoogleIdentityAccesscontextmanagerV1MethodSelector extends \Google\Model
{
  /** @var string */
  public $method;
  /** @var string */
  public $permission;

  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string */
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /** @return string */
  public function getPermission()
  {
    return $this->permission;
  }
}

class GoogleIdentityAccesscontextmanagerV1OsConstraint extends \Google\Model
{
  /** @var string */
  public $minimumVersion;
  /** @var string */
  public $osType;
  /** @var bool */
  public $requireVerifiedChromeOs;

  /** @param string */
  public function setMinimumVersion($minimumVersion)
  {
    $this->minimumVersion = $minimumVersion;
  }
  /** @return string */
  public function getMinimumVersion()
  {
    return $this->minimumVersion;
  }
  /** @param string */
  public function setOsType($osType)
  {
    $this->osType = $osType;
  }
  /** @return string */
  public function getOsType()
  {
    return $this->osType;
  }
  /** @param bool */
  public function setRequireVerifiedChromeOs($requireVerifiedChromeOs)
  {
    $this->requireVerifiedChromeOs = $requireVerifiedChromeOs;
  }
  /** @return bool */
  public function getRequireVerifiedChromeOs()
  {
    return $this->requireVerifiedChromeOs;
  }
}

class GoogleIdentityAccesscontextmanagerV1ServicePerimeter extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $perimeterType;
  /** @var GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig */
  public $spec;
  /** @var GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig */
  public $status;
  /** @var string */
  public $title;
  /** @var bool */
  public $useExplicitDryRunSpec;
  protected $specType = GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig::class;
  protected $specDataType = '';
  protected $statusType = GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig::class;
  protected $statusDataType = '';
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
  public function setPerimeterType($perimeterType)
  {
    $this->perimeterType = $perimeterType;
  }
  /** @return string */
  public function getPerimeterType()
  {
    return $this->perimeterType;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig */
  public function setSpec(GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig $spec)
  {
    $this->spec = $spec;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig */
  public function getSpec()
  {
    return $this->spec;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig */
  public function setStatus(GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig $status)
  {
    $this->status = $status;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig */
  public function getStatus()
  {
    return $this->status;
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
  /** @param bool */
  public function setUseExplicitDryRunSpec($useExplicitDryRunSpec)
  {
    $this->useExplicitDryRunSpec = $useExplicitDryRunSpec;
  }
  /** @return bool */
  public function getUseExplicitDryRunSpec()
  {
    return $this->useExplicitDryRunSpec;
  }
}

class GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig extends \Google\Collection
{
  /** @var string[] */
  public $accessLevels;
  /** @var GoogleIdentityAccesscontextmanagerV1EgressPolicy[] */
  public $egressPolicies;
  /** @var GoogleIdentityAccesscontextmanagerV1IngressPolicy[] */
  public $ingressPolicies;
  /** @var string[] */
  public $resources;
  /** @var string[] */
  public $restrictedServices;
  /** @var GoogleIdentityAccesscontextmanagerV1VpcAccessibleServices */
  public $vpcAccessibleServices;
  protected $collection_key = 'restrictedServices';
  protected $egressPoliciesType = GoogleIdentityAccesscontextmanagerV1EgressPolicy::class;
  protected $egressPoliciesDataType = 'array';
  protected $ingressPoliciesType = GoogleIdentityAccesscontextmanagerV1IngressPolicy::class;
  protected $ingressPoliciesDataType = 'array';
  protected $vpcAccessibleServicesType = GoogleIdentityAccesscontextmanagerV1VpcAccessibleServices::class;
  protected $vpcAccessibleServicesDataType = '';
  /** @param string[] */
  public function setAccessLevels($accessLevels)
  {
    $this->accessLevels = $accessLevels;
  }
  /** @return string[] */
  public function getAccessLevels()
  {
    return $this->accessLevels;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1EgressPolicy[] */
  public function setEgressPolicies($egressPolicies)
  {
    $this->egressPolicies = $egressPolicies;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1EgressPolicy[] */
  public function getEgressPolicies()
  {
    return $this->egressPolicies;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1IngressPolicy[] */
  public function setIngressPolicies($ingressPolicies)
  {
    $this->ingressPolicies = $ingressPolicies;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1IngressPolicy[] */
  public function getIngressPolicies()
  {
    return $this->ingressPolicies;
  }
  /** @param string[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return string[] */
  public function getResources()
  {
    return $this->resources;
  }
  /** @param string[] */
  public function setRestrictedServices($restrictedServices)
  {
    $this->restrictedServices = $restrictedServices;
  }
  /** @return string[] */
  public function getRestrictedServices()
  {
    return $this->restrictedServices;
  }
  /** @param GoogleIdentityAccesscontextmanagerV1VpcAccessibleServices */
  public function setVpcAccessibleServices(GoogleIdentityAccesscontextmanagerV1VpcAccessibleServices $vpcAccessibleServices)
  {
    $this->vpcAccessibleServices = $vpcAccessibleServices;
  }
  /** @return GoogleIdentityAccesscontextmanagerV1VpcAccessibleServices */
  public function getVpcAccessibleServices()
  {
    return $this->vpcAccessibleServices;
  }
}

class GoogleIdentityAccesscontextmanagerV1VpcAccessibleServices extends \Google\Collection
{
  /** @var string[] */
  public $allowedServices;
  /** @var bool */
  public $enableRestriction;
  protected $collection_key = 'allowedServices';
  /** @param string[] */
  public function setAllowedServices($allowedServices)
  {
    $this->allowedServices = $allowedServices;
  }
  /** @return string[] */
  public function getAllowedServices()
  {
    return $this->allowedServices;
  }
  /** @param bool */
  public function setEnableRestriction($enableRestriction)
  {
    $this->enableRestriction = $enableRestriction;
  }
  /** @return bool */
  public function getEnableRestriction()
  {
    return $this->enableRestriction;
  }
}

class IamPolicyAnalysis extends \Google\Collection
{
  /** @var IamPolicyAnalysisQuery */
  public $analysisQuery;
  /** @var IamPolicyAnalysisResult[] */
  public $analysisResults;
  /** @var bool */
  public $fullyExplored;
  /** @var IamPolicyAnalysisState[] */
  public $nonCriticalErrors;
  protected $collection_key = 'nonCriticalErrors';
  protected $analysisQueryType = IamPolicyAnalysisQuery::class;
  protected $analysisQueryDataType = '';
  protected $analysisResultsType = IamPolicyAnalysisResult::class;
  protected $analysisResultsDataType = 'array';
  protected $nonCriticalErrorsType = IamPolicyAnalysisState::class;
  protected $nonCriticalErrorsDataType = 'array';
  /** @param IamPolicyAnalysisQuery */
  public function setAnalysisQuery(IamPolicyAnalysisQuery $analysisQuery)
  {
    $this->analysisQuery = $analysisQuery;
  }
  /** @return IamPolicyAnalysisQuery */
  public function getAnalysisQuery()
  {
    return $this->analysisQuery;
  }
  /** @param IamPolicyAnalysisResult[] */
  public function setAnalysisResults($analysisResults)
  {
    $this->analysisResults = $analysisResults;
  }
  /** @return IamPolicyAnalysisResult[] */
  public function getAnalysisResults()
  {
    return $this->analysisResults;
  }
  /** @param bool */
  public function setFullyExplored($fullyExplored)
  {
    $this->fullyExplored = $fullyExplored;
  }
  /** @return bool */
  public function getFullyExplored()
  {
    return $this->fullyExplored;
  }
  /** @param IamPolicyAnalysisState[] */
  public function setNonCriticalErrors($nonCriticalErrors)
  {
    $this->nonCriticalErrors = $nonCriticalErrors;
  }
  /** @return IamPolicyAnalysisState[] */
  public function getNonCriticalErrors()
  {
    return $this->nonCriticalErrors;
  }
}

class IamPolicyAnalysisOutputConfig extends \Google\Model
{
  /** @var GoogleCloudAssetV1BigQueryDestination */
  public $bigqueryDestination;
  /** @var GoogleCloudAssetV1GcsDestination */
  public $gcsDestination;
  protected $bigqueryDestinationType = GoogleCloudAssetV1BigQueryDestination::class;
  protected $bigqueryDestinationDataType = '';
  protected $gcsDestinationType = GoogleCloudAssetV1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param GoogleCloudAssetV1BigQueryDestination */
  public function setBigqueryDestination(GoogleCloudAssetV1BigQueryDestination $bigqueryDestination)
  {
    $this->bigqueryDestination = $bigqueryDestination;
  }
  /** @return GoogleCloudAssetV1BigQueryDestination */
  public function getBigqueryDestination()
  {
    return $this->bigqueryDestination;
  }
  /** @param GoogleCloudAssetV1GcsDestination */
  public function setGcsDestination(GoogleCloudAssetV1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudAssetV1GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
}

class IamPolicyAnalysisQuery extends \Google\Model
{
  /** @var AccessSelector */
  public $accessSelector;
  /** @var ConditionContext */
  public $conditionContext;
  /** @var IdentitySelector */
  public $identitySelector;
  /** @var Options */
  public $options;
  /** @var ResourceSelector */
  public $resourceSelector;
  /** @var string */
  public $scope;
  protected $accessSelectorType = AccessSelector::class;
  protected $accessSelectorDataType = '';
  protected $conditionContextType = ConditionContext::class;
  protected $conditionContextDataType = '';
  protected $identitySelectorType = IdentitySelector::class;
  protected $identitySelectorDataType = '';
  protected $optionsType = Options::class;
  protected $optionsDataType = '';
  protected $resourceSelectorType = ResourceSelector::class;
  protected $resourceSelectorDataType = '';
  /** @param AccessSelector */
  public function setAccessSelector(AccessSelector $accessSelector)
  {
    $this->accessSelector = $accessSelector;
  }
  /** @return AccessSelector */
  public function getAccessSelector()
  {
    return $this->accessSelector;
  }
  /** @param ConditionContext */
  public function setConditionContext(ConditionContext $conditionContext)
  {
    $this->conditionContext = $conditionContext;
  }
  /** @return ConditionContext */
  public function getConditionContext()
  {
    return $this->conditionContext;
  }
  /** @param IdentitySelector */
  public function setIdentitySelector(IdentitySelector $identitySelector)
  {
    $this->identitySelector = $identitySelector;
  }
  /** @return IdentitySelector */
  public function getIdentitySelector()
  {
    return $this->identitySelector;
  }
  /** @param Options */
  public function setOptions(Options $options)
  {
    $this->options = $options;
  }
  /** @return Options */
  public function getOptions()
  {
    return $this->options;
  }
  /** @param ResourceSelector */
  public function setResourceSelector(ResourceSelector $resourceSelector)
  {
    $this->resourceSelector = $resourceSelector;
  }
  /** @return ResourceSelector */
  public function getResourceSelector()
  {
    return $this->resourceSelector;
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
}

class IamPolicyAnalysisResult extends \Google\Collection
{
  /** @var GoogleCloudAssetV1AccessControlList[] */
  public $accessControlLists;
  /** @var string */
  public $attachedResourceFullName;
  /** @var bool */
  public $fullyExplored;
  /** @var Binding */
  public $iamBinding;
  /** @var GoogleCloudAssetV1IdentityList */
  public $identityList;
  protected $collection_key = 'accessControlLists';
  protected $accessControlListsType = GoogleCloudAssetV1AccessControlList::class;
  protected $accessControlListsDataType = 'array';
  protected $iamBindingType = Binding::class;
  protected $iamBindingDataType = '';
  protected $identityListType = GoogleCloudAssetV1IdentityList::class;
  protected $identityListDataType = '';
  /** @param GoogleCloudAssetV1AccessControlList[] */
  public function setAccessControlLists($accessControlLists)
  {
    $this->accessControlLists = $accessControlLists;
  }
  /** @return GoogleCloudAssetV1AccessControlList[] */
  public function getAccessControlLists()
  {
    return $this->accessControlLists;
  }
  /** @param string */
  public function setAttachedResourceFullName($attachedResourceFullName)
  {
    $this->attachedResourceFullName = $attachedResourceFullName;
  }
  /** @return string */
  public function getAttachedResourceFullName()
  {
    return $this->attachedResourceFullName;
  }
  /** @param bool */
  public function setFullyExplored($fullyExplored)
  {
    $this->fullyExplored = $fullyExplored;
  }
  /** @return bool */
  public function getFullyExplored()
  {
    return $this->fullyExplored;
  }
  /** @param Binding */
  public function setIamBinding(Binding $iamBinding)
  {
    $this->iamBinding = $iamBinding;
  }
  /** @return Binding */
  public function getIamBinding()
  {
    return $this->iamBinding;
  }
  /** @param GoogleCloudAssetV1IdentityList */
  public function setIdentityList(GoogleCloudAssetV1IdentityList $identityList)
  {
    $this->identityList = $identityList;
  }
  /** @return GoogleCloudAssetV1IdentityList */
  public function getIdentityList()
  {
    return $this->identityList;
  }
}

class IamPolicyAnalysisState extends \Google\Model
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

class IamPolicySearchResult extends \Google\Collection
{
  /** @var string */
  public $assetType;
  /** @var Explanation */
  public $explanation;
  /** @var string[] */
  public $folders;
  /** @var string */
  public $organization;
  /** @var Policy */
  public $policy;
  /** @var string */
  public $project;
  /** @var string */
  public $resource;
  protected $collection_key = 'folders';
  protected $explanationType = Explanation::class;
  protected $explanationDataType = '';
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param string */
  public function setAssetType($assetType)
  {
    $this->assetType = $assetType;
  }
  /** @return string */
  public function getAssetType()
  {
    return $this->assetType;
  }
  /** @param Explanation */
  public function setExplanation(Explanation $explanation)
  {
    $this->explanation = $explanation;
  }
  /** @return Explanation */
  public function getExplanation()
  {
    return $this->explanation;
  }
  /** @param string[] */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /** @return string[] */
  public function getFolders()
  {
    return $this->folders;
  }
  /** @param string */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
  }
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
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
}

class IdentitySelector extends \Google\Model
{
  /** @var string */
  public $identity;

  /** @param string */
  public function setIdentity($identity)
  {
    $this->identity = $identity;
  }
  /** @return string */
  public function getIdentity()
  {
    return $this->identity;
  }
}

class Inventory extends \Google\Model
{
  /** @var Item[] */
  public $items;
  /** @var string */
  public $name;
  /** @var OsInfo */
  public $osInfo;
  /** @var string */
  public $updateTime;
  protected $itemsType = Item::class;
  protected $itemsDataType = 'map';
  protected $osInfoType = OsInfo::class;
  protected $osInfoDataType = '';
  /** @param Item[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Item[] */
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
  /** @param OsInfo */
  public function setOsInfo(OsInfo $osInfo)
  {
    $this->osInfo = $osInfo;
  }
  /** @return OsInfo */
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

class Item extends \Google\Model
{
  /** @var SoftwarePackage */
  public $availablePackage;
  /** @var string */
  public $createTime;
  /** @var string */
  public $id;
  /** @var SoftwarePackage */
  public $installedPackage;
  /** @var string */
  public $originType;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $availablePackageType = SoftwarePackage::class;
  protected $availablePackageDataType = '';
  protected $installedPackageType = SoftwarePackage::class;
  protected $installedPackageDataType = '';
  /** @param SoftwarePackage */
  public function setAvailablePackage(SoftwarePackage $availablePackage)
  {
    $this->availablePackage = $availablePackage;
  }
  /** @return SoftwarePackage */
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
  /** @param SoftwarePackage */
  public function setInstalledPackage(SoftwarePackage $installedPackage)
  {
    $this->installedPackage = $installedPackage;
  }
  /** @return SoftwarePackage */
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

class ListAssetsResponse extends \Google\Collection
{
  /** @var Asset[] */
  public $assets;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $readTime;
  protected $collection_key = 'assets';
  protected $assetsType = Asset::class;
  protected $assetsDataType = 'array';
  /** @param Asset[] */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /** @return Asset[] */
  public function getAssets()
  {
    return $this->assets;
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
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
}

class ListFeedsResponse extends \Google\Collection
{
  /** @var Feed[] */
  public $feeds;
  protected $collection_key = 'feeds';
  protected $feedsType = Feed::class;
  protected $feedsDataType = 'array';
  /** @param Feed[] */
  public function setFeeds($feeds)
  {
    $this->feeds = $feeds;
  }
  /** @return Feed[] */
  public function getFeeds()
  {
    return $this->feeds;
  }
}

class ListSavedQueriesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var SavedQuery[] */
  public $savedQueries;
  protected $collection_key = 'savedQueries';
  protected $savedQueriesType = SavedQuery::class;
  protected $savedQueriesDataType = 'array';
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
  /** @param SavedQuery[] */
  public function setSavedQueries($savedQueries)
  {
    $this->savedQueries = $savedQueries;
  }
  /** @return SavedQuery[] */
  public function getSavedQueries()
  {
    return $this->savedQueries;
  }
}

class MoveAnalysis extends \Google\Model
{
  /** @var MoveAnalysisResult */
  public $analysis;
  /** @var string */
  public $displayName;
  /** @var Status */
  public $error;
  protected $analysisType = MoveAnalysisResult::class;
  protected $analysisDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /** @param MoveAnalysisResult */
  public function setAnalysis(MoveAnalysisResult $analysis)
  {
    $this->analysis = $analysis;
  }
  /** @return MoveAnalysisResult */
  public function getAnalysis()
  {
    return $this->analysis;
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
}

class MoveAnalysisResult extends \Google\Collection
{
  /** @var MoveImpact[] */
  public $blockers;
  /** @var MoveImpact[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $blockersType = MoveImpact::class;
  protected $blockersDataType = 'array';
  protected $warningsType = MoveImpact::class;
  protected $warningsDataType = 'array';
  /** @param MoveImpact[] */
  public function setBlockers($blockers)
  {
    $this->blockers = $blockers;
  }
  /** @return MoveImpact[] */
  public function getBlockers()
  {
    return $this->blockers;
  }
  /** @param MoveImpact[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return MoveImpact[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class MoveImpact extends \Google\Model
{
  /** @var string */
  public $detail;

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

class Options extends \Google\Model
{
  /** @var bool */
  public $analyzeServiceAccountImpersonation;
  /** @var bool */
  public $expandGroups;
  /** @var bool */
  public $expandResources;
  /** @var bool */
  public $expandRoles;
  /** @var bool */
  public $outputGroupEdges;
  /** @var bool */
  public $outputResourceEdges;

  /** @param bool */
  public function setAnalyzeServiceAccountImpersonation($analyzeServiceAccountImpersonation)
  {
    $this->analyzeServiceAccountImpersonation = $analyzeServiceAccountImpersonation;
  }
  /** @return bool */
  public function getAnalyzeServiceAccountImpersonation()
  {
    return $this->analyzeServiceAccountImpersonation;
  }
  /** @param bool */
  public function setExpandGroups($expandGroups)
  {
    $this->expandGroups = $expandGroups;
  }
  /** @return bool */
  public function getExpandGroups()
  {
    return $this->expandGroups;
  }
  /** @param bool */
  public function setExpandResources($expandResources)
  {
    $this->expandResources = $expandResources;
  }
  /** @return bool */
  public function getExpandResources()
  {
    return $this->expandResources;
  }
  /** @param bool */
  public function setExpandRoles($expandRoles)
  {
    $this->expandRoles = $expandRoles;
  }
  /** @return bool */
  public function getExpandRoles()
  {
    return $this->expandRoles;
  }
  /** @param bool */
  public function setOutputGroupEdges($outputGroupEdges)
  {
    $this->outputGroupEdges = $outputGroupEdges;
  }
  /** @return bool */
  public function getOutputGroupEdges()
  {
    return $this->outputGroupEdges;
  }
  /** @param bool */
  public function setOutputResourceEdges($outputResourceEdges)
  {
    $this->outputResourceEdges = $outputResourceEdges;
  }
  /** @return bool */
  public function getOutputResourceEdges()
  {
    return $this->outputResourceEdges;
  }
}

class OrgPolicyResult extends \Google\Collection
{
  /** @var AnalyzerOrgPolicy */
  public $consolidatedPolicy;
  /** @var AnalyzerOrgPolicy[] */
  public $policyBundle;
  protected $collection_key = 'policyBundle';
  protected $consolidatedPolicyType = AnalyzerOrgPolicy::class;
  protected $consolidatedPolicyDataType = '';
  protected $policyBundleType = AnalyzerOrgPolicy::class;
  protected $policyBundleDataType = 'array';
  /** @param AnalyzerOrgPolicy */
  public function setConsolidatedPolicy(AnalyzerOrgPolicy $consolidatedPolicy)
  {
    $this->consolidatedPolicy = $consolidatedPolicy;
  }
  /** @return AnalyzerOrgPolicy */
  public function getConsolidatedPolicy()
  {
    return $this->consolidatedPolicy;
  }
  /** @param AnalyzerOrgPolicy[] */
  public function setPolicyBundle($policyBundle)
  {
    $this->policyBundle = $policyBundle;
  }
  /** @return AnalyzerOrgPolicy[] */
  public function getPolicyBundle()
  {
    return $this->policyBundle;
  }
}

class OsInfo extends \Google\Model
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

class OutputConfig extends \Google\Model
{
  /** @var BigQueryDestination */
  public $bigqueryDestination;
  /** @var GcsDestination */
  public $gcsDestination;
  protected $bigqueryDestinationType = BigQueryDestination::class;
  protected $bigqueryDestinationDataType = '';
  protected $gcsDestinationType = GcsDestination::class;
  protected $gcsDestinationDataType = '';
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

class PartitionSpec extends \Google\Model
{
  /** @var string */
  public $partitionKey;

  /** @param string */
  public function setPartitionKey($partitionKey)
  {
    $this->partitionKey = $partitionKey;
  }
  /** @return string */
  public function getPartitionKey()
  {
    return $this->partitionKey;
  }
}

class Permissions extends \Google\Collection
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

class PolicyInfo extends \Google\Model
{
  /** @var string */
  public $attachedResource;
  /** @var Policy */
  public $policy;
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param string */
  public function setAttachedResource($attachedResource)
  {
    $this->attachedResource = $attachedResource;
  }
  /** @return string */
  public function getAttachedResource()
  {
    return $this->attachedResource;
  }
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

class PubsubDestination extends \Google\Model
{
  /** @var string */
  public $topic;

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

class QueryAssetsOutputConfig extends \Google\Model
{
  /** @var GoogleCloudAssetV1QueryAssetsOutputConfigBigQueryDestination */
  public $bigqueryDestination;
  protected $bigqueryDestinationType = GoogleCloudAssetV1QueryAssetsOutputConfigBigQueryDestination::class;
  protected $bigqueryDestinationDataType = '';
  /** @param GoogleCloudAssetV1QueryAssetsOutputConfigBigQueryDestination */
  public function setBigqueryDestination(GoogleCloudAssetV1QueryAssetsOutputConfigBigQueryDestination $bigqueryDestination)
  {
    $this->bigqueryDestination = $bigqueryDestination;
  }
  /** @return GoogleCloudAssetV1QueryAssetsOutputConfigBigQueryDestination */
  public function getBigqueryDestination()
  {
    return $this->bigqueryDestination;
  }
}

class QueryAssetsRequest extends \Google\Model
{
  /** @var string */
  public $jobReference;
  /** @var QueryAssetsOutputConfig */
  public $outputConfig;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $readTime;
  /** @var TimeWindow */
  public $readTimeWindow;
  /** @var string */
  public $statement;
  /** @var string */
  public $timeout;
  protected $outputConfigType = QueryAssetsOutputConfig::class;
  protected $outputConfigDataType = '';
  protected $readTimeWindowType = TimeWindow::class;
  protected $readTimeWindowDataType = '';
  /** @param string */
  public function setJobReference($jobReference)
  {
    $this->jobReference = $jobReference;
  }
  /** @return string */
  public function getJobReference()
  {
    return $this->jobReference;
  }
  /** @param QueryAssetsOutputConfig */
  public function setOutputConfig(QueryAssetsOutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return QueryAssetsOutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
  /** @param int */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return int */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param string */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /** @return string */
  public function getReadTime()
  {
    return $this->readTime;
  }
  /** @param TimeWindow */
  public function setReadTimeWindow(TimeWindow $readTimeWindow)
  {
    $this->readTimeWindow = $readTimeWindow;
  }
  /** @return TimeWindow */
  public function getReadTimeWindow()
  {
    return $this->readTimeWindow;
  }
  /** @param string */
  public function setStatement($statement)
  {
    $this->statement = $statement;
  }
  /** @return string */
  public function getStatement()
  {
    return $this->statement;
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

class QueryAssetsResponse extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var Status */
  public $error;
  /** @var string */
  public $jobReference;
  /** @var QueryAssetsOutputConfig */
  public $outputConfig;
  /** @var QueryResult */
  public $queryResult;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $outputConfigType = QueryAssetsOutputConfig::class;
  protected $outputConfigDataType = '';
  protected $queryResultType = QueryResult::class;
  protected $queryResultDataType = '';
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
  /** @param string */
  public function setJobReference($jobReference)
  {
    $this->jobReference = $jobReference;
  }
  /** @return string */
  public function getJobReference()
  {
    return $this->jobReference;
  }
  /** @param QueryAssetsOutputConfig */
  public function setOutputConfig(QueryAssetsOutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return QueryAssetsOutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
  /** @param QueryResult */
  public function setQueryResult(QueryResult $queryResult)
  {
    $this->queryResult = $queryResult;
  }
  /** @return QueryResult */
  public function getQueryResult()
  {
    return $this->queryResult;
  }
}

class QueryContent extends \Google\Model
{
  /** @var IamPolicyAnalysisQuery */
  public $iamPolicyAnalysisQuery;
  protected $iamPolicyAnalysisQueryType = IamPolicyAnalysisQuery::class;
  protected $iamPolicyAnalysisQueryDataType = '';
  /** @param IamPolicyAnalysisQuery */
  public function setIamPolicyAnalysisQuery(IamPolicyAnalysisQuery $iamPolicyAnalysisQuery)
  {
    $this->iamPolicyAnalysisQuery = $iamPolicyAnalysisQuery;
  }
  /** @return IamPolicyAnalysisQuery */
  public function getIamPolicyAnalysisQuery()
  {
    return $this->iamPolicyAnalysisQuery;
  }
}

class QueryResult extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var array[] */
  public $rows;
  /** @var TableSchema */
  public $schema;
  /** @var string */
  public $totalRows;
  protected $collection_key = 'rows';
  protected $schemaType = TableSchema::class;
  protected $schemaDataType = '';
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
  /** @param array[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return array[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param TableSchema */
  public function setSchema(TableSchema $schema)
  {
    $this->schema = $schema;
  }
  /** @return TableSchema */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param string */
  public function setTotalRows($totalRows)
  {
    $this->totalRows = $totalRows;
  }
  /** @return string */
  public function getTotalRows()
  {
    return $this->totalRows;
  }
}

class RelatedAsset extends \Google\Collection
{
  /** @var string[] */
  public $ancestors;
  /** @var string */
  public $asset;
  /** @var string */
  public $assetType;
  /** @var string */
  public $relationshipType;
  protected $collection_key = 'ancestors';
  /** @param string[] */
  public function setAncestors($ancestors)
  {
    $this->ancestors = $ancestors;
  }
  /** @return string[] */
  public function getAncestors()
  {
    return $this->ancestors;
  }
  /** @param string */
  public function setAsset($asset)
  {
    $this->asset = $asset;
  }
  /** @return string */
  public function getAsset()
  {
    return $this->asset;
  }
  /** @param string */
  public function setAssetType($assetType)
  {
    $this->assetType = $assetType;
  }
  /** @return string */
  public function getAssetType()
  {
    return $this->assetType;
  }
  /** @param string */
  public function setRelationshipType($relationshipType)
  {
    $this->relationshipType = $relationshipType;
  }
  /** @return string */
  public function getRelationshipType()
  {
    return $this->relationshipType;
  }
}

class RelatedAssets extends \Google\Collection
{
  /** @var RelatedAsset[] */
  public $assets;
  /** @var RelationshipAttributes */
  public $relationshipAttributes;
  protected $collection_key = 'assets';
  protected $assetsType = RelatedAsset::class;
  protected $assetsDataType = 'array';
  protected $relationshipAttributesType = RelationshipAttributes::class;
  protected $relationshipAttributesDataType = '';
  /** @param RelatedAsset[] */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /** @return RelatedAsset[] */
  public function getAssets()
  {
    return $this->assets;
  }
  /** @param RelationshipAttributes */
  public function setRelationshipAttributes(RelationshipAttributes $relationshipAttributes)
  {
    $this->relationshipAttributes = $relationshipAttributes;
  }
  /** @return RelationshipAttributes */
  public function getRelationshipAttributes()
  {
    return $this->relationshipAttributes;
  }
}

class RelatedResource extends \Google\Model
{
  /** @var string */
  public $assetType;
  /** @var string */
  public $fullResourceName;

  /** @param string */
  public function setAssetType($assetType)
  {
    $this->assetType = $assetType;
  }
  /** @return string */
  public function getAssetType()
  {
    return $this->assetType;
  }
  /** @param string */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /** @return string */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
}

class RelatedResources extends \Google\Collection
{
  /** @var RelatedResource[] */
  public $relatedResources;
  protected $collection_key = 'relatedResources';
  protected $relatedResourcesType = RelatedResource::class;
  protected $relatedResourcesDataType = 'array';
  /** @param RelatedResource[] */
  public function setRelatedResources($relatedResources)
  {
    $this->relatedResources = $relatedResources;
  }
  /** @return RelatedResource[] */
  public function getRelatedResources()
  {
    return $this->relatedResources;
  }
}

class RelationshipAttributes extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $sourceResourceType;
  /** @var string */
  public $targetResourceType;
  /** @var string */
  public $type;

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
  public function setSourceResourceType($sourceResourceType)
  {
    $this->sourceResourceType = $sourceResourceType;
  }
  /** @return string */
  public function getSourceResourceType()
  {
    return $this->sourceResourceType;
  }
  /** @param string */
  public function setTargetResourceType($targetResourceType)
  {
    $this->targetResourceType = $targetResourceType;
  }
  /** @return string */
  public function getTargetResourceType()
  {
    return $this->targetResourceType;
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

class ResourceSearchResult extends \Google\Collection
{
  /** @var array[] */
  public $additionalAttributes;
  /** @var string */
  public $assetType;
  /** @var AttachedResource[] */
  public $attachedResources;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $folders;
  /** @var string */
  public $kmsKey;
  /** @var string[] */
  public $kmsKeys;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var string[] */
  public $networkTags;
  /** @var string */
  public $organization;
  /** @var string */
  public $parentAssetType;
  /** @var string */
  public $parentFullResourceName;
  /** @var string */
  public $project;
  /** @var RelatedResources[] */
  public $relationships;
  /** @var string */
  public $state;
  /** @var string[] */
  public $tagKeys;
  /** @var string[] */
  public $tagValueIds;
  /** @var string[] */
  public $tagValues;
  /** @var string */
  public $updateTime;
  /** @var VersionedResource[] */
  public $versionedResources;
  protected $collection_key = 'versionedResources';
  protected $attachedResourcesType = AttachedResource::class;
  protected $attachedResourcesDataType = 'array';
  protected $relationshipsType = RelatedResources::class;
  protected $relationshipsDataType = 'map';
  protected $versionedResourcesType = VersionedResource::class;
  protected $versionedResourcesDataType = 'array';
  /** @param array[] */
  public function setAdditionalAttributes($additionalAttributes)
  {
    $this->additionalAttributes = $additionalAttributes;
  }
  /** @return array[] */
  public function getAdditionalAttributes()
  {
    return $this->additionalAttributes;
  }
  /** @param string */
  public function setAssetType($assetType)
  {
    $this->assetType = $assetType;
  }
  /** @return string */
  public function getAssetType()
  {
    return $this->assetType;
  }
  /** @param AttachedResource[] */
  public function setAttachedResources($attachedResources)
  {
    $this->attachedResources = $attachedResources;
  }
  /** @return AttachedResource[] */
  public function getAttachedResources()
  {
    return $this->attachedResources;
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
  /** @param string[] */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /** @return string[] */
  public function getFolders()
  {
    return $this->folders;
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
  public function setKmsKeys($kmsKeys)
  {
    $this->kmsKeys = $kmsKeys;
  }
  /** @return string[] */
  public function getKmsKeys()
  {
    return $this->kmsKeys;
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
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
  }
  /** @param string */
  public function setParentAssetType($parentAssetType)
  {
    $this->parentAssetType = $parentAssetType;
  }
  /** @return string */
  public function getParentAssetType()
  {
    return $this->parentAssetType;
  }
  /** @param string */
  public function setParentFullResourceName($parentFullResourceName)
  {
    $this->parentFullResourceName = $parentFullResourceName;
  }
  /** @return string */
  public function getParentFullResourceName()
  {
    return $this->parentFullResourceName;
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
  /** @param RelatedResources[] */
  public function setRelationships($relationships)
  {
    $this->relationships = $relationships;
  }
  /** @return RelatedResources[] */
  public function getRelationships()
  {
    return $this->relationships;
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
  /** @param string[] */
  public function setTagKeys($tagKeys)
  {
    $this->tagKeys = $tagKeys;
  }
  /** @return string[] */
  public function getTagKeys()
  {
    return $this->tagKeys;
  }
  /** @param string[] */
  public function setTagValueIds($tagValueIds)
  {
    $this->tagValueIds = $tagValueIds;
  }
  /** @return string[] */
  public function getTagValueIds()
  {
    return $this->tagValueIds;
  }
  /** @param string[] */
  public function setTagValues($tagValues)
  {
    $this->tagValues = $tagValues;
  }
  /** @return string[] */
  public function getTagValues()
  {
    return $this->tagValues;
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
  /** @param VersionedResource[] */
  public function setVersionedResources($versionedResources)
  {
    $this->versionedResources = $versionedResources;
  }
  /** @return VersionedResource[] */
  public function getVersionedResources()
  {
    return $this->versionedResources;
  }
}

class ResourceSelector extends \Google\Model
{
  /** @var string */
  public $fullResourceName;

  /** @param string */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /** @return string */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
}

class SavedQuery extends \Google\Model
{
  /** @var QueryContent */
  public $content;
  /** @var string */
  public $createTime;
  /** @var string */
  public $creator;
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lastUpdateTime;
  /** @var string */
  public $lastUpdater;
  /** @var string */
  public $name;
  protected $contentType = QueryContent::class;
  protected $contentDataType = '';
  /** @param QueryContent */
  public function setContent(QueryContent $content)
  {
    $this->content = $content;
  }
  /** @return QueryContent */
  public function getContent()
  {
    return $this->content;
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
  public function setLastUpdateTime($lastUpdateTime)
  {
    $this->lastUpdateTime = $lastUpdateTime;
  }
  /** @return string */
  public function getLastUpdateTime()
  {
    return $this->lastUpdateTime;
  }
  /** @param string */
  public function setLastUpdater($lastUpdater)
  {
    $this->lastUpdater = $lastUpdater;
  }
  /** @return string */
  public function getLastUpdater()
  {
    return $this->lastUpdater;
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

class SearchAllIamPoliciesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var IamPolicySearchResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = IamPolicySearchResult::class;
  protected $resultsDataType = 'array';
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
  /** @param IamPolicySearchResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return IamPolicySearchResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class SearchAllResourcesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ResourceSearchResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = ResourceSearchResult::class;
  protected $resultsDataType = 'array';
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
  /** @param ResourceSearchResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return ResourceSearchResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class SoftwarePackage extends \Google\Model
{
  /** @var VersionedPackage */
  public $aptPackage;
  /** @var VersionedPackage */
  public $cosPackage;
  /** @var VersionedPackage */
  public $googetPackage;
  /** @var WindowsQuickFixEngineeringPackage */
  public $qfePackage;
  /** @var WindowsApplication */
  public $windowsApplication;
  /** @var WindowsUpdatePackage */
  public $wuaPackage;
  /** @var VersionedPackage */
  public $yumPackage;
  /** @var VersionedPackage */
  public $zypperPackage;
  /** @var ZypperPatch */
  public $zypperPatch;
  protected $aptPackageType = VersionedPackage::class;
  protected $aptPackageDataType = '';
  protected $cosPackageType = VersionedPackage::class;
  protected $cosPackageDataType = '';
  protected $googetPackageType = VersionedPackage::class;
  protected $googetPackageDataType = '';
  protected $qfePackageType = WindowsQuickFixEngineeringPackage::class;
  protected $qfePackageDataType = '';
  protected $windowsApplicationType = WindowsApplication::class;
  protected $windowsApplicationDataType = '';
  protected $wuaPackageType = WindowsUpdatePackage::class;
  protected $wuaPackageDataType = '';
  protected $yumPackageType = VersionedPackage::class;
  protected $yumPackageDataType = '';
  protected $zypperPackageType = VersionedPackage::class;
  protected $zypperPackageDataType = '';
  protected $zypperPatchType = ZypperPatch::class;
  protected $zypperPatchDataType = '';
  /** @param VersionedPackage */
  public function setAptPackage(VersionedPackage $aptPackage)
  {
    $this->aptPackage = $aptPackage;
  }
  /** @return VersionedPackage */
  public function getAptPackage()
  {
    return $this->aptPackage;
  }
  /** @param VersionedPackage */
  public function setCosPackage(VersionedPackage $cosPackage)
  {
    $this->cosPackage = $cosPackage;
  }
  /** @return VersionedPackage */
  public function getCosPackage()
  {
    return $this->cosPackage;
  }
  /** @param VersionedPackage */
  public function setGoogetPackage(VersionedPackage $googetPackage)
  {
    $this->googetPackage = $googetPackage;
  }
  /** @return VersionedPackage */
  public function getGoogetPackage()
  {
    return $this->googetPackage;
  }
  /** @param WindowsQuickFixEngineeringPackage */
  public function setQfePackage(WindowsQuickFixEngineeringPackage $qfePackage)
  {
    $this->qfePackage = $qfePackage;
  }
  /** @return WindowsQuickFixEngineeringPackage */
  public function getQfePackage()
  {
    return $this->qfePackage;
  }
  /** @param WindowsApplication */
  public function setWindowsApplication(WindowsApplication $windowsApplication)
  {
    $this->windowsApplication = $windowsApplication;
  }
  /** @return WindowsApplication */
  public function getWindowsApplication()
  {
    return $this->windowsApplication;
  }
  /** @param WindowsUpdatePackage */
  public function setWuaPackage(WindowsUpdatePackage $wuaPackage)
  {
    $this->wuaPackage = $wuaPackage;
  }
  /** @return WindowsUpdatePackage */
  public function getWuaPackage()
  {
    return $this->wuaPackage;
  }
  /** @param VersionedPackage */
  public function setYumPackage(VersionedPackage $yumPackage)
  {
    $this->yumPackage = $yumPackage;
  }
  /** @return VersionedPackage */
  public function getYumPackage()
  {
    return $this->yumPackage;
  }
  /** @param VersionedPackage */
  public function setZypperPackage(VersionedPackage $zypperPackage)
  {
    $this->zypperPackage = $zypperPackage;
  }
  /** @return VersionedPackage */
  public function getZypperPackage()
  {
    return $this->zypperPackage;
  }
  /** @param ZypperPatch */
  public function setZypperPatch(ZypperPatch $zypperPatch)
  {
    $this->zypperPatch = $zypperPatch;
  }
  /** @return ZypperPatch */
  public function getZypperPatch()
  {
    return $this->zypperPatch;
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

class TableFieldSchema extends \Google\Collection
{
  /** @var string */
  public $field;
  /** @var TableFieldSchema[] */
  public $fields;
  /** @var string */
  public $mode;
  /** @var string */
  public $type;
  protected $collection_key = 'fields';
  protected $fieldsType = TableFieldSchema::class;
  protected $fieldsDataType = 'array';
  /** @param string */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param TableFieldSchema[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return TableFieldSchema[] */
  public function getFields()
  {
    return $this->fields;
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

class TableSchema extends \Google\Collection
{
  /** @var TableFieldSchema[] */
  public $fields;
  protected $collection_key = 'fields';
  protected $fieldsType = TableFieldSchema::class;
  protected $fieldsDataType = 'array';
  /** @param TableFieldSchema[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return TableFieldSchema[] */
  public function getFields()
  {
    return $this->fields;
  }
}

class TemporalAsset extends \Google\Model
{
  /** @var Asset */
  public $asset;
  /** @var bool */
  public $deleted;
  /** @var Asset */
  public $priorAsset;
  /** @var string */
  public $priorAssetState;
  /** @var TimeWindow */
  public $window;
  protected $assetType = Asset::class;
  protected $assetDataType = '';
  protected $priorAssetType = Asset::class;
  protected $priorAssetDataType = '';
  protected $windowType = TimeWindow::class;
  protected $windowDataType = '';
  /** @param Asset */
  public function setAsset(Asset $asset)
  {
    $this->asset = $asset;
  }
  /** @return Asset */
  public function getAsset()
  {
    return $this->asset;
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
  /** @param Asset */
  public function setPriorAsset(Asset $priorAsset)
  {
    $this->priorAsset = $priorAsset;
  }
  /** @return Asset */
  public function getPriorAsset()
  {
    return $this->priorAsset;
  }
  /** @param string */
  public function setPriorAssetState($priorAssetState)
  {
    $this->priorAssetState = $priorAssetState;
  }
  /** @return string */
  public function getPriorAssetState()
  {
    return $this->priorAssetState;
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

class TimeWindow extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

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

class UpdateFeedRequest extends \Google\Model
{
  /** @var Feed */
  public $feed;
  /** @var string */
  public $updateMask;
  protected $feedType = Feed::class;
  protected $feedDataType = '';
  /** @param Feed */
  public function setFeed(Feed $feed)
  {
    $this->feed = $feed;
  }
  /** @return Feed */
  public function getFeed()
  {
    return $this->feed;
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

class VersionedPackage extends \Google\Model
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

class VersionedResource extends \Google\Model
{
  /** @var array[] */
  public $resource;
  /** @var string */
  public $version;

  /** @param array[] */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return array[] */
  public function getResource()
  {
    return $this->resource;
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

class WindowsApplication extends \Google\Model
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

class WindowsQuickFixEngineeringPackage extends \Google\Model
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

class WindowsUpdateCategory extends \Google\Model
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

class WindowsUpdatePackage extends \Google\Collection
{
  /** @var WindowsUpdateCategory[] */
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
  protected $categoriesType = WindowsUpdateCategory::class;
  protected $categoriesDataType = 'array';
  /** @param WindowsUpdateCategory[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return WindowsUpdateCategory[] */
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

class ZypperPatch extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessSelector::class, 'Google_Service_CloudAsset_AccessSelector');
class_alias(AnalyzeIamPolicyLongrunningMetadata::class, 'Google_Service_CloudAsset_AnalyzeIamPolicyLongrunningMetadata');
class_alias(AnalyzeIamPolicyLongrunningRequest::class, 'Google_Service_CloudAsset_AnalyzeIamPolicyLongrunningRequest');
class_alias(AnalyzeIamPolicyLongrunningResponse::class, 'Google_Service_CloudAsset_AnalyzeIamPolicyLongrunningResponse');
class_alias(AnalyzeIamPolicyResponse::class, 'Google_Service_CloudAsset_AnalyzeIamPolicyResponse');
class_alias(AnalyzeMoveResponse::class, 'Google_Service_CloudAsset_AnalyzeMoveResponse');
class_alias(AnalyzeOrgPoliciesResponse::class, 'Google_Service_CloudAsset_AnalyzeOrgPoliciesResponse');
class_alias(AnalyzeOrgPolicyGovernedAssetsResponse::class, 'Google_Service_CloudAsset_AnalyzeOrgPolicyGovernedAssetsResponse');
class_alias(AnalyzeOrgPolicyGovernedContainersResponse::class, 'Google_Service_CloudAsset_AnalyzeOrgPolicyGovernedContainersResponse');
class_alias(AnalyzerOrgPolicy::class, 'Google_Service_CloudAsset_AnalyzerOrgPolicy');
class_alias(AnalyzerOrgPolicyConstraint::class, 'Google_Service_CloudAsset_AnalyzerOrgPolicyConstraint');
class_alias(Asset::class, 'Google_Service_CloudAsset_Asset');
class_alias(AttachedResource::class, 'Google_Service_CloudAsset_AttachedResource');
class_alias(AuditConfig::class, 'Google_Service_CloudAsset_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_CloudAsset_AuditLogConfig');
class_alias(BatchGetAssetsHistoryResponse::class, 'Google_Service_CloudAsset_BatchGetAssetsHistoryResponse');
class_alias(BatchGetEffectiveIamPoliciesResponse::class, 'Google_Service_CloudAsset_BatchGetEffectiveIamPoliciesResponse');
class_alias(BigQueryDestination::class, 'Google_Service_CloudAsset_BigQueryDestination');
class_alias(Binding::class, 'Google_Service_CloudAsset_Binding');
class_alias(CloudassetEmpty::class, 'Google_Service_CloudAsset_CloudassetEmpty');
class_alias(CloudassetResource::class, 'Google_Service_CloudAsset_CloudassetResource');
class_alias(ConditionContext::class, 'Google_Service_CloudAsset_ConditionContext');
class_alias(ConditionEvaluation::class, 'Google_Service_CloudAsset_ConditionEvaluation');
class_alias(CreateFeedRequest::class, 'Google_Service_CloudAsset_CreateFeedRequest');
class_alias(Date::class, 'Google_Service_CloudAsset_Date');
class_alias(EffectiveIamPolicy::class, 'Google_Service_CloudAsset_EffectiveIamPolicy');
class_alias(Explanation::class, 'Google_Service_CloudAsset_Explanation');
class_alias(ExportAssetsRequest::class, 'Google_Service_CloudAsset_ExportAssetsRequest');
class_alias(Expr::class, 'Google_Service_CloudAsset_Expr');
class_alias(Feed::class, 'Google_Service_CloudAsset_Feed');
class_alias(FeedOutputConfig::class, 'Google_Service_CloudAsset_FeedOutputConfig');
class_alias(GcsDestination::class, 'Google_Service_CloudAsset_GcsDestination');
class_alias(GoogleCloudAssetV1Access::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1Access');
class_alias(GoogleCloudAssetV1AccessControlList::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1AccessControlList');
class_alias(GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedAsset::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedAsset');
class_alias(GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedIamPolicy::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedIamPolicy');
class_alias(GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedResource::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1AnalyzeOrgPolicyGovernedAssetsResponseGovernedResource');
class_alias(GoogleCloudAssetV1BigQueryDestination::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1BigQueryDestination');
class_alias(GoogleCloudAssetV1BooleanConstraint::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1BooleanConstraint');
class_alias(GoogleCloudAssetV1Constraint::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1Constraint');
class_alias(GoogleCloudAssetV1CustomConstraint::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1CustomConstraint');
class_alias(GoogleCloudAssetV1Edge::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1Edge');
class_alias(GoogleCloudAssetV1GcsDestination::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1GcsDestination');
class_alias(GoogleCloudAssetV1GovernedContainer::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1GovernedContainer');
class_alias(GoogleCloudAssetV1Identity::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1Identity');
class_alias(GoogleCloudAssetV1IdentityList::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1IdentityList');
class_alias(GoogleCloudAssetV1ListConstraint::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1ListConstraint');
class_alias(GoogleCloudAssetV1QueryAssetsOutputConfigBigQueryDestination::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1QueryAssetsOutputConfigBigQueryDestination');
class_alias(GoogleCloudAssetV1Resource::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1Resource');
class_alias(GoogleCloudAssetV1Rule::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1Rule');
class_alias(GoogleCloudAssetV1StringValues::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1StringValues');
class_alias(GoogleCloudAssetV1p7beta1Asset::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1p7beta1Asset');
class_alias(GoogleCloudAssetV1p7beta1RelatedAsset::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1p7beta1RelatedAsset');
class_alias(GoogleCloudAssetV1p7beta1RelatedAssets::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1p7beta1RelatedAssets');
class_alias(GoogleCloudAssetV1p7beta1RelationshipAttributes::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1p7beta1RelationshipAttributes');
class_alias(GoogleCloudAssetV1p7beta1Resource::class, 'Google_Service_CloudAsset_GoogleCloudAssetV1p7beta1Resource');
class_alias(GoogleCloudOrgpolicyV1BooleanPolicy::class, 'Google_Service_CloudAsset_GoogleCloudOrgpolicyV1BooleanPolicy');
class_alias(GoogleCloudOrgpolicyV1ListPolicy::class, 'Google_Service_CloudAsset_GoogleCloudOrgpolicyV1ListPolicy');
class_alias(GoogleCloudOrgpolicyV1Policy::class, 'Google_Service_CloudAsset_GoogleCloudOrgpolicyV1Policy');
class_alias(GoogleCloudOrgpolicyV1RestoreDefault::class, 'Google_Service_CloudAsset_GoogleCloudOrgpolicyV1RestoreDefault');
class_alias(GoogleIdentityAccesscontextmanagerV1AccessLevel::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1AccessLevel');
class_alias(GoogleIdentityAccesscontextmanagerV1AccessPolicy::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1AccessPolicy');
class_alias(GoogleIdentityAccesscontextmanagerV1ApiOperation::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1ApiOperation');
class_alias(GoogleIdentityAccesscontextmanagerV1BasicLevel::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1BasicLevel');
class_alias(GoogleIdentityAccesscontextmanagerV1Condition::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1Condition');
class_alias(GoogleIdentityAccesscontextmanagerV1CustomLevel::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1CustomLevel');
class_alias(GoogleIdentityAccesscontextmanagerV1DevicePolicy::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1DevicePolicy');
class_alias(GoogleIdentityAccesscontextmanagerV1EgressFrom::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1EgressFrom');
class_alias(GoogleIdentityAccesscontextmanagerV1EgressPolicy::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1EgressPolicy');
class_alias(GoogleIdentityAccesscontextmanagerV1EgressTo::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1EgressTo');
class_alias(GoogleIdentityAccesscontextmanagerV1IngressFrom::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1IngressFrom');
class_alias(GoogleIdentityAccesscontextmanagerV1IngressPolicy::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1IngressPolicy');
class_alias(GoogleIdentityAccesscontextmanagerV1IngressSource::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1IngressSource');
class_alias(GoogleIdentityAccesscontextmanagerV1IngressTo::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1IngressTo');
class_alias(GoogleIdentityAccesscontextmanagerV1MethodSelector::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1MethodSelector');
class_alias(GoogleIdentityAccesscontextmanagerV1OsConstraint::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1OsConstraint');
class_alias(GoogleIdentityAccesscontextmanagerV1ServicePerimeter::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1ServicePerimeter');
class_alias(GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1ServicePerimeterConfig');
class_alias(GoogleIdentityAccesscontextmanagerV1VpcAccessibleServices::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1VpcAccessibleServices');
class_alias(IamPolicyAnalysis::class, 'Google_Service_CloudAsset_IamPolicyAnalysis');
class_alias(IamPolicyAnalysisOutputConfig::class, 'Google_Service_CloudAsset_IamPolicyAnalysisOutputConfig');
class_alias(IamPolicyAnalysisQuery::class, 'Google_Service_CloudAsset_IamPolicyAnalysisQuery');
class_alias(IamPolicyAnalysisResult::class, 'Google_Service_CloudAsset_IamPolicyAnalysisResult');
class_alias(IamPolicyAnalysisState::class, 'Google_Service_CloudAsset_IamPolicyAnalysisState');
class_alias(IamPolicySearchResult::class, 'Google_Service_CloudAsset_IamPolicySearchResult');
class_alias(IdentitySelector::class, 'Google_Service_CloudAsset_IdentitySelector');
class_alias(Inventory::class, 'Google_Service_CloudAsset_Inventory');
class_alias(Item::class, 'Google_Service_CloudAsset_Item');
class_alias(ListAssetsResponse::class, 'Google_Service_CloudAsset_ListAssetsResponse');
class_alias(ListFeedsResponse::class, 'Google_Service_CloudAsset_ListFeedsResponse');
class_alias(ListSavedQueriesResponse::class, 'Google_Service_CloudAsset_ListSavedQueriesResponse');
class_alias(MoveAnalysis::class, 'Google_Service_CloudAsset_MoveAnalysis');
class_alias(MoveAnalysisResult::class, 'Google_Service_CloudAsset_MoveAnalysisResult');
class_alias(MoveImpact::class, 'Google_Service_CloudAsset_MoveImpact');
class_alias(Operation::class, 'Google_Service_CloudAsset_Operation');
class_alias(Options::class, 'Google_Service_CloudAsset_Options');
class_alias(OrgPolicyResult::class, 'Google_Service_CloudAsset_OrgPolicyResult');
class_alias(OsInfo::class, 'Google_Service_CloudAsset_OsInfo');
class_alias(OutputConfig::class, 'Google_Service_CloudAsset_OutputConfig');
class_alias(PartitionSpec::class, 'Google_Service_CloudAsset_PartitionSpec');
class_alias(Permissions::class, 'Google_Service_CloudAsset_Permissions');
class_alias(Policy::class, 'Google_Service_CloudAsset_Policy');
class_alias(PolicyInfo::class, 'Google_Service_CloudAsset_PolicyInfo');
class_alias(PubsubDestination::class, 'Google_Service_CloudAsset_PubsubDestination');
class_alias(QueryAssetsOutputConfig::class, 'Google_Service_CloudAsset_QueryAssetsOutputConfig');
class_alias(QueryAssetsRequest::class, 'Google_Service_CloudAsset_QueryAssetsRequest');
class_alias(QueryAssetsResponse::class, 'Google_Service_CloudAsset_QueryAssetsResponse');
class_alias(QueryContent::class, 'Google_Service_CloudAsset_QueryContent');
class_alias(QueryResult::class, 'Google_Service_CloudAsset_QueryResult');
class_alias(RelatedAsset::class, 'Google_Service_CloudAsset_RelatedAsset');
class_alias(RelatedAssets::class, 'Google_Service_CloudAsset_RelatedAssets');
class_alias(RelatedResource::class, 'Google_Service_CloudAsset_RelatedResource');
class_alias(RelatedResources::class, 'Google_Service_CloudAsset_RelatedResources');
class_alias(RelationshipAttributes::class, 'Google_Service_CloudAsset_RelationshipAttributes');
class_alias(ResourceSearchResult::class, 'Google_Service_CloudAsset_ResourceSearchResult');
class_alias(ResourceSelector::class, 'Google_Service_CloudAsset_ResourceSelector');
class_alias(SavedQuery::class, 'Google_Service_CloudAsset_SavedQuery');
class_alias(SearchAllIamPoliciesResponse::class, 'Google_Service_CloudAsset_SearchAllIamPoliciesResponse');
class_alias(SearchAllResourcesResponse::class, 'Google_Service_CloudAsset_SearchAllResourcesResponse');
class_alias(SoftwarePackage::class, 'Google_Service_CloudAsset_SoftwarePackage');
class_alias(Status::class, 'Google_Service_CloudAsset_Status');
class_alias(TableFieldSchema::class, 'Google_Service_CloudAsset_TableFieldSchema');
class_alias(TableSchema::class, 'Google_Service_CloudAsset_TableSchema');
class_alias(TemporalAsset::class, 'Google_Service_CloudAsset_TemporalAsset');
class_alias(TimeWindow::class, 'Google_Service_CloudAsset_TimeWindow');
class_alias(UpdateFeedRequest::class, 'Google_Service_CloudAsset_UpdateFeedRequest');
class_alias(VersionedPackage::class, 'Google_Service_CloudAsset_VersionedPackage');
class_alias(VersionedResource::class, 'Google_Service_CloudAsset_VersionedResource');
class_alias(WindowsApplication::class, 'Google_Service_CloudAsset_WindowsApplication');
class_alias(WindowsQuickFixEngineeringPackage::class, 'Google_Service_CloudAsset_WindowsQuickFixEngineeringPackage');
class_alias(WindowsUpdateCategory::class, 'Google_Service_CloudAsset_WindowsUpdateCategory');
class_alias(WindowsUpdatePackage::class, 'Google_Service_CloudAsset_WindowsUpdatePackage');
class_alias(ZypperPatch::class, 'Google_Service_CloudAsset_ZypperPatch');
