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

namespace Google\Service\PolicyTroubleshooter;

class GoogleCloudPolicytroubleshooterV1AccessTuple extends \Google\Model
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

class GoogleCloudPolicytroubleshooterV1BindingExplanation extends \Google\Model
{
  /** @var string */
  public $access;
  /** @var GoogleTypeExpr */
  public $condition;
  /** @var GoogleCloudPolicytroubleshooterV1BindingExplanationAnnotatedMembership[] */
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
  protected $membershipsType = GoogleCloudPolicytroubleshooterV1BindingExplanationAnnotatedMembership::class;
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
  /** @param GoogleCloudPolicytroubleshooterV1BindingExplanationAnnotatedMembership[] */
  public function setMemberships($memberships)
  {
    $this->memberships = $memberships;
  }
  /** @return GoogleCloudPolicytroubleshooterV1BindingExplanationAnnotatedMembership[] */
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

class GoogleCloudPolicytroubleshooterV1BindingExplanationAnnotatedMembership extends \Google\Model
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

class GoogleCloudPolicytroubleshooterV1ExplainedPolicy extends \Google\Collection
{
  /** @var string */
  public $access;
  /** @var GoogleCloudPolicytroubleshooterV1BindingExplanation[] */
  public $bindingExplanations;
  /** @var string */
  public $fullResourceName;
  /** @var GoogleIamV1Policy */
  public $policy;
  /** @var string */
  public $relevance;
  protected $collection_key = 'bindingExplanations';
  protected $bindingExplanationsType = GoogleCloudPolicytroubleshooterV1BindingExplanation::class;
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
  /** @param GoogleCloudPolicytroubleshooterV1BindingExplanation[] */
  public function setBindingExplanations($bindingExplanations)
  {
    $this->bindingExplanations = $bindingExplanations;
  }
  /** @return GoogleCloudPolicytroubleshooterV1BindingExplanation[] */
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

class GoogleCloudPolicytroubleshooterV1TroubleshootIamPolicyRequest extends \Google\Model
{
  /** @var GoogleCloudPolicytroubleshooterV1AccessTuple */
  public $accessTuple;
  protected $accessTupleType = GoogleCloudPolicytroubleshooterV1AccessTuple::class;
  protected $accessTupleDataType = '';
  /** @param GoogleCloudPolicytroubleshooterV1AccessTuple */
  public function setAccessTuple(GoogleCloudPolicytroubleshooterV1AccessTuple $accessTuple)
  {
    $this->accessTuple = $accessTuple;
  }
  /** @return GoogleCloudPolicytroubleshooterV1AccessTuple */
  public function getAccessTuple()
  {
    return $this->accessTuple;
  }
}

class GoogleCloudPolicytroubleshooterV1TroubleshootIamPolicyResponse extends \Google\Collection
{
  /** @var string */
  public $access;
  /** @var GoogleRpcStatus[] */
  public $errors;
  /** @var GoogleCloudPolicytroubleshooterV1ExplainedPolicy[] */
  public $explainedPolicies;
  protected $collection_key = 'explainedPolicies';
  protected $errorsType = GoogleRpcStatus::class;
  protected $errorsDataType = 'array';
  protected $explainedPoliciesType = GoogleCloudPolicytroubleshooterV1ExplainedPolicy::class;
  protected $explainedPoliciesDataType = 'array';
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
  /** @param GoogleCloudPolicytroubleshooterV1ExplainedPolicy[] */
  public function setExplainedPolicies($explainedPolicies)
  {
    $this->explainedPolicies = $explainedPolicies;
  }
  /** @return GoogleCloudPolicytroubleshooterV1ExplainedPolicy[] */
  public function getExplainedPolicies()
  {
    return $this->explainedPolicies;
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
class_alias(GoogleCloudPolicytroubleshooterV1AccessTuple::class, 'Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1AccessTuple');
class_alias(GoogleCloudPolicytroubleshooterV1BindingExplanation::class, 'Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1BindingExplanation');
class_alias(GoogleCloudPolicytroubleshooterV1BindingExplanationAnnotatedMembership::class, 'Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1BindingExplanationAnnotatedMembership');
class_alias(GoogleCloudPolicytroubleshooterV1ExplainedPolicy::class, 'Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1ExplainedPolicy');
class_alias(GoogleCloudPolicytroubleshooterV1TroubleshootIamPolicyRequest::class, 'Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1TroubleshootIamPolicyRequest');
class_alias(GoogleCloudPolicytroubleshooterV1TroubleshootIamPolicyResponse::class, 'Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1TroubleshootIamPolicyResponse');
class_alias(GoogleIamV1AuditConfig::class, 'Google_Service_PolicyTroubleshooter_GoogleIamV1AuditConfig');
class_alias(GoogleIamV1AuditLogConfig::class, 'Google_Service_PolicyTroubleshooter_GoogleIamV1AuditLogConfig');
class_alias(GoogleIamV1Binding::class, 'Google_Service_PolicyTroubleshooter_GoogleIamV1Binding');
class_alias(GoogleIamV1Policy::class, 'Google_Service_PolicyTroubleshooter_GoogleIamV1Policy');
class_alias(GoogleRpcStatus::class, 'Google_Service_PolicyTroubleshooter_GoogleRpcStatus');
class_alias(GoogleTypeExpr::class, 'Google_Service_PolicyTroubleshooter_GoogleTypeExpr');
