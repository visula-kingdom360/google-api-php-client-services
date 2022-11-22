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

namespace Google\Service\Iam;

class AdminAuditData extends \Google\Model
{
  /** @var PermissionDelta */
  public $permissionDelta;
  protected $permissionDeltaType = PermissionDelta::class;
  protected $permissionDeltaDataType = '';
  /** @param PermissionDelta */
  public function setPermissionDelta(PermissionDelta $permissionDelta)
  {
    $this->permissionDelta = $permissionDelta;
  }
  /** @return PermissionDelta */
  public function getPermissionDelta()
  {
    return $this->permissionDelta;
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

class AuditData extends \Google\Model
{
  /** @var PolicyDelta */
  public $policyDelta;
  protected $policyDeltaType = PolicyDelta::class;
  protected $policyDeltaDataType = '';
  /** @param PolicyDelta */
  public function setPolicyDelta(PolicyDelta $policyDelta)
  {
    $this->policyDelta = $policyDelta;
  }
  /** @return PolicyDelta */
  public function getPolicyDelta()
  {
    return $this->policyDelta;
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

class AuditableService extends \Google\Model
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

class Aws extends \Google\Model
{
  /** @var string */
  public $accountId;

  /** @param string */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /** @return string */
  public function getAccountId()
  {
    return $this->accountId;
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

class BindingDelta extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var Expr */
  public $condition;
  /** @var string */
  public $member;
  /** @var string */
  public $role;
  protected $conditionType = Expr::class;
  protected $conditionDataType = '';
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
  public function setMember($member)
  {
    $this->member = $member;
  }
  /** @return string */
  public function getMember()
  {
    return $this->member;
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

class CreateRoleRequest extends \Google\Model
{
  /** @var Role */
  public $role;
  /** @var string */
  public $roleId;
  protected $roleType = Role::class;
  protected $roleDataType = '';
  /** @param Role */
  public function setRole(Role $role)
  {
    $this->role = $role;
  }
  /** @return Role */
  public function getRole()
  {
    return $this->role;
  }
  /** @param string */
  public function setRoleId($roleId)
  {
    $this->roleId = $roleId;
  }
  /** @return string */
  public function getRoleId()
  {
    return $this->roleId;
  }
}

class CreateServiceAccountKeyRequest extends \Google\Model
{
  /** @var string */
  public $keyAlgorithm;
  /** @var string */
  public $privateKeyType;

  /** @param string */
  public function setKeyAlgorithm($keyAlgorithm)
  {
    $this->keyAlgorithm = $keyAlgorithm;
  }
  /** @return string */
  public function getKeyAlgorithm()
  {
    return $this->keyAlgorithm;
  }
  /** @param string */
  public function setPrivateKeyType($privateKeyType)
  {
    $this->privateKeyType = $privateKeyType;
  }
  /** @return string */
  public function getPrivateKeyType()
  {
    return $this->privateKeyType;
  }
}

class CreateServiceAccountRequest extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var ServiceAccount */
  public $serviceAccount;
  protected $serviceAccountType = ServiceAccount::class;
  protected $serviceAccountDataType = '';
  /** @param string */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /** @return string */
  public function getAccountId()
  {
    return $this->accountId;
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

class DisableServiceAccountKeyRequest extends \Google\Model
{
}

class DisableServiceAccountRequest extends \Google\Model
{
}

class EnableServiceAccountKeyRequest extends \Google\Model
{
}

class EnableServiceAccountRequest extends \Google\Model
{
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

class IamEmpty extends \Google\Model
{
}

class LintPolicyRequest extends \Google\Model
{
  /** @var Expr */
  public $condition;
  /** @var string */
  public $fullResourceName;
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

class LintPolicyResponse extends \Google\Collection
{
  /** @var LintResult[] */
  public $lintResults;
  protected $collection_key = 'lintResults';
  protected $lintResultsType = LintResult::class;
  protected $lintResultsDataType = 'array';
  /** @param LintResult[] */
  public function setLintResults($lintResults)
  {
    $this->lintResults = $lintResults;
  }
  /** @return LintResult[] */
  public function getLintResults()
  {
    return $this->lintResults;
  }
}

class LintResult extends \Google\Model
{
  /** @var string */
  public $debugMessage;
  /** @var string */
  public $fieldName;
  /** @var string */
  public $level;
  /** @var int */
  public $locationOffset;
  /** @var string */
  public $severity;
  /** @var string */
  public $validationUnitName;

  /** @param string */
  public function setDebugMessage($debugMessage)
  {
    $this->debugMessage = $debugMessage;
  }
  /** @return string */
  public function getDebugMessage()
  {
    return $this->debugMessage;
  }
  /** @param string */
  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /** @return string */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  /** @param string */
  public function setLevel($level)
  {
    $this->level = $level;
  }
  /** @return string */
  public function getLevel()
  {
    return $this->level;
  }
  /** @param int */
  public function setLocationOffset($locationOffset)
  {
    $this->locationOffset = $locationOffset;
  }
  /** @return int */
  public function getLocationOffset()
  {
    return $this->locationOffset;
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
  public function setValidationUnitName($validationUnitName)
  {
    $this->validationUnitName = $validationUnitName;
  }
  /** @return string */
  public function getValidationUnitName()
  {
    return $this->validationUnitName;
  }
}

class ListRolesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Role[] */
  public $roles;
  protected $collection_key = 'roles';
  protected $rolesType = Role::class;
  protected $rolesDataType = 'array';
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
  /** @param Role[] */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /** @return Role[] */
  public function getRoles()
  {
    return $this->roles;
  }
}

class ListServiceAccountKeysResponse extends \Google\Collection
{
  /** @var ServiceAccountKey[] */
  public $keys;
  protected $collection_key = 'keys';
  protected $keysType = ServiceAccountKey::class;
  protected $keysDataType = 'array';
  /** @param ServiceAccountKey[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return ServiceAccountKey[] */
  public function getKeys()
  {
    return $this->keys;
  }
}

class ListServiceAccountsResponse extends \Google\Collection
{
  /** @var ServiceAccount[] */
  public $accounts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accounts';
  protected $accountsType = ServiceAccount::class;
  protected $accountsDataType = 'array';
  /** @param ServiceAccount[] */
  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;
  }
  /** @return ServiceAccount[] */
  public function getAccounts()
  {
    return $this->accounts;
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

class ListWorkloadIdentityPoolProvidersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var WorkloadIdentityPoolProvider[] */
  public $workloadIdentityPoolProviders;
  protected $collection_key = 'workloadIdentityPoolProviders';
  protected $workloadIdentityPoolProvidersType = WorkloadIdentityPoolProvider::class;
  protected $workloadIdentityPoolProvidersDataType = 'array';
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
  /** @param WorkloadIdentityPoolProvider[] */
  public function setWorkloadIdentityPoolProviders($workloadIdentityPoolProviders)
  {
    $this->workloadIdentityPoolProviders = $workloadIdentityPoolProviders;
  }
  /** @return WorkloadIdentityPoolProvider[] */
  public function getWorkloadIdentityPoolProviders()
  {
    return $this->workloadIdentityPoolProviders;
  }
}

class ListWorkloadIdentityPoolsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var WorkloadIdentityPool[] */
  public $workloadIdentityPools;
  protected $collection_key = 'workloadIdentityPools';
  protected $workloadIdentityPoolsType = WorkloadIdentityPool::class;
  protected $workloadIdentityPoolsDataType = 'array';
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
  /** @param WorkloadIdentityPool[] */
  public function setWorkloadIdentityPools($workloadIdentityPools)
  {
    $this->workloadIdentityPools = $workloadIdentityPools;
  }
  /** @return WorkloadIdentityPool[] */
  public function getWorkloadIdentityPools()
  {
    return $this->workloadIdentityPools;
  }
}

class Oidc extends \Google\Collection
{
  /** @var string[] */
  public $allowedAudiences;
  /** @var string */
  public $issuerUri;
  protected $collection_key = 'allowedAudiences';
  /** @param string[] */
  public function setAllowedAudiences($allowedAudiences)
  {
    $this->allowedAudiences = $allowedAudiences;
  }
  /** @return string[] */
  public function getAllowedAudiences()
  {
    return $this->allowedAudiences;
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

class PatchServiceAccountRequest extends \Google\Model
{
  /** @var ServiceAccount */
  public $serviceAccount;
  /** @var string */
  public $updateMask;
  protected $serviceAccountType = ServiceAccount::class;
  protected $serviceAccountDataType = '';
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

class Permission extends \Google\Model
{
  /** @var bool */
  public $apiDisabled;
  /** @var string */
  public $customRolesSupportLevel;
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var bool */
  public $onlyInPredefinedRoles;
  /** @var string */
  public $primaryPermission;
  /** @var string */
  public $stage;
  /** @var string */
  public $title;

  /** @param bool */
  public function setApiDisabled($apiDisabled)
  {
    $this->apiDisabled = $apiDisabled;
  }
  /** @return bool */
  public function getApiDisabled()
  {
    return $this->apiDisabled;
  }
  /** @param string */
  public function setCustomRolesSupportLevel($customRolesSupportLevel)
  {
    $this->customRolesSupportLevel = $customRolesSupportLevel;
  }
  /** @return string */
  public function getCustomRolesSupportLevel()
  {
    return $this->customRolesSupportLevel;
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
  /** @param bool */
  public function setOnlyInPredefinedRoles($onlyInPredefinedRoles)
  {
    $this->onlyInPredefinedRoles = $onlyInPredefinedRoles;
  }
  /** @return bool */
  public function getOnlyInPredefinedRoles()
  {
    return $this->onlyInPredefinedRoles;
  }
  /** @param string */
  public function setPrimaryPermission($primaryPermission)
  {
    $this->primaryPermission = $primaryPermission;
  }
  /** @return string */
  public function getPrimaryPermission()
  {
    return $this->primaryPermission;
  }
  /** @param string */
  public function setStage($stage)
  {
    $this->stage = $stage;
  }
  /** @return string */
  public function getStage()
  {
    return $this->stage;
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

class PermissionDelta extends \Google\Collection
{
  /** @var string[] */
  public $addedPermissions;
  /** @var string[] */
  public $removedPermissions;
  protected $collection_key = 'removedPermissions';
  /** @param string[] */
  public function setAddedPermissions($addedPermissions)
  {
    $this->addedPermissions = $addedPermissions;
  }
  /** @return string[] */
  public function getAddedPermissions()
  {
    return $this->addedPermissions;
  }
  /** @param string[] */
  public function setRemovedPermissions($removedPermissions)
  {
    $this->removedPermissions = $removedPermissions;
  }
  /** @return string[] */
  public function getRemovedPermissions()
  {
    return $this->removedPermissions;
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

class PolicyDelta extends \Google\Collection
{
  /** @var BindingDelta[] */
  public $bindingDeltas;
  protected $collection_key = 'bindingDeltas';
  protected $bindingDeltasType = BindingDelta::class;
  protected $bindingDeltasDataType = 'array';
  /** @param BindingDelta[] */
  public function setBindingDeltas($bindingDeltas)
  {
    $this->bindingDeltas = $bindingDeltas;
  }
  /** @return BindingDelta[] */
  public function getBindingDeltas()
  {
    return $this->bindingDeltas;
  }
}

class QueryAuditableServicesRequest extends \Google\Model
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

class QueryAuditableServicesResponse extends \Google\Collection
{
  /** @var AuditableService[] */
  public $services;
  protected $collection_key = 'services';
  protected $servicesType = AuditableService::class;
  protected $servicesDataType = 'array';
  /** @param AuditableService[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return AuditableService[] */
  public function getServices()
  {
    return $this->services;
  }
}

class QueryGrantableRolesRequest extends \Google\Model
{
  /** @var string */
  public $fullResourceName;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $view;

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
  public function setView($view)
  {
    $this->view = $view;
  }
  /** @return string */
  public function getView()
  {
    return $this->view;
  }
}

class QueryGrantableRolesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Role[] */
  public $roles;
  protected $collection_key = 'roles';
  protected $rolesType = Role::class;
  protected $rolesDataType = 'array';
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
  /** @param Role[] */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /** @return Role[] */
  public function getRoles()
  {
    return $this->roles;
  }
}

class QueryTestablePermissionsRequest extends \Google\Model
{
  /** @var string */
  public $fullResourceName;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;

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
}

class QueryTestablePermissionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Permission[] */
  public $permissions;
  protected $collection_key = 'permissions';
  protected $permissionsType = Permission::class;
  protected $permissionsDataType = 'array';
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
  /** @param Permission[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return Permission[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class Role extends \Google\Collection
{
  /** @var bool */
  public $deleted;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $includedPermissions;
  /** @var string */
  public $name;
  /** @var string */
  public $stage;
  /** @var string */
  public $title;
  protected $collection_key = 'includedPermissions';
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
  /** @param string[] */
  public function setIncludedPermissions($includedPermissions)
  {
    $this->includedPermissions = $includedPermissions;
  }
  /** @return string[] */
  public function getIncludedPermissions()
  {
    return $this->includedPermissions;
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
  public function setStage($stage)
  {
    $this->stage = $stage;
  }
  /** @return string */
  public function getStage()
  {
    return $this->stage;
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

class Saml extends \Google\Model
{
  /** @var string */
  public $idpMetadataXml;

  /** @param string */
  public function setIdpMetadataXml($idpMetadataXml)
  {
    $this->idpMetadataXml = $idpMetadataXml;
  }
  /** @return string */
  public function getIdpMetadataXml()
  {
    return $this->idpMetadataXml;
  }
}

class ServiceAccount extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var string */
  public $oauth2ClientId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $uniqueId;

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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
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
  public function setOauth2ClientId($oauth2ClientId)
  {
    $this->oauth2ClientId = $oauth2ClientId;
  }
  /** @return string */
  public function getOauth2ClientId()
  {
    return $this->oauth2ClientId;
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
  public function setUniqueId($uniqueId)
  {
    $this->uniqueId = $uniqueId;
  }
  /** @return string */
  public function getUniqueId()
  {
    return $this->uniqueId;
  }
}

class ServiceAccountKey extends \Google\Model
{
  /** @var bool */
  public $disabled;
  /** @var string */
  public $keyAlgorithm;
  /** @var string */
  public $keyOrigin;
  /** @var string */
  public $keyType;
  /** @var string */
  public $name;
  /** @var string */
  public $privateKeyData;
  /** @var string */
  public $privateKeyType;
  /** @var string */
  public $publicKeyData;
  /** @var string */
  public $validAfterTime;
  /** @var string */
  public $validBeforeTime;

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
  public function setKeyAlgorithm($keyAlgorithm)
  {
    $this->keyAlgorithm = $keyAlgorithm;
  }
  /** @return string */
  public function getKeyAlgorithm()
  {
    return $this->keyAlgorithm;
  }
  /** @param string */
  public function setKeyOrigin($keyOrigin)
  {
    $this->keyOrigin = $keyOrigin;
  }
  /** @return string */
  public function getKeyOrigin()
  {
    return $this->keyOrigin;
  }
  /** @param string */
  public function setKeyType($keyType)
  {
    $this->keyType = $keyType;
  }
  /** @return string */
  public function getKeyType()
  {
    return $this->keyType;
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
  public function setPrivateKeyData($privateKeyData)
  {
    $this->privateKeyData = $privateKeyData;
  }
  /** @return string */
  public function getPrivateKeyData()
  {
    return $this->privateKeyData;
  }
  /** @param string */
  public function setPrivateKeyType($privateKeyType)
  {
    $this->privateKeyType = $privateKeyType;
  }
  /** @return string */
  public function getPrivateKeyType()
  {
    return $this->privateKeyType;
  }
  /** @param string */
  public function setPublicKeyData($publicKeyData)
  {
    $this->publicKeyData = $publicKeyData;
  }
  /** @return string */
  public function getPublicKeyData()
  {
    return $this->publicKeyData;
  }
  /** @param string */
  public function setValidAfterTime($validAfterTime)
  {
    $this->validAfterTime = $validAfterTime;
  }
  /** @return string */
  public function getValidAfterTime()
  {
    return $this->validAfterTime;
  }
  /** @param string */
  public function setValidBeforeTime($validBeforeTime)
  {
    $this->validBeforeTime = $validBeforeTime;
  }
  /** @return string */
  public function getValidBeforeTime()
  {
    return $this->validBeforeTime;
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

class SignBlobRequest extends \Google\Model
{
  /** @var string */
  public $bytesToSign;

  /** @param string */
  public function setBytesToSign($bytesToSign)
  {
    $this->bytesToSign = $bytesToSign;
  }
  /** @return string */
  public function getBytesToSign()
  {
    return $this->bytesToSign;
  }
}

class SignBlobResponse extends \Google\Model
{
  /** @var string */
  public $keyId;
  /** @var string */
  public $signature;

  /** @param string */
  public function setKeyId($keyId)
  {
    $this->keyId = $keyId;
  }
  /** @return string */
  public function getKeyId()
  {
    return $this->keyId;
  }
  /** @param string */
  public function setSignature($signature)
  {
    $this->signature = $signature;
  }
  /** @return string */
  public function getSignature()
  {
    return $this->signature;
  }
}

class SignJwtRequest extends \Google\Model
{
  /** @var string */
  public $payload;

  /** @param string */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return string */
  public function getPayload()
  {
    return $this->payload;
  }
}

class SignJwtResponse extends \Google\Model
{
  /** @var string */
  public $keyId;
  /** @var string */
  public $signedJwt;

  /** @param string */
  public function setKeyId($keyId)
  {
    $this->keyId = $keyId;
  }
  /** @return string */
  public function getKeyId()
  {
    return $this->keyId;
  }
  /** @param string */
  public function setSignedJwt($signedJwt)
  {
    $this->signedJwt = $signedJwt;
  }
  /** @return string */
  public function getSignedJwt()
  {
    return $this->signedJwt;
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

class UndeleteRoleRequest extends \Google\Model
{
  /** @var string */
  public $etag;

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
}

class UndeleteServiceAccountRequest extends \Google\Model
{
}

class UndeleteServiceAccountResponse extends \Google\Model
{
  /** @var ServiceAccount */
  public $restoredAccount;
  protected $restoredAccountType = ServiceAccount::class;
  protected $restoredAccountDataType = '';
  /** @param ServiceAccount */
  public function setRestoredAccount(ServiceAccount $restoredAccount)
  {
    $this->restoredAccount = $restoredAccount;
  }
  /** @return ServiceAccount */
  public function getRestoredAccount()
  {
    return $this->restoredAccount;
  }
}

class UndeleteWorkloadIdentityPoolProviderRequest extends \Google\Model
{
}

class UndeleteWorkloadIdentityPoolRequest extends \Google\Model
{
}

class UploadServiceAccountKeyRequest extends \Google\Model
{
  /** @var string */
  public $publicKeyData;

  /** @param string */
  public function setPublicKeyData($publicKeyData)
  {
    $this->publicKeyData = $publicKeyData;
  }
  /** @return string */
  public function getPublicKeyData()
  {
    return $this->publicKeyData;
  }
}

class WorkloadIdentityPool extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $state;

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

class WorkloadIdentityPoolOperationMetadata extends \Google\Model
{
}

class WorkloadIdentityPoolProvider extends \Google\Model
{
  /** @var string */
  public $attributeCondition;
  /** @var string[] */
  public $attributeMapping;
  /** @var Aws */
  public $aws;
  /** @var string */
  public $description;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var Oidc */
  public $oidc;
  /** @var Saml */
  public $saml;
  /** @var string */
  public $state;
  protected $awsType = Aws::class;
  protected $awsDataType = '';
  protected $oidcType = Oidc::class;
  protected $oidcDataType = '';
  protected $samlType = Saml::class;
  protected $samlDataType = '';
  /** @param string */
  public function setAttributeCondition($attributeCondition)
  {
    $this->attributeCondition = $attributeCondition;
  }
  /** @return string */
  public function getAttributeCondition()
  {
    return $this->attributeCondition;
  }
  /** @param string[] */
  public function setAttributeMapping($attributeMapping)
  {
    $this->attributeMapping = $attributeMapping;
  }
  /** @return string[] */
  public function getAttributeMapping()
  {
    return $this->attributeMapping;
  }
  /** @param Aws */
  public function setAws(Aws $aws)
  {
    $this->aws = $aws;
  }
  /** @return Aws */
  public function getAws()
  {
    return $this->aws;
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
  /** @param Oidc */
  public function setOidc(Oidc $oidc)
  {
    $this->oidc = $oidc;
  }
  /** @return Oidc */
  public function getOidc()
  {
    return $this->oidc;
  }
  /** @param Saml */
  public function setSaml(Saml $saml)
  {
    $this->saml = $saml;
  }
  /** @return Saml */
  public function getSaml()
  {
    return $this->saml;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdminAuditData::class, 'Google_Service_Iam_AdminAuditData');
class_alias(AuditConfig::class, 'Google_Service_Iam_AuditConfig');
class_alias(AuditData::class, 'Google_Service_Iam_AuditData');
class_alias(AuditLogConfig::class, 'Google_Service_Iam_AuditLogConfig');
class_alias(AuditableService::class, 'Google_Service_Iam_AuditableService');
class_alias(Aws::class, 'Google_Service_Iam_Aws');
class_alias(Binding::class, 'Google_Service_Iam_Binding');
class_alias(BindingDelta::class, 'Google_Service_Iam_BindingDelta');
class_alias(CreateRoleRequest::class, 'Google_Service_Iam_CreateRoleRequest');
class_alias(CreateServiceAccountKeyRequest::class, 'Google_Service_Iam_CreateServiceAccountKeyRequest');
class_alias(CreateServiceAccountRequest::class, 'Google_Service_Iam_CreateServiceAccountRequest');
class_alias(DisableServiceAccountKeyRequest::class, 'Google_Service_Iam_DisableServiceAccountKeyRequest');
class_alias(DisableServiceAccountRequest::class, 'Google_Service_Iam_DisableServiceAccountRequest');
class_alias(EnableServiceAccountKeyRequest::class, 'Google_Service_Iam_EnableServiceAccountKeyRequest');
class_alias(EnableServiceAccountRequest::class, 'Google_Service_Iam_EnableServiceAccountRequest');
class_alias(Expr::class, 'Google_Service_Iam_Expr');
class_alias(IamEmpty::class, 'Google_Service_Iam_IamEmpty');
class_alias(LintPolicyRequest::class, 'Google_Service_Iam_LintPolicyRequest');
class_alias(LintPolicyResponse::class, 'Google_Service_Iam_LintPolicyResponse');
class_alias(LintResult::class, 'Google_Service_Iam_LintResult');
class_alias(ListRolesResponse::class, 'Google_Service_Iam_ListRolesResponse');
class_alias(ListServiceAccountKeysResponse::class, 'Google_Service_Iam_ListServiceAccountKeysResponse');
class_alias(ListServiceAccountsResponse::class, 'Google_Service_Iam_ListServiceAccountsResponse');
class_alias(ListWorkloadIdentityPoolProvidersResponse::class, 'Google_Service_Iam_ListWorkloadIdentityPoolProvidersResponse');
class_alias(ListWorkloadIdentityPoolsResponse::class, 'Google_Service_Iam_ListWorkloadIdentityPoolsResponse');
class_alias(Oidc::class, 'Google_Service_Iam_Oidc');
class_alias(Operation::class, 'Google_Service_Iam_Operation');
class_alias(PatchServiceAccountRequest::class, 'Google_Service_Iam_PatchServiceAccountRequest');
class_alias(Permission::class, 'Google_Service_Iam_Permission');
class_alias(PermissionDelta::class, 'Google_Service_Iam_PermissionDelta');
class_alias(Policy::class, 'Google_Service_Iam_Policy');
class_alias(PolicyDelta::class, 'Google_Service_Iam_PolicyDelta');
class_alias(QueryAuditableServicesRequest::class, 'Google_Service_Iam_QueryAuditableServicesRequest');
class_alias(QueryAuditableServicesResponse::class, 'Google_Service_Iam_QueryAuditableServicesResponse');
class_alias(QueryGrantableRolesRequest::class, 'Google_Service_Iam_QueryGrantableRolesRequest');
class_alias(QueryGrantableRolesResponse::class, 'Google_Service_Iam_QueryGrantableRolesResponse');
class_alias(QueryTestablePermissionsRequest::class, 'Google_Service_Iam_QueryTestablePermissionsRequest');
class_alias(QueryTestablePermissionsResponse::class, 'Google_Service_Iam_QueryTestablePermissionsResponse');
class_alias(Role::class, 'Google_Service_Iam_Role');
class_alias(Saml::class, 'Google_Service_Iam_Saml');
class_alias(ServiceAccount::class, 'Google_Service_Iam_ServiceAccount');
class_alias(ServiceAccountKey::class, 'Google_Service_Iam_ServiceAccountKey');
class_alias(SetIamPolicyRequest::class, 'Google_Service_Iam_SetIamPolicyRequest');
class_alias(SignBlobRequest::class, 'Google_Service_Iam_SignBlobRequest');
class_alias(SignBlobResponse::class, 'Google_Service_Iam_SignBlobResponse');
class_alias(SignJwtRequest::class, 'Google_Service_Iam_SignJwtRequest');
class_alias(SignJwtResponse::class, 'Google_Service_Iam_SignJwtResponse');
class_alias(Status::class, 'Google_Service_Iam_Status');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_Iam_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_Iam_TestIamPermissionsResponse');
class_alias(UndeleteRoleRequest::class, 'Google_Service_Iam_UndeleteRoleRequest');
class_alias(UndeleteServiceAccountRequest::class, 'Google_Service_Iam_UndeleteServiceAccountRequest');
class_alias(UndeleteServiceAccountResponse::class, 'Google_Service_Iam_UndeleteServiceAccountResponse');
class_alias(UndeleteWorkloadIdentityPoolProviderRequest::class, 'Google_Service_Iam_UndeleteWorkloadIdentityPoolProviderRequest');
class_alias(UndeleteWorkloadIdentityPoolRequest::class, 'Google_Service_Iam_UndeleteWorkloadIdentityPoolRequest');
class_alias(UploadServiceAccountKeyRequest::class, 'Google_Service_Iam_UploadServiceAccountKeyRequest');
class_alias(WorkloadIdentityPool::class, 'Google_Service_Iam_WorkloadIdentityPool');
class_alias(WorkloadIdentityPoolOperationMetadata::class, 'Google_Service_Iam_WorkloadIdentityPoolOperationMetadata');
class_alias(WorkloadIdentityPoolProvider::class, 'Google_Service_Iam_WorkloadIdentityPoolProvider');
