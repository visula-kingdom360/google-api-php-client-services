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

namespace Google\Service\CloudMachineLearningEngine;

class GoogleApiHttpBody extends \Google\Collection
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

class GoogleCloudMlV1AcceleratorConfig extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var string */
  public $type;

  /** @param string */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return string */
  public function getCount()
  {
    return $this->count;
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

class GoogleCloudMlV1AddTrialMeasurementRequest extends \Google\Model
{
  /** @var GoogleCloudMlV1Measurement */
  public $measurement;
  protected $measurementType = GoogleCloudMlV1Measurement::class;
  protected $measurementDataType = '';
  /** @param GoogleCloudMlV1Measurement */
  public function setMeasurement(GoogleCloudMlV1Measurement $measurement)
  {
    $this->measurement = $measurement;
  }
  /** @return GoogleCloudMlV1Measurement */
  public function getMeasurement()
  {
    return $this->measurement;
  }
}

class GoogleCloudMlV1AutoScaling extends \Google\Collection
{
  /** @var int */
  public $maxNodes;
  /** @var GoogleCloudMlV1MetricSpec[] */
  public $metrics;
  /** @var int */
  public $minNodes;
  protected $collection_key = 'metrics';
  protected $metricsType = GoogleCloudMlV1MetricSpec::class;
  protected $metricsDataType = 'array';
  /** @param int */
  public function setMaxNodes($maxNodes)
  {
    $this->maxNodes = $maxNodes;
  }
  /** @return int */
  public function getMaxNodes()
  {
    return $this->maxNodes;
  }
  /** @param GoogleCloudMlV1MetricSpec[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudMlV1MetricSpec[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param int */
  public function setMinNodes($minNodes)
  {
    $this->minNodes = $minNodes;
  }
  /** @return int */
  public function getMinNodes()
  {
    return $this->minNodes;
  }
}

class GoogleCloudMlV1AutomatedStoppingConfig extends \Google\Model
{
  /** @var GoogleCloudMlV1AutomatedStoppingConfigDecayCurveAutomatedStoppingConfig */
  public $decayCurveStoppingConfig;
  /** @var GoogleCloudMlV1AutomatedStoppingConfigMedianAutomatedStoppingConfig */
  public $medianAutomatedStoppingConfig;
  protected $decayCurveStoppingConfigType = GoogleCloudMlV1AutomatedStoppingConfigDecayCurveAutomatedStoppingConfig::class;
  protected $decayCurveStoppingConfigDataType = '';
  protected $medianAutomatedStoppingConfigType = GoogleCloudMlV1AutomatedStoppingConfigMedianAutomatedStoppingConfig::class;
  protected $medianAutomatedStoppingConfigDataType = '';
  /** @param GoogleCloudMlV1AutomatedStoppingConfigDecayCurveAutomatedStoppingConfig */
  public function setDecayCurveStoppingConfig(GoogleCloudMlV1AutomatedStoppingConfigDecayCurveAutomatedStoppingConfig $decayCurveStoppingConfig)
  {
    $this->decayCurveStoppingConfig = $decayCurveStoppingConfig;
  }
  /** @return GoogleCloudMlV1AutomatedStoppingConfigDecayCurveAutomatedStoppingConfig */
  public function getDecayCurveStoppingConfig()
  {
    return $this->decayCurveStoppingConfig;
  }
  /** @param GoogleCloudMlV1AutomatedStoppingConfigMedianAutomatedStoppingConfig */
  public function setMedianAutomatedStoppingConfig(GoogleCloudMlV1AutomatedStoppingConfigMedianAutomatedStoppingConfig $medianAutomatedStoppingConfig)
  {
    $this->medianAutomatedStoppingConfig = $medianAutomatedStoppingConfig;
  }
  /** @return GoogleCloudMlV1AutomatedStoppingConfigMedianAutomatedStoppingConfig */
  public function getMedianAutomatedStoppingConfig()
  {
    return $this->medianAutomatedStoppingConfig;
  }
}

class GoogleCloudMlV1AutomatedStoppingConfigDecayCurveAutomatedStoppingConfig extends \Google\Model
{
  /** @var bool */
  public $useElapsedTime;

  /** @param bool */
  public function setUseElapsedTime($useElapsedTime)
  {
    $this->useElapsedTime = $useElapsedTime;
  }
  /** @return bool */
  public function getUseElapsedTime()
  {
    return $this->useElapsedTime;
  }
}

class GoogleCloudMlV1AutomatedStoppingConfigMedianAutomatedStoppingConfig extends \Google\Model
{
  /** @var bool */
  public $useElapsedTime;

  /** @param bool */
  public function setUseElapsedTime($useElapsedTime)
  {
    $this->useElapsedTime = $useElapsedTime;
  }
  /** @return bool */
  public function getUseElapsedTime()
  {
    return $this->useElapsedTime;
  }
}

class GoogleCloudMlV1BuiltInAlgorithmOutput extends \Google\Model
{
  /** @var string */
  public $framework;
  /** @var string */
  public $modelPath;
  /** @var string */
  public $pythonVersion;
  /** @var string */
  public $runtimeVersion;

  /** @param string */
  public function setFramework($framework)
  {
    $this->framework = $framework;
  }
  /** @return string */
  public function getFramework()
  {
    return $this->framework;
  }
  /** @param string */
  public function setModelPath($modelPath)
  {
    $this->modelPath = $modelPath;
  }
  /** @return string */
  public function getModelPath()
  {
    return $this->modelPath;
  }
  /** @param string */
  public function setPythonVersion($pythonVersion)
  {
    $this->pythonVersion = $pythonVersion;
  }
  /** @return string */
  public function getPythonVersion()
  {
    return $this->pythonVersion;
  }
  /** @param string */
  public function setRuntimeVersion($runtimeVersion)
  {
    $this->runtimeVersion = $runtimeVersion;
  }
  /** @return string */
  public function getRuntimeVersion()
  {
    return $this->runtimeVersion;
  }
}

class GoogleCloudMlV1CancelJobRequest extends \Google\Model
{
}

class GoogleCloudMlV1Capability extends \Google\Collection
{
  /** @var string[] */
  public $availableAccelerators;
  /** @var string */
  public $type;
  protected $collection_key = 'availableAccelerators';
  /** @param string[] */
  public function setAvailableAccelerators($availableAccelerators)
  {
    $this->availableAccelerators = $availableAccelerators;
  }
  /** @return string[] */
  public function getAvailableAccelerators()
  {
    return $this->availableAccelerators;
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

class GoogleCloudMlV1CheckTrialEarlyStoppingStateMetatdata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $study;
  /** @var string */
  public $trial;

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
  public function setStudy($study)
  {
    $this->study = $study;
  }
  /** @return string */
  public function getStudy()
  {
    return $this->study;
  }
  /** @param string */
  public function setTrial($trial)
  {
    $this->trial = $trial;
  }
  /** @return string */
  public function getTrial()
  {
    return $this->trial;
  }
}

class GoogleCloudMlV1CheckTrialEarlyStoppingStateRequest extends \Google\Model
{
}

class GoogleCloudMlV1CheckTrialEarlyStoppingStateResponse extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var bool */
  public $shouldStop;
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
  /** @param bool */
  public function setShouldStop($shouldStop)
  {
    $this->shouldStop = $shouldStop;
  }
  /** @return bool */
  public function getShouldStop()
  {
    return $this->shouldStop;
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

class GoogleCloudMlV1CompleteTrialRequest extends \Google\Model
{
  /** @var GoogleCloudMlV1Measurement */
  public $finalMeasurement;
  /** @var string */
  public $infeasibleReason;
  /** @var bool */
  public $trialInfeasible;
  protected $finalMeasurementType = GoogleCloudMlV1Measurement::class;
  protected $finalMeasurementDataType = '';
  /** @param GoogleCloudMlV1Measurement */
  public function setFinalMeasurement(GoogleCloudMlV1Measurement $finalMeasurement)
  {
    $this->finalMeasurement = $finalMeasurement;
  }
  /** @return GoogleCloudMlV1Measurement */
  public function getFinalMeasurement()
  {
    return $this->finalMeasurement;
  }
  /** @param string */
  public function setInfeasibleReason($infeasibleReason)
  {
    $this->infeasibleReason = $infeasibleReason;
  }
  /** @return string */
  public function getInfeasibleReason()
  {
    return $this->infeasibleReason;
  }
  /** @param bool */
  public function setTrialInfeasible($trialInfeasible)
  {
    $this->trialInfeasible = $trialInfeasible;
  }
  /** @return bool */
  public function getTrialInfeasible()
  {
    return $this->trialInfeasible;
  }
}

class GoogleCloudMlV1Config extends \Google\Model
{
  /** @var string */
  public $tpuServiceAccount;

  /** @param string */
  public function setTpuServiceAccount($tpuServiceAccount)
  {
    $this->tpuServiceAccount = $tpuServiceAccount;
  }
  /** @return string */
  public function getTpuServiceAccount()
  {
    return $this->tpuServiceAccount;
  }
}

class GoogleCloudMlV1ContainerPort extends \Google\Model
{
  /** @var int */
  public $containerPort;

  /** @param int */
  public function setContainerPort($containerPort)
  {
    $this->containerPort = $containerPort;
  }
  /** @return int */
  public function getContainerPort()
  {
    return $this->containerPort;
  }
}

class GoogleCloudMlV1ContainerSpec extends \Google\Collection
{
  /** @var string[] */
  public $args;
  /** @var string[] */
  public $command;
  /** @var GoogleCloudMlV1EnvVar[] */
  public $env;
  /** @var string */
  public $image;
  /** @var GoogleCloudMlV1ContainerPort[] */
  public $ports;
  protected $collection_key = 'ports';
  protected $envType = GoogleCloudMlV1EnvVar::class;
  protected $envDataType = 'array';
  protected $portsType = GoogleCloudMlV1ContainerPort::class;
  protected $portsDataType = 'array';
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
  /** @param string[] */
  public function setCommand($command)
  {
    $this->command = $command;
  }
  /** @return string[] */
  public function getCommand()
  {
    return $this->command;
  }
  /** @param GoogleCloudMlV1EnvVar[] */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /** @return GoogleCloudMlV1EnvVar[] */
  public function getEnv()
  {
    return $this->env;
  }
  /** @param string */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return string */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudMlV1ContainerPort[] */
  public function setPorts($ports)
  {
    $this->ports = $ports;
  }
  /** @return GoogleCloudMlV1ContainerPort[] */
  public function getPorts()
  {
    return $this->ports;
  }
}

class GoogleCloudMlV1DiskConfig extends \Google\Model
{
  /** @var int */
  public $bootDiskSizeGb;
  /** @var string */
  public $bootDiskType;

  /** @param int */
  public function setBootDiskSizeGb($bootDiskSizeGb)
  {
    $this->bootDiskSizeGb = $bootDiskSizeGb;
  }
  /** @return int */
  public function getBootDiskSizeGb()
  {
    return $this->bootDiskSizeGb;
  }
  /** @param string */
  public function setBootDiskType($bootDiskType)
  {
    $this->bootDiskType = $bootDiskType;
  }
  /** @return string */
  public function getBootDiskType()
  {
    return $this->bootDiskType;
  }
}

class GoogleCloudMlV1EncryptionConfig extends \Google\Model
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

class GoogleCloudMlV1EnvVar extends \Google\Model
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

class GoogleCloudMlV1ExplainRequest extends \Google\Model
{
  /** @var GoogleApiHttpBody */
  public $httpBody;
  protected $httpBodyType = GoogleApiHttpBody::class;
  protected $httpBodyDataType = '';
  /** @param GoogleApiHttpBody */
  public function setHttpBody(GoogleApiHttpBody $httpBody)
  {
    $this->httpBody = $httpBody;
  }
  /** @return GoogleApiHttpBody */
  public function getHttpBody()
  {
    return $this->httpBody;
  }
}

class GoogleCloudMlV1ExplanationConfig extends \Google\Model
{
  /** @var GoogleCloudMlV1IntegratedGradientsAttribution */
  public $integratedGradientsAttribution;
  /** @var GoogleCloudMlV1SampledShapleyAttribution */
  public $sampledShapleyAttribution;
  /** @var GoogleCloudMlV1XraiAttribution */
  public $xraiAttribution;
  protected $integratedGradientsAttributionType = GoogleCloudMlV1IntegratedGradientsAttribution::class;
  protected $integratedGradientsAttributionDataType = '';
  protected $sampledShapleyAttributionType = GoogleCloudMlV1SampledShapleyAttribution::class;
  protected $sampledShapleyAttributionDataType = '';
  protected $xraiAttributionType = GoogleCloudMlV1XraiAttribution::class;
  protected $xraiAttributionDataType = '';
  /** @param GoogleCloudMlV1IntegratedGradientsAttribution */
  public function setIntegratedGradientsAttribution(GoogleCloudMlV1IntegratedGradientsAttribution $integratedGradientsAttribution)
  {
    $this->integratedGradientsAttribution = $integratedGradientsAttribution;
  }
  /** @return GoogleCloudMlV1IntegratedGradientsAttribution */
  public function getIntegratedGradientsAttribution()
  {
    return $this->integratedGradientsAttribution;
  }
  /** @param GoogleCloudMlV1SampledShapleyAttribution */
  public function setSampledShapleyAttribution(GoogleCloudMlV1SampledShapleyAttribution $sampledShapleyAttribution)
  {
    $this->sampledShapleyAttribution = $sampledShapleyAttribution;
  }
  /** @return GoogleCloudMlV1SampledShapleyAttribution */
  public function getSampledShapleyAttribution()
  {
    return $this->sampledShapleyAttribution;
  }
  /** @param GoogleCloudMlV1XraiAttribution */
  public function setXraiAttribution(GoogleCloudMlV1XraiAttribution $xraiAttribution)
  {
    $this->xraiAttribution = $xraiAttribution;
  }
  /** @return GoogleCloudMlV1XraiAttribution */
  public function getXraiAttribution()
  {
    return $this->xraiAttribution;
  }
}

class GoogleCloudMlV1GetConfigResponse extends \Google\Model
{
  /** @var GoogleCloudMlV1Config */
  public $config;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $serviceAccountProject;
  protected $configType = GoogleCloudMlV1Config::class;
  protected $configDataType = '';
  /** @param GoogleCloudMlV1Config */
  public function setConfig(GoogleCloudMlV1Config $config)
  {
    $this->config = $config;
  }
  /** @return GoogleCloudMlV1Config */
  public function getConfig()
  {
    return $this->config;
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
  /** @param string */
  public function setServiceAccountProject($serviceAccountProject)
  {
    $this->serviceAccountProject = $serviceAccountProject;
  }
  /** @return string */
  public function getServiceAccountProject()
  {
    return $this->serviceAccountProject;
  }
}

class GoogleCloudMlV1HyperparameterOutput extends \Google\Collection
{
  /** @var GoogleCloudMlV1HyperparameterOutputHyperparameterMetric[] */
  public $allMetrics;
  /** @var GoogleCloudMlV1BuiltInAlgorithmOutput */
  public $builtInAlgorithmOutput;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudMlV1HyperparameterOutputHyperparameterMetric */
  public $finalMetric;
  /** @var string[] */
  public $hyperparameters;
  /** @var bool */
  public $isTrialStoppedEarly;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $trialId;
  /** @var string[] */
  public $webAccessUris;
  protected $collection_key = 'allMetrics';
  protected $allMetricsType = GoogleCloudMlV1HyperparameterOutputHyperparameterMetric::class;
  protected $allMetricsDataType = 'array';
  protected $builtInAlgorithmOutputType = GoogleCloudMlV1BuiltInAlgorithmOutput::class;
  protected $builtInAlgorithmOutputDataType = '';
  protected $finalMetricType = GoogleCloudMlV1HyperparameterOutputHyperparameterMetric::class;
  protected $finalMetricDataType = '';
  /** @param GoogleCloudMlV1HyperparameterOutputHyperparameterMetric[] */
  public function setAllMetrics($allMetrics)
  {
    $this->allMetrics = $allMetrics;
  }
  /** @return GoogleCloudMlV1HyperparameterOutputHyperparameterMetric[] */
  public function getAllMetrics()
  {
    return $this->allMetrics;
  }
  /** @param GoogleCloudMlV1BuiltInAlgorithmOutput */
  public function setBuiltInAlgorithmOutput(GoogleCloudMlV1BuiltInAlgorithmOutput $builtInAlgorithmOutput)
  {
    $this->builtInAlgorithmOutput = $builtInAlgorithmOutput;
  }
  /** @return GoogleCloudMlV1BuiltInAlgorithmOutput */
  public function getBuiltInAlgorithmOutput()
  {
    return $this->builtInAlgorithmOutput;
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
  /** @param GoogleCloudMlV1HyperparameterOutputHyperparameterMetric */
  public function setFinalMetric(GoogleCloudMlV1HyperparameterOutputHyperparameterMetric $finalMetric)
  {
    $this->finalMetric = $finalMetric;
  }
  /** @return GoogleCloudMlV1HyperparameterOutputHyperparameterMetric */
  public function getFinalMetric()
  {
    return $this->finalMetric;
  }
  /** @param string[] */
  public function setHyperparameters($hyperparameters)
  {
    $this->hyperparameters = $hyperparameters;
  }
  /** @return string[] */
  public function getHyperparameters()
  {
    return $this->hyperparameters;
  }
  /** @param bool */
  public function setIsTrialStoppedEarly($isTrialStoppedEarly)
  {
    $this->isTrialStoppedEarly = $isTrialStoppedEarly;
  }
  /** @return bool */
  public function getIsTrialStoppedEarly()
  {
    return $this->isTrialStoppedEarly;
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
  public function setTrialId($trialId)
  {
    $this->trialId = $trialId;
  }
  /** @return string */
  public function getTrialId()
  {
    return $this->trialId;
  }
  /** @param string[] */
  public function setWebAccessUris($webAccessUris)
  {
    $this->webAccessUris = $webAccessUris;
  }
  /** @return string[] */
  public function getWebAccessUris()
  {
    return $this->webAccessUris;
  }
}

class GoogleCloudMlV1HyperparameterOutputHyperparameterMetric extends \Google\Model
{
  public $objectiveValue;
  /** @var string */
  public $trainingStep;

  public function setObjectiveValue($objectiveValue)
  {
    $this->objectiveValue = $objectiveValue;
  }
  public function getObjectiveValue()
  {
    return $this->objectiveValue;
  }
  /** @param string */
  public function setTrainingStep($trainingStep)
  {
    $this->trainingStep = $trainingStep;
  }
  /** @return string */
  public function getTrainingStep()
  {
    return $this->trainingStep;
  }
}

class GoogleCloudMlV1HyperparameterSpec extends \Google\Collection
{
  /** @var string */
  public $algorithm;
  /** @var bool */
  public $enableTrialEarlyStopping;
  /** @var string */
  public $goal;
  /** @var string */
  public $hyperparameterMetricTag;
  /** @var int */
  public $maxFailedTrials;
  /** @var int */
  public $maxParallelTrials;
  /** @var int */
  public $maxTrials;
  /** @var GoogleCloudMlV1ParameterSpec[] */
  public $params;
  /** @var string */
  public $resumePreviousJobId;
  protected $collection_key = 'params';
  protected $paramsType = GoogleCloudMlV1ParameterSpec::class;
  protected $paramsDataType = 'array';
  /** @param string */
  public function setAlgorithm($algorithm)
  {
    $this->algorithm = $algorithm;
  }
  /** @return string */
  public function getAlgorithm()
  {
    return $this->algorithm;
  }
  /** @param bool */
  public function setEnableTrialEarlyStopping($enableTrialEarlyStopping)
  {
    $this->enableTrialEarlyStopping = $enableTrialEarlyStopping;
  }
  /** @return bool */
  public function getEnableTrialEarlyStopping()
  {
    return $this->enableTrialEarlyStopping;
  }
  /** @param string */
  public function setGoal($goal)
  {
    $this->goal = $goal;
  }
  /** @return string */
  public function getGoal()
  {
    return $this->goal;
  }
  /** @param string */
  public function setHyperparameterMetricTag($hyperparameterMetricTag)
  {
    $this->hyperparameterMetricTag = $hyperparameterMetricTag;
  }
  /** @return string */
  public function getHyperparameterMetricTag()
  {
    return $this->hyperparameterMetricTag;
  }
  /** @param int */
  public function setMaxFailedTrials($maxFailedTrials)
  {
    $this->maxFailedTrials = $maxFailedTrials;
  }
  /** @return int */
  public function getMaxFailedTrials()
  {
    return $this->maxFailedTrials;
  }
  /** @param int */
  public function setMaxParallelTrials($maxParallelTrials)
  {
    $this->maxParallelTrials = $maxParallelTrials;
  }
  /** @return int */
  public function getMaxParallelTrials()
  {
    return $this->maxParallelTrials;
  }
  /** @param int */
  public function setMaxTrials($maxTrials)
  {
    $this->maxTrials = $maxTrials;
  }
  /** @return int */
  public function getMaxTrials()
  {
    return $this->maxTrials;
  }
  /** @param GoogleCloudMlV1ParameterSpec[] */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /** @return GoogleCloudMlV1ParameterSpec[] */
  public function getParams()
  {
    return $this->params;
  }
  /** @param string */
  public function setResumePreviousJobId($resumePreviousJobId)
  {
    $this->resumePreviousJobId = $resumePreviousJobId;
  }
  /** @return string */
  public function getResumePreviousJobId()
  {
    return $this->resumePreviousJobId;
  }
}

class GoogleCloudMlV1IntegratedGradientsAttribution extends \Google\Model
{
  /** @var int */
  public $numIntegralSteps;

  /** @param int */
  public function setNumIntegralSteps($numIntegralSteps)
  {
    $this->numIntegralSteps = $numIntegralSteps;
  }
  /** @return int */
  public function getNumIntegralSteps()
  {
    return $this->numIntegralSteps;
  }
}

class GoogleCloudMlV1Job extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $etag;
  /** @var string */
  public $jobId;
  /** @var string */
  public $jobPosition;
  /** @var string[] */
  public $labels;
  /** @var GoogleCloudMlV1PredictionInput */
  public $predictionInput;
  /** @var GoogleCloudMlV1PredictionOutput */
  public $predictionOutput;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var GoogleCloudMlV1TrainingInput */
  public $trainingInput;
  /** @var GoogleCloudMlV1TrainingOutput */
  public $trainingOutput;
  protected $predictionInputType = GoogleCloudMlV1PredictionInput::class;
  protected $predictionInputDataType = '';
  protected $predictionOutputType = GoogleCloudMlV1PredictionOutput::class;
  protected $predictionOutputDataType = '';
  protected $trainingInputType = GoogleCloudMlV1TrainingInput::class;
  protected $trainingInputDataType = '';
  protected $trainingOutputType = GoogleCloudMlV1TrainingOutput::class;
  protected $trainingOutputDataType = '';
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
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /** @return string */
  public function getJobId()
  {
    return $this->jobId;
  }
  /** @param string */
  public function setJobPosition($jobPosition)
  {
    $this->jobPosition = $jobPosition;
  }
  /** @return string */
  public function getJobPosition()
  {
    return $this->jobPosition;
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
  /** @param GoogleCloudMlV1PredictionInput */
  public function setPredictionInput(GoogleCloudMlV1PredictionInput $predictionInput)
  {
    $this->predictionInput = $predictionInput;
  }
  /** @return GoogleCloudMlV1PredictionInput */
  public function getPredictionInput()
  {
    return $this->predictionInput;
  }
  /** @param GoogleCloudMlV1PredictionOutput */
  public function setPredictionOutput(GoogleCloudMlV1PredictionOutput $predictionOutput)
  {
    $this->predictionOutput = $predictionOutput;
  }
  /** @return GoogleCloudMlV1PredictionOutput */
  public function getPredictionOutput()
  {
    return $this->predictionOutput;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param GoogleCloudMlV1TrainingInput */
  public function setTrainingInput(GoogleCloudMlV1TrainingInput $trainingInput)
  {
    $this->trainingInput = $trainingInput;
  }
  /** @return GoogleCloudMlV1TrainingInput */
  public function getTrainingInput()
  {
    return $this->trainingInput;
  }
  /** @param GoogleCloudMlV1TrainingOutput */
  public function setTrainingOutput(GoogleCloudMlV1TrainingOutput $trainingOutput)
  {
    $this->trainingOutput = $trainingOutput;
  }
  /** @return GoogleCloudMlV1TrainingOutput */
  public function getTrainingOutput()
  {
    return $this->trainingOutput;
  }
}

class GoogleCloudMlV1ListJobsResponse extends \Google\Collection
{
  /** @var GoogleCloudMlV1Job[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
  protected $jobsType = GoogleCloudMlV1Job::class;
  protected $jobsDataType = 'array';
  /** @param GoogleCloudMlV1Job[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return GoogleCloudMlV1Job[] */
  public function getJobs()
  {
    return $this->jobs;
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

class GoogleCloudMlV1ListLocationsResponse extends \Google\Collection
{
  /** @var GoogleCloudMlV1Location[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = GoogleCloudMlV1Location::class;
  protected $locationsDataType = 'array';
  /** @param GoogleCloudMlV1Location[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return GoogleCloudMlV1Location[] */
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

class GoogleCloudMlV1ListModelsResponse extends \Google\Collection
{
  /** @var GoogleCloudMlV1Model[] */
  public $models;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'models';
  protected $modelsType = GoogleCloudMlV1Model::class;
  protected $modelsDataType = 'array';
  /** @param GoogleCloudMlV1Model[] */
  public function setModels($models)
  {
    $this->models = $models;
  }
  /** @return GoogleCloudMlV1Model[] */
  public function getModels()
  {
    return $this->models;
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

class GoogleCloudMlV1ListOptimalTrialsRequest extends \Google\Model
{
}

class GoogleCloudMlV1ListOptimalTrialsResponse extends \Google\Collection
{
  /** @var GoogleCloudMlV1Trial[] */
  public $trials;
  protected $collection_key = 'trials';
  protected $trialsType = GoogleCloudMlV1Trial::class;
  protected $trialsDataType = 'array';
  /** @param GoogleCloudMlV1Trial[] */
  public function setTrials($trials)
  {
    $this->trials = $trials;
  }
  /** @return GoogleCloudMlV1Trial[] */
  public function getTrials()
  {
    return $this->trials;
  }
}

class GoogleCloudMlV1ListStudiesResponse extends \Google\Collection
{
  /** @var GoogleCloudMlV1Study[] */
  public $studies;
  protected $collection_key = 'studies';
  protected $studiesType = GoogleCloudMlV1Study::class;
  protected $studiesDataType = 'array';
  /** @param GoogleCloudMlV1Study[] */
  public function setStudies($studies)
  {
    $this->studies = $studies;
  }
  /** @return GoogleCloudMlV1Study[] */
  public function getStudies()
  {
    return $this->studies;
  }
}

class GoogleCloudMlV1ListTrialsResponse extends \Google\Collection
{
  /** @var GoogleCloudMlV1Trial[] */
  public $trials;
  protected $collection_key = 'trials';
  protected $trialsType = GoogleCloudMlV1Trial::class;
  protected $trialsDataType = 'array';
  /** @param GoogleCloudMlV1Trial[] */
  public function setTrials($trials)
  {
    $this->trials = $trials;
  }
  /** @return GoogleCloudMlV1Trial[] */
  public function getTrials()
  {
    return $this->trials;
  }
}

class GoogleCloudMlV1ListVersionsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleCloudMlV1Version[] */
  public $versions;
  protected $collection_key = 'versions';
  protected $versionsType = GoogleCloudMlV1Version::class;
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
  /** @param GoogleCloudMlV1Version[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return GoogleCloudMlV1Version[] */
  public function getVersions()
  {
    return $this->versions;
  }
}

class GoogleCloudMlV1Location extends \Google\Collection
{
  /** @var GoogleCloudMlV1Capability[] */
  public $capabilities;
  /** @var string */
  public $name;
  protected $collection_key = 'capabilities';
  protected $capabilitiesType = GoogleCloudMlV1Capability::class;
  protected $capabilitiesDataType = 'array';
  /** @param GoogleCloudMlV1Capability[] */
  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }
  /** @return GoogleCloudMlV1Capability[] */
  public function getCapabilities()
  {
    return $this->capabilities;
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

class GoogleCloudMlV1ManualScaling extends \Google\Model
{
  /** @var int */
  public $nodes;

  /** @param int */
  public function setNodes($nodes)
  {
    $this->nodes = $nodes;
  }
  /** @return int */
  public function getNodes()
  {
    return $this->nodes;
  }
}

class GoogleCloudMlV1Measurement extends \Google\Collection
{
  /** @var string */
  public $elapsedTime;
  /** @var GoogleCloudMlV1MeasurementMetric[] */
  public $metrics;
  /** @var string */
  public $stepCount;
  protected $collection_key = 'metrics';
  protected $metricsType = GoogleCloudMlV1MeasurementMetric::class;
  protected $metricsDataType = 'array';
  /** @param string */
  public function setElapsedTime($elapsedTime)
  {
    $this->elapsedTime = $elapsedTime;
  }
  /** @return string */
  public function getElapsedTime()
  {
    return $this->elapsedTime;
  }
  /** @param GoogleCloudMlV1MeasurementMetric[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudMlV1MeasurementMetric[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param string */
  public function setStepCount($stepCount)
  {
    $this->stepCount = $stepCount;
  }
  /** @return string */
  public function getStepCount()
  {
    return $this->stepCount;
  }
}

class GoogleCloudMlV1MeasurementMetric extends \Google\Model
{
  /** @var string */
  public $metric;
  public $value;

  /** @param string */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /** @return string */
  public function getMetric()
  {
    return $this->metric;
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

class GoogleCloudMlV1MetricSpec extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var int */
  public $target;

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
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /** @return int */
  public function getTarget()
  {
    return $this->target;
  }
}

class GoogleCloudMlV1Model extends \Google\Collection
{
  /** @var GoogleCloudMlV1Version */
  public $defaultVersion;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var bool */
  public $onlinePredictionConsoleLogging;
  /** @var bool */
  public $onlinePredictionLogging;
  /** @var string[] */
  public $regions;
  protected $collection_key = 'regions';
  protected $defaultVersionType = GoogleCloudMlV1Version::class;
  protected $defaultVersionDataType = '';
  /** @param GoogleCloudMlV1Version */
  public function setDefaultVersion(GoogleCloudMlV1Version $defaultVersion)
  {
    $this->defaultVersion = $defaultVersion;
  }
  /** @return GoogleCloudMlV1Version */
  public function getDefaultVersion()
  {
    return $this->defaultVersion;
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
  /** @param bool */
  public function setOnlinePredictionConsoleLogging($onlinePredictionConsoleLogging)
  {
    $this->onlinePredictionConsoleLogging = $onlinePredictionConsoleLogging;
  }
  /** @return bool */
  public function getOnlinePredictionConsoleLogging()
  {
    return $this->onlinePredictionConsoleLogging;
  }
  /** @param bool */
  public function setOnlinePredictionLogging($onlinePredictionLogging)
  {
    $this->onlinePredictionLogging = $onlinePredictionLogging;
  }
  /** @return bool */
  public function getOnlinePredictionLogging()
  {
    return $this->onlinePredictionLogging;
  }
  /** @param string[] */
  public function setRegions($regions)
  {
    $this->regions = $regions;
  }
  /** @return string[] */
  public function getRegions()
  {
    return $this->regions;
  }
}

class GoogleCloudMlV1OperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var bool */
  public $isCancellationRequested;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $modelName;
  /** @var string */
  public $operationType;
  /** @var string */
  public $projectNumber;
  /** @var string */
  public $startTime;
  /** @var GoogleCloudMlV1Version */
  public $version;
  protected $versionType = GoogleCloudMlV1Version::class;
  protected $versionDataType = '';
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
  /** @param bool */
  public function setIsCancellationRequested($isCancellationRequested)
  {
    $this->isCancellationRequested = $isCancellationRequested;
  }
  /** @return bool */
  public function getIsCancellationRequested()
  {
    return $this->isCancellationRequested;
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
  public function setModelName($modelName)
  {
    $this->modelName = $modelName;
  }
  /** @return string */
  public function getModelName()
  {
    return $this->modelName;
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
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /** @param GoogleCloudMlV1Version */
  public function setVersion(GoogleCloudMlV1Version $version)
  {
    $this->version = $version;
  }
  /** @return GoogleCloudMlV1Version */
  public function getVersion()
  {
    return $this->version;
  }
}

class GoogleCloudMlV1ParameterSpec extends \Google\Collection
{
  /** @var string[] */
  public $categoricalValues;
  public $discreteValues;
  public $maxValue;
  public $minValue;
  /** @var string */
  public $parameterName;
  /** @var string */
  public $scaleType;
  /** @var string */
  public $type;
  protected $collection_key = 'discreteValues';
  /** @param string[] */
  public function setCategoricalValues($categoricalValues)
  {
    $this->categoricalValues = $categoricalValues;
  }
  /** @return string[] */
  public function getCategoricalValues()
  {
    return $this->categoricalValues;
  }
  public function setDiscreteValues($discreteValues)
  {
    $this->discreteValues = $discreteValues;
  }
  public function getDiscreteValues()
  {
    return $this->discreteValues;
  }
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  public function getMinValue()
  {
    return $this->minValue;
  }
  /** @param string */
  public function setParameterName($parameterName)
  {
    $this->parameterName = $parameterName;
  }
  /** @return string */
  public function getParameterName()
  {
    return $this->parameterName;
  }
  /** @param string */
  public function setScaleType($scaleType)
  {
    $this->scaleType = $scaleType;
  }
  /** @return string */
  public function getScaleType()
  {
    return $this->scaleType;
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

class GoogleCloudMlV1PredictRequest extends \Google\Model
{
  /** @var GoogleApiHttpBody */
  public $httpBody;
  protected $httpBodyType = GoogleApiHttpBody::class;
  protected $httpBodyDataType = '';
  /** @param GoogleApiHttpBody */
  public function setHttpBody(GoogleApiHttpBody $httpBody)
  {
    $this->httpBody = $httpBody;
  }
  /** @return GoogleApiHttpBody */
  public function getHttpBody()
  {
    return $this->httpBody;
  }
}

class GoogleCloudMlV1PredictionInput extends \Google\Collection
{
  /** @var string */
  public $batchSize;
  /** @var string */
  public $dataFormat;
  /** @var string[] */
  public $inputPaths;
  /** @var string */
  public $maxWorkerCount;
  /** @var string */
  public $modelName;
  /** @var string */
  public $outputDataFormat;
  /** @var string */
  public $outputPath;
  /** @var string */
  public $region;
  /** @var string */
  public $runtimeVersion;
  /** @var string */
  public $signatureName;
  /** @var string */
  public $uri;
  /** @var string */
  public $versionName;
  protected $collection_key = 'inputPaths';
  /** @param string */
  public function setBatchSize($batchSize)
  {
    $this->batchSize = $batchSize;
  }
  /** @return string */
  public function getBatchSize()
  {
    return $this->batchSize;
  }
  /** @param string */
  public function setDataFormat($dataFormat)
  {
    $this->dataFormat = $dataFormat;
  }
  /** @return string */
  public function getDataFormat()
  {
    return $this->dataFormat;
  }
  /** @param string[] */
  public function setInputPaths($inputPaths)
  {
    $this->inputPaths = $inputPaths;
  }
  /** @return string[] */
  public function getInputPaths()
  {
    return $this->inputPaths;
  }
  /** @param string */
  public function setMaxWorkerCount($maxWorkerCount)
  {
    $this->maxWorkerCount = $maxWorkerCount;
  }
  /** @return string */
  public function getMaxWorkerCount()
  {
    return $this->maxWorkerCount;
  }
  /** @param string */
  public function setModelName($modelName)
  {
    $this->modelName = $modelName;
  }
  /** @return string */
  public function getModelName()
  {
    return $this->modelName;
  }
  /** @param string */
  public function setOutputDataFormat($outputDataFormat)
  {
    $this->outputDataFormat = $outputDataFormat;
  }
  /** @return string */
  public function getOutputDataFormat()
  {
    return $this->outputDataFormat;
  }
  /** @param string */
  public function setOutputPath($outputPath)
  {
    $this->outputPath = $outputPath;
  }
  /** @return string */
  public function getOutputPath()
  {
    return $this->outputPath;
  }
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
  /** @param string */
  public function setRuntimeVersion($runtimeVersion)
  {
    $this->runtimeVersion = $runtimeVersion;
  }
  /** @return string */
  public function getRuntimeVersion()
  {
    return $this->runtimeVersion;
  }
  /** @param string */
  public function setSignatureName($signatureName)
  {
    $this->signatureName = $signatureName;
  }
  /** @return string */
  public function getSignatureName()
  {
    return $this->signatureName;
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

class GoogleCloudMlV1PredictionOutput extends \Google\Model
{
  /** @var string */
  public $errorCount;
  public $nodeHours;
  /** @var string */
  public $outputPath;
  /** @var string */
  public $predictionCount;

  /** @param string */
  public function setErrorCount($errorCount)
  {
    $this->errorCount = $errorCount;
  }
  /** @return string */
  public function getErrorCount()
  {
    return $this->errorCount;
  }
  public function setNodeHours($nodeHours)
  {
    $this->nodeHours = $nodeHours;
  }
  public function getNodeHours()
  {
    return $this->nodeHours;
  }
  /** @param string */
  public function setOutputPath($outputPath)
  {
    $this->outputPath = $outputPath;
  }
  /** @return string */
  public function getOutputPath()
  {
    return $this->outputPath;
  }
  /** @param string */
  public function setPredictionCount($predictionCount)
  {
    $this->predictionCount = $predictionCount;
  }
  /** @return string */
  public function getPredictionCount()
  {
    return $this->predictionCount;
  }
}

class GoogleCloudMlV1ReplicaConfig extends \Google\Collection
{
  /** @var GoogleCloudMlV1AcceleratorConfig */
  public $acceleratorConfig;
  /** @var string[] */
  public $containerArgs;
  /** @var string[] */
  public $containerCommand;
  /** @var GoogleCloudMlV1DiskConfig */
  public $diskConfig;
  /** @var string */
  public $imageUri;
  /** @var string */
  public $tpuTfVersion;
  protected $collection_key = 'containerCommand';
  protected $acceleratorConfigType = GoogleCloudMlV1AcceleratorConfig::class;
  protected $acceleratorConfigDataType = '';
  protected $diskConfigType = GoogleCloudMlV1DiskConfig::class;
  protected $diskConfigDataType = '';
  /** @param GoogleCloudMlV1AcceleratorConfig */
  public function setAcceleratorConfig(GoogleCloudMlV1AcceleratorConfig $acceleratorConfig)
  {
    $this->acceleratorConfig = $acceleratorConfig;
  }
  /** @return GoogleCloudMlV1AcceleratorConfig */
  public function getAcceleratorConfig()
  {
    return $this->acceleratorConfig;
  }
  /** @param string[] */
  public function setContainerArgs($containerArgs)
  {
    $this->containerArgs = $containerArgs;
  }
  /** @return string[] */
  public function getContainerArgs()
  {
    return $this->containerArgs;
  }
  /** @param string[] */
  public function setContainerCommand($containerCommand)
  {
    $this->containerCommand = $containerCommand;
  }
  /** @return string[] */
  public function getContainerCommand()
  {
    return $this->containerCommand;
  }
  /** @param GoogleCloudMlV1DiskConfig */
  public function setDiskConfig(GoogleCloudMlV1DiskConfig $diskConfig)
  {
    $this->diskConfig = $diskConfig;
  }
  /** @return GoogleCloudMlV1DiskConfig */
  public function getDiskConfig()
  {
    return $this->diskConfig;
  }
  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
  }
  /** @param string */
  public function setTpuTfVersion($tpuTfVersion)
  {
    $this->tpuTfVersion = $tpuTfVersion;
  }
  /** @return string */
  public function getTpuTfVersion()
  {
    return $this->tpuTfVersion;
  }
}

class GoogleCloudMlV1RequestLoggingConfig extends \Google\Model
{
  /** @var string */
  public $bigqueryTableName;
  public $samplingPercentage;

  /** @param string */
  public function setBigqueryTableName($bigqueryTableName)
  {
    $this->bigqueryTableName = $bigqueryTableName;
  }
  /** @return string */
  public function getBigqueryTableName()
  {
    return $this->bigqueryTableName;
  }
  public function setSamplingPercentage($samplingPercentage)
  {
    $this->samplingPercentage = $samplingPercentage;
  }
  public function getSamplingPercentage()
  {
    return $this->samplingPercentage;
  }
}

class GoogleCloudMlV1RouteMap extends \Google\Model
{
  /** @var string */
  public $health;
  /** @var string */
  public $predict;

  /** @param string */
  public function setHealth($health)
  {
    $this->health = $health;
  }
  /** @return string */
  public function getHealth()
  {
    return $this->health;
  }
  /** @param string */
  public function setPredict($predict)
  {
    $this->predict = $predict;
  }
  /** @return string */
  public function getPredict()
  {
    return $this->predict;
  }
}

class GoogleCloudMlV1SampledShapleyAttribution extends \Google\Model
{
  /** @var int */
  public $numPaths;

  /** @param int */
  public function setNumPaths($numPaths)
  {
    $this->numPaths = $numPaths;
  }
  /** @return int */
  public function getNumPaths()
  {
    return $this->numPaths;
  }
}

class GoogleCloudMlV1Scheduling extends \Google\Model
{
  /** @var string */
  public $maxRunningTime;
  /** @var string */
  public $maxWaitTime;
  /** @var int */
  public $priority;

  /** @param string */
  public function setMaxRunningTime($maxRunningTime)
  {
    $this->maxRunningTime = $maxRunningTime;
  }
  /** @return string */
  public function getMaxRunningTime()
  {
    return $this->maxRunningTime;
  }
  /** @param string */
  public function setMaxWaitTime($maxWaitTime)
  {
    $this->maxWaitTime = $maxWaitTime;
  }
  /** @return string */
  public function getMaxWaitTime()
  {
    return $this->maxWaitTime;
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
}

class GoogleCloudMlV1SetDefaultVersionRequest extends \Google\Model
{
}

class GoogleCloudMlV1StopTrialRequest extends \Google\Model
{
}

class GoogleCloudMlV1Study extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $inactiveReason;
  /** @var string */
  public $name;
  /** @var string */
  public $state;
  /** @var GoogleCloudMlV1StudyConfig */
  public $studyConfig;
  protected $studyConfigType = GoogleCloudMlV1StudyConfig::class;
  protected $studyConfigDataType = '';
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
  public function setInactiveReason($inactiveReason)
  {
    $this->inactiveReason = $inactiveReason;
  }
  /** @return string */
  public function getInactiveReason()
  {
    return $this->inactiveReason;
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
  /** @param GoogleCloudMlV1StudyConfig */
  public function setStudyConfig(GoogleCloudMlV1StudyConfig $studyConfig)
  {
    $this->studyConfig = $studyConfig;
  }
  /** @return GoogleCloudMlV1StudyConfig */
  public function getStudyConfig()
  {
    return $this->studyConfig;
  }
}

class GoogleCloudMlV1StudyConfig extends \Google\Collection
{
  /** @var string */
  public $algorithm;
  /** @var GoogleCloudMlV1AutomatedStoppingConfig */
  public $automatedStoppingConfig;
  /** @var GoogleCloudMlV1StudyConfigMetricSpec[] */
  public $metrics;
  /** @var GoogleCloudMlV1StudyConfigParameterSpec[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $automatedStoppingConfigType = GoogleCloudMlV1AutomatedStoppingConfig::class;
  protected $automatedStoppingConfigDataType = '';
  protected $metricsType = GoogleCloudMlV1StudyConfigMetricSpec::class;
  protected $metricsDataType = 'array';
  protected $parametersType = GoogleCloudMlV1StudyConfigParameterSpec::class;
  protected $parametersDataType = 'array';
  /** @param string */
  public function setAlgorithm($algorithm)
  {
    $this->algorithm = $algorithm;
  }
  /** @return string */
  public function getAlgorithm()
  {
    return $this->algorithm;
  }
  /** @param GoogleCloudMlV1AutomatedStoppingConfig */
  public function setAutomatedStoppingConfig(GoogleCloudMlV1AutomatedStoppingConfig $automatedStoppingConfig)
  {
    $this->automatedStoppingConfig = $automatedStoppingConfig;
  }
  /** @return GoogleCloudMlV1AutomatedStoppingConfig */
  public function getAutomatedStoppingConfig()
  {
    return $this->automatedStoppingConfig;
  }
  /** @param GoogleCloudMlV1StudyConfigMetricSpec[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return GoogleCloudMlV1StudyConfigMetricSpec[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param GoogleCloudMlV1StudyConfigParameterSpec[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudMlV1StudyConfigParameterSpec[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class GoogleCloudMlV1StudyConfigMetricSpec extends \Google\Model
{
  /** @var string */
  public $goal;
  /** @var string */
  public $metric;

  /** @param string */
  public function setGoal($goal)
  {
    $this->goal = $goal;
  }
  /** @return string */
  public function getGoal()
  {
    return $this->goal;
  }
  /** @param string */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /** @return string */
  public function getMetric()
  {
    return $this->metric;
  }
}

class GoogleCloudMlV1StudyConfigParameterSpec extends \Google\Collection
{
  /** @var GoogleCloudMlV1StudyConfigParameterSpecCategoricalValueSpec */
  public $categoricalValueSpec;
  /** @var GoogleCloudMlV1StudyConfigParameterSpec[] */
  public $childParameterSpecs;
  /** @var GoogleCloudMlV1StudyConfigParameterSpecDiscreteValueSpec */
  public $discreteValueSpec;
  /** @var GoogleCloudMlV1StudyConfigParameterSpecDoubleValueSpec */
  public $doubleValueSpec;
  /** @var GoogleCloudMlV1StudyConfigParameterSpecIntegerValueSpec */
  public $integerValueSpec;
  /** @var string */
  public $parameter;
  /** @var GoogleCloudMlV1StudyConfigParameterSpecMatchingParentCategoricalValueSpec */
  public $parentCategoricalValues;
  /** @var GoogleCloudMlV1StudyConfigParameterSpecMatchingParentDiscreteValueSpec */
  public $parentDiscreteValues;
  /** @var GoogleCloudMlV1StudyConfigParameterSpecMatchingParentIntValueSpec */
  public $parentIntValues;
  /** @var string */
  public $scaleType;
  /** @var string */
  public $type;
  protected $collection_key = 'childParameterSpecs';
  protected $categoricalValueSpecType = GoogleCloudMlV1StudyConfigParameterSpecCategoricalValueSpec::class;
  protected $categoricalValueSpecDataType = '';
  protected $childParameterSpecsType = GoogleCloudMlV1StudyConfigParameterSpec::class;
  protected $childParameterSpecsDataType = 'array';
  protected $discreteValueSpecType = GoogleCloudMlV1StudyConfigParameterSpecDiscreteValueSpec::class;
  protected $discreteValueSpecDataType = '';
  protected $doubleValueSpecType = GoogleCloudMlV1StudyConfigParameterSpecDoubleValueSpec::class;
  protected $doubleValueSpecDataType = '';
  protected $integerValueSpecType = GoogleCloudMlV1StudyConfigParameterSpecIntegerValueSpec::class;
  protected $integerValueSpecDataType = '';
  protected $parentCategoricalValuesType = GoogleCloudMlV1StudyConfigParameterSpecMatchingParentCategoricalValueSpec::class;
  protected $parentCategoricalValuesDataType = '';
  protected $parentDiscreteValuesType = GoogleCloudMlV1StudyConfigParameterSpecMatchingParentDiscreteValueSpec::class;
  protected $parentDiscreteValuesDataType = '';
  protected $parentIntValuesType = GoogleCloudMlV1StudyConfigParameterSpecMatchingParentIntValueSpec::class;
  protected $parentIntValuesDataType = '';
  /** @param GoogleCloudMlV1StudyConfigParameterSpecCategoricalValueSpec */
  public function setCategoricalValueSpec(GoogleCloudMlV1StudyConfigParameterSpecCategoricalValueSpec $categoricalValueSpec)
  {
    $this->categoricalValueSpec = $categoricalValueSpec;
  }
  /** @return GoogleCloudMlV1StudyConfigParameterSpecCategoricalValueSpec */
  public function getCategoricalValueSpec()
  {
    return $this->categoricalValueSpec;
  }
  /** @param GoogleCloudMlV1StudyConfigParameterSpec[] */
  public function setChildParameterSpecs($childParameterSpecs)
  {
    $this->childParameterSpecs = $childParameterSpecs;
  }
  /** @return GoogleCloudMlV1StudyConfigParameterSpec[] */
  public function getChildParameterSpecs()
  {
    return $this->childParameterSpecs;
  }
  /** @param GoogleCloudMlV1StudyConfigParameterSpecDiscreteValueSpec */
  public function setDiscreteValueSpec(GoogleCloudMlV1StudyConfigParameterSpecDiscreteValueSpec $discreteValueSpec)
  {
    $this->discreteValueSpec = $discreteValueSpec;
  }
  /** @return GoogleCloudMlV1StudyConfigParameterSpecDiscreteValueSpec */
  public function getDiscreteValueSpec()
  {
    return $this->discreteValueSpec;
  }
  /** @param GoogleCloudMlV1StudyConfigParameterSpecDoubleValueSpec */
  public function setDoubleValueSpec(GoogleCloudMlV1StudyConfigParameterSpecDoubleValueSpec $doubleValueSpec)
  {
    $this->doubleValueSpec = $doubleValueSpec;
  }
  /** @return GoogleCloudMlV1StudyConfigParameterSpecDoubleValueSpec */
  public function getDoubleValueSpec()
  {
    return $this->doubleValueSpec;
  }
  /** @param GoogleCloudMlV1StudyConfigParameterSpecIntegerValueSpec */
  public function setIntegerValueSpec(GoogleCloudMlV1StudyConfigParameterSpecIntegerValueSpec $integerValueSpec)
  {
    $this->integerValueSpec = $integerValueSpec;
  }
  /** @return GoogleCloudMlV1StudyConfigParameterSpecIntegerValueSpec */
  public function getIntegerValueSpec()
  {
    return $this->integerValueSpec;
  }
  /** @param string */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return string */
  public function getParameter()
  {
    return $this->parameter;
  }
  /** @param GoogleCloudMlV1StudyConfigParameterSpecMatchingParentCategoricalValueSpec */
  public function setParentCategoricalValues(GoogleCloudMlV1StudyConfigParameterSpecMatchingParentCategoricalValueSpec $parentCategoricalValues)
  {
    $this->parentCategoricalValues = $parentCategoricalValues;
  }
  /** @return GoogleCloudMlV1StudyConfigParameterSpecMatchingParentCategoricalValueSpec */
  public function getParentCategoricalValues()
  {
    return $this->parentCategoricalValues;
  }
  /** @param GoogleCloudMlV1StudyConfigParameterSpecMatchingParentDiscreteValueSpec */
  public function setParentDiscreteValues(GoogleCloudMlV1StudyConfigParameterSpecMatchingParentDiscreteValueSpec $parentDiscreteValues)
  {
    $this->parentDiscreteValues = $parentDiscreteValues;
  }
  /** @return GoogleCloudMlV1StudyConfigParameterSpecMatchingParentDiscreteValueSpec */
  public function getParentDiscreteValues()
  {
    return $this->parentDiscreteValues;
  }
  /** @param GoogleCloudMlV1StudyConfigParameterSpecMatchingParentIntValueSpec */
  public function setParentIntValues(GoogleCloudMlV1StudyConfigParameterSpecMatchingParentIntValueSpec $parentIntValues)
  {
    $this->parentIntValues = $parentIntValues;
  }
  /** @return GoogleCloudMlV1StudyConfigParameterSpecMatchingParentIntValueSpec */
  public function getParentIntValues()
  {
    return $this->parentIntValues;
  }
  /** @param string */
  public function setScaleType($scaleType)
  {
    $this->scaleType = $scaleType;
  }
  /** @return string */
  public function getScaleType()
  {
    return $this->scaleType;
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

class GoogleCloudMlV1StudyConfigParameterSpecCategoricalValueSpec extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudMlV1StudyConfigParameterSpecDiscreteValueSpec extends \Google\Collection
{
  public $values;
  protected $collection_key = 'values';
  public function setValues($values)
  {
    $this->values = $values;
  }
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudMlV1StudyConfigParameterSpecDoubleValueSpec extends \Google\Model
{
  public $maxValue;
  public $minValue;

  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  public function getMinValue()
  {
    return $this->minValue;
  }
}

class GoogleCloudMlV1StudyConfigParameterSpecIntegerValueSpec extends \Google\Model
{
  /** @var string */
  public $maxValue;
  /** @var string */
  public $minValue;

  /** @param string */
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /** @return string */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /** @param string */
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  /** @return string */
  public function getMinValue()
  {
    return $this->minValue;
  }
}

class GoogleCloudMlV1StudyConfigParameterSpecMatchingParentCategoricalValueSpec extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudMlV1StudyConfigParameterSpecMatchingParentDiscreteValueSpec extends \Google\Collection
{
  public $values;
  protected $collection_key = 'values';
  public function setValues($values)
  {
    $this->values = $values;
  }
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudMlV1StudyConfigParameterSpecMatchingParentIntValueSpec extends \Google\Collection
{
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleCloudMlV1SuggestTrialsMetadata extends \Google\Model
{
  /** @var string */
  public $clientId;
  /** @var string */
  public $createTime;
  /** @var string */
  public $study;
  /** @var int */
  public $suggestionCount;

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
  public function setStudy($study)
  {
    $this->study = $study;
  }
  /** @return string */
  public function getStudy()
  {
    return $this->study;
  }
  /** @param int */
  public function setSuggestionCount($suggestionCount)
  {
    $this->suggestionCount = $suggestionCount;
  }
  /** @return int */
  public function getSuggestionCount()
  {
    return $this->suggestionCount;
  }
}

class GoogleCloudMlV1SuggestTrialsRequest extends \Google\Model
{
  /** @var string */
  public $clientId;
  /** @var int */
  public $suggestionCount;

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
  /** @param int */
  public function setSuggestionCount($suggestionCount)
  {
    $this->suggestionCount = $suggestionCount;
  }
  /** @return int */
  public function getSuggestionCount()
  {
    return $this->suggestionCount;
  }
}

class GoogleCloudMlV1SuggestTrialsResponse extends \Google\Collection
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;
  /** @var string */
  public $studyState;
  /** @var GoogleCloudMlV1Trial[] */
  public $trials;
  protected $collection_key = 'trials';
  protected $trialsType = GoogleCloudMlV1Trial::class;
  protected $trialsDataType = 'array';
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
  public function setStudyState($studyState)
  {
    $this->studyState = $studyState;
  }
  /** @return string */
  public function getStudyState()
  {
    return $this->studyState;
  }
  /** @param GoogleCloudMlV1Trial[] */
  public function setTrials($trials)
  {
    $this->trials = $trials;
  }
  /** @return GoogleCloudMlV1Trial[] */
  public function getTrials()
  {
    return $this->trials;
  }
}

class GoogleCloudMlV1TrainingInput extends \Google\Collection
{
  /** @var string[] */
  public $args;
  /** @var bool */
  public $enableWebAccess;
  /** @var GoogleCloudMlV1EncryptionConfig */
  public $encryptionConfig;
  /** @var GoogleCloudMlV1ReplicaConfig */
  public $evaluatorConfig;
  /** @var string */
  public $evaluatorCount;
  /** @var string */
  public $evaluatorType;
  /** @var GoogleCloudMlV1HyperparameterSpec */
  public $hyperparameters;
  /** @var string */
  public $jobDir;
  /** @var GoogleCloudMlV1ReplicaConfig */
  public $masterConfig;
  /** @var string */
  public $masterType;
  /** @var string */
  public $network;
  /** @var string[] */
  public $packageUris;
  /** @var GoogleCloudMlV1ReplicaConfig */
  public $parameterServerConfig;
  /** @var string */
  public $parameterServerCount;
  /** @var string */
  public $parameterServerType;
  /** @var string */
  public $pythonModule;
  /** @var string */
  public $pythonVersion;
  /** @var string */
  public $region;
  /** @var string */
  public $runtimeVersion;
  /** @var string */
  public $scaleTier;
  /** @var GoogleCloudMlV1Scheduling */
  public $scheduling;
  /** @var string */
  public $serviceAccount;
  /** @var bool */
  public $useChiefInTfConfig;
  /** @var GoogleCloudMlV1ReplicaConfig */
  public $workerConfig;
  /** @var string */
  public $workerCount;
  /** @var string */
  public $workerType;
  protected $collection_key = 'packageUris';
  protected $encryptionConfigType = GoogleCloudMlV1EncryptionConfig::class;
  protected $encryptionConfigDataType = '';
  protected $evaluatorConfigType = GoogleCloudMlV1ReplicaConfig::class;
  protected $evaluatorConfigDataType = '';
  protected $hyperparametersType = GoogleCloudMlV1HyperparameterSpec::class;
  protected $hyperparametersDataType = '';
  protected $masterConfigType = GoogleCloudMlV1ReplicaConfig::class;
  protected $masterConfigDataType = '';
  protected $parameterServerConfigType = GoogleCloudMlV1ReplicaConfig::class;
  protected $parameterServerConfigDataType = '';
  protected $schedulingType = GoogleCloudMlV1Scheduling::class;
  protected $schedulingDataType = '';
  protected $workerConfigType = GoogleCloudMlV1ReplicaConfig::class;
  protected $workerConfigDataType = '';
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
  /** @param bool */
  public function setEnableWebAccess($enableWebAccess)
  {
    $this->enableWebAccess = $enableWebAccess;
  }
  /** @return bool */
  public function getEnableWebAccess()
  {
    return $this->enableWebAccess;
  }
  /** @param GoogleCloudMlV1EncryptionConfig */
  public function setEncryptionConfig(GoogleCloudMlV1EncryptionConfig $encryptionConfig)
  {
    $this->encryptionConfig = $encryptionConfig;
  }
  /** @return GoogleCloudMlV1EncryptionConfig */
  public function getEncryptionConfig()
  {
    return $this->encryptionConfig;
  }
  /** @param GoogleCloudMlV1ReplicaConfig */
  public function setEvaluatorConfig(GoogleCloudMlV1ReplicaConfig $evaluatorConfig)
  {
    $this->evaluatorConfig = $evaluatorConfig;
  }
  /** @return GoogleCloudMlV1ReplicaConfig */
  public function getEvaluatorConfig()
  {
    return $this->evaluatorConfig;
  }
  /** @param string */
  public function setEvaluatorCount($evaluatorCount)
  {
    $this->evaluatorCount = $evaluatorCount;
  }
  /** @return string */
  public function getEvaluatorCount()
  {
    return $this->evaluatorCount;
  }
  /** @param string */
  public function setEvaluatorType($evaluatorType)
  {
    $this->evaluatorType = $evaluatorType;
  }
  /** @return string */
  public function getEvaluatorType()
  {
    return $this->evaluatorType;
  }
  /** @param GoogleCloudMlV1HyperparameterSpec */
  public function setHyperparameters(GoogleCloudMlV1HyperparameterSpec $hyperparameters)
  {
    $this->hyperparameters = $hyperparameters;
  }
  /** @return GoogleCloudMlV1HyperparameterSpec */
  public function getHyperparameters()
  {
    return $this->hyperparameters;
  }
  /** @param string */
  public function setJobDir($jobDir)
  {
    $this->jobDir = $jobDir;
  }
  /** @return string */
  public function getJobDir()
  {
    return $this->jobDir;
  }
  /** @param GoogleCloudMlV1ReplicaConfig */
  public function setMasterConfig(GoogleCloudMlV1ReplicaConfig $masterConfig)
  {
    $this->masterConfig = $masterConfig;
  }
  /** @return GoogleCloudMlV1ReplicaConfig */
  public function getMasterConfig()
  {
    return $this->masterConfig;
  }
  /** @param string */
  public function setMasterType($masterType)
  {
    $this->masterType = $masterType;
  }
  /** @return string */
  public function getMasterType()
  {
    return $this->masterType;
  }
  /** @param string */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param string[] */
  public function setPackageUris($packageUris)
  {
    $this->packageUris = $packageUris;
  }
  /** @return string[] */
  public function getPackageUris()
  {
    return $this->packageUris;
  }
  /** @param GoogleCloudMlV1ReplicaConfig */
  public function setParameterServerConfig(GoogleCloudMlV1ReplicaConfig $parameterServerConfig)
  {
    $this->parameterServerConfig = $parameterServerConfig;
  }
  /** @return GoogleCloudMlV1ReplicaConfig */
  public function getParameterServerConfig()
  {
    return $this->parameterServerConfig;
  }
  /** @param string */
  public function setParameterServerCount($parameterServerCount)
  {
    $this->parameterServerCount = $parameterServerCount;
  }
  /** @return string */
  public function getParameterServerCount()
  {
    return $this->parameterServerCount;
  }
  /** @param string */
  public function setParameterServerType($parameterServerType)
  {
    $this->parameterServerType = $parameterServerType;
  }
  /** @return string */
  public function getParameterServerType()
  {
    return $this->parameterServerType;
  }
  /** @param string */
  public function setPythonModule($pythonModule)
  {
    $this->pythonModule = $pythonModule;
  }
  /** @return string */
  public function getPythonModule()
  {
    return $this->pythonModule;
  }
  /** @param string */
  public function setPythonVersion($pythonVersion)
  {
    $this->pythonVersion = $pythonVersion;
  }
  /** @return string */
  public function getPythonVersion()
  {
    return $this->pythonVersion;
  }
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
  /** @param string */
  public function setRuntimeVersion($runtimeVersion)
  {
    $this->runtimeVersion = $runtimeVersion;
  }
  /** @return string */
  public function getRuntimeVersion()
  {
    return $this->runtimeVersion;
  }
  /** @param string */
  public function setScaleTier($scaleTier)
  {
    $this->scaleTier = $scaleTier;
  }
  /** @return string */
  public function getScaleTier()
  {
    return $this->scaleTier;
  }
  /** @param GoogleCloudMlV1Scheduling */
  public function setScheduling(GoogleCloudMlV1Scheduling $scheduling)
  {
    $this->scheduling = $scheduling;
  }
  /** @return GoogleCloudMlV1Scheduling */
  public function getScheduling()
  {
    return $this->scheduling;
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
  /** @param bool */
  public function setUseChiefInTfConfig($useChiefInTfConfig)
  {
    $this->useChiefInTfConfig = $useChiefInTfConfig;
  }
  /** @return bool */
  public function getUseChiefInTfConfig()
  {
    return $this->useChiefInTfConfig;
  }
  /** @param GoogleCloudMlV1ReplicaConfig */
  public function setWorkerConfig(GoogleCloudMlV1ReplicaConfig $workerConfig)
  {
    $this->workerConfig = $workerConfig;
  }
  /** @return GoogleCloudMlV1ReplicaConfig */
  public function getWorkerConfig()
  {
    return $this->workerConfig;
  }
  /** @param string */
  public function setWorkerCount($workerCount)
  {
    $this->workerCount = $workerCount;
  }
  /** @return string */
  public function getWorkerCount()
  {
    return $this->workerCount;
  }
  /** @param string */
  public function setWorkerType($workerType)
  {
    $this->workerType = $workerType;
  }
  /** @return string */
  public function getWorkerType()
  {
    return $this->workerType;
  }
}

class GoogleCloudMlV1TrainingOutput extends \Google\Collection
{
  /** @var GoogleCloudMlV1BuiltInAlgorithmOutput */
  public $builtInAlgorithmOutput;
  /** @var string */
  public $completedTrialCount;
  public $consumedMLUnits;
  /** @var string */
  public $hyperparameterMetricTag;
  /** @var bool */
  public $isBuiltInAlgorithmJob;
  /** @var bool */
  public $isHyperparameterTuningJob;
  /** @var GoogleCloudMlV1HyperparameterOutput[] */
  public $trials;
  /** @var string[] */
  public $webAccessUris;
  protected $collection_key = 'trials';
  protected $builtInAlgorithmOutputType = GoogleCloudMlV1BuiltInAlgorithmOutput::class;
  protected $builtInAlgorithmOutputDataType = '';
  protected $trialsType = GoogleCloudMlV1HyperparameterOutput::class;
  protected $trialsDataType = 'array';
  /** @param GoogleCloudMlV1BuiltInAlgorithmOutput */
  public function setBuiltInAlgorithmOutput(GoogleCloudMlV1BuiltInAlgorithmOutput $builtInAlgorithmOutput)
  {
    $this->builtInAlgorithmOutput = $builtInAlgorithmOutput;
  }
  /** @return GoogleCloudMlV1BuiltInAlgorithmOutput */
  public function getBuiltInAlgorithmOutput()
  {
    return $this->builtInAlgorithmOutput;
  }
  /** @param string */
  public function setCompletedTrialCount($completedTrialCount)
  {
    $this->completedTrialCount = $completedTrialCount;
  }
  /** @return string */
  public function getCompletedTrialCount()
  {
    return $this->completedTrialCount;
  }
  public function setConsumedMLUnits($consumedMLUnits)
  {
    $this->consumedMLUnits = $consumedMLUnits;
  }
  public function getConsumedMLUnits()
  {
    return $this->consumedMLUnits;
  }
  /** @param string */
  public function setHyperparameterMetricTag($hyperparameterMetricTag)
  {
    $this->hyperparameterMetricTag = $hyperparameterMetricTag;
  }
  /** @return string */
  public function getHyperparameterMetricTag()
  {
    return $this->hyperparameterMetricTag;
  }
  /** @param bool */
  public function setIsBuiltInAlgorithmJob($isBuiltInAlgorithmJob)
  {
    $this->isBuiltInAlgorithmJob = $isBuiltInAlgorithmJob;
  }
  /** @return bool */
  public function getIsBuiltInAlgorithmJob()
  {
    return $this->isBuiltInAlgorithmJob;
  }
  /** @param bool */
  public function setIsHyperparameterTuningJob($isHyperparameterTuningJob)
  {
    $this->isHyperparameterTuningJob = $isHyperparameterTuningJob;
  }
  /** @return bool */
  public function getIsHyperparameterTuningJob()
  {
    return $this->isHyperparameterTuningJob;
  }
  /** @param GoogleCloudMlV1HyperparameterOutput[] */
  public function setTrials($trials)
  {
    $this->trials = $trials;
  }
  /** @return GoogleCloudMlV1HyperparameterOutput[] */
  public function getTrials()
  {
    return $this->trials;
  }
  /** @param string[] */
  public function setWebAccessUris($webAccessUris)
  {
    $this->webAccessUris = $webAccessUris;
  }
  /** @return string[] */
  public function getWebAccessUris()
  {
    return $this->webAccessUris;
  }
}

class GoogleCloudMlV1Trial extends \Google\Collection
{
  /** @var string */
  public $clientId;
  /** @var string */
  public $endTime;
  /** @var GoogleCloudMlV1Measurement */
  public $finalMeasurement;
  /** @var string */
  public $infeasibleReason;
  /** @var GoogleCloudMlV1Measurement[] */
  public $measurements;
  /** @var string */
  public $name;
  /** @var GoogleCloudMlV1TrialParameter[] */
  public $parameters;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var bool */
  public $trialInfeasible;
  protected $collection_key = 'parameters';
  protected $finalMeasurementType = GoogleCloudMlV1Measurement::class;
  protected $finalMeasurementDataType = '';
  protected $measurementsType = GoogleCloudMlV1Measurement::class;
  protected $measurementsDataType = 'array';
  protected $parametersType = GoogleCloudMlV1TrialParameter::class;
  protected $parametersDataType = 'array';
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GoogleCloudMlV1Measurement */
  public function setFinalMeasurement(GoogleCloudMlV1Measurement $finalMeasurement)
  {
    $this->finalMeasurement = $finalMeasurement;
  }
  /** @return GoogleCloudMlV1Measurement */
  public function getFinalMeasurement()
  {
    return $this->finalMeasurement;
  }
  /** @param string */
  public function setInfeasibleReason($infeasibleReason)
  {
    $this->infeasibleReason = $infeasibleReason;
  }
  /** @return string */
  public function getInfeasibleReason()
  {
    return $this->infeasibleReason;
  }
  /** @param GoogleCloudMlV1Measurement[] */
  public function setMeasurements($measurements)
  {
    $this->measurements = $measurements;
  }
  /** @return GoogleCloudMlV1Measurement[] */
  public function getMeasurements()
  {
    return $this->measurements;
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
  /** @param GoogleCloudMlV1TrialParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return GoogleCloudMlV1TrialParameter[] */
  public function getParameters()
  {
    return $this->parameters;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param bool */
  public function setTrialInfeasible($trialInfeasible)
  {
    $this->trialInfeasible = $trialInfeasible;
  }
  /** @return bool */
  public function getTrialInfeasible()
  {
    return $this->trialInfeasible;
  }
}

class GoogleCloudMlV1TrialParameter extends \Google\Model
{
  public $floatValue;
  /** @var string */
  public $intValue;
  /** @var string */
  public $parameter;
  /** @var string */
  public $stringValue;

  public function setFloatValue($floatValue)
  {
    $this->floatValue = $floatValue;
  }
  public function getFloatValue()
  {
    return $this->floatValue;
  }
  /** @param string */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /** @return string */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /** @param string */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /** @return string */
  public function getParameter()
  {
    return $this->parameter;
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
}

class GoogleCloudMlV1Version extends \Google\Collection
{
  /** @var GoogleCloudMlV1AcceleratorConfig */
  public $acceleratorConfig;
  /** @var GoogleCloudMlV1AutoScaling */
  public $autoScaling;
  /** @var GoogleCloudMlV1ContainerSpec */
  public $container;
  /** @var string */
  public $createTime;
  /** @var string */
  public $deploymentUri;
  /** @var string */
  public $description;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $etag;
  /** @var GoogleCloudMlV1ExplanationConfig */
  public $explanationConfig;
  /** @var string */
  public $framework;
  /** @var bool */
  public $isDefault;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lastMigrationModelId;
  /** @var string */
  public $lastMigrationTime;
  /** @var string */
  public $lastUseTime;
  /** @var string */
  public $machineType;
  /** @var GoogleCloudMlV1ManualScaling */
  public $manualScaling;
  /** @var string */
  public $name;
  /** @var string[] */
  public $packageUris;
  /** @var string */
  public $predictionClass;
  /** @var string */
  public $pythonVersion;
  /** @var GoogleCloudMlV1RequestLoggingConfig */
  public $requestLoggingConfig;
  /** @var GoogleCloudMlV1RouteMap */
  public $routes;
  /** @var string */
  public $runtimeVersion;
  /** @var string */
  public $serviceAccount;
  /** @var string */
  public $state;
  protected $collection_key = 'packageUris';
  protected $acceleratorConfigType = GoogleCloudMlV1AcceleratorConfig::class;
  protected $acceleratorConfigDataType = '';
  protected $autoScalingType = GoogleCloudMlV1AutoScaling::class;
  protected $autoScalingDataType = '';
  protected $containerType = GoogleCloudMlV1ContainerSpec::class;
  protected $containerDataType = '';
  protected $explanationConfigType = GoogleCloudMlV1ExplanationConfig::class;
  protected $explanationConfigDataType = '';
  protected $manualScalingType = GoogleCloudMlV1ManualScaling::class;
  protected $manualScalingDataType = '';
  protected $requestLoggingConfigType = GoogleCloudMlV1RequestLoggingConfig::class;
  protected $requestLoggingConfigDataType = '';
  protected $routesType = GoogleCloudMlV1RouteMap::class;
  protected $routesDataType = '';
  /** @param GoogleCloudMlV1AcceleratorConfig */
  public function setAcceleratorConfig(GoogleCloudMlV1AcceleratorConfig $acceleratorConfig)
  {
    $this->acceleratorConfig = $acceleratorConfig;
  }
  /** @return GoogleCloudMlV1AcceleratorConfig */
  public function getAcceleratorConfig()
  {
    return $this->acceleratorConfig;
  }
  /** @param GoogleCloudMlV1AutoScaling */
  public function setAutoScaling(GoogleCloudMlV1AutoScaling $autoScaling)
  {
    $this->autoScaling = $autoScaling;
  }
  /** @return GoogleCloudMlV1AutoScaling */
  public function getAutoScaling()
  {
    return $this->autoScaling;
  }
  /** @param GoogleCloudMlV1ContainerSpec */
  public function setContainer(GoogleCloudMlV1ContainerSpec $container)
  {
    $this->container = $container;
  }
  /** @return GoogleCloudMlV1ContainerSpec */
  public function getContainer()
  {
    return $this->container;
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
  public function setDeploymentUri($deploymentUri)
  {
    $this->deploymentUri = $deploymentUri;
  }
  /** @return string */
  public function getDeploymentUri()
  {
    return $this->deploymentUri;
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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param GoogleCloudMlV1ExplanationConfig */
  public function setExplanationConfig(GoogleCloudMlV1ExplanationConfig $explanationConfig)
  {
    $this->explanationConfig = $explanationConfig;
  }
  /** @return GoogleCloudMlV1ExplanationConfig */
  public function getExplanationConfig()
  {
    return $this->explanationConfig;
  }
  /** @param string */
  public function setFramework($framework)
  {
    $this->framework = $framework;
  }
  /** @return string */
  public function getFramework()
  {
    return $this->framework;
  }
  /** @param bool */
  public function setIsDefault($isDefault)
  {
    $this->isDefault = $isDefault;
  }
  /** @return bool */
  public function getIsDefault()
  {
    return $this->isDefault;
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
  public function setLastMigrationModelId($lastMigrationModelId)
  {
    $this->lastMigrationModelId = $lastMigrationModelId;
  }
  /** @return string */
  public function getLastMigrationModelId()
  {
    return $this->lastMigrationModelId;
  }
  /** @param string */
  public function setLastMigrationTime($lastMigrationTime)
  {
    $this->lastMigrationTime = $lastMigrationTime;
  }
  /** @return string */
  public function getLastMigrationTime()
  {
    return $this->lastMigrationTime;
  }
  /** @param string */
  public function setLastUseTime($lastUseTime)
  {
    $this->lastUseTime = $lastUseTime;
  }
  /** @return string */
  public function getLastUseTime()
  {
    return $this->lastUseTime;
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
  /** @param GoogleCloudMlV1ManualScaling */
  public function setManualScaling(GoogleCloudMlV1ManualScaling $manualScaling)
  {
    $this->manualScaling = $manualScaling;
  }
  /** @return GoogleCloudMlV1ManualScaling */
  public function getManualScaling()
  {
    return $this->manualScaling;
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
  public function setPackageUris($packageUris)
  {
    $this->packageUris = $packageUris;
  }
  /** @return string[] */
  public function getPackageUris()
  {
    return $this->packageUris;
  }
  /** @param string */
  public function setPredictionClass($predictionClass)
  {
    $this->predictionClass = $predictionClass;
  }
  /** @return string */
  public function getPredictionClass()
  {
    return $this->predictionClass;
  }
  /** @param string */
  public function setPythonVersion($pythonVersion)
  {
    $this->pythonVersion = $pythonVersion;
  }
  /** @return string */
  public function getPythonVersion()
  {
    return $this->pythonVersion;
  }
  /** @param GoogleCloudMlV1RequestLoggingConfig */
  public function setRequestLoggingConfig(GoogleCloudMlV1RequestLoggingConfig $requestLoggingConfig)
  {
    $this->requestLoggingConfig = $requestLoggingConfig;
  }
  /** @return GoogleCloudMlV1RequestLoggingConfig */
  public function getRequestLoggingConfig()
  {
    return $this->requestLoggingConfig;
  }
  /** @param GoogleCloudMlV1RouteMap */
  public function setRoutes(GoogleCloudMlV1RouteMap $routes)
  {
    $this->routes = $routes;
  }
  /** @return GoogleCloudMlV1RouteMap */
  public function getRoutes()
  {
    return $this->routes;
  }
  /** @param string */
  public function setRuntimeVersion($runtimeVersion)
  {
    $this->runtimeVersion = $runtimeVersion;
  }
  /** @return string */
  public function getRuntimeVersion()
  {
    return $this->runtimeVersion;
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

class GoogleCloudMlV1XraiAttribution extends \Google\Model
{
  /** @var int */
  public $numIntegralSteps;

  /** @param int */
  public function setNumIntegralSteps($numIntegralSteps)
  {
    $this->numIntegralSteps = $numIntegralSteps;
  }
  /** @return int */
  public function getNumIntegralSteps()
  {
    return $this->numIntegralSteps;
  }
}

class GoogleIamV1AuditConfig extends \Google\Collection
{
  /** @var GoogleIamV1AuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = GoogleIamV1AuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param GoogleIamV1AuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return GoogleIamV1AuditLogConfig[] */
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

class GoogleIamV1AuditLogConfig extends \Google\Collection
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

class GoogleIamV1Binding extends \Google\Collection
{
  /** @var GoogleTypeExpr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = GoogleTypeExpr::class;
  protected $conditionDataType = '';
  /** @param GoogleTypeExpr */
  public function setCondition(GoogleTypeExpr $condition)
  {
    $this->condition = $condition;
  }
  /** @return GoogleTypeExpr */
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

class GoogleIamV1Policy extends \Google\Collection
{
  /** @var GoogleIamV1AuditConfig[] */
  public $auditConfigs;
  /** @var GoogleIamV1Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = GoogleIamV1AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = GoogleIamV1Binding::class;
  protected $bindingsDataType = 'array';
  /** @param GoogleIamV1AuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return GoogleIamV1AuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
  /** @param GoogleIamV1Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return GoogleIamV1Binding[] */
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

class GoogleIamV1SetIamPolicyRequest extends \Google\Model
{
  /** @var GoogleIamV1Policy */
  public $policy;
  /** @var string */
  public $updateMask;
  protected $policyType = GoogleIamV1Policy::class;
  protected $policyDataType = '';
  /** @param GoogleIamV1Policy */
  public function setPolicy(GoogleIamV1Policy $policy)
  {
    $this->policy = $policy;
  }
  /** @return GoogleIamV1Policy */
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

class GoogleIamV1TestIamPermissionsRequest extends \Google\Collection
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

class GoogleIamV1TestIamPermissionsResponse extends \Google\Collection
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

class GoogleLongrunningListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleLongrunningOperation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = GoogleLongrunningOperation::class;
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
  /** @param GoogleLongrunningOperation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return GoogleLongrunningOperation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class GoogleLongrunningOperation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var GoogleRpcStatus */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = GoogleRpcStatus::class;
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
  /** @param GoogleRpcStatus */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /** @return GoogleRpcStatus */
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

class GoogleProtobufEmpty extends \Google\Model
{
}

class GoogleRpcStatus extends \Google\Collection
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

class GoogleTypeExpr extends \Google\Model
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleApiHttpBody::class, 'Google_Service_CloudMachineLearningEngine_GoogleApiHttpBody');
class_alias(GoogleCloudMlV1AcceleratorConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AcceleratorConfig');
class_alias(GoogleCloudMlV1AddTrialMeasurementRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AddTrialMeasurementRequest');
class_alias(GoogleCloudMlV1AutoScaling::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AutoScaling');
class_alias(GoogleCloudMlV1AutomatedStoppingConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AutomatedStoppingConfig');
class_alias(GoogleCloudMlV1AutomatedStoppingConfigDecayCurveAutomatedStoppingConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AutomatedStoppingConfigDecayCurveAutomatedStoppingConfig');
class_alias(GoogleCloudMlV1AutomatedStoppingConfigMedianAutomatedStoppingConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AutomatedStoppingConfigMedianAutomatedStoppingConfig');
class_alias(GoogleCloudMlV1BuiltInAlgorithmOutput::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1BuiltInAlgorithmOutput');
class_alias(GoogleCloudMlV1CancelJobRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1CancelJobRequest');
class_alias(GoogleCloudMlV1Capability::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Capability');
class_alias(GoogleCloudMlV1CheckTrialEarlyStoppingStateMetatdata::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1CheckTrialEarlyStoppingStateMetatdata');
class_alias(GoogleCloudMlV1CheckTrialEarlyStoppingStateRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1CheckTrialEarlyStoppingStateRequest');
class_alias(GoogleCloudMlV1CheckTrialEarlyStoppingStateResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1CheckTrialEarlyStoppingStateResponse');
class_alias(GoogleCloudMlV1CompleteTrialRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1CompleteTrialRequest');
class_alias(GoogleCloudMlV1Config::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Config');
class_alias(GoogleCloudMlV1ContainerPort::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ContainerPort');
class_alias(GoogleCloudMlV1ContainerSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ContainerSpec');
class_alias(GoogleCloudMlV1DiskConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1DiskConfig');
class_alias(GoogleCloudMlV1EncryptionConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1EncryptionConfig');
class_alias(GoogleCloudMlV1EnvVar::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1EnvVar');
class_alias(GoogleCloudMlV1ExplainRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ExplainRequest');
class_alias(GoogleCloudMlV1ExplanationConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ExplanationConfig');
class_alias(GoogleCloudMlV1GetConfigResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1GetConfigResponse');
class_alias(GoogleCloudMlV1HyperparameterOutput::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1HyperparameterOutput');
class_alias(GoogleCloudMlV1HyperparameterOutputHyperparameterMetric::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1HyperparameterOutputHyperparameterMetric');
class_alias(GoogleCloudMlV1HyperparameterSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1HyperparameterSpec');
class_alias(GoogleCloudMlV1IntegratedGradientsAttribution::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1IntegratedGradientsAttribution');
class_alias(GoogleCloudMlV1Job::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Job');
class_alias(GoogleCloudMlV1ListJobsResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListJobsResponse');
class_alias(GoogleCloudMlV1ListLocationsResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListLocationsResponse');
class_alias(GoogleCloudMlV1ListModelsResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListModelsResponse');
class_alias(GoogleCloudMlV1ListOptimalTrialsRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListOptimalTrialsRequest');
class_alias(GoogleCloudMlV1ListOptimalTrialsResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListOptimalTrialsResponse');
class_alias(GoogleCloudMlV1ListStudiesResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListStudiesResponse');
class_alias(GoogleCloudMlV1ListTrialsResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListTrialsResponse');
class_alias(GoogleCloudMlV1ListVersionsResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListVersionsResponse');
class_alias(GoogleCloudMlV1Location::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Location');
class_alias(GoogleCloudMlV1ManualScaling::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ManualScaling');
class_alias(GoogleCloudMlV1Measurement::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Measurement');
class_alias(GoogleCloudMlV1MeasurementMetric::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1MeasurementMetric');
class_alias(GoogleCloudMlV1MetricSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1MetricSpec');
class_alias(GoogleCloudMlV1Model::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Model');
class_alias(GoogleCloudMlV1OperationMetadata::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1OperationMetadata');
class_alias(GoogleCloudMlV1ParameterSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ParameterSpec');
class_alias(GoogleCloudMlV1PredictRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1PredictRequest');
class_alias(GoogleCloudMlV1PredictionInput::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1PredictionInput');
class_alias(GoogleCloudMlV1PredictionOutput::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1PredictionOutput');
class_alias(GoogleCloudMlV1ReplicaConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ReplicaConfig');
class_alias(GoogleCloudMlV1RequestLoggingConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1RequestLoggingConfig');
class_alias(GoogleCloudMlV1RouteMap::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1RouteMap');
class_alias(GoogleCloudMlV1SampledShapleyAttribution::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1SampledShapleyAttribution');
class_alias(GoogleCloudMlV1Scheduling::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Scheduling');
class_alias(GoogleCloudMlV1SetDefaultVersionRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1SetDefaultVersionRequest');
class_alias(GoogleCloudMlV1StopTrialRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StopTrialRequest');
class_alias(GoogleCloudMlV1Study::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Study');
class_alias(GoogleCloudMlV1StudyConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StudyConfig');
class_alias(GoogleCloudMlV1StudyConfigMetricSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StudyConfigMetricSpec');
class_alias(GoogleCloudMlV1StudyConfigParameterSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StudyConfigParameterSpec');
class_alias(GoogleCloudMlV1StudyConfigParameterSpecCategoricalValueSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StudyConfigParameterSpecCategoricalValueSpec');
class_alias(GoogleCloudMlV1StudyConfigParameterSpecDiscreteValueSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StudyConfigParameterSpecDiscreteValueSpec');
class_alias(GoogleCloudMlV1StudyConfigParameterSpecDoubleValueSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StudyConfigParameterSpecDoubleValueSpec');
class_alias(GoogleCloudMlV1StudyConfigParameterSpecIntegerValueSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StudyConfigParameterSpecIntegerValueSpec');
class_alias(GoogleCloudMlV1StudyConfigParameterSpecMatchingParentCategoricalValueSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StudyConfigParameterSpecMatchingParentCategoricalValueSpec');
class_alias(GoogleCloudMlV1StudyConfigParameterSpecMatchingParentDiscreteValueSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StudyConfigParameterSpecMatchingParentDiscreteValueSpec');
class_alias(GoogleCloudMlV1StudyConfigParameterSpecMatchingParentIntValueSpec::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StudyConfigParameterSpecMatchingParentIntValueSpec');
class_alias(GoogleCloudMlV1SuggestTrialsMetadata::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1SuggestTrialsMetadata');
class_alias(GoogleCloudMlV1SuggestTrialsRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1SuggestTrialsRequest');
class_alias(GoogleCloudMlV1SuggestTrialsResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1SuggestTrialsResponse');
class_alias(GoogleCloudMlV1TrainingInput::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1TrainingInput');
class_alias(GoogleCloudMlV1TrainingOutput::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1TrainingOutput');
class_alias(GoogleCloudMlV1Trial::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Trial');
class_alias(GoogleCloudMlV1TrialParameter::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1TrialParameter');
class_alias(GoogleCloudMlV1Version::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Version');
class_alias(GoogleCloudMlV1XraiAttribution::class, 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1XraiAttribution');
class_alias(GoogleIamV1AuditConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleIamV1AuditConfig');
class_alias(GoogleIamV1AuditLogConfig::class, 'Google_Service_CloudMachineLearningEngine_GoogleIamV1AuditLogConfig');
class_alias(GoogleIamV1Binding::class, 'Google_Service_CloudMachineLearningEngine_GoogleIamV1Binding');
class_alias(GoogleIamV1Policy::class, 'Google_Service_CloudMachineLearningEngine_GoogleIamV1Policy');
class_alias(GoogleIamV1SetIamPolicyRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleIamV1SetIamPolicyRequest');
class_alias(GoogleIamV1TestIamPermissionsRequest::class, 'Google_Service_CloudMachineLearningEngine_GoogleIamV1TestIamPermissionsRequest');
class_alias(GoogleIamV1TestIamPermissionsResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleIamV1TestIamPermissionsResponse');
class_alias(GoogleLongrunningListOperationsResponse::class, 'Google_Service_CloudMachineLearningEngine_GoogleLongrunningListOperationsResponse');
class_alias(GoogleLongrunningOperation::class, 'Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_CloudMachineLearningEngine_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_CloudMachineLearningEngine_GoogleRpcStatus');
class_alias(GoogleTypeExpr::class, 'Google_Service_CloudMachineLearningEngine_GoogleTypeExpr');
