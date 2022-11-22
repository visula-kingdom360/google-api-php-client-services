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

namespace Google\Service\CloudSourceRepositories;

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

class ListReposResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Repo[] */
  public $repos;
  protected $collection_key = 'repos';
  protected $reposType = Repo::class;
  protected $reposDataType = 'array';
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
  /** @param Repo[] */
  public function setRepos($repos)
  {
    $this->repos = $repos;
  }
  /** @return Repo[] */
  public function getRepos()
  {
    return $this->repos;
  }
}

class MirrorConfig extends \Google\Model
{
  /** @var string */
  public $deployKeyId;
  /** @var string */
  public $url;
  /** @var string */
  public $webhookId;

  /** @param string */
  public function setDeployKeyId($deployKeyId)
  {
    $this->deployKeyId = $deployKeyId;
  }
  /** @return string */
  public function getDeployKeyId()
  {
    return $this->deployKeyId;
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
  /** @param string */
  public function setWebhookId($webhookId)
  {
    $this->webhookId = $webhookId;
  }
  /** @return string */
  public function getWebhookId()
  {
    return $this->webhookId;
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

class ProjectConfig extends \Google\Model
{
  /** @var bool */
  public $enablePrivateKeyCheck;
  /** @var string */
  public $name;
  /** @var PubsubConfig[] */
  public $pubsubConfigs;
  protected $pubsubConfigsType = PubsubConfig::class;
  protected $pubsubConfigsDataType = 'map';
  /** @param bool */
  public function setEnablePrivateKeyCheck($enablePrivateKeyCheck)
  {
    $this->enablePrivateKeyCheck = $enablePrivateKeyCheck;
  }
  /** @return bool */
  public function getEnablePrivateKeyCheck()
  {
    return $this->enablePrivateKeyCheck;
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
  /** @param PubsubConfig[] */
  public function setPubsubConfigs($pubsubConfigs)
  {
    $this->pubsubConfigs = $pubsubConfigs;
  }
  /** @return PubsubConfig[] */
  public function getPubsubConfigs()
  {
    return $this->pubsubConfigs;
  }
}

class PubsubConfig extends \Google\Model
{
  /** @var string */
  public $messageFormat;
  /** @var string */
  public $serviceAccountEmail;
  /** @var string */
  public $topic;

  /** @param string */
  public function setMessageFormat($messageFormat)
  {
    $this->messageFormat = $messageFormat;
  }
  /** @return string */
  public function getMessageFormat()
  {
    return $this->messageFormat;
  }
  /** @param string */
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  /** @return string */
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
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

class Repo extends \Google\Model
{
  /** @var MirrorConfig */
  public $mirrorConfig;
  /** @var string */
  public $name;
  /** @var PubsubConfig[] */
  public $pubsubConfigs;
  /** @var string */
  public $size;
  /** @var string */
  public $url;
  protected $mirrorConfigType = MirrorConfig::class;
  protected $mirrorConfigDataType = '';
  protected $pubsubConfigsType = PubsubConfig::class;
  protected $pubsubConfigsDataType = 'map';
  /** @param MirrorConfig */
  public function setMirrorConfig(MirrorConfig $mirrorConfig)
  {
    $this->mirrorConfig = $mirrorConfig;
  }
  /** @return MirrorConfig */
  public function getMirrorConfig()
  {
    return $this->mirrorConfig;
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
  /** @param PubsubConfig[] */
  public function setPubsubConfigs($pubsubConfigs)
  {
    $this->pubsubConfigs = $pubsubConfigs;
  }
  /** @return PubsubConfig[] */
  public function getPubsubConfigs()
  {
    return $this->pubsubConfigs;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
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

class SourcerepoEmpty extends \Google\Model
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

class SyncRepoMetadata extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $startTime;
  /** @var string */
  public $statusMessage;
  /** @var string */
  public $updateTime;

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

class SyncRepoRequest extends \Google\Model
{
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

class UpdateProjectConfigRequest extends \Google\Model
{
  /** @var ProjectConfig */
  public $projectConfig;
  /** @var string */
  public $updateMask;
  protected $projectConfigType = ProjectConfig::class;
  protected $projectConfigDataType = '';
  /** @param ProjectConfig */
  public function setProjectConfig(ProjectConfig $projectConfig)
  {
    $this->projectConfig = $projectConfig;
  }
  /** @return ProjectConfig */
  public function getProjectConfig()
  {
    return $this->projectConfig;
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

class UpdateRepoRequest extends \Google\Model
{
  /** @var Repo */
  public $repo;
  /** @var string */
  public $updateMask;
  protected $repoType = Repo::class;
  protected $repoDataType = '';
  /** @param Repo */
  public function setRepo(Repo $repo)
  {
    $this->repo = $repo;
  }
  /** @return Repo */
  public function getRepo()
  {
    return $this->repo;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditConfig::class, 'Google_Service_CloudSourceRepositories_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_CloudSourceRepositories_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_CloudSourceRepositories_Binding');
class_alias(Expr::class, 'Google_Service_CloudSourceRepositories_Expr');
class_alias(ListReposResponse::class, 'Google_Service_CloudSourceRepositories_ListReposResponse');
class_alias(MirrorConfig::class, 'Google_Service_CloudSourceRepositories_MirrorConfig');
class_alias(Operation::class, 'Google_Service_CloudSourceRepositories_Operation');
class_alias(Policy::class, 'Google_Service_CloudSourceRepositories_Policy');
class_alias(ProjectConfig::class, 'Google_Service_CloudSourceRepositories_ProjectConfig');
class_alias(PubsubConfig::class, 'Google_Service_CloudSourceRepositories_PubsubConfig');
class_alias(Repo::class, 'Google_Service_CloudSourceRepositories_Repo');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CloudSourceRepositories_SetIamPolicyRequest');
class_alias(SourcerepoEmpty::class, 'Google_Service_CloudSourceRepositories_SourcerepoEmpty');
class_alias(Status::class, 'Google_Service_CloudSourceRepositories_Status');
class_alias(SyncRepoMetadata::class, 'Google_Service_CloudSourceRepositories_SyncRepoMetadata');
class_alias(SyncRepoRequest::class, 'Google_Service_CloudSourceRepositories_SyncRepoRequest');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CloudSourceRepositories_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CloudSourceRepositories_TestIamPermissionsResponse');
class_alias(UpdateProjectConfigRequest::class, 'Google_Service_CloudSourceRepositories_UpdateProjectConfigRequest');
class_alias(UpdateRepoRequest::class, 'Google_Service_CloudSourceRepositories_UpdateRepoRequest');
