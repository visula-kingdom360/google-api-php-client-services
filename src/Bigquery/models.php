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

namespace Google\Service\Bigquery;

class AggregateClassificationMetrics extends \Google\Model
{
  public $accuracy;
  public $f1Score;
  public $logLoss;
  public $precision;
  public $recall;
  public $rocAuc;
  public $threshold;

  public function setAccuracy($accuracy)
  {
    $this->accuracy = $accuracy;
  }
  public function getAccuracy()
  {
    return $this->accuracy;
  }
  public function setF1Score($f1Score)
  {
    $this->f1Score = $f1Score;
  }
  public function getF1Score()
  {
    return $this->f1Score;
  }
  public function setLogLoss($logLoss)
  {
    $this->logLoss = $logLoss;
  }
  public function getLogLoss()
  {
    return $this->logLoss;
  }
  public function setPrecision($precision)
  {
    $this->precision = $precision;
  }
  public function getPrecision()
  {
    return $this->precision;
  }
  public function setRecall($recall)
  {
    $this->recall = $recall;
  }
  public function getRecall()
  {
    return $this->recall;
  }
  public function setRocAuc($rocAuc)
  {
    $this->rocAuc = $rocAuc;
  }
  public function getRocAuc()
  {
    return $this->rocAuc;
  }
  public function setThreshold($threshold)
  {
    $this->threshold = $threshold;
  }
  public function getThreshold()
  {
    return $this->threshold;
  }
}

class Argument extends \Google\Model
{
  /** @var string */
  public $argumentKind;
  /** @var StandardSqlDataType */
  public $dataType;
  /** @var string */
  public $mode;
  /** @var string */
  public $name;
  protected $dataTypeType = StandardSqlDataType::class;
  protected $dataTypeDataType = '';
  /** @param string */
  public function setArgumentKind($argumentKind)
  {
    $this->argumentKind = $argumentKind;
  }
  /** @return string */
  public function getArgumentKind()
  {
    return $this->argumentKind;
  }
  /** @param StandardSqlDataType */
  public function setDataType(StandardSqlDataType $dataType)
  {
    $this->dataType = $dataType;
  }
  /** @return StandardSqlDataType */
  public function getDataType()
  {
    return $this->dataType;
  }
  /** @param string */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
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

class ArimaCoefficients extends \Google\Collection
{
  public $autoRegressiveCoefficients;
  public $interceptCoefficient;
  public $movingAverageCoefficients;
  protected $collection_key = 'movingAverageCoefficients';
  public function setAutoRegressiveCoefficients($autoRegressiveCoefficients)
  {
    $this->autoRegressiveCoefficients = $autoRegressiveCoefficients;
  }
  public function getAutoRegressiveCoefficients()
  {
    return $this->autoRegressiveCoefficients;
  }
  public function setInterceptCoefficient($interceptCoefficient)
  {
    $this->interceptCoefficient = $interceptCoefficient;
  }
  public function getInterceptCoefficient()
  {
    return $this->interceptCoefficient;
  }
  public function setMovingAverageCoefficients($movingAverageCoefficients)
  {
    $this->movingAverageCoefficients = $movingAverageCoefficients;
  }
  public function getMovingAverageCoefficients()
  {
    return $this->movingAverageCoefficients;
  }
}

class ArimaFittingMetrics extends \Google\Model
{
  public $aic;
  public $logLikelihood;
  public $variance;

  public function setAic($aic)
  {
    $this->aic = $aic;
  }
  public function getAic()
  {
    return $this->aic;
  }
  public function setLogLikelihood($logLikelihood)
  {
    $this->logLikelihood = $logLikelihood;
  }
  public function getLogLikelihood()
  {
    return $this->logLikelihood;
  }
  public function setVariance($variance)
  {
    $this->variance = $variance;
  }
  public function getVariance()
  {
    return $this->variance;
  }
}

class ArimaForecastingMetrics extends \Google\Collection
{
  /** @var ArimaFittingMetrics[] */
  public $arimaFittingMetrics;
  /** @var ArimaSingleModelForecastingMetrics[] */
  public $arimaSingleModelForecastingMetrics;
  /** @var bool[] */
  public $hasDrift;
  /** @var ArimaOrder[] */
  public $nonSeasonalOrder;
  /** @var string[] */
  public $seasonalPeriods;
  /** @var string[] */
  public $timeSeriesId;
  protected $collection_key = 'timeSeriesId';
  protected $arimaFittingMetricsType = ArimaFittingMetrics::class;
  protected $arimaFittingMetricsDataType = 'array';
  protected $arimaSingleModelForecastingMetricsType = ArimaSingleModelForecastingMetrics::class;
  protected $arimaSingleModelForecastingMetricsDataType = 'array';
  protected $nonSeasonalOrderType = ArimaOrder::class;
  protected $nonSeasonalOrderDataType = 'array';
  /** @param ArimaFittingMetrics[] */
  public function setArimaFittingMetrics($arimaFittingMetrics)
  {
    $this->arimaFittingMetrics = $arimaFittingMetrics;
  }
  /** @return ArimaFittingMetrics[] */
  public function getArimaFittingMetrics()
  {
    return $this->arimaFittingMetrics;
  }
  /** @param ArimaSingleModelForecastingMetrics[] */
  public function setArimaSingleModelForecastingMetrics($arimaSingleModelForecastingMetrics)
  {
    $this->arimaSingleModelForecastingMetrics = $arimaSingleModelForecastingMetrics;
  }
  /** @return ArimaSingleModelForecastingMetrics[] */
  public function getArimaSingleModelForecastingMetrics()
  {
    return $this->arimaSingleModelForecastingMetrics;
  }
  /** @param bool[] */
  public function setHasDrift($hasDrift)
  {
    $this->hasDrift = $hasDrift;
  }
  /** @return bool[] */
  public function getHasDrift()
  {
    return $this->hasDrift;
  }
  /** @param ArimaOrder[] */
  public function setNonSeasonalOrder($nonSeasonalOrder)
  {
    $this->nonSeasonalOrder = $nonSeasonalOrder;
  }
  /** @return ArimaOrder[] */
  public function getNonSeasonalOrder()
  {
    return $this->nonSeasonalOrder;
  }
  /** @param string[] */
  public function setSeasonalPeriods($seasonalPeriods)
  {
    $this->seasonalPeriods = $seasonalPeriods;
  }
  /** @return string[] */
  public function getSeasonalPeriods()
  {
    return $this->seasonalPeriods;
  }
  /** @param string[] */
  public function setTimeSeriesId($timeSeriesId)
  {
    $this->timeSeriesId = $timeSeriesId;
  }
  /** @return string[] */
  public function getTimeSeriesId()
  {
    return $this->timeSeriesId;
  }
}

class ArimaModelInfo extends \Google\Collection
{
  /** @var ArimaCoefficients */
  public $arimaCoefficients;
  /** @var ArimaFittingMetrics */
  public $arimaFittingMetrics;
  /** @var bool */
  public $hasDrift;
  /** @var bool */
  public $hasHolidayEffect;
  /** @var bool */
  public $hasSpikesAndDips;
  /** @var bool */
  public $hasStepChanges;
  /** @var ArimaOrder */
  public $nonSeasonalOrder;
  /** @var string[] */
  public $seasonalPeriods;
  /** @var string */
  public $timeSeriesId;
  /** @var string[] */
  public $timeSeriesIds;
  protected $collection_key = 'timeSeriesIds';
  protected $arimaCoefficientsType = ArimaCoefficients::class;
  protected $arimaCoefficientsDataType = '';
  protected $arimaFittingMetricsType = ArimaFittingMetrics::class;
  protected $arimaFittingMetricsDataType = '';
  protected $nonSeasonalOrderType = ArimaOrder::class;
  protected $nonSeasonalOrderDataType = '';
  /** @param ArimaCoefficients */
  public function setArimaCoefficients(ArimaCoefficients $arimaCoefficients)
  {
    $this->arimaCoefficients = $arimaCoefficients;
  }
  /** @return ArimaCoefficients */
  public function getArimaCoefficients()
  {
    return $this->arimaCoefficients;
  }
  /** @param ArimaFittingMetrics */
  public function setArimaFittingMetrics(ArimaFittingMetrics $arimaFittingMetrics)
  {
    $this->arimaFittingMetrics = $arimaFittingMetrics;
  }
  /** @return ArimaFittingMetrics */
  public function getArimaFittingMetrics()
  {
    return $this->arimaFittingMetrics;
  }
  /** @param bool */
  public function setHasDrift($hasDrift)
  {
    $this->hasDrift = $hasDrift;
  }
  /** @return bool */
  public function getHasDrift()
  {
    return $this->hasDrift;
  }
  /** @param bool */
  public function setHasHolidayEffect($hasHolidayEffect)
  {
    $this->hasHolidayEffect = $hasHolidayEffect;
  }
  /** @return bool */
  public function getHasHolidayEffect()
  {
    return $this->hasHolidayEffect;
  }
  /** @param bool */
  public function setHasSpikesAndDips($hasSpikesAndDips)
  {
    $this->hasSpikesAndDips = $hasSpikesAndDips;
  }
  /** @return bool */
  public function getHasSpikesAndDips()
  {
    return $this->hasSpikesAndDips;
  }
  /** @param bool */
  public function setHasStepChanges($hasStepChanges)
  {
    $this->hasStepChanges = $hasStepChanges;
  }
  /** @return bool */
  public function getHasStepChanges()
  {
    return $this->hasStepChanges;
  }
  /** @param ArimaOrder */
  public function setNonSeasonalOrder(ArimaOrder $nonSeasonalOrder)
  {
    $this->nonSeasonalOrder = $nonSeasonalOrder;
  }
  /** @return ArimaOrder */
  public function getNonSeasonalOrder()
  {
    return $this->nonSeasonalOrder;
  }
  /** @param string[] */
  public function setSeasonalPeriods($seasonalPeriods)
  {
    $this->seasonalPeriods = $seasonalPeriods;
  }
  /** @return string[] */
  public function getSeasonalPeriods()
  {
    return $this->seasonalPeriods;
  }
  /** @param string */
  public function setTimeSeriesId($timeSeriesId)
  {
    $this->timeSeriesId = $timeSeriesId;
  }
  /** @return string */
  public function getTimeSeriesId()
  {
    return $this->timeSeriesId;
  }
  /** @param string[] */
  public function setTimeSeriesIds($timeSeriesIds)
  {
    $this->timeSeriesIds = $timeSeriesIds;
  }
  /** @return string[] */
  public function getTimeSeriesIds()
  {
    return $this->timeSeriesIds;
  }
}

class ArimaOrder extends \Google\Model
{
  /** @var string */
  public $d;
  /** @var string */
  public $p;
  /** @var string */
  public $q;

  /** @param string */
  public function setD($d)
  {
    $this->d = $d;
  }
  /** @return string */
  public function getD()
  {
    return $this->d;
  }
  /** @param string */
  public function setP($p)
  {
    $this->p = $p;
  }
  /** @return string */
  public function getP()
  {
    return $this->p;
  }
  /** @param string */
  public function setQ($q)
  {
    $this->q = $q;
  }
  /** @return string */
  public function getQ()
  {
    return $this->q;
  }
}

class ArimaResult extends \Google\Collection
{
  /** @var ArimaModelInfo[] */
  public $arimaModelInfo;
  /** @var string[] */
  public $seasonalPeriods;
  protected $collection_key = 'seasonalPeriods';
  protected $arimaModelInfoType = ArimaModelInfo::class;
  protected $arimaModelInfoDataType = 'array';
  /** @param ArimaModelInfo[] */
  public function setArimaModelInfo($arimaModelInfo)
  {
    $this->arimaModelInfo = $arimaModelInfo;
  }
  /** @return ArimaModelInfo[] */
  public function getArimaModelInfo()
  {
    return $this->arimaModelInfo;
  }
  /** @param string[] */
  public function setSeasonalPeriods($seasonalPeriods)
  {
    $this->seasonalPeriods = $seasonalPeriods;
  }
  /** @return string[] */
  public function getSeasonalPeriods()
  {
    return $this->seasonalPeriods;
  }
}

class ArimaSingleModelForecastingMetrics extends \Google\Collection
{
  /** @var ArimaFittingMetrics */
  public $arimaFittingMetrics;
  /** @var bool */
  public $hasDrift;
  /** @var bool */
  public $hasHolidayEffect;
  /** @var bool */
  public $hasSpikesAndDips;
  /** @var bool */
  public $hasStepChanges;
  /** @var ArimaOrder */
  public $nonSeasonalOrder;
  /** @var string[] */
  public $seasonalPeriods;
  /** @var string */
  public $timeSeriesId;
  /** @var string[] */
  public $timeSeriesIds;
  protected $collection_key = 'timeSeriesIds';
  protected $arimaFittingMetricsType = ArimaFittingMetrics::class;
  protected $arimaFittingMetricsDataType = '';
  protected $nonSeasonalOrderType = ArimaOrder::class;
  protected $nonSeasonalOrderDataType = '';
  /** @param ArimaFittingMetrics */
  public function setArimaFittingMetrics(ArimaFittingMetrics $arimaFittingMetrics)
  {
    $this->arimaFittingMetrics = $arimaFittingMetrics;
  }
  /** @return ArimaFittingMetrics */
  public function getArimaFittingMetrics()
  {
    return $this->arimaFittingMetrics;
  }
  /** @param bool */
  public function setHasDrift($hasDrift)
  {
    $this->hasDrift = $hasDrift;
  }
  /** @return bool */
  public function getHasDrift()
  {
    return $this->hasDrift;
  }
  /** @param bool */
  public function setHasHolidayEffect($hasHolidayEffect)
  {
    $this->hasHolidayEffect = $hasHolidayEffect;
  }
  /** @return bool */
  public function getHasHolidayEffect()
  {
    return $this->hasHolidayEffect;
  }
  /** @param bool */
  public function setHasSpikesAndDips($hasSpikesAndDips)
  {
    $this->hasSpikesAndDips = $hasSpikesAndDips;
  }
  /** @return bool */
  public function getHasSpikesAndDips()
  {
    return $this->hasSpikesAndDips;
  }
  /** @param bool */
  public function setHasStepChanges($hasStepChanges)
  {
    $this->hasStepChanges = $hasStepChanges;
  }
  /** @return bool */
  public function getHasStepChanges()
  {
    return $this->hasStepChanges;
  }
  /** @param ArimaOrder */
  public function setNonSeasonalOrder(ArimaOrder $nonSeasonalOrder)
  {
    $this->nonSeasonalOrder = $nonSeasonalOrder;
  }
  /** @return ArimaOrder */
  public function getNonSeasonalOrder()
  {
    return $this->nonSeasonalOrder;
  }
  /** @param string[] */
  public function setSeasonalPeriods($seasonalPeriods)
  {
    $this->seasonalPeriods = $seasonalPeriods;
  }
  /** @return string[] */
  public function getSeasonalPeriods()
  {
    return $this->seasonalPeriods;
  }
  /** @param string */
  public function setTimeSeriesId($timeSeriesId)
  {
    $this->timeSeriesId = $timeSeriesId;
  }
  /** @return string */
  public function getTimeSeriesId()
  {
    return $this->timeSeriesId;
  }
  /** @param string[] */
  public function setTimeSeriesIds($timeSeriesIds)
  {
    $this->timeSeriesIds = $timeSeriesIds;
  }
  /** @return string[] */
  public function getTimeSeriesIds()
  {
    return $this->timeSeriesIds;
  }
}

class AuditConfig extends \Google\Collection
{
  /** @var AuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = AuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param AuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return AuditLogConfig[] */
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

class AuditLogConfig extends \Google\Collection
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

class AvroOptions extends \Google\Model
{
  /** @var bool */
  public $useAvroLogicalTypes;

  /** @param bool */
  public function setUseAvroLogicalTypes($useAvroLogicalTypes)
  {
    $this->useAvroLogicalTypes = $useAvroLogicalTypes;
  }
  /** @return bool */
  public function getUseAvroLogicalTypes()
  {
    return $this->useAvroLogicalTypes;
  }
}

class BiEngineReason extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $message;

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

class BiEngineStatistics extends \Google\Collection
{
  /** @var string */
  public $biEngineMode;
  /** @var BiEngineReason[] */
  public $biEngineReasons;
  protected $collection_key = 'biEngineReasons';
  protected $biEngineReasonsType = BiEngineReason::class;
  protected $biEngineReasonsDataType = 'array';
  /** @param string */
  public function setBiEngineMode($biEngineMode)
  {
    $this->biEngineMode = $biEngineMode;
  }
  /** @return string */
  public function getBiEngineMode()
  {
    return $this->biEngineMode;
  }
  /** @param BiEngineReason[] */
  public function setBiEngineReasons($biEngineReasons)
  {
    $this->biEngineReasons = $biEngineReasons;
  }
  /** @return BiEngineReason[] */
  public function getBiEngineReasons()
  {
    return $this->biEngineReasons;
  }
}

class BigQueryModelTraining extends \Google\Model
{
  /** @var int */
  public $currentIteration;
  /** @var string */
  public $expectedTotalIterations;

  /** @param int */
  public function setCurrentIteration($currentIteration)
  {
    $this->currentIteration = $currentIteration;
  }
  /** @return int */
  public function getCurrentIteration()
  {
    return $this->currentIteration;
  }
  /** @param string */
  public function setExpectedTotalIterations($expectedTotalIterations)
  {
    $this->expectedTotalIterations = $expectedTotalIterations;
  }
  /** @return string */
  public function getExpectedTotalIterations()
  {
    return $this->expectedTotalIterations;
  }
}

class BigtableColumn extends \Google\Model
{
  /** @var string */
  public $encoding;
  /** @var string */
  public $fieldName;
  /** @var bool */
  public $onlyReadLatest;
  /** @var string */
  public $qualifierEncoded;
  /** @var string */
  public $qualifierString;
  /** @var string */
  public $type;

  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
  }
  /** @param string */
  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /** @return string */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  /** @param bool */
  public function setOnlyReadLatest($onlyReadLatest)
  {
    $this->onlyReadLatest = $onlyReadLatest;
  }
  /** @return bool */
  public function getOnlyReadLatest()
  {
    return $this->onlyReadLatest;
  }
  /** @param string */
  public function setQualifierEncoded($qualifierEncoded)
  {
    $this->qualifierEncoded = $qualifierEncoded;
  }
  /** @return string */
  public function getQualifierEncoded()
  {
    return $this->qualifierEncoded;
  }
  /** @param string */
  public function setQualifierString($qualifierString)
  {
    $this->qualifierString = $qualifierString;
  }
  /** @return string */
  public function getQualifierString()
  {
    return $this->qualifierString;
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

class BigtableColumnFamily extends \Google\Collection
{
  /** @var BigtableColumn[] */
  public $columns;
  /** @var string */
  public $encoding;
  /** @var string */
  public $familyId;
  /** @var bool */
  public $onlyReadLatest;
  /** @var string */
  public $type;
  protected $collection_key = 'columns';
  protected $columnsType = BigtableColumn::class;
  protected $columnsDataType = 'array';
  /** @param BigtableColumn[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return BigtableColumn[] */
  public function getColumns()
  {
    return $this->columns;
  }
  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
  }
  /** @param string */
  public function setFamilyId($familyId)
  {
    $this->familyId = $familyId;
  }
  /** @return string */
  public function getFamilyId()
  {
    return $this->familyId;
  }
  /** @param bool */
  public function setOnlyReadLatest($onlyReadLatest)
  {
    $this->onlyReadLatest = $onlyReadLatest;
  }
  /** @return bool */
  public function getOnlyReadLatest()
  {
    return $this->onlyReadLatest;
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

class BigtableOptions extends \Google\Collection
{
  /** @var BigtableColumnFamily[] */
  public $columnFamilies;
  /** @var bool */
  public $ignoreUnspecifiedColumnFamilies;
  /** @var bool */
  public $readRowkeyAsString;
  protected $collection_key = 'columnFamilies';
  protected $columnFamiliesType = BigtableColumnFamily::class;
  protected $columnFamiliesDataType = 'array';
  /** @param BigtableColumnFamily[] */
  public function setColumnFamilies($columnFamilies)
  {
    $this->columnFamilies = $columnFamilies;
  }
  /** @return BigtableColumnFamily[] */
  public function getColumnFamilies()
  {
    return $this->columnFamilies;
  }
  /** @param bool */
  public function setIgnoreUnspecifiedColumnFamilies($ignoreUnspecifiedColumnFamilies)
  {
    $this->ignoreUnspecifiedColumnFamilies = $ignoreUnspecifiedColumnFamilies;
  }
  /** @return bool */
  public function getIgnoreUnspecifiedColumnFamilies()
  {
    return $this->ignoreUnspecifiedColumnFamilies;
  }
  /** @param bool */
  public function setReadRowkeyAsString($readRowkeyAsString)
  {
    $this->readRowkeyAsString = $readRowkeyAsString;
  }
  /** @return bool */
  public function getReadRowkeyAsString()
  {
    return $this->readRowkeyAsString;
  }
}

class BinaryClassificationMetrics extends \Google\Collection
{
  /** @var AggregateClassificationMetrics */
  public $aggregateClassificationMetrics;
  /** @var BinaryConfusionMatrix[] */
  public $binaryConfusionMatrixList;
  /** @var string */
  public $negativeLabel;
  /** @var string */
  public $positiveLabel;
  protected $collection_key = 'binaryConfusionMatrixList';
  protected $aggregateClassificationMetricsType = AggregateClassificationMetrics::class;
  protected $aggregateClassificationMetricsDataType = '';
  protected $binaryConfusionMatrixListType = BinaryConfusionMatrix::class;
  protected $binaryConfusionMatrixListDataType = 'array';
  /** @param AggregateClassificationMetrics */
  public function setAggregateClassificationMetrics(AggregateClassificationMetrics $aggregateClassificationMetrics)
  {
    $this->aggregateClassificationMetrics = $aggregateClassificationMetrics;
  }
  /** @return AggregateClassificationMetrics */
  public function getAggregateClassificationMetrics()
  {
    return $this->aggregateClassificationMetrics;
  }
  /** @param BinaryConfusionMatrix[] */
  public function setBinaryConfusionMatrixList($binaryConfusionMatrixList)
  {
    $this->binaryConfusionMatrixList = $binaryConfusionMatrixList;
  }
  /** @return BinaryConfusionMatrix[] */
  public function getBinaryConfusionMatrixList()
  {
    return $this->binaryConfusionMatrixList;
  }
  /** @param string */
  public function setNegativeLabel($negativeLabel)
  {
    $this->negativeLabel = $negativeLabel;
  }
  /** @return string */
  public function getNegativeLabel()
  {
    return $this->negativeLabel;
  }
  /** @param string */
  public function setPositiveLabel($positiveLabel)
  {
    $this->positiveLabel = $positiveLabel;
  }
  /** @return string */
  public function getPositiveLabel()
  {
    return $this->positiveLabel;
  }
}

class BinaryConfusionMatrix extends \Google\Model
{
  public $accuracy;
  public $f1Score;
  /** @var string */
  public $falseNegatives;
  /** @var string */
  public $falsePositives;
  public $positiveClassThreshold;
  public $precision;
  public $recall;
  /** @var string */
  public $trueNegatives;
  /** @var string */
  public $truePositives;

  public function setAccuracy($accuracy)
  {
    $this->accuracy = $accuracy;
  }
  public function getAccuracy()
  {
    return $this->accuracy;
  }
  public function setF1Score($f1Score)
  {
    $this->f1Score = $f1Score;
  }
  public function getF1Score()
  {
    return $this->f1Score;
  }
  /** @param string */
  public function setFalseNegatives($falseNegatives)
  {
    $this->falseNegatives = $falseNegatives;
  }
  /** @return string */
  public function getFalseNegatives()
  {
    return $this->falseNegatives;
  }
  /** @param string */
  public function setFalsePositives($falsePositives)
  {
    $this->falsePositives = $falsePositives;
  }
  /** @return string */
  public function getFalsePositives()
  {
    return $this->falsePositives;
  }
  public function setPositiveClassThreshold($positiveClassThreshold)
  {
    $this->positiveClassThreshold = $positiveClassThreshold;
  }
  public function getPositiveClassThreshold()
  {
    return $this->positiveClassThreshold;
  }
  public function setPrecision($precision)
  {
    $this->precision = $precision;
  }
  public function getPrecision()
  {
    return $this->precision;
  }
  public function setRecall($recall)
  {
    $this->recall = $recall;
  }
  public function getRecall()
  {
    return $this->recall;
  }
  /** @param string */
  public function setTrueNegatives($trueNegatives)
  {
    $this->trueNegatives = $trueNegatives;
  }
  /** @return string */
  public function getTrueNegatives()
  {
    return $this->trueNegatives;
  }
  /** @param string */
  public function setTruePositives($truePositives)
  {
    $this->truePositives = $truePositives;
  }
  /** @return string */
  public function getTruePositives()
  {
    return $this->truePositives;
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

class BqmlIterationResult extends \Google\Model
{
  /** @var string */
  public $durationMs;
  public $evalLoss;
  /** @var int */
  public $index;
  public $learnRate;
  public $trainingLoss;

  /** @param string */
  public function setDurationMs($durationMs)
  {
    $this->durationMs = $durationMs;
  }
  /** @return string */
  public function getDurationMs()
  {
    return $this->durationMs;
  }
  public function setEvalLoss($evalLoss)
  {
    $this->evalLoss = $evalLoss;
  }
  public function getEvalLoss()
  {
    return $this->evalLoss;
  }
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
  public function setLearnRate($learnRate)
  {
    $this->learnRate = $learnRate;
  }
  public function getLearnRate()
  {
    return $this->learnRate;
  }
  public function setTrainingLoss($trainingLoss)
  {
    $this->trainingLoss = $trainingLoss;
  }
  public function getTrainingLoss()
  {
    return $this->trainingLoss;
  }
}

class BqmlTrainingRun extends \Google\Collection
{
  /** @var BqmlIterationResult[] */
  public $iterationResults;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var BqmlTrainingRunTrainingOptions */
  public $trainingOptions;
  protected $collection_key = 'iterationResults';
  protected $iterationResultsType = BqmlIterationResult::class;
  protected $iterationResultsDataType = 'array';
  protected $trainingOptionsType = BqmlTrainingRunTrainingOptions::class;
  protected $trainingOptionsDataType = '';
  /** @param BqmlIterationResult[] */
  public function setIterationResults($iterationResults)
  {
    $this->iterationResults = $iterationResults;
  }
  /** @return BqmlIterationResult[] */
  public function getIterationResults()
  {
    return $this->iterationResults;
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
  /** @param BqmlTrainingRunTrainingOptions */
  public function setTrainingOptions(BqmlTrainingRunTrainingOptions $trainingOptions)
  {
    $this->trainingOptions = $trainingOptions;
  }
  /** @return BqmlTrainingRunTrainingOptions */
  public function getTrainingOptions()
  {
    return $this->trainingOptions;
  }
}

class BqmlTrainingRunTrainingOptions extends \Google\Model
{
  /** @var bool */
  public $earlyStop;
  public $l1Reg;
  public $l2Reg;
  public $learnRate;
  /** @var string */
  public $learnRateStrategy;
  public $lineSearchInitLearnRate;
  /** @var string */
  public $maxIteration;
  public $minRelProgress;
  /** @var bool */
  public $warmStart;

  /** @param bool */
  public function setEarlyStop($earlyStop)
  {
    $this->earlyStop = $earlyStop;
  }
  /** @return bool */
  public function getEarlyStop()
  {
    return $this->earlyStop;
  }
  public function setL1Reg($l1Reg)
  {
    $this->l1Reg = $l1Reg;
  }
  public function getL1Reg()
  {
    return $this->l1Reg;
  }
  public function setL2Reg($l2Reg)
  {
    $this->l2Reg = $l2Reg;
  }
  public function getL2Reg()
  {
    return $this->l2Reg;
  }
  public function setLearnRate($learnRate)
  {
    $this->learnRate = $learnRate;
  }
  public function getLearnRate()
  {
    return $this->learnRate;
  }
  /** @param string */
  public function setLearnRateStrategy($learnRateStrategy)
  {
    $this->learnRateStrategy = $learnRateStrategy;
  }
  /** @return string */
  public function getLearnRateStrategy()
  {
    return $this->learnRateStrategy;
  }
  public function setLineSearchInitLearnRate($lineSearchInitLearnRate)
  {
    $this->lineSearchInitLearnRate = $lineSearchInitLearnRate;
  }
  public function getLineSearchInitLearnRate()
  {
    return $this->lineSearchInitLearnRate;
  }
  /** @param string */
  public function setMaxIteration($maxIteration)
  {
    $this->maxIteration = $maxIteration;
  }
  /** @return string */
  public function getMaxIteration()
  {
    return $this->maxIteration;
  }
  public function setMinRelProgress($minRelProgress)
  {
    $this->minRelProgress = $minRelProgress;
  }
  public function getMinRelProgress()
  {
    return $this->minRelProgress;
  }
  /** @param bool */
  public function setWarmStart($warmStart)
  {
    $this->warmStart = $warmStart;
  }
  /** @return bool */
  public function getWarmStart()
  {
    return $this->warmStart;
  }
}

class CategoricalValue extends \Google\Collection
{
  /** @var CategoryCount[] */
  public $categoryCounts;
  protected $collection_key = 'categoryCounts';
  protected $categoryCountsType = CategoryCount::class;
  protected $categoryCountsDataType = 'array';
  /** @param CategoryCount[] */
  public function setCategoryCounts($categoryCounts)
  {
    $this->categoryCounts = $categoryCounts;
  }
  /** @return CategoryCount[] */
  public function getCategoryCounts()
  {
    return $this->categoryCounts;
  }
}

class CategoryCount extends \Google\Model
{
  /** @var string */
  public $category;
  /** @var string */
  public $count;

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
  public function setCount($count)
  {
    $this->count = $count;
  }
  /** @return string */
  public function getCount()
  {
    return $this->count;
  }
}

class CloneDefinition extends \Google\Model
{
  /** @var TableReference */
  public $baseTableReference;
  /** @var string */
  public $cloneTime;
  protected $baseTableReferenceType = TableReference::class;
  protected $baseTableReferenceDataType = '';
  /** @param TableReference */
  public function setBaseTableReference(TableReference $baseTableReference)
  {
    $this->baseTableReference = $baseTableReference;
  }
  /** @return TableReference */
  public function getBaseTableReference()
  {
    return $this->baseTableReference;
  }
  /** @param string */
  public function setCloneTime($cloneTime)
  {
    $this->cloneTime = $cloneTime;
  }
  /** @return string */
  public function getCloneTime()
  {
    return $this->cloneTime;
  }
}

class Cluster extends \Google\Collection
{
  /** @var string */
  public $centroidId;
  /** @var string */
  public $count;
  /** @var FeatureValue[] */
  public $featureValues;
  protected $collection_key = 'featureValues';
  protected $featureValuesType = FeatureValue::class;
  protected $featureValuesDataType = 'array';
  /** @param string */
  public function setCentroidId($centroidId)
  {
    $this->centroidId = $centroidId;
  }
  /** @return string */
  public function getCentroidId()
  {
    return $this->centroidId;
  }
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
  /** @param FeatureValue[] */
  public function setFeatureValues($featureValues)
  {
    $this->featureValues = $featureValues;
  }
  /** @return FeatureValue[] */
  public function getFeatureValues()
  {
    return $this->featureValues;
  }
}

class ClusterInfo extends \Google\Model
{
  /** @var string */
  public $centroidId;
  public $clusterRadius;
  /** @var string */
  public $clusterSize;

  /** @param string */
  public function setCentroidId($centroidId)
  {
    $this->centroidId = $centroidId;
  }
  /** @return string */
  public function getCentroidId()
  {
    return $this->centroidId;
  }
  public function setClusterRadius($clusterRadius)
  {
    $this->clusterRadius = $clusterRadius;
  }
  public function getClusterRadius()
  {
    return $this->clusterRadius;
  }
  /** @param string */
  public function setClusterSize($clusterSize)
  {
    $this->clusterSize = $clusterSize;
  }
  /** @return string */
  public function getClusterSize()
  {
    return $this->clusterSize;
  }
}

class Clustering extends \Google\Collection
{
  /** @var string[] */
  public $fields;
  protected $collection_key = 'fields';
  /** @param string[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string[] */
  public function getFields()
  {
    return $this->fields;
  }
}

class ClusteringMetrics extends \Google\Collection
{
  /** @var Cluster[] */
  public $clusters;
  public $daviesBouldinIndex;
  public $meanSquaredDistance;
  protected $collection_key = 'clusters';
  protected $clustersType = Cluster::class;
  protected $clustersDataType = 'array';
  /** @param Cluster[] */
  public function setClusters($clusters)
  {
    $this->clusters = $clusters;
  }
  /** @return Cluster[] */
  public function getClusters()
  {
    return $this->clusters;
  }
  public function setDaviesBouldinIndex($daviesBouldinIndex)
  {
    $this->daviesBouldinIndex = $daviesBouldinIndex;
  }
  public function getDaviesBouldinIndex()
  {
    return $this->daviesBouldinIndex;
  }
  public function setMeanSquaredDistance($meanSquaredDistance)
  {
    $this->meanSquaredDistance = $meanSquaredDistance;
  }
  public function getMeanSquaredDistance()
  {
    return $this->meanSquaredDistance;
  }
}

class ConfusionMatrix extends \Google\Collection
{
  public $confidenceThreshold;
  /** @var Row[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';
  public function setConfidenceThreshold($confidenceThreshold)
  {
    $this->confidenceThreshold = $confidenceThreshold;
  }
  public function getConfidenceThreshold()
  {
    return $this->confidenceThreshold;
  }
  /** @param Row[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return Row[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class ConnectionProperty extends \Google\Model
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

class CsvOptions extends \Google\Model
{
  /** @var bool */
  public $allowJaggedRows;
  /** @var bool */
  public $allowQuotedNewlines;
  /** @var string */
  public $encoding;
  /** @var string */
  public $fieldDelimiter;
  /** @var string */
  public $nullMarker;
  /** @var bool */
  public $preserveAsciiControlCharacters;
  /** @var string */
  public $quote;
  /** @var string */
  public $skipLeadingRows;
  protected $internal_gapi_mappings = [
        "nullMarker" => "null_marker",
  ];
  /** @param bool */
  public function setAllowJaggedRows($allowJaggedRows)
  {
    $this->allowJaggedRows = $allowJaggedRows;
  }
  /** @return bool */
  public function getAllowJaggedRows()
  {
    return $this->allowJaggedRows;
  }
  /** @param bool */
  public function setAllowQuotedNewlines($allowQuotedNewlines)
  {
    $this->allowQuotedNewlines = $allowQuotedNewlines;
  }
  /** @return bool */
  public function getAllowQuotedNewlines()
  {
    return $this->allowQuotedNewlines;
  }
  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
  }
  /** @param string */
  public function setFieldDelimiter($fieldDelimiter)
  {
    $this->fieldDelimiter = $fieldDelimiter;
  }
  /** @return string */
  public function getFieldDelimiter()
  {
    return $this->fieldDelimiter;
  }
  /** @param string */
  public function setNullMarker($nullMarker)
  {
    $this->nullMarker = $nullMarker;
  }
  /** @return string */
  public function getNullMarker()
  {
    return $this->nullMarker;
  }
  /** @param bool */
  public function setPreserveAsciiControlCharacters($preserveAsciiControlCharacters)
  {
    $this->preserveAsciiControlCharacters = $preserveAsciiControlCharacters;
  }
  /** @return bool */
  public function getPreserveAsciiControlCharacters()
  {
    return $this->preserveAsciiControlCharacters;
  }
  /** @param string */
  public function setQuote($quote)
  {
    $this->quote = $quote;
  }
  /** @return string */
  public function getQuote()
  {
    return $this->quote;
  }
  /** @param string */
  public function setSkipLeadingRows($skipLeadingRows)
  {
    $this->skipLeadingRows = $skipLeadingRows;
  }
  /** @return string */
  public function getSkipLeadingRows()
  {
    return $this->skipLeadingRows;
  }
}

class DataMaskingStatistics extends \Google\Model
{
  /** @var bool */
  public $dataMaskingApplied;

  /** @param bool */
  public function setDataMaskingApplied($dataMaskingApplied)
  {
    $this->dataMaskingApplied = $dataMaskingApplied;
  }
  /** @return bool */
  public function getDataMaskingApplied()
  {
    return $this->dataMaskingApplied;
  }
}

class DataSplitResult extends \Google\Model
{
  /** @var TableReference */
  public $evaluationTable;
  /** @var TableReference */
  public $testTable;
  /** @var TableReference */
  public $trainingTable;
  protected $evaluationTableType = TableReference::class;
  protected $evaluationTableDataType = '';
  protected $testTableType = TableReference::class;
  protected $testTableDataType = '';
  protected $trainingTableType = TableReference::class;
  protected $trainingTableDataType = '';
  /** @param TableReference */
  public function setEvaluationTable(TableReference $evaluationTable)
  {
    $this->evaluationTable = $evaluationTable;
  }
  /** @return TableReference */
  public function getEvaluationTable()
  {
    return $this->evaluationTable;
  }
  /** @param TableReference */
  public function setTestTable(TableReference $testTable)
  {
    $this->testTable = $testTable;
  }
  /** @return TableReference */
  public function getTestTable()
  {
    return $this->testTable;
  }
  /** @param TableReference */
  public function setTrainingTable(TableReference $trainingTable)
  {
    $this->trainingTable = $trainingTable;
  }
  /** @return TableReference */
  public function getTrainingTable()
  {
    return $this->trainingTable;
  }
}

class Dataset extends \Google\Collection
{
  /** @var DatasetAccess[] */
  public $access;
  /** @var string */
  public $creationTime;
  /** @var DatasetReference */
  public $datasetReference;
  /** @var string */
  public $defaultCollation;
  /** @var EncryptionConfiguration */
  public $defaultEncryptionConfiguration;
  /** @var string */
  public $defaultPartitionExpirationMs;
  /** @var string */
  public $defaultTableExpirationMs;
  /** @var string */
  public $description;
  /** @var string */
  public $etag;
  /** @var string */
  public $friendlyName;
  /** @var string */
  public $id;
  /** @var bool */
  public $isCaseInsensitive;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lastModifiedTime;
  /** @var string */
  public $location;
  /** @var string */
  public $maxTimeTravelHours;
  /** @var bool */
  public $satisfiesPzs;
  /** @var string */
  public $selfLink;
  /** @var string */
  public $storageBillingModel;
  /** @var DatasetTags[] */
  public $tags;
  protected $collection_key = 'tags';
  protected $accessType = DatasetAccess::class;
  protected $accessDataType = 'array';
  protected $datasetReferenceType = DatasetReference::class;
  protected $datasetReferenceDataType = '';
  protected $defaultEncryptionConfigurationType = EncryptionConfiguration::class;
  protected $defaultEncryptionConfigurationDataType = '';
  protected $tagsType = DatasetTags::class;
  protected $tagsDataType = 'array';
  /** @param DatasetAccess[] */
  public function setAccess($access)
  {
    $this->access = $access;
  }
  /** @return DatasetAccess[] */
  public function getAccess()
  {
    return $this->access;
  }
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
  /** @param DatasetReference */
  public function setDatasetReference(DatasetReference $datasetReference)
  {
    $this->datasetReference = $datasetReference;
  }
  /** @return DatasetReference */
  public function getDatasetReference()
  {
    return $this->datasetReference;
  }
  /** @param string */
  public function setDefaultCollation($defaultCollation)
  {
    $this->defaultCollation = $defaultCollation;
  }
  /** @return string */
  public function getDefaultCollation()
  {
    return $this->defaultCollation;
  }
  /** @param EncryptionConfiguration */
  public function setDefaultEncryptionConfiguration(EncryptionConfiguration $defaultEncryptionConfiguration)
  {
    $this->defaultEncryptionConfiguration = $defaultEncryptionConfiguration;
  }
  /** @return EncryptionConfiguration */
  public function getDefaultEncryptionConfiguration()
  {
    return $this->defaultEncryptionConfiguration;
  }
  /** @param string */
  public function setDefaultPartitionExpirationMs($defaultPartitionExpirationMs)
  {
    $this->defaultPartitionExpirationMs = $defaultPartitionExpirationMs;
  }
  /** @return string */
  public function getDefaultPartitionExpirationMs()
  {
    return $this->defaultPartitionExpirationMs;
  }
  /** @param string */
  public function setDefaultTableExpirationMs($defaultTableExpirationMs)
  {
    $this->defaultTableExpirationMs = $defaultTableExpirationMs;
  }
  /** @return string */
  public function getDefaultTableExpirationMs()
  {
    return $this->defaultTableExpirationMs;
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
  /** @param string */
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /** @return string */
  public function getFriendlyName()
  {
    return $this->friendlyName;
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
  public function setIsCaseInsensitive($isCaseInsensitive)
  {
    $this->isCaseInsensitive = $isCaseInsensitive;
  }
  /** @return bool */
  public function getIsCaseInsensitive()
  {
    return $this->isCaseInsensitive;
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
  /** @param string */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
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
  public function setMaxTimeTravelHours($maxTimeTravelHours)
  {
    $this->maxTimeTravelHours = $maxTimeTravelHours;
  }
  /** @return string */
  public function getMaxTimeTravelHours()
  {
    return $this->maxTimeTravelHours;
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
  public function setStorageBillingModel($storageBillingModel)
  {
    $this->storageBillingModel = $storageBillingModel;
  }
  /** @return string */
  public function getStorageBillingModel()
  {
    return $this->storageBillingModel;
  }
  /** @param DatasetTags[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return DatasetTags[] */
  public function getTags()
  {
    return $this->tags;
  }
}

class DatasetAccess extends \Google\Model
{
  /** @var DatasetAccessEntry */
  public $dataset;
  /** @var string */
  public $domain;
  /** @var string */
  public $groupByEmail;
  /** @var string */
  public $iamMember;
  /** @var string */
  public $role;
  /** @var RoutineReference */
  public $routine;
  /** @var string */
  public $specialGroup;
  /** @var string */
  public $userByEmail;
  /** @var TableReference */
  public $view;
  protected $datasetType = DatasetAccessEntry::class;
  protected $datasetDataType = '';
  protected $routineType = RoutineReference::class;
  protected $routineDataType = '';
  protected $viewType = TableReference::class;
  protected $viewDataType = '';
  /** @param DatasetAccessEntry */
  public function setDataset(DatasetAccessEntry $dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return DatasetAccessEntry */
  public function getDataset()
  {
    return $this->dataset;
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
  public function setGroupByEmail($groupByEmail)
  {
    $this->groupByEmail = $groupByEmail;
  }
  /** @return string */
  public function getGroupByEmail()
  {
    return $this->groupByEmail;
  }
  /** @param string */
  public function setIamMember($iamMember)
  {
    $this->iamMember = $iamMember;
  }
  /** @return string */
  public function getIamMember()
  {
    return $this->iamMember;
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
  /** @param RoutineReference */
  public function setRoutine(RoutineReference $routine)
  {
    $this->routine = $routine;
  }
  /** @return RoutineReference */
  public function getRoutine()
  {
    return $this->routine;
  }
  /** @param string */
  public function setSpecialGroup($specialGroup)
  {
    $this->specialGroup = $specialGroup;
  }
  /** @return string */
  public function getSpecialGroup()
  {
    return $this->specialGroup;
  }
  /** @param string */
  public function setUserByEmail($userByEmail)
  {
    $this->userByEmail = $userByEmail;
  }
  /** @return string */
  public function getUserByEmail()
  {
    return $this->userByEmail;
  }
  /** @param TableReference */
  public function setView(TableReference $view)
  {
    $this->view = $view;
  }
  /** @return TableReference */
  public function getView()
  {
    return $this->view;
  }
}

class DatasetAccessEntry extends \Google\Collection
{
  /** @var DatasetReference */
  public $dataset;
  /** @var string[] */
  public $targetTypes;
  protected $collection_key = 'targetTypes';
  protected $datasetType = DatasetReference::class;
  protected $datasetDataType = '';
  /** @param DatasetReference */
  public function setDataset(DatasetReference $dataset)
  {
    $this->dataset = $dataset;
  }
  /** @return DatasetReference */
  public function getDataset()
  {
    return $this->dataset;
  }
  /** @param string[] */
  public function setTargetTypes($targetTypes)
  {
    $this->targetTypes = $targetTypes;
  }
  /** @return string[] */
  public function getTargetTypes()
  {
    return $this->targetTypes;
  }
}

class DatasetList extends \Google\Collection
{
  /** @var DatasetListDatasets[] */
  public $datasets;
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'datasets';
  protected $datasetsType = DatasetListDatasets::class;
  protected $datasetsDataType = 'array';
  /** @param DatasetListDatasets[] */
  public function setDatasets($datasets)
  {
    $this->datasets = $datasets;
  }
  /** @return DatasetListDatasets[] */
  public function getDatasets()
  {
    return $this->datasets;
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

class DatasetListDatasets extends \Google\Model
{
  /** @var DatasetReference */
  public $datasetReference;
  /** @var string */
  public $friendlyName;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $location;
  protected $datasetReferenceType = DatasetReference::class;
  protected $datasetReferenceDataType = '';
  /** @param DatasetReference */
  public function setDatasetReference(DatasetReference $datasetReference)
  {
    $this->datasetReference = $datasetReference;
  }
  /** @return DatasetReference */
  public function getDatasetReference()
  {
    return $this->datasetReference;
  }
  /** @param string */
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /** @return string */
  public function getFriendlyName()
  {
    return $this->friendlyName;
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

class DatasetReference extends \Google\Model
{
  /** @var string */
  public $datasetId;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /** @return string */
  public function getDatasetId()
  {
    return $this->datasetId;
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

class DatasetTags extends \Google\Model
{
  /** @var string */
  public $tagKey;
  /** @var string */
  public $tagValue;

  /** @param string */
  public function setTagKey($tagKey)
  {
    $this->tagKey = $tagKey;
  }
  /** @return string */
  public function getTagKey()
  {
    return $this->tagKey;
  }
  /** @param string */
  public function setTagValue($tagValue)
  {
    $this->tagValue = $tagValue;
  }
  /** @return string */
  public function getTagValue()
  {
    return $this->tagValue;
  }
}

class DestinationTableProperties extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $expirationTime;
  /** @var string */
  public $friendlyName;
  /** @var string[] */
  public $labels;

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
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
  /** @param string */
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /** @return string */
  public function getFriendlyName()
  {
    return $this->friendlyName;
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

class DimensionalityReductionMetrics extends \Google\Model
{
  public $totalExplainedVarianceRatio;

  public function setTotalExplainedVarianceRatio($totalExplainedVarianceRatio)
  {
    $this->totalExplainedVarianceRatio = $totalExplainedVarianceRatio;
  }
  public function getTotalExplainedVarianceRatio()
  {
    return $this->totalExplainedVarianceRatio;
  }
}

class DmlStatistics extends \Google\Model
{
  /** @var string */
  public $deletedRowCount;
  /** @var string */
  public $insertedRowCount;
  /** @var string */
  public $updatedRowCount;

  /** @param string */
  public function setDeletedRowCount($deletedRowCount)
  {
    $this->deletedRowCount = $deletedRowCount;
  }
  /** @return string */
  public function getDeletedRowCount()
  {
    return $this->deletedRowCount;
  }
  /** @param string */
  public function setInsertedRowCount($insertedRowCount)
  {
    $this->insertedRowCount = $insertedRowCount;
  }
  /** @return string */
  public function getInsertedRowCount()
  {
    return $this->insertedRowCount;
  }
  /** @param string */
  public function setUpdatedRowCount($updatedRowCount)
  {
    $this->updatedRowCount = $updatedRowCount;
  }
  /** @return string */
  public function getUpdatedRowCount()
  {
    return $this->updatedRowCount;
  }
}

class DoubleCandidates extends \Google\Collection
{
  public $candidates;
  protected $collection_key = 'candidates';
  public function setCandidates($candidates)
  {
    $this->candidates = $candidates;
  }
  public function getCandidates()
  {
    return $this->candidates;
  }
}

class DoubleHparamSearchSpace extends \Google\Model
{
  /** @var DoubleCandidates */
  public $candidates;
  /** @var DoubleRange */
  public $range;
  protected $candidatesType = DoubleCandidates::class;
  protected $candidatesDataType = '';
  protected $rangeType = DoubleRange::class;
  protected $rangeDataType = '';
  /** @param DoubleCandidates */
  public function setCandidates(DoubleCandidates $candidates)
  {
    $this->candidates = $candidates;
  }
  /** @return DoubleCandidates */
  public function getCandidates()
  {
    return $this->candidates;
  }
  /** @param DoubleRange */
  public function setRange(DoubleRange $range)
  {
    $this->range = $range;
  }
  /** @return DoubleRange */
  public function getRange()
  {
    return $this->range;
  }
}

class DoubleRange extends \Google\Model
{
  public $max;
  public $min;

  public function setMax($max)
  {
    $this->max = $max;
  }
  public function getMax()
  {
    return $this->max;
  }
  public function setMin($min)
  {
    $this->min = $min;
  }
  public function getMin()
  {
    return $this->min;
  }
}

class EncryptionConfiguration extends \Google\Model
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

class Entry extends \Google\Model
{
  /** @var string */
  public $itemCount;
  /** @var string */
  public $predictedLabel;

  /** @param string */
  public function setItemCount($itemCount)
  {
    $this->itemCount = $itemCount;
  }
  /** @return string */
  public function getItemCount()
  {
    return $this->itemCount;
  }
  /** @param string */
  public function setPredictedLabel($predictedLabel)
  {
    $this->predictedLabel = $predictedLabel;
  }
  /** @return string */
  public function getPredictedLabel()
  {
    return $this->predictedLabel;
  }
}

class ErrorProto extends \Google\Model
{
  /** @var string */
  public $debugInfo;
  /** @var string */
  public $location;
  /** @var string */
  public $message;
  /** @var string */
  public $reason;

  /** @param string */
  public function setDebugInfo($debugInfo)
  {
    $this->debugInfo = $debugInfo;
  }
  /** @return string */
  public function getDebugInfo()
  {
    return $this->debugInfo;
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
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /** @return string */
  public function getMessage()
  {
    return $this->message;
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

class EvaluationMetrics extends \Google\Model
{
  /** @var ArimaForecastingMetrics */
  public $arimaForecastingMetrics;
  /** @var BinaryClassificationMetrics */
  public $binaryClassificationMetrics;
  /** @var ClusteringMetrics */
  public $clusteringMetrics;
  /** @var DimensionalityReductionMetrics */
  public $dimensionalityReductionMetrics;
  /** @var MultiClassClassificationMetrics */
  public $multiClassClassificationMetrics;
  /** @var RankingMetrics */
  public $rankingMetrics;
  /** @var RegressionMetrics */
  public $regressionMetrics;
  protected $arimaForecastingMetricsType = ArimaForecastingMetrics::class;
  protected $arimaForecastingMetricsDataType = '';
  protected $binaryClassificationMetricsType = BinaryClassificationMetrics::class;
  protected $binaryClassificationMetricsDataType = '';
  protected $clusteringMetricsType = ClusteringMetrics::class;
  protected $clusteringMetricsDataType = '';
  protected $dimensionalityReductionMetricsType = DimensionalityReductionMetrics::class;
  protected $dimensionalityReductionMetricsDataType = '';
  protected $multiClassClassificationMetricsType = MultiClassClassificationMetrics::class;
  protected $multiClassClassificationMetricsDataType = '';
  protected $rankingMetricsType = RankingMetrics::class;
  protected $rankingMetricsDataType = '';
  protected $regressionMetricsType = RegressionMetrics::class;
  protected $regressionMetricsDataType = '';
  /** @param ArimaForecastingMetrics */
  public function setArimaForecastingMetrics(ArimaForecastingMetrics $arimaForecastingMetrics)
  {
    $this->arimaForecastingMetrics = $arimaForecastingMetrics;
  }
  /** @return ArimaForecastingMetrics */
  public function getArimaForecastingMetrics()
  {
    return $this->arimaForecastingMetrics;
  }
  /** @param BinaryClassificationMetrics */
  public function setBinaryClassificationMetrics(BinaryClassificationMetrics $binaryClassificationMetrics)
  {
    $this->binaryClassificationMetrics = $binaryClassificationMetrics;
  }
  /** @return BinaryClassificationMetrics */
  public function getBinaryClassificationMetrics()
  {
    return $this->binaryClassificationMetrics;
  }
  /** @param ClusteringMetrics */
  public function setClusteringMetrics(ClusteringMetrics $clusteringMetrics)
  {
    $this->clusteringMetrics = $clusteringMetrics;
  }
  /** @return ClusteringMetrics */
  public function getClusteringMetrics()
  {
    return $this->clusteringMetrics;
  }
  /** @param DimensionalityReductionMetrics */
  public function setDimensionalityReductionMetrics(DimensionalityReductionMetrics $dimensionalityReductionMetrics)
  {
    $this->dimensionalityReductionMetrics = $dimensionalityReductionMetrics;
  }
  /** @return DimensionalityReductionMetrics */
  public function getDimensionalityReductionMetrics()
  {
    return $this->dimensionalityReductionMetrics;
  }
  /** @param MultiClassClassificationMetrics */
  public function setMultiClassClassificationMetrics(MultiClassClassificationMetrics $multiClassClassificationMetrics)
  {
    $this->multiClassClassificationMetrics = $multiClassClassificationMetrics;
  }
  /** @return MultiClassClassificationMetrics */
  public function getMultiClassClassificationMetrics()
  {
    return $this->multiClassClassificationMetrics;
  }
  /** @param RankingMetrics */
  public function setRankingMetrics(RankingMetrics $rankingMetrics)
  {
    $this->rankingMetrics = $rankingMetrics;
  }
  /** @return RankingMetrics */
  public function getRankingMetrics()
  {
    return $this->rankingMetrics;
  }
  /** @param RegressionMetrics */
  public function setRegressionMetrics(RegressionMetrics $regressionMetrics)
  {
    $this->regressionMetrics = $regressionMetrics;
  }
  /** @return RegressionMetrics */
  public function getRegressionMetrics()
  {
    return $this->regressionMetrics;
  }
}

class ExplainQueryStage extends \Google\Collection
{
  /** @var string */
  public $completedParallelInputs;
  /** @var string */
  public $computeMsAvg;
  /** @var string */
  public $computeMsMax;
  public $computeRatioAvg;
  public $computeRatioMax;
  /** @var string */
  public $endMs;
  /** @var string */
  public $id;
  /** @var string[] */
  public $inputStages;
  /** @var string */
  public $name;
  /** @var string */
  public $parallelInputs;
  /** @var string */
  public $readMsAvg;
  /** @var string */
  public $readMsMax;
  public $readRatioAvg;
  public $readRatioMax;
  /** @var string */
  public $recordsRead;
  /** @var string */
  public $recordsWritten;
  /** @var string */
  public $shuffleOutputBytes;
  /** @var string */
  public $shuffleOutputBytesSpilled;
  /** @var string */
  public $slotMs;
  /** @var string */
  public $startMs;
  /** @var string */
  public $status;
  /** @var ExplainQueryStep[] */
  public $steps;
  /** @var string */
  public $waitMsAvg;
  /** @var string */
  public $waitMsMax;
  public $waitRatioAvg;
  public $waitRatioMax;
  /** @var string */
  public $writeMsAvg;
  /** @var string */
  public $writeMsMax;
  public $writeRatioAvg;
  public $writeRatioMax;
  protected $collection_key = 'steps';
  protected $stepsType = ExplainQueryStep::class;
  protected $stepsDataType = 'array';
  /** @param string */
  public function setCompletedParallelInputs($completedParallelInputs)
  {
    $this->completedParallelInputs = $completedParallelInputs;
  }
  /** @return string */
  public function getCompletedParallelInputs()
  {
    return $this->completedParallelInputs;
  }
  /** @param string */
  public function setComputeMsAvg($computeMsAvg)
  {
    $this->computeMsAvg = $computeMsAvg;
  }
  /** @return string */
  public function getComputeMsAvg()
  {
    return $this->computeMsAvg;
  }
  /** @param string */
  public function setComputeMsMax($computeMsMax)
  {
    $this->computeMsMax = $computeMsMax;
  }
  /** @return string */
  public function getComputeMsMax()
  {
    return $this->computeMsMax;
  }
  public function setComputeRatioAvg($computeRatioAvg)
  {
    $this->computeRatioAvg = $computeRatioAvg;
  }
  public function getComputeRatioAvg()
  {
    return $this->computeRatioAvg;
  }
  public function setComputeRatioMax($computeRatioMax)
  {
    $this->computeRatioMax = $computeRatioMax;
  }
  public function getComputeRatioMax()
  {
    return $this->computeRatioMax;
  }
  /** @param string */
  public function setEndMs($endMs)
  {
    $this->endMs = $endMs;
  }
  /** @return string */
  public function getEndMs()
  {
    return $this->endMs;
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
  public function setInputStages($inputStages)
  {
    $this->inputStages = $inputStages;
  }
  /** @return string[] */
  public function getInputStages()
  {
    return $this->inputStages;
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
  public function setParallelInputs($parallelInputs)
  {
    $this->parallelInputs = $parallelInputs;
  }
  /** @return string */
  public function getParallelInputs()
  {
    return $this->parallelInputs;
  }
  /** @param string */
  public function setReadMsAvg($readMsAvg)
  {
    $this->readMsAvg = $readMsAvg;
  }
  /** @return string */
  public function getReadMsAvg()
  {
    return $this->readMsAvg;
  }
  /** @param string */
  public function setReadMsMax($readMsMax)
  {
    $this->readMsMax = $readMsMax;
  }
  /** @return string */
  public function getReadMsMax()
  {
    return $this->readMsMax;
  }
  public function setReadRatioAvg($readRatioAvg)
  {
    $this->readRatioAvg = $readRatioAvg;
  }
  public function getReadRatioAvg()
  {
    return $this->readRatioAvg;
  }
  public function setReadRatioMax($readRatioMax)
  {
    $this->readRatioMax = $readRatioMax;
  }
  public function getReadRatioMax()
  {
    return $this->readRatioMax;
  }
  /** @param string */
  public function setRecordsRead($recordsRead)
  {
    $this->recordsRead = $recordsRead;
  }
  /** @return string */
  public function getRecordsRead()
  {
    return $this->recordsRead;
  }
  /** @param string */
  public function setRecordsWritten($recordsWritten)
  {
    $this->recordsWritten = $recordsWritten;
  }
  /** @return string */
  public function getRecordsWritten()
  {
    return $this->recordsWritten;
  }
  /** @param string */
  public function setShuffleOutputBytes($shuffleOutputBytes)
  {
    $this->shuffleOutputBytes = $shuffleOutputBytes;
  }
  /** @return string */
  public function getShuffleOutputBytes()
  {
    return $this->shuffleOutputBytes;
  }
  /** @param string */
  public function setShuffleOutputBytesSpilled($shuffleOutputBytesSpilled)
  {
    $this->shuffleOutputBytesSpilled = $shuffleOutputBytesSpilled;
  }
  /** @return string */
  public function getShuffleOutputBytesSpilled()
  {
    return $this->shuffleOutputBytesSpilled;
  }
  /** @param string */
  public function setSlotMs($slotMs)
  {
    $this->slotMs = $slotMs;
  }
  /** @return string */
  public function getSlotMs()
  {
    return $this->slotMs;
  }
  /** @param string */
  public function setStartMs($startMs)
  {
    $this->startMs = $startMs;
  }
  /** @return string */
  public function getStartMs()
  {
    return $this->startMs;
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
  /** @param ExplainQueryStep[] */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /** @return ExplainQueryStep[] */
  public function getSteps()
  {
    return $this->steps;
  }
  /** @param string */
  public function setWaitMsAvg($waitMsAvg)
  {
    $this->waitMsAvg = $waitMsAvg;
  }
  /** @return string */
  public function getWaitMsAvg()
  {
    return $this->waitMsAvg;
  }
  /** @param string */
  public function setWaitMsMax($waitMsMax)
  {
    $this->waitMsMax = $waitMsMax;
  }
  /** @return string */
  public function getWaitMsMax()
  {
    return $this->waitMsMax;
  }
  public function setWaitRatioAvg($waitRatioAvg)
  {
    $this->waitRatioAvg = $waitRatioAvg;
  }
  public function getWaitRatioAvg()
  {
    return $this->waitRatioAvg;
  }
  public function setWaitRatioMax($waitRatioMax)
  {
    $this->waitRatioMax = $waitRatioMax;
  }
  public function getWaitRatioMax()
  {
    return $this->waitRatioMax;
  }
  /** @param string */
  public function setWriteMsAvg($writeMsAvg)
  {
    $this->writeMsAvg = $writeMsAvg;
  }
  /** @return string */
  public function getWriteMsAvg()
  {
    return $this->writeMsAvg;
  }
  /** @param string */
  public function setWriteMsMax($writeMsMax)
  {
    $this->writeMsMax = $writeMsMax;
  }
  /** @return string */
  public function getWriteMsMax()
  {
    return $this->writeMsMax;
  }
  public function setWriteRatioAvg($writeRatioAvg)
  {
    $this->writeRatioAvg = $writeRatioAvg;
  }
  public function getWriteRatioAvg()
  {
    return $this->writeRatioAvg;
  }
  public function setWriteRatioMax($writeRatioMax)
  {
    $this->writeRatioMax = $writeRatioMax;
  }
  public function getWriteRatioMax()
  {
    return $this->writeRatioMax;
  }
}

class ExplainQueryStep extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string[] */
  public $substeps;
  protected $collection_key = 'substeps';
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
  public function setSubsteps($substeps)
  {
    $this->substeps = $substeps;
  }
  /** @return string[] */
  public function getSubsteps()
  {
    return $this->substeps;
  }
}

class Explanation extends \Google\Model
{
  public $attribution;
  /** @var string */
  public $featureName;

  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }
  public function getAttribution()
  {
    return $this->attribution;
  }
  /** @param string */
  public function setFeatureName($featureName)
  {
    $this->featureName = $featureName;
  }
  /** @return string */
  public function getFeatureName()
  {
    return $this->featureName;
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

class ExternalDataConfiguration extends \Google\Collection
{
  /** @var bool */
  public $autodetect;
  /** @var AvroOptions */
  public $avroOptions;
  /** @var BigtableOptions */
  public $bigtableOptions;
  /** @var string */
  public $compression;
  /** @var string */
  public $connectionId;
  /** @var CsvOptions */
  public $csvOptions;
  /** @var string[] */
  public $decimalTargetTypes;
  /** @var GoogleSheetsOptions */
  public $googleSheetsOptions;
  /** @var HivePartitioningOptions */
  public $hivePartitioningOptions;
  /** @var bool */
  public $ignoreUnknownValues;
  /** @var int */
  public $maxBadRecords;
  /** @var string */
  public $metadataCacheMode;
  /** @var string */
  public $objectMetadata;
  /** @var ParquetOptions */
  public $parquetOptions;
  /** @var string */
  public $referenceFileSchemaUri;
  /** @var TableSchema */
  public $schema;
  /** @var string */
  public $sourceFormat;
  /** @var string[] */
  public $sourceUris;
  protected $collection_key = 'sourceUris';
  protected $avroOptionsType = AvroOptions::class;
  protected $avroOptionsDataType = '';
  protected $bigtableOptionsType = BigtableOptions::class;
  protected $bigtableOptionsDataType = '';
  protected $csvOptionsType = CsvOptions::class;
  protected $csvOptionsDataType = '';
  protected $googleSheetsOptionsType = GoogleSheetsOptions::class;
  protected $googleSheetsOptionsDataType = '';
  protected $hivePartitioningOptionsType = HivePartitioningOptions::class;
  protected $hivePartitioningOptionsDataType = '';
  protected $parquetOptionsType = ParquetOptions::class;
  protected $parquetOptionsDataType = '';
  protected $schemaType = TableSchema::class;
  protected $schemaDataType = '';
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
  /** @param AvroOptions */
  public function setAvroOptions(AvroOptions $avroOptions)
  {
    $this->avroOptions = $avroOptions;
  }
  /** @return AvroOptions */
  public function getAvroOptions()
  {
    return $this->avroOptions;
  }
  /** @param BigtableOptions */
  public function setBigtableOptions(BigtableOptions $bigtableOptions)
  {
    $this->bigtableOptions = $bigtableOptions;
  }
  /** @return BigtableOptions */
  public function getBigtableOptions()
  {
    return $this->bigtableOptions;
  }
  /** @param string */
  public function setCompression($compression)
  {
    $this->compression = $compression;
  }
  /** @return string */
  public function getCompression()
  {
    return $this->compression;
  }
  /** @param string */
  public function setConnectionId($connectionId)
  {
    $this->connectionId = $connectionId;
  }
  /** @return string */
  public function getConnectionId()
  {
    return $this->connectionId;
  }
  /** @param CsvOptions */
  public function setCsvOptions(CsvOptions $csvOptions)
  {
    $this->csvOptions = $csvOptions;
  }
  /** @return CsvOptions */
  public function getCsvOptions()
  {
    return $this->csvOptions;
  }
  /** @param string[] */
  public function setDecimalTargetTypes($decimalTargetTypes)
  {
    $this->decimalTargetTypes = $decimalTargetTypes;
  }
  /** @return string[] */
  public function getDecimalTargetTypes()
  {
    return $this->decimalTargetTypes;
  }
  /** @param GoogleSheetsOptions */
  public function setGoogleSheetsOptions(GoogleSheetsOptions $googleSheetsOptions)
  {
    $this->googleSheetsOptions = $googleSheetsOptions;
  }
  /** @return GoogleSheetsOptions */
  public function getGoogleSheetsOptions()
  {
    return $this->googleSheetsOptions;
  }
  /** @param HivePartitioningOptions */
  public function setHivePartitioningOptions(HivePartitioningOptions $hivePartitioningOptions)
  {
    $this->hivePartitioningOptions = $hivePartitioningOptions;
  }
  /** @return HivePartitioningOptions */
  public function getHivePartitioningOptions()
  {
    return $this->hivePartitioningOptions;
  }
  /** @param bool */
  public function setIgnoreUnknownValues($ignoreUnknownValues)
  {
    $this->ignoreUnknownValues = $ignoreUnknownValues;
  }
  /** @return bool */
  public function getIgnoreUnknownValues()
  {
    return $this->ignoreUnknownValues;
  }
  /** @param int */
  public function setMaxBadRecords($maxBadRecords)
  {
    $this->maxBadRecords = $maxBadRecords;
  }
  /** @return int */
  public function getMaxBadRecords()
  {
    return $this->maxBadRecords;
  }
  /** @param string */
  public function setMetadataCacheMode($metadataCacheMode)
  {
    $this->metadataCacheMode = $metadataCacheMode;
  }
  /** @return string */
  public function getMetadataCacheMode()
  {
    return $this->metadataCacheMode;
  }
  /** @param string */
  public function setObjectMetadata($objectMetadata)
  {
    $this->objectMetadata = $objectMetadata;
  }
  /** @return string */
  public function getObjectMetadata()
  {
    return $this->objectMetadata;
  }
  /** @param ParquetOptions */
  public function setParquetOptions(ParquetOptions $parquetOptions)
  {
    $this->parquetOptions = $parquetOptions;
  }
  /** @return ParquetOptions */
  public function getParquetOptions()
  {
    return $this->parquetOptions;
  }
  /** @param string */
  public function setReferenceFileSchemaUri($referenceFileSchemaUri)
  {
    $this->referenceFileSchemaUri = $referenceFileSchemaUri;
  }
  /** @return string */
  public function getReferenceFileSchemaUri()
  {
    return $this->referenceFileSchemaUri;
  }
  /** @param TableSchema */
  public function setSchema(TableSchema $schema)
  {
    $this->schema = $schema;
  }
  /** @return TableSchema */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param string */
  public function setSourceFormat($sourceFormat)
  {
    $this->sourceFormat = $sourceFormat;
  }
  /** @return string */
  public function getSourceFormat()
  {
    return $this->sourceFormat;
  }
  /** @param string[] */
  public function setSourceUris($sourceUris)
  {
    $this->sourceUris = $sourceUris;
  }
  /** @return string[] */
  public function getSourceUris()
  {
    return $this->sourceUris;
  }
}

class FeatureValue extends \Google\Model
{
  /** @var CategoricalValue */
  public $categoricalValue;
  /** @var string */
  public $featureColumn;
  public $numericalValue;
  protected $categoricalValueType = CategoricalValue::class;
  protected $categoricalValueDataType = '';
  /** @param CategoricalValue */
  public function setCategoricalValue(CategoricalValue $categoricalValue)
  {
    $this->categoricalValue = $categoricalValue;
  }
  /** @return CategoricalValue */
  public function getCategoricalValue()
  {
    return $this->categoricalValue;
  }
  /** @param string */
  public function setFeatureColumn($featureColumn)
  {
    $this->featureColumn = $featureColumn;
  }
  /** @return string */
  public function getFeatureColumn()
  {
    return $this->featureColumn;
  }
  public function setNumericalValue($numericalValue)
  {
    $this->numericalValue = $numericalValue;
  }
  public function getNumericalValue()
  {
    return $this->numericalValue;
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

class GetQueryResultsResponse extends \Google\Collection
{
  /** @var bool */
  public $cacheHit;
  /** @var ErrorProto[] */
  public $errors;
  /** @var string */
  public $etag;
  /** @var bool */
  public $jobComplete;
  /** @var JobReference */
  public $jobReference;
  /** @var string */
  public $kind;
  /** @var string */
  public $numDmlAffectedRows;
  /** @var string */
  public $pageToken;
  /** @var TableRow[] */
  public $rows;
  /** @var TableSchema */
  public $schema;
  /** @var string */
  public $totalBytesProcessed;
  /** @var string */
  public $totalRows;
  protected $collection_key = 'rows';
  protected $errorsType = ErrorProto::class;
  protected $errorsDataType = 'array';
  protected $jobReferenceType = JobReference::class;
  protected $jobReferenceDataType = '';
  protected $rowsType = TableRow::class;
  protected $rowsDataType = 'array';
  protected $schemaType = TableSchema::class;
  protected $schemaDataType = '';
  /** @param bool */
  public function setCacheHit($cacheHit)
  {
    $this->cacheHit = $cacheHit;
  }
  /** @return bool */
  public function getCacheHit()
  {
    return $this->cacheHit;
  }
  /** @param ErrorProto[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ErrorProto[] */
  public function getErrors()
  {
    return $this->errors;
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
  public function setJobComplete($jobComplete)
  {
    $this->jobComplete = $jobComplete;
  }
  /** @return bool */
  public function getJobComplete()
  {
    return $this->jobComplete;
  }
  /** @param JobReference */
  public function setJobReference(JobReference $jobReference)
  {
    $this->jobReference = $jobReference;
  }
  /** @return JobReference */
  public function getJobReference()
  {
    return $this->jobReference;
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
  public function setNumDmlAffectedRows($numDmlAffectedRows)
  {
    $this->numDmlAffectedRows = $numDmlAffectedRows;
  }
  /** @return string */
  public function getNumDmlAffectedRows()
  {
    return $this->numDmlAffectedRows;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param TableRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return TableRow[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param TableSchema */
  public function setSchema(TableSchema $schema)
  {
    $this->schema = $schema;
  }
  /** @return TableSchema */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param string */
  public function setTotalBytesProcessed($totalBytesProcessed)
  {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }
  /** @return string */
  public function getTotalBytesProcessed()
  {
    return $this->totalBytesProcessed;
  }
  /** @param string */
  public function setTotalRows($totalRows)
  {
    $this->totalRows = $totalRows;
  }
  /** @return string */
  public function getTotalRows()
  {
    return $this->totalRows;
  }
}

class GetServiceAccountResponse extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $kind;

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

class GlobalExplanation extends \Google\Collection
{
  /** @var string */
  public $classLabel;
  /** @var Explanation[] */
  public $explanations;
  protected $collection_key = 'explanations';
  protected $explanationsType = Explanation::class;
  protected $explanationsDataType = 'array';
  /** @param string */
  public function setClassLabel($classLabel)
  {
    $this->classLabel = $classLabel;
  }
  /** @return string */
  public function getClassLabel()
  {
    return $this->classLabel;
  }
  /** @param Explanation[] */
  public function setExplanations($explanations)
  {
    $this->explanations = $explanations;
  }
  /** @return Explanation[] */
  public function getExplanations()
  {
    return $this->explanations;
  }
}

class GoogleSheetsOptions extends \Google\Model
{
  /** @var string */
  public $range;
  /** @var string */
  public $skipLeadingRows;

  /** @param string */
  public function setRange($range)
  {
    $this->range = $range;
  }
  /** @return string */
  public function getRange()
  {
    return $this->range;
  }
  /** @param string */
  public function setSkipLeadingRows($skipLeadingRows)
  {
    $this->skipLeadingRows = $skipLeadingRows;
  }
  /** @return string */
  public function getSkipLeadingRows()
  {
    return $this->skipLeadingRows;
  }
}

class HivePartitioningOptions extends \Google\Model
{
  /** @var string */
  public $mode;
  /** @var bool */
  public $requirePartitionFilter;
  /** @var string */
  public $sourceUriPrefix;

  /** @param string */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
  }
  /** @param bool */
  public function setRequirePartitionFilter($requirePartitionFilter)
  {
    $this->requirePartitionFilter = $requirePartitionFilter;
  }
  /** @return bool */
  public function getRequirePartitionFilter()
  {
    return $this->requirePartitionFilter;
  }
  /** @param string */
  public function setSourceUriPrefix($sourceUriPrefix)
  {
    $this->sourceUriPrefix = $sourceUriPrefix;
  }
  /** @return string */
  public function getSourceUriPrefix()
  {
    return $this->sourceUriPrefix;
  }
}

class HparamSearchSpaces extends \Google\Model
{
  /** @var StringHparamSearchSpace */
  public $activationFn;
  /** @var IntHparamSearchSpace */
  public $batchSize;
  /** @var StringHparamSearchSpace */
  public $boosterType;
  /** @var DoubleHparamSearchSpace */
  public $colsampleBylevel;
  /** @var DoubleHparamSearchSpace */
  public $colsampleBynode;
  /** @var DoubleHparamSearchSpace */
  public $colsampleBytree;
  /** @var StringHparamSearchSpace */
  public $dartNormalizeType;
  /** @var DoubleHparamSearchSpace */
  public $dropout;
  /** @var IntArrayHparamSearchSpace */
  public $hiddenUnits;
  /** @var DoubleHparamSearchSpace */
  public $l1Reg;
  /** @var DoubleHparamSearchSpace */
  public $l2Reg;
  /** @var DoubleHparamSearchSpace */
  public $learnRate;
  /** @var IntHparamSearchSpace */
  public $maxTreeDepth;
  /** @var DoubleHparamSearchSpace */
  public $minSplitLoss;
  /** @var IntHparamSearchSpace */
  public $minTreeChildWeight;
  /** @var IntHparamSearchSpace */
  public $numClusters;
  /** @var IntHparamSearchSpace */
  public $numFactors;
  /** @var IntHparamSearchSpace */
  public $numParallelTree;
  /** @var StringHparamSearchSpace */
  public $optimizer;
  /** @var DoubleHparamSearchSpace */
  public $subsample;
  /** @var StringHparamSearchSpace */
  public $treeMethod;
  /** @var DoubleHparamSearchSpace */
  public $walsAlpha;
  protected $activationFnType = StringHparamSearchSpace::class;
  protected $activationFnDataType = '';
  protected $batchSizeType = IntHparamSearchSpace::class;
  protected $batchSizeDataType = '';
  protected $boosterTypeType = StringHparamSearchSpace::class;
  protected $boosterTypeDataType = '';
  protected $colsampleBylevelType = DoubleHparamSearchSpace::class;
  protected $colsampleBylevelDataType = '';
  protected $colsampleBynodeType = DoubleHparamSearchSpace::class;
  protected $colsampleBynodeDataType = '';
  protected $colsampleBytreeType = DoubleHparamSearchSpace::class;
  protected $colsampleBytreeDataType = '';
  protected $dartNormalizeTypeType = StringHparamSearchSpace::class;
  protected $dartNormalizeTypeDataType = '';
  protected $dropoutType = DoubleHparamSearchSpace::class;
  protected $dropoutDataType = '';
  protected $hiddenUnitsType = IntArrayHparamSearchSpace::class;
  protected $hiddenUnitsDataType = '';
  protected $l1RegType = DoubleHparamSearchSpace::class;
  protected $l1RegDataType = '';
  protected $l2RegType = DoubleHparamSearchSpace::class;
  protected $l2RegDataType = '';
  protected $learnRateType = DoubleHparamSearchSpace::class;
  protected $learnRateDataType = '';
  protected $maxTreeDepthType = IntHparamSearchSpace::class;
  protected $maxTreeDepthDataType = '';
  protected $minSplitLossType = DoubleHparamSearchSpace::class;
  protected $minSplitLossDataType = '';
  protected $minTreeChildWeightType = IntHparamSearchSpace::class;
  protected $minTreeChildWeightDataType = '';
  protected $numClustersType = IntHparamSearchSpace::class;
  protected $numClustersDataType = '';
  protected $numFactorsType = IntHparamSearchSpace::class;
  protected $numFactorsDataType = '';
  protected $numParallelTreeType = IntHparamSearchSpace::class;
  protected $numParallelTreeDataType = '';
  protected $optimizerType = StringHparamSearchSpace::class;
  protected $optimizerDataType = '';
  protected $subsampleType = DoubleHparamSearchSpace::class;
  protected $subsampleDataType = '';
  protected $treeMethodType = StringHparamSearchSpace::class;
  protected $treeMethodDataType = '';
  protected $walsAlphaType = DoubleHparamSearchSpace::class;
  protected $walsAlphaDataType = '';
  /** @param StringHparamSearchSpace */
  public function setActivationFn(StringHparamSearchSpace $activationFn)
  {
    $this->activationFn = $activationFn;
  }
  /** @return StringHparamSearchSpace */
  public function getActivationFn()
  {
    return $this->activationFn;
  }
  /** @param IntHparamSearchSpace */
  public function setBatchSize(IntHparamSearchSpace $batchSize)
  {
    $this->batchSize = $batchSize;
  }
  /** @return IntHparamSearchSpace */
  public function getBatchSize()
  {
    return $this->batchSize;
  }
  /** @param StringHparamSearchSpace */
  public function setBoosterType(StringHparamSearchSpace $boosterType)
  {
    $this->boosterType = $boosterType;
  }
  /** @return StringHparamSearchSpace */
  public function getBoosterType()
  {
    return $this->boosterType;
  }
  /** @param DoubleHparamSearchSpace */
  public function setColsampleBylevel(DoubleHparamSearchSpace $colsampleBylevel)
  {
    $this->colsampleBylevel = $colsampleBylevel;
  }
  /** @return DoubleHparamSearchSpace */
  public function getColsampleBylevel()
  {
    return $this->colsampleBylevel;
  }
  /** @param DoubleHparamSearchSpace */
  public function setColsampleBynode(DoubleHparamSearchSpace $colsampleBynode)
  {
    $this->colsampleBynode = $colsampleBynode;
  }
  /** @return DoubleHparamSearchSpace */
  public function getColsampleBynode()
  {
    return $this->colsampleBynode;
  }
  /** @param DoubleHparamSearchSpace */
  public function setColsampleBytree(DoubleHparamSearchSpace $colsampleBytree)
  {
    $this->colsampleBytree = $colsampleBytree;
  }
  /** @return DoubleHparamSearchSpace */
  public function getColsampleBytree()
  {
    return $this->colsampleBytree;
  }
  /** @param StringHparamSearchSpace */
  public function setDartNormalizeType(StringHparamSearchSpace $dartNormalizeType)
  {
    $this->dartNormalizeType = $dartNormalizeType;
  }
  /** @return StringHparamSearchSpace */
  public function getDartNormalizeType()
  {
    return $this->dartNormalizeType;
  }
  /** @param DoubleHparamSearchSpace */
  public function setDropout(DoubleHparamSearchSpace $dropout)
  {
    $this->dropout = $dropout;
  }
  /** @return DoubleHparamSearchSpace */
  public function getDropout()
  {
    return $this->dropout;
  }
  /** @param IntArrayHparamSearchSpace */
  public function setHiddenUnits(IntArrayHparamSearchSpace $hiddenUnits)
  {
    $this->hiddenUnits = $hiddenUnits;
  }
  /** @return IntArrayHparamSearchSpace */
  public function getHiddenUnits()
  {
    return $this->hiddenUnits;
  }
  /** @param DoubleHparamSearchSpace */
  public function setL1Reg(DoubleHparamSearchSpace $l1Reg)
  {
    $this->l1Reg = $l1Reg;
  }
  /** @return DoubleHparamSearchSpace */
  public function getL1Reg()
  {
    return $this->l1Reg;
  }
  /** @param DoubleHparamSearchSpace */
  public function setL2Reg(DoubleHparamSearchSpace $l2Reg)
  {
    $this->l2Reg = $l2Reg;
  }
  /** @return DoubleHparamSearchSpace */
  public function getL2Reg()
  {
    return $this->l2Reg;
  }
  /** @param DoubleHparamSearchSpace */
  public function setLearnRate(DoubleHparamSearchSpace $learnRate)
  {
    $this->learnRate = $learnRate;
  }
  /** @return DoubleHparamSearchSpace */
  public function getLearnRate()
  {
    return $this->learnRate;
  }
  /** @param IntHparamSearchSpace */
  public function setMaxTreeDepth(IntHparamSearchSpace $maxTreeDepth)
  {
    $this->maxTreeDepth = $maxTreeDepth;
  }
  /** @return IntHparamSearchSpace */
  public function getMaxTreeDepth()
  {
    return $this->maxTreeDepth;
  }
  /** @param DoubleHparamSearchSpace */
  public function setMinSplitLoss(DoubleHparamSearchSpace $minSplitLoss)
  {
    $this->minSplitLoss = $minSplitLoss;
  }
  /** @return DoubleHparamSearchSpace */
  public function getMinSplitLoss()
  {
    return $this->minSplitLoss;
  }
  /** @param IntHparamSearchSpace */
  public function setMinTreeChildWeight(IntHparamSearchSpace $minTreeChildWeight)
  {
    $this->minTreeChildWeight = $minTreeChildWeight;
  }
  /** @return IntHparamSearchSpace */
  public function getMinTreeChildWeight()
  {
    return $this->minTreeChildWeight;
  }
  /** @param IntHparamSearchSpace */
  public function setNumClusters(IntHparamSearchSpace $numClusters)
  {
    $this->numClusters = $numClusters;
  }
  /** @return IntHparamSearchSpace */
  public function getNumClusters()
  {
    return $this->numClusters;
  }
  /** @param IntHparamSearchSpace */
  public function setNumFactors(IntHparamSearchSpace $numFactors)
  {
    $this->numFactors = $numFactors;
  }
  /** @return IntHparamSearchSpace */
  public function getNumFactors()
  {
    return $this->numFactors;
  }
  /** @param IntHparamSearchSpace */
  public function setNumParallelTree(IntHparamSearchSpace $numParallelTree)
  {
    $this->numParallelTree = $numParallelTree;
  }
  /** @return IntHparamSearchSpace */
  public function getNumParallelTree()
  {
    return $this->numParallelTree;
  }
  /** @param StringHparamSearchSpace */
  public function setOptimizer(StringHparamSearchSpace $optimizer)
  {
    $this->optimizer = $optimizer;
  }
  /** @return StringHparamSearchSpace */
  public function getOptimizer()
  {
    return $this->optimizer;
  }
  /** @param DoubleHparamSearchSpace */
  public function setSubsample(DoubleHparamSearchSpace $subsample)
  {
    $this->subsample = $subsample;
  }
  /** @return DoubleHparamSearchSpace */
  public function getSubsample()
  {
    return $this->subsample;
  }
  /** @param StringHparamSearchSpace */
  public function setTreeMethod(StringHparamSearchSpace $treeMethod)
  {
    $this->treeMethod = $treeMethod;
  }
  /** @return StringHparamSearchSpace */
  public function getTreeMethod()
  {
    return $this->treeMethod;
  }
  /** @param DoubleHparamSearchSpace */
  public function setWalsAlpha(DoubleHparamSearchSpace $walsAlpha)
  {
    $this->walsAlpha = $walsAlpha;
  }
  /** @return DoubleHparamSearchSpace */
  public function getWalsAlpha()
  {
    return $this->walsAlpha;
  }
}

class HparamTuningTrial extends \Google\Model
{
  /** @var string */
  public $endTimeMs;
  /** @var string */
  public $errorMessage;
  public $evalLoss;
  /** @var EvaluationMetrics */
  public $evaluationMetrics;
  /** @var EvaluationMetrics */
  public $hparamTuningEvaluationMetrics;
  /** @var TrainingOptions */
  public $hparams;
  /** @var string */
  public $startTimeMs;
  /** @var string */
  public $status;
  public $trainingLoss;
  /** @var string */
  public $trialId;
  protected $evaluationMetricsType = EvaluationMetrics::class;
  protected $evaluationMetricsDataType = '';
  protected $hparamTuningEvaluationMetricsType = EvaluationMetrics::class;
  protected $hparamTuningEvaluationMetricsDataType = '';
  protected $hparamsType = TrainingOptions::class;
  protected $hparamsDataType = '';
  /** @param string */
  public function setEndTimeMs($endTimeMs)
  {
    $this->endTimeMs = $endTimeMs;
  }
  /** @return string */
  public function getEndTimeMs()
  {
    return $this->endTimeMs;
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
  public function setEvalLoss($evalLoss)
  {
    $this->evalLoss = $evalLoss;
  }
  public function getEvalLoss()
  {
    return $this->evalLoss;
  }
  /** @param EvaluationMetrics */
  public function setEvaluationMetrics(EvaluationMetrics $evaluationMetrics)
  {
    $this->evaluationMetrics = $evaluationMetrics;
  }
  /** @return EvaluationMetrics */
  public function getEvaluationMetrics()
  {
    return $this->evaluationMetrics;
  }
  /** @param EvaluationMetrics */
  public function setHparamTuningEvaluationMetrics(EvaluationMetrics $hparamTuningEvaluationMetrics)
  {
    $this->hparamTuningEvaluationMetrics = $hparamTuningEvaluationMetrics;
  }
  /** @return EvaluationMetrics */
  public function getHparamTuningEvaluationMetrics()
  {
    return $this->hparamTuningEvaluationMetrics;
  }
  /** @param TrainingOptions */
  public function setHparams(TrainingOptions $hparams)
  {
    $this->hparams = $hparams;
  }
  /** @return TrainingOptions */
  public function getHparams()
  {
    return $this->hparams;
  }
  /** @param string */
  public function setStartTimeMs($startTimeMs)
  {
    $this->startTimeMs = $startTimeMs;
  }
  /** @return string */
  public function getStartTimeMs()
  {
    return $this->startTimeMs;
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
  public function setTrainingLoss($trainingLoss)
  {
    $this->trainingLoss = $trainingLoss;
  }
  public function getTrainingLoss()
  {
    return $this->trainingLoss;
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
}

class IndexUnusedReason extends \Google\Model
{
  /** @var TableReference */
  public $baseTable;
  /** @var string */
  public $code;
  /** @var string */
  public $indexName;
  /** @var string */
  public $message;
  protected $internal_gapi_mappings = [
        "baseTable" => "base_table",
        "indexName" => "index_name",
  ];
  protected $baseTableType = TableReference::class;
  protected $baseTableDataType = '';
  /** @param TableReference */
  public function setBaseTable(TableReference $baseTable)
  {
    $this->baseTable = $baseTable;
  }
  /** @return TableReference */
  public function getBaseTable()
  {
    return $this->baseTable;
  }
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
  /** @param string */
  public function setIndexName($indexName)
  {
    $this->indexName = $indexName;
  }
  /** @return string */
  public function getIndexName()
  {
    return $this->indexName;
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

class IntArray extends \Google\Collection
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

class IntArrayHparamSearchSpace extends \Google\Collection
{
  /** @var IntArray[] */
  public $candidates;
  protected $collection_key = 'candidates';
  protected $candidatesType = IntArray::class;
  protected $candidatesDataType = 'array';
  /** @param IntArray[] */
  public function setCandidates($candidates)
  {
    $this->candidates = $candidates;
  }
  /** @return IntArray[] */
  public function getCandidates()
  {
    return $this->candidates;
  }
}

class IntCandidates extends \Google\Collection
{
  /** @var string[] */
  public $candidates;
  protected $collection_key = 'candidates';
  /** @param string[] */
  public function setCandidates($candidates)
  {
    $this->candidates = $candidates;
  }
  /** @return string[] */
  public function getCandidates()
  {
    return $this->candidates;
  }
}

class IntHparamSearchSpace extends \Google\Model
{
  /** @var IntCandidates */
  public $candidates;
  /** @var IntRange */
  public $range;
  protected $candidatesType = IntCandidates::class;
  protected $candidatesDataType = '';
  protected $rangeType = IntRange::class;
  protected $rangeDataType = '';
  /** @param IntCandidates */
  public function setCandidates(IntCandidates $candidates)
  {
    $this->candidates = $candidates;
  }
  /** @return IntCandidates */
  public function getCandidates()
  {
    return $this->candidates;
  }
  /** @param IntRange */
  public function setRange(IntRange $range)
  {
    $this->range = $range;
  }
  /** @return IntRange */
  public function getRange()
  {
    return $this->range;
  }
}

class IntRange extends \Google\Model
{
  /** @var string */
  public $max;
  /** @var string */
  public $min;

  /** @param string */
  public function setMax($max)
  {
    $this->max = $max;
  }
  /** @return string */
  public function getMax()
  {
    return $this->max;
  }
  /** @param string */
  public function setMin($min)
  {
    $this->min = $min;
  }
  /** @return string */
  public function getMin()
  {
    return $this->min;
  }
}

class IterationResult extends \Google\Model
{
  /** @var string */
  public $durationMs;
  public $evalLoss;
  /** @var int */
  public $index;
  public $learnRate;
  public $trainingLoss;

  /** @param string */
  public function setDurationMs($durationMs)
  {
    $this->durationMs = $durationMs;
  }
  /** @return string */
  public function getDurationMs()
  {
    return $this->durationMs;
  }
  public function setEvalLoss($evalLoss)
  {
    $this->evalLoss = $evalLoss;
  }
  public function getEvalLoss()
  {
    return $this->evalLoss;
  }
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
  public function setLearnRate($learnRate)
  {
    $this->learnRate = $learnRate;
  }
  public function getLearnRate()
  {
    return $this->learnRate;
  }
  public function setTrainingLoss($trainingLoss)
  {
    $this->trainingLoss = $trainingLoss;
  }
  public function getTrainingLoss()
  {
    return $this->trainingLoss;
  }
}

class Job extends \Google\Model
{
  /** @var JobConfiguration */
  public $configuration;
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var JobReference */
  public $jobReference;
  /** @var string */
  public $kind;
  /** @var string */
  public $selfLink;
  /** @var JobStatistics */
  public $statistics;
  /** @var JobStatus */
  public $status;
  /** @var string */
  public $userEmail;
  protected $internal_gapi_mappings = [
        "userEmail" => "user_email",
  ];
  protected $configurationType = JobConfiguration::class;
  protected $configurationDataType = '';
  protected $jobReferenceType = JobReference::class;
  protected $jobReferenceDataType = '';
  protected $statisticsType = JobStatistics::class;
  protected $statisticsDataType = '';
  protected $statusType = JobStatus::class;
  protected $statusDataType = '';
  /** @param JobConfiguration */
  public function setConfiguration(JobConfiguration $configuration)
  {
    $this->configuration = $configuration;
  }
  /** @return JobConfiguration */
  public function getConfiguration()
  {
    return $this->configuration;
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
  /** @param JobReference */
  public function setJobReference(JobReference $jobReference)
  {
    $this->jobReference = $jobReference;
  }
  /** @return JobReference */
  public function getJobReference()
  {
    return $this->jobReference;
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
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /** @return string */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /** @param JobStatistics */
  public function setStatistics(JobStatistics $statistics)
  {
    $this->statistics = $statistics;
  }
  /** @return JobStatistics */
  public function getStatistics()
  {
    return $this->statistics;
  }
  /** @param JobStatus */
  public function setStatus(JobStatus $status)
  {
    $this->status = $status;
  }
  /** @return JobStatus */
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
}

class JobCancelResponse extends \Google\Model
{
  /** @var Job */
  public $job;
  /** @var string */
  public $kind;
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

class JobConfiguration extends \Google\Model
{
  /** @var JobConfigurationTableCopy */
  public $copy;
  /** @var bool */
  public $dryRun;
  /** @var JobConfigurationExtract */
  public $extract;
  /** @var string */
  public $jobTimeoutMs;
  /** @var string */
  public $jobType;
  /** @var string[] */
  public $labels;
  /** @var JobConfigurationLoad */
  public $load;
  /** @var JobConfigurationQuery */
  public $query;
  protected $copyType = JobConfigurationTableCopy::class;
  protected $copyDataType = '';
  protected $extractType = JobConfigurationExtract::class;
  protected $extractDataType = '';
  protected $loadType = JobConfigurationLoad::class;
  protected $loadDataType = '';
  protected $queryType = JobConfigurationQuery::class;
  protected $queryDataType = '';
  /** @param JobConfigurationTableCopy */
  public function setCopy(JobConfigurationTableCopy $copy)
  {
    $this->copy = $copy;
  }
  /** @return JobConfigurationTableCopy */
  public function getCopy()
  {
    return $this->copy;
  }
  /** @param bool */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /** @return bool */
  public function getDryRun()
  {
    return $this->dryRun;
  }
  /** @param JobConfigurationExtract */
  public function setExtract(JobConfigurationExtract $extract)
  {
    $this->extract = $extract;
  }
  /** @return JobConfigurationExtract */
  public function getExtract()
  {
    return $this->extract;
  }
  /** @param string */
  public function setJobTimeoutMs($jobTimeoutMs)
  {
    $this->jobTimeoutMs = $jobTimeoutMs;
  }
  /** @return string */
  public function getJobTimeoutMs()
  {
    return $this->jobTimeoutMs;
  }
  /** @param string */
  public function setJobType($jobType)
  {
    $this->jobType = $jobType;
  }
  /** @return string */
  public function getJobType()
  {
    return $this->jobType;
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
  /** @param JobConfigurationLoad */
  public function setLoad(JobConfigurationLoad $load)
  {
    $this->load = $load;
  }
  /** @return JobConfigurationLoad */
  public function getLoad()
  {
    return $this->load;
  }
  /** @param JobConfigurationQuery */
  public function setQuery(JobConfigurationQuery $query)
  {
    $this->query = $query;
  }
  /** @return JobConfigurationQuery */
  public function getQuery()
  {
    return $this->query;
  }
}

class JobConfigurationExtract extends \Google\Collection
{
  /** @var string */
  public $compression;
  /** @var string */
  public $destinationFormat;
  /** @var string */
  public $destinationUri;
  /** @var string[] */
  public $destinationUris;
  /** @var string */
  public $fieldDelimiter;
  /** @var bool */
  public $printHeader;
  /** @var ModelReference */
  public $sourceModel;
  /** @var TableReference */
  public $sourceTable;
  /** @var bool */
  public $useAvroLogicalTypes;
  protected $collection_key = 'destinationUris';
  protected $sourceModelType = ModelReference::class;
  protected $sourceModelDataType = '';
  protected $sourceTableType = TableReference::class;
  protected $sourceTableDataType = '';
  /** @param string */
  public function setCompression($compression)
  {
    $this->compression = $compression;
  }
  /** @return string */
  public function getCompression()
  {
    return $this->compression;
  }
  /** @param string */
  public function setDestinationFormat($destinationFormat)
  {
    $this->destinationFormat = $destinationFormat;
  }
  /** @return string */
  public function getDestinationFormat()
  {
    return $this->destinationFormat;
  }
  /** @param string */
  public function setDestinationUri($destinationUri)
  {
    $this->destinationUri = $destinationUri;
  }
  /** @return string */
  public function getDestinationUri()
  {
    return $this->destinationUri;
  }
  /** @param string[] */
  public function setDestinationUris($destinationUris)
  {
    $this->destinationUris = $destinationUris;
  }
  /** @return string[] */
  public function getDestinationUris()
  {
    return $this->destinationUris;
  }
  /** @param string */
  public function setFieldDelimiter($fieldDelimiter)
  {
    $this->fieldDelimiter = $fieldDelimiter;
  }
  /** @return string */
  public function getFieldDelimiter()
  {
    return $this->fieldDelimiter;
  }
  /** @param bool */
  public function setPrintHeader($printHeader)
  {
    $this->printHeader = $printHeader;
  }
  /** @return bool */
  public function getPrintHeader()
  {
    return $this->printHeader;
  }
  /** @param ModelReference */
  public function setSourceModel(ModelReference $sourceModel)
  {
    $this->sourceModel = $sourceModel;
  }
  /** @return ModelReference */
  public function getSourceModel()
  {
    return $this->sourceModel;
  }
  /** @param TableReference */
  public function setSourceTable(TableReference $sourceTable)
  {
    $this->sourceTable = $sourceTable;
  }
  /** @return TableReference */
  public function getSourceTable()
  {
    return $this->sourceTable;
  }
  /** @param bool */
  public function setUseAvroLogicalTypes($useAvroLogicalTypes)
  {
    $this->useAvroLogicalTypes = $useAvroLogicalTypes;
  }
  /** @return bool */
  public function getUseAvroLogicalTypes()
  {
    return $this->useAvroLogicalTypes;
  }
}

class JobConfigurationLoad extends \Google\Collection
{
  /** @var bool */
  public $allowJaggedRows;
  /** @var bool */
  public $allowQuotedNewlines;
  /** @var bool */
  public $autodetect;
  /** @var Clustering */
  public $clustering;
  /** @var ConnectionProperty[] */
  public $connectionProperties;
  /** @var string */
  public $createDisposition;
  /** @var bool */
  public $createSession;
  /** @var string[] */
  public $decimalTargetTypes;
  /** @var EncryptionConfiguration */
  public $destinationEncryptionConfiguration;
  /** @var TableReference */
  public $destinationTable;
  /** @var DestinationTableProperties */
  public $destinationTableProperties;
  /** @var string */
  public $encoding;
  /** @var string */
  public $fieldDelimiter;
  /** @var HivePartitioningOptions */
  public $hivePartitioningOptions;
  /** @var bool */
  public $ignoreUnknownValues;
  /** @var string */
  public $jsonExtension;
  /** @var int */
  public $maxBadRecords;
  /** @var string */
  public $nullMarker;
  /** @var ParquetOptions */
  public $parquetOptions;
  /** @var bool */
  public $preserveAsciiControlCharacters;
  /** @var string[] */
  public $projectionFields;
  /** @var string */
  public $quote;
  /** @var RangePartitioning */
  public $rangePartitioning;
  /** @var string */
  public $referenceFileSchemaUri;
  /** @var TableSchema */
  public $schema;
  /** @var string */
  public $schemaInline;
  /** @var string */
  public $schemaInlineFormat;
  /** @var string[] */
  public $schemaUpdateOptions;
  /** @var int */
  public $skipLeadingRows;
  /** @var string */
  public $sourceFormat;
  /** @var string[] */
  public $sourceUris;
  /** @var TimePartitioning */
  public $timePartitioning;
  /** @var bool */
  public $useAvroLogicalTypes;
  /** @var string */
  public $writeDisposition;
  protected $collection_key = 'sourceUris';
  protected $clusteringType = Clustering::class;
  protected $clusteringDataType = '';
  protected $connectionPropertiesType = ConnectionProperty::class;
  protected $connectionPropertiesDataType = 'array';
  protected $destinationEncryptionConfigurationType = EncryptionConfiguration::class;
  protected $destinationEncryptionConfigurationDataType = '';
  protected $destinationTableType = TableReference::class;
  protected $destinationTableDataType = '';
  protected $destinationTablePropertiesType = DestinationTableProperties::class;
  protected $destinationTablePropertiesDataType = '';
  protected $hivePartitioningOptionsType = HivePartitioningOptions::class;
  protected $hivePartitioningOptionsDataType = '';
  protected $parquetOptionsType = ParquetOptions::class;
  protected $parquetOptionsDataType = '';
  protected $rangePartitioningType = RangePartitioning::class;
  protected $rangePartitioningDataType = '';
  protected $schemaType = TableSchema::class;
  protected $schemaDataType = '';
  protected $timePartitioningType = TimePartitioning::class;
  protected $timePartitioningDataType = '';
  /** @param bool */
  public function setAllowJaggedRows($allowJaggedRows)
  {
    $this->allowJaggedRows = $allowJaggedRows;
  }
  /** @return bool */
  public function getAllowJaggedRows()
  {
    return $this->allowJaggedRows;
  }
  /** @param bool */
  public function setAllowQuotedNewlines($allowQuotedNewlines)
  {
    $this->allowQuotedNewlines = $allowQuotedNewlines;
  }
  /** @return bool */
  public function getAllowQuotedNewlines()
  {
    return $this->allowQuotedNewlines;
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
  /** @param Clustering */
  public function setClustering(Clustering $clustering)
  {
    $this->clustering = $clustering;
  }
  /** @return Clustering */
  public function getClustering()
  {
    return $this->clustering;
  }
  /** @param ConnectionProperty[] */
  public function setConnectionProperties($connectionProperties)
  {
    $this->connectionProperties = $connectionProperties;
  }
  /** @return ConnectionProperty[] */
  public function getConnectionProperties()
  {
    return $this->connectionProperties;
  }
  /** @param string */
  public function setCreateDisposition($createDisposition)
  {
    $this->createDisposition = $createDisposition;
  }
  /** @return string */
  public function getCreateDisposition()
  {
    return $this->createDisposition;
  }
  /** @param bool */
  public function setCreateSession($createSession)
  {
    $this->createSession = $createSession;
  }
  /** @return bool */
  public function getCreateSession()
  {
    return $this->createSession;
  }
  /** @param string[] */
  public function setDecimalTargetTypes($decimalTargetTypes)
  {
    $this->decimalTargetTypes = $decimalTargetTypes;
  }
  /** @return string[] */
  public function getDecimalTargetTypes()
  {
    return $this->decimalTargetTypes;
  }
  /** @param EncryptionConfiguration */
  public function setDestinationEncryptionConfiguration(EncryptionConfiguration $destinationEncryptionConfiguration)
  {
    $this->destinationEncryptionConfiguration = $destinationEncryptionConfiguration;
  }
  /** @return EncryptionConfiguration */
  public function getDestinationEncryptionConfiguration()
  {
    return $this->destinationEncryptionConfiguration;
  }
  /** @param TableReference */
  public function setDestinationTable(TableReference $destinationTable)
  {
    $this->destinationTable = $destinationTable;
  }
  /** @return TableReference */
  public function getDestinationTable()
  {
    return $this->destinationTable;
  }
  /** @param DestinationTableProperties */
  public function setDestinationTableProperties(DestinationTableProperties $destinationTableProperties)
  {
    $this->destinationTableProperties = $destinationTableProperties;
  }
  /** @return DestinationTableProperties */
  public function getDestinationTableProperties()
  {
    return $this->destinationTableProperties;
  }
  /** @param string */
  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }
  /** @return string */
  public function getEncoding()
  {
    return $this->encoding;
  }
  /** @param string */
  public function setFieldDelimiter($fieldDelimiter)
  {
    $this->fieldDelimiter = $fieldDelimiter;
  }
  /** @return string */
  public function getFieldDelimiter()
  {
    return $this->fieldDelimiter;
  }
  /** @param HivePartitioningOptions */
  public function setHivePartitioningOptions(HivePartitioningOptions $hivePartitioningOptions)
  {
    $this->hivePartitioningOptions = $hivePartitioningOptions;
  }
  /** @return HivePartitioningOptions */
  public function getHivePartitioningOptions()
  {
    return $this->hivePartitioningOptions;
  }
  /** @param bool */
  public function setIgnoreUnknownValues($ignoreUnknownValues)
  {
    $this->ignoreUnknownValues = $ignoreUnknownValues;
  }
  /** @return bool */
  public function getIgnoreUnknownValues()
  {
    return $this->ignoreUnknownValues;
  }
  /** @param string */
  public function setJsonExtension($jsonExtension)
  {
    $this->jsonExtension = $jsonExtension;
  }
  /** @return string */
  public function getJsonExtension()
  {
    return $this->jsonExtension;
  }
  /** @param int */
  public function setMaxBadRecords($maxBadRecords)
  {
    $this->maxBadRecords = $maxBadRecords;
  }
  /** @return int */
  public function getMaxBadRecords()
  {
    return $this->maxBadRecords;
  }
  /** @param string */
  public function setNullMarker($nullMarker)
  {
    $this->nullMarker = $nullMarker;
  }
  /** @return string */
  public function getNullMarker()
  {
    return $this->nullMarker;
  }
  /** @param ParquetOptions */
  public function setParquetOptions(ParquetOptions $parquetOptions)
  {
    $this->parquetOptions = $parquetOptions;
  }
  /** @return ParquetOptions */
  public function getParquetOptions()
  {
    return $this->parquetOptions;
  }
  /** @param bool */
  public function setPreserveAsciiControlCharacters($preserveAsciiControlCharacters)
  {
    $this->preserveAsciiControlCharacters = $preserveAsciiControlCharacters;
  }
  /** @return bool */
  public function getPreserveAsciiControlCharacters()
  {
    return $this->preserveAsciiControlCharacters;
  }
  /** @param string[] */
  public function setProjectionFields($projectionFields)
  {
    $this->projectionFields = $projectionFields;
  }
  /** @return string[] */
  public function getProjectionFields()
  {
    return $this->projectionFields;
  }
  /** @param string */
  public function setQuote($quote)
  {
    $this->quote = $quote;
  }
  /** @return string */
  public function getQuote()
  {
    return $this->quote;
  }
  /** @param RangePartitioning */
  public function setRangePartitioning(RangePartitioning $rangePartitioning)
  {
    $this->rangePartitioning = $rangePartitioning;
  }
  /** @return RangePartitioning */
  public function getRangePartitioning()
  {
    return $this->rangePartitioning;
  }
  /** @param string */
  public function setReferenceFileSchemaUri($referenceFileSchemaUri)
  {
    $this->referenceFileSchemaUri = $referenceFileSchemaUri;
  }
  /** @return string */
  public function getReferenceFileSchemaUri()
  {
    return $this->referenceFileSchemaUri;
  }
  /** @param TableSchema */
  public function setSchema(TableSchema $schema)
  {
    $this->schema = $schema;
  }
  /** @return TableSchema */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param string */
  public function setSchemaInline($schemaInline)
  {
    $this->schemaInline = $schemaInline;
  }
  /** @return string */
  public function getSchemaInline()
  {
    return $this->schemaInline;
  }
  /** @param string */
  public function setSchemaInlineFormat($schemaInlineFormat)
  {
    $this->schemaInlineFormat = $schemaInlineFormat;
  }
  /** @return string */
  public function getSchemaInlineFormat()
  {
    return $this->schemaInlineFormat;
  }
  /** @param string[] */
  public function setSchemaUpdateOptions($schemaUpdateOptions)
  {
    $this->schemaUpdateOptions = $schemaUpdateOptions;
  }
  /** @return string[] */
  public function getSchemaUpdateOptions()
  {
    return $this->schemaUpdateOptions;
  }
  /** @param int */
  public function setSkipLeadingRows($skipLeadingRows)
  {
    $this->skipLeadingRows = $skipLeadingRows;
  }
  /** @return int */
  public function getSkipLeadingRows()
  {
    return $this->skipLeadingRows;
  }
  /** @param string */
  public function setSourceFormat($sourceFormat)
  {
    $this->sourceFormat = $sourceFormat;
  }
  /** @return string */
  public function getSourceFormat()
  {
    return $this->sourceFormat;
  }
  /** @param string[] */
  public function setSourceUris($sourceUris)
  {
    $this->sourceUris = $sourceUris;
  }
  /** @return string[] */
  public function getSourceUris()
  {
    return $this->sourceUris;
  }
  /** @param TimePartitioning */
  public function setTimePartitioning(TimePartitioning $timePartitioning)
  {
    $this->timePartitioning = $timePartitioning;
  }
  /** @return TimePartitioning */
  public function getTimePartitioning()
  {
    return $this->timePartitioning;
  }
  /** @param bool */
  public function setUseAvroLogicalTypes($useAvroLogicalTypes)
  {
    $this->useAvroLogicalTypes = $useAvroLogicalTypes;
  }
  /** @return bool */
  public function getUseAvroLogicalTypes()
  {
    return $this->useAvroLogicalTypes;
  }
  /** @param string */
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  /** @return string */
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}

class JobConfigurationQuery extends \Google\Collection
{
  /** @var bool */
  public $allowLargeResults;
  /** @var Clustering */
  public $clustering;
  /** @var ConnectionProperty[] */
  public $connectionProperties;
  /** @var string */
  public $createDisposition;
  /** @var bool */
  public $createSession;
  /** @var DatasetReference */
  public $defaultDataset;
  /** @var EncryptionConfiguration */
  public $destinationEncryptionConfiguration;
  /** @var TableReference */
  public $destinationTable;
  /** @var bool */
  public $flattenResults;
  /** @var int */
  public $maximumBillingTier;
  /** @var string */
  public $maximumBytesBilled;
  /** @var string */
  public $parameterMode;
  /** @var bool */
  public $preserveNulls;
  /** @var string */
  public $priority;
  /** @var string */
  public $query;
  /** @var QueryParameter[] */
  public $queryParameters;
  /** @var RangePartitioning */
  public $rangePartitioning;
  /** @var string[] */
  public $schemaUpdateOptions;
  /** @var ExternalDataConfiguration[] */
  public $tableDefinitions;
  /** @var TimePartitioning */
  public $timePartitioning;
  /** @var bool */
  public $useLegacySql;
  /** @var bool */
  public $useQueryCache;
  /** @var UserDefinedFunctionResource[] */
  public $userDefinedFunctionResources;
  /** @var string */
  public $writeDisposition;
  protected $collection_key = 'userDefinedFunctionResources';
  protected $clusteringType = Clustering::class;
  protected $clusteringDataType = '';
  protected $connectionPropertiesType = ConnectionProperty::class;
  protected $connectionPropertiesDataType = 'array';
  protected $defaultDatasetType = DatasetReference::class;
  protected $defaultDatasetDataType = '';
  protected $destinationEncryptionConfigurationType = EncryptionConfiguration::class;
  protected $destinationEncryptionConfigurationDataType = '';
  protected $destinationTableType = TableReference::class;
  protected $destinationTableDataType = '';
  protected $queryParametersType = QueryParameter::class;
  protected $queryParametersDataType = 'array';
  protected $rangePartitioningType = RangePartitioning::class;
  protected $rangePartitioningDataType = '';
  protected $tableDefinitionsType = ExternalDataConfiguration::class;
  protected $tableDefinitionsDataType = 'map';
  protected $timePartitioningType = TimePartitioning::class;
  protected $timePartitioningDataType = '';
  protected $userDefinedFunctionResourcesType = UserDefinedFunctionResource::class;
  protected $userDefinedFunctionResourcesDataType = 'array';
  /** @param bool */
  public function setAllowLargeResults($allowLargeResults)
  {
    $this->allowLargeResults = $allowLargeResults;
  }
  /** @return bool */
  public function getAllowLargeResults()
  {
    return $this->allowLargeResults;
  }
  /** @param Clustering */
  public function setClustering(Clustering $clustering)
  {
    $this->clustering = $clustering;
  }
  /** @return Clustering */
  public function getClustering()
  {
    return $this->clustering;
  }
  /** @param ConnectionProperty[] */
  public function setConnectionProperties($connectionProperties)
  {
    $this->connectionProperties = $connectionProperties;
  }
  /** @return ConnectionProperty[] */
  public function getConnectionProperties()
  {
    return $this->connectionProperties;
  }
  /** @param string */
  public function setCreateDisposition($createDisposition)
  {
    $this->createDisposition = $createDisposition;
  }
  /** @return string */
  public function getCreateDisposition()
  {
    return $this->createDisposition;
  }
  /** @param bool */
  public function setCreateSession($createSession)
  {
    $this->createSession = $createSession;
  }
  /** @return bool */
  public function getCreateSession()
  {
    return $this->createSession;
  }
  /** @param DatasetReference */
  public function setDefaultDataset(DatasetReference $defaultDataset)
  {
    $this->defaultDataset = $defaultDataset;
  }
  /** @return DatasetReference */
  public function getDefaultDataset()
  {
    return $this->defaultDataset;
  }
  /** @param EncryptionConfiguration */
  public function setDestinationEncryptionConfiguration(EncryptionConfiguration $destinationEncryptionConfiguration)
  {
    $this->destinationEncryptionConfiguration = $destinationEncryptionConfiguration;
  }
  /** @return EncryptionConfiguration */
  public function getDestinationEncryptionConfiguration()
  {
    return $this->destinationEncryptionConfiguration;
  }
  /** @param TableReference */
  public function setDestinationTable(TableReference $destinationTable)
  {
    $this->destinationTable = $destinationTable;
  }
  /** @return TableReference */
  public function getDestinationTable()
  {
    return $this->destinationTable;
  }
  /** @param bool */
  public function setFlattenResults($flattenResults)
  {
    $this->flattenResults = $flattenResults;
  }
  /** @return bool */
  public function getFlattenResults()
  {
    return $this->flattenResults;
  }
  /** @param int */
  public function setMaximumBillingTier($maximumBillingTier)
  {
    $this->maximumBillingTier = $maximumBillingTier;
  }
  /** @return int */
  public function getMaximumBillingTier()
  {
    return $this->maximumBillingTier;
  }
  /** @param string */
  public function setMaximumBytesBilled($maximumBytesBilled)
  {
    $this->maximumBytesBilled = $maximumBytesBilled;
  }
  /** @return string */
  public function getMaximumBytesBilled()
  {
    return $this->maximumBytesBilled;
  }
  /** @param string */
  public function setParameterMode($parameterMode)
  {
    $this->parameterMode = $parameterMode;
  }
  /** @return string */
  public function getParameterMode()
  {
    return $this->parameterMode;
  }
  /** @param bool */
  public function setPreserveNulls($preserveNulls)
  {
    $this->preserveNulls = $preserveNulls;
  }
  /** @return bool */
  public function getPreserveNulls()
  {
    return $this->preserveNulls;
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
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /** @return string */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param QueryParameter[] */
  public function setQueryParameters($queryParameters)
  {
    $this->queryParameters = $queryParameters;
  }
  /** @return QueryParameter[] */
  public function getQueryParameters()
  {
    return $this->queryParameters;
  }
  /** @param RangePartitioning */
  public function setRangePartitioning(RangePartitioning $rangePartitioning)
  {
    $this->rangePartitioning = $rangePartitioning;
  }
  /** @return RangePartitioning */
  public function getRangePartitioning()
  {
    return $this->rangePartitioning;
  }
  /** @param string[] */
  public function setSchemaUpdateOptions($schemaUpdateOptions)
  {
    $this->schemaUpdateOptions = $schemaUpdateOptions;
  }
  /** @return string[] */
  public function getSchemaUpdateOptions()
  {
    return $this->schemaUpdateOptions;
  }
  /** @param ExternalDataConfiguration[] */
  public function setTableDefinitions($tableDefinitions)
  {
    $this->tableDefinitions = $tableDefinitions;
  }
  /** @return ExternalDataConfiguration[] */
  public function getTableDefinitions()
  {
    return $this->tableDefinitions;
  }
  /** @param TimePartitioning */
  public function setTimePartitioning(TimePartitioning $timePartitioning)
  {
    $this->timePartitioning = $timePartitioning;
  }
  /** @return TimePartitioning */
  public function getTimePartitioning()
  {
    return $this->timePartitioning;
  }
  /** @param bool */
  public function setUseLegacySql($useLegacySql)
  {
    $this->useLegacySql = $useLegacySql;
  }
  /** @return bool */
  public function getUseLegacySql()
  {
    return $this->useLegacySql;
  }
  /** @param bool */
  public function setUseQueryCache($useQueryCache)
  {
    $this->useQueryCache = $useQueryCache;
  }
  /** @return bool */
  public function getUseQueryCache()
  {
    return $this->useQueryCache;
  }
  /** @param UserDefinedFunctionResource[] */
  public function setUserDefinedFunctionResources($userDefinedFunctionResources)
  {
    $this->userDefinedFunctionResources = $userDefinedFunctionResources;
  }
  /** @return UserDefinedFunctionResource[] */
  public function getUserDefinedFunctionResources()
  {
    return $this->userDefinedFunctionResources;
  }
  /** @param string */
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  /** @return string */
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}

class JobConfigurationTableCopy extends \Google\Collection
{
  /** @var string */
  public $createDisposition;
  /** @var EncryptionConfiguration */
  public $destinationEncryptionConfiguration;
  /** @var array */
  public $destinationExpirationTime;
  /** @var TableReference */
  public $destinationTable;
  /** @var string */
  public $operationType;
  /** @var TableReference */
  public $sourceTable;
  /** @var TableReference[] */
  public $sourceTables;
  /** @var string */
  public $writeDisposition;
  protected $collection_key = 'sourceTables';
  protected $destinationEncryptionConfigurationType = EncryptionConfiguration::class;
  protected $destinationEncryptionConfigurationDataType = '';
  protected $destinationTableType = TableReference::class;
  protected $destinationTableDataType = '';
  protected $sourceTableType = TableReference::class;
  protected $sourceTableDataType = '';
  protected $sourceTablesType = TableReference::class;
  protected $sourceTablesDataType = 'array';
  /** @param string */
  public function setCreateDisposition($createDisposition)
  {
    $this->createDisposition = $createDisposition;
  }
  /** @return string */
  public function getCreateDisposition()
  {
    return $this->createDisposition;
  }
  /** @param EncryptionConfiguration */
  public function setDestinationEncryptionConfiguration(EncryptionConfiguration $destinationEncryptionConfiguration)
  {
    $this->destinationEncryptionConfiguration = $destinationEncryptionConfiguration;
  }
  /** @return EncryptionConfiguration */
  public function getDestinationEncryptionConfiguration()
  {
    return $this->destinationEncryptionConfiguration;
  }
  /** @param array */
  public function setDestinationExpirationTime($destinationExpirationTime)
  {
    $this->destinationExpirationTime = $destinationExpirationTime;
  }
  /** @return array */
  public function getDestinationExpirationTime()
  {
    return $this->destinationExpirationTime;
  }
  /** @param TableReference */
  public function setDestinationTable(TableReference $destinationTable)
  {
    $this->destinationTable = $destinationTable;
  }
  /** @return TableReference */
  public function getDestinationTable()
  {
    return $this->destinationTable;
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
  /** @param TableReference */
  public function setSourceTable(TableReference $sourceTable)
  {
    $this->sourceTable = $sourceTable;
  }
  /** @return TableReference */
  public function getSourceTable()
  {
    return $this->sourceTable;
  }
  /** @param TableReference[] */
  public function setSourceTables($sourceTables)
  {
    $this->sourceTables = $sourceTables;
  }
  /** @return TableReference[] */
  public function getSourceTables()
  {
    return $this->sourceTables;
  }
  /** @param string */
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  /** @return string */
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}

class JobList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var JobListJobs[] */
  public $jobs;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
  protected $jobsType = JobListJobs::class;
  protected $jobsDataType = 'array';
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
  /** @param JobListJobs[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return JobListJobs[] */
  public function getJobs()
  {
    return $this->jobs;
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

class JobListJobs extends \Google\Model
{
  /** @var JobConfiguration */
  public $configuration;
  /** @var ErrorProto */
  public $errorResult;
  /** @var string */
  public $id;
  /** @var JobReference */
  public $jobReference;
  /** @var string */
  public $kind;
  /** @var string */
  public $state;
  /** @var JobStatistics */
  public $statistics;
  /** @var JobStatus */
  public $status;
  /** @var string */
  public $userEmail;
  protected $internal_gapi_mappings = [
        "userEmail" => "user_email",
  ];
  protected $configurationType = JobConfiguration::class;
  protected $configurationDataType = '';
  protected $errorResultType = ErrorProto::class;
  protected $errorResultDataType = '';
  protected $jobReferenceType = JobReference::class;
  protected $jobReferenceDataType = '';
  protected $statisticsType = JobStatistics::class;
  protected $statisticsDataType = '';
  protected $statusType = JobStatus::class;
  protected $statusDataType = '';
  /** @param JobConfiguration */
  public function setConfiguration(JobConfiguration $configuration)
  {
    $this->configuration = $configuration;
  }
  /** @return JobConfiguration */
  public function getConfiguration()
  {
    return $this->configuration;
  }
  /** @param ErrorProto */
  public function setErrorResult(ErrorProto $errorResult)
  {
    $this->errorResult = $errorResult;
  }
  /** @return ErrorProto */
  public function getErrorResult()
  {
    return $this->errorResult;
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
  /** @param JobReference */
  public function setJobReference(JobReference $jobReference)
  {
    $this->jobReference = $jobReference;
  }
  /** @return JobReference */
  public function getJobReference()
  {
    return $this->jobReference;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
  /** @param JobStatistics */
  public function setStatistics(JobStatistics $statistics)
  {
    $this->statistics = $statistics;
  }
  /** @return JobStatistics */
  public function getStatistics()
  {
    return $this->statistics;
  }
  /** @param JobStatus */
  public function setStatus(JobStatus $status)
  {
    $this->status = $status;
  }
  /** @return JobStatus */
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
}

class JobReference extends \Google\Model
{
  /** @var string */
  public $jobId;
  /** @var string */
  public $location;
  /** @var string */
  public $projectId;

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

class JobStatistics extends \Google\Collection
{
  public $completionRatio;
  /** @var JobStatistics5 */
  public $copy;
  /** @var string */
  public $creationTime;
  /** @var DataMaskingStatistics */
  public $dataMaskingStatistics;
  /** @var string */
  public $endTime;
  /** @var JobStatistics4 */
  public $extract;
  /** @var JobStatistics3 */
  public $load;
  /** @var string */
  public $numChildJobs;
  /** @var string */
  public $parentJobId;
  /** @var JobStatistics2 */
  public $query;
  /** @var string[] */
  public $quotaDeferments;
  /** @var JobStatisticsReservationUsage[] */
  public $reservationUsage;
  /** @var string */
  public $reservationId;
  /** @var RowLevelSecurityStatistics */
  public $rowLevelSecurityStatistics;
  /** @var ScriptStatistics */
  public $scriptStatistics;
  /** @var SessionInfo */
  public $sessionInfo;
  /** @var string */
  public $startTime;
  /** @var string */
  public $totalBytesProcessed;
  /** @var string */
  public $totalSlotMs;
  /** @var TransactionInfo */
  public $transactionInfo;
  protected $collection_key = 'reservationUsage';
  protected $internal_gapi_mappings = [
        "reservationId" => "reservation_id",
  ];
  protected $copyType = JobStatistics5::class;
  protected $copyDataType = '';
  protected $dataMaskingStatisticsType = DataMaskingStatistics::class;
  protected $dataMaskingStatisticsDataType = '';
  protected $extractType = JobStatistics4::class;
  protected $extractDataType = '';
  protected $loadType = JobStatistics3::class;
  protected $loadDataType = '';
  protected $queryType = JobStatistics2::class;
  protected $queryDataType = '';
  protected $reservationUsageType = JobStatisticsReservationUsage::class;
  protected $reservationUsageDataType = 'array';
  protected $rowLevelSecurityStatisticsType = RowLevelSecurityStatistics::class;
  protected $rowLevelSecurityStatisticsDataType = '';
  protected $scriptStatisticsType = ScriptStatistics::class;
  protected $scriptStatisticsDataType = '';
  protected $sessionInfoType = SessionInfo::class;
  protected $sessionInfoDataType = '';
  protected $transactionInfoType = TransactionInfo::class;
  protected $transactionInfoDataType = '';
  public function setCompletionRatio($completionRatio)
  {
    $this->completionRatio = $completionRatio;
  }
  public function getCompletionRatio()
  {
    return $this->completionRatio;
  }
  /** @param JobStatistics5 */
  public function setCopy(JobStatistics5 $copy)
  {
    $this->copy = $copy;
  }
  /** @return JobStatistics5 */
  public function getCopy()
  {
    return $this->copy;
  }
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
  /** @param DataMaskingStatistics */
  public function setDataMaskingStatistics(DataMaskingStatistics $dataMaskingStatistics)
  {
    $this->dataMaskingStatistics = $dataMaskingStatistics;
  }
  /** @return DataMaskingStatistics */
  public function getDataMaskingStatistics()
  {
    return $this->dataMaskingStatistics;
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
  /** @param JobStatistics4 */
  public function setExtract(JobStatistics4 $extract)
  {
    $this->extract = $extract;
  }
  /** @return JobStatistics4 */
  public function getExtract()
  {
    return $this->extract;
  }
  /** @param JobStatistics3 */
  public function setLoad(JobStatistics3 $load)
  {
    $this->load = $load;
  }
  /** @return JobStatistics3 */
  public function getLoad()
  {
    return $this->load;
  }
  /** @param string */
  public function setNumChildJobs($numChildJobs)
  {
    $this->numChildJobs = $numChildJobs;
  }
  /** @return string */
  public function getNumChildJobs()
  {
    return $this->numChildJobs;
  }
  /** @param string */
  public function setParentJobId($parentJobId)
  {
    $this->parentJobId = $parentJobId;
  }
  /** @return string */
  public function getParentJobId()
  {
    return $this->parentJobId;
  }
  /** @param JobStatistics2 */
  public function setQuery(JobStatistics2 $query)
  {
    $this->query = $query;
  }
  /** @return JobStatistics2 */
  public function getQuery()
  {
    return $this->query;
  }
  /** @param string[] */
  public function setQuotaDeferments($quotaDeferments)
  {
    $this->quotaDeferments = $quotaDeferments;
  }
  /** @return string[] */
  public function getQuotaDeferments()
  {
    return $this->quotaDeferments;
  }
  /** @param JobStatisticsReservationUsage[] */
  public function setReservationUsage($reservationUsage)
  {
    $this->reservationUsage = $reservationUsage;
  }
  /** @return JobStatisticsReservationUsage[] */
  public function getReservationUsage()
  {
    return $this->reservationUsage;
  }
  /** @param string */
  public function setReservationId($reservationId)
  {
    $this->reservationId = $reservationId;
  }
  /** @return string */
  public function getReservationId()
  {
    return $this->reservationId;
  }
  /** @param RowLevelSecurityStatistics */
  public function setRowLevelSecurityStatistics(RowLevelSecurityStatistics $rowLevelSecurityStatistics)
  {
    $this->rowLevelSecurityStatistics = $rowLevelSecurityStatistics;
  }
  /** @return RowLevelSecurityStatistics */
  public function getRowLevelSecurityStatistics()
  {
    return $this->rowLevelSecurityStatistics;
  }
  /** @param ScriptStatistics */
  public function setScriptStatistics(ScriptStatistics $scriptStatistics)
  {
    $this->scriptStatistics = $scriptStatistics;
  }
  /** @return ScriptStatistics */
  public function getScriptStatistics()
  {
    return $this->scriptStatistics;
  }
  /** @param SessionInfo */
  public function setSessionInfo(SessionInfo $sessionInfo)
  {
    $this->sessionInfo = $sessionInfo;
  }
  /** @return SessionInfo */
  public function getSessionInfo()
  {
    return $this->sessionInfo;
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
  public function setTotalBytesProcessed($totalBytesProcessed)
  {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }
  /** @return string */
  public function getTotalBytesProcessed()
  {
    return $this->totalBytesProcessed;
  }
  /** @param string */
  public function setTotalSlotMs($totalSlotMs)
  {
    $this->totalSlotMs = $totalSlotMs;
  }
  /** @return string */
  public function getTotalSlotMs()
  {
    return $this->totalSlotMs;
  }
  /** @param TransactionInfo */
  public function setTransactionInfo(TransactionInfo $transactionInfo)
  {
    $this->transactionInfo = $transactionInfo;
  }
  /** @return TransactionInfo */
  public function getTransactionInfo()
  {
    return $this->transactionInfo;
  }
}

class JobStatistics2 extends \Google\Collection
{
  /** @var BiEngineStatistics */
  public $biEngineStatistics;
  /** @var int */
  public $billingTier;
  /** @var bool */
  public $cacheHit;
  /** @var string */
  public $ddlAffectedRowAccessPolicyCount;
  /** @var TableReference */
  public $ddlDestinationTable;
  /** @var string */
  public $ddlOperationPerformed;
  /** @var DatasetReference */
  public $ddlTargetDataset;
  /** @var RoutineReference */
  public $ddlTargetRoutine;
  /** @var RowAccessPolicyReference */
  public $ddlTargetRowAccessPolicy;
  /** @var TableReference */
  public $ddlTargetTable;
  /** @var DmlStatistics */
  public $dmlStats;
  /** @var string */
  public $estimatedBytesProcessed;
  /** @var MlStatistics */
  public $mlStatistics;
  /** @var BigQueryModelTraining */
  public $modelTraining;
  /** @var int */
  public $modelTrainingCurrentIteration;
  /** @var string */
  public $modelTrainingExpectedTotalIteration;
  /** @var string */
  public $numDmlAffectedRows;
  /** @var ExplainQueryStage[] */
  public $queryPlan;
  /** @var RoutineReference[] */
  public $referencedRoutines;
  /** @var TableReference[] */
  public $referencedTables;
  /** @var JobStatistics2ReservationUsage[] */
  public $reservationUsage;
  /** @var TableSchema */
  public $schema;
  /** @var SearchStatistics */
  public $searchStatistics;
  /** @var SparkStatistics */
  public $sparkStatistics;
  /** @var string */
  public $statementType;
  /** @var QueryTimelineSample[] */
  public $timeline;
  /** @var string */
  public $totalBytesBilled;
  /** @var string */
  public $totalBytesProcessed;
  /** @var string */
  public $totalBytesProcessedAccuracy;
  /** @var string */
  public $totalPartitionsProcessed;
  /** @var string */
  public $totalSlotMs;
  /** @var string */
  public $transferredBytes;
  /** @var QueryParameter[] */
  public $undeclaredQueryParameters;
  protected $collection_key = 'undeclaredQueryParameters';
  protected $biEngineStatisticsType = BiEngineStatistics::class;
  protected $biEngineStatisticsDataType = '';
  protected $ddlDestinationTableType = TableReference::class;
  protected $ddlDestinationTableDataType = '';
  protected $ddlTargetDatasetType = DatasetReference::class;
  protected $ddlTargetDatasetDataType = '';
  protected $ddlTargetRoutineType = RoutineReference::class;
  protected $ddlTargetRoutineDataType = '';
  protected $ddlTargetRowAccessPolicyType = RowAccessPolicyReference::class;
  protected $ddlTargetRowAccessPolicyDataType = '';
  protected $ddlTargetTableType = TableReference::class;
  protected $ddlTargetTableDataType = '';
  protected $dmlStatsType = DmlStatistics::class;
  protected $dmlStatsDataType = '';
  protected $mlStatisticsType = MlStatistics::class;
  protected $mlStatisticsDataType = '';
  protected $modelTrainingType = BigQueryModelTraining::class;
  protected $modelTrainingDataType = '';
  protected $queryPlanType = ExplainQueryStage::class;
  protected $queryPlanDataType = 'array';
  protected $referencedRoutinesType = RoutineReference::class;
  protected $referencedRoutinesDataType = 'array';
  protected $referencedTablesType = TableReference::class;
  protected $referencedTablesDataType = 'array';
  protected $reservationUsageType = JobStatistics2ReservationUsage::class;
  protected $reservationUsageDataType = 'array';
  protected $schemaType = TableSchema::class;
  protected $schemaDataType = '';
  protected $searchStatisticsType = SearchStatistics::class;
  protected $searchStatisticsDataType = '';
  protected $sparkStatisticsType = SparkStatistics::class;
  protected $sparkStatisticsDataType = '';
  protected $timelineType = QueryTimelineSample::class;
  protected $timelineDataType = 'array';
  protected $undeclaredQueryParametersType = QueryParameter::class;
  protected $undeclaredQueryParametersDataType = 'array';
  /** @param BiEngineStatistics */
  public function setBiEngineStatistics(BiEngineStatistics $biEngineStatistics)
  {
    $this->biEngineStatistics = $biEngineStatistics;
  }
  /** @return BiEngineStatistics */
  public function getBiEngineStatistics()
  {
    return $this->biEngineStatistics;
  }
  /** @param int */
  public function setBillingTier($billingTier)
  {
    $this->billingTier = $billingTier;
  }
  /** @return int */
  public function getBillingTier()
  {
    return $this->billingTier;
  }
  /** @param bool */
  public function setCacheHit($cacheHit)
  {
    $this->cacheHit = $cacheHit;
  }
  /** @return bool */
  public function getCacheHit()
  {
    return $this->cacheHit;
  }
  /** @param string */
  public function setDdlAffectedRowAccessPolicyCount($ddlAffectedRowAccessPolicyCount)
  {
    $this->ddlAffectedRowAccessPolicyCount = $ddlAffectedRowAccessPolicyCount;
  }
  /** @return string */
  public function getDdlAffectedRowAccessPolicyCount()
  {
    return $this->ddlAffectedRowAccessPolicyCount;
  }
  /** @param TableReference */
  public function setDdlDestinationTable(TableReference $ddlDestinationTable)
  {
    $this->ddlDestinationTable = $ddlDestinationTable;
  }
  /** @return TableReference */
  public function getDdlDestinationTable()
  {
    return $this->ddlDestinationTable;
  }
  /** @param string */
  public function setDdlOperationPerformed($ddlOperationPerformed)
  {
    $this->ddlOperationPerformed = $ddlOperationPerformed;
  }
  /** @return string */
  public function getDdlOperationPerformed()
  {
    return $this->ddlOperationPerformed;
  }
  /** @param DatasetReference */
  public function setDdlTargetDataset(DatasetReference $ddlTargetDataset)
  {
    $this->ddlTargetDataset = $ddlTargetDataset;
  }
  /** @return DatasetReference */
  public function getDdlTargetDataset()
  {
    return $this->ddlTargetDataset;
  }
  /** @param RoutineReference */
  public function setDdlTargetRoutine(RoutineReference $ddlTargetRoutine)
  {
    $this->ddlTargetRoutine = $ddlTargetRoutine;
  }
  /** @return RoutineReference */
  public function getDdlTargetRoutine()
  {
    return $this->ddlTargetRoutine;
  }
  /** @param RowAccessPolicyReference */
  public function setDdlTargetRowAccessPolicy(RowAccessPolicyReference $ddlTargetRowAccessPolicy)
  {
    $this->ddlTargetRowAccessPolicy = $ddlTargetRowAccessPolicy;
  }
  /** @return RowAccessPolicyReference */
  public function getDdlTargetRowAccessPolicy()
  {
    return $this->ddlTargetRowAccessPolicy;
  }
  /** @param TableReference */
  public function setDdlTargetTable(TableReference $ddlTargetTable)
  {
    $this->ddlTargetTable = $ddlTargetTable;
  }
  /** @return TableReference */
  public function getDdlTargetTable()
  {
    return $this->ddlTargetTable;
  }
  /** @param DmlStatistics */
  public function setDmlStats(DmlStatistics $dmlStats)
  {
    $this->dmlStats = $dmlStats;
  }
  /** @return DmlStatistics */
  public function getDmlStats()
  {
    return $this->dmlStats;
  }
  /** @param string */
  public function setEstimatedBytesProcessed($estimatedBytesProcessed)
  {
    $this->estimatedBytesProcessed = $estimatedBytesProcessed;
  }
  /** @return string */
  public function getEstimatedBytesProcessed()
  {
    return $this->estimatedBytesProcessed;
  }
  /** @param MlStatistics */
  public function setMlStatistics(MlStatistics $mlStatistics)
  {
    $this->mlStatistics = $mlStatistics;
  }
  /** @return MlStatistics */
  public function getMlStatistics()
  {
    return $this->mlStatistics;
  }
  /** @param BigQueryModelTraining */
  public function setModelTraining(BigQueryModelTraining $modelTraining)
  {
    $this->modelTraining = $modelTraining;
  }
  /** @return BigQueryModelTraining */
  public function getModelTraining()
  {
    return $this->modelTraining;
  }
  /** @param int */
  public function setModelTrainingCurrentIteration($modelTrainingCurrentIteration)
  {
    $this->modelTrainingCurrentIteration = $modelTrainingCurrentIteration;
  }
  /** @return int */
  public function getModelTrainingCurrentIteration()
  {
    return $this->modelTrainingCurrentIteration;
  }
  /** @param string */
  public function setModelTrainingExpectedTotalIteration($modelTrainingExpectedTotalIteration)
  {
    $this->modelTrainingExpectedTotalIteration = $modelTrainingExpectedTotalIteration;
  }
  /** @return string */
  public function getModelTrainingExpectedTotalIteration()
  {
    return $this->modelTrainingExpectedTotalIteration;
  }
  /** @param string */
  public function setNumDmlAffectedRows($numDmlAffectedRows)
  {
    $this->numDmlAffectedRows = $numDmlAffectedRows;
  }
  /** @return string */
  public function getNumDmlAffectedRows()
  {
    return $this->numDmlAffectedRows;
  }
  /** @param ExplainQueryStage[] */
  public function setQueryPlan($queryPlan)
  {
    $this->queryPlan = $queryPlan;
  }
  /** @return ExplainQueryStage[] */
  public function getQueryPlan()
  {
    return $this->queryPlan;
  }
  /** @param RoutineReference[] */
  public function setReferencedRoutines($referencedRoutines)
  {
    $this->referencedRoutines = $referencedRoutines;
  }
  /** @return RoutineReference[] */
  public function getReferencedRoutines()
  {
    return $this->referencedRoutines;
  }
  /** @param TableReference[] */
  public function setReferencedTables($referencedTables)
  {
    $this->referencedTables = $referencedTables;
  }
  /** @return TableReference[] */
  public function getReferencedTables()
  {
    return $this->referencedTables;
  }
  /** @param JobStatistics2ReservationUsage[] */
  public function setReservationUsage($reservationUsage)
  {
    $this->reservationUsage = $reservationUsage;
  }
  /** @return JobStatistics2ReservationUsage[] */
  public function getReservationUsage()
  {
    return $this->reservationUsage;
  }
  /** @param TableSchema */
  public function setSchema(TableSchema $schema)
  {
    $this->schema = $schema;
  }
  /** @return TableSchema */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param SearchStatistics */
  public function setSearchStatistics(SearchStatistics $searchStatistics)
  {
    $this->searchStatistics = $searchStatistics;
  }
  /** @return SearchStatistics */
  public function getSearchStatistics()
  {
    return $this->searchStatistics;
  }
  /** @param SparkStatistics */
  public function setSparkStatistics(SparkStatistics $sparkStatistics)
  {
    $this->sparkStatistics = $sparkStatistics;
  }
  /** @return SparkStatistics */
  public function getSparkStatistics()
  {
    return $this->sparkStatistics;
  }
  /** @param string */
  public function setStatementType($statementType)
  {
    $this->statementType = $statementType;
  }
  /** @return string */
  public function getStatementType()
  {
    return $this->statementType;
  }
  /** @param QueryTimelineSample[] */
  public function setTimeline($timeline)
  {
    $this->timeline = $timeline;
  }
  /** @return QueryTimelineSample[] */
  public function getTimeline()
  {
    return $this->timeline;
  }
  /** @param string */
  public function setTotalBytesBilled($totalBytesBilled)
  {
    $this->totalBytesBilled = $totalBytesBilled;
  }
  /** @return string */
  public function getTotalBytesBilled()
  {
    return $this->totalBytesBilled;
  }
  /** @param string */
  public function setTotalBytesProcessed($totalBytesProcessed)
  {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }
  /** @return string */
  public function getTotalBytesProcessed()
  {
    return $this->totalBytesProcessed;
  }
  /** @param string */
  public function setTotalBytesProcessedAccuracy($totalBytesProcessedAccuracy)
  {
    $this->totalBytesProcessedAccuracy = $totalBytesProcessedAccuracy;
  }
  /** @return string */
  public function getTotalBytesProcessedAccuracy()
  {
    return $this->totalBytesProcessedAccuracy;
  }
  /** @param string */
  public function setTotalPartitionsProcessed($totalPartitionsProcessed)
  {
    $this->totalPartitionsProcessed = $totalPartitionsProcessed;
  }
  /** @return string */
  public function getTotalPartitionsProcessed()
  {
    return $this->totalPartitionsProcessed;
  }
  /** @param string */
  public function setTotalSlotMs($totalSlotMs)
  {
    $this->totalSlotMs = $totalSlotMs;
  }
  /** @return string */
  public function getTotalSlotMs()
  {
    return $this->totalSlotMs;
  }
  /** @param string */
  public function setTransferredBytes($transferredBytes)
  {
    $this->transferredBytes = $transferredBytes;
  }
  /** @return string */
  public function getTransferredBytes()
  {
    return $this->transferredBytes;
  }
  /** @param QueryParameter[] */
  public function setUndeclaredQueryParameters($undeclaredQueryParameters)
  {
    $this->undeclaredQueryParameters = $undeclaredQueryParameters;
  }
  /** @return QueryParameter[] */
  public function getUndeclaredQueryParameters()
  {
    return $this->undeclaredQueryParameters;
  }
}

class JobStatistics2ReservationUsage extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $slotMs;

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
  public function setSlotMs($slotMs)
  {
    $this->slotMs = $slotMs;
  }
  /** @return string */
  public function getSlotMs()
  {
    return $this->slotMs;
  }
}

class JobStatistics3 extends \Google\Model
{
  /** @var string */
  public $badRecords;
  /** @var string */
  public $inputFileBytes;
  /** @var string */
  public $inputFiles;
  /** @var string */
  public $outputBytes;
  /** @var string */
  public $outputRows;

  /** @param string */
  public function setBadRecords($badRecords)
  {
    $this->badRecords = $badRecords;
  }
  /** @return string */
  public function getBadRecords()
  {
    return $this->badRecords;
  }
  /** @param string */
  public function setInputFileBytes($inputFileBytes)
  {
    $this->inputFileBytes = $inputFileBytes;
  }
  /** @return string */
  public function getInputFileBytes()
  {
    return $this->inputFileBytes;
  }
  /** @param string */
  public function setInputFiles($inputFiles)
  {
    $this->inputFiles = $inputFiles;
  }
  /** @return string */
  public function getInputFiles()
  {
    return $this->inputFiles;
  }
  /** @param string */
  public function setOutputBytes($outputBytes)
  {
    $this->outputBytes = $outputBytes;
  }
  /** @return string */
  public function getOutputBytes()
  {
    return $this->outputBytes;
  }
  /** @param string */
  public function setOutputRows($outputRows)
  {
    $this->outputRows = $outputRows;
  }
  /** @return string */
  public function getOutputRows()
  {
    return $this->outputRows;
  }
}

class JobStatistics4 extends \Google\Collection
{
  /** @var string[] */
  public $destinationUriFileCounts;
  /** @var string */
  public $inputBytes;
  protected $collection_key = 'destinationUriFileCounts';
  /** @param string[] */
  public function setDestinationUriFileCounts($destinationUriFileCounts)
  {
    $this->destinationUriFileCounts = $destinationUriFileCounts;
  }
  /** @return string[] */
  public function getDestinationUriFileCounts()
  {
    return $this->destinationUriFileCounts;
  }
  /** @param string */
  public function setInputBytes($inputBytes)
  {
    $this->inputBytes = $inputBytes;
  }
  /** @return string */
  public function getInputBytes()
  {
    return $this->inputBytes;
  }
}

class JobStatistics5 extends \Google\Model
{
  /** @var string */
  public $copiedLogicalBytes;
  /** @var string */
  public $copiedRows;
  protected $internal_gapi_mappings = [
        "copiedLogicalBytes" => "copied_logical_bytes",
        "copiedRows" => "copied_rows",
  ];
  /** @param string */
  public function setCopiedLogicalBytes($copiedLogicalBytes)
  {
    $this->copiedLogicalBytes = $copiedLogicalBytes;
  }
  /** @return string */
  public function getCopiedLogicalBytes()
  {
    return $this->copiedLogicalBytes;
  }
  /** @param string */
  public function setCopiedRows($copiedRows)
  {
    $this->copiedRows = $copiedRows;
  }
  /** @return string */
  public function getCopiedRows()
  {
    return $this->copiedRows;
  }
}

class JobStatisticsReservationUsage extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $slotMs;

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
  public function setSlotMs($slotMs)
  {
    $this->slotMs = $slotMs;
  }
  /** @return string */
  public function getSlotMs()
  {
    return $this->slotMs;
  }
}

class JobStatus extends \Google\Collection
{
  /** @var ErrorProto */
  public $errorResult;
  /** @var ErrorProto[] */
  public $errors;
  /** @var string */
  public $state;
  protected $collection_key = 'errors';
  protected $errorResultType = ErrorProto::class;
  protected $errorResultDataType = '';
  protected $errorsType = ErrorProto::class;
  protected $errorsDataType = 'array';
  /** @param ErrorProto */
  public function setErrorResult(ErrorProto $errorResult)
  {
    $this->errorResult = $errorResult;
  }
  /** @return ErrorProto */
  public function getErrorResult()
  {
    return $this->errorResult;
  }
  /** @param ErrorProto[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ErrorProto[] */
  public function getErrors()
  {
    return $this->errors;
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

class ListModelsResponse extends \Google\Collection
{
  /** @var Model[] */
  public $models;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'models';
  protected $modelsType = Model::class;
  protected $modelsDataType = 'array';
  /** @param Model[] */
  public function setModels($models)
  {
    $this->models = $models;
  }
  /** @return Model[] */
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

class ListRoutinesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Routine[] */
  public $routines;
  protected $collection_key = 'routines';
  protected $routinesType = Routine::class;
  protected $routinesDataType = 'array';
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
  /** @param Routine[] */
  public function setRoutines($routines)
  {
    $this->routines = $routines;
  }
  /** @return Routine[] */
  public function getRoutines()
  {
    return $this->routines;
  }
}

class ListRowAccessPoliciesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var RowAccessPolicy[] */
  public $rowAccessPolicies;
  protected $collection_key = 'rowAccessPolicies';
  protected $rowAccessPoliciesType = RowAccessPolicy::class;
  protected $rowAccessPoliciesDataType = 'array';
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
  /** @param RowAccessPolicy[] */
  public function setRowAccessPolicies($rowAccessPolicies)
  {
    $this->rowAccessPolicies = $rowAccessPolicies;
  }
  /** @return RowAccessPolicy[] */
  public function getRowAccessPolicies()
  {
    return $this->rowAccessPolicies;
  }
}

class LocationMetadata extends \Google\Model
{
  /** @var string */
  public $legacyLocationId;

  /** @param string */
  public function setLegacyLocationId($legacyLocationId)
  {
    $this->legacyLocationId = $legacyLocationId;
  }
  /** @return string */
  public function getLegacyLocationId()
  {
    return $this->legacyLocationId;
  }
}

class MaterializedViewDefinition extends \Google\Model
{
  /** @var bool */
  public $enableRefresh;
  /** @var string */
  public $lastRefreshTime;
  /** @var string */
  public $maxStaleness;
  /** @var string */
  public $query;
  /** @var string */
  public $refreshIntervalMs;

  /** @param bool */
  public function setEnableRefresh($enableRefresh)
  {
    $this->enableRefresh = $enableRefresh;
  }
  /** @return bool */
  public function getEnableRefresh()
  {
    return $this->enableRefresh;
  }
  /** @param string */
  public function setLastRefreshTime($lastRefreshTime)
  {
    $this->lastRefreshTime = $lastRefreshTime;
  }
  /** @return string */
  public function getLastRefreshTime()
  {
    return $this->lastRefreshTime;
  }
  /** @param string */
  public function setMaxStaleness($maxStaleness)
  {
    $this->maxStaleness = $maxStaleness;
  }
  /** @return string */
  public function getMaxStaleness()
  {
    return $this->maxStaleness;
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
  public function setRefreshIntervalMs($refreshIntervalMs)
  {
    $this->refreshIntervalMs = $refreshIntervalMs;
  }
  /** @return string */
  public function getRefreshIntervalMs()
  {
    return $this->refreshIntervalMs;
  }
}

class MlStatistics extends \Google\Collection
{
  /** @var IterationResult[] */
  public $iterationResults;
  /** @var string */
  public $maxIterations;
  protected $collection_key = 'iterationResults';
  protected $iterationResultsType = IterationResult::class;
  protected $iterationResultsDataType = 'array';
  /** @param IterationResult[] */
  public function setIterationResults($iterationResults)
  {
    $this->iterationResults = $iterationResults;
  }
  /** @return IterationResult[] */
  public function getIterationResults()
  {
    return $this->iterationResults;
  }
  /** @param string */
  public function setMaxIterations($maxIterations)
  {
    $this->maxIterations = $maxIterations;
  }
  /** @return string */
  public function getMaxIterations()
  {
    return $this->maxIterations;
  }
}

class Model extends \Google\Collection
{
  /** @var string */
  public $bestTrialId;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $defaultTrialId;
  /** @var string */
  public $description;
  /** @var EncryptionConfiguration */
  public $encryptionConfiguration;
  /** @var string */
  public $etag;
  /** @var string */
  public $expirationTime;
  /** @var StandardSqlField[] */
  public $featureColumns;
  /** @var string */
  public $friendlyName;
  /** @var HparamSearchSpaces */
  public $hparamSearchSpaces;
  /** @var HparamTuningTrial[] */
  public $hparamTrials;
  /** @var StandardSqlField[] */
  public $labelColumns;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lastModifiedTime;
  /** @var string */
  public $location;
  /** @var ModelReference */
  public $modelReference;
  /** @var string */
  public $modelType;
  /** @var string[] */
  public $optimalTrialIds;
  /** @var TrainingRun[] */
  public $trainingRuns;
  protected $collection_key = 'trainingRuns';
  protected $encryptionConfigurationType = EncryptionConfiguration::class;
  protected $encryptionConfigurationDataType = '';
  protected $featureColumnsType = StandardSqlField::class;
  protected $featureColumnsDataType = 'array';
  protected $hparamSearchSpacesType = HparamSearchSpaces::class;
  protected $hparamSearchSpacesDataType = '';
  protected $hparamTrialsType = HparamTuningTrial::class;
  protected $hparamTrialsDataType = 'array';
  protected $labelColumnsType = StandardSqlField::class;
  protected $labelColumnsDataType = 'array';
  protected $modelReferenceType = ModelReference::class;
  protected $modelReferenceDataType = '';
  protected $trainingRunsType = TrainingRun::class;
  protected $trainingRunsDataType = 'array';
  /** @param string */
  public function setBestTrialId($bestTrialId)
  {
    $this->bestTrialId = $bestTrialId;
  }
  /** @return string */
  public function getBestTrialId()
  {
    return $this->bestTrialId;
  }
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
  public function setDefaultTrialId($defaultTrialId)
  {
    $this->defaultTrialId = $defaultTrialId;
  }
  /** @return string */
  public function getDefaultTrialId()
  {
    return $this->defaultTrialId;
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
  /** @param EncryptionConfiguration */
  public function setEncryptionConfiguration(EncryptionConfiguration $encryptionConfiguration)
  {
    $this->encryptionConfiguration = $encryptionConfiguration;
  }
  /** @return EncryptionConfiguration */
  public function getEncryptionConfiguration()
  {
    return $this->encryptionConfiguration;
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
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
  /** @param StandardSqlField[] */
  public function setFeatureColumns($featureColumns)
  {
    $this->featureColumns = $featureColumns;
  }
  /** @return StandardSqlField[] */
  public function getFeatureColumns()
  {
    return $this->featureColumns;
  }
  /** @param string */
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /** @return string */
  public function getFriendlyName()
  {
    return $this->friendlyName;
  }
  /** @param HparamSearchSpaces */
  public function setHparamSearchSpaces(HparamSearchSpaces $hparamSearchSpaces)
  {
    $this->hparamSearchSpaces = $hparamSearchSpaces;
  }
  /** @return HparamSearchSpaces */
  public function getHparamSearchSpaces()
  {
    return $this->hparamSearchSpaces;
  }
  /** @param HparamTuningTrial[] */
  public function setHparamTrials($hparamTrials)
  {
    $this->hparamTrials = $hparamTrials;
  }
  /** @return HparamTuningTrial[] */
  public function getHparamTrials()
  {
    return $this->hparamTrials;
  }
  /** @param StandardSqlField[] */
  public function setLabelColumns($labelColumns)
  {
    $this->labelColumns = $labelColumns;
  }
  /** @return StandardSqlField[] */
  public function getLabelColumns()
  {
    return $this->labelColumns;
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
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
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
  /** @param ModelReference */
  public function setModelReference(ModelReference $modelReference)
  {
    $this->modelReference = $modelReference;
  }
  /** @return ModelReference */
  public function getModelReference()
  {
    return $this->modelReference;
  }
  /** @param string */
  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }
  /** @return string */
  public function getModelType()
  {
    return $this->modelType;
  }
  /** @param string[] */
  public function setOptimalTrialIds($optimalTrialIds)
  {
    $this->optimalTrialIds = $optimalTrialIds;
  }
  /** @return string[] */
  public function getOptimalTrialIds()
  {
    return $this->optimalTrialIds;
  }
  /** @param TrainingRun[] */
  public function setTrainingRuns($trainingRuns)
  {
    $this->trainingRuns = $trainingRuns;
  }
  /** @return TrainingRun[] */
  public function getTrainingRuns()
  {
    return $this->trainingRuns;
  }
}

class ModelDefinition extends \Google\Collection
{
  /** @var ModelDefinitionModelOptions */
  public $modelOptions;
  /** @var BqmlTrainingRun[] */
  public $trainingRuns;
  protected $collection_key = 'trainingRuns';
  protected $modelOptionsType = ModelDefinitionModelOptions::class;
  protected $modelOptionsDataType = '';
  protected $trainingRunsType = BqmlTrainingRun::class;
  protected $trainingRunsDataType = 'array';
  /** @param ModelDefinitionModelOptions */
  public function setModelOptions(ModelDefinitionModelOptions $modelOptions)
  {
    $this->modelOptions = $modelOptions;
  }
  /** @return ModelDefinitionModelOptions */
  public function getModelOptions()
  {
    return $this->modelOptions;
  }
  /** @param BqmlTrainingRun[] */
  public function setTrainingRuns($trainingRuns)
  {
    $this->trainingRuns = $trainingRuns;
  }
  /** @return BqmlTrainingRun[] */
  public function getTrainingRuns()
  {
    return $this->trainingRuns;
  }
}

class ModelDefinitionModelOptions extends \Google\Collection
{
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lossType;
  /** @var string */
  public $modelType;
  protected $collection_key = 'labels';
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
  public function setLossType($lossType)
  {
    $this->lossType = $lossType;
  }
  /** @return string */
  public function getLossType()
  {
    return $this->lossType;
  }
  /** @param string */
  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }
  /** @return string */
  public function getModelType()
  {
    return $this->modelType;
  }
}

class ModelReference extends \Google\Model
{
  /** @var string */
  public $datasetId;
  /** @var string */
  public $modelId;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /** @return string */
  public function getDatasetId()
  {
    return $this->datasetId;
  }
  /** @param string */
  public function setModelId($modelId)
  {
    $this->modelId = $modelId;
  }
  /** @return string */
  public function getModelId()
  {
    return $this->modelId;
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

class MultiClassClassificationMetrics extends \Google\Collection
{
  /** @var AggregateClassificationMetrics */
  public $aggregateClassificationMetrics;
  /** @var ConfusionMatrix[] */
  public $confusionMatrixList;
  protected $collection_key = 'confusionMatrixList';
  protected $aggregateClassificationMetricsType = AggregateClassificationMetrics::class;
  protected $aggregateClassificationMetricsDataType = '';
  protected $confusionMatrixListType = ConfusionMatrix::class;
  protected $confusionMatrixListDataType = 'array';
  /** @param AggregateClassificationMetrics */
  public function setAggregateClassificationMetrics(AggregateClassificationMetrics $aggregateClassificationMetrics)
  {
    $this->aggregateClassificationMetrics = $aggregateClassificationMetrics;
  }
  /** @return AggregateClassificationMetrics */
  public function getAggregateClassificationMetrics()
  {
    return $this->aggregateClassificationMetrics;
  }
  /** @param ConfusionMatrix[] */
  public function setConfusionMatrixList($confusionMatrixList)
  {
    $this->confusionMatrixList = $confusionMatrixList;
  }
  /** @return ConfusionMatrix[] */
  public function getConfusionMatrixList()
  {
    return $this->confusionMatrixList;
  }
}

class ParquetOptions extends \Google\Model
{
  /** @var bool */
  public $enableListInference;
  /** @var bool */
  public $enumAsString;

  /** @param bool */
  public function setEnableListInference($enableListInference)
  {
    $this->enableListInference = $enableListInference;
  }
  /** @return bool */
  public function getEnableListInference()
  {
    return $this->enableListInference;
  }
  /** @param bool */
  public function setEnumAsString($enumAsString)
  {
    $this->enumAsString = $enumAsString;
  }
  /** @return bool */
  public function getEnumAsString()
  {
    return $this->enumAsString;
  }
}

class Policy extends \Google\Collection
{
  /** @var AuditConfig[] */
  public $auditConfigs;
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  /** @param AuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return AuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
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

class PrincipalComponentInfo extends \Google\Model
{
  public $cumulativeExplainedVarianceRatio;
  public $explainedVariance;
  public $explainedVarianceRatio;
  /** @var string */
  public $principalComponentId;

  public function setCumulativeExplainedVarianceRatio($cumulativeExplainedVarianceRatio)
  {
    $this->cumulativeExplainedVarianceRatio = $cumulativeExplainedVarianceRatio;
  }
  public function getCumulativeExplainedVarianceRatio()
  {
    return $this->cumulativeExplainedVarianceRatio;
  }
  public function setExplainedVariance($explainedVariance)
  {
    $this->explainedVariance = $explainedVariance;
  }
  public function getExplainedVariance()
  {
    return $this->explainedVariance;
  }
  public function setExplainedVarianceRatio($explainedVarianceRatio)
  {
    $this->explainedVarianceRatio = $explainedVarianceRatio;
  }
  public function getExplainedVarianceRatio()
  {
    return $this->explainedVarianceRatio;
  }
  /** @param string */
  public function setPrincipalComponentId($principalComponentId)
  {
    $this->principalComponentId = $principalComponentId;
  }
  /** @return string */
  public function getPrincipalComponentId()
  {
    return $this->principalComponentId;
  }
}

class ProjectList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var ProjectListProjects[] */
  public $projects;
  /** @var int */
  public $totalItems;
  protected $collection_key = 'projects';
  protected $projectsType = ProjectListProjects::class;
  protected $projectsDataType = 'array';
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
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param ProjectListProjects[] */
  public function setProjects($projects)
  {
    $this->projects = $projects;
  }
  /** @return ProjectListProjects[] */
  public function getProjects()
  {
    return $this->projects;
  }
  /** @param int */
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class ProjectListProjects extends \Google\Model
{
  /** @var string */
  public $friendlyName;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $numericId;
  /** @var ProjectReference */
  public $projectReference;
  protected $projectReferenceType = ProjectReference::class;
  protected $projectReferenceDataType = '';
  /** @param string */
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /** @return string */
  public function getFriendlyName()
  {
    return $this->friendlyName;
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
  public function setNumericId($numericId)
  {
    $this->numericId = $numericId;
  }
  /** @return string */
  public function getNumericId()
  {
    return $this->numericId;
  }
  /** @param ProjectReference */
  public function setProjectReference(ProjectReference $projectReference)
  {
    $this->projectReference = $projectReference;
  }
  /** @return ProjectReference */
  public function getProjectReference()
  {
    return $this->projectReference;
  }
}

class ProjectReference extends \Google\Model
{
  /** @var string */
  public $projectId;

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

class QueryParameter extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var QueryParameterType */
  public $parameterType;
  /** @var QueryParameterValue */
  public $parameterValue;
  protected $parameterTypeType = QueryParameterType::class;
  protected $parameterTypeDataType = '';
  protected $parameterValueType = QueryParameterValue::class;
  protected $parameterValueDataType = '';
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
  /** @param QueryParameterType */
  public function setParameterType(QueryParameterType $parameterType)
  {
    $this->parameterType = $parameterType;
  }
  /** @return QueryParameterType */
  public function getParameterType()
  {
    return $this->parameterType;
  }
  /** @param QueryParameterValue */
  public function setParameterValue(QueryParameterValue $parameterValue)
  {
    $this->parameterValue = $parameterValue;
  }
  /** @return QueryParameterValue */
  public function getParameterValue()
  {
    return $this->parameterValue;
  }
}

class QueryParameterType extends \Google\Collection
{
  /** @var QueryParameterType */
  public $arrayType;
  /** @var QueryParameterTypeStructTypes[] */
  public $structTypes;
  /** @var string */
  public $type;
  protected $collection_key = 'structTypes';
  protected $arrayTypeType = QueryParameterType::class;
  protected $arrayTypeDataType = '';
  protected $structTypesType = QueryParameterTypeStructTypes::class;
  protected $structTypesDataType = 'array';
  /** @param QueryParameterType */
  public function setArrayType(QueryParameterType $arrayType)
  {
    $this->arrayType = $arrayType;
  }
  /** @return QueryParameterType */
  public function getArrayType()
  {
    return $this->arrayType;
  }
  /** @param QueryParameterTypeStructTypes[] */
  public function setStructTypes($structTypes)
  {
    $this->structTypes = $structTypes;
  }
  /** @return QueryParameterTypeStructTypes[] */
  public function getStructTypes()
  {
    return $this->structTypes;
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

class QueryParameterTypeStructTypes extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var QueryParameterType */
  public $type;
  protected $typeType = QueryParameterType::class;
  protected $typeDataType = '';
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
  /** @param QueryParameterType */
  public function setType(QueryParameterType $type)
  {
    $this->type = $type;
  }
  /** @return QueryParameterType */
  public function getType()
  {
    return $this->type;
  }
}

class QueryParameterValue extends \Google\Collection
{
  /** @var QueryParameterValue[] */
  public $arrayValues;
  /** @var QueryParameterValue[] */
  public $structValues;
  /** @var string */
  public $value;
  protected $collection_key = 'arrayValues';
  protected $arrayValuesType = QueryParameterValue::class;
  protected $arrayValuesDataType = 'array';
  protected $structValuesType = QueryParameterValue::class;
  protected $structValuesDataType = 'map';
  /** @param QueryParameterValue[] */
  public function setArrayValues($arrayValues)
  {
    $this->arrayValues = $arrayValues;
  }
  /** @return QueryParameterValue[] */
  public function getArrayValues()
  {
    return $this->arrayValues;
  }
  /** @param QueryParameterValue[] */
  public function setStructValues($structValues)
  {
    $this->structValues = $structValues;
  }
  /** @return QueryParameterValue[] */
  public function getStructValues()
  {
    return $this->structValues;
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

class QueryRequest extends \Google\Collection
{
  /** @var ConnectionProperty[] */
  public $connectionProperties;
  /** @var bool */
  public $createSession;
  /** @var DatasetReference */
  public $defaultDataset;
  /** @var bool */
  public $dryRun;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $location;
  /** @var string */
  public $maxResults;
  /** @var string */
  public $maximumBytesBilled;
  /** @var string */
  public $parameterMode;
  /** @var bool */
  public $preserveNulls;
  /** @var string */
  public $query;
  /** @var QueryParameter[] */
  public $queryParameters;
  /** @var string */
  public $requestId;
  /** @var string */
  public $timeoutMs;
  /** @var bool */
  public $useLegacySql;
  /** @var bool */
  public $useQueryCache;
  protected $collection_key = 'queryParameters';
  protected $connectionPropertiesType = ConnectionProperty::class;
  protected $connectionPropertiesDataType = 'array';
  protected $defaultDatasetType = DatasetReference::class;
  protected $defaultDatasetDataType = '';
  protected $queryParametersType = QueryParameter::class;
  protected $queryParametersDataType = 'array';
  /** @param ConnectionProperty[] */
  public function setConnectionProperties($connectionProperties)
  {
    $this->connectionProperties = $connectionProperties;
  }
  /** @return ConnectionProperty[] */
  public function getConnectionProperties()
  {
    return $this->connectionProperties;
  }
  /** @param bool */
  public function setCreateSession($createSession)
  {
    $this->createSession = $createSession;
  }
  /** @return bool */
  public function getCreateSession()
  {
    return $this->createSession;
  }
  /** @param DatasetReference */
  public function setDefaultDataset(DatasetReference $defaultDataset)
  {
    $this->defaultDataset = $defaultDataset;
  }
  /** @return DatasetReference */
  public function getDefaultDataset()
  {
    return $this->defaultDataset;
  }
  /** @param bool */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /** @return bool */
  public function getDryRun()
  {
    return $this->dryRun;
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
  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }
  /** @return string */
  public function getMaxResults()
  {
    return $this->maxResults;
  }
  /** @param string */
  public function setMaximumBytesBilled($maximumBytesBilled)
  {
    $this->maximumBytesBilled = $maximumBytesBilled;
  }
  /** @return string */
  public function getMaximumBytesBilled()
  {
    return $this->maximumBytesBilled;
  }
  /** @param string */
  public function setParameterMode($parameterMode)
  {
    $this->parameterMode = $parameterMode;
  }
  /** @return string */
  public function getParameterMode()
  {
    return $this->parameterMode;
  }
  /** @param bool */
  public function setPreserveNulls($preserveNulls)
  {
    $this->preserveNulls = $preserveNulls;
  }
  /** @return bool */
  public function getPreserveNulls()
  {
    return $this->preserveNulls;
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
  /** @param QueryParameter[] */
  public function setQueryParameters($queryParameters)
  {
    $this->queryParameters = $queryParameters;
  }
  /** @return QueryParameter[] */
  public function getQueryParameters()
  {
    return $this->queryParameters;
  }
  /** @param string */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /** @return string */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /** @param string */
  public function setTimeoutMs($timeoutMs)
  {
    $this->timeoutMs = $timeoutMs;
  }
  /** @return string */
  public function getTimeoutMs()
  {
    return $this->timeoutMs;
  }
  /** @param bool */
  public function setUseLegacySql($useLegacySql)
  {
    $this->useLegacySql = $useLegacySql;
  }
  /** @return bool */
  public function getUseLegacySql()
  {
    return $this->useLegacySql;
  }
  /** @param bool */
  public function setUseQueryCache($useQueryCache)
  {
    $this->useQueryCache = $useQueryCache;
  }
  /** @return bool */
  public function getUseQueryCache()
  {
    return $this->useQueryCache;
  }
}

class QueryResponse extends \Google\Collection
{
  /** @var bool */
  public $cacheHit;
  /** @var DmlStatistics */
  public $dmlStats;
  /** @var ErrorProto[] */
  public $errors;
  /** @var bool */
  public $jobComplete;
  /** @var JobReference */
  public $jobReference;
  /** @var string */
  public $kind;
  /** @var string */
  public $numDmlAffectedRows;
  /** @var string */
  public $pageToken;
  /** @var TableRow[] */
  public $rows;
  /** @var TableSchema */
  public $schema;
  /** @var SessionInfo */
  public $sessionInfo;
  /** @var string */
  public $totalBytesProcessed;
  /** @var string */
  public $totalRows;
  protected $collection_key = 'rows';
  protected $dmlStatsType = DmlStatistics::class;
  protected $dmlStatsDataType = '';
  protected $errorsType = ErrorProto::class;
  protected $errorsDataType = 'array';
  protected $jobReferenceType = JobReference::class;
  protected $jobReferenceDataType = '';
  protected $rowsType = TableRow::class;
  protected $rowsDataType = 'array';
  protected $schemaType = TableSchema::class;
  protected $schemaDataType = '';
  protected $sessionInfoType = SessionInfo::class;
  protected $sessionInfoDataType = '';
  /** @param bool */
  public function setCacheHit($cacheHit)
  {
    $this->cacheHit = $cacheHit;
  }
  /** @return bool */
  public function getCacheHit()
  {
    return $this->cacheHit;
  }
  /** @param DmlStatistics */
  public function setDmlStats(DmlStatistics $dmlStats)
  {
    $this->dmlStats = $dmlStats;
  }
  /** @return DmlStatistics */
  public function getDmlStats()
  {
    return $this->dmlStats;
  }
  /** @param ErrorProto[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ErrorProto[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param bool */
  public function setJobComplete($jobComplete)
  {
    $this->jobComplete = $jobComplete;
  }
  /** @return bool */
  public function getJobComplete()
  {
    return $this->jobComplete;
  }
  /** @param JobReference */
  public function setJobReference(JobReference $jobReference)
  {
    $this->jobReference = $jobReference;
  }
  /** @return JobReference */
  public function getJobReference()
  {
    return $this->jobReference;
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
  public function setNumDmlAffectedRows($numDmlAffectedRows)
  {
    $this->numDmlAffectedRows = $numDmlAffectedRows;
  }
  /** @return string */
  public function getNumDmlAffectedRows()
  {
    return $this->numDmlAffectedRows;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param TableRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return TableRow[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param TableSchema */
  public function setSchema(TableSchema $schema)
  {
    $this->schema = $schema;
  }
  /** @return TableSchema */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param SessionInfo */
  public function setSessionInfo(SessionInfo $sessionInfo)
  {
    $this->sessionInfo = $sessionInfo;
  }
  /** @return SessionInfo */
  public function getSessionInfo()
  {
    return $this->sessionInfo;
  }
  /** @param string */
  public function setTotalBytesProcessed($totalBytesProcessed)
  {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }
  /** @return string */
  public function getTotalBytesProcessed()
  {
    return $this->totalBytesProcessed;
  }
  /** @param string */
  public function setTotalRows($totalRows)
  {
    $this->totalRows = $totalRows;
  }
  /** @return string */
  public function getTotalRows()
  {
    return $this->totalRows;
  }
}

class QueryTimelineSample extends \Google\Model
{
  /** @var string */
  public $activeUnits;
  /** @var string */
  public $completedUnits;
  /** @var string */
  public $elapsedMs;
  /** @var string */
  public $estimatedRunnableUnits;
  /** @var string */
  public $pendingUnits;
  /** @var string */
  public $totalSlotMs;

  /** @param string */
  public function setActiveUnits($activeUnits)
  {
    $this->activeUnits = $activeUnits;
  }
  /** @return string */
  public function getActiveUnits()
  {
    return $this->activeUnits;
  }
  /** @param string */
  public function setCompletedUnits($completedUnits)
  {
    $this->completedUnits = $completedUnits;
  }
  /** @return string */
  public function getCompletedUnits()
  {
    return $this->completedUnits;
  }
  /** @param string */
  public function setElapsedMs($elapsedMs)
  {
    $this->elapsedMs = $elapsedMs;
  }
  /** @return string */
  public function getElapsedMs()
  {
    return $this->elapsedMs;
  }
  /** @param string */
  public function setEstimatedRunnableUnits($estimatedRunnableUnits)
  {
    $this->estimatedRunnableUnits = $estimatedRunnableUnits;
  }
  /** @return string */
  public function getEstimatedRunnableUnits()
  {
    return $this->estimatedRunnableUnits;
  }
  /** @param string */
  public function setPendingUnits($pendingUnits)
  {
    $this->pendingUnits = $pendingUnits;
  }
  /** @return string */
  public function getPendingUnits()
  {
    return $this->pendingUnits;
  }
  /** @param string */
  public function setTotalSlotMs($totalSlotMs)
  {
    $this->totalSlotMs = $totalSlotMs;
  }
  /** @return string */
  public function getTotalSlotMs()
  {
    return $this->totalSlotMs;
  }
}

class RangePartitioning extends \Google\Model
{
  /** @var string */
  public $field;
  /** @var RangePartitioningRange */
  public $range;
  protected $rangeType = RangePartitioningRange::class;
  protected $rangeDataType = '';
  /** @param string */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param RangePartitioningRange */
  public function setRange(RangePartitioningRange $range)
  {
    $this->range = $range;
  }
  /** @return RangePartitioningRange */
  public function getRange()
  {
    return $this->range;
  }
}

class RangePartitioningRange extends \Google\Model
{
  /** @var string */
  public $end;
  /** @var string */
  public $interval;
  /** @var string */
  public $start;

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
  public function setInterval($interval)
  {
    $this->interval = $interval;
  }
  /** @return string */
  public function getInterval()
  {
    return $this->interval;
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

class RankingMetrics extends \Google\Model
{
  public $averageRank;
  public $meanAveragePrecision;
  public $meanSquaredError;
  public $normalizedDiscountedCumulativeGain;

  public function setAverageRank($averageRank)
  {
    $this->averageRank = $averageRank;
  }
  public function getAverageRank()
  {
    return $this->averageRank;
  }
  public function setMeanAveragePrecision($meanAveragePrecision)
  {
    $this->meanAveragePrecision = $meanAveragePrecision;
  }
  public function getMeanAveragePrecision()
  {
    return $this->meanAveragePrecision;
  }
  public function setMeanSquaredError($meanSquaredError)
  {
    $this->meanSquaredError = $meanSquaredError;
  }
  public function getMeanSquaredError()
  {
    return $this->meanSquaredError;
  }
  public function setNormalizedDiscountedCumulativeGain($normalizedDiscountedCumulativeGain)
  {
    $this->normalizedDiscountedCumulativeGain = $normalizedDiscountedCumulativeGain;
  }
  public function getNormalizedDiscountedCumulativeGain()
  {
    return $this->normalizedDiscountedCumulativeGain;
  }
}

class RegressionMetrics extends \Google\Model
{
  public $meanAbsoluteError;
  public $meanSquaredError;
  public $meanSquaredLogError;
  public $medianAbsoluteError;
  public $rSquared;

  public function setMeanAbsoluteError($meanAbsoluteError)
  {
    $this->meanAbsoluteError = $meanAbsoluteError;
  }
  public function getMeanAbsoluteError()
  {
    return $this->meanAbsoluteError;
  }
  public function setMeanSquaredError($meanSquaredError)
  {
    $this->meanSquaredError = $meanSquaredError;
  }
  public function getMeanSquaredError()
  {
    return $this->meanSquaredError;
  }
  public function setMeanSquaredLogError($meanSquaredLogError)
  {
    $this->meanSquaredLogError = $meanSquaredLogError;
  }
  public function getMeanSquaredLogError()
  {
    return $this->meanSquaredLogError;
  }
  public function setMedianAbsoluteError($medianAbsoluteError)
  {
    $this->medianAbsoluteError = $medianAbsoluteError;
  }
  public function getMedianAbsoluteError()
  {
    return $this->medianAbsoluteError;
  }
  public function setRSquared($rSquared)
  {
    $this->rSquared = $rSquared;
  }
  public function getRSquared()
  {
    return $this->rSquared;
  }
}

class RemoteFunctionOptions extends \Google\Model
{
  /** @var string */
  public $connection;
  /** @var string */
  public $endpoint;
  /** @var string */
  public $maxBatchingRows;
  /** @var string[] */
  public $userDefinedContext;

  /** @param string */
  public function setConnection($connection)
  {
    $this->connection = $connection;
  }
  /** @return string */
  public function getConnection()
  {
    return $this->connection;
  }
  /** @param string */
  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /** @return string */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /** @param string */
  public function setMaxBatchingRows($maxBatchingRows)
  {
    $this->maxBatchingRows = $maxBatchingRows;
  }
  /** @return string */
  public function getMaxBatchingRows()
  {
    return $this->maxBatchingRows;
  }
  /** @param string[] */
  public function setUserDefinedContext($userDefinedContext)
  {
    $this->userDefinedContext = $userDefinedContext;
  }
  /** @return string[] */
  public function getUserDefinedContext()
  {
    return $this->userDefinedContext;
  }
}

class Routine extends \Google\Collection
{
  /** @var Argument[] */
  public $arguments;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $definitionBody;
  /** @var string */
  public $description;
  /** @var string */
  public $determinismLevel;
  /** @var string */
  public $etag;
  /** @var string[] */
  public $importedLibraries;
  /** @var string */
  public $language;
  /** @var string */
  public $lastModifiedTime;
  /** @var RemoteFunctionOptions */
  public $remoteFunctionOptions;
  /** @var StandardSqlTableType */
  public $returnTableType;
  /** @var StandardSqlDataType */
  public $returnType;
  /** @var RoutineReference */
  public $routineReference;
  /** @var string */
  public $routineType;
  /** @var SparkOptions */
  public $sparkOptions;
  /** @var bool */
  public $strictMode;
  protected $collection_key = 'importedLibraries';
  protected $argumentsType = Argument::class;
  protected $argumentsDataType = 'array';
  protected $remoteFunctionOptionsType = RemoteFunctionOptions::class;
  protected $remoteFunctionOptionsDataType = '';
  protected $returnTableTypeType = StandardSqlTableType::class;
  protected $returnTableTypeDataType = '';
  protected $returnTypeType = StandardSqlDataType::class;
  protected $returnTypeDataType = '';
  protected $routineReferenceType = RoutineReference::class;
  protected $routineReferenceDataType = '';
  protected $sparkOptionsType = SparkOptions::class;
  protected $sparkOptionsDataType = '';
  /** @param Argument[] */
  public function setArguments($arguments)
  {
    $this->arguments = $arguments;
  }
  /** @return Argument[] */
  public function getArguments()
  {
    return $this->arguments;
  }
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
  public function setDefinitionBody($definitionBody)
  {
    $this->definitionBody = $definitionBody;
  }
  /** @return string */
  public function getDefinitionBody()
  {
    return $this->definitionBody;
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
  public function setDeterminismLevel($determinismLevel)
  {
    $this->determinismLevel = $determinismLevel;
  }
  /** @return string */
  public function getDeterminismLevel()
  {
    return $this->determinismLevel;
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
  public function setImportedLibraries($importedLibraries)
  {
    $this->importedLibraries = $importedLibraries;
  }
  /** @return string[] */
  public function getImportedLibraries()
  {
    return $this->importedLibraries;
  }
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
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  /** @param RemoteFunctionOptions */
  public function setRemoteFunctionOptions(RemoteFunctionOptions $remoteFunctionOptions)
  {
    $this->remoteFunctionOptions = $remoteFunctionOptions;
  }
  /** @return RemoteFunctionOptions */
  public function getRemoteFunctionOptions()
  {
    return $this->remoteFunctionOptions;
  }
  /** @param StandardSqlTableType */
  public function setReturnTableType(StandardSqlTableType $returnTableType)
  {
    $this->returnTableType = $returnTableType;
  }
  /** @return StandardSqlTableType */
  public function getReturnTableType()
  {
    return $this->returnTableType;
  }
  /** @param StandardSqlDataType */
  public function setReturnType(StandardSqlDataType $returnType)
  {
    $this->returnType = $returnType;
  }
  /** @return StandardSqlDataType */
  public function getReturnType()
  {
    return $this->returnType;
  }
  /** @param RoutineReference */
  public function setRoutineReference(RoutineReference $routineReference)
  {
    $this->routineReference = $routineReference;
  }
  /** @return RoutineReference */
  public function getRoutineReference()
  {
    return $this->routineReference;
  }
  /** @param string */
  public function setRoutineType($routineType)
  {
    $this->routineType = $routineType;
  }
  /** @return string */
  public function getRoutineType()
  {
    return $this->routineType;
  }
  /** @param SparkOptions */
  public function setSparkOptions(SparkOptions $sparkOptions)
  {
    $this->sparkOptions = $sparkOptions;
  }
  /** @return SparkOptions */
  public function getSparkOptions()
  {
    return $this->sparkOptions;
  }
  /** @param bool */
  public function setStrictMode($strictMode)
  {
    $this->strictMode = $strictMode;
  }
  /** @return bool */
  public function getStrictMode()
  {
    return $this->strictMode;
  }
}

class RoutineReference extends \Google\Model
{
  /** @var string */
  public $datasetId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $routineId;

  /** @param string */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /** @return string */
  public function getDatasetId()
  {
    return $this->datasetId;
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
  public function setRoutineId($routineId)
  {
    $this->routineId = $routineId;
  }
  /** @return string */
  public function getRoutineId()
  {
    return $this->routineId;
  }
}

class Row extends \Google\Collection
{
  /** @var string */
  public $actualLabel;
  /** @var Entry[] */
  public $entries;
  protected $collection_key = 'entries';
  protected $entriesType = Entry::class;
  protected $entriesDataType = 'array';
  /** @param string */
  public function setActualLabel($actualLabel)
  {
    $this->actualLabel = $actualLabel;
  }
  /** @return string */
  public function getActualLabel()
  {
    return $this->actualLabel;
  }
  /** @param Entry[] */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /** @return Entry[] */
  public function getEntries()
  {
    return $this->entries;
  }
}

class RowAccessPolicy extends \Google\Model
{
  /** @var string */
  public $creationTime;
  /** @var string */
  public $etag;
  /** @var string */
  public $filterPredicate;
  /** @var string */
  public $lastModifiedTime;
  /** @var RowAccessPolicyReference */
  public $rowAccessPolicyReference;
  protected $rowAccessPolicyReferenceType = RowAccessPolicyReference::class;
  protected $rowAccessPolicyReferenceDataType = '';
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
  public function setFilterPredicate($filterPredicate)
  {
    $this->filterPredicate = $filterPredicate;
  }
  /** @return string */
  public function getFilterPredicate()
  {
    return $this->filterPredicate;
  }
  /** @param string */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  /** @param RowAccessPolicyReference */
  public function setRowAccessPolicyReference(RowAccessPolicyReference $rowAccessPolicyReference)
  {
    $this->rowAccessPolicyReference = $rowAccessPolicyReference;
  }
  /** @return RowAccessPolicyReference */
  public function getRowAccessPolicyReference()
  {
    return $this->rowAccessPolicyReference;
  }
}

class RowAccessPolicyReference extends \Google\Model
{
  /** @var string */
  public $datasetId;
  /** @var string */
  public $policyId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $tableId;

  /** @param string */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /** @return string */
  public function getDatasetId()
  {
    return $this->datasetId;
  }
  /** @param string */
  public function setPolicyId($policyId)
  {
    $this->policyId = $policyId;
  }
  /** @return string */
  public function getPolicyId()
  {
    return $this->policyId;
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

class RowLevelSecurityStatistics extends \Google\Model
{
  /** @var bool */
  public $rowLevelSecurityApplied;

  /** @param bool */
  public function setRowLevelSecurityApplied($rowLevelSecurityApplied)
  {
    $this->rowLevelSecurityApplied = $rowLevelSecurityApplied;
  }
  /** @return bool */
  public function getRowLevelSecurityApplied()
  {
    return $this->rowLevelSecurityApplied;
  }
}

class ScriptStackFrame extends \Google\Model
{
  /** @var int */
  public $endColumn;
  /** @var int */
  public $endLine;
  /** @var string */
  public $procedureId;
  /** @var int */
  public $startColumn;
  /** @var int */
  public $startLine;
  /** @var string */
  public $text;

  /** @param int */
  public function setEndColumn($endColumn)
  {
    $this->endColumn = $endColumn;
  }
  /** @return int */
  public function getEndColumn()
  {
    return $this->endColumn;
  }
  /** @param int */
  public function setEndLine($endLine)
  {
    $this->endLine = $endLine;
  }
  /** @return int */
  public function getEndLine()
  {
    return $this->endLine;
  }
  /** @param string */
  public function setProcedureId($procedureId)
  {
    $this->procedureId = $procedureId;
  }
  /** @return string */
  public function getProcedureId()
  {
    return $this->procedureId;
  }
  /** @param int */
  public function setStartColumn($startColumn)
  {
    $this->startColumn = $startColumn;
  }
  /** @return int */
  public function getStartColumn()
  {
    return $this->startColumn;
  }
  /** @param int */
  public function setStartLine($startLine)
  {
    $this->startLine = $startLine;
  }
  /** @return int */
  public function getStartLine()
  {
    return $this->startLine;
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

class ScriptStatistics extends \Google\Collection
{
  /** @var string */
  public $evaluationKind;
  /** @var ScriptStackFrame[] */
  public $stackFrames;
  protected $collection_key = 'stackFrames';
  protected $stackFramesType = ScriptStackFrame::class;
  protected $stackFramesDataType = 'array';
  /** @param string */
  public function setEvaluationKind($evaluationKind)
  {
    $this->evaluationKind = $evaluationKind;
  }
  /** @return string */
  public function getEvaluationKind()
  {
    return $this->evaluationKind;
  }
  /** @param ScriptStackFrame[] */
  public function setStackFrames($stackFrames)
  {
    $this->stackFrames = $stackFrames;
  }
  /** @return ScriptStackFrame[] */
  public function getStackFrames()
  {
    return $this->stackFrames;
  }
}

class SearchStatistics extends \Google\Collection
{
  /** @var IndexUnusedReason[] */
  public $indexUnusedReason;
  /** @var string */
  public $indexUsageMode;
  protected $collection_key = 'indexUnusedReason';
  protected $indexUnusedReasonType = IndexUnusedReason::class;
  protected $indexUnusedReasonDataType = 'array';
  /** @param IndexUnusedReason[] */
  public function setIndexUnusedReason($indexUnusedReason)
  {
    $this->indexUnusedReason = $indexUnusedReason;
  }
  /** @return IndexUnusedReason[] */
  public function getIndexUnusedReason()
  {
    return $this->indexUnusedReason;
  }
  /** @param string */
  public function setIndexUsageMode($indexUsageMode)
  {
    $this->indexUsageMode = $indexUsageMode;
  }
  /** @return string */
  public function getIndexUsageMode()
  {
    return $this->indexUsageMode;
  }
}

class SessionInfo extends \Google\Model
{
  /** @var string */
  public $sessionId;

  /** @param string */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /** @return string */
  public function getSessionId()
  {
    return $this->sessionId;
  }
}

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
  /** @var string */
  public $updateMask;
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

class SnapshotDefinition extends \Google\Model
{
  /** @var TableReference */
  public $baseTableReference;
  /** @var string */
  public $snapshotTime;
  protected $baseTableReferenceType = TableReference::class;
  protected $baseTableReferenceDataType = '';
  /** @param TableReference */
  public function setBaseTableReference(TableReference $baseTableReference)
  {
    $this->baseTableReference = $baseTableReference;
  }
  /** @return TableReference */
  public function getBaseTableReference()
  {
    return $this->baseTableReference;
  }
  /** @param string */
  public function setSnapshotTime($snapshotTime)
  {
    $this->snapshotTime = $snapshotTime;
  }
  /** @return string */
  public function getSnapshotTime()
  {
    return $this->snapshotTime;
  }
}

class SparkLoggingInfo extends \Google\Model
{
  /** @var string */
  public $projectId;
  /** @var string */
  public $resourceType;
  protected $internal_gapi_mappings = [
        "projectId" => "project_id",
        "resourceType" => "resource_type",
  ];
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
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

class SparkOptions extends \Google\Collection
{
  /** @var string[] */
  public $archiveUris;
  /** @var string */
  public $connection;
  /** @var string */
  public $containerImage;
  /** @var string[] */
  public $fileUris;
  /** @var string[] */
  public $jarUris;
  /** @var string */
  public $mainFileUri;
  /** @var string[] */
  public $properties;
  /** @var string[] */
  public $pyFileUris;
  /** @var string */
  public $runtimeVersion;
  protected $collection_key = 'pyFileUris';
  /** @param string[] */
  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  /** @return string[] */
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
  /** @param string */
  public function setConnection($connection)
  {
    $this->connection = $connection;
  }
  /** @return string */
  public function getConnection()
  {
    return $this->connection;
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
  /** @param string[] */
  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }
  /** @return string[] */
  public function getFileUris()
  {
    return $this->fileUris;
  }
  /** @param string[] */
  public function setJarUris($jarUris)
  {
    $this->jarUris = $jarUris;
  }
  /** @return string[] */
  public function getJarUris()
  {
    return $this->jarUris;
  }
  /** @param string */
  public function setMainFileUri($mainFileUri)
  {
    $this->mainFileUri = $mainFileUri;
  }
  /** @return string */
  public function getMainFileUri()
  {
    return $this->mainFileUri;
  }
  /** @param string[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return string[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param string[] */
  public function setPyFileUris($pyFileUris)
  {
    $this->pyFileUris = $pyFileUris;
  }
  /** @return string[] */
  public function getPyFileUris()
  {
    return $this->pyFileUris;
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

class SparkStatistics extends \Google\Model
{
  /** @var string[] */
  public $endpoints;
  /** @var SparkLoggingInfo */
  public $loggingInfo;
  /** @var string */
  public $sparkJobId;
  /** @var string */
  public $sparkJobLocation;
  protected $internal_gapi_mappings = [
        "loggingInfo" => "logging_info",
        "sparkJobId" => "spark_job_id",
        "sparkJobLocation" => "spark_job_location",
  ];
  protected $loggingInfoType = SparkLoggingInfo::class;
  protected $loggingInfoDataType = '';
  /** @param string[] */
  public function setEndpoints($endpoints)
  {
    $this->endpoints = $endpoints;
  }
  /** @return string[] */
  public function getEndpoints()
  {
    return $this->endpoints;
  }
  /** @param SparkLoggingInfo */
  public function setLoggingInfo(SparkLoggingInfo $loggingInfo)
  {
    $this->loggingInfo = $loggingInfo;
  }
  /** @return SparkLoggingInfo */
  public function getLoggingInfo()
  {
    return $this->loggingInfo;
  }
  /** @param string */
  public function setSparkJobId($sparkJobId)
  {
    $this->sparkJobId = $sparkJobId;
  }
  /** @return string */
  public function getSparkJobId()
  {
    return $this->sparkJobId;
  }
  /** @param string */
  public function setSparkJobLocation($sparkJobLocation)
  {
    $this->sparkJobLocation = $sparkJobLocation;
  }
  /** @return string */
  public function getSparkJobLocation()
  {
    return $this->sparkJobLocation;
  }
}

class StandardSqlDataType extends \Google\Model
{
  /** @var StandardSqlDataType */
  public $arrayElementType;
  /** @var StandardSqlStructType */
  public $structType;
  /** @var string */
  public $typeKind;
  protected $arrayElementTypeType = StandardSqlDataType::class;
  protected $arrayElementTypeDataType = '';
  protected $structTypeType = StandardSqlStructType::class;
  protected $structTypeDataType = '';
  /** @param StandardSqlDataType */
  public function setArrayElementType(StandardSqlDataType $arrayElementType)
  {
    $this->arrayElementType = $arrayElementType;
  }
  /** @return StandardSqlDataType */
  public function getArrayElementType()
  {
    return $this->arrayElementType;
  }
  /** @param StandardSqlStructType */
  public function setStructType(StandardSqlStructType $structType)
  {
    $this->structType = $structType;
  }
  /** @return StandardSqlStructType */
  public function getStructType()
  {
    return $this->structType;
  }
  /** @param string */
  public function setTypeKind($typeKind)
  {
    $this->typeKind = $typeKind;
  }
  /** @return string */
  public function getTypeKind()
  {
    return $this->typeKind;
  }
}

class StandardSqlField extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var StandardSqlDataType */
  public $type;
  protected $typeType = StandardSqlDataType::class;
  protected $typeDataType = '';
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
  /** @param StandardSqlDataType */
  public function setType(StandardSqlDataType $type)
  {
    $this->type = $type;
  }
  /** @return StandardSqlDataType */
  public function getType()
  {
    return $this->type;
  }
}

class StandardSqlStructType extends \Google\Collection
{
  /** @var StandardSqlField[] */
  public $fields;
  protected $collection_key = 'fields';
  protected $fieldsType = StandardSqlField::class;
  protected $fieldsDataType = 'array';
  /** @param StandardSqlField[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return StandardSqlField[] */
  public function getFields()
  {
    return $this->fields;
  }
}

class StandardSqlTableType extends \Google\Collection
{
  /** @var StandardSqlField[] */
  public $columns;
  protected $collection_key = 'columns';
  protected $columnsType = StandardSqlField::class;
  protected $columnsDataType = 'array';
  /** @param StandardSqlField[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return StandardSqlField[] */
  public function getColumns()
  {
    return $this->columns;
  }
}

class Streamingbuffer extends \Google\Model
{
  /** @var string */
  public $estimatedBytes;
  /** @var string */
  public $estimatedRows;
  /** @var string */
  public $oldestEntryTime;

  /** @param string */
  public function setEstimatedBytes($estimatedBytes)
  {
    $this->estimatedBytes = $estimatedBytes;
  }
  /** @return string */
  public function getEstimatedBytes()
  {
    return $this->estimatedBytes;
  }
  /** @param string */
  public function setEstimatedRows($estimatedRows)
  {
    $this->estimatedRows = $estimatedRows;
  }
  /** @return string */
  public function getEstimatedRows()
  {
    return $this->estimatedRows;
  }
  /** @param string */
  public function setOldestEntryTime($oldestEntryTime)
  {
    $this->oldestEntryTime = $oldestEntryTime;
  }
  /** @return string */
  public function getOldestEntryTime()
  {
    return $this->oldestEntryTime;
  }
}

class StringHparamSearchSpace extends \Google\Collection
{
  /** @var string[] */
  public $candidates;
  protected $collection_key = 'candidates';
  /** @param string[] */
  public function setCandidates($candidates)
  {
    $this->candidates = $candidates;
  }
  /** @return string[] */
  public function getCandidates()
  {
    return $this->candidates;
  }
}

class Table extends \Google\Model
{
  /** @var CloneDefinition */
  public $cloneDefinition;
  /** @var Clustering */
  public $clustering;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $defaultCollation;
  /** @var string */
  public $description;
  /** @var EncryptionConfiguration */
  public $encryptionConfiguration;
  /** @var string */
  public $etag;
  /** @var string */
  public $expirationTime;
  /** @var ExternalDataConfiguration */
  public $externalDataConfiguration;
  /** @var string */
  public $friendlyName;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $lastModifiedTime;
  /** @var string */
  public $location;
  /** @var MaterializedViewDefinition */
  public $materializedView;
  /** @var string */
  public $maxStaleness;
  /** @var ModelDefinition */
  public $model;
  /** @var string */
  public $numBytes;
  /** @var string */
  public $numLongTermBytes;
  /** @var string */
  public $numPhysicalBytes;
  /** @var string */
  public $numRows;
  /** @var string */
  public $numActiveLogicalBytes;
  /** @var string */
  public $numActivePhysicalBytes;
  /** @var string */
  public $numLongTermLogicalBytes;
  /** @var string */
  public $numLongTermPhysicalBytes;
  /** @var string */
  public $numPartitions;
  /** @var string */
  public $numTimeTravelPhysicalBytes;
  /** @var string */
  public $numTotalLogicalBytes;
  /** @var string */
  public $numTotalPhysicalBytes;
  /** @var RangePartitioning */
  public $rangePartitioning;
  /** @var bool */
  public $requirePartitionFilter;
  /** @var TableSchema */
  public $schema;
  /** @var string */
  public $selfLink;
  /** @var SnapshotDefinition */
  public $snapshotDefinition;
  /** @var Streamingbuffer */
  public $streamingBuffer;
  /** @var TableReference */
  public $tableReference;
  /** @var TimePartitioning */
  public $timePartitioning;
  /** @var string */
  public $type;
  /** @var ViewDefinition */
  public $view;
  protected $internal_gapi_mappings = [
        "numActiveLogicalBytes" => "num_active_logical_bytes",
        "numActivePhysicalBytes" => "num_active_physical_bytes",
        "numLongTermLogicalBytes" => "num_long_term_logical_bytes",
        "numLongTermPhysicalBytes" => "num_long_term_physical_bytes",
        "numPartitions" => "num_partitions",
        "numTimeTravelPhysicalBytes" => "num_time_travel_physical_bytes",
        "numTotalLogicalBytes" => "num_total_logical_bytes",
        "numTotalPhysicalBytes" => "num_total_physical_bytes",
  ];
  protected $cloneDefinitionType = CloneDefinition::class;
  protected $cloneDefinitionDataType = '';
  protected $clusteringType = Clustering::class;
  protected $clusteringDataType = '';
  protected $encryptionConfigurationType = EncryptionConfiguration::class;
  protected $encryptionConfigurationDataType = '';
  protected $externalDataConfigurationType = ExternalDataConfiguration::class;
  protected $externalDataConfigurationDataType = '';
  protected $materializedViewType = MaterializedViewDefinition::class;
  protected $materializedViewDataType = '';
  protected $modelType = ModelDefinition::class;
  protected $modelDataType = '';
  protected $rangePartitioningType = RangePartitioning::class;
  protected $rangePartitioningDataType = '';
  protected $schemaType = TableSchema::class;
  protected $schemaDataType = '';
  protected $snapshotDefinitionType = SnapshotDefinition::class;
  protected $snapshotDefinitionDataType = '';
  protected $streamingBufferType = Streamingbuffer::class;
  protected $streamingBufferDataType = '';
  protected $tableReferenceType = TableReference::class;
  protected $tableReferenceDataType = '';
  protected $timePartitioningType = TimePartitioning::class;
  protected $timePartitioningDataType = '';
  protected $viewType = ViewDefinition::class;
  protected $viewDataType = '';
  /** @param CloneDefinition */
  public function setCloneDefinition(CloneDefinition $cloneDefinition)
  {
    $this->cloneDefinition = $cloneDefinition;
  }
  /** @return CloneDefinition */
  public function getCloneDefinition()
  {
    return $this->cloneDefinition;
  }
  /** @param Clustering */
  public function setClustering(Clustering $clustering)
  {
    $this->clustering = $clustering;
  }
  /** @return Clustering */
  public function getClustering()
  {
    return $this->clustering;
  }
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
  public function setDefaultCollation($defaultCollation)
  {
    $this->defaultCollation = $defaultCollation;
  }
  /** @return string */
  public function getDefaultCollation()
  {
    return $this->defaultCollation;
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
  /** @param EncryptionConfiguration */
  public function setEncryptionConfiguration(EncryptionConfiguration $encryptionConfiguration)
  {
    $this->encryptionConfiguration = $encryptionConfiguration;
  }
  /** @return EncryptionConfiguration */
  public function getEncryptionConfiguration()
  {
    return $this->encryptionConfiguration;
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
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
  /** @param ExternalDataConfiguration */
  public function setExternalDataConfiguration(ExternalDataConfiguration $externalDataConfiguration)
  {
    $this->externalDataConfiguration = $externalDataConfiguration;
  }
  /** @return ExternalDataConfiguration */
  public function getExternalDataConfiguration()
  {
    return $this->externalDataConfiguration;
  }
  /** @param string */
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /** @return string */
  public function getFriendlyName()
  {
    return $this->friendlyName;
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
  /** @param string */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /** @return string */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
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
  /** @param MaterializedViewDefinition */
  public function setMaterializedView(MaterializedViewDefinition $materializedView)
  {
    $this->materializedView = $materializedView;
  }
  /** @return MaterializedViewDefinition */
  public function getMaterializedView()
  {
    return $this->materializedView;
  }
  /** @param string */
  public function setMaxStaleness($maxStaleness)
  {
    $this->maxStaleness = $maxStaleness;
  }
  /** @return string */
  public function getMaxStaleness()
  {
    return $this->maxStaleness;
  }
  /** @param ModelDefinition */
  public function setModel(ModelDefinition $model)
  {
    $this->model = $model;
  }
  /** @return ModelDefinition */
  public function getModel()
  {
    return $this->model;
  }
  /** @param string */
  public function setNumBytes($numBytes)
  {
    $this->numBytes = $numBytes;
  }
  /** @return string */
  public function getNumBytes()
  {
    return $this->numBytes;
  }
  /** @param string */
  public function setNumLongTermBytes($numLongTermBytes)
  {
    $this->numLongTermBytes = $numLongTermBytes;
  }
  /** @return string */
  public function getNumLongTermBytes()
  {
    return $this->numLongTermBytes;
  }
  /** @param string */
  public function setNumPhysicalBytes($numPhysicalBytes)
  {
    $this->numPhysicalBytes = $numPhysicalBytes;
  }
  /** @return string */
  public function getNumPhysicalBytes()
  {
    return $this->numPhysicalBytes;
  }
  /** @param string */
  public function setNumRows($numRows)
  {
    $this->numRows = $numRows;
  }
  /** @return string */
  public function getNumRows()
  {
    return $this->numRows;
  }
  /** @param string */
  public function setNumActiveLogicalBytes($numActiveLogicalBytes)
  {
    $this->numActiveLogicalBytes = $numActiveLogicalBytes;
  }
  /** @return string */
  public function getNumActiveLogicalBytes()
  {
    return $this->numActiveLogicalBytes;
  }
  /** @param string */
  public function setNumActivePhysicalBytes($numActivePhysicalBytes)
  {
    $this->numActivePhysicalBytes = $numActivePhysicalBytes;
  }
  /** @return string */
  public function getNumActivePhysicalBytes()
  {
    return $this->numActivePhysicalBytes;
  }
  /** @param string */
  public function setNumLongTermLogicalBytes($numLongTermLogicalBytes)
  {
    $this->numLongTermLogicalBytes = $numLongTermLogicalBytes;
  }
  /** @return string */
  public function getNumLongTermLogicalBytes()
  {
    return $this->numLongTermLogicalBytes;
  }
  /** @param string */
  public function setNumLongTermPhysicalBytes($numLongTermPhysicalBytes)
  {
    $this->numLongTermPhysicalBytes = $numLongTermPhysicalBytes;
  }
  /** @return string */
  public function getNumLongTermPhysicalBytes()
  {
    return $this->numLongTermPhysicalBytes;
  }
  /** @param string */
  public function setNumPartitions($numPartitions)
  {
    $this->numPartitions = $numPartitions;
  }
  /** @return string */
  public function getNumPartitions()
  {
    return $this->numPartitions;
  }
  /** @param string */
  public function setNumTimeTravelPhysicalBytes($numTimeTravelPhysicalBytes)
  {
    $this->numTimeTravelPhysicalBytes = $numTimeTravelPhysicalBytes;
  }
  /** @return string */
  public function getNumTimeTravelPhysicalBytes()
  {
    return $this->numTimeTravelPhysicalBytes;
  }
  /** @param string */
  public function setNumTotalLogicalBytes($numTotalLogicalBytes)
  {
    $this->numTotalLogicalBytes = $numTotalLogicalBytes;
  }
  /** @return string */
  public function getNumTotalLogicalBytes()
  {
    return $this->numTotalLogicalBytes;
  }
  /** @param string */
  public function setNumTotalPhysicalBytes($numTotalPhysicalBytes)
  {
    $this->numTotalPhysicalBytes = $numTotalPhysicalBytes;
  }
  /** @return string */
  public function getNumTotalPhysicalBytes()
  {
    return $this->numTotalPhysicalBytes;
  }
  /** @param RangePartitioning */
  public function setRangePartitioning(RangePartitioning $rangePartitioning)
  {
    $this->rangePartitioning = $rangePartitioning;
  }
  /** @return RangePartitioning */
  public function getRangePartitioning()
  {
    return $this->rangePartitioning;
  }
  /** @param bool */
  public function setRequirePartitionFilter($requirePartitionFilter)
  {
    $this->requirePartitionFilter = $requirePartitionFilter;
  }
  /** @return bool */
  public function getRequirePartitionFilter()
  {
    return $this->requirePartitionFilter;
  }
  /** @param TableSchema */
  public function setSchema(TableSchema $schema)
  {
    $this->schema = $schema;
  }
  /** @return TableSchema */
  public function getSchema()
  {
    return $this->schema;
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
  /** @param SnapshotDefinition */
  public function setSnapshotDefinition(SnapshotDefinition $snapshotDefinition)
  {
    $this->snapshotDefinition = $snapshotDefinition;
  }
  /** @return SnapshotDefinition */
  public function getSnapshotDefinition()
  {
    return $this->snapshotDefinition;
  }
  /** @param Streamingbuffer */
  public function setStreamingBuffer(Streamingbuffer $streamingBuffer)
  {
    $this->streamingBuffer = $streamingBuffer;
  }
  /** @return Streamingbuffer */
  public function getStreamingBuffer()
  {
    return $this->streamingBuffer;
  }
  /** @param TableReference */
  public function setTableReference(TableReference $tableReference)
  {
    $this->tableReference = $tableReference;
  }
  /** @return TableReference */
  public function getTableReference()
  {
    return $this->tableReference;
  }
  /** @param TimePartitioning */
  public function setTimePartitioning(TimePartitioning $timePartitioning)
  {
    $this->timePartitioning = $timePartitioning;
  }
  /** @return TimePartitioning */
  public function getTimePartitioning()
  {
    return $this->timePartitioning;
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
  /** @param ViewDefinition */
  public function setView(ViewDefinition $view)
  {
    $this->view = $view;
  }
  /** @return ViewDefinition */
  public function getView()
  {
    return $this->view;
  }
}

class TableCell extends \Google\Model
{
  /** @var array */
  public $v;

  /** @param array */
  public function setV($v)
  {
    $this->v = $v;
  }
  /** @return array */
  public function getV()
  {
    return $this->v;
  }
}

class TableDataInsertAllRequest extends \Google\Collection
{
  /** @var bool */
  public $ignoreUnknownValues;
  /** @var string */
  public $kind;
  /** @var TableDataInsertAllRequestRows[] */
  public $rows;
  /** @var bool */
  public $skipInvalidRows;
  /** @var string */
  public $templateSuffix;
  protected $collection_key = 'rows';
  protected $rowsType = TableDataInsertAllRequestRows::class;
  protected $rowsDataType = 'array';
  /** @param bool */
  public function setIgnoreUnknownValues($ignoreUnknownValues)
  {
    $this->ignoreUnknownValues = $ignoreUnknownValues;
  }
  /** @return bool */
  public function getIgnoreUnknownValues()
  {
    return $this->ignoreUnknownValues;
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
  /** @param TableDataInsertAllRequestRows[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return TableDataInsertAllRequestRows[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param bool */
  public function setSkipInvalidRows($skipInvalidRows)
  {
    $this->skipInvalidRows = $skipInvalidRows;
  }
  /** @return bool */
  public function getSkipInvalidRows()
  {
    return $this->skipInvalidRows;
  }
  /** @param string */
  public function setTemplateSuffix($templateSuffix)
  {
    $this->templateSuffix = $templateSuffix;
  }
  /** @return string */
  public function getTemplateSuffix()
  {
    return $this->templateSuffix;
  }
}

class TableDataInsertAllRequestRows extends \Google\Model
{
  /** @var string */
  public $insertId;
  /** @var array[] */
  public $json;

  /** @param string */
  public function setInsertId($insertId)
  {
    $this->insertId = $insertId;
  }
  /** @return string */
  public function getInsertId()
  {
    return $this->insertId;
  }
  /** @param array[] */
  public function setJson($json)
  {
    $this->json = $json;
  }
  /** @return array[] */
  public function getJson()
  {
    return $this->json;
  }
}

class TableDataInsertAllResponse extends \Google\Collection
{
  /** @var TableDataInsertAllResponseInsertErrors[] */
  public $insertErrors;
  /** @var string */
  public $kind;
  protected $collection_key = 'insertErrors';
  protected $insertErrorsType = TableDataInsertAllResponseInsertErrors::class;
  protected $insertErrorsDataType = 'array';
  /** @param TableDataInsertAllResponseInsertErrors[] */
  public function setInsertErrors($insertErrors)
  {
    $this->insertErrors = $insertErrors;
  }
  /** @return TableDataInsertAllResponseInsertErrors[] */
  public function getInsertErrors()
  {
    return $this->insertErrors;
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

class TableDataInsertAllResponseInsertErrors extends \Google\Collection
{
  /** @var ErrorProto[] */
  public $errors;
  /** @var string */
  public $index;
  protected $collection_key = 'errors';
  protected $errorsType = ErrorProto::class;
  protected $errorsDataType = 'array';
  /** @param ErrorProto[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return ErrorProto[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param string */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return string */
  public function getIndex()
  {
    return $this->index;
  }
}

class TableDataList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $pageToken;
  /** @var TableRow[] */
  public $rows;
  /** @var string */
  public $totalRows;
  protected $collection_key = 'rows';
  protected $rowsType = TableRow::class;
  protected $rowsDataType = 'array';
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
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param TableRow[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return TableRow[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param string */
  public function setTotalRows($totalRows)
  {
    $this->totalRows = $totalRows;
  }
  /** @return string */
  public function getTotalRows()
  {
    return $this->totalRows;
  }
}

class TableFieldSchema extends \Google\Collection
{
  /** @var TableFieldSchemaCategories */
  public $categories;
  /** @var string */
  public $collation;
  /** @var string */
  public $defaultValueExpression;
  /** @var string */
  public $description;
  /** @var TableFieldSchema[] */
  public $fields;
  /** @var string */
  public $maxLength;
  /** @var string */
  public $mode;
  /** @var string */
  public $name;
  /** @var TableFieldSchemaPolicyTags */
  public $policyTags;
  /** @var string */
  public $precision;
  /** @var string */
  public $scale;
  /** @var string */
  public $type;
  protected $collection_key = 'fields';
  protected $categoriesType = TableFieldSchemaCategories::class;
  protected $categoriesDataType = '';
  protected $fieldsType = TableFieldSchema::class;
  protected $fieldsDataType = 'array';
  protected $policyTagsType = TableFieldSchemaPolicyTags::class;
  protected $policyTagsDataType = '';
  /** @param TableFieldSchemaCategories */
  public function setCategories(TableFieldSchemaCategories $categories)
  {
    $this->categories = $categories;
  }
  /** @return TableFieldSchemaCategories */
  public function getCategories()
  {
    return $this->categories;
  }
  /** @param string */
  public function setCollation($collation)
  {
    $this->collation = $collation;
  }
  /** @return string */
  public function getCollation()
  {
    return $this->collation;
  }
  /** @param string */
  public function setDefaultValueExpression($defaultValueExpression)
  {
    $this->defaultValueExpression = $defaultValueExpression;
  }
  /** @return string */
  public function getDefaultValueExpression()
  {
    return $this->defaultValueExpression;
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
  /** @param TableFieldSchema[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return TableFieldSchema[] */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param string */
  public function setMaxLength($maxLength)
  {
    $this->maxLength = $maxLength;
  }
  /** @return string */
  public function getMaxLength()
  {
    return $this->maxLength;
  }
  /** @param string */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /** @return string */
  public function getMode()
  {
    return $this->mode;
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
  /** @param TableFieldSchemaPolicyTags */
  public function setPolicyTags(TableFieldSchemaPolicyTags $policyTags)
  {
    $this->policyTags = $policyTags;
  }
  /** @return TableFieldSchemaPolicyTags */
  public function getPolicyTags()
  {
    return $this->policyTags;
  }
  /** @param string */
  public function setPrecision($precision)
  {
    $this->precision = $precision;
  }
  /** @return string */
  public function getPrecision()
  {
    return $this->precision;
  }
  /** @param string */
  public function setScale($scale)
  {
    $this->scale = $scale;
  }
  /** @return string */
  public function getScale()
  {
    return $this->scale;
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

class TableFieldSchemaCategories extends \Google\Collection
{
  /** @var string[] */
  public $names;
  protected $collection_key = 'names';
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

class TableFieldSchemaPolicyTags extends \Google\Collection
{
  /** @var string[] */
  public $names;
  protected $collection_key = 'names';
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

class TableList extends \Google\Collection
{
  /** @var string */
  public $etag;
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var TableListTables[] */
  public $tables;
  /** @var int */
  public $totalItems;
  protected $collection_key = 'tables';
  protected $tablesType = TableListTables::class;
  protected $tablesDataType = 'array';
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
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param TableListTables[] */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /** @return TableListTables[] */
  public function getTables()
  {
    return $this->tables;
  }
  /** @param int */
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class TableListTables extends \Google\Model
{
  /** @var Clustering */
  public $clustering;
  /** @var string */
  public $creationTime;
  /** @var string */
  public $expirationTime;
  /** @var string */
  public $friendlyName;
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string[] */
  public $labels;
  /** @var RangePartitioning */
  public $rangePartitioning;
  /** @var TableReference */
  public $tableReference;
  /** @var TimePartitioning */
  public $timePartitioning;
  /** @var string */
  public $type;
  /** @var TableListTablesView */
  public $view;
  protected $clusteringType = Clustering::class;
  protected $clusteringDataType = '';
  protected $rangePartitioningType = RangePartitioning::class;
  protected $rangePartitioningDataType = '';
  protected $tableReferenceType = TableReference::class;
  protected $tableReferenceDataType = '';
  protected $timePartitioningType = TimePartitioning::class;
  protected $timePartitioningDataType = '';
  protected $viewType = TableListTablesView::class;
  protected $viewDataType = '';
  /** @param Clustering */
  public function setClustering(Clustering $clustering)
  {
    $this->clustering = $clustering;
  }
  /** @return Clustering */
  public function getClustering()
  {
    return $this->clustering;
  }
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
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /** @return string */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
  /** @param string */
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /** @return string */
  public function getFriendlyName()
  {
    return $this->friendlyName;
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
  /** @param RangePartitioning */
  public function setRangePartitioning(RangePartitioning $rangePartitioning)
  {
    $this->rangePartitioning = $rangePartitioning;
  }
  /** @return RangePartitioning */
  public function getRangePartitioning()
  {
    return $this->rangePartitioning;
  }
  /** @param TableReference */
  public function setTableReference(TableReference $tableReference)
  {
    $this->tableReference = $tableReference;
  }
  /** @return TableReference */
  public function getTableReference()
  {
    return $this->tableReference;
  }
  /** @param TimePartitioning */
  public function setTimePartitioning(TimePartitioning $timePartitioning)
  {
    $this->timePartitioning = $timePartitioning;
  }
  /** @return TimePartitioning */
  public function getTimePartitioning()
  {
    return $this->timePartitioning;
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
  /** @param TableListTablesView */
  public function setView(TableListTablesView $view)
  {
    $this->view = $view;
  }
  /** @return TableListTablesView */
  public function getView()
  {
    return $this->view;
  }
}

class TableListTablesView extends \Google\Model
{
  /** @var bool */
  public $useLegacySql;

  /** @param bool */
  public function setUseLegacySql($useLegacySql)
  {
    $this->useLegacySql = $useLegacySql;
  }
  /** @return bool */
  public function getUseLegacySql()
  {
    return $this->useLegacySql;
  }
}

class TableReference extends \Google\Model
{
  /** @var string */
  public $datasetId;
  /** @var string */
  public $projectId;
  /** @var string */
  public $tableId;

  /** @param string */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /** @return string */
  public function getDatasetId()
  {
    return $this->datasetId;
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

class TableRow extends \Google\Collection
{
  /** @var TableCell[] */
  public $f;
  protected $collection_key = 'f';
  protected $fType = TableCell::class;
  protected $fDataType = 'array';
  /** @param TableCell[] */
  public function setF($f)
  {
    $this->f = $f;
  }
  /** @return TableCell[] */
  public function getF()
  {
    return $this->f;
  }
}

class TableSchema extends \Google\Collection
{
  /** @var TableFieldSchema[] */
  public $fields;
  protected $collection_key = 'fields';
  protected $fieldsType = TableFieldSchema::class;
  protected $fieldsDataType = 'array';
  /** @param TableFieldSchema[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return TableFieldSchema[] */
  public function getFields()
  {
    return $this->fields;
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

class TimePartitioning extends \Google\Model
{
  /** @var string */
  public $expirationMs;
  /** @var string */
  public $field;
  /** @var bool */
  public $requirePartitionFilter;
  /** @var string */
  public $type;

  /** @param string */
  public function setExpirationMs($expirationMs)
  {
    $this->expirationMs = $expirationMs;
  }
  /** @return string */
  public function getExpirationMs()
  {
    return $this->expirationMs;
  }
  /** @param string */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param bool */
  public function setRequirePartitionFilter($requirePartitionFilter)
  {
    $this->requirePartitionFilter = $requirePartitionFilter;
  }
  /** @return bool */
  public function getRequirePartitionFilter()
  {
    return $this->requirePartitionFilter;
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

class TrainingOptions extends \Google\Collection
{
  /** @var bool */
  public $adjustStepChanges;
  /** @var bool */
  public $autoArima;
  /** @var string */
  public $autoArimaMaxOrder;
  /** @var string */
  public $batchSize;
  /** @var string */
  public $boosterType;
  /** @var bool */
  public $calculatePValues;
  /** @var bool */
  public $cleanSpikesAndDips;
  /** @var string */
  public $colorSpace;
  public $colsampleBylevel;
  public $colsampleBynode;
  public $colsampleBytree;
  /** @var string */
  public $dartNormalizeType;
  /** @var string */
  public $dataFrequency;
  /** @var string */
  public $dataSplitColumn;
  public $dataSplitEvalFraction;
  /** @var string */
  public $dataSplitMethod;
  /** @var bool */
  public $decomposeTimeSeries;
  /** @var string */
  public $distanceType;
  public $dropout;
  /** @var bool */
  public $earlyStop;
  /** @var bool */
  public $enableGlobalExplain;
  /** @var string */
  public $feedbackType;
  /** @var string[] */
  public $hiddenUnits;
  /** @var string */
  public $holidayRegion;
  /** @var string */
  public $horizon;
  /** @var string[] */
  public $hparamTuningObjectives;
  /** @var bool */
  public $includeDrift;
  public $initialLearnRate;
  /** @var string[] */
  public $inputLabelColumns;
  /** @var string */
  public $integratedGradientsNumSteps;
  /** @var string */
  public $itemColumn;
  /** @var string */
  public $kmeansInitializationColumn;
  /** @var string */
  public $kmeansInitializationMethod;
  public $l1Regularization;
  public $l2Regularization;
  public $labelClassWeights;
  public $learnRate;
  /** @var string */
  public $learnRateStrategy;
  /** @var string */
  public $lossType;
  /** @var string */
  public $maxIterations;
  /** @var string */
  public $maxParallelTrials;
  /** @var string */
  public $maxTimeSeriesLength;
  /** @var string */
  public $maxTreeDepth;
  public $minRelativeProgress;
  public $minSplitLoss;
  /** @var string */
  public $minTimeSeriesLength;
  /** @var string */
  public $minTreeChildWeight;
  /** @var string */
  public $modelUri;
  /** @var ArimaOrder */
  public $nonSeasonalOrder;
  /** @var string */
  public $numClusters;
  /** @var string */
  public $numFactors;
  /** @var string */
  public $numParallelTree;
  /** @var string */
  public $numTrials;
  /** @var string */
  public $optimizationStrategy;
  /** @var bool */
  public $preserveInputStructs;
  /** @var string */
  public $sampledShapleyNumPaths;
  public $subsample;
  /** @var string */
  public $timeSeriesDataColumn;
  /** @var string */
  public $timeSeriesIdColumn;
  /** @var string[] */
  public $timeSeriesIdColumns;
  public $timeSeriesLengthFraction;
  /** @var string */
  public $timeSeriesTimestampColumn;
  /** @var string */
  public $treeMethod;
  /** @var string */
  public $trendSmoothingWindowSize;
  /** @var string */
  public $userColumn;
  public $walsAlpha;
  /** @var bool */
  public $warmStart;
  protected $collection_key = 'timeSeriesIdColumns';
  protected $nonSeasonalOrderType = ArimaOrder::class;
  protected $nonSeasonalOrderDataType = '';
  /** @param bool */
  public function setAdjustStepChanges($adjustStepChanges)
  {
    $this->adjustStepChanges = $adjustStepChanges;
  }
  /** @return bool */
  public function getAdjustStepChanges()
  {
    return $this->adjustStepChanges;
  }
  /** @param bool */
  public function setAutoArima($autoArima)
  {
    $this->autoArima = $autoArima;
  }
  /** @return bool */
  public function getAutoArima()
  {
    return $this->autoArima;
  }
  /** @param string */
  public function setAutoArimaMaxOrder($autoArimaMaxOrder)
  {
    $this->autoArimaMaxOrder = $autoArimaMaxOrder;
  }
  /** @return string */
  public function getAutoArimaMaxOrder()
  {
    return $this->autoArimaMaxOrder;
  }
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
  public function setBoosterType($boosterType)
  {
    $this->boosterType = $boosterType;
  }
  /** @return string */
  public function getBoosterType()
  {
    return $this->boosterType;
  }
  /** @param bool */
  public function setCalculatePValues($calculatePValues)
  {
    $this->calculatePValues = $calculatePValues;
  }
  /** @return bool */
  public function getCalculatePValues()
  {
    return $this->calculatePValues;
  }
  /** @param bool */
  public function setCleanSpikesAndDips($cleanSpikesAndDips)
  {
    $this->cleanSpikesAndDips = $cleanSpikesAndDips;
  }
  /** @return bool */
  public function getCleanSpikesAndDips()
  {
    return $this->cleanSpikesAndDips;
  }
  /** @param string */
  public function setColorSpace($colorSpace)
  {
    $this->colorSpace = $colorSpace;
  }
  /** @return string */
  public function getColorSpace()
  {
    return $this->colorSpace;
  }
  public function setColsampleBylevel($colsampleBylevel)
  {
    $this->colsampleBylevel = $colsampleBylevel;
  }
  public function getColsampleBylevel()
  {
    return $this->colsampleBylevel;
  }
  public function setColsampleBynode($colsampleBynode)
  {
    $this->colsampleBynode = $colsampleBynode;
  }
  public function getColsampleBynode()
  {
    return $this->colsampleBynode;
  }
  public function setColsampleBytree($colsampleBytree)
  {
    $this->colsampleBytree = $colsampleBytree;
  }
  public function getColsampleBytree()
  {
    return $this->colsampleBytree;
  }
  /** @param string */
  public function setDartNormalizeType($dartNormalizeType)
  {
    $this->dartNormalizeType = $dartNormalizeType;
  }
  /** @return string */
  public function getDartNormalizeType()
  {
    return $this->dartNormalizeType;
  }
  /** @param string */
  public function setDataFrequency($dataFrequency)
  {
    $this->dataFrequency = $dataFrequency;
  }
  /** @return string */
  public function getDataFrequency()
  {
    return $this->dataFrequency;
  }
  /** @param string */
  public function setDataSplitColumn($dataSplitColumn)
  {
    $this->dataSplitColumn = $dataSplitColumn;
  }
  /** @return string */
  public function getDataSplitColumn()
  {
    return $this->dataSplitColumn;
  }
  public function setDataSplitEvalFraction($dataSplitEvalFraction)
  {
    $this->dataSplitEvalFraction = $dataSplitEvalFraction;
  }
  public function getDataSplitEvalFraction()
  {
    return $this->dataSplitEvalFraction;
  }
  /** @param string */
  public function setDataSplitMethod($dataSplitMethod)
  {
    $this->dataSplitMethod = $dataSplitMethod;
  }
  /** @return string */
  public function getDataSplitMethod()
  {
    return $this->dataSplitMethod;
  }
  /** @param bool */
  public function setDecomposeTimeSeries($decomposeTimeSeries)
  {
    $this->decomposeTimeSeries = $decomposeTimeSeries;
  }
  /** @return bool */
  public function getDecomposeTimeSeries()
  {
    return $this->decomposeTimeSeries;
  }
  /** @param string */
  public function setDistanceType($distanceType)
  {
    $this->distanceType = $distanceType;
  }
  /** @return string */
  public function getDistanceType()
  {
    return $this->distanceType;
  }
  public function setDropout($dropout)
  {
    $this->dropout = $dropout;
  }
  public function getDropout()
  {
    return $this->dropout;
  }
  /** @param bool */
  public function setEarlyStop($earlyStop)
  {
    $this->earlyStop = $earlyStop;
  }
  /** @return bool */
  public function getEarlyStop()
  {
    return $this->earlyStop;
  }
  /** @param bool */
  public function setEnableGlobalExplain($enableGlobalExplain)
  {
    $this->enableGlobalExplain = $enableGlobalExplain;
  }
  /** @return bool */
  public function getEnableGlobalExplain()
  {
    return $this->enableGlobalExplain;
  }
  /** @param string */
  public function setFeedbackType($feedbackType)
  {
    $this->feedbackType = $feedbackType;
  }
  /** @return string */
  public function getFeedbackType()
  {
    return $this->feedbackType;
  }
  /** @param string[] */
  public function setHiddenUnits($hiddenUnits)
  {
    $this->hiddenUnits = $hiddenUnits;
  }
  /** @return string[] */
  public function getHiddenUnits()
  {
    return $this->hiddenUnits;
  }
  /** @param string */
  public function setHolidayRegion($holidayRegion)
  {
    $this->holidayRegion = $holidayRegion;
  }
  /** @return string */
  public function getHolidayRegion()
  {
    return $this->holidayRegion;
  }
  /** @param string */
  public function setHorizon($horizon)
  {
    $this->horizon = $horizon;
  }
  /** @return string */
  public function getHorizon()
  {
    return $this->horizon;
  }
  /** @param string[] */
  public function setHparamTuningObjectives($hparamTuningObjectives)
  {
    $this->hparamTuningObjectives = $hparamTuningObjectives;
  }
  /** @return string[] */
  public function getHparamTuningObjectives()
  {
    return $this->hparamTuningObjectives;
  }
  /** @param bool */
  public function setIncludeDrift($includeDrift)
  {
    $this->includeDrift = $includeDrift;
  }
  /** @return bool */
  public function getIncludeDrift()
  {
    return $this->includeDrift;
  }
  public function setInitialLearnRate($initialLearnRate)
  {
    $this->initialLearnRate = $initialLearnRate;
  }
  public function getInitialLearnRate()
  {
    return $this->initialLearnRate;
  }
  /** @param string[] */
  public function setInputLabelColumns($inputLabelColumns)
  {
    $this->inputLabelColumns = $inputLabelColumns;
  }
  /** @return string[] */
  public function getInputLabelColumns()
  {
    return $this->inputLabelColumns;
  }
  /** @param string */
  public function setIntegratedGradientsNumSteps($integratedGradientsNumSteps)
  {
    $this->integratedGradientsNumSteps = $integratedGradientsNumSteps;
  }
  /** @return string */
  public function getIntegratedGradientsNumSteps()
  {
    return $this->integratedGradientsNumSteps;
  }
  /** @param string */
  public function setItemColumn($itemColumn)
  {
    $this->itemColumn = $itemColumn;
  }
  /** @return string */
  public function getItemColumn()
  {
    return $this->itemColumn;
  }
  /** @param string */
  public function setKmeansInitializationColumn($kmeansInitializationColumn)
  {
    $this->kmeansInitializationColumn = $kmeansInitializationColumn;
  }
  /** @return string */
  public function getKmeansInitializationColumn()
  {
    return $this->kmeansInitializationColumn;
  }
  /** @param string */
  public function setKmeansInitializationMethod($kmeansInitializationMethod)
  {
    $this->kmeansInitializationMethod = $kmeansInitializationMethod;
  }
  /** @return string */
  public function getKmeansInitializationMethod()
  {
    return $this->kmeansInitializationMethod;
  }
  public function setL1Regularization($l1Regularization)
  {
    $this->l1Regularization = $l1Regularization;
  }
  public function getL1Regularization()
  {
    return $this->l1Regularization;
  }
  public function setL2Regularization($l2Regularization)
  {
    $this->l2Regularization = $l2Regularization;
  }
  public function getL2Regularization()
  {
    return $this->l2Regularization;
  }
  public function setLabelClassWeights($labelClassWeights)
  {
    $this->labelClassWeights = $labelClassWeights;
  }
  public function getLabelClassWeights()
  {
    return $this->labelClassWeights;
  }
  public function setLearnRate($learnRate)
  {
    $this->learnRate = $learnRate;
  }
  public function getLearnRate()
  {
    return $this->learnRate;
  }
  /** @param string */
  public function setLearnRateStrategy($learnRateStrategy)
  {
    $this->learnRateStrategy = $learnRateStrategy;
  }
  /** @return string */
  public function getLearnRateStrategy()
  {
    return $this->learnRateStrategy;
  }
  /** @param string */
  public function setLossType($lossType)
  {
    $this->lossType = $lossType;
  }
  /** @return string */
  public function getLossType()
  {
    return $this->lossType;
  }
  /** @param string */
  public function setMaxIterations($maxIterations)
  {
    $this->maxIterations = $maxIterations;
  }
  /** @return string */
  public function getMaxIterations()
  {
    return $this->maxIterations;
  }
  /** @param string */
  public function setMaxParallelTrials($maxParallelTrials)
  {
    $this->maxParallelTrials = $maxParallelTrials;
  }
  /** @return string */
  public function getMaxParallelTrials()
  {
    return $this->maxParallelTrials;
  }
  /** @param string */
  public function setMaxTimeSeriesLength($maxTimeSeriesLength)
  {
    $this->maxTimeSeriesLength = $maxTimeSeriesLength;
  }
  /** @return string */
  public function getMaxTimeSeriesLength()
  {
    return $this->maxTimeSeriesLength;
  }
  /** @param string */
  public function setMaxTreeDepth($maxTreeDepth)
  {
    $this->maxTreeDepth = $maxTreeDepth;
  }
  /** @return string */
  public function getMaxTreeDepth()
  {
    return $this->maxTreeDepth;
  }
  public function setMinRelativeProgress($minRelativeProgress)
  {
    $this->minRelativeProgress = $minRelativeProgress;
  }
  public function getMinRelativeProgress()
  {
    return $this->minRelativeProgress;
  }
  public function setMinSplitLoss($minSplitLoss)
  {
    $this->minSplitLoss = $minSplitLoss;
  }
  public function getMinSplitLoss()
  {
    return $this->minSplitLoss;
  }
  /** @param string */
  public function setMinTimeSeriesLength($minTimeSeriesLength)
  {
    $this->minTimeSeriesLength = $minTimeSeriesLength;
  }
  /** @return string */
  public function getMinTimeSeriesLength()
  {
    return $this->minTimeSeriesLength;
  }
  /** @param string */
  public function setMinTreeChildWeight($minTreeChildWeight)
  {
    $this->minTreeChildWeight = $minTreeChildWeight;
  }
  /** @return string */
  public function getMinTreeChildWeight()
  {
    return $this->minTreeChildWeight;
  }
  /** @param string */
  public function setModelUri($modelUri)
  {
    $this->modelUri = $modelUri;
  }
  /** @return string */
  public function getModelUri()
  {
    return $this->modelUri;
  }
  /** @param ArimaOrder */
  public function setNonSeasonalOrder(ArimaOrder $nonSeasonalOrder)
  {
    $this->nonSeasonalOrder = $nonSeasonalOrder;
  }
  /** @return ArimaOrder */
  public function getNonSeasonalOrder()
  {
    return $this->nonSeasonalOrder;
  }
  /** @param string */
  public function setNumClusters($numClusters)
  {
    $this->numClusters = $numClusters;
  }
  /** @return string */
  public function getNumClusters()
  {
    return $this->numClusters;
  }
  /** @param string */
  public function setNumFactors($numFactors)
  {
    $this->numFactors = $numFactors;
  }
  /** @return string */
  public function getNumFactors()
  {
    return $this->numFactors;
  }
  /** @param string */
  public function setNumParallelTree($numParallelTree)
  {
    $this->numParallelTree = $numParallelTree;
  }
  /** @return string */
  public function getNumParallelTree()
  {
    return $this->numParallelTree;
  }
  /** @param string */
  public function setNumTrials($numTrials)
  {
    $this->numTrials = $numTrials;
  }
  /** @return string */
  public function getNumTrials()
  {
    return $this->numTrials;
  }
  /** @param string */
  public function setOptimizationStrategy($optimizationStrategy)
  {
    $this->optimizationStrategy = $optimizationStrategy;
  }
  /** @return string */
  public function getOptimizationStrategy()
  {
    return $this->optimizationStrategy;
  }
  /** @param bool */
  public function setPreserveInputStructs($preserveInputStructs)
  {
    $this->preserveInputStructs = $preserveInputStructs;
  }
  /** @return bool */
  public function getPreserveInputStructs()
  {
    return $this->preserveInputStructs;
  }
  /** @param string */
  public function setSampledShapleyNumPaths($sampledShapleyNumPaths)
  {
    $this->sampledShapleyNumPaths = $sampledShapleyNumPaths;
  }
  /** @return string */
  public function getSampledShapleyNumPaths()
  {
    return $this->sampledShapleyNumPaths;
  }
  public function setSubsample($subsample)
  {
    $this->subsample = $subsample;
  }
  public function getSubsample()
  {
    return $this->subsample;
  }
  /** @param string */
  public function setTimeSeriesDataColumn($timeSeriesDataColumn)
  {
    $this->timeSeriesDataColumn = $timeSeriesDataColumn;
  }
  /** @return string */
  public function getTimeSeriesDataColumn()
  {
    return $this->timeSeriesDataColumn;
  }
  /** @param string */
  public function setTimeSeriesIdColumn($timeSeriesIdColumn)
  {
    $this->timeSeriesIdColumn = $timeSeriesIdColumn;
  }
  /** @return string */
  public function getTimeSeriesIdColumn()
  {
    return $this->timeSeriesIdColumn;
  }
  /** @param string[] */
  public function setTimeSeriesIdColumns($timeSeriesIdColumns)
  {
    $this->timeSeriesIdColumns = $timeSeriesIdColumns;
  }
  /** @return string[] */
  public function getTimeSeriesIdColumns()
  {
    return $this->timeSeriesIdColumns;
  }
  public function setTimeSeriesLengthFraction($timeSeriesLengthFraction)
  {
    $this->timeSeriesLengthFraction = $timeSeriesLengthFraction;
  }
  public function getTimeSeriesLengthFraction()
  {
    return $this->timeSeriesLengthFraction;
  }
  /** @param string */
  public function setTimeSeriesTimestampColumn($timeSeriesTimestampColumn)
  {
    $this->timeSeriesTimestampColumn = $timeSeriesTimestampColumn;
  }
  /** @return string */
  public function getTimeSeriesTimestampColumn()
  {
    return $this->timeSeriesTimestampColumn;
  }
  /** @param string */
  public function setTreeMethod($treeMethod)
  {
    $this->treeMethod = $treeMethod;
  }
  /** @return string */
  public function getTreeMethod()
  {
    return $this->treeMethod;
  }
  /** @param string */
  public function setTrendSmoothingWindowSize($trendSmoothingWindowSize)
  {
    $this->trendSmoothingWindowSize = $trendSmoothingWindowSize;
  }
  /** @return string */
  public function getTrendSmoothingWindowSize()
  {
    return $this->trendSmoothingWindowSize;
  }
  /** @param string */
  public function setUserColumn($userColumn)
  {
    $this->userColumn = $userColumn;
  }
  /** @return string */
  public function getUserColumn()
  {
    return $this->userColumn;
  }
  public function setWalsAlpha($walsAlpha)
  {
    $this->walsAlpha = $walsAlpha;
  }
  public function getWalsAlpha()
  {
    return $this->walsAlpha;
  }
  /** @param bool */
  public function setWarmStart($warmStart)
  {
    $this->warmStart = $warmStart;
  }
  /** @return bool */
  public function getWarmStart()
  {
    return $this->warmStart;
  }
}

class TrainingRun extends \Google\Collection
{
  /** @var GlobalExplanation[] */
  public $classLevelGlobalExplanations;
  /** @var DataSplitResult */
  public $dataSplitResult;
  /** @var EvaluationMetrics */
  public $evaluationMetrics;
  /** @var GlobalExplanation */
  public $modelLevelGlobalExplanation;
  /** @var IterationResult[] */
  public $results;
  /** @var string */
  public $startTime;
  /** @var TrainingOptions */
  public $trainingOptions;
  /** @var string */
  public $trainingStartTime;
  /** @var string */
  public $vertexAiModelId;
  /** @var string */
  public $vertexAiModelVersion;
  protected $collection_key = 'results';
  protected $classLevelGlobalExplanationsType = GlobalExplanation::class;
  protected $classLevelGlobalExplanationsDataType = 'array';
  protected $dataSplitResultType = DataSplitResult::class;
  protected $dataSplitResultDataType = '';
  protected $evaluationMetricsType = EvaluationMetrics::class;
  protected $evaluationMetricsDataType = '';
  protected $modelLevelGlobalExplanationType = GlobalExplanation::class;
  protected $modelLevelGlobalExplanationDataType = '';
  protected $resultsType = IterationResult::class;
  protected $resultsDataType = 'array';
  protected $trainingOptionsType = TrainingOptions::class;
  protected $trainingOptionsDataType = '';
  /** @param GlobalExplanation[] */
  public function setClassLevelGlobalExplanations($classLevelGlobalExplanations)
  {
    $this->classLevelGlobalExplanations = $classLevelGlobalExplanations;
  }
  /** @return GlobalExplanation[] */
  public function getClassLevelGlobalExplanations()
  {
    return $this->classLevelGlobalExplanations;
  }
  /** @param DataSplitResult */
  public function setDataSplitResult(DataSplitResult $dataSplitResult)
  {
    $this->dataSplitResult = $dataSplitResult;
  }
  /** @return DataSplitResult */
  public function getDataSplitResult()
  {
    return $this->dataSplitResult;
  }
  /** @param EvaluationMetrics */
  public function setEvaluationMetrics(EvaluationMetrics $evaluationMetrics)
  {
    $this->evaluationMetrics = $evaluationMetrics;
  }
  /** @return EvaluationMetrics */
  public function getEvaluationMetrics()
  {
    return $this->evaluationMetrics;
  }
  /** @param GlobalExplanation */
  public function setModelLevelGlobalExplanation(GlobalExplanation $modelLevelGlobalExplanation)
  {
    $this->modelLevelGlobalExplanation = $modelLevelGlobalExplanation;
  }
  /** @return GlobalExplanation */
  public function getModelLevelGlobalExplanation()
  {
    return $this->modelLevelGlobalExplanation;
  }
  /** @param IterationResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return IterationResult[] */
  public function getResults()
  {
    return $this->results;
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
  /** @param TrainingOptions */
  public function setTrainingOptions(TrainingOptions $trainingOptions)
  {
    $this->trainingOptions = $trainingOptions;
  }
  /** @return TrainingOptions */
  public function getTrainingOptions()
  {
    return $this->trainingOptions;
  }
  /** @param string */
  public function setTrainingStartTime($trainingStartTime)
  {
    $this->trainingStartTime = $trainingStartTime;
  }
  /** @return string */
  public function getTrainingStartTime()
  {
    return $this->trainingStartTime;
  }
  /** @param string */
  public function setVertexAiModelId($vertexAiModelId)
  {
    $this->vertexAiModelId = $vertexAiModelId;
  }
  /** @return string */
  public function getVertexAiModelId()
  {
    return $this->vertexAiModelId;
  }
  /** @param string */
  public function setVertexAiModelVersion($vertexAiModelVersion)
  {
    $this->vertexAiModelVersion = $vertexAiModelVersion;
  }
  /** @return string */
  public function getVertexAiModelVersion()
  {
    return $this->vertexAiModelVersion;
  }
}

class TransactionInfo extends \Google\Model
{
  /** @var string */
  public $transactionId;

  /** @param string */
  public function setTransactionId($transactionId)
  {
    $this->transactionId = $transactionId;
  }
  /** @return string */
  public function getTransactionId()
  {
    return $this->transactionId;
  }
}

class UserDefinedFunctionResource extends \Google\Model
{
  /** @var string */
  public $inlineCode;
  /** @var string */
  public $resourceUri;

  /** @param string */
  public function setInlineCode($inlineCode)
  {
    $this->inlineCode = $inlineCode;
  }
  /** @return string */
  public function getInlineCode()
  {
    return $this->inlineCode;
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

class ViewDefinition extends \Google\Collection
{
  /** @var string */
  public $query;
  /** @var bool */
  public $useExplicitColumnNames;
  /** @var bool */
  public $useLegacySql;
  /** @var UserDefinedFunctionResource[] */
  public $userDefinedFunctionResources;
  protected $collection_key = 'userDefinedFunctionResources';
  protected $userDefinedFunctionResourcesType = UserDefinedFunctionResource::class;
  protected $userDefinedFunctionResourcesDataType = 'array';
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
  /** @param bool */
  public function setUseExplicitColumnNames($useExplicitColumnNames)
  {
    $this->useExplicitColumnNames = $useExplicitColumnNames;
  }
  /** @return bool */
  public function getUseExplicitColumnNames()
  {
    return $this->useExplicitColumnNames;
  }
  /** @param bool */
  public function setUseLegacySql($useLegacySql)
  {
    $this->useLegacySql = $useLegacySql;
  }
  /** @return bool */
  public function getUseLegacySql()
  {
    return $this->useLegacySql;
  }
  /** @param UserDefinedFunctionResource[] */
  public function setUserDefinedFunctionResources($userDefinedFunctionResources)
  {
    $this->userDefinedFunctionResources = $userDefinedFunctionResources;
  }
  /** @return UserDefinedFunctionResource[] */
  public function getUserDefinedFunctionResources()
  {
    return $this->userDefinedFunctionResources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AggregateClassificationMetrics::class, 'Google_Service_Bigquery_AggregateClassificationMetrics');
class_alias(Argument::class, 'Google_Service_Bigquery_Argument');
class_alias(ArimaCoefficients::class, 'Google_Service_Bigquery_ArimaCoefficients');
class_alias(ArimaFittingMetrics::class, 'Google_Service_Bigquery_ArimaFittingMetrics');
class_alias(ArimaForecastingMetrics::class, 'Google_Service_Bigquery_ArimaForecastingMetrics');
class_alias(ArimaModelInfo::class, 'Google_Service_Bigquery_ArimaModelInfo');
class_alias(ArimaOrder::class, 'Google_Service_Bigquery_ArimaOrder');
class_alias(ArimaResult::class, 'Google_Service_Bigquery_ArimaResult');
class_alias(ArimaSingleModelForecastingMetrics::class, 'Google_Service_Bigquery_ArimaSingleModelForecastingMetrics');
class_alias(AuditConfig::class, 'Google_Service_Bigquery_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_Bigquery_AuditLogConfig');
class_alias(AvroOptions::class, 'Google_Service_Bigquery_AvroOptions');
class_alias(BiEngineReason::class, 'Google_Service_Bigquery_BiEngineReason');
class_alias(BiEngineStatistics::class, 'Google_Service_Bigquery_BiEngineStatistics');
class_alias(BigQueryModelTraining::class, 'Google_Service_Bigquery_BigQueryModelTraining');
class_alias(BigtableColumn::class, 'Google_Service_Bigquery_BigtableColumn');
class_alias(BigtableColumnFamily::class, 'Google_Service_Bigquery_BigtableColumnFamily');
class_alias(BigtableOptions::class, 'Google_Service_Bigquery_BigtableOptions');
class_alias(BinaryClassificationMetrics::class, 'Google_Service_Bigquery_BinaryClassificationMetrics');
class_alias(BinaryConfusionMatrix::class, 'Google_Service_Bigquery_BinaryConfusionMatrix');
class_alias(Binding::class, 'Google_Service_Bigquery_Binding');
class_alias(BqmlIterationResult::class, 'Google_Service_Bigquery_BqmlIterationResult');
class_alias(BqmlTrainingRun::class, 'Google_Service_Bigquery_BqmlTrainingRun');
class_alias(BqmlTrainingRunTrainingOptions::class, 'Google_Service_Bigquery_BqmlTrainingRunTrainingOptions');
class_alias(CategoricalValue::class, 'Google_Service_Bigquery_CategoricalValue');
class_alias(CategoryCount::class, 'Google_Service_Bigquery_CategoryCount');
class_alias(CloneDefinition::class, 'Google_Service_Bigquery_CloneDefinition');
class_alias(Cluster::class, 'Google_Service_Bigquery_Cluster');
class_alias(ClusterInfo::class, 'Google_Service_Bigquery_ClusterInfo');
class_alias(Clustering::class, 'Google_Service_Bigquery_Clustering');
class_alias(ClusteringMetrics::class, 'Google_Service_Bigquery_ClusteringMetrics');
class_alias(ConfusionMatrix::class, 'Google_Service_Bigquery_ConfusionMatrix');
class_alias(ConnectionProperty::class, 'Google_Service_Bigquery_ConnectionProperty');
class_alias(CsvOptions::class, 'Google_Service_Bigquery_CsvOptions');
class_alias(DataMaskingStatistics::class, 'Google_Service_Bigquery_DataMaskingStatistics');
class_alias(DataSplitResult::class, 'Google_Service_Bigquery_DataSplitResult');
class_alias(Dataset::class, 'Google_Service_Bigquery_Dataset');
class_alias(DatasetAccess::class, 'Google_Service_Bigquery_DatasetAccess');
class_alias(DatasetAccessEntry::class, 'Google_Service_Bigquery_DatasetAccessEntry');
class_alias(DatasetList::class, 'Google_Service_Bigquery_DatasetList');
class_alias(DatasetListDatasets::class, 'Google_Service_Bigquery_DatasetListDatasets');
class_alias(DatasetReference::class, 'Google_Service_Bigquery_DatasetReference');
class_alias(DatasetTags::class, 'Google_Service_Bigquery_DatasetTags');
class_alias(DestinationTableProperties::class, 'Google_Service_Bigquery_DestinationTableProperties');
class_alias(DimensionalityReductionMetrics::class, 'Google_Service_Bigquery_DimensionalityReductionMetrics');
class_alias(DmlStatistics::class, 'Google_Service_Bigquery_DmlStatistics');
class_alias(DoubleCandidates::class, 'Google_Service_Bigquery_DoubleCandidates');
class_alias(DoubleHparamSearchSpace::class, 'Google_Service_Bigquery_DoubleHparamSearchSpace');
class_alias(DoubleRange::class, 'Google_Service_Bigquery_DoubleRange');
class_alias(EncryptionConfiguration::class, 'Google_Service_Bigquery_EncryptionConfiguration');
class_alias(Entry::class, 'Google_Service_Bigquery_Entry');
class_alias(ErrorProto::class, 'Google_Service_Bigquery_ErrorProto');
class_alias(EvaluationMetrics::class, 'Google_Service_Bigquery_EvaluationMetrics');
class_alias(ExplainQueryStage::class, 'Google_Service_Bigquery_ExplainQueryStage');
class_alias(ExplainQueryStep::class, 'Google_Service_Bigquery_ExplainQueryStep');
class_alias(Explanation::class, 'Google_Service_Bigquery_Explanation');
class_alias(Expr::class, 'Google_Service_Bigquery_Expr');
class_alias(ExternalDataConfiguration::class, 'Google_Service_Bigquery_ExternalDataConfiguration');
class_alias(FeatureValue::class, 'Google_Service_Bigquery_FeatureValue');
class_alias(GetIamPolicyRequest::class, 'Google_Service_Bigquery_GetIamPolicyRequest');
class_alias(GetPolicyOptions::class, 'Google_Service_Bigquery_GetPolicyOptions');
class_alias(GetQueryResultsResponse::class, 'Google_Service_Bigquery_GetQueryResultsResponse');
class_alias(GetServiceAccountResponse::class, 'Google_Service_Bigquery_GetServiceAccountResponse');
class_alias(GlobalExplanation::class, 'Google_Service_Bigquery_GlobalExplanation');
class_alias(GoogleSheetsOptions::class, 'Google_Service_Bigquery_GoogleSheetsOptions');
class_alias(HivePartitioningOptions::class, 'Google_Service_Bigquery_HivePartitioningOptions');
class_alias(HparamSearchSpaces::class, 'Google_Service_Bigquery_HparamSearchSpaces');
class_alias(HparamTuningTrial::class, 'Google_Service_Bigquery_HparamTuningTrial');
class_alias(IndexUnusedReason::class, 'Google_Service_Bigquery_IndexUnusedReason');
class_alias(IntArray::class, 'Google_Service_Bigquery_IntArray');
class_alias(IntArrayHparamSearchSpace::class, 'Google_Service_Bigquery_IntArrayHparamSearchSpace');
class_alias(IntCandidates::class, 'Google_Service_Bigquery_IntCandidates');
class_alias(IntHparamSearchSpace::class, 'Google_Service_Bigquery_IntHparamSearchSpace');
class_alias(IntRange::class, 'Google_Service_Bigquery_IntRange');
class_alias(IterationResult::class, 'Google_Service_Bigquery_IterationResult');
class_alias(Job::class, 'Google_Service_Bigquery_Job');
class_alias(JobCancelResponse::class, 'Google_Service_Bigquery_JobCancelResponse');
class_alias(JobConfiguration::class, 'Google_Service_Bigquery_JobConfiguration');
class_alias(JobConfigurationExtract::class, 'Google_Service_Bigquery_JobConfigurationExtract');
class_alias(JobConfigurationLoad::class, 'Google_Service_Bigquery_JobConfigurationLoad');
class_alias(JobConfigurationQuery::class, 'Google_Service_Bigquery_JobConfigurationQuery');
class_alias(JobConfigurationTableCopy::class, 'Google_Service_Bigquery_JobConfigurationTableCopy');
class_alias(JobList::class, 'Google_Service_Bigquery_JobList');
class_alias(JobListJobs::class, 'Google_Service_Bigquery_JobListJobs');
class_alias(JobReference::class, 'Google_Service_Bigquery_JobReference');
class_alias(JobStatistics::class, 'Google_Service_Bigquery_JobStatistics');
class_alias(JobStatistics2::class, 'Google_Service_Bigquery_JobStatistics2');
class_alias(JobStatistics2ReservationUsage::class, 'Google_Service_Bigquery_JobStatistics2ReservationUsage');
class_alias(JobStatistics3::class, 'Google_Service_Bigquery_JobStatistics3');
class_alias(JobStatistics4::class, 'Google_Service_Bigquery_JobStatistics4');
class_alias(JobStatistics5::class, 'Google_Service_Bigquery_JobStatistics5');
class_alias(JobStatisticsReservationUsage::class, 'Google_Service_Bigquery_JobStatisticsReservationUsage');
class_alias(JobStatus::class, 'Google_Service_Bigquery_JobStatus');
class_alias(ListModelsResponse::class, 'Google_Service_Bigquery_ListModelsResponse');
class_alias(ListRoutinesResponse::class, 'Google_Service_Bigquery_ListRoutinesResponse');
class_alias(ListRowAccessPoliciesResponse::class, 'Google_Service_Bigquery_ListRowAccessPoliciesResponse');
class_alias(LocationMetadata::class, 'Google_Service_Bigquery_LocationMetadata');
class_alias(MaterializedViewDefinition::class, 'Google_Service_Bigquery_MaterializedViewDefinition');
class_alias(MlStatistics::class, 'Google_Service_Bigquery_MlStatistics');
class_alias(Model::class, 'Google_Service_Bigquery_Model');
class_alias(ModelDefinition::class, 'Google_Service_Bigquery_ModelDefinition');
class_alias(ModelDefinitionModelOptions::class, 'Google_Service_Bigquery_ModelDefinitionModelOptions');
class_alias(ModelReference::class, 'Google_Service_Bigquery_ModelReference');
class_alias(MultiClassClassificationMetrics::class, 'Google_Service_Bigquery_MultiClassClassificationMetrics');
class_alias(ParquetOptions::class, 'Google_Service_Bigquery_ParquetOptions');
class_alias(Policy::class, 'Google_Service_Bigquery_Policy');
class_alias(PrincipalComponentInfo::class, 'Google_Service_Bigquery_PrincipalComponentInfo');
class_alias(ProjectList::class, 'Google_Service_Bigquery_ProjectList');
class_alias(ProjectListProjects::class, 'Google_Service_Bigquery_ProjectListProjects');
class_alias(ProjectReference::class, 'Google_Service_Bigquery_ProjectReference');
class_alias(QueryParameter::class, 'Google_Service_Bigquery_QueryParameter');
class_alias(QueryParameterType::class, 'Google_Service_Bigquery_QueryParameterType');
class_alias(QueryParameterTypeStructTypes::class, 'Google_Service_Bigquery_QueryParameterTypeStructTypes');
class_alias(QueryParameterValue::class, 'Google_Service_Bigquery_QueryParameterValue');
class_alias(QueryRequest::class, 'Google_Service_Bigquery_QueryRequest');
class_alias(QueryResponse::class, 'Google_Service_Bigquery_QueryResponse');
class_alias(QueryTimelineSample::class, 'Google_Service_Bigquery_QueryTimelineSample');
class_alias(RangePartitioning::class, 'Google_Service_Bigquery_RangePartitioning');
class_alias(RangePartitioningRange::class, 'Google_Service_Bigquery_RangePartitioningRange');
class_alias(RankingMetrics::class, 'Google_Service_Bigquery_RankingMetrics');
class_alias(RegressionMetrics::class, 'Google_Service_Bigquery_RegressionMetrics');
class_alias(RemoteFunctionOptions::class, 'Google_Service_Bigquery_RemoteFunctionOptions');
class_alias(Routine::class, 'Google_Service_Bigquery_Routine');
class_alias(RoutineReference::class, 'Google_Service_Bigquery_RoutineReference');
class_alias(Row::class, 'Google_Service_Bigquery_Row');
class_alias(RowAccessPolicy::class, 'Google_Service_Bigquery_RowAccessPolicy');
class_alias(RowAccessPolicyReference::class, 'Google_Service_Bigquery_RowAccessPolicyReference');
class_alias(RowLevelSecurityStatistics::class, 'Google_Service_Bigquery_RowLevelSecurityStatistics');
class_alias(ScriptStackFrame::class, 'Google_Service_Bigquery_ScriptStackFrame');
class_alias(ScriptStatistics::class, 'Google_Service_Bigquery_ScriptStatistics');
class_alias(SearchStatistics::class, 'Google_Service_Bigquery_SearchStatistics');
class_alias(SessionInfo::class, 'Google_Service_Bigquery_SessionInfo');
class_alias(SetIamPolicyRequest::class, 'Google_Service_Bigquery_SetIamPolicyRequest');
class_alias(SnapshotDefinition::class, 'Google_Service_Bigquery_SnapshotDefinition');
class_alias(SparkLoggingInfo::class, 'Google_Service_Bigquery_SparkLoggingInfo');
class_alias(SparkOptions::class, 'Google_Service_Bigquery_SparkOptions');
class_alias(SparkStatistics::class, 'Google_Service_Bigquery_SparkStatistics');
class_alias(StandardSqlDataType::class, 'Google_Service_Bigquery_StandardSqlDataType');
class_alias(StandardSqlField::class, 'Google_Service_Bigquery_StandardSqlField');
class_alias(StandardSqlStructType::class, 'Google_Service_Bigquery_StandardSqlStructType');
class_alias(StandardSqlTableType::class, 'Google_Service_Bigquery_StandardSqlTableType');
class_alias(Streamingbuffer::class, 'Google_Service_Bigquery_Streamingbuffer');
class_alias(StringHparamSearchSpace::class, 'Google_Service_Bigquery_StringHparamSearchSpace');
class_alias(Table::class, 'Google_Service_Bigquery_Table');
class_alias(TableCell::class, 'Google_Service_Bigquery_TableCell');
class_alias(TableDataInsertAllRequest::class, 'Google_Service_Bigquery_TableDataInsertAllRequest');
class_alias(TableDataInsertAllRequestRows::class, 'Google_Service_Bigquery_TableDataInsertAllRequestRows');
class_alias(TableDataInsertAllResponse::class, 'Google_Service_Bigquery_TableDataInsertAllResponse');
class_alias(TableDataInsertAllResponseInsertErrors::class, 'Google_Service_Bigquery_TableDataInsertAllResponseInsertErrors');
class_alias(TableDataList::class, 'Google_Service_Bigquery_TableDataList');
class_alias(TableFieldSchema::class, 'Google_Service_Bigquery_TableFieldSchema');
class_alias(TableFieldSchemaCategories::class, 'Google_Service_Bigquery_TableFieldSchemaCategories');
class_alias(TableFieldSchemaPolicyTags::class, 'Google_Service_Bigquery_TableFieldSchemaPolicyTags');
class_alias(TableList::class, 'Google_Service_Bigquery_TableList');
class_alias(TableListTables::class, 'Google_Service_Bigquery_TableListTables');
class_alias(TableListTablesView::class, 'Google_Service_Bigquery_TableListTablesView');
class_alias(TableReference::class, 'Google_Service_Bigquery_TableReference');
class_alias(TableRow::class, 'Google_Service_Bigquery_TableRow');
class_alias(TableSchema::class, 'Google_Service_Bigquery_TableSchema');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_Bigquery_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_Bigquery_TestIamPermissionsResponse');
class_alias(TimePartitioning::class, 'Google_Service_Bigquery_TimePartitioning');
class_alias(TrainingOptions::class, 'Google_Service_Bigquery_TrainingOptions');
class_alias(TrainingRun::class, 'Google_Service_Bigquery_TrainingRun');
class_alias(TransactionInfo::class, 'Google_Service_Bigquery_TransactionInfo');
class_alias(UserDefinedFunctionResource::class, 'Google_Service_Bigquery_UserDefinedFunctionResource');
class_alias(ViewDefinition::class, 'Google_Service_Bigquery_ViewDefinition');
