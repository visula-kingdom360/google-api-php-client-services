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

namespace Google\Service\Dataflow;

class ApproximateProgress extends \Google\Model
{
  /** @var float */
  public $percentComplete;
  /** @var Position */
  public $position;
  /** @var string */
  public $remainingTime;
  protected $positionType = Position::class;
  protected $positionDataType = '';
  /** @param float */
  public function setPercentComplete($percentComplete)
  {
    $this->percentComplete = $percentComplete;
  }
  /** @return float */
  public function getPercentComplete()
  {
    return $this->percentComplete;
  }
  /** @param Position */
  public function setPosition(Position $position)
  {
    $this->position = $position;
  }
  /** @return Position */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param string */
  public function setRemainingTime($remainingTime)
  {
    $this->remainingTime = $remainingTime;
  }
  /** @return string */
  public function getRemainingTime()
  {
    return $this->remainingTime;
  }
}

class ApproximateReportedProgress extends \Google\Model
{
  /** @var ReportedParallelism */
  public $consumedParallelism;
  public $fractionConsumed;
  /** @var Position */
  public $position;
  /** @var ReportedParallelism */
  public $remainingParallelism;
  protected $consumedParallelismType = ReportedParallelism::class;
  protected $consumedParallelismDataType = '';
  protected $positionType = Position::class;
  protected $positionDataType = '';
  protected $remainingParallelismType = ReportedParallelism::class;
  protected $remainingParallelismDataType = '';
  /** @param ReportedParallelism */
  public function setConsumedParallelism(ReportedParallelism $consumedParallelism)
  {
    $this->consumedParallelism = $consumedParallelism;
  }
  /** @return ReportedParallelism */
  public function getConsumedParallelism()
  {
    return $this->consumedParallelism;
  }
  public function setFractionConsumed($fractionConsumed)
  {
    $this->fractionConsumed = $fractionConsumed;
  }
  public function getFractionConsumed()
  {
    return $this->fractionConsumed;
  }
  /** @param Position */
  public function setPosition(Position $position)
  {
    $this->position = $position;
  }
  /** @return Position */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param ReportedParallelism */
  public function setRemainingParallelism(ReportedParallelism $remainingParallelism)
  {
    $this->remainingParallelism = $remainingParallelism;
  }
  /** @return ReportedParallelism */
  public function getRemainingParallelism()
  {
    return $this->remainingParallelism;
  }
}

class ApproximateSplitRequest extends \Google\Model
{
  public $fractionConsumed;
  public $fractionOfRemainder;
  /** @var Position */
  public $position;
  protected $positionType = Position::class;
  protected $positionDataType = '';
  public function setFractionConsumed($fractionConsumed)
  {
    $this->fractionConsumed = $fractionConsumed;
  }
  public function getFractionConsumed()
  {
    return $this->fractionConsumed;
  }
  public function setFractionOfRemainder($fractionOfRemainder)
  {
    $this->fractionOfRemainder = $fractionOfRemainder;
  }
  public function getFractionOfRemainder()
  {
    return $this->fractionOfRemainder;
  }
  /** @param Position */
  public function setPosition(Position $position)
  {
    $this->position = $position;
  }
  /** @return Position */
  public function getPosition()
  {
    return $this->position;
  }
}

class AutoscalingEvent extends \Google\Model
{
  /** @var string */
  public $currentNumWorkers;
  /** @var StructuredMessage */
  public $description;
  /** @var string */
  public $eventType;
  /** @var string */
  public $targetNumWorkers;
  /** @var string */
  public $time;
  /** @var string */
  public $workerPool;
  protected $descriptionType = StructuredMessage::class;
  protected $descriptionDataType = '';
  /** @param string */
  public function setCurrentNumWorkers($currentNumWorkers)
  {
    $this->currentNumWorkers = $currentNumWorkers;
  }
  /** @return string */
  public function getCurrentNumWorkers()
  {
    return $this->currentNumWorkers;
  }
  /** @param StructuredMessage */
  public function setDescription(StructuredMessage $description)
  {
    $this->description = $description;
  }
  /** @return StructuredMessage */
  public function getDescription()
  {
    return $this->description;
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
  public function setTargetNumWorkers($targetNumWorkers)
  {
    $this->targetNumWorkers = $targetNumWorkers;
  }
  /** @return string */
  public function getTargetNumWorkers()
  {
    return $this->targetNumWorkers;
  }
  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
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

class AutoscalingSettings extends \Google\Model
{
  /** @var string */
  public $algorithm;
  /** @var int */
  public $maxNumWorkers;

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
  /** @param int */
  public function setMaxNumWorkers($maxNumWorkers)
  {
    $this->maxNumWorkers = $maxNumWorkers;
  }
  /** @return int */
  public function getMaxNumWorkers()
  {
    return $this->maxNumWorkers;
  }
}

class BigQueryIODetails extends \Google\Model
{
  /** @var string */
  public $dataset;
  /** @var string */
  public $projectId;
  /** @var string */
  public $query;
  /** @var string */
  public $table;

  /** @param string */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
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
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param string */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
  }
}

class BigTableIODetails extends \Google\Model
{
  /** @var string */
  public $instanceId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $tableId;

  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
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
  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }
  /** @return string */
  public function getTableId()
  {
    return $this->tableId;
  }
}

class CPUTime extends \Google\Model
{
  public $rate;
  /** @var string */
  public $timestamp;
  /** @var string */
  public $totalMs;

  public function setRate($rate)
  {
    $this->rate = $rate;
  }
  public function getRate()
  {
    return $this->rate;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
  /** @param string */
  public function setTotalMs($totalMs)
  {
    $this->totalMs = $totalMs;
  }
  /** @return string */
  public function getTotalMs()
  {
    return $this->totalMs;
  }
}

class ComponentSource extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $originalTransformOrCollection;
  /** @var string */
  public $userName;

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
  public function setOriginalTransformOrCollection($originalTransformOrCollection)
  {
    $this->originalTransformOrCollection = $originalTransformOrCollection;
  }
  /** @return string */
  public function getOriginalTransformOrCollection()
  {
    return $this->originalTransformOrCollection;
  }
  /** @param string */
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  /** @return string */
  public function getUserName()
  {
    return $this->userName;
  }
}

class ComponentTransform extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $originalTransform;
  /** @var string */
  public $userName;

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
  public function setOriginalTransform($originalTransform)
  {
    $this->originalTransform = $originalTransform;
  }
  /** @return string */
  public function getOriginalTransform()
  {
    return $this->originalTransform;
  }
  /** @param string */
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  /** @return string */
  public function getUserName()
  {
    return $this->userName;
  }
}

class ComputationTopology extends \Google\Collection
{
  /** @var string */
  public $computationId;
  /** @var StreamLocation[] */
  public $inputs;
  /** @var KeyRangeLocation[] */
  public $keyRanges;
  /** @var StreamLocation[] */
  public $outputs;
  /** @var StateFamilyConfig[] */
  public $stateFamilies;
  /** @var string */
  public $systemStageName;
  protected $collection_key = 'stateFamilies';
  protected $inputsType = StreamLocation::class;
  protected $inputsDataType = 'array';
  protected $keyRangesType = KeyRangeLocation::class;
  protected $keyRangesDataType = 'array';
  protected $outputsType = StreamLocation::class;
  protected $outputsDataType = 'array';
  protected $stateFamiliesType = StateFamilyConfig::class;
  protected $stateFamiliesDataType = 'array';
  /** @param string */
  public function setComputationId($computationId)
  {
    $this->computationId = $computationId;
  }
  /** @return string */
  public function getComputationId()
  {
    return $this->computationId;
  }
  /** @param StreamLocation[] */
  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  /** @return StreamLocation[] */
  public function getInputs()
  {
    return $this->inputs;
  }
  /** @param KeyRangeLocation[] */
  public function setKeyRanges($keyRanges)
  {
    $this->keyRanges = $keyRanges;
  }
  /** @return KeyRangeLocation[] */
  public function getKeyRanges()
  {
    return $this->keyRanges;
  }
  /** @param StreamLocation[] */
  public function setOutputs($outputs)
  {
    $this->outputs = $outputs;
  }
  /** @return StreamLocation[] */
  public function getOutputs()
  {
    return $this->outputs;
  }
  /** @param StateFamilyConfig[] */
  public function setStateFamilies($stateFamilies)
  {
    $this->stateFamilies = $stateFamilies;
  }
  /** @return StateFamilyConfig[] */
  public function getStateFamilies()
  {
    return $this->stateFamilies;
  }
  /** @param string */
  public function setSystemStageName($systemStageName)
  {
    $this->systemStageName = $systemStageName;
  }
  /** @return string */
  public function getSystemStageName()
  {
    return $this->systemStageName;
  }
}

class ConcatPosition extends \Google\Model
{
  /** @var int */
  public $index;
  /** @var Position */
  public $position;
  protected $positionType = Position::class;
  protected $positionDataType = '';
  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param Position */
  public function setPosition(Position $position)
  {
    $this->position = $position;
  }
  /** @return Position */
  public function getPosition()
  {
    return $this->position;
  }
}

class ContainerSpec extends \Google\Model
{
  /** @var FlexTemplateRuntimeEnvironment */
  public $defaultEnvironment;
  /** @var string */
  public $image;
  /** @var string */
  public $imageRepositoryCertPath;
  /** @var string */
  public $imageRepositoryPasswordSecretId;
  /** @var string */
  public $imageRepositoryUsernameSecretId;
  /** @var TemplateMetadata */
  public $metadata;
  /** @var SDKInfo */
  public $sdkInfo;
  protected $defaultEnvironmentType = FlexTemplateRuntimeEnvironment::class;
  protected $defaultEnvironmentDataType = '';
  protected $metadataType = TemplateMetadata::class;
  protected $metadataDataType = '';
  protected $sdkInfoType = SDKInfo::class;
  protected $sdkInfoDataType = '';
  /** @param FlexTemplateRuntimeEnvironment */
  public function setDefaultEnvironment(FlexTemplateRuntimeEnvironment $defaultEnvironment)
  {
    $this->defaultEnvironment = $defaultEnvironment;
  }
  /** @return FlexTemplateRuntimeEnvironment */
  public function getDefaultEnvironment()
  {
    return $this->defaultEnvironment;
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
  /** @param string */
  public function setImageRepositoryCertPath($imageRepositoryCertPath)
  {
    $this->imageRepositoryCertPath = $imageRepositoryCertPath;
  }
  /** @return string */
  public function getImageRepositoryCertPath()
  {
    return $this->imageRepositoryCertPath;
  }
  /** @param string */
  public function setImageRepositoryPasswordSecretId($imageRepositoryPasswordSecretId)
  {
    $this->imageRepositoryPasswordSecretId = $imageRepositoryPasswordSecretId;
  }
  /** @return string */
  public function getImageRepositoryPasswordSecretId()
  {
    return $this->imageRepositoryPasswordSecretId;
  }
  /** @param string */
  public function setImageRepositoryUsernameSecretId($imageRepositoryUsernameSecretId)
  {
    $this->imageRepositoryUsernameSecretId = $imageRepositoryUsernameSecretId;
  }
  /** @return string */
  public function getImageRepositoryUsernameSecretId()
  {
    return $this->imageRepositoryUsernameSecretId;
  }
  /** @param TemplateMetadata */
  public function setMetadata(TemplateMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return TemplateMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param SDKInfo */
  public function setSdkInfo(SDKInfo $sdkInfo)
  {
    $this->sdkInfo = $sdkInfo;
  }
  /** @return SDKInfo */
  public function getSdkInfo()
  {
    return $this->sdkInfo;
  }
}

class CounterMetadata extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $kind;
  /** @var string */
  public $otherUnits;
  /** @var string */
  public $standardUnits;

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
  public function setOtherUnits($otherUnits)
  {
    $this->otherUnits = $otherUnits;
  }
  /** @return string */
  public function getOtherUnits()
  {
    return $this->otherUnits;
  }
  /** @param string */
  public function setStandardUnits($standardUnits)
  {
    $this->standardUnits = $standardUnits;
  }
  /** @return string */
  public function getStandardUnits()
  {
    return $this->standardUnits;
  }
}

class CounterStructuredName extends \Google\Model
{
  /** @var string */
  public $componentStepName;
  /** @var string */
  public $executionStepName;
  /** @var int */
  public $inputIndex;
  /** @var string */
  public $name;
  /** @var string */
  public $origin;
  /** @var string */
  public $originNamespace;
  /** @var string */
  public $originalRequestingStepName;
  /** @var string */
  public $originalStepName;
  /** @var string */
  public $portion;
  /** @var string */
  public $workerId;

  /** @param string */
  public function setComponentStepName($componentStepName)
  {
    $this->componentStepName = $componentStepName;
  }
  /** @return string */
  public function getComponentStepName()
  {
    return $this->componentStepName;
  }
  /** @param string */
  public function setExecutionStepName($executionStepName)
  {
    $this->executionStepName = $executionStepName;
  }
  /** @return string */
  public function getExecutionStepName()
  {
    return $this->executionStepName;
  }
  /** @param int */
  public function setInputIndex($inputIndex)
  {
    $this->inputIndex = $inputIndex;
  }
  /** @return int */
  public function getInputIndex()
  {
    return $this->inputIndex;
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
  public function setOriginNamespace($originNamespace)
  {
    $this->originNamespace = $originNamespace;
  }
  /** @return string */
  public function getOriginNamespace()
  {
    return $this->originNamespace;
  }
  /** @param string */
  public function setOriginalRequestingStepName($originalRequestingStepName)
  {
    $this->originalRequestingStepName = $originalRequestingStepName;
  }
  /** @return string */
  public function getOriginalRequestingStepName()
  {
    return $this->originalRequestingStepName;
  }
  /** @param string */
  public function setOriginalStepName($originalStepName)
  {
    $this->originalStepName = $originalStepName;
  }
  /** @return string */
  public function getOriginalStepName()
  {
    return $this->originalStepName;
  }
  /** @param string */
  public function setPortion($portion)
  {
    $this->portion = $portion;
  }
  /** @return string */
  public function getPortion()
  {
    return $this->portion;
  }
  /** @param string */
  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
  /** @return string */
  public function getWorkerId()
  {
    return $this->workerId;
  }
}

class CounterStructuredNameAndMetadata extends \Google\Model
{
  /** @var CounterMetadata */
  public $metadata;
  /** @var CounterStructuredName */
  public $name;
  protected $metadataType = CounterMetadata::class;
  protected $metadataDataType = '';
  protected $nameType = CounterStructuredName::class;
  protected $nameDataType = '';
  /** @param CounterMetadata */
  public function setMetadata(CounterMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return CounterMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param CounterStructuredName */
  public function setName(CounterStructuredName $name)
  {
    $this->name = $name;
  }
  /** @return CounterStructuredName */
  public function getName()
  {
    return $this->name;
  }
}

class CounterUpdate extends \Google\Model
{
  /** @var bool */
  public $boolean;
  /** @var bool */
  public $cumulative;
  /** @var DistributionUpdate */
  public $distribution;
  public $floatingPoint;
  /** @var FloatingPointList */
  public $floatingPointList;
  /** @var FloatingPointMean */
  public $floatingPointMean;
  /** @var SplitInt64 */
  public $integer;
  /** @var IntegerGauge */
  public $integerGauge;
  /** @var IntegerList */
  public $integerList;
  /** @var IntegerMean */
  public $integerMean;
  /** @var array */
  public $internal;
  /** @var NameAndKind */
  public $nameAndKind;
  /** @var string */
  public $shortId;
  /** @var StringList */
  public $stringList;
  /** @var CounterStructuredNameAndMetadata */
  public $structuredNameAndMetadata;
  protected $distributionType = DistributionUpdate::class;
  protected $distributionDataType = '';
  protected $floatingPointListType = FloatingPointList::class;
  protected $floatingPointListDataType = '';
  protected $floatingPointMeanType = FloatingPointMean::class;
  protected $floatingPointMeanDataType = '';
  protected $integerType = SplitInt64::class;
  protected $integerDataType = '';
  protected $integerGaugeType = IntegerGauge::class;
  protected $integerGaugeDataType = '';
  protected $integerListType = IntegerList::class;
  protected $integerListDataType = '';
  protected $integerMeanType = IntegerMean::class;
  protected $integerMeanDataType = '';
  protected $nameAndKindType = NameAndKind::class;
  protected $nameAndKindDataType = '';
  protected $stringListType = StringList::class;
  protected $stringListDataType = '';
  protected $structuredNameAndMetadataType = CounterStructuredNameAndMetadata::class;
  protected $structuredNameAndMetadataDataType = '';
  /** @param bool */
  public function setBoolean($boolean)
  {
    $this->boolean = $boolean;
  }
  /** @return bool */
  public function getBoolean()
  {
    return $this->boolean;
  }
  /** @param bool */
  public function setCumulative($cumulative)
  {
    $this->cumulative = $cumulative;
  }
  /** @return bool */
  public function getCumulative()
  {
    return $this->cumulative;
  }
  /** @param DistributionUpdate */
  public function setDistribution(DistributionUpdate $distribution)
  {
    $this->distribution = $distribution;
  }
  /** @return DistributionUpdate */
  public function getDistribution()
  {
    return $this->distribution;
  }
  public function setFloatingPoint($floatingPoint)
  {
    $this->floatingPoint = $floatingPoint;
  }
  public function getFloatingPoint()
  {
    return $this->floatingPoint;
  }
  /** @param FloatingPointList */
  public function setFloatingPointList(FloatingPointList $floatingPointList)
  {
    $this->floatingPointList = $floatingPointList;
  }
  /** @return FloatingPointList */
  public function getFloatingPointList()
  {
    return $this->floatingPointList;
  }
  /** @param FloatingPointMean */
  public function setFloatingPointMean(FloatingPointMean $floatingPointMean)
  {
    $this->floatingPointMean = $floatingPointMean;
  }
  /** @return FloatingPointMean */
  public function getFloatingPointMean()
  {
    return $this->floatingPointMean;
  }
  /** @param SplitInt64 */
  public function setInteger(SplitInt64 $integer)
  {
    $this->integer = $integer;
  }
  /** @return SplitInt64 */
  public function getInteger()
  {
    return $this->integer;
  }
  /** @param IntegerGauge */
  public function setIntegerGauge(IntegerGauge $integerGauge)
  {
    $this->integerGauge = $integerGauge;
  }
  /** @return IntegerGauge */
  public function getIntegerGauge()
  {
    return $this->integerGauge;
  }
  /** @param IntegerList */
  public function setIntegerList(IntegerList $integerList)
  {
    $this->integerList = $integerList;
  }
  /** @return IntegerList */
  public function getIntegerList()
  {
    return $this->integerList;
  }
  /** @param IntegerMean */
  public function setIntegerMean(IntegerMean $integerMean)
  {
    $this->integerMean = $integerMean;
  }
  /** @return IntegerMean */
  public function getIntegerMean()
  {
    return $this->integerMean;
  }
  /** @param array */
  public function setInternal($internal)
  {
    $this->internal = $internal;
  }
  /** @return array */
  public function getInternal()
  {
    return $this->internal;
  }
  /** @param NameAndKind */
  public function setNameAndKind(NameAndKind $nameAndKind)
  {
    $this->nameAndKind = $nameAndKind;
  }
  /** @return NameAndKind */
  public function getNameAndKind()
  {
    return $this->nameAndKind;
  }
  /** @param string */
  public function setShortId($shortId)
  {
    $this->shortId = $shortId;
  }
  /** @return string */
  public function getShortId()
  {
    return $this->shortId;
  }
  /** @param StringList */
  public function setStringList(StringList $stringList)
  {
    $this->stringList = $stringList;
  }
  /** @return StringList */
  public function getStringList()
  {
    return $this->stringList;
  }
  /** @param CounterStructuredNameAndMetadata */
  public function setStructuredNameAndMetadata(CounterStructuredNameAndMetadata $structuredNameAndMetadata)
  {
    $this->structuredNameAndMetadata = $structuredNameAndMetadata;
  }
  /** @return CounterStructuredNameAndMetadata */
  public function getStructuredNameAndMetadata()
  {
    return $this->structuredNameAndMetadata;
  }
}

class CreateJobFromTemplateRequest extends \Google\Model
{
  /** @var RuntimeEnvironment */
  public $environment;
  /** @var string */
  public $gcsPath;
  /** @var string */
  public $jobName;
  /** @var string */
  public $location;
  /** @var string[] */
  public $parameters;
  protected $environmentType = RuntimeEnvironment::class;
  protected $environmentDataType = '';
  /** @param RuntimeEnvironment */
  public function setEnvironment(RuntimeEnvironment $environment)
  {
    $this->environment = $environment;
  }
  /** @return RuntimeEnvironment */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param string */
  public function setGcsPath($gcsPath)
  {
    $this->gcsPath = $gcsPath;
  }
  /** @return string */
  public function getGcsPath()
  {
    return $this->gcsPath;
  }
  /** @param string */
  public function setJobName($jobName)
  {
    $this->jobName = $jobName;
  }
  /** @return string */
  public function getJobName()
  {
    return $this->jobName;
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

class CustomSourceLocation extends \Google\Model
{
  /** @var bool */
  public $stateful;

  /** @param bool */
  public function setStateful($stateful)
  {
    $this->stateful = $stateful;
  }
  /** @return bool */
  public function getStateful()
  {
    return $this->stateful;
  }
}

class DataDiskAssignment extends \Google\Collection
{
  /** @var string[] */
  public $dataDisks;
  /** @var string */
  public $vmInstance;
  protected $collection_key = 'dataDisks';
  /** @param string[] */
  public function setDataDisks($dataDisks)
  {
    $this->dataDisks = $dataDisks;
  }
  /** @return string[] */
  public function getDataDisks()
  {
    return $this->dataDisks;
  }
  /** @param string */
  public function setVmInstance($vmInstance)
  {
    $this->vmInstance = $vmInstance;
  }
  /** @return string */
  public function getVmInstance()
  {
    return $this->vmInstance;
  }
}

class DatastoreIODetails extends \Google\Model
{
  /** @var string */
  public $namespace;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }
  /** @return string */
  public function getNamespace()
  {
    return $this->namespace;
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

class DebugOptions extends \Google\Model
{
  /** @var bool */
  public $enableHotKeyLogging;

  /** @param bool */
  public function setEnableHotKeyLogging($enableHotKeyLogging)
  {
    $this->enableHotKeyLogging = $enableHotKeyLogging;
  }
  /** @return bool */
  public function getEnableHotKeyLogging()
  {
    return $this->enableHotKeyLogging;
  }
}

class DeleteSnapshotResponse extends \Google\Model
{
}

class DerivedSource extends \Google\Model
{
  /** @var string */
  public $derivationMode;
  /** @var Source */
  public $source;
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  /** @param string */
  public function setDerivationMode($derivationMode)
  {
    $this->derivationMode = $derivationMode;
  }
  /** @return string */
  public function getDerivationMode()
  {
    return $this->derivationMode;
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
}

class Disk extends \Google\Model
{
  /** @var string */
  public $diskType;
  /** @var string */
  public $mountPoint;
  /** @var int */
  public $sizeGb;

  /** @param string */
  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  /** @return string */
  public function getDiskType()
  {
    return $this->diskType;
  }
  /** @param string */
  public function setMountPoint($mountPoint)
  {
    $this->mountPoint = $mountPoint;
  }
  /** @return string */
  public function getMountPoint()
  {
    return $this->mountPoint;
  }
  /** @param int */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /** @return int */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
}

class DisplayData extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  /** @var string */
  public $durationValue;
  /** @var float */
  public $floatValue;
  /** @var string */
  public $int64Value;
  /** @var string */
  public $javaClassValue;
  /** @var string */
  public $key;
  /** @var string */
  public $label;
  /** @var string */
  public $namespace;
  /** @var string */
  public $shortStrValue;
  /** @var string */
  public $strValue;
  /** @var string */
  public $timestampValue;
  /** @var string */
  public $url;

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
  public function setDurationValue($durationValue)
  {
    $this->durationValue = $durationValue;
  }
  /** @return string */
  public function getDurationValue()
  {
    return $this->durationValue;
  }
  /** @param float */
  public function setFloatValue($floatValue)
  {
    $this->floatValue = $floatValue;
  }
  /** @return float */
  public function getFloatValue()
  {
    return $this->floatValue;
  }
  /** @param string */
  public function setInt64Value($int64Value)
  {
    $this->int64Value = $int64Value;
  }
  /** @return string */
  public function getInt64Value()
  {
    return $this->int64Value;
  }
  /** @param string */
  public function setJavaClassValue($javaClassValue)
  {
    $this->javaClassValue = $javaClassValue;
  }
  /** @return string */
  public function getJavaClassValue()
  {
    return $this->javaClassValue;
  }
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
  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }
  /** @return string */
  public function getNamespace()
  {
    return $this->namespace;
  }
  /** @param string */
  public function setShortStrValue($shortStrValue)
  {
    $this->shortStrValue = $shortStrValue;
  }
  /** @return string */
  public function getShortStrValue()
  {
    return $this->shortStrValue;
  }
  /** @param string */
  public function setStrValue($strValue)
  {
    $this->strValue = $strValue;
  }
  /** @return string */
  public function getStrValue()
  {
    return $this->strValue;
  }
  /** @param string */
  public function setTimestampValue($timestampValue)
  {
    $this->timestampValue = $timestampValue;
  }
  /** @return string */
  public function getTimestampValue()
  {
    return $this->timestampValue;
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

class DistributionUpdate extends \Google\Model
{
  /** @var SplitInt64 */
  public $count;
  /** @var Histogram */
  public $histogram;
  /** @var SplitInt64 */
  public $max;
  /** @var SplitInt64 */
  public $min;
  /** @var SplitInt64 */
  public $sum;
  public $sumOfSquares;
  protected $countType = SplitInt64::class;
  protected $countDataType = '';
  protected $histogramType = Histogram::class;
  protected $histogramDataType = '';
  protected $maxType = SplitInt64::class;
  protected $maxDataType = '';
  protected $minType = SplitInt64::class;
  protected $minDataType = '';
  protected $sumType = SplitInt64::class;
  protected $sumDataType = '';
  /** @param SplitInt64 */
  public function setCount(SplitInt64 $count)
  {
    $this->count = $count;
  }
  /** @return SplitInt64 */
  public function getCount()
  {
    return $this->count;
  }
  /** @param Histogram */
  public function setHistogram(Histogram $histogram)
  {
    $this->histogram = $histogram;
  }
  /** @return Histogram */
  public function getHistogram()
  {
    return $this->histogram;
  }
  /** @param SplitInt64 */
  public function setMax(SplitInt64 $max)
  {
    $this->max = $max;
  }
  /** @return SplitInt64 */
  public function getMax()
  {
    return $this->max;
  }
  /** @param SplitInt64 */
  public function setMin(SplitInt64 $min)
  {
    $this->min = $min;
  }
  /** @return SplitInt64 */
  public function getMin()
  {
    return $this->min;
  }
  /** @param SplitInt64 */
  public function setSum(SplitInt64 $sum)
  {
    $this->sum = $sum;
  }
  /** @return SplitInt64 */
  public function getSum()
  {
    return $this->sum;
  }
  public function setSumOfSquares($sumOfSquares)
  {
    $this->sumOfSquares = $sumOfSquares;
  }
  public function getSumOfSquares()
  {
    return $this->sumOfSquares;
  }
}

class DynamicSourceSplit extends \Google\Model
{
  /** @var DerivedSource */
  public $primary;
  /** @var DerivedSource */
  public $residual;
  protected $primaryType = DerivedSource::class;
  protected $primaryDataType = '';
  protected $residualType = DerivedSource::class;
  protected $residualDataType = '';
  /** @param DerivedSource */
  public function setPrimary(DerivedSource $primary)
  {
    $this->primary = $primary;
  }
  /** @return DerivedSource */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param DerivedSource */
  public function setResidual(DerivedSource $residual)
  {
    $this->residual = $residual;
  }
  /** @return DerivedSource */
  public function getResidual()
  {
    return $this->residual;
  }
}

class Environment extends \Google\Collection
{
  /** @var string */
  public $clusterManagerApiService;
  /** @var string */
  public $dataset;
  /** @var DebugOptions */
  public $debugOptions;
  /** @var string[] */
  public $experiments;
  /** @var string */
  public $flexResourceSchedulingGoal;
  /** @var array[] */
  public $internalExperiments;
  /** @var array[] */
  public $sdkPipelineOptions;
  /** @var string */
  public $serviceAccountEmail;
  /** @var string */
  public $serviceKmsKeyName;
  /** @var string[] */
  public $serviceOptions;
  /** @var string */
  public $shuffleMode;
  /** @var string */
  public $tempStoragePrefix;
  /** @var array[] */
  public $userAgent;
  /** @var array[] */
  public $version;
  /** @var WorkerPool[] */
  public $workerPools;
  /** @var string */
  public $workerRegion;
  /** @var string */
  public $workerZone;
  protected $collection_key = 'workerPools';
  protected $debugOptionsType = DebugOptions::class;
  protected $debugOptionsDataType = '';
  protected $workerPoolsType = WorkerPool::class;
  protected $workerPoolsDataType = 'array';
  /** @param string */
  public function setClusterManagerApiService($clusterManagerApiService)
  {
    $this->clusterManagerApiService = $clusterManagerApiService;
  }
  /** @return string */
  public function getClusterManagerApiService()
  {
    return $this->clusterManagerApiService;
  }
  /** @param string */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return string */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param DebugOptions */
  public function setDebugOptions(DebugOptions $debugOptions)
  {
    $this->debugOptions = $debugOptions;
  }
  /** @return DebugOptions */
  public function getDebugOptions()
  {
    return $this->debugOptions;
  }
  /** @param string[] */
  public function setExperiments($experiments)
  {
    $this->experiments = $experiments;
  }
  /** @return string[] */
  public function getExperiments()
  {
    return $this->experiments;
  }
  /** @param string */
  public function setFlexResourceSchedulingGoal($flexResourceSchedulingGoal)
  {
    $this->flexResourceSchedulingGoal = $flexResourceSchedulingGoal;
  }
  /** @return string */
  public function getFlexResourceSchedulingGoal()
  {
    return $this->flexResourceSchedulingGoal;
  }
  /** @param array[] */
  public function setInternalExperiments($internalExperiments)
  {
    $this->internalExperiments = $internalExperiments;
  }
  /** @return array[] */
  public function getInternalExperiments()
  {
    return $this->internalExperiments;
  }
  /** @param array[] */
  public function setSdkPipelineOptions($sdkPipelineOptions)
  {
    $this->sdkPipelineOptions = $sdkPipelineOptions;
  }
  /** @return array[] */
  public function getSdkPipelineOptions()
  {
    return $this->sdkPipelineOptions;
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
  public function setServiceKmsKeyName($serviceKmsKeyName)
  {
    $this->serviceKmsKeyName = $serviceKmsKeyName;
  }
  /** @return string */
  public function getServiceKmsKeyName()
  {
    return $this->serviceKmsKeyName;
  }
  /** @param string[] */
  public function setServiceOptions($serviceOptions)
  {
    $this->serviceOptions = $serviceOptions;
  }
  /** @return string[] */
  public function getServiceOptions()
  {
    return $this->serviceOptions;
  }
  /** @param string */
  public function setShuffleMode($shuffleMode)
  {
    $this->shuffleMode = $shuffleMode;
  }
  /** @return string */
  public function getShuffleMode()
  {
    return $this->shuffleMode;
  }
  /** @param string */
  public function setTempStoragePrefix($tempStoragePrefix)
  {
    $this->tempStoragePrefix = $tempStoragePrefix;
  }
  /** @return string */
  public function getTempStoragePrefix()
  {
    return $this->tempStoragePrefix;
  }
  /** @param array[] */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /** @return array[] */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
  /** @param array[] */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return array[] */
  public function getVersion()
  {
    return $this->version;
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
  /** @param string */
  public function setWorkerRegion($workerRegion)
  {
    $this->workerRegion = $workerRegion;
  }
  /** @return string */
  public function getWorkerRegion()
  {
    return $this->workerRegion;
  }
  /** @param string */
  public function setWorkerZone($workerZone)
  {
    $this->workerZone = $workerZone;
  }
  /** @return string */
  public function getWorkerZone()
  {
    return $this->workerZone;
  }
}

class ExecutionStageState extends \Google\Model
{
  /** @var string */
  public $currentStateTime;
  /** @var string */
  public $executionStageName;
  /** @var string */
  public $executionStageState;

  /** @param string */
  public function setCurrentStateTime($currentStateTime)
  {
    $this->currentStateTime = $currentStateTime;
  }
  /** @return string */
  public function getCurrentStateTime()
  {
    return $this->currentStateTime;
  }
  /** @param string */
  public function setExecutionStageName($executionStageName)
  {
    $this->executionStageName = $executionStageName;
  }
  /** @return string */
  public function getExecutionStageName()
  {
    return $this->executionStageName;
  }
  /** @param string */
  public function setExecutionStageState($executionStageState)
  {
    $this->executionStageState = $executionStageState;
  }
  /** @return string */
  public function getExecutionStageState()
  {
    return $this->executionStageState;
  }
}

class ExecutionStageSummary extends \Google\Collection
{
  /** @var ComponentSource[] */
  public $componentSource;
  /** @var ComponentTransform[] */
  public $componentTransform;
  /** @var string */
  public $id;
  /** @var StageSource[] */
  public $inputSource;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var StageSource[] */
  public $outputSource;
  /** @var string[] */
  public $prerequisiteStage;
  protected $collection_key = 'prerequisiteStage';
  protected $componentSourceType = ComponentSource::class;
  protected $componentSourceDataType = 'array';
  protected $componentTransformType = ComponentTransform::class;
  protected $componentTransformDataType = 'array';
  protected $inputSourceType = StageSource::class;
  protected $inputSourceDataType = 'array';
  protected $outputSourceType = StageSource::class;
  protected $outputSourceDataType = 'array';
  /** @param ComponentSource[] */
  public function setComponentSource($componentSource)
  {
    $this->componentSource = $componentSource;
  }
  /** @return ComponentSource[] */
  public function getComponentSource()
  {
    return $this->componentSource;
  }
  /** @param ComponentTransform[] */
  public function setComponentTransform($componentTransform)
  {
    $this->componentTransform = $componentTransform;
  }
  /** @return ComponentTransform[] */
  public function getComponentTransform()
  {
    return $this->componentTransform;
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
  /** @param StageSource[] */
  public function setInputSource($inputSource)
  {
    $this->inputSource = $inputSource;
  }
  /** @return StageSource[] */
  public function getInputSource()
  {
    return $this->inputSource;
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
  /** @param StageSource[] */
  public function setOutputSource($outputSource)
  {
    $this->outputSource = $outputSource;
  }
  /** @return StageSource[] */
  public function getOutputSource()
  {
    return $this->outputSource;
  }
  /** @param string[] */
  public function setPrerequisiteStage($prerequisiteStage)
  {
    $this->prerequisiteStage = $prerequisiteStage;
  }
  /** @return string[] */
  public function getPrerequisiteStage()
  {
    return $this->prerequisiteStage;
  }
}

class FailedLocation extends \Google\Model
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

class FileIODetails extends \Google\Model
{
  /** @var string */
  public $filePattern;

  /** @param string */
  public function setFilePattern($filePattern)
  {
    $this->filePattern = $filePattern;
  }
  /** @return string */
  public function getFilePattern()
  {
    return $this->filePattern;
  }
}

class FlattenInstruction extends \Google\Collection
{
  /** @var InstructionInput[] */
  public $inputs;
  protected $collection_key = 'inputs';
  protected $inputsType = InstructionInput::class;
  protected $inputsDataType = 'array';
  /** @param InstructionInput[] */
  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  /** @return InstructionInput[] */
  public function getInputs()
  {
    return $this->inputs;
  }
}

class FlexTemplateRuntimeEnvironment extends \Google\Collection
{
  /** @var string[] */
  public $additionalExperiments;
  /** @var string[] */
  public $additionalUserLabels;
  /** @var string */
  public $autoscalingAlgorithm;
  /** @var int */
  public $diskSizeGb;
  /** @var bool */
  public $dumpHeapOnOom;
  /** @var bool */
  public $enableLauncherVmSerialPortLogging;
  /** @var bool */
  public $enableStreamingEngine;
  /** @var string */
  public $flexrsGoal;
  /** @var string */
  public $ipConfiguration;
  /** @var string */
  public $kmsKeyName;
  /** @var string */
  public $launcherMachineType;
  /** @var string */
  public $machineType;
  /** @var int */
  public $maxWorkers;
  /** @var string */
  public $network;
  /** @var int */
  public $numWorkers;
  /** @var string */
  public $saveHeapDumpsToGcsPath;
  /** @var string */
  public $sdkContainerImage;
  /** @var string */
  public $serviceAccountEmail;
  /** @var string */
  public $stagingLocation;
  /** @var string */
  public $subnetwork;
  /** @var string */
  public $tempLocation;
  /** @var string */
  public $workerRegion;
  /** @var string */
  public $workerZone;
  /** @var string */
  public $zone;
  protected $collection_key = 'additionalExperiments';
  /** @param string[] */
  public function setAdditionalExperiments($additionalExperiments)
  {
    $this->additionalExperiments = $additionalExperiments;
  }
  /** @return string[] */
  public function getAdditionalExperiments()
  {
    return $this->additionalExperiments;
  }
  /** @param string[] */
  public function setAdditionalUserLabels($additionalUserLabels)
  {
    $this->additionalUserLabels = $additionalUserLabels;
  }
  /** @return string[] */
  public function getAdditionalUserLabels()
  {
    return $this->additionalUserLabels;
  }
  /** @param string */
  public function setAutoscalingAlgorithm($autoscalingAlgorithm)
  {
    $this->autoscalingAlgorithm = $autoscalingAlgorithm;
  }
  /** @return string */
  public function getAutoscalingAlgorithm()
  {
    return $this->autoscalingAlgorithm;
  }
  /** @param int */
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  /** @return int */
  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }
  /** @param bool */
  public function setDumpHeapOnOom($dumpHeapOnOom)
  {
    $this->dumpHeapOnOom = $dumpHeapOnOom;
  }
  /** @return bool */
  public function getDumpHeapOnOom()
  {
    return $this->dumpHeapOnOom;
  }
  /** @param bool */
  public function setEnableLauncherVmSerialPortLogging($enableLauncherVmSerialPortLogging)
  {
    $this->enableLauncherVmSerialPortLogging = $enableLauncherVmSerialPortLogging;
  }
  /** @return bool */
  public function getEnableLauncherVmSerialPortLogging()
  {
    return $this->enableLauncherVmSerialPortLogging;
  }
  /** @param bool */
  public function setEnableStreamingEngine($enableStreamingEngine)
  {
    $this->enableStreamingEngine = $enableStreamingEngine;
  }
  /** @return bool */
  public function getEnableStreamingEngine()
  {
    return $this->enableStreamingEngine;
  }
  /** @param string */
  public function setFlexrsGoal($flexrsGoal)
  {
    $this->flexrsGoal = $flexrsGoal;
  }
  /** @return string */
  public function getFlexrsGoal()
  {
    return $this->flexrsGoal;
  }
  /** @param string */
  public function setIpConfiguration($ipConfiguration)
  {
    $this->ipConfiguration = $ipConfiguration;
  }
  /** @return string */
  public function getIpConfiguration()
  {
    return $this->ipConfiguration;
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
  public function setLauncherMachineType($launcherMachineType)
  {
    $this->launcherMachineType = $launcherMachineType;
  }
  /** @return string */
  public function getLauncherMachineType()
  {
    return $this->launcherMachineType;
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
  /** @param int */
  public function setMaxWorkers($maxWorkers)
  {
    $this->maxWorkers = $maxWorkers;
  }
  /** @return int */
  public function getMaxWorkers()
  {
    return $this->maxWorkers;
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
  /** @param int */
  public function setNumWorkers($numWorkers)
  {
    $this->numWorkers = $numWorkers;
  }
  /** @return int */
  public function getNumWorkers()
  {
    return $this->numWorkers;
  }
  /** @param string */
  public function setSaveHeapDumpsToGcsPath($saveHeapDumpsToGcsPath)
  {
    $this->saveHeapDumpsToGcsPath = $saveHeapDumpsToGcsPath;
  }
  /** @return string */
  public function getSaveHeapDumpsToGcsPath()
  {
    return $this->saveHeapDumpsToGcsPath;
  }
  /** @param string */
  public function setSdkContainerImage($sdkContainerImage)
  {
    $this->sdkContainerImage = $sdkContainerImage;
  }
  /** @return string */
  public function getSdkContainerImage()
  {
    return $this->sdkContainerImage;
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
  public function setStagingLocation($stagingLocation)
  {
    $this->stagingLocation = $stagingLocation;
  }
  /** @return string */
  public function getStagingLocation()
  {
    return $this->stagingLocation;
  }
  /** @param string */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /** @return string */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
  /** @param string */
  public function setTempLocation($tempLocation)
  {
    $this->tempLocation = $tempLocation;
  }
  /** @return string */
  public function getTempLocation()
  {
    return $this->tempLocation;
  }
  /** @param string */
  public function setWorkerRegion($workerRegion)
  {
    $this->workerRegion = $workerRegion;
  }
  /** @return string */
  public function getWorkerRegion()
  {
    return $this->workerRegion;
  }
  /** @param string */
  public function setWorkerZone($workerZone)
  {
    $this->workerZone = $workerZone;
  }
  /** @return string */
  public function getWorkerZone()
  {
    return $this->workerZone;
  }
  /** @param string */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /** @return string */
  public function getZone()
  {
    return $this->zone;
  }
}

class FloatingPointList extends \Google\Collection
{
  public $elements;
  protected $collection_key = 'elements';
  public function setElements($elements)
  {
    $this->elements = $elements;
  }
  public function getElements()
  {
    return $this->elements;
  }
}

class FloatingPointMean extends \Google\Model
{
  /** @var SplitInt64 */
  public $count;
  public $sum;
  protected $countType = SplitInt64::class;
  protected $countDataType = '';
  /** @param SplitInt64 */
  public function setCount(SplitInt64 $count)
  {
    $this->count = $count;
  }
  /** @return SplitInt64 */
  public function getCount()
  {
    return $this->count;
  }
  public function setSum($sum)
  {
    $this->sum = $sum;
  }
  public function getSum()
  {
    return $this->sum;
  }
}

class GetDebugConfigRequest extends \Google\Model
{
  /** @var string */
  public $componentId;
  /** @var string */
  public $location;
  /** @var string */
  public $workerId;

  /** @param string */
  public function setComponentId($componentId)
  {
    $this->componentId = $componentId;
  }
  /** @return string */
  public function getComponentId()
  {
    return $this->componentId;
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
  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
  /** @return string */
  public function getWorkerId()
  {
    return $this->workerId;
  }
}

class GetDebugConfigResponse extends \Google\Model
{
  /** @var string */
  public $config;

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
}

class GetTemplateResponse extends \Google\Model
{
  /** @var TemplateMetadata */
  public $metadata;
  /** @var RuntimeMetadata */
  public $runtimeMetadata;
  /** @var Status */
  public $status;
  /** @var string */
  public $templateType;
  protected $metadataType = TemplateMetadata::class;
  protected $metadataDataType = '';
  protected $runtimeMetadataType = RuntimeMetadata::class;
  protected $runtimeMetadataDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param TemplateMetadata */
  public function setMetadata(TemplateMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return TemplateMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param RuntimeMetadata */
  public function setRuntimeMetadata(RuntimeMetadata $runtimeMetadata)
  {
    $this->runtimeMetadata = $runtimeMetadata;
  }
  /** @return RuntimeMetadata */
  public function getRuntimeMetadata()
  {
    return $this->runtimeMetadata;
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
  /** @param string */
  public function setTemplateType($templateType)
  {
    $this->templateType = $templateType;
  }
  /** @return string */
  public function getTemplateType()
  {
    return $this->templateType;
  }
}

class Histogram extends \Google\Collection
{
  /** @var string[] */
  public $bucketCounts;
  /** @var int */
  public $firstBucketOffset;
  protected $collection_key = 'bucketCounts';
  /** @param string[] */
  public function setBucketCounts($bucketCounts)
  {
    $this->bucketCounts = $bucketCounts;
  }
  /** @return string[] */
  public function getBucketCounts()
  {
    return $this->bucketCounts;
  }
  /** @param int */
  public function setFirstBucketOffset($firstBucketOffset)
  {
    $this->firstBucketOffset = $firstBucketOffset;
  }
  /** @return int */
  public function getFirstBucketOffset()
  {
    return $this->firstBucketOffset;
  }
}

class HotKeyDebuggingInfo extends \Google\Model
{
  /** @var HotKeyInfo[] */
  public $detectedHotKeys;
  protected $detectedHotKeysType = HotKeyInfo::class;
  protected $detectedHotKeysDataType = 'map';
  /** @param HotKeyInfo[] */
  public function setDetectedHotKeys($detectedHotKeys)
  {
    $this->detectedHotKeys = $detectedHotKeys;
  }
  /** @return HotKeyInfo[] */
  public function getDetectedHotKeys()
  {
    return $this->detectedHotKeys;
  }
}

class HotKeyDetection extends \Google\Model
{
  /** @var string */
  public $hotKeyAge;
  /** @var string */
  public $systemName;
  /** @var string */
  public $userStepName;

  /** @param string */
  public function setHotKeyAge($hotKeyAge)
  {
    $this->hotKeyAge = $hotKeyAge;
  }
  /** @return string */
  public function getHotKeyAge()
  {
    return $this->hotKeyAge;
  }
  /** @param string */
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  /** @return string */
  public function getSystemName()
  {
    return $this->systemName;
  }
  /** @param string */
  public function setUserStepName($userStepName)
  {
    $this->userStepName = $userStepName;
  }
  /** @return string */
  public function getUserStepName()
  {
    return $this->userStepName;
  }
}

class HotKeyInfo extends \Google\Model
{
  /** @var string */
  public $hotKeyAge;
  /** @var string */
  public $key;
  /** @var bool */
  public $keyTruncated;

  /** @param string */
  public function setHotKeyAge($hotKeyAge)
  {
    $this->hotKeyAge = $hotKeyAge;
  }
  /** @return string */
  public function getHotKeyAge()
  {
    return $this->hotKeyAge;
  }
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
  /** @param bool */
  public function setKeyTruncated($keyTruncated)
  {
    $this->keyTruncated = $keyTruncated;
  }
  /** @return bool */
  public function getKeyTruncated()
  {
    return $this->keyTruncated;
  }
}

class InstructionInput extends \Google\Model
{
  /** @var int */
  public $outputNum;
  /** @var int */
  public $producerInstructionIndex;

  /** @param int */
  public function setOutputNum($outputNum)
  {
    $this->outputNum = $outputNum;
  }
  /** @return int */
  public function getOutputNum()
  {
    return $this->outputNum;
  }
  /** @param int */
  public function setProducerInstructionIndex($producerInstructionIndex)
  {
    $this->producerInstructionIndex = $producerInstructionIndex;
  }
  /** @return int */
  public function getProducerInstructionIndex()
  {
    return $this->producerInstructionIndex;
  }
}

class InstructionOutput extends \Google\Model
{
  /** @var array[] */
  public $codec;
  /** @var string */
  public $name;
  /** @var bool */
  public $onlyCountKeyBytes;
  /** @var bool */
  public $onlyCountValueBytes;
  /** @var string */
  public $originalName;
  /** @var string */
  public $systemName;

  /** @param array[] */
  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  /** @return array[] */
  public function getCodec()
  {
    return $this->codec;
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
  public function setOnlyCountKeyBytes($onlyCountKeyBytes)
  {
    $this->onlyCountKeyBytes = $onlyCountKeyBytes;
  }
  /** @return bool */
  public function getOnlyCountKeyBytes()
  {
    return $this->onlyCountKeyBytes;
  }
  /** @param bool */
  public function setOnlyCountValueBytes($onlyCountValueBytes)
  {
    $this->onlyCountValueBytes = $onlyCountValueBytes;
  }
  /** @return bool */
  public function getOnlyCountValueBytes()
  {
    return $this->onlyCountValueBytes;
  }
  /** @param string */
  public function setOriginalName($originalName)
  {
    $this->originalName = $originalName;
  }
  /** @return string */
  public function getOriginalName()
  {
    return $this->originalName;
  }
  /** @param string */
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  /** @return string */
  public function getSystemName()
  {
    return $this->systemName;
  }
}

class IntegerGauge extends \Google\Model
{
  /** @var string */
  public $timestamp;
  /** @var SplitInt64 */
  public $value;
  protected $valueType = SplitInt64::class;
  protected $valueDataType = '';
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
  /** @param SplitInt64 */
  public function setValue(SplitInt64 $value)
  {
    $this->value = $value;
  }
  /** @return SplitInt64 */
  public function getValue()
  {
    return $this->value;
  }
}

class IntegerList extends \Google\Collection
{
  /** @var SplitInt64[] */
  public $elements;
  protected $collection_key = 'elements';
  protected $elementsType = SplitInt64::class;
  protected $elementsDataType = 'array';
  /** @param SplitInt64[] */
  public function setElements($elements)
  {
    $this->elements = $elements;
  }
  /** @return SplitInt64[] */
  public function getElements()
  {
    return $this->elements;
  }
}

class IntegerMean extends \Google\Model
{
  /** @var SplitInt64 */
  public $count;
  /** @var SplitInt64 */
  public $sum;
  protected $countType = SplitInt64::class;
  protected $countDataType = '';
  protected $sumType = SplitInt64::class;
  protected $sumDataType = '';
  /** @param SplitInt64 */
  public function setCount(SplitInt64 $count)
  {
    $this->count = $count;
  }
  /** @return SplitInt64 */
  public function getCount()
  {
    return $this->count;
  }
  /** @param SplitInt64 */
  public function setSum(SplitInt64 $sum)
  {
    $this->sum = $sum;
  }
  /** @return SplitInt64 */
  public function getSum()
  {
    return $this->sum;
  }
}

class Job extends \Google\Collection
{
  /** @var string */
  public $clientRequestId;
  /** @var string */
  public $createTime;
  /** @var string */
  public $createdFromSnapshotId;
  /** @var string */
  public $currentState;
  /** @var string */
  public $currentStateTime;
  /** @var Environment */
  public $environment;
  /** @var JobExecutionInfo */
  public $executionInfo;
  /** @var string */
  public $id;
  /** @var JobMetadata */
  public $jobMetadata;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $location;
  /** @var string */
  public $name;
  /** @var PipelineDescription */
  public $pipelineDescription;
  /** @var string */
  public $projectId;
  /** @var string */
  public $replaceJobId;
  /** @var string */
  public $replacedByJobId;
  /** @var string */
  public $requestedState;
  /** @var bool */
  public $satisfiesPzs;
  /** @var ExecutionStageState[] */
  public $stageStates;
  /** @var string */
  public $startTime;
  /** @var Step[] */
  public $steps;
  /** @var string */
  public $stepsLocation;
  /** @var string[] */
  public $tempFiles;
  /** @var string[] */
  public $transformNameMapping;
  /** @var string */
  public $type;
  protected $collection_key = 'tempFiles';
  protected $environmentType = Environment::class;
  protected $environmentDataType = '';
  protected $executionInfoType = JobExecutionInfo::class;
  protected $executionInfoDataType = '';
  protected $jobMetadataType = JobMetadata::class;
  protected $jobMetadataDataType = '';
  protected $pipelineDescriptionType = PipelineDescription::class;
  protected $pipelineDescriptionDataType = '';
  protected $stageStatesType = ExecutionStageState::class;
  protected $stageStatesDataType = 'array';
  protected $stepsType = Step::class;
  protected $stepsDataType = 'array';
  /** @param string */
  public function setClientRequestId($clientRequestId)
  {
    $this->clientRequestId = $clientRequestId;
  }
  /** @return string */
  public function getClientRequestId()
  {
    return $this->clientRequestId;
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
  public function setCreatedFromSnapshotId($createdFromSnapshotId)
  {
    $this->createdFromSnapshotId = $createdFromSnapshotId;
  }
  /** @return string */
  public function getCreatedFromSnapshotId()
  {
    return $this->createdFromSnapshotId;
  }
  /** @param string */
  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }
  /** @return string */
  public function getCurrentState()
  {
    return $this->currentState;
  }
  /** @param string */
  public function setCurrentStateTime($currentStateTime)
  {
    $this->currentStateTime = $currentStateTime;
  }
  /** @return string */
  public function getCurrentStateTime()
  {
    return $this->currentStateTime;
  }
  /** @param Environment */
  public function setEnvironment(Environment $environment)
  {
    $this->environment = $environment;
  }
  /** @return Environment */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param JobExecutionInfo */
  public function setExecutionInfo(JobExecutionInfo $executionInfo)
  {
    $this->executionInfo = $executionInfo;
  }
  /** @return JobExecutionInfo */
  public function getExecutionInfo()
  {
    return $this->executionInfo;
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
  /** @param JobMetadata */
  public function setJobMetadata(JobMetadata $jobMetadata)
  {
    $this->jobMetadata = $jobMetadata;
  }
  /** @return JobMetadata */
  public function getJobMetadata()
  {
    return $this->jobMetadata;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param PipelineDescription */
  public function setPipelineDescription(PipelineDescription $pipelineDescription)
  {
    $this->pipelineDescription = $pipelineDescription;
  }
  /** @return PipelineDescription */
  public function getPipelineDescription()
  {
    return $this->pipelineDescription;
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
  public function setReplaceJobId($replaceJobId)
  {
    $this->replaceJobId = $replaceJobId;
  }
  /** @return string */
  public function getReplaceJobId()
  {
    return $this->replaceJobId;
  }
  /** @param string */
  public function setReplacedByJobId($replacedByJobId)
  {
    $this->replacedByJobId = $replacedByJobId;
  }
  /** @return string */
  public function getReplacedByJobId()
  {
    return $this->replacedByJobId;
  }
  /** @param string */
  public function setRequestedState($requestedState)
  {
    $this->requestedState = $requestedState;
  }
  /** @return string */
  public function getRequestedState()
  {
    return $this->requestedState;
  }
  /** @param bool */
  public function setSatisfiesPzs($satisfiesPzs)
  {
    $this->satisfiesPzs = $satisfiesPzs;
  }
  /** @return bool */
  public function getSatisfiesPzs()
  {
    return $this->satisfiesPzs;
  }
  /** @param ExecutionStageState[] */
  public function setStageStates($stageStates)
  {
    $this->stageStates = $stageStates;
  }
  /** @return ExecutionStageState[] */
  public function getStageStates()
  {
    return $this->stageStates;
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
  /** @param string */
  public function setStepsLocation($stepsLocation)
  {
    $this->stepsLocation = $stepsLocation;
  }
  /** @return string */
  public function getStepsLocation()
  {
    return $this->stepsLocation;
  }
  /** @param string[] */
  public function setTempFiles($tempFiles)
  {
    $this->tempFiles = $tempFiles;
  }
  /** @return string[] */
  public function getTempFiles()
  {
    return $this->tempFiles;
  }
  /** @param string[] */
  public function setTransformNameMapping($transformNameMapping)
  {
    $this->transformNameMapping = $transformNameMapping;
  }
  /** @return string[] */
  public function getTransformNameMapping()
  {
    return $this->transformNameMapping;
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

class JobExecutionDetails extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var StageSummary[] */
  public $stages;
  protected $collection_key = 'stages';
  protected $stagesType = StageSummary::class;
  protected $stagesDataType = 'array';
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
  /** @param StageSummary[] */
  public function setStages($stages)
  {
    $this->stages = $stages;
  }
  /** @return StageSummary[] */
  public function getStages()
  {
    return $this->stages;
  }
}

class JobExecutionInfo extends \Google\Model
{
  /** @var JobExecutionStageInfo[] */
  public $stages;
  protected $stagesType = JobExecutionStageInfo::class;
  protected $stagesDataType = 'map';
  /** @param JobExecutionStageInfo[] */
  public function setStages($stages)
  {
    $this->stages = $stages;
  }
  /** @return JobExecutionStageInfo[] */
  public function getStages()
  {
    return $this->stages;
  }
}

class JobExecutionStageInfo extends \Google\Collection
{
  /** @var string[] */
  public $stepName;
  protected $collection_key = 'stepName';
  /** @param string[] */
  public function setStepName($stepName)
  {
    $this->stepName = $stepName;
  }
  /** @return string[] */
  public function getStepName()
  {
    return $this->stepName;
  }
}

class JobMessage extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $messageImportance;
  /** @var string */
  public $messageText;
  /** @var string */
  public $time;

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
  public function setMessageImportance($messageImportance)
  {
    $this->messageImportance = $messageImportance;
  }
  /** @return string */
  public function getMessageImportance()
  {
    return $this->messageImportance;
  }
  /** @param string */
  public function setMessageText($messageText)
  {
    $this->messageText = $messageText;
  }
  /** @return string */
  public function getMessageText()
  {
    return $this->messageText;
  }
  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
  }
}

class JobMetadata extends \Google\Collection
{
  /** @var BigTableIODetails[] */
  public $bigTableDetails;
  /** @var BigQueryIODetails[] */
  public $bigqueryDetails;
  /** @var DatastoreIODetails[] */
  public $datastoreDetails;
  /** @var FileIODetails[] */
  public $fileDetails;
  /** @var PubSubIODetails[] */
  public $pubsubDetails;
  /** @var SdkVersion */
  public $sdkVersion;
  /** @var SpannerIODetails[] */
  public $spannerDetails;
  protected $collection_key = 'spannerDetails';
  protected $bigTableDetailsType = BigTableIODetails::class;
  protected $bigTableDetailsDataType = 'array';
  protected $bigqueryDetailsType = BigQueryIODetails::class;
  protected $bigqueryDetailsDataType = 'array';
  protected $datastoreDetailsType = DatastoreIODetails::class;
  protected $datastoreDetailsDataType = 'array';
  protected $fileDetailsType = FileIODetails::class;
  protected $fileDetailsDataType = 'array';
  protected $pubsubDetailsType = PubSubIODetails::class;
  protected $pubsubDetailsDataType = 'array';
  protected $sdkVersionType = SdkVersion::class;
  protected $sdkVersionDataType = '';
  protected $spannerDetailsType = SpannerIODetails::class;
  protected $spannerDetailsDataType = 'array';
  /** @param BigTableIODetails[] */
  public function setBigTableDetails($bigTableDetails)
  {
    $this->bigTableDetails = $bigTableDetails;
  }
  /** @return BigTableIODetails[] */
  public function getBigTableDetails()
  {
    return $this->bigTableDetails;
  }
  /** @param BigQueryIODetails[] */
  public function setBigqueryDetails($bigqueryDetails)
  {
    $this->bigqueryDetails = $bigqueryDetails;
  }
  /** @return BigQueryIODetails[] */
  public function getBigqueryDetails()
  {
    return $this->bigqueryDetails;
  }
  /** @param DatastoreIODetails[] */
  public function setDatastoreDetails($datastoreDetails)
  {
    $this->datastoreDetails = $datastoreDetails;
  }
  /** @return DatastoreIODetails[] */
  public function getDatastoreDetails()
  {
    return $this->datastoreDetails;
  }
  /** @param FileIODetails[] */
  public function setFileDetails($fileDetails)
  {
    $this->fileDetails = $fileDetails;
  }
  /** @return FileIODetails[] */
  public function getFileDetails()
  {
    return $this->fileDetails;
  }
  /** @param PubSubIODetails[] */
  public function setPubsubDetails($pubsubDetails)
  {
    $this->pubsubDetails = $pubsubDetails;
  }
  /** @return PubSubIODetails[] */
  public function getPubsubDetails()
  {
    return $this->pubsubDetails;
  }
  /** @param SdkVersion */
  public function setSdkVersion(SdkVersion $sdkVersion)
  {
    $this->sdkVersion = $sdkVersion;
  }
  /** @return SdkVersion */
  public function getSdkVersion()
  {
    return $this->sdkVersion;
  }
  /** @param SpannerIODetails[] */
  public function setSpannerDetails($spannerDetails)
  {
    $this->spannerDetails = $spannerDetails;
  }
  /** @return SpannerIODetails[] */
  public function getSpannerDetails()
  {
    return $this->spannerDetails;
  }
}

class JobMetrics extends \Google\Collection
{
  /** @var string */
  public $metricTime;
  /** @var MetricUpdate[] */
  public $metrics;
  protected $collection_key = 'metrics';
  protected $metricsType = MetricUpdate::class;
  protected $metricsDataType = 'array';
  /** @param string */
  public function setMetricTime($metricTime)
  {
    $this->metricTime = $metricTime;
  }
  /** @return string */
  public function getMetricTime()
  {
    return $this->metricTime;
  }
  /** @param MetricUpdate[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return MetricUpdate[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
}

class KeyRangeDataDiskAssignment extends \Google\Model
{
  /** @var string */
  public $dataDisk;
  /** @var string */
  public $end;
  /** @var string */
  public $start;

  /** @param string */
  public function setDataDisk($dataDisk)
  {
    $this->dataDisk = $dataDisk;
  }
  /** @return string */
  public function getDataDisk()
  {
    return $this->dataDisk;
  }
  /** @param string */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return string */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param string */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return string */
  public function getStart()
  {
    return $this->start;
  }
}

class KeyRangeLocation extends \Google\Model
{
  /** @var string */
  public $dataDisk;
  /** @var string */
  public $deliveryEndpoint;
  /** @var string */
  public $deprecatedPersistentDirectory;
  /** @var string */
  public $end;
  /** @var string */
  public $start;

  /** @param string */
  public function setDataDisk($dataDisk)
  {
    $this->dataDisk = $dataDisk;
  }
  /** @return string */
  public function getDataDisk()
  {
    return $this->dataDisk;
  }
  /** @param string */
  public function setDeliveryEndpoint($deliveryEndpoint)
  {
    $this->deliveryEndpoint = $deliveryEndpoint;
  }
  /** @return string */
  public function getDeliveryEndpoint()
  {
    return $this->deliveryEndpoint;
  }
  /** @param string */
  public function setDeprecatedPersistentDirectory($deprecatedPersistentDirectory)
  {
    $this->deprecatedPersistentDirectory = $deprecatedPersistentDirectory;
  }
  /** @return string */
  public function getDeprecatedPersistentDirectory()
  {
    return $this->deprecatedPersistentDirectory;
  }
  /** @param string */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return string */
  public function getEnd()
  {
    return $this->end;
  }
  /** @param string */
  public function setStart($start)
  {
    $this->start = $start;
  }
  /** @return string */
  public function getStart()
  {
    return $this->start;
  }
}

class LaunchFlexTemplateParameter extends \Google\Model
{
  /** @var ContainerSpec */
  public $containerSpec;
  /** @var string */
  public $containerSpecGcsPath;
  /** @var FlexTemplateRuntimeEnvironment */
  public $environment;
  /** @var string */
  public $jobName;
  /** @var string[] */
  public $launchOptions;
  /** @var string[] */
  public $parameters;
  /** @var string[] */
  public $transformNameMappings;
  /** @var bool */
  public $update;
  protected $containerSpecType = ContainerSpec::class;
  protected $containerSpecDataType = '';
  protected $environmentType = FlexTemplateRuntimeEnvironment::class;
  protected $environmentDataType = '';
  /** @param ContainerSpec */
  public function setContainerSpec(ContainerSpec $containerSpec)
  {
    $this->containerSpec = $containerSpec;
  }
  /** @return ContainerSpec */
  public function getContainerSpec()
  {
    return $this->containerSpec;
  }
  /** @param string */
  public function setContainerSpecGcsPath($containerSpecGcsPath)
  {
    $this->containerSpecGcsPath = $containerSpecGcsPath;
  }
  /** @return string */
  public function getContainerSpecGcsPath()
  {
    return $this->containerSpecGcsPath;
  }
  /** @param FlexTemplateRuntimeEnvironment */
  public function setEnvironment(FlexTemplateRuntimeEnvironment $environment)
  {
    $this->environment = $environment;
  }
  /** @return FlexTemplateRuntimeEnvironment */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param string */
  public function setJobName($jobName)
  {
    $this->jobName = $jobName;
  }
  /** @return string */
  public function getJobName()
  {
    return $this->jobName;
  }
  /** @param string[] */
  public function setLaunchOptions($launchOptions)
  {
    $this->launchOptions = $launchOptions;
  }
  /** @return string[] */
  public function getLaunchOptions()
  {
    return $this->launchOptions;
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
  /** @param string[] */
  public function setTransformNameMappings($transformNameMappings)
  {
    $this->transformNameMappings = $transformNameMappings;
  }
  /** @return string[] */
  public function getTransformNameMappings()
  {
    return $this->transformNameMappings;
  }
  /** @param bool */
  public function setUpdate($update)
  {
    $this->update = $update;
  }
  /** @return bool */
  public function getUpdate()
  {
    return $this->update;
  }
}

class LaunchFlexTemplateRequest extends \Google\Model
{
  /** @var LaunchFlexTemplateParameter */
  public $launchParameter;
  /** @var bool */
  public $validateOnly;
  protected $launchParameterType = LaunchFlexTemplateParameter::class;
  protected $launchParameterDataType = '';
  /** @param LaunchFlexTemplateParameter */
  public function setLaunchParameter(LaunchFlexTemplateParameter $launchParameter)
  {
    $this->launchParameter = $launchParameter;
  }
  /** @return LaunchFlexTemplateParameter */
  public function getLaunchParameter()
  {
    return $this->launchParameter;
  }
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

class LaunchFlexTemplateResponse extends \Google\Model
{
  /** @var Job */
  public $job;
  protected $jobType = Job::class;
  protected $jobDataType = '';
  /** @param Job */
  public function setJob(Job $job)
  {
    $this->job = $job;
  }
  /** @return Job */
  public function getJob()
  {
    return $this->job;
  }
}

class LaunchTemplateParameters extends \Google\Model
{
  /** @var RuntimeEnvironment */
  public $environment;
  /** @var string */
  public $jobName;
  /** @var string[] */
  public $parameters;
  /** @var string[] */
  public $transformNameMapping;
  /** @var bool */
  public $update;
  protected $environmentType = RuntimeEnvironment::class;
  protected $environmentDataType = '';
  /** @param RuntimeEnvironment */
  public function setEnvironment(RuntimeEnvironment $environment)
  {
    $this->environment = $environment;
  }
  /** @return RuntimeEnvironment */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /** @param string */
  public function setJobName($jobName)
  {
    $this->jobName = $jobName;
  }
  /** @return string */
  public function getJobName()
  {
    return $this->jobName;
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
  /** @param string[] */
  public function setTransformNameMapping($transformNameMapping)
  {
    $this->transformNameMapping = $transformNameMapping;
  }
  /** @return string[] */
  public function getTransformNameMapping()
  {
    return $this->transformNameMapping;
  }
  /** @param bool */
  public function setUpdate($update)
  {
    $this->update = $update;
  }
  /** @return bool */
  public function getUpdate()
  {
    return $this->update;
  }
}

class LaunchTemplateResponse extends \Google\Model
{
  /** @var Job */
  public $job;
  protected $jobType = Job::class;
  protected $jobDataType = '';
  /** @param Job */
  public function setJob(Job $job)
  {
    $this->job = $job;
  }
  /** @return Job */
  public function getJob()
  {
    return $this->job;
  }
}

class LeaseWorkItemRequest extends \Google\Collection
{
  /** @var string */
  public $currentWorkerTime;
  /** @var string */
  public $location;
  /** @var string */
  public $requestedLeaseDuration;
  /** @var array[] */
  public $unifiedWorkerRequest;
  /** @var string[] */
  public $workItemTypes;
  /** @var string[] */
  public $workerCapabilities;
  /** @var string */
  public $workerId;
  protected $collection_key = 'workerCapabilities';
  /** @param string */
  public function setCurrentWorkerTime($currentWorkerTime)
  {
    $this->currentWorkerTime = $currentWorkerTime;
  }
  /** @return string */
  public function getCurrentWorkerTime()
  {
    return $this->currentWorkerTime;
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
  public function setRequestedLeaseDuration($requestedLeaseDuration)
  {
    $this->requestedLeaseDuration = $requestedLeaseDuration;
  }
  /** @return string */
  public function getRequestedLeaseDuration()
  {
    return $this->requestedLeaseDuration;
  }
  /** @param array[] */
  public function setUnifiedWorkerRequest($unifiedWorkerRequest)
  {
    $this->unifiedWorkerRequest = $unifiedWorkerRequest;
  }
  /** @return array[] */
  public function getUnifiedWorkerRequest()
  {
    return $this->unifiedWorkerRequest;
  }
  /** @param string[] */
  public function setWorkItemTypes($workItemTypes)
  {
    $this->workItemTypes = $workItemTypes;
  }
  /** @return string[] */
  public function getWorkItemTypes()
  {
    return $this->workItemTypes;
  }
  /** @param string[] */
  public function setWorkerCapabilities($workerCapabilities)
  {
    $this->workerCapabilities = $workerCapabilities;
  }
  /** @return string[] */
  public function getWorkerCapabilities()
  {
    return $this->workerCapabilities;
  }
  /** @param string */
  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
  /** @return string */
  public function getWorkerId()
  {
    return $this->workerId;
  }
}

class LeaseWorkItemResponse extends \Google\Collection
{
  /** @var array[] */
  public $unifiedWorkerResponse;
  /** @var WorkItem[] */
  public $workItems;
  protected $collection_key = 'workItems';
  protected $workItemsType = WorkItem::class;
  protected $workItemsDataType = 'array';
  /** @param array[] */
  public function setUnifiedWorkerResponse($unifiedWorkerResponse)
  {
    $this->unifiedWorkerResponse = $unifiedWorkerResponse;
  }
  /** @return array[] */
  public function getUnifiedWorkerResponse()
  {
    return $this->unifiedWorkerResponse;
  }
  /** @param WorkItem[] */
  public function setWorkItems($workItems)
  {
    $this->workItems = $workItems;
  }
  /** @return WorkItem[] */
  public function getWorkItems()
  {
    return $this->workItems;
  }
}

class ListJobMessagesResponse extends \Google\Collection
{
  /** @var AutoscalingEvent[] */
  public $autoscalingEvents;
  /** @var JobMessage[] */
  public $jobMessages;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobMessages';
  protected $autoscalingEventsType = AutoscalingEvent::class;
  protected $autoscalingEventsDataType = 'array';
  protected $jobMessagesType = JobMessage::class;
  protected $jobMessagesDataType = 'array';
  /** @param AutoscalingEvent[] */
  public function setAutoscalingEvents($autoscalingEvents)
  {
    $this->autoscalingEvents = $autoscalingEvents;
  }
  /** @return AutoscalingEvent[] */
  public function getAutoscalingEvents()
  {
    return $this->autoscalingEvents;
  }
  /** @param JobMessage[] */
  public function setJobMessages($jobMessages)
  {
    $this->jobMessages = $jobMessages;
  }
  /** @return JobMessage[] */
  public function getJobMessages()
  {
    return $this->jobMessages;
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

class ListJobsResponse extends \Google\Collection
{
  /** @var FailedLocation[] */
  public $failedLocation;
  /** @var Job[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
  protected $failedLocationType = FailedLocation::class;
  protected $failedLocationDataType = 'array';
  protected $jobsType = Job::class;
  protected $jobsDataType = 'array';
  /** @param FailedLocation[] */
  public function setFailedLocation($failedLocation)
  {
    $this->failedLocation = $failedLocation;
  }
  /** @return FailedLocation[] */
  public function getFailedLocation()
  {
    return $this->failedLocation;
  }
  /** @param Job[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return Job[] */
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

class ListSnapshotsResponse extends \Google\Collection
{
  /** @var Snapshot[] */
  public $snapshots;
  protected $collection_key = 'snapshots';
  protected $snapshotsType = Snapshot::class;
  protected $snapshotsDataType = 'array';
  /** @param Snapshot[] */
  public function setSnapshots($snapshots)
  {
    $this->snapshots = $snapshots;
  }
  /** @return Snapshot[] */
  public function getSnapshots()
  {
    return $this->snapshots;
  }
}

class MapTask extends \Google\Collection
{
  /** @var string */
  public $counterPrefix;
  /** @var ParallelInstruction[] */
  public $instructions;
  /** @var string */
  public $stageName;
  /** @var string */
  public $systemName;
  protected $collection_key = 'instructions';
  protected $instructionsType = ParallelInstruction::class;
  protected $instructionsDataType = 'array';
  /** @param string */
  public function setCounterPrefix($counterPrefix)
  {
    $this->counterPrefix = $counterPrefix;
  }
  /** @return string */
  public function getCounterPrefix()
  {
    return $this->counterPrefix;
  }
  /** @param ParallelInstruction[] */
  public function setInstructions($instructions)
  {
    $this->instructions = $instructions;
  }
  /** @return ParallelInstruction[] */
  public function getInstructions()
  {
    return $this->instructions;
  }
  /** @param string */
  public function setStageName($stageName)
  {
    $this->stageName = $stageName;
  }
  /** @return string */
  public function getStageName()
  {
    return $this->stageName;
  }
  /** @param string */
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  /** @return string */
  public function getSystemName()
  {
    return $this->systemName;
  }
}

class MemInfo extends \Google\Model
{
  /** @var string */
  public $currentLimitBytes;
  /** @var string */
  public $currentOoms;
  /** @var string */
  public $currentRssBytes;
  /** @var string */
  public $timestamp;
  /** @var string */
  public $totalGbMs;

  /** @param string */
  public function setCurrentLimitBytes($currentLimitBytes)
  {
    $this->currentLimitBytes = $currentLimitBytes;
  }
  /** @return string */
  public function getCurrentLimitBytes()
  {
    return $this->currentLimitBytes;
  }
  /** @param string */
  public function setCurrentOoms($currentOoms)
  {
    $this->currentOoms = $currentOoms;
  }
  /** @return string */
  public function getCurrentOoms()
  {
    return $this->currentOoms;
  }
  /** @param string */
  public function setCurrentRssBytes($currentRssBytes)
  {
    $this->currentRssBytes = $currentRssBytes;
  }
  /** @return string */
  public function getCurrentRssBytes()
  {
    return $this->currentRssBytes;
  }
  /** @param string */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
  /** @param string */
  public function setTotalGbMs($totalGbMs)
  {
    $this->totalGbMs = $totalGbMs;
  }
  /** @return string */
  public function getTotalGbMs()
  {
    return $this->totalGbMs;
  }
}

class MetricShortId extends \Google\Model
{
  /** @var int */
  public $metricIndex;
  /** @var string */
  public $shortId;

  /** @param int */
  public function setMetricIndex($metricIndex)
  {
    $this->metricIndex = $metricIndex;
  }
  /** @return int */
  public function getMetricIndex()
  {
    return $this->metricIndex;
  }
  /** @param string */
  public function setShortId($shortId)
  {
    $this->shortId = $shortId;
  }
  /** @return string */
  public function getShortId()
  {
    return $this->shortId;
  }
}

class MetricStructuredName extends \Google\Model
{
  /** @var string[] */
  public $context;
  /** @var string */
  public $name;
  /** @var string */
  public $origin;

  /** @param string[] */
  public function setContext($context)
  {
    $this->context = $context;
  }
  /** @return string[] */
  public function getContext()
  {
    return $this->context;
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

class MetricUpdate extends \Google\Model
{
  /** @var bool */
  public $cumulative;
  /** @var array */
  public $distribution;
  /** @var array */
  public $gauge;
  /** @var array */
  public $internal;
  /** @var string */
  public $kind;
  /** @var array */
  public $meanCount;
  /** @var array */
  public $meanSum;
  /** @var MetricStructuredName */
  public $name;
  /** @var array */
  public $scalar;
  /** @var array */
  public $set;
  /** @var string */
  public $updateTime;
  protected $nameType = MetricStructuredName::class;
  protected $nameDataType = '';
  /** @param bool */
  public function setCumulative($cumulative)
  {
    $this->cumulative = $cumulative;
  }
  /** @return bool */
  public function getCumulative()
  {
    return $this->cumulative;
  }
  /** @param array */
  public function setDistribution($distribution)
  {
    $this->distribution = $distribution;
  }
  /** @return array */
  public function getDistribution()
  {
    return $this->distribution;
  }
  /** @param array */
  public function setGauge($gauge)
  {
    $this->gauge = $gauge;
  }
  /** @return array */
  public function getGauge()
  {
    return $this->gauge;
  }
  /** @param array */
  public function setInternal($internal)
  {
    $this->internal = $internal;
  }
  /** @return array */
  public function getInternal()
  {
    return $this->internal;
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
  /** @param array */
  public function setMeanCount($meanCount)
  {
    $this->meanCount = $meanCount;
  }
  /** @return array */
  public function getMeanCount()
  {
    return $this->meanCount;
  }
  /** @param array */
  public function setMeanSum($meanSum)
  {
    $this->meanSum = $meanSum;
  }
  /** @return array */
  public function getMeanSum()
  {
    return $this->meanSum;
  }
  /** @param MetricStructuredName */
  public function setName(MetricStructuredName $name)
  {
    $this->name = $name;
  }
  /** @return MetricStructuredName */
  public function getName()
  {
    return $this->name;
  }
  /** @param array */
  public function setScalar($scalar)
  {
    $this->scalar = $scalar;
  }
  /** @return array */
  public function getScalar()
  {
    return $this->scalar;
  }
  /** @param array */
  public function setSet($set)
  {
    $this->set = $set;
  }
  /** @return array */
  public function getSet()
  {
    return $this->set;
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

class MountedDataDisk extends \Google\Model
{
  /** @var string */
  public $dataDisk;

  /** @param string */
  public function setDataDisk($dataDisk)
  {
    $this->dataDisk = $dataDisk;
  }
  /** @return string */
  public function getDataDisk()
  {
    return $this->dataDisk;
  }
}

class MultiOutputInfo extends \Google\Model
{
  /** @var string */
  public $tag;

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

class NameAndKind extends \Google\Model
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

class Package extends \Google\Model
{
  /** @var string */
  public $location;
  /** @var string */
  public $name;

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

class ParDoInstruction extends \Google\Collection
{
  /** @var InstructionInput */
  public $input;
  /** @var MultiOutputInfo[] */
  public $multiOutputInfos;
  /** @var int */
  public $numOutputs;
  /** @var SideInputInfo[] */
  public $sideInputs;
  /** @var array[] */
  public $userFn;
  protected $collection_key = 'sideInputs';
  protected $inputType = InstructionInput::class;
  protected $inputDataType = '';
  protected $multiOutputInfosType = MultiOutputInfo::class;
  protected $multiOutputInfosDataType = 'array';
  protected $sideInputsType = SideInputInfo::class;
  protected $sideInputsDataType = 'array';
  /** @param InstructionInput */
  public function setInput(InstructionInput $input)
  {
    $this->input = $input;
  }
  /** @return InstructionInput */
  public function getInput()
  {
    return $this->input;
  }
  /** @param MultiOutputInfo[] */
  public function setMultiOutputInfos($multiOutputInfos)
  {
    $this->multiOutputInfos = $multiOutputInfos;
  }
  /** @return MultiOutputInfo[] */
  public function getMultiOutputInfos()
  {
    return $this->multiOutputInfos;
  }
  /** @param int */
  public function setNumOutputs($numOutputs)
  {
    $this->numOutputs = $numOutputs;
  }
  /** @return int */
  public function getNumOutputs()
  {
    return $this->numOutputs;
  }
  /** @param SideInputInfo[] */
  public function setSideInputs($sideInputs)
  {
    $this->sideInputs = $sideInputs;
  }
  /** @return SideInputInfo[] */
  public function getSideInputs()
  {
    return $this->sideInputs;
  }
  /** @param array[] */
  public function setUserFn($userFn)
  {
    $this->userFn = $userFn;
  }
  /** @return array[] */
  public function getUserFn()
  {
    return $this->userFn;
  }
}

class ParallelInstruction extends \Google\Collection
{
  /** @var FlattenInstruction */
  public $flatten;
  /** @var string */
  public $name;
  /** @var string */
  public $originalName;
  /** @var InstructionOutput[] */
  public $outputs;
  /** @var ParDoInstruction */
  public $parDo;
  /** @var PartialGroupByKeyInstruction */
  public $partialGroupByKey;
  /** @var ReadInstruction */
  public $read;
  /** @var string */
  public $systemName;
  /** @var WriteInstruction */
  public $write;
  protected $collection_key = 'outputs';
  protected $flattenType = FlattenInstruction::class;
  protected $flattenDataType = '';
  protected $outputsType = InstructionOutput::class;
  protected $outputsDataType = 'array';
  protected $parDoType = ParDoInstruction::class;
  protected $parDoDataType = '';
  protected $partialGroupByKeyType = PartialGroupByKeyInstruction::class;
  protected $partialGroupByKeyDataType = '';
  protected $readType = ReadInstruction::class;
  protected $readDataType = '';
  protected $writeType = WriteInstruction::class;
  protected $writeDataType = '';
  /** @param FlattenInstruction */
  public function setFlatten(FlattenInstruction $flatten)
  {
    $this->flatten = $flatten;
  }
  /** @return FlattenInstruction */
  public function getFlatten()
  {
    return $this->flatten;
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
  public function setOriginalName($originalName)
  {
    $this->originalName = $originalName;
  }
  /** @return string */
  public function getOriginalName()
  {
    return $this->originalName;
  }
  /** @param InstructionOutput[] */
  public function setOutputs($outputs)
  {
    $this->outputs = $outputs;
  }
  /** @return InstructionOutput[] */
  public function getOutputs()
  {
    return $this->outputs;
  }
  /** @param ParDoInstruction */
  public function setParDo(ParDoInstruction $parDo)
  {
    $this->parDo = $parDo;
  }
  /** @return ParDoInstruction */
  public function getParDo()
  {
    return $this->parDo;
  }
  /** @param PartialGroupByKeyInstruction */
  public function setPartialGroupByKey(PartialGroupByKeyInstruction $partialGroupByKey)
  {
    $this->partialGroupByKey = $partialGroupByKey;
  }
  /** @return PartialGroupByKeyInstruction */
  public function getPartialGroupByKey()
  {
    return $this->partialGroupByKey;
  }
  /** @param ReadInstruction */
  public function setRead(ReadInstruction $read)
  {
    $this->read = $read;
  }
  /** @return ReadInstruction */
  public function getRead()
  {
    return $this->read;
  }
  /** @param string */
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  /** @return string */
  public function getSystemName()
  {
    return $this->systemName;
  }
  /** @param WriteInstruction */
  public function setWrite(WriteInstruction $write)
  {
    $this->write = $write;
  }
  /** @return WriteInstruction */
  public function getWrite()
  {
    return $this->write;
  }
}

class Parameter extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var array */
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
  /** @param array */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array */
  public function getValue()
  {
    return $this->value;
  }
}

class ParameterMetadata extends \Google\Collection
{
  /** @var string[] */
  public $customMetadata;
  /** @var string */
  public $helpText;
  /** @var bool */
  public $isOptional;
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var string */
  public $paramType;
  /** @var string[] */
  public $regexes;
  protected $collection_key = 'regexes';
  /** @param string[] */
  public function setCustomMetadata($customMetadata)
  {
    $this->customMetadata = $customMetadata;
  }
  /** @return string[] */
  public function getCustomMetadata()
  {
    return $this->customMetadata;
  }
  /** @param string */
  public function setHelpText($helpText)
  {
    $this->helpText = $helpText;
  }
  /** @return string */
  public function getHelpText()
  {
    return $this->helpText;
  }
  /** @param bool */
  public function setIsOptional($isOptional)
  {
    $this->isOptional = $isOptional;
  }
  /** @return bool */
  public function getIsOptional()
  {
    return $this->isOptional;
  }
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
  public function setParamType($paramType)
  {
    $this->paramType = $paramType;
  }
  /** @return string */
  public function getParamType()
  {
    return $this->paramType;
  }
  /** @param string[] */
  public function setRegexes($regexes)
  {
    $this->regexes = $regexes;
  }
  /** @return string[] */
  public function getRegexes()
  {
    return $this->regexes;
  }
}

class PartialGroupByKeyInstruction extends \Google\Collection
{
  /** @var InstructionInput */
  public $input;
  /** @var array[] */
  public $inputElementCodec;
  /** @var string */
  public $originalCombineValuesInputStoreName;
  /** @var string */
  public $originalCombineValuesStepName;
  /** @var SideInputInfo[] */
  public $sideInputs;
  /** @var array[] */
  public $valueCombiningFn;
  protected $collection_key = 'sideInputs';
  protected $inputType = InstructionInput::class;
  protected $inputDataType = '';
  protected $sideInputsType = SideInputInfo::class;
  protected $sideInputsDataType = 'array';
  /** @param InstructionInput */
  public function setInput(InstructionInput $input)
  {
    $this->input = $input;
  }
  /** @return InstructionInput */
  public function getInput()
  {
    return $this->input;
  }
  /** @param array[] */
  public function setInputElementCodec($inputElementCodec)
  {
    $this->inputElementCodec = $inputElementCodec;
  }
  /** @return array[] */
  public function getInputElementCodec()
  {
    return $this->inputElementCodec;
  }
  /** @param string */
  public function setOriginalCombineValuesInputStoreName($originalCombineValuesInputStoreName)
  {
    $this->originalCombineValuesInputStoreName = $originalCombineValuesInputStoreName;
  }
  /** @return string */
  public function getOriginalCombineValuesInputStoreName()
  {
    return $this->originalCombineValuesInputStoreName;
  }
  /** @param string */
  public function setOriginalCombineValuesStepName($originalCombineValuesStepName)
  {
    $this->originalCombineValuesStepName = $originalCombineValuesStepName;
  }
  /** @return string */
  public function getOriginalCombineValuesStepName()
  {
    return $this->originalCombineValuesStepName;
  }
  /** @param SideInputInfo[] */
  public function setSideInputs($sideInputs)
  {
    $this->sideInputs = $sideInputs;
  }
  /** @return SideInputInfo[] */
  public function getSideInputs()
  {
    return $this->sideInputs;
  }
  /** @param array[] */
  public function setValueCombiningFn($valueCombiningFn)
  {
    $this->valueCombiningFn = $valueCombiningFn;
  }
  /** @return array[] */
  public function getValueCombiningFn()
  {
    return $this->valueCombiningFn;
  }
}

class PipelineDescription extends \Google\Collection
{
  /** @var DisplayData[] */
  public $displayData;
  /** @var ExecutionStageSummary[] */
  public $executionPipelineStage;
  /** @var TransformSummary[] */
  public $originalPipelineTransform;
  /** @var string */
  public $stepNamesHash;
  protected $collection_key = 'originalPipelineTransform';
  protected $displayDataType = DisplayData::class;
  protected $displayDataDataType = 'array';
  protected $executionPipelineStageType = ExecutionStageSummary::class;
  protected $executionPipelineStageDataType = 'array';
  protected $originalPipelineTransformType = TransformSummary::class;
  protected $originalPipelineTransformDataType = 'array';
  /** @param DisplayData[] */
  public function setDisplayData($displayData)
  {
    $this->displayData = $displayData;
  }
  /** @return DisplayData[] */
  public function getDisplayData()
  {
    return $this->displayData;
  }
  /** @param ExecutionStageSummary[] */
  public function setExecutionPipelineStage($executionPipelineStage)
  {
    $this->executionPipelineStage = $executionPipelineStage;
  }
  /** @return ExecutionStageSummary[] */
  public function getExecutionPipelineStage()
  {
    return $this->executionPipelineStage;
  }
  /** @param TransformSummary[] */
  public function setOriginalPipelineTransform($originalPipelineTransform)
  {
    $this->originalPipelineTransform = $originalPipelineTransform;
  }
  /** @return TransformSummary[] */
  public function getOriginalPipelineTransform()
  {
    return $this->originalPipelineTransform;
  }
  /** @param string */
  public function setStepNamesHash($stepNamesHash)
  {
    $this->stepNamesHash = $stepNamesHash;
  }
  /** @return string */
  public function getStepNamesHash()
  {
    return $this->stepNamesHash;
  }
}

class Point extends \Google\Model
{
  /** @var string */
  public $time;
  public $value;

  /** @param string */
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
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

class Position extends \Google\Model
{
  /** @var string */
  public $byteOffset;
  /** @var ConcatPosition */
  public $concatPosition;
  /** @var bool */
  public $end;
  /** @var string */
  public $key;
  /** @var string */
  public $recordIndex;
  /** @var string */
  public $shufflePosition;
  protected $concatPositionType = ConcatPosition::class;
  protected $concatPositionDataType = '';
  /** @param string */
  public function setByteOffset($byteOffset)
  {
    $this->byteOffset = $byteOffset;
  }
  /** @return string */
  public function getByteOffset()
  {
    return $this->byteOffset;
  }
  /** @param ConcatPosition */
  public function setConcatPosition(ConcatPosition $concatPosition)
  {
    $this->concatPosition = $concatPosition;
  }
  /** @return ConcatPosition */
  public function getConcatPosition()
  {
    return $this->concatPosition;
  }
  /** @param bool */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /** @return bool */
  public function getEnd()
  {
    return $this->end;
  }
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
  public function setRecordIndex($recordIndex)
  {
    $this->recordIndex = $recordIndex;
  }
  /** @return string */
  public function getRecordIndex()
  {
    return $this->recordIndex;
  }
  /** @param string */
  public function setShufflePosition($shufflePosition)
  {
    $this->shufflePosition = $shufflePosition;
  }
  /** @return string */
  public function getShufflePosition()
  {
    return $this->shufflePosition;
  }
}

class ProgressTimeseries extends \Google\Collection
{
  public $currentProgress;
  /** @var Point[] */
  public $dataPoints;
  protected $collection_key = 'dataPoints';
  protected $dataPointsType = Point::class;
  protected $dataPointsDataType = 'array';
  public function setCurrentProgress($currentProgress)
  {
    $this->currentProgress = $currentProgress;
  }
  public function getCurrentProgress()
  {
    return $this->currentProgress;
  }
  /** @param Point[] */
  public function setDataPoints($dataPoints)
  {
    $this->dataPoints = $dataPoints;
  }
  /** @return Point[] */
  public function getDataPoints()
  {
    return $this->dataPoints;
  }
}

class PubSubIODetails extends \Google\Model
{
  /** @var string */
  public $subscription;
  /** @var string */
  public $topic;

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

class PubsubLocation extends \Google\Model
{
  /** @var bool */
  public $dropLateData;
  /** @var string */
  public $idLabel;
  /** @var string */
  public $subscription;
  /** @var string */
  public $timestampLabel;
  /** @var string */
  public $topic;
  /** @var string */
  public $trackingSubscription;
  /** @var bool */
  public $withAttributes;

  /** @param bool */
  public function setDropLateData($dropLateData)
  {
    $this->dropLateData = $dropLateData;
  }
  /** @return bool */
  public function getDropLateData()
  {
    return $this->dropLateData;
  }
  /** @param string */
  public function setIdLabel($idLabel)
  {
    $this->idLabel = $idLabel;
  }
  /** @return string */
  public function getIdLabel()
  {
    return $this->idLabel;
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
  public function setTimestampLabel($timestampLabel)
  {
    $this->timestampLabel = $timestampLabel;
  }
  /** @return string */
  public function getTimestampLabel()
  {
    return $this->timestampLabel;
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
  /** @param string */
  public function setTrackingSubscription($trackingSubscription)
  {
    $this->trackingSubscription = $trackingSubscription;
  }
  /** @return string */
  public function getTrackingSubscription()
  {
    return $this->trackingSubscription;
  }
  /** @param bool */
  public function setWithAttributes($withAttributes)
  {
    $this->withAttributes = $withAttributes;
  }
  /** @return bool */
  public function getWithAttributes()
  {
    return $this->withAttributes;
  }
}

class PubsubSnapshotMetadata extends \Google\Model
{
  /** @var string */
  public $expireTime;
  /** @var string */
  public $snapshotName;
  /** @var string */
  public $topicName;

  /** @param string */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /** @param string */
  public function setSnapshotName($snapshotName)
  {
    $this->snapshotName = $snapshotName;
  }
  /** @return string */
  public function getSnapshotName()
  {
    return $this->snapshotName;
  }
  /** @param string */
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  /** @return string */
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class QueryInfo extends \Google\Collection
{
  /** @var string[] */
  public $queryProperty;
  protected $collection_key = 'queryProperty';
  /** @param string[] */
  public function setQueryProperty($queryProperty)
  {
    $this->queryProperty = $queryProperty;
  }
  /** @return string[] */
  public function getQueryProperty()
  {
    return $this->queryProperty;
  }
}

class ReadInstruction extends \Google\Model
{
  /** @var Source */
  public $source;
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
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
}

class ReportWorkItemStatusRequest extends \Google\Collection
{
  /** @var string */
  public $currentWorkerTime;
  /** @var string */
  public $location;
  /** @var array[] */
  public $unifiedWorkerRequest;
  /** @var WorkItemStatus[] */
  public $workItemStatuses;
  /** @var string */
  public $workerId;
  protected $collection_key = 'workItemStatuses';
  protected $workItemStatusesType = WorkItemStatus::class;
  protected $workItemStatusesDataType = 'array';
  /** @param string */
  public function setCurrentWorkerTime($currentWorkerTime)
  {
    $this->currentWorkerTime = $currentWorkerTime;
  }
  /** @return string */
  public function getCurrentWorkerTime()
  {
    return $this->currentWorkerTime;
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
  /** @param array[] */
  public function setUnifiedWorkerRequest($unifiedWorkerRequest)
  {
    $this->unifiedWorkerRequest = $unifiedWorkerRequest;
  }
  /** @return array[] */
  public function getUnifiedWorkerRequest()
  {
    return $this->unifiedWorkerRequest;
  }
  /** @param WorkItemStatus[] */
  public function setWorkItemStatuses($workItemStatuses)
  {
    $this->workItemStatuses = $workItemStatuses;
  }
  /** @return WorkItemStatus[] */
  public function getWorkItemStatuses()
  {
    return $this->workItemStatuses;
  }
  /** @param string */
  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
  /** @return string */
  public function getWorkerId()
  {
    return $this->workerId;
  }
}

class ReportWorkItemStatusResponse extends \Google\Collection
{
  /** @var array[] */
  public $unifiedWorkerResponse;
  /** @var WorkItemServiceState[] */
  public $workItemServiceStates;
  protected $collection_key = 'workItemServiceStates';
  protected $workItemServiceStatesType = WorkItemServiceState::class;
  protected $workItemServiceStatesDataType = 'array';
  /** @param array[] */
  public function setUnifiedWorkerResponse($unifiedWorkerResponse)
  {
    $this->unifiedWorkerResponse = $unifiedWorkerResponse;
  }
  /** @return array[] */
  public function getUnifiedWorkerResponse()
  {
    return $this->unifiedWorkerResponse;
  }
  /** @param WorkItemServiceState[] */
  public function setWorkItemServiceStates($workItemServiceStates)
  {
    $this->workItemServiceStates = $workItemServiceStates;
  }
  /** @return WorkItemServiceState[] */
  public function getWorkItemServiceStates()
  {
    return $this->workItemServiceStates;
  }
}

class ReportedParallelism extends \Google\Model
{
  /** @var bool */
  public $isInfinite;
  public $value;

  /** @param bool */
  public function setIsInfinite($isInfinite)
  {
    $this->isInfinite = $isInfinite;
  }
  /** @return bool */
  public function getIsInfinite()
  {
    return $this->isInfinite;
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

class ResourceUtilizationReport extends \Google\Collection
{
  /** @var ResourceUtilizationReport[] */
  public $containers;
  /** @var CPUTime[] */
  public $cpuTime;
  /** @var MemInfo[] */
  public $memoryInfo;
  protected $collection_key = 'memoryInfo';
  protected $containersType = ResourceUtilizationReport::class;
  protected $containersDataType = 'map';
  protected $cpuTimeType = CPUTime::class;
  protected $cpuTimeDataType = 'array';
  protected $memoryInfoType = MemInfo::class;
  protected $memoryInfoDataType = 'array';
  /** @param ResourceUtilizationReport[] */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /** @return ResourceUtilizationReport[] */
  public function getContainers()
  {
    return $this->containers;
  }
  /** @param CPUTime[] */
  public function setCpuTime($cpuTime)
  {
    $this->cpuTime = $cpuTime;
  }
  /** @return CPUTime[] */
  public function getCpuTime()
  {
    return $this->cpuTime;
  }
  /** @param MemInfo[] */
  public function setMemoryInfo($memoryInfo)
  {
    $this->memoryInfo = $memoryInfo;
  }
  /** @return MemInfo[] */
  public function getMemoryInfo()
  {
    return $this->memoryInfo;
  }
}

class ResourceUtilizationReportResponse extends \Google\Model
{
}

class RuntimeEnvironment extends \Google\Collection
{
  /** @var string[] */
  public $additionalExperiments;
  /** @var string[] */
  public $additionalUserLabels;
  /** @var bool */
  public $bypassTempDirValidation;
  /** @var bool */
  public $enableStreamingEngine;
  /** @var string */
  public $ipConfiguration;
  /** @var string */
  public $kmsKeyName;
  /** @var string */
  public $machineType;
  /** @var int */
  public $maxWorkers;
  /** @var string */
  public $network;
  /** @var int */
  public $numWorkers;
  /** @var string */
  public $serviceAccountEmail;
  /** @var string */
  public $subnetwork;
  /** @var string */
  public $tempLocation;
  /** @var string */
  public $workerRegion;
  /** @var string */
  public $workerZone;
  /** @var string */
  public $zone;
  protected $collection_key = 'additionalExperiments';
  /** @param string[] */
  public function setAdditionalExperiments($additionalExperiments)
  {
    $this->additionalExperiments = $additionalExperiments;
  }
  /** @return string[] */
  public function getAdditionalExperiments()
  {
    return $this->additionalExperiments;
  }
  /** @param string[] */
  public function setAdditionalUserLabels($additionalUserLabels)
  {
    $this->additionalUserLabels = $additionalUserLabels;
  }
  /** @return string[] */
  public function getAdditionalUserLabels()
  {
    return $this->additionalUserLabels;
  }
  /** @param bool */
  public function setBypassTempDirValidation($bypassTempDirValidation)
  {
    $this->bypassTempDirValidation = $bypassTempDirValidation;
  }
  /** @return bool */
  public function getBypassTempDirValidation()
  {
    return $this->bypassTempDirValidation;
  }
  /** @param bool */
  public function setEnableStreamingEngine($enableStreamingEngine)
  {
    $this->enableStreamingEngine = $enableStreamingEngine;
  }
  /** @return bool */
  public function getEnableStreamingEngine()
  {
    return $this->enableStreamingEngine;
  }
  /** @param string */
  public function setIpConfiguration($ipConfiguration)
  {
    $this->ipConfiguration = $ipConfiguration;
  }
  /** @return string */
  public function getIpConfiguration()
  {
    return $this->ipConfiguration;
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
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /** @param int */
  public function setMaxWorkers($maxWorkers)
  {
    $this->maxWorkers = $maxWorkers;
  }
  /** @return int */
  public function getMaxWorkers()
  {
    return $this->maxWorkers;
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
  /** @param int */
  public function setNumWorkers($numWorkers)
  {
    $this->numWorkers = $numWorkers;
  }
  /** @return int */
  public function getNumWorkers()
  {
    return $this->numWorkers;
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
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /** @return string */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
  /** @param string */
  public function setTempLocation($tempLocation)
  {
    $this->tempLocation = $tempLocation;
  }
  /** @return string */
  public function getTempLocation()
  {
    return $this->tempLocation;
  }
  /** @param string */
  public function setWorkerRegion($workerRegion)
  {
    $this->workerRegion = $workerRegion;
  }
  /** @return string */
  public function getWorkerRegion()
  {
    return $this->workerRegion;
  }
  /** @param string */
  public function setWorkerZone($workerZone)
  {
    $this->workerZone = $workerZone;
  }
  /** @return string */
  public function getWorkerZone()
  {
    return $this->workerZone;
  }
  /** @param string */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /** @return string */
  public function getZone()
  {
    return $this->zone;
  }
}

class RuntimeMetadata extends \Google\Collection
{
  /** @var ParameterMetadata[] */
  public $parameters;
  /** @var SDKInfo */
  public $sdkInfo;
  protected $collection_key = 'parameters';
  protected $parametersType = ParameterMetadata::class;
  protected $parametersDataType = 'array';
  protected $sdkInfoType = SDKInfo::class;
  protected $sdkInfoDataType = '';
  /** @param ParameterMetadata[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return ParameterMetadata[] */
  public function getParameters()
  {
    return $this->parameters;
  }
  /** @param SDKInfo */
  public function setSdkInfo(SDKInfo $sdkInfo)
  {
    $this->sdkInfo = $sdkInfo;
  }
  /** @return SDKInfo */
  public function getSdkInfo()
  {
    return $this->sdkInfo;
  }
}

class SDKInfo extends \Google\Model
{
  /** @var string */
  public $language;
  /** @var string */
  public $version;

  /** @param string */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
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

class SdkHarnessContainerImage extends \Google\Collection
{
  /** @var string[] */
  public $capabilities;
  /** @var string */
  public $containerImage;
  /** @var string */
  public $environmentId;
  /** @var bool */
  public $useSingleCorePerContainer;
  protected $collection_key = 'capabilities';
  /** @param string[] */
  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }
  /** @return string[] */
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  /** @param string */
  public function setContainerImage($containerImage)
  {
    $this->containerImage = $containerImage;
  }
  /** @return string */
  public function getContainerImage()
  {
    return $this->containerImage;
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
  /** @param bool */
  public function setUseSingleCorePerContainer($useSingleCorePerContainer)
  {
    $this->useSingleCorePerContainer = $useSingleCorePerContainer;
  }
  /** @return bool */
  public function getUseSingleCorePerContainer()
  {
    return $this->useSingleCorePerContainer;
  }
}

class SdkVersion extends \Google\Model
{
  /** @var string */
  public $sdkSupportStatus;
  /** @var string */
  public $version;
  /** @var string */
  public $versionDisplayName;

  /** @param string */
  public function setSdkSupportStatus($sdkSupportStatus)
  {
    $this->sdkSupportStatus = $sdkSupportStatus;
  }
  /** @return string */
  public function getSdkSupportStatus()
  {
    return $this->sdkSupportStatus;
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
  /** @param string */
  public function setVersionDisplayName($versionDisplayName)
  {
    $this->versionDisplayName = $versionDisplayName;
  }
  /** @return string */
  public function getVersionDisplayName()
  {
    return $this->versionDisplayName;
  }
}

class SendDebugCaptureRequest extends \Google\Model
{
  /** @var string */
  public $componentId;
  /** @var string */
  public $data;
  /** @var string */
  public $dataFormat;
  /** @var string */
  public $location;
  /** @var string */
  public $workerId;

  /** @param string */
  public function setComponentId($componentId)
  {
    $this->componentId = $componentId;
  }
  /** @return string */
  public function getComponentId()
  {
    return $this->componentId;
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
  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
  /** @return string */
  public function getWorkerId()
  {
    return $this->workerId;
  }
}

class SendDebugCaptureResponse extends \Google\Model
{
}

class SendWorkerMessagesRequest extends \Google\Collection
{
  /** @var string */
  public $location;
  /** @var WorkerMessage[] */
  public $workerMessages;
  protected $collection_key = 'workerMessages';
  protected $workerMessagesType = WorkerMessage::class;
  protected $workerMessagesDataType = 'array';
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
  /** @param WorkerMessage[] */
  public function setWorkerMessages($workerMessages)
  {
    $this->workerMessages = $workerMessages;
  }
  /** @return WorkerMessage[] */
  public function getWorkerMessages()
  {
    return $this->workerMessages;
  }
}

class SendWorkerMessagesResponse extends \Google\Collection
{
  /** @var WorkerMessageResponse[] */
  public $workerMessageResponses;
  protected $collection_key = 'workerMessageResponses';
  protected $workerMessageResponsesType = WorkerMessageResponse::class;
  protected $workerMessageResponsesDataType = 'array';
  /** @param WorkerMessageResponse[] */
  public function setWorkerMessageResponses($workerMessageResponses)
  {
    $this->workerMessageResponses = $workerMessageResponses;
  }
  /** @return WorkerMessageResponse[] */
  public function getWorkerMessageResponses()
  {
    return $this->workerMessageResponses;
  }
}

class SeqMapTask extends \Google\Collection
{
  /** @var SideInputInfo[] */
  public $inputs;
  /** @var string */
  public $name;
  /** @var SeqMapTaskOutputInfo[] */
  public $outputInfos;
  /** @var string */
  public $stageName;
  /** @var string */
  public $systemName;
  /** @var array[] */
  public $userFn;
  protected $collection_key = 'outputInfos';
  protected $inputsType = SideInputInfo::class;
  protected $inputsDataType = 'array';
  protected $outputInfosType = SeqMapTaskOutputInfo::class;
  protected $outputInfosDataType = 'array';
  /** @param SideInputInfo[] */
  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  /** @return SideInputInfo[] */
  public function getInputs()
  {
    return $this->inputs;
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
  /** @param SeqMapTaskOutputInfo[] */
  public function setOutputInfos($outputInfos)
  {
    $this->outputInfos = $outputInfos;
  }
  /** @return SeqMapTaskOutputInfo[] */
  public function getOutputInfos()
  {
    return $this->outputInfos;
  }
  /** @param string */
  public function setStageName($stageName)
  {
    $this->stageName = $stageName;
  }
  /** @return string */
  public function getStageName()
  {
    return $this->stageName;
  }
  /** @param string */
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  /** @return string */
  public function getSystemName()
  {
    return $this->systemName;
  }
  /** @param array[] */
  public function setUserFn($userFn)
  {
    $this->userFn = $userFn;
  }
  /** @return array[] */
  public function getUserFn()
  {
    return $this->userFn;
  }
}

class SeqMapTaskOutputInfo extends \Google\Model
{
  /** @var Sink */
  public $sink;
  /** @var string */
  public $tag;
  protected $sinkType = Sink::class;
  protected $sinkDataType = '';
  /** @param Sink */
  public function setSink(Sink $sink)
  {
    $this->sink = $sink;
  }
  /** @return Sink */
  public function getSink()
  {
    return $this->sink;
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

class ShellTask extends \Google\Model
{
  /** @var string */
  public $command;
  /** @var int */
  public $exitCode;

  /** @param string */
  public function setCommand($command)
  {
    $this->command = $command;
  }
  /** @return string */
  public function getCommand()
  {
    return $this->command;
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
}

class SideInputInfo extends \Google\Collection
{
  /** @var array[] */
  public $kind;
  /** @var Source[] */
  public $sources;
  /** @var string */
  public $tag;
  protected $collection_key = 'sources';
  protected $sourcesType = Source::class;
  protected $sourcesDataType = 'array';
  /** @param array[] */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return array[] */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param Source[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return Source[] */
  public function getSources()
  {
    return $this->sources;
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

class Sink extends \Google\Model
{
  /** @var array[] */
  public $codec;
  /** @var array[] */
  public $spec;

  /** @param array[] */
  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  /** @return array[] */
  public function getCodec()
  {
    return $this->codec;
  }
  /** @param array[] */
  public function setSpec($spec)
  {
    $this->spec = $spec;
  }
  /** @return array[] */
  public function getSpec()
  {
    return $this->spec;
  }
}

class Snapshot extends \Google\Collection
{
  /** @var string */
  public $creationTime;
  /** @var string */
  public $description;
  /** @var string */
  public $diskSizeBytes;
  /** @var string */
  public $id;
  /** @var string */
  public $projectId;
  /** @var PubsubSnapshotMetadata[] */
  public $pubsubMetadata;
  /** @var string */
  public $region;
  /** @var string */
  public $sourceJobId;
  /** @var string */
  public $state;
  /** @var string */
  public $ttl;
  protected $collection_key = 'pubsubMetadata';
  protected $pubsubMetadataType = PubsubSnapshotMetadata::class;
  protected $pubsubMetadataDataType = 'array';
  /** @param string */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /** @return string */
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
  /** @param string */
  public function setDiskSizeBytes($diskSizeBytes)
  {
    $this->diskSizeBytes = $diskSizeBytes;
  }
  /** @return string */
  public function getDiskSizeBytes()
  {
    return $this->diskSizeBytes;
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
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param PubsubSnapshotMetadata[] */
  public function setPubsubMetadata($pubsubMetadata)
  {
    $this->pubsubMetadata = $pubsubMetadata;
  }
  /** @return PubsubSnapshotMetadata[] */
  public function getPubsubMetadata()
  {
    return $this->pubsubMetadata;
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
  public function setSourceJobId($sourceJobId)
  {
    $this->sourceJobId = $sourceJobId;
  }
  /** @return string */
  public function getSourceJobId()
  {
    return $this->sourceJobId;
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
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
  }
}

class SnapshotJobRequest extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $location;
  /** @var bool */
  public $snapshotSources;
  /** @var string */
  public $ttl;

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
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param bool */
  public function setSnapshotSources($snapshotSources)
  {
    $this->snapshotSources = $snapshotSources;
  }
  /** @return bool */
  public function getSnapshotSources()
  {
    return $this->snapshotSources;
  }
  /** @param string */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
  }
}

class Source extends \Google\Collection
{
  /** @var array[] */
  public $baseSpecs;
  /** @var array[] */
  public $codec;
  /** @var bool */
  public $doesNotNeedSplitting;
  /** @var SourceMetadata */
  public $metadata;
  /** @var array[] */
  public $spec;
  protected $collection_key = 'baseSpecs';
  protected $metadataType = SourceMetadata::class;
  protected $metadataDataType = '';
  /** @param array[] */
  public function setBaseSpecs($baseSpecs)
  {
    $this->baseSpecs = $baseSpecs;
  }
  /** @return array[] */
  public function getBaseSpecs()
  {
    return $this->baseSpecs;
  }
  /** @param array[] */
  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  /** @return array[] */
  public function getCodec()
  {
    return $this->codec;
  }
  /** @param bool */
  public function setDoesNotNeedSplitting($doesNotNeedSplitting)
  {
    $this->doesNotNeedSplitting = $doesNotNeedSplitting;
  }
  /** @return bool */
  public function getDoesNotNeedSplitting()
  {
    return $this->doesNotNeedSplitting;
  }
  /** @param SourceMetadata */
  public function setMetadata(SourceMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return SourceMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param array[] */
  public function setSpec($spec)
  {
    $this->spec = $spec;
  }
  /** @return array[] */
  public function getSpec()
  {
    return $this->spec;
  }
}

class SourceFork extends \Google\Model
{
  /** @var SourceSplitShard */
  public $primary;
  /** @var DerivedSource */
  public $primarySource;
  /** @var SourceSplitShard */
  public $residual;
  /** @var DerivedSource */
  public $residualSource;
  protected $primaryType = SourceSplitShard::class;
  protected $primaryDataType = '';
  protected $primarySourceType = DerivedSource::class;
  protected $primarySourceDataType = '';
  protected $residualType = SourceSplitShard::class;
  protected $residualDataType = '';
  protected $residualSourceType = DerivedSource::class;
  protected $residualSourceDataType = '';
  /** @param SourceSplitShard */
  public function setPrimary(SourceSplitShard $primary)
  {
    $this->primary = $primary;
  }
  /** @return SourceSplitShard */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param DerivedSource */
  public function setPrimarySource(DerivedSource $primarySource)
  {
    $this->primarySource = $primarySource;
  }
  /** @return DerivedSource */
  public function getPrimarySource()
  {
    return $this->primarySource;
  }
  /** @param SourceSplitShard */
  public function setResidual(SourceSplitShard $residual)
  {
    $this->residual = $residual;
  }
  /** @return SourceSplitShard */
  public function getResidual()
  {
    return $this->residual;
  }
  /** @param DerivedSource */
  public function setResidualSource(DerivedSource $residualSource)
  {
    $this->residualSource = $residualSource;
  }
  /** @return DerivedSource */
  public function getResidualSource()
  {
    return $this->residualSource;
  }
}

class SourceGetMetadataRequest extends \Google\Model
{
  /** @var Source */
  public $source;
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
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
}

class SourceGetMetadataResponse extends \Google\Model
{
  /** @var SourceMetadata */
  public $metadata;
  protected $metadataType = SourceMetadata::class;
  protected $metadataDataType = '';
  /** @param SourceMetadata */
  public function setMetadata(SourceMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return SourceMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

class SourceMetadata extends \Google\Model
{
  /** @var string */
  public $estimatedSizeBytes;
  /** @var bool */
  public $infinite;
  /** @var bool */
  public $producesSortedKeys;

  /** @param string */
  public function setEstimatedSizeBytes($estimatedSizeBytes)
  {
    $this->estimatedSizeBytes = $estimatedSizeBytes;
  }
  /** @return string */
  public function getEstimatedSizeBytes()
  {
    return $this->estimatedSizeBytes;
  }
  /** @param bool */
  public function setInfinite($infinite)
  {
    $this->infinite = $infinite;
  }
  /** @return bool */
  public function getInfinite()
  {
    return $this->infinite;
  }
  /** @param bool */
  public function setProducesSortedKeys($producesSortedKeys)
  {
    $this->producesSortedKeys = $producesSortedKeys;
  }
  /** @return bool */
  public function getProducesSortedKeys()
  {
    return $this->producesSortedKeys;
  }
}

class SourceOperationRequest extends \Google\Model
{
  /** @var SourceGetMetadataRequest */
  public $getMetadata;
  /** @var string */
  public $name;
  /** @var string */
  public $originalName;
  /** @var SourceSplitRequest */
  public $split;
  /** @var string */
  public $stageName;
  /** @var string */
  public $systemName;
  protected $getMetadataType = SourceGetMetadataRequest::class;
  protected $getMetadataDataType = '';
  protected $splitType = SourceSplitRequest::class;
  protected $splitDataType = '';
  /** @param SourceGetMetadataRequest */
  public function setGetMetadata(SourceGetMetadataRequest $getMetadata)
  {
    $this->getMetadata = $getMetadata;
  }
  /** @return SourceGetMetadataRequest */
  public function getGetMetadata()
  {
    return $this->getMetadata;
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
  public function setOriginalName($originalName)
  {
    $this->originalName = $originalName;
  }
  /** @return string */
  public function getOriginalName()
  {
    return $this->originalName;
  }
  /** @param SourceSplitRequest */
  public function setSplit(SourceSplitRequest $split)
  {
    $this->split = $split;
  }
  /** @return SourceSplitRequest */
  public function getSplit()
  {
    return $this->split;
  }
  /** @param string */
  public function setStageName($stageName)
  {
    $this->stageName = $stageName;
  }
  /** @return string */
  public function getStageName()
  {
    return $this->stageName;
  }
  /** @param string */
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  /** @return string */
  public function getSystemName()
  {
    return $this->systemName;
  }
}

class SourceOperationResponse extends \Google\Model
{
  /** @var SourceGetMetadataResponse */
  public $getMetadata;
  /** @var SourceSplitResponse */
  public $split;
  protected $getMetadataType = SourceGetMetadataResponse::class;
  protected $getMetadataDataType = '';
  protected $splitType = SourceSplitResponse::class;
  protected $splitDataType = '';
  /** @param SourceGetMetadataResponse */
  public function setGetMetadata(SourceGetMetadataResponse $getMetadata)
  {
    $this->getMetadata = $getMetadata;
  }
  /** @return SourceGetMetadataResponse */
  public function getGetMetadata()
  {
    return $this->getMetadata;
  }
  /** @param SourceSplitResponse */
  public function setSplit(SourceSplitResponse $split)
  {
    $this->split = $split;
  }
  /** @return SourceSplitResponse */
  public function getSplit()
  {
    return $this->split;
  }
}

class SourceSplitOptions extends \Google\Model
{
  /** @var string */
  public $desiredBundleSizeBytes;
  /** @var string */
  public $desiredShardSizeBytes;

  /** @param string */
  public function setDesiredBundleSizeBytes($desiredBundleSizeBytes)
  {
    $this->desiredBundleSizeBytes = $desiredBundleSizeBytes;
  }
  /** @return string */
  public function getDesiredBundleSizeBytes()
  {
    return $this->desiredBundleSizeBytes;
  }
  /** @param string */
  public function setDesiredShardSizeBytes($desiredShardSizeBytes)
  {
    $this->desiredShardSizeBytes = $desiredShardSizeBytes;
  }
  /** @return string */
  public function getDesiredShardSizeBytes()
  {
    return $this->desiredShardSizeBytes;
  }
}

class SourceSplitRequest extends \Google\Model
{
  /** @var SourceSplitOptions */
  public $options;
  /** @var Source */
  public $source;
  protected $optionsType = SourceSplitOptions::class;
  protected $optionsDataType = '';
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  /** @param SourceSplitOptions */
  public function setOptions(SourceSplitOptions $options)
  {
    $this->options = $options;
  }
  /** @return SourceSplitOptions */
  public function getOptions()
  {
    return $this->options;
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
}

class SourceSplitResponse extends \Google\Collection
{
  /** @var DerivedSource[] */
  public $bundles;
  /** @var string */
  public $outcome;
  /** @var SourceSplitShard[] */
  public $shards;
  protected $collection_key = 'shards';
  protected $bundlesType = DerivedSource::class;
  protected $bundlesDataType = 'array';
  protected $shardsType = SourceSplitShard::class;
  protected $shardsDataType = 'array';
  /** @param DerivedSource[] */
  public function setBundles($bundles)
  {
    $this->bundles = $bundles;
  }
  /** @return DerivedSource[] */
  public function getBundles()
  {
    return $this->bundles;
  }
  /** @param string */
  public function setOutcome($outcome)
  {
    $this->outcome = $outcome;
  }
  /** @return string */
  public function getOutcome()
  {
    return $this->outcome;
  }
  /** @param SourceSplitShard[] */
  public function setShards($shards)
  {
    $this->shards = $shards;
  }
  /** @return SourceSplitShard[] */
  public function getShards()
  {
    return $this->shards;
  }
}

class SourceSplitShard extends \Google\Model
{
  /** @var string */
  public $derivationMode;
  /** @var Source */
  public $source;
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  /** @param string */
  public function setDerivationMode($derivationMode)
  {
    $this->derivationMode = $derivationMode;
  }
  /** @return string */
  public function getDerivationMode()
  {
    return $this->derivationMode;
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
}

class SpannerIODetails extends \Google\Model
{
  /** @var string */
  public $databaseId;
  /** @var string */
  public $instanceId;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /** @return string */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
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

class SplitInt64 extends \Google\Model
{
  /** @var int */
  public $highBits;
  /** @var string */
  public $lowBits;

  /** @param int */
  public function setHighBits($highBits)
  {
    $this->highBits = $highBits;
  }
  /** @return int */
  public function getHighBits()
  {
    return $this->highBits;
  }
  /** @param string */
  public function setLowBits($lowBits)
  {
    $this->lowBits = $lowBits;
  }
  /** @return string */
  public function getLowBits()
  {
    return $this->lowBits;
  }
}

class StageExecutionDetails extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var WorkerDetails[] */
  public $workers;
  protected $collection_key = 'workers';
  protected $workersType = WorkerDetails::class;
  protected $workersDataType = 'array';
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
  /** @param WorkerDetails[] */
  public function setWorkers($workers)
  {
    $this->workers = $workers;
  }
  /** @return WorkerDetails[] */
  public function getWorkers()
  {
    return $this->workers;
  }
}

class StageSource extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $originalTransformOrCollection;
  /** @var string */
  public $sizeBytes;
  /** @var string */
  public $userName;

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
  public function setOriginalTransformOrCollection($originalTransformOrCollection)
  {
    $this->originalTransformOrCollection = $originalTransformOrCollection;
  }
  /** @return string */
  public function getOriginalTransformOrCollection()
  {
    return $this->originalTransformOrCollection;
  }
  /** @param string */
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /** @return string */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
  /** @param string */
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  /** @return string */
  public function getUserName()
  {
    return $this->userName;
  }
}

class StageSummary extends \Google\Collection
{
  /** @var string */
  public $endTime;
  /** @var MetricUpdate[] */
  public $metrics;
  /** @var ProgressTimeseries */
  public $progress;
  /** @var string */
  public $stageId;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var StragglerSummary */
  public $stragglerSummary;
  protected $collection_key = 'metrics';
  protected $metricsType = MetricUpdate::class;
  protected $metricsDataType = 'array';
  protected $progressType = ProgressTimeseries::class;
  protected $progressDataType = '';
  protected $stragglerSummaryType = StragglerSummary::class;
  protected $stragglerSummaryDataType = '';
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
  /** @param MetricUpdate[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return MetricUpdate[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param ProgressTimeseries */
  public function setProgress(ProgressTimeseries $progress)
  {
    $this->progress = $progress;
  }
  /** @return ProgressTimeseries */
  public function getProgress()
  {
    return $this->progress;
  }
  /** @param string */
  public function setStageId($stageId)
  {
    $this->stageId = $stageId;
  }
  /** @return string */
  public function getStageId()
  {
    return $this->stageId;
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
  /** @param StragglerSummary */
  public function setStragglerSummary(StragglerSummary $stragglerSummary)
  {
    $this->stragglerSummary = $stragglerSummary;
  }
  /** @return StragglerSummary */
  public function getStragglerSummary()
  {
    return $this->stragglerSummary;
  }
}

class StateFamilyConfig extends \Google\Model
{
  /** @var bool */
  public $isRead;
  /** @var string */
  public $stateFamily;

  /** @param bool */
  public function setIsRead($isRead)
  {
    $this->isRead = $isRead;
  }
  /** @return bool */
  public function getIsRead()
  {
    return $this->isRead;
  }
  /** @param string */
  public function setStateFamily($stateFamily)
  {
    $this->stateFamily = $stateFamily;
  }
  /** @return string */
  public function getStateFamily()
  {
    return $this->stateFamily;
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

class Step extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var array[] */
  public $properties;

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
  /** @param array[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return array[] */
  public function getProperties()
  {
    return $this->properties;
  }
}

class StragglerDebuggingInfo extends \Google\Model
{
  /** @var HotKeyDebuggingInfo */
  public $hotKey;
  protected $hotKeyType = HotKeyDebuggingInfo::class;
  protected $hotKeyDataType = '';
  /** @param HotKeyDebuggingInfo */
  public function setHotKey(HotKeyDebuggingInfo $hotKey)
  {
    $this->hotKey = $hotKey;
  }
  /** @return HotKeyDebuggingInfo */
  public function getHotKey()
  {
    return $this->hotKey;
  }
}

class StragglerInfo extends \Google\Model
{
  /** @var StragglerDebuggingInfo[] */
  public $causes;
  /** @var string */
  public $startTime;
  protected $causesType = StragglerDebuggingInfo::class;
  protected $causesDataType = 'map';
  /** @param StragglerDebuggingInfo[] */
  public function setCauses($causes)
  {
    $this->causes = $causes;
  }
  /** @return StragglerDebuggingInfo[] */
  public function getCauses()
  {
    return $this->causes;
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

class StragglerSummary extends \Google\Model
{
  /** @var string[] */
  public $stragglerCauseCount;
  /** @var string */
  public $totalStragglerCount;

  /** @param string[] */
  public function setStragglerCauseCount($stragglerCauseCount)
  {
    $this->stragglerCauseCount = $stragglerCauseCount;
  }
  /** @return string[] */
  public function getStragglerCauseCount()
  {
    return $this->stragglerCauseCount;
  }
  /** @param string */
  public function setTotalStragglerCount($totalStragglerCount)
  {
    $this->totalStragglerCount = $totalStragglerCount;
  }
  /** @return string */
  public function getTotalStragglerCount()
  {
    return $this->totalStragglerCount;
  }
}

class StreamLocation extends \Google\Model
{
  /** @var CustomSourceLocation */
  public $customSourceLocation;
  /** @var PubsubLocation */
  public $pubsubLocation;
  /** @var StreamingSideInputLocation */
  public $sideInputLocation;
  /** @var StreamingStageLocation */
  public $streamingStageLocation;
  protected $customSourceLocationType = CustomSourceLocation::class;
  protected $customSourceLocationDataType = '';
  protected $pubsubLocationType = PubsubLocation::class;
  protected $pubsubLocationDataType = '';
  protected $sideInputLocationType = StreamingSideInputLocation::class;
  protected $sideInputLocationDataType = '';
  protected $streamingStageLocationType = StreamingStageLocation::class;
  protected $streamingStageLocationDataType = '';
  /** @param CustomSourceLocation */
  public function setCustomSourceLocation(CustomSourceLocation $customSourceLocation)
  {
    $this->customSourceLocation = $customSourceLocation;
  }
  /** @return CustomSourceLocation */
  public function getCustomSourceLocation()
  {
    return $this->customSourceLocation;
  }
  /** @param PubsubLocation */
  public function setPubsubLocation(PubsubLocation $pubsubLocation)
  {
    $this->pubsubLocation = $pubsubLocation;
  }
  /** @return PubsubLocation */
  public function getPubsubLocation()
  {
    return $this->pubsubLocation;
  }
  /** @param StreamingSideInputLocation */
  public function setSideInputLocation(StreamingSideInputLocation $sideInputLocation)
  {
    $this->sideInputLocation = $sideInputLocation;
  }
  /** @return StreamingSideInputLocation */
  public function getSideInputLocation()
  {
    return $this->sideInputLocation;
  }
  /** @param StreamingStageLocation */
  public function setStreamingStageLocation(StreamingStageLocation $streamingStageLocation)
  {
    $this->streamingStageLocation = $streamingStageLocation;
  }
  /** @return StreamingStageLocation */
  public function getStreamingStageLocation()
  {
    return $this->streamingStageLocation;
  }
}

class StreamingApplianceSnapshotConfig extends \Google\Model
{
  /** @var string */
  public $importStateEndpoint;
  /** @var string */
  public $snapshotId;

  /** @param string */
  public function setImportStateEndpoint($importStateEndpoint)
  {
    $this->importStateEndpoint = $importStateEndpoint;
  }
  /** @return string */
  public function getImportStateEndpoint()
  {
    return $this->importStateEndpoint;
  }
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
}

class StreamingComputationConfig extends \Google\Collection
{
  /** @var string */
  public $computationId;
  /** @var ParallelInstruction[] */
  public $instructions;
  /** @var string */
  public $stageName;
  /** @var string */
  public $systemName;
  /** @var string[] */
  public $transformUserNameToStateFamily;
  protected $collection_key = 'instructions';
  protected $instructionsType = ParallelInstruction::class;
  protected $instructionsDataType = 'array';
  /** @param string */
  public function setComputationId($computationId)
  {
    $this->computationId = $computationId;
  }
  /** @return string */
  public function getComputationId()
  {
    return $this->computationId;
  }
  /** @param ParallelInstruction[] */
  public function setInstructions($instructions)
  {
    $this->instructions = $instructions;
  }
  /** @return ParallelInstruction[] */
  public function getInstructions()
  {
    return $this->instructions;
  }
  /** @param string */
  public function setStageName($stageName)
  {
    $this->stageName = $stageName;
  }
  /** @return string */
  public function getStageName()
  {
    return $this->stageName;
  }
  /** @param string */
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  /** @return string */
  public function getSystemName()
  {
    return $this->systemName;
  }
  /** @param string[] */
  public function setTransformUserNameToStateFamily($transformUserNameToStateFamily)
  {
    $this->transformUserNameToStateFamily = $transformUserNameToStateFamily;
  }
  /** @return string[] */
  public function getTransformUserNameToStateFamily()
  {
    return $this->transformUserNameToStateFamily;
  }
}

class StreamingComputationRanges extends \Google\Collection
{
  /** @var string */
  public $computationId;
  /** @var KeyRangeDataDiskAssignment[] */
  public $rangeAssignments;
  protected $collection_key = 'rangeAssignments';
  protected $rangeAssignmentsType = KeyRangeDataDiskAssignment::class;
  protected $rangeAssignmentsDataType = 'array';
  /** @param string */
  public function setComputationId($computationId)
  {
    $this->computationId = $computationId;
  }
  /** @return string */
  public function getComputationId()
  {
    return $this->computationId;
  }
  /** @param KeyRangeDataDiskAssignment[] */
  public function setRangeAssignments($rangeAssignments)
  {
    $this->rangeAssignments = $rangeAssignments;
  }
  /** @return KeyRangeDataDiskAssignment[] */
  public function getRangeAssignments()
  {
    return $this->rangeAssignments;
  }
}

class StreamingComputationTask extends \Google\Collection
{
  /** @var StreamingComputationRanges[] */
  public $computationRanges;
  /** @var MountedDataDisk[] */
  public $dataDisks;
  /** @var string */
  public $taskType;
  protected $collection_key = 'dataDisks';
  protected $computationRangesType = StreamingComputationRanges::class;
  protected $computationRangesDataType = 'array';
  protected $dataDisksType = MountedDataDisk::class;
  protected $dataDisksDataType = 'array';
  /** @param StreamingComputationRanges[] */
  public function setComputationRanges($computationRanges)
  {
    $this->computationRanges = $computationRanges;
  }
  /** @return StreamingComputationRanges[] */
  public function getComputationRanges()
  {
    return $this->computationRanges;
  }
  /** @param MountedDataDisk[] */
  public function setDataDisks($dataDisks)
  {
    $this->dataDisks = $dataDisks;
  }
  /** @return MountedDataDisk[] */
  public function getDataDisks()
  {
    return $this->dataDisks;
  }
  /** @param string */
  public function setTaskType($taskType)
  {
    $this->taskType = $taskType;
  }
  /** @return string */
  public function getTaskType()
  {
    return $this->taskType;
  }
}

class StreamingConfigTask extends \Google\Collection
{
  /** @var string */
  public $commitStreamChunkSizeBytes;
  /** @var string */
  public $getDataStreamChunkSizeBytes;
  /** @var string */
  public $maxWorkItemCommitBytes;
  /** @var StreamingComputationConfig[] */
  public $streamingComputationConfigs;
  /** @var string[] */
  public $userStepToStateFamilyNameMap;
  /** @var string */
  public $windmillServiceEndpoint;
  /** @var string */
  public $windmillServicePort;
  protected $collection_key = 'streamingComputationConfigs';
  protected $streamingComputationConfigsType = StreamingComputationConfig::class;
  protected $streamingComputationConfigsDataType = 'array';
  /** @param string */
  public function setCommitStreamChunkSizeBytes($commitStreamChunkSizeBytes)
  {
    $this->commitStreamChunkSizeBytes = $commitStreamChunkSizeBytes;
  }
  /** @return string */
  public function getCommitStreamChunkSizeBytes()
  {
    return $this->commitStreamChunkSizeBytes;
  }
  /** @param string */
  public function setGetDataStreamChunkSizeBytes($getDataStreamChunkSizeBytes)
  {
    $this->getDataStreamChunkSizeBytes = $getDataStreamChunkSizeBytes;
  }
  /** @return string */
  public function getGetDataStreamChunkSizeBytes()
  {
    return $this->getDataStreamChunkSizeBytes;
  }
  /** @param string */
  public function setMaxWorkItemCommitBytes($maxWorkItemCommitBytes)
  {
    $this->maxWorkItemCommitBytes = $maxWorkItemCommitBytes;
  }
  /** @return string */
  public function getMaxWorkItemCommitBytes()
  {
    return $this->maxWorkItemCommitBytes;
  }
  /** @param StreamingComputationConfig[] */
  public function setStreamingComputationConfigs($streamingComputationConfigs)
  {
    $this->streamingComputationConfigs = $streamingComputationConfigs;
  }
  /** @return StreamingComputationConfig[] */
  public function getStreamingComputationConfigs()
  {
    return $this->streamingComputationConfigs;
  }
  /** @param string[] */
  public function setUserStepToStateFamilyNameMap($userStepToStateFamilyNameMap)
  {
    $this->userStepToStateFamilyNameMap = $userStepToStateFamilyNameMap;
  }
  /** @return string[] */
  public function getUserStepToStateFamilyNameMap()
  {
    return $this->userStepToStateFamilyNameMap;
  }
  /** @param string */
  public function setWindmillServiceEndpoint($windmillServiceEndpoint)
  {
    $this->windmillServiceEndpoint = $windmillServiceEndpoint;
  }
  /** @return string */
  public function getWindmillServiceEndpoint()
  {
    return $this->windmillServiceEndpoint;
  }
  /** @param string */
  public function setWindmillServicePort($windmillServicePort)
  {
    $this->windmillServicePort = $windmillServicePort;
  }
  /** @return string */
  public function getWindmillServicePort()
  {
    return $this->windmillServicePort;
  }
}

class StreamingSetupTask extends \Google\Model
{
  /** @var bool */
  public $drain;
  /** @var int */
  public $receiveWorkPort;
  /** @var StreamingApplianceSnapshotConfig */
  public $snapshotConfig;
  /** @var TopologyConfig */
  public $streamingComputationTopology;
  /** @var int */
  public $workerHarnessPort;
  protected $snapshotConfigType = StreamingApplianceSnapshotConfig::class;
  protected $snapshotConfigDataType = '';
  protected $streamingComputationTopologyType = TopologyConfig::class;
  protected $streamingComputationTopologyDataType = '';
  /** @param bool */
  public function setDrain($drain)
  {
    $this->drain = $drain;
  }
  /** @return bool */
  public function getDrain()
  {
    return $this->drain;
  }
  /** @param int */
  public function setReceiveWorkPort($receiveWorkPort)
  {
    $this->receiveWorkPort = $receiveWorkPort;
  }
  /** @return int */
  public function getReceiveWorkPort()
  {
    return $this->receiveWorkPort;
  }
  /** @param StreamingApplianceSnapshotConfig */
  public function setSnapshotConfig(StreamingApplianceSnapshotConfig $snapshotConfig)
  {
    $this->snapshotConfig = $snapshotConfig;
  }
  /** @return StreamingApplianceSnapshotConfig */
  public function getSnapshotConfig()
  {
    return $this->snapshotConfig;
  }
  /** @param TopologyConfig */
  public function setStreamingComputationTopology(TopologyConfig $streamingComputationTopology)
  {
    $this->streamingComputationTopology = $streamingComputationTopology;
  }
  /** @return TopologyConfig */
  public function getStreamingComputationTopology()
  {
    return $this->streamingComputationTopology;
  }
  /** @param int */
  public function setWorkerHarnessPort($workerHarnessPort)
  {
    $this->workerHarnessPort = $workerHarnessPort;
  }
  /** @return int */
  public function getWorkerHarnessPort()
  {
    return $this->workerHarnessPort;
  }
}

class StreamingSideInputLocation extends \Google\Model
{
  /** @var string */
  public $stateFamily;
  /** @var string */
  public $tag;

  /** @param string */
  public function setStateFamily($stateFamily)
  {
    $this->stateFamily = $stateFamily;
  }
  /** @return string */
  public function getStateFamily()
  {
    return $this->stateFamily;
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

class StreamingStageLocation extends \Google\Model
{
  /** @var string */
  public $streamId;

  /** @param string */
  public function setStreamId($streamId)
  {
    $this->streamId = $streamId;
  }
  /** @return string */
  public function getStreamId()
  {
    return $this->streamId;
  }
}

class StringList extends \Google\Collection
{
  /** @var string[] */
  public $elements;
  protected $collection_key = 'elements';
  /** @param string[] */
  public function setElements($elements)
  {
    $this->elements = $elements;
  }
  /** @return string[] */
  public function getElements()
  {
    return $this->elements;
  }
}

class StructuredMessage extends \Google\Collection
{
  /** @var string */
  public $messageKey;
  /** @var string */
  public $messageText;
  /** @var Parameter[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = Parameter::class;
  protected $parametersDataType = 'array';
  /** @param string */
  public function setMessageKey($messageKey)
  {
    $this->messageKey = $messageKey;
  }
  /** @return string */
  public function getMessageKey()
  {
    return $this->messageKey;
  }
  /** @param string */
  public function setMessageText($messageText)
  {
    $this->messageText = $messageText;
  }
  /** @return string */
  public function getMessageText()
  {
    return $this->messageText;
  }
  /** @param Parameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return Parameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class TaskRunnerSettings extends \Google\Collection
{
  /** @var bool */
  public $alsologtostderr;
  /** @var string */
  public $baseTaskDir;
  /** @var string */
  public $baseUrl;
  /** @var string */
  public $commandlinesFileName;
  /** @var bool */
  public $continueOnException;
  /** @var string */
  public $dataflowApiVersion;
  /** @var string */
  public $harnessCommand;
  /** @var string */
  public $languageHint;
  /** @var string */
  public $logDir;
  /** @var bool */
  public $logToSerialconsole;
  /** @var string */
  public $logUploadLocation;
  /** @var string[] */
  public $oauthScopes;
  /** @var WorkerSettings */
  public $parallelWorkerSettings;
  /** @var string */
  public $streamingWorkerMainClass;
  /** @var string */
  public $taskGroup;
  /** @var string */
  public $taskUser;
  /** @var string */
  public $tempStoragePrefix;
  /** @var string */
  public $vmId;
  /** @var string */
  public $workflowFileName;
  protected $collection_key = 'oauthScopes';
  protected $parallelWorkerSettingsType = WorkerSettings::class;
  protected $parallelWorkerSettingsDataType = '';
  /** @param bool */
  public function setAlsologtostderr($alsologtostderr)
  {
    $this->alsologtostderr = $alsologtostderr;
  }
  /** @return bool */
  public function getAlsologtostderr()
  {
    return $this->alsologtostderr;
  }
  /** @param string */
  public function setBaseTaskDir($baseTaskDir)
  {
    $this->baseTaskDir = $baseTaskDir;
  }
  /** @return string */
  public function getBaseTaskDir()
  {
    return $this->baseTaskDir;
  }
  /** @param string */
  public function setBaseUrl($baseUrl)
  {
    $this->baseUrl = $baseUrl;
  }
  /** @return string */
  public function getBaseUrl()
  {
    return $this->baseUrl;
  }
  /** @param string */
  public function setCommandlinesFileName($commandlinesFileName)
  {
    $this->commandlinesFileName = $commandlinesFileName;
  }
  /** @return string */
  public function getCommandlinesFileName()
  {
    return $this->commandlinesFileName;
  }
  /** @param bool */
  public function setContinueOnException($continueOnException)
  {
    $this->continueOnException = $continueOnException;
  }
  /** @return bool */
  public function getContinueOnException()
  {
    return $this->continueOnException;
  }
  /** @param string */
  public function setDataflowApiVersion($dataflowApiVersion)
  {
    $this->dataflowApiVersion = $dataflowApiVersion;
  }
  /** @return string */
  public function getDataflowApiVersion()
  {
    return $this->dataflowApiVersion;
  }
  /** @param string */
  public function setHarnessCommand($harnessCommand)
  {
    $this->harnessCommand = $harnessCommand;
  }
  /** @return string */
  public function getHarnessCommand()
  {
    return $this->harnessCommand;
  }
  /** @param string */
  public function setLanguageHint($languageHint)
  {
    $this->languageHint = $languageHint;
  }
  /** @return string */
  public function getLanguageHint()
  {
    return $this->languageHint;
  }
  /** @param string */
  public function setLogDir($logDir)
  {
    $this->logDir = $logDir;
  }
  /** @return string */
  public function getLogDir()
  {
    return $this->logDir;
  }
  /** @param bool */
  public function setLogToSerialconsole($logToSerialconsole)
  {
    $this->logToSerialconsole = $logToSerialconsole;
  }
  /** @return bool */
  public function getLogToSerialconsole()
  {
    return $this->logToSerialconsole;
  }
  /** @param string */
  public function setLogUploadLocation($logUploadLocation)
  {
    $this->logUploadLocation = $logUploadLocation;
  }
  /** @return string */
  public function getLogUploadLocation()
  {
    return $this->logUploadLocation;
  }
  /** @param string[] */
  public function setOauthScopes($oauthScopes)
  {
    $this->oauthScopes = $oauthScopes;
  }
  /** @return string[] */
  public function getOauthScopes()
  {
    return $this->oauthScopes;
  }
  /** @param WorkerSettings */
  public function setParallelWorkerSettings(WorkerSettings $parallelWorkerSettings)
  {
    $this->parallelWorkerSettings = $parallelWorkerSettings;
  }
  /** @return WorkerSettings */
  public function getParallelWorkerSettings()
  {
    return $this->parallelWorkerSettings;
  }
  /** @param string */
  public function setStreamingWorkerMainClass($streamingWorkerMainClass)
  {
    $this->streamingWorkerMainClass = $streamingWorkerMainClass;
  }
  /** @return string */
  public function getStreamingWorkerMainClass()
  {
    return $this->streamingWorkerMainClass;
  }
  /** @param string */
  public function setTaskGroup($taskGroup)
  {
    $this->taskGroup = $taskGroup;
  }
  /** @return string */
  public function getTaskGroup()
  {
    return $this->taskGroup;
  }
  /** @param string */
  public function setTaskUser($taskUser)
  {
    $this->taskUser = $taskUser;
  }
  /** @return string */
  public function getTaskUser()
  {
    return $this->taskUser;
  }
  /** @param string */
  public function setTempStoragePrefix($tempStoragePrefix)
  {
    $this->tempStoragePrefix = $tempStoragePrefix;
  }
  /** @return string */
  public function getTempStoragePrefix()
  {
    return $this->tempStoragePrefix;
  }
  /** @param string */
  public function setVmId($vmId)
  {
    $this->vmId = $vmId;
  }
  /** @return string */
  public function getVmId()
  {
    return $this->vmId;
  }
  /** @param string */
  public function setWorkflowFileName($workflowFileName)
  {
    $this->workflowFileName = $workflowFileName;
  }
  /** @return string */
  public function getWorkflowFileName()
  {
    return $this->workflowFileName;
  }
}

class TemplateMetadata extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var ParameterMetadata[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $parametersType = ParameterMetadata::class;
  protected $parametersDataType = 'array';
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param ParameterMetadata[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return ParameterMetadata[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class TopologyConfig extends \Google\Collection
{
  /** @var ComputationTopology[] */
  public $computations;
  /** @var DataDiskAssignment[] */
  public $dataDiskAssignments;
  /** @var int */
  public $forwardingKeyBits;
  /** @var int */
  public $persistentStateVersion;
  /** @var string[] */
  public $userStageToComputationNameMap;
  protected $collection_key = 'dataDiskAssignments';
  protected $computationsType = ComputationTopology::class;
  protected $computationsDataType = 'array';
  protected $dataDiskAssignmentsType = DataDiskAssignment::class;
  protected $dataDiskAssignmentsDataType = 'array';
  /** @param ComputationTopology[] */
  public function setComputations($computations)
  {
    $this->computations = $computations;
  }
  /** @return ComputationTopology[] */
  public function getComputations()
  {
    return $this->computations;
  }
  /** @param DataDiskAssignment[] */
  public function setDataDiskAssignments($dataDiskAssignments)
  {
    $this->dataDiskAssignments = $dataDiskAssignments;
  }
  /** @return DataDiskAssignment[] */
  public function getDataDiskAssignments()
  {
    return $this->dataDiskAssignments;
  }
  /** @param int */
  public function setForwardingKeyBits($forwardingKeyBits)
  {
    $this->forwardingKeyBits = $forwardingKeyBits;
  }
  /** @return int */
  public function getForwardingKeyBits()
  {
    return $this->forwardingKeyBits;
  }
  /** @param int */
  public function setPersistentStateVersion($persistentStateVersion)
  {
    $this->persistentStateVersion = $persistentStateVersion;
  }
  /** @return int */
  public function getPersistentStateVersion()
  {
    return $this->persistentStateVersion;
  }
  /** @param string[] */
  public function setUserStageToComputationNameMap($userStageToComputationNameMap)
  {
    $this->userStageToComputationNameMap = $userStageToComputationNameMap;
  }
  /** @return string[] */
  public function getUserStageToComputationNameMap()
  {
    return $this->userStageToComputationNameMap;
  }
}

class TransformSummary extends \Google\Collection
{
  /** @var DisplayData[] */
  public $displayData;
  /** @var string */
  public $id;
  /** @var string[] */
  public $inputCollectionName;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;
  /** @var string[] */
  public $outputCollectionName;
  protected $collection_key = 'outputCollectionName';
  protected $displayDataType = DisplayData::class;
  protected $displayDataDataType = 'array';
  /** @param DisplayData[] */
  public function setDisplayData($displayData)
  {
    $this->displayData = $displayData;
  }
  /** @return DisplayData[] */
  public function getDisplayData()
  {
    return $this->displayData;
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
  public function setInputCollectionName($inputCollectionName)
  {
    $this->inputCollectionName = $inputCollectionName;
  }
  /** @return string[] */
  public function getInputCollectionName()
  {
    return $this->inputCollectionName;
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
  /** @param string[] */
  public function setOutputCollectionName($outputCollectionName)
  {
    $this->outputCollectionName = $outputCollectionName;
  }
  /** @return string[] */
  public function getOutputCollectionName()
  {
    return $this->outputCollectionName;
  }
}

class ValidateResponse extends \Google\Model
{
  /** @var string */
  public $errorMessage;
  /** @var QueryInfo */
  public $queryInfo;
  protected $queryInfoType = QueryInfo::class;
  protected $queryInfoDataType = '';
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
  /** @param QueryInfo */
  public function setQueryInfo(QueryInfo $queryInfo)
  {
    $this->queryInfo = $queryInfo;
  }
  /** @return QueryInfo */
  public function getQueryInfo()
  {
    return $this->queryInfo;
  }
}

class WorkItem extends \Google\Collection
{
  /** @var string */
  public $configuration;
  /** @var string */
  public $id;
  /** @var string */
  public $initialReportIndex;
  /** @var string */
  public $jobId;
  /** @var string */
  public $leaseExpireTime;
  /** @var MapTask */
  public $mapTask;
  /** @var Package[] */
  public $packages;
  /** @var string */
  public $projectId;
  /** @var string */
  public $reportStatusInterval;
  /** @var SeqMapTask */
  public $seqMapTask;
  /** @var ShellTask */
  public $shellTask;
  /** @var SourceOperationRequest */
  public $sourceOperationTask;
  /** @var StreamingComputationTask */
  public $streamingComputationTask;
  /** @var StreamingConfigTask */
  public $streamingConfigTask;
  /** @var StreamingSetupTask */
  public $streamingSetupTask;
  protected $collection_key = 'packages';
  protected $mapTaskType = MapTask::class;
  protected $mapTaskDataType = '';
  protected $packagesType = Package::class;
  protected $packagesDataType = 'array';
  protected $seqMapTaskType = SeqMapTask::class;
  protected $seqMapTaskDataType = '';
  protected $shellTaskType = ShellTask::class;
  protected $shellTaskDataType = '';
  protected $sourceOperationTaskType = SourceOperationRequest::class;
  protected $sourceOperationTaskDataType = '';
  protected $streamingComputationTaskType = StreamingComputationTask::class;
  protected $streamingComputationTaskDataType = '';
  protected $streamingConfigTaskType = StreamingConfigTask::class;
  protected $streamingConfigTaskDataType = '';
  protected $streamingSetupTaskType = StreamingSetupTask::class;
  protected $streamingSetupTaskDataType = '';
  /** @param string */
  public function setConfiguration($configuration)
  {
    $this->configuration = $configuration;
  }
  /** @return string */
  public function getConfiguration()
  {
    return $this->configuration;
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
  public function setInitialReportIndex($initialReportIndex)
  {
    $this->initialReportIndex = $initialReportIndex;
  }
  /** @return string */
  public function getInitialReportIndex()
  {
    return $this->initialReportIndex;
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
  public function setLeaseExpireTime($leaseExpireTime)
  {
    $this->leaseExpireTime = $leaseExpireTime;
  }
  /** @return string */
  public function getLeaseExpireTime()
  {
    return $this->leaseExpireTime;
  }
  /** @param MapTask */
  public function setMapTask(MapTask $mapTask)
  {
    $this->mapTask = $mapTask;
  }
  /** @return MapTask */
  public function getMapTask()
  {
    return $this->mapTask;
  }
  /** @param Package[] */
  public function setPackages($packages)
  {
    $this->packages = $packages;
  }
  /** @return Package[] */
  public function getPackages()
  {
    return $this->packages;
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
  public function setReportStatusInterval($reportStatusInterval)
  {
    $this->reportStatusInterval = $reportStatusInterval;
  }
  /** @return string */
  public function getReportStatusInterval()
  {
    return $this->reportStatusInterval;
  }
  /** @param SeqMapTask */
  public function setSeqMapTask(SeqMapTask $seqMapTask)
  {
    $this->seqMapTask = $seqMapTask;
  }
  /** @return SeqMapTask */
  public function getSeqMapTask()
  {
    return $this->seqMapTask;
  }
  /** @param ShellTask */
  public function setShellTask(ShellTask $shellTask)
  {
    $this->shellTask = $shellTask;
  }
  /** @return ShellTask */
  public function getShellTask()
  {
    return $this->shellTask;
  }
  /** @param SourceOperationRequest */
  public function setSourceOperationTask(SourceOperationRequest $sourceOperationTask)
  {
    $this->sourceOperationTask = $sourceOperationTask;
  }
  /** @return SourceOperationRequest */
  public function getSourceOperationTask()
  {
    return $this->sourceOperationTask;
  }
  /** @param StreamingComputationTask */
  public function setStreamingComputationTask(StreamingComputationTask $streamingComputationTask)
  {
    $this->streamingComputationTask = $streamingComputationTask;
  }
  /** @return StreamingComputationTask */
  public function getStreamingComputationTask()
  {
    return $this->streamingComputationTask;
  }
  /** @param StreamingConfigTask */
  public function setStreamingConfigTask(StreamingConfigTask $streamingConfigTask)
  {
    $this->streamingConfigTask = $streamingConfigTask;
  }
  /** @return StreamingConfigTask */
  public function getStreamingConfigTask()
  {
    return $this->streamingConfigTask;
  }
  /** @param StreamingSetupTask */
  public function setStreamingSetupTask(StreamingSetupTask $streamingSetupTask)
  {
    $this->streamingSetupTask = $streamingSetupTask;
  }
  /** @return StreamingSetupTask */
  public function getStreamingSetupTask()
  {
    return $this->streamingSetupTask;
  }
}

class WorkItemDetails extends \Google\Collection
{
  /** @var string */
  public $attemptId;
  /** @var string */
  public $endTime;
  /** @var MetricUpdate[] */
  public $metrics;
  /** @var ProgressTimeseries */
  public $progress;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var StragglerInfo */
  public $stragglerInfo;
  /** @var string */
  public $taskId;
  protected $collection_key = 'metrics';
  protected $metricsType = MetricUpdate::class;
  protected $metricsDataType = 'array';
  protected $progressType = ProgressTimeseries::class;
  protected $progressDataType = '';
  protected $stragglerInfoType = StragglerInfo::class;
  protected $stragglerInfoDataType = '';
  /** @param string */
  public function setAttemptId($attemptId)
  {
    $this->attemptId = $attemptId;
  }
  /** @return string */
  public function getAttemptId()
  {
    return $this->attemptId;
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
  /** @param MetricUpdate[] */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /** @return MetricUpdate[] */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /** @param ProgressTimeseries */
  public function setProgress(ProgressTimeseries $progress)
  {
    $this->progress = $progress;
  }
  /** @return ProgressTimeseries */
  public function getProgress()
  {
    return $this->progress;
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
  /** @param StragglerInfo */
  public function setStragglerInfo(StragglerInfo $stragglerInfo)
  {
    $this->stragglerInfo = $stragglerInfo;
  }
  /** @return StragglerInfo */
  public function getStragglerInfo()
  {
    return $this->stragglerInfo;
  }
  /** @param string */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /** @return string */
  public function getTaskId()
  {
    return $this->taskId;
  }
}

class WorkItemServiceState extends \Google\Collection
{
  /** @var Status */
  public $completeWorkStatus;
  /** @var array[] */
  public $harnessData;
  /** @var HotKeyDetection */
  public $hotKeyDetection;
  /** @var string */
  public $leaseExpireTime;
  /** @var MetricShortId[] */
  public $metricShortId;
  /** @var string */
  public $nextReportIndex;
  /** @var string */
  public $reportStatusInterval;
  /** @var ApproximateSplitRequest */
  public $splitRequest;
  /** @var ApproximateProgress */
  public $suggestedStopPoint;
  /** @var Position */
  public $suggestedStopPosition;
  protected $collection_key = 'metricShortId';
  protected $completeWorkStatusType = Status::class;
  protected $completeWorkStatusDataType = '';
  protected $hotKeyDetectionType = HotKeyDetection::class;
  protected $hotKeyDetectionDataType = '';
  protected $metricShortIdType = MetricShortId::class;
  protected $metricShortIdDataType = 'array';
  protected $splitRequestType = ApproximateSplitRequest::class;
  protected $splitRequestDataType = '';
  protected $suggestedStopPointType = ApproximateProgress::class;
  protected $suggestedStopPointDataType = '';
  protected $suggestedStopPositionType = Position::class;
  protected $suggestedStopPositionDataType = '';
  /** @param Status */
  public function setCompleteWorkStatus(Status $completeWorkStatus)
  {
    $this->completeWorkStatus = $completeWorkStatus;
  }
  /** @return Status */
  public function getCompleteWorkStatus()
  {
    return $this->completeWorkStatus;
  }
  /** @param array[] */
  public function setHarnessData($harnessData)
  {
    $this->harnessData = $harnessData;
  }
  /** @return array[] */
  public function getHarnessData()
  {
    return $this->harnessData;
  }
  /** @param HotKeyDetection */
  public function setHotKeyDetection(HotKeyDetection $hotKeyDetection)
  {
    $this->hotKeyDetection = $hotKeyDetection;
  }
  /** @return HotKeyDetection */
  public function getHotKeyDetection()
  {
    return $this->hotKeyDetection;
  }
  /** @param string */
  public function setLeaseExpireTime($leaseExpireTime)
  {
    $this->leaseExpireTime = $leaseExpireTime;
  }
  /** @return string */
  public function getLeaseExpireTime()
  {
    return $this->leaseExpireTime;
  }
  /** @param MetricShortId[] */
  public function setMetricShortId($metricShortId)
  {
    $this->metricShortId = $metricShortId;
  }
  /** @return MetricShortId[] */
  public function getMetricShortId()
  {
    return $this->metricShortId;
  }
  /** @param string */
  public function setNextReportIndex($nextReportIndex)
  {
    $this->nextReportIndex = $nextReportIndex;
  }
  /** @return string */
  public function getNextReportIndex()
  {
    return $this->nextReportIndex;
  }
  /** @param string */
  public function setReportStatusInterval($reportStatusInterval)
  {
    $this->reportStatusInterval = $reportStatusInterval;
  }
  /** @return string */
  public function getReportStatusInterval()
  {
    return $this->reportStatusInterval;
  }
  /** @param ApproximateSplitRequest */
  public function setSplitRequest(ApproximateSplitRequest $splitRequest)
  {
    $this->splitRequest = $splitRequest;
  }
  /** @return ApproximateSplitRequest */
  public function getSplitRequest()
  {
    return $this->splitRequest;
  }
  /** @param ApproximateProgress */
  public function setSuggestedStopPoint(ApproximateProgress $suggestedStopPoint)
  {
    $this->suggestedStopPoint = $suggestedStopPoint;
  }
  /** @return ApproximateProgress */
  public function getSuggestedStopPoint()
  {
    return $this->suggestedStopPoint;
  }
  /** @param Position */
  public function setSuggestedStopPosition(Position $suggestedStopPosition)
  {
    $this->suggestedStopPosition = $suggestedStopPosition;
  }
  /** @return Position */
  public function getSuggestedStopPosition()
  {
    return $this->suggestedStopPosition;
  }
}

class WorkItemStatus extends \Google\Collection
{
  /** @var bool */
  public $completed;
  /** @var CounterUpdate[] */
  public $counterUpdates;
  /** @var DynamicSourceSplit */
  public $dynamicSourceSplit;
  /** @var Status[] */
  public $errors;
  /** @var MetricUpdate[] */
  public $metricUpdates;
  /** @var ApproximateProgress */
  public $progress;
  /** @var string */
  public $reportIndex;
  /** @var ApproximateReportedProgress */
  public $reportedProgress;
  /** @var string */
  public $requestedLeaseDuration;
  /** @var SourceFork */
  public $sourceFork;
  /** @var SourceOperationResponse */
  public $sourceOperationResponse;
  /** @var Position */
  public $stopPosition;
  public $totalThrottlerWaitTimeSeconds;
  /** @var string */
  public $workItemId;
  protected $collection_key = 'metricUpdates';
  protected $counterUpdatesType = CounterUpdate::class;
  protected $counterUpdatesDataType = 'array';
  protected $dynamicSourceSplitType = DynamicSourceSplit::class;
  protected $dynamicSourceSplitDataType = '';
  protected $errorsType = Status::class;
  protected $errorsDataType = 'array';
  protected $metricUpdatesType = MetricUpdate::class;
  protected $metricUpdatesDataType = 'array';
  protected $progressType = ApproximateProgress::class;
  protected $progressDataType = '';
  protected $reportedProgressType = ApproximateReportedProgress::class;
  protected $reportedProgressDataType = '';
  protected $sourceForkType = SourceFork::class;
  protected $sourceForkDataType = '';
  protected $sourceOperationResponseType = SourceOperationResponse::class;
  protected $sourceOperationResponseDataType = '';
  protected $stopPositionType = Position::class;
  protected $stopPositionDataType = '';
  /** @param bool */
  public function setCompleted($completed)
  {
    $this->completed = $completed;
  }
  /** @return bool */
  public function getCompleted()
  {
    return $this->completed;
  }
  /** @param CounterUpdate[] */
  public function setCounterUpdates($counterUpdates)
  {
    $this->counterUpdates = $counterUpdates;
  }
  /** @return CounterUpdate[] */
  public function getCounterUpdates()
  {
    return $this->counterUpdates;
  }
  /** @param DynamicSourceSplit */
  public function setDynamicSourceSplit(DynamicSourceSplit $dynamicSourceSplit)
  {
    $this->dynamicSourceSplit = $dynamicSourceSplit;
  }
  /** @return DynamicSourceSplit */
  public function getDynamicSourceSplit()
  {
    return $this->dynamicSourceSplit;
  }
  /** @param Status[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return Status[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param MetricUpdate[] */
  public function setMetricUpdates($metricUpdates)
  {
    $this->metricUpdates = $metricUpdates;
  }
  /** @return MetricUpdate[] */
  public function getMetricUpdates()
  {
    return $this->metricUpdates;
  }
  /** @param ApproximateProgress */
  public function setProgress(ApproximateProgress $progress)
  {
    $this->progress = $progress;
  }
  /** @return ApproximateProgress */
  public function getProgress()
  {
    return $this->progress;
  }
  /** @param string */
  public function setReportIndex($reportIndex)
  {
    $this->reportIndex = $reportIndex;
  }
  /** @return string */
  public function getReportIndex()
  {
    return $this->reportIndex;
  }
  /** @param ApproximateReportedProgress */
  public function setReportedProgress(ApproximateReportedProgress $reportedProgress)
  {
    $this->reportedProgress = $reportedProgress;
  }
  /** @return ApproximateReportedProgress */
  public function getReportedProgress()
  {
    return $this->reportedProgress;
  }
  /** @param string */
  public function setRequestedLeaseDuration($requestedLeaseDuration)
  {
    $this->requestedLeaseDuration = $requestedLeaseDuration;
  }
  /** @return string */
  public function getRequestedLeaseDuration()
  {
    return $this->requestedLeaseDuration;
  }
  /** @param SourceFork */
  public function setSourceFork(SourceFork $sourceFork)
  {
    $this->sourceFork = $sourceFork;
  }
  /** @return SourceFork */
  public function getSourceFork()
  {
    return $this->sourceFork;
  }
  /** @param SourceOperationResponse */
  public function setSourceOperationResponse(SourceOperationResponse $sourceOperationResponse)
  {
    $this->sourceOperationResponse = $sourceOperationResponse;
  }
  /** @return SourceOperationResponse */
  public function getSourceOperationResponse()
  {
    return $this->sourceOperationResponse;
  }
  /** @param Position */
  public function setStopPosition(Position $stopPosition)
  {
    $this->stopPosition = $stopPosition;
  }
  /** @return Position */
  public function getStopPosition()
  {
    return $this->stopPosition;
  }
  public function setTotalThrottlerWaitTimeSeconds($totalThrottlerWaitTimeSeconds)
  {
    $this->totalThrottlerWaitTimeSeconds = $totalThrottlerWaitTimeSeconds;
  }
  public function getTotalThrottlerWaitTimeSeconds()
  {
    return $this->totalThrottlerWaitTimeSeconds;
  }
  /** @param string */
  public function setWorkItemId($workItemId)
  {
    $this->workItemId = $workItemId;
  }
  /** @return string */
  public function getWorkItemId()
  {
    return $this->workItemId;
  }
}

class WorkerDetails extends \Google\Collection
{
  /** @var WorkItemDetails[] */
  public $workItems;
  /** @var string */
  public $workerName;
  protected $collection_key = 'workItems';
  protected $workItemsType = WorkItemDetails::class;
  protected $workItemsDataType = 'array';
  /** @param WorkItemDetails[] */
  public function setWorkItems($workItems)
  {
    $this->workItems = $workItems;
  }
  /** @return WorkItemDetails[] */
  public function getWorkItems()
  {
    return $this->workItems;
  }
  /** @param string */
  public function setWorkerName($workerName)
  {
    $this->workerName = $workerName;
  }
  /** @return string */
  public function getWorkerName()
  {
    return $this->workerName;
  }
}

class WorkerHealthReport extends \Google\Collection
{
  /** @var string */
  public $msg;
  /** @var array[] */
  public $pods;
  /** @var string */
  public $reportInterval;
  /** @var string */
  public $vmBrokenCode;
  /** @var bool */
  public $vmIsBroken;
  /** @var bool */
  public $vmIsHealthy;
  /** @var string */
  public $vmStartupTime;
  protected $collection_key = 'pods';
  /** @param string */
  public function setMsg($msg)
  {
    $this->msg = $msg;
  }
  /** @return string */
  public function getMsg()
  {
    return $this->msg;
  }
  /** @param array[] */
  public function setPods($pods)
  {
    $this->pods = $pods;
  }
  /** @return array[] */
  public function getPods()
  {
    return $this->pods;
  }
  /** @param string */
  public function setReportInterval($reportInterval)
  {
    $this->reportInterval = $reportInterval;
  }
  /** @return string */
  public function getReportInterval()
  {
    return $this->reportInterval;
  }
  /** @param string */
  public function setVmBrokenCode($vmBrokenCode)
  {
    $this->vmBrokenCode = $vmBrokenCode;
  }
  /** @return string */
  public function getVmBrokenCode()
  {
    return $this->vmBrokenCode;
  }
  /** @param bool */
  public function setVmIsBroken($vmIsBroken)
  {
    $this->vmIsBroken = $vmIsBroken;
  }
  /** @return bool */
  public function getVmIsBroken()
  {
    return $this->vmIsBroken;
  }
  /** @param bool */
  public function setVmIsHealthy($vmIsHealthy)
  {
    $this->vmIsHealthy = $vmIsHealthy;
  }
  /** @return bool */
  public function getVmIsHealthy()
  {
    return $this->vmIsHealthy;
  }
  /** @param string */
  public function setVmStartupTime($vmStartupTime)
  {
    $this->vmStartupTime = $vmStartupTime;
  }
  /** @return string */
  public function getVmStartupTime()
  {
    return $this->vmStartupTime;
  }
}

class WorkerHealthReportResponse extends \Google\Model
{
  /** @var string */
  public $reportInterval;

  /** @param string */
  public function setReportInterval($reportInterval)
  {
    $this->reportInterval = $reportInterval;
  }
  /** @return string */
  public function getReportInterval()
  {
    return $this->reportInterval;
  }
}

class WorkerLifecycleEvent extends \Google\Model
{
  /** @var string */
  public $containerStartTime;
  /** @var string */
  public $event;
  /** @var string[] */
  public $metadata;

  /** @param string */
  public function setContainerStartTime($containerStartTime)
  {
    $this->containerStartTime = $containerStartTime;
  }
  /** @return string */
  public function getContainerStartTime()
  {
    return $this->containerStartTime;
  }
  /** @param string */
  public function setEvent($event)
  {
    $this->event = $event;
  }
  /** @return string */
  public function getEvent()
  {
    return $this->event;
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
}

class WorkerMessage extends \Google\Model
{
  /** @var string[] */
  public $labels;
  /** @var string */
  public $time;
  /** @var WorkerHealthReport */
  public $workerHealthReport;
  /** @var WorkerLifecycleEvent */
  public $workerLifecycleEvent;
  /** @var WorkerMessageCode */
  public $workerMessageCode;
  /** @var ResourceUtilizationReport */
  public $workerMetrics;
  /** @var WorkerShutdownNotice */
  public $workerShutdownNotice;
  protected $workerHealthReportType = WorkerHealthReport::class;
  protected $workerHealthReportDataType = '';
  protected $workerLifecycleEventType = WorkerLifecycleEvent::class;
  protected $workerLifecycleEventDataType = '';
  protected $workerMessageCodeType = WorkerMessageCode::class;
  protected $workerMessageCodeDataType = '';
  protected $workerMetricsType = ResourceUtilizationReport::class;
  protected $workerMetricsDataType = '';
  protected $workerShutdownNoticeType = WorkerShutdownNotice::class;
  protected $workerShutdownNoticeDataType = '';
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
  public function setTime($time)
  {
    $this->time = $time;
  }
  /** @return string */
  public function getTime()
  {
    return $this->time;
  }
  /** @param WorkerHealthReport */
  public function setWorkerHealthReport(WorkerHealthReport $workerHealthReport)
  {
    $this->workerHealthReport = $workerHealthReport;
  }
  /** @return WorkerHealthReport */
  public function getWorkerHealthReport()
  {
    return $this->workerHealthReport;
  }
  /** @param WorkerLifecycleEvent */
  public function setWorkerLifecycleEvent(WorkerLifecycleEvent $workerLifecycleEvent)
  {
    $this->workerLifecycleEvent = $workerLifecycleEvent;
  }
  /** @return WorkerLifecycleEvent */
  public function getWorkerLifecycleEvent()
  {
    return $this->workerLifecycleEvent;
  }
  /** @param WorkerMessageCode */
  public function setWorkerMessageCode(WorkerMessageCode $workerMessageCode)
  {
    $this->workerMessageCode = $workerMessageCode;
  }
  /** @return WorkerMessageCode */
  public function getWorkerMessageCode()
  {
    return $this->workerMessageCode;
  }
  /** @param ResourceUtilizationReport */
  public function setWorkerMetrics(ResourceUtilizationReport $workerMetrics)
  {
    $this->workerMetrics = $workerMetrics;
  }
  /** @return ResourceUtilizationReport */
  public function getWorkerMetrics()
  {
    return $this->workerMetrics;
  }
  /** @param WorkerShutdownNotice */
  public function setWorkerShutdownNotice(WorkerShutdownNotice $workerShutdownNotice)
  {
    $this->workerShutdownNotice = $workerShutdownNotice;
  }
  /** @return WorkerShutdownNotice */
  public function getWorkerShutdownNotice()
  {
    return $this->workerShutdownNotice;
  }
}

class WorkerMessageCode extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var array[] */
  public $parameters;

  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
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

class WorkerMessageResponse extends \Google\Model
{
  /** @var WorkerHealthReportResponse */
  public $workerHealthReportResponse;
  /** @var ResourceUtilizationReportResponse */
  public $workerMetricsResponse;
  /** @var WorkerShutdownNoticeResponse */
  public $workerShutdownNoticeResponse;
  protected $workerHealthReportResponseType = WorkerHealthReportResponse::class;
  protected $workerHealthReportResponseDataType = '';
  protected $workerMetricsResponseType = ResourceUtilizationReportResponse::class;
  protected $workerMetricsResponseDataType = '';
  protected $workerShutdownNoticeResponseType = WorkerShutdownNoticeResponse::class;
  protected $workerShutdownNoticeResponseDataType = '';
  /** @param WorkerHealthReportResponse */
  public function setWorkerHealthReportResponse(WorkerHealthReportResponse $workerHealthReportResponse)
  {
    $this->workerHealthReportResponse = $workerHealthReportResponse;
  }
  /** @return WorkerHealthReportResponse */
  public function getWorkerHealthReportResponse()
  {
    return $this->workerHealthReportResponse;
  }
  /** @param ResourceUtilizationReportResponse */
  public function setWorkerMetricsResponse(ResourceUtilizationReportResponse $workerMetricsResponse)
  {
    $this->workerMetricsResponse = $workerMetricsResponse;
  }
  /** @return ResourceUtilizationReportResponse */
  public function getWorkerMetricsResponse()
  {
    return $this->workerMetricsResponse;
  }
  /** @param WorkerShutdownNoticeResponse */
  public function setWorkerShutdownNoticeResponse(WorkerShutdownNoticeResponse $workerShutdownNoticeResponse)
  {
    $this->workerShutdownNoticeResponse = $workerShutdownNoticeResponse;
  }
  /** @return WorkerShutdownNoticeResponse */
  public function getWorkerShutdownNoticeResponse()
  {
    return $this->workerShutdownNoticeResponse;
  }
}

class WorkerPool extends \Google\Collection
{
  /** @var AutoscalingSettings */
  public $autoscalingSettings;
  /** @var Disk[] */
  public $dataDisks;
  /** @var string */
  public $defaultPackageSet;
  /** @var int */
  public $diskSizeGb;
  /** @var string */
  public $diskSourceImage;
  /** @var string */
  public $diskType;
  /** @var string */
  public $ipConfiguration;
  /** @var string */
  public $kind;
  /** @var string */
  public $machineType;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $network;
  /** @var int */
  public $numThreadsPerWorker;
  /** @var int */
  public $numWorkers;
  /** @var string */
  public $onHostMaintenance;
  /** @var Package[] */
  public $packages;
  /** @var array[] */
  public $poolArgs;
  /** @var SdkHarnessContainerImage[] */
  public $sdkHarnessContainerImages;
  /** @var string */
  public $subnetwork;
  /** @var TaskRunnerSettings */
  public $taskrunnerSettings;
  /** @var string */
  public $teardownPolicy;
  /** @var string */
  public $workerHarnessContainerImage;
  /** @var string */
  public $zone;
  protected $collection_key = 'sdkHarnessContainerImages';
  protected $autoscalingSettingsType = AutoscalingSettings::class;
  protected $autoscalingSettingsDataType = '';
  protected $dataDisksType = Disk::class;
  protected $dataDisksDataType = 'array';
  protected $packagesType = Package::class;
  protected $packagesDataType = 'array';
  protected $sdkHarnessContainerImagesType = SdkHarnessContainerImage::class;
  protected $sdkHarnessContainerImagesDataType = 'array';
  protected $taskrunnerSettingsType = TaskRunnerSettings::class;
  protected $taskrunnerSettingsDataType = '';
  /** @param AutoscalingSettings */
  public function setAutoscalingSettings(AutoscalingSettings $autoscalingSettings)
  {
    $this->autoscalingSettings = $autoscalingSettings;
  }
  /** @return AutoscalingSettings */
  public function getAutoscalingSettings()
  {
    return $this->autoscalingSettings;
  }
  /** @param Disk[] */
  public function setDataDisks($dataDisks)
  {
    $this->dataDisks = $dataDisks;
  }
  /** @return Disk[] */
  public function getDataDisks()
  {
    return $this->dataDisks;
  }
  /** @param string */
  public function setDefaultPackageSet($defaultPackageSet)
  {
    $this->defaultPackageSet = $defaultPackageSet;
  }
  /** @return string */
  public function getDefaultPackageSet()
  {
    return $this->defaultPackageSet;
  }
  /** @param int */
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  /** @return int */
  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }
  /** @param string */
  public function setDiskSourceImage($diskSourceImage)
  {
    $this->diskSourceImage = $diskSourceImage;
  }
  /** @return string */
  public function getDiskSourceImage()
  {
    return $this->diskSourceImage;
  }
  /** @param string */
  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  /** @return string */
  public function getDiskType()
  {
    return $this->diskType;
  }
  /** @param string */
  public function setIpConfiguration($ipConfiguration)
  {
    $this->ipConfiguration = $ipConfiguration;
  }
  /** @return string */
  public function getIpConfiguration()
  {
    return $this->ipConfiguration;
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
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /** @return string */
  public function getMachineType()
  {
    return $this->machineType;
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
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param int */
  public function setNumThreadsPerWorker($numThreadsPerWorker)
  {
    $this->numThreadsPerWorker = $numThreadsPerWorker;
  }
  /** @return int */
  public function getNumThreadsPerWorker()
  {
    return $this->numThreadsPerWorker;
  }
  /** @param int */
  public function setNumWorkers($numWorkers)
  {
    $this->numWorkers = $numWorkers;
  }
  /** @return int */
  public function getNumWorkers()
  {
    return $this->numWorkers;
  }
  /** @param string */
  public function setOnHostMaintenance($onHostMaintenance)
  {
    $this->onHostMaintenance = $onHostMaintenance;
  }
  /** @return string */
  public function getOnHostMaintenance()
  {
    return $this->onHostMaintenance;
  }
  /** @param Package[] */
  public function setPackages($packages)
  {
    $this->packages = $packages;
  }
  /** @return Package[] */
  public function getPackages()
  {
    return $this->packages;
  }
  /** @param array[] */
  public function setPoolArgs($poolArgs)
  {
    $this->poolArgs = $poolArgs;
  }
  /** @return array[] */
  public function getPoolArgs()
  {
    return $this->poolArgs;
  }
  /** @param SdkHarnessContainerImage[] */
  public function setSdkHarnessContainerImages($sdkHarnessContainerImages)
  {
    $this->sdkHarnessContainerImages = $sdkHarnessContainerImages;
  }
  /** @return SdkHarnessContainerImage[] */
  public function getSdkHarnessContainerImages()
  {
    return $this->sdkHarnessContainerImages;
  }
  /** @param string */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /** @return string */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
  /** @param TaskRunnerSettings */
  public function setTaskrunnerSettings(TaskRunnerSettings $taskrunnerSettings)
  {
    $this->taskrunnerSettings = $taskrunnerSettings;
  }
  /** @return TaskRunnerSettings */
  public function getTaskrunnerSettings()
  {
    return $this->taskrunnerSettings;
  }
  /** @param string */
  public function setTeardownPolicy($teardownPolicy)
  {
    $this->teardownPolicy = $teardownPolicy;
  }
  /** @return string */
  public function getTeardownPolicy()
  {
    return $this->teardownPolicy;
  }
  /** @param string */
  public function setWorkerHarnessContainerImage($workerHarnessContainerImage)
  {
    $this->workerHarnessContainerImage = $workerHarnessContainerImage;
  }
  /** @return string */
  public function getWorkerHarnessContainerImage()
  {
    return $this->workerHarnessContainerImage;
  }
  /** @param string */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /** @return string */
  public function getZone()
  {
    return $this->zone;
  }
}

class WorkerSettings extends \Google\Model
{
  /** @var string */
  public $baseUrl;
  /** @var bool */
  public $reportingEnabled;
  /** @var string */
  public $servicePath;
  /** @var string */
  public $shuffleServicePath;
  /** @var string */
  public $tempStoragePrefix;
  /** @var string */
  public $workerId;

  /** @param string */
  public function setBaseUrl($baseUrl)
  {
    $this->baseUrl = $baseUrl;
  }
  /** @return string */
  public function getBaseUrl()
  {
    return $this->baseUrl;
  }
  /** @param bool */
  public function setReportingEnabled($reportingEnabled)
  {
    $this->reportingEnabled = $reportingEnabled;
  }
  /** @return bool */
  public function getReportingEnabled()
  {
    return $this->reportingEnabled;
  }
  /** @param string */
  public function setServicePath($servicePath)
  {
    $this->servicePath = $servicePath;
  }
  /** @return string */
  public function getServicePath()
  {
    return $this->servicePath;
  }
  /** @param string */
  public function setShuffleServicePath($shuffleServicePath)
  {
    $this->shuffleServicePath = $shuffleServicePath;
  }
  /** @return string */
  public function getShuffleServicePath()
  {
    return $this->shuffleServicePath;
  }
  /** @param string */
  public function setTempStoragePrefix($tempStoragePrefix)
  {
    $this->tempStoragePrefix = $tempStoragePrefix;
  }
  /** @return string */
  public function getTempStoragePrefix()
  {
    return $this->tempStoragePrefix;
  }
  /** @param string */
  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
  /** @return string */
  public function getWorkerId()
  {
    return $this->workerId;
  }
}

class WorkerShutdownNotice extends \Google\Model
{
  /** @var string */
  public $reason;

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

class WorkerShutdownNoticeResponse extends \Google\Model
{
}

class WriteInstruction extends \Google\Model
{
  /** @var InstructionInput */
  public $input;
  /** @var Sink */
  public $sink;
  protected $inputType = InstructionInput::class;
  protected $inputDataType = '';
  protected $sinkType = Sink::class;
  protected $sinkDataType = '';
  /** @param InstructionInput */
  public function setInput(InstructionInput $input)
  {
    $this->input = $input;
  }
  /** @return InstructionInput */
  public function getInput()
  {
    return $this->input;
  }
  /** @param Sink */
  public function setSink(Sink $sink)
  {
    $this->sink = $sink;
  }
  /** @return Sink */
  public function getSink()
  {
    return $this->sink;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApproximateProgress::class, 'Google_Service_Dataflow_ApproximateProgress');
class_alias(ApproximateReportedProgress::class, 'Google_Service_Dataflow_ApproximateReportedProgress');
class_alias(ApproximateSplitRequest::class, 'Google_Service_Dataflow_ApproximateSplitRequest');
class_alias(AutoscalingEvent::class, 'Google_Service_Dataflow_AutoscalingEvent');
class_alias(AutoscalingSettings::class, 'Google_Service_Dataflow_AutoscalingSettings');
class_alias(BigQueryIODetails::class, 'Google_Service_Dataflow_BigQueryIODetails');
class_alias(BigTableIODetails::class, 'Google_Service_Dataflow_BigTableIODetails');
class_alias(CPUTime::class, 'Google_Service_Dataflow_CPUTime');
class_alias(ComponentSource::class, 'Google_Service_Dataflow_ComponentSource');
class_alias(ComponentTransform::class, 'Google_Service_Dataflow_ComponentTransform');
class_alias(ComputationTopology::class, 'Google_Service_Dataflow_ComputationTopology');
class_alias(ConcatPosition::class, 'Google_Service_Dataflow_ConcatPosition');
class_alias(ContainerSpec::class, 'Google_Service_Dataflow_ContainerSpec');
class_alias(CounterMetadata::class, 'Google_Service_Dataflow_CounterMetadata');
class_alias(CounterStructuredName::class, 'Google_Service_Dataflow_CounterStructuredName');
class_alias(CounterStructuredNameAndMetadata::class, 'Google_Service_Dataflow_CounterStructuredNameAndMetadata');
class_alias(CounterUpdate::class, 'Google_Service_Dataflow_CounterUpdate');
class_alias(CreateJobFromTemplateRequest::class, 'Google_Service_Dataflow_CreateJobFromTemplateRequest');
class_alias(CustomSourceLocation::class, 'Google_Service_Dataflow_CustomSourceLocation');
class_alias(DataDiskAssignment::class, 'Google_Service_Dataflow_DataDiskAssignment');
class_alias(DatastoreIODetails::class, 'Google_Service_Dataflow_DatastoreIODetails');
class_alias(DebugOptions::class, 'Google_Service_Dataflow_DebugOptions');
class_alias(DeleteSnapshotResponse::class, 'Google_Service_Dataflow_DeleteSnapshotResponse');
class_alias(DerivedSource::class, 'Google_Service_Dataflow_DerivedSource');
class_alias(Disk::class, 'Google_Service_Dataflow_Disk');
class_alias(DisplayData::class, 'Google_Service_Dataflow_DisplayData');
class_alias(DistributionUpdate::class, 'Google_Service_Dataflow_DistributionUpdate');
class_alias(DynamicSourceSplit::class, 'Google_Service_Dataflow_DynamicSourceSplit');
class_alias(Environment::class, 'Google_Service_Dataflow_Environment');
class_alias(ExecutionStageState::class, 'Google_Service_Dataflow_ExecutionStageState');
class_alias(ExecutionStageSummary::class, 'Google_Service_Dataflow_ExecutionStageSummary');
class_alias(FailedLocation::class, 'Google_Service_Dataflow_FailedLocation');
class_alias(FileIODetails::class, 'Google_Service_Dataflow_FileIODetails');
class_alias(FlattenInstruction::class, 'Google_Service_Dataflow_FlattenInstruction');
class_alias(FlexTemplateRuntimeEnvironment::class, 'Google_Service_Dataflow_FlexTemplateRuntimeEnvironment');
class_alias(FloatingPointList::class, 'Google_Service_Dataflow_FloatingPointList');
class_alias(FloatingPointMean::class, 'Google_Service_Dataflow_FloatingPointMean');
class_alias(GetDebugConfigRequest::class, 'Google_Service_Dataflow_GetDebugConfigRequest');
class_alias(GetDebugConfigResponse::class, 'Google_Service_Dataflow_GetDebugConfigResponse');
class_alias(GetTemplateResponse::class, 'Google_Service_Dataflow_GetTemplateResponse');
class_alias(Histogram::class, 'Google_Service_Dataflow_Histogram');
class_alias(HotKeyDebuggingInfo::class, 'Google_Service_Dataflow_HotKeyDebuggingInfo');
class_alias(HotKeyDetection::class, 'Google_Service_Dataflow_HotKeyDetection');
class_alias(HotKeyInfo::class, 'Google_Service_Dataflow_HotKeyInfo');
class_alias(InstructionInput::class, 'Google_Service_Dataflow_InstructionInput');
class_alias(InstructionOutput::class, 'Google_Service_Dataflow_InstructionOutput');
class_alias(IntegerGauge::class, 'Google_Service_Dataflow_IntegerGauge');
class_alias(IntegerList::class, 'Google_Service_Dataflow_IntegerList');
class_alias(IntegerMean::class, 'Google_Service_Dataflow_IntegerMean');
class_alias(Job::class, 'Google_Service_Dataflow_Job');
class_alias(JobExecutionDetails::class, 'Google_Service_Dataflow_JobExecutionDetails');
class_alias(JobExecutionInfo::class, 'Google_Service_Dataflow_JobExecutionInfo');
class_alias(JobExecutionStageInfo::class, 'Google_Service_Dataflow_JobExecutionStageInfo');
class_alias(JobMessage::class, 'Google_Service_Dataflow_JobMessage');
class_alias(JobMetadata::class, 'Google_Service_Dataflow_JobMetadata');
class_alias(JobMetrics::class, 'Google_Service_Dataflow_JobMetrics');
class_alias(KeyRangeDataDiskAssignment::class, 'Google_Service_Dataflow_KeyRangeDataDiskAssignment');
class_alias(KeyRangeLocation::class, 'Google_Service_Dataflow_KeyRangeLocation');
class_alias(LaunchFlexTemplateParameter::class, 'Google_Service_Dataflow_LaunchFlexTemplateParameter');
class_alias(LaunchFlexTemplateRequest::class, 'Google_Service_Dataflow_LaunchFlexTemplateRequest');
class_alias(LaunchFlexTemplateResponse::class, 'Google_Service_Dataflow_LaunchFlexTemplateResponse');
class_alias(LaunchTemplateParameters::class, 'Google_Service_Dataflow_LaunchTemplateParameters');
class_alias(LaunchTemplateResponse::class, 'Google_Service_Dataflow_LaunchTemplateResponse');
class_alias(LeaseWorkItemRequest::class, 'Google_Service_Dataflow_LeaseWorkItemRequest');
class_alias(LeaseWorkItemResponse::class, 'Google_Service_Dataflow_LeaseWorkItemResponse');
class_alias(ListJobMessagesResponse::class, 'Google_Service_Dataflow_ListJobMessagesResponse');
class_alias(ListJobsResponse::class, 'Google_Service_Dataflow_ListJobsResponse');
class_alias(ListSnapshotsResponse::class, 'Google_Service_Dataflow_ListSnapshotsResponse');
class_alias(MapTask::class, 'Google_Service_Dataflow_MapTask');
class_alias(MemInfo::class, 'Google_Service_Dataflow_MemInfo');
class_alias(MetricShortId::class, 'Google_Service_Dataflow_MetricShortId');
class_alias(MetricStructuredName::class, 'Google_Service_Dataflow_MetricStructuredName');
class_alias(MetricUpdate::class, 'Google_Service_Dataflow_MetricUpdate');
class_alias(MountedDataDisk::class, 'Google_Service_Dataflow_MountedDataDisk');
class_alias(MultiOutputInfo::class, 'Google_Service_Dataflow_MultiOutputInfo');
class_alias(NameAndKind::class, 'Google_Service_Dataflow_NameAndKind');
class_alias(Package::class, 'Google_Service_Dataflow_Package');
class_alias(ParDoInstruction::class, 'Google_Service_Dataflow_ParDoInstruction');
class_alias(ParallelInstruction::class, 'Google_Service_Dataflow_ParallelInstruction');
class_alias(Parameter::class, 'Google_Service_Dataflow_Parameter');
class_alias(ParameterMetadata::class, 'Google_Service_Dataflow_ParameterMetadata');
class_alias(PartialGroupByKeyInstruction::class, 'Google_Service_Dataflow_PartialGroupByKeyInstruction');
class_alias(PipelineDescription::class, 'Google_Service_Dataflow_PipelineDescription');
class_alias(Point::class, 'Google_Service_Dataflow_Point');
class_alias(Position::class, 'Google_Service_Dataflow_Position');
class_alias(ProgressTimeseries::class, 'Google_Service_Dataflow_ProgressTimeseries');
class_alias(PubSubIODetails::class, 'Google_Service_Dataflow_PubSubIODetails');
class_alias(PubsubLocation::class, 'Google_Service_Dataflow_PubsubLocation');
class_alias(PubsubSnapshotMetadata::class, 'Google_Service_Dataflow_PubsubSnapshotMetadata');
class_alias(QueryInfo::class, 'Google_Service_Dataflow_QueryInfo');
class_alias(ReadInstruction::class, 'Google_Service_Dataflow_ReadInstruction');
class_alias(ReportWorkItemStatusRequest::class, 'Google_Service_Dataflow_ReportWorkItemStatusRequest');
class_alias(ReportWorkItemStatusResponse::class, 'Google_Service_Dataflow_ReportWorkItemStatusResponse');
class_alias(ReportedParallelism::class, 'Google_Service_Dataflow_ReportedParallelism');
class_alias(ResourceUtilizationReport::class, 'Google_Service_Dataflow_ResourceUtilizationReport');
class_alias(ResourceUtilizationReportResponse::class, 'Google_Service_Dataflow_ResourceUtilizationReportResponse');
class_alias(RuntimeEnvironment::class, 'Google_Service_Dataflow_RuntimeEnvironment');
class_alias(RuntimeMetadata::class, 'Google_Service_Dataflow_RuntimeMetadata');
class_alias(SDKInfo::class, 'Google_Service_Dataflow_SDKInfo');
class_alias(SdkHarnessContainerImage::class, 'Google_Service_Dataflow_SdkHarnessContainerImage');
class_alias(SdkVersion::class, 'Google_Service_Dataflow_SdkVersion');
class_alias(SendDebugCaptureRequest::class, 'Google_Service_Dataflow_SendDebugCaptureRequest');
class_alias(SendDebugCaptureResponse::class, 'Google_Service_Dataflow_SendDebugCaptureResponse');
class_alias(SendWorkerMessagesRequest::class, 'Google_Service_Dataflow_SendWorkerMessagesRequest');
class_alias(SendWorkerMessagesResponse::class, 'Google_Service_Dataflow_SendWorkerMessagesResponse');
class_alias(SeqMapTask::class, 'Google_Service_Dataflow_SeqMapTask');
class_alias(SeqMapTaskOutputInfo::class, 'Google_Service_Dataflow_SeqMapTaskOutputInfo');
class_alias(ShellTask::class, 'Google_Service_Dataflow_ShellTask');
class_alias(SideInputInfo::class, 'Google_Service_Dataflow_SideInputInfo');
class_alias(Sink::class, 'Google_Service_Dataflow_Sink');
class_alias(Snapshot::class, 'Google_Service_Dataflow_Snapshot');
class_alias(SnapshotJobRequest::class, 'Google_Service_Dataflow_SnapshotJobRequest');
class_alias(Source::class, 'Google_Service_Dataflow_Source');
class_alias(SourceFork::class, 'Google_Service_Dataflow_SourceFork');
class_alias(SourceGetMetadataRequest::class, 'Google_Service_Dataflow_SourceGetMetadataRequest');
class_alias(SourceGetMetadataResponse::class, 'Google_Service_Dataflow_SourceGetMetadataResponse');
class_alias(SourceMetadata::class, 'Google_Service_Dataflow_SourceMetadata');
class_alias(SourceOperationRequest::class, 'Google_Service_Dataflow_SourceOperationRequest');
class_alias(SourceOperationResponse::class, 'Google_Service_Dataflow_SourceOperationResponse');
class_alias(SourceSplitOptions::class, 'Google_Service_Dataflow_SourceSplitOptions');
class_alias(SourceSplitRequest::class, 'Google_Service_Dataflow_SourceSplitRequest');
class_alias(SourceSplitResponse::class, 'Google_Service_Dataflow_SourceSplitResponse');
class_alias(SourceSplitShard::class, 'Google_Service_Dataflow_SourceSplitShard');
class_alias(SpannerIODetails::class, 'Google_Service_Dataflow_SpannerIODetails');
class_alias(SplitInt64::class, 'Google_Service_Dataflow_SplitInt64');
class_alias(StageExecutionDetails::class, 'Google_Service_Dataflow_StageExecutionDetails');
class_alias(StageSource::class, 'Google_Service_Dataflow_StageSource');
class_alias(StageSummary::class, 'Google_Service_Dataflow_StageSummary');
class_alias(StateFamilyConfig::class, 'Google_Service_Dataflow_StateFamilyConfig');
class_alias(Status::class, 'Google_Service_Dataflow_Status');
class_alias(Step::class, 'Google_Service_Dataflow_Step');
class_alias(StragglerDebuggingInfo::class, 'Google_Service_Dataflow_StragglerDebuggingInfo');
class_alias(StragglerInfo::class, 'Google_Service_Dataflow_StragglerInfo');
class_alias(StragglerSummary::class, 'Google_Service_Dataflow_StragglerSummary');
class_alias(StreamLocation::class, 'Google_Service_Dataflow_StreamLocation');
class_alias(StreamingApplianceSnapshotConfig::class, 'Google_Service_Dataflow_StreamingApplianceSnapshotConfig');
class_alias(StreamingComputationConfig::class, 'Google_Service_Dataflow_StreamingComputationConfig');
class_alias(StreamingComputationRanges::class, 'Google_Service_Dataflow_StreamingComputationRanges');
class_alias(StreamingComputationTask::class, 'Google_Service_Dataflow_StreamingComputationTask');
class_alias(StreamingConfigTask::class, 'Google_Service_Dataflow_StreamingConfigTask');
class_alias(StreamingSetupTask::class, 'Google_Service_Dataflow_StreamingSetupTask');
class_alias(StreamingSideInputLocation::class, 'Google_Service_Dataflow_StreamingSideInputLocation');
class_alias(StreamingStageLocation::class, 'Google_Service_Dataflow_StreamingStageLocation');
class_alias(StringList::class, 'Google_Service_Dataflow_StringList');
class_alias(StructuredMessage::class, 'Google_Service_Dataflow_StructuredMessage');
class_alias(TaskRunnerSettings::class, 'Google_Service_Dataflow_TaskRunnerSettings');
class_alias(TemplateMetadata::class, 'Google_Service_Dataflow_TemplateMetadata');
class_alias(TopologyConfig::class, 'Google_Service_Dataflow_TopologyConfig');
class_alias(TransformSummary::class, 'Google_Service_Dataflow_TransformSummary');
class_alias(ValidateResponse::class, 'Google_Service_Dataflow_ValidateResponse');
class_alias(WorkItem::class, 'Google_Service_Dataflow_WorkItem');
class_alias(WorkItemDetails::class, 'Google_Service_Dataflow_WorkItemDetails');
class_alias(WorkItemServiceState::class, 'Google_Service_Dataflow_WorkItemServiceState');
class_alias(WorkItemStatus::class, 'Google_Service_Dataflow_WorkItemStatus');
class_alias(WorkerDetails::class, 'Google_Service_Dataflow_WorkerDetails');
class_alias(WorkerHealthReport::class, 'Google_Service_Dataflow_WorkerHealthReport');
class_alias(WorkerHealthReportResponse::class, 'Google_Service_Dataflow_WorkerHealthReportResponse');
class_alias(WorkerLifecycleEvent::class, 'Google_Service_Dataflow_WorkerLifecycleEvent');
class_alias(WorkerMessage::class, 'Google_Service_Dataflow_WorkerMessage');
class_alias(WorkerMessageCode::class, 'Google_Service_Dataflow_WorkerMessageCode');
class_alias(WorkerMessageResponse::class, 'Google_Service_Dataflow_WorkerMessageResponse');
class_alias(WorkerPool::class, 'Google_Service_Dataflow_WorkerPool');
class_alias(WorkerSettings::class, 'Google_Service_Dataflow_WorkerSettings');
class_alias(WorkerShutdownNotice::class, 'Google_Service_Dataflow_WorkerShutdownNotice');
class_alias(WorkerShutdownNoticeResponse::class, 'Google_Service_Dataflow_WorkerShutdownNoticeResponse');
class_alias(WriteInstruction::class, 'Google_Service_Dataflow_WriteInstruction');
