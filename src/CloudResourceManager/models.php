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

namespace Google\Service\CloudResourceManager;

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

class CloudresourcemanagerEmpty extends \Google\Model
{
}

class CloudresourcemanagerGoogleCloudResourcemanagerV2alpha1FolderOperation extends \Google\Model
{
  /** @var string */
  public $destinationParent;
  /** @var string */
  public $displayName;
  /** @var string */
  public $operationType;
  /** @var string */
  public $sourceParent;

  /** @param string */
  public function setDestinationParent($destinationParent)
  {
    $this->destinationParent = $destinationParent;
  }
  /** @return string */
  public function getDestinationParent()
  {
    return $this->destinationParent;
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
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /** @param string */
  public function setSourceParent($sourceParent)
  {
    $this->sourceParent = $sourceParent;
  }
  /** @return string */
  public function getSourceParent()
  {
    return $this->sourceParent;
  }
}

class CloudresourcemanagerGoogleCloudResourcemanagerV2beta1FolderOperation extends \Google\Model
{
  /** @var string */
  public $destinationParent;
  /** @var string */
  public $displayName;
  /** @var string */
  public $operationType;
  /** @var string */
  public $sourceParent;

  /** @param string */
  public function setDestinationParent($destinationParent)
  {
    $this->destinationParent = $destinationParent;
  }
  /** @return string */
  public function getDestinationParent()
  {
    return $this->destinationParent;
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
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /** @param string */
  public function setSourceParent($sourceParent)
  {
    $this->sourceParent = $sourceParent;
  }
  /** @return string */
  public function getSourceParent()
  {
    return $this->sourceParent;
  }
}

class CreateFolderMetadata extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $parent;

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

class CreateProjectMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var bool */
  public $gettable;
  /** @var bool */
  public $ready;

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
  /** @param bool */
  public function setGettable($gettable)
  {
    $this->gettable = $gettable;
  }
  /** @return bool */
  public function getGettable()
  {
    return $this->gettable;
  }
  /** @param bool */
  public function setReady($ready)
  {
    $this->ready = $ready;
  }
  /** @return bool */
  public function getReady()
  {
    return $this->ready;
  }
}

class CreateTagBindingMetadata extends \Google\Model
{
}

class CreateTagKeyMetadata extends \Google\Model
{
}

class CreateTagValueMetadata extends \Google\Model
{
}

class DeleteFolderMetadata extends \Google\Model
{
}

class DeleteOrganizationMetadata extends \Google\Model
{
}

class DeleteProjectMetadata extends \Google\Model
{
}

class DeleteTagBindingMetadata extends \Google\Model
{
}

class DeleteTagKeyMetadata extends \Google\Model
{
}

class DeleteTagValueMetadata extends \Google\Model
{
}

class EffectiveTag extends \Google\Model
{
  /** @var bool */
  public $inherited;
  /** @var string */
  public $namespacedTagKey;
  /** @var string */
  public $namespacedTagValue;
  /** @var string */
  public $tagKey;
  /** @var string */
  public $tagValue;

  /** @param bool */
  public function setInherited($inherited)
  {
    $this->inherited = $inherited;
  }
  /** @return bool */
  public function getInherited()
  {
    return $this->inherited;
  }
  /** @param string */
  public function setNamespacedTagKey($namespacedTagKey)
  {
    $this->namespacedTagKey = $namespacedTagKey;
  }
  /** @return string */
  public function getNamespacedTagKey()
  {
    return $this->namespacedTagKey;
  }
  /** @param string */
  public function setNamespacedTagValue($namespacedTagValue)
  {
    $this->namespacedTagValue = $namespacedTagValue;
  }
  /** @return string */
  public function getNamespacedTagValue()
  {
    return $this->namespacedTagValue;
  }
  /** @param string */
  public function setTagKey($tagKey)
  {
    $this->tagKey = $tagKey;
  }
  /** @return string */
  public function getTagKey()
  {
    return $this->tagKey;
  }
  /** @param string */
  public function setTagValue($tagValue)
  {
    $this->tagValue = $tagValue;
  }
  /** @return string */
  public function getTagValue()
  {
    return $this->tagValue;
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

class Folder extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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

class FolderOperation extends \Google\Model
{
  /** @var string */
  public $destinationParent;
  /** @var string */
  public $displayName;
  /** @var string */
  public $operationType;
  /** @var string */
  public $sourceParent;

  /** @param string */
  public function setDestinationParent($destinationParent)
  {
    $this->destinationParent = $destinationParent;
  }
  /** @return string */
  public function getDestinationParent()
  {
    return $this->destinationParent;
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
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /** @return string */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /** @param string */
  public function setSourceParent($sourceParent)
  {
    $this->sourceParent = $sourceParent;
  }
  /** @return string */
  public function getSourceParent()
  {
    return $this->sourceParent;
  }
}

class FolderOperationError extends \Google\Model
{
  /** @var string */
  public $errorMessageId;

  /** @param string */
  public function setErrorMessageId($errorMessageId)
  {
    $this->errorMessageId = $errorMessageId;
  }
  /** @return string */
  public function getErrorMessageId()
  {
    return $this->errorMessageId;
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

class Lien extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;
  /** @var string */
  public $origin;
  /** @var string */
  public $parent;
  /** @var string */
  public $reason;
  /** @var string[] */
  public $restrictions;
  protected $collection_key = 'restrictions';
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
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }
  /** @return string */
  public function getOrigin()
  {
    return $this->origin;
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
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
  }
  /** @param string[] */
  public function setRestrictions($restrictions)
  {
    $this->restrictions = $restrictions;
  }
  /** @return string[] */
  public function getRestrictions()
  {
    return $this->restrictions;
  }
}

class ListEffectiveTagsResponse extends \Google\Collection
{
  /** @var EffectiveTag[] */
  public $effectiveTags;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'effectiveTags';
  protected $effectiveTagsType = EffectiveTag::class;
  protected $effectiveTagsDataType = 'array';
  /** @param EffectiveTag[] */
  public function setEffectiveTags($effectiveTags)
  {
    $this->effectiveTags = $effectiveTags;
  }
  /** @return EffectiveTag[] */
  public function getEffectiveTags()
  {
    return $this->effectiveTags;
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

class ListFoldersResponse extends \Google\Collection
{
  /** @var Folder[] */
  public $folders;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'folders';
  protected $foldersType = Folder::class;
  protected $foldersDataType = 'array';
  /** @param Folder[] */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /** @return Folder[] */
  public function getFolders()
  {
    return $this->folders;
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

class ListLiensResponse extends \Google\Collection
{
  /** @var Lien[] */
  public $liens;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'liens';
  protected $liensType = Lien::class;
  protected $liensDataType = 'array';
  /** @param Lien[] */
  public function setLiens($liens)
  {
    $this->liens = $liens;
  }
  /** @return Lien[] */
  public function getLiens()
  {
    return $this->liens;
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

class ListProjectsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Project[] */
  public $projects;
  protected $collection_key = 'projects';
  protected $projectsType = Project::class;
  protected $projectsDataType = 'array';
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
  /** @param Project[] */
  public function setProjects($projects)
  {
    $this->projects = $projects;
  }
  /** @return Project[] */
  public function getProjects()
  {
    return $this->projects;
  }
}

class ListTagBindingsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TagBinding[] */
  public $tagBindings;
  protected $collection_key = 'tagBindings';
  protected $tagBindingsType = TagBinding::class;
  protected $tagBindingsDataType = 'array';
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
  /** @param TagBinding[] */
  public function setTagBindings($tagBindings)
  {
    $this->tagBindings = $tagBindings;
  }
  /** @return TagBinding[] */
  public function getTagBindings()
  {
    return $this->tagBindings;
  }
}

class ListTagHoldsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TagHold[] */
  public $tagHolds;
  protected $collection_key = 'tagHolds';
  protected $tagHoldsType = TagHold::class;
  protected $tagHoldsDataType = 'array';
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
  /** @param TagHold[] */
  public function setTagHolds($tagHolds)
  {
    $this->tagHolds = $tagHolds;
  }
  /** @return TagHold[] */
  public function getTagHolds()
  {
    return $this->tagHolds;
  }
}

class ListTagKeysResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TagKey[] */
  public $tagKeys;
  protected $collection_key = 'tagKeys';
  protected $tagKeysType = TagKey::class;
  protected $tagKeysDataType = 'array';
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
  /** @param TagKey[] */
  public function setTagKeys($tagKeys)
  {
    $this->tagKeys = $tagKeys;
  }
  /** @return TagKey[] */
  public function getTagKeys()
  {
    return $this->tagKeys;
  }
}

class ListTagValuesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TagValue[] */
  public $tagValues;
  protected $collection_key = 'tagValues';
  protected $tagValuesType = TagValue::class;
  protected $tagValuesDataType = 'array';
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
  /** @param TagValue[] */
  public function setTagValues($tagValues)
  {
    $this->tagValues = $tagValues;
  }
  /** @return TagValue[] */
  public function getTagValues()
  {
    return $this->tagValues;
  }
}

class MoveFolderMetadata extends \Google\Model
{
  /** @var string */
  public $destinationParent;
  /** @var string */
  public $displayName;
  /** @var string */
  public $sourceParent;

  /** @param string */
  public function setDestinationParent($destinationParent)
  {
    $this->destinationParent = $destinationParent;
  }
  /** @return string */
  public function getDestinationParent()
  {
    return $this->destinationParent;
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
  public function setSourceParent($sourceParent)
  {
    $this->sourceParent = $sourceParent;
  }
  /** @return string */
  public function getSourceParent()
  {
    return $this->sourceParent;
  }
}

class MoveFolderRequest extends \Google\Model
{
  /** @var string */
  public $destinationParent;

  /** @param string */
  public function setDestinationParent($destinationParent)
  {
    $this->destinationParent = $destinationParent;
  }
  /** @return string */
  public function getDestinationParent()
  {
    return $this->destinationParent;
  }
}

class MoveProjectMetadata extends \Google\Model
{
}

class MoveProjectRequest extends \Google\Model
{
  /** @var string */
  public $destinationParent;

  /** @param string */
  public function setDestinationParent($destinationParent)
  {
    $this->destinationParent = $destinationParent;
  }
  /** @return string */
  public function getDestinationParent()
  {
    return $this->destinationParent;
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

class Organization extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $directoryCustomerId;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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
  public function setDirectoryCustomerId($directoryCustomerId)
  {
    $this->directoryCustomerId = $directoryCustomerId;
  }
  /** @return string */
  public function getDirectoryCustomerId()
  {
    return $this->directoryCustomerId;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
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

class Project extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $deleteTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string */
  public $projectId;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
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

class ProjectCreationStatus extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var bool */
  public $gettable;
  /** @var bool */
  public $ready;

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
  /** @param bool */
  public function setGettable($gettable)
  {
    $this->gettable = $gettable;
  }
  /** @return bool */
  public function getGettable()
  {
    return $this->gettable;
  }
  /** @param bool */
  public function setReady($ready)
  {
    $this->ready = $ready;
  }
  /** @return bool */
  public function getReady()
  {
    return $this->ready;
  }
}

class SearchFoldersResponse extends \Google\Collection
{
  /** @var Folder[] */
  public $folders;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'folders';
  protected $foldersType = Folder::class;
  protected $foldersDataType = 'array';
  /** @param Folder[] */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /** @return Folder[] */
  public function getFolders()
  {
    return $this->folders;
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

class SearchOrganizationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Organization[] */
  public $organizations;
  protected $collection_key = 'organizations';
  protected $organizationsType = Organization::class;
  protected $organizationsDataType = 'array';
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
  /** @param Organization[] */
  public function setOrganizations($organizations)
  {
    $this->organizations = $organizations;
  }
  /** @return Organization[] */
  public function getOrganizations()
  {
    return $this->organizations;
  }
}

class SearchProjectsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Project[] */
  public $projects;
  protected $collection_key = 'projects';
  protected $projectsType = Project::class;
  protected $projectsDataType = 'array';
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
  /** @param Project[] */
  public function setProjects($projects)
  {
    $this->projects = $projects;
  }
  /** @return Project[] */
  public function getProjects()
  {
    return $this->projects;
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

class TagBinding extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string */
  public $tagValue;

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
  /** @param string */
  public function setTagValue($tagValue)
  {
    $this->tagValue = $tagValue;
  }
  /** @return string */
  public function getTagValue()
  {
    return $this->tagValue;
  }
}

class TagHold extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $helpLink;
  /** @var string */
  public $holder;
  /** @var string */
  public $name;
  /** @var string */
  public $origin;

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
  public function setHelpLink($helpLink)
  {
    $this->helpLink = $helpLink;
  }
  /** @return string */
  public function getHelpLink()
  {
    return $this->helpLink;
  }
  /** @param string */
  public function setHolder($holder)
  {
    $this->holder = $holder;
  }
  /** @return string */
  public function getHolder()
  {
    return $this->holder;
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
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }
  /** @return string */
  public function getOrigin()
  {
    return $this->origin;
  }
}

class TagKey extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var string */
  public $namespacedName;
  /** @var string */
  public $parent;
  /** @var string */
  public $purpose;
  /** @var string[] */
  public $purposeData;
  /** @var string */
  public $shortName;
  /** @var string */
  public $updateTime;

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
  public function setNamespacedName($namespacedName)
  {
    $this->namespacedName = $namespacedName;
  }
  /** @return string */
  public function getNamespacedName()
  {
    return $this->namespacedName;
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
  public function setPurpose($purpose)
  {
    $this->purpose = $purpose;
  }
  /** @return string */
  public function getPurpose()
  {
    return $this->purpose;
  }
  /** @param string[] */
  public function setPurposeData($purposeData)
  {
    $this->purposeData = $purposeData;
  }
  /** @return string[] */
  public function getPurposeData()
  {
    return $this->purposeData;
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

class TagValue extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $name;
  /** @var string */
  public $namespacedName;
  /** @var string */
  public $parent;
  /** @var string */
  public $shortName;
  /** @var string */
  public $updateTime;

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
  public function setNamespacedName($namespacedName)
  {
    $this->namespacedName = $namespacedName;
  }
  /** @return string */
  public function getNamespacedName()
  {
    return $this->namespacedName;
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

class UndeleteFolderMetadata extends \Google\Model
{
}

class UndeleteFolderRequest extends \Google\Model
{
}

class UndeleteOrganizationMetadata extends \Google\Model
{
}

class UndeleteProjectMetadata extends \Google\Model
{
}

class UndeleteProjectRequest extends \Google\Model
{
}

class UpdateFolderMetadata extends \Google\Model
{
}

class UpdateProjectMetadata extends \Google\Model
{
}

class UpdateTagKeyMetadata extends \Google\Model
{
}

class UpdateTagValueMetadata extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditConfig::class, 'Google_Service_CloudResourceManager_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_CloudResourceManager_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_CloudResourceManager_Binding');
class_alias(CloudresourcemanagerEmpty::class, 'Google_Service_CloudResourceManager_CloudresourcemanagerEmpty');
class_alias(CloudresourcemanagerGoogleCloudResourcemanagerV2alpha1FolderOperation::class, 'Google_Service_CloudResourceManager_CloudresourcemanagerGoogleCloudResourcemanagerV2alpha1FolderOperation');
class_alias(CloudresourcemanagerGoogleCloudResourcemanagerV2beta1FolderOperation::class, 'Google_Service_CloudResourceManager_CloudresourcemanagerGoogleCloudResourcemanagerV2beta1FolderOperation');
class_alias(CreateFolderMetadata::class, 'Google_Service_CloudResourceManager_CreateFolderMetadata');
class_alias(CreateProjectMetadata::class, 'Google_Service_CloudResourceManager_CreateProjectMetadata');
class_alias(CreateTagBindingMetadata::class, 'Google_Service_CloudResourceManager_CreateTagBindingMetadata');
class_alias(CreateTagKeyMetadata::class, 'Google_Service_CloudResourceManager_CreateTagKeyMetadata');
class_alias(CreateTagValueMetadata::class, 'Google_Service_CloudResourceManager_CreateTagValueMetadata');
class_alias(DeleteFolderMetadata::class, 'Google_Service_CloudResourceManager_DeleteFolderMetadata');
class_alias(DeleteOrganizationMetadata::class, 'Google_Service_CloudResourceManager_DeleteOrganizationMetadata');
class_alias(DeleteProjectMetadata::class, 'Google_Service_CloudResourceManager_DeleteProjectMetadata');
class_alias(DeleteTagBindingMetadata::class, 'Google_Service_CloudResourceManager_DeleteTagBindingMetadata');
class_alias(DeleteTagKeyMetadata::class, 'Google_Service_CloudResourceManager_DeleteTagKeyMetadata');
class_alias(DeleteTagValueMetadata::class, 'Google_Service_CloudResourceManager_DeleteTagValueMetadata');
class_alias(EffectiveTag::class, 'Google_Service_CloudResourceManager_EffectiveTag');
class_alias(Expr::class, 'Google_Service_CloudResourceManager_Expr');
class_alias(Folder::class, 'Google_Service_CloudResourceManager_Folder');
class_alias(FolderOperation::class, 'Google_Service_CloudResourceManager_FolderOperation');
class_alias(FolderOperationError::class, 'Google_Service_CloudResourceManager_FolderOperationError');
class_alias(GetIamPolicyRequest::class, 'Google_Service_CloudResourceManager_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_CloudResourceManager_GetPolicyOptions');
class_alias(Lien::class, 'Google_Service_CloudResourceManager_Lien');
class_alias(ListEffectiveTagsResponse::class, 'Google_Service_CloudResourceManager_ListEffectiveTagsResponse');
class_alias(ListFoldersResponse::class, 'Google_Service_CloudResourceManager_ListFoldersResponse');
class_alias(ListLiensResponse::class, 'Google_Service_CloudResourceManager_ListLiensResponse');
class_alias(ListProjectsResponse::class, 'Google_Service_CloudResourceManager_ListProjectsResponse');
class_alias(ListTagBindingsResponse::class, 'Google_Service_CloudResourceManager_ListTagBindingsResponse');
class_alias(ListTagHoldsResponse::class, 'Google_Service_CloudResourceManager_ListTagHoldsResponse');
class_alias(ListTagKeysResponse::class, 'Google_Service_CloudResourceManager_ListTagKeysResponse');
class_alias(ListTagValuesResponse::class, 'Google_Service_CloudResourceManager_ListTagValuesResponse');
class_alias(MoveFolderMetadata::class, 'Google_Service_CloudResourceManager_MoveFolderMetadata');
class_alias(MoveFolderRequest::class, 'Google_Service_CloudResourceManager_MoveFolderRequest');
class_alias(MoveProjectMetadata::class, 'Google_Service_CloudResourceManager_MoveProjectMetadata');
class_alias(MoveProjectRequest::class, 'Google_Service_CloudResourceManager_MoveProjectRequest');
class_alias(Operation::class, 'Google_Service_CloudResourceManager_Operation');
class_alias(Organization::class, 'Google_Service_CloudResourceManager_Organization');
class_alias(Policy::class, 'Google_Service_CloudResourceManager_Policy');
class_alias(Project::class, 'Google_Service_CloudResourceManager_Project');
class_alias(ProjectCreationStatus::class, 'Google_Service_CloudResourceManager_ProjectCreationStatus');
class_alias(SearchFoldersResponse::class, 'Google_Service_CloudResourceManager_SearchFoldersResponse');
class_alias(SearchOrganizationsResponse::class, 'Google_Service_CloudResourceManager_SearchOrganizationsResponse');
class_alias(SearchProjectsResponse::class, 'Google_Service_CloudResourceManager_SearchProjectsResponse');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CloudResourceManager_SetIamPolicyRequest');
class_alias(Status::class, 'Google_Service_CloudResourceManager_Status');
class_alias(TagBinding::class, 'Google_Service_CloudResourceManager_TagBinding');
class_alias(TagHold::class, 'Google_Service_CloudResourceManager_TagHold');
class_alias(TagKey::class, 'Google_Service_CloudResourceManager_TagKey');
class_alias(TagValue::class, 'Google_Service_CloudResourceManager_TagValue');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CloudResourceManager_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CloudResourceManager_TestIamPermissionsResponse');
class_alias(UndeleteFolderMetadata::class, 'Google_Service_CloudResourceManager_UndeleteFolderMetadata');
class_alias(UndeleteFolderRequest::class, 'Google_Service_CloudResourceManager_UndeleteFolderRequest');
class_alias(UndeleteOrganizationMetadata::class, 'Google_Service_CloudResourceManager_UndeleteOrganizationMetadata');
class_alias(UndeleteProjectMetadata::class, 'Google_Service_CloudResourceManager_UndeleteProjectMetadata');
class_alias(UndeleteProjectRequest::class, 'Google_Service_CloudResourceManager_UndeleteProjectRequest');
class_alias(UpdateFolderMetadata::class, 'Google_Service_CloudResourceManager_UpdateFolderMetadata');
class_alias(UpdateProjectMetadata::class, 'Google_Service_CloudResourceManager_UpdateProjectMetadata');
class_alias(UpdateTagKeyMetadata::class, 'Google_Service_CloudResourceManager_UpdateTagKeyMetadata');
class_alias(UpdateTagValueMetadata::class, 'Google_Service_CloudResourceManager_UpdateTagValueMetadata');
