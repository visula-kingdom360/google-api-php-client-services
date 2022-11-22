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

namespace Google\Service\ToolResults;

class ANR extends \Google\Model
{
  /** @var StackTrace */
  public $stackTrace;
  protected $stackTraceType = StackTrace::class;
  protected $stackTraceDataType = '';
  /** @param StackTrace */
  public function setStackTrace(StackTrace $stackTrace)
  {
    $this->stackTrace = $stackTrace;
  }
  /** @return StackTrace */
  public function getStackTrace()
  {
    return $this->stackTrace;
  }
}

class AndroidAppInfo extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $packageName;
  /** @var string */
  public $versionCode;
  /** @var string */
  public $versionName;

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
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string */
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /** @return string */
  public function getVersionCode()
  {
    return $this->versionCode;
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

class AndroidInstrumentationTest extends \Google\Collection
{
  /** @var string */
  public $testPackageId;
  /** @var string */
  public $testRunnerClass;
  /** @var string[] */
  public $testTargets;
  /** @var bool */
  public $useOrchestrator;
  protected $collection_key = 'testTargets';
  /** @param string */
  public function setTestPackageId($testPackageId)
  {
    $this->testPackageId = $testPackageId;
  }
  /** @return string */
  public function getTestPackageId()
  {
    return $this->testPackageId;
  }
  /** @param string */
  public function setTestRunnerClass($testRunnerClass)
  {
    $this->testRunnerClass = $testRunnerClass;
  }
  /** @return string */
  public function getTestRunnerClass()
  {
    return $this->testRunnerClass;
  }
  /** @param string[] */
  public function setTestTargets($testTargets)
  {
    $this->testTargets = $testTargets;
  }
  /** @return string[] */
  public function getTestTargets()
  {
    return $this->testTargets;
  }
  /** @param bool */
  public function setUseOrchestrator($useOrchestrator)
  {
    $this->useOrchestrator = $useOrchestrator;
  }
  /** @return bool */
  public function getUseOrchestrator()
  {
    return $this->useOrchestrator;
  }
}

class AndroidRoboTest extends \Google\Model
{
  /** @var string */
  public $appInitialActivity;
  /** @var string */
  public $bootstrapPackageId;
  /** @var string */
  public $bootstrapRunnerClass;
  /** @var int */
  public $maxDepth;
  /** @var int */
  public $maxSteps;

  /** @param string */
  public function setAppInitialActivity($appInitialActivity)
  {
    $this->appInitialActivity = $appInitialActivity;
  }
  /** @return string */
  public function getAppInitialActivity()
  {
    return $this->appInitialActivity;
  }
  /** @param string */
  public function setBootstrapPackageId($bootstrapPackageId)
  {
    $this->bootstrapPackageId = $bootstrapPackageId;
  }
  /** @return string */
  public function getBootstrapPackageId()
  {
    return $this->bootstrapPackageId;
  }
  /** @param string */
  public function setBootstrapRunnerClass($bootstrapRunnerClass)
  {
    $this->bootstrapRunnerClass = $bootstrapRunnerClass;
  }
  /** @return string */
  public function getBootstrapRunnerClass()
  {
    return $this->bootstrapRunnerClass;
  }
  /** @param int */
  public function setMaxDepth($maxDepth)
  {
    $this->maxDepth = $maxDepth;
  }
  /** @return int */
  public function getMaxDepth()
  {
    return $this->maxDepth;
  }
  /** @param int */
  public function setMaxSteps($maxSteps)
  {
    $this->maxSteps = $maxSteps;
  }
  /** @return int */
  public function getMaxSteps()
  {
    return $this->maxSteps;
  }
}

class AndroidTest extends \Google\Model
{
  /** @var AndroidAppInfo */
  public $androidAppInfo;
  /** @var AndroidInstrumentationTest */
  public $androidInstrumentationTest;
  /** @var AndroidRoboTest */
  public $androidRoboTest;
  /** @var AndroidTestLoop */
  public $androidTestLoop;
  /** @var Duration */
  public $testTimeout;
  protected $androidAppInfoType = AndroidAppInfo::class;
  protected $androidAppInfoDataType = '';
  protected $androidInstrumentationTestType = AndroidInstrumentationTest::class;
  protected $androidInstrumentationTestDataType = '';
  protected $androidRoboTestType = AndroidRoboTest::class;
  protected $androidRoboTestDataType = '';
  protected $androidTestLoopType = AndroidTestLoop::class;
  protected $androidTestLoopDataType = '';
  protected $testTimeoutType = Duration::class;
  protected $testTimeoutDataType = '';
  /** @param AndroidAppInfo */
  public function setAndroidAppInfo(AndroidAppInfo $androidAppInfo)
  {
    $this->androidAppInfo = $androidAppInfo;
  }
  /** @return AndroidAppInfo */
  public function getAndroidAppInfo()
  {
    return $this->androidAppInfo;
  }
  /** @param AndroidInstrumentationTest */
  public function setAndroidInstrumentationTest(AndroidInstrumentationTest $androidInstrumentationTest)
  {
    $this->androidInstrumentationTest = $androidInstrumentationTest;
  }
  /** @return AndroidInstrumentationTest */
  public function getAndroidInstrumentationTest()
  {
    return $this->androidInstrumentationTest;
  }
  /** @param AndroidRoboTest */
  public function setAndroidRoboTest(AndroidRoboTest $androidRoboTest)
  {
    $this->androidRoboTest = $androidRoboTest;
  }
  /** @return AndroidRoboTest */
  public function getAndroidRoboTest()
  {
    return $this->androidRoboTest;
  }
  /** @param AndroidTestLoop */
  public function setAndroidTestLoop(AndroidTestLoop $androidTestLoop)
  {
    $this->androidTestLoop = $androidTestLoop;
  }
  /** @return AndroidTestLoop */
  public function getAndroidTestLoop()
  {
    return $this->androidTestLoop;
  }
  /** @param Duration */
  public function setTestTimeout(Duration $testTimeout)
  {
    $this->testTimeout = $testTimeout;
  }
  /** @return Duration */
  public function getTestTimeout()
  {
    return $this->testTimeout;
  }
}

class AndroidTestLoop extends \Google\Model
{
}

class Any extends \Google\Model
{
  /** @var string */
  public $typeUrl;
  /** @var string */
  public $value;

  /** @param string */
  public function setTypeUrl($typeUrl)
  {
    $this->typeUrl = $typeUrl;
  }
  /** @return string */
  public function getTypeUrl()
  {
    return $this->typeUrl;
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

class AppStartTime extends \Google\Model
{
  /** @var Duration */
  public $fullyDrawnTime;
  /** @var Duration */
  public $initialDisplayTime;
  protected $fullyDrawnTimeType = Duration::class;
  protected $fullyDrawnTimeDataType = '';
  protected $initialDisplayTimeType = Duration::class;
  protected $initialDisplayTimeDataType = '';
  /** @param Duration */
  public function setFullyDrawnTime(Duration $fullyDrawnTime)
  {
    $this->fullyDrawnTime = $fullyDrawnTime;
  }
  /** @return Duration */
  public function getFullyDrawnTime()
  {
    return $this->fullyDrawnTime;
  }
  /** @param Duration */
  public function setInitialDisplayTime(Duration $initialDisplayTime)
  {
    $this->initialDisplayTime = $initialDisplayTime;
  }
  /** @return Duration */
  public function getInitialDisplayTime()
  {
    return $this->initialDisplayTime;
  }
}

class AvailableDeepLinks extends \Google\Model
{
}

class BasicPerfSampleSeries extends \Google\Model
{
  /** @var string */
  public $perfMetricType;
  /** @var string */
  public $perfUnit;
  /** @var string */
  public $sampleSeriesLabel;

  /** @param string */
  public function setPerfMetricType($perfMetricType)
  {
    $this->perfMetricType = $perfMetricType;
  }
  /** @return string */
  public function getPerfMetricType()
  {
    return $this->perfMetricType;
  }
  /** @param string */
  public function setPerfUnit($perfUnit)
  {
    $this->perfUnit = $perfUnit;
  }
  /** @return string */
  public function getPerfUnit()
  {
    return $this->perfUnit;
  }
  /** @param string */
  public function setSampleSeriesLabel($sampleSeriesLabel)
  {
    $this->sampleSeriesLabel = $sampleSeriesLabel;
  }
  /** @return string */
  public function getSampleSeriesLabel()
  {
    return $this->sampleSeriesLabel;
  }
}

class BatchCreatePerfSamplesRequest extends \Google\Collection
{
  /** @var PerfSample[] */
  public $perfSamples;
  protected $collection_key = 'perfSamples';
  protected $perfSamplesType = PerfSample::class;
  protected $perfSamplesDataType = 'array';
  /** @param PerfSample[] */
  public function setPerfSamples($perfSamples)
  {
    $this->perfSamples = $perfSamples;
  }
  /** @return PerfSample[] */
  public function getPerfSamples()
  {
    return $this->perfSamples;
  }
}

class BatchCreatePerfSamplesResponse extends \Google\Collection
{
  /** @var PerfSample[] */
  public $perfSamples;
  protected $collection_key = 'perfSamples';
  protected $perfSamplesType = PerfSample::class;
  protected $perfSamplesDataType = 'array';
  /** @param PerfSample[] */
  public function setPerfSamples($perfSamples)
  {
    $this->perfSamples = $perfSamples;
  }
  /** @return PerfSample[] */
  public function getPerfSamples()
  {
    return $this->perfSamples;
  }
}

class BlankScreen extends \Google\Model
{
  /** @var string */
  public $screenId;

  /** @param string */
  public function setScreenId($screenId)
  {
    $this->screenId = $screenId;
  }
  /** @return string */
  public function getScreenId()
  {
    return $this->screenId;
  }
}

class CPUInfo extends \Google\Model
{
  /** @var string */
  public $cpuProcessor;
  /** @var float */
  public $cpuSpeedInGhz;
  /** @var int */
  public $numberOfCores;

  /** @param string */
  public function setCpuProcessor($cpuProcessor)
  {
    $this->cpuProcessor = $cpuProcessor;
  }
  /** @return string */
  public function getCpuProcessor()
  {
    return $this->cpuProcessor;
  }
  /** @param float */
  public function setCpuSpeedInGhz($cpuSpeedInGhz)
  {
    $this->cpuSpeedInGhz = $cpuSpeedInGhz;
  }
  /** @return float */
  public function getCpuSpeedInGhz()
  {
    return $this->cpuSpeedInGhz;
  }
  /** @param int */
  public function setNumberOfCores($numberOfCores)
  {
    $this->numberOfCores = $numberOfCores;
  }
  /** @return int */
  public function getNumberOfCores()
  {
    return $this->numberOfCores;
  }
}

class CrashDialogError extends \Google\Model
{
  /** @var string */
  public $crashPackage;

  /** @param string */
  public function setCrashPackage($crashPackage)
  {
    $this->crashPackage = $crashPackage;
  }
  /** @return string */
  public function getCrashPackage()
  {
    return $this->crashPackage;
  }
}

class DetectedAppSplashScreen extends \Google\Model
{
}

class DeviceOutOfMemory extends \Google\Model
{
}

class Duration extends \Google\Model
{
  /** @var int */
  public $nanos;
  /** @var string */
  public $seconds;

  /** @param int */
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  /** @return int */
  public function getNanos()
  {
    return $this->nanos;
  }
  /** @param string */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return string */
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class EncounteredLoginScreen extends \Google\Collection
{
  /** @var int */
  public $distinctScreens;
  /** @var string[] */
  public $screenIds;
  protected $collection_key = 'screenIds';
  /** @param int */
  public function setDistinctScreens($distinctScreens)
  {
    $this->distinctScreens = $distinctScreens;
  }
  /** @return int */
  public function getDistinctScreens()
  {
    return $this->distinctScreens;
  }
  /** @param string[] */
  public function setScreenIds($screenIds)
  {
    $this->screenIds = $screenIds;
  }
  /** @return string[] */
  public function getScreenIds()
  {
    return $this->screenIds;
  }
}

class EncounteredNonAndroidUiWidgetScreen extends \Google\Collection
{
  /** @var int */
  public $distinctScreens;
  /** @var string[] */
  public $screenIds;
  protected $collection_key = 'screenIds';
  /** @param int */
  public function setDistinctScreens($distinctScreens)
  {
    $this->distinctScreens = $distinctScreens;
  }
  /** @return int */
  public function getDistinctScreens()
  {
    return $this->distinctScreens;
  }
  /** @param string[] */
  public function setScreenIds($screenIds)
  {
    $this->screenIds = $screenIds;
  }
  /** @return string[] */
  public function getScreenIds()
  {
    return $this->screenIds;
  }
}

class Environment extends \Google\Collection
{
  /** @var Timestamp */
  public $completionTime;
  /** @var Timestamp */
  public $creationTime;
  /** @var EnvironmentDimensionValueEntry[] */
  public $dimensionValue;
  /** @var string */
  public $displayName;
  /** @var string */
  public $environmentId;
  /** @var MergedResult */
  public $environmentResult;
  /** @var string */
  public $executionId;
  /** @var string */
  public $historyId;
  /** @var string */
  public $projectId;
  /** @var ResultsStorage */
  public $resultsStorage;
  /** @var ShardSummary[] */
  public $shardSummaries;
  protected $collection_key = 'shardSummaries';
  protected $completionTimeType = Timestamp::class;
  protected $completionTimeDataType = '';
  protected $creationTimeType = Timestamp::class;
  protected $creationTimeDataType = '';
  protected $dimensionValueType = EnvironmentDimensionValueEntry::class;
  protected $dimensionValueDataType = 'array';
  protected $environmentResultType = MergedResult::class;
  protected $environmentResultDataType = '';
  protected $resultsStorageType = ResultsStorage::class;
  protected $resultsStorageDataType = '';
  protected $shardSummariesType = ShardSummary::class;
  protected $shardSummariesDataType = 'array';
  /** @param Timestamp */
  public function setCompletionTime(Timestamp $completionTime)
  {
    $this->completionTime = $completionTime;
  }
  /** @return Timestamp */
  public function getCompletionTime()
  {
    return $this->completionTime;
  }
  /** @param Timestamp */
  public function setCreationTime(Timestamp $creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return Timestamp */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /** @param EnvironmentDimensionValueEntry[] */
  public function setDimensionValue($dimensionValue)
  {
    $this->dimensionValue = $dimensionValue;
  }
  /** @return EnvironmentDimensionValueEntry[] */
  public function getDimensionValue()
  {
    return $this->dimensionValue;
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
  public function setEnvironmentId($environmentId)
  {
    $this->environmentId = $environmentId;
  }
  /** @return string */
  public function getEnvironmentId()
  {
    return $this->environmentId;
  }
  /** @param MergedResult */
  public function setEnvironmentResult(MergedResult $environmentResult)
  {
    $this->environmentResult = $environmentResult;
  }
  /** @return MergedResult */
  public function getEnvironmentResult()
  {
    return $this->environmentResult;
  }
  /** @param string */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /** @return string */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
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
  /** @param ResultsStorage */
  public function setResultsStorage(ResultsStorage $resultsStorage)
  {
    $this->resultsStorage = $resultsStorage;
  }
  /** @return ResultsStorage */
  public function getResultsStorage()
  {
    return $this->resultsStorage;
  }
  /** @param ShardSummary[] */
  public function setShardSummaries($shardSummaries)
  {
    $this->shardSummaries = $shardSummaries;
  }
  /** @return ShardSummary[] */
  public function getShardSummaries()
  {
    return $this->shardSummaries;
  }
}

class EnvironmentDimensionValueEntry extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class Execution extends \Google\Collection
{
  /** @var Timestamp */
  public $completionTime;
  /** @var Timestamp */
  public $creationTime;
  /** @var MatrixDimensionDefinition[] */
  public $dimensionDefinitions;
  /** @var string */
  public $executionId;
  /** @var Outcome */
  public $outcome;
  /** @var Specification */
  public $specification;
  /** @var string */
  public $state;
  /** @var string */
  public $testExecutionMatrixId;
  protected $collection_key = 'dimensionDefinitions';
  protected $completionTimeType = Timestamp::class;
  protected $completionTimeDataType = '';
  protected $creationTimeType = Timestamp::class;
  protected $creationTimeDataType = '';
  protected $dimensionDefinitionsType = MatrixDimensionDefinition::class;
  protected $dimensionDefinitionsDataType = 'array';
  protected $outcomeType = Outcome::class;
  protected $outcomeDataType = '';
  protected $specificationType = Specification::class;
  protected $specificationDataType = '';
  /** @param Timestamp */
  public function setCompletionTime(Timestamp $completionTime)
  {
    $this->completionTime = $completionTime;
  }
  /** @return Timestamp */
  public function getCompletionTime()
  {
    return $this->completionTime;
  }
  /** @param Timestamp */
  public function setCreationTime(Timestamp $creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return Timestamp */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /** @param MatrixDimensionDefinition[] */
  public function setDimensionDefinitions($dimensionDefinitions)
  {
    $this->dimensionDefinitions = $dimensionDefinitions;
  }
  /** @return MatrixDimensionDefinition[] */
  public function getDimensionDefinitions()
  {
    return $this->dimensionDefinitions;
  }
  /** @param string */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /** @return string */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /** @param Outcome */
  public function setOutcome(Outcome $outcome)
  {
    $this->outcome = $outcome;
  }
  /** @return Outcome */
  public function getOutcome()
  {
    return $this->outcome;
  }
  /** @param Specification */
  public function setSpecification(Specification $specification)
  {
    $this->specification = $specification;
  }
  /** @return Specification */
  public function getSpecification()
  {
    return $this->specification;
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
  public function setTestExecutionMatrixId($testExecutionMatrixId)
  {
    $this->testExecutionMatrixId = $testExecutionMatrixId;
  }
  /** @return string */
  public function getTestExecutionMatrixId()
  {
    return $this->testExecutionMatrixId;
  }
}

class FailedToInstall extends \Google\Model
{
}

class FailureDetail extends \Google\Model
{
  /** @var bool */
  public $crashed;
  /** @var bool */
  public $deviceOutOfMemory;
  /** @var bool */
  public $failedRoboscript;
  /** @var bool */
  public $notInstalled;
  /** @var bool */
  public $otherNativeCrash;
  /** @var bool */
  public $timedOut;
  /** @var bool */
  public $unableToCrawl;

  /** @param bool */
  public function setCrashed($crashed)
  {
    $this->crashed = $crashed;
  }
  /** @return bool */
  public function getCrashed()
  {
    return $this->crashed;
  }
  /** @param bool */
  public function setDeviceOutOfMemory($deviceOutOfMemory)
  {
    $this->deviceOutOfMemory = $deviceOutOfMemory;
  }
  /** @return bool */
  public function getDeviceOutOfMemory()
  {
    return $this->deviceOutOfMemory;
  }
  /** @param bool */
  public function setFailedRoboscript($failedRoboscript)
  {
    $this->failedRoboscript = $failedRoboscript;
  }
  /** @return bool */
  public function getFailedRoboscript()
  {
    return $this->failedRoboscript;
  }
  /** @param bool */
  public function setNotInstalled($notInstalled)
  {
    $this->notInstalled = $notInstalled;
  }
  /** @return bool */
  public function getNotInstalled()
  {
    return $this->notInstalled;
  }
  /** @param bool */
  public function setOtherNativeCrash($otherNativeCrash)
  {
    $this->otherNativeCrash = $otherNativeCrash;
  }
  /** @return bool */
  public function getOtherNativeCrash()
  {
    return $this->otherNativeCrash;
  }
  /** @param bool */
  public function setTimedOut($timedOut)
  {
    $this->timedOut = $timedOut;
  }
  /** @return bool */
  public function getTimedOut()
  {
    return $this->timedOut;
  }
  /** @param bool */
  public function setUnableToCrawl($unableToCrawl)
  {
    $this->unableToCrawl = $unableToCrawl;
  }
  /** @return bool */
  public function getUnableToCrawl()
  {
    return $this->unableToCrawl;
  }
}

class FatalException extends \Google\Model
{
  /** @var StackTrace */
  public $stackTrace;
  protected $stackTraceType = StackTrace::class;
  protected $stackTraceDataType = '';
  /** @param StackTrace */
  public function setStackTrace(StackTrace $stackTrace)
  {
    $this->stackTrace = $stackTrace;
  }
  /** @return StackTrace */
  public function getStackTrace()
  {
    return $this->stackTrace;
  }
}

class FileReference extends \Google\Model
{
  /** @var string */
  public $fileUri;

  /** @param string */
  public function setFileUri($fileUri)
  {
    $this->fileUri = $fileUri;
  }
  /** @return string */
  public function getFileUri()
  {
    return $this->fileUri;
  }
}

class GraphicsStats extends \Google\Collection
{
  /** @var GraphicsStatsBucket[] */
  public $buckets;
  /** @var string */
  public $highInputLatencyCount;
  /** @var string */
  public $jankyFrames;
  /** @var string */
  public $missedVsyncCount;
  /** @var string */
  public $p50Millis;
  /** @var string */
  public $p90Millis;
  /** @var string */
  public $p95Millis;
  /** @var string */
  public $p99Millis;
  /** @var string */
  public $slowBitmapUploadCount;
  /** @var string */
  public $slowDrawCount;
  /** @var string */
  public $slowUiThreadCount;
  /** @var string */
  public $totalFrames;
  protected $collection_key = 'buckets';
  protected $bucketsType = GraphicsStatsBucket::class;
  protected $bucketsDataType = 'array';
  /** @param GraphicsStatsBucket[] */
  public function setBuckets($buckets)
  {
    $this->buckets = $buckets;
  }
  /** @return GraphicsStatsBucket[] */
  public function getBuckets()
  {
    return $this->buckets;
  }
  /** @param string */
  public function setHighInputLatencyCount($highInputLatencyCount)
  {
    $this->highInputLatencyCount = $highInputLatencyCount;
  }
  /** @return string */
  public function getHighInputLatencyCount()
  {
    return $this->highInputLatencyCount;
  }
  /** @param string */
  public function setJankyFrames($jankyFrames)
  {
    $this->jankyFrames = $jankyFrames;
  }
  /** @return string */
  public function getJankyFrames()
  {
    return $this->jankyFrames;
  }
  /** @param string */
  public function setMissedVsyncCount($missedVsyncCount)
  {
    $this->missedVsyncCount = $missedVsyncCount;
  }
  /** @return string */
  public function getMissedVsyncCount()
  {
    return $this->missedVsyncCount;
  }
  /** @param string */
  public function setP50Millis($p50Millis)
  {
    $this->p50Millis = $p50Millis;
  }
  /** @return string */
  public function getP50Millis()
  {
    return $this->p50Millis;
  }
  /** @param string */
  public function setP90Millis($p90Millis)
  {
    $this->p90Millis = $p90Millis;
  }
  /** @return string */
  public function getP90Millis()
  {
    return $this->p90Millis;
  }
  /** @param string */
  public function setP95Millis($p95Millis)
  {
    $this->p95Millis = $p95Millis;
  }
  /** @return string */
  public function getP95Millis()
  {
    return $this->p95Millis;
  }
  /** @param string */
  public function setP99Millis($p99Millis)
  {
    $this->p99Millis = $p99Millis;
  }
  /** @return string */
  public function getP99Millis()
  {
    return $this->p99Millis;
  }
  /** @param string */
  public function setSlowBitmapUploadCount($slowBitmapUploadCount)
  {
    $this->slowBitmapUploadCount = $slowBitmapUploadCount;
  }
  /** @return string */
  public function getSlowBitmapUploadCount()
  {
    return $this->slowBitmapUploadCount;
  }
  /** @param string */
  public function setSlowDrawCount($slowDrawCount)
  {
    $this->slowDrawCount = $slowDrawCount;
  }
  /** @return string */
  public function getSlowDrawCount()
  {
    return $this->slowDrawCount;
  }
  /** @param string */
  public function setSlowUiThreadCount($slowUiThreadCount)
  {
    $this->slowUiThreadCount = $slowUiThreadCount;
  }
  /** @return string */
  public function getSlowUiThreadCount()
  {
    return $this->slowUiThreadCount;
  }
  /** @param string */
  public function setTotalFrames($totalFrames)
  {
    $this->totalFrames = $totalFrames;
  }
  /** @return string */
  public function getTotalFrames()
  {
    return $this->totalFrames;
  }
}

class GraphicsStatsBucket extends \Google\Model
{
  /** @var string */
  public $frameCount;
  /** @var string */
  public $renderMillis;

  /** @param string */
  public function setFrameCount($frameCount)
  {
    $this->frameCount = $frameCount;
  }
  /** @return string */
  public function getFrameCount()
  {
    return $this->frameCount;
  }
  /** @param string */
  public function setRenderMillis($renderMillis)
  {
    $this->renderMillis = $renderMillis;
  }
  /** @return string */
  public function getRenderMillis()
  {
    return $this->renderMillis;
  }
}

class History extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $historyId;
  /** @var string */
  public $name;
  /** @var string */
  public $testPlatform;

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
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
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
  public function setTestPlatform($testPlatform)
  {
    $this->testPlatform = $testPlatform;
  }
  /** @return string */
  public function getTestPlatform()
  {
    return $this->testPlatform;
  }
}

class Image extends \Google\Model
{
  /** @var Status */
  public $error;
  /** @var ToolOutputReference */
  public $sourceImage;
  /** @var string */
  public $stepId;
  /** @var Thumbnail */
  public $thumbnail;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $sourceImageType = ToolOutputReference::class;
  protected $sourceImageDataType = '';
  protected $thumbnailType = Thumbnail::class;
  protected $thumbnailDataType = '';
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
  /** @param ToolOutputReference */
  public function setSourceImage(ToolOutputReference $sourceImage)
  {
    $this->sourceImage = $sourceImage;
  }
  /** @return ToolOutputReference */
  public function getSourceImage()
  {
    return $this->sourceImage;
  }
  /** @param string */
  public function setStepId($stepId)
  {
    $this->stepId = $stepId;
  }
  /** @return string */
  public function getStepId()
  {
    return $this->stepId;
  }
  /** @param Thumbnail */
  public function setThumbnail(Thumbnail $thumbnail)
  {
    $this->thumbnail = $thumbnail;
  }
  /** @return Thumbnail */
  public function getThumbnail()
  {
    return $this->thumbnail;
  }
}

class InAppPurchasesFound extends \Google\Model
{
  /** @var int */
  public $inAppPurchasesFlowsExplored;
  /** @var int */
  public $inAppPurchasesFlowsStarted;

  /** @param int */
  public function setInAppPurchasesFlowsExplored($inAppPurchasesFlowsExplored)
  {
    $this->inAppPurchasesFlowsExplored = $inAppPurchasesFlowsExplored;
  }
  /** @return int */
  public function getInAppPurchasesFlowsExplored()
  {
    return $this->inAppPurchasesFlowsExplored;
  }
  /** @param int */
  public function setInAppPurchasesFlowsStarted($inAppPurchasesFlowsStarted)
  {
    $this->inAppPurchasesFlowsStarted = $inAppPurchasesFlowsStarted;
  }
  /** @return int */
  public function getInAppPurchasesFlowsStarted()
  {
    return $this->inAppPurchasesFlowsStarted;
  }
}

class InconclusiveDetail extends \Google\Model
{
  /** @var bool */
  public $abortedByUser;
  /** @var bool */
  public $hasErrorLogs;
  /** @var bool */
  public $infrastructureFailure;

  /** @param bool */
  public function setAbortedByUser($abortedByUser)
  {
    $this->abortedByUser = $abortedByUser;
  }
  /** @return bool */
  public function getAbortedByUser()
  {
    return $this->abortedByUser;
  }
  /** @param bool */
  public function setHasErrorLogs($hasErrorLogs)
  {
    $this->hasErrorLogs = $hasErrorLogs;
  }
  /** @return bool */
  public function getHasErrorLogs()
  {
    return $this->hasErrorLogs;
  }
  /** @param bool */
  public function setInfrastructureFailure($infrastructureFailure)
  {
    $this->infrastructureFailure = $infrastructureFailure;
  }
  /** @return bool */
  public function getInfrastructureFailure()
  {
    return $this->infrastructureFailure;
  }
}

class IndividualOutcome extends \Google\Model
{
  /** @var int */
  public $multistepNumber;
  /** @var string */
  public $outcomeSummary;
  /** @var Duration */
  public $runDuration;
  /** @var string */
  public $stepId;
  protected $runDurationType = Duration::class;
  protected $runDurationDataType = '';
  /** @param int */
  public function setMultistepNumber($multistepNumber)
  {
    $this->multistepNumber = $multistepNumber;
  }
  /** @return int */
  public function getMultistepNumber()
  {
    return $this->multistepNumber;
  }
  /** @param string */
  public function setOutcomeSummary($outcomeSummary)
  {
    $this->outcomeSummary = $outcomeSummary;
  }
  /** @return string */
  public function getOutcomeSummary()
  {
    return $this->outcomeSummary;
  }
  /** @param Duration */
  public function setRunDuration(Duration $runDuration)
  {
    $this->runDuration = $runDuration;
  }
  /** @return Duration */
  public function getRunDuration()
  {
    return $this->runDuration;
  }
  /** @param string */
  public function setStepId($stepId)
  {
    $this->stepId = $stepId;
  }
  /** @return string */
  public function getStepId()
  {
    return $this->stepId;
  }
}

class InsufficientCoverage extends \Google\Model
{
}

class IosAppCrashed extends \Google\Model
{
  /** @var StackTrace */
  public $stackTrace;
  protected $stackTraceType = StackTrace::class;
  protected $stackTraceDataType = '';
  /** @param StackTrace */
  public function setStackTrace(StackTrace $stackTrace)
  {
    $this->stackTrace = $stackTrace;
  }
  /** @return StackTrace */
  public function getStackTrace()
  {
    return $this->stackTrace;
  }
}

class IosAppInfo extends \Google\Model
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

class IosRoboTest extends \Google\Model
{
}

class IosTest extends \Google\Model
{
  /** @var IosAppInfo */
  public $iosAppInfo;
  /** @var IosRoboTest */
  public $iosRoboTest;
  /** @var IosTestLoop */
  public $iosTestLoop;
  /** @var IosXcTest */
  public $iosXcTest;
  /** @var Duration */
  public $testTimeout;
  protected $iosAppInfoType = IosAppInfo::class;
  protected $iosAppInfoDataType = '';
  protected $iosRoboTestType = IosRoboTest::class;
  protected $iosRoboTestDataType = '';
  protected $iosTestLoopType = IosTestLoop::class;
  protected $iosTestLoopDataType = '';
  protected $iosXcTestType = IosXcTest::class;
  protected $iosXcTestDataType = '';
  protected $testTimeoutType = Duration::class;
  protected $testTimeoutDataType = '';
  /** @param IosAppInfo */
  public function setIosAppInfo(IosAppInfo $iosAppInfo)
  {
    $this->iosAppInfo = $iosAppInfo;
  }
  /** @return IosAppInfo */
  public function getIosAppInfo()
  {
    return $this->iosAppInfo;
  }
  /** @param IosRoboTest */
  public function setIosRoboTest(IosRoboTest $iosRoboTest)
  {
    $this->iosRoboTest = $iosRoboTest;
  }
  /** @return IosRoboTest */
  public function getIosRoboTest()
  {
    return $this->iosRoboTest;
  }
  /** @param IosTestLoop */
  public function setIosTestLoop(IosTestLoop $iosTestLoop)
  {
    $this->iosTestLoop = $iosTestLoop;
  }
  /** @return IosTestLoop */
  public function getIosTestLoop()
  {
    return $this->iosTestLoop;
  }
  /** @param IosXcTest */
  public function setIosXcTest(IosXcTest $iosXcTest)
  {
    $this->iosXcTest = $iosXcTest;
  }
  /** @return IosXcTest */
  public function getIosXcTest()
  {
    return $this->iosXcTest;
  }
  /** @param Duration */
  public function setTestTimeout(Duration $testTimeout)
  {
    $this->testTimeout = $testTimeout;
  }
  /** @return Duration */
  public function getTestTimeout()
  {
    return $this->testTimeout;
  }
}

class IosTestLoop extends \Google\Model
{
  /** @var string */
  public $bundleId;

  /** @param string */
  public function setBundleId($bundleId)
  {
    $this->bundleId = $bundleId;
  }
  /** @return string */
  public function getBundleId()
  {
    return $this->bundleId;
  }
}

class IosXcTest extends \Google\Model
{
  /** @var string */
  public $bundleId;
  /** @var string */
  public $xcodeVersion;

  /** @param string */
  public function setBundleId($bundleId)
  {
    $this->bundleId = $bundleId;
  }
  /** @return string */
  public function getBundleId()
  {
    return $this->bundleId;
  }
  /** @param string */
  public function setXcodeVersion($xcodeVersion)
  {
    $this->xcodeVersion = $xcodeVersion;
  }
  /** @return string */
  public function getXcodeVersion()
  {
    return $this->xcodeVersion;
  }
}

class LauncherActivityNotFound extends \Google\Model
{
}

class ListEnvironmentsResponse extends \Google\Collection
{
  /** @var Environment[] */
  public $environments;
  /** @var string */
  public $executionId;
  /** @var string */
  public $historyId;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $projectId;
  protected $collection_key = 'environments';
  protected $environmentsType = Environment::class;
  protected $environmentsDataType = 'array';
  /** @param Environment[] */
  public function setEnvironments($environments)
  {
    $this->environments = $environments;
  }
  /** @return Environment[] */
  public function getEnvironments()
  {
    return $this->environments;
  }
  /** @param string */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /** @return string */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
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

class ListExecutionsResponse extends \Google\Collection
{
  /** @var Execution[] */
  public $executions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'executions';
  protected $executionsType = Execution::class;
  protected $executionsDataType = 'array';
  /** @param Execution[] */
  public function setExecutions($executions)
  {
    $this->executions = $executions;
  }
  /** @return Execution[] */
  public function getExecutions()
  {
    return $this->executions;
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

class ListHistoriesResponse extends \Google\Collection
{
  /** @var History[] */
  public $histories;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'histories';
  protected $historiesType = History::class;
  protected $historiesDataType = 'array';
  /** @param History[] */
  public function setHistories($histories)
  {
    $this->histories = $histories;
  }
  /** @return History[] */
  public function getHistories()
  {
    return $this->histories;
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

class ListPerfSampleSeriesResponse extends \Google\Collection
{
  /** @var PerfSampleSeries[] */
  public $perfSampleSeries;
  protected $collection_key = 'perfSampleSeries';
  protected $perfSampleSeriesType = PerfSampleSeries::class;
  protected $perfSampleSeriesDataType = 'array';
  /** @param PerfSampleSeries[] */
  public function setPerfSampleSeries($perfSampleSeries)
  {
    $this->perfSampleSeries = $perfSampleSeries;
  }
  /** @return PerfSampleSeries[] */
  public function getPerfSampleSeries()
  {
    return $this->perfSampleSeries;
  }
}

class ListPerfSamplesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var PerfSample[] */
  public $perfSamples;
  protected $collection_key = 'perfSamples';
  protected $perfSamplesType = PerfSample::class;
  protected $perfSamplesDataType = 'array';
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
  /** @param PerfSample[] */
  public function setPerfSamples($perfSamples)
  {
    $this->perfSamples = $perfSamples;
  }
  /** @return PerfSample[] */
  public function getPerfSamples()
  {
    return $this->perfSamples;
  }
}

class ListScreenshotClustersResponse extends \Google\Collection
{
  /** @var ScreenshotCluster[] */
  public $clusters;
  protected $collection_key = 'clusters';
  protected $clustersType = ScreenshotCluster::class;
  protected $clustersDataType = 'array';
  /** @param ScreenshotCluster[] */
  public function setClusters($clusters)
  {
    $this->clusters = $clusters;
  }
  /** @return ScreenshotCluster[] */
  public function getClusters()
  {
    return $this->clusters;
  }
}

class ListStepAccessibilityClustersResponse extends \Google\Collection
{
  /** @var SuggestionClusterProto[] */
  public $clusters;
  /** @var string */
  public $name;
  protected $collection_key = 'clusters';
  protected $clustersType = SuggestionClusterProto::class;
  protected $clustersDataType = 'array';
  /** @param SuggestionClusterProto[] */
  public function setClusters($clusters)
  {
    $this->clusters = $clusters;
  }
  /** @return SuggestionClusterProto[] */
  public function getClusters()
  {
    return $this->clusters;
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

class ListStepThumbnailsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Image[] */
  public $thumbnails;
  protected $collection_key = 'thumbnails';
  protected $thumbnailsType = Image::class;
  protected $thumbnailsDataType = 'array';
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
  /** @param Image[] */
  public function setThumbnails($thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }
  /** @return Image[] */
  public function getThumbnails()
  {
    return $this->thumbnails;
  }
}

class ListStepsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Step[] */
  public $steps;
  protected $collection_key = 'steps';
  protected $stepsType = Step::class;
  protected $stepsDataType = 'array';
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
  /** @param Step[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return Step[] */
  public function getSteps()
  {
    return $this->steps;
  }
}

class ListTestCasesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var TestCase[] */
  public $testCases;
  protected $collection_key = 'testCases';
  protected $testCasesType = TestCase::class;
  protected $testCasesDataType = 'array';
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
  /** @param TestCase[] */
  public function setTestCases($testCases)
  {
    $this->testCases = $testCases;
  }
  /** @return TestCase[] */
  public function getTestCases()
  {
    return $this->testCases;
  }
}

class LogcatCollectionError extends \Google\Model
{
}

class MatrixDimensionDefinition extends \Google\Model
{
}

class MemoryInfo extends \Google\Model
{
  /** @var string */
  public $memoryCapInKibibyte;
  /** @var string */
  public $memoryTotalInKibibyte;

  /** @param string */
  public function setMemoryCapInKibibyte($memoryCapInKibibyte)
  {
    $this->memoryCapInKibibyte = $memoryCapInKibibyte;
  }
  /** @return string */
  public function getMemoryCapInKibibyte()
  {
    return $this->memoryCapInKibibyte;
  }
  /** @param string */
  public function setMemoryTotalInKibibyte($memoryTotalInKibibyte)
  {
    $this->memoryTotalInKibibyte = $memoryTotalInKibibyte;
  }
  /** @return string */
  public function getMemoryTotalInKibibyte()
  {
    return $this->memoryTotalInKibibyte;
  }
}

class MergedResult extends \Google\Collection
{
  /** @var Outcome */
  public $outcome;
  /** @var string */
  public $state;
  /** @var TestSuiteOverview[] */
  public $testSuiteOverviews;
  protected $collection_key = 'testSuiteOverviews';
  protected $outcomeType = Outcome::class;
  protected $outcomeDataType = '';
  protected $testSuiteOverviewsType = TestSuiteOverview::class;
  protected $testSuiteOverviewsDataType = 'array';
  /** @param Outcome */
  public function setOutcome(Outcome $outcome)
  {
    $this->outcome = $outcome;
  }
  /** @return Outcome */
  public function getOutcome()
  {
    return $this->outcome;
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
  /** @param TestSuiteOverview[] */
  public function setTestSuiteOverviews($testSuiteOverviews)
  {
    $this->testSuiteOverviews = $testSuiteOverviews;
  }
  /** @return TestSuiteOverview[] */
  public function getTestSuiteOverviews()
  {
    return $this->testSuiteOverviews;
  }
}

class MultiStep extends \Google\Model
{
  /** @var int */
  public $multistepNumber;
  /** @var PrimaryStep */
  public $primaryStep;
  /** @var string */
  public $primaryStepId;
  protected $primaryStepType = PrimaryStep::class;
  protected $primaryStepDataType = '';
  /** @param int */
  public function setMultistepNumber($multistepNumber)
  {
    $this->multistepNumber = $multistepNumber;
  }
  /** @return int */
  public function getMultistepNumber()
  {
    return $this->multistepNumber;
  }
  /** @param PrimaryStep */
  public function setPrimaryStep(PrimaryStep $primaryStep)
  {
    $this->primaryStep = $primaryStep;
  }
  /** @return PrimaryStep */
  public function getPrimaryStep()
  {
    return $this->primaryStep;
  }
  /** @param string */
  public function setPrimaryStepId($primaryStepId)
  {
    $this->primaryStepId = $primaryStepId;
  }
  /** @return string */
  public function getPrimaryStepId()
  {
    return $this->primaryStepId;
  }
}

class NativeCrash extends \Google\Model
{
  /** @var StackTrace */
  public $stackTrace;
  protected $stackTraceType = StackTrace::class;
  protected $stackTraceDataType = '';
  /** @param StackTrace */
  public function setStackTrace(StackTrace $stackTrace)
  {
    $this->stackTrace = $stackTrace;
  }
  /** @return StackTrace */
  public function getStackTrace()
  {
    return $this->stackTrace;
  }
}

class NonSdkApi extends \Google\Collection
{
  /** @var string */
  public $apiSignature;
  /** @var string[] */
  public $exampleStackTraces;
  /** @var NonSdkApiInsight[] */
  public $insights;
  /** @var int */
  public $invocationCount;
  /** @var string */
  public $list;
  protected $collection_key = 'insights';
  protected $insightsType = NonSdkApiInsight::class;
  protected $insightsDataType = 'array';
  /** @param string */
  public function setApiSignature($apiSignature)
  {
    $this->apiSignature = $apiSignature;
  }
  /** @return string */
  public function getApiSignature()
  {
    return $this->apiSignature;
  }
  /** @param string[] */
  public function setExampleStackTraces($exampleStackTraces)
  {
    $this->exampleStackTraces = $exampleStackTraces;
  }
  /** @return string[] */
  public function getExampleStackTraces()
  {
    return $this->exampleStackTraces;
  }
  /** @param NonSdkApiInsight[] */
  public function setInsights($insights)
  {
    $this->insights = $insights;
  }
  /** @return NonSdkApiInsight[] */
  public function getInsights()
  {
    return $this->insights;
  }
  /** @param int */
  public function setInvocationCount($invocationCount)
  {
    $this->invocationCount = $invocationCount;
  }
  /** @return int */
  public function getInvocationCount()
  {
    return $this->invocationCount;
  }
  /** @param string */
  public function setList($list)
  {
    $this->list = $list;
  }
  /** @return string */
  public function getList()
  {
    return $this->list;
  }
}

class NonSdkApiInsight extends \Google\Collection
{
  /** @var string[] */
  public $exampleTraceMessages;
  /** @var string */
  public $matcherId;
  /** @var PendingGoogleUpdateInsight */
  public $pendingGoogleUpdateInsight;
  /** @var UpgradeInsight */
  public $upgradeInsight;
  protected $collection_key = 'exampleTraceMessages';
  protected $pendingGoogleUpdateInsightType = PendingGoogleUpdateInsight::class;
  protected $pendingGoogleUpdateInsightDataType = '';
  protected $upgradeInsightType = UpgradeInsight::class;
  protected $upgradeInsightDataType = '';
  /** @param string[] */
  public function setExampleTraceMessages($exampleTraceMessages)
  {
    $this->exampleTraceMessages = $exampleTraceMessages;
  }
  /** @return string[] */
  public function getExampleTraceMessages()
  {
    return $this->exampleTraceMessages;
  }
  /** @param string */
  public function setMatcherId($matcherId)
  {
    $this->matcherId = $matcherId;
  }
  /** @return string */
  public function getMatcherId()
  {
    return $this->matcherId;
  }
  /** @param PendingGoogleUpdateInsight */
  public function setPendingGoogleUpdateInsight(PendingGoogleUpdateInsight $pendingGoogleUpdateInsight)
  {
    $this->pendingGoogleUpdateInsight = $pendingGoogleUpdateInsight;
  }
  /** @return PendingGoogleUpdateInsight */
  public function getPendingGoogleUpdateInsight()
  {
    return $this->pendingGoogleUpdateInsight;
  }
  /** @param UpgradeInsight */
  public function setUpgradeInsight(UpgradeInsight $upgradeInsight)
  {
    $this->upgradeInsight = $upgradeInsight;
  }
  /** @return UpgradeInsight */
  public function getUpgradeInsight()
  {
    return $this->upgradeInsight;
  }
}

class NonSdkApiUsageViolation extends \Google\Collection
{
  /** @var string[] */
  public $apiSignatures;
  /** @var int */
  public $uniqueApis;
  protected $collection_key = 'apiSignatures';
  /** @param string[] */
  public function setApiSignatures($apiSignatures)
  {
    $this->apiSignatures = $apiSignatures;
  }
  /** @return string[] */
  public function getApiSignatures()
  {
    return $this->apiSignatures;
  }
  /** @param int */
  public function setUniqueApis($uniqueApis)
  {
    $this->uniqueApis = $uniqueApis;
  }
  /** @return int */
  public function getUniqueApis()
  {
    return $this->uniqueApis;
  }
}

class NonSdkApiUsageViolationReport extends \Google\Collection
{
  /** @var NonSdkApi[] */
  public $exampleApis;
  /** @var int */
  public $minSdkVersion;
  /** @var int */
  public $targetSdkVersion;
  /** @var int */
  public $uniqueApis;
  protected $collection_key = 'exampleApis';
  protected $exampleApisType = NonSdkApi::class;
  protected $exampleApisDataType = 'array';
  /** @param NonSdkApi[] */
  public function setExampleApis($exampleApis)
  {
    $this->exampleApis = $exampleApis;
  }
  /** @return NonSdkApi[] */
  public function getExampleApis()
  {
    return $this->exampleApis;
  }
  /** @param int */
  public function setMinSdkVersion($minSdkVersion)
  {
    $this->minSdkVersion = $minSdkVersion;
  }
  /** @return int */
  public function getMinSdkVersion()
  {
    return $this->minSdkVersion;
  }
  /** @param int */
  public function setTargetSdkVersion($targetSdkVersion)
  {
    $this->targetSdkVersion = $targetSdkVersion;
  }
  /** @return int */
  public function getTargetSdkVersion()
  {
    return $this->targetSdkVersion;
  }
  /** @param int */
  public function setUniqueApis($uniqueApis)
  {
    $this->uniqueApis = $uniqueApis;
  }
  /** @return int */
  public function getUniqueApis()
  {
    return $this->uniqueApis;
  }
}

class Outcome extends \Google\Model
{
  /** @var FailureDetail */
  public $failureDetail;
  /** @var InconclusiveDetail */
  public $inconclusiveDetail;
  /** @var SkippedDetail */
  public $skippedDetail;
  /** @var SuccessDetail */
  public $successDetail;
  /** @var string */
  public $summary;
  protected $failureDetailType = FailureDetail::class;
  protected $failureDetailDataType = '';
  protected $inconclusiveDetailType = InconclusiveDetail::class;
  protected $inconclusiveDetailDataType = '';
  protected $skippedDetailType = SkippedDetail::class;
  protected $skippedDetailDataType = '';
  protected $successDetailType = SuccessDetail::class;
  protected $successDetailDataType = '';
  /** @param FailureDetail */
  public function setFailureDetail(FailureDetail $failureDetail)
  {
    $this->failureDetail = $failureDetail;
  }
  /** @return FailureDetail */
  public function getFailureDetail()
  {
    return $this->failureDetail;
  }
  /** @param InconclusiveDetail */
  public function setInconclusiveDetail(InconclusiveDetail $inconclusiveDetail)
  {
    $this->inconclusiveDetail = $inconclusiveDetail;
  }
  /** @return InconclusiveDetail */
  public function getInconclusiveDetail()
  {
    return $this->inconclusiveDetail;
  }
  /** @param SkippedDetail */
  public function setSkippedDetail(SkippedDetail $skippedDetail)
  {
    $this->skippedDetail = $skippedDetail;
  }
  /** @return SkippedDetail */
  public function getSkippedDetail()
  {
    return $this->skippedDetail;
  }
  /** @param SuccessDetail */
  public function setSuccessDetail(SuccessDetail $successDetail)
  {
    $this->successDetail = $successDetail;
  }
  /** @return SuccessDetail */
  public function getSuccessDetail()
  {
    return $this->successDetail;
  }
  /** @param string */
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  /** @return string */
  public function getSummary()
  {
    return $this->summary;
  }
}

class OverlappingUIElements extends \Google\Collection
{
  /** @var string[] */
  public $resourceName;
  /** @var string */
  public $screenId;
  protected $collection_key = 'resourceName';
  /** @param string[] */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string[] */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /** @param string */
  public function setScreenId($screenId)
  {
    $this->screenId = $screenId;
  }
  /** @return string */
  public function getScreenId()
  {
    return $this->screenId;
  }
}

class PendingGoogleUpdateInsight extends \Google\Model
{
  /** @var string */
  public $nameOfGoogleLibrary;

  /** @param string */
  public function setNameOfGoogleLibrary($nameOfGoogleLibrary)
  {
    $this->nameOfGoogleLibrary = $nameOfGoogleLibrary;
  }
  /** @return string */
  public function getNameOfGoogleLibrary()
  {
    return $this->nameOfGoogleLibrary;
  }
}

class PerfEnvironment extends \Google\Model
{
  /** @var CPUInfo */
  public $cpuInfo;
  /** @var MemoryInfo */
  public $memoryInfo;
  protected $cpuInfoType = CPUInfo::class;
  protected $cpuInfoDataType = '';
  protected $memoryInfoType = MemoryInfo::class;
  protected $memoryInfoDataType = '';
  /** @param CPUInfo */
  public function setCpuInfo(CPUInfo $cpuInfo)
  {
    $this->cpuInfo = $cpuInfo;
  }
  /** @return CPUInfo */
  public function getCpuInfo()
  {
    return $this->cpuInfo;
  }
  /** @param MemoryInfo */
  public function setMemoryInfo(MemoryInfo $memoryInfo)
  {
    $this->memoryInfo = $memoryInfo;
  }
  /** @return MemoryInfo */
  public function getMemoryInfo()
  {
    return $this->memoryInfo;
  }
}

class PerfMetricsSummary extends \Google\Collection
{
  /** @var AppStartTime */
  public $appStartTime;
  /** @var string */
  public $executionId;
  /** @var GraphicsStats */
  public $graphicsStats;
  /** @var string */
  public $historyId;
  /** @var PerfEnvironment */
  public $perfEnvironment;
  /** @var string[] */
  public $perfMetrics;
  /** @var string */
  public $projectId;
  /** @var string */
  public $stepId;
  protected $collection_key = 'perfMetrics';
  protected $appStartTimeType = AppStartTime::class;
  protected $appStartTimeDataType = '';
  protected $graphicsStatsType = GraphicsStats::class;
  protected $graphicsStatsDataType = '';
  protected $perfEnvironmentType = PerfEnvironment::class;
  protected $perfEnvironmentDataType = '';
  /** @param AppStartTime */
  public function setAppStartTime(AppStartTime $appStartTime)
  {
    $this->appStartTime = $appStartTime;
  }
  /** @return AppStartTime */
  public function getAppStartTime()
  {
    return $this->appStartTime;
  }
  /** @param string */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /** @return string */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /** @param GraphicsStats */
  public function setGraphicsStats(GraphicsStats $graphicsStats)
  {
    $this->graphicsStats = $graphicsStats;
  }
  /** @return GraphicsStats */
  public function getGraphicsStats()
  {
    return $this->graphicsStats;
  }
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
  }
  /** @param PerfEnvironment */
  public function setPerfEnvironment(PerfEnvironment $perfEnvironment)
  {
    $this->perfEnvironment = $perfEnvironment;
  }
  /** @return PerfEnvironment */
  public function getPerfEnvironment()
  {
    return $this->perfEnvironment;
  }
  /** @param string[] */
  public function setPerfMetrics($perfMetrics)
  {
    $this->perfMetrics = $perfMetrics;
  }
  /** @return string[] */
  public function getPerfMetrics()
  {
    return $this->perfMetrics;
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
  public function setStepId($stepId)
  {
    $this->stepId = $stepId;
  }
  /** @return string */
  public function getStepId()
  {
    return $this->stepId;
  }
}

class PerfSample extends \Google\Model
{
  /** @var Timestamp */
  public $sampleTime;
  public $value;
  protected $sampleTimeType = Timestamp::class;
  protected $sampleTimeDataType = '';
  /** @param Timestamp */
  public function setSampleTime(Timestamp $sampleTime)
  {
    $this->sampleTime = $sampleTime;
  }
  /** @return Timestamp */
  public function getSampleTime()
  {
    return $this->sampleTime;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class PerfSampleSeries extends \Google\Model
{
  /** @var BasicPerfSampleSeries */
  public $basicPerfSampleSeries;
  /** @var string */
  public $executionId;
  /** @var string */
  public $historyId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $sampleSeriesId;
  /** @var string */
  public $stepId;
  protected $basicPerfSampleSeriesType = BasicPerfSampleSeries::class;
  protected $basicPerfSampleSeriesDataType = '';
  /** @param BasicPerfSampleSeries */
  public function setBasicPerfSampleSeries(BasicPerfSampleSeries $basicPerfSampleSeries)
  {
    $this->basicPerfSampleSeries = $basicPerfSampleSeries;
  }
  /** @return BasicPerfSampleSeries */
  public function getBasicPerfSampleSeries()
  {
    return $this->basicPerfSampleSeries;
  }
  /** @param string */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /** @return string */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /** @param string */
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  /** @return string */
  public function getHistoryId()
  {
    return $this->historyId;
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
  public function setSampleSeriesId($sampleSeriesId)
  {
    $this->sampleSeriesId = $sampleSeriesId;
  }
  /** @return string */
  public function getSampleSeriesId()
  {
    return $this->sampleSeriesId;
  }
  /** @param string */
  public function setStepId($stepId)
  {
    $this->stepId = $stepId;
  }
  /** @return string */
  public function getStepId()
  {
    return $this->stepId;
  }
}

class PerformedGoogleLogin extends \Google\Model
{
}

class PerformedMonkeyActions extends \Google\Model
{
  /** @var int */
  public $totalActions;

  /** @param int */
  public function setTotalActions($totalActions)
  {
    $this->totalActions = $totalActions;
  }
  /** @return int */
  public function getTotalActions()
  {
    return $this->totalActions;
  }
}

class PrimaryStep extends \Google\Collection
{
  /** @var IndividualOutcome[] */
  public $individualOutcome;
  /** @var string */
  public $rollUp;
  protected $collection_key = 'individualOutcome';
  protected $individualOutcomeType = IndividualOutcome::class;
  protected $individualOutcomeDataType = 'array';
  /** @param IndividualOutcome[] */
  public function setIndividualOutcome($individualOutcome)
  {
    $this->individualOutcome = $individualOutcome;
  }
  /** @return IndividualOutcome[] */
  public function getIndividualOutcome()
  {
    return $this->individualOutcome;
  }
  /** @param string */
  public function setRollUp($rollUp)
  {
    $this->rollUp = $rollUp;
  }
  /** @return string */
  public function getRollUp()
  {
    return $this->rollUp;
  }
}

class ProjectSettings extends \Google\Model
{
  /** @var string */
  public $defaultBucket;
  /** @var string */
  public $name;

  /** @param string */
  public function setDefaultBucket($defaultBucket)
  {
    $this->defaultBucket = $defaultBucket;
  }
  /** @return string */
  public function getDefaultBucket()
  {
    return $this->defaultBucket;
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

class PublishXunitXmlFilesRequest extends \Google\Collection
{
  /** @var FileReference[] */
  public $xunitXmlFiles;
  protected $collection_key = 'xunitXmlFiles';
  protected $xunitXmlFilesType = FileReference::class;
  protected $xunitXmlFilesDataType = 'array';
  /** @param FileReference[] */
  public function setXunitXmlFiles($xunitXmlFiles)
  {
    $this->xunitXmlFiles = $xunitXmlFiles;
  }
  /** @return FileReference[] */
  public function getXunitXmlFiles()
  {
    return $this->xunitXmlFiles;
  }
}

class RegionProto extends \Google\Model
{
  /** @var int */
  public $heightPx;
  /** @var int */
  public $leftPx;
  /** @var int */
  public $topPx;
  /** @var int */
  public $widthPx;

  /** @param int */
  public function setHeightPx($heightPx)
  {
    $this->heightPx = $heightPx;
  }
  /** @return int */
  public function getHeightPx()
  {
    return $this->heightPx;
  }
  /** @param int */
  public function setLeftPx($leftPx)
  {
    $this->leftPx = $leftPx;
  }
  /** @return int */
  public function getLeftPx()
  {
    return $this->leftPx;
  }
  /** @param int */
  public function setTopPx($topPx)
  {
    $this->topPx = $topPx;
  }
  /** @return int */
  public function getTopPx()
  {
    return $this->topPx;
  }
  /** @param int */
  public function setWidthPx($widthPx)
  {
    $this->widthPx = $widthPx;
  }
  /** @return int */
  public function getWidthPx()
  {
    return $this->widthPx;
  }
}

class ResultsStorage extends \Google\Model
{
  /** @var FileReference */
  public $resultsStoragePath;
  /** @var FileReference */
  public $xunitXmlFile;
  protected $resultsStoragePathType = FileReference::class;
  protected $resultsStoragePathDataType = '';
  protected $xunitXmlFileType = FileReference::class;
  protected $xunitXmlFileDataType = '';
  /** @param FileReference */
  public function setResultsStoragePath(FileReference $resultsStoragePath)
  {
    $this->resultsStoragePath = $resultsStoragePath;
  }
  /** @return FileReference */
  public function getResultsStoragePath()
  {
    return $this->resultsStoragePath;
  }
  /** @param FileReference */
  public function setXunitXmlFile(FileReference $xunitXmlFile)
  {
    $this->xunitXmlFile = $xunitXmlFile;
  }
  /** @return FileReference */
  public function getXunitXmlFile()
  {
    return $this->xunitXmlFile;
  }
}

class RoboScriptExecution extends \Google\Model
{
  /** @var int */
  public $successfulActions;
  /** @var int */
  public $totalActions;

  /** @param int */
  public function setSuccessfulActions($successfulActions)
  {
    $this->successfulActions = $successfulActions;
  }
  /** @return int */
  public function getSuccessfulActions()
  {
    return $this->successfulActions;
  }
  /** @param int */
  public function setTotalActions($totalActions)
  {
    $this->totalActions = $totalActions;
  }
  /** @return int */
  public function getTotalActions()
  {
    return $this->totalActions;
  }
}

class SafeHtmlProto extends \Google\Model
{
  /** @var string */
  public $privateDoNotAccessOrElseSafeHtmlWrappedValue;

  /** @param string */
  public function setPrivateDoNotAccessOrElseSafeHtmlWrappedValue($privateDoNotAccessOrElseSafeHtmlWrappedValue)
  {
    $this->privateDoNotAccessOrElseSafeHtmlWrappedValue = $privateDoNotAccessOrElseSafeHtmlWrappedValue;
  }
  /** @return string */
  public function getPrivateDoNotAccessOrElseSafeHtmlWrappedValue()
  {
    return $this->privateDoNotAccessOrElseSafeHtmlWrappedValue;
  }
}

class Screen extends \Google\Model
{
  /** @var string */
  public $fileReference;
  /** @var string */
  public $locale;
  /** @var string */
  public $model;
  /** @var string */
  public $version;

  /** @param string */
  public function setFileReference($fileReference)
  {
    $this->fileReference = $fileReference;
  }
  /** @return string */
  public function getFileReference()
  {
    return $this->fileReference;
  }
  /** @param string */
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
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

class ScreenshotCluster extends \Google\Collection
{
  /** @var string */
  public $activity;
  /** @var string */
  public $clusterId;
  /** @var Screen */
  public $keyScreen;
  /** @var Screen[] */
  public $screens;
  protected $collection_key = 'screens';
  protected $keyScreenType = Screen::class;
  protected $keyScreenDataType = '';
  protected $screensType = Screen::class;
  protected $screensDataType = 'array';
  /** @param string */
  public function setActivity($activity)
  {
    $this->activity = $activity;
  }
  /** @return string */
  public function getActivity()
  {
    return $this->activity;
  }
  /** @param string */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /** @return string */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /** @param Screen */
  public function setKeyScreen(Screen $keyScreen)
  {
    $this->keyScreen = $keyScreen;
  }
  /** @return Screen */
  public function getKeyScreen()
  {
    return $this->keyScreen;
  }
  /** @param Screen[] */
  public function setScreens($screens)
  {
    $this->screens = $screens;
  }
  /** @return Screen[] */
  public function getScreens()
  {
    return $this->screens;
  }
}

class ShardSummary extends \Google\Collection
{
  /** @var StepSummary[] */
  public $runs;
  /** @var MergedResult */
  public $shardResult;
  protected $collection_key = 'runs';
  protected $runsType = StepSummary::class;
  protected $runsDataType = 'array';
  protected $shardResultType = MergedResult::class;
  protected $shardResultDataType = '';
  /** @param StepSummary[] */
  public function setRuns($runs)
  {
    $this->runs = $runs;
  }
  /** @return StepSummary[] */
  public function getRuns()
  {
    return $this->runs;
  }
  /** @param MergedResult */
  public function setShardResult(MergedResult $shardResult)
  {
    $this->shardResult = $shardResult;
  }
  /** @return MergedResult */
  public function getShardResult()
  {
    return $this->shardResult;
  }
}

class SkippedDetail extends \Google\Model
{
  /** @var bool */
  public $incompatibleAppVersion;
  /** @var bool */
  public $incompatibleArchitecture;
  /** @var bool */
  public $incompatibleDevice;

  /** @param bool */
  public function setIncompatibleAppVersion($incompatibleAppVersion)
  {
    $this->incompatibleAppVersion = $incompatibleAppVersion;
  }
  /** @return bool */
  public function getIncompatibleAppVersion()
  {
    return $this->incompatibleAppVersion;
  }
  /** @param bool */
  public function setIncompatibleArchitecture($incompatibleArchitecture)
  {
    $this->incompatibleArchitecture = $incompatibleArchitecture;
  }
  /** @return bool */
  public function getIncompatibleArchitecture()
  {
    return $this->incompatibleArchitecture;
  }
  /** @param bool */
  public function setIncompatibleDevice($incompatibleDevice)
  {
    $this->incompatibleDevice = $incompatibleDevice;
  }
  /** @return bool */
  public function getIncompatibleDevice()
  {
    return $this->incompatibleDevice;
  }
}

class Specification extends \Google\Model
{
  /** @var AndroidTest */
  public $androidTest;
  /** @var IosTest */
  public $iosTest;
  protected $androidTestType = AndroidTest::class;
  protected $androidTestDataType = '';
  protected $iosTestType = IosTest::class;
  protected $iosTestDataType = '';
  /** @param AndroidTest */
  public function setAndroidTest(AndroidTest $androidTest)
  {
    $this->androidTest = $androidTest;
  }
  /** @return AndroidTest */
  public function getAndroidTest()
  {
    return $this->androidTest;
  }
  /** @param IosTest */
  public function setIosTest(IosTest $iosTest)
  {
    $this->iosTest = $iosTest;
  }
  /** @return IosTest */
  public function getIosTest()
  {
    return $this->iosTest;
  }
}

class StackTrace extends \Google\Model
{
  /** @var string */
  public $exception;

  /** @param string */
  public function setException($exception)
  {
    $this->exception = $exception;
  }
  /** @return string */
  public function getException()
  {
    return $this->exception;
  }
}

class StartActivityNotFound extends \Google\Model
{
  /** @var string */
  public $action;
  /** @var string */
  public $uri;

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

class Step extends \Google\Collection
{
  /** @var Timestamp */
  public $completionTime;
  /** @var Timestamp */
  public $creationTime;
  /** @var string */
  public $description;
  /** @var Duration */
  public $deviceUsageDuration;
  /** @var StepDimensionValueEntry[] */
  public $dimensionValue;
  /** @var bool */
  public $hasImages;
  /** @var StepLabelsEntry[] */
  public $labels;
  /** @var MultiStep */
  public $multiStep;
  /** @var string */
  public $name;
  /** @var Outcome */
  public $outcome;
  /** @var Duration */
  public $runDuration;
  /** @var string */
  public $state;
  /** @var string */
  public $stepId;
  /** @var TestExecutionStep */
  public $testExecutionStep;
  /** @var ToolExecutionStep */
  public $toolExecutionStep;
  protected $collection_key = 'labels';
  protected $completionTimeType = Timestamp::class;
  protected $completionTimeDataType = '';
  protected $creationTimeType = Timestamp::class;
  protected $creationTimeDataType = '';
  protected $deviceUsageDurationType = Duration::class;
  protected $deviceUsageDurationDataType = '';
  protected $dimensionValueType = StepDimensionValueEntry::class;
  protected $dimensionValueDataType = 'array';
  protected $labelsType = StepLabelsEntry::class;
  protected $labelsDataType = 'array';
  protected $multiStepType = MultiStep::class;
  protected $multiStepDataType = '';
  protected $outcomeType = Outcome::class;
  protected $outcomeDataType = '';
  protected $runDurationType = Duration::class;
  protected $runDurationDataType = '';
  protected $testExecutionStepType = TestExecutionStep::class;
  protected $testExecutionStepDataType = '';
  protected $toolExecutionStepType = ToolExecutionStep::class;
  protected $toolExecutionStepDataType = '';
  /** @param Timestamp */
  public function setCompletionTime(Timestamp $completionTime)
  {
    $this->completionTime = $completionTime;
  }
  /** @return Timestamp */
  public function getCompletionTime()
  {
    return $this->completionTime;
  }
  /** @param Timestamp */
  public function setCreationTime(Timestamp $creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return Timestamp */
  public function getCreationTime()
  {
    return $this->creationTime;
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
  /** @param Duration */
  public function setDeviceUsageDuration(Duration $deviceUsageDuration)
  {
    $this->deviceUsageDuration = $deviceUsageDuration;
  }
  /** @return Duration */
  public function getDeviceUsageDuration()
  {
    return $this->deviceUsageDuration;
  }
  /** @param StepDimensionValueEntry[] */
  public function setDimensionValue($dimensionValue)
  {
    $this->dimensionValue = $dimensionValue;
  }
  /** @return StepDimensionValueEntry[] */
  public function getDimensionValue()
  {
    return $this->dimensionValue;
  }
  /** @param bool */
  public function setHasImages($hasImages)
  {
    $this->hasImages = $hasImages;
  }
  /** @return bool */
  public function getHasImages()
  {
    return $this->hasImages;
  }
  /** @param StepLabelsEntry[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return StepLabelsEntry[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param MultiStep */
  public function setMultiStep(MultiStep $multiStep)
  {
    $this->multiStep = $multiStep;
  }
  /** @return MultiStep */
  public function getMultiStep()
  {
    return $this->multiStep;
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
  /** @param Outcome */
  public function setOutcome(Outcome $outcome)
  {
    $this->outcome = $outcome;
  }
  /** @return Outcome */
  public function getOutcome()
  {
    return $this->outcome;
  }
  /** @param Duration */
  public function setRunDuration(Duration $runDuration)
  {
    $this->runDuration = $runDuration;
  }
  /** @return Duration */
  public function getRunDuration()
  {
    return $this->runDuration;
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
  public function setStepId($stepId)
  {
    $this->stepId = $stepId;
  }
  /** @return string */
  public function getStepId()
  {
    return $this->stepId;
  }
  /** @param TestExecutionStep */
  public function setTestExecutionStep(TestExecutionStep $testExecutionStep)
  {
    $this->testExecutionStep = $testExecutionStep;
  }
  /** @return TestExecutionStep */
  public function getTestExecutionStep()
  {
    return $this->testExecutionStep;
  }
  /** @param ToolExecutionStep */
  public function setToolExecutionStep(ToolExecutionStep $toolExecutionStep)
  {
    $this->toolExecutionStep = $toolExecutionStep;
  }
  /** @return ToolExecutionStep */
  public function getToolExecutionStep()
  {
    return $this->toolExecutionStep;
  }
}

class StepDimensionValueEntry extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class StepLabelsEntry extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

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

class StepSummary extends \Google\Model
{
}

class SuccessDetail extends \Google\Model
{
  /** @var bool */
  public $otherNativeCrash;

  /** @param bool */
  public function setOtherNativeCrash($otherNativeCrash)
  {
    $this->otherNativeCrash = $otherNativeCrash;
  }
  /** @return bool */
  public function getOtherNativeCrash()
  {
    return $this->otherNativeCrash;
  }
}

class SuggestionClusterProto extends \Google\Collection
{
  /** @var string */
  public $category;
  /** @var SuggestionProto[] */
  public $suggestions;
  protected $collection_key = 'suggestions';
  protected $suggestionsType = SuggestionProto::class;
  protected $suggestionsDataType = 'array';
  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param SuggestionProto[] */
  public function setSuggestions($suggestions)
  {
    $this->suggestions = $suggestions;
  }
  /** @return SuggestionProto[] */
  public function getSuggestions()
  {
    return $this->suggestions;
  }
}

class SuggestionProto extends \Google\Model
{
  /** @var string */
  public $helpUrl;
  /** @var SafeHtmlProto */
  public $longMessage;
  /** @var string */
  public $priority;
  /** @var string */
  public $pseudoResourceId;
  /** @var RegionProto */
  public $region;
  /** @var string */
  public $resourceName;
  /** @var string */
  public $screenId;
  public $secondaryPriority;
  /** @var SafeHtmlProto */
  public $shortMessage;
  /** @var string */
  public $title;
  protected $longMessageType = SafeHtmlProto::class;
  protected $longMessageDataType = '';
  protected $regionType = RegionProto::class;
  protected $regionDataType = '';
  protected $shortMessageType = SafeHtmlProto::class;
  protected $shortMessageDataType = '';
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
  /** @param SafeHtmlProto */
  public function setLongMessage(SafeHtmlProto $longMessage)
  {
    $this->longMessage = $longMessage;
  }
  /** @return SafeHtmlProto */
  public function getLongMessage()
  {
    return $this->longMessage;
  }
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
  public function setPseudoResourceId($pseudoResourceId)
  {
    $this->pseudoResourceId = $pseudoResourceId;
  }
  /** @return string */
  public function getPseudoResourceId()
  {
    return $this->pseudoResourceId;
  }
  /** @param RegionProto */
  public function setRegion(RegionProto $region)
  {
    $this->region = $region;
  }
  /** @return RegionProto */
  public function getRegion()
  {
    return $this->region;
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
  public function setScreenId($screenId)
  {
    $this->screenId = $screenId;
  }
  /** @return string */
  public function getScreenId()
  {
    return $this->screenId;
  }
  public function setSecondaryPriority($secondaryPriority)
  {
    $this->secondaryPriority = $secondaryPriority;
  }
  public function getSecondaryPriority()
  {
    return $this->secondaryPriority;
  }
  /** @param SafeHtmlProto */
  public function setShortMessage(SafeHtmlProto $shortMessage)
  {
    $this->shortMessage = $shortMessage;
  }
  /** @return SafeHtmlProto */
  public function getShortMessage()
  {
    return $this->shortMessage;
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

class TestCase extends \Google\Collection
{
  /** @var Duration */
  public $elapsedTime;
  /** @var Timestamp */
  public $endTime;
  /** @var string */
  public $skippedMessage;
  /** @var StackTrace[] */
  public $stackTraces;
  /** @var Timestamp */
  public $startTime;
  /** @var string */
  public $status;
  /** @var string */
  public $testCaseId;
  /** @var TestCaseReference */
  public $testCaseReference;
  /** @var ToolOutputReference[] */
  public $toolOutputs;
  protected $collection_key = 'toolOutputs';
  protected $elapsedTimeType = Duration::class;
  protected $elapsedTimeDataType = '';
  protected $endTimeType = Timestamp::class;
  protected $endTimeDataType = '';
  protected $stackTracesType = StackTrace::class;
  protected $stackTracesDataType = 'array';
  protected $startTimeType = Timestamp::class;
  protected $startTimeDataType = '';
  protected $testCaseReferenceType = TestCaseReference::class;
  protected $testCaseReferenceDataType = '';
  protected $toolOutputsType = ToolOutputReference::class;
  protected $toolOutputsDataType = 'array';
  /** @param Duration */
  public function setElapsedTime(Duration $elapsedTime)
  {
    $this->elapsedTime = $elapsedTime;
  }
  /** @return Duration */
  public function getElapsedTime()
  {
    return $this->elapsedTime;
  }
  /** @param Timestamp */
  public function setEndTime(Timestamp $endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return Timestamp */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param string */
  public function setSkippedMessage($skippedMessage)
  {
    $this->skippedMessage = $skippedMessage;
  }
  /** @return string */
  public function getSkippedMessage()
  {
    return $this->skippedMessage;
  }
  /** @param StackTrace[] */
  public function setStackTraces($stackTraces)
  {
    $this->stackTraces = $stackTraces;
  }
  /** @return StackTrace[] */
  public function getStackTraces()
  {
    return $this->stackTraces;
  }
  /** @param Timestamp */
  public function setStartTime(Timestamp $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return Timestamp */
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
  public function setTestCaseId($testCaseId)
  {
    $this->testCaseId = $testCaseId;
  }
  /** @return string */
  public function getTestCaseId()
  {
    return $this->testCaseId;
  }
  /** @param TestCaseReference */
  public function setTestCaseReference(TestCaseReference $testCaseReference)
  {
    $this->testCaseReference = $testCaseReference;
  }
  /** @return TestCaseReference */
  public function getTestCaseReference()
  {
    return $this->testCaseReference;
  }
  /** @param ToolOutputReference[] */
  public function setToolOutputs($toolOutputs)
  {
    $this->toolOutputs = $toolOutputs;
  }
  /** @return ToolOutputReference[] */
  public function getToolOutputs()
  {
    return $this->toolOutputs;
  }
}

class TestCaseReference extends \Google\Model
{
  /** @var string */
  public $className;
  /** @var string */
  public $name;
  /** @var string */
  public $testSuiteName;

  /** @param string */
  public function setClassName($className)
  {
    $this->className = $className;
  }
  /** @return string */
  public function getClassName()
  {
    return $this->className;
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
  public function setTestSuiteName($testSuiteName)
  {
    $this->testSuiteName = $testSuiteName;
  }
  /** @return string */
  public function getTestSuiteName()
  {
    return $this->testSuiteName;
  }
}

class TestExecutionStep extends \Google\Collection
{
  /** @var TestIssue[] */
  public $testIssues;
  /** @var TestSuiteOverview[] */
  public $testSuiteOverviews;
  /** @var TestTiming */
  public $testTiming;
  /** @var ToolExecution */
  public $toolExecution;
  protected $collection_key = 'testSuiteOverviews';
  protected $testIssuesType = TestIssue::class;
  protected $testIssuesDataType = 'array';
  protected $testSuiteOverviewsType = TestSuiteOverview::class;
  protected $testSuiteOverviewsDataType = 'array';
  protected $testTimingType = TestTiming::class;
  protected $testTimingDataType = '';
  protected $toolExecutionType = ToolExecution::class;
  protected $toolExecutionDataType = '';
  /** @param TestIssue[] */
  public function setTestIssues($testIssues)
  {
    $this->testIssues = $testIssues;
  }
  /** @return TestIssue[] */
  public function getTestIssues()
  {
    return $this->testIssues;
  }
  /** @param TestSuiteOverview[] */
  public function setTestSuiteOverviews($testSuiteOverviews)
  {
    $this->testSuiteOverviews = $testSuiteOverviews;
  }
  /** @return TestSuiteOverview[] */
  public function getTestSuiteOverviews()
  {
    return $this->testSuiteOverviews;
  }
  /** @param TestTiming */
  public function setTestTiming(TestTiming $testTiming)
  {
    $this->testTiming = $testTiming;
  }
  /** @return TestTiming */
  public function getTestTiming()
  {
    return $this->testTiming;
  }
  /** @param ToolExecution */
  public function setToolExecution(ToolExecution $toolExecution)
  {
    $this->toolExecution = $toolExecution;
  }
  /** @return ToolExecution */
  public function getToolExecution()
  {
    return $this->toolExecution;
  }
}

class TestIssue extends \Google\Model
{
  /** @var string */
  public $category;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $severity;
  /** @var StackTrace */
  public $stackTrace;
  /** @var string */
  public $type;
  /** @var Any */
  public $warning;
  protected $stackTraceType = StackTrace::class;
  protected $stackTraceDataType = '';
  protected $warningType = Any::class;
  protected $warningDataType = '';
  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
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
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
  /** @param StackTrace */
  public function setStackTrace(StackTrace $stackTrace)
  {
    $this->stackTrace = $stackTrace;
  }
  /** @return StackTrace */
  public function getStackTrace()
  {
    return $this->stackTrace;
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
  /** @param Any */
  public function setWarning(Any $warning)
  {
    $this->warning = $warning;
  }
  /** @return Any */
  public function getWarning()
  {
    return $this->warning;
  }
}

class TestSuiteOverview extends \Google\Model
{
  /** @var Duration */
  public $elapsedTime;
  /** @var int */
  public $errorCount;
  /** @var int */
  public $failureCount;
  /** @var int */
  public $flakyCount;
  /** @var string */
  public $name;
  /** @var int */
  public $skippedCount;
  /** @var int */
  public $totalCount;
  /** @var FileReference */
  public $xmlSource;
  protected $elapsedTimeType = Duration::class;
  protected $elapsedTimeDataType = '';
  protected $xmlSourceType = FileReference::class;
  protected $xmlSourceDataType = '';
  /** @param Duration */
  public function setElapsedTime(Duration $elapsedTime)
  {
    $this->elapsedTime = $elapsedTime;
  }
  /** @return Duration */
  public function getElapsedTime()
  {
    return $this->elapsedTime;
  }
  /** @param int */
  public function setErrorCount($errorCount)
  {
    $this->errorCount = $errorCount;
  }
  /** @return int */
  public function getErrorCount()
  {
    return $this->errorCount;
  }
  /** @param int */
  public function setFailureCount($failureCount)
  {
    $this->failureCount = $failureCount;
  }
  /** @return int */
  public function getFailureCount()
  {
    return $this->failureCount;
  }
  /** @param int */
  public function setFlakyCount($flakyCount)
  {
    $this->flakyCount = $flakyCount;
  }
  /** @return int */
  public function getFlakyCount()
  {
    return $this->flakyCount;
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
  /** @param int */
  public function setSkippedCount($skippedCount)
  {
    $this->skippedCount = $skippedCount;
  }
  /** @return int */
  public function getSkippedCount()
  {
    return $this->skippedCount;
  }
  /** @param int */
  public function setTotalCount($totalCount)
  {
    $this->totalCount = $totalCount;
  }
  /** @return int */
  public function getTotalCount()
  {
    return $this->totalCount;
  }
  /** @param FileReference */
  public function setXmlSource(FileReference $xmlSource)
  {
    $this->xmlSource = $xmlSource;
  }
  /** @return FileReference */
  public function getXmlSource()
  {
    return $this->xmlSource;
  }
}

class TestTiming extends \Google\Model
{
  /** @var Duration */
  public $testProcessDuration;
  protected $testProcessDurationType = Duration::class;
  protected $testProcessDurationDataType = '';
  /** @param Duration */
  public function setTestProcessDuration(Duration $testProcessDuration)
  {
    $this->testProcessDuration = $testProcessDuration;
  }
  /** @return Duration */
  public function getTestProcessDuration()
  {
    return $this->testProcessDuration;
  }
}

class Thumbnail extends \Google\Model
{
  /** @var string */
  public $contentType;
  /** @var string */
  public $data;
  /** @var int */
  public $heightPx;
  /** @var int */
  public $widthPx;

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
  /** @param int */
  public function setHeightPx($heightPx)
  {
    $this->heightPx = $heightPx;
  }
  /** @return int */
  public function getHeightPx()
  {
    return $this->heightPx;
  }
  /** @param int */
  public function setWidthPx($widthPx)
  {
    $this->widthPx = $widthPx;
  }
  /** @return int */
  public function getWidthPx()
  {
    return $this->widthPx;
  }
}

class Timestamp extends \Google\Model
{
  /** @var int */
  public $nanos;
  /** @var string */
  public $seconds;

  /** @param int */
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  /** @return int */
  public function getNanos()
  {
    return $this->nanos;
  }
  /** @param string */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return string */
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class ToolExecution extends \Google\Collection
{
  /** @var string[] */
  public $commandLineArguments;
  /** @var ToolExitCode */
  public $exitCode;
  /** @var FileReference[] */
  public $toolLogs;
  /** @var ToolOutputReference[] */
  public $toolOutputs;
  protected $collection_key = 'toolOutputs';
  protected $exitCodeType = ToolExitCode::class;
  protected $exitCodeDataType = '';
  protected $toolLogsType = FileReference::class;
  protected $toolLogsDataType = 'array';
  protected $toolOutputsType = ToolOutputReference::class;
  protected $toolOutputsDataType = 'array';
  /** @param string[] */
  public function setCommandLineArguments($commandLineArguments)
  {
    $this->commandLineArguments = $commandLineArguments;
  }
  /** @return string[] */
  public function getCommandLineArguments()
  {
    return $this->commandLineArguments;
  }
  /** @param ToolExitCode */
  public function setExitCode(ToolExitCode $exitCode)
  {
    $this->exitCode = $exitCode;
  }
  /** @return ToolExitCode */
  public function getExitCode()
  {
    return $this->exitCode;
  }
  /** @param FileReference[] */
  public function setToolLogs($toolLogs)
  {
    $this->toolLogs = $toolLogs;
  }
  /** @return FileReference[] */
  public function getToolLogs()
  {
    return $this->toolLogs;
  }
  /** @param ToolOutputReference[] */
  public function setToolOutputs($toolOutputs)
  {
    $this->toolOutputs = $toolOutputs;
  }
  /** @return ToolOutputReference[] */
  public function getToolOutputs()
  {
    return $this->toolOutputs;
  }
}

class ToolExecutionStep extends \Google\Model
{
  /** @var ToolExecution */
  public $toolExecution;
  protected $toolExecutionType = ToolExecution::class;
  protected $toolExecutionDataType = '';
  /** @param ToolExecution */
  public function setToolExecution(ToolExecution $toolExecution)
  {
    $this->toolExecution = $toolExecution;
  }
  /** @return ToolExecution */
  public function getToolExecution()
  {
    return $this->toolExecution;
  }
}

class ToolExitCode extends \Google\Model
{
  /** @var int */
  public $number;

  /** @param int */
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return int */
  public function getNumber()
  {
    return $this->number;
  }
}

class ToolOutputReference extends \Google\Model
{
  /** @var Timestamp */
  public $creationTime;
  /** @var FileReference */
  public $output;
  /** @var TestCaseReference */
  public $testCase;
  protected $creationTimeType = Timestamp::class;
  protected $creationTimeDataType = '';
  protected $outputType = FileReference::class;
  protected $outputDataType = '';
  protected $testCaseType = TestCaseReference::class;
  protected $testCaseDataType = '';
  /** @param Timestamp */
  public function setCreationTime(Timestamp $creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return Timestamp */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /** @param FileReference */
  public function setOutput(FileReference $output)
  {
    $this->output = $output;
  }
  /** @return FileReference */
  public function getOutput()
  {
    return $this->output;
  }
  /** @param TestCaseReference */
  public function setTestCase(TestCaseReference $testCase)
  {
    $this->testCase = $testCase;
  }
  /** @return TestCaseReference */
  public function getTestCase()
  {
    return $this->testCase;
  }
}

class UIElementTooDeep extends \Google\Model
{
  /** @var int */
  public $depth;
  /** @var string */
  public $screenId;
  /** @var string */
  public $screenStateId;

  /** @param int */
  public function setDepth($depth)
  {
    $this->depth = $depth;
  }
  /** @return int */
  public function getDepth()
  {
    return $this->depth;
  }
  /** @param string */
  public function setScreenId($screenId)
  {
    $this->screenId = $screenId;
  }
  /** @return string */
  public function getScreenId()
  {
    return $this->screenId;
  }
  /** @param string */
  public function setScreenStateId($screenStateId)
  {
    $this->screenStateId = $screenStateId;
  }
  /** @return string */
  public function getScreenStateId()
  {
    return $this->screenStateId;
  }
}

class UnspecifiedWarning extends \Google\Model
{
}

class UnusedRoboDirective extends \Google\Model
{
  /** @var string */
  public $resourceName;

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
}

class UpgradeInsight extends \Google\Model
{
  /** @var string */
  public $packageName;
  /** @var string */
  public $upgradeToVersion;

  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string */
  public function setUpgradeToVersion($upgradeToVersion)
  {
    $this->upgradeToVersion = $upgradeToVersion;
  }
  /** @return string */
  public function getUpgradeToVersion()
  {
    return $this->upgradeToVersion;
  }
}

class UsedRoboDirective extends \Google\Model
{
  /** @var string */
  public $resourceName;

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
}

class UsedRoboIgnoreDirective extends \Google\Model
{
  /** @var string */
  public $resourceName;

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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ANR::class, 'Google_Service_ToolResults_ANR');
class_alias(AndroidAppInfo::class, 'Google_Service_ToolResults_AndroidAppInfo');
class_alias(AndroidInstrumentationTest::class, 'Google_Service_ToolResults_AndroidInstrumentationTest');
class_alias(AndroidRoboTest::class, 'Google_Service_ToolResults_AndroidRoboTest');
class_alias(AndroidTest::class, 'Google_Service_ToolResults_AndroidTest');
class_alias(AndroidTestLoop::class, 'Google_Service_ToolResults_AndroidTestLoop');
class_alias(Any::class, 'Google_Service_ToolResults_Any');
class_alias(AppStartTime::class, 'Google_Service_ToolResults_AppStartTime');
class_alias(AvailableDeepLinks::class, 'Google_Service_ToolResults_AvailableDeepLinks');
class_alias(BasicPerfSampleSeries::class, 'Google_Service_ToolResults_BasicPerfSampleSeries');
class_alias(BatchCreatePerfSamplesRequest::class, 'Google_Service_ToolResults_BatchCreatePerfSamplesRequest');
class_alias(BatchCreatePerfSamplesResponse::class, 'Google_Service_ToolResults_BatchCreatePerfSamplesResponse');
class_alias(BlankScreen::class, 'Google_Service_ToolResults_BlankScreen');
class_alias(CPUInfo::class, 'Google_Service_ToolResults_CPUInfo');
class_alias(CrashDialogError::class, 'Google_Service_ToolResults_CrashDialogError');
class_alias(DetectedAppSplashScreen::class, 'Google_Service_ToolResults_DetectedAppSplashScreen');
class_alias(DeviceOutOfMemory::class, 'Google_Service_ToolResults_DeviceOutOfMemory');
class_alias(Duration::class, 'Google_Service_ToolResults_Duration');
class_alias(EncounteredLoginScreen::class, 'Google_Service_ToolResults_EncounteredLoginScreen');
class_alias(EncounteredNonAndroidUiWidgetScreen::class, 'Google_Service_ToolResults_EncounteredNonAndroidUiWidgetScreen');
class_alias(Environment::class, 'Google_Service_ToolResults_Environment');
class_alias(EnvironmentDimensionValueEntry::class, 'Google_Service_ToolResults_EnvironmentDimensionValueEntry');
class_alias(Execution::class, 'Google_Service_ToolResults_Execution');
class_alias(FailedToInstall::class, 'Google_Service_ToolResults_FailedToInstall');
class_alias(FailureDetail::class, 'Google_Service_ToolResults_FailureDetail');
class_alias(FatalException::class, 'Google_Service_ToolResults_FatalException');
class_alias(FileReference::class, 'Google_Service_ToolResults_FileReference');
class_alias(GraphicsStats::class, 'Google_Service_ToolResults_GraphicsStats');
class_alias(GraphicsStatsBucket::class, 'Google_Service_ToolResults_GraphicsStatsBucket');
class_alias(History::class, 'Google_Service_ToolResults_History');
class_alias(Image::class, 'Google_Service_ToolResults_Image');
class_alias(InAppPurchasesFound::class, 'Google_Service_ToolResults_InAppPurchasesFound');
class_alias(InconclusiveDetail::class, 'Google_Service_ToolResults_InconclusiveDetail');
class_alias(IndividualOutcome::class, 'Google_Service_ToolResults_IndividualOutcome');
class_alias(InsufficientCoverage::class, 'Google_Service_ToolResults_InsufficientCoverage');
class_alias(IosAppCrashed::class, 'Google_Service_ToolResults_IosAppCrashed');
class_alias(IosAppInfo::class, 'Google_Service_ToolResults_IosAppInfo');
class_alias(IosRoboTest::class, 'Google_Service_ToolResults_IosRoboTest');
class_alias(IosTest::class, 'Google_Service_ToolResults_IosTest');
class_alias(IosTestLoop::class, 'Google_Service_ToolResults_IosTestLoop');
class_alias(IosXcTest::class, 'Google_Service_ToolResults_IosXcTest');
class_alias(LauncherActivityNotFound::class, 'Google_Service_ToolResults_LauncherActivityNotFound');
class_alias(ListEnvironmentsResponse::class, 'Google_Service_ToolResults_ListEnvironmentsResponse');
class_alias(ListExecutionsResponse::class, 'Google_Service_ToolResults_ListExecutionsResponse');
class_alias(ListHistoriesResponse::class, 'Google_Service_ToolResults_ListHistoriesResponse');
class_alias(ListPerfSampleSeriesResponse::class, 'Google_Service_ToolResults_ListPerfSampleSeriesResponse');
class_alias(ListPerfSamplesResponse::class, 'Google_Service_ToolResults_ListPerfSamplesResponse');
class_alias(ListScreenshotClustersResponse::class, 'Google_Service_ToolResults_ListScreenshotClustersResponse');
class_alias(ListStepAccessibilityClustersResponse::class, 'Google_Service_ToolResults_ListStepAccessibilityClustersResponse');
class_alias(ListStepThumbnailsResponse::class, 'Google_Service_ToolResults_ListStepThumbnailsResponse');
class_alias(ListStepsResponse::class, 'Google_Service_ToolResults_ListStepsResponse');
class_alias(ListTestCasesResponse::class, 'Google_Service_ToolResults_ListTestCasesResponse');
class_alias(LogcatCollectionError::class, 'Google_Service_ToolResults_LogcatCollectionError');
class_alias(MatrixDimensionDefinition::class, 'Google_Service_ToolResults_MatrixDimensionDefinition');
class_alias(MemoryInfo::class, 'Google_Service_ToolResults_MemoryInfo');
class_alias(MergedResult::class, 'Google_Service_ToolResults_MergedResult');
class_alias(MultiStep::class, 'Google_Service_ToolResults_MultiStep');
class_alias(NativeCrash::class, 'Google_Service_ToolResults_NativeCrash');
class_alias(NonSdkApi::class, 'Google_Service_ToolResults_NonSdkApi');
class_alias(NonSdkApiInsight::class, 'Google_Service_ToolResults_NonSdkApiInsight');
class_alias(NonSdkApiUsageViolation::class, 'Google_Service_ToolResults_NonSdkApiUsageViolation');
class_alias(NonSdkApiUsageViolationReport::class, 'Google_Service_ToolResults_NonSdkApiUsageViolationReport');
class_alias(Outcome::class, 'Google_Service_ToolResults_Outcome');
class_alias(OverlappingUIElements::class, 'Google_Service_ToolResults_OverlappingUIElements');
class_alias(PendingGoogleUpdateInsight::class, 'Google_Service_ToolResults_PendingGoogleUpdateInsight');
class_alias(PerfEnvironment::class, 'Google_Service_ToolResults_PerfEnvironment');
class_alias(PerfMetricsSummary::class, 'Google_Service_ToolResults_PerfMetricsSummary');
class_alias(PerfSample::class, 'Google_Service_ToolResults_PerfSample');
class_alias(PerfSampleSeries::class, 'Google_Service_ToolResults_PerfSampleSeries');
class_alias(PerformedGoogleLogin::class, 'Google_Service_ToolResults_PerformedGoogleLogin');
class_alias(PerformedMonkeyActions::class, 'Google_Service_ToolResults_PerformedMonkeyActions');
class_alias(PrimaryStep::class, 'Google_Service_ToolResults_PrimaryStep');
class_alias(ProjectSettings::class, 'Google_Service_ToolResults_ProjectSettings');
class_alias(PublishXunitXmlFilesRequest::class, 'Google_Service_ToolResults_PublishXunitXmlFilesRequest');
class_alias(RegionProto::class, 'Google_Service_ToolResults_RegionProto');
class_alias(ResultsStorage::class, 'Google_Service_ToolResults_ResultsStorage');
class_alias(RoboScriptExecution::class, 'Google_Service_ToolResults_RoboScriptExecution');
class_alias(SafeHtmlProto::class, 'Google_Service_ToolResults_SafeHtmlProto');
class_alias(Screen::class, 'Google_Service_ToolResults_Screen');
class_alias(ScreenshotCluster::class, 'Google_Service_ToolResults_ScreenshotCluster');
class_alias(ShardSummary::class, 'Google_Service_ToolResults_ShardSummary');
class_alias(SkippedDetail::class, 'Google_Service_ToolResults_SkippedDetail');
class_alias(Specification::class, 'Google_Service_ToolResults_Specification');
class_alias(StackTrace::class, 'Google_Service_ToolResults_StackTrace');
class_alias(StartActivityNotFound::class, 'Google_Service_ToolResults_StartActivityNotFound');
class_alias(Status::class, 'Google_Service_ToolResults_Status');
class_alias(Step::class, 'Google_Service_ToolResults_Step');
class_alias(StepDimensionValueEntry::class, 'Google_Service_ToolResults_StepDimensionValueEntry');
class_alias(StepLabelsEntry::class, 'Google_Service_ToolResults_StepLabelsEntry');
class_alias(StepSummary::class, 'Google_Service_ToolResults_StepSummary');
class_alias(SuccessDetail::class, 'Google_Service_ToolResults_SuccessDetail');
class_alias(SuggestionClusterProto::class, 'Google_Service_ToolResults_SuggestionClusterProto');
class_alias(SuggestionProto::class, 'Google_Service_ToolResults_SuggestionProto');
class_alias(TestCase::class, 'Google_Service_ToolResults_TestCase');
class_alias(TestCaseReference::class, 'Google_Service_ToolResults_TestCaseReference');
class_alias(TestExecutionStep::class, 'Google_Service_ToolResults_TestExecutionStep');
class_alias(TestIssue::class, 'Google_Service_ToolResults_TestIssue');
class_alias(TestSuiteOverview::class, 'Google_Service_ToolResults_TestSuiteOverview');
class_alias(TestTiming::class, 'Google_Service_ToolResults_TestTiming');
class_alias(Thumbnail::class, 'Google_Service_ToolResults_Thumbnail');
class_alias(Timestamp::class, 'Google_Service_ToolResults_Timestamp');
class_alias(ToolExecution::class, 'Google_Service_ToolResults_ToolExecution');
class_alias(ToolExecutionStep::class, 'Google_Service_ToolResults_ToolExecutionStep');
class_alias(ToolExitCode::class, 'Google_Service_ToolResults_ToolExitCode');
class_alias(ToolOutputReference::class, 'Google_Service_ToolResults_ToolOutputReference');
class_alias(UIElementTooDeep::class, 'Google_Service_ToolResults_UIElementTooDeep');
class_alias(UnspecifiedWarning::class, 'Google_Service_ToolResults_UnspecifiedWarning');
class_alias(UnusedRoboDirective::class, 'Google_Service_ToolResults_UnusedRoboDirective');
class_alias(UpgradeInsight::class, 'Google_Service_ToolResults_UpgradeInsight');
class_alias(UsedRoboDirective::class, 'Google_Service_ToolResults_UsedRoboDirective');
class_alias(UsedRoboIgnoreDirective::class, 'Google_Service_ToolResults_UsedRoboIgnoreDirective');
