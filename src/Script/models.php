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

namespace Google\Service\Script;

class Content extends \Google\Collection
{
  /** @var ScriptFile[] */
  public $files;
  /** @var string */
  public $scriptId;
  protected $collection_key = 'files';
  protected $filesType = ScriptFile::class;
  protected $filesDataType = 'array';
  /** @param ScriptFile[] */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /** @return ScriptFile[] */
  public function getFiles()
  {
    return $this->files;
  }
  /** @param string */
  public function setScriptId($scriptId)
  {
    $this->scriptId = $scriptId;
  }
  /** @return string */
  public function getScriptId()
  {
    return $this->scriptId;
  }
}

class CreateProjectRequest extends \Google\Model
{
  /** @var string */
  public $parentId;
  /** @var string */
  public $title;

  /** @param string */
  public function setParentId($parentId)
  {
    $this->parentId = $parentId;
  }
  /** @return string */
  public function getParentId()
  {
    return $this->parentId;
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

class Deployment extends \Google\Collection
{
  /** @var DeploymentConfig */
  public $deploymentConfig;
  /** @var string */
  public $deploymentId;
  /** @var EntryPoint[] */
  public $entryPoints;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'entryPoints';
  protected $deploymentConfigType = DeploymentConfig::class;
  protected $deploymentConfigDataType = '';
  protected $entryPointsType = EntryPoint::class;
  protected $entryPointsDataType = 'array';
  /** @param DeploymentConfig */
  public function setDeploymentConfig(DeploymentConfig $deploymentConfig)
  {
    $this->deploymentConfig = $deploymentConfig;
  }
  /** @return DeploymentConfig */
  public function getDeploymentConfig()
  {
    return $this->deploymentConfig;
  }
  /** @param string */
  public function setDeploymentId($deploymentId)
  {
    $this->deploymentId = $deploymentId;
  }
  /** @return string */
  public function getDeploymentId()
  {
    return $this->deploymentId;
  }
  /** @param EntryPoint[] */
  public function setEntryPoints($entryPoints)
  {
    $this->entryPoints = $entryPoints;
  }
  /** @return EntryPoint[] */
  public function getEntryPoints()
  {
    return $this->entryPoints;
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

class DeploymentConfig extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $manifestFileName;
  /** @var string */
  public $scriptId;
  /** @var int */
  public $versionNumber;

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
  public function setManifestFileName($manifestFileName)
  {
    $this->manifestFileName = $manifestFileName;
  }
  /** @return string */
  public function getManifestFileName()
  {
    return $this->manifestFileName;
  }
  /** @param string */
  public function setScriptId($scriptId)
  {
    $this->scriptId = $scriptId;
  }
  /** @return string */
  public function getScriptId()
  {
    return $this->scriptId;
  }
  /** @param int */
  public function setVersionNumber($versionNumber)
  {
    $this->versionNumber = $versionNumber;
  }
  /** @return int */
  public function getVersionNumber()
  {
    return $this->versionNumber;
  }
}

class EntryPoint extends \Google\Model
{
  /** @var GoogleAppsScriptTypeAddOnEntryPoint */
  public $addOn;
  /** @var string */
  public $entryPointType;
  /** @var GoogleAppsScriptTypeExecutionApiEntryPoint */
  public $executionApi;
  /** @var GoogleAppsScriptTypeWebAppEntryPoint */
  public $webApp;
  protected $addOnType = GoogleAppsScriptTypeAddOnEntryPoint::class;
  protected $addOnDataType = '';
  protected $executionApiType = GoogleAppsScriptTypeExecutionApiEntryPoint::class;
  protected $executionApiDataType = '';
  protected $webAppType = GoogleAppsScriptTypeWebAppEntryPoint::class;
  protected $webAppDataType = '';
  /** @param GoogleAppsScriptTypeAddOnEntryPoint */
  public function setAddOn(GoogleAppsScriptTypeAddOnEntryPoint $addOn)
  {
    $this->addOn = $addOn;
  }
  /** @return GoogleAppsScriptTypeAddOnEntryPoint */
  public function getAddOn()
  {
    return $this->addOn;
  }
  /** @param string */
  public function setEntryPointType($entryPointType)
  {
    $this->entryPointType = $entryPointType;
  }
  /** @return string */
  public function getEntryPointType()
  {
    return $this->entryPointType;
  }
  /** @param GoogleAppsScriptTypeExecutionApiEntryPoint */
  public function setExecutionApi(GoogleAppsScriptTypeExecutionApiEntryPoint $executionApi)
  {
    $this->executionApi = $executionApi;
  }
  /** @return GoogleAppsScriptTypeExecutionApiEntryPoint */
  public function getExecutionApi()
  {
    return $this->executionApi;
  }
  /** @param GoogleAppsScriptTypeWebAppEntryPoint */
  public function setWebApp(GoogleAppsScriptTypeWebAppEntryPoint $webApp)
  {
    $this->webApp = $webApp;
  }
  /** @return GoogleAppsScriptTypeWebAppEntryPoint */
  public function getWebApp()
  {
    return $this->webApp;
  }
}

class ExecuteStreamResponse extends \Google\Model
{
  /** @var ScriptExecutionResult */
  public $result;
  protected $resultType = ScriptExecutionResult::class;
  protected $resultDataType = '';
  /** @param ScriptExecutionResult */
  public function setResult(ScriptExecutionResult $result)
  {
    $this->result = $result;
  }
  /** @return ScriptExecutionResult */
  public function getResult()
  {
    return $this->result;
  }
}

class ExecutionError extends \Google\Collection
{
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $errorType;
  /** @var ScriptStackTraceElement[] */
  public $scriptStackTraceElements;
  protected $collection_key = 'scriptStackTraceElements';
  protected $scriptStackTraceElementsType = ScriptStackTraceElement::class;
  protected $scriptStackTraceElementsDataType = 'array';
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param string */
  public function setErrorType($errorType)
  {
    $this->errorType = $errorType;
  }
  /** @return string */
  public function getErrorType()
  {
    return $this->errorType;
  }
  /** @param ScriptStackTraceElement[] */
  public function setScriptStackTraceElements($scriptStackTraceElements)
  {
    $this->scriptStackTraceElements = $scriptStackTraceElements;
  }
  /** @return ScriptStackTraceElement[] */
  public function getScriptStackTraceElements()
  {
    return $this->scriptStackTraceElements;
  }
}

class ExecutionRequest extends \Google\Collection
{
  /** @var bool */
  public $devMode;
  /** @var string */
  public $function;
  /** @var array[] */
  public $parameters;
  /** @var string */
  public $sessionState;
  protected $collection_key = 'parameters';
  /** @param bool */
  public function setDevMode($devMode)
  {
    $this->devMode = $devMode;
  }
  /** @return bool */
  public function getDevMode()
  {
    return $this->devMode;
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
  /** @param string */
  public function setSessionState($sessionState)
  {
    $this->sessionState = $sessionState;
  }
  /** @return string */
  public function getSessionState()
  {
    return $this->sessionState;
  }
}

class ExecutionResponse extends \Google\Model
{
  /** @var array */
  public $result;

  /** @param array */
  public function setResult($result)
  {
    $this->result = $result;
  }
  /** @return array */
  public function getResult()
  {
    return $this->result;
  }
}

class GoogleAppsScriptTypeAddOnEntryPoint extends \Google\Model
{
  /** @var string */
  public $addOnType;
  /** @var string */
  public $description;
  /** @var string */
  public $helpUrl;
  /** @var string */
  public $postInstallTipUrl;
  /** @var string */
  public $reportIssueUrl;
  /** @var string */
  public $title;

  /** @param string */
  public function setAddOnType($addOnType)
  {
    $this->addOnType = $addOnType;
  }
  /** @return string */
  public function getAddOnType()
  {
    return $this->addOnType;
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
  public function setHelpUrl($helpUrl)
  {
    $this->helpUrl = $helpUrl;
  }
  /** @return string */
  public function getHelpUrl()
  {
    return $this->helpUrl;
  }
  /** @param string */
  public function setPostInstallTipUrl($postInstallTipUrl)
  {
    $this->postInstallTipUrl = $postInstallTipUrl;
  }
  /** @return string */
  public function getPostInstallTipUrl()
  {
    return $this->postInstallTipUrl;
  }
  /** @param string */
  public function setReportIssueUrl($reportIssueUrl)
  {
    $this->reportIssueUrl = $reportIssueUrl;
  }
  /** @return string */
  public function getReportIssueUrl()
  {
    return $this->reportIssueUrl;
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

class GoogleAppsScriptTypeExecutionApiConfig extends \Google\Model
{
  /** @var string */
  public $access;

  /** @param string */
  public function setAccess($access)
  {
    $this->access = $access;
  }
  /** @return string */
  public function getAccess()
  {
    return $this->access;
  }
}

class GoogleAppsScriptTypeExecutionApiEntryPoint extends \Google\Model
{
  /** @var GoogleAppsScriptTypeExecutionApiConfig */
  public $entryPointConfig;
  protected $entryPointConfigType = GoogleAppsScriptTypeExecutionApiConfig::class;
  protected $entryPointConfigDataType = '';
  /** @param GoogleAppsScriptTypeExecutionApiConfig */
  public function setEntryPointConfig(GoogleAppsScriptTypeExecutionApiConfig $entryPointConfig)
  {
    $this->entryPointConfig = $entryPointConfig;
  }
  /** @return GoogleAppsScriptTypeExecutionApiConfig */
  public function getEntryPointConfig()
  {
    return $this->entryPointConfig;
  }
}

class GoogleAppsScriptTypeFunction extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var string[] */
  public $parameters;
  protected $collection_key = 'parameters';
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

class GoogleAppsScriptTypeFunctionSet extends \Google\Collection
{
  /** @var GoogleAppsScriptTypeFunction[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = GoogleAppsScriptTypeFunction::class;
  protected $valuesDataType = 'array';
  /** @param GoogleAppsScriptTypeFunction[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return GoogleAppsScriptTypeFunction[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleAppsScriptTypeProcess extends \Google\Model
{
  /** @var string */
  public $duration;
  /** @var string */
  public $functionName;
  /** @var string */
  public $processStatus;
  /** @var string */
  public $processType;
  /** @var string */
  public $projectName;
  /** @var string */
  public $startTime;
  /** @var string */
  public $userAccessLevel;

  /** @param string */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /** @return string */
  public function getDuration()
  {
    return $this->duration;
  }
  /** @param string */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /** @return string */
  public function getFunctionName()
  {
    return $this->functionName;
  }
  /** @param string */
  public function setProcessStatus($processStatus)
  {
    $this->processStatus = $processStatus;
  }
  /** @return string */
  public function getProcessStatus()
  {
    return $this->processStatus;
  }
  /** @param string */
  public function setProcessType($processType)
  {
    $this->processType = $processType;
  }
  /** @return string */
  public function getProcessType()
  {
    return $this->processType;
  }
  /** @param string */
  public function setProjectName($projectName)
  {
    $this->projectName = $projectName;
  }
  /** @return string */
  public function getProjectName()
  {
    return $this->projectName;
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
  public function setUserAccessLevel($userAccessLevel)
  {
    $this->userAccessLevel = $userAccessLevel;
  }
  /** @return string */
  public function getUserAccessLevel()
  {
    return $this->userAccessLevel;
  }
}

class GoogleAppsScriptTypeUser extends \Google\Model
{
  /** @var string */
  public $domain;
  /** @var string */
  public $email;
  /** @var string */
  public $name;
  /** @var string */
  public $photoUrl;

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
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /** @return string */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
}

class GoogleAppsScriptTypeWebAppConfig extends \Google\Model
{
  /** @var string */
  public $access;
  /** @var string */
  public $executeAs;

  /** @param string */
  public function setAccess($access)
  {
    $this->access = $access;
  }
  /** @return string */
  public function getAccess()
  {
    return $this->access;
  }
  /** @param string */
  public function setExecuteAs($executeAs)
  {
    $this->executeAs = $executeAs;
  }
  /** @return string */
  public function getExecuteAs()
  {
    return $this->executeAs;
  }
}

class GoogleAppsScriptTypeWebAppEntryPoint extends \Google\Model
{
  /** @var GoogleAppsScriptTypeWebAppConfig */
  public $entryPointConfig;
  /** @var string */
  public $url;
  protected $entryPointConfigType = GoogleAppsScriptTypeWebAppConfig::class;
  protected $entryPointConfigDataType = '';
  /** @param GoogleAppsScriptTypeWebAppConfig */
  public function setEntryPointConfig(GoogleAppsScriptTypeWebAppConfig $entryPointConfig)
  {
    $this->entryPointConfig = $entryPointConfig;
  }
  /** @return GoogleAppsScriptTypeWebAppConfig */
  public function getEntryPointConfig()
  {
    return $this->entryPointConfig;
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

class ListDeploymentsResponse extends \Google\Collection
{
  /** @var Deployment[] */
  public $deployments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'deployments';
  protected $deploymentsType = Deployment::class;
  protected $deploymentsDataType = 'array';
  /** @param Deployment[] */
  public function setDeployments($deployments)
  {
    $this->deployments = $deployments;
  }
  /** @return Deployment[] */
  public function getDeployments()
  {
    return $this->deployments;
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

class ListScriptProcessesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleAppsScriptTypeProcess[] */
  public $processes;
  protected $collection_key = 'processes';
  protected $processesType = GoogleAppsScriptTypeProcess::class;
  protected $processesDataType = 'array';
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
  /** @param GoogleAppsScriptTypeProcess[] */
  public function setProcesses($processes)
  {
    $this->processes = $processes;
  }
  /** @return GoogleAppsScriptTypeProcess[] */
  public function getProcesses()
  {
    return $this->processes;
  }
}

class ListUserProcessesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleAppsScriptTypeProcess[] */
  public $processes;
  protected $collection_key = 'processes';
  protected $processesType = GoogleAppsScriptTypeProcess::class;
  protected $processesDataType = 'array';
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
  /** @param GoogleAppsScriptTypeProcess[] */
  public function setProcesses($processes)
  {
    $this->processes = $processes;
  }
  /** @return GoogleAppsScriptTypeProcess[] */
  public function getProcesses()
  {
    return $this->processes;
  }
}

class ListValue extends \Google\Collection
{
  /** @var Value[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = Value::class;
  protected $valuesDataType = 'array';
  /** @param Value[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return Value[] */
  public function getValues()
  {
    return $this->values;
  }
}

class ListVersionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Version[] */
  public $versions;
  protected $collection_key = 'versions';
  protected $versionsType = Version::class;
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
  /** @param Version[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return Version[] */
  public function getVersions()
  {
    return $this->versions;
  }
}

class Metrics extends \Google\Collection
{
  /** @var MetricsValue[] */
  public $activeUsers;
  /** @var MetricsValue[] */
  public $failedExecutions;
  /** @var MetricsValue[] */
  public $totalExecutions;
  protected $collection_key = 'totalExecutions';
  protected $activeUsersType = MetricsValue::class;
  protected $activeUsersDataType = 'array';
  protected $failedExecutionsType = MetricsValue::class;
  protected $failedExecutionsDataType = 'array';
  protected $totalExecutionsType = MetricsValue::class;
  protected $totalExecutionsDataType = 'array';
  /** @param MetricsValue[] */
  public function setActiveUsers($activeUsers)
  {
    $this->activeUsers = $activeUsers;
  }
  /** @return MetricsValue[] */
  public function getActiveUsers()
  {
    return $this->activeUsers;
  }
  /** @param MetricsValue[] */
  public function setFailedExecutions($failedExecutions)
  {
    $this->failedExecutions = $failedExecutions;
  }
  /** @return MetricsValue[] */
  public function getFailedExecutions()
  {
    return $this->failedExecutions;
  }
  /** @param MetricsValue[] */
  public function setTotalExecutions($totalExecutions)
  {
    $this->totalExecutions = $totalExecutions;
  }
  /** @return MetricsValue[] */
  public function getTotalExecutions()
  {
    return $this->totalExecutions;
  }
}

class MetricsValue extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;
  /** @var string */
  public $value;

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

class Operation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var Status */
  public $error;
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

class Project extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var GoogleAppsScriptTypeUser */
  public $creator;
  /** @var GoogleAppsScriptTypeUser */
  public $lastModifyUser;
  /** @var string */
  public $parentId;
  /** @var string */
  public $scriptId;
  /** @var string */
  public $title;
  /** @var string */
  public $updateTime;
  protected $creatorType = GoogleAppsScriptTypeUser::class;
  protected $creatorDataType = '';
  protected $lastModifyUserType = GoogleAppsScriptTypeUser::class;
  protected $lastModifyUserDataType = '';
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
  /** @param GoogleAppsScriptTypeUser */
  public function setCreator(GoogleAppsScriptTypeUser $creator)
  {
    $this->creator = $creator;
  }
  /** @return GoogleAppsScriptTypeUser */
  public function getCreator()
  {
    return $this->creator;
  }
  /** @param GoogleAppsScriptTypeUser */
  public function setLastModifyUser(GoogleAppsScriptTypeUser $lastModifyUser)
  {
    $this->lastModifyUser = $lastModifyUser;
  }
  /** @return GoogleAppsScriptTypeUser */
  public function getLastModifyUser()
  {
    return $this->lastModifyUser;
  }
  /** @param string */
  public function setParentId($parentId)
  {
    $this->parentId = $parentId;
  }
  /** @return string */
  public function getParentId()
  {
    return $this->parentId;
  }
  /** @param string */
  public function setScriptId($scriptId)
  {
    $this->scriptId = $scriptId;
  }
  /** @return string */
  public function getScriptId()
  {
    return $this->scriptId;
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

class ScriptEmpty extends \Google\Model
{
}

class ScriptExecutionResult extends \Google\Model
{
  /** @var Value */
  public $returnValue;
  protected $returnValueType = Value::class;
  protected $returnValueDataType = '';
  /** @param Value */
  public function setReturnValue(Value $returnValue)
  {
    $this->returnValue = $returnValue;
  }
  /** @return Value */
  public function getReturnValue()
  {
    return $this->returnValue;
  }
}

class ScriptFile extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var GoogleAppsScriptTypeFunctionSet */
  public $functionSet;
  /** @var GoogleAppsScriptTypeUser */
  public $lastModifyUser;
  /** @var string */
  public $name;
  /** @var string */
  public $source;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $functionSetType = GoogleAppsScriptTypeFunctionSet::class;
  protected $functionSetDataType = '';
  protected $lastModifyUserType = GoogleAppsScriptTypeUser::class;
  protected $lastModifyUserDataType = '';
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
  /** @param GoogleAppsScriptTypeFunctionSet */
  public function setFunctionSet(GoogleAppsScriptTypeFunctionSet $functionSet)
  {
    $this->functionSet = $functionSet;
  }
  /** @return GoogleAppsScriptTypeFunctionSet */
  public function getFunctionSet()
  {
    return $this->functionSet;
  }
  /** @param GoogleAppsScriptTypeUser */
  public function setLastModifyUser(GoogleAppsScriptTypeUser $lastModifyUser)
  {
    $this->lastModifyUser = $lastModifyUser;
  }
  /** @return GoogleAppsScriptTypeUser */
  public function getLastModifyUser()
  {
    return $this->lastModifyUser;
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

class ScriptStackTraceElement extends \Google\Model
{
  /** @var string */
  public $function;
  /** @var int */
  public $lineNumber;

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
  /** @param int */
  public function setLineNumber($lineNumber)
  {
    $this->lineNumber = $lineNumber;
  }
  /** @return int */
  public function getLineNumber()
  {
    return $this->lineNumber;
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

class Struct extends \Google\Model
{
  /** @var Value[] */
  public $fields;
  protected $fieldsType = Value::class;
  protected $fieldsDataType = 'map';
  /** @param Value[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return Value[] */
  public function getFields()
  {
    return $this->fields;
  }
}

class UpdateDeploymentRequest extends \Google\Model
{
  /** @var DeploymentConfig */
  public $deploymentConfig;
  protected $deploymentConfigType = DeploymentConfig::class;
  protected $deploymentConfigDataType = '';
  /** @param DeploymentConfig */
  public function setDeploymentConfig(DeploymentConfig $deploymentConfig)
  {
    $this->deploymentConfig = $deploymentConfig;
  }
  /** @return DeploymentConfig */
  public function getDeploymentConfig()
  {
    return $this->deploymentConfig;
  }
}

class Value extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  /** @var string */
  public $bytesValue;
  /** @var string */
  public $dateValue;
  /** @var ListValue */
  public $listValue;
  /** @var string */
  public $nullValue;
  public $numberValue;
  /** @var array[] */
  public $protoValue;
  /** @var string */
  public $stringValue;
  /** @var Struct */
  public $structValue;
  protected $listValueType = ListValue::class;
  protected $listValueDataType = '';
  protected $structValueType = Struct::class;
  protected $structValueDataType = '';
  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /** @param string */
  public function setBytesValue($bytesValue)
  {
    $this->bytesValue = $bytesValue;
  }
  /** @return string */
  public function getBytesValue()
  {
    return $this->bytesValue;
  }
  /** @param string */
  public function setDateValue($dateValue)
  {
    $this->dateValue = $dateValue;
  }
  /** @return string */
  public function getDateValue()
  {
    return $this->dateValue;
  }
  /** @param ListValue */
  public function setListValue(ListValue $listValue)
  {
    $this->listValue = $listValue;
  }
  /** @return ListValue */
  public function getListValue()
  {
    return $this->listValue;
  }
  /** @param string */
  public function setNullValue($nullValue)
  {
    $this->nullValue = $nullValue;
  }
  /** @return string */
  public function getNullValue()
  {
    return $this->nullValue;
  }
  public function setNumberValue($numberValue)
  {
    $this->numberValue = $numberValue;
  }
  public function getNumberValue()
  {
    return $this->numberValue;
  }
  /** @param array[] */
  public function setProtoValue($protoValue)
  {
    $this->protoValue = $protoValue;
  }
  /** @return array[] */
  public function getProtoValue()
  {
    return $this->protoValue;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
  /** @param Struct */
  public function setStructValue(Struct $structValue)
  {
    $this->structValue = $structValue;
  }
  /** @return Struct */
  public function getStructValue()
  {
    return $this->structValue;
  }
}

class Version extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $scriptId;
  /** @var int */
  public $versionNumber;

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
  public function setScriptId($scriptId)
  {
    $this->scriptId = $scriptId;
  }
  /** @return string */
  public function getScriptId()
  {
    return $this->scriptId;
  }
  /** @param int */
  public function setVersionNumber($versionNumber)
  {
    $this->versionNumber = $versionNumber;
  }
  /** @return int */
  public function getVersionNumber()
  {
    return $this->versionNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Content::class, 'Google_Service_Script_Content');
class_alias(CreateProjectRequest::class, 'Google_Service_Script_CreateProjectRequest');
class_alias(Deployment::class, 'Google_Service_Script_Deployment');
class_alias(DeploymentConfig::class, 'Google_Service_Script_DeploymentConfig');
class_alias(EntryPoint::class, 'Google_Service_Script_EntryPoint');
class_alias(ExecuteStreamResponse::class, 'Google_Service_Script_ExecuteStreamResponse');
class_alias(ExecutionError::class, 'Google_Service_Script_ExecutionError');
class_alias(ExecutionRequest::class, 'Google_Service_Script_ExecutionRequest');
class_alias(ExecutionResponse::class, 'Google_Service_Script_ExecutionResponse');
class_alias(GoogleAppsScriptTypeAddOnEntryPoint::class, 'Google_Service_Script_GoogleAppsScriptTypeAddOnEntryPoint');
class_alias(GoogleAppsScriptTypeExecutionApiConfig::class, 'Google_Service_Script_GoogleAppsScriptTypeExecutionApiConfig');
class_alias(GoogleAppsScriptTypeExecutionApiEntryPoint::class, 'Google_Service_Script_GoogleAppsScriptTypeExecutionApiEntryPoint');
class_alias(GoogleAppsScriptTypeFunction::class, 'Google_Service_Script_GoogleAppsScriptTypeFunction');
class_alias(GoogleAppsScriptTypeFunctionSet::class, 'Google_Service_Script_GoogleAppsScriptTypeFunctionSet');
class_alias(GoogleAppsScriptTypeProcess::class, 'Google_Service_Script_GoogleAppsScriptTypeProcess');
class_alias(GoogleAppsScriptTypeUser::class, 'Google_Service_Script_GoogleAppsScriptTypeUser');
class_alias(GoogleAppsScriptTypeWebAppConfig::class, 'Google_Service_Script_GoogleAppsScriptTypeWebAppConfig');
class_alias(GoogleAppsScriptTypeWebAppEntryPoint::class, 'Google_Service_Script_GoogleAppsScriptTypeWebAppEntryPoint');
class_alias(ListDeploymentsResponse::class, 'Google_Service_Script_ListDeploymentsResponse');
class_alias(ListScriptProcessesResponse::class, 'Google_Service_Script_ListScriptProcessesResponse');
class_alias(ListUserProcessesResponse::class, 'Google_Service_Script_ListUserProcessesResponse');
class_alias(ListValue::class, 'Google_Service_Script_ListValue');
class_alias(ListVersionsResponse::class, 'Google_Service_Script_ListVersionsResponse');
class_alias(Metrics::class, 'Google_Service_Script_Metrics');
class_alias(MetricsValue::class, 'Google_Service_Script_MetricsValue');
class_alias(Operation::class, 'Google_Service_Script_Operation');
class_alias(Project::class, 'Google_Service_Script_Project');
class_alias(ScriptEmpty::class, 'Google_Service_Script_ScriptEmpty');
class_alias(ScriptExecutionResult::class, 'Google_Service_Script_ScriptExecutionResult');
class_alias(ScriptFile::class, 'Google_Service_Script_ScriptFile');
class_alias(ScriptStackTraceElement::class, 'Google_Service_Script_ScriptStackTraceElement');
class_alias(Status::class, 'Google_Service_Script_Status');
class_alias(Struct::class, 'Google_Service_Script_Struct');
class_alias(UpdateDeploymentRequest::class, 'Google_Service_Script_UpdateDeploymentRequest');
class_alias(Value::class, 'Google_Service_Script_Value');
class_alias(Version::class, 'Google_Service_Script_Version');
