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

namespace Google\Service\PolicySimulator;

class GoogleCloudPolicysimulatorV1AccessStateDiff extends \Google\Model
{
  /** @var string */
  public $accessChange;
  /** @var GoogleCloudPolicysimulatorV1ExplainedAccess */
  public $baseline;
  /** @var GoogleCloudPolicysimulatorV1ExplainedAccess */
  public $simulated;
  protected $baselineType = GoogleCloudPolicysimulatorV1ExplainedAccess::class;
  protected $baselineDataType = '';
  protected $simulatedType = GoogleCloudPolicysimulatorV1ExplainedAccess::class;
  protected $simulatedDataType = '';
  /** @param string */
  public function setAccessChange($accessChange)
  {
    $this->accessChange = $accessChange;
  }
  /** @return string */
  public function getAccessChange()
  {
    return $this->accessChange;
  }
  /** @param GoogleCloudPolicysimulatorV1ExplainedAccess */
  public function setBaseline(GoogleCloudPolicysimulatorV1ExplainedAccess $baseline)
  {
    $this->baseline = $baseline;
  }
  /** @return GoogleCloudPolicysimulatorV1ExplainedAccess */
  public function getBaseline()
  {
    return $this->baseline;
  }
  /** @param GoogleCloudPolicysimulatorV1ExplainedAccess */
  public function setSimulated(GoogleCloudPolicysimulatorV1ExplainedAccess $simulated)
  {
    $this->simulated = $simulated;
  }
  /** @return GoogleCloudPolicysimulatorV1ExplainedAccess */
  public function getSimulated()
  {
    return $this->simulated;
  }
}

class GoogleCloudPolicysimulatorV1AccessTuple extends \Google\Model
{
  /** @var string */
  public $fullResourceName;
  /** @var string */
  public $permission;
  /** @var string */
  public $principal;

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
  public function setPrincipal($principal)
  {
    $this->principal = $principal;
  }
  /** @return string */
  public function getPrincipal()
  {
    return $this->principal;
  }
}

class GoogleCloudPolicysimulatorV1BindingExplanation extends \Google\Model
{
  /** @var string */
  public $access;
  /** @var GoogleTypeExpr */
  public $condition;
  /** @var GoogleCloudPolicysimulatorV1BindingExplanationAnnotatedMembership[] */
  public $memberships;
  /** @var string */
  public $relevance;
  /** @var string */
  public $role;
  /** @var string */
  public $rolePermission;
  /** @var string */
  public $rolePermissionRelevance;
  protected $conditionType = GoogleTypeExpr::class;
  protected $conditionDataType = '';
  protected $membershipsType = GoogleCloudPolicysimulatorV1BindingExplanationAnnotatedMembership::class;
  protected $membershipsDataType = 'map';
  /** @param string */
  public function setAccess($access)
  {
    $this->access = $access;
  }
  /** @return string */
  public function getAccess()
  {
    return $this->access;
  }
  /** @param GoogleTypeExpr */
  public function setCondition(GoogleTypeExpr $condition)
  {
    $this->condition = $condition;
  }
  /** @return GoogleTypeExpr */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param GoogleCloudPolicysimulatorV1BindingExplanationAnnotatedMembership[] */
  public function setMemberships($memberships)
  {
    $this->memberships = $memberships;
  }
  /** @return GoogleCloudPolicysimulatorV1BindingExplanationAnnotatedMembership[] */
  public function getMemberships()
  {
    return $this->memberships;
  }
  /** @param string */
  public function setRelevance($relevance)
  {
    $this->relevance = $relevance;
  }
  /** @return string */
  public function getRelevance()
  {
    return $this->relevance;
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
  /** @param string */
  public function setRolePermission($rolePermission)
  {
    $this->rolePermission = $rolePermission;
  }
  /** @return string */
  public function getRolePermission()
  {
    return $this->rolePermission;
  }
  /** @param string */
  public function setRolePermissionRelevance($rolePermissionRelevance)
  {
    $this->rolePermissionRelevance = $rolePermissionRelevance;
  }
  /** @return string */
  public function getRolePermissionRelevance()
  {
    return $this->rolePermissionRelevance;
  }
}

class GoogleCloudPolicysimulatorV1BindingExplanationAnnotatedMembership extends \Google\Model
{
  /** @var string */
  public $membership;
  /** @var string */
  public $relevance;

  /** @param string */
  public function setMembership($membership)
  {
    $this->membership = $membership;
  }
  /** @return string */
  public function getMembership()
  {
    return $this->membership;
  }
  /** @param string */
  public function setRelevance($relevance)
  {
    $this->relevance = $relevance;
  }
  /** @return string */
  public function getRelevance()
  {
    return $this->relevance;
  }
}

class GoogleCloudPolicysimulatorV1ExplainedAccess extends \Google\Collection
{
  /** @var string */
  public $accessState;
  /** @var GoogleRpcStatus[] */
  public $errors;
  /** @var GoogleCloudPolicysimulatorV1ExplainedPolicy[] */
  public $policies;
  protected $collection_key = 'policies';
  protected $errorsType = GoogleRpcStatus::class;
  protected $errorsDataType = 'array';
  protected $policiesType = GoogleCloudPolicysimulatorV1ExplainedPolicy::class;
  protected $policiesDataType = 'array';
  /** @param string */
  public function setAccessState($accessState)
  {
    $this->accessState = $accessState;
  }
  /** @return string */
  public function getAccessState()
  {
    return $this->accessState;
  }
  /** @param GoogleRpcStatus[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GoogleRpcStatus[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param GoogleCloudPolicysimulatorV1ExplainedPolicy[] */
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /** @return GoogleCloudPolicysimulatorV1ExplainedPolicy[] */
  public function getPolicies()
  {
    return $this->policies;
  }
}

class GoogleCloudPolicysimulatorV1ExplainedPolicy extends \Google\Collection
{
  /** @var string */
  public $access;
  /** @var GoogleCloudPolicysimulatorV1BindingExplanation[] */
  public $bindingExplanations;
  /** @var string */
  public $fullResourceName;
  /** @var GoogleIamV1Policy */
  public $policy;
  /** @var string */
  public $relevance;
  protected $collection_key = 'bindingExplanations';
  protected $bindingExplanationsType = GoogleCloudPolicysimulatorV1BindingExplanation::class;
  protected $bindingExplanationsDataType = 'array';
  protected $policyType = GoogleIamV1Policy::class;
  protected $policyDataType = '';
  /** @param string */
  public function setAccess($access)
  {
    $this->access = $access;
  }
  /** @return string */
  public function getAccess()
  {
    return $this->access;
  }
  /** @param GoogleCloudPolicysimulatorV1BindingExplanation[] */
  public function setBindingExplanations($bindingExplanations)
  {
    $this->bindingExplanations = $bindingExplanations;
  }
  /** @return GoogleCloudPolicysimulatorV1BindingExplanation[] */
  public function getBindingExplanations()
  {
    return $this->bindingExplanations;
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
  /** @param GoogleIamV1Policy */
  public function setPolicy(GoogleIamV1Policy $policy)
  {
    $this->policy = $policy;
  }
  /** @return GoogleIamV1Policy */
  public function getPolicy()
  {
    return $this->policy;
  }
  /** @param string */
  public function setRelevance($relevance)
  {
    $this->relevance = $relevance;
  }
  /** @return string */
  public function getRelevance()
  {
    return $this->relevance;
  }
}

class GoogleCloudPolicysimulatorV1ListReplayResultsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudPolicysimulatorV1ReplayResult[] */
  public $replayResults;
  protected $collection_key = 'replayResults';
  protected $replayResultsType = GoogleCloudPolicysimulatorV1ReplayResult::class;
  protected $replayResultsDataType = 'array';
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
  /** @param GoogleCloudPolicysimulatorV1ReplayResult[] */
  public function setReplayResults($replayResults)
  {
    $this->replayResults = $replayResults;
  }
  /** @return GoogleCloudPolicysimulatorV1ReplayResult[] */
  public function getReplayResults()
  {
    return $this->replayResults;
  }
}

class GoogleCloudPolicysimulatorV1Replay extends \Google\Model
{
  /** @var GoogleCloudPolicysimulatorV1ReplayConfig */
  public $config;
  /** @var string */
  public $name;
  /** @var GoogleCloudPolicysimulatorV1ReplayResultsSummary */
  public $resultsSummary;
  /** @var string */
  public $state;
  protected $configType = GoogleCloudPolicysimulatorV1ReplayConfig::class;
  protected $configDataType = '';
  protected $resultsSummaryType = GoogleCloudPolicysimulatorV1ReplayResultsSummary::class;
  protected $resultsSummaryDataType = '';
  /** @param GoogleCloudPolicysimulatorV1ReplayConfig */
  public function setConfig(GoogleCloudPolicysimulatorV1ReplayConfig $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudPolicysimulatorV1ReplayConfig */
  public function getConfig()
  {
    return $this->config;
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
  /** @param GoogleCloudPolicysimulatorV1ReplayResultsSummary */
  public function setResultsSummary(GoogleCloudPolicysimulatorV1ReplayResultsSummary $resultsSummary)
  {
    $this->resultsSummary = $resultsSummary;
  }
  /** @return GoogleCloudPolicysimulatorV1ReplayResultsSummary */
  public function getResultsSummary()
  {
    return $this->resultsSummary;
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

class GoogleCloudPolicysimulatorV1ReplayConfig extends \Google\Model
{
  /** @var string */
  public $logSource;
  /** @var GoogleIamV1Policy[] */
  public $policyOverlay;
  protected $policyOverlayType = GoogleIamV1Policy::class;
  protected $policyOverlayDataType = 'map';
  /** @param string */
  public function setLogSource($logSource)
  {
    $this->logSource = $logSource;
  }
  /** @return string */
  public function getLogSource()
  {
    return $this->logSource;
  }
  /** @param GoogleIamV1Policy[] */
  public function setPolicyOverlay($policyOverlay)
  {
    $this->policyOverlay = $policyOverlay;
  }
  /** @return GoogleIamV1Policy[] */
  public function getPolicyOverlay()
  {
    return $this->policyOverlay;
  }
}

class GoogleCloudPolicysimulatorV1ReplayDiff extends \Google\Model
{
  /** @var GoogleCloudPolicysimulatorV1AccessStateDiff */
  public $accessDiff;
  protected $accessDiffType = GoogleCloudPolicysimulatorV1AccessStateDiff::class;
  protected $accessDiffDataType = '';
  /** @param GoogleCloudPolicysimulatorV1AccessStateDiff */
  public function setAccessDiff(GoogleCloudPolicysimulatorV1AccessStateDiff $accessDiff)
  {
    $this->accessDiff = $accessDiff;
  }
  /** @return GoogleCloudPolicysimulatorV1AccessStateDiff */
  public function getAccessDiff()
  {
    return $this->accessDiff;
  }
}

class GoogleCloudPolicysimulatorV1ReplayOperationMetadata extends \Google\Model
{
  /** @var string */
  public $startTime;

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

class GoogleCloudPolicysimulatorV1ReplayResult extends \Google\Model
{
  /** @var GoogleCloudPolicysimulatorV1AccessTuple */
  public $accessTuple;
  /** @var GoogleCloudPolicysimulatorV1ReplayDiff */
  public $diff;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var GoogleTypeDate */
  public $lastSeenDate;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  protected $accessTupleType = GoogleCloudPolicysimulatorV1AccessTuple::class;
  protected $accessTupleDataType = '';
  protected $diffType = GoogleCloudPolicysimulatorV1ReplayDiff::class;
  protected $diffDataType = '';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $lastSeenDateType = GoogleTypeDate::class;
  protected $lastSeenDateDataType = '';
  /** @param GoogleCloudPolicysimulatorV1AccessTuple */
  public function setAccessTuple(GoogleCloudPolicysimulatorV1AccessTuple $accessTuple)
  {
    $this->accessTuple = $accessTuple;
  }
  /** @return GoogleCloudPolicysimulatorV1AccessTuple */
  public function getAccessTuple()
  {
    return $this->accessTuple;
  }
  /** @param GoogleCloudPolicysimulatorV1ReplayDiff */
  public function setDiff(GoogleCloudPolicysimulatorV1ReplayDiff $diff)
  {
    $this->diff = $diff;
  }
  /** @return GoogleCloudPolicysimulatorV1ReplayDiff */
  public function getDiff()
  {
    return $this->diff;
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
  /** @param GoogleTypeDate */
  public function setLastSeenDate(GoogleTypeDate $lastSeenDate)
  {
    $this->lastSeenDate = $lastSeenDate;
  }
  /** @return GoogleTypeDate */
  public function getLastSeenDate()
  {
    return $this->lastSeenDate;
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
}

class GoogleCloudPolicysimulatorV1ReplayResultsSummary extends \Google\Model
{
  /** @var int */
  public $differenceCount;
  /** @var int */
  public $errorCount;
  /** @var int */
  public $logCount;
  /** @var GoogleTypeDate */
  public $newestDate;
  /** @var GoogleTypeDate */
  public $oldestDate;
  /** @var int */
  public $unchangedCount;
  protected $newestDateType = GoogleTypeDate::class;
  protected $newestDateDataType = '';
  protected $oldestDateType = GoogleTypeDate::class;
  protected $oldestDateDataType = '';
  /** @param int */
  public function setDifferenceCount($differenceCount)
  {
    $this->differenceCount = $differenceCount;
  }
  /** @return int */
  public function getDifferenceCount()
  {
    return $this->differenceCount;
  }
  /** @param int */
  public function setErrorCount($errorCount)
  {
    $this->errorCount = $errorCount;
  }
  /** @return int */
  public function getErrorCount()
  {
    return $this->errorCount;
  }
  /** @param int */
  public function setLogCount($logCount)
  {
    $this->logCount = $logCount;
  }
  /** @return int */
  public function getLogCount()
  {
    return $this->logCount;
  }
  /** @param GoogleTypeDate */
  public function setNewestDate(GoogleTypeDate $newestDate)
  {
    $this->newestDate = $newestDate;
  }
  /** @return GoogleTypeDate */
  public function getNewestDate()
  {
    return $this->newestDate;
  }
  /** @param GoogleTypeDate */
  public function setOldestDate(GoogleTypeDate $oldestDate)
  {
    $this->oldestDate = $oldestDate;
  }
  /** @return GoogleTypeDate */
  public function getOldestDate()
  {
    return $this->oldestDate;
  }
  /** @param int */
  public function setUnchangedCount($unchangedCount)
  {
    $this->unchangedCount = $unchangedCount;
  }
  /** @return int */
  public function getUnchangedCount()
  {
    return $this->unchangedCount;
  }
}

class GoogleCloudPolicysimulatorV1beta1Replay extends \Google\Model
{
  /** @var GoogleCloudPolicysimulatorV1beta1ReplayConfig */
  public $config;
  /** @var string */
  public $name;
  /** @var GoogleCloudPolicysimulatorV1beta1ReplayResultsSummary */
  public $resultsSummary;
  /** @var string */
  public $state;
  protected $configType = GoogleCloudPolicysimulatorV1beta1ReplayConfig::class;
  protected $configDataType = '';
  protected $resultsSummaryType = GoogleCloudPolicysimulatorV1beta1ReplayResultsSummary::class;
  protected $resultsSummaryDataType = '';
  /** @param GoogleCloudPolicysimulatorV1beta1ReplayConfig */
  public function setConfig(GoogleCloudPolicysimulatorV1beta1ReplayConfig $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudPolicysimulatorV1beta1ReplayConfig */
  public function getConfig()
  {
    return $this->config;
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
  /** @param GoogleCloudPolicysimulatorV1beta1ReplayResultsSummary */
  public function setResultsSummary(GoogleCloudPolicysimulatorV1beta1ReplayResultsSummary $resultsSummary)
  {
    $this->resultsSummary = $resultsSummary;
  }
  /** @return GoogleCloudPolicysimulatorV1beta1ReplayResultsSummary */
  public function getResultsSummary()
  {
    return $this->resultsSummary;
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

class GoogleCloudPolicysimulatorV1beta1ReplayConfig extends \Google\Model
{
  /** @var string */
  public $logSource;
  /** @var GoogleIamV1Policy[] */
  public $policyOverlay;
  protected $policyOverlayType = GoogleIamV1Policy::class;
  protected $policyOverlayDataType = 'map';
  /** @param string */
  public function setLogSource($logSource)
  {
    $this->logSource = $logSource;
  }
  /** @return string */
  public function getLogSource()
  {
    return $this->logSource;
  }
  /** @param GoogleIamV1Policy[] */
  public function setPolicyOverlay($policyOverlay)
  {
    $this->policyOverlay = $policyOverlay;
  }
  /** @return GoogleIamV1Policy[] */
  public function getPolicyOverlay()
  {
    return $this->policyOverlay;
  }
}

class GoogleCloudPolicysimulatorV1beta1ReplayOperationMetadata extends \Google\Model
{
  /** @var string */
  public $startTime;

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

class GoogleCloudPolicysimulatorV1beta1ReplayResultsSummary extends \Google\Model
{
  /** @var int */
  public $differenceCount;
  /** @var int */
  public $errorCount;
  /** @var int */
  public $logCount;
  /** @var GoogleTypeDate */
  public $newestDate;
  /** @var GoogleTypeDate */
  public $oldestDate;
  /** @var int */
  public $unchangedCount;
  protected $newestDateType = GoogleTypeDate::class;
  protected $newestDateDataType = '';
  protected $oldestDateType = GoogleTypeDate::class;
  protected $oldestDateDataType = '';
  /** @param int */
  public function setDifferenceCount($differenceCount)
  {
    $this->differenceCount = $differenceCount;
  }
  /** @return int */
  public function getDifferenceCount()
  {
    return $this->differenceCount;
  }
  /** @param int */
  public function setErrorCount($errorCount)
  {
    $this->errorCount = $errorCount;
  }
  /** @return int */
  public function getErrorCount()
  {
    return $this->errorCount;
  }
  /** @param int */
  public function setLogCount($logCount)
  {
    $this->logCount = $logCount;
  }
  /** @return int */
  public function getLogCount()
  {
    return $this->logCount;
  }
  /** @param GoogleTypeDate */
  public function setNewestDate(GoogleTypeDate $newestDate)
  {
    $this->newestDate = $newestDate;
  }
  /** @return GoogleTypeDate */
  public function getNewestDate()
  {
    return $this->newestDate;
  }
  /** @param GoogleTypeDate */
  public function setOldestDate(GoogleTypeDate $oldestDate)
  {
    $this->oldestDate = $oldestDate;
  }
  /** @return GoogleTypeDate */
  public function getOldestDate()
  {
    return $this->oldestDate;
  }
  /** @param int */
  public function setUnchangedCount($unchangedCount)
  {
    $this->unchangedCount = $unchangedCount;
  }
  /** @return int */
  public function getUnchangedCount()
  {
    return $this->unchangedCount;
  }
}

class GoogleIamV1AuditConfig extends \Google\Collection
{
  /** @var GoogleIamV1AuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = GoogleIamV1AuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param GoogleIamV1AuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return GoogleIamV1AuditLogConfig[] */
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

class GoogleIamV1AuditLogConfig extends \Google\Collection
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

class GoogleIamV1Binding extends \Google\Collection
{
  /** @var GoogleTypeExpr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = GoogleTypeExpr::class;
  protected $conditionDataType = '';
  /** @param GoogleTypeExpr */
  public function setCondition(GoogleTypeExpr $condition)
  {
    $this->condition = $condition;
  }
  /** @return GoogleTypeExpr */
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

class GoogleIamV1Policy extends \Google\Collection
{
  /** @var GoogleIamV1AuditConfig[] */
  public $auditConfigs;
  /** @var GoogleIamV1Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = GoogleIamV1AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = GoogleIamV1Binding::class;
  protected $bindingsDataType = 'array';
  /** @param GoogleIamV1AuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return GoogleIamV1AuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
  /** @param GoogleIamV1Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return GoogleIamV1Binding[] */
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

class GoogleLongrunningListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleLongrunningOperation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = GoogleLongrunningOperation::class;
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
  /** @param GoogleLongrunningOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleLongrunningOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class GoogleLongrunningOperation extends \Google\Model
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

class GoogleTypeDate extends \Google\Model
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

class GoogleTypeExpr extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudPolicysimulatorV1AccessStateDiff::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1AccessStateDiff');
class_alias(GoogleCloudPolicysimulatorV1AccessTuple::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1AccessTuple');
class_alias(GoogleCloudPolicysimulatorV1BindingExplanation::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1BindingExplanation');
class_alias(GoogleCloudPolicysimulatorV1BindingExplanationAnnotatedMembership::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1BindingExplanationAnnotatedMembership');
class_alias(GoogleCloudPolicysimulatorV1ExplainedAccess::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1ExplainedAccess');
class_alias(GoogleCloudPolicysimulatorV1ExplainedPolicy::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1ExplainedPolicy');
class_alias(GoogleCloudPolicysimulatorV1ListReplayResultsResponse::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1ListReplayResultsResponse');
class_alias(GoogleCloudPolicysimulatorV1Replay::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1Replay');
class_alias(GoogleCloudPolicysimulatorV1ReplayConfig::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1ReplayConfig');
class_alias(GoogleCloudPolicysimulatorV1ReplayDiff::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1ReplayDiff');
class_alias(GoogleCloudPolicysimulatorV1ReplayOperationMetadata::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1ReplayOperationMetadata');
class_alias(GoogleCloudPolicysimulatorV1ReplayResult::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1ReplayResult');
class_alias(GoogleCloudPolicysimulatorV1ReplayResultsSummary::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1ReplayResultsSummary');
class_alias(GoogleCloudPolicysimulatorV1beta1Replay::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1beta1Replay');
class_alias(GoogleCloudPolicysimulatorV1beta1ReplayConfig::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1beta1ReplayConfig');
class_alias(GoogleCloudPolicysimulatorV1beta1ReplayOperationMetadata::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1beta1ReplayOperationMetadata');
class_alias(GoogleCloudPolicysimulatorV1beta1ReplayResultsSummary::class, 'Google_Service_PolicySimulator_GoogleCloudPolicysimulatorV1beta1ReplayResultsSummary');
class_alias(GoogleIamV1AuditConfig::class, 'Google_Service_PolicySimulator_GoogleIamV1AuditConfig');
class_alias(GoogleIamV1AuditLogConfig::class, 'Google_Service_PolicySimulator_GoogleIamV1AuditLogConfig');
class_alias(GoogleIamV1Binding::class, 'Google_Service_PolicySimulator_GoogleIamV1Binding');
class_alias(GoogleIamV1Policy::class, 'Google_Service_PolicySimulator_GoogleIamV1Policy');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_PolicySimulator_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_PolicySimulator_GoogleLongrunningOperation');
class_alias(GoogleRpcStatus::class, 'Google_Service_PolicySimulator_GoogleRpcStatus');
class_alias(GoogleTypeDate::class, 'Google_Service_PolicySimulator_GoogleTypeDate');
class_alias(GoogleTypeExpr::class, 'Google_Service_PolicySimulator_GoogleTypeExpr');
