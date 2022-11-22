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

namespace Google\Service\Storage;

class Bucket extends \Google\Collection
{
  /** @var BucketAccessControl[] */
  public $acl;
  /** @var BucketAutoclass */
  public $autoclass;
  /** @var BucketBilling */
  public $billing;
  /** @var BucketCors[] */
  public $cors;
  /** @var BucketCustomPlacementConfig */
  public $customPlacementConfig;
  /** @var bool */
  public $defaultEventBasedHold;
  /** @var ObjectAccessControl[] */
  public $defaultObjectAcl;
  /** @var BucketEncryption */
  public $encryption;
  /** @var string */
  public $etag;
  /** @var BucketIamConfiguration */
  public $iamConfiguration;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var BucketLifecycle */
  public $lifecycle;
  /** @var string */
  public $location;
  /** @var string */
  public $locationType;
  /** @var BucketLogging */
  public $logging;
  /** @var string */
  public $metageneration;
  /** @var string */
  public $name;
  /** @var BucketOwner */
  public $owner;
  /** @var string */
  public $projectNumber;
  /** @var BucketRetentionPolicy */
  public $retentionPolicy;
  /** @var string */
  public $rpo;
  /** @var bool */
  public $satisfiesPZS;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $storageClass;
  /** @var string */
  public $timeCreated;
  /** @var string */
  public $updated;
  /** @var BucketVersioning */
  public $versioning;
  /** @var BucketWebsite */
  public $website;
  protected $collection_key = 'defaultObjectAcl';
  protected $aclType = BucketAccessControl::class;
  protected $aclDataType = 'array';
  protected $autoclassType = BucketAutoclass::class;
  protected $autoclassDataType = '';
  protected $billingType = BucketBilling::class;
  protected $billingDataType = '';
  protected $corsType = BucketCors::class;
  protected $corsDataType = 'array';
  protected $customPlacementConfigType = BucketCustomPlacementConfig::class;
  protected $customPlacementConfigDataType = '';
  protected $defaultObjectAclType = ObjectAccessControl::class;
  protected $defaultObjectAclDataType = 'array';
  protected $encryptionType = BucketEncryption::class;
  protected $encryptionDataType = '';
  protected $iamConfigurationType = BucketIamConfiguration::class;
  protected $iamConfigurationDataType = '';
  protected $lifecycleType = BucketLifecycle::class;
  protected $lifecycleDataType = '';
  protected $loggingType = BucketLogging::class;
  protected $loggingDataType = '';
  protected $ownerType = BucketOwner::class;
  protected $ownerDataType = '';
  protected $retentionPolicyType = BucketRetentionPolicy::class;
  protected $retentionPolicyDataType = '';
  protected $versioningType = BucketVersioning::class;
  protected $versioningDataType = '';
  protected $websiteType = BucketWebsite::class;
  protected $websiteDataType = '';
  /** @param BucketAccessControl[] */
  public function setAcl($acl)
  {
    $this->acl = $acl;
  }
  /** @return BucketAccessControl[] */
  public function getAcl()
  {
    return $this->acl;
  }
  /** @param BucketAutoclass */
  public function setAutoclass(BucketAutoclass $autoclass)
  {
    $this->autoclass = $autoclass;
  }
  /** @return BucketAutoclass */
  public function getAutoclass()
  {
    return $this->autoclass;
  }
  /** @param BucketBilling */
  public function setBilling(BucketBilling $billing)
  {
    $this->billing = $billing;
  }
  /** @return BucketBilling */
  public function getBilling()
  {
    return $this->billing;
  }
  /** @param BucketCors[] */
  public function setCors($cors)
  {
    $this->cors = $cors;
  }
  /** @return BucketCors[] */
  public function getCors()
  {
    return $this->cors;
  }
  /** @param BucketCustomPlacementConfig */
  public function setCustomPlacementConfig(BucketCustomPlacementConfig $customPlacementConfig)
  {
    $this->customPlacementConfig = $customPlacementConfig;
  }
  /** @return BucketCustomPlacementConfig */
  public function getCustomPlacementConfig()
  {
    return $this->customPlacementConfig;
  }
  /** @param bool */
  public function setDefaultEventBasedHold($defaultEventBasedHold)
  {
    $this->defaultEventBasedHold = $defaultEventBasedHold;
  }
  /** @return bool */
  public function getDefaultEventBasedHold()
  {
    return $this->defaultEventBasedHold;
  }
  /** @param ObjectAccessControl[] */
  public function setDefaultObjectAcl($defaultObjectAcl)
  {
    $this->defaultObjectAcl = $defaultObjectAcl;
  }
  /** @return ObjectAccessControl[] */
  public function getDefaultObjectAcl()
  {
    return $this->defaultObjectAcl;
  }
  /** @param BucketEncryption */
  public function setEncryption(BucketEncryption $encryption)
  {
    $this->encryption = $encryption;
  }
  /** @return BucketEncryption */
  public function getEncryption()
  {
    return $this->encryption;
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
  /** @param BucketIamConfiguration */
  public function setIamConfiguration(BucketIamConfiguration $iamConfiguration)
  {
    $this->iamConfiguration = $iamConfiguration;
  }
  /** @return BucketIamConfiguration */
  public function getIamConfiguration()
  {
    return $this->iamConfiguration;
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
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param BucketLifecycle */
  public function setLifecycle(BucketLifecycle $lifecycle)
  {
    $this->lifecycle = $lifecycle;
  }
  /** @return BucketLifecycle */
  public function getLifecycle()
  {
    return $this->lifecycle;
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
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /** @return string */
  public function getLocationType()
  {
    return $this->locationType;
  }
  /** @param BucketLogging */
  public function setLogging(BucketLogging $logging)
  {
    $this->logging = $logging;
  }
  /** @return BucketLogging */
  public function getLogging()
  {
    return $this->logging;
  }
  /** @param string */
  public function setMetageneration($metageneration)
  {
    $this->metageneration = $metageneration;
  }
  /** @return string */
  public function getMetageneration()
  {
    return $this->metageneration;
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
  /** @param BucketOwner */
  public function setOwner(BucketOwner $owner)
  {
    $this->owner = $owner;
  }
  /** @return BucketOwner */
  public function getOwner()
  {
    return $this->owner;
  }
  /** @param string */
  public function setProjectNumber($projectNumber)
  {
    $this->projectNumber = $projectNumber;
  }
  /** @return string */
  public function getProjectNumber()
  {
    return $this->projectNumber;
  }
  /** @param BucketRetentionPolicy */
  public function setRetentionPolicy(BucketRetentionPolicy $retentionPolicy)
  {
    $this->retentionPolicy = $retentionPolicy;
  }
  /** @return BucketRetentionPolicy */
  public function getRetentionPolicy()
  {
    return $this->retentionPolicy;
  }
  /** @param string */
  public function setRpo($rpo)
  {
    $this->rpo = $rpo;
  }
  /** @return string */
  public function getRpo()
  {
    return $this->rpo;
  }
  /** @param bool */
  public function setSatisfiesPZS($satisfiesPZS)
  {
    $this->satisfiesPZS = $satisfiesPZS;
  }
  /** @return bool */
  public function getSatisfiesPZS()
  {
    return $this->satisfiesPZS;
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
  public function setStorageClass($storageClass)
  {
    $this->storageClass = $storageClass;
  }
  /** @return string */
  public function getStorageClass()
  {
    return $this->storageClass;
  }
  /** @param string */
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  /** @return string */
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  /** @param string */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
  /** @param BucketVersioning */
  public function setVersioning(BucketVersioning $versioning)
  {
    $this->versioning = $versioning;
  }
  /** @return BucketVersioning */
  public function getVersioning()
  {
    return $this->versioning;
  }
  /** @param BucketWebsite */
  public function setWebsite(BucketWebsite $website)
  {
    $this->website = $website;
  }
  /** @return BucketWebsite */
  public function getWebsite()
  {
    return $this->website;
  }
}

class BucketAccessControl extends \Google\Model
{
  /** @var string */
  public $bucket;
  /** @var string */
  public $domain;
  /** @var string */
  public $email;
  /** @var string */
  public $entity;
  /** @var string */
  public $entityId;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var BucketAccessControlProjectTeam */
  public $projectTeam;
  /** @var string */
  public $role;
  /** @var string */
  public $selfLink;
  protected $projectTeamType = BucketAccessControlProjectTeam::class;
  protected $projectTeamDataType = '';
  /** @param string */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /** @return string */
  public function getBucket()
  {
    return $this->bucket;
  }
  /** @param string */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /** @return string */
  public function getDomain()
  {
    return $this->domain;
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
  public function setEntity($entity)
  {
    $this->entity = $entity;
  }
  /** @return string */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param string */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param BucketAccessControlProjectTeam */
  public function setProjectTeam(BucketAccessControlProjectTeam $projectTeam)
  {
    $this->projectTeam = $projectTeam;
  }
  /** @return BucketAccessControlProjectTeam */
  public function getProjectTeam()
  {
    return $this->projectTeam;
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
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
}

class BucketAccessControlProjectTeam extends \Google\Model
{
  /** @var string */
  public $projectNumber;
  /** @var string */
  public $team;

  /** @param string */
  public function setProjectNumber($projectNumber)
  {
    $this->projectNumber = $projectNumber;
  }
  /** @return string */
  public function getProjectNumber()
  {
    return $this->projectNumber;
  }
  /** @param string */
  public function setTeam($team)
  {
    $this->team = $team;
  }
  /** @return string */
  public function getTeam()
  {
    return $this->team;
  }
}

class BucketAccessControls extends \Google\Collection
{
  /** @var BucketAccessControl[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = BucketAccessControl::class;
  protected $itemsDataType = 'array';
  /** @param BucketAccessControl[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return BucketAccessControl[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class BucketAutoclass extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $toggleTime;

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
  public function setToggleTime($toggleTime)
  {
    $this->toggleTime = $toggleTime;
  }
  /** @return string */
  public function getToggleTime()
  {
    return $this->toggleTime;
  }
}

class BucketBilling extends \Google\Model
{
  /** @var bool */
  public $requesterPays;

  /** @param bool */
  public function setRequesterPays($requesterPays)
  {
    $this->requesterPays = $requesterPays;
  }
  /** @return bool */
  public function getRequesterPays()
  {
    return $this->requesterPays;
  }
}

class BucketCors extends \Google\Collection
{
  /** @var int */
  public $maxAgeSeconds;
  /** @var string[] */
  public $method;
  /** @var string[] */
  public $origin;
  /** @var string[] */
  public $responseHeader;
  protected $collection_key = 'responseHeader';
  /** @param int */
  public function setMaxAgeSeconds($maxAgeSeconds)
  {
    $this->maxAgeSeconds = $maxAgeSeconds;
  }
  /** @return int */
  public function getMaxAgeSeconds()
  {
    return $this->maxAgeSeconds;
  }
  /** @param string[] */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string[] */
  public function getMethod()
  {
    return $this->method;
  }
  /** @param string[] */
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }
  /** @return string[] */
  public function getOrigin()
  {
    return $this->origin;
  }
  /** @param string[] */
  public function setResponseHeader($responseHeader)
  {
    $this->responseHeader = $responseHeader;
  }
  /** @return string[] */
  public function getResponseHeader()
  {
    return $this->responseHeader;
  }
}

class BucketCustomPlacementConfig extends \Google\Collection
{
  /** @var string[] */
  public $dataLocations;
  protected $collection_key = 'dataLocations';
  /** @param string[] */
  public function setDataLocations($dataLocations)
  {
    $this->dataLocations = $dataLocations;
  }
  /** @return string[] */
  public function getDataLocations()
  {
    return $this->dataLocations;
  }
}

class BucketEncryption extends \Google\Model
{
  /** @var string */
  public $defaultKmsKeyName;

  /** @param string */
  public function setDefaultKmsKeyName($defaultKmsKeyName)
  {
    $this->defaultKmsKeyName = $defaultKmsKeyName;
  }
  /** @return string */
  public function getDefaultKmsKeyName()
  {
    return $this->defaultKmsKeyName;
  }
}

class BucketIamConfiguration extends \Google\Model
{
  /** @var BucketIamConfigurationBucketPolicyOnly */
  public $bucketPolicyOnly;
  /** @var string */
  public $publicAccessPrevention;
  /** @var BucketIamConfigurationUniformBucketLevelAccess */
  public $uniformBucketLevelAccess;
  protected $bucketPolicyOnlyType = BucketIamConfigurationBucketPolicyOnly::class;
  protected $bucketPolicyOnlyDataType = '';
  protected $uniformBucketLevelAccessType = BucketIamConfigurationUniformBucketLevelAccess::class;
  protected $uniformBucketLevelAccessDataType = '';
  /** @param BucketIamConfigurationBucketPolicyOnly */
  public function setBucketPolicyOnly(BucketIamConfigurationBucketPolicyOnly $bucketPolicyOnly)
  {
    $this->bucketPolicyOnly = $bucketPolicyOnly;
  }
  /** @return BucketIamConfigurationBucketPolicyOnly */
  public function getBucketPolicyOnly()
  {
    return $this->bucketPolicyOnly;
  }
  /** @param string */
  public function setPublicAccessPrevention($publicAccessPrevention)
  {
    $this->publicAccessPrevention = $publicAccessPrevention;
  }
  /** @return string */
  public function getPublicAccessPrevention()
  {
    return $this->publicAccessPrevention;
  }
  /** @param BucketIamConfigurationUniformBucketLevelAccess */
  public function setUniformBucketLevelAccess(BucketIamConfigurationUniformBucketLevelAccess $uniformBucketLevelAccess)
  {
    $this->uniformBucketLevelAccess = $uniformBucketLevelAccess;
  }
  /** @return BucketIamConfigurationUniformBucketLevelAccess */
  public function getUniformBucketLevelAccess()
  {
    return $this->uniformBucketLevelAccess;
  }
}

class BucketIamConfigurationBucketPolicyOnly extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $lockedTime;

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
  public function setLockedTime($lockedTime)
  {
    $this->lockedTime = $lockedTime;
  }
  /** @return string */
  public function getLockedTime()
  {
    return $this->lockedTime;
  }
}

class BucketIamConfigurationUniformBucketLevelAccess extends \Google\Model
{
  /** @var bool */
  public $enabled;
  /** @var string */
  public $lockedTime;

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
  public function setLockedTime($lockedTime)
  {
    $this->lockedTime = $lockedTime;
  }
  /** @return string */
  public function getLockedTime()
  {
    return $this->lockedTime;
  }
}

class BucketLifecycle extends \Google\Collection
{
  /** @var BucketLifecycleRule[] */
  public $rule;
  protected $collection_key = 'rule';
  protected $ruleType = BucketLifecycleRule::class;
  protected $ruleDataType = 'array';
  /** @param BucketLifecycleRule[] */
  public function setRule($rule)
  {
    $this->rule = $rule;
  }
  /** @return BucketLifecycleRule[] */
  public function getRule()
  {
    return $this->rule;
  }
}

class BucketLifecycleRule extends \Google\Model
{
  /** @var BucketLifecycleRuleAction */
  public $action;
  /** @var BucketLifecycleRuleCondition */
  public $condition;
  protected $actionType = BucketLifecycleRuleAction::class;
  protected $actionDataType = '';
  protected $conditionType = BucketLifecycleRuleCondition::class;
  protected $conditionDataType = '';
  /** @param BucketLifecycleRuleAction */
  public function setAction(BucketLifecycleRuleAction $action)
  {
    $this->action = $action;
  }
  /** @return BucketLifecycleRuleAction */
  public function getAction()
  {
    return $this->action;
  }
  /** @param BucketLifecycleRuleCondition */
  public function setCondition(BucketLifecycleRuleCondition $condition)
  {
    $this->condition = $condition;
  }
  /** @return BucketLifecycleRuleCondition */
  public function getCondition()
  {
    return $this->condition;
  }
}

class BucketLifecycleRuleAction extends \Google\Model
{
  /** @var string */
  public $storageClass;
  /** @var string */
  public $type;

  /** @param string */
  public function setStorageClass($storageClass)
  {
    $this->storageClass = $storageClass;
  }
  /** @return string */
  public function getStorageClass()
  {
    return $this->storageClass;
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

class BucketLifecycleRuleCondition extends \Google\Collection
{
  /** @var int */
  public $age;
  /** @var string */
  public $createdBefore;
  /** @var string */
  public $customTimeBefore;
  /** @var int */
  public $daysSinceCustomTime;
  /** @var int */
  public $daysSinceNoncurrentTime;
  /** @var bool */
  public $isLive;
  /** @var string */
  public $matchesPattern;
  /** @var string[] */
  public $matchesPrefix;
  /** @var string[] */
  public $matchesStorageClass;
  /** @var string[] */
  public $matchesSuffix;
  /** @var string */
  public $noncurrentTimeBefore;
  /** @var int */
  public $numNewerVersions;
  protected $collection_key = 'matchesSuffix';
  /** @param int */
  public function setAge($age)
  {
    $this->age = $age;
  }
  /** @return int */
  public function getAge()
  {
    return $this->age;
  }
  /** @param string */
  public function setCreatedBefore($createdBefore)
  {
    $this->createdBefore = $createdBefore;
  }
  /** @return string */
  public function getCreatedBefore()
  {
    return $this->createdBefore;
  }
  /** @param string */
  public function setCustomTimeBefore($customTimeBefore)
  {
    $this->customTimeBefore = $customTimeBefore;
  }
  /** @return string */
  public function getCustomTimeBefore()
  {
    return $this->customTimeBefore;
  }
  /** @param int */
  public function setDaysSinceCustomTime($daysSinceCustomTime)
  {
    $this->daysSinceCustomTime = $daysSinceCustomTime;
  }
  /** @return int */
  public function getDaysSinceCustomTime()
  {
    return $this->daysSinceCustomTime;
  }
  /** @param int */
  public function setDaysSinceNoncurrentTime($daysSinceNoncurrentTime)
  {
    $this->daysSinceNoncurrentTime = $daysSinceNoncurrentTime;
  }
  /** @return int */
  public function getDaysSinceNoncurrentTime()
  {
    return $this->daysSinceNoncurrentTime;
  }
  /** @param bool */
  public function setIsLive($isLive)
  {
    $this->isLive = $isLive;
  }
  /** @return bool */
  public function getIsLive()
  {
    return $this->isLive;
  }
  /** @param string */
  public function setMatchesPattern($matchesPattern)
  {
    $this->matchesPattern = $matchesPattern;
  }
  /** @return string */
  public function getMatchesPattern()
  {
    return $this->matchesPattern;
  }
  /** @param string[] */
  public function setMatchesPrefix($matchesPrefix)
  {
    $this->matchesPrefix = $matchesPrefix;
  }
  /** @return string[] */
  public function getMatchesPrefix()
  {
    return $this->matchesPrefix;
  }
  /** @param string[] */
  public function setMatchesStorageClass($matchesStorageClass)
  {
    $this->matchesStorageClass = $matchesStorageClass;
  }
  /** @return string[] */
  public function getMatchesStorageClass()
  {
    return $this->matchesStorageClass;
  }
  /** @param string[] */
  public function setMatchesSuffix($matchesSuffix)
  {
    $this->matchesSuffix = $matchesSuffix;
  }
  /** @return string[] */
  public function getMatchesSuffix()
  {
    return $this->matchesSuffix;
  }
  /** @param string */
  public function setNoncurrentTimeBefore($noncurrentTimeBefore)
  {
    $this->noncurrentTimeBefore = $noncurrentTimeBefore;
  }
  /** @return string */
  public function getNoncurrentTimeBefore()
  {
    return $this->noncurrentTimeBefore;
  }
  /** @param int */
  public function setNumNewerVersions($numNewerVersions)
  {
    $this->numNewerVersions = $numNewerVersions;
  }
  /** @return int */
  public function getNumNewerVersions()
  {
    return $this->numNewerVersions;
  }
}

class BucketLogging extends \Google\Model
{
  /** @var string */
  public $logBucket;
  /** @var string */
  public $logObjectPrefix;

  /** @param string */
  public function setLogBucket($logBucket)
  {
    $this->logBucket = $logBucket;
  }
  /** @return string */
  public function getLogBucket()
  {
    return $this->logBucket;
  }
  /** @param string */
  public function setLogObjectPrefix($logObjectPrefix)
  {
    $this->logObjectPrefix = $logObjectPrefix;
  }
  /** @return string */
  public function getLogObjectPrefix()
  {
    return $this->logObjectPrefix;
  }
}

class BucketOwner extends \Google\Model
{
  /** @var string */
  public $entity;
  /** @var string */
  public $entityId;

  /** @param string */
  public function setEntity($entity)
  {
    $this->entity = $entity;
  }
  /** @return string */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param string */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
}

class BucketRetentionPolicy extends \Google\Model
{
  /** @var string */
  public $effectiveTime;
  /** @var bool */
  public $isLocked;
  /** @var string */
  public $retentionPeriod;

  /** @param string */
  public function setEffectiveTime($effectiveTime)
  {
    $this->effectiveTime = $effectiveTime;
  }
  /** @return string */
  public function getEffectiveTime()
  {
    return $this->effectiveTime;
  }
  /** @param bool */
  public function setIsLocked($isLocked)
  {
    $this->isLocked = $isLocked;
  }
  /** @return bool */
  public function getIsLocked()
  {
    return $this->isLocked;
  }
  /** @param string */
  public function setRetentionPeriod($retentionPeriod)
  {
    $this->retentionPeriod = $retentionPeriod;
  }
  /** @return string */
  public function getRetentionPeriod()
  {
    return $this->retentionPeriod;
  }
}

class BucketVersioning extends \Google\Model
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

class BucketWebsite extends \Google\Model
{
  /** @var string */
  public $mainPageSuffix;
  /** @var string */
  public $notFoundPage;

  /** @param string */
  public function setMainPageSuffix($mainPageSuffix)
  {
    $this->mainPageSuffix = $mainPageSuffix;
  }
  /** @return string */
  public function getMainPageSuffix()
  {
    return $this->mainPageSuffix;
  }
  /** @param string */
  public function setNotFoundPage($notFoundPage)
  {
    $this->notFoundPage = $notFoundPage;
  }
  /** @return string */
  public function getNotFoundPage()
  {
    return $this->notFoundPage;
  }
}

class Buckets extends \Google\Collection
{
  /** @var Bucket[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = Bucket::class;
  protected $itemsDataType = 'array';
  /** @param Bucket[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Bucket[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class Channel extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string */
  public $expiration;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $params;
  /** @var bool */
  public $payload;
  /** @var string */
  public $resourceId;
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $token;
  /** @var string */
  public $type;

  /** @param string */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /** @return string */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param string */
  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
  }
  /** @return string */
  public function getExpiration()
  {
    return $this->expiration;
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
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return string[] */
  public function getParams()
  {
    return $this->params;
  }
  /** @param bool */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return bool */
  public function getPayload()
  {
    return $this->payload;
  }
  /** @param string */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return string */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /** @param string */
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /** @return string */
  public function getResourceUri()
  {
    return $this->resourceUri;
  }
  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
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

class ComposeRequest extends \Google\Collection
{
  /** @var StorageObject */
  public $destination;
  /** @var string */
  public $kind;
  /** @var ComposeRequestSourceObjects[] */
  public $sourceObjects;
  protected $collection_key = 'sourceObjects';
  protected $destinationType = StorageObject::class;
  protected $destinationDataType = '';
  protected $sourceObjectsType = ComposeRequestSourceObjects::class;
  protected $sourceObjectsDataType = 'array';
  /** @param StorageObject */
  public function setDestination(StorageObject $destination)
  {
    $this->destination = $destination;
  }
  /** @return StorageObject */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param ComposeRequestSourceObjects[] */
  public function setSourceObjects($sourceObjects)
  {
    $this->sourceObjects = $sourceObjects;
  }
  /** @return ComposeRequestSourceObjects[] */
  public function getSourceObjects()
  {
    return $this->sourceObjects;
  }
}

class ComposeRequestSourceObjects extends \Google\Model
{
  /** @var string */
  public $generation;
  /** @var string */
  public $name;
  /** @var ComposeRequestSourceObjectsObjectPreconditions */
  public $objectPreconditions;
  protected $objectPreconditionsType = ComposeRequestSourceObjectsObjectPreconditions::class;
  protected $objectPreconditionsDataType = '';
  /** @param string */
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /** @return string */
  public function getGeneration()
  {
    return $this->generation;
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
  /** @param ComposeRequestSourceObjectsObjectPreconditions */
  public function setObjectPreconditions(ComposeRequestSourceObjectsObjectPreconditions $objectPreconditions)
  {
    $this->objectPreconditions = $objectPreconditions;
  }
  /** @return ComposeRequestSourceObjectsObjectPreconditions */
  public function getObjectPreconditions()
  {
    return $this->objectPreconditions;
  }
}

class ComposeRequestSourceObjectsObjectPreconditions extends \Google\Model
{
  /** @var string */
  public $ifGenerationMatch;

  /** @param string */
  public function setIfGenerationMatch($ifGenerationMatch)
  {
    $this->ifGenerationMatch = $ifGenerationMatch;
  }
  /** @return string */
  public function getIfGenerationMatch()
  {
    return $this->ifGenerationMatch;
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

class HmacKey extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var HmacKeyMetadata */
  public $metadata;
  /** @var string */
  public $secret;
  protected $metadataType = HmacKeyMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param HmacKeyMetadata */
  public function setMetadata(HmacKeyMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return HmacKeyMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setSecret($secret)
  {
    $this->secret = $secret;
  }
  /** @return string */
  public function getSecret()
  {
    return $this->secret;
  }
}

class HmacKeyMetadata extends \Google\Model
{
  /** @var string */
  public $accessId;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $projectId;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $serviceAccountEmail;
  /** @var string */
  public $state;
  /** @var string */
  public $timeCreated;
  /** @var string */
  public $updated;

  /** @param string */
  public function setAccessId($accessId)
  {
    $this->accessId = $accessId;
  }
  /** @return string */
  public function getAccessId()
  {
    return $this->accessId;
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
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  /** @return string */
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  /** @param string */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class HmacKeysMetadata extends \Google\Collection
{
  /** @var HmacKeyMetadata[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'items';
  protected $itemsType = HmacKeyMetadata::class;
  protected $itemsDataType = 'array';
  /** @param HmacKeyMetadata[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return HmacKeyMetadata[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

class Notification extends \Google\Collection
{
  /** @var string[] */
  public $customAttributes;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $eventTypes;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $objectNamePrefix;
  /** @var string */
  public $payloadFormat;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $topic;
  protected $collection_key = 'event_types';
  protected $internal_gapi_mappings = [
        "customAttributes" => "custom_attributes",
        "eventTypes" => "event_types",
        "objectNamePrefix" => "object_name_prefix",
        "payloadFormat" => "payload_format",
  ];
  /** @param string[] */
  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }
  /** @return string[] */
  public function getCustomAttributes()
  {
    return $this->customAttributes;
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
  public function setEventTypes($eventTypes)
  {
    $this->eventTypes = $eventTypes;
  }
  /** @return string[] */
  public function getEventTypes()
  {
    return $this->eventTypes;
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
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setObjectNamePrefix($objectNamePrefix)
  {
    $this->objectNamePrefix = $objectNamePrefix;
  }
  /** @return string */
  public function getObjectNamePrefix()
  {
    return $this->objectNamePrefix;
  }
  /** @param string */
  public function setPayloadFormat($payloadFormat)
  {
    $this->payloadFormat = $payloadFormat;
  }
  /** @return string */
  public function getPayloadFormat()
  {
    return $this->payloadFormat;
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

class Notifications extends \Google\Collection
{
  /** @var Notification[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = Notification::class;
  protected $itemsDataType = 'array';
  /** @param Notification[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return Notification[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class ObjectAccessControl extends \Google\Model
{
  /** @var string */
  public $bucket;
  /** @var string */
  public $domain;
  /** @var string */
  public $email;
  /** @var string */
  public $entity;
  /** @var string */
  public $entityId;
  /** @var string */
  public $etag;
  /** @var string */
  public $generation;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $object;
  /** @var ObjectAccessControlProjectTeam */
  public $projectTeam;
  /** @var string */
  public $role;
  /** @var string */
  public $selfLink;
  protected $projectTeamType = ObjectAccessControlProjectTeam::class;
  protected $projectTeamDataType = '';
  /** @param string */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /** @return string */
  public function getBucket()
  {
    return $this->bucket;
  }
  /** @param string */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /** @return string */
  public function getDomain()
  {
    return $this->domain;
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
  public function setEntity($entity)
  {
    $this->entity = $entity;
  }
  /** @return string */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param string */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
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
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /** @return string */
  public function getGeneration()
  {
    return $this->generation;
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
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setObject($object)
  {
    $this->object = $object;
  }
  /** @return string */
  public function getObject()
  {
    return $this->object;
  }
  /** @param ObjectAccessControlProjectTeam */
  public function setProjectTeam(ObjectAccessControlProjectTeam $projectTeam)
  {
    $this->projectTeam = $projectTeam;
  }
  /** @return ObjectAccessControlProjectTeam */
  public function getProjectTeam()
  {
    return $this->projectTeam;
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
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
}

class ObjectAccessControlProjectTeam extends \Google\Model
{
  /** @var string */
  public $projectNumber;
  /** @var string */
  public $team;

  /** @param string */
  public function setProjectNumber($projectNumber)
  {
    $this->projectNumber = $projectNumber;
  }
  /** @return string */
  public function getProjectNumber()
  {
    return $this->projectNumber;
  }
  /** @param string */
  public function setTeam($team)
  {
    $this->team = $team;
  }
  /** @return string */
  public function getTeam()
  {
    return $this->team;
  }
}

class ObjectAccessControls extends \Google\Collection
{
  /** @var ObjectAccessControl[] */
  public $items;
  /** @var string */
  public $kind;
  protected $collection_key = 'items';
  protected $itemsType = ObjectAccessControl::class;
  protected $itemsDataType = 'array';
  /** @param ObjectAccessControl[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return ObjectAccessControl[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class Objects extends \Google\Collection
{
  /** @var StorageObject[] */
  public $items;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var string[] */
  public $prefixes;
  protected $collection_key = 'prefixes';
  protected $itemsType = StorageObject::class;
  protected $itemsDataType = 'array';
  /** @param StorageObject[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return StorageObject[] */
  public function getItems()
  {
    return $this->items;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param string[] */
  public function setPrefixes($prefixes)
  {
    $this->prefixes = $prefixes;
  }
  /** @return string[] */
  public function getPrefixes()
  {
    return $this->prefixes;
  }
}

class Policy extends \Google\Collection
{
  /** @var PolicyBindings[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $resourceId;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $bindingsType = PolicyBindings::class;
  protected $bindingsDataType = 'array';
  /** @param PolicyBindings[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return PolicyBindings[] */
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
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /** @return string */
  public function getResourceId()
  {
    return $this->resourceId;
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

class PolicyBindings extends \Google\Collection
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

class RewriteResponse extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var string */
  public $kind;
  /** @var string */
  public $objectSize;
  /** @var StorageObject */
  public $resource;
  /** @var string */
  public $rewriteToken;
  /** @var string */
  public $totalBytesRewritten;
  protected $resourceType = StorageObject::class;
  protected $resourceDataType = '';
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
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setObjectSize($objectSize)
  {
    $this->objectSize = $objectSize;
  }
  /** @return string */
  public function getObjectSize()
  {
    return $this->objectSize;
  }
  /** @param StorageObject */
  public function setResource(StorageObject $resource)
  {
    $this->resource = $resource;
  }
  /** @return StorageObject */
  public function getResource()
  {
    return $this->resource;
  }
  /** @param string */
  public function setRewriteToken($rewriteToken)
  {
    $this->rewriteToken = $rewriteToken;
  }
  /** @return string */
  public function getRewriteToken()
  {
    return $this->rewriteToken;
  }
  /** @param string */
  public function setTotalBytesRewritten($totalBytesRewritten)
  {
    $this->totalBytesRewritten = $totalBytesRewritten;
  }
  /** @return string */
  public function getTotalBytesRewritten()
  {
    return $this->totalBytesRewritten;
  }
}

class ServiceAccount extends \Google\Model
{
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $kind;
  protected $internal_gapi_mappings = [
        "emailAddress" => "email_address",
  ];
  /** @param string */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /** @return string */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class StorageObject extends \Google\Collection
{
  /** @var ObjectAccessControl[] */
  public $acl;
  /** @var string */
  public $bucket;
  /** @var string */
  public $cacheControl;
  /** @var int */
  public $componentCount;
  /** @var string */
  public $contentDisposition;
  /** @var string */
  public $contentEncoding;
  /** @var string */
  public $contentLanguage;
  /** @var string */
  public $contentType;
  /** @var string */
  public $crc32c;
  /** @var string */
  public $customTime;
  /** @var StorageObjectCustomerEncryption */
  public $customerEncryption;
  /** @var string */
  public $etag;
  /** @var bool */
  public $eventBasedHold;
  /** @var string */
  public $generation;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $kmsKeyName;
  /** @var string */
  public $md5Hash;
  /** @var string */
  public $mediaLink;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $metageneration;
  /** @var string */
  public $name;
  /** @var StorageObjectOwner */
  public $owner;
  /** @var string */
  public $retentionExpirationTime;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $size;
  /** @var string */
  public $storageClass;
  /** @var bool */
  public $temporaryHold;
  /** @var string */
  public $timeCreated;
  /** @var string */
  public $timeDeleted;
  /** @var string */
  public $timeStorageClassUpdated;
  /** @var string */
  public $updated;
  protected $collection_key = 'acl';
  protected $aclType = ObjectAccessControl::class;
  protected $aclDataType = 'array';
  protected $customerEncryptionType = StorageObjectCustomerEncryption::class;
  protected $customerEncryptionDataType = '';
  protected $ownerType = StorageObjectOwner::class;
  protected $ownerDataType = '';
  /** @param ObjectAccessControl[] */
  public function setAcl($acl)
  {
    $this->acl = $acl;
  }
  /** @return ObjectAccessControl[] */
  public function getAcl()
  {
    return $this->acl;
  }
  /** @param string */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /** @return string */
  public function getBucket()
  {
    return $this->bucket;
  }
  /** @param string */
  public function setCacheControl($cacheControl)
  {
    $this->cacheControl = $cacheControl;
  }
  /** @return string */
  public function getCacheControl()
  {
    return $this->cacheControl;
  }
  /** @param int */
  public function setComponentCount($componentCount)
  {
    $this->componentCount = $componentCount;
  }
  /** @return int */
  public function getComponentCount()
  {
    return $this->componentCount;
  }
  /** @param string */
  public function setContentDisposition($contentDisposition)
  {
    $this->contentDisposition = $contentDisposition;
  }
  /** @return string */
  public function getContentDisposition()
  {
    return $this->contentDisposition;
  }
  /** @param string */
  public function setContentEncoding($contentEncoding)
  {
    $this->contentEncoding = $contentEncoding;
  }
  /** @return string */
  public function getContentEncoding()
  {
    return $this->contentEncoding;
  }
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
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
  /** @param string */
  public function setCrc32c($crc32c)
  {
    $this->crc32c = $crc32c;
  }
  /** @return string */
  public function getCrc32c()
  {
    return $this->crc32c;
  }
  /** @param string */
  public function setCustomTime($customTime)
  {
    $this->customTime = $customTime;
  }
  /** @return string */
  public function getCustomTime()
  {
    return $this->customTime;
  }
  /** @param StorageObjectCustomerEncryption */
  public function setCustomerEncryption(StorageObjectCustomerEncryption $customerEncryption)
  {
    $this->customerEncryption = $customerEncryption;
  }
  /** @return StorageObjectCustomerEncryption */
  public function getCustomerEncryption()
  {
    return $this->customerEncryption;
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
  /** @param bool */
  public function setEventBasedHold($eventBasedHold)
  {
    $this->eventBasedHold = $eventBasedHold;
  }
  /** @return bool */
  public function getEventBasedHold()
  {
    return $this->eventBasedHold;
  }
  /** @param string */
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  /** @return string */
  public function getGeneration()
  {
    return $this->generation;
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
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
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
  /** @param string */
  public function setMd5Hash($md5Hash)
  {
    $this->md5Hash = $md5Hash;
  }
  /** @return string */
  public function getMd5Hash()
  {
    return $this->md5Hash;
  }
  /** @param string */
  public function setMediaLink($mediaLink)
  {
    $this->mediaLink = $mediaLink;
  }
  /** @return string */
  public function getMediaLink()
  {
    return $this->mediaLink;
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
  public function setMetageneration($metageneration)
  {
    $this->metageneration = $metageneration;
  }
  /** @return string */
  public function getMetageneration()
  {
    return $this->metageneration;
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
  /** @param StorageObjectOwner */
  public function setOwner(StorageObjectOwner $owner)
  {
    $this->owner = $owner;
  }
  /** @return StorageObjectOwner */
  public function getOwner()
  {
    return $this->owner;
  }
  /** @param string */
  public function setRetentionExpirationTime($retentionExpirationTime)
  {
    $this->retentionExpirationTime = $retentionExpirationTime;
  }
  /** @return string */
  public function getRetentionExpirationTime()
  {
    return $this->retentionExpirationTime;
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
  public function setStorageClass($storageClass)
  {
    $this->storageClass = $storageClass;
  }
  /** @return string */
  public function getStorageClass()
  {
    return $this->storageClass;
  }
  /** @param bool */
  public function setTemporaryHold($temporaryHold)
  {
    $this->temporaryHold = $temporaryHold;
  }
  /** @return bool */
  public function getTemporaryHold()
  {
    return $this->temporaryHold;
  }
  /** @param string */
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  /** @return string */
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  /** @param string */
  public function setTimeDeleted($timeDeleted)
  {
    $this->timeDeleted = $timeDeleted;
  }
  /** @return string */
  public function getTimeDeleted()
  {
    return $this->timeDeleted;
  }
  /** @param string */
  public function setTimeStorageClassUpdated($timeStorageClassUpdated)
  {
    $this->timeStorageClassUpdated = $timeStorageClassUpdated;
  }
  /** @return string */
  public function getTimeStorageClassUpdated()
  {
    return $this->timeStorageClassUpdated;
  }
  /** @param string */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /** @return string */
  public function getUpdated()
  {
    return $this->updated;
  }
}

class StorageObjectCustomerEncryption extends \Google\Model
{
  /** @var string */
  public $encryptionAlgorithm;
  /** @var string */
  public $keySha256;

  /** @param string */
  public function setEncryptionAlgorithm($encryptionAlgorithm)
  {
    $this->encryptionAlgorithm = $encryptionAlgorithm;
  }
  /** @return string */
  public function getEncryptionAlgorithm()
  {
    return $this->encryptionAlgorithm;
  }
  /** @param string */
  public function setKeySha256($keySha256)
  {
    $this->keySha256 = $keySha256;
  }
  /** @return string */
  public function getKeySha256()
  {
    return $this->keySha256;
  }
}

class StorageObjectOwner extends \Google\Model
{
  /** @var string */
  public $entity;
  /** @var string */
  public $entityId;

  /** @param string */
  public function setEntity($entity)
  {
    $this->entity = $entity;
  }
  /** @return string */
  public function getEntity()
  {
    return $this->entity;
  }
  /** @param string */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
}

class TestIamPermissionsResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Bucket::class, 'Google_Service_Storage_Bucket');
class_alias(BucketAccessControl::class, 'Google_Service_Storage_BucketAccessControl');
class_alias(BucketAccessControlProjectTeam::class, 'Google_Service_Storage_BucketAccessControlProjectTeam');
class_alias(BucketAccessControls::class, 'Google_Service_Storage_BucketAccessControls');
class_alias(BucketAutoclass::class, 'Google_Service_Storage_BucketAutoclass');
class_alias(BucketBilling::class, 'Google_Service_Storage_BucketBilling');
class_alias(BucketCors::class, 'Google_Service_Storage_BucketCors');
class_alias(BucketCustomPlacementConfig::class, 'Google_Service_Storage_BucketCustomPlacementConfig');
class_alias(BucketEncryption::class, 'Google_Service_Storage_BucketEncryption');
class_alias(BucketIamConfiguration::class, 'Google_Service_Storage_BucketIamConfiguration');
class_alias(BucketIamConfigurationBucketPolicyOnly::class, 'Google_Service_Storage_BucketIamConfigurationBucketPolicyOnly');
class_alias(BucketIamConfigurationUniformBucketLevelAccess::class, 'Google_Service_Storage_BucketIamConfigurationUniformBucketLevelAccess');
class_alias(BucketLifecycle::class, 'Google_Service_Storage_BucketLifecycle');
class_alias(BucketLifecycleRule::class, 'Google_Service_Storage_BucketLifecycleRule');
class_alias(BucketLifecycleRuleAction::class, 'Google_Service_Storage_BucketLifecycleRuleAction');
class_alias(BucketLifecycleRuleCondition::class, 'Google_Service_Storage_BucketLifecycleRuleCondition');
class_alias(BucketLogging::class, 'Google_Service_Storage_BucketLogging');
class_alias(BucketOwner::class, 'Google_Service_Storage_BucketOwner');
class_alias(BucketRetentionPolicy::class, 'Google_Service_Storage_BucketRetentionPolicy');
class_alias(BucketVersioning::class, 'Google_Service_Storage_BucketVersioning');
class_alias(BucketWebsite::class, 'Google_Service_Storage_BucketWebsite');
class_alias(Buckets::class, 'Google_Service_Storage_Buckets');
class_alias(Channel::class, 'Google_Service_Storage_Channel');
class_alias(ComposeRequest::class, 'Google_Service_Storage_ComposeRequest');
class_alias(ComposeRequestSourceObjects::class, 'Google_Service_Storage_ComposeRequestSourceObjects');
class_alias(ComposeRequestSourceObjectsObjectPreconditions::class, 'Google_Service_Storage_ComposeRequestSourceObjectsObjectPreconditions');
class_alias(Expr::class, 'Google_Service_Storage_Expr');
class_alias(HmacKey::class, 'Google_Service_Storage_HmacKey');
class_alias(HmacKeyMetadata::class, 'Google_Service_Storage_HmacKeyMetadata');
class_alias(HmacKeysMetadata::class, 'Google_Service_Storage_HmacKeysMetadata');
class_alias(Notification::class, 'Google_Service_Storage_Notification');
class_alias(Notifications::class, 'Google_Service_Storage_Notifications');
class_alias(ObjectAccessControl::class, 'Google_Service_Storage_ObjectAccessControl');
class_alias(ObjectAccessControlProjectTeam::class, 'Google_Service_Storage_ObjectAccessControlProjectTeam');
class_alias(ObjectAccessControls::class, 'Google_Service_Storage_ObjectAccessControls');
class_alias(Objects::class, 'Google_Service_Storage_Objects');
class_alias(Policy::class, 'Google_Service_Storage_Policy');
class_alias(PolicyBindings::class, 'Google_Service_Storage_PolicyBindings');
class_alias(RewriteResponse::class, 'Google_Service_Storage_RewriteResponse');
class_alias(ServiceAccount::class, 'Google_Service_Storage_ServiceAccount');
class_alias(StorageObject::class, 'Google_Service_Storage_StorageObject');
class_alias(StorageObjectCustomerEncryption::class, 'Google_Service_Storage_StorageObjectCustomerEncryption');
class_alias(StorageObjectOwner::class, 'Google_Service_Storage_StorageObjectOwner');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_Storage_TestIamPermissionsResponse');
