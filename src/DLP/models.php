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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2Action extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Deidentify */
  public $deidentify;
  /** @var GooglePrivacyDlpV2JobNotificationEmails */
  public $jobNotificationEmails;
  /** @var GooglePrivacyDlpV2PublishToPubSub */
  public $pubSub;
  /** @var GooglePrivacyDlpV2PublishFindingsToCloudDataCatalog */
  public $publishFindingsToCloudDataCatalog;
  /** @var GooglePrivacyDlpV2PublishSummaryToCscc */
  public $publishSummaryToCscc;
  /** @var GooglePrivacyDlpV2PublishToStackdriver */
  public $publishToStackdriver;
  /** @var GooglePrivacyDlpV2SaveFindings */
  public $saveFindings;
  protected $deidentifyType = GooglePrivacyDlpV2Deidentify::class;
  protected $deidentifyDataType = '';
  protected $jobNotificationEmailsType = GooglePrivacyDlpV2JobNotificationEmails::class;
  protected $jobNotificationEmailsDataType = '';
  protected $pubSubType = GooglePrivacyDlpV2PublishToPubSub::class;
  protected $pubSubDataType = '';
  protected $publishFindingsToCloudDataCatalogType = GooglePrivacyDlpV2PublishFindingsToCloudDataCatalog::class;
  protected $publishFindingsToCloudDataCatalogDataType = '';
  protected $publishSummaryToCsccType = GooglePrivacyDlpV2PublishSummaryToCscc::class;
  protected $publishSummaryToCsccDataType = '';
  protected $publishToStackdriverType = GooglePrivacyDlpV2PublishToStackdriver::class;
  protected $publishToStackdriverDataType = '';
  protected $saveFindingsType = GooglePrivacyDlpV2SaveFindings::class;
  protected $saveFindingsDataType = '';
  /** @param GooglePrivacyDlpV2Deidentify */
  public function setDeidentify(GooglePrivacyDlpV2Deidentify $deidentify)
  {
    $this->deidentify = $deidentify;
  }
  /** @return GooglePrivacyDlpV2Deidentify */
  public function getDeidentify()
  {
    return $this->deidentify;
  }
  /** @param GooglePrivacyDlpV2JobNotificationEmails */
  public function setJobNotificationEmails(GooglePrivacyDlpV2JobNotificationEmails $jobNotificationEmails)
  {
    $this->jobNotificationEmails = $jobNotificationEmails;
  }
  /** @return GooglePrivacyDlpV2JobNotificationEmails */
  public function getJobNotificationEmails()
  {
    return $this->jobNotificationEmails;
  }
  /** @param GooglePrivacyDlpV2PublishToPubSub */
  public function setPubSub(GooglePrivacyDlpV2PublishToPubSub $pubSub)
  {
    $this->pubSub = $pubSub;
  }
  /** @return GooglePrivacyDlpV2PublishToPubSub */
  public function getPubSub()
  {
    return $this->pubSub;
  }
  /** @param GooglePrivacyDlpV2PublishFindingsToCloudDataCatalog */
  public function setPublishFindingsToCloudDataCatalog(GooglePrivacyDlpV2PublishFindingsToCloudDataCatalog $publishFindingsToCloudDataCatalog)
  {
    $this->publishFindingsToCloudDataCatalog = $publishFindingsToCloudDataCatalog;
  }
  /** @return GooglePrivacyDlpV2PublishFindingsToCloudDataCatalog */
  public function getPublishFindingsToCloudDataCatalog()
  {
    return $this->publishFindingsToCloudDataCatalog;
  }
  /** @param GooglePrivacyDlpV2PublishSummaryToCscc */
  public function setPublishSummaryToCscc(GooglePrivacyDlpV2PublishSummaryToCscc $publishSummaryToCscc)
  {
    $this->publishSummaryToCscc = $publishSummaryToCscc;
  }
  /** @return GooglePrivacyDlpV2PublishSummaryToCscc */
  public function getPublishSummaryToCscc()
  {
    return $this->publishSummaryToCscc;
  }
  /** @param GooglePrivacyDlpV2PublishToStackdriver */
  public function setPublishToStackdriver(GooglePrivacyDlpV2PublishToStackdriver $publishToStackdriver)
  {
    $this->publishToStackdriver = $publishToStackdriver;
  }
  /** @return GooglePrivacyDlpV2PublishToStackdriver */
  public function getPublishToStackdriver()
  {
    return $this->publishToStackdriver;
  }
  /** @param GooglePrivacyDlpV2SaveFindings */
  public function setSaveFindings(GooglePrivacyDlpV2SaveFindings $saveFindings)
  {
    $this->saveFindings = $saveFindings;
  }
  /** @return GooglePrivacyDlpV2SaveFindings */
  public function getSaveFindings()
  {
    return $this->saveFindings;
  }
}

class GooglePrivacyDlpV2ActivateJobTriggerRequest extends \Google\Model
{
}

class GooglePrivacyDlpV2AllInfoTypes extends \Google\Model
{
}

class GooglePrivacyDlpV2AllText extends \Google\Model
{
}

class GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails extends \Google\Model
{
  /** @var GooglePrivacyDlpV2CategoricalStatsResult */
  public $categoricalStatsResult;
  /** @var GooglePrivacyDlpV2DeltaPresenceEstimationResult */
  public $deltaPresenceEstimationResult;
  /** @var GooglePrivacyDlpV2KAnonymityResult */
  public $kAnonymityResult;
  /** @var GooglePrivacyDlpV2KMapEstimationResult */
  public $kMapEstimationResult;
  /** @var GooglePrivacyDlpV2LDiversityResult */
  public $lDiversityResult;
  /** @var GooglePrivacyDlpV2NumericalStatsResult */
  public $numericalStatsResult;
  /** @var GooglePrivacyDlpV2RequestedRiskAnalysisOptions */
  public $requestedOptions;
  /** @var GooglePrivacyDlpV2PrivacyMetric */
  public $requestedPrivacyMetric;
  /** @var GooglePrivacyDlpV2BigQueryTable */
  public $requestedSourceTable;
  protected $categoricalStatsResultType = GooglePrivacyDlpV2CategoricalStatsResult::class;
  protected $categoricalStatsResultDataType = '';
  protected $deltaPresenceEstimationResultType = GooglePrivacyDlpV2DeltaPresenceEstimationResult::class;
  protected $deltaPresenceEstimationResultDataType = '';
  protected $kAnonymityResultType = GooglePrivacyDlpV2KAnonymityResult::class;
  protected $kAnonymityResultDataType = '';
  protected $kMapEstimationResultType = GooglePrivacyDlpV2KMapEstimationResult::class;
  protected $kMapEstimationResultDataType = '';
  protected $lDiversityResultType = GooglePrivacyDlpV2LDiversityResult::class;
  protected $lDiversityResultDataType = '';
  protected $numericalStatsResultType = GooglePrivacyDlpV2NumericalStatsResult::class;
  protected $numericalStatsResultDataType = '';
  protected $requestedOptionsType = GooglePrivacyDlpV2RequestedRiskAnalysisOptions::class;
  protected $requestedOptionsDataType = '';
  protected $requestedPrivacyMetricType = GooglePrivacyDlpV2PrivacyMetric::class;
  protected $requestedPrivacyMetricDataType = '';
  protected $requestedSourceTableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $requestedSourceTableDataType = '';
  /** @param GooglePrivacyDlpV2CategoricalStatsResult */
  public function setCategoricalStatsResult(GooglePrivacyDlpV2CategoricalStatsResult $categoricalStatsResult)
  {
    $this->categoricalStatsResult = $categoricalStatsResult;
  }
  /** @return GooglePrivacyDlpV2CategoricalStatsResult */
  public function getCategoricalStatsResult()
  {
    return $this->categoricalStatsResult;
  }
  /** @param GooglePrivacyDlpV2DeltaPresenceEstimationResult */
  public function setDeltaPresenceEstimationResult(GooglePrivacyDlpV2DeltaPresenceEstimationResult $deltaPresenceEstimationResult)
  {
    $this->deltaPresenceEstimationResult = $deltaPresenceEstimationResult;
  }
  /** @return GooglePrivacyDlpV2DeltaPresenceEstimationResult */
  public function getDeltaPresenceEstimationResult()
  {
    return $this->deltaPresenceEstimationResult;
  }
  /** @param GooglePrivacyDlpV2KAnonymityResult */
  public function setKAnonymityResult(GooglePrivacyDlpV2KAnonymityResult $kAnonymityResult)
  {
    $this->kAnonymityResult = $kAnonymityResult;
  }
  /** @return GooglePrivacyDlpV2KAnonymityResult */
  public function getKAnonymityResult()
  {
    return $this->kAnonymityResult;
  }
  /** @param GooglePrivacyDlpV2KMapEstimationResult */
  public function setKMapEstimationResult(GooglePrivacyDlpV2KMapEstimationResult $kMapEstimationResult)
  {
    $this->kMapEstimationResult = $kMapEstimationResult;
  }
  /** @return GooglePrivacyDlpV2KMapEstimationResult */
  public function getKMapEstimationResult()
  {
    return $this->kMapEstimationResult;
  }
  /** @param GooglePrivacyDlpV2LDiversityResult */
  public function setLDiversityResult(GooglePrivacyDlpV2LDiversityResult $lDiversityResult)
  {
    $this->lDiversityResult = $lDiversityResult;
  }
  /** @return GooglePrivacyDlpV2LDiversityResult */
  public function getLDiversityResult()
  {
    return $this->lDiversityResult;
  }
  /** @param GooglePrivacyDlpV2NumericalStatsResult */
  public function setNumericalStatsResult(GooglePrivacyDlpV2NumericalStatsResult $numericalStatsResult)
  {
    $this->numericalStatsResult = $numericalStatsResult;
  }
  /** @return GooglePrivacyDlpV2NumericalStatsResult */
  public function getNumericalStatsResult()
  {
    return $this->numericalStatsResult;
  }
  /** @param GooglePrivacyDlpV2RequestedRiskAnalysisOptions */
  public function setRequestedOptions(GooglePrivacyDlpV2RequestedRiskAnalysisOptions $requestedOptions)
  {
    $this->requestedOptions = $requestedOptions;
  }
  /** @return GooglePrivacyDlpV2RequestedRiskAnalysisOptions */
  public function getRequestedOptions()
  {
    return $this->requestedOptions;
  }
  /** @param GooglePrivacyDlpV2PrivacyMetric */
  public function setRequestedPrivacyMetric(GooglePrivacyDlpV2PrivacyMetric $requestedPrivacyMetric)
  {
    $this->requestedPrivacyMetric = $requestedPrivacyMetric;
  }
  /** @return GooglePrivacyDlpV2PrivacyMetric */
  public function getRequestedPrivacyMetric()
  {
    return $this->requestedPrivacyMetric;
  }
  /** @param GooglePrivacyDlpV2BigQueryTable */
  public function setRequestedSourceTable(GooglePrivacyDlpV2BigQueryTable $requestedSourceTable)
  {
    $this->requestedSourceTable = $requestedSourceTable;
  }
  /** @return GooglePrivacyDlpV2BigQueryTable */
  public function getRequestedSourceTable()
  {
    return $this->requestedSourceTable;
  }
}

class GooglePrivacyDlpV2AuxiliaryTable extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2QuasiIdField[] */
  public $quasiIds;
  /** @var GooglePrivacyDlpV2FieldId */
  public $relativeFrequency;
  /** @var GooglePrivacyDlpV2BigQueryTable */
  public $table;
  protected $collection_key = 'quasiIds';
  protected $quasiIdsType = GooglePrivacyDlpV2QuasiIdField::class;
  protected $quasiIdsDataType = 'array';
  protected $relativeFrequencyType = GooglePrivacyDlpV2FieldId::class;
  protected $relativeFrequencyDataType = '';
  protected $tableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $tableDataType = '';
  /** @param GooglePrivacyDlpV2QuasiIdField[] */
  public function setQuasiIds($quasiIds)
  {
    $this->quasiIds = $quasiIds;
  }
  /** @return GooglePrivacyDlpV2QuasiIdField[] */
  public function getQuasiIds()
  {
    return $this->quasiIds;
  }
  /** @param GooglePrivacyDlpV2FieldId */
  public function setRelativeFrequency(GooglePrivacyDlpV2FieldId $relativeFrequency)
  {
    $this->relativeFrequency = $relativeFrequency;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getRelativeFrequency()
  {
    return $this->relativeFrequency;
  }
  /** @param GooglePrivacyDlpV2BigQueryTable */
  public function setTable(GooglePrivacyDlpV2BigQueryTable $table)
  {
    $this->table = $table;
  }
  /** @return GooglePrivacyDlpV2BigQueryTable */
  public function getTable()
  {
    return $this->table;
  }
}

class GooglePrivacyDlpV2BigQueryField extends \Google\Model
{
  /** @var GooglePrivacyDlpV2FieldId */
  public $field;
  /** @var GooglePrivacyDlpV2BigQueryTable */
  public $table;
  protected $fieldType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldDataType = '';
  protected $tableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $tableDataType = '';
  /** @param GooglePrivacyDlpV2FieldId */
  public function setField(GooglePrivacyDlpV2FieldId $field)
  {
    $this->field = $field;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getField()
  {
    return $this->field;
  }
  /** @param GooglePrivacyDlpV2BigQueryTable */
  public function setTable(GooglePrivacyDlpV2BigQueryTable $table)
  {
    $this->table = $table;
  }
  /** @return GooglePrivacyDlpV2BigQueryTable */
  public function getTable()
  {
    return $this->table;
  }
}

class GooglePrivacyDlpV2BigQueryKey extends \Google\Model
{
  /** @var string */
  public $rowNumber;
  /** @var GooglePrivacyDlpV2BigQueryTable */
  public $tableReference;
  protected $tableReferenceType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $tableReferenceDataType = '';
  /** @param string */
  public function setRowNumber($rowNumber)
  {
    $this->rowNumber = $rowNumber;
  }
  /** @return string */
  public function getRowNumber()
  {
    return $this->rowNumber;
  }
  /** @param GooglePrivacyDlpV2BigQueryTable */
  public function setTableReference(GooglePrivacyDlpV2BigQueryTable $tableReference)
  {
    $this->tableReference = $tableReference;
  }
  /** @return GooglePrivacyDlpV2BigQueryTable */
  public function getTableReference()
  {
    return $this->tableReference;
  }
}

class GooglePrivacyDlpV2BigQueryOptions extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2FieldId[] */
  public $excludedFields;
  /** @var GooglePrivacyDlpV2FieldId[] */
  public $identifyingFields;
  /** @var GooglePrivacyDlpV2FieldId[] */
  public $includedFields;
  /** @var string */
  public $rowsLimit;
  /** @var int */
  public $rowsLimitPercent;
  /** @var string */
  public $sampleMethod;
  /** @var GooglePrivacyDlpV2BigQueryTable */
  public $tableReference;
  protected $collection_key = 'includedFields';
  protected $excludedFieldsType = GooglePrivacyDlpV2FieldId::class;
  protected $excludedFieldsDataType = 'array';
  protected $identifyingFieldsType = GooglePrivacyDlpV2FieldId::class;
  protected $identifyingFieldsDataType = 'array';
  protected $includedFieldsType = GooglePrivacyDlpV2FieldId::class;
  protected $includedFieldsDataType = 'array';
  protected $tableReferenceType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $tableReferenceDataType = '';
  /** @param GooglePrivacyDlpV2FieldId[] */
  public function setExcludedFields($excludedFields)
  {
    $this->excludedFields = $excludedFields;
  }
  /** @return GooglePrivacyDlpV2FieldId[] */
  public function getExcludedFields()
  {
    return $this->excludedFields;
  }
  /** @param GooglePrivacyDlpV2FieldId[] */
  public function setIdentifyingFields($identifyingFields)
  {
    $this->identifyingFields = $identifyingFields;
  }
  /** @return GooglePrivacyDlpV2FieldId[] */
  public function getIdentifyingFields()
  {
    return $this->identifyingFields;
  }
  /** @param GooglePrivacyDlpV2FieldId[] */
  public function setIncludedFields($includedFields)
  {
    $this->includedFields = $includedFields;
  }
  /** @return GooglePrivacyDlpV2FieldId[] */
  public function getIncludedFields()
  {
    return $this->includedFields;
  }
  /** @param string */
  public function setRowsLimit($rowsLimit)
  {
    $this->rowsLimit = $rowsLimit;
  }
  /** @return string */
  public function getRowsLimit()
  {
    return $this->rowsLimit;
  }
  /** @param int */
  public function setRowsLimitPercent($rowsLimitPercent)
  {
    $this->rowsLimitPercent = $rowsLimitPercent;
  }
  /** @return int */
  public function getRowsLimitPercent()
  {
    return $this->rowsLimitPercent;
  }
  /** @param string */
  public function setSampleMethod($sampleMethod)
  {
    $this->sampleMethod = $sampleMethod;
  }
  /** @return string */
  public function getSampleMethod()
  {
    return $this->sampleMethod;
  }
  /** @param GooglePrivacyDlpV2BigQueryTable */
  public function setTableReference(GooglePrivacyDlpV2BigQueryTable $tableReference)
  {
    $this->tableReference = $tableReference;
  }
  /** @return GooglePrivacyDlpV2BigQueryTable */
  public function getTableReference()
  {
    return $this->tableReference;
  }
}

class GooglePrivacyDlpV2BigQueryTable extends \Google\Model
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

class GooglePrivacyDlpV2BoundingBox extends \Google\Model
{
  /** @var int */
  public $height;
  /** @var int */
  public $left;
  /** @var int */
  public $top;
  /** @var int */
  public $width;

  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param int */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /** @return int */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param int */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /** @return int */
  public function getTop()
  {
    return $this->top;
  }
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class GooglePrivacyDlpV2Bucket extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Value */
  public $max;
  /** @var GooglePrivacyDlpV2Value */
  public $min;
  /** @var GooglePrivacyDlpV2Value */
  public $replacementValue;
  protected $maxType = GooglePrivacyDlpV2Value::class;
  protected $maxDataType = '';
  protected $minType = GooglePrivacyDlpV2Value::class;
  protected $minDataType = '';
  protected $replacementValueType = GooglePrivacyDlpV2Value::class;
  protected $replacementValueDataType = '';
  /** @param GooglePrivacyDlpV2Value */
  public function setMax(GooglePrivacyDlpV2Value $max)
  {
    $this->max = $max;
  }
  /** @return GooglePrivacyDlpV2Value */
  public function getMax()
  {
    return $this->max;
  }
  /** @param GooglePrivacyDlpV2Value */
  public function setMin(GooglePrivacyDlpV2Value $min)
  {
    $this->min = $min;
  }
  /** @return GooglePrivacyDlpV2Value */
  public function getMin()
  {
    return $this->min;
  }
  /** @param GooglePrivacyDlpV2Value */
  public function setReplacementValue(GooglePrivacyDlpV2Value $replacementValue)
  {
    $this->replacementValue = $replacementValue;
  }
  /** @return GooglePrivacyDlpV2Value */
  public function getReplacementValue()
  {
    return $this->replacementValue;
  }
}

class GooglePrivacyDlpV2BucketingConfig extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2Bucket[] */
  public $buckets;
  protected $collection_key = 'buckets';
  protected $bucketsType = GooglePrivacyDlpV2Bucket::class;
  protected $bucketsDataType = 'array';
  /** @param GooglePrivacyDlpV2Bucket[] */
  public function setBuckets($buckets)
  {
    $this->buckets = $buckets;
  }
  /** @return GooglePrivacyDlpV2Bucket[] */
  public function getBuckets()
  {
    return $this->buckets;
  }
}

class GooglePrivacyDlpV2ByteContentItem extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $type;

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

class GooglePrivacyDlpV2CancelDlpJobRequest extends \Google\Model
{
}

class GooglePrivacyDlpV2CategoricalStatsConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2FieldId */
  public $field;
  protected $fieldType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldDataType = '';
  /** @param GooglePrivacyDlpV2FieldId */
  public function setField(GooglePrivacyDlpV2FieldId $field)
  {
    $this->field = $field;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getField()
  {
    return $this->field;
  }
}

class GooglePrivacyDlpV2CategoricalStatsHistogramBucket extends \Google\Collection
{
  /** @var string */
  public $bucketSize;
  /** @var string */
  public $bucketValueCount;
  /** @var GooglePrivacyDlpV2ValueFrequency[] */
  public $bucketValues;
  /** @var string */
  public $valueFrequencyLowerBound;
  /** @var string */
  public $valueFrequencyUpperBound;
  protected $collection_key = 'bucketValues';
  protected $bucketValuesType = GooglePrivacyDlpV2ValueFrequency::class;
  protected $bucketValuesDataType = 'array';
  /** @param string */
  public function setBucketSize($bucketSize)
  {
    $this->bucketSize = $bucketSize;
  }
  /** @return string */
  public function getBucketSize()
  {
    return $this->bucketSize;
  }
  /** @param string */
  public function setBucketValueCount($bucketValueCount)
  {
    $this->bucketValueCount = $bucketValueCount;
  }
  /** @return string */
  public function getBucketValueCount()
  {
    return $this->bucketValueCount;
  }
  /** @param GooglePrivacyDlpV2ValueFrequency[] */
  public function setBucketValues($bucketValues)
  {
    $this->bucketValues = $bucketValues;
  }
  /** @return GooglePrivacyDlpV2ValueFrequency[] */
  public function getBucketValues()
  {
    return $this->bucketValues;
  }
  /** @param string */
  public function setValueFrequencyLowerBound($valueFrequencyLowerBound)
  {
    $this->valueFrequencyLowerBound = $valueFrequencyLowerBound;
  }
  /** @return string */
  public function getValueFrequencyLowerBound()
  {
    return $this->valueFrequencyLowerBound;
  }
  /** @param string */
  public function setValueFrequencyUpperBound($valueFrequencyUpperBound)
  {
    $this->valueFrequencyUpperBound = $valueFrequencyUpperBound;
  }
  /** @return string */
  public function getValueFrequencyUpperBound()
  {
    return $this->valueFrequencyUpperBound;
  }
}

class GooglePrivacyDlpV2CategoricalStatsResult extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2CategoricalStatsHistogramBucket[] */
  public $valueFrequencyHistogramBuckets;
  protected $collection_key = 'valueFrequencyHistogramBuckets';
  protected $valueFrequencyHistogramBucketsType = GooglePrivacyDlpV2CategoricalStatsHistogramBucket::class;
  protected $valueFrequencyHistogramBucketsDataType = 'array';
  /** @param GooglePrivacyDlpV2CategoricalStatsHistogramBucket[] */
  public function setValueFrequencyHistogramBuckets($valueFrequencyHistogramBuckets)
  {
    $this->valueFrequencyHistogramBuckets = $valueFrequencyHistogramBuckets;
  }
  /** @return GooglePrivacyDlpV2CategoricalStatsHistogramBucket[] */
  public function getValueFrequencyHistogramBuckets()
  {
    return $this->valueFrequencyHistogramBuckets;
  }
}

class GooglePrivacyDlpV2CharacterMaskConfig extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2CharsToIgnore[] */
  public $charactersToIgnore;
  /** @var string */
  public $maskingCharacter;
  /** @var int */
  public $numberToMask;
  /** @var bool */
  public $reverseOrder;
  protected $collection_key = 'charactersToIgnore';
  protected $charactersToIgnoreType = GooglePrivacyDlpV2CharsToIgnore::class;
  protected $charactersToIgnoreDataType = 'array';
  /** @param GooglePrivacyDlpV2CharsToIgnore[] */
  public function setCharactersToIgnore($charactersToIgnore)
  {
    $this->charactersToIgnore = $charactersToIgnore;
  }
  /** @return GooglePrivacyDlpV2CharsToIgnore[] */
  public function getCharactersToIgnore()
  {
    return $this->charactersToIgnore;
  }
  /** @param string */
  public function setMaskingCharacter($maskingCharacter)
  {
    $this->maskingCharacter = $maskingCharacter;
  }
  /** @return string */
  public function getMaskingCharacter()
  {
    return $this->maskingCharacter;
  }
  /** @param int */
  public function setNumberToMask($numberToMask)
  {
    $this->numberToMask = $numberToMask;
  }
  /** @return int */
  public function getNumberToMask()
  {
    return $this->numberToMask;
  }
  /** @param bool */
  public function setReverseOrder($reverseOrder)
  {
    $this->reverseOrder = $reverseOrder;
  }
  /** @return bool */
  public function getReverseOrder()
  {
    return $this->reverseOrder;
  }
}

class GooglePrivacyDlpV2CharsToIgnore extends \Google\Model
{
  /** @var string */
  public $charactersToSkip;
  /** @var string */
  public $commonCharactersToIgnore;

  /** @param string */
  public function setCharactersToSkip($charactersToSkip)
  {
    $this->charactersToSkip = $charactersToSkip;
  }
  /** @return string */
  public function getCharactersToSkip()
  {
    return $this->charactersToSkip;
  }
  /** @param string */
  public function setCommonCharactersToIgnore($commonCharactersToIgnore)
  {
    $this->commonCharactersToIgnore = $commonCharactersToIgnore;
  }
  /** @return string */
  public function getCommonCharactersToIgnore()
  {
    return $this->commonCharactersToIgnore;
  }
}

class GooglePrivacyDlpV2CloudStorageFileSet extends \Google\Model
{
  /** @var string */
  public $url;

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

class GooglePrivacyDlpV2CloudStorageOptions extends \Google\Collection
{
  /** @var string */
  public $bytesLimitPerFile;
  /** @var int */
  public $bytesLimitPerFilePercent;
  /** @var GooglePrivacyDlpV2FileSet */
  public $fileSet;
  /** @var string[] */
  public $fileTypes;
  /** @var int */
  public $filesLimitPercent;
  /** @var string */
  public $sampleMethod;
  protected $collection_key = 'fileTypes';
  protected $fileSetType = GooglePrivacyDlpV2FileSet::class;
  protected $fileSetDataType = '';
  /** @param string */
  public function setBytesLimitPerFile($bytesLimitPerFile)
  {
    $this->bytesLimitPerFile = $bytesLimitPerFile;
  }
  /** @return string */
  public function getBytesLimitPerFile()
  {
    return $this->bytesLimitPerFile;
  }
  /** @param int */
  public function setBytesLimitPerFilePercent($bytesLimitPerFilePercent)
  {
    $this->bytesLimitPerFilePercent = $bytesLimitPerFilePercent;
  }
  /** @return int */
  public function getBytesLimitPerFilePercent()
  {
    return $this->bytesLimitPerFilePercent;
  }
  /** @param GooglePrivacyDlpV2FileSet */
  public function setFileSet(GooglePrivacyDlpV2FileSet $fileSet)
  {
    $this->fileSet = $fileSet;
  }
  /** @return GooglePrivacyDlpV2FileSet */
  public function getFileSet()
  {
    return $this->fileSet;
  }
  /** @param string[] */
  public function setFileTypes($fileTypes)
  {
    $this->fileTypes = $fileTypes;
  }
  /** @return string[] */
  public function getFileTypes()
  {
    return $this->fileTypes;
  }
  /** @param int */
  public function setFilesLimitPercent($filesLimitPercent)
  {
    $this->filesLimitPercent = $filesLimitPercent;
  }
  /** @return int */
  public function getFilesLimitPercent()
  {
    return $this->filesLimitPercent;
  }
  /** @param string */
  public function setSampleMethod($sampleMethod)
  {
    $this->sampleMethod = $sampleMethod;
  }
  /** @return string */
  public function getSampleMethod()
  {
    return $this->sampleMethod;
  }
}

class GooglePrivacyDlpV2CloudStoragePath extends \Google\Model
{
  /** @var string */
  public $path;

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

class GooglePrivacyDlpV2CloudStorageRegexFileSet extends \Google\Collection
{
  /** @var string */
  public $bucketName;
  /** @var string[] */
  public $excludeRegex;
  /** @var string[] */
  public $includeRegex;
  protected $collection_key = 'includeRegex';
  /** @param string */
  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  /** @return string */
  public function getBucketName()
  {
    return $this->bucketName;
  }
  /** @param string[] */
  public function setExcludeRegex($excludeRegex)
  {
    $this->excludeRegex = $excludeRegex;
  }
  /** @return string[] */
  public function getExcludeRegex()
  {
    return $this->excludeRegex;
  }
  /** @param string[] */
  public function setIncludeRegex($includeRegex)
  {
    $this->includeRegex = $includeRegex;
  }
  /** @return string[] */
  public function getIncludeRegex()
  {
    return $this->includeRegex;
  }
}

class GooglePrivacyDlpV2Color extends \Google\Model
{
  /** @var float */
  public $blue;
  /** @var float */
  public $green;
  /** @var float */
  public $red;

  /** @param float */
  public function setBlue($blue)
  {
    $this->blue = $blue;
  }
  /** @return float */
  public function getBlue()
  {
    return $this->blue;
  }
  /** @param float */
  public function setGreen($green)
  {
    $this->green = $green;
  }
  /** @return float */
  public function getGreen()
  {
    return $this->green;
  }
  /** @param float */
  public function setRed($red)
  {
    $this->red = $red;
  }
  /** @return float */
  public function getRed()
  {
    return $this->red;
  }
}

class GooglePrivacyDlpV2Condition extends \Google\Model
{
  /** @var GooglePrivacyDlpV2FieldId */
  public $field;
  /** @var string */
  public $operator;
  /** @var GooglePrivacyDlpV2Value */
  public $value;
  protected $fieldType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldDataType = '';
  protected $valueType = GooglePrivacyDlpV2Value::class;
  protected $valueDataType = '';
  /** @param GooglePrivacyDlpV2FieldId */
  public function setField(GooglePrivacyDlpV2FieldId $field)
  {
    $this->field = $field;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getField()
  {
    return $this->field;
  }
  /** @param string */
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /** @return string */
  public function getOperator()
  {
    return $this->operator;
  }
  /** @param GooglePrivacyDlpV2Value */
  public function setValue(GooglePrivacyDlpV2Value $value)
  {
    $this->value = $value;
  }
  /** @return GooglePrivacyDlpV2Value */
  public function getValue()
  {
    return $this->value;
  }
}

class GooglePrivacyDlpV2Conditions extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2Condition[] */
  public $conditions;
  protected $collection_key = 'conditions';
  protected $conditionsType = GooglePrivacyDlpV2Condition::class;
  protected $conditionsDataType = 'array';
  /** @param GooglePrivacyDlpV2Condition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return GooglePrivacyDlpV2Condition[] */
  public function getConditions()
  {
    return $this->conditions;
  }
}

class GooglePrivacyDlpV2Container extends \Google\Model
{
  /** @var string */
  public $fullPath;
  /** @var string */
  public $projectId;
  /** @var string */
  public $relativePath;
  /** @var string */
  public $rootPath;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $version;

  /** @param string */
  public function setFullPath($fullPath)
  {
    $this->fullPath = $fullPath;
  }
  /** @return string */
  public function getFullPath()
  {
    return $this->fullPath;
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
  public function setRelativePath($relativePath)
  {
    $this->relativePath = $relativePath;
  }
  /** @return string */
  public function getRelativePath()
  {
    return $this->relativePath;
  }
  /** @param string */
  public function setRootPath($rootPath)
  {
    $this->rootPath = $rootPath;
  }
  /** @return string */
  public function getRootPath()
  {
    return $this->rootPath;
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

class GooglePrivacyDlpV2ContentItem extends \Google\Model
{
  /** @var GooglePrivacyDlpV2ByteContentItem */
  public $byteItem;
  /** @var GooglePrivacyDlpV2Table */
  public $table;
  /** @var string */
  public $value;
  protected $byteItemType = GooglePrivacyDlpV2ByteContentItem::class;
  protected $byteItemDataType = '';
  protected $tableType = GooglePrivacyDlpV2Table::class;
  protected $tableDataType = '';
  /** @param GooglePrivacyDlpV2ByteContentItem */
  public function setByteItem(GooglePrivacyDlpV2ByteContentItem $byteItem)
  {
    $this->byteItem = $byteItem;
  }
  /** @return GooglePrivacyDlpV2ByteContentItem */
  public function getByteItem()
  {
    return $this->byteItem;
  }
  /** @param GooglePrivacyDlpV2Table */
  public function setTable(GooglePrivacyDlpV2Table $table)
  {
    $this->table = $table;
  }
  /** @return GooglePrivacyDlpV2Table */
  public function getTable()
  {
    return $this->table;
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

class GooglePrivacyDlpV2ContentLocation extends \Google\Model
{
  /** @var string */
  public $containerName;
  /** @var string */
  public $containerTimestamp;
  /** @var string */
  public $containerVersion;
  /** @var GooglePrivacyDlpV2DocumentLocation */
  public $documentLocation;
  /** @var GooglePrivacyDlpV2ImageLocation */
  public $imageLocation;
  /** @var GooglePrivacyDlpV2MetadataLocation */
  public $metadataLocation;
  /** @var GooglePrivacyDlpV2RecordLocation */
  public $recordLocation;
  protected $documentLocationType = GooglePrivacyDlpV2DocumentLocation::class;
  protected $documentLocationDataType = '';
  protected $imageLocationType = GooglePrivacyDlpV2ImageLocation::class;
  protected $imageLocationDataType = '';
  protected $metadataLocationType = GooglePrivacyDlpV2MetadataLocation::class;
  protected $metadataLocationDataType = '';
  protected $recordLocationType = GooglePrivacyDlpV2RecordLocation::class;
  protected $recordLocationDataType = '';
  /** @param string */
  public function setContainerName($containerName)
  {
    $this->containerName = $containerName;
  }
  /** @return string */
  public function getContainerName()
  {
    return $this->containerName;
  }
  /** @param string */
  public function setContainerTimestamp($containerTimestamp)
  {
    $this->containerTimestamp = $containerTimestamp;
  }
  /** @return string */
  public function getContainerTimestamp()
  {
    return $this->containerTimestamp;
  }
  /** @param string */
  public function setContainerVersion($containerVersion)
  {
    $this->containerVersion = $containerVersion;
  }
  /** @return string */
  public function getContainerVersion()
  {
    return $this->containerVersion;
  }
  /** @param GooglePrivacyDlpV2DocumentLocation */
  public function setDocumentLocation(GooglePrivacyDlpV2DocumentLocation $documentLocation)
  {
    $this->documentLocation = $documentLocation;
  }
  /** @return GooglePrivacyDlpV2DocumentLocation */
  public function getDocumentLocation()
  {
    return $this->documentLocation;
  }
  /** @param GooglePrivacyDlpV2ImageLocation */
  public function setImageLocation(GooglePrivacyDlpV2ImageLocation $imageLocation)
  {
    $this->imageLocation = $imageLocation;
  }
  /** @return GooglePrivacyDlpV2ImageLocation */
  public function getImageLocation()
  {
    return $this->imageLocation;
  }
  /** @param GooglePrivacyDlpV2MetadataLocation */
  public function setMetadataLocation(GooglePrivacyDlpV2MetadataLocation $metadataLocation)
  {
    $this->metadataLocation = $metadataLocation;
  }
  /** @return GooglePrivacyDlpV2MetadataLocation */
  public function getMetadataLocation()
  {
    return $this->metadataLocation;
  }
  /** @param GooglePrivacyDlpV2RecordLocation */
  public function setRecordLocation(GooglePrivacyDlpV2RecordLocation $recordLocation)
  {
    $this->recordLocation = $recordLocation;
  }
  /** @return GooglePrivacyDlpV2RecordLocation */
  public function getRecordLocation()
  {
    return $this->recordLocation;
  }
}

class GooglePrivacyDlpV2CreateDeidentifyTemplateRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2DeidentifyTemplate */
  public $deidentifyTemplate;
  /** @var string */
  public $locationId;
  /** @var string */
  public $templateId;
  protected $deidentifyTemplateType = GooglePrivacyDlpV2DeidentifyTemplate::class;
  protected $deidentifyTemplateDataType = '';
  /** @param GooglePrivacyDlpV2DeidentifyTemplate */
  public function setDeidentifyTemplate(GooglePrivacyDlpV2DeidentifyTemplate $deidentifyTemplate)
  {
    $this->deidentifyTemplate = $deidentifyTemplate;
  }
  /** @return GooglePrivacyDlpV2DeidentifyTemplate */
  public function getDeidentifyTemplate()
  {
    return $this->deidentifyTemplate;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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
}

class GooglePrivacyDlpV2CreateDlpJobRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2InspectJobConfig */
  public $inspectJob;
  /** @var string */
  public $jobId;
  /** @var string */
  public $locationId;
  /** @var GooglePrivacyDlpV2RiskAnalysisJobConfig */
  public $riskJob;
  protected $inspectJobType = GooglePrivacyDlpV2InspectJobConfig::class;
  protected $inspectJobDataType = '';
  protected $riskJobType = GooglePrivacyDlpV2RiskAnalysisJobConfig::class;
  protected $riskJobDataType = '';
  /** @param GooglePrivacyDlpV2InspectJobConfig */
  public function setInspectJob(GooglePrivacyDlpV2InspectJobConfig $inspectJob)
  {
    $this->inspectJob = $inspectJob;
  }
  /** @return GooglePrivacyDlpV2InspectJobConfig */
  public function getInspectJob()
  {
    return $this->inspectJob;
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
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
  /** @param GooglePrivacyDlpV2RiskAnalysisJobConfig */
  public function setRiskJob(GooglePrivacyDlpV2RiskAnalysisJobConfig $riskJob)
  {
    $this->riskJob = $riskJob;
  }
  /** @return GooglePrivacyDlpV2RiskAnalysisJobConfig */
  public function getRiskJob()
  {
    return $this->riskJob;
  }
}

class GooglePrivacyDlpV2CreateInspectTemplateRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2InspectTemplate */
  public $inspectTemplate;
  /** @var string */
  public $locationId;
  /** @var string */
  public $templateId;
  protected $inspectTemplateType = GooglePrivacyDlpV2InspectTemplate::class;
  protected $inspectTemplateDataType = '';
  /** @param GooglePrivacyDlpV2InspectTemplate */
  public function setInspectTemplate(GooglePrivacyDlpV2InspectTemplate $inspectTemplate)
  {
    $this->inspectTemplate = $inspectTemplate;
  }
  /** @return GooglePrivacyDlpV2InspectTemplate */
  public function getInspectTemplate()
  {
    return $this->inspectTemplate;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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
}

class GooglePrivacyDlpV2CreateJobTriggerRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2JobTrigger */
  public $jobTrigger;
  /** @var string */
  public $locationId;
  /** @var string */
  public $triggerId;
  protected $jobTriggerType = GooglePrivacyDlpV2JobTrigger::class;
  protected $jobTriggerDataType = '';
  /** @param GooglePrivacyDlpV2JobTrigger */
  public function setJobTrigger(GooglePrivacyDlpV2JobTrigger $jobTrigger)
  {
    $this->jobTrigger = $jobTrigger;
  }
  /** @return GooglePrivacyDlpV2JobTrigger */
  public function getJobTrigger()
  {
    return $this->jobTrigger;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
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

class GooglePrivacyDlpV2CreateStoredInfoTypeRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2StoredInfoTypeConfig */
  public $config;
  /** @var string */
  public $locationId;
  /** @var string */
  public $storedInfoTypeId;
  protected $configType = GooglePrivacyDlpV2StoredInfoTypeConfig::class;
  protected $configDataType = '';
  /** @param GooglePrivacyDlpV2StoredInfoTypeConfig */
  public function setConfig(GooglePrivacyDlpV2StoredInfoTypeConfig $config)
  {
    $this->config = $config;
  }
  /** @return GooglePrivacyDlpV2StoredInfoTypeConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
  /** @param string */
  public function setStoredInfoTypeId($storedInfoTypeId)
  {
    $this->storedInfoTypeId = $storedInfoTypeId;
  }
  /** @return string */
  public function getStoredInfoTypeId()
  {
    return $this->storedInfoTypeId;
  }
}

class GooglePrivacyDlpV2CryptoDeterministicConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2FieldId */
  public $context;
  /** @var GooglePrivacyDlpV2CryptoKey */
  public $cryptoKey;
  /** @var GooglePrivacyDlpV2InfoType */
  public $surrogateInfoType;
  protected $contextType = GooglePrivacyDlpV2FieldId::class;
  protected $contextDataType = '';
  protected $cryptoKeyType = GooglePrivacyDlpV2CryptoKey::class;
  protected $cryptoKeyDataType = '';
  protected $surrogateInfoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $surrogateInfoTypeDataType = '';
  /** @param GooglePrivacyDlpV2FieldId */
  public function setContext(GooglePrivacyDlpV2FieldId $context)
  {
    $this->context = $context;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getContext()
  {
    return $this->context;
  }
  /** @param GooglePrivacyDlpV2CryptoKey */
  public function setCryptoKey(GooglePrivacyDlpV2CryptoKey $cryptoKey)
  {
    $this->cryptoKey = $cryptoKey;
  }
  /** @return GooglePrivacyDlpV2CryptoKey */
  public function getCryptoKey()
  {
    return $this->cryptoKey;
  }
  /** @param GooglePrivacyDlpV2InfoType */
  public function setSurrogateInfoType(GooglePrivacyDlpV2InfoType $surrogateInfoType)
  {
    $this->surrogateInfoType = $surrogateInfoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getSurrogateInfoType()
  {
    return $this->surrogateInfoType;
  }
}

class GooglePrivacyDlpV2CryptoHashConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2CryptoKey */
  public $cryptoKey;
  protected $cryptoKeyType = GooglePrivacyDlpV2CryptoKey::class;
  protected $cryptoKeyDataType = '';
  /** @param GooglePrivacyDlpV2CryptoKey */
  public function setCryptoKey(GooglePrivacyDlpV2CryptoKey $cryptoKey)
  {
    $this->cryptoKey = $cryptoKey;
  }
  /** @return GooglePrivacyDlpV2CryptoKey */
  public function getCryptoKey()
  {
    return $this->cryptoKey;
  }
}

class GooglePrivacyDlpV2CryptoKey extends \Google\Model
{
  /** @var GooglePrivacyDlpV2KmsWrappedCryptoKey */
  public $kmsWrapped;
  /** @var GooglePrivacyDlpV2TransientCryptoKey */
  public $transient;
  /** @var GooglePrivacyDlpV2UnwrappedCryptoKey */
  public $unwrapped;
  protected $kmsWrappedType = GooglePrivacyDlpV2KmsWrappedCryptoKey::class;
  protected $kmsWrappedDataType = '';
  protected $transientType = GooglePrivacyDlpV2TransientCryptoKey::class;
  protected $transientDataType = '';
  protected $unwrappedType = GooglePrivacyDlpV2UnwrappedCryptoKey::class;
  protected $unwrappedDataType = '';
  /** @param GooglePrivacyDlpV2KmsWrappedCryptoKey */
  public function setKmsWrapped(GooglePrivacyDlpV2KmsWrappedCryptoKey $kmsWrapped)
  {
    $this->kmsWrapped = $kmsWrapped;
  }
  /** @return GooglePrivacyDlpV2KmsWrappedCryptoKey */
  public function getKmsWrapped()
  {
    return $this->kmsWrapped;
  }
  /** @param GooglePrivacyDlpV2TransientCryptoKey */
  public function setTransient(GooglePrivacyDlpV2TransientCryptoKey $transient)
  {
    $this->transient = $transient;
  }
  /** @return GooglePrivacyDlpV2TransientCryptoKey */
  public function getTransient()
  {
    return $this->transient;
  }
  /** @param GooglePrivacyDlpV2UnwrappedCryptoKey */
  public function setUnwrapped(GooglePrivacyDlpV2UnwrappedCryptoKey $unwrapped)
  {
    $this->unwrapped = $unwrapped;
  }
  /** @return GooglePrivacyDlpV2UnwrappedCryptoKey */
  public function getUnwrapped()
  {
    return $this->unwrapped;
  }
}

class GooglePrivacyDlpV2CryptoReplaceFfxFpeConfig extends \Google\Model
{
  /** @var string */
  public $commonAlphabet;
  /** @var GooglePrivacyDlpV2FieldId */
  public $context;
  /** @var GooglePrivacyDlpV2CryptoKey */
  public $cryptoKey;
  /** @var string */
  public $customAlphabet;
  /** @var int */
  public $radix;
  /** @var GooglePrivacyDlpV2InfoType */
  public $surrogateInfoType;
  protected $contextType = GooglePrivacyDlpV2FieldId::class;
  protected $contextDataType = '';
  protected $cryptoKeyType = GooglePrivacyDlpV2CryptoKey::class;
  protected $cryptoKeyDataType = '';
  protected $surrogateInfoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $surrogateInfoTypeDataType = '';
  /** @param string */
  public function setCommonAlphabet($commonAlphabet)
  {
    $this->commonAlphabet = $commonAlphabet;
  }
  /** @return string */
  public function getCommonAlphabet()
  {
    return $this->commonAlphabet;
  }
  /** @param GooglePrivacyDlpV2FieldId */
  public function setContext(GooglePrivacyDlpV2FieldId $context)
  {
    $this->context = $context;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getContext()
  {
    return $this->context;
  }
  /** @param GooglePrivacyDlpV2CryptoKey */
  public function setCryptoKey(GooglePrivacyDlpV2CryptoKey $cryptoKey)
  {
    $this->cryptoKey = $cryptoKey;
  }
  /** @return GooglePrivacyDlpV2CryptoKey */
  public function getCryptoKey()
  {
    return $this->cryptoKey;
  }
  /** @param string */
  public function setCustomAlphabet($customAlphabet)
  {
    $this->customAlphabet = $customAlphabet;
  }
  /** @return string */
  public function getCustomAlphabet()
  {
    return $this->customAlphabet;
  }
  /** @param int */
  public function setRadix($radix)
  {
    $this->radix = $radix;
  }
  /** @return int */
  public function getRadix()
  {
    return $this->radix;
  }
  /** @param GooglePrivacyDlpV2InfoType */
  public function setSurrogateInfoType(GooglePrivacyDlpV2InfoType $surrogateInfoType)
  {
    $this->surrogateInfoType = $surrogateInfoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getSurrogateInfoType()
  {
    return $this->surrogateInfoType;
  }
}

class GooglePrivacyDlpV2CustomInfoType extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2DetectionRule[] */
  public $detectionRules;
  /** @var GooglePrivacyDlpV2Dictionary */
  public $dictionary;
  /** @var string */
  public $exclusionType;
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  /** @var string */
  public $likelihood;
  /** @var GooglePrivacyDlpV2Regex */
  public $regex;
  /** @var GooglePrivacyDlpV2StoredType */
  public $storedType;
  /** @var GooglePrivacyDlpV2SurrogateType */
  public $surrogateType;
  protected $collection_key = 'detectionRules';
  protected $detectionRulesType = GooglePrivacyDlpV2DetectionRule::class;
  protected $detectionRulesDataType = 'array';
  protected $dictionaryType = GooglePrivacyDlpV2Dictionary::class;
  protected $dictionaryDataType = '';
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
  protected $regexType = GooglePrivacyDlpV2Regex::class;
  protected $regexDataType = '';
  protected $storedTypeType = GooglePrivacyDlpV2StoredType::class;
  protected $storedTypeDataType = '';
  protected $surrogateTypeType = GooglePrivacyDlpV2SurrogateType::class;
  protected $surrogateTypeDataType = '';
  /** @param GooglePrivacyDlpV2DetectionRule[] */
  public function setDetectionRules($detectionRules)
  {
    $this->detectionRules = $detectionRules;
  }
  /** @return GooglePrivacyDlpV2DetectionRule[] */
  public function getDetectionRules()
  {
    return $this->detectionRules;
  }
  /** @param GooglePrivacyDlpV2Dictionary */
  public function setDictionary(GooglePrivacyDlpV2Dictionary $dictionary)
  {
    $this->dictionary = $dictionary;
  }
  /** @return GooglePrivacyDlpV2Dictionary */
  public function getDictionary()
  {
    return $this->dictionary;
  }
  /** @param string */
  public function setExclusionType($exclusionType)
  {
    $this->exclusionType = $exclusionType;
  }
  /** @return string */
  public function getExclusionType()
  {
    return $this->exclusionType;
  }
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
  }
  /** @param string */
  public function setLikelihood($likelihood)
  {
    $this->likelihood = $likelihood;
  }
  /** @return string */
  public function getLikelihood()
  {
    return $this->likelihood;
  }
  /** @param GooglePrivacyDlpV2Regex */
  public function setRegex(GooglePrivacyDlpV2Regex $regex)
  {
    $this->regex = $regex;
  }
  /** @return GooglePrivacyDlpV2Regex */
  public function getRegex()
  {
    return $this->regex;
  }
  /** @param GooglePrivacyDlpV2StoredType */
  public function setStoredType(GooglePrivacyDlpV2StoredType $storedType)
  {
    $this->storedType = $storedType;
  }
  /** @return GooglePrivacyDlpV2StoredType */
  public function getStoredType()
  {
    return $this->storedType;
  }
  /** @param GooglePrivacyDlpV2SurrogateType */
  public function setSurrogateType(GooglePrivacyDlpV2SurrogateType $surrogateType)
  {
    $this->surrogateType = $surrogateType;
  }
  /** @return GooglePrivacyDlpV2SurrogateType */
  public function getSurrogateType()
  {
    return $this->surrogateType;
  }
}

class GooglePrivacyDlpV2DataProfileAction extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Export */
  public $exportData;
  /** @var GooglePrivacyDlpV2PubSubNotification */
  public $pubSubNotification;
  protected $exportDataType = GooglePrivacyDlpV2Export::class;
  protected $exportDataDataType = '';
  protected $pubSubNotificationType = GooglePrivacyDlpV2PubSubNotification::class;
  protected $pubSubNotificationDataType = '';
  /** @param GooglePrivacyDlpV2Export */
  public function setExportData(GooglePrivacyDlpV2Export $exportData)
  {
    $this->exportData = $exportData;
  }
  /** @return GooglePrivacyDlpV2Export */
  public function getExportData()
  {
    return $this->exportData;
  }
  /** @param GooglePrivacyDlpV2PubSubNotification */
  public function setPubSubNotification(GooglePrivacyDlpV2PubSubNotification $pubSubNotification)
  {
    $this->pubSubNotification = $pubSubNotification;
  }
  /** @return GooglePrivacyDlpV2PubSubNotification */
  public function getPubSubNotification()
  {
    return $this->pubSubNotification;
  }
}

class GooglePrivacyDlpV2DataProfileConfigSnapshot extends \Google\Model
{
  /** @var GooglePrivacyDlpV2DataProfileJobConfig */
  public $dataProfileJob;
  /** @var GooglePrivacyDlpV2InspectConfig */
  public $inspectConfig;
  protected $dataProfileJobType = GooglePrivacyDlpV2DataProfileJobConfig::class;
  protected $dataProfileJobDataType = '';
  protected $inspectConfigType = GooglePrivacyDlpV2InspectConfig::class;
  protected $inspectConfigDataType = '';
  /** @param GooglePrivacyDlpV2DataProfileJobConfig */
  public function setDataProfileJob(GooglePrivacyDlpV2DataProfileJobConfig $dataProfileJob)
  {
    $this->dataProfileJob = $dataProfileJob;
  }
  /** @return GooglePrivacyDlpV2DataProfileJobConfig */
  public function getDataProfileJob()
  {
    return $this->dataProfileJob;
  }
  /** @param GooglePrivacyDlpV2InspectConfig */
  public function setInspectConfig(GooglePrivacyDlpV2InspectConfig $inspectConfig)
  {
    $this->inspectConfig = $inspectConfig;
  }
  /** @return GooglePrivacyDlpV2InspectConfig */
  public function getInspectConfig()
  {
    return $this->inspectConfig;
  }
}

class GooglePrivacyDlpV2DataProfileJobConfig extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2DataProfileAction[] */
  public $dataProfileActions;
  /** @var string[] */
  public $inspectTemplates;
  /** @var GooglePrivacyDlpV2DataProfileLocation */
  public $location;
  /** @var string */
  public $projectId;
  protected $collection_key = 'inspectTemplates';
  protected $dataProfileActionsType = GooglePrivacyDlpV2DataProfileAction::class;
  protected $dataProfileActionsDataType = 'array';
  protected $locationType = GooglePrivacyDlpV2DataProfileLocation::class;
  protected $locationDataType = '';
  /** @param GooglePrivacyDlpV2DataProfileAction[] */
  public function setDataProfileActions($dataProfileActions)
  {
    $this->dataProfileActions = $dataProfileActions;
  }
  /** @return GooglePrivacyDlpV2DataProfileAction[] */
  public function getDataProfileActions()
  {
    return $this->dataProfileActions;
  }
  /** @param string[] */
  public function setInspectTemplates($inspectTemplates)
  {
    $this->inspectTemplates = $inspectTemplates;
  }
  /** @return string[] */
  public function getInspectTemplates()
  {
    return $this->inspectTemplates;
  }
  /** @param GooglePrivacyDlpV2DataProfileLocation */
  public function setLocation(GooglePrivacyDlpV2DataProfileLocation $location)
  {
    $this->location = $location;
  }
  /** @return GooglePrivacyDlpV2DataProfileLocation */
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

class GooglePrivacyDlpV2DataProfileLocation extends \Google\Model
{
  /** @var string */
  public $folderId;
  /** @var string */
  public $organizationId;

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
  public function setOrganizationId($organizationId)
  {
    $this->organizationId = $organizationId;
  }
  /** @return string */
  public function getOrganizationId()
  {
    return $this->organizationId;
  }
}

class GooglePrivacyDlpV2DataProfilePubSubCondition extends \Google\Model
{
  /** @var GooglePrivacyDlpV2PubSubExpressions */
  public $expressions;
  protected $expressionsType = GooglePrivacyDlpV2PubSubExpressions::class;
  protected $expressionsDataType = '';
  /** @param GooglePrivacyDlpV2PubSubExpressions */
  public function setExpressions(GooglePrivacyDlpV2PubSubExpressions $expressions)
  {
    $this->expressions = $expressions;
  }
  /** @return GooglePrivacyDlpV2PubSubExpressions */
  public function getExpressions()
  {
    return $this->expressions;
  }
}

class GooglePrivacyDlpV2DataProfilePubSubMessage extends \Google\Model
{
  /** @var string */
  public $event;
  /** @var GooglePrivacyDlpV2TableDataProfile */
  public $profile;
  protected $profileType = GooglePrivacyDlpV2TableDataProfile::class;
  protected $profileDataType = '';
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
  /** @param GooglePrivacyDlpV2TableDataProfile */
  public function setProfile(GooglePrivacyDlpV2TableDataProfile $profile)
  {
    $this->profile = $profile;
  }
  /** @return GooglePrivacyDlpV2TableDataProfile */
  public function getProfile()
  {
    return $this->profile;
  }
}

class GooglePrivacyDlpV2DataRiskLevel extends \Google\Model
{
  /** @var string */
  public $score;

  /** @param string */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return string */
  public function getScore()
  {
    return $this->score;
  }
}

class GooglePrivacyDlpV2DatastoreKey extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Key */
  public $entityKey;
  protected $entityKeyType = GooglePrivacyDlpV2Key::class;
  protected $entityKeyDataType = '';
  /** @param GooglePrivacyDlpV2Key */
  public function setEntityKey(GooglePrivacyDlpV2Key $entityKey)
  {
    $this->entityKey = $entityKey;
  }
  /** @return GooglePrivacyDlpV2Key */
  public function getEntityKey()
  {
    return $this->entityKey;
  }
}

class GooglePrivacyDlpV2DatastoreOptions extends \Google\Model
{
  /** @var GooglePrivacyDlpV2KindExpression */
  public $kind;
  /** @var GooglePrivacyDlpV2PartitionId */
  public $partitionId;
  protected $kindType = GooglePrivacyDlpV2KindExpression::class;
  protected $kindDataType = '';
  protected $partitionIdType = GooglePrivacyDlpV2PartitionId::class;
  protected $partitionIdDataType = '';
  /** @param GooglePrivacyDlpV2KindExpression */
  public function setKind(GooglePrivacyDlpV2KindExpression $kind)
  {
    $this->kind = $kind;
  }
  /** @return GooglePrivacyDlpV2KindExpression */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param GooglePrivacyDlpV2PartitionId */
  public function setPartitionId(GooglePrivacyDlpV2PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }
  /** @return GooglePrivacyDlpV2PartitionId */
  public function getPartitionId()
  {
    return $this->partitionId;
  }
}

class GooglePrivacyDlpV2DateShiftConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2FieldId */
  public $context;
  /** @var GooglePrivacyDlpV2CryptoKey */
  public $cryptoKey;
  /** @var int */
  public $lowerBoundDays;
  /** @var int */
  public $upperBoundDays;
  protected $contextType = GooglePrivacyDlpV2FieldId::class;
  protected $contextDataType = '';
  protected $cryptoKeyType = GooglePrivacyDlpV2CryptoKey::class;
  protected $cryptoKeyDataType = '';
  /** @param GooglePrivacyDlpV2FieldId */
  public function setContext(GooglePrivacyDlpV2FieldId $context)
  {
    $this->context = $context;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getContext()
  {
    return $this->context;
  }
  /** @param GooglePrivacyDlpV2CryptoKey */
  public function setCryptoKey(GooglePrivacyDlpV2CryptoKey $cryptoKey)
  {
    $this->cryptoKey = $cryptoKey;
  }
  /** @return GooglePrivacyDlpV2CryptoKey */
  public function getCryptoKey()
  {
    return $this->cryptoKey;
  }
  /** @param int */
  public function setLowerBoundDays($lowerBoundDays)
  {
    $this->lowerBoundDays = $lowerBoundDays;
  }
  /** @return int */
  public function getLowerBoundDays()
  {
    return $this->lowerBoundDays;
  }
  /** @param int */
  public function setUpperBoundDays($upperBoundDays)
  {
    $this->upperBoundDays = $upperBoundDays;
  }
  /** @return int */
  public function getUpperBoundDays()
  {
    return $this->upperBoundDays;
  }
}

class GooglePrivacyDlpV2DateTime extends \Google\Model
{
  /** @var GoogleTypeDate */
  public $date;
  /** @var string */
  public $dayOfWeek;
  /** @var GoogleTypeTimeOfDay */
  public $time;
  /** @var GooglePrivacyDlpV2TimeZone */
  public $timeZone;
  protected $dateType = GoogleTypeDate::class;
  protected $dateDataType = '';
  protected $timeType = GoogleTypeTimeOfDay::class;
  protected $timeDataType = '';
  protected $timeZoneType = GooglePrivacyDlpV2TimeZone::class;
  protected $timeZoneDataType = '';
  /** @param GoogleTypeDate */
  public function setDate(GoogleTypeDate $date)
  {
    $this->date = $date;
  }
  /** @return GoogleTypeDate */
  public function getDate()
  {
    return $this->date;
  }
  /** @param string */
  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  /** @return string */
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
  /** @param GoogleTypeTimeOfDay */
  public function setTime(GoogleTypeTimeOfDay $time)
  {
    $this->time = $time;
  }
  /** @return GoogleTypeTimeOfDay */
  public function getTime()
  {
    return $this->time;
  }
  /** @param GooglePrivacyDlpV2TimeZone */
  public function setTimeZone(GooglePrivacyDlpV2TimeZone $timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return GooglePrivacyDlpV2TimeZone */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

class GooglePrivacyDlpV2Deidentify extends \Google\Collection
{
  /** @var string */
  public $cloudStorageOutput;
  /** @var string[] */
  public $fileTypesToTransform;
  /** @var GooglePrivacyDlpV2TransformationConfig */
  public $transformationConfig;
  /** @var GooglePrivacyDlpV2TransformationDetailsStorageConfig */
  public $transformationDetailsStorageConfig;
  protected $collection_key = 'fileTypesToTransform';
  protected $transformationConfigType = GooglePrivacyDlpV2TransformationConfig::class;
  protected $transformationConfigDataType = '';
  protected $transformationDetailsStorageConfigType = GooglePrivacyDlpV2TransformationDetailsStorageConfig::class;
  protected $transformationDetailsStorageConfigDataType = '';
  /** @param string */
  public function setCloudStorageOutput($cloudStorageOutput)
  {
    $this->cloudStorageOutput = $cloudStorageOutput;
  }
  /** @return string */
  public function getCloudStorageOutput()
  {
    return $this->cloudStorageOutput;
  }
  /** @param string[] */
  public function setFileTypesToTransform($fileTypesToTransform)
  {
    $this->fileTypesToTransform = $fileTypesToTransform;
  }
  /** @return string[] */
  public function getFileTypesToTransform()
  {
    return $this->fileTypesToTransform;
  }
  /** @param GooglePrivacyDlpV2TransformationConfig */
  public function setTransformationConfig(GooglePrivacyDlpV2TransformationConfig $transformationConfig)
  {
    $this->transformationConfig = $transformationConfig;
  }
  /** @return GooglePrivacyDlpV2TransformationConfig */
  public function getTransformationConfig()
  {
    return $this->transformationConfig;
  }
  /** @param GooglePrivacyDlpV2TransformationDetailsStorageConfig */
  public function setTransformationDetailsStorageConfig(GooglePrivacyDlpV2TransformationDetailsStorageConfig $transformationDetailsStorageConfig)
  {
    $this->transformationDetailsStorageConfig = $transformationDetailsStorageConfig;
  }
  /** @return GooglePrivacyDlpV2TransformationDetailsStorageConfig */
  public function getTransformationDetailsStorageConfig()
  {
    return $this->transformationDetailsStorageConfig;
  }
}

class GooglePrivacyDlpV2DeidentifyConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2ImageTransformations */
  public $imageTransformations;
  /** @var GooglePrivacyDlpV2InfoTypeTransformations */
  public $infoTypeTransformations;
  /** @var GooglePrivacyDlpV2RecordTransformations */
  public $recordTransformations;
  /** @var GooglePrivacyDlpV2TransformationErrorHandling */
  public $transformationErrorHandling;
  protected $imageTransformationsType = GooglePrivacyDlpV2ImageTransformations::class;
  protected $imageTransformationsDataType = '';
  protected $infoTypeTransformationsType = GooglePrivacyDlpV2InfoTypeTransformations::class;
  protected $infoTypeTransformationsDataType = '';
  protected $recordTransformationsType = GooglePrivacyDlpV2RecordTransformations::class;
  protected $recordTransformationsDataType = '';
  protected $transformationErrorHandlingType = GooglePrivacyDlpV2TransformationErrorHandling::class;
  protected $transformationErrorHandlingDataType = '';
  /** @param GooglePrivacyDlpV2ImageTransformations */
  public function setImageTransformations(GooglePrivacyDlpV2ImageTransformations $imageTransformations)
  {
    $this->imageTransformations = $imageTransformations;
  }
  /** @return GooglePrivacyDlpV2ImageTransformations */
  public function getImageTransformations()
  {
    return $this->imageTransformations;
  }
  /** @param GooglePrivacyDlpV2InfoTypeTransformations */
  public function setInfoTypeTransformations(GooglePrivacyDlpV2InfoTypeTransformations $infoTypeTransformations)
  {
    $this->infoTypeTransformations = $infoTypeTransformations;
  }
  /** @return GooglePrivacyDlpV2InfoTypeTransformations */
  public function getInfoTypeTransformations()
  {
    return $this->infoTypeTransformations;
  }
  /** @param GooglePrivacyDlpV2RecordTransformations */
  public function setRecordTransformations(GooglePrivacyDlpV2RecordTransformations $recordTransformations)
  {
    $this->recordTransformations = $recordTransformations;
  }
  /** @return GooglePrivacyDlpV2RecordTransformations */
  public function getRecordTransformations()
  {
    return $this->recordTransformations;
  }
  /** @param GooglePrivacyDlpV2TransformationErrorHandling */
  public function setTransformationErrorHandling(GooglePrivacyDlpV2TransformationErrorHandling $transformationErrorHandling)
  {
    $this->transformationErrorHandling = $transformationErrorHandling;
  }
  /** @return GooglePrivacyDlpV2TransformationErrorHandling */
  public function getTransformationErrorHandling()
  {
    return $this->transformationErrorHandling;
  }
}

class GooglePrivacyDlpV2DeidentifyContentRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2DeidentifyConfig */
  public $deidentifyConfig;
  /** @var string */
  public $deidentifyTemplateName;
  /** @var GooglePrivacyDlpV2InspectConfig */
  public $inspectConfig;
  /** @var string */
  public $inspectTemplateName;
  /** @var GooglePrivacyDlpV2ContentItem */
  public $item;
  /** @var string */
  public $locationId;
  protected $deidentifyConfigType = GooglePrivacyDlpV2DeidentifyConfig::class;
  protected $deidentifyConfigDataType = '';
  protected $inspectConfigType = GooglePrivacyDlpV2InspectConfig::class;
  protected $inspectConfigDataType = '';
  protected $itemType = GooglePrivacyDlpV2ContentItem::class;
  protected $itemDataType = '';
  /** @param GooglePrivacyDlpV2DeidentifyConfig */
  public function setDeidentifyConfig(GooglePrivacyDlpV2DeidentifyConfig $deidentifyConfig)
  {
    $this->deidentifyConfig = $deidentifyConfig;
  }
  /** @return GooglePrivacyDlpV2DeidentifyConfig */
  public function getDeidentifyConfig()
  {
    return $this->deidentifyConfig;
  }
  /** @param string */
  public function setDeidentifyTemplateName($deidentifyTemplateName)
  {
    $this->deidentifyTemplateName = $deidentifyTemplateName;
  }
  /** @return string */
  public function getDeidentifyTemplateName()
  {
    return $this->deidentifyTemplateName;
  }
  /** @param GooglePrivacyDlpV2InspectConfig */
  public function setInspectConfig(GooglePrivacyDlpV2InspectConfig $inspectConfig)
  {
    $this->inspectConfig = $inspectConfig;
  }
  /** @return GooglePrivacyDlpV2InspectConfig */
  public function getInspectConfig()
  {
    return $this->inspectConfig;
  }
  /** @param string */
  public function setInspectTemplateName($inspectTemplateName)
  {
    $this->inspectTemplateName = $inspectTemplateName;
  }
  /** @return string */
  public function getInspectTemplateName()
  {
    return $this->inspectTemplateName;
  }
  /** @param GooglePrivacyDlpV2ContentItem */
  public function setItem(GooglePrivacyDlpV2ContentItem $item)
  {
    $this->item = $item;
  }
  /** @return GooglePrivacyDlpV2ContentItem */
  public function getItem()
  {
    return $this->item;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
}

class GooglePrivacyDlpV2DeidentifyContentResponse extends \Google\Model
{
  /** @var GooglePrivacyDlpV2ContentItem */
  public $item;
  /** @var GooglePrivacyDlpV2TransformationOverview */
  public $overview;
  protected $itemType = GooglePrivacyDlpV2ContentItem::class;
  protected $itemDataType = '';
  protected $overviewType = GooglePrivacyDlpV2TransformationOverview::class;
  protected $overviewDataType = '';
  /** @param GooglePrivacyDlpV2ContentItem */
  public function setItem(GooglePrivacyDlpV2ContentItem $item)
  {
    $this->item = $item;
  }
  /** @return GooglePrivacyDlpV2ContentItem */
  public function getItem()
  {
    return $this->item;
  }
  /** @param GooglePrivacyDlpV2TransformationOverview */
  public function setOverview(GooglePrivacyDlpV2TransformationOverview $overview)
  {
    $this->overview = $overview;
  }
  /** @return GooglePrivacyDlpV2TransformationOverview */
  public function getOverview()
  {
    return $this->overview;
  }
}

class GooglePrivacyDlpV2DeidentifyTemplate extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var GooglePrivacyDlpV2DeidentifyConfig */
  public $deidentifyConfig;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  protected $deidentifyConfigType = GooglePrivacyDlpV2DeidentifyConfig::class;
  protected $deidentifyConfigDataType = '';
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
  /** @param GooglePrivacyDlpV2DeidentifyConfig */
  public function setDeidentifyConfig(GooglePrivacyDlpV2DeidentifyConfig $deidentifyConfig)
  {
    $this->deidentifyConfig = $deidentifyConfig;
  }
  /** @return GooglePrivacyDlpV2DeidentifyConfig */
  public function getDeidentifyConfig()
  {
    return $this->deidentifyConfig;
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

class GooglePrivacyDlpV2DeltaPresenceEstimationConfig extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2StatisticalTable[] */
  public $auxiliaryTables;
  /** @var GooglePrivacyDlpV2QuasiId[] */
  public $quasiIds;
  /** @var string */
  public $regionCode;
  protected $collection_key = 'quasiIds';
  protected $auxiliaryTablesType = GooglePrivacyDlpV2StatisticalTable::class;
  protected $auxiliaryTablesDataType = 'array';
  protected $quasiIdsType = GooglePrivacyDlpV2QuasiId::class;
  protected $quasiIdsDataType = 'array';
  /** @param GooglePrivacyDlpV2StatisticalTable[] */
  public function setAuxiliaryTables($auxiliaryTables)
  {
    $this->auxiliaryTables = $auxiliaryTables;
  }
  /** @return GooglePrivacyDlpV2StatisticalTable[] */
  public function getAuxiliaryTables()
  {
    return $this->auxiliaryTables;
  }
  /** @param GooglePrivacyDlpV2QuasiId[] */
  public function setQuasiIds($quasiIds)
  {
    $this->quasiIds = $quasiIds;
  }
  /** @return GooglePrivacyDlpV2QuasiId[] */
  public function getQuasiIds()
  {
    return $this->quasiIds;
  }
  /** @param string */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /** @return string */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
}

class GooglePrivacyDlpV2DeltaPresenceEstimationHistogramBucket extends \Google\Collection
{
  /** @var string */
  public $bucketSize;
  /** @var string */
  public $bucketValueCount;
  /** @var GooglePrivacyDlpV2DeltaPresenceEstimationQuasiIdValues[] */
  public $bucketValues;
  public $maxProbability;
  public $minProbability;
  protected $collection_key = 'bucketValues';
  protected $bucketValuesType = GooglePrivacyDlpV2DeltaPresenceEstimationQuasiIdValues::class;
  protected $bucketValuesDataType = 'array';
  /** @param string */
  public function setBucketSize($bucketSize)
  {
    $this->bucketSize = $bucketSize;
  }
  /** @return string */
  public function getBucketSize()
  {
    return $this->bucketSize;
  }
  /** @param string */
  public function setBucketValueCount($bucketValueCount)
  {
    $this->bucketValueCount = $bucketValueCount;
  }
  /** @return string */
  public function getBucketValueCount()
  {
    return $this->bucketValueCount;
  }
  /** @param GooglePrivacyDlpV2DeltaPresenceEstimationQuasiIdValues[] */
  public function setBucketValues($bucketValues)
  {
    $this->bucketValues = $bucketValues;
  }
  /** @return GooglePrivacyDlpV2DeltaPresenceEstimationQuasiIdValues[] */
  public function getBucketValues()
  {
    return $this->bucketValues;
  }
  public function setMaxProbability($maxProbability)
  {
    $this->maxProbability = $maxProbability;
  }
  public function getMaxProbability()
  {
    return $this->maxProbability;
  }
  public function setMinProbability($minProbability)
  {
    $this->minProbability = $minProbability;
  }
  public function getMinProbability()
  {
    return $this->minProbability;
  }
}

class GooglePrivacyDlpV2DeltaPresenceEstimationQuasiIdValues extends \Google\Collection
{
  public $estimatedProbability;
  /** @var GooglePrivacyDlpV2Value[] */
  public $quasiIdsValues;
  protected $collection_key = 'quasiIdsValues';
  protected $quasiIdsValuesType = GooglePrivacyDlpV2Value::class;
  protected $quasiIdsValuesDataType = 'array';
  public function setEstimatedProbability($estimatedProbability)
  {
    $this->estimatedProbability = $estimatedProbability;
  }
  public function getEstimatedProbability()
  {
    return $this->estimatedProbability;
  }
  /** @param GooglePrivacyDlpV2Value[] */
  public function setQuasiIdsValues($quasiIdsValues)
  {
    $this->quasiIdsValues = $quasiIdsValues;
  }
  /** @return GooglePrivacyDlpV2Value[] */
  public function getQuasiIdsValues()
  {
    return $this->quasiIdsValues;
  }
}

class GooglePrivacyDlpV2DeltaPresenceEstimationResult extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2DeltaPresenceEstimationHistogramBucket[] */
  public $deltaPresenceEstimationHistogram;
  protected $collection_key = 'deltaPresenceEstimationHistogram';
  protected $deltaPresenceEstimationHistogramType = GooglePrivacyDlpV2DeltaPresenceEstimationHistogramBucket::class;
  protected $deltaPresenceEstimationHistogramDataType = 'array';
  /** @param GooglePrivacyDlpV2DeltaPresenceEstimationHistogramBucket[] */
  public function setDeltaPresenceEstimationHistogram($deltaPresenceEstimationHistogram)
  {
    $this->deltaPresenceEstimationHistogram = $deltaPresenceEstimationHistogram;
  }
  /** @return GooglePrivacyDlpV2DeltaPresenceEstimationHistogramBucket[] */
  public function getDeltaPresenceEstimationHistogram()
  {
    return $this->deltaPresenceEstimationHistogram;
  }
}

class GooglePrivacyDlpV2DetectionRule extends \Google\Model
{
  /** @var GooglePrivacyDlpV2HotwordRule */
  public $hotwordRule;
  protected $hotwordRuleType = GooglePrivacyDlpV2HotwordRule::class;
  protected $hotwordRuleDataType = '';
  /** @param GooglePrivacyDlpV2HotwordRule */
  public function setHotwordRule(GooglePrivacyDlpV2HotwordRule $hotwordRule)
  {
    $this->hotwordRule = $hotwordRule;
  }
  /** @return GooglePrivacyDlpV2HotwordRule */
  public function getHotwordRule()
  {
    return $this->hotwordRule;
  }
}

class GooglePrivacyDlpV2Dictionary extends \Google\Model
{
  /** @var GooglePrivacyDlpV2CloudStoragePath */
  public $cloudStoragePath;
  /** @var GooglePrivacyDlpV2WordList */
  public $wordList;
  protected $cloudStoragePathType = GooglePrivacyDlpV2CloudStoragePath::class;
  protected $cloudStoragePathDataType = '';
  protected $wordListType = GooglePrivacyDlpV2WordList::class;
  protected $wordListDataType = '';
  /** @param GooglePrivacyDlpV2CloudStoragePath */
  public function setCloudStoragePath(GooglePrivacyDlpV2CloudStoragePath $cloudStoragePath)
  {
    $this->cloudStoragePath = $cloudStoragePath;
  }
  /** @return GooglePrivacyDlpV2CloudStoragePath */
  public function getCloudStoragePath()
  {
    return $this->cloudStoragePath;
  }
  /** @param GooglePrivacyDlpV2WordList */
  public function setWordList(GooglePrivacyDlpV2WordList $wordList)
  {
    $this->wordList = $wordList;
  }
  /** @return GooglePrivacyDlpV2WordList */
  public function getWordList()
  {
    return $this->wordList;
  }
}

class GooglePrivacyDlpV2DlpJob extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var GooglePrivacyDlpV2Error[] */
  public $errors;
  /** @var GooglePrivacyDlpV2InspectDataSourceDetails */
  public $inspectDetails;
  /** @var string */
  public $jobTriggerName;
  /** @var string */
  public $name;
  /** @var GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails */
  public $riskDetails;
  /** @var string */
  public $startTime;
  /** @var string */
  public $state;
  /** @var string */
  public $type;
  protected $collection_key = 'errors';
  protected $errorsType = GooglePrivacyDlpV2Error::class;
  protected $errorsDataType = 'array';
  protected $inspectDetailsType = GooglePrivacyDlpV2InspectDataSourceDetails::class;
  protected $inspectDetailsDataType = '';
  protected $riskDetailsType = GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails::class;
  protected $riskDetailsDataType = '';
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
  /** @param GooglePrivacyDlpV2Error[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GooglePrivacyDlpV2Error[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param GooglePrivacyDlpV2InspectDataSourceDetails */
  public function setInspectDetails(GooglePrivacyDlpV2InspectDataSourceDetails $inspectDetails)
  {
    $this->inspectDetails = $inspectDetails;
  }
  /** @return GooglePrivacyDlpV2InspectDataSourceDetails */
  public function getInspectDetails()
  {
    return $this->inspectDetails;
  }
  /** @param string */
  public function setJobTriggerName($jobTriggerName)
  {
    $this->jobTriggerName = $jobTriggerName;
  }
  /** @return string */
  public function getJobTriggerName()
  {
    return $this->jobTriggerName;
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
  /** @param GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails */
  public function setRiskDetails(GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails $riskDetails)
  {
    $this->riskDetails = $riskDetails;
  }
  /** @return GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails */
  public function getRiskDetails()
  {
    return $this->riskDetails;
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

class GooglePrivacyDlpV2DocumentLocation extends \Google\Model
{
  /** @var string */
  public $fileOffset;

  /** @param string */
  public function setFileOffset($fileOffset)
  {
    $this->fileOffset = $fileOffset;
  }
  /** @return string */
  public function getFileOffset()
  {
    return $this->fileOffset;
  }
}

class GooglePrivacyDlpV2EntityId extends \Google\Model
{
  /** @var GooglePrivacyDlpV2FieldId */
  public $field;
  protected $fieldType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldDataType = '';
  /** @param GooglePrivacyDlpV2FieldId */
  public function setField(GooglePrivacyDlpV2FieldId $field)
  {
    $this->field = $field;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getField()
  {
    return $this->field;
  }
}

class GooglePrivacyDlpV2Error extends \Google\Collection
{
  /** @var GoogleRpcStatus */
  public $details;
  /** @var string[] */
  public $timestamps;
  protected $collection_key = 'timestamps';
  protected $detailsType = GoogleRpcStatus::class;
  protected $detailsDataType = '';
  /** @param GoogleRpcStatus */
  public function setDetails(GoogleRpcStatus $details)
  {
    $this->details = $details;
  }
  /** @return GoogleRpcStatus */
  public function getDetails()
  {
    return $this->details;
  }
  /** @param string[] */
  public function setTimestamps($timestamps)
  {
    $this->timestamps = $timestamps;
  }
  /** @return string[] */
  public function getTimestamps()
  {
    return $this->timestamps;
  }
}

class GooglePrivacyDlpV2ExcludeByHotword extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Regex */
  public $hotwordRegex;
  /** @var GooglePrivacyDlpV2Proximity */
  public $proximity;
  protected $hotwordRegexType = GooglePrivacyDlpV2Regex::class;
  protected $hotwordRegexDataType = '';
  protected $proximityType = GooglePrivacyDlpV2Proximity::class;
  protected $proximityDataType = '';
  /** @param GooglePrivacyDlpV2Regex */
  public function setHotwordRegex(GooglePrivacyDlpV2Regex $hotwordRegex)
  {
    $this->hotwordRegex = $hotwordRegex;
  }
  /** @return GooglePrivacyDlpV2Regex */
  public function getHotwordRegex()
  {
    return $this->hotwordRegex;
  }
  /** @param GooglePrivacyDlpV2Proximity */
  public function setProximity(GooglePrivacyDlpV2Proximity $proximity)
  {
    $this->proximity = $proximity;
  }
  /** @return GooglePrivacyDlpV2Proximity */
  public function getProximity()
  {
    return $this->proximity;
  }
}

class GooglePrivacyDlpV2ExcludeInfoTypes extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2InfoType[] */
  public $infoTypes;
  protected $collection_key = 'infoTypes';
  protected $infoTypesType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypesDataType = 'array';
  /** @param GooglePrivacyDlpV2InfoType[] */
  public function setInfoTypes($infoTypes)
  {
    $this->infoTypes = $infoTypes;
  }
  /** @return GooglePrivacyDlpV2InfoType[] */
  public function getInfoTypes()
  {
    return $this->infoTypes;
  }
}

class GooglePrivacyDlpV2ExclusionRule extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Dictionary */
  public $dictionary;
  /** @var GooglePrivacyDlpV2ExcludeByHotword */
  public $excludeByHotword;
  /** @var GooglePrivacyDlpV2ExcludeInfoTypes */
  public $excludeInfoTypes;
  /** @var string */
  public $matchingType;
  /** @var GooglePrivacyDlpV2Regex */
  public $regex;
  protected $dictionaryType = GooglePrivacyDlpV2Dictionary::class;
  protected $dictionaryDataType = '';
  protected $excludeByHotwordType = GooglePrivacyDlpV2ExcludeByHotword::class;
  protected $excludeByHotwordDataType = '';
  protected $excludeInfoTypesType = GooglePrivacyDlpV2ExcludeInfoTypes::class;
  protected $excludeInfoTypesDataType = '';
  protected $regexType = GooglePrivacyDlpV2Regex::class;
  protected $regexDataType = '';
  /** @param GooglePrivacyDlpV2Dictionary */
  public function setDictionary(GooglePrivacyDlpV2Dictionary $dictionary)
  {
    $this->dictionary = $dictionary;
  }
  /** @return GooglePrivacyDlpV2Dictionary */
  public function getDictionary()
  {
    return $this->dictionary;
  }
  /** @param GooglePrivacyDlpV2ExcludeByHotword */
  public function setExcludeByHotword(GooglePrivacyDlpV2ExcludeByHotword $excludeByHotword)
  {
    $this->excludeByHotword = $excludeByHotword;
  }
  /** @return GooglePrivacyDlpV2ExcludeByHotword */
  public function getExcludeByHotword()
  {
    return $this->excludeByHotword;
  }
  /** @param GooglePrivacyDlpV2ExcludeInfoTypes */
  public function setExcludeInfoTypes(GooglePrivacyDlpV2ExcludeInfoTypes $excludeInfoTypes)
  {
    $this->excludeInfoTypes = $excludeInfoTypes;
  }
  /** @return GooglePrivacyDlpV2ExcludeInfoTypes */
  public function getExcludeInfoTypes()
  {
    return $this->excludeInfoTypes;
  }
  /** @param string */
  public function setMatchingType($matchingType)
  {
    $this->matchingType = $matchingType;
  }
  /** @return string */
  public function getMatchingType()
  {
    return $this->matchingType;
  }
  /** @param GooglePrivacyDlpV2Regex */
  public function setRegex(GooglePrivacyDlpV2Regex $regex)
  {
    $this->regex = $regex;
  }
  /** @return GooglePrivacyDlpV2Regex */
  public function getRegex()
  {
    return $this->regex;
  }
}

class GooglePrivacyDlpV2Export extends \Google\Model
{
  /** @var GooglePrivacyDlpV2BigQueryTable */
  public $profileTable;
  protected $profileTableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $profileTableDataType = '';
  /** @param GooglePrivacyDlpV2BigQueryTable */
  public function setProfileTable(GooglePrivacyDlpV2BigQueryTable $profileTable)
  {
    $this->profileTable = $profileTable;
  }
  /** @return GooglePrivacyDlpV2BigQueryTable */
  public function getProfileTable()
  {
    return $this->profileTable;
  }
}

class GooglePrivacyDlpV2Expressions extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Conditions */
  public $conditions;
  /** @var string */
  public $logicalOperator;
  protected $conditionsType = GooglePrivacyDlpV2Conditions::class;
  protected $conditionsDataType = '';
  /** @param GooglePrivacyDlpV2Conditions */
  public function setConditions(GooglePrivacyDlpV2Conditions $conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return GooglePrivacyDlpV2Conditions */
  public function getConditions()
  {
    return $this->conditions;
  }
  /** @param string */
  public function setLogicalOperator($logicalOperator)
  {
    $this->logicalOperator = $logicalOperator;
  }
  /** @return string */
  public function getLogicalOperator()
  {
    return $this->logicalOperator;
  }
}

class GooglePrivacyDlpV2FieldId extends \Google\Model
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

class GooglePrivacyDlpV2FieldTransformation extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2RecordCondition */
  public $condition;
  /** @var GooglePrivacyDlpV2FieldId[] */
  public $fields;
  /** @var GooglePrivacyDlpV2InfoTypeTransformations */
  public $infoTypeTransformations;
  /** @var GooglePrivacyDlpV2PrimitiveTransformation */
  public $primitiveTransformation;
  protected $collection_key = 'fields';
  protected $conditionType = GooglePrivacyDlpV2RecordCondition::class;
  protected $conditionDataType = '';
  protected $fieldsType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldsDataType = 'array';
  protected $infoTypeTransformationsType = GooglePrivacyDlpV2InfoTypeTransformations::class;
  protected $infoTypeTransformationsDataType = '';
  protected $primitiveTransformationType = GooglePrivacyDlpV2PrimitiveTransformation::class;
  protected $primitiveTransformationDataType = '';
  /** @param GooglePrivacyDlpV2RecordCondition */
  public function setCondition(GooglePrivacyDlpV2RecordCondition $condition)
  {
    $this->condition = $condition;
  }
  /** @return GooglePrivacyDlpV2RecordCondition */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param GooglePrivacyDlpV2FieldId[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return GooglePrivacyDlpV2FieldId[] */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param GooglePrivacyDlpV2InfoTypeTransformations */
  public function setInfoTypeTransformations(GooglePrivacyDlpV2InfoTypeTransformations $infoTypeTransformations)
  {
    $this->infoTypeTransformations = $infoTypeTransformations;
  }
  /** @return GooglePrivacyDlpV2InfoTypeTransformations */
  public function getInfoTypeTransformations()
  {
    return $this->infoTypeTransformations;
  }
  /** @param GooglePrivacyDlpV2PrimitiveTransformation */
  public function setPrimitiveTransformation(GooglePrivacyDlpV2PrimitiveTransformation $primitiveTransformation)
  {
    $this->primitiveTransformation = $primitiveTransformation;
  }
  /** @return GooglePrivacyDlpV2PrimitiveTransformation */
  public function getPrimitiveTransformation()
  {
    return $this->primitiveTransformation;
  }
}

class GooglePrivacyDlpV2FileSet extends \Google\Model
{
  /** @var GooglePrivacyDlpV2CloudStorageRegexFileSet */
  public $regexFileSet;
  /** @var string */
  public $url;
  protected $regexFileSetType = GooglePrivacyDlpV2CloudStorageRegexFileSet::class;
  protected $regexFileSetDataType = '';
  /** @param GooglePrivacyDlpV2CloudStorageRegexFileSet */
  public function setRegexFileSet(GooglePrivacyDlpV2CloudStorageRegexFileSet $regexFileSet)
  {
    $this->regexFileSet = $regexFileSet;
  }
  /** @return GooglePrivacyDlpV2CloudStorageRegexFileSet */
  public function getRegexFileSet()
  {
    return $this->regexFileSet;
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

class GooglePrivacyDlpV2Finding extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $findingId;
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  /** @var string */
  public $jobCreateTime;
  /** @var string */
  public $jobName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $likelihood;
  /** @var GooglePrivacyDlpV2Location */
  public $location;
  /** @var string */
  public $name;
  /** @var string */
  public $quote;
  /** @var GooglePrivacyDlpV2QuoteInfo */
  public $quoteInfo;
  /** @var string */
  public $resourceName;
  /** @var string */
  public $triggerName;
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
  protected $locationType = GooglePrivacyDlpV2Location::class;
  protected $locationDataType = '';
  protected $quoteInfoType = GooglePrivacyDlpV2QuoteInfo::class;
  protected $quoteInfoDataType = '';
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
  public function setFindingId($findingId)
  {
    $this->findingId = $findingId;
  }
  /** @return string */
  public function getFindingId()
  {
    return $this->findingId;
  }
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
  }
  /** @param string */
  public function setJobCreateTime($jobCreateTime)
  {
    $this->jobCreateTime = $jobCreateTime;
  }
  /** @return string */
  public function getJobCreateTime()
  {
    return $this->jobCreateTime;
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
  public function setLikelihood($likelihood)
  {
    $this->likelihood = $likelihood;
  }
  /** @return string */
  public function getLikelihood()
  {
    return $this->likelihood;
  }
  /** @param GooglePrivacyDlpV2Location */
  public function setLocation(GooglePrivacyDlpV2Location $location)
  {
    $this->location = $location;
  }
  /** @return GooglePrivacyDlpV2Location */
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
  public function setQuote($quote)
  {
    $this->quote = $quote;
  }
  /** @return string */
  public function getQuote()
  {
    return $this->quote;
  }
  /** @param GooglePrivacyDlpV2QuoteInfo */
  public function setQuoteInfo(GooglePrivacyDlpV2QuoteInfo $quoteInfo)
  {
    $this->quoteInfo = $quoteInfo;
  }
  /** @return GooglePrivacyDlpV2QuoteInfo */
  public function getQuoteInfo()
  {
    return $this->quoteInfo;
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
  public function setTriggerName($triggerName)
  {
    $this->triggerName = $triggerName;
  }
  /** @return string */
  public function getTriggerName()
  {
    return $this->triggerName;
  }
}

class GooglePrivacyDlpV2FindingLimits extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2InfoTypeLimit[] */
  public $maxFindingsPerInfoType;
  /** @var int */
  public $maxFindingsPerItem;
  /** @var int */
  public $maxFindingsPerRequest;
  protected $collection_key = 'maxFindingsPerInfoType';
  protected $maxFindingsPerInfoTypeType = GooglePrivacyDlpV2InfoTypeLimit::class;
  protected $maxFindingsPerInfoTypeDataType = 'array';
  /** @param GooglePrivacyDlpV2InfoTypeLimit[] */
  public function setMaxFindingsPerInfoType($maxFindingsPerInfoType)
  {
    $this->maxFindingsPerInfoType = $maxFindingsPerInfoType;
  }
  /** @return GooglePrivacyDlpV2InfoTypeLimit[] */
  public function getMaxFindingsPerInfoType()
  {
    return $this->maxFindingsPerInfoType;
  }
  /** @param int */
  public function setMaxFindingsPerItem($maxFindingsPerItem)
  {
    $this->maxFindingsPerItem = $maxFindingsPerItem;
  }
  /** @return int */
  public function getMaxFindingsPerItem()
  {
    return $this->maxFindingsPerItem;
  }
  /** @param int */
  public function setMaxFindingsPerRequest($maxFindingsPerRequest)
  {
    $this->maxFindingsPerRequest = $maxFindingsPerRequest;
  }
  /** @return int */
  public function getMaxFindingsPerRequest()
  {
    return $this->maxFindingsPerRequest;
  }
}

class GooglePrivacyDlpV2FinishDlpJobRequest extends \Google\Model
{
}

class GooglePrivacyDlpV2FixedSizeBucketingConfig extends \Google\Model
{
  public $bucketSize;
  /** @var GooglePrivacyDlpV2Value */
  public $lowerBound;
  /** @var GooglePrivacyDlpV2Value */
  public $upperBound;
  protected $lowerBoundType = GooglePrivacyDlpV2Value::class;
  protected $lowerBoundDataType = '';
  protected $upperBoundType = GooglePrivacyDlpV2Value::class;
  protected $upperBoundDataType = '';
  public function setBucketSize($bucketSize)
  {
    $this->bucketSize = $bucketSize;
  }
  public function getBucketSize()
  {
    return $this->bucketSize;
  }
  /** @param GooglePrivacyDlpV2Value */
  public function setLowerBound(GooglePrivacyDlpV2Value $lowerBound)
  {
    $this->lowerBound = $lowerBound;
  }
  /** @return GooglePrivacyDlpV2Value */
  public function getLowerBound()
  {
    return $this->lowerBound;
  }
  /** @param GooglePrivacyDlpV2Value */
  public function setUpperBound(GooglePrivacyDlpV2Value $upperBound)
  {
    $this->upperBound = $upperBound;
  }
  /** @return GooglePrivacyDlpV2Value */
  public function getUpperBound()
  {
    return $this->upperBound;
  }
}

class GooglePrivacyDlpV2HotwordRule extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Regex */
  public $hotwordRegex;
  /** @var GooglePrivacyDlpV2LikelihoodAdjustment */
  public $likelihoodAdjustment;
  /** @var GooglePrivacyDlpV2Proximity */
  public $proximity;
  protected $hotwordRegexType = GooglePrivacyDlpV2Regex::class;
  protected $hotwordRegexDataType = '';
  protected $likelihoodAdjustmentType = GooglePrivacyDlpV2LikelihoodAdjustment::class;
  protected $likelihoodAdjustmentDataType = '';
  protected $proximityType = GooglePrivacyDlpV2Proximity::class;
  protected $proximityDataType = '';
  /** @param GooglePrivacyDlpV2Regex */
  public function setHotwordRegex(GooglePrivacyDlpV2Regex $hotwordRegex)
  {
    $this->hotwordRegex = $hotwordRegex;
  }
  /** @return GooglePrivacyDlpV2Regex */
  public function getHotwordRegex()
  {
    return $this->hotwordRegex;
  }
  /** @param GooglePrivacyDlpV2LikelihoodAdjustment */
  public function setLikelihoodAdjustment(GooglePrivacyDlpV2LikelihoodAdjustment $likelihoodAdjustment)
  {
    $this->likelihoodAdjustment = $likelihoodAdjustment;
  }
  /** @return GooglePrivacyDlpV2LikelihoodAdjustment */
  public function getLikelihoodAdjustment()
  {
    return $this->likelihoodAdjustment;
  }
  /** @param GooglePrivacyDlpV2Proximity */
  public function setProximity(GooglePrivacyDlpV2Proximity $proximity)
  {
    $this->proximity = $proximity;
  }
  /** @return GooglePrivacyDlpV2Proximity */
  public function getProximity()
  {
    return $this->proximity;
  }
}

class GooglePrivacyDlpV2HybridContentItem extends \Google\Model
{
  /** @var GooglePrivacyDlpV2HybridFindingDetails */
  public $findingDetails;
  /** @var GooglePrivacyDlpV2ContentItem */
  public $item;
  protected $findingDetailsType = GooglePrivacyDlpV2HybridFindingDetails::class;
  protected $findingDetailsDataType = '';
  protected $itemType = GooglePrivacyDlpV2ContentItem::class;
  protected $itemDataType = '';
  /** @param GooglePrivacyDlpV2HybridFindingDetails */
  public function setFindingDetails(GooglePrivacyDlpV2HybridFindingDetails $findingDetails)
  {
    $this->findingDetails = $findingDetails;
  }
  /** @return GooglePrivacyDlpV2HybridFindingDetails */
  public function getFindingDetails()
  {
    return $this->findingDetails;
  }
  /** @param GooglePrivacyDlpV2ContentItem */
  public function setItem(GooglePrivacyDlpV2ContentItem $item)
  {
    $this->item = $item;
  }
  /** @return GooglePrivacyDlpV2ContentItem */
  public function getItem()
  {
    return $this->item;
  }
}

class GooglePrivacyDlpV2HybridFindingDetails extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Container */
  public $containerDetails;
  /** @var string */
  public $fileOffset;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $rowOffset;
  /** @var GooglePrivacyDlpV2TableOptions */
  public $tableOptions;
  protected $containerDetailsType = GooglePrivacyDlpV2Container::class;
  protected $containerDetailsDataType = '';
  protected $tableOptionsType = GooglePrivacyDlpV2TableOptions::class;
  protected $tableOptionsDataType = '';
  /** @param GooglePrivacyDlpV2Container */
  public function setContainerDetails(GooglePrivacyDlpV2Container $containerDetails)
  {
    $this->containerDetails = $containerDetails;
  }
  /** @return GooglePrivacyDlpV2Container */
  public function getContainerDetails()
  {
    return $this->containerDetails;
  }
  /** @param string */
  public function setFileOffset($fileOffset)
  {
    $this->fileOffset = $fileOffset;
  }
  /** @return string */
  public function getFileOffset()
  {
    return $this->fileOffset;
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
  public function setRowOffset($rowOffset)
  {
    $this->rowOffset = $rowOffset;
  }
  /** @return string */
  public function getRowOffset()
  {
    return $this->rowOffset;
  }
  /** @param GooglePrivacyDlpV2TableOptions */
  public function setTableOptions(GooglePrivacyDlpV2TableOptions $tableOptions)
  {
    $this->tableOptions = $tableOptions;
  }
  /** @return GooglePrivacyDlpV2TableOptions */
  public function getTableOptions()
  {
    return $this->tableOptions;
  }
}

class GooglePrivacyDlpV2HybridInspectDlpJobRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2HybridContentItem */
  public $hybridItem;
  protected $hybridItemType = GooglePrivacyDlpV2HybridContentItem::class;
  protected $hybridItemDataType = '';
  /** @param GooglePrivacyDlpV2HybridContentItem */
  public function setHybridItem(GooglePrivacyDlpV2HybridContentItem $hybridItem)
  {
    $this->hybridItem = $hybridItem;
  }
  /** @return GooglePrivacyDlpV2HybridContentItem */
  public function getHybridItem()
  {
    return $this->hybridItem;
  }
}

class GooglePrivacyDlpV2HybridInspectJobTriggerRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2HybridContentItem */
  public $hybridItem;
  protected $hybridItemType = GooglePrivacyDlpV2HybridContentItem::class;
  protected $hybridItemDataType = '';
  /** @param GooglePrivacyDlpV2HybridContentItem */
  public function setHybridItem(GooglePrivacyDlpV2HybridContentItem $hybridItem)
  {
    $this->hybridItem = $hybridItem;
  }
  /** @return GooglePrivacyDlpV2HybridContentItem */
  public function getHybridItem()
  {
    return $this->hybridItem;
  }
}

class GooglePrivacyDlpV2HybridInspectResponse extends \Google\Model
{
}

class GooglePrivacyDlpV2HybridInspectStatistics extends \Google\Model
{
  /** @var string */
  public $abortedCount;
  /** @var string */
  public $pendingCount;
  /** @var string */
  public $processedCount;

  /** @param string */
  public function setAbortedCount($abortedCount)
  {
    $this->abortedCount = $abortedCount;
  }
  /** @return string */
  public function getAbortedCount()
  {
    return $this->abortedCount;
  }
  /** @param string */
  public function setPendingCount($pendingCount)
  {
    $this->pendingCount = $pendingCount;
  }
  /** @return string */
  public function getPendingCount()
  {
    return $this->pendingCount;
  }
  /** @param string */
  public function setProcessedCount($processedCount)
  {
    $this->processedCount = $processedCount;
  }
  /** @return string */
  public function getProcessedCount()
  {
    return $this->processedCount;
  }
}

class GooglePrivacyDlpV2HybridOptions extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string[] */
  public $labels;
  /** @var string[] */
  public $requiredFindingLabelKeys;
  /** @var GooglePrivacyDlpV2TableOptions */
  public $tableOptions;
  protected $collection_key = 'requiredFindingLabelKeys';
  protected $tableOptionsType = GooglePrivacyDlpV2TableOptions::class;
  protected $tableOptionsDataType = '';
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
  /** @param string[] */
  public function setRequiredFindingLabelKeys($requiredFindingLabelKeys)
  {
    $this->requiredFindingLabelKeys = $requiredFindingLabelKeys;
  }
  /** @return string[] */
  public function getRequiredFindingLabelKeys()
  {
    return $this->requiredFindingLabelKeys;
  }
  /** @param GooglePrivacyDlpV2TableOptions */
  public function setTableOptions(GooglePrivacyDlpV2TableOptions $tableOptions)
  {
    $this->tableOptions = $tableOptions;
  }
  /** @return GooglePrivacyDlpV2TableOptions */
  public function getTableOptions()
  {
    return $this->tableOptions;
  }
}

class GooglePrivacyDlpV2ImageLocation extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2BoundingBox[] */
  public $boundingBoxes;
  protected $collection_key = 'boundingBoxes';
  protected $boundingBoxesType = GooglePrivacyDlpV2BoundingBox::class;
  protected $boundingBoxesDataType = 'array';
  /** @param GooglePrivacyDlpV2BoundingBox[] */
  public function setBoundingBoxes($boundingBoxes)
  {
    $this->boundingBoxes = $boundingBoxes;
  }
  /** @return GooglePrivacyDlpV2BoundingBox[] */
  public function getBoundingBoxes()
  {
    return $this->boundingBoxes;
  }
}

class GooglePrivacyDlpV2ImageRedactionConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  /** @var bool */
  public $redactAllText;
  /** @var GooglePrivacyDlpV2Color */
  public $redactionColor;
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
  protected $redactionColorType = GooglePrivacyDlpV2Color::class;
  protected $redactionColorDataType = '';
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
  }
  /** @param bool */
  public function setRedactAllText($redactAllText)
  {
    $this->redactAllText = $redactAllText;
  }
  /** @return bool */
  public function getRedactAllText()
  {
    return $this->redactAllText;
  }
  /** @param GooglePrivacyDlpV2Color */
  public function setRedactionColor(GooglePrivacyDlpV2Color $redactionColor)
  {
    $this->redactionColor = $redactionColor;
  }
  /** @return GooglePrivacyDlpV2Color */
  public function getRedactionColor()
  {
    return $this->redactionColor;
  }
}

class GooglePrivacyDlpV2ImageTransformation extends \Google\Model
{
  /** @var GooglePrivacyDlpV2AllInfoTypes */
  public $allInfoTypes;
  /** @var GooglePrivacyDlpV2AllText */
  public $allText;
  /** @var GooglePrivacyDlpV2Color */
  public $redactionColor;
  /** @var GooglePrivacyDlpV2SelectedInfoTypes */
  public $selectedInfoTypes;
  protected $allInfoTypesType = GooglePrivacyDlpV2AllInfoTypes::class;
  protected $allInfoTypesDataType = '';
  protected $allTextType = GooglePrivacyDlpV2AllText::class;
  protected $allTextDataType = '';
  protected $redactionColorType = GooglePrivacyDlpV2Color::class;
  protected $redactionColorDataType = '';
  protected $selectedInfoTypesType = GooglePrivacyDlpV2SelectedInfoTypes::class;
  protected $selectedInfoTypesDataType = '';
  /** @param GooglePrivacyDlpV2AllInfoTypes */
  public function setAllInfoTypes(GooglePrivacyDlpV2AllInfoTypes $allInfoTypes)
  {
    $this->allInfoTypes = $allInfoTypes;
  }
  /** @return GooglePrivacyDlpV2AllInfoTypes */
  public function getAllInfoTypes()
  {
    return $this->allInfoTypes;
  }
  /** @param GooglePrivacyDlpV2AllText */
  public function setAllText(GooglePrivacyDlpV2AllText $allText)
  {
    $this->allText = $allText;
  }
  /** @return GooglePrivacyDlpV2AllText */
  public function getAllText()
  {
    return $this->allText;
  }
  /** @param GooglePrivacyDlpV2Color */
  public function setRedactionColor(GooglePrivacyDlpV2Color $redactionColor)
  {
    $this->redactionColor = $redactionColor;
  }
  /** @return GooglePrivacyDlpV2Color */
  public function getRedactionColor()
  {
    return $this->redactionColor;
  }
  /** @param GooglePrivacyDlpV2SelectedInfoTypes */
  public function setSelectedInfoTypes(GooglePrivacyDlpV2SelectedInfoTypes $selectedInfoTypes)
  {
    $this->selectedInfoTypes = $selectedInfoTypes;
  }
  /** @return GooglePrivacyDlpV2SelectedInfoTypes */
  public function getSelectedInfoTypes()
  {
    return $this->selectedInfoTypes;
  }
}

class GooglePrivacyDlpV2ImageTransformations extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2ImageTransformation[] */
  public $transforms;
  protected $collection_key = 'transforms';
  protected $transformsType = GooglePrivacyDlpV2ImageTransformation::class;
  protected $transformsDataType = 'array';
  /** @param GooglePrivacyDlpV2ImageTransformation[] */
  public function setTransforms($transforms)
  {
    $this->transforms = $transforms;
  }
  /** @return GooglePrivacyDlpV2ImageTransformation[] */
  public function getTransforms()
  {
    return $this->transforms;
  }
}

class GooglePrivacyDlpV2InfoType extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $version;

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

class GooglePrivacyDlpV2InfoTypeCategory extends \Google\Model
{
  /** @var string */
  public $industryCategory;
  /** @var string */
  public $locationCategory;
  /** @var string */
  public $typeCategory;

  /** @param string */
  public function setIndustryCategory($industryCategory)
  {
    $this->industryCategory = $industryCategory;
  }
  /** @return string */
  public function getIndustryCategory()
  {
    return $this->industryCategory;
  }
  /** @param string */
  public function setLocationCategory($locationCategory)
  {
    $this->locationCategory = $locationCategory;
  }
  /** @return string */
  public function getLocationCategory()
  {
    return $this->locationCategory;
  }
  /** @param string */
  public function setTypeCategory($typeCategory)
  {
    $this->typeCategory = $typeCategory;
  }
  /** @return string */
  public function getTypeCategory()
  {
    return $this->typeCategory;
  }
}

class GooglePrivacyDlpV2InfoTypeDescription extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2InfoTypeCategory[] */
  public $categories;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var GooglePrivacyDlpV2SensitivityScore */
  public $sensitivityScore;
  /** @var string[] */
  public $supportedBy;
  /** @var GooglePrivacyDlpV2VersionDescription[] */
  public $versions;
  protected $collection_key = 'versions';
  protected $categoriesType = GooglePrivacyDlpV2InfoTypeCategory::class;
  protected $categoriesDataType = 'array';
  protected $sensitivityScoreType = GooglePrivacyDlpV2SensitivityScore::class;
  protected $sensitivityScoreDataType = '';
  protected $versionsType = GooglePrivacyDlpV2VersionDescription::class;
  protected $versionsDataType = 'array';
  /** @param GooglePrivacyDlpV2InfoTypeCategory[] */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /** @return GooglePrivacyDlpV2InfoTypeCategory[] */
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
  /** @param GooglePrivacyDlpV2SensitivityScore */
  public function setSensitivityScore(GooglePrivacyDlpV2SensitivityScore $sensitivityScore)
  {
    $this->sensitivityScore = $sensitivityScore;
  }
  /** @return GooglePrivacyDlpV2SensitivityScore */
  public function getSensitivityScore()
  {
    return $this->sensitivityScore;
  }
  /** @param string[] */
  public function setSupportedBy($supportedBy)
  {
    $this->supportedBy = $supportedBy;
  }
  /** @return string[] */
  public function getSupportedBy()
  {
    return $this->supportedBy;
  }
  /** @param GooglePrivacyDlpV2VersionDescription[] */
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  /** @return GooglePrivacyDlpV2VersionDescription[] */
  public function getVersions()
  {
    return $this->versions;
  }
}

class GooglePrivacyDlpV2InfoTypeLimit extends \Google\Model
{
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  /** @var int */
  public $maxFindings;
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
  }
  /** @param int */
  public function setMaxFindings($maxFindings)
  {
    $this->maxFindings = $maxFindings;
  }
  /** @return int */
  public function getMaxFindings()
  {
    return $this->maxFindings;
  }
}

class GooglePrivacyDlpV2InfoTypeStats extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
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
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
  }
}

class GooglePrivacyDlpV2InfoTypeSummary extends \Google\Model
{
  /** @var int */
  public $estimatedPrevalence;
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
  /** @param int */
  public function setEstimatedPrevalence($estimatedPrevalence)
  {
    $this->estimatedPrevalence = $estimatedPrevalence;
  }
  /** @return int */
  public function getEstimatedPrevalence()
  {
    return $this->estimatedPrevalence;
  }
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
  }
}

class GooglePrivacyDlpV2InfoTypeTransformation extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2InfoType[] */
  public $infoTypes;
  /** @var GooglePrivacyDlpV2PrimitiveTransformation */
  public $primitiveTransformation;
  protected $collection_key = 'infoTypes';
  protected $infoTypesType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypesDataType = 'array';
  protected $primitiveTransformationType = GooglePrivacyDlpV2PrimitiveTransformation::class;
  protected $primitiveTransformationDataType = '';
  /** @param GooglePrivacyDlpV2InfoType[] */
  public function setInfoTypes($infoTypes)
  {
    $this->infoTypes = $infoTypes;
  }
  /** @return GooglePrivacyDlpV2InfoType[] */
  public function getInfoTypes()
  {
    return $this->infoTypes;
  }
  /** @param GooglePrivacyDlpV2PrimitiveTransformation */
  public function setPrimitiveTransformation(GooglePrivacyDlpV2PrimitiveTransformation $primitiveTransformation)
  {
    $this->primitiveTransformation = $primitiveTransformation;
  }
  /** @return GooglePrivacyDlpV2PrimitiveTransformation */
  public function getPrimitiveTransformation()
  {
    return $this->primitiveTransformation;
  }
}

class GooglePrivacyDlpV2InfoTypeTransformations extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2InfoTypeTransformation[] */
  public $transformations;
  protected $collection_key = 'transformations';
  protected $transformationsType = GooglePrivacyDlpV2InfoTypeTransformation::class;
  protected $transformationsDataType = 'array';
  /** @param GooglePrivacyDlpV2InfoTypeTransformation[] */
  public function setTransformations($transformations)
  {
    $this->transformations = $transformations;
  }
  /** @return GooglePrivacyDlpV2InfoTypeTransformation[] */
  public function getTransformations()
  {
    return $this->transformations;
  }
}

class GooglePrivacyDlpV2InspectConfig extends \Google\Collection
{
  /** @var string[] */
  public $contentOptions;
  /** @var GooglePrivacyDlpV2CustomInfoType[] */
  public $customInfoTypes;
  /** @var bool */
  public $excludeInfoTypes;
  /** @var bool */
  public $includeQuote;
  /** @var GooglePrivacyDlpV2InfoType[] */
  public $infoTypes;
  /** @var GooglePrivacyDlpV2FindingLimits */
  public $limits;
  /** @var string */
  public $minLikelihood;
  /** @var GooglePrivacyDlpV2InspectionRuleSet[] */
  public $ruleSet;
  protected $collection_key = 'ruleSet';
  protected $customInfoTypesType = GooglePrivacyDlpV2CustomInfoType::class;
  protected $customInfoTypesDataType = 'array';
  protected $infoTypesType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypesDataType = 'array';
  protected $limitsType = GooglePrivacyDlpV2FindingLimits::class;
  protected $limitsDataType = '';
  protected $ruleSetType = GooglePrivacyDlpV2InspectionRuleSet::class;
  protected $ruleSetDataType = 'array';
  /** @param string[] */
  public function setContentOptions($contentOptions)
  {
    $this->contentOptions = $contentOptions;
  }
  /** @return string[] */
  public function getContentOptions()
  {
    return $this->contentOptions;
  }
  /** @param GooglePrivacyDlpV2CustomInfoType[] */
  public function setCustomInfoTypes($customInfoTypes)
  {
    $this->customInfoTypes = $customInfoTypes;
  }
  /** @return GooglePrivacyDlpV2CustomInfoType[] */
  public function getCustomInfoTypes()
  {
    return $this->customInfoTypes;
  }
  /** @param bool */
  public function setExcludeInfoTypes($excludeInfoTypes)
  {
    $this->excludeInfoTypes = $excludeInfoTypes;
  }
  /** @return bool */
  public function getExcludeInfoTypes()
  {
    return $this->excludeInfoTypes;
  }
  /** @param bool */
  public function setIncludeQuote($includeQuote)
  {
    $this->includeQuote = $includeQuote;
  }
  /** @return bool */
  public function getIncludeQuote()
  {
    return $this->includeQuote;
  }
  /** @param GooglePrivacyDlpV2InfoType[] */
  public function setInfoTypes($infoTypes)
  {
    $this->infoTypes = $infoTypes;
  }
  /** @return GooglePrivacyDlpV2InfoType[] */
  public function getInfoTypes()
  {
    return $this->infoTypes;
  }
  /** @param GooglePrivacyDlpV2FindingLimits */
  public function setLimits(GooglePrivacyDlpV2FindingLimits $limits)
  {
    $this->limits = $limits;
  }
  /** @return GooglePrivacyDlpV2FindingLimits */
  public function getLimits()
  {
    return $this->limits;
  }
  /** @param string */
  public function setMinLikelihood($minLikelihood)
  {
    $this->minLikelihood = $minLikelihood;
  }
  /** @return string */
  public function getMinLikelihood()
  {
    return $this->minLikelihood;
  }
  /** @param GooglePrivacyDlpV2InspectionRuleSet[] */
  public function setRuleSet($ruleSet)
  {
    $this->ruleSet = $ruleSet;
  }
  /** @return GooglePrivacyDlpV2InspectionRuleSet[] */
  public function getRuleSet()
  {
    return $this->ruleSet;
  }
}

class GooglePrivacyDlpV2InspectContentRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2InspectConfig */
  public $inspectConfig;
  /** @var string */
  public $inspectTemplateName;
  /** @var GooglePrivacyDlpV2ContentItem */
  public $item;
  /** @var string */
  public $locationId;
  protected $inspectConfigType = GooglePrivacyDlpV2InspectConfig::class;
  protected $inspectConfigDataType = '';
  protected $itemType = GooglePrivacyDlpV2ContentItem::class;
  protected $itemDataType = '';
  /** @param GooglePrivacyDlpV2InspectConfig */
  public function setInspectConfig(GooglePrivacyDlpV2InspectConfig $inspectConfig)
  {
    $this->inspectConfig = $inspectConfig;
  }
  /** @return GooglePrivacyDlpV2InspectConfig */
  public function getInspectConfig()
  {
    return $this->inspectConfig;
  }
  /** @param string */
  public function setInspectTemplateName($inspectTemplateName)
  {
    $this->inspectTemplateName = $inspectTemplateName;
  }
  /** @return string */
  public function getInspectTemplateName()
  {
    return $this->inspectTemplateName;
  }
  /** @param GooglePrivacyDlpV2ContentItem */
  public function setItem(GooglePrivacyDlpV2ContentItem $item)
  {
    $this->item = $item;
  }
  /** @return GooglePrivacyDlpV2ContentItem */
  public function getItem()
  {
    return $this->item;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
}

class GooglePrivacyDlpV2InspectContentResponse extends \Google\Model
{
  /** @var GooglePrivacyDlpV2InspectResult */
  public $result;
  protected $resultType = GooglePrivacyDlpV2InspectResult::class;
  protected $resultDataType = '';
  /** @param GooglePrivacyDlpV2InspectResult */
  public function setResult(GooglePrivacyDlpV2InspectResult $result)
  {
    $this->result = $result;
  }
  /** @return GooglePrivacyDlpV2InspectResult */
  public function getResult()
  {
    return $this->result;
  }
}

class GooglePrivacyDlpV2InspectDataSourceDetails extends \Google\Model
{
  /** @var GooglePrivacyDlpV2RequestedOptions */
  public $requestedOptions;
  /** @var GooglePrivacyDlpV2Result */
  public $result;
  protected $requestedOptionsType = GooglePrivacyDlpV2RequestedOptions::class;
  protected $requestedOptionsDataType = '';
  protected $resultType = GooglePrivacyDlpV2Result::class;
  protected $resultDataType = '';
  /** @param GooglePrivacyDlpV2RequestedOptions */
  public function setRequestedOptions(GooglePrivacyDlpV2RequestedOptions $requestedOptions)
  {
    $this->requestedOptions = $requestedOptions;
  }
  /** @return GooglePrivacyDlpV2RequestedOptions */
  public function getRequestedOptions()
  {
    return $this->requestedOptions;
  }
  /** @param GooglePrivacyDlpV2Result */
  public function setResult(GooglePrivacyDlpV2Result $result)
  {
    $this->result = $result;
  }
  /** @return GooglePrivacyDlpV2Result */
  public function getResult()
  {
    return $this->result;
  }
}

class GooglePrivacyDlpV2InspectJobConfig extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2Action[] */
  public $actions;
  /** @var GooglePrivacyDlpV2InspectConfig */
  public $inspectConfig;
  /** @var string */
  public $inspectTemplateName;
  /** @var GooglePrivacyDlpV2StorageConfig */
  public $storageConfig;
  protected $collection_key = 'actions';
  protected $actionsType = GooglePrivacyDlpV2Action::class;
  protected $actionsDataType = 'array';
  protected $inspectConfigType = GooglePrivacyDlpV2InspectConfig::class;
  protected $inspectConfigDataType = '';
  protected $storageConfigType = GooglePrivacyDlpV2StorageConfig::class;
  protected $storageConfigDataType = '';
  /** @param GooglePrivacyDlpV2Action[] */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /** @return GooglePrivacyDlpV2Action[] */
  public function getActions()
  {
    return $this->actions;
  }
  /** @param GooglePrivacyDlpV2InspectConfig */
  public function setInspectConfig(GooglePrivacyDlpV2InspectConfig $inspectConfig)
  {
    $this->inspectConfig = $inspectConfig;
  }
  /** @return GooglePrivacyDlpV2InspectConfig */
  public function getInspectConfig()
  {
    return $this->inspectConfig;
  }
  /** @param string */
  public function setInspectTemplateName($inspectTemplateName)
  {
    $this->inspectTemplateName = $inspectTemplateName;
  }
  /** @return string */
  public function getInspectTemplateName()
  {
    return $this->inspectTemplateName;
  }
  /** @param GooglePrivacyDlpV2StorageConfig */
  public function setStorageConfig(GooglePrivacyDlpV2StorageConfig $storageConfig)
  {
    $this->storageConfig = $storageConfig;
  }
  /** @return GooglePrivacyDlpV2StorageConfig */
  public function getStorageConfig()
  {
    return $this->storageConfig;
  }
}

class GooglePrivacyDlpV2InspectResult extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2Finding[] */
  public $findings;
  /** @var bool */
  public $findingsTruncated;
  protected $collection_key = 'findings';
  protected $findingsType = GooglePrivacyDlpV2Finding::class;
  protected $findingsDataType = 'array';
  /** @param GooglePrivacyDlpV2Finding[] */
  public function setFindings($findings)
  {
    $this->findings = $findings;
  }
  /** @return GooglePrivacyDlpV2Finding[] */
  public function getFindings()
  {
    return $this->findings;
  }
  /** @param bool */
  public function setFindingsTruncated($findingsTruncated)
  {
    $this->findingsTruncated = $findingsTruncated;
  }
  /** @return bool */
  public function getFindingsTruncated()
  {
    return $this->findingsTruncated;
  }
}

class GooglePrivacyDlpV2InspectTemplate extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GooglePrivacyDlpV2InspectConfig */
  public $inspectConfig;
  /** @var string */
  public $name;
  /** @var string */
  public $updateTime;
  protected $inspectConfigType = GooglePrivacyDlpV2InspectConfig::class;
  protected $inspectConfigDataType = '';
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param GooglePrivacyDlpV2InspectConfig */
  public function setInspectConfig(GooglePrivacyDlpV2InspectConfig $inspectConfig)
  {
    $this->inspectConfig = $inspectConfig;
  }
  /** @return GooglePrivacyDlpV2InspectConfig */
  public function getInspectConfig()
  {
    return $this->inspectConfig;
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

class GooglePrivacyDlpV2InspectionRule extends \Google\Model
{
  /** @var GooglePrivacyDlpV2ExclusionRule */
  public $exclusionRule;
  /** @var GooglePrivacyDlpV2HotwordRule */
  public $hotwordRule;
  protected $exclusionRuleType = GooglePrivacyDlpV2ExclusionRule::class;
  protected $exclusionRuleDataType = '';
  protected $hotwordRuleType = GooglePrivacyDlpV2HotwordRule::class;
  protected $hotwordRuleDataType = '';
  /** @param GooglePrivacyDlpV2ExclusionRule */
  public function setExclusionRule(GooglePrivacyDlpV2ExclusionRule $exclusionRule)
  {
    $this->exclusionRule = $exclusionRule;
  }
  /** @return GooglePrivacyDlpV2ExclusionRule */
  public function getExclusionRule()
  {
    return $this->exclusionRule;
  }
  /** @param GooglePrivacyDlpV2HotwordRule */
  public function setHotwordRule(GooglePrivacyDlpV2HotwordRule $hotwordRule)
  {
    $this->hotwordRule = $hotwordRule;
  }
  /** @return GooglePrivacyDlpV2HotwordRule */
  public function getHotwordRule()
  {
    return $this->hotwordRule;
  }
}

class GooglePrivacyDlpV2InspectionRuleSet extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2InfoType[] */
  public $infoTypes;
  /** @var GooglePrivacyDlpV2InspectionRule[] */
  public $rules;
  protected $collection_key = 'rules';
  protected $infoTypesType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypesDataType = 'array';
  protected $rulesType = GooglePrivacyDlpV2InspectionRule::class;
  protected $rulesDataType = 'array';
  /** @param GooglePrivacyDlpV2InfoType[] */
  public function setInfoTypes($infoTypes)
  {
    $this->infoTypes = $infoTypes;
  }
  /** @return GooglePrivacyDlpV2InfoType[] */
  public function getInfoTypes()
  {
    return $this->infoTypes;
  }
  /** @param GooglePrivacyDlpV2InspectionRule[] */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /** @return GooglePrivacyDlpV2InspectionRule[] */
  public function getRules()
  {
    return $this->rules;
  }
}

class GooglePrivacyDlpV2JobNotificationEmails extends \Google\Model
{
}

class GooglePrivacyDlpV2JobTrigger extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var GooglePrivacyDlpV2Error[] */
  public $errors;
  /** @var GooglePrivacyDlpV2InspectJobConfig */
  public $inspectJob;
  /** @var string */
  public $lastRunTime;
  /** @var string */
  public $name;
  /** @var string */
  public $status;
  /** @var GooglePrivacyDlpV2Trigger[] */
  public $triggers;
  /** @var string */
  public $updateTime;
  protected $collection_key = 'triggers';
  protected $errorsType = GooglePrivacyDlpV2Error::class;
  protected $errorsDataType = 'array';
  protected $inspectJobType = GooglePrivacyDlpV2InspectJobConfig::class;
  protected $inspectJobDataType = '';
  protected $triggersType = GooglePrivacyDlpV2Trigger::class;
  protected $triggersDataType = 'array';
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
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param GooglePrivacyDlpV2Error[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GooglePrivacyDlpV2Error[] */
  public function getErrors()
  {
    return $this->errors;
  }
  /** @param GooglePrivacyDlpV2InspectJobConfig */
  public function setInspectJob(GooglePrivacyDlpV2InspectJobConfig $inspectJob)
  {
    $this->inspectJob = $inspectJob;
  }
  /** @return GooglePrivacyDlpV2InspectJobConfig */
  public function getInspectJob()
  {
    return $this->inspectJob;
  }
  /** @param string */
  public function setLastRunTime($lastRunTime)
  {
    $this->lastRunTime = $lastRunTime;
  }
  /** @return string */
  public function getLastRunTime()
  {
    return $this->lastRunTime;
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
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
  /** @param GooglePrivacyDlpV2Trigger[] */
  public function setTriggers($triggers)
  {
    $this->triggers = $triggers;
  }
  /** @return GooglePrivacyDlpV2Trigger[] */
  public function getTriggers()
  {
    return $this->triggers;
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

class GooglePrivacyDlpV2KAnonymityConfig extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2EntityId */
  public $entityId;
  /** @var GooglePrivacyDlpV2FieldId[] */
  public $quasiIds;
  protected $collection_key = 'quasiIds';
  protected $entityIdType = GooglePrivacyDlpV2EntityId::class;
  protected $entityIdDataType = '';
  protected $quasiIdsType = GooglePrivacyDlpV2FieldId::class;
  protected $quasiIdsDataType = 'array';
  /** @param GooglePrivacyDlpV2EntityId */
  public function setEntityId(GooglePrivacyDlpV2EntityId $entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return GooglePrivacyDlpV2EntityId */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /** @param GooglePrivacyDlpV2FieldId[] */
  public function setQuasiIds($quasiIds)
  {
    $this->quasiIds = $quasiIds;
  }
  /** @return GooglePrivacyDlpV2FieldId[] */
  public function getQuasiIds()
  {
    return $this->quasiIds;
  }
}

class GooglePrivacyDlpV2KAnonymityEquivalenceClass extends \Google\Collection
{
  /** @var string */
  public $equivalenceClassSize;
  /** @var GooglePrivacyDlpV2Value[] */
  public $quasiIdsValues;
  protected $collection_key = 'quasiIdsValues';
  protected $quasiIdsValuesType = GooglePrivacyDlpV2Value::class;
  protected $quasiIdsValuesDataType = 'array';
  /** @param string */
  public function setEquivalenceClassSize($equivalenceClassSize)
  {
    $this->equivalenceClassSize = $equivalenceClassSize;
  }
  /** @return string */
  public function getEquivalenceClassSize()
  {
    return $this->equivalenceClassSize;
  }
  /** @param GooglePrivacyDlpV2Value[] */
  public function setQuasiIdsValues($quasiIdsValues)
  {
    $this->quasiIdsValues = $quasiIdsValues;
  }
  /** @return GooglePrivacyDlpV2Value[] */
  public function getQuasiIdsValues()
  {
    return $this->quasiIdsValues;
  }
}

class GooglePrivacyDlpV2KAnonymityHistogramBucket extends \Google\Collection
{
  /** @var string */
  public $bucketSize;
  /** @var string */
  public $bucketValueCount;
  /** @var GooglePrivacyDlpV2KAnonymityEquivalenceClass[] */
  public $bucketValues;
  /** @var string */
  public $equivalenceClassSizeLowerBound;
  /** @var string */
  public $equivalenceClassSizeUpperBound;
  protected $collection_key = 'bucketValues';
  protected $bucketValuesType = GooglePrivacyDlpV2KAnonymityEquivalenceClass::class;
  protected $bucketValuesDataType = 'array';
  /** @param string */
  public function setBucketSize($bucketSize)
  {
    $this->bucketSize = $bucketSize;
  }
  /** @return string */
  public function getBucketSize()
  {
    return $this->bucketSize;
  }
  /** @param string */
  public function setBucketValueCount($bucketValueCount)
  {
    $this->bucketValueCount = $bucketValueCount;
  }
  /** @return string */
  public function getBucketValueCount()
  {
    return $this->bucketValueCount;
  }
  /** @param GooglePrivacyDlpV2KAnonymityEquivalenceClass[] */
  public function setBucketValues($bucketValues)
  {
    $this->bucketValues = $bucketValues;
  }
  /** @return GooglePrivacyDlpV2KAnonymityEquivalenceClass[] */
  public function getBucketValues()
  {
    return $this->bucketValues;
  }
  /** @param string */
  public function setEquivalenceClassSizeLowerBound($equivalenceClassSizeLowerBound)
  {
    $this->equivalenceClassSizeLowerBound = $equivalenceClassSizeLowerBound;
  }
  /** @return string */
  public function getEquivalenceClassSizeLowerBound()
  {
    return $this->equivalenceClassSizeLowerBound;
  }
  /** @param string */
  public function setEquivalenceClassSizeUpperBound($equivalenceClassSizeUpperBound)
  {
    $this->equivalenceClassSizeUpperBound = $equivalenceClassSizeUpperBound;
  }
  /** @return string */
  public function getEquivalenceClassSizeUpperBound()
  {
    return $this->equivalenceClassSizeUpperBound;
  }
}

class GooglePrivacyDlpV2KAnonymityResult extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2KAnonymityHistogramBucket[] */
  public $equivalenceClassHistogramBuckets;
  protected $collection_key = 'equivalenceClassHistogramBuckets';
  protected $equivalenceClassHistogramBucketsType = GooglePrivacyDlpV2KAnonymityHistogramBucket::class;
  protected $equivalenceClassHistogramBucketsDataType = 'array';
  /** @param GooglePrivacyDlpV2KAnonymityHistogramBucket[] */
  public function setEquivalenceClassHistogramBuckets($equivalenceClassHistogramBuckets)
  {
    $this->equivalenceClassHistogramBuckets = $equivalenceClassHistogramBuckets;
  }
  /** @return GooglePrivacyDlpV2KAnonymityHistogramBucket[] */
  public function getEquivalenceClassHistogramBuckets()
  {
    return $this->equivalenceClassHistogramBuckets;
  }
}

class GooglePrivacyDlpV2KMapEstimationConfig extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2AuxiliaryTable[] */
  public $auxiliaryTables;
  /** @var GooglePrivacyDlpV2TaggedField[] */
  public $quasiIds;
  /** @var string */
  public $regionCode;
  protected $collection_key = 'quasiIds';
  protected $auxiliaryTablesType = GooglePrivacyDlpV2AuxiliaryTable::class;
  protected $auxiliaryTablesDataType = 'array';
  protected $quasiIdsType = GooglePrivacyDlpV2TaggedField::class;
  protected $quasiIdsDataType = 'array';
  /** @param GooglePrivacyDlpV2AuxiliaryTable[] */
  public function setAuxiliaryTables($auxiliaryTables)
  {
    $this->auxiliaryTables = $auxiliaryTables;
  }
  /** @return GooglePrivacyDlpV2AuxiliaryTable[] */
  public function getAuxiliaryTables()
  {
    return $this->auxiliaryTables;
  }
  /** @param GooglePrivacyDlpV2TaggedField[] */
  public function setQuasiIds($quasiIds)
  {
    $this->quasiIds = $quasiIds;
  }
  /** @return GooglePrivacyDlpV2TaggedField[] */
  public function getQuasiIds()
  {
    return $this->quasiIds;
  }
  /** @param string */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /** @return string */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
}

class GooglePrivacyDlpV2KMapEstimationHistogramBucket extends \Google\Collection
{
  /** @var string */
  public $bucketSize;
  /** @var string */
  public $bucketValueCount;
  /** @var GooglePrivacyDlpV2KMapEstimationQuasiIdValues[] */
  public $bucketValues;
  /** @var string */
  public $maxAnonymity;
  /** @var string */
  public $minAnonymity;
  protected $collection_key = 'bucketValues';
  protected $bucketValuesType = GooglePrivacyDlpV2KMapEstimationQuasiIdValues::class;
  protected $bucketValuesDataType = 'array';
  /** @param string */
  public function setBucketSize($bucketSize)
  {
    $this->bucketSize = $bucketSize;
  }
  /** @return string */
  public function getBucketSize()
  {
    return $this->bucketSize;
  }
  /** @param string */
  public function setBucketValueCount($bucketValueCount)
  {
    $this->bucketValueCount = $bucketValueCount;
  }
  /** @return string */
  public function getBucketValueCount()
  {
    return $this->bucketValueCount;
  }
  /** @param GooglePrivacyDlpV2KMapEstimationQuasiIdValues[] */
  public function setBucketValues($bucketValues)
  {
    $this->bucketValues = $bucketValues;
  }
  /** @return GooglePrivacyDlpV2KMapEstimationQuasiIdValues[] */
  public function getBucketValues()
  {
    return $this->bucketValues;
  }
  /** @param string */
  public function setMaxAnonymity($maxAnonymity)
  {
    $this->maxAnonymity = $maxAnonymity;
  }
  /** @return string */
  public function getMaxAnonymity()
  {
    return $this->maxAnonymity;
  }
  /** @param string */
  public function setMinAnonymity($minAnonymity)
  {
    $this->minAnonymity = $minAnonymity;
  }
  /** @return string */
  public function getMinAnonymity()
  {
    return $this->minAnonymity;
  }
}

class GooglePrivacyDlpV2KMapEstimationQuasiIdValues extends \Google\Collection
{
  /** @var string */
  public $estimatedAnonymity;
  /** @var GooglePrivacyDlpV2Value[] */
  public $quasiIdsValues;
  protected $collection_key = 'quasiIdsValues';
  protected $quasiIdsValuesType = GooglePrivacyDlpV2Value::class;
  protected $quasiIdsValuesDataType = 'array';
  /** @param string */
  public function setEstimatedAnonymity($estimatedAnonymity)
  {
    $this->estimatedAnonymity = $estimatedAnonymity;
  }
  /** @return string */
  public function getEstimatedAnonymity()
  {
    return $this->estimatedAnonymity;
  }
  /** @param GooglePrivacyDlpV2Value[] */
  public function setQuasiIdsValues($quasiIdsValues)
  {
    $this->quasiIdsValues = $quasiIdsValues;
  }
  /** @return GooglePrivacyDlpV2Value[] */
  public function getQuasiIdsValues()
  {
    return $this->quasiIdsValues;
  }
}

class GooglePrivacyDlpV2KMapEstimationResult extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2KMapEstimationHistogramBucket[] */
  public $kMapEstimationHistogram;
  protected $collection_key = 'kMapEstimationHistogram';
  protected $kMapEstimationHistogramType = GooglePrivacyDlpV2KMapEstimationHistogramBucket::class;
  protected $kMapEstimationHistogramDataType = 'array';
  /** @param GooglePrivacyDlpV2KMapEstimationHistogramBucket[] */
  public function setKMapEstimationHistogram($kMapEstimationHistogram)
  {
    $this->kMapEstimationHistogram = $kMapEstimationHistogram;
  }
  /** @return GooglePrivacyDlpV2KMapEstimationHistogramBucket[] */
  public function getKMapEstimationHistogram()
  {
    return $this->kMapEstimationHistogram;
  }
}

class GooglePrivacyDlpV2Key extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2PartitionId */
  public $partitionId;
  /** @var GooglePrivacyDlpV2PathElement[] */
  public $path;
  protected $collection_key = 'path';
  protected $partitionIdType = GooglePrivacyDlpV2PartitionId::class;
  protected $partitionIdDataType = '';
  protected $pathType = GooglePrivacyDlpV2PathElement::class;
  protected $pathDataType = 'array';
  /** @param GooglePrivacyDlpV2PartitionId */
  public function setPartitionId(GooglePrivacyDlpV2PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }
  /** @return GooglePrivacyDlpV2PartitionId */
  public function getPartitionId()
  {
    return $this->partitionId;
  }
  /** @param GooglePrivacyDlpV2PathElement[] */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /** @return GooglePrivacyDlpV2PathElement[] */
  public function getPath()
  {
    return $this->path;
  }
}

class GooglePrivacyDlpV2KindExpression extends \Google\Model
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

class GooglePrivacyDlpV2KmsWrappedCryptoKey extends \Google\Model
{
  /** @var string */
  public $cryptoKeyName;
  /** @var string */
  public $wrappedKey;

  /** @param string */
  public function setCryptoKeyName($cryptoKeyName)
  {
    $this->cryptoKeyName = $cryptoKeyName;
  }
  /** @return string */
  public function getCryptoKeyName()
  {
    return $this->cryptoKeyName;
  }
  /** @param string */
  public function setWrappedKey($wrappedKey)
  {
    $this->wrappedKey = $wrappedKey;
  }
  /** @return string */
  public function getWrappedKey()
  {
    return $this->wrappedKey;
  }
}

class GooglePrivacyDlpV2LDiversityConfig extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2FieldId[] */
  public $quasiIds;
  /** @var GooglePrivacyDlpV2FieldId */
  public $sensitiveAttribute;
  protected $collection_key = 'quasiIds';
  protected $quasiIdsType = GooglePrivacyDlpV2FieldId::class;
  protected $quasiIdsDataType = 'array';
  protected $sensitiveAttributeType = GooglePrivacyDlpV2FieldId::class;
  protected $sensitiveAttributeDataType = '';
  /** @param GooglePrivacyDlpV2FieldId[] */
  public function setQuasiIds($quasiIds)
  {
    $this->quasiIds = $quasiIds;
  }
  /** @return GooglePrivacyDlpV2FieldId[] */
  public function getQuasiIds()
  {
    return $this->quasiIds;
  }
  /** @param GooglePrivacyDlpV2FieldId */
  public function setSensitiveAttribute(GooglePrivacyDlpV2FieldId $sensitiveAttribute)
  {
    $this->sensitiveAttribute = $sensitiveAttribute;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getSensitiveAttribute()
  {
    return $this->sensitiveAttribute;
  }
}

class GooglePrivacyDlpV2LDiversityEquivalenceClass extends \Google\Collection
{
  /** @var string */
  public $equivalenceClassSize;
  /** @var string */
  public $numDistinctSensitiveValues;
  /** @var GooglePrivacyDlpV2Value[] */
  public $quasiIdsValues;
  /** @var GooglePrivacyDlpV2ValueFrequency[] */
  public $topSensitiveValues;
  protected $collection_key = 'topSensitiveValues';
  protected $quasiIdsValuesType = GooglePrivacyDlpV2Value::class;
  protected $quasiIdsValuesDataType = 'array';
  protected $topSensitiveValuesType = GooglePrivacyDlpV2ValueFrequency::class;
  protected $topSensitiveValuesDataType = 'array';
  /** @param string */
  public function setEquivalenceClassSize($equivalenceClassSize)
  {
    $this->equivalenceClassSize = $equivalenceClassSize;
  }
  /** @return string */
  public function getEquivalenceClassSize()
  {
    return $this->equivalenceClassSize;
  }
  /** @param string */
  public function setNumDistinctSensitiveValues($numDistinctSensitiveValues)
  {
    $this->numDistinctSensitiveValues = $numDistinctSensitiveValues;
  }
  /** @return string */
  public function getNumDistinctSensitiveValues()
  {
    return $this->numDistinctSensitiveValues;
  }
  /** @param GooglePrivacyDlpV2Value[] */
  public function setQuasiIdsValues($quasiIdsValues)
  {
    $this->quasiIdsValues = $quasiIdsValues;
  }
  /** @return GooglePrivacyDlpV2Value[] */
  public function getQuasiIdsValues()
  {
    return $this->quasiIdsValues;
  }
  /** @param GooglePrivacyDlpV2ValueFrequency[] */
  public function setTopSensitiveValues($topSensitiveValues)
  {
    $this->topSensitiveValues = $topSensitiveValues;
  }
  /** @return GooglePrivacyDlpV2ValueFrequency[] */
  public function getTopSensitiveValues()
  {
    return $this->topSensitiveValues;
  }
}

class GooglePrivacyDlpV2LDiversityHistogramBucket extends \Google\Collection
{
  /** @var string */
  public $bucketSize;
  /** @var string */
  public $bucketValueCount;
  /** @var GooglePrivacyDlpV2LDiversityEquivalenceClass[] */
  public $bucketValues;
  /** @var string */
  public $sensitiveValueFrequencyLowerBound;
  /** @var string */
  public $sensitiveValueFrequencyUpperBound;
  protected $collection_key = 'bucketValues';
  protected $bucketValuesType = GooglePrivacyDlpV2LDiversityEquivalenceClass::class;
  protected $bucketValuesDataType = 'array';
  /** @param string */
  public function setBucketSize($bucketSize)
  {
    $this->bucketSize = $bucketSize;
  }
  /** @return string */
  public function getBucketSize()
  {
    return $this->bucketSize;
  }
  /** @param string */
  public function setBucketValueCount($bucketValueCount)
  {
    $this->bucketValueCount = $bucketValueCount;
  }
  /** @return string */
  public function getBucketValueCount()
  {
    return $this->bucketValueCount;
  }
  /** @param GooglePrivacyDlpV2LDiversityEquivalenceClass[] */
  public function setBucketValues($bucketValues)
  {
    $this->bucketValues = $bucketValues;
  }
  /** @return GooglePrivacyDlpV2LDiversityEquivalenceClass[] */
  public function getBucketValues()
  {
    return $this->bucketValues;
  }
  /** @param string */
  public function setSensitiveValueFrequencyLowerBound($sensitiveValueFrequencyLowerBound)
  {
    $this->sensitiveValueFrequencyLowerBound = $sensitiveValueFrequencyLowerBound;
  }
  /** @return string */
  public function getSensitiveValueFrequencyLowerBound()
  {
    return $this->sensitiveValueFrequencyLowerBound;
  }
  /** @param string */
  public function setSensitiveValueFrequencyUpperBound($sensitiveValueFrequencyUpperBound)
  {
    $this->sensitiveValueFrequencyUpperBound = $sensitiveValueFrequencyUpperBound;
  }
  /** @return string */
  public function getSensitiveValueFrequencyUpperBound()
  {
    return $this->sensitiveValueFrequencyUpperBound;
  }
}

class GooglePrivacyDlpV2LDiversityResult extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2LDiversityHistogramBucket[] */
  public $sensitiveValueFrequencyHistogramBuckets;
  protected $collection_key = 'sensitiveValueFrequencyHistogramBuckets';
  protected $sensitiveValueFrequencyHistogramBucketsType = GooglePrivacyDlpV2LDiversityHistogramBucket::class;
  protected $sensitiveValueFrequencyHistogramBucketsDataType = 'array';
  /** @param GooglePrivacyDlpV2LDiversityHistogramBucket[] */
  public function setSensitiveValueFrequencyHistogramBuckets($sensitiveValueFrequencyHistogramBuckets)
  {
    $this->sensitiveValueFrequencyHistogramBuckets = $sensitiveValueFrequencyHistogramBuckets;
  }
  /** @return GooglePrivacyDlpV2LDiversityHistogramBucket[] */
  public function getSensitiveValueFrequencyHistogramBuckets()
  {
    return $this->sensitiveValueFrequencyHistogramBuckets;
  }
}

class GooglePrivacyDlpV2LargeCustomDictionaryConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2BigQueryField */
  public $bigQueryField;
  /** @var GooglePrivacyDlpV2CloudStorageFileSet */
  public $cloudStorageFileSet;
  /** @var GooglePrivacyDlpV2CloudStoragePath */
  public $outputPath;
  protected $bigQueryFieldType = GooglePrivacyDlpV2BigQueryField::class;
  protected $bigQueryFieldDataType = '';
  protected $cloudStorageFileSetType = GooglePrivacyDlpV2CloudStorageFileSet::class;
  protected $cloudStorageFileSetDataType = '';
  protected $outputPathType = GooglePrivacyDlpV2CloudStoragePath::class;
  protected $outputPathDataType = '';
  /** @param GooglePrivacyDlpV2BigQueryField */
  public function setBigQueryField(GooglePrivacyDlpV2BigQueryField $bigQueryField)
  {
    $this->bigQueryField = $bigQueryField;
  }
  /** @return GooglePrivacyDlpV2BigQueryField */
  public function getBigQueryField()
  {
    return $this->bigQueryField;
  }
  /** @param GooglePrivacyDlpV2CloudStorageFileSet */
  public function setCloudStorageFileSet(GooglePrivacyDlpV2CloudStorageFileSet $cloudStorageFileSet)
  {
    $this->cloudStorageFileSet = $cloudStorageFileSet;
  }
  /** @return GooglePrivacyDlpV2CloudStorageFileSet */
  public function getCloudStorageFileSet()
  {
    return $this->cloudStorageFileSet;
  }
  /** @param GooglePrivacyDlpV2CloudStoragePath */
  public function setOutputPath(GooglePrivacyDlpV2CloudStoragePath $outputPath)
  {
    $this->outputPath = $outputPath;
  }
  /** @return GooglePrivacyDlpV2CloudStoragePath */
  public function getOutputPath()
  {
    return $this->outputPath;
  }
}

class GooglePrivacyDlpV2LargeCustomDictionaryStats extends \Google\Model
{
  /** @var string */
  public $approxNumPhrases;

  /** @param string */
  public function setApproxNumPhrases($approxNumPhrases)
  {
    $this->approxNumPhrases = $approxNumPhrases;
  }
  /** @return string */
  public function getApproxNumPhrases()
  {
    return $this->approxNumPhrases;
  }
}

class GooglePrivacyDlpV2LeaveUntransformed extends \Google\Model
{
}

class GooglePrivacyDlpV2LikelihoodAdjustment extends \Google\Model
{
  /** @var string */
  public $fixedLikelihood;
  /** @var int */
  public $relativeLikelihood;

  /** @param string */
  public function setFixedLikelihood($fixedLikelihood)
  {
    $this->fixedLikelihood = $fixedLikelihood;
  }
  /** @return string */
  public function getFixedLikelihood()
  {
    return $this->fixedLikelihood;
  }
  /** @param int */
  public function setRelativeLikelihood($relativeLikelihood)
  {
    $this->relativeLikelihood = $relativeLikelihood;
  }
  /** @return int */
  public function getRelativeLikelihood()
  {
    return $this->relativeLikelihood;
  }
}

class GooglePrivacyDlpV2ListDeidentifyTemplatesResponse extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2DeidentifyTemplate[] */
  public $deidentifyTemplates;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'deidentifyTemplates';
  protected $deidentifyTemplatesType = GooglePrivacyDlpV2DeidentifyTemplate::class;
  protected $deidentifyTemplatesDataType = 'array';
  /** @param GooglePrivacyDlpV2DeidentifyTemplate[] */
  public function setDeidentifyTemplates($deidentifyTemplates)
  {
    $this->deidentifyTemplates = $deidentifyTemplates;
  }
  /** @return GooglePrivacyDlpV2DeidentifyTemplate[] */
  public function getDeidentifyTemplates()
  {
    return $this->deidentifyTemplates;
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

class GooglePrivacyDlpV2ListDlpJobsResponse extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2DlpJob[] */
  public $jobs;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobs';
  protected $jobsType = GooglePrivacyDlpV2DlpJob::class;
  protected $jobsDataType = 'array';
  /** @param GooglePrivacyDlpV2DlpJob[] */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /** @return GooglePrivacyDlpV2DlpJob[] */
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

class GooglePrivacyDlpV2ListInfoTypesResponse extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2InfoTypeDescription[] */
  public $infoTypes;
  protected $collection_key = 'infoTypes';
  protected $infoTypesType = GooglePrivacyDlpV2InfoTypeDescription::class;
  protected $infoTypesDataType = 'array';
  /** @param GooglePrivacyDlpV2InfoTypeDescription[] */
  public function setInfoTypes($infoTypes)
  {
    $this->infoTypes = $infoTypes;
  }
  /** @return GooglePrivacyDlpV2InfoTypeDescription[] */
  public function getInfoTypes()
  {
    return $this->infoTypes;
  }
}

class GooglePrivacyDlpV2ListInspectTemplatesResponse extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2InspectTemplate[] */
  public $inspectTemplates;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'inspectTemplates';
  protected $inspectTemplatesType = GooglePrivacyDlpV2InspectTemplate::class;
  protected $inspectTemplatesDataType = 'array';
  /** @param GooglePrivacyDlpV2InspectTemplate[] */
  public function setInspectTemplates($inspectTemplates)
  {
    $this->inspectTemplates = $inspectTemplates;
  }
  /** @return GooglePrivacyDlpV2InspectTemplate[] */
  public function getInspectTemplates()
  {
    return $this->inspectTemplates;
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

class GooglePrivacyDlpV2ListJobTriggersResponse extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2JobTrigger[] */
  public $jobTriggers;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'jobTriggers';
  protected $jobTriggersType = GooglePrivacyDlpV2JobTrigger::class;
  protected $jobTriggersDataType = 'array';
  /** @param GooglePrivacyDlpV2JobTrigger[] */
  public function setJobTriggers($jobTriggers)
  {
    $this->jobTriggers = $jobTriggers;
  }
  /** @return GooglePrivacyDlpV2JobTrigger[] */
  public function getJobTriggers()
  {
    return $this->jobTriggers;
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

class GooglePrivacyDlpV2ListStoredInfoTypesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GooglePrivacyDlpV2StoredInfoType[] */
  public $storedInfoTypes;
  protected $collection_key = 'storedInfoTypes';
  protected $storedInfoTypesType = GooglePrivacyDlpV2StoredInfoType::class;
  protected $storedInfoTypesDataType = 'array';
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
  /** @param GooglePrivacyDlpV2StoredInfoType[] */
  public function setStoredInfoTypes($storedInfoTypes)
  {
    $this->storedInfoTypes = $storedInfoTypes;
  }
  /** @return GooglePrivacyDlpV2StoredInfoType[] */
  public function getStoredInfoTypes()
  {
    return $this->storedInfoTypes;
  }
}

class GooglePrivacyDlpV2Location extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2Range */
  public $byteRange;
  /** @var GooglePrivacyDlpV2Range */
  public $codepointRange;
  /** @var GooglePrivacyDlpV2Container */
  public $container;
  /** @var GooglePrivacyDlpV2ContentLocation[] */
  public $contentLocations;
  protected $collection_key = 'contentLocations';
  protected $byteRangeType = GooglePrivacyDlpV2Range::class;
  protected $byteRangeDataType = '';
  protected $codepointRangeType = GooglePrivacyDlpV2Range::class;
  protected $codepointRangeDataType = '';
  protected $containerType = GooglePrivacyDlpV2Container::class;
  protected $containerDataType = '';
  protected $contentLocationsType = GooglePrivacyDlpV2ContentLocation::class;
  protected $contentLocationsDataType = 'array';
  /** @param GooglePrivacyDlpV2Range */
  public function setByteRange(GooglePrivacyDlpV2Range $byteRange)
  {
    $this->byteRange = $byteRange;
  }
  /** @return GooglePrivacyDlpV2Range */
  public function getByteRange()
  {
    return $this->byteRange;
  }
  /** @param GooglePrivacyDlpV2Range */
  public function setCodepointRange(GooglePrivacyDlpV2Range $codepointRange)
  {
    $this->codepointRange = $codepointRange;
  }
  /** @return GooglePrivacyDlpV2Range */
  public function getCodepointRange()
  {
    return $this->codepointRange;
  }
  /** @param GooglePrivacyDlpV2Container */
  public function setContainer(GooglePrivacyDlpV2Container $container)
  {
    $this->container = $container;
  }
  /** @return GooglePrivacyDlpV2Container */
  public function getContainer()
  {
    return $this->container;
  }
  /** @param GooglePrivacyDlpV2ContentLocation[] */
  public function setContentLocations($contentLocations)
  {
    $this->contentLocations = $contentLocations;
  }
  /** @return GooglePrivacyDlpV2ContentLocation[] */
  public function getContentLocations()
  {
    return $this->contentLocations;
  }
}

class GooglePrivacyDlpV2Manual extends \Google\Model
{
}

class GooglePrivacyDlpV2MetadataLocation extends \Google\Model
{
  /** @var GooglePrivacyDlpV2StorageMetadataLabel */
  public $storageLabel;
  /** @var string */
  public $type;
  protected $storageLabelType = GooglePrivacyDlpV2StorageMetadataLabel::class;
  protected $storageLabelDataType = '';
  /** @param GooglePrivacyDlpV2StorageMetadataLabel */
  public function setStorageLabel(GooglePrivacyDlpV2StorageMetadataLabel $storageLabel)
  {
    $this->storageLabel = $storageLabel;
  }
  /** @return GooglePrivacyDlpV2StorageMetadataLabel */
  public function getStorageLabel()
  {
    return $this->storageLabel;
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

class GooglePrivacyDlpV2NumericalStatsConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2FieldId */
  public $field;
  protected $fieldType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldDataType = '';
  /** @param GooglePrivacyDlpV2FieldId */
  public function setField(GooglePrivacyDlpV2FieldId $field)
  {
    $this->field = $field;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getField()
  {
    return $this->field;
  }
}

class GooglePrivacyDlpV2NumericalStatsResult extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2Value */
  public $maxValue;
  /** @var GooglePrivacyDlpV2Value */
  public $minValue;
  /** @var GooglePrivacyDlpV2Value[] */
  public $quantileValues;
  protected $collection_key = 'quantileValues';
  protected $maxValueType = GooglePrivacyDlpV2Value::class;
  protected $maxValueDataType = '';
  protected $minValueType = GooglePrivacyDlpV2Value::class;
  protected $minValueDataType = '';
  protected $quantileValuesType = GooglePrivacyDlpV2Value::class;
  protected $quantileValuesDataType = 'array';
  /** @param GooglePrivacyDlpV2Value */
  public function setMaxValue(GooglePrivacyDlpV2Value $maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /** @return GooglePrivacyDlpV2Value */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /** @param GooglePrivacyDlpV2Value */
  public function setMinValue(GooglePrivacyDlpV2Value $minValue)
  {
    $this->minValue = $minValue;
  }
  /** @return GooglePrivacyDlpV2Value */
  public function getMinValue()
  {
    return $this->minValue;
  }
  /** @param GooglePrivacyDlpV2Value[] */
  public function setQuantileValues($quantileValues)
  {
    $this->quantileValues = $quantileValues;
  }
  /** @return GooglePrivacyDlpV2Value[] */
  public function getQuantileValues()
  {
    return $this->quantileValues;
  }
}

class GooglePrivacyDlpV2OtherInfoTypeSummary extends \Google\Model
{
  /** @var int */
  public $estimatedPrevalence;
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
  /** @param int */
  public function setEstimatedPrevalence($estimatedPrevalence)
  {
    $this->estimatedPrevalence = $estimatedPrevalence;
  }
  /** @return int */
  public function getEstimatedPrevalence()
  {
    return $this->estimatedPrevalence;
  }
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
  }
}

class GooglePrivacyDlpV2OutputStorageConfig extends \Google\Model
{
  /** @var string */
  public $outputSchema;
  /** @var GooglePrivacyDlpV2BigQueryTable */
  public $table;
  protected $tableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $tableDataType = '';
  /** @param string */
  public function setOutputSchema($outputSchema)
  {
    $this->outputSchema = $outputSchema;
  }
  /** @return string */
  public function getOutputSchema()
  {
    return $this->outputSchema;
  }
  /** @param GooglePrivacyDlpV2BigQueryTable */
  public function setTable(GooglePrivacyDlpV2BigQueryTable $table)
  {
    $this->table = $table;
  }
  /** @return GooglePrivacyDlpV2BigQueryTable */
  public function getTable()
  {
    return $this->table;
  }
}

class GooglePrivacyDlpV2PartitionId extends \Google\Model
{
  /** @var string */
  public $namespaceId;
  /** @var string */
  public $projectId;

  /** @param string */
  public function setNamespaceId($namespaceId)
  {
    $this->namespaceId = $namespaceId;
  }
  /** @return string */
  public function getNamespaceId()
  {
    return $this->namespaceId;
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

class GooglePrivacyDlpV2PathElement extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $kind;
  /** @var string */
  public $name;

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

class GooglePrivacyDlpV2PrimitiveTransformation extends \Google\Model
{
  /** @var GooglePrivacyDlpV2BucketingConfig */
  public $bucketingConfig;
  /** @var GooglePrivacyDlpV2CharacterMaskConfig */
  public $characterMaskConfig;
  /** @var GooglePrivacyDlpV2CryptoDeterministicConfig */
  public $cryptoDeterministicConfig;
  /** @var GooglePrivacyDlpV2CryptoHashConfig */
  public $cryptoHashConfig;
  /** @var GooglePrivacyDlpV2CryptoReplaceFfxFpeConfig */
  public $cryptoReplaceFfxFpeConfig;
  /** @var GooglePrivacyDlpV2DateShiftConfig */
  public $dateShiftConfig;
  /** @var GooglePrivacyDlpV2FixedSizeBucketingConfig */
  public $fixedSizeBucketingConfig;
  /** @var GooglePrivacyDlpV2RedactConfig */
  public $redactConfig;
  /** @var GooglePrivacyDlpV2ReplaceValueConfig */
  public $replaceConfig;
  /** @var GooglePrivacyDlpV2ReplaceDictionaryConfig */
  public $replaceDictionaryConfig;
  /** @var GooglePrivacyDlpV2ReplaceWithInfoTypeConfig */
  public $replaceWithInfoTypeConfig;
  /** @var GooglePrivacyDlpV2TimePartConfig */
  public $timePartConfig;
  protected $bucketingConfigType = GooglePrivacyDlpV2BucketingConfig::class;
  protected $bucketingConfigDataType = '';
  protected $characterMaskConfigType = GooglePrivacyDlpV2CharacterMaskConfig::class;
  protected $characterMaskConfigDataType = '';
  protected $cryptoDeterministicConfigType = GooglePrivacyDlpV2CryptoDeterministicConfig::class;
  protected $cryptoDeterministicConfigDataType = '';
  protected $cryptoHashConfigType = GooglePrivacyDlpV2CryptoHashConfig::class;
  protected $cryptoHashConfigDataType = '';
  protected $cryptoReplaceFfxFpeConfigType = GooglePrivacyDlpV2CryptoReplaceFfxFpeConfig::class;
  protected $cryptoReplaceFfxFpeConfigDataType = '';
  protected $dateShiftConfigType = GooglePrivacyDlpV2DateShiftConfig::class;
  protected $dateShiftConfigDataType = '';
  protected $fixedSizeBucketingConfigType = GooglePrivacyDlpV2FixedSizeBucketingConfig::class;
  protected $fixedSizeBucketingConfigDataType = '';
  protected $redactConfigType = GooglePrivacyDlpV2RedactConfig::class;
  protected $redactConfigDataType = '';
  protected $replaceConfigType = GooglePrivacyDlpV2ReplaceValueConfig::class;
  protected $replaceConfigDataType = '';
  protected $replaceDictionaryConfigType = GooglePrivacyDlpV2ReplaceDictionaryConfig::class;
  protected $replaceDictionaryConfigDataType = '';
  protected $replaceWithInfoTypeConfigType = GooglePrivacyDlpV2ReplaceWithInfoTypeConfig::class;
  protected $replaceWithInfoTypeConfigDataType = '';
  protected $timePartConfigType = GooglePrivacyDlpV2TimePartConfig::class;
  protected $timePartConfigDataType = '';
  /** @param GooglePrivacyDlpV2BucketingConfig */
  public function setBucketingConfig(GooglePrivacyDlpV2BucketingConfig $bucketingConfig)
  {
    $this->bucketingConfig = $bucketingConfig;
  }
  /** @return GooglePrivacyDlpV2BucketingConfig */
  public function getBucketingConfig()
  {
    return $this->bucketingConfig;
  }
  /** @param GooglePrivacyDlpV2CharacterMaskConfig */
  public function setCharacterMaskConfig(GooglePrivacyDlpV2CharacterMaskConfig $characterMaskConfig)
  {
    $this->characterMaskConfig = $characterMaskConfig;
  }
  /** @return GooglePrivacyDlpV2CharacterMaskConfig */
  public function getCharacterMaskConfig()
  {
    return $this->characterMaskConfig;
  }
  /** @param GooglePrivacyDlpV2CryptoDeterministicConfig */
  public function setCryptoDeterministicConfig(GooglePrivacyDlpV2CryptoDeterministicConfig $cryptoDeterministicConfig)
  {
    $this->cryptoDeterministicConfig = $cryptoDeterministicConfig;
  }
  /** @return GooglePrivacyDlpV2CryptoDeterministicConfig */
  public function getCryptoDeterministicConfig()
  {
    return $this->cryptoDeterministicConfig;
  }
  /** @param GooglePrivacyDlpV2CryptoHashConfig */
  public function setCryptoHashConfig(GooglePrivacyDlpV2CryptoHashConfig $cryptoHashConfig)
  {
    $this->cryptoHashConfig = $cryptoHashConfig;
  }
  /** @return GooglePrivacyDlpV2CryptoHashConfig */
  public function getCryptoHashConfig()
  {
    return $this->cryptoHashConfig;
  }
  /** @param GooglePrivacyDlpV2CryptoReplaceFfxFpeConfig */
  public function setCryptoReplaceFfxFpeConfig(GooglePrivacyDlpV2CryptoReplaceFfxFpeConfig $cryptoReplaceFfxFpeConfig)
  {
    $this->cryptoReplaceFfxFpeConfig = $cryptoReplaceFfxFpeConfig;
  }
  /** @return GooglePrivacyDlpV2CryptoReplaceFfxFpeConfig */
  public function getCryptoReplaceFfxFpeConfig()
  {
    return $this->cryptoReplaceFfxFpeConfig;
  }
  /** @param GooglePrivacyDlpV2DateShiftConfig */
  public function setDateShiftConfig(GooglePrivacyDlpV2DateShiftConfig $dateShiftConfig)
  {
    $this->dateShiftConfig = $dateShiftConfig;
  }
  /** @return GooglePrivacyDlpV2DateShiftConfig */
  public function getDateShiftConfig()
  {
    return $this->dateShiftConfig;
  }
  /** @param GooglePrivacyDlpV2FixedSizeBucketingConfig */
  public function setFixedSizeBucketingConfig(GooglePrivacyDlpV2FixedSizeBucketingConfig $fixedSizeBucketingConfig)
  {
    $this->fixedSizeBucketingConfig = $fixedSizeBucketingConfig;
  }
  /** @return GooglePrivacyDlpV2FixedSizeBucketingConfig */
  public function getFixedSizeBucketingConfig()
  {
    return $this->fixedSizeBucketingConfig;
  }
  /** @param GooglePrivacyDlpV2RedactConfig */
  public function setRedactConfig(GooglePrivacyDlpV2RedactConfig $redactConfig)
  {
    $this->redactConfig = $redactConfig;
  }
  /** @return GooglePrivacyDlpV2RedactConfig */
  public function getRedactConfig()
  {
    return $this->redactConfig;
  }
  /** @param GooglePrivacyDlpV2ReplaceValueConfig */
  public function setReplaceConfig(GooglePrivacyDlpV2ReplaceValueConfig $replaceConfig)
  {
    $this->replaceConfig = $replaceConfig;
  }
  /** @return GooglePrivacyDlpV2ReplaceValueConfig */
  public function getReplaceConfig()
  {
    return $this->replaceConfig;
  }
  /** @param GooglePrivacyDlpV2ReplaceDictionaryConfig */
  public function setReplaceDictionaryConfig(GooglePrivacyDlpV2ReplaceDictionaryConfig $replaceDictionaryConfig)
  {
    $this->replaceDictionaryConfig = $replaceDictionaryConfig;
  }
  /** @return GooglePrivacyDlpV2ReplaceDictionaryConfig */
  public function getReplaceDictionaryConfig()
  {
    return $this->replaceDictionaryConfig;
  }
  /** @param GooglePrivacyDlpV2ReplaceWithInfoTypeConfig */
  public function setReplaceWithInfoTypeConfig(GooglePrivacyDlpV2ReplaceWithInfoTypeConfig $replaceWithInfoTypeConfig)
  {
    $this->replaceWithInfoTypeConfig = $replaceWithInfoTypeConfig;
  }
  /** @return GooglePrivacyDlpV2ReplaceWithInfoTypeConfig */
  public function getReplaceWithInfoTypeConfig()
  {
    return $this->replaceWithInfoTypeConfig;
  }
  /** @param GooglePrivacyDlpV2TimePartConfig */
  public function setTimePartConfig(GooglePrivacyDlpV2TimePartConfig $timePartConfig)
  {
    $this->timePartConfig = $timePartConfig;
  }
  /** @return GooglePrivacyDlpV2TimePartConfig */
  public function getTimePartConfig()
  {
    return $this->timePartConfig;
  }
}

class GooglePrivacyDlpV2PrivacyMetric extends \Google\Model
{
  /** @var GooglePrivacyDlpV2CategoricalStatsConfig */
  public $categoricalStatsConfig;
  /** @var GooglePrivacyDlpV2DeltaPresenceEstimationConfig */
  public $deltaPresenceEstimationConfig;
  /** @var GooglePrivacyDlpV2KAnonymityConfig */
  public $kAnonymityConfig;
  /** @var GooglePrivacyDlpV2KMapEstimationConfig */
  public $kMapEstimationConfig;
  /** @var GooglePrivacyDlpV2LDiversityConfig */
  public $lDiversityConfig;
  /** @var GooglePrivacyDlpV2NumericalStatsConfig */
  public $numericalStatsConfig;
  protected $categoricalStatsConfigType = GooglePrivacyDlpV2CategoricalStatsConfig::class;
  protected $categoricalStatsConfigDataType = '';
  protected $deltaPresenceEstimationConfigType = GooglePrivacyDlpV2DeltaPresenceEstimationConfig::class;
  protected $deltaPresenceEstimationConfigDataType = '';
  protected $kAnonymityConfigType = GooglePrivacyDlpV2KAnonymityConfig::class;
  protected $kAnonymityConfigDataType = '';
  protected $kMapEstimationConfigType = GooglePrivacyDlpV2KMapEstimationConfig::class;
  protected $kMapEstimationConfigDataType = '';
  protected $lDiversityConfigType = GooglePrivacyDlpV2LDiversityConfig::class;
  protected $lDiversityConfigDataType = '';
  protected $numericalStatsConfigType = GooglePrivacyDlpV2NumericalStatsConfig::class;
  protected $numericalStatsConfigDataType = '';
  /** @param GooglePrivacyDlpV2CategoricalStatsConfig */
  public function setCategoricalStatsConfig(GooglePrivacyDlpV2CategoricalStatsConfig $categoricalStatsConfig)
  {
    $this->categoricalStatsConfig = $categoricalStatsConfig;
  }
  /** @return GooglePrivacyDlpV2CategoricalStatsConfig */
  public function getCategoricalStatsConfig()
  {
    return $this->categoricalStatsConfig;
  }
  /** @param GooglePrivacyDlpV2DeltaPresenceEstimationConfig */
  public function setDeltaPresenceEstimationConfig(GooglePrivacyDlpV2DeltaPresenceEstimationConfig $deltaPresenceEstimationConfig)
  {
    $this->deltaPresenceEstimationConfig = $deltaPresenceEstimationConfig;
  }
  /** @return GooglePrivacyDlpV2DeltaPresenceEstimationConfig */
  public function getDeltaPresenceEstimationConfig()
  {
    return $this->deltaPresenceEstimationConfig;
  }
  /** @param GooglePrivacyDlpV2KAnonymityConfig */
  public function setKAnonymityConfig(GooglePrivacyDlpV2KAnonymityConfig $kAnonymityConfig)
  {
    $this->kAnonymityConfig = $kAnonymityConfig;
  }
  /** @return GooglePrivacyDlpV2KAnonymityConfig */
  public function getKAnonymityConfig()
  {
    return $this->kAnonymityConfig;
  }
  /** @param GooglePrivacyDlpV2KMapEstimationConfig */
  public function setKMapEstimationConfig(GooglePrivacyDlpV2KMapEstimationConfig $kMapEstimationConfig)
  {
    $this->kMapEstimationConfig = $kMapEstimationConfig;
  }
  /** @return GooglePrivacyDlpV2KMapEstimationConfig */
  public function getKMapEstimationConfig()
  {
    return $this->kMapEstimationConfig;
  }
  /** @param GooglePrivacyDlpV2LDiversityConfig */
  public function setLDiversityConfig(GooglePrivacyDlpV2LDiversityConfig $lDiversityConfig)
  {
    $this->lDiversityConfig = $lDiversityConfig;
  }
  /** @return GooglePrivacyDlpV2LDiversityConfig */
  public function getLDiversityConfig()
  {
    return $this->lDiversityConfig;
  }
  /** @param GooglePrivacyDlpV2NumericalStatsConfig */
  public function setNumericalStatsConfig(GooglePrivacyDlpV2NumericalStatsConfig $numericalStatsConfig)
  {
    $this->numericalStatsConfig = $numericalStatsConfig;
  }
  /** @return GooglePrivacyDlpV2NumericalStatsConfig */
  public function getNumericalStatsConfig()
  {
    return $this->numericalStatsConfig;
  }
}

class GooglePrivacyDlpV2ProfileStatus extends \Google\Model
{
  /** @var GoogleRpcStatus */
  public $status;
  /** @var string */
  public $timestamp;
  protected $statusType = GoogleRpcStatus::class;
  protected $statusDataType = '';
  /** @param GoogleRpcStatus */
  public function setStatus(GoogleRpcStatus $status)
  {
    $this->status = $status;
  }
  /** @return GoogleRpcStatus */
  public function getStatus()
  {
    return $this->status;
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
}

class GooglePrivacyDlpV2Proximity extends \Google\Model
{
  /** @var int */
  public $windowAfter;
  /** @var int */
  public $windowBefore;

  /** @param int */
  public function setWindowAfter($windowAfter)
  {
    $this->windowAfter = $windowAfter;
  }
  /** @return int */
  public function getWindowAfter()
  {
    return $this->windowAfter;
  }
  /** @param int */
  public function setWindowBefore($windowBefore)
  {
    $this->windowBefore = $windowBefore;
  }
  /** @return int */
  public function getWindowBefore()
  {
    return $this->windowBefore;
  }
}

class GooglePrivacyDlpV2PubSubCondition extends \Google\Model
{
  /** @var string */
  public $minimumRiskScore;
  /** @var string */
  public $minimumSensitivityScore;

  /** @param string */
  public function setMinimumRiskScore($minimumRiskScore)
  {
    $this->minimumRiskScore = $minimumRiskScore;
  }
  /** @return string */
  public function getMinimumRiskScore()
  {
    return $this->minimumRiskScore;
  }
  /** @param string */
  public function setMinimumSensitivityScore($minimumSensitivityScore)
  {
    $this->minimumSensitivityScore = $minimumSensitivityScore;
  }
  /** @return string */
  public function getMinimumSensitivityScore()
  {
    return $this->minimumSensitivityScore;
  }
}

class GooglePrivacyDlpV2PubSubExpressions extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2PubSubCondition[] */
  public $conditions;
  /** @var string */
  public $logicalOperator;
  protected $collection_key = 'conditions';
  protected $conditionsType = GooglePrivacyDlpV2PubSubCondition::class;
  protected $conditionsDataType = 'array';
  /** @param GooglePrivacyDlpV2PubSubCondition[] */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /** @return GooglePrivacyDlpV2PubSubCondition[] */
  public function getConditions()
  {
    return $this->conditions;
  }
  /** @param string */
  public function setLogicalOperator($logicalOperator)
  {
    $this->logicalOperator = $logicalOperator;
  }
  /** @return string */
  public function getLogicalOperator()
  {
    return $this->logicalOperator;
  }
}

class GooglePrivacyDlpV2PubSubNotification extends \Google\Model
{
  /** @var string */
  public $detailOfMessage;
  /** @var string */
  public $event;
  /** @var GooglePrivacyDlpV2DataProfilePubSubCondition */
  public $pubsubCondition;
  /** @var string */
  public $topic;
  protected $pubsubConditionType = GooglePrivacyDlpV2DataProfilePubSubCondition::class;
  protected $pubsubConditionDataType = '';
  /** @param string */
  public function setDetailOfMessage($detailOfMessage)
  {
    $this->detailOfMessage = $detailOfMessage;
  }
  /** @return string */
  public function getDetailOfMessage()
  {
    return $this->detailOfMessage;
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
  /** @param GooglePrivacyDlpV2DataProfilePubSubCondition */
  public function setPubsubCondition(GooglePrivacyDlpV2DataProfilePubSubCondition $pubsubCondition)
  {
    $this->pubsubCondition = $pubsubCondition;
  }
  /** @return GooglePrivacyDlpV2DataProfilePubSubCondition */
  public function getPubsubCondition()
  {
    return $this->pubsubCondition;
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

class GooglePrivacyDlpV2PublishFindingsToCloudDataCatalog extends \Google\Model
{
}

class GooglePrivacyDlpV2PublishSummaryToCscc extends \Google\Model
{
}

class GooglePrivacyDlpV2PublishToPubSub extends \Google\Model
{
  /** @var string */
  public $topic;

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

class GooglePrivacyDlpV2PublishToStackdriver extends \Google\Model
{
}

class GooglePrivacyDlpV2QuasiId extends \Google\Model
{
  /** @var string */
  public $customTag;
  /** @var GooglePrivacyDlpV2FieldId */
  public $field;
  /** @var GoogleProtobufEmpty */
  public $inferred;
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  protected $fieldType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldDataType = '';
  protected $inferredType = GoogleProtobufEmpty::class;
  protected $inferredDataType = '';
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
  /** @param string */
  public function setCustomTag($customTag)
  {
    $this->customTag = $customTag;
  }
  /** @return string */
  public function getCustomTag()
  {
    return $this->customTag;
  }
  /** @param GooglePrivacyDlpV2FieldId */
  public function setField(GooglePrivacyDlpV2FieldId $field)
  {
    $this->field = $field;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getField()
  {
    return $this->field;
  }
  /** @param GoogleProtobufEmpty */
  public function setInferred(GoogleProtobufEmpty $inferred)
  {
    $this->inferred = $inferred;
  }
  /** @return GoogleProtobufEmpty */
  public function getInferred()
  {
    return $this->inferred;
  }
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
  }
}

class GooglePrivacyDlpV2QuasiIdField extends \Google\Model
{
  /** @var string */
  public $customTag;
  /** @var GooglePrivacyDlpV2FieldId */
  public $field;
  protected $fieldType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldDataType = '';
  /** @param string */
  public function setCustomTag($customTag)
  {
    $this->customTag = $customTag;
  }
  /** @return string */
  public function getCustomTag()
  {
    return $this->customTag;
  }
  /** @param GooglePrivacyDlpV2FieldId */
  public function setField(GooglePrivacyDlpV2FieldId $field)
  {
    $this->field = $field;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getField()
  {
    return $this->field;
  }
}

class GooglePrivacyDlpV2QuasiIdentifierField extends \Google\Model
{
  /** @var string */
  public $customTag;
  /** @var GooglePrivacyDlpV2FieldId */
  public $field;
  protected $fieldType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldDataType = '';
  /** @param string */
  public function setCustomTag($customTag)
  {
    $this->customTag = $customTag;
  }
  /** @return string */
  public function getCustomTag()
  {
    return $this->customTag;
  }
  /** @param GooglePrivacyDlpV2FieldId */
  public function setField(GooglePrivacyDlpV2FieldId $field)
  {
    $this->field = $field;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getField()
  {
    return $this->field;
  }
}

class GooglePrivacyDlpV2QuoteInfo extends \Google\Model
{
  /** @var GooglePrivacyDlpV2DateTime */
  public $dateTime;
  protected $dateTimeType = GooglePrivacyDlpV2DateTime::class;
  protected $dateTimeDataType = '';
  /** @param GooglePrivacyDlpV2DateTime */
  public function setDateTime(GooglePrivacyDlpV2DateTime $dateTime)
  {
    $this->dateTime = $dateTime;
  }
  /** @return GooglePrivacyDlpV2DateTime */
  public function getDateTime()
  {
    return $this->dateTime;
  }
}

class GooglePrivacyDlpV2Range extends \Google\Model
{
  /** @var string */
  public $end;
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

class GooglePrivacyDlpV2RecordCondition extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Expressions */
  public $expressions;
  protected $expressionsType = GooglePrivacyDlpV2Expressions::class;
  protected $expressionsDataType = '';
  /** @param GooglePrivacyDlpV2Expressions */
  public function setExpressions(GooglePrivacyDlpV2Expressions $expressions)
  {
    $this->expressions = $expressions;
  }
  /** @return GooglePrivacyDlpV2Expressions */
  public function getExpressions()
  {
    return $this->expressions;
  }
}

class GooglePrivacyDlpV2RecordKey extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2BigQueryKey */
  public $bigQueryKey;
  /** @var GooglePrivacyDlpV2DatastoreKey */
  public $datastoreKey;
  /** @var string[] */
  public $idValues;
  protected $collection_key = 'idValues';
  protected $bigQueryKeyType = GooglePrivacyDlpV2BigQueryKey::class;
  protected $bigQueryKeyDataType = '';
  protected $datastoreKeyType = GooglePrivacyDlpV2DatastoreKey::class;
  protected $datastoreKeyDataType = '';
  /** @param GooglePrivacyDlpV2BigQueryKey */
  public function setBigQueryKey(GooglePrivacyDlpV2BigQueryKey $bigQueryKey)
  {
    $this->bigQueryKey = $bigQueryKey;
  }
  /** @return GooglePrivacyDlpV2BigQueryKey */
  public function getBigQueryKey()
  {
    return $this->bigQueryKey;
  }
  /** @param GooglePrivacyDlpV2DatastoreKey */
  public function setDatastoreKey(GooglePrivacyDlpV2DatastoreKey $datastoreKey)
  {
    $this->datastoreKey = $datastoreKey;
  }
  /** @return GooglePrivacyDlpV2DatastoreKey */
  public function getDatastoreKey()
  {
    return $this->datastoreKey;
  }
  /** @param string[] */
  public function setIdValues($idValues)
  {
    $this->idValues = $idValues;
  }
  /** @return string[] */
  public function getIdValues()
  {
    return $this->idValues;
  }
}

class GooglePrivacyDlpV2RecordLocation extends \Google\Model
{
  /** @var GooglePrivacyDlpV2FieldId */
  public $fieldId;
  /** @var GooglePrivacyDlpV2RecordKey */
  public $recordKey;
  /** @var GooglePrivacyDlpV2TableLocation */
  public $tableLocation;
  protected $fieldIdType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldIdDataType = '';
  protected $recordKeyType = GooglePrivacyDlpV2RecordKey::class;
  protected $recordKeyDataType = '';
  protected $tableLocationType = GooglePrivacyDlpV2TableLocation::class;
  protected $tableLocationDataType = '';
  /** @param GooglePrivacyDlpV2FieldId */
  public function setFieldId(GooglePrivacyDlpV2FieldId $fieldId)
  {
    $this->fieldId = $fieldId;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getFieldId()
  {
    return $this->fieldId;
  }
  /** @param GooglePrivacyDlpV2RecordKey */
  public function setRecordKey(GooglePrivacyDlpV2RecordKey $recordKey)
  {
    $this->recordKey = $recordKey;
  }
  /** @return GooglePrivacyDlpV2RecordKey */
  public function getRecordKey()
  {
    return $this->recordKey;
  }
  /** @param GooglePrivacyDlpV2TableLocation */
  public function setTableLocation(GooglePrivacyDlpV2TableLocation $tableLocation)
  {
    $this->tableLocation = $tableLocation;
  }
  /** @return GooglePrivacyDlpV2TableLocation */
  public function getTableLocation()
  {
    return $this->tableLocation;
  }
}

class GooglePrivacyDlpV2RecordSuppression extends \Google\Model
{
  /** @var GooglePrivacyDlpV2RecordCondition */
  public $condition;
  protected $conditionType = GooglePrivacyDlpV2RecordCondition::class;
  protected $conditionDataType = '';
  /** @param GooglePrivacyDlpV2RecordCondition */
  public function setCondition(GooglePrivacyDlpV2RecordCondition $condition)
  {
    $this->condition = $condition;
  }
  /** @return GooglePrivacyDlpV2RecordCondition */
  public function getCondition()
  {
    return $this->condition;
  }
}

class GooglePrivacyDlpV2RecordTransformation extends \Google\Model
{
  /** @var string */
  public $containerTimestamp;
  /** @var string */
  public $containerVersion;
  /** @var GooglePrivacyDlpV2FieldId */
  public $fieldId;
  protected $fieldIdType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldIdDataType = '';
  /** @param string */
  public function setContainerTimestamp($containerTimestamp)
  {
    $this->containerTimestamp = $containerTimestamp;
  }
  /** @return string */
  public function getContainerTimestamp()
  {
    return $this->containerTimestamp;
  }
  /** @param string */
  public function setContainerVersion($containerVersion)
  {
    $this->containerVersion = $containerVersion;
  }
  /** @return string */
  public function getContainerVersion()
  {
    return $this->containerVersion;
  }
  /** @param GooglePrivacyDlpV2FieldId */
  public function setFieldId(GooglePrivacyDlpV2FieldId $fieldId)
  {
    $this->fieldId = $fieldId;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getFieldId()
  {
    return $this->fieldId;
  }
}

class GooglePrivacyDlpV2RecordTransformations extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2FieldTransformation[] */
  public $fieldTransformations;
  /** @var GooglePrivacyDlpV2RecordSuppression[] */
  public $recordSuppressions;
  protected $collection_key = 'recordSuppressions';
  protected $fieldTransformationsType = GooglePrivacyDlpV2FieldTransformation::class;
  protected $fieldTransformationsDataType = 'array';
  protected $recordSuppressionsType = GooglePrivacyDlpV2RecordSuppression::class;
  protected $recordSuppressionsDataType = 'array';
  /** @param GooglePrivacyDlpV2FieldTransformation[] */
  public function setFieldTransformations($fieldTransformations)
  {
    $this->fieldTransformations = $fieldTransformations;
  }
  /** @return GooglePrivacyDlpV2FieldTransformation[] */
  public function getFieldTransformations()
  {
    return $this->fieldTransformations;
  }
  /** @param GooglePrivacyDlpV2RecordSuppression[] */
  public function setRecordSuppressions($recordSuppressions)
  {
    $this->recordSuppressions = $recordSuppressions;
  }
  /** @return GooglePrivacyDlpV2RecordSuppression[] */
  public function getRecordSuppressions()
  {
    return $this->recordSuppressions;
  }
}

class GooglePrivacyDlpV2RedactConfig extends \Google\Model
{
}

class GooglePrivacyDlpV2RedactImageRequest extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2ByteContentItem */
  public $byteItem;
  /** @var GooglePrivacyDlpV2ImageRedactionConfig[] */
  public $imageRedactionConfigs;
  /** @var bool */
  public $includeFindings;
  /** @var GooglePrivacyDlpV2InspectConfig */
  public $inspectConfig;
  /** @var string */
  public $locationId;
  protected $collection_key = 'imageRedactionConfigs';
  protected $byteItemType = GooglePrivacyDlpV2ByteContentItem::class;
  protected $byteItemDataType = '';
  protected $imageRedactionConfigsType = GooglePrivacyDlpV2ImageRedactionConfig::class;
  protected $imageRedactionConfigsDataType = 'array';
  protected $inspectConfigType = GooglePrivacyDlpV2InspectConfig::class;
  protected $inspectConfigDataType = '';
  /** @param GooglePrivacyDlpV2ByteContentItem */
  public function setByteItem(GooglePrivacyDlpV2ByteContentItem $byteItem)
  {
    $this->byteItem = $byteItem;
  }
  /** @return GooglePrivacyDlpV2ByteContentItem */
  public function getByteItem()
  {
    return $this->byteItem;
  }
  /** @param GooglePrivacyDlpV2ImageRedactionConfig[] */
  public function setImageRedactionConfigs($imageRedactionConfigs)
  {
    $this->imageRedactionConfigs = $imageRedactionConfigs;
  }
  /** @return GooglePrivacyDlpV2ImageRedactionConfig[] */
  public function getImageRedactionConfigs()
  {
    return $this->imageRedactionConfigs;
  }
  /** @param bool */
  public function setIncludeFindings($includeFindings)
  {
    $this->includeFindings = $includeFindings;
  }
  /** @return bool */
  public function getIncludeFindings()
  {
    return $this->includeFindings;
  }
  /** @param GooglePrivacyDlpV2InspectConfig */
  public function setInspectConfig(GooglePrivacyDlpV2InspectConfig $inspectConfig)
  {
    $this->inspectConfig = $inspectConfig;
  }
  /** @return GooglePrivacyDlpV2InspectConfig */
  public function getInspectConfig()
  {
    return $this->inspectConfig;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
}

class GooglePrivacyDlpV2RedactImageResponse extends \Google\Model
{
  /** @var string */
  public $extractedText;
  /** @var GooglePrivacyDlpV2InspectResult */
  public $inspectResult;
  /** @var string */
  public $redactedImage;
  protected $inspectResultType = GooglePrivacyDlpV2InspectResult::class;
  protected $inspectResultDataType = '';
  /** @param string */
  public function setExtractedText($extractedText)
  {
    $this->extractedText = $extractedText;
  }
  /** @return string */
  public function getExtractedText()
  {
    return $this->extractedText;
  }
  /** @param GooglePrivacyDlpV2InspectResult */
  public function setInspectResult(GooglePrivacyDlpV2InspectResult $inspectResult)
  {
    $this->inspectResult = $inspectResult;
  }
  /** @return GooglePrivacyDlpV2InspectResult */
  public function getInspectResult()
  {
    return $this->inspectResult;
  }
  /** @param string */
  public function setRedactedImage($redactedImage)
  {
    $this->redactedImage = $redactedImage;
  }
  /** @return string */
  public function getRedactedImage()
  {
    return $this->redactedImage;
  }
}

class GooglePrivacyDlpV2Regex extends \Google\Collection
{
  /** @var int[] */
  public $groupIndexes;
  /** @var string */
  public $pattern;
  protected $collection_key = 'groupIndexes';
  /** @param int[] */
  public function setGroupIndexes($groupIndexes)
  {
    $this->groupIndexes = $groupIndexes;
  }
  /** @return int[] */
  public function getGroupIndexes()
  {
    return $this->groupIndexes;
  }
  /** @param string */
  public function setPattern($pattern)
  {
    $this->pattern = $pattern;
  }
  /** @return string */
  public function getPattern()
  {
    return $this->pattern;
  }
}

class GooglePrivacyDlpV2ReidentifyContentRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2InspectConfig */
  public $inspectConfig;
  /** @var string */
  public $inspectTemplateName;
  /** @var GooglePrivacyDlpV2ContentItem */
  public $item;
  /** @var string */
  public $locationId;
  /** @var GooglePrivacyDlpV2DeidentifyConfig */
  public $reidentifyConfig;
  /** @var string */
  public $reidentifyTemplateName;
  protected $inspectConfigType = GooglePrivacyDlpV2InspectConfig::class;
  protected $inspectConfigDataType = '';
  protected $itemType = GooglePrivacyDlpV2ContentItem::class;
  protected $itemDataType = '';
  protected $reidentifyConfigType = GooglePrivacyDlpV2DeidentifyConfig::class;
  protected $reidentifyConfigDataType = '';
  /** @param GooglePrivacyDlpV2InspectConfig */
  public function setInspectConfig(GooglePrivacyDlpV2InspectConfig $inspectConfig)
  {
    $this->inspectConfig = $inspectConfig;
  }
  /** @return GooglePrivacyDlpV2InspectConfig */
  public function getInspectConfig()
  {
    return $this->inspectConfig;
  }
  /** @param string */
  public function setInspectTemplateName($inspectTemplateName)
  {
    $this->inspectTemplateName = $inspectTemplateName;
  }
  /** @return string */
  public function getInspectTemplateName()
  {
    return $this->inspectTemplateName;
  }
  /** @param GooglePrivacyDlpV2ContentItem */
  public function setItem(GooglePrivacyDlpV2ContentItem $item)
  {
    $this->item = $item;
  }
  /** @return GooglePrivacyDlpV2ContentItem */
  public function getItem()
  {
    return $this->item;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
  /** @param GooglePrivacyDlpV2DeidentifyConfig */
  public function setReidentifyConfig(GooglePrivacyDlpV2DeidentifyConfig $reidentifyConfig)
  {
    $this->reidentifyConfig = $reidentifyConfig;
  }
  /** @return GooglePrivacyDlpV2DeidentifyConfig */
  public function getReidentifyConfig()
  {
    return $this->reidentifyConfig;
  }
  /** @param string */
  public function setReidentifyTemplateName($reidentifyTemplateName)
  {
    $this->reidentifyTemplateName = $reidentifyTemplateName;
  }
  /** @return string */
  public function getReidentifyTemplateName()
  {
    return $this->reidentifyTemplateName;
  }
}

class GooglePrivacyDlpV2ReidentifyContentResponse extends \Google\Model
{
  /** @var GooglePrivacyDlpV2ContentItem */
  public $item;
  /** @var GooglePrivacyDlpV2TransformationOverview */
  public $overview;
  protected $itemType = GooglePrivacyDlpV2ContentItem::class;
  protected $itemDataType = '';
  protected $overviewType = GooglePrivacyDlpV2TransformationOverview::class;
  protected $overviewDataType = '';
  /** @param GooglePrivacyDlpV2ContentItem */
  public function setItem(GooglePrivacyDlpV2ContentItem $item)
  {
    $this->item = $item;
  }
  /** @return GooglePrivacyDlpV2ContentItem */
  public function getItem()
  {
    return $this->item;
  }
  /** @param GooglePrivacyDlpV2TransformationOverview */
  public function setOverview(GooglePrivacyDlpV2TransformationOverview $overview)
  {
    $this->overview = $overview;
  }
  /** @return GooglePrivacyDlpV2TransformationOverview */
  public function getOverview()
  {
    return $this->overview;
  }
}

class GooglePrivacyDlpV2ReplaceDictionaryConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2WordList */
  public $wordList;
  protected $wordListType = GooglePrivacyDlpV2WordList::class;
  protected $wordListDataType = '';
  /** @param GooglePrivacyDlpV2WordList */
  public function setWordList(GooglePrivacyDlpV2WordList $wordList)
  {
    $this->wordList = $wordList;
  }
  /** @return GooglePrivacyDlpV2WordList */
  public function getWordList()
  {
    return $this->wordList;
  }
}

class GooglePrivacyDlpV2ReplaceValueConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Value */
  public $newValue;
  protected $newValueType = GooglePrivacyDlpV2Value::class;
  protected $newValueDataType = '';
  /** @param GooglePrivacyDlpV2Value */
  public function setNewValue(GooglePrivacyDlpV2Value $newValue)
  {
    $this->newValue = $newValue;
  }
  /** @return GooglePrivacyDlpV2Value */
  public function getNewValue()
  {
    return $this->newValue;
  }
}

class GooglePrivacyDlpV2ReplaceWithInfoTypeConfig extends \Google\Model
{
}

class GooglePrivacyDlpV2RequestedOptions extends \Google\Model
{
  /** @var GooglePrivacyDlpV2InspectJobConfig */
  public $jobConfig;
  /** @var GooglePrivacyDlpV2InspectTemplate */
  public $snapshotInspectTemplate;
  protected $jobConfigType = GooglePrivacyDlpV2InspectJobConfig::class;
  protected $jobConfigDataType = '';
  protected $snapshotInspectTemplateType = GooglePrivacyDlpV2InspectTemplate::class;
  protected $snapshotInspectTemplateDataType = '';
  /** @param GooglePrivacyDlpV2InspectJobConfig */
  public function setJobConfig(GooglePrivacyDlpV2InspectJobConfig $jobConfig)
  {
    $this->jobConfig = $jobConfig;
  }
  /** @return GooglePrivacyDlpV2InspectJobConfig */
  public function getJobConfig()
  {
    return $this->jobConfig;
  }
  /** @param GooglePrivacyDlpV2InspectTemplate */
  public function setSnapshotInspectTemplate(GooglePrivacyDlpV2InspectTemplate $snapshotInspectTemplate)
  {
    $this->snapshotInspectTemplate = $snapshotInspectTemplate;
  }
  /** @return GooglePrivacyDlpV2InspectTemplate */
  public function getSnapshotInspectTemplate()
  {
    return $this->snapshotInspectTemplate;
  }
}

class GooglePrivacyDlpV2RequestedRiskAnalysisOptions extends \Google\Model
{
  /** @var GooglePrivacyDlpV2RiskAnalysisJobConfig */
  public $jobConfig;
  protected $jobConfigType = GooglePrivacyDlpV2RiskAnalysisJobConfig::class;
  protected $jobConfigDataType = '';
  /** @param GooglePrivacyDlpV2RiskAnalysisJobConfig */
  public function setJobConfig(GooglePrivacyDlpV2RiskAnalysisJobConfig $jobConfig)
  {
    $this->jobConfig = $jobConfig;
  }
  /** @return GooglePrivacyDlpV2RiskAnalysisJobConfig */
  public function getJobConfig()
  {
    return $this->jobConfig;
  }
}

class GooglePrivacyDlpV2Result extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2HybridInspectStatistics */
  public $hybridStats;
  /** @var GooglePrivacyDlpV2InfoTypeStats[] */
  public $infoTypeStats;
  /** @var string */
  public $processedBytes;
  /** @var string */
  public $totalEstimatedBytes;
  protected $collection_key = 'infoTypeStats';
  protected $hybridStatsType = GooglePrivacyDlpV2HybridInspectStatistics::class;
  protected $hybridStatsDataType = '';
  protected $infoTypeStatsType = GooglePrivacyDlpV2InfoTypeStats::class;
  protected $infoTypeStatsDataType = 'array';
  /** @param GooglePrivacyDlpV2HybridInspectStatistics */
  public function setHybridStats(GooglePrivacyDlpV2HybridInspectStatistics $hybridStats)
  {
    $this->hybridStats = $hybridStats;
  }
  /** @return GooglePrivacyDlpV2HybridInspectStatistics */
  public function getHybridStats()
  {
    return $this->hybridStats;
  }
  /** @param GooglePrivacyDlpV2InfoTypeStats[] */
  public function setInfoTypeStats($infoTypeStats)
  {
    $this->infoTypeStats = $infoTypeStats;
  }
  /** @return GooglePrivacyDlpV2InfoTypeStats[] */
  public function getInfoTypeStats()
  {
    return $this->infoTypeStats;
  }
  /** @param string */
  public function setProcessedBytes($processedBytes)
  {
    $this->processedBytes = $processedBytes;
  }
  /** @return string */
  public function getProcessedBytes()
  {
    return $this->processedBytes;
  }
  /** @param string */
  public function setTotalEstimatedBytes($totalEstimatedBytes)
  {
    $this->totalEstimatedBytes = $totalEstimatedBytes;
  }
  /** @return string */
  public function getTotalEstimatedBytes()
  {
    return $this->totalEstimatedBytes;
  }
}

class GooglePrivacyDlpV2RiskAnalysisJobConfig extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2Action[] */
  public $actions;
  /** @var GooglePrivacyDlpV2PrivacyMetric */
  public $privacyMetric;
  /** @var GooglePrivacyDlpV2BigQueryTable */
  public $sourceTable;
  protected $collection_key = 'actions';
  protected $actionsType = GooglePrivacyDlpV2Action::class;
  protected $actionsDataType = 'array';
  protected $privacyMetricType = GooglePrivacyDlpV2PrivacyMetric::class;
  protected $privacyMetricDataType = '';
  protected $sourceTableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $sourceTableDataType = '';
  /** @param GooglePrivacyDlpV2Action[] */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /** @return GooglePrivacyDlpV2Action[] */
  public function getActions()
  {
    return $this->actions;
  }
  /** @param GooglePrivacyDlpV2PrivacyMetric */
  public function setPrivacyMetric(GooglePrivacyDlpV2PrivacyMetric $privacyMetric)
  {
    $this->privacyMetric = $privacyMetric;
  }
  /** @return GooglePrivacyDlpV2PrivacyMetric */
  public function getPrivacyMetric()
  {
    return $this->privacyMetric;
  }
  /** @param GooglePrivacyDlpV2BigQueryTable */
  public function setSourceTable(GooglePrivacyDlpV2BigQueryTable $sourceTable)
  {
    $this->sourceTable = $sourceTable;
  }
  /** @return GooglePrivacyDlpV2BigQueryTable */
  public function getSourceTable()
  {
    return $this->sourceTable;
  }
}

class GooglePrivacyDlpV2Row extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2Value[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = GooglePrivacyDlpV2Value::class;
  protected $valuesDataType = 'array';
  /** @param GooglePrivacyDlpV2Value[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return GooglePrivacyDlpV2Value[] */
  public function getValues()
  {
    return $this->values;
  }
}

class GooglePrivacyDlpV2SaveFindings extends \Google\Model
{
  /** @var GooglePrivacyDlpV2OutputStorageConfig */
  public $outputConfig;
  protected $outputConfigType = GooglePrivacyDlpV2OutputStorageConfig::class;
  protected $outputConfigDataType = '';
  /** @param GooglePrivacyDlpV2OutputStorageConfig */
  public function setOutputConfig(GooglePrivacyDlpV2OutputStorageConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GooglePrivacyDlpV2OutputStorageConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class GooglePrivacyDlpV2Schedule extends \Google\Model
{
  /** @var string */
  public $recurrencePeriodDuration;

  /** @param string */
  public function setRecurrencePeriodDuration($recurrencePeriodDuration)
  {
    $this->recurrencePeriodDuration = $recurrencePeriodDuration;
  }
  /** @return string */
  public function getRecurrencePeriodDuration()
  {
    return $this->recurrencePeriodDuration;
  }
}

class GooglePrivacyDlpV2SelectedInfoTypes extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2InfoType[] */
  public $infoTypes;
  protected $collection_key = 'infoTypes';
  protected $infoTypesType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypesDataType = 'array';
  /** @param GooglePrivacyDlpV2InfoType[] */
  public function setInfoTypes($infoTypes)
  {
    $this->infoTypes = $infoTypes;
  }
  /** @return GooglePrivacyDlpV2InfoType[] */
  public function getInfoTypes()
  {
    return $this->infoTypes;
  }
}

class GooglePrivacyDlpV2SensitivityScore extends \Google\Model
{
  /** @var string */
  public $score;

  /** @param string */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return string */
  public function getScore()
  {
    return $this->score;
  }
}

class GooglePrivacyDlpV2StatisticalTable extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2QuasiIdentifierField[] */
  public $quasiIds;
  /** @var GooglePrivacyDlpV2FieldId */
  public $relativeFrequency;
  /** @var GooglePrivacyDlpV2BigQueryTable */
  public $table;
  protected $collection_key = 'quasiIds';
  protected $quasiIdsType = GooglePrivacyDlpV2QuasiIdentifierField::class;
  protected $quasiIdsDataType = 'array';
  protected $relativeFrequencyType = GooglePrivacyDlpV2FieldId::class;
  protected $relativeFrequencyDataType = '';
  protected $tableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $tableDataType = '';
  /** @param GooglePrivacyDlpV2QuasiIdentifierField[] */
  public function setQuasiIds($quasiIds)
  {
    $this->quasiIds = $quasiIds;
  }
  /** @return GooglePrivacyDlpV2QuasiIdentifierField[] */
  public function getQuasiIds()
  {
    return $this->quasiIds;
  }
  /** @param GooglePrivacyDlpV2FieldId */
  public function setRelativeFrequency(GooglePrivacyDlpV2FieldId $relativeFrequency)
  {
    $this->relativeFrequency = $relativeFrequency;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getRelativeFrequency()
  {
    return $this->relativeFrequency;
  }
  /** @param GooglePrivacyDlpV2BigQueryTable */
  public function setTable(GooglePrivacyDlpV2BigQueryTable $table)
  {
    $this->table = $table;
  }
  /** @return GooglePrivacyDlpV2BigQueryTable */
  public function getTable()
  {
    return $this->table;
  }
}

class GooglePrivacyDlpV2StorageConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2BigQueryOptions */
  public $bigQueryOptions;
  /** @var GooglePrivacyDlpV2CloudStorageOptions */
  public $cloudStorageOptions;
  /** @var GooglePrivacyDlpV2DatastoreOptions */
  public $datastoreOptions;
  /** @var GooglePrivacyDlpV2HybridOptions */
  public $hybridOptions;
  /** @var GooglePrivacyDlpV2TimespanConfig */
  public $timespanConfig;
  protected $bigQueryOptionsType = GooglePrivacyDlpV2BigQueryOptions::class;
  protected $bigQueryOptionsDataType = '';
  protected $cloudStorageOptionsType = GooglePrivacyDlpV2CloudStorageOptions::class;
  protected $cloudStorageOptionsDataType = '';
  protected $datastoreOptionsType = GooglePrivacyDlpV2DatastoreOptions::class;
  protected $datastoreOptionsDataType = '';
  protected $hybridOptionsType = GooglePrivacyDlpV2HybridOptions::class;
  protected $hybridOptionsDataType = '';
  protected $timespanConfigType = GooglePrivacyDlpV2TimespanConfig::class;
  protected $timespanConfigDataType = '';
  /** @param GooglePrivacyDlpV2BigQueryOptions */
  public function setBigQueryOptions(GooglePrivacyDlpV2BigQueryOptions $bigQueryOptions)
  {
    $this->bigQueryOptions = $bigQueryOptions;
  }
  /** @return GooglePrivacyDlpV2BigQueryOptions */
  public function getBigQueryOptions()
  {
    return $this->bigQueryOptions;
  }
  /** @param GooglePrivacyDlpV2CloudStorageOptions */
  public function setCloudStorageOptions(GooglePrivacyDlpV2CloudStorageOptions $cloudStorageOptions)
  {
    $this->cloudStorageOptions = $cloudStorageOptions;
  }
  /** @return GooglePrivacyDlpV2CloudStorageOptions */
  public function getCloudStorageOptions()
  {
    return $this->cloudStorageOptions;
  }
  /** @param GooglePrivacyDlpV2DatastoreOptions */
  public function setDatastoreOptions(GooglePrivacyDlpV2DatastoreOptions $datastoreOptions)
  {
    $this->datastoreOptions = $datastoreOptions;
  }
  /** @return GooglePrivacyDlpV2DatastoreOptions */
  public function getDatastoreOptions()
  {
    return $this->datastoreOptions;
  }
  /** @param GooglePrivacyDlpV2HybridOptions */
  public function setHybridOptions(GooglePrivacyDlpV2HybridOptions $hybridOptions)
  {
    $this->hybridOptions = $hybridOptions;
  }
  /** @return GooglePrivacyDlpV2HybridOptions */
  public function getHybridOptions()
  {
    return $this->hybridOptions;
  }
  /** @param GooglePrivacyDlpV2TimespanConfig */
  public function setTimespanConfig(GooglePrivacyDlpV2TimespanConfig $timespanConfig)
  {
    $this->timespanConfig = $timespanConfig;
  }
  /** @return GooglePrivacyDlpV2TimespanConfig */
  public function getTimespanConfig()
  {
    return $this->timespanConfig;
  }
}

class GooglePrivacyDlpV2StorageMetadataLabel extends \Google\Model
{
  /** @var string */
  public $key;

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
}

class GooglePrivacyDlpV2StoredInfoType extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2StoredInfoTypeVersion */
  public $currentVersion;
  /** @var string */
  public $name;
  /** @var GooglePrivacyDlpV2StoredInfoTypeVersion[] */
  public $pendingVersions;
  protected $collection_key = 'pendingVersions';
  protected $currentVersionType = GooglePrivacyDlpV2StoredInfoTypeVersion::class;
  protected $currentVersionDataType = '';
  protected $pendingVersionsType = GooglePrivacyDlpV2StoredInfoTypeVersion::class;
  protected $pendingVersionsDataType = 'array';
  /** @param GooglePrivacyDlpV2StoredInfoTypeVersion */
  public function setCurrentVersion(GooglePrivacyDlpV2StoredInfoTypeVersion $currentVersion)
  {
    $this->currentVersion = $currentVersion;
  }
  /** @return GooglePrivacyDlpV2StoredInfoTypeVersion */
  public function getCurrentVersion()
  {
    return $this->currentVersion;
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
  /** @param GooglePrivacyDlpV2StoredInfoTypeVersion[] */
  public function setPendingVersions($pendingVersions)
  {
    $this->pendingVersions = $pendingVersions;
  }
  /** @return GooglePrivacyDlpV2StoredInfoTypeVersion[] */
  public function getPendingVersions()
  {
    return $this->pendingVersions;
  }
}

class GooglePrivacyDlpV2StoredInfoTypeConfig extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var GooglePrivacyDlpV2Dictionary */
  public $dictionary;
  /** @var string */
  public $displayName;
  /** @var GooglePrivacyDlpV2LargeCustomDictionaryConfig */
  public $largeCustomDictionary;
  /** @var GooglePrivacyDlpV2Regex */
  public $regex;
  protected $dictionaryType = GooglePrivacyDlpV2Dictionary::class;
  protected $dictionaryDataType = '';
  protected $largeCustomDictionaryType = GooglePrivacyDlpV2LargeCustomDictionaryConfig::class;
  protected $largeCustomDictionaryDataType = '';
  protected $regexType = GooglePrivacyDlpV2Regex::class;
  protected $regexDataType = '';
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
  /** @param GooglePrivacyDlpV2Dictionary */
  public function setDictionary(GooglePrivacyDlpV2Dictionary $dictionary)
  {
    $this->dictionary = $dictionary;
  }
  /** @return GooglePrivacyDlpV2Dictionary */
  public function getDictionary()
  {
    return $this->dictionary;
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
  /** @param GooglePrivacyDlpV2LargeCustomDictionaryConfig */
  public function setLargeCustomDictionary(GooglePrivacyDlpV2LargeCustomDictionaryConfig $largeCustomDictionary)
  {
    $this->largeCustomDictionary = $largeCustomDictionary;
  }
  /** @return GooglePrivacyDlpV2LargeCustomDictionaryConfig */
  public function getLargeCustomDictionary()
  {
    return $this->largeCustomDictionary;
  }
  /** @param GooglePrivacyDlpV2Regex */
  public function setRegex(GooglePrivacyDlpV2Regex $regex)
  {
    $this->regex = $regex;
  }
  /** @return GooglePrivacyDlpV2Regex */
  public function getRegex()
  {
    return $this->regex;
  }
}

class GooglePrivacyDlpV2StoredInfoTypeStats extends \Google\Model
{
  /** @var GooglePrivacyDlpV2LargeCustomDictionaryStats */
  public $largeCustomDictionary;
  protected $largeCustomDictionaryType = GooglePrivacyDlpV2LargeCustomDictionaryStats::class;
  protected $largeCustomDictionaryDataType = '';
  /** @param GooglePrivacyDlpV2LargeCustomDictionaryStats */
  public function setLargeCustomDictionary(GooglePrivacyDlpV2LargeCustomDictionaryStats $largeCustomDictionary)
  {
    $this->largeCustomDictionary = $largeCustomDictionary;
  }
  /** @return GooglePrivacyDlpV2LargeCustomDictionaryStats */
  public function getLargeCustomDictionary()
  {
    return $this->largeCustomDictionary;
  }
}

class GooglePrivacyDlpV2StoredInfoTypeVersion extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2StoredInfoTypeConfig */
  public $config;
  /** @var string */
  public $createTime;
  /** @var GooglePrivacyDlpV2Error[] */
  public $errors;
  /** @var string */
  public $state;
  /** @var GooglePrivacyDlpV2StoredInfoTypeStats */
  public $stats;
  protected $collection_key = 'errors';
  protected $configType = GooglePrivacyDlpV2StoredInfoTypeConfig::class;
  protected $configDataType = '';
  protected $errorsType = GooglePrivacyDlpV2Error::class;
  protected $errorsDataType = 'array';
  protected $statsType = GooglePrivacyDlpV2StoredInfoTypeStats::class;
  protected $statsDataType = '';
  /** @param GooglePrivacyDlpV2StoredInfoTypeConfig */
  public function setConfig(GooglePrivacyDlpV2StoredInfoTypeConfig $config)
  {
    $this->config = $config;
  }
  /** @return GooglePrivacyDlpV2StoredInfoTypeConfig */
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
  /** @param GooglePrivacyDlpV2Error[] */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /** @return GooglePrivacyDlpV2Error[] */
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
  /** @param GooglePrivacyDlpV2StoredInfoTypeStats */
  public function setStats(GooglePrivacyDlpV2StoredInfoTypeStats $stats)
  {
    $this->stats = $stats;
  }
  /** @return GooglePrivacyDlpV2StoredInfoTypeStats */
  public function getStats()
  {
    return $this->stats;
  }
}

class GooglePrivacyDlpV2StoredType extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $name;

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

class GooglePrivacyDlpV2SummaryResult extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $count;
  /** @var string */
  public $details;

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
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return string */
  public function getDetails()
  {
    return $this->details;
  }
}

class GooglePrivacyDlpV2SurrogateType extends \Google\Model
{
}

class GooglePrivacyDlpV2Table extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2FieldId[] */
  public $headers;
  /** @var GooglePrivacyDlpV2Row[] */
  public $rows;
  protected $collection_key = 'rows';
  protected $headersType = GooglePrivacyDlpV2FieldId::class;
  protected $headersDataType = 'array';
  protected $rowsType = GooglePrivacyDlpV2Row::class;
  protected $rowsDataType = 'array';
  /** @param GooglePrivacyDlpV2FieldId[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return GooglePrivacyDlpV2FieldId[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param GooglePrivacyDlpV2Row[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return GooglePrivacyDlpV2Row[] */
  public function getRows()
  {
    return $this->rows;
  }
}

class GooglePrivacyDlpV2TableDataProfile extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2DataProfileConfigSnapshot */
  public $configSnapshot;
  /** @var string */
  public $createTime;
  /** @var GooglePrivacyDlpV2DataRiskLevel */
  public $dataRiskLevel;
  /** @var string */
  public $datasetId;
  /** @var string */
  public $datasetLocation;
  /** @var string */
  public $datasetProjectId;
  /** @var string */
  public $encryptionStatus;
  /** @var string */
  public $expirationTime;
  /** @var string */
  public $failedColumnCount;
  /** @var string */
  public $fullResource;
  /** @var string */
  public $lastModifiedTime;
  /** @var string */
  public $name;
  /** @var GooglePrivacyDlpV2OtherInfoTypeSummary[] */
  public $otherInfoTypes;
  /** @var GooglePrivacyDlpV2InfoTypeSummary[] */
  public $predictedInfoTypes;
  /** @var string */
  public $profileLastGenerated;
  /** @var GooglePrivacyDlpV2ProfileStatus */
  public $profileStatus;
  /** @var string */
  public $projectDataProfile;
  /** @var string[] */
  public $resourceLabels;
  /** @var string */
  public $resourceVisibility;
  /** @var string */
  public $rowCount;
  /** @var string */
  public $scannedColumnCount;
  /** @var GooglePrivacyDlpV2SensitivityScore */
  public $sensitivityScore;
  /** @var string */
  public $state;
  /** @var string */
  public $tableId;
  /** @var string */
  public $tableSizeBytes;
  protected $collection_key = 'predictedInfoTypes';
  protected $configSnapshotType = GooglePrivacyDlpV2DataProfileConfigSnapshot::class;
  protected $configSnapshotDataType = '';
  protected $dataRiskLevelType = GooglePrivacyDlpV2DataRiskLevel::class;
  protected $dataRiskLevelDataType = '';
  protected $otherInfoTypesType = GooglePrivacyDlpV2OtherInfoTypeSummary::class;
  protected $otherInfoTypesDataType = 'array';
  protected $predictedInfoTypesType = GooglePrivacyDlpV2InfoTypeSummary::class;
  protected $predictedInfoTypesDataType = 'array';
  protected $profileStatusType = GooglePrivacyDlpV2ProfileStatus::class;
  protected $profileStatusDataType = '';
  protected $sensitivityScoreType = GooglePrivacyDlpV2SensitivityScore::class;
  protected $sensitivityScoreDataType = '';
  /** @param GooglePrivacyDlpV2DataProfileConfigSnapshot */
  public function setConfigSnapshot(GooglePrivacyDlpV2DataProfileConfigSnapshot $configSnapshot)
  {
    $this->configSnapshot = $configSnapshot;
  }
  /** @return GooglePrivacyDlpV2DataProfileConfigSnapshot */
  public function getConfigSnapshot()
  {
    return $this->configSnapshot;
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
  /** @param GooglePrivacyDlpV2DataRiskLevel */
  public function setDataRiskLevel(GooglePrivacyDlpV2DataRiskLevel $dataRiskLevel)
  {
    $this->dataRiskLevel = $dataRiskLevel;
  }
  /** @return GooglePrivacyDlpV2DataRiskLevel */
  public function getDataRiskLevel()
  {
    return $this->dataRiskLevel;
  }
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
  public function setDatasetLocation($datasetLocation)
  {
    $this->datasetLocation = $datasetLocation;
  }
  /** @return string */
  public function getDatasetLocation()
  {
    return $this->datasetLocation;
  }
  /** @param string */
  public function setDatasetProjectId($datasetProjectId)
  {
    $this->datasetProjectId = $datasetProjectId;
  }
  /** @return string */
  public function getDatasetProjectId()
  {
    return $this->datasetProjectId;
  }
  /** @param string */
  public function setEncryptionStatus($encryptionStatus)
  {
    $this->encryptionStatus = $encryptionStatus;
  }
  /** @return string */
  public function getEncryptionStatus()
  {
    return $this->encryptionStatus;
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
  public function setFailedColumnCount($failedColumnCount)
  {
    $this->failedColumnCount = $failedColumnCount;
  }
  /** @return string */
  public function getFailedColumnCount()
  {
    return $this->failedColumnCount;
  }
  /** @param string */
  public function setFullResource($fullResource)
  {
    $this->fullResource = $fullResource;
  }
  /** @return string */
  public function getFullResource()
  {
    return $this->fullResource;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param GooglePrivacyDlpV2OtherInfoTypeSummary[] */
  public function setOtherInfoTypes($otherInfoTypes)
  {
    $this->otherInfoTypes = $otherInfoTypes;
  }
  /** @return GooglePrivacyDlpV2OtherInfoTypeSummary[] */
  public function getOtherInfoTypes()
  {
    return $this->otherInfoTypes;
  }
  /** @param GooglePrivacyDlpV2InfoTypeSummary[] */
  public function setPredictedInfoTypes($predictedInfoTypes)
  {
    $this->predictedInfoTypes = $predictedInfoTypes;
  }
  /** @return GooglePrivacyDlpV2InfoTypeSummary[] */
  public function getPredictedInfoTypes()
  {
    return $this->predictedInfoTypes;
  }
  /** @param string */
  public function setProfileLastGenerated($profileLastGenerated)
  {
    $this->profileLastGenerated = $profileLastGenerated;
  }
  /** @return string */
  public function getProfileLastGenerated()
  {
    return $this->profileLastGenerated;
  }
  /** @param GooglePrivacyDlpV2ProfileStatus */
  public function setProfileStatus(GooglePrivacyDlpV2ProfileStatus $profileStatus)
  {
    $this->profileStatus = $profileStatus;
  }
  /** @return GooglePrivacyDlpV2ProfileStatus */
  public function getProfileStatus()
  {
    return $this->profileStatus;
  }
  /** @param string */
  public function setProjectDataProfile($projectDataProfile)
  {
    $this->projectDataProfile = $projectDataProfile;
  }
  /** @return string */
  public function getProjectDataProfile()
  {
    return $this->projectDataProfile;
  }
  /** @param string[] */
  public function setResourceLabels($resourceLabels)
  {
    $this->resourceLabels = $resourceLabels;
  }
  /** @return string[] */
  public function getResourceLabels()
  {
    return $this->resourceLabels;
  }
  /** @param string */
  public function setResourceVisibility($resourceVisibility)
  {
    $this->resourceVisibility = $resourceVisibility;
  }
  /** @return string */
  public function getResourceVisibility()
  {
    return $this->resourceVisibility;
  }
  /** @param string */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return string */
  public function getRowCount()
  {
    return $this->rowCount;
  }
  /** @param string */
  public function setScannedColumnCount($scannedColumnCount)
  {
    $this->scannedColumnCount = $scannedColumnCount;
  }
  /** @return string */
  public function getScannedColumnCount()
  {
    return $this->scannedColumnCount;
  }
  /** @param GooglePrivacyDlpV2SensitivityScore */
  public function setSensitivityScore(GooglePrivacyDlpV2SensitivityScore $sensitivityScore)
  {
    $this->sensitivityScore = $sensitivityScore;
  }
  /** @return GooglePrivacyDlpV2SensitivityScore */
  public function getSensitivityScore()
  {
    return $this->sensitivityScore;
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
  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }
  /** @return string */
  public function getTableId()
  {
    return $this->tableId;
  }
  /** @param string */
  public function setTableSizeBytes($tableSizeBytes)
  {
    $this->tableSizeBytes = $tableSizeBytes;
  }
  /** @return string */
  public function getTableSizeBytes()
  {
    return $this->tableSizeBytes;
  }
}

class GooglePrivacyDlpV2TableLocation extends \Google\Model
{
  /** @var string */
  public $rowIndex;

  /** @param string */
  public function setRowIndex($rowIndex)
  {
    $this->rowIndex = $rowIndex;
  }
  /** @return string */
  public function getRowIndex()
  {
    return $this->rowIndex;
  }
}

class GooglePrivacyDlpV2TableOptions extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2FieldId[] */
  public $identifyingFields;
  protected $collection_key = 'identifyingFields';
  protected $identifyingFieldsType = GooglePrivacyDlpV2FieldId::class;
  protected $identifyingFieldsDataType = 'array';
  /** @param GooglePrivacyDlpV2FieldId[] */
  public function setIdentifyingFields($identifyingFields)
  {
    $this->identifyingFields = $identifyingFields;
  }
  /** @return GooglePrivacyDlpV2FieldId[] */
  public function getIdentifyingFields()
  {
    return $this->identifyingFields;
  }
}

class GooglePrivacyDlpV2TaggedField extends \Google\Model
{
  /** @var string */
  public $customTag;
  /** @var GooglePrivacyDlpV2FieldId */
  public $field;
  /** @var GoogleProtobufEmpty */
  public $inferred;
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  protected $fieldType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldDataType = '';
  protected $inferredType = GoogleProtobufEmpty::class;
  protected $inferredDataType = '';
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
  /** @param string */
  public function setCustomTag($customTag)
  {
    $this->customTag = $customTag;
  }
  /** @return string */
  public function getCustomTag()
  {
    return $this->customTag;
  }
  /** @param GooglePrivacyDlpV2FieldId */
  public function setField(GooglePrivacyDlpV2FieldId $field)
  {
    $this->field = $field;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getField()
  {
    return $this->field;
  }
  /** @param GoogleProtobufEmpty */
  public function setInferred(GoogleProtobufEmpty $inferred)
  {
    $this->inferred = $inferred;
  }
  /** @return GoogleProtobufEmpty */
  public function getInferred()
  {
    return $this->inferred;
  }
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
  }
}

class GooglePrivacyDlpV2ThrowError extends \Google\Model
{
}

class GooglePrivacyDlpV2TimePartConfig extends \Google\Model
{
  /** @var string */
  public $partToExtract;

  /** @param string */
  public function setPartToExtract($partToExtract)
  {
    $this->partToExtract = $partToExtract;
  }
  /** @return string */
  public function getPartToExtract()
  {
    return $this->partToExtract;
  }
}

class GooglePrivacyDlpV2TimeZone extends \Google\Model
{
  /** @var int */
  public $offsetMinutes;

  /** @param int */
  public function setOffsetMinutes($offsetMinutes)
  {
    $this->offsetMinutes = $offsetMinutes;
  }
  /** @return int */
  public function getOffsetMinutes()
  {
    return $this->offsetMinutes;
  }
}

class GooglePrivacyDlpV2TimespanConfig extends \Google\Model
{
  /** @var bool */
  public $enableAutoPopulationOfTimespanConfig;
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;
  /** @var GooglePrivacyDlpV2FieldId */
  public $timestampField;
  protected $timestampFieldType = GooglePrivacyDlpV2FieldId::class;
  protected $timestampFieldDataType = '';
  /** @param bool */
  public function setEnableAutoPopulationOfTimespanConfig($enableAutoPopulationOfTimespanConfig)
  {
    $this->enableAutoPopulationOfTimespanConfig = $enableAutoPopulationOfTimespanConfig;
  }
  /** @return bool */
  public function getEnableAutoPopulationOfTimespanConfig()
  {
    return $this->enableAutoPopulationOfTimespanConfig;
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
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /** @param GooglePrivacyDlpV2FieldId */
  public function setTimestampField(GooglePrivacyDlpV2FieldId $timestampField)
  {
    $this->timestampField = $timestampField;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getTimestampField()
  {
    return $this->timestampField;
  }
}

class GooglePrivacyDlpV2TransformationConfig extends \Google\Model
{
  /** @var string */
  public $deidentifyTemplate;
  /** @var string */
  public $imageRedactTemplate;
  /** @var string */
  public $structuredDeidentifyTemplate;

  /** @param string */
  public function setDeidentifyTemplate($deidentifyTemplate)
  {
    $this->deidentifyTemplate = $deidentifyTemplate;
  }
  /** @return string */
  public function getDeidentifyTemplate()
  {
    return $this->deidentifyTemplate;
  }
  /** @param string */
  public function setImageRedactTemplate($imageRedactTemplate)
  {
    $this->imageRedactTemplate = $imageRedactTemplate;
  }
  /** @return string */
  public function getImageRedactTemplate()
  {
    return $this->imageRedactTemplate;
  }
  /** @param string */
  public function setStructuredDeidentifyTemplate($structuredDeidentifyTemplate)
  {
    $this->structuredDeidentifyTemplate = $structuredDeidentifyTemplate;
  }
  /** @return string */
  public function getStructuredDeidentifyTemplate()
  {
    return $this->structuredDeidentifyTemplate;
  }
}

class GooglePrivacyDlpV2TransformationDescription extends \Google\Model
{
  /** @var string */
  public $condition;
  /** @var string */
  public $description;
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  /** @var string */
  public $type;
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
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

class GooglePrivacyDlpV2TransformationDetails extends \Google\Collection
{
  /** @var string */
  public $containerName;
  /** @var string */
  public $resourceName;
  /** @var GooglePrivacyDlpV2TransformationResultStatus */
  public $statusDetails;
  /** @var GooglePrivacyDlpV2TransformationDescription[] */
  public $transformation;
  /** @var GooglePrivacyDlpV2TransformationLocation */
  public $transformationLocation;
  /** @var string */
  public $transformedBytes;
  protected $collection_key = 'transformation';
  protected $statusDetailsType = GooglePrivacyDlpV2TransformationResultStatus::class;
  protected $statusDetailsDataType = '';
  protected $transformationType = GooglePrivacyDlpV2TransformationDescription::class;
  protected $transformationDataType = 'array';
  protected $transformationLocationType = GooglePrivacyDlpV2TransformationLocation::class;
  protected $transformationLocationDataType = '';
  /** @param string */
  public function setContainerName($containerName)
  {
    $this->containerName = $containerName;
  }
  /** @return string */
  public function getContainerName()
  {
    return $this->containerName;
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
  /** @param GooglePrivacyDlpV2TransformationResultStatus */
  public function setStatusDetails(GooglePrivacyDlpV2TransformationResultStatus $statusDetails)
  {
    $this->statusDetails = $statusDetails;
  }
  /** @return GooglePrivacyDlpV2TransformationResultStatus */
  public function getStatusDetails()
  {
    return $this->statusDetails;
  }
  /** @param GooglePrivacyDlpV2TransformationDescription[] */
  public function setTransformation($transformation)
  {
    $this->transformation = $transformation;
  }
  /** @return GooglePrivacyDlpV2TransformationDescription[] */
  public function getTransformation()
  {
    return $this->transformation;
  }
  /** @param GooglePrivacyDlpV2TransformationLocation */
  public function setTransformationLocation(GooglePrivacyDlpV2TransformationLocation $transformationLocation)
  {
    $this->transformationLocation = $transformationLocation;
  }
  /** @return GooglePrivacyDlpV2TransformationLocation */
  public function getTransformationLocation()
  {
    return $this->transformationLocation;
  }
  /** @param string */
  public function setTransformedBytes($transformedBytes)
  {
    $this->transformedBytes = $transformedBytes;
  }
  /** @return string */
  public function getTransformedBytes()
  {
    return $this->transformedBytes;
  }
}

class GooglePrivacyDlpV2TransformationDetailsStorageConfig extends \Google\Model
{
  /** @var GooglePrivacyDlpV2BigQueryTable */
  public $table;
  protected $tableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $tableDataType = '';
  /** @param GooglePrivacyDlpV2BigQueryTable */
  public function setTable(GooglePrivacyDlpV2BigQueryTable $table)
  {
    $this->table = $table;
  }
  /** @return GooglePrivacyDlpV2BigQueryTable */
  public function getTable()
  {
    return $this->table;
  }
}

class GooglePrivacyDlpV2TransformationErrorHandling extends \Google\Model
{
  /** @var GooglePrivacyDlpV2LeaveUntransformed */
  public $leaveUntransformed;
  /** @var GooglePrivacyDlpV2ThrowError */
  public $throwError;
  protected $leaveUntransformedType = GooglePrivacyDlpV2LeaveUntransformed::class;
  protected $leaveUntransformedDataType = '';
  protected $throwErrorType = GooglePrivacyDlpV2ThrowError::class;
  protected $throwErrorDataType = '';
  /** @param GooglePrivacyDlpV2LeaveUntransformed */
  public function setLeaveUntransformed(GooglePrivacyDlpV2LeaveUntransformed $leaveUntransformed)
  {
    $this->leaveUntransformed = $leaveUntransformed;
  }
  /** @return GooglePrivacyDlpV2LeaveUntransformed */
  public function getLeaveUntransformed()
  {
    return $this->leaveUntransformed;
  }
  /** @param GooglePrivacyDlpV2ThrowError */
  public function setThrowError(GooglePrivacyDlpV2ThrowError $throwError)
  {
    $this->throwError = $throwError;
  }
  /** @return GooglePrivacyDlpV2ThrowError */
  public function getThrowError()
  {
    return $this->throwError;
  }
}

class GooglePrivacyDlpV2TransformationLocation extends \Google\Model
{
  /** @var string */
  public $containerType;
  /** @var string */
  public $findingId;
  /** @var GooglePrivacyDlpV2RecordTransformation */
  public $recordTransformation;
  protected $recordTransformationType = GooglePrivacyDlpV2RecordTransformation::class;
  protected $recordTransformationDataType = '';
  /** @param string */
  public function setContainerType($containerType)
  {
    $this->containerType = $containerType;
  }
  /** @return string */
  public function getContainerType()
  {
    return $this->containerType;
  }
  /** @param string */
  public function setFindingId($findingId)
  {
    $this->findingId = $findingId;
  }
  /** @return string */
  public function getFindingId()
  {
    return $this->findingId;
  }
  /** @param GooglePrivacyDlpV2RecordTransformation */
  public function setRecordTransformation(GooglePrivacyDlpV2RecordTransformation $recordTransformation)
  {
    $this->recordTransformation = $recordTransformation;
  }
  /** @return GooglePrivacyDlpV2RecordTransformation */
  public function getRecordTransformation()
  {
    return $this->recordTransformation;
  }
}

class GooglePrivacyDlpV2TransformationOverview extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2TransformationSummary[] */
  public $transformationSummaries;
  /** @var string */
  public $transformedBytes;
  protected $collection_key = 'transformationSummaries';
  protected $transformationSummariesType = GooglePrivacyDlpV2TransformationSummary::class;
  protected $transformationSummariesDataType = 'array';
  /** @param GooglePrivacyDlpV2TransformationSummary[] */
  public function setTransformationSummaries($transformationSummaries)
  {
    $this->transformationSummaries = $transformationSummaries;
  }
  /** @return GooglePrivacyDlpV2TransformationSummary[] */
  public function getTransformationSummaries()
  {
    return $this->transformationSummaries;
  }
  /** @param string */
  public function setTransformedBytes($transformedBytes)
  {
    $this->transformedBytes = $transformedBytes;
  }
  /** @return string */
  public function getTransformedBytes()
  {
    return $this->transformedBytes;
  }
}

class GooglePrivacyDlpV2TransformationResultStatus extends \Google\Model
{
  /** @var GoogleRpcStatus */
  public $details;
  /** @var string */
  public $resultStatusType;
  protected $detailsType = GoogleRpcStatus::class;
  protected $detailsDataType = '';
  /** @param GoogleRpcStatus */
  public function setDetails(GoogleRpcStatus $details)
  {
    $this->details = $details;
  }
  /** @return GoogleRpcStatus */
  public function getDetails()
  {
    return $this->details;
  }
  /** @param string */
  public function setResultStatusType($resultStatusType)
  {
    $this->resultStatusType = $resultStatusType;
  }
  /** @return string */
  public function getResultStatusType()
  {
    return $this->resultStatusType;
  }
}

class GooglePrivacyDlpV2TransformationSummary extends \Google\Collection
{
  /** @var GooglePrivacyDlpV2FieldId */
  public $field;
  /** @var GooglePrivacyDlpV2FieldTransformation[] */
  public $fieldTransformations;
  /** @var GooglePrivacyDlpV2InfoType */
  public $infoType;
  /** @var GooglePrivacyDlpV2RecordSuppression */
  public $recordSuppress;
  /** @var GooglePrivacyDlpV2SummaryResult[] */
  public $results;
  /** @var GooglePrivacyDlpV2PrimitiveTransformation */
  public $transformation;
  /** @var string */
  public $transformedBytes;
  protected $collection_key = 'results';
  protected $fieldType = GooglePrivacyDlpV2FieldId::class;
  protected $fieldDataType = '';
  protected $fieldTransformationsType = GooglePrivacyDlpV2FieldTransformation::class;
  protected $fieldTransformationsDataType = 'array';
  protected $infoTypeType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypeDataType = '';
  protected $recordSuppressType = GooglePrivacyDlpV2RecordSuppression::class;
  protected $recordSuppressDataType = '';
  protected $resultsType = GooglePrivacyDlpV2SummaryResult::class;
  protected $resultsDataType = 'array';
  protected $transformationType = GooglePrivacyDlpV2PrimitiveTransformation::class;
  protected $transformationDataType = '';
  /** @param GooglePrivacyDlpV2FieldId */
  public function setField(GooglePrivacyDlpV2FieldId $field)
  {
    $this->field = $field;
  }
  /** @return GooglePrivacyDlpV2FieldId */
  public function getField()
  {
    return $this->field;
  }
  /** @param GooglePrivacyDlpV2FieldTransformation[] */
  public function setFieldTransformations($fieldTransformations)
  {
    $this->fieldTransformations = $fieldTransformations;
  }
  /** @return GooglePrivacyDlpV2FieldTransformation[] */
  public function getFieldTransformations()
  {
    return $this->fieldTransformations;
  }
  /** @param GooglePrivacyDlpV2InfoType */
  public function setInfoType(GooglePrivacyDlpV2InfoType $infoType)
  {
    $this->infoType = $infoType;
  }
  /** @return GooglePrivacyDlpV2InfoType */
  public function getInfoType()
  {
    return $this->infoType;
  }
  /** @param GooglePrivacyDlpV2RecordSuppression */
  public function setRecordSuppress(GooglePrivacyDlpV2RecordSuppression $recordSuppress)
  {
    $this->recordSuppress = $recordSuppress;
  }
  /** @return GooglePrivacyDlpV2RecordSuppression */
  public function getRecordSuppress()
  {
    return $this->recordSuppress;
  }
  /** @param GooglePrivacyDlpV2SummaryResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GooglePrivacyDlpV2SummaryResult[] */
  public function getResults()
  {
    return $this->results;
  }
  /** @param GooglePrivacyDlpV2PrimitiveTransformation */
  public function setTransformation(GooglePrivacyDlpV2PrimitiveTransformation $transformation)
  {
    $this->transformation = $transformation;
  }
  /** @return GooglePrivacyDlpV2PrimitiveTransformation */
  public function getTransformation()
  {
    return $this->transformation;
  }
  /** @param string */
  public function setTransformedBytes($transformedBytes)
  {
    $this->transformedBytes = $transformedBytes;
  }
  /** @return string */
  public function getTransformedBytes()
  {
    return $this->transformedBytes;
  }
}

class GooglePrivacyDlpV2TransientCryptoKey extends \Google\Model
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

class GooglePrivacyDlpV2Trigger extends \Google\Model
{
  /** @var GooglePrivacyDlpV2Manual */
  public $manual;
  /** @var GooglePrivacyDlpV2Schedule */
  public $schedule;
  protected $manualType = GooglePrivacyDlpV2Manual::class;
  protected $manualDataType = '';
  protected $scheduleType = GooglePrivacyDlpV2Schedule::class;
  protected $scheduleDataType = '';
  /** @param GooglePrivacyDlpV2Manual */
  public function setManual(GooglePrivacyDlpV2Manual $manual)
  {
    $this->manual = $manual;
  }
  /** @return GooglePrivacyDlpV2Manual */
  public function getManual()
  {
    return $this->manual;
  }
  /** @param GooglePrivacyDlpV2Schedule */
  public function setSchedule(GooglePrivacyDlpV2Schedule $schedule)
  {
    $this->schedule = $schedule;
  }
  /** @return GooglePrivacyDlpV2Schedule */
  public function getSchedule()
  {
    return $this->schedule;
  }
}

class GooglePrivacyDlpV2UnwrappedCryptoKey extends \Google\Model
{
  /** @var string */
  public $key;

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
}

class GooglePrivacyDlpV2UpdateDeidentifyTemplateRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2DeidentifyTemplate */
  public $deidentifyTemplate;
  /** @var string */
  public $updateMask;
  protected $deidentifyTemplateType = GooglePrivacyDlpV2DeidentifyTemplate::class;
  protected $deidentifyTemplateDataType = '';
  /** @param GooglePrivacyDlpV2DeidentifyTemplate */
  public function setDeidentifyTemplate(GooglePrivacyDlpV2DeidentifyTemplate $deidentifyTemplate)
  {
    $this->deidentifyTemplate = $deidentifyTemplate;
  }
  /** @return GooglePrivacyDlpV2DeidentifyTemplate */
  public function getDeidentifyTemplate()
  {
    return $this->deidentifyTemplate;
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

class GooglePrivacyDlpV2UpdateInspectTemplateRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2InspectTemplate */
  public $inspectTemplate;
  /** @var string */
  public $updateMask;
  protected $inspectTemplateType = GooglePrivacyDlpV2InspectTemplate::class;
  protected $inspectTemplateDataType = '';
  /** @param GooglePrivacyDlpV2InspectTemplate */
  public function setInspectTemplate(GooglePrivacyDlpV2InspectTemplate $inspectTemplate)
  {
    $this->inspectTemplate = $inspectTemplate;
  }
  /** @return GooglePrivacyDlpV2InspectTemplate */
  public function getInspectTemplate()
  {
    return $this->inspectTemplate;
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

class GooglePrivacyDlpV2UpdateJobTriggerRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2JobTrigger */
  public $jobTrigger;
  /** @var string */
  public $updateMask;
  protected $jobTriggerType = GooglePrivacyDlpV2JobTrigger::class;
  protected $jobTriggerDataType = '';
  /** @param GooglePrivacyDlpV2JobTrigger */
  public function setJobTrigger(GooglePrivacyDlpV2JobTrigger $jobTrigger)
  {
    $this->jobTrigger = $jobTrigger;
  }
  /** @return GooglePrivacyDlpV2JobTrigger */
  public function getJobTrigger()
  {
    return $this->jobTrigger;
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

class GooglePrivacyDlpV2UpdateStoredInfoTypeRequest extends \Google\Model
{
  /** @var GooglePrivacyDlpV2StoredInfoTypeConfig */
  public $config;
  /** @var string */
  public $updateMask;
  protected $configType = GooglePrivacyDlpV2StoredInfoTypeConfig::class;
  protected $configDataType = '';
  /** @param GooglePrivacyDlpV2StoredInfoTypeConfig */
  public function setConfig(GooglePrivacyDlpV2StoredInfoTypeConfig $config)
  {
    $this->config = $config;
  }
  /** @return GooglePrivacyDlpV2StoredInfoTypeConfig */
  public function getConfig()
  {
    return $this->config;
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

class GooglePrivacyDlpV2Value extends \Google\Model
{
  /** @var bool */
  public $booleanValue;
  /** @var GoogleTypeDate */
  public $dateValue;
  /** @var string */
  public $dayOfWeekValue;
  public $floatValue;
  /** @var string */
  public $integerValue;
  /** @var string */
  public $stringValue;
  /** @var GoogleTypeTimeOfDay */
  public $timeValue;
  /** @var string */
  public $timestampValue;
  protected $dateValueType = GoogleTypeDate::class;
  protected $dateValueDataType = '';
  protected $timeValueType = GoogleTypeTimeOfDay::class;
  protected $timeValueDataType = '';
  /** @param bool */
  public function setBooleanValue($booleanValue)
  {
    $this->booleanValue = $booleanValue;
  }
  /** @return bool */
  public function getBooleanValue()
  {
    return $this->booleanValue;
  }
  /** @param GoogleTypeDate */
  public function setDateValue(GoogleTypeDate $dateValue)
  {
    $this->dateValue = $dateValue;
  }
  /** @return GoogleTypeDate */
  public function getDateValue()
  {
    return $this->dateValue;
  }
  /** @param string */
  public function setDayOfWeekValue($dayOfWeekValue)
  {
    $this->dayOfWeekValue = $dayOfWeekValue;
  }
  /** @return string */
  public function getDayOfWeekValue()
  {
    return $this->dayOfWeekValue;
  }
  public function setFloatValue($floatValue)
  {
    $this->floatValue = $floatValue;
  }
  public function getFloatValue()
  {
    return $this->floatValue;
  }
  /** @param string */
  public function setIntegerValue($integerValue)
  {
    $this->integerValue = $integerValue;
  }
  /** @return string */
  public function getIntegerValue()
  {
    return $this->integerValue;
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
  /** @param GoogleTypeTimeOfDay */
  public function setTimeValue(GoogleTypeTimeOfDay $timeValue)
  {
    $this->timeValue = $timeValue;
  }
  /** @return GoogleTypeTimeOfDay */
  public function getTimeValue()
  {
    return $this->timeValue;
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
}

class GooglePrivacyDlpV2ValueFrequency extends \Google\Model
{
  /** @var string */
  public $count;
  /** @var GooglePrivacyDlpV2Value */
  public $value;
  protected $valueType = GooglePrivacyDlpV2Value::class;
  protected $valueDataType = '';
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
  /** @param GooglePrivacyDlpV2Value */
  public function setValue(GooglePrivacyDlpV2Value $value)
  {
    $this->value = $value;
  }
  /** @return GooglePrivacyDlpV2Value */
  public function getValue()
  {
    return $this->value;
  }
}

class GooglePrivacyDlpV2VersionDescription extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $version;

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

class GooglePrivacyDlpV2WordList extends \Google\Collection
{
  /** @var string[] */
  public $words;
  protected $collection_key = 'words';
  /** @param string[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return string[] */
  public function getWords()
  {
    return $this->words;
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

class GoogleTypeDate extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $month;
  /** @var int */
  public $year;

  /** @param int */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return int */
  public function getDay()
  {
    return $this->day;
  }
  /** @param int */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /** @return int */
  public function getMonth()
  {
    return $this->month;
  }
  /** @param int */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /** @return int */
  public function getYear()
  {
    return $this->year;
  }
}

class GoogleTypeTimeOfDay extends \Google\Model
{
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;

  /** @param int */
  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  /** @return int */
  public function getHours()
  {
    return $this->hours;
  }
  /** @param int */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  /** @return int */
  public function getMinutes()
  {
    return $this->minutes;
  }
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
  /** @param int */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return int */
  public function getSeconds()
  {
    return $this->seconds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2Action::class, 'Google_Service_DLP_GooglePrivacyDlpV2Action');
class_alias(GooglePrivacyDlpV2ActivateJobTriggerRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2ActivateJobTriggerRequest');
class_alias(GooglePrivacyDlpV2AllInfoTypes::class, 'Google_Service_DLP_GooglePrivacyDlpV2AllInfoTypes');
class_alias(GooglePrivacyDlpV2AllText::class, 'Google_Service_DLP_GooglePrivacyDlpV2AllText');
class_alias(GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails::class, 'Google_Service_DLP_GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails');
class_alias(GooglePrivacyDlpV2AuxiliaryTable::class, 'Google_Service_DLP_GooglePrivacyDlpV2AuxiliaryTable');
class_alias(GooglePrivacyDlpV2BigQueryField::class, 'Google_Service_DLP_GooglePrivacyDlpV2BigQueryField');
class_alias(GooglePrivacyDlpV2BigQueryKey::class, 'Google_Service_DLP_GooglePrivacyDlpV2BigQueryKey');
class_alias(GooglePrivacyDlpV2BigQueryOptions::class, 'Google_Service_DLP_GooglePrivacyDlpV2BigQueryOptions');
class_alias(GooglePrivacyDlpV2BigQueryTable::class, 'Google_Service_DLP_GooglePrivacyDlpV2BigQueryTable');
class_alias(GooglePrivacyDlpV2BoundingBox::class, 'Google_Service_DLP_GooglePrivacyDlpV2BoundingBox');
class_alias(GooglePrivacyDlpV2Bucket::class, 'Google_Service_DLP_GooglePrivacyDlpV2Bucket');
class_alias(GooglePrivacyDlpV2BucketingConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2BucketingConfig');
class_alias(GooglePrivacyDlpV2ByteContentItem::class, 'Google_Service_DLP_GooglePrivacyDlpV2ByteContentItem');
class_alias(GooglePrivacyDlpV2CancelDlpJobRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2CancelDlpJobRequest');
class_alias(GooglePrivacyDlpV2CategoricalStatsConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2CategoricalStatsConfig');
class_alias(GooglePrivacyDlpV2CategoricalStatsHistogramBucket::class, 'Google_Service_DLP_GooglePrivacyDlpV2CategoricalStatsHistogramBucket');
class_alias(GooglePrivacyDlpV2CategoricalStatsResult::class, 'Google_Service_DLP_GooglePrivacyDlpV2CategoricalStatsResult');
class_alias(GooglePrivacyDlpV2CharacterMaskConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2CharacterMaskConfig');
class_alias(GooglePrivacyDlpV2CharsToIgnore::class, 'Google_Service_DLP_GooglePrivacyDlpV2CharsToIgnore');
class_alias(GooglePrivacyDlpV2CloudStorageFileSet::class, 'Google_Service_DLP_GooglePrivacyDlpV2CloudStorageFileSet');
class_alias(GooglePrivacyDlpV2CloudStorageOptions::class, 'Google_Service_DLP_GooglePrivacyDlpV2CloudStorageOptions');
class_alias(GooglePrivacyDlpV2CloudStoragePath::class, 'Google_Service_DLP_GooglePrivacyDlpV2CloudStoragePath');
class_alias(GooglePrivacyDlpV2CloudStorageRegexFileSet::class, 'Google_Service_DLP_GooglePrivacyDlpV2CloudStorageRegexFileSet');
class_alias(GooglePrivacyDlpV2Color::class, 'Google_Service_DLP_GooglePrivacyDlpV2Color');
class_alias(GooglePrivacyDlpV2Condition::class, 'Google_Service_DLP_GooglePrivacyDlpV2Condition');
class_alias(GooglePrivacyDlpV2Conditions::class, 'Google_Service_DLP_GooglePrivacyDlpV2Conditions');
class_alias(GooglePrivacyDlpV2Container::class, 'Google_Service_DLP_GooglePrivacyDlpV2Container');
class_alias(GooglePrivacyDlpV2ContentItem::class, 'Google_Service_DLP_GooglePrivacyDlpV2ContentItem');
class_alias(GooglePrivacyDlpV2ContentLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2ContentLocation');
class_alias(GooglePrivacyDlpV2CreateDeidentifyTemplateRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2CreateDeidentifyTemplateRequest');
class_alias(GooglePrivacyDlpV2CreateDlpJobRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2CreateDlpJobRequest');
class_alias(GooglePrivacyDlpV2CreateInspectTemplateRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2CreateInspectTemplateRequest');
class_alias(GooglePrivacyDlpV2CreateJobTriggerRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2CreateJobTriggerRequest');
class_alias(GooglePrivacyDlpV2CreateStoredInfoTypeRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2CreateStoredInfoTypeRequest');
class_alias(GooglePrivacyDlpV2CryptoDeterministicConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2CryptoDeterministicConfig');
class_alias(GooglePrivacyDlpV2CryptoHashConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2CryptoHashConfig');
class_alias(GooglePrivacyDlpV2CryptoKey::class, 'Google_Service_DLP_GooglePrivacyDlpV2CryptoKey');
class_alias(GooglePrivacyDlpV2CryptoReplaceFfxFpeConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2CryptoReplaceFfxFpeConfig');
class_alias(GooglePrivacyDlpV2CustomInfoType::class, 'Google_Service_DLP_GooglePrivacyDlpV2CustomInfoType');
class_alias(GooglePrivacyDlpV2DataProfileAction::class, 'Google_Service_DLP_GooglePrivacyDlpV2DataProfileAction');
class_alias(GooglePrivacyDlpV2DataProfileConfigSnapshot::class, 'Google_Service_DLP_GooglePrivacyDlpV2DataProfileConfigSnapshot');
class_alias(GooglePrivacyDlpV2DataProfileJobConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2DataProfileJobConfig');
class_alias(GooglePrivacyDlpV2DataProfileLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2DataProfileLocation');
class_alias(GooglePrivacyDlpV2DataProfilePubSubCondition::class, 'Google_Service_DLP_GooglePrivacyDlpV2DataProfilePubSubCondition');
class_alias(GooglePrivacyDlpV2DataProfilePubSubMessage::class, 'Google_Service_DLP_GooglePrivacyDlpV2DataProfilePubSubMessage');
class_alias(GooglePrivacyDlpV2DataRiskLevel::class, 'Google_Service_DLP_GooglePrivacyDlpV2DataRiskLevel');
class_alias(GooglePrivacyDlpV2DatastoreKey::class, 'Google_Service_DLP_GooglePrivacyDlpV2DatastoreKey');
class_alias(GooglePrivacyDlpV2DatastoreOptions::class, 'Google_Service_DLP_GooglePrivacyDlpV2DatastoreOptions');
class_alias(GooglePrivacyDlpV2DateShiftConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2DateShiftConfig');
class_alias(GooglePrivacyDlpV2DateTime::class, 'Google_Service_DLP_GooglePrivacyDlpV2DateTime');
class_alias(GooglePrivacyDlpV2Deidentify::class, 'Google_Service_DLP_GooglePrivacyDlpV2Deidentify');
class_alias(GooglePrivacyDlpV2DeidentifyConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2DeidentifyConfig');
class_alias(GooglePrivacyDlpV2DeidentifyContentRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2DeidentifyContentRequest');
class_alias(GooglePrivacyDlpV2DeidentifyContentResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2DeidentifyContentResponse');
class_alias(GooglePrivacyDlpV2DeidentifyTemplate::class, 'Google_Service_DLP_GooglePrivacyDlpV2DeidentifyTemplate');
class_alias(GooglePrivacyDlpV2DeltaPresenceEstimationConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2DeltaPresenceEstimationConfig');
class_alias(GooglePrivacyDlpV2DeltaPresenceEstimationHistogramBucket::class, 'Google_Service_DLP_GooglePrivacyDlpV2DeltaPresenceEstimationHistogramBucket');
class_alias(GooglePrivacyDlpV2DeltaPresenceEstimationQuasiIdValues::class, 'Google_Service_DLP_GooglePrivacyDlpV2DeltaPresenceEstimationQuasiIdValues');
class_alias(GooglePrivacyDlpV2DeltaPresenceEstimationResult::class, 'Google_Service_DLP_GooglePrivacyDlpV2DeltaPresenceEstimationResult');
class_alias(GooglePrivacyDlpV2DetectionRule::class, 'Google_Service_DLP_GooglePrivacyDlpV2DetectionRule');
class_alias(GooglePrivacyDlpV2Dictionary::class, 'Google_Service_DLP_GooglePrivacyDlpV2Dictionary');
class_alias(GooglePrivacyDlpV2DlpJob::class, 'Google_Service_DLP_GooglePrivacyDlpV2DlpJob');
class_alias(GooglePrivacyDlpV2DocumentLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2DocumentLocation');
class_alias(GooglePrivacyDlpV2EntityId::class, 'Google_Service_DLP_GooglePrivacyDlpV2EntityId');
class_alias(GooglePrivacyDlpV2Error::class, 'Google_Service_DLP_GooglePrivacyDlpV2Error');
class_alias(GooglePrivacyDlpV2ExcludeByHotword::class, 'Google_Service_DLP_GooglePrivacyDlpV2ExcludeByHotword');
class_alias(GooglePrivacyDlpV2ExcludeInfoTypes::class, 'Google_Service_DLP_GooglePrivacyDlpV2ExcludeInfoTypes');
class_alias(GooglePrivacyDlpV2ExclusionRule::class, 'Google_Service_DLP_GooglePrivacyDlpV2ExclusionRule');
class_alias(GooglePrivacyDlpV2Export::class, 'Google_Service_DLP_GooglePrivacyDlpV2Export');
class_alias(GooglePrivacyDlpV2Expressions::class, 'Google_Service_DLP_GooglePrivacyDlpV2Expressions');
class_alias(GooglePrivacyDlpV2FieldId::class, 'Google_Service_DLP_GooglePrivacyDlpV2FieldId');
class_alias(GooglePrivacyDlpV2FieldTransformation::class, 'Google_Service_DLP_GooglePrivacyDlpV2FieldTransformation');
class_alias(GooglePrivacyDlpV2FileSet::class, 'Google_Service_DLP_GooglePrivacyDlpV2FileSet');
class_alias(GooglePrivacyDlpV2Finding::class, 'Google_Service_DLP_GooglePrivacyDlpV2Finding');
class_alias(GooglePrivacyDlpV2FindingLimits::class, 'Google_Service_DLP_GooglePrivacyDlpV2FindingLimits');
class_alias(GooglePrivacyDlpV2FinishDlpJobRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2FinishDlpJobRequest');
class_alias(GooglePrivacyDlpV2FixedSizeBucketingConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2FixedSizeBucketingConfig');
class_alias(GooglePrivacyDlpV2HotwordRule::class, 'Google_Service_DLP_GooglePrivacyDlpV2HotwordRule');
class_alias(GooglePrivacyDlpV2HybridContentItem::class, 'Google_Service_DLP_GooglePrivacyDlpV2HybridContentItem');
class_alias(GooglePrivacyDlpV2HybridFindingDetails::class, 'Google_Service_DLP_GooglePrivacyDlpV2HybridFindingDetails');
class_alias(GooglePrivacyDlpV2HybridInspectDlpJobRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2HybridInspectDlpJobRequest');
class_alias(GooglePrivacyDlpV2HybridInspectJobTriggerRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2HybridInspectJobTriggerRequest');
class_alias(GooglePrivacyDlpV2HybridInspectResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2HybridInspectResponse');
class_alias(GooglePrivacyDlpV2HybridInspectStatistics::class, 'Google_Service_DLP_GooglePrivacyDlpV2HybridInspectStatistics');
class_alias(GooglePrivacyDlpV2HybridOptions::class, 'Google_Service_DLP_GooglePrivacyDlpV2HybridOptions');
class_alias(GooglePrivacyDlpV2ImageLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2ImageLocation');
class_alias(GooglePrivacyDlpV2ImageRedactionConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2ImageRedactionConfig');
class_alias(GooglePrivacyDlpV2ImageTransformation::class, 'Google_Service_DLP_GooglePrivacyDlpV2ImageTransformation');
class_alias(GooglePrivacyDlpV2ImageTransformations::class, 'Google_Service_DLP_GooglePrivacyDlpV2ImageTransformations');
class_alias(GooglePrivacyDlpV2InfoType::class, 'Google_Service_DLP_GooglePrivacyDlpV2InfoType');
class_alias(GooglePrivacyDlpV2InfoTypeCategory::class, 'Google_Service_DLP_GooglePrivacyDlpV2InfoTypeCategory');
class_alias(GooglePrivacyDlpV2InfoTypeDescription::class, 'Google_Service_DLP_GooglePrivacyDlpV2InfoTypeDescription');
class_alias(GooglePrivacyDlpV2InfoTypeLimit::class, 'Google_Service_DLP_GooglePrivacyDlpV2InfoTypeLimit');
class_alias(GooglePrivacyDlpV2InfoTypeStats::class, 'Google_Service_DLP_GooglePrivacyDlpV2InfoTypeStats');
class_alias(GooglePrivacyDlpV2InfoTypeSummary::class, 'Google_Service_DLP_GooglePrivacyDlpV2InfoTypeSummary');
class_alias(GooglePrivacyDlpV2InfoTypeTransformation::class, 'Google_Service_DLP_GooglePrivacyDlpV2InfoTypeTransformation');
class_alias(GooglePrivacyDlpV2InfoTypeTransformations::class, 'Google_Service_DLP_GooglePrivacyDlpV2InfoTypeTransformations');
class_alias(GooglePrivacyDlpV2InspectConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2InspectConfig');
class_alias(GooglePrivacyDlpV2InspectContentRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2InspectContentRequest');
class_alias(GooglePrivacyDlpV2InspectContentResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2InspectContentResponse');
class_alias(GooglePrivacyDlpV2InspectDataSourceDetails::class, 'Google_Service_DLP_GooglePrivacyDlpV2InspectDataSourceDetails');
class_alias(GooglePrivacyDlpV2InspectJobConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2InspectJobConfig');
class_alias(GooglePrivacyDlpV2InspectResult::class, 'Google_Service_DLP_GooglePrivacyDlpV2InspectResult');
class_alias(GooglePrivacyDlpV2InspectTemplate::class, 'Google_Service_DLP_GooglePrivacyDlpV2InspectTemplate');
class_alias(GooglePrivacyDlpV2InspectionRule::class, 'Google_Service_DLP_GooglePrivacyDlpV2InspectionRule');
class_alias(GooglePrivacyDlpV2InspectionRuleSet::class, 'Google_Service_DLP_GooglePrivacyDlpV2InspectionRuleSet');
class_alias(GooglePrivacyDlpV2JobNotificationEmails::class, 'Google_Service_DLP_GooglePrivacyDlpV2JobNotificationEmails');
class_alias(GooglePrivacyDlpV2JobTrigger::class, 'Google_Service_DLP_GooglePrivacyDlpV2JobTrigger');
class_alias(GooglePrivacyDlpV2KAnonymityConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2KAnonymityConfig');
class_alias(GooglePrivacyDlpV2KAnonymityEquivalenceClass::class, 'Google_Service_DLP_GooglePrivacyDlpV2KAnonymityEquivalenceClass');
class_alias(GooglePrivacyDlpV2KAnonymityHistogramBucket::class, 'Google_Service_DLP_GooglePrivacyDlpV2KAnonymityHistogramBucket');
class_alias(GooglePrivacyDlpV2KAnonymityResult::class, 'Google_Service_DLP_GooglePrivacyDlpV2KAnonymityResult');
class_alias(GooglePrivacyDlpV2KMapEstimationConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2KMapEstimationConfig');
class_alias(GooglePrivacyDlpV2KMapEstimationHistogramBucket::class, 'Google_Service_DLP_GooglePrivacyDlpV2KMapEstimationHistogramBucket');
class_alias(GooglePrivacyDlpV2KMapEstimationQuasiIdValues::class, 'Google_Service_DLP_GooglePrivacyDlpV2KMapEstimationQuasiIdValues');
class_alias(GooglePrivacyDlpV2KMapEstimationResult::class, 'Google_Service_DLP_GooglePrivacyDlpV2KMapEstimationResult');
class_alias(GooglePrivacyDlpV2Key::class, 'Google_Service_DLP_GooglePrivacyDlpV2Key');
class_alias(GooglePrivacyDlpV2KindExpression::class, 'Google_Service_DLP_GooglePrivacyDlpV2KindExpression');
class_alias(GooglePrivacyDlpV2KmsWrappedCryptoKey::class, 'Google_Service_DLP_GooglePrivacyDlpV2KmsWrappedCryptoKey');
class_alias(GooglePrivacyDlpV2LDiversityConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2LDiversityConfig');
class_alias(GooglePrivacyDlpV2LDiversityEquivalenceClass::class, 'Google_Service_DLP_GooglePrivacyDlpV2LDiversityEquivalenceClass');
class_alias(GooglePrivacyDlpV2LDiversityHistogramBucket::class, 'Google_Service_DLP_GooglePrivacyDlpV2LDiversityHistogramBucket');
class_alias(GooglePrivacyDlpV2LDiversityResult::class, 'Google_Service_DLP_GooglePrivacyDlpV2LDiversityResult');
class_alias(GooglePrivacyDlpV2LargeCustomDictionaryConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2LargeCustomDictionaryConfig');
class_alias(GooglePrivacyDlpV2LargeCustomDictionaryStats::class, 'Google_Service_DLP_GooglePrivacyDlpV2LargeCustomDictionaryStats');
class_alias(GooglePrivacyDlpV2LeaveUntransformed::class, 'Google_Service_DLP_GooglePrivacyDlpV2LeaveUntransformed');
class_alias(GooglePrivacyDlpV2LikelihoodAdjustment::class, 'Google_Service_DLP_GooglePrivacyDlpV2LikelihoodAdjustment');
class_alias(GooglePrivacyDlpV2ListDeidentifyTemplatesResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2ListDeidentifyTemplatesResponse');
class_alias(GooglePrivacyDlpV2ListDlpJobsResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2ListDlpJobsResponse');
class_alias(GooglePrivacyDlpV2ListInfoTypesResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2ListInfoTypesResponse');
class_alias(GooglePrivacyDlpV2ListInspectTemplatesResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2ListInspectTemplatesResponse');
class_alias(GooglePrivacyDlpV2ListJobTriggersResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2ListJobTriggersResponse');
class_alias(GooglePrivacyDlpV2ListStoredInfoTypesResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2ListStoredInfoTypesResponse');
class_alias(GooglePrivacyDlpV2Location::class, 'Google_Service_DLP_GooglePrivacyDlpV2Location');
class_alias(GooglePrivacyDlpV2Manual::class, 'Google_Service_DLP_GooglePrivacyDlpV2Manual');
class_alias(GooglePrivacyDlpV2MetadataLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2MetadataLocation');
class_alias(GooglePrivacyDlpV2NumericalStatsConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2NumericalStatsConfig');
class_alias(GooglePrivacyDlpV2NumericalStatsResult::class, 'Google_Service_DLP_GooglePrivacyDlpV2NumericalStatsResult');
class_alias(GooglePrivacyDlpV2OtherInfoTypeSummary::class, 'Google_Service_DLP_GooglePrivacyDlpV2OtherInfoTypeSummary');
class_alias(GooglePrivacyDlpV2OutputStorageConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2OutputStorageConfig');
class_alias(GooglePrivacyDlpV2PartitionId::class, 'Google_Service_DLP_GooglePrivacyDlpV2PartitionId');
class_alias(GooglePrivacyDlpV2PathElement::class, 'Google_Service_DLP_GooglePrivacyDlpV2PathElement');
class_alias(GooglePrivacyDlpV2PrimitiveTransformation::class, 'Google_Service_DLP_GooglePrivacyDlpV2PrimitiveTransformation');
class_alias(GooglePrivacyDlpV2PrivacyMetric::class, 'Google_Service_DLP_GooglePrivacyDlpV2PrivacyMetric');
class_alias(GooglePrivacyDlpV2ProfileStatus::class, 'Google_Service_DLP_GooglePrivacyDlpV2ProfileStatus');
class_alias(GooglePrivacyDlpV2Proximity::class, 'Google_Service_DLP_GooglePrivacyDlpV2Proximity');
class_alias(GooglePrivacyDlpV2PubSubCondition::class, 'Google_Service_DLP_GooglePrivacyDlpV2PubSubCondition');
class_alias(GooglePrivacyDlpV2PubSubExpressions::class, 'Google_Service_DLP_GooglePrivacyDlpV2PubSubExpressions');
class_alias(GooglePrivacyDlpV2PubSubNotification::class, 'Google_Service_DLP_GooglePrivacyDlpV2PubSubNotification');
class_alias(GooglePrivacyDlpV2PublishFindingsToCloudDataCatalog::class, 'Google_Service_DLP_GooglePrivacyDlpV2PublishFindingsToCloudDataCatalog');
class_alias(GooglePrivacyDlpV2PublishSummaryToCscc::class, 'Google_Service_DLP_GooglePrivacyDlpV2PublishSummaryToCscc');
class_alias(GooglePrivacyDlpV2PublishToPubSub::class, 'Google_Service_DLP_GooglePrivacyDlpV2PublishToPubSub');
class_alias(GooglePrivacyDlpV2PublishToStackdriver::class, 'Google_Service_DLP_GooglePrivacyDlpV2PublishToStackdriver');
class_alias(GooglePrivacyDlpV2QuasiId::class, 'Google_Service_DLP_GooglePrivacyDlpV2QuasiId');
class_alias(GooglePrivacyDlpV2QuasiIdField::class, 'Google_Service_DLP_GooglePrivacyDlpV2QuasiIdField');
class_alias(GooglePrivacyDlpV2QuasiIdentifierField::class, 'Google_Service_DLP_GooglePrivacyDlpV2QuasiIdentifierField');
class_alias(GooglePrivacyDlpV2QuoteInfo::class, 'Google_Service_DLP_GooglePrivacyDlpV2QuoteInfo');
class_alias(GooglePrivacyDlpV2Range::class, 'Google_Service_DLP_GooglePrivacyDlpV2Range');
class_alias(GooglePrivacyDlpV2RecordCondition::class, 'Google_Service_DLP_GooglePrivacyDlpV2RecordCondition');
class_alias(GooglePrivacyDlpV2RecordKey::class, 'Google_Service_DLP_GooglePrivacyDlpV2RecordKey');
class_alias(GooglePrivacyDlpV2RecordLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2RecordLocation');
class_alias(GooglePrivacyDlpV2RecordSuppression::class, 'Google_Service_DLP_GooglePrivacyDlpV2RecordSuppression');
class_alias(GooglePrivacyDlpV2RecordTransformation::class, 'Google_Service_DLP_GooglePrivacyDlpV2RecordTransformation');
class_alias(GooglePrivacyDlpV2RecordTransformations::class, 'Google_Service_DLP_GooglePrivacyDlpV2RecordTransformations');
class_alias(GooglePrivacyDlpV2RedactConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2RedactConfig');
class_alias(GooglePrivacyDlpV2RedactImageRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2RedactImageRequest');
class_alias(GooglePrivacyDlpV2RedactImageResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2RedactImageResponse');
class_alias(GooglePrivacyDlpV2Regex::class, 'Google_Service_DLP_GooglePrivacyDlpV2Regex');
class_alias(GooglePrivacyDlpV2ReidentifyContentRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2ReidentifyContentRequest');
class_alias(GooglePrivacyDlpV2ReidentifyContentResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2ReidentifyContentResponse');
class_alias(GooglePrivacyDlpV2ReplaceDictionaryConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2ReplaceDictionaryConfig');
class_alias(GooglePrivacyDlpV2ReplaceValueConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2ReplaceValueConfig');
class_alias(GooglePrivacyDlpV2ReplaceWithInfoTypeConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2ReplaceWithInfoTypeConfig');
class_alias(GooglePrivacyDlpV2RequestedOptions::class, 'Google_Service_DLP_GooglePrivacyDlpV2RequestedOptions');
class_alias(GooglePrivacyDlpV2RequestedRiskAnalysisOptions::class, 'Google_Service_DLP_GooglePrivacyDlpV2RequestedRiskAnalysisOptions');
class_alias(GooglePrivacyDlpV2Result::class, 'Google_Service_DLP_GooglePrivacyDlpV2Result');
class_alias(GooglePrivacyDlpV2RiskAnalysisJobConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2RiskAnalysisJobConfig');
class_alias(GooglePrivacyDlpV2Row::class, 'Google_Service_DLP_GooglePrivacyDlpV2Row');
class_alias(GooglePrivacyDlpV2SaveFindings::class, 'Google_Service_DLP_GooglePrivacyDlpV2SaveFindings');
class_alias(GooglePrivacyDlpV2Schedule::class, 'Google_Service_DLP_GooglePrivacyDlpV2Schedule');
class_alias(GooglePrivacyDlpV2SelectedInfoTypes::class, 'Google_Service_DLP_GooglePrivacyDlpV2SelectedInfoTypes');
class_alias(GooglePrivacyDlpV2SensitivityScore::class, 'Google_Service_DLP_GooglePrivacyDlpV2SensitivityScore');
class_alias(GooglePrivacyDlpV2StatisticalTable::class, 'Google_Service_DLP_GooglePrivacyDlpV2StatisticalTable');
class_alias(GooglePrivacyDlpV2StorageConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2StorageConfig');
class_alias(GooglePrivacyDlpV2StorageMetadataLabel::class, 'Google_Service_DLP_GooglePrivacyDlpV2StorageMetadataLabel');
class_alias(GooglePrivacyDlpV2StoredInfoType::class, 'Google_Service_DLP_GooglePrivacyDlpV2StoredInfoType');
class_alias(GooglePrivacyDlpV2StoredInfoTypeConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2StoredInfoTypeConfig');
class_alias(GooglePrivacyDlpV2StoredInfoTypeStats::class, 'Google_Service_DLP_GooglePrivacyDlpV2StoredInfoTypeStats');
class_alias(GooglePrivacyDlpV2StoredInfoTypeVersion::class, 'Google_Service_DLP_GooglePrivacyDlpV2StoredInfoTypeVersion');
class_alias(GooglePrivacyDlpV2StoredType::class, 'Google_Service_DLP_GooglePrivacyDlpV2StoredType');
class_alias(GooglePrivacyDlpV2SummaryResult::class, 'Google_Service_DLP_GooglePrivacyDlpV2SummaryResult');
class_alias(GooglePrivacyDlpV2SurrogateType::class, 'Google_Service_DLP_GooglePrivacyDlpV2SurrogateType');
class_alias(GooglePrivacyDlpV2Table::class, 'Google_Service_DLP_GooglePrivacyDlpV2Table');
class_alias(GooglePrivacyDlpV2TableDataProfile::class, 'Google_Service_DLP_GooglePrivacyDlpV2TableDataProfile');
class_alias(GooglePrivacyDlpV2TableLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2TableLocation');
class_alias(GooglePrivacyDlpV2TableOptions::class, 'Google_Service_DLP_GooglePrivacyDlpV2TableOptions');
class_alias(GooglePrivacyDlpV2TaggedField::class, 'Google_Service_DLP_GooglePrivacyDlpV2TaggedField');
class_alias(GooglePrivacyDlpV2ThrowError::class, 'Google_Service_DLP_GooglePrivacyDlpV2ThrowError');
class_alias(GooglePrivacyDlpV2TimePartConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2TimePartConfig');
class_alias(GooglePrivacyDlpV2TimeZone::class, 'Google_Service_DLP_GooglePrivacyDlpV2TimeZone');
class_alias(GooglePrivacyDlpV2TimespanConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2TimespanConfig');
class_alias(GooglePrivacyDlpV2TransformationConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2TransformationConfig');
class_alias(GooglePrivacyDlpV2TransformationDescription::class, 'Google_Service_DLP_GooglePrivacyDlpV2TransformationDescription');
class_alias(GooglePrivacyDlpV2TransformationDetails::class, 'Google_Service_DLP_GooglePrivacyDlpV2TransformationDetails');
class_alias(GooglePrivacyDlpV2TransformationDetailsStorageConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2TransformationDetailsStorageConfig');
class_alias(GooglePrivacyDlpV2TransformationErrorHandling::class, 'Google_Service_DLP_GooglePrivacyDlpV2TransformationErrorHandling');
class_alias(GooglePrivacyDlpV2TransformationLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2TransformationLocation');
class_alias(GooglePrivacyDlpV2TransformationOverview::class, 'Google_Service_DLP_GooglePrivacyDlpV2TransformationOverview');
class_alias(GooglePrivacyDlpV2TransformationResultStatus::class, 'Google_Service_DLP_GooglePrivacyDlpV2TransformationResultStatus');
class_alias(GooglePrivacyDlpV2TransformationSummary::class, 'Google_Service_DLP_GooglePrivacyDlpV2TransformationSummary');
class_alias(GooglePrivacyDlpV2TransientCryptoKey::class, 'Google_Service_DLP_GooglePrivacyDlpV2TransientCryptoKey');
class_alias(GooglePrivacyDlpV2Trigger::class, 'Google_Service_DLP_GooglePrivacyDlpV2Trigger');
class_alias(GooglePrivacyDlpV2UnwrappedCryptoKey::class, 'Google_Service_DLP_GooglePrivacyDlpV2UnwrappedCryptoKey');
class_alias(GooglePrivacyDlpV2UpdateDeidentifyTemplateRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2UpdateDeidentifyTemplateRequest');
class_alias(GooglePrivacyDlpV2UpdateInspectTemplateRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2UpdateInspectTemplateRequest');
class_alias(GooglePrivacyDlpV2UpdateJobTriggerRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2UpdateJobTriggerRequest');
class_alias(GooglePrivacyDlpV2UpdateStoredInfoTypeRequest::class, 'Google_Service_DLP_GooglePrivacyDlpV2UpdateStoredInfoTypeRequest');
class_alias(GooglePrivacyDlpV2Value::class, 'Google_Service_DLP_GooglePrivacyDlpV2Value');
class_alias(GooglePrivacyDlpV2ValueFrequency::class, 'Google_Service_DLP_GooglePrivacyDlpV2ValueFrequency');
class_alias(GooglePrivacyDlpV2VersionDescription::class, 'Google_Service_DLP_GooglePrivacyDlpV2VersionDescription');
class_alias(GooglePrivacyDlpV2WordList::class, 'Google_Service_DLP_GooglePrivacyDlpV2WordList');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_DLP_GoogleProtobufEmpty');
class_alias(GoogleRpcStatus::class, 'Google_Service_DLP_GoogleRpcStatus');
class_alias(GoogleTypeDate::class, 'Google_Service_DLP_GoogleTypeDate');
class_alias(GoogleTypeTimeOfDay::class, 'Google_Service_DLP_GoogleTypeTimeOfDay');
