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

namespace Google\Service\CloudDebugger;

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

class Breakpoint extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var string */
  public $canaryExpireTime;
  /** @var string */
  public $condition;
  /** @var string */
  public $createTime;
  /** @var Variable[] */
  public $evaluatedExpressions;
  /** @var string[] */
  public $expressions;
  /** @var string */
  public $finalTime;
  /** @var string */
  public $id;
  /** @var bool */
  public $isFinalState;
  /** @var string[] */
  public $labels;
  /** @var SourceLocation */
  public $location;
  /** @var string */
  public $logLevel;
  /** @var string */
  public $logMessageFormat;
  /** @var StackFrame[] */
  public $stackFrames;
  /** @var string */
  public $state;
  /** @var StatusMessage */
  public $status;
  /** @var string */
  public $userEmail;
  /** @var Variable[] */
  public $variableTable;
  protected $collection_key = 'variableTable';
  protected $evaluatedExpressionsType = Variable::class;
  protected $evaluatedExpressionsDataType = 'array';
  protected $locationType = SourceLocation::class;
  protected $locationDataType = '';
  protected $stackFramesType = StackFrame::class;
  protected $stackFramesDataType = 'array';
  protected $statusType = StatusMessage::class;
  protected $statusDataType = '';
  protected $variableTableType = Variable::class;
  protected $variableTableDataType = 'array';
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
  /** @param string */
  public function setCanaryExpireTime($canaryExpireTime)
  {
    $this->canaryExpireTime = $canaryExpireTime;
  }
  /** @return string */
  public function getCanaryExpireTime()
  {
    return $this->canaryExpireTime;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
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
  /** @param Variable[] */
  public function setEvaluatedExpressions($evaluatedExpressions)
  {
    $this->evaluatedExpressions = $evaluatedExpressions;
  }
  /** @return Variable[] */
  public function getEvaluatedExpressions()
  {
    return $this->evaluatedExpressions;
  }
  /** @param string[] */
  public function setExpressions($expressions)
  {
    $this->expressions = $expressions;
  }
  /** @return string[] */
  public function getExpressions()
  {
    return $this->expressions;
  }
  /** @param string */
  public function setFinalTime($finalTime)
  {
    $this->finalTime = $finalTime;
  }
  /** @return string */
  public function getFinalTime()
  {
    return $this->finalTime;
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
  /** @param bool */
  public function setIsFinalState($isFinalState)
  {
    $this->isFinalState = $isFinalState;
  }
  /** @return bool */
  public function getIsFinalState()
  {
    return $this->isFinalState;
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
  /** @param SourceLocation */
  public function setLocation(SourceLocation $location)
  {
    $this->location = $location;
  }
  /** @return SourceLocation */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param string */
  public function setLogLevel($logLevel)
  {
    $this->logLevel = $logLevel;
  }
  /** @return string */
  public function getLogLevel()
  {
    return $this->logLevel;
  }
  /** @param string */
  public function setLogMessageFormat($logMessageFormat)
  {
    $this->logMessageFormat = $logMessageFormat;
  }
  /** @return string */
  public function getLogMessageFormat()
  {
    return $this->logMessageFormat;
  }
  /** @param StackFrame[] */
  public function setStackFrames($stackFrames)
  {
    $this->stackFrames = $stackFrames;
  }
  /** @return StackFrame[] */
  public function getStackFrames()
  {
    return $this->stackFrames;
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
  /** @param StatusMessage */
  public function setStatus(StatusMessage $status)
  {
    $this->status = $status;
  }
  /** @return StatusMessage */
  public function getStatus()
  {
    return $this->status;
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
  /** @param Variable[] */
  public function setVariableTable($variableTable)
  {
    $this->variableTable = $variableTable;
  }
  /** @return Variable[] */
  public function getVariableTable()
  {
    return $this->variableTable;
  }
}

class CloudRepoSourceContext extends \Google\Model
{
  /** @var AliasContext */
  public $aliasContext;
  /** @var string */
  public $aliasName;
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
  /** @param string */
  public function setAliasName($aliasName)
  {
    $this->aliasName = $aliasName;
  }
  /** @return string */
  public function getAliasName()
  {
    return $this->aliasName;
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

class CloudWorkspaceId extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var RepoId */
  public $repoId;
  protected $repoIdType = RepoId::class;
  protected $repoIdDataType = '';
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
}

class CloudWorkspaceSourceContext extends \Google\Model
{
  /** @var string */
  public $snapshotId;
  /** @var CloudWorkspaceId */
  public $workspaceId;
  protected $workspaceIdType = CloudWorkspaceId::class;
  protected $workspaceIdDataType = '';
  /** @param string */
  public function setSnapshotId($snapshotId)
  {
    $this->snapshotId = $snapshotId;
  }
  /** @return string */
  public function getSnapshotId()
  {
    return $this->snapshotId;
  }
  /** @param CloudWorkspaceId */
  public function setWorkspaceId(CloudWorkspaceId $workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  /** @return CloudWorkspaceId */
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class ClouddebuggerEmpty extends \Google\Model
{
}

class Debuggee extends \Google\Collection
{
  /** @var string */
  public $agentVersion;
  /** @var string */
  public $canaryMode;
  /** @var string */
  public $description;
  /** @var ExtendedSourceContext[] */
  public $extSourceContexts;
  /** @var string */
  public $id;
  /** @var bool */
  public $isDisabled;
  /** @var bool */
  public $isInactive;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $project;
  /** @var SourceContext[] */
  public $sourceContexts;
  /** @var StatusMessage */
  public $status;
  /** @var string */
  public $uniquifier;
  protected $collection_key = 'sourceContexts';
  protected $extSourceContextsType = ExtendedSourceContext::class;
  protected $extSourceContextsDataType = 'array';
  protected $sourceContextsType = SourceContext::class;
  protected $sourceContextsDataType = 'array';
  protected $statusType = StatusMessage::class;
  protected $statusDataType = '';
  /** @param string */
  public function setAgentVersion($agentVersion)
  {
    $this->agentVersion = $agentVersion;
  }
  /** @return string */
  public function getAgentVersion()
  {
    return $this->agentVersion;
  }
  /** @param string */
  public function setCanaryMode($canaryMode)
  {
    $this->canaryMode = $canaryMode;
  }
  /** @return string */
  public function getCanaryMode()
  {
    return $this->canaryMode;
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
  /** @param ExtendedSourceContext[] */
  public function setExtSourceContexts($extSourceContexts)
  {
    $this->extSourceContexts = $extSourceContexts;
  }
  /** @return ExtendedSourceContext[] */
  public function getExtSourceContexts()
  {
    return $this->extSourceContexts;
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
  /** @param bool */
  public function setIsDisabled($isDisabled)
  {
    $this->isDisabled = $isDisabled;
  }
  /** @return bool */
  public function getIsDisabled()
  {
    return $this->isDisabled;
  }
  /** @param bool */
  public function setIsInactive($isInactive)
  {
    $this->isInactive = $isInactive;
  }
  /** @return bool */
  public function getIsInactive()
  {
    return $this->isInactive;
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
  public function setProject($project)
  {
    $this->project = $project;
  }
  /** @return string */
  public function getProject()
  {
    return $this->project;
  }
  /** @param SourceContext[] */
  public function setSourceContexts($sourceContexts)
  {
    $this->sourceContexts = $sourceContexts;
  }
  /** @return SourceContext[] */
  public function getSourceContexts()
  {
    return $this->sourceContexts;
  }
  /** @param StatusMessage */
  public function setStatus(StatusMessage $status)
  {
    $this->status = $status;
  }
  /** @return StatusMessage */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param string */
  public function setUniquifier($uniquifier)
  {
    $this->uniquifier = $uniquifier;
  }
  /** @return string */
  public function getUniquifier()
  {
    return $this->uniquifier;
  }
}

class ExtendedSourceContext extends \Google\Model
{
  /** @var SourceContext */
  public $context;
  /** @var string[] */
  public $labels;
  protected $contextType = SourceContext::class;
  protected $contextDataType = '';
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

class FormatMessage extends \Google\Collection
{
  /** @var string */
  public $format;
  /** @var string[] */
  public $parameters;
  protected $collection_key = 'parameters';
  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
  }
  /** @param string[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return string[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GerritSourceContext extends \Google\Model
{
  /** @var AliasContext */
  public $aliasContext;
  /** @var string */
  public $aliasName;
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
  public function setAliasName($aliasName)
  {
    $this->aliasName = $aliasName;
  }
  /** @return string */
  public function getAliasName()
  {
    return $this->aliasName;
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

class GetBreakpointResponse extends \Google\Model
{
  /** @var Breakpoint */
  public $breakpoint;
  protected $breakpointType = Breakpoint::class;
  protected $breakpointDataType = '';
  /** @param Breakpoint */
  public function setBreakpoint(Breakpoint $breakpoint)
  {
    $this->breakpoint = $breakpoint;
  }
  /** @return Breakpoint */
  public function getBreakpoint()
  {
    return $this->breakpoint;
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

class ListActiveBreakpointsResponse extends \Google\Collection
{
  /** @var Breakpoint[] */
  public $breakpoints;
  /** @var string */
  public $nextWaitToken;
  /** @var bool */
  public $waitExpired;
  protected $collection_key = 'breakpoints';
  protected $breakpointsType = Breakpoint::class;
  protected $breakpointsDataType = 'array';
  /** @param Breakpoint[] */
  public function setBreakpoints($breakpoints)
  {
    $this->breakpoints = $breakpoints;
  }
  /** @return Breakpoint[] */
  public function getBreakpoints()
  {
    return $this->breakpoints;
  }
  /** @param string */
  public function setNextWaitToken($nextWaitToken)
  {
    $this->nextWaitToken = $nextWaitToken;
  }
  /** @return string */
  public function getNextWaitToken()
  {
    return $this->nextWaitToken;
  }
  /** @param bool */
  public function setWaitExpired($waitExpired)
  {
    $this->waitExpired = $waitExpired;
  }
  /** @return bool */
  public function getWaitExpired()
  {
    return $this->waitExpired;
  }
}

class ListBreakpointsResponse extends \Google\Collection
{
  /** @var Breakpoint[] */
  public $breakpoints;
  /** @var string */
  public $nextWaitToken;
  protected $collection_key = 'breakpoints';
  protected $breakpointsType = Breakpoint::class;
  protected $breakpointsDataType = 'array';
  /** @param Breakpoint[] */
  public function setBreakpoints($breakpoints)
  {
    $this->breakpoints = $breakpoints;
  }
  /** @return Breakpoint[] */
  public function getBreakpoints()
  {
    return $this->breakpoints;
  }
  /** @param string */
  public function setNextWaitToken($nextWaitToken)
  {
    $this->nextWaitToken = $nextWaitToken;
  }
  /** @return string */
  public function getNextWaitToken()
  {
    return $this->nextWaitToken;
  }
}

class ListDebuggeesResponse extends \Google\Collection
{
  /** @var Debuggee[] */
  public $debuggees;
  protected $collection_key = 'debuggees';
  protected $debuggeesType = Debuggee::class;
  protected $debuggeesDataType = 'array';
  /** @param Debuggee[] */
  public function setDebuggees($debuggees)
  {
    $this->debuggees = $debuggees;
  }
  /** @return Debuggee[] */
  public function getDebuggees()
  {
    return $this->debuggees;
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

class RegisterDebuggeeRequest extends \Google\Model
{
  /** @var Debuggee */
  public $debuggee;
  protected $debuggeeType = Debuggee::class;
  protected $debuggeeDataType = '';
  /** @param Debuggee */
  public function setDebuggee(Debuggee $debuggee)
  {
    $this->debuggee = $debuggee;
  }
  /** @return Debuggee */
  public function getDebuggee()
  {
    return $this->debuggee;
  }
}

class RegisterDebuggeeResponse extends \Google\Model
{
  /** @var string */
  public $agentId;
  /** @var Debuggee */
  public $debuggee;
  protected $debuggeeType = Debuggee::class;
  protected $debuggeeDataType = '';
  /** @param string */
  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  /** @return string */
  public function getAgentId()
  {
    return $this->agentId;
  }
  /** @param Debuggee */
  public function setDebuggee(Debuggee $debuggee)
  {
    $this->debuggee = $debuggee;
  }
  /** @return Debuggee */
  public function getDebuggee()
  {
    return $this->debuggee;
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

class SetBreakpointResponse extends \Google\Model
{
  /** @var Breakpoint */
  public $breakpoint;
  protected $breakpointType = Breakpoint::class;
  protected $breakpointDataType = '';
  /** @param Breakpoint */
  public function setBreakpoint(Breakpoint $breakpoint)
  {
    $this->breakpoint = $breakpoint;
  }
  /** @return Breakpoint */
  public function getBreakpoint()
  {
    return $this->breakpoint;
  }
}

class SourceContext extends \Google\Model
{
  /** @var CloudRepoSourceContext */
  public $cloudRepo;
  /** @var CloudWorkspaceSourceContext */
  public $cloudWorkspace;
  /** @var GerritSourceContext */
  public $gerrit;
  /** @var GitSourceContext */
  public $git;
  protected $cloudRepoType = CloudRepoSourceContext::class;
  protected $cloudRepoDataType = '';
  protected $cloudWorkspaceType = CloudWorkspaceSourceContext::class;
  protected $cloudWorkspaceDataType = '';
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
  /** @param CloudWorkspaceSourceContext */
  public function setCloudWorkspace(CloudWorkspaceSourceContext $cloudWorkspace)
  {
    $this->cloudWorkspace = $cloudWorkspace;
  }
  /** @return CloudWorkspaceSourceContext */
  public function getCloudWorkspace()
  {
    return $this->cloudWorkspace;
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
}

class SourceLocation extends \Google\Model
{
  /** @var int */
  public $column;
  /** @var int */
  public $line;
  /** @var string */
  public $path;

  /** @param int */
  public function setColumn($column)
  {
    $this->column = $column;
  }
  /** @return int */
  public function getColumn()
  {
    return $this->column;
  }
  /** @param int */
  public function setLine($line)
  {
    $this->line = $line;
  }
  /** @return int */
  public function getLine()
  {
    return $this->line;
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

class StackFrame extends \Google\Collection
{
  /** @var Variable[] */
  public $arguments;
  /** @var string */
  public $function;
  /** @var Variable[] */
  public $locals;
  /** @var SourceLocation */
  public $location;
  protected $collection_key = 'locals';
  protected $argumentsType = Variable::class;
  protected $argumentsDataType = 'array';
  protected $localsType = Variable::class;
  protected $localsDataType = 'array';
  protected $locationType = SourceLocation::class;
  protected $locationDataType = '';
  /** @param Variable[] */
  public function setArguments($arguments)
  {
    $this->arguments = $arguments;
  }
  /** @return Variable[] */
  public function getArguments()
  {
    return $this->arguments;
  }
  /** @param string */
  public function setFunction($function)
  {
    $this->function = $function;
  }
  /** @return string */
  public function getFunction()
  {
    return $this->function;
  }
  /** @param Variable[] */
  public function setLocals($locals)
  {
    $this->locals = $locals;
  }
  /** @return Variable[] */
  public function getLocals()
  {
    return $this->locals;
  }
  /** @param SourceLocation */
  public function setLocation(SourceLocation $location)
  {
    $this->location = $location;
  }
  /** @return SourceLocation */
  public function getLocation()
  {
    return $this->location;
  }
}

class StatusMessage extends \Google\Model
{
  /** @var FormatMessage */
  public $description;
  /** @var bool */
  public $isError;
  /** @var string */
  public $refersTo;
  protected $descriptionType = FormatMessage::class;
  protected $descriptionDataType = '';
  /** @param FormatMessage */
  public function setDescription(FormatMessage $description)
  {
    $this->description = $description;
  }
  /** @return FormatMessage */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param bool */
  public function setIsError($isError)
  {
    $this->isError = $isError;
  }
  /** @return bool */
  public function getIsError()
  {
    return $this->isError;
  }
  /** @param string */
  public function setRefersTo($refersTo)
  {
    $this->refersTo = $refersTo;
  }
  /** @return string */
  public function getRefersTo()
  {
    return $this->refersTo;
  }
}

class UpdateActiveBreakpointRequest extends \Google\Model
{
  /** @var Breakpoint */
  public $breakpoint;
  protected $breakpointType = Breakpoint::class;
  protected $breakpointDataType = '';
  /** @param Breakpoint */
  public function setBreakpoint(Breakpoint $breakpoint)
  {
    $this->breakpoint = $breakpoint;
  }
  /** @return Breakpoint */
  public function getBreakpoint()
  {
    return $this->breakpoint;
  }
}

class UpdateActiveBreakpointResponse extends \Google\Model
{
}

class Variable extends \Google\Collection
{
  /** @var Variable[] */
  public $members;
  /** @var string */
  public $name;
  /** @var StatusMessage */
  public $status;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  /** @var int */
  public $varTableIndex;
  protected $collection_key = 'members';
  protected $membersType = Variable::class;
  protected $membersDataType = 'array';
  protected $statusType = StatusMessage::class;
  protected $statusDataType = '';
  /** @param Variable[] */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /** @return Variable[] */
  public function getMembers()
  {
    return $this->members;
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
  /** @param StatusMessage */
  public function setStatus(StatusMessage $status)
  {
    $this->status = $status;
  }
  /** @return StatusMessage */
  public function getStatus()
  {
    return $this->status;
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
  /** @param int */
  public function setVarTableIndex($varTableIndex)
  {
    $this->varTableIndex = $varTableIndex;
  }
  /** @return int */
  public function getVarTableIndex()
  {
    return $this->varTableIndex;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AliasContext::class, 'Google_Service_CloudDebugger_AliasContext');
class_alias(Breakpoint::class, 'Google_Service_CloudDebugger_Breakpoint');
class_alias(CloudRepoSourceContext::class, 'Google_Service_CloudDebugger_CloudRepoSourceContext');
class_alias(CloudWorkspaceId::class, 'Google_Service_CloudDebugger_CloudWorkspaceId');
class_alias(CloudWorkspaceSourceContext::class, 'Google_Service_CloudDebugger_CloudWorkspaceSourceContext');
class_alias(ClouddebuggerEmpty::class, 'Google_Service_CloudDebugger_ClouddebuggerEmpty');
class_alias(Debuggee::class, 'Google_Service_CloudDebugger_Debuggee');
class_alias(ExtendedSourceContext::class, 'Google_Service_CloudDebugger_ExtendedSourceContext');
class_alias(FormatMessage::class, 'Google_Service_CloudDebugger_FormatMessage');
class_alias(GerritSourceContext::class, 'Google_Service_CloudDebugger_GerritSourceContext');
class_alias(GetBreakpointResponse::class, 'Google_Service_CloudDebugger_GetBreakpointResponse');
class_alias(GitSourceContext::class, 'Google_Service_CloudDebugger_GitSourceContext');
class_alias(ListActiveBreakpointsResponse::class, 'Google_Service_CloudDebugger_ListActiveBreakpointsResponse');
class_alias(ListBreakpointsResponse::class, 'Google_Service_CloudDebugger_ListBreakpointsResponse');
class_alias(ListDebuggeesResponse::class, 'Google_Service_CloudDebugger_ListDebuggeesResponse');
class_alias(ProjectRepoId::class, 'Google_Service_CloudDebugger_ProjectRepoId');
class_alias(RegisterDebuggeeRequest::class, 'Google_Service_CloudDebugger_RegisterDebuggeeRequest');
class_alias(RegisterDebuggeeResponse::class, 'Google_Service_CloudDebugger_RegisterDebuggeeResponse');
class_alias(RepoId::class, 'Google_Service_CloudDebugger_RepoId');
class_alias(SetBreakpointResponse::class, 'Google_Service_CloudDebugger_SetBreakpointResponse');
class_alias(SourceContext::class, 'Google_Service_CloudDebugger_SourceContext');
class_alias(SourceLocation::class, 'Google_Service_CloudDebugger_SourceLocation');
class_alias(StackFrame::class, 'Google_Service_CloudDebugger_StackFrame');
class_alias(StatusMessage::class, 'Google_Service_CloudDebugger_StatusMessage');
class_alias(UpdateActiveBreakpointRequest::class, 'Google_Service_CloudDebugger_UpdateActiveBreakpointRequest');
class_alias(UpdateActiveBreakpointResponse::class, 'Google_Service_CloudDebugger_UpdateActiveBreakpointResponse');
class_alias(Variable::class, 'Google_Service_CloudDebugger_Variable');
