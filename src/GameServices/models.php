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

namespace Google\Service\GameServices;

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
  /** @var bool */
  public $ignoreChildExemptions;
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
  /** @param bool */
  public function setIgnoreChildExemptions($ignoreChildExemptions)
  {
    $this->ignoreChildExemptions = $ignoreChildExemptions;
  }
  /** @return bool */
  public function getIgnoreChildExemptions()
  {
    return $this->ignoreChildExemptions;
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

class AuthorizationLoggingOptions extends \Google\Model
{
  /** @var string */
  public $permissionType;

  /** @param string */
  public function setPermissionType($permissionType)
  {
    $this->permissionType = $permissionType;
  }
  /** @return string */
  public function getPermissionType()
  {
    return $this->permissionType;
  }
}

class Binding extends \Google\Collection
{
  /** @var string */
  public $bindingId;
  /** @var Expr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = Expr::class;
  protected $conditionDataType = '';
  /** @param string */
  public function setBindingId($bindingId)
  {
    $this->bindingId = $bindingId;
  }
  /** @return string */
  public function getBindingId()
  {
    return $this->bindingId;
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

class CloudAuditOptions extends \Google\Model
{
  /** @var AuthorizationLoggingOptions */
  public $authorizationLoggingOptions;
  /** @var string */
  public $logName;
  protected $authorizationLoggingOptionsType = AuthorizationLoggingOptions::class;
  protected $authorizationLoggingOptionsDataType = '';
  /** @param AuthorizationLoggingOptions */
  public function setAuthorizationLoggingOptions(AuthorizationLoggingOptions $authorizationLoggingOptions)
  {
    $this->authorizationLoggingOptions = $authorizationLoggingOptions;
  }
  /** @return AuthorizationLoggingOptions */
  public function getAuthorizationLoggingOptions()
  {
    return $this->authorizationLoggingOptions;
  }
  /** @param string */
  public function setLogName($logName)
  {
    $this->logName = $logName;
  }
  /** @return string */
  public function getLogName()
  {
    return $this->logName;
  }
}

class Condition extends \Google\Collection
{
  /** @var string */
  public $iam;
  /** @var string */
  public $op;
  /** @var string */
  public $svc;
  /** @var string */
  public $sys;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string */
  public function setIam($iam)
  {
    $this->iam = $iam;
  }
  /** @return string */
  public function getIam()
  {
    return $this->iam;
  }
  /** @param string */
  public function setOp($op)
  {
    $this->op = $op;
  }
  /** @return string */
  public function getOp()
  {
    return $this->op;
  }
  /** @param string */
  public function setSvc($svc)
  {
    $this->svc = $svc;
  }
  /** @return string */
  public function getSvc()
  {
    return $this->svc;
  }
  /** @param string */
  public function setSys($sys)
  {
    $this->sys = $sys;
  }
  /** @return string */
  public function getSys()
  {
    return $this->sys;
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

class CounterOptions extends \Google\Collection
{
  /** @var CustomField[] */
  public $customFields;
  /** @var string */
  public $field;
  /** @var string */
  public $metric;
  protected $collection_key = 'customFields';
  protected $customFieldsType = CustomField::class;
  protected $customFieldsDataType = 'array';
  /** @param CustomField[] */
  public function setCustomFields($customFields)
  {
    $this->customFields = $customFields;
  }
  /** @return CustomField[] */
  public function getCustomFields()
  {
    return $this->customFields;
  }
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
  /** @param string */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /** @return string */
  public function getMetric()
  {
    return $this->metric;
  }
}

class CustomField extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $value;

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

class DataAccessOptions extends \Google\Model
{
  /** @var string */
  public $logMode;

  /** @param string */
  public function setLogMode($logMode)
  {
    $this->logMode = $logMode;
  }
  /** @return string */
  public function getLogMode()
  {
    return $this->logMode;
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

class GameservicesEmpty extends \Google\Model
{
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

class LogConfig extends \Google\Model
{
  /** @var CloudAuditOptions */
  public $cloudAudit;
  /** @var CounterOptions */
  public $counter;
  /** @var DataAccessOptions */
  public $dataAccess;
  protected $cloudAuditType = CloudAuditOptions::class;
  protected $cloudAuditDataType = '';
  protected $counterType = CounterOptions::class;
  protected $counterDataType = '';
  protected $dataAccessType = DataAccessOptions::class;
  protected $dataAccessDataType = '';
  /** @param CloudAuditOptions */
  public function setCloudAudit(CloudAuditOptions $cloudAudit)
  {
    $this->cloudAudit = $cloudAudit;
  }
  /** @return CloudAuditOptions */
  public function getCloudAudit()
  {
    return $this->cloudAudit;
  }
  /** @param CounterOptions */
  public function setCounter(CounterOptions $counter)
  {
    $this->counter = $counter;
  }
  /** @return CounterOptions */
  public function getCounter()
  {
    return $this->counter;
  }
  /** @param DataAccessOptions */
  public function setDataAccess(DataAccessOptions $dataAccess)
  {
    $this->dataAccess = $dataAccess;
  }
  /** @return DataAccessOptions */
  public function getDataAccess()
  {
    return $this->dataAccess;
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

class Policy extends \Google\Collection
{
  /** @var AuditConfig[] */
  public $auditConfigs;
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var Rule[] */
  public $rules;
  /** @var int */
  public $version;
  protected $collection_key = 'rules';
  protected $auditConfigsType = AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  protected $rulesType = Rule::class;
  protected $rulesDataType = 'array';
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
  /** @param Rule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return Rule[] */
  public function getRules()
  {
    return $this->rules;
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

class Rule extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var Condition[] */
  public $conditions;
  /** @var string */
  public $description;
  /** @var string[] */
  public $in;
  /** @var LogConfig[] */
  public $logConfig;
  /** @var string[] */
  public $notIn;
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  protected $conditionsType = Condition::class;
  protected $conditionsDataType = 'array';
  protected $logConfigType = LogConfig::class;
  protected $logConfigDataType = 'array';
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
  /** @param Condition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return Condition[] */
  public function getConditions()
  {
    return $this->conditions;
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
  public function setIn($in)
  {
    $this->in = $in;
  }
  /** @return string[] */
  public function getIn()
  {
    return $this->in;
  }
  /** @param LogConfig[] */
  public function setLogConfig($logConfig)
  {
    $this->logConfig = $logConfig;
  }
  /** @return LogConfig[] */
  public function getLogConfig()
  {
    return $this->logConfig;
  }
  /** @param string[] */
  public function setNotIn($notIn)
  {
    $this->notIn = $notIn;
  }
  /** @return string[] */
  public function getNotIn()
  {
    return $this->notIn;
  }
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditConfig::class, 'Google_Service_GameServices_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_GameServices_AuditLogConfig');
class_alias(AuthorizationLoggingOptions::class, 'Google_Service_GameServices_AuthorizationLoggingOptions');
class_alias(Binding::class, 'Google_Service_GameServices_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_GameServices_CancelOperationRequest');
class_alias(CloudAuditOptions::class, 'Google_Service_GameServices_CloudAuditOptions');
class_alias(Condition::class, 'Google_Service_GameServices_Condition');
class_alias(CounterOptions::class, 'Google_Service_GameServices_CounterOptions');
class_alias(CustomField::class, 'Google_Service_GameServices_CustomField');
class_alias(DataAccessOptions::class, 'Google_Service_GameServices_DataAccessOptions');
class_alias(Expr::class, 'Google_Service_GameServices_Expr');
class_alias(GameservicesEmpty::class, 'Google_Service_GameServices_GameservicesEmpty');
class_alias(ListLocationsResponse::class, 'Google_Service_GameServices_ListLocationsResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_GameServices_ListOperationsResponse');
class_alias(Location::class, 'Google_Service_GameServices_Location');
class_alias(LogConfig::class, 'Google_Service_GameServices_LogConfig');
class_alias(Operation::class, 'Google_Service_GameServices_Operation');
class_alias(Policy::class, 'Google_Service_GameServices_Policy');
class_alias(Rule::class, 'Google_Service_GameServices_Rule');
class_alias(SetIamPolicyRequest::class, 'Google_Service_GameServices_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_GameServices_Status');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_GameServices_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_GameServices_TestIamPermissionsResponse');
