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

namespace Google\Service\BigQueryConnectionService;

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

class BigqueryconnectionEmpty extends \Google\Model
{
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

class CloudSqlCredential extends \Google\Model
{
  /** @var string */
  public $password;
  /** @var string */
  public $username;

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

class CloudSqlProperties extends \Google\Model
{
  /** @var CloudSqlCredential */
  public $credential;
  /** @var string */
  public $database;
  /** @var string */
  public $instanceId;
  /** @var string */
  public $serviceAccountId;
  /** @var string */
  public $type;
  protected $credentialType = CloudSqlCredential::class;
  protected $credentialDataType = '';
  /** @param CloudSqlCredential */
  public function setCredential(CloudSqlCredential $credential)
  {
    $this->credential = $credential;
  }
  /** @return CloudSqlCredential */
  public function getCredential()
  {
    return $this->credential;
  }
  /** @param string */
  public function setDatabase($database)
  {
    $this->database = $database;
  }
  /** @return string */
  public function getDatabase()
  {
    return $this->database;
  }
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
  public function setServiceAccountId($serviceAccountId)
  {
    $this->serviceAccountId = $serviceAccountId;
  }
  /** @return string */
  public function getServiceAccountId()
  {
    return $this->serviceAccountId;
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

class Connection extends \Google\Model
{
  /** @var CloudSqlProperties */
  public $cloudSql;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $description;
  /** @var string */
  public $friendlyName;
  /** @var bool */
  public $hasCredential;
  /** @var string */
  public $lastModifiedTime;
  /** @var string */
  public $name;
  protected $cloudSqlType = CloudSqlProperties::class;
  protected $cloudSqlDataType = '';
  /** @param CloudSqlProperties */
  public function setCloudSql(CloudSqlProperties $cloudSql)
  {
    $this->cloudSql = $cloudSql;
  }
  /** @return CloudSqlProperties */
  public function getCloudSql()
  {
    return $this->cloudSql;
  }
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
  public function getCreationTime()
  {
    return $this->creationTime;
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
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /** @return string */
  public function getFriendlyName()
  {
    return $this->friendlyName;
  }
  /** @param bool */
  public function setHasCredential($hasCredential)
  {
    $this->hasCredential = $hasCredential;
  }
  /** @return bool */
  public function getHasCredential()
  {
    return $this->hasCredential;
  }
  /** @param string */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
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

class ConnectionCredential extends \Google\Model
{
  /** @var CloudSqlCredential */
  public $cloudSql;
  protected $cloudSqlType = CloudSqlCredential::class;
  protected $cloudSqlDataType = '';
  /** @param CloudSqlCredential */
  public function setCloudSql(CloudSqlCredential $cloudSql)
  {
    $this->cloudSql = $cloudSql;
  }
  /** @return CloudSqlCredential */
  public function getCloudSql()
  {
    return $this->cloudSql;
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

class GetIamPolicyRequest extends \Google\Model
{
  /** @var GetPolicyOptions */
  public $options;
  protected $optionsType = GetPolicyOptions::class;
  protected $optionsDataType = '';
  /** @param GetPolicyOptions */
  public function setOptions(GetPolicyOptions $options)
  {
    $this->options = $options;
  }
  /** @return GetPolicyOptions */
  public function getOptions()
  {
    return $this->options;
  }
}

class GetPolicyOptions extends \Google\Model
{
  /** @var int */
  public $requestedPolicyVersion;

  /** @param int */
  public function setRequestedPolicyVersion($requestedPolicyVersion)
  {
    $this->requestedPolicyVersion = $requestedPolicyVersion;
  }
  /** @return int */
  public function getRequestedPolicyVersion()
  {
    return $this->requestedPolicyVersion;
  }
}

class ListConnectionsResponse extends \Google\Collection
{
  /** @var Connection[] */
  public $connections;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'connections';
  protected $connectionsType = Connection::class;
  protected $connectionsDataType = 'array';
  /** @param Connection[] */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /** @return Connection[] */
  public function getConnections()
  {
    return $this->connections;
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
class_alias(AuditConfig::class, 'Google_Service_BigQueryConnectionService_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_BigQueryConnectionService_AuditLogConfig');
class_alias(BigqueryconnectionEmpty::class, 'Google_Service_BigQueryConnectionService_BigqueryconnectionEmpty');
class_alias(Binding::class, 'Google_Service_BigQueryConnectionService_Binding');
class_alias(CloudSqlCredential::class, 'Google_Service_BigQueryConnectionService_CloudSqlCredential');
class_alias(CloudSqlProperties::class, 'Google_Service_BigQueryConnectionService_CloudSqlProperties');
class_alias(Connection::class, 'Google_Service_BigQueryConnectionService_Connection');
class_alias(ConnectionCredential::class, 'Google_Service_BigQueryConnectionService_ConnectionCredential');
class_alias(Expr::class, 'Google_Service_BigQueryConnectionService_Expr');
class_alias(GetIamPolicyRequest::class, 'Google_Service_BigQueryConnectionService_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_BigQueryConnectionService_GetPolicyOptions');
class_alias(ListConnectionsResponse::class, 'Google_Service_BigQueryConnectionService_ListConnectionsResponse');
class_alias(Policy::class, 'Google_Service_BigQueryConnectionService_Policy');
class_alias(SetIamPolicyRequest::class, 'Google_Service_BigQueryConnectionService_SetIamPolicyRequest');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_BigQueryConnectionService_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_BigQueryConnectionService_TestIamPermissionsResponse');
