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

namespace Google\Service\OnDemandScanning;

class AliasContext extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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

class AnalysisCompleted extends \Google\Collection
{
  /** @var string[] */
  public $analysisType;
  protected $collection_key = 'analysisType';
  /** @param string[] */
  public function setAnalysisType($analysisType)
  {
    $this->analysisType = $analysisType;
  }
  /** @return string[] */
  public function getAnalysisType()
  {
    return $this->analysisType;
  }
}

class AnalyzePackagesMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $resourceUri;

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
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /** @return string */
  public function getResourceUri()
  {
    return $this->resourceUri;
  }
}

class AnalyzePackagesMetadataV1 extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $resourceUri;

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
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /** @return string */
  public function getResourceUri()
  {
    return $this->resourceUri;
  }
}

class AnalyzePackagesRequestV1 extends \Google\Collection
{
  /** @var bool */
  public $includeOsvData;
  /** @var PackageData[] */
  public $packages;
  /** @var string */
  public $resourceUri;
  protected $collection_key = 'packages';
  protected $packagesType = PackageData::class;
  protected $packagesDataType = 'array';
  /** @param bool */
  public function setIncludeOsvData($includeOsvData)
  {
    $this->includeOsvData = $includeOsvData;
  }
  /** @return bool */
  public function getIncludeOsvData()
  {
    return $this->includeOsvData;
  }
  /** @param PackageData[] */
  public function setPackages($packages)
  {
    $this->packages = $packages;
  }
  /** @return PackageData[] */
  public function getPackages()
  {
    return $this->packages;
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
}

class AnalyzePackagesResponse extends \Google\Model
{
  /** @var string */
  public $scan;

  /** @param string */
  public function setScan($scan)
  {
    $this->scan = $scan;
  }
  /** @return string */
  public function getScan()
  {
    return $this->scan;
  }
}

class AnalyzePackagesResponseV1 extends \Google\Model
{
  /** @var string */
  public $scan;

  /** @param string */
  public function setScan($scan)
  {
    $this->scan = $scan;
  }
  /** @return string */
  public function getScan()
  {
    return $this->scan;
  }
}

class Artifact extends \Google\Collection
{
  /** @var string */
  public $checksum;
  /** @var string */
  public $id;
  /** @var string[] */
  public $names;
  protected $collection_key = 'names';
  /** @param string */
  public function setChecksum($checksum)
  {
    $this->checksum = $checksum;
  }
  /** @return string */
  public function getChecksum()
  {
    return $this->checksum;
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
  public function setNames($names)
  {
    $this->names = $names;
  }
  /** @return string[] */
  public function getNames()
  {
    return $this->names;
  }
}

class AttestationOccurrence extends \Google\Collection
{
  /** @var Jwt[] */
  public $jwts;
  /** @var string */
  public $serializedPayload;
  /** @var Signature[] */
  public $signatures;
  protected $collection_key = 'signatures';
  protected $jwtsType = Jwt::class;
  protected $jwtsDataType = 'array';
  protected $signaturesType = Signature::class;
  protected $signaturesDataType = 'array';
  /** @param Jwt[] */
  public function setJwts($jwts)
  {
    $this->jwts = $jwts;
  }
  /** @return Jwt[] */
  public function getJwts()
  {
    return $this->jwts;
  }
  /** @param string */
  public function setSerializedPayload($serializedPayload)
  {
    $this->serializedPayload = $serializedPayload;
  }
  /** @return string */
  public function getSerializedPayload()
  {
    return $this->serializedPayload;
  }
  /** @param Signature[] */
  public function setSignatures($signatures)
  {
    $this->signatures = $signatures;
  }
  /** @return Signature[] */
  public function getSignatures()
  {
    return $this->signatures;
  }
}

class BuildOccurrence extends \Google\Model
{
  /** @var InTotoProvenance */
  public $intotoProvenance;
  /** @var InTotoStatement */
  public $intotoStatement;
  /** @var BuildProvenance */
  public $provenance;
  /** @var string */
  public $provenanceBytes;
  protected $intotoProvenanceType = InTotoProvenance::class;
  protected $intotoProvenanceDataType = '';
  protected $intotoStatementType = InTotoStatement::class;
  protected $intotoStatementDataType = '';
  protected $provenanceType = BuildProvenance::class;
  protected $provenanceDataType = '';
  /** @param InTotoProvenance */
  public function setIntotoProvenance(InTotoProvenance $intotoProvenance)
  {
    $this->intotoProvenance = $intotoProvenance;
  }
  /** @return InTotoProvenance */
  public function getIntotoProvenance()
  {
    return $this->intotoProvenance;
  }
  /** @param InTotoStatement */
  public function setIntotoStatement(InTotoStatement $intotoStatement)
  {
    $this->intotoStatement = $intotoStatement;
  }
  /** @return InTotoStatement */
  public function getIntotoStatement()
  {
    return $this->intotoStatement;
  }
  /** @param BuildProvenance */
  public function setProvenance(BuildProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return BuildProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param string */
  public function setProvenanceBytes($provenanceBytes)
  {
    $this->provenanceBytes = $provenanceBytes;
  }
  /** @return string */
  public function getProvenanceBytes()
  {
    return $this->provenanceBytes;
  }
}

class BuildProvenance extends \Google\Collection
{
  /** @var string[] */
  public $buildOptions;
  /** @var string */
  public $builderVersion;
  /** @var Artifact[] */
  public $builtArtifacts;
  /** @var Command[] */
  public $commands;
  /** @var string */
  public $createTime;
  /** @var string */
  public $creator;
  /** @var string */
  public $endTime;
  /** @var string */
  public $id;
  /** @var string */
  public $logsUri;
  /** @var string */
  public $projectId;
  /** @var Source */
  public $sourceProvenance;
  /** @var string */
  public $startTime;
  /** @var string */
  public $triggerId;
  protected $collection_key = 'commands';
  protected $builtArtifactsType = Artifact::class;
  protected $builtArtifactsDataType = 'array';
  protected $commandsType = Command::class;
  protected $commandsDataType = 'array';
  protected $sourceProvenanceType = Source::class;
  protected $sourceProvenanceDataType = '';
  /** @param string[] */
  public function setBuildOptions($buildOptions)
  {
    $this->buildOptions = $buildOptions;
  }
  /** @return string[] */
  public function getBuildOptions()
  {
    return $this->buildOptions;
  }
  /** @param string */
  public function setBuilderVersion($builderVersion)
  {
    $this->builderVersion = $builderVersion;
  }
  /** @return string */
  public function getBuilderVersion()
  {
    return $this->builderVersion;
  }
  /** @param Artifact[] */
  public function setBuiltArtifacts($builtArtifacts)
  {
    $this->builtArtifacts = $builtArtifacts;
  }
  /** @return Artifact[] */
  public function getBuiltArtifacts()
  {
    return $this->builtArtifacts;
  }
  /** @param Command[] */
  public function setCommands($commands)
  {
    $this->commands = $commands;
  }
  /** @return Command[] */
  public function getCommands()
  {
    return $this->commands;
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
  public function setCreator($creator)
  {
    $this->creator = $creator;
  }
  /** @return string */
  public function getCreator()
  {
    return $this->creator;
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
  public function setLogsUri($logsUri)
  {
    $this->logsUri = $logsUri;
  }
  /** @return string */
  public function getLogsUri()
  {
    return $this->logsUri;
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
  /** @param Source */
  public function setSourceProvenance(Source $sourceProvenance)
  {
    $this->sourceProvenance = $sourceProvenance;
  }
  /** @return Source */
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

class BuilderConfig extends \Google\Model
{
  /** @var string */
  public $id;

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
}

class CVSS extends \Google\Model
{
  /** @var string */
  public $attackComplexity;
  /** @var string */
  public $attackVector;
  /** @var string */
  public $authentication;
  /** @var string */
  public $availabilityImpact;
  /** @var float */
  public $baseScore;
  /** @var string */
  public $confidentialityImpact;
  /** @var float */
  public $exploitabilityScore;
  /** @var float */
  public $impactScore;
  /** @var string */
  public $integrityImpact;
  /** @var string */
  public $privilegesRequired;
  /** @var string */
  public $scope;
  /** @var string */
  public $userInteraction;

  /** @param string */
  public function setAttackComplexity($attackComplexity)
  {
    $this->attackComplexity = $attackComplexity;
  }
  /** @return string */
  public function getAttackComplexity()
  {
    return $this->attackComplexity;
  }
  /** @param string */
  public function setAttackVector($attackVector)
  {
    $this->attackVector = $attackVector;
  }
  /** @return string */
  public function getAttackVector()
  {
    return $this->attackVector;
  }
  /** @param string */
  public function setAuthentication($authentication)
  {
    $this->authentication = $authentication;
  }
  /** @return string */
  public function getAuthentication()
  {
    return $this->authentication;
  }
  /** @param string */
  public function setAvailabilityImpact($availabilityImpact)
  {
    $this->availabilityImpact = $availabilityImpact;
  }
  /** @return string */
  public function getAvailabilityImpact()
  {
    return $this->availabilityImpact;
  }
  /** @param float */
  public function setBaseScore($baseScore)
  {
    $this->baseScore = $baseScore;
  }
  /** @return float */
  public function getBaseScore()
  {
    return $this->baseScore;
  }
  /** @param string */
  public function setConfidentialityImpact($confidentialityImpact)
  {
    $this->confidentialityImpact = $confidentialityImpact;
  }
  /** @return string */
  public function getConfidentialityImpact()
  {
    return $this->confidentialityImpact;
  }
  /** @param float */
  public function setExploitabilityScore($exploitabilityScore)
  {
    $this->exploitabilityScore = $exploitabilityScore;
  }
  /** @return float */
  public function getExploitabilityScore()
  {
    return $this->exploitabilityScore;
  }
  /** @param float */
  public function setImpactScore($impactScore)
  {
    $this->impactScore = $impactScore;
  }
  /** @return float */
  public function getImpactScore()
  {
    return $this->impactScore;
  }
  /** @param string */
  public function setIntegrityImpact($integrityImpact)
  {
    $this->integrityImpact = $integrityImpact;
  }
  /** @return string */
  public function getIntegrityImpact()
  {
    return $this->integrityImpact;
  }
  /** @param string */
  public function setPrivilegesRequired($privilegesRequired)
  {
    $this->privilegesRequired = $privilegesRequired;
  }
  /** @return string */
  public function getPrivilegesRequired()
  {
    return $this->privilegesRequired;
  }
  /** @param string */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
  /** @param string */
  public function setUserInteraction($userInteraction)
  {
    $this->userInteraction = $userInteraction;
  }
  /** @return string */
  public function getUserInteraction()
  {
    return $this->userInteraction;
  }
}

class Category extends \Google\Model
{
  /** @var string */
  public $categoryId;
  /** @var string */
  public $name;

  /** @param string */
  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  /** @return string */
  public function getCategoryId()
  {
    return $this->categoryId;
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

class CloudRepoSourceContext extends \Google\Model
{
  /** @var AliasContext */
  public $aliasContext;
  /** @var RepoId */
  public $repoId;
  /** @var string */
  public $revisionId;
  protected $aliasContextType = AliasContext::class;
  protected $aliasContextDataType = '';
  protected $repoIdType = RepoId::class;
  protected $repoIdDataType = '';
  /** @param AliasContext */
  public function setAliasContext(AliasContext $aliasContext)
  {
    $this->aliasContext = $aliasContext;
  }
  /** @return AliasContext */
  public function getAliasContext()
  {
    return $this->aliasContext;
  }
  /** @param RepoId */
  public function setRepoId(RepoId $repoId)
  {
    $this->repoId = $repoId;
  }
  /** @return RepoId */
  public function getRepoId()
  {
    return $this->repoId;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
}

class Command extends \Google\Collection
{
  /** @var string[] */
  public $args;
  /** @var string */
  public $dir;
  /** @var string[] */
  public $env;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string[] */
  public $waitFor;
  protected $collection_key = 'waitFor';
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

class Completeness extends \Google\Model
{
  /** @var bool */
  public $arguments;
  /** @var bool */
  public $environment;
  /** @var bool */
  public $materials;

  /** @param bool */
  public function setArguments($arguments)
  {
    $this->arguments = $arguments;
  }
  /** @return bool */
  public function getArguments()
  {
    return $this->arguments;
  }
  /** @param bool */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return bool */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param bool */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return bool */
  public function getMaterials()
  {
    return $this->materials;
  }
}

class ComplianceOccurrence extends \Google\Collection
{
  /** @var string */
  public $nonComplianceReason;
  /** @var NonCompliantFile[] */
  public $nonCompliantFiles;
  protected $collection_key = 'nonCompliantFiles';
  protected $nonCompliantFilesType = NonCompliantFile::class;
  protected $nonCompliantFilesDataType = 'array';
  /** @param string */
  public function setNonComplianceReason($nonComplianceReason)
  {
    $this->nonComplianceReason = $nonComplianceReason;
  }
  /** @return string */
  public function getNonComplianceReason()
  {
    return $this->nonComplianceReason;
  }
  /** @param NonCompliantFile[] */
  public function setNonCompliantFiles($nonCompliantFiles)
  {
    $this->nonCompliantFiles = $nonCompliantFiles;
  }
  /** @return NonCompliantFile[] */
  public function getNonCompliantFiles()
  {
    return $this->nonCompliantFiles;
  }
}

class DSSEAttestationOccurrence extends \Google\Model
{
  /** @var Envelope */
  public $envelope;
  /** @var InTotoStatement */
  public $statement;
  protected $envelopeType = Envelope::class;
  protected $envelopeDataType = '';
  protected $statementType = InTotoStatement::class;
  protected $statementDataType = '';
  /** @param Envelope */
  public function setEnvelope(Envelope $envelope)
  {
    $this->envelope = $envelope;
  }
  /** @return Envelope */
  public function getEnvelope()
  {
    return $this->envelope;
  }
  /** @param InTotoStatement */
  public function setStatement(InTotoStatement $statement)
  {
    $this->statement = $statement;
  }
  /** @return InTotoStatement */
  public function getStatement()
  {
    return $this->statement;
  }
}

class DeploymentOccurrence extends \Google\Collection
{
  /** @var string */
  public $address;
  /** @var string */
  public $config;
  /** @var string */
  public $deployTime;
  /** @var string */
  public $platform;
  /** @var string[] */
  public $resourceUri;
  /** @var string */
  public $undeployTime;
  /** @var string */
  public $userEmail;
  protected $collection_key = 'resourceUri';
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
  public function setDeployTime($deployTime)
  {
    $this->deployTime = $deployTime;
  }
  /** @return string */
  public function getDeployTime()
  {
    return $this->deployTime;
  }
  /** @param string */
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  /** @return string */
  public function getPlatform()
  {
    return $this->platform;
  }
  /** @param string[] */
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  /** @return string[] */
  public function getResourceUri()
  {
    return $this->resourceUri;
  }
  /** @param string */
  public function setUndeployTime($undeployTime)
  {
    $this->undeployTime = $undeployTime;
  }
  /** @return string */
  public function getUndeployTime()
  {
    return $this->undeployTime;
  }
  /** @param string */
  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }
  /** @return string */
  public function getUserEmail()
  {
    return $this->userEmail;
  }
}

class DiscoveryOccurrence extends \Google\Collection
{
  /** @var AnalysisCompleted */
  public $analysisCompleted;
  /** @var Status[] */
  public $analysisError;
  /** @var string */
  public $analysisStatus;
  /** @var Status */
  public $analysisStatusError;
  /** @var string */
  public $archiveTime;
  /** @var string */
  public $continuousAnalysis;
  /** @var string */
  public $cpe;
  /** @var string */
  public $lastScanTime;
  protected $collection_key = 'analysisError';
  protected $analysisCompletedType = AnalysisCompleted::class;
  protected $analysisCompletedDataType = '';
  protected $analysisErrorType = Status::class;
  protected $analysisErrorDataType = 'array';
  protected $analysisStatusErrorType = Status::class;
  protected $analysisStatusErrorDataType = '';
  /** @param AnalysisCompleted */
  public function setAnalysisCompleted(AnalysisCompleted $analysisCompleted)
  {
    $this->analysisCompleted = $analysisCompleted;
  }
  /** @return AnalysisCompleted */
  public function getAnalysisCompleted()
  {
    return $this->analysisCompleted;
  }
  /** @param Status[] */
  public function setAnalysisError($analysisError)
  {
    $this->analysisError = $analysisError;
  }
  /** @return Status[] */
  public function getAnalysisError()
  {
    return $this->analysisError;
  }
  /** @param string */
  public function setAnalysisStatus($analysisStatus)
  {
    $this->analysisStatus = $analysisStatus;
  }
  /** @return string */
  public function getAnalysisStatus()
  {
    return $this->analysisStatus;
  }
  /** @param Status */
  public function setAnalysisStatusError(Status $analysisStatusError)
  {
    $this->analysisStatusError = $analysisStatusError;
  }
  /** @return Status */
  public function getAnalysisStatusError()
  {
    return $this->analysisStatusError;
  }
  /** @param string */
  public function setArchiveTime($archiveTime)
  {
    $this->archiveTime = $archiveTime;
  }
  /** @return string */
  public function getArchiveTime()
  {
    return $this->archiveTime;
  }
  /** @param string */
  public function setContinuousAnalysis($continuousAnalysis)
  {
    $this->continuousAnalysis = $continuousAnalysis;
  }
  /** @return string */
  public function getContinuousAnalysis()
  {
    return $this->continuousAnalysis;
  }
  /** @param string */
  public function setCpe($cpe)
  {
    $this->cpe = $cpe;
  }
  /** @return string */
  public function getCpe()
  {
    return $this->cpe;
  }
  /** @param string */
  public function setLastScanTime($lastScanTime)
  {
    $this->lastScanTime = $lastScanTime;
  }
  /** @return string */
  public function getLastScanTime()
  {
    return $this->lastScanTime;
  }
}

class Envelope extends \Google\Collection
{
  /** @var string */
  public $payload;
  /** @var string */
  public $payloadType;
  /** @var EnvelopeSignature[] */
  public $signatures;
  protected $collection_key = 'signatures';
  protected $signaturesType = EnvelopeSignature::class;
  protected $signaturesDataType = 'array';
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
  /** @param string */
  public function setPayloadType($payloadType)
  {
    $this->payloadType = $payloadType;
  }
  /** @return string */
  public function getPayloadType()
  {
    return $this->payloadType;
  }
  /** @param EnvelopeSignature[] */
  public function setSignatures($signatures)
  {
    $this->signatures = $signatures;
  }
  /** @return EnvelopeSignature[] */
  public function getSignatures()
  {
    return $this->signatures;
  }
}

class EnvelopeSignature extends \Google\Model
{
  /** @var string */
  public $keyid;
  /** @var string */
  public $sig;

  /** @param string */
  public function setKeyid($keyid)
  {
    $this->keyid = $keyid;
  }
  /** @return string */
  public function getKeyid()
  {
    return $this->keyid;
  }
  /** @param string */
  public function setSig($sig)
  {
    $this->sig = $sig;
  }
  /** @return string */
  public function getSig()
  {
    return $this->sig;
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

class FileLocation extends \Google\Model
{
  /** @var string */
  public $filePath;

  /** @param string */
  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  /** @return string */
  public function getFilePath()
  {
    return $this->filePath;
  }
}

class Fingerprint extends \Google\Collection
{
  /** @var string */
  public $v1Name;
  /** @var string[] */
  public $v2Blob;
  /** @var string */
  public $v2Name;
  protected $collection_key = 'v2Blob';
  /** @param string */
  public function setV1Name($v1Name)
  {
    $this->v1Name = $v1Name;
  }
  /** @return string */
  public function getV1Name()
  {
    return $this->v1Name;
  }
  /** @param string[] */
  public function setV2Blob($v2Blob)
  {
    $this->v2Blob = $v2Blob;
  }
  /** @return string[] */
  public function getV2Blob()
  {
    return $this->v2Blob;
  }
  /** @param string */
  public function setV2Name($v2Name)
  {
    $this->v2Name = $v2Name;
  }
  /** @return string */
  public function getV2Name()
  {
    return $this->v2Name;
  }
}

class GerritSourceContext extends \Google\Model
{
  /** @var AliasContext */
  public $aliasContext;
  /** @var string */
  public $gerritProject;
  /** @var string */
  public $hostUri;
  /** @var string */
  public $revisionId;
  protected $aliasContextType = AliasContext::class;
  protected $aliasContextDataType = '';
  /** @param AliasContext */
  public function setAliasContext(AliasContext $aliasContext)
  {
    $this->aliasContext = $aliasContext;
  }
  /** @return AliasContext */
  public function getAliasContext()
  {
    return $this->aliasContext;
  }
  /** @param string */
  public function setGerritProject($gerritProject)
  {
    $this->gerritProject = $gerritProject;
  }
  /** @return string */
  public function getGerritProject()
  {
    return $this->gerritProject;
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
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
}

class GitSourceContext extends \Google\Model
{
  /** @var string */
  public $revisionId;
  /** @var string */
  public $url;

  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
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

class GrafeasV1FileLocation extends \Google\Model
{
  /** @var string */
  public $filePath;

  /** @param string */
  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  /** @return string */
  public function getFilePath()
  {
    return $this->filePath;
  }
}

class GrafeasV1SlsaProvenanceZeroTwoSlsaBuilder extends \Google\Model
{
  /** @var string */
  public $id;

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
}

class GrafeasV1SlsaProvenanceZeroTwoSlsaCompleteness extends \Google\Model
{
  /** @var bool */
  public $environment;
  /** @var bool */
  public $materials;
  /** @var bool */
  public $parameters;

  /** @param bool */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return bool */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param bool */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return bool */
  public function getMaterials()
  {
    return $this->materials;
  }
  /** @param bool */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return bool */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource extends \Google\Model
{
  /** @var string[] */
  public $digest;
  /** @var string */
  public $entryPoint;
  /** @var string */
  public $uri;

  /** @param string[] */
  public function setDigest($digest)
  {
    $this->digest = $digest;
  }
  /** @return string[] */
  public function getDigest()
  {
    return $this->digest;
  }
  /** @param string */
  public function setEntryPoint($entryPoint)
  {
    $this->entryPoint = $entryPoint;
  }
  /** @return string */
  public function getEntryPoint()
  {
    return $this->entryPoint;
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

class GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation extends \Google\Model
{
  /** @var GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource */
  public $configSource;
  /** @var array[] */
  public $environment;
  /** @var array[] */
  public $parameters;
  protected $configSourceType = GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource::class;
  protected $configSourceDataType = '';
  /** @param GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource */
  public function setConfigSource(GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource $configSource)
  {
    $this->configSource = $configSource;
  }
  /** @return GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource */
  public function getConfigSource()
  {
    return $this->configSource;
  }
  /** @param array[] */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return array[] */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param array[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return array[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GrafeasV1SlsaProvenanceZeroTwoSlsaMaterial extends \Google\Model
{
  /** @var string[] */
  public $digest;
  /** @var string */
  public $uri;

  /** @param string[] */
  public function setDigest($digest)
  {
    $this->digest = $digest;
  }
  /** @return string[] */
  public function getDigest()
  {
    return $this->digest;
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

class GrafeasV1SlsaProvenanceZeroTwoSlsaMetadata extends \Google\Model
{
  /** @var string */
  public $buildFinishedOn;
  /** @var string */
  public $buildInvocationId;
  /** @var string */
  public $buildStartedOn;
  /** @var GrafeasV1SlsaProvenanceZeroTwoSlsaCompleteness */
  public $completeness;
  /** @var bool */
  public $reproducible;
  protected $completenessType = GrafeasV1SlsaProvenanceZeroTwoSlsaCompleteness::class;
  protected $completenessDataType = '';
  /** @param string */
  public function setBuildFinishedOn($buildFinishedOn)
  {
    $this->buildFinishedOn = $buildFinishedOn;
  }
  /** @return string */
  public function getBuildFinishedOn()
  {
    return $this->buildFinishedOn;
  }
  /** @param string */
  public function setBuildInvocationId($buildInvocationId)
  {
    $this->buildInvocationId = $buildInvocationId;
  }
  /** @return string */
  public function getBuildInvocationId()
  {
    return $this->buildInvocationId;
  }
  /** @param string */
  public function setBuildStartedOn($buildStartedOn)
  {
    $this->buildStartedOn = $buildStartedOn;
  }
  /** @return string */
  public function getBuildStartedOn()
  {
    return $this->buildStartedOn;
  }
  /** @param GrafeasV1SlsaProvenanceZeroTwoSlsaCompleteness */
  public function setCompleteness(GrafeasV1SlsaProvenanceZeroTwoSlsaCompleteness $completeness)
  {
    $this->completeness = $completeness;
  }
  /** @return GrafeasV1SlsaProvenanceZeroTwoSlsaCompleteness */
  public function getCompleteness()
  {
    return $this->completeness;
  }
  /** @param bool */
  public function setReproducible($reproducible)
  {
    $this->reproducible = $reproducible;
  }
  /** @return bool */
  public function getReproducible()
  {
    return $this->reproducible;
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

class Identity extends \Google\Model
{
  /** @var int */
  public $revision;
  /** @var string */
  public $updateId;

  /** @param int */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return int */
  public function getRevision()
  {
    return $this->revision;
  }
  /** @param string */
  public function setUpdateId($updateId)
  {
    $this->updateId = $updateId;
  }
  /** @return string */
  public function getUpdateId()
  {
    return $this->updateId;
  }
}

class ImageOccurrence extends \Google\Collection
{
  /** @var string */
  public $baseResourceUrl;
  /** @var int */
  public $distance;
  /** @var Fingerprint */
  public $fingerprint;
  /** @var Layer[] */
  public $layerInfo;
  protected $collection_key = 'layerInfo';
  protected $fingerprintType = Fingerprint::class;
  protected $fingerprintDataType = '';
  protected $layerInfoType = Layer::class;
  protected $layerInfoDataType = 'array';
  /** @param string */
  public function setBaseResourceUrl($baseResourceUrl)
  {
    $this->baseResourceUrl = $baseResourceUrl;
  }
  /** @return string */
  public function getBaseResourceUrl()
  {
    return $this->baseResourceUrl;
  }
  /** @param int */
  public function setDistance($distance)
  {
    $this->distance = $distance;
  }
  /** @return int */
  public function getDistance()
  {
    return $this->distance;
  }
  /** @param Fingerprint */
  public function setFingerprint(Fingerprint $fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /** @return Fingerprint */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
  /** @param Layer[] */
  public function setLayerInfo($layerInfo)
  {
    $this->layerInfo = $layerInfo;
  }
  /** @return Layer[] */
  public function getLayerInfo()
  {
    return $this->layerInfo;
  }
}

class InTotoProvenance extends \Google\Collection
{
  /** @var BuilderConfig */
  public $builderConfig;
  /** @var string[] */
  public $materials;
  /** @var Metadata */
  public $metadata;
  /** @var Recipe */
  public $recipe;
  protected $collection_key = 'materials';
  protected $builderConfigType = BuilderConfig::class;
  protected $builderConfigDataType = '';
  protected $metadataType = Metadata::class;
  protected $metadataDataType = '';
  protected $recipeType = Recipe::class;
  protected $recipeDataType = '';
  /** @param BuilderConfig */
  public function setBuilderConfig(BuilderConfig $builderConfig)
  {
    $this->builderConfig = $builderConfig;
  }
  /** @return BuilderConfig */
  public function getBuilderConfig()
  {
    return $this->builderConfig;
  }
  /** @param string[] */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return string[] */
  public function getMaterials()
  {
    return $this->materials;
  }
  /** @param Metadata */
  public function setMetadata(Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return Metadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param Recipe */
  public function setRecipe(Recipe $recipe)
  {
    $this->recipe = $recipe;
  }
  /** @return Recipe */
  public function getRecipe()
  {
    return $this->recipe;
  }
}

class InTotoStatement extends \Google\Collection
{
  /** @var string */
  public $type;
  /** @var string */
  public $predicateType;
  /** @var InTotoProvenance */
  public $provenance;
  /** @var SlsaProvenance */
  public $slsaProvenance;
  /** @var SlsaProvenanceZeroTwo */
  public $slsaProvenanceZeroTwo;
  /** @var Subject[] */
  public $subject;
  protected $collection_key = 'subject';
  protected $internal_gapi_mappings = [
        "type" => "_type",
  ];
  protected $provenanceType = InTotoProvenance::class;
  protected $provenanceDataType = '';
  protected $slsaProvenanceType = SlsaProvenance::class;
  protected $slsaProvenanceDataType = '';
  protected $slsaProvenanceZeroTwoType = SlsaProvenanceZeroTwo::class;
  protected $slsaProvenanceZeroTwoDataType = '';
  protected $subjectType = Subject::class;
  protected $subjectDataType = 'array';
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
  public function setPredicateType($predicateType)
  {
    $this->predicateType = $predicateType;
  }
  /** @return string */
  public function getPredicateType()
  {
    return $this->predicateType;
  }
  /** @param InTotoProvenance */
  public function setProvenance(InTotoProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /** @return InTotoProvenance */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /** @param SlsaProvenance */
  public function setSlsaProvenance(SlsaProvenance $slsaProvenance)
  {
    $this->slsaProvenance = $slsaProvenance;
  }
  /** @return SlsaProvenance */
  public function getSlsaProvenance()
  {
    return $this->slsaProvenance;
  }
  /** @param SlsaProvenanceZeroTwo */
  public function setSlsaProvenanceZeroTwo(SlsaProvenanceZeroTwo $slsaProvenanceZeroTwo)
  {
    $this->slsaProvenanceZeroTwo = $slsaProvenanceZeroTwo;
  }
  /** @return SlsaProvenanceZeroTwo */
  public function getSlsaProvenanceZeroTwo()
  {
    return $this->slsaProvenanceZeroTwo;
  }
  /** @param Subject[] */
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /** @return Subject[] */
  public function getSubject()
  {
    return $this->subject;
  }
}

class Jwt extends \Google\Model
{
  /** @var string */
  public $compactJwt;

  /** @param string */
  public function setCompactJwt($compactJwt)
  {
    $this->compactJwt = $compactJwt;
  }
  /** @return string */
  public function getCompactJwt()
  {
    return $this->compactJwt;
  }
}

class LanguagePackageDependency extends \Google\Model
{
  /** @var string */
  public $package;
  /** @var string */
  public $version;

  /** @param string */
  public function setPackage($package)
  {
    $this->package = $package;
  }
  /** @return string */
  public function getPackage()
  {
    return $this->package;
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

class Layer extends \Google\Model
{
  /** @var string */
  public $arguments;
  /** @var string */
  public $directive;

  /** @param string */
  public function setArguments($arguments)
  {
    $this->arguments = $arguments;
  }
  /** @return string */
  public function getArguments()
  {
    return $this->arguments;
  }
  /** @param string */
  public function setDirective($directive)
  {
    $this->directive = $directive;
  }
  /** @return string */
  public function getDirective()
  {
    return $this->directive;
  }
}

class License extends \Google\Model
{
  /** @var string */
  public $comments;
  /** @var string */
  public $expression;

  /** @param string */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  /** @return string */
  public function getComments()
  {
    return $this->comments;
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

class ListVulnerabilitiesResponseV1 extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Occurrence[] */
  public $occurrences;
  protected $collection_key = 'occurrences';
  protected $occurrencesType = Occurrence::class;
  protected $occurrencesDataType = 'array';
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
  /** @param Occurrence[] */
  public function setOccurrences($occurrences)
  {
    $this->occurrences = $occurrences;
  }
  /** @return Occurrence[] */
  public function getOccurrences()
  {
    return $this->occurrences;
  }
}

class Location extends \Google\Model
{
  /** @var string */
  public $cpeUri;
  /** @var string */
  public $path;
  /** @var Version */
  public $version;
  protected $versionType = Version::class;
  protected $versionDataType = '';
  /** @param string */
  public function setCpeUri($cpeUri)
  {
    $this->cpeUri = $cpeUri;
  }
  /** @return string */
  public function getCpeUri()
  {
    return $this->cpeUri;
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
  /** @param Version */
  public function setVersion(Version $version)
  {
    $this->version = $version;
  }
  /** @return Version */
  public function getVersion()
  {
    return $this->version;
  }
}

class Material extends \Google\Model
{
  /** @var string[] */
  public $digest;
  /** @var string */
  public $uri;

  /** @param string[] */
  public function setDigest($digest)
  {
    $this->digest = $digest;
  }
  /** @return string[] */
  public function getDigest()
  {
    return $this->digest;
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

class Metadata extends \Google\Model
{
  /** @var string */
  public $buildFinishedOn;
  /** @var string */
  public $buildInvocationId;
  /** @var string */
  public $buildStartedOn;
  /** @var Completeness */
  public $completeness;
  /** @var bool */
  public $reproducible;
  protected $completenessType = Completeness::class;
  protected $completenessDataType = '';
  /** @param string */
  public function setBuildFinishedOn($buildFinishedOn)
  {
    $this->buildFinishedOn = $buildFinishedOn;
  }
  /** @return string */
  public function getBuildFinishedOn()
  {
    return $this->buildFinishedOn;
  }
  /** @param string */
  public function setBuildInvocationId($buildInvocationId)
  {
    $this->buildInvocationId = $buildInvocationId;
  }
  /** @return string */
  public function getBuildInvocationId()
  {
    return $this->buildInvocationId;
  }
  /** @param string */
  public function setBuildStartedOn($buildStartedOn)
  {
    $this->buildStartedOn = $buildStartedOn;
  }
  /** @return string */
  public function getBuildStartedOn()
  {
    return $this->buildStartedOn;
  }
  /** @param Completeness */
  public function setCompleteness(Completeness $completeness)
  {
    $this->completeness = $completeness;
  }
  /** @return Completeness */
  public function getCompleteness()
  {
    return $this->completeness;
  }
  /** @param bool */
  public function setReproducible($reproducible)
  {
    $this->reproducible = $reproducible;
  }
  /** @return bool */
  public function getReproducible()
  {
    return $this->reproducible;
  }
}

class NonCompliantFile extends \Google\Model
{
  /** @var string */
  public $displayCommand;
  /** @var string */
  public $path;
  /** @var string */
  public $reason;

  /** @param string */
  public function setDisplayCommand($displayCommand)
  {
    $this->displayCommand = $displayCommand;
  }
  /** @return string */
  public function getDisplayCommand()
  {
    return $this->displayCommand;
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
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
  }
}

class Occurrence extends \Google\Model
{
  /** @var AttestationOccurrence */
  public $attestation;
  /** @var BuildOccurrence */
  public $build;
  /** @var ComplianceOccurrence */
  public $compliance;
  /** @var string */
  public $createTime;
  /** @var DeploymentOccurrence */
  public $deployment;
  /** @var DiscoveryOccurrence */
  public $discovery;
  /** @var DSSEAttestationOccurrence */
  public $dsseAttestation;
  /** @var Envelope */
  public $envelope;
  /** @var ImageOccurrence */
  public $image;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $noteName;
  /** @var PackageOccurrence */
  public $package;
  /** @var string */
  public $remediation;
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $updateTime;
  /** @var UpgradeOccurrence */
  public $upgrade;
  /** @var VulnerabilityOccurrence */
  public $vulnerability;
  protected $attestationType = AttestationOccurrence::class;
  protected $attestationDataType = '';
  protected $buildType = BuildOccurrence::class;
  protected $buildDataType = '';
  protected $complianceType = ComplianceOccurrence::class;
  protected $complianceDataType = '';
  protected $deploymentType = DeploymentOccurrence::class;
  protected $deploymentDataType = '';
  protected $discoveryType = DiscoveryOccurrence::class;
  protected $discoveryDataType = '';
  protected $dsseAttestationType = DSSEAttestationOccurrence::class;
  protected $dsseAttestationDataType = '';
  protected $envelopeType = Envelope::class;
  protected $envelopeDataType = '';
  protected $imageType = ImageOccurrence::class;
  protected $imageDataType = '';
  protected $packageType = PackageOccurrence::class;
  protected $packageDataType = '';
  protected $upgradeType = UpgradeOccurrence::class;
  protected $upgradeDataType = '';
  protected $vulnerabilityType = VulnerabilityOccurrence::class;
  protected $vulnerabilityDataType = '';
  /** @param AttestationOccurrence */
  public function setAttestation(AttestationOccurrence $attestation)
  {
    $this->attestation = $attestation;
  }
  /** @return AttestationOccurrence */
  public function getAttestation()
  {
    return $this->attestation;
  }
  /** @param BuildOccurrence */
  public function setBuild(BuildOccurrence $build)
  {
    $this->build = $build;
  }
  /** @return BuildOccurrence */
  public function getBuild()
  {
    return $this->build;
  }
  /** @param ComplianceOccurrence */
  public function setCompliance(ComplianceOccurrence $compliance)
  {
    $this->compliance = $compliance;
  }
  /** @return ComplianceOccurrence */
  public function getCompliance()
  {
    return $this->compliance;
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
  /** @param DeploymentOccurrence */
  public function setDeployment(DeploymentOccurrence $deployment)
  {
    $this->deployment = $deployment;
  }
  /** @return DeploymentOccurrence */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /** @param DiscoveryOccurrence */
  public function setDiscovery(DiscoveryOccurrence $discovery)
  {
    $this->discovery = $discovery;
  }
  /** @return DiscoveryOccurrence */
  public function getDiscovery()
  {
    return $this->discovery;
  }
  /** @param DSSEAttestationOccurrence */
  public function setDsseAttestation(DSSEAttestationOccurrence $dsseAttestation)
  {
    $this->dsseAttestation = $dsseAttestation;
  }
  /** @return DSSEAttestationOccurrence */
  public function getDsseAttestation()
  {
    return $this->dsseAttestation;
  }
  /** @param Envelope */
  public function setEnvelope(Envelope $envelope)
  {
    $this->envelope = $envelope;
  }
  /** @return Envelope */
  public function getEnvelope()
  {
    return $this->envelope;
  }
  /** @param ImageOccurrence */
  public function setImage(ImageOccurrence $image)
  {
    $this->image = $image;
  }
  /** @return ImageOccurrence */
  public function getImage()
  {
    return $this->image;
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
  public function setNoteName($noteName)
  {
    $this->noteName = $noteName;
  }
  /** @return string */
  public function getNoteName()
  {
    return $this->noteName;
  }
  /** @param PackageOccurrence */
  public function setPackage(PackageOccurrence $package)
  {
    $this->package = $package;
  }
  /** @return PackageOccurrence */
  public function getPackage()
  {
    return $this->package;
  }
  /** @param string */
  public function setRemediation($remediation)
  {
    $this->remediation = $remediation;
  }
  /** @return string */
  public function getRemediation()
  {
    return $this->remediation;
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /** @param UpgradeOccurrence */
  public function setUpgrade(UpgradeOccurrence $upgrade)
  {
    $this->upgrade = $upgrade;
  }
  /** @return UpgradeOccurrence */
  public function getUpgrade()
  {
    return $this->upgrade;
  }
  /** @param VulnerabilityOccurrence */
  public function setVulnerability(VulnerabilityOccurrence $vulnerability)
  {
    $this->vulnerability = $vulnerability;
  }
  /** @return VulnerabilityOccurrence */
  public function getVulnerability()
  {
    return $this->vulnerability;
  }
}

class OndemandscanningEmpty extends \Google\Model
{
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

class PackageData extends \Google\Collection
{
  /** @var string */
  public $cpeUri;
  /** @var LanguagePackageDependency[] */
  public $dependencyChain;
  /** @var FileLocation[] */
  public $fileLocation;
  /** @var string */
  public $hashDigest;
  /** @var string */
  public $os;
  /** @var string */
  public $osVersion;
  /** @var string */
  public $package;
  /** @var string */
  public $packageType;
  /** @var string[] */
  public $patchedCve;
  /** @var string */
  public $unused;
  /** @var string */
  public $version;
  protected $collection_key = 'patchedCve';
  protected $dependencyChainType = LanguagePackageDependency::class;
  protected $dependencyChainDataType = 'array';
  protected $fileLocationType = FileLocation::class;
  protected $fileLocationDataType = 'array';
  /** @param string */
  public function setCpeUri($cpeUri)
  {
    $this->cpeUri = $cpeUri;
  }
  /** @return string */
  public function getCpeUri()
  {
    return $this->cpeUri;
  }
  /** @param LanguagePackageDependency[] */
  public function setDependencyChain($dependencyChain)
  {
    $this->dependencyChain = $dependencyChain;
  }
  /** @return LanguagePackageDependency[] */
  public function getDependencyChain()
  {
    return $this->dependencyChain;
  }
  /** @param FileLocation[] */
  public function setFileLocation($fileLocation)
  {
    $this->fileLocation = $fileLocation;
  }
  /** @return FileLocation[] */
  public function getFileLocation()
  {
    return $this->fileLocation;
  }
  /** @param string */
  public function setHashDigest($hashDigest)
  {
    $this->hashDigest = $hashDigest;
  }
  /** @return string */
  public function getHashDigest()
  {
    return $this->hashDigest;
  }
  /** @param string */
  public function setOs($os)
  {
    $this->os = $os;
  }
  /** @return string */
  public function getOs()
  {
    return $this->os;
  }
  /** @param string */
  public function setOsVersion($osVersion)
  {
    $this->osVersion = $osVersion;
  }
  /** @return string */
  public function getOsVersion()
  {
    return $this->osVersion;
  }
  /** @param string */
  public function setPackage($package)
  {
    $this->package = $package;
  }
  /** @return string */
  public function getPackage()
  {
    return $this->package;
  }
  /** @param string */
  public function setPackageType($packageType)
  {
    $this->packageType = $packageType;
  }
  /** @return string */
  public function getPackageType()
  {
    return $this->packageType;
  }
  /** @param string[] */
  public function setPatchedCve($patchedCve)
  {
    $this->patchedCve = $patchedCve;
  }
  /** @return string[] */
  public function getPatchedCve()
  {
    return $this->patchedCve;
  }
  /** @param string */
  public function setUnused($unused)
  {
    $this->unused = $unused;
  }
  /** @return string */
  public function getUnused()
  {
    return $this->unused;
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

class PackageIssue extends \Google\Collection
{
  /** @var string */
  public $affectedCpeUri;
  /** @var string */
  public $affectedPackage;
  /** @var Version */
  public $affectedVersion;
  /** @var string */
  public $effectiveSeverity;
  /** @var GrafeasV1FileLocation[] */
  public $fileLocation;
  /** @var bool */
  public $fixAvailable;
  /** @var string */
  public $fixedCpeUri;
  /** @var string */
  public $fixedPackage;
  /** @var Version */
  public $fixedVersion;
  /** @var string */
  public $packageType;
  protected $collection_key = 'fileLocation';
  protected $affectedVersionType = Version::class;
  protected $affectedVersionDataType = '';
  protected $fileLocationType = GrafeasV1FileLocation::class;
  protected $fileLocationDataType = 'array';
  protected $fixedVersionType = Version::class;
  protected $fixedVersionDataType = '';
  /** @param string */
  public function setAffectedCpeUri($affectedCpeUri)
  {
    $this->affectedCpeUri = $affectedCpeUri;
  }
  /** @return string */
  public function getAffectedCpeUri()
  {
    return $this->affectedCpeUri;
  }
  /** @param string */
  public function setAffectedPackage($affectedPackage)
  {
    $this->affectedPackage = $affectedPackage;
  }
  /** @return string */
  public function getAffectedPackage()
  {
    return $this->affectedPackage;
  }
  /** @param Version */
  public function setAffectedVersion(Version $affectedVersion)
  {
    $this->affectedVersion = $affectedVersion;
  }
  /** @return Version */
  public function getAffectedVersion()
  {
    return $this->affectedVersion;
  }
  /** @param string */
  public function setEffectiveSeverity($effectiveSeverity)
  {
    $this->effectiveSeverity = $effectiveSeverity;
  }
  /** @return string */
  public function getEffectiveSeverity()
  {
    return $this->effectiveSeverity;
  }
  /** @param GrafeasV1FileLocation[] */
  public function setFileLocation($fileLocation)
  {
    $this->fileLocation = $fileLocation;
  }
  /** @return GrafeasV1FileLocation[] */
  public function getFileLocation()
  {
    return $this->fileLocation;
  }
  /** @param bool */
  public function setFixAvailable($fixAvailable)
  {
    $this->fixAvailable = $fixAvailable;
  }
  /** @return bool */
  public function getFixAvailable()
  {
    return $this->fixAvailable;
  }
  /** @param string */
  public function setFixedCpeUri($fixedCpeUri)
  {
    $this->fixedCpeUri = $fixedCpeUri;
  }
  /** @return string */
  public function getFixedCpeUri()
  {
    return $this->fixedCpeUri;
  }
  /** @param string */
  public function setFixedPackage($fixedPackage)
  {
    $this->fixedPackage = $fixedPackage;
  }
  /** @return string */
  public function getFixedPackage()
  {
    return $this->fixedPackage;
  }
  /** @param Version */
  public function setFixedVersion(Version $fixedVersion)
  {
    $this->fixedVersion = $fixedVersion;
  }
  /** @return Version */
  public function getFixedVersion()
  {
    return $this->fixedVersion;
  }
  /** @param string */
  public function setPackageType($packageType)
  {
    $this->packageType = $packageType;
  }
  /** @return string */
  public function getPackageType()
  {
    return $this->packageType;
  }
}

class PackageOccurrence extends \Google\Collection
{
  /** @var string */
  public $architecture;
  /** @var string */
  public $cpeUri;
  /** @var License */
  public $license;
  /** @var Location[] */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $packageType;
  /** @var Version */
  public $version;
  protected $collection_key = 'location';
  protected $licenseType = License::class;
  protected $licenseDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = 'array';
  protected $versionType = Version::class;
  protected $versionDataType = '';
  /** @param string */
  public function setArchitecture($architecture)
  {
    $this->architecture = $architecture;
  }
  /** @return string */
  public function getArchitecture()
  {
    return $this->architecture;
  }
  /** @param string */
  public function setCpeUri($cpeUri)
  {
    $this->cpeUri = $cpeUri;
  }
  /** @return string */
  public function getCpeUri()
  {
    return $this->cpeUri;
  }
  /** @param License */
  public function setLicense(License $license)
  {
    $this->license = $license;
  }
  /** @return License */
  public function getLicense()
  {
    return $this->license;
  }
  /** @param Location[] */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return Location[] */
  public function getLocation()
  {
    return $this->location;
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
  public function setPackageType($packageType)
  {
    $this->packageType = $packageType;
  }
  /** @return string */
  public function getPackageType()
  {
    return $this->packageType;
  }
  /** @param Version */
  public function setVersion(Version $version)
  {
    $this->version = $version;
  }
  /** @return Version */
  public function getVersion()
  {
    return $this->version;
  }
}

class ProjectRepoId extends \Google\Model
{
  /** @var string */
  public $projectId;
  /** @var string */
  public $repoName;

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
}

class Recipe extends \Google\Collection
{
  /** @var array[] */
  public $arguments;
  /** @var string */
  public $definedInMaterial;
  /** @var string */
  public $entryPoint;
  /** @var array[] */
  public $environment;
  /** @var string */
  public $type;
  protected $collection_key = 'environment';
  /** @param array[] */
  public function setArguments($arguments)
  {
    $this->arguments = $arguments;
  }
  /** @return array[] */
  public function getArguments()
  {
    return $this->arguments;
  }
  /** @param string */
  public function setDefinedInMaterial($definedInMaterial)
  {
    $this->definedInMaterial = $definedInMaterial;
  }
  /** @return string */
  public function getDefinedInMaterial()
  {
    return $this->definedInMaterial;
  }
  /** @param string */
  public function setEntryPoint($entryPoint)
  {
    $this->entryPoint = $entryPoint;
  }
  /** @return string */
  public function getEntryPoint()
  {
    return $this->entryPoint;
  }
  /** @param array[] */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return array[] */
  public function getEnvironment()
  {
    return $this->environment;
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

class RelatedUrl extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var string */
  public $url;

  /** @param string */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
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

class RepoId extends \Google\Model
{
  /** @var ProjectRepoId */
  public $projectRepoId;
  /** @var string */
  public $uid;
  protected $projectRepoIdType = ProjectRepoId::class;
  protected $projectRepoIdDataType = '';
  /** @param ProjectRepoId */
  public function setProjectRepoId(ProjectRepoId $projectRepoId)
  {
    $this->projectRepoId = $projectRepoId;
  }
  /** @return ProjectRepoId */
  public function getProjectRepoId()
  {
    return $this->projectRepoId;
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
}

class Signature extends \Google\Model
{
  /** @var string */
  public $publicKeyId;
  /** @var string */
  public $signature;

  /** @param string */
  public function setPublicKeyId($publicKeyId)
  {
    $this->publicKeyId = $publicKeyId;
  }
  /** @return string */
  public function getPublicKeyId()
  {
    return $this->publicKeyId;
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

class SlsaBuilder extends \Google\Model
{
  /** @var string */
  public $id;

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
}

class SlsaCompleteness extends \Google\Model
{
  /** @var bool */
  public $arguments;
  /** @var bool */
  public $environment;
  /** @var bool */
  public $materials;

  /** @param bool */
  public function setArguments($arguments)
  {
    $this->arguments = $arguments;
  }
  /** @return bool */
  public function getArguments()
  {
    return $this->arguments;
  }
  /** @param bool */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return bool */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param bool */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return bool */
  public function getMaterials()
  {
    return $this->materials;
  }
}

class SlsaMetadata extends \Google\Model
{
  /** @var string */
  public $buildFinishedOn;
  /** @var string */
  public $buildInvocationId;
  /** @var string */
  public $buildStartedOn;
  /** @var SlsaCompleteness */
  public $completeness;
  /** @var bool */
  public $reproducible;
  protected $completenessType = SlsaCompleteness::class;
  protected $completenessDataType = '';
  /** @param string */
  public function setBuildFinishedOn($buildFinishedOn)
  {
    $this->buildFinishedOn = $buildFinishedOn;
  }
  /** @return string */
  public function getBuildFinishedOn()
  {
    return $this->buildFinishedOn;
  }
  /** @param string */
  public function setBuildInvocationId($buildInvocationId)
  {
    $this->buildInvocationId = $buildInvocationId;
  }
  /** @return string */
  public function getBuildInvocationId()
  {
    return $this->buildInvocationId;
  }
  /** @param string */
  public function setBuildStartedOn($buildStartedOn)
  {
    $this->buildStartedOn = $buildStartedOn;
  }
  /** @return string */
  public function getBuildStartedOn()
  {
    return $this->buildStartedOn;
  }
  /** @param SlsaCompleteness */
  public function setCompleteness(SlsaCompleteness $completeness)
  {
    $this->completeness = $completeness;
  }
  /** @return SlsaCompleteness */
  public function getCompleteness()
  {
    return $this->completeness;
  }
  /** @param bool */
  public function setReproducible($reproducible)
  {
    $this->reproducible = $reproducible;
  }
  /** @return bool */
  public function getReproducible()
  {
    return $this->reproducible;
  }
}

class SlsaProvenance extends \Google\Collection
{
  /** @var SlsaBuilder */
  public $builder;
  /** @var Material[] */
  public $materials;
  /** @var SlsaMetadata */
  public $metadata;
  /** @var SlsaRecipe */
  public $recipe;
  protected $collection_key = 'materials';
  protected $builderType = SlsaBuilder::class;
  protected $builderDataType = '';
  protected $materialsType = Material::class;
  protected $materialsDataType = 'array';
  protected $metadataType = SlsaMetadata::class;
  protected $metadataDataType = '';
  protected $recipeType = SlsaRecipe::class;
  protected $recipeDataType = '';
  /** @param SlsaBuilder */
  public function setBuilder(SlsaBuilder $builder)
  {
    $this->builder = $builder;
  }
  /** @return SlsaBuilder */
  public function getBuilder()
  {
    return $this->builder;
  }
  /** @param Material[] */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return Material[] */
  public function getMaterials()
  {
    return $this->materials;
  }
  /** @param SlsaMetadata */
  public function setMetadata(SlsaMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return SlsaMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param SlsaRecipe */
  public function setRecipe(SlsaRecipe $recipe)
  {
    $this->recipe = $recipe;
  }
  /** @return SlsaRecipe */
  public function getRecipe()
  {
    return $this->recipe;
  }
}

class SlsaProvenanceZeroTwo extends \Google\Collection
{
  /** @var array[] */
  public $buildConfig;
  /** @var string */
  public $buildType;
  /** @var GrafeasV1SlsaProvenanceZeroTwoSlsaBuilder */
  public $builder;
  /** @var GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation */
  public $invocation;
  /** @var GrafeasV1SlsaProvenanceZeroTwoSlsaMaterial[] */
  public $materials;
  /** @var GrafeasV1SlsaProvenanceZeroTwoSlsaMetadata */
  public $metadata;
  protected $collection_key = 'materials';
  protected $builderType = GrafeasV1SlsaProvenanceZeroTwoSlsaBuilder::class;
  protected $builderDataType = '';
  protected $invocationType = GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation::class;
  protected $invocationDataType = '';
  protected $materialsType = GrafeasV1SlsaProvenanceZeroTwoSlsaMaterial::class;
  protected $materialsDataType = 'array';
  protected $metadataType = GrafeasV1SlsaProvenanceZeroTwoSlsaMetadata::class;
  protected $metadataDataType = '';
  /** @param array[] */
  public function setBuildConfig($buildConfig)
  {
    $this->buildConfig = $buildConfig;
  }
  /** @return array[] */
  public function getBuildConfig()
  {
    return $this->buildConfig;
  }
  /** @param string */
  public function setBuildType($buildType)
  {
    $this->buildType = $buildType;
  }
  /** @return string */
  public function getBuildType()
  {
    return $this->buildType;
  }
  /** @param GrafeasV1SlsaProvenanceZeroTwoSlsaBuilder */
  public function setBuilder(GrafeasV1SlsaProvenanceZeroTwoSlsaBuilder $builder)
  {
    $this->builder = $builder;
  }
  /** @return GrafeasV1SlsaProvenanceZeroTwoSlsaBuilder */
  public function getBuilder()
  {
    return $this->builder;
  }
  /** @param GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation */
  public function setInvocation(GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation $invocation)
  {
    $this->invocation = $invocation;
  }
  /** @return GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation */
  public function getInvocation()
  {
    return $this->invocation;
  }
  /** @param GrafeasV1SlsaProvenanceZeroTwoSlsaMaterial[] */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /** @return GrafeasV1SlsaProvenanceZeroTwoSlsaMaterial[] */
  public function getMaterials()
  {
    return $this->materials;
  }
  /** @param GrafeasV1SlsaProvenanceZeroTwoSlsaMetadata */
  public function setMetadata(GrafeasV1SlsaProvenanceZeroTwoSlsaMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return GrafeasV1SlsaProvenanceZeroTwoSlsaMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

class SlsaRecipe extends \Google\Model
{
  /** @var array[] */
  public $arguments;
  /** @var string */
  public $definedInMaterial;
  /** @var string */
  public $entryPoint;
  /** @var array[] */
  public $environment;
  /** @var string */
  public $type;

  /** @param array[] */
  public function setArguments($arguments)
  {
    $this->arguments = $arguments;
  }
  /** @return array[] */
  public function getArguments()
  {
    return $this->arguments;
  }
  /** @param string */
  public function setDefinedInMaterial($definedInMaterial)
  {
    $this->definedInMaterial = $definedInMaterial;
  }
  /** @return string */
  public function getDefinedInMaterial()
  {
    return $this->definedInMaterial;
  }
  /** @param string */
  public function setEntryPoint($entryPoint)
  {
    $this->entryPoint = $entryPoint;
  }
  /** @return string */
  public function getEntryPoint()
  {
    return $this->entryPoint;
  }
  /** @param array[] */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /** @return array[] */
  public function getEnvironment()
  {
    return $this->environment;
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

class Source extends \Google\Collection
{
  /** @var SourceContext[] */
  public $additionalContexts;
  /** @var string */
  public $artifactStorageSourceUri;
  /** @var SourceContext */
  public $context;
  /** @var FileHashes[] */
  public $fileHashes;
  protected $collection_key = 'additionalContexts';
  protected $additionalContextsType = SourceContext::class;
  protected $additionalContextsDataType = 'array';
  protected $contextType = SourceContext::class;
  protected $contextDataType = '';
  protected $fileHashesType = FileHashes::class;
  protected $fileHashesDataType = 'map';
  /** @param SourceContext[] */
  public function setAdditionalContexts($additionalContexts)
  {
    $this->additionalContexts = $additionalContexts;
  }
  /** @return SourceContext[] */
  public function getAdditionalContexts()
  {
    return $this->additionalContexts;
  }
  /** @param string */
  public function setArtifactStorageSourceUri($artifactStorageSourceUri)
  {
    $this->artifactStorageSourceUri = $artifactStorageSourceUri;
  }
  /** @return string */
  public function getArtifactStorageSourceUri()
  {
    return $this->artifactStorageSourceUri;
  }
  /** @param SourceContext */
  public function setContext(SourceContext $context)
  {
    $this->context = $context;
  }
  /** @return SourceContext */
  public function getContext()
  {
    return $this->context;
  }
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
}

class SourceContext extends \Google\Model
{
  /** @var CloudRepoSourceContext */
  public $cloudRepo;
  /** @var GerritSourceContext */
  public $gerrit;
  /** @var GitSourceContext */
  public $git;
  /** @var string[] */
  public $labels;
  protected $cloudRepoType = CloudRepoSourceContext::class;
  protected $cloudRepoDataType = '';
  protected $gerritType = GerritSourceContext::class;
  protected $gerritDataType = '';
  protected $gitType = GitSourceContext::class;
  protected $gitDataType = '';
  /** @param CloudRepoSourceContext */
  public function setCloudRepo(CloudRepoSourceContext $cloudRepo)
  {
    $this->cloudRepo = $cloudRepo;
  }
  /** @return CloudRepoSourceContext */
  public function getCloudRepo()
  {
    return $this->cloudRepo;
  }
  /** @param GerritSourceContext */
  public function setGerrit(GerritSourceContext $gerrit)
  {
    $this->gerrit = $gerrit;
  }
  /** @return GerritSourceContext */
  public function getGerrit()
  {
    return $this->gerrit;
  }
  /** @param GitSourceContext */
  public function setGit(GitSourceContext $git)
  {
    $this->git = $git;
  }
  /** @return GitSourceContext */
  public function getGit()
  {
    return $this->git;
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

class Subject extends \Google\Model
{
  /** @var string[] */
  public $digest;
  /** @var string */
  public $name;

  /** @param string[] */
  public function setDigest($digest)
  {
    $this->digest = $digest;
  }
  /** @return string[] */
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
}

class UpgradeDistribution extends \Google\Collection
{
  /** @var string */
  public $classification;
  /** @var string */
  public $cpeUri;
  /** @var string[] */
  public $cve;
  /** @var string */
  public $severity;
  protected $collection_key = 'cve';
  /** @param string */
  public function setClassification($classification)
  {
    $this->classification = $classification;
  }
  /** @return string */
  public function getClassification()
  {
    return $this->classification;
  }
  /** @param string */
  public function setCpeUri($cpeUri)
  {
    $this->cpeUri = $cpeUri;
  }
  /** @return string */
  public function getCpeUri()
  {
    return $this->cpeUri;
  }
  /** @param string[] */
  public function setCve($cve)
  {
    $this->cve = $cve;
  }
  /** @return string[] */
  public function getCve()
  {
    return $this->cve;
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
}

class UpgradeOccurrence extends \Google\Model
{
  /** @var UpgradeDistribution */
  public $distribution;
  /** @var string */
  public $package;
  /** @var Version */
  public $parsedVersion;
  /** @var WindowsUpdate */
  public $windowsUpdate;
  protected $distributionType = UpgradeDistribution::class;
  protected $distributionDataType = '';
  protected $parsedVersionType = Version::class;
  protected $parsedVersionDataType = '';
  protected $windowsUpdateType = WindowsUpdate::class;
  protected $windowsUpdateDataType = '';
  /** @param UpgradeDistribution */
  public function setDistribution(UpgradeDistribution $distribution)
  {
    $this->distribution = $distribution;
  }
  /** @return UpgradeDistribution */
  public function getDistribution()
  {
    return $this->distribution;
  }
  /** @param string */
  public function setPackage($package)
  {
    $this->package = $package;
  }
  /** @return string */
  public function getPackage()
  {
    return $this->package;
  }
  /** @param Version */
  public function setParsedVersion(Version $parsedVersion)
  {
    $this->parsedVersion = $parsedVersion;
  }
  /** @return Version */
  public function getParsedVersion()
  {
    return $this->parsedVersion;
  }
  /** @param WindowsUpdate */
  public function setWindowsUpdate(WindowsUpdate $windowsUpdate)
  {
    $this->windowsUpdate = $windowsUpdate;
  }
  /** @return WindowsUpdate */
  public function getWindowsUpdate()
  {
    return $this->windowsUpdate;
  }
}

class Version extends \Google\Model
{
  /** @var int */
  public $epoch;
  /** @var string */
  public $fullName;
  /** @var bool */
  public $inclusive;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string */
  public $revision;

  /** @param int */
  public function setEpoch($epoch)
  {
    $this->epoch = $epoch;
  }
  /** @return int */
  public function getEpoch()
  {
    return $this->epoch;
  }
  /** @param string */
  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
  /** @return string */
  public function getFullName()
  {
    return $this->fullName;
  }
  /** @param bool */
  public function setInclusive($inclusive)
  {
    $this->inclusive = $inclusive;
  }
  /** @return bool */
  public function getInclusive()
  {
    return $this->inclusive;
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
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return string */
  public function getRevision()
  {
    return $this->revision;
  }
}

class VulnerabilityOccurrence extends \Google\Collection
{
  /** @var float */
  public $cvssScore;
  /** @var string */
  public $cvssVersion;
  /** @var CVSS */
  public $cvssv3;
  /** @var string */
  public $effectiveSeverity;
  /** @var bool */
  public $fixAvailable;
  /** @var string */
  public $longDescription;
  /** @var PackageIssue[] */
  public $packageIssue;
  /** @var RelatedUrl[] */
  public $relatedUrls;
  /** @var string */
  public $severity;
  /** @var string */
  public $shortDescription;
  /** @var string */
  public $type;
  protected $collection_key = 'relatedUrls';
  protected $cvssv3Type = CVSS::class;
  protected $cvssv3DataType = '';
  protected $packageIssueType = PackageIssue::class;
  protected $packageIssueDataType = 'array';
  protected $relatedUrlsType = RelatedUrl::class;
  protected $relatedUrlsDataType = 'array';
  /** @param float */
  public function setCvssScore($cvssScore)
  {
    $this->cvssScore = $cvssScore;
  }
  /** @return float */
  public function getCvssScore()
  {
    return $this->cvssScore;
  }
  /** @param string */
  public function setCvssVersion($cvssVersion)
  {
    $this->cvssVersion = $cvssVersion;
  }
  /** @return string */
  public function getCvssVersion()
  {
    return $this->cvssVersion;
  }
  /** @param CVSS */
  public function setCvssv3(CVSS $cvssv3)
  {
    $this->cvssv3 = $cvssv3;
  }
  /** @return CVSS */
  public function getCvssv3()
  {
    return $this->cvssv3;
  }
  /** @param string */
  public function setEffectiveSeverity($effectiveSeverity)
  {
    $this->effectiveSeverity = $effectiveSeverity;
  }
  /** @return string */
  public function getEffectiveSeverity()
  {
    return $this->effectiveSeverity;
  }
  /** @param bool */
  public function setFixAvailable($fixAvailable)
  {
    $this->fixAvailable = $fixAvailable;
  }
  /** @return bool */
  public function getFixAvailable()
  {
    return $this->fixAvailable;
  }
  /** @param string */
  public function setLongDescription($longDescription)
  {
    $this->longDescription = $longDescription;
  }
  /** @return string */
  public function getLongDescription()
  {
    return $this->longDescription;
  }
  /** @param PackageIssue[] */
  public function setPackageIssue($packageIssue)
  {
    $this->packageIssue = $packageIssue;
  }
  /** @return PackageIssue[] */
  public function getPackageIssue()
  {
    return $this->packageIssue;
  }
  /** @param RelatedUrl[] */
  public function setRelatedUrls($relatedUrls)
  {
    $this->relatedUrls = $relatedUrls;
  }
  /** @return RelatedUrl[] */
  public function getRelatedUrls()
  {
    return $this->relatedUrls;
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
  public function setShortDescription($shortDescription)
  {
    $this->shortDescription = $shortDescription;
  }
  /** @return string */
  public function getShortDescription()
  {
    return $this->shortDescription;
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

class WindowsUpdate extends \Google\Collection
{
  /** @var Category[] */
  public $categories;
  /** @var string */
  public $description;
  /** @var Identity */
  public $identity;
  /** @var string[] */
  public $kbArticleIds;
  /** @var string */
  public $lastPublishedTimestamp;
  /** @var string */
  public $supportUrl;
  /** @var string */
  public $title;
  protected $collection_key = 'kbArticleIds';
  protected $categoriesType = Category::class;
  protected $categoriesDataType = 'array';
  protected $identityType = Identity::class;
  protected $identityDataType = '';
  /** @param Category[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return Category[] */
  public function getCategories()
  {
    return $this->categories;
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
  /** @param Identity */
  public function setIdentity(Identity $identity)
  {
    $this->identity = $identity;
  }
  /** @return Identity */
  public function getIdentity()
  {
    return $this->identity;
  }
  /** @param string[] */
  public function setKbArticleIds($kbArticleIds)
  {
    $this->kbArticleIds = $kbArticleIds;
  }
  /** @return string[] */
  public function getKbArticleIds()
  {
    return $this->kbArticleIds;
  }
  /** @param string */
  public function setLastPublishedTimestamp($lastPublishedTimestamp)
  {
    $this->lastPublishedTimestamp = $lastPublishedTimestamp;
  }
  /** @return string */
  public function getLastPublishedTimestamp()
  {
    return $this->lastPublishedTimestamp;
  }
  /** @param string */
  public function setSupportUrl($supportUrl)
  {
    $this->supportUrl = $supportUrl;
  }
  /** @return string */
  public function getSupportUrl()
  {
    return $this->supportUrl;
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
class_alias(AliasContext::class, 'Google_Service_OnDemandScanning_AliasContext');
class_alias(AnalysisCompleted::class, 'Google_Service_OnDemandScanning_AnalysisCompleted');
class_alias(AnalyzePackagesMetadata::class, 'Google_Service_OnDemandScanning_AnalyzePackagesMetadata');
class_alias(AnalyzePackagesMetadataV1::class, 'Google_Service_OnDemandScanning_AnalyzePackagesMetadataV1');
class_alias(AnalyzePackagesRequestV1::class, 'Google_Service_OnDemandScanning_AnalyzePackagesRequestV1');
class_alias(AnalyzePackagesResponse::class, 'Google_Service_OnDemandScanning_AnalyzePackagesResponse');
class_alias(AnalyzePackagesResponseV1::class, 'Google_Service_OnDemandScanning_AnalyzePackagesResponseV1');
class_alias(Artifact::class, 'Google_Service_OnDemandScanning_Artifact');
class_alias(AttestationOccurrence::class, 'Google_Service_OnDemandScanning_AttestationOccurrence');
class_alias(BuildOccurrence::class, 'Google_Service_OnDemandScanning_BuildOccurrence');
class_alias(BuildProvenance::class, 'Google_Service_OnDemandScanning_BuildProvenance');
class_alias(BuilderConfig::class, 'Google_Service_OnDemandScanning_BuilderConfig');
class_alias(CVSS::class, 'Google_Service_OnDemandScanning_CVSS');
class_alias(Category::class, 'Google_Service_OnDemandScanning_Category');
class_alias(CloudRepoSourceContext::class, 'Google_Service_OnDemandScanning_CloudRepoSourceContext');
class_alias(Command::class, 'Google_Service_OnDemandScanning_Command');
class_alias(Completeness::class, 'Google_Service_OnDemandScanning_Completeness');
class_alias(ComplianceOccurrence::class, 'Google_Service_OnDemandScanning_ComplianceOccurrence');
class_alias(DSSEAttestationOccurrence::class, 'Google_Service_OnDemandScanning_DSSEAttestationOccurrence');
class_alias(DeploymentOccurrence::class, 'Google_Service_OnDemandScanning_DeploymentOccurrence');
class_alias(DiscoveryOccurrence::class, 'Google_Service_OnDemandScanning_DiscoveryOccurrence');
class_alias(Envelope::class, 'Google_Service_OnDemandScanning_Envelope');
class_alias(EnvelopeSignature::class, 'Google_Service_OnDemandScanning_EnvelopeSignature');
class_alias(FileHashes::class, 'Google_Service_OnDemandScanning_FileHashes');
class_alias(FileLocation::class, 'Google_Service_OnDemandScanning_FileLocation');
class_alias(Fingerprint::class, 'Google_Service_OnDemandScanning_Fingerprint');
class_alias(GerritSourceContext::class, 'Google_Service_OnDemandScanning_GerritSourceContext');
class_alias(GitSourceContext::class, 'Google_Service_OnDemandScanning_GitSourceContext');
class_alias(GrafeasV1FileLocation::class, 'Google_Service_OnDemandScanning_GrafeasV1FileLocation');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaBuilder::class, 'Google_Service_OnDemandScanning_GrafeasV1SlsaProvenanceZeroTwoSlsaBuilder');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaCompleteness::class, 'Google_Service_OnDemandScanning_GrafeasV1SlsaProvenanceZeroTwoSlsaCompleteness');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource::class, 'Google_Service_OnDemandScanning_GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation::class, 'Google_Service_OnDemandScanning_GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaMaterial::class, 'Google_Service_OnDemandScanning_GrafeasV1SlsaProvenanceZeroTwoSlsaMaterial');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaMetadata::class, 'Google_Service_OnDemandScanning_GrafeasV1SlsaProvenanceZeroTwoSlsaMetadata');
class_alias(Hash::class, 'Google_Service_OnDemandScanning_Hash');
class_alias(Identity::class, 'Google_Service_OnDemandScanning_Identity');
class_alias(ImageOccurrence::class, 'Google_Service_OnDemandScanning_ImageOccurrence');
class_alias(InTotoProvenance::class, 'Google_Service_OnDemandScanning_InTotoProvenance');
class_alias(InTotoStatement::class, 'Google_Service_OnDemandScanning_InTotoStatement');
class_alias(Jwt::class, 'Google_Service_OnDemandScanning_Jwt');
class_alias(LanguagePackageDependency::class, 'Google_Service_OnDemandScanning_LanguagePackageDependency');
class_alias(Layer::class, 'Google_Service_OnDemandScanning_Layer');
class_alias(License::class, 'Google_Service_OnDemandScanning_License');
class_alias(ListOperationsResponse::class, 'Google_Service_OnDemandScanning_ListOperationsResponse');
class_alias(ListVulnerabilitiesResponseV1::class, 'Google_Service_OnDemandScanning_ListVulnerabilitiesResponseV1');
class_alias(Location::class, 'Google_Service_OnDemandScanning_Location');
class_alias(Material::class, 'Google_Service_OnDemandScanning_Material');
class_alias(Metadata::class, 'Google_Service_OnDemandScanning_Metadata');
class_alias(NonCompliantFile::class, 'Google_Service_OnDemandScanning_NonCompliantFile');
class_alias(Occurrence::class, 'Google_Service_OnDemandScanning_Occurrence');
class_alias(OndemandscanningEmpty::class, 'Google_Service_OnDemandScanning_OndemandscanningEmpty');
class_alias(Operation::class, 'Google_Service_OnDemandScanning_Operation');
class_alias(PackageData::class, 'Google_Service_OnDemandScanning_PackageData');
class_alias(PackageIssue::class, 'Google_Service_OnDemandScanning_PackageIssue');
class_alias(PackageOccurrence::class, 'Google_Service_OnDemandScanning_PackageOccurrence');
class_alias(ProjectRepoId::class, 'Google_Service_OnDemandScanning_ProjectRepoId');
class_alias(Recipe::class, 'Google_Service_OnDemandScanning_Recipe');
class_alias(RelatedUrl::class, 'Google_Service_OnDemandScanning_RelatedUrl');
class_alias(RepoId::class, 'Google_Service_OnDemandScanning_RepoId');
class_alias(Signature::class, 'Google_Service_OnDemandScanning_Signature');
class_alias(SlsaBuilder::class, 'Google_Service_OnDemandScanning_SlsaBuilder');
class_alias(SlsaCompleteness::class, 'Google_Service_OnDemandScanning_SlsaCompleteness');
class_alias(SlsaMetadata::class, 'Google_Service_OnDemandScanning_SlsaMetadata');
class_alias(SlsaProvenance::class, 'Google_Service_OnDemandScanning_SlsaProvenance');
class_alias(SlsaProvenanceZeroTwo::class, 'Google_Service_OnDemandScanning_SlsaProvenanceZeroTwo');
class_alias(SlsaRecipe::class, 'Google_Service_OnDemandScanning_SlsaRecipe');
class_alias(Source::class, 'Google_Service_OnDemandScanning_Source');
class_alias(SourceContext::class, 'Google_Service_OnDemandScanning_SourceContext');
class_alias(Status::class, 'Google_Service_OnDemandScanning_Status');
class_alias(Subject::class, 'Google_Service_OnDemandScanning_Subject');
class_alias(UpgradeDistribution::class, 'Google_Service_OnDemandScanning_UpgradeDistribution');
class_alias(UpgradeOccurrence::class, 'Google_Service_OnDemandScanning_UpgradeOccurrence');
class_alias(Version::class, 'Google_Service_OnDemandScanning_Version');
class_alias(VulnerabilityOccurrence::class, 'Google_Service_OnDemandScanning_VulnerabilityOccurrence');
class_alias(WindowsUpdate::class, 'Google_Service_OnDemandScanning_WindowsUpdate');
