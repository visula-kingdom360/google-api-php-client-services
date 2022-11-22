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

namespace Google\Service\ContainerAnalysis;

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

class AttestationNote extends \Google\Model
{
  /** @var Hint */
  public $hint;
  protected $hintType = Hint::class;
  protected $hintDataType = '';
  /** @param Hint */
  public function setHint(Hint $hint)
  {
    $this->hint = $hint;
  }
  /** @return Hint */
  public function getHint()
  {
    return $this->hint;
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

class BatchCreateNotesRequest extends \Google\Model
{
  /** @var Note[] */
  public $notes;
  protected $notesType = Note::class;
  protected $notesDataType = 'map';
  /** @param Note[] */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return Note[] */
  public function getNotes()
  {
    return $this->notes;
  }
}

class BatchCreateNotesResponse extends \Google\Collection
{
  /** @var Note[] */
  public $notes;
  protected $collection_key = 'notes';
  protected $notesType = Note::class;
  protected $notesDataType = 'array';
  /** @param Note[] */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return Note[] */
  public function getNotes()
  {
    return $this->notes;
  }
}

class BatchCreateOccurrencesRequest extends \Google\Collection
{
  /** @var Occurrence[] */
  public $occurrences;
  protected $collection_key = 'occurrences';
  protected $occurrencesType = Occurrence::class;
  protected $occurrencesDataType = 'array';
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

class BatchCreateOccurrencesResponse extends \Google\Collection
{
  /** @var Occurrence[] */
  public $occurrences;
  protected $collection_key = 'occurrences';
  protected $occurrencesType = Occurrence::class;
  protected $occurrencesDataType = 'array';
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

class BuildNote extends \Google\Model
{
  /** @var string */
  public $builderVersion;

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

class CVSSv3 extends \Google\Model
{
  /** @var string */
  public $attackComplexity;
  /** @var string */
  public $attackVector;
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

class CisBenchmark extends \Google\Model
{
  /** @var int */
  public $profileLevel;
  /** @var string */
  public $severity;

  /** @param int */
  public function setProfileLevel($profileLevel)
  {
    $this->profileLevel = $profileLevel;
  }
  /** @return int */
  public function getProfileLevel()
  {
    return $this->profileLevel;
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

class ComplianceNote extends \Google\Collection
{
  /** @var CisBenchmark */
  public $cisBenchmark;
  /** @var string */
  public $description;
  /** @var string */
  public $rationale;
  /** @var string */
  public $remediation;
  /** @var string */
  public $scanInstructions;
  /** @var string */
  public $title;
  /** @var ComplianceVersion[] */
  public $version;
  protected $collection_key = 'version';
  protected $cisBenchmarkType = CisBenchmark::class;
  protected $cisBenchmarkDataType = '';
  protected $versionType = ComplianceVersion::class;
  protected $versionDataType = 'array';
  /** @param CisBenchmark */
  public function setCisBenchmark(CisBenchmark $cisBenchmark)
  {
    $this->cisBenchmark = $cisBenchmark;
  }
  /** @return CisBenchmark */
  public function getCisBenchmark()
  {
    return $this->cisBenchmark;
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
  public function setRationale($rationale)
  {
    $this->rationale = $rationale;
  }
  /** @return string */
  public function getRationale()
  {
    return $this->rationale;
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
  public function setScanInstructions($scanInstructions)
  {
    $this->scanInstructions = $scanInstructions;
  }
  /** @return string */
  public function getScanInstructions()
  {
    return $this->scanInstructions;
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
  /** @param ComplianceVersion[] */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return ComplianceVersion[] */
  public function getVersion()
  {
    return $this->version;
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

class ComplianceVersion extends \Google\Model
{
  /** @var string */
  public $benchmarkDocument;
  /** @var string */
  public $cpeUri;
  /** @var string */
  public $version;

  /** @param string */
  public function setBenchmarkDocument($benchmarkDocument)
  {
    $this->benchmarkDocument = $benchmarkDocument;
  }
  /** @return string */
  public function getBenchmarkDocument()
  {
    return $this->benchmarkDocument;
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

class ContaineranalysisEmpty extends \Google\Model
{
}

class ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalConfig extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalResult extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts extends \Google\Collection
{
  /** @var string[] */
  public $images;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsMavenArtifact[] */
  public $mavenArtifacts;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects */
  public $objects;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsPythonPackage[] */
  public $pythonPackages;
  protected $collection_key = 'pythonPackages';
  protected $mavenArtifactsType = ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsMavenArtifact::class;
  protected $mavenArtifactsDataType = 'array';
  protected $objectsType = ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects::class;
  protected $objectsDataType = '';
  protected $pythonPackagesType = ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsPythonPackage::class;
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsMavenArtifact[] */
  public function setMavenArtifacts($mavenArtifacts)
  {
    $this->mavenArtifacts = $mavenArtifacts;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsMavenArtifact[] */
  public function getMavenArtifacts()
  {
    return $this->mavenArtifacts;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects */
  public function setObjects(ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects $objects)
  {
    $this->objects = $objects;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects */
  public function getObjects()
  {
    return $this->objects;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsPythonPackage[] */
  public function setPythonPackages($pythonPackages)
  {
    $this->pythonPackages = $pythonPackages;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsPythonPackage[] */
  public function getPythonPackages()
  {
    return $this->pythonPackages;
  }
}

class ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects extends \Google\Collection
{
  /** @var string */
  public $location;
  /** @var string[] */
  public $paths;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public $timing;
  protected $collection_key = 'paths';
  protected $timingType = ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class;
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public function setTiming(ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan $timing)
  {
    $this->timing = $timing;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public function getTiming()
  {
    return $this->timing;
  }
}

class ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsMavenArtifact extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsPythonPackage extends \Google\Collection
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1Build extends \Google\Collection
{
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval */
  public $approval;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts */
  public $artifacts;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets */
  public $availableSecrets;
  /** @var string */
  public $buildTriggerId;
  /** @var string */
  public $createTime;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo */
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
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions */
  public $options;
  /** @var string */
  public $projectId;
  /** @var string */
  public $queueTtl;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1Results */
  public $results;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1Secret[] */
  public $secrets;
  /** @var string */
  public $serviceAccount;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1Source */
  public $source;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance */
  public $sourceProvenance;
  /** @var string */
  public $startTime;
  /** @var string */
  public $status;
  /** @var string */
  public $statusDetail;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1BuildStep[] */
  public $steps;
  /** @var string[] */
  public $substitutions;
  /** @var string[] */
  public $tags;
  /** @var string */
  public $timeout;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan[] */
  public $timing;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1BuildWarning[] */
  public $warnings;
  protected $collection_key = 'warnings';
  protected $approvalType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval::class;
  protected $approvalDataType = '';
  protected $artifactsType = ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts::class;
  protected $artifactsDataType = '';
  protected $availableSecretsType = ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets::class;
  protected $availableSecretsDataType = '';
  protected $failureInfoType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo::class;
  protected $failureInfoDataType = '';
  protected $optionsType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions::class;
  protected $optionsDataType = '';
  protected $resultsType = ContaineranalysisGoogleDevtoolsCloudbuildV1Results::class;
  protected $resultsDataType = '';
  protected $secretsType = ContaineranalysisGoogleDevtoolsCloudbuildV1Secret::class;
  protected $secretsDataType = 'array';
  protected $sourceType = ContaineranalysisGoogleDevtoolsCloudbuildV1Source::class;
  protected $sourceDataType = '';
  protected $sourceProvenanceType = ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance::class;
  protected $sourceProvenanceDataType = '';
  protected $stepsType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildStep::class;
  protected $stepsDataType = 'array';
  protected $timingType = ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class;
  protected $timingDataType = 'map';
  protected $warningsType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildWarning::class;
  protected $warningsDataType = 'array';
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval */
  public function setApproval(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval $approval)
  {
    $this->approval = $approval;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval */
  public function getApproval()
  {
    return $this->approval;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts */
  public function setArtifacts(ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts $artifacts)
  {
    $this->artifacts = $artifacts;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts */
  public function getArtifacts()
  {
    return $this->artifacts;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets */
  public function setAvailableSecrets(ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets $availableSecrets)
  {
    $this->availableSecrets = $availableSecrets;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets */
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo */
  public function setFailureInfo(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo $failureInfo)
  {
    $this->failureInfo = $failureInfo;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo */
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions */
  public function setOptions(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions $options)
  {
    $this->options = $options;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions */
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1Results */
  public function setResults(ContaineranalysisGoogleDevtoolsCloudbuildV1Results $results)
  {
    $this->results = $results;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1Results */
  public function getResults()
  {
    return $this->results;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1Secret[] */
  public function setSecrets($secrets)
  {
    $this->secrets = $secrets;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1Secret[] */
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1Source */
  public function setSource(ContaineranalysisGoogleDevtoolsCloudbuildV1Source $source)
  {
    $this->source = $source;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1Source */
  public function getSource()
  {
    return $this->source;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance */
  public function setSourceProvenance(ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance $sourceProvenance)
  {
    $this->sourceProvenance = $sourceProvenance;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance */
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildStep[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildStep[] */
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan[] */
  public function setTiming($timing)
  {
    $this->timing = $timing;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan[] */
  public function getTiming()
  {
    return $this->timing;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildWarning[] */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildWarning[] */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval extends \Google\Model
{
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalConfig */
  public $config;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalResult */
  public $result;
  /** @var string */
  public $state;
  protected $configType = ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalConfig::class;
  protected $configDataType = '';
  protected $resultType = ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalResult::class;
  protected $resultDataType = '';
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalConfig */
  public function setConfig(ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalConfig $config)
  {
    $this->config = $config;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalResult */
  public function setResult(ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalResult $result)
  {
    $this->result = $result;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalResult */
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions extends \Google\Collection
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
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptionsPoolOption */
  public $pool;
  /** @var string */
  public $requestedVerifyOption;
  /** @var string[] */
  public $secretEnv;
  /** @var string[] */
  public $sourceProvenanceHash;
  /** @var string */
  public $substitutionOption;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1Volume[] */
  public $volumes;
  /** @var string */
  public $workerPool;
  protected $collection_key = 'volumes';
  protected $poolType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptionsPoolOption::class;
  protected $poolDataType = '';
  protected $volumesType = ContaineranalysisGoogleDevtoolsCloudbuildV1Volume::class;
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptionsPoolOption */
  public function setPool(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptionsPoolOption $pool)
  {
    $this->pool = $pool;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptionsPoolOption */
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1Volume[] */
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptionsPoolOption extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1BuildStep extends \Google\Collection
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
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public $pullTiming;
  /** @var string */
  public $script;
  /** @var string[] */
  public $secretEnv;
  /** @var string */
  public $status;
  /** @var string */
  public $timeout;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public $timing;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1Volume[] */
  public $volumes;
  /** @var string[] */
  public $waitFor;
  protected $collection_key = 'waitFor';
  protected $pullTimingType = ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class;
  protected $pullTimingDataType = '';
  protected $timingType = ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class;
  protected $timingDataType = '';
  protected $volumesType = ContaineranalysisGoogleDevtoolsCloudbuildV1Volume::class;
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public function setPullTiming(ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan $pullTiming)
  {
    $this->pullTiming = $pullTiming;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public function setTiming(ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan $timing)
  {
    $this->timing = $timing;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public function getTiming()
  {
    return $this->timing;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1Volume[] */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1Volume[] */
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1BuildWarning extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1BuiltImage extends \Google\Model
{
  /** @var string */
  public $digest;
  /** @var string */
  public $name;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public $pushTiming;
  protected $pushTimingType = ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class;
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public function setPushTiming(ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan $pushTiming)
  {
    $this->pushTiming = $pushTiming;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public function getPushTiming()
  {
    return $this->pushTiming;
  }
}

class ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes extends \Google\Collection
{
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1Hash[] */
  public $fileHash;
  protected $collection_key = 'fileHash';
  protected $fileHashType = ContaineranalysisGoogleDevtoolsCloudbuildV1Hash::class;
  protected $fileHashDataType = 'array';
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1Hash[] */
  public function setFileHash($fileHash)
  {
    $this->fileHash = $fileHash;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1Hash[] */
  public function getFileHash()
  {
    return $this->fileHash;
  }
}

class ContaineranalysisGoogleDevtoolsCloudbuildV1Hash extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1InlineSecret extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1Results extends \Google\Collection
{
  /** @var string */
  public $artifactManifest;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public $artifactTiming;
  /** @var string[] */
  public $buildStepImages;
  /** @var string[] */
  public $buildStepOutputs;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1BuiltImage[] */
  public $images;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedMavenArtifact[] */
  public $mavenArtifacts;
  /** @var string */
  public $numArtifacts;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedPythonPackage[] */
  public $pythonPackages;
  protected $collection_key = 'pythonPackages';
  protected $artifactTimingType = ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class;
  protected $artifactTimingDataType = '';
  protected $imagesType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuiltImage::class;
  protected $imagesDataType = 'array';
  protected $mavenArtifactsType = ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedMavenArtifact::class;
  protected $mavenArtifactsDataType = 'array';
  protected $pythonPackagesType = ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedPythonPackage::class;
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public function setArtifactTiming(ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan $artifactTiming)
  {
    $this->artifactTiming = $artifactTiming;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuiltImage[] */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuiltImage[] */
  public function getImages()
  {
    return $this->images;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedMavenArtifact[] */
  public function setMavenArtifacts($mavenArtifacts)
  {
    $this->mavenArtifacts = $mavenArtifacts;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedMavenArtifact[] */
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
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedPythonPackage[] */
  public function setPythonPackages($pythonPackages)
  {
    $this->pythonPackages = $pythonPackages;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedPythonPackage[] */
  public function getPythonPackages()
  {
    return $this->pythonPackages;
  }
}

class ContaineranalysisGoogleDevtoolsCloudbuildV1Secret extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1SecretManagerSecret extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets extends \Google\Collection
{
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1InlineSecret[] */
  public $inline;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1SecretManagerSecret[] */
  public $secretManager;
  protected $collection_key = 'secretManager';
  protected $inlineType = ContaineranalysisGoogleDevtoolsCloudbuildV1InlineSecret::class;
  protected $inlineDataType = 'array';
  protected $secretManagerType = ContaineranalysisGoogleDevtoolsCloudbuildV1SecretManagerSecret::class;
  protected $secretManagerDataType = 'array';
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1InlineSecret[] */
  public function setInline($inline)
  {
    $this->inline = $inline;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1InlineSecret[] */
  public function getInline()
  {
    return $this->inline;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1SecretManagerSecret[] */
  public function setSecretManager($secretManager)
  {
    $this->secretManager = $secretManager;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1SecretManagerSecret[] */
  public function getSecretManager()
  {
    return $this->secretManager;
  }
}

class ContaineranalysisGoogleDevtoolsCloudbuildV1Source extends \Google\Model
{
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource */
  public $repoSource;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource */
  public $storageSource;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest */
  public $storageSourceManifest;
  protected $repoSourceType = ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource::class;
  protected $repoSourceDataType = '';
  protected $storageSourceType = ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource::class;
  protected $storageSourceDataType = '';
  protected $storageSourceManifestType = ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest::class;
  protected $storageSourceManifestDataType = '';
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource */
  public function setRepoSource(ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource $repoSource)
  {
    $this->repoSource = $repoSource;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource */
  public function getRepoSource()
  {
    return $this->repoSource;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource */
  public function setStorageSource(ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource $storageSource)
  {
    $this->storageSource = $storageSource;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource */
  public function getStorageSource()
  {
    return $this->storageSource;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest */
  public function setStorageSourceManifest(ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest $storageSourceManifest)
  {
    $this->storageSourceManifest = $storageSourceManifest;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest */
  public function getStorageSourceManifest()
  {
    return $this->storageSourceManifest;
  }
}

class ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance extends \Google\Model
{
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes[] */
  public $fileHashes;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource */
  public $resolvedRepoSource;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource */
  public $resolvedStorageSource;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest */
  public $resolvedStorageSourceManifest;
  protected $fileHashesType = ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes::class;
  protected $fileHashesDataType = 'map';
  protected $resolvedRepoSourceType = ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource::class;
  protected $resolvedRepoSourceDataType = '';
  protected $resolvedStorageSourceType = ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource::class;
  protected $resolvedStorageSourceDataType = '';
  protected $resolvedStorageSourceManifestType = ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest::class;
  protected $resolvedStorageSourceManifestDataType = '';
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes[] */
  public function setFileHashes($fileHashes)
  {
    $this->fileHashes = $fileHashes;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes[] */
  public function getFileHashes()
  {
    return $this->fileHashes;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource */
  public function setResolvedRepoSource(ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource $resolvedRepoSource)
  {
    $this->resolvedRepoSource = $resolvedRepoSource;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource */
  public function getResolvedRepoSource()
  {
    return $this->resolvedRepoSource;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource */
  public function setResolvedStorageSource(ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource $resolvedStorageSource)
  {
    $this->resolvedStorageSource = $resolvedStorageSource;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource */
  public function getResolvedStorageSource()
  {
    return $this->resolvedStorageSource;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest */
  public function setResolvedStorageSourceManifest(ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest $resolvedStorageSourceManifest)
  {
    $this->resolvedStorageSourceManifest = $resolvedStorageSourceManifest;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest */
  public function getResolvedStorageSourceManifest()
  {
    return $this->resolvedStorageSourceManifest;
  }
}

class ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan extends \Google\Model
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedMavenArtifact extends \Google\Model
{
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes */
  public $fileHashes;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public $pushTiming;
  /** @var string */
  public $uri;
  protected $fileHashesType = ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes::class;
  protected $fileHashesDataType = '';
  protected $pushTimingType = ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class;
  protected $pushTimingDataType = '';
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes */
  public function setFileHashes(ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes $fileHashes)
  {
    $this->fileHashes = $fileHashes;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes */
  public function getFileHashes()
  {
    return $this->fileHashes;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public function setPushTiming(ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan $pushTiming)
  {
    $this->pushTiming = $pushTiming;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedPythonPackage extends \Google\Model
{
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes */
  public $fileHashes;
  /** @var ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public $pushTiming;
  /** @var string */
  public $uri;
  protected $fileHashesType = ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes::class;
  protected $fileHashesDataType = '';
  protected $pushTimingType = ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class;
  protected $pushTimingDataType = '';
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes */
  public function setFileHashes(ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes $fileHashes)
  {
    $this->fileHashes = $fileHashes;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes */
  public function getFileHashes()
  {
    return $this->fileHashes;
  }
  /** @param ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
  public function setPushTiming(ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan $pushTiming)
  {
    $this->pushTiming = $pushTiming;
  }
  /** @return ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan */
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

class ContaineranalysisGoogleDevtoolsCloudbuildV1Volume extends \Google\Model
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

class DSSEAttestationNote extends \Google\Model
{
  /** @var DSSEHint */
  public $hint;
  protected $hintType = DSSEHint::class;
  protected $hintDataType = '';
  /** @param DSSEHint */
  public function setHint(DSSEHint $hint)
  {
    $this->hint = $hint;
  }
  /** @return DSSEHint */
  public function getHint()
  {
    return $this->hint;
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

class DSSEHint extends \Google\Model
{
  /** @var string */
  public $humanReadableName;

  /** @param string */
  public function setHumanReadableName($humanReadableName)
  {
    $this->humanReadableName = $humanReadableName;
  }
  /** @return string */
  public function getHumanReadableName()
  {
    return $this->humanReadableName;
  }
}

class DeploymentNote extends \Google\Collection
{
  /** @var string[] */
  public $resourceUri;
  protected $collection_key = 'resourceUri';
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

class Detail extends \Google\Model
{
  /** @var string */
  public $affectedCpeUri;
  /** @var string */
  public $affectedPackage;
  /** @var Version */
  public $affectedVersionEnd;
  /** @var Version */
  public $affectedVersionStart;
  /** @var string */
  public $description;
  /** @var string */
  public $fixedCpeUri;
  /** @var string */
  public $fixedPackage;
  /** @var Version */
  public $fixedVersion;
  /** @var bool */
  public $isObsolete;
  /** @var string */
  public $packageType;
  /** @var string */
  public $severityName;
  /** @var string */
  public $source;
  /** @var string */
  public $sourceUpdateTime;
  /** @var string */
  public $vendor;
  protected $affectedVersionEndType = Version::class;
  protected $affectedVersionEndDataType = '';
  protected $affectedVersionStartType = Version::class;
  protected $affectedVersionStartDataType = '';
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
  public function setAffectedVersionEnd(Version $affectedVersionEnd)
  {
    $this->affectedVersionEnd = $affectedVersionEnd;
  }
  /** @return Version */
  public function getAffectedVersionEnd()
  {
    return $this->affectedVersionEnd;
  }
  /** @param Version */
  public function setAffectedVersionStart(Version $affectedVersionStart)
  {
    $this->affectedVersionStart = $affectedVersionStart;
  }
  /** @return Version */
  public function getAffectedVersionStart()
  {
    return $this->affectedVersionStart;
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
  /** @param bool */
  public function setIsObsolete($isObsolete)
  {
    $this->isObsolete = $isObsolete;
  }
  /** @return bool */
  public function getIsObsolete()
  {
    return $this->isObsolete;
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
  /** @param string */
  public function setSeverityName($severityName)
  {
    $this->severityName = $severityName;
  }
  /** @return string */
  public function getSeverityName()
  {
    return $this->severityName;
  }
  /** @param string */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /** @return string */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setSourceUpdateTime($sourceUpdateTime)
  {
    $this->sourceUpdateTime = $sourceUpdateTime;
  }
  /** @return string */
  public function getSourceUpdateTime()
  {
    return $this->sourceUpdateTime;
  }
  /** @param string */
  public function setVendor($vendor)
  {
    $this->vendor = $vendor;
  }
  /** @return string */
  public function getVendor()
  {
    return $this->vendor;
  }
}

class Digest extends \Google\Model
{
  /** @var string */
  public $algo;
  /** @var string */
  public $digestBytes;

  /** @param string */
  public function setAlgo($algo)
  {
    $this->algo = $algo;
  }
  /** @return string */
  public function getAlgo()
  {
    return $this->algo;
  }
  /** @param string */
  public function setDigestBytes($digestBytes)
  {
    $this->digestBytes = $digestBytes;
  }
  /** @return string */
  public function getDigestBytes()
  {
    return $this->digestBytes;
  }
}

class DiscoveryNote extends \Google\Model
{
  /** @var string */
  public $analysisKind;

  /** @param string */
  public function setAnalysisKind($analysisKind)
  {
    $this->analysisKind = $analysisKind;
  }
  /** @return string */
  public function getAnalysisKind()
  {
    return $this->analysisKind;
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

class Distribution extends \Google\Model
{
  /** @var string */
  public $architecture;
  /** @var string */
  public $cpeUri;
  /** @var string */
  public $description;
  /** @var Version */
  public $latestVersion;
  /** @var string */
  public $maintainer;
  /** @var string */
  public $url;
  protected $latestVersionType = Version::class;
  protected $latestVersionDataType = '';
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
  /** @param Version */
  public function setLatestVersion(Version $latestVersion)
  {
    $this->latestVersion = $latestVersion;
  }
  /** @return Version */
  public function getLatestVersion()
  {
    return $this->latestVersion;
  }
  /** @param string */
  public function setMaintainer($maintainer)
  {
    $this->maintainer = $maintainer;
  }
  /** @return string */
  public function getMaintainer()
  {
    return $this->maintainer;
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

class FixableTotalByDigest extends \Google\Model
{
  /** @var string */
  public $fixableCount;
  /** @var string */
  public $resourceUri;
  /** @var string */
  public $severity;
  /** @var string */
  public $totalCount;

  /** @param string */
  public function setFixableCount($fixableCount)
  {
    $this->fixableCount = $fixableCount;
  }
  /** @return string */
  public function getFixableCount()
  {
    return $this->fixableCount;
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
  public function setTotalCount($totalCount)
  {
    $this->totalCount = $totalCount;
  }
  /** @return string */
  public function getTotalCount()
  {
    return $this->totalCount;
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

class GoogleDevtoolsContaineranalysisV1alpha1OperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;

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

class Hint extends \Google\Model
{
  /** @var string */
  public $humanReadableName;

  /** @param string */
  public function setHumanReadableName($humanReadableName)
  {
    $this->humanReadableName = $humanReadableName;
  }
  /** @return string */
  public function getHumanReadableName()
  {
    return $this->humanReadableName;
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

class ImageNote extends \Google\Model
{
  /** @var Fingerprint */
  public $fingerprint;
  /** @var string */
  public $resourceUrl;
  protected $fingerprintType = Fingerprint::class;
  protected $fingerprintDataType = '';
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
  /** @param string */
  public function setResourceUrl($resourceUrl)
  {
    $this->resourceUrl = $resourceUrl;
  }
  /** @return string */
  public function getResourceUrl()
  {
    return $this->resourceUrl;
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

class KnowledgeBase extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $url;

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

class ListNoteOccurrencesResponse extends \Google\Collection
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

class ListNotesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Note[] */
  public $notes;
  protected $collection_key = 'notes';
  protected $notesType = Note::class;
  protected $notesDataType = 'array';
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
  /** @param Note[] */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return Note[] */
  public function getNotes()
  {
    return $this->notes;
  }
}

class ListOccurrencesResponse extends \Google\Collection
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

class Note extends \Google\Collection
{
  /** @var AttestationNote */
  public $attestation;
  /** @var BuildNote */
  public $build;
  /** @var ComplianceNote */
  public $compliance;
  /** @var string */
  public $createTime;
  /** @var DeploymentNote */
  public $deployment;
  /** @var DiscoveryNote */
  public $discovery;
  /** @var DSSEAttestationNote */
  public $dsseAttestation;
  /** @var string */
  public $expirationTime;
  /** @var ImageNote */
  public $image;
  /** @var string */
  public $kind;
  /** @var string */
  public $longDescription;
  /** @var string */
  public $name;
  /** @var PackageNote */
  public $package;
  /** @var string[] */
  public $relatedNoteNames;
  /** @var RelatedUrl[] */
  public $relatedUrl;
  /** @var string */
  public $shortDescription;
  /** @var string */
  public $updateTime;
  /** @var UpgradeNote */
  public $upgrade;
  /** @var VulnerabilityNote */
  public $vulnerability;
  protected $collection_key = 'relatedUrl';
  protected $attestationType = AttestationNote::class;
  protected $attestationDataType = '';
  protected $buildType = BuildNote::class;
  protected $buildDataType = '';
  protected $complianceType = ComplianceNote::class;
  protected $complianceDataType = '';
  protected $deploymentType = DeploymentNote::class;
  protected $deploymentDataType = '';
  protected $discoveryType = DiscoveryNote::class;
  protected $discoveryDataType = '';
  protected $dsseAttestationType = DSSEAttestationNote::class;
  protected $dsseAttestationDataType = '';
  protected $imageType = ImageNote::class;
  protected $imageDataType = '';
  protected $packageType = PackageNote::class;
  protected $packageDataType = '';
  protected $relatedUrlType = RelatedUrl::class;
  protected $relatedUrlDataType = 'array';
  protected $upgradeType = UpgradeNote::class;
  protected $upgradeDataType = '';
  protected $vulnerabilityType = VulnerabilityNote::class;
  protected $vulnerabilityDataType = '';
  /** @param AttestationNote */
  public function setAttestation(AttestationNote $attestation)
  {
    $this->attestation = $attestation;
  }
  /** @return AttestationNote */
  public function getAttestation()
  {
    return $this->attestation;
  }
  /** @param BuildNote */
  public function setBuild(BuildNote $build)
  {
    $this->build = $build;
  }
  /** @return BuildNote */
  public function getBuild()
  {
    return $this->build;
  }
  /** @param ComplianceNote */
  public function setCompliance(ComplianceNote $compliance)
  {
    $this->compliance = $compliance;
  }
  /** @return ComplianceNote */
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
  /** @param DeploymentNote */
  public function setDeployment(DeploymentNote $deployment)
  {
    $this->deployment = $deployment;
  }
  /** @return DeploymentNote */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /** @param DiscoveryNote */
  public function setDiscovery(DiscoveryNote $discovery)
  {
    $this->discovery = $discovery;
  }
  /** @return DiscoveryNote */
  public function getDiscovery()
  {
    return $this->discovery;
  }
  /** @param DSSEAttestationNote */
  public function setDsseAttestation(DSSEAttestationNote $dsseAttestation)
  {
    $this->dsseAttestation = $dsseAttestation;
  }
  /** @return DSSEAttestationNote */
  public function getDsseAttestation()
  {
    return $this->dsseAttestation;
  }
  /** @param string */
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
  /** @param ImageNote */
  public function setImage(ImageNote $image)
  {
    $this->image = $image;
  }
  /** @return ImageNote */
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
  public function setLongDescription($longDescription)
  {
    $this->longDescription = $longDescription;
  }
  /** @return string */
  public function getLongDescription()
  {
    return $this->longDescription;
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
  /** @param PackageNote */
  public function setPackage(PackageNote $package)
  {
    $this->package = $package;
  }
  /** @return PackageNote */
  public function getPackage()
  {
    return $this->package;
  }
  /** @param string[] */
  public function setRelatedNoteNames($relatedNoteNames)
  {
    $this->relatedNoteNames = $relatedNoteNames;
  }
  /** @return string[] */
  public function getRelatedNoteNames()
  {
    return $this->relatedNoteNames;
  }
  /** @param RelatedUrl[] */
  public function setRelatedUrl($relatedUrl)
  {
    $this->relatedUrl = $relatedUrl;
  }
  /** @return RelatedUrl[] */
  public function getRelatedUrl()
  {
    return $this->relatedUrl;
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /** @param UpgradeNote */
  public function setUpgrade(UpgradeNote $upgrade)
  {
    $this->upgrade = $upgrade;
  }
  /** @return UpgradeNote */
  public function getUpgrade()
  {
    return $this->upgrade;
  }
  /** @param VulnerabilityNote */
  public function setVulnerability(VulnerabilityNote $vulnerability)
  {
    $this->vulnerability = $vulnerability;
  }
  /** @return VulnerabilityNote */
  public function getVulnerability()
  {
    return $this->vulnerability;
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

class PackageNote extends \Google\Collection
{
  /** @var string */
  public $architecture;
  /** @var string */
  public $cpeUri;
  /** @var string */
  public $description;
  /** @var Digest[] */
  public $digest;
  /** @var Distribution[] */
  public $distribution;
  /** @var License */
  public $license;
  /** @var string */
  public $maintainer;
  /** @var string */
  public $name;
  /** @var string */
  public $packageType;
  /** @var string */
  public $url;
  /** @var Version */
  public $version;
  protected $collection_key = 'distribution';
  protected $digestType = Digest::class;
  protected $digestDataType = 'array';
  protected $distributionType = Distribution::class;
  protected $distributionDataType = 'array';
  protected $licenseType = License::class;
  protected $licenseDataType = '';
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
  /** @param Digest[] */
  public function setDigest($digest)
  {
    $this->digest = $digest;
  }
  /** @return Digest[] */
  public function getDigest()
  {
    return $this->digest;
  }
  /** @param Distribution[] */
  public function setDistribution($distribution)
  {
    $this->distribution = $distribution;
  }
  /** @return Distribution[] */
  public function getDistribution()
  {
    return $this->distribution;
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
  /** @param string */
  public function setMaintainer($maintainer)
  {
    $this->maintainer = $maintainer;
  }
  /** @return string */
  public function getMaintainer()
  {
    return $this->maintainer;
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

class Policy extends \Google\Collection
{
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
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

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
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

class UpgradeNote extends \Google\Collection
{
  /** @var UpgradeDistribution[] */
  public $distributions;
  /** @var string */
  public $package;
  /** @var Version */
  public $version;
  /** @var WindowsUpdate */
  public $windowsUpdate;
  protected $collection_key = 'distributions';
  protected $distributionsType = UpgradeDistribution::class;
  protected $distributionsDataType = 'array';
  protected $versionType = Version::class;
  protected $versionDataType = '';
  protected $windowsUpdateType = WindowsUpdate::class;
  protected $windowsUpdateDataType = '';
  /** @param UpgradeDistribution[] */
  public function setDistributions($distributions)
  {
    $this->distributions = $distributions;
  }
  /** @return UpgradeDistribution[] */
  public function getDistributions()
  {
    return $this->distributions;
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
  public function setVersion(Version $version)
  {
    $this->version = $version;
  }
  /** @return Version */
  public function getVersion()
  {
    return $this->version;
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

class VulnerabilityNote extends \Google\Collection
{
  /** @var float */
  public $cvssScore;
  /** @var CVSSv3 */
  public $cvssV3;
  /** @var string */
  public $cvssVersion;
  /** @var Detail[] */
  public $details;
  /** @var string */
  public $severity;
  /** @var string */
  public $sourceUpdateTime;
  /** @var WindowsDetail[] */
  public $windowsDetails;
  protected $collection_key = 'windowsDetails';
  protected $cvssV3Type = CVSSv3::class;
  protected $cvssV3DataType = '';
  protected $detailsType = Detail::class;
  protected $detailsDataType = 'array';
  protected $windowsDetailsType = WindowsDetail::class;
  protected $windowsDetailsDataType = 'array';
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
  /** @param CVSSv3 */
  public function setCvssV3(CVSSv3 $cvssV3)
  {
    $this->cvssV3 = $cvssV3;
  }
  /** @return CVSSv3 */
  public function getCvssV3()
  {
    return $this->cvssV3;
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
  /** @param Detail[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return Detail[] */
  public function getDetails()
  {
    return $this->details;
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
  public function setSourceUpdateTime($sourceUpdateTime)
  {
    $this->sourceUpdateTime = $sourceUpdateTime;
  }
  /** @return string */
  public function getSourceUpdateTime()
  {
    return $this->sourceUpdateTime;
  }
  /** @param WindowsDetail[] */
  public function setWindowsDetails($windowsDetails)
  {
    $this->windowsDetails = $windowsDetails;
  }
  /** @return WindowsDetail[] */
  public function getWindowsDetails()
  {
    return $this->windowsDetails;
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

class VulnerabilityOccurrencesSummary extends \Google\Collection
{
  /** @var FixableTotalByDigest[] */
  public $counts;
  protected $collection_key = 'counts';
  protected $countsType = FixableTotalByDigest::class;
  protected $countsDataType = 'array';
  /** @param FixableTotalByDigest[] */
  public function setCounts($counts)
  {
    $this->counts = $counts;
  }
  /** @return FixableTotalByDigest[] */
  public function getCounts()
  {
    return $this->counts;
  }
}

class WindowsDetail extends \Google\Collection
{
  /** @var string */
  public $cpeUri;
  /** @var string */
  public $description;
  /** @var KnowledgeBase[] */
  public $fixingKbs;
  /** @var string */
  public $name;
  protected $collection_key = 'fixingKbs';
  protected $fixingKbsType = KnowledgeBase::class;
  protected $fixingKbsDataType = 'array';
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param KnowledgeBase[] */
  public function setFixingKbs($fixingKbs)
  {
    $this->fixingKbs = $fixingKbs;
  }
  /** @return KnowledgeBase[] */
  public function getFixingKbs()
  {
    return $this->fixingKbs;
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
class_alias(AliasContext::class, 'Google_Service_ContainerAnalysis_AliasContext');
class_alias(AnalysisCompleted::class, 'Google_Service_ContainerAnalysis_AnalysisCompleted');
class_alias(Artifact::class, 'Google_Service_ContainerAnalysis_Artifact');
class_alias(AttestationNote::class, 'Google_Service_ContainerAnalysis_AttestationNote');
class_alias(AttestationOccurrence::class, 'Google_Service_ContainerAnalysis_AttestationOccurrence');
class_alias(BatchCreateNotesRequest::class, 'Google_Service_ContainerAnalysis_BatchCreateNotesRequest');
class_alias(BatchCreateNotesResponse::class, 'Google_Service_ContainerAnalysis_BatchCreateNotesResponse');
class_alias(BatchCreateOccurrencesRequest::class, 'Google_Service_ContainerAnalysis_BatchCreateOccurrencesRequest');
class_alias(BatchCreateOccurrencesResponse::class, 'Google_Service_ContainerAnalysis_BatchCreateOccurrencesResponse');
class_alias(Binding::class, 'Google_Service_ContainerAnalysis_Binding');
class_alias(BuildNote::class, 'Google_Service_ContainerAnalysis_BuildNote');
class_alias(BuildOccurrence::class, 'Google_Service_ContainerAnalysis_BuildOccurrence');
class_alias(BuildProvenance::class, 'Google_Service_ContainerAnalysis_BuildProvenance');
class_alias(BuildStep::class, 'Google_Service_ContainerAnalysis_BuildStep');
class_alias(BuilderConfig::class, 'Google_Service_ContainerAnalysis_BuilderConfig');
class_alias(CVSS::class, 'Google_Service_ContainerAnalysis_CVSS');
class_alias(CVSSv3::class, 'Google_Service_ContainerAnalysis_CVSSv3');
class_alias(Category::class, 'Google_Service_ContainerAnalysis_Category');
class_alias(CisBenchmark::class, 'Google_Service_ContainerAnalysis_CisBenchmark');
class_alias(CloudRepoSourceContext::class, 'Google_Service_ContainerAnalysis_CloudRepoSourceContext');
class_alias(Command::class, 'Google_Service_ContainerAnalysis_Command');
class_alias(Completeness::class, 'Google_Service_ContainerAnalysis_Completeness');
class_alias(ComplianceNote::class, 'Google_Service_ContainerAnalysis_ComplianceNote');
class_alias(ComplianceOccurrence::class, 'Google_Service_ContainerAnalysis_ComplianceOccurrence');
class_alias(ComplianceVersion::class, 'Google_Service_ContainerAnalysis_ComplianceVersion');
class_alias(ContaineranalysisEmpty::class, 'Google_Service_ContainerAnalysis_ContaineranalysisEmpty');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalConfig::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalConfig');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalResult::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1ApprovalResult');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsMavenArtifact::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsMavenArtifact');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsPythonPackage::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsPythonPackage');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1Build::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1Build');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptionsPoolOption::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptionsPoolOption');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildStep::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1BuildStep');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildWarning::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1BuildWarning');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1BuiltImage::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1BuiltImage');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1FileHashes');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1Hash::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1Hash');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1InlineSecret::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1InlineSecret');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1RepoSource');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1Results::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1Results');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1Secret::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1Secret');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1SecretManagerSecret::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1SecretManagerSecret');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1Source::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1Source');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSource');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1StorageSourceManifest');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedMavenArtifact::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedMavenArtifact');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedPythonPackage::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1UploadedPythonPackage');
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1Volume::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1Volume');
class_alias(DSSEAttestationNote::class, 'Google_Service_ContainerAnalysis_DSSEAttestationNote');
class_alias(DSSEAttestationOccurrence::class, 'Google_Service_ContainerAnalysis_DSSEAttestationOccurrence');
class_alias(DSSEHint::class, 'Google_Service_ContainerAnalysis_DSSEHint');
class_alias(DeploymentNote::class, 'Google_Service_ContainerAnalysis_DeploymentNote');
class_alias(DeploymentOccurrence::class, 'Google_Service_ContainerAnalysis_DeploymentOccurrence');
class_alias(Detail::class, 'Google_Service_ContainerAnalysis_Detail');
class_alias(Digest::class, 'Google_Service_ContainerAnalysis_Digest');
class_alias(DiscoveryNote::class, 'Google_Service_ContainerAnalysis_DiscoveryNote');
class_alias(DiscoveryOccurrence::class, 'Google_Service_ContainerAnalysis_DiscoveryOccurrence');
class_alias(Distribution::class, 'Google_Service_ContainerAnalysis_Distribution');
class_alias(Envelope::class, 'Google_Service_ContainerAnalysis_Envelope');
class_alias(EnvelopeSignature::class, 'Google_Service_ContainerAnalysis_EnvelopeSignature');
class_alias(Expr::class, 'Google_Service_ContainerAnalysis_Expr');
class_alias(FileHashes::class, 'Google_Service_ContainerAnalysis_FileHashes');
class_alias(Fingerprint::class, 'Google_Service_ContainerAnalysis_Fingerprint');
class_alias(FixableTotalByDigest::class, 'Google_Service_ContainerAnalysis_FixableTotalByDigest');
class_alias(GerritSourceContext::class, 'Google_Service_ContainerAnalysis_GerritSourceContext');
class_alias(GetIamPolicyRequest::class, 'Google_Service_ContainerAnalysis_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_ContainerAnalysis_GetPolicyOptions');
class_alias(GitSourceContext::class, 'Google_Service_ContainerAnalysis_GitSourceContext');
class_alias(GoogleDevtoolsContaineranalysisV1alpha1OperationMetadata::class, 'Google_Service_ContainerAnalysis_GoogleDevtoolsContaineranalysisV1alpha1OperationMetadata');
class_alias(GrafeasV1FileLocation::class, 'Google_Service_ContainerAnalysis_GrafeasV1FileLocation');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaBuilder::class, 'Google_Service_ContainerAnalysis_GrafeasV1SlsaProvenanceZeroTwoSlsaBuilder');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaCompleteness::class, 'Google_Service_ContainerAnalysis_GrafeasV1SlsaProvenanceZeroTwoSlsaCompleteness');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource::class, 'Google_Service_ContainerAnalysis_GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation::class, 'Google_Service_ContainerAnalysis_GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaMaterial::class, 'Google_Service_ContainerAnalysis_GrafeasV1SlsaProvenanceZeroTwoSlsaMaterial');
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaMetadata::class, 'Google_Service_ContainerAnalysis_GrafeasV1SlsaProvenanceZeroTwoSlsaMetadata');
class_alias(Hash::class, 'Google_Service_ContainerAnalysis_Hash');
class_alias(Hint::class, 'Google_Service_ContainerAnalysis_Hint');
class_alias(Identity::class, 'Google_Service_ContainerAnalysis_Identity');
class_alias(ImageNote::class, 'Google_Service_ContainerAnalysis_ImageNote');
class_alias(ImageOccurrence::class, 'Google_Service_ContainerAnalysis_ImageOccurrence');
class_alias(InTotoProvenance::class, 'Google_Service_ContainerAnalysis_InTotoProvenance');
class_alias(InTotoStatement::class, 'Google_Service_ContainerAnalysis_InTotoStatement');
class_alias(Jwt::class, 'Google_Service_ContainerAnalysis_Jwt');
class_alias(KnowledgeBase::class, 'Google_Service_ContainerAnalysis_KnowledgeBase');
class_alias(Layer::class, 'Google_Service_ContainerAnalysis_Layer');
class_alias(License::class, 'Google_Service_ContainerAnalysis_License');
class_alias(ListNoteOccurrencesResponse::class, 'Google_Service_ContainerAnalysis_ListNoteOccurrencesResponse');
class_alias(ListNotesResponse::class, 'Google_Service_ContainerAnalysis_ListNotesResponse');
class_alias(ListOccurrencesResponse::class, 'Google_Service_ContainerAnalysis_ListOccurrencesResponse');
class_alias(Location::class, 'Google_Service_ContainerAnalysis_Location');
class_alias(Material::class, 'Google_Service_ContainerAnalysis_Material');
class_alias(Metadata::class, 'Google_Service_ContainerAnalysis_Metadata');
class_alias(NonCompliantFile::class, 'Google_Service_ContainerAnalysis_NonCompliantFile');
class_alias(Note::class, 'Google_Service_ContainerAnalysis_Note');
class_alias(Occurrence::class, 'Google_Service_ContainerAnalysis_Occurrence');
class_alias(PackageIssue::class, 'Google_Service_ContainerAnalysis_PackageIssue');
class_alias(PackageNote::class, 'Google_Service_ContainerAnalysis_PackageNote');
class_alias(PackageOccurrence::class, 'Google_Service_ContainerAnalysis_PackageOccurrence');
class_alias(Policy::class, 'Google_Service_ContainerAnalysis_Policy');
class_alias(ProjectRepoId::class, 'Google_Service_ContainerAnalysis_ProjectRepoId');
class_alias(Recipe::class, 'Google_Service_ContainerAnalysis_Recipe');
class_alias(RelatedUrl::class, 'Google_Service_ContainerAnalysis_RelatedUrl');
class_alias(RepoId::class, 'Google_Service_ContainerAnalysis_RepoId');
class_alias(SetIamPolicyRequest::class, 'Google_Service_ContainerAnalysis_SetIamPolicyRequest');
class_alias(Signature::class, 'Google_Service_ContainerAnalysis_Signature');
class_alias(SlsaBuilder::class, 'Google_Service_ContainerAnalysis_SlsaBuilder');
class_alias(SlsaCompleteness::class, 'Google_Service_ContainerAnalysis_SlsaCompleteness');
class_alias(SlsaMetadata::class, 'Google_Service_ContainerAnalysis_SlsaMetadata');
class_alias(SlsaProvenance::class, 'Google_Service_ContainerAnalysis_SlsaProvenance');
class_alias(SlsaProvenanceZeroTwo::class, 'Google_Service_ContainerAnalysis_SlsaProvenanceZeroTwo');
class_alias(SlsaRecipe::class, 'Google_Service_ContainerAnalysis_SlsaRecipe');
class_alias(Source::class, 'Google_Service_ContainerAnalysis_Source');
class_alias(SourceContext::class, 'Google_Service_ContainerAnalysis_SourceContext');
class_alias(Status::class, 'Google_Service_ContainerAnalysis_Status');
class_alias(Subject::class, 'Google_Service_ContainerAnalysis_Subject');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_ContainerAnalysis_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_ContainerAnalysis_TestIamPermissionsResponse');
class_alias(TimeSpan::class, 'Google_Service_ContainerAnalysis_TimeSpan');
class_alias(UpgradeDistribution::class, 'Google_Service_ContainerAnalysis_UpgradeDistribution');
class_alias(UpgradeNote::class, 'Google_Service_ContainerAnalysis_UpgradeNote');
class_alias(UpgradeOccurrence::class, 'Google_Service_ContainerAnalysis_UpgradeOccurrence');
class_alias(Version::class, 'Google_Service_ContainerAnalysis_Version');
class_alias(Volume::class, 'Google_Service_ContainerAnalysis_Volume');
class_alias(VulnerabilityNote::class, 'Google_Service_ContainerAnalysis_VulnerabilityNote');
class_alias(VulnerabilityOccurrence::class, 'Google_Service_ContainerAnalysis_VulnerabilityOccurrence');
class_alias(VulnerabilityOccurrencesSummary::class, 'Google_Service_ContainerAnalysis_VulnerabilityOccurrencesSummary');
class_alias(WindowsDetail::class, 'Google_Service_ContainerAnalysis_WindowsDetail');
class_alias(WindowsUpdate::class, 'Google_Service_ContainerAnalysis_WindowsUpdate');
