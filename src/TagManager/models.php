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

namespace Google\Service\TagManager;

class Account extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var AccountFeatures */
  public $features;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $name;
  /** @var string */
  public $path;
  /** @var bool */
  public $shareData;
  /** @var string */
  public $tagManagerUrl;
  protected $featuresType = AccountFeatures::class;
  protected $featuresDataType = '';
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
  /** @param AccountFeatures */
  public function setFeatures(AccountFeatures $features)
  {
    $this->features = $features;
  }
  /** @return AccountFeatures */
  public function getFeatures()
  {
    return $this->features;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
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
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param bool */
  public function setShareData($shareData)
  {
    $this->shareData = $shareData;
  }
  /** @return bool */
  public function getShareData()
  {
    return $this->shareData;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
}

class AccountAccess extends \Google\Model
{
  /** @var string */
  public $permission;

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

class AccountFeatures extends \Google\Model
{
  /** @var bool */
  public $supportMultipleContainers;
  /** @var bool */
  public $supportUserPermissions;

  /** @param bool */
  public function setSupportMultipleContainers($supportMultipleContainers)
  {
    $this->supportMultipleContainers = $supportMultipleContainers;
  }
  /** @return bool */
  public function getSupportMultipleContainers()
  {
    return $this->supportMultipleContainers;
  }
  /** @param bool */
  public function setSupportUserPermissions($supportUserPermissions)
  {
    $this->supportUserPermissions = $supportUserPermissions;
  }
  /** @return bool */
  public function getSupportUserPermissions()
  {
    return $this->supportUserPermissions;
  }
}

class BuiltInVariable extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $containerId;
  /** @var string */
  public $name;
  /** @var string */
  public $path;
  /** @var string */
  public $type;
  /** @var string */
  public $workspaceId;

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
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
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
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
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
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class Client extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $clientId;
  /** @var string */
  public $containerId;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var Parameter[] */
  public $parameter;
  /** @var string */
  public $parentFolderId;
  /** @var string */
  public $path;
  /** @var int */
  public $priority;
  /** @var string */
  public $tagManagerUrl;
  /** @var string */
  public $type;
  /** @var string */
  public $workspaceId;
  protected $collection_key = 'parameter';
  protected $parameterType = Parameter::class;
  protected $parameterDataType = 'array';
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
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param Parameter[] */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return Parameter[] */
  public function getParameter()
  {
    return $this->parameter;
  }
  /** @param string */
  public function setParentFolderId($parentFolderId)
  {
    $this->parentFolderId = $parentFolderId;
  }
  /** @return string */
  public function getParentFolderId()
  {
    return $this->parentFolderId;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param int */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return int */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
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
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class Condition extends \Google\Collection
{
  /** @var Parameter[] */
  public $parameter;
  /** @var string */
  public $type;
  protected $collection_key = 'parameter';
  protected $parameterType = Parameter::class;
  protected $parameterDataType = 'array';
  /** @param Parameter[] */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return Parameter[] */
  public function getParameter()
  {
    return $this->parameter;
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

class Container extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $containerId;
  /** @var string[] */
  public $domainName;
  /** @var ContainerFeatures */
  public $features;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var string */
  public $path;
  /** @var string */
  public $publicId;
  /** @var string[] */
  public $tagIds;
  /** @var string */
  public $tagManagerUrl;
  /** @var string[] */
  public $taggingServerUrls;
  /** @var string[] */
  public $usageContext;
  protected $collection_key = 'usageContext';
  protected $featuresType = ContainerFeatures::class;
  protected $featuresDataType = '';
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
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string[] */
  public function setDomainName($domainName)
  {
    $this->domainName = $domainName;
  }
  /** @return string[] */
  public function getDomainName()
  {
    return $this->domainName;
  }
  /** @param ContainerFeatures */
  public function setFeatures(ContainerFeatures $features)
  {
    $this->features = $features;
  }
  /** @return ContainerFeatures */
  public function getFeatures()
  {
    return $this->features;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setPublicId($publicId)
  {
    $this->publicId = $publicId;
  }
  /** @return string */
  public function getPublicId()
  {
    return $this->publicId;
  }
  /** @param string[] */
  public function setTagIds($tagIds)
  {
    $this->tagIds = $tagIds;
  }
  /** @return string[] */
  public function getTagIds()
  {
    return $this->tagIds;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
  /** @param string[] */
  public function setTaggingServerUrls($taggingServerUrls)
  {
    $this->taggingServerUrls = $taggingServerUrls;
  }
  /** @return string[] */
  public function getTaggingServerUrls()
  {
    return $this->taggingServerUrls;
  }
  /** @param string[] */
  public function setUsageContext($usageContext)
  {
    $this->usageContext = $usageContext;
  }
  /** @return string[] */
  public function getUsageContext()
  {
    return $this->usageContext;
  }
}

class ContainerAccess extends \Google\Model
{
  /** @var string */
  public $containerId;
  /** @var string */
  public $permission;

  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
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

class ContainerFeatures extends \Google\Model
{
  /** @var bool */
  public $supportBuiltInVariables;
  /** @var bool */
  public $supportClients;
  /** @var bool */
  public $supportEnvironments;
  /** @var bool */
  public $supportFolders;
  /** @var bool */
  public $supportGtagConfigs;
  /** @var bool */
  public $supportTags;
  /** @var bool */
  public $supportTemplates;
  /** @var bool */
  public $supportTriggers;
  /** @var bool */
  public $supportUserPermissions;
  /** @var bool */
  public $supportVariables;
  /** @var bool */
  public $supportVersions;
  /** @var bool */
  public $supportWorkspaces;
  /** @var bool */
  public $supportZones;

  /** @param bool */
  public function setSupportBuiltInVariables($supportBuiltInVariables)
  {
    $this->supportBuiltInVariables = $supportBuiltInVariables;
  }
  /** @return bool */
  public function getSupportBuiltInVariables()
  {
    return $this->supportBuiltInVariables;
  }
  /** @param bool */
  public function setSupportClients($supportClients)
  {
    $this->supportClients = $supportClients;
  }
  /** @return bool */
  public function getSupportClients()
  {
    return $this->supportClients;
  }
  /** @param bool */
  public function setSupportEnvironments($supportEnvironments)
  {
    $this->supportEnvironments = $supportEnvironments;
  }
  /** @return bool */
  public function getSupportEnvironments()
  {
    return $this->supportEnvironments;
  }
  /** @param bool */
  public function setSupportFolders($supportFolders)
  {
    $this->supportFolders = $supportFolders;
  }
  /** @return bool */
  public function getSupportFolders()
  {
    return $this->supportFolders;
  }
  /** @param bool */
  public function setSupportGtagConfigs($supportGtagConfigs)
  {
    $this->supportGtagConfigs = $supportGtagConfigs;
  }
  /** @return bool */
  public function getSupportGtagConfigs()
  {
    return $this->supportGtagConfigs;
  }
  /** @param bool */
  public function setSupportTags($supportTags)
  {
    $this->supportTags = $supportTags;
  }
  /** @return bool */
  public function getSupportTags()
  {
    return $this->supportTags;
  }
  /** @param bool */
  public function setSupportTemplates($supportTemplates)
  {
    $this->supportTemplates = $supportTemplates;
  }
  /** @return bool */
  public function getSupportTemplates()
  {
    return $this->supportTemplates;
  }
  /** @param bool */
  public function setSupportTriggers($supportTriggers)
  {
    $this->supportTriggers = $supportTriggers;
  }
  /** @return bool */
  public function getSupportTriggers()
  {
    return $this->supportTriggers;
  }
  /** @param bool */
  public function setSupportUserPermissions($supportUserPermissions)
  {
    $this->supportUserPermissions = $supportUserPermissions;
  }
  /** @return bool */
  public function getSupportUserPermissions()
  {
    return $this->supportUserPermissions;
  }
  /** @param bool */
  public function setSupportVariables($supportVariables)
  {
    $this->supportVariables = $supportVariables;
  }
  /** @return bool */
  public function getSupportVariables()
  {
    return $this->supportVariables;
  }
  /** @param bool */
  public function setSupportVersions($supportVersions)
  {
    $this->supportVersions = $supportVersions;
  }
  /** @return bool */
  public function getSupportVersions()
  {
    return $this->supportVersions;
  }
  /** @param bool */
  public function setSupportWorkspaces($supportWorkspaces)
  {
    $this->supportWorkspaces = $supportWorkspaces;
  }
  /** @return bool */
  public function getSupportWorkspaces()
  {
    return $this->supportWorkspaces;
  }
  /** @param bool */
  public function setSupportZones($supportZones)
  {
    $this->supportZones = $supportZones;
  }
  /** @return bool */
  public function getSupportZones()
  {
    return $this->supportZones;
  }
}

class ContainerVersion extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var BuiltInVariable[] */
  public $builtInVariable;
  /** @var Client[] */
  public $client;
  /** @var Container */
  public $container;
  /** @var string */
  public $containerId;
  /** @var string */
  public $containerVersionId;
  /** @var CustomTemplate[] */
  public $customTemplate;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $description;
  /** @var string */
  public $fingerprint;
  /** @var Folder[] */
  public $folder;
  /** @var GtagConfig[] */
  public $gtagConfig;
  /** @var string */
  public $name;
  /** @var string */
  public $path;
  /** @var Tag[] */
  public $tag;
  /** @var string */
  public $tagManagerUrl;
  /** @var Trigger[] */
  public $trigger;
  /** @var Variable[] */
  public $variable;
  /** @var Zone[] */
  public $zone;
  protected $collection_key = 'zone';
  protected $builtInVariableType = BuiltInVariable::class;
  protected $builtInVariableDataType = 'array';
  protected $clientType = Client::class;
  protected $clientDataType = 'array';
  protected $containerType = Container::class;
  protected $containerDataType = '';
  protected $customTemplateType = CustomTemplate::class;
  protected $customTemplateDataType = 'array';
  protected $folderType = Folder::class;
  protected $folderDataType = 'array';
  protected $gtagConfigType = GtagConfig::class;
  protected $gtagConfigDataType = 'array';
  protected $tagType = Tag::class;
  protected $tagDataType = 'array';
  protected $triggerType = Trigger::class;
  protected $triggerDataType = 'array';
  protected $variableType = Variable::class;
  protected $variableDataType = 'array';
  protected $zoneType = Zone::class;
  protected $zoneDataType = 'array';
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
  /** @param BuiltInVariable[] */
  public function setBuiltInVariable($builtInVariable)
  {
    $this->builtInVariable = $builtInVariable;
  }
  /** @return BuiltInVariable[] */
  public function getBuiltInVariable()
  {
    return $this->builtInVariable;
  }
  /** @param Client[] */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /** @return Client[] */
  public function getClient()
  {
    return $this->client;
  }
  /** @param Container */
  public function setContainer(Container $container)
  {
    $this->container = $container;
  }
  /** @return Container */
  public function getContainer()
  {
    return $this->container;
  }
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string */
  public function setContainerVersionId($containerVersionId)
  {
    $this->containerVersionId = $containerVersionId;
  }
  /** @return string */
  public function getContainerVersionId()
  {
    return $this->containerVersionId;
  }
  /** @param CustomTemplate[] */
  public function setCustomTemplate($customTemplate)
  {
    $this->customTemplate = $customTemplate;
  }
  /** @return CustomTemplate[] */
  public function getCustomTemplate()
  {
    return $this->customTemplate;
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
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /** @param Folder[] */
  public function setFolder($folder)
  {
    $this->folder = $folder;
  }
  /** @return Folder[] */
  public function getFolder()
  {
    return $this->folder;
  }
  /** @param GtagConfig[] */
  public function setGtagConfig($gtagConfig)
  {
    $this->gtagConfig = $gtagConfig;
  }
  /** @return GtagConfig[] */
  public function getGtagConfig()
  {
    return $this->gtagConfig;
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
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param Tag[] */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return Tag[] */
  public function getTag()
  {
    return $this->tag;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
  /** @param Trigger[] */
  public function setTrigger($trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return Trigger[] */
  public function getTrigger()
  {
    return $this->trigger;
  }
  /** @param Variable[] */
  public function setVariable($variable)
  {
    $this->variable = $variable;
  }
  /** @return Variable[] */
  public function getVariable()
  {
    return $this->variable;
  }
  /** @param Zone[] */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /** @return Zone[] */
  public function getZone()
  {
    return $this->zone;
  }
}

class ContainerVersionHeader extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $containerId;
  /** @var string */
  public $containerVersionId;
  /** @var bool */
  public $deleted;
  /** @var string */
  public $name;
  /** @var string */
  public $numClients;
  /** @var string */
  public $numCustomTemplates;
  /** @var string */
  public $numGtagConfigs;
  /** @var string */
  public $numMacros;
  /** @var string */
  public $numRules;
  /** @var string */
  public $numTags;
  /** @var string */
  public $numTriggers;
  /** @var string */
  public $numVariables;
  /** @var string */
  public $numZones;
  /** @var string */
  public $path;

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
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string */
  public function setContainerVersionId($containerVersionId)
  {
    $this->containerVersionId = $containerVersionId;
  }
  /** @return string */
  public function getContainerVersionId()
  {
    return $this->containerVersionId;
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
  public function setNumClients($numClients)
  {
    $this->numClients = $numClients;
  }
  /** @return string */
  public function getNumClients()
  {
    return $this->numClients;
  }
  /** @param string */
  public function setNumCustomTemplates($numCustomTemplates)
  {
    $this->numCustomTemplates = $numCustomTemplates;
  }
  /** @return string */
  public function getNumCustomTemplates()
  {
    return $this->numCustomTemplates;
  }
  /** @param string */
  public function setNumGtagConfigs($numGtagConfigs)
  {
    $this->numGtagConfigs = $numGtagConfigs;
  }
  /** @return string */
  public function getNumGtagConfigs()
  {
    return $this->numGtagConfigs;
  }
  /** @param string */
  public function setNumMacros($numMacros)
  {
    $this->numMacros = $numMacros;
  }
  /** @return string */
  public function getNumMacros()
  {
    return $this->numMacros;
  }
  /** @param string */
  public function setNumRules($numRules)
  {
    $this->numRules = $numRules;
  }
  /** @return string */
  public function getNumRules()
  {
    return $this->numRules;
  }
  /** @param string */
  public function setNumTags($numTags)
  {
    $this->numTags = $numTags;
  }
  /** @return string */
  public function getNumTags()
  {
    return $this->numTags;
  }
  /** @param string */
  public function setNumTriggers($numTriggers)
  {
    $this->numTriggers = $numTriggers;
  }
  /** @return string */
  public function getNumTriggers()
  {
    return $this->numTriggers;
  }
  /** @param string */
  public function setNumVariables($numVariables)
  {
    $this->numVariables = $numVariables;
  }
  /** @return string */
  public function getNumVariables()
  {
    return $this->numVariables;
  }
  /** @param string */
  public function setNumZones($numZones)
  {
    $this->numZones = $numZones;
  }
  /** @return string */
  public function getNumZones()
  {
    return $this->numZones;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
}

class CreateBuiltInVariableResponse extends \Google\Collection
{
  /** @var BuiltInVariable[] */
  public $builtInVariable;
  protected $collection_key = 'builtInVariable';
  protected $builtInVariableType = BuiltInVariable::class;
  protected $builtInVariableDataType = 'array';
  /** @param BuiltInVariable[] */
  public function setBuiltInVariable($builtInVariable)
  {
    $this->builtInVariable = $builtInVariable;
  }
  /** @return BuiltInVariable[] */
  public function getBuiltInVariable()
  {
    return $this->builtInVariable;
  }
}

class CreateContainerVersionRequestVersionOptions extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $notes;

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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
}

class CreateContainerVersionResponse extends \Google\Model
{
  /** @var bool */
  public $compilerError;
  /** @var ContainerVersion */
  public $containerVersion;
  /** @var string */
  public $newWorkspacePath;
  /** @var SyncStatus */
  public $syncStatus;
  protected $containerVersionType = ContainerVersion::class;
  protected $containerVersionDataType = '';
  protected $syncStatusType = SyncStatus::class;
  protected $syncStatusDataType = '';
  /** @param bool */
  public function setCompilerError($compilerError)
  {
    $this->compilerError = $compilerError;
  }
  /** @return bool */
  public function getCompilerError()
  {
    return $this->compilerError;
  }
  /** @param ContainerVersion */
  public function setContainerVersion(ContainerVersion $containerVersion)
  {
    $this->containerVersion = $containerVersion;
  }
  /** @return ContainerVersion */
  public function getContainerVersion()
  {
    return $this->containerVersion;
  }
  /** @param string */
  public function setNewWorkspacePath($newWorkspacePath)
  {
    $this->newWorkspacePath = $newWorkspacePath;
  }
  /** @return string */
  public function getNewWorkspacePath()
  {
    return $this->newWorkspacePath;
  }
  /** @param SyncStatus */
  public function setSyncStatus(SyncStatus $syncStatus)
  {
    $this->syncStatus = $syncStatus;
  }
  /** @return SyncStatus */
  public function getSyncStatus()
  {
    return $this->syncStatus;
  }
}

class CustomTemplate extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $containerId;
  /** @var string */
  public $fingerprint;
  /** @var GalleryReference */
  public $galleryReference;
  /** @var string */
  public $name;
  /** @var string */
  public $path;
  /** @var string */
  public $tagManagerUrl;
  /** @var string */
  public $templateData;
  /** @var string */
  public $templateId;
  /** @var string */
  public $workspaceId;
  protected $galleryReferenceType = GalleryReference::class;
  protected $galleryReferenceDataType = '';
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
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /** @param GalleryReference */
  public function setGalleryReference(GalleryReference $galleryReference)
  {
    $this->galleryReference = $galleryReference;
  }
  /** @return GalleryReference */
  public function getGalleryReference()
  {
    return $this->galleryReference;
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
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
  /** @param string */
  public function setTemplateData($templateData)
  {
    $this->templateData = $templateData;
  }
  /** @return string */
  public function getTemplateData()
  {
    return $this->templateData;
  }
  /** @param string */
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  /** @return string */
  public function getTemplateId()
  {
    return $this->templateId;
  }
  /** @param string */
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class Destination extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $containerId;
  /** @var string */
  public $destinationId;
  /** @var string */
  public $destinationLinkId;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $name;
  /** @var string */
  public $path;
  /** @var string */
  public $tagManagerUrl;

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
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string */
  public function setDestinationId($destinationId)
  {
    $this->destinationId = $destinationId;
  }
  /** @return string */
  public function getDestinationId()
  {
    return $this->destinationId;
  }
  /** @param string */
  public function setDestinationLinkId($destinationLinkId)
  {
    $this->destinationLinkId = $destinationLinkId;
  }
  /** @return string */
  public function getDestinationLinkId()
  {
    return $this->destinationLinkId;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
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
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
}

class Entity extends \Google\Model
{
  /** @var string */
  public $changeStatus;
  /** @var Client */
  public $client;
  /** @var Folder */
  public $folder;
  /** @var Tag */
  public $tag;
  /** @var Trigger */
  public $trigger;
  /** @var Variable */
  public $variable;
  protected $clientType = Client::class;
  protected $clientDataType = '';
  protected $folderType = Folder::class;
  protected $folderDataType = '';
  protected $tagType = Tag::class;
  protected $tagDataType = '';
  protected $triggerType = Trigger::class;
  protected $triggerDataType = '';
  protected $variableType = Variable::class;
  protected $variableDataType = '';
  /** @param string */
  public function setChangeStatus($changeStatus)
  {
    $this->changeStatus = $changeStatus;
  }
  /** @return string */
  public function getChangeStatus()
  {
    return $this->changeStatus;
  }
  /** @param Client */
  public function setClient(Client $client)
  {
    $this->client = $client;
  }
  /** @return Client */
  public function getClient()
  {
    return $this->client;
  }
  /** @param Folder */
  public function setFolder(Folder $folder)
  {
    $this->folder = $folder;
  }
  /** @return Folder */
  public function getFolder()
  {
    return $this->folder;
  }
  /** @param Tag */
  public function setTag(Tag $tag)
  {
    $this->tag = $tag;
  }
  /** @return Tag */
  public function getTag()
  {
    return $this->tag;
  }
  /** @param Trigger */
  public function setTrigger(Trigger $trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return Trigger */
  public function getTrigger()
  {
    return $this->trigger;
  }
  /** @param Variable */
  public function setVariable(Variable $variable)
  {
    $this->variable = $variable;
  }
  /** @return Variable */
  public function getVariable()
  {
    return $this->variable;
  }
}

class Environment extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $authorizationCode;
  /** @var string */
  public $authorizationTimestamp;
  /** @var string */
  public $containerId;
  /** @var string */
  public $containerVersionId;
  /** @var string */
  public $description;
  /** @var bool */
  public $enableDebug;
  /** @var string */
  public $environmentId;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $name;
  /** @var string */
  public $path;
  /** @var string */
  public $tagManagerUrl;
  /** @var string */
  public $type;
  /** @var string */
  public $url;
  /** @var string */
  public $workspaceId;

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
  /** @param string */
  public function setAuthorizationCode($authorizationCode)
  {
    $this->authorizationCode = $authorizationCode;
  }
  /** @return string */
  public function getAuthorizationCode()
  {
    return $this->authorizationCode;
  }
  /** @param string */
  public function setAuthorizationTimestamp($authorizationTimestamp)
  {
    $this->authorizationTimestamp = $authorizationTimestamp;
  }
  /** @return string */
  public function getAuthorizationTimestamp()
  {
    return $this->authorizationTimestamp;
  }
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string */
  public function setContainerVersionId($containerVersionId)
  {
    $this->containerVersionId = $containerVersionId;
  }
  /** @return string */
  public function getContainerVersionId()
  {
    return $this->containerVersionId;
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
  public function setEnableDebug($enableDebug)
  {
    $this->enableDebug = $enableDebug;
  }
  /** @return bool */
  public function getEnableDebug()
  {
    return $this->enableDebug;
  }
  /** @param string */
  public function setEnvironmentId($environmentId)
  {
    $this->environmentId = $environmentId;
  }
  /** @return string */
  public function getEnvironmentId()
  {
    return $this->environmentId;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
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
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
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
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class Folder extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $containerId;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $folderId;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var string */
  public $path;
  /** @var string */
  public $tagManagerUrl;
  /** @var string */
  public $workspaceId;

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
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /** @param string */
  public function setFolderId($folderId)
  {
    $this->folderId = $folderId;
  }
  /** @return string */
  public function getFolderId()
  {
    return $this->folderId;
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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
  /** @param string */
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class FolderEntities extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Tag[] */
  public $tag;
  /** @var Trigger[] */
  public $trigger;
  /** @var Variable[] */
  public $variable;
  protected $collection_key = 'variable';
  protected $tagType = Tag::class;
  protected $tagDataType = 'array';
  protected $triggerType = Trigger::class;
  protected $triggerDataType = 'array';
  protected $variableType = Variable::class;
  protected $variableDataType = 'array';
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
  /** @param Tag[] */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return Tag[] */
  public function getTag()
  {
    return $this->tag;
  }
  /** @param Trigger[] */
  public function setTrigger($trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return Trigger[] */
  public function getTrigger()
  {
    return $this->trigger;
  }
  /** @param Variable[] */
  public function setVariable($variable)
  {
    $this->variable = $variable;
  }
  /** @return Variable[] */
  public function getVariable()
  {
    return $this->variable;
  }
}

class GalleryReference extends \Google\Model
{
  /** @var string */
  public $host;
  /** @var bool */
  public $isModified;
  /** @var string */
  public $owner;
  /** @var string */
  public $repository;
  /** @var string */
  public $signature;
  /** @var string */
  public $version;

  /** @param string */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /** @return string */
  public function getHost()
  {
    return $this->host;
  }
  /** @param bool */
  public function setIsModified($isModified)
  {
    $this->isModified = $isModified;
  }
  /** @return bool */
  public function getIsModified()
  {
    return $this->isModified;
  }
  /** @param string */
  public function setOwner($owner)
  {
    $this->owner = $owner;
  }
  /** @return string */
  public function getOwner()
  {
    return $this->owner;
  }
  /** @param string */
  public function setRepository($repository)
  {
    $this->repository = $repository;
  }
  /** @return string */
  public function getRepository()
  {
    return $this->repository;
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

class GetContainerSnippetResponse extends \Google\Model
{
  /** @var string */
  public $snippet;

  /** @param string */
  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }
  /** @return string */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class GetWorkspaceStatusResponse extends \Google\Collection
{
  /** @var MergeConflict[] */
  public $mergeConflict;
  /** @var Entity[] */
  public $workspaceChange;
  protected $collection_key = 'workspaceChange';
  protected $mergeConflictType = MergeConflict::class;
  protected $mergeConflictDataType = 'array';
  protected $workspaceChangeType = Entity::class;
  protected $workspaceChangeDataType = 'array';
  /** @param MergeConflict[] */
  public function setMergeConflict($mergeConflict)
  {
    $this->mergeConflict = $mergeConflict;
  }
  /** @return MergeConflict[] */
  public function getMergeConflict()
  {
    return $this->mergeConflict;
  }
  /** @param Entity[] */
  public function setWorkspaceChange($workspaceChange)
  {
    $this->workspaceChange = $workspaceChange;
  }
  /** @return Entity[] */
  public function getWorkspaceChange()
  {
    return $this->workspaceChange;
  }
}

class GtagConfig extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $containerId;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $gtagConfigId;
  /** @var Parameter[] */
  public $parameter;
  /** @var string */
  public $path;
  /** @var string */
  public $tagManagerUrl;
  /** @var string */
  public $type;
  /** @var string */
  public $workspaceId;
  protected $collection_key = 'parameter';
  protected $parameterType = Parameter::class;
  protected $parameterDataType = 'array';
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
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /** @param string */
  public function setGtagConfigId($gtagConfigId)
  {
    $this->gtagConfigId = $gtagConfigId;
  }
  /** @return string */
  public function getGtagConfigId()
  {
    return $this->gtagConfigId;
  }
  /** @param Parameter[] */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return Parameter[] */
  public function getParameter()
  {
    return $this->parameter;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
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
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class ListAccountsResponse extends \Google\Collection
{
  /** @var Account[] */
  public $account;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'account';
  protected $accountType = Account::class;
  protected $accountDataType = 'array';
  /** @param Account[] */
  public function setAccount($account)
  {
    $this->account = $account;
  }
  /** @return Account[] */
  public function getAccount()
  {
    return $this->account;
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

class ListClientsResponse extends \Google\Collection
{
  /** @var Client[] */
  public $client;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'client';
  protected $clientType = Client::class;
  protected $clientDataType = 'array';
  /** @param Client[] */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /** @return Client[] */
  public function getClient()
  {
    return $this->client;
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

class ListContainerVersionsResponse extends \Google\Collection
{
  /** @var ContainerVersionHeader[] */
  public $containerVersionHeader;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'containerVersionHeader';
  protected $containerVersionHeaderType = ContainerVersionHeader::class;
  protected $containerVersionHeaderDataType = 'array';
  /** @param ContainerVersionHeader[] */
  public function setContainerVersionHeader($containerVersionHeader)
  {
    $this->containerVersionHeader = $containerVersionHeader;
  }
  /** @return ContainerVersionHeader[] */
  public function getContainerVersionHeader()
  {
    return $this->containerVersionHeader;
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

class ListContainersResponse extends \Google\Collection
{
  /** @var Container[] */
  public $container;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'container';
  protected $containerType = Container::class;
  protected $containerDataType = 'array';
  /** @param Container[] */
  public function setContainer($container)
  {
    $this->container = $container;
  }
  /** @return Container[] */
  public function getContainer()
  {
    return $this->container;
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

class ListDestinationsResponse extends \Google\Collection
{
  /** @var Destination[] */
  public $destination;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'destination';
  protected $destinationType = Destination::class;
  protected $destinationDataType = 'array';
  /** @param Destination[] */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return Destination[] */
  public function getDestination()
  {
    return $this->destination;
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

class ListEnabledBuiltInVariablesResponse extends \Google\Collection
{
  /** @var BuiltInVariable[] */
  public $builtInVariable;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'builtInVariable';
  protected $builtInVariableType = BuiltInVariable::class;
  protected $builtInVariableDataType = 'array';
  /** @param BuiltInVariable[] */
  public function setBuiltInVariable($builtInVariable)
  {
    $this->builtInVariable = $builtInVariable;
  }
  /** @return BuiltInVariable[] */
  public function getBuiltInVariable()
  {
    return $this->builtInVariable;
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

class ListEnvironmentsResponse extends \Google\Collection
{
  /** @var Environment[] */
  public $environment;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'environment';
  protected $environmentType = Environment::class;
  protected $environmentDataType = 'array';
  /** @param Environment[] */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return Environment[] */
  public function getEnvironment()
  {
    return $this->environment;
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
  public $folder;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'folder';
  protected $folderType = Folder::class;
  protected $folderDataType = 'array';
  /** @param Folder[] */
  public function setFolder($folder)
  {
    $this->folder = $folder;
  }
  /** @return Folder[] */
  public function getFolder()
  {
    return $this->folder;
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

class ListGtagConfigResponse extends \Google\Collection
{
  /** @var GtagConfig[] */
  public $gtagConfig;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'gtagConfig';
  protected $gtagConfigType = GtagConfig::class;
  protected $gtagConfigDataType = 'array';
  /** @param GtagConfig[] */
  public function setGtagConfig($gtagConfig)
  {
    $this->gtagConfig = $gtagConfig;
  }
  /** @return GtagConfig[] */
  public function getGtagConfig()
  {
    return $this->gtagConfig;
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

class ListTagsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Tag[] */
  public $tag;
  protected $collection_key = 'tag';
  protected $tagType = Tag::class;
  protected $tagDataType = 'array';
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
  /** @param Tag[] */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return Tag[] */
  public function getTag()
  {
    return $this->tag;
  }
}

class ListTemplatesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var CustomTemplate[] */
  public $template;
  protected $collection_key = 'template';
  protected $templateType = CustomTemplate::class;
  protected $templateDataType = 'array';
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
  /** @param CustomTemplate[] */
  public function setTemplate($template)
  {
    $this->template = $template;
  }
  /** @return CustomTemplate[] */
  public function getTemplate()
  {
    return $this->template;
  }
}

class ListTriggersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Trigger[] */
  public $trigger;
  protected $collection_key = 'trigger';
  protected $triggerType = Trigger::class;
  protected $triggerDataType = 'array';
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
  /** @param Trigger[] */
  public function setTrigger($trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return Trigger[] */
  public function getTrigger()
  {
    return $this->trigger;
  }
}

class ListUserPermissionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var UserPermission[] */
  public $userPermission;
  protected $collection_key = 'userPermission';
  protected $userPermissionType = UserPermission::class;
  protected $userPermissionDataType = 'array';
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
  /** @param UserPermission[] */
  public function setUserPermission($userPermission)
  {
    $this->userPermission = $userPermission;
  }
  /** @return UserPermission[] */
  public function getUserPermission()
  {
    return $this->userPermission;
  }
}

class ListVariablesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Variable[] */
  public $variable;
  protected $collection_key = 'variable';
  protected $variableType = Variable::class;
  protected $variableDataType = 'array';
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
  /** @param Variable[] */
  public function setVariable($variable)
  {
    $this->variable = $variable;
  }
  /** @return Variable[] */
  public function getVariable()
  {
    return $this->variable;
  }
}

class ListWorkspacesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Workspace[] */
  public $workspace;
  protected $collection_key = 'workspace';
  protected $workspaceType = Workspace::class;
  protected $workspaceDataType = 'array';
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
  /** @param Workspace[] */
  public function setWorkspace($workspace)
  {
    $this->workspace = $workspace;
  }
  /** @return Workspace[] */
  public function getWorkspace()
  {
    return $this->workspace;
  }
}

class ListZonesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Zone[] */
  public $zone;
  protected $collection_key = 'zone';
  protected $zoneType = Zone::class;
  protected $zoneDataType = 'array';
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
  /** @param Zone[] */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /** @return Zone[] */
  public function getZone()
  {
    return $this->zone;
  }
}

class MergeConflict extends \Google\Model
{
  /** @var Entity */
  public $entityInBaseVersion;
  /** @var Entity */
  public $entityInWorkspace;
  protected $entityInBaseVersionType = Entity::class;
  protected $entityInBaseVersionDataType = '';
  protected $entityInWorkspaceType = Entity::class;
  protected $entityInWorkspaceDataType = '';
  /** @param Entity */
  public function setEntityInBaseVersion(Entity $entityInBaseVersion)
  {
    $this->entityInBaseVersion = $entityInBaseVersion;
  }
  /** @return Entity */
  public function getEntityInBaseVersion()
  {
    return $this->entityInBaseVersion;
  }
  /** @param Entity */
  public function setEntityInWorkspace(Entity $entityInWorkspace)
  {
    $this->entityInWorkspace = $entityInWorkspace;
  }
  /** @return Entity */
  public function getEntityInWorkspace()
  {
    return $this->entityInWorkspace;
  }
}

class Parameter extends \Google\Collection
{
  /** @var string */
  public $key;
  /** @var Parameter[] */
  public $list;
  /** @var Parameter[] */
  public $map;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $collection_key = 'map';
  protected $listType = Parameter::class;
  protected $listDataType = 'array';
  protected $mapType = Parameter::class;
  protected $mapDataType = 'array';
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param Parameter[] */
  public function setList($list)
  {
    $this->list = $list;
  }
  /** @return Parameter[] */
  public function getList()
  {
    return $this->list;
  }
  /** @param Parameter[] */
  public function setMap($map)
  {
    $this->map = $map;
  }
  /** @return Parameter[] */
  public function getMap()
  {
    return $this->map;
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

class PublishContainerVersionResponse extends \Google\Model
{
  /** @var bool */
  public $compilerError;
  /** @var ContainerVersion */
  public $containerVersion;
  protected $containerVersionType = ContainerVersion::class;
  protected $containerVersionDataType = '';
  /** @param bool */
  public function setCompilerError($compilerError)
  {
    $this->compilerError = $compilerError;
  }
  /** @return bool */
  public function getCompilerError()
  {
    return $this->compilerError;
  }
  /** @param ContainerVersion */
  public function setContainerVersion(ContainerVersion $containerVersion)
  {
    $this->containerVersion = $containerVersion;
  }
  /** @return ContainerVersion */
  public function getContainerVersion()
  {
    return $this->containerVersion;
  }
}

class QuickPreviewResponse extends \Google\Model
{
  /** @var bool */
  public $compilerError;
  /** @var ContainerVersion */
  public $containerVersion;
  /** @var SyncStatus */
  public $syncStatus;
  protected $containerVersionType = ContainerVersion::class;
  protected $containerVersionDataType = '';
  protected $syncStatusType = SyncStatus::class;
  protected $syncStatusDataType = '';
  /** @param bool */
  public function setCompilerError($compilerError)
  {
    $this->compilerError = $compilerError;
  }
  /** @return bool */
  public function getCompilerError()
  {
    return $this->compilerError;
  }
  /** @param ContainerVersion */
  public function setContainerVersion(ContainerVersion $containerVersion)
  {
    $this->containerVersion = $containerVersion;
  }
  /** @return ContainerVersion */
  public function getContainerVersion()
  {
    return $this->containerVersion;
  }
  /** @param SyncStatus */
  public function setSyncStatus(SyncStatus $syncStatus)
  {
    $this->syncStatus = $syncStatus;
  }
  /** @return SyncStatus */
  public function getSyncStatus()
  {
    return $this->syncStatus;
  }
}

class RevertBuiltInVariableResponse extends \Google\Model
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

class RevertClientResponse extends \Google\Model
{
  /** @var Client */
  public $client;
  protected $clientType = Client::class;
  protected $clientDataType = '';
  /** @param Client */
  public function setClient(Client $client)
  {
    $this->client = $client;
  }
  /** @return Client */
  public function getClient()
  {
    return $this->client;
  }
}

class RevertFolderResponse extends \Google\Model
{
  /** @var Folder */
  public $folder;
  protected $folderType = Folder::class;
  protected $folderDataType = '';
  /** @param Folder */
  public function setFolder(Folder $folder)
  {
    $this->folder = $folder;
  }
  /** @return Folder */
  public function getFolder()
  {
    return $this->folder;
  }
}

class RevertTagResponse extends \Google\Model
{
  /** @var Tag */
  public $tag;
  protected $tagType = Tag::class;
  protected $tagDataType = '';
  /** @param Tag */
  public function setTag(Tag $tag)
  {
    $this->tag = $tag;
  }
  /** @return Tag */
  public function getTag()
  {
    return $this->tag;
  }
}

class RevertTemplateResponse extends \Google\Model
{
  /** @var CustomTemplate */
  public $template;
  protected $templateType = CustomTemplate::class;
  protected $templateDataType = '';
  /** @param CustomTemplate */
  public function setTemplate(CustomTemplate $template)
  {
    $this->template = $template;
  }
  /** @return CustomTemplate */
  public function getTemplate()
  {
    return $this->template;
  }
}

class RevertTriggerResponse extends \Google\Model
{
  /** @var Trigger */
  public $trigger;
  protected $triggerType = Trigger::class;
  protected $triggerDataType = '';
  /** @param Trigger */
  public function setTrigger(Trigger $trigger)
  {
    $this->trigger = $trigger;
  }
  /** @return Trigger */
  public function getTrigger()
  {
    return $this->trigger;
  }
}

class RevertVariableResponse extends \Google\Model
{
  /** @var Variable */
  public $variable;
  protected $variableType = Variable::class;
  protected $variableDataType = '';
  /** @param Variable */
  public function setVariable(Variable $variable)
  {
    $this->variable = $variable;
  }
  /** @return Variable */
  public function getVariable()
  {
    return $this->variable;
  }
}

class RevertZoneResponse extends \Google\Model
{
  /** @var Zone */
  public $zone;
  protected $zoneType = Zone::class;
  protected $zoneDataType = '';
  /** @param Zone */
  public function setZone(Zone $zone)
  {
    $this->zone = $zone;
  }
  /** @return Zone */
  public function getZone()
  {
    return $this->zone;
  }
}

class SetupTag extends \Google\Model
{
  /** @var bool */
  public $stopOnSetupFailure;
  /** @var string */
  public $tagName;

  /** @param bool */
  public function setStopOnSetupFailure($stopOnSetupFailure)
  {
    $this->stopOnSetupFailure = $stopOnSetupFailure;
  }
  /** @return bool */
  public function getStopOnSetupFailure()
  {
    return $this->stopOnSetupFailure;
  }
  /** @param string */
  public function setTagName($tagName)
  {
    $this->tagName = $tagName;
  }
  /** @return string */
  public function getTagName()
  {
    return $this->tagName;
  }
}

class SyncStatus extends \Google\Model
{
  /** @var bool */
  public $mergeConflict;
  /** @var bool */
  public $syncError;

  /** @param bool */
  public function setMergeConflict($mergeConflict)
  {
    $this->mergeConflict = $mergeConflict;
  }
  /** @return bool */
  public function getMergeConflict()
  {
    return $this->mergeConflict;
  }
  /** @param bool */
  public function setSyncError($syncError)
  {
    $this->syncError = $syncError;
  }
  /** @return bool */
  public function getSyncError()
  {
    return $this->syncError;
  }
}

class SyncWorkspaceResponse extends \Google\Collection
{
  /** @var MergeConflict[] */
  public $mergeConflict;
  /** @var SyncStatus */
  public $syncStatus;
  protected $collection_key = 'mergeConflict';
  protected $mergeConflictType = MergeConflict::class;
  protected $mergeConflictDataType = 'array';
  protected $syncStatusType = SyncStatus::class;
  protected $syncStatusDataType = '';
  /** @param MergeConflict[] */
  public function setMergeConflict($mergeConflict)
  {
    $this->mergeConflict = $mergeConflict;
  }
  /** @return MergeConflict[] */
  public function getMergeConflict()
  {
    return $this->mergeConflict;
  }
  /** @param SyncStatus */
  public function setSyncStatus(SyncStatus $syncStatus)
  {
    $this->syncStatus = $syncStatus;
  }
  /** @return SyncStatus */
  public function getSyncStatus()
  {
    return $this->syncStatus;
  }
}

class Tag extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string[] */
  public $blockingRuleId;
  /** @var string[] */
  public $blockingTriggerId;
  /** @var TagConsentSetting */
  public $consentSettings;
  /** @var string */
  public $containerId;
  /** @var string */
  public $fingerprint;
  /** @var string[] */
  public $firingRuleId;
  /** @var string[] */
  public $firingTriggerId;
  /** @var bool */
  public $liveOnly;
  /** @var Parameter */
  public $monitoringMetadata;
  /** @var string */
  public $monitoringMetadataTagNameKey;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var Parameter[] */
  public $parameter;
  /** @var string */
  public $parentFolderId;
  /** @var string */
  public $path;
  /** @var bool */
  public $paused;
  /** @var Parameter */
  public $priority;
  /** @var string */
  public $scheduleEndMs;
  /** @var string */
  public $scheduleStartMs;
  /** @var SetupTag[] */
  public $setupTag;
  /** @var string */
  public $tagFiringOption;
  /** @var string */
  public $tagId;
  /** @var string */
  public $tagManagerUrl;
  /** @var TeardownTag[] */
  public $teardownTag;
  /** @var string */
  public $type;
  /** @var string */
  public $workspaceId;
  protected $collection_key = 'teardownTag';
  protected $consentSettingsType = TagConsentSetting::class;
  protected $consentSettingsDataType = '';
  protected $monitoringMetadataType = Parameter::class;
  protected $monitoringMetadataDataType = '';
  protected $parameterType = Parameter::class;
  protected $parameterDataType = 'array';
  protected $priorityType = Parameter::class;
  protected $priorityDataType = '';
  protected $setupTagType = SetupTag::class;
  protected $setupTagDataType = 'array';
  protected $teardownTagType = TeardownTag::class;
  protected $teardownTagDataType = 'array';
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
  /** @param string[] */
  public function setBlockingRuleId($blockingRuleId)
  {
    $this->blockingRuleId = $blockingRuleId;
  }
  /** @return string[] */
  public function getBlockingRuleId()
  {
    return $this->blockingRuleId;
  }
  /** @param string[] */
  public function setBlockingTriggerId($blockingTriggerId)
  {
    $this->blockingTriggerId = $blockingTriggerId;
  }
  /** @return string[] */
  public function getBlockingTriggerId()
  {
    return $this->blockingTriggerId;
  }
  /** @param TagConsentSetting */
  public function setConsentSettings(TagConsentSetting $consentSettings)
  {
    $this->consentSettings = $consentSettings;
  }
  /** @return TagConsentSetting */
  public function getConsentSettings()
  {
    return $this->consentSettings;
  }
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /** @param string[] */
  public function setFiringRuleId($firingRuleId)
  {
    $this->firingRuleId = $firingRuleId;
  }
  /** @return string[] */
  public function getFiringRuleId()
  {
    return $this->firingRuleId;
  }
  /** @param string[] */
  public function setFiringTriggerId($firingTriggerId)
  {
    $this->firingTriggerId = $firingTriggerId;
  }
  /** @return string[] */
  public function getFiringTriggerId()
  {
    return $this->firingTriggerId;
  }
  /** @param bool */
  public function setLiveOnly($liveOnly)
  {
    $this->liveOnly = $liveOnly;
  }
  /** @return bool */
  public function getLiveOnly()
  {
    return $this->liveOnly;
  }
  /** @param Parameter */
  public function setMonitoringMetadata(Parameter $monitoringMetadata)
  {
    $this->monitoringMetadata = $monitoringMetadata;
  }
  /** @return Parameter */
  public function getMonitoringMetadata()
  {
    return $this->monitoringMetadata;
  }
  /** @param string */
  public function setMonitoringMetadataTagNameKey($monitoringMetadataTagNameKey)
  {
    $this->monitoringMetadataTagNameKey = $monitoringMetadataTagNameKey;
  }
  /** @return string */
  public function getMonitoringMetadataTagNameKey()
  {
    return $this->monitoringMetadataTagNameKey;
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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param Parameter[] */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return Parameter[] */
  public function getParameter()
  {
    return $this->parameter;
  }
  /** @param string */
  public function setParentFolderId($parentFolderId)
  {
    $this->parentFolderId = $parentFolderId;
  }
  /** @return string */
  public function getParentFolderId()
  {
    return $this->parentFolderId;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param bool */
  public function setPaused($paused)
  {
    $this->paused = $paused;
  }
  /** @return bool */
  public function getPaused()
  {
    return $this->paused;
  }
  /** @param Parameter */
  public function setPriority(Parameter $priority)
  {
    $this->priority = $priority;
  }
  /** @return Parameter */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string */
  public function setScheduleEndMs($scheduleEndMs)
  {
    $this->scheduleEndMs = $scheduleEndMs;
  }
  /** @return string */
  public function getScheduleEndMs()
  {
    return $this->scheduleEndMs;
  }
  /** @param string */
  public function setScheduleStartMs($scheduleStartMs)
  {
    $this->scheduleStartMs = $scheduleStartMs;
  }
  /** @return string */
  public function getScheduleStartMs()
  {
    return $this->scheduleStartMs;
  }
  /** @param SetupTag[] */
  public function setSetupTag($setupTag)
  {
    $this->setupTag = $setupTag;
  }
  /** @return SetupTag[] */
  public function getSetupTag()
  {
    return $this->setupTag;
  }
  /** @param string */
  public function setTagFiringOption($tagFiringOption)
  {
    $this->tagFiringOption = $tagFiringOption;
  }
  /** @return string */
  public function getTagFiringOption()
  {
    return $this->tagFiringOption;
  }
  /** @param string */
  public function setTagId($tagId)
  {
    $this->tagId = $tagId;
  }
  /** @return string */
  public function getTagId()
  {
    return $this->tagId;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
  /** @param TeardownTag[] */
  public function setTeardownTag($teardownTag)
  {
    $this->teardownTag = $teardownTag;
  }
  /** @return TeardownTag[] */
  public function getTeardownTag()
  {
    return $this->teardownTag;
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
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class TagConsentSetting extends \Google\Model
{
  /** @var string */
  public $consentStatus;
  /** @var Parameter */
  public $consentType;
  protected $consentTypeType = Parameter::class;
  protected $consentTypeDataType = '';
  /** @param string */
  public function setConsentStatus($consentStatus)
  {
    $this->consentStatus = $consentStatus;
  }
  /** @return string */
  public function getConsentStatus()
  {
    return $this->consentStatus;
  }
  /** @param Parameter */
  public function setConsentType(Parameter $consentType)
  {
    $this->consentType = $consentType;
  }
  /** @return Parameter */
  public function getConsentType()
  {
    return $this->consentType;
  }
}

class TeardownTag extends \Google\Model
{
  /** @var bool */
  public $stopTeardownOnFailure;
  /** @var string */
  public $tagName;

  /** @param bool */
  public function setStopTeardownOnFailure($stopTeardownOnFailure)
  {
    $this->stopTeardownOnFailure = $stopTeardownOnFailure;
  }
  /** @return bool */
  public function getStopTeardownOnFailure()
  {
    return $this->stopTeardownOnFailure;
  }
  /** @param string */
  public function setTagName($tagName)
  {
    $this->tagName = $tagName;
  }
  /** @return string */
  public function getTagName()
  {
    return $this->tagName;
  }
}

class Trigger extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var Condition[] */
  public $autoEventFilter;
  /** @var Parameter */
  public $checkValidation;
  /** @var string */
  public $containerId;
  /** @var Parameter */
  public $continuousTimeMinMilliseconds;
  /** @var Condition[] */
  public $customEventFilter;
  /** @var Parameter */
  public $eventName;
  /** @var Condition[] */
  public $filter;
  /** @var string */
  public $fingerprint;
  /** @var Parameter */
  public $horizontalScrollPercentageList;
  /** @var Parameter */
  public $interval;
  /** @var Parameter */
  public $intervalSeconds;
  /** @var Parameter */
  public $limit;
  /** @var Parameter */
  public $maxTimerLengthSeconds;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var Parameter[] */
  public $parameter;
  /** @var string */
  public $parentFolderId;
  /** @var string */
  public $path;
  /** @var Parameter */
  public $selector;
  /** @var string */
  public $tagManagerUrl;
  /** @var Parameter */
  public $totalTimeMinMilliseconds;
  /** @var string */
  public $triggerId;
  /** @var string */
  public $type;
  /** @var Parameter */
  public $uniqueTriggerId;
  /** @var Parameter */
  public $verticalScrollPercentageList;
  /** @var Parameter */
  public $visibilitySelector;
  /** @var Parameter */
  public $visiblePercentageMax;
  /** @var Parameter */
  public $visiblePercentageMin;
  /** @var Parameter */
  public $waitForTags;
  /** @var Parameter */
  public $waitForTagsTimeout;
  /** @var string */
  public $workspaceId;
  protected $collection_key = 'parameter';
  protected $autoEventFilterType = Condition::class;
  protected $autoEventFilterDataType = 'array';
  protected $checkValidationType = Parameter::class;
  protected $checkValidationDataType = '';
  protected $continuousTimeMinMillisecondsType = Parameter::class;
  protected $continuousTimeMinMillisecondsDataType = '';
  protected $customEventFilterType = Condition::class;
  protected $customEventFilterDataType = 'array';
  protected $eventNameType = Parameter::class;
  protected $eventNameDataType = '';
  protected $filterType = Condition::class;
  protected $filterDataType = 'array';
  protected $horizontalScrollPercentageListType = Parameter::class;
  protected $horizontalScrollPercentageListDataType = '';
  protected $intervalType = Parameter::class;
  protected $intervalDataType = '';
  protected $intervalSecondsType = Parameter::class;
  protected $intervalSecondsDataType = '';
  protected $limitType = Parameter::class;
  protected $limitDataType = '';
  protected $maxTimerLengthSecondsType = Parameter::class;
  protected $maxTimerLengthSecondsDataType = '';
  protected $parameterType = Parameter::class;
  protected $parameterDataType = 'array';
  protected $selectorType = Parameter::class;
  protected $selectorDataType = '';
  protected $totalTimeMinMillisecondsType = Parameter::class;
  protected $totalTimeMinMillisecondsDataType = '';
  protected $uniqueTriggerIdType = Parameter::class;
  protected $uniqueTriggerIdDataType = '';
  protected $verticalScrollPercentageListType = Parameter::class;
  protected $verticalScrollPercentageListDataType = '';
  protected $visibilitySelectorType = Parameter::class;
  protected $visibilitySelectorDataType = '';
  protected $visiblePercentageMaxType = Parameter::class;
  protected $visiblePercentageMaxDataType = '';
  protected $visiblePercentageMinType = Parameter::class;
  protected $visiblePercentageMinDataType = '';
  protected $waitForTagsType = Parameter::class;
  protected $waitForTagsDataType = '';
  protected $waitForTagsTimeoutType = Parameter::class;
  protected $waitForTagsTimeoutDataType = '';
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
  /** @param Condition[] */
  public function setAutoEventFilter($autoEventFilter)
  {
    $this->autoEventFilter = $autoEventFilter;
  }
  /** @return Condition[] */
  public function getAutoEventFilter()
  {
    return $this->autoEventFilter;
  }
  /** @param Parameter */
  public function setCheckValidation(Parameter $checkValidation)
  {
    $this->checkValidation = $checkValidation;
  }
  /** @return Parameter */
  public function getCheckValidation()
  {
    return $this->checkValidation;
  }
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param Parameter */
  public function setContinuousTimeMinMilliseconds(Parameter $continuousTimeMinMilliseconds)
  {
    $this->continuousTimeMinMilliseconds = $continuousTimeMinMilliseconds;
  }
  /** @return Parameter */
  public function getContinuousTimeMinMilliseconds()
  {
    return $this->continuousTimeMinMilliseconds;
  }
  /** @param Condition[] */
  public function setCustomEventFilter($customEventFilter)
  {
    $this->customEventFilter = $customEventFilter;
  }
  /** @return Condition[] */
  public function getCustomEventFilter()
  {
    return $this->customEventFilter;
  }
  /** @param Parameter */
  public function setEventName(Parameter $eventName)
  {
    $this->eventName = $eventName;
  }
  /** @return Parameter */
  public function getEventName()
  {
    return $this->eventName;
  }
  /** @param Condition[] */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return Condition[] */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /** @param Parameter */
  public function setHorizontalScrollPercentageList(Parameter $horizontalScrollPercentageList)
  {
    $this->horizontalScrollPercentageList = $horizontalScrollPercentageList;
  }
  /** @return Parameter */
  public function getHorizontalScrollPercentageList()
  {
    return $this->horizontalScrollPercentageList;
  }
  /** @param Parameter */
  public function setInterval(Parameter $interval)
  {
    $this->interval = $interval;
  }
  /** @return Parameter */
  public function getInterval()
  {
    return $this->interval;
  }
  /** @param Parameter */
  public function setIntervalSeconds(Parameter $intervalSeconds)
  {
    $this->intervalSeconds = $intervalSeconds;
  }
  /** @return Parameter */
  public function getIntervalSeconds()
  {
    return $this->intervalSeconds;
  }
  /** @param Parameter */
  public function setLimit(Parameter $limit)
  {
    $this->limit = $limit;
  }
  /** @return Parameter */
  public function getLimit()
  {
    return $this->limit;
  }
  /** @param Parameter */
  public function setMaxTimerLengthSeconds(Parameter $maxTimerLengthSeconds)
  {
    $this->maxTimerLengthSeconds = $maxTimerLengthSeconds;
  }
  /** @return Parameter */
  public function getMaxTimerLengthSeconds()
  {
    return $this->maxTimerLengthSeconds;
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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param Parameter[] */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return Parameter[] */
  public function getParameter()
  {
    return $this->parameter;
  }
  /** @param string */
  public function setParentFolderId($parentFolderId)
  {
    $this->parentFolderId = $parentFolderId;
  }
  /** @return string */
  public function getParentFolderId()
  {
    return $this->parentFolderId;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param Parameter */
  public function setSelector(Parameter $selector)
  {
    $this->selector = $selector;
  }
  /** @return Parameter */
  public function getSelector()
  {
    return $this->selector;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
  /** @param Parameter */
  public function setTotalTimeMinMilliseconds(Parameter $totalTimeMinMilliseconds)
  {
    $this->totalTimeMinMilliseconds = $totalTimeMinMilliseconds;
  }
  /** @return Parameter */
  public function getTotalTimeMinMilliseconds()
  {
    return $this->totalTimeMinMilliseconds;
  }
  /** @param string */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /** @return string */
  public function getTriggerId()
  {
    return $this->triggerId;
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
  /** @param Parameter */
  public function setUniqueTriggerId(Parameter $uniqueTriggerId)
  {
    $this->uniqueTriggerId = $uniqueTriggerId;
  }
  /** @return Parameter */
  public function getUniqueTriggerId()
  {
    return $this->uniqueTriggerId;
  }
  /** @param Parameter */
  public function setVerticalScrollPercentageList(Parameter $verticalScrollPercentageList)
  {
    $this->verticalScrollPercentageList = $verticalScrollPercentageList;
  }
  /** @return Parameter */
  public function getVerticalScrollPercentageList()
  {
    return $this->verticalScrollPercentageList;
  }
  /** @param Parameter */
  public function setVisibilitySelector(Parameter $visibilitySelector)
  {
    $this->visibilitySelector = $visibilitySelector;
  }
  /** @return Parameter */
  public function getVisibilitySelector()
  {
    return $this->visibilitySelector;
  }
  /** @param Parameter */
  public function setVisiblePercentageMax(Parameter $visiblePercentageMax)
  {
    $this->visiblePercentageMax = $visiblePercentageMax;
  }
  /** @return Parameter */
  public function getVisiblePercentageMax()
  {
    return $this->visiblePercentageMax;
  }
  /** @param Parameter */
  public function setVisiblePercentageMin(Parameter $visiblePercentageMin)
  {
    $this->visiblePercentageMin = $visiblePercentageMin;
  }
  /** @return Parameter */
  public function getVisiblePercentageMin()
  {
    return $this->visiblePercentageMin;
  }
  /** @param Parameter */
  public function setWaitForTags(Parameter $waitForTags)
  {
    $this->waitForTags = $waitForTags;
  }
  /** @return Parameter */
  public function getWaitForTags()
  {
    return $this->waitForTags;
  }
  /** @param Parameter */
  public function setWaitForTagsTimeout(Parameter $waitForTagsTimeout)
  {
    $this->waitForTagsTimeout = $waitForTagsTimeout;
  }
  /** @return Parameter */
  public function getWaitForTagsTimeout()
  {
    return $this->waitForTagsTimeout;
  }
  /** @param string */
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class UserPermission extends \Google\Collection
{
  /** @var AccountAccess */
  public $accountAccess;
  /** @var string */
  public $accountId;
  /** @var ContainerAccess[] */
  public $containerAccess;
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $path;
  protected $collection_key = 'containerAccess';
  protected $accountAccessType = AccountAccess::class;
  protected $accountAccessDataType = '';
  protected $containerAccessType = ContainerAccess::class;
  protected $containerAccessDataType = 'array';
  /** @param AccountAccess */
  public function setAccountAccess(AccountAccess $accountAccess)
  {
    $this->accountAccess = $accountAccess;
  }
  /** @return AccountAccess */
  public function getAccountAccess()
  {
    return $this->accountAccess;
  }
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
  /** @param ContainerAccess[] */
  public function setContainerAccess($containerAccess)
  {
    $this->containerAccess = $containerAccess;
  }
  /** @return ContainerAccess[] */
  public function getContainerAccess()
  {
    return $this->containerAccess;
  }
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
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
}

class Variable extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $containerId;
  /** @var string[] */
  public $disablingTriggerId;
  /** @var string[] */
  public $enablingTriggerId;
  /** @var string */
  public $fingerprint;
  /** @var VariableFormatValue */
  public $formatValue;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var Parameter[] */
  public $parameter;
  /** @var string */
  public $parentFolderId;
  /** @var string */
  public $path;
  /** @var string */
  public $scheduleEndMs;
  /** @var string */
  public $scheduleStartMs;
  /** @var string */
  public $tagManagerUrl;
  /** @var string */
  public $type;
  /** @var string */
  public $variableId;
  /** @var string */
  public $workspaceId;
  protected $collection_key = 'parameter';
  protected $formatValueType = VariableFormatValue::class;
  protected $formatValueDataType = '';
  protected $parameterType = Parameter::class;
  protected $parameterDataType = 'array';
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
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string[] */
  public function setDisablingTriggerId($disablingTriggerId)
  {
    $this->disablingTriggerId = $disablingTriggerId;
  }
  /** @return string[] */
  public function getDisablingTriggerId()
  {
    return $this->disablingTriggerId;
  }
  /** @param string[] */
  public function setEnablingTriggerId($enablingTriggerId)
  {
    $this->enablingTriggerId = $enablingTriggerId;
  }
  /** @return string[] */
  public function getEnablingTriggerId()
  {
    return $this->enablingTriggerId;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /** @param VariableFormatValue */
  public function setFormatValue(VariableFormatValue $formatValue)
  {
    $this->formatValue = $formatValue;
  }
  /** @return VariableFormatValue */
  public function getFormatValue()
  {
    return $this->formatValue;
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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param Parameter[] */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return Parameter[] */
  public function getParameter()
  {
    return $this->parameter;
  }
  /** @param string */
  public function setParentFolderId($parentFolderId)
  {
    $this->parentFolderId = $parentFolderId;
  }
  /** @return string */
  public function getParentFolderId()
  {
    return $this->parentFolderId;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setScheduleEndMs($scheduleEndMs)
  {
    $this->scheduleEndMs = $scheduleEndMs;
  }
  /** @return string */
  public function getScheduleEndMs()
  {
    return $this->scheduleEndMs;
  }
  /** @param string */
  public function setScheduleStartMs($scheduleStartMs)
  {
    $this->scheduleStartMs = $scheduleStartMs;
  }
  /** @return string */
  public function getScheduleStartMs()
  {
    return $this->scheduleStartMs;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
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
  public function setVariableId($variableId)
  {
    $this->variableId = $variableId;
  }
  /** @return string */
  public function getVariableId()
  {
    return $this->variableId;
  }
  /** @param string */
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class VariableFormatValue extends \Google\Model
{
  /** @var string */
  public $caseConversionType;
  /** @var Parameter */
  public $convertFalseToValue;
  /** @var Parameter */
  public $convertNullToValue;
  /** @var Parameter */
  public $convertTrueToValue;
  /** @var Parameter */
  public $convertUndefinedToValue;
  protected $convertFalseToValueType = Parameter::class;
  protected $convertFalseToValueDataType = '';
  protected $convertNullToValueType = Parameter::class;
  protected $convertNullToValueDataType = '';
  protected $convertTrueToValueType = Parameter::class;
  protected $convertTrueToValueDataType = '';
  protected $convertUndefinedToValueType = Parameter::class;
  protected $convertUndefinedToValueDataType = '';
  /** @param string */
  public function setCaseConversionType($caseConversionType)
  {
    $this->caseConversionType = $caseConversionType;
  }
  /** @return string */
  public function getCaseConversionType()
  {
    return $this->caseConversionType;
  }
  /** @param Parameter */
  public function setConvertFalseToValue(Parameter $convertFalseToValue)
  {
    $this->convertFalseToValue = $convertFalseToValue;
  }
  /** @return Parameter */
  public function getConvertFalseToValue()
  {
    return $this->convertFalseToValue;
  }
  /** @param Parameter */
  public function setConvertNullToValue(Parameter $convertNullToValue)
  {
    $this->convertNullToValue = $convertNullToValue;
  }
  /** @return Parameter */
  public function getConvertNullToValue()
  {
    return $this->convertNullToValue;
  }
  /** @param Parameter */
  public function setConvertTrueToValue(Parameter $convertTrueToValue)
  {
    $this->convertTrueToValue = $convertTrueToValue;
  }
  /** @return Parameter */
  public function getConvertTrueToValue()
  {
    return $this->convertTrueToValue;
  }
  /** @param Parameter */
  public function setConvertUndefinedToValue(Parameter $convertUndefinedToValue)
  {
    $this->convertUndefinedToValue = $convertUndefinedToValue;
  }
  /** @return Parameter */
  public function getConvertUndefinedToValue()
  {
    return $this->convertUndefinedToValue;
  }
}

class Workspace extends \Google\Model
{
  /** @var string */
  public $accountId;
  /** @var string */
  public $containerId;
  /** @var string */
  public $description;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $name;
  /** @var string */
  public $path;
  /** @var string */
  public $tagManagerUrl;
  /** @var string */
  public $workspaceId;

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
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
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
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
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
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
  /** @param string */
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class Zone extends \Google\Collection
{
  /** @var string */
  public $accountId;
  /** @var ZoneBoundary */
  public $boundary;
  /** @var ZoneChildContainer[] */
  public $childContainer;
  /** @var string */
  public $containerId;
  /** @var string */
  public $fingerprint;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var string */
  public $path;
  /** @var string */
  public $tagManagerUrl;
  /** @var ZoneTypeRestriction */
  public $typeRestriction;
  /** @var string */
  public $workspaceId;
  /** @var string */
  public $zoneId;
  protected $collection_key = 'childContainer';
  protected $boundaryType = ZoneBoundary::class;
  protected $boundaryDataType = '';
  protected $childContainerType = ZoneChildContainer::class;
  protected $childContainerDataType = 'array';
  protected $typeRestrictionType = ZoneTypeRestriction::class;
  protected $typeRestrictionDataType = '';
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
  /** @param ZoneBoundary */
  public function setBoundary(ZoneBoundary $boundary)
  {
    $this->boundary = $boundary;
  }
  /** @return ZoneBoundary */
  public function getBoundary()
  {
    return $this->boundary;
  }
  /** @param ZoneChildContainer[] */
  public function setChildContainer($childContainer)
  {
    $this->childContainer = $childContainer;
  }
  /** @return ZoneChildContainer[] */
  public function getChildContainer()
  {
    return $this->childContainer;
  }
  /** @param string */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /** @return string */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /** @param string */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return string */
  public function getFingerprint()
  {
    return $this->fingerprint;
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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param string */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return string */
  public function getPath()
  {
    return $this->path;
  }
  /** @param string */
  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }
  /** @return string */
  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }
  /** @param ZoneTypeRestriction */
  public function setTypeRestriction(ZoneTypeRestriction $typeRestriction)
  {
    $this->typeRestriction = $typeRestriction;
  }
  /** @return ZoneTypeRestriction */
  public function getTypeRestriction()
  {
    return $this->typeRestriction;
  }
  /** @param string */
  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return string */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
  /** @param string */
  public function setZoneId($zoneId)
  {
    $this->zoneId = $zoneId;
  }
  /** @return string */
  public function getZoneId()
  {
    return $this->zoneId;
  }
}

class ZoneBoundary extends \Google\Collection
{
  /** @var Condition[] */
  public $condition;
  /** @var string[] */
  public $customEvaluationTriggerId;
  protected $collection_key = 'customEvaluationTriggerId';
  protected $conditionType = Condition::class;
  protected $conditionDataType = 'array';
  /** @param Condition[] */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return Condition[] */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string[] */
  public function setCustomEvaluationTriggerId($customEvaluationTriggerId)
  {
    $this->customEvaluationTriggerId = $customEvaluationTriggerId;
  }
  /** @return string[] */
  public function getCustomEvaluationTriggerId()
  {
    return $this->customEvaluationTriggerId;
  }
}

class ZoneChildContainer extends \Google\Model
{
  /** @var string */
  public $nickname;
  /** @var string */
  public $publicId;

  /** @param string */
  public function setNickname($nickname)
  {
    $this->nickname = $nickname;
  }
  /** @return string */
  public function getNickname()
  {
    return $this->nickname;
  }
  /** @param string */
  public function setPublicId($publicId)
  {
    $this->publicId = $publicId;
  }
  /** @return string */
  public function getPublicId()
  {
    return $this->publicId;
  }
}

class ZoneTypeRestriction extends \Google\Collection
{
  /** @var bool */
  public $enable;
  /** @var string[] */
  public $whitelistedTypeId;
  protected $collection_key = 'whitelistedTypeId';
  /** @param bool */
  public function setEnable($enable)
  {
    $this->enable = $enable;
  }
  /** @return bool */
  public function getEnable()
  {
    return $this->enable;
  }
  /** @param string[] */
  public function setWhitelistedTypeId($whitelistedTypeId)
  {
    $this->whitelistedTypeId = $whitelistedTypeId;
  }
  /** @return string[] */
  public function getWhitelistedTypeId()
  {
    return $this->whitelistedTypeId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Account::class, 'Google_Service_TagManager_Account');
class_alias(AccountAccess::class, 'Google_Service_TagManager_AccountAccess');
class_alias(AccountFeatures::class, 'Google_Service_TagManager_AccountFeatures');
class_alias(BuiltInVariable::class, 'Google_Service_TagManager_BuiltInVariable');
class_alias(Client::class, 'Google_Service_TagManager_Client');
class_alias(Condition::class, 'Google_Service_TagManager_Condition');
class_alias(Container::class, 'Google_Service_TagManager_Container');
class_alias(ContainerAccess::class, 'Google_Service_TagManager_ContainerAccess');
class_alias(ContainerFeatures::class, 'Google_Service_TagManager_ContainerFeatures');
class_alias(ContainerVersion::class, 'Google_Service_TagManager_ContainerVersion');
class_alias(ContainerVersionHeader::class, 'Google_Service_TagManager_ContainerVersionHeader');
class_alias(CreateBuiltInVariableResponse::class, 'Google_Service_TagManager_CreateBuiltInVariableResponse');
class_alias(CreateContainerVersionRequestVersionOptions::class, 'Google_Service_TagManager_CreateContainerVersionRequestVersionOptions');
class_alias(CreateContainerVersionResponse::class, 'Google_Service_TagManager_CreateContainerVersionResponse');
class_alias(CustomTemplate::class, 'Google_Service_TagManager_CustomTemplate');
class_alias(Destination::class, 'Google_Service_TagManager_Destination');
class_alias(Entity::class, 'Google_Service_TagManager_Entity');
class_alias(Environment::class, 'Google_Service_TagManager_Environment');
class_alias(Folder::class, 'Google_Service_TagManager_Folder');
class_alias(FolderEntities::class, 'Google_Service_TagManager_FolderEntities');
class_alias(GalleryReference::class, 'Google_Service_TagManager_GalleryReference');
class_alias(GetContainerSnippetResponse::class, 'Google_Service_TagManager_GetContainerSnippetResponse');
class_alias(GetWorkspaceStatusResponse::class, 'Google_Service_TagManager_GetWorkspaceStatusResponse');
class_alias(GtagConfig::class, 'Google_Service_TagManager_GtagConfig');
class_alias(ListAccountsResponse::class, 'Google_Service_TagManager_ListAccountsResponse');
class_alias(ListClientsResponse::class, 'Google_Service_TagManager_ListClientsResponse');
class_alias(ListContainerVersionsResponse::class, 'Google_Service_TagManager_ListContainerVersionsResponse');
class_alias(ListContainersResponse::class, 'Google_Service_TagManager_ListContainersResponse');
class_alias(ListDestinationsResponse::class, 'Google_Service_TagManager_ListDestinationsResponse');
class_alias(ListEnabledBuiltInVariablesResponse::class, 'Google_Service_TagManager_ListEnabledBuiltInVariablesResponse');
class_alias(ListEnvironmentsResponse::class, 'Google_Service_TagManager_ListEnvironmentsResponse');
class_alias(ListFoldersResponse::class, 'Google_Service_TagManager_ListFoldersResponse');
class_alias(ListGtagConfigResponse::class, 'Google_Service_TagManager_ListGtagConfigResponse');
class_alias(ListTagsResponse::class, 'Google_Service_TagManager_ListTagsResponse');
class_alias(ListTemplatesResponse::class, 'Google_Service_TagManager_ListTemplatesResponse');
class_alias(ListTriggersResponse::class, 'Google_Service_TagManager_ListTriggersResponse');
class_alias(ListUserPermissionsResponse::class, 'Google_Service_TagManager_ListUserPermissionsResponse');
class_alias(ListVariablesResponse::class, 'Google_Service_TagManager_ListVariablesResponse');
class_alias(ListWorkspacesResponse::class, 'Google_Service_TagManager_ListWorkspacesResponse');
class_alias(ListZonesResponse::class, 'Google_Service_TagManager_ListZonesResponse');
class_alias(MergeConflict::class, 'Google_Service_TagManager_MergeConflict');
class_alias(Parameter::class, 'Google_Service_TagManager_Parameter');
class_alias(PublishContainerVersionResponse::class, 'Google_Service_TagManager_PublishContainerVersionResponse');
class_alias(QuickPreviewResponse::class, 'Google_Service_TagManager_QuickPreviewResponse');
class_alias(RevertBuiltInVariableResponse::class, 'Google_Service_TagManager_RevertBuiltInVariableResponse');
class_alias(RevertClientResponse::class, 'Google_Service_TagManager_RevertClientResponse');
class_alias(RevertFolderResponse::class, 'Google_Service_TagManager_RevertFolderResponse');
class_alias(RevertTagResponse::class, 'Google_Service_TagManager_RevertTagResponse');
class_alias(RevertTemplateResponse::class, 'Google_Service_TagManager_RevertTemplateResponse');
class_alias(RevertTriggerResponse::class, 'Google_Service_TagManager_RevertTriggerResponse');
class_alias(RevertVariableResponse::class, 'Google_Service_TagManager_RevertVariableResponse');
class_alias(RevertZoneResponse::class, 'Google_Service_TagManager_RevertZoneResponse');
class_alias(SetupTag::class, 'Google_Service_TagManager_SetupTag');
class_alias(SyncStatus::class, 'Google_Service_TagManager_SyncStatus');
class_alias(SyncWorkspaceResponse::class, 'Google_Service_TagManager_SyncWorkspaceResponse');
class_alias(Tag::class, 'Google_Service_TagManager_Tag');
class_alias(TagConsentSetting::class, 'Google_Service_TagManager_TagConsentSetting');
class_alias(TeardownTag::class, 'Google_Service_TagManager_TeardownTag');
class_alias(Trigger::class, 'Google_Service_TagManager_Trigger');
class_alias(UserPermission::class, 'Google_Service_TagManager_UserPermission');
class_alias(Variable::class, 'Google_Service_TagManager_Variable');
class_alias(VariableFormatValue::class, 'Google_Service_TagManager_VariableFormatValue');
class_alias(Workspace::class, 'Google_Service_TagManager_Workspace');
class_alias(Zone::class, 'Google_Service_TagManager_Zone');
class_alias(ZoneBoundary::class, 'Google_Service_TagManager_ZoneBoundary');
class_alias(ZoneChildContainer::class, 'Google_Service_TagManager_ZoneChildContainer');
class_alias(ZoneTypeRestriction::class, 'Google_Service_TagManager_ZoneTypeRestriction');
