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

namespace Google\Service\SecretManager;

class AccessSecretVersionResponse extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var SecretPayload */
  public $payload;
  protected $payloadType = SecretPayload::class;
  protected $payloadDataType = '';
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
  /** @param SecretPayload */
  public function setPayload(SecretPayload $payload)
  {
    $this->payload = $payload;
  }
  /** @return SecretPayload */
  public function getPayload()
  {
    return $this->payload;
  }
}

class AddSecretVersionRequest extends \Google\Model
{
  /** @var SecretPayload */
  public $payload;
  protected $payloadType = SecretPayload::class;
  protected $payloadDataType = '';
  /** @param SecretPayload */
  public function setPayload(SecretPayload $payload)
  {
    $this->payload = $payload;
  }
  /** @return SecretPayload */
  public function getPayload()
  {
    return $this->payload;
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

class Automatic extends \Google\Model
{
  /** @var CustomerManagedEncryption */
  public $customerManagedEncryption;
  protected $customerManagedEncryptionType = CustomerManagedEncryption::class;
  protected $customerManagedEncryptionDataType = '';
  /** @param CustomerManagedEncryption */
  public function setCustomerManagedEncryption(CustomerManagedEncryption $customerManagedEncryption)
  {
    $this->customerManagedEncryption = $customerManagedEncryption;
  }
  /** @return CustomerManagedEncryption */
  public function getCustomerManagedEncryption()
  {
    return $this->customerManagedEncryption;
  }
}

class AutomaticStatus extends \Google\Model
{
  /** @var CustomerManagedEncryptionStatus */
  public $customerManagedEncryption;
  protected $customerManagedEncryptionType = CustomerManagedEncryptionStatus::class;
  protected $customerManagedEncryptionDataType = '';
  /** @param CustomerManagedEncryptionStatus */
  public function setCustomerManagedEncryption(CustomerManagedEncryptionStatus $customerManagedEncryption)
  {
    $this->customerManagedEncryption = $customerManagedEncryption;
  }
  /** @return CustomerManagedEncryptionStatus */
  public function getCustomerManagedEncryption()
  {
    return $this->customerManagedEncryption;
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

class CustomerManagedEncryption extends \Google\Model
{
  /** @var string */
  public $kmsKeyName;

  /** @param string */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /** @return string */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
  }
}

class CustomerManagedEncryptionStatus extends \Google\Model
{
  /** @var string */
  public $kmsKeyVersionName;

  /** @param string */
  public function setKmsKeyVersionName($kmsKeyVersionName)
  {
    $this->kmsKeyVersionName = $kmsKeyVersionName;
  }
  /** @return string */
  public function getKmsKeyVersionName()
  {
    return $this->kmsKeyVersionName;
  }
}

class DestroySecretVersionRequest extends \Google\Model
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

class DisableSecretVersionRequest extends \Google\Model
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

class EnableSecretVersionRequest extends \Google\Model
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

class ListSecretVersionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $totalSize;
  /** @var SecretVersion[] */
  public $versions;
  protected $collection_key = 'versions';
  protected $versionsType = SecretVersion::class;
  protected $versionsDataType = 'array';
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
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
  /** @param SecretVersion[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return SecretVersion[] */
  public function getVersions()
  {
    return $this->versions;
  }
}

class ListSecretsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Secret[] */
  public $secrets;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'secrets';
  protected $secretsType = Secret::class;
  protected $secretsDataType = 'array';
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
  /** @param Secret[] */
  public function setSecrets($secrets)
  {
    $this->secrets = $secrets;
  }
  /** @return Secret[] */
  public function getSecrets()
  {
    return $this->secrets;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
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

class Replica extends \Google\Model
{
  /** @var CustomerManagedEncryption */
  public $customerManagedEncryption;
  /** @var string */
  public $location;
  protected $customerManagedEncryptionType = CustomerManagedEncryption::class;
  protected $customerManagedEncryptionDataType = '';
  /** @param CustomerManagedEncryption */
  public function setCustomerManagedEncryption(CustomerManagedEncryption $customerManagedEncryption)
  {
    $this->customerManagedEncryption = $customerManagedEncryption;
  }
  /** @return CustomerManagedEncryption */
  public function getCustomerManagedEncryption()
  {
    return $this->customerManagedEncryption;
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
}

class ReplicaStatus extends \Google\Model
{
  /** @var CustomerManagedEncryptionStatus */
  public $customerManagedEncryption;
  /** @var string */
  public $location;
  protected $customerManagedEncryptionType = CustomerManagedEncryptionStatus::class;
  protected $customerManagedEncryptionDataType = '';
  /** @param CustomerManagedEncryptionStatus */
  public function setCustomerManagedEncryption(CustomerManagedEncryptionStatus $customerManagedEncryption)
  {
    $this->customerManagedEncryption = $customerManagedEncryption;
  }
  /** @return CustomerManagedEncryptionStatus */
  public function getCustomerManagedEncryption()
  {
    return $this->customerManagedEncryption;
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
}

class Replication extends \Google\Model
{
  /** @var Automatic */
  public $automatic;
  /** @var UserManaged */
  public $userManaged;
  protected $automaticType = Automatic::class;
  protected $automaticDataType = '';
  protected $userManagedType = UserManaged::class;
  protected $userManagedDataType = '';
  /** @param Automatic */
  public function setAutomatic(Automatic $automatic)
  {
    $this->automatic = $automatic;
  }
  /** @return Automatic */
  public function getAutomatic()
  {
    return $this->automatic;
  }
  /** @param UserManaged */
  public function setUserManaged(UserManaged $userManaged)
  {
    $this->userManaged = $userManaged;
  }
  /** @return UserManaged */
  public function getUserManaged()
  {
    return $this->userManaged;
  }
}

class ReplicationStatus extends \Google\Model
{
  /** @var AutomaticStatus */
  public $automatic;
  /** @var UserManagedStatus */
  public $userManaged;
  protected $automaticType = AutomaticStatus::class;
  protected $automaticDataType = '';
  protected $userManagedType = UserManagedStatus::class;
  protected $userManagedDataType = '';
  /** @param AutomaticStatus */
  public function setAutomatic(AutomaticStatus $automatic)
  {
    $this->automatic = $automatic;
  }
  /** @return AutomaticStatus */
  public function getAutomatic()
  {
    return $this->automatic;
  }
  /** @param UserManagedStatus */
  public function setUserManaged(UserManagedStatus $userManaged)
  {
    $this->userManaged = $userManaged;
  }
  /** @return UserManagedStatus */
  public function getUserManaged()
  {
    return $this->userManaged;
  }
}

class Rotation extends \Google\Model
{
  /** @var string */
  public $nextRotationTime;
  /** @var string */
  public $rotationPeriod;

  /** @param string */
  public function setNextRotationTime($nextRotationTime)
  {
    $this->nextRotationTime = $nextRotationTime;
  }
  /** @return string */
  public function getNextRotationTime()
  {
    return $this->nextRotationTime;
  }
  /** @param string */
  public function setRotationPeriod($rotationPeriod)
  {
    $this->rotationPeriod = $rotationPeriod;
  }
  /** @return string */
  public function getRotationPeriod()
  {
    return $this->rotationPeriod;
  }
}

class Secret extends \Google\Collection
{
  /** @var string[] */
  public $annotations;
  /** @var string */
  public $createTime;
  /** @var string */
  public $etag;
  /** @var string */
  public $expireTime;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var Replication */
  public $replication;
  /** @var Rotation */
  public $rotation;
  /** @var Topic[] */
  public $topics;
  /** @var string */
  public $ttl;
  /** @var string[] */
  public $versionAliases;
  protected $collection_key = 'topics';
  protected $replicationType = Replication::class;
  protected $replicationDataType = '';
  protected $rotationType = Rotation::class;
  protected $rotationDataType = '';
  protected $topicsType = Topic::class;
  protected $topicsDataType = 'array';
  /** @param string[] */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /** @return string[] */
  public function getAnnotations()
  {
    return $this->annotations;
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
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param Replication */
  public function setReplication(Replication $replication)
  {
    $this->replication = $replication;
  }
  /** @return Replication */
  public function getReplication()
  {
    return $this->replication;
  }
  /** @param Rotation */
  public function setRotation(Rotation $rotation)
  {
    $this->rotation = $rotation;
  }
  /** @return Rotation */
  public function getRotation()
  {
    return $this->rotation;
  }
  /** @param Topic[] */
  public function setTopics($topics)
  {
    $this->topics = $topics;
  }
  /** @return Topic[] */
  public function getTopics()
  {
    return $this->topics;
  }
  /** @param string */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
  }
  /** @param string[] */
  public function setVersionAliases($versionAliases)
  {
    $this->versionAliases = $versionAliases;
  }
  /** @return string[] */
  public function getVersionAliases()
  {
    return $this->versionAliases;
  }
}

class SecretPayload extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $dataCrc32c;

  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param string */
  public function setDataCrc32c($dataCrc32c)
  {
    $this->dataCrc32c = $dataCrc32c;
  }
  /** @return string */
  public function getDataCrc32c()
  {
    return $this->dataCrc32c;
  }
}

class SecretVersion extends \Google\Model
{
  /** @var bool */
  public $clientSpecifiedPayloadChecksum;
  /** @var string */
  public $createTime;
  /** @var string */
  public $destroyTime;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var ReplicationStatus */
  public $replicationStatus;
  /** @var string */
  public $state;
  protected $replicationStatusType = ReplicationStatus::class;
  protected $replicationStatusDataType = '';
  /** @param bool */
  public function setClientSpecifiedPayloadChecksum($clientSpecifiedPayloadChecksum)
  {
    $this->clientSpecifiedPayloadChecksum = $clientSpecifiedPayloadChecksum;
  }
  /** @return bool */
  public function getClientSpecifiedPayloadChecksum()
  {
    return $this->clientSpecifiedPayloadChecksum;
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
  public function setDestroyTime($destroyTime)
  {
    $this->destroyTime = $destroyTime;
  }
  /** @return string */
  public function getDestroyTime()
  {
    return $this->destroyTime;
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
  /** @param ReplicationStatus */
  public function setReplicationStatus(ReplicationStatus $replicationStatus)
  {
    $this->replicationStatus = $replicationStatus;
  }
  /** @return ReplicationStatus */
  public function getReplicationStatus()
  {
    return $this->replicationStatus;
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

class SecretmanagerEmpty extends \Google\Model
{
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

class Topic extends \Google\Model
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

class UserManaged extends \Google\Collection
{
  /** @var Replica[] */
  public $replicas;
  protected $collection_key = 'replicas';
  protected $replicasType = Replica::class;
  protected $replicasDataType = 'array';
  /** @param Replica[] */
  public function setReplicas($replicas)
  {
    $this->replicas = $replicas;
  }
  /** @return Replica[] */
  public function getReplicas()
  {
    return $this->replicas;
  }
}

class UserManagedStatus extends \Google\Collection
{
  /** @var ReplicaStatus[] */
  public $replicas;
  protected $collection_key = 'replicas';
  protected $replicasType = ReplicaStatus::class;
  protected $replicasDataType = 'array';
  /** @param ReplicaStatus[] */
  public function setReplicas($replicas)
  {
    $this->replicas = $replicas;
  }
  /** @return ReplicaStatus[] */
  public function getReplicas()
  {
    return $this->replicas;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessSecretVersionResponse::class, 'Google_Service_SecretManager_AccessSecretVersionResponse');
class_alias(AddSecretVersionRequest::class, 'Google_Service_SecretManager_AddSecretVersionRequest');
class_alias(AuditConfig::class, 'Google_Service_SecretManager_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_SecretManager_AuditLogConfig');
class_alias(Automatic::class, 'Google_Service_SecretManager_Automatic');
class_alias(AutomaticStatus::class, 'Google_Service_SecretManager_AutomaticStatus');
class_alias(Binding::class, 'Google_Service_SecretManager_Binding');
class_alias(CustomerManagedEncryption::class, 'Google_Service_SecretManager_CustomerManagedEncryption');
class_alias(CustomerManagedEncryptionStatus::class, 'Google_Service_SecretManager_CustomerManagedEncryptionStatus');
class_alias(DestroySecretVersionRequest::class, 'Google_Service_SecretManager_DestroySecretVersionRequest');
class_alias(DisableSecretVersionRequest::class, 'Google_Service_SecretManager_DisableSecretVersionRequest');
class_alias(EnableSecretVersionRequest::class, 'Google_Service_SecretManager_EnableSecretVersionRequest');
class_alias(Expr::class, 'Google_Service_SecretManager_Expr');
class_alias(ListLocationsResponse::class, 'Google_Service_SecretManager_ListLocationsResponse');
class_alias(ListSecretVersionsResponse::class, 'Google_Service_SecretManager_ListSecretVersionsResponse');
class_alias(ListSecretsResponse::class, 'Google_Service_SecretManager_ListSecretsResponse');
class_alias(Location::class, 'Google_Service_SecretManager_Location');
class_alias(Policy::class, 'Google_Service_SecretManager_Policy');
class_alias(Replica::class, 'Google_Service_SecretManager_Replica');
class_alias(ReplicaStatus::class, 'Google_Service_SecretManager_ReplicaStatus');
class_alias(Replication::class, 'Google_Service_SecretManager_Replication');
class_alias(ReplicationStatus::class, 'Google_Service_SecretManager_ReplicationStatus');
class_alias(Rotation::class, 'Google_Service_SecretManager_Rotation');
class_alias(Secret::class, 'Google_Service_SecretManager_Secret');
class_alias(SecretPayload::class, 'Google_Service_SecretManager_SecretPayload');
class_alias(SecretVersion::class, 'Google_Service_SecretManager_SecretVersion');
class_alias(SecretmanagerEmpty::class, 'Google_Service_SecretManager_SecretmanagerEmpty');
class_alias(SetIamPolicyRequest::class, 'Google_Service_SecretManager_SetIamPolicyRequest');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_SecretManager_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_SecretManager_TestIamPermissionsResponse');
class_alias(Topic::class, 'Google_Service_SecretManager_Topic');
class_alias(UserManaged::class, 'Google_Service_SecretManager_UserManaged');
class_alias(UserManagedStatus::class, 'Google_Service_SecretManager_UserManagedStatus');
