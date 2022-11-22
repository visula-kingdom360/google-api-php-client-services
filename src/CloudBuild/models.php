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

namespace Google\Service\CloudBuild;

class ApprovalConfig extends \Google\Model
{
  /** @var bool */
  public $approvalRequired;

  /** @param bool */
  public function setApprovalRequired($approvalRequired)
  {
    $this->approvalRequired = $approvalRequired;
  }
  /** @return bool */
  public function getApprovalRequired()
  {
    return $this->approvalRequired;
  }
}

class ApprovalResult extends \Google\Model
{
  /** @var string */
  public $approvalTime;
  /** @var string */
  public $approverAccount;
  /** @var string */
  public $comment;
  /** @var string */
  public $decision;
  /** @var string */
  public $url;

  /** @param string */
  public function setApprovalTime($approvalTime)
  {
    $this->approvalTime = $approvalTime;
  }
  /** @return string */
  public function getApprovalTime()
  {
    return $this->approvalTime;
  }
  /** @param string */
  public function setApproverAccount($approverAccount)
  {
    $this->approverAccount = $approverAccount;
  }
  /** @return string */
  public function getApproverAccount()
  {
    return $this->approverAccount;
  }
  /** @param string */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /** @return string */
  public function getComment()
  {
    return $this->comment;
  }
  /** @param string */
  public function setDecision($decision)
  {
    $this->decision = $decision;
  }
  /** @return string */
  public function getDecision()
  {
    return $this->decision;
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

class ApproveBuildRequest extends \Google\Model
{
  /** @var ApprovalResult */
  public $approvalResult;
  protected $approvalResultType = ApprovalResult::class;
  protected $approvalResultDataType = '';
  /** @param ApprovalResult */
  public function setApprovalResult(ApprovalResult $approvalResult)
  {
    $this->approvalResult = $approvalResult;
  }
  /** @return ApprovalResult */
  public function getApprovalResult()
  {
    return $this->approvalResult;
  }
}

class ArtifactObjects extends \Google\Collection
{
  /** @var string */
  public $location;
  /** @var string[] */
  public $paths;
  /** @var TimeSpan */
  public $timing;
  protected $collection_key = 'paths';
  protected $timingType = TimeSpan::class;
  protected $timingDataType = '';
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
  /** @param string[] */
  public function setPaths($paths)
  {
    $this->paths = $paths;
  }
  /** @return string[] */
  public function getPaths()
  {
    return $this->paths;
  }
  /** @param TimeSpan */
  public function setTiming(TimeSpan $timing)
  {
    $this->timing = $timing;
  }
  /** @return TimeSpan */
  public function getTiming()
  {
    return $this->timing;
  }
}

class ArtifactResult extends \Google\Collection
{
  /** @var FileHashes[] */
  public $fileHash;
  /** @var string */
  public $location;
  protected $collection_key = 'fileHash';
  protected $fileHashType = FileHashes::class;
  protected $fileHashDataType = 'array';
  /** @param FileHashes[] */
  public function setFileHash($fileHash)
  {
    $this->fileHash = $fileHash;
  }
  /** @return FileHashes[] */
  public function getFileHash()
  {
    return $this->fileHash;
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

class Artifacts extends \Google\Collection
{
  /** @var string[] */
  public $images;
  /** @var MavenArtifact[] */
  public $mavenArtifacts;
  /** @var ArtifactObjects */
  public $objects;
  /** @var PythonPackage[] */
  public $pythonPackages;
  protected $collection_key = 'pythonPackages';
  protected $mavenArtifactsType = MavenArtifact::class;
  protected $mavenArtifactsDataType = 'array';
  protected $objectsType = ArtifactObjects::class;
  protected $objectsDataType = '';
  protected $pythonPackagesType = PythonPackage::class;
  protected $pythonPackagesDataType = 'array';
  /** @param string[] */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /** @return string[] */
  public function getImages()
  {
    return $this->images;
  }
  /** @param MavenArtifact[] */
  public function setMavenArtifacts($mavenArtifacts)
  {
    $this->mavenArtifacts = $mavenArtifacts;
  }
  /** @return MavenArtifact[] */
  public function getMavenArtifacts()
  {
    return $this->mavenArtifacts;
  }
  /** @param ArtifactObjects */
  public function setObjects(ArtifactObjects $objects)
  {
    $this->objects = $objects;
  }
  /** @return ArtifactObjects */
  public function getObjects()
  {
    return $this->objects;
  }
  /** @param PythonPackage[] */
  public function setPythonPackages($pythonPackages)
  {
    $this->pythonPackages = $pythonPackages;
  }
  /** @return PythonPackage[] */
  public function getPythonPackages()
  {
    return $this->pythonPackages;
  }
}

class BatchCreateBitbucketServerConnectedRepositoriesRequest extends \Google\Collection
{
  /** @var CreateBitbucketServerConnectedRepositoryRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = CreateBitbucketServerConnectedRepositoryRequest::class;
  protected $requestsDataType = 'array';
  /** @param CreateBitbucketServerConnectedRepositoryRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return CreateBitbucketServerConnectedRepositoryRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchCreateBitbucketServerConnectedRepositoriesResponse extends \Google\Collection
{
  /** @var BitbucketServerConnectedRepository[] */
  public $bitbucketServerConnectedRepositories;
  protected $collection_key = 'bitbucketServerConnectedRepositories';
  protected $bitbucketServerConnectedRepositoriesType = BitbucketServerConnectedRepository::class;
  protected $bitbucketServerConnectedRepositoriesDataType = 'array';
  /** @param BitbucketServerConnectedRepository[] */
  public function setBitbucketServerConnectedRepositories($bitbucketServerConnectedRepositories)
  {
    $this->bitbucketServerConnectedRepositories = $bitbucketServerConnectedRepositories;
  }
  /** @return BitbucketServerConnectedRepository[] */
  public function getBitbucketServerConnectedRepositories()
  {
    return $this->bitbucketServerConnectedRepositories;
  }
}

class BatchCreateBitbucketServerConnectedRepositoriesResponseMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $config;
  /** @var string */
  public $createTime;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
  }
  /** @param string */
  public function setConfig($config)
  {
    $this->config = $config;
  }
  /** @return string */
  public function getConfig()
  {
    return $this->config;
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
}

class BatchCreateGitLabConnectedRepositoriesRequest extends \Google\Collection
{
  /** @var CreateGitLabConnectedRepositoryRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = CreateGitLabConnectedRepositoryRequest::class;
  protected $requestsDataType = 'array';
  /** @param CreateGitLabConnectedRepositoryRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return CreateGitLabConnectedRepositoryRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchCreateGitLabConnectedRepositoriesResponse extends \Google\Collection
{
  /** @var GitLabConnectedRepository[] */
  public $gitlabConnectedRepositories;
  protected $collection_key = 'gitlabConnectedRepositories';
  protected $gitlabConnectedRepositoriesType = GitLabConnectedRepository::class;
  protected $gitlabConnectedRepositoriesDataType = 'array';
  /** @param GitLabConnectedRepository[] */
  public function setGitlabConnectedRepositories($gitlabConnectedRepositories)
  {
    $this->gitlabConnectedRepositories = $gitlabConnectedRepositories;
  }
  /** @return GitLabConnectedRepository[] */
  public function getGitlabConnectedRepositories()
  {
    return $this->gitlabConnectedRepositories;
  }
}

class BatchCreateGitLabConnectedRepositoriesResponseMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $config;
  /** @var string */
  public $createTime;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
  }
  /** @param string */
  public function setConfig($config)
  {
    $this->config = $config;
  }
  /** @return string */
  public function getConfig()
  {
    return $this->config;
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
}

class BitbucketServerConfig extends \Google\Collection
{
  /** @var string */
  public $apiKey;
  /** @var BitbucketServerRepositoryId[] */
  public $connectedRepositories;
  /** @var string */
  public $createTime;
  /** @var string */
  public $hostUri;
  /** @var string */
  public $name;
  /** @var string */
  public $peeredNetwork;
  /** @var BitbucketServerSecrets */
  public $secrets;
  /** @var string */
  public $sslCa;
  /** @var string */
  public $username;
  /** @var string */
  public $webhookKey;
  protected $collection_key = 'connectedRepositories';
  protected $connectedRepositoriesType = BitbucketServerRepositoryId::class;
  protected $connectedRepositoriesDataType = 'array';
  protected $secretsType = BitbucketServerSecrets::class;
  protected $secretsDataType = '';
  /** @param string */
  public function setApiKey($apiKey)
  {
    $this->apiKey = $apiKey;
  }
  /** @return string */
  public function getApiKey()
  {
    return $this->apiKey;
  }
  /** @param BitbucketServerRepositoryId[] */
  public function setConnectedRepositories($connectedRepositories)
  {
    $this->connectedRepositories = $connectedRepositories;
  }
  /** @return BitbucketServerRepositoryId[] */
  public function getConnectedRepositories()
  {
    return $this->connectedRepositories;
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
  public function setHostUri($hostUri)
  {
    $this->hostUri = $hostUri;
  }
  /** @return string */
  public function getHostUri()
  {
    return $this->hostUri;
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
  public function setPeeredNetwork($peeredNetwork)
  {
    $this->peeredNetwork = $peeredNetwork;
  }
  /** @return string */
  public function getPeeredNetwork()
  {
    return $this->peeredNetwork;
  }
  /** @param BitbucketServerSecrets */
  public function setSecrets(BitbucketServerSecrets $secrets)
  {
    $this->secrets = $secrets;
  }
  /** @return BitbucketServerSecrets */
  public function getSecrets()
  {
    return $this->secrets;
  }
  /** @param string */
  public function setSslCa($sslCa)
  {
    $this->sslCa = $sslCa;
  }
  /** @return string */
  public function getSslCa()
  {
    return $this->sslCa;
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
  /** @param string */
  public function setWebhookKey($webhookKey)
  {
    $this->webhookKey = $webhookKey;
  }
  /** @return string */
  public function getWebhookKey()
  {
    return $this->webhookKey;
  }
}

class BitbucketServerConnectedRepository extends \Google\Model
{
  /** @var string */
  public $parent;
  /** @var BitbucketServerRepositoryId */
  public $repo;
  /** @var Status */
  public $status;
  protected $repoType = BitbucketServerRepositoryId::class;
  protected $repoDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
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
  /** @param BitbucketServerRepositoryId */
  public function setRepo(BitbucketServerRepositoryId $repo)
  {
    $this->repo = $repo;
  }
  /** @return BitbucketServerRepositoryId */
  public function getRepo()
  {
    return $this->repo;
  }
  /** @param Status */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /** @return Status */
  public function getStatus()
  {
    return $this->status;
  }
}

class BitbucketServerRepository extends \Google\Model
{
  /** @var string */
  public $browseUri;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var BitbucketServerRepositoryId */
  public $repoId;
  protected $repoIdType = BitbucketServerRepositoryId::class;
  protected $repoIdDataType = '';
  /** @param string */
  public function setBrowseUri($browseUri)
  {
    $this->browseUri = $browseUri;
  }
  /** @return string */
  public function getBrowseUri()
  {
    return $this->browseUri;
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
  /** @param BitbucketServerRepositoryId */
  public function setRepoId(BitbucketServerRepositoryId $repoId)
  {
    $this->repoId = $repoId;
  }
  /** @return BitbucketServerRepositoryId */
  public function getRepoId()
  {
    return $this->repoId;
  }
}

class BitbucketServerRepositoryId extends \Google\Model
{
  /** @var string */
  public $projectKey;
  /** @var string */
  public $repoSlug;
  /** @var int */
  public $webhookId;

  /** @param string */
  public function setProjectKey($projectKey)
  {
    $this->projectKey = $projectKey;
  }
  /** @return string */
  public function getProjectKey()
  {
    return $this->projectKey;
  }
  /** @param string */
  public function setRepoSlug($repoSlug)
  {
    $this->repoSlug = $repoSlug;
  }
  /** @return string */
  public function getRepoSlug()
  {
    return $this->repoSlug;
  }
  /** @param int */
  public function setWebhookId($webhookId)
  {
    $this->webhookId = $webhookId;
  }
  /** @return int */
  public function getWebhookId()
  {
    return $this->webhookId;
  }
}

class BitbucketServerSecrets extends \Google\Model
{
  /** @var string */
  public $adminAccessTokenVersionName;
  /** @var string */
  public $readAccessTokenVersionName;
  /** @var string */
  public $webhookSecretVersionName;

  /** @param string */
  public function setAdminAccessTokenVersionName($adminAccessTokenVersionName)
  {
    $this->adminAccessTokenVersionName = $adminAccessTokenVersionName;
  }
  /** @return string */
  public function getAdminAccessTokenVersionName()
  {
    return $this->adminAccessTokenVersionName;
  }
  /** @param string */
  public function setReadAccessTokenVersionName($readAccessTokenVersionName)
  {
    $this->readAccessTokenVersionName = $readAccessTokenVersionName;
  }
  /** @return string */
  public function getReadAccessTokenVersionName()
  {
    return $this->readAccessTokenVersionName;
  }
  /** @param string */
  public function setWebhookSecretVersionName($webhookSecretVersionName)
  {
    $this->webhookSecretVersionName = $webhookSecretVersionName;
  }
  /** @return string */
  public function getWebhookSecretVersionName()
  {
    return $this->webhookSecretVersionName;
  }
}

class BitbucketServerTriggerConfig extends \Google\Model
{
  /** @var BitbucketServerConfig */
  public $bitbucketServerConfig;
  /** @var string */
  public $bitbucketServerConfigResource;
  /** @var string */
  public $projectKey;
  /** @var PullRequestFilter */
  public $pullRequest;
  /** @var PushFilter */
  public $push;
  /** @var string */
  public $repoSlug;
  protected $bitbucketServerConfigType = BitbucketServerConfig::class;
  protected $bitbucketServerConfigDataType = '';
  protected $pullRequestType = PullRequestFilter::class;
  protected $pullRequestDataType = '';
  protected $pushType = PushFilter::class;
  protected $pushDataType = '';
  /** @param BitbucketServerConfig */
  public function setBitbucketServerConfig(BitbucketServerConfig $bitbucketServerConfig)
  {
    $this->bitbucketServerConfig = $bitbucketServerConfig;
  }
  /** @return BitbucketServerConfig */
  public function getBitbucketServerConfig()
  {
    return $this->bitbucketServerConfig;
  }
  /** @param string */
  public function setBitbucketServerConfigResource($bitbucketServerConfigResource)
  {
    $this->bitbucketServerConfigResource = $bitbucketServerConfigResource;
  }
  /** @return string */
  public function getBitbucketServerConfigResource()
  {
    return $this->bitbucketServerConfigResource;
  }
  /** @param string */
  public function setProjectKey($projectKey)
  {
    $this->projectKey = $projectKey;
  }
  /** @return string */
  public function getProjectKey()
  {
    return $this->projectKey;
  }
  /** @param PullRequestFilter */
  public function setPullRequest(PullRequestFilter $pullRequest)
  {
    $this->pullRequest = $pullRequest;
  }
  /** @return PullRequestFilter */
  public function getPullRequest()
  {
    return $this->pullRequest;
  }
  /** @param PushFilter */
  public function setPush(PushFilter $push)
  {
    $this->push = $push;
  }
  /** @return PushFilter */
  public function getPush()
  {
    return $this->push;
  }
  /** @param string */
  public function setRepoSlug($repoSlug)
  {
    $this->repoSlug = $repoSlug;
  }
  /** @return string */
  public function getRepoSlug()
  {
    return $this->repoSlug;
  }
}

class Build extends \Google\Collection
{
  /** @var BuildApproval */
  public $approval;
  /** @var Artifacts */
  public $artifacts;
  /** @var Secrets */
  public $availableSecrets;
  /** @var string */
  public $buildTriggerId;
  /** @var string */
  public $createTime;
  /** @var FailureInfo */
  public $failureInfo;
  /** @var string */
  public $finishTime;
  /** @var string */
  public $id;
  /** @var string[] */
  public $images;
  /** @var string */
  public $logUrl;
  /** @var string */
  public $logsBucket;
  /** @var string */
  public $name;
  /** @var BuildOptions */
  public $options;
  /** @var string */
  public $projectId;
  /** @var string */
  public $queueTtl;
  /** @var Results */
  public $results;
  /** @var Secret[] */
  public $secrets;
  /** @var string */
  public $serviceAccount;
  /** @var Source */
  public $source;
  /** @var SourceProvenance */
  public $sourceProvenance;
  /** @var string */
  public $startTime;
  /** @var string */
  public $status;
  /** @var string */
  public $statusDetail;
  /** @var BuildStep[] */
  public $steps;
  /** @var string[] */
  public $substitutions;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $timeout;
  /** @var TimeSpan[] */
  public $timing;
  /** @var Warning[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $approvalType = BuildApproval::class;
  protected $approvalDataType = '';
  protected $artifactsType = Artifacts::class;
  protected $artifactsDataType = '';
  protected $availableSecretsType = Secrets::class;
  protected $availableSecretsDataType = '';
  protected $failureInfoType = FailureInfo::class;
  protected $failureInfoDataType = '';
  protected $optionsType = BuildOptions::class;
  protected $optionsDataType = '';
  protected $resultsType = Results::class;
  protected $resultsDataType = '';
  protected $secretsType = Secret::class;
  protected $secretsDataType = 'array';
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  protected $sourceProvenanceType = SourceProvenance::class;
  protected $sourceProvenanceDataType = '';
  protected $stepsType = BuildStep::class;
  protected $stepsDataType = 'array';
  protected $timingType = TimeSpan::class;
  protected $timingDataType = 'map';
  protected $warningsType = Warning::class;
  protected $warningsDataType = 'array';
  /** @param BuildApproval */
  public function setApproval(BuildApproval $approval)
  {
    $this->approval = $approval;
  }
  /** @return BuildApproval */
  public function getApproval()
  {
    return $this->approval;
  }
  /** @param Artifacts */
  public function setArtifacts(Artifacts $artifacts)
  {
    $this->artifacts = $artifacts;
  }
  /** @return Artifacts */
  public function getArtifacts()
  {
    return $this->artifacts;
  }
  /** @param Secrets */
  public function setAvailableSecrets(Secrets $availableSecrets)
  {
    $this->availableSecrets = $availableSecrets;
  }
  /** @return Secrets */
  public function getAvailableSecrets()
  {
    return $this->availableSecrets;
  }
  /** @param string */
  public function setBuildTriggerId($buildTriggerId)
  {
    $this->buildTriggerId = $buildTriggerId;
  }
  /** @return string */
  public function getBuildTriggerId()
  {
    return $this->buildTriggerId;
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
  /** @param FailureInfo */
  public function setFailureInfo(FailureInfo $failureInfo)
  {
    $this->failureInfo = $failureInfo;
  }
  /** @return FailureInfo */
  public function getFailureInfo()
  {
    return $this->failureInfo;
  }
  /** @param string */
  public function setFinishTime($finishTime)
  {
    $this->finishTime = $finishTime;
  }
  /** @return string */
  public function getFinishTime()
  {
    return $this->finishTime;
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
  /** @param string[] */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /** @return string[] */
  public function getImages()
  {
    return $this->images;
  }
  /** @param string */
  public function setLogUrl($logUrl)
  {
    $this->logUrl = $logUrl;
  }
  /** @return string */
  public function getLogUrl()
  {
    return $this->logUrl;
  }
  /** @param string */
  public function setLogsBucket($logsBucket)
  {
    $this->logsBucket = $logsBucket;
  }
  /** @return string */
  public function getLogsBucket()
  {
    return $this->logsBucket;
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
  /** @param BuildOptions */
  public function setOptions(BuildOptions $options)
  {
    $this->options = $options;
  }
  /** @return BuildOptions */
  public function getOptions()
  {
    return $this->options;
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
  public function setQueueTtl($queueTtl)
  {
    $this->queueTtl = $queueTtl;
  }
  /** @return string */
  public function getQueueTtl()
  {
    return $this->queueTtl;
  }
  /** @param Results */
  public function setResults(Results $results)
  {
    $this->results = $results;
  }
  /** @return Results */
  public function getResults()
  {
    return $this->results;
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
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
  /** @param SourceProvenance */
  public function setSourceProvenance(SourceProvenance $sourceProvenance)
  {
    $this->sourceProvenance = $sourceProvenance;
  }
  /** @return SourceProvenance */
  public function getSourceProvenance()
  {
    return $this->sourceProvenance;
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
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setStatusDetail($statusDetail)
  {
    $this->statusDetail = $statusDetail;
  }
  /** @return string */
  public function getStatusDetail()
  {
    return $this->statusDetail;
  }
  /** @param BuildStep[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return BuildStep[] */
  public function getSteps()
  {
    return $this->steps;
  }
  /** @param string[] */
  public function setSubstitutions($substitutions)
  {
    $this->substitutions = $substitutions;
  }
  /** @return string[] */
  public function getSubstitutions()
  {
    return $this->substitutions;
  }
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
  /** @param string */
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
  }
  /** @param TimeSpan[] */
  public function setTiming($timing)
  {
    $this->timing = $timing;
  }
  /** @return TimeSpan[] */
  public function getTiming()
  {
    return $this->timing;
  }
  /** @param Warning[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return Warning[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class BuildApproval extends \Google\Model
{
  /** @var ApprovalConfig */
  public $config;
  /** @var ApprovalResult */
  public $result;
  /** @var string */
  public $state;
  protected $configType = ApprovalConfig::class;
  protected $configDataType = '';
  protected $resultType = ApprovalResult::class;
  protected $resultDataType = '';
  /** @param ApprovalConfig */
  public function setConfig(ApprovalConfig $config)
  {
    $this->config = $config;
  }
  /** @return ApprovalConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param ApprovalResult */
  public function setResult(ApprovalResult $result)
  {
    $this->result = $result;
  }
  /** @return ApprovalResult */
  public function getResult()
  {
    return $this->result;
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

class BuildOperationMetadata extends \Google\Model
{
  /** @var Build */
  public $build;
  protected $buildType = Build::class;
  protected $buildDataType = '';
  /** @param Build */
  public function setBuild(Build $build)
  {
    $this->build = $build;
  }
  /** @return Build */
  public function getBuild()
  {
    return $this->build;
  }
}

class BuildOptions extends \Google\Collection
{
  /** @var string */
  public $diskSizeGb;
  /** @var bool */
  public $dynamicSubstitutions;
  /** @var string[] */
  public $env;
  /** @var string */
  public $logStreamingOption;
  /** @var string */
  public $logging;
  /** @var string */
  public $machineType;
  /** @var PoolOption */
  public $pool;
  /** @var string */
  public $requestedVerifyOption;
  /** @var string[] */
  public $secretEnv;
  /** @var string[] */
  public $sourceProvenanceHash;
  /** @var string */
  public $substitutionOption;
  /** @var Volume[] */
  public $volumes;
  /** @var string */
  public $workerPool;
  protected $collection_key = 'volumes';
  protected $poolType = PoolOption::class;
  protected $poolDataType = '';
  protected $volumesType = Volume::class;
  protected $volumesDataType = 'array';
  /** @param string */
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  /** @return string */
  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }
  /** @param bool */
  public function setDynamicSubstitutions($dynamicSubstitutions)
  {
    $this->dynamicSubstitutions = $dynamicSubstitutions;
  }
  /** @return bool */
  public function getDynamicSubstitutions()
  {
    return $this->dynamicSubstitutions;
  }
  /** @param string[] */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /** @return string[] */
  public function getEnv()
  {
    return $this->env;
  }
  /** @param string */
  public function setLogStreamingOption($logStreamingOption)
  {
    $this->logStreamingOption = $logStreamingOption;
  }
  /** @return string */
  public function getLogStreamingOption()
  {
    return $this->logStreamingOption;
  }
  /** @param string */
  public function setLogging($logging)
  {
    $this->logging = $logging;
  }
  /** @return string */
  public function getLogging()
  {
    return $this->logging;
  }
  /** @param string */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /** @param PoolOption */
  public function setPool(PoolOption $pool)
  {
    $this->pool = $pool;
  }
  /** @return PoolOption */
  public function getPool()
  {
    return $this->pool;
  }
  /** @param string */
  public function setRequestedVerifyOption($requestedVerifyOption)
  {
    $this->requestedVerifyOption = $requestedVerifyOption;
  }
  /** @return string */
  public function getRequestedVerifyOption()
  {
    return $this->requestedVerifyOption;
  }
  /** @param string[] */
  public function setSecretEnv($secretEnv)
  {
    $this->secretEnv = $secretEnv;
  }
  /** @return string[] */
  public function getSecretEnv()
  {
    return $this->secretEnv;
  }
  /** @param string[] */
  public function setSourceProvenanceHash($sourceProvenanceHash)
  {
    $this->sourceProvenanceHash = $sourceProvenanceHash;
  }
  /** @return string[] */
  public function getSourceProvenanceHash()
  {
    return $this->sourceProvenanceHash;
  }
  /** @param string */
  public function setSubstitutionOption($substitutionOption)
  {
    $this->substitutionOption = $substitutionOption;
  }
  /** @return string */
  public function getSubstitutionOption()
  {
    return $this->substitutionOption;
  }
  /** @param Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
  /** @param string */
  public function setWorkerPool($workerPool)
  {
    $this->workerPool = $workerPool;
  }
  /** @return string */
  public function getWorkerPool()
  {
    return $this->workerPool;
  }
}

class BuildStep extends \Google\Collection
{
  /** @var int[] */
  public $allowExitCodes;
  /** @var bool */
  public $allowFailure;
  /** @var string[] */
  public $args;
  /** @var string */
  public $dir;
  /** @var string */
  public $entrypoint;
  /** @var string[] */
  public $env;
  /** @var int */
  public $exitCode;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var TimeSpan */
  public $pullTiming;
  /** @var string */
  public $script;
  /** @var string[] */
  public $secretEnv;
  /** @var string */
  public $status;
  /** @var string */
  public $timeout;
  /** @var TimeSpan */
  public $timing;
  /** @var Volume[] */
  public $volumes;
  /** @var string[] */
  public $waitFor;
  protected $collection_key = 'waitFor';
  protected $pullTimingType = TimeSpan::class;
  protected $pullTimingDataType = '';
  protected $timingType = TimeSpan::class;
  protected $timingDataType = '';
  protected $volumesType = Volume::class;
  protected $volumesDataType = 'array';
  /** @param int[] */
  public function setAllowExitCodes($allowExitCodes)
  {
    $this->allowExitCodes = $allowExitCodes;
  }
  /** @return int[] */
  public function getAllowExitCodes()
  {
    return $this->allowExitCodes;
  }
  /** @param bool */
  public function setAllowFailure($allowFailure)
  {
    $this->allowFailure = $allowFailure;
  }
  /** @return bool */
  public function getAllowFailure()
  {
    return $this->allowFailure;
  }
  /** @param string[] */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /** @return string[] */
  public function getArgs()
  {
    return $this->args;
  }
  /** @param string */
  public function setDir($dir)
  {
    $this->dir = $dir;
  }
  /** @return string */
  public function getDir()
  {
    return $this->dir;
  }
  /** @param string */
  public function setEntrypoint($entrypoint)
  {
    $this->entrypoint = $entrypoint;
  }
  /** @return string */
  public function getEntrypoint()
  {
    return $this->entrypoint;
  }
  /** @param string[] */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /** @return string[] */
  public function getEnv()
  {
    return $this->env;
  }
  /** @param int */
  public function setExitCode($exitCode)
  {
    $this->exitCode = $exitCode;
  }
  /** @return int */
  public function getExitCode()
  {
    return $this->exitCode;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param TimeSpan */
  public function setPullTiming(TimeSpan $pullTiming)
  {
    $this->pullTiming = $pullTiming;
  }
  /** @return TimeSpan */
  public function getPullTiming()
  {
    return $this->pullTiming;
  }
  /** @param string */
  public function setScript($script)
  {
    $this->script = $script;
  }
  /** @return string */
  public function getScript()
  {
    return $this->script;
  }
  /** @param string[] */
  public function setSecretEnv($secretEnv)
  {
    $this->secretEnv = $secretEnv;
  }
  /** @return string[] */
  public function getSecretEnv()
  {
    return $this->secretEnv;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /** @return string */
  public function getTimeout()
  {
    return $this->timeout;
  }
  /** @param TimeSpan */
  public function setTiming(TimeSpan $timing)
  {
    $this->timing = $timing;
  }
  /** @return TimeSpan */
  public function getTiming()
  {
    return $this->timing;
  }
  /** @param Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return Volume[] */
  public function getVolumes()
  {
    return $this->volumes;
  }
  /** @param string[] */
  public function setWaitFor($waitFor)
  {
    $this->waitFor = $waitFor;
  }
  /** @return string[] */
  public function getWaitFor()
  {
    return $this->waitFor;
  }
}

class BuildTrigger extends \Google\Collection
{
  /** @var ApprovalConfig */
  public $approvalConfig;
  /** @var bool */
  public $autodetect;
  /** @var BitbucketServerTriggerConfig */
  public $bitbucketServerTriggerConfig;
  /** @var Build */
  public $build;
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $eventType;
  /** @var string */
  public $filename;
  /** @var string */
  public $filter;
  /** @var GitFileSource */
  public $gitFileSource;
  /** @var GitHubEventsConfig */
  public $github;
  /** @var GitLabEventsConfig */
  public $gitlabEnterpriseEventsConfig;
  /** @var string */
  public $id;
  /** @var string[] */
  public $ignoredFiles;
  /** @var string */
  public $includeBuildLogs;
  /** @var string[] */
  public $includedFiles;
  /** @var string */
  public $name;
  /** @var PubsubConfig */
  public $pubsubConfig;
  /** @var RepositoryEventConfig */
  public $repositoryEventConfig;
  /** @var string */
  public $resourceName;
  /** @var string */
  public $serviceAccount;
  /** @var GitRepoSource */
  public $sourceToBuild;
  /** @var string[] */
  public $substitutions;
  /** @var string[] */
  public $tags;
  /** @var RepoSource */
  public $triggerTemplate;
  /** @var WebhookConfig */
  public $webhookConfig;
  protected $collection_key = 'tags';
  protected $approvalConfigType = ApprovalConfig::class;
  protected $approvalConfigDataType = '';
  protected $bitbucketServerTriggerConfigType = BitbucketServerTriggerConfig::class;
  protected $bitbucketServerTriggerConfigDataType = '';
  protected $buildType = Build::class;
  protected $buildDataType = '';
  protected $gitFileSourceType = GitFileSource::class;
  protected $gitFileSourceDataType = '';
  protected $githubType = GitHubEventsConfig::class;
  protected $githubDataType = '';
  protected $gitlabEnterpriseEventsConfigType = GitLabEventsConfig::class;
  protected $gitlabEnterpriseEventsConfigDataType = '';
  protected $pubsubConfigType = PubsubConfig::class;
  protected $pubsubConfigDataType = '';
  protected $repositoryEventConfigType = RepositoryEventConfig::class;
  protected $repositoryEventConfigDataType = '';
  protected $sourceToBuildType = GitRepoSource::class;
  protected $sourceToBuildDataType = '';
  protected $triggerTemplateType = RepoSource::class;
  protected $triggerTemplateDataType = '';
  protected $webhookConfigType = WebhookConfig::class;
  protected $webhookConfigDataType = '';
  /** @param ApprovalConfig */
  public function setApprovalConfig(ApprovalConfig $approvalConfig)
  {
    $this->approvalConfig = $approvalConfig;
  }
  /** @return ApprovalConfig */
  public function getApprovalConfig()
  {
    return $this->approvalConfig;
  }
  /** @param bool */
  public function setAutodetect($autodetect)
  {
    $this->autodetect = $autodetect;
  }
  /** @return bool */
  public function getAutodetect()
  {
    return $this->autodetect;
  }
  /** @param BitbucketServerTriggerConfig */
  public function setBitbucketServerTriggerConfig(BitbucketServerTriggerConfig $bitbucketServerTriggerConfig)
  {
    $this->bitbucketServerTriggerConfig = $bitbucketServerTriggerConfig;
  }
  /** @return BitbucketServerTriggerConfig */
  public function getBitbucketServerTriggerConfig()
  {
    return $this->bitbucketServerTriggerConfig;
  }
  /** @param Build */
  public function setBuild(Build $build)
  {
    $this->build = $build;
  }
  /** @return Build */
  public function getBuild()
  {
    return $this->build;
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
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /** @return string */
  public function getEventType()
  {
    return $this->eventType;
  }
  /** @param string */
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  /** @return string */
  public function getFilename()
  {
    return $this->filename;
  }
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param GitFileSource */
  public function setGitFileSource(GitFileSource $gitFileSource)
  {
    $this->gitFileSource = $gitFileSource;
  }
  /** @return GitFileSource */
  public function getGitFileSource()
  {
    return $this->gitFileSource;
  }
  /** @param GitHubEventsConfig */
  public function setGithub(GitHubEventsConfig $github)
  {
    $this->github = $github;
  }
  /** @return GitHubEventsConfig */
  public function getGithub()
  {
    return $this->github;
  }
  /** @param GitLabEventsConfig */
  public function setGitlabEnterpriseEventsConfig(GitLabEventsConfig $gitlabEnterpriseEventsConfig)
  {
    $this->gitlabEnterpriseEventsConfig = $gitlabEnterpriseEventsConfig;
  }
  /** @return GitLabEventsConfig */
  public function getGitlabEnterpriseEventsConfig()
  {
    return $this->gitlabEnterpriseEventsConfig;
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
  /** @param string[] */
  public function setIgnoredFiles($ignoredFiles)
  {
    $this->ignoredFiles = $ignoredFiles;
  }
  /** @return string[] */
  public function getIgnoredFiles()
  {
    return $this->ignoredFiles;
  }
  /** @param string */
  public function setIncludeBuildLogs($includeBuildLogs)
  {
    $this->includeBuildLogs = $includeBuildLogs;
  }
  /** @return string */
  public function getIncludeBuildLogs()
  {
    return $this->includeBuildLogs;
  }
  /** @param string[] */
  public function setIncludedFiles($includedFiles)
  {
    $this->includedFiles = $includedFiles;
  }
  /** @return string[] */
  public function getIncludedFiles()
  {
    return $this->includedFiles;
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
  /** @param PubsubConfig */
  public function setPubsubConfig(PubsubConfig $pubsubConfig)
  {
    $this->pubsubConfig = $pubsubConfig;
  }
  /** @return PubsubConfig */
  public function getPubsubConfig()
  {
    return $this->pubsubConfig;
  }
  /** @param RepositoryEventConfig */
  public function setRepositoryEventConfig(RepositoryEventConfig $repositoryEventConfig)
  {
    $this->repositoryEventConfig = $repositoryEventConfig;
  }
  /** @return RepositoryEventConfig */
  public function getRepositoryEventConfig()
  {
    return $this->repositoryEventConfig;
  }
  /** @param string */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /** @param string */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /** @return string */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /** @param GitRepoSource */
  public function setSourceToBuild(GitRepoSource $sourceToBuild)
  {
    $this->sourceToBuild = $sourceToBuild;
  }
  /** @return GitRepoSource */
  public function getSourceToBuild()
  {
    return $this->sourceToBuild;
  }
  /** @param string[] */
  public function setSubstitutions($substitutions)
  {
    $this->substitutions = $substitutions;
  }
  /** @return string[] */
  public function getSubstitutions()
  {
    return $this->substitutions;
  }
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
  /** @param RepoSource */
  public function setTriggerTemplate(RepoSource $triggerTemplate)
  {
    $this->triggerTemplate = $triggerTemplate;
  }
  /** @return RepoSource */
  public function getTriggerTemplate()
  {
    return $this->triggerTemplate;
  }
  /** @param WebhookConfig */
  public function setWebhookConfig(WebhookConfig $webhookConfig)
  {
    $this->webhookConfig = $webhookConfig;
  }
  /** @return WebhookConfig */
  public function getWebhookConfig()
  {
    return $this->webhookConfig;
  }
}

class BuiltImage extends \Google\Model
{
  /** @var string */
  public $digest;
  /** @var string */
  public $name;
  /** @var TimeSpan */
  public $pushTiming;
  protected $pushTimingType = TimeSpan::class;
  protected $pushTimingDataType = '';
  /** @param string */
  public function setDigest($digest)
  {
    $this->digest = $digest;
  }
  /** @return string */
  public function getDigest()
  {
    return $this->digest;
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
  /** @param TimeSpan */
  public function setPushTiming(TimeSpan $pushTiming)
  {
    $this->pushTiming = $pushTiming;
  }
  /** @return TimeSpan */
  public function getPushTiming()
  {
    return $this->pushTiming;
  }
}

class CancelBuildRequest extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;

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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class CloudbuildEmpty extends \Google\Model
{
}

class CreateBitbucketServerConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $bitbucketServerConfig;
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;

  /** @param string */
  public function setBitbucketServerConfig($bitbucketServerConfig)
  {
    $this->bitbucketServerConfig = $bitbucketServerConfig;
  }
  /** @return string */
  public function getBitbucketServerConfig()
  {
    return $this->bitbucketServerConfig;
  }
  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
}

class CreateBitbucketServerConnectedRepositoryRequest extends \Google\Model
{
  /** @var BitbucketServerConnectedRepository */
  public $bitbucketServerConnectedRepository;
  /** @var string */
  public $parent;
  protected $bitbucketServerConnectedRepositoryType = BitbucketServerConnectedRepository::class;
  protected $bitbucketServerConnectedRepositoryDataType = '';
  /** @param BitbucketServerConnectedRepository */
  public function setBitbucketServerConnectedRepository(BitbucketServerConnectedRepository $bitbucketServerConnectedRepository)
  {
    $this->bitbucketServerConnectedRepository = $bitbucketServerConnectedRepository;
  }
  /** @return BitbucketServerConnectedRepository */
  public function getBitbucketServerConnectedRepository()
  {
    return $this->bitbucketServerConnectedRepository;
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

class CreateGitHubEnterpriseConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $githubEnterpriseConfig;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setGithubEnterpriseConfig($githubEnterpriseConfig)
  {
    $this->githubEnterpriseConfig = $githubEnterpriseConfig;
  }
  /** @return string */
  public function getGithubEnterpriseConfig()
  {
    return $this->githubEnterpriseConfig;
  }
}

class CreateGitLabConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $gitlabConfig;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setGitlabConfig($gitlabConfig)
  {
    $this->gitlabConfig = $gitlabConfig;
  }
  /** @return string */
  public function getGitlabConfig()
  {
    return $this->gitlabConfig;
  }
}

class CreateGitLabConnectedRepositoryRequest extends \Google\Model
{
  /** @var GitLabConnectedRepository */
  public $gitlabConnectedRepository;
  /** @var string */
  public $parent;
  protected $gitlabConnectedRepositoryType = GitLabConnectedRepository::class;
  protected $gitlabConnectedRepositoryDataType = '';
  /** @param GitLabConnectedRepository */
  public function setGitlabConnectedRepository(GitLabConnectedRepository $gitlabConnectedRepository)
  {
    $this->gitlabConnectedRepository = $gitlabConnectedRepository;
  }
  /** @return GitLabConnectedRepository */
  public function getGitlabConnectedRepository()
  {
    return $this->gitlabConnectedRepository;
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

class CreateWorkerPoolOperationMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $workerPool;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setWorkerPool($workerPool)
  {
    $this->workerPool = $workerPool;
  }
  /** @return string */
  public function getWorkerPool()
  {
    return $this->workerPool;
  }
}

class DeleteBitbucketServerConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $bitbucketServerConfig;
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;

  /** @param string */
  public function setBitbucketServerConfig($bitbucketServerConfig)
  {
    $this->bitbucketServerConfig = $bitbucketServerConfig;
  }
  /** @return string */
  public function getBitbucketServerConfig()
  {
    return $this->bitbucketServerConfig;
  }
  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
}

class DeleteGitHubEnterpriseConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $githubEnterpriseConfig;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setGithubEnterpriseConfig($githubEnterpriseConfig)
  {
    $this->githubEnterpriseConfig = $githubEnterpriseConfig;
  }
  /** @return string */
  public function getGithubEnterpriseConfig()
  {
    return $this->githubEnterpriseConfig;
  }
}

class DeleteGitLabConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $gitlabConfig;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setGitlabConfig($gitlabConfig)
  {
    $this->gitlabConfig = $gitlabConfig;
  }
  /** @return string */
  public function getGitlabConfig()
  {
    return $this->gitlabConfig;
  }
}

class DeleteWorkerPoolOperationMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $workerPool;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setWorkerPool($workerPool)
  {
    $this->workerPool = $workerPool;
  }
  /** @return string */
  public function getWorkerPool()
  {
    return $this->workerPool;
  }
}

class FailureInfo extends \Google\Model
{
  /** @var string */
  public $detail;
  /** @var string */
  public $type;

  /** @param string */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /** @return string */
  public function getDetail()
  {
    return $this->detail;
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

class FileHashes extends \Google\Collection
{
  /** @var Hash[] */
  public $fileHash;
  protected $collection_key = 'fileHash';
  protected $fileHashType = Hash::class;
  protected $fileHashDataType = 'array';
  /** @param Hash[] */
  public function setFileHash($fileHash)
  {
    $this->fileHash = $fileHash;
  }
  /** @return Hash[] */
  public function getFileHash()
  {
    return $this->fileHash;
  }
}

class GitFileSource extends \Google\Model
{
  /** @var string */
  public $bitbucketServerConfig;
  /** @var string */
  public $githubEnterpriseConfig;
  /** @var string */
  public $path;
  /** @var string */
  public $repoType;
  /** @var string */
  public $revision;
  /** @var string */
  public $uri;

  /** @param string */
  public function setBitbucketServerConfig($bitbucketServerConfig)
  {
    $this->bitbucketServerConfig = $bitbucketServerConfig;
  }
  /** @return string */
  public function getBitbucketServerConfig()
  {
    return $this->bitbucketServerConfig;
  }
  /** @param string */
  public function setGithubEnterpriseConfig($githubEnterpriseConfig)
  {
    $this->githubEnterpriseConfig = $githubEnterpriseConfig;
  }
  /** @return string */
  public function getGithubEnterpriseConfig()
  {
    return $this->githubEnterpriseConfig;
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
  public function setRepoType($repoType)
  {
    $this->repoType = $repoType;
  }
  /** @return string */
  public function getRepoType()
  {
    return $this->repoType;
  }
  /** @param string */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string */
  public function getRevision()
  {
    return $this->revision;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class GitHubEnterpriseConfig extends \Google\Model
{
  /** @var string */
  public $appId;
  /** @var string */
  public $createTime;
  /** @var string */
  public $displayName;
  /** @var string */
  public $hostUrl;
  /** @var string */
  public $name;
  /** @var string */
  public $peeredNetwork;
  /** @var GitHubEnterpriseSecrets */
  public $secrets;
  /** @var string */
  public $sslCa;
  /** @var string */
  public $webhookKey;
  protected $secretsType = GitHubEnterpriseSecrets::class;
  protected $secretsDataType = '';
  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
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
  public function setHostUrl($hostUrl)
  {
    $this->hostUrl = $hostUrl;
  }
  /** @return string */
  public function getHostUrl()
  {
    return $this->hostUrl;
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
  public function setPeeredNetwork($peeredNetwork)
  {
    $this->peeredNetwork = $peeredNetwork;
  }
  /** @return string */
  public function getPeeredNetwork()
  {
    return $this->peeredNetwork;
  }
  /** @param GitHubEnterpriseSecrets */
  public function setSecrets(GitHubEnterpriseSecrets $secrets)
  {
    $this->secrets = $secrets;
  }
  /** @return GitHubEnterpriseSecrets */
  public function getSecrets()
  {
    return $this->secrets;
  }
  /** @param string */
  public function setSslCa($sslCa)
  {
    $this->sslCa = $sslCa;
  }
  /** @return string */
  public function getSslCa()
  {
    return $this->sslCa;
  }
  /** @param string */
  public function setWebhookKey($webhookKey)
  {
    $this->webhookKey = $webhookKey;
  }
  /** @return string */
  public function getWebhookKey()
  {
    return $this->webhookKey;
  }
}

class GitHubEnterpriseSecrets extends \Google\Model
{
  /** @var string */
  public $oauthClientIdName;
  /** @var string */
  public $oauthClientIdVersionName;
  /** @var string */
  public $oauthSecretName;
  /** @var string */
  public $oauthSecretVersionName;
  /** @var string */
  public $privateKeyName;
  /** @var string */
  public $privateKeyVersionName;
  /** @var string */
  public $webhookSecretName;
  /** @var string */
  public $webhookSecretVersionName;

  /** @param string */
  public function setOauthClientIdName($oauthClientIdName)
  {
    $this->oauthClientIdName = $oauthClientIdName;
  }
  /** @return string */
  public function getOauthClientIdName()
  {
    return $this->oauthClientIdName;
  }
  /** @param string */
  public function setOauthClientIdVersionName($oauthClientIdVersionName)
  {
    $this->oauthClientIdVersionName = $oauthClientIdVersionName;
  }
  /** @return string */
  public function getOauthClientIdVersionName()
  {
    return $this->oauthClientIdVersionName;
  }
  /** @param string */
  public function setOauthSecretName($oauthSecretName)
  {
    $this->oauthSecretName = $oauthSecretName;
  }
  /** @return string */
  public function getOauthSecretName()
  {
    return $this->oauthSecretName;
  }
  /** @param string */
  public function setOauthSecretVersionName($oauthSecretVersionName)
  {
    $this->oauthSecretVersionName = $oauthSecretVersionName;
  }
  /** @return string */
  public function getOauthSecretVersionName()
  {
    return $this->oauthSecretVersionName;
  }
  /** @param string */
  public function setPrivateKeyName($privateKeyName)
  {
    $this->privateKeyName = $privateKeyName;
  }
  /** @return string */
  public function getPrivateKeyName()
  {
    return $this->privateKeyName;
  }
  /** @param string */
  public function setPrivateKeyVersionName($privateKeyVersionName)
  {
    $this->privateKeyVersionName = $privateKeyVersionName;
  }
  /** @return string */
  public function getPrivateKeyVersionName()
  {
    return $this->privateKeyVersionName;
  }
  /** @param string */
  public function setWebhookSecretName($webhookSecretName)
  {
    $this->webhookSecretName = $webhookSecretName;
  }
  /** @return string */
  public function getWebhookSecretName()
  {
    return $this->webhookSecretName;
  }
  /** @param string */
  public function setWebhookSecretVersionName($webhookSecretVersionName)
  {
    $this->webhookSecretVersionName = $webhookSecretVersionName;
  }
  /** @return string */
  public function getWebhookSecretVersionName()
  {
    return $this->webhookSecretVersionName;
  }
}

class GitHubEventsConfig extends \Google\Model
{
  /** @var string */
  public $enterpriseConfigResourceName;
  /** @var string */
  public $installationId;
  /** @var string */
  public $name;
  /** @var string */
  public $owner;
  /** @var PullRequestFilter */
  public $pullRequest;
  /** @var PushFilter */
  public $push;
  protected $pullRequestType = PullRequestFilter::class;
  protected $pullRequestDataType = '';
  protected $pushType = PushFilter::class;
  protected $pushDataType = '';
  /** @param string */
  public function setEnterpriseConfigResourceName($enterpriseConfigResourceName)
  {
    $this->enterpriseConfigResourceName = $enterpriseConfigResourceName;
  }
  /** @return string */
  public function getEnterpriseConfigResourceName()
  {
    return $this->enterpriseConfigResourceName;
  }
  /** @param string */
  public function setInstallationId($installationId)
  {
    $this->installationId = $installationId;
  }
  /** @return string */
  public function getInstallationId()
  {
    return $this->installationId;
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
  public function setOwner($owner)
  {
    $this->owner = $owner;
  }
  /** @return string */
  public function getOwner()
  {
    return $this->owner;
  }
  /** @param PullRequestFilter */
  public function setPullRequest(PullRequestFilter $pullRequest)
  {
    $this->pullRequest = $pullRequest;
  }
  /** @return PullRequestFilter */
  public function getPullRequest()
  {
    return $this->pullRequest;
  }
  /** @param PushFilter */
  public function setPush(PushFilter $push)
  {
    $this->push = $push;
  }
  /** @return PushFilter */
  public function getPush()
  {
    return $this->push;
  }
}

class GitLabConfig extends \Google\Collection
{
  /** @var GitLabRepositoryId[] */
  public $connectedRepositories;
  /** @var string */
  public $createTime;
  /** @var GitLabEnterpriseConfig */
  public $enterpriseConfig;
  /** @var string */
  public $name;
  /** @var GitLabSecrets */
  public $secrets;
  /** @var string */
  public $username;
  /** @var string */
  public $webhookKey;
  protected $collection_key = 'connectedRepositories';
  protected $connectedRepositoriesType = GitLabRepositoryId::class;
  protected $connectedRepositoriesDataType = 'array';
  protected $enterpriseConfigType = GitLabEnterpriseConfig::class;
  protected $enterpriseConfigDataType = '';
  protected $secretsType = GitLabSecrets::class;
  protected $secretsDataType = '';
  /** @param GitLabRepositoryId[] */
  public function setConnectedRepositories($connectedRepositories)
  {
    $this->connectedRepositories = $connectedRepositories;
  }
  /** @return GitLabRepositoryId[] */
  public function getConnectedRepositories()
  {
    return $this->connectedRepositories;
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
  /** @param GitLabEnterpriseConfig */
  public function setEnterpriseConfig(GitLabEnterpriseConfig $enterpriseConfig)
  {
    $this->enterpriseConfig = $enterpriseConfig;
  }
  /** @return GitLabEnterpriseConfig */
  public function getEnterpriseConfig()
  {
    return $this->enterpriseConfig;
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
  /** @param GitLabSecrets */
  public function setSecrets(GitLabSecrets $secrets)
  {
    $this->secrets = $secrets;
  }
  /** @return GitLabSecrets */
  public function getSecrets()
  {
    return $this->secrets;
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
  /** @param string */
  public function setWebhookKey($webhookKey)
  {
    $this->webhookKey = $webhookKey;
  }
  /** @return string */
  public function getWebhookKey()
  {
    return $this->webhookKey;
  }
}

class GitLabConnectedRepository extends \Google\Model
{
  /** @var string */
  public $parent;
  /** @var GitLabRepositoryId */
  public $repo;
  /** @var Status */
  public $status;
  protected $repoType = GitLabRepositoryId::class;
  protected $repoDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
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
  /** @param GitLabRepositoryId */
  public function setRepo(GitLabRepositoryId $repo)
  {
    $this->repo = $repo;
  }
  /** @return GitLabRepositoryId */
  public function getRepo()
  {
    return $this->repo;
  }
  /** @param Status */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /** @return Status */
  public function getStatus()
  {
    return $this->status;
  }
}

class GitLabEnterpriseConfig extends \Google\Model
{
  /** @var string */
  public $hostUri;
  /** @var ServiceDirectoryConfig */
  public $serviceDirectoryConfig;
  /** @var string */
  public $sslCa;
  protected $serviceDirectoryConfigType = ServiceDirectoryConfig::class;
  protected $serviceDirectoryConfigDataType = '';
  /** @param string */
  public function setHostUri($hostUri)
  {
    $this->hostUri = $hostUri;
  }
  /** @return string */
  public function getHostUri()
  {
    return $this->hostUri;
  }
  /** @param ServiceDirectoryConfig */
  public function setServiceDirectoryConfig(ServiceDirectoryConfig $serviceDirectoryConfig)
  {
    $this->serviceDirectoryConfig = $serviceDirectoryConfig;
  }
  /** @return ServiceDirectoryConfig */
  public function getServiceDirectoryConfig()
  {
    return $this->serviceDirectoryConfig;
  }
  /** @param string */
  public function setSslCa($sslCa)
  {
    $this->sslCa = $sslCa;
  }
  /** @return string */
  public function getSslCa()
  {
    return $this->sslCa;
  }
}

class GitLabEventsConfig extends \Google\Model
{
  /** @var GitLabConfig */
  public $gitlabConfig;
  /** @var string */
  public $gitlabConfigResource;
  /** @var string */
  public $projectNamespace;
  /** @var PullRequestFilter */
  public $pullRequest;
  /** @var PushFilter */
  public $push;
  protected $gitlabConfigType = GitLabConfig::class;
  protected $gitlabConfigDataType = '';
  protected $pullRequestType = PullRequestFilter::class;
  protected $pullRequestDataType = '';
  protected $pushType = PushFilter::class;
  protected $pushDataType = '';
  /** @param GitLabConfig */
  public function setGitlabConfig(GitLabConfig $gitlabConfig)
  {
    $this->gitlabConfig = $gitlabConfig;
  }
  /** @return GitLabConfig */
  public function getGitlabConfig()
  {
    return $this->gitlabConfig;
  }
  /** @param string */
  public function setGitlabConfigResource($gitlabConfigResource)
  {
    $this->gitlabConfigResource = $gitlabConfigResource;
  }
  /** @return string */
  public function getGitlabConfigResource()
  {
    return $this->gitlabConfigResource;
  }
  /** @param string */
  public function setProjectNamespace($projectNamespace)
  {
    $this->projectNamespace = $projectNamespace;
  }
  /** @return string */
  public function getProjectNamespace()
  {
    return $this->projectNamespace;
  }
  /** @param PullRequestFilter */
  public function setPullRequest(PullRequestFilter $pullRequest)
  {
    $this->pullRequest = $pullRequest;
  }
  /** @return PullRequestFilter */
  public function getPullRequest()
  {
    return $this->pullRequest;
  }
  /** @param PushFilter */
  public function setPush(PushFilter $push)
  {
    $this->push = $push;
  }
  /** @return PushFilter */
  public function getPush()
  {
    return $this->push;
  }
}

class GitLabRepository extends \Google\Model
{
  /** @var string */
  public $browseUri;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GitLabRepositoryId */
  public $repositoryId;
  protected $repositoryIdType = GitLabRepositoryId::class;
  protected $repositoryIdDataType = '';
  /** @param string */
  public function setBrowseUri($browseUri)
  {
    $this->browseUri = $browseUri;
  }
  /** @return string */
  public function getBrowseUri()
  {
    return $this->browseUri;
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
  /** @param GitLabRepositoryId */
  public function setRepositoryId(GitLabRepositoryId $repositoryId)
  {
    $this->repositoryId = $repositoryId;
  }
  /** @return GitLabRepositoryId */
  public function getRepositoryId()
  {
    return $this->repositoryId;
  }
}

class GitLabRepositoryId extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var int */
  public $webhookId;

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
  /** @param int */
  public function setWebhookId($webhookId)
  {
    $this->webhookId = $webhookId;
  }
  /** @return int */
  public function getWebhookId()
  {
    return $this->webhookId;
  }
}

class GitLabSecrets extends \Google\Model
{
  /** @var string */
  public $apiAccessTokenVersion;
  /** @var string */
  public $apiKeyVersion;
  /** @var string */
  public $readAccessTokenVersion;
  /** @var string */
  public $webhookSecretVersion;

  /** @param string */
  public function setApiAccessTokenVersion($apiAccessTokenVersion)
  {
    $this->apiAccessTokenVersion = $apiAccessTokenVersion;
  }
  /** @return string */
  public function getApiAccessTokenVersion()
  {
    return $this->apiAccessTokenVersion;
  }
  /** @param string */
  public function setApiKeyVersion($apiKeyVersion)
  {
    $this->apiKeyVersion = $apiKeyVersion;
  }
  /** @return string */
  public function getApiKeyVersion()
  {
    return $this->apiKeyVersion;
  }
  /** @param string */
  public function setReadAccessTokenVersion($readAccessTokenVersion)
  {
    $this->readAccessTokenVersion = $readAccessTokenVersion;
  }
  /** @return string */
  public function getReadAccessTokenVersion()
  {
    return $this->readAccessTokenVersion;
  }
  /** @param string */
  public function setWebhookSecretVersion($webhookSecretVersion)
  {
    $this->webhookSecretVersion = $webhookSecretVersion;
  }
  /** @return string */
  public function getWebhookSecretVersion()
  {
    return $this->webhookSecretVersion;
  }
}

class GitRepoSource extends \Google\Model
{
  /** @var string */
  public $bitbucketServerConfig;
  /** @var string */
  public $githubEnterpriseConfig;
  /** @var string */
  public $ref;
  /** @var string */
  public $repoType;
  /** @var string */
  public $uri;

  /** @param string */
  public function setBitbucketServerConfig($bitbucketServerConfig)
  {
    $this->bitbucketServerConfig = $bitbucketServerConfig;
  }
  /** @return string */
  public function getBitbucketServerConfig()
  {
    return $this->bitbucketServerConfig;
  }
  /** @param string */
  public function setGithubEnterpriseConfig($githubEnterpriseConfig)
  {
    $this->githubEnterpriseConfig = $githubEnterpriseConfig;
  }
  /** @return string */
  public function getGithubEnterpriseConfig()
  {
    return $this->githubEnterpriseConfig;
  }
  /** @param string */
  public function setRef($ref)
  {
    $this->ref = $ref;
  }
  /** @return string */
  public function getRef()
  {
    return $this->ref;
  }
  /** @param string */
  public function setRepoType($repoType)
  {
    $this->repoType = $repoType;
  }
  /** @return string */
  public function getRepoType()
  {
    return $this->repoType;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class HTTPDelivery extends \Google\Model
{
  /** @var string */
  public $uri;

  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class Hash extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $value;

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

class HttpBody extends \Google\Collection
{
  /** @var string */
  public $contentType;
  /** @var string */
  public $data;
  /** @var array[] */
  public $extensions;
  protected $collection_key = 'extensions';
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
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param array[] */
  public function setExtensions($extensions)
  {
    $this->extensions = $extensions;
  }
  /** @return array[] */
  public function getExtensions()
  {
    return $this->extensions;
  }
}

class InlineSecret extends \Google\Model
{
  /** @var string[] */
  public $envMap;
  /** @var string */
  public $kmsKeyName;

  /** @param string[] */
  public function setEnvMap($envMap)
  {
    $this->envMap = $envMap;
  }
  /** @return string[] */
  public function getEnvMap()
  {
    return $this->envMap;
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
}

class ListBitbucketServerConfigsResponse extends \Google\Collection
{
  /** @var BitbucketServerConfig[] */
  public $bitbucketServerConfigs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'bitbucketServerConfigs';
  protected $bitbucketServerConfigsType = BitbucketServerConfig::class;
  protected $bitbucketServerConfigsDataType = 'array';
  /** @param BitbucketServerConfig[] */
  public function setBitbucketServerConfigs($bitbucketServerConfigs)
  {
    $this->bitbucketServerConfigs = $bitbucketServerConfigs;
  }
  /** @return BitbucketServerConfig[] */
  public function getBitbucketServerConfigs()
  {
    return $this->bitbucketServerConfigs;
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

class ListBitbucketServerRepositoriesResponse extends \Google\Collection
{
  /** @var BitbucketServerRepository[] */
  public $bitbucketServerRepositories;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'bitbucketServerRepositories';
  protected $bitbucketServerRepositoriesType = BitbucketServerRepository::class;
  protected $bitbucketServerRepositoriesDataType = 'array';
  /** @param BitbucketServerRepository[] */
  public function setBitbucketServerRepositories($bitbucketServerRepositories)
  {
    $this->bitbucketServerRepositories = $bitbucketServerRepositories;
  }
  /** @return BitbucketServerRepository[] */
  public function getBitbucketServerRepositories()
  {
    return $this->bitbucketServerRepositories;
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

class ListBuildTriggersResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var BuildTrigger[] */
  public $triggers;
  protected $collection_key = 'triggers';
  protected $triggersType = BuildTrigger::class;
  protected $triggersDataType = 'array';
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
  /** @param BuildTrigger[] */
  public function setTriggers($triggers)
  {
    $this->triggers = $triggers;
  }
  /** @return BuildTrigger[] */
  public function getTriggers()
  {
    return $this->triggers;
  }
}

class ListBuildsResponse extends \Google\Collection
{
  /** @var Build[] */
  public $builds;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'builds';
  protected $buildsType = Build::class;
  protected $buildsDataType = 'array';
  /** @param Build[] */
  public function setBuilds($builds)
  {
    $this->builds = $builds;
  }
  /** @return Build[] */
  public function getBuilds()
  {
    return $this->builds;
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

class ListGitLabConfigsResponse extends \Google\Collection
{
  /** @var GitLabConfig[] */
  public $gitlabConfigs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'gitlabConfigs';
  protected $gitlabConfigsType = GitLabConfig::class;
  protected $gitlabConfigsDataType = 'array';
  /** @param GitLabConfig[] */
  public function setGitlabConfigs($gitlabConfigs)
  {
    $this->gitlabConfigs = $gitlabConfigs;
  }
  /** @return GitLabConfig[] */
  public function getGitlabConfigs()
  {
    return $this->gitlabConfigs;
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

class ListGitLabRepositoriesResponse extends \Google\Collection
{
  /** @var GitLabRepository[] */
  public $gitlabRepositories;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'gitlabRepositories';
  protected $gitlabRepositoriesType = GitLabRepository::class;
  protected $gitlabRepositoriesDataType = 'array';
  /** @param GitLabRepository[] */
  public function setGitlabRepositories($gitlabRepositories)
  {
    $this->gitlabRepositories = $gitlabRepositories;
  }
  /** @return GitLabRepository[] */
  public function getGitlabRepositories()
  {
    return $this->gitlabRepositories;
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

class ListGithubEnterpriseConfigsResponse extends \Google\Collection
{
  /** @var GitHubEnterpriseConfig[] */
  public $configs;
  protected $collection_key = 'configs';
  protected $configsType = GitHubEnterpriseConfig::class;
  protected $configsDataType = 'array';
  /** @param GitHubEnterpriseConfig[] */
  public function setConfigs($configs)
  {
    $this->configs = $configs;
  }
  /** @return GitHubEnterpriseConfig[] */
  public function getConfigs()
  {
    return $this->configs;
  }
}

class ListWorkerPoolsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var WorkerPool[] */
  public $workerPools;
  protected $collection_key = 'workerPools';
  protected $workerPoolsType = WorkerPool::class;
  protected $workerPoolsDataType = 'array';
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
  /** @param WorkerPool[] */
  public function setWorkerPools($workerPools)
  {
    $this->workerPools = $workerPools;
  }
  /** @return WorkerPool[] */
  public function getWorkerPools()
  {
    return $this->workerPools;
  }
}

class MavenArtifact extends \Google\Model
{
  /** @var string */
  public $artifactId;
  /** @var string */
  public $groupId;
  /** @var string */
  public $path;
  /** @var string */
  public $repository;
  /** @var string */
  public $version;

  /** @param string */
  public function setArtifactId($artifactId)
  {
    $this->artifactId = $artifactId;
  }
  /** @return string */
  public function getArtifactId()
  {
    return $this->artifactId;
  }
  /** @param string */
  public function setGroupId($groupId)
  {
    $this->groupId = $groupId;
  }
  /** @return string */
  public function getGroupId()
  {
    return $this->groupId;
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

class NetworkConfig extends \Google\Model
{
  /** @var string */
  public $egressOption;
  /** @var string */
  public $peeredNetwork;

  /** @param string */
  public function setEgressOption($egressOption)
  {
    $this->egressOption = $egressOption;
  }
  /** @return string */
  public function getEgressOption()
  {
    return $this->egressOption;
  }
  /** @param string */
  public function setPeeredNetwork($peeredNetwork)
  {
    $this->peeredNetwork = $peeredNetwork;
  }
  /** @return string */
  public function getPeeredNetwork()
  {
    return $this->peeredNetwork;
  }
}

class Notification extends \Google\Model
{
  /** @var string */
  public $filter;
  /** @var HTTPDelivery */
  public $httpDelivery;
  /** @var SlackDelivery */
  public $slackDelivery;
  /** @var SMTPDelivery */
  public $smtpDelivery;
  /** @var array[] */
  public $structDelivery;
  protected $httpDeliveryType = HTTPDelivery::class;
  protected $httpDeliveryDataType = '';
  protected $slackDeliveryType = SlackDelivery::class;
  protected $slackDeliveryDataType = '';
  protected $smtpDeliveryType = SMTPDelivery::class;
  protected $smtpDeliveryDataType = '';
  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param HTTPDelivery */
  public function setHttpDelivery(HTTPDelivery $httpDelivery)
  {
    $this->httpDelivery = $httpDelivery;
  }
  /** @return HTTPDelivery */
  public function getHttpDelivery()
  {
    return $this->httpDelivery;
  }
  /** @param SlackDelivery */
  public function setSlackDelivery(SlackDelivery $slackDelivery)
  {
    $this->slackDelivery = $slackDelivery;
  }
  /** @return SlackDelivery */
  public function getSlackDelivery()
  {
    return $this->slackDelivery;
  }
  /** @param SMTPDelivery */
  public function setSmtpDelivery(SMTPDelivery $smtpDelivery)
  {
    $this->smtpDelivery = $smtpDelivery;
  }
  /** @return SMTPDelivery */
  public function getSmtpDelivery()
  {
    return $this->smtpDelivery;
  }
  /** @param array[] */
  public function setStructDelivery($structDelivery)
  {
    $this->structDelivery = $structDelivery;
  }
  /** @return array[] */
  public function getStructDelivery()
  {
    return $this->structDelivery;
  }
}

class NotifierConfig extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var string */
  public $kind;
  /** @var NotifierMetadata */
  public $metadata;
  /** @var NotifierSpec */
  public $spec;
  protected $metadataType = NotifierMetadata::class;
  protected $metadataDataType = '';
  protected $specType = NotifierSpec::class;
  protected $specDataType = '';
  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
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
  /** @param NotifierMetadata */
  public function setMetadata(NotifierMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return NotifierMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param NotifierSpec */
  public function setSpec(NotifierSpec $spec)
  {
    $this->spec = $spec;
  }
  /** @return NotifierSpec */
  public function getSpec()
  {
    return $this->spec;
  }
}

class NotifierMetadata extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $notifier;

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
  public function setNotifier($notifier)
  {
    $this->notifier = $notifier;
  }
  /** @return string */
  public function getNotifier()
  {
    return $this->notifier;
  }
}

class NotifierSecret extends \Google\Model
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

class NotifierSecretRef extends \Google\Model
{
  /** @var string */
  public $secretRef;

  /** @param string */
  public function setSecretRef($secretRef)
  {
    $this->secretRef = $secretRef;
  }
  /** @return string */
  public function getSecretRef()
  {
    return $this->secretRef;
  }
}

class NotifierSpec extends \Google\Collection
{
  /** @var Notification */
  public $notification;
  /** @var NotifierSecret[] */
  public $secrets;
  protected $collection_key = 'secrets';
  protected $notificationType = Notification::class;
  protected $notificationDataType = '';
  protected $secretsType = NotifierSecret::class;
  protected $secretsDataType = 'array';
  /** @param Notification */
  public function setNotification(Notification $notification)
  {
    $this->notification = $notification;
  }
  /** @return Notification */
  public function getNotification()
  {
    return $this->notification;
  }
  /** @param NotifierSecret[] */
  public function setSecrets($secrets)
  {
    $this->secrets = $secrets;
  }
  /** @return NotifierSecret[] */
  public function getSecrets()
  {
    return $this->secrets;
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

class OperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiVersion;
  /** @var bool */
  public $cancelRequested;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $statusDetail;
  /** @var string */
  public $target;
  /** @var string */
  public $verb;

  /** @param string */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /** @return string */
  public function getApiVersion()
  {
    return $this->apiVersion;
  }
  /** @param bool */
  public function setCancelRequested($cancelRequested)
  {
    $this->cancelRequested = $cancelRequested;
  }
  /** @return bool */
  public function getCancelRequested()
  {
    return $this->cancelRequested;
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param string */
  public function setStatusDetail($statusDetail)
  {
    $this->statusDetail = $statusDetail;
  }
  /** @return string */
  public function getStatusDetail()
  {
    return $this->statusDetail;
  }
  /** @param string */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return string */
  public function getTarget()
  {
    return $this->target;
  }
  /** @param string */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /** @return string */
  public function getVerb()
  {
    return $this->verb;
  }
}

class PoolOption extends \Google\Model
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

class PrivatePoolV1Config extends \Google\Model
{
  /** @var NetworkConfig */
  public $networkConfig;
  /** @var WorkerConfig */
  public $workerConfig;
  protected $networkConfigType = NetworkConfig::class;
  protected $networkConfigDataType = '';
  protected $workerConfigType = WorkerConfig::class;
  protected $workerConfigDataType = '';
  /** @param NetworkConfig */
  public function setNetworkConfig(NetworkConfig $networkConfig)
  {
    $this->networkConfig = $networkConfig;
  }
  /** @return NetworkConfig */
  public function getNetworkConfig()
  {
    return $this->networkConfig;
  }
  /** @param WorkerConfig */
  public function setWorkerConfig(WorkerConfig $workerConfig)
  {
    $this->workerConfig = $workerConfig;
  }
  /** @return WorkerConfig */
  public function getWorkerConfig()
  {
    return $this->workerConfig;
  }
}

class ProcessAppManifestCallbackOperationMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $githubEnterpriseConfig;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setGithubEnterpriseConfig($githubEnterpriseConfig)
  {
    $this->githubEnterpriseConfig = $githubEnterpriseConfig;
  }
  /** @return string */
  public function getGithubEnterpriseConfig()
  {
    return $this->githubEnterpriseConfig;
  }
}

class PubsubConfig extends \Google\Model
{
  /** @var string */
  public $serviceAccountEmail;
  /** @var string */
  public $state;
  /** @var string */
  public $subscription;
  /** @var string */
  public $topic;

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
  public function setSubscription($subscription)
  {
    $this->subscription = $subscription;
  }
  /** @return string */
  public function getSubscription()
  {
    return $this->subscription;
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

class PullRequestFilter extends \Google\Model
{
  /** @var string */
  public $branch;
  /** @var string */
  public $commentControl;
  /** @var bool */
  public $invertRegex;

  /** @param string */
  public function setBranch($branch)
  {
    $this->branch = $branch;
  }
  /** @return string */
  public function getBranch()
  {
    return $this->branch;
  }
  /** @param string */
  public function setCommentControl($commentControl)
  {
    $this->commentControl = $commentControl;
  }
  /** @return string */
  public function getCommentControl()
  {
    return $this->commentControl;
  }
  /** @param bool */
  public function setInvertRegex($invertRegex)
  {
    $this->invertRegex = $invertRegex;
  }
  /** @return bool */
  public function getInvertRegex()
  {
    return $this->invertRegex;
  }
}

class PushFilter extends \Google\Model
{
  /** @var string */
  public $branch;
  /** @var bool */
  public $invertRegex;
  /** @var string */
  public $tag;

  /** @param string */
  public function setBranch($branch)
  {
    $this->branch = $branch;
  }
  /** @return string */
  public function getBranch()
  {
    return $this->branch;
  }
  /** @param bool */
  public function setInvertRegex($invertRegex)
  {
    $this->invertRegex = $invertRegex;
  }
  /** @return bool */
  public function getInvertRegex()
  {
    return $this->invertRegex;
  }
  /** @param string */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return string */
  public function getTag()
  {
    return $this->tag;
  }
}

class PythonPackage extends \Google\Collection
{
  /** @var string[] */
  public $paths;
  /** @var string */
  public $repository;
  protected $collection_key = 'paths';
  /** @param string[] */
  public function setPaths($paths)
  {
    $this->paths = $paths;
  }
  /** @return string[] */
  public function getPaths()
  {
    return $this->paths;
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
}

class ReceiveTriggerWebhookResponse extends \Google\Model
{
}

class RemoveBitbucketServerConnectedRepositoryRequest extends \Google\Model
{
  /** @var BitbucketServerRepositoryId */
  public $connectedRepository;
  protected $connectedRepositoryType = BitbucketServerRepositoryId::class;
  protected $connectedRepositoryDataType = '';
  /** @param BitbucketServerRepositoryId */
  public function setConnectedRepository(BitbucketServerRepositoryId $connectedRepository)
  {
    $this->connectedRepository = $connectedRepository;
  }
  /** @return BitbucketServerRepositoryId */
  public function getConnectedRepository()
  {
    return $this->connectedRepository;
  }
}

class RemoveGitLabConnectedRepositoryRequest extends \Google\Model
{
  /** @var GitLabRepositoryId */
  public $connectedRepository;
  protected $connectedRepositoryType = GitLabRepositoryId::class;
  protected $connectedRepositoryDataType = '';
  /** @param GitLabRepositoryId */
  public function setConnectedRepository(GitLabRepositoryId $connectedRepository)
  {
    $this->connectedRepository = $connectedRepository;
  }
  /** @return GitLabRepositoryId */
  public function getConnectedRepository()
  {
    return $this->connectedRepository;
  }
}

class RepoSource extends \Google\Model
{
  /** @var string */
  public $branchName;
  /** @var string */
  public $commitSha;
  /** @var string */
  public $dir;
  /** @var bool */
  public $invertRegex;
  /** @var string */
  public $projectId;
  /** @var string */
  public $repoName;
  /** @var string[] */
  public $substitutions;
  /** @var string */
  public $tagName;

  /** @param string */
  public function setBranchName($branchName)
  {
    $this->branchName = $branchName;
  }
  /** @return string */
  public function getBranchName()
  {
    return $this->branchName;
  }
  /** @param string */
  public function setCommitSha($commitSha)
  {
    $this->commitSha = $commitSha;
  }
  /** @return string */
  public function getCommitSha()
  {
    return $this->commitSha;
  }
  /** @param string */
  public function setDir($dir)
  {
    $this->dir = $dir;
  }
  /** @return string */
  public function getDir()
  {
    return $this->dir;
  }
  /** @param bool */
  public function setInvertRegex($invertRegex)
  {
    $this->invertRegex = $invertRegex;
  }
  /** @return bool */
  public function getInvertRegex()
  {
    return $this->invertRegex;
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
  public function setRepoName($repoName)
  {
    $this->repoName = $repoName;
  }
  /** @return string */
  public function getRepoName()
  {
    return $this->repoName;
  }
  /** @param string[] */
  public function setSubstitutions($substitutions)
  {
    $this->substitutions = $substitutions;
  }
  /** @return string[] */
  public function getSubstitutions()
  {
    return $this->substitutions;
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

class RepositoryEventConfig extends \Google\Model
{
  /** @var PullRequestFilter */
  public $pullRequest;
  /** @var PushFilter */
  public $push;
  /** @var string */
  public $repository;
  /** @var string */
  public $repositoryType;
  protected $pullRequestType = PullRequestFilter::class;
  protected $pullRequestDataType = '';
  protected $pushType = PushFilter::class;
  protected $pushDataType = '';
  /** @param PullRequestFilter */
  public function setPullRequest(PullRequestFilter $pullRequest)
  {
    $this->pullRequest = $pullRequest;
  }
  /** @return PullRequestFilter */
  public function getPullRequest()
  {
    return $this->pullRequest;
  }
  /** @param PushFilter */
  public function setPush(PushFilter $push)
  {
    $this->push = $push;
  }
  /** @return PushFilter */
  public function getPush()
  {
    return $this->push;
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
  public function setRepositoryType($repositoryType)
  {
    $this->repositoryType = $repositoryType;
  }
  /** @return string */
  public function getRepositoryType()
  {
    return $this->repositoryType;
  }
}

class Results extends \Google\Collection
{
  /** @var string */
  public $artifactManifest;
  /** @var TimeSpan */
  public $artifactTiming;
  /** @var string[] */
  public $buildStepImages;
  /** @var string[] */
  public $buildStepOutputs;
  /** @var BuiltImage[] */
  public $images;
  /** @var UploadedMavenArtifact[] */
  public $mavenArtifacts;
  /** @var string */
  public $numArtifacts;
  /** @var UploadedPythonPackage[] */
  public $pythonPackages;
  protected $collection_key = 'pythonPackages';
  protected $artifactTimingType = TimeSpan::class;
  protected $artifactTimingDataType = '';
  protected $imagesType = BuiltImage::class;
  protected $imagesDataType = 'array';
  protected $mavenArtifactsType = UploadedMavenArtifact::class;
  protected $mavenArtifactsDataType = 'array';
  protected $pythonPackagesType = UploadedPythonPackage::class;
  protected $pythonPackagesDataType = 'array';
  /** @param string */
  public function setArtifactManifest($artifactManifest)
  {
    $this->artifactManifest = $artifactManifest;
  }
  /** @return string */
  public function getArtifactManifest()
  {
    return $this->artifactManifest;
  }
  /** @param TimeSpan */
  public function setArtifactTiming(TimeSpan $artifactTiming)
  {
    $this->artifactTiming = $artifactTiming;
  }
  /** @return TimeSpan */
  public function getArtifactTiming()
  {
    return $this->artifactTiming;
  }
  /** @param string[] */
  public function setBuildStepImages($buildStepImages)
  {
    $this->buildStepImages = $buildStepImages;
  }
  /** @return string[] */
  public function getBuildStepImages()
  {
    return $this->buildStepImages;
  }
  /** @param string[] */
  public function setBuildStepOutputs($buildStepOutputs)
  {
    $this->buildStepOutputs = $buildStepOutputs;
  }
  /** @return string[] */
  public function getBuildStepOutputs()
  {
    return $this->buildStepOutputs;
  }
  /** @param BuiltImage[] */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /** @return BuiltImage[] */
  public function getImages()
  {
    return $this->images;
  }
  /** @param UploadedMavenArtifact[] */
  public function setMavenArtifacts($mavenArtifacts)
  {
    $this->mavenArtifacts = $mavenArtifacts;
  }
  /** @return UploadedMavenArtifact[] */
  public function getMavenArtifacts()
  {
    return $this->mavenArtifacts;
  }
  /** @param string */
  public function setNumArtifacts($numArtifacts)
  {
    $this->numArtifacts = $numArtifacts;
  }
  /** @return string */
  public function getNumArtifacts()
  {
    return $this->numArtifacts;
  }
  /** @param UploadedPythonPackage[] */
  public function setPythonPackages($pythonPackages)
  {
    $this->pythonPackages = $pythonPackages;
  }
  /** @return UploadedPythonPackage[] */
  public function getPythonPackages()
  {
    return $this->pythonPackages;
  }
}

class RetryBuildRequest extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $projectId;

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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
}

class RunBuildTriggerRequest extends \Google\Model
{
  /** @var string */
  public $projectId;
  /** @var RepoSource */
  public $source;
  /** @var string */
  public $triggerId;
  protected $sourceType = RepoSource::class;
  protected $sourceDataType = '';
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
  /** @param RepoSource */
  public function setSource(RepoSource $source)
  {
    $this->source = $source;
  }
  /** @return RepoSource */
  public function getSource()
  {
    return $this->source;
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
}

class SMTPDelivery extends \Google\Collection
{
  /** @var string */
  public $fromAddress;
  /** @var NotifierSecretRef */
  public $password;
  /** @var string */
  public $port;
  /** @var string[] */
  public $recipientAddresses;
  /** @var string */
  public $senderAddress;
  /** @var string */
  public $server;
  protected $collection_key = 'recipientAddresses';
  protected $passwordType = NotifierSecretRef::class;
  protected $passwordDataType = '';
  /** @param string */
  public function setFromAddress($fromAddress)
  {
    $this->fromAddress = $fromAddress;
  }
  /** @return string */
  public function getFromAddress()
  {
    return $this->fromAddress;
  }
  /** @param NotifierSecretRef */
  public function setPassword(NotifierSecretRef $password)
  {
    $this->password = $password;
  }
  /** @return NotifierSecretRef */
  public function getPassword()
  {
    return $this->password;
  }
  /** @param string */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /** @return string */
  public function getPort()
  {
    return $this->port;
  }
  /** @param string[] */
  public function setRecipientAddresses($recipientAddresses)
  {
    $this->recipientAddresses = $recipientAddresses;
  }
  /** @return string[] */
  public function getRecipientAddresses()
  {
    return $this->recipientAddresses;
  }
  /** @param string */
  public function setSenderAddress($senderAddress)
  {
    $this->senderAddress = $senderAddress;
  }
  /** @return string */
  public function getSenderAddress()
  {
    return $this->senderAddress;
  }
  /** @param string */
  public function setServer($server)
  {
    $this->server = $server;
  }
  /** @return string */
  public function getServer()
  {
    return $this->server;
  }
}

class Secret extends \Google\Model
{
  /** @var string */
  public $kmsKeyName;
  /** @var string[] */
  public $secretEnv;

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
  /** @param string[] */
  public function setSecretEnv($secretEnv)
  {
    $this->secretEnv = $secretEnv;
  }
  /** @return string[] */
  public function getSecretEnv()
  {
    return $this->secretEnv;
  }
}

class SecretManagerSecret extends \Google\Model
{
  /** @var string */
  public $env;
  /** @var string */
  public $versionName;

  /** @param string */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /** @return string */
  public function getEnv()
  {
    return $this->env;
  }
  /** @param string */
  public function setVersionName($versionName)
  {
    $this->versionName = $versionName;
  }
  /** @return string */
  public function getVersionName()
  {
    return $this->versionName;
  }
}

class Secrets extends \Google\Collection
{
  /** @var InlineSecret[] */
  public $inline;
  /** @var SecretManagerSecret[] */
  public $secretManager;
  protected $collection_key = 'secretManager';
  protected $inlineType = InlineSecret::class;
  protected $inlineDataType = 'array';
  protected $secretManagerType = SecretManagerSecret::class;
  protected $secretManagerDataType = 'array';
  /** @param InlineSecret[] */
  public function setInline($inline)
  {
    $this->inline = $inline;
  }
  /** @return InlineSecret[] */
  public function getInline()
  {
    return $this->inline;
  }
  /** @param SecretManagerSecret[] */
  public function setSecretManager($secretManager)
  {
    $this->secretManager = $secretManager;
  }
  /** @return SecretManagerSecret[] */
  public function getSecretManager()
  {
    return $this->secretManager;
  }
}

class ServiceDirectoryConfig extends \Google\Model
{
  /** @var string */
  public $service;

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

class SlackDelivery extends \Google\Model
{
  /** @var NotifierSecretRef */
  public $webhookUri;
  protected $webhookUriType = NotifierSecretRef::class;
  protected $webhookUriDataType = '';
  /** @param NotifierSecretRef */
  public function setWebhookUri(NotifierSecretRef $webhookUri)
  {
    $this->webhookUri = $webhookUri;
  }
  /** @return NotifierSecretRef */
  public function getWebhookUri()
  {
    return $this->webhookUri;
  }
}

class Source extends \Google\Model
{
  /** @var RepoSource */
  public $repoSource;
  /** @var StorageSource */
  public $storageSource;
  /** @var StorageSourceManifest */
  public $storageSourceManifest;
  protected $repoSourceType = RepoSource::class;
  protected $repoSourceDataType = '';
  protected $storageSourceType = StorageSource::class;
  protected $storageSourceDataType = '';
  protected $storageSourceManifestType = StorageSourceManifest::class;
  protected $storageSourceManifestDataType = '';
  /** @param RepoSource */
  public function setRepoSource(RepoSource $repoSource)
  {
    $this->repoSource = $repoSource;
  }
  /** @return RepoSource */
  public function getRepoSource()
  {
    return $this->repoSource;
  }
  /** @param StorageSource */
  public function setStorageSource(StorageSource $storageSource)
  {
    $this->storageSource = $storageSource;
  }
  /** @return StorageSource */
  public function getStorageSource()
  {
    return $this->storageSource;
  }
  /** @param StorageSourceManifest */
  public function setStorageSourceManifest(StorageSourceManifest $storageSourceManifest)
  {
    $this->storageSourceManifest = $storageSourceManifest;
  }
  /** @return StorageSourceManifest */
  public function getStorageSourceManifest()
  {
    return $this->storageSourceManifest;
  }
}

class SourceProvenance extends \Google\Model
{
  /** @var FileHashes[] */
  public $fileHashes;
  /** @var RepoSource */
  public $resolvedRepoSource;
  /** @var StorageSource */
  public $resolvedStorageSource;
  /** @var StorageSourceManifest */
  public $resolvedStorageSourceManifest;
  protected $fileHashesType = FileHashes::class;
  protected $fileHashesDataType = 'map';
  protected $resolvedRepoSourceType = RepoSource::class;
  protected $resolvedRepoSourceDataType = '';
  protected $resolvedStorageSourceType = StorageSource::class;
  protected $resolvedStorageSourceDataType = '';
  protected $resolvedStorageSourceManifestType = StorageSourceManifest::class;
  protected $resolvedStorageSourceManifestDataType = '';
  /** @param FileHashes[] */
  public function setFileHashes($fileHashes)
  {
    $this->fileHashes = $fileHashes;
  }
  /** @return FileHashes[] */
  public function getFileHashes()
  {
    return $this->fileHashes;
  }
  /** @param RepoSource */
  public function setResolvedRepoSource(RepoSource $resolvedRepoSource)
  {
    $this->resolvedRepoSource = $resolvedRepoSource;
  }
  /** @return RepoSource */
  public function getResolvedRepoSource()
  {
    return $this->resolvedRepoSource;
  }
  /** @param StorageSource */
  public function setResolvedStorageSource(StorageSource $resolvedStorageSource)
  {
    $this->resolvedStorageSource = $resolvedStorageSource;
  }
  /** @return StorageSource */
  public function getResolvedStorageSource()
  {
    return $this->resolvedStorageSource;
  }
  /** @param StorageSourceManifest */
  public function setResolvedStorageSourceManifest(StorageSourceManifest $resolvedStorageSourceManifest)
  {
    $this->resolvedStorageSourceManifest = $resolvedStorageSourceManifest;
  }
  /** @return StorageSourceManifest */
  public function getResolvedStorageSourceManifest()
  {
    return $this->resolvedStorageSourceManifest;
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

class StorageSource extends \Google\Model
{
  /** @var string */
  public $bucket;
  /** @var string */
  public $generation;
  /** @var string */
  public $object;

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
  public function setObject($object)
  {
    $this->object = $object;
  }
  /** @return string */
  public function getObject()
  {
    return $this->object;
  }
}

class StorageSourceManifest extends \Google\Model
{
  /** @var string */
  public $bucket;
  /** @var string */
  public $generation;
  /** @var string */
  public $object;

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
  public function setObject($object)
  {
    $this->object = $object;
  }
  /** @return string */
  public function getObject()
  {
    return $this->object;
  }
}

class TimeSpan extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

  /** @param string */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
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
}

class UpdateBitbucketServerConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $bitbucketServerConfig;
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;

  /** @param string */
  public function setBitbucketServerConfig($bitbucketServerConfig)
  {
    $this->bitbucketServerConfig = $bitbucketServerConfig;
  }
  /** @return string */
  public function getBitbucketServerConfig()
  {
    return $this->bitbucketServerConfig;
  }
  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
}

class UpdateGitHubEnterpriseConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $githubEnterpriseConfig;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setGithubEnterpriseConfig($githubEnterpriseConfig)
  {
    $this->githubEnterpriseConfig = $githubEnterpriseConfig;
  }
  /** @return string */
  public function getGithubEnterpriseConfig()
  {
    return $this->githubEnterpriseConfig;
  }
}

class UpdateGitLabConfigOperationMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $gitlabConfig;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setGitlabConfig($gitlabConfig)
  {
    $this->gitlabConfig = $gitlabConfig;
  }
  /** @return string */
  public function getGitlabConfig()
  {
    return $this->gitlabConfig;
  }
}

class UpdateWorkerPoolOperationMetadata extends \Google\Model
{
  /** @var string */
  public $completeTime;
  /** @var string */
  public $createTime;
  /** @var string */
  public $workerPool;

  /** @param string */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /** @return string */
  public function getCompleteTime()
  {
    return $this->completeTime;
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
  public function setWorkerPool($workerPool)
  {
    $this->workerPool = $workerPool;
  }
  /** @return string */
  public function getWorkerPool()
  {
    return $this->workerPool;
  }
}

class UploadedMavenArtifact extends \Google\Model
{
  /** @var FileHashes */
  public $fileHashes;
  /** @var TimeSpan */
  public $pushTiming;
  /** @var string */
  public $uri;
  protected $fileHashesType = FileHashes::class;
  protected $fileHashesDataType = '';
  protected $pushTimingType = TimeSpan::class;
  protected $pushTimingDataType = '';
  /** @param FileHashes */
  public function setFileHashes(FileHashes $fileHashes)
  {
    $this->fileHashes = $fileHashes;
  }
  /** @return FileHashes */
  public function getFileHashes()
  {
    return $this->fileHashes;
  }
  /** @param TimeSpan */
  public function setPushTiming(TimeSpan $pushTiming)
  {
    $this->pushTiming = $pushTiming;
  }
  /** @return TimeSpan */
  public function getPushTiming()
  {
    return $this->pushTiming;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class UploadedPythonPackage extends \Google\Model
{
  /** @var FileHashes */
  public $fileHashes;
  /** @var TimeSpan */
  public $pushTiming;
  /** @var string */
  public $uri;
  protected $fileHashesType = FileHashes::class;
  protected $fileHashesDataType = '';
  protected $pushTimingType = TimeSpan::class;
  protected $pushTimingDataType = '';
  /** @param FileHashes */
  public function setFileHashes(FileHashes $fileHashes)
  {
    $this->fileHashes = $fileHashes;
  }
  /** @return FileHashes */
  public function getFileHashes()
  {
    return $this->fileHashes;
  }
  /** @param TimeSpan */
  public function setPushTiming(TimeSpan $pushTiming)
  {
    $this->pushTiming = $pushTiming;
  }
  /** @return TimeSpan */
  public function getPushTiming()
  {
    return $this->pushTiming;
  }
  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class Volume extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $path;

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
}

class Warning extends \Google\Model
{
  /** @var string */
  public $priority;
  /** @var string */
  public $text;

  /** @param string */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return string */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

class WebhookConfig extends \Google\Model
{
  /** @var string */
  public $secret;
  /** @var string */
  public $state;

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

class WorkerConfig extends \Google\Model
{
  /** @var string */
  public $diskSizeGb;
  /** @var string */
  public $machineType;

  /** @param string */
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  /** @return string */
  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }
  /** @param string */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
  }
}

class WorkerPool extends \Google\Model
{
  /** @var string[] */
  public $annotations;
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
  /** @var PrivatePoolV1Config */
  public $privatePoolV1Config;
  /** @var string */
  public $state;
  /** @var string */
  public $uid;
  /** @var string */
  public $updateTime;
  protected $privatePoolV1ConfigType = PrivatePoolV1Config::class;
  protected $privatePoolV1ConfigDataType = '';
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
  /** @param PrivatePoolV1Config */
  public function setPrivatePoolV1Config(PrivatePoolV1Config $privatePoolV1Config)
  {
    $this->privatePoolV1Config = $privatePoolV1Config;
  }
  /** @return PrivatePoolV1Config */
  public function getPrivatePoolV1Config()
  {
    return $this->privatePoolV1Config;
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
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /** @return string */
  public function getUid()
  {
    return $this->uid;
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApprovalConfig::class, 'Google_Service_CloudBuild_ApprovalConfig');
class_alias(ApprovalResult::class, 'Google_Service_CloudBuild_ApprovalResult');
class_alias(ApproveBuildRequest::class, 'Google_Service_CloudBuild_ApproveBuildRequest');
class_alias(ArtifactObjects::class, 'Google_Service_CloudBuild_ArtifactObjects');
class_alias(ArtifactResult::class, 'Google_Service_CloudBuild_ArtifactResult');
class_alias(Artifacts::class, 'Google_Service_CloudBuild_Artifacts');
class_alias(BatchCreateBitbucketServerConnectedRepositoriesRequest::class, 'Google_Service_CloudBuild_BatchCreateBitbucketServerConnectedRepositoriesRequest');
class_alias(BatchCreateBitbucketServerConnectedRepositoriesResponse::class, 'Google_Service_CloudBuild_BatchCreateBitbucketServerConnectedRepositoriesResponse');
class_alias(BatchCreateBitbucketServerConnectedRepositoriesResponseMetadata::class, 'Google_Service_CloudBuild_BatchCreateBitbucketServerConnectedRepositoriesResponseMetadata');
class_alias(BatchCreateGitLabConnectedRepositoriesRequest::class, 'Google_Service_CloudBuild_BatchCreateGitLabConnectedRepositoriesRequest');
class_alias(BatchCreateGitLabConnectedRepositoriesResponse::class, 'Google_Service_CloudBuild_BatchCreateGitLabConnectedRepositoriesResponse');
class_alias(BatchCreateGitLabConnectedRepositoriesResponseMetadata::class, 'Google_Service_CloudBuild_BatchCreateGitLabConnectedRepositoriesResponseMetadata');
class_alias(BitbucketServerConfig::class, 'Google_Service_CloudBuild_BitbucketServerConfig');
class_alias(BitbucketServerConnectedRepository::class, 'Google_Service_CloudBuild_BitbucketServerConnectedRepository');
class_alias(BitbucketServerRepository::class, 'Google_Service_CloudBuild_BitbucketServerRepository');
class_alias(BitbucketServerRepositoryId::class, 'Google_Service_CloudBuild_BitbucketServerRepositoryId');
class_alias(BitbucketServerSecrets::class, 'Google_Service_CloudBuild_BitbucketServerSecrets');
class_alias(BitbucketServerTriggerConfig::class, 'Google_Service_CloudBuild_BitbucketServerTriggerConfig');
class_alias(Build::class, 'Google_Service_CloudBuild_Build');
class_alias(BuildApproval::class, 'Google_Service_CloudBuild_BuildApproval');
class_alias(BuildOperationMetadata::class, 'Google_Service_CloudBuild_BuildOperationMetadata');
class_alias(BuildOptions::class, 'Google_Service_CloudBuild_BuildOptions');
class_alias(BuildStep::class, 'Google_Service_CloudBuild_BuildStep');
class_alias(BuildTrigger::class, 'Google_Service_CloudBuild_BuildTrigger');
class_alias(BuiltImage::class, 'Google_Service_CloudBuild_BuiltImage');
class_alias(CancelBuildRequest::class, 'Google_Service_CloudBuild_CancelBuildRequest');
class_alias(CancelOperationRequest::class, 'Google_Service_CloudBuild_CancelOperationRequest');
class_alias(CloudbuildEmpty::class, 'Google_Service_CloudBuild_CloudbuildEmpty');
class_alias(CreateBitbucketServerConfigOperationMetadata::class, 'Google_Service_CloudBuild_CreateBitbucketServerConfigOperationMetadata');
class_alias(CreateBitbucketServerConnectedRepositoryRequest::class, 'Google_Service_CloudBuild_CreateBitbucketServerConnectedRepositoryRequest');
class_alias(CreateGitHubEnterpriseConfigOperationMetadata::class, 'Google_Service_CloudBuild_CreateGitHubEnterpriseConfigOperationMetadata');
class_alias(CreateGitLabConfigOperationMetadata::class, 'Google_Service_CloudBuild_CreateGitLabConfigOperationMetadata');
class_alias(CreateGitLabConnectedRepositoryRequest::class, 'Google_Service_CloudBuild_CreateGitLabConnectedRepositoryRequest');
class_alias(CreateWorkerPoolOperationMetadata::class, 'Google_Service_CloudBuild_CreateWorkerPoolOperationMetadata');
class_alias(DeleteBitbucketServerConfigOperationMetadata::class, 'Google_Service_CloudBuild_DeleteBitbucketServerConfigOperationMetadata');
class_alias(DeleteGitHubEnterpriseConfigOperationMetadata::class, 'Google_Service_CloudBuild_DeleteGitHubEnterpriseConfigOperationMetadata');
class_alias(DeleteGitLabConfigOperationMetadata::class, 'Google_Service_CloudBuild_DeleteGitLabConfigOperationMetadata');
class_alias(DeleteWorkerPoolOperationMetadata::class, 'Google_Service_CloudBuild_DeleteWorkerPoolOperationMetadata');
class_alias(FailureInfo::class, 'Google_Service_CloudBuild_FailureInfo');
class_alias(FileHashes::class, 'Google_Service_CloudBuild_FileHashes');
class_alias(GitFileSource::class, 'Google_Service_CloudBuild_GitFileSource');
class_alias(GitHubEnterpriseConfig::class, 'Google_Service_CloudBuild_GitHubEnterpriseConfig');
class_alias(GitHubEnterpriseSecrets::class, 'Google_Service_CloudBuild_GitHubEnterpriseSecrets');
class_alias(GitHubEventsConfig::class, 'Google_Service_CloudBuild_GitHubEventsConfig');
class_alias(GitLabConfig::class, 'Google_Service_CloudBuild_GitLabConfig');
class_alias(GitLabConnectedRepository::class, 'Google_Service_CloudBuild_GitLabConnectedRepository');
class_alias(GitLabEnterpriseConfig::class, 'Google_Service_CloudBuild_GitLabEnterpriseConfig');
class_alias(GitLabEventsConfig::class, 'Google_Service_CloudBuild_GitLabEventsConfig');
class_alias(GitLabRepository::class, 'Google_Service_CloudBuild_GitLabRepository');
class_alias(GitLabRepositoryId::class, 'Google_Service_CloudBuild_GitLabRepositoryId');
class_alias(GitLabSecrets::class, 'Google_Service_CloudBuild_GitLabSecrets');
class_alias(GitRepoSource::class, 'Google_Service_CloudBuild_GitRepoSource');
class_alias(HTTPDelivery::class, 'Google_Service_CloudBuild_HTTPDelivery');
class_alias(Hash::class, 'Google_Service_CloudBuild_Hash');
class_alias(HttpBody::class, 'Google_Service_CloudBuild_HttpBody');
class_alias(InlineSecret::class, 'Google_Service_CloudBuild_InlineSecret');
class_alias(ListBitbucketServerConfigsResponse::class, 'Google_Service_CloudBuild_ListBitbucketServerConfigsResponse');
class_alias(ListBitbucketServerRepositoriesResponse::class, 'Google_Service_CloudBuild_ListBitbucketServerRepositoriesResponse');
class_alias(ListBuildTriggersResponse::class, 'Google_Service_CloudBuild_ListBuildTriggersResponse');
class_alias(ListBuildsResponse::class, 'Google_Service_CloudBuild_ListBuildsResponse');
class_alias(ListGitLabConfigsResponse::class, 'Google_Service_CloudBuild_ListGitLabConfigsResponse');
class_alias(ListGitLabRepositoriesResponse::class, 'Google_Service_CloudBuild_ListGitLabRepositoriesResponse');
class_alias(ListGithubEnterpriseConfigsResponse::class, 'Google_Service_CloudBuild_ListGithubEnterpriseConfigsResponse');
class_alias(ListWorkerPoolsResponse::class, 'Google_Service_CloudBuild_ListWorkerPoolsResponse');
class_alias(MavenArtifact::class, 'Google_Service_CloudBuild_MavenArtifact');
class_alias(NetworkConfig::class, 'Google_Service_CloudBuild_NetworkConfig');
class_alias(Notification::class, 'Google_Service_CloudBuild_Notification');
class_alias(NotifierConfig::class, 'Google_Service_CloudBuild_NotifierConfig');
class_alias(NotifierMetadata::class, 'Google_Service_CloudBuild_NotifierMetadata');
class_alias(NotifierSecret::class, 'Google_Service_CloudBuild_NotifierSecret');
class_alias(NotifierSecretRef::class, 'Google_Service_CloudBuild_NotifierSecretRef');
class_alias(NotifierSpec::class, 'Google_Service_CloudBuild_NotifierSpec');
class_alias(Operation::class, 'Google_Service_CloudBuild_Operation');
class_alias(OperationMetadata::class, 'Google_Service_CloudBuild_OperationMetadata');
class_alias(PoolOption::class, 'Google_Service_CloudBuild_PoolOption');
class_alias(PrivatePoolV1Config::class, 'Google_Service_CloudBuild_PrivatePoolV1Config');
class_alias(ProcessAppManifestCallbackOperationMetadata::class, 'Google_Service_CloudBuild_ProcessAppManifestCallbackOperationMetadata');
class_alias(PubsubConfig::class, 'Google_Service_CloudBuild_PubsubConfig');
class_alias(PullRequestFilter::class, 'Google_Service_CloudBuild_PullRequestFilter');
class_alias(PushFilter::class, 'Google_Service_CloudBuild_PushFilter');
class_alias(PythonPackage::class, 'Google_Service_CloudBuild_PythonPackage');
class_alias(ReceiveTriggerWebhookResponse::class, 'Google_Service_CloudBuild_ReceiveTriggerWebhookResponse');
class_alias(RemoveBitbucketServerConnectedRepositoryRequest::class, 'Google_Service_CloudBuild_RemoveBitbucketServerConnectedRepositoryRequest');
class_alias(RemoveGitLabConnectedRepositoryRequest::class, 'Google_Service_CloudBuild_RemoveGitLabConnectedRepositoryRequest');
class_alias(RepoSource::class, 'Google_Service_CloudBuild_RepoSource');
class_alias(RepositoryEventConfig::class, 'Google_Service_CloudBuild_RepositoryEventConfig');
class_alias(Results::class, 'Google_Service_CloudBuild_Results');
class_alias(RetryBuildRequest::class, 'Google_Service_CloudBuild_RetryBuildRequest');
class_alias(RunBuildTriggerRequest::class, 'Google_Service_CloudBuild_RunBuildTriggerRequest');
class_alias(SMTPDelivery::class, 'Google_Service_CloudBuild_SMTPDelivery');
class_alias(Secret::class, 'Google_Service_CloudBuild_Secret');
class_alias(SecretManagerSecret::class, 'Google_Service_CloudBuild_SecretManagerSecret');
class_alias(Secrets::class, 'Google_Service_CloudBuild_Secrets');
class_alias(ServiceDirectoryConfig::class, 'Google_Service_CloudBuild_ServiceDirectoryConfig');
class_alias(SlackDelivery::class, 'Google_Service_CloudBuild_SlackDelivery');
class_alias(Source::class, 'Google_Service_CloudBuild_Source');
class_alias(SourceProvenance::class, 'Google_Service_CloudBuild_SourceProvenance');
class_alias(Status::class, 'Google_Service_CloudBuild_Status');
class_alias(StorageSource::class, 'Google_Service_CloudBuild_StorageSource');
class_alias(StorageSourceManifest::class, 'Google_Service_CloudBuild_StorageSourceManifest');
class_alias(TimeSpan::class, 'Google_Service_CloudBuild_TimeSpan');
class_alias(UpdateBitbucketServerConfigOperationMetadata::class, 'Google_Service_CloudBuild_UpdateBitbucketServerConfigOperationMetadata');
class_alias(UpdateGitHubEnterpriseConfigOperationMetadata::class, 'Google_Service_CloudBuild_UpdateGitHubEnterpriseConfigOperationMetadata');
class_alias(UpdateGitLabConfigOperationMetadata::class, 'Google_Service_CloudBuild_UpdateGitLabConfigOperationMetadata');
class_alias(UpdateWorkerPoolOperationMetadata::class, 'Google_Service_CloudBuild_UpdateWorkerPoolOperationMetadata');
class_alias(UploadedMavenArtifact::class, 'Google_Service_CloudBuild_UploadedMavenArtifact');
class_alias(UploadedPythonPackage::class, 'Google_Service_CloudBuild_UploadedPythonPackage');
class_alias(Volume::class, 'Google_Service_CloudBuild_Volume');
class_alias(Warning::class, 'Google_Service_CloudBuild_Warning');
class_alias(WebhookConfig::class, 'Google_Service_CloudBuild_WebhookConfig');
class_alias(WorkerConfig::class, 'Google_Service_CloudBuild_WorkerConfig');
class_alias(WorkerPool::class, 'Google_Service_CloudBuild_WorkerPool');
